<?php include_once("head.php"); ?>
<?php include_once("header.php"); ?>
<main class="contact">
	<h2 class="contact__title">Contactanos</h2>
	<form action="validar.php" method="post" class="contact__form">
		<div>
			<input class="contact__input" type="text" name="name" placeholder="Nombre:">
		</div>
		<div>
			<input class="contact__input" type="email" name="email" placeholder="Email:">
		</div>
		<div>
			<textarea class="contact__input mensaje" name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Escribe tu mensaje..."></textarea>
		</div>
		<div>
			<button class="bottonContact" type="submit">Enviar</button>
		</div>
	</form>
</main>   
<?php include_once("footer.php"); ?>