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
    
    <title>Equipo</title>
</head>

<body>
    
    <?php
    include "./include/header.php";
    ?>

    <?php
    include "./include/formulario.php";
    ?>


    <main id="cuerpo">

    
    
        <h1>Nuestro equipo</h1>

        <div class="nosotros">
            <div class="marco">
                <img class="foto" src="img/dianmitarafi.png" alt="Rafa" />
               <p><strong>Rafita el DINAMITA</strong></p> 
               <p>Rafael Montes</p>
               <p>Desarrollador web</p>
            </div>

            <div class="marco">
                <img class="foto" src="img/pistachinelespadachin.png" alt="Paco" />
                <p><strong>Pistachín el Espadachín</strong></p>
                <p>Paco Solana </p>
                <p>Desarrollador web y diseñador</p>

            </div>

            <div class="marco">
                <img class="foto" src="img/chipi.webp" alt="Juan" />
               <p><strong>ER CHIPIRÓN </strong></p> 
                <p>Juan Esteban</p>
                <p>Desarrolador web</p>
            </div>
        </div>
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