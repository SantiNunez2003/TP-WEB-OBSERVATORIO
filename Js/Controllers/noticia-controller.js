import { modelo_noticia_1 } from "../Models/noticias_models/modelo_noticia_1.js";
import { modelo_noticia_2 } from "../Models/noticias_models/modelo_noticia_2.js";

/*FUNCION PARA CREAR COMPONENTES*/
export async function crearNoticia() {
  try {

    // Hacemos la peticion de datos por medio de promesas asinconicas para no interrumppir la ejecucion del js
    const res = await fetch("../Js/Data/noticias.json");
    const data = await res.json();

    // Asignamos una variable con la posicion que va a ocupar el elemento
    const contenedorNoticias = document.getElementById("contenedor-noticias");

    data.noticia.forEach((noticia, index) => {

      // Asignamos a una variable con la estructura que va a seguir y su clase
      const article = document.createElement("article");
      article.classList.add("noticia");
      
      // Identificamos la posicion de los datos, si es par utilizara un modelo y sino otro
      if (index % 2 === 0) {
        // Noticias en posiciones pares son modelo 1
        article.innerHTML = modelo_noticia_1(noticia);
      } else {
        // Noticias en posiciones impares son modelo 2
        article.innerHTML = modelo_noticia_2(noticia);
      }
      contenedorNoticias.appendChild(article);
    });
  } catch (error) {
    console.error("Error:", error);
  }
}
