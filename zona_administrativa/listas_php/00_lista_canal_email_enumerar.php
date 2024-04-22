<?php


$queryma = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '52'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_ma = mysqli_query($enlace, $queryma) or die(mysqli_error());
$totalRows_ma = mysqli_num_rows($datos_ma);

$querymb = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '52'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_mb = mysqli_query($enlace, $querymb) or die(mysqli_error());
$totalRows_mb = mysqli_num_rows($datos_mb); 

$querymc = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '52'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_mc = mysqli_query($enlace, $querymc) or die(mysqli_error());
$totalRows_mc = mysqli_num_rows($datos_mc); 

$querymd = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '52'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_md = mysqli_query($enlace, $querymd) or die(mysqli_error());
$totalRows_md = mysqli_num_rows($datos_md); 

$queryme = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '52'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_me = mysqli_query($enlace, $queryme) or die(mysqli_error());
$totalRows_me = mysqli_num_rows($datos_me); 

$querymf = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '52'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_mf = mysqli_query($enlace, $querymf) or die(mysqli_error());
$totalRows_mf = mysqli_num_rows($datos_mf); 

$querymg = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '52'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_mg = mysqli_query($enlace, $querymg) or die(mysqli_error());
$totalRows_mg = mysqli_num_rows($datos_mg); 

$querymu = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '52'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_mu = mysqli_query($enlace, $querymu) or die(mysqli_error());
$totalRows_mu = mysqli_num_rows($datos_mu);  


$totma = $totalRows_ma+$totalRows_mb+$totalRows_mc+$totalRows_md+$totalRows_me+$totalRows_mf+$totalRows_mg+$totalRows_mu;

// pres 1er


$queryp1a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '54'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p1a = mysqli_query($enlace, $queryp1a) or die(mysqli_error());
$totalRows_p1a = mysqli_num_rows($datos_p1a);

$queryp1b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '54'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p1b = mysqli_query($enlace, $queryp1b) or die(mysqli_error());
$totalRows_p1b = mysqli_num_rows($datos_p1b); 

$queryp1c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '54'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p1c = mysqli_query($enlace, $queryp1c) or die(mysqli_error());
$totalRows_p1c = mysqli_num_rows($datos_p1c); 

$queryp1d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '54'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p1d = mysqli_query($enlace, $queryp1d) or die(mysqli_error());
$totalRows_p1d = mysqli_num_rows($datos_p1d); 

$queryp1e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '54'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p1e = mysqli_query($enlace, $queryp1e) or die(mysqli_error());
$totalRows_p1e = mysqli_num_rows($datos_p1e); 

$queryp1f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '54'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p1f = mysqli_query($enlace, $queryp1f) or die(mysqli_error());
$totalRows_p1f = mysqli_num_rows($datos_p1f); 

$queryp1g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '54'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p1g = mysqli_query($enlace, $queryp1g) or die(mysqli_error());
$totalRows_p1g = mysqli_num_rows($datos_p1g); 

$queryp1u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '54'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p1u = mysqli_query($enlace, $queryp1u) or die(mysqli_error());
$totalRows_p1u = mysqli_num_rows($datos_p1u);  


$totp1 =$totalRows_p1a+$totalRows_p1b+$totalRows_p1c+$totalRows_p1d+$totalRows_p1e+$totalRows_p1f+$totalRows_p1g+$totalRows_p1u;




// pres 2do


$queryp2a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '55'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p2a = mysqli_query($enlace, $queryp2a) or die(mysqli_error());
$totalRows_p2a = mysqli_num_rows($datos_p2a);

$queryp2b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '55'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p2b = mysqli_query($enlace, $queryp2b) or die(mysqli_error());
$totalRows_p2b = mysqli_num_rows($datos_p2b); 

$queryp2c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '55'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p2c = mysqli_query($enlace, $queryp2c) or die(mysqli_error());
$totalRows_p2c = mysqli_num_rows($datos_p2c); 

