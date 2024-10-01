<div class="registro-box" id="formRegistro">
    <p>Registrate</p>
    <form action="#" method="">
        <div class="btncerrar" id="cerrarRegistro">
            <img src="img/cerrar.png" alt="cerrar" />
        </div>
        <div class="user-box">
            <input required="" name="nombre" type="text">
            <label>Nombre completo</label>
        </div>
        <div class="user-box">
            <input required="" name="telefono" type="text">
            <label>Telefono</label>
        </div>
        <div class="user-box date">
            <input required="" name="nacimiento" type="date">
            <label id="campoFecha">Fecha de nacimiento</label>
        </div>
        <div class="user-box">
            <input required="" name="email" type="text">
            <label>Correo electrónico</label>
        </div>
        <div class="user-box">
            <input id="password" required="" name="password" type="password">
            <label>Contraseña</label>
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
    <p>¿Ya tienes una cuenta? <a href="#" class="a2">Inicia sesión</a></p>

</div>