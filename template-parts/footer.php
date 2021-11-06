<!-- scripts y librerias -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/owlCarousel/dist/owl.carousel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="assets/js/mainscript.js"></script>
<footer class="footer">
    <div class="footer__top">
        <div class="titulo titulo--padding">
            <div class="titulo__contenedor titulo__contenedor--suscribete titulo__contenedor--flex">
                <h2 class="titulo__contenido"><b class="amarillo">Suscríbete</b></h2>
            </div>
            <div class="titulo__derecha titulo__derecha--suscribete titulo__flex"></div>
        </div>
        <div class="formulario__suscribete-flex">
            <div class="formulario__left">
                <p class="formulario__left--descripcion">Mantente informado de nuestros lanzamientos, promociones y articulos de interes</p>
            </div>
            <div class="formulario__rigth">
                <form class="formulario" id="formulario">

                    <!-- grupo correo -->
                    <div class="formulario__contenedor">
                        <div class="formulario__grupo" id="grupo__correo">
                            <div class="formulario__grupo-input">
                                <input type="mail" class="formulario__input" name="correo" id="correo" placeholder="micorreo@email.com">
                            </div>
                            <p class="formulario__input-error">El correo solo puede contener, letras, numeros, puntos y guin bajo</p>
                        </div>

                        <!-- Grupo terminos y condciones -->
                        <div class="formulario__grupo formulario__grupo--checkbox" id="grupo__terminos">
                            <label class="formulario__label">
                            Al hacer click acepto los <a href="#" class="amarillo formulario__link">terminos y condiciones</a>
                                <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                            </label>
                        </div>
                    </div>

                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <button type="submit" class="formulario__btn">Enviar</button>
                    </div>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">¡Formulario enviado exitosamente!</p>
                    <p class="formulario__mensaje-exito formulario__mensaje-exito--color" id="formulario__mensaje-error">Rellene los campos correctamente</p>

                </form>
            </div>
        </div>
    </div>
    <div class="footer__middle-and-bottom">
        <div class="footer__middle">
            <div class="footer__middle-left">
                <h2 class="footer__middle-titulo">Oficinas</h2>
                <div class="footer__middle--after">
                    <div class="footer__middle-bloque">
                        <h3 class="footer__middle-subtitulo">Bogotá</h3>
                        <p class="footer__middle-ciudad">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, earum.</p>
                    </div>
                    <div class="footer__middle-bloque">
                        <h3 class="footer__middle-subtitulo">Bogotá</h3>
                        <p class="footer__middle-ciudad">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, earum.</p>
                    </div>
                    <div class="footer__middle-bloque">
                        <h3 class="footer__middle-subtitulo">Bogotá</h3>
                        <p class="footer__middle-ciudad">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, earum.</p>
                    </div>
                </div>
            </div>
            <div class="footer__middle-left">
                <h2 class="footer__middle-titulo">Links</h2>
                <div class="footer__middle--after">
                    <ul class="footer__middle-lista">
                        <li class="footer__middle-item"><a>Quienes somos</a></li>
                        <li class="footer__middle-item"><a>Quienes somos</a></li>
                        <li class="footer__middle-item"><a>Quienes somos</a></li>
                        <li class="footer__middle-item"><a>Quienes somos</a></li>
                        <li class="footer__middle-item"><a>Quienes somos</a></li>
                        <li class="footer__middle-item"><a>Quienes somos</a></li>
                        <li class="footer__middle-item"><a>Quienes somos</a></li>
                        <li class="footer__middle-item"><a>Quienes somos</a></li>
                        <li class="footer__middle-item"><a>Politica de tratamiento de datos</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__middle-right">
                <h2 class="footer__middle-titulo">Proyectos más buscados</h2>
                <div class="footer__middle--after">
                    <div class="footer__middle-contenedor-buscados">
                        <div class="footer__middle-buscados">
                            <img src="assets/images/banner-home.png" alt="" class="footer__middle-imagen">
                            <div class="footer__middle-contenedor">
                                <h3 class="footer__middle-proyecto">Proyecto cerezo</h3>
                                <p class="footer__middle-precio">Desde 900.999.000</p>
                                <div class="footer__middle-ubicacion">
                                    <img src="assets/images/ubicacion-white.svg " alt="" class="footer__middle-icono">
                                    <p class="footer__middle-texto-ubiacion">Bogotá</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer__middle-buscados">
                            <img src="assets/images/banner-home.png" alt="" class="footer__middle-imagen">
                            <div class="footer__middle-contenedor">
                                <h3 class="footer__middle-proyecto">Proyecto cerezo</h3>
                                <p class="footer__middle-precio">Desde 900.999.000</p>
                                <div class="footer__middle-ubicacion">
                                    <img src="assets/images/ubicacion-white.svg " alt="" class="footer__middle-icono">
                                    <p class="footer__middle-texto-ubiacion">Bogotá</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer__middle-buscados">
                            <img src="assets/images/banner-home.png" alt="" class="footer__middle-imagen">
                            <div class="footer__middle-contenedor">
                                <h3 class="footer__middle-proyecto">Proyecto cerezo</h3>
                                <p class="footer__middle-precio">Desde 900.999.000</p>
                                <div class="footer__middle-ubicacion">
                                    <img src="assets/images/ubicacion-white.svg " alt="" class="footer__middle-icono">
                                    <p class="footer__middle-texto-ubiacion">Bogotá</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer__middle-buscados">
                            <img src="assets/images/banner-home.png" alt="" class="footer__middle-imagen">
                            <div class="footer__middle-contenedor">
                                <h3 class="footer__middle-proyecto">Proyecto cerezo</h3>
                                <p class="footer__middle-precio">Desde 900.999.000</p>
                                <div class="footer__middle-ubicacion">
                                    <img src="assets/images/ubicacion-white.svg " alt="" class="footer__middle-icono">
                                    <p class="footer__middle-texto-ubiacion">Bogotá</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__border"></div>
        <div class="footer__middle footer__bottom">
            <div class="footer__bottom-contenedor">
                <h2 class="footer__bottom-titulo">Ofertas de vivienda</h2>
                <div class="footer__bottom-middle">
                    <ul class="footer__bottom-lista">
                        <li class="footer__bottom-item">Oferta de vivienda en bogotá</li>
                        <li class="footer__bottom-item">Oferta de vivienda en bogotá</li>
                        <li class="footer__bottom-item">Oferta de vivienda en bogotá</li>
                        <li class="footer__bottom-item">Oferta de vivienda en bogotá</li>
                        <li class="footer__bottom-item">Oferta de vivienda en bogotá</li>
                        <li class="footer__bottom-item">Oferta de vivienda en bogotá</li>
                        <li class="footer__bottom-item">Oferta de vivienda en bogotá</li>
                        <li class="footer__bottom-item">Oferta de vivienda en bogotá</li>
                        <li class="footer__bottom-item">Oferta de vivienda en bogotá</li>
                        <li class="footer__bottom-item">Oferta de vivienda en bogotá</li>
                    </ul>
                </div>
                <div class="footer__middle--after footer__middle--after--width">
                    <div class="footer__bottom-right">
                        <h2 class="footer__bottom-titulo">Síguenos</h2>
                        <div class="footer__bottom-iconos">
                            <a class="footer__bottom-link"><img src="assets/images/twitter.svg" alt="" class="footer__bottom-icono"></a>
                            <a class="footer__bottom-link"><img src="assets/images/facebook.svg" alt="" class="footer__bottom-icono"></a>
                            <a class="footer__bottom-link"><img src="assets/images/likedin.svg" alt="" class="footer__bottom-icono"></a>
                            <a class="footer__bottom-link"><img src="assets/images/instragram.svg" alt="" class="footer__bottom-icono"></a>
                            <a class="footer__bottom-link"><img src="assets/images/youtube.svg" alt="" class="footer__bottom-icono"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    const formulario = document.getElementById('formulario');
    const inputs = document.querySelector('#formulario input');

    const expresiones = {
        correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    }

    const campos = {
        correo: false,
    }


    const validacionInput = (e) =>{
        if(expresiones.correo.test(e.target.value)){
            document.getElementById('grupo__correo').classList.remove('formulario__grupo--incorrecto');
            campos.correo = true;
        }else{
            document.getElementById('grupo__correo').classList.add('formulario__grupo--incorrecto');
            campos.correo = false;
        }
    }

    inputs.addEventListener('blur', validacionInput);
    inputs.addEventListener('keyup', validacionInput);

    formulario.addEventListener('submit', (e) =>{
    e.preventDefault();
        if(campos.correo && terminos.checked ){
            formulario.reset();

            document.getElementById('formulario__mensaje-exito').classList.add('active');
            document.getElementById('formulario__mensaje-error').classList.remove('active');

            document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
            setTimeout(() => {
                document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
            }, 5000);

            document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
                icono.classList.remove('formulario__grupo-correcto');
            });

            setTimeout( () => {window.location.href = "./gracias.php";}, 3000);
        } else {
            document.getElementById('formulario__mensaje-error').classList.add('active');
            setTimeout(() => {
                document.getElementById('formulario__mensaje-error').classList.remove('active');
            }, 4000);
        }
    });
</script>