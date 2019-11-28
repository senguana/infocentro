 $("#guardar_docente" ).submit(function( event ) {
       var parametros = $(this).serialize();
       $.ajax({
           type: "POST",
           url: "../ajax/docenteNuevo.php",
           data: parametros,
            beforeSend: function(objeto){
              $("#error").html("Enviando...");
              },

           success: function(datos){
            $('#msg_error').html(datos);
            $('#msg_error').show();
            $('#tablaDocente').load('./../ajax/docenteTabla.php')

           $('#NuevoDocente').modal('hide');
           }
       });
       event.preventDefault();
     });




// recuperar datos
$('#EditDocente').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal

      var nombre = button.data('nombre')
      $('#nombre_docente').val(nombre)

      var apellido = button.data('apellido')
      $('#apell_docente').val(apellido)

      var correo = button.data('correo')
      $('#correo_docente').val(correo)

      var telefono = button.data('tel')
      $('#tel_docente').val(telefono)

      var genero = button.data('genero')
      $('#genero_docente').val(genero)


      var id = button.data('id')
      $('#id_docente').val(id)
    });



// editar docente.
$( "#editar_docente").submit(function( event ) {
      var parametros = $(this).serialize();
      $.ajax({
          type: "POST",
          url: "../ajax/docenteUpdate.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#resultado").html("Enviando...");
            },
            success: function(datos){
              $('#error').html(datos);
              $('#tablaDocente').load('./../ajax/docenteTabla.php')

              $('#editar_docente').modal('hide');
            }
      });
      event.preventDefault();
    });




// eliminar docente
$('#deleteDocente').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var id = button.data('id')
      $('#delete_id').val(id)
    });

$("#delete_docente" ).submit(function( event ) {
      var parametros = $(this).serialize();
      $.ajax({
          type: "POST",
          url: "../ajax/docenteDelete.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#resultado").html("Enviando...");
            },
          success: function(datos){
            if (datos) {
              toastr.warning('Se ha Elimanado correctamente', 'Representante');
              $('#tablaDocente').load('./../ajax/docenteTabla.php')
            }
          $('#deleteDocente').modal('hide');
          }
      });
      event.preventDefault();
    });