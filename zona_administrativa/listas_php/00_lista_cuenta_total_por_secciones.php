<?php


// grado m

$query_gradom_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_sa_inscrito = mysqli_query($enlace, $query_gradom_sa_inscrito) or die(mysqli_error());
$totalRows_gradom_sa_inscrito = mysqli_num_rows($datos_gradom_sa_inscrito); 


$query_gradom_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_sa_inscritof = mysqli_query($enlace, $query_gradom_sa_inscritof) or die(mysqli_error());
$totalRows_gradom_sa_inscritof = mysqli_num_rows($datos_gradom_sa_inscritof); 

$totalRows_gradom_sa_inscritom = $totalRows_gradom_sa_inscrito - $totalRows_gradom_sa_inscritof;



$query_gradom_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_sb_inscrito = mysqli_query($enlace, $query_gradom_sb_inscrito) or die(mysqli_error());
$totalRows_gradom_sb_inscrito = mysqli_num_rows($datos_gradom_sb_inscrito); 


$query_gradom_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_sb_inscritof = mysqli_query($enlace, $query_gradom_sb_inscritof) or die(mysqli_error());
$totalRows_gradom_sb_inscritof = mysqli_num_rows($datos_gradom_sb_inscritof); 

$totalRows_gradom_sb_inscritom = $totalRows_gradom_sb_inscrito - $totalRows_gradom_sb_inscritof;



$query_gradom_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_sc_inscrito = mysqli_query($enlace, $query_gradom_sc_inscrito) or die(mysqli_error());
$totalRows_gradom_sc_inscrito = mysqli_num_rows($datos_gradom_sc_inscrito); 


$query_gradom_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_sc_inscritof = mysqli_query($enlace, $query_gradom_sc_inscritof) or die(mysqli_error());
$totalRows_gradom_sc_inscritof = mysqli_num_rows($datos_gradom_sc_inscritof); 

$totalRows_gradom_sc_inscritom = $totalRows_gradom_sc_inscrito - $totalRows_gradom_sc_inscritof;


$query_gradom_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_sd_inscrito = mysqli_query($enlace, $query_gradom_sd_inscrito) or die(mysqli_error());
$totalRows_gradom_sd_inscrito = mysqli_num_rows($datos_gradom_sd_inscrito); 


$query_gradom_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_sd_inscritof = mysqli_query($enlace, $query_gradom_sd_inscritof) or die(mysqli_error());
$totalRows_gradom_sd_inscritof = mysqli_num_rows($datos_gradom_sd_inscritof); 

$totalRows_gradom_sd_inscritom = $totalRows_gradom_sd_inscrito - $totalRows_gradom_sd_inscritof;


$query_gradom_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_se_inscrito = mysqli_query($enlace, $query_gradom_se_inscrito) or die(mysqli_error());
$totalRows_gradom_se_inscrito = mysqli_num_rows($datos_gradom_se_inscrito); 


$query_gradom_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_se_inscritof = mysqli_query($enlace, $query_gradom_se_inscritof) or die(mysqli_error());
$totalRows_gradom_se_inscritof = mysqli_num_rows($datos_gradom_se_inscritof); 

$totalRows_gradom_se_inscritom = $totalRows_gradom_se_inscrito - $totalRows_gradom_se_inscritof;


$query_gradom_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_sf_inscrito = mysqli_query($enlace, $query_gradom_sf_inscrito) or die(mysqli_error());
$totalRows_gradom_sf_inscrito = mysqli_num_rows($datos_gradom_sf_inscrito); 


$query_gradom_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_sf_inscritof = mysqli_query($enlace, $query_gradom_sf_inscritof) or die(mysqli_error());
$totalRows_gradom_sf_inscritof = mysqli_num_rows($datos_gradom_sf_inscritof); 

$totalRows_gradom_sf_inscritom = $totalRows_gradom_sf_inscrito - $totalRows_gradom_sf_inscritof;



$query_gradom_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_sg_inscrito = mysqli_query($enlace, $query_gradom_sg_inscrito) or die(mysqli_error());
$totalRows_gradom_sg_inscrito = mysqli_num_rows($datos_gradom_sg_inscrito); 


$query_gradom_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_sg_inscritof = mysqli_query($enlace, $query_gradom_sg_inscritof) or die(mysqli_error());
$totalRows_gradom_sg_inscritof = mysqli_num_rows($datos_gradom_sg_inscritof); 

$totalRows_gradom_sg_inscritom = $totalRows_gradom_sg_inscrito - $totalRows_gradom_sg_inscritof;


$query_gradom_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_su_inscrito = mysqli_query($enlace, $query_gradom_su_inscrito) or die(mysqli_error());
$totalRows_gradom_su_inscrito = mysqli_num_rows($datos_gradom_su_inscrito); 


$query_gradom_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_su_inscritof = mysqli_query($enlace, $query_gradom_su_inscritof) or die(mysqli_error());
$totalRows_gradom_su_inscritof = mysqli_num_rows($datos_gradom_su_inscritof); 

$totalRows_gradom_su_inscritom = $totalRows_gradom_su_inscrito - $totalRows_gradom_su_inscritof;




$query_gradom_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradom_sx_inscrito = mysqli_query($enlace, $query_gradom_sx_inscrito) or die(mysqli_error());
$totalRows_gradom_sx_inscrito = mysqli_num_rows($datos_gradom_sx_inscrito); 







// grado nivel 1

$query_gradon1_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_sa_inscrito = mysqli_query($enlace, $query_gradon1_sa_inscrito) or die(mysqli_error());
$totalRows_gradon1_sa_inscrito = mysqli_num_rows($datos_gradon1_sa_inscrito); 


$query_gradon1_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_sa_inscritof = mysqli_query($enlace, $query_gradon1_sa_inscritof) or die(mysqli_error());
$totalRows_gradon1_sa_inscritof = mysqli_num_rows($datos_gradon1_sa_inscritof); 

$totalRows_gradon1_sa_inscritom = $totalRows_gradon1_sa_inscrito - $totalRows_gradon1_sa_inscritof;



$query_gradon1_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_sb_inscrito = mysqli_query($enlace, $query_gradon1_sb_inscrito) or die(mysqli_error());
$totalRows_gradon1_sb_inscrito = mysqli_num_rows($datos_gradon1_sb_inscrito); 


$query_gradon1_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_sb_inscritof = mysqli_query($enlace, $query_gradon1_sb_inscritof) or die(mysqli_error());
$totalRows_gradon1_sb_inscritof = mysqli_num_rows($datos_gradon1_sb_inscritof); 

$totalRows_gradon1_sb_inscritom = $totalRows_gradon1_sb_inscrito - $totalRows_gradon1_sb_inscritof;



$query_gradon1_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_sc_inscrito = mysqli_query($enlace, $query_gradon1_sc_inscrito) or die(mysqli_error());
$totalRows_gradon1_sc_inscrito = mysqli_num_rows($datos_gradon1_sc_inscrito); 


$query_gradon1_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_sc_inscritof = mysqli_query($enlace, $query_gradon1_sc_inscritof) or die(mysqli_error());
$totalRows_gradon1_sc_inscritof = mysqli_num_rows($datos_gradon1_sc_inscritof); 

$totalRows_gradon1_sc_inscritom = $totalRows_gradon1_sc_inscrito - $totalRows_gradon1_sc_inscritof;


$query_gradon1_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_sd_inscrito = mysqli_query($enlace, $query_gradon1_sd_inscrito) or die(mysqli_error());
$totalRows_gradon1_sd_inscrito = mysqli_num_rows($datos_gradon1_sd_inscrito); 



$query_gradon1_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_sd_inscritof = mysqli_query($enlace, $query_gradon1_sd_inscritof) or die(mysqli_error());
$totalRows_gradon1_sd_inscritof = mysqli_num_rows($datos_gradon1_sd_inscritof); 

$totalRows_gradon1_sd_inscritom = $totalRows_gradon1_sd_inscrito - $totalRows_gradon1_sd_inscritof;


$query_gradon1_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_se_inscrito = mysqli_query($enlace, $query_gradon1_se_inscrito) or die(mysqli_error());
$totalRows_gradon1_se_inscrito = mysqli_num_rows($datos_gradon1_se_inscrito); 


$query_gradon1_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_se_inscritof = mysqli_query($enlace, $query_gradon1_se_inscritof) or die(mysqli_error());
$totalRows_gradon1_se_inscritof = mysqli_num_rows($datos_gradon1_se_inscritof); 

$totalRows_gradon1_se_inscritom = $totalRows_gradon1_se_inscrito - $totalRows_gradon1_se_inscritof;


$query_gradon1_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_sf_inscrito = mysqli_query($enlace, $query_gradon1_sf_inscrito) or die(mysqli_error());
$totalRows_gradon1_sf_inscrito = mysqli_num_rows($datos_gradon1_sf_inscrito); 

$query_gradon1_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_sf_inscritof = mysqli_query($enlace, $query_gradon1_sf_inscritof) or die(mysqli_error());
$totalRows_gradon1_sf_inscritof = mysqli_num_rows($datos_gradon1_sf_inscritof); 

$totalRows_gradon1_sf_inscritom = $totalRows_gradon1_sf_inscrito - $totalRows_gradon1_sf_inscritof;



$query_gradon1_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_sg_inscrito = mysqli_query($enlace, $query_gradon1_sg_inscrito) or die(mysqli_error());
$totalRows_gradon1_sg_inscrito = mysqli_num_rows($datos_gradon1_sg_inscrito); 


$query_gradon1_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_sg_inscritof = mysqli_query($enlace, $query_gradon1_sg_inscritof) or die(mysqli_error());
$totalRows_gradon1_sg_inscritof = mysqli_num_rows($datos_gradon1_sg_inscritof); 

$totalRows_gradon1_sg_inscritom = $totalRows_gradon1_sg_inscrito - $totalRows_gradon1_sg_inscritof;


$query_gradon1_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_su_inscrito = mysqli_query($enlace, $query_gradon1_su_inscrito) or die(mysqli_error());
$totalRows_gradon1_su_inscrito = mysqli_num_rows($datos_gradon1_su_inscrito); 


$query_gradon1_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_su_inscritof = mysqli_query($enlace, $query_gradon1_su_inscritof) or die(mysqli_error());
$totalRows_gradon1_su_inscritof = mysqli_num_rows($datos_gradon1_su_inscritof); 

$totalRows_gradon1_su_inscritom = $totalRows_gradon1_su_inscrito - $totalRows_gradon1_su_inscritof;



$query_gradon1_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon1_sx_inscrito = mysqli_query($enlace, $query_gradon1_sx_inscrito) or die(mysqli_error());
$totalRows_gradon1_sx_inscrito = mysqli_num_rows($datos_gradon1_sx_inscrito); 




// grado nivel 2