$queryp2d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '55'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p2d = mysqli_query($enlace, $queryp2d) or die(mysqli_error());
$totalRows_p2d = mysqli_num_rows($datos_p2d); 

$queryp2e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '55'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p2e = mysqli_query($enlace, $queryp2e) or die(mysqli_error());
$totalRows_p2e = mysqli_num_rows($datos_p2e); 

$queryp2f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '55'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p2f = mysqli_query($enlace, $queryp2f) or die(mysqli_error());
$totalRows_p2f = mysqli_num_rows($datos_p2f); 

$queryp2g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '55'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p2g = mysqli_query($enlace, $queryp2g) or die(mysqli_error());
$totalRows_p2g = mysqli_num_rows($datos_p2g); 

$queryp2u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '55'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p2u = mysqli_query($enlace, $queryp2u) or die(mysqli_error());
$totalRows_p2u = mysqli_num_rows($datos_p2u);  

$totp2 = $totalRows_p2a+$totalRows_p2b+$totalRows_p2c+$totalRows_p2d+$totalRows_p2e+$totalRows_p2f+$totalRows_p2g+$totalRows_p2u;


// pres 3er


$queryp3a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '56'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p3a = mysqli_query($enlace, $queryp3a) or die(mysqli_error());
$totalRows_p3a = mysqli_num_rows($datos_p3a);

$queryp3b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '56'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p3b = mysqli_query($enlace, $queryp3b) or die(mysqli_error());
$totalRows_p3b = mysqli_num_rows($datos_p3b); 

$queryp3c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '56'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p3c = mysqli_query($enlace, $queryp3c) or die(mysqli_error());
$totalRows_p3c = mysqli_num_rows($datos_p3c); 

$queryp3d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '56'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p3d = mysqli_query($enlace, $queryp3d) or die(mysqli_error());
$totalRows_p3d = mysqli_num_rows($datos_p3d); 

$queryp3e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '56'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p3e = mysqli_query($enlace, $queryp3e) or die(mysqli_error());
$totalRows_p3e = mysqli_num_rows($datos_p3e); 

$queryp3f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '56'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p3f = mysqli_query($enlace, $queryp3f) or die(mysqli_error());
$totalRows_p3f = mysqli_num_rows($datos_p3f); 

$queryp3g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '56'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p3g = mysqli_query($enlace, $queryp3g) or die(mysqli_error());
$totalRows_p3g = mysqli_num_rows($datos_p3g); 

$queryp3u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '56'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_p3u = mysqli_query($enlace, $queryp3u) or die(mysqli_error());
$totalRows_p3u = mysqli_num_rows($datos_p3u);  

$totp3 = $totalRows_p3a+$totalRows_p3b+$totalRows_p3c+$totalRows_p3d+$totalRows_p3e+$totalRows_p3f+$totalRows_p3g+$totalRows_p3u;





// grado 1


$queryg1a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '35'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g1a = mysqli_query($enlace, $queryg1a) or die(mysqli_error());
$totalRows_g1a = mysqli_num_rows($datos_g1a);

$queryg1b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '35'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g1b = mysqli_query($enlace, $queryg1b) or die(mysqli_error());
$totalRows_g1b = mysqli_num_rows($datos_g1b); 

$queryg1c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '35'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g1c = mysqli_query($enlace, $queryg1c) or die(mysqli_error());
$totalRows_g1c = mysqli_num_rows($datos_g1c); 

$queryg1d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '35'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g1d = mysqli_query($enlace, $queryg1d) or die(mysqli_error());
$totalRows_g1d = mysqli_num_rows($datos_g1d); 

$queryg1e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '35'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g1e = mysqli_query($enlace, $queryg1e) or die(mysqli_error());
$totalRows_g1e = mysqli_num_rows($datos_g1e); 

