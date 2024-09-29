import { componenteEvento } from "./Controllers/evento-controller.js";
import { comoponeteGaleria } from "./Controllers/galeria-controller.js";
import { componenteNoticia } from "./Controllers/noticia-controller.js";
import { pagina_activa } from "./Utils/pagina-activa.js";
import { registrarUsuario } from "./Utils/registrar-usuario.js";

/*
Para evitar problemas de ejecucion de las distintas funciones en paginas donde no se encuentran los componentes con lo que trabaja, 
podemos tomar parte de la URL y mediante ello llamar a la funcion que nececita esa pagina para que sea dinamica.
*/
try {
  pagina_activa();
  //Tomamos la URL la separamos con sus '/' y tomamos el ultimo elemento
  const ubicacionAtual = window.location.pathname.split('/').pop();

  //Comparamos la ubicacion actual y segun sea su similitud se ejecuta la funcion
  switch (ubicacionAtual) {
    case 'Noticias.html':
        componenteNoticia();
      break;
    case 'Galeria.html':
        comoponeteGaleria();
      break;
    case 'Eventos.html': 
        componenteEvento();
      break;
    case 'Evento-elegido.html': 
        registrarUsuario();  
      break;

    default:
      break;
  };

} catch (error) {
  console.log('Error', error)
}

