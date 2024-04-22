<?php

	$query_String_areas = "SELECT COUNT(*) AS total_areas FROM plantilla_areas WHERE nombre_area != '.' ";

        $query_areas = mysqli_query($enlace, $query_String_areas);

        $row_areas = mysqli_fetch_object($query_areas);




$query_String_cargos = "SELECT COUNT(*) AS total_cargos FROM plantilla_cargos";

$query_cargos = mysqli_query($enlace, $query_String_cargos);

$row_cargos = mysqli_fetch_object($query_cargos);




        $query_String_grados = "SELECT COUNT(*) AS total_grados FROM grados WHERE nombre_grados != '.'";

        $query_grados = mysqli_query($enlace, $query_String_grados);

        $row_grados = mysqli_fetch_object($query_grados);
        



$query_String_secciones = "SELECT COUNT(*) AS total_secciones FROM secciones WHERE nombre_seccion != '.'";

$query_secciones = mysqli_query($enlace, $query_String_secciones);

$row_secciones = mysqli_fetch_object($query_secciones);




        $query_String_pisos = "SELECT COUNT(*) AS total_pisos FROM pisos";

        $query_pisos = mysqli_query($enlace, $query_String_pisos);

        $row_pisos = mysqli_fetch_object($query_pisos);



$query_String_aulas = "SELECT COUNT(*) AS total_aulas FROM aulas";

$query_aulas = mysqli_query($enlace, $query_String_aulas);

$row_aulas = mysqli_fetch_object($query_aulas);



		$query_String_cursos = "SELECT COUNT(*) AS total_cursos FROM plantilla_titulos WHERE nombre_titulos != '.'";

        $query_cursos = mysqli_query($enlace, $query_String_cursos);

        $row_cursos = mysqli_fetch_object($query_cursos);




$query_String_profesiones = "SELECT COUNT(*) AS total_profesiones FROM tb_profesiones";

$query_profesiones = mysqli_query($enlace, $query_String_profesiones);

$row_profesiones = mysqli_fetch_object($query_profesiones);



		$query_String_parentescos = "SELECT COUNT(*) AS total_parentescos FROM tb_parentescos";

        $query_parentescos = mysqli_query($enlace, $query_String_parentescos);

        $row_parentescos = mysqli_fetch_object($query_parentescos);



$query_String_medicos = "SELECT COUNT(*) AS total_medicos FROM tb_medicos";

$query_medicos = mysqli_query($enlace, $query_String_medicos);

$row_medicos = mysqli_fetch_object($query_medicos);



		$query_String_avenidas = "SELECT COUNT(*) AS total_avenidas FROM d_avenidas";

        $query_avenidas = mysqli_query($enlace, $query_String_avenidas);

        $row_avenidas = mysqli_fetch_object($query_avenidas);


$query_String_municipios = "SELECT COUNT(*) AS total_municipios FROM d_municipio";

$query_municipios = mysqli_query($enlace, $query_String_municipios);

$row_municipios = mysqli_fetch_object($query_municipios);



		$query_String_parroquias = "SELECT COUNT(*) AS total_parroquias FROM d_parroquia";

        $query_parroquias = mysqli_query($enlace, $query_String_parroquias);

        $row_parroquias = mysqli_fetch_object($query_parroquias);



// $query_String_calles = "SELECT COUNT(*) AS total_calles FROM d_calles";

// $query_calles = mysqli_query($enlace, $query_String_calles);

// $row_calles = mysqli_fetch_object($query_calles);



	
		// $query_String_sectores = "SELECT COUNT(*) AS total_sectores FROM d_sector";

        // $query_sectores = mysqli_query($enlace, $query_String_sectores);

        // $row_sectores = mysqli_fetch_object($query_sectores);



$query_String_viviendas = "SELECT COUNT(*) AS total_viviendas FROM d_vivienda";

$query_viviendas = mysqli_query($enlace, $query_String_viviendas);

