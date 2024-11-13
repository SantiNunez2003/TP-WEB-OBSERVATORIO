
export function abrirModal(){
    const dataId = $(this).data("id");
        $.ajax({
            url: "modal_detalle.php",
            type: "GET",
            data: { id: dataId },
            success: function (data) {
                $("#modal-content").html(data);
                $("#modal").show();
            }
    });  
}

export function cerrarModal(){
    $("#modal").hide();
}
