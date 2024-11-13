<?php
    // Asegúrate de que el ID esté presente en la URL
    if (isset($_GET['id'])) {

        $id_noticia = $_GET['id'];

        // Obtener los detalles de la noticia desde la base de datos (usa tu lógica aquí)
        $sql = "SELECT * FROM noticia WHERE id = $id_noticia";
        $result = mysqli_query($con, $sql);
        $noticia = mysqli_fetch_array($result);

        if (!$noticia) {
            echo "Noticia no encontrada.";
            exit;
        }
    } else {
        echo "ID de noticia no proporcionado.";
        exit;
    }
?>
<section class="evento-elegido">
    <article class="evento-datos">
        <h1><?php echo $noticia['titulo']; ?></h1>
        <img src="image/<?php echo $noticia['url_imagen']; ?>" alt="Imagen de la Noticia" />
        <p class="fecha">Fecha y Hora de Publicacion: <?php echo $noticia['fecha_publicacion']; ?></p>
        <p>Autor: <?php echo $noticia['autor']; ?></p>
        <p><?php echo nl2br($noticia['descripcion']); ?></p>
    </article>
</section>
       