$queryg1f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '35'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g1f = mysqli_query($enlace, $queryg1f) or die(mysqli_error());
$totalRows_g1f = mysqli_num_rows($datos_g1f); 

$queryg1g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '35'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g1g = mysqli_query($enlace, $queryg1g) or die(mysqli_error());
$totalRows_g1g = mysqli_num_rows($datos_g1g); 

$queryg1u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '35'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g1u = mysqli_query($enlace, $queryg1u) or die(mysqli_error());
$totalRows_g1u = mysqli_num_rows($datos_g1u);  

$totg1 = $totalRows_g1a+$totalRows_g1b+$totalRows_g1c+$totalRows_g1d+$totalRows_g1e+$totalRows_g1f+$totalRows_g1g+$totalRows_g1u;






// grado 2


$queryg2a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '36'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g2a = mysqli_query($enlace, $queryg2a) or die(mysqli_error());
$totalRows_g2a = mysqli_num_rows($datos_g2a);

$queryg2b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '36'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g2b = mysqli_query($enlace, $queryg2b) or die(mysqli_error());
$totalRows_g2b = mysqli_num_rows($datos_g2b); 

$queryg2c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '36'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g2c = mysqli_query($enlace, $queryg2c) or die(mysqli_error());
$totalRows_g2c = mysqli_num_rows($datos_g2c); 

$queryg2d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '36'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g2d = mysqli_query($enlace, $queryg2d) or die(mysqli_error());
$totalRows_g2d = mysqli_num_rows($datos_g2d); 

$queryg2e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '36'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g2e = mysqli_query($enlace, $queryg2e) or die(mysqli_error());
$totalRows_g2e = mysqli_num_rows($datos_g2e); 

$queryg2f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '36'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g2f = mysqli_query($enlace, $queryg2f) or die(mysqli_error());
$totalRows_g2f = mysqli_num_rows($datos_g2f); 

$queryg2g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '36'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g2g = mysqli_query($enlace, $queryg2g) or die(mysqli_error());
$totalRows_g2g = mysqli_num_rows($datos_g2g); 

$queryg2u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '36'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g2u = mysqli_query($enlace, $queryg2u) or die(mysqli_error());
$totalRows_g2u = mysqli_num_rows($datos_g2u);  

$totg2 = $totalRows_g2a+$totalRows_g2b+$totalRows_g2c+$totalRows_g2d+$totalRows_g2e+$totalRows_g2f+$totalRows_g2g+$totalRows_g2u;










// grado 3


$queryg3a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '37'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g3a = mysqli_query($enlace, $queryg3a) or die(mysqli_error());
$totalRows_g3a = mysqli_num_rows($datos_g3a);

$queryg3b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '37'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g3b = mysqli_query($enlace, $queryg3b) or die(mysqli_error());
$totalRows_g3b = mysqli_num_rows($datos_g3b); 

$queryg3c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '37'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g3c = mysqli_query($enlace, $queryg3c) or die(mysqli_error());
$totalRows_g3c = mysqli_num_rows($datos_g3c); 

$queryg3d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '37'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g3d = mysqli_query($enlace, $queryg3d) or die(mysqli_error());
$totalRows_g3d = mysqli_num_rows($datos_g3d); 

$queryg3e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '37'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g3e = mysqli_query($enlace, $queryg3e) or die(mysqli_error());
$totalRows_g3e = mysqli_num_rows($datos_g3e); 

$queryg3f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '37'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g3f = mysqli_query($enlace, $queryg3f) or die(mysqli_error());
$totalRows_g3f = mysqli_num_rows($datos_g3f); 

$queryg3g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '37'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g3g = mysqli_query($enlace, $queryg3g) or die(mysqli_error());
$totalRows_g3g = mysqli_num_rows($datos_g3g); 

$queryg3u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '37'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g3u = mysqli_query($enlace, $queryg3u) or die(mysqli_error());
$totalRows_g3u = mysqli_num_rows($datos_g3u);  

