@extends('layout')
@section('main')

<main>
  <div class="hero">
    <div class="hero__text">
      <h1>Mi cuenta</h1>
    </div>
  </div>
  <section class="container__profile">
    <section class="profile__container__nav">
      <div class="profile__nav">
        <ul>
          <li class="user-nav__items"><a href="#myData"> Mis Datos</a></li>
          <!--<li class="user-nav__items"><a href="#shopping"> Mis Pedidos</a></li>-->
          <li class="user-nav__items"><a href="#points"> Puntos</a></li>
        </ul>
        <form action="profile" method="post">
          <div class="btn-text">
            <a class="btn-text__close" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
              {{ __('Cerrar sesión') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
            </form>
          </div>
        </form>
      </div>    
    </section> 
    <section class="profile__container__categories">
      <div class="profile__categories selection__myProfile">
        <div>
          <div class="selection__welcome">
            <h2>Hola {{ Auth::user()->name }} !</h2>
            <p>No eres {{ Auth::user()->name }}? 
              <a class="btn-text__close" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Cerrar sesión') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
              </form>
            </p>          
          </div>
          <div class="selection__detail">
            <p>Desde su cuenta puede ver y actualizar sus datos, acceder a sus pedidios anteriores y a los detalles de sus compras</p>
          </div>          
        </div>
        <div>
          <form class="user_photo" action="/home" method="POST" enctype="multipart/form-data" 
          @if(Auth::user()->image)
            style="background-image: url(/storage/{{ Auth::user()->image }});"
          @else
            style="background-image: url(/image/user.svg);"
          @endif>
            @csrf
            <label for="image"><i class="fas fa-camera"></i>Cambiar foto</label>
            <input class="input_photo" type="file" name="image" required id="image" value=""/>
            <input class="input_save" type="submit" name="image" value="Guardar cambios">
          </form>   
        </div>           
      </div>
      <div class="profile__categories selection__myData" id="myData">
        <h2>Mis datos</h2>
        <form action="/home" method="POST">
          @csrf  
          <div class="container-data">
            <label for="name">
              <i class="fas fa-user"></i>
              <div class="addresses-user">
                <p>Nombre</p>
                <input type="text" name="name" value="{{ Auth::user()->name }}">
                @error('name')
                  <p>{{$message}}</p>
                @enderror     
              </div>
            </label>                 
          </div>
          <div class="container-data">
            <label for="phone">
              <i class="fas fa-phone-alt"></i>
              <div class="addresses-user">
                <p>Teléfono</p>
                <input type="text" name="phone" value="{{ Auth::user()->phone }}" placeholder="Agregar">
                @error('phone')
                  <p>{{$message}}</p>
                @enderror     
              </div>
            </label>                 
          </div>
          <div class="container-data container-data-address">
            <label for="address">
              <i class="fas fa-map-marker-alt"></i>
              <div class="addresses-user">
                <p>Direcciones</p>
                @forelse(Auth::user()->addresses as $address)
                <div class="address-user">
                  <div>
                    <p>Barrio</p><input name="address[{{$address->id}}][neighborhood]" type="text" value="{{$address['neighborhood']}}">
                    @error('address.' . $address->id . '.neighborhood')
                      <p>{{$message}}</p>
                    @enderror                
                  </div>
                  <div>
                    <p>Calle</p><input name="address[{{$address->id}}][street]" type="text" value="{{$address['street']}}">  
                    @error('address.' . $address->id . '.street')
                      <p>{{$message}}</p>
                    @enderror                                          
                  </div>
                  <div class="address-data">
                    <p>N°</p><input name="address[{{$address->id}}][number]" type="text" value="{{$address['number']}}">
                    @error('address.' . $address->id . '.number')
                      <p>{{$message}}</p>
                    @enderror  
                    <p>Piso</p><input name="address[{{$address->id}}][floor]" type="text" value="{{$address['floor']}}">
                    @error('address.' . $address->id . '.floor')
                      <p>{{$message}}</p>
                    @enderror 
                    <p>Depto</p><input name="address[{{$address->id}}][apartment]" type="text" value="{{$address['apartment']}}"> 
                    @error('address.' . $address->id . '.apartment')
                      <p>{{$message}}</p>
                    @enderror                        
                  </div> 
                  <div class="delete">
                    <button type="submit" name="delete[{{$address->id}}]"><i class="fas fa-trash"></i></button>     
                  </div>                         
                </div>
                @empty 
                  <p class="address-message">Aun no tienes direcciones registradas</p>
                @endforelse
                <div class="address-user">
                  <p class="address-message">Agrega una nueva dirección</p>
                  <div>
                    <p>Barrio</p><input class="address-neighborhood" name="add[neighborhood]" type="text" value="">   
                    @error('add.neighborhood')
                      <p class="error_addresses">{{$message}}</p>
                    @enderror                     
                  </div>
                  <div>
                    <p>Calle</p><input name="add[street]" type="text" value="">  
                    @error('add.street')
                      <p class="error_addresses">{{$message}}</p>
                    @enderror                                            
                  </div>
                  <div class="address-data">
                    <p>N°</p><input name="add[number]" type="text" value="">  
                    @error('add.number')
                      <p class="error_addresses">{{$message}}</p>
                    @enderror   
                    <p>Piso</p><input name="add[floor]" type="text" value="">
                    @error('add.floor')
                      <p class="error_addresses">{{$message}}</p>
                    @enderror  
                    <p>Depto</p><input name="add[apartment]" type="text" value=""> 
                    @error('add.apartment')
                      <p class="error_addresses">{{$message}}</p>
                    @enderror                             
                  </div>               
                </div> 
              </div>
            </label>                 
          </div>
          <div class="btn__save">
            <button type="submit" class="btn btn--orange btn--medium ">Guardar cambios</button>
          </div>       
        </form>

        <div>
          @if (session('error'))
              <div class="alert alert-danger">
                  {{ session('error') }}
              </div>
          @endif
              @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
          <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
          {{ csrf_field() }}
            <div class="container-data container-data-address">
              <label for="address">
                <i class="fas fa-unlock-alt"></i>
                <div class="addresses-user password-user">
                  <p>Cambiar contraseña</p>
                  <div class="address-user">
                    <div class="{{ $errors->has('current-password') ? ' has-error' : '' }}">
                        <p>Contraseña actual</p><input id="current-password" type="password" name="current-password" required>
                        @if ($errors->has('current-password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('current-password') }}</strong>
                            </span>
                        @endif                
                    </div>
                    <div class="{{ $errors->has('new-password') ? ' has-error' : '' }}">
                      <p>Nueva contraseña</p><input id="new-password" type="password" name="new-password" required>
                        @if ($errors->has('new-password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('new-password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div>
                        <p>Confirmar contraseña</p><input id="new-password-confirm" type="password" name="new-password_confirmation" required>         
                    </div>
                  </div>
                </div>
              </label>                 
            </div>
            <div class="btn__save">
                <button type="submit" class="btn btn--orange btn--medium">
                    Guardar Contraseña
                </button>
            </div>
          </form>
        </div>

      </div>

 
      <!--<div class="profile__categories selection__shopping" id="shopping">
        <h2>Pedidos</h2>
        <div class="detail_total_shopping">
            <div class="description_shopping">
                <div class="img_shopping"><img src="/image/cart/product-cart1.png" alt="product"></div>
                <p class="detail_shopping">Descripción del producto</p>
                <p class="amount_shopping">$ ...</p>
                <p class="remove_products_orders"><a href="#">+</a><span>Volver a comprar</span></p>
            </div>
            <div class="description_shopping">
                <div class="img_shopping"><img src="/image/cart/product-cart2.png" alt="product"></div>
                <p class="detail_shopping">Descripción del producto</p>
                <p class="amount_shopping">$ ...</p>
                <p class="remove_products_orders"><a href="#">+</a><span>Volver a comprar</span></p>
            </div>
            <div class="description_shopping">
                <div class="img_shopping"><img src="/image/cart/product-cart1.png" alt="product"></div>
                <p class="detail_shopping">Descripción del producto</p>
                <p class="amount_shopping">$ ...</p>
                <p class="remove_products_orders"><a href="#">+</a><span>Volver a comprar</span></p>
            </div>
            <div class="description_shopping">
                <div class="img_shopping"><img src="/image/cart/product-cart1.png" alt="product"></div>
                <p class="detail_shopping">Descripción del producto</p>
                <p class="amount_shopping">$ ...</p>
                <p class="remove_products_orders"><a href="#">+</a><span>Volver a comprar</span></p>
            </div>
        </div>
      </div>-->

      <div class="profile__categories selection__points" id="points">
        <h2>Puntos</h2>
        <div class="points__description">
          <p>Con tus compras obtenes puntos que te servirán </br>para aplicarles descuentos a tus próximas compras</p>
        </div>
        <div class="points__user">
          <p>Tus puntos: <span>Aun no has ganado ningún punto</span></p>
        </div>
      </div>
    </section>    
  </section>

  
  
</main>
@endsection
