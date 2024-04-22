<?php


$queryparentesco = "SELECT * FROM tb_parentescos ORDER BY nombre_parentesco ASC";

$datos_parentesco = mysqli_query($enlace, $queryparentesco) or die(mysqli_error());

$row_datos_parentesco = mysqli_fetch_assoc($datos_parentesco);



$queryprofesion = "SELECT * FROM tb_profesiones ORDER BY nombre_profesion ASC";

$datos_profesion = mysqli_query($enlace, $queryprofesion) or die(mysqli_error());

$row_datos_profesion = mysqli_fetch_assoc($datos_profesion);





$querycivil = "SELECT * FROM tb_estado_civil ORDER BY nombre_estado_civil ASC";

$datos_civil = mysqli_query($enlace, $querycivil) or die(mysqli_error());

$row_datos_civil = mysqli_fetch_assoc($datos_civil);



$querysexo = "SELECT * FROM sexo ORDER BY nombre_sexo ASC";

$datos_sexo = mysqli_query($enlace, $querysexo) or die(mysqli_error());

$row_datos_sexo = mysqli_fetch_assoc($datos_sexo);

// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 



		$querysexo1 = "SELECT * FROM sexo ORDER BY nombre_sexo ASC";

		$datos_sexo1 = mysqli_query($enlace, $querysexo1) or die(mysqli_error());

		$row_datos_sexo1 = mysqli_fetch_assoc($datos_sexo1);





$querysexo2 = "SELECT * FROM sexo ORDER BY nombre_sexo ASC";

$datos_sexo2 = mysqli_query($enlace, $querysexo2) or die(mysqli_error());

$row_datos_sexo2 = mysqli_fetch_assoc($datos_sexo2);



		$querysexo3 = "SELECT * FROM sexo ORDER BY nombre_sexo ASC";

		$datos_sexo3 = mysqli_query($enlace, $querysexo3) or die(mysqli_error());

		$row_datos_sexo3 = mysqli_fetch_assoc($datos_sexo3);





$querysexo4 = "SELECT * FROM sexo ORDER BY nombre_sexo ASC";

$datos_sexo4 = mysqli_query($enlace, $querysexo4) or die(mysqli_error());

