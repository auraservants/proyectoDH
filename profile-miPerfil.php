<?php 
  require_once("head.php"); 
  require_once("header.php");
  require("funciones.php");

  session_start();
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
 
 
?>


<div class="marco-profile-container">
  <section class="profile-container">
    <div class="profile">
      <div class="profile__card">

        <form class="user_photo" <?php if(!empty($user["photo"])) { echo 'style="background-image: url(' . $user["photo"] . ');"'; } else { echo 'style="background-image: url(pictures/user.svg);"';} ?> action="profile-miPerfil.php" method="post" enctype="multipart/form-data">
          <label for="photo"><i class="fas fa-camera"></i>Cambiar foto</label>
          <input class="input_photo" type="file" name="photo" required id="photo" value=""/>
          <input class="input_save" type="submit" name="photo" value="Guardar cambios">
        </form> 

        <div class="profile__username">
          <h3 class="username"><?= $user["name"]?></h3>
        </div>
        <div class="user-nav">
          <div class="user-nav__bar">
            <ul>
              <li class="user-nav__items mi-perfil-btn"><a href="profile-miPerfil.php"> Mi Perfil</a></li>
              <li class="user-nav__items resumen-btn"><a href="profile-compras.php"> Mis Compras</a></li>
              <li class="user-nav__items favoritos-btn"><a href="profile-favoritos.php"> Favoritos</a></li>
              <li class="user-nav__items puntos-btn selected"><a href="profile-puntos.php"> Puntos</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="selection-container">
      <div class="selection__welcome">
        <h1>Hola <?= $user["name"]?>!</h1>
        <h2>Tus Datos</h2>
      </div>
      <div class="selection__dataUser">

        <form action="profile-miperfil.php" method="post">
          <div class="container__data">
            <label for="name"><i class="fas fa-user"></i></label>
            <p><?= $user["name"]?></p>
            <input type="text" name="name" value="" placeholder="Modificar nombre">              
          </div>
          <div class="container__data">
            <label for="direction"><i class="fas fa-map-marker-alt"></i></label>
            <p>Lima 1111</p>
            <input type="text" name="direction" value="" placeholder="Modificar dirección">              
          </div>
          <div class="container__data">   
            <label for="phone"><i class="fas fa-phone-alt"></i></label>
            <p>11-65487932</p>
            <input type="text" name="phone" value="" placeholder="Modificar teléfono">              
          </div>
          <div class="container__data container__password">
            <label for="password"><i class="fas fa-lock"></i></label>
            <p>Cambiar contraseña:</p>
            <div>
              <input type="password" name="password" value="" placeholder="Contraseña actual"> 
              <input type="password" name="password" value="" placeholder="Nueva contraseña">  
              <input type="password" name="password" value="" placeholder="Confirmar contraseña">                 
            </div>
          </div> 
          <div class="btn__save">
            <button type="submit" class="btn btn--orange btn--large ">Guardar cambios</button>
          </div>
        </form>

        <form action="profile-miPerfil.php" method="post">
          <div class="btn__close">
            <button class="btn btn--light btn--medium" type="submit" name="close" id="close" value="close">Cerrar Sesión</button>
          </div>
        </form>
        

      </div>
    </div>

  </section>
  
</div>



  
  <?php require_once("footer.php"); ?>