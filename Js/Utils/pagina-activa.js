export function pagina_activa(){
  try {

    const ubicacionAtual = window.location.pathname.split('/').pop();

    const listaIndex = document.getElementById("lista-index");
    const listaNoticia = document.getElementById("lista-noticia");
    const listaGaleria = document.getElementById("lista-galeria");
    const listaEvento = document.getElementById("lista-evento");

    const estilo_activo = "active";

    console.log(ubicacionAtual)
  
      
    switch (ubicacionAtual) {
      case 'index.html':
          listaIndex.classList.add(estilo_activo);
        break;
      case 'Noticias.html':
          listaNoticia.classList.add(estilo_activo);
        break;
      case 'Galeria.html':
          listaGaleria.classList.add(estilo_activo);
        break;
      case 'Eventos.html':
          listaEvento.classList.add(estilo_activo);
        break;
      default:
        break;
    };

  } catch (error) {
    console.log('Error', error)
  }
}
