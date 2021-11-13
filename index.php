<?php 
    include 'template-parts/header.php';
?>

<!-- BUSCADOR -->

<div class="the__contenedor">
    <img src="assets/images/banner-home.png" class="the__contenedor-imagen" width="100%">
    <div class="buscador">
        <div class="buscador__contenido">
            <h2 class="buscador__titulo"><b class="orange__light">¡Construyamos Juntos</b> <b class="white">el hogar de tus sueños!</b></h2>
            <h3 class="buscador__descripcion">Descubre aquí una vivienda que se adapte a ti</h3>
        </div>
        <div class="buscador__contenedor">
            <div class="buscador__opcion">
                <div class="buscador__desplegable buscador__flex">
                    <div class="buscador__bloque" id="ciudad">
                        <span class="buscador__tipo">Ciudad</span>
                        <img src="assets/images/downTwo.svg" alt="" class="buscador__icono">
                    </div>
                    <div class="buscador__lista" id="buscador__ciudad">
                        <p class="buscador__item">Bogotá</p>
                        <p class="buscador__item">Bogotá</p>
                        <p class="buscador__item">Bogotá</p>
                        <p class="buscador__item">Bogotá</p>
                        <p class="buscador__item">Bogotá</p>
                        <p class="buscador__item">Bogotá</p>
                    </div>
                </div>
                <div class="buscador__desplegable buscador__flex">
                    <div class="buscador__bloque" id="precio">
                        <span class="buscador__tipo">Precio</span>
                        <img src="assets/images/downTwo.svg" alt="" class="buscador__icono">
                    </div>
                    <div class="buscador__lista">
                        <p class="buscador__item">Bogotá</p>
                        <p class="buscador__item">Bogotá</p>
                        <p class="buscador__item">Bogotá</p>
                        <p class="buscador__item">Bogotá</p>
                        <p class="buscador__item">Bogotá</p>
                        <p class="buscador__item">Bogotá</p>
                    </div>
                </div>
                <div class="buscador__desplegable buscador__flex">
                    <div class="buscador__bloque" id="metraje">
                        <span class="buscador__tipo">Área</span>
                        <img src="assets/images/downTwo.svg" alt="" class="buscador__icono">
                    </div>
                    <div class="buscador__lista" id="buscador__metraje">
                        <p class="buscador__item">Bogotá</p>
                        <p class="buscador__item">Bogotá</p>
                        <p class="buscador__item">Bogotá</p>
                    </div>
                </div>
                <div class="buscador__buscar buscador__flex">
                    <button class="buscador__boton">
                        Buscar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="the__contenedor-border"></div>
</div>

<!-- SLIDER TOP -->

<div class="mi-content">
    <div class="owl-carousel owl-carousel__home">
        <img src="assets/images/ANIVERSARIO.jpg" alt="" class="item">
        <img src="assets/images/ANIVERSARIO.jpg" alt="" class="item">
        <img src="assets/images/ANIVERSARIO.jpg" alt="" class="item">
        <img src="assets/images/ANIVERSARIO.jpg" alt="" class="item">
    </div>
</div>

<!-- APARTAMENTOS RECOMENDADOS -->


