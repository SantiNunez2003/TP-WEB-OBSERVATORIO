export function modelo_evento(evento){
    return `
              <td class="imagen-evento">
                  <img src=${evento.img_evento} alt="Imagen del Evento" />
                </td>
                <td class="contenido-evento">
                  <h2>${evento.titulo_evento}</h2>
                  <p class="fecha">Fecha y Hora: ${evento.fecha_hora}</p>
                  <p>
                    ${evento.descripcion_evento}
                  </p>
                </td>
                <td class="boton-evento">
                  <a class="boton-mas-info" href="./Evento-elegido.html"
                    >GRATIS</a
                  >
                </td>
            `;
}