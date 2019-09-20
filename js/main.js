// variables

let nav = document.getElementById('nav');
let menu = document.getElementById('nav-links');

function menus(){
    let Desplazamiento_Actual = window.pageYOffset;
    if(Desplazamiento_Actual <= 244){
        nav.classList.remove('nav2');
        nav.className = ('nav1');
        nav.style.transition = '1s';
    }else{
        nav.classList.remove('nav1');
        nav.className = ('nav2');
        nav.style.transition = '1s';

    }
}

window.addEventListener('scroll', function(){
    console.log(window.pageYOffset);
    menus();
});
