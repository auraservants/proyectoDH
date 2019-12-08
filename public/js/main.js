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
    /*
    var muestra;
    
    var tope;//
    var restult;// = floor(cardIngredients.length / tope);
    var resto;// = cardIngredients.length % tope;
    var index;
    var eleArr=[];
    var outerArray=[];
    tope=12;
    
    /*for(var i = 0; i < cardIngredients.length; i++) {
        eleArr.push(cardIngredients[i]);
    }

    if(eleArr%tope==0){
        for(var i = 0; i < eleArr.length;) {
            eleArr.slice(i, i+1)
            i+=tope;
        }
    } else {
        result = Math.floor(cardIngredients.length/tope);
        resto = cardIngredients.length % tope;
        var j = 0;
        for(var i = 0; i < result; i++) {
            outerArray.push(eleArr.slice(j, tope));
            j+=tope;
        }
        outerArray.push(eleArr.slice(j));
    }
    
    index = outerArray.length;*/





}

