import { modelo_galeria } from "../Models/modelo_galeria.js";

export async function crearGaleria() {
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
  } catch (error) {
    console.log("Error", error);
  }
}