$totg3 = $totalRows_g3a+$totalRows_g3b+$totalRows_g3c+$totalRows_g3d+$totalRows_g3e+$totalRows_g3f+$totalRows_g3g+$totalRows_g3u;









// grado 4


$queryg4a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '38'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g4a = mysqli_query($enlace, $queryg4a) or die(mysqli_error());
$totalRows_g4a = mysqli_num_rows($datos_g4a);

$queryg4b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '38'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g4b = mysqli_query($enlace, $queryg4b) or die(mysqli_error());
$totalRows_g4b = mysqli_num_rows($datos_g4b); 

$queryg4c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '38'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g4c = mysqli_query($enlace, $queryg4c) or die(mysqli_error());
$totalRows_g4c = mysqli_num_rows($datos_g4c); 

$queryg4d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '38'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g4d = mysqli_query($enlace, $queryg4d) or die(mysqli_error());
$totalRows_g4d = mysqli_num_rows($datos_g4d); 

$queryg4e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '38'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g4e = mysqli_query($enlace, $queryg4e) or die(mysqli_error());
$totalRows_g4e = mysqli_num_rows($datos_g4e); 

$queryg4f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '38'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g4f = mysqli_query($enlace, $queryg4f) or die(mysqli_error());
$totalRows_g4f = mysqli_num_rows($datos_g4f); 

$queryg4g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '38'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g4g = mysqli_query($enlace, $queryg4g) or die(mysqli_error());
$totalRows_g4g = mysqli_num_rows($datos_g4g); 

$queryg4u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '38'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g4u = mysqli_query($enlace, $queryg4u) or die(mysqli_error());
$totalRows_g4u = mysqli_num_rows($datos_g4u);  

$totg4 = $totalRows_g4a+$totalRows_g4b+$totalRows_g4c+$totalRows_g4d+$totalRows_g4e+$totalRows_g4f+$totalRows_g4g+$totalRows_g4u;






// grado 5


$queryg5a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '40'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g5a = mysqli_query($enlace, $queryg5a) or die(mysqli_error());
$totalRows_g5a = mysqli_num_rows($datos_g5a);

$queryg5b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '40'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g5b = mysqli_query($enlace, $queryg5b) or die(mysqli_error());
$totalRows_g5b = mysqli_num_rows($datos_g5b); 

$queryg5c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '40'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g5c = mysqli_query($enlace, $queryg5c) or die(mysqli_error());
$totalRows_g5c = mysqli_num_rows($datos_g5c); 

$queryg5d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '40'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g5d = mysqli_query($enlace, $queryg5d) or die(mysqli_error());
$totalRows_g5d = mysqli_num_rows($datos_g5d); 

$queryg5e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '40'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g5e = mysqli_query($enlace, $queryg5e) or die(mysqli_error());
$totalRows_g5e = mysqli_num_rows($datos_g5e); 

$queryg5f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '40'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g5f = mysqli_query($enlace, $queryg5f) or die(mysqli_error());
$totalRows_g5f = mysqli_num_rows($datos_g5f); 

$queryg5g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '40'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g5g = mysqli_query($enlace, $queryg5g) or die(mysqli_error());
$totalRows_g5g = mysqli_num_rows($datos_g5g); 

$queryg5u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '40'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g5u = mysqli_query($enlace, $queryg5u) or die(mysqli_error());
$totalRows_g5u = mysqli_num_rows($datos_g5u);  

$totg5 = $totalRows_g5a+$totalRows_g5b+$totalRows_g5c+$totalRows_g5d+$totalRows_g5e+$totalRows_g5f+$totalRows_g5g+$totalRows_g5u;





// grado 6


$queryg6a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '41'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g6a = mysqli_query($enlace, $queryg6a) or die(mysqli_error());
$totalRows_g6a = mysqli_num_rows($datos_g6a);

