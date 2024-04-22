<?php


$query_doc_inicial = "SELECT * FROM reg_estu_actual, divisiones, grados, citas, reg_estudiantes 
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and  citas.id_estud = reg_estudiantes.id_estud
         and  divisiones.id_division = grados.id_division
         and  grados.id_grado = reg_estu_actual.grado_actual        
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '1'          
         and retirado_si_o_no = '0'
         and citas.fecha_cita != ''     
         GROUP BY reg_estudiantes.id_estud";

$datos_doc_inicial = mysqli_query($enlace, $query_doc_inicial) or die(mysqli_error());
$totalRows_datos_doc_inicial = mysqli_num_rows($datos_doc_inicial); 



$query_doc_inicialf = "SELECT * FROM reg_estu_actual, divisiones, grados, citas, reg_estudiantes 
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and  citas.id_estud = reg_estudiantes.id_estud
         and  divisiones.id_division = grados.id_division
         and  grados.id_grado = reg_estu_actual.grado_actual        
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '1'          
         and retirado_si_o_no = '0'
         and id_sexo = '1'
         and citas.fecha_cita != ''       
         GROUP BY reg_estudiantes.id_estud";

$datos_doc_inicialf = mysqli_query($enlace, $query_doc_inicialf) or die(mysqli_error());
$totalRows_datos_doc_inicialf = mysqli_num_rows($datos_doc_inicialf); 


$totalRows_datos_doc_inicialm = $totalRows_datos_doc_inicial - $totalRows_datos_doc_inicialf;




$query_doc_basica = "SELECT * FROM reg_estu_actual, divisiones, grados, citas, reg_estudiantes 
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and  citas.id_estud = reg_estudiantes.id_estud
         and  divisiones.id_division = grados.id_division
         and  grados.id_grado = reg_estu_actual.grado_actual        
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '2'          
         and retirado_si_o_no = '0'
         and citas.fecha_cita != ''       
         GROUP BY reg_estudiantes.id_estud";

$datos_doc_basica = mysqli_query($enlace, $query_doc_basica) or die(mysqli_error());
$totalRows_datos_doc_basica = mysqli_num_rows($datos_doc_basica); 



$query_doc_basicaf = "SELECT * FROM reg_estu_actual, divisiones, grados, citas, reg_estudiantes 
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and  citas.id_estud = reg_estudiantes.id_estud
         and  divisiones.id_division = grados.id_division
         and  grados.id_grado = reg_estu_actual.grado_actual        
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '2'          
         and retirado_si_o_no = '0'
         and id_sexo = '1'
         and citas.fecha_cita != ''       
         GROUP BY reg_estudiantes.id_estud";

$datos_doc_basicaf = mysqli_query($enlace, $query_doc_basicaf) or die(mysqli_error());
$totalRows_datos_doc_basicaf = mysqli_num_rows($datos_doc_basicaf); 


$totalRows_datos_doc_basicam = $totalRows_datos_doc_basica - $totalRows_datos_doc_basicaf;




$query_doc_media = "SELECT * FROM reg_estu_actual, divisiones, grados, citas, reg_estudiantes 
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and  citas.id_estud = reg_estudiantes.id_estud
         and  divisiones.id_division = grados.id_division
         and  grados.id_grado = reg_estu_actual.grado_actual        
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '5'          
         and retirado_si_o_no = '0'
         and citas.fecha_cita != ''      
         GROUP BY reg_estudiantes.id_estud";

$datos_doc_media = mysqli_query($enlace, $query_doc_media) or die(mysqli_error());
$totalRows_datos_doc_media = mysqli_num_rows($datos_doc_media); 



$query_doc_mediaf = "SELECT * FROM reg_estu_actual, divisiones, grados, citas, reg_estudiantes 
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and  citas.id_estud = reg_estudiantes.id_estud
         and  divisiones.id_division = grados.id_division
         and  grados.id_grado = reg_estu_actual.grado_actual        
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '5'          
         and retirado_si_o_no = '0'
         and id_sexo = '1'
        and citas.fecha_cita != ''       
         GROUP BY reg_estudiantes.id_estud";

