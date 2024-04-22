<?php


$query = "SELECT * FROM reg_estu_actual, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
                
         
         and  el_activo = '1'
         and  cursa_actualmente = '$el_cicloXX'
               
         and retirado_si_o_no = '1'
         and id_sexo = '$el_sexoXX'
                
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$datos_control = mysqli_query($enlace, $query) or die(mysqli_error());
$row_datos_control = mysqli_fetch_array($datos_control); 
$totalRows_control = mysqli_num_rows($datos_control); 



mysqli_close($enlace);



?>


 