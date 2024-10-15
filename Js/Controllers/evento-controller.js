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
        function renderEventos() {
            contenedorEvento.innerHTML = ""; // Limpia el contenedor
        
            // Itera a través de todos los eventos
            data.evento.forEach(evento => {
                const tr = document.createElement("tr");
                tr.classList.add("linea-evento");
        
                // Inserta el contenido del evento en la fila
                tr.innerHTML = modelo_evento(evento);
                contenedorEvento.appendChild(tr);
            });
        }

        renderEventos();

        $(document).ready(function(){
            $("div.holder").jPages({
              containerID: "contenedor-evento", 
              perPage: 5,                         
              startPage: 1,                       
              startRange: 1,                      
              midRange: 5,
              next: "Siguiente",
              previous: "Anterior",
              //Funcion para tomar la altura de los elementos y ajustar el componente                
              callback: function(items) {
                // Ajustar la altura si lo deseas
                let elementosVisibles = items.visible.length;
                let alturaElemento = $("#contenedor-noticias .noticia:first").outerHeight(true); 
                let alturaTotal = elementosVisibles * alturaElemento;
                
                // Ajustar la altura del contenedor de noticias dinámicamente
                $("#contenedor-noticias").css("height", alturaTotal + "px");
              }
            });
          });

    } catch (error) {
        console.log("Error:", error);
    }
}
