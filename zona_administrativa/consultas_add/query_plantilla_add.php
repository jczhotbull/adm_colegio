<?php


$querysexo = "SELECT * FROM sexo ORDER BY nombre_sexo ASC";

$datos_sexo = mysqli_query($enlace, $querysexo) or die(mysqli_error());

$row_datos_sexo = mysqli_fetch_assoc($datos_sexo);

// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 



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



			$querypisos = "SELECT * FROM d_piso ORDER BY nombre_piso ASC";

			$datos_pisos = mysqli_query($enlace, $querypisos) or die(mysqli_error());

			$row_datos_pisos = mysqli_fetch_assoc($datos_pisos);

			// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 
			
			
			
	
$querynumeros = "SELECT * FROM d_numero ORDER BY nombre_numero ASC";

$datos_numeros = mysqli_query($enlace, $querynumeros) or die(mysqli_error());

$row_datos_numeros = mysqli_fetch_assoc($datos_numeros);

// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1);




			$querydivisiones = "SELECT * FROM divisiones where id_division != '5' ORDER BY nombre_division ASC";

			$datos_divisiones = mysqli_query($enlace, $querydivisiones) or die(mysqli_error());

			$row_datos_divisiones = mysqli_fetch_assoc($datos_divisiones);

			// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 
			
			
			
	
$querygrados = "SELECT * FROM grados, divisiones
WHERE  grados.id_division = divisiones.id_division
and nombre_grados != '.' ORDER BY nombre_division ASC";

$datos_grados = mysqli_query($enlace, $querygrados) or die(mysqli_error());

$row_datos_grados = mysqli_fetch_assoc($datos_grados);

// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1);



			$querypaises = "SELECT * FROM d_paises ORDER BY nombre_pais ASC";

			$datos_paises = mysqli_query($enlace, $querypaises) or die(mysqli_error());

			$row_datos_paises = mysqli_fetch_assoc($datos_paises);

			// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 




$querytitulos = "SELECT * FROM plantilla_titulos WHERE nombre_titulos != '.' ORDER BY nombre_titulos ASC";

$datos_titulos = mysqli_query($enlace, $querytitulos) or die(mysqli_error());

$row_datos_titulos = mysqli_fetch_assoc($datos_titulos);



			
				$querymenciones = "SELECT * FROM plantilla_mencion WHERE nombre_mencion != '.' ORDER BY nombre_mencion ASC";

				$datos_menciones = mysqli_query($enlace, $querymenciones) or die(mysqli_error());

				$row_datos_menciones = mysqli_fetch_assoc($datos_menciones);




$queryinstituto = "SELECT * FROM plantilla_instituto WHERE nombre_instituto != '.' ORDER BY nombre_instituto ASC";

$datos_instituto = mysqli_query($enlace, $queryinstituto) or die(mysqli_error());

$row_datos_instituto = mysqli_fetch_assoc($datos_instituto);




				$querycargos = "SELECT * FROM plantilla_cargos WHERE nombre_cargo != '.' ORDER BY nombre_cargo ASC";

				$datos_cargos = mysqli_query($enlace, $querycargos) or die(mysqli_error());

				$row_datos_cargos = mysqli_fetch_assoc($datos_cargos);




$queryareas = "SELECT * FROM plantilla_areas WHERE nombre_area != '.' ORDER BY nombre_area ASC";

$datos_areas = mysqli_query($enlace, $queryareas) or die(mysqli_error());

$row_datos_areas = mysqli_fetch_assoc($datos_areas);



				$queryturnos = "SELECT * FROM plantilla_turnos WHERE nombre_turno != '.' ORDER BY nombre_turno ASC";
				$datos_turnos = mysqli_query($enlace, $queryturnos) or die(mysqli_error());
				$row_datos_turnos = mysqli_fetch_assoc($datos_turnos);




$querysecciones = "SELECT * FROM secciones WHERE nombre_seccion != '.' and nombre_seccion != '1er a 3er Nivel'  and nombre_seccion != 'A y B'
                  and nombre_seccion != '1er Nivel' and nombre_seccion != '2do Nivel' and nombre_seccion != '3er Nivel' and nombre_seccion != 'Todas'
                   ORDER BY nombre_seccion ASC";
$datos_secciones = mysqli_query($enlace, $querysecciones) or die(mysqli_error());
$row_datos_secciones = mysqli_fetch_assoc($datos_secciones);



				$queryhoras = "SELECT * FROM plantilla_horas WHERE nombre_hora != '.' ORDER BY nombre_hora ASC";
				$datos_horas = mysqli_query($enlace, $queryhoras) or die(mysqli_error());
				$row_datos_horas = mysqli_fetch_assoc($datos_horas);



$queryplantel = "SELECT * FROM tipo_plantel WHERE nombre_tipo != '.' ORDER BY nombre_tipo ASC";
$datos_plantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());
$row_datos_plantel = mysqli_fetch_assoc($datos_plantel);


mysqli_close($enlace);  


?>