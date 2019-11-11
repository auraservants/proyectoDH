<?php 
  require_once("head.php"); 
  include_once("header.php");
  
$dsn = 'mysql:dbname=randfood;host=localhost;port=3306;charset=utf8';
$username = 'root';
$password = '';
$error = null;
try {
  $db = new PDO($dsn, $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = $db->prepare("SELECT * FROM platescategories");
  $query->execute();
  $categories = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
  $error = $e->getMessage();
}
?>

<main id="main">
  <section class="container_admin">

      <div class="nav_admin">
        <ul>
          <li class="user-nav__items"><a href="admin-orders.php">Pedidos</a></li>
          <li class="user-nav__items"><a href="admin-ingredients.php">Ingregientes</a></li>
          <li class="user-nav__items"><a href="admin-add-ingredients.php">Agregar ingredientes</a></li>
          <li class="user-nav__items"><a href="admin-plates.php">Platos</a></li>
          <li class="user-nav__items"><a href="admin-add-plates.php">Agregar platos</a></li>
        </ul>
      </div>    

      <div class="container_add_products">
            <h2>Agregar platos</h2>
            <form action="" class="add_products">
                    <div class="add_products_options">
                        <label for="name">Nombre</label>
                        <input type="text" name="name">
                    </div>
                    <div class="add_products_options">
                        <label for="name">precio</label>
                        <input type="text" name="name">
                    </div>
                    <div class="add_products_image">
                        <label for="image">Imagen</label>
                        <label class="add_input" for="image">Subir imagen</label>
                        <input type="file" name="image" id="image">
                    </div>              
                    <div>
                        <label for="">Categorias</label>
                        <select name="categories" id="">
                            <option>Categorias</option>
                            <option value="carnes">Carnes</option>
                            <option value="vegetales">Vegetales</option>
                        </select> 
                    </div>
                    <div>
                        <label for="">Descripción</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <label for="">Ingredientes</label>
                        <select name="categories" id="">
                            <option>Ingredientes</option>
                            <?php foreach ($categories as $category): ?>
                              <option value="<?=$category["name"]?>"><?=$category["name"]?></option>
                            <?php endforeach ?>
                        </select> 
                    </div>

                    <button type="submit">Agregar plato</button> 
            </form>

      </div>

  </section>
</main>
  <?php require_once("footer.php"); ?>