$row_viviendas = mysqli_fetch_object($query_viviendas);



		$query_String_pisos_apto = "SELECT COUNT(*) AS total_pisos_apto FROM d_piso";

        $query_pisos_apto = mysqli_query($enlace, $query_String_pisos_apto);

        $row_pisos_apto = mysqli_fetch_object($query_pisos_apto);


$query_String_numeros = "SELECT COUNT(*) AS total_numeros FROM d_numero";

$query_numeros = mysqli_query($enlace, $query_String_numeros);

$row_numeros = mysqli_fetch_object($query_numeros);



	$query_String_codigos = "SELECT COUNT(*) AS total_codigos FROM d_codigo";

        $query_codigos = mysqli_query($enlace, $query_String_codigos);

        $row_codigos = mysqli_fetch_object($query_codigos);



$query_String_ciudades = "SELECT COUNT(*) AS total_ciudades FROM d_ciudades WHERE nombre_ciudad != '.'";

$query_ciudades = mysqli_query($enlace, $query_String_ciudades);

$row_ciudades = mysqli_fetch_object($query_ciudades);



	$query_String_estados = "SELECT COUNT(*) AS total_estados FROM d_estados";

        $query_estados = mysqli_query($enlace, $query_String_estados);

        $row_estados = mysqli_fetch_object($query_estados);



$query_String_paises = "SELECT COUNT(*) AS total_paises FROM d_paises";

$query_paises = mysqli_query($enlace, $query_String_paises);

$row_paises = mysqli_fetch_object($query_paises);


	$query_String_sexos = "SELECT COUNT(*) AS total_sexos FROM sexo";

        $query_sexos = mysqli_query($enlace, $query_String_sexos);

        $row_sexos = mysqli_fetch_object($query_sexos);



$query_String_divisiones = "SELECT COUNT(*) AS total_divisiones FROM divisiones";

$query_divisiones = mysqli_query($enlace, $query_String_divisiones);

$row_divisiones = mysqli_fetch_object($query_divisiones);



$query_String_indicadores = "SELECT COUNT(*) AS total_indicadores FROM plantilla_indicadores";

$query_indicadores = mysqli_query($enlace, $query_String_indicadores);

$row_indicadores = mysqli_fetch_object($query_indicadores);



$query_String_reforzar = "SELECT COUNT(*) AS total_reforzar FROM plantilla_reforzar";

$query_reforzar = mysqli_query($enlace, $query_String_reforzar);

$row_reforzar = mysqli_fetch_object($query_reforzar);







        $query_String_iva = "SELECT COUNT(*) AS total_iva FROM iva ";

        $query_iva = mysqli_query($enlace, $query_String_iva);

        $row_iva = mysqli_fetch_object($query_iva);



$query_String_descuentos = "SELECT COUNT(*) AS total_descuentos FROM descuentos";

$query_descuentos = mysqli_query($enlace, $query_String_descuentos);

$row_descuentos = mysqli_fetch_object($query_descuentos);




$query_String_horas = "SELECT COUNT(*) AS total_horas FROM plantilla_horas WHERE nombre_hora != '.'";

        $query_horas = mysqli_query($enlace, $query_String_horas);

        $row_horas = mysqli_fetch_object($query_horas);



$query_String_menciones = "SELECT COUNT(*) AS total_mencion FROM plantilla_mencion WHERE nombre_mencion != '.'";

$query_menciones = mysqli_query($enlace, $query_String_menciones);

$row_menciones = mysqli_fetch_object($query_menciones);



        $query_String_institutos = "SELECT COUNT(*) AS total_instituto FROM plantilla_instituto WHERE nombre_instituto != '.' ";

        $query_institutos = mysqli_query($enlace, $query_String_institutos);

        $row_institutos = mysqli_fetch_object($query_institutos);



$query_String_turnos = "SELECT COUNT(*) AS total_turnos FROM plantilla_turnos WHERE nombre_turno != '.'";

$query_turnos = mysqli_query($enlace, $query_String_turnos);