<section class="mi-content--background">
    <div class="titulo titulo--grey">
        <div class="titulo__izquierda titulo__flex"></div>
        <div class="titulo__contenedor titulo__flex">
            <h2 class="titulo__contenido"><b class="orange__light">¡Aprovecha esta</b> <b class="grey">gran oportunidad!</b></h2>
            <p class="titulo__descripcion">Ofertas que no puedes dejar pasar</p>
        </div>
        <div class="titulo__derecha titulo__flex"></div>
    </div>
    <div class="card__contenedor-carousel">
        <div class="owl-carousel owl-carousel-card">
            <div class="card item">
                <div class="card__top">
                    <h2 class="card__titulo">Apartamento 65m2</h2>
                    <img src="assets/images/promo.png" alt="" class="card__logo">
                </div>
                <div class="card__middle">
                    <div class="card__background">
                        <p class="card__proyecto">Proyecto Cerezo</p>
                    </div>
                    <a class="card__background-imagen">
                        <img src="assets/images/banner-home.png" alt="" class="card__imagen">
                    </a>
                    <div class="card__bono">
                        <p class="card__bono-descripcion">Bono navideño $5m</p>
                    </div>
                    <div class="card__redes">
                        <!-- <img src="" alt="" class="card__redes-imagen"> -->
                    </div>
                </div>
                <div class="card__semi-bottom">
                    <div class="card__contenedor-ubicacion">
                        <img src="assets/images/ubicacion.svg" alt="" class="card__ubicacion-imagen">
                        <p class="card__ubicacion">Bogotá</p>
                    </div>
                    <div class="card__contenedor-descripcion">
                        <p class="card__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut blanditiis, perspiciatis pariatur possimus distinctio  alias animi amet accusamus omnis sequi at consectetur, quis illo officiis eius obcaecati aut quos.</p>
                        <div class="card__bloque-descripcion">
                            <img src="assets/images/icon_area.svg" alt="" class="card__metraje-icono">
                            <div class="card__contenedor-metraje">
                                <p class="card__metraje">Areá privada desde 20m2</p>
                                <p class="card__metraje">Areá construida desde 20m2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card__bottom">
                    <div class="card__bottom-top">
                        <div class="card__precios">
                            <p class="card__precio-anterior">$990.000.000</p>
                            <p class="card__precio">$900.000.000</p>
                        </div>
                        <button class="button card__button-top">
                            <a class="button__link">Ver más</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card item">
                <div class="card__top">
                    <h2 class="card__titulo">Apartamento 65m2</h2>
                    <img src="assets/images/promo.png" alt="" class="card__logo">
                </div>
                <div class="card__middle">
                    <div class="card__background">
                        <p class="card__proyecto">Proyecto Cerezo</p>
                    </div>
                    <a class="card__background-imagen">
                        <img src="assets/images/banner-home.png" alt="" class="card__imagen">
                    </a>
                    <div class="card__bono">
                        <p class="card__bono-descripcion">Bono navideño $5m</p>
                    </div>
                    <div class="card__redes">
                        <!-- <img src="" alt="" class="card__redes-imagen"> -->
                    </div>
                </div>
                <div class="card__semi-bottom">
                    <div class="card__contenedor-ubicacion">
                        <img src="assets/images/ubicacion.svg" alt="" class="card__ubicacion-imagen">
                        <p class="card__ubicacion">Bogotá</p>
                    </div>
                    <div class="card__contenedor-descripcion">
                        <p class="card__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut blanditiis, perspiciatis pariatur possimus distinctio  alias animi amet accusamus omnis sequi at consectetur, quis illo officiis eius obcaecati aut quos.</p>
                        <div class="card__bloque-descripcion">
                            <img src="assets/images/icon_area.svg" alt="" class="card__metraje-icono">
                            <div class="card__contenedor-metraje">
                                <p class="card__metraje">Areá privada desde 20m2</p>
                                <p class="card__metraje">Areá construida desde 20m2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card__bottom">
                    <div class="card__bottom-top">
                        <div class="card__precios">
                            <p class="card__precio-anterior">$990.000.000</p>
                            <p class="card__precio">$900.000.000</p>
                        </div>
                        <button class="button card__button-top">
                            <a class="button__link">Ver más</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card item">
                <div class="card__top">
                    <h2 class="card__titulo">Apartamento 65m2</h2>
                    <img src="assets/images/promo.png" alt="" class="card__logo">
                </div>
                <div class="card__middle">
                    <div class="card__background">
                        <p class="card__proyecto">Proyecto Cerezo</p>
                    </div>
                    <a class="card__background-imagen">
                        <img src="assets/images/banner-home.png" alt="" class="card__imagen">
                    </a>
                    <div class="card__bono">
                        <p class="card__bono-descripcion">Bono navideño $5m</p>
                    </div>
                    <div class="card__redes">
                        <!-- <img src="" alt="" class="card__redes-imagen"> -->
                    </div>
                </div>
                <div class="card__semi-bottom">
                    <div class="card__contenedor-ubicacion">
                        <img src="assets/images/ubicacion.svg" alt="" class="card__ubicacion-imagen">
                        <p class="card__ubicacion">Bogotá</p>
                    </div>
                    <div class="card__contenedor-descripcion">
                        <p class="card__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut blanditiis, perspiciatis pariatur possimus distinctio  alias animi amet accusamus omnis sequi at consectetur, quis illo officiis eius obcaecati aut quos.</p>
                        <div class="card__bloque-descripcion">
                            <img src="assets/images/icon_area.svg" alt="" class="card__metraje-icono">
                            <div class="card__contenedor-metraje">
                                <p class="card__metraje">Areá privada desde 20m2</p>
                                <p class="card__metraje">Areá construida desde 20m2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card__bottom">
                    <div class="card__bottom-top">
                        <div class="card__precios">
                            <p class="card__precio-anterior">$990.000.000</p>
                            <p class="card__precio">$900.000.000</p>
                        </div>
                        <button class="button card__button-top">
                            <a class="button__link">Ver más</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card item">
                <div class="card__top">
                    <h2 class="card__titulo">Apartamento 65m2</h2>
                    <img src="assets/images/promo.png" alt="" class="card__logo">
                </div>
                <div class="card__middle">
                    <div class="card__background">
                        <p class="card__proyecto">Proyecto Cerezo</p>
                    </div>
                    <a class="card__background-imagen">
                        <img src="assets/images/banner-home.png" alt="" class="card__imagen">
                    </a>
                    <div class="card__bono">
                        <p class="card__bono-descripcion">Bono navideño $5m</p>
                    </div>
                    <div class="card__redes">
                        <!-- <img src="" alt="" class="card__redes-imagen"> -->
                    </div>
                </div>
                <div class="card__semi-bottom">
                    <div class="card__contenedor-ubicacion">
                        <img src="assets/images/ubicacion.svg" alt="" class="card__ubicacion-imagen">
                        <p class="card__ubicacion">Bogotá</p>
                    </div>
                    <div class="card__contenedor-descripcion">
                        <p class="card__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut blanditiis, perspiciatis pariatur possimus distinctio  alias animi amet accusamus omnis sequi at consectetur, quis illo officiis eius obcaecati aut quos.</p>
                        <div class="card__bloque-descripcion">
                            <img src="assets/images/icon_area.svg" alt="" class="card__metraje-icono">
                            <div class="card__contenedor-metraje">
                                <p class="card__metraje">Areá privada desde 20m2</p>
                                <p class="card__metraje">Areá construida desde 20m2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card__bottom">
                    <div class="card__bottom-top">
                        <div class="card__precios">
                            <p class="card__precio-anterior">$990.000.000</p>
                            <p class="card__precio">$900.000.000</p>
                        </div>
                        <button class="button card__button-top">
                            <a class="button__link">Ver más</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card item">
                <div class="card__top">
                    <h2 class="card__titulo">Apartamento 65m2</h2>
                    <img src="assets/images/promo.png" alt="" class="card__logo">
                </div>
                <div class="card__middle">
                    <div class="card__background">
                        <p class="card__proyecto">Proyecto Cerezo</p>
                    </div>
                    <a class="card__background-imagen">
                        <img src="assets/images/banner-home.png" alt="" class="card__imagen">
                    </a>
                    <div class="card__bono">
                        <p class="card__bono-descripcion">Bono navideño $5m</p>
                    </div>
                    <div class="card__redes">
                        <!-- <img src="" alt="" class="card__redes-imagen"> -->
                    </div>
                </div>
                <div class="card__semi-bottom">
                    <div class="card__contenedor-ubicacion">
                        <img src="assets/images/ubicacion.svg" alt="" class="card__ubicacion-imagen">
                        <p class="card__ubicacion">Bogotá</p>
                    </div>
                    <div class="card__contenedor-descripcion">
                        <p class="card__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut blanditiis, perspiciatis pariatur possimus distinctio  alias animi amet accusamus omnis sequi at consectetur, quis illo officiis eius obcaecati aut quos.</p>
                        <div class="card__bloque-descripcion">
                            <img src="assets/images/icon_area.svg" alt="" class="card__metraje-icono">
                            <div class="card__contenedor-metraje">
                                <p class="card__metraje">Areá privada desde 20m2</p>
                                <p class="card__metraje">Areá construida desde 20m2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card__bottom">
                    <div class="card__bottom-top">
                        <div class="card__precios">
                            <p class="card__precio-anterior">$990.000.000</p>
                            <p class="card__precio">$900.000.000</p>
                        </div>
                        <button class="button card__button-top">
                            <a class="button__link">Ver más</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NUEVOS LANZAMIENTOS -->

