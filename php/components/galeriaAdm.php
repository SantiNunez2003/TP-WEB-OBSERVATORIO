<section class="container">
    <!-- Sección de galería -->
    <div class="lista">
        <h2>Galería de Imágenes</h2>
        <div>
            <table id="tabla-datos">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Descripción</th>
                        <th>Fecha de Creación</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="datos-lista">
                    <?php
                        $sql = "SELECT * FROM imagen_galeria ORDER BY fecha_creacion DESC";
                        $result = mysqli_query($con, $sql);   

                        if (mysqli_num_rows($result) > 0) {
                            while($imagen = mysqli_fetch_array($result)) {
                                echo '<tr>';
                                    echo '<td><strong>' . $imagen['nombre'] . '</strong></td>';
                                    echo '<td>' . $imagen['descripcion'] . '</td>';
                                    echo '<td>' . $imagen['fecha_creacion'] . '</td>';
                                    echo '<td><button class="btn-detalle" 
                                            data-id="' . $imagen['id'] . '" 
                                            data-tabla="imagen_galeria">Ver Detalles</button></td>';

                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="5">No hay imágenes disponibles.</td></tr>';
                        };
                    ?>
                </tbody>
            </table>
        </div>
        <div class="paginacion"></div>
    </div>
</section>

<div id="modal" style="display:none;">
    <div id="modal-wrapper"></div>
</div>