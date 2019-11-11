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
if($_POST) {
  try {
    $name = $_POST["name"];
    $image = $_POST["image"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $categoryId = $_POST["categories"];
    $script = $db->prepare("INSERT INTO plates VALUES (default, '$name', '$image', '$price', '$description')");
    $script->execute();
    $query = $db->prepare("SELECT MAX(id) FROM plates");
    $query->execute();
    $idPlate = $query->fetch(PDO::FETCH_ASSOC);
    $lastId = $idPlate['id'];
    $script = $db->prepare("INSERT INTO plates_platescategories VALUES ('$lastId','$categoryId')");
    header("Location: admin-edit-ingredients.php");
  } catch(Exception $e) {
    $error = $e->getMessage();
  }
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
            <form action="admin-add-plates.php" method="post" class="add_products">
                    <div class="add_products_options">
                        <label for="name">Nombre</label>
                        <input type="text" name="name">
                    </div>
                    <div class="add_products_options">
                        <label for="price">precio</label>
                        <input type="text" name="price">
                    </div>
                    <div class="add_products_image">
                        <label for="image">Imagen</label>
                        <label class="add_input" for="image">Subir imagen</label>
                        <input type="file" name="image" id="image">
                    </div>              
                    <div>
                        <label for="categories">Categorias</label>
                        <select name="categories" id="">
                            <option>Categorias</option>
                            <?php foreach($categories as $category) :?>
                            <option value="<?=$category["id"]?>"><?= $category["name"]?></option>
                            <?php endforeach; ?>
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