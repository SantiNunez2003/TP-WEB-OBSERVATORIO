import { modelo_evento } from "../Models/modelo_evento.js";


export async function crearEvento(){
    try {
        const res = await fetch("../Js/Data/eventos.json");
        const data = await res.json();

        const contenedorEvento = document.getElementById("contenedor-evento");

        data.evento.forEach(evento => {
            const tr = document.createElement("tr");
            tr.classList.add("linea-evento")

            tr.innerHTML = modelo_evento(evento);

            contenedorEvento.appendChild(tr)
        });

    } catch (error) {
        console.log("Error:", error)
    }

}