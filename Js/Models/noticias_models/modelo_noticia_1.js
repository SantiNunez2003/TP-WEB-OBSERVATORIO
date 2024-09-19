export function modelo_noticia_1(noticia){
    return `
              <header class="titulo-noticia">
                <img src="../Icons/Blanco/Observatory-Icon.svg" alt="Icono Observatorio" />
                <h2>${noticia.titulo}</h2>
              </header>
              <div class="contenido-noticia">
                <div class="texto-noticia">
                  <div class="barra-decorativa"></div>
                  <p class="descripcion-noticia">${noticia.descripcion}</p>
                  <a class="boton-mas-info" href="${noticia.enlace}">Ver Más...</a>
                </div>
                <div class="contenedor-imagen-noticia">
                  <img src="${noticia.imagen}" alt="Imagen de la Noticia" />
                </div>
              </div>
            `;
}