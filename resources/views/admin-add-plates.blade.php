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
        <h2>Agregar platos</h2>
        <div class="add_products_border">
          <form action="/admin-add-plates" class="add_products" method="POST" enctype="multipart/form-data">
            {{@csrf_field()}}
            <div class="add_products_options add_products_container">
                <label for="name">Nombre</label>
                <div>
                  <input type="text" name="name">
                  @error('name')
                    <p style="color:red">{{$message}}</p>
                  @enderror
                </div> 
            </div>
            <div class="add_products_options add_products_container">
                <label for="price">precio</label>
                <div>
                  <input type="text" name="price">                  
                  @error('price')
                    <p style="color:red">{{$message}}</p>
                  @enderror
                </div>
            </div>
            <div class="add_products_image add_products_container">
                <label for="image">Imagen</label>
                <label class="add_input" for="image">Subir imagen</label>
                <div>
                  <input type="file" name="image" id="image">
                </div>
            </div> 
            <div class="add_products_container">
                <label for="description">Descripción</label>
                <div>
                  <textarea name="description" cols="30" rows="10"></textarea>            
                </div>
            </div>             
            <div class="add_products_container">
              <label for="category[]">Categorias</label>  
              <div> 
                @foreach ($categories as $category)
                  <div>
                    <input type="checkbox" name="category[]" value="{{$category->id}}" id="{{$category->id}}">
                    <label for="{{$category->id}}">{{$category->name}}</label>
                    @error('category[]')
                      <p style="color:red">{{$message}}</p>
                    @enderror
                  </div>
                @endforeach
              </div> 
            </div>
            <div class="add_products_container">
              <label for="ingredient[]">Ingredientes</label>
              <div>     
                @foreach ($ingredients as $ingredient)
                  <div>
                    <input type="checkbox" name="ingredient[]" value="{{$ingredient->id}}" id="{{$ingredient->id}}">
                    <label for="{{$ingredient->id}}">{{$ingredient->name}}</label>
                    @error('ingredient[]')
                      <p style="color:red">{{$message}}</p>
                    @enderror                    
                  </div>
                @endforeach
              </div> 
            </div>
            <button type="submit">Agregar plato</button> 
          </form>
        </div>

      </div>

  </section>
</main>
@endsection