<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Styles/styles.css"> 
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
                        <li><a href="dashboard.php">Inicio</a></li>
                        <li><a href="dashboard.php?modulo=noticiasAdm">Noticias</a></li>
                        <li><a href="dashboard.php?modulo=galeriaAdm">Galeria</a></li>
                        <li><a href="dashboard.php?modulo=eventosAdm">Eventos</a></li>  
                    </ul>
                </nav> 
            </ul>
        </aside>
         
        <main >
            <section class="content"></section>
            <?php

                if (isset($_GET["modulo"])) {

                    include "$_GET[modulo].php";

                } else {
                    
                }
            ?>
        </main>
</body>
</html>