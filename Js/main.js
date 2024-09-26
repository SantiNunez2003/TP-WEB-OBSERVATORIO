import { componenteEvento } from "./Controllers/evento-controller.js";
import { comoponeteGaleria } from "./Controllers/galeria-controller.js";
import { componenteNoticia } from "./Controllers/noticia-controller.js";
import { pagina_activa } from "./Utils/pagina-activa.js";
import { registrarUsuario } from "./Utils/registrar-usuario.js";


pagina_activa();
componenteNoticia();
comoponeteGaleria();
componenteEvento();

/* Tomamos el formulario por su id y escuchamos si ocurre el evento sumbit, si es asi se crea una 
funcion que toma event como parametro para no recargar la pagina y luego llama a la uncion registrar usuario
*/
document.getElementById('formulario').addEventListener('submit', function(event) {
    event.preventDefault();  
    registrarUsuario();  
  });