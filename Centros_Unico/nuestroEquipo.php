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


    <title>Nuestro equipo</title>

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
            <?php
                $data = [
                    'img' => 'img/Foto_Rafa.jpg',
                    'nombre' => 'Rafael montes',
                    'texto' => 'Desarrollador web',
                    'email' => 'mailto:rafaelmontesjimenez@gmail.com',
                    'github' => 'https://github.com/RMontesJ',
                    'linkedin' => 'https://www.linkedin.com/in/rafaelmontesjimenez/'
                ];
                include './include/cardEquipo.php';
            ?>
            <!-- <div class="marco">
                <img class="foto" src="img/Foto_Rafa.jpg" alt="Rafa" />
              <h3>Rafael montes</h3>
               
               <p>Desarrollador web</p>
            </div> -->


            <?php
                $data = [
                    'img' => 'img/pistachinelespadachin.png',
                    'nombre' => 'Paco Solana',
                    'texto' => 'Desarrollador web y diseñador',
                    'email' => 'mailto:bios0179@gmail.com',
                    'github' => 'https://github.com/Fsolanaa',
                    'linkedin' => 'https://www.linkedin.com/in/francisco-jos%C3%A9-solana-dev/'
                ];
                include './include/cardEquipo.php';
            ?>
            
            <!-- <div class="marco">
                <img class="foto" src="img/pistachinelespadachin.png" alt="Paco" />
                
                <h3>Paco Solana</h3>
                <p>Desarrollador web y diseñador</p>

            </div> -->

            <?php
                $data = [
                    'img' => 'img/chipi.webp',
                    'nombre' => 'Juan Esteban',
                    'texto' => 'Desarrollador web y back-end',
                    'email' => 'mailto:jestebanl2004@gmail.com',
                    'github' => 'https://github.com/Jestebanl',
                    'linkedin' => 'https://www.linkedin.com/in/juan-esteban-l%C3%B3pez-702607297/'
                ];
                include './include/cardEquipo.php';
            ?>

            <!-- <div class="marco">
                <img class="foto" src="img/chipi.webp" alt="Juan" />
               
                <h3>Juan Esteban</h3>
                <p>Desarrollador web</p>
            </div> -->

            <?php
                $data = [
                    'img' => 'img/Foto_marcos.png',
                    'nombre' => 'Marcos Fernandez',
                    'texto' => 'Desarrollador web y back-end',
                    'email' => 'mailto:fernandemarcos11@gmail.com',
                    'github' => 'https://github.com/mfernandez69',
                    'linkedin' => 'https://www.linkedin.com/in/marcos-fernandez-nu%C3%B1ez/'
                ];
                include './include/cardEquipo.php';
            ?>

            <!-- <div class="marco">
                <img class="foto" src="img/Foto_marcos.png" alt="Marcos" />
               
                <h3>Marcos Fernandez</h3>
                <p>Desarrollador web y back-end</p>
            </div> -->

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