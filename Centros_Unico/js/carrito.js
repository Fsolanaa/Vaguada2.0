btnCarrito=document.getElementById("ventanaCarrito");
btnCarrito.addEventListener('click', mostrarVentanaCarrito);
console.log(arrayCatalogos);
function mostrarVentanaCarrito() {
    console.log("Ventana carrito abierta");
    document.getElementById("ventanaCarrito").style.display = "block";
    document.getElementById("cuerpo").style.filter = "blur(5px)";
    document.getElementById("header").style.filter = "blur(5px)";
    document.getElementById("nav").style.filter = "blur(5px)";
    document.getElementById("cajaContacto").style.filter = "blur(5px)";
}
function cerrarVentanaCarrito() {
    document.getElementById("ventanaCarrito").style.display = "none";
    document.getElementById("cuerpo").style.filter = "none";
    document.getElementById("header").style.filter = "none";
    document.getElementById("nav").style.filter = "none";
    document.getElementById("cajaContacto").style.filter = "none";
}