<?php 
  require_once("head.php"); 
  include_once("header.php");
  require_once("funciones.php");
  closeUser();
  
  if(!empty($_COOKIE)){
      foreach($_COOKIE as $clave => $valor){
          $_SESSION[$clave] = $valor;
      }
  }

  if(!empty($_SESSION)){
      $users = getUsers();
      $users = photoProfile($users);
      $user = searchUser($users);
  }

  if(!isset($_SESSION["login"]) || $_SESSION["login"] != true) {
		header("Location: login.php");
	}
?>


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
          <li class="user-nav__items"><a href="#shopping"> Compras</a></li>
          <li class="user-nav__items"><a href="#favorites"> Favoritos</a></li>
          <li class="user-nav__items"><a href="#points"> Puntos</a></li>
        </ul>
        <form action="profile-miPerfil.php" method="post">
          <div class="btn-text">
            <button class="btn-text__close" type="submit" name="close" id="close" value="close">Cerrar Sesión</button>
          </div>
        </form>
      </div>    
    </section> 

    <section class="profile__container__categories">
      <div class="profile__categories selection__myProfile">
        <form class="user_photo" <?php if(!empty($user["photo"])) { echo 'style="background-image: url(' . $user["photo"] . ');"'; } else { echo 'style="background-image: url(pictures/user.svg);"';} ?> action="profile-miPerfil.php" method="post" enctype="multipart/form-data">
          <label for="photo"><i class="fas fa-camera"></i>Cambiar foto</label>
          <input class="input_photo" type="file" name="photo" required id="photo" value=""/>
          <input class="input_save" type="submit" name="photo" value="Guardar cambios">
        </form>         
        <div class="selection__welcome">
          <h2>Hola <?= $user["name"]?>!</h2>
          <p>No eres <?= $user["name"]?>? <button class="btn-text__close" type="submit" name="close" id="close" value="close">Cerrar Sesión</button></p>          
        </div>
        <div class="selection__detail">
          <p>Desde su cuenta puede ver sus pedidos reciente, administrar sus direcciones de envío y facturación y editar sus datos y los detalles de su cuenta</p>
        </div>
      </div>

        <div class="profile__categories selection__myData" id="myData">
          <h2>Mis datos</h2>
          <form action="profile-miperfil.php" method="post">
            <div class="container__data">
              <label for="name"><i class="fas fa-user"></i></label>
              <p><?= $user["name"]?></p>
              <input type="text" name="name" value="" placeholder="Modificar nombre">              
            </div>
            <div class="container__data" autocomplete="off">
              <label for="direction"><i class="fas fa-map-marker-alt"></i></label>
              <p>Lima 1111</p>
              <input autocomplete="off" type="text" name="direction" value="" placeholder="Modificar dirección">              
            </div>
            <div class="container__data">   
              <label for="phone"><i class="fas fa-phone-alt"></i></label>
              <p>11-65487932</p>
              <input type="text" name="phone" value="" placeholder="Modificar teléfono">              
            </div>
            <div class="container__data">   
              <label for="password"><i class="fas fa-lock"></i></label>
              <p>Contraseña actual</p>
              <input type="password" name="password" value="" placeholder="Contraseña actual">              
            </div>
            <div class="container__data">   
              <label for="password"><i class="fas fa-lock"></i></label>
              <p>Nueva contraseña</p>
              <input type="password" name="password" value="" placeholder="Nueva contraseña">              
            </div>
            <div class="container__data">   
              <label for="password"><i class="fas fa-lock"></i></label>
              <p>Confirmar contraseña</p>
              <input type="password" name="password" value="" placeholder="Confirmar contraseña">              
            </div>
            <div class="btn__save">
              <button type="submit" class="btn btn--orange btn--large ">Guardar cambios</button>
            </div>
          </form>
        </div>

        <div class="profile__categories selection__shopping" id="shopping">
          <h2>Compras</h2>
          <div class="detail_total_shopping">
              <div class="title_shopping">
                  <p class="name_shopping">Productos</p>
                  <p>Precio</p>
                  <p>Volver a comprar</p>
              </div>
              <div class="description_shopping">
                  <div class="img_shopping"><img src="image/cart/product-cart1.png" alt="product"></div>
                  <p class="detail_shopping">Descripción del producto</p>
                  <p class="amount_shopping">$ ...</p>
                  <p class="remove_products"><a href="#">+</a></p>
              </div>
              <div class="description_shopping">
                  <div class="img_shopping"><img src="image/cart/product-cart2.png" alt="product"></div>
                  <p class="detail_shopping">Descripción del producto</p>
                  <p class="amount_shopping">$ ...</p>
                  <p class="remove_products"><a href="#">+</a></p>
              </div>
              <div class="description_shopping">
                  <div class="img_shopping"><img src="image/cart/product-cart1.png" alt="product"></div>
                  <p class="detail_shopping">Descripción del producto</p>
                  <p class="amount_shopping">$ ...</p>
                  <p class="remove_products"><a href="#">+</a></p>
              </div>
              <div class="description_shopping">
                  <div class="img_shopping"><img src="image/cart/product-cart1.png" alt="product"></div>
                  <p class="detail_shopping">Descripción del producto</p>
                  <p class="amount_shopping">$ ...</p>
                  <p class="remove_products"><a href="#">+</a></p>
              </div>
          </div>
        </div>

        <div class="profile__categories selection__favorites" id="favorites">
          <h2>Favoritos</h2>

        </div>

        <div class="profile__categories selection__points" id="points">
          <h2>Puntos</h2>

        </div>

        
    </section>    
  </section>

  
  
</main>



  
  <?php require_once("footer.php"); ?>