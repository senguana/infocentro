$('#guardar_institucion').submit(function(e) {
	var parametros = $(this).serialize();
  $('#error').hide();
  
$('input[type="text"]').val('');
	$.ajax({
		type: "POST",
		url: "./../ajax/institucionNuevo.php",
		data: parametros,
		beforeSend: function(b) {
			$('#error').html("Enviando");
		},
		success:function(datos) {
			$('#error').html(datos);
      $('#error').show(datos);
			$('#tablaInstitucion').load('./../ajax/institucionTabla.php');

		}
	});
 
	e.preventDefault();
});

// obtener datos 
// recuperar datos 
$('#EditInstitucion').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var institucion = button.data('nombre') 
      $('#nombre_institucion').val(institucion)

      var id = button.data('id') 
      $('#id_institucion').val(id)
    });

// editar usuario
$('#actualizar_institucion').submit(function( event ) {
      var parametros = $(this).serialize();
      $.ajax({
          type: "POST",
          url: "../ajax/institucionUpdate.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#error1").html("Enviando...");
            },
          success: function(datos){
          $('#error1').html(datos);
             $('#tablaInstitucion').load('./../ajax/institucionTabla.php');
         
           // $('#EditNivel').modal('hide');
          
        }
      });
      event.preventDefault();
    });

// eliminar usuario
$('#deleteInstitucionModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var id = button.data('id') 
      $('#id_delete').val(id)
    });

$("#delete_institucion" ).submit(function( event ) {
      var parametros = $(this).serialize();
      $.ajax({
          type: "POST",
          url: "../ajax/institucionDelete.php",
          data: parametros,
           // beforeSend: function(objeto){
           //  $("#error3").html("Enviando...");
           //  },
          success: function(datos){
            
            $('#tablaInstitucion').load('./../ajax/institucionTabla.php');
              // toastr.success('Se ha Elimanado correctamente', 'Institucion');
              
             $('#deleteInstitucionModal').modal('hide');  
          }
      });
      event.preventDefault();
    });