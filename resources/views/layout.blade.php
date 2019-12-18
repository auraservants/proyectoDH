<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/3233ba318b.js" crossorigin="anonymous"></script>
        <script src ="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha256-3blsJd4Hli/7wCQ+bmgXfOdK7p/ZUMtPXY08jmxSSgk=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha256-ENFZrbVzylNbgnXx0n3I1g//2WeO47XxoPe0vkp3NC8=" crossorigin="anonymous" />
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
                    @auth
                    <li><a href="/cart" id="link-cart" class="btn-header"><i class="fas fa-shopping-basket"></i> <span>Carrito</span> </a></li>
                    @endauth
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
                            <li><a href="/admin-ingredients"><i class="fas fa-cog"></i></a></li>
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
                    <p>Av. Callao 506, CABA, Argentina.</p>
                    <p>Teléfono: 11 50685947</p>
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
                    @auth
                    <ul>
                        <h3 class="Links"></h3>
                        <li><a href="/cart" id="link-home" class="btn-header">Carrito</a></li>
                        <li><a href="/home" id="link-us" class="btn-header">Mi Cuenta</a></li>
                        <li><a href="/home#myData" id="link-shop" class="btn-header">Mis Datos</a></li>
                        <li><a href="/home#points" id="link-contact" class="btn-header">Mis puntos</a></li>
                    </ul>
                    @endauth
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
            
            var pNotSelectedIngredients = document.querySelector('.not_selected_Ingredients');
                if(pNotSelectedIngredients) {
                    pNotSelectedIngredients.remove();        
                }

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
            var fetches = await Promise.all([fetchIngredientsAll(), fetchPlatesAll()]);
            var ingredientsAll = fetches[0];//await fetchIngredientsAll();
            var lineIngredients = document.querySelector('.line__ingredients');
            var platesAll = fetches[1]; //await fetchPlatesAll();
            var linePlates = document.querySelector('.line__plates');
            var platesFilter = '';
            if(idIngredientsSelected.length === 0) {
                platesFilter = await fetchPlatesAll();
            } else {
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
                pPlatesDescription.innerHTML = plate.description;
                var platesImage = document.createElement('div');
                platesImage.classList.add('plates__image');
                platesImage.setAttribute('style', 'background-image: url(/storage/' + plate.image + ')');
                platesDescription.append(platesImage);
                var platesData = document.createElement('div');
                platesData.classList.add('plates__data');
                cardPlates.append(platesData);
                var h4PlatesData = document.createElement('h4');
                h4PlatesData.innerHTML = plate.name;
                platesData.append(h4PlatesData);
                var pPlatesData = document.createElement('p');
                pPlatesData.innerHTML = '$' + plate.price;
                platesData.append(pPlatesData);
                var cardButton = document.createElement('button');
                cardButton.classList.add('cart-button');
                platesData.append(cardButton);
                cardButton.innerHTML = 'Agregar ';
                cardButton.setAttribute('type', 'submit');
                cardButton.setAttribute('onclick', 'selectPlate(' + plate.id + ')');
                
                var iCardButton = document.createElement('i');
                iCardButton.classList.add('fas');
                iCardButton.classList.add('fa-shopping-basket');
                cardButton.append(iCardButton);  

                
                
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
                var pNotSelectedIngredients = document.createElement('p');
                pNotSelectedIngredients.classList.add('not_selected_Ingredients');
                containerIngredientsSelected.append(pNotSelectedIngredients);
                pNotSelectedIngredients.innerHTML = 'Aun no has seleccionado ningún ingrediente';

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

        async function selectPlate(id) {
            var response = await fetch('/api/addPlateToCart?plateId=' + id, {
            })
            var resultado =  await response.json();
            console.log(resultado)
            if(resultado) {
                swal ( "Seleccionaste un plato!" , "Dirigite al carrito para ver tus platos seleccionados" , "success" )
                .then(function(){
                    document.location.href = "/cart";});
            } else {
                toast.error('Disculpe las moletias', 'Hubo un error');
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

        async function removePlate(idPlate) {
            var removePlate = await fetchRemovePlate(idPlate);
            if(removePlate) {
                var containerPlateRemove = document.getElementById('plateCartRemove[' + idPlate + ']');
                containerPlateRemove.remove();
                if(document.querySelector('.description_cart') === null){
                
                var container = document.querySelector('.container_buy_cart');
                var p = document.createElement('p');
                p.classList.add('empty_cart');
                p.innerHTML = 'Aun no has seleccionado ningún plato';
                container.append(p);
                }
            }
        }

        async function fetchRemovePlate(idPlate) {
            var response = await fetch('/api/removePlate?plateId=' + idPlate, {
            })
            var resultado =  await response.json();
            return resultado;         
        }

        
        
    </script>
</html>


