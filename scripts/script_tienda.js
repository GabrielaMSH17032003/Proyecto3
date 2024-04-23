  //Reloj

  function currentTime() {
    let date =new Date();
    let hh = date.getHours();
    let mm = date.getMinutes();
    let ss = date.getSeconds();

    hh = (hh < 10) ? "0" + hh : hh;
    mm = (mm < 10) ? "0" + mm : mm;
    ss = (ss < 10) ? "0" + ss : ss;

    let time = hh + ":" + mm + ":" + ss;
    let watch = document.querySelector('#watch');
    watch.innerHTML = time;
}

setInterval(currentTime, 1000);


 
 let loadMoreBtn = document.querySelector('#load-more');
 let currentItem = 4;

 loadMoreBtn.onclick = () => {

    let boxes = [...document.querySelectorAll('.box-container .box')];
    for(var i = currentItem; i< currentItem + 4; i++) {
        boxes[i].style.display = 'inline-block';
    }
    currentItem += 4;
    if(currentItem >= boxes.length) {
        loadMoreBtn.style.display = 'none'
    }
 }

setInterval(currentTime, 1000);


 //Carrito

 const carrito = document.getElementById('carrito');
 const elementos1 = document.getElementById('lista-1');
 const lista = document.querySelector('#lista-carrito tbody');
 const vaciarCarritoBtn = document.getElementById('vaciar-carrito');

 cargarEventListeners();

 function cargarEventListeners() {
    elementos1.addEventListener('click', comprarElemento);
    carrito.addEventListener('click', eliminarElemento);
    vaciarCarritoBtn.addEventListener('click', vaciarCarrito);
 }

 function comprarElemento(e) {
    e.preventDefault ();

    if(e.target.classList.contains('agregar-carrito')) {
        const elemento = e.target.parentElement.parentElement;
        leerDatosElemento(elemento);
    }
 }

 function leerDatosElemento(elemento) {
    const infoElemento = {
        imagen: elemento.querySelector('img').src,
        titulo: elemento.querySelector('h3').textContent,
        precio: elemento.querySelector('.precio').textContent,
        id: elemento.querySelector('a').getAttribute('data-id')

    }
    insertarCarrito(infoElemento)
 }

 function insertarCarrito(elemento) {

    const row = document.createElement('tr');
    row.innerHTML = `
        <td>
              <img src="${elemento.imagen}"  width=100 />
        </td>

        <td>
              ${elemento.titulo}
        </td>

        <td>
              ${elemento.precio}
        </td>

        <td>
               <a href="#"  class="borrar" data-id="${elemento.id0}" >X</a>
        </td>

    `;

    lista.appendChild(row);
 }

 function eliminarElemento(e) {

    e.preventDefault();
    let elemento,
        elementoId;

    if(e.target.classList.contains('borrar')) {
        e.target.parentElement.parentElement.remove();
        elemento = e.target.parentElement.parentElement;
        elementoId = elemento.querySelector('a').getAtribute('data-id');
    }
 }

 function vaciarCarrito() {
    while(lista.firstChild){
        lista.removeChild(lista.firstChild);
    } 
    return false;

}