let form = document.getElementById('form');

document.addEventListener('DOMContentLoaded', function(){

    form.addEventListener('submit', corregirValores);

});

function corregirValores(evento){

    evento.preventDefault();

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

    let validar = true;

    if(nombre.value.trim() === "" || !/^[a-zA-Z0-9\s@$!%*?&]{1,25}$/.test(nombre.value)){

        nombre = document.getElementById('nombre').style.border = "1px red solid";
        corregirNombre.style.color = 'red';
        corregirNombre.innerHTML = "El nombre debe tener minusculas, mayusculas y sin caracteres especiales";
        validar = false;
    }
    else{
        nombre = document.getElementById('nombre').style.border = "1px green solid";
        corregirNombre.innerHTML = "";
        validar = true;
    }

    if(telefono.value.trim() === "" || !/^[0-9]{1,25}$/.test(telefono.value)){
        telefono = document.getElementById('telefono').style.border = "1px red solid";
        corregirTelefono.style.color = 'red';
        corregirTelefono.innerHTML = "El telefono solo debe tener numeros";
        validar = false;
    }
    else{
        telefono = document.getElementById('telefono').style.border = "1px red solid";
        corregirTelefono.innerHTML = "";
        validar = true;
    }

    if(nacimiento.value.trim() === ""){

        nacimiento = document.getElementById('nacimiento').style.border = "1px red solid";
        corregirFecha.style.color = 'red';
        corregirFecha.innerHTML = "Debes poner una fecha";
        validar = false;
    }
    else{
        nacimiento = document.getElementById('nacimiento').style.border = "1px green solid";
        corregirFecha.innerHTML = "";
        validar = true;
    }

    if(email.value.trim() === "" || !/^[a-zA-Z0-9\s\.]{1,40}@[a-zA-Z0-9\s\.]{1,25}$/.test(email.value)){

        email = document.getElementById('email').style.border = "1px red solid";
        corregirEmail.style.color = 'red';
        corregirEmail.innerHTML = "El email debe tener @";
        validar = false;
    }
    else{
        email = document.getElementById('email').style.border = "1px red solid";
        corregirEmail.innerHTML = "";
        validar = true;
    }

    if(password.value.trim() === "" || !/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{5,}$/.test(password.value)){

        password = document.getElementById('password').style.border = "1px red solid";
        corregirContrasena.style.color = 'red';
        corregirContrasena.innerHTML = "La contraseña debe tener 5 caracteres, minusculas, mayusculas, y caracteres especiales";
        validar = false;
    }
    else{
        password = document.getElementById('password').style.border = "1px red solid";
        corregirContrasena.innerHTML = "";
        validar = true;
    }

    if(validar === true){
        form.submit();
    }

}