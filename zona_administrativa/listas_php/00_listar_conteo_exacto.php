<?php
// inscritos

$query_ins_inicial_m = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion != '8'
      /*   and  el_activo = '1'  */
      and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_inicial_m = mysqli_query($enlace, $query_ins_inicial_m) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_inicial_m = mysqli_num_rows($datos_es_ins_inicial_m); 



$query_ins_inicial_1n = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion != '8'
        /*   and  el_activo = '1'  */
        and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_inicial_1n = mysqli_query($enlace, $query_ins_inicial_1n) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_inicial_1n = mysqli_num_rows($datos_es_ins_inicial_1n); 



$query_ins_inicial_2n = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion != '8'
        /*   and  el_activo = '1'  */
        and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_inicial_2n = mysqli_query($enlace, $query_ins_inicial_2n) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_inicial_2n = mysqli_num_rows($datos_es_ins_inicial_2n); 


$query_ins_inicial_3n = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion != '8'
       /*   and  el_activo = '1'  */
       and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_inicial_3n = mysqli_query($enlace, $query_ins_inicial_3n) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_inicial_3n = mysqli_num_rows($datos_es_ins_inicial_3n); 







/* --------------  */ 



$query_ins_basica_1 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
        /*   and  el_activo = '1'  */
        and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_basica_1 = mysqli_query($enlace, $query_ins_basica_1) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_basica_1 = mysqli_num_rows($datos_es_ins_basica_1); 




$query_ins_basica_2 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
     /*   and  el_activo = '1'  */
     and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_basica_2 = mysqli_query($enlace, $query_ins_basica_2) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_basica_2 = mysqli_num_rows($datos_es_ins_basica_2);



$query_ins_basica_3 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
     /*   and  el_activo = '1'  */
     and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_basica_3 = mysqli_query($enlace, $query_ins_basica_3) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_basica_3 = mysqli_num_rows($datos_es_ins_basica_3);


$query_ins_basica_4 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
     /*   and  el_activo = '1'  */
     and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_basica_4 = mysqli_query($enlace, $query_ins_basica_4) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_basica_4 = mysqli_num_rows($datos_es_ins_basica_4);


$query_ins_basica_5 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
      /*   and  el_activo = '1'  */
      and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_basica_5 = mysqli_query($enlace, $query_ins_basica_5) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_basica_5 = mysqli_num_rows($datos_es_ins_basica_5);



$query_ins_basica_6 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
     /*   and  el_activo = '1'  */
     and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_basica_6 = mysqli_query($enlace, $query_ins_basica_6) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_basica_6 = mysqli_num_rows($datos_es_ins_basica_6);




/* --------------  */ 




$query_ins_media_1 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
      /*   and  el_activo = '1'  */
      and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_media_1 = mysqli_query($enlace, $query_ins_media_1) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_media_1 = mysqli_num_rows($datos_es_ins_media_1);




$query_ins_media_2 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
      /*   and  el_activo = '1'  */
      and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_media_2 = mysqli_query($enlace, $query_ins_media_2) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_media_2 = mysqli_num_rows($datos_es_ins_media_2);




$query_ins_media_3 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
       /*   and  el_activo = '1'  */
       and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_media_3 = mysqli_query($enlace, $query_ins_media_3) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_media_3 = mysqli_num_rows($datos_es_ins_media_3);


/* --------------  */ 


$query_ins_mediaG_4 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion != '8'
       /*   and  el_activo = '1'  */
       and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_mediaG_4 = mysqli_query($enlace, $query_ins_mediaG_4) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_mediaG_4 = mysqli_num_rows($datos_es_ins_mediaG_4); 




$query_ins_mediaG_5 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion != '8'
      /*   and  el_activo = '1'  */
      and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_mediaG_5 = mysqli_query($enlace, $query_ins_mediaG_5) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_mediaG_5 = mysqli_num_rows($datos_es_ins_mediaG_5); 