<section class="mi-content--background--grey">
    <div class="titulo">
        <div class="titulo__izquierda titulo__flex"></div>
        <div class="titulo__contenedor titulo__flex">
            <h2 class="titulo__contenido"><b class="orange__light">Nuevos</b> <b class="white">Lanzamientos</b></h2>
            <p class="titulo__descripcion"><b class="white__light">¡Se el primero! Aprovecha esta oportunidad</b></p>
        </div>
        <div class="titulo__derecha titulo__flex"></div>
    </div>
    <div class="card__contenedor-carousel card__contenedor-carousel--width">
        <div class="owl-carousel owl-carousel-lanzamiento owl-carousel-lanzamiento-white">
            <div class="lanzamientos">
                <div class="lanzamientos__flex">
                    <div class="lanzamientos__left">
                        <img src="assets/images/banner-home.png" alt="" class="lanzamientos__imagen">
                    </div>
                    <div class="lanzamientos__right">
                        <div class="lanzamientos__flex-end">
                            <h3 class="lanzamientos__titulo">Proyecto Ecociudad de la Riviera</h3>
                            <div class="card__contenedor-ubicacion">
                                <img src="assets/images/ubicacion.svg" alt="" class="card__ubicacion-imagen">
                                <p class="card__ubicacion">Bogotá</p>
                            </div>
                            <p class="lanzamientos__descripcion"> consectetur adipisicing elit. Qui tenetur laudantium eius officia mollitia vel dolore nostrum, iste nesciunt in fuga provident eaque. Vitae, sunt.</p>
                            <div class="card__precios">
                                <p class="card__precio  card__precio--left">Desde $900.000.000</p>
                            </div>
                            <div class="card__bloque-descripcion card__bloque-descripcion--margin">
                                <img src="assets/images/icon_area.svg" alt="" class="card__metraje-icono">
                                <div class="card__contenedor-metraje">
                                    <p class="card__metraje">Areá privada desde 20m2</p>
                                    <p class="card__metraje">Areá construida desde 20m2</p>
                                </div>
                            </div>
                        </div>
                        <div class="lanzamientos__cta">
                            <button class="button button--margin">
                                <a class="button__link">Ver proyecto</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lanzamientos">
                <div class="lanzamientos__flex">
                    <div class="lanzamientos__left">
                        <img src="assets/images/banner-home.png" alt="" class="lanzamientos__imagen">
                        <div class="lanzamientos__destacado">
                            <p class="lanzamientos__destacado-texto">Este es un texto destacado</p>
                        </div>
                    </div>
                    <div class="lanzamientos__right">
                        <h3 class="lanzamientos__titulo">Proyecto Ecociudad de la Riviera</h3>
                        <div class="card__contenedor-ubicacion">
                            <img src="assets/images/ubicacion.svg" alt="" class="card__ubicacion-imagen">
                            <p class="card__ubicacion">Bogotá</p>
                        </div>
                        <p class="lanzamientos__descripcion"> consectetur adipisicing elit. Qui tenetur laudantium eius officia mollitia vel dolore nostrum, iste nesciunt in fuga provident eaque. Vitae, sunt.</p>
                        <div class="card__precios">
                            <p class="card__precio  card__precio--left">Desde $900.000.000</p>
                        </div>
                        <div class="card__bloque-descripcion card__bloque-descripcion--margin">
                            <img src="assets/images/icon_area.svg" alt="" class="card__metraje-icono">
                            <div class="card__contenedor-metraje">
                                <p class="card__metraje">Areá privada desde 20m2</p>
                                <p class="card__metraje">Areá construida desde 20m2</p>
                            </div>
                        </div>
                        <div class="lanzamientos__cta">
                            <button class="button button--margin">
                                <a class="button__link">Ver proyecto</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lanzamientos">
                <div class="lanzamientos__flex">
                    <div class="lanzamientos__left">
                        <img src="assets/images/banner-home.png" alt="" class="lanzamientos__imagen">
                        <div class="lanzamientos__destacado">
                            <p class="lanzamientos__destacado-texto">Este es un texto destacado</p>
                        </div>
                    </div>
                    <div class="lanzamientos__right">
                        <h3 class="lanzamientos__titulo">Proyecto Ecociudad de la Riviera</h3>
                        <div class="card__contenedor-ubicacion">
                            <img src="assets/images/ubicacion.svg" alt="" class="card__ubicacion-imagen">
                            <p class="card__ubicacion">Bogotá</p>
                        </div>
                        <p class="lanzamientos__descripcion"> consectetur adipisicing elit. Qui tenetur laudantium eius officia mollitia vel dolore nostrum, iste nesciunt in fuga provident eaque. Vitae, sunt.</p>
                        <div class="card__precios">
                            <p class="card__precio  card__precio--left">Desde $900.000.000</p>
                        </div>
                        <div class="card__bloque-descripcion card__bloque-descripcion--margin">
                            <img src="assets/images/icon_area.svg" alt="" class="card__metraje-icono">
                            <div class="card__contenedor-metraje">
                                <p class="card__metraje">Areá privada desde 20m2</p>
                                <p class="card__metraje">Areá construida desde 20m2</p>
                            </div>
                        </div>
                        <div class="lanzamientos__cta">
                            <button class="button button--margin">
                                <a class="button__link">Ver proyecto</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lanzamientos">
                <div class="lanzamientos__flex">
                    <div class="lanzamientos__left">
                        <img src="assets/images/banner-home.png" alt="" class="lanzamientos__imagen">
                        <div class="lanzamientos__destacado">
                            <p class="lanzamientos__destacado-texto">Este es un texto destacado</p>
                        </div>
                    </div>
                    <div class="lanzamientos__right">
                        <h3 class="lanzamientos__titulo">Proyecto Ecociudad de la Riviera</h3>
                        <div class="card__contenedor-ubicacion">
                            <img src="assets/images/ubicacion.svg" alt="" class="card__ubicacion-imagen">
                            <p class="card__ubicacion">Bogotá</p>
                        </div>
                        <p class="lanzamientos__descripcion"> consectetur adipisicing elit. Qui tenetur laudantium eius officia mollitia vel dolore nostrum, iste nesciunt in fuga provident eaque. Vitae, sunt.</p>
                        <div class="card__precios">
                            <p class="card__precio  card__precio--left">Desde $900.000.000</p>
                        </div>
                        <div class="card__bloque-descripcion card__bloque-descripcion--margin">
                            <img src="assets/images/icon_area.svg" alt="" class="card__metraje-icono">
                            <div class="card__contenedor-metraje">
                                <p class="card__metraje">Areá privada desde 20m2</p>
                                <p class="card__metraje">Areá construida desde 20m2</p>
                            </div>
                        </div>
                        <div class="lanzamientos__cta">
                            <button class="button button--margin">
                                <a class="button__link">Ver proyecto</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DONDE QUIERES VIVIR -->