$queryg6b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '41'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g6b = mysqli_query($enlace, $queryg6b) or die(mysqli_error());
$totalRows_g6b = mysqli_num_rows($datos_g6b); 

$queryg6c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '41'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g6c = mysqli_query($enlace, $queryg6c) or die(mysqli_error());
$totalRows_g6c = mysqli_num_rows($datos_g6c); 

$queryg6d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '41'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g6d = mysqli_query($enlace, $queryg6d) or die(mysqli_error());
$totalRows_g6d = mysqli_num_rows($datos_g6d); 

$queryg6e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '41'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g6e = mysqli_query($enlace, $queryg6e) or die(mysqli_error());
$totalRows_g6e = mysqli_num_rows($datos_g6e); 

$queryg6f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '41'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g6f = mysqli_query($enlace, $queryg6f) or die(mysqli_error());
$totalRows_g6f = mysqli_num_rows($datos_g6f); 

$queryg6g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '41'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g6g = mysqli_query($enlace, $queryg6g) or die(mysqli_error());
$totalRows_g6g = mysqli_num_rows($datos_g6g); 

$queryg6u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '41'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_g6u = mysqli_query($enlace, $queryg6u) or die(mysqli_error());
$totalRows_g6u = mysqli_num_rows($datos_g6u);  

$totg6 = $totalRows_g6a+$totalRows_g6b+$totalRows_g6c+$totalRows_g6d+$totalRows_g6e+$totalRows_g6f+$totalRows_g6g+$totalRows_g6u;





// b1


$queryb1a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '42'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b1a = mysqli_query($enlace, $queryb1a) or die(mysqli_error());
$totalRows_b1a = mysqli_num_rows($datos_b1a);

$queryb1b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '42'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b1b = mysqli_query($enlace, $queryb1b) or die(mysqli_error());
$totalRows_b1b = mysqli_num_rows($datos_b1b); 

$queryb1c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '42'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b1c = mysqli_query($enlace, $queryb1c) or die(mysqli_error());
$totalRows_b1c = mysqli_num_rows($datos_b1c); 

$queryb1d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '42'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b1d = mysqli_query($enlace, $queryb1d) or die(mysqli_error());
$totalRows_b1d = mysqli_num_rows($datos_b1d); 

$queryb1e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '42'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b1e = mysqli_query($enlace, $queryb1e) or die(mysqli_error());
$totalRows_b1e = mysqli_num_rows($datos_b1e); 

$queryb1f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '42'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b1f = mysqli_query($enlace, $queryb1f) or die(mysqli_error());
$totalRows_b1f = mysqli_num_rows($datos_b1f); 

$queryb1g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '42'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b1g = mysqli_query($enlace, $queryb1g) or die(mysqli_error());
$totalRows_b1g = mysqli_num_rows($datos_b1g); 

$queryb1u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '42'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b1u = mysqli_query($enlace, $queryb1u) or die(mysqli_error());
$totalRows_b1u = mysqli_num_rows($datos_b1u);  

$totb1 = $totalRows_b1a+$totalRows_b1b+$totalRows_b1c+$totalRows_b1d+$totalRows_b1e+$totalRows_b1f+$totalRows_b1g+$totalRows_b1u;





// b2


$queryb2a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '43'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b2a = mysqli_query($enlace, $queryb2a) or die(mysqli_error());
$totalRows_b2a = mysqli_num_rows($datos_b2a);

$queryb2b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '43'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b2b = mysqli_query($enlace, $queryb2b) or die(mysqli_error());
$totalRows_b2b = mysqli_num_rows($datos_b2b); 

$queryb2c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '43'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b2c = mysqli_query($enlace, $queryb2c) or die(mysqli_error());
$totalRows_b2c = mysqli_num_rows($datos_b2c); 

$queryb2d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '43'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b2d = mysqli_query($enlace, $queryb2d) or die(mysqli_error());
$totalRows_b2d = mysqli_num_rows($datos_b2d); 

