<section class="container">
    <!-- Sección de lista -->
    <div class="lista">
        <h2>Lista de Noticias</h2>
        <div class="filtro">
            <label for="filtro">Filtrar por Estatus:</label>
            <select id="filtro">
                <option value="1">Activas</option>
                <option value="0">Inactivas</option>
            </select>
        </div>
        <div>
            <table id="tabla-datos">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Fecha de Publicación</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="datos-lista">
                    <?php
                        $sql = "SELECT * FROM noticia ORDER BY fecha_publicacion DESC";
                        $result = mysqli_query($con, $sql);   

                        if (mysqli_num_rows($result) > 0) {
                            while($noticia = mysqli_fetch_array($result)) {
                                echo '<tr>';
                                    echo '<td><strong>' . $noticia['titulo'] . '</strong></td>';
                                    echo '<td>' . $noticia['autor'] . '</td>';
                                    echo '<td>' . $noticia['fecha_publicacion'] . '</td>';
                                    echo '<td><button class="btn-detalle" 
                                            data-id="' . $noticia['id'] . '" 
                                            data-tabla="noticia">Ver Detalles</button></td>';
                                    echo '<td><button class="btn-editar" 
                                    data-id="' . $noticia['id'] . '" 
                                    data-tabla="noticia">Editar</button></td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="4">No hay noticias disponibles.</td></tr>';
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