<section class="mi-content--background mi-content--background--black">
    <div class="mi-content--limit">
        <div class="titulo">
            <div class="titulo__contenedor titulo__contenedor--width">
                <h2 class="titulo__contenido"><b class="white__light">¿Dónde quieres</b> <b class="orange">vivir?</b></h2>
            </div>
            <div class="titulo__derecha titulo__derecha--width titulo__flex"></div>
            <div class="titulo__vivir">
                <p class="titulo__vivir-texto">¡Descubre el hogar perfecto en el lugar ideal para tu familia!</p>
            </div>
        </div>
        <div class="mosaico tab">
            <div class="mosaico__tab-contenedor tab__controls">
                <button class="button button--tab tab__button active">
                    <a class="button__link">Sabana de Bogotá</a>
                </button>
                <button class="button button--tab tab__button">
                    <a class="button__link">Costa Atlática</a>
                </button>
                <button class="button button--tab tab__button">
                    <a class="button__link">Tolima y Cundinamarca</a>
                </button>
            </div>
            <div class="tab__contenedor">
                <div class="mosaico__grid tab__item">
                    <div class="mosaico__contenedor mosaico__contenedor-1">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-2">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-3">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-4">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-5">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-6">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-7">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mosaico__grid tab__item">
                    <div class="mosaico__contenedor mosaico__contenedor-1">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-2">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-3">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-4">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-5">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-6">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-7">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mosaico__grid tab__item">
                    <div class="mosaico__contenedor mosaico__contenedor-1">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-2">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-3">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-4">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-5">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-6">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                    <div class="mosaico__contenedor mosaico__contenedor-7">
                        <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
                        <div class="mosaico__opacity">
                            <p class="mosaico__parrafo">Bogotá</p>
                            <div class="mosaico__resultados">
                                <span class="mosaico__resultados-texto">16 resultados</span>
                            </div>
                            <button class="button button--absolute">
                                <a class="button__link button--absolute-color">Ver proyectos</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECCION DE LA APP -->

<section class="mi-content--background mi-content--background--white">
    <div class="card__contenedor-carousel card__contenedor-carousel--width">
        <div class="app">
            <div class="app__contenedor__left">
                <img src="assets/images/app-prodesa.png" alt="" class="app__imagen-mobile">
            </div>
            <div class="app__contenedor__right">
                <div class="app__codigo">
                    <img src="assets/images/qr_prodesa.jpeg" alt="" class="app__codigo-imagen">
                </div>
                <div class="app__contenido">
                    <h3 class="app__titulo"><b class="orange__light">La información que buscas</b><br> <b class="grey">a un solo clic</h3>
                    <p class="app__descripcion">Descarga nuestra App Prodesa y realiza<br> consultas desde tu celular</p>
                    <div class="app__contenedor-links">
                        <img src="assets/images/android.png" alt="" class="app__play">
                        <img src="assets/images/apple.png" alt="" class="app__play">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION PARA INVERSIONISTAS -->

