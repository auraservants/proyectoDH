<?php
    function errors(){
        $errores = [];
        if(!empty($_POST)) {    
            if(empty($_POST["name"])) {
                $errores["name"] = "No ingresaste tu nombre";
            } 
            if(empty($_POST["email"])) {
                $errores["email"] = "No ingresaste tu email";
            } else {
                if (!is_valid_email($_POST["email"])) {
                    $errores["email"] = "El email es invalido";
                }
            }
            if(empty($_POST["password"])) {
                $errores["password"] = "No ingresaste tu contraseña";
            } else {
                if(strlen($_POST["password"]) < 8){
                    $errores["password"] = "Tu contraseña debe tener 8 caracteres o más";
                }
            }
        }
        return $errores;
    }

    function register($errores){
        $errorUser = [];
        if(!empty($_POST)) {
            if(empty($errores)) {
                session_start();
                foreach($_POST as $clave => $valor){
                    $_SESSION[$clave] = $valor;
                }               
                $users = getUsers();
                $newUser = searchUser($users);
                if(!isset($newUser)){
                    $user = createUser($users); 
                    $users[] = $user;
                    $json = json_encode($users);
                    file_put_contents("js/users.json", $json);  
                    remember();
                    $_SESSION["login"] = true;                  
                    header("Location: profile-miPerfil.php"); 
                } else {
                    $errorUser["user"] = "El usuario ya existe";
                }  
            } 
        return $errorUser;   
        }
    }
   
    function is_valid_email($str){
        return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
    }

    function getUsers(){
        $json = file_get_contents("js/users.json");
        $users = json_decode($json, true);
        return $users;
    }

    function searchUser($users){
        if($users){
            foreach($users as $user) {
                foreach($user as $clave => $valor){
                    if($clave === "email"){
                        if ($valor === $_SESSION["email"]) {
                            return $user;
                        }
                    }
                }           
            } 
        } 
    }

    function passwordUser($users){
        if($users){
            foreach($users as $user) {
                foreach($user as $clave => $valor){
                    if($clave === "password"){
                        if (password_verify($_POST["password"], $valor)) {
                            return true;
                        }
                    }
                }           
            } 
        } 
    }

    function createUser($users){
        if(empty($users)){
            $id = 1;
        } else{
            $id = count($users) + 1;
        }
        $user = [
            "id" => $id,
            "name" => $_POST["name"],
            "email" => $_POST["email"],
            "password" => encryptPassword($_POST["password"]),
        ];
        return $user;
    }

    function encryptPassword(){
        return password_hash($_POST["password"], PASSWORD_DEFAULT);
    } 

    function checkUser(){
        $errores = [];
        if(!empty($_POST)) {
            session_start();
            foreach($_POST as $clave => $valor){
                $_SESSION[$clave] = $valor;
            }           
            $users = getUsers();
            $user = searchUser($users);
            if($user === null) {
                $errores["email"] = "Tu email no existe, regístrarte";
            } else { 
                if(passwordUser($users) !== true){
                    $errores["password"] = "Tu contraseña es invalida";
                } else {   
                    remember();
                    foreach($user as $clave => $valor){
                        $_SESSION[$clave] = $valor;
                    } 
                    $_SESSION["login"] = true;              
                    header("Location: profile-miPerfil.php");
                }
            }    
        }
        return $errores;  
    }
    function remember(){
        if(!empty($_POST) && !empty($_POST["remember"])){
            foreach($_POST as $clave => $valor){
                if($clave === "password"){
                    setcookie($clave, password_hash($valor, PASSWORD_DEFAULT), time()+60*60*24*30);
                } else {
                    setcookie($clave, $valor, time()+60*60*24*30);
                }
            }      
        }          
    }
    function closeUser(){
        if(!empty($_POST["close"])){
            foreach($_COOKIE as $clave => $valor){
                setcookie($clave, "", time()-1);
            }  
            session_unset();
            session_destroy();
            header("Location: login.php"); 
        }
    }
    function loginRemember(){
        if(!empty($_COOKIE["email"])){
            session_start();
            $users = getUsers();
            foreach($users as $user) {
                foreach($user as $clave => $valor){
                    if($clave === "email"){
                        if ($valor === $_COOKIE["email"]) { 
                            foreach($user as $clave => $valor){
                                $_SESSION[$clave] = $valor;
                            }  
                            $_SESSION["login"] = true;
                            header("Location: profile-miPerfil.php"); 
                        }
                    }
                }           
            }        
        }   
    }
    
    function photoProfile($users){  
        if($_FILES){
            $file = $_FILES["photo"];
            foreach($users as $clave => $valor2) {
                foreach($valor2 as $clave2 => $valor){
                    if($clave2 === "email"){
                        if ($valor === $_SESSION["email"]) {
                            $id = $valor2["id"];
                            $users[$clave]["photo"] = "pictures/" . $id . ".jpg";
                        }
                    }
                }           
            } 
            move_uploaded_file($file["tmp_name"], "pictures/" . $id . ".jpg"); 
            $json = json_encode($users);
            file_put_contents("js/users.json", $json);               
        }
        return $users;  
    }

    function modifyData($users){  
        if($_POST){
            foreach($users as $clave => $valor2) {
                foreach($valor2 as $clave2 => $valor){
                    if($clave2 === "email"){
                        if ($valor === $_SESSION["email"]) {
                            $id = $valor2["id"];
                            $users[$clave]["photo"] = "pictures/" . $id . ".jpg";
                        }
                    }
                }           
            } 
            move_uploaded_file($file["tmp_name"], "pictures/" . $id . ".jpg"); 
            $json = json_encode($users);
            file_put_contents("js/users.json", $json);               
        }
        return $users;  
    }
?> 