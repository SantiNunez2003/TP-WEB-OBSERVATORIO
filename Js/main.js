import { componenteEvento } from "./Controllers/evento-controller.js";
import { comoponeteGaleria } from "./Controllers/galeria-controller.js";
import { componenteNoticia } from "./Controllers/noticia-controller.js";
import { pagina_activa } from "./Utils/pagina-activa.js";


pagina_activa();
componenteNoticia();
comoponeteGaleria();
componenteEvento();

