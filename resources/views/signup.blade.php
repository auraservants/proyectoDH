@extends('layout')

@section('main')
<main id="signup">
    <section class="container-users">
        <div class="users-background signup">
            <div class="another-option another-option-web">
                <p>Ya tienes una cuenta?</p>
                <p>Ingresá <a href="/login">acá</a></p>
            </div>
        </div>
        <div class="container-users-signup">
            <div class="users-signup">
                <h2 class="users-title">Registrarse</h2>
                <form action="signup.php" method="post" enctype="multipart/form-data">
                    <div class="users-form">
                        <div>
                            <input class="form-items" type="text" name="name" placeholder="Nombre y Apellido" value="<?php if(isset($_POST["name"]) && empty($errores["name"])) { echo $_POST["name"]; } ?>">
                            <span class='error'>
                                <?php if (isset($errores["name"])): ?>
                                    <p><?= $errores["name"]?></p>
                                <?php endif ?>
                            </span> 
                        </div>
                        <div>
                            <input class="form-items" type="text" name="email" placeholder="Email" value="<?php if(isset($_POST["email"]) && empty($errores["email"])) { echo $_POST["email"]; } ?>">
                            <span class='error'>
                                <?php if (isset($errores["email"])): ?>
                                    <p><?= $errores["email"]?></p>
                                <?php endif ?>
                            </span> 
                        </div>
                        <div>
                            <input class="form-items" type="password" name="password" placeholder="Contraseña" value="<?php if(isset($_POST["password"]) && empty($errores["password"])) { echo $_POST["password"]; } ?>">
                            <span class='error'>
                                <?php if (isset($errores["password"])): ?>
                                    <p><?= $errores["password"]?></p>
                                <?php endif ?>
                            </span>
                        </div>
                        <div>
                            <span class='error'>
                                <?php if (isset($errorUser["user"])): ?>
                                    <p><?= $errorUser["user"]?></p>
                                <?php endif ?>
                            </span>
                        </div>   
                        <div class="remember">
                            <label for="remember">Recuerdame</label>
                            <input type="checkbox" name="remember" value="remember">
                        </div>    
                                            
                        <div>
                            <input class="btn btn--orange btn--large" type="submit" value="Enviar">
                        </div>
                       
                    </div>
                </form> 
                <div class="another-option another-option-movile">
                    <p>Ya tienes una cuenta?</p>
                    <p>Ingresá <a href="login.php">acá</a></p>
                </div>                 
            </div>
        </div>

    </section>
</main>
@endsection