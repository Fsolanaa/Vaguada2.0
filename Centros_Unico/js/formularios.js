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
//--------------------------------------------------
const btnRegistro = document.getElementById('btnRegistro');
const btnCerrarRegistro = document.getElementById('cerrarRegistro');
const btnSesionDesdeRegistro = document.getElementById('btnInicio');

btnRegistro.addEventListener('click', mostrarRegistro);
btnCerrarRegistro.addEventListener('click', cerrarRegistro);
btnSesionDesdeRegistro.addEventListener('click', cambiarForm);



function mostrarRegistro() {
  document.getElementById("formRegistro").style.display = "block";
  document.getElementById("cuerpo").style.filter = "blur(5px)";
  document.getElementById("header").style.filter = "blur(5px)";
  document.getElementById("nav").style.filter = "blur(5px)";
  document.getElementById("cajaContacto").style.filter = "blur(5px)";
  cerrarInicioSesionEnRegistro();
}
function cerrarInicioSesionEnRegistro() {
  document.getElementById("formInicioSesion").style.display = "none";
}

function cerrarRegistro() {
  document.getElementById("formRegistro").style.display = "none";
  document.getElementById("cuerpo").style.filter = "none";
  document.getElementById("header").style.filter = "none";
  document.getElementById("nav").style.filter = "none";
  document.getElementById("cajaContacto").style.filter = "none";
}
function cambiarForm() {
  document.getElementById("formRegistro").style.display = "none";
  document.getElementById("formInicioSesion").style.display = "block";
}