$queryb2e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '43'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b2e = mysqli_query($enlace, $queryb2e) or die(mysqli_error());
$totalRows_b2e = mysqli_num_rows($datos_b2e); 

$queryb2f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '43'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b2f = mysqli_query($enlace, $queryb2f) or die(mysqli_error());
$totalRows_b2f = mysqli_num_rows($datos_b2f); 

$queryb2g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '43'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b2g = mysqli_query($enlace, $queryb2g) or die(mysqli_error());
$totalRows_b2g = mysqli_num_rows($datos_b2g); 

$queryb2u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '43'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b2u = mysqli_query($enlace, $queryb2u) or die(mysqli_error());
$totalRows_b2u = mysqli_num_rows($datos_b2u);  

$totb2 = $totalRows_b2a+$totalRows_b2b+$totalRows_b2c+$totalRows_b2d+$totalRows_b2e+$totalRows_b2f+$totalRows_b2g+$totalRows_b2u;





// b3


$queryb3a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '44'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b3a = mysqli_query($enlace, $queryb3a) or die(mysqli_error());
$totalRows_b3a = mysqli_num_rows($datos_b3a);

$queryb3b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '44'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b3b = mysqli_query($enlace, $queryb3b) or die(mysqli_error());
$totalRows_b3b = mysqli_num_rows($datos_b3b); 

$queryb3c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '44'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b3c = mysqli_query($enlace, $queryb3c) or die(mysqli_error());
$totalRows_b3c = mysqli_num_rows($datos_b3c); 

$queryb3d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '44'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b3d = mysqli_query($enlace, $queryb3d) or die(mysqli_error());
$totalRows_b3d = mysqli_num_rows($datos_b3d); 

$queryb3e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '44'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b3e = mysqli_query($enlace, $queryb3e) or die(mysqli_error());
$totalRows_b3e = mysqli_num_rows($datos_b3e); 

$queryb3f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '44'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b3f = mysqli_query($enlace, $queryb3f) or die(mysqli_error());
$totalRows_b3f = mysqli_num_rows($datos_b3f); 

$queryb3g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '44'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b3g = mysqli_query($enlace, $queryb3g) or die(mysqli_error());
$totalRows_b3g = mysqli_num_rows($datos_b3g); 

$queryb3u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '44'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b3u = mysqli_query($enlace, $queryb3u) or die(mysqli_error());
$totalRows_b3u = mysqli_num_rows($datos_b3u);  

$totb3 = $totalRows_b3a+$totalRows_b3b+$totalRows_b3c+$totalRows_b3d+$totalRows_b3e+$totalRows_b3f+$totalRows_b3g+$totalRows_b3u;





// b4


$queryb4a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '45'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b4a = mysqli_query($enlace, $queryb4a) or die(mysqli_error());
$totalRows_b4a = mysqli_num_rows($datos_b4a);

$queryb4b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '45'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b4b = mysqli_query($enlace, $queryb4b) or die(mysqli_error());
$totalRows_b4b = mysqli_num_rows($datos_b4b); 

$queryb4c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '45'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b4c = mysqli_query($enlace, $queryb4c) or die(mysqli_error());
$totalRows_b4c = mysqli_num_rows($datos_b4c); 

$queryb4d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '45'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b4d = mysqli_query($enlace, $queryb4d) or die(mysqli_error());
$totalRows_b4d = mysqli_num_rows($datos_b4d); 

$queryb4e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '45'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b4e = mysqli_query($enlace, $queryb4e) or die(mysqli_error());
$totalRows_b4e = mysqli_num_rows($datos_b4e); 

$queryb4f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '45'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b4f = mysqli_query($enlace, $queryb4f) or die(mysqli_error());
$totalRows_b4f = mysqli_num_rows($datos_b4f); 

$queryb4g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '45'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b4g = mysqli_query($enlace, $queryb4g) or die(mysqli_error());
$totalRows_b4g = mysqli_num_rows($datos_b4g); 

