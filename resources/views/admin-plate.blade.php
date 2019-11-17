@extends('layout')

@section('main')
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
        <h2>Platos</h2>
        <table class="nth detail_ingredients_admin detail_plates" cellspacing="0">
          <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Categoria</th>
            <th>Descripción</th>
            <th>Ingredientes</th>
          </tr>
          <?php foreach ($plates as $plate): ?>
            <tr>
              <td class="ingredients_title"><a href="admin-edit-plates.php"><?=$plate["name"]?><i class="fas fa-wrench"></i></a></td>
              <td><?=$plate["price"]?></td>
              <td><?=$plate["image"]?></td>
              <td><?=$plate["category"]?></td>
              <td><?=$plate["description"]?></td>
              <td>
                <?php foreach($ingredients as $ingredient): ?>

                  <?php if($ingredient["plate"] == $plate["name"]): ?>
                    <?= $ingredient["ingredients"]?>.
                  <?php endif ?>

                <?php endforeach ?>
              </td>
            </tr>
          <?php endforeach ?>
        </table>
      </div> 
 
  </section>
</main>
@endsection