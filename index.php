<?php 
  include "php\utils\conexion.php";
  conectar();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Observatorio de las Misiones</title>
  
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
    <script src="Js/main.js" type="module"></script>

    <!-- Hoja de Estilos -->
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
        include("php/components/navbar.php");
      ?>
      <!-- Contenedor Centrado de Contenidos -->
      <section class="contenedor-centrado">
        <!-- Cargamos los contenidos -->
         <?php 
         if (!empty($_GET['modulo'])) {
            // Tomamos el valor del parámetro 'modulo'
          $modulo = $_GET['modulo'];

          // Separamos el valor del 'modulo' antes del '?' (si existe)
          $modulo_base = strtok($modulo, '&'); // Esto obtiene la parte antes del '?'.

          // Capturamos la parte después del '?' para obtener los parámetros adicionales
          $params = strstr($modulo, '&'); // Devuelve la parte después del '?' (incluido el '?')

          // Incluir el módulo correspondiente
          include "php/pages/$modulo_base.php";
          
          // Aquí podrías hacer algo con los parámetros almacenados, como redirigir, pasarlos a otro proceso, etc.
          // Ejemplo: Redirigir al mismo módulo con los parámetros adicionales
          if ($params) {
              // Esto redirige a la misma página pero con los parámetros GET adicionales
              header("Location: index.php$mods$params");
              exit();
          }
         }else{
          include "php/pages/nosotros.php";
         }
         ?>
        
      </section>
    </main>
    <?php 
      // Componente Footer
      include "php/components/footer.php";
    ?>
  </body>
</html>
