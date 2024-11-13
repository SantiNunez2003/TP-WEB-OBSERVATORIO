<?php 
    include "../utils/conexion.php";
    conectar();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Styles/styles.css">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Plugin JPages -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/luis-almeida/jPages@latest/css/jPages.css">
    <script src="https://cdn.jsdelivr.net/gh/luis-almeida/jPages@latest/js/jPages.min.js"></script>

    <!-- Plugin Toastr -->
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Archivo JS -->
    <script src="../../Js/main.js" type="module"></script>

</head>
<body>
    <header class="titulo">
        <h1>Dashboard</h1>
    </header>

    <div class="container">
        <aside class="sidebar">
            <ul>
                <nav>
                    <ul>
                        <li><a href="dashboard.php?modulo=noticiasAdm">Noticias</a></li>
                        <li><a href="dashboard.php?modulo=galeriaAdm">Galeria</a></li>
                        <li><a href="dashboard.php?modulo=eventosAdm">Eventos</a></li>  
                    </ul>
                </nav> 
            </ul>
        </aside>
         
        <main >
            <section class="content"> 
                <?php

                    if (isset($_GET["modulo"])) {
                        include "../components/$_GET[modulo].php";
                    } else {
                        include "../components/noticiaAdm.php";
                    }
                ?>
                 
                <div class="contenedor-centrado"> 
                    <!-- //Sección de formulario -->
                    <?php  include "../components/form.php" ?>
                </div>
            </section>
        </main>
    </div>

</body>
</html>