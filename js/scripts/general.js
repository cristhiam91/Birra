$(function(){
    /*SELECTORES*/
    $("#bntIngresar").click(function(){             
       form = $("#frmLogin"); 
       
       $.ajax({
           type: "post",
           dataType: "json",
           url: "procesos.php",
           data: form.serialize() + "&accion=Login",
           success:  function(data){
              if(data.valido){
                  window.location = data.datos;
              } else{               
                    var dialog = new Messi(
                            'Usuario no encontrado',
                            {
                                title: 'Inicio de sesion',
                                titleClass: 'anim warning',
                                buttons: [{id: 0, label: 'Close', val: 'X'}]
                            }
                    );
              }          
           } //ciere success          
       });//cierre ajax
          
    }); //fin click
    
    
    
});


