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

        // Función que muestra los eventos de la página actual
        function renderEventos(page) {
            contenedorEvento.innerHTML = ""; // Limpia el contenedor

            // Calcula los índices de inicio y fin para la página actual
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            // Filtra los eventos que corresponden a la página actual
            const eventosPagina = data.evento.slice(start, end);

            // Agrega los eventos de la página actual al DOM
            eventosPagina.forEach(evento => {
                const tr = document.createElement("tr");
                tr.classList.add("linea-evento");

                tr.innerHTML = modelo_evento(evento);
                contenedorEvento.appendChild(tr);
            });

            // Actualiza los botones de paginación
            renderPaginacion(data.evento.length);
        }

        // Función que genera los botones de paginación
        function renderPaginacion(totalItems) {
            const contenedorPaginacion = document.getElementById("paginacion");
            contenedorPaginacion.innerHTML = ""; // Limpia la paginación

            const totalPages = Math.ceil(totalItems / itemsPerPage);

            // Botón "Anterior"
            const prevButton = document.createElement("button");
            prevButton.textContent = "Anterior";
            prevButton.disabled = currentPage === 1;
            prevButton.addEventListener("click", () => {
                if (currentPage > 1) {
                    currentPage--;
                    renderEventos(currentPage);
                }
            });
            contenedorPaginacion.appendChild(prevButton);

            // Botones de número de página
            for (let i = 1; i <= totalPages; i++) {
                const pageButton = document.createElement("button");
                pageButton.textContent = i;
                pageButton.classList.toggle("active", currentPage === i);
                pageButton.addEventListener("click", () => {
                    currentPage = i;
                    renderEventos(currentPage);
                });
                contenedorPaginacion.appendChild(pageButton);
            }

            // Botón "Siguiente"
            const nextButton = document.createElement("button");
            nextButton.textContent = "Siguiente";
            nextButton.disabled = currentPage === totalPages;
            nextButton.addEventListener("click", () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    renderEventos(currentPage);
                }
            });
            contenedorPaginacion.appendChild(nextButton);
        }

        // Renderiza la primera página de eventos
        renderEventos(currentPage);

    } catch (error) {
        console.log("Error:", error);
    }
}
