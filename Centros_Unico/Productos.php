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
    <link rel="stylesheet" href="styles/productCards.css?v=<?php echo time(); ?>">

    <script>
        const arrayCatalogos = "<?php echo $arrayCatalogos ?>";
    </script>
    <script src="js/contacto.js" defer></script>
    <script src="js/formularios.js" defer></script>
    <script src="js/carrito.js" defer></script>
    <script src="js/logicaForms.js" defer></script>
    <script src="js/validacionRegistro.js" defer></script>

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
    include "./include/formInicio.php";
    ?>
    <?php
    include "./include/formRegistro.php";
    ?>
    <?php
    include "./include/cesta.php";
    ?>
    <?php
    include "./include/ventanaProducto.php";
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


        <section class="Producto">
        
            <!-- 1º TARJETA -->
            <?php
            $data = [
                'img' => 'img/producto1Depi.png',
                'titulo' => 'Tarjeta Regalo',
                'texto' => 'Si no sabes que regalar, una tarjeta regalo puede ser tu mejor decision para esa persona
                    tan especial.',
                'coste' => '29.99€'
            ];
            include './include/cardProducto.php';
            ?>

            <!-- 2º TARJETA -->
            <?php
            $data = [
                'img' => 'img/producto1MEDI.jpg',
                'titulo' => 'Hidrolipoclasia',
                'texto' => 'El tratamiento reductor de grasa y volumen Hidrolipoclasia elimina de forma duradera',
                'coste' => '59.99€'
            ];
            include './include/cardProducto.php';
            ?>
            <!-- 4º TARJETA -->
            <?php
            $data = [
                'img' => 'img/producto2Depi.jpg',
                'titulo' => 'Depilación láser dorsales',
                'texto' => 'Elimina el incomo vello gracias a la depilación láser',
                'coste' => '32€'
            ];
            include './include/cardProducto.php';
            ?>
            <!-- 5º TARJETA -->
            <?php
            $data = [
                'img' => 'img/producto2ESTÉTICA.jpg',
                'titulo' => 'Accent Prime Corporal ',
                'texto' => 'Combina dos tecnologías: los ultrasonidos y la radiofrecuencia más potente del mercado',
                'coste' => '89€'
            ];
            include './include/cardProducto.php';
            ?>
            <!-- 6º TARJETA -->
            <?php
            $data = [
                'img' => 'img/producto3Depi.jpg',
                'titulo' => 'Depilación láser tórax',
                'texto' => 'La depilación láser del tórax te ayudará, en sesiones de 30 a 40 minutos',
                'coste' => '32€'
            ];
            include './include/cardProducto.php';
            ?>
            <!-- 7º TARJETA -->
            <?php
            $data = [
                'img' => 'img/PRODUCTOS4MEDI.jpg',
                'titulo' => 'Relleno de Ojeras',
                'texto' => 'El tratamiento que reduce o elimina las ojeras provocadas por el cansancio.',
                'coste' => '49,99€'
            ];
            include './include/cardProducto.php';
            ?>
            <!-- 8º TARJETA -->
            <?php
            $data = [
                'img' => 'img/PRODUCTO4ESTETICA.jpg',
                'titulo' => 'Hilos Redensify',
                'texto' => 'Tratamiento antiedad, rellenador de arrugas y redensificador, sin agujas, que mejora las arrugas',
                'coste' => '49,99€'
            ];
            include './include/cardProducto.php';
            ?>
            <!-- 9º TARJETA -->
            <?php
            $data = [
                'img' => 'img/intervencion.jpg',
                'titulo' => 'Ajuste linea de flequillo',
                'texto' => 'Reajusta tu linea de flequillo y suelta tu melena al viento.',
                'coste' => '29,99€'
            ];
            include './include/cardProducto.php';
            ?>
            <!-- 10º TARJETA -->
            <?php
            $data = [
                'img' => 'img/revision.jpg',
                'titulo' => 'Depilacion cejas',
                'texto' => 'Estrena cejas contorneadas gracias a nuestros especialistas cualificados.',
                'coste' => '19,99€'
            ];
            include './include/cardProducto.php';
            ?>
            <!-- 11º TARJETA -->
            <?php
            $data = [
                'img' => 'img/producto3MEDI.jpg',
                'titulo' => 'Intradermis Revitalizante',
                'texto' => 'Bioestimulación indolora que aporta una combinación de vitaminas y Ácido Hialurónico',
                'coste' => '49,99€'
            ];
            include './include/cardProducto.php';
            ?>
            <!-- 12º TARJETA -->
            <?php
            $data = [
                'img' => 'img/producto4DEPI.jpg',
                'titulo' => 'Crema Post Láser Corporal',
                'texto' => 'Crema que revitaliza la piel y reestablece y recupera parte del colageno natural.',
                'coste' => '29,99€'
            ];
            include './include/cardProducto.php';
            ?>
            <!-- 13º TARJETA -->
            <?php
            $data = [
                'img' => 'img/PRODUCTO3ESTETICA.jpg',
                'titulo' => 'Hidrolipoclasia',
                'texto' => 'La Hidrolipoclasia elimina de forma duradera la
                    grasa',
                'coste' => '29,99€'
            ];
            include './include/cardProducto.php';
            ?>
            <!-- 14º TARJETA -->
            <?php
            $data = [
                'img' => 'img/producto2_index.jpg',
                'titulo' => 'Crema antiarrugas',
                'texto' => 'Crema con colageno que ayuda a prevenir las arrugas.',
                'coste' => '29,99€'
            ];
            include './include/cardProducto.php';
            ?>
            <!-- 15º TARJETA -->
            <?php
            $data = [
                'img' => 'img/producto2MEDI.jpg',
                'titulo' => 'Reconstitucion alimentaria',
                'texto' => 'La mejor opción para conseguir tus objetivos estéticos.',
                'coste' => '50€'
            ];
            include './include/cardProducto.php';
            ?>  
            <!-- 16º TARJETA -->
            <?php
            $data = [
                'img' => 'img/producto2ESTETICA.jpg',
                'titulo' => 'TOTAL FACE 4D',
                'texto' => 'TOTAL FACE 4D es un tratamiento en alianza con Germaine de Capuccini',
                'coste' => '100€'
            ];
            include './include/cardProducto.php';
            ?>

        </section>
    </main>

    <?php
    include "./include/footer.php";
    ?>

    <script>

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
        function abrirVentanaProducto() {
            document.getElementById("ventanaProducto").style.display = "block";
            document.getElementById("cuerpo").style.filter = "blur(5px)";
            document.getElementById("header").style.filter = "blur(5px)";
            document.getElementById("nav").style.filter = "blur(5px)";
            document.getElementById("cajaContacto").style.filter = "blur(5px)";
        }

        function ocultarVentanaProducto() {
            document.getElementById("ventanaProducto").style.display = "none";
            document.getElementById("cuerpo").style.filter = "none";
            document.getElementById("header").style.filter = "none";
            document.getElementById("nav").style.filter = "none";
            document.getElementById("cajaContacto").style.filter = "none";
        }
        function agregarAlCarrito() {

            alert('Producto agregado al carrito');
        }
    </script>
</body>

</html>