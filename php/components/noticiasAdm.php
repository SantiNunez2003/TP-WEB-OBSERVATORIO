<?php 


?>
<form action="procesar_noticia.php" method="POST" enctype="multipart/form-data">
    <!-- Campo para el título de la noticia -->
    <label for="titulo">Título de la Noticia:</label>
    <input type="text" id="titulo" name="titulo" required><br><br>
    
    <!-- Campo para la descripción de la noticia -->
    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea><br><br>
    
    <!-- Campo para subir la primera imagen (imagen principal de la noticia) -->
    <label for="imagen1">Imagen de la Noticia:</label>
    <input type="file" id="imagen1" name="imagen1" accept="image/*" required><br><br>

    <!-- Campo para subir la segunda imagen -->
    <label for="imagen2">Imagen Adicional:</label>
    <input type="file" id="imagen2" name="imagen2" accept="image/*"><br><br>
    
    <!-- Botón de envío -->
    <button type="submit">Guardar Noticia</button>
</form>