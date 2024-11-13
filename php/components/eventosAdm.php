<section class="container">
    <!-- Sección de eventos -->
    <div class="lista">
        <h2>Lista de Eventos</h2>
        <div>
            <table id="tabla-datos">
                <thead>
                    <tr>
                        <th>Nombre del Evento</th>
                        <th>Fecha del Evento</th>
                        <th>Horario</th>
                        <th>Valor</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="datos-lista">
                    <?php
                        $sql = "SELECT * FROM evento ORDER BY fecha_evento DESC";
                        $result = mysqli_query($con, $sql);   

                        if (mysqli_num_rows($result) > 0) {
                            while($evento = mysqli_fetch_array($result)) {
                                echo '<tr>';
                                    echo '<td><strong>' . $evento['nombre'] . '</strong></td>';
                                    echo '<td>' . $evento['fecha_evento'] . '</td>';
                                    echo '<td>' . $evento['horario'] . '</td>';
                                    echo '<td>' . number_format($evento['valor'], 2) . ' USD</td>';
                                    echo '<td><button class="btn-detalle" 
                                            data-id="' . $evento['id'] . '" 
                                            data-tabla="evento">Ver Detalles</button></td>';

                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="6">No hay eventos disponibles.</td></tr>';
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
