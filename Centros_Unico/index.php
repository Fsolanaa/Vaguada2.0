<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="shortcut icon" href="img/iconCentrosUnico.png" />
    <link rel="stylesheet" href="styles/formulario2.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/comun.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/formInicio.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/formRegistro.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/productCards.css?v=<?php echo time(); ?>">

    <script src="js/contacto.js" defer></script>
    <script src="js/formularios.js" defer></script>
    <script src="js/logicaForms.js" defer></script>
    <script src="js/validacionRegistro.js" defer></script>
    
    <title>Inicio</title>

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
    <main id="cuerpo">
        <!-- Aqui empieza el slider -->
        <div class="container-all">
            <input type="radio" id="1" name="image-slide" hidden />
            <input type="radio" id="2" name="image-slide" hidden />
            <input type="radio" id="3" name="image-slide" hidden />

            <div class="slide">
                <div class="item-slide"><img src="img/slider1.jpg" alt="EspacioFoto" /></div>
                <div class="item-slide"><img src="img/slider2.jpg" alt="EspacioFoto" /></div>
                <div class="item-slide"><img src="img/slider3.jpg" alt="EspacioFoto" /></div>
            </div>
            <div class="pagination">
                <label class="pagination-item" for="1">
                    <img src="img/slider1.jpg" alt="FotoSlider" />
                </label>
                <label class="pagination-item" for="2">
                    <img src="img/slider2.jpg" alt="FotoSlider" />
                </label>
                <label class="pagination-item" for="3">
                    <img src="img/slider3.jpg" alt="FotoSlider" />
                </label>
            </div>
            <!-- Aqui acaba el slider -->
             
            <section class="deseados">
                <?php
                    $data = [
                        'img' => 'img/producto1Depi.png',
                        'titulo' => 'Tarjeta Regalo',
                        'texto' => 'Si no sabes que regalar, una tarjeta regalo puede ser tu mejor decision para esa
                                persona tan especial.',
                        'coste' => '100€'
                    ];
                    include './include/cardProducto.php';
                ?>


                <?php
                    $data = [
                        'img' => 'img/producto2ESTÉTICA.jpg',
                        'titulo' => 'Accent Prime Corporal',
                        'texto' => 'Estrena gluteos gracias a nuestros especialistas cualificados y a buenos precios.',
                        'coste' => '120€'
                    ];
                    include './include/cardProducto.php';
                ?>


                <?php
                    $data = [
                        'img' => 'img/producto1MEDI.jpg',
                        'titulo' => 'Depilacion gluteos',
                        'texto' => 'Estrena gluteos gracias a nuestros especialistas cualificados y a buenos precios.',
                        'coste' => '40€'
                    ];
                    include './include/cardProducto.php';
                ?>


                <?php
                    $data = [
                        'img' => 'img/PRODUCTO4ESTETICA.jpg',
                        'titulo' => 'Hilos redensify',
                        'texto' => 'Rellenado de arrugas sin agujas.Trabaja el fotoenvejecimiento unificando el tono de
                                la piel.',
                        'coste' => '20€'
                    ];
                    include './include/cardProducto.php';
                ?>
            </section>
        </div>

    </main>

    <?php
        include "./include/footer.php";
    ?>
</body>
</html>