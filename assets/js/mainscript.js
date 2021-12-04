const desplegable = document.getElementById('desplegable');
const desplegableMobile = document.querySelectorAll('#desplegableMobile');
const desplegableMobileCategorias = document.querySelector('#desplegableMobileCategorias');

desplegable.addEventListener('click', () =>{
    desplegable.classList.toggle('active');
    desplegableMobile.forEach( (desplegar) =>{
        desplegar.classList.toggle('active');
    });
});


function myFunction() {
    var x, i;
    var desplegarMobile; 
    console.log(desplegarMobile)
    x = document.querySelectorAll("#desplegableMobile");
    for (i = 0; i < x.length; i++) {
        x[i].onclick = function() {
            this.classList.toggle('header__desplegar__categorias');
        };               
    }
}
myFunction();


//MENU HAMBURGUESA
const navTwo = document.querySelector('#hamburger');
const mainLeft = document.querySelector('#main-list');

navTwo.addEventListener('click', () => {
    navTwo.classList.toggle('open');
    mainLeft.classList.toggle('active')
});



$(document).ready(function(){

    $(".owl-carousel__quienes-somos").owlCarousel({
        items : 3, //NUMERO DE ITEMS
        // loop: true, // HACE AL CAROUSEL INFINITO
        margin: 30, //MARGEN ENTRE ELEMENTOS
        nav: true, //AGREGAR FLECHITAS
        // navText: ["anterior", "siguiente"], //CAMBIAR TEXTO DEL SIGUIENTE Y ANTERIOR
        autoplay: false, //AGREGAR AUTOPLAY
        dots: true, //PARA OCULTAR O MOSTRAR LOS DOTS
        responsive: { //RESPONSIVE
            0:{
                items: 1
            },
            360:{
                items: 1
            },
            560:{
                items: 2
            },
            980:{
                items: 3
            },
            1300: {
                items: 3
            },
        }
    });
    
    
    
});

$(document).ready(function(){

    $(".owl-carousel--hito").owlCarousel({
        items : 3, //NUMERO DE ITEMS
        // loop: true, // HACE AL CAROUSEL INFINITO
        margin: 30, //MARGEN ENTRE ELEMENTOS
        nav: true, //AGREGAR FLECHITAS
        // navText: ["anterior", "siguiente"], //CAMBIAR TEXTO DEL SIGUIENTE Y ANTERIOR
        autoplay: true, //AGREGAR AUTOPLAY
        autoplayTimeout: 5000, //TIEMPO DEL AUTOPLAY
        dots: false, //PARA OCULTAR O MOSTRAR LOS DOTS
        responsive: { //RESPONSIVE
            0:{
                items: 1
            },
            360:{
                items: 1
            },
            560:{
                items: 2
            },
            980:{
                items: 3
            },
            1300: {
                items: 4
            },
        }
    });
    
    
    
});
$(document).ready(function(){

    $(".owl-carousel--quienes").owlCarousel({
        items : 3, //NUMERO DE ITEMS
        // loop: true, // HACE AL CAROUSEL INFINITO
        margin: 30, //MARGEN ENTRE ELEMENTOS
        nav: true, //AGREGAR FLECHITAS
        // navText: ["anterior", "siguiente"], //CAMBIAR TEXTO DEL SIGUIENTE Y ANTERIOR
        autoplay: true, //AGREGAR AUTOPLAY
        autoplayTimeout: 5000, //TIEMPO DEL AUTOPLAY
        dots: false, //PARA OCULTAR O MOSTRAR LOS DOTS
        responsive: { //RESPONSIVE
            0:{
                items: 1
            },
            360:{
                items: 2
            },
            560:{
                items: 3
            },
            980:{
                items: 3
            },
            1300: {
                items: 3
            },
        }
    });
    
    
    
});

