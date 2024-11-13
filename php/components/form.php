<?php
    // Procesar el formulario dependiendo de la acción seleccionada
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Verifica qué formulario se ha e  nviado
        if (isset($_POST['accion'])) {

            // Formulario de noticia
            if ($_POST['accion'] == 'guardar_noticia') {
                $titulo = $_POST['titulo'];
                $descripcion = $_POST['descripcion'];
                $autor = $_POST['autor'];
                $url_imagen = $_POST['url_imagen'];
                $fecha_publicacion = $_POST['fecha_publicacion'];

                $sql = "INSERT INTO noticia (titulo, descripcion, autor, url_imagen, fecha_publicacion)
                        VALUES ('$titulo', '$descripcion', '$autor', '$url_imagen', '$fecha_publicacion')";
                
                if (mysqli_query($con, $sql)) {
            
                } else {
                    echo "Error: " . mysqli_error($con);
                }
            }

            // Formulario de evento
            if ($_POST['accion'] == 'guardar_evento') {
                $nombre = $_POST['nombre'];
                $descripcion = $_POST['descripcion'];
                $horario = $_POST['horario'];
                $fecha_evento = $_POST['fecha_evento'];
                $valor = $_POST['valor'];
                $url_imagen = $_POST['url_imagen'];

                $sql = "INSERT INTO evento (nombre, descripcion, horario, fecha_evento, valor, url_imagen)
                        VALUES ('$nombre', '$descripcion', '$horario', '$fecha_evento', '$valor', '$url_imagen')";
                
                if (mysqli_query($con, $sql)) {
                    echo "Evento guardado con éxito.";
                } else {
                    echo "Error: " . mysqli_error($con);
                }
            }

            // Formulario de galería
            if ($_POST['accion'] == 'guardar_galeria') {
                $nombre = $_POST['nombre'];
                $descripcion = $_POST['descripcion'];
                $url_imagen = $_POST['url_imagen'];

                $sql = "INSERT INTO imagen_galeria (nombre, descripcion, url_imagen)
                        VALUES ('$nombre', '$descripcion', '$url_imagen')";
                
                if (mysqli_query($con, $sql)) {
                    echo "Imagen guardada con éxito en la galería.";
                } else {
                    echo "Error: " . mysqli_error($con);
                }
            }
        }
    }
?>

<?php
// Verifica el módulo actual
$modulo = isset($_GET['modulo']) ? $_GET['modulo'] : '';  // Por ejemplo, noticiaAdm, eventoAdm, galeriaAdm

// Llama a la función para mostrar el formulario correspondiente al módulo
function mostrarFormulario($modulo) {
    if ($modulo == 'noticiasAdm') {
        echo '
            <h2 class="titulo-formulario">Administrar Noticia</h2>
            <form method="POST" action="dashboard.php?modulo=noticiasAdm" class="formulario-evento">
                <label for="titulo" class="label-formulario">Título:</label>
                <input type="text" id="titulo" name="titulo" class="input-formulario" required>
                
                <label for="descripcion" class="label-formulario">Descripción:</label>
                <textarea id="descripcion" name="descripcion" class="textarea-formulario" required></textarea>
                
                <label for="autor" class="label-formulario">Autor:</label>
                <input type="text" id="autor" name="autor" class="input-formulario" value="Observatorio de las Misiones" required>
                
                <label for="url_imagen" class="label-formulario">URL Imagen:</label>
                <input type="text" id="url_imagen" name="url_imagen" class="input-formulario">
                
                <label for="fecha_publicacion" class="label-formulario">Fecha de Publicación:</label>
                <input type="datetime-local" id="fecha_publicacion" name="fecha_publicacion" class="input-formulario" required>
                
                <button type="submit" name="accion" value="guardar_noticia" class="boton-registrarse">Guardar Noticia</button>
            </form>
        ';
    } elseif ($modulo == 'eventosAdm') {
        echo '
            <h2 class="titulo-formulario">Administrar Evento</h2>
            <form method="POST" action="form.php" class="formulario-evento">
                <label for="nombre" class="label-formulario">Nombre del Evento:</label>
                <input type="text" id="nombre" name="nombre" class="input-formulario" required>
                
                <label for="descripcion" class="label-formulario">Descripción:</label>
                <textarea id="descripcion" name="descripcion" class="textarea-formulario" required></textarea>
                
                <label for="horario" class="label-formulario">Horario:</label>
                <input type="time" id="horario" name="horario" class="input-formulario" required>
                
                <label for="fecha_evento" class="label-formulario">Fecha del Evento:</label>
                <input type="date" id="fecha_evento" name="fecha_evento" class="input-formulario" required>
                
                <label for="valor" class="label-formulario">Valor:</label>
                <input type="number" id="valor" name="valor" class="input-formulario" step="0.01" required>
                
                <label for="url_imagen" class="label-formulario">URL Imagen:</label>
                <input type="text" id="url_imagen" name="url_imagen" class="input-formulario">
                
                <button type="submit" name="accion" value="guardar_evento" class="boton-registrarse">Guardar Evento</button>
            </form>
        ';
    } elseif ($modulo == 'galeriaAdm') {
        echo '
            <h2 class="titulo-formulario">Administrar Galería</h2>
            <form method="POST" action="form.php" class="formulario-evento">
                <label for="nombre" class="label-formulario">Nombre de la Imagen:</label>
                <input type="text" id="nombre" name="nombre" class="input-formulario" required>
                
                <label for="descripcion" class="label-formulario">Descripción:</label>
                <textarea id="descripcion" name="descripcion" class="textarea-formulario"></textarea>
                
                <label for="url_imagen" class="label-formulario">URL Imagen:</label>
                <input type="text" id="url_imagen" name="url_imagen" class="input-formulario" required>
                
                <button type="submit" name="accion" value="guardar_galeria" class="boton-registrarse">Guardar Imagen</button>
            </form>
        ';
    } else {
        echo '<p>El módulo no es válido o no se ha seleccionado.</p>';
    }
}

// Llamamos a la función para cargar el formulario correspondiente
mostrarFormulario($modulo);
?>