<section class="mi-content--background">
    <div class="titulo titulo--grey">
        <div class="titulo__izquierda titulo__flex"></div>
        <div class="titulo__contenedor titulo__flex">
            <h2 class="titulo__contenido"><b class="grey__light">Para</b> <b class="orange">inversionistas</b></h2>
            <p class="titulo__descripcion">Prodesa, tu socio de confianza</p>
        </div>
        <div class="titulo__derecha titulo__flex"></div>
    </div>
    <div class="card__inversionistas">
        <div class="card__inversionistas-bloque">
            <div class="card__inversionistas--left">
                <img src="assets/images/banner-home.png" alt="" class="card__inversionistas--imagen">
            </div>
            <div class="card__inversionistas--right">
                <h2 class="card__inversionistas--titulo">invierte desde el exterior</h2>
                <p class="card__inversionistas--texto">¡Compra seguro e inteligente</p>
                <div class="card__inversionistas--right-bottom">
                    <button class="button button--margin">
                        <a class="button__link">Ver más</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="card__inversionistas-bloque">
            <div class="card__inversionistas--left">
                <img src="assets/images/banner-home.png" alt="" class="card__inversionistas--imagen">
            </div>
            <div class="card__inversionistas--right">
                <h2 class="card__inversionistas--titulo">invierte desde el exterior</h2>
                <p class="card__inversionistas--texto">¡Compra seguro e inteligente</p>
                <div class="card__inversionistas--right-bottom">
                    <button class="button button--margin">
                        <a class="button__link">Ver más</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-invertir__contenedor">
        <h2 class="subtitulo">
            <b class="grey__light">¡Descubre los me inmuebles <b class="orange__light">para invertir!</b>
        </h2>
        <div class="owl-carousel owl-carousel--invertir">
            <div class="card-invertir">
                <div class="card-invertir__top">
                    <div class="card-invertir__bloque-top">
                        <div class="card-invertir__ubicacion">
                            <img src="assets/images/ubicacion-orange.svg" alt="" class="card-invertir__icono-ubicacion">
                            <p class="card-invertir__ciudad">Bogotá</p>
                        </div>
                        <!-- REDES SOCIALES -->
                    </div>
                </div>
                <div class="card-invertir__middle">
                    <img src="assets/images/banner-home.png" alt="" class="card-invertir__imagen">
                </div>
                <div class="card-invertir__bottom">
                    <div class="card-invertir__medidas">
                        <p class="card-invertir__apto">Apartamento 65 m2</p>
                        <div class="card-invertir__bloque-bottom">
                            <img src="assets/images/icon_area-yellow.svg" alt="" class="card-invertir__icono-bottom">
                            <p class="card-invertir__areas">Área Construida 0000 m2 | Área privada 0000 m2</p>
                        </div>
                    </div>
                    <div class="card-invertir-ctas">
                        <a class="button button--transparent">
                            <span class="button__link button__link--hover button__link--transparent">Proyecto granate</span>
                            <span class="button__link button__link--hidden button__link--transparent">Ver proyecto</span>
                        </a>
                        <a class="button button--transparent button--grey">
                            <span class="button__link button__link--grey button__link--hover">900.000.000</span>
                            <span class="button__link button__link--hidden">Ver apto</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-invertir">
                <div class="card-invertir__top">
                    <div class="card-invertir__bloque-top">
                        <div class="card-invertir__ubicacion">
                            <img src="assets/images/ubicacion-orange.svg" alt="" class="card-invertir__icono-ubicacion">
                            <p class="card-invertir__ciudad">Bogotá</p>
                        </div>
                        <!-- REDES SOCIALES -->
                    </div>
                </div>
                <div class="card-invertir__middle">
                    <img src="assets/images/banner-home.png" alt="" class="card-invertir__imagen">
                </div>
                <div class="card-invertir__bottom">
                    <div class="card-invertir__medidas">
                        <p class="card-invertir__apto">Apartamento 65 m2</p>
                        <div class="card-invertir__bloque-bottom">
                            <img src="assets/images/icon_area-yellow.svg" alt="" class="card-invertir__icono-bottom">
                            <p class="card-invertir__areas">Área Construida 0000 m2 | Área privada 0000 m2</p>
                        </div>
                    </div>
                    <div class="card-invertir-ctas">
                        <a class="button button--transparent">
                            <span class="button__link button__link--hover button__link--transparent">Proyecto granate</span>
                            <span class="button__link button__link--hidden button__link--transparent">Ver proyecto</span>
                        </a>
                        <a class="button button--transparent button--grey">
                            <span class="button__link button__link--grey button__link--hover">900.000.000</span>
                            <span class="button__link button__link--hidden">Ver apto</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-invertir">
                <div class="card-invertir__top">
                    <div class="card-invertir__bloque-top">
                        <div class="card-invertir__ubicacion">
                            <img src="assets/images/ubicacion-orange.svg" alt="" class="card-invertir__icono-ubicacion">
                            <p class="card-invertir__ciudad">Bogotá</p>
                        </div>
                        <!-- REDES SOCIALES -->
                    </div>
                </div>
                <div class="card-invertir__middle">
                    <img src="assets/images/banner-home.png" alt="" class="card-invertir__imagen">
                </div>
                <div class="card-invertir__bottom">
                    <div class="card-invertir__medidas">
                        <p class="card-invertir__apto">Apartamento 65 m2</p>
                        <div class="card-invertir__bloque-bottom">
                            <img src="assets/images/icon_area-yellow.svg" alt="" class="card-invertir__icono-bottom">
                            <p class="card-invertir__areas">Área Construida 0000 m2 | Área privada 0000 m2</p>
                        </div>
                    </div>
                    <div class="card-invertir-ctas">
                        <a class="button button--transparent">
                            <span class="button__link button__link--hover button__link--transparent">Proyecto granate</span>
                            <span class="button__link button__link--hidden button__link--transparent">Ver proyecto</span>
                        </a>
                        <a class="button button--transparent button--grey">
                            <span class="button__link button__link--grey button__link--hover">900.000.000</span>
                            <span class="button__link button__link--hidden">Ver apto</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-invertir">
                <div class="card-invertir__top">
                    <div class="card-invertir__bloque-top">
                        <div class="card-invertir__ubicacion">
                            <img src="assets/images/ubicacion-orange.svg" alt="" class="card-invertir__icono-ubicacion">
                            <p class="card-invertir__ciudad">Bogotá</p>
                        </div>
                        <!-- REDES SOCIALES -->
                    </div>
                </div>
                <div class="card-invertir__middle">
                    <img src="assets/images/banner-home.png" alt="" class="card-invertir__imagen">
                </div>
                <div class="card-invertir__bottom">
                    <div class="card-invertir__medidas">
                        <p class="card-invertir__apto">Apartamento 65 m2</p>
                        <div class="card-invertir__bloque-bottom">
                            <img src="assets/images/icon_area-yellow.svg" alt="" class="card-invertir__icono-bottom">
                            <p class="card-invertir__areas">Área Construida 0000 m2 | Área privada 0000 m2</p>
                        </div>
                    </div>
                    <div class="card-invertir-ctas">
                        <a class="button button--transparent">
                            <span class="button__link button__link--hover button__link--transparent">Proyecto granate</span>
                            <span class="button__link button__link--hidden button__link--transparent">Ver proyecto</span>
                        </a>
                        <a class="button button--transparent button--grey">
                            <span class="button__link button__link--grey button__link--hover">900.000.000</span>
                            <span class="button__link button__link--hidden">Ver apto</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-invertir">
                <div class="card-invertir__top">
                    <div class="card-invertir__bloque-top">
                        <div class="card-invertir__ubicacion">
                            <img src="assets/images/ubicacion-orange.svg" alt="" class="card-invertir__icono-ubicacion">
                            <p class="card-invertir__ciudad">Bogotá</p>
                        </div>
                        <!-- REDES SOCIALES -->
                    </div>
                </div>
                <div class="card-invertir__middle">
                    <img src="assets/images/banner-home.png" alt="" class="card-invertir__imagen">
                </div>
                <div class="card-invertir__bottom">
                    <div class="card-invertir__medidas">
                        <p class="card-invertir__apto">Apartamento 65 m2</p>
                        <div class="card-invertir__bloque-bottom">
                            <img src="assets/images/icon_area-yellow.svg" alt="" class="card-invertir__icono-bottom">
                            <p class="card-invertir__areas">Área Construida 0000 m2 | Área privada 0000 m2</p>
                        </div>
                    </div>
                    <div class="card-invertir-ctas">
                        <a class="button button--transparent">
                            <span class="button__link button__link--hover button__link--transparent">Proyecto granate</span>
                            <span class="button__link button__link--hidden button__link--transparent">Ver proyecto</span>
                        </a>
                        <a class="button button--transparent button--grey">
                            <span class="button__link button__link--grey button__link--hover">900.000.000</span>
                            <span class="button__link button__link--hidden">Ver apto</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OFERTAS DE VIVIENDA -->

