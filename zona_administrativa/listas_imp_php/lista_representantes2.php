<?php


$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  next = '8' and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);

$per_actual_next = $row_datos_periodo_actual['id_periodo_es'];


$queryperiodo_ahora = "SELECT * FROM temporada_escolar WHERE  status = '1' and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_ahora = mysqli_query($enlace, $queryperiodo_ahora) or die(mysqli_error());
$row_datos_periodo_ahora = mysqli_fetch_assoc($datos_periodo_ahora);

$per_actual_ahora = $row_datos_periodo_ahora['id_periodo_es'];



$query = "SELECT * FROM numeros_en_orden2, temporada_escolar, reg_representante

				WHERE numeros_en_orden2.id_numero2 = reg_representante.inscribe_nuevamente_hasta
				  and temporada_escolar.id_periodo_es = reg_representante.en_el_periodo
				  
				  and reg_representante.pre_ins_nuev_si_o_no = '2'
				  and reg_representante.status = '1'					
				
				GROUP BY ci_repre ORDER BY autorizado_el+0 DESC";

$usuarios = mysqli_query($enlace, $query) or die(mysqli_error());

$row_usuarios = mysqli_fetch_assoc($usuarios);

$totalRows_usuarios = mysqli_num_rows($usuarios);


		



		$queryperiodo_act1 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar DESC LIMIT 3";
		$datos_periodo_act1 = mysqli_query($enlace, $queryperiodo_act1) or die(mysqli_error());
		$row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1);




		$queryperiodo_act2 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar DESC LIMIT 3";
		$datos_periodo_act2 = mysqli_query($enlace, $queryperiodo_act2) or die(mysqli_error());
		$row_datos_periodo_act2 = mysqli_fetch_assoc($datos_periodo_act2);



/*
$query_conteoA = "SELECT id_repre, count(id_repre) FROM reg_estu_repre_all
                      
         GROUP BY id_repre having count(id_repre)=1";

$datos_conteoA = mysqli_query($enlace, $query_conteoA) or die(mysqli_error());
$total_conteoA = mysqli_num_rows($datos_conteoA);   */




$query_conteo_acc = "SELECT *, count(id_repre) FROM reg_representante

where acceso = 1

                      
         GROUP BY id_repre having count(id_repre)=1";

$datos_conteo_acc = mysqli_query($enlace, $query_conteo_acc) or die(mysqli_error());
$total_conteo_acc = mysqli_num_rows($datos_conteo_acc);







$query_conteoA = "SELECT *, count(id_repre) FROM reg_estu_repre_all
LEFT JOIN reg_estu_actual ON reg_estu_repre_all.id_estu=reg_estu_actual.id_estud
LEFT JOIN reg_estudiantes ON reg_estu_repre_all.id_estu=reg_estudiantes.id_estud
where reg_estu_actual.cursa_actualmente = '$per_actual_ahora'
and reg_estu_actual.fecha_inscripcion != ''
and reg_estu_actual.el_activo = 1
and reg_estudiantes.inscrito_si_o_no = 1
and reg_estudiantes.retirado_si_o_no = 0
                      
         GROUP BY id_repre having count(id_repre)=1";

$datos_conteoA = mysqli_query($enlace, $query_conteoA) or die(mysqli_error());
$total_conteoA = mysqli_num_rows($datos_conteoA);


/*   POR alfabeto

$query_nameAB = " SELECT reg_estu_repre_all.id_repre, count(reg_estu_repre_all.id_repre), nombre_repre FROM reg_estu_repre_all, reg_representante where  reg_estu_repre_all.id_repre = reg_representante.id_repre
and reg_representante.nombre_repre between 'A%' and 'C%'

                      
         GROUP BY reg_estu_repre_all.id_repre having count(reg_estu_repre_all.id_repre)=1";

$datos_nameAB = mysqli_query($enlace, $query_nameAB) or die(mysqli_error());
$total_nameAB = mysqli_num_rows($datos_nameAB);



 para ordenarlo por sexo

SELECT reg_estu_repre_all.id_repre, count(reg_estu_repre_all.id_repre), id_sexo FROM reg_estu_repre_all, reg_representante where  reg_estu_repre_all.id_repre = reg_representante.id_repre
and reg_representante.id_sexo = "2"
                      
         GROUP BY reg_estu_repre_all.id_repre having count(reg_estu_repre_all.id_repre)=1


         */


/* 
$query_conteoB = "SELECT id_repre, count(id_repre) FROM reg_estu_repre_all
                      
         GROUP BY id_repre having count(id_repre)=2";

$datos_conteoB = mysqli_query($enlace, $query_conteoB) or die(mysqli_error());
$total_conteoB = mysqli_num_rows($datos_conteoB);    */



$query_conteoB = "SELECT *, count(id_repre) FROM reg_estu_repre_all
LEFT JOIN reg_estu_actual ON reg_estu_repre_all.id_estu=reg_estu_actual.id_estud
LEFT JOIN reg_estudiantes ON reg_estu_repre_all.id_estu=reg_estudiantes.id_estud
where reg_estu_actual.cursa_actualmente = '$per_actual_ahora'
and reg_estu_actual.fecha_inscripcion != ''
and reg_estu_actual.el_activo = 1
and reg_estudiantes.inscrito_si_o_no = 1
and reg_estudiantes.retirado_si_o_no = 0
                      
         GROUP BY id_repre having count(id_repre)=2";

$datos_conteoB = mysqli_query($enlace, $query_conteoB) or die(mysqli_error());
$total_conteoB = mysqli_num_rows($datos_conteoB); 






/*

$query_conteoC = "SELECT id_repre, count(id_repre) FROM reg_estu_repre_all
                      
         GROUP BY id_repre having count(id_repre)>=3";

$datos_conteoC = mysqli_query($enlace, $query_conteoC) or die(mysqli_error());
$total_conteoC = mysqli_num_rows($datos_conteoC);   */


$query_conteoC = "SELECT *, count(id_repre) FROM reg_estu_repre_all
LEFT JOIN reg_estu_actual ON reg_estu_repre_all.id_estu=reg_estu_actual.id_estud
LEFT JOIN reg_estudiantes ON reg_estu_repre_all.id_estu=reg_estudiantes.id_estud
where reg_estu_actual.cursa_actualmente = '$per_actual_ahora'
and reg_estu_actual.fecha_inscripcion != ''
and reg_estu_actual.el_activo = 1
and reg_estudiantes.inscrito_si_o_no = 1
and reg_estudiantes.retirado_si_o_no = 0
                      
         GROUP BY id_repre having count(id_repre)>=3";

$datos_conteoC = mysqli_query($enlace, $query_conteoC) or die(mysqli_error());
$total_conteoC = mysqli_num_rows($datos_conteoC); 



/*
$query_conteoCC = "SELECT id_repre, count(id_repre) FROM reg_estu_repre_all
                      
         GROUP BY id_repre having count(id_repre)>=4";

$datos_conteoCC = mysqli_query($enlace, $query_conteoCC) or die(mysqli_error());
$total_conteoCC = mysqli_num_rows($datos_conteoCC); */




$query_conteoD = "SELECT id_repre 
FROM reg_representante 
WHERE id_repre not in (
    SELECT id_repre 
    FROM reg_estu_repre_all 
    )";

$datos_conteoD = mysqli_query($enlace, $query_conteoD) or die(mysqli_error());
$total_conteoD = mysqli_num_rows($datos_conteoD);






mysqli_close($enlace);

?>