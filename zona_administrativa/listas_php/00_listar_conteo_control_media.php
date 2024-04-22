<?php
// inscritos

$query_ins_media = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
         and  fecha_inscripcion != ''
      /*   and  el_activo = '1'  */
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '5'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_media = mysqli_query($enlace, $query_ins_media) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_media = mysqli_num_rows($datos_es_ins_media); 



$query_ins_mediaF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion != '8'
         and  fecha_inscripcion != ''
     /*    and  el_activo = '1'   */
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '5'
         and retirado_si_o_no = '0' 
         and id_sexo = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_mediaF = mysqli_query($enlace, $query_ins_mediaF) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_mediaF = mysqli_num_rows($datos_es_ins_mediaF); 

$totalRows_datos_estudiantes_ins_mediaM = $totalRows_datos_estudiantes_ins_media - $totalRows_datos_estudiantes_ins_mediaF;




// pre inscritos

$query_pre_media = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '5'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_media = mysqli_query($enlace, $query_pre_media) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_media = mysqli_num_rows($datos_es_pre_media); 



$query_pre_mediaF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual    
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '5'
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_mediaF = mysqli_query($enlace, $query_pre_mediaF) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_mediaF = mysqli_num_rows($datos_es_pre_mediaF); 

$totalRows_datos_estudiantes_pre_mediaM = $totalRows_datos_estudiantes_pre_media - $totalRows_datos_estudiantes_pre_mediaF;




// no inscritos

$query_no_ins_media = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'  /* tiene que estar cursando */
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  divisiones.id_division = '5'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_ins_media = mysqli_query($enlace, $query_no_ins_media) or die(mysqli_error());
$totalRows_datos_estudiantes_no_ins_media = mysqli_num_rows($datos_es_no_ins_media); 



$query_no_ins_mediaF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'  /* tiene que estar cursando */
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  divisiones.id_division = '5'
         and retirado_si_o_no = '0'
         and id_sexo = '1'          
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_ins_mediaF = mysqli_query($enlace, $query_no_ins_mediaF) or die(mysqli_error());
$totalRows_datos_estudiantes_no_ins_mediaF = mysqli_num_rows($datos_es_no_ins_mediaF); 


$totalRows_datos_estudiantes_no_ins_mediaM = $totalRows_datos_estudiantes_no_ins_media - $totalRows_datos_estudiantes_no_ins_mediaF;



// retirados

$query_ret_media = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '5'
         and retirado_si_o_no = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ret_media = mysqli_query($enlace, $query_ret_media) or die(mysqli_error());
$totalRows_datos_estudiantes_ret_media = mysqli_num_rows($datos_es_ret_media); 



$query_ret_mediaF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '5'
         and retirado_si_o_no = '1'
         and id_sexo = '1'          
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ret_mediaF = mysqli_query($enlace, $query_ret_mediaF) or die(mysqli_error());
$totalRows_datos_estudiantes_ret_mediaF = mysqli_num_rows($datos_es_ret_mediaF); 

$totalRows_datos_estudiantes_ret_mediaM = $totalRows_datos_estudiantes_ret_media - $totalRows_datos_estudiantes_ret_mediaF;

?>