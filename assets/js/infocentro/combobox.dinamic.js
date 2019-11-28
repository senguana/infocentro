
$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: './../ajax/cargar_combobox_institucion.php',
    // data: {'peticion': 'cargar_listas'}
  })
  .done(function(listas_rep){
    $('#listar_institucion').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las listas_rep')
  })

$('#listar_institucion').on('change', function(){
     var id = $('#listar_institucion').val()
     alert(id)
     $.ajax({
        type: 'POST',
       url: './../ajax/cargar_combobox_grado.php',
        data: {'id': id}
      })
      .done(function(listas_rep){
        $('#videos').html(listas_rep)
      })
      .fail(function(){
        alert('Hubo un errror al cargar los vídeos')
      })
   })

//   $('#enviar').on('click', function(){
//     var resultado = 'Lista de reproducción: ' + $('#lista_reproduccion option:selected').text() +
//     ' Video elegido: ' + $('#videos option:selected').text()

//     $('#resultado1').html(resultado)
//   })

 })