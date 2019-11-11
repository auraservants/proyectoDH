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
    $query = $db->prepare("SELECT o.*, u.name, s.description AS state FROM orders o INNER JOIN users u ON o.user_id = u.id INNER JOIN states s ON o.state_id = s.id");
    $query->execute();
    $orders = $query->fetchAll(PDO::FETCH_ASSOC);
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

      <div class="ingredients_admin">
        <h2>Pedidos</h2>
        <table class="nth detail_ingredients_admin" cellspacing="0">
          <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Fecha</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Cambiar estado</th>
          </tr>
          <?php foreach ($orders as $order): ?>
            <tr>
              <td><?=$order["name"]?></td>
              <td></td>
              <td><?=$order["date"]?></td>
              <td>$<?=$order["price"]?></td>
              <td><?=$order["state"]?></td>
              <td>
                <input type="checkbox">
                <label for="">Enviado</label>
              </td>

            </tr>
          <?php endforeach ?>
        </table>
      </div> 

  </section>
</main>
  <?php require_once("footer.php"); ?>