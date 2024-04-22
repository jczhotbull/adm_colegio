<?php
// inscritos

/*
$query_ins_inicial_mr = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud  
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_inicial_mr = mysqli_query($enlace, $query_ins_inicial_mr) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_inicial_mr = mysqli_num_rows($datos_es_ins_inicial_mr); */



$query_ins_inicial_1nr = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud 
         and  id_seccion != '8'
       /*   and  el_activo = '1'  */
       and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'
        and reg_estudiantes.regular = '1'   
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_inicial_1nr = mysqli_query($enlace, $query_ins_inicial_1nr) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_inicial_1nr = mysqli_num_rows($datos_es_ins_inicial_1nr); 



$query_ins_inicial_2nr = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud  
         and  id_seccion != '8'
      /*   and  el_activo = '1'  */
      and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'
        and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_inicial_2nr = mysqli_query($enlace, $query_ins_inicial_2nr) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_inicial_2nr = mysqli_num_rows($datos_es_ins_inicial_2nr); 


$query_ins_inicial_3nr = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud 
         and  id_seccion != '8'
       /*   and  el_activo = '1'  */
       and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_inicial_3nr = mysqli_query($enlace, $query_ins_inicial_3nr) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_inicial_3nr = mysqli_num_rows($datos_es_ins_inicial_3nr); 







/* --------------  */ 



$query_ins_basica_1r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud   
         and  id_seccion != '8'
      /*   and  el_activo = '1'  */
      and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'
        and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_basica_1r = mysqli_query($enlace, $query_ins_basica_1r) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_basica_1r = mysqli_num_rows($datos_es_ins_basica_1r); 




$query_ins_basica_2r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud   
         and  id_seccion != '8'
      /*   and  el_activo = '1'  */
      and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'
        and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_basica_2r = mysqli_query($enlace, $query_ins_basica_2r) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_basica_2r = mysqli_num_rows($datos_es_ins_basica_2r);



$query_ins_basica_3r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud  
         and  id_seccion != '8'
        /*   and  el_activo = '1'  */
        and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'
        and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_basica_3r = mysqli_query($enlace, $query_ins_basica_3r) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_basica_3r = mysqli_num_rows($datos_es_ins_basica_3r);


$query_ins_basica_4r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud  
         and  id_seccion != '8'
        /*   and  el_activo = '1'  */
and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_basica_4r = mysqli_query($enlace, $query_ins_basica_4r) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_basica_4r = mysqli_num_rows($datos_es_ins_basica_4r);


$query_ins_basica_5r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud   
         and  id_seccion != '8'
        /*   and  el_activo = '1'  */
        and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'
        and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_basica_5r = mysqli_query($enlace, $query_ins_basica_5r) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_basica_5r = mysqli_num_rows($datos_es_ins_basica_5r);



$query_ins_basica_6r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud   
         and  id_seccion != '8'
        /*   and  el_activo = '1'  */
        and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'
        and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_basica_6r = mysqli_query($enlace, $query_ins_basica_6r) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_basica_6r = mysqli_num_rows($datos_es_ins_basica_6r);




/* --------------  */ 




$query_ins_media_1r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud  
         and  id_seccion != '8'
        /*   and  el_activo = '1'  */
        and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'
        and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_media_1r = mysqli_query($enlace, $query_ins_media_1r) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_media_1r = mysqli_num_rows($datos_es_ins_media_1r);




$query_ins_media_2r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud  
         and  id_seccion != '8'
         /*   and  el_activo = '1'  */
         and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'
        and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_media_2r = mysqli_query($enlace, $query_ins_media_2r) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_media_2r = mysqli_num_rows($datos_es_ins_media_2r);




$query_ins_media_3r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud  
         and  id_seccion != '8'
        /*   and  el_activo = '1'  */
        and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'
        and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_media_3r = mysqli_query($enlace, $query_ins_media_3r) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_media_3r = mysqli_num_rows($datos_es_ins_media_3r);


/* --------------  */ 


$query_ins_mediaG_4r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud 
         and  id_seccion != '8'
        /*   and  el_activo = '1'  */
        and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'
        and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_mediaG_4r = mysqli_query($enlace, $query_ins_mediaG_4r) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_mediaG_4r = mysqli_num_rows($datos_es_ins_mediaG_4r); 




