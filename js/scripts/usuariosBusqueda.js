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
                    _html += "<input class='form-control' type='text' name='cedula' value='" + data.datos.cedula + "'><br>";
                    _html += "<input class='form-control' type='text' name='nombre' value='" + data.datos.nombre + "'><br>";
                    _html += "<input class='form-control' type='text' name='apellidos' value='" + data.datos.apellidos + "'><br>";
                    _html += "<input class='form-control' type='text' name='telefono' value='" + data.datos.telefono + "'><br>";
                    _html += "<input class='form-control' type='text' name='email' value='" + data.datos.email + "'><br>";
                    _html += "<input class='form-control' type='text' name='nombre_de_usuario' value='" + data.datos.nombre_de_usuario + "'><br>";
                    _html += "<input class='form-control' type='text' name='contrasena' value='" + data.datos.contrasena + "'><br>";
                    _html += "<input class='form-control' type='text' name='rol' value='" + data.datos.rol + "'><br>";
                    _html += "</form>";

                    $(".frm-actualizar").append(_html);


                } else {
                    $(".frm-actualizar").append("<p>Usuario no encontrado.</p>");
                }
            } //ciere success          
        });//cierre ajax

    }); //fin click
});//fin jquery


