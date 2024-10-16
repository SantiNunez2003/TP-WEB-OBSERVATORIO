import { modelo_noticia_1 } from "../Models/noticias_models/modelo-noticia_1.js";
import { modelo_noticia_2 } from "../Models/noticias_models/modelo-noticia_2.js";

/*FUNCION PARA CREAR COMPONENTES*/
export async function componenteNoticia() {
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

    $(document).ready(function(){
      $("div.paginacion").jPages({
        containerID: "contenedor-noticias", 
        perPage: 4,                         
        startPage: 1,                       
        startRange: 1,                      
        midRange: 5,
        next: "Siguiente",
        previous: "Anterior",
        //Funcion para tomar la altura de los elementos y ajustar el componente                
        callback: function(items) {
          let elementosVisibles = items.visible.length;
          let alturaElemento = $("#contenedor-noticias .noticia:first").outerHeight(true); 
          let alturaTotal = elementosVisibles * alturaElemento;
          
          // Ajustamos la altura del contenedor de noticias dinámicamente
          $("#contenedor-noticias").css("height", alturaTotal + "px");
        }
      });
    });

  } catch (error) {
    console.error("Error:", error);
  }
}
