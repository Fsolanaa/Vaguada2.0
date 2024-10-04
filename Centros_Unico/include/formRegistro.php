<div class="registro-box" id="formRegistro">
    <p>Registrate</p>
    <form action="#" id="form" method="">
        <div class="btncerrar" id="cerrarRegistro">
            <img src="img/cerrar.png" alt="cerrar" />
        </div>
        <div class="user-box">
            <input required="" name="nombre" id="nombre" type="text">
            <label>Nombre completo</label>
            <p id="corregirNombre"></p>
        </div>
        <div class="user-box">
            <input required="" name="telefono" id="telefono" type="text">
            <label>Telefono</label>
            <p id="corregirTelefono"></p>
        </div>
        <div class="user-box date">
            <input required="" name="nacimiento" id="nacimiento" type="date">
            <label id="campoFecha">Fecha de nacimiento</label>
            <p id="corregirFecha"></p>
        </div>
        <div class="user-box">
            <input required="" name="email" id="email" type="text">
            <label>Correo electrónico</label>
            <p id="corregirEmail"></p>
        </div>
        <div class="user-box">
            <input id="password" required="" name="password" type="password">
            <label>Contraseña</label>
            <p id="corregirContrasena"></p>
            <!-- Añadimos dos div que nos mostrarán la seguridad de la contraseña en tiempo real -->
            <div id="password-strength-meter"></div>
            <div id="password-strength-text"></div>
        </div>
        <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Crear cuenta
        </a>
    </form>
    <p>¿Ya tienes una cuenta? <a href="#" class="a2" id="btnInicio">Inicia sesión</a></p>

</div>