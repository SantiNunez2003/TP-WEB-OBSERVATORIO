<?php
    require '../utils/conexion.php';
    conectar();

    // Recuperamos los parámetros 'id' y 'tabla' enviados por AJAX
    $id = intval($_GET['id']);
    $tabla = $_GET['tabla'];

    // Validar que la tabla sea válida
    if (!in_array($tabla, ['noticia', 'evento', 'imagen_galeria'])) {
        echo "Tabla no válida.";
        exit;
    }

    // Realizamos la consulta según la tabla seleccionada
    switch ($tabla) {
        case 'noticia':
            $result = $con->query("SELECT * FROM noticia WHERE id = $id");
            break;
        case 'evento':
            $result = $con->query("SELECT * FROM evento WHERE id = $id");
            break;
        case 'imagen_galeria':
            $result = $con->query("SELECT * FROM imagen_galeria WHERE id = $id");
            break;
    }

    // Verificar si se encontró el contenido
    if ($result && $data = $result->fetch_assoc()) {
        // Generar el contenido HTML del modal basado en la tabla
        
        echo '  <div class="modal-content">';
            if ($tabla == 'noticia') {
                echo '      <h3>' . $data['titulo'] . '</h3>';
                echo '      <p>' . $data['descripcion'] . '</p>';
                if ($data['url_imagen']) {
                    echo '      <img src="../../image/' . $data['url_imagen'] . '" alt="Imagen de noticia">';
                }
            } elseif ($tabla == 'evento') {
                echo '      <h3>' . $data['nombre'] . '</h3>';
                echo '      <p>' . $data['descripcion'] . '</p>';
                echo '      <p><strong>Fecha del evento:</strong> ' . date("d-m-Y", strtotime($data['fecha_evento'])) . '</p>';
                echo '      <p><strong>Horario:</strong> ' . $data['horario'] . '</p>';
                echo '      <p><strong>Valor:</strong> $' . number_format($data['valor'], 2) . '</p>';
                if ($data['url_imagen']) {
                    echo '      <img src="../../image/' . $data['url_imagen'] . '" alt="Imagen del evento">';
                }
            } elseif ($tabla == 'imagen_galeria') {
                echo '      <h3>' . $data['nombre'] . '</h3>';
                echo '      <p>' . $data['descripcion'] . '</p>';
                if ($data['url_imagen']) {
                    echo '      <img src="../../image/' . $data['url_imagen'] . '" alt="Imagen de galería">';
                }
            }
        echo '    <button onClick="this.parentElement.close()" class="btn-cerrar">Cerrar</button>';
        echo '  </div>';
      
        
    } else {
        echo "No se encontró el contenido.";
    }
?>
