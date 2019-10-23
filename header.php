

<header>
    <nav id="nav" class="nav1">
        <div class="container-nav">
            <div class="nav-logo">
                <a href="index.php"><img src="image/randfood.png" alt="randfood"></a>
            </div>
            <div class="nav-logo-movile">
                <a href="index.php"><img src="image/randfood-movile.png" alt="randfood"></a>
            </div>
            <div class="header-nav-links">
                <ul>
                    <li><a href="index.php" id="link-home" class="btn-header">Inicio</a></li>
                    <li><a href="products.php" id="link-shop" class="btn-header">Shop</a></li>
                    <li><a href="faqs.php" id="link-us" class="btn-header">Faqs</a></li>
                    <li><a href="contact.php" id="link-contact" class="btn-header">Contacto</a></li>
                </ul>
            </div>
            <div class="header-nav-options">
                <ul>    
                    <li><a href="cart.php" id="link-cart" class="btn-header"><i class="fas fa-shopping-basket"></i> Carrito</a></li>
                    <li><a href="login.php" id="link-signin" class="btn-header"><?php if(!empty($_SESSION["login"]) && $_SESSION["login"] == true) { echo "<i class='fas fa-user-cog'></i>" . $_SESSION["name"]; } else { echo "<i class='fas fa-user'></i>Ingresar";}?></a></li>                  
                </ul>    
            </div>
            
        </div>
    </nav>
</header>