$row_datos_sexo4 = mysqli_fetch_assoc($datos_sexo4);


		
		$querysexo5 = "SELECT * FROM sexo ORDER BY nombre_sexo ASC";

		$datos_sexo5 = mysqli_query($enlace, $querysexo5) or die(mysqli_error());

		$row_datos_sexo5 = mysqli_fetch_assoc($datos_sexo5);






		$queryciudades = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

		$datos_ciudades = mysqli_query($enlace, $queryciudades) or die(mysqli_error());

		$row_datos_ciudades = mysqli_fetch_assoc($datos_ciudades);

		// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 


		$queryciudades1 = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

		$datos_ciudades1 = mysqli_query($enlace, $queryciudades1) or die(mysqli_error());

		$row_datos_ciudades1 = mysqli_fetch_assoc($datos_ciudades1);


		$queryciudades2 = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

		$datos_ciudades2 = mysqli_query($enlace, $queryciudades2) or die(mysqli_error());

		$row_datos_ciudades2 = mysqli_fetch_assoc($datos_ciudades2);


		$queryciudades3 = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

		$datos_ciudades3 = mysqli_query($enlace, $queryciudades3) or die(mysqli_error());

		$row_datos_ciudades3 = mysqli_fetch_assoc($datos_ciudades3);


		$queryciudades4 = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

		$datos_ciudades4 = mysqli_query($enlace, $queryciudades4) or die(mysqli_error());

		$row_datos_ciudades4 = mysqli_fetch_assoc($datos_ciudades4);


		$queryciudades5 = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

		$datos_ciudades5 = mysqli_query($enlace, $queryciudades5) or die(mysqli_error());

		$row_datos_ciudades5 = mysqli_fetch_assoc($datos_ciudades5);



	



		$queryciudadesP1 = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

		$datos_ciudadesP1 = mysqli_query($enlace, $queryciudadesP1) or die(mysqli_error());

		$row_datos_ciudadesP1 = mysqli_fetch_assoc($datos_ciudadesP1);

		// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1);


		$queryciudadesP2 = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

		$datos_ciudadesP2 = mysqli_query($enlace, $queryciudadesP2) or die(mysqli_error());

		$row_datos_ciudadesP2 = mysqli_fetch_assoc($datos_ciudadesP2);

		// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1);


		$queryciudadesP3 = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

		$datos_ciudadesP3 = mysqli_query($enlace, $queryciudadesP3) or die(mysqli_error());

		$row_datos_ciudadesP3 = mysqli_fetch_assoc($datos_ciudadesP3);

		// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1);


		$queryciudadesP4 = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

		$datos_ciudadesP4 = mysqli_query($enlace, $queryciudadesP4) or die(mysqli_error());

		$row_datos_ciudadesP4 = mysqli_fetch_assoc($datos_ciudadesP4);

		// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1);


		$queryciudadesP5 = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

		$datos_ciudadesP5 = mysqli_query($enlace, $queryciudadesP5) or die(mysqli_error());

		$row_datos_ciudadesP5 = mysqli_fetch_assoc($datos_ciudadesP5);

		// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1);




		$queryestados1 = "SELECT * FROM d_estados ORDER BY nombre_estado ASC";

		$datos_estados1 = mysqli_query($enlace, $queryestados1) or die(mysqli_error());

		$row_datos_estados1 = mysqli_fetch_assoc($datos_estados1);

		// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 


		$queryestados2 = "SELECT * FROM d_estados ORDER BY nombre_estado ASC";

		$datos_estados2 = mysqli_query($enlace, $queryestados2) or die(mysqli_error());

		$row_datos_estados2 = mysqli_fetch_assoc($datos_estados2);

		// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 


		$queryestados3 = "SELECT * FROM d_estados ORDER BY nombre_estado ASC";

		$datos_estados3 = mysqli_query($enlace, $queryestados3) or die(mysqli_error());

		$row_datos_estados3 = mysqli_fetch_assoc($datos_estados3);

		// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 


		$queryestados4 = "SELECT * FROM d_estados ORDER BY nombre_estado ASC";

		$datos_estados4 = mysqli_query($enlace, $queryestados4) or die(mysqli_error());

		$row_datos_estados4 = mysqli_fetch_assoc($datos_estados4);

		// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 


		$queryestados5 = "SELECT * FROM d_estados ORDER BY nombre_estado ASC";

		$datos_estados5 = mysqli_query($enlace, $queryestados5) or die(mysqli_error());

		$row_datos_estados5 = mysqli_fetch_assoc($datos_estados5);

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




			$querydivisiones = "SELECT * FROM divisiones ORDER BY nombre_division ASC";

			$datos_divisiones = mysqli_query($enlace, $querydivisiones) or die(mysqli_error());

			$row_datos_divisiones = mysqli_fetch_assoc($datos_divisiones);

			// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 




			
			
			
			
	
$querygradosP1 = "SELECT * FROM grados, divisiones
WHERE  grados.id_division = divisiones.id_division
and nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
	and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'

and nombre_grados != 'Pre Escolar' and nombre_grados != 'Varios Media' and nombre_grados != 'Zero, no aplica'
	
  and nombre_grados != 'Pre Escolar 3er Nivel' and nombre_grados != 'Educación Inicial' and nombre_grados != '1er y 2do Año'
  and nombre_grados != '3er y 4to Año' and nombre_grados != '4to y 5to Año' and nombre_grados != '2do y 3er Año'
   and nombre_grados != 'Todos' ORDER BY nombre_division ASC";

$datos_gradosP1 = mysqli_query($enlace, $querygradosP1) or die(mysqli_error());

$row_datos_gradosP1 = mysqli_fetch_assoc($datos_gradosP1);

// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1);




$querygradosP2 = "SELECT * FROM grados, divisiones
WHERE  grados.id_division = divisiones.id_division
and nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
	and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'

and nombre_grados != 'Pre Escolar' and nombre_grados != 'Varios Media' and nombre_grados != 'Zero, no aplica'
	
  and nombre_grados != 'Pre Escolar 3er Nivel' and nombre_grados != 'Educación Inicial' and nombre_grados != '1er y 2do Año'
  and nombre_grados != '3er y 4to Año' and nombre_grados != '4to y 5to Año' and nombre_grados != '2do y 3er Año'
   and nombre_grados != 'Todos' ORDER BY nombre_division ASC";

$datos_gradosP2 = mysqli_query($enlace, $querygradosP2) or die(mysqli_error());

$row_datos_gradosP2 = mysqli_fetch_assoc($datos_gradosP2);

// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1);




