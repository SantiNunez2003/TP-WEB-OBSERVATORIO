<?php
    require '../utils/conexion.php';
    conectar();

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
            echo '      <h3>Editar Noticia</h3>';
            echo '      <form class="formulario-evento " id="edit-form" method="POST">';
            echo '          <label for="titulo">Título:</label>';
            echo '          <input type="text" id="titulo" name="titulo" value="' . htmlspecialchars($data['titulo']) . '" required>';
            echo '          <label for="descripcion">Descripción:</label>';
            echo '          <textarea id="descripcion" name="descripcion" required>' . htmlspecialchars($data['descripcion']) . '</textarea>';
            echo '          <label for="url_imagen">Imagen (URL):</label>';
            echo '          <input type="text" id="url_imagen" name="url_imagen" value="' . htmlspecialchars($data['url_imagen']) . '">';
        } elseif ($tabla == 'evento') {
            echo '      <h3>Editar Evento</h3>';
            echo '      <form id="edit-form" method="POST">';
            echo '          <label for="nombre">Nombre:</label>';
            echo '          <input type="text" id="nombre" name="nombre" value="' . htmlspecialchars($data['nombre']) . '" required>';
            echo '          <label for="descripcion">Descripción:</label>';
            echo '          <textarea id="descripcion" name="descripcion" required>' . htmlspecialchars($data['descripcion']) . '</textarea>';
            echo '          <label for="fecha_evento">Fecha del evento:</label>';
            echo '          <input type="date" id="fecha_evento" name="fecha_evento" value="' . htmlspecialchars($data['fecha_evento']) . '" required>';
            echo '          <label for="horario">Horario:</label>';
            echo '          <input type="time" id="horario" name="horario" value="' . htmlspecialchars($data['horario']) . '" required>';
            echo '          <label for="valor">Valor:</label>';
            echo '          <input type="number" id="valor" name="valor" step="0.01" value="' . number_format($data['valor'], 2) . '" required>';
            echo '          <label for="url_imagen">Imagen (URL):</label>';
            echo '          <input type="text" id="url_imagen" name="url_imagen" value="' . htmlspecialchars($data['url_imagen']) . '">';
        } elseif ($tabla == 'imagen_galeria') {
            echo '      <h3>Editar Imagen de Galería</h3>';
            echo '      <form id="edit-form" method="POST">';
            echo '          <label for="nombre">Nombre:</label>';
            echo '          <input type="text" id="nombre" name="nombre" value="' . htmlspecialchars($data['nombre']) . '" required>';
            echo '          <label for="descripcion">Descripción:</label>';
            echo '          <textarea id="descripcion" name="descripcion" required>' . htmlspecialchars($data['descripcion']) . '</textarea>';
            echo '          <label for="url_imagen">Imagen (URL):</label>';
            echo '          <input type="text" id="url_imagen" name="url_imagen" value="' . htmlspecialchars($data['url_imagen']) . '">';
        }

        echo '          <button class="boton-registrarse" type="submit">Guardar cambios</button>';
        echo '         <button class="btn-cerrar">Cerrar</button>';
        echo '      </form>';
        echo '  </div>';
    } else {
        echo "No se encontró el contenido.";
    }
?>
