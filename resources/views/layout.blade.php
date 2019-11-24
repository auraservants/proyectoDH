<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/3233ba318b.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/style.css">
        <title>Document</title>
    </head>
    <header @if(Request::is('/')) class="home" @endif>
        <nav id="nav" class="nav1">
            <div class="nav-container">
                <div class="nav-logo">
                    <a href="/"><img src="/image/randfood.png" alt="randfood"></a>
                </div>   
                <button class="menu-movile" type="submit"><i class="fas fa-bars"></i></button>  
                <ul class="header-nav-links">
                    <li><a href="/" id="link-home" class="btn-header">Inicio</a></li>
                    <li><a href="/products" id="link-shop" class="btn-header">Shop</a></li>
                    <li><a href="/faqs" id="link-us" class="btn-header">Faqs</a></li>
                    <li><a href="/contact" id="link-contact" class="btn-header">Contacto</a></li>
                </ul>
                <ul class="header-nav-options">    
                    <li><a href="/cart" id="link-cart" class="btn-header"><i class="fas fa-shopping-basket"></i> <span>Carrito</span> </a></li>
                    <li><a href="/login" id="link-signin" class="btn-header"><?php if(!empty($_SESSION["login"]) && $_SESSION["login"] == true) { echo "<i class='fas fa-user-cog'></i>" . $_SESSION["name"]; } else { echo "<i class='fas fa-user'></i>  <span>Ingresar</span>";}?></a></li>                  
                    <li><a href="/admin-orders"><i class="fas fa-cog"></i></a></li>
                </ul>           
            </div>
        </nav>
    </header>
    <body id="body">
        @yield('main')
    </body>
    <footer>
        <div class="container-footer">
            <div class="footer-body">
                <div class="brand-footer">
                    <img src="/image/randfood.png" alt="logo-footer">
                    <p>Av. Callao 335, CABA, Argentina.</p>
                    <p>Teléfono: 0800 – 123 456 78</p>
                    <p>Email: info@randfood.com</p>
                    <div class="social-footer">
                    <a href="www.google.com"><img src="/image/facebook.png" alt=""></a>
                    <a href="www.google.com"><img src="/image/instagram.png" alt=""></a>
                    <a href="www.google.com"><img src="/image/twitter.png" alt=""></a>
                    <a href="www.google.com"><img src="/image/whatsapp.png" alt=""></a>
                    </div>
                </div> 
                <div class="links-footer">
                    <ul>
                        <h3 class="Links">Navegación</h3>	
                        <li><a href="/index" id="link-home" class="btn-header">Inicio</a></li>
                        <li><a href="/products" id="link-shop" class="btn-header">Shop</a></li>
                        <li><a href="/faqs" id="link-us" class="btn-header">Faqs</a></li>
                        <li><a href="/contact" id="link-contact" class="btn-header">Contacto</a></li>
                    </ul>
                    <ul>
                        <h3 class="Links">Navegación</h3>
                        <li><a href="/index" id="link-home" class="btn-header">Mi cuenta</a></li>
                        <li><a href="/products" id="link-shop" class="btn-header">Carrito</a></li>
                        <li><a href="/faqs" id="link-us" class="btn-header">Ofertas</a></li>
                        <li><a href="/contact" id="link-contact" class="btn-header">Garantía</a></li>
                    </ul>
                </div>
                <div class="newsletter-footer">
                    <h3 class="Newsletter">Suscribete al newsletter</h3>
                    <p>Enterate de todas las novedades!</p>
                    <form action="" method="">
                    <div class="email-box">
                        <input class="text-box" type="email" name="" value="" placeholder="Ingresa tu e-mail">
                        <button class="btn-newsletter" type="button" name="button"><i class="fas fa-paper-plane"></i></button>
                    </div>
                    </form>
                </div>
            </div>
            <hr class="footer-divider">
            <div class="legal-info">
                <div class="copyright-text">
                    <p>Copyright © 2019 Randfood. Todos los derechos reservados.</p>
                </div>
            <div class="payment-logos">
                <img src="/image/payment.png" alt="">
            </div>
            </div> 
        </div>
    </footer>

    <script src="/js/jquery.js"></script>
    <script src="/js/main.js"></script>
</html>