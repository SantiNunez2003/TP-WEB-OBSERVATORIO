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
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Obtiene y limpia los datos del formulario
          $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
          $apellido = mysqli_real_escape_string($con, $_POST['apellido']);
          $email = mysqli_real_escape_string($con, $_POST['email']);
          $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
          $evento_id = mysqli_real_escape_string($con, $id_evento);; // Cambia este valor según el ID del evento correspondiente
  
          // Inserta los datos en la tabla `participante_evento`
          $sql = "INSERT INTO participante_evento (evento_id, nombre, apellido, telefono, gmail, asistencia)
                  VALUES ('$evento_id', '$nombre', '$apellido', '$telefono', '$email', 0)";
  
          if (mysqli_query($con, $sql)) {
           // En caso de exito llamar a la funcion en js notificacionExito
          echo "<script type='text/javascript'>
                  window.registroExitoso = true;
                 </script>";
          } else {
            echo "<p>Error: " . mysqli_error($con) . "</p>";
           
          }
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
    <article class="formulario-evento">
      <h2>Registrarse en el Evento</h2>
      <p>Registra tu asistencia</p>
      <!-- Formulario de Inscripción al Evento -->
      <form
        class="formulario"
        id="formulario"
        action="index.php?modulo=evento-elegido&id=<?php echo $id_evento; ?>"
        method="POST"
      >
        <!-- Nombre del Usuario -->
        <input
          placeholder="Nombre Completo"
          type="text"
          id="nombre"
          name="nombre"
          required
        />

        <!-- Apellido del Usuario -->
        <input
          placeholder="Apellido"
          type="text"
          id="apellido"
          name="apellido"
          required
        />

        <!-- Correo del Usuario -->
        <input
          placeholder="Correo Electrónico"
          type="email"
          id="email"
          name="email"
          required
        />

        <!-- Teléfono del Usuario -->
        <input
          placeholder="Número de Teléfono"
          type="tel"
          id="telefono"
          name="telefono"
          required
        />

        <!-- Botón de Envío -->
        <button class="boton-registrarse" type="submit">Registrarse</button>
      </form>
    </article>
</section>