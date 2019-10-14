<?php include_once("head.php"); ?>
<?php include_once("header.php"); ?>
<main class="contact">
	<div>
		<h2 class="contact__title">Contactanos</h2>
	</div>
	<div class="background_contact">

		<div class="form_contact">
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
				<div class="container__bottonContact">
					<button class="bottonContact" type="submit"><img src="image/contacto/paper-plane.png" alt="">Enviar mensaje</button>
				</div>
			</form>
		</div>
		<div class="data_randfood">
			<p><i class="fas fa-paper-plane"></i>info@randfood.com.ar</p>
			<p><i class="fas fa-phone-alt"></i>11 50685947</p>
			<p><i class="fas fa-map-marker-alt"></i>Av. Callao 506</p>
			<img src="image/contacto/pizzas.png" alt="">
		</div>
		
	</div>


	<div class="maps_contact">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.0422246794883!2d-58.394720084772544!3d-34.603093764972066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac04fbb666d%3A0xf1de8ee587a6290e!2sAv.%20Callao%20506%2C%20C1022AAS%20CABA!5e0!3m2!1ses-419!2sar!4v1569262316117!5m2!1ses-419!2sar" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>


	
</main>   
<?php include_once("footer.php"); ?>