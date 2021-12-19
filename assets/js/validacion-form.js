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

    //MOSTRAR VIDEO REEUTILIZABLE
const video = document.getElementsByClassName("ver-video");
const traerVideo = document.getElementById('traerVideo');

for (i = 0; i < video.length; i++) {
    video[i].addEventListener("click", function() {
        var obternetVideoAttribute = this.getAttribute('src');
        traerVideo.setAttribute('src', obternetVideoAttribute);

        const traerModal = document.querySelector('.pop-up');
        const closeModal = document.querySelector('.pop-up__close');
        traerModal.classList.add('active');
        closeModal.addEventListener('click', () =>{
            traerModal.classList.remove('active');
        });

    });

}

//VALIDACION FORM

const form_ap = document.querySelector('#form-ap');
const form_inputs = document.querySelectorAll('#form-ap input');
const form_label = document.querySelector('#form_label-si');
const form_label_two = document.querySelector('#form_label-no');
const form_bloque = document.querySelectorAll('.form-ap__bloque');
const form_mensaje = document.querySelector('#mensaje');

const expresionesRegulares = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{3,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{3,40}$/,
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/, // 7 a 14 numeros.
}

const validarEnvio = {
    nombre: false,
    apellido: false,
    email: false,
    telefono: false,
    mensaje: false
}


const validarInput = (e) =>{
    switch (e.target.name){
        case "nombre":
            validarCampo(expresionesRegulares.nombre, e.target, 'nombre');
        break;
        case "apellido":
            validarCampo(expresionesRegulares.apellido, e.target, 'apellido');
        break;
        case "telefono":
            validarCampo(expresionesRegulares.telefono, e.target, 'telefono')
        break;
        case "email":
            validarCampo(expresionesRegulares.correo, e.target, 'email')
        break;
    }
}

const validarCampo = (exp, tar, clas) => {
    if(exp.test(tar.value)){
        document.querySelector(`.form-ap__bloque-${clas}`).classList.add('form-ap__bloque-bien');
        document.querySelector(`.form-ap__bloque-${clas}`).classList.remove('form-ap__bloque-mal');
        validarEnvio[clas] = true;
    }else{
        document.querySelector(`.form-ap__bloque-${clas}`).classList.remove('form-ap__bloque-bien');
        document.querySelector(`.form-ap__bloque-${clas}`).classList.add('form-ap__bloque-mal');
        validarEnvio[clas] = false;
    }
}


const validar_mensaje = () =>{
    if(form_mensaje.value < 10){
        document.querySelector('.form-ap__bloque-mensaje').classList.remove('form-ap__bloque-bien');
        document.querySelector('.form-ap__bloque-mensaje').classList.add('form-ap__bloque-mal');
        validarEnvio.mensaje = false;
    }else{
        document.querySelector('.form-ap__bloque-mensaje').classList.add('form-ap__bloque-bien');
        document.querySelector('.form-ap__bloque-mensaje').classList.remove('form-ap__bloque-mal');
        validarEnvio.mensaje = true;
    }
}

form_mensaje.addEventListener('blur', ()=>{
    validar_mensaje();
});
form_mensaje.addEventListener('keyup', ()=>{
    validar_mensaje();
});

form_inputs.forEach( (input) =>{
    input.addEventListener('blur', validarInput);
    input.addEventListener('keyup', validarInput);
});

form_ap.addEventListener('submit', (e)=>{
    if(validarEnvio.nombre && validarEnvio.apellido  && validarEnvio.telefono && validarEnvio.email && (resideSi.checked || resideNo.checked) && validarEnvio.mensaje){
        form_ap.reset();
        document.querySelector('.form-ap__mensaje-contenido--verde').classList.add('active');

        form_bloque.forEach( (b) =>{
            b.classList.remove('form-ap__bloque-bien');
        });
        setTimeout( () => {window.location.href = "./gracias.php";}, 3000);
    }else{
        const mensajeForm = document.querySelector('.form-ap__mensaje')
        mensajeForm.classList.add('active');
        setTimeout( () =>{
            mensajeForm.classList.remove('active');
        },4000);
        e.preventDefault();
    }
});

form_label.addEventListener('click', () =>{
    form_label.classList.add('active');
    form_label_two.classList.remove('active');
});
form_label_two.addEventListener('click', () =>{
    form_label_two.classList.add('active');
    form_label.classList.remove('active');
});