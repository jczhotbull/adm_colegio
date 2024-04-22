<?php


$query = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual 
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$el_cicloXX'


         and retirado_si_o_no = '0'  
         and inscrito_si_o_no = '1' 
         
         and  divisiones.id_division = '$divisionXX'         
               
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$datos_control = mysqli_query($enlace, $query) or die(mysqli_error());
$row_datos_control = mysqli_fetch_array($datos_control); 
$totalRows_control = mysqli_num_rows($datos_control); 






mysqli_close($enlace);





?>


 