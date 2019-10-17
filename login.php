<?php 
	include_once("head.php"); 
	include_once("header.php");
	require_once("funciones.php");

	$errores = checkUser();
	if(isset($_SESSION["login"]) && $_SESSION["login"] == true) {
		header("Location: profile-miPerfil.php");
	}
?>


<section id="login">
	<div class="users-background login">
		<div class="another-option">
			<p>No tienes una cuenta?</p>
			<p>Registrate <a href="signup.php">acá</a></p>
		</div>
	</div>
	<div class="container-users-login">
		<div class="users-login">
			<h2 class="users-title">Iniciar sesión</h2>
			<form action="login.php" method="post">
				<div class="users-form">
					<div>
						<input class="form-items" type="text" name="email" value="<?php if(isset($_POST["email"]) && empty($errores["email"])) { echo $_POST["email"]; } ?>" placeholder="Email" >
						<span class='error'>
							<?php if (isset($errores["email"])): ?>
								<p><?= $errores["email"]?></p>
							<?php endif ?>
                    	</span>
					</div>
					<div>
						<input class="form-items" type="password" name="password" value="<?php if(isset($_POST["password"]) && empty($errores["password"])) { echo $_POST["password"]; } ?>" placeholder="Contraseña">
						<span class='error'>
							<?php if (isset($errores["password"])): ?>
								<p><?= $errores["password"]?></p>
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
					<p class="forget_pass"><a href="#">¿Olvidaste tu contraseña?</a></p>
				</div>
			</form> 
		</div>
	</div>	
</section>


<?php include_once("footer.php"); ?>
