$(document).ready(function() {
	

	$('#configuracion').submit(function(e) {
		e.preventDefault();
		var datos = new FormData($('#configuracion')[0])
		
		$.ajax({
			url: '../ajax/configuracion.php',
			type: 'POST',
			data: datos,
			contentType: false,
			processData: false,
			beforeSend: function(objeto) {
				$('#respuesta').html('<p class="loader loader-primary"></p>')
			},
			success: function(response) {
				$('#respuesta').html(response)
				$('.wrapper').load();
			}
		})

	})
})