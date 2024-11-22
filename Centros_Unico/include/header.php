<hr class="inicial">

<!-- CAJA CONTACTO -->
<div id="contenedorContacto">
    <div id="cajaContacto">
        <h5 id="textoContacto">30% de descuento. ¡Pide cita ahora!</h5>
    </div>
</div>

<!-- <hr class="encimaHeader"> -->

<header id="header">
    <div class="logo">
        <a href="index.php" class="logo">
            <img src="img/iconCentrosUnico.png" class="logoImg" />
        </a>
    </div>

    <nav id="nav">
        <ul>
            <li class="lista-nav"><a href="index.php">Inicio</a></li>
            <li class="lista-nav"><a href="Productos.php">Productos</a></li>
            <li class="lista-nav"><a href="Promociones.php">Promociones</a></li>
            <li class="lista-nav"><a href="Blog.php">Blog</a></li>
            <li class="lista-nav"><a href="nuestroEquipo.php">Desarrolladores</a></li>
        </ul>
    </nav>

    <div class="botonesHeader">
        <a href="#" class="perfil" id="btnSesion">
            <i class="fa-solid fa-user"></i>
        </a>
        <a href="#" class="cesta" id="btnCesta">
        <i class="fa-solid fa-bag-shopping"></i>
        </a>
    </div>

</header>

<label class="lateral">

    <input type="checkbox" class="input-barraLateral">
    <div class="toggle">
        <span class="top_line common"></span>
        <span class="middle_line common"></span>
        <span class="bottom_line common"></span>
    </div>

    <div class="slide">
        <ul>
            <!-- <li><a href="#"><i class="fas fa-tv"></i>dashboard</a></li> --> 
            <li class="opL"><a href="../indexRegistrado.php?id_usuario=<?php echo $id_usuario ?>&usuario=<?php echo $nombre ?>"><i class='fa-solid fa-house'></i></a></li>
            <li class="opL"><a href="#"><i class="far fa-user"></i></a></li>
            <!-- <li><a href="#"><i class="fab fa-gripfire"></i>trending</a></li> -->
            <li class="opL"><a href="#"><i class="far fa-comments"></i></a></li>
            <!-- <li><a href="#"><i class="far fa-folder"></i>file manager</a></li> -->
            <!-- <li><a href="#"><i class="far fa-address-book"></i>portfolio</a></li> -->
            <li class="opL"><a href="../unimatch/favoritos/favoritos.php?id_usuario=<?php echo $id_usuario ?>&nombre=<?php echo $nombre ?>"><i class="fas fa-heart"></i></a></li>
            <li class="opL"><a href="../unimatch/settingsUser/indexConfig.php?id_usuario=<?php echo $id_usuario ?>&usuario=<?php echo $nombre ?>"><i class="fas fa-cogs"></i></a></li>
            <li class="opL"><a href="../unimatch/inicioSesionForm/cerrarSesion.php"><i class='fas fa-sign-out-alt'></i></a></li>
        </ul>
    </div>
</label>
<!-- <hr class="debajoHeader"> -->
<!-- NAV -->

