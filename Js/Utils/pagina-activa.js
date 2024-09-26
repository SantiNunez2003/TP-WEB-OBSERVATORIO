export function pagina_activa(){
  try {
    const listaIndex = document.getElementsByClassName("lista-index");

    const ubicacionActual = window.location.pathname;

    console.log(window.location.pathname);

    console.log(elementoNav.length)
   

    switch (ubicacionActual) {
      case '/index.html':
        listaIndex.classList.add("active")

        break;

      default:
        break;
    };

  } catch (error) {
    console.log('Error', error)
  }
}
