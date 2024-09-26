<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="styles/formulario2.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/comun.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/promociones.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/iconCentrosUnico.png" />
    <script src="js/contacto.js" defer></script>

    <title>Document</title>
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

            <div class="marco">

                <img class="fotp" src="img/producto1Depi.png" alt="Tarjeta regalo">

                <h4><strong>Tarjeta Regalo</strong></h4>

                <p class="parrafo">Si no sabes que regalar, una tarjeta regalo puede ser tu mejor decision para esa persona
                    tan especial.</p>

                <button class="boton"><strong>Más información</strong></</button>

            </div>

            <div class="marco">

                <img class="fotp" src="img/producto2ESTÉTICA.jpg" alt="Depilacion gluteos">

                <h4><strong>Accent Prime Corporal</strong></h4>

                <p class="parrafo">Estrena gluteos gracias a nuestros especialistas cualificados y a buenos precios.</p>

                <button class="boton"><strong>Más información</strong></</button>

            </div>

            <div class="marco">

                <img class="fotp" src="img/producto1MEDI.jpg" alt="Depilacion gluteos">

                <h4><strong>Depilacion gluteos</strong></h4>

                <p class="parrafo">Estrena gluteos gracias a nuestros especialistas cualificados y a buenos precios.</p>

                <button class="boton"><strong>Más información</strong></</button>

            </div>

            <div class="marco">

                <img class="fotp" src="img/PRODUCTO4ESTETICA.jpg" alt="Depilacion gluteos">

                <h4><strong>Hilos redensify</strong></h4>

                <p class="parrafo">Rellenado de arrugas sin agujas.Trabaja el fotoenvejecimiento unificando el tono de la
                    piel.</p>

                <button class="boton"><strong>Más información</strong></</button>

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
    </script> -->

</body>

</html>