$row_turnos = mysqli_fetch_object($query_turnos);



        $query_String_tipos = "SELECT COUNT(*) AS total_tipos FROM tipo_plantel WHERE nombre_tipo != '.'";

        $query_tipos = mysqli_query($enlace, $query_String_tipos);

        $row_tipos = mysqli_fetch_object($query_tipos);




$query_String_civiles = "SELECT COUNT(*) AS total_civiles FROM tb_estado_civil WHERE nombre_estado_civil != '.'";

$query_civiles = mysqli_query($enlace, $query_String_civiles);

$row_civiles = mysqli_fetch_object($query_civiles);




                
        $query_String_religiones = "SELECT COUNT(*) AS total_religiones FROM religiones";

        $query_religiones = mysqli_query($enlace, $query_String_religiones);

        $row_religiones = mysqli_fetch_object($query_religiones);



 $query_String_edades = "SELECT COUNT(*) AS total_edades FROM edades";

 $query_edades = mysqli_query($enlace, $query_String_edades);

 $row_edades = mysqli_fetch_object($query_edades);



        $query_String_camisas = "SELECT COUNT(*) AS total_camisas FROM tall_cam";

        $query_camisas = mysqli_query($enlace, $query_String_camisas);

        $row_camisas = mysqli_fetch_object($query_camisas);



 $query_String_pantalones = "SELECT COUNT(*) AS total_pantalones FROM tall_pant";

 $query_pantalones = mysqli_query($enlace, $query_String_pantalones);

 $row_pantalones = mysqli_fetch_object($query_pantalones);



         $query_String_zapatos = "SELECT COUNT(*) AS total_zapatos FROM tall_zap";

        $query_zapatos = mysqli_query($enlace, $query_String_zapatos);

        $row_zapatos = mysqli_fetch_object($query_zapatos);




         $query_String_vive_con = "SELECT COUNT(*) AS total_vive_con FROM d_vive_con";

        $query_vive_con = mysqli_query($enlace, $query_String_vive_con);

        $row_vive_con = mysqli_fetch_object($query_vive_con);



        $query_String_traslada_en = "SELECT COUNT(*) AS total_traslada_en FROM d_traslada_en";

        $query_traslada_en = mysqli_query($enlace, $query_String_traslada_en);

        $row_traslada_en = mysqli_fetch_object($query_traslada_en);



        $query_String_se_retira = "SELECT COUNT(*) AS total_se_retira FROM d_se_retira";

        $query_se_retira = mysqli_query($enlace, $query_String_se_retira);

        $row_se_retira = mysqli_fetch_object($query_se_retira);








$query_String_periodo_esc = "SELECT COUNT(*) AS total_periodo_esc FROM temporada_escolar WHERE periodo_escolar != '.'";

$query_periodo_esc = mysqli_query($enlace, $query_String_periodo_esc);

$row_periodo_esc = mysqli_fetch_object($query_periodo_esc);



        $query_String_pesos = "SELECT COUNT(*) AS total_pesos FROM pesos";

        $query_pesos = mysqli_query($enlace, $query_String_pesos);

        $row_pesos = mysqli_fetch_object($query_pesos);



        $query_String_alturas = "SELECT COUNT(*) AS total_alturas FROM alturas";

        $query_alturas = mysqli_query($enlace, $query_String_alturas);

        $row_alturas = mysqli_fetch_object($query_alturas);



$query_String_sangres = "SELECT COUNT(*) AS total_sangres FROM tipo_sangres";

$query_sangres = mysqli_query($enlace, $query_String_sangres);

$row_sangres = mysqli_fetch_object($query_sangres);



        
$query_String_aseguradoras = "SELECT COUNT(*) AS total_aseguradoras FROM tipo_aseguradoras";

$query_aseguradoras = mysqli_query($enlace, $query_String_aseguradoras);

$row_aseguradoras = mysqli_fetch_object($query_aseguradoras);


       
?>