<section class="mi-content--background mi-content--background--padding mi-content--background--black">
    <div class="mi-content--limit">
        <div class="titulo">
            <div class="titulo__contenedor titulo__contenedor--width">
                <h2 class="titulo__contenido"><b class="white__light">El lugar ideal </b> <b class="orange">para tu familia</b></h2>
            </div>
            <div class="titulo__derecha titulo__derecha--width titulo__flex"></div>
            <div class="titulo__vivir">
                <p class="titulo__vivir-texto">Ubicación privilegiada, espacios amplios y zonas seguras</p>
            </div>
        </div>
    </div>
    <div class="mosaico mosaico-ofertas">
        <div class="mosaico__contenedor mosaico__contenedor--mobile">
            <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
            <div class="mosaico__opacity mosaico__opacity--ofertas">
                <p class="mosaico__parrafo mosaico__parrafo--ofertas">Ofertas de vivienda para los innovadores creativos</p>
                <div class="mosaico__resultados mosaico__resultados--ofertas">
                    <span class="mosaico__resultados-texto mosaico__resultados-texto--ofertas">16 resultados</span>
                </div>
                <button class="button button--absolute button--absolute--mobile">
                    <a class="button__link button--absolute-color">Ver proyectos</a>
                </button>
            </div>
        </div>
        <div class="mosaico__contenedor mosaico__contenedor--mobile">
            <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
            <div class="mosaico__opacity mosaico__opacity--ofertas">
                <p class="mosaico__parrafo mosaico__parrafo--ofertas">Ofertas de vivienda para los innovadores creativos</p>
                <div class="mosaico__resultados mosaico__resultados--ofertas">
                    <span class="mosaico__resultados-texto mosaico__resultados-texto--ofertas">16 resultados</span>
                </div>
                <button class="button button--absolute button--absolute--mobile">
                    <a class="button__link button--absolute-color">Ver proyectos</a>
                </button>
            </div>
        </div>
        <div class="mosaico__contenedor mosaico__contenedor--mobile">
            <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
            <div class="mosaico__opacity mosaico__opacity--ofertas">
                <p class="mosaico__parrafo mosaico__parrafo--ofertas">Ofertas de vivienda para los innovadores creativos</p>
                <div class="mosaico__resultados mosaico__resultados--ofertas">
                    <span class="mosaico__resultados-texto mosaico__resultados-texto--ofertas">16 resultados</span>
                </div>
                <button class="button button--absolute button--absolute--mobile">
                    <a class="button__link button--absolute-color">Ver proyectos</a>
                </button>
            </div>
        </div>
        <div class="mosaico__contenedor mosaico__contenedor--mobile">
            <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
            <div class="mosaico__opacity mosaico__opacity--ofertas">
                <p class="mosaico__parrafo mosaico__parrafo--ofertas">Ofertasasdasdsadsa de vivienda para los innovadores creativos</p>
                <div class="mosaico__resultados mosaico__resultados--ofertas">
                    <span class="mosaico__resultados-texto mosaico__resultados-texto--ofertas">16 resultados</span>
                </div>
                <button class="button button--absolute button--absolute--mobile">
                    <a class="button__link button--absolute-color">Ver proyectos</a>
                </button>
            </div>
        </div>
        <div class="mosaico__contenedor mosaico__contenedor-ofertas mosaico__contenedor--mobile">
            <img src="assets/images/banner-home.png" alt="" class="mosaico__contenedor-imagen">
            <div class="mosaico__opacity mosaico__opacity--ofertas">
                <p class="mosaico__parrafo mosaico__parrafo--ofertas">Ofertas de vivienda para los innovadores creativos</p>
                <div class="mosaico__resultados mosaico__resultados--ofertas">
                    <span class="mosaico__resultados-texto mosaico__resultados-texto--ofertas">16 resultados</span>
                </div>
                <button class="button button--absolute button--absolute--mobile">
                    <a class="button__link button--absolute-color">Ver proyectos</a>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- FUTUROS PROYECTOS -->

