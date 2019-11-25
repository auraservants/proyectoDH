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
          <form action="/admin-add-ingredients" class="add_products" method="POST" enctype="multipart/form-data">
            {{@csrf_field()}}
            <div class="add_products_options add_products_container">
                <label for="name">Nombre</label>
                <div>
                  <input type="text" name="name" value="{{ old('name') }}">           
                  @error('name')
                    <p style="color:red">{{$message}}</p>
                  @enderror
                </div>
            </div>
            <div class="add_products_image add_products_container">
                <label for="image">Imagen</label>
                <label class="add_input" for="image">Subir imagen</label>
                <input type="file" name="image" id="image" value="{{ old('image') }}">
                @error('image')
                  <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="add_products_options add_products_container">
                <label for="stock">Stock</label>
                <div>
                  <input type="text" name="stock" value="{{ old('stock') }}">
                  @error('stock')
                    <p style="color:red">{{$message}}</p>
                  @enderror                  
                </div>
            </div>                
            <div class="add_products_container">
                <label for="category">Categorias</label>
                <div>
                  <select name="category">
                      <option>Categorias</option>
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if(old('category') == $category->id) selected @endif>{{ $category->name }}</option>
                      @endforeach
                  </select> 
                  @error('category')
                    <p style="color:red">{{$message}}</p>
                  @enderror                  
                </div>
            </div>
            <button type="submit">Agregar ingrediente</button> 
          </form>
        </div>
      </div>

  </section>
</main>
@endsection