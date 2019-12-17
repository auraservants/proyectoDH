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

    var cardIngredients = document.getElementsByClassName('card__ingredients');
    
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
                toastr.warning("Por favor complete su nombre", "Nombre vacío" );
                status.push(false);
            }
            if(email.value === '') {
                toastr.warning("Por favor complete su email", "Email vacío");
                status.push(false);

            } else {
                var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(!regexEmail.test(email.value)) {
                    toastr.warning("Por favor ingrese un email válido", "Email inválido");                        
                    status.push(false);
                    
                }
            }

            if(card.checked) {
                var nameCard = document.getElementById('nameCardCheckout');
                var numberCard = document.getElementById('numberCardCheckout');
                var cvvCard = document.getElementById('cvvCardCheckout');
                if(nameCard.value === '') {
                    toastr.warning("Por favor complete el nombre en la tarjeta","Nombre tarjeta vacío");
                    status.push(false);
                    
                } 
                if(numberCard.value === '') {
                    toastr.warning("Por favor complete el número de la tarjeta", "Número tarjeta vacío");
                    status.push(false);
                    
                }
                if(cvvCard.value === '') {
                    toastr.warning("Por favor complete el CVV de la tarjeta", "CVV vacío");
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


    


}






