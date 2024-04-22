<?php


$query = "SELECT * FROM reg_estu_actual, grados, extra_catedra, reg_estudiantes  
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and extra_catedra.id_estud = reg_estudiantes.id_estud        
         
         and  reg_estu_actual.el_activo = '1'
         and  reg_estu_actual.fecha_inscripcion != ''  
         and  reg_estu_actual.cursa_actualmente = '$el_cicloXX'
         and id_area = '$consulXX'         

         and retirado_si_o_no = '0'
         and inscrito_si_o_no = '1'
                 
         GROUP BY reg_estudiantes.id_estud ORDER BY reg_estudiantes.apellidos_estu ASC" ;

$datos_control = mysqli_query($enlace, $query) or die(mysqli_error());
$row_datos_control = mysqli_fetch_array($datos_control); 
$totalRows_control = mysqli_num_rows($datos_control); 





$queryF = "SELECT * FROM reg_estu_actual, grados, extra_catedra, reg_estudiantes  
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and extra_catedra.id_estud = reg_estudiantes.id_estud        
         
         and  reg_estu_actual.el_activo = '1'
         and  reg_estu_actual.fecha_inscripcion != ''  
         and  reg_estu_actual.cursa_actualmente = '$el_cicloXX'
         and id_area = '$consulXX'         

         and retirado_si_o_no = '0'
         and inscrito_si_o_no = '1'
         and id_sexo = '1'
                 
         GROUP BY reg_estudiantes.id_estud ORDER BY reg_estudiantes.apellidos_estu ASC" ;

$datos_controlF = mysqli_query($enlace, $queryF) or die(mysqli_error());
$row_datos_controlF = mysqli_fetch_array($datos_controlF); 
$totalRows_controlF = mysqli_num_rows($datos_controlF); 


$totalRows_controlM = $totalRows_control - $totalRows_controlF; 


mysqli_close($enlace);


?>


 