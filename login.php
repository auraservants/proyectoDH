<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style-login.css">
    <title>Document</title>
</head>
<?php 
    require_once("header.php");
?>
<body id="body">
    <div class="fondo">
    </div>
    <div class="signUp">
        <h2>Sign Up</h2>
        <form action="validar.php" method="POST">
            <div class="formSignUp">
                <p>
                    <label for="nombre"></label>
                    <input class="formItems" type="text" name="nombre" placeholder="Nombre">
                </p>
                <p>
                    <label for="apellido"></label>
                    <input class="formItems" type="text" name="apellido" placeholder="Apellido">
                </p>
                <p>
                    <label for="email"></label>
                    <input class="formItems" type="email" name="email" placeholder="Email">
                </p>
                <p>
                    <label for="password"></label>
                    <input class="formItems" type="password" name="password" placeholder="Contraseña">
                </p>
                <p>
                    <input class="bottonSignUp" type="submit" value="Sign Up">
                </p>
            </div>
        </form> 
    </div>
</body>
</html>