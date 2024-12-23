<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="shortcut icon" href="img/iconCentrosUnico.png" />
    <link rel="stylesheet" href="styles/formulario2.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/comun.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/nuestroEquipo.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="styles/formInicio.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/formRegistro.css?v=<?php echo time(); ?>">
    <script src="js/contacto.js" defer></script>
    <script src="js/formularios.js" defer></script>
    <script src="js/logicaForms.js" defer></script>
    <script src="js/validacionRegistro.js" defer></script>
    
    <title>Equipo de desarrolladores</title>

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
    include "./include/formulario.php";
    ?>


    <main id="cuerpo">

    
    
        <h1>Equipo de desarrolladores</h1>

        <div class="nosotros">
            <?php
                $data = [
                    'img' => 'img/Foto_Rafa-2.jpg',
                    'nombre' => 'Rafael Montes',
                    'texto' => 'Desarrollador web',
                    'email' => 'mailto:rafaelmontesjimenez@gmail.com',
                    'github' => 'https://github.com/RMontesJ',
                    'linkedin' => 'https://www.linkedin.com/in/rafaelmontesjimenez/'
                ];
                include './include/cardEquipo.php';
            ?>

            <?php
                $data = [
                    //'img' => 'img/pistachinelespadachin.png',
                    'img' => 'img/Foto_paco.jpg',
                    'nombre' => 'Paco Solana',
                    'texto' => 'Desarrollador web y diseñador',
                    'email' => 'mailto:bios0179@gmail.com',
                    'github' => 'https://github.com/Fsolanaa',
                    'linkedin' => 'https://www.linkedin.com/in/francisco-jos%C3%A9-solana-dev/'
                ];
                include './include/cardEquipo.php';
            ?>

            <?php
                $data = [
                    //'img' => 'img/chipi.webp',
                    'img' => 'img/Foto_juan.jpg',
                    'nombre' => 'Juan Esteban',
                    'texto' => 'Desarrollador web y back-end',
                    'email' => 'mailto:jestebanl2004@gmail.com',
                    'github' => 'https://github.com/Jestebanl',
                    'linkedin' => 'https://www.linkedin.com/in/juan-esteban-l%C3%B3pez-702607297/'
                ];
                include './include/cardEquipo.php';
            ?>

            <?php
                $data = [
                    'img' => 'img/Foto_marcos.png',
                    'nombre' => 'Marcos Fernández',
                    'texto' => 'Desarrollador web y back-end',
                    'email' => 'mailto:fernandemarcos11@gmail.com',
                    'github' => 'https://github.com/mfernandez69',
                    'linkedin' => 'https://www.linkedin.com/in/marcos-fernandez-nu%C3%B1ez/'
                ];
                include './include/cardEquipo.php';
            ?>

        </div>
    </main>



    <?php
    include "./include/footer.php";
    ?>

</body>

</html>