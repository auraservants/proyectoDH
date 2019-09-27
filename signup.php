<?php include_once("head.php"); ?>
<?php include_once("header.php"); ?>

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
            <form action="profile-miPerfil.php" method="POST">
                <div class="users-form">
                    <div>
                        <input class="form-items" type="text" name="nombre" placeholder="Nombre y Apellido">
                    </div>
                    <div>
                        <input class="form-items" type="email" name="email" placeholder="Email">
                    </div>
                    <div>
                        <input class="form-items" type="password" name="password" placeholder="Contraseña">
                    </div>
                    <div>
                        <input class="btn btn--orange btn--large" type="submit" value="Sign Up">
                    </div>
                </div>
            </form> 
        </div>
    </div>
    
</section>


<?php include_once("footer.php"); ?>