$queryb4u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '45'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b4u = mysqli_query($enlace, $queryb4u) or die(mysqli_error());
$totalRows_b4u = mysqli_num_rows($datos_b4u);  

$totb4 = $totalRows_b4a+$totalRows_b4b+$totalRows_b4c+$totalRows_b4d+$totalRows_b4e+$totalRows_b4f+$totalRows_b4g+$totalRows_b4u;





// b5


$queryb5a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '46'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b5a = mysqli_query($enlace, $queryb5a) or die(mysqli_error());
$totalRows_b5a = mysqli_num_rows($datos_b5a);

$queryb5b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '46'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b5b = mysqli_query($enlace, $queryb5b) or die(mysqli_error());
$totalRows_b5b = mysqli_num_rows($datos_b5b); 

$queryb5c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '46'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b5c = mysqli_query($enlace, $queryb5c) or die(mysqli_error());
$totalRows_b5c = mysqli_num_rows($datos_b5c); 

$queryb5d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '46'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b5d = mysqli_query($enlace, $queryb5d) or die(mysqli_error());
$totalRows_b5d = mysqli_num_rows($datos_b5d); 

$queryb5e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '46'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b5e = mysqli_query($enlace, $queryb5e) or die(mysqli_error());
$totalRows_b5e = mysqli_num_rows($datos_b5e); 

$queryb5f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '46'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b5f = mysqli_query($enlace, $queryb5f) or die(mysqli_error());
$totalRows_b5f = mysqli_num_rows($datos_b5f); 

$queryb5g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '46'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b5g = mysqli_query($enlace, $queryb5g) or die(mysqli_error());
$totalRows_b5g = mysqli_num_rows($datos_b5g); 

$queryb5u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '46'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b5u = mysqli_query($enlace, $queryb5u) or die(mysqli_error());
$totalRows_b5u = mysqli_num_rows($datos_b5u);  

$totb5 = $totalRows_b5a+$totalRows_b5b+$totalRows_b5c+$totalRows_b5d+$totalRows_b5e+$totalRows_b5f+$totalRows_b5g+$totalRows_b5u;





// b6


$queryb6a = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '53'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b6a = mysqli_query($enlace, $queryb6a) or die(mysqli_error());
$totalRows_b6a = mysqli_num_rows($datos_b6a);

$queryb6b = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '53'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b6b = mysqli_query($enlace, $queryb6b) or die(mysqli_error());
$totalRows_b6b = mysqli_num_rows($datos_b6b); 

$queryb6c = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '53'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b6c = mysqli_query($enlace, $queryb6c) or die(mysqli_error());
$totalRows_b6c = mysqli_num_rows($datos_b6c); 

$queryb6d = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '53'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b6d = mysqli_query($enlace, $queryb6d) or die(mysqli_error());
$totalRows_b6d = mysqli_num_rows($datos_b6d); 

$queryb6e = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '53'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b6e = mysqli_query($enlace, $queryb6e) or die(mysqli_error());
$totalRows_b6e = mysqli_num_rows($datos_b6e); 

$queryb6f = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '53'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b6f = mysqli_query($enlace, $queryb6f) or die(mysqli_error());
$totalRows_b6f = mysqli_num_rows($datos_b6f); 

$queryb6g = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '53'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b6g = mysqli_query($enlace, $queryb6g) or die(mysqli_error());
$totalRows_b6g = mysqli_num_rows($datos_b6g); 

$queryb6u = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '53'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

$datos_b6u = mysqli_query($enlace, $queryb6u) or die(mysqli_error());
$totalRows_b6u = mysqli_num_rows($datos_b6u);  

$totb6 = $totalRows_b6a+$totalRows_b6b+$totalRows_b6c+$totalRows_b6d+$totalRows_b6e+$totalRows_b6f+$totalRows_b6g+$totalRows_b6u;

?>