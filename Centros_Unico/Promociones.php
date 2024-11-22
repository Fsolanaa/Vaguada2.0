<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="shortcut icon" href="img/iconCentrosUnico.png" />
    <link rel="stylesheet" href="styles/formulario2.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/comun.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/promociones.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/formInicio.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/formRegistro.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/productCards.css?v=<?php echo time(); ?>">
    <script src="js/contacto.js" defer></script>
    <script src="js/formularios.js" defer></script>
    <script src="js/logicaForms.js" defer></script>

    <title>Promociones</title>
</head>

<body>
    
    <?php
    include "./include/header.php";
    ?>

    <?php
    include "./include/formulario.php";
    ?>

    <main id="cuerpo">

    
    
        <div class="contenedor-promocion">
            <img class="rebaja1" src="img/PROMOCIONES (1).jpg" alt="">
            <img class="rebaja1" src="img/PromocionesNavidad .jpg" alt="">
        </div>

        <section class="promos">

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
                'img' => 'img/producto2ESTÉTICA.jpg',
                'titulo' => 'Accent Prime Corporal',
                'texto' => 'Estrena gluteos gracias a nuestros especialistas cualificados y a buenos precios.',
                'coste' => '29.99€'
            ];
            include './include/cardProducto.php';
            ?>


            <!-- 3º TARJETA -->
            <?php
            $data = [
                'img' => 'img/producto1MEDI.jpg',
                'titulo' => 'Depilacion gluteos',
                'texto' => 'Estrena gluteos gracias a nuestros especialistas cualificados y a buenos precios.',
                'coste' => '29.99€'
            ];
            include './include/cardProducto.php';
            ?>


            <!-- 4º TARJETA -->
            <?php
            $data = [
                'img' => 'img/PRODUCTO4ESTETICA.jpg',
                'titulo' => 'Hilos redensify',
                'texto' => 'Rellenado de arrugas sin agujas.Trabaja el fotoenvejecimiento unificando el tono de la
                    piel.',
                'coste' => '29.99€'
            ];
            include './include/cardProducto.php';
            ?>

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
    </script>  -->

</body>

</html>