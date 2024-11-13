<?php 
    // Verifica que el formulario haya sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtiene y limpia los datos del formulario
        $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
        $apellido = mysqli_real_escape_string($con, $_POST['apellido']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
        $evento_id = 1; // Cambia este valor según el ID del evento correspondiente

        // Inserta los datos en la tabla `participante_evento`
        $sql = "INSERT INTO participante_evento (evento_id, nombre, apellido, telefono, gmail, asistencia)
                VALUES ('$evento_id', '$nombre', '$apellido', '$telefono', '$email', 0)";

        if (mysqli_query($con, $sql)) {
            echo "<p>¡Registro exitoso! Te has inscrito en el evento.</p>";
        } else {
            echo "<p>Error: " . mysqli_error($con) . "</p>";
        }
}
?>

<article class="formulario-evento">
  <h2>Registrarse en el Evento</h2>
  <p>Registra tu asistencia</p>
  <!-- Formulario de Inscripción al Evento -->
  <form
    class="formulario"
    id="formulario"
    action="formEvento.php"
    method="post"
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