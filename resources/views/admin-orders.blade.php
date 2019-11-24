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
          @foreach($orders as $order)
            <tr>
              <td>{{ $order->user->name }}</td>
              <td></td>
              <td>{{ $order->date }}</td>
              <td>$ {{ $order->price }}</td>
              <td>{{ $order->state }}</td>
              <td>
                <input type="checkbox">
                <label for="">Enviado</label>
              </td>
            </tr>
          @endforeach
        </table>
      </div> 

  </section>
</main>
@endsection