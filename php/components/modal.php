<?php
    require '../utils/conexion.php';
    conectar();

    $id = intval($_GET['id']);
    $result = $con->query("SELECT * FROM noticia WHERE id = $id");
    $data = $result->fetch_assoc();
    
?>

<!-- El contenido será inyectado aquí -->
 <dialog id="alert-dialog">
  <button onClick="this.parentElement.close()">Aceptar</button>
</dialog>
<div class="modal-content" id="modal-content">
    <h3><?php echo $data['titulo']; ?></h3>
    <p><?php echo $data['descripcion']; ?></p>
    <?php if ($data['url_imagen']) { ?>
        <img src="../../image/<?php echo $data['url_imagen']; ?>" alt="Imagen">
    <?php } ?>
    <button class="btn-cerrar">Cerrar</button>
</div>