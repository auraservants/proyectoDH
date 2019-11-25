@extends('layout')

@section('main')
<main id="main">
  <section class="container_admin">

      <div class="nav_admin">
        <ul>
          <li class="user-nav__items"><a href="/admin-orders">Pedidos</a></li>
          <li class="user-nav__items"><a href="/admin-ingredients">Ingregientes</a></li>
          <li class="user-nav__items"><a href="/admin-add-ingredients">Agregar ingredientes</a></li>
          <li class="user-nav__items"><a href="/admin-plates">Platos</a></li>
          <li class="user-nav__items"><a href="/admin-add-plates">Agregar platos</a></li>
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
          @foreach ($ingredients as $ingredient)
            <tr>
              <td class="ingredients_title"><a href="/admin-edit-ingredients">{{ $ingredient->name }}<i class="fas fa-wrench"></i></a></td>
              <td>{{ $ingredient->image }}</td>
              <td>{{ $ingredient->stock }}</td>
              <td>{{ $ingredient->ingredientscategory->name }}</td>
            </tr>
          @endforeach
        </table>
      </div> 

  </section>
</main>
@endsection