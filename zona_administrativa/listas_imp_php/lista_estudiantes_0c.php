<?php

$consul = $_GET['criterio'];

$query = "SELECT * FROM  reg_estu_actual, (
    
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

$datos_estudiantes = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_estudiantes = mysqli_fetch_array($datos_estudiantes); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estudiantes = mysqli_num_rows($datos_estudiantes); 



/*

$query = "SELECT * FROM religiones, reg_estu_repre_all, reg_representante, reg_estu_actual, reg_estudiantes 

         WHERE  reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estudiantes.id_religion = religiones.id_religion 
         
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         
         
        
         and  id_seccion = '$el_statusXX'
         and  el_activo = '1'
         and  cursa_actualmente = '$el_cicloXX'
         
         and retirado_si_o_no = '0'
        
         and tipo_religion LIKE '%".$consul."%' OR  ci_estu LIKE '%".$consul."%'  OR  nombre_estu LIKE '%".$consul."%' OR  apellidos_estu LIKE '%".$consul."%'    

        GROUP BY reg_estudiantes.id_estud ";

$datos_estudiantes = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_estudiantes = mysqli_fetch_array($datos_estudiantes); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estudiantes = mysqli_num_rows($datos_estudiantes); 


*/



mysqli_close($enlace);


/* antes 

$query = "SELECT * FROM reg_estu_repre_all, reg_representante, religiones, tb_medicos, reg_estudiantes                        
         WHERE religiones.id_religion = reg_estudiantes.id_religion
         and   tb_medicos.id_medico = reg_estudiantes.id_medico       
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and  inscrito_si_o_no = 1 
         GROUP BY estu_expediente ORDER BY apellidos_estu ASC ";



 */


?>


 