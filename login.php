<?php include_once("head.php"); ?>
<?php include_once("header.php"); ?>

<section id="login">
	<div class="users-background login">
		<div class="anotherOption login">
			<p>No tienes una cuenta?</p>
			<p>Registrate <a href="signup.php">acá</a></p>
		</div>
	</div>
	<div class="users-login">
		<h2 class="users-title">Log In</h2>
		<form action="validar.php" method="POST">
			<div class="users-form">
				<div>
					<input class="form-items" type="text" name=user placeholder="Usuario">
				</div>
				<div>
					<input class="form-items" type="password" name="password" placeholder="Contraseña">
				</div>
				<div>
					<input class="users-btn" type="submit" value="Sign Up">
				</div>
			</div>
		</form> 
	</div>
</section>


<?php include_once("footer.php"); ?>
