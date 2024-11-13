<?php
    require '../utils/conexion.php';
    conectar();

    // Recuperar datos del formulario
    $id = intval($_POST['id']);
    $tabla = $_POST['tabla'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $url_imagen = $_POST['url_imagen'];
    $nombre = $_POST['nombre'] ?? null;
    $fecha_evento = $_POST['fecha_evento'] ?? null;
    $horario = $_POST['horario'] ?? null;
    $valor = $_POST['valor'] ?? null;

    // Validar que la tabla es correcta
    if (!in_array($tabla, ['noticia', 'evento', 'imagen_galeria'])) {
        echo "Tabla no válida.";
        exit;
    }

    // Realizar la actualización según la tabla seleccionada
    switch ($tabla) {
        case 'noticia':
            $query = "UPDATE noticia SET titulo = ?, descripcion = ?, url_imagen = ? WHERE id = ?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("sssi", $titulo, $descripcion, $url_imagen, $id);
            break;

        case 'evento':
            $query = "UPDATE evento SET nombre = ?, descripcion = ?, fecha_evento = ?, horario = ?, valor = ?, url_imagen = ? WHERE id = ?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("ssssdis", $nombre, $descripcion, $fecha_evento, $horario, $valor, $url_imagen, $id);
            break;

        case 'imagen_galeria':
            $query = "UPDATE imagen_galeria SET nombre = ?, descripcion = ?, url_imagen = ? WHERE id = ?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("sssi", $nombre, $descripcion, $url_imagen, $id);
            break;
    }

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Datos actualizados correctamente.";
    } else {
        echo "Error al actualizar los datos.";
    }

    $stmt->close();
?>
