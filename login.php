
<?php 
    require_once("header.php");
?>
    <div class="fondo">
    </div>
    <div class="menu-login">
        <h2 class="signUp">Sign Up</h2>
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