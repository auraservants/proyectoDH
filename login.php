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
		<div>
			<h2 class="users-title">Log In</h2>
			<form action="profile-favoritos.php" method="POST">
				<div class="users-form">
					<div>
						<input class="form-items" type="text" name=user placeholder="Usuario">
					</div>
					<div>
						<input class="form-items" type="password" name="password" placeholder="Contraseña">
					</div>
					<div class="remember_login">
						<input type="checkbox" value="Recuerdame">Recuerdame
					</div>
					<div>
						<input class="users-btn" type="submit" value="Log In">
					</div>
					<p class="forget_pass"><a href="#">¿Olvidaste tu contraseña?</a></p>
				</div>
			</form> 
		</div>
	</div>	
</section>


<?php include_once("footer.php"); ?>
