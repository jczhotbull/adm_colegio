<?php



$queryFGH = "SELECT * FROM reg_representante

         WHERE  id_repre = '$el_propio_id' ";

$datos_representante = mysqli_query($enlace, $queryFGH) or die(mysqli_error());

$row_datos_representante = mysqli_fetch_array($datos_representante); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_representante = mysqli_num_rows($datos_representante); 







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




			$querydivisiones = "SELECT * FROM divisiones ORDER BY nombre_division ASC";

			$datos_divisiones = mysqli_query($enlace, $querydivisiones) or die(mysqli_error());

			$row_datos_divisiones = mysqli_fetch_assoc($datos_divisiones);

			// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 



			$querypaises = "SELECT * FROM d_paises ORDER BY nombre_pais ASC";

			$datos_paises = mysqli_query($enlace, $querypaises) or die(mysqli_error());

			$row_datos_paises = mysqli_fetch_assoc($datos_paises);

			// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1); 




			



$querytitulos = "SELECT * FROM tb_profesiones WHERE nombre_profesion != '.' ORDER BY nombre_profesion ASC";

$datos_titulos = mysqli_query($enlace, $querytitulos) or die(mysqli_error());

$row_datos_titulos = mysqli_fetch_assoc($datos_titulos);






$queryareas = "SELECT * FROM plantilla_areas WHERE nombre_area != '.' ORDER BY nombre_area ASC";

$datos_areas = mysqli_query($enlace, $queryareas) or die(mysqli_error());

$row_datos_areas = mysqli_fetch_assoc($datos_areas);





$querysecciones = "SELECT * FROM secciones WHERE nombre_seccion != '.' ORDER BY nombre_seccion ASC";
$datos_secciones = mysqli_query($enlace, $querysecciones) or die(mysqli_error());
$row_datos_secciones = mysqli_fetch_assoc($datos_secciones);






		$querysexo1 = "SELECT * FROM sexo ORDER BY nombre_sexo ASC";

		$datos_sexo1 = mysqli_query($enlace, $querysexo1) or die(mysqli_error());

		$row_datos_sexo1 = mysqli_fetch_assoc($datos_sexo1);










		$queryciudades1 = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

		$datos_ciudades1 = mysqli_query($enlace, $queryciudades1) or die(mysqli_error());

		$row_datos_ciudades1 = mysqli_fetch_assoc($datos_ciudades1);


	

	



		$queryciudadesP1 = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

		$datos_ciudadesP1 = mysqli_query($enlace, $queryciudadesP1) or die(mysqli_error());

		$row_datos_ciudadesP1 = mysqli_fetch_assoc($datos_ciudadesP1);

		// $totalRows_datos_multiples1 = mysqli_num_rows($datos_multiples1);


		




		$queryestados1 = "SELECT * FROM d_estados ORDER BY nombre_estado ASC";

		$datos_estados1 = mysqli_query($enlace, $queryestados1) or die(mysqli_error());

		$row_datos_estados1 = mysqli_fetch_assoc($datos_estados1);

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


			



			$querypaises1 = "SELECT * FROM d_paises ORDER BY nombre_pais ASC";

			$datos_paises1 = mysqli_query($enlace, $querypaises1) or die(mysqli_error());

			$row_datos_paises1 = mysqli_fetch_assoc($datos_paises1);


			






$queryareas = "SELECT * FROM plantilla_areas WHERE nombre_area != '.' ORDER BY nombre_area ASC";

$datos_areas = mysqli_query($enlace, $queryareas) or die(mysqli_error());

$row_datos_areas = mysqli_fetch_assoc($datos_areas);






$querysecciones = "SELECT * FROM secciones WHERE nombre_seccion != '.' ORDER BY nombre_seccion ASC";
$datos_secciones = mysqli_query($enlace, $querysecciones) or die(mysqli_error());
$row_datos_secciones = mysqli_fetch_assoc($datos_secciones);






$queryplantel = "SELECT * FROM tipo_plantel WHERE nombre_tipo != '.' ORDER BY nombre_tipo ASC";
$datos_plantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());
$row_datos_plantel = mysqli_fetch_assoc($datos_plantel);




$queryreligion1 = "SELECT * FROM religiones WHERE tipo_religion != '.' ORDER BY tipo_religion ASC";
$datos_religion1 = mysqli_query($enlace, $queryreligion1) or die(mysqli_error());
$row_datos_religion1 = mysqli_fetch_assoc($datos_religion1);






$queryperiodo_old1 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar ASC";
$datos_periodo_old1 = mysqli_query($enlace, $queryperiodo_old1) or die(mysqli_error());
$row_datos_periodo_old1 = mysqli_fetch_assoc($datos_periodo_old1);






		$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  next = '8' and periodo_escolar != '.' LIMIT 1 ";
		$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
		$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);


		$queryperiodo_viejo = "SELECT * FROM temporada_escolar WHERE  status = '1' and periodo_escolar != '.' LIMIT 1 ";
		$datos_periodo_viejo = mysqli_query($enlace, $queryperiodo_viejo) or die(mysqli_error());
		$row_datos_periodo_viejo = mysqli_fetch_assoc($datos_periodo_viejo);


$queryperiodo_act1 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar DESC LIMIT 3";
$datos_periodo_act1 = mysqli_query($enlace, $queryperiodo_act1) or die(mysqli_error());
$row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1);





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







$query_seccion1 = "SELECT * FROM secciones WHERE nombre_seccion != '.' and nombre_seccion != '1er a 3er Nivel'  and nombre_seccion != 'A y B'
                  and nombre_seccion != '1er Nivel' and nombre_seccion != '2do Nivel' and nombre_seccion != '3er Nivel' and nombre_seccion != 'Todas'
                   ORDER BY nombre_seccion ASC";
$datos_seccion1 = mysqli_query($enlace, $query_seccion1) or die(mysqli_error());
$row_datos_seccion1 = mysqli_fetch_assoc($datos_seccion1);





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









$query_padece1 = "SELECT * FROM tb_medicos ORDER BY nombre_medico ASC";
$datos_padece1 = mysqli_query($enlace, $query_padece1) or die(mysqli_error());
$row_datos_padece1 = mysqli_fetch_assoc($datos_padece1);






$query_sangres1 = "SELECT * FROM tipo_sangres ORDER BY tipo_sangre ASC";
$datos_sangres1 = mysqli_query($enlace, $query_sangres1) or die(mysqli_error());
$row_datos_sangres1 = mysqli_fetch_assoc($datos_sangres1);





	

	$query_aseguradoras1 = "SELECT * FROM tipo_aseguradoras ORDER BY tipo_aseguradora ASC";
	$datos_aseguradoras1 = mysqli_query($enlace, $query_aseguradoras1) or die(mysqli_error());
	$row_datos_aseguradoras1 = mysqli_fetch_assoc($datos_aseguradoras1);









mysqli_close($enlace);  


?>