$query_gradon2_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_sa_inscrito = mysqli_query($enlace, $query_gradon2_sa_inscrito) or die(mysqli_error());
$totalRows_gradon2_sa_inscrito = mysqli_num_rows($datos_gradon2_sa_inscrito); 



$query_gradon2_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_sa_inscritof = mysqli_query($enlace, $query_gradon2_sa_inscritof) or die(mysqli_error());
$totalRows_gradon2_sa_inscritof = mysqli_num_rows($datos_gradon2_sa_inscritof); 

$totalRows_gradon2_sa_inscritom = $totalRows_gradon2_sa_inscrito - $totalRows_gradon2_sa_inscritof;



$query_gradon2_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_sb_inscrito = mysqli_query($enlace, $query_gradon2_sb_inscrito) or die(mysqli_error());
$totalRows_gradon2_sb_inscrito = mysqli_num_rows($datos_gradon2_sb_inscrito); 


$query_gradon2_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_sb_inscritof = mysqli_query($enlace, $query_gradon2_sb_inscritof) or die(mysqli_error());
$totalRows_gradon2_sb_inscritof = mysqli_num_rows($datos_gradon2_sb_inscritof); 

$totalRows_gradon2_sb_inscritom = $totalRows_gradon2_sb_inscrito - $totalRows_gradon2_sb_inscritof;



$query_gradon2_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_sc_inscrito = mysqli_query($enlace, $query_gradon2_sc_inscrito) or die(mysqli_error());
$totalRows_gradon2_sc_inscrito = mysqli_num_rows($datos_gradon2_sc_inscrito); 


$query_gradon2_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_sc_inscritof = mysqli_query($enlace, $query_gradon2_sc_inscritof) or die(mysqli_error());
$totalRows_gradon2_sc_inscritof = mysqli_num_rows($datos_gradon2_sc_inscritof); 

$totalRows_gradon2_sc_inscritom = $totalRows_gradon2_sc_inscrito - $totalRows_gradon2_sc_inscritof;


$query_gradon2_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_sd_inscrito = mysqli_query($enlace, $query_gradon2_sd_inscrito) or die(mysqli_error());
$totalRows_gradon2_sd_inscrito = mysqli_num_rows($datos_gradon2_sd_inscrito); 


$query_gradon2_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_sd_inscritof = mysqli_query($enlace, $query_gradon2_sd_inscritof) or die(mysqli_error());
$totalRows_gradon2_sd_inscritof = mysqli_num_rows($datos_gradon2_sd_inscritof); 

$totalRows_gradon2_sd_inscritom = $totalRows_gradon2_sd_inscrito - $totalRows_gradon2_sd_inscritof;


$query_gradon2_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_se_inscrito = mysqli_query($enlace, $query_gradon2_se_inscrito) or die(mysqli_error());
$totalRows_gradon2_se_inscrito = mysqli_num_rows($datos_gradon2_se_inscrito); 



$query_gradon2_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_se_inscritof = mysqli_query($enlace, $query_gradon2_se_inscritof) or die(mysqli_error());
$totalRows_gradon2_se_inscritof = mysqli_num_rows($datos_gradon2_se_inscritof); 

$totalRows_gradon2_se_inscritom = $totalRows_gradon2_se_inscrito - $totalRows_gradon2_se_inscritof;


$query_gradon2_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_sf_inscrito = mysqli_query($enlace, $query_gradon2_sf_inscrito) or die(mysqli_error());
$totalRows_gradon2_sf_inscrito = mysqli_num_rows($datos_gradon2_sf_inscrito); 


$query_gradon2_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_sf_inscritof = mysqli_query($enlace, $query_gradon2_sf_inscritof) or die(mysqli_error());
$totalRows_gradon2_sf_inscritof = mysqli_num_rows($datos_gradon2_sf_inscritof); 

$totalRows_gradon2_sf_inscritom = $totalRows_gradon2_sf_inscrito - $totalRows_gradon2_sf_inscritof;



$query_gradon2_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_sg_inscrito = mysqli_query($enlace, $query_gradon2_sg_inscrito) or die(mysqli_error());
$totalRows_gradon2_sg_inscrito = mysqli_num_rows($datos_gradon2_sg_inscrito); 


$query_gradon2_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_sg_inscritof = mysqli_query($enlace, $query_gradon2_sg_inscritof) or die(mysqli_error());
$totalRows_gradon2_sg_inscritof = mysqli_num_rows($datos_gradon2_sg_inscritof); 

$totalRows_gradon2_sg_inscritom = $totalRows_gradon2_sg_inscrito - $totalRows_gradon2_sg_inscritof;


$query_gradon2_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_su_inscrito = mysqli_query($enlace, $query_gradon2_su_inscrito) or die(mysqli_error());
$totalRows_gradon2_su_inscrito = mysqli_num_rows($datos_gradon2_su_inscrito); 


$query_gradon2_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_su_inscritof = mysqli_query($enlace, $query_gradon2_su_inscritof) or die(mysqli_error());
$totalRows_gradon2_su_inscritof = mysqli_num_rows($datos_gradon2_su_inscritof); 

$totalRows_gradon2_su_inscritom = $totalRows_gradon2_su_inscrito - $totalRows_gradon2_su_inscritof;







$query_gradon2_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon2_sx_inscrito = mysqli_query($enlace, $query_gradon2_sx_inscrito) or die(mysqli_error());
$totalRows_gradon2_sx_inscrito = mysqli_num_rows($datos_gradon2_sx_inscrito); 




// grado nivel 3

$query_gradon3_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_sa_inscrito = mysqli_query($enlace, $query_gradon3_sa_inscrito) or die(mysqli_error());
$totalRows_gradon3_sa_inscrito = mysqli_num_rows($datos_gradon3_sa_inscrito); 

$query_gradon3_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_sa_inscritof = mysqli_query($enlace, $query_gradon3_sa_inscritof) or die(mysqli_error());
$totalRows_gradon3_sa_inscritof = mysqli_num_rows($datos_gradon3_sa_inscritof); 

$totalRows_gradon3_sa_inscritom = $totalRows_gradon3_sa_inscrito - $totalRows_gradon3_sa_inscritof;



$query_gradon3_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_sb_inscrito = mysqli_query($enlace, $query_gradon3_sb_inscrito) or die(mysqli_error());
$totalRows_gradon3_sb_inscrito = mysqli_num_rows($datos_gradon3_sb_inscrito); 


$query_gradon3_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_sb_inscritof = mysqli_query($enlace, $query_gradon3_sb_inscritof) or die(mysqli_error());
$totalRows_gradon3_sb_inscritof = mysqli_num_rows($datos_gradon3_sb_inscritof); 

$totalRows_gradon3_sb_inscritom = $totalRows_gradon3_sb_inscrito - $totalRows_gradon3_sb_inscritof;



$query_gradon3_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_sc_inscrito = mysqli_query($enlace, $query_gradon3_sc_inscrito) or die(mysqli_error());
$totalRows_gradon3_sc_inscrito = mysqli_num_rows($datos_gradon3_sc_inscrito); 


$query_gradon3_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_sc_inscritof = mysqli_query($enlace, $query_gradon3_sc_inscritof) or die(mysqli_error());
$totalRows_gradon3_sc_inscritof = mysqli_num_rows($datos_gradon3_sc_inscritof); 

$totalRows_gradon3_sc_inscritom = $totalRows_gradon3_sc_inscrito - $totalRows_gradon3_sc_inscritof;


$query_gradon3_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_sd_inscrito = mysqli_query($enlace, $query_gradon3_sd_inscrito) or die(mysqli_error());
$totalRows_gradon3_sd_inscrito = mysqli_num_rows($datos_gradon3_sd_inscrito); 


$query_gradon3_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_sd_inscritof = mysqli_query($enlace, $query_gradon3_sd_inscritof) or die(mysqli_error());
$totalRows_gradon3_sd_inscritof = mysqli_num_rows($datos_gradon3_sd_inscritof); 

$totalRows_gradon3_sd_inscritom = $totalRows_gradon3_sd_inscrito - $totalRows_gradon3_sd_inscritof;


$query_gradon3_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_se_inscrito = mysqli_query($enlace, $query_gradon3_se_inscrito) or die(mysqli_error());
$totalRows_gradon3_se_inscrito = mysqli_num_rows($datos_gradon3_se_inscrito);


$query_gradon3_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_se_inscritof = mysqli_query($enlace, $query_gradon3_se_inscritof) or die(mysqli_error());
$totalRows_gradon3_se_inscritof = mysqli_num_rows($datos_gradon3_se_inscritof); 

$totalRows_gradon3_se_inscritom = $totalRows_gradon3_se_inscrito - $totalRows_gradon3_se_inscritof; 


$query_gradon3_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_sf_inscrito = mysqli_query($enlace, $query_gradon3_sf_inscrito) or die(mysqli_error());
$totalRows_gradon3_sf_inscrito = mysqli_num_rows($datos_gradon3_sf_inscrito); 



$query_gradon3_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_sf_inscritof = mysqli_query($enlace, $query_gradon3_sf_inscritof) or die(mysqli_error());
$totalRows_gradon3_sf_inscritof = mysqli_num_rows($datos_gradon3_sf_inscritof); 

$totalRows_gradon3_sf_inscritom = $totalRows_gradon3_sf_inscrito - $totalRows_gradon3_sf_inscritof; 


$query_gradon3_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_sg_inscrito = mysqli_query($enlace, $query_gradon3_sg_inscrito) or die(mysqli_error());
$totalRows_gradon3_sg_inscrito = mysqli_num_rows($datos_gradon3_sg_inscrito); 



$query_gradon3_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_sg_inscritof = mysqli_query($enlace, $query_gradon3_sg_inscritof) or die(mysqli_error());
$totalRows_gradon3_sg_inscritof = mysqli_num_rows($datos_gradon3_sg_inscritof); 

$totalRows_gradon3_sg_inscritom = $totalRows_gradon3_sg_inscrito - $totalRows_gradon3_sg_inscritof; 


$query_gradon3_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_su_inscrito = mysqli_query($enlace, $query_gradon3_su_inscrito) or die(mysqli_error());
$totalRows_gradon3_su_inscrito = mysqli_num_rows($datos_gradon3_su_inscrito); 


$query_gradon3_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_su_inscritof = mysqli_query($enlace, $query_gradon3_su_inscritof) or die(mysqli_error());
$totalRows_gradon3_su_inscritof = mysqli_num_rows($datos_gradon3_su_inscritof); 

$totalRows_gradon3_su_inscritom = $totalRows_gradon3_su_inscrito - $totalRows_gradon3_su_inscritof; 



/* seccion incorrecta */

$query_gradon3_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradon3_sx_inscrito = mysqli_query($enlace, $query_gradon3_sx_inscrito) or die(mysqli_error());
$totalRows_gradon3_sx_inscrito = mysqli_num_rows($datos_gradon3_sx_inscrito); 






// grado1

