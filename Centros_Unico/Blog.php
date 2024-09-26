<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="styles/formulario2.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/comun.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/Blog.css?v=<?php echo time(); ?>">
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

    
        <div class="container">
            <div class="seccion">
                <img class="fotoart" src="img/acidoh.jpg" alt="" />
                <a href="#"></a>

                <h2>Tratamientos dermoesteticos que funcionan</h2>

                <p>
                    Está claro que los milagros en estética no existen, pero
                    determinados tratamientos consiguen resultados eficaces. Miembros
                    del Grupo Español de Dermatología Estética y Terapéutica (Gedet) de
                    la Academia Española de Dermatología y Venereología (AEDV), aseguran
                    que bien indicados, personalizados y combinados con otros
                    procedimientos (junto a dieta y ejercicio), algunos de ellos sí
                    funcionan.
                </p>
            </div>

            <div class="seccion">
                <img class="fotoart1" src="img/revision.jpg" alt="" />
                <a href="#"></a>

                <h2>
                    ¿Como prevenir las manchas y lesiones en el verano?
                </h2>

                <p>
                    Aunque es muy obvio, lo principal para combatir las manchas es usar
                    protector solar. Usa el que más se ajuste a tu tipo de piel.
                    Aplí­catelo 30 minutos antes de exponerte al sol, tras estar en
                    contacto con el agua y cada dos horas. En la gama Delial puedes
                    encontrar una gran variedad de protectores solares, escoge el que
                    más se adapte a tus necesidades. El UV Gel Hidratante con SPF50 es
                    perfecto para rostro y escote ya que se absorbe fácilmente como un
                    gel pero hidrata como una crema. ¡Lo más práctico!
                </p>
            </div>

            <div class="seccion">
                <img class="fotoart" src="img/crema.jpg" alt="" />
                <a href="#"></a>

                <h2>Descubre cual es tu tratamiento ideal</h2>

                <p>
                    <a class="a1" href="https://youtu.be/TJcD-ukP1TE?si=Jq8pRKfNKuqAVuv-" target="_blank" onclick><strong><u>CooLifting:</u></strong></a>
                    Un tratamiento de cabina no invasivo que nebuliza ácido hialurónico
                    en la cara para activar la hidratación en la epidermis, devolviendo
                    la luminosidad necesaria en tan solo 5 minutos.
                    <a class="a1" href="https://youtu.be/5vP11LqTXH8?si=e7SdoWL5m9VrWlV8" target="_blank" onclick><strong><u>Hialurox
                                Anti-Aging:</u></strong></a>
                    Un tratamiento que combina la acción de ácidos hialurónicos y cóctel
                    de vitaminas consiste en mesoterapia facial que mejoran el aspecto
                    de la piel.
                    <a class="a1"
                        href="https://youtu.be/6WOVUn2ZGI8?si=tz2Lg9M8OUvA2q1j" target="_blank" onclick><strong><u>Teoxane:</u></strong></a>
                    Una nueva tecnología que ha desarrollado el Laboratorio Teoxane,
                    llamada Preserved Network Technology, permite obtener un ácido
                    hialurónico que reúne las características adecuadas para tratar y
                    corregir los labios, respetando su movilidad.
                </p>
            </div>

            <div class="seccion">
                <img class="fotoart1" src="img/intervencion.jpg" alt="" />
                <a href="#"></a>

                <h2 class="h34">
                    ¿Como asesorarse en cuanto a intervenciones esteticas?
                </h2>

                <p>
                    Si estás considerando someterte a una intervención estética, es
                    importante que te asesores adecuadamente para tomar una decisión
                    informada. En España, algunas operaciones de cirugía plástica pueden
                    ser cubiertas por la Seguridad Social. Si deseas obtener más
                    información sobre las operaciones que cubre la Seguridad Social, te
                    recomiendo que consultes con un médico especialista o un psicólogo.
                    Además, es importante que te asegures de que el cirujano plástico
                    que elijas esté debidamente acreditado y tenga experiencia en la
                    intervención que deseas.
                </p>
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