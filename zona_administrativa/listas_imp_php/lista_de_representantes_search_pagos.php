<?php

$consul = $_GET['criterio'];

$query_de_ids = "SELECT reg_representante.*, tb_parentescos.nombre_parentesco, tb_profesiones.nombre_profesion FROM reg_representante

      INNER JOIN tb_parentescos ON reg_representante.id_parentesco=tb_parentescos.id_parentesco
	  INNER JOIN tb_profesiones ON reg_representante.id_profesion=tb_profesiones.id_profesion 
        
        where status = 1

        and  ci_repre LIKE  '".$consul."' limit 1";

$datos_de_ids = mysqli_query($enlace, $query_de_ids) or die(mysqli_error());

$row_de_ids = mysqli_fetch_array($datos_de_ids); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

//$totalRows_de_ids = mysqli_num_rows($datos_de_ids); 





mysqli_close($enlace);




?>


 