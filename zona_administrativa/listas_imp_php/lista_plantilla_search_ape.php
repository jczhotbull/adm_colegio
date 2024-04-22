<?php

$consulHJK = $_GET['criterio'];


$query = "SELECT * FROM plantilla_contratados, plantilla_personal
                                 
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
         and plantilla_contratados.status = '1'                
        

            and   apellido_per LIKE '%".$consulHJK."%'
            GROUP by plantilla_personal.apellido_per ";



/*
$query = "SELECT * FROM plantilla_contratados, plantilla_personal
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
            and plantilla_contratados.status = '1'                               
            

            and  ci_per LIKE  '".$consulHJK."%' OR  nombre_per LIKE '%".$consulHJK."%'  OR  apellido_per LIKE '%".$consulHJK."%'  GROUP by ci_per ";  */

$datos_plantilla = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_plantilla = mysqli_fetch_array($datos_plantilla); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_plantilla = mysqli_num_rows($datos_plantilla);   



mysqli_close($enlace);



?>


 