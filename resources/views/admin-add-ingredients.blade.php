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
        <h2>Agregar ingredientes</h2>
        <div class="add_products_border">
          <form action="" class="add_products">
            <div class="add_products_options">
                <label for="name">Nombre</label>
                <input type="text" name="name">
            </div>
            <div class="add_products_image">
                <label for="image">Imagen</label>
                <label class="add_input" for="image">Subir imagen</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="add_products_options">
                <label for="stock">Stock</label>
                <input type="text" name="stock">
            </div>                
            <div>
                <label for="">Categorias</label>
                <select name="categories" id="">
                    <option>Categorias</option>
                    <?php foreach ($categories as $category): ?>
                      <option value="<?=$category["name"]?>"><?=$category["name"]?></option>
                    <?php endforeach ?>
                </select> 
            </div>
            <button type="submit">Agregar ingrediente</button> 
          </form>
        </div>
      </div>

  </section>
</main>
@endsection