$(document).ready(function(){

    $(".owl-carousel--blog").owlCarousel({
        items : 3, //NUMERO DE ITEMS
        // loop: true, // HACE AL CAROUSEL INFINITO
        margin: 30, //MARGEN ENTRE ELEMENTOS
        nav: true, //AGREGAR FLECHITAS
        // navText: ["anterior", "siguiente"], //CAMBIAR TEXTO DEL SIGUIENTE Y ANTERIOR
        // autoplay: true, //AGREGAR AUTOPLAY
        // autoplayTimeout: 10000, //TIEMPO DEL AUTOPLAY
        dots: false, //PARA OCULTAR O MOSTRAR LOS DOTS
        responsive: { //RESPONSIVE
            0:{
                items: 1
            },
            360:{
                items: 1
            },
            560:{
                items: 1
            },
            980:{
                items: 2
            },
            1300: {
                items: 3
            },
        }
    });
    
    
    
});
$(document).ready(function(){

    $(".owl-carousel--futuro").owlCarousel({
        items : 3, //NUMERO DE ITEMS
        // loop: true, // HACE AL CAROUSEL INFINITO
        margin: 30, //MARGEN ENTRE ELEMENTOS
        nav: true, //AGREGAR FLECHITAS
        // navText: ["anterior", "siguiente"], //CAMBIAR TEXTO DEL SIGUIENTE Y ANTERIOR
        // autoplay: true, //AGREGAR AUTOPLAY
        // autoplayTimeout: 10000, //TIEMPO DEL AUTOPLAY
        dots: true, //PARA OCULTAR O MOSTRAR LOS DOTS
        responsive: { //RESPONSIVE
            0:{
                items: 1
            },
            360:{
                items: 1
            },
            560:{
                items: 1
            },
            980:{
                items: 2
            },
            1300: {
                items: 3
            },
        }
    });
    
    
    
});
$(document).ready(function(){

    $(".owl-carousel--invertir").owlCarousel({
        items : 3, //NUMERO DE ITEMS
        // loop: true, // HACE AL CAROUSEL INFINITO
        margin: 30, //MARGEN ENTRE ELEMENTOS
        nav: true, //AGREGAR FLECHITAS
        // navText: ["anterior", "siguiente"], //CAMBIAR TEXTO DEL SIGUIENTE Y ANTERIOR
        // autoplay: true, //AGREGAR AUTOPLAY
        // autoplayTimeout: 10000, //TIEMPO DEL AUTOPLAY
        dots: false, //PARA OCULTAR O MOSTRAR LOS DOTS
        responsive: { //RESPONSIVE
            0:{
                items: 1
            },
            360:{
                items: 1
            },
            560:{
                items: 1
            },
            980:{
                items: 2
            },
            1300: {
                items: 3
            },
        }
    });
    
    
    
});
$(document).ready(function(){

    $(".owl-carousel-card").owlCarousel({
        items : 3, //NUMERO DE ITEMS
        // loop: true, // HACE AL CAROUSEL INFINITO
        margin: 30, //MARGEN ENTRE ELEMENTOS
        nav: true, //AGREGAR FLECHITAS
        // navText: ["anterior", "siguiente"], //CAMBIAR TEXTO DEL SIGUIENTE Y ANTERIOR
        // autoplay: true, //AGREGAR AUTOPLAY
        // autoplayTimeout: 10000, //TIEMPO DEL AUTOPLAY
        dots: false, //PARA OCULTAR O MOSTRAR LOS DOTS
        responsive: { //RESPONSIVE
            0:{
                items: 1
            },
            360:{
                items: 1
            },
            560:{
                items: 1
            },
            760:{
                items: 1
            },
            1000: {
                items: 3
            },
            1600: {
                items: 4
            }
        }
    });
    
    
    
});
$(document).ready(function(){

    $(".owl-carousel-lanzamiento").owlCarousel({
        items : 3, //NUMERO DE ITEMS
        // loop: true, // HACE AL CAROUSEL INFINITO
        margin: 30, //MARGEN ENTRE ELEMENTOS
        nav: true, //AGREGAR FLECHITAS
        // navText: ["anterior", "siguiente"], //CAMBIAR TEXTO DEL SIGUIENTE Y ANTERIOR
        // autoplay: true, //AGREGAR AUTOPLAY
        // autoplayTimeout: 10000, //TIEMPO DEL AUTOPLAY
        dots: true, //PARA OCULTAR O MOSTRAR LOS DOTS
        responsive: { //RESPONSIVE
            0:{
                items: 1
            },
            360:{
                items: 1
            },
            560:{
                items: 1
            },
            1000: {
                items: 2
            },
            1600: {
                items: 2
            }
        }
    });
    
    
    
});

$(document).ready(function(){

$(".owl-carousel").owlCarousel({
    items : 1, //NUMERO DE ITEMS
    // loop: true, // HACE AL CAROUSEL INFINITO
    margin: 10, //MARGEN ENTRE ELEMENTOS
    nav: true, //AGREGAR FLECHITAS
    // navText: ["anterior", "siguiente"], //CAMBIAR TEXTO DEL SIGUIENTE Y ANTERIOR
    // autoplay: true, //AGREGAR AUTOPLAY
    // autoplayTimeout: 10000, //TIEMPO DEL AUTOPLAY
    dots: false, //PARA OCULTAR O MOSTRAR LOS DOTS
    responsive: { //RESPONSIVE
        0:{
            items: 1
        },
        360:{
            items: 1
        },
        1000: {
            items: 1
        }
    }
});



});
        