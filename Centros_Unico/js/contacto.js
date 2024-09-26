const diagnosticoGratuito = document.getElementById('cajaContacto');
const btnCerrar = document.getElementById('cerrar');

diagnosticoGratuito.addEventListener('click', mostrarDiagnostico);
btnCerrar.addEventListener('click', cerrarDiagnostico);

function mostrarDiagnostico() {
    document.getElementById("formulario").style.display = "block";
    document.getElementById("cuerpo").style.filter = "blur(5px)";
    document.getElementById("header").style.filter = "blur(5px)";
    document.getElementById("nav").style.filter = "blur(5px)";
    document.getElementById("cajaContacto").style.filter = "blur(5px)";
}

function cerrarDiagnostico() {
    document.getElementById("formulario").style.display = "none";
    document.getElementById("cuerpo").style.filter = "none";
    document.getElementById("header").style.filter = "none";
    document.getElementById("nav").style.filter = "none";
    document.getElementById("cajaContacto").style.filter = "none";
}