const hamburguesa = document.querySelector('.hamburguesa');
const navegacion = document.querySelector('.navegacion');
const enlaces = document.querySelectorAll('.navegacion a');
const jobs = document.querySelector('.jobs');
const contenido = document.querySelector('.contenido');
const news = document.querySelector('.news');
const contenidonews = document.querySelector('.contenidonews');


document.addEventListener('DOMContentLoaded', () => {
    mostrarMenu();
    cerrarMenu();
});

function mostrarMenu() {
    hamburguesa.addEventListener('click', () => {
        navegacion.classList.toggle('ocultar');

    });
}

function cerrarMenu() {
    enlaces.forEach(enlace => {
        enlace.addEventListener('click', (e) => {
            e.preventDefault();
            const seccion = document.querySelector(e.target.attributes.href.value);
            cambioSeccion(seccion);
            if (e.target.tagName === 'A') {
                navegacion.classList.add('ocultar');
            }
        });
    });
}

function cambioSeccion(seccion) {
    seccion.scrollIntoView({
        behavior: 'smooth'
    })
}

//acordeon//
jobs.addEventListener('click', function () {
    contenido.classList.toggle('desplegado');
});

news.addEventListener('click', function () {
    contenidonews.classList.toggle('desplegado');
});







