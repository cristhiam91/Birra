$(function () {

    /*SELECTORES*/
    $("#btnBuscar").click(function () {
        form = $("#frmBusqueda");
        $(".frm-MiPerfil").empty();
        $.ajax({
            type: "post",
            dataType: "json",
            url: "procesos.php",
            data: form.serialize() + "&accion=buscar-usuario",
            success: function (data) {
                if (data.valido) {
                    _html = "<form id='frmActualizar' method='post'>";
                    _html +="<br/>";
                    _html +="<br/>";
                    _html +="<label>Mi perfil</label>";
                    _html +="<br/>";
                    _html +="<br/>";
                    _html += "<label>Cedula</label><br/><input type='text' name='cedula' value='" + data.datos.cedula + "' readonly><br>";
                    _html += "<label>Nombre</label><br/><input type='text' name='nombre' value='" + data.datos.nombre + "'><br>";
                    _html += "<label>Apellidos</label><br/><input type='text' name='apellidos' value='" + data.datos.apellidos + "'><br>";
                    _html += "<label>Telefono</label><br/><input type='text' name='telefono' value='" + data.datos.telefono + "'><br>";
                    _html += "<label>Email</label><br/><input type='text' name='email' value='" + data.datos.email + "'><br>";
                    _html += "<label>Nombre de usuario</label><br/><input type='text' name='nombre_de_usuario' value='" + data.datos.nombre_de_usuario + "'><br>";
                    _html += "<label>contrasena</label><br/><input type='text' name='contrasena' value='" + data.datos.contrasena + "'><br>";
                    _html += "<label>Rol</label><br/><input type='text' name='rol' value='" + data.datos.rol+ "' readonly><br>";
                    _html += "<input type='button' id='btnActualizar' name='btnActualizar' value='Guadar cambios'> ";
                    _html += "</form>";

                    $(".frm-MiPerfil").append(_html);


                } else {
                    $(".frm-MiPerfil").append("<p>Usuario no encontrado.</p>");
                }
            } //ciere success          
        });//cierre ajax

    }); //fin click

    $(document).on("click", "#btnActualizar", function () {
        form = $("#frmActualizar");
        $.ajax({
            type: "post",
            dataType: "json",
            url: "procesos.php",
            data: form.serialize() + "&accion=actualizar-usuario",
            success: function (data) {
                if (data.valido) {
                    alert("Usuario actualizado correctamente.");

                } else {
                    alert("Problemas al actualizar el usuario.");
                }
            }//cierre success
        });//cierre de ajax
    });//Cierre de actualizar

});//fin jquery


