<?php


$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  next = '8' and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);

$per_actual_next = $row_datos_periodo_actual['id_periodo_es'];



$query = "SELECT * FROM numeros_en_orden, temporada_escolar, reg_representante

				WHERE numeros_en_orden.id_numero = reg_representante.inscribe_hasta
				  and temporada_escolar.id_periodo_es = reg_representante.en_el_periodo
				  
				  and reg_representante.pre_ins_si_o_no = '2'
				  and reg_representante.status = '1'					
				
				GROUP BY ci_repre ORDER BY id_repre+0 DESC";

$usuarios = mysqli_query($enlace, $query) or die(mysqli_error());

$row_usuarios = mysqli_fetch_assoc($usuarios);

$totalRows_usuarios = mysqli_num_rows($usuarios);


		



		$queryperiodo_act1 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar DESC LIMIT 3";
		$datos_periodo_act1 = mysqli_query($enlace, $queryperiodo_act1) or die(mysqli_error());
		$row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1);




		$queryperiodo_act2 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar DESC LIMIT 3";
		$datos_periodo_act2 = mysqli_query($enlace, $queryperiodo_act2) or die(mysqli_error());
		$row_datos_periodo_act2 = mysqli_fetch_assoc($datos_periodo_act2);



mysqli_close($enlace);

?>