<?php


$query = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  el_activo = '1'
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$el_cicloXX'
         and  grados.id_grado = '$el_gradoXX'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$datos_control = mysqli_query($enlace, $query) or die(mysqli_error());
$row_datos_control = mysqli_fetch_array($datos_control); 
$totalRows_control = mysqli_num_rows($datos_control); 




$queryF = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  ( id_seccion = '3' or id_seccion = '4' or id_seccion = '5' or id_seccion = '6' or id_seccion = '7' or id_seccion = '8' or id_seccion = '10')
         and  el_activo = '1'
         and  inscrito_si_o_no = '1'
         and fecha_inscripcion != ''
         and  cursa_actualmente = '$el_cicloXX'
         and  grados.id_grado = '$el_gradoXX'         
         and retirado_si_o_no = '0'
          and id_sexo = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_controlF = mysqli_query($enlace, $queryF) or die(mysqli_error());

$totalRows_controlF = mysqli_num_rows($datos_controlF); 



$totalRows_controlM = $totalRows_control - $totalRows_controlF;






mysqli_close($enlace);





?>


 