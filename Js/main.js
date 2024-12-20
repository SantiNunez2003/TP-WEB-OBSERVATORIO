import { componenteEvento } from "./Controllers/evento-controller.js";
import { comoponeteGaleria } from "./Controllers/galeria-controller.js";
import { componenteNoticia } from "./Controllers/noticia-controller.js";
import { abrirModal, cerrarModal } from "./Utils/modal.js";
import { notificacionExito } from "./Utils/notificaciones.js";
import { pagina_activa } from "./Utils/pagina-activa.js";
import { paginacionEventos, paginacionGaleria, paginacionLista, paginacionNoticia } from "./Utils/paginacion.js";
import { registrarUsuario } from "./Utils/registrar-usuario.js";


/*
Para evitar problemas de ejecucion de las distintas funciones en paginas donde no se encuentran los componentes con lo que trabaja, 
podemos tomar parte de la URL y mediante ello llamar a la funcion que nececita esa pagina para que sea dinamica.
*/


try {
    pagina_activa();

    paginacionNoticia();
    paginacionGaleria();
    paginacionEventos();
    paginacionLista();

  $(document).ready(function() {

    // Verifica si la variable `registroExitoso` está definida y es true
    if (typeof registroExitoso !== 'undefined' && registroExitoso === true) {
     notificacionExito();
   }

    /*
        $("#formulario").on("submit", function(event) {
            event.preventDefault(); // Evita el envío predeterminado del formulario
        
            // Recoge los datos del formulario
            var formData = {
                nombre: $("#nombre").val(),
                apellido: $("#apellido").val(),
                email: $("#email").val(),
                telefono: $("#telefono").val(),
                evento_id: 1 // Cambia el ID del evento correspondiente
            };
        
            // Envía los datos mediante AJAX
            $.ajax({
                url: 'php/pages/evento-elegido.php', // Asegúrate de usar la ruta correcta
                type: 'POST',
                data: formData,
                dataType: 'json', // Espera una respuesta en JSON
                success: function(response) {
                    if (response.success) {
                         // Llama a la función para mostrar notificación de éxito
                        $("#formulario")[0].reset(); // Resetea el formulario
                    } else {
                        alert(response.message); // Muestra el mensaje de error si no fue exitoso
                    }
                },
                error: function() {
                    alert("Hubo un problema con la solicitud. Inténtalo de nuevo.");
                }
            });
        });
*/
        $(".btn-editar").on("click", function () {
            const dataId = $(this).data("id");
            const dataTabla = $(this).data("tabla");  // Obtener el valor de la tabla desde el botón
            
            $.ajax({
                url: `../components/modalEdit.php`, // URL donde se maneja el modal
                type: "GET",
                data: { id: dataId, tabla: dataTabla },  // Pasamos ambos parámetros: id y tabla
                success: function (data) {
                    // Inserta el contenido del modal y muestra el modal
                    $("#modal-wrapper").html(data);
                    $("#modal").show(); // Mostramos el modal
        
                    // Manejar el envío del formulario de edición
                    $("#edit-form").on("submit", function (e) {
                        e.preventDefault();  // Evitar que el formulario se envíe de forma tradicional
        
                        const formData = $(this).serialize();  // Obtener todos los datos del formulario
        
                        $.ajax({
                            url: "../utils/update.php", // Script PHP que manejará la actualización
                            type: "POST",
                            data: formData + "&id=" + dataId + "&tabla=" + dataTabla,  // Pasar datos del formulario más el ID y tabla
                            success: function (response) {
                                // Si la respuesta es "success", mostrar el toast de éxito
                                toastr.success('¡Su respuesta ha sido registrada con éxito!', 'Registro Completado', {
                                    closeButton: true,
                                    progressBar: true,
                                    timeOut: 2000,
                                    positionClass: "toast-top-right"
                                });
                
                                // Cerrar el modal después de una actualización exitosa
                                $("#modal").hide();
                                
                            },
                            error: function () {
                                toastr.error('Hubo un error al procesar la solicitud. Intenta nuevamente.', 'Error de Conexión', {
                                    closeButton: true,
                                    progressBar: true,
                                    timeOut: 4000,
                                    positionClass: "toast-top-right"
                                });
                            }
                        });
                    });
                    //boton que maneja el cierre
                    $(".btn-cerrar").on("click", function () {
                        $("#modal").hide();
                    });
                },
                error: function () {
                    alert("Hubo un error al cargar los detalles. Intenta nuevamente.");
                }
            });
        });

    
    
    $(".btn-detalle").on("click", function () {
        const dataId = $(this).data("id");
        const dataTabla = $(this).data("tabla");  // Obtener el valor de la tabla desde el botón
        
        $.ajax({
            url: `../components/modal.php`, // URL donde se maneja el modal
            type: "GET",
            data: { id: dataId, tabla: dataTabla },  // Pasamos ambos parámetros: id y tabla
            success: function (data) {
                // Inserta el contenido del modal y muestra el modal
                $("#modal-wrapper").html(data);
                $("#modal").show();
        
                // Asegúrate de que el botón de cerrar funcione después de la carga
                $(".btn-cerrar").on("click", function () {
                    $("#modal").hide();
                });
            },
            error: function () {
                alert("Hubo un error al cargar los detalles. Intenta nuevamente.");
            }
        });
    });
    
    
    // Maneja el cierre del modal con escape, si se desea
    $(document).keyup(function(e) {
        if (e.key === "Escape") { // Si presionas ESC
            $("#modal").hide();
        }
    });
        
    
  });

} catch (error) {
  console.log('Error', error)
}