$querygradosP3 = "SELECT * FROM grados, divisiones
WHERE  grados.id_division = divisiones.id_division
and nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
	and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'

and nombre_grados != 'Pre Escolar' and nombre_grados != 'Varios Media' and nombre_grados != 'Zero, no aplica'
	
  and nombre_grados != 'Pre Escolar 3er Nivel' and nombre_grados != 'Educación Inicial' and nombre_grados != '1er y 2do Año'
  and nombre_grados != '3er y 4to Año' and nombre_grados != '4to y 5to Año' and nombre_grados != '2do y 3er Año'
   and nombre_grados != 'Todos' ORDER BY nombre_division ASC";

$datos_gradosP3 = mysqli_query($enlace, $querygradosP3) or die(mysqli_error());

$row_datos_gradosP3 = mysqli_fetch_assoc($datos_gradosP3);

// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1);




$querygradosP4 = "SELECT * FROM grados, divisiones
WHERE  grados.id_division = divisiones.id_division
and nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
	and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'

and nombre_grados != 'Pre Escolar' and nombre_grados != 'Varios Media' and nombre_grados != 'Zero, no aplica'
	
  and nombre_grados != 'Pre Escolar 3er Nivel' and nombre_grados != 'Educación Inicial' and nombre_grados != '1er y 2do Año'
  and nombre_grados != '3er y 4to Año' and nombre_grados != '4to y 5to Año' and nombre_grados != '2do y 3er Año'
   and nombre_grados != 'Todos' ORDER BY nombre_division ASC";

$datos_gradosP4 = mysqli_query($enlace, $querygradosP4) or die(mysqli_error());

$row_datos_gradosP4 = mysqli_fetch_assoc($datos_gradosP4);

// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1);



$querygradosP5 = "SELECT * FROM grados, divisiones
WHERE  grados.id_division = divisiones.id_division
and nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
	and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'

and nombre_grados != 'Pre Escolar' and nombre_grados != 'Varios Media' and nombre_grados != 'Zero, no aplica'
	
  and nombre_grados != 'Pre Escolar 3er Nivel' and nombre_grados != 'Educación Inicial' and nombre_grados != '1er y 2do Año'
  and nombre_grados != '3er y 4to Año' and nombre_grados != '4to y 5to Año' and nombre_grados != '2do y 3er Año'
   and nombre_grados != 'Todos' ORDER BY nombre_division ASC";

$datos_gradosP5 = mysqli_query($enlace, $querygradosP5) or die(mysqli_error());

$row_datos_gradosP5 = mysqli_fetch_assoc($datos_gradosP5);

// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1);



			$querypaises = "SELECT * FROM d_paises ORDER BY nombre_pais ASC";

			$datos_paises = mysqli_query($enlace, $querypaises) or die(mysqli_error());

			$row_datos_paises = mysqli_fetch_assoc($datos_paises);

			// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 




			$querypaises1 = "SELECT * FROM d_paises ORDER BY nombre_pais ASC";

			$datos_paises1 = mysqli_query($enlace, $querypaises1) or die(mysqli_error());

			$row_datos_paises1 = mysqli_fetch_assoc($datos_paises1);


			$querypaises2 = "SELECT * FROM d_paises ORDER BY nombre_pais ASC";

			$datos_paises2 = mysqli_query($enlace, $querypaises2) or die(mysqli_error());

			$row_datos_paises2 = mysqli_fetch_assoc($datos_paises2);



			$querypaises3 = "SELECT * FROM d_paises ORDER BY nombre_pais ASC";

			$datos_paises3 = mysqli_query($enlace, $querypaises3) or die(mysqli_error());

			$row_datos_paises3 = mysqli_fetch_assoc($datos_paises3);



			$querypaises4 = "SELECT * FROM d_paises ORDER BY nombre_pais ASC";

			$datos_paises4 = mysqli_query($enlace, $querypaises4) or die(mysqli_error());

			$row_datos_paises4 = mysqli_fetch_assoc($datos_paises4);



			$querypaises5 = "SELECT * FROM d_paises ORDER BY nombre_pais ASC";

			$datos_paises5 = mysqli_query($enlace, $querypaises5) or die(mysqli_error());

			$row_datos_paises5 = mysqli_fetch_assoc($datos_paises5);




$querytitulos = "SELECT * FROM tb_profesiones WHERE nombre_profesion != '.' ORDER BY nombre_profesion ASC";

