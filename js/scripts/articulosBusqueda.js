$(function () {

    /*SELECTORES*/
    $("#btnBuscar").click(function () {
        form = $("#frmBusqueda");
        $(".frm-actualizar").empty();
        $.ajax({
            type: "post",
            dataType: "json",
            url: "procesos.php",
            data: form.serialize() + "&accion=buscar-articulo",
            success: function (data) {
                if (data.valido) {
                    _html = "<form id='frmActualizar' method='post'>";
                    _html += "<input type='text' name='codigo' value='" + data.datos.codigo + "'><br>";
                    _html += "<input type='text' name='marca' value='" + data.datos.marca + "'><br>";
                    _html += "<input type='text' name='detalle' value='" + data.datos.detalle + "'><br>";
                    _html += "<input type='text' name='precio' value='" + data.datos.precio + "'><br>";
                    _html += "<input type='text' name='cantidad' value='" + data.datos.cantidad + "'><br>";
                    _html += "<input type='text' name='imagen' value='" + data.datos.imagen + "'><br>";
                    _html += "</form>";

                    $(".frm-actualizar").append(_html);


                } else {
                    $(".frm-actualizar").append("<p>Articulo no encontrado.</p>");
                }
            } //ciere success          
        });//cierre ajax

    }); //fin click
});//fin jquery


