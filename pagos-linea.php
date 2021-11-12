<?php 
    include 'template-parts/header.php';
?>

<div class="the__contenedor">
    <div class="mi-content--imagen mi-content--imagen-left mi-content--imagen-left--background">
        <img class="mi-content--imagen-banner"src="assets/images/pagos-en-linea.jpg"> 
        <div class="mi-content--imagen-blog mi-content--imagen-flex">
            <div class="mi-content--imagen-bloque">
                <ul class="breadcrumb__lista">
                    <li class="breadcrumb__item breadcrumb__item-color">
                        Inicio
                    </li>
                    <li class="breadcrumb__item breadcrumb__item-color breadcrumb__before breadcrumb__before--color">
                        Blog
                    </li>
                    <li class="breadcrumb__item breadcrumb__item-color breadcrumb__color breadcrumb__before breadcrumb__before--color">
                        Nombre categoría
                    </li>
                </ul>
                <h2 class="mi-content--imagen-titulo-blog"><b class="white__light">Pagos en </b><b class="orange">linea</b></h2>
            </div>
            <div class="mi-content--imagen-bloque">
                <img src="assets/images/logo-pse1.png" alt="">
            </div>
        </div>
    </div>
</div>

<section class="mi-content--background">
    <div class="titulo titulo--grey">
        <div class="titulo__contenedor titulo__flex">
            <h2 class="titulo__contenido"><b class="grey__light">Selecciona el tipo de pago que vas a hacer</h2>
        </div>
    </div>
    <div class="card-pagos">
        <div class="card-pagos__contenedor" id="container">
            <div class="card-pagos__background"></div>
            <p class="card-pagos__descripcion card-pagos__descripcion--hidden">Pago mensual de cuota inicial</p>
            <div class="card-pagos__opacity">
                <h3 class="card-pagos__descripcion"><b class="white__light">Pago mensual de cuota inicial</b> <b class="white">seleccionado</b></h3>
                <p class="card-pagos__terminos">Acepta los terminos y condiciones y da clic en continuar</p>
                <div class="card-pagos__contenedor-end">
                    <img src="assets/images/pay-down.svg" alt="" class="card-pagos__icono">
                </div>
                <a href="#" class="card-pagos__instrucciones">Leer instrucciones de pago</a>
            </div>
        </div>
        <div class="card-pagos__contenedor" id="container">
            <div class="card-pagos__background card-pagos__background--separacion"></div>
            <p class="card-pagos__descripcion card-pagos__descripcion--hidden">Pago de separación</p>
            <div class="card-pagos__opacity">
                <h3 class="card-pagos__descripcion"><b class="white__light">Pago mensual de cuota inicial</b> <b class="white">seleccionado</b></h3>
                <p class="card-pagos__terminos card-pagos__terminos--left">Acepta los terminos y condiciones y da clic en continuar</p>
                <div class="card-pagos__contenedor-end card-pagos__contenedor-start">
                    <img src="assets/images/pay-down.svg" alt="" class="card-pagos__icono">
                </div>
                <div class="card-pagos__contenedor-end">
                    <a href="#" class="card-pagos__instrucciones">Leer instrucciones de pago</a>
                </div>
            </div>
        </div>
    </div>
    <div class="pop-up__contenedor">
        <a class="card-pagos__instrucciones pop-up__button" id="pop-up__button">Términos y Condiciones  uso Pagos en Línea Prodesa</a>
        <form action="" class="formulario__pagos">
            <label class="formulario__label">
                <b class="grey__light">Al hacer click acepto los </b><a href="#" class="grey formulario__link">terminos y condiciones</a>
                <input class="formulario__checkbox" id="terms-pagos" type="checkbox">
            </label>
        </form>
        <button class="button card__button-top pop-up__terminos" id="pop-up__terminos">
            <a href="./pagos-linea-interna.php" class="button__link">Continuar</a>
        </button>
    </div>

    <!--Pop up -->

    <div class="pop-up">
        <div class="pop-up__bloque">
            <img src="assets/images/close-white-p.png" alt="" class="pop-up__close">
            <div class="pop-up__contenido">
                <h3 class="pop-up__titulo">Términos y Condiciones uso Pagos en Línea Prodesa</h3>
                <p class="pop-up__descripcion">De conformidad con lo previsto en la Ley 1581 de 2012, el Decreto 1377 de 2013 y el Decreto 1074 de 2015 y demás disposiciones complementarias, declaro que entrego a PRODESA Y CIA S.A.S. de forma libre, previa, expresa y voluntaria mis datos personales, para las siguientes finalidades: i) Disponer de la información personal suministrada por sus clientes potenciales y visitantes al momento del ingreso a las salas de ventas; ii) Realizar ofertas y promociones; iii) Realizar evaluaciones y/o encuestas relacionados con el nivel de satisfacción de sus clientes, en relación con los productos y servicios prestados; iv) Envío de comunicaciones de carácter legal y comercial relacionadas con los productos y servicios prestados; vi) Ejecución de análisis y perfilamiento de clientes y clientes potenciales que permita definir productos y servicios que se acomoden a sus necesidades; vii) Envío de comunicaciones sobre la realización de actividades y eventos organizados por PRODESA; viii)Desarrollo de investigaciones de mercado y hábitos de consumo, análisis estadísticos y reportes de comportamiento de clientes; ix) Para el normal desarrollo de la relación contractual o comercial. Asimismo, doy mi autorización autorizo para que mis Datos Personales sean recolectados y tratados de conformidad con la política de privacidad o política de tratamiento de la información de PRODESA, la cual está disponible en la página web www.prodesa.com. </p>
            </div>
        </div>
    </div>
     
</section>

<script>

function myFunctionPay() {
    var cardPayAll, i;
    var cardPay; 
    console.log(cardPay)
    var cardPayAll = document.querySelectorAll(".card-pagos__contenedor");
    for (i = 0; i < cardPayAll.length; i++) {
        cardPayAll[i].onclick = function() {
            this.classList.add('active');
        };               
    }
}
myFunctionPay();

// POP UP

const buttonPopUp = document.querySelector('#pop-up__button');
const popUp = document.querySelector('.pop-up');
const popUpTerminos = document.querySelector('#pop-up__terminos');
const popUpClose = document.querySelector('.pop-up__close');

buttonPopUp.addEventListener('click', () =>{
    popUp.classList.add('active');
});

popUpClose.addEventListener('click', () =>{
    popUp.classList.remove('active');
    popUpTerminos.classList.add('active');
});

//VALIDACION TERMINOS

const terminosCheck = document.querySelector('#terms-pagos');

terminosCheck.addEventListener('click', () =>{
    popUpTerminos.classList.toggle('validado');
})


</script>


<?php 
    include 'template-parts/footer.php';
?>