<section class="mi-content--background--grey">
    <div class="titulo">
        <div class="titulo__izquierda titulo__flex"></div>
        <div class="titulo__contenedor titulo__flex">
            <h2 class="titulo__contenido"><b class="orange__light">Descubre nuestros</b> <b class="white">futuros proyectos</b></h2>
            <p class="titulo__descripcion"><b class="white__light">Nuevas opciones que harán realidad tu sueño de tener vivienda propia</b></p>
        </div>
        <div class="titulo__derecha titulo__flex"></div>
    </div>
    <div class="card__contenedor-carousel">
        <div class="owl-carousel owl-carousel--futuro">
            <div class="card-futuro">
                <div class="card-futuro__top">
                    <h2 class="card-futuro__titulo">Poryecto la gran doler casa blanca</h2>
                </div>
                <div class="card-futuro__middle">
                    <img src="assets/images/banner-home.png" alt="" class="card-futuro__imagen">
                </div>
                <div class="card-fututo__bottom">
                    <div class="card-invertir__ubicacion">
                        <img src="assets/images/ubicacion-orange.svg" alt="" class="card-invertir__icono-ubicacion">
                        <p class="card-invertir__ciudad">Bogotá</p>
                    </div>
                    <!-- REDES SOCIALES -->
                    <div class="card-futuro__border">
                        <p class="card-futuro__descripcion"> adipisicing elit. Numquam rem aspernatur deserunt illum nihil laborum voluptas non expedita atque adipisci sit doloribus deleniti ipsa delectus amet, asperiores suscipit earum accusamus necessitatibus. Dignissimos laborum veritatis, blanditiis vel consequuntur cum sequi ipsam.</p>
                    </div>
                    <a class="button button--futuro button--grey">
                        <span class="button__link button__link--darken">Inscribete al lanzamiento</span>
                    </a>
                </div>
            </div>
            <div class="card-futuro">
                <div class="card-futuro__top">
                    <h2 class="card-futuro__titulo">Poryecto la gran doler casa blanca</h2>
                </div>
                <div class="card-futuro__middle">
                    <img src="assets/images/banner-home.png" alt="" class="card-futuro__imagen">
                </div>
                <div class="card-fututo__bottom">
                    <div class="card-invertir__ubicacion">
                        <img src="assets/images/ubicacion-orange.svg" alt="" class="card-invertir__icono-ubicacion">
                        <p class="card-invertir__ciudad">Bogotá</p>
                    </div>
                    <!-- REDES SOCIALES -->
                    <div class="card-futuro__border">
                        <p class="card-futuro__descripcion"> adipisicing elit. Numquam rem aspernatur deserunt illum nihil laborum voluptas non expedita atque adipisci sit doloribus deleniti ipsa delectus amet, asperiores suscipit earum accusamus necessitatibus. Dignissimos laborum veritatis, blanditiis vel consequuntur cum sequi ipsam.</p>
                    </div>
                    <a class="button button--futuro button--grey">
                        <span class="button__link button__link--darken">Inscribete al lanzamiento</span>
                    </a>
                </div>
            </div>
            <div class="card-futuro">
                <div class="card-futuro__top">
                    <h2 class="card-futuro__titulo">Poryecto la gran doler casa blanca</h2>
                </div>
                <div class="card-futuro__middle">
                    <img src="assets/images/banner-home.png" alt="" class="card-futuro__imagen">
                </div>
                <div class="card-fututo__bottom">
                    <div class="card-invertir__ubicacion">
                        <img src="assets/images/ubicacion-orange.svg" alt="" class="card-invertir__icono-ubicacion">
                        <p class="card-invertir__ciudad">Bogotá</p>
                    </div>
                    <!-- REDES SOCIALES -->
                    <div class="card-futuro__border">
                        <p class="card-futuro__descripcion"> adipisicing elit. Numquam rem aspernatur deserunt illum nihil laborum voluptas non expedita atque adipisci sit doloribus deleniti ipsa delectus amet, asperiores suscipit earum accusamus necessitatibus. Dignissimos laborum veritatis, blanditiis vel consequuntur cum sequi ipsam.</p>
                    </div>
                    <a class="button button--futuro button--grey">
                        <span class="button__link button__link--darken">Inscribete al lanzamiento</span>
                    </a>
                </div>
            </div>
            <div class="card-futuro">
                <div class="card-futuro__top">
                    <h2 class="card-futuro__titulo">Poryecto la gran doler casa blanca</h2>
                </div>
                <div class="card-futuro__middle">
                    <img src="assets/images/banner-home.png" alt="" class="card-futuro__imagen">
                </div>
                <div class="card-fututo__bottom">
                    <div class="card-invertir__ubicacion">
                        <img src="assets/images/ubicacion-orange.svg" alt="" class="card-invertir__icono-ubicacion">
                        <p class="card-invertir__ciudad">Bogotá</p>
                    </div>
                    <!-- REDES SOCIALES -->
                    <div class="card-futuro__border">
                        <p class="card-futuro__descripcion"> adipisicing elit. Numquam rem aspernatur deserunt illum nihil laborum voluptas non expedita atque adipisci sit doloribus deleniti ipsa delectus amet, asperiores suscipit earum accusamus necessitatibus. Dignissimos laborum veritatis, blanditiis vel consequuntur cum sequi ipsam.</p>
                    </div>
                    <a class="button button--futuro button--grey">
                        <span class="button__link button__link--darken">Inscribete al lanzamiento</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mi-content--background mi-content--background--white">
    <div class="titulo titulo--degradado">
        <div class="titulo__contenedor titulo__contenedor--width titulo__contenedor--degradado">
            <h2 class="titulo__contenido"><b class="orange__light">¿Por qué comprar</b> <b class="grey">en Prodesa?</b></h2>
        </div>
        <div class="titulo__derecha titulo__derecha--width titulo__flex"></div>
    </div>
    <div class="comprar">
        <div class="comprar__contenedor">
            <div class="comprar__left">
                <div class="comprar__bloque">
                    <img src="assets/images/chulo-2.png" alt="" class="comprar__icono">
                    <h2 class="comprar__titulo">En Prodesa estamos <b class="orange"> comprometiods</b> con nuestros clientes</h2>
                    <p class="comprar__descripcion">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque laborum a rerum pariatur consectetur, ex laboriosam alias explicabo quidem tempora!</p>
                </div>
                <div class="comprar__bloque">
                    <img src="assets/images/house-2.png" alt="" class="comprar__icono">
                    <h2 class="comprar__titulo">En Prodesa estamos <b class="orange"> comprometiods</b> con nuestros clientes</h2>
                    <p class="comprar__descripcion">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque laborum a rerum pariatur consectetur, ex laboriosam alias explicabo quidem tempora!</p>
                </div>
                <div class="comprar__bloque">
                    <img src="assets/images/sun--2.png" alt="" class="comprar__icono">
                    <h2 class="comprar__titulo">En Prodesa estamos <b class="orange"> comprometiods</b> con nuestros clientes</h2>
                    <p class="comprar__descripcion">Lorem ipsum, Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam in ab aperiam architecto ipsam dolor id, magnam velit saepe cumque. dolor sit amet consectetur adipisicing elit. Atque laborum a rerum pariatur consectetur, ex laboriosam alias explicabo quidem tempora!</p>
                </div>
            </div>
            <div class="comprar__border"></div>
            <div class="owl-carousel owl-carousel__comprar comprar__right">
                <div class="">
                    <h2 class="comprar__nombre">Andrés y Mariana</h2>
                    <p class="comprar__compra">Compradores Ciprés de la Florida</p>
                    <img src="assets/images/banner-home.png" alt="" class="comprar__imagen">
                    <p class="comprar__resumen">"...Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, minima?..."</p>
                    <button class="button button--video">
                        <a class="button__link">Ver video</a>
                    </button>
                </div>
                <div class="">
                    <h2 class="comprar__nombre">Andrés y Mariana</h2>
                    <p class="comprar__compra">Compradores Ciprés de la Florida</p>
                    <img src="assets/images/banner-home.png" alt="" class="comprar__imagen">
                    <p class="comprar__resumen">"...Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, minima?..."</p>
                    <button class="button button--video">
                        <a class="button__link">Ver video</a>
                    </button>
                </div>
                <div class="">
                    <h2 class="comprar__nombre">Andrés y Mariana</h2>
                    <p class="comprar__compra">Compradores Ciprés de la Florida</p>
                    <img src="assets/images/banner-home.png" alt="" class="comprar__imagen">
                    <p class="comprar__resumen">"...Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, minima?..."</p>
                    <button class="button button--video">
                        <a class="button__link">Ver video</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BLOG -->

