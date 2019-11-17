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
        <h2>Ingredientes</h2>
        <table class="nth detail_ingredients_admin" cellspacing="0">
          <tr>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Stock</th>
            <th>Categoria</th>
          </tr>
          <?php foreach ($ingredients as $ingredient): ?>
            <tr>
              <td class="ingredients_title"><a href="admin-edit-ingredients.php"><?=$ingredient["name"]?><i class="fas fa-wrench"></i></a></td>
              <td><?=$ingredient["image"]?></td>
              <td><?=$ingredient["stock"]?></td>
              <td><?=$ingredient["category"]?></td>
            </tr>
          <?php endforeach ?>
        </table>
      </div> 

  </section>
</main>
@endsection