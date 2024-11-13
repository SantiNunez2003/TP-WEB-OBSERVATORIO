import { modelo_evento } from "../Models/modelo-evento.js";


// Variables globales para paginación
let currentPage = 1; // Página inicial
const itemsPerPage = 5; // Cantidad de eventos por página

// Función para generar los eventos con paginación
export async function componenteEvento() {
    try {
        const res = await fetch("../Js/Data/eventos.json");
        const data = await res.json();

        // Contenedor donde se mostrarán los eventos
        const contenedorEvento = document.getElementById("contenedor-evento");

        contenedorEvento.innerHTML = ""; // Limpia el contenedor
        
        // Itera a través de todos los eventos
        data.evento.forEach(evento => {
            const tr = document.createElement("tr");
            tr.classList.add("linea-evento");
    
            // Inserta el contenido del evento en la fila
            tr.innerHTML = modelo_evento(evento);
            contenedorEvento.appendChild(tr);
        })

    } catch (error) {
        console.log("Error:", error);
    }
}
