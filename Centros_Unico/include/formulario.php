<section id="formulario">
    
    <form id="form" action="https://formsubmit.co/fsolanaaranega@gmail.com" method="POST">
        <!-- <a href="#" onclick="cerrarFormulario()"> -->
            <!-- CERRAR FORMULARIO -->
            <div class="cerrar" id="closeDiagnostico">
                <img src="img/cerrar.png" alt="cerrar" />
            </div>
        <!-- </a> -->
        <h2>DIAGNÓSTICO GRATUITO</h2>

        <div class="input-group">
            <!-- Nombre -->
            <label for="name">Nombre</label><br />
            <input type="text" name="name" id="name" placeholder="Nombre" />

            <!-- Apellidos -->
            <label for="phone">Apellidos</label><br />
            <input type="text" name="apellidos" id="GET-lastName" placeholder="Apellidos" />

            <!-- Sexo -->
            <label for="Sexo">Sexo</label><br />
            <select name="Sexo" class="form-control">
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
            </select>

            <!-- Fecha de Nacimiento -->
            <label for="fecha">Fecha de Nacimiento:</label><br />
            <input type="date" name="fecha de nacimiento" id="fecha" />

            <!-- Provincia -->
            <label for="provincia">Provincia </label>
            <select required name="provincia" class="form-control">
                <option value>-Seleccionar provincia-</option>
                <option value="Álava/Araba">Álava/Araba</option>
                <option value="Albacete">Albacete</option>
                <option value="Alicante">Alicante</option>
                <option value="Almería">Almería</option>
                <option value="Asturias">Asturias</option>
                <option value="Ávila">Ávila</option>
                <option value="Badajoz">Badajoz</option>
                <option value="Baleares">Baleares</option>
                <option value="Barcelona">Barcelona</option>
                <option value="Burgos">Burgos</option>
                <option value="Cáceres">Cáceres</option>
                <option value="Cádiz">Cádiz</option>
                <option value="Cantabria">Cantabria</option>
                <option value="Castellón">Castellón</option>
                <option value="Ceuta">Ceuta</option>
                <option value="Ciudad Real">Ciudad Real</option>
                <option value="Córdoba">Córdoba</option>
                <option value="Cuenca">Cuenca</option>
                <option value="Gerona/Girona">Gerona/Girona</option>
                <option value="Granada">Granada</option>
                <option value="Guadalajara">Guadalajara</option>
                <option value="Guipúzcoa/Gipuzkoa">Guipúzcoa/Gipuzkoa</option>
                <option value="Huelva">Huelva</option>
                <option value="Huesca">Huesca</option>
                <option value="Jaén">Jaén</option>
                <option value="La Coruña/A Coruña">La Coruña/A Coruña</option>
                <option value="La Rioja">La Rioja</option>
                <option value="Las Palmas">Las Palmas</option>
                <option value="León">León</option>
                <option value="Lérida/Lleida">Lérida/Lleida</option>
                <option value="Lugo">Lugo</option>
                <option value="Madrid">Madrid</option>
                <option value="Málaga">Málaga</option>
                <option value="Melilla">Melilla</option>
                <option value="Murcia">Murcia</option>
                <option value="Navarra">Navarra</option>
                <option value="Orense/Ourense">Orense/Ourense</option>
                <option value="Palencia">Palencia</option>
                <option value="Pontevedra">Pontevedra</option>
                <option value="Salamanca">Salamanca</option>
                <option value="Segovia">Segovia</option>
                <option value="Sevilla">Sevilla</option>
                <option value="Soria">Soria</option>
                <option value="Tarragona">Tarragona</option>
                <option value="Tenerife">Tenerife</option>
                <option value="Teruel">Teruel</option>
                <option value="Toledo">Toledo</option>
                <option value="Valencia">Valencia</option>
                <option value="Valladolid">Valladolid</option>
                <option value="Vizcaya/Bizkaia">Vizcaya/Bizkaia</option>
                <option value="Zamora">Zamora</option>
                <option value="Zaragoza">Zaragoza</option>
            </select>

            <!-- Centro -->
            <label for="Centros">Escoge Centro</label><br />
            <select name="Centros" id="centros">
                <option value>-seleccionar centro-</option>
                <option value="Madrid Ayala">Madrid Ayala</option>
                <option value="Collado Villalba">Collado Villalba</option>
                <option value="Pinto">Pinto</option>
                <option value="Las Rosas">Las Rosas</option>
                <option value="Plenilunio">Plenilunio</option>
                <option value="Leganes">Leganés</option>
                <option value="Centro Oeste">Centro Oeste</option>
                <option value="Gran Plaza 2">Gran Plaza 2</option>
                <option value="Alcorcon">Alcorcón</option>
                <option value="La Gavia">La Gavia</option>
                <option value="Alcala de Henares">Alcala de Henares</option>
                <option value="Alcobendas">Alcobendas</option>
                <option value="Fuenlabrada">Fuenlabrada</option>
                <option value="La Vaguada">La Vaguada</option>
                <option value="Tres Cantos">Tres Cantos</option>
            </select>

            <!-- Teléfono -->
            <label for="phone">Teléfono</label><br />
            <input type="number" name="phone" id="phone" placeholder="Teléfono" />

            <!-- Escribe aquí -->
            <label for="message">Cuéntanos brevemente en qué estás interesado para poder atenderte
                mejor. Gracias *</label>
            <textarea name="message" id="message" cols="30" rows="5" placeholder="Escribe aquí..."></textarea>

            <div class="form-text">
                <a href="https://centrosunico.com/politica-de-privacidad/">Politica de privacidad</a>
                <a href="https://centrosunico.com/condiciones-de-contratacion/">Condiciones de contratación</a>
            </div>

            <input class="btn" type="submit" value="PEDIR DIAGNÓSTICO" />
        </div>
    </form>

</section>