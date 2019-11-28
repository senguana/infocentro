

$( "#loginForm" ).submit(function( event ) {
     $('#login_user').attr("disabled", true);
    var parametros = $(this).serialize();
        $.ajax({
          type: "POST",
          url: "login.php",
          data: parametros,
          beforeSend: function(objeto){
              $("#msg_error").html("Mensaje: Cargando...");
                },
               success: function(datos){
              $("#msg_error").html(datos);
              $('#login_user').attr("disabled", false);
          
            }
       });
     event.preventDefault();
   });
