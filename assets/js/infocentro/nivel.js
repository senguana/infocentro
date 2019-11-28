$('#guardar_nivel').submit(function(e) {
	var parametros = $(this).serialize();
  $('#error').hide();
  
$('input[type="text"]').val('');
	$.ajax({
		type: "POST",
		url: "./../ajax/nivelNuevo.php",
		data: parametros,
		beforeSend: function(event) {
			$('#error').html("Enviando");
		},
		success:function(datos) {
			$('#error').html(datos);
      $('#error').show(datos);
			$('#tablaNivel').load('./../ajax/nivelTabla.php');

		}
	});
 
	e.preventDefault();
});

// obtener datos 
// recuperar datos 
$('#EditNivel').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var curso = button.data('nombre') 
      $('#nivel').val(curso)

      var id = button.data('id') 
      $('#id_nivel').val(id)
    });

// editar usuario
$('#actualizar_nivel').submit(function( event ) {
      var parametros = $(this).serialize();
      $.ajax({
          type: "POST",
          url: "../ajax/nivelUpdate.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#error1").html("Enviando...");
            },
          success: function(datos){
          $('#error1').html(datos);
             $('#tablaNivel').load('./../ajax/nivelTabla.php');
         
           // $('#EditNivel').modal('hide');
          
        }
      });
      event.preventDefault();
    });

// eliminar usuario
$('#deleteNivelModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var id = button.data('id') 
      $('#delete_id').val(id)
    });

$("#delete_nivel" ).submit(function( event ) {
      var parametros = $(this).serialize();
      $.ajax({
          type: "POST",
          url: "../ajax/nivelDelete.php",
          data: parametros,
           // beforeSend: function(objeto){
           //  $("#error3").html("Enviando...");
           //  },
          success: function(datos){
            $('#tablaNivel').load('./../ajax/nivelTabla.php');
              toastr.success('Se ha Elimanado correctamente', 'Curso');
              
              $('#deleteNivelModal').modal('hide');  
          }
      });
      event.preventDefault();
    });