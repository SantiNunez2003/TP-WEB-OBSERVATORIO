<!-- Presentación de Imágenes -->
<section class="imagenes">
  <div class="contenedor-imagenes">
      <?php
      // Realizamos la consulta para obtener las imágenes
      $sql = "SELECT * FROM imagen_galeria ORDER BY id DESC";
      $result = mysqli_query($con, $sql);
      
      // Verifica si hay resultados
      if (mysqli_num_rows($result) > 0) {
          // Recorremos las imágenes
          while ($imagen = mysqli_fetch_array($result)) {
              ?>
              <section class="imagen">
                  <div class="contenedor-imagen">
                      <?php
                      // Verifica si la imagen existe y la muestra
                      if (file_exists('image/' . $imagen['url_imagen'])) {
                          echo '<img class="lazy" src="image/' . $imagen['url_imagen'] . '" alt="Descripción de la imagen" />';
                      } else {
                          echo "<p>Sin imagen</p>";
                      }
                      ?>
                  </div>
                  <figcaption>
                      <p><?php echo htmlspecialchars($imagen['descripcion']); ?></p>
                  </figcaption>
              </section>
              <?php
          }
      } else {
          echo "<p>No hay imágenes disponibles.</p>";
      }
      ?>
  </div>

  <!-- Paginación para las imágenes -->
  <div class="paginacion"></div>
</section>