$query_grado1_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_sa_inscrito = mysqli_query($enlace, $query_grado1_sa_inscrito) or die(mysqli_error());
$totalRows_grado1_sa_inscrito = mysqli_num_rows($datos_grado1_sa_inscrito); 


$query_grado1_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_sa_inscritof = mysqli_query($enlace, $query_grado1_sa_inscritof) or die(mysqli_error());
$totalRows_grado1_sa_inscritof = mysqli_num_rows($datos_grado1_sa_inscritof); 

$totalRows_grado1_sa_inscritom = $totalRows_grado1_sa_inscrito - $totalRows_grado1_sa_inscritof; 



$query_grado1_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_sb_inscrito = mysqli_query($enlace, $query_grado1_sb_inscrito) or die(mysqli_error());
$totalRows_grado1_sb_inscrito = mysqli_num_rows($datos_grado1_sb_inscrito);


$query_grado1_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_sb_inscritof = mysqli_query($enlace, $query_grado1_sb_inscritof) or die(mysqli_error());
$totalRows_grado1_sb_inscritof = mysqli_num_rows($datos_grado1_sb_inscritof); 

$totalRows_grado1_sb_inscritom = $totalRows_grado1_sb_inscrito - $totalRows_grado1_sb_inscritof;  



$query_grado1_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_sc_inscrito = mysqli_query($enlace, $query_grado1_sc_inscrito) or die(mysqli_error());
$totalRows_grado1_sc_inscrito = mysqli_num_rows($datos_grado1_sc_inscrito); 

$query_grado1_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_sc_inscritof = mysqli_query($enlace, $query_grado1_sc_inscritof) or die(mysqli_error());
$totalRows_grado1_sc_inscritof = mysqli_num_rows($datos_grado1_sc_inscritof); 

$totalRows_grado1_sc_inscritom = $totalRows_grado1_sc_inscrito - $totalRows_grado1_sc_inscritof;  


$query_grado1_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_sd_inscrito = mysqli_query($enlace, $query_grado1_sd_inscrito) or die(mysqli_error());
$totalRows_grado1_sd_inscrito = mysqli_num_rows($datos_grado1_sd_inscrito);


$query_grado1_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_sd_inscritof = mysqli_query($enlace, $query_grado1_sd_inscritof) or die(mysqli_error());
$totalRows_grado1_sd_inscritof = mysqli_num_rows($datos_grado1_sd_inscritof); 

$totalRows_grado1_sd_inscritom = $totalRows_grado1_sd_inscrito - $totalRows_grado1_sd_inscritof;   


$query_grado1_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_se_inscrito = mysqli_query($enlace, $query_grado1_se_inscrito) or die(mysqli_error());
$totalRows_grado1_se_inscrito = mysqli_num_rows($datos_grado1_se_inscrito); 


$query_grado1_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_se_inscritof = mysqli_query($enlace, $query_grado1_se_inscritof) or die(mysqli_error());
$totalRows_grado1_se_inscritof = mysqli_num_rows($datos_grado1_se_inscritof); 

$totalRows_grado1_se_inscritom = $totalRows_grado1_se_inscrito - $totalRows_grado1_se_inscritof;  


$query_grado1_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_sf_inscrito = mysqli_query($enlace, $query_grado1_sf_inscrito) or die(mysqli_error());
$totalRows_grado1_sf_inscrito = mysqli_num_rows($datos_grado1_sf_inscrito); 


$query_grado1_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_sf_inscritof = mysqli_query($enlace, $query_grado1_sf_inscritof) or die(mysqli_error());
$totalRows_grado1_sf_inscritof = mysqli_num_rows($datos_grado1_sf_inscritof); 

$totalRows_grado1_sf_inscritom = $totalRows_grado1_sf_inscrito - $totalRows_grado1_sf_inscritof;  



$query_grado1_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_sg_inscrito = mysqli_query($enlace, $query_grado1_sg_inscrito) or die(mysqli_error());
$totalRows_grado1_sg_inscrito = mysqli_num_rows($datos_grado1_sg_inscrito); 


$query_grado1_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_sg_inscritof = mysqli_query($enlace, $query_grado1_sg_inscritof) or die(mysqli_error());
$totalRows_grado1_sg_inscritof = mysqli_num_rows($datos_grado1_sg_inscritof); 

$totalRows_grado1_sg_inscritom = $totalRows_grado1_sg_inscrito - $totalRows_grado1_sg_inscritof;  

$query_grado1_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_su_inscrito = mysqli_query($enlace, $query_grado1_su_inscrito) or die(mysqli_error());
$totalRows_grado1_su_inscrito = mysqli_num_rows($datos_grado1_su_inscrito); 


$query_grado1_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_su_inscritof = mysqli_query($enlace, $query_grado1_su_inscritof) or die(mysqli_error());
$totalRows_grado1_su_inscritof = mysqli_num_rows($datos_grado1_su_inscritof); 

$totalRows_grado1_su_inscritom = $totalRows_grado1_su_inscrito - $totalRows_grado1_su_inscritof;  






/* seccion incorrecta */

$query_grado1_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_sx_inscrito = mysqli_query($enlace, $query_grado1_sx_inscrito) or die(mysqli_error());
$totalRows_grado1_sx_inscrito = mysqli_num_rows($datos_grado1_sx_inscrito); 






/**** grado 2 ****/



$query_grado2_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_sa_inscrito = mysqli_query($enlace, $query_grado2_sa_inscrito) or die(mysqli_error());
$totalRows_grado2_sa_inscrito = mysqli_num_rows($datos_grado2_sa_inscrito); 



$query_grado2_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_sa_inscritof = mysqli_query($enlace, $query_grado2_sa_inscritof) or die(mysqli_error());
$totalRows_grado2_sa_inscritof = mysqli_num_rows($datos_grado2_sa_inscritof); 

$totalRows_grado2_sa_inscritom = $totalRows_grado2_sa_inscrito - $totalRows_grado2_sa_inscritof;  



$query_grado2_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_sb_inscrito = mysqli_query($enlace, $query_grado2_sb_inscrito) or die(mysqli_error());
$totalRows_grado2_sb_inscrito = mysqli_num_rows($datos_grado2_sb_inscrito); 


$query_grado2_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_sb_inscritof = mysqli_query($enlace, $query_grado2_sb_inscritof) or die(mysqli_error());
$totalRows_grado2_sb_inscritof = mysqli_num_rows($datos_grado2_sb_inscritof); 

$totalRows_grado2_sb_inscritom = $totalRows_grado2_sb_inscrito - $totalRows_grado2_sb_inscritof;  



$query_grado2_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_sc_inscrito = mysqli_query($enlace, $query_grado2_sc_inscrito) or die(mysqli_error());
$totalRows_grado2_sc_inscrito = mysqli_num_rows($datos_grado2_sc_inscrito);


$query_grado2_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_sc_inscritof = mysqli_query($enlace, $query_grado2_sc_inscritof) or die(mysqli_error());
$totalRows_grado2_sc_inscritof = mysqli_num_rows($datos_grado2_sc_inscritof); 

$totalRows_grado2_sc_inscritom = $totalRows_grado2_sc_inscrito - $totalRows_grado2_sc_inscritof;   


$query_grado2_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_sd_inscrito = mysqli_query($enlace, $query_grado2_sd_inscrito) or die(mysqli_error());
$totalRows_grado2_sd_inscrito = mysqli_num_rows($datos_grado2_sd_inscrito); 


$query_grado2_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_sd_inscritof = mysqli_query($enlace, $query_grado2_sd_inscritof) or die(mysqli_error());
$totalRows_grado2_sd_inscritof = mysqli_num_rows($datos_grado2_sd_inscritof); 

$totalRows_grado2_sd_inscritom = $totalRows_grado2_sd_inscrito - $totalRows_grado2_sd_inscritof;  


$query_grado2_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_se_inscrito = mysqli_query($enlace, $query_grado2_se_inscrito) or die(mysqli_error());
$totalRows_grado2_se_inscrito = mysqli_num_rows($datos_grado2_se_inscrito); 





$query_grado2_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_se_inscritof = mysqli_query($enlace, $query_grado2_se_inscritof) or die(mysqli_error());
$totalRows_grado2_se_inscritof = mysqli_num_rows($datos_grado2_se_inscritof); 

$totalRows_grado2_se_inscritom = $totalRows_grado2_se_inscrito - $totalRows_grado2_se_inscritof;  


$query_grado2_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_sf_inscrito = mysqli_query($enlace, $query_grado2_sf_inscrito) or die(mysqli_error());
$totalRows_grado2_sf_inscrito = mysqli_num_rows($datos_grado2_sf_inscrito); 


$query_grado2_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_sf_inscritof = mysqli_query($enlace, $query_grado2_sf_inscritof) or die(mysqli_error());
$totalRows_grado2_sf_inscritof = mysqli_num_rows($datos_grado2_sf_inscritof); 

$totalRows_grado2_sf_inscritom = $totalRows_grado2_sf_inscrito - $totalRows_grado2_sf_inscritof;  



$query_grado2_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_sg_inscrito = mysqli_query($enlace, $query_grado2_sg_inscrito) or die(mysqli_error());
$totalRows_grado2_sg_inscrito = mysqli_num_rows($datos_grado2_sg_inscrito); 


$query_grado2_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_sg_inscritof = mysqli_query($enlace, $query_grado2_sg_inscritof) or die(mysqli_error());
$totalRows_grado2_sg_inscritof = mysqli_num_rows($datos_grado2_sg_inscritof); 

$totalRows_grado2_sg_inscritom = $totalRows_grado2_sg_inscrito - $totalRows_grado2_sg_inscritof;  


$query_grado2_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_su_inscrito = mysqli_query($enlace, $query_grado2_su_inscrito) or die(mysqli_error());
$totalRows_grado2_su_inscrito = mysqli_num_rows($datos_grado2_su_inscrito); 


$query_grado2_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_su_inscritof = mysqli_query($enlace, $query_grado2_su_inscritof) or die(mysqli_error());
$totalRows_grado2_su_inscritof = mysqli_num_rows($datos_grado2_su_inscritof); 

$totalRows_grado2_su_inscritom = $totalRows_grado2_su_inscrito - $totalRows_grado2_su_inscritof;  






/* seccion incorrecta */

$query_grado2_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_sx_inscrito = mysqli_query($enlace, $query_grado2_sx_inscrito) or die(mysqli_error());
$totalRows_grado2_sx_inscrito = mysqli_num_rows($datos_grado2_sx_inscrito); 





/**** grado 3 ****/



$query_grado3_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_sa_inscrito = mysqli_query($enlace, $query_grado3_sa_inscrito) or die(mysqli_error());
$totalRows_grado3_sa_inscrito = mysqli_num_rows($datos_grado3_sa_inscrito); 



$query_grado3_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_sa_inscritof = mysqli_query($enlace, $query_grado3_sa_inscritof) or die(mysqli_error());
$totalRows_grado3_sa_inscritof = mysqli_num_rows($datos_grado3_sa_inscritof); 

