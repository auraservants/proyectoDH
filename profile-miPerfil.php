<?php require_once("head.php"); ?>
<?php require_once("header.php"); ?>

<div class="marco-profile-container">
  <section class="profile-container">
    <div class="profile">
      <div class="profile__card">
        <div class="profile__userphoto">
          <img src="image/avatar.png" alt="Foto usuario">
        </div>
        <div class="profile__username">
          <h3 class="username">Ramiro Bastianes</h3>
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
        <h1>Bienvenido, <span>Ramiro Bastianes!</span></h1>
      </div>
      <div class="selection__dataUser">
        <form action="" method="post">
          <h2>Tus Datos</h2>

          <div class="container__data">
            <p>Ramiro Bastianes</p>
            <label for="name"><i class="fas fa-user"></i></label>
            <input type="text" name="name" value="" placeholder="Modificar nombre">              
          </div>
          <div class="container__data">
            <p>Lima 1111</p>
            <label for="direction"><i class="fas fa-user"></i></label>
            <input type="text" name="direction" value="" placeholder="Modificar dirección">              
          </div>
          <div class="container__data">
            <p>11-65487932</p>
            <label for="phone"><i class="fas fa-user"></i></label>
            <input type="text" name="phone" value="" placeholder="Modificar teléfono">              
          </div>
          <div class="container__data container__password">
            <p><span>Cambiar contraseña:</span> </p>
            <div>
              <input type="text" name="password" value="" placeholder="Contraseña actual"> 
              <input type="text" name="password" value="" placeholder="Nueva contraseña">  
              <input type="text" name="password" value="" placeholder="Confirmar contraseña">                 
            </div>
          </div> 
          <div class="btn__data">
            <button type="submit" class="btn btn--light btn--small ">Guardar cambios</button>
          </div>
        </form>
        

      </div>
    </div>

  </section>
  
</div>



  
  <?php require_once("footer.php"); ?>