/*FUNCION PARA CREAR COMPONENTES*/

function crearNoticia(titulo_noticia, des_noticia, enlace, img_noticia) {
  /*Creamos el tag article y le asignamos la clase 'noticia'*/
  const article = document.createElement("article");
  article.classList.add("noticia");

  /*Armamos la estructura HTML del componente*/
  article.innerHTML = `
    <header class="titulo-noticia">
      <img src="../Icons/Blanco/Observatory-Icon.svg" alt="Icono Observatorio" />
      <h2>${titulo_noticia}</h2>
    </header>

    <div class="contenido-noticia">
      <div class="texto-noticia">
        <div class="barra-decorativa"></div>
        <p class="descripcion-noticia">${des_noticia}</p>
        <a class="boton-mas-info" href="${enlace}">Ver Más...</a>
      </div>

      <div class="contenedor-imagen-noticia">
        <img src="${img_noticia}" alt="Imagen de la Noticia" />
      </div>
    </div>
  `;

  /*Devolvemos el componente*/
  return article;
}

/*Llamamos a la FUNCION para crear componentes: */
const contenedorNoticias = document.getElementById("contenedor-noticias");

/*Damos los datos a la funcion*/


//Llamamos al componente -> insertamos un nuevo hijo en el componente -> llamamos a la funcion que crea al componente
contenedorNoticias.appendChild(crearNoticia(
    "Titulo de COMPONENTE",
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim cumque iure quasi perferendis alias ducimus tempora? Odio, reprehenderit corrupti accusantium eos dolorem optio voluptas ut, qui, fugit laudantium consectetur quidem?",
    "./Noticia-seleccionada.html",
    "../Image/prueba-imagen.jfif"
  )
);
