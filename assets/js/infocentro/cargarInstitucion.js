

$(document).ready(function() {

  	$('#buscar_institucion').autocomplete({
  		source: function(query, response) {
  			$.ajax({
  				url: "./../ajax/autocompleteInstitucion.php",
  				type: "POST",
  				dataType: "json",
  				data: {query:query.term},
  				success: function(data) {
  					response(data)
  				}
  			});
  		},
  		minLength: 2,
  		select: function(event, ui) {
  			alert("seleccionado " + ui.item.label);
  		  }
  	});
  });

 $('#consultar_alumno').submit(function( event ) {
        // var parametros = $(this).serialize();
        var institucion = $('#buscar_institucion').val();
        var grado = $('#listar_grado').val();
        $resultados = document.querySelector("#resultado");
        var datos = {"institucion": institucion, "grado":grado }

        if(institucion==''){
          alert("Dbes elegir institución");

        }else{

        $.ajax({
            type: "POST",
             url: "../ajax/asignarCurso.php",
             data: datos,
             async: true,
             success: function(response) {

              var alumnos = JSON.parse(response);
              
              console.log(alumnos)
              if(alumnos.error){
                $('#resultado').html(alumnos.error)
               $('#resultado').show();
              }else{
                var tablaA = '';
               tablaA +=
      "<div class='table-responsive'>"+
            "<a href='registroCursosAlumnos.php?q="+alumnos.resultado[0].nombre_institucion+"' class='btn btn-success'><i class='fas fa-arrow-circle-right'</i>Ver cursos regisratdos</a>"+
  
          "<table id='basic-datatables' class='display table table-striped table-hover'>"+
              "<thead>"+
                  "<tr>"+
                    "<th>Dni</th>"+
                    "<th>Nombres</th>"+
                    "<th>Apellidos</th>"+
                    "<th>Genero</th>"+
                    "<th>Institucion</th>"+
                    "<th>Grado</th>"+
                    "<th style='width: 10%'>Action</th>"+
                  "</tr>"+
              "</thead>"+
                
              "<tbody>"
              var iterar = alumnos.resultado;
              for(let i=0; i < iterar.length; i++){
              tablaA +="<tr><td>" +iterar[i].dni_alum_s+"</td>"+
                        "<td>" +iterar[i].nombres_alum_s+"</td>"+
                        "<td>" +iterar[i].apellidos_alumn_s+"</td>"+
                        "<td>" +iterar[i].genero+"</td>"+
                        "<td>" +iterar[i].nombre_institucion+"</td>"+
                        "<td>" +iterar[i].descripcion+"</td>"+
                        "<td>" +iterar[i].id_alumno_s+"</td>"+
                        "<td><div class='form-button-action'>"+
                            "<button type='button' data-id='"+iterar[i].id_alumno_s+"' data-toggle='modal' data-target='#agregarCurso' title='Agregar Curso a los EStudiantes' class='btn btn-primary' id='AgregarCurso'><i class='far fa-plus-square fa-sm'></i></button>"+
                        "</div></td></tr>"

             }
              "</tbody>"+ 

            "</table>"+
          "</div>";
             
                // $('#resultado').html(iterar.error)
        
                  $('#alumnoBasicaTabla').html(tablaA);
                  $('#resultado').hide();
                
              }
              
              

             
                },error: function(error) {
                  console.log(error)
                }
              })
      }
        event.preventDefault();
});


// function asignarCurso(){
// $('#AgregarCurso').modal('show');

// }

$('#agregarCurso').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id');
      $('#id_alumno').val(id)
    });

// agregar cursos a los alumnos 

$('#asignarCurso').submit(function(event){
  event.preventDefault();
  var alumno = $('#id_alumno').val();
  var curso = $('#seleccionarCurso').val();

  var datos = {"alumno":alumno, "curso":curso}
  if(curso ==""){
    alert("Debes seleccionar el curso")
  }else{
    $.ajax({
      url: './../ajax/asignarCursoAlumno.php',
      type: 'POST',
      data: datos,
      beforeSend: function(objeto){
        $('#response').html('Enviado');
        $('#response').show(datos)
      },
      success: function(datos){
        $('#response').html(datos);
        $('#response').show(datos)
      }
    })
  }

})
     