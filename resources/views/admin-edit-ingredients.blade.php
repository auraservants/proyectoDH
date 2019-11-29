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

      <div class="container_add_products">
        <h2>Editar ingrediente</h2>
        <div class="add_products_border">
        <form action="" class="add_products">
              <div class="add_products_options add_products_container">
                  <label for="name">Nombre</label>
                  <input type="text" name="name">
              </div>
              <div class="add_products_image add_products_container">
                  <label for="image">Imagen</label>
                  <label class="add_input" for="image">Subir imagen</label>
                  <input type="file" name="image" id="image">
              </div>
              <div class="add_products_options add_products_container">
                  <label for="stock">Stock</label>
                  <input type="text" name="stock">
              </div>                
              <div class="add_products_container">
                  <label for="">Categorias</label>
                  <select name="categories" id="">
                      <option>Categorias</option>
                      <option value="carnes">Carnes</option>
                      <option value="vegetales">Vegetales</option>
                  </select> 
              </div>
              <button type="submit">Guardar cambios</button> 
        </form>
      </div>
      </div>

  </section>
</main>
@endsection