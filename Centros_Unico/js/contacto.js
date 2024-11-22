const diagnosticoGratuito = document.getElementById('contenedorContacto');
const btnCerrarDiagnostico = document.getElementById('closeDiagnostico');

diagnosticoGratuito.addEventListener('click', mostrarDiagnostico);
btnCerrarDiagnostico.addEventListener('click', cerrarDiagnostico);

function mostrarDiagnostico() {
    document.body.style.overflow = "hidden";
    document.getElementById("formulario").style.display = "block";
    document.getElementById("cuerpo").style.filter = "blur(5px)";
    document.getElementById("header").style.filter = "blur(5px)";
    document.getElementById("nav").style.filter = "blur(5px)";
    document.getElementById("contenedorContacto").style.filter = "blur(5px)";
}

function cerrarDiagnostico() {
    document.body.style.overflow = "auto";
    document.getElementById("formulario").style.display = "none";
    document.getElementById("cuerpo").style.filter = "none";
    document.getElementById("header").style.filter = "none";
    document.getElementById("nav").style.filter = "none";
    document.getElementById("contenedorContacto").style.filter = "none";
}