$totalRows_grado3_sa_inscritom = $totalRows_grado3_sa_inscrito - $totalRows_grado3_sa_inscritof;  



$query_grado3_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_sb_inscrito = mysqli_query($enlace, $query_grado3_sb_inscrito) or die(mysqli_error());
$totalRows_grado3_sb_inscrito = mysqli_num_rows($datos_grado3_sb_inscrito); 


$query_grado3_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_sb_inscritof = mysqli_query($enlace, $query_grado3_sb_inscritof) or die(mysqli_error());
$totalRows_grado3_sb_inscritof = mysqli_num_rows($datos_grado3_sb_inscritof); 

$totalRows_grado3_sb_inscritom = $totalRows_grado3_sb_inscrito - $totalRows_grado3_sb_inscritof;  



$query_grado3_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_sc_inscrito = mysqli_query($enlace, $query_grado3_sc_inscrito) or die(mysqli_error());
$totalRows_grado3_sc_inscrito = mysqli_num_rows($datos_grado3_sc_inscrito); 

$query_grado3_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_sc_inscritof = mysqli_query($enlace, $query_grado3_sc_inscritof) or die(mysqli_error());
$totalRows_grado3_sc_inscritof = mysqli_num_rows($datos_grado3_sc_inscritof); 

$totalRows_grado3_sc_inscritom = $totalRows_grado3_sc_inscrito - $totalRows_grado3_sc_inscritof;  


$query_grado3_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_sd_inscrito = mysqli_query($enlace, $query_grado3_sd_inscrito) or die(mysqli_error());
$totalRows_grado3_sd_inscrito = mysqli_num_rows($datos_grado3_sd_inscrito); 


$query_grado3_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_sd_inscritof = mysqli_query($enlace, $query_grado3_sd_inscritof) or die(mysqli_error());
$totalRows_grado3_sd_inscritof = mysqli_num_rows($datos_grado3_sd_inscritof); 

$totalRows_grado3_sd_inscritom = $totalRows_grado3_sd_inscrito - $totalRows_grado3_sd_inscritof;  


$query_grado3_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_se_inscrito = mysqli_query($enlace, $query_grado3_se_inscrito) or die(mysqli_error());
$totalRows_grado3_se_inscrito = mysqli_num_rows($datos_grado3_se_inscrito); 


$query_grado3_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_se_inscritof = mysqli_query($enlace, $query_grado3_se_inscritof) or die(mysqli_error());
$totalRows_grado3_se_inscritof = mysqli_num_rows($datos_grado3_se_inscritof); 

$totalRows_grado3_se_inscritom = $totalRows_grado3_se_inscrito - $totalRows_grado3_se_inscritof;  


$query_grado3_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_sf_inscrito = mysqli_query($enlace, $query_grado3_sf_inscrito) or die(mysqli_error());
$totalRows_grado3_sf_inscrito = mysqli_num_rows($datos_grado3_sf_inscrito); 


$query_grado3_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_sf_inscritof = mysqli_query($enlace, $query_grado3_sf_inscritof) or die(mysqli_error());
$totalRows_grado3_sf_inscritof = mysqli_num_rows($datos_grado3_sf_inscritof); 

$totalRows_grado3_sf_inscritom = $totalRows_grado3_sf_inscrito - $totalRows_grado3_sf_inscritof;  



$query_grado3_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_sg_inscrito = mysqli_query($enlace, $query_grado3_sg_inscrito) or die(mysqli_error());
$totalRows_grado3_sg_inscrito = mysqli_num_rows($datos_grado3_sg_inscrito); 

$query_grado3_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_sg_inscritof = mysqli_query($enlace, $query_grado3_sg_inscritof) or die(mysqli_error());
$totalRows_grado3_sg_inscritof = mysqli_num_rows($datos_grado3_sg_inscritof); 

$totalRows_grado3_sg_inscritom = $totalRows_grado3_sg_inscrito - $totalRows_grado3_sg_inscritof;  


$query_grado3_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_su_inscrito = mysqli_query($enlace, $query_grado3_su_inscrito) or die(mysqli_error());
$totalRows_grado3_su_inscrito = mysqli_num_rows($datos_grado3_su_inscrito); 


$query_grado3_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_su_inscritof = mysqli_query($enlace, $query_grado3_su_inscritof) or die(mysqli_error());
$totalRows_grado3_su_inscritof = mysqli_num_rows($datos_grado3_su_inscritof); 

$totalRows_grado3_su_inscritom = $totalRows_grado3_su_inscrito - $totalRows_grado3_su_inscritof;  



/* seccion incorrecta */

$query_grado3_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_sx_inscrito = mysqli_query($enlace, $query_grado3_sx_inscrito) or die(mysqli_error());
$totalRows_grado3_sx_inscrito = mysqli_num_rows($datos_grado3_sx_inscrito); 

/**** grado 4 ****/



$query_grado4_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_sa_inscrito = mysqli_query($enlace, $query_grado4_sa_inscrito) or die(mysqli_error());
$totalRows_grado4_sa_inscrito = mysqli_num_rows($datos_grado4_sa_inscrito); 


$query_grado4_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_sa_inscritof = mysqli_query($enlace, $query_grado4_sa_inscritof) or die(mysqli_error());
$totalRows_grado4_sa_inscritof = mysqli_num_rows($datos_grado4_sa_inscritof); 

$totalRows_grado4_sa_inscritom = $totalRows_grado4_sa_inscrito - $totalRows_grado4_sa_inscritof;  



$query_grado4_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_sb_inscrito = mysqli_query($enlace, $query_grado4_sb_inscrito) or die(mysqli_error());
$totalRows_grado4_sb_inscrito = mysqli_num_rows($datos_grado4_sb_inscrito);


$query_grado4_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_sb_inscritof = mysqli_query($enlace, $query_grado4_sb_inscritof) or die(mysqli_error());
$totalRows_grado4_sb_inscritof = mysqli_num_rows($datos_grado4_sb_inscritof); 

$totalRows_grado4_sb_inscritom = $totalRows_grado4_sb_inscrito - $totalRows_grado4_sb_inscritof;  



$query_grado4_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_sc_inscrito = mysqli_query($enlace, $query_grado4_sc_inscrito) or die(mysqli_error());
$totalRows_grado4_sc_inscrito = mysqli_num_rows($datos_grado4_sc_inscrito);


$query_grado4_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_sc_inscritof = mysqli_query($enlace, $query_grado4_sc_inscritof) or die(mysqli_error());
$totalRows_grado4_sc_inscritof = mysqli_num_rows($datos_grado4_sc_inscritof); 

$totalRows_grado4_sc_inscritom = $totalRows_grado4_sc_inscrito - $totalRows_grado4_sc_inscritof;  


$query_grado4_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_sd_inscrito = mysqli_query($enlace, $query_grado4_sd_inscrito) or die(mysqli_error());
$totalRows_grado4_sd_inscrito = mysqli_num_rows($datos_grado4_sd_inscrito); 


$query_grado4_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_sd_inscritof = mysqli_query($enlace, $query_grado4_sd_inscritof) or die(mysqli_error());
$totalRows_grado4_sd_inscritof = mysqli_num_rows($datos_grado4_sd_inscritof); 

$totalRows_grado4_sd_inscritom = $totalRows_grado4_sd_inscrito - $totalRows_grado4_sd_inscritof; 


$query_grado4_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_se_inscrito = mysqli_query($enlace, $query_grado4_se_inscrito) or die(mysqli_error());
$totalRows_grado4_se_inscrito = mysqli_num_rows($datos_grado4_se_inscrito); 


$query_grado4_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_se_inscritof = mysqli_query($enlace, $query_grado4_se_inscritof) or die(mysqli_error());
$totalRows_grado4_se_inscritof = mysqli_num_rows($datos_grado4_se_inscritof); 

$totalRows_grado4_se_inscritom = $totalRows_grado4_se_inscrito - $totalRows_grado4_se_inscritof; 


$query_grado4_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_sf_inscrito = mysqli_query($enlace, $query_grado4_sf_inscrito) or die(mysqli_error());
$totalRows_grado4_sf_inscrito = mysqli_num_rows($datos_grado4_sf_inscrito);

$query_grado4_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_sf_inscritof = mysqli_query($enlace, $query_grado4_sf_inscritof) or die(mysqli_error());
$totalRows_grado4_sf_inscritof = mysqli_num_rows($datos_grado4_sf_inscritof); 

$totalRows_grado4_sf_inscritom = $totalRows_grado4_sf_inscrito - $totalRows_grado4_sf_inscritof;  



$query_grado4_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_sg_inscrito = mysqli_query($enlace, $query_grado4_sg_inscrito) or die(mysqli_error());
$totalRows_grado4_sg_inscrito = mysqli_num_rows($datos_grado4_sg_inscrito); 

$query_grado4_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_sg_inscritof = mysqli_query($enlace, $query_grado4_sg_inscritof) or die(mysqli_error());
$totalRows_grado4_sg_inscritof = mysqli_num_rows($datos_grado4_sg_inscritof); 

$totalRows_grado4_sg_inscritom = $totalRows_grado4_sg_inscrito - $totalRows_grado4_sg_inscritof; 


$query_grado4_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_su_inscrito = mysqli_query($enlace, $query_grado4_su_inscrito) or die(mysqli_error());
$totalRows_grado4_su_inscrito = mysqli_num_rows($datos_grado4_su_inscrito); 


$query_grado4_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_su_inscritof = mysqli_query($enlace, $query_grado4_su_inscritof) or die(mysqli_error());
$totalRows_grado4_su_inscritof = mysqli_num_rows($datos_grado4_su_inscritof); 

$totalRows_grado4_su_inscritom = $totalRows_grado4_su_inscrito - $totalRows_grado4_su_inscritof; 


/* seccion incorrecta */

$query_grado4_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_sx_inscrito = mysqli_query($enlace, $query_grado4_sx_inscrito) or die(mysqli_error());
$totalRows_grado4_sx_inscrito = mysqli_num_rows($datos_grado4_sx_inscrito); 




/**** grado 5 ****/



$query_grado5_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_sa_inscrito = mysqli_query($enlace, $query_grado5_sa_inscrito) or die(mysqli_error());
$totalRows_grado5_sa_inscrito = mysqli_num_rows($datos_grado5_sa_inscrito); 


$query_grado5_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_sa_inscritof = mysqli_query($enlace, $query_grado5_sa_inscritof) or die(mysqli_error());
$totalRows_grado5_sa_inscritof = mysqli_num_rows($datos_grado5_sa_inscritof); 

$totalRows_grado5_sa_inscritom = $totalRows_grado5_sa_inscrito - $totalRows_grado5_sa_inscritof; 



$query_grado5_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_sb_inscrito = mysqli_query($enlace, $query_grado5_sb_inscrito) or die(mysqli_error());
$totalRows_grado5_sb_inscrito = mysqli_num_rows($datos_grado5_sb_inscrito); 


