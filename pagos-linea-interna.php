<?php
    include 'template-parts/header.php'
?>

<div class="the__contenedor">
    <div class="mi-content--imagen mi-content--imagen-left mi-content--imagen-left--background">
        <img class="mi-content--imagen-banner"src="assets/images/picture_pay.jpg"> 
        <div class="pagos-header__contenedor">
            <div class="pagos-header__left">
                <img src="assets/images/payment_header.svg" alt="" class="pagos-header__icono">
            </div>
            <div class="pagos-header__right">
                <h2 class="pagos-header__titulo">Pago Mensual <b class="orange">de cuota inicial</b></h2>
                <p class="pagos-header__descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, hic non sequi culpa perspiciatis modi quo eos recusandae repellat, fugit, atque porro incidunt. Obcaecati doloribus laboriosam, rerum in tempore delectus.</p>
                <form action="" class="form__pagos">
                    <div class="form__pagos-left">
                        <input type="search" class="form__pagos-input" placeholder="Escriba el nombre del proyecto">
                    </div>
                    <div class="form__pagos-rigth">
                        <select name="" id="select-pagos" class="custom-select__hidden form__pagos-right--flex">
                            <option value="option1">option 1</option>
                            <option value="option2">option 2</option>
                            <option value="option3">option 3</option>
                            <option value="option4">option 4</option>
                            <option value="option5">option 5</option>
                            <option value="option6">option 6</option>
                            <option value="option7">option 7</option>
                            <option value="option8">option 8</option>
                        </select>
                        <div  class="custom-select__contenedor form__pagos-right--flex" id="custom-select__contenedor">
                            <h2 class="custom-select__seleccionado" id="custom-select__seleccionado">Ciudad</h2>
                            <div class="custom-select" id="custom-select">

                            </div>
                        </div>
                        <button class="form__pagos-button form__pagos-right--flex">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    include 'template-parts/footer.php'
?>
<script src="assets/js/select.js"></script>


