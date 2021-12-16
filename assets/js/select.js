const selectPagos = document.querySelectorAll('#select-pagos option');
const traerDiv = document.querySelector('#custom-select');




selectPagos.forEach( (pagos) =>{
    var createOption = document.createElement('span');  
    var createOptionContent = createOption.innerHTML = pagos.textContent;
    var createOptionInDiv = traerDiv.append(createOption);
    createOption.setAttribute('value', pagos.textContent);
    
    createOption.classList.add('custom-select__opciones');
});

const traerTodasOpciones = document.querySelectorAll('.custom-select__opciones');
const traerCiudad = document.querySelector('#custom-select__seleccionado');
const desplegarSelect = document.querySelector('#custom-select__contenedor');


traerTodasOpciones.forEach( (op) =>{
    op.addEventListener('click', () =>{
        traerCiudad.innerHTML = op.textContent;     
    });
});

desplegarSelect.addEventListener('click', () =>{
    traerDiv.classList.toggle('active');
    desplegarSelect.classList.toggle('active');
})



//filtros

const cardFiltro = document.getElementsByClassName('card-filtro');
var i;
for (i = 0; i < cardFiltro.length; i++) {
    cardFiltro[i].addEventListener("click", function() {
      this.classList.add('active');
    });
}

//MODAL

const popUpFiltro = document.getElementsByClassName('card-filtro__pop-up');
const getPopUp = document.querySelector('.pop-up');

for (i = 0; i < popUpFiltro.length; i++) {
    popUpFiltro[i].addEventListener("click", function() {
        getPopUp.classList.add('active');
        var getImage = this.nextElementSibling;
        var getImageAndAtributte = getImage.getAttribute('src');
        var getImageDom = document.querySelector('#get-atributte');
        getImageDom.setAttribute('src', getImageAndAtributte);
        
        for (i = 0; i < cardFiltro.length; i++) {
            cardFiltro[i].classList.remove('active');
        }
    });
  }
    

  const closeModal = document.querySelectorAll('#pop-up__close');

  closeModal.forEach( (btn)=>{
      btn.addEventListener('click', ()=>{
        getPopUp.classList.remove('active');
      });
  });