$query_ins_mediaG_6 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion != '8'
     /*   and  el_activo = '1'  */
     and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_mediaG_6 = mysqli_query($enlace, $query_ins_mediaG_6) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_mediaG_6 = mysqli_num_rows($datos_es_ins_mediaG_6); 









/* pre inscritos  */



$query_pre_inicial_m = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_inicial_m = mysqli_query($enlace, $query_pre_inicial_m) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_inicial_m = mysqli_num_rows($datos_es_pre_inicial_m); 



$query_pre_inicial_1n = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_inicial_1n = mysqli_query($enlace, $query_pre_inicial_1n) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_inicial_1n = mysqli_num_rows($datos_es_pre_inicial_1n); 



$query_pre_inicial_2n = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_inicial_2n = mysqli_query($enlace, $query_pre_inicial_2n) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_inicial_2n = mysqli_num_rows($datos_es_pre_inicial_2n); 


$query_pre_inicial_3n = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_inicial_3n = mysqli_query($enlace, $query_pre_inicial_3n) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_inicial_3n = mysqli_num_rows($datos_es_pre_inicial_3n); 







/* --------------  */ 



$query_pre_basica_1 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_basica_1 = mysqli_query($enlace, $query_pre_basica_1) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_basica_1 = mysqli_num_rows($datos_es_pre_basica_1); 




$query_pre_basica_2 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_basica_2 = mysqli_query($enlace, $query_pre_basica_2) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_basica_2 = mysqli_num_rows($datos_es_pre_basica_2);



$query_pre_basica_3 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_basica_3 = mysqli_query($enlace, $query_pre_basica_3) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_basica_3 = mysqli_num_rows($datos_es_pre_basica_3);


$query_pre_basica_4 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_basica_4 = mysqli_query($enlace, $query_pre_basica_4) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_basica_4 = mysqli_num_rows($datos_es_pre_basica_4);


$query_pre_basica_5 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_basica_5 = mysqli_query($enlace, $query_pre_basica_5) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_basica_5 = mysqli_num_rows($datos_es_pre_basica_5);



$query_pre_basica_6 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_basica_6 = mysqli_query($enlace, $query_pre_basica_6) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_basica_6 = mysqli_num_rows($datos_es_pre_basica_6);




/* --------------  */ 




$query_pre_media_1 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_media_1 = mysqli_query($enlace, $query_pre_media_1) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_media_1 = mysqli_num_rows($datos_es_pre_media_1);




$query_pre_media_2 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_media_2 = mysqli_query($enlace, $query_pre_media_2) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_media_2 = mysqli_num_rows($datos_es_pre_media_2);




$query_pre_media_3 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_media_3 = mysqli_query($enlace, $query_pre_media_3) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_media_3 = mysqli_num_rows($datos_es_pre_media_3);


/* --------------  */ 


$query_pre_mediaG_4 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_mediaG_4 = mysqli_query($enlace, $query_pre_mediaG_4) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_mediaG_4 = mysqli_num_rows($datos_es_pre_mediaG_4); 




$query_pre_mediaG_5 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_mediaG_5 = mysqli_query($enlace, $query_pre_mediaG_5) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_mediaG_5 = mysqli_num_rows($datos_es_pre_mediaG_5); 




$query_pre_mediaG_6 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_mediaG_6 = mysqli_query($enlace, $query_pre_mediaG_6) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_mediaG_6 = mysqli_num_rows($datos_es_pre_mediaG_6); 






// no inscritos

$query_no_inicial_m = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '52'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_inicial_m = mysqli_query($enlace, $query_no_inicial_m) or die(mysqli_error());
$totalRows_datos_estudiantes_no_inicial_m = mysqli_num_rows($datos_es_no_inicial_m); 



$query_no_inicial_1n = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '54'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_inicial_1n = mysqli_query($enlace, $query_no_inicial_1n) or die(mysqli_error());
$totalRows_datos_estudiantes_no_inicial_1n = mysqli_num_rows($datos_es_no_inicial_1n); 



