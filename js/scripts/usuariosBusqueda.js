$(function () {

    /*SELECTORES*/
    $("#btnBuscar").click(function () {
        form = $("#frmBusqueda");
        $(".frm-actualizar").empty();
        $.ajax({
            type: "post",
            dataType: "json",
            url: "procesos.php",
            data: form.serialize() + "&accion=buscar-usuario",
            success: function (data) {
                if (data.valido) {
                    selectAdmin = data.datos.rol == "admin" ? "selected" : "";
                    selectConsulta = data.datos.rol == "comun" ? "selected" : "";
                    _html = "<form id='frmActualizar' method='post'>";
                    _html += "<div class='row'>";
                    _html += "<input class='form-control col-2 mb-4 ml-2' type='text' name='cedula' value='" + data.datos.cedula + "'>";
                    _html += "<input class='form-control col-2 mb-4' type='text' name='nombre' value='" + data.datos.nombre + "'>";
                    _html += "<input class='form-control col-2 mb-4' type='text' name='apellidos' value='" + data.datos.apellidos + "'>";
                    _html += "</div>";
                    _html += "<div class='row'>";
                    _html += "<input class='form-control col-2 mb-4' type='text' name='telefono' value='" + data.datos.telefono + "'>";
                    _html += "<input class='form-control col-2 mb-4' type='text' name='email' value='" + data.datos.email + "'>";
                    _html += "<input class='form-control col-2 mb-4' type='text' name='nombre_de_usuario' value='" + data.datos.nombre_de_usuario + "'>";
                    _html += "</div>";
                    _html += "<div class='row'>"
                    _html += "<input class='form-control col-2 mb-4' type='text' name='contrasena' value='" + data.datos.contrasena + "'>";
                    _html += "<input class='form-control col-2 mb-4' type='text' name='rol' value='" + data.datos.rol + "'>";
                    _html += "</div>";
                    _html += "</form>";

                    $(".frm-actualizar").append(_html);


                } else {
                    $(".frm-actualizar").append("<p>Usuario no encontrado.</p>");
                }
            } //ciere success          
        });//cierre ajax

    }); //fin click
});//fin jquery