<section class="mi-content--background">
    <div class="titulo titulo--grey">
        <div class="titulo__izquierda titulo__izquierda--blog titulo__flex"></div>
        <div class="titulo__contenedor titulo__flex">
            <h2 class="titulo__contenido"><b class="orange__light">¡Disfruta contenido único</b> <b class="grey">en nuestro blog</b></h2>
            <p class="titulo__descripcion">Descubre información exclusiva del sector inmobiliario e infórmate de las últimas noticias y tendencias del mercado.</p>
        </div>
        <div class="titulo__derecha titulo__derecha--blog titulo__flex"></div>
    </div>
    <div class="card__contenedor-carousel">
        <div class="owl-carousel owl-carousel--blog">
            <div class="card-blog">
                <div class="card-blog__categoria">
                    <span class="card-blog__categoria-contenido">categoría</span>
                </div>
                <div class="card-blog__top">
                    <h2 class="card-blog__titulo">Aqui va el super titulo del blog</h2>
                </div>
                <div class="card-blog__middle">
                    <img src="assets/images/banner-home.png" alt="" class="card-blog__imagen">
                    <div class="card-blog__opacity">
                        <p class="card-blog__fecha">Mayo 27. 2020 - Por: Autor de Prodesa</p>
                    </div>
                </div>
                <div class="card-blog__bottom">
                    <p class="card-blog__descripcion">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis vitae assumenda harum obcaecati ducimus cum excepturi reprehenderit, iste mollitia! Quis.</p>
                    <div class="card-blog__border"></div>
                    <div class="card-blog--flex">
                        <a class="card-blog__leer">
                            <p class="card-blog__cta">Seguir leyendo</p>
                            <div class="card-blog__icono"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-blog">
                <div class="card-blog__categoria">
                    <span class="card-blog__categoria-contenido">categoría</span>
                </div>
                <div class="card-blog__top">
                    <h2 class="card-blog__titulo">Aqui va el super titulo del blog</h2>
                </div>
                <div class="card-blog__middle">
                    <img src="assets/images/banner-home.png" alt="" class="card-blog__imagen">
                    <div class="card-blog__opacity">
                        <p class="card-blog__fecha">Mayo 27. 2020 - Por: Autor de Prodesa</p>
                    </div>
                </div>
                <div class="card-blog__bottom">
                    <p class="card-blog__descripcion">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis vitae assumenda harum obcaecati ducimus cum excepturi reprehenderit, iste mollitia! Quis.</p>
                    <div class="card-blog__border"></div>
                    <div class="card-blog--flex">
                        <a class="card-blog__leer">
                            <p class="card-blog__cta">Seguir leyendo</p>
                            <div class="card-blog__icono"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-blog">
                <div class="card-blog__categoria">
                    <span class="card-blog__categoria-contenido">categoría</span>
                </div>
                <div class="card-blog__top">
                    <h2 class="card-blog__titulo">Aqui va el super titulo del blog</h2>
                </div>
                <div class="card-blog__middle">
                    <img src="assets/images/banner-home.png" alt="" class="card-blog__imagen">
                    <div class="card-blog__opacity">
                        <p class="card-blog__fecha">Mayo 27. 2020 - Por: Autor de Prodesa</p>
                    </div>
                </div>
                <div class="card-blog__bottom">
                    <p class="card-blog__descripcion">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis vitae assumenda harum obcaecati ducimus cum excepturi reprehenderit, iste mollitia! Quis.</p>
                    <div class="card-blog__border"></div>
                    <div class="card-blog--flex">
                        <a class="card-blog__leer">
                            <p class="card-blog__cta">Seguir leyendo</p>
                            <div class="card-blog__icono"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-blog">
                <div class="card-blog__categoria">
                    <span class="card-blog__categoria-contenido">categoría</span>
                </div>
                <div class="card-blog__top">
                    <h2 class="card-blog__titulo">Aqui va el super titulo del blog</h2>
                </div>
                <div class="card-blog__middle">
                    <img src="assets/images/banner-home.png" alt="" class="card-blog__imagen">
                    <div class="card-blog__opacity">
                        <p class="card-blog__fecha">Mayo 27. 2020 - Por: Autor de Prodesa</p>
                    </div>
                </div>
                <div class="card-blog__bottom">
                    <p class="card-blog__descripcion">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis vitae assumenda harum obcaecati ducimus cum excepturi reprehenderit, iste mollitia! Quis.</p>
                    <div class="card-blog__border"></div>
                    <div class="card-blog--flex">
                        <a class="card-blog__leer">
                            <p class="card-blog__cta">Seguir leyendo</p>
                            <div class="card-blog__icono"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php 
    include 'template-parts/footer.php';
?>

<script>
    const buscadorCiudad = document.querySelector('#ciudad');
    const botonCiudad = document.querySelector('#buscador__ciudad');

    buscadorCiudad.addEventListener('click', () =>{
        botonCiudad.classList.toggle('active');
    });
    
    const buttonTab = document.querySelectorAll('.tab__controls button');

    buttonTab.forEach((button) =>{
        button.addEventListener('click', ()=>{
            const parent = button.parentNode;
            const grantParent = parent.parentNode;
            const container = grantParent.querySelector('.tab__contenedor');

            const childrenList = Array.from(parent.children);
            const index = childrenList.indexOf(button);
            container.style.transform =  `translatex(-${index * 100}%)`;

            parent.querySelectorAll('button.active').forEach(activeBtn => activeBtn.classList.remove('active'));

            button.classList.add('active');
        });
    });
</script>