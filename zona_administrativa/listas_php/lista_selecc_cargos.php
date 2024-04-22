<?php


$query = "SELECT * FROM plantilla_cargos, prof_grupos
WHERE  plantilla_cargos.id_grupo = prof_grupos.id_grupo
and nombre_cargo != '.' ORDER BY nombre_cargo ASC";

$datos_selecc = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_selecc = mysqli_fetch_assoc($datos_selecc);

$totalRows_datos_selecc = mysqli_num_rows($datos_selecc);




$query2 = "SELECT * FROM prof_grupos ORDER BY nombre_grupo ASC";

$datos_dependientes1 = mysqli_query($enlace, $query2) or die(mysqli_error());

$row_datos_dependientes1 = mysqli_fetch_assoc($datos_dependientes1);

$totalRows_datos_dependientes1 = mysqli_num_rows($datos_dependientes1);


mysqli_close($enlace);


?>