$datos_titulos = mysqli_query($enlace, $querytitulos) or die(mysqli_error());

$row_datos_titulos = mysqli_fetch_assoc($datos_titulos);









$queryareas = "SELECT * FROM plantilla_areas WHERE nombre_area != '.' ORDER BY nombre_area ASC";

$datos_areas = mysqli_query($enlace, $queryareas) or die(mysqli_error());

$row_datos_areas = mysqli_fetch_assoc($datos_areas);






$querysecciones = "SELECT * FROM secciones WHERE nombre_seccion != '.' and nombre_seccion != '1er a 3er Nivel'  and nombre_seccion != 'A y B'
                  and nombre_seccion != '1er Nivel' and nombre_seccion != '2do Nivel' and nombre_seccion != '3er Nivel' and nombre_seccion != 'Todas'
                   ORDER BY nombre_seccion ASC";
$datos_secciones = mysqli_query($enlace, $querysecciones) or die(mysqli_error());
$row_datos_secciones = mysqli_fetch_assoc($datos_secciones);






$queryplantel = "SELECT * FROM tipo_plantel WHERE nombre_tipo != '.' ORDER BY nombre_tipo ASC";
$datos_plantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());
$row_datos_plantel = mysqli_fetch_assoc($datos_plantel);




$queryreligion1 = "SELECT * FROM religiones WHERE tipo_religion != '.' ORDER BY tipo_religion ASC";
$datos_religion1 = mysqli_query($enlace, $queryreligion1) or die(mysqli_error());
$row_datos_religion1 = mysqli_fetch_assoc($datos_religion1);




$queryreligion2 = "SELECT * FROM religiones WHERE tipo_religion != '.' ORDER BY tipo_religion ASC";
$datos_religion2 = mysqli_query($enlace, $queryreligion2) or die(mysqli_error());
$row_datos_religion2 = mysqli_fetch_assoc($datos_religion2);




$queryreligion3 = "SELECT * FROM religiones WHERE tipo_religion != '.' ORDER BY tipo_religion ASC";
$datos_religion3 = mysqli_query($enlace, $queryreligion3) or die(mysqli_error());
$row_datos_religion3 = mysqli_fetch_assoc($datos_religion3);




$queryreligion4 = "SELECT * FROM religiones WHERE tipo_religion != '.' ORDER BY tipo_religion ASC";
$datos_religion4 = mysqli_query($enlace, $queryreligion4) or die(mysqli_error());
$row_datos_religion4 = mysqli_fetch_assoc($datos_religion4);




$queryreligion5 = "SELECT * FROM religiones WHERE tipo_religion != '.' ORDER BY tipo_religion ASC";
$datos_religion5 = mysqli_query($enlace, $queryreligion5) or die(mysqli_error());
$row_datos_religion5 = mysqli_fetch_assoc($datos_religion5);







$queryperiodo_old1 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar ASC";
$datos_periodo_old1 = mysqli_query($enlace, $queryperiodo_old1) or die(mysqli_error());
$row_datos_periodo_old1 = mysqli_fetch_assoc($datos_periodo_old1);



$queryperiodo_old2 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar ASC";
$datos_periodo_old2 = mysqli_query($enlace, $queryperiodo_old2) or die(mysqli_error());
$row_datos_periodo_old2 = mysqli_fetch_assoc($datos_periodo_old2);




$queryperiodo_old3 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar ASC";
$datos_periodo_old3 = mysqli_query($enlace, $queryperiodo_old3) or die(mysqli_error());
$row_datos_periodo_old3 = mysqli_fetch_assoc($datos_periodo_old3);




$queryperiodo_old4 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar ASC";
$datos_periodo_old4 = mysqli_query($enlace, $queryperiodo_old4) or die(mysqli_error());
$row_datos_periodo_old4 = mysqli_fetch_assoc($datos_periodo_old4);




$queryperiodo_old5 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar ASC";
$datos_periodo_old5 = mysqli_query($enlace, $queryperiodo_old5) or die(mysqli_error());
$row_datos_periodo_old5 = mysqli_fetch_assoc($datos_periodo_old5);



		$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  next = '8' and periodo_escolar != '.' LIMIT 1 ";
		$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
		$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);


		$queryperiodo_viejo = "SELECT * FROM temporada_escolar WHERE  status = '1' and periodo_escolar != '.' LIMIT 1 ";
		$datos_periodo_viejo = mysqli_query($enlace, $queryperiodo_viejo) or die(mysqli_error());
		$row_datos_periodo_viejo = mysqli_fetch_assoc($datos_periodo_viejo);


