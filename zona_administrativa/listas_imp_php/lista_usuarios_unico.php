<?php




$query = "SELECT * FROM usuarios, grados
WHERE usuarios.id_grado = grados.id_grado and usuarios.id = '$el_id_del'
and usuarios.nombres != 'Representante' and usuarios.cargo != 'Representante' ORDER BY usuarios.nombres ASC";

$usuarios = mysqli_query($enlace, $query) or die(mysqli_error());

$row_usuarios = mysqli_fetch_assoc($usuarios);

$totalRows_usuarios = mysqli_num_rows($usuarios);

mysqli_close($enlace);


?>