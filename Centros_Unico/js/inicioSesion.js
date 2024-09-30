const btnSesion = document.getElementById('btnSesion');
 const btnCerrarInicioSesion = document.getElementById('cerrarInicioSesion');

btnSesion.addEventListener('click', mostrarInicioSesion);
btnCerrarInicioSesion.addEventListener('click', cerrarInicioSesion);

function mostrarInicioSesion() {
    document.getElementById("formInicioSesion").style.display = "block";
    document.getElementById("cuerpo").style.filter = "blur(5px)";
    document.getElementById("header").style.filter = "blur(5px)";
    document.getElementById("nav").style.filter = "blur(5px)";
    document.getElementById("cajaContacto").style.filter = "blur(5px)";
}

 function cerrarInicioSesion() {
    document.getElementById("formInicioSesion").style.display = "none";
    document.getElementById("cuerpo").style.filter = "none";
    document.getElementById("header").style.filter = "none";
    document.getElementById("nav").style.filter = "none";
    document.getElementById("cajaContacto").style.filter = "none";
}