$queryperiodo_act1 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar DESC LIMIT 3";
$datos_periodo_act1 = mysqli_query($enlace, $queryperiodo_act1) or die(mysqli_error());
$row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1);



$queryperiodo_act2 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar DESC LIMIT 3";
$datos_periodo_act2 = mysqli_query($enlace, $queryperiodo_act2) or die(mysqli_error());
$row_datos_periodo_act2 = mysqli_fetch_assoc($datos_periodo_act2);



$queryperiodo_act3 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar DESC LIMIT 3";
$datos_periodo_act3 = mysqli_query($enlace, $queryperiodo_act3) or die(mysqli_error());
$row_datos_periodo_act3 = mysqli_fetch_assoc($datos_periodo_act3);



$queryperiodo_act4 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar ASC";
$datos_periodo_act4 = mysqli_query($enlace, $queryperiodo_act4) or die(mysqli_error());
$row_datos_periodo_act4 = mysqli_fetch_assoc($datos_periodo_act4);



$queryperiodo_act5 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar ASC";
$datos_periodo_act5 = mysqli_query($enlace, $queryperiodo_act5) or die(mysqli_error());
$row_datos_periodo_act5 = mysqli_fetch_assoc($datos_periodo_act5);




	$querygradosA1 = "SELECT * FROM grados, divisiones
	WHERE  grados.id_division = divisiones.id_division
	and nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
	and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'

and nombre_grados != 'Pre Escolar' and nombre_grados != 'Varios Media' and nombre_grados != 'Zero, no aplica'
	
  and nombre_grados != 'Pre Escolar 3er Nivel' and nombre_grados != 'Educación Inicial' and nombre_grados != '1er y 2do Año'
  and nombre_grados != '3er y 4to Año' and nombre_grados != '4to y 5to Año' and nombre_grados != '2do y 3er Año'
   and nombre_grados != 'Todos' ORDER BY nombre_division ASC";

	$datos_gradosA1 = mysqli_query($enlace, $querygradosA1) or die(mysqli_error());

	$row_datos_gradosA1 = mysqli_fetch_assoc($datos_gradosA1);



	$querygradosA2 = "SELECT * FROM grados, divisiones
	WHERE  grados.id_division = divisiones.id_division
	and nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
	and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'

and nombre_grados != 'Pre Escolar' and nombre_grados != 'Varios Media' and nombre_grados != 'Zero, no aplica'
	
  and nombre_grados != 'Pre Escolar 3er Nivel' and nombre_grados != 'Educación Inicial' and nombre_grados != '1er y 2do Año'
  and nombre_grados != '3er y 4to Año' and nombre_grados != '4to y 5to Año' and nombre_grados != '2do y 3er Año'
   and nombre_grados != 'Todos' ORDER BY nombre_division ASC";

	$datos_gradosA2 = mysqli_query($enlace, $querygradosA2) or die(mysqli_error());

	$row_datos_gradosA2 = mysqli_fetch_assoc($datos_gradosA2);



	$querygradosA3 = "SELECT * FROM grados, divisiones
	WHERE  grados.id_division = divisiones.id_division
	and nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
	and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'

and nombre_grados != 'Pre Escolar' and nombre_grados != 'Varios Media' and nombre_grados != 'Zero, no aplica'
	
  and nombre_grados != 'Pre Escolar 3er Nivel' and nombre_grados != 'Educación Inicial' and nombre_grados != '1er y 2do Año'
  and nombre_grados != '3er y 4to Año' and nombre_grados != '4to y 5to Año' and nombre_grados != '2do y 3er Año'
   and nombre_grados != 'Todos' ORDER BY nombre_division ASC";

	$datos_gradosA3 = mysqli_query($enlace, $querygradosA3) or die(mysqli_error());

	$row_datos_gradosA3 = mysqli_fetch_assoc($datos_gradosA3);



	$querygradosA4 = "SELECT * FROM grados, divisiones
	WHERE  grados.id_division = divisiones.id_division
	and nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
	and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'

