<?php

error_reporting(0);

require_once "../modelo/DBusuario.php";

$DBusuario = new DBusuario();

$nombreCompleto = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$fechaNacimiento = $_POST['nacimiento'];
$contrasena = $_POST['password'];

if(isset($nombreCompleto) && isset($telefono) && isset($fechaNacimiento) && isset($email) && isset($contrasena) && isset($sexo)){

    $DBusuario->registrarUsuario($nombreCompleto, $email, $telefono, $sexo, $fechaNacimiento, $contrasena);

}

?>

<div class="registro-box" id="formRegistro">
    <p>Registrate</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formularioRegistro" method="post">
        <div class="btncerrar" id="cerrarRegistro">
            <img src="img/cerrar.png" alt="cerrar" />
        </div>
        <div class="user-box">
            <input  name="nombre" id="nombre" type="text" pattern="^[A-Z][a-z]{1,25}" required title="Por favor introduzca un nombre válido">
            <label>Nombre completo</label>
            <!-- <p id="corregirNombre" class="mensajeError"></p> -->
        </div>
        <div class="user-box">
            <input  name="telefono" id="telefono" type="text" pattern="[0-9]{9,}" required title="El número de teléfono debe tener al menos 9 números">
            <label>Telefono</label>
            <!-- <p id="corregirTelefono" class="mensajeError"></p> -->
        </div>
        <div class="user-box date">
            <input  name="nacimiento" id="nacimiento" type="date" required>
            <label id="campoFecha">Fecha de nacimiento</label>
            <!-- <p id="corregirFecha" class="mensajeError"></p> -->
        </div>
        <div class="user-box">
            <input name="email" id="email" type="email" size="30" pattern="[a-zA-Z0-9._%+-]+@[a-z]\.com" required title="Por favor introduzca un correo válido">
            <label>Correo electrónico</label>
            <!-- <p id="corregirEmail" class="mensajeError"></p> -->
        </div>
        <div class="user-box">
            <label>Sexo</label>
            <select name="sexo" id="sexo" required title="Introduzca un sexo">
            <option value="hombre">H</option>
            <option value="mujer">M</option> 
            </select>
        </div>
        <div class="user-box">
            <input id="password" name="password" type="password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@_$!%*?&])[A-Za-z\d@_$!%*?&]{5,}" title="La contraseña debe tener al menos 5 caracteres, minúsculas, mayúsculas, un número y un carácter especial">
            <label>Contraseña</label>
            <!-- <p id="corregirContrasena" class="mensajeError"></p> -->
            <!-- Añadimos dos div que nos mostrarán la seguridad de la contraseña en tiempo real -->
            <div id="password-strength-meter"></div>
            <div id="password-strength-text"></div>
        </div>
        <button id="btnCrearCuenta" type="submit">Crear cuenta</button>
    </form>
    <p>¿Ya tienes una cuenta? <a href="#" class="a2" id="btnInicio">Inicia sesión</a></p>

</div>