$query_no_inicial_2n = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '55'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_inicial_2n = mysqli_query($enlace, $query_no_inicial_2n) or die(mysqli_error());
$totalRows_datos_estudiantes_no_inicial_2n = mysqli_num_rows($datos_es_no_inicial_2n); 


$query_no_inicial_3n = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '56'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_inicial_3n = mysqli_query($enlace, $query_no_inicial_3n) or die(mysqli_error());
$totalRows_datos_estudiantes_no_inicial_3n = mysqli_num_rows($datos_es_no_inicial_3n); 







/* --------------  */ 



$query_no_basica_1 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '35'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_basica_1 = mysqli_query($enlace, $query_no_basica_1) or die(mysqli_error());
$totalRows_datos_estudiantes_no_basica_1 = mysqli_num_rows($datos_es_no_basica_1); 




$query_no_basica_2 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '36'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_basica_2 = mysqli_query($enlace, $query_no_basica_2) or die(mysqli_error());
$totalRows_datos_estudiantes_no_basica_2 = mysqli_num_rows($datos_es_no_basica_2);



$query_no_basica_3 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '37'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_basica_3 = mysqli_query($enlace, $query_no_basica_3) or die(mysqli_error());
$totalRows_datos_estudiantes_no_basica_3 = mysqli_num_rows($datos_es_no_basica_3);


$query_no_basica_4 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '38'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_basica_4 = mysqli_query($enlace, $query_no_basica_4) or die(mysqli_error());
$totalRows_datos_estudiantes_no_basica_4 = mysqli_num_rows($datos_es_no_basica_4);


$query_no_basica_5 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '40'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_basica_5 = mysqli_query($enlace, $query_no_basica_5) or die(mysqli_error());
$totalRows_datos_estudiantes_no_basica_5 = mysqli_num_rows($datos_es_no_basica_5);



$query_no_basica_6 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '41'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_basica_6 = mysqli_query($enlace, $query_no_basica_6) or die(mysqli_error());
$totalRows_datos_estudiantes_no_basica_6 = mysqli_num_rows($datos_es_no_basica_6);




/* --------------  */ 




$query_no_media_1 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '42'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_media_1 = mysqli_query($enlace, $query_no_media_1) or die(mysqli_error());
$totalRows_datos_estudiantes_no_media_1 = mysqli_num_rows($datos_es_no_media_1);




$query_no_media_2 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '43'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_media_2 = mysqli_query($enlace, $query_no_media_2) or die(mysqli_error());
$totalRows_datos_estudiantes_no_media_2 = mysqli_num_rows($datos_es_no_media_2);




$query_no_media_3 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual  
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '44'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_media_3 = mysqli_query($enlace, $query_no_media_3) or die(mysqli_error());
$totalRows_datos_estudiantes_no_media_3 = mysqli_num_rows($datos_es_no_media_3);


/* --------------  */ 


$query_no_mediaG_4 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '45'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_mediaG_4 = mysqli_query($enlace, $query_no_mediaG_4) or die(mysqli_error());
$totalRows_datos_estudiantes_no_mediaG_4 = mysqli_num_rows($datos_es_no_mediaG_4); 




$query_no_mediaG_5 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '46'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_mediaG_5 = mysqli_query($enlace, $query_no_mediaG_5) or die(mysqli_error());
$totalRows_datos_estudiantes_no_mediaG_5 = mysqli_num_rows($datos_es_no_mediaG_5); 




$query_no_mediaG_6 = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$respuesta_per_anterior_gg'
         and  grados.id_grado = '53'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_no_mediaG_6 = mysqli_query($enlace, $query_no_mediaG_6) or die(mysqli_error());
$totalRows_datos_estudiantes_no_mediaG_6 = mysqli_num_rows($datos_es_no_mediaG_6); 