and nombre_grados != 'Pre Escolar' and nombre_grados != 'Varios Media' and nombre_grados != 'Zero, no aplica'
	
  and nombre_grados != 'Pre Escolar 3er Nivel' and nombre_grados != 'Educación Inicial' and nombre_grados != '1er y 2do Año'
  and nombre_grados != '3er y 4to Año' and nombre_grados != '4to y 5to Año' and nombre_grados != '2do y 3er Año'
   and nombre_grados != 'Todos' ORDER BY nombre_division ASC";

	$datos_gradosA4 = mysqli_query($enlace, $querygradosA4) or die(mysqli_error());

	$row_datos_gradosA4 = mysqli_fetch_assoc($datos_gradosA4);



	$querygradosA5 = "SELECT * FROM grados, divisiones
	WHERE  grados.id_division = divisiones.id_division
	and nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
	and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'

and nombre_grados != 'Pre Escolar' and nombre_grados != 'Varios Media' and nombre_grados != 'Zero, no aplica'
	
  and nombre_grados != 'Pre Escolar 3er Nivel' and nombre_grados != 'Educación Inicial' and nombre_grados != '1er y 2do Año'
  and nombre_grados != '3er y 4to Año' and nombre_grados != '4to y 5to Año' and nombre_grados != '2do y 3er Año'
   and nombre_grados != 'Todos' ORDER BY nombre_division ASC";
	$datos_gradosA5 = mysqli_query($enlace, $querygradosA5) or die(mysqli_error());

	$row_datos_gradosA5 = mysqli_fetch_assoc($datos_gradosA5);







$query_edad1 = "SELECT * FROM edades ORDER BY nombre_edad ASC";
$datos_edad1 = mysqli_query($enlace, $query_edad1) or die(mysqli_error());
$row_datos_edad1 = mysqli_fetch_assoc($datos_edad1);



		$query_camisas1 = "SELECT * FROM tall_cam ORDER BY talla_camisa ASC";
		$datos_camisas1 = mysqli_query($enlace, $query_camisas1) or die(mysqli_error());
		$row_datos_camisas1 = mysqli_fetch_assoc($datos_camisas1);



$query_pantalon1 = "SELECT * FROM tall_pant ORDER BY nombre_pantalon ASC";
$datos_pantalon1 = mysqli_query($enlace, $query_pantalon1) or die(mysqli_error());
$row_datos_pantalon1 = mysqli_fetch_assoc($datos_pantalon1);



	    $query_zapatos1 = "SELECT * FROM tall_zap ORDER BY talla_zapato ASC";
		$datos_zapatos1 = mysqli_query($enlace, $query_zapatos1) or die(mysqli_error());
		$row_datos_zapatos1 = mysqli_fetch_assoc($datos_zapatos1);



$query_peso1 = "SELECT * FROM pesos ORDER BY nombre_peso ASC";
$datos_peso1 = mysqli_query($enlace, $query_peso1) or die(mysqli_error());
$row_datos_peso1 = mysqli_fetch_assoc($datos_peso1);



	    $query_altura1 = "SELECT * FROM alturas ORDER BY nombre_altura ASC";
		$datos_altura1 = mysqli_query($enlace, $query_altura1) or die(mysqli_error());
		$row_datos_altura1 = mysqli_fetch_assoc($datos_altura1);







$query_edad2 = "SELECT * FROM edades ORDER BY nombre_edad ASC";
$datos_edad2 = mysqli_query($enlace, $query_edad2) or die(mysqli_error());
$row_datos_edad2 = mysqli_fetch_assoc($datos_edad2);



		$query_camisas2 = "SELECT * FROM tall_cam ORDER BY talla_camisa ASC";
		$datos_camisas2 = mysqli_query($enlace, $query_camisas2) or die(mysqli_error());
		$row_datos_camisas2 = mysqli_fetch_assoc($datos_camisas2);



$query_pantalon2 = "SELECT * FROM tall_pant ORDER BY nombre_pantalon ASC";
$datos_pantalon2 = mysqli_query($enlace, $query_pantalon2) or die(mysqli_error());
$row_datos_pantalon2 = mysqli_fetch_assoc($datos_pantalon2);



	    $query_zapatos2 = "SELECT * FROM tall_zap ORDER BY talla_zapato ASC";
		$datos_zapatos2 = mysqli_query($enlace, $query_zapatos2) or die(mysqli_error());
		$row_datos_zapatos2 = mysqli_fetch_assoc($datos_zapatos2);



