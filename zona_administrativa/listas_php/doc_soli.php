<?php

$query_doc = "SELECT * FROM documentos_solicitados, reg_estudiantes
            where ( estudio = '1'
            or retiro = '1'
            or inscripcion = '1'
            or aceptacion = '1' )
            and documentos_solicitados.id_estud = reg_estudiantes.id_estud 
            GROUP BY fecha_soli DESC ";

$datos_doc = mysqli_query($enlace, $query_doc) or die(mysqli_error());
$row_datos_doc = mysqli_fetch_array($datos_doc);  

mysqli_close($enlace); 


?>