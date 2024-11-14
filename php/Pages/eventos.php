 <h1>Próximos Eventos</h1>

    <!-- Presentación de Eventos -->
    <section class="eventos">
      <!-- Tabla Dinámica de Eventos -->
      <table>
        <thead class="encabezado-tabla">
          <tr>
            <th colspan="3">Eventos</th>
          </tr>
        </thead>
        <tbody id="contenedor-evento">
          <?php 

            // Consulta para obtener los eventos
            $sql = "SELECT * FROM evento ORDER BY fecha_evento DESC";
            $result = mysqli_query($con, $sql);

            // Verifica si hay resultados
            if (mysqli_num_rows($result) > 0) {
                // Recorremos los eventos
                while ($evento = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                      <td class="imagen-evento">
                        <?php 
                        // Verifica si la imagen existe antes de mostrarla
                        if (file_exists('image/' . $evento['url_imagen'])) {
                            echo '<img src="image/' . $evento['url_imagen'] . '" alt="Imagen del Evento" />';
                        } else {
                            echo "<p>Imagen no disponible</p>";
                        }
                        ?>
                      </td>
                      <td class="contenido-evento">
                        <h2><?php echo $evento['nombre']; ?></h2>
                        <div>
                          <p class="fecha">Fecha : <?php echo $evento['fecha_evento']; ?></p>
                          <p class="fecha">Horario: <?php echo $evento['horario']; ?></p>
                        </div>  
                        <p><?php echo $evento['descripcion']; ?></p>
                      </td>
                      <td class="boton-evento">
                        <a class="boton-mas-info" href="index.php?modulo=evento-elegido&id=<?php echo $evento['id']; ?>">GRATIS</a>
                      </td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='3'>No hay eventos disponibles.</td></tr>";
            }

            // Cierra la conexión
            mysqli_close($con);
          ?>
        </tbody>
      </table>
      
      <div class="paginacion"></div>
    </section>
  


  </body>
</html>
