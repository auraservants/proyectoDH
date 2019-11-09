<?php include_once("head.php"); ?>
<?php include_once("header.php"); ?>

<?php
$dsn = 'mysql:dbname=randfood;host=localhost;port=3306';
$username = 'root';
$password = '';
$error = null;

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $db->prepare("SELECT * FROM plates");
    $query->execute();
    $plates = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>

<section class="products">
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
			<button type="submit">
				<p>Tomate</p>
				<i class="fas fa-times"></i>
			</button>
			<button type="submit">
				<p>Tomate</p>
				<i class="fas fa-times"></i>
			</button>
			<button type="submit">
				<p>Tomate</p>
				<i class="fas fa-times"></i>
			</button>
			<button type="submit">
				<p>Tomate</p>
				<i class="fas fa-times"></i>
			</button>
			<button type="submit">
				<p>Tomate</p>
				<i class="fas fa-times"></i>
			</button>
			<button type="submit">
				<p>Tomate</p>
				<i class="fas fa-times"></i>
			</button>
			<button type="submit">
				<p>Tomate</p>
				<i class="fas fa-times"></i>
			</button>
			<button type="submit">
				<p>Tomate</p>
				<i class="fas fa-times"></i>
			</button>
			<button type="submit">
				<p>Tomate</p>
				<i class="fas fa-times"></i>
			</button>
			<button type="submit">
				<p>Tomate</p>
				<i class="fas fa-times"></i>
			</button>
		</div>	
	</div>
	
	<div class="container__products__config">
		<div class="products__progress">
			<div class="line__progress__bottom">
				<div class="line__progress__top">
				</div>
			</div>
			<p class="detail__line__progress">Podes elegir 85 de nuestros 100 ingredientes</p>
		</div>
		<div class="products__categories">
			<form action="" method="POST">
				<label for="">Filtrar por categoria:</label>
				<select name="categorias">
					<option>Categorias</option> 
					<option value="categoria1">categoria 1</option> 
					<option value="categoria2">categoria 2</option>
					<option value="categoria3">categoria 3</option>
				</select>	
			</form>
		</div>
	</div>
	<div class="container__ingredients">
		<div class="arrow__left__ingredients">
			<i class="fas fa-chevron-left"></i>
		</div>
		<button type="submit" class="card__ingredients">
			<img src="image/ingredients/1.jpg" alt="">
			<p>Agregar</p>
		</button>
		<button type="submit" class="card__ingredients">
			<img src="image/ingredients/1.jpg" alt="">
			<p>Agregar</p>
		</button>
		<button type="submit" class="card__ingredients">
			<img src="image/ingredients/1.jpg" alt="">
			<p>Agregar</p>
		</button>
		<button type="submit" class="card__ingredients">
			<img src="image/ingredients/1.jpg" alt="">
			<p>Agregar</p>
		</button>
		<button type="submit" class="card__ingredients">
			<img src="image/ingredients/1.jpg" alt="">
			<p>Agregar</p>
		</button>
		<button type="submit" class="card__ingredients">
			<img src="image/ingredients/1.jpg" alt="">
			<p>Agregar</p>
		</button>
		<button type="submit" class="card__ingredients">
			<img src="image/ingredients/1.jpg" alt="">
			<p>Agregar</p>
		</button>
		<button type="submit" class="card__ingredients">
			<img src="image/ingredients/1.jpg" alt="">
			<p>Agregar</p>
		</button>
		<button type="submit" class="card__ingredients">
			<img src="image/ingredients/1.jpg" alt="">
			<p>Agregar</p>
		</button>
		<button type="submit" class="card__ingredients">
			<img src="image/ingredients/1.jpg" alt="">
			<p>Agregar</p>
		</button>
		<button type="submit" class="card__ingredients">
			<img src="image/ingredients/1.jpg" alt="">
			<p>Agregar</p>
		</button>
		<button type="submit" class="card__ingredients">
			<img src="image/ingredients/1.jpg" alt="">
			<p>Agregar</p>
		</button>
		<div class="arrow__right__ingredients">
			<i class="fas fa-chevron-right"></i>
		</div>
	</div>

	<div class="container__plates">
		<p class="plates__choice">Agregá el plato que prefieras al carrito y listo!</p>
		<div class="container__products__config">
			<div class="products__progress">
				<div class="line__progress__bottom">
					<div class="line__progress__top">
					</div>
				</div>
				<p class="detail__line__progress">Podes elegir 15 de nuestros 50 platos</p>
			</div>
			<div class="products__categories">
				<form action="" method="POST">
					<label for="">Filtrar por categoria:</label>
					<select name="categorias">
						<option>Categorias</option> 
						<option value="categoria1">categoria 1</option> 
						<option value="categoria2">categoria 2</option>
						<option value="categoria3">categoria 3</option>
					</select>	
				</form>
			</div>
		</div>
		<div class="container__card__plates">
			<div class="arrow__left__ingredients">
				<i class="fas fa-chevron-left"></i>
			</div>
			<?php foreach($plates as $plate): ?>
				<div class="card__plates">
					<div class="plates__description">
						<p><i class="fas fa-info-circle"></i><?=$plate["description"]?></p>
						<div class="plates__image"></div>
					</div>
					<div class="plates__data">
						<h4><?=$plate["name"]?></h4>
						<p>$ <?=$plate["price"]?></p>
						<div class="cart-button"><a href="#">Agregar <i class="fas fa-shopping-basket"></i></a></div>	
					</div>
				</div>


			<?php endforeach ?>
			<div class="arrow__right__ingredients">
				<i class="fas fa-chevron-right"></i>
			</div>					
		</div>
		
	</div>



</section>

<?php include_once("footer.php"); ?>