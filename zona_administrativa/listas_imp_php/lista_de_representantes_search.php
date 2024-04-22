<?php

$consul = $_GET['criterio'];

$query_de_ids = "SELECT reg_representante.*, tb_parentescos.nombre_parentesco, tb_profesiones.nombre_profesion FROM reg_representante

      INNER JOIN tb_parentescos ON reg_representante.id_parentesco=tb_parentescos.id_parentesco
	  INNER JOIN tb_profesiones ON reg_representante.id_profesion=tb_profesiones.id_profesion 
        
        where status = 1

        and  nombre_parentesco LIKE '%".$consul."%'  OR  nombre_profesion LIKE '%".$consul."%' OR ci_repre LIKE  '".$consul."%'
            OR  nombre_repre LIKE '%".$consul."%'  OR  apellido_repre LIKE '%".$consul."%' GROUP by ci_repre Limit 12";

$datos_de_ids = mysqli_query($enlace, $query_de_ids) or die(mysqli_error());

$row_de_ids = mysqli_fetch_array($datos_de_ids); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_de_ids = mysqli_num_rows($datos_de_ids); 

$id_del_repre_es = $row_de_ids['id_repre'];



if ($totalRows_de_ids == 1) {
  


$query = "SELECT * FROM reg_estu_repre_all, reg_representante, reg_estu_actual, reg_estudiantes, temporada_escolar

    
         WHERE   reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and  reg_estu_repre_all.id_repre = '$id_del_repre_es'
         and  temporada_escolar.id_periodo_es = reg_estu_actual.cursa_actualmente
         /* and  temporada_escolar.next = '8'  */
         and  el_activo = '1'
         and retirado_si_o_no = '0'
         ORDER BY apellidos_estu ASC ";

$datos_estudiantes = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_estudiantes = mysqli_fetch_array($datos_estudiantes); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estudiantes = mysqli_num_rows($datos_estudiantes);


}







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


 