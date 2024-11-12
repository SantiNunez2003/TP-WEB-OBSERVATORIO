<?php 

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nosotros | Observatorio de las Misiones</title>
    <link rel="stylesheet" href="./Styles/styles.css" />

    
  </head>

  <body>
    <!-- Titulo de Pagina -->
    <header class="titulo">
      <h1>Observatorio de las Misiones</h1>
    </header>

    <main>
      <?php 
        // Componente Hero
        include "php/components/hero.php";
        // Componente Navbar
        include "php/components/navbar.php";
      ?>
      <!-- Contenedor Centrado de Contenidos -->
      <section class="contenedor-centrado">
        <!-- Cargamos los contenidos -->
        
      </section>
    </main>
    <?php 
      // Componente Footer
      include "php/components/footer.php";
    ?>
    <script src="./Js/main.js" type="module"></script>
  </body>
</html>
