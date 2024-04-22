<?php

$query_de_ids = "SELECT id_repre 
FROM reg_representante 
WHERE id_repre not in (
    SELECT id_repre 
    FROM reg_estu_repre_all 
    ) ";

$datos_de_ids = mysqli_query($enlace, $query_de_ids) or die(mysqli_error());

$row_de_ids = mysqli_fetch_array($datos_de_ids); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_de_ids = mysqli_num_rows($datos_de_ids); 





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


 