$query_peso2 = "SELECT * FROM pesos ORDER BY nombre_peso ASC";
$datos_peso2 = mysqli_query($enlace, $query_peso2) or die(mysqli_error());
$row_datos_peso2 = mysqli_fetch_assoc($datos_peso2);



	    $query_altura2 = "SELECT * FROM alturas ORDER BY nombre_altura ASC";
		$datos_altura2 = mysqli_query($enlace, $query_altura2) or die(mysqli_error());
		$row_datos_altura2 = mysqli_fetch_assoc($datos_altura2);







$query_edad3 = "SELECT * FROM edades ORDER BY nombre_edad ASC";
$datos_edad3 = mysqli_query($enlace, $query_edad3) or die(mysqli_error());
$row_datos_edad3 = mysqli_fetch_assoc($datos_edad3);



		$query_camisas3 = "SELECT * FROM tall_cam ORDER BY talla_camisa ASC";
		$datos_camisas3 = mysqli_query($enlace, $query_camisas3) or die(mysqli_error());
		$row_datos_camisas3 = mysqli_fetch_assoc($datos_camisas3);



$query_pantalon3 = "SELECT * FROM tall_pant ORDER BY nombre_pantalon ASC";
$datos_pantalon3 = mysqli_query($enlace, $query_pantalon3) or die(mysqli_error());
$row_datos_pantalon3 = mysqli_fetch_assoc($datos_pantalon3);



	    $query_zapatos3 = "SELECT * FROM tall_zap ORDER BY talla_zapato ASC";
		$datos_zapatos3 = mysqli_query($enlace, $query_zapatos3) or die(mysqli_error());
		$row_datos_zapatos3 = mysqli_fetch_assoc($datos_zapatos3);



$query_peso3 = "SELECT * FROM pesos ORDER BY nombre_peso ASC";
$datos_peso3 = mysqli_query($enlace, $query_peso3) or die(mysqli_error());
$row_datos_peso3 = mysqli_fetch_assoc($datos_peso3);



	    $query_altura3 = "SELECT * FROM alturas ORDER BY nombre_altura ASC";
		$datos_altura3 = mysqli_query($enlace, $query_altura3) or die(mysqli_error());
		$row_datos_altura3 = mysqli_fetch_assoc($datos_altura3);







$query_edad4 = "SELECT * FROM edades ORDER BY nombre_edad ASC";
$datos_edad4 = mysqli_query($enlace, $query_edad4) or die(mysqli_error());
$row_datos_edad4 = mysqli_fetch_assoc($datos_edad4);



		$query_camisas4 = "SELECT * FROM tall_cam ORDER BY talla_camisa ASC";
		$datos_camisas4 = mysqli_query($enlace, $query_camisas4) or die(mysqli_error());
		$row_datos_camisas4 = mysqli_fetch_assoc($datos_camisas4);



$query_pantalon4 = "SELECT * FROM tall_pant ORDER BY nombre_pantalon ASC";
$datos_pantalon4 = mysqli_query($enlace, $query_pantalon4) or die(mysqli_error());
$row_datos_pantalon4 = mysqli_fetch_assoc($datos_pantalon4);



	    $query_zapatos4 = "SELECT * FROM tall_zap ORDER BY talla_zapato ASC";
		$datos_zapatos4 = mysqli_query($enlace, $query_zapatos4) or die(mysqli_error());
		$row_datos_zapatos4 = mysqli_fetch_assoc($datos_zapatos4);



$query_peso4 = "SELECT * FROM pesos ORDER BY nombre_peso ASC";
$datos_peso4 = mysqli_query($enlace, $query_peso4) or die(mysqli_error());
$row_datos_peso4 = mysqli_fetch_assoc($datos_peso4);



	    $query_altura4 = "SELECT * FROM alturas ORDER BY nombre_altura ASC";
		$datos_altura4 = mysqli_query($enlace, $query_altura4) or die(mysqli_error());
		$row_datos_altura4 = mysqli_fetch_assoc($datos_altura4);








$query_edad5 = "SELECT * FROM edades ORDER BY nombre_edad ASC";
$datos_edad5 = mysqli_query($enlace, $query_edad5) or die(mysqli_error());
$row_datos_edad5 = mysqli_fetch_assoc($datos_edad5);



		$query_camisas5 = "SELECT * FROM tall_cam ORDER BY talla_camisa ASC";
		$datos_camisas5 = mysqli_query($enlace, $query_camisas5) or die(mysqli_error());
		$row_datos_camisas5 = mysqli_fetch_assoc($datos_camisas5);



