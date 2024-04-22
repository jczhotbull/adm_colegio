<?php



$queryperiodo_ahora = "SELECT * FROM temporada_escolar WHERE  status = '1' and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_ahora = mysqli_query($enlace, $queryperiodo_ahora) or die(mysqli_error());
$row_datos_periodo_ahora = mysqli_fetch_assoc($datos_periodo_ahora);

$per_actual_ahora = $row_datos_periodo_ahora['id_periodo_es'];



$query_de_ids = "SELECT *, count(id_repre) FROM reg_estu_repre_all
LEFT JOIN reg_estu_actual ON reg_estu_repre_all.id_estu=reg_estu_actual.id_estud
LEFT JOIN reg_estudiantes ON reg_estu_repre_all.id_estu=reg_estudiantes.id_estud
where reg_estu_actual.cursa_actualmente = '$per_actual_ahora'
and reg_estu_actual.fecha_inscripcion != ''
and reg_estu_actual.el_activo = 1
and reg_estudiantes.inscrito_si_o_no = 1
and reg_estudiantes.retirado_si_o_no = 0
                      
         GROUP BY id_repre having count(id_repre)>='$conteoXX' ";

$datos_de_ids = mysqli_query($enlace, $query_de_ids) or die(mysqli_error());

$row_de_ids = mysqli_fetch_array($datos_de_ids); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_de_ids = mysqli_num_rows($datos_de_ids); 





mysqli_close($enlace);


/* antes 

$query = "SELECT * FROM reg_estu_repre_all, reg_representante, religiones, tb_medicos, reg_estudiantes                        
         WHERE religiones.id_religion = reg_estudiantes.id_religion
         and   tb_medicos.id_medico = reg_estudiantes.id_medico       
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and  inscrito_si_o_no = 1 
         GROUP BY estu_expediente ORDER BY apellidos_estu ASC ";



 */


?>


 