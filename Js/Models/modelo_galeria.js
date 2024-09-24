export function modelo_galeria(imagen){
    return `
              <img
                src=${imagen.img}
                alt="Descripción de la imagen"
              />
              <figcaption>${imagen.descripcion}</figcaption>
            `;
}
