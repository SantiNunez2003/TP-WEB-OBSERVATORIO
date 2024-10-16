export function modelo_galeria(imagen){
    return `
              <img
                class="lazy"
                src=${imagen.img}
                alt="Descripción de la imagen"
              />
              <figcaption>${imagen.descripcion}</figcaption>
            `;
}
