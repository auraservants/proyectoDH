@extends('layout')

@section('main')

<main class="products">
	<div class="container__products__title">
		<div class="products__title">
			<h1>Armá tu <span>plato!</span></h1>
			<p>Elegí algún ingrediente que desees que lleve tu plato... ó elegí varios! </br> y mirá los <span>platos disponibles</span> con los ingredientes que elegiste!</p>
		</div>
		<img src="image/productos/plate-title.png" alt="">
		<p class="ingredients__choice">Elegí los ingredientes de tu plato!</p>
	</div>
	<div class="ingredients__selected__container">
		<p class="ingredients__selected__title">Ingredientes elegidos:</p>
		<div class="ingredients__selected">
			<!--<p class="not__selected">- Aun no ha seleccionado ningún ingrediente -</p>-->

		</div>

	</div>
	
	<div class="container__products__config">
		<div class="products__progress">
			<div class="line__progress__bottom">
				<div class="line__ingredients line__progress__top" style="width: 100%">
				</div>
			</div>
			<p class="detail__line__progress detail__ingredients">Podes elegir 21 de nuestros 21 ingredientes</p>
		</div>
		<!--<div class="products__categories">
			<form action="" method="POST">
				<label for="">Filtrar por categoria:</label>
				<select name="categorias">
					<option>Categorias</option>
					@for($i=0; $i < count($ingredientsCategories); $i++)
					<option value="$i: $ingredientsCategories[$i]['name']">{{ $ingredientsCategories[$i]["name"] }}</option>
					@endfor
				</select>	
			</form>
		</div>-->
	</div>
	<div class="container__ingred">
		<!--<div class="arrow__left__ingredients">
			<i class="fas fa-chevron-left"></i>
		</div>-->
		<div class="container__ingredients">
			@foreach ($ingredients as $ingredient)
				<button class="button__ingredient" type="submit" id="{{$ingredient->id}}" onclick="myFunction({{$ingredient->id}})">
					<img src="/storage/{{ $ingredient->image }}" alt="">
					<p>Agregar</p>
					<i class="fas fa-minus-circle"></i>
				</button>			
			@endforeach			
		</div>

		<!--<div class="arrow__right__ingredients">
			<i class="fas fa-chevron-right"></i>
		</div>-->
	</div>

	<div class="container__plates">
		<p class="plates__choice">Agregá el plato que prefieras al carrito y listo!</p>
		<div class="container__products__config">
			<div class="products__progress">
				<div class="line__progress__bottom">
					<div class="line__plates line__progress__top" style="width: 100%">
					</div>
				</div>
				<p class="detail__line__progress detail__plates">Podes elegir 4 de nuestros 4 platos</p>
			</div>
			<!--<div class="products__categories">
				<form action="" method="POST">
					<label for="">Filtrar por categoria:</label>
					<select name="categorias">
						<option>Categorias</option>
						@for($i=0; $i < count($categories); $i++)
						<option value="$i: $categories[$i]['name']">{{ $categories[$i]["name"] }}</option>
						@endfor
					</select>	
				</form>
			</div>-->
		</div>
		<div class="container__card__plate">
			<!--<div class="arrow__left__ingredients">
				<i class="fas fa-chevron-left"></i>
			</div>-->
			
			
			<div class="container__card__plates">
				
			@foreach($plates as $plate)
				<div class="card__plates">
					<div class="plates__description">
						<p><i class="fas fa-info-circle"></i>{{ $plate["description"] }}</p>
						<div class="plates__image"></div>
					</div>
					<div class="plates__data">
						<h4>{{ $plate["name"] }}</h4>
						<p>$ {{ $plate["price"] }}</p>
						<div class="cart-button"><a href="#">Agregar <i class="fas fa-shopping-basket"></i></a></div>	
					</div>
				</div>
			@endforeach



			</div>
			
			<!--<div class="arrow__right__ingredients">
				<i class="fas fa-chevron-right"></i>
			</div>-->					
		</div>
		
	</div>



</main>
@endsection