export function notificacionExito() {
    toastr.success('¡Su respuesta ha sido registrada con éxito!', 'Registro Completado', {
        closeButton: true,
        progressBar: true,
        timeOut: 2000,
        positionClass: "toast-top-right"
    });
}