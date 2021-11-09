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

</script>


<?php 
    include 'template-parts/footer.php';
?>