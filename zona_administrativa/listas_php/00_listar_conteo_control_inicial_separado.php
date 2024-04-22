<?php
// inscritos

$query_ins_inicial_r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud 
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '1'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_inicial_r = mysqli_query($enlace, $query_ins_inicial_r) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_inicial_r = mysqli_num_rows($datos_es_ins_inicial_r); 





// pre inscritos

$query_pre_inicial_r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '1'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_inicial_r = mysqli_query($enlace, $query_pre_inicial_r) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_inicial_r = mysqli_num_rows($datos_es_pre_inicial_r); 


?>