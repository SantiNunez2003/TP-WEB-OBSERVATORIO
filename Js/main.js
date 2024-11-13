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

//Tomamos la URL la separamos con sus '/' y tomamos el ultimo elemento
const ubicacionAtual = window.location.pathname.split('/').pop();

try {
  pagina_activa();

  paginacionNoticia();
  paginacionGaleria();
  paginacionEventos();
  paginacionLista();


  $(document).ready(function() {
    $("#formulario").on("submit", function(event) {
        event.preventDefault(); 
        notificacionExito();
        
        $(this)[0].reset();
        
    });
    
    $(".btn-detalle").on("click", function () {
      const dataId = $(this).data("id");
      $.ajax({
          url: `../components/modal.php`,
          type: "GET",
          data: { id: dataId },
          success: function (data) {
              // Inserta el contenido del modal y muestra el modal
              $("#modal-wrapper").html(data);
              $("#modal").show();
  
              // Asegúrate de que el botón de cerrar funcione después de la carga
              $(".btn-cerrar").on("click", function () {
                  $("#modal").hide();
              });
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