$query_pantalon5 = "SELECT * FROM tall_pant ORDER BY nombre_pantalon ASC";
$datos_pantalon5 = mysqli_query($enlace, $query_pantalon5) or die(mysqli_error());
$row_datos_pantalon5 = mysqli_fetch_assoc($datos_pantalon5);



	    $query_zapatos5 = "SELECT * FROM tall_zap ORDER BY talla_zapato ASC";
		$datos_zapatos5 = mysqli_query($enlace, $query_zapatos5) or die(mysqli_error());
		$row_datos_zapatos5 = mysqli_fetch_assoc($datos_zapatos5);



$query_peso5 = "SELECT * FROM pesos ORDER BY nombre_peso ASC";
$datos_peso5 = mysqli_query($enlace, $query_peso5) or die(mysqli_error());
$row_datos_peso5 = mysqli_fetch_assoc($datos_peso5);



	    $query_altura5 = "SELECT * FROM alturas ORDER BY nombre_altura ASC";
		$datos_altura5 = mysqli_query($enlace, $query_altura5) or die(mysqli_error());
		$row_datos_altura5 = mysqli_fetch_assoc($datos_altura5);





$query_padece1 = "SELECT * FROM tb_medicos ORDER BY nombre_medico ASC";
$datos_padece1 = mysqli_query($enlace, $query_padece1) or die(mysqli_error());
$row_datos_padece1 = mysqli_fetch_assoc($datos_padece1);



$query_padece2 = "SELECT * FROM tb_medicos ORDER BY nombre_medico ASC";
$datos_padece2 = mysqli_query($enlace, $query_padece2) or die(mysqli_error());
$row_datos_padece2 = mysqli_fetch_assoc($datos_padece2);



$query_padece3 = "SELECT * FROM tb_medicos ORDER BY nombre_medico ASC";
$datos_padece3 = mysqli_query($enlace, $query_padece3) or die(mysqli_error());
$row_datos_padece3 = mysqli_fetch_assoc($datos_padece3);



$query_padece4 = "SELECT * FROM tb_medicos ORDER BY nombre_medico ASC";
$datos_padece4 = mysqli_query($enlace, $query_padece4) or die(mysqli_error());
$row_datos_padece4 = mysqli_fetch_assoc($datos_padece4);



$query_padece5 = "SELECT * FROM tb_medicos ORDER BY nombre_medico ASC";
$datos_padece5 = mysqli_query($enlace, $query_padece5) or die(mysqli_error());
$row_datos_padece5 = mysqli_fetch_assoc($datos_padece5);




$query_sangres1 = "SELECT * FROM tipo_sangres ORDER BY tipo_sangre ASC";
$datos_sangres1 = mysqli_query($enlace, $query_sangres1) or die(mysqli_error());
$row_datos_sangres1 = mysqli_fetch_assoc($datos_sangres1);



$query_sangres2 = "SELECT * FROM tipo_sangres ORDER BY tipo_sangre ASC";
$datos_sangres2 = mysqli_query($enlace, $query_sangres2) or die(mysqli_error());
$row_datos_sangres2 = mysqli_fetch_assoc($datos_sangres2);



$query_sangres3 = "SELECT * FROM tipo_sangres ORDER BY tipo_sangre ASC";
$datos_sangres3 = mysqli_query($enlace, $query_sangres3) or die(mysqli_error());
$row_datos_sangres3 = mysqli_fetch_assoc($datos_sangres3);



$query_sangres4 = "SELECT * FROM tipo_sangres ORDER BY tipo_sangre ASC";
$datos_sangres4 = mysqli_query($enlace, $query_sangres4) or die(mysqli_error());
$row_datos_sangres4 = mysqli_fetch_assoc($datos_sangres4);



$query_sangres5 = "SELECT * FROM tipo_sangres ORDER BY tipo_sangre ASC";
$datos_sangres5 = mysqli_query($enlace, $query_sangres5) or die(mysqli_error());
$row_datos_sangres5 = mysqli_fetch_assoc($datos_sangres5);



	

	$query_aseguradoras1 = "SELECT * FROM tipo_aseguradoras ORDER BY tipo_aseguradora ASC";
	$datos_aseguradoras1 = mysqli_query($enlace, $query_aseguradoras1) or die(mysqli_error());
	$row_datos_aseguradoras1 = mysqli_fetch_assoc($datos_aseguradoras1);




mysqli_close($enlace);  


?>