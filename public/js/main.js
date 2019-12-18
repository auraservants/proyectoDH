// variables
window.onload = function() {

    let nav = document.getElementById('nav');
    let menu = document.getElementById('nav-links');

    function menus(){
        let Desplazamiento_Actual = window.pageYOffset;
        if(Desplazamiento_Actual <= 100){
            nav.classList.remove('nav2');
            nav.className = ('nav1');
            nav.style.transition = '.5s';
        }else{
            nav.classList.remove('nav1');
            nav.className = ('nav2');
            nav.style.transition = '.5s';

        }
    }

    window.addEventListener('scroll', function(){
        menus();
    });



    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }

    var cardCheck = document.getElementById('cardCheckout');
    var cardsData = document.querySelector('.cards__data');
    var cashCheck = document.getElementById('cashCheckout');
    var paymentChecks = document.querySelector('.checkout_checks');
    if(cardCheck){

        if(cardCheck.checked) {
            cardsData.style.display = 'block';
        } else if(cashCheck.checked){
            cardsData.style.display = 'none';
        }
        paymentChecks.addEventListener('click', function() {
            if(cardCheck.checked) {
                cardsData.style.display = 'block';
            } else if(cashCheck.checked){
                cardsData.style.display = 'none';
            }
        });
    }


    var aFinishPurchase = document.querySelector('.btn_finishPurchase');
    if(aFinishPurchase) {
        aFinishPurchase.onclick = function(event) {
            event.preventDefault();
            var name = document.getElementById('nameCheckout');
            var email = document.getElementById('emailCheckout');
            var cash = document.getElementById('cashCheckout');
            var card = document.getElementById('cardCheckout');
            var status = [];
            if(name.value === '') {
                toastr.warning("Por favor complete su nombre", "Nombre vacío",{onclick: function() {
                    name.focus();
                }});
                status.push(false);
            }
            if(email.value === '') {
                toastr.warning("Por favor complete su email", "Email vacío",{onclick: function() {
                    email.focus();
                }});
                status.push(false);

            } else {
                var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(!regexEmail.test(email.value)) {
                    toastr.warning("Por favor ingrese un email válido", "Email inválido",{onclick: function() {
                        email.focus();
                    }});
                    status.push(false);

                }
            }

            if(card.checked) {
                var nameCard = document.getElementById('nameCardCheckout');
                var numberCard = document.getElementById('numberCardCheckout');
                var cvvCard = document.getElementById('cvvCardCheckout');
                if(nameCard.value === '') {
                    toastr.warning("Por favor complete el nombre en la tarjeta","Nombre tarjeta vacío",{onclick: function() {
                        nameCard.focus();
                    }});
                    status.push(false);

                }
                if(numberCard.value === '') {
                    toastr.warning("Por favor complete el número de la tarjeta", "Número tarjeta vacío",{onclick: function() {
                        numberCard.focus();
                    }});
                    status.push(false);

                }
                if(cvvCard.value === '') {
                    toastr.warning("Por favor complete el CVV de la tarjeta", "CVV vacío",{onclick: function() {
                        cvvCard.focus();
                    }});
                    status.push(false);

                }
            }
            if(status.length == 0){

                swal( "Tu compra finalizó con exito!" , "Ahora solo tienes que esperar a que llegue tu pedido" , "success" )
                .then(function(){
                    document.location.href = 'order-received';
                });
            }
        }
    }


    var emptyCart = document.querySelector('.empty_cart');

    var aConfirmPurcharse = document.querySelector('.btn_confirmPurcharse');
    if(aConfirmPurcharse) {
        aConfirmPurcharse.onclick = function(event) {
            event.preventDefault();
            if(!emptyCart) {
                var inputAddressCart = document.querySelectorAll('.inputAddressCart');
                if(inputAddressCart.length === 0) {
                    swal ( "Aun no tienes ninguna dirección" , "Redirigete a tus datos para agregar una nueva" , "warning" )
                    .then(function(){
                        document.location.href = "/home#myData";
                    });
                } else {
                    for(var input of inputAddressCart) {
                        if(input.checked) {
                            swal ( "Finalizaste tu compra con exito!" , "Procede a realizar el pago" , "success" )
                            .then(function(){
                                document.location.href = "/checkout";
                            });
                        } else {
                            swal ( "No seleccionaste ninguna dirección" , "Elige alguna para finalizar tu compra" , "warning" );
                        }
                    }
                }
            } else {
                toastr.warning("Dirigete al shop para iniciar tu compra", "No tienes ningún plato seleccionado");
            }

        }
    }


}






