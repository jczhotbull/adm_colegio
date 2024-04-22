<?php



$periodo = "SELECT * FROM periodo_escolar";

$datos_periodo = mysqli_query($enlace, $periodo) or die(mysqli_error());

$row_datos_periodo = mysqli_fetch_assoc($datos_periodo);




$query = "SELECT * FROM plantilla_contratados, plantilla_personal, cargos_all, plantilla_cargos
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
            and cargos_all.id_contrato = plantilla_contratados.id_contrato
            and plantilla_cargos.id_cargo = cargos_all.id_cargo
            and id_grupo = '1'
            and firma = '1'            
            LIMIT 1 ";

$datos_plantilla = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla); 





$query_per = "SELECT * FROM temporada_escolar
 WHERE  status = '1' and periodo_escolar != '.' LIMIT 1 ";

$datos_plantilla_per = mysqli_query($enlace, $query_per) or die(mysqli_error());

$row_datos_plantilla_per = mysqli_fetch_assoc($datos_plantilla_per); 





		$query_next = "SELECT * FROM temporada_escolar
		 WHERE  next = '8' and periodo_escolar != '.' LIMIT 1 ";

		$datos_plantilla_next = mysqli_query($enlace, $query_next) or die(mysqli_error());

		$row_datos_plantilla_next = mysqli_fetch_assoc($datos_plantilla_next); 







$query_per_old = "SELECT * FROM temporada_escolar
 WHERE  old = '5' and periodo_escolar != '.' LIMIT 1 ";

$datos_plantilla_per_old = mysqli_query($enlace, $query_per_old) or die(mysqli_error());

$row_datos_plantilla_per_old = mysqli_fetch_assoc($datos_plantilla_per_old); 


mysqli_close($enlace);  


?>