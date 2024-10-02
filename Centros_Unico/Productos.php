<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="shortcut icon" href="img/iconCentrosUnico.png" />
    <link rel="stylesheet" href="styles/cesta.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/formulario2.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/comun.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/productos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/formInicio.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/formRegistro.css?v=<?php echo time(); ?>">
    <script src="js/contacto.js" defer></script>
    <script src="js/formularios.js" defer></script>
    <script src="js/logicaForms.js" defer></script>

    <title>Productos</title>
</head>

<body>

    <?php
    include "./include/header.php";
    ?>

    <?php
    include "./include/formulario.php";
    ?>

    <?php
    include "./include/cesta.php";
    ?>

    <main id="cuerpo">

    

        <!-- EMPIEZA BLOQUE DE CONTENIDO-->

        <!-- SLIDER AUTOMÁTICO -->
        <div class="container-all">
            <input type="radio" id="1" name="image-slide" hidden />
            <input type="radio" id="2" name="image-slide" hidden />
            <input type="radio" id="3" name="image-slide" hidden />

            <div class="slide">
                <div class="item-slide"><img src="img/slider1.jpg" alt="" /></div>
                <div class="item-slide"><img src="img/slider2.jpg" alt="" /></div>
                <div class="item-slide"><img src="img/slider3.jpg" alt="" /></div>
            </div>
            <div class="pagination">
                <label class="pagination-item" for="1">
                    <img src="img/slider1.jpg" alt="" />
                </label>
                <label class="pagination-item" for="2">
                    <img src="img/slider2.jpg" alt="" />
                </label>
                <label class="pagination-item" for="3">
                    <img src="img/slider3.jpg" alt="" />
                </label>
            </div>
        </div>

        <!-- SECCIÓN DE DEPILACIÓN -->
        <section class="Producto">
            <div class="marco">

                <img class="fotp" src="img/producto1Depi.png" alt="centros-unico-tarjeta-regalo-depilacion">

                <h4><strong>Tarjeta Regalo</strong></h4>

                <p class="parrafo">Si no sabes que regalar, una tarjeta regalo puede ser tu mejor decision para esa persona
                    tan especial.</p>

                <a href="#" onclick="cesta()">
                <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>
                </a>

            </div>

            <div class="marco">

                <img class="fotp" src="img/producto1MEDI.jpg" alt="centros-unico-hidrolipoclasia-antigrasa-duradera">

                <h4><strong>Hidrolipoclasia</strong></h4>

                <p class="parrafo">El tratamiento reductor de grasa y volumen Hidrolipoclasia elimina de forma duradera</p>

                <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>

            </div>

            <div class="marco">

                <img class="fotp" src="img/producto2Depi.jpg" alt="centros-unico-depilacion-laser-dorsarles">

                <h4><strong>Depilación láser dorsales</strong></h4>

                <p class="parrafo">Elimina el incomodo vello de la parte superior de la espalda gracias a la depilación láser</p>

                <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>

            </div>



        </section>

        <section class="Producto">

            <div class="marco">

                <img class="fotp" src="img/producto2ESTÉTICA.jpg" alt="centros-unico-accent-prime-corporal-ultrasonidos-radiofrecuencia">

                <h4><strong>Accent Prime Corporal</strong></h4>

                <p class="parrafo">Combina dos tecnologías: los ultrasonidos y la radiofrecuencia más potente del mercado</p>

                <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>

            </div>

            <div class="marco">

                <img class="fotp" src="img/producto3Depi.jpg" alt="centros-unico-depilacion-laser-torax">

                <h4><strong>Depilación láser tórax</strong></h4>

                <p class="parrafo">La depilación láser del tórax te ayudará, en sesiones de 30 a 40 minutos</p>

                <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>

            </div>

            <div class="marco">

                <img class="fotp" src="img/PRODUCTOS4MEDI.jpg" alt="centros-unico-ojeras-relleno-eliminar">

                <h4><strong>Relleno de Ojeras</strong></h4>

                <p class="parrafo">El tratamiento que reduce o elimina las ojeras provocadas por el cansancio.</p>

                <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>
            </div>



        </section>

        <section class="Producto">

            <div class="marco">

                <img class="fotp" src="img/PRODUCTO4ESTETICA.jpg" alt="centros-unico-hilos-redensify-antiedad-arrugas">

                <h4><strong>Hilos Redensify</strong></h4>

                <p class="parrafo">Tratamiento antiedad, rellenador de arrugas y redensificador, sin agujas, que mejora las arrugas</p>

                <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>

            </div>
            
            <div class="marco">

                <img class="fotp" src="img/intervencion.jpg" alt="flequillo-melena-gratuita-centros-unico">

                <h4><strong>Ajuste linea de flequillo</strong></h4>

                <p class="parrafo">Reajusta tu linea de flequillo y suelta tu melena al viento. La primera consulta es
                    gratuita</p>

                    <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>

            </div>

            <div class="marco">

                <img class="fotp" src="img/revision.jpg" alt="cejas-depilacion-contorno-centros-unico">

                <h4><strong>Depilacion cejas</strong></h4>

                <p class="parrafo">Estrena cejas contorneadas gracias a nuestros especialistas cualificados y a buenos
                    precios.</p>

                    <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>

            </div>



        </section>


        
        <section class="estetica">

            <div class="marco">

                <img class="fotp" src="img/producto3MEDI.jpg" alt="bioestimulacin-revitalizante-acido-hialunronico-centros-unico">

                <h4><strong>Intradermis Revitalizante</strong></h4>

                <p class="parrafo">Bioestimulación indolora que aporta una combinación de vitaminas y Ácido Hialurónico</p>

                <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>

            </div>

            <div class="marco">

                <img class="fotp" src="img/producto4DEPI.jpg" alt="crema-laser-corporal-centros-unico">

                <h4><strong>Crema Post Láser Corporal</strong></h4>

                <p class="parrafo">Crema que revitaliza la piel y reestablece y recupera parte del colageno natural.</p>

                <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>

            </div>

            <div class="marco">

                <img class="fotp" src="img/PRODUCTO3ESTETICA.jpg" alt="hidrolipoclasia-rductor-grasa-centros-unico">

                <h4><strong>Hidrolipoclasia</strong></h4>

                <p class="parrafo">El tratamiento reductor de grasa y volumen Hidrolipoclasia elimina de forma duradera la
                    grasa</p>

                    <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>

            </div>

        </section>


        
        <section class="medicina">

            <div class="marco">

                <img class="fotp" src="img/producto2_index.jpg" alt="crema-antiarrugas-coalgeno-centros-unico">

                <h4><strong>Crema antiarrugas</strong></h4>

                <p class="parrafo">Crema con colageno que ayuda a prevenir las arrugas (usar por las noches).</p>

                <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>

            </div>

            <div class="marco">

                <img class="fotp" src="img/producto2MEDI.jpg" alt="nutricion-dieta-esteticos-objetivos-centros-unico">

                <h4><strong>Reconstitucion alimentaria</strong></h4>

                <p class="parrafo">Nuestros especialistas en nutricion te ayudaran a escoger la mejor dieta segun tus
                    objetivos esteticos.</p>

                    <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>

            </div>

            <div class="marco">

                <img class="fotp" src="img/producto2ESTETICA.jpg" alt="germaine-capuccini-centros-unico">

                <h4><strong>TOTAL FACE 4D </strong></h4>

                <p class="parrafo">TOTAL FACE 4D es un tratamiento en alianza con Germaine de Capuccini</p>

                <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front"> Más información </span>
                    </button>

            </div>


        </section>
    </main>

    <?php
    include "./include/footer.php";
    ?>

    <!-- <script>
        //JAVA que es un lenguaje fuertemente tipado(Cuando pongo una variable tengo que darle un tipo)

        function mostrarVentana() {
            document.getElementById("formulario").style.display = "block";
            document.getElementById("cuerpo").style.filter = "blur(5px)";
            document.getElementById("header").style.filter = "blur(5px)";
            document.getElementById("nav").style.filter = "blur(5px)";
            document.getElementById("cajaContacto").style.filter = "blur(5px)";
        }
        function cerrarFormulario() {
            document.getElementById("formulario").style.display = "none";
            document.getElementById("cuerpo").style.filter = "none";
            document.getElementById("header").style.filter = "none";
            document.getElementById("nav").style.filter = "none";
            document.getElementById("cajaContacto").style.filter = "none";
        } 
        function cesta(){
            document.getElementById("cesta").style.display = "block";
            document.getElementById("cuerpo").style.filter = "blur(5px)";
            document.getElementById("header").style.filter = "blur(5px)";
            document.getElementById("nav").style.filter = "blur(5px)";
            document.getElementById("cajaContacto").style.filter = "blur(5px)";
        }

        function ocultarCesta() {
            document.getElementById("cesta").style.display = "none";
            document.getElementById("cuerpo").style.filter = "none";
            document.getElementById("header").style.filter = "none";
            document.getElementById("nav").style.filter = "none";
            document.getElementById("cajaContacto").style.filter = "none";
        }
        function agregarAlCarrito() {
        // Aquí puedes agregar la lógica para manejar la acción de agregar al carrito
        // Por ejemplo, podrías actualizar un contador de productos en el carrito o realizar alguna otra acción.
        alert('Producto agregado al carrito');
        }
    </script> -->
</body>

</html>