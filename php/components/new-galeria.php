<?php
    include '../php/conexion.php'; 

    function obtenerGaleria()
    {

        global $con;
        $consulta = "SELECT url_imagen, descripcion FROM imagenes_galeria WHERE estatus = 'Activo'";
        $result = mysqli_query($con, $consulta); 

        $imagenes = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $imagenes[] = $row;
        }
        return $imagenes;
    }

    // Conectar a la base de datos
    conectar();
    $imagenes = obtenerGaleria();
    desconectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nuestras Imagenes | Observatorio de las Misiones</title>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Plugin JPages -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/luis-almeida/jPages@latest/css/jPages.css">
  <script src="https://cdn.jsdelivr.net/gh/luis-almeida/jPages@latest/js/jPages.min.js"></script>

  <!-- Archivo JS -->
  <script src="../Js/main.js" type="module"></script>

  <!-- Hoja de Estilos -->
  <link rel="stylesheet" href="../Styles/styles.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.11/jquery.lazy.min.js"></script>
  <script>
    $(function () {
      $('.lazy').lazy();
    });
  </script>
</head>

<body>
  <!-- Titulo de Pagina -->
  <header class="titulo">
    <h1>Observatorio de las Misiones</h1>
  </header>

  <main>
    <!-- Imagen Hero -->
    <section class="seleccion">
      <article class="contenedor-seleccion">
        <div>
          <img class="imagen-seleccion" src="../Image/Observatorio-background-lines.svg" alt="Imagen de Observatorio" />
        </div>
      </article>
    </section>

    <section class="contenedor-centrado">
      <!-- Navegacion con Iconos -->
      <nav class="barra-de-navegacion">
        <ul class="lista-de-seleccion">
          <li id="lista-index">
            <a href="../index.html"><img class="icono-seleccion" src="../Icons/Oscuro/Observatory-Icon-oscuro.svg"
                alt="Icono de Observatorio" />
              Nosotros
            </a><!-- ../index.html -->
          </li>
          <li id="lista-noticia">
            <a href="../pages/Noticias.html">
              <img class="icono-seleccion" src="../Icons/Oscuro/Noticias-oscuro.svg" alt="Icono Noticia" />
              Noticias
            </a> <!-- ../Noticias.html -->
          </li>
          <li id="lista-galeria">
            <a href="./new-galeria"><img class="icono-seleccion" src="../Icons/Oscuro/Telescopio-oscuro.svg"
                alt="Icono Telescopio" />
              Galeria
            </a> <!-- ../Galeria.html -->
          </li>
          <li id="lista-evento">
            <a href="../pages/Eventos.html"><img class="icono-seleccion" src="../Icons/Oscuro/Eventos-oscuro.svg"
                alt="Icono Evento" />
              Eventos
            </a><!-- ../Eventos.html -->
          </li>
        </ul>
      </nav>

      <h1>Nuestras Imágenes</h1>

      <!-- Sección Nuestras Imágenes -->
      <section class="contenedor-centrado">
        <div id="contenedor-imagenes">
            <?php foreach ($imagenes as $imagen): ?>
                <figure>
                <img class="lazy" src="<?php echo htmlspecialchars($imagen['url_imagen']); ?>" alt="Descripción de la imagen" />
                <figcaption><?php echo htmlspecialchars($imagen['descripcion']); ?></figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
        
        <div class="paginacion"></div>
      </section>
    </section>
  </main>

  <!--Footer-->
  <footer class="footer">
    <div class="footer-contenido">
      <div class="footer-info">
        <p>Teléfono: <a href="tel:+123456789">+123 456 789</a></p>
        <p>
          Email:
          <a href="mailto:observatorio.misiones@gmail.com">observatorio.misiones@gmail.com</a>
        </p>
      </div>
      <!--Incluir Redes-->
    </div>
    <div class="footer-copy">
      <p>
        &copy; 2024 Observatorio de las Misiones. Todos los derechos
        reservados.
      </p>
    </div>
  </footer>
</body>

</html>