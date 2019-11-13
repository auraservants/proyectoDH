

<header>
    <nav id="nav" class="nav1">
        <div class="nav-container">
            
            <div class="nav-logo">
                <a href="index.php"><img src="image/randfood.png" alt="randfood"></a>
            </div>
            
            <button type="submit"><i class="fas fa-bars"></i></button>  

            <ul class="header-nav-links">
                <li><a href="index.php" id="link-home" class="btn-header">Inicio</a></li>
                <li><a href="products.php" id="link-shop" class="btn-header">Shop</a></li>
                <li><a href="faqs.php" id="link-us" class="btn-header">Faqs</a></li>
                <li><a href="contact.php" id="link-contact" class="btn-header">Contacto</a></li>
            </ul>

            <ul class="header-nav-options">    
                <li><a href="cart.php" id="link-cart" class="btn-header"><i class="fas fa-shopping-basket"></i> <span>Carrito</span> </a></li>
                <li><a href="login.php" id="link-signin" class="btn-header"><?php if(!empty($_SESSION["login"]) && $_SESSION["login"] == true) { echo "<i class='fas fa-user-cog'></i>" . $_SESSION["name"]; } else { echo "<i class='fas fa-user'></i>  <span>Ingresar</span>";}?></a></li>                  
                <li><a href="admin-orders.php"><i class="fas fa-cog"></i></a></li>
            </ul>    
                      
        </div>
    </nav>
</header>
