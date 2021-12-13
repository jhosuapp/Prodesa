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



