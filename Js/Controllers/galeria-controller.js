import { modelo_galeria } from "../Models/modelo-galeria.js";

export async function comoponeteGaleria() {
  try {
    // Hacemos la peticion de datos por medio de promesas asinconicas para no interrumppir la ejecucion del js
    const res = await fetch("../Js/Data/galeria.json");
    const data = await res.json();

    const constenedorGaleria = document.getElementById("contenedor-imagenes");

    data.imagen.forEach((imagen) => {
      const figure = document.createElement("figure");
      figure.classList.add("figure")

      figure.innerHTML = modelo_galeria(imagen);

      constenedorGaleria.appendChild(figure);
    });

    $(document).ready(function(){
      $("div.paginacion").jPages({
        containerID: "contenedor-imagenes",  // "contenedor-imagenes"
        perPage: 9,                         
        startPage: 1,                       
        startRange: 1,                      
        midRange: 5,
        next: "Siguiente",
        previous: "Anterior",
        //Funcion para tomar la altura de los elementos y ajustar el componente                
        callback: function(items) {
          let elementosVisibles = items.visible.length;
          console.log(elementosVisibles)
          let alturaElemento = $("#contenedor-noticias .noticia:first").outerHeight(true); 
          let alturaTotal = elementosVisibles * alturaElemento;
          
          // Ajustamos la altura del contenedor de noticias dinámicamente
          $("#contenedor-noticias").css("height", alturaTotal + "px");
        }
      });
    });
  } catch (error) {
    console.log("Error", error);
  }
}