$query_grado5_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_sb_inscritof = mysqli_query($enlace, $query_grado5_sb_inscritof) or die(mysqli_error());
$totalRows_grado5_sb_inscritof = mysqli_num_rows($datos_grado5_sb_inscritof); 

$totalRows_grado5_sb_inscritom = $totalRows_grado5_sb_inscrito - $totalRows_grado5_sb_inscritof; 



$query_grado5_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_sc_inscrito = mysqli_query($enlace, $query_grado5_sc_inscrito) or die(mysqli_error());
$totalRows_grado5_sc_inscrito = mysqli_num_rows($datos_grado5_sc_inscrito); 



$query_grado5_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_sc_inscritof = mysqli_query($enlace, $query_grado5_sc_inscritof) or die(mysqli_error());
$totalRows_grado5_sc_inscritof = mysqli_num_rows($datos_grado5_sc_inscritof); 

$totalRows_grado5_sc_inscritom = $totalRows_grado5_sc_inscrito - $totalRows_grado5_sc_inscritof; 


$query_grado5_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_sd_inscrito = mysqli_query($enlace, $query_grado5_sd_inscrito) or die(mysqli_error());
$totalRows_grado5_sd_inscrito = mysqli_num_rows($datos_grado5_sd_inscrito); 



$query_grado5_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_sd_inscritof = mysqli_query($enlace, $query_grado5_sd_inscritof) or die(mysqli_error());
$totalRows_grado5_sd_inscritof = mysqli_num_rows($datos_grado5_sd_inscritof); 

$totalRows_grado5_sd_inscritom = $totalRows_grado5_sd_inscrito - $totalRows_grado5_sd_inscritof; 


$query_grado5_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_se_inscrito = mysqli_query($enlace, $query_grado5_se_inscrito) or die(mysqli_error());
$totalRows_grado5_se_inscrito = mysqli_num_rows($datos_grado5_se_inscrito); 



$query_grado5_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_se_inscritof = mysqli_query($enlace, $query_grado5_se_inscritof) or die(mysqli_error());
$totalRows_grado5_se_inscritof = mysqli_num_rows($datos_grado5_se_inscritof); 

$totalRows_grado5_se_inscritom = $totalRows_grado5_se_inscrito - $totalRows_grado5_se_inscritof; 


$query_grado5_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_sf_inscrito = mysqli_query($enlace, $query_grado5_sf_inscrito) or die(mysqli_error());
$totalRows_grado5_sf_inscrito = mysqli_num_rows($datos_grado5_sf_inscrito); 



$query_grado5_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_sf_inscritof = mysqli_query($enlace, $query_grado5_sf_inscritof) or die(mysqli_error());
$totalRows_grado5_sf_inscritof = mysqli_num_rows($datos_grado5_sf_inscritof); 

$totalRows_grado5_sf_inscritom = $totalRows_grado5_sf_inscrito - $totalRows_grado5_sf_inscritof; 



$query_grado5_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_sg_inscrito = mysqli_query($enlace, $query_grado5_sg_inscrito) or die(mysqli_error());
$totalRows_grado5_sg_inscrito = mysqli_num_rows($datos_grado5_sg_inscrito); 



$query_grado5_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_sg_inscritof = mysqli_query($enlace, $query_grado5_sg_inscritof) or die(mysqli_error());
$totalRows_grado5_sg_inscritof = mysqli_num_rows($datos_grado5_sg_inscritof); 

$totalRows_grado5_sg_inscritom = $totalRows_grado5_sg_inscrito - $totalRows_grado5_sg_inscritof; 


$query_grado5_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_su_inscrito = mysqli_query($enlace, $query_grado5_su_inscrito) or die(mysqli_error());
$totalRows_grado5_su_inscrito = mysqli_num_rows($datos_grado5_su_inscrito); 



$query_grado5_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_su_inscritof = mysqli_query($enlace, $query_grado5_su_inscritof) or die(mysqli_error());
$totalRows_grado5_su_inscritof = mysqli_num_rows($datos_grado5_su_inscritof); 

$totalRows_grado5_su_inscritom = $totalRows_grado5_su_inscrito - $totalRows_grado5_su_inscritof; 


/* seccion incorrecta */

$query_grado5_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_sx_inscrito = mysqli_query($enlace, $query_grado5_sx_inscrito) or die(mysqli_error());
$totalRows_grado5_sx_inscrito = mysqli_num_rows($datos_grado5_sx_inscrito); 




/**** grado 6 ****/



$query_grado6_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_sa_inscrito = mysqli_query($enlace, $query_grado6_sa_inscrito) or die(mysqli_error());
$totalRows_grado6_sa_inscrito = mysqli_num_rows($datos_grado6_sa_inscrito); 


$query_grado6_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_sa_inscritof = mysqli_query($enlace, $query_grado6_sa_inscritof) or die(mysqli_error());
$totalRows_grado6_sa_inscritof = mysqli_num_rows($datos_grado6_sa_inscritof); 

$totalRows_grado6_sa_inscritom = $totalRows_grado6_sa_inscrito - $totalRows_grado6_sa_inscritof; 



$query_grado6_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_sb_inscrito = mysqli_query($enlace, $query_grado6_sb_inscrito) or die(mysqli_error());
$totalRows_grado6_sb_inscrito = mysqli_num_rows($datos_grado6_sb_inscrito); 

$query_grado6_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_sb_inscritof = mysqli_query($enlace, $query_grado6_sb_inscritof) or die(mysqli_error());
$totalRows_grado6_sb_inscritof = mysqli_num_rows($datos_grado6_sb_inscritof); 

$totalRows_grado6_sb_inscritom = $totalRows_grado6_sb_inscrito - $totalRows_grado6_sb_inscritof; 



$query_grado6_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_sc_inscrito = mysqli_query($enlace, $query_grado6_sc_inscrito) or die(mysqli_error());
$totalRows_grado6_sc_inscrito = mysqli_num_rows($datos_grado6_sc_inscrito);

$query_grado6_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_sc_inscritof = mysqli_query($enlace, $query_grado6_sc_inscritof) or die(mysqli_error());
$totalRows_grado6_sc_inscritof = mysqli_num_rows($datos_grado6_sc_inscritof); 

$totalRows_grado6_sc_inscritom = $totalRows_grado6_sc_inscrito - $totalRows_grado6_sc_inscritof;  


$query_grado6_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_sd_inscrito = mysqli_query($enlace, $query_grado6_sd_inscrito) or die(mysqli_error());
$totalRows_grado6_sd_inscrito = mysqli_num_rows($datos_grado6_sd_inscrito); 

$query_grado6_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_sd_inscritof = mysqli_query($enlace, $query_grado6_sd_inscritof) or die(mysqli_error());
$totalRows_grado6_sd_inscritof = mysqli_num_rows($datos_grado6_sd_inscritof); 

$totalRows_grado6_sd_inscritom = $totalRows_grado6_sd_inscrito - $totalRows_grado6_sd_inscritof; 


$query_grado6_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_se_inscrito = mysqli_query($enlace, $query_grado6_se_inscrito) or die(mysqli_error());
$totalRows_grado6_se_inscrito = mysqli_num_rows($datos_grado6_se_inscrito); 

$query_grado6_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_se_inscritof = mysqli_query($enlace, $query_grado6_se_inscritof) or die(mysqli_error());
$totalRows_grado6_se_inscritof = mysqli_num_rows($datos_grado6_se_inscritof); 

$totalRows_grado6_se_inscritom = $totalRows_grado6_se_inscrito - $totalRows_grado6_se_inscritof; 


$query_grado6_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_sf_inscrito = mysqli_query($enlace, $query_grado6_sf_inscrito) or die(mysqli_error());
$totalRows_grado6_sf_inscrito = mysqli_num_rows($datos_grado6_sf_inscrito);

$query_grado6_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_sf_inscritof = mysqli_query($enlace, $query_grado6_sf_inscritof) or die(mysqli_error());
$totalRows_grado6_sf_inscritof = mysqli_num_rows($datos_grado6_sf_inscritof); 

$totalRows_grado6_sf_inscritom = $totalRows_grado6_sf_inscrito - $totalRows_grado6_sf_inscritof;  



$query_grado6_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_sg_inscrito = mysqli_query($enlace, $query_grado6_sg_inscrito) or die(mysqli_error());
$totalRows_grado6_sg_inscrito = mysqli_num_rows($datos_grado6_sg_inscrito); 

$query_grado6_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_sg_inscritof = mysqli_query($enlace, $query_grado6_sg_inscritof) or die(mysqli_error());
$totalRows_grado6_sg_inscritof = mysqli_num_rows($datos_grado6_sg_inscritof); 

$totalRows_grado6_sg_inscritom = $totalRows_grado6_sg_inscrito - $totalRows_grado6_sg_inscritof; 


$query_grado6_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_su_inscrito = mysqli_query($enlace, $query_grado6_su_inscrito) or die(mysqli_error());
$totalRows_grado6_su_inscrito = mysqli_num_rows($datos_grado6_su_inscrito); 

$query_grado6_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_su_inscritof = mysqli_query($enlace, $query_grado6_su_inscritof) or die(mysqli_error());
$totalRows_grado6_su_inscritof = mysqli_num_rows($datos_grado6_su_inscritof); 

$totalRows_grado6_su_inscritom = $totalRows_grado6_su_inscrito - $totalRows_grado6_su_inscritof; 




/* seccion incorrecta */

$query_grado6_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_sx_inscrito = mysqli_query($enlace, $query_grado6_sx_inscrito) or die(mysqli_error());
$totalRows_grado6_sx_inscrito = mysqli_num_rows($datos_grado6_sx_inscrito); 









$query_grado6_tot_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_tot_inscrito = mysqli_query($enlace, $query_grado6_tot_inscrito) or die(mysqli_error());
$totalRows_grado6_tot_inscrito = mysqli_num_rows($datos_grado6_tot_inscrito); 





















/**** grado p1 ****/



$query_gradop1_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_sa_inscrito = mysqli_query($enlace, $query_gradop1_sa_inscrito) or die(mysqli_error());
$totalRows_gradop1_sa_inscrito = mysqli_num_rows($datos_gradop1_sa_inscrito); 


$query_gradop1_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_sa_inscritof = mysqli_query($enlace, $query_gradop1_sa_inscritof) or die(mysqli_error());
$totalRows_gradop1_sa_inscritof = mysqli_num_rows($datos_gradop1_sa_inscritof); 

$totalRows_gradop1_sa_inscritom = $totalRows_gradop1_sa_inscrito - $totalRows_gradop1_sa_inscritof; 



$query_gradop1_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_sb_inscrito = mysqli_query($enlace, $query_gradop1_sb_inscrito) or die(mysqli_error());
$totalRows_gradop1_sb_inscrito = mysqli_num_rows($datos_gradop1_sb_inscrito); 


