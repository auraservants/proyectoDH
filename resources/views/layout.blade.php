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
                        @if(Auth::user()->administrator == 1)
                            <li><a href="/admin-orders"><i class="fas fa-cog"></i></a></li>
                        @endif
                    @endguest                    
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

        async function myFunction(id) {
            var btnIngredient = document.getElementById(id);
            var containerIngredients = document.querySelector('.container__ingredients');
            btnIngredient.classList.toggle('selected');
            var containerIngredientsSelected = document.querySelector('.ingredients__selected');    
            var containerIngred = document.querySelector('.container__ingred'); 
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
            var ingredientsAll = await fetchIngredientsAll();
            var lineIngredients = document.querySelector('.line__ingredients');

            var platesAll = await fetchPlatesAll();
            var linePlates = document.querySelector('.line__plates');
            var platesFilter = '';

            if(idIngredientsSelected.length === 0) {
                /*var pNotSelected = document.createElement('p');
                pNotSelected.classList.add('not__selected');
                containerIngredientsSelected.append(pNotSelected);
                pNotSelected.innerHTML = '- Aun no ha seleccionado ningún ingrediente -'; */
                platesFilter = await fetchPlatesAll();
            } else {
               /* var pNotSelected = document.querySelector('.not__selected')
                pNotSelected.remove();*/
                platesFilter = await fetchPlates(idIngredientsSelected);
            }

            var containerCardPlates = document.querySelector('.container__card__plates');
            
            var cards = document.querySelectorAll('.card__plates');
            for(var card of cards) {
                card.remove();
            }

            for(var plate of platesFilter) {
            var cardPlates = document.createElement('div');
            cardPlates.classList.add('card__plates');
            containerCardPlates.append(cardPlates);
            var platesDescription = document.createElement('div');
            platesDescription.classList.add('plates__description');
            cardPlates.append(platesDescription);
            var pPlatesDescription = document.createElement('p');
            platesDescription.append(pPlatesDescription);
            var iPlatesDescription = document.createElement('i'); 
            iPlatesDescription.classList.add('fas');      
            iPlatesDescription.classList.add('fa-info-circle');      
            pPlatesDescription.append(iPlatesDescription);
            var platesImage = document.createElement('div');  
            platesImage.classList.add('plates__image');
            platesDescription.append(platesImage);
            var platesData = document.createElement('div');
            platesData.classList.add('plates__data');
            cardPlates.append(platesData);
            var h4PlatesData = document.createElement('h4');
            platesData.append(h4PlatesData);
            var pPlatesData = document.createElement('p');
            platesData.append(pPlatesData);
            var cardButton = document.createElement('div');
            cardButton.classList.add('cart-button');
            platesData.append(cardButton);
            var aCardButton = document.createElement('a');
            cardButton.append(aCardButton);
            aCardButton.innerHTML = 'Agregar ';
            aCardButton.setAttribute('href', '#');
            var iCardButton = document.createElement('i');
            iCardButton.classList.add('fas');
            iCardButton.classList.add('fa-shopping-basket');
            aCardButton.append(iCardButton);  
            pPlatesDescription.innerHTML = plate.description;
            h4PlatesData.innerHTML = plate.name;
            pPlatesData.innerHTML = '$' + plate.price;
            }

           
            var idPlatesFilter = [];
            for(var plate of platesFilter){
                idPlatesFilter.push(plate.id); 
            }                
                      
            var ingredientsFilter = await fetchIngredients(idPlatesFilter);
            

            var percentageWidthIngredient = (100 * (ingredientsFilter.length - idIngredientsSelected.length)) / ingredientsAll.length;
            var detailIngredients = document.querySelector(".detail__ingredients");
            var percentageWidthPlates = (100 * platesFilter.length) / platesAll.length;
            var detailPlates = document.querySelector(".detail__plates");
            
            if(idIngredientsSelected.length === 0) {
                lineIngredients.style.width = percentageWidthIngredient + '%';
                detailIngredients.innerHTML = `Podés elegir ${ingredientsAll.length} de nuestros ${ingredientsAll.length} ingredientes`;
                linePlates.style.width = percentageWidthPlates + '%';
                detailPlates.innerHTML = `Podés elegir ${platesAll.length} de ${platesAll.length} platos`;

            } else {
                lineIngredients.style.width = percentageWidthIngredient + '%';
                var ingredientsSelectable = ingredientsFilter.length - idIngredientsSelected.length;
                detailIngredients.innerHTML = `Podés elegir ${ingredientsSelectable} de nuestros ${ingredientsAll.length} ingredientes`;
                linePlates.style.width = percentageWidthPlates + '%';
                detailPlates.innerHTML = `Podés elegir ${platesFilter.length} de ${platesAll.length} platos`;
                
            }
            
            var buttonsIngredients = document.querySelectorAll('.container__ingredients button');
            for(var buttonIngredient of buttonsIngredients) {
                buttonIngredient.remove();
            }

            for(var ingredient of ingredientsFilter) {
                if(!idIngredientsSelected.includes(ingredient.id.toString())) {
                    var buttonIngredient = document.createElement('button');
                    var spanButtonIngredient = document.createElement('span');
                    var imgButtonIngredient = document.createElement('img');
                    var pButtonIngredient = document.createElement('p');
                    var iButtonIngredient = document.createElement('i');

                    containerIngredients.append(buttonIngredient);
                    buttonIngredient.classList.add('button__ingredient');
                    buttonIngredient.setAttribute('type', 'submit');
                    buttonIngredient.setAttribute('id', ingredient.id);
                    buttonIngredient.setAttribute('onclick', 'myFunction(' + ingredient.id + ')');
                    imgButtonIngredient.setAttribute('src', '/storage/' + ingredient.image);
                    imgButtonIngredient.classList.add('button__img');
                    buttonIngredient.append(spanButtonIngredient);
                    buttonIngredient.append(imgButtonIngredient); 
                    buttonIngredient.append(pButtonIngredient);
                    buttonIngredient.append(iButtonIngredient);
                    spanButtonIngredient.innerHTML = ingredient.name;         
                    pButtonIngredient.innerHTML = 'Agregar';
                    iButtonIngredient.classList.add('fas');
                    iButtonIngredient.classList.add('fa-minus-circle');                        
                }   
            }

        }

        async function fetchPlatesAll() {           
        var response = await fetch('/api/plates', {
        })
        var plates =  await response.json();
        var p = plates;
        return p;            
        }
        
        async function fetchIngredientsAll() {           
        var response = await fetch('/api/ingredientsAll', {
        })
        var ingredients =  await response.json();
        var i = ingredients;
        return i;            
        }

        async function fetchPlates(idIngredientsSelected) {           
        var idIngredients = idIngredientsSelected.join(',');
        var response = await fetch('/api/products?ingredientsId=' + idIngredients, {
        })
        var platesFilter =  await response.json();
        var p = platesFilter;
        return p;            
        }

        async function fetchIngredients(idPlatesFilter) {           
        var idPlates = idPlatesFilter.join(',');
        var response = await fetch('/api/ingredients?platesId=' + idPlates, {
        })
        var ingredientsFilter =  await response.json();
        var i = ingredientsFilter;
        return i;            
        }

        /*
        function fetchPlates(idIngredientsSelected) {
            var idIngredients = idIngredientsSelected.join(',');
            fetch('/api/products?ingredientsId=' + idIngredients, {
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(platesFilter) {
                var p = platesFilter;
                console.log(p); 
                return p;
            })
            .catch(function(error) {
                console.log(JSON.stringify(data));
                console.log("The error was: " + error);
            });
        }*/





        

    </script>
</html>