<?php


$query = "SELECT * FROM plantilla_areas, prof_ramas
WHERE  plantilla_areas.id_ramas = prof_ramas.id_ramas
   and nombre_area != '.'

ORDER BY nombre_area ASC";

$datos_selecc = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_selecc = mysqli_fetch_assoc($datos_selecc);

$totalRows_datos_selecc = mysqli_num_rows($datos_selecc);




$query2 = "SELECT * FROM prof_ramas ORDER BY nombre_ramas ASC";

$datos_dependientes1 = mysqli_query($enlace, $query2) or die(mysqli_error());

$row_datos_dependientes1 = mysqli_fetch_assoc($datos_dependientes1);

$totalRows_datos_dependientes1 = mysqli_num_rows($datos_dependientes1);




mysqli_close($enlace);  


?>