$query_gradop1_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_sb_inscritof = mysqli_query($enlace, $query_gradop1_sb_inscritof) or die(mysqli_error());
$totalRows_gradop1_sb_inscritof = mysqli_num_rows($datos_gradop1_sb_inscritof); 

$totalRows_gradop1_sb_inscritom = $totalRows_gradop1_sb_inscrito - $totalRows_gradop1_sb_inscritof; 



$query_gradop1_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_sc_inscrito = mysqli_query($enlace, $query_gradop1_sc_inscrito) or die(mysqli_error());
$totalRows_gradop1_sc_inscrito = mysqli_num_rows($datos_gradop1_sc_inscrito); 

$query_gradop1_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_sc_inscritof = mysqli_query($enlace, $query_gradop1_sc_inscritof) or die(mysqli_error());
$totalRows_gradop1_sc_inscritof = mysqli_num_rows($datos_gradop1_sc_inscritof); 

$totalRows_gradop1_sc_inscritom = $totalRows_gradop1_sc_inscrito - $totalRows_gradop1_sc_inscritof; 


$query_gradop1_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_sd_inscrito = mysqli_query($enlace, $query_gradop1_sd_inscrito) or die(mysqli_error());
$totalRows_gradop1_sd_inscrito = mysqli_num_rows($datos_gradop1_sd_inscrito); 

$query_gradop1_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_sd_inscritof = mysqli_query($enlace, $query_gradop1_sd_inscritof) or die(mysqli_error());
$totalRows_gradop1_sd_inscritof = mysqli_num_rows($datos_gradop1_sd_inscritof); 

$totalRows_gradop1_sd_inscritom = $totalRows_gradop1_sd_inscrito - $totalRows_gradop1_sd_inscritof; 


$query_gradop1_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_se_inscrito = mysqli_query($enlace, $query_gradop1_se_inscrito) or die(mysqli_error());
$totalRows_gradop1_se_inscrito = mysqli_num_rows($datos_gradop1_se_inscrito); 


$query_gradop1_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_se_inscritof = mysqli_query($enlace, $query_gradop1_se_inscritof) or die(mysqli_error());
$totalRows_gradop1_se_inscritof = mysqli_num_rows($datos_gradop1_se_inscritof); 

$totalRows_gradop1_se_inscritom = $totalRows_gradop1_se_inscrito - $totalRows_gradop1_se_inscritof; 


$query_gradop1_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_sf_inscrito = mysqli_query($enlace, $query_gradop1_sf_inscrito) or die(mysqli_error());
$totalRows_gradop1_sf_inscrito = mysqli_num_rows($datos_gradop1_sf_inscrito); 


$query_gradop1_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_sf_inscritof = mysqli_query($enlace, $query_gradop1_sf_inscritof) or die(mysqli_error());
$totalRows_gradop1_sf_inscritof = mysqli_num_rows($datos_gradop1_sf_inscritof); 

$totalRows_gradop1_sf_inscritom = $totalRows_gradop1_sf_inscrito - $totalRows_gradop1_sf_inscritof; 



$query_gradop1_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_sg_inscrito = mysqli_query($enlace, $query_gradop1_sg_inscrito) or die(mysqli_error());
$totalRows_gradop1_sg_inscrito = mysqli_num_rows($datos_gradop1_sg_inscrito); 


$query_gradop1_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_sg_inscritof = mysqli_query($enlace, $query_gradop1_sg_inscritof) or die(mysqli_error());
$totalRows_gradop1_sg_inscritof = mysqli_num_rows($datos_gradop1_sg_inscritof); 

$totalRows_gradop1_sg_inscritom = $totalRows_gradop1_sg_inscrito - $totalRows_gradop1_sg_inscritof; 


$query_gradop1_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_su_inscrito = mysqli_query($enlace, $query_gradop1_su_inscrito) or die(mysqli_error());
$totalRows_gradop1_su_inscrito = mysqli_num_rows($datos_gradop1_su_inscrito); 


$query_gradop1_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_su_inscritof = mysqli_query($enlace, $query_gradop1_su_inscritof) or die(mysqli_error());
$totalRows_gradop1_su_inscritof = mysqli_num_rows($datos_gradop1_su_inscritof); 

$totalRows_gradop1_su_inscritom = $totalRows_gradop1_su_inscrito - $totalRows_gradop1_su_inscritof; 





/* seccion incorrecta */

$query_gradop1_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop1_sx_inscrito = mysqli_query($enlace, $query_gradop1_sx_inscrito) or die(mysqli_error());
$totalRows_gradop1_sx_inscrito = mysqli_num_rows($datos_gradop1_sx_inscrito); 




/**** grado p2 ****/



$query_gradop2_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_sa_inscrito = mysqli_query($enlace, $query_gradop2_sa_inscrito) or die(mysqli_error());
$totalRows_gradop2_sa_inscrito = mysqli_num_rows($datos_gradop2_sa_inscrito); 

$query_gradop2_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_sa_inscritof = mysqli_query($enlace, $query_gradop2_sa_inscritof) or die(mysqli_error());
$totalRows_gradop2_sa_inscritof = mysqli_num_rows($datos_gradop2_sa_inscritof); 

$totalRows_gradop2_sa_inscritom = $totalRows_gradop2_sa_inscrito - $totalRows_gradop2_sa_inscritof; 



$query_gradop2_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_sb_inscrito = mysqli_query($enlace, $query_gradop2_sb_inscrito) or die(mysqli_error());
$totalRows_gradop2_sb_inscrito = mysqli_num_rows($datos_gradop2_sb_inscrito);

$query_gradop2_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_sb_inscritof = mysqli_query($enlace, $query_gradop2_sb_inscritof) or die(mysqli_error());
$totalRows_gradop2_sb_inscritof = mysqli_num_rows($datos_gradop2_sb_inscritof); 

$totalRows_gradop2_sb_inscritom = $totalRows_gradop2_sb_inscrito - $totalRows_gradop2_sb_inscritof;  



$query_gradop2_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_sc_inscrito = mysqli_query($enlace, $query_gradop2_sc_inscrito) or die(mysqli_error());
$totalRows_gradop2_sc_inscrito = mysqli_num_rows($datos_gradop2_sc_inscrito); 

$query_gradop2_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_sc_inscritof = mysqli_query($enlace, $query_gradop2_sc_inscritof) or die(mysqli_error());
$totalRows_gradop2_sc_inscritof = mysqli_num_rows($datos_gradop2_sc_inscritof); 

$totalRows_gradop2_sc_inscritom = $totalRows_gradop2_sc_inscrito - $totalRows_gradop2_sc_inscritof; 


$query_gradop2_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_sd_inscrito = mysqli_query($enlace, $query_gradop2_sd_inscrito) or die(mysqli_error());
$totalRows_gradop2_sd_inscrito = mysqli_num_rows($datos_gradop2_sd_inscrito); 


$query_gradop2_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_sd_inscritof = mysqli_query($enlace, $query_gradop2_sd_inscritof) or die(mysqli_error());
$totalRows_gradop2_sd_inscritof = mysqli_num_rows($datos_gradop2_sd_inscritof); 

$totalRows_gradop2_sd_inscritom = $totalRows_gradop2_sd_inscrito - $totalRows_gradop2_sd_inscritof; 


$query_gradop2_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_se_inscrito = mysqli_query($enlace, $query_gradop2_se_inscrito) or die(mysqli_error());
$totalRows_gradop2_se_inscrito = mysqli_num_rows($datos_gradop2_se_inscrito); 

$query_gradop2_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_se_inscritof = mysqli_query($enlace, $query_gradop2_se_inscritof) or die(mysqli_error());
$totalRows_gradop2_se_inscritof = mysqli_num_rows($datos_gradop2_se_inscritof); 

$totalRows_gradop2_se_inscritom = $totalRows_gradop2_se_inscrito - $totalRows_gradop2_se_inscritof; 


$query_gradop2_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_sf_inscrito = mysqli_query($enlace, $query_gradop2_sf_inscrito) or die(mysqli_error());
$totalRows_gradop2_sf_inscrito = mysqli_num_rows($datos_gradop2_sf_inscrito); 


$query_gradop2_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_sf_inscritof = mysqli_query($enlace, $query_gradop2_sf_inscritof) or die(mysqli_error());
$totalRows_gradop2_sf_inscritof = mysqli_num_rows($datos_gradop2_sf_inscritof); 

$totalRows_gradop2_sf_inscritom = $totalRows_gradop2_sf_inscrito - $totalRows_gradop2_sf_inscritof; 



$query_gradop2_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_sg_inscrito = mysqli_query($enlace, $query_gradop2_sg_inscrito) or die(mysqli_error());
$totalRows_gradop2_sg_inscrito = mysqli_num_rows($datos_gradop2_sg_inscrito); 

$query_gradop2_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_sg_inscritof = mysqli_query($enlace, $query_gradop2_sg_inscritof) or die(mysqli_error());
$totalRows_gradop2_sg_inscritof = mysqli_num_rows($datos_gradop2_sg_inscritof); 

$totalRows_gradop2_sg_inscritom = $totalRows_gradop2_sg_inscrito - $totalRows_gradop2_sg_inscritof; 


$query_gradop2_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_su_inscrito = mysqli_query($enlace, $query_gradop2_su_inscrito) or die(mysqli_error());
$totalRows_gradop2_su_inscrito = mysqli_num_rows($datos_gradop2_su_inscrito);

$query_gradop2_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_su_inscritof = mysqli_query($enlace, $query_gradop2_su_inscritof) or die(mysqli_error());
$totalRows_gradop2_su_inscritof = mysqli_num_rows($datos_gradop2_su_inscritof); 

$totalRows_gradop2_su_inscritom = $totalRows_gradop2_su_inscrito - $totalRows_gradop2_su_inscritof;  





/* seccion incorrecta */

$query_gradop2_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop2_sx_inscrito = mysqli_query($enlace, $query_gradop2_sx_inscrito) or die(mysqli_error());
$totalRows_gradop2_sx_inscrito = mysqli_num_rows($datos_gradop2_sx_inscrito); 



/**** grado p3 ****/



$query_gradop3_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_sa_inscrito = mysqli_query($enlace, $query_gradop3_sa_inscrito) or die(mysqli_error());
$totalRows_gradop3_sa_inscrito = mysqli_num_rows($datos_gradop3_sa_inscrito); 


$query_gradop3_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_sa_inscritof = mysqli_query($enlace, $query_gradop3_sa_inscritof) or die(mysqli_error());
$totalRows_gradop3_sa_inscritof = mysqli_num_rows($datos_gradop3_sa_inscritof); 

$totalRows_gradop3_sa_inscritom = $totalRows_gradop3_sa_inscrito - $totalRows_gradop3_sa_inscritof;  



