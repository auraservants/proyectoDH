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
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>                                
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest                    
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
                        <li><a href="/" id="link-home" class="btn-header">Inicio</a></li>
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
    <script>
        var idIngredientsSelected = [];

        function myFunction(id) {
            var btnIngredient = document.getElementById(id);
            btnIngredient.classList.toggle('selected');
            var containerIngredientsSelected = document.querySelector('.ingredients__selected');    
            var containerIngredients = document.querySelector('.container__ingredients'); 
            var id = btnIngredient.getAttribute('id');  
            if(btnIngredient.classList.contains('selected')){
                containerIngredientsSelected.append(btnIngredient);
                idIngredientsSelected.push(id);
            } else {
                containerIngredients.append(btnIngredient);       
                for(var i = 0; i < idIngredientsSelected.length; i++){ 
                    if (idIngredientsSelected[i] === id) {
                        idIngredientsSelected.splice(i, 1); 
                    }
                }
            }
            var platesFilter = fetchPlates(idIngredientsSelected);
            console.log(platesFilter);
            
            

        /*for(var plate of platesFilter) {
            var cardPlates = document.querySelector('.card__plates')
            var platesDescription = document.createElement('div');
            var pPlatesDescription = document.createElement('p');
            var iPlatesDescription = document.createElement('i'); 
            var platesImage = document.createElement('div');   
            var platesData = document.createElement('div');
            var h4PlatesData = document.createElement('h4');
            var pPlatesData = document.createElement('p');
            var cardButton = document.createElement('div');
            var aCardButton = document.createElement('a');
            var iCardButton = document.createElement('i');
            

            platesDescription.classList.add('plates__description');
            platesImage.classList.add('plates__image');
            platesData.classList.add('plates__data');
            divPlatesData.classList.add('cart-button');
            iPlatesDescription.classList.add('fas fa-info-circle');      
            iCardButton.classList.add('fas fa-shopping-basket');

            cardPlates.append(platesDescription);
            cardPlates.append(platesData);
            platesDescription.append(pPlatesDescription);
            platesDescription.append(platesImage);
            pPlatesDescription.append(iPlatesDescription);
            platesData.append(h4PlatesData);
            platesData.append(pPlatesData);
            platesData.append(cardButton);
            cardButton.append(aCardButton);
            aCardButton.append(iCardButton);

            pPlatesDescription.innerHTML = platesFilter.description;
            h4PlatesData.innerHTML = platesFilter.name;
            pPlatesData.innerHTML = platesFilter.price;
            aCardButton.setAttribute('href', '#');


        }*/
        }

        function fetchPlates(idIngredientsSelected) {
            var idIngredients = idIngredientsSelected.join(',');
            fetch('/api/products?ingredientsId=' + idIngredients, {
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(plates) {
                var platesFilter = plates;
                
                return platesFilter;

            })
            .catch(function(error) {
                console.log(JSON.stringify(data));
                console.log("The error was: " + error);
            });
        }

        


        

    </script>
</html>