$(function () {

    /*SELECTORES*/
    $("#btnBuscar").click(function () {
        form = $("#frmBusqueda");
        $(".frm-actualizar").empty();
        $.ajax({
            type: "post",
            dataType: "json",
            url: "procesos.php",
            data: form.serialize() + "&accion=buscar-compraFactura",
            success: function (data) {
                if (data.valido) {
                    _html = "<form id='frmActualizar' method='post'>";
                    _html += "<input type='text' name='id' value='" + data.datos.id + "'><br>";
                    _html += "<input type='text' name='id_usuario' value='" + data.datos.id_usuario + "'><br>";
                    _html += "<input type='text' name='id_articulo' value='" + data.datos.id_articulo + "'><br>";
                    _html += "<input type='text' name='numero_factura' value='" + data.datos.numero_factura + "'><br>";
                    _html += "<input type='text' name='fecha_compra' value='" + data.datos.fecha_compra + "'><br>";
                    _html += "</form>";
                    $(".frm-actualizar").append(_html);


                } else {
                    $(".frm-actualizar").append("<p>Compra no encontrada.</p>");
                }
            } //ciere success          
        });//cierre ajax

    }); //fin click
});//fin jquery




