export function pagina_activa(){

  /*Esta funcion se encarga de tomar el URL y separarlo por sus / donde se toma su ultimo elemento. 
  Por medio de un switch se compara ese elemento y se agrega a la clase activo al componente con el id respectivo.

  Basicamente que segun la pagina en la que nos encontremos, se resalte el li de nuestro nav para saber donde estamos
  */

  try {

    //Tomamos la URL la separamos con sus '/' y tomamos el ultimo elemento
    const ubicacionAtual = window.location.pathname.split('/').pop();

    //Traemos los respectivos <li> del nav
    const listaIndex = document.getElementById("lista-index");
    const listaNoticia = document.getElementById("lista-noticia");
    const listaGaleria = document.getElementById("lista-galeria");
    const listaEvento = document.getElementById("lista-evento");

    //variable para el estilo activo
    const estilo_activo = "active";

    //Comparamos la ubicacion actual y segun sea su similitud se le asigna la clase active al <li>
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