$datos_doc_mediaf = mysqli_query($enlace, $query_doc_mediaf) or die(mysqli_error());
$totalRows_datos_doc_mediaf = mysqli_num_rows($datos_doc_mediaf); 


$totalRows_datos_doc_mediam = $totalRows_datos_doc_media - $totalRows_datos_doc_mediaf;





$query_doc_mediag = "SELECT * FROM reg_estu_actual, divisiones, grados, citas, reg_estudiantes 
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and  citas.id_estud = reg_estudiantes.id_estud
         and  divisiones.id_division = grados.id_division
         and  grados.id_grado = reg_estu_actual.grado_actual        
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '3'          
         and retirado_si_o_no = '0'
         and citas.fecha_cita != ''      
         GROUP BY reg_estudiantes.id_estud";

$datos_doc_mediag = mysqli_query($enlace, $query_doc_mediag) or die(mysqli_error());
$totalRows_datos_doc_mediag = mysqli_num_rows($datos_doc_mediag); 



$query_doc_mediagf = "SELECT * FROM reg_estu_actual, divisiones, grados, citas, reg_estudiantes 
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and  citas.id_estud = reg_estudiantes.id_estud
         and  divisiones.id_division = grados.id_division
         and  grados.id_grado = reg_estu_actual.grado_actual        
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '3'          
         and retirado_si_o_no = '0'
         and id_sexo = '1'
         and citas.fecha_cita != ''      
         GROUP BY reg_estudiantes.id_estud";

$datos_doc_mediagf = mysqli_query($enlace, $query_doc_mediagf) or die(mysqli_error());
$totalRows_datos_doc_mediagf = mysqli_num_rows($datos_doc_mediagf); 


$totalRows_datos_doc_mediagm = $totalRows_datos_doc_mediag - $totalRows_datos_doc_mediagf;



$consul = $_GET['criterio'];
$dividivi = $_GET['dividivi'];


if ($dividivi == '1' or $dividivi == '2' or $dividivi == '5' or $dividivi == '3' or  $dividivi == '12' ) {


   if ($dividivi == '1' or $dividivi == '2' or $dividivi == '5' or $dividivi == '3' ) {


   $query_doc = "SELECT * FROM reg_estu_actual, divisiones, grados, citas, reg_estudiantes 
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and  citas.id_estud = reg_estudiantes.id_estud
         and  divisiones.id_division = grados.id_division
         and  grados.id_grado = reg_estu_actual.grado_actual        
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  divisiones.id_division = '$dividivi'                 
         and retirado_si_o_no = '0'
         and citas.fecha_cita != ''      
         GROUP BY reg_estudiantes.id_estud";

$datos_doc = mysqli_query($enlace, $query_doc) or die(mysqli_error());

$row_datos_doc = mysqli_fetch_array($datos_doc); 

$totalRows_datos_doc = mysqli_num_rows($datos_doc); 

}

else { 

$query_doc = "SELECT * FROM reg_estu_actual, divisiones, grados, citas, reg_estudiantes 
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and  citas.id_estud = reg_estudiantes.id_estud
         and  divisiones.id_division = grados.id_division
         and  grados.id_grado = reg_estu_actual.grado_actual        
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
                         
         and retirado_si_o_no = '0'
         and day(citas.fecha_cita) =day(NOW())
         and month(citas.fecha_cita) =month(NOW())
         and year(citas.fecha_cita) =year(NOW())      
         GROUP BY reg_estudiantes.id_estud";

$datos_doc = mysqli_query($enlace, $query_doc) or die(mysqli_error());

$row_datos_doc = mysqli_fetch_array($datos_doc); 

$totalRows_datos_doc = mysqli_num_rows($datos_doc); 

}


}






else {


$query_doc = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud
         
         and  divisiones.id_division = grados.id_division
         and  grados.id_grado = reg_estu_actual.grado_actual        
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  reg_estudiantes.apellidos_estu LIKE '%".$consul."%'          
         and retirado_si_o_no = '0'
              
         GROUP BY reg_estudiantes.id_estud";

$datos_doc = mysqli_query($enlace, $query_doc) or die(mysqli_error());

$row_datos_doc = mysqli_fetch_array($datos_doc); 

$totalRows_datos_doc = mysqli_num_rows($datos_doc); 

}







mysqli_close($enlace);


?>