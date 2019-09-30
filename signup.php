<?php
/* 
function encriptar($textoPlano) {
    $encript = password_hash($textoPlano, PASSWORD_DEFAULT);
    return $encript;
}
function aArray($unJSON) {
  return json_decode($unJSON);
}
function encriptar($textoPlano) {
    $encript = password_hash($textoPlano, PASSWORD_DEFAULT);
    return $encript;
}
function aArray($unJSON) {
    return json_decode($unJSON);
} 
function agregarUsuario($jsonUsuarios, $usuarioNuevo) {
  $arrUsuarios = json_decode($jsonUsuarios, true);
  array_push($arrUsuarios, $usuarioNuevo);
  return json_encode($arrUsuarios);

}*/
    include_once("head.php");
    include_once("header.php");
    function validationEmpty(String $name) {
        if($_POST) {
            if(empty($_POST[$name])) {
                ?>
                <div class="error">
                    <p class="error__msg">Por favor, ingrese su <?= $name ?>.</p>
                </div>
                <?php
            } else {
                return $_POST[$name];
            }
        }
    }/* 
    function validationRegistered() {
        $usrs = file_get_contents("./js/users.json");
        $usrsArr = json_decode($usrs, true);
        foreach($usrsArr as $usrs) {
            if($usrs["email"] === $_POST["email"]) {
                ?>
                <div class="error">
                    <p class="error__msg">Por favor, ingrese su <?= $name ?>.</p>
                </div>
                <?php
            }
        }
    } */
    function usrCreate() {
        if($_POST) {
            $usrs = file_get_contents("./js/users.json");
            $usrsArr = json_decode($usrs, true);
            foreach($usrsArr as $usrs) {
                if($usrs["email"] === $_POST["email"]) {
                    $msg = "Este email ya se encuentra registrado.";
                    return false;
                }
            }
            if(!empty($_POST["nombre"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
                $newUsr = [
                    "nombre"=> $_POST["nombre"],
                    "email"=> $_POST["email"],
                    "contrasena"=> password_hash($_POST["password"], PASSWORD_DEFAULT)
                ];
                $_POST["nombre"] = "";
                $_POST["email"] = "";
                $_POST[""] = "";
                $usrs = file_get_contents("./js/users.json");
                $usrsArr = json_decode($usrs, true);
                array_push($usrsArr, $newUsr);
                $usrsNew = json_encode($usrsArr);
                file_put_contents("./js/users.json", $usrsNew);
            }
            header('Location: ./profile-miPerfil.php');
        }
    }
    usrCreate();
    // profile-miPerfil.php
?>

<section id="signup">
    <div class="users-background signup">
        <div class="anotherOption signup">
            <p>Ya tienes una cuenta?</p>
            <p>Ingresá <a href="login.php">acá</a></p>
        </div>
    </div>
    <div class="users-signup">
        <div>
            <h2 class="users-title">Sign Up</h2>
            <form action="signup.php" method="POST">
                <div class="users-form">
                    <div>
                        <input class="form-items" type="text" name="nombre" placeholder="Nombre y Apellido" value="<?php if(!$_POST) {
                            echo "";
                        } else {
                            echo $_POST["nombre"];
                        }?>">
                    </div>
                    <?php validationEmpty("nombre");
                    ?>
                    <div>
                        <input class="form-items" type="email" name="email" placeholder="Email"  value="<?php if(!$_POST) {
                            echo "";
                        } else {
                            echo $_POST["email"];
                        }?>">
                        
                    </div>
                    
                    <div class="error">
                        <p class="error__msg"></p>
                    </div>
                    <?php validationEmpty("email");
                        if($_POST){

                            
                        }

                    ?>
                    <div>
                        <input class="form-items" type="password" name="password" placeholder="Contraseña"  value="<?php if(!$_POST) {
                            echo "";
                        } else {
                            echo $_POST["password"];
                        }?>">
                    </div>
                    <?php validationEmpty("password");
                    ?>
                    <div>
                        <input class="btn btn--orange btn--large" type="submit" value="Sign Up">
                    </div>
                </div>
            </form> 
        </div>
    </div>
    
</section>


<?php 
include_once("footer.php"); ?>