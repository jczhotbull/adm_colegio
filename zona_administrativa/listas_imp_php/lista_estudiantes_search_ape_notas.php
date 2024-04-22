<?php

$consul = $_GET['criterio'];

$query = "SELECT * FROM  reg_estudiantes, reg_estu_actual

WHERE  reg_estu_actual.id_estud = reg_estudiantes.id_estud
        
      /*   and  reg_estu_actual.el_activo = '1'  */

         and  reg_estu_actual.cursa_actualmente = '$el_cicloXX'
         
        

         and reg_estudiantes.apellidos_estu LIKE '%".$consul."%'  GROUP BY reg_estudiantes.id_estud ";


$datos_estudiantes = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_estudiantes = mysqli_fetch_array($datos_estudiantes); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estudiantes = mysqli_num_rows($datos_estudiantes); 





mysqli_close($enlace);





?>


 