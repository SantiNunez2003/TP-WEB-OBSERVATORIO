export function paginacionNoticia(){  
    $(document).ready(function(){
        $("div.paginacion").jPages({
            containerID: "contenedor-noticias", 
            perPage: 5,                         
            startPage: 1,                       
            startRange: 1,                      
            midRange: 5,
            next: "Siguiente",
            previous: "Anterior"
        });
    });
};

export function paginacionLista(){  
    $(document).ready(function(){
        $("div.paginacion").jPages({
            containerID: "datos-tabla-noticias", 
            perPage: 15,                         
            startPage: 1,                       
            startRange: 1,                      
            midRange: 5,
            next: "Siguiente",
            previous: "Anterior",
            callback: function() {
                // Restablecer el display del tbody después de la paginación
                $("#datos-tabla-noticias tr").css("display", "none");
            }
        }); 
    });
};

export function paginacionGaleria(){
    $(document).ready(function(){
        $("div.paginacion").jPages({
            containerID: "contenedor-imagenes",  
            perPage: 9,                         
            startPage: 1,                       
            startRange: 1,                      
            midRange: 5,
            next: "Siguiente",
            previous: "Anterior"
        });
    });
};

export function paginacionEventos(){
    $(document).ready(function(){
        $("div.paginacion").jPages({
            containerID: "contenedor-evento", 
            perPage: 5,                         
            startPage: 1,                       
            startRange: 1,                      
            midRange: 5,
            next: "Siguiente",
            previous: "Anterior",
        });
    });
};