$query_ins_mediaG_5r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud 
         and  id_seccion != '8'
        /*   and  el_activo = '1'  */
        and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'
        and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_mediaG_5r = mysqli_query($enlace, $query_ins_mediaG_5r) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_mediaG_5r = mysqli_num_rows($datos_es_ins_mediaG_5r); 




$query_ins_mediaG_6r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud 
         and  id_seccion != '8'
        /*   and  el_activo = '1'  */
        and  fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'
        and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_ins_mediaG_6r = mysqli_query($enlace, $query_ins_mediaG_6r) or die(mysqli_error());
$totalRows_datos_estudiantes_ins_mediaG_6r = mysqli_num_rows($datos_es_ins_mediaG_6r); 









/* pre inscritos  */


/*
$query_pre_inicial_mr = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_inicial_mr = mysqli_query($enlace, $query_pre_inicial_mr) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_inicial_mr = mysqli_num_rows($datos_es_pre_inicial_mr);   */



$query_pre_inicial_1nr = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_inicial_1nr = mysqli_query($enlace, $query_pre_inicial_1nr) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_inicial_1nr = mysqli_num_rows($datos_es_pre_inicial_1nr); 



$query_pre_inicial_2nr = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_inicial_2nr = mysqli_query($enlace, $query_pre_inicial_2nr) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_inicial_2nr = mysqli_num_rows($datos_es_pre_inicial_2nr); 


$query_pre_inicial_3nr = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_inicial_3nr = mysqli_query($enlace, $query_pre_inicial_3nr) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_inicial_3nr = mysqli_num_rows($datos_es_pre_inicial_3nr); 







/* --------------  */ 



$query_pre_basica_1r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud   
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_basica_1r = mysqli_query($enlace, $query_pre_basica_1r) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_basica_1r = mysqli_num_rows($datos_es_pre_basica_1r); 




$query_pre_basica_2r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud   
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'
        and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_basica_2r = mysqli_query($enlace, $query_pre_basica_2r) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_basica_2r = mysqli_num_rows($datos_es_pre_basica_2r);



$query_pre_basica_3r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_basica_3r = mysqli_query($enlace, $query_pre_basica_3r) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_basica_3r = mysqli_num_rows($datos_es_pre_basica_3r);


$query_pre_basica_4r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud   
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_basica_4r = mysqli_query($enlace, $query_pre_basica_4r) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_basica_4r = mysqli_num_rows($datos_es_pre_basica_4r);


$query_pre_basica_5r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud   
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'
        and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_basica_5r = mysqli_query($enlace, $query_pre_basica_5r) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_basica_5r = mysqli_num_rows($datos_es_pre_basica_5r);



$query_pre_basica_6r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud   
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_basica_6r = mysqli_query($enlace, $query_pre_basica_6r) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_basica_6r = mysqli_num_rows($datos_es_pre_basica_6r);




/* --------------  */ 




$query_pre_media_1r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud   
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_media_1r = mysqli_query($enlace, $query_pre_media_1r) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_media_1r = mysqli_num_rows($datos_es_pre_media_1r);




$query_pre_media_2r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud   
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_media_2r = mysqli_query($enlace, $query_pre_media_2r) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_media_2r = mysqli_num_rows($datos_es_pre_media_2r);




$query_pre_media_3r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud  
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_media_3r = mysqli_query($enlace, $query_pre_media_3r) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_media_3r = mysqli_num_rows($datos_es_pre_media_3r);


/* --------------  */ 


$query_pre_mediaG_4r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud 
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_mediaG_4r = mysqli_query($enlace, $query_pre_mediaG_4r) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_mediaG_4r = mysqli_num_rows($datos_es_pre_mediaG_4r); 




$query_pre_mediaG_5r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud 
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_mediaG_5r = mysqli_query($enlace, $query_pre_mediaG_5r) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_mediaG_5r = mysqli_num_rows($datos_es_pre_mediaG_5r); 




$query_pre_mediaG_6r = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estu_sobre, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estu_sobre.id_estud = reg_estudiantes.id_estud 
         and  id_seccion = '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'
         and reg_estudiantes.regular = '1'
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_es_pre_mediaG_6r = mysqli_query($enlace, $query_pre_mediaG_6r) or die(mysqli_error());
$totalRows_datos_estudiantes_pre_mediaG_6r = mysqli_num_rows($datos_es_pre_mediaG_6r); 



