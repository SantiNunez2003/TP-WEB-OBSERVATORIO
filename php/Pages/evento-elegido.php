<?php
    // Asegúrate de que el ID esté presente en la URL
    if (isset($_GET['id'])) {

        $id_evento = $_GET['id'];

        // Obtener los detalles de la evento desde la base de datos (usa tu lógica aquí)
        $sql = "SELECT * FROM evento WHERE id = $id_evento";
        $result = mysqli_query($con, $sql);
        $evento = mysqli_fetch_array($result);

        if (!$evento) {
            echo "evento no encontrada.";
            exit;
        }
    } else {
        echo "ID de evento no proporcionado.";
        exit;
    }
?>
<section class="evento-elegido">
    <article class="evento-datos">
        <h1><?php echo $evento['nombre']; ?></h1>
        <img src="image/<?php echo $evento['url_imagen']; ?>" alt="Imagen de la evento" />
        <p class="fecha">Fecha: <?php echo $evento['fecha_evento']; ?></p>
        <p class="fecha">Horario: <?php echo $evento['horario']; ?></p>
        <p><?php echo nl2br($evento['descripcion']); ?></p>
    </article>
    <?php include "php/components/formEvento.php" ?>
</section>