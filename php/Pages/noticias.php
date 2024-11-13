<?php 
  $titulo_modulo = "Noticias | Observatorio de las Misiones";
  //volver dinamico la carga de los titurlos
  
?>
<h1>Noticias</h1>

<!-- Presentación de Noticias -->
<section class="noticias">
  <div class="contenedor-noticias">
    
    <!-- Presentación Dinamica de Notiacias
    <div id="contenedor-noticias"></div> -->
    <div id="contenedor-noticias">
      <?php 
        $sql = "SELECT * FROM noticia ORDER BY id DESC";
        $result = mysqli_query($con, $sql);
        
        // Verifica si hay resultados
        if (mysqli_num_rows($result) > 0) {
            // Recorremos las noticias
            while ($noticia = mysqli_fetch_array($result)) {
                // Alternamos entre las dos estructuras
                if ($noticia['id'] % 2 == 0) { // Si el ID es par, mostramos la estructura noticia1
                    ?>
                      <section class="noticia">
                          <header class="titulo-noticia">
                              <img src="Icons/Blanco/Observatory-Icon.svg" alt="Icono Observatorio" />
                              <h2><?php echo $noticia['titulo']; ?></h2>
                          </header>
                          <div class="contenido-noticia">
                              <div class="texto-noticia">
                                  <div class="barra-decorativa"></div>
                                  <p class="descripcion-noticia"><?php echo $noticia['descripcion']; ?></p>

                                  <a class="boton-mas-info" href="index.php?modulo=noticia-seleccionada&id=<?php echo $noticia['id']; ?>">Ver Más...</a>
                              </div>
                              <div class="contenedor-imagen-noticia">
                                  <?php 
                                  if (file_exists('image/' . $noticia['url_imagen'])) { // Verifica si la imagen existe
                                      echo '<img src="image/' . $noticia['url_imagen'] . '" alt="Imagen de la Noticia" />';
                                  } else {
                                      echo "<p>Sin imagen</p>";
                                  }
                                  ?>
                              </div>
                          </div>
                      </section>
                    <?php
                } else { // Si el ID es impar, mostramos la estructura noticia2
                    ?>
                      <section class="noticia">
                          <header class="titulo-noticia">
                              <img src="Icons/Blanco/Observatory-Icon.svg" alt="Icono Observatorio" />
                              <h2><?php echo $noticia['titulo']; ?></h2>
                          </header>
                          <div class="contenido-noticia">
                              <div class="contenedor-imagen-noticia">
                                  <?php 
                                  if (file_exists('image/' . $noticia['url_imagen'])) { // Verifica si la imagen existe
                                      echo '<img src="image/' . $noticia['url_imagen'] . '" alt="Imagen de la Noticia" />';
                                  } else {
                                      echo "<p>Sin imagen</p>";
                                  }
                                  ?>
                              </div>
                              <div class="texto-noticia">
                                  <div class="barra-decorativa"></div>
                                  <p class="descripcion-noticia"><?php echo $noticia['descripcion']; ?></p>

                                  <a class="boton-mas-info" href="index.php?modulo=noticia-seleccionada&id=<?php echo $noticia['id']; ?>">Ver Más...</a>
                              </div>
                          </div>
                      </section>
                    <?php
                }
            }
        } else {
            echo "<p>No hay noticias disponibles.</p>";
        }
      ?>
    </div>
    <div class="paginacion"></div>
</section>
