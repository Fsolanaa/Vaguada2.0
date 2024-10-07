let form = document.getElementById('formularioRegistro');

let nombre = document.getElementById('nombre');
let corregirNombre = document.getElementById('corregirNombre');

let telefono = document.getElementById('telefono');
let corregirTelefono = document.getElementById('corregirTelefono');

let nacimiento = document.getElementById('nacimiento');
let corregirFecha = document.getElementById('corregirFecha');

let email = document.getElementById('email');
let corregirEmail = document.getElementById('corregirEmail');

let password = document.getElementById('password');
let corregirContrasena = document.getElementById('corregirContrasena');

document.addEventListener('DOMContentLoaded', function() {
    form.addEventListener('submit', validarFormulario);
});

function validarFormulario(evento) {
    evento.preventDefault();
    let validar = true;  // Esta variable debe resetearse en cada envío del formulario

    validar = validarNombre();
    validar = validarTelefono();
    validar = validarFecha();
    validar = validarEmail();
    validar = validarContrasena();

    if (validar === true) {
        form.submit();  // Solo se enviará si todas las validaciones son correctas
    }
}

function validarNombre() {
    if (nombre.value.trim() === "" || !/^[a-zA-Z0-9\s@$!%*?&]{1,25}$/.test(nombre.value)) {
        nombre.style.border = "1px solid red";
        corregirNombre.style.color = 'red';
        corregirNombre.innerHTML = "El nombre debe tener entre 1 y 25 caracteres sin caracteres especiales";
        return false;
    } else {
        nombre.style.border = "1px solid green";
        corregirNombre.innerHTML = "";
        return true;
    }
}

function validarTelefono() {
    if (telefono.value.trim() === "" || !/^[0-9]{1,25}$/.test(telefono.value)) {
        telefono.style.border = "1px solid red";
        corregirTelefono.style.color = 'red';
        corregirTelefono.innerHTML = "El teléfono solo debe tener números y hasta 25 dígitos";
        return false;
    } else {
        telefono.style.border = "1px solid green";
        corregirTelefono.innerHTML = "";
        return true;
    }
}

function validarFecha() {
    if (nacimiento.value.trim() === "") {
        nacimiento.style.border = "1px solid red";
        corregirFecha.style.color = 'red';
        corregirFecha.innerHTML = "Debes poner una fecha";
        return false;
    } else {
        nacimiento.style.border = "1px solid green";
        corregirFecha.innerHTML = "";
        return true;
    }
}

function validarEmail() {
    if (email.value.trim() === "" || !/^[a-zA-Z0-9\s\.]{1,40}@[a-zA-Z0-9\s\.]{1,25}$/.test(email.value)) {
        email.style.border = "1px solid red";
        corregirEmail.style.color = 'red';
        corregirEmail.innerHTML = "El email debe ser válido (contener @)";
        return false;
    } else {
        email.style.border = "1px solid green";
        corregirEmail.innerHTML = "";
        return true;
    }
}

function validarContrasena() {
    if (password.value.trim() === "" || !/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{5,}$/.test(password.value)) {
        password.style.border = "1px solid red";
        corregirContrasena.style.color = 'red';
        corregirContrasena.innerHTML = "La contraseña debe tener al menos 5 caracteres, minúsculas, mayúsculas, un número y un carácter especial";
        return false;
    } else {
        password.style.border = "1px solid green";
        corregirContrasena.innerHTML = "";
        return true;
    }
}
