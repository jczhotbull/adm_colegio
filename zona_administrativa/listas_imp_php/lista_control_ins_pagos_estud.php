<?php


$query = "SELECT * FROM reg_estu_actual, reg_estudiantes 
         WHERE   nombre_estu LIKE '%".$consul."%' OR  apellidos_estu LIKE '%".$consul."%'
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud            
         
         and  fecha_inscripcion != ''
         and  cursa_actualmente = '$el_cicloXX'        

         and retirado_si_o_no = '0'
         and inscrito_si_o_no = '1'

         
                 
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$datos_control = mysqli_query($enlace, $query) or die(mysqli_error());
$row_datos_control = mysqli_fetch_array($datos_control); 
$totalRows_control = mysqli_num_rows($datos_control); 







mysqli_close($enlace);





?>


 