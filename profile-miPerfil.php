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
        <h2>Tus Datos</h2>
        <p>Ramiro Bastianes</p>
        <p>Lima 1111</p>
        <p>11-65487932</p>

      </div>
    </div>

  </section>
  
</div>



  
  <?php require_once("footer.php"); ?>