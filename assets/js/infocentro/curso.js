 $("#guardar_curso" ).submit(function( event ) {
       var parametros = $(this).serialize();
       $.ajax({
           type: "POST",
           url: "../ajax/cursoNuevo.php",
           data: parametros,
            beforeSend: function(objeto){
              $("#error").html("Enviando...");
              },
           success: function(datos){
            $('#error').html(datos);
            $('#error').show(datos);
            
            $('#TablaCurso').load('./../ajax/cursoTabla.php');

           $('#guardar_curso').modal('hide');
         
           }
       });
        event.preventDefault();
     });




// recuperar datos 
$('#EditCurso').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var curso = button.data('curso') 
      $('#curso').val(curso)

      var fechaInicio = button.data('fechaInicio') 
      $('#fecha_inicio').val(fechaInicio)

      var fechaFin = button.data('fechaFin')
      $('#fecha_fin').val(fechaFin)
  
      var total_horas = button.data('horas')
      $('#total_horas').val(total_horas)

       var docente = button.data('docente')
      $('#docente').val(docente)

      var id = button.data('id') 
      $('#id_curso').val(id)
    });

// editar usuario
$('#actualizar_curso').submit(function( event ) {
      var parametros = $(this).serialize();
      $.ajax({
          type: "POST",
          url: "../ajax/cursoUpdate.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#error1").html("Enviando...");
            },
          success: function(datos){
          $('#error1').html(datos);
            $('#error1').show(datos);
             $('#TablaCurso').load('./../ajax/cursoTabla.php');
         
           $('#guardar_curso').modal('hide');
          
        }
      });
      event.preventDefault();
    });

// eliminar usuario
$('#deleteCursoModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var id = button.data('id') 
      $('#delete_id').val(id)
    });

$("#delete_curso" ).submit(function( event ) {
      var parametros = $(this).serialize();
      $.ajax({
          type: "POST",
          url: "../ajax/cursoDelete.php",
          data: parametros,
          success: function(datos){
               $('#TablaCurso').load('./../ajax/cursoTabla.php');
               $('#deleteCursoModal').modal('hide');
          }
      });
      event.preventDefault();
    });