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
                    _html += "<input type='button' id='btnActualizar' name='btnActualizar' value='Actualizar'> ";
                    _html += "</form>";

                    $(".frm-actualizar").append(_html);


                } else {
                    $(".frm-actualizar").append("<p>Articulo no encontrado.</p>");
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
            data: form.serialize() + "&accion=actualizar-articulo",
            success: function (data) {
             if(data.valido){
                 alert("Articulo actualizado correctamente.");
                 
             }else{
                 alert("Problemas al actualizar el articulo.");
             }
            }//cierre success
        });//cierre de ajax
    });//Cierre de actualizar

});//fin jquery


