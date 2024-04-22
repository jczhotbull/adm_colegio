<?php
// inscritos

$query_ins_basica = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
      /*   and  el_activo = '1'  */
      and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '2'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_basica = mysqli_query($enlace, $query_ins_basica) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_basica = mysqli_num_rows($datos_es_ins_basica); 



$query_ins_basicaF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion != '8'
      /*   and  el_activo = '1'  */
      and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '2'
         and retirado_si_o_no = '0'
         and id_sexo = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_basicaF = mysqli_query($enlace, $query_ins_basicaF) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_basicaF = mysqli_num_rows($datos_es_ins_basicaF); 

$totalRows_datos_estudiantes_ins_basicaM = $totalRows_datos_estudiantes_ins_basica - $totalRows_datos_estudiantes_ins_basicaF;




// pre inscritos

$query_pre_basica = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '2'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_basica = mysqli_query($enlace, $query_pre_basica) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_basica = mysqli_num_rows($datos_es_pre_basica); 



$query_pre_basicaF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '2'
         and retirado_si_o_no = '0'
         and id_sexo = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_basicaF = mysqli_query($enlace, $query_pre_basicaF) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_basicaF = mysqli_num_rows($datos_es_pre_basicaF); 


$totalRows_datos_estudiantes_pre_basicaM = $totalRows_datos_estudiantes_pre_basica - $totalRows_datos_estudiantes_pre_basicaF;




// no inscritos


$query_no_ins_basica = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual     
         and  id_seccion != '8'   /* tiene que estar cursando */
         and  el_activo = '1'        
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  divisiones.id_division = '2'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_ins_basica = mysqli_query($enlace, $query_no_ins_basica) or die(mysqli_error());

$totalRows_datos_estudiantes_no_ins_basica = mysqli_num_rows($datos_es_no_ins_basica); 



$query_no_ins_basicaF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion != '8'   /* tiene que estar cursando */
         and  el_activo = '1'            
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  divisiones.id_division = '2'
         and retirado_si_o_no = '0'
         and id_sexo = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_ins_basicaF = mysqli_query($enlace, $query_no_ins_basicaF) or die(mysqli_error());

$totalRows_datos_estudiantes_no_ins_basicaF = mysqli_num_rows($datos_es_no_ins_basicaF); 


$totalRows_datos_estudiantes_no_ins_basicaM = $totalRows_datos_estudiantes_no_ins_basica - $totalRows_datos_estudiantes_no_ins_basicaF;



// retirados

$query_ret_basica = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '2'
         and retirado_si_o_no = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ret_basica = mysqli_query($enlace, $query_ret_basica) or die(mysqli_error());
$totalRows_datos_estudiantes_ret_basica = mysqli_num_rows($datos_es_ret_basica); 



$query_ret_basicaF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '2'
         and retirado_si_o_no = '1'
         and id_sexo = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ret_basicaF = mysqli_query($enlace, $query_ret_basicaF) or die(mysqli_error());
$totalRows_datos_estudiantes_ret_basicaF = mysqli_num_rows($datos_es_ret_basicaF); 

$totalRows_datos_estudiantes_ret_basicaM = $totalRows_datos_estudiantes_ret_basica - $totalRows_datos_estudiantes_ret_basicaF;

?>