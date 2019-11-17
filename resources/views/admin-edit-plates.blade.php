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

      <div class="container_add_products">
            <h2>Editar plato</h2>
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
                            <option value="carnes">Morrón</option>
                            <option value="vegetales">Carne</option>
                        </select> 
                    </div>

                    <button type="submit">Gardar cambios</button> 
            </form>

      </div>

  </section>
</main>
@endsection