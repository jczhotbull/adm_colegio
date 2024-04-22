<?php


$consul = $_GET['criterio'];

$query_doc = "SELECT * FROM  reg_estu_actual, (
    
SELECT reg_estudiantes.*, religiones.tipo_religion, tb_medicos.nombre_medico 
FROM reg_estudiantes

INNER JOIN tb_medicos ON reg_estudiantes.id_medico=tb_medicos.id_medico
INNER JOIN religiones ON reg_estudiantes.id_religion=religiones.id_religion  ) AS Virtual_table

WHERE  reg_estu_actual.id_estud = Virtual_table.id_estud
                 
         and  reg_estu_actual.el_activo = '1'

         and  reg_estu_actual.cursa_actualmente = '$el_cicloXX'
         
         and Virtual_table.retirado_si_o_no = '0'

        
         and Virtual_table.tipo_religion LIKE '%".$consul."%' or Virtual_table.nombre_medico LIKE '%".$consul."%' or Virtual_table.ci_estu LIKE '".$consul."%'
         OR  Virtual_table.nombre_estu LIKE '%".$consul."%' OR  Virtual_table.apellidos_estu LIKE '%".$consul."%'   GROUP BY Virtual_table.id_estud ";

$datos_doc = mysqli_query($enlace, $query_doc) or die(mysqli_error());

$row_datos_doc = mysqli_fetch_array($datos_doc); 



$totalRows_datos_doc = mysqli_num_rows($datos_doc); 




mysqli_close($enlace);


?>