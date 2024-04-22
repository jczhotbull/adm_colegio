<?php

$query = "SELECT * FROM reg_estu_repre_all, reg_representante, reg_estu_actual, divisiones, grados, reg_estudiantes 

         WHERE  reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud

         and divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         
        
         and  id_seccion = '$el_statusXX'
         and  el_activo = '1'
         and  cursa_actualmente = '$el_cicloXX'
         and  divisiones.id_division = '$el_grupoXX'
         and retirado_si_o_no = '0'
        
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC ";

$datos_estudiantes = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_estudiantes = mysqli_fetch_array($datos_estudiantes); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estudiantes = mysqli_num_rows($datos_estudiantes); 





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


 