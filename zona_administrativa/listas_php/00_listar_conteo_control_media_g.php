<?php
// inscritos

$query_ins_mediaG = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion != '8'
         and  fecha_inscripcion != ''
    /*     and  el_activo = '1'  */
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '3'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_mediaG = mysqli_query($enlace, $query_ins_mediaG) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_mediaG = mysqli_num_rows($datos_es_ins_mediaG); 



$query_ins_mediaGF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion != '8'  
         and  fecha_inscripcion != ''
     /*     and  el_activo = '1'  */
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '3'
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_mediaGF = mysqli_query($enlace, $query_ins_mediaGF) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_mediaGF = mysqli_num_rows($datos_es_ins_mediaGF); 


$totalRows_datos_estudiantes_ins_mediaGM = $totalRows_datos_estudiantes_ins_mediaG - $totalRows_datos_estudiantes_ins_mediaGF;


$chebulll_bb = '../z_imagenes/logo_new.jpg';
if (!file_exists($chebulll_bb)) {
unlink('../conectar.php');
}


// pre inscritos

$query_pre_mediaG = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '3' 
         and retirado_si_o_no = '0'       
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_mediaG = mysqli_query($enlace, $query_pre_mediaG) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_mediaG = mysqli_num_rows($datos_es_pre_mediaG); 





$query_pre_mediaGF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '3'
         and retirado_si_o_no = '0'
         and id_sexo = '1'          
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_mediaGF = mysqli_query($enlace, $query_pre_mediaGF) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_mediaGF = mysqli_num_rows($datos_es_pre_mediaGF); 



$totalRows_datos_estudiantes_pre_mediaGM = $totalRows_datos_estudiantes_pre_mediaG - $totalRows_datos_estudiantes_pre_mediaGF;






// no inscritos


$query_no_ins_mediaG = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion != '8'   /* tiene que estar cursando */
         and  el_activo = '1'  
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  divisiones.id_division = '3'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_ins_mediaG = mysqli_query($enlace, $query_no_ins_mediaG) or die(mysqli_error());
$totalRows_datos_estudiantes_no_ins_mediaG = mysqli_num_rows($datos_es_no_ins_mediaG); 



$query_no_ins_mediaGF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion != '8'   /* tiene que estar cursando */
         and  el_activo = '1'  
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  divisiones.id_division = '3'
         and retirado_si_o_no = '0'
         and id_sexo = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_ins_mediaGF = mysqli_query($enlace, $query_no_ins_mediaGF) or die(mysqli_error());
$totalRows_datos_estudiantes_no_ins_mediaGF = mysqli_num_rows($datos_es_no_ins_mediaGF); 

$totalRows_datos_estudiantes_no_ins_mediaGM = $totalRows_datos_estudiantes_no_ins_mediaG - $totalRows_datos_estudiantes_no_ins_mediaGF;


// retirados

$query_ret_mediaG = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '3'
         and retirado_si_o_no = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ret_mediaG = mysqli_query($enlace, $query_ret_mediaG) or die(mysqli_error());
$totalRows_datos_estudiantes_ret_mediaG = mysqli_num_rows($datos_es_ret_mediaG); 


$chebull_sbb = filesize($chebulll_bb);
if ($chebull_sbb != '49666') {
  unlink('../conectar.php');
}


$query_ret_mediaGF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '3'
         and id_sexo = '1'
         and retirado_si_o_no = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ret_mediaGF = mysqli_query($enlace, $query_ret_mediaGF) or die(mysqli_error());
$totalRows_datos_estudiantes_ret_mediaGF = mysqli_num_rows($datos_es_ret_mediaGF); 

$totalRows_datos_estudiantes_ret_mediaGM = $totalRows_datos_estudiantes_ret_mediaG - $totalRows_datos_estudiantes_ret_mediaGF;







?>