$query_gradop3_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_sb_inscrito = mysqli_query($enlace, $query_gradop3_sb_inscrito) or die(mysqli_error());
$totalRows_gradop3_sb_inscrito = mysqli_num_rows($datos_gradop3_sb_inscrito); 




$query_gradop3_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_sb_inscritof = mysqli_query($enlace, $query_gradop3_sb_inscritof) or die(mysqli_error());
$totalRows_gradop3_sb_inscritof = mysqli_num_rows($datos_gradop3_sb_inscritof); 

$totalRows_gradop3_sb_inscritom = $totalRows_gradop3_sb_inscrito - $totalRows_gradop3_sb_inscritof;  



$query_gradop3_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_sc_inscrito = mysqli_query($enlace, $query_gradop3_sc_inscrito) or die(mysqli_error());
$totalRows_gradop3_sc_inscrito = mysqli_num_rows($datos_gradop3_sc_inscrito); 


$query_gradop3_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_sc_inscritof = mysqli_query($enlace, $query_gradop3_sc_inscritof) or die(mysqli_error());
$totalRows_gradop3_sc_inscritof = mysqli_num_rows($datos_gradop3_sc_inscritof); 

$totalRows_gradop3_sc_inscritom = $totalRows_gradop3_sc_inscrito - $totalRows_gradop3_sc_inscritof;  


$query_gradop3_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_sd_inscrito = mysqli_query($enlace, $query_gradop3_sd_inscrito) or die(mysqli_error());
$totalRows_gradop3_sd_inscrito = mysqli_num_rows($datos_gradop3_sd_inscrito);



$query_gradop3_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_sd_inscritof = mysqli_query($enlace, $query_gradop3_sd_inscritof) or die(mysqli_error());
$totalRows_gradop3_sd_inscritof = mysqli_num_rows($datos_gradop3_sd_inscritof); 

$totalRows_gradop3_sd_inscritom = $totalRows_gradop3_sd_inscrito - $totalRows_gradop3_sd_inscritof;   


$query_gradop3_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_se_inscrito = mysqli_query($enlace, $query_gradop3_se_inscrito) or die(mysqli_error());
$totalRows_gradop3_se_inscrito = mysqli_num_rows($datos_gradop3_se_inscrito); 



$query_gradop3_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_se_inscritof = mysqli_query($enlace, $query_gradop3_se_inscritof) or die(mysqli_error());
$totalRows_gradop3_se_inscritof = mysqli_num_rows($datos_gradop3_se_inscritof); 

$totalRows_gradop3_se_inscritom = $totalRows_gradop3_se_inscrito - $totalRows_gradop3_se_inscritof;  


$query_gradop3_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_sf_inscrito = mysqli_query($enlace, $query_gradop3_sf_inscrito) or die(mysqli_error());
$totalRows_gradop3_sf_inscrito = mysqli_num_rows($datos_gradop3_sf_inscrito); 



$query_gradop3_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_sf_inscritof = mysqli_query($enlace, $query_gradop3_sf_inscritof) or die(mysqli_error());
$totalRows_gradop3_sf_inscritof = mysqli_num_rows($datos_gradop3_sf_inscritof); 

$totalRows_gradop3_sf_inscritom = $totalRows_gradop3_sf_inscrito - $totalRows_gradop3_sf_inscritof;  



$query_gradop3_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_sg_inscrito = mysqli_query($enlace, $query_gradop3_sg_inscrito) or die(mysqli_error());
$totalRows_gradop3_sg_inscrito = mysqli_num_rows($datos_gradop3_sg_inscrito); 



$query_gradop3_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_sg_inscritof = mysqli_query($enlace, $query_gradop3_sg_inscritof) or die(mysqli_error());
$totalRows_gradop3_sg_inscritof = mysqli_num_rows($datos_gradop3_sg_inscritof); 

$totalRows_gradop3_sg_inscritom = $totalRows_gradop3_sg_inscrito - $totalRows_gradop3_sg_inscritof;  


$query_gradop3_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_su_inscrito = mysqli_query($enlace, $query_gradop3_su_inscrito) or die(mysqli_error());
$totalRows_gradop3_su_inscrito = mysqli_num_rows($datos_gradop3_su_inscrito); 



$query_gradop3_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_su_inscritof = mysqli_query($enlace, $query_gradop3_su_inscritof) or die(mysqli_error());
$totalRows_gradop3_su_inscritof = mysqli_num_rows($datos_gradop3_su_inscritof); 

$totalRows_gradop3_su_inscritom = $totalRows_gradop3_su_inscrito - $totalRows_gradop3_su_inscritof;  



/* seccion incorrecta */

$query_gradop3_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop3_sx_inscrito = mysqli_query($enlace, $query_gradop3_sx_inscrito) or die(mysqli_error());
$totalRows_gradop3_sx_inscrito = mysqli_num_rows($datos_gradop3_sx_inscrito); 



/**** grado p4 ****/



$query_gradop4_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_sa_inscrito = mysqli_query($enlace, $query_gradop4_sa_inscrito) or die(mysqli_error());
$totalRows_gradop4_sa_inscrito = mysqli_num_rows($datos_gradop4_sa_inscrito); 


$query_gradop4_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_sa_inscritof = mysqli_query($enlace, $query_gradop4_sa_inscritof) or die(mysqli_error());
$totalRows_gradop4_sa_inscritof = mysqli_num_rows($datos_gradop4_sa_inscritof); 

$totalRows_gradop4_sa_inscritom = $totalRows_gradop4_sa_inscrito - $totalRows_gradop4_sa_inscritof;  



$query_gradop4_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_sb_inscrito = mysqli_query($enlace, $query_gradop4_sb_inscrito) or die(mysqli_error());
$totalRows_gradop4_sb_inscrito = mysqli_num_rows($datos_gradop4_sb_inscrito); 

$query_gradop4_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_sb_inscritof = mysqli_query($enlace, $query_gradop4_sb_inscritof) or die(mysqli_error());
$totalRows_gradop4_sb_inscritof = mysqli_num_rows($datos_gradop4_sb_inscritof); 

$totalRows_gradop4_sb_inscritom = $totalRows_gradop4_sb_inscrito - $totalRows_gradop4_sb_inscritof;  



$query_gradop4_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_sc_inscrito = mysqli_query($enlace, $query_gradop4_sc_inscrito) or die(mysqli_error());
$totalRows_gradop4_sc_inscrito = mysqli_num_rows($datos_gradop4_sc_inscrito);

$query_gradop4_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_sc_inscritof = mysqli_query($enlace, $query_gradop4_sc_inscritof) or die(mysqli_error());
$totalRows_gradop4_sc_inscritof = mysqli_num_rows($datos_gradop4_sc_inscritof); 

$totalRows_gradop4_sc_inscritom = $totalRows_gradop4_sc_inscrito - $totalRows_gradop4_sc_inscritof;   


$query_gradop4_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_sd_inscrito = mysqli_query($enlace, $query_gradop4_sd_inscrito) or die(mysqli_error());
$totalRows_gradop4_sd_inscrito = mysqli_num_rows($datos_gradop4_sd_inscrito); 

$query_gradop4_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_sd_inscritof = mysqli_query($enlace, $query_gradop4_sd_inscritof) or die(mysqli_error());
$totalRows_gradop4_sd_inscritof = mysqli_num_rows($datos_gradop4_sd_inscritof); 

$totalRows_gradop4_sd_inscritom = $totalRows_gradop4_sd_inscrito - $totalRows_gradop4_sd_inscritof;  


$query_gradop4_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_se_inscrito = mysqli_query($enlace, $query_gradop4_se_inscrito) or die(mysqli_error());
$totalRows_gradop4_se_inscrito = mysqli_num_rows($datos_gradop4_se_inscrito); 

$query_gradop4_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_se_inscritof = mysqli_query($enlace, $query_gradop4_se_inscritof) or die(mysqli_error());
$totalRows_gradop4_se_inscritof = mysqli_num_rows($datos_gradop4_se_inscritof); 

$totalRows_gradop4_se_inscritom = $totalRows_gradop4_se_inscrito - $totalRows_gradop4_se_inscritof;  


$query_gradop4_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_sf_inscrito = mysqli_query($enlace, $query_gradop4_sf_inscrito) or die(mysqli_error());
$totalRows_gradop4_sf_inscrito = mysqli_num_rows($datos_gradop4_sf_inscrito); 

$query_gradop4_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_sf_inscritof = mysqli_query($enlace, $query_gradop4_sf_inscritof) or die(mysqli_error());
$totalRows_gradop4_sf_inscritof = mysqli_num_rows($datos_gradop4_sf_inscritof); 

$totalRows_gradop4_sf_inscritom = $totalRows_gradop4_sf_inscrito - $totalRows_gradop4_sf_inscritof;  



$query_gradop4_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_sg_inscrito = mysqli_query($enlace, $query_gradop4_sg_inscrito) or die(mysqli_error());
$totalRows_gradop4_sg_inscrito = mysqli_num_rows($datos_gradop4_sg_inscrito);

$query_gradop4_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_sg_inscritof = mysqli_query($enlace, $query_gradop4_sg_inscritof) or die(mysqli_error());
$totalRows_gradop4_sg_inscritof = mysqli_num_rows($datos_gradop4_sg_inscritof); 

$totalRows_gradop4_sg_inscritom = $totalRows_gradop4_sg_inscrito - $totalRows_gradop4_sg_inscritof;   


$query_gradop4_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_su_inscrito = mysqli_query($enlace, $query_gradop4_su_inscrito) or die(mysqli_error());
$totalRows_gradop4_su_inscrito = mysqli_num_rows($datos_gradop4_su_inscrito);

$query_gradop4_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_su_inscritof = mysqli_query($enlace, $query_gradop4_su_inscritof) or die(mysqli_error());
$totalRows_gradop4_su_inscritof = mysqli_num_rows($datos_gradop4_su_inscritof); 

$totalRows_gradop4_su_inscritom = $totalRows_gradop4_su_inscrito - $totalRows_gradop4_su_inscritof;   


/* seccion incorrecta */

$query_gradop4_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop4_sx_inscrito = mysqli_query($enlace, $query_gradop4_sx_inscrito) or die(mysqli_error());
$totalRows_gradop4_sx_inscrito = mysqli_num_rows($datos_gradop4_sx_inscrito); 


/**** grado p5 ****/



$query_gradop5_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_sa_inscrito = mysqli_query($enlace, $query_gradop5_sa_inscrito) or die(mysqli_error());
$totalRows_gradop5_sa_inscrito = mysqli_num_rows($datos_gradop5_sa_inscrito); 


$query_gradop5_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_sa_inscritof = mysqli_query($enlace, $query_gradop5_sa_inscritof) or die(mysqli_error());
$totalRows_gradop5_sa_inscritof = mysqli_num_rows($datos_gradop5_sa_inscritof); 

$totalRows_gradop5_sa_inscritom = $totalRows_gradop5_sa_inscrito - $totalRows_gradop5_sa_inscritof;  



$query_gradop5_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_sb_inscrito = mysqli_query($enlace, $query_gradop5_sb_inscrito) or die(mysqli_error());
$totalRows_gradop5_sb_inscrito = mysqli_num_rows($datos_gradop5_sb_inscrito); 


$query_gradop5_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_sb_inscritof = mysqli_query($enlace, $query_gradop5_sb_inscritof) or die(mysqli_error());
$totalRows_gradop5_sb_inscritof = mysqli_num_rows($datos_gradop5_sb_inscritof); 

$totalRows_gradop5_sb_inscritom = $totalRows_gradop5_sb_inscrito - $totalRows_gradop5_sb_inscritof;  



$query_gradop5_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_sc_inscrito = mysqli_query($enlace, $query_gradop5_sc_inscrito) or die(mysqli_error());
$totalRows_gradop5_sc_inscrito = mysqli_num_rows($datos_gradop5_sc_inscrito); 


$query_gradop5_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_sc_inscritof = mysqli_query($enlace, $query_gradop5_sc_inscritof) or die(mysqli_error());
$totalRows_gradop5_sc_inscritof = mysqli_num_rows($datos_gradop5_sc_inscritof); 

$totalRows_gradop5_sc_inscritom = $totalRows_gradop5_sc_inscrito - $totalRows_gradop5_sc_inscritof;  


$query_gradop5_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_sd_inscrito = mysqli_query($enlace, $query_gradop5_sd_inscrito) or die(mysqli_error());
$totalRows_gradop5_sd_inscrito = mysqli_num_rows($datos_gradop5_sd_inscrito); 


$query_gradop5_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_sd_inscritof = mysqli_query($enlace, $query_gradop5_sd_inscritof) or die(mysqli_error());
$totalRows_gradop5_sd_inscritof = mysqli_num_rows($datos_gradop5_sd_inscritof); 

$totalRows_gradop5_sd_inscritom = $totalRows_gradop5_sd_inscrito - $totalRows_gradop5_sd_inscritof;  


$query_gradop5_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_se_inscrito = mysqli_query($enlace, $query_gradop5_se_inscrito) or die(mysqli_error());
$totalRows_gradop5_se_inscrito = mysqli_num_rows($datos_gradop5_se_inscrito); 


$query_gradop5_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_se_inscritof = mysqli_query($enlace, $query_gradop5_se_inscritof) or die(mysqli_error());
$totalRows_gradop5_se_inscritof = mysqli_num_rows($datos_gradop5_se_inscritof); 

$totalRows_gradop5_se_inscritom = $totalRows_gradop5_se_inscrito - $totalRows_gradop5_se_inscritof;  


$query_gradop5_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_sf_inscrito = mysqli_query($enlace, $query_gradop5_sf_inscrito) or die(mysqli_error());
$totalRows_gradop5_sf_inscrito = mysqli_num_rows($datos_gradop5_sf_inscrito); 



$query_gradop5_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_sf_inscritof = mysqli_query($enlace, $query_gradop5_sf_inscritof) or die(mysqli_error());
$totalRows_gradop5_sf_inscritof = mysqli_num_rows($datos_gradop5_sf_inscritof); 

$totalRows_gradop5_sf_inscritom = $totalRows_gradop5_sf_inscrito - $totalRows_gradop5_sf_inscritof;  



$query_gradop5_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_sg_inscrito = mysqli_query($enlace, $query_gradop5_sg_inscrito) or die(mysqli_error());
$totalRows_gradop5_sg_inscrito = mysqli_num_rows($datos_gradop5_sg_inscrito); 


$query_gradop5_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_sg_inscritof = mysqli_query($enlace, $query_gradop5_sg_inscritof) or die(mysqli_error());
$totalRows_gradop5_sg_inscritof = mysqli_num_rows($datos_gradop5_sg_inscritof); 

$totalRows_gradop5_sg_inscritom = $totalRows_gradop5_sg_inscrito - $totalRows_gradop5_sg_inscritof;  


$query_gradop5_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_su_inscrito = mysqli_query($enlace, $query_gradop5_su_inscrito) or die(mysqli_error());
$totalRows_gradop5_su_inscrito = mysqli_num_rows($datos_gradop5_su_inscrito); 


$query_gradop5_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_su_inscritof = mysqli_query($enlace, $query_gradop5_su_inscritof) or die(mysqli_error());
$totalRows_gradop5_su_inscritof = mysqli_num_rows($datos_gradop5_su_inscritof); 

$totalRows_gradop5_su_inscritom = $totalRows_gradop5_su_inscrito - $totalRows_gradop5_su_inscritof;  

/* seccion incorrecta */

$query_gradop5_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_sx_inscrito = mysqli_query($enlace, $query_gradop5_sx_inscrito) or die(mysqli_error());
$totalRows_gradop5_sx_inscrito = mysqli_num_rows($datos_gradop5_sx_inscrito); 











$query_gradop5_tot_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop5_tot_inscrito = mysqli_query($enlace, $query_gradop5_tot_inscrito) or die(mysqli_error());
$totalRows_gradop5_tot_inscrito = mysqli_num_rows($datos_gradop5_tot_inscrito); 




/**** grado p6 ****/



$query_gradop6_sa_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_sa_inscrito = mysqli_query($enlace, $query_gradop6_sa_inscrito) or die(mysqli_error());
$totalRows_gradop6_sa_inscrito = mysqli_num_rows($datos_gradop6_sa_inscrito); 


$query_gradop6_sa_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '1'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_sa_inscritof = mysqli_query($enlace, $query_gradop6_sa_inscritof) or die(mysqli_error());
$totalRows_gradop6_sa_inscritof = mysqli_num_rows($datos_gradop6_sa_inscritof); 

$totalRows_gradop6_sa_inscritom = $totalRows_gradop6_sa_inscrito - $totalRows_gradop6_sa_inscritof;  



$query_gradop6_sb_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_sb_inscrito = mysqli_query($enlace, $query_gradop6_sb_inscrito) or die(mysqli_error());
$totalRows_gradop6_sb_inscrito = mysqli_num_rows($datos_gradop6_sb_inscrito); 



$query_gradop6_sb_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '2'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_sb_inscritof = mysqli_query($enlace, $query_gradop6_sb_inscritof) or die(mysqli_error());
$totalRows_gradop6_sb_inscritof = mysqli_num_rows($datos_gradop6_sb_inscritof); 

$totalRows_gradop6_sb_inscritom = $totalRows_gradop6_sb_inscrito - $totalRows_gradop6_sb_inscritof;  



$query_gradop6_sc_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_sc_inscrito = mysqli_query($enlace, $query_gradop6_sc_inscrito) or die(mysqli_error());
$totalRows_gradop6_sc_inscrito = mysqli_num_rows($datos_gradop6_sc_inscrito); 



$query_gradop6_sc_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '11'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_sc_inscritof = mysqli_query($enlace, $query_gradop6_sc_inscritof) or die(mysqli_error());
$totalRows_gradop6_sc_inscritof = mysqli_num_rows($datos_gradop6_sc_inscritof); 

$totalRows_gradop6_sc_inscritom = $totalRows_gradop6_sc_inscrito - $totalRows_gradop6_sc_inscritof;  


$query_gradop6_sd_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_sd_inscrito = mysqli_query($enlace, $query_gradop6_sd_inscrito) or die(mysqli_error());
$totalRows_gradop6_sd_inscrito = mysqli_num_rows($datos_gradop6_sd_inscrito); 



$query_gradop6_sd_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '12'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_sd_inscritof = mysqli_query($enlace, $query_gradop6_sd_inscritof) or die(mysqli_error());
$totalRows_gradop6_sd_inscritof = mysqli_num_rows($datos_gradop6_sd_inscritof); 

$totalRows_gradop6_sd_inscritom = $totalRows_gradop6_sd_inscrito - $totalRows_gradop6_sd_inscritof;  


$query_gradop6_se_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_se_inscrito = mysqli_query($enlace, $query_gradop6_se_inscrito) or die(mysqli_error());
$totalRows_gradop6_se_inscrito = mysqli_num_rows($datos_gradop6_se_inscrito); 



$query_gradop6_se_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '13'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_se_inscritof = mysqli_query($enlace, $query_gradop6_se_inscritof) or die(mysqli_error());
$totalRows_gradop6_se_inscritof = mysqli_num_rows($datos_gradop6_se_inscritof); 

$totalRows_gradop6_se_inscritom = $totalRows_gradop6_se_inscrito - $totalRows_gradop6_se_inscritof;  


$query_gradop6_sf_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_sf_inscrito = mysqli_query($enlace, $query_gradop6_sf_inscrito) or die(mysqli_error());
$totalRows_gradop6_sf_inscrito = mysqli_num_rows($datos_gradop6_sf_inscrito); 



$query_gradop6_sf_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '14'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_sf_inscritof = mysqli_query($enlace, $query_gradop6_sf_inscritof) or die(mysqli_error());
$totalRows_gradop6_sf_inscritof = mysqli_num_rows($datos_gradop6_sf_inscritof); 

$totalRows_gradop6_sf_inscritom = $totalRows_gradop6_sf_inscrito - $totalRows_gradop6_sf_inscritof;  



$query_gradop6_sg_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_sg_inscrito = mysqli_query($enlace, $query_gradop6_sg_inscrito) or die(mysqli_error());
$totalRows_gradop6_sg_inscrito = mysqli_num_rows($datos_gradop6_sg_inscrito); 


$query_gradop6_sg_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '15'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_sg_inscritof = mysqli_query($enlace, $query_gradop6_sg_inscritof) or die(mysqli_error());
$totalRows_gradop6_sg_inscritof = mysqli_num_rows($datos_gradop6_sg_inscritof); 

$totalRows_gradop6_sg_inscritom = $totalRows_gradop6_sg_inscrito - $totalRows_gradop6_sg_inscritof;  


$query_gradop6_su_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_su_inscrito = mysqli_query($enlace, $query_gradop6_su_inscrito) or die(mysqli_error());
$totalRows_gradop6_su_inscrito = mysqli_num_rows($datos_gradop6_su_inscrito);



$query_gradop6_su_inscritof = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '9'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0' 
         and id_sexo = '1'       
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_su_inscritof = mysqli_query($enlace, $query_gradop6_su_inscritof) or die(mysqli_error());
$totalRows_gradop6_su_inscritof = mysqli_num_rows($datos_gradop6_su_inscritof); 

$totalRows_gradop6_su_inscritom = $totalRows_gradop6_su_inscrito - $totalRows_gradop6_su_inscritof;  






$query_gradop6_sx_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'       
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_gradop6_sx_inscrito = mysqli_query($enlace, $query_gradop6_sx_inscrito) or die(mysqli_error());
$totalRows_gradop6_sx_inscrito = mysqli_num_rows($datos_gradop6_sx_inscrito); 



    

?>