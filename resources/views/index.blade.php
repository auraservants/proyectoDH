@extends('layout')

@section('main')

<main>
	<section class="fotoDeFondo">
		<div class="text">
			<h1>La forma más genial de <span>comer.</span></h1>
			<h2>Tán fácil como elegir tus ingredientes y listo!</h2>
		</div>
	</section>
	<section class="steps container" id="steps">
		<h3>Randfood es muy simple</h3>
		<p class="after">Sigue estos pasos para armar tu plato</p>
		<div class="card">
			<div class="content-card">
				<div class="steps-img">
					<img src="image/step1.jpg" alt="">
				</div>
				<div class="steps-text">
					<h4>Elige los ingredientes</h4>
					<p>De acuerdo a tus gustos.</p>
				</div>
			</div>
			<div class="content-card">
				<div class="steps-img">
					<img src="image/step2.jpg" alt="">
				</div>
				<div class="steps-text">
					<h4>Descubre los platos disponibles</h4>
					<p>Con tus ingredientes.</p>
				</div>
			</div>
			<div class="content-card">
				<div class="steps-img">
					<img src="image/step3.jpg" alt="">
				</div>
				<div class="steps-text">
					<h4>Selecciona tu plato!</h4>
					<p>Y espera para deleitarte.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="about container" id="about">
		<h3>Que es Randfood?</h3>
		<p class="after">Es la medida perfecta entre tradición e innovación.</p>
		<div class="content-about">
			<div class="about-img">
				<img src="image/about.jpg" alt="">
			</div>
			<div class="about-text">
				<p>Es el método que diseñamos para poder escucharte y ofrecerte lo que realmente te gusta,
				permitiendote a su vez conocer cosas nuevas.</p></br>
				<p>Elegis ingredientes que sabes que te gustan,</p>
				<p>y seleccionas tu plato o...</p>
				<p class="about-text-orange">Te arriegas y probas Randfood!</p>
			</div>
		</div>
    </section>


	<section class="ingredients_slide" id="slide_to_shop">
        <div class="box_slide_shop">
            <img src="image/642275-POM9I1-943.jpg" alt="plates of food">
         <div class="text_slide_shop">
            <h1>Armá tu plato ideal</h1>
            <p>Más sano, Más rico, Más original</p>
            <a href="/products" class="button_slide_shop btn btn--orange btn--large">Comenzar</a>
         </div>
        </div>
    </section>


	<section class="features container" id="features">
		<div>
			<h3>En Randfood te aseguramos</h3>
			<p class="after">Todo lo necesario para que tu experiencia sea la mejor.</p>
			<div class="features">
				<div class="div-features">
					<img src="image/features1.png" alt="">
					<h4>Calidad Premium</h4>
                    <p>Ingredientes de primera calidad<br>
                        elegidos por nuestros expertos.</p>
				</div>
				<div class="div-features">
					<img src="image/features2.png" alt="">
					<h4>Personal Calificado</h4>
                    <p>Altamente entrenado y preparado <br>
                        para tus exigencias.</p>
				</div>
				<div class="div-features">
					<img src="image/features3.png" alt="">
					<h4>Rápida Ejecución</h4>
                    <p>Ya no tienes que esperar <br>
                        una hora por tu comida.</p>
				</div>
				<div class="div-features">
					<img src="image/features4.png" alt="">
					<h4>Devolución Segura</h4>
                    <p>De haber algun error con tu pedido<br>
                         te devolvemos tu plata.</p>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection
