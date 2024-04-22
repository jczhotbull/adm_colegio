<?php

$query = "SELECT * FROM z_plantel, direcciones, d_ciudades, d_municipio, d_parroquia, d_avenidas, d_codigo, d_vivienda  
           WHERE  z_plantel.id_direccion = direcciones.id_direccion
             and  direcciones.id_ciudad  = d_ciudades.id_ciudad
             and  direcciones.id_municipio  = d_municipio.id_municipio
             and  direcciones.id_parroquia  = d_parroquia.id_parroquia
             and  direcciones.id_avenida = d_avenidas.id_avenida
             and  direcciones.id_codigo = d_codigo.id_codigo
             and  direcciones.id_vivienda = d_vivienda.id_vivienda

          GROUP BY codigo_plantel ORDER BY nombre_plantel ASC";



$plantel = mysqli_query($enlace, $query) or die(mysqli_error());

$row_plantel = mysqli_fetch_assoc($plantel);

$totalRows_plantel = mysqli_num_rows($plantel);    // d_piso y d_numero no usados   
 



$queryciudades = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

		$datos_ciudades = mysqli_query($enlace, $queryciudades) or die(mysqli_error());

		$row_datos_ciudades = mysqli_fetch_assoc($datos_ciudades);

		// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 



$querymunicipio = "SELECT * FROM d_municipio ORDER BY nombre_municipio ASC";

$datos_municipio = mysqli_query($enlace, $querymunicipio) or die(mysqli_error());

$row_datos_municipio = mysqli_fetch_assoc($datos_municipio);

// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 



		$queryparroquias = "SELECT * FROM d_parroquia ORDER BY nombre_parroquia ASC";

		$datos_parroquias = mysqli_query($enlace, $queryparroquias) or die(mysqli_error());

		$row_datos_parroquias = mysqli_fetch_assoc($datos_parroquias);

		// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 



$queryavenidas = "SELECT * FROM d_avenidas ORDER BY nombre_av ASC";

$datos_avenidas = mysqli_query($enlace, $queryavenidas) or die(mysqli_error());

$row_datos_avenidas = mysqli_fetch_assoc($datos_avenidas);

// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 
			
			
			
	
		$querycodigos = "SELECT * FROM d_codigo ORDER BY nombre_codigo ASC";

		$datos_codigos = mysqli_query($enlace, $querycodigos) or die(mysqli_error());

		$row_datos_codigos = mysqli_fetch_assoc($datos_codigos);

		// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1);



$queryviviendas = "SELECT * FROM d_vivienda ORDER BY nombre_vivienda ASC";

$datos_viviendas = mysqli_query($enlace, $queryviviendas) or die(mysqli_error());

$row_datos_viviendas = mysqli_fetch_assoc($datos_viviendas);

// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 













mysqli_close($enlace);






?>