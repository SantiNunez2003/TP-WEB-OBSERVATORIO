<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eventos | Observatorio de las Misiones</title>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Plugin JPages -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/luis-almeida/jPages@latest/css/jPages.css">
    <script src="https://cdn.jsdelivr.net/gh/luis-almeida/jPages@latest/js/jPages.min.js"></script>

    <!-- Archivo JS -->
    <script src="/Js/main.js" type="module"></script>

    <!-- Hoja de Estilos -->
    <link rel="stylesheet" href="../Styles/styles.css" />
  </head>
  <body>
    
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
