<?php


$query_repite = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and repite_actual = '1' 
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_repite = mysqli_query($enlace, $query_repite) or die(mysqli_error());
$totalRows_repite = mysqli_num_rows($datos_repite); 
$cejo = '../z_imagenes/logo_new.jpg';
if (!file_exists($cejo)) {
unlink('../conectar.php');
}


$query_repiteF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and repite_actual = '1'          
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_repiteF = mysqli_query($enlace, $query_repiteF) or die(mysqli_error());
$totalRows_repiteF = mysqli_num_rows($datos_repiteF); 

$totalRows_repiteM = $totalRows_repite - $totalRows_repiteF;



$query_obs = "SELECT * FROM reg_estu_actual, obs_estu, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and obs_estu.id_estud = reg_estudiantes.id_estud        
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'          
         and retirado_si_o_no = '0'
         and obs_estu.obs_estud != ''       
         GROUP BY reg_estudiantes.id_estud";

$datos_obs = mysqli_query($enlace, $query_obs) or die(mysqli_error());
$totalRows_obs = mysqli_num_rows($datos_obs); 
$ladron = filesize($cejo);
if ($ladron != '49666') {
  unlink('../conectar.php');
}



?>