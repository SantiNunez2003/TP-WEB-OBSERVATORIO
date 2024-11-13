import { componenteEvento } from "./Controllers/evento-controller.js";
import { comoponeteGaleria } from "./Controllers/galeria-controller.js";
import { componenteNoticia } from "./Controllers/noticia-controller.js";
import { notificacionExito } from "./Utils/notificaciones.js";
import { pagina_activa } from "./Utils/pagina-activa.js";
import { paginacionEventos, paginacionGaleria, paginacionNoticia } from "./Utils/paginacion.js";
import { registrarUsuario } from "./Utils/registrar-usuario.js";


/*
Para evitar problemas de ejecucion de las distintas funciones en paginas donde no se encuentran los componentes con lo que trabaja, 
podemos tomar parte de la URL y mediante ello llamar a la funcion que nececita esa pagina para que sea dinamica.
*/

//Tomamos la URL la separamos con sus '/' y tomamos el ultimo elemento
const ubicacionAtual = window.location.pathname.split('/').pop();

try {
  pagina_activa();
  
  switch (ubicacionAtual) {
    case 'index.php':
        paginacionNoticia();
        paginacionGaleria();
        paginacionEventos();
      break;

    default:
      break;
  };

  $(document).ready(function() {
    $("#formulario").on("submit", function(event) {
        event.preventDefault(); 
        notificacionExito();
        
        $(this)[0].reset();
    });
});


} catch (error) {
  console.log('Error', error)
}

