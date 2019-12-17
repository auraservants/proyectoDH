@extends('layout')

@section('main')
<main id="main">
  <section class="container_admin">

      <div class="nav_admin">
        <ul>
          <!--<li class="user-nav__items"><a href="/admin-orders">Pedidos</a></li>-->
          <li class="user-nav__items"><a href="/admin-ingredients">Ingregientes</a></li>
          <li class="user-nav__items"><a href="/admin-add-ingredients">Agregar ingredientes</a></li>
          <li class="user-nav__items"><a href="/admin-plates">Platos</a></li>
          <li class="user-nav__items"><a href="/admin-add-plates">Agregar platos</a></li>
        </ul>
      </div>    

      <div class="ingredients_admin">
        <h2>Platos</h2>
        <table class="nth detail_ingredients_admin" cellspacing="0">
          <tr class="categories_detail_products">
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Categoria</th>
            <th>Descripción</th>
            <th>Ingredientes</th>
          </tr>
          @foreach ($plates as $plate)
            <tr class="description_detail_products">
              <td class="ingredients_title"><a href="admin-edit-plates/{{$plate->id}}">{{ $plate->name }}<i class="fas fa-wrench"></i></a></td>
              <td>{{ $plate->price }}</td>
              <td class="img-products"><img src="/storage/{{ $plate->image }}" alt=""></td>
              <td>
                @foreach($plate->platescategories as $plate->platescategory)
                  <li>{{ $plate->platescategory->name }}</li>
                @endforeach
              </td>
              <td>{{ $plate->description }}</td>
              <td>
                @foreach($plate->ingredients as $ingredient)
                  <span>{{$ingredient->name}}. </span>
              
                @endforeach
              </td>
            </tr>
          @endforeach 
        </table>
      </div> 
 
  </section>
</main>
@endsection