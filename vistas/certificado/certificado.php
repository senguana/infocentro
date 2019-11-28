<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Certificado</title>
    <link rel="stylesheet" href="estilos.css"> 
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="page_pdf">
	<table id="factura_head">
		<tr>
			<td class="logo_factura">
			</td>
			<td class="info_empresa">
				<div>
					<hr>
					<span>MINISTERIO <b>DE TELECOMUNICACIONES Y DE LA SOCIEDAD DE LA INFORMACIÓN</b></span>
					<hr>
					<p><span>OTORGA EL PRESENTE CERTIFICADO A:</span></p>
				</div>
			</td>
			<td class="info_factura"></td>
		</tr>
	</table>
	<table id="factura_head">
		<tr>
			<td class="logo_factura">
			</td>
			<td class="info_empresa">
				
					<span><?php echo strtoupper($factura['nombres_alum_s'] ." " . $factura['apellidos_alumn_s']); ?></span>
					<p>C.I.<?php echo $factura['dni_alum_s']; ?></p>
			</td>
			<td class="info_factura"></td>
		</tr>
	</table>
	<table id="factura_head">
		<tr>
			<td class="logo_factura">
			</td>
			<td class="info_empresa">
				<span>Por haber aprobado el curso:</span>
				<h3><?php echo $factura['nombre_curso']; ?></h3>
			</td>
			<td class="info_factura"></td>
		</tr>
	</table>
	<table id="factura_head">
		<tr>
			<td class="logo_factura">
			</td>
			<td class="info_empresa">
				<p>Que forma parte del "Plan Nacional de Alistamiento Digital - PLANADI", y fue dictado desde el <?php echo $factura['fecha_inicio']; ?> hasta el <?php echo $factura['fecha_fin']; ?> con una duración de <?php echo $factura['total_horas']; ?> horas.</p>
				<p>
				<p>"Certificado generado el <?php echo date("d") . " del " . date("m") . " de " . date("Y"); ?></p>
			</td>
			<td class="info_factura"></td>
		</tr>
	</table>
</div>
</body>
</html>