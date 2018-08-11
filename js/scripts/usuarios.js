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
                    _html += "<select class='form-control' name='rol'>";
                    _html += "<option value='0'>Seleccione</option>";
                    _html += "<option value='admin'" + selectAdmin + ">Admin </option>";
                    _html += "<option value='comun' " + selectConsulta + ">Consulta </option>";
                    _html += "</select><br>";
                    _html += "<input type='button' id='btnActualizar' name='btnActualizar' value='Actualizar'> ";
                    _html += "</form>";

                    $(".frm-actualizar").append(_html);


                } else {
                    $(".frm-actualizar").append("<p>Usuario no encontrado.</p>");
                }
            } //ciere success          
        });//cierre ajax

    }); //fin click

    $(document).on("click", "#btnActualizar", function(){    
        form = $("#frmActualizar");      
        $.ajax({
            type: "post",
            dataType: "json",
            url: "procesos.php",
            data: form.serialize() + "&accion=actualizar-usuario",
            success: function (data) {
             if(data.valido){
                 alert("Usuario actualizado correctamente.");
                 
             }else{
                 alert("Problemas al actualizar el usuario.");
             }
            }//cierre success
        });//cierre de ajax
    });//Cierre de actualizar

});//fin jquery


