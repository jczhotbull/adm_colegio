<?php
error_reporting(0); //hide php errors
require '../../0 html2pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;



$i="1";
$conteo_repro = '0';
$puntaje_sumado = '0';
$promedio_divisor = '0';


$lap_divisor_promedio_Lap_1 = '0';
$lap_divisor_promedio_Lap_2 = '0';
$lap_divisor_promedio_Lap_3 = '0';

$lap_divisor_promedio_Lap_Def = '0';



$lap_suma_total_promedio_Lap_1 = '0';
$lap_suma_total_promedio_Lap_2 = '0';
$lap_suma_total_promedio_Lap_3 = '0';

$lap_suma_total_promedio_Lap_Def = '0';


    $promedio_total123 = '0';

    $promedio_total123_divisor = '0';



$lapso1_materia1_promedio_aula = '0';
$lapso1_materia1_promedio_aula_divisor = '0';

$lapso1_materia2_promedio_aula = '0';
$lapso1_materia2_promedio_aula_divisor = '0';

$lapso1_materia3_promedio_aula = '0';
$lapso1_materia3_promedio_aula_divisor = '0';

$lapso1_materia4_promedio_aula = '0';
$lapso1_materia4_promedio_aula_divisor = '0';

$lapso1_materia5_promedio_aula = '0';
$lapso1_materia5_promedio_aula_divisor = '0';

$lapso1_materia6_promedio_aula = '0';
$lapso1_materia6_promedio_aula_divisor = '0';

$lapso1_materia7_promedio_aula = '0';
$lapso1_materia7_promedio_aula_divisor = '0';

$lapso1_materia8_promedio_aula = '0';
$lapso1_materia8_promedio_aula_divisor = '0';

$lapso1_materia9_promedio_aula = '0';
$lapso1_materia9_promedio_aula_divisor = '0';

$lapso1_materia10_promedio_aula = '0';
$lapso1_materia10_promedio_aula_divisor = '0';

$lapso1_materia11_promedio_aula = '0';
$lapso1_materia11_promedio_aula_divisor = '0';

$lapso1_materia12_promedio_aula = '0';
$lapso1_materia12_promedio_aula_divisor = '0';

$lapso1_materia13_promedio_aula = '0';
$lapso1_materia13_promedio_aula_divisor = '0';

$lapso1_materia14_promedio_aula = '0';
$lapso1_materia14_promedio_aula_divisor = '0';





$lapso2_materia1_promedio_aula = '0';
$lapso2_materia1_promedio_aula_divisor = '0';

$lapso2_materia2_promedio_aula = '0';
$lapso2_materia2_promedio_aula_divisor = '0';

$lapso2_materia3_promedio_aula = '0';
$lapso2_materia3_promedio_aula_divisor = '0';

$lapso2_materia4_promedio_aula = '0';
$lapso2_materia4_promedio_aula_divisor = '0';

$lapso2_materia5_promedio_aula = '0';
$lapso2_materia5_promedio_aula_divisor = '0';

$lapso2_materia6_promedio_aula = '0';
$lapso2_materia6_promedio_aula_divisor = '0';

$lapso2_materia7_promedio_aula = '0';
$lapso2_materia7_promedio_aula_divisor = '0';

$lapso2_materia8_promedio_aula = '0';
$lapso2_materia8_promedio_aula_divisor = '0';

$lapso2_materia9_promedio_aula = '0';
$lapso2_materia9_promedio_aula_divisor = '0';

$lapso2_materia10_promedio_aula = '0';
$lapso2_materia10_promedio_aula_divisor = '0';

$lapso2_materia11_promedio_aula = '0';
$lapso2_materia11_promedio_aula_divisor = '0';

$lapso2_materia12_promedio_aula = '0';
$lapso2_materia12_promedio_aula_divisor = '0';

$lapso2_materia13_promedio_aula = '0';
$lapso2_materia13_promedio_aula_divisor = '0';

$lapso2_materia14_promedio_aula = '0';
$lapso2_materia14_promedio_aula_divisor = '0';




$lapso3_materia1_promedio_aula = '0';
$lapso3_materia1_promedio_aula_divisor = '0';

$lapso3_materia2_promedio_aula = '0';
$lapso3_materia2_promedio_aula_divisor = '0';

$lapso3_materia3_promedio_aula = '0';
$lapso3_materia3_promedio_aula_divisor = '0';

$lapso3_materia4_promedio_aula = '0';
$lapso3_materia4_promedio_aula_divisor = '0';

$lapso3_materia5_promedio_aula = '0';
$lapso3_materia5_promedio_aula_divisor = '0';

$lapso3_materia6_promedio_aula = '0';
$lapso3_materia6_promedio_aula_divisor = '0';

$lapso3_materia7_promedio_aula = '0';
$lapso3_materia7_promedio_aula_divisor = '0';

$lapso3_materia8_promedio_aula = '0';
$lapso3_materia8_promedio_aula_divisor = '0';

$lapso3_materia9_promedio_aula = '0';
$lapso3_materia9_promedio_aula_divisor = '0';

$lapso3_materia10_promedio_aula = '0';
$lapso3_materia10_promedio_aula_divisor = '0';

$lapso3_materia11_promedio_aula = '0';
$lapso3_materia11_promedio_aula_divisor = '0';

$lapso3_materia12_promedio_aula = '0';
$lapso3_materia12_promedio_aula_divisor = '0';

$lapso3_materia13_promedio_aula = '0';
$lapso3_materia13_promedio_aula_divisor = '0';

$lapso3_materia14_promedio_aula = '0';
$lapso3_materia14_promedio_aula_divisor = '0';


$definitiva_materia1_aula_promedio = '0';
$definitiva_materia2_aula_promedio = '0';
$definitiva_materia3_aula_promedio = '0';
$definitiva_materia4_aula_promedio = '0';
$definitiva_materia5_aula_promedio = '0';
$definitiva_materia6_aula_promedio = '0';
$definitiva_materia7_aula_promedio = '0';
$definitiva_materia8_aula_promedio = '0';
$definitiva_materia9_aula_promedio = '0';
$definitiva_materia10_aula_promedio = '0';
$definitiva_materia11_aula_promedio = '0';
$definitiva_materia12_aula_promedio = '0';
$definitiva_materia13_aula_promedio = '0';
$definitiva_materia14_aula_promedio = '0';

$definitiva_materia1_aula_divisor = '0';
$definitiva_materia2_aula_divisor = '0';
$definitiva_materia3_aula_divisor = '0';
$definitiva_materia4_aula_divisor = '0';
$definitiva_materia5_aula_divisor = '0';
$definitiva_materia6_aula_divisor = '0';
$definitiva_materia7_aula_divisor = '0';
$definitiva_materia8_aula_divisor = '0';
$definitiva_materia9_aula_divisor = '0';
$definitiva_materia10_aula_divisor = '0';
$definitiva_materia11_aula_divisor = '0';
$definitiva_materia12_aula_divisor = '0';
$definitiva_materia13_aula_divisor = '0';
$definitiva_materia14_aula_divisor = '0';




// captura la hoja a ser impresa

$tot_mat1 = '';
$tot_mat2 = '';
$tot_mat3 = '';
$tot_mat4 = '';
$tot_mat5 = '';
$tot_mat6 = '';
$tot_mat7 = '';
$tot_mat8 = '';
$tot_mat9 = '';
$tot_mat10 = '';
$tot_mat11 = '';
$tot_mat12 = '';
$tot_mat13 = '';
$tot_mat14 = '';



$div_mat1 = '';
$div_mat2 = '';
$div_mat3 = '';
$div_mat4 = '';
$div_mat5 = '';
$div_mat6 = '';
$div_mat7 = '';
$div_mat8 = '';
$div_mat9 = '';
$div_mat10 = '';
$div_mat11 = '';
$div_mat12 = '';
$div_mat13 = '';
$div_mat14 = '';



$apla_mat1 = '';
$apla_mat2 = '';
$apla_mat3 = '';
$apla_mat4 = '';
$apla_mat5 = '';
$apla_mat6 = '';
$apla_mat7 = '';
$apla_mat8 = '';
$apla_mat9 = '';
$apla_mat10 = '';
$apla_mat11 = '';
$apla_mat12 = '';
$apla_mat13 = '';
$apla_mat14 = '';



$lap1_i="1";
$lap1_conteo_repro = '0';
$lap1_puntaje_sumado = '0';
$lap1_promedio_divisor = '0';
// captura la hoja a ser impresa

$lap1_tot_mat1 = '';
$lap1_tot_mat2 = '';
$lap1_tot_mat3 = '';
$lap1_tot_mat4 = '';
$lap1_tot_mat5 = '';
$lap1_tot_mat6 = '';
$lap1_tot_mat7 = '';
$lap1_tot_mat8 = '';
$lap1_tot_mat9 = '';
$lap1_tot_mat10 = '';
$lap1_tot_mat11 = '';
$lap1_tot_mat12 = '';
$lap1_tot_mat13 = '';
$lap1_tot_mat14 = '';



$lap1_div_mat1 = '';
$lap1_div_mat2 = '';
$lap1_div_mat3 = '';
$lap1_div_mat4 = '';
$lap1_div_mat5 = '';
$lap1_div_mat6 = '';
$lap1_div_mat7 = '';
$lap1_div_mat8 = '';
$lap1_div_mat9 = '';
$lap1_div_mat10 = '';
$lap1_div_mat11 = '';
$lap1_div_mat12 = '';
$lap1_div_mat13 = '';
$lap1_div_mat14 = '';



$lap1_apla_mat1 = '';
$lap1_apla_mat2 = '';
$lap1_apla_mat3 = '';
$lap1_apla_mat4 = '';
$lap1_apla_mat5 = '';
$lap1_apla_mat6 = '';
$lap1_apla_mat7 = '';
$lap1_apla_mat8 = '';
$lap1_apla_mat9 = '';
$lap1_apla_mat10 = '';
$lap1_apla_mat11 = '';
$lap1_apla_mat12 = '';
$lap1_apla_mat13 = '';
$lap1_apla_mat14 = '';



$lap2_i="1";
$lap2_conteo_repro = '0';
$lap2_puntaje_sumado = '0';
$lap2_promedio_divisor = '0';
// captura la hoja a ser impresa

$lap2_tot_mat1 = '';
$lap2_tot_mat2 = '';
$lap2_tot_mat3 = '';
$lap2_tot_mat4 = '';
$lap2_tot_mat5 = '';
$lap2_tot_mat6 = '';
$lap2_tot_mat7 = '';
$lap2_tot_mat8 = '';
$lap2_tot_mat9 = '';
$lap2_tot_mat10 = '';
$lap2_tot_mat11 = '';
$lap2_tot_mat12 = '';
$lap2_tot_mat13 = '';
$lap2_tot_mat14 = '';



$lap2_div_mat1 = '';
$lap2_div_mat2 = '';
$lap2_div_mat3 = '';
$lap2_div_mat4 = '';
$lap2_div_mat5 = '';
$lap2_div_mat6 = '';
$lap2_div_mat7 = '';
$lap2_div_mat8 = '';
$lap2_div_mat9 = '';
$lap2_div_mat10 = '';
$lap2_div_mat11 = '';
$lap2_div_mat12 = '';
$lap2_div_mat13 = '';
$lap2_div_mat14 = '';



$lap2_apla_mat1 = '';
$lap2_apla_mat2 = '';
$lap2_apla_mat3 = '';
$lap2_apla_mat4 = '';
$lap2_apla_mat5 = '';
$lap2_apla_mat6 = '';
$lap2_apla_mat7 = '';
$lap2_apla_mat8 = '';
$lap2_apla_mat9 = '';
$lap2_apla_mat10 = '';
$lap2_apla_mat11 = '';
$lap2_apla_mat12 = '';
$lap2_apla_mat13 = '';
$lap2_apla_mat14 = '';



$lap3_i="1";
$lap3_conteo_repro = '0';
$lap3_puntaje_sumado = '0';
$lap3_promedio_divisor = '0';
// captura la hoja a ser impresa

$lap3_tot_mat1 = '';
$lap3_tot_mat2 = '';
$lap3_tot_mat3 = '';
$lap3_tot_mat4 = '';
$lap3_tot_mat5 = '';
$lap3_tot_mat6 = '';
$lap3_tot_mat7 = '';
$lap3_tot_mat8 = '';
$lap3_tot_mat9 = '';
$lap3_tot_mat10 = '';
$lap3_tot_mat11 = '';
$lap3_tot_mat12 = '';
$lap3_tot_mat13 = '';
$lap3_tot_mat14 = '';



$lap3_div_mat1 = '';
$lap3_div_mat2 = '';
$lap3_div_mat3 = '';
$lap3_div_mat4 = '';
$lap3_div_mat5 = '';
$lap3_div_mat6 = '';
$lap3_div_mat7 = '';
$lap3_div_mat8 = '';
$lap3_div_mat9 = '';
$lap3_div_mat10 = '';
$lap3_div_mat11 = '';
$lap3_div_mat12 = '';
$lap3_div_mat13 = '';
$lap3_div_mat14 = '';



$lap3_apla_mat1 = '';
$lap3_apla_mat2 = '';
$lap3_apla_mat3 = '';
$lap3_apla_mat4 = '';
$lap3_apla_mat5 = '';
$lap3_apla_mat6 = '';
$lap3_apla_mat7 = '';
$lap3_apla_mat8 = '';
$lap3_apla_mat9 = '';
$lap3_apla_mat10 = '';
$lap3_apla_mat11 = '';
$lap3_apla_mat12 = '';
$lap3_apla_mat13 = '';
$lap3_apla_mat14 = '';


            $color0 =  '#DCDAD7';

            $color1 =  '#DCF6C0';
             $color1aa =  '#e2e9da';   // claro   
            $color1bb =  '#c9d3bd';   // oscuro
           
             $color2 =  '#F6EFC0';
            $color2aa =  '#f5f2e0'; // Light
            $color2bb =  '#dddac8'; // Dark
           
            $color3 =  '#F6DDC0';
            $color3b = '#F4E7D9';

            $color4 =  '#B9AAA6';

            $color5 =  '#DBE2E8';   // azul claro claro   

            $color6 =  '#F8F7F7';// azul claro     ADD8E1

            $color7 =  '#EDEEEF';// azul claro ocuro

               $color8 =  '#c0d7ec';// azullll
             $color8aa =  '#e5edf5';// azullll claro
              $color8bb =  '#bacbda';// azullll oscuro

            $fechaactuaaal = date('d-m-Y');



ob_start();
?>









<?php

include("../../conectar.php");





$query_formato_1 = "SELECT * FROM z_formato where id_formato = 1 order by id_formato ASC limit 1" ;
$datos_formato_1 = mysqli_query($enlace, $query_formato_1) or die(mysqli_error());
$row_datos_formato_1 = mysqli_fetch_array($datos_formato_1);
$comparativo_formato_1 = $row_datos_formato_1['comparativo'];
$alfabetico_formato_1 = $row_datos_formato_1['alfabetico'];
$literal_formato_1 = $row_datos_formato_1['literal'];
$literal_formato_1_completo = $row_datos_formato_1['lit_completo'];   

$cualitativa_formato_1 = $row_datos_formato_1['cualitativa'];
$cualitativa_formato_1_completo = $row_datos_formato_1['cua_completo'];   




$query_formato_2 = "SELECT * FROM z_formato where id_formato = 2  order by id_formato ASC limit 1" ;
$datos_formato_2 = mysqli_query($enlace, $query_formato_2) or die(mysqli_error());
$row_datos_formato_2 = mysqli_fetch_array($datos_formato_2);
$comparativo_formato_2 = $row_datos_formato_2['comparativo'];
$alfabetico_formato_2 = $row_datos_formato_2['alfabetico'];
$literal_formato_2 = $row_datos_formato_2['literal'];
$literal_formato_2_completo = $row_datos_formato_2['lit_completo'];  


$cualitativa_formato_2 = $row_datos_formato_2['cualitativa'];
$cualitativa_formato_2_completo = $row_datos_formato_2['cua_completo'];   


$query_formato_3 = "SELECT * FROM z_formato where id_formato = 3  order by id_formato ASC limit 1" ;
$datos_formato_3 = mysqli_query($enlace, $query_formato_3) or die(mysqli_error());
$row_datos_formato_3 = mysqli_fetch_array($datos_formato_3);
$comparativo_formato_3 = $row_datos_formato_3['comparativo'];
$alfabetico_formato_3 = $row_datos_formato_3['alfabetico'];
$literal_formato_3 = $row_datos_formato_3['literal'];
$literal_formato_3_completo = $row_datos_formato_3['lit_completo'];  


$cualitativa_formato_3 = $row_datos_formato_3['cualitativa'];
$cualitativa_formato_3_completo = $row_datos_formato_3['cua_completo'];   


$query_formato_4 = "SELECT * FROM z_formato where id_formato = 4  order by id_formato ASC limit 1" ;
$datos_formato_4 = mysqli_query($enlace, $query_formato_4) or die(mysqli_error());
$row_datos_formato_4 = mysqli_fetch_array($datos_formato_4);
$comparativo_formato_4 = $row_datos_formato_4['comparativo'];
$alfabetico_formato_4 = $row_datos_formato_4['alfabetico'];
$literal_formato_4 = $row_datos_formato_4['literal'];
$literal_formato_4_completo = $row_datos_formato_4['lit_completo'];  

$cualitativa_formato_4 = $row_datos_formato_4['cualitativa'];
$cualitativa_formato_4_completo = $row_datos_formato_4['cua_completo'];   



$query_formato_5 = "SELECT * FROM z_formato where id_formato = 5  order by id_formato ASC limit 1" ;
$datos_formato_5 = mysqli_query($enlace, $query_formato_5) or die(mysqli_error());
$row_datos_formato_5 = mysqli_fetch_array($datos_formato_5);
$comparativo_formato_5 = $row_datos_formato_5['comparativo'];
$alfabetico_formato_5 = $row_datos_formato_5['alfabetico'];
$literal_formato_5 = $row_datos_formato_5['literal'];
$literal_formato_5_completo = $row_datos_formato_5['lit_completo'];  

$cualitativa_formato_5 = $row_datos_formato_5['cualitativa'];
$cualitativa_formato_5_completo = $row_datos_formato_5['cua_completo'];   



$query_formato_6 = "SELECT * FROM z_formato where id_formato = 6  order by id_formato ASC limit 1" ;
$datos_formato_6 = mysqli_query($enlace, $query_formato_6) or die(mysqli_error());
$row_datos_formato_6 = mysqli_fetch_array($datos_formato_6);
$comparativo_formato_6 = $row_datos_formato_6['comparativo'];
$alfabetico_formato_6 = $row_datos_formato_6['alfabetico'];
$literal_formato_6 = $row_datos_formato_6['literal'];
$literal_formato_6_completo = $row_datos_formato_6['lit_completo'];  


$cualitativa_formato_6 = $row_datos_formato_6['cualitativa'];
$cualitativa_formato_6_completo = $row_datos_formato_6['cua_completo'];   


$query_formato_7 = "SELECT * FROM z_formato where id_formato = 7 order by id_formato ASC limit 1" ;
$datos_formato_7 = mysqli_query($enlace, $query_formato_7) or die(mysqli_error());
$row_datos_formato_7 = mysqli_fetch_array($datos_formato_7);
$comparativo_formato_7 = $row_datos_formato_7['comparativo'];
$alfabetico_formato_7 = $row_datos_formato_7['alfabetico'];
$literal_formato_7 = $row_datos_formato_7['literal'];
$literal_formato_7_completo = $row_datos_formato_7['lit_completo'];  

$cualitativa_formato_7 = $row_datos_formato_7['cualitativa'];
$cualitativa_formato_7_completo = $row_datos_formato_7['cua_completo'];   


$query_formato_8 = "SELECT * FROM z_formato where id_formato = 8 order by id_formato ASC limit 1" ;
$datos_formato_8 = mysqli_query($enlace, $query_formato_8) or die(mysqli_error());
$row_datos_formato_8 = mysqli_fetch_array($datos_formato_8);
$comparativo_formato_8 = $row_datos_formato_8['comparativo'];
$alfabetico_formato_8 = $row_datos_formato_8['alfabetico'];
$literal_formato_8 = $row_datos_formato_8['literal'];
$literal_formato_8_completo = $row_datos_formato_8['lit_completo'];  


$cualitativa_formato_8 = $row_datos_formato_8['cualitativa'];
$cualitativa_formato_8_completo = $row_datos_formato_8['cua_completo'];   


$query_formato_9 = "SELECT * FROM z_formato where id_formato = 9 order by id_formato ASC limit 1" ;
$datos_formato_9 = mysqli_query($enlace, $query_formato_9) or die(mysqli_error());
$row_datos_formato_9 = mysqli_fetch_array($datos_formato_9);
$comparativo_formato_9 = $row_datos_formato_9['comparativo'];
$alfabetico_formato_9 = $row_datos_formato_9['alfabetico'];
$literal_formato_9 = $row_datos_formato_9['literal'];
$literal_formato_9_completo = $row_datos_formato_9['lit_completo'];  


$cualitativa_formato_9 = $row_datos_formato_9['cualitativa'];
$cualitativa_formato_9_completo = $row_datos_formato_9['cua_completo'];   


$query_formato_10 = "SELECT * FROM z_formato where id_formato = 10 order by id_formato ASC limit 1" ;
$datos_formato_10 = mysqli_query($enlace, $query_formato_10) or die(mysqli_error());
$row_datos_formato_10 = mysqli_fetch_array($datos_formato_10);
$comparativo_formato_10 = $row_datos_formato_10['comparativo'];
$alfabetico_formato_10 = $row_datos_formato_10['alfabetico'];
$literal_formato_10 = $row_datos_formato_10['literal'];
$literal_formato_10_completo = $row_datos_formato_10['lit_completo'];  

$cualitativa_formato_10 = $row_datos_formato_10['cualitativa'];
$cualitativa_formato_10_completo = $row_datos_formato_10['cua_completo'];   



$query_formato_11 = "SELECT * FROM z_formato where id_formato = 11 order by id_formato ASC limit 1" ;
$datos_formato_11 = mysqli_query($enlace, $query_formato_11) or die(mysqli_error());
$row_datos_formato_11 = mysqli_fetch_array($datos_formato_11);
$comparativo_formato_11 = $row_datos_formato_11['comparativo'];
$alfabetico_formato_11 = $row_datos_formato_11['alfabetico'];
$literal_formato_11 = $row_datos_formato_11['literal'];
$literal_formato_11_completo = $row_datos_formato_11['lit_completo'];  

$cualitativa_formato_11 = $row_datos_formato_11['cualitativa'];
$cualitativa_formato_11_completo = $row_datos_formato_11['cua_completo'];   



$query_formato_12 = "SELECT * FROM z_formato where id_formato = 12 order by id_formato ASC limit 1" ;
$datos_formato_12 = mysqli_query($enlace, $query_formato_12) or die(mysqli_error());
$row_datos_formato_12 = mysqli_fetch_array($datos_formato_12);
$comparativo_formato_12 = $row_datos_formato_12['comparativo'];
$alfabetico_formato_12 = $row_datos_formato_12['alfabetico'];
$literal_formato_12 = $row_datos_formato_12['literal'];
$literal_formato_12_completo = $row_datos_formato_12['lit_completo'];  

$cualitativa_formato_12 = $row_datos_formato_12['cualitativa'];
$cualitativa_formato_12_completo = $row_datos_formato_12['cua_completo'];   











$queryimp = "SELECT * FROM tb_colores_imp where activo = '1' LIMIT 1";

$datos_color = mysqli_query($enlace, $queryimp) or die(mysqli_error());

$row_datos_color = mysqli_fetch_array($datos_color );



$periodo = "SELECT * FROM periodo_escolar";
$datos_periodo = mysqli_query($enlace, $periodo) or die(mysqli_error());
$row_datos_periodo = mysqli_fetch_assoc($datos_periodo);





$query_z_puntaje = "SELECT * FROM z_puntaje where pt_selecc = '1' LIMIT 1";

$datos_z_puntaje = mysqli_query($enlace, $query_z_puntaje) or die(mysqli_error());

$row_datos_z_puntaje = mysqli_fetch_array($datos_z_puntaje );

$la_mitad_es = $row_datos_z_puntaje['el_puntaje']/2;

$el_puntaje_completo_es = $row_datos_z_puntaje['el_puntaje'];

$el_puntaje_aprobatorio_aprox = $row_datos_z_puntaje['el_aproximado'];
$el_puntaje_aprobatorio_prom = $row_datos_z_puntaje['el_promedio'];
$el_puntaje_aprobatorio_neto = $row_datos_z_puntaje['el_minimo'];

$el_id_puntaje_es = $row_datos_z_puntaje['id_puntaje'];





$queryplantel = "SELECT * FROM z_plantel, direcciones, d_ciudades, d_municipio, d_parroquia, d_avenidas, d_codigo, d_vivienda  
           WHERE  z_plantel.id_direccion = direcciones.id_direccion
             and  direcciones.id_ciudad  = d_ciudades.id_ciudad
             and  direcciones.id_municipio  = d_municipio.id_municipio
             and  direcciones.id_parroquia  = d_parroquia.id_parroquia
             and  direcciones.id_avenida = d_avenidas.id_avenida
             and  direcciones.id_codigo = d_codigo.id_codigo
             and  direcciones.id_vivienda = d_vivienda.id_vivienda

          GROUP BY codigo_plantel ORDER BY nombre_plantel ASC LIMIT 1";

$datos_queryplantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());

$row_datos_queryplantel = mysqli_fetch_array($datos_queryplantel); 

$logo_plantel = $row_datos_queryplantel['logo_plantel'];



mysqli_close($enlace);

$color_imp1 = $row_datos_color['color1'];
$color_imp2 = $row_datos_color['color2'];
$color_imp3 = $row_datos_color['color3'];

 ?>

<style>
.centrado{ padding-left: 85px;}
.bannersize {width: 614px; height: 50px;}

.basetabla { margin:auto; width:100%;}
.miniborder {border:0.5px solid <?php echo $color_imp1; ?>;}

.miniborderleft {border-left: 2px solid <?php echo $color_imp1; ?>; border-top: 0.5px solid <?php echo $color_imp1; ?>; border-bottom: 0.5px solid <?php echo $color_imp1; ?>; border-right: 0.5px solid <?php echo $color_imp1; ?>;}

.miniborderlight {border:0.5px dotted <?php echo $color_imp2; ?>;}

.minibordercut {border-top:1px dashed <?php echo $color_imp2; ?>;}

.miniborder_g {border:1px solid <?php echo $color_imp2; ?>;}

.miniborder_A {border-right: 3px double <?php echo $color_imp2; ?>; border-top: 3px double <?php echo $color_imp2; ?>; border-left: 3px double <?php echo $color_imp2; ?>;}

.miniborder_B {border-bottom: 3px double <?php echo $color_imp2; ?>; border-right: 3px double <?php echo $color_imp2; ?>; border-left: 3px double <?php echo $color_imp2; ?>;}

.bordecompleto td{border:1px solid <?php echo $color_imp1; ?>;}

.bordecompleto th{border:1px solid <?php echo $color_imp1; ?>;}


  .table1{
                border-radius: 6px;
                border: 1px solid #000;
            }

            .table2{
                border-radius: 6px;
                border: 1px solid #000;               

            }

            .table3{
                position: relative;
                left:590px;
                top:-50px;
            }

            tr,td,th{
                text-align: center;
                vertical-align: middle;
            }

            th{
                border-radius: 6px;
                border: 1px solid #000;
            }

            .img1{
                width: 90px;
                height: 83px;
            }

            h6,h5{
                text-align: center;
            }

            h6{
                line-height: 1%;
            }


</style>



<?php

include("../../conectar.php");

              $querymodcabecc = "SELECT * FROM z_cabecera where id_cabecera = 1 ";

              $datos_modcabecc = mysqli_query($enlace, $querymodcabecc) or die(mysqli_error());
              
              $row_datos_modcabecc = mysqli_fetch_array($datos_modcabecc);


include("../../conectar.php");

$ciclito = $_POST["id_cicloxxx"];
$gradito = $_POST["id_gradoxxx"];





$queryasignaturas = "SELECT * FROM asignatura_ciclo_grado
         WHERE id_del_ciclo = $ciclito
         and   id_del_grado = $gradito 
                 
         GROUP BY id_asign_ciclo_grado Limit 1" ;

$datos_controlasign = mysqli_query($enlace, $queryasignaturas) or die(mysqli_error());
$row_datos_controlasign = mysqli_fetch_array($datos_controlasign); 

$la_asign_es = $row_datos_controlasign['id_asignatura'];

$num_materia = $_POST["id_num_matxxx"];
$lapso= $_POST["id_lapsoxxx"];


$querymateria = "SELECT * FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 

mysqli_close($enlace); 

$back_emergency = '#EBECEC';


$formato_eva_M1 = $row_datos_controlmat['a_convertir'];
$formato_eva_M2 = $row_datos_controlmat['b_convertir'];
$formato_eva_M3 = $row_datos_controlmat['c_convertir'];
$formato_eva_M4 = $row_datos_controlmat['d_convertir'];
$formato_eva_M5 = $row_datos_controlmat['e_convertir'];
$formato_eva_M6 = $row_datos_controlmat['f_convertir'];
$formato_eva_M7 = $row_datos_controlmat['g_convertir'];
$formato_eva_M8 = $row_datos_controlmat['h_convertir'];
$formato_eva_M9 = $row_datos_controlmat['i_convertir'];
$formato_eva_M10 = $row_datos_controlmat['j_convertir'];
$formato_eva_M11 = $row_datos_controlmat['k_convertir'];
$formato_eva_M12 = $row_datos_controlmat['l_convertir'];
$formato_eva_M13 = $row_datos_controlmat['m_convertir'];
$formato_eva_M14 = $row_datos_controlmat['n_convertir'];




$V1_M1_L1 = $row_datos_controlmat['A11'];
$V2_M1_L1 = $row_datos_controlmat['A12'];
$V3_M1_L1 = $row_datos_controlmat['A13'];
$V4_M1_L1 = $row_datos_controlmat['A14'];
$V5_M1_L1 = $row_datos_controlmat['A15'];
$V6_M1_L1 = $row_datos_controlmat['A16'];
$V7_M1_L1 = $row_datos_controlmat['A17'];

$V1_M2_L1 = $row_datos_controlmat['B11'];
$V2_M2_L1 = $row_datos_controlmat['B12'];
$V3_M2_L1 = $row_datos_controlmat['B13'];
$V4_M2_L1 = $row_datos_controlmat['B14'];
$V5_M2_L1 = $row_datos_controlmat['B15'];
$V6_M2_L1 = $row_datos_controlmat['B16'];
$V7_M2_L1 = $row_datos_controlmat['B17'];

$V1_M3_L1 = $row_datos_controlmat['C11'];
$V2_M3_L1 = $row_datos_controlmat['C12'];
$V3_M3_L1 = $row_datos_controlmat['C13'];
$V4_M3_L1 = $row_datos_controlmat['C14'];
$V5_M3_L1 = $row_datos_controlmat['C15'];
$V6_M3_L1 = $row_datos_controlmat['C16'];
$V7_M3_L1 = $row_datos_controlmat['C17'];

$V1_M4_L1 = $row_datos_controlmat['D11'];
$V2_M4_L1 = $row_datos_controlmat['D12'];
$V3_M4_L1 = $row_datos_controlmat['D13'];
$V4_M4_L1 = $row_datos_controlmat['D14'];
$V5_M4_L1 = $row_datos_controlmat['D15'];
$V6_M4_L1 = $row_datos_controlmat['D16'];
$V7_M4_L1 = $row_datos_controlmat['D17'];

$V1_M5_L1 = $row_datos_controlmat['E11'];
$V2_M5_L1 = $row_datos_controlmat['E12'];
$V3_M5_L1 = $row_datos_controlmat['E13'];
$V4_M5_L1 = $row_datos_controlmat['E14'];
$V5_M5_L1 = $row_datos_controlmat['E15'];
$V6_M5_L1 = $row_datos_controlmat['E16'];
$V7_M5_L1 = $row_datos_controlmat['E17'];

$V1_M6_L1 = $row_datos_controlmat['F11'];
$V2_M6_L1 = $row_datos_controlmat['F12'];
$V3_M6_L1 = $row_datos_controlmat['F13'];
$V4_M6_L1 = $row_datos_controlmat['F14'];
$V5_M6_L1 = $row_datos_controlmat['F15'];
$V6_M6_L1 = $row_datos_controlmat['F16'];
$V7_M6_L1 = $row_datos_controlmat['F17'];

$V1_M7_L1 = $row_datos_controlmat['G11'];
$V2_M7_L1 = $row_datos_controlmat['G12'];
$V3_M7_L1 = $row_datos_controlmat['G13'];
$V4_M7_L1 = $row_datos_controlmat['G14'];
$V5_M7_L1 = $row_datos_controlmat['G15'];
$V6_M7_L1 = $row_datos_controlmat['G16'];
$V7_M7_L1 = $row_datos_controlmat['G17'];

$V1_M8_L1 = $row_datos_controlmat['H11'];
$V2_M8_L1 = $row_datos_controlmat['H12'];
$V3_M8_L1 = $row_datos_controlmat['H13'];
$V4_M8_L1 = $row_datos_controlmat['H14'];
$V5_M8_L1 = $row_datos_controlmat['H15'];
$V6_M8_L1 = $row_datos_controlmat['H16'];
$V7_M8_L1 = $row_datos_controlmat['H17'];

$V1_M9_L1 = $row_datos_controlmat['I11'];
$V2_M9_L1 = $row_datos_controlmat['I12'];
$V3_M9_L1 = $row_datos_controlmat['I13'];
$V4_M9_L1 = $row_datos_controlmat['I14'];
$V5_M9_L1 = $row_datos_controlmat['I15'];
$V6_M9_L1 = $row_datos_controlmat['I16'];
$V7_M9_L1 = $row_datos_controlmat['I17'];

$V1_M10_L1 = $row_datos_controlmat['J11'];
$V2_M10_L1 = $row_datos_controlmat['J12'];
$V3_M10_L1 = $row_datos_controlmat['J13'];
$V4_M10_L1 = $row_datos_controlmat['J14'];
$V5_M10_L1 = $row_datos_controlmat['J15'];
$V6_M10_L1 = $row_datos_controlmat['J16'];
$V7_M10_L1 = $row_datos_controlmat['J17'];

$V1_M11_L1 = $row_datos_controlmat['K11'];
$V2_M11_L1 = $row_datos_controlmat['K12'];
$V3_M11_L1 = $row_datos_controlmat['K13'];
$V4_M11_L1 = $row_datos_controlmat['K14'];
$V5_M11_L1 = $row_datos_controlmat['K15'];
$V6_M11_L1 = $row_datos_controlmat['K16'];
$V7_M11_L1 = $row_datos_controlmat['K17'];

$V1_M12_L1 = $row_datos_controlmat['L11'];
$V2_M12_L1 = $row_datos_controlmat['L12'];
$V3_M12_L1 = $row_datos_controlmat['L13'];
$V4_M12_L1 = $row_datos_controlmat['L14'];
$V5_M12_L1 = $row_datos_controlmat['L15'];
$V6_M12_L1 = $row_datos_controlmat['L16'];
$V7_M12_L1 = $row_datos_controlmat['L17'];

$V1_M13_L1 = $row_datos_controlmat['M11'];
$V2_M13_L1 = $row_datos_controlmat['M12'];
$V3_M13_L1 = $row_datos_controlmat['M13'];
$V4_M13_L1 = $row_datos_controlmat['M14'];
$V5_M13_L1 = $row_datos_controlmat['M15'];
$V6_M13_L1 = $row_datos_controlmat['M16'];
$V7_M13_L1 = $row_datos_controlmat['M17'];

$V1_M14_L1 = $row_datos_controlmat['N11'];
$V2_M14_L1 = $row_datos_controlmat['N12'];
$V3_M14_L1 = $row_datos_controlmat['N13'];
$V4_M14_L1 = $row_datos_controlmat['N14'];
$V5_M14_L1 = $row_datos_controlmat['N15'];
$V6_M14_L1 = $row_datos_controlmat['N16'];
$V7_M14_L1 = $row_datos_controlmat['N17'];









$V1_M1_L2 = $row_datos_controlmat['A21'];
$V2_M1_L2 = $row_datos_controlmat['A22'];
$V3_M1_L2 = $row_datos_controlmat['A23'];
$V4_M1_L2 = $row_datos_controlmat['A24'];
$V5_M1_L2 = $row_datos_controlmat['A25'];
$V6_M1_L2 = $row_datos_controlmat['A26'];
$V7_M1_L2 = $row_datos_controlmat['A27'];

$V1_M2_L2 = $row_datos_controlmat['B21'];
$V2_M2_L2 = $row_datos_controlmat['B22'];
$V3_M2_L2 = $row_datos_controlmat['B23'];
$V4_M2_L2 = $row_datos_controlmat['B24'];
$V5_M2_L2 = $row_datos_controlmat['B25'];
$V6_M2_L2 = $row_datos_controlmat['B26'];
$V7_M2_L2 = $row_datos_controlmat['B27'];

$V1_M3_L2 = $row_datos_controlmat['C21'];
$V2_M3_L2 = $row_datos_controlmat['C22'];
$V3_M3_L2 = $row_datos_controlmat['C23'];
$V4_M3_L2 = $row_datos_controlmat['C24'];
$V5_M3_L2 = $row_datos_controlmat['C25'];
$V6_M3_L2 = $row_datos_controlmat['C26'];
$V7_M3_L2 = $row_datos_controlmat['C27'];

$V1_M4_L2 = $row_datos_controlmat['D21'];
$V2_M4_L2 = $row_datos_controlmat['D22'];
$V3_M4_L2 = $row_datos_controlmat['D23'];
$V4_M4_L2 = $row_datos_controlmat['D24'];
$V5_M4_L2 = $row_datos_controlmat['D25'];
$V6_M4_L2 = $row_datos_controlmat['D26'];
$V7_M4_L2 = $row_datos_controlmat['D27'];

$V1_M5_L2 = $row_datos_controlmat['E21'];
$V2_M5_L2 = $row_datos_controlmat['E22'];
$V3_M5_L2 = $row_datos_controlmat['E23'];
$V4_M5_L2 = $row_datos_controlmat['E24'];
$V5_M5_L2 = $row_datos_controlmat['E25'];
$V6_M5_L2 = $row_datos_controlmat['E26'];
$V7_M5_L2 = $row_datos_controlmat['E27'];

$V1_M6_L2 = $row_datos_controlmat['F21'];
$V2_M6_L2 = $row_datos_controlmat['F22'];
$V3_M6_L2 = $row_datos_controlmat['F23'];
$V4_M6_L2 = $row_datos_controlmat['F24'];
$V5_M6_L2 = $row_datos_controlmat['F25'];
$V6_M6_L2 = $row_datos_controlmat['F26'];
$V7_M6_L2 = $row_datos_controlmat['F27'];

$V1_M7_L2 = $row_datos_controlmat['G21'];
$V2_M7_L2 = $row_datos_controlmat['G22'];
$V3_M7_L2 = $row_datos_controlmat['G23'];
$V4_M7_L2 = $row_datos_controlmat['G24'];
$V5_M7_L2 = $row_datos_controlmat['G25'];
$V6_M7_L2 = $row_datos_controlmat['G26'];
$V7_M7_L2 = $row_datos_controlmat['G27'];

$V1_M8_L2 = $row_datos_controlmat['H21'];
$V2_M8_L2 = $row_datos_controlmat['H22'];
$V3_M8_L2 = $row_datos_controlmat['H23'];
$V4_M8_L2 = $row_datos_controlmat['H24'];
$V5_M8_L2 = $row_datos_controlmat['H25'];
$V6_M8_L2 = $row_datos_controlmat['H26'];
$V7_M8_L2 = $row_datos_controlmat['H27'];

$V1_M9_L2 = $row_datos_controlmat['I21'];
$V2_M9_L2 = $row_datos_controlmat['I22'];
$V3_M9_L2 = $row_datos_controlmat['I23'];
$V4_M9_L2 = $row_datos_controlmat['I24'];
$V5_M9_L2 = $row_datos_controlmat['I25'];
$V6_M9_L2 = $row_datos_controlmat['I26'];
$V7_M9_L2 = $row_datos_controlmat['I27'];

$V1_M10_L2 = $row_datos_controlmat['J21'];
$V2_M10_L2 = $row_datos_controlmat['J22'];
$V3_M10_L2 = $row_datos_controlmat['J23'];
$V4_M10_L2 = $row_datos_controlmat['J24'];
$V5_M10_L2 = $row_datos_controlmat['J25'];
$V6_M10_L2 = $row_datos_controlmat['J26'];
$V7_M10_L2 = $row_datos_controlmat['J27'];

$V1_M11_L2 = $row_datos_controlmat['K21'];
$V2_M11_L2 = $row_datos_controlmat['K22'];
$V3_M11_L2 = $row_datos_controlmat['K23'];
$V4_M11_L2 = $row_datos_controlmat['K24'];
$V5_M11_L2 = $row_datos_controlmat['K25'];
$V6_M11_L2 = $row_datos_controlmat['K26'];
$V7_M11_L2 = $row_datos_controlmat['K27'];

$V1_M12_L2 = $row_datos_controlmat['L21'];
$V2_M12_L2 = $row_datos_controlmat['L22'];
$V3_M12_L2 = $row_datos_controlmat['L23'];
$V4_M12_L2 = $row_datos_controlmat['L24'];
$V5_M12_L2 = $row_datos_controlmat['L25'];
$V6_M12_L2 = $row_datos_controlmat['L26'];
$V7_M12_L2 = $row_datos_controlmat['L27'];

$V1_M13_L2 = $row_datos_controlmat['M21'];
$V2_M13_L2 = $row_datos_controlmat['M22'];
$V3_M13_L2 = $row_datos_controlmat['M23'];
$V4_M13_L2 = $row_datos_controlmat['M24'];
$V5_M13_L2 = $row_datos_controlmat['M25'];
$V6_M13_L2 = $row_datos_controlmat['M26'];
$V7_M13_L2 = $row_datos_controlmat['M27'];

$V1_M14_L2 = $row_datos_controlmat['N21'];
$V2_M14_L2 = $row_datos_controlmat['N22'];
$V3_M14_L2 = $row_datos_controlmat['N23'];
$V4_M14_L2 = $row_datos_controlmat['N24'];
$V5_M14_L2 = $row_datos_controlmat['N25'];
$V6_M14_L2 = $row_datos_controlmat['N26'];
$V7_M14_L2 = $row_datos_controlmat['N27'];








$V1_M1_L3 = $row_datos_controlmat['A31'];
$V2_M1_L3 = $row_datos_controlmat['A32'];
$V3_M1_L3 = $row_datos_controlmat['A33'];
$V4_M1_L3 = $row_datos_controlmat['A34'];
$V5_M1_L3 = $row_datos_controlmat['A35'];
$V6_M1_L3 = $row_datos_controlmat['A36'];
$V7_M1_L3 = $row_datos_controlmat['A37'];

$V1_M2_L3 = $row_datos_controlmat['B31'];
$V2_M2_L3 = $row_datos_controlmat['B32'];
$V3_M2_L3 = $row_datos_controlmat['B33'];
$V4_M2_L3 = $row_datos_controlmat['B34'];
$V5_M2_L3 = $row_datos_controlmat['B35'];
$V6_M2_L3 = $row_datos_controlmat['B36'];
$V7_M2_L3 = $row_datos_controlmat['B37'];

$V1_M3_L3 = $row_datos_controlmat['C31'];
$V2_M3_L3 = $row_datos_controlmat['C32'];
$V3_M3_L3 = $row_datos_controlmat['C33'];
$V4_M3_L3 = $row_datos_controlmat['C34'];
$V5_M3_L3 = $row_datos_controlmat['C35'];
$V6_M3_L3 = $row_datos_controlmat['C36'];
$V7_M3_L3 = $row_datos_controlmat['C37'];

$V1_M4_L3 = $row_datos_controlmat['D31'];
$V2_M4_L3 = $row_datos_controlmat['D32'];
$V3_M4_L3 = $row_datos_controlmat['D33'];
$V4_M4_L3 = $row_datos_controlmat['D34'];
$V5_M4_L3 = $row_datos_controlmat['D35'];
$V6_M4_L3 = $row_datos_controlmat['D36'];
$V7_M4_L3 = $row_datos_controlmat['D37'];

$V1_M5_L3 = $row_datos_controlmat['E31'];
$V2_M5_L3 = $row_datos_controlmat['E32'];
$V3_M5_L3 = $row_datos_controlmat['E33'];
$V4_M5_L3 = $row_datos_controlmat['E34'];
$V5_M5_L3 = $row_datos_controlmat['E35'];
$V6_M5_L3 = $row_datos_controlmat['E36'];
$V7_M5_L3 = $row_datos_controlmat['E37'];

$V1_M6_L3 = $row_datos_controlmat['F31'];
$V2_M6_L3 = $row_datos_controlmat['F32'];
$V3_M6_L3 = $row_datos_controlmat['F33'];
$V4_M6_L3 = $row_datos_controlmat['F34'];
$V5_M6_L3 = $row_datos_controlmat['F35'];
$V6_M6_L3 = $row_datos_controlmat['F36'];
$V7_M6_L3 = $row_datos_controlmat['F37'];

$V1_M7_L3 = $row_datos_controlmat['G31'];
$V2_M7_L3 = $row_datos_controlmat['G32'];
$V3_M7_L3 = $row_datos_controlmat['G33'];
$V4_M7_L3 = $row_datos_controlmat['G34'];
$V5_M7_L3 = $row_datos_controlmat['G35'];
$V6_M7_L3 = $row_datos_controlmat['G36'];
$V7_M7_L3 = $row_datos_controlmat['G37'];

$V1_M8_L3 = $row_datos_controlmat['H31'];
$V2_M8_L3 = $row_datos_controlmat['H32'];
$V3_M8_L3 = $row_datos_controlmat['H33'];
$V4_M8_L3 = $row_datos_controlmat['H34'];
$V5_M8_L3 = $row_datos_controlmat['H35'];
$V6_M8_L3 = $row_datos_controlmat['H36'];
$V7_M8_L3 = $row_datos_controlmat['H37'];

$V1_M9_L3 = $row_datos_controlmat['I31'];
$V2_M9_L3 = $row_datos_controlmat['I32'];
$V3_M9_L3 = $row_datos_controlmat['I33'];
$V4_M9_L3 = $row_datos_controlmat['I34'];
$V5_M9_L3 = $row_datos_controlmat['I35'];
$V6_M9_L3 = $row_datos_controlmat['I36'];
$V7_M9_L3 = $row_datos_controlmat['I37'];

$V1_M10_L3 = $row_datos_controlmat['J31'];
$V2_M10_L3 = $row_datos_controlmat['J32'];
$V3_M10_L3 = $row_datos_controlmat['J33'];
$V4_M10_L3 = $row_datos_controlmat['J34'];
$V5_M10_L3 = $row_datos_controlmat['J35'];
$V6_M10_L3 = $row_datos_controlmat['J36'];
$V7_M10_L3 = $row_datos_controlmat['J37'];

$V1_M11_L3 = $row_datos_controlmat['K31'];
$V2_M11_L3 = $row_datos_controlmat['K32'];
$V3_M11_L3 = $row_datos_controlmat['K33'];
$V4_M11_L3 = $row_datos_controlmat['K34'];
$V5_M11_L3 = $row_datos_controlmat['K35'];
$V6_M11_L3 = $row_datos_controlmat['K36'];
$V7_M11_L3 = $row_datos_controlmat['K37'];

$V1_M12_L3 = $row_datos_controlmat['L31'];
$V2_M12_L3 = $row_datos_controlmat['L32'];
$V3_M12_L3 = $row_datos_controlmat['L33'];
$V4_M12_L3 = $row_datos_controlmat['L34'];
$V5_M12_L3 = $row_datos_controlmat['L35'];
$V6_M12_L3 = $row_datos_controlmat['L36'];
$V7_M12_L3 = $row_datos_controlmat['L37'];

$V1_M13_L3 = $row_datos_controlmat['M31'];
$V2_M13_L3 = $row_datos_controlmat['M32'];
$V3_M13_L3 = $row_datos_controlmat['M33'];
$V4_M13_L3 = $row_datos_controlmat['M34'];
$V5_M13_L3 = $row_datos_controlmat['M35'];
$V6_M13_L3 = $row_datos_controlmat['M36'];
$V7_M13_L3 = $row_datos_controlmat['M37'];

$V1_M14_L3 = $row_datos_controlmat['N31'];
$V2_M14_L3 = $row_datos_controlmat['N32'];
$V3_M14_L3 = $row_datos_controlmat['N33'];
$V4_M14_L3 = $row_datos_controlmat['N34'];
$V5_M14_L3 = $row_datos_controlmat['N35'];
$V6_M14_L3 = $row_datos_controlmat['N36'];
$V7_M14_L3 = $row_datos_controlmat['N37'];





$para_el_porc_V1_M1_L1 = ($V1_M1_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M1_L1 = ($V2_M1_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M1_L1 = ($V3_M1_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M1_L1 = ($V4_M1_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M1_L1 = ($V5_M1_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M1_L1 = ($V6_M1_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M1_L1 = ($V7_M1_L1 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M2_L1 = ($V1_M2_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M2_L1 = ($V2_M2_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M2_L1 = ($V3_M2_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M2_L1 = ($V4_M2_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M2_L1 = ($V5_M2_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M2_L1 = ($V6_M2_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M2_L1 = ($V7_M2_L1 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M3_L1 = ($V1_M3_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M3_L1 = ($V2_M3_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M3_L1 = ($V3_M3_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M3_L1 = ($V4_M3_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M3_L1 = ($V5_M3_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M3_L1 = ($V6_M3_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M3_L1 = ($V7_M3_L1 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M4_L1 = ($V1_M4_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M4_L1 = ($V2_M4_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M4_L1 = ($V3_M4_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M4_L1 = ($V4_M4_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M4_L1 = ($V5_M4_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M4_L1 = ($V6_M4_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M4_L1 = ($V7_M4_L1 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M5_L1 = ($V1_M5_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M5_L1 = ($V2_M5_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M5_L1 = ($V3_M5_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M5_L1 = ($V4_M5_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M5_L1 = ($V5_M5_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M5_L1 = ($V6_M5_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M5_L1 = ($V7_M5_L1 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M6_L1 = ($V1_M6_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M6_L1 = ($V2_M6_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M6_L1 = ($V3_M6_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M6_L1 = ($V4_M6_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M6_L1 = ($V5_M6_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M6_L1 = ($V6_M6_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M6_L1 = ($V7_M6_L1 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M7_L1 = ($V1_M7_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M7_L1 = ($V2_M7_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M7_L1 = ($V3_M7_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M7_L1 = ($V4_M7_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M7_L1 = ($V5_M7_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M7_L1 = ($V6_M7_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M7_L1 = ($V7_M7_L1 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M8_L1 = ($V1_M8_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M8_L1 = ($V2_M8_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M8_L1 = ($V3_M8_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M8_L1 = ($V4_M8_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M8_L1 = ($V5_M8_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M8_L1 = ($V6_M8_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M8_L1 = ($V7_M8_L1 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M9_L1 = ($V1_M9_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M9_L1 = ($V2_M9_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M9_L1 = ($V3_M9_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M9_L1 = ($V4_M9_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M9_L1 = ($V5_M9_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M9_L1 = ($V6_M9_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M9_L1 = ($V7_M9_L1 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M10_L1 = ($V1_M10_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M10_L1 = ($V2_M10_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M10_L1 = ($V3_M10_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M10_L1 = ($V4_M10_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M10_L1 = ($V5_M10_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M10_L1 = ($V6_M10_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M10_L1 = ($V7_M10_L1 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M11_L1 = ($V1_M11_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M11_L1 = ($V2_M11_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M11_L1 = ($V3_M11_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M11_L1 = ($V4_M11_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M11_L1 = ($V5_M11_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M11_L1 = ($V6_M11_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M11_L1 = ($V7_M11_L1 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M12_L1 = ($V1_M12_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M12_L1 = ($V2_M12_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M12_L1 = ($V3_M12_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M12_L1 = ($V4_M12_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M12_L1 = ($V5_M12_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M12_L1 = ($V6_M12_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M12_L1 = ($V7_M12_L1 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M13_L1 = ($V1_M13_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M13_L1 = ($V2_M13_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M13_L1 = ($V3_M13_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M13_L1 = ($V4_M13_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M13_L1 = ($V5_M13_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M13_L1 = ($V6_M13_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M13_L1 = ($V7_M13_L1 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M14_L1 = ($V1_M14_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M14_L1 = ($V2_M14_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M14_L1 = ($V3_M14_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M14_L1 = ($V4_M14_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M14_L1 = ($V5_M14_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M14_L1 = ($V6_M14_L1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M14_L1 = ($V7_M14_L1 * $el_puntaje_completo_es)/100;





$para_el_porc_V1_M1_L2 = ($V1_M1_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M1_L2 = ($V2_M1_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M1_L2 = ($V3_M1_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M1_L2 = ($V4_M1_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M1_L2 = ($V5_M1_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M1_L2 = ($V6_M1_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M1_L2 = ($V7_M1_L2 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M2_L2 = ($V1_M2_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M2_L2 = ($V2_M2_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M2_L2 = ($V3_M2_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M2_L2 = ($V4_M2_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M2_L2 = ($V5_M2_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M2_L2 = ($V6_M2_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M2_L2 = ($V7_M2_L2 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M3_L2 = ($V1_M3_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M3_L2 = ($V2_M3_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M3_L2 = ($V3_M3_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M3_L2 = ($V4_M3_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M3_L2 = ($V5_M3_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M3_L2 = ($V6_M3_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M3_L2 = ($V7_M3_L2 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M4_L2 = ($V1_M4_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M4_L2 = ($V2_M4_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M4_L2 = ($V3_M4_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M4_L2 = ($V4_M4_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M4_L2 = ($V5_M4_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M4_L2 = ($V6_M4_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M4_L2 = ($V7_M4_L2 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M5_L2 = ($V1_M5_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M5_L2 = ($V2_M5_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M5_L2 = ($V3_M5_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M5_L2 = ($V4_M5_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M5_L2 = ($V5_M5_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M5_L2 = ($V6_M5_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M5_L2 = ($V7_M5_L2 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M6_L2 = ($V1_M6_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M6_L2 = ($V2_M6_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M6_L2 = ($V3_M6_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M6_L2 = ($V4_M6_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M6_L2 = ($V5_M6_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M6_L2 = ($V6_M6_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M6_L2 = ($V7_M6_L2 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M7_L2 = ($V1_M7_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M7_L2 = ($V2_M7_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M7_L2 = ($V3_M7_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M7_L2 = ($V4_M7_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M7_L2 = ($V5_M7_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M7_L2 = ($V6_M7_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M7_L2 = ($V7_M7_L2 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M8_L2 = ($V1_M8_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M8_L2 = ($V2_M8_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M8_L2 = ($V3_M8_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M8_L2 = ($V4_M8_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M8_L2 = ($V5_M8_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M8_L2 = ($V6_M8_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M8_L2 = ($V7_M8_L2 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M9_L2 = ($V1_M9_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M9_L2 = ($V2_M9_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M9_L2 = ($V3_M9_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M9_L2 = ($V4_M9_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M9_L2 = ($V5_M9_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M9_L2 = ($V6_M9_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M9_L2 = ($V7_M9_L2 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M10_L2 = ($V1_M10_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M10_L2 = ($V2_M10_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M10_L2 = ($V3_M10_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M10_L2 = ($V4_M10_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M10_L2 = ($V5_M10_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M10_L2 = ($V6_M10_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M10_L2 = ($V7_M10_L2 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M11_L2 = ($V1_M11_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M11_L2 = ($V2_M11_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M11_L2 = ($V3_M11_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M11_L2 = ($V4_M11_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M11_L2 = ($V5_M11_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M11_L2 = ($V6_M11_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M11_L2 = ($V7_M11_L2 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M12_L2 = ($V1_M12_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M12_L2 = ($V2_M12_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M12_L2 = ($V3_M12_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M12_L2 = ($V4_M12_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M12_L2 = ($V5_M12_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M12_L2 = ($V6_M12_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M12_L2 = ($V7_M12_L2 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M13_L2 = ($V1_M13_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M13_L2 = ($V2_M13_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M13_L2 = ($V3_M13_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M13_L2 = ($V4_M13_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M13_L2 = ($V5_M13_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M13_L2 = ($V6_M13_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M13_L2 = ($V7_M13_L2 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M14_L2 = ($V1_M14_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M14_L2 = ($V2_M14_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M14_L2 = ($V3_M14_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M14_L2 = ($V4_M14_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M14_L2 = ($V5_M14_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M14_L2 = ($V6_M14_L2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M14_L2 = ($V7_M14_L2 * $el_puntaje_completo_es)/100;




$para_el_porc_V1_M1_L3 = ($V1_M1_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M1_L3 = ($V2_M1_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M1_L3 = ($V3_M1_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M1_L3 = ($V4_M1_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M1_L3 = ($V5_M1_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M1_L3 = ($V6_M1_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M1_L3 = ($V7_M1_L3 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M2_L3 = ($V1_M2_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M2_L3 = ($V2_M2_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M2_L3 = ($V3_M2_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M2_L3 = ($V4_M2_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M2_L3 = ($V5_M2_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M2_L3 = ($V6_M2_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M2_L3 = ($V7_M2_L3 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M3_L3 = ($V1_M3_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M3_L3 = ($V2_M3_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M3_L3 = ($V3_M3_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M3_L3 = ($V4_M3_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M3_L3 = ($V5_M3_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M3_L3 = ($V6_M3_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M3_L3 = ($V7_M3_L3 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M4_L3 = ($V1_M4_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M4_L3 = ($V2_M4_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M4_L3 = ($V3_M4_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M4_L3 = ($V4_M4_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M4_L3 = ($V5_M4_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M4_L3 = ($V6_M4_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M4_L3 = ($V7_M4_L3 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M5_L3 = ($V1_M5_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M5_L3 = ($V2_M5_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M5_L3 = ($V3_M5_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M5_L3 = ($V4_M5_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M5_L3 = ($V5_M5_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M5_L3 = ($V6_M5_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M5_L3 = ($V7_M5_L3 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M6_L3 = ($V1_M6_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M6_L3 = ($V2_M6_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M6_L3 = ($V3_M6_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M6_L3 = ($V4_M6_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M6_L3 = ($V5_M6_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M6_L3 = ($V6_M6_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M6_L3 = ($V7_M6_L3 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M7_L3 = ($V1_M7_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M7_L3 = ($V2_M7_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M7_L3 = ($V3_M7_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M7_L3 = ($V4_M7_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M7_L3 = ($V5_M7_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M7_L3 = ($V6_M7_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M7_L3 = ($V7_M7_L3 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M8_L3 = ($V1_M8_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M8_L3 = ($V2_M8_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M8_L3 = ($V3_M8_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M8_L3 = ($V4_M8_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M8_L3 = ($V5_M8_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M8_L3 = ($V6_M8_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M8_L3 = ($V7_M8_L3 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M9_L3 = ($V1_M9_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M9_L3 = ($V2_M9_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M9_L3 = ($V3_M9_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M9_L3 = ($V4_M9_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M9_L3 = ($V5_M9_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M9_L3 = ($V6_M9_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M9_L3 = ($V7_M9_L3 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M10_L3 = ($V1_M10_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M10_L3 = ($V2_M10_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M10_L3 = ($V3_M10_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M10_L3 = ($V4_M10_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M10_L3 = ($V5_M10_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M10_L3 = ($V6_M10_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M10_L3 = ($V7_M10_L3 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M11_L3 = ($V1_M11_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M11_L3 = ($V2_M11_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M11_L3 = ($V3_M11_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M11_L3 = ($V4_M11_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M11_L3 = ($V5_M11_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M11_L3 = ($V6_M11_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M11_L3 = ($V7_M11_L3 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M12_L3 = ($V1_M12_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M12_L3 = ($V2_M12_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M12_L3 = ($V3_M12_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M12_L3 = ($V4_M12_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M12_L3 = ($V5_M12_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M12_L3 = ($V6_M12_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M12_L3 = ($V7_M12_L3 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M13_L3 = ($V1_M13_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M13_L3 = ($V2_M13_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M13_L3 = ($V3_M13_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M13_L3 = ($V4_M13_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M13_L3 = ($V5_M13_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M13_L3 = ($V6_M13_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M13_L3 = ($V7_M13_L3 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M14_L3 = ($V1_M14_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M14_L3 = ($V2_M14_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M14_L3 = ($V3_M14_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M14_L3 = ($V4_M14_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M14_L3 = ($V5_M14_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M14_L3 = ($V6_M14_L3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M14_L3 = ($V7_M14_L3 * $el_puntaje_completo_es)/100;





include("../../conectar.php");

$lap1_ciclito = $_POST["id_cicloxxx"];
$lap1_gradito = $_POST["id_gradoxxx"];


$lap1_queryasignaturas = "SELECT * FROM asignatura_ciclo_grado
         WHERE id_del_ciclo = $lap1_ciclito
         and   id_del_grado = $lap1_gradito 
                 
         GROUP BY id_asign_ciclo_grado Limit 1" ;

$lap1_datos_controlasign = mysqli_query($enlace, $lap1_queryasignaturas) or die(mysqli_error());
$lap1_row_datos_controlasign = mysqli_fetch_array($lap1_datos_controlasign); 

$lap1_la_asign_es = $lap1_row_datos_controlasign['id_asignatura'];

$lap1_num_materia = $_POST["id_num_matxxx"];



$lap1_querymateria = "SELECT * FROM asignaturas
         WHERE id_asign = $lap1_la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$lap1_datos_controlmat = mysqli_query($enlace, $lap1_querymateria) or die(mysqli_error());
$lap1_row_datos_controlmat = mysqli_fetch_array($lap1_datos_controlmat); 

mysqli_close($enlace); 

$lap1_back_emergency = '#EBECEC';


// lapso 1

$lap1_V1_M1 = $lap1_row_datos_controlmat['A11'];
$lap1_V2_M1 = $lap1_row_datos_controlmat['A12'];
$lap1_V3_M1 = $lap1_row_datos_controlmat['A13'];
$lap1_V4_M1 = $lap1_row_datos_controlmat['A14'];
$lap1_V5_M1 = $lap1_row_datos_controlmat['A15'];
$lap1_V6_M1 = $lap1_row_datos_controlmat['A16'];
$lap1_V7_M1 = $lap1_row_datos_controlmat['A17'];

$lap1_V1_M2 = $lap1_row_datos_controlmat['B11'];
$lap1_V2_M2 = $lap1_row_datos_controlmat['B12'];
$lap1_V3_M2 = $lap1_row_datos_controlmat['B13'];
$lap1_V4_M2 = $lap1_row_datos_controlmat['B14'];
$lap1_V5_M2 = $lap1_row_datos_controlmat['B15'];
$lap1_V6_M2 = $lap1_row_datos_controlmat['B16'];
$lap1_V7_M2 = $lap1_row_datos_controlmat['B17'];

$lap1_V1_M3 = $lap1_row_datos_controlmat['C11'];
$lap1_V2_M3 = $lap1_row_datos_controlmat['C12'];
$lap1_V3_M3 = $lap1_row_datos_controlmat['C13'];
$lap1_V4_M3 = $lap1_row_datos_controlmat['C14'];
$lap1_V5_M3 = $lap1_row_datos_controlmat['C15'];
$lap1_V6_M3 = $lap1_row_datos_controlmat['C16'];
$lap1_V7_M3 = $lap1_row_datos_controlmat['C17'];

$lap1_V1_M4 = $lap1_row_datos_controlmat['D11'];
$lap1_V2_M4 = $lap1_row_datos_controlmat['D12'];
$lap1_V3_M4 = $lap1_row_datos_controlmat['D13'];
$lap1_V4_M4 = $lap1_row_datos_controlmat['D14'];
$lap1_V5_M4 = $lap1_row_datos_controlmat['D15'];
$lap1_V6_M4 = $lap1_row_datos_controlmat['D16'];
$lap1_V7_M4 = $lap1_row_datos_controlmat['D17'];

$lap1_V1_M5 = $lap1_row_datos_controlmat['E11'];
$lap1_V2_M5 = $lap1_row_datos_controlmat['E12'];
$lap1_V3_M5 = $lap1_row_datos_controlmat['E13'];
$lap1_V4_M5 = $lap1_row_datos_controlmat['E14'];
$lap1_V5_M5 = $lap1_row_datos_controlmat['E15'];
$lap1_V6_M5 = $lap1_row_datos_controlmat['E16'];
$lap1_V7_M5 = $lap1_row_datos_controlmat['E17'];

$lap1_V1_M6 = $lap1_row_datos_controlmat['F11'];
$lap1_V2_M6 = $lap1_row_datos_controlmat['F12'];
$lap1_V3_M6 = $lap1_row_datos_controlmat['F13'];
$lap1_V4_M6 = $lap1_row_datos_controlmat['F14'];
$lap1_V5_M6 = $lap1_row_datos_controlmat['F15'];
$lap1_V6_M6 = $lap1_row_datos_controlmat['F16'];
$lap1_V7_M6 = $lap1_row_datos_controlmat['F17'];

$lap1_V1_M7 = $lap1_row_datos_controlmat['G11'];
$lap1_V2_M7 = $lap1_row_datos_controlmat['G12'];
$lap1_V3_M7 = $lap1_row_datos_controlmat['G13'];
$lap1_V4_M7 = $lap1_row_datos_controlmat['G14'];
$lap1_V5_M7 = $lap1_row_datos_controlmat['G15'];
$lap1_V6_M7 = $lap1_row_datos_controlmat['G16'];
$lap1_V7_M7 = $lap1_row_datos_controlmat['G17'];

$lap1_V1_M8 = $lap1_row_datos_controlmat['H11'];
$lap1_V2_M8 = $lap1_row_datos_controlmat['H12'];
$lap1_V3_M8 = $lap1_row_datos_controlmat['H13'];
$lap1_V4_M8 = $lap1_row_datos_controlmat['H14'];
$lap1_V5_M8 = $lap1_row_datos_controlmat['H15'];
$lap1_V6_M8 = $lap1_row_datos_controlmat['H16'];
$lap1_V7_M8 = $lap1_row_datos_controlmat['H17'];

$lap1_V1_M9 = $lap1_row_datos_controlmat['I11'];
$lap1_V2_M9 = $lap1_row_datos_controlmat['I12'];
$lap1_V3_M9 = $lap1_row_datos_controlmat['I13'];
$lap1_V4_M9 = $lap1_row_datos_controlmat['I14'];
$lap1_V5_M9 = $lap1_row_datos_controlmat['I15'];
$lap1_V6_M9 = $lap1_row_datos_controlmat['I16'];
$lap1_V7_M9 = $lap1_row_datos_controlmat['I17'];

$lap1_V1_M10 = $lap1_row_datos_controlmat['J11'];
$lap1_V2_M10 = $lap1_row_datos_controlmat['J12'];
$lap1_V3_M10 = $lap1_row_datos_controlmat['J13'];
$lap1_V4_M10 = $lap1_row_datos_controlmat['J14'];
$lap1_V5_M10 = $lap1_row_datos_controlmat['J15'];
$lap1_V6_M10 = $lap1_row_datos_controlmat['J16'];
$lap1_V7_M10 = $lap1_row_datos_controlmat['J17'];

$lap1_V1_M11 = $lap1_row_datos_controlmat['K11'];
$lap1_V2_M11 = $lap1_row_datos_controlmat['K12'];
$lap1_V3_M11 = $lap1_row_datos_controlmat['K13'];
$lap1_V4_M11 = $lap1_row_datos_controlmat['K14'];
$lap1_V5_M11 = $lap1_row_datos_controlmat['K15'];
$lap1_V6_M11 = $lap1_row_datos_controlmat['K16'];
$lap1_V7_M11 = $lap1_row_datos_controlmat['K17'];

$lap1_V1_M12 = $lap1_row_datos_controlmat['L11'];
$lap1_V2_M12 = $lap1_row_datos_controlmat['L12'];
$lap1_V3_M12 = $lap1_row_datos_controlmat['L13'];
$lap1_V4_M12 = $lap1_row_datos_controlmat['L14'];
$lap1_V5_M12 = $lap1_row_datos_controlmat['L15'];
$lap1_V6_M12 = $lap1_row_datos_controlmat['L16'];
$lap1_V7_M12 = $lap1_row_datos_controlmat['L17'];

$lap1_V1_M13 = $lap1_row_datos_controlmat['M11'];
$lap1_V2_M13 = $lap1_row_datos_controlmat['M12'];
$lap1_V3_M13 = $lap1_row_datos_controlmat['M13'];
$lap1_V4_M13 = $lap1_row_datos_controlmat['M14'];
$lap1_V5_M13 = $lap1_row_datos_controlmat['M15'];
$lap1_V6_M13 = $lap1_row_datos_controlmat['M16'];
$lap1_V7_M13 = $lap1_row_datos_controlmat['M17'];

$lap1_V1_M14 = $lap1_row_datos_controlmat['N11'];
$lap1_V2_M14 = $lap1_row_datos_controlmat['N12'];
$lap1_V3_M14 = $lap1_row_datos_controlmat['N13'];
$lap1_V4_M14 = $lap1_row_datos_controlmat['N14'];
$lap1_V5_M14 = $lap1_row_datos_controlmat['N15'];
$lap1_V6_M14 = $lap1_row_datos_controlmat['N16'];
$lap1_V7_M14 = $lap1_row_datos_controlmat['N17'];

// fin lapso 1







$lap1_para_el_porc_V1_M1 = ($lap1_V1_M1 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V2_M1 = ($lap1_V2_M1 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V3_M1 = ($lap1_V3_M1 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V4_M1 = ($lap1_V4_M1 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V5_M1 = ($lap1_V5_M1 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V6_M1 = ($lap1_V6_M1 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V7_M1 = ($lap1_V7_M1 * $el_puntaje_completo_es)/100;


$lap1_para_el_porc_V1_M2 = ($lap1_V1_M2 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V2_M2 = ($lap1_V2_M2 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V3_M2 = ($lap1_V3_M2 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V4_M2 = ($lap1_V4_M2 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V5_M2 = ($lap1_V5_M2 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V6_M2 = ($lap1_V6_M2 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V7_M2 = ($lap1_V7_M2 * $el_puntaje_completo_es)/100;


$lap1_para_el_porc_V1_M3 = ($lap1_V1_M3 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V2_M3 = ($lap1_V2_M3 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V3_M3 = ($lap1_V3_M3 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V4_M3 = ($lap1_V4_M3 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V5_M3 = ($lap1_V5_M3 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V6_M3 = ($lap1_V6_M3 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V7_M3 = ($lap1_V7_M3 * $el_puntaje_completo_es)/100;


$lap1_para_el_porc_V1_M4 = ($lap1_V1_M4 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V2_M4 = ($lap1_V2_M4 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V3_M4 = ($lap1_V3_M4 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V4_M4 = ($lap1_V4_M4 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V5_M4 = ($lap1_V5_M4 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V6_M4 = ($lap1_V6_M4 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V7_M4 = ($lap1_V7_M4 * $el_puntaje_completo_es)/100;

$lap1_para_el_porc_V1_M5 = ($lap1_V1_M5 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V2_M5 = ($lap1_V2_M5 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V3_M5 = ($lap1_V3_M5 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V4_M5 = ($lap1_V4_M5 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V5_M5 = ($lap1_V5_M5 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V6_M5 = ($lap1_V6_M5 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V7_M5 = ($lap1_V7_M5 * $el_puntaje_completo_es)/100;


$lap1_para_el_porc_V1_M6 = ($lap1_V1_M6 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V2_M6 = ($lap1_V2_M6 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V3_M6 = ($lap1_V3_M6 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V4_M6 = ($lap1_V4_M6 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V5_M6 = ($lap1_V5_M6 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V6_M6 = ($lap1_V6_M6 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V7_M6 = ($lap1_V7_M6 * $el_puntaje_completo_es)/100;


$lap1_para_el_porc_V1_M7 = ($lap1_V1_M7 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V2_M7 = ($lap1_V2_M7 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V3_M7 = ($lap1_V3_M7 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V4_M7 = ($lap1_V4_M7 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V5_M7 = ($lap1_V5_M7 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V6_M7 = ($lap1_V6_M7 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V7_M7 = ($lap1_V7_M7 * $el_puntaje_completo_es)/100;


$lap1_para_el_porc_V1_M8 = ($lap1_V1_M8 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V2_M8 = ($lap1_V2_M8 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V3_M8 = ($lap1_V3_M8 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V4_M8 = ($lap1_V4_M8 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V5_M8 = ($lap1_V5_M8 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V6_M8 = ($lap1_V6_M8 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V7_M8 = ($lap1_V7_M8 * $el_puntaje_completo_es)/100;


$lap1_para_el_porc_V1_M9 = ($lap1_V1_M9 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V2_M9 = ($lap1_V2_M9 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V3_M9 = ($lap1_V3_M9 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V4_M9 = ($lap1_V4_M9 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V5_M9 = ($lap1_V5_M9 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V6_M9 = ($lap1_V6_M9 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V7_M9 = ($lap1_V7_M9 * $el_puntaje_completo_es)/100;


$lap1_para_el_porc_V1_M10 = ($lap1_V1_M10 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V2_M10 = ($lap1_V2_M10 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V3_M10 = ($lap1_V3_M10 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V4_M10 = ($lap1_V4_M10 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V5_M10 = ($lap1_V5_M10 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V6_M10 = ($lap1_V6_M10 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V7_M10 = ($lap1_V7_M10 * $el_puntaje_completo_es)/100;

$lap1_para_el_porc_V1_M11 = ($lap1_V1_M11 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V2_M11 = ($lap1_V2_M11 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V3_M11 = ($lap1_V3_M11 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V4_M11 = ($lap1_V4_M11 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V5_M11 = ($lap1_V5_M11 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V6_M11 = ($lap1_V6_M11 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V7_M11 = ($lap1_V7_M11 * $el_puntaje_completo_es)/100;


$lap1_para_el_porc_V1_M12 = ($lap1_V1_M12 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V2_M12 = ($lap1_V2_M12 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V3_M12 = ($lap1_V3_M12 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V4_M12 = ($lap1_V4_M12 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V5_M12 = ($lap1_V5_M12 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V6_M12 = ($lap1_V6_M12 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V7_M12 = ($lap1_V7_M12 * $el_puntaje_completo_es)/100;


$lap1_para_el_porc_V1_M13 = ($lap1_V1_M13 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V2_M13 = ($lap1_V2_M13 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V3_M13 = ($lap1_V3_M13 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V4_M13 = ($lap1_V4_M13 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V5_M13 = ($lap1_V5_M13 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V6_M13 = ($lap1_V6_M13 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V7_M13 = ($lap1_V7_M13 * $el_puntaje_completo_es)/100;


$lap1_para_el_porc_V1_M14 = ($lap1_V1_M14 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V2_M14 = ($lap1_V2_M14 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V3_M14 = ($lap1_V3_M14 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V4_M14 = ($lap1_V4_M14 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V5_M14 = ($lap1_V5_M14 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V6_M14 = ($lap1_V6_M14 * $el_puntaje_completo_es)/100;
$lap1_para_el_porc_V7_M14 = ($lap1_V7_M14 * $el_puntaje_completo_es)/100;





// para el 2do lapso




include("../../conectar.php");

$lap2_ciclito = $_POST["id_cicloxxx"];
$lap2_gradito = $_POST["id_gradoxxx"];


$lap2_queryasignaturas = "SELECT * FROM asignatura_ciclo_grado
         WHERE id_del_ciclo = $lap2_ciclito
         and   id_del_grado = $lap2_gradito 
                 
         GROUP BY id_asign_ciclo_grado Limit 1" ;

$lap2_datos_controlasign = mysqli_query($enlace, $lap2_queryasignaturas) or die(mysqli_error());
$lap2_row_datos_controlasign = mysqli_fetch_array($lap2_datos_controlasign); 

$lap2_la_asign_es = $lap2_row_datos_controlasign['id_asignatura'];

$lap2_num_materia = $_POST["id_num_matxxx"];



$lap2_querymateria = "SELECT * FROM asignaturas
         WHERE id_asign = $lap2_la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$lap2_datos_controlmat = mysqli_query($enlace, $lap2_querymateria) or die(mysqli_error());
$lap2_row_datos_controlmat = mysqli_fetch_array($lap2_datos_controlmat); 

mysqli_close($enlace); 

$lap2_back_emergency = '#EBECEC';



$lap2_V1_M1 = $lap2_row_datos_controlmat['A21'];
$lap2_V2_M1 = $lap2_row_datos_controlmat['A22'];
$lap2_V3_M1 = $lap2_row_datos_controlmat['A23'];
$lap2_V4_M1 = $lap2_row_datos_controlmat['A24'];
$lap2_V5_M1 = $lap2_row_datos_controlmat['A25'];
$lap2_V6_M1 = $lap2_row_datos_controlmat['A26'];
$lap2_V7_M1 = $lap2_row_datos_controlmat['A27'];

$lap2_V1_M2 = $lap2_row_datos_controlmat['B21'];
$lap2_V2_M2 = $lap2_row_datos_controlmat['B22'];
$lap2_V3_M2 = $lap2_row_datos_controlmat['B23'];
$lap2_V4_M2 = $lap2_row_datos_controlmat['B24'];
$lap2_V5_M2 = $lap2_row_datos_controlmat['B25'];
$lap2_V6_M2 = $lap2_row_datos_controlmat['B26'];
$lap2_V7_M2 = $lap2_row_datos_controlmat['B27'];

$lap2_V1_M3 = $lap2_row_datos_controlmat['C21'];
$lap2_V2_M3 = $lap2_row_datos_controlmat['C22'];
$lap2_V3_M3 = $lap2_row_datos_controlmat['C23'];
$lap2_V4_M3 = $lap2_row_datos_controlmat['C24'];
$lap2_V5_M3 = $lap2_row_datos_controlmat['C25'];
$lap2_V6_M3 = $lap2_row_datos_controlmat['C26'];
$lap2_V7_M3 = $lap2_row_datos_controlmat['C27'];

$lap2_V1_M4 = $lap2_row_datos_controlmat['D21'];
$lap2_V2_M4 = $lap2_row_datos_controlmat['D22'];
$lap2_V3_M4 = $lap2_row_datos_controlmat['D23'];
$lap2_V4_M4 = $lap2_row_datos_controlmat['D24'];
$lap2_V5_M4 = $lap2_row_datos_controlmat['D25'];
$lap2_V6_M4 = $lap2_row_datos_controlmat['D26'];
$lap2_V7_M4 = $lap2_row_datos_controlmat['D27'];

$lap2_V1_M5 = $lap2_row_datos_controlmat['E21'];
$lap2_V2_M5 = $lap2_row_datos_controlmat['E22'];
$lap2_V3_M5 = $lap2_row_datos_controlmat['E23'];
$lap2_V4_M5 = $lap2_row_datos_controlmat['E24'];
$lap2_V5_M5 = $lap2_row_datos_controlmat['E25'];
$lap2_V6_M5 = $lap2_row_datos_controlmat['E26'];
$lap2_V7_M5 = $lap2_row_datos_controlmat['E27'];

$lap2_V1_M6 = $lap2_row_datos_controlmat['F21'];
$lap2_V2_M6 = $lap2_row_datos_controlmat['F22'];
$lap2_V3_M6 = $lap2_row_datos_controlmat['F23'];
$lap2_V4_M6 = $lap2_row_datos_controlmat['F24'];
$lap2_V5_M6 = $lap2_row_datos_controlmat['F25'];
$lap2_V6_M6 = $lap2_row_datos_controlmat['F26'];
$lap2_V7_M6 = $lap2_row_datos_controlmat['F27'];

$lap2_V1_M7 = $lap2_row_datos_controlmat['G21'];
$lap2_V2_M7 = $lap2_row_datos_controlmat['G22'];
$lap2_V3_M7 = $lap2_row_datos_controlmat['G23'];
$lap2_V4_M7 = $lap2_row_datos_controlmat['G24'];
$lap2_V5_M7 = $lap2_row_datos_controlmat['G25'];
$lap2_V6_M7 = $lap2_row_datos_controlmat['G26'];
$lap2_V7_M7 = $lap2_row_datos_controlmat['G27'];

$lap2_V1_M8 = $lap2_row_datos_controlmat['H21'];
$lap2_V2_M8 = $lap2_row_datos_controlmat['H22'];
$lap2_V3_M8 = $lap2_row_datos_controlmat['H23'];
$lap2_V4_M8 = $lap2_row_datos_controlmat['H24'];
$lap2_V5_M8 = $lap2_row_datos_controlmat['H25'];
$lap2_V6_M8 = $lap2_row_datos_controlmat['H26'];
$lap2_V7_M8 = $lap2_row_datos_controlmat['H27'];

$lap2_V1_M9 = $lap2_row_datos_controlmat['I21'];
$lap2_V2_M9 = $lap2_row_datos_controlmat['I22'];
$lap2_V3_M9 = $lap2_row_datos_controlmat['I23'];
$lap2_V4_M9 = $lap2_row_datos_controlmat['I24'];
$lap2_V5_M9 = $lap2_row_datos_controlmat['I25'];
$lap2_V6_M9 = $lap2_row_datos_controlmat['I26'];
$lap2_V7_M9 = $lap2_row_datos_controlmat['I27'];

$lap2_V1_M10 = $lap2_row_datos_controlmat['J21'];
$lap2_V2_M10 = $lap2_row_datos_controlmat['J22'];
$lap2_V3_M10 = $lap2_row_datos_controlmat['J23'];
$lap2_V4_M10 = $lap2_row_datos_controlmat['J24'];
$lap2_V5_M10 = $lap2_row_datos_controlmat['J25'];
$lap2_V6_M10 = $lap2_row_datos_controlmat['J26'];
$lap2_V7_M10 = $lap2_row_datos_controlmat['J27'];

$lap2_V1_M11 = $lap2_row_datos_controlmat['K21'];
$lap2_V2_M11 = $lap2_row_datos_controlmat['K22'];
$lap2_V3_M11 = $lap2_row_datos_controlmat['K23'];
$lap2_V4_M11 = $lap2_row_datos_controlmat['K24'];
$lap2_V5_M11 = $lap2_row_datos_controlmat['K25'];
$lap2_V6_M11 = $lap2_row_datos_controlmat['K26'];
$lap2_V7_M11 = $lap2_row_datos_controlmat['K27'];

$lap2_V1_M12 = $lap2_row_datos_controlmat['L21'];
$lap2_V2_M12 = $lap2_row_datos_controlmat['L22'];
$lap2_V3_M12 = $lap2_row_datos_controlmat['L23'];
$lap2_V4_M12 = $lap2_row_datos_controlmat['L24'];
$lap2_V5_M12 = $lap2_row_datos_controlmat['L25'];
$lap2_V6_M12 = $lap2_row_datos_controlmat['L26'];
$lap2_V7_M12 = $lap2_row_datos_controlmat['L27'];

$lap2_V1_M13 = $lap2_row_datos_controlmat['M21'];
$lap2_V2_M13 = $lap2_row_datos_controlmat['M22'];
$lap2_V3_M13 = $lap2_row_datos_controlmat['M23'];
$lap2_V4_M13 = $lap2_row_datos_controlmat['M24'];
$lap2_V5_M13 = $lap2_row_datos_controlmat['M25'];
$lap2_V6_M13 = $lap2_row_datos_controlmat['M26'];
$lap2_V7_M13 = $lap2_row_datos_controlmat['M27'];

$lap2_V1_M14 = $lap2_row_datos_controlmat['N21'];
$lap2_V2_M14 = $lap2_row_datos_controlmat['N22'];
$lap2_V3_M14 = $lap2_row_datos_controlmat['N23'];
$lap2_V4_M14 = $lap2_row_datos_controlmat['N24'];
$lap2_V5_M14 = $lap2_row_datos_controlmat['N25'];
$lap2_V6_M14 = $lap2_row_datos_controlmat['N26'];
$lap2_V7_M14 = $lap2_row_datos_controlmat['N27'];





$lap2_para_el_porc_V1_M1 = ($lap2_V1_M1 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V2_M1 = ($lap2_V2_M1 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V3_M1 = ($lap2_V3_M1 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V4_M1 = ($lap2_V4_M1 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V5_M1 = ($lap2_V5_M1 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V6_M1 = ($lap2_V6_M1 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V7_M1 = ($lap2_V7_M1 * $el_puntaje_completo_es)/100;


$lap2_para_el_porc_V1_M2 = ($lap2_V1_M2 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V2_M2 = ($lap2_V2_M2 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V3_M2 = ($lap2_V3_M2 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V4_M2 = ($lap2_V4_M2 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V5_M2 = ($lap2_V5_M2 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V6_M2 = ($lap2_V6_M2 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V7_M2 = ($lap2_V7_M2 * $el_puntaje_completo_es)/100;


$lap2_para_el_porc_V1_M3 = ($lap2_V1_M3 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V2_M3 = ($lap2_V2_M3 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V3_M3 = ($lap2_V3_M3 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V4_M3 = ($lap2_V4_M3 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V5_M3 = ($lap2_V5_M3 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V6_M3 = ($lap2_V6_M3 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V7_M3 = ($lap2_V7_M3 * $el_puntaje_completo_es)/100;


$lap2_para_el_porc_V1_M4 = ($lap2_V1_M4 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V2_M4 = ($lap2_V2_M4 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V3_M4 = ($lap2_V3_M4 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V4_M4 = ($lap2_V4_M4 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V5_M4 = ($lap2_V5_M4 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V6_M4 = ($lap2_V6_M4 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V7_M4 = ($lap2_V7_M4 * $el_puntaje_completo_es)/100;

$lap2_para_el_porc_V1_M5 = ($lap2_V1_M5 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V2_M5 = ($lap2_V2_M5 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V3_M5 = ($lap2_V3_M5 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V4_M5 = ($lap2_V4_M5 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V5_M5 = ($lap2_V5_M5 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V6_M5 = ($lap2_V6_M5 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V7_M5 = ($lap2_V7_M5 * $el_puntaje_completo_es)/100;


$lap2_para_el_porc_V1_M6 = ($lap2_V1_M6 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V2_M6 = ($lap2_V2_M6 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V3_M6 = ($lap2_V3_M6 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V4_M6 = ($lap2_V4_M6 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V5_M6 = ($lap2_V5_M6 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V6_M6 = ($lap2_V6_M6 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V7_M6 = ($lap2_V7_M6 * $el_puntaje_completo_es)/100;


$lap2_para_el_porc_V1_M7 = ($lap2_V1_M7 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V2_M7 = ($lap2_V2_M7 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V3_M7 = ($lap2_V3_M7 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V4_M7 = ($lap2_V4_M7 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V5_M7 = ($lap2_V5_M7 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V6_M7 = ($lap2_V6_M7 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V7_M7 = ($lap2_V7_M7 * $el_puntaje_completo_es)/100;


$lap2_para_el_porc_V1_M8 = ($lap2_V1_M8 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V2_M8 = ($lap2_V2_M8 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V3_M8 = ($lap2_V3_M8 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V4_M8 = ($lap2_V4_M8 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V5_M8 = ($lap2_V5_M8 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V6_M8 = ($lap2_V6_M8 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V7_M8 = ($lap2_V7_M8 * $el_puntaje_completo_es)/100;


$lap2_para_el_porc_V1_M9 = ($lap2_V1_M9 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V2_M9 = ($lap2_V2_M9 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V3_M9 = ($lap2_V3_M9 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V4_M9 = ($lap2_V4_M9 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V5_M9 = ($lap2_V5_M9 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V6_M9 = ($lap2_V6_M9 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V7_M9 = ($lap2_V7_M9 * $el_puntaje_completo_es)/100;


$lap2_para_el_porc_V1_M10 = ($lap2_V1_M10 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V2_M10 = ($lap2_V2_M10 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V3_M10 = ($lap2_V3_M10 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V4_M10 = ($lap2_V4_M10 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V5_M10 = ($lap2_V5_M10 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V6_M10 = ($lap2_V6_M10 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V7_M10 = ($lap2_V7_M10 * $el_puntaje_completo_es)/100;

$lap2_para_el_porc_V1_M11 = ($lap2_V1_M11 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V2_M11 = ($lap2_V2_M11 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V3_M11 = ($lap2_V3_M11 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V4_M11 = ($lap2_V4_M11 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V5_M11 = ($lap2_V5_M11 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V6_M11 = ($lap2_V6_M11 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V7_M11 = ($lap2_V7_M11 * $el_puntaje_completo_es)/100;


$lap2_para_el_porc_V1_M12 = ($lap2_V1_M12 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V2_M12 = ($lap2_V2_M12 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V3_M12 = ($lap2_V3_M12 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V4_M12 = ($lap2_V4_M12 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V5_M12 = ($lap2_V5_M12 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V6_M12 = ($lap2_V6_M12 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V7_M12 = ($lap2_V7_M12 * $el_puntaje_completo_es)/100;


$lap2_para_el_porc_V1_M13 = ($lap2_V1_M13 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V2_M13 = ($lap2_V2_M13 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V3_M13 = ($lap2_V3_M13 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V4_M13 = ($lap2_V4_M13 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V5_M13 = ($lap2_V5_M13 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V6_M13 = ($lap2_V6_M13 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V7_M13 = ($lap2_V7_M13 * $el_puntaje_completo_es)/100;


$lap2_para_el_porc_V1_M14 = ($lap2_V1_M14 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V2_M14 = ($lap2_V2_M14 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V3_M14 = ($lap2_V3_M14 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V4_M14 = ($lap2_V4_M14 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V5_M14 = ($lap2_V5_M14 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V6_M14 = ($lap2_V6_M14 * $el_puntaje_completo_es)/100;
$lap2_para_el_porc_V7_M14 = ($lap2_V7_M14 * $el_puntaje_completo_es)/100;



// para el 3er lapso


include("../../conectar.php");

$lap3_ciclito = $_POST["id_cicloxxx"];
$lap3_gradito = $_POST["id_gradoxxx"];


$lap3_queryasignaturas = "SELECT * FROM asignatura_ciclo_grado
         WHERE id_del_ciclo = $lap3_ciclito
         and   id_del_grado = $lap3_gradito 
                 
         GROUP BY id_asign_ciclo_grado Limit 1" ;

$lap3_datos_controlasign = mysqli_query($enlace, $lap3_queryasignaturas) or die(mysqli_error());
$lap3_row_datos_controlasign = mysqli_fetch_array($lap3_datos_controlasign); 

$lap3_la_asign_es = $lap3_row_datos_controlasign['id_asignatura'];

$lap3_num_materia = $_POST["id_num_matxxx"];
$lap3_lapso= $_POST["id_lapsoxxx"];


$lap3_querymateria = "SELECT * FROM asignaturas
         WHERE id_asign = $lap3_la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$lap3_datos_controlmat = mysqli_query($enlace, $lap3_querymateria) or die(mysqli_error());
$lap3_row_datos_controlmat = mysqli_fetch_array($lap3_datos_controlmat); 

mysqli_close($enlace); 

$lap3_back_emergency = '#EBECEC';



$lap3_V1_M1 = $lap3_row_datos_controlmat['A31'];
$lap3_V2_M1 = $lap3_row_datos_controlmat['A32'];
$lap3_V3_M1 = $lap3_row_datos_controlmat['A33'];
$lap3_V4_M1 = $lap3_row_datos_controlmat['A34'];
$lap3_V5_M1 = $lap3_row_datos_controlmat['A35'];
$lap3_V6_M1 = $lap3_row_datos_controlmat['A36'];
$lap3_V7_M1 = $lap3_row_datos_controlmat['A37'];

$lap3_V1_M2 = $lap3_row_datos_controlmat['B31'];
$lap3_V2_M2 = $lap3_row_datos_controlmat['B32'];
$lap3_V3_M2 = $lap3_row_datos_controlmat['B33'];
$lap3_V4_M2 = $lap3_row_datos_controlmat['B34'];
$lap3_V5_M2 = $lap3_row_datos_controlmat['B35'];
$lap3_V6_M2 = $lap3_row_datos_controlmat['B36'];
$lap3_V7_M2 = $lap3_row_datos_controlmat['B37'];

$lap3_V1_M3 = $lap3_row_datos_controlmat['C31'];
$lap3_V2_M3 = $lap3_row_datos_controlmat['C32'];
$lap3_V3_M3 = $lap3_row_datos_controlmat['C33'];
$lap3_V4_M3 = $lap3_row_datos_controlmat['C34'];
$lap3_V5_M3 = $lap3_row_datos_controlmat['C35'];
$lap3_V6_M3 = $lap3_row_datos_controlmat['C36'];
$lap3_V7_M3 = $lap3_row_datos_controlmat['C37'];

$lap3_V1_M4 = $lap3_row_datos_controlmat['D31'];
$lap3_V2_M4 = $lap3_row_datos_controlmat['D32'];
$lap3_V3_M4 = $lap3_row_datos_controlmat['D33'];
$lap3_V4_M4 = $lap3_row_datos_controlmat['D34'];
$lap3_V5_M4 = $lap3_row_datos_controlmat['D35'];
$lap3_V6_M4 = $lap3_row_datos_controlmat['D36'];
$lap3_V7_M4 = $lap3_row_datos_controlmat['D37'];

$lap3_V1_M5 = $lap3_row_datos_controlmat['E31'];
$lap3_V2_M5 = $lap3_row_datos_controlmat['E32'];
$lap3_V3_M5 = $lap3_row_datos_controlmat['E33'];
$lap3_V4_M5 = $lap3_row_datos_controlmat['E34'];
$lap3_V5_M5 = $lap3_row_datos_controlmat['E35'];
$lap3_V6_M5 = $lap3_row_datos_controlmat['E36'];
$lap3_V7_M5 = $lap3_row_datos_controlmat['E37'];

$lap3_V1_M6 = $lap3_row_datos_controlmat['F31'];
$lap3_V2_M6 = $lap3_row_datos_controlmat['F32'];
$lap3_V3_M6 = $lap3_row_datos_controlmat['F33'];
$lap3_V4_M6 = $lap3_row_datos_controlmat['F34'];
$lap3_V5_M6 = $lap3_row_datos_controlmat['F35'];
$lap3_V6_M6 = $lap3_row_datos_controlmat['F36'];
$lap3_V7_M6 = $lap3_row_datos_controlmat['F37'];

$lap3_V1_M7 = $lap3_row_datos_controlmat['G31'];
$lap3_V2_M7 = $lap3_row_datos_controlmat['G32'];
$lap3_V3_M7 = $lap3_row_datos_controlmat['G33'];
$lap3_V4_M7 = $lap3_row_datos_controlmat['G34'];
$lap3_V5_M7 = $lap3_row_datos_controlmat['G35'];
$lap3_V6_M7 = $lap3_row_datos_controlmat['G36'];
$lap3_V7_M7 = $lap3_row_datos_controlmat['G37'];

$lap3_V1_M8 = $lap3_row_datos_controlmat['H31'];
$lap3_V2_M8 = $lap3_row_datos_controlmat['H32'];
$lap3_V3_M8 = $lap3_row_datos_controlmat['H33'];
$lap3_V4_M8 = $lap3_row_datos_controlmat['H34'];
$lap3_V5_M8 = $lap3_row_datos_controlmat['H35'];
$lap3_V6_M8 = $lap3_row_datos_controlmat['H36'];
$lap3_V7_M8 = $lap3_row_datos_controlmat['H37'];

$lap3_V1_M9 = $lap3_row_datos_controlmat['I31'];
$lap3_V2_M9 = $lap3_row_datos_controlmat['I32'];
$lap3_V3_M9 = $lap3_row_datos_controlmat['I33'];
$lap3_V4_M9 = $lap3_row_datos_controlmat['I34'];
$lap3_V5_M9 = $lap3_row_datos_controlmat['I35'];
$lap3_V6_M9 = $lap3_row_datos_controlmat['I36'];
$lap3_V7_M9 = $lap3_row_datos_controlmat['I37'];

$lap3_V1_M10 = $lap3_row_datos_controlmat['J31'];
$lap3_V2_M10 = $lap3_row_datos_controlmat['J32'];
$lap3_V3_M10 = $lap3_row_datos_controlmat['J33'];
$lap3_V4_M10 = $lap3_row_datos_controlmat['J34'];
$lap3_V5_M10 = $lap3_row_datos_controlmat['J35'];
$lap3_V6_M10 = $lap3_row_datos_controlmat['J36'];
$lap3_V7_M10 = $lap3_row_datos_controlmat['J37'];

$lap3_V1_M11 = $lap3_row_datos_controlmat['K31'];
$lap3_V2_M11 = $lap3_row_datos_controlmat['K32'];
$lap3_V3_M11 = $lap3_row_datos_controlmat['K33'];
$lap3_V4_M11 = $lap3_row_datos_controlmat['K34'];
$lap3_V5_M11 = $lap3_row_datos_controlmat['K35'];
$lap3_V6_M11 = $lap3_row_datos_controlmat['K36'];
$lap3_V7_M11 = $lap3_row_datos_controlmat['K37'];

$lap3_V1_M12 = $lap3_row_datos_controlmat['L31'];
$lap3_V2_M12 = $lap3_row_datos_controlmat['L32'];
$lap3_V3_M12 = $lap3_row_datos_controlmat['L33'];
$lap3_V4_M12 = $lap3_row_datos_controlmat['L34'];
$lap3_V5_M12 = $lap3_row_datos_controlmat['L35'];
$lap3_V6_M12 = $lap3_row_datos_controlmat['L36'];
$lap3_V7_M12 = $lap3_row_datos_controlmat['L37'];

$lap3_V1_M13 = $lap3_row_datos_controlmat['M31'];
$lap3_V2_M13 = $lap3_row_datos_controlmat['M32'];
$lap3_V3_M13 = $lap3_row_datos_controlmat['M33'];
$lap3_V4_M13 = $lap3_row_datos_controlmat['M34'];
$lap3_V5_M13 = $lap3_row_datos_controlmat['M35'];
$lap3_V6_M13 = $lap3_row_datos_controlmat['M36'];
$lap3_V7_M13 = $lap3_row_datos_controlmat['M37'];

$lap3_V1_M14 = $lap3_row_datos_controlmat['N31'];
$lap3_V2_M14 = $lap3_row_datos_controlmat['N32'];
$lap3_V3_M14 = $lap3_row_datos_controlmat['N33'];
$lap3_V4_M14 = $lap3_row_datos_controlmat['N34'];
$lap3_V5_M14 = $lap3_row_datos_controlmat['N35'];
$lap3_V6_M14 = $lap3_row_datos_controlmat['N36'];
$lap3_V7_M14 = $lap3_row_datos_controlmat['N37'];




$lap3_para_el_porc_V1_M1 = ($lap3_V1_M1 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V2_M1 = ($lap3_V2_M1 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V3_M1 = ($lap3_V3_M1 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V4_M1 = ($lap3_V4_M1 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V5_M1 = ($lap3_V5_M1 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V6_M1 = ($lap3_V6_M1 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V7_M1 = ($lap3_V7_M1 * $el_puntaje_completo_es)/100;


$lap3_para_el_porc_V1_M2 = ($lap3_V1_M2 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V2_M2 = ($lap3_V2_M2 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V3_M2 = ($lap3_V3_M2 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V4_M2 = ($lap3_V4_M2 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V5_M2 = ($lap3_V5_M2 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V6_M2 = ($lap3_V6_M2 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V7_M2 = ($lap3_V7_M2 * $el_puntaje_completo_es)/100;


$lap3_para_el_porc_V1_M3 = ($lap3_V1_M3 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V2_M3 = ($lap3_V2_M3 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V3_M3 = ($lap3_V3_M3 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V4_M3 = ($lap3_V4_M3 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V5_M3 = ($lap3_V5_M3 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V6_M3 = ($lap3_V6_M3 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V7_M3 = ($lap3_V7_M3 * $el_puntaje_completo_es)/100;


$lap3_para_el_porc_V1_M4 = ($lap3_V1_M4 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V2_M4 = ($lap3_V2_M4 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V3_M4 = ($lap3_V3_M4 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V4_M4 = ($lap3_V4_M4 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V5_M4 = ($lap3_V5_M4 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V6_M4 = ($lap3_V6_M4 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V7_M4 = ($lap3_V7_M4 * $el_puntaje_completo_es)/100;

$lap3_para_el_porc_V1_M5 = ($lap3_V1_M5 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V2_M5 = ($lap3_V2_M5 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V3_M5 = ($lap3_V3_M5 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V4_M5 = ($lap3_V4_M5 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V5_M5 = ($lap3_V5_M5 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V6_M5 = ($lap3_V6_M5 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V7_M5 = ($lap3_V7_M5 * $el_puntaje_completo_es)/100;


$lap3_para_el_porc_V1_M6 = ($lap3_V1_M6 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V2_M6 = ($lap3_V2_M6 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V3_M6 = ($lap3_V3_M6 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V4_M6 = ($lap3_V4_M6 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V5_M6 = ($lap3_V5_M6 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V6_M6 = ($lap3_V6_M6 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V7_M6 = ($lap3_V7_M6 * $el_puntaje_completo_es)/100;


$lap3_para_el_porc_V1_M7 = ($lap3_V1_M7 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V2_M7 = ($lap3_V2_M7 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V3_M7 = ($lap3_V3_M7 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V4_M7 = ($lap3_V4_M7 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V5_M7 = ($lap3_V5_M7 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V6_M7 = ($lap3_V6_M7 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V7_M7 = ($lap3_V7_M7 * $el_puntaje_completo_es)/100;


$lap3_para_el_porc_V1_M8 = ($lap3_V1_M8 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V2_M8 = ($lap3_V2_M8 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V3_M8 = ($lap3_V3_M8 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V4_M8 = ($lap3_V4_M8 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V5_M8 = ($lap3_V5_M8 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V6_M8 = ($lap3_V6_M8 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V7_M8 = ($lap3_V7_M8 * $el_puntaje_completo_es)/100;


$lap3_para_el_porc_V1_M9 = ($lap3_V1_M9 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V2_M9 = ($lap3_V2_M9 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V3_M9 = ($lap3_V3_M9 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V4_M9 = ($lap3_V4_M9 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V5_M9 = ($lap3_V5_M9 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V6_M9 = ($lap3_V6_M9 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V7_M9 = ($lap3_V7_M9 * $el_puntaje_completo_es)/100;


$lap3_para_el_porc_V1_M10 = ($lap3_V1_M10 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V2_M10 = ($lap3_V2_M10 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V3_M10 = ($lap3_V3_M10 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V4_M10 = ($lap3_V4_M10 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V5_M10 = ($lap3_V5_M10 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V6_M10 = ($lap3_V6_M10 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V7_M10 = ($lap3_V7_M10 * $el_puntaje_completo_es)/100;

$lap3_para_el_porc_V1_M11 = ($lap3_V1_M11 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V2_M11 = ($lap3_V2_M11 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V3_M11 = ($lap3_V3_M11 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V4_M11 = ($lap3_V4_M11 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V5_M11 = ($lap3_V5_M11 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V6_M11 = ($lap3_V6_M11 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V7_M11 = ($lap3_V7_M11 * $el_puntaje_completo_es)/100;


$lap3_para_el_porc_V1_M12 = ($lap3_V1_M12 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V2_M12 = ($lap3_V2_M12 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V3_M12 = ($lap3_V3_M12 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V4_M12 = ($lap3_V4_M12 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V5_M12 = ($lap3_V5_M12 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V6_M12 = ($lap3_V6_M12 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V7_M12 = ($lap3_V7_M12 * $el_puntaje_completo_es)/100;


$lap3_para_el_porc_V1_M13 = ($lap3_V1_M13 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V2_M13 = ($lap3_V2_M13 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V3_M13 = ($lap3_V3_M13 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V4_M13 = ($lap3_V4_M13 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V5_M13 = ($lap3_V5_M13 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V6_M13 = ($lap3_V6_M13 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V7_M13 = ($lap3_V7_M13 * $el_puntaje_completo_es)/100;


$lap3_para_el_porc_V1_M14 = ($lap3_V1_M14 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V2_M14 = ($lap3_V2_M14 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V3_M14 = ($lap3_V3_M14 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V4_M14 = ($lap3_V4_M14 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V5_M14 = ($lap3_V5_M14 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V6_M14 = ($lap3_V6_M14 * $el_puntaje_completo_es)/100;
$lap3_para_el_porc_V7_M14 = ($lap3_V7_M14 * $el_puntaje_completo_es)/100;




?>









<?php

$lap1_id_seccionxxx = $_POST['id_seccionxxx'];
$lap1_id_cicloxxx = $_POST['id_cicloxxx'];
$lap1_id_gradoxxx = $_POST['id_gradoxxx'];

include("../../conectar.php");


$lap1_query = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$lap1_id_seccionxxx'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$lap1_id_cicloxxx'
         and  grados.id_grado = '$lap1_id_gradoxxx'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$lap1_datos_control = mysqli_query($enlace, $lap1_query) or die(mysqli_error());

$lap1_totalRows_datos_control = mysqli_num_rows($lap1_datos_control); 

$lap1_media =  ceil($lap1_totalRows_datos_control/2);

$lap1_centro = $lap1_media + 1;

    

mysqli_close($enlace);




while( $lap1_row_datos_control = mysqli_fetch_assoc($lap1_datos_control)){ 


?>









   <?php


$lap1_el_reg_del_est_es = $lap1_row_datos_control['id_reg_estu_actual'];

$lap1_el_dicho_id_e = $lap1_row_datos_control['id_estud'];


include("../../conectar.php");



$lap1_query_notas1 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap1_el_reg_del_est_es'
               and id_estud = '$lap1_el_dicho_id_e'
               and materia = 1
                       
               GROUP BY id_asign_notas limit 1" ;

$lap1_datos_control_notas1 = mysqli_query($enlace, $lap1_query_notas1) or die(mysqli_error());
$lap1_row_datos_control_notasM1 = mysqli_fetch_array($lap1_datos_control_notas1); 


$lap1_query_notas2 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap1_el_reg_del_est_es'
               and id_estud = '$lap1_el_dicho_id_e'
               and materia = 2
                       
               GROUP BY id_asign_notas limit 1" ;

$lap1_datos_control_notas2 = mysqli_query($enlace, $lap1_query_notas2) or die(mysqli_error());
$lap1_row_datos_control_notasM2 = mysqli_fetch_array($lap1_datos_control_notas2); 


$lap1_query_notas3 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap1_el_reg_del_est_es'
               and id_estud = '$lap1_el_dicho_id_e'
               and materia = 3
                       
               GROUP BY id_asign_notas limit 1" ;

$lap1_datos_control_notas3 = mysqli_query($enlace, $lap1_query_notas3) or die(mysqli_error());
$lap1_row_datos_control_notasM3 = mysqli_fetch_array($lap1_datos_control_notas3); 


$lap1_query_notas4 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap1_el_reg_del_est_es'
               and id_estud = '$lap1_el_dicho_id_e'
               and materia = 4
                       
               GROUP BY id_asign_notas limit 1" ;

$lap1_datos_control_notas4 = mysqli_query($enlace, $lap1_query_notas4) or die(mysqli_error());
$lap1_row_datos_control_notasM4 = mysqli_fetch_array($lap1_datos_control_notas4); 


$lap1_query_notas5 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap1_el_reg_del_est_es'
               and id_estud = '$lap1_el_dicho_id_e'
               and materia = 5
                       
               GROUP BY id_asign_notas limit 1" ;

$lap1_datos_control_notas5 = mysqli_query($enlace, $lap1_query_notas5) or die(mysqli_error());
$lap1_row_datos_control_notasM5 = mysqli_fetch_array($lap1_datos_control_notas5); 


$lap1_query_notas6 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap1_el_reg_del_est_es'
               and id_estud = '$lap1_el_dicho_id_e'
               and materia = 6
                       
               GROUP BY id_asign_notas limit 1" ;

$lap1_datos_control_notas6 = mysqli_query($enlace, $lap1_query_notas6) or die(mysqli_error());
$lap1_row_datos_control_notasM6 = mysqli_fetch_array($lap1_datos_control_notas6); 


$lap1_query_notas7 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap1_el_reg_del_est_es'
               and id_estud = '$lap1_el_dicho_id_e'
               and materia = 7
                       
               GROUP BY id_asign_notas limit 1" ;

$lap1_datos_control_notas7 = mysqli_query($enlace, $lap1_query_notas7) or die(mysqli_error());
$lap1_row_datos_control_notasM7 = mysqli_fetch_array($lap1_datos_control_notas7); 


$lap1_query_notas8 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap1_el_reg_del_est_es'
               and id_estud = '$lap1_el_dicho_id_e'
               and materia = 8
                       
               GROUP BY id_asign_notas limit 1" ;

$lap1_datos_control_notas8 = mysqli_query($enlace, $lap1_query_notas8) or die(mysqli_error());
$lap1_row_datos_control_notasM8 = mysqli_fetch_array($lap1_datos_control_notas8); 


$lap1_query_notas9 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap1_el_reg_del_est_es'
               and id_estud = '$lap1_el_dicho_id_e'
               and materia = 9
                       
               GROUP BY id_asign_notas limit 1" ;

$lap1_datos_control_notas9 = mysqli_query($enlace, $lap1_query_notas9) or die(mysqli_error());
$lap1_row_datos_control_notasM9 = mysqli_fetch_array($lap1_datos_control_notas9); 


$lap1_query_notas10 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap1_el_reg_del_est_es'
               and id_estud = '$lap1_el_dicho_id_e'
               and materia = 10
                       
               GROUP BY id_asign_notas limit 1" ;

$lap1_datos_control_notas10 = mysqli_query($enlace, $lap1_query_notas10) or die(mysqli_error());
$lap1_row_datos_control_notasM10 = mysqli_fetch_array($lap1_datos_control_notas10); 


$lap1_query_notas11 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap1_el_reg_del_est_es'
               and id_estud = '$lap1_el_dicho_id_e'
               and materia = 11
                       
               GROUP BY id_asign_notas limit 1" ;

$lap1_datos_control_notas11 = mysqli_query($enlace, $lap1_query_notas11) or die(mysqli_error());
$lap1_row_datos_control_notasM11 = mysqli_fetch_array($lap1_datos_control_notas11); 


$lap1_query_notas12 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap1_el_reg_del_est_es'
               and id_estud = '$lap1_el_dicho_id_e'
               and materia = 12
                       
               GROUP BY id_asign_notas limit 1" ;

$lap1_datos_control_notas12 = mysqli_query($enlace, $lap1_query_notas12) or die(mysqli_error());
$lap1_row_datos_control_notasM12 = mysqli_fetch_array($lap1_datos_control_notas12); 


$lap1_query_notas13 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap1_el_reg_del_est_es'
               and id_estud = '$lap1_el_dicho_id_e'
               and materia = 13
                       
               GROUP BY id_asign_notas limit 1" ;

$lap1_datos_control_notas13 = mysqli_query($enlace, $lap1_query_notas13) or die(mysqli_error());
$lap1_row_datos_control_notasM13 = mysqli_fetch_array($lap1_datos_control_notas13); 


$lap1_query_notas14 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap1_el_reg_del_est_es'
               and id_estud = '$lap1_el_dicho_id_e'
               and materia = 14
                       
               GROUP BY id_asign_notas limit 1" ;

$lap1_datos_control_notas14 = mysqli_query($enlace, $lap1_query_notas14) or die(mysqli_error());
$lap1_row_datos_control_notasM14 = mysqli_fetch_array($lap1_datos_control_notas14); 

 mysqli_close($enlace);

  
?>


<?php

// lapso 1
   

$lap1_nota_1_M1 = $lap1_row_datos_control_notasM1["nt_11"];
$lap1_nota_2_M1 = $lap1_row_datos_control_notasM1["nt_12"];
$lap1_nota_3_M1 = $lap1_row_datos_control_notasM1["nt_13"];
$lap1_nota_4_M1 = $lap1_row_datos_control_notasM1["nt_14"];
$lap1_nota_5_M1 = $lap1_row_datos_control_notasM1["nt_15"];
$lap1_nota_6_M1 = $lap1_row_datos_control_notasM1["nt_16"];
$lap1_nota_7_M1 = $lap1_row_datos_control_notasM1["nt_17"];
$lap1_notaAu_M1 = $lap1_row_datos_control_notasM1["nt_Au1"];


$lap1_nota_real_1_M1 = ($lap1_row_datos_control_notasM1["nt_11"] * $lap1_para_el_porc_V1_M1)/$el_puntaje_completo_es;
$lap1_nota_real_2_M1 = ($lap1_row_datos_control_notasM1["nt_12"] * $lap1_para_el_porc_V2_M1)/$el_puntaje_completo_es;
$lap1_nota_real_3_M1 = ($lap1_row_datos_control_notasM1["nt_13"] * $lap1_para_el_porc_V3_M1)/$el_puntaje_completo_es;
$lap1_nota_real_4_M1 = ($lap1_row_datos_control_notasM1["nt_14"] * $lap1_para_el_porc_V4_M1)/$el_puntaje_completo_es;
$lap1_nota_real_5_M1 = ($lap1_row_datos_control_notasM1["nt_15"] * $lap1_para_el_porc_V5_M1)/$el_puntaje_completo_es;
$lap1_nota_real_6_M1 = ($lap1_row_datos_control_notasM1["nt_16"] * $lap1_para_el_porc_V6_M1)/$el_puntaje_completo_es;
$lap1_nota_real_7_M1 = ($lap1_row_datos_control_notasM1["nt_17"] * $lap1_para_el_porc_V7_M1)/$el_puntaje_completo_es;

$lap1_total_seven_M1 = $lap1_nota_real_1_M1+$lap1_nota_real_2_M1+$lap1_nota_real_3_M1+$lap1_nota_real_4_M1+$lap1_nota_real_5_M1+$lap1_nota_real_6_M1+$lap1_nota_real_7_M1;

$lap1_total_seven_con_Au_M1 = $lap1_total_seven_M1+ $lap1_row_datos_control_notasM1["nt_Au1"];

$lap1_total_seven_con_Au_redon_M1_redondeado1 =number_format($lap1_total_seven_con_Au_M1, 1, '.', '');

$lap1_total_seven_con_Au_redon_M1 =number_format($lap1_total_seven_con_Au_redon_M1_redondeado1);



$lap1_nota_1_M2 = $lap1_row_datos_control_notasM2["nt_11"];
$lap1_nota_2_M2 = $lap1_row_datos_control_notasM2["nt_12"];
$lap1_nota_3_M2 = $lap1_row_datos_control_notasM2["nt_13"];
$lap1_nota_4_M2 = $lap1_row_datos_control_notasM2["nt_14"];
$lap1_nota_5_M2 = $lap1_row_datos_control_notasM2["nt_15"];
$lap1_nota_6_M2 = $lap1_row_datos_control_notasM2["nt_16"];
$lap1_nota_7_M2 = $lap1_row_datos_control_notasM2["nt_17"];
$lap1_notaAu_M2 = $lap1_row_datos_control_notasM2["nt_Au1"];


$lap1_nota_real_1_M2 = ($lap1_row_datos_control_notasM2["nt_11"] * $lap1_para_el_porc_V1_M2)/$el_puntaje_completo_es;
$lap1_nota_real_2_M2 = ($lap1_row_datos_control_notasM2["nt_12"] * $lap1_para_el_porc_V2_M2)/$el_puntaje_completo_es;
$lap1_nota_real_3_M2 = ($lap1_row_datos_control_notasM2["nt_13"] * $lap1_para_el_porc_V3_M2)/$el_puntaje_completo_es;
$lap1_nota_real_4_M2 = ($lap1_row_datos_control_notasM2["nt_14"] * $lap1_para_el_porc_V4_M2)/$el_puntaje_completo_es;
$lap1_nota_real_5_M2 = ($lap1_row_datos_control_notasM2["nt_15"] * $lap1_para_el_porc_V5_M2)/$el_puntaje_completo_es;
$lap1_nota_real_6_M2 = ($lap1_row_datos_control_notasM2["nt_16"] * $lap1_para_el_porc_V6_M2)/$el_puntaje_completo_es;
$lap1_nota_real_7_M2 = ($lap1_row_datos_control_notasM2["nt_17"] * $lap1_para_el_porc_V7_M2)/$el_puntaje_completo_es;

$lap1_total_seven_M2 = $lap1_nota_real_1_M2+$lap1_nota_real_2_M2+$lap1_nota_real_3_M2+$lap1_nota_real_4_M2+$lap1_nota_real_5_M2+$lap1_nota_real_6_M2+$lap1_nota_real_7_M2;

$lap1_total_seven_con_Au_M2 = $lap1_total_seven_M2+ $lap1_row_datos_control_notasM2["nt_Au1"];

$lap1_total_seven_con_Au_redon_M2_redondeado1 =number_format($lap1_total_seven_con_Au_M2, 1, '.', '');

$lap1_total_seven_con_Au_redon_M2 =number_format($lap1_total_seven_con_Au_redon_M2_redondeado1);



$lap1_nota_1_M3 = $lap1_row_datos_control_notasM3["nt_11"];
$lap1_nota_2_M3 = $lap1_row_datos_control_notasM3["nt_12"];
$lap1_nota_3_M3 = $lap1_row_datos_control_notasM3["nt_13"];
$lap1_nota_4_M3 = $lap1_row_datos_control_notasM3["nt_14"];
$lap1_nota_5_M3 = $lap1_row_datos_control_notasM3["nt_15"];
$lap1_nota_6_M3 = $lap1_row_datos_control_notasM3["nt_16"];
$lap1_nota_7_M3 = $lap1_row_datos_control_notasM3["nt_17"];
$lap1_notaAu_M3 = $lap1_row_datos_control_notasM3["nt_Au1"];


$lap1_nota_real_1_M3 = ($lap1_row_datos_control_notasM3["nt_11"] * $lap1_para_el_porc_V1_M3)/$el_puntaje_completo_es;
$lap1_nota_real_2_M3 = ($lap1_row_datos_control_notasM3["nt_12"] * $lap1_para_el_porc_V2_M3)/$el_puntaje_completo_es;
$lap1_nota_real_3_M3 = ($lap1_row_datos_control_notasM3["nt_13"] * $lap1_para_el_porc_V3_M3)/$el_puntaje_completo_es;
$lap1_nota_real_4_M3 = ($lap1_row_datos_control_notasM3["nt_14"] * $lap1_para_el_porc_V4_M3)/$el_puntaje_completo_es;
$lap1_nota_real_5_M3 = ($lap1_row_datos_control_notasM3["nt_15"] * $lap1_para_el_porc_V5_M3)/$el_puntaje_completo_es;
$lap1_nota_real_6_M3 = ($lap1_row_datos_control_notasM3["nt_16"] * $lap1_para_el_porc_V6_M3)/$el_puntaje_completo_es;
$lap1_nota_real_7_M3 = ($lap1_row_datos_control_notasM3["nt_17"] * $lap1_para_el_porc_V7_M3)/$el_puntaje_completo_es;

$lap1_total_seven_M3 = $lap1_nota_real_1_M3+$lap1_nota_real_2_M3+$lap1_nota_real_3_M3+$lap1_nota_real_4_M3+$lap1_nota_real_5_M3+$lap1_nota_real_6_M3+$lap1_nota_real_7_M3;

$lap1_total_seven_con_Au_M3 = $lap1_total_seven_M3+ $lap1_row_datos_control_notasM3["nt_Au1"];

$lap1_total_seven_con_Au_redon_M3_redondeado1 =number_format($lap1_total_seven_con_Au_M3, 1, '.', '');

$lap1_total_seven_con_Au_redon_M3 =number_format($lap1_total_seven_con_Au_redon_M3_redondeado1);


$lap1_nota_1_M4 = $lap1_row_datos_control_notasM4["nt_11"];
$lap1_nota_2_M4 = $lap1_row_datos_control_notasM4["nt_12"];
$lap1_nota_3_M4 = $lap1_row_datos_control_notasM4["nt_13"];
$lap1_nota_4_M4 = $lap1_row_datos_control_notasM4["nt_14"];
$lap1_nota_5_M4 = $lap1_row_datos_control_notasM4["nt_15"];
$lap1_nota_6_M4 = $lap1_row_datos_control_notasM4["nt_16"];
$lap1_nota_7_M4 = $lap1_row_datos_control_notasM4["nt_17"];
$lap1_notaAu_M4 = $lap1_row_datos_control_notasM4["nt_Au1"];


$lap1_nota_real_1_M4 = ($lap1_row_datos_control_notasM4["nt_11"] * $lap1_para_el_porc_V1_M4)/$el_puntaje_completo_es;
$lap1_nota_real_2_M4 = ($lap1_row_datos_control_notasM4["nt_12"] * $lap1_para_el_porc_V2_M4)/$el_puntaje_completo_es;
$lap1_nota_real_3_M4 = ($lap1_row_datos_control_notasM4["nt_13"] * $lap1_para_el_porc_V3_M4)/$el_puntaje_completo_es;
$lap1_nota_real_4_M4 = ($lap1_row_datos_control_notasM4["nt_14"] * $lap1_para_el_porc_V4_M4)/$el_puntaje_completo_es;
$lap1_nota_real_5_M4 = ($lap1_row_datos_control_notasM4["nt_15"] * $lap1_para_el_porc_V5_M4)/$el_puntaje_completo_es;
$lap1_nota_real_6_M4 = ($lap1_row_datos_control_notasM4["nt_16"] * $lap1_para_el_porc_V6_M4)/$el_puntaje_completo_es;
$lap1_nota_real_7_M4 = ($lap1_row_datos_control_notasM4["nt_17"] * $lap1_para_el_porc_V7_M4)/$el_puntaje_completo_es;

$lap1_total_seven_M4 = $lap1_nota_real_1_M4+$lap1_nota_real_2_M4+$lap1_nota_real_3_M4+$lap1_nota_real_4_M4+$lap1_nota_real_5_M4+$lap1_nota_real_6_M4+$lap1_nota_real_7_M4;

$lap1_total_seven_con_Au_M4 = $lap1_total_seven_M4+ $lap1_row_datos_control_notasM4["nt_Au1"];

$lap1_total_seven_con_Au_redon_M4_redondeado1 =number_format($lap1_total_seven_con_Au_M4, 1, '.', '');

$lap1_total_seven_con_Au_redon_M4 =number_format($lap1_total_seven_con_Au_redon_M4_redondeado1);



$lap1_nota_1_M5 = $lap1_row_datos_control_notasM5["nt_11"];
$lap1_nota_2_M5 = $lap1_row_datos_control_notasM5["nt_12"];
$lap1_nota_3_M5 = $lap1_row_datos_control_notasM5["nt_13"];
$lap1_nota_4_M5 = $lap1_row_datos_control_notasM5["nt_14"];
$lap1_nota_5_M5 = $lap1_row_datos_control_notasM5["nt_15"];
$lap1_nota_6_M5 = $lap1_row_datos_control_notasM5["nt_16"];
$lap1_nota_7_M5 = $lap1_row_datos_control_notasM5["nt_17"];
$lap1_notaAu_M5 = $lap1_row_datos_control_notasM5["nt_Au1"];


$lap1_nota_real_1_M5 = ($lap1_row_datos_control_notasM5["nt_11"] * $lap1_para_el_porc_V1_M5)/$el_puntaje_completo_es;
$lap1_nota_real_2_M5 = ($lap1_row_datos_control_notasM5["nt_12"] * $lap1_para_el_porc_V2_M5)/$el_puntaje_completo_es;
$lap1_nota_real_3_M5 = ($lap1_row_datos_control_notasM5["nt_13"] * $lap1_para_el_porc_V3_M5)/$el_puntaje_completo_es;
$lap1_nota_real_4_M5 = ($lap1_row_datos_control_notasM5["nt_14"] * $lap1_para_el_porc_V4_M5)/$el_puntaje_completo_es;
$lap1_nota_real_5_M5 = ($lap1_row_datos_control_notasM5["nt_15"] * $lap1_para_el_porc_V5_M5)/$el_puntaje_completo_es;
$lap1_nota_real_6_M5 = ($lap1_row_datos_control_notasM5["nt_16"] * $lap1_para_el_porc_V6_M5)/$el_puntaje_completo_es;
$lap1_nota_real_7_M5 = ($lap1_row_datos_control_notasM5["nt_17"] * $lap1_para_el_porc_V7_M5)/$el_puntaje_completo_es;

$lap1_total_seven_M5 = $lap1_nota_real_1_M5+$lap1_nota_real_2_M5+$lap1_nota_real_3_M5+$lap1_nota_real_4_M5+$lap1_nota_real_5_M5+$lap1_nota_real_6_M5+$lap1_nota_real_7_M5;

$lap1_total_seven_con_Au_M5 = $lap1_total_seven_M5+ $lap1_row_datos_control_notasM5["nt_Au1"];

$lap1_total_seven_con_Au_redon_M5_redondeado1 =number_format($lap1_total_seven_con_Au_M5, 1, '.', '');

$lap1_total_seven_con_Au_redon_M5 =number_format($lap1_total_seven_con_Au_redon_M5_redondeado1);



$lap1_nota_1_M6 = $lap1_row_datos_control_notasM6["nt_11"];
$lap1_nota_2_M6 = $lap1_row_datos_control_notasM6["nt_12"];
$lap1_nota_3_M6 = $lap1_row_datos_control_notasM6["nt_13"];
$lap1_nota_4_M6 = $lap1_row_datos_control_notasM6["nt_14"];
$lap1_nota_5_M6 = $lap1_row_datos_control_notasM6["nt_15"];
$lap1_nota_6_M6 = $lap1_row_datos_control_notasM6["nt_16"];
$lap1_nota_7_M6 = $lap1_row_datos_control_notasM6["nt_17"];
$lap1_notaAu_M6 = $lap1_row_datos_control_notasM6["nt_Au1"];


$lap1_nota_real_1_M6 = ($lap1_row_datos_control_notasM6["nt_11"] * $lap1_para_el_porc_V1_M6)/$el_puntaje_completo_es;
$lap1_nota_real_2_M6 = ($lap1_row_datos_control_notasM6["nt_12"] * $lap1_para_el_porc_V2_M6)/$el_puntaje_completo_es;
$lap1_nota_real_3_M6 = ($lap1_row_datos_control_notasM6["nt_13"] * $lap1_para_el_porc_V3_M6)/$el_puntaje_completo_es;
$lap1_nota_real_4_M6 = ($lap1_row_datos_control_notasM6["nt_14"] * $lap1_para_el_porc_V4_M6)/$el_puntaje_completo_es;
$lap1_nota_real_5_M6 = ($lap1_row_datos_control_notasM6["nt_15"] * $lap1_para_el_porc_V5_M6)/$el_puntaje_completo_es;
$lap1_nota_real_6_M6 = ($lap1_row_datos_control_notasM6["nt_16"] * $lap1_para_el_porc_V6_M6)/$el_puntaje_completo_es;
$lap1_nota_real_7_M6 = ($lap1_row_datos_control_notasM6["nt_17"] * $lap1_para_el_porc_V7_M6)/$el_puntaje_completo_es;

$lap1_total_seven_M6 = $lap1_nota_real_1_M6+$lap1_nota_real_2_M6+$lap1_nota_real_3_M6+$lap1_nota_real_4_M6+$lap1_nota_real_5_M6+$lap1_nota_real_6_M6+$lap1_nota_real_7_M6;

$lap1_total_seven_con_Au_M6 = $lap1_total_seven_M6+ $lap1_row_datos_control_notasM6["nt_Au1"];

$lap1_total_seven_con_Au_redon_M6_redondeado1 =number_format($lap1_total_seven_con_Au_M6, 1, '.', '');

$lap1_total_seven_con_Au_redon_M6 =number_format($lap1_total_seven_con_Au_redon_M6_redondeado1);



$lap1_nota_1_M7 = $lap1_row_datos_control_notasM7["nt_11"];
$lap1_nota_2_M7 = $lap1_row_datos_control_notasM7["nt_12"];
$lap1_nota_3_M7 = $lap1_row_datos_control_notasM7["nt_13"];
$lap1_nota_4_M7 = $lap1_row_datos_control_notasM7["nt_14"];
$lap1_nota_5_M7 = $lap1_row_datos_control_notasM7["nt_15"];
$lap1_nota_6_M7 = $lap1_row_datos_control_notasM7["nt_16"];
$lap1_nota_7_M7 = $lap1_row_datos_control_notasM7["nt_17"];
$lap1_notaAu_M7 = $lap1_row_datos_control_notasM7["nt_Au1"];


$lap1_nota_real_1_M7 = ($lap1_row_datos_control_notasM7["nt_11"] * $lap1_para_el_porc_V1_M7)/$el_puntaje_completo_es;
$lap1_nota_real_2_M7 = ($lap1_row_datos_control_notasM7["nt_12"] * $lap1_para_el_porc_V2_M7)/$el_puntaje_completo_es;
$lap1_nota_real_3_M7 = ($lap1_row_datos_control_notasM7["nt_13"] * $lap1_para_el_porc_V3_M7)/$el_puntaje_completo_es;
$lap1_nota_real_4_M7 = ($lap1_row_datos_control_notasM7["nt_14"] * $lap1_para_el_porc_V4_M7)/$el_puntaje_completo_es;
$lap1_nota_real_5_M7 = ($lap1_row_datos_control_notasM7["nt_15"] * $lap1_para_el_porc_V5_M7)/$el_puntaje_completo_es;
$lap1_nota_real_6_M7 = ($lap1_row_datos_control_notasM7["nt_16"] * $lap1_para_el_porc_V6_M7)/$el_puntaje_completo_es;
$lap1_nota_real_7_M7 = ($lap1_row_datos_control_notasM7["nt_17"] * $lap1_para_el_porc_V7_M7)/$el_puntaje_completo_es;

$lap1_total_seven_M7 = $lap1_nota_real_1_M7+$lap1_nota_real_2_M7+$lap1_nota_real_3_M7+$lap1_nota_real_4_M7+$lap1_nota_real_5_M7+$lap1_nota_real_6_M7+$lap1_nota_real_7_M7;

$lap1_total_seven_con_Au_M7 = $lap1_total_seven_M7+ $lap1_row_datos_control_notasM7["nt_Au1"];

$lap1_total_seven_con_Au_redon_M7_redondeado1 =number_format($lap1_total_seven_con_Au_M7, 1, '.', '');

$lap1_total_seven_con_Au_redon_M7 =number_format($lap1_total_seven_con_Au_redon_M7_redondeado1);




$lap1_nota_1_M8 = $lap1_row_datos_control_notasM8["nt_11"];
$lap1_nota_2_M8 = $lap1_row_datos_control_notasM8["nt_12"];
$lap1_nota_3_M8 = $lap1_row_datos_control_notasM8["nt_13"];
$lap1_nota_4_M8 = $lap1_row_datos_control_notasM8["nt_14"];
$lap1_nota_5_M8 = $lap1_row_datos_control_notasM8["nt_15"];
$lap1_nota_6_M8 = $lap1_row_datos_control_notasM8["nt_16"];
$lap1_nota_7_M8 = $lap1_row_datos_control_notasM8["nt_17"];
$lap1_notaAu_M8 = $lap1_row_datos_control_notasM8["nt_Au1"];


$lap1_nota_real_1_M8 = ($lap1_row_datos_control_notasM8["nt_11"] * $lap1_para_el_porc_V1_M8)/$el_puntaje_completo_es;
$lap1_nota_real_2_M8 = ($lap1_row_datos_control_notasM8["nt_12"] * $lap1_para_el_porc_V2_M8)/$el_puntaje_completo_es;
$lap1_nota_real_3_M8 = ($lap1_row_datos_control_notasM8["nt_13"] * $lap1_para_el_porc_V3_M8)/$el_puntaje_completo_es;
$lap1_nota_real_4_M8 = ($lap1_row_datos_control_notasM8["nt_14"] * $lap1_para_el_porc_V4_M8)/$el_puntaje_completo_es;
$lap1_nota_real_5_M8 = ($lap1_row_datos_control_notasM8["nt_15"] * $lap1_para_el_porc_V5_M8)/$el_puntaje_completo_es;
$lap1_nota_real_6_M8 = ($lap1_row_datos_control_notasM8["nt_16"] * $lap1_para_el_porc_V6_M8)/$el_puntaje_completo_es;
$lap1_nota_real_7_M8 = ($lap1_row_datos_control_notasM8["nt_17"] * $lap1_para_el_porc_V7_M8)/$el_puntaje_completo_es;

$lap1_total_seven_M8 = $lap1_nota_real_1_M8+$lap1_nota_real_2_M8+$lap1_nota_real_3_M8+$lap1_nota_real_4_M8+$lap1_nota_real_5_M8+$lap1_nota_real_6_M8+$lap1_nota_real_7_M8;

$lap1_total_seven_con_Au_M8 = $lap1_total_seven_M8+ $lap1_row_datos_control_notasM8["nt_Au1"];

$lap1_total_seven_con_Au_redon_M8_redondeado1 =number_format($lap1_total_seven_con_Au_M8, 1, '.', '');

$lap1_total_seven_con_Au_redon_M8 =number_format($lap1_total_seven_con_Au_redon_M8_redondeado1);




$lap1_nota_1_M9 = $lap1_row_datos_control_notasM9["nt_11"];
$lap1_nota_2_M9 = $lap1_row_datos_control_notasM9["nt_12"];
$lap1_nota_3_M9 = $lap1_row_datos_control_notasM9["nt_13"];
$lap1_nota_4_M9 = $lap1_row_datos_control_notasM9["nt_14"];
$lap1_nota_5_M9 = $lap1_row_datos_control_notasM9["nt_15"];
$lap1_nota_6_M9 = $lap1_row_datos_control_notasM9["nt_16"];
$lap1_nota_7_M9 = $lap1_row_datos_control_notasM9["nt_17"];
$lap1_notaAu_M9 = $lap1_row_datos_control_notasM9["nt_Au1"];


$lap1_nota_real_1_M9 = ($lap1_row_datos_control_notasM9["nt_11"] * $lap1_para_el_porc_V1_M9)/$el_puntaje_completo_es;
$lap1_nota_real_2_M9 = ($lap1_row_datos_control_notasM9["nt_12"] * $lap1_para_el_porc_V2_M9)/$el_puntaje_completo_es;
$lap1_nota_real_3_M9 = ($lap1_row_datos_control_notasM9["nt_13"] * $lap1_para_el_porc_V3_M9)/$el_puntaje_completo_es;
$lap1_nota_real_4_M9 = ($lap1_row_datos_control_notasM9["nt_14"] * $lap1_para_el_porc_V4_M9)/$el_puntaje_completo_es;
$lap1_nota_real_5_M9 = ($lap1_row_datos_control_notasM9["nt_15"] * $lap1_para_el_porc_V5_M9)/$el_puntaje_completo_es;
$lap1_nota_real_6_M9 = ($lap1_row_datos_control_notasM9["nt_16"] * $lap1_para_el_porc_V6_M9)/$el_puntaje_completo_es;
$lap1_nota_real_7_M9 = ($lap1_row_datos_control_notasM9["nt_17"] * $lap1_para_el_porc_V7_M9)/$el_puntaje_completo_es;

$lap1_total_seven_M9 = $lap1_nota_real_1_M9+$lap1_nota_real_2_M9+$lap1_nota_real_3_M9+$lap1_nota_real_4_M9+$lap1_nota_real_5_M9+$lap1_nota_real_6_M9+$lap1_nota_real_7_M9;

$lap1_total_seven_con_Au_M9 = $lap1_total_seven_M9+ $lap1_row_datos_control_notasM9["nt_Au1"];

$lap1_total_seven_con_Au_redon_M9_redondeado1 =number_format($lap1_total_seven_con_Au_M9, 1, '.', '');

$lap1_total_seven_con_Au_redon_M9 =number_format($lap1_total_seven_con_Au_redon_M9_redondeado1);



$lap1_nota_1_M10 = $lap1_row_datos_control_notasM10["nt_11"];
$lap1_nota_2_M10 = $lap1_row_datos_control_notasM10["nt_12"];
$lap1_nota_3_M10 = $lap1_row_datos_control_notasM10["nt_13"];
$lap1_nota_4_M10 = $lap1_row_datos_control_notasM10["nt_14"];
$lap1_nota_5_M10 = $lap1_row_datos_control_notasM10["nt_15"];
$lap1_nota_6_M10 = $lap1_row_datos_control_notasM10["nt_16"];
$lap1_nota_7_M10 = $lap1_row_datos_control_notasM10["nt_17"];
$lap1_notaAu_M10 = $lap1_row_datos_control_notasM10["nt_Au1"];


$lap1_nota_real_1_M10 = ($lap1_row_datos_control_notasM10["nt_11"] * $lap1_para_el_porc_V1_M10)/$el_puntaje_completo_es;
$lap1_nota_real_2_M10 = ($lap1_row_datos_control_notasM10["nt_12"] * $lap1_para_el_porc_V2_M10)/$el_puntaje_completo_es;
$lap1_nota_real_3_M10 = ($lap1_row_datos_control_notasM10["nt_13"] * $lap1_para_el_porc_V3_M10)/$el_puntaje_completo_es;
$lap1_nota_real_4_M10 = ($lap1_row_datos_control_notasM10["nt_14"] * $lap1_para_el_porc_V4_M10)/$el_puntaje_completo_es;
$lap1_nota_real_5_M10 = ($lap1_row_datos_control_notasM10["nt_15"] * $lap1_para_el_porc_V5_M10)/$el_puntaje_completo_es;
$lap1_nota_real_6_M10 = ($lap1_row_datos_control_notasM10["nt_16"] * $lap1_para_el_porc_V6_M10)/$el_puntaje_completo_es;
$lap1_nota_real_7_M10 = ($lap1_row_datos_control_notasM10["nt_17"] * $lap1_para_el_porc_V7_M10)/$el_puntaje_completo_es;

$lap1_total_seven_M10 = $lap1_nota_real_1_M10+$lap1_nota_real_2_M10+$lap1_nota_real_3_M10+$lap1_nota_real_4_M10+$lap1_nota_real_5_M10+$lap1_nota_real_6_M10+$lap1_nota_real_7_M10;

$lap1_total_seven_con_Au_M10 = $lap1_total_seven_M10+ $lap1_row_datos_control_notasM10["nt_Au1"];

$lap1_total_seven_con_Au_redon_M10_redondeado1 =number_format($lap1_total_seven_con_Au_M10, 1, '.', '');

$lap1_total_seven_con_Au_redon_M10 =number_format($lap1_total_seven_con_Au_redon_M10_redondeado1);



$lap1_nota_1_M11 = $lap1_row_datos_control_notasM11["nt_11"];
$lap1_nota_2_M11 = $lap1_row_datos_control_notasM11["nt_12"];
$lap1_nota_3_M11 = $lap1_row_datos_control_notasM11["nt_13"];
$lap1_nota_4_M11 = $lap1_row_datos_control_notasM11["nt_14"];
$lap1_nota_5_M11 = $lap1_row_datos_control_notasM11["nt_15"];
$lap1_nota_6_M11 = $lap1_row_datos_control_notasM11["nt_16"];
$lap1_nota_7_M11 = $lap1_row_datos_control_notasM11["nt_17"];
$lap1_notaAu_M11 = $lap1_row_datos_control_notasM11["nt_Au1"];


$lap1_nota_real_1_M11 = ($lap1_row_datos_control_notasM11["nt_11"] * $lap1_para_el_porc_V1_M11)/$el_puntaje_completo_es;
$lap1_nota_real_2_M11 = ($lap1_row_datos_control_notasM11["nt_12"] * $lap1_para_el_porc_V2_M11)/$el_puntaje_completo_es;
$lap1_nota_real_3_M11 = ($lap1_row_datos_control_notasM11["nt_13"] * $lap1_para_el_porc_V3_M11)/$el_puntaje_completo_es;
$lap1_nota_real_4_M11 = ($lap1_row_datos_control_notasM11["nt_14"] * $lap1_para_el_porc_V4_M11)/$el_puntaje_completo_es;
$lap1_nota_real_5_M11 = ($lap1_row_datos_control_notasM11["nt_15"] * $lap1_para_el_porc_V5_M11)/$el_puntaje_completo_es;
$lap1_nota_real_6_M11 = ($lap1_row_datos_control_notasM11["nt_16"] * $lap1_para_el_porc_V6_M11)/$el_puntaje_completo_es;
$lap1_nota_real_7_M11 = ($lap1_row_datos_control_notasM11["nt_17"] * $lap1_para_el_porc_V7_M11)/$el_puntaje_completo_es;

$lap1_total_seven_M11 = $lap1_nota_real_1_M11+$lap1_nota_real_2_M11+$lap1_nota_real_3_M11+$lap1_nota_real_4_M11+$lap1_nota_real_5_M11+$lap1_nota_real_6_M11+$lap1_nota_real_7_M11;

$lap1_total_seven_con_Au_M11 = $lap1_total_seven_M11+ $lap1_row_datos_control_notasM11["nt_Au1"];

$lap1_total_seven_con_Au_redon_M11_redondeado1 =number_format($lap1_total_seven_con_Au_M11, 1, '.', '');

$lap1_total_seven_con_Au_redon_M11 =number_format($lap1_total_seven_con_Au_redon_M11_redondeado1);



$lap1_nota_1_M12 = $lap1_row_datos_control_notasM12["nt_11"];
$lap1_nota_2_M12 = $lap1_row_datos_control_notasM12["nt_12"];
$lap1_nota_3_M12 = $lap1_row_datos_control_notasM12["nt_13"];
$lap1_nota_4_M12 = $lap1_row_datos_control_notasM12["nt_14"];
$lap1_nota_5_M12 = $lap1_row_datos_control_notasM12["nt_15"];
$lap1_nota_6_M12 = $lap1_row_datos_control_notasM12["nt_16"];
$lap1_nota_7_M12 = $lap1_row_datos_control_notasM12["nt_17"];
$lap1_notaAu_M12 = $lap1_row_datos_control_notasM12["nt_Au1"];


$lap1_nota_real_1_M12 = ($lap1_row_datos_control_notasM12["nt_11"] * $lap1_para_el_porc_V1_M12)/$el_puntaje_completo_es;
$lap1_nota_real_2_M12 = ($lap1_row_datos_control_notasM12["nt_12"] * $lap1_para_el_porc_V2_M12)/$el_puntaje_completo_es;
$lap1_nota_real_3_M12 = ($lap1_row_datos_control_notasM12["nt_13"] * $lap1_para_el_porc_V3_M12)/$el_puntaje_completo_es;
$lap1_nota_real_4_M12 = ($lap1_row_datos_control_notasM12["nt_14"] * $lap1_para_el_porc_V4_M12)/$el_puntaje_completo_es;
$lap1_nota_real_5_M12 = ($lap1_row_datos_control_notasM12["nt_15"] * $lap1_para_el_porc_V5_M12)/$el_puntaje_completo_es;
$lap1_nota_real_6_M12 = ($lap1_row_datos_control_notasM12["nt_16"] * $lap1_para_el_porc_V6_M12)/$el_puntaje_completo_es;
$lap1_nota_real_7_M12 = ($lap1_row_datos_control_notasM12["nt_17"] * $lap1_para_el_porc_V7_M12)/$el_puntaje_completo_es;

$lap1_total_seven_M12 = $lap1_nota_real_1_M12+$lap1_nota_real_2_M12+$lap1_nota_real_3_M12+$lap1_nota_real_4_M12+$lap1_nota_real_5_M12+$lap1_nota_real_6_M12+$lap1_nota_real_7_M12;

$lap1_total_seven_con_Au_M12 = $lap1_total_seven_M12+ $lap1_row_datos_control_notasM12["nt_Au1"];

$lap1_total_seven_con_Au_redon_M12_redondeado1 =number_format($lap1_total_seven_con_Au_M12, 1, '.', '');

$lap1_total_seven_con_Au_redon_M12 =number_format($lap1_total_seven_con_Au_redon_M12_redondeado1);



$lap1_nota_1_M13 = $lap1_row_datos_control_notasM13["nt_11"];
$lap1_nota_2_M13 = $lap1_row_datos_control_notasM13["nt_12"];
$lap1_nota_3_M13 = $lap1_row_datos_control_notasM13["nt_13"];
$lap1_nota_4_M13 = $lap1_row_datos_control_notasM13["nt_14"];
$lap1_nota_5_M13 = $lap1_row_datos_control_notasM13["nt_15"];
$lap1_nota_6_M13 = $lap1_row_datos_control_notasM13["nt_16"];
$lap1_nota_7_M13 = $lap1_row_datos_control_notasM13["nt_17"];
$lap1_notaAu_M13 = $lap1_row_datos_control_notasM13["nt_Au1"];


$lap1_nota_real_1_M13 = ($lap1_row_datos_control_notasM13["nt_11"] * $lap1_para_el_porc_V1_M13)/$el_puntaje_completo_es;
$lap1_nota_real_2_M13 = ($lap1_row_datos_control_notasM13["nt_12"] * $lap1_para_el_porc_V2_M13)/$el_puntaje_completo_es;
$lap1_nota_real_3_M13 = ($lap1_row_datos_control_notasM13["nt_13"] * $lap1_para_el_porc_V3_M13)/$el_puntaje_completo_es;
$lap1_nota_real_4_M13 = ($lap1_row_datos_control_notasM13["nt_14"] * $lap1_para_el_porc_V4_M13)/$el_puntaje_completo_es;
$lap1_nota_real_5_M13 = ($lap1_row_datos_control_notasM13["nt_15"] * $lap1_para_el_porc_V5_M13)/$el_puntaje_completo_es;
$lap1_nota_real_6_M13 = ($lap1_row_datos_control_notasM13["nt_16"] * $lap1_para_el_porc_V6_M13)/$el_puntaje_completo_es;
$lap1_nota_real_7_M13 = ($lap1_row_datos_control_notasM13["nt_17"] * $lap1_para_el_porc_V7_M13)/$el_puntaje_completo_es;

$lap1_total_seven_M13 = $lap1_nota_real_1_M13+$lap1_nota_real_2_M13+$lap1_nota_real_3_M13+$lap1_nota_real_4_M13+$lap1_nota_real_5_M13+$lap1_nota_real_6_M13+$lap1_nota_real_7_M13;

$lap1_total_seven_con_Au_M13 = $lap1_total_seven_M13+ $lap1_row_datos_control_notasM13["nt_Au1"];

$lap1_total_seven_con_Au_redon_M13_redondeado1 =number_format($lap1_total_seven_con_Au_M13, 1, '.', '');

$lap1_total_seven_con_Au_redon_M13 =number_format($lap1_total_seven_con_Au_redon_M13_redondeado1);



$lap1_nota_1_M14 = $lap1_row_datos_control_notasM14["nt_11"];
$lap1_nota_2_M14 = $lap1_row_datos_control_notasM14["nt_12"];
$lap1_nota_3_M14 = $lap1_row_datos_control_notasM14["nt_13"];
$lap1_nota_4_M14 = $lap1_row_datos_control_notasM14["nt_14"];
$lap1_nota_5_M14 = $lap1_row_datos_control_notasM14["nt_15"];
$lap1_nota_6_M14 = $lap1_row_datos_control_notasM14["nt_16"];
$lap1_nota_7_M14 = $lap1_row_datos_control_notasM14["nt_17"];
$lap1_notaAu_M14 = $lap1_row_datos_control_notasM14["nt_Au1"];


$lap1_nota_real_1_M14 = ($lap1_row_datos_control_notasM14["nt_11"] * $lap1_para_el_porc_V1_M14)/$el_puntaje_completo_es;
$lap1_nota_real_2_M14 = ($lap1_row_datos_control_notasM14["nt_12"] * $lap1_para_el_porc_V2_M14)/$el_puntaje_completo_es;
$lap1_nota_real_3_M14 = ($lap1_row_datos_control_notasM14["nt_13"] * $lap1_para_el_porc_V3_M14)/$el_puntaje_completo_es;
$lap1_nota_real_4_M14 = ($lap1_row_datos_control_notasM14["nt_14"] * $lap1_para_el_porc_V4_M14)/$el_puntaje_completo_es;
$lap1_nota_real_5_M14 = ($lap1_row_datos_control_notasM14["nt_15"] * $lap1_para_el_porc_V5_M14)/$el_puntaje_completo_es;
$lap1_nota_real_6_M14 = ($lap1_row_datos_control_notasM14["nt_16"] * $lap1_para_el_porc_V6_M14)/$el_puntaje_completo_es;
$lap1_nota_real_7_M14 = ($lap1_row_datos_control_notasM14["nt_17"] * $lap1_para_el_porc_V7_M14)/$el_puntaje_completo_es;

$lap1_total_seven_M14 = $lap1_nota_real_1_M14+$lap1_nota_real_2_M14+$lap1_nota_real_3_M14+$lap1_nota_real_4_M14+$lap1_nota_real_5_M14+$lap1_nota_real_6_M14+$lap1_nota_real_7_M14;

$lap1_total_seven_con_Au_M14 = $lap1_total_seven_M14+ $lap1_row_datos_control_notasM14["nt_Au1"];

$lap1_total_seven_con_Au_redon_M14_redondeado1 =number_format($lap1_total_seven_con_Au_M14, 1, '.', '');

$lap1_total_seven_con_Au_redon_M14 =number_format($lap1_total_seven_con_Au_redon_M14_redondeado1);



?>


<?php

     $lap1_cuenta_personal ='0';

     $lap1_suma_personal = '';
     $lap1_entre_cuanto = '';
     $lap1_color_a = $lap1_color_imp2;
   
     $lap1_marquitaper ='';
     $lap1_total_seven_con_Au_redon_M1a = '';

     if ($lap1_total_seven_con_Au_M1 >= 0.1 and $lap1_total_seven_con_Au_redon_M1 <= $el_puntaje_aprobatorio_prom) {
      $lap1_cuenta_personal = $lap1_cuenta_personal + 1;
      $lap1_color_a = red;
      $lap1_apla_mat1 = $lap1_apla_mat1 + 1;
    } 


     if ($lap1_total_seven_con_Au_M1 == 0) {
      $lap1_total_seven_con_Au_redon_M1a = '';
    } 


    if ($lap1_total_seven_con_Au_M1 >= 0.1 and $lap1_total_seven_con_Au_M1 <=0.9) {
      $lap1_total_seven_con_Au_redon_M1a = $lap1_total_seven_con_Au_redon_M1;  

        $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M1a;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;       

    } 





    if ($lap1_total_seven_con_Au_redon_M1 >= 1) {
      $lap1_total_seven_con_Au_redon_M1a = $lap1_total_seven_con_Au_redon_M1;
      $lap1_tot_mat1 = $lap1_tot_mat1 + $lap1_total_seven_con_Au_redon_M1a;
      $lap1_div_mat1 = $lap1_div_mat1 + 1;

  $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M1a;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;   

    } 

  
 ?>   


 <?php

     $lap1_color_a = $lap1_color_imp2;

     $lap1_marquitaper ='';
     $lap1_total_seven_con_Au_redon_M22 = '';

     if ($lap1_total_seven_con_Au_M2 >= 0.1 and $lap1_total_seven_con_Au_redon_M2 <= $el_puntaje_aprobatorio_prom) {
      $lap1_cuenta_personal = $lap1_cuenta_personal + 1;
       $lap1_color_a = red;
       $lap1_apla_mat2 = $lap1_apla_mat2 + 1;
    } 


     if ($lap1_total_seven_con_Au_M2 == 0) {
      $lap1_total_seven_con_Au_redon_M22 = '';
    } 



    if ($lap1_total_seven_con_Au_M2 >= 0.1 and $lap1_total_seven_con_Au_M2 <=0.9) {
      $lap1_total_seven_con_Au_redon_M22 = $lap1_total_seven_con_Au_redon_M2;  

        $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M22;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;       

    } 





    if ($lap1_total_seven_con_Au_redon_M2 >= 1) {
      $lap1_total_seven_con_Au_redon_M22 = $lap1_total_seven_con_Au_redon_M2;

      $lap1_tot_mat2 = $lap1_tot_mat2 + $lap1_total_seven_con_Au_redon_M22;
      $lap1_div_mat2 = $lap1_div_mat2 + 1;

   $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M22;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;  


    } 

    ?>





    <?php

     $lap1_color_a = $lap1_color_imp2;

     $lap1_marquitaper ='';
     $lap1_total_seven_con_Au_redon_M33 = '';

     if ($lap1_total_seven_con_Au_M3 >= 0.1 and $lap1_total_seven_con_Au_redon_M3 <= $el_puntaje_aprobatorio_prom) {
      $lap1_cuenta_personal = $lap1_cuenta_personal + 1;
       $lap1_color_a = red;
       $lap1_apla_mat3 = $lap1_apla_mat3 + 1;
    } 


     if ($lap1_total_seven_con_Au_M3 == 0) {
      $lap1_total_seven_con_Au_redon_M33 = '';
    } 


    if ($lap1_total_seven_con_Au_M3 >= 0.1 and $lap1_total_seven_con_Au_M3 <=0.9) {
      $lap1_total_seven_con_Au_redon_M33 = $lap1_total_seven_con_Au_redon_M3;  

        $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M33;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;       

    } 



    if ($lap1_total_seven_con_Au_redon_M3 >= 1) {
      $lap1_total_seven_con_Au_redon_M33 = $lap1_total_seven_con_Au_redon_M3;

      $lap1_tot_mat3 = $lap1_tot_mat3 + $lap1_total_seven_con_Au_redon_M33;
      $lap1_div_mat3 = $lap1_div_mat3 + 1;

    $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M33;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;  


    } 

   ?>





   <?php

     $lap1_color_a = $lap1_color_imp2;

     $lap1_marquitaper ='';
     $lap1_total_seven_con_Au_redon_M44 = '';

     if ($lap1_total_seven_con_Au_M4 >= 0.1 and $lap1_total_seven_con_Au_redon_M4 <= $el_puntaje_aprobatorio_prom) {
      $lap1_cuenta_personal = $lap1_cuenta_personal + 1;
       $lap1_color_a = red;
       $lap1_apla_mat4 = $lap1_apla_mat4 + 1;
    } 


     if ($lap1_total_seven_con_Au_M4 == 0) {
      $lap1_total_seven_con_Au_redon_M44 = '';
    } 



    if ($lap1_total_seven_con_Au_M4 >= 0.1 and $lap1_total_seven_con_Au_M4 <=0.9) {
      $lap1_total_seven_con_Au_redon_M44 = $lap1_total_seven_con_Au_redon_M4;  

        $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M44;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;       

    } 




    if ($lap1_total_seven_con_Au_redon_M4 >= 1) {
      $lap1_total_seven_con_Au_redon_M44 = $lap1_total_seven_con_Au_redon_M4;

      $lap1_tot_mat4 = $lap1_tot_mat4 + $lap1_total_seven_con_Au_redon_M44;
      $lap1_div_mat4 = $lap1_div_mat4 + 1;

  $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M44;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;  

    } 

    ?>




    <?php

     $lap1_color_a = $lap1_color_imp2;

     $lap1_marquitaper ='';
     $lap1_total_seven_con_Au_redon_M55 = '';

     if ($lap1_total_seven_con_Au_M5 >= 0.1 and $lap1_total_seven_con_Au_redon_M5 <= $el_puntaje_aprobatorio_prom) {
      $lap1_cuenta_personal = $lap1_cuenta_personal + 1;
       $lap1_color_a = red;
       $lap1_apla_mat5 = $lap1_apla_mat5 + 1;
    } 


     if ($lap1_total_seven_con_Au_M5 == 0) {
      $lap1_total_seven_con_Au_redon_M55 = '';
    } 


    if ($lap1_total_seven_con_Au_M5 >= 0.1 and $lap1_total_seven_con_Au_M5 <=0.9) {
      $lap1_total_seven_con_Au_redon_M55 = $lap1_total_seven_con_Au_redon_M5;  

        $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M55;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;       

    } 




    if ($lap1_total_seven_con_Au_redon_M5 >= 1) {
      $lap1_total_seven_con_Au_redon_M55 = $lap1_total_seven_con_Au_redon_M5;

      $lap1_tot_mat5 = $lap1_tot_mat5 + $lap1_total_seven_con_Au_redon_M55;
      $lap1_div_mat5 = $lap1_div_mat5 + 1;

   $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M55;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;   


    } 

 ?>



 <?php

     $lap1_color_a = $lap1_color_imp2;

     $lap1_marquitaper ='';
     $lap1_total_seven_con_Au_redon_M66 = '';

     if ($lap1_total_seven_con_Au_M6 >= 0.1 and $lap1_total_seven_con_Au_redon_M6 <= $el_puntaje_aprobatorio_prom) {
      $lap1_cuenta_personal = $lap1_cuenta_personal + 1;
       $lap1_color_a = red;
       $lap1_apla_mat6 = $lap1_apla_mat6 + 1;
    } 


     if ($lap1_total_seven_con_Au_M6 == 0) {
      $lap1_total_seven_con_Au_redon_M66 = '';
    } 


    if ($lap1_total_seven_con_Au_M6 >= 0.1 and $lap1_total_seven_con_Au_M6 <=0.9) {
      $lap1_total_seven_con_Au_redon_M66 = $lap1_total_seven_con_Au_redon_M6;  

        $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M66;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;       

    } 




    if ($lap1_total_seven_con_Au_redon_M6 >= 1) {
      $lap1_total_seven_con_Au_redon_M66 = $lap1_total_seven_con_Au_redon_M6;

      $lap1_tot_mat6 = $lap1_tot_mat6 + $lap1_total_seven_con_Au_redon_M66;
      $lap1_div_mat6 = $lap1_div_mat6 + 1;

      $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M66;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;   

    } 

     ?>



     <?php

     $lap1_color_a = $lap1_color_imp2;

     $lap1_marquitaper ='';
     $lap1_total_seven_con_Au_redon_M77 = '';

     if ($lap1_total_seven_con_Au_M7 >= 0.1 and $lap1_total_seven_con_Au_redon_M7 <= $el_puntaje_aprobatorio_prom) {
      $lap1_cuenta_personal = $lap1_cuenta_personal + 1;
       $lap1_color_a = red;
       $lap1_apla_mat7 = $lap1_apla_mat7 + 1;
    } 


     if ($lap1_total_seven_con_Au_M7 == 0) {
      $lap1_total_seven_con_Au_redon_M77 = '';
    } 


    if ($lap1_total_seven_con_Au_M7 >= 0.1 and $lap1_total_seven_con_Au_M7 <=0.9) {
      $lap1_total_seven_con_Au_redon_M77 = $lap1_total_seven_con_Au_redon_M7;  

        $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M77;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;       

    } 



    if ($lap1_total_seven_con_Au_redon_M7 >= 1) {
      $lap1_total_seven_con_Au_redon_M77 = $lap1_total_seven_con_Au_redon_M7;

      $lap1_tot_mat7 = $lap1_tot_mat7 + $lap1_total_seven_con_Au_redon_M77;
      $lap1_div_mat7 = $lap1_div_mat7 + 1;

 $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M77;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;  
    } 

    ?>



    <?php

     $lap1_color_a = $lap1_color_imp2;

     $lap1_marquitaper ='';
     $lap1_total_seven_con_Au_redon_M88 = '';

     if ($lap1_total_seven_con_Au_M8 >= 0.1 and $lap1_total_seven_con_Au_redon_M8 <= $el_puntaje_aprobatorio_prom) {
      $lap1_cuenta_personal = $lap1_cuenta_personal + 1;
       $lap1_color_a = red;
       $lap1_apla_mat8 = $lap1_apla_mat8 + 1;
    } 


     if ($lap1_total_seven_con_Au_M8 == 0) {
      $lap1_total_seven_con_Au_redon_M88 = '';
    } 


    if ($lap1_total_seven_con_Au_M8 >= 0.1 and $lap1_total_seven_con_Au_M8 <=0.9) {
      $lap1_total_seven_con_Au_redon_M88 = $lap1_total_seven_con_Au_redon_M8;  

        $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M88;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;       

    } 




    if ($lap1_total_seven_con_Au_redon_M8 >= 1) {
      $lap1_total_seven_con_Au_redon_M88 = $lap1_total_seven_con_Au_redon_M8;

      $lap1_tot_mat8 = $lap1_tot_mat8 + $lap1_total_seven_con_Au_redon_M88;
      $lap1_div_mat8 = $lap1_div_mat8 + 1;

    $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M88;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;  

    } 

    ?>





    <?php

 $lap1_color_a = $lap1_color_imp2;

     $lap1_marquitaper ='';
     $lap1_total_seven_con_Au_redon_M99 = '';

     if ($lap1_total_seven_con_Au_M9 >= 0.1 and $lap1_total_seven_con_Au_redon_M9 <= $el_puntaje_aprobatorio_prom) {
      $lap1_cuenta_personal = $lap1_cuenta_personal + 1;
       $lap1_color_a = red;
       $lap1_apla_mat9 = $lap1_apla_mat9 + 1;
    } 


     if ($lap1_total_seven_con_Au_M9 == 0) {
      $lap1_total_seven_con_Au_redon_M99 = '';
    } 


    if ($lap1_total_seven_con_Au_M9 >= 0.1 and $lap1_total_seven_con_Au_M9 <=0.9) {
      $lap1_total_seven_con_Au_redon_M99 = $lap1_total_seven_con_Au_redon_M9;  

        $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M99;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;       

    } 




    if ($lap1_total_seven_con_Au_redon_M9 >= 1) {
      $lap1_total_seven_con_Au_redon_M99 = $lap1_total_seven_con_Au_redon_M9;

      $lap1_tot_mat9 = $lap1_tot_mat9 + $lap1_total_seven_con_Au_redon_M99;
      $lap1_div_mat9 = $lap1_div_mat9 + 1;

   $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M99;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;  

    } 

     ?>




     <?php

 $lap1_color_a = $lap1_color_imp2;

     $lap1_marquitaper ='';
     $lap1_total_seven_con_Au_redon_M100 = '';

     if ($lap1_total_seven_con_Au_M10 >= 0.1 and $lap1_total_seven_con_Au_redon_M10 <= $el_puntaje_aprobatorio_prom) {
      $lap1_cuenta_personal = $lap1_cuenta_personal + 1;
       $lap1_color_a = red;
       $lap1_apla_mat10 = $lap1_apla_mat10 + 1;
    } 


     if ($lap1_total_seven_con_Au_M10 == 0) {
      $lap1_total_seven_con_Au_redon_M100 = '';
    } 


    if ($lap1_total_seven_con_Au_M10 >= 0.1 and $lap1_total_seven_con_Au_M10 <=0.9) {
      $lap1_total_seven_con_Au_redon_M100 = $lap1_total_seven_con_Au_redon_M10;  

        $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M100;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;       

    } 





    if ($lap1_total_seven_con_Au_redon_M10 >= 1) {
      $lap1_total_seven_con_Au_redon_M100 = $lap1_total_seven_con_Au_redon_M10;

      $lap1_tot_mat10 = $lap1_tot_mat10 + $lap1_total_seven_con_Au_redon_M100;
      $lap1_div_mat10 = $lap1_div_mat10 + 1;

    $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M100;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;  

    } 

 ?>


 <?php

 $lap1_color_a = $lap1_color_imp2;

     $lap1_marquitaper ='';
     $lap1_total_seven_con_Au_redon_M110 = '';

     if ($lap1_total_seven_con_Au_M11 >= 0.1 and $lap1_total_seven_con_Au_redon_M11 <= $el_puntaje_aprobatorio_prom) {
      $lap1_cuenta_personal = $lap1_cuenta_personal + 1;
       $lap1_color_a = red;
       $lap1_apla_mat11 = $lap1_apla_mat11 + 1;
    } 


     if ($lap1_total_seven_con_Au_M11 == 0) {
      $lap1_total_seven_con_Au_redon_M110 = '';
    } 


    if ($lap1_total_seven_con_Au_M11 >= 0.1 and $lap1_total_seven_con_Au_M11 <=0.9) {
      $lap1_total_seven_con_Au_redon_M110 = $lap1_total_seven_con_Au_redon_M11;  

        $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M110;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;       

    } 




    if ($lap1_total_seven_con_Au_redon_M11 >= 1) {
      $lap1_total_seven_con_Au_redon_M110 = $lap1_total_seven_con_Au_redon_M11;

      $lap1_tot_mat11 = $lap1_tot_mat11 + $lap1_total_seven_con_Au_redon_M110;
      $lap1_div_mat11 = $lap1_div_mat11 + 1;

   $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M110;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;  

    } 

    ?>



    <?php

 $lap1_color_a = $lap1_color_imp2;

     $lap1_marquitaper ='';
     $lap1_total_seven_con_Au_redon_M120 = '';

     if ($lap1_total_seven_con_Au_M12 >= 0.1 and $lap1_total_seven_con_Au_redon_M12 <= $el_puntaje_aprobatorio_prom) {
      $lap1_cuenta_personal = $lap1_cuenta_personal + 1;
       $lap1_color_a = red;
       $lap1_apla_mat12 = $lap1_apla_mat12 + 1;
    } 


     if ($lap1_total_seven_con_Au_M12 == 0) {
      $lap1_total_seven_con_Au_redon_M120 = '';
    } 


    if ($lap1_total_seven_con_Au_M12 >= 0.1 and $lap1_total_seven_con_Au_M12 <=0.9) {
      $lap1_total_seven_con_Au_redon_M120 = $lap1_total_seven_con_Au_redon_M12;  

        $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M120;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;       

    } 


    if ($lap1_total_seven_con_Au_redon_M12 >= 1) {
      $lap1_total_seven_con_Au_redon_M120 = $lap1_total_seven_con_Au_redon_M12;

      $lap1_tot_mat12 = $lap1_tot_mat12 + $lap1_total_seven_con_Au_redon_M120;
      $lap1_div_mat12 = $lap1_div_mat12 + 1;

  $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M120;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;   

    } 

 ?>



 <?php

 $lap1_color_a = $lap1_color_imp2;

     $lap1_marquitaper ='';
     $lap1_total_seven_con_Au_redon_M130 = '';

     if ($lap1_total_seven_con_Au_M13 >= 0.1 and $lap1_total_seven_con_Au_redon_M13 <= $el_puntaje_aprobatorio_prom) {
      $lap1_cuenta_personal = $lap1_cuenta_personal + 1;
       $lap1_color_a = red;
       $lap1_apla_mat13 = $lap1_apla_mat13 + 1;
    } 


     if ($lap1_total_seven_con_Au_M13 == 0) {
      $lap1_total_seven_con_Au_redon_M130 = '';
    } 


    if ($lap1_total_seven_con_Au_M13 >= 0.1 and $lap1_total_seven_con_Au_M13 <=0.9) {
      $lap1_total_seven_con_Au_redon_M130 = $lap1_total_seven_con_Au_redon_M13;  

        $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M130;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;       

    } 


    if ($lap1_total_seven_con_Au_redon_M13 >= 1) {
      $lap1_total_seven_con_Au_redon_M130 = $lap1_total_seven_con_Au_redon_M13;

      $lap1_tot_mat13 = $lap1_tot_mat13 + $lap1_total_seven_con_Au_redon_M130;
      $lap1_div_mat13 = $lap1_div_mat13 + 1;


    $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M130;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;  

    } 

 ?>


 <?php

 $lap1_color_a = $lap1_color_imp2;

     $lap1_marquitaper ='';
     $lap1_total_seven_con_Au_redon_M140 = '';

     if ($lap1_total_seven_con_Au_M14 >= 0.1 and $lap1_total_seven_con_Au_redon_M14 <= $el_puntaje_aprobatorio_prom) {
      $lap1_cuenta_personal = $lap1_cuenta_personal + 1;
       $lap1_color_a = red;
       $lap1_apla_mat14 = $lap1_apla_mat14 + 1;
    } 


     if ($lap1_total_seven_con_Au_M14 == 0) {
      $lap1_total_seven_con_Au_redon_M140 = '';
    } 



    if ($lap1_total_seven_con_Au_M14 >= 0.1 and $lap1_total_seven_con_Au_M14 <=0.9) {
      $lap1_total_seven_con_Au_redon_M140 = $lap1_total_seven_con_Au_redon_M14;  

        $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M140;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;       

    } 




    if ($lap1_total_seven_con_Au_redon_M14 >= 1) {
      $lap1_total_seven_con_Au_redon_M140 = $lap1_total_seven_con_Au_redon_M14;

      $lap1_tot_mat14 = $lap1_tot_mat14 + $lap1_total_seven_con_Au_redon_M140;
      $lap1_div_mat14 = $lap1_div_mat14 + 1;

     $lap1_suma_personal = $lap1_suma_personal + $lap1_total_seven_con_Au_redon_M140;
      $lap1_entre_cuanto = $lap1_entre_cuanto + 1;  

    } 
 ?><?php 

      $lap1_el_promeee_es = $lap1_suma_personal/$lap1_entre_cuanto;

      $lap1_el_promeee_es_redon =number_format($lap1_el_promeee_es, 5, '.', '');  


         ?>


<?php
                }
                ?>






<?php

$lap2_id_seccionxxx = $_POST['id_seccionxxx'];
$lap2_id_cicloxxx = $_POST['id_cicloxxx'];
$lap2_id_gradoxxx = $_POST['id_gradoxxx'];

include("../../conectar.php");




$lap2_query = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$lap2_id_seccionxxx'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$lap2_id_cicloxxx'
         and  grados.id_grado = '$lap2_id_gradoxxx'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$lap2_datos_control = mysqli_query($enlace, $lap2_query) or die(mysqli_error());

$lap2_totalRows_datos_control = mysqli_num_rows($lap2_datos_control); 

$lap2_media =  ceil($lap2_totalRows_datos_control/2);

$lap2_centro = $lap2_media + 1;

    

mysqli_close($enlace);




while( $lap2_row_datos_control = mysqli_fetch_assoc($lap2_datos_control)){ 


?>









   <?php


$lap2_el_reg_del_est_es = $lap2_row_datos_control['id_reg_estu_actual'];

$lap2_el_dicho_id_e = $lap2_row_datos_control['id_estud'];


include("../../conectar.php");



$lap2_query_notas1 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap2_el_reg_del_est_es'
               and id_estud = '$lap2_el_dicho_id_e'
               and materia = 1
                       
               GROUP BY id_asign_notas limit 1" ;

$lap2_datos_control_notas1 = mysqli_query($enlace, $lap2_query_notas1) or die(mysqli_error());
$lap2_row_datos_control_notasM1 = mysqli_fetch_array($lap2_datos_control_notas1); 


$lap2_query_notas2 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap2_el_reg_del_est_es'
               and id_estud = '$lap2_el_dicho_id_e'
               and materia = 2
                       
               GROUP BY id_asign_notas limit 1" ;

$lap2_datos_control_notas2 = mysqli_query($enlace, $lap2_query_notas2) or die(mysqli_error());
$lap2_row_datos_control_notasM2 = mysqli_fetch_array($lap2_datos_control_notas2); 


$lap2_query_notas3 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap2_el_reg_del_est_es'
               and id_estud = '$lap2_el_dicho_id_e'
               and materia = 3
                       
               GROUP BY id_asign_notas limit 1" ;

$lap2_datos_control_notas3 = mysqli_query($enlace, $lap2_query_notas3) or die(mysqli_error());
$lap2_row_datos_control_notasM3 = mysqli_fetch_array($lap2_datos_control_notas3); 


$lap2_query_notas4 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap2_el_reg_del_est_es'
               and id_estud = '$lap2_el_dicho_id_e'
               and materia = 4
                       
               GROUP BY id_asign_notas limit 1" ;

$lap2_datos_control_notas4 = mysqli_query($enlace, $lap2_query_notas4) or die(mysqli_error());
$lap2_row_datos_control_notasM4 = mysqli_fetch_array($lap2_datos_control_notas4); 


$lap2_query_notas5 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap2_el_reg_del_est_es'
               and id_estud = '$lap2_el_dicho_id_e'
               and materia = 5
                       
               GROUP BY id_asign_notas limit 1" ;

$lap2_datos_control_notas5 = mysqli_query($enlace, $lap2_query_notas5) or die(mysqli_error());
$lap2_row_datos_control_notasM5 = mysqli_fetch_array($lap2_datos_control_notas5); 


$lap2_query_notas6 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap2_el_reg_del_est_es'
               and id_estud = '$lap2_el_dicho_id_e'
               and materia = 6
                       
               GROUP BY id_asign_notas limit 1" ;

$lap2_datos_control_notas6 = mysqli_query($enlace, $lap2_query_notas6) or die(mysqli_error());
$lap2_row_datos_control_notasM6 = mysqli_fetch_array($lap2_datos_control_notas6); 


$lap2_query_notas7 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap2_el_reg_del_est_es'
               and id_estud = '$lap2_el_dicho_id_e'
               and materia = 7
                       
               GROUP BY id_asign_notas limit 1" ;

$lap2_datos_control_notas7 = mysqli_query($enlace, $lap2_query_notas7) or die(mysqli_error());
$lap2_row_datos_control_notasM7 = mysqli_fetch_array($lap2_datos_control_notas7); 


$lap2_query_notas8 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap2_el_reg_del_est_es'
               and id_estud = '$lap2_el_dicho_id_e'
               and materia = 8
                       
               GROUP BY id_asign_notas limit 1" ;

$lap2_datos_control_notas8 = mysqli_query($enlace, $lap2_query_notas8) or die(mysqli_error());
$lap2_row_datos_control_notasM8 = mysqli_fetch_array($lap2_datos_control_notas8); 


$lap2_query_notas9 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap2_el_reg_del_est_es'
               and id_estud = '$lap2_el_dicho_id_e'
               and materia = 9
                       
               GROUP BY id_asign_notas limit 1" ;

$lap2_datos_control_notas9 = mysqli_query($enlace, $lap2_query_notas9) or die(mysqli_error());
$lap2_row_datos_control_notasM9 = mysqli_fetch_array($lap2_datos_control_notas9); 


$lap2_query_notas10 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap2_el_reg_del_est_es'
               and id_estud = '$lap2_el_dicho_id_e'
               and materia = 10
                       
               GROUP BY id_asign_notas limit 1" ;

$lap2_datos_control_notas10 = mysqli_query($enlace, $lap2_query_notas10) or die(mysqli_error());
$lap2_row_datos_control_notasM10 = mysqli_fetch_array($lap2_datos_control_notas10); 


$lap2_query_notas11 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap2_el_reg_del_est_es'
               and id_estud = '$lap2_el_dicho_id_e'
               and materia = 11
                       
               GROUP BY id_asign_notas limit 1" ;

$lap2_datos_control_notas11 = mysqli_query($enlace, $lap2_query_notas11) or die(mysqli_error());
$lap2_row_datos_control_notasM11 = mysqli_fetch_array($lap2_datos_control_notas11); 


$lap2_query_notas12 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap2_el_reg_del_est_es'
               and id_estud = '$lap2_el_dicho_id_e'
               and materia = 12
                       
               GROUP BY id_asign_notas limit 1" ;

$lap2_datos_control_notas12 = mysqli_query($enlace, $lap2_query_notas12) or die(mysqli_error());
$lap2_row_datos_control_notasM12 = mysqli_fetch_array($lap2_datos_control_notas12); 


$lap2_query_notas13 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap2_el_reg_del_est_es'
               and id_estud = '$lap2_el_dicho_id_e'
               and materia = 13
                       
               GROUP BY id_asign_notas limit 1" ;

$lap2_datos_control_notas13 = mysqli_query($enlace, $lap2_query_notas13) or die(mysqli_error());
$lap2_row_datos_control_notasM13 = mysqli_fetch_array($lap2_datos_control_notas13); 


$lap2_query_notas14 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap2_el_reg_del_est_es'
               and id_estud = '$lap2_el_dicho_id_e'
               and materia = 14
                       
               GROUP BY id_asign_notas limit 1" ;

$lap2_datos_control_notas14 = mysqli_query($enlace, $lap2_query_notas14) or die(mysqli_error());
$lap2_row_datos_control_notasM14 = mysqli_fetch_array($lap2_datos_control_notas14); 

 mysqli_close($enlace);

  
?>


<?php



$lap2_nota_1_M1 = $lap2_row_datos_control_notasM1["nt_21"];
$lap2_nota_2_M1 = $lap2_row_datos_control_notasM1["nt_22"];
$lap2_nota_3_M1 = $lap2_row_datos_control_notasM1["nt_23"];
$lap2_nota_4_M1 = $lap2_row_datos_control_notasM1["nt_24"];
$lap2_nota_5_M1 = $lap2_row_datos_control_notasM1["nt_25"];
$lap2_nota_6_M1 = $lap2_row_datos_control_notasM1["nt_26"];
$lap2_nota_7_M1 = $lap2_row_datos_control_notasM1["nt_27"];
$lap2_notaAu_M1 = $lap2_row_datos_control_notasM1["nt_Au2"];


$lap2_nota_real_1_M1 = ($lap2_row_datos_control_notasM1["nt_21"] * $lap2_para_el_porc_V1_M1)/$el_puntaje_completo_es;
$lap2_nota_real_2_M1 = ($lap2_row_datos_control_notasM1["nt_22"] * $lap2_para_el_porc_V2_M1)/$el_puntaje_completo_es;
$lap2_nota_real_3_M1 = ($lap2_row_datos_control_notasM1["nt_23"] * $lap2_para_el_porc_V3_M1)/$el_puntaje_completo_es;
$lap2_nota_real_4_M1 = ($lap2_row_datos_control_notasM1["nt_24"] * $lap2_para_el_porc_V4_M1)/$el_puntaje_completo_es;
$lap2_nota_real_5_M1 = ($lap2_row_datos_control_notasM1["nt_25"] * $lap2_para_el_porc_V5_M1)/$el_puntaje_completo_es;
$lap2_nota_real_6_M1 = ($lap2_row_datos_control_notasM1["nt_26"] * $lap2_para_el_porc_V6_M1)/$el_puntaje_completo_es;
$lap2_nota_real_7_M1 = ($lap2_row_datos_control_notasM1["nt_27"] * $lap2_para_el_porc_V7_M1)/$el_puntaje_completo_es;

$lap2_total_seven_M1 = $lap2_nota_real_1_M1+$lap2_nota_real_2_M1+$lap2_nota_real_3_M1+$lap2_nota_real_4_M1+$lap2_nota_real_5_M1+$lap2_nota_real_6_M1+$lap2_nota_real_7_M1;

$lap2_total_seven_con_Au_M1 = $lap2_total_seven_M1+ $lap2_row_datos_control_notasM1["nt_Au2"];

$lap2_total_seven_con_Au_redon_M1_redondeado1 =number_format($lap2_total_seven_con_Au_M1, 1, '.', '');

$lap2_total_seven_con_Au_redon_M1 =number_format($lap2_total_seven_con_Au_redon_M1_redondeado1);



$lap2_nota_1_M2 = $lap2_row_datos_control_notasM2["nt_21"];
$lap2_nota_2_M2 = $lap2_row_datos_control_notasM2["nt_22"];
$lap2_nota_3_M2 = $lap2_row_datos_control_notasM2["nt_23"];
$lap2_nota_4_M2 = $lap2_row_datos_control_notasM2["nt_24"];
$lap2_nota_5_M2 = $lap2_row_datos_control_notasM2["nt_25"];
$lap2_nota_6_M2 = $lap2_row_datos_control_notasM2["nt_26"];
$lap2_nota_7_M2 = $lap2_row_datos_control_notasM2["nt_27"];
$lap2_notaAu_M2 = $lap2_row_datos_control_notasM2["nt_Au2"];


$lap2_nota_real_1_M2 = ($lap2_row_datos_control_notasM2["nt_21"] * $lap2_para_el_porc_V1_M2)/$el_puntaje_completo_es;
$lap2_nota_real_2_M2 = ($lap2_row_datos_control_notasM2["nt_22"] * $lap2_para_el_porc_V2_M2)/$el_puntaje_completo_es;
$lap2_nota_real_3_M2 = ($lap2_row_datos_control_notasM2["nt_23"] * $lap2_para_el_porc_V3_M2)/$el_puntaje_completo_es;
$lap2_nota_real_4_M2 = ($lap2_row_datos_control_notasM2["nt_24"] * $lap2_para_el_porc_V4_M2)/$el_puntaje_completo_es;
$lap2_nota_real_5_M2 = ($lap2_row_datos_control_notasM2["nt_25"] * $lap2_para_el_porc_V5_M2)/$el_puntaje_completo_es;
$lap2_nota_real_6_M2 = ($lap2_row_datos_control_notasM2["nt_26"] * $lap2_para_el_porc_V6_M2)/$el_puntaje_completo_es;
$lap2_nota_real_7_M2 = ($lap2_row_datos_control_notasM2["nt_27"] * $lap2_para_el_porc_V7_M2)/$el_puntaje_completo_es;

$lap2_total_seven_M2 = $lap2_nota_real_1_M2+$lap2_nota_real_2_M2+$lap2_nota_real_3_M2+$lap2_nota_real_4_M2+$lap2_nota_real_5_M2+$lap2_nota_real_6_M2+$lap2_nota_real_7_M2;

$lap2_total_seven_con_Au_M2 = $lap2_total_seven_M2+ $lap2_row_datos_control_notasM2["nt_Au2"];

$lap2_total_seven_con_Au_redon_M2_redondeado1 =number_format($lap2_total_seven_con_Au_M2, 1, '.', '');

$lap2_total_seven_con_Au_redon_M2 =number_format($lap2_total_seven_con_Au_redon_M2_redondeado1);



$lap2_nota_1_M3 = $lap2_row_datos_control_notasM3["nt_21"];
$lap2_nota_2_M3 = $lap2_row_datos_control_notasM3["nt_22"];
$lap2_nota_3_M3 = $lap2_row_datos_control_notasM3["nt_23"];
$lap2_nota_4_M3 = $lap2_row_datos_control_notasM3["nt_24"];
$lap2_nota_5_M3 = $lap2_row_datos_control_notasM3["nt_25"];
$lap2_nota_6_M3 = $lap2_row_datos_control_notasM3["nt_26"];
$lap2_nota_7_M3 = $lap2_row_datos_control_notasM3["nt_27"];
$lap2_notaAu_M3 = $lap2_row_datos_control_notasM3["nt_Au2"];


$lap2_nota_real_1_M3 = ($lap2_row_datos_control_notasM3["nt_21"] * $lap2_para_el_porc_V1_M3)/$el_puntaje_completo_es;
$lap2_nota_real_2_M3 = ($lap2_row_datos_control_notasM3["nt_22"] * $lap2_para_el_porc_V2_M3)/$el_puntaje_completo_es;
$lap2_nota_real_3_M3 = ($lap2_row_datos_control_notasM3["nt_23"] * $lap2_para_el_porc_V3_M3)/$el_puntaje_completo_es;
$lap2_nota_real_4_M3 = ($lap2_row_datos_control_notasM3["nt_24"] * $lap2_para_el_porc_V4_M3)/$el_puntaje_completo_es;
$lap2_nota_real_5_M3 = ($lap2_row_datos_control_notasM3["nt_25"] * $lap2_para_el_porc_V5_M3)/$el_puntaje_completo_es;
$lap2_nota_real_6_M3 = ($lap2_row_datos_control_notasM3["nt_26"] * $lap2_para_el_porc_V6_M3)/$el_puntaje_completo_es;
$lap2_nota_real_7_M3 = ($lap2_row_datos_control_notasM3["nt_27"] * $lap2_para_el_porc_V7_M3)/$el_puntaje_completo_es;

$lap2_total_seven_M3 = $lap2_nota_real_1_M3+$lap2_nota_real_2_M3+$lap2_nota_real_3_M3+$lap2_nota_real_4_M3+$lap2_nota_real_5_M3+$lap2_nota_real_6_M3+$lap2_nota_real_7_M3;

$lap2_total_seven_con_Au_M3 = $lap2_total_seven_M3+ $lap2_row_datos_control_notasM3["nt_Au2"];

$lap2_total_seven_con_Au_redon_M3_redondeado1 =number_format($lap2_total_seven_con_Au_M3, 1, '.', '');

$lap2_total_seven_con_Au_redon_M3 =number_format($lap2_total_seven_con_Au_redon_M3_redondeado1);


$lap2_nota_1_M4 = $lap2_row_datos_control_notasM4["nt_21"];
$lap2_nota_2_M4 = $lap2_row_datos_control_notasM4["nt_22"];
$lap2_nota_3_M4 = $lap2_row_datos_control_notasM4["nt_23"];
$lap2_nota_4_M4 = $lap2_row_datos_control_notasM4["nt_24"];
$lap2_nota_5_M4 = $lap2_row_datos_control_notasM4["nt_25"];
$lap2_nota_6_M4 = $lap2_row_datos_control_notasM4["nt_26"];
$lap2_nota_7_M4 = $lap2_row_datos_control_notasM4["nt_27"];
$lap2_notaAu_M4 = $lap2_row_datos_control_notasM4["nt_Au2"];


$lap2_nota_real_1_M4 = ($lap2_row_datos_control_notasM4["nt_21"] * $lap2_para_el_porc_V1_M4)/$el_puntaje_completo_es;
$lap2_nota_real_2_M4 = ($lap2_row_datos_control_notasM4["nt_22"] * $lap2_para_el_porc_V2_M4)/$el_puntaje_completo_es;
$lap2_nota_real_3_M4 = ($lap2_row_datos_control_notasM4["nt_23"] * $lap2_para_el_porc_V3_M4)/$el_puntaje_completo_es;
$lap2_nota_real_4_M4 = ($lap2_row_datos_control_notasM4["nt_24"] * $lap2_para_el_porc_V4_M4)/$el_puntaje_completo_es;
$lap2_nota_real_5_M4 = ($lap2_row_datos_control_notasM4["nt_25"] * $lap2_para_el_porc_V5_M4)/$el_puntaje_completo_es;
$lap2_nota_real_6_M4 = ($lap2_row_datos_control_notasM4["nt_26"] * $lap2_para_el_porc_V6_M4)/$el_puntaje_completo_es;
$lap2_nota_real_7_M4 = ($lap2_row_datos_control_notasM4["nt_27"] * $lap2_para_el_porc_V7_M4)/$el_puntaje_completo_es;

$lap2_total_seven_M4 = $lap2_nota_real_1_M4+$lap2_nota_real_2_M4+$lap2_nota_real_3_M4+$lap2_nota_real_4_M4+$lap2_nota_real_5_M4+$lap2_nota_real_6_M4+$lap2_nota_real_7_M4;

$lap2_total_seven_con_Au_M4 = $lap2_total_seven_M4+ $lap2_row_datos_control_notasM4["nt_Au2"];

$lap2_total_seven_con_Au_redon_M4_redondeado1 =number_format($lap2_total_seven_con_Au_M4, 1, '.', '');

$lap2_total_seven_con_Au_redon_M4 =number_format($lap2_total_seven_con_Au_redon_M4_redondeado1);



$lap2_nota_1_M5 = $lap2_row_datos_control_notasM5["nt_21"];
$lap2_nota_2_M5 = $lap2_row_datos_control_notasM5["nt_22"];
$lap2_nota_3_M5 = $lap2_row_datos_control_notasM5["nt_23"];
$lap2_nota_4_M5 = $lap2_row_datos_control_notasM5["nt_24"];
$lap2_nota_5_M5 = $lap2_row_datos_control_notasM5["nt_25"];
$lap2_nota_6_M5 = $lap2_row_datos_control_notasM5["nt_26"];
$lap2_nota_7_M5 = $lap2_row_datos_control_notasM5["nt_27"];
$lap2_notaAu_M5 = $lap2_row_datos_control_notasM5["nt_Au2"];


$lap2_nota_real_1_M5 = ($lap2_row_datos_control_notasM5["nt_21"] * $lap2_para_el_porc_V1_M5)/$el_puntaje_completo_es;
$lap2_nota_real_2_M5 = ($lap2_row_datos_control_notasM5["nt_22"] * $lap2_para_el_porc_V2_M5)/$el_puntaje_completo_es;
$lap2_nota_real_3_M5 = ($lap2_row_datos_control_notasM5["nt_23"] * $lap2_para_el_porc_V3_M5)/$el_puntaje_completo_es;
$lap2_nota_real_4_M5 = ($lap2_row_datos_control_notasM5["nt_24"] * $lap2_para_el_porc_V4_M5)/$el_puntaje_completo_es;
$lap2_nota_real_5_M5 = ($lap2_row_datos_control_notasM5["nt_25"] * $lap2_para_el_porc_V5_M5)/$el_puntaje_completo_es;
$lap2_nota_real_6_M5 = ($lap2_row_datos_control_notasM5["nt_26"] * $lap2_para_el_porc_V6_M5)/$el_puntaje_completo_es;
$lap2_nota_real_7_M5 = ($lap2_row_datos_control_notasM5["nt_27"] * $lap2_para_el_porc_V7_M5)/$el_puntaje_completo_es;

$lap2_total_seven_M5 = $lap2_nota_real_1_M5+$lap2_nota_real_2_M5+$lap2_nota_real_3_M5+$lap2_nota_real_4_M5+$lap2_nota_real_5_M5+$lap2_nota_real_6_M5+$lap2_nota_real_7_M5;

$lap2_total_seven_con_Au_M5 = $lap2_total_seven_M5+ $lap2_row_datos_control_notasM5["nt_Au2"];

$lap2_total_seven_con_Au_redon_M5_redondeado1 =number_format($lap2_total_seven_con_Au_M5, 1, '.', '');

$lap2_total_seven_con_Au_redon_M5 =number_format($lap2_total_seven_con_Au_redon_M5_redondeado1);



$lap2_nota_1_M6 = $lap2_row_datos_control_notasM6["nt_21"];
$lap2_nota_2_M6 = $lap2_row_datos_control_notasM6["nt_22"];
$lap2_nota_3_M6 = $lap2_row_datos_control_notasM6["nt_23"];
$lap2_nota_4_M6 = $lap2_row_datos_control_notasM6["nt_24"];
$lap2_nota_5_M6 = $lap2_row_datos_control_notasM6["nt_25"];
$lap2_nota_6_M6 = $lap2_row_datos_control_notasM6["nt_26"];
$lap2_nota_7_M6 = $lap2_row_datos_control_notasM6["nt_27"];
$lap2_notaAu_M6 = $lap2_row_datos_control_notasM6["nt_Au2"];


$lap2_nota_real_1_M6 = ($lap2_row_datos_control_notasM6["nt_21"] * $lap2_para_el_porc_V1_M6)/$el_puntaje_completo_es;
$lap2_nota_real_2_M6 = ($lap2_row_datos_control_notasM6["nt_22"] * $lap2_para_el_porc_V2_M6)/$el_puntaje_completo_es;
$lap2_nota_real_3_M6 = ($lap2_row_datos_control_notasM6["nt_23"] * $lap2_para_el_porc_V3_M6)/$el_puntaje_completo_es;
$lap2_nota_real_4_M6 = ($lap2_row_datos_control_notasM6["nt_24"] * $lap2_para_el_porc_V4_M6)/$el_puntaje_completo_es;
$lap2_nota_real_5_M6 = ($lap2_row_datos_control_notasM6["nt_25"] * $lap2_para_el_porc_V5_M6)/$el_puntaje_completo_es;
$lap2_nota_real_6_M6 = ($lap2_row_datos_control_notasM6["nt_26"] * $lap2_para_el_porc_V6_M6)/$el_puntaje_completo_es;
$lap2_nota_real_7_M6 = ($lap2_row_datos_control_notasM6["nt_27"] * $lap2_para_el_porc_V7_M6)/$el_puntaje_completo_es;

$lap2_total_seven_M6 = $lap2_nota_real_1_M6+$lap2_nota_real_2_M6+$lap2_nota_real_3_M6+$lap2_nota_real_4_M6+$lap2_nota_real_5_M6+$lap2_nota_real_6_M6+$lap2_nota_real_7_M6;

$lap2_total_seven_con_Au_M6 = $lap2_total_seven_M6+ $lap2_row_datos_control_notasM6["nt_Au2"];

$lap2_total_seven_con_Au_redon_M6_redondeado1 =number_format($lap2_total_seven_con_Au_M6, 1, '.', '');

$lap2_total_seven_con_Au_redon_M6 =number_format($lap2_total_seven_con_Au_redon_M6_redondeado1);



$lap2_nota_1_M7 = $lap2_row_datos_control_notasM7["nt_21"];
$lap2_nota_2_M7 = $lap2_row_datos_control_notasM7["nt_22"];
$lap2_nota_3_M7 = $lap2_row_datos_control_notasM7["nt_23"];
$lap2_nota_4_M7 = $lap2_row_datos_control_notasM7["nt_24"];
$lap2_nota_5_M7 = $lap2_row_datos_control_notasM7["nt_25"];
$lap2_nota_6_M7 = $lap2_row_datos_control_notasM7["nt_26"];
$lap2_nota_7_M7 = $lap2_row_datos_control_notasM7["nt_27"];
$lap2_notaAu_M7 = $lap2_row_datos_control_notasM7["nt_Au2"];


$lap2_nota_real_1_M7 = ($lap2_row_datos_control_notasM7["nt_21"] * $lap2_para_el_porc_V1_M7)/$el_puntaje_completo_es;
$lap2_nota_real_2_M7 = ($lap2_row_datos_control_notasM7["nt_22"] * $lap2_para_el_porc_V2_M7)/$el_puntaje_completo_es;
$lap2_nota_real_3_M7 = ($lap2_row_datos_control_notasM7["nt_23"] * $lap2_para_el_porc_V3_M7)/$el_puntaje_completo_es;
$lap2_nota_real_4_M7 = ($lap2_row_datos_control_notasM7["nt_24"] * $lap2_para_el_porc_V4_M7)/$el_puntaje_completo_es;
$lap2_nota_real_5_M7 = ($lap2_row_datos_control_notasM7["nt_25"] * $lap2_para_el_porc_V5_M7)/$el_puntaje_completo_es;
$lap2_nota_real_6_M7 = ($lap2_row_datos_control_notasM7["nt_26"] * $lap2_para_el_porc_V6_M7)/$el_puntaje_completo_es;
$lap2_nota_real_7_M7 = ($lap2_row_datos_control_notasM7["nt_27"] * $lap2_para_el_porc_V7_M7)/$el_puntaje_completo_es;

$lap2_total_seven_M7 = $lap2_nota_real_1_M7+$lap2_nota_real_2_M7+$lap2_nota_real_3_M7+$lap2_nota_real_4_M7+$lap2_nota_real_5_M7+$lap2_nota_real_6_M7+$lap2_nota_real_7_M7;

$lap2_total_seven_con_Au_M7 = $lap2_total_seven_M7+ $lap2_row_datos_control_notasM7["nt_Au2"];

$lap2_total_seven_con_Au_redon_M7_redondeado1 =number_format($lap2_total_seven_con_Au_M7, 1, '.', '');

$lap2_total_seven_con_Au_redon_M7 =number_format($lap2_total_seven_con_Au_redon_M7_redondeado1);




$lap2_nota_1_M8 = $lap2_row_datos_control_notasM8["nt_21"];
$lap2_nota_2_M8 = $lap2_row_datos_control_notasM8["nt_22"];
$lap2_nota_3_M8 = $lap2_row_datos_control_notasM8["nt_23"];
$lap2_nota_4_M8 = $lap2_row_datos_control_notasM8["nt_24"];
$lap2_nota_5_M8 = $lap2_row_datos_control_notasM8["nt_25"];
$lap2_nota_6_M8 = $lap2_row_datos_control_notasM8["nt_26"];
$lap2_nota_7_M8 = $lap2_row_datos_control_notasM8["nt_27"];
$lap2_notaAu_M8 = $lap2_row_datos_control_notasM8["nt_Au2"];


$lap2_nota_real_1_M8 = ($lap2_row_datos_control_notasM8["nt_21"] * $lap2_para_el_porc_V1_M8)/$el_puntaje_completo_es;
$lap2_nota_real_2_M8 = ($lap2_row_datos_control_notasM8["nt_22"] * $lap2_para_el_porc_V2_M8)/$el_puntaje_completo_es;
$lap2_nota_real_3_M8 = ($lap2_row_datos_control_notasM8["nt_23"] * $lap2_para_el_porc_V3_M8)/$el_puntaje_completo_es;
$lap2_nota_real_4_M8 = ($lap2_row_datos_control_notasM8["nt_24"] * $lap2_para_el_porc_V4_M8)/$el_puntaje_completo_es;
$lap2_nota_real_5_M8 = ($lap2_row_datos_control_notasM8["nt_25"] * $lap2_para_el_porc_V5_M8)/$el_puntaje_completo_es;
$lap2_nota_real_6_M8 = ($lap2_row_datos_control_notasM8["nt_26"] * $lap2_para_el_porc_V6_M8)/$el_puntaje_completo_es;
$lap2_nota_real_7_M8 = ($lap2_row_datos_control_notasM8["nt_27"] * $lap2_para_el_porc_V7_M8)/$el_puntaje_completo_es;

$lap2_total_seven_M8 = $lap2_nota_real_1_M8+$lap2_nota_real_2_M8+$lap2_nota_real_3_M8+$lap2_nota_real_4_M8+$lap2_nota_real_5_M8+$lap2_nota_real_6_M8+$lap2_nota_real_7_M8;

$lap2_total_seven_con_Au_M8 = $lap2_total_seven_M8+ $lap2_row_datos_control_notasM8["nt_Au2"];

$lap2_total_seven_con_Au_redon_M8_redondeado1 =number_format($lap2_total_seven_con_Au_M8, 1, '.', '');

$lap2_total_seven_con_Au_redon_M8 =number_format($lap2_total_seven_con_Au_redon_M8_redondeado1);




$lap2_nota_1_M9 = $lap2_row_datos_control_notasM9["nt_21"];
$lap2_nota_2_M9 = $lap2_row_datos_control_notasM9["nt_22"];
$lap2_nota_3_M9 = $lap2_row_datos_control_notasM9["nt_23"];
$lap2_nota_4_M9 = $lap2_row_datos_control_notasM9["nt_24"];
$lap2_nota_5_M9 = $lap2_row_datos_control_notasM9["nt_25"];
$lap2_nota_6_M9 = $lap2_row_datos_control_notasM9["nt_26"];
$lap2_nota_7_M9 = $lap2_row_datos_control_notasM9["nt_27"];
$lap2_notaAu_M9 = $lap2_row_datos_control_notasM9["nt_Au2"];


$lap2_nota_real_1_M9 = ($lap2_row_datos_control_notasM9["nt_21"] * $lap2_para_el_porc_V1_M9)/$el_puntaje_completo_es;
$lap2_nota_real_2_M9 = ($lap2_row_datos_control_notasM9["nt_22"] * $lap2_para_el_porc_V2_M9)/$el_puntaje_completo_es;
$lap2_nota_real_3_M9 = ($lap2_row_datos_control_notasM9["nt_23"] * $lap2_para_el_porc_V3_M9)/$el_puntaje_completo_es;
$lap2_nota_real_4_M9 = ($lap2_row_datos_control_notasM9["nt_24"] * $lap2_para_el_porc_V4_M9)/$el_puntaje_completo_es;
$lap2_nota_real_5_M9 = ($lap2_row_datos_control_notasM9["nt_25"] * $lap2_para_el_porc_V5_M9)/$el_puntaje_completo_es;
$lap2_nota_real_6_M9 = ($lap2_row_datos_control_notasM9["nt_26"] * $lap2_para_el_porc_V6_M9)/$el_puntaje_completo_es;
$lap2_nota_real_7_M9 = ($lap2_row_datos_control_notasM9["nt_27"] * $lap2_para_el_porc_V7_M9)/$el_puntaje_completo_es;

$lap2_total_seven_M9 = $lap2_nota_real_1_M9+$lap2_nota_real_2_M9+$lap2_nota_real_3_M9+$lap2_nota_real_4_M9+$lap2_nota_real_5_M9+$lap2_nota_real_6_M9+$lap2_nota_real_7_M9;

$lap2_total_seven_con_Au_M9 = $lap2_total_seven_M9+ $lap2_row_datos_control_notasM9["nt_Au2"];

$lap2_total_seven_con_Au_redon_M9_redondeado1 =number_format($lap2_total_seven_con_Au_M9, 1, '.', '');

$lap2_total_seven_con_Au_redon_M9 =number_format($lap2_total_seven_con_Au_redon_M9_redondeado1);



$lap2_nota_1_M10 = $lap2_row_datos_control_notasM10["nt_21"];
$lap2_nota_2_M10 = $lap2_row_datos_control_notasM10["nt_22"];
$lap2_nota_3_M10 = $lap2_row_datos_control_notasM10["nt_23"];
$lap2_nota_4_M10 = $lap2_row_datos_control_notasM10["nt_24"];
$lap2_nota_5_M10 = $lap2_row_datos_control_notasM10["nt_25"];
$lap2_nota_6_M10 = $lap2_row_datos_control_notasM10["nt_26"];
$lap2_nota_7_M10 = $lap2_row_datos_control_notasM10["nt_27"];
$lap2_notaAu_M10 = $lap2_row_datos_control_notasM10["nt_Au2"];


$lap2_nota_real_1_M10 = ($lap2_row_datos_control_notasM10["nt_21"] * $lap2_para_el_porc_V1_M10)/$el_puntaje_completo_es;
$lap2_nota_real_2_M10 = ($lap2_row_datos_control_notasM10["nt_22"] * $lap2_para_el_porc_V2_M10)/$el_puntaje_completo_es;
$lap2_nota_real_3_M10 = ($lap2_row_datos_control_notasM10["nt_23"] * $lap2_para_el_porc_V3_M10)/$el_puntaje_completo_es;
$lap2_nota_real_4_M10 = ($lap2_row_datos_control_notasM10["nt_24"] * $lap2_para_el_porc_V4_M10)/$el_puntaje_completo_es;
$lap2_nota_real_5_M10 = ($lap2_row_datos_control_notasM10["nt_25"] * $lap2_para_el_porc_V5_M10)/$el_puntaje_completo_es;
$lap2_nota_real_6_M10 = ($lap2_row_datos_control_notasM10["nt_26"] * $lap2_para_el_porc_V6_M10)/$el_puntaje_completo_es;
$lap2_nota_real_7_M10 = ($lap2_row_datos_control_notasM10["nt_27"] * $lap2_para_el_porc_V7_M10)/$el_puntaje_completo_es;

$lap2_total_seven_M10 = $lap2_nota_real_1_M10+$lap2_nota_real_2_M10+$lap2_nota_real_3_M10+$lap2_nota_real_4_M10+$lap2_nota_real_5_M10+$lap2_nota_real_6_M10+$lap2_nota_real_7_M10;

$lap2_total_seven_con_Au_M10 = $lap2_total_seven_M10+ $lap2_row_datos_control_notasM10["nt_Au2"];

$lap2_total_seven_con_Au_redon_M10_redondeado1 =number_format($lap2_total_seven_con_Au_M10, 1, '.', '');

$lap2_total_seven_con_Au_redon_M10 =number_format($lap2_total_seven_con_Au_redon_M10_redondeado1);



$lap2_nota_1_M11 = $lap2_row_datos_control_notasM11["nt_21"];
$lap2_nota_2_M11 = $lap2_row_datos_control_notasM11["nt_22"];
$lap2_nota_3_M11 = $lap2_row_datos_control_notasM11["nt_23"];
$lap2_nota_4_M11 = $lap2_row_datos_control_notasM11["nt_24"];
$lap2_nota_5_M11 = $lap2_row_datos_control_notasM11["nt_25"];
$lap2_nota_6_M11 = $lap2_row_datos_control_notasM11["nt_26"];
$lap2_nota_7_M11 = $lap2_row_datos_control_notasM11["nt_27"];
$lap2_notaAu_M11 = $lap2_row_datos_control_notasM11["nt_Au2"];


$lap2_nota_real_1_M11 = ($lap2_row_datos_control_notasM11["nt_21"] * $lap2_para_el_porc_V1_M11)/$el_puntaje_completo_es;
$lap2_nota_real_2_M11 = ($lap2_row_datos_control_notasM11["nt_22"] * $lap2_para_el_porc_V2_M11)/$el_puntaje_completo_es;
$lap2_nota_real_3_M11 = ($lap2_row_datos_control_notasM11["nt_23"] * $lap2_para_el_porc_V3_M11)/$el_puntaje_completo_es;
$lap2_nota_real_4_M11 = ($lap2_row_datos_control_notasM11["nt_24"] * $lap2_para_el_porc_V4_M11)/$el_puntaje_completo_es;
$lap2_nota_real_5_M11 = ($lap2_row_datos_control_notasM11["nt_25"] * $lap2_para_el_porc_V5_M11)/$el_puntaje_completo_es;
$lap2_nota_real_6_M11 = ($lap2_row_datos_control_notasM11["nt_26"] * $lap2_para_el_porc_V6_M11)/$el_puntaje_completo_es;
$lap2_nota_real_7_M11 = ($lap2_row_datos_control_notasM11["nt_27"] * $lap2_para_el_porc_V7_M11)/$el_puntaje_completo_es;

$lap2_total_seven_M11 = $lap2_nota_real_1_M11+$lap2_nota_real_2_M11+$lap2_nota_real_3_M11+$lap2_nota_real_4_M11+$lap2_nota_real_5_M11+$lap2_nota_real_6_M11+$lap2_nota_real_7_M11;

$lap2_total_seven_con_Au_M11 = $lap2_total_seven_M11+ $lap2_row_datos_control_notasM11["nt_Au2"];

$lap2_total_seven_con_Au_redon_M11_redondeado1 =number_format($lap2_total_seven_con_Au_M11, 1, '.', '');

$lap2_total_seven_con_Au_redon_M11 =number_format($lap2_total_seven_con_Au_redon_M11_redondeado1);



$lap2_nota_1_M12 = $lap2_row_datos_control_notasM12["nt_21"];
$lap2_nota_2_M12 = $lap2_row_datos_control_notasM12["nt_22"];
$lap2_nota_3_M12 = $lap2_row_datos_control_notasM12["nt_23"];
$lap2_nota_4_M12 = $lap2_row_datos_control_notasM12["nt_24"];
$lap2_nota_5_M12 = $lap2_row_datos_control_notasM12["nt_25"];
$lap2_nota_6_M12 = $lap2_row_datos_control_notasM12["nt_26"];
$lap2_nota_7_M12 = $lap2_row_datos_control_notasM12["nt_27"];
$lap2_notaAu_M12 = $lap2_row_datos_control_notasM12["nt_Au2"];


$lap2_nota_real_1_M12 = ($lap2_row_datos_control_notasM12["nt_21"] * $lap2_para_el_porc_V1_M12)/$el_puntaje_completo_es;
$lap2_nota_real_2_M12 = ($lap2_row_datos_control_notasM12["nt_22"] * $lap2_para_el_porc_V2_M12)/$el_puntaje_completo_es;
$lap2_nota_real_3_M12 = ($lap2_row_datos_control_notasM12["nt_23"] * $lap2_para_el_porc_V3_M12)/$el_puntaje_completo_es;
$lap2_nota_real_4_M12 = ($lap2_row_datos_control_notasM12["nt_24"] * $lap2_para_el_porc_V4_M12)/$el_puntaje_completo_es;
$lap2_nota_real_5_M12 = ($lap2_row_datos_control_notasM12["nt_25"] * $lap2_para_el_porc_V5_M12)/$el_puntaje_completo_es;
$lap2_nota_real_6_M12 = ($lap2_row_datos_control_notasM12["nt_26"] * $lap2_para_el_porc_V6_M12)/$el_puntaje_completo_es;
$lap2_nota_real_7_M12 = ($lap2_row_datos_control_notasM12["nt_27"] * $lap2_para_el_porc_V7_M12)/$el_puntaje_completo_es;

$lap2_total_seven_M12 = $lap2_nota_real_1_M12+$lap2_nota_real_2_M12+$lap2_nota_real_3_M12+$lap2_nota_real_4_M12+$lap2_nota_real_5_M12+$lap2_nota_real_6_M12+$lap2_nota_real_7_M12;

$lap2_total_seven_con_Au_M12 = $lap2_total_seven_M12+ $lap2_row_datos_control_notasM12["nt_Au2"];

$lap2_total_seven_con_Au_redon_M12_redondeado1 =number_format($lap2_total_seven_con_Au_M12, 1, '.', '');

$lap2_total_seven_con_Au_redon_M12 =number_format($lap2_total_seven_con_Au_redon_M12_redondeado1);



$lap2_nota_1_M13 = $lap2_row_datos_control_notasM13["nt_21"];
$lap2_nota_2_M13 = $lap2_row_datos_control_notasM13["nt_22"];
$lap2_nota_3_M13 = $lap2_row_datos_control_notasM13["nt_23"];
$lap2_nota_4_M13 = $lap2_row_datos_control_notasM13["nt_24"];
$lap2_nota_5_M13 = $lap2_row_datos_control_notasM13["nt_25"];
$lap2_nota_6_M13 = $lap2_row_datos_control_notasM13["nt_26"];
$lap2_nota_7_M13 = $lap2_row_datos_control_notasM13["nt_27"];
$lap2_notaAu_M13 = $lap2_row_datos_control_notasM13["nt_Au2"];


$lap2_nota_real_1_M13 = ($lap2_row_datos_control_notasM13["nt_21"] * $lap2_para_el_porc_V1_M13)/$el_puntaje_completo_es;
$lap2_nota_real_2_M13 = ($lap2_row_datos_control_notasM13["nt_22"] * $lap2_para_el_porc_V2_M13)/$el_puntaje_completo_es;
$lap2_nota_real_3_M13 = ($lap2_row_datos_control_notasM13["nt_23"] * $lap2_para_el_porc_V3_M13)/$el_puntaje_completo_es;
$lap2_nota_real_4_M13 = ($lap2_row_datos_control_notasM13["nt_24"] * $lap2_para_el_porc_V4_M13)/$el_puntaje_completo_es;
$lap2_nota_real_5_M13 = ($lap2_row_datos_control_notasM13["nt_25"] * $lap2_para_el_porc_V5_M13)/$el_puntaje_completo_es;
$lap2_nota_real_6_M13 = ($lap2_row_datos_control_notasM13["nt_26"] * $lap2_para_el_porc_V6_M13)/$el_puntaje_completo_es;
$lap2_nota_real_7_M13 = ($lap2_row_datos_control_notasM13["nt_27"] * $lap2_para_el_porc_V7_M13)/$el_puntaje_completo_es;

$lap2_total_seven_M13 = $lap2_nota_real_1_M13+$lap2_nota_real_2_M13+$lap2_nota_real_3_M13+$lap2_nota_real_4_M13+$lap2_nota_real_5_M13+$lap2_nota_real_6_M13+$lap2_nota_real_7_M13;

$lap2_total_seven_con_Au_M13 = $lap2_total_seven_M13+ $lap2_row_datos_control_notasM13["nt_Au2"];

$lap2_total_seven_con_Au_redon_M13_redondeado1 =number_format($lap2_total_seven_con_Au_M13, 1, '.', '');

$lap2_total_seven_con_Au_redon_M13 =number_format($lap2_total_seven_con_Au_redon_M13_redondeado1);



$lap2_nota_1_M14 = $lap2_row_datos_control_notasM14["nt_21"];
$lap2_nota_2_M14 = $lap2_row_datos_control_notasM14["nt_22"];
$lap2_nota_3_M14 = $lap2_row_datos_control_notasM14["nt_23"];
$lap2_nota_4_M14 = $lap2_row_datos_control_notasM14["nt_24"];
$lap2_nota_5_M14 = $lap2_row_datos_control_notasM14["nt_25"];
$lap2_nota_6_M14 = $lap2_row_datos_control_notasM14["nt_26"];
$lap2_nota_7_M14 = $lap2_row_datos_control_notasM14["nt_27"];
$lap2_notaAu_M14 = $lap2_row_datos_control_notasM14["nt_Au2"];


$lap2_nota_real_1_M14 = ($lap2_row_datos_control_notasM14["nt_21"] * $lap2_para_el_porc_V1_M14)/$el_puntaje_completo_es;
$lap2_nota_real_2_M14 = ($lap2_row_datos_control_notasM14["nt_22"] * $lap2_para_el_porc_V2_M14)/$el_puntaje_completo_es;
$lap2_nota_real_3_M14 = ($lap2_row_datos_control_notasM14["nt_23"] * $lap2_para_el_porc_V3_M14)/$el_puntaje_completo_es;
$lap2_nota_real_4_M14 = ($lap2_row_datos_control_notasM14["nt_24"] * $lap2_para_el_porc_V4_M14)/$el_puntaje_completo_es;
$lap2_nota_real_5_M14 = ($lap2_row_datos_control_notasM14["nt_25"] * $lap2_para_el_porc_V5_M14)/$el_puntaje_completo_es;
$lap2_nota_real_6_M14 = ($lap2_row_datos_control_notasM14["nt_26"] * $lap2_para_el_porc_V6_M14)/$el_puntaje_completo_es;
$lap2_nota_real_7_M14 = ($lap2_row_datos_control_notasM14["nt_27"] * $lap2_para_el_porc_V7_M14)/$el_puntaje_completo_es;

$lap2_total_seven_M14 = $lap2_nota_real_1_M14+$lap2_nota_real_2_M14+$lap2_nota_real_3_M14+$lap2_nota_real_4_M14+$lap2_nota_real_5_M14+$lap2_nota_real_6_M14+$lap2_nota_real_7_M14;

$lap2_total_seven_con_Au_M14 = $lap2_total_seven_M14+ $lap2_row_datos_control_notasM14["nt_Au2"];

$lap2_total_seven_con_Au_redon_M14_redondeado1 =number_format($lap2_total_seven_con_Au_M14, 1, '.', '');

$lap2_total_seven_con_Au_redon_M14 =number_format($lap2_total_seven_con_Au_redon_M14_redondeado1);




?>




<?php

     $lap2_cuenta_personal ='0';

     $lap2_suma_personal = '';
     $lap2_entre_cuanto = '';
     $lap2_color_a = $lap2_color_imp2;
   
     $lap2_marquitaper ='';
     $lap2_total_seven_con_Au_redon_M1a = '';

     if ($lap2_total_seven_con_Au_M1 >= 0.1 and $lap2_total_seven_con_Au_redon_M1 <= $el_puntaje_aprobatorio_prom) {
      $lap2_cuenta_personal = $lap2_cuenta_personal + 1;
      $lap2_color_a = red;
      $lap2_apla_mat1 = $lap2_apla_mat1 + 1;
    } 


     if ($lap2_total_seven_con_Au_M1 == 0) {
      $lap2_total_seven_con_Au_redon_M1a = '';
    } 


    if ($lap2_total_seven_con_Au_M1 >= 0.1 and $lap2_total_seven_con_Au_M1 <=0.9) {
      $lap2_total_seven_con_Au_redon_M1a = $lap2_total_seven_con_Au_redon_M1;  

        $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M1a;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;       

    } 





    if ($lap2_total_seven_con_Au_redon_M1 >= 1) {
      $lap2_total_seven_con_Au_redon_M1a = $lap2_total_seven_con_Au_redon_M1;
      $lap2_tot_mat1 = $lap2_tot_mat1 + $lap2_total_seven_con_Au_redon_M1a;
      $lap2_div_mat1 = $lap2_div_mat1 + 1;

  $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M1a;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;   

    } 

  
 ?>   


 <?php

     $lap2_color_a = $lap2_color_imp2;

     $lap2_marquitaper ='';
     $lap2_total_seven_con_Au_redon_M22 = '';

     if ($lap2_total_seven_con_Au_M2 >= 0.1 and $lap2_total_seven_con_Au_redon_M2 <= $el_puntaje_aprobatorio_prom) {
      $lap2_cuenta_personal = $lap2_cuenta_personal + 1;
       $lap2_color_a = red;
       $lap2_apla_mat2 = $lap2_apla_mat2 + 1;
    } 


     if ($lap2_total_seven_con_Au_M2 == 0) {
      $lap2_total_seven_con_Au_redon_M22 = '';
    } 



    if ($lap2_total_seven_con_Au_M2 >= 0.1 and $lap2_total_seven_con_Au_M2 <=0.9) {
      $lap2_total_seven_con_Au_redon_M22 = $lap2_total_seven_con_Au_redon_M2;  

        $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M22;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;       

    } 





    if ($lap2_total_seven_con_Au_redon_M2 >= 1) {
      $lap2_total_seven_con_Au_redon_M22 = $lap2_total_seven_con_Au_redon_M2;

      $lap2_tot_mat2 = $lap2_tot_mat2 + $lap2_total_seven_con_Au_redon_M22;
      $lap2_div_mat2 = $lap2_div_mat2 + 1;

   $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M22;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;  


    } 

    ?>





    <?php

     $lap2_color_a = $lap2_color_imp2;

     $lap2_marquitaper ='';
     $lap2_total_seven_con_Au_redon_M33 = '';

     if ($lap2_total_seven_con_Au_M3 >= 0.1 and $lap2_total_seven_con_Au_redon_M3 <= $el_puntaje_aprobatorio_prom) {
      $lap2_cuenta_personal = $lap2_cuenta_personal + 1;
       $lap2_color_a = red;
       $lap2_apla_mat3 = $lap2_apla_mat3 + 1;
    } 


     if ($lap2_total_seven_con_Au_M3 == 0) {
      $lap2_total_seven_con_Au_redon_M33 = '';
    } 


    if ($lap2_total_seven_con_Au_M3 >= 0.1 and $lap2_total_seven_con_Au_M3 <=0.9) {
      $lap2_total_seven_con_Au_redon_M33 = $lap2_total_seven_con_Au_redon_M3;  

        $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M33;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;       

    } 



    if ($lap2_total_seven_con_Au_redon_M3 >= 1) {
      $lap2_total_seven_con_Au_redon_M33 = $lap2_total_seven_con_Au_redon_M3;

      $lap2_tot_mat3 = $lap2_tot_mat3 + $lap2_total_seven_con_Au_redon_M33;
      $lap2_div_mat3 = $lap2_div_mat3 + 1;

    $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M33;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;  


    } 

   ?>





   <?php

     $lap2_color_a = $lap2_color_imp2;

     $lap2_marquitaper ='';
     $lap2_total_seven_con_Au_redon_M44 = '';

     if ($lap2_total_seven_con_Au_M4 >= 0.1 and $lap2_total_seven_con_Au_redon_M4 <= $el_puntaje_aprobatorio_prom) {
      $lap2_cuenta_personal = $lap2_cuenta_personal + 1;
       $lap2_color_a = red;
       $lap2_apla_mat4 = $lap2_apla_mat4 + 1;
    } 


     if ($lap2_total_seven_con_Au_M4 == 0) {
      $lap2_total_seven_con_Au_redon_M44 = '';
    } 



    if ($lap2_total_seven_con_Au_M4 >= 0.1 and $lap2_total_seven_con_Au_M4 <=0.9) {
      $lap2_total_seven_con_Au_redon_M44 = $lap2_total_seven_con_Au_redon_M4;  

        $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M44;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;       

    } 




    if ($lap2_total_seven_con_Au_redon_M4 >= 1) {
      $lap2_total_seven_con_Au_redon_M44 = $lap2_total_seven_con_Au_redon_M4;

      $lap2_tot_mat4 = $lap2_tot_mat4 + $lap2_total_seven_con_Au_redon_M44;
      $lap2_div_mat4 = $lap2_div_mat4 + 1;

  $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M44;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;  

    } 

    ?>




    <?php

     $lap2_color_a = $lap2_color_imp2;

     $lap2_marquitaper ='';
     $lap2_total_seven_con_Au_redon_M55 = '';

     if ($lap2_total_seven_con_Au_M5 >= 0.1 and $lap2_total_seven_con_Au_redon_M5 <= $el_puntaje_aprobatorio_prom) {
      $lap2_cuenta_personal = $lap2_cuenta_personal + 1;
       $lap2_color_a = red;
       $lap2_apla_mat5 = $lap2_apla_mat5 + 1;
    } 


     if ($lap2_total_seven_con_Au_M5 == 0) {
      $lap2_total_seven_con_Au_redon_M55 = '';
    } 


    if ($lap2_total_seven_con_Au_M5 >= 0.1 and $lap2_total_seven_con_Au_M5 <=0.9) {
      $lap2_total_seven_con_Au_redon_M55 = $lap2_total_seven_con_Au_redon_M5;  

        $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M55;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;       

    } 




    if ($lap2_total_seven_con_Au_redon_M5 >= 1) {
      $lap2_total_seven_con_Au_redon_M55 = $lap2_total_seven_con_Au_redon_M5;

      $lap2_tot_mat5 = $lap2_tot_mat5 + $lap2_total_seven_con_Au_redon_M55;
      $lap2_div_mat5 = $lap2_div_mat5 + 1;

   $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M55;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;   


    } 

 ?>



 <?php

     $lap2_color_a = $lap2_color_imp2;

     $lap2_marquitaper ='';
     $lap2_total_seven_con_Au_redon_M66 = '';

     if ($lap2_total_seven_con_Au_M6 >= 0.1 and $lap2_total_seven_con_Au_redon_M6 <= $el_puntaje_aprobatorio_prom) {
      $lap2_cuenta_personal = $lap2_cuenta_personal + 1;
       $lap2_color_a = red;
       $lap2_apla_mat6 = $lap2_apla_mat6 + 1;
    } 


     if ($lap2_total_seven_con_Au_M6 == 0) {
      $lap2_total_seven_con_Au_redon_M66 = '';
    } 


    if ($lap2_total_seven_con_Au_M6 >= 0.1 and $lap2_total_seven_con_Au_M6 <=0.9) {
      $lap2_total_seven_con_Au_redon_M66 = $lap2_total_seven_con_Au_redon_M6;  

        $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M66;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;       

    } 




    if ($lap2_total_seven_con_Au_redon_M6 >= 1) {
      $lap2_total_seven_con_Au_redon_M66 = $lap2_total_seven_con_Au_redon_M6;

      $lap2_tot_mat6 = $lap2_tot_mat6 + $lap2_total_seven_con_Au_redon_M66;
      $lap2_div_mat6 = $lap2_div_mat6 + 1;

      $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M66;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;   

    } 

     ?>



     <?php

     $lap2_color_a = $lap2_color_imp2;

     $lap2_marquitaper ='';
     $lap2_total_seven_con_Au_redon_M77 = '';

     if ($lap2_total_seven_con_Au_M7 >= 0.1 and $lap2_total_seven_con_Au_redon_M7 <= $el_puntaje_aprobatorio_prom) {
      $lap2_cuenta_personal = $lap2_cuenta_personal + 1;
       $lap2_color_a = red;
       $lap2_apla_mat7 = $lap2_apla_mat7 + 1;
    } 


     if ($lap2_total_seven_con_Au_M7 == 0) {
      $lap2_total_seven_con_Au_redon_M77 = '';
    } 


    if ($lap2_total_seven_con_Au_M7 >= 0.1 and $lap2_total_seven_con_Au_M7 <=0.9) {
      $lap2_total_seven_con_Au_redon_M77 = $lap2_total_seven_con_Au_redon_M7;  

        $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M77;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;       

    } 



    if ($lap2_total_seven_con_Au_redon_M7 >= 1) {
      $lap2_total_seven_con_Au_redon_M77 = $lap2_total_seven_con_Au_redon_M7;

      $lap2_tot_mat7 = $lap2_tot_mat7 + $lap2_total_seven_con_Au_redon_M77;
      $lap2_div_mat7 = $lap2_div_mat7 + 1;

 $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M77;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;  
    } 

    ?>



    <?php

     $lap2_color_a = $lap2_color_imp2;

     $lap2_marquitaper ='';
     $lap2_total_seven_con_Au_redon_M88 = '';

     if ($lap2_total_seven_con_Au_M8 >= 0.1 and $lap2_total_seven_con_Au_redon_M8 <= $el_puntaje_aprobatorio_prom) {
      $lap2_cuenta_personal = $lap2_cuenta_personal + 1;
       $lap2_color_a = red;
       $lap2_apla_mat8 = $lap2_apla_mat8 + 1;
    } 


     if ($lap2_total_seven_con_Au_M8 == 0) {
      $lap2_total_seven_con_Au_redon_M88 = '';
    } 


    if ($lap2_total_seven_con_Au_M8 >= 0.1 and $lap2_total_seven_con_Au_M8 <=0.9) {
      $lap2_total_seven_con_Au_redon_M88 = $lap2_total_seven_con_Au_redon_M8;  

        $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M88;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;       

    } 




    if ($lap2_total_seven_con_Au_redon_M8 >= 1) {
      $lap2_total_seven_con_Au_redon_M88 = $lap2_total_seven_con_Au_redon_M8;

      $lap2_tot_mat8 = $lap2_tot_mat8 + $lap2_total_seven_con_Au_redon_M88;
      $lap2_div_mat8 = $lap2_div_mat8 + 1;

    $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M88;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;  

    } 

    ?>





    <?php

 $lap2_color_a = $lap2_color_imp2;

     $lap2_marquitaper ='';
     $lap2_total_seven_con_Au_redon_M99 = '';

     if ($lap2_total_seven_con_Au_M9 >= 0.1 and $lap2_total_seven_con_Au_redon_M9 <= $el_puntaje_aprobatorio_prom) {
      $lap2_cuenta_personal = $lap2_cuenta_personal + 1;
       $lap2_color_a = red;
       $lap2_apla_mat9 = $lap2_apla_mat9 + 1;
    } 


     if ($lap2_total_seven_con_Au_M9 == 0) {
      $lap2_total_seven_con_Au_redon_M99 = '';
    } 


    if ($lap2_total_seven_con_Au_M9 >= 0.1 and $lap2_total_seven_con_Au_M9 <=0.9) {
      $lap2_total_seven_con_Au_redon_M99 = $lap2_total_seven_con_Au_redon_M9;  

        $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M99;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;       

    } 




    if ($lap2_total_seven_con_Au_redon_M9 >= 1) {
      $lap2_total_seven_con_Au_redon_M99 = $lap2_total_seven_con_Au_redon_M9;

      $lap2_tot_mat9 = $lap2_tot_mat9 + $lap2_total_seven_con_Au_redon_M99;
      $lap2_div_mat9 = $lap2_div_mat9 + 1;

   $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M99;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;  

    } 

     ?>




     <?php

 $lap2_color_a = $lap2_color_imp2;

     $lap2_marquitaper ='';
     $lap2_total_seven_con_Au_redon_M100 = '';

     if ($lap2_total_seven_con_Au_M10 >= 0.1 and $lap2_total_seven_con_Au_redon_M10 <= $el_puntaje_aprobatorio_prom) {
      $lap2_cuenta_personal = $lap2_cuenta_personal + 1;
       $lap2_color_a = red;
       $lap2_apla_mat10 = $lap2_apla_mat10 + 1;
    } 


     if ($lap2_total_seven_con_Au_M10 == 0) {
      $lap2_total_seven_con_Au_redon_M100 = '';
    } 


    if ($lap2_total_seven_con_Au_M10 >= 0.1 and $lap2_total_seven_con_Au_M10 <=0.9) {
      $lap2_total_seven_con_Au_redon_M100 = $lap2_total_seven_con_Au_redon_M10;  

        $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M100;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;       

    } 





    if ($lap2_total_seven_con_Au_redon_M10 >= 1) {
      $lap2_total_seven_con_Au_redon_M100 = $lap2_total_seven_con_Au_redon_M10;

      $lap2_tot_mat10 = $lap2_tot_mat10 + $lap2_total_seven_con_Au_redon_M100;
      $lap2_div_mat10 = $lap2_div_mat10 + 1;

    $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M100;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;  

    } 

 ?>


 <?php

 $lap2_color_a = $lap2_color_imp2;

     $lap2_marquitaper ='';
     $lap2_total_seven_con_Au_redon_M110 = '';

     if ($lap2_total_seven_con_Au_M11 >= 0.1 and $lap2_total_seven_con_Au_redon_M11 <= $el_puntaje_aprobatorio_prom) {
      $lap2_cuenta_personal = $lap2_cuenta_personal + 1;
       $lap2_color_a = red;
       $lap2_apla_mat11 = $lap2_apla_mat11 + 1;
    } 


     if ($lap2_total_seven_con_Au_M11 == 0) {
      $lap2_total_seven_con_Au_redon_M110 = '';
    } 


    if ($lap2_total_seven_con_Au_M11 >= 0.1 and $lap2_total_seven_con_Au_M11 <=0.9) {
      $lap2_total_seven_con_Au_redon_M110 = $lap2_total_seven_con_Au_redon_M11;  

        $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M110;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;       

    } 




    if ($lap2_total_seven_con_Au_redon_M11 >= 1) {
      $lap2_total_seven_con_Au_redon_M110 = $lap2_total_seven_con_Au_redon_M11;

      $lap2_tot_mat11 = $lap2_tot_mat11 + $lap2_total_seven_con_Au_redon_M110;
      $lap2_div_mat11 = $lap2_div_mat11 + 1;

   $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M110;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;  

    } 

    ?>



    <?php

 $lap2_color_a = $lap2_color_imp2;

     $lap2_marquitaper ='';
     $lap2_total_seven_con_Au_redon_M120 = '';

     if ($lap2_total_seven_con_Au_M12 >= 0.1 and $lap2_total_seven_con_Au_redon_M12 <= $el_puntaje_aprobatorio_prom) {
      $lap2_cuenta_personal = $lap2_cuenta_personal + 1;
       $lap2_color_a = red;
       $lap2_apla_mat12 = $lap2_apla_mat12 + 1;
    } 


     if ($lap2_total_seven_con_Au_M12 == 0) {
      $lap2_total_seven_con_Au_redon_M120 = '';
    } 


    if ($lap2_total_seven_con_Au_M12 >= 0.1 and $lap2_total_seven_con_Au_M12 <=0.9) {
      $lap2_total_seven_con_Au_redon_M120 = $lap2_total_seven_con_Au_redon_M12;  

        $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M120;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;       

    } 


    if ($lap2_total_seven_con_Au_redon_M12 >= 1) {
      $lap2_total_seven_con_Au_redon_M120 = $lap2_total_seven_con_Au_redon_M12;

      $lap2_tot_mat12 = $lap2_tot_mat12 + $lap2_total_seven_con_Au_redon_M120;
      $lap2_div_mat12 = $lap2_div_mat12 + 1;

  $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M120;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;   

    } 

 ?>



 <?php

 $lap2_color_a = $lap2_color_imp2;

     $lap2_marquitaper ='';
     $lap2_total_seven_con_Au_redon_M130 = '';

     if ($lap2_total_seven_con_Au_M13 >= 0.1 and $lap2_total_seven_con_Au_redon_M13 <= $el_puntaje_aprobatorio_prom) {
      $lap2_cuenta_personal = $lap2_cuenta_personal + 1;
       $lap2_color_a = red;
       $lap2_apla_mat13 = $lap2_apla_mat13 + 1;
    } 


     if ($lap2_total_seven_con_Au_M13 == 0) {
      $lap2_total_seven_con_Au_redon_M130 = '';
    } 


    if ($lap2_total_seven_con_Au_M13 >= 0.1 and $lap2_total_seven_con_Au_M13 <=0.9) {
      $lap2_total_seven_con_Au_redon_M130 = $lap2_total_seven_con_Au_redon_M13;  

        $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M130;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;       

    } 


    if ($lap2_total_seven_con_Au_redon_M13 >= 1) {
      $lap2_total_seven_con_Au_redon_M130 = $lap2_total_seven_con_Au_redon_M13;

      $lap2_tot_mat13 = $lap2_tot_mat13 + $lap2_total_seven_con_Au_redon_M130;
      $lap2_div_mat13 = $lap2_div_mat13 + 1;


    $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M130;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;  

    } 

 ?>


 <?php

 $lap2_color_a = $lap2_color_imp2;

     $lap2_marquitaper ='';
     $lap2_total_seven_con_Au_redon_M140 = '';

     if ($lap2_total_seven_con_Au_M14 >= 0.1 and $lap2_total_seven_con_Au_redon_M14 <= $el_puntaje_aprobatorio_prom) {
      $lap2_cuenta_personal = $lap2_cuenta_personal + 1;
       $lap2_color_a = red;
       $lap2_apla_mat14 = $lap2_apla_mat14 + 1;
    } 


     if ($lap2_total_seven_con_Au_M14 == 0) {
      $lap2_total_seven_con_Au_redon_M140 = '';
    } 



    if ($lap2_total_seven_con_Au_M14 >= 0.1 and $lap2_total_seven_con_Au_M14 <=0.9) {
      $lap2_total_seven_con_Au_redon_M140 = $lap2_total_seven_con_Au_redon_M14;  

        $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M140;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;       

    } 




    if ($lap2_total_seven_con_Au_redon_M14 >= 1) {
      $lap2_total_seven_con_Au_redon_M140 = $lap2_total_seven_con_Au_redon_M14;

      $lap2_tot_mat14 = $lap2_tot_mat14 + $lap2_total_seven_con_Au_redon_M140;
      $lap2_div_mat14 = $lap2_div_mat14 + 1;

     $lap2_suma_personal = $lap2_suma_personal + $lap2_total_seven_con_Au_redon_M140;
      $lap2_entre_cuanto = $lap2_entre_cuanto + 1;  

    } 
 ?><?php 

      $lap2_el_promeee_es = $lap2_suma_personal/$lap2_entre_cuanto;

      $lap2_el_promeee_es_redon =number_format($lap2_el_promeee_es, 5, ',', '');  

         ?>


<?php
                }
                ?>








<?php

$lap3_id_seccionxxx = $_POST['id_seccionxxx'];
$lap3_id_cicloxxx = $_POST['id_cicloxxx'];
$lap3_id_gradoxxx = $_POST['id_gradoxxx'];

include("../../conectar.php");


$lap3_query = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$lap3_id_seccionxxx'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$lap3_id_cicloxxx'
         and  grados.id_grado = '$lap3_id_gradoxxx'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$lap3_datos_control = mysqli_query($enlace, $lap3_query) or die(mysqli_error());

$lap3_totalRows_datos_control = mysqli_num_rows($lap3_datos_control); 

$lap3_media =  ceil($lap3_totalRows_datos_control/2);

$lap3_centro = $lap3_media + 1;

    

mysqli_close($enlace);




while( $lap3_row_datos_control = mysqli_fetch_assoc($lap3_datos_control)){ 


?>









   <?php


$lap3_el_reg_del_est_es = $lap3_row_datos_control['id_reg_estu_actual'];

$lap3_el_dicho_id_e = $lap3_row_datos_control['id_estud'];


include("../../conectar.php");



$lap3_query_notas1 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap3_el_reg_del_est_es'
               and id_estud = '$lap3_el_dicho_id_e'
               and materia = 1
                       
               GROUP BY id_asign_notas limit 1" ;

$lap3_datos_control_notas1 = mysqli_query($enlace, $lap3_query_notas1) or die(mysqli_error());
$lap3_row_datos_control_notasM1 = mysqli_fetch_array($lap3_datos_control_notas1); 


$lap3_query_notas2 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap3_el_reg_del_est_es'
               and id_estud = '$lap3_el_dicho_id_e'
               and materia = 2
                       
               GROUP BY id_asign_notas limit 1" ;

$lap3_datos_control_notas2 = mysqli_query($enlace, $lap3_query_notas2) or die(mysqli_error());
$lap3_row_datos_control_notasM2 = mysqli_fetch_array($lap3_datos_control_notas2); 


$lap3_query_notas3 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap3_el_reg_del_est_es'
               and id_estud = '$lap3_el_dicho_id_e'
               and materia = 3
                       
               GROUP BY id_asign_notas limit 1" ;

$lap3_datos_control_notas3 = mysqli_query($enlace, $lap3_query_notas3) or die(mysqli_error());
$lap3_row_datos_control_notasM3 = mysqli_fetch_array($lap3_datos_control_notas3); 


$lap3_query_notas4 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap3_el_reg_del_est_es'
               and id_estud = '$lap3_el_dicho_id_e'
               and materia = 4
                       
               GROUP BY id_asign_notas limit 1" ;

$lap3_datos_control_notas4 = mysqli_query($enlace, $lap3_query_notas4) or die(mysqli_error());
$lap3_row_datos_control_notasM4 = mysqli_fetch_array($lap3_datos_control_notas4); 


$lap3_query_notas5 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap3_el_reg_del_est_es'
               and id_estud = '$lap3_el_dicho_id_e'
               and materia = 5
                       
               GROUP BY id_asign_notas limit 1" ;

$lap3_datos_control_notas5 = mysqli_query($enlace, $lap3_query_notas5) or die(mysqli_error());
$lap3_row_datos_control_notasM5 = mysqli_fetch_array($lap3_datos_control_notas5); 


$lap3_query_notas6 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap3_el_reg_del_est_es'
               and id_estud = '$lap3_el_dicho_id_e'
               and materia = 6
                       
               GROUP BY id_asign_notas limit 1" ;

$lap3_datos_control_notas6 = mysqli_query($enlace, $lap3_query_notas6) or die(mysqli_error());
$lap3_row_datos_control_notasM6 = mysqli_fetch_array($lap3_datos_control_notas6); 


$lap3_query_notas7 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap3_el_reg_del_est_es'
               and id_estud = '$lap3_el_dicho_id_e'
               and materia = 7
                       
               GROUP BY id_asign_notas limit 1" ;

$lap3_datos_control_notas7 = mysqli_query($enlace, $lap3_query_notas7) or die(mysqli_error());
$lap3_row_datos_control_notasM7 = mysqli_fetch_array($lap3_datos_control_notas7); 


$lap3_query_notas8 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap3_el_reg_del_est_es'
               and id_estud = '$lap3_el_dicho_id_e'
               and materia = 8
                       
               GROUP BY id_asign_notas limit 1" ;

$lap3_datos_control_notas8 = mysqli_query($enlace, $lap3_query_notas8) or die(mysqli_error());
$lap3_row_datos_control_notasM8 = mysqli_fetch_array($lap3_datos_control_notas8); 


$lap3_query_notas9 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap3_el_reg_del_est_es'
               and id_estud = '$lap3_el_dicho_id_e'
               and materia = 9
                       
               GROUP BY id_asign_notas limit 1" ;

$lap3_datos_control_notas9 = mysqli_query($enlace, $lap3_query_notas9) or die(mysqli_error());
$lap3_row_datos_control_notasM9 = mysqli_fetch_array($lap3_datos_control_notas9); 


$lap3_query_notas10 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap3_el_reg_del_est_es'
               and id_estud = '$lap3_el_dicho_id_e'
               and materia = 10
                       
               GROUP BY id_asign_notas limit 1" ;

$lap3_datos_control_notas10 = mysqli_query($enlace, $lap3_query_notas10) or die(mysqli_error());
$lap3_row_datos_control_notasM10 = mysqli_fetch_array($lap3_datos_control_notas10); 


$lap3_query_notas11 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap3_el_reg_del_est_es'
               and id_estud = '$lap3_el_dicho_id_e'
               and materia = 11
                       
               GROUP BY id_asign_notas limit 1" ;

$lap3_datos_control_notas11 = mysqli_query($enlace, $lap3_query_notas11) or die(mysqli_error());
$lap3_row_datos_control_notasM11 = mysqli_fetch_array($lap3_datos_control_notas11); 


$lap3_query_notas12 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap3_el_reg_del_est_es'
               and id_estud = '$lap3_el_dicho_id_e'
               and materia = 12
                       
               GROUP BY id_asign_notas limit 1" ;

$lap3_datos_control_notas12 = mysqli_query($enlace, $lap3_query_notas12) or die(mysqli_error());
$lap3_row_datos_control_notasM12 = mysqli_fetch_array($lap3_datos_control_notas12); 


$lap3_query_notas13 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap3_el_reg_del_est_es'
               and id_estud = '$lap3_el_dicho_id_e'
               and materia = 13
                       
               GROUP BY id_asign_notas limit 1" ;

$lap3_datos_control_notas13 = mysqli_query($enlace, $lap3_query_notas13) or die(mysqli_error());
$lap3_row_datos_control_notasM13 = mysqli_fetch_array($lap3_datos_control_notas13); 


$lap3_query_notas14 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap3_el_reg_del_est_es'
               and id_estud = '$lap3_el_dicho_id_e'
               and materia = 14
                       
               GROUP BY id_asign_notas limit 1" ;

$lap3_datos_control_notas14 = mysqli_query($enlace, $lap3_query_notas14) or die(mysqli_error());
$lap3_row_datos_control_notasM14 = mysqli_fetch_array($lap3_datos_control_notas14); 

 mysqli_close($enlace);

  
?>


<?php



$lap3_nota_1_M1 = $lap3_row_datos_control_notasM1["nt_31"];
$lap3_nota_2_M1 = $lap3_row_datos_control_notasM1["nt_32"];
$lap3_nota_3_M1 = $lap3_row_datos_control_notasM1["nt_33"];
$lap3_nota_4_M1 = $lap3_row_datos_control_notasM1["nt_34"];
$lap3_nota_5_M1 = $lap3_row_datos_control_notasM1["nt_35"];
$lap3_nota_6_M1 = $lap3_row_datos_control_notasM1["nt_36"];
$lap3_nota_7_M1 = $lap3_row_datos_control_notasM1["nt_37"];
$lap3_notaAu_M1 = $lap3_row_datos_control_notasM1["nt_Au3"];


$lap3_nota_real_1_M1 = ($lap3_row_datos_control_notasM1["nt_31"] * $lap3_para_el_porc_V1_M1)/$el_puntaje_completo_es;
$lap3_nota_real_2_M1 = ($lap3_row_datos_control_notasM1["nt_32"] * $lap3_para_el_porc_V2_M1)/$el_puntaje_completo_es;
$lap3_nota_real_3_M1 = ($lap3_row_datos_control_notasM1["nt_33"] * $lap3_para_el_porc_V3_M1)/$el_puntaje_completo_es;
$lap3_nota_real_4_M1 = ($lap3_row_datos_control_notasM1["nt_34"] * $lap3_para_el_porc_V4_M1)/$el_puntaje_completo_es;
$lap3_nota_real_5_M1 = ($lap3_row_datos_control_notasM1["nt_35"] * $lap3_para_el_porc_V5_M1)/$el_puntaje_completo_es;
$lap3_nota_real_6_M1 = ($lap3_row_datos_control_notasM1["nt_36"] * $lap3_para_el_porc_V6_M1)/$el_puntaje_completo_es;
$lap3_nota_real_7_M1 = ($lap3_row_datos_control_notasM1["nt_37"] * $lap3_para_el_porc_V7_M1)/$el_puntaje_completo_es;

$lap3_total_seven_M1 = $lap3_nota_real_1_M1+$lap3_nota_real_2_M1+$lap3_nota_real_3_M1+$lap3_nota_real_4_M1+$lap3_nota_real_5_M1+$lap3_nota_real_6_M1+$lap3_nota_real_7_M1;

$lap3_total_seven_con_Au_M1 = $lap3_total_seven_M1+ $lap3_row_datos_control_notasM1["nt_Au3"];

$lap3_total_seven_con_Au_redon_M1_redondeado1 =number_format($lap3_total_seven_con_Au_M1, 1, '.', '');

$lap3_total_seven_con_Au_redon_M1 =number_format($lap3_total_seven_con_Au_redon_M1_redondeado1);



$lap3_nota_1_M2 = $lap3_row_datos_control_notasM2["nt_31"];
$lap3_nota_2_M2 = $lap3_row_datos_control_notasM2["nt_32"];
$lap3_nota_3_M2 = $lap3_row_datos_control_notasM2["nt_33"];
$lap3_nota_4_M2 = $lap3_row_datos_control_notasM2["nt_34"];
$lap3_nota_5_M2 = $lap3_row_datos_control_notasM2["nt_35"];
$lap3_nota_6_M2 = $lap3_row_datos_control_notasM2["nt_36"];
$lap3_nota_7_M2 = $lap3_row_datos_control_notasM2["nt_37"];
$lap3_notaAu_M2 = $lap3_row_datos_control_notasM2["nt_Au3"];


$lap3_nota_real_1_M2 = ($lap3_row_datos_control_notasM2["nt_31"] * $lap3_para_el_porc_V1_M2)/$el_puntaje_completo_es;
$lap3_nota_real_2_M2 = ($lap3_row_datos_control_notasM2["nt_32"] * $lap3_para_el_porc_V2_M2)/$el_puntaje_completo_es;
$lap3_nota_real_3_M2 = ($lap3_row_datos_control_notasM2["nt_33"] * $lap3_para_el_porc_V3_M2)/$el_puntaje_completo_es;
$lap3_nota_real_4_M2 = ($lap3_row_datos_control_notasM2["nt_34"] * $lap3_para_el_porc_V4_M2)/$el_puntaje_completo_es;
$lap3_nota_real_5_M2 = ($lap3_row_datos_control_notasM2["nt_35"] * $lap3_para_el_porc_V5_M2)/$el_puntaje_completo_es;
$lap3_nota_real_6_M2 = ($lap3_row_datos_control_notasM2["nt_36"] * $lap3_para_el_porc_V6_M2)/$el_puntaje_completo_es;
$lap3_nota_real_7_M2 = ($lap3_row_datos_control_notasM2["nt_37"] * $lap3_para_el_porc_V7_M2)/$el_puntaje_completo_es;

$lap3_total_seven_M2 = $lap3_nota_real_1_M2+$lap3_nota_real_2_M2+$lap3_nota_real_3_M2+$lap3_nota_real_4_M2+$lap3_nota_real_5_M2+$lap3_nota_real_6_M2+$lap3_nota_real_7_M2;

$lap3_total_seven_con_Au_M2 = $lap3_total_seven_M2+ $lap3_row_datos_control_notasM2["nt_Au3"];

$lap3_total_seven_con_Au_redon_M2_redondeado1 =number_format($lap3_total_seven_con_Au_M2, 1, '.', '');

$lap3_total_seven_con_Au_redon_M2 =number_format($lap3_total_seven_con_Au_redon_M2_redondeado1);



$lap3_nota_1_M3 = $lap3_row_datos_control_notasM3["nt_31"];
$lap3_nota_2_M3 = $lap3_row_datos_control_notasM3["nt_32"];
$lap3_nota_3_M3 = $lap3_row_datos_control_notasM3["nt_33"];
$lap3_nota_4_M3 = $lap3_row_datos_control_notasM3["nt_34"];
$lap3_nota_5_M3 = $lap3_row_datos_control_notasM3["nt_35"];
$lap3_nota_6_M3 = $lap3_row_datos_control_notasM3["nt_36"];
$lap3_nota_7_M3 = $lap3_row_datos_control_notasM3["nt_37"];
$lap3_notaAu_M3 = $lap3_row_datos_control_notasM3["nt_Au3"];


$lap3_nota_real_1_M3 = ($lap3_row_datos_control_notasM3["nt_31"] * $lap3_para_el_porc_V1_M3)/$el_puntaje_completo_es;
$lap3_nota_real_2_M3 = ($lap3_row_datos_control_notasM3["nt_32"] * $lap3_para_el_porc_V2_M3)/$el_puntaje_completo_es;
$lap3_nota_real_3_M3 = ($lap3_row_datos_control_notasM3["nt_33"] * $lap3_para_el_porc_V3_M3)/$el_puntaje_completo_es;
$lap3_nota_real_4_M3 = ($lap3_row_datos_control_notasM3["nt_34"] * $lap3_para_el_porc_V4_M3)/$el_puntaje_completo_es;
$lap3_nota_real_5_M3 = ($lap3_row_datos_control_notasM3["nt_35"] * $lap3_para_el_porc_V5_M3)/$el_puntaje_completo_es;
$lap3_nota_real_6_M3 = ($lap3_row_datos_control_notasM3["nt_36"] * $lap3_para_el_porc_V6_M3)/$el_puntaje_completo_es;
$lap3_nota_real_7_M3 = ($lap3_row_datos_control_notasM3["nt_37"] * $lap3_para_el_porc_V7_M3)/$el_puntaje_completo_es;

$lap3_total_seven_M3 = $lap3_nota_real_1_M3+$lap3_nota_real_2_M3+$lap3_nota_real_3_M3+$lap3_nota_real_4_M3+$lap3_nota_real_5_M3+$lap3_nota_real_6_M3+$lap3_nota_real_7_M3;

$lap3_total_seven_con_Au_M3 = $lap3_total_seven_M3+ $lap3_row_datos_control_notasM3["nt_Au3"];

$lap3_total_seven_con_Au_redon_M3_redondeado1 =number_format($lap3_total_seven_con_Au_M3, 1, '.', '');

$lap3_total_seven_con_Au_redon_M3 =number_format($lap3_total_seven_con_Au_redon_M3_redondeado1);


$lap3_nota_1_M4 = $lap3_row_datos_control_notasM4["nt_31"];
$lap3_nota_2_M4 = $lap3_row_datos_control_notasM4["nt_32"];
$lap3_nota_3_M4 = $lap3_row_datos_control_notasM4["nt_33"];
$lap3_nota_4_M4 = $lap3_row_datos_control_notasM4["nt_34"];
$lap3_nota_5_M4 = $lap3_row_datos_control_notasM4["nt_35"];
$lap3_nota_6_M4 = $lap3_row_datos_control_notasM4["nt_36"];
$lap3_nota_7_M4 = $lap3_row_datos_control_notasM4["nt_37"];
$lap3_notaAu_M4 = $lap3_row_datos_control_notasM4["nt_Au3"];


$lap3_nota_real_1_M4 = ($lap3_row_datos_control_notasM4["nt_31"] * $lap3_para_el_porc_V1_M4)/$el_puntaje_completo_es;
$lap3_nota_real_2_M4 = ($lap3_row_datos_control_notasM4["nt_32"] * $lap3_para_el_porc_V2_M4)/$el_puntaje_completo_es;
$lap3_nota_real_3_M4 = ($lap3_row_datos_control_notasM4["nt_33"] * $lap3_para_el_porc_V3_M4)/$el_puntaje_completo_es;
$lap3_nota_real_4_M4 = ($lap3_row_datos_control_notasM4["nt_34"] * $lap3_para_el_porc_V4_M4)/$el_puntaje_completo_es;
$lap3_nota_real_5_M4 = ($lap3_row_datos_control_notasM4["nt_35"] * $lap3_para_el_porc_V5_M4)/$el_puntaje_completo_es;
$lap3_nota_real_6_M4 = ($lap3_row_datos_control_notasM4["nt_36"] * $lap3_para_el_porc_V6_M4)/$el_puntaje_completo_es;
$lap3_nota_real_7_M4 = ($lap3_row_datos_control_notasM4["nt_37"] * $lap3_para_el_porc_V7_M4)/$el_puntaje_completo_es;

$lap3_total_seven_M4 = $lap3_nota_real_1_M4+$lap3_nota_real_2_M4+$lap3_nota_real_3_M4+$lap3_nota_real_4_M4+$lap3_nota_real_5_M4+$lap3_nota_real_6_M4+$lap3_nota_real_7_M4;

$lap3_total_seven_con_Au_M4 = $lap3_total_seven_M4+ $lap3_row_datos_control_notasM4["nt_Au3"];

$lap3_total_seven_con_Au_redon_M4_redondeado1 =number_format($lap3_total_seven_con_Au_M4, 1, '.', '');

$lap3_total_seven_con_Au_redon_M4 =number_format($lap3_total_seven_con_Au_redon_M4_redondeado1);



$lap3_nota_1_M5 = $lap3_row_datos_control_notasM5["nt_31"];
$lap3_nota_2_M5 = $lap3_row_datos_control_notasM5["nt_32"];
$lap3_nota_3_M5 = $lap3_row_datos_control_notasM5["nt_33"];
$lap3_nota_4_M5 = $lap3_row_datos_control_notasM5["nt_34"];
$lap3_nota_5_M5 = $lap3_row_datos_control_notasM5["nt_35"];
$lap3_nota_6_M5 = $lap3_row_datos_control_notasM5["nt_36"];
$lap3_nota_7_M5 = $lap3_row_datos_control_notasM5["nt_37"];
$lap3_notaAu_M5 = $lap3_row_datos_control_notasM5["nt_Au3"];


$lap3_nota_real_1_M5 = ($lap3_row_datos_control_notasM5["nt_31"] * $lap3_para_el_porc_V1_M5)/$el_puntaje_completo_es;
$lap3_nota_real_2_M5 = ($lap3_row_datos_control_notasM5["nt_32"] * $lap3_para_el_porc_V2_M5)/$el_puntaje_completo_es;
$lap3_nota_real_3_M5 = ($lap3_row_datos_control_notasM5["nt_33"] * $lap3_para_el_porc_V3_M5)/$el_puntaje_completo_es;
$lap3_nota_real_4_M5 = ($lap3_row_datos_control_notasM5["nt_34"] * $lap3_para_el_porc_V4_M5)/$el_puntaje_completo_es;
$lap3_nota_real_5_M5 = ($lap3_row_datos_control_notasM5["nt_35"] * $lap3_para_el_porc_V5_M5)/$el_puntaje_completo_es;
$lap3_nota_real_6_M5 = ($lap3_row_datos_control_notasM5["nt_36"] * $lap3_para_el_porc_V6_M5)/$el_puntaje_completo_es;
$lap3_nota_real_7_M5 = ($lap3_row_datos_control_notasM5["nt_37"] * $lap3_para_el_porc_V7_M5)/$el_puntaje_completo_es;

$lap3_total_seven_M5 = $lap3_nota_real_1_M5+$lap3_nota_real_2_M5+$lap3_nota_real_3_M5+$lap3_nota_real_4_M5+$lap3_nota_real_5_M5+$lap3_nota_real_6_M5+$lap3_nota_real_7_M5;

$lap3_total_seven_con_Au_M5 = $lap3_total_seven_M5+ $lap3_row_datos_control_notasM5["nt_Au3"];

$lap3_total_seven_con_Au_redon_M5_redondeado1 =number_format($lap3_total_seven_con_Au_M5, 1, '.', '');

$lap3_total_seven_con_Au_redon_M5 =number_format($lap3_total_seven_con_Au_redon_M5_redondeado1);



$lap3_nota_1_M6 = $lap3_row_datos_control_notasM6["nt_31"];
$lap3_nota_2_M6 = $lap3_row_datos_control_notasM6["nt_32"];
$lap3_nota_3_M6 = $lap3_row_datos_control_notasM6["nt_33"];
$lap3_nota_4_M6 = $lap3_row_datos_control_notasM6["nt_34"];
$lap3_nota_5_M6 = $lap3_row_datos_control_notasM6["nt_35"];
$lap3_nota_6_M6 = $lap3_row_datos_control_notasM6["nt_36"];
$lap3_nota_7_M6 = $lap3_row_datos_control_notasM6["nt_37"];
$lap3_notaAu_M6 = $lap3_row_datos_control_notasM6["nt_Au3"];


$lap3_nota_real_1_M6 = ($lap3_row_datos_control_notasM6["nt_31"] * $lap3_para_el_porc_V1_M6)/$el_puntaje_completo_es;
$lap3_nota_real_2_M6 = ($lap3_row_datos_control_notasM6["nt_32"] * $lap3_para_el_porc_V2_M6)/$el_puntaje_completo_es;
$lap3_nota_real_3_M6 = ($lap3_row_datos_control_notasM6["nt_33"] * $lap3_para_el_porc_V3_M6)/$el_puntaje_completo_es;
$lap3_nota_real_4_M6 = ($lap3_row_datos_control_notasM6["nt_34"] * $lap3_para_el_porc_V4_M6)/$el_puntaje_completo_es;
$lap3_nota_real_5_M6 = ($lap3_row_datos_control_notasM6["nt_35"] * $lap3_para_el_porc_V5_M6)/$el_puntaje_completo_es;
$lap3_nota_real_6_M6 = ($lap3_row_datos_control_notasM6["nt_36"] * $lap3_para_el_porc_V6_M6)/$el_puntaje_completo_es;
$lap3_nota_real_7_M6 = ($lap3_row_datos_control_notasM6["nt_37"] * $lap3_para_el_porc_V7_M6)/$el_puntaje_completo_es;

$lap3_total_seven_M6 = $lap3_nota_real_1_M6+$lap3_nota_real_2_M6+$lap3_nota_real_3_M6+$lap3_nota_real_4_M6+$lap3_nota_real_5_M6+$lap3_nota_real_6_M6+$lap3_nota_real_7_M6;

$lap3_total_seven_con_Au_M6 = $lap3_total_seven_M6+ $lap3_row_datos_control_notasM6["nt_Au3"];

$lap3_total_seven_con_Au_redon_M6_redondeado1 =number_format($lap3_total_seven_con_Au_M6, 1, '.', '');

$lap3_total_seven_con_Au_redon_M6 =number_format($lap3_total_seven_con_Au_redon_M6_redondeado1);



$lap3_nota_1_M7 = $lap3_row_datos_control_notasM7["nt_31"];
$lap3_nota_2_M7 = $lap3_row_datos_control_notasM7["nt_32"];
$lap3_nota_3_M7 = $lap3_row_datos_control_notasM7["nt_33"];
$lap3_nota_4_M7 = $lap3_row_datos_control_notasM7["nt_34"];
$lap3_nota_5_M7 = $lap3_row_datos_control_notasM7["nt_35"];
$lap3_nota_6_M7 = $lap3_row_datos_control_notasM7["nt_36"];
$lap3_nota_7_M7 = $lap3_row_datos_control_notasM7["nt_37"];
$lap3_notaAu_M7 = $lap3_row_datos_control_notasM7["nt_Au3"];


$lap3_nota_real_1_M7 = ($lap3_row_datos_control_notasM7["nt_31"] * $lap3_para_el_porc_V1_M7)/$el_puntaje_completo_es;
$lap3_nota_real_2_M7 = ($lap3_row_datos_control_notasM7["nt_32"] * $lap3_para_el_porc_V2_M7)/$el_puntaje_completo_es;
$lap3_nota_real_3_M7 = ($lap3_row_datos_control_notasM7["nt_33"] * $lap3_para_el_porc_V3_M7)/$el_puntaje_completo_es;
$lap3_nota_real_4_M7 = ($lap3_row_datos_control_notasM7["nt_34"] * $lap3_para_el_porc_V4_M7)/$el_puntaje_completo_es;
$lap3_nota_real_5_M7 = ($lap3_row_datos_control_notasM7["nt_35"] * $lap3_para_el_porc_V5_M7)/$el_puntaje_completo_es;
$lap3_nota_real_6_M7 = ($lap3_row_datos_control_notasM7["nt_36"] * $lap3_para_el_porc_V6_M7)/$el_puntaje_completo_es;
$lap3_nota_real_7_M7 = ($lap3_row_datos_control_notasM7["nt_37"] * $lap3_para_el_porc_V7_M7)/$el_puntaje_completo_es;

$lap3_total_seven_M7 = $lap3_nota_real_1_M7+$lap3_nota_real_2_M7+$lap3_nota_real_3_M7+$lap3_nota_real_4_M7+$lap3_nota_real_5_M7+$lap3_nota_real_6_M7+$lap3_nota_real_7_M7;

$lap3_total_seven_con_Au_M7 = $lap3_total_seven_M7+ $lap3_row_datos_control_notasM7["nt_Au3"];

$lap3_total_seven_con_Au_redon_M7_redondeado1 =number_format($lap3_total_seven_con_Au_M7, 1, '.', '');

$lap3_total_seven_con_Au_redon_M7 =number_format($lap3_total_seven_con_Au_redon_M7_redondeado1);




$lap3_nota_1_M8 = $lap3_row_datos_control_notasM8["nt_31"];
$lap3_nota_2_M8 = $lap3_row_datos_control_notasM8["nt_32"];
$lap3_nota_3_M8 = $lap3_row_datos_control_notasM8["nt_33"];
$lap3_nota_4_M8 = $lap3_row_datos_control_notasM8["nt_34"];
$lap3_nota_5_M8 = $lap3_row_datos_control_notasM8["nt_35"];
$lap3_nota_6_M8 = $lap3_row_datos_control_notasM8["nt_36"];
$lap3_nota_7_M8 = $lap3_row_datos_control_notasM8["nt_37"];
$lap3_notaAu_M8 = $lap3_row_datos_control_notasM8["nt_Au3"];


$lap3_nota_real_1_M8 = ($lap3_row_datos_control_notasM8["nt_31"] * $lap3_para_el_porc_V1_M8)/$el_puntaje_completo_es;
$lap3_nota_real_2_M8 = ($lap3_row_datos_control_notasM8["nt_32"] * $lap3_para_el_porc_V2_M8)/$el_puntaje_completo_es;
$lap3_nota_real_3_M8 = ($lap3_row_datos_control_notasM8["nt_33"] * $lap3_para_el_porc_V3_M8)/$el_puntaje_completo_es;
$lap3_nota_real_4_M8 = ($lap3_row_datos_control_notasM8["nt_34"] * $lap3_para_el_porc_V4_M8)/$el_puntaje_completo_es;
$lap3_nota_real_5_M8 = ($lap3_row_datos_control_notasM8["nt_35"] * $lap3_para_el_porc_V5_M8)/$el_puntaje_completo_es;
$lap3_nota_real_6_M8 = ($lap3_row_datos_control_notasM8["nt_36"] * $lap3_para_el_porc_V6_M8)/$el_puntaje_completo_es;
$lap3_nota_real_7_M8 = ($lap3_row_datos_control_notasM8["nt_37"] * $lap3_para_el_porc_V7_M8)/$el_puntaje_completo_es;

$lap3_total_seven_M8 = $lap3_nota_real_1_M8+$lap3_nota_real_2_M8+$lap3_nota_real_3_M8+$lap3_nota_real_4_M8+$lap3_nota_real_5_M8+$lap3_nota_real_6_M8+$lap3_nota_real_7_M8;

$lap3_total_seven_con_Au_M8 = $lap3_total_seven_M8+ $lap3_row_datos_control_notasM8["nt_Au3"];

$lap3_total_seven_con_Au_redon_M8_redondeado1 =number_format($lap3_total_seven_con_Au_M8, 1, '.', '');

$lap3_total_seven_con_Au_redon_M8 =number_format($lap3_total_seven_con_Au_redon_M8_redondeado1);




$lap3_nota_1_M9 = $lap3_row_datos_control_notasM9["nt_31"];
$lap3_nota_2_M9 = $lap3_row_datos_control_notasM9["nt_32"];
$lap3_nota_3_M9 = $lap3_row_datos_control_notasM9["nt_33"];
$lap3_nota_4_M9 = $lap3_row_datos_control_notasM9["nt_34"];
$lap3_nota_5_M9 = $lap3_row_datos_control_notasM9["nt_35"];
$lap3_nota_6_M9 = $lap3_row_datos_control_notasM9["nt_36"];
$lap3_nota_7_M9 = $lap3_row_datos_control_notasM9["nt_37"];
$lap3_notaAu_M9 = $lap3_row_datos_control_notasM9["nt_Au3"];


$lap3_nota_real_1_M9 = ($lap3_row_datos_control_notasM9["nt_31"] * $lap3_para_el_porc_V1_M9)/$el_puntaje_completo_es;
$lap3_nota_real_2_M9 = ($lap3_row_datos_control_notasM9["nt_32"] * $lap3_para_el_porc_V2_M9)/$el_puntaje_completo_es;
$lap3_nota_real_3_M9 = ($lap3_row_datos_control_notasM9["nt_33"] * $lap3_para_el_porc_V3_M9)/$el_puntaje_completo_es;
$lap3_nota_real_4_M9 = ($lap3_row_datos_control_notasM9["nt_34"] * $lap3_para_el_porc_V4_M9)/$el_puntaje_completo_es;
$lap3_nota_real_5_M9 = ($lap3_row_datos_control_notasM9["nt_35"] * $lap3_para_el_porc_V5_M9)/$el_puntaje_completo_es;
$lap3_nota_real_6_M9 = ($lap3_row_datos_control_notasM9["nt_36"] * $lap3_para_el_porc_V6_M9)/$el_puntaje_completo_es;
$lap3_nota_real_7_M9 = ($lap3_row_datos_control_notasM9["nt_37"] * $lap3_para_el_porc_V7_M9)/$el_puntaje_completo_es;

$lap3_total_seven_M9 = $lap3_nota_real_1_M9+$lap3_nota_real_2_M9+$lap3_nota_real_3_M9+$lap3_nota_real_4_M9+$lap3_nota_real_5_M9+$lap3_nota_real_6_M9+$lap3_nota_real_7_M9;

$lap3_total_seven_con_Au_M9 = $lap3_total_seven_M9+ $lap3_row_datos_control_notasM9["nt_Au3"];

$lap3_total_seven_con_Au_redon_M9_redondeado1 =number_format($lap3_total_seven_con_Au_M9, 1, '.', '');

$lap3_total_seven_con_Au_redon_M9 =number_format($lap3_total_seven_con_Au_redon_M9_redondeado1);



$lap3_nota_1_M10 = $lap3_row_datos_control_notasM10["nt_31"];
$lap3_nota_2_M10 = $lap3_row_datos_control_notasM10["nt_32"];
$lap3_nota_3_M10 = $lap3_row_datos_control_notasM10["nt_33"];
$lap3_nota_4_M10 = $lap3_row_datos_control_notasM10["nt_34"];
$lap3_nota_5_M10 = $lap3_row_datos_control_notasM10["nt_35"];
$lap3_nota_6_M10 = $lap3_row_datos_control_notasM10["nt_36"];
$lap3_nota_7_M10 = $lap3_row_datos_control_notasM10["nt_37"];
$lap3_notaAu_M10 = $lap3_row_datos_control_notasM10["nt_Au3"];


$lap3_nota_real_1_M10 = ($lap3_row_datos_control_notasM10["nt_31"] * $lap3_para_el_porc_V1_M10)/$el_puntaje_completo_es;
$lap3_nota_real_2_M10 = ($lap3_row_datos_control_notasM10["nt_32"] * $lap3_para_el_porc_V2_M10)/$el_puntaje_completo_es;
$lap3_nota_real_3_M10 = ($lap3_row_datos_control_notasM10["nt_33"] * $lap3_para_el_porc_V3_M10)/$el_puntaje_completo_es;
$lap3_nota_real_4_M10 = ($lap3_row_datos_control_notasM10["nt_34"] * $lap3_para_el_porc_V4_M10)/$el_puntaje_completo_es;
$lap3_nota_real_5_M10 = ($lap3_row_datos_control_notasM10["nt_35"] * $lap3_para_el_porc_V5_M10)/$el_puntaje_completo_es;
$lap3_nota_real_6_M10 = ($lap3_row_datos_control_notasM10["nt_36"] * $lap3_para_el_porc_V6_M10)/$el_puntaje_completo_es;
$lap3_nota_real_7_M10 = ($lap3_row_datos_control_notasM10["nt_37"] * $lap3_para_el_porc_V7_M10)/$el_puntaje_completo_es;

$lap3_total_seven_M10 = $lap3_nota_real_1_M10+$lap3_nota_real_2_M10+$lap3_nota_real_3_M10+$lap3_nota_real_4_M10+$lap3_nota_real_5_M10+$lap3_nota_real_6_M10+$lap3_nota_real_7_M10;

$lap3_total_seven_con_Au_M10 = $lap3_total_seven_M10+ $lap3_row_datos_control_notasM10["nt_Au3"];

$lap3_total_seven_con_Au_redon_M10_redondeado1 =number_format($lap3_total_seven_con_Au_M10, 1, '.', '');

$lap3_total_seven_con_Au_redon_M10 =number_format($lap3_total_seven_con_Au_redon_M10_redondeado1);



$lap3_nota_1_M11 = $lap3_row_datos_control_notasM11["nt_31"];
$lap3_nota_2_M11 = $lap3_row_datos_control_notasM11["nt_32"];
$lap3_nota_3_M11 = $lap3_row_datos_control_notasM11["nt_33"];
$lap3_nota_4_M11 = $lap3_row_datos_control_notasM11["nt_34"];
$lap3_nota_5_M11 = $lap3_row_datos_control_notasM11["nt_35"];
$lap3_nota_6_M11 = $lap3_row_datos_control_notasM11["nt_36"];
$lap3_nota_7_M11 = $lap3_row_datos_control_notasM11["nt_37"];
$lap3_notaAu_M11 = $lap3_row_datos_control_notasM11["nt_Au3"];


$lap3_nota_real_1_M11 = ($lap3_row_datos_control_notasM11["nt_31"] * $lap3_para_el_porc_V1_M11)/$el_puntaje_completo_es;
$lap3_nota_real_2_M11 = ($lap3_row_datos_control_notasM11["nt_32"] * $lap3_para_el_porc_V2_M11)/$el_puntaje_completo_es;
$lap3_nota_real_3_M11 = ($lap3_row_datos_control_notasM11["nt_33"] * $lap3_para_el_porc_V3_M11)/$el_puntaje_completo_es;
$lap3_nota_real_4_M11 = ($lap3_row_datos_control_notasM11["nt_34"] * $lap3_para_el_porc_V4_M11)/$el_puntaje_completo_es;
$lap3_nota_real_5_M11 = ($lap3_row_datos_control_notasM11["nt_35"] * $lap3_para_el_porc_V5_M11)/$el_puntaje_completo_es;
$lap3_nota_real_6_M11 = ($lap3_row_datos_control_notasM11["nt_36"] * $lap3_para_el_porc_V6_M11)/$el_puntaje_completo_es;
$lap3_nota_real_7_M11 = ($lap3_row_datos_control_notasM11["nt_37"] * $lap3_para_el_porc_V7_M11)/$el_puntaje_completo_es;

$lap3_total_seven_M11 = $lap3_nota_real_1_M11+$lap3_nota_real_2_M11+$lap3_nota_real_3_M11+$lap3_nota_real_4_M11+$lap3_nota_real_5_M11+$lap3_nota_real_6_M11+$lap3_nota_real_7_M11;

$lap3_total_seven_con_Au_M11 = $lap3_total_seven_M11+ $lap3_row_datos_control_notasM11["nt_Au3"];

$lap3_total_seven_con_Au_redon_M11_redondeado1 =number_format($lap3_total_seven_con_Au_M11, 1, '.', '');

$lap3_total_seven_con_Au_redon_M11 =number_format($lap3_total_seven_con_Au_redon_M11_redondeado1);



$lap3_nota_1_M12 = $lap3_row_datos_control_notasM12["nt_31"];
$lap3_nota_2_M12 = $lap3_row_datos_control_notasM12["nt_32"];
$lap3_nota_3_M12 = $lap3_row_datos_control_notasM12["nt_33"];
$lap3_nota_4_M12 = $lap3_row_datos_control_notasM12["nt_34"];
$lap3_nota_5_M12 = $lap3_row_datos_control_notasM12["nt_35"];
$lap3_nota_6_M12 = $lap3_row_datos_control_notasM12["nt_36"];
$lap3_nota_7_M12 = $lap3_row_datos_control_notasM12["nt_37"];
$lap3_notaAu_M12 = $lap3_row_datos_control_notasM12["nt_Au3"];


$lap3_nota_real_1_M12 = ($lap3_row_datos_control_notasM12["nt_31"] * $lap3_para_el_porc_V1_M12)/$el_puntaje_completo_es;
$lap3_nota_real_2_M12 = ($lap3_row_datos_control_notasM12["nt_32"] * $lap3_para_el_porc_V2_M12)/$el_puntaje_completo_es;
$lap3_nota_real_3_M12 = ($lap3_row_datos_control_notasM12["nt_33"] * $lap3_para_el_porc_V3_M12)/$el_puntaje_completo_es;
$lap3_nota_real_4_M12 = ($lap3_row_datos_control_notasM12["nt_34"] * $lap3_para_el_porc_V4_M12)/$el_puntaje_completo_es;
$lap3_nota_real_5_M12 = ($lap3_row_datos_control_notasM12["nt_35"] * $lap3_para_el_porc_V5_M12)/$el_puntaje_completo_es;
$lap3_nota_real_6_M12 = ($lap3_row_datos_control_notasM12["nt_36"] * $lap3_para_el_porc_V6_M12)/$el_puntaje_completo_es;
$lap3_nota_real_7_M12 = ($lap3_row_datos_control_notasM12["nt_37"] * $lap3_para_el_porc_V7_M12)/$el_puntaje_completo_es;

$lap3_total_seven_M12 = $lap3_nota_real_1_M12+$lap3_nota_real_2_M12+$lap3_nota_real_3_M12+$lap3_nota_real_4_M12+$lap3_nota_real_5_M12+$lap3_nota_real_6_M12+$lap3_nota_real_7_M12;

$lap3_total_seven_con_Au_M12 = $lap3_total_seven_M12+ $lap3_row_datos_control_notasM12["nt_Au3"];

$lap3_total_seven_con_Au_redon_M12_redondeado1 =number_format($lap3_total_seven_con_Au_M12, 1, '.', '');

$lap3_total_seven_con_Au_redon_M12 =number_format($lap3_total_seven_con_Au_redon_M12_redondeado1);



$lap3_nota_1_M13 = $lap3_row_datos_control_notasM13["nt_31"];
$lap3_nota_2_M13 = $lap3_row_datos_control_notasM13["nt_32"];
$lap3_nota_3_M13 = $lap3_row_datos_control_notasM13["nt_33"];
$lap3_nota_4_M13 = $lap3_row_datos_control_notasM13["nt_34"];
$lap3_nota_5_M13 = $lap3_row_datos_control_notasM13["nt_35"];
$lap3_nota_6_M13 = $lap3_row_datos_control_notasM13["nt_36"];
$lap3_nota_7_M13 = $lap3_row_datos_control_notasM13["nt_37"];
$lap3_notaAu_M13 = $lap3_row_datos_control_notasM13["nt_Au3"];


$lap3_nota_real_1_M13 = ($lap3_row_datos_control_notasM13["nt_31"] * $lap3_para_el_porc_V1_M13)/$el_puntaje_completo_es;
$lap3_nota_real_2_M13 = ($lap3_row_datos_control_notasM13["nt_32"] * $lap3_para_el_porc_V2_M13)/$el_puntaje_completo_es;
$lap3_nota_real_3_M13 = ($lap3_row_datos_control_notasM13["nt_33"] * $lap3_para_el_porc_V3_M13)/$el_puntaje_completo_es;
$lap3_nota_real_4_M13 = ($lap3_row_datos_control_notasM13["nt_34"] * $lap3_para_el_porc_V4_M13)/$el_puntaje_completo_es;
$lap3_nota_real_5_M13 = ($lap3_row_datos_control_notasM13["nt_35"] * $lap3_para_el_porc_V5_M13)/$el_puntaje_completo_es;
$lap3_nota_real_6_M13 = ($lap3_row_datos_control_notasM13["nt_36"] * $lap3_para_el_porc_V6_M13)/$el_puntaje_completo_es;
$lap3_nota_real_7_M13 = ($lap3_row_datos_control_notasM13["nt_37"] * $lap3_para_el_porc_V7_M13)/$el_puntaje_completo_es;

$lap3_total_seven_M13 = $lap3_nota_real_1_M13+$lap3_nota_real_2_M13+$lap3_nota_real_3_M13+$lap3_nota_real_4_M13+$lap3_nota_real_5_M13+$lap3_nota_real_6_M13+$lap3_nota_real_7_M13;

$lap3_total_seven_con_Au_M13 = $lap3_total_seven_M13+ $lap3_row_datos_control_notasM13["nt_Au3"];

$lap3_total_seven_con_Au_redon_M13_redondeado1 =number_format($lap3_total_seven_con_Au_M13, 1, '.', '');

$lap3_total_seven_con_Au_redon_M13 =number_format($lap3_total_seven_con_Au_redon_M13_redondeado1);



$lap3_nota_1_M14 = $lap3_row_datos_control_notasM14["nt_31"];
$lap3_nota_2_M14 = $lap3_row_datos_control_notasM14["nt_32"];
$lap3_nota_3_M14 = $lap3_row_datos_control_notasM14["nt_33"];
$lap3_nota_4_M14 = $lap3_row_datos_control_notasM14["nt_34"];
$lap3_nota_5_M14 = $lap3_row_datos_control_notasM14["nt_35"];
$lap3_nota_6_M14 = $lap3_row_datos_control_notasM14["nt_36"];
$lap3_nota_7_M14 = $lap3_row_datos_control_notasM14["nt_37"];
$lap3_notaAu_M14 = $lap3_row_datos_control_notasM14["nt_Au3"];


$lap3_nota_real_1_M14 = ($lap3_row_datos_control_notasM14["nt_31"] * $lap3_para_el_porc_V1_M14)/$el_puntaje_completo_es;
$lap3_nota_real_2_M14 = ($lap3_row_datos_control_notasM14["nt_32"] * $lap3_para_el_porc_V2_M14)/$el_puntaje_completo_es;
$lap3_nota_real_3_M14 = ($lap3_row_datos_control_notasM14["nt_33"] * $lap3_para_el_porc_V3_M14)/$el_puntaje_completo_es;
$lap3_nota_real_4_M14 = ($lap3_row_datos_control_notasM14["nt_34"] * $lap3_para_el_porc_V4_M14)/$el_puntaje_completo_es;
$lap3_nota_real_5_M14 = ($lap3_row_datos_control_notasM14["nt_35"] * $lap3_para_el_porc_V5_M14)/$el_puntaje_completo_es;
$lap3_nota_real_6_M14 = ($lap3_row_datos_control_notasM14["nt_36"] * $lap3_para_el_porc_V6_M14)/$el_puntaje_completo_es;
$lap3_nota_real_7_M14 = ($lap3_row_datos_control_notasM14["nt_37"] * $lap3_para_el_porc_V7_M14)/$el_puntaje_completo_es;

$lap3_total_seven_M14 = $lap3_nota_real_1_M14+$lap3_nota_real_2_M14+$lap3_nota_real_3_M14+$lap3_nota_real_4_M14+$lap3_nota_real_5_M14+$lap3_nota_real_6_M14+$lap3_nota_real_7_M14;

$lap3_total_seven_con_Au_M14 = $lap3_total_seven_M14+ $lap3_row_datos_control_notasM14["nt_Au3"];

$lap3_total_seven_con_Au_redon_M14_redondeado1 =number_format($lap3_total_seven_con_Au_M14, 1, '.', '');

$lap3_total_seven_con_Au_redon_M14 =number_format($lap3_total_seven_con_Au_redon_M14_redondeado1);




?>


<?php

     $lap3_cuenta_personal ='0';

     $lap3_suma_personal = '';
     $lap3_entre_cuanto = '';
     $lap3_color_a = $lap3_color_imp2;
   
     $lap3_marquitaper ='';
     $lap3_total_seven_con_Au_redon_M1a = '';

     if ($lap3_total_seven_con_Au_M1 >= 0.1 and $lap3_total_seven_con_Au_redon_M1 <= $el_puntaje_aprobatorio_prom) {
      $lap3_cuenta_personal = $lap3_cuenta_personal + 1;
      $lap3_color_a = red;
      $lap3_apla_mat1 = $lap3_apla_mat1 + 1;
    } 


     if ($lap3_total_seven_con_Au_M1 == 0) {
      $lap3_total_seven_con_Au_redon_M1a = '';
    } 


    if ($lap3_total_seven_con_Au_M1 >= 0.1 and $lap3_total_seven_con_Au_M1 <=0.9) {
      $lap3_total_seven_con_Au_redon_M1a = $lap3_total_seven_con_Au_redon_M1;  

        $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M1a;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;       

    } 





    if ($lap3_total_seven_con_Au_redon_M1 >= 1) {
      $lap3_total_seven_con_Au_redon_M1a = $lap3_total_seven_con_Au_redon_M1;
      $lap3_tot_mat1 = $lap3_tot_mat1 + $lap3_total_seven_con_Au_redon_M1a;
      $lap3_div_mat1 = $lap3_div_mat1 + 1;

  $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M1a;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;   

    } 

  
 ?>   


 <?php

     $lap3_color_a = $lap3_color_imp2;

     $lap3_marquitaper ='';
     $lap3_total_seven_con_Au_redon_M22 = '';

     if ($lap3_total_seven_con_Au_M2 >= 0.1 and $lap3_total_seven_con_Au_redon_M2 <= $el_puntaje_aprobatorio_prom) {
      $lap3_cuenta_personal = $lap3_cuenta_personal + 1;
       $lap3_color_a = red;
       $lap3_apla_mat2 = $lap3_apla_mat2 + 1;
    } 


     if ($lap3_total_seven_con_Au_M2 == 0) {
      $lap3_total_seven_con_Au_redon_M22 = '';
    } 



    if ($lap3_total_seven_con_Au_M2 >= 0.1 and $lap3_total_seven_con_Au_M2 <=0.9) {
      $lap3_total_seven_con_Au_redon_M22 = $lap3_total_seven_con_Au_redon_M2;  

        $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M22;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;       

    } 





    if ($lap3_total_seven_con_Au_redon_M2 >= 1) {
      $lap3_total_seven_con_Au_redon_M22 = $lap3_total_seven_con_Au_redon_M2;

      $lap3_tot_mat2 = $lap3_tot_mat2 + $lap3_total_seven_con_Au_redon_M22;
      $lap3_div_mat2 = $lap3_div_mat2 + 1;

   $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M22;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;  


    } 

    ?>





    <?php

     $lap3_color_a = $lap3_color_imp2;

     $lap3_marquitaper ='';
     $lap3_total_seven_con_Au_redon_M33 = '';

     if ($lap3_total_seven_con_Au_M3 >= 0.1 and $lap3_total_seven_con_Au_redon_M3 <= $el_puntaje_aprobatorio_prom) {
      $lap3_cuenta_personal = $lap3_cuenta_personal + 1;
       $lap3_color_a = red;
       $lap3_apla_mat3 = $lap3_apla_mat3 + 1;
    } 


     if ($lap3_total_seven_con_Au_M3 == 0) {
      $lap3_total_seven_con_Au_redon_M33 = '';
    } 


    if ($lap3_total_seven_con_Au_M3 >= 0.1 and $lap3_total_seven_con_Au_M3 <=0.9) {
      $lap3_total_seven_con_Au_redon_M33 = $lap3_total_seven_con_Au_redon_M3;  

        $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M33;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;       

    } 



    if ($lap3_total_seven_con_Au_redon_M3 >= 1) {
      $lap3_total_seven_con_Au_redon_M33 = $lap3_total_seven_con_Au_redon_M3;

      $lap3_tot_mat3 = $lap3_tot_mat3 + $lap3_total_seven_con_Au_redon_M33;
      $lap3_div_mat3 = $lap3_div_mat3 + 1;

    $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M33;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;  


    } 

   ?>





   <?php

     $lap3_color_a = $lap3_color_imp2;

     $lap3_marquitaper ='';
     $lap3_total_seven_con_Au_redon_M44 = '';

     if ($lap3_total_seven_con_Au_M4 >= 0.1 and $lap3_total_seven_con_Au_redon_M4 <= $el_puntaje_aprobatorio_prom) {
      $lap3_cuenta_personal = $lap3_cuenta_personal + 1;
       $lap3_color_a = red;
       $lap3_apla_mat4 = $lap3_apla_mat4 + 1;
    } 


     if ($lap3_total_seven_con_Au_M4 == 0) {
      $lap3_total_seven_con_Au_redon_M44 = '';
    } 



    if ($lap3_total_seven_con_Au_M4 >= 0.1 and $lap3_total_seven_con_Au_M4 <=0.9) {
      $lap3_total_seven_con_Au_redon_M44 = $lap3_total_seven_con_Au_redon_M4;  

        $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M44;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;       

    } 




    if ($lap3_total_seven_con_Au_redon_M4 >= 1) {
      $lap3_total_seven_con_Au_redon_M44 = $lap3_total_seven_con_Au_redon_M4;

      $lap3_tot_mat4 = $lap3_tot_mat4 + $lap3_total_seven_con_Au_redon_M44;
      $lap3_div_mat4 = $lap3_div_mat4 + 1;

  $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M44;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;  

    } 

    ?>




    <?php

     $lap3_color_a = $lap3_color_imp2;

     $lap3_marquitaper ='';
     $lap3_total_seven_con_Au_redon_M55 = '';

     if ($lap3_total_seven_con_Au_M5 >= 0.1 and $lap3_total_seven_con_Au_redon_M5 <= $el_puntaje_aprobatorio_prom) {
      $lap3_cuenta_personal = $lap3_cuenta_personal + 1;
       $lap3_color_a = red;
       $lap3_apla_mat5 = $lap3_apla_mat5 + 1;
    } 


     if ($lap3_total_seven_con_Au_M5 == 0) {
      $lap3_total_seven_con_Au_redon_M55 = '';
    } 


    if ($lap3_total_seven_con_Au_M5 >= 0.1 and $lap3_total_seven_con_Au_M5 <=0.9) {
      $lap3_total_seven_con_Au_redon_M55 = $lap3_total_seven_con_Au_redon_M5;  

        $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M55;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;       

    } 




    if ($lap3_total_seven_con_Au_redon_M5 >= 1) {
      $lap3_total_seven_con_Au_redon_M55 = $lap3_total_seven_con_Au_redon_M5;

      $lap3_tot_mat5 = $lap3_tot_mat5 + $lap3_total_seven_con_Au_redon_M55;
      $lap3_div_mat5 = $lap3_div_mat5 + 1;

   $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M55;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;   


    } 

 ?>



 <?php

     $lap3_color_a = $lap3_color_imp2;

     $lap3_marquitaper ='';
     $lap3_total_seven_con_Au_redon_M66 = '';

     if ($lap3_total_seven_con_Au_M6 >= 0.1 and $lap3_total_seven_con_Au_redon_M6 <= $el_puntaje_aprobatorio_prom) {
      $lap3_cuenta_personal = $lap3_cuenta_personal + 1;
       $lap3_color_a = red;
       $lap3_apla_mat6 = $lap3_apla_mat6 + 1;
    } 


     if ($lap3_total_seven_con_Au_M6 == 0) {
      $lap3_total_seven_con_Au_redon_M66 = '';
    } 


    if ($lap3_total_seven_con_Au_M6 >= 0.1 and $lap3_total_seven_con_Au_M6 <=0.9) {
      $lap3_total_seven_con_Au_redon_M66 = $lap3_total_seven_con_Au_redon_M6;  

        $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M66;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;       

    } 




    if ($lap3_total_seven_con_Au_redon_M6 >= 1) {
      $lap3_total_seven_con_Au_redon_M66 = $lap3_total_seven_con_Au_redon_M6;

      $lap3_tot_mat6 = $lap3_tot_mat6 + $lap3_total_seven_con_Au_redon_M66;
      $lap3_div_mat6 = $lap3_div_mat6 + 1;

      $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M66;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;   

    } 

     ?>



     <?php

     $lap3_color_a = $lap3_color_imp2;

     $lap3_marquitaper ='';
     $lap3_total_seven_con_Au_redon_M77 = '';

     if ($lap3_total_seven_con_Au_M7 >= 0.1 and $lap3_total_seven_con_Au_redon_M7 <= $el_puntaje_aprobatorio_prom) {
      $lap3_cuenta_personal = $lap3_cuenta_personal + 1;
       $lap3_color_a = red;
       $lap3_apla_mat7 = $lap3_apla_mat7 + 1;
    } 


     if ($lap3_total_seven_con_Au_M7 == 0) {
      $lap3_total_seven_con_Au_redon_M77 = '';
    } 


    if ($lap3_total_seven_con_Au_M7 >= 0.1 and $lap3_total_seven_con_Au_M7 <=0.9) {
      $lap3_total_seven_con_Au_redon_M77 = $lap3_total_seven_con_Au_redon_M7;  

        $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M77;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;       

    } 



    if ($lap3_total_seven_con_Au_redon_M7 >= 1) {
      $lap3_total_seven_con_Au_redon_M77 = $lap3_total_seven_con_Au_redon_M7;

      $lap3_tot_mat7 = $lap3_tot_mat7 + $lap3_total_seven_con_Au_redon_M77;
      $lap3_div_mat7 = $lap3_div_mat7 + 1;

 $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M77;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;  
    } 

    ?>



    <?php

     $lap3_color_a = $lap3_color_imp2;

     $lap3_marquitaper ='';
     $lap3_total_seven_con_Au_redon_M88 = '';

     if ($lap3_total_seven_con_Au_M8 >= 0.1 and $lap3_total_seven_con_Au_redon_M8 <= $el_puntaje_aprobatorio_prom) {
      $lap3_cuenta_personal = $lap3_cuenta_personal + 1;
       $lap3_color_a = red;
       $lap3_apla_mat8 = $lap3_apla_mat8 + 1;
    } 


     if ($lap3_total_seven_con_Au_M8 == 0) {
      $lap3_total_seven_con_Au_redon_M88 = '';
    } 


    if ($lap3_total_seven_con_Au_M8 >= 0.1 and $lap3_total_seven_con_Au_M8 <=0.9) {
      $lap3_total_seven_con_Au_redon_M88 = $lap3_total_seven_con_Au_redon_M8;  

        $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M88;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;       

    } 




    if ($lap3_total_seven_con_Au_redon_M8 >= 1) {
      $lap3_total_seven_con_Au_redon_M88 = $lap3_total_seven_con_Au_redon_M8;

      $lap3_tot_mat8 = $lap3_tot_mat8 + $lap3_total_seven_con_Au_redon_M88;
      $lap3_div_mat8 = $lap3_div_mat8 + 1;

    $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M88;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;  

    } 

    ?>





    <?php

 $lap3_color_a = $lap3_color_imp2;

     $lap3_marquitaper ='';
     $lap3_total_seven_con_Au_redon_M99 = '';

     if ($lap3_total_seven_con_Au_M9 >= 0.1 and $lap3_total_seven_con_Au_redon_M9 <= $el_puntaje_aprobatorio_prom) {
      $lap3_cuenta_personal = $lap3_cuenta_personal + 1;
       $lap3_color_a = red;
       $lap3_apla_mat9 = $lap3_apla_mat9 + 1;
    } 


     if ($lap3_total_seven_con_Au_M9 == 0) {
      $lap3_total_seven_con_Au_redon_M99 = '';
    } 


    if ($lap3_total_seven_con_Au_M9 >= 0.1 and $lap3_total_seven_con_Au_M9 <=0.9) {
      $lap3_total_seven_con_Au_redon_M99 = $lap3_total_seven_con_Au_redon_M9;  

        $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M99;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;       

    } 




    if ($lap3_total_seven_con_Au_redon_M9 >= 1) {
      $lap3_total_seven_con_Au_redon_M99 = $lap3_total_seven_con_Au_redon_M9;

      $lap3_tot_mat9 = $lap3_tot_mat9 + $lap3_total_seven_con_Au_redon_M99;
      $lap3_div_mat9 = $lap3_div_mat9 + 1;

   $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M99;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;  

    } 

     ?>




     <?php

 $lap3_color_a = $lap3_color_imp2;

     $lap3_marquitaper ='';
     $lap3_total_seven_con_Au_redon_M100 = '';

     if ($lap3_total_seven_con_Au_M10 >= 0.1 and $lap3_total_seven_con_Au_redon_M10 <= $el_puntaje_aprobatorio_prom) {
      $lap3_cuenta_personal = $lap3_cuenta_personal + 1;
       $lap3_color_a = red;
       $lap3_apla_mat10 = $lap3_apla_mat10 + 1;
    } 


     if ($lap3_total_seven_con_Au_M10 == 0) {
      $lap3_total_seven_con_Au_redon_M100 = '';
    } 


    if ($lap3_total_seven_con_Au_M10 >= 0.1 and $lap3_total_seven_con_Au_M10 <=0.9) {
      $lap3_total_seven_con_Au_redon_M100 = $lap3_total_seven_con_Au_redon_M10;  

        $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M100;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;       

    } 





    if ($lap3_total_seven_con_Au_redon_M10 >= 1) {
      $lap3_total_seven_con_Au_redon_M100 = $lap3_total_seven_con_Au_redon_M10;

      $lap3_tot_mat10 = $lap3_tot_mat10 + $lap3_total_seven_con_Au_redon_M100;
      $lap3_div_mat10 = $lap3_div_mat10 + 1;

    $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M100;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;  

    } 

 ?>


 <?php

 $lap3_color_a = $lap3_color_imp2;

     $lap3_marquitaper ='';
     $lap3_total_seven_con_Au_redon_M110 = '';

     if ($lap3_total_seven_con_Au_M11 >= 0.1 and $lap3_total_seven_con_Au_redon_M11 <= $el_puntaje_aprobatorio_prom) {
      $lap3_cuenta_personal = $lap3_cuenta_personal + 1;
       $lap3_color_a = red;
       $lap3_apla_mat11 = $lap3_apla_mat11 + 1;
    } 


     if ($lap3_total_seven_con_Au_M11 == 0) {
      $lap3_total_seven_con_Au_redon_M110 = '';
    } 


    if ($lap3_total_seven_con_Au_M11 >= 0.1 and $lap3_total_seven_con_Au_M11 <=0.9) {
      $lap3_total_seven_con_Au_redon_M110 = $lap3_total_seven_con_Au_redon_M11;  

        $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M110;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;       

    } 




    if ($lap3_total_seven_con_Au_redon_M11 >= 1) {
      $lap3_total_seven_con_Au_redon_M110 = $lap3_total_seven_con_Au_redon_M11;

      $lap3_tot_mat11 = $lap3_tot_mat11 + $lap3_total_seven_con_Au_redon_M110;
      $lap3_div_mat11 = $lap3_div_mat11 + 1;

   $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M110;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;  

    } 

    ?>



    <?php

 $lap3_color_a = $lap3_color_imp2;

     $lap3_marquitaper ='';
     $lap3_total_seven_con_Au_redon_M120 = '';

     if ($lap3_total_seven_con_Au_M12 >= 0.1 and $lap3_total_seven_con_Au_redon_M12 <= $el_puntaje_aprobatorio_prom) {
      $lap3_cuenta_personal = $lap3_cuenta_personal + 1;
       $lap3_color_a = red;
       $lap3_apla_mat12 = $lap3_apla_mat12 + 1;
    } 


     if ($lap3_total_seven_con_Au_M12 == 0) {
      $lap3_total_seven_con_Au_redon_M120 = '';
    } 


    if ($lap3_total_seven_con_Au_M12 >= 0.1 and $lap3_total_seven_con_Au_M12 <=0.9) {
      $lap3_total_seven_con_Au_redon_M120 = $lap3_total_seven_con_Au_redon_M12;  

        $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M120;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;       

    } 


    if ($lap3_total_seven_con_Au_redon_M12 >= 1) {
      $lap3_total_seven_con_Au_redon_M120 = $lap3_total_seven_con_Au_redon_M12;

      $lap3_tot_mat12 = $lap3_tot_mat12 + $lap3_total_seven_con_Au_redon_M120;
      $lap3_div_mat12 = $lap3_div_mat12 + 1;

  $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M120;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;   

    } 

 ?>



 <?php

 $lap3_color_a = $lap3_color_imp2;

     $lap3_marquitaper ='';
     $lap3_total_seven_con_Au_redon_M130 = '';

     if ($lap3_total_seven_con_Au_M13 >= 0.1 and $lap3_total_seven_con_Au_redon_M13 <= $el_puntaje_aprobatorio_prom) {
      $lap3_cuenta_personal = $lap3_cuenta_personal + 1;
       $lap3_color_a = red;
       $lap3_apla_mat13 = $lap3_apla_mat13 + 1;
    } 


     if ($lap3_total_seven_con_Au_M13 == 0) {
      $lap3_total_seven_con_Au_redon_M130 = '';
    } 


    if ($lap3_total_seven_con_Au_M13 >= 0.1 and $lap3_total_seven_con_Au_M13 <=0.9) {
      $lap3_total_seven_con_Au_redon_M130 = $lap3_total_seven_con_Au_redon_M13;  

        $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M130;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;       

    } 


    if ($lap3_total_seven_con_Au_redon_M13 >= 1) {
      $lap3_total_seven_con_Au_redon_M130 = $lap3_total_seven_con_Au_redon_M13;

      $lap3_tot_mat13 = $lap3_tot_mat13 + $lap3_total_seven_con_Au_redon_M130;
      $lap3_div_mat13 = $lap3_div_mat13 + 1;


    $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M130;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;  

    } 

 ?>


 <?php

 $lap3_color_a = $lap3_color_imp2;

     $lap3_marquitaper ='';
     $lap3_total_seven_con_Au_redon_M140 = '';

     if ($lap3_total_seven_con_Au_M14 >= 0.1 and $lap3_total_seven_con_Au_redon_M14 <= $el_puntaje_aprobatorio_prom) {
      $lap3_cuenta_personal = $lap3_cuenta_personal + 1;
       $lap3_color_a = red;
       $lap3_apla_mat14 = $lap3_apla_mat14 + 1;
    } 


     if ($lap3_total_seven_con_Au_M14 == 0) {
      $lap3_total_seven_con_Au_redon_M140 = '';
    } 



    if ($lap3_total_seven_con_Au_M14 >= 0.1 and $lap3_total_seven_con_Au_M14 <=0.9) {
      $lap3_total_seven_con_Au_redon_M140 = $lap3_total_seven_con_Au_redon_M14;  

        $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M140;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;       

    } 




    if ($lap3_total_seven_con_Au_redon_M14 >= 1) {
      $lap3_total_seven_con_Au_redon_M140 = $lap3_total_seven_con_Au_redon_M14;

      $lap3_tot_mat14 = $lap3_tot_mat14 + $lap3_total_seven_con_Au_redon_M140;
      $lap3_div_mat14 = $lap3_div_mat14 + 1;

     $lap3_suma_personal = $lap3_suma_personal + $lap3_total_seven_con_Au_redon_M140;
      $lap3_entre_cuanto = $lap3_entre_cuanto + 1;  

    } 
 ?><?php 

      $lap3_el_promeee_es = $lap3_suma_personal/$lap3_entre_cuanto;

      $lap3_el_promeee_es_redon =number_format($lap3_el_promeee_es, 5, ',', '');  

         ?>


<?php
                }
                ?>

















<?php

$id_seccionxxx = $_POST['id_seccionxxx'];
$id_cicloxxx = $_POST['id_cicloxxx'];
$id_gradoxxx = $_POST['id_gradoxxx'];


$desdexxx = $_POST['desdeeee_des'] - 1;

$hastaxxx = $_POST['hastaaaa_des']- $desdexxx;

include("../../conectar.php");


$query = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$id_seccionxxx'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$id_cicloxxx'
         and  grados.id_grado = '$id_gradoxxx'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC LIMIT $desdexxx, $hastaxxx " ;

$datos_control = mysqli_query($enlace, $query) or die(mysqli_error());

$totalRows_datos_control = mysqli_num_rows($datos_control); 

$media =  ceil($totalRows_datos_control/2);

$centro = $media + 1;


$el_id_esssxx = $row_datos_control['id_estu'];


$query_YYY = "SELECT * FROM reg_estu_repre_all, reg_representante

         WHERE  reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = '$id_estxx1' ";

$datos_estudiantes_YYY = mysqli_query($enlace, $query_YYY) or die(mysqli_error());

$row_datos_estudiantes_YYY = mysqli_fetch_array($datos_estudiantes_YYY); 


    

mysqli_close($enlace);




while( $row_datos_control = mysqli_fetch_assoc($datos_control)){ 


?>




<?php



include("../../conectar.php");

$el_id_esssxx = $row_datos_control['id_estud'];


$query_YYY = "SELECT * FROM reg_estu_repre_all, reg_representante

         WHERE  reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = '$el_id_esssxx' ";

$datos_estudiantes_YYY = mysqli_query($enlace, $query_YYY) or die(mysqli_error());

$row_datos_estudiantes_YYY = mysqli_fetch_array($datos_estudiantes_YYY); 


    

mysqli_close($enlace);   ?>



<page backtop="6mm" backbottom="1mm" backleft="6mm" backright="1mm">



 <TABLE class="basetabla">

<TR>

  <TD style="width:99%; height:22px; font-size: 12px;" align="center" > 

  <b>  <?php echo $row_datos_queryplantel['nombre_plantel']; ?></b> - Boleta | Fecha de Expedición: <?php echo $fechaactuaaal; ?>.     

  </TD>

</TR>

 </TABLE>








 <table class="table1">

            <tr>
                <th rowspan="5" width="100px" BGCOLOR="<?php echo $color5;?>">  
               <img style="width:100px; max-height: 100px;" src='../<?php echo $row_datos_queryplantel["logo_plantel"]; ?>'/>   </th> 
               
               <th colspan="3" BGCOLOR="<?php echo $color3;?>">Estudiante</th>
               <th colspan="2" BGCOLOR="<?php echo $color4;?>">Representante</th>  
            </tr>

            <tr>                
                <th style="width:135px;height:10px;" BGCOLOR="<?php echo $color3b;?>">Apellidos</th>
                <th style="width:135px;height:10px;" BGCOLOR="<?php echo $color3b;?>">Nombres</th>
                <th style="width:100px;height:10px; font-size: 11px;" BGCOLOR="<?php echo $color3b;?>">Doc de Id / CE</th>
                <th style="width:134px;height:10px;" BGCOLOR="<?php echo $color0;?>">Apellidos</th>
                <th style="width:134px;height:10px;" BGCOLOR="<?php echo $color0;?>">Nombres</th>             
            </tr>

            <tr>
                <td style="width:135px;height:24px; font-size: 12px;"><b><?php echo $row_datos_control['apellidos_estu']; ?></b></td> 
                <td style="width:135px;height:24px; font-size: 12px;"><?php echo $row_datos_control['nombre_estu']; ?></td>
                <td style="width:100px;height:24px; font-size: 12px;"><?php echo $row_datos_control['ci_estu']; ?></td>
                <td style="width:134px;height:24px; font-size: 12px;"><b><?php echo $row_datos_estudiantes_YYY['apellido_repre']; ?></b></td>
                <td style="width:134px;height:24px; font-size: 12px;"><?php echo $row_datos_estudiantes_YYY['nombre_repre']; ?></td>
            </tr>

            <tr>                
                <th style="width:135px;height:10px; font-size: 12px;" BGCOLOR="<?php echo $color3b;?>">Año - Ciclo Escolar</th>
                <th colspan="2"  BGCOLOR="<?php echo $color3b;?>">Nivel - Grado - Año / Sección</th>               
                <th colspan="2" BGCOLOR="<?php echo $color0;?>">Teléfonos</th>
            </tr>

            <tr>                
                <td style="width:125px;height:10px;"><b>&nbsp;<?php echo $row_datos_periodo['inicia']; ?>&nbsp; - 
                 &nbsp;<?php echo $row_datos_periodo['termina']; ?>&nbsp;</b>
               </td>
                <td colspan="2"  align="center" ><?php echo $_POST["id_tituloxxx"]; ?></td>                
                <td colspan="2"><?php echo $row_datos_estudiantes_YYY['celular_repre']; ?>  -  <?php echo $row_datos_estudiantes_YYY['telefono_repre']; ?></td>
            </tr>
        
</table>






<table style="margin-top: 4px;" class="table2" >


<tr> 
 <th style="width:680px; height:20px;" BGCOLOR="<?php echo $color1;?>" align="left" >&nbsp; - Áreas de Aprendizaje y Aprendizajes Esperados.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " 1er Momento - Lapso "</th>
 <th style="width:80px; height:20px;" BGCOLOR="<?php echo $color1bb;?>" align="center" > Valoración</th>
</tr>


 <?php  

$tr_open = '<tr>'; 
$tr_close = '</tr>'; 


$td_openAaspecto = '<td style="width:760px;height:10px; background-color: #F4EEF8;"  align="left">'; 
$td_closeAaspecto = '</td>'; 


$td_openA = '<td style="width:680px;height:10px; background-color: #F4F3F3;"  align="left">'; 
$td_closeA = '</td>'; 

$td_openB = '<td style="width:80px;height:10px; background-color: #DBE2E8;"  align="center">'; 
$td_closeB = '</td>'; 

$th_open = '<th style="width:680px; height:16px; background-color: #DBD3E3;"  align="left" >'; 
$th_close = '</th>'; 

$tdd_open = '<td style="width:680px; height:16px; background-color: #e2e9da;"  align="left" ><b>'; 
$tdd_close = '</b></td>'; 

$asterisco = '&nbsp;*&nbsp;';
$guion = '&nbsp;&nbsp;&nbsp;-&nbsp;';
$dos_puntos = ':';
$el_punto = '';

$negrin_abre = '<b>';
$negrin_cierra = '</b>';

$lap1_q = 'probando';
$lap1_qu = 'EXC';
$espacio = '&nbsp;';

$parent_open = '(';
$parent_close = ')';

$el_reg_del_est_es = $row_datos_control['id_reg_estu_actual'];

$el_dicho_id_e = $row_datos_control['id_estud'];


include("../../conectar.php");

$query_notas1 = "SELECT * FROM asign_notas
               WHERE asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = 1
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas1 = mysqli_query($enlace, $query_notas1) or die(mysqli_error());
$row_datos_control_notasM1 = mysqli_fetch_array($datos_control_notas1); 


$query_notas2 = "SELECT * FROM asign_notas
               WHERE asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = 2
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas2 = mysqli_query($enlace, $query_notas2) or die(mysqli_error());
$row_datos_control_notasM2 = mysqli_fetch_array($datos_control_notas2); 


$query_notas3 = "SELECT * FROM asign_notas
               WHERE asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = 3
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas3 = mysqli_query($enlace, $query_notas3) or die(mysqli_error());
$row_datos_control_notasM3 = mysqli_fetch_array($datos_control_notas3); 


$query_notas4 = "SELECT * FROM asign_notas
               WHERE asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = 4
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas4 = mysqli_query($enlace, $query_notas4) or die(mysqli_error());
$row_datos_control_notasM4 = mysqli_fetch_array($datos_control_notas4); 


$query_notas5 = "SELECT * FROM asign_notas
               WHERE asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = 5
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas5 = mysqli_query($enlace, $query_notas5) or die(mysqli_error());
$row_datos_control_notasM5 = mysqli_fetch_array($datos_control_notas5); 


$query_notas6 = "SELECT * FROM asign_notas
               WHERE asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = 6
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas6 = mysqli_query($enlace, $query_notas6) or die(mysqli_error());
$row_datos_control_notasM6 = mysqli_fetch_array($datos_control_notas6); 


$query_notas7 = "SELECT * FROM asign_notas
               WHERE asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = 7
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas7 = mysqli_query($enlace, $query_notas7) or die(mysqli_error());
$row_datos_control_notasM7 = mysqli_fetch_array($datos_control_notas7); 


$query_notas8 = "SELECT * FROM asign_notas
               WHERE asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = 8
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas8 = mysqli_query($enlace, $query_notas8) or die(mysqli_error());
$row_datos_control_notasM8 = mysqli_fetch_array($datos_control_notas8); 


$query_notas9 = "SELECT * FROM asign_notas
               WHERE asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = 9
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas9 = mysqli_query($enlace, $query_notas9) or die(mysqli_error());
$row_datos_control_notasM9 = mysqli_fetch_array($datos_control_notas9); 


$query_notas10 = "SELECT * FROM asign_notas
               WHERE asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = 10
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas10 = mysqli_query($enlace, $query_notas10) or die(mysqli_error());
$row_datos_control_notasM10 = mysqli_fetch_array($datos_control_notas10); 


$query_notas11 = "SELECT * FROM asign_notas
               WHERE asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = 11
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas11 = mysqli_query($enlace, $query_notas11) or die(mysqli_error());
$row_datos_control_notasM11 = mysqli_fetch_array($datos_control_notas11); 


$query_notas12 = "SELECT * FROM asign_notas
               WHERE asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = 12
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas12 = mysqli_query($enlace, $query_notas12) or die(mysqli_error());
$row_datos_control_notasM12 = mysqli_fetch_array($datos_control_notas12); 


$query_notas13 = "SELECT * FROM asign_notas
               WHERE asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = 13
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas13 = mysqli_query($enlace, $query_notas13) or die(mysqli_error());
$row_datos_control_notasM13 = mysqli_fetch_array($datos_control_notas13); 


$query_notas14 = "SELECT * FROM asign_notas
               WHERE asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = 14
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas14 = mysqli_query($enlace, $query_notas14) or die(mysqli_error());
$row_datos_control_notasM14 = mysqli_fetch_array($datos_control_notas14); 

 mysqli_close($enlace);




if ($row_datos_controlmat['a_aaa'] != '') {  //  materia 1  $lap1_row_datos_control_notasM1

    echo $tr_open;
                echo $tdd_open; echo $asterisco;   echo $row_datos_controlmat['a_aaa']; echo $dos_puntos;  echo $tdd_close;
    echo $tr_close;


}



if ($row_datos_controlmat['a_aaa'] != '') { 

if ($row_datos_control_notasM1['d_11'] != '') {

$el_d_11 =  $row_datos_control_notasM1['d_11'];

include("../../conectar.php");
$query_indi_11 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_11'                       
               order by id_indicador limit 1" ;
$datos_control_indi_11 = mysqli_query($enlace, $query_indi_11) or die(mysqli_error());
$row_datos_control_indi_11 = mysqli_fetch_array($datos_control_indi_11); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_11['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

 

$row_datos_control_notasM1_11_redon =  number_format($row_datos_control_notasM1['nt_11'], 0, '.', '');

if ($formato_eva_M1 == '3') {
 
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_1) { $r_d_c_nM1_11_r_p=$literal_formato_1; $r_d_c_nM1_11_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_2) { $r_d_c_nM1_11_r_p=$literal_formato_2; $r_d_c_nM1_11_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_3) { $r_d_c_nM1_11_r_p=$literal_formato_3; $r_d_c_nM1_11_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_4) { $r_d_c_nM1_11_r_p=$literal_formato_4; $r_d_c_nM1_11_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_5) { $r_d_c_nM1_11_r_p=$literal_formato_5; $r_d_c_nM1_11_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_6) { $r_d_c_nM1_11_r_p=$literal_formato_6; $r_d_c_nM1_11_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_7) { $r_d_c_nM1_11_r_p=$literal_formato_7; $r_d_c_nM1_11_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_8) { $r_d_c_nM1_11_r_p=$literal_formato_8; $r_d_c_nM1_11_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_9) { $r_d_c_nM1_11_r_p=$literal_formato_9; $r_d_c_nM1_11_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_10) {$r_d_c_nM1_11_r_p=$literal_formato_10; $r_d_c_nM1_11_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_11) {$r_d_c_nM1_11_r_p=$literal_formato_11; $r_d_c_nM1_11_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_12) {$r_d_c_nM1_11_r_p=$literal_formato_12; $r_d_c_nM1_11_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M1 == '4') {
 
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_1) { $r_d_c_nM1_11_r_p=$cualitativa_formato_1; $r_d_c_nM1_11_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_2) { $r_d_c_nM1_11_r_p=$cualitativa_formato_2; $r_d_c_nM1_11_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_3) { $r_d_c_nM1_11_r_p=$cualitativa_formato_3; $r_d_c_nM1_11_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_4) { $r_d_c_nM1_11_r_p=$cualitativa_formato_4; $r_d_c_nM1_11_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_5) { $r_d_c_nM1_11_r_p=$cualitativa_formato_5; $r_d_c_nM1_11_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_6) { $r_d_c_nM1_11_r_p=$cualitativa_formato_6; $r_d_c_nM1_11_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_7) { $r_d_c_nM1_11_r_p=$cualitativa_formato_7; $r_d_c_nM1_11_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_8) { $r_d_c_nM1_11_r_p=$cualitativa_formato_8; $r_d_c_nM1_11_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_9) { $r_d_c_nM1_11_r_p=$cualitativa_formato_9; $r_d_c_nM1_11_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_10) {$r_d_c_nM1_11_r_p=$cualitativa_formato_10; $r_d_c_nM1_11_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_11) {$r_d_c_nM1_11_r_p=$cualitativa_formato_11; $r_d_c_nM1_11_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM1_11_redon>=$comparativo_formato_12) {$r_d_c_nM1_11_r_p=$cualitativa_formato_12; $r_d_c_nM1_11_r_p_co = $cualitativa_formato_12_completo;} 

}


if ($row_datos_control_notasM1['nt_11'] == '') { $r_d_c_nM1_11_r_p = $row_datos_modcabecc['no_entrego_abre']; }



echo $r_d_c_nM1_11_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM1_11_r_p_co; echo $parent_close;

                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM1['d_12'] != '') {

$el_d_12 =  $row_datos_control_notasM1['d_12'];

include("../../conectar.php");
$query_indi_12 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_12'                     
               order by id_indicador limit 1" ;
$datos_control_indi_12 = mysqli_query($enlace, $query_indi_12) or die(mysqli_error());
$row_datos_control_indi_12 = mysqli_fetch_array($datos_control_indi_12); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_12['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM1_12_redon =  number_format($row_datos_control_notasM1['nt_12'], 0, '.', '');

if ($formato_eva_M1 == '3') {
 
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_1) { $r_d_c_nM1_12_r_p=$literal_formato_1; $r_d_c_nM1_12_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_2) { $r_d_c_nM1_12_r_p=$literal_formato_2; $r_d_c_nM1_12_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_3) { $r_d_c_nM1_12_r_p=$literal_formato_3; $r_d_c_nM1_12_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_4) { $r_d_c_nM1_12_r_p=$literal_formato_4; $r_d_c_nM1_12_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_5) { $r_d_c_nM1_12_r_p=$literal_formato_5; $r_d_c_nM1_12_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_6) { $r_d_c_nM1_12_r_p=$literal_formato_6; $r_d_c_nM1_12_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_7) { $r_d_c_nM1_12_r_p=$literal_formato_7; $r_d_c_nM1_12_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_8) { $r_d_c_nM1_12_r_p=$literal_formato_8; $r_d_c_nM1_12_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_9) { $r_d_c_nM1_12_r_p=$literal_formato_9; $r_d_c_nM1_12_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_10) {$r_d_c_nM1_12_r_p=$literal_formato_10; $r_d_c_nM1_12_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_11) {$r_d_c_nM1_12_r_p=$literal_formato_11; $r_d_c_nM1_12_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_12) {$r_d_c_nM1_12_r_p=$literal_formato_12; $r_d_c_nM1_12_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M1 == '4') {
 
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_1) { $r_d_c_nM1_12_r_p=$cualitativa_formato_1; $r_d_c_nM1_12_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_2) { $r_d_c_nM1_12_r_p=$cualitativa_formato_2; $r_d_c_nM1_12_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_3) { $r_d_c_nM1_12_r_p=$cualitativa_formato_3; $r_d_c_nM1_12_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_4) { $r_d_c_nM1_12_r_p=$cualitativa_formato_4; $r_d_c_nM1_12_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_5) { $r_d_c_nM1_12_r_p=$cualitativa_formato_5; $r_d_c_nM1_12_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_6) { $r_d_c_nM1_12_r_p=$cualitativa_formato_6; $r_d_c_nM1_12_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_7) { $r_d_c_nM1_12_r_p=$cualitativa_formato_7; $r_d_c_nM1_12_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_8) { $r_d_c_nM1_12_r_p=$cualitativa_formato_8; $r_d_c_nM1_12_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_9) { $r_d_c_nM1_12_r_p=$cualitativa_formato_9; $r_d_c_nM1_12_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_10) {$r_d_c_nM1_12_r_p=$cualitativa_formato_10; $r_d_c_nM1_12_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_11) {$r_d_c_nM1_12_r_p=$cualitativa_formato_11; $r_d_c_nM1_12_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM1_12_redon>=$comparativo_formato_12) {$r_d_c_nM1_12_r_p=$cualitativa_formato_12; $r_d_c_nM1_12_r_p_co = $cualitativa_formato_12_completo;} 

}


if ($row_datos_control_notasM1['nt_12'] == '') { $r_d_c_nM1_12_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM1_12_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM1_12_r_p_co; echo $parent_close;

                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM1['d_13'] != '') {


$el_d_13 =  $row_datos_control_notasM1['d_13'];

include("../../conectar.php");
$query_indi_13 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_13'                     
               order by id_indicador limit 1" ;
$datos_control_indi_13 = mysqli_query($enlace, $query_indi_13) or die(mysqli_error());
$row_datos_control_indi_13 = mysqli_fetch_array($datos_control_indi_13); 
 
 mysqli_close($enlace);


echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_13['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
                                        $row_datos_control_notasM1_13_redon =  number_format($row_datos_control_notasM1['nt_13'], 0, '.', '');

if ($formato_eva_M1 == '3') {
 
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_1) { $r_d_c_nM1_13_r_p=$literal_formato_1; $r_d_c_nM1_13_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_2) { $r_d_c_nM1_13_r_p=$literal_formato_2; $r_d_c_nM1_13_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_3) { $r_d_c_nM1_13_r_p=$literal_formato_3; $r_d_c_nM1_13_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_4) { $r_d_c_nM1_13_r_p=$literal_formato_4; $r_d_c_nM1_13_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_5) { $r_d_c_nM1_13_r_p=$literal_formato_5; $r_d_c_nM1_13_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_6) { $r_d_c_nM1_13_r_p=$literal_formato_6; $r_d_c_nM1_13_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_7) { $r_d_c_nM1_13_r_p=$literal_formato_7; $r_d_c_nM1_13_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_8) { $r_d_c_nM1_13_r_p=$literal_formato_8; $r_d_c_nM1_13_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_9) { $r_d_c_nM1_13_r_p=$literal_formato_9; $r_d_c_nM1_13_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_10) {$r_d_c_nM1_13_r_p=$literal_formato_10; $r_d_c_nM1_13_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_11) {$r_d_c_nM1_13_r_p=$literal_formato_11; $r_d_c_nM1_13_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_12) {$r_d_c_nM1_13_r_p=$literal_formato_12; $r_d_c_nM1_13_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M1 == '4') {
 
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_1) { $r_d_c_nM1_13_r_p=$cualitativa_formato_1; $r_d_c_nM1_13_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_2) { $r_d_c_nM1_13_r_p=$cualitativa_formato_2; $r_d_c_nM1_13_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_3) { $r_d_c_nM1_13_r_p=$cualitativa_formato_3; $r_d_c_nM1_13_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_4) { $r_d_c_nM1_13_r_p=$cualitativa_formato_4; $r_d_c_nM1_13_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_5) { $r_d_c_nM1_13_r_p=$cualitativa_formato_5; $r_d_c_nM1_13_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_6) { $r_d_c_nM1_13_r_p=$cualitativa_formato_6; $r_d_c_nM1_13_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_7) { $r_d_c_nM1_13_r_p=$cualitativa_formato_7; $r_d_c_nM1_13_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_8) { $r_d_c_nM1_13_r_p=$cualitativa_formato_8; $r_d_c_nM1_13_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_9) { $r_d_c_nM1_13_r_p=$cualitativa_formato_9; $r_d_c_nM1_13_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_10) {$r_d_c_nM1_13_r_p=$cualitativa_formato_10; $r_d_c_nM1_13_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_11) {$r_d_c_nM1_13_r_p=$cualitativa_formato_11; $r_d_c_nM1_13_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM1_13_redon>=$comparativo_formato_12) {$r_d_c_nM1_13_r_p=$cualitativa_formato_12; $r_d_c_nM1_13_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM1['nt_13'] == '') { $r_d_c_nM1_13_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM1_13_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM1_13_r_p_co; echo $parent_close;
                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM1['d_14'] != '') {

$el_d_14 =  $row_datos_control_notasM1['d_14'];

include("../../conectar.php");
$query_indi_14 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_14'                     
               order by id_indicador limit 1" ;
$datos_control_indi_14 = mysqli_query($enlace, $query_indi_14) or die(mysqli_error());
$row_datos_control_indi_14 = mysqli_fetch_array($datos_control_indi_14); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_14['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM1_14_redon =  number_format($row_datos_control_notasM1['nt_14'], 0, '.', '');

if ($formato_eva_M1 == '3') {
 
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_1) { $r_d_c_nM1_14_r_p=$literal_formato_1; $r_d_c_nM1_14_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_2) { $r_d_c_nM1_14_r_p=$literal_formato_2; $r_d_c_nM1_14_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_3) { $r_d_c_nM1_14_r_p=$literal_formato_3; $r_d_c_nM1_14_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_4) { $r_d_c_nM1_14_r_p=$literal_formato_4; $r_d_c_nM1_14_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_5) { $r_d_c_nM1_14_r_p=$literal_formato_5; $r_d_c_nM1_14_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_6) { $r_d_c_nM1_14_r_p=$literal_formato_6; $r_d_c_nM1_14_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_7) { $r_d_c_nM1_14_r_p=$literal_formato_7; $r_d_c_nM1_14_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_8) { $r_d_c_nM1_14_r_p=$literal_formato_8; $r_d_c_nM1_14_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_9) { $r_d_c_nM1_14_r_p=$literal_formato_9; $r_d_c_nM1_14_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_10) {$r_d_c_nM1_14_r_p=$literal_formato_10; $r_d_c_nM1_14_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_11) {$r_d_c_nM1_14_r_p=$literal_formato_11; $r_d_c_nM1_14_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_12) {$r_d_c_nM1_14_r_p=$literal_formato_12; $r_d_c_nM1_14_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M1 == '4') {
 
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_1) { $r_d_c_nM1_14_r_p=$cualitativa_formato_1; $r_d_c_nM1_14_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_2) { $r_d_c_nM1_14_r_p=$cualitativa_formato_2; $r_d_c_nM1_14_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_3) { $r_d_c_nM1_14_r_p=$cualitativa_formato_3; $r_d_c_nM1_14_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_4) { $r_d_c_nM1_14_r_p=$cualitativa_formato_4; $r_d_c_nM1_14_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_5) { $r_d_c_nM1_14_r_p=$cualitativa_formato_5; $r_d_c_nM1_14_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_6) { $r_d_c_nM1_14_r_p=$cualitativa_formato_6; $r_d_c_nM1_14_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_7) { $r_d_c_nM1_14_r_p=$cualitativa_formato_7; $r_d_c_nM1_14_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_8) { $r_d_c_nM1_14_r_p=$cualitativa_formato_8; $r_d_c_nM1_14_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_9) { $r_d_c_nM1_14_r_p=$cualitativa_formato_9; $r_d_c_nM1_14_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_10) {$r_d_c_nM1_14_r_p=$cualitativa_formato_10; $r_d_c_nM1_14_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_11) {$r_d_c_nM1_14_r_p=$cualitativa_formato_11; $r_d_c_nM1_14_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM1_14_redon>=$comparativo_formato_12) {$r_d_c_nM1_14_r_p=$cualitativa_formato_12; $r_d_c_nM1_14_r_p_co = $cualitativa_formato_12_completo;} 

} 

if ($row_datos_control_notasM1['nt_14'] == '') { $r_d_c_nM1_14_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM1_14_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM1_14_r_p_co; echo $parent_close; 
                            echo $td_closeB;


  echo $tr_close;

}



if ($row_datos_control_notasM1['d_15'] != '') {

$el_d_15 =  $row_datos_control_notasM1['d_15'];

include("../../conectar.php");
$query_indi_15 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_15'                     
               order by id_indicador limit 1" ;
$datos_control_indi_15 = mysqli_query($enlace, $query_indi_15) or die(mysqli_error());
$row_datos_control_indi_15 = mysqli_fetch_array($datos_control_indi_15); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_15['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM1_15_redon =  number_format($row_datos_control_notasM1['nt_15'], 0, '.', '');

if ($formato_eva_M1 == '3') {
 
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_1) { $r_d_c_nM1_15_r_p=$literal_formato_1; $r_d_c_nM1_15_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_2) { $r_d_c_nM1_15_r_p=$literal_formato_2; $r_d_c_nM1_15_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_3) { $r_d_c_nM1_15_r_p=$literal_formato_3; $r_d_c_nM1_15_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_4) { $r_d_c_nM1_15_r_p=$literal_formato_4; $r_d_c_nM1_15_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_5) { $r_d_c_nM1_15_r_p=$literal_formato_5; $r_d_c_nM1_15_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_6) { $r_d_c_nM1_15_r_p=$literal_formato_6; $r_d_c_nM1_15_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_7) { $r_d_c_nM1_15_r_p=$literal_formato_7; $r_d_c_nM1_15_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_8) { $r_d_c_nM1_15_r_p=$literal_formato_8; $r_d_c_nM1_15_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_9) { $r_d_c_nM1_15_r_p=$literal_formato_9; $r_d_c_nM1_15_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_10) {$r_d_c_nM1_15_r_p=$literal_formato_10; $r_d_c_nM1_15_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_11) {$r_d_c_nM1_15_r_p=$literal_formato_11; $r_d_c_nM1_15_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_12) {$r_d_c_nM1_15_r_p=$literal_formato_12; $r_d_c_nM1_15_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M1 == '4') {
 
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_1) { $r_d_c_nM1_15_r_p=$cualitativa_formato_1; $r_d_c_nM1_15_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_2) { $r_d_c_nM1_15_r_p=$cualitativa_formato_2; $r_d_c_nM1_15_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_3) { $r_d_c_nM1_15_r_p=$cualitativa_formato_3; $r_d_c_nM1_15_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_4) { $r_d_c_nM1_15_r_p=$cualitativa_formato_4; $r_d_c_nM1_15_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_5) { $r_d_c_nM1_15_r_p=$cualitativa_formato_5; $r_d_c_nM1_15_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_6) { $r_d_c_nM1_15_r_p=$cualitativa_formato_6; $r_d_c_nM1_15_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_7) { $r_d_c_nM1_15_r_p=$cualitativa_formato_7; $r_d_c_nM1_15_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_8) { $r_d_c_nM1_15_r_p=$cualitativa_formato_8; $r_d_c_nM1_15_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_9) { $r_d_c_nM1_15_r_p=$cualitativa_formato_9; $r_d_c_nM1_15_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_10) {$r_d_c_nM1_15_r_p=$cualitativa_formato_10; $r_d_c_nM1_15_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_11) {$r_d_c_nM1_15_r_p=$cualitativa_formato_11; $r_d_c_nM1_15_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM1_15_redon>=$comparativo_formato_12) {$r_d_c_nM1_15_r_p=$cualitativa_formato_12; $r_d_c_nM1_15_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM1['nt_15'] == '') { $r_d_c_nM1_15_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM1_15_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM1_15_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}


if ($row_datos_control_notasM1['d_16'] != '') {

$el_d_16 =  $row_datos_control_notasM1['d_16'];

include("../../conectar.php");
$query_indi_16 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_16'                     
               order by id_indicador limit 1" ;
$datos_control_indi_16 = mysqli_query($enlace, $query_indi_16) or die(mysqli_error());
$row_datos_control_indi_16 = mysqli_fetch_array($datos_control_indi_16); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_16['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

                            $row_datos_control_notasM1_16_redon =  number_format($row_datos_control_notasM1['nt_16'], 0, '.', '');

if ($formato_eva_M1 == '3') {
 
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_1) { $r_d_c_nM1_16_r_p=$literal_formato_1; $r_d_c_nM1_16_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_2) { $r_d_c_nM1_16_r_p=$literal_formato_2; $r_d_c_nM1_16_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_3) { $r_d_c_nM1_16_r_p=$literal_formato_3; $r_d_c_nM1_16_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_4) { $r_d_c_nM1_16_r_p=$literal_formato_4; $r_d_c_nM1_16_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_5) { $r_d_c_nM1_16_r_p=$literal_formato_5; $r_d_c_nM1_16_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_6) { $r_d_c_nM1_16_r_p=$literal_formato_6; $r_d_c_nM1_16_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_7) { $r_d_c_nM1_16_r_p=$literal_formato_7; $r_d_c_nM1_16_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_8) { $r_d_c_nM1_16_r_p=$literal_formato_8; $r_d_c_nM1_16_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_9) { $r_d_c_nM1_16_r_p=$literal_formato_9; $r_d_c_nM1_16_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_10) {$r_d_c_nM1_16_r_p=$literal_formato_10; $r_d_c_nM1_16_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_11) {$r_d_c_nM1_16_r_p=$literal_formato_11; $r_d_c_nM1_16_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_12) {$r_d_c_nM1_16_r_p=$literal_formato_12; $r_d_c_nM1_16_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M1 == '4') {
 
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_1) { $r_d_c_nM1_16_r_p=$cualitativa_formato_1; $r_d_c_nM1_16_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_2) { $r_d_c_nM1_16_r_p=$cualitativa_formato_2; $r_d_c_nM1_16_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_3) { $r_d_c_nM1_16_r_p=$cualitativa_formato_3; $r_d_c_nM1_16_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_4) { $r_d_c_nM1_16_r_p=$cualitativa_formato_4; $r_d_c_nM1_16_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_5) { $r_d_c_nM1_16_r_p=$cualitativa_formato_5; $r_d_c_nM1_16_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_6) { $r_d_c_nM1_16_r_p=$cualitativa_formato_6; $r_d_c_nM1_16_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_7) { $r_d_c_nM1_16_r_p=$cualitativa_formato_7; $r_d_c_nM1_16_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_8) { $r_d_c_nM1_16_r_p=$cualitativa_formato_8; $r_d_c_nM1_16_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_9) { $r_d_c_nM1_16_r_p=$cualitativa_formato_9; $r_d_c_nM1_16_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_10) {$r_d_c_nM1_16_r_p=$cualitativa_formato_10; $r_d_c_nM1_16_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_11) {$r_d_c_nM1_16_r_p=$cualitativa_formato_11; $r_d_c_nM1_16_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM1_16_redon>=$comparativo_formato_12) {$r_d_c_nM1_16_r_p=$cualitativa_formato_12; $r_d_c_nM1_16_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM1['nt_16'] == '') { $r_d_c_nM1_16_r_p = $row_datos_modcabecc['no_entrego_abre']; }





echo $r_d_c_nM1_16_r_p;  echo $espacio; // echo $parent_open; echo $r_d_c_nM1_16_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM1['d_17'] != '') {

$el_d_17 =  $row_datos_control_notasM1['d_17'];

include("../../conectar.php");
$query_indi_17 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_17'                     
               order by id_indicador limit 1" ;
$datos_control_indi_17 = mysqli_query($enlace, $query_indi_17) or die(mysqli_error());
$row_datos_control_indi_17 = mysqli_fetch_array($datos_control_indi_17); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_17['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM1_17_redon =  number_format($row_datos_control_notasM1['nt_17'], 0, '.', '');
if ($formato_eva_M1 == '3') {
 
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_1) { $r_d_c_nM1_17_r_p=$literal_formato_1; $r_d_c_nM1_17_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_2) { $r_d_c_nM1_17_r_p=$literal_formato_2; $r_d_c_nM1_17_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_3) { $r_d_c_nM1_17_r_p=$literal_formato_3; $r_d_c_nM1_17_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_4) { $r_d_c_nM1_17_r_p=$literal_formato_4; $r_d_c_nM1_17_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_5) { $r_d_c_nM1_17_r_p=$literal_formato_5; $r_d_c_nM1_17_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_6) { $r_d_c_nM1_17_r_p=$literal_formato_6; $r_d_c_nM1_17_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_7) { $r_d_c_nM1_17_r_p=$literal_formato_7; $r_d_c_nM1_17_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_8) { $r_d_c_nM1_17_r_p=$literal_formato_8; $r_d_c_nM1_17_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_9) { $r_d_c_nM1_17_r_p=$literal_formato_9; $r_d_c_nM1_17_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_10) {$r_d_c_nM1_17_r_p=$literal_formato_10; $r_d_c_nM1_17_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_11) {$r_d_c_nM1_17_r_p=$literal_formato_11; $r_d_c_nM1_17_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_12) {$r_d_c_nM1_17_r_p=$literal_formato_12; $r_d_c_nM1_17_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M1 == '4') {
 
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_1) { $r_d_c_nM1_17_r_p=$cualitativa_formato_1; $r_d_c_nM1_17_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_2) { $r_d_c_nM1_17_r_p=$cualitativa_formato_2; $r_d_c_nM1_17_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_3) { $r_d_c_nM1_17_r_p=$cualitativa_formato_3; $r_d_c_nM1_17_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_4) { $r_d_c_nM1_17_r_p=$cualitativa_formato_4; $r_d_c_nM1_17_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_5) { $r_d_c_nM1_17_r_p=$cualitativa_formato_5; $r_d_c_nM1_17_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_6) { $r_d_c_nM1_17_r_p=$cualitativa_formato_6; $r_d_c_nM1_17_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_7) { $r_d_c_nM1_17_r_p=$cualitativa_formato_7; $r_d_c_nM1_17_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_8) { $r_d_c_nM1_17_r_p=$cualitativa_formato_8; $r_d_c_nM1_17_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_9) { $r_d_c_nM1_17_r_p=$cualitativa_formato_9; $r_d_c_nM1_17_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_10) {$r_d_c_nM1_17_r_p=$cualitativa_formato_10; $r_d_c_nM1_17_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_11) {$r_d_c_nM1_17_r_p=$cualitativa_formato_11; $r_d_c_nM1_17_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM1_17_redon>=$comparativo_formato_12) {$r_d_c_nM1_17_r_p=$cualitativa_formato_12; $r_d_c_nM1_17_r_p_co = $cualitativa_formato_12_completo;} 

}


if ($row_datos_control_notasM1['nt_17'] == '') { $r_d_c_nM1_17_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM1_17_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM1_17_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}
}





if ($row_datos_controlmat['b_bbb'] != '') {

    echo $tr_open;
                echo $tdd_open; echo $asterisco;   echo $row_datos_controlmat['b_bbb']; echo $dos_puntos;  echo $tdd_close;
     echo $tr_close;

}


if ($row_datos_controlmat['b_bbb'] != '') { 

if ($row_datos_control_notasM2['d_11'] != '') {

$el_d_11 =  $row_datos_control_notasM2['d_11'];

include("../../conectar.php");
$query_indi_11 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_11'                       
               order by id_indicador limit 1" ;
$datos_control_indi_11 = mysqli_query($enlace, $query_indi_11) or die(mysqli_error());
$row_datos_control_indi_11 = mysqli_fetch_array($datos_control_indi_11); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_11['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM2_11_redon =  number_format($row_datos_control_notasM2['nt_11'], 0, '.', '');
if ($formato_eva_M2 == '3') {
 
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_1) { $r_d_c_nM2_11_r_p=$literal_formato_1; $r_d_c_nM2_11_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_2) { $r_d_c_nM2_11_r_p=$literal_formato_2; $r_d_c_nM2_11_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_3) { $r_d_c_nM2_11_r_p=$literal_formato_3; $r_d_c_nM2_11_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_4) { $r_d_c_nM2_11_r_p=$literal_formato_4; $r_d_c_nM2_11_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_5) { $r_d_c_nM2_11_r_p=$literal_formato_5; $r_d_c_nM2_11_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_6) { $r_d_c_nM2_11_r_p=$literal_formato_6; $r_d_c_nM2_11_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_7) { $r_d_c_nM2_11_r_p=$literal_formato_7; $r_d_c_nM2_11_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_8) { $r_d_c_nM2_11_r_p=$literal_formato_8; $r_d_c_nM2_11_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_9) { $r_d_c_nM2_11_r_p=$literal_formato_9; $r_d_c_nM2_11_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_10) {$r_d_c_nM2_11_r_p=$literal_formato_10; $r_d_c_nM2_11_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_11) {$r_d_c_nM2_11_r_p=$literal_formato_11; $r_d_c_nM2_11_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_12) {$r_d_c_nM2_11_r_p=$literal_formato_12; $r_d_c_nM2_11_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M2 == '4') {
 
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_1) { $r_d_c_nM2_11_r_p=$cualitativa_formato_1; $r_d_c_nM2_11_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_2) { $r_d_c_nM2_11_r_p=$cualitativa_formato_2; $r_d_c_nM2_11_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_3) { $r_d_c_nM2_11_r_p=$cualitativa_formato_3; $r_d_c_nM2_11_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_4) { $r_d_c_nM2_11_r_p=$cualitativa_formato_4; $r_d_c_nM2_11_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_5) { $r_d_c_nM2_11_r_p=$cualitativa_formato_5; $r_d_c_nM2_11_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_6) { $r_d_c_nM2_11_r_p=$cualitativa_formato_6; $r_d_c_nM2_11_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_7) { $r_d_c_nM2_11_r_p=$cualitativa_formato_7; $r_d_c_nM2_11_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_8) { $r_d_c_nM2_11_r_p=$cualitativa_formato_8; $r_d_c_nM2_11_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_9) { $r_d_c_nM2_11_r_p=$cualitativa_formato_9; $r_d_c_nM2_11_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_10) {$r_d_c_nM2_11_r_p=$cualitativa_formato_10; $r_d_c_nM2_11_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_11) {$r_d_c_nM2_11_r_p=$cualitativa_formato_11; $r_d_c_nM2_11_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM2_11_redon>=$comparativo_formato_12) {$r_d_c_nM2_11_r_p=$cualitativa_formato_12; $r_d_c_nM2_11_r_p_co = $cualitativa_formato_12_completo;} 

}




if ($row_datos_control_notasM2['nt_11'] == '') { $r_d_c_nM2_11_r_p = $row_datos_modcabecc['no_entrego_abre']; }




echo $r_d_c_nM2_11_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM2_11_r_p_co; echo $parent_close;

                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM2['d_12'] != '') {

$el_d_12 =  $row_datos_control_notasM2['d_12'];

include("../../conectar.php");
$query_indi_12 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_12'                     
               order by id_indicador limit 1" ;
$datos_control_indi_12 = mysqli_query($enlace, $query_indi_12) or die(mysqli_error());
$row_datos_control_indi_12 = mysqli_fetch_array($datos_control_indi_12); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_12['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM2_12_redon =  number_format($row_datos_control_notasM2['nt_12'], 0, '.', '');

if ($formato_eva_M2 == '3') {
 
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_1) { $r_d_c_nM2_12_r_p=$literal_formato_1; $r_d_c_nM2_12_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_2) { $r_d_c_nM2_12_r_p=$literal_formato_2; $r_d_c_nM2_12_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_3) { $r_d_c_nM2_12_r_p=$literal_formato_3; $r_d_c_nM2_12_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_4) { $r_d_c_nM2_12_r_p=$literal_formato_4; $r_d_c_nM2_12_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_5) { $r_d_c_nM2_12_r_p=$literal_formato_5; $r_d_c_nM2_12_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_6) { $r_d_c_nM2_12_r_p=$literal_formato_6; $r_d_c_nM2_12_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_7) { $r_d_c_nM2_12_r_p=$literal_formato_7; $r_d_c_nM2_12_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_8) { $r_d_c_nM2_12_r_p=$literal_formato_8; $r_d_c_nM2_12_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_9) { $r_d_c_nM2_12_r_p=$literal_formato_9; $r_d_c_nM2_12_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_10) {$r_d_c_nM2_12_r_p=$literal_formato_10; $r_d_c_nM2_12_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_11) {$r_d_c_nM2_12_r_p=$literal_formato_11; $r_d_c_nM2_12_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_12) {$r_d_c_nM2_12_r_p=$literal_formato_12; $r_d_c_nM2_12_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M2 == '4') {
 
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_1) { $r_d_c_nM2_12_r_p=$cualitativa_formato_1; $r_d_c_nM2_12_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_2) { $r_d_c_nM2_12_r_p=$cualitativa_formato_2; $r_d_c_nM2_12_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_3) { $r_d_c_nM2_12_r_p=$cualitativa_formato_3; $r_d_c_nM2_12_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_4) { $r_d_c_nM2_12_r_p=$cualitativa_formato_4; $r_d_c_nM2_12_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_5) { $r_d_c_nM2_12_r_p=$cualitativa_formato_5; $r_d_c_nM2_12_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_6) { $r_d_c_nM2_12_r_p=$cualitativa_formato_6; $r_d_c_nM2_12_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_7) { $r_d_c_nM2_12_r_p=$cualitativa_formato_7; $r_d_c_nM2_12_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_8) { $r_d_c_nM2_12_r_p=$cualitativa_formato_8; $r_d_c_nM2_12_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_9) { $r_d_c_nM2_12_r_p=$cualitativa_formato_9; $r_d_c_nM2_12_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_10) {$r_d_c_nM2_12_r_p=$cualitativa_formato_10; $r_d_c_nM2_12_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_11) {$r_d_c_nM2_12_r_p=$cualitativa_formato_11; $r_d_c_nM2_12_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM2_12_redon>=$comparativo_formato_12) {$r_d_c_nM2_12_r_p=$cualitativa_formato_12; $r_d_c_nM2_12_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM2['nt_12'] == '') { $r_d_c_nM2_12_r_p = $row_datos_modcabecc['no_entrego_abre']; }



echo $r_d_c_nM2_12_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM2_12_r_p_co; echo $parent_close;

                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM2['d_13'] != '') {


$el_d_13 =  $row_datos_control_notasM2['d_13'];

include("../../conectar.php");
$query_indi_13 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_13'                     
               order by id_indicador limit 1" ;
$datos_control_indi_13 = mysqli_query($enlace, $query_indi_13) or die(mysqli_error());
$row_datos_control_indi_13 = mysqli_fetch_array($datos_control_indi_13); 
 
 mysqli_close($enlace);


echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_13['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
                                        $row_datos_control_notasM2_13_redon =  number_format($row_datos_control_notasM2['nt_13'], 0, '.', '');

if ($formato_eva_M2 == '3') {
 
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_1) { $r_d_c_nM2_13_r_p=$literal_formato_1; $r_d_c_nM2_13_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_2) { $r_d_c_nM2_13_r_p=$literal_formato_2; $r_d_c_nM2_13_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_3) { $r_d_c_nM2_13_r_p=$literal_formato_3; $r_d_c_nM2_13_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_4) { $r_d_c_nM2_13_r_p=$literal_formato_4; $r_d_c_nM2_13_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_5) { $r_d_c_nM2_13_r_p=$literal_formato_5; $r_d_c_nM2_13_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_6) { $r_d_c_nM2_13_r_p=$literal_formato_6; $r_d_c_nM2_13_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_7) { $r_d_c_nM2_13_r_p=$literal_formato_7; $r_d_c_nM2_13_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_8) { $r_d_c_nM2_13_r_p=$literal_formato_8; $r_d_c_nM2_13_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_9) { $r_d_c_nM2_13_r_p=$literal_formato_9; $r_d_c_nM2_13_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_10) {$r_d_c_nM2_13_r_p=$literal_formato_10; $r_d_c_nM2_13_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_11) {$r_d_c_nM2_13_r_p=$literal_formato_11; $r_d_c_nM2_13_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_12) {$r_d_c_nM2_13_r_p=$literal_formato_12; $r_d_c_nM2_13_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M2 == '4') {
 
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_1) { $r_d_c_nM2_13_r_p=$cualitativa_formato_1; $r_d_c_nM2_13_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_2) { $r_d_c_nM2_13_r_p=$cualitativa_formato_2; $r_d_c_nM2_13_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_3) { $r_d_c_nM2_13_r_p=$cualitativa_formato_3; $r_d_c_nM2_13_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_4) { $r_d_c_nM2_13_r_p=$cualitativa_formato_4; $r_d_c_nM2_13_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_5) { $r_d_c_nM2_13_r_p=$cualitativa_formato_5; $r_d_c_nM2_13_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_6) { $r_d_c_nM2_13_r_p=$cualitativa_formato_6; $r_d_c_nM2_13_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_7) { $r_d_c_nM2_13_r_p=$cualitativa_formato_7; $r_d_c_nM2_13_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_8) { $r_d_c_nM2_13_r_p=$cualitativa_formato_8; $r_d_c_nM2_13_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_9) { $r_d_c_nM2_13_r_p=$cualitativa_formato_9; $r_d_c_nM2_13_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_10) {$r_d_c_nM2_13_r_p=$cualitativa_formato_10; $r_d_c_nM2_13_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_11) {$r_d_c_nM2_13_r_p=$cualitativa_formato_11; $r_d_c_nM2_13_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM2_13_redon>=$comparativo_formato_12) {$r_d_c_nM2_13_r_p=$cualitativa_formato_12; $r_d_c_nM2_13_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM2['nt_13'] == '') { $r_d_c_nM2_13_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM2_13_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM2_13_r_p_co; echo $parent_close;
                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM2['d_14'] != '') {

$el_d_14 =  $row_datos_control_notasM2['d_14'];

include("../../conectar.php");
$query_indi_14 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_14'                     
               order by id_indicador limit 1" ;
$datos_control_indi_14 = mysqli_query($enlace, $query_indi_14) or die(mysqli_error());
$row_datos_control_indi_14 = mysqli_fetch_array($datos_control_indi_14); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_14['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM2_14_redon =  number_format($row_datos_control_notasM2['nt_14'], 0, '.', '');


if ($formato_eva_M2 == '3') {
 
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_1) { $r_d_c_nM2_14_r_p=$literal_formato_1; $r_d_c_nM2_14_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_2) { $r_d_c_nM2_14_r_p=$literal_formato_2; $r_d_c_nM2_14_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_3) { $r_d_c_nM2_14_r_p=$literal_formato_3; $r_d_c_nM2_14_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_4) { $r_d_c_nM2_14_r_p=$literal_formato_4; $r_d_c_nM2_14_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_5) { $r_d_c_nM2_14_r_p=$literal_formato_5; $r_d_c_nM2_14_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_6) { $r_d_c_nM2_14_r_p=$literal_formato_6; $r_d_c_nM2_14_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_7) { $r_d_c_nM2_14_r_p=$literal_formato_7; $r_d_c_nM2_14_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_8) { $r_d_c_nM2_14_r_p=$literal_formato_8; $r_d_c_nM2_14_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_9) { $r_d_c_nM2_14_r_p=$literal_formato_9; $r_d_c_nM2_14_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_10) {$r_d_c_nM2_14_r_p=$literal_formato_10; $r_d_c_nM2_14_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_11) {$r_d_c_nM2_14_r_p=$literal_formato_11; $r_d_c_nM2_14_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_12) {$r_d_c_nM2_14_r_p=$literal_formato_12; $r_d_c_nM2_14_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M2 == '4') {
 
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_1) { $r_d_c_nM2_14_r_p=$cualitativa_formato_1; $r_d_c_nM2_14_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_2) { $r_d_c_nM2_14_r_p=$cualitativa_formato_2; $r_d_c_nM2_14_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_3) { $r_d_c_nM2_14_r_p=$cualitativa_formato_3; $r_d_c_nM2_14_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_4) { $r_d_c_nM2_14_r_p=$cualitativa_formato_4; $r_d_c_nM2_14_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_5) { $r_d_c_nM2_14_r_p=$cualitativa_formato_5; $r_d_c_nM2_14_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_6) { $r_d_c_nM2_14_r_p=$cualitativa_formato_6; $r_d_c_nM2_14_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_7) { $r_d_c_nM2_14_r_p=$cualitativa_formato_7; $r_d_c_nM2_14_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_8) { $r_d_c_nM2_14_r_p=$cualitativa_formato_8; $r_d_c_nM2_14_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_9) { $r_d_c_nM2_14_r_p=$cualitativa_formato_9; $r_d_c_nM2_14_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_10) {$r_d_c_nM2_14_r_p=$cualitativa_formato_10; $r_d_c_nM2_14_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_11) {$r_d_c_nM2_14_r_p=$cualitativa_formato_11; $r_d_c_nM2_14_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM2_14_redon>=$comparativo_formato_12) {$r_d_c_nM2_14_r_p=$cualitativa_formato_12; $r_d_c_nM2_14_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM2['nt_14'] == '') { $r_d_c_nM2_14_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM2_14_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM2_14_r_p_co; echo $parent_close; 
                            echo $td_closeB;


  echo $tr_close;

}



if ($row_datos_control_notasM2['d_15'] != '') {

$el_d_15 =  $row_datos_control_notasM2['d_15'];

include("../../conectar.php");
$query_indi_15 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_15'                     
               order by id_indicador limit 1" ;
$datos_control_indi_15 = mysqli_query($enlace, $query_indi_15) or die(mysqli_error());
$row_datos_control_indi_15 = mysqli_fetch_array($datos_control_indi_15); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_15['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM2_15_redon =  number_format($row_datos_control_notasM2['nt_15'], 0, '.', '');
if ($formato_eva_M2 == '3') {
 
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_1) { $r_d_c_nM2_15_r_p=$literal_formato_1; $r_d_c_nM2_15_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_2) { $r_d_c_nM2_15_r_p=$literal_formato_2; $r_d_c_nM2_15_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_3) { $r_d_c_nM2_15_r_p=$literal_formato_3; $r_d_c_nM2_15_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_4) { $r_d_c_nM2_15_r_p=$literal_formato_4; $r_d_c_nM2_15_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_5) { $r_d_c_nM2_15_r_p=$literal_formato_5; $r_d_c_nM2_15_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_6) { $r_d_c_nM2_15_r_p=$literal_formato_6; $r_d_c_nM2_15_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_7) { $r_d_c_nM2_15_r_p=$literal_formato_7; $r_d_c_nM2_15_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_8) { $r_d_c_nM2_15_r_p=$literal_formato_8; $r_d_c_nM2_15_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_9) { $r_d_c_nM2_15_r_p=$literal_formato_9; $r_d_c_nM2_15_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_10) {$r_d_c_nM2_15_r_p=$literal_formato_10; $r_d_c_nM2_15_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_11) {$r_d_c_nM2_15_r_p=$literal_formato_11; $r_d_c_nM2_15_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_12) {$r_d_c_nM2_15_r_p=$literal_formato_12; $r_d_c_nM2_15_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M2 == '4') {
 
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_1) { $r_d_c_nM2_15_r_p=$cualitativa_formato_1; $r_d_c_nM2_15_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_2) { $r_d_c_nM2_15_r_p=$cualitativa_formato_2; $r_d_c_nM2_15_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_3) { $r_d_c_nM2_15_r_p=$cualitativa_formato_3; $r_d_c_nM2_15_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_4) { $r_d_c_nM2_15_r_p=$cualitativa_formato_4; $r_d_c_nM2_15_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_5) { $r_d_c_nM2_15_r_p=$cualitativa_formato_5; $r_d_c_nM2_15_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_6) { $r_d_c_nM2_15_r_p=$cualitativa_formato_6; $r_d_c_nM2_15_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_7) { $r_d_c_nM2_15_r_p=$cualitativa_formato_7; $r_d_c_nM2_15_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_8) { $r_d_c_nM2_15_r_p=$cualitativa_formato_8; $r_d_c_nM2_15_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_9) { $r_d_c_nM2_15_r_p=$cualitativa_formato_9; $r_d_c_nM2_15_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_10) {$r_d_c_nM2_15_r_p=$cualitativa_formato_10; $r_d_c_nM2_15_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_11) {$r_d_c_nM2_15_r_p=$cualitativa_formato_11; $r_d_c_nM2_15_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM2_15_redon>=$comparativo_formato_12) {$r_d_c_nM2_15_r_p=$cualitativa_formato_12; $r_d_c_nM2_15_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM2['nt_15'] == '') { $r_d_c_nM2_15_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM2_15_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM2_15_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}


if ($row_datos_control_notasM2['d_16'] != '') {

$el_d_16 =  $row_datos_control_notasM2['d_16'];

include("../../conectar.php");
$query_indi_16 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_16'                     
               order by id_indicador limit 1" ;
$datos_control_indi_16 = mysqli_query($enlace, $query_indi_16) or die(mysqli_error());
$row_datos_control_indi_16 = mysqli_fetch_array($datos_control_indi_16); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_16['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM2_16_redon =  number_format($row_datos_control_notasM2['nt_16'], 0, '.', '');
if ($formato_eva_M2 == '3') {
 
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_1) { $r_d_c_nM2_16_r_p=$literal_formato_1; $r_d_c_nM2_16_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_2) { $r_d_c_nM2_16_r_p=$literal_formato_2; $r_d_c_nM2_16_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_3) { $r_d_c_nM2_16_r_p=$literal_formato_3; $r_d_c_nM2_16_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_4) { $r_d_c_nM2_16_r_p=$literal_formato_4; $r_d_c_nM2_16_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_5) { $r_d_c_nM2_16_r_p=$literal_formato_5; $r_d_c_nM2_16_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_6) { $r_d_c_nM2_16_r_p=$literal_formato_6; $r_d_c_nM2_16_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_7) { $r_d_c_nM2_16_r_p=$literal_formato_7; $r_d_c_nM2_16_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_8) { $r_d_c_nM2_16_r_p=$literal_formato_8; $r_d_c_nM2_16_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_9) { $r_d_c_nM2_16_r_p=$literal_formato_9; $r_d_c_nM2_16_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_10) {$r_d_c_nM2_16_r_p=$literal_formato_10; $r_d_c_nM2_16_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_11) {$r_d_c_nM2_16_r_p=$literal_formato_11; $r_d_c_nM2_16_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_12) {$r_d_c_nM2_16_r_p=$literal_formato_12; $r_d_c_nM2_16_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M2 == '4') {
 
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_1) { $r_d_c_nM2_16_r_p=$cualitativa_formato_1; $r_d_c_nM2_16_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_2) { $r_d_c_nM2_16_r_p=$cualitativa_formato_2; $r_d_c_nM2_16_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_3) { $r_d_c_nM2_16_r_p=$cualitativa_formato_3; $r_d_c_nM2_16_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_4) { $r_d_c_nM2_16_r_p=$cualitativa_formato_4; $r_d_c_nM2_16_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_5) { $r_d_c_nM2_16_r_p=$cualitativa_formato_5; $r_d_c_nM2_16_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_6) { $r_d_c_nM2_16_r_p=$cualitativa_formato_6; $r_d_c_nM2_16_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_7) { $r_d_c_nM2_16_r_p=$cualitativa_formato_7; $r_d_c_nM2_16_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_8) { $r_d_c_nM2_16_r_p=$cualitativa_formato_8; $r_d_c_nM2_16_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_9) { $r_d_c_nM2_16_r_p=$cualitativa_formato_9; $r_d_c_nM2_16_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_10) {$r_d_c_nM2_16_r_p=$cualitativa_formato_10; $r_d_c_nM2_16_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_11) {$r_d_c_nM2_16_r_p=$cualitativa_formato_11; $r_d_c_nM2_16_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM2_16_redon>=$comparativo_formato_12) {$r_d_c_nM2_16_r_p=$cualitativa_formato_12; $r_d_c_nM2_16_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM2['nt_16'] == '') { $r_d_c_nM2_16_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM2_16_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM2_16_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM2['d_17'] != '') {

$el_d_17 =  $row_datos_control_notasM2['d_17'];

include("../../conectar.php");
$query_indi_17 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_17'                     
               order by id_indicador limit 1" ;
$datos_control_indi_17 = mysqli_query($enlace, $query_indi_17) or die(mysqli_error());
$row_datos_control_indi_17 = mysqli_fetch_array($datos_control_indi_17); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_17['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM2_17_redon =  number_format($row_datos_control_notasM2['nt_17'], 0, '.', '');


if ($formato_eva_M2 == '3') {
 
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_1) { $r_d_c_nM2_17_r_p=$literal_formato_1; $r_d_c_nM2_17_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_2) { $r_d_c_nM2_17_r_p=$literal_formato_2; $r_d_c_nM2_17_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_3) { $r_d_c_nM2_17_r_p=$literal_formato_3; $r_d_c_nM2_17_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_4) { $r_d_c_nM2_17_r_p=$literal_formato_4; $r_d_c_nM2_17_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_5) { $r_d_c_nM2_17_r_p=$literal_formato_5; $r_d_c_nM2_17_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_6) { $r_d_c_nM2_17_r_p=$literal_formato_6; $r_d_c_nM2_17_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_7) { $r_d_c_nM2_17_r_p=$literal_formato_7; $r_d_c_nM2_17_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_8) { $r_d_c_nM2_17_r_p=$literal_formato_8; $r_d_c_nM2_17_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_9) { $r_d_c_nM2_17_r_p=$literal_formato_9; $r_d_c_nM2_17_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_10) {$r_d_c_nM2_17_r_p=$literal_formato_10; $r_d_c_nM2_17_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_11) {$r_d_c_nM2_17_r_p=$literal_formato_11; $r_d_c_nM2_17_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_12) {$r_d_c_nM2_17_r_p=$literal_formato_12; $r_d_c_nM2_17_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M2 == '4') {
 
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_1) { $r_d_c_nM2_17_r_p=$cualitativa_formato_1; $r_d_c_nM2_17_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_2) { $r_d_c_nM2_17_r_p=$cualitativa_formato_2; $r_d_c_nM2_17_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_3) { $r_d_c_nM2_17_r_p=$cualitativa_formato_3; $r_d_c_nM2_17_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_4) { $r_d_c_nM2_17_r_p=$cualitativa_formato_4; $r_d_c_nM2_17_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_5) { $r_d_c_nM2_17_r_p=$cualitativa_formato_5; $r_d_c_nM2_17_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_6) { $r_d_c_nM2_17_r_p=$cualitativa_formato_6; $r_d_c_nM2_17_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_7) { $r_d_c_nM2_17_r_p=$cualitativa_formato_7; $r_d_c_nM2_17_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_8) { $r_d_c_nM2_17_r_p=$cualitativa_formato_8; $r_d_c_nM2_17_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_9) { $r_d_c_nM2_17_r_p=$cualitativa_formato_9; $r_d_c_nM2_17_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_10) {$r_d_c_nM2_17_r_p=$cualitativa_formato_10; $r_d_c_nM2_17_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_11) {$r_d_c_nM2_17_r_p=$cualitativa_formato_11; $r_d_c_nM2_17_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM2_17_redon>=$comparativo_formato_12) {$r_d_c_nM2_17_r_p=$cualitativa_formato_12; $r_d_c_nM2_17_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM2['nt_17'] == '') { $r_d_c_nM2_17_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM2_17_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM2_17_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}
}










if ($row_datos_controlmat['c_ccc'] != '') {

    echo $tr_open;
                echo $tdd_open; echo $asterisco;   echo $row_datos_controlmat['c_ccc']; echo $dos_puntos;  echo $tdd_close;
     echo $tr_close;

}



if ($row_datos_controlmat['c_ccc'] != '') { 

if ($row_datos_control_notasM3['d_11'] != '') {

$el_d_11 =  $row_datos_control_notasM3['d_11'];

include("../../conectar.php");
$query_indi_11 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_11'                       
               order by id_indicador limit 1" ;
$datos_control_indi_11 = mysqli_query($enlace, $query_indi_11) or die(mysqli_error());
$row_datos_control_indi_11 = mysqli_fetch_array($datos_control_indi_11); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_11['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM3_11_redon =  number_format($row_datos_control_notasM3['nt_11'], 0, '.', '');

if ($formato_eva_M3 == '3') {
 
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_1) { $r_d_c_nM3_11_r_p=$literal_formato_1; $r_d_c_nM3_11_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_2) { $r_d_c_nM3_11_r_p=$literal_formato_2; $r_d_c_nM3_11_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_3) { $r_d_c_nM3_11_r_p=$literal_formato_3; $r_d_c_nM3_11_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_4) { $r_d_c_nM3_11_r_p=$literal_formato_4; $r_d_c_nM3_11_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_5) { $r_d_c_nM3_11_r_p=$literal_formato_5; $r_d_c_nM3_11_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_6) { $r_d_c_nM3_11_r_p=$literal_formato_6; $r_d_c_nM3_11_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_7) { $r_d_c_nM3_11_r_p=$literal_formato_7; $r_d_c_nM3_11_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_8) { $r_d_c_nM3_11_r_p=$literal_formato_8; $r_d_c_nM3_11_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_9) { $r_d_c_nM3_11_r_p=$literal_formato_9; $r_d_c_nM3_11_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_10) {$r_d_c_nM3_11_r_p=$literal_formato_10; $r_d_c_nM3_11_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_11) {$r_d_c_nM3_11_r_p=$literal_formato_11; $r_d_c_nM3_11_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_12) {$r_d_c_nM3_11_r_p=$literal_formato_12; $r_d_c_nM3_11_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M3 == '4') {
 
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_1) { $r_d_c_nM3_11_r_p=$cualitativa_formato_1; $r_d_c_nM3_11_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_2) { $r_d_c_nM3_11_r_p=$cualitativa_formato_2; $r_d_c_nM3_11_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_3) { $r_d_c_nM3_11_r_p=$cualitativa_formato_3; $r_d_c_nM3_11_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_4) { $r_d_c_nM3_11_r_p=$cualitativa_formato_4; $r_d_c_nM3_11_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_5) { $r_d_c_nM3_11_r_p=$cualitativa_formato_5; $r_d_c_nM3_11_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_6) { $r_d_c_nM3_11_r_p=$cualitativa_formato_6; $r_d_c_nM3_11_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_7) { $r_d_c_nM3_11_r_p=$cualitativa_formato_7; $r_d_c_nM3_11_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_8) { $r_d_c_nM3_11_r_p=$cualitativa_formato_8; $r_d_c_nM3_11_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_9) { $r_d_c_nM3_11_r_p=$cualitativa_formato_9; $r_d_c_nM3_11_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_10) {$r_d_c_nM3_11_r_p=$cualitativa_formato_10; $r_d_c_nM3_11_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_11) {$r_d_c_nM3_11_r_p=$cualitativa_formato_11; $r_d_c_nM3_11_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM3_11_redon>=$comparativo_formato_12) {$r_d_c_nM3_11_r_p=$cualitativa_formato_12; $r_d_c_nM3_11_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM3['nt_11'] == '') { $r_d_c_nM3_11_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM3_11_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM3_11_r_p_co; echo $parent_close;

                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM3['d_12'] != '') {

$el_d_12 =  $row_datos_control_notasM3['d_12'];

include("../../conectar.php");
$query_indi_12 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_12'                     
               order by id_indicador limit 1" ;
$datos_control_indi_12 = mysqli_query($enlace, $query_indi_12) or die(mysqli_error());
$row_datos_control_indi_12 = mysqli_fetch_array($datos_control_indi_12); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_12['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM3_12_redon =  number_format($row_datos_control_notasM3['nt_12'], 0, '.', '');

if ($formato_eva_M3 == '3') {
 
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_1) { $r_d_c_nM3_12_r_p=$literal_formato_1; $r_d_c_nM3_12_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_2) { $r_d_c_nM3_12_r_p=$literal_formato_2; $r_d_c_nM3_12_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_3) { $r_d_c_nM3_12_r_p=$literal_formato_3; $r_d_c_nM3_12_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_4) { $r_d_c_nM3_12_r_p=$literal_formato_4; $r_d_c_nM3_12_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_5) { $r_d_c_nM3_12_r_p=$literal_formato_5; $r_d_c_nM3_12_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_6) { $r_d_c_nM3_12_r_p=$literal_formato_6; $r_d_c_nM3_12_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_7) { $r_d_c_nM3_12_r_p=$literal_formato_7; $r_d_c_nM3_12_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_8) { $r_d_c_nM3_12_r_p=$literal_formato_8; $r_d_c_nM3_12_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_9) { $r_d_c_nM3_12_r_p=$literal_formato_9; $r_d_c_nM3_12_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_10) {$r_d_c_nM3_12_r_p=$literal_formato_10; $r_d_c_nM3_12_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_11) {$r_d_c_nM3_12_r_p=$literal_formato_11; $r_d_c_nM3_12_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_12) {$r_d_c_nM3_12_r_p=$literal_formato_12; $r_d_c_nM3_12_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M3 == '4') {
 
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_1) { $r_d_c_nM3_12_r_p=$cualitativa_formato_1; $r_d_c_nM3_12_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_2) { $r_d_c_nM3_12_r_p=$cualitativa_formato_2; $r_d_c_nM3_12_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_3) { $r_d_c_nM3_12_r_p=$cualitativa_formato_3; $r_d_c_nM3_12_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_4) { $r_d_c_nM3_12_r_p=$cualitativa_formato_4; $r_d_c_nM3_12_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_5) { $r_d_c_nM3_12_r_p=$cualitativa_formato_5; $r_d_c_nM3_12_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_6) { $r_d_c_nM3_12_r_p=$cualitativa_formato_6; $r_d_c_nM3_12_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_7) { $r_d_c_nM3_12_r_p=$cualitativa_formato_7; $r_d_c_nM3_12_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_8) { $r_d_c_nM3_12_r_p=$cualitativa_formato_8; $r_d_c_nM3_12_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_9) { $r_d_c_nM3_12_r_p=$cualitativa_formato_9; $r_d_c_nM3_12_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_10) {$r_d_c_nM3_12_r_p=$cualitativa_formato_10; $r_d_c_nM3_12_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_11) {$r_d_c_nM3_12_r_p=$cualitativa_formato_11; $r_d_c_nM3_12_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM3_12_redon>=$comparativo_formato_12) {$r_d_c_nM3_12_r_p=$cualitativa_formato_12; $r_d_c_nM3_12_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM3['nt_12'] == '') { $r_d_c_nM3_12_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM3_12_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM3_12_r_p_co; echo $parent_close;

                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM3['d_13'] != '') {


$el_d_13 =  $row_datos_control_notasM3['d_13'];

include("../../conectar.php");
$query_indi_13 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_13'                     
               order by id_indicador limit 1" ;
$datos_control_indi_13 = mysqli_query($enlace, $query_indi_13) or die(mysqli_error());
$row_datos_control_indi_13 = mysqli_fetch_array($datos_control_indi_13); 
 
 mysqli_close($enlace);


echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_13['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
                                        $row_datos_control_notasM3_13_redon =  number_format($row_datos_control_notasM3['nt_13'], 0, '.', '');

if ($formato_eva_M3 == '3') {
 
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_1) { $r_d_c_nM3_13_r_p=$literal_formato_1; $r_d_c_nM3_13_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_2) { $r_d_c_nM3_13_r_p=$literal_formato_2; $r_d_c_nM3_13_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_3) { $r_d_c_nM3_13_r_p=$literal_formato_3; $r_d_c_nM3_13_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_4) { $r_d_c_nM3_13_r_p=$literal_formato_4; $r_d_c_nM3_13_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_5) { $r_d_c_nM3_13_r_p=$literal_formato_5; $r_d_c_nM3_13_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_6) { $r_d_c_nM3_13_r_p=$literal_formato_6; $r_d_c_nM3_13_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_7) { $r_d_c_nM3_13_r_p=$literal_formato_7; $r_d_c_nM3_13_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_8) { $r_d_c_nM3_13_r_p=$literal_formato_8; $r_d_c_nM3_13_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_9) { $r_d_c_nM3_13_r_p=$literal_formato_9; $r_d_c_nM3_13_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_10) {$r_d_c_nM3_13_r_p=$literal_formato_10; $r_d_c_nM3_13_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_11) {$r_d_c_nM3_13_r_p=$literal_formato_11; $r_d_c_nM3_13_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_12) {$r_d_c_nM3_13_r_p=$literal_formato_12; $r_d_c_nM3_13_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M3 == '4') {
 
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_1) { $r_d_c_nM3_13_r_p=$cualitativa_formato_1; $r_d_c_nM3_13_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_2) { $r_d_c_nM3_13_r_p=$cualitativa_formato_2; $r_d_c_nM3_13_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_3) { $r_d_c_nM3_13_r_p=$cualitativa_formato_3; $r_d_c_nM3_13_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_4) { $r_d_c_nM3_13_r_p=$cualitativa_formato_4; $r_d_c_nM3_13_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_5) { $r_d_c_nM3_13_r_p=$cualitativa_formato_5; $r_d_c_nM3_13_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_6) { $r_d_c_nM3_13_r_p=$cualitativa_formato_6; $r_d_c_nM3_13_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_7) { $r_d_c_nM3_13_r_p=$cualitativa_formato_7; $r_d_c_nM3_13_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_8) { $r_d_c_nM3_13_r_p=$cualitativa_formato_8; $r_d_c_nM3_13_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_9) { $r_d_c_nM3_13_r_p=$cualitativa_formato_9; $r_d_c_nM3_13_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_10) {$r_d_c_nM3_13_r_p=$cualitativa_formato_10; $r_d_c_nM3_13_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_11) {$r_d_c_nM3_13_r_p=$cualitativa_formato_11; $r_d_c_nM3_13_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM3_13_redon>=$comparativo_formato_12) {$r_d_c_nM3_13_r_p=$cualitativa_formato_12; $r_d_c_nM3_13_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM3['nt_13'] == '') { $r_d_c_nM3_13_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM3_13_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM3_13_r_p_co; echo $parent_close;
                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM3['d_14'] != '') {

$el_d_14 =  $row_datos_control_notasM3['d_14'];

include("../../conectar.php");
$query_indi_14 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_14'                     
               order by id_indicador limit 1" ;
$datos_control_indi_14 = mysqli_query($enlace, $query_indi_14) or die(mysqli_error());
$row_datos_control_indi_14 = mysqli_fetch_array($datos_control_indi_14); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_14['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM3_14_redon =  number_format($row_datos_control_notasM3['nt_14'], 0, '.', '');

if ($formato_eva_M3 == '3') {
 
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_1) { $r_d_c_nM3_14_r_p=$literal_formato_1; $r_d_c_nM3_14_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_2) { $r_d_c_nM3_14_r_p=$literal_formato_2; $r_d_c_nM3_14_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_3) { $r_d_c_nM3_14_r_p=$literal_formato_3; $r_d_c_nM3_14_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_4) { $r_d_c_nM3_14_r_p=$literal_formato_4; $r_d_c_nM3_14_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_5) { $r_d_c_nM3_14_r_p=$literal_formato_5; $r_d_c_nM3_14_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_6) { $r_d_c_nM3_14_r_p=$literal_formato_6; $r_d_c_nM3_14_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_7) { $r_d_c_nM3_14_r_p=$literal_formato_7; $r_d_c_nM3_14_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_8) { $r_d_c_nM3_14_r_p=$literal_formato_8; $r_d_c_nM3_14_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_9) { $r_d_c_nM3_14_r_p=$literal_formato_9; $r_d_c_nM3_14_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_10) {$r_d_c_nM3_14_r_p=$literal_formato_10; $r_d_c_nM3_14_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_11) {$r_d_c_nM3_14_r_p=$literal_formato_11; $r_d_c_nM3_14_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_12) {$r_d_c_nM3_14_r_p=$literal_formato_12; $r_d_c_nM3_14_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M3 == '4') {
 
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_1) { $r_d_c_nM3_14_r_p=$cualitativa_formato_1; $r_d_c_nM3_14_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_2) { $r_d_c_nM3_14_r_p=$cualitativa_formato_2; $r_d_c_nM3_14_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_3) { $r_d_c_nM3_14_r_p=$cualitativa_formato_3; $r_d_c_nM3_14_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_4) { $r_d_c_nM3_14_r_p=$cualitativa_formato_4; $r_d_c_nM3_14_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_5) { $r_d_c_nM3_14_r_p=$cualitativa_formato_5; $r_d_c_nM3_14_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_6) { $r_d_c_nM3_14_r_p=$cualitativa_formato_6; $r_d_c_nM3_14_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_7) { $r_d_c_nM3_14_r_p=$cualitativa_formato_7; $r_d_c_nM3_14_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_8) { $r_d_c_nM3_14_r_p=$cualitativa_formato_8; $r_d_c_nM3_14_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_9) { $r_d_c_nM3_14_r_p=$cualitativa_formato_9; $r_d_c_nM3_14_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_10) {$r_d_c_nM3_14_r_p=$cualitativa_formato_10; $r_d_c_nM3_14_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_11) {$r_d_c_nM3_14_r_p=$cualitativa_formato_11; $r_d_c_nM3_14_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM3_14_redon>=$comparativo_formato_12) {$r_d_c_nM3_14_r_p=$cualitativa_formato_12; $r_d_c_nM3_14_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM3['nt_14'] == '') { $r_d_c_nM3_14_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM3_14_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM3_14_r_p_co; echo $parent_close; 
                            echo $td_closeB;


  echo $tr_close;

}



if ($row_datos_control_notasM3['d_15'] != '') {

$el_d_15 =  $row_datos_control_notasM3['d_15'];

include("../../conectar.php");
$query_indi_15 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_15'                     
               order by id_indicador limit 1" ;
$datos_control_indi_15 = mysqli_query($enlace, $query_indi_15) or die(mysqli_error());
$row_datos_control_indi_15 = mysqli_fetch_array($datos_control_indi_15); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_15['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM3_15_redon =  number_format($row_datos_control_notasM3['nt_15'], 0, '.', '');
if ($formato_eva_M3 == '3') {
 
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_1) { $r_d_c_nM3_15_r_p=$literal_formato_1; $r_d_c_nM3_15_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_2) { $r_d_c_nM3_15_r_p=$literal_formato_2; $r_d_c_nM3_15_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_3) { $r_d_c_nM3_15_r_p=$literal_formato_3; $r_d_c_nM3_15_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_4) { $r_d_c_nM3_15_r_p=$literal_formato_4; $r_d_c_nM3_15_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_5) { $r_d_c_nM3_15_r_p=$literal_formato_5; $r_d_c_nM3_15_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_6) { $r_d_c_nM3_15_r_p=$literal_formato_6; $r_d_c_nM3_15_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_7) { $r_d_c_nM3_15_r_p=$literal_formato_7; $r_d_c_nM3_15_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_8) { $r_d_c_nM3_15_r_p=$literal_formato_8; $r_d_c_nM3_15_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_9) { $r_d_c_nM3_15_r_p=$literal_formato_9; $r_d_c_nM3_15_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_10) {$r_d_c_nM3_15_r_p=$literal_formato_10; $r_d_c_nM3_15_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_11) {$r_d_c_nM3_15_r_p=$literal_formato_11; $r_d_c_nM3_15_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_12) {$r_d_c_nM3_15_r_p=$literal_formato_12; $r_d_c_nM3_15_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M3 == '4') {
 
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_1) { $r_d_c_nM3_15_r_p=$cualitativa_formato_1; $r_d_c_nM3_15_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_2) { $r_d_c_nM3_15_r_p=$cualitativa_formato_2; $r_d_c_nM3_15_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_3) { $r_d_c_nM3_15_r_p=$cualitativa_formato_3; $r_d_c_nM3_15_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_4) { $r_d_c_nM3_15_r_p=$cualitativa_formato_4; $r_d_c_nM3_15_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_5) { $r_d_c_nM3_15_r_p=$cualitativa_formato_5; $r_d_c_nM3_15_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_6) { $r_d_c_nM3_15_r_p=$cualitativa_formato_6; $r_d_c_nM3_15_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_7) { $r_d_c_nM3_15_r_p=$cualitativa_formato_7; $r_d_c_nM3_15_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_8) { $r_d_c_nM3_15_r_p=$cualitativa_formato_8; $r_d_c_nM3_15_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_9) { $r_d_c_nM3_15_r_p=$cualitativa_formato_9; $r_d_c_nM3_15_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_10) {$r_d_c_nM3_15_r_p=$cualitativa_formato_10; $r_d_c_nM3_15_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_11) {$r_d_c_nM3_15_r_p=$cualitativa_formato_11; $r_d_c_nM3_15_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM3_15_redon>=$comparativo_formato_12) {$r_d_c_nM3_15_r_p=$cualitativa_formato_12; $r_d_c_nM3_15_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM3['nt_15'] == '') { $r_d_c_nM3_15_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM3_15_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM3_15_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}


if ($row_datos_control_notasM3['d_16'] != '') {

$el_d_16 =  $row_datos_control_notasM3['d_16'];

include("../../conectar.php");
$query_indi_16 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_16'                     
               order by id_indicador limit 1" ;
$datos_control_indi_16 = mysqli_query($enlace, $query_indi_16) or die(mysqli_error());
$row_datos_control_indi_16 = mysqli_fetch_array($datos_control_indi_16); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_16['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM3_16_redon =  number_format($row_datos_control_notasM3['nt_16'], 0, '.', '');
if ($formato_eva_M3 == '3') {
 
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_1) { $r_d_c_nM3_16_r_p=$literal_formato_1; $r_d_c_nM3_16_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_2) { $r_d_c_nM3_16_r_p=$literal_formato_2; $r_d_c_nM3_16_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_3) { $r_d_c_nM3_16_r_p=$literal_formato_3; $r_d_c_nM3_16_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_4) { $r_d_c_nM3_16_r_p=$literal_formato_4; $r_d_c_nM3_16_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_5) { $r_d_c_nM3_16_r_p=$literal_formato_5; $r_d_c_nM3_16_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_6) { $r_d_c_nM3_16_r_p=$literal_formato_6; $r_d_c_nM3_16_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_7) { $r_d_c_nM3_16_r_p=$literal_formato_7; $r_d_c_nM3_16_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_8) { $r_d_c_nM3_16_r_p=$literal_formato_8; $r_d_c_nM3_16_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_9) { $r_d_c_nM3_16_r_p=$literal_formato_9; $r_d_c_nM3_16_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_10) {$r_d_c_nM3_16_r_p=$literal_formato_10; $r_d_c_nM3_16_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_11) {$r_d_c_nM3_16_r_p=$literal_formato_11; $r_d_c_nM3_16_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_12) {$r_d_c_nM3_16_r_p=$literal_formato_12; $r_d_c_nM3_16_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M3 == '4') {
 
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_1) { $r_d_c_nM3_16_r_p=$cualitativa_formato_1; $r_d_c_nM3_16_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_2) { $r_d_c_nM3_16_r_p=$cualitativa_formato_2; $r_d_c_nM3_16_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_3) { $r_d_c_nM3_16_r_p=$cualitativa_formato_3; $r_d_c_nM3_16_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_4) { $r_d_c_nM3_16_r_p=$cualitativa_formato_4; $r_d_c_nM3_16_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_5) { $r_d_c_nM3_16_r_p=$cualitativa_formato_5; $r_d_c_nM3_16_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_6) { $r_d_c_nM3_16_r_p=$cualitativa_formato_6; $r_d_c_nM3_16_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_7) { $r_d_c_nM3_16_r_p=$cualitativa_formato_7; $r_d_c_nM3_16_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_8) { $r_d_c_nM3_16_r_p=$cualitativa_formato_8; $r_d_c_nM3_16_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_9) { $r_d_c_nM3_16_r_p=$cualitativa_formato_9; $r_d_c_nM3_16_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_10) {$r_d_c_nM3_16_r_p=$cualitativa_formato_10; $r_d_c_nM3_16_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_11) {$r_d_c_nM3_16_r_p=$cualitativa_formato_11; $r_d_c_nM3_16_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM3_16_redon>=$comparativo_formato_12) {$r_d_c_nM3_16_r_p=$cualitativa_formato_12; $r_d_c_nM3_16_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM3['nt_16'] == '') { $r_d_c_nM3_16_r_p = $row_datos_modcabecc['no_entrego_abre']; }

 
echo $r_d_c_nM3_16_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM3_16_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM3['d_17'] != '') {

$el_d_17 =  $row_datos_control_notasM3['d_17'];

include("../../conectar.php");
$query_indi_17 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_17'                     
               order by id_indicador limit 1" ;
$datos_control_indi_17 = mysqli_query($enlace, $query_indi_17) or die(mysqli_error());
$row_datos_control_indi_17 = mysqli_fetch_array($datos_control_indi_17); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_17['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM3_17_redon =  number_format($row_datos_control_notasM3['nt_17'], 0, '.', '');
if ($formato_eva_M3 == '3') {
 
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_1) { $r_d_c_nM3_17_r_p=$literal_formato_1; $r_d_c_nM3_17_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_2) { $r_d_c_nM3_17_r_p=$literal_formato_2; $r_d_c_nM3_17_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_3) { $r_d_c_nM3_17_r_p=$literal_formato_3; $r_d_c_nM3_17_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_4) { $r_d_c_nM3_17_r_p=$literal_formato_4; $r_d_c_nM3_17_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_5) { $r_d_c_nM3_17_r_p=$literal_formato_5; $r_d_c_nM3_17_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_6) { $r_d_c_nM3_17_r_p=$literal_formato_6; $r_d_c_nM3_17_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_7) { $r_d_c_nM3_17_r_p=$literal_formato_7; $r_d_c_nM3_17_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_8) { $r_d_c_nM3_17_r_p=$literal_formato_8; $r_d_c_nM3_17_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_9) { $r_d_c_nM3_17_r_p=$literal_formato_9; $r_d_c_nM3_17_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_10) {$r_d_c_nM3_17_r_p=$literal_formato_10; $r_d_c_nM3_17_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_11) {$r_d_c_nM3_17_r_p=$literal_formato_11; $r_d_c_nM3_17_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_12) {$r_d_c_nM3_17_r_p=$literal_formato_12; $r_d_c_nM3_17_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M3 == '4') {
 
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_1) { $r_d_c_nM3_17_r_p=$cualitativa_formato_1; $r_d_c_nM3_17_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_2) { $r_d_c_nM3_17_r_p=$cualitativa_formato_2; $r_d_c_nM3_17_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_3) { $r_d_c_nM3_17_r_p=$cualitativa_formato_3; $r_d_c_nM3_17_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_4) { $r_d_c_nM3_17_r_p=$cualitativa_formato_4; $r_d_c_nM3_17_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_5) { $r_d_c_nM3_17_r_p=$cualitativa_formato_5; $r_d_c_nM3_17_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_6) { $r_d_c_nM3_17_r_p=$cualitativa_formato_6; $r_d_c_nM3_17_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_7) { $r_d_c_nM3_17_r_p=$cualitativa_formato_7; $r_d_c_nM3_17_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_8) { $r_d_c_nM3_17_r_p=$cualitativa_formato_8; $r_d_c_nM3_17_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_9) { $r_d_c_nM3_17_r_p=$cualitativa_formato_9; $r_d_c_nM3_17_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_10) {$r_d_c_nM3_17_r_p=$cualitativa_formato_10; $r_d_c_nM3_17_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_11) {$r_d_c_nM3_17_r_p=$cualitativa_formato_11; $r_d_c_nM3_17_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM3_17_redon>=$comparativo_formato_12) {$r_d_c_nM3_17_r_p=$cualitativa_formato_12; $r_d_c_nM3_17_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM3['nt_17'] == '') { $r_d_c_nM3_17_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM3_17_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM3_17_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}
}




if ($row_datos_controlmat['d_ddd'] != '') {

    echo $tr_open;
                echo $tdd_open; echo $asterisco;   echo $row_datos_controlmat['d_ddd']; echo $dos_puntos;  echo $tdd_close;
     echo $tr_close;

}



if ($row_datos_controlmat['d_ddd'] != '') { 

if ($row_datos_control_notasM4['d_11'] != '') {

$el_d_11 =  $row_datos_control_notasM4['d_11'];

include("../../conectar.php");
$query_indi_11 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_11'                       
               order by id_indicador limit 1" ;
$datos_control_indi_11 = mysqli_query($enlace, $query_indi_11) or die(mysqli_error());
$row_datos_control_indi_11 = mysqli_fetch_array($datos_control_indi_11); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_11['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM4_11_redon =  number_format($row_datos_control_notasM4['nt_11'], 0, '.', '');

if ($formato_eva_M4 == '3') {
 
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_1) { $r_d_c_nM4_11_r_p=$literal_formato_1; $r_d_c_nM4_11_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_2) { $r_d_c_nM4_11_r_p=$literal_formato_2; $r_d_c_nM4_11_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_3) { $r_d_c_nM4_11_r_p=$literal_formato_3; $r_d_c_nM4_11_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_4) { $r_d_c_nM4_11_r_p=$literal_formato_4; $r_d_c_nM4_11_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_5) { $r_d_c_nM4_11_r_p=$literal_formato_5; $r_d_c_nM4_11_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_6) { $r_d_c_nM4_11_r_p=$literal_formato_6; $r_d_c_nM4_11_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_7) { $r_d_c_nM4_11_r_p=$literal_formato_7; $r_d_c_nM4_11_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_8) { $r_d_c_nM4_11_r_p=$literal_formato_8; $r_d_c_nM4_11_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_9) { $r_d_c_nM4_11_r_p=$literal_formato_9; $r_d_c_nM4_11_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_10) {$r_d_c_nM4_11_r_p=$literal_formato_10; $r_d_c_nM4_11_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_11) {$r_d_c_nM4_11_r_p=$literal_formato_11; $r_d_c_nM4_11_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_12) {$r_d_c_nM4_11_r_p=$literal_formato_12; $r_d_c_nM4_11_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M4 == '4') {
 
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_1) { $r_d_c_nM4_11_r_p=$cualitativa_formato_1; $r_d_c_nM4_11_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_2) { $r_d_c_nM4_11_r_p=$cualitativa_formato_2; $r_d_c_nM4_11_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_3) { $r_d_c_nM4_11_r_p=$cualitativa_formato_3; $r_d_c_nM4_11_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_4) { $r_d_c_nM4_11_r_p=$cualitativa_formato_4; $r_d_c_nM4_11_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_5) { $r_d_c_nM4_11_r_p=$cualitativa_formato_5; $r_d_c_nM4_11_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_6) { $r_d_c_nM4_11_r_p=$cualitativa_formato_6; $r_d_c_nM4_11_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_7) { $r_d_c_nM4_11_r_p=$cualitativa_formato_7; $r_d_c_nM4_11_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_8) { $r_d_c_nM4_11_r_p=$cualitativa_formato_8; $r_d_c_nM4_11_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_9) { $r_d_c_nM4_11_r_p=$cualitativa_formato_9; $r_d_c_nM4_11_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_10) {$r_d_c_nM4_11_r_p=$cualitativa_formato_10; $r_d_c_nM4_11_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_11) {$r_d_c_nM4_11_r_p=$cualitativa_formato_11; $r_d_c_nM4_11_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM4_11_redon>=$comparativo_formato_12) {$r_d_c_nM4_11_r_p=$cualitativa_formato_12; $r_d_c_nM4_11_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM4['nt_11'] == '') { $r_d_c_nM4_11_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM4_11_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM4_11_r_p_co; echo $parent_close;

                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM4['d_12'] != '') {

$el_d_12 =  $row_datos_control_notasM4['d_12'];

include("../../conectar.php");
$query_indi_12 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_12'                     
               order by id_indicador limit 1" ;
$datos_control_indi_12 = mysqli_query($enlace, $query_indi_12) or die(mysqli_error());
$row_datos_control_indi_12 = mysqli_fetch_array($datos_control_indi_12); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_12['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM4_12_redon =  number_format($row_datos_control_notasM4['nt_12'], 0, '.', '');


if ($formato_eva_M4 == '3') {
 
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_1) { $r_d_c_nM4_12_r_p=$literal_formato_1; $r_d_c_nM4_12_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_2) { $r_d_c_nM4_12_r_p=$literal_formato_2; $r_d_c_nM4_12_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_3) { $r_d_c_nM4_12_r_p=$literal_formato_3; $r_d_c_nM4_12_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_4) { $r_d_c_nM4_12_r_p=$literal_formato_4; $r_d_c_nM4_12_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_5) { $r_d_c_nM4_12_r_p=$literal_formato_5; $r_d_c_nM4_12_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_6) { $r_d_c_nM4_12_r_p=$literal_formato_6; $r_d_c_nM4_12_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_7) { $r_d_c_nM4_12_r_p=$literal_formato_7; $r_d_c_nM4_12_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_8) { $r_d_c_nM4_12_r_p=$literal_formato_8; $r_d_c_nM4_12_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_9) { $r_d_c_nM4_12_r_p=$literal_formato_9; $r_d_c_nM4_12_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_10) {$r_d_c_nM4_12_r_p=$literal_formato_10; $r_d_c_nM4_12_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_11) {$r_d_c_nM4_12_r_p=$literal_formato_11; $r_d_c_nM4_12_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_12) {$r_d_c_nM4_12_r_p=$literal_formato_12; $r_d_c_nM4_12_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M4 == '4') {
 
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_1) { $r_d_c_nM4_12_r_p=$cualitativa_formato_1; $r_d_c_nM4_12_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_2) { $r_d_c_nM4_12_r_p=$cualitativa_formato_2; $r_d_c_nM4_12_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_3) { $r_d_c_nM4_12_r_p=$cualitativa_formato_3; $r_d_c_nM4_12_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_4) { $r_d_c_nM4_12_r_p=$cualitativa_formato_4; $r_d_c_nM4_12_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_5) { $r_d_c_nM4_12_r_p=$cualitativa_formato_5; $r_d_c_nM4_12_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_6) { $r_d_c_nM4_12_r_p=$cualitativa_formato_6; $r_d_c_nM4_12_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_7) { $r_d_c_nM4_12_r_p=$cualitativa_formato_7; $r_d_c_nM4_12_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_8) { $r_d_c_nM4_12_r_p=$cualitativa_formato_8; $r_d_c_nM4_12_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_9) { $r_d_c_nM4_12_r_p=$cualitativa_formato_9; $r_d_c_nM4_12_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_10) {$r_d_c_nM4_12_r_p=$cualitativa_formato_10; $r_d_c_nM4_12_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_11) {$r_d_c_nM4_12_r_p=$cualitativa_formato_11; $r_d_c_nM4_12_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM4_12_redon>=$comparativo_formato_12) {$r_d_c_nM4_12_r_p=$cualitativa_formato_12; $r_d_c_nM4_12_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM4['nt_12'] == '') { $r_d_c_nM4_12_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM4_12_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM4_12_r_p_co; echo $parent_close;

                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM4['d_13'] != '') {


$el_d_13 =  $row_datos_control_notasM4['d_13'];

include("../../conectar.php");
$query_indi_13 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_13'                     
               order by id_indicador limit 1" ;
$datos_control_indi_13 = mysqli_query($enlace, $query_indi_13) or die(mysqli_error());
$row_datos_control_indi_13 = mysqli_fetch_array($datos_control_indi_13); 
 
 mysqli_close($enlace);


echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_13['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
                                        $row_datos_control_notasM4_13_redon =  number_format($row_datos_control_notasM4['nt_13'], 0, '.', '');

if ($formato_eva_M4 == '3') {
 
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_1) { $r_d_c_nM4_13_r_p=$literal_formato_1; $r_d_c_nM4_13_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_2) { $r_d_c_nM4_13_r_p=$literal_formato_2; $r_d_c_nM4_13_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_3) { $r_d_c_nM4_13_r_p=$literal_formato_3; $r_d_c_nM4_13_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_4) { $r_d_c_nM4_13_r_p=$literal_formato_4; $r_d_c_nM4_13_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_5) { $r_d_c_nM4_13_r_p=$literal_formato_5; $r_d_c_nM4_13_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_6) { $r_d_c_nM4_13_r_p=$literal_formato_6; $r_d_c_nM4_13_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_7) { $r_d_c_nM4_13_r_p=$literal_formato_7; $r_d_c_nM4_13_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_8) { $r_d_c_nM4_13_r_p=$literal_formato_8; $r_d_c_nM4_13_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_9) { $r_d_c_nM4_13_r_p=$literal_formato_9; $r_d_c_nM4_13_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_10) {$r_d_c_nM4_13_r_p=$literal_formato_10; $r_d_c_nM4_13_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_11) {$r_d_c_nM4_13_r_p=$literal_formato_11; $r_d_c_nM4_13_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_12) {$r_d_c_nM4_13_r_p=$literal_formato_12; $r_d_c_nM4_13_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M4 == '4') {
 
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_1) { $r_d_c_nM4_13_r_p=$cualitativa_formato_1; $r_d_c_nM4_13_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_2) { $r_d_c_nM4_13_r_p=$cualitativa_formato_2; $r_d_c_nM4_13_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_3) { $r_d_c_nM4_13_r_p=$cualitativa_formato_3; $r_d_c_nM4_13_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_4) { $r_d_c_nM4_13_r_p=$cualitativa_formato_4; $r_d_c_nM4_13_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_5) { $r_d_c_nM4_13_r_p=$cualitativa_formato_5; $r_d_c_nM4_13_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_6) { $r_d_c_nM4_13_r_p=$cualitativa_formato_6; $r_d_c_nM4_13_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_7) { $r_d_c_nM4_13_r_p=$cualitativa_formato_7; $r_d_c_nM4_13_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_8) { $r_d_c_nM4_13_r_p=$cualitativa_formato_8; $r_d_c_nM4_13_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_9) { $r_d_c_nM4_13_r_p=$cualitativa_formato_9; $r_d_c_nM4_13_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_10) {$r_d_c_nM4_13_r_p=$cualitativa_formato_10; $r_d_c_nM4_13_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_11) {$r_d_c_nM4_13_r_p=$cualitativa_formato_11; $r_d_c_nM4_13_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM4_13_redon>=$comparativo_formato_12) {$r_d_c_nM4_13_r_p=$cualitativa_formato_12; $r_d_c_nM4_13_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM4['nt_13'] == '') { $r_d_c_nM4_13_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM4_13_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM4_13_r_p_co; echo $parent_close;
                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM4['d_14'] != '') {

$el_d_14 =  $row_datos_control_notasM4['d_14'];

include("../../conectar.php");
$query_indi_14 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_14'                     
               order by id_indicador limit 1" ;
$datos_control_indi_14 = mysqli_query($enlace, $query_indi_14) or die(mysqli_error());
$row_datos_control_indi_14 = mysqli_fetch_array($datos_control_indi_14); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_14['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM4_14_redon =  number_format($row_datos_control_notasM4['nt_14'], 0, '.', '');

if ($formato_eva_M4 == '3') {
 
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_1) { $r_d_c_nM4_14_r_p=$literal_formato_1; $r_d_c_nM4_14_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_2) { $r_d_c_nM4_14_r_p=$literal_formato_2; $r_d_c_nM4_14_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_3) { $r_d_c_nM4_14_r_p=$literal_formato_3; $r_d_c_nM4_14_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_4) { $r_d_c_nM4_14_r_p=$literal_formato_4; $r_d_c_nM4_14_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_5) { $r_d_c_nM4_14_r_p=$literal_formato_5; $r_d_c_nM4_14_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_6) { $r_d_c_nM4_14_r_p=$literal_formato_6; $r_d_c_nM4_14_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_7) { $r_d_c_nM4_14_r_p=$literal_formato_7; $r_d_c_nM4_14_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_8) { $r_d_c_nM4_14_r_p=$literal_formato_8; $r_d_c_nM4_14_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_9) { $r_d_c_nM4_14_r_p=$literal_formato_9; $r_d_c_nM4_14_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_10) {$r_d_c_nM4_14_r_p=$literal_formato_10; $r_d_c_nM4_14_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_11) {$r_d_c_nM4_14_r_p=$literal_formato_11; $r_d_c_nM4_14_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_12) {$r_d_c_nM4_14_r_p=$literal_formato_12; $r_d_c_nM4_14_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M4 == '4') {
 
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_1) { $r_d_c_nM4_14_r_p=$cualitativa_formato_1; $r_d_c_nM4_14_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_2) { $r_d_c_nM4_14_r_p=$cualitativa_formato_2; $r_d_c_nM4_14_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_3) { $r_d_c_nM4_14_r_p=$cualitativa_formato_3; $r_d_c_nM4_14_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_4) { $r_d_c_nM4_14_r_p=$cualitativa_formato_4; $r_d_c_nM4_14_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_5) { $r_d_c_nM4_14_r_p=$cualitativa_formato_5; $r_d_c_nM4_14_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_6) { $r_d_c_nM4_14_r_p=$cualitativa_formato_6; $r_d_c_nM4_14_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_7) { $r_d_c_nM4_14_r_p=$cualitativa_formato_7; $r_d_c_nM4_14_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_8) { $r_d_c_nM4_14_r_p=$cualitativa_formato_8; $r_d_c_nM4_14_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_9) { $r_d_c_nM4_14_r_p=$cualitativa_formato_9; $r_d_c_nM4_14_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_10) {$r_d_c_nM4_14_r_p=$cualitativa_formato_10; $r_d_c_nM4_14_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_11) {$r_d_c_nM4_14_r_p=$cualitativa_formato_11; $r_d_c_nM4_14_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM4_14_redon>=$comparativo_formato_12) {$r_d_c_nM4_14_r_p=$cualitativa_formato_12; $r_d_c_nM4_14_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM4['nt_14'] == '') { $r_d_c_nM4_14_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM4_14_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM4_14_r_p_co; echo $parent_close; 
                            echo $td_closeB;


  echo $tr_close;

}



if ($row_datos_control_notasM4['d_15'] != '') {

$el_d_15 =  $row_datos_control_notasM4['d_15'];

include("../../conectar.php");
$query_indi_15 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_15'                     
               order by id_indicador limit 1" ;
$datos_control_indi_15 = mysqli_query($enlace, $query_indi_15) or die(mysqli_error());
$row_datos_control_indi_15 = mysqli_fetch_array($datos_control_indi_15); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_15['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM4_15_redon =  number_format($row_datos_control_notasM4['nt_15'], 0, '.', '');
if ($formato_eva_M4 == '3') {
 
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_1) { $r_d_c_nM4_15_r_p=$literal_formato_1; $r_d_c_nM4_15_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_2) { $r_d_c_nM4_15_r_p=$literal_formato_2; $r_d_c_nM4_15_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_3) { $r_d_c_nM4_15_r_p=$literal_formato_3; $r_d_c_nM4_15_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_4) { $r_d_c_nM4_15_r_p=$literal_formato_4; $r_d_c_nM4_15_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_5) { $r_d_c_nM4_15_r_p=$literal_formato_5; $r_d_c_nM4_15_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_6) { $r_d_c_nM4_15_r_p=$literal_formato_6; $r_d_c_nM4_15_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_7) { $r_d_c_nM4_15_r_p=$literal_formato_7; $r_d_c_nM4_15_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_8) { $r_d_c_nM4_15_r_p=$literal_formato_8; $r_d_c_nM4_15_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_9) { $r_d_c_nM4_15_r_p=$literal_formato_9; $r_d_c_nM4_15_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_10) {$r_d_c_nM4_15_r_p=$literal_formato_10; $r_d_c_nM4_15_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_11) {$r_d_c_nM4_15_r_p=$literal_formato_11; $r_d_c_nM4_15_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_12) {$r_d_c_nM4_15_r_p=$literal_formato_12; $r_d_c_nM4_15_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M4 == '4') {
 
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_1) { $r_d_c_nM4_15_r_p=$cualitativa_formato_1; $r_d_c_nM4_15_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_2) { $r_d_c_nM4_15_r_p=$cualitativa_formato_2; $r_d_c_nM4_15_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_3) { $r_d_c_nM4_15_r_p=$cualitativa_formato_3; $r_d_c_nM4_15_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_4) { $r_d_c_nM4_15_r_p=$cualitativa_formato_4; $r_d_c_nM4_15_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_5) { $r_d_c_nM4_15_r_p=$cualitativa_formato_5; $r_d_c_nM4_15_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_6) { $r_d_c_nM4_15_r_p=$cualitativa_formato_6; $r_d_c_nM4_15_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_7) { $r_d_c_nM4_15_r_p=$cualitativa_formato_7; $r_d_c_nM4_15_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_8) { $r_d_c_nM4_15_r_p=$cualitativa_formato_8; $r_d_c_nM4_15_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_9) { $r_d_c_nM4_15_r_p=$cualitativa_formato_9; $r_d_c_nM4_15_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_10) {$r_d_c_nM4_15_r_p=$cualitativa_formato_10; $r_d_c_nM4_15_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_11) {$r_d_c_nM4_15_r_p=$cualitativa_formato_11; $r_d_c_nM4_15_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM4_15_redon>=$comparativo_formato_12) {$r_d_c_nM4_15_r_p=$cualitativa_formato_12; $r_d_c_nM4_15_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM4['nt_15'] == '') { $r_d_c_nM4_15_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM4_15_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM4_15_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}


if ($row_datos_control_notasM4['d_16'] != '') {

$el_d_16 =  $row_datos_control_notasM4['d_16'];

include("../../conectar.php");
$query_indi_16 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_16'                     
               order by id_indicador limit 1" ;
$datos_control_indi_16 = mysqli_query($enlace, $query_indi_16) or die(mysqli_error());
$row_datos_control_indi_16 = mysqli_fetch_array($datos_control_indi_16); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_16['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM4_16_redon =  number_format($row_datos_control_notasM4['nt_16'], 0, '.', '');
if ($formato_eva_M4 == '3') {
 
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_1) { $r_d_c_nM4_16_r_p=$literal_formato_1; $r_d_c_nM4_16_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_2) { $r_d_c_nM4_16_r_p=$literal_formato_2; $r_d_c_nM4_16_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_3) { $r_d_c_nM4_16_r_p=$literal_formato_3; $r_d_c_nM4_16_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_4) { $r_d_c_nM4_16_r_p=$literal_formato_4; $r_d_c_nM4_16_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_5) { $r_d_c_nM4_16_r_p=$literal_formato_5; $r_d_c_nM4_16_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_6) { $r_d_c_nM4_16_r_p=$literal_formato_6; $r_d_c_nM4_16_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_7) { $r_d_c_nM4_16_r_p=$literal_formato_7; $r_d_c_nM4_16_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_8) { $r_d_c_nM4_16_r_p=$literal_formato_8; $r_d_c_nM4_16_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_9) { $r_d_c_nM4_16_r_p=$literal_formato_9; $r_d_c_nM4_16_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_10) {$r_d_c_nM4_16_r_p=$literal_formato_10; $r_d_c_nM4_16_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_11) {$r_d_c_nM4_16_r_p=$literal_formato_11; $r_d_c_nM4_16_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_12) {$r_d_c_nM4_16_r_p=$literal_formato_12; $r_d_c_nM4_16_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M4 == '4') {
 
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_1) { $r_d_c_nM4_16_r_p=$cualitativa_formato_1; $r_d_c_nM4_16_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_2) { $r_d_c_nM4_16_r_p=$cualitativa_formato_2; $r_d_c_nM4_16_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_3) { $r_d_c_nM4_16_r_p=$cualitativa_formato_3; $r_d_c_nM4_16_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_4) { $r_d_c_nM4_16_r_p=$cualitativa_formato_4; $r_d_c_nM4_16_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_5) { $r_d_c_nM4_16_r_p=$cualitativa_formato_5; $r_d_c_nM4_16_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_6) { $r_d_c_nM4_16_r_p=$cualitativa_formato_6; $r_d_c_nM4_16_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_7) { $r_d_c_nM4_16_r_p=$cualitativa_formato_7; $r_d_c_nM4_16_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_8) { $r_d_c_nM4_16_r_p=$cualitativa_formato_8; $r_d_c_nM4_16_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_9) { $r_d_c_nM4_16_r_p=$cualitativa_formato_9; $r_d_c_nM4_16_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_10) {$r_d_c_nM4_16_r_p=$cualitativa_formato_10; $r_d_c_nM4_16_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_11) {$r_d_c_nM4_16_r_p=$cualitativa_formato_11; $r_d_c_nM4_16_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM4_16_redon>=$comparativo_formato_12) {$r_d_c_nM4_16_r_p=$cualitativa_formato_12; $r_d_c_nM4_16_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM4['nt_16'] == '') { $r_d_c_nM4_16_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM4_16_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM4_16_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM4['d_17'] != '') {

$el_d_17 =  $row_datos_control_notasM4['d_17'];

include("../../conectar.php");
$query_indi_17 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_17'                     
               order by id_indicador limit 1" ;
$datos_control_indi_17 = mysqli_query($enlace, $query_indi_17) or die(mysqli_error());
$row_datos_control_indi_17 = mysqli_fetch_array($datos_control_indi_17); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_17['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM4_17_redon =  number_format($row_datos_control_notasM4['nt_17'], 0, '.', '');
if ($formato_eva_M4 == '3') {
 
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_1) { $r_d_c_nM4_17_r_p=$literal_formato_1; $r_d_c_nM4_17_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_2) { $r_d_c_nM4_17_r_p=$literal_formato_2; $r_d_c_nM4_17_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_3) { $r_d_c_nM4_17_r_p=$literal_formato_3; $r_d_c_nM4_17_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_4) { $r_d_c_nM4_17_r_p=$literal_formato_4; $r_d_c_nM4_17_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_5) { $r_d_c_nM4_17_r_p=$literal_formato_5; $r_d_c_nM4_17_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_6) { $r_d_c_nM4_17_r_p=$literal_formato_6; $r_d_c_nM4_17_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_7) { $r_d_c_nM4_17_r_p=$literal_formato_7; $r_d_c_nM4_17_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_8) { $r_d_c_nM4_17_r_p=$literal_formato_8; $r_d_c_nM4_17_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_9) { $r_d_c_nM4_17_r_p=$literal_formato_9; $r_d_c_nM4_17_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_10) {$r_d_c_nM4_17_r_p=$literal_formato_10; $r_d_c_nM4_17_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_11) {$r_d_c_nM4_17_r_p=$literal_formato_11; $r_d_c_nM4_17_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_12) {$r_d_c_nM4_17_r_p=$literal_formato_12; $r_d_c_nM4_17_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M4 == '4') {
 
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_1) { $r_d_c_nM4_17_r_p=$cualitativa_formato_1; $r_d_c_nM4_17_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_2) { $r_d_c_nM4_17_r_p=$cualitativa_formato_2; $r_d_c_nM4_17_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_3) { $r_d_c_nM4_17_r_p=$cualitativa_formato_3; $r_d_c_nM4_17_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_4) { $r_d_c_nM4_17_r_p=$cualitativa_formato_4; $r_d_c_nM4_17_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_5) { $r_d_c_nM4_17_r_p=$cualitativa_formato_5; $r_d_c_nM4_17_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_6) { $r_d_c_nM4_17_r_p=$cualitativa_formato_6; $r_d_c_nM4_17_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_7) { $r_d_c_nM4_17_r_p=$cualitativa_formato_7; $r_d_c_nM4_17_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_8) { $r_d_c_nM4_17_r_p=$cualitativa_formato_8; $r_d_c_nM4_17_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_9) { $r_d_c_nM4_17_r_p=$cualitativa_formato_9; $r_d_c_nM4_17_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_10) {$r_d_c_nM4_17_r_p=$cualitativa_formato_10; $r_d_c_nM4_17_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_11) {$r_d_c_nM4_17_r_p=$cualitativa_formato_11; $r_d_c_nM4_17_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM4_17_redon>=$comparativo_formato_12) {$r_d_c_nM4_17_r_p=$cualitativa_formato_12; $r_d_c_nM4_17_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM4['nt_17'] == '') { $r_d_c_nM4_17_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM4_17_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM4_17_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}
}




if ($row_datos_controlmat['e_eee'] != '') {

    echo $tr_open;
                echo $tdd_open; echo $asterisco;   echo $row_datos_controlmat['e_eee']; echo $dos_puntos;  echo $tdd_close;
     echo $tr_close;

}



if ($row_datos_controlmat['e_eee'] != '') { 

if ($row_datos_control_notasM5['d_11'] != '') {

$el_d_11 =  $row_datos_control_notasM5['d_11'];

include("../../conectar.php");
$query_indi_11 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_11'                       
               order by id_indicador limit 1" ;
$datos_control_indi_11 = mysqli_query($enlace, $query_indi_11) or die(mysqli_error());
$row_datos_control_indi_11 = mysqli_fetch_array($datos_control_indi_11); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_11['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM5_11_redon =  number_format($row_datos_control_notasM5['nt_11'], 0, '.', '');

if ($formato_eva_M5 == '3') {
 
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_1) { $r_d_c_nM5_11_r_p=$literal_formato_1; $r_d_c_nM5_11_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_2) { $r_d_c_nM5_11_r_p=$literal_formato_2; $r_d_c_nM5_11_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_3) { $r_d_c_nM5_11_r_p=$literal_formato_3; $r_d_c_nM5_11_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_4) { $r_d_c_nM5_11_r_p=$literal_formato_4; $r_d_c_nM5_11_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_5) { $r_d_c_nM5_11_r_p=$literal_formato_5; $r_d_c_nM5_11_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_6) { $r_d_c_nM5_11_r_p=$literal_formato_6; $r_d_c_nM5_11_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_7) { $r_d_c_nM5_11_r_p=$literal_formato_7; $r_d_c_nM5_11_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_8) { $r_d_c_nM5_11_r_p=$literal_formato_8; $r_d_c_nM5_11_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_9) { $r_d_c_nM5_11_r_p=$literal_formato_9; $r_d_c_nM5_11_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_10) {$r_d_c_nM5_11_r_p=$literal_formato_10; $r_d_c_nM5_11_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_11) {$r_d_c_nM5_11_r_p=$literal_formato_11; $r_d_c_nM5_11_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_12) {$r_d_c_nM5_11_r_p=$literal_formato_12; $r_d_c_nM5_11_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M5 == '4') {
 
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_1) { $r_d_c_nM5_11_r_p=$cualitativa_formato_1; $r_d_c_nM5_11_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_2) { $r_d_c_nM5_11_r_p=$cualitativa_formato_2; $r_d_c_nM5_11_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_3) { $r_d_c_nM5_11_r_p=$cualitativa_formato_3; $r_d_c_nM5_11_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_4) { $r_d_c_nM5_11_r_p=$cualitativa_formato_4; $r_d_c_nM5_11_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_5) { $r_d_c_nM5_11_r_p=$cualitativa_formato_5; $r_d_c_nM5_11_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_6) { $r_d_c_nM5_11_r_p=$cualitativa_formato_6; $r_d_c_nM5_11_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_7) { $r_d_c_nM5_11_r_p=$cualitativa_formato_7; $r_d_c_nM5_11_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_8) { $r_d_c_nM5_11_r_p=$cualitativa_formato_8; $r_d_c_nM5_11_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_9) { $r_d_c_nM5_11_r_p=$cualitativa_formato_9; $r_d_c_nM5_11_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_10) {$r_d_c_nM5_11_r_p=$cualitativa_formato_10; $r_d_c_nM5_11_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_11) {$r_d_c_nM5_11_r_p=$cualitativa_formato_11; $r_d_c_nM5_11_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM5_11_redon>=$comparativo_formato_12) {$r_d_c_nM5_11_r_p=$cualitativa_formato_12; $r_d_c_nM5_11_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM5['nt_11'] == '') { $r_d_c_nM5_11_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM5_11_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM5_11_r_p_co; echo $parent_close;

                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM5['d_12'] != '') {

$el_d_12 =  $row_datos_control_notasM5['d_12'];

include("../../conectar.php");
$query_indi_12 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_12'                     
               order by id_indicador limit 1" ;
$datos_control_indi_12 = mysqli_query($enlace, $query_indi_12) or die(mysqli_error());
$row_datos_control_indi_12 = mysqli_fetch_array($datos_control_indi_12); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_12['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM5_12_redon =  number_format($row_datos_control_notasM5['nt_12'], 0, '.', '');

if ($formato_eva_M5 == '3') {
 
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_1) { $r_d_c_nM5_12_r_p=$literal_formato_1; $r_d_c_nM5_12_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_2) { $r_d_c_nM5_12_r_p=$literal_formato_2; $r_d_c_nM5_12_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_3) { $r_d_c_nM5_12_r_p=$literal_formato_3; $r_d_c_nM5_12_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_4) { $r_d_c_nM5_12_r_p=$literal_formato_4; $r_d_c_nM5_12_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_5) { $r_d_c_nM5_12_r_p=$literal_formato_5; $r_d_c_nM5_12_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_6) { $r_d_c_nM5_12_r_p=$literal_formato_6; $r_d_c_nM5_12_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_7) { $r_d_c_nM5_12_r_p=$literal_formato_7; $r_d_c_nM5_12_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_8) { $r_d_c_nM5_12_r_p=$literal_formato_8; $r_d_c_nM5_12_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_9) { $r_d_c_nM5_12_r_p=$literal_formato_9; $r_d_c_nM5_12_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_10) {$r_d_c_nM5_12_r_p=$literal_formato_10; $r_d_c_nM5_12_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_11) {$r_d_c_nM5_12_r_p=$literal_formato_11; $r_d_c_nM5_12_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_12) {$r_d_c_nM5_12_r_p=$literal_formato_12; $r_d_c_nM5_12_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M5 == '4') {
 
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_1) { $r_d_c_nM5_12_r_p=$cualitativa_formato_1; $r_d_c_nM5_12_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_2) { $r_d_c_nM5_12_r_p=$cualitativa_formato_2; $r_d_c_nM5_12_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_3) { $r_d_c_nM5_12_r_p=$cualitativa_formato_3; $r_d_c_nM5_12_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_4) { $r_d_c_nM5_12_r_p=$cualitativa_formato_4; $r_d_c_nM5_12_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_5) { $r_d_c_nM5_12_r_p=$cualitativa_formato_5; $r_d_c_nM5_12_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_6) { $r_d_c_nM5_12_r_p=$cualitativa_formato_6; $r_d_c_nM5_12_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_7) { $r_d_c_nM5_12_r_p=$cualitativa_formato_7; $r_d_c_nM5_12_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_8) { $r_d_c_nM5_12_r_p=$cualitativa_formato_8; $r_d_c_nM5_12_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_9) { $r_d_c_nM5_12_r_p=$cualitativa_formato_9; $r_d_c_nM5_12_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_10) {$r_d_c_nM5_12_r_p=$cualitativa_formato_10; $r_d_c_nM5_12_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_11) {$r_d_c_nM5_12_r_p=$cualitativa_formato_11; $r_d_c_nM5_12_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM5_12_redon>=$comparativo_formato_12) {$r_d_c_nM5_12_r_p=$cualitativa_formato_12; $r_d_c_nM5_12_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM5['nt_12'] == '') { $r_d_c_nM5_12_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM5_12_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM5_12_r_p_co; echo $parent_close;

                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM5['d_13'] != '') {


$el_d_13 =  $row_datos_control_notasM5['d_13'];

include("../../conectar.php");
$query_indi_13 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_13'                     
               order by id_indicador limit 1" ;
$datos_control_indi_13 = mysqli_query($enlace, $query_indi_13) or die(mysqli_error());
$row_datos_control_indi_13 = mysqli_fetch_array($datos_control_indi_13); 
 
 mysqli_close($enlace);


echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_13['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
                                        $row_datos_control_notasM5_13_redon =  number_format($row_datos_control_notasM5['nt_13'], 0, '.', '');


if ($formato_eva_M5 == '3') {
 
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_1) { $r_d_c_nM5_13_r_p=$literal_formato_1; $r_d_c_nM5_13_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_2) { $r_d_c_nM5_13_r_p=$literal_formato_2; $r_d_c_nM5_13_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_3) { $r_d_c_nM5_13_r_p=$literal_formato_3; $r_d_c_nM5_13_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_4) { $r_d_c_nM5_13_r_p=$literal_formato_4; $r_d_c_nM5_13_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_5) { $r_d_c_nM5_13_r_p=$literal_formato_5; $r_d_c_nM5_13_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_6) { $r_d_c_nM5_13_r_p=$literal_formato_6; $r_d_c_nM5_13_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_7) { $r_d_c_nM5_13_r_p=$literal_formato_7; $r_d_c_nM5_13_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_8) { $r_d_c_nM5_13_r_p=$literal_formato_8; $r_d_c_nM5_13_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_9) { $r_d_c_nM5_13_r_p=$literal_formato_9; $r_d_c_nM5_13_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_10) {$r_d_c_nM5_13_r_p=$literal_formato_10; $r_d_c_nM5_13_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_11) {$r_d_c_nM5_13_r_p=$literal_formato_11; $r_d_c_nM5_13_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_12) {$r_d_c_nM5_13_r_p=$literal_formato_12; $r_d_c_nM5_13_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M5 == '4') {
 
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_1) { $r_d_c_nM5_13_r_p=$cualitativa_formato_1; $r_d_c_nM5_13_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_2) { $r_d_c_nM5_13_r_p=$cualitativa_formato_2; $r_d_c_nM5_13_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_3) { $r_d_c_nM5_13_r_p=$cualitativa_formato_3; $r_d_c_nM5_13_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_4) { $r_d_c_nM5_13_r_p=$cualitativa_formato_4; $r_d_c_nM5_13_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_5) { $r_d_c_nM5_13_r_p=$cualitativa_formato_5; $r_d_c_nM5_13_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_6) { $r_d_c_nM5_13_r_p=$cualitativa_formato_6; $r_d_c_nM5_13_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_7) { $r_d_c_nM5_13_r_p=$cualitativa_formato_7; $r_d_c_nM5_13_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_8) { $r_d_c_nM5_13_r_p=$cualitativa_formato_8; $r_d_c_nM5_13_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_9) { $r_d_c_nM5_13_r_p=$cualitativa_formato_9; $r_d_c_nM5_13_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_10) {$r_d_c_nM5_13_r_p=$cualitativa_formato_10; $r_d_c_nM5_13_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_11) {$r_d_c_nM5_13_r_p=$cualitativa_formato_11; $r_d_c_nM5_13_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM5_13_redon>=$comparativo_formato_12) {$r_d_c_nM5_13_r_p=$cualitativa_formato_12; $r_d_c_nM5_13_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM5['nt_13'] == '') { $r_d_c_nM5_13_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM5_13_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM5_13_r_p_co; echo $parent_close;
                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM5['d_14'] != '') {

$el_d_14 =  $row_datos_control_notasM5['d_14'];

include("../../conectar.php");
$query_indi_14 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_14'                     
               order by id_indicador limit 1" ;
$datos_control_indi_14 = mysqli_query($enlace, $query_indi_14) or die(mysqli_error());
$row_datos_control_indi_14 = mysqli_fetch_array($datos_control_indi_14); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_14['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM5_14_redon =  number_format($row_datos_control_notasM5['nt_14'], 0, '.', '');

if ($formato_eva_M5 == '3') {
 
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_1) { $r_d_c_nM5_14_r_p=$literal_formato_1; $r_d_c_nM5_14_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_2) { $r_d_c_nM5_14_r_p=$literal_formato_2; $r_d_c_nM5_14_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_3) { $r_d_c_nM5_14_r_p=$literal_formato_3; $r_d_c_nM5_14_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_4) { $r_d_c_nM5_14_r_p=$literal_formato_4; $r_d_c_nM5_14_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_5) { $r_d_c_nM5_14_r_p=$literal_formato_5; $r_d_c_nM5_14_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_6) { $r_d_c_nM5_14_r_p=$literal_formato_6; $r_d_c_nM5_14_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_7) { $r_d_c_nM5_14_r_p=$literal_formato_7; $r_d_c_nM5_14_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_8) { $r_d_c_nM5_14_r_p=$literal_formato_8; $r_d_c_nM5_14_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_9) { $r_d_c_nM5_14_r_p=$literal_formato_9; $r_d_c_nM5_14_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_10) {$r_d_c_nM5_14_r_p=$literal_formato_10; $r_d_c_nM5_14_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_11) {$r_d_c_nM5_14_r_p=$literal_formato_11; $r_d_c_nM5_14_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_12) {$r_d_c_nM5_14_r_p=$literal_formato_12; $r_d_c_nM5_14_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M5 == '4') {
 
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_1) { $r_d_c_nM5_14_r_p=$cualitativa_formato_1; $r_d_c_nM5_14_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_2) { $r_d_c_nM5_14_r_p=$cualitativa_formato_2; $r_d_c_nM5_14_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_3) { $r_d_c_nM5_14_r_p=$cualitativa_formato_3; $r_d_c_nM5_14_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_4) { $r_d_c_nM5_14_r_p=$cualitativa_formato_4; $r_d_c_nM5_14_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_5) { $r_d_c_nM5_14_r_p=$cualitativa_formato_5; $r_d_c_nM5_14_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_6) { $r_d_c_nM5_14_r_p=$cualitativa_formato_6; $r_d_c_nM5_14_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_7) { $r_d_c_nM5_14_r_p=$cualitativa_formato_7; $r_d_c_nM5_14_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_8) { $r_d_c_nM5_14_r_p=$cualitativa_formato_8; $r_d_c_nM5_14_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_9) { $r_d_c_nM5_14_r_p=$cualitativa_formato_9; $r_d_c_nM5_14_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_10) {$r_d_c_nM5_14_r_p=$cualitativa_formato_10; $r_d_c_nM5_14_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_11) {$r_d_c_nM5_14_r_p=$cualitativa_formato_11; $r_d_c_nM5_14_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM5_14_redon>=$comparativo_formato_12) {$r_d_c_nM5_14_r_p=$cualitativa_formato_12; $r_d_c_nM5_14_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM5['nt_14'] == '') { $r_d_c_nM5_14_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM5_14_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM5_14_r_p_co; echo $parent_close; 
                            echo $td_closeB;


  echo $tr_close;

}



if ($row_datos_control_notasM5['d_15'] != '') {

$el_d_15 =  $row_datos_control_notasM5['d_15'];

include("../../conectar.php");
$query_indi_15 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_15'                     
               order by id_indicador limit 1" ;
$datos_control_indi_15 = mysqli_query($enlace, $query_indi_15) or die(mysqli_error());
$row_datos_control_indi_15 = mysqli_fetch_array($datos_control_indi_15); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_15['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM5_15_redon =  number_format($row_datos_control_notasM5['nt_15'], 0, '.', '');
if ($formato_eva_M5 == '3') {
 
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_1) { $r_d_c_nM5_15_r_p=$literal_formato_1; $r_d_c_nM5_15_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_2) { $r_d_c_nM5_15_r_p=$literal_formato_2; $r_d_c_nM5_15_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_3) { $r_d_c_nM5_15_r_p=$literal_formato_3; $r_d_c_nM5_15_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_4) { $r_d_c_nM5_15_r_p=$literal_formato_4; $r_d_c_nM5_15_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_5) { $r_d_c_nM5_15_r_p=$literal_formato_5; $r_d_c_nM5_15_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_6) { $r_d_c_nM5_15_r_p=$literal_formato_6; $r_d_c_nM5_15_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_7) { $r_d_c_nM5_15_r_p=$literal_formato_7; $r_d_c_nM5_15_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_8) { $r_d_c_nM5_15_r_p=$literal_formato_8; $r_d_c_nM5_15_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_9) { $r_d_c_nM5_15_r_p=$literal_formato_9; $r_d_c_nM5_15_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_10) {$r_d_c_nM5_15_r_p=$literal_formato_10; $r_d_c_nM5_15_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_11) {$r_d_c_nM5_15_r_p=$literal_formato_11; $r_d_c_nM5_15_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_12) {$r_d_c_nM5_15_r_p=$literal_formato_12; $r_d_c_nM5_15_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M5 == '4') {
 
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_1) { $r_d_c_nM5_15_r_p=$cualitativa_formato_1; $r_d_c_nM5_15_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_2) { $r_d_c_nM5_15_r_p=$cualitativa_formato_2; $r_d_c_nM5_15_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_3) { $r_d_c_nM5_15_r_p=$cualitativa_formato_3; $r_d_c_nM5_15_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_4) { $r_d_c_nM5_15_r_p=$cualitativa_formato_4; $r_d_c_nM5_15_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_5) { $r_d_c_nM5_15_r_p=$cualitativa_formato_5; $r_d_c_nM5_15_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_6) { $r_d_c_nM5_15_r_p=$cualitativa_formato_6; $r_d_c_nM5_15_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_7) { $r_d_c_nM5_15_r_p=$cualitativa_formato_7; $r_d_c_nM5_15_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_8) { $r_d_c_nM5_15_r_p=$cualitativa_formato_8; $r_d_c_nM5_15_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_9) { $r_d_c_nM5_15_r_p=$cualitativa_formato_9; $r_d_c_nM5_15_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_10) {$r_d_c_nM5_15_r_p=$cualitativa_formato_10; $r_d_c_nM5_15_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_11) {$r_d_c_nM5_15_r_p=$cualitativa_formato_11; $r_d_c_nM5_15_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM5_15_redon>=$comparativo_formato_12) {$r_d_c_nM5_15_r_p=$cualitativa_formato_12; $r_d_c_nM5_15_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM5['nt_15'] == '') { $r_d_c_nM5_15_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM5_15_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM5_15_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}


if ($row_datos_control_notasM5['d_16'] != '') {

$el_d_16 =  $row_datos_control_notasM5['d_16'];

include("../../conectar.php");
$query_indi_16 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_16'                     
               order by id_indicador limit 1" ;
$datos_control_indi_16 = mysqli_query($enlace, $query_indi_16) or die(mysqli_error());
$row_datos_control_indi_16 = mysqli_fetch_array($datos_control_indi_16); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_16['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM5_16_redon =  number_format($row_datos_control_notasM5['nt_16'], 0, '.', '');
if ($formato_eva_M5 == '3') {
 
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_1) { $r_d_c_nM5_16_r_p=$literal_formato_1; $r_d_c_nM5_16_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_2) { $r_d_c_nM5_16_r_p=$literal_formato_2; $r_d_c_nM5_16_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_3) { $r_d_c_nM5_16_r_p=$literal_formato_3; $r_d_c_nM5_16_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_4) { $r_d_c_nM5_16_r_p=$literal_formato_4; $r_d_c_nM5_16_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_5) { $r_d_c_nM5_16_r_p=$literal_formato_5; $r_d_c_nM5_16_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_6) { $r_d_c_nM5_16_r_p=$literal_formato_6; $r_d_c_nM5_16_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_7) { $r_d_c_nM5_16_r_p=$literal_formato_7; $r_d_c_nM5_16_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_8) { $r_d_c_nM5_16_r_p=$literal_formato_8; $r_d_c_nM5_16_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_9) { $r_d_c_nM5_16_r_p=$literal_formato_9; $r_d_c_nM5_16_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_10) {$r_d_c_nM5_16_r_p=$literal_formato_10; $r_d_c_nM5_16_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_11) {$r_d_c_nM5_16_r_p=$literal_formato_11; $r_d_c_nM5_16_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_12) {$r_d_c_nM5_16_r_p=$literal_formato_12; $r_d_c_nM5_16_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M5 == '4') {
 
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_1) { $r_d_c_nM5_16_r_p=$cualitativa_formato_1; $r_d_c_nM5_16_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_2) { $r_d_c_nM5_16_r_p=$cualitativa_formato_2; $r_d_c_nM5_16_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_3) { $r_d_c_nM5_16_r_p=$cualitativa_formato_3; $r_d_c_nM5_16_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_4) { $r_d_c_nM5_16_r_p=$cualitativa_formato_4; $r_d_c_nM5_16_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_5) { $r_d_c_nM5_16_r_p=$cualitativa_formato_5; $r_d_c_nM5_16_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_6) { $r_d_c_nM5_16_r_p=$cualitativa_formato_6; $r_d_c_nM5_16_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_7) { $r_d_c_nM5_16_r_p=$cualitativa_formato_7; $r_d_c_nM5_16_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_8) { $r_d_c_nM5_16_r_p=$cualitativa_formato_8; $r_d_c_nM5_16_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_9) { $r_d_c_nM5_16_r_p=$cualitativa_formato_9; $r_d_c_nM5_16_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_10) {$r_d_c_nM5_16_r_p=$cualitativa_formato_10; $r_d_c_nM5_16_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_11) {$r_d_c_nM5_16_r_p=$cualitativa_formato_11; $r_d_c_nM5_16_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM5_16_redon>=$comparativo_formato_12) {$r_d_c_nM5_16_r_p=$cualitativa_formato_12; $r_d_c_nM5_16_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM5['nt_16'] == '') { $r_d_c_nM5_16_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM5_16_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM5_16_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM5['d_17'] != '') {

$el_d_17 =  $row_datos_control_notasM5['d_17'];

include("../../conectar.php");
$query_indi_17 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_17'                     
               order by id_indicador limit 1" ;
$datos_control_indi_17 = mysqli_query($enlace, $query_indi_17) or die(mysqli_error());
$row_datos_control_indi_17 = mysqli_fetch_array($datos_control_indi_17); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_17['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM5_17_redon =  number_format($row_datos_control_notasM5['nt_17'], 0, '.', '');
if ($formato_eva_M5 == '3') {
 
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_1) { $r_d_c_nM5_17_r_p=$literal_formato_1; $r_d_c_nM5_17_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_2) { $r_d_c_nM5_17_r_p=$literal_formato_2; $r_d_c_nM5_17_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_3) { $r_d_c_nM5_17_r_p=$literal_formato_3; $r_d_c_nM5_17_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_4) { $r_d_c_nM5_17_r_p=$literal_formato_4; $r_d_c_nM5_17_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_5) { $r_d_c_nM5_17_r_p=$literal_formato_5; $r_d_c_nM5_17_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_6) { $r_d_c_nM5_17_r_p=$literal_formato_6; $r_d_c_nM5_17_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_7) { $r_d_c_nM5_17_r_p=$literal_formato_7; $r_d_c_nM5_17_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_8) { $r_d_c_nM5_17_r_p=$literal_formato_8; $r_d_c_nM5_17_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_9) { $r_d_c_nM5_17_r_p=$literal_formato_9; $r_d_c_nM5_17_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_10) {$r_d_c_nM5_17_r_p=$literal_formato_10; $r_d_c_nM5_17_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_11) {$r_d_c_nM5_17_r_p=$literal_formato_11; $r_d_c_nM5_17_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_12) {$r_d_c_nM5_17_r_p=$literal_formato_12; $r_d_c_nM5_17_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M5 == '4') {
 
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_1) { $r_d_c_nM5_17_r_p=$cualitativa_formato_1; $r_d_c_nM5_17_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_2) { $r_d_c_nM5_17_r_p=$cualitativa_formato_2; $r_d_c_nM5_17_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_3) { $r_d_c_nM5_17_r_p=$cualitativa_formato_3; $r_d_c_nM5_17_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_4) { $r_d_c_nM5_17_r_p=$cualitativa_formato_4; $r_d_c_nM5_17_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_5) { $r_d_c_nM5_17_r_p=$cualitativa_formato_5; $r_d_c_nM5_17_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_6) { $r_d_c_nM5_17_r_p=$cualitativa_formato_6; $r_d_c_nM5_17_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_7) { $r_d_c_nM5_17_r_p=$cualitativa_formato_7; $r_d_c_nM5_17_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_8) { $r_d_c_nM5_17_r_p=$cualitativa_formato_8; $r_d_c_nM5_17_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_9) { $r_d_c_nM5_17_r_p=$cualitativa_formato_9; $r_d_c_nM5_17_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_10) {$r_d_c_nM5_17_r_p=$cualitativa_formato_10; $r_d_c_nM5_17_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_11) {$r_d_c_nM5_17_r_p=$cualitativa_formato_11; $r_d_c_nM5_17_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM5_17_redon>=$comparativo_formato_12) {$r_d_c_nM5_17_r_p=$cualitativa_formato_12; $r_d_c_nM5_17_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM5['nt_17'] == '') { $r_d_c_nM5_17_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM5_17_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM5_17_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}
}





if ($row_datos_controlmat['f_fff'] != '') {

    echo $tr_open;
                echo $tdd_open; echo $asterisco;   echo $row_datos_controlmat['f_fff']; echo $dos_puntos;  echo $tdd_close;
     echo $tr_close;

}



if ($row_datos_controlmat['f_fff'] != '') { 

if ($row_datos_control_notasM6['d_11'] != '') {

$el_d_11 =  $row_datos_control_notasM6['d_11'];

include("../../conectar.php");
$query_indi_11 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_11'                       
               order by id_indicador limit 1" ;
$datos_control_indi_11 = mysqli_query($enlace, $query_indi_11) or die(mysqli_error());
$row_datos_control_indi_11 = mysqli_fetch_array($datos_control_indi_11); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_11['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM6_11_redon =  number_format($row_datos_control_notasM6['nt_11'], 0, '.', '');

if ($formato_eva_M6 == '3') {
 
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_1) { $r_d_c_nM6_11_r_p=$literal_formato_1; $r_d_c_nM6_11_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_2) { $r_d_c_nM6_11_r_p=$literal_formato_2; $r_d_c_nM6_11_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_3) { $r_d_c_nM6_11_r_p=$literal_formato_3; $r_d_c_nM6_11_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_4) { $r_d_c_nM6_11_r_p=$literal_formato_4; $r_d_c_nM6_11_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_5) { $r_d_c_nM6_11_r_p=$literal_formato_5; $r_d_c_nM6_11_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_6) { $r_d_c_nM6_11_r_p=$literal_formato_6; $r_d_c_nM6_11_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_7) { $r_d_c_nM6_11_r_p=$literal_formato_7; $r_d_c_nM6_11_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_8) { $r_d_c_nM6_11_r_p=$literal_formato_8; $r_d_c_nM6_11_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_9) { $r_d_c_nM6_11_r_p=$literal_formato_9; $r_d_c_nM6_11_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_10) {$r_d_c_nM6_11_r_p=$literal_formato_10; $r_d_c_nM6_11_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_11) {$r_d_c_nM6_11_r_p=$literal_formato_11; $r_d_c_nM6_11_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_12) {$r_d_c_nM6_11_r_p=$literal_formato_12; $r_d_c_nM6_11_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M6 == '4') {
 
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_1) { $r_d_c_nM6_11_r_p=$cualitativa_formato_1; $r_d_c_nM6_11_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_2) { $r_d_c_nM6_11_r_p=$cualitativa_formato_2; $r_d_c_nM6_11_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_3) { $r_d_c_nM6_11_r_p=$cualitativa_formato_3; $r_d_c_nM6_11_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_4) { $r_d_c_nM6_11_r_p=$cualitativa_formato_4; $r_d_c_nM6_11_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_5) { $r_d_c_nM6_11_r_p=$cualitativa_formato_5; $r_d_c_nM6_11_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_6) { $r_d_c_nM6_11_r_p=$cualitativa_formato_6; $r_d_c_nM6_11_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_7) { $r_d_c_nM6_11_r_p=$cualitativa_formato_7; $r_d_c_nM6_11_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_8) { $r_d_c_nM6_11_r_p=$cualitativa_formato_8; $r_d_c_nM6_11_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_9) { $r_d_c_nM6_11_r_p=$cualitativa_formato_9; $r_d_c_nM6_11_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_10) {$r_d_c_nM6_11_r_p=$cualitativa_formato_10; $r_d_c_nM6_11_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_11) {$r_d_c_nM6_11_r_p=$cualitativa_formato_11; $r_d_c_nM6_11_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM6_11_redon>=$comparativo_formato_12) {$r_d_c_nM6_11_r_p=$cualitativa_formato_12; $r_d_c_nM6_11_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM6['nt_11'] == '') { $r_d_c_nM6_11_r_p = $row_datos_modcabecc['no_entrego_abre']; }



echo $r_d_c_nM6_11_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM6_11_r_p_co; echo $parent_close;

                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM6['d_12'] != '') {

$el_d_12 =  $row_datos_control_notasM6['d_12'];

include("../../conectar.php");
$query_indi_12 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_12'                     
               order by id_indicador limit 1" ;
$datos_control_indi_12 = mysqli_query($enlace, $query_indi_12) or die(mysqli_error());
$row_datos_control_indi_12 = mysqli_fetch_array($datos_control_indi_12); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_12['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM6_12_redon =  number_format($row_datos_control_notasM6['nt_12'], 0, '.', '');


if ($formato_eva_M6 == '3') {
 
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_1) { $r_d_c_nM6_12_r_p=$literal_formato_1; $r_d_c_nM6_12_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_2) { $r_d_c_nM6_12_r_p=$literal_formato_2; $r_d_c_nM6_12_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_3) { $r_d_c_nM6_12_r_p=$literal_formato_3; $r_d_c_nM6_12_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_4) { $r_d_c_nM6_12_r_p=$literal_formato_4; $r_d_c_nM6_12_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_5) { $r_d_c_nM6_12_r_p=$literal_formato_5; $r_d_c_nM6_12_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_6) { $r_d_c_nM6_12_r_p=$literal_formato_6; $r_d_c_nM6_12_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_7) { $r_d_c_nM6_12_r_p=$literal_formato_7; $r_d_c_nM6_12_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_8) { $r_d_c_nM6_12_r_p=$literal_formato_8; $r_d_c_nM6_12_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_9) { $r_d_c_nM6_12_r_p=$literal_formato_9; $r_d_c_nM6_12_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_10) {$r_d_c_nM6_12_r_p=$literal_formato_10; $r_d_c_nM6_12_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_11) {$r_d_c_nM6_12_r_p=$literal_formato_11; $r_d_c_nM6_12_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_12) {$r_d_c_nM6_12_r_p=$literal_formato_12; $r_d_c_nM6_12_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M6 == '4') {
 
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_1) { $r_d_c_nM6_12_r_p=$cualitativa_formato_1; $r_d_c_nM6_12_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_2) { $r_d_c_nM6_12_r_p=$cualitativa_formato_2; $r_d_c_nM6_12_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_3) { $r_d_c_nM6_12_r_p=$cualitativa_formato_3; $r_d_c_nM6_12_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_4) { $r_d_c_nM6_12_r_p=$cualitativa_formato_4; $r_d_c_nM6_12_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_5) { $r_d_c_nM6_12_r_p=$cualitativa_formato_5; $r_d_c_nM6_12_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_6) { $r_d_c_nM6_12_r_p=$cualitativa_formato_6; $r_d_c_nM6_12_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_7) { $r_d_c_nM6_12_r_p=$cualitativa_formato_7; $r_d_c_nM6_12_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_8) { $r_d_c_nM6_12_r_p=$cualitativa_formato_8; $r_d_c_nM6_12_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_9) { $r_d_c_nM6_12_r_p=$cualitativa_formato_9; $r_d_c_nM6_12_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_10) {$r_d_c_nM6_12_r_p=$cualitativa_formato_10; $r_d_c_nM6_12_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_11) {$r_d_c_nM6_12_r_p=$cualitativa_formato_11; $r_d_c_nM6_12_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM6_12_redon>=$comparativo_formato_12) {$r_d_c_nM6_12_r_p=$cualitativa_formato_12; $r_d_c_nM6_12_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM6['nt_12'] == '') { $r_d_c_nM6_12_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM6_12_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM6_12_r_p_co; echo $parent_close;

                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM6['d_13'] != '') {


$el_d_13 =  $row_datos_control_notasM6['d_13'];

include("../../conectar.php");
$query_indi_13 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_13'                     
               order by id_indicador limit 1" ;
$datos_control_indi_13 = mysqli_query($enlace, $query_indi_13) or die(mysqli_error());
$row_datos_control_indi_13 = mysqli_fetch_array($datos_control_indi_13); 
 
 mysqli_close($enlace);


echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_13['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
                                        $row_datos_control_notasM6_13_redon =  number_format($row_datos_control_notasM6['nt_13'], 0, '.', '');

if ($formato_eva_M6 == '3') {
 
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_1) { $r_d_c_nM6_13_r_p=$literal_formato_1; $r_d_c_nM6_13_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_2) { $r_d_c_nM6_13_r_p=$literal_formato_2; $r_d_c_nM6_13_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_3) { $r_d_c_nM6_13_r_p=$literal_formato_3; $r_d_c_nM6_13_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_4) { $r_d_c_nM6_13_r_p=$literal_formato_4; $r_d_c_nM6_13_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_5) { $r_d_c_nM6_13_r_p=$literal_formato_5; $r_d_c_nM6_13_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_6) { $r_d_c_nM6_13_r_p=$literal_formato_6; $r_d_c_nM6_13_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_7) { $r_d_c_nM6_13_r_p=$literal_formato_7; $r_d_c_nM6_13_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_8) { $r_d_c_nM6_13_r_p=$literal_formato_8; $r_d_c_nM6_13_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_9) { $r_d_c_nM6_13_r_p=$literal_formato_9; $r_d_c_nM6_13_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_10) {$r_d_c_nM6_13_r_p=$literal_formato_10; $r_d_c_nM6_13_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_11) {$r_d_c_nM6_13_r_p=$literal_formato_11; $r_d_c_nM6_13_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_12) {$r_d_c_nM6_13_r_p=$literal_formato_12; $r_d_c_nM6_13_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M6 == '4') {
 
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_1) { $r_d_c_nM6_13_r_p=$cualitativa_formato_1; $r_d_c_nM6_13_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_2) { $r_d_c_nM6_13_r_p=$cualitativa_formato_2; $r_d_c_nM6_13_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_3) { $r_d_c_nM6_13_r_p=$cualitativa_formato_3; $r_d_c_nM6_13_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_4) { $r_d_c_nM6_13_r_p=$cualitativa_formato_4; $r_d_c_nM6_13_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_5) { $r_d_c_nM6_13_r_p=$cualitativa_formato_5; $r_d_c_nM6_13_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_6) { $r_d_c_nM6_13_r_p=$cualitativa_formato_6; $r_d_c_nM6_13_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_7) { $r_d_c_nM6_13_r_p=$cualitativa_formato_7; $r_d_c_nM6_13_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_8) { $r_d_c_nM6_13_r_p=$cualitativa_formato_8; $r_d_c_nM6_13_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_9) { $r_d_c_nM6_13_r_p=$cualitativa_formato_9; $r_d_c_nM6_13_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_10) {$r_d_c_nM6_13_r_p=$cualitativa_formato_10; $r_d_c_nM6_13_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_11) {$r_d_c_nM6_13_r_p=$cualitativa_formato_11; $r_d_c_nM6_13_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM6_13_redon>=$comparativo_formato_12) {$r_d_c_nM6_13_r_p=$cualitativa_formato_12; $r_d_c_nM6_13_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM6['nt_13'] == '') { $r_d_c_nM6_13_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM6_13_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM6_13_r_p_co; echo $parent_close;
                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM6['d_14'] != '') {

$el_d_14 =  $row_datos_control_notasM6['d_14'];

include("../../conectar.php");
$query_indi_14 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_14'                     
               order by id_indicador limit 1" ;
$datos_control_indi_14 = mysqli_query($enlace, $query_indi_14) or die(mysqli_error());
$row_datos_control_indi_14 = mysqli_fetch_array($datos_control_indi_14); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_14['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM6_14_redon =  number_format($row_datos_control_notasM6['nt_14'], 0, '.', '');

if ($formato_eva_M6 == '3') {
 
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_1) { $r_d_c_nM6_14_r_p=$literal_formato_1; $r_d_c_nM6_14_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_2) { $r_d_c_nM6_14_r_p=$literal_formato_2; $r_d_c_nM6_14_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_3) { $r_d_c_nM6_14_r_p=$literal_formato_3; $r_d_c_nM6_14_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_4) { $r_d_c_nM6_14_r_p=$literal_formato_4; $r_d_c_nM6_14_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_5) { $r_d_c_nM6_14_r_p=$literal_formato_5; $r_d_c_nM6_14_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_6) { $r_d_c_nM6_14_r_p=$literal_formato_6; $r_d_c_nM6_14_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_7) { $r_d_c_nM6_14_r_p=$literal_formato_7; $r_d_c_nM6_14_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_8) { $r_d_c_nM6_14_r_p=$literal_formato_8; $r_d_c_nM6_14_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_9) { $r_d_c_nM6_14_r_p=$literal_formato_9; $r_d_c_nM6_14_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_10) {$r_d_c_nM6_14_r_p=$literal_formato_10; $r_d_c_nM6_14_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_11) {$r_d_c_nM6_14_r_p=$literal_formato_11; $r_d_c_nM6_14_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_12) {$r_d_c_nM6_14_r_p=$literal_formato_12; $r_d_c_nM6_14_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M6 == '4') {
 
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_1) { $r_d_c_nM6_14_r_p=$cualitativa_formato_1; $r_d_c_nM6_14_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_2) { $r_d_c_nM6_14_r_p=$cualitativa_formato_2; $r_d_c_nM6_14_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_3) { $r_d_c_nM6_14_r_p=$cualitativa_formato_3; $r_d_c_nM6_14_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_4) { $r_d_c_nM6_14_r_p=$cualitativa_formato_4; $r_d_c_nM6_14_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_5) { $r_d_c_nM6_14_r_p=$cualitativa_formato_5; $r_d_c_nM6_14_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_6) { $r_d_c_nM6_14_r_p=$cualitativa_formato_6; $r_d_c_nM6_14_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_7) { $r_d_c_nM6_14_r_p=$cualitativa_formato_7; $r_d_c_nM6_14_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_8) { $r_d_c_nM6_14_r_p=$cualitativa_formato_8; $r_d_c_nM6_14_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_9) { $r_d_c_nM6_14_r_p=$cualitativa_formato_9; $r_d_c_nM6_14_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_10) {$r_d_c_nM6_14_r_p=$cualitativa_formato_10; $r_d_c_nM6_14_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_11) {$r_d_c_nM6_14_r_p=$cualitativa_formato_11; $r_d_c_nM6_14_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM6_14_redon>=$comparativo_formato_12) {$r_d_c_nM6_14_r_p=$cualitativa_formato_12; $r_d_c_nM6_14_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM6['nt_14'] == '') { $r_d_c_nM6_14_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM6_14_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM6_14_r_p_co; echo $parent_close; 
                            echo $td_closeB;


  echo $tr_close;

}



if ($row_datos_control_notasM6['d_15'] != '') {

$el_d_15 =  $row_datos_control_notasM6['d_15'];

include("../../conectar.php");
$query_indi_15 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_15'                     
               order by id_indicador limit 1" ;
$datos_control_indi_15 = mysqli_query($enlace, $query_indi_15) or die(mysqli_error());
$row_datos_control_indi_15 = mysqli_fetch_array($datos_control_indi_15); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_15['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM6_15_redon =  number_format($row_datos_control_notasM6['nt_15'], 0, '.', '');

if ($formato_eva_M6 == '3') {
 
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_1) { $r_d_c_nM6_15_r_p=$literal_formato_1; $r_d_c_nM6_15_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_2) { $r_d_c_nM6_15_r_p=$literal_formato_2; $r_d_c_nM6_15_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_3) { $r_d_c_nM6_15_r_p=$literal_formato_3; $r_d_c_nM6_15_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_4) { $r_d_c_nM6_15_r_p=$literal_formato_4; $r_d_c_nM6_15_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_5) { $r_d_c_nM6_15_r_p=$literal_formato_5; $r_d_c_nM6_15_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_6) { $r_d_c_nM6_15_r_p=$literal_formato_6; $r_d_c_nM6_15_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_7) { $r_d_c_nM6_15_r_p=$literal_formato_7; $r_d_c_nM6_15_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_8) { $r_d_c_nM6_15_r_p=$literal_formato_8; $r_d_c_nM6_15_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_9) { $r_d_c_nM6_15_r_p=$literal_formato_9; $r_d_c_nM6_15_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_10) {$r_d_c_nM6_15_r_p=$literal_formato_10; $r_d_c_nM6_15_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_11) {$r_d_c_nM6_15_r_p=$literal_formato_11; $r_d_c_nM6_15_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_12) {$r_d_c_nM6_15_r_p=$literal_formato_12; $r_d_c_nM6_15_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M6 == '4') {
 
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_1) { $r_d_c_nM6_15_r_p=$cualitativa_formato_1; $r_d_c_nM6_15_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_2) { $r_d_c_nM6_15_r_p=$cualitativa_formato_2; $r_d_c_nM6_15_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_3) { $r_d_c_nM6_15_r_p=$cualitativa_formato_3; $r_d_c_nM6_15_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_4) { $r_d_c_nM6_15_r_p=$cualitativa_formato_4; $r_d_c_nM6_15_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_5) { $r_d_c_nM6_15_r_p=$cualitativa_formato_5; $r_d_c_nM6_15_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_6) { $r_d_c_nM6_15_r_p=$cualitativa_formato_6; $r_d_c_nM6_15_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_7) { $r_d_c_nM6_15_r_p=$cualitativa_formato_7; $r_d_c_nM6_15_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_8) { $r_d_c_nM6_15_r_p=$cualitativa_formato_8; $r_d_c_nM6_15_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_9) { $r_d_c_nM6_15_r_p=$cualitativa_formato_9; $r_d_c_nM6_15_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_10) {$r_d_c_nM6_15_r_p=$cualitativa_formato_10; $r_d_c_nM6_15_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_11) {$r_d_c_nM6_15_r_p=$cualitativa_formato_11; $r_d_c_nM6_15_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM6_15_redon>=$comparativo_formato_12) {$r_d_c_nM6_15_r_p=$cualitativa_formato_12; $r_d_c_nM6_15_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM6['nt_15'] == '') { $r_d_c_nM6_15_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM6_15_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM6_15_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}


if ($row_datos_control_notasM6['d_16'] != '') {

$el_d_16 =  $row_datos_control_notasM6['d_16'];

include("../../conectar.php");
$query_indi_16 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_16'                     
               order by id_indicador limit 1" ;
$datos_control_indi_16 = mysqli_query($enlace, $query_indi_16) or die(mysqli_error());
$row_datos_control_indi_16 = mysqli_fetch_array($datos_control_indi_16); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_16['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM6_16_redon =  number_format($row_datos_control_notasM6['nt_16'], 0, '.', '');

if ($formato_eva_M6 == '3') {
 
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_1) { $r_d_c_nM6_16_r_p=$literal_formato_1; $r_d_c_nM6_16_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_2) { $r_d_c_nM6_16_r_p=$literal_formato_2; $r_d_c_nM6_16_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_3) { $r_d_c_nM6_16_r_p=$literal_formato_3; $r_d_c_nM6_16_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_4) { $r_d_c_nM6_16_r_p=$literal_formato_4; $r_d_c_nM6_16_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_5) { $r_d_c_nM6_16_r_p=$literal_formato_5; $r_d_c_nM6_16_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_6) { $r_d_c_nM6_16_r_p=$literal_formato_6; $r_d_c_nM6_16_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_7) { $r_d_c_nM6_16_r_p=$literal_formato_7; $r_d_c_nM6_16_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_8) { $r_d_c_nM6_16_r_p=$literal_formato_8; $r_d_c_nM6_16_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_9) { $r_d_c_nM6_16_r_p=$literal_formato_9; $r_d_c_nM6_16_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_10) {$r_d_c_nM6_16_r_p=$literal_formato_10; $r_d_c_nM6_16_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_11) {$r_d_c_nM6_16_r_p=$literal_formato_11; $r_d_c_nM6_16_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_12) {$r_d_c_nM6_16_r_p=$literal_formato_12; $r_d_c_nM6_16_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M6 == '4') {
 
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_1) { $r_d_c_nM6_16_r_p=$cualitativa_formato_1; $r_d_c_nM6_16_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_2) { $r_d_c_nM6_16_r_p=$cualitativa_formato_2; $r_d_c_nM6_16_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_3) { $r_d_c_nM6_16_r_p=$cualitativa_formato_3; $r_d_c_nM6_16_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_4) { $r_d_c_nM6_16_r_p=$cualitativa_formato_4; $r_d_c_nM6_16_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_5) { $r_d_c_nM6_16_r_p=$cualitativa_formato_5; $r_d_c_nM6_16_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_6) { $r_d_c_nM6_16_r_p=$cualitativa_formato_6; $r_d_c_nM6_16_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_7) { $r_d_c_nM6_16_r_p=$cualitativa_formato_7; $r_d_c_nM6_16_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_8) { $r_d_c_nM6_16_r_p=$cualitativa_formato_8; $r_d_c_nM6_16_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_9) { $r_d_c_nM6_16_r_p=$cualitativa_formato_9; $r_d_c_nM6_16_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_10) {$r_d_c_nM6_16_r_p=$cualitativa_formato_10; $r_d_c_nM6_16_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_11) {$r_d_c_nM6_16_r_p=$cualitativa_formato_11; $r_d_c_nM6_16_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM6_16_redon>=$comparativo_formato_12) {$r_d_c_nM6_16_r_p=$cualitativa_formato_12; $r_d_c_nM6_16_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM6['nt_16'] == '') { $r_d_c_nM6_16_r_p = $row_datos_modcabecc['no_entrego_abre']; }



echo $r_d_c_nM6_16_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM6_16_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM6['d_17'] != '') {

$el_d_17 =  $row_datos_control_notasM6['d_17'];

include("../../conectar.php");
$query_indi_17 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_17'                     
               order by id_indicador limit 1" ;
$datos_control_indi_17 = mysqli_query($enlace, $query_indi_17) or die(mysqli_error());
$row_datos_control_indi_17 = mysqli_fetch_array($datos_control_indi_17); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_17['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM6_17_redon =  number_format($row_datos_control_notasM6['nt_17'], 0, '.', '');
if ($formato_eva_M6 == '3') {
 
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_1) { $r_d_c_nM6_17_r_p=$literal_formato_1; $r_d_c_nM6_17_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_2) { $r_d_c_nM6_17_r_p=$literal_formato_2; $r_d_c_nM6_17_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_3) { $r_d_c_nM6_17_r_p=$literal_formato_3; $r_d_c_nM6_17_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_4) { $r_d_c_nM6_17_r_p=$literal_formato_4; $r_d_c_nM6_17_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_5) { $r_d_c_nM6_17_r_p=$literal_formato_5; $r_d_c_nM6_17_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_6) { $r_d_c_nM6_17_r_p=$literal_formato_6; $r_d_c_nM6_17_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_7) { $r_d_c_nM6_17_r_p=$literal_formato_7; $r_d_c_nM6_17_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_8) { $r_d_c_nM6_17_r_p=$literal_formato_8; $r_d_c_nM6_17_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_9) { $r_d_c_nM6_17_r_p=$literal_formato_9; $r_d_c_nM6_17_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_10) {$r_d_c_nM6_17_r_p=$literal_formato_10; $r_d_c_nM6_17_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_11) {$r_d_c_nM6_17_r_p=$literal_formato_11; $r_d_c_nM6_17_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_12) {$r_d_c_nM6_17_r_p=$literal_formato_12; $r_d_c_nM6_17_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M6 == '4') {
 
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_1) { $r_d_c_nM6_17_r_p=$cualitativa_formato_1; $r_d_c_nM6_17_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_2) { $r_d_c_nM6_17_r_p=$cualitativa_formato_2; $r_d_c_nM6_17_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_3) { $r_d_c_nM6_17_r_p=$cualitativa_formato_3; $r_d_c_nM6_17_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_4) { $r_d_c_nM6_17_r_p=$cualitativa_formato_4; $r_d_c_nM6_17_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_5) { $r_d_c_nM6_17_r_p=$cualitativa_formato_5; $r_d_c_nM6_17_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_6) { $r_d_c_nM6_17_r_p=$cualitativa_formato_6; $r_d_c_nM6_17_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_7) { $r_d_c_nM6_17_r_p=$cualitativa_formato_7; $r_d_c_nM6_17_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_8) { $r_d_c_nM6_17_r_p=$cualitativa_formato_8; $r_d_c_nM6_17_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_9) { $r_d_c_nM6_17_r_p=$cualitativa_formato_9; $r_d_c_nM6_17_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_10) {$r_d_c_nM6_17_r_p=$cualitativa_formato_10; $r_d_c_nM6_17_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_11) {$r_d_c_nM6_17_r_p=$cualitativa_formato_11; $r_d_c_nM6_17_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM6_17_redon>=$comparativo_formato_12) {$r_d_c_nM6_17_r_p=$cualitativa_formato_12; $r_d_c_nM6_17_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM6['nt_17'] == '') { $r_d_c_nM6_17_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM6_17_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM6_17_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}
}



if ($row_datos_controlmat['g_ggg'] != '') {

    echo $tr_open;
                echo $tdd_open; echo $asterisco;   echo $row_datos_controlmat['g_ggg']; echo $dos_puntos;  echo $tdd_close;
     echo $tr_close;

}



if ($row_datos_controlmat['g_ggg'] != '') { 

if ($row_datos_control_notasM7['d_11'] != '') {

$el_d_11 =  $row_datos_control_notasM7['d_11'];

include("../../conectar.php");
$query_indi_11 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_11'                       
               order by id_indicador limit 1" ;
$datos_control_indi_11 = mysqli_query($enlace, $query_indi_11) or die(mysqli_error());
$row_datos_control_indi_11 = mysqli_fetch_array($datos_control_indi_11); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_11['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM7_11_redon =  number_format($row_datos_control_notasM7['nt_11'], 0, '.', '');

if ($formato_eva_M7 == '3') {
 
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_1) { $r_d_c_nM7_11_r_p=$literal_formato_1; $r_d_c_nM7_11_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_2) { $r_d_c_nM7_11_r_p=$literal_formato_2; $r_d_c_nM7_11_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_3) { $r_d_c_nM7_11_r_p=$literal_formato_3; $r_d_c_nM7_11_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_4) { $r_d_c_nM7_11_r_p=$literal_formato_4; $r_d_c_nM7_11_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_5) { $r_d_c_nM7_11_r_p=$literal_formato_5; $r_d_c_nM7_11_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_6) { $r_d_c_nM7_11_r_p=$literal_formato_6; $r_d_c_nM7_11_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_7) { $r_d_c_nM7_11_r_p=$literal_formato_7; $r_d_c_nM7_11_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_8) { $r_d_c_nM7_11_r_p=$literal_formato_8; $r_d_c_nM7_11_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_9) { $r_d_c_nM7_11_r_p=$literal_formato_9; $r_d_c_nM7_11_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_10) {$r_d_c_nM7_11_r_p=$literal_formato_10; $r_d_c_nM7_11_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_11) {$r_d_c_nM7_11_r_p=$literal_formato_11; $r_d_c_nM7_11_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_12) {$r_d_c_nM7_11_r_p=$literal_formato_12; $r_d_c_nM7_11_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M7 == '4') {
 
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_1) { $r_d_c_nM7_11_r_p=$cualitativa_formato_1; $r_d_c_nM7_11_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_2) { $r_d_c_nM7_11_r_p=$cualitativa_formato_2; $r_d_c_nM7_11_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_3) { $r_d_c_nM7_11_r_p=$cualitativa_formato_3; $r_d_c_nM7_11_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_4) { $r_d_c_nM7_11_r_p=$cualitativa_formato_4; $r_d_c_nM7_11_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_5) { $r_d_c_nM7_11_r_p=$cualitativa_formato_5; $r_d_c_nM7_11_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_6) { $r_d_c_nM7_11_r_p=$cualitativa_formato_6; $r_d_c_nM7_11_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_7) { $r_d_c_nM7_11_r_p=$cualitativa_formato_7; $r_d_c_nM7_11_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_8) { $r_d_c_nM7_11_r_p=$cualitativa_formato_8; $r_d_c_nM7_11_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_9) { $r_d_c_nM7_11_r_p=$cualitativa_formato_9; $r_d_c_nM7_11_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_10) {$r_d_c_nM7_11_r_p=$cualitativa_formato_10; $r_d_c_nM7_11_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_11) {$r_d_c_nM7_11_r_p=$cualitativa_formato_11; $r_d_c_nM7_11_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM7_11_redon>=$comparativo_formato_12) {$r_d_c_nM7_11_r_p=$cualitativa_formato_12; $r_d_c_nM7_11_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM7['nt_11'] == '') { $r_d_c_nM7_11_r_p = $row_datos_modcabecc['no_entrego_abre']; }



echo $r_d_c_nM7_11_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM7_11_r_p_co; echo $parent_close;

                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM7['d_12'] != '') {

$el_d_12 =  $row_datos_control_notasM7['d_12'];

include("../../conectar.php");
$query_indi_12 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_12'                     
               order by id_indicador limit 1" ;
$datos_control_indi_12 = mysqli_query($enlace, $query_indi_12) or die(mysqli_error());
$row_datos_control_indi_12 = mysqli_fetch_array($datos_control_indi_12); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_12['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM7_12_redon =  number_format($row_datos_control_notasM7['nt_12'], 0, '.', '');

if ($formato_eva_M7 == '3') {
 
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_1) { $r_d_c_nM7_12_r_p=$literal_formato_1; $r_d_c_nM7_12_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_2) { $r_d_c_nM7_12_r_p=$literal_formato_2; $r_d_c_nM7_12_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_3) { $r_d_c_nM7_12_r_p=$literal_formato_3; $r_d_c_nM7_12_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_4) { $r_d_c_nM7_12_r_p=$literal_formato_4; $r_d_c_nM7_12_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_5) { $r_d_c_nM7_12_r_p=$literal_formato_5; $r_d_c_nM7_12_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_6) { $r_d_c_nM7_12_r_p=$literal_formato_6; $r_d_c_nM7_12_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_7) { $r_d_c_nM7_12_r_p=$literal_formato_7; $r_d_c_nM7_12_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_8) { $r_d_c_nM7_12_r_p=$literal_formato_8; $r_d_c_nM7_12_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_9) { $r_d_c_nM7_12_r_p=$literal_formato_9; $r_d_c_nM7_12_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_10) {$r_d_c_nM7_12_r_p=$literal_formato_10; $r_d_c_nM7_12_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_11) {$r_d_c_nM7_12_r_p=$literal_formato_11; $r_d_c_nM7_12_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_12) {$r_d_c_nM7_12_r_p=$literal_formato_12; $r_d_c_nM7_12_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M7 == '4') {
 
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_1) { $r_d_c_nM7_12_r_p=$cualitativa_formato_1; $r_d_c_nM7_12_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_2) { $r_d_c_nM7_12_r_p=$cualitativa_formato_2; $r_d_c_nM7_12_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_3) { $r_d_c_nM7_12_r_p=$cualitativa_formato_3; $r_d_c_nM7_12_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_4) { $r_d_c_nM7_12_r_p=$cualitativa_formato_4; $r_d_c_nM7_12_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_5) { $r_d_c_nM7_12_r_p=$cualitativa_formato_5; $r_d_c_nM7_12_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_6) { $r_d_c_nM7_12_r_p=$cualitativa_formato_6; $r_d_c_nM7_12_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_7) { $r_d_c_nM7_12_r_p=$cualitativa_formato_7; $r_d_c_nM7_12_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_8) { $r_d_c_nM7_12_r_p=$cualitativa_formato_8; $r_d_c_nM7_12_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_9) { $r_d_c_nM7_12_r_p=$cualitativa_formato_9; $r_d_c_nM7_12_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_10) {$r_d_c_nM7_12_r_p=$cualitativa_formato_10; $r_d_c_nM7_12_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_11) {$r_d_c_nM7_12_r_p=$cualitativa_formato_11; $r_d_c_nM7_12_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM7_12_redon>=$comparativo_formato_12) {$r_d_c_nM7_12_r_p=$cualitativa_formato_12; $r_d_c_nM7_12_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM7['nt_12'] == '') { $r_d_c_nM7_12_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM7_12_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM7_12_r_p_co; echo $parent_close;

                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM7['d_13'] != '') {


$el_d_13 =  $row_datos_control_notasM7['d_13'];

include("../../conectar.php");
$query_indi_13 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_13'                     
               order by id_indicador limit 1" ;
$datos_control_indi_13 = mysqli_query($enlace, $query_indi_13) or die(mysqli_error());
$row_datos_control_indi_13 = mysqli_fetch_array($datos_control_indi_13); 
 
 mysqli_close($enlace);


echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_13['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
                                        $row_datos_control_notasM7_13_redon =  number_format($row_datos_control_notasM7['nt_13'], 0, '.', '');

if ($formato_eva_M7 == '3') {
 
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_1) { $r_d_c_nM7_13_r_p=$literal_formato_1; $r_d_c_nM7_13_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_2) { $r_d_c_nM7_13_r_p=$literal_formato_2; $r_d_c_nM7_13_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_3) { $r_d_c_nM7_13_r_p=$literal_formato_3; $r_d_c_nM7_13_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_4) { $r_d_c_nM7_13_r_p=$literal_formato_4; $r_d_c_nM7_13_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_5) { $r_d_c_nM7_13_r_p=$literal_formato_5; $r_d_c_nM7_13_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_6) { $r_d_c_nM7_13_r_p=$literal_formato_6; $r_d_c_nM7_13_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_7) { $r_d_c_nM7_13_r_p=$literal_formato_7; $r_d_c_nM7_13_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_8) { $r_d_c_nM7_13_r_p=$literal_formato_8; $r_d_c_nM7_13_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_9) { $r_d_c_nM7_13_r_p=$literal_formato_9; $r_d_c_nM7_13_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_10) {$r_d_c_nM7_13_r_p=$literal_formato_10; $r_d_c_nM7_13_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_11) {$r_d_c_nM7_13_r_p=$literal_formato_11; $r_d_c_nM7_13_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_12) {$r_d_c_nM7_13_r_p=$literal_formato_12; $r_d_c_nM7_13_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M7 == '4') {
 
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_1) { $r_d_c_nM7_13_r_p=$cualitativa_formato_1; $r_d_c_nM7_13_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_2) { $r_d_c_nM7_13_r_p=$cualitativa_formato_2; $r_d_c_nM7_13_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_3) { $r_d_c_nM7_13_r_p=$cualitativa_formato_3; $r_d_c_nM7_13_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_4) { $r_d_c_nM7_13_r_p=$cualitativa_formato_4; $r_d_c_nM7_13_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_5) { $r_d_c_nM7_13_r_p=$cualitativa_formato_5; $r_d_c_nM7_13_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_6) { $r_d_c_nM7_13_r_p=$cualitativa_formato_6; $r_d_c_nM7_13_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_7) { $r_d_c_nM7_13_r_p=$cualitativa_formato_7; $r_d_c_nM7_13_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_8) { $r_d_c_nM7_13_r_p=$cualitativa_formato_8; $r_d_c_nM7_13_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_9) { $r_d_c_nM7_13_r_p=$cualitativa_formato_9; $r_d_c_nM7_13_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_10) {$r_d_c_nM7_13_r_p=$cualitativa_formato_10; $r_d_c_nM7_13_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_11) {$r_d_c_nM7_13_r_p=$cualitativa_formato_11; $r_d_c_nM7_13_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM7_13_redon>=$comparativo_formato_12) {$r_d_c_nM7_13_r_p=$cualitativa_formato_12; $r_d_c_nM7_13_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM7['nt_13'] == '') { $r_d_c_nM7_13_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM7_13_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM7_13_r_p_co; echo $parent_close;
                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM7['d_14'] != '') {

$el_d_14 =  $row_datos_control_notasM7['d_14'];

include("../../conectar.php");
$query_indi_14 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_14'                     
               order by id_indicador limit 1" ;
$datos_control_indi_14 = mysqli_query($enlace, $query_indi_14) or die(mysqli_error());
$row_datos_control_indi_14 = mysqli_fetch_array($datos_control_indi_14); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_14['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM7_14_redon =  number_format($row_datos_control_notasM7['nt_14'], 0, '.', '');

if ($formato_eva_M7 == '3') {
 
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_1) { $r_d_c_nM7_14_r_p=$literal_formato_1; $r_d_c_nM7_14_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_2) { $r_d_c_nM7_14_r_p=$literal_formato_2; $r_d_c_nM7_14_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_3) { $r_d_c_nM7_14_r_p=$literal_formato_3; $r_d_c_nM7_14_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_4) { $r_d_c_nM7_14_r_p=$literal_formato_4; $r_d_c_nM7_14_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_5) { $r_d_c_nM7_14_r_p=$literal_formato_5; $r_d_c_nM7_14_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_6) { $r_d_c_nM7_14_r_p=$literal_formato_6; $r_d_c_nM7_14_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_7) { $r_d_c_nM7_14_r_p=$literal_formato_7; $r_d_c_nM7_14_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_8) { $r_d_c_nM7_14_r_p=$literal_formato_8; $r_d_c_nM7_14_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_9) { $r_d_c_nM7_14_r_p=$literal_formato_9; $r_d_c_nM7_14_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_10) {$r_d_c_nM7_14_r_p=$literal_formato_10; $r_d_c_nM7_14_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_11) {$r_d_c_nM7_14_r_p=$literal_formato_11; $r_d_c_nM7_14_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_12) {$r_d_c_nM7_14_r_p=$literal_formato_12; $r_d_c_nM7_14_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M7 == '4') {
 
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_1) { $r_d_c_nM7_14_r_p=$cualitativa_formato_1; $r_d_c_nM7_14_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_2) { $r_d_c_nM7_14_r_p=$cualitativa_formato_2; $r_d_c_nM7_14_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_3) { $r_d_c_nM7_14_r_p=$cualitativa_formato_3; $r_d_c_nM7_14_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_4) { $r_d_c_nM7_14_r_p=$cualitativa_formato_4; $r_d_c_nM7_14_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_5) { $r_d_c_nM7_14_r_p=$cualitativa_formato_5; $r_d_c_nM7_14_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_6) { $r_d_c_nM7_14_r_p=$cualitativa_formato_6; $r_d_c_nM7_14_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_7) { $r_d_c_nM7_14_r_p=$cualitativa_formato_7; $r_d_c_nM7_14_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_8) { $r_d_c_nM7_14_r_p=$cualitativa_formato_8; $r_d_c_nM7_14_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_9) { $r_d_c_nM7_14_r_p=$cualitativa_formato_9; $r_d_c_nM7_14_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_10) {$r_d_c_nM7_14_r_p=$cualitativa_formato_10; $r_d_c_nM7_14_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_11) {$r_d_c_nM7_14_r_p=$cualitativa_formato_11; $r_d_c_nM7_14_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM7_14_redon>=$comparativo_formato_12) {$r_d_c_nM7_14_r_p=$cualitativa_formato_12; $r_d_c_nM7_14_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM7['nt_14'] == '') { $r_d_c_nM7_14_r_p = $row_datos_modcabecc['no_entrego_abre']; }



echo $r_d_c_nM7_14_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM7_14_r_p_co; echo $parent_close; 
                            echo $td_closeB;


  echo $tr_close;

}



if ($row_datos_control_notasM7['d_15'] != '') {

$el_d_15 =  $row_datos_control_notasM7['d_15'];

include("../../conectar.php");
$query_indi_15 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_15'                     
               order by id_indicador limit 1" ;
$datos_control_indi_15 = mysqli_query($enlace, $query_indi_15) or die(mysqli_error());
$row_datos_control_indi_15 = mysqli_fetch_array($datos_control_indi_15); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_15['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM7_15_redon =  number_format($row_datos_control_notasM7['nt_15'], 0, '.', '');
if ($formato_eva_M7 == '3') {
 
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_1) { $r_d_c_nM7_15_r_p=$literal_formato_1; $r_d_c_nM7_15_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_2) { $r_d_c_nM7_15_r_p=$literal_formato_2; $r_d_c_nM7_15_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_3) { $r_d_c_nM7_15_r_p=$literal_formato_3; $r_d_c_nM7_15_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_4) { $r_d_c_nM7_15_r_p=$literal_formato_4; $r_d_c_nM7_15_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_5) { $r_d_c_nM7_15_r_p=$literal_formato_5; $r_d_c_nM7_15_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_6) { $r_d_c_nM7_15_r_p=$literal_formato_6; $r_d_c_nM7_15_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_7) { $r_d_c_nM7_15_r_p=$literal_formato_7; $r_d_c_nM7_15_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_8) { $r_d_c_nM7_15_r_p=$literal_formato_8; $r_d_c_nM7_15_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_9) { $r_d_c_nM7_15_r_p=$literal_formato_9; $r_d_c_nM7_15_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_10) {$r_d_c_nM7_15_r_p=$literal_formato_10; $r_d_c_nM7_15_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_11) {$r_d_c_nM7_15_r_p=$literal_formato_11; $r_d_c_nM7_15_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_12) {$r_d_c_nM7_15_r_p=$literal_formato_12; $r_d_c_nM7_15_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M7 == '4') {
 
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_1) { $r_d_c_nM7_15_r_p=$cualitativa_formato_1; $r_d_c_nM7_15_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_2) { $r_d_c_nM7_15_r_p=$cualitativa_formato_2; $r_d_c_nM7_15_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_3) { $r_d_c_nM7_15_r_p=$cualitativa_formato_3; $r_d_c_nM7_15_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_4) { $r_d_c_nM7_15_r_p=$cualitativa_formato_4; $r_d_c_nM7_15_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_5) { $r_d_c_nM7_15_r_p=$cualitativa_formato_5; $r_d_c_nM7_15_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_6) { $r_d_c_nM7_15_r_p=$cualitativa_formato_6; $r_d_c_nM7_15_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_7) { $r_d_c_nM7_15_r_p=$cualitativa_formato_7; $r_d_c_nM7_15_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_8) { $r_d_c_nM7_15_r_p=$cualitativa_formato_8; $r_d_c_nM7_15_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_9) { $r_d_c_nM7_15_r_p=$cualitativa_formato_9; $r_d_c_nM7_15_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_10) {$r_d_c_nM7_15_r_p=$cualitativa_formato_10; $r_d_c_nM7_15_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_11) {$r_d_c_nM7_15_r_p=$cualitativa_formato_11; $r_d_c_nM7_15_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM7_15_redon>=$comparativo_formato_12) {$r_d_c_nM7_15_r_p=$cualitativa_formato_12; $r_d_c_nM7_15_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM7['nt_15'] == '') { $r_d_c_nM7_15_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM7_15_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM7_15_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}


if ($row_datos_control_notasM7['d_16'] != '') {

$el_d_16 =  $row_datos_control_notasM7['d_16'];

include("../../conectar.php");
$query_indi_16 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_16'                     
               order by id_indicador limit 1" ;
$datos_control_indi_16 = mysqli_query($enlace, $query_indi_16) or die(mysqli_error());
$row_datos_control_indi_16 = mysqli_fetch_array($datos_control_indi_16); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_16['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM7_16_redon =  number_format($row_datos_control_notasM7['nt_16'], 0, '.', '');

if ($formato_eva_M7 == '3') {
 
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_1) { $r_d_c_nM7_16_r_p=$literal_formato_1; $r_d_c_nM7_16_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_2) { $r_d_c_nM7_16_r_p=$literal_formato_2; $r_d_c_nM7_16_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_3) { $r_d_c_nM7_16_r_p=$literal_formato_3; $r_d_c_nM7_16_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_4) { $r_d_c_nM7_16_r_p=$literal_formato_4; $r_d_c_nM7_16_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_5) { $r_d_c_nM7_16_r_p=$literal_formato_5; $r_d_c_nM7_16_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_6) { $r_d_c_nM7_16_r_p=$literal_formato_6; $r_d_c_nM7_16_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_7) { $r_d_c_nM7_16_r_p=$literal_formato_7; $r_d_c_nM7_16_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_8) { $r_d_c_nM7_16_r_p=$literal_formato_8; $r_d_c_nM7_16_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_9) { $r_d_c_nM7_16_r_p=$literal_formato_9; $r_d_c_nM7_16_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_10) {$r_d_c_nM7_16_r_p=$literal_formato_10; $r_d_c_nM7_16_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_11) {$r_d_c_nM7_16_r_p=$literal_formato_11; $r_d_c_nM7_16_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_12) {$r_d_c_nM7_16_r_p=$literal_formato_12; $r_d_c_nM7_16_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M7 == '4') {
 
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_1) { $r_d_c_nM7_16_r_p=$cualitativa_formato_1; $r_d_c_nM7_16_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_2) { $r_d_c_nM7_16_r_p=$cualitativa_formato_2; $r_d_c_nM7_16_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_3) { $r_d_c_nM7_16_r_p=$cualitativa_formato_3; $r_d_c_nM7_16_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_4) { $r_d_c_nM7_16_r_p=$cualitativa_formato_4; $r_d_c_nM7_16_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_5) { $r_d_c_nM7_16_r_p=$cualitativa_formato_5; $r_d_c_nM7_16_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_6) { $r_d_c_nM7_16_r_p=$cualitativa_formato_6; $r_d_c_nM7_16_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_7) { $r_d_c_nM7_16_r_p=$cualitativa_formato_7; $r_d_c_nM7_16_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_8) { $r_d_c_nM7_16_r_p=$cualitativa_formato_8; $r_d_c_nM7_16_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_9) { $r_d_c_nM7_16_r_p=$cualitativa_formato_9; $r_d_c_nM7_16_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_10) {$r_d_c_nM7_16_r_p=$cualitativa_formato_10; $r_d_c_nM7_16_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_11) {$r_d_c_nM7_16_r_p=$cualitativa_formato_11; $r_d_c_nM7_16_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM7_16_redon>=$comparativo_formato_12) {$r_d_c_nM7_16_r_p=$cualitativa_formato_12; $r_d_c_nM7_16_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM7['nt_16'] == '') { $r_d_c_nM7_16_r_p = $row_datos_modcabecc['no_entrego_abre']; }



echo $r_d_c_nM7_16_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM7_16_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM7['d_17'] != '') {

$el_d_17 =  $row_datos_control_notasM7['d_17'];

include("../../conectar.php");
$query_indi_17 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_17'                     
               order by id_indicador limit 1" ;
$datos_control_indi_17 = mysqli_query($enlace, $query_indi_17) or die(mysqli_error());
$row_datos_control_indi_17 = mysqli_fetch_array($datos_control_indi_17); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_17['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM7_17_redon =  number_format($row_datos_control_notasM7['nt_17'], 0, '.', '');
if ($formato_eva_M7 == '3') {
 
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_1) { $r_d_c_nM7_17_r_p=$literal_formato_1; $r_d_c_nM7_17_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_2) { $r_d_c_nM7_17_r_p=$literal_formato_2; $r_d_c_nM7_17_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_3) { $r_d_c_nM7_17_r_p=$literal_formato_3; $r_d_c_nM7_17_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_4) { $r_d_c_nM7_17_r_p=$literal_formato_4; $r_d_c_nM7_17_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_5) { $r_d_c_nM7_17_r_p=$literal_formato_5; $r_d_c_nM7_17_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_6) { $r_d_c_nM7_17_r_p=$literal_formato_6; $r_d_c_nM7_17_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_7) { $r_d_c_nM7_17_r_p=$literal_formato_7; $r_d_c_nM7_17_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_8) { $r_d_c_nM7_17_r_p=$literal_formato_8; $r_d_c_nM7_17_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_9) { $r_d_c_nM7_17_r_p=$literal_formato_9; $r_d_c_nM7_17_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_10) {$r_d_c_nM7_17_r_p=$literal_formato_10; $r_d_c_nM7_17_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_11) {$r_d_c_nM7_17_r_p=$literal_formato_11; $r_d_c_nM7_17_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_12) {$r_d_c_nM7_17_r_p=$literal_formato_12; $r_d_c_nM7_17_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M7 == '4') {
 
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_1) { $r_d_c_nM7_17_r_p=$cualitativa_formato_1; $r_d_c_nM7_17_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_2) { $r_d_c_nM7_17_r_p=$cualitativa_formato_2; $r_d_c_nM7_17_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_3) { $r_d_c_nM7_17_r_p=$cualitativa_formato_3; $r_d_c_nM7_17_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_4) { $r_d_c_nM7_17_r_p=$cualitativa_formato_4; $r_d_c_nM7_17_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_5) { $r_d_c_nM7_17_r_p=$cualitativa_formato_5; $r_d_c_nM7_17_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_6) { $r_d_c_nM7_17_r_p=$cualitativa_formato_6; $r_d_c_nM7_17_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_7) { $r_d_c_nM7_17_r_p=$cualitativa_formato_7; $r_d_c_nM7_17_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_8) { $r_d_c_nM7_17_r_p=$cualitativa_formato_8; $r_d_c_nM7_17_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_9) { $r_d_c_nM7_17_r_p=$cualitativa_formato_9; $r_d_c_nM7_17_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_10) {$r_d_c_nM7_17_r_p=$cualitativa_formato_10; $r_d_c_nM7_17_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_11) {$r_d_c_nM7_17_r_p=$cualitativa_formato_11; $r_d_c_nM7_17_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM7_17_redon>=$comparativo_formato_12) {$r_d_c_nM7_17_r_p=$cualitativa_formato_12; $r_d_c_nM7_17_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM7['nt_17'] == '') { $r_d_c_nM7_17_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM7_17_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM7_17_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}
}



if ($row_datos_controlmat['h_hhh'] != '') {

    echo $tr_open;
                echo $tdd_open; echo $asterisco;   echo $row_datos_controlmat['h_hhh']; echo $dos_puntos;  echo $tdd_close;
     echo $tr_close;

}



if ($row_datos_controlmat['h_hhh'] != '') { 

if ($row_datos_control_notasM8['d_11'] != '') {

$el_d_11 =  $row_datos_control_notasM8['d_11'];

include("../../conectar.php");
$query_indi_11 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_11'                       
               order by id_indicador limit 1" ;
$datos_control_indi_11 = mysqli_query($enlace, $query_indi_11) or die(mysqli_error());
$row_datos_control_indi_11 = mysqli_fetch_array($datos_control_indi_11); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_11['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM8_11_redon =  number_format($row_datos_control_notasM8['nt_11'], 0, '.', '');

if ($formato_eva_M8 == '3') {
 
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_1) { $r_d_c_nM8_11_r_p=$literal_formato_1; $r_d_c_nM8_11_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_2) { $r_d_c_nM8_11_r_p=$literal_formato_2; $r_d_c_nM8_11_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_3) { $r_d_c_nM8_11_r_p=$literal_formato_3; $r_d_c_nM8_11_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_4) { $r_d_c_nM8_11_r_p=$literal_formato_4; $r_d_c_nM8_11_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_5) { $r_d_c_nM8_11_r_p=$literal_formato_5; $r_d_c_nM8_11_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_6) { $r_d_c_nM8_11_r_p=$literal_formato_6; $r_d_c_nM8_11_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_7) { $r_d_c_nM8_11_r_p=$literal_formato_7; $r_d_c_nM8_11_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_8) { $r_d_c_nM8_11_r_p=$literal_formato_8; $r_d_c_nM8_11_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_9) { $r_d_c_nM8_11_r_p=$literal_formato_9; $r_d_c_nM8_11_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_10) {$r_d_c_nM8_11_r_p=$literal_formato_10; $r_d_c_nM8_11_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_11) {$r_d_c_nM8_11_r_p=$literal_formato_11; $r_d_c_nM8_11_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_12) {$r_d_c_nM8_11_r_p=$literal_formato_12; $r_d_c_nM8_11_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M8 == '4') {
 
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_1) { $r_d_c_nM8_11_r_p=$cualitativa_formato_1; $r_d_c_nM8_11_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_2) { $r_d_c_nM8_11_r_p=$cualitativa_formato_2; $r_d_c_nM8_11_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_3) { $r_d_c_nM8_11_r_p=$cualitativa_formato_3; $r_d_c_nM8_11_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_4) { $r_d_c_nM8_11_r_p=$cualitativa_formato_4; $r_d_c_nM8_11_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_5) { $r_d_c_nM8_11_r_p=$cualitativa_formato_5; $r_d_c_nM8_11_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_6) { $r_d_c_nM8_11_r_p=$cualitativa_formato_6; $r_d_c_nM8_11_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_7) { $r_d_c_nM8_11_r_p=$cualitativa_formato_7; $r_d_c_nM8_11_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_8) { $r_d_c_nM8_11_r_p=$cualitativa_formato_8; $r_d_c_nM8_11_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_9) { $r_d_c_nM8_11_r_p=$cualitativa_formato_9; $r_d_c_nM8_11_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_10) {$r_d_c_nM8_11_r_p=$cualitativa_formato_10; $r_d_c_nM8_11_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_11) {$r_d_c_nM8_11_r_p=$cualitativa_formato_11; $r_d_c_nM8_11_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM8_11_redon>=$comparativo_formato_12) {$r_d_c_nM8_11_r_p=$cualitativa_formato_12; $r_d_c_nM8_11_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM8['nt_11'] == '') { $r_d_c_nM8_11_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM8_11_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM8_11_r_p_co; echo $parent_close;

                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM8['d_12'] != '') {

$el_d_12 =  $row_datos_control_notasM8['d_12'];

include("../../conectar.php");
$query_indi_12 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_12'                     
               order by id_indicador limit 1" ;
$datos_control_indi_12 = mysqli_query($enlace, $query_indi_12) or die(mysqli_error());
$row_datos_control_indi_12 = mysqli_fetch_array($datos_control_indi_12); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_12['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM8_12_redon =  number_format($row_datos_control_notasM8['nt_12'], 0, '.', '');


if ($formato_eva_M8 == '3') {
 
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_1) { $r_d_c_nM8_12_r_p=$literal_formato_1; $r_d_c_nM8_12_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_2) { $r_d_c_nM8_12_r_p=$literal_formato_2; $r_d_c_nM8_12_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_3) { $r_d_c_nM8_12_r_p=$literal_formato_3; $r_d_c_nM8_12_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_4) { $r_d_c_nM8_12_r_p=$literal_formato_4; $r_d_c_nM8_12_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_5) { $r_d_c_nM8_12_r_p=$literal_formato_5; $r_d_c_nM8_12_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_6) { $r_d_c_nM8_12_r_p=$literal_formato_6; $r_d_c_nM8_12_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_7) { $r_d_c_nM8_12_r_p=$literal_formato_7; $r_d_c_nM8_12_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_8) { $r_d_c_nM8_12_r_p=$literal_formato_8; $r_d_c_nM8_12_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_9) { $r_d_c_nM8_12_r_p=$literal_formato_9; $r_d_c_nM8_12_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_10) {$r_d_c_nM8_12_r_p=$literal_formato_10; $r_d_c_nM8_12_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_11) {$r_d_c_nM8_12_r_p=$literal_formato_11; $r_d_c_nM8_12_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_12) {$r_d_c_nM8_12_r_p=$literal_formato_12; $r_d_c_nM8_12_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M8 == '4') {
 
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_1) { $r_d_c_nM8_12_r_p=$cualitativa_formato_1; $r_d_c_nM8_12_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_2) { $r_d_c_nM8_12_r_p=$cualitativa_formato_2; $r_d_c_nM8_12_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_3) { $r_d_c_nM8_12_r_p=$cualitativa_formato_3; $r_d_c_nM8_12_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_4) { $r_d_c_nM8_12_r_p=$cualitativa_formato_4; $r_d_c_nM8_12_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_5) { $r_d_c_nM8_12_r_p=$cualitativa_formato_5; $r_d_c_nM8_12_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_6) { $r_d_c_nM8_12_r_p=$cualitativa_formato_6; $r_d_c_nM8_12_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_7) { $r_d_c_nM8_12_r_p=$cualitativa_formato_7; $r_d_c_nM8_12_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_8) { $r_d_c_nM8_12_r_p=$cualitativa_formato_8; $r_d_c_nM8_12_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_9) { $r_d_c_nM8_12_r_p=$cualitativa_formato_9; $r_d_c_nM8_12_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_10) {$r_d_c_nM8_12_r_p=$cualitativa_formato_10; $r_d_c_nM8_12_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_11) {$r_d_c_nM8_12_r_p=$cualitativa_formato_11; $r_d_c_nM8_12_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM8_12_redon>=$comparativo_formato_12) {$r_d_c_nM8_12_r_p=$cualitativa_formato_12; $r_d_c_nM8_12_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM8['nt_12'] == '') { $r_d_c_nM8_12_r_p = $row_datos_modcabecc['no_entrego_abre']; }



echo $r_d_c_nM8_12_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM8_12_r_p_co; echo $parent_close;

                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM8['d_13'] != '') {


$el_d_13 =  $row_datos_control_notasM8['d_13'];

include("../../conectar.php");
$query_indi_13 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_13'                     
               order by id_indicador limit 1" ;
$datos_control_indi_13 = mysqli_query($enlace, $query_indi_13) or die(mysqli_error());
$row_datos_control_indi_13 = mysqli_fetch_array($datos_control_indi_13); 
 
 mysqli_close($enlace);


echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_13['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
                                        $row_datos_control_notasM8_13_redon =  number_format($row_datos_control_notasM8['nt_13'], 0, '.', '');


if ($formato_eva_M8 == '3') {
 
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_1) { $r_d_c_nM8_13_r_p=$literal_formato_1; $r_d_c_nM8_13_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_2) { $r_d_c_nM8_13_r_p=$literal_formato_2; $r_d_c_nM8_13_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_3) { $r_d_c_nM8_13_r_p=$literal_formato_3; $r_d_c_nM8_13_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_4) { $r_d_c_nM8_13_r_p=$literal_formato_4; $r_d_c_nM8_13_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_5) { $r_d_c_nM8_13_r_p=$literal_formato_5; $r_d_c_nM8_13_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_6) { $r_d_c_nM8_13_r_p=$literal_formato_6; $r_d_c_nM8_13_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_7) { $r_d_c_nM8_13_r_p=$literal_formato_7; $r_d_c_nM8_13_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_8) { $r_d_c_nM8_13_r_p=$literal_formato_8; $r_d_c_nM8_13_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_9) { $r_d_c_nM8_13_r_p=$literal_formato_9; $r_d_c_nM8_13_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_10) {$r_d_c_nM8_13_r_p=$literal_formato_10; $r_d_c_nM8_13_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_11) {$r_d_c_nM8_13_r_p=$literal_formato_11; $r_d_c_nM8_13_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_12) {$r_d_c_nM8_13_r_p=$literal_formato_12; $r_d_c_nM8_13_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M8 == '4') {
 
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_1) { $r_d_c_nM8_13_r_p=$cualitativa_formato_1; $r_d_c_nM8_13_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_2) { $r_d_c_nM8_13_r_p=$cualitativa_formato_2; $r_d_c_nM8_13_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_3) { $r_d_c_nM8_13_r_p=$cualitativa_formato_3; $r_d_c_nM8_13_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_4) { $r_d_c_nM8_13_r_p=$cualitativa_formato_4; $r_d_c_nM8_13_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_5) { $r_d_c_nM8_13_r_p=$cualitativa_formato_5; $r_d_c_nM8_13_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_6) { $r_d_c_nM8_13_r_p=$cualitativa_formato_6; $r_d_c_nM8_13_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_7) { $r_d_c_nM8_13_r_p=$cualitativa_formato_7; $r_d_c_nM8_13_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_8) { $r_d_c_nM8_13_r_p=$cualitativa_formato_8; $r_d_c_nM8_13_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_9) { $r_d_c_nM8_13_r_p=$cualitativa_formato_9; $r_d_c_nM8_13_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_10) {$r_d_c_nM8_13_r_p=$cualitativa_formato_10; $r_d_c_nM8_13_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_11) {$r_d_c_nM8_13_r_p=$cualitativa_formato_11; $r_d_c_nM8_13_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM8_13_redon>=$comparativo_formato_12) {$r_d_c_nM8_13_r_p=$cualitativa_formato_12; $r_d_c_nM8_13_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM8['nt_13'] == '') { $r_d_c_nM8_13_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM8_13_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM8_13_r_p_co; echo $parent_close;
                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM8['d_14'] != '') {

$el_d_14 =  $row_datos_control_notasM8['d_14'];

include("../../conectar.php");
$query_indi_14 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_14'                     
               order by id_indicador limit 1" ;
$datos_control_indi_14 = mysqli_query($enlace, $query_indi_14) or die(mysqli_error());
$row_datos_control_indi_14 = mysqli_fetch_array($datos_control_indi_14); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_14['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM8_14_redon =  number_format($row_datos_control_notasM8['nt_14'], 0, '.', '');

if ($formato_eva_M8 == '3') {
 
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_1) { $r_d_c_nM8_14_r_p=$literal_formato_1; $r_d_c_nM8_14_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_2) { $r_d_c_nM8_14_r_p=$literal_formato_2; $r_d_c_nM8_14_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_3) { $r_d_c_nM8_14_r_p=$literal_formato_3; $r_d_c_nM8_14_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_4) { $r_d_c_nM8_14_r_p=$literal_formato_4; $r_d_c_nM8_14_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_5) { $r_d_c_nM8_14_r_p=$literal_formato_5; $r_d_c_nM8_14_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_6) { $r_d_c_nM8_14_r_p=$literal_formato_6; $r_d_c_nM8_14_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_7) { $r_d_c_nM8_14_r_p=$literal_formato_7; $r_d_c_nM8_14_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_8) { $r_d_c_nM8_14_r_p=$literal_formato_8; $r_d_c_nM8_14_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_9) { $r_d_c_nM8_14_r_p=$literal_formato_9; $r_d_c_nM8_14_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_10) {$r_d_c_nM8_14_r_p=$literal_formato_10; $r_d_c_nM8_14_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_11) {$r_d_c_nM8_14_r_p=$literal_formato_11; $r_d_c_nM8_14_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_12) {$r_d_c_nM8_14_r_p=$literal_formato_12; $r_d_c_nM8_14_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M8 == '4') {
 
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_1) { $r_d_c_nM8_14_r_p=$cualitativa_formato_1; $r_d_c_nM8_14_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_2) { $r_d_c_nM8_14_r_p=$cualitativa_formato_2; $r_d_c_nM8_14_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_3) { $r_d_c_nM8_14_r_p=$cualitativa_formato_3; $r_d_c_nM8_14_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_4) { $r_d_c_nM8_14_r_p=$cualitativa_formato_4; $r_d_c_nM8_14_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_5) { $r_d_c_nM8_14_r_p=$cualitativa_formato_5; $r_d_c_nM8_14_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_6) { $r_d_c_nM8_14_r_p=$cualitativa_formato_6; $r_d_c_nM8_14_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_7) { $r_d_c_nM8_14_r_p=$cualitativa_formato_7; $r_d_c_nM8_14_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_8) { $r_d_c_nM8_14_r_p=$cualitativa_formato_8; $r_d_c_nM8_14_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_9) { $r_d_c_nM8_14_r_p=$cualitativa_formato_9; $r_d_c_nM8_14_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_10) {$r_d_c_nM8_14_r_p=$cualitativa_formato_10; $r_d_c_nM8_14_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_11) {$r_d_c_nM8_14_r_p=$cualitativa_formato_11; $r_d_c_nM8_14_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM8_14_redon>=$comparativo_formato_12) {$r_d_c_nM8_14_r_p=$cualitativa_formato_12; $r_d_c_nM8_14_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM8['nt_14'] == '') { $r_d_c_nM8_14_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM8_14_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM8_14_r_p_co; echo $parent_close; 
                            echo $td_closeB;


  echo $tr_close;

}



if ($row_datos_control_notasM8['d_15'] != '') {

$el_d_15 =  $row_datos_control_notasM8['d_15'];

include("../../conectar.php");
$query_indi_15 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_15'                     
               order by id_indicador limit 1" ;
$datos_control_indi_15 = mysqli_query($enlace, $query_indi_15) or die(mysqli_error());
$row_datos_control_indi_15 = mysqli_fetch_array($datos_control_indi_15); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_15['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM8_15_redon =  number_format($row_datos_control_notasM8['nt_15'], 0, '.', '');
if ($formato_eva_M8 == '3') {
 
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_1) { $r_d_c_nM8_15_r_p=$literal_formato_1; $r_d_c_nM8_15_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_2) { $r_d_c_nM8_15_r_p=$literal_formato_2; $r_d_c_nM8_15_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_3) { $r_d_c_nM8_15_r_p=$literal_formato_3; $r_d_c_nM8_15_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_4) { $r_d_c_nM8_15_r_p=$literal_formato_4; $r_d_c_nM8_15_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_5) { $r_d_c_nM8_15_r_p=$literal_formato_5; $r_d_c_nM8_15_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_6) { $r_d_c_nM8_15_r_p=$literal_formato_6; $r_d_c_nM8_15_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_7) { $r_d_c_nM8_15_r_p=$literal_formato_7; $r_d_c_nM8_15_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_8) { $r_d_c_nM8_15_r_p=$literal_formato_8; $r_d_c_nM8_15_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_9) { $r_d_c_nM8_15_r_p=$literal_formato_9; $r_d_c_nM8_15_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_10) {$r_d_c_nM8_15_r_p=$literal_formato_10; $r_d_c_nM8_15_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_11) {$r_d_c_nM8_15_r_p=$literal_formato_11; $r_d_c_nM8_15_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_12) {$r_d_c_nM8_15_r_p=$literal_formato_12; $r_d_c_nM8_15_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M8 == '4') {
 
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_1) { $r_d_c_nM8_15_r_p=$cualitativa_formato_1; $r_d_c_nM8_15_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_2) { $r_d_c_nM8_15_r_p=$cualitativa_formato_2; $r_d_c_nM8_15_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_3) { $r_d_c_nM8_15_r_p=$cualitativa_formato_3; $r_d_c_nM8_15_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_4) { $r_d_c_nM8_15_r_p=$cualitativa_formato_4; $r_d_c_nM8_15_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_5) { $r_d_c_nM8_15_r_p=$cualitativa_formato_5; $r_d_c_nM8_15_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_6) { $r_d_c_nM8_15_r_p=$cualitativa_formato_6; $r_d_c_nM8_15_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_7) { $r_d_c_nM8_15_r_p=$cualitativa_formato_7; $r_d_c_nM8_15_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_8) { $r_d_c_nM8_15_r_p=$cualitativa_formato_8; $r_d_c_nM8_15_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_9) { $r_d_c_nM8_15_r_p=$cualitativa_formato_9; $r_d_c_nM8_15_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_10) {$r_d_c_nM8_15_r_p=$cualitativa_formato_10; $r_d_c_nM8_15_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_11) {$r_d_c_nM8_15_r_p=$cualitativa_formato_11; $r_d_c_nM8_15_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM8_15_redon>=$comparativo_formato_12) {$r_d_c_nM8_15_r_p=$cualitativa_formato_12; $r_d_c_nM8_15_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM8['nt_15'] == '') { $r_d_c_nM8_15_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM8_15_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM8_15_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}


if ($row_datos_control_notasM8['d_16'] != '') {

$el_d_16 =  $row_datos_control_notasM8['d_16'];

include("../../conectar.php");
$query_indi_16 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_16'                     
               order by id_indicador limit 1" ;
$datos_control_indi_16 = mysqli_query($enlace, $query_indi_16) or die(mysqli_error());
$row_datos_control_indi_16 = mysqli_fetch_array($datos_control_indi_16); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_16['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM8_16_redon =  number_format($row_datos_control_notasM8['nt_16'], 0, '.', '');
if ($formato_eva_M8 == '3') {
 
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_1) { $r_d_c_nM8_16_r_p=$literal_formato_1; $r_d_c_nM8_16_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_2) { $r_d_c_nM8_16_r_p=$literal_formato_2; $r_d_c_nM8_16_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_3) { $r_d_c_nM8_16_r_p=$literal_formato_3; $r_d_c_nM8_16_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_4) { $r_d_c_nM8_16_r_p=$literal_formato_4; $r_d_c_nM8_16_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_5) { $r_d_c_nM8_16_r_p=$literal_formato_5; $r_d_c_nM8_16_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_6) { $r_d_c_nM8_16_r_p=$literal_formato_6; $r_d_c_nM8_16_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_7) { $r_d_c_nM8_16_r_p=$literal_formato_7; $r_d_c_nM8_16_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_8) { $r_d_c_nM8_16_r_p=$literal_formato_8; $r_d_c_nM8_16_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_9) { $r_d_c_nM8_16_r_p=$literal_formato_9; $r_d_c_nM8_16_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_10) {$r_d_c_nM8_16_r_p=$literal_formato_10; $r_d_c_nM8_16_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_11) {$r_d_c_nM8_16_r_p=$literal_formato_11; $r_d_c_nM8_16_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_12) {$r_d_c_nM8_16_r_p=$literal_formato_12; $r_d_c_nM8_16_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M8 == '4') {
 
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_1) { $r_d_c_nM8_16_r_p=$cualitativa_formato_1; $r_d_c_nM8_16_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_2) { $r_d_c_nM8_16_r_p=$cualitativa_formato_2; $r_d_c_nM8_16_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_3) { $r_d_c_nM8_16_r_p=$cualitativa_formato_3; $r_d_c_nM8_16_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_4) { $r_d_c_nM8_16_r_p=$cualitativa_formato_4; $r_d_c_nM8_16_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_5) { $r_d_c_nM8_16_r_p=$cualitativa_formato_5; $r_d_c_nM8_16_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_6) { $r_d_c_nM8_16_r_p=$cualitativa_formato_6; $r_d_c_nM8_16_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_7) { $r_d_c_nM8_16_r_p=$cualitativa_formato_7; $r_d_c_nM8_16_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_8) { $r_d_c_nM8_16_r_p=$cualitativa_formato_8; $r_d_c_nM8_16_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_9) { $r_d_c_nM8_16_r_p=$cualitativa_formato_9; $r_d_c_nM8_16_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_10) {$r_d_c_nM8_16_r_p=$cualitativa_formato_10; $r_d_c_nM8_16_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_11) {$r_d_c_nM8_16_r_p=$cualitativa_formato_11; $r_d_c_nM8_16_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM8_16_redon>=$comparativo_formato_12) {$r_d_c_nM8_16_r_p=$cualitativa_formato_12; $r_d_c_nM8_16_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM8['nt_16'] == '') { $r_d_c_nM8_16_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM8_16_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM8_16_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM8['d_17'] != '') {

$el_d_17 =  $row_datos_control_notasM8['d_17'];

include("../../conectar.php");
$query_indi_17 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_17'                     
               order by id_indicador limit 1" ;
$datos_control_indi_17 = mysqli_query($enlace, $query_indi_17) or die(mysqli_error());
$row_datos_control_indi_17 = mysqli_fetch_array($datos_control_indi_17); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_17['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM8_17_redon =  number_format($row_datos_control_notasM8['nt_17'], 0, '.', '');
if ($formato_eva_M8 == '3') {
 
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_1) { $r_d_c_nM8_17_r_p=$literal_formato_1; $r_d_c_nM8_17_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_2) { $r_d_c_nM8_17_r_p=$literal_formato_2; $r_d_c_nM8_17_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_3) { $r_d_c_nM8_17_r_p=$literal_formato_3; $r_d_c_nM8_17_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_4) { $r_d_c_nM8_17_r_p=$literal_formato_4; $r_d_c_nM8_17_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_5) { $r_d_c_nM8_17_r_p=$literal_formato_5; $r_d_c_nM8_17_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_6) { $r_d_c_nM8_17_r_p=$literal_formato_6; $r_d_c_nM8_17_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_7) { $r_d_c_nM8_17_r_p=$literal_formato_7; $r_d_c_nM8_17_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_8) { $r_d_c_nM8_17_r_p=$literal_formato_8; $r_d_c_nM8_17_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_9) { $r_d_c_nM8_17_r_p=$literal_formato_9; $r_d_c_nM8_17_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_10) {$r_d_c_nM8_17_r_p=$literal_formato_10; $r_d_c_nM8_17_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_11) {$r_d_c_nM8_17_r_p=$literal_formato_11; $r_d_c_nM8_17_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_12) {$r_d_c_nM8_17_r_p=$literal_formato_12; $r_d_c_nM8_17_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M8 == '4') {
 
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_1) { $r_d_c_nM8_17_r_p=$cualitativa_formato_1; $r_d_c_nM8_17_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_2) { $r_d_c_nM8_17_r_p=$cualitativa_formato_2; $r_d_c_nM8_17_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_3) { $r_d_c_nM8_17_r_p=$cualitativa_formato_3; $r_d_c_nM8_17_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_4) { $r_d_c_nM8_17_r_p=$cualitativa_formato_4; $r_d_c_nM8_17_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_5) { $r_d_c_nM8_17_r_p=$cualitativa_formato_5; $r_d_c_nM8_17_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_6) { $r_d_c_nM8_17_r_p=$cualitativa_formato_6; $r_d_c_nM8_17_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_7) { $r_d_c_nM8_17_r_p=$cualitativa_formato_7; $r_d_c_nM8_17_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_8) { $r_d_c_nM8_17_r_p=$cualitativa_formato_8; $r_d_c_nM8_17_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_9) { $r_d_c_nM8_17_r_p=$cualitativa_formato_9; $r_d_c_nM8_17_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_10) {$r_d_c_nM8_17_r_p=$cualitativa_formato_10; $r_d_c_nM8_17_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_11) {$r_d_c_nM8_17_r_p=$cualitativa_formato_11; $r_d_c_nM8_17_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM8_17_redon>=$comparativo_formato_12) {$r_d_c_nM8_17_r_p=$cualitativa_formato_12; $r_d_c_nM8_17_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM8['nt_17'] == '') { $r_d_c_nM8_17_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM8_17_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM8_17_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}
}









if ($row_datos_controlmat['i_iii'] != '') {

    echo $tr_open;
                echo $tdd_open; echo $asterisco;   echo $row_datos_controlmat['i_iii']; echo $dos_puntos;  echo $tdd_close;
     echo $tr_close;

}



if ($row_datos_controlmat['i_iii'] != '') { 

if ($row_datos_control_notasM9['d_11'] != '') {

$el_d_11 =  $row_datos_control_notasM9['d_11'];

include("../../conectar.php");
$query_indi_11 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_11'                       
               order by id_indicador limit 1" ;
$datos_control_indi_11 = mysqli_query($enlace, $query_indi_11) or die(mysqli_error());
$row_datos_control_indi_11 = mysqli_fetch_array($datos_control_indi_11); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_11['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM9_11_redon =  number_format($row_datos_control_notasM9['nt_11'], 0, '.', '');

if ($formato_eva_M9 == '3') {
 
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_1) { $r_d_c_nM9_11_r_p=$literal_formato_1; $r_d_c_nM9_11_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_2) { $r_d_c_nM9_11_r_p=$literal_formato_2; $r_d_c_nM9_11_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_3) { $r_d_c_nM9_11_r_p=$literal_formato_3; $r_d_c_nM9_11_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_4) { $r_d_c_nM9_11_r_p=$literal_formato_4; $r_d_c_nM9_11_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_5) { $r_d_c_nM9_11_r_p=$literal_formato_5; $r_d_c_nM9_11_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_6) { $r_d_c_nM9_11_r_p=$literal_formato_6; $r_d_c_nM9_11_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_7) { $r_d_c_nM9_11_r_p=$literal_formato_7; $r_d_c_nM9_11_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_8) { $r_d_c_nM9_11_r_p=$literal_formato_8; $r_d_c_nM9_11_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_9) { $r_d_c_nM9_11_r_p=$literal_formato_9; $r_d_c_nM9_11_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_10) {$r_d_c_nM9_11_r_p=$literal_formato_10; $r_d_c_nM9_11_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_11) {$r_d_c_nM9_11_r_p=$literal_formato_11; $r_d_c_nM9_11_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_12) {$r_d_c_nM9_11_r_p=$literal_formato_12; $r_d_c_nM9_11_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M9 == '4') {
 
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_1) { $r_d_c_nM9_11_r_p=$cualitativa_formato_1; $r_d_c_nM9_11_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_2) { $r_d_c_nM9_11_r_p=$cualitativa_formato_2; $r_d_c_nM9_11_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_3) { $r_d_c_nM9_11_r_p=$cualitativa_formato_3; $r_d_c_nM9_11_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_4) { $r_d_c_nM9_11_r_p=$cualitativa_formato_4; $r_d_c_nM9_11_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_5) { $r_d_c_nM9_11_r_p=$cualitativa_formato_5; $r_d_c_nM9_11_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_6) { $r_d_c_nM9_11_r_p=$cualitativa_formato_6; $r_d_c_nM9_11_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_7) { $r_d_c_nM9_11_r_p=$cualitativa_formato_7; $r_d_c_nM9_11_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_8) { $r_d_c_nM9_11_r_p=$cualitativa_formato_8; $r_d_c_nM9_11_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_9) { $r_d_c_nM9_11_r_p=$cualitativa_formato_9; $r_d_c_nM9_11_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_10) {$r_d_c_nM9_11_r_p=$cualitativa_formato_10; $r_d_c_nM9_11_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_11) {$r_d_c_nM9_11_r_p=$cualitativa_formato_11; $r_d_c_nM9_11_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM9_11_redon>=$comparativo_formato_12) {$r_d_c_nM9_11_r_p=$cualitativa_formato_12; $r_d_c_nM9_11_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM9['nt_11'] == '') { $r_d_c_nM9_11_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM9_11_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM9_11_r_p_co; echo $parent_close;

                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM9['d_12'] != '') {

$el_d_12 =  $row_datos_control_notasM9['d_12'];

include("../../conectar.php");
$query_indi_12 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_12'                     
               order by id_indicador limit 1" ;
$datos_control_indi_12 = mysqli_query($enlace, $query_indi_12) or die(mysqli_error());
$row_datos_control_indi_12 = mysqli_fetch_array($datos_control_indi_12); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_12['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM9_12_redon =  number_format($row_datos_control_notasM9['nt_12'], 0, '.', '');

if ($formato_eva_M9 == '3') {
 
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_1) { $r_d_c_nM9_12_r_p=$literal_formato_1; $r_d_c_nM9_12_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_2) { $r_d_c_nM9_12_r_p=$literal_formato_2; $r_d_c_nM9_12_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_3) { $r_d_c_nM9_12_r_p=$literal_formato_3; $r_d_c_nM9_12_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_4) { $r_d_c_nM9_12_r_p=$literal_formato_4; $r_d_c_nM9_12_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_5) { $r_d_c_nM9_12_r_p=$literal_formato_5; $r_d_c_nM9_12_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_6) { $r_d_c_nM9_12_r_p=$literal_formato_6; $r_d_c_nM9_12_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_7) { $r_d_c_nM9_12_r_p=$literal_formato_7; $r_d_c_nM9_12_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_8) { $r_d_c_nM9_12_r_p=$literal_formato_8; $r_d_c_nM9_12_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_9) { $r_d_c_nM9_12_r_p=$literal_formato_9; $r_d_c_nM9_12_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_10) {$r_d_c_nM9_12_r_p=$literal_formato_10; $r_d_c_nM9_12_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_11) {$r_d_c_nM9_12_r_p=$literal_formato_11; $r_d_c_nM9_12_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_12) {$r_d_c_nM9_12_r_p=$literal_formato_12; $r_d_c_nM9_12_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M9 == '4') {
 
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_1) { $r_d_c_nM9_12_r_p=$cualitativa_formato_1; $r_d_c_nM9_12_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_2) { $r_d_c_nM9_12_r_p=$cualitativa_formato_2; $r_d_c_nM9_12_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_3) { $r_d_c_nM9_12_r_p=$cualitativa_formato_3; $r_d_c_nM9_12_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_4) { $r_d_c_nM9_12_r_p=$cualitativa_formato_4; $r_d_c_nM9_12_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_5) { $r_d_c_nM9_12_r_p=$cualitativa_formato_5; $r_d_c_nM9_12_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_6) { $r_d_c_nM9_12_r_p=$cualitativa_formato_6; $r_d_c_nM9_12_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_7) { $r_d_c_nM9_12_r_p=$cualitativa_formato_7; $r_d_c_nM9_12_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_8) { $r_d_c_nM9_12_r_p=$cualitativa_formato_8; $r_d_c_nM9_12_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_9) { $r_d_c_nM9_12_r_p=$cualitativa_formato_9; $r_d_c_nM9_12_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_10) {$r_d_c_nM9_12_r_p=$cualitativa_formato_10; $r_d_c_nM9_12_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_11) {$r_d_c_nM9_12_r_p=$cualitativa_formato_11; $r_d_c_nM9_12_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM9_12_redon>=$comparativo_formato_12) {$r_d_c_nM9_12_r_p=$cualitativa_formato_12; $r_d_c_nM9_12_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM9['nt_12'] == '') { $r_d_c_nM9_12_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM9_12_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM9_12_r_p_co; echo $parent_close;

                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM9['d_13'] != '') {


$el_d_13 =  $row_datos_control_notasM9['d_13'];

include("../../conectar.php");
$query_indi_13 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_13'                     
               order by id_indicador limit 1" ;
$datos_control_indi_13 = mysqli_query($enlace, $query_indi_13) or die(mysqli_error());
$row_datos_control_indi_13 = mysqli_fetch_array($datos_control_indi_13); 
 
 mysqli_close($enlace);


echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_13['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
                                        $row_datos_control_notasM9_13_redon =  number_format($row_datos_control_notasM9['nt_13'], 0, '.', '');

if ($formato_eva_M9 == '3') {
 
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_1) { $r_d_c_nM9_13_r_p=$literal_formato_1; $r_d_c_nM9_13_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_2) { $r_d_c_nM9_13_r_p=$literal_formato_2; $r_d_c_nM9_13_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_3) { $r_d_c_nM9_13_r_p=$literal_formato_3; $r_d_c_nM9_13_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_4) { $r_d_c_nM9_13_r_p=$literal_formato_4; $r_d_c_nM9_13_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_5) { $r_d_c_nM9_13_r_p=$literal_formato_5; $r_d_c_nM9_13_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_6) { $r_d_c_nM9_13_r_p=$literal_formato_6; $r_d_c_nM9_13_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_7) { $r_d_c_nM9_13_r_p=$literal_formato_7; $r_d_c_nM9_13_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_8) { $r_d_c_nM9_13_r_p=$literal_formato_8; $r_d_c_nM9_13_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_9) { $r_d_c_nM9_13_r_p=$literal_formato_9; $r_d_c_nM9_13_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_10) {$r_d_c_nM9_13_r_p=$literal_formato_10; $r_d_c_nM9_13_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_11) {$r_d_c_nM9_13_r_p=$literal_formato_11; $r_d_c_nM9_13_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_12) {$r_d_c_nM9_13_r_p=$literal_formato_12; $r_d_c_nM9_13_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M9 == '4') {
 
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_1) { $r_d_c_nM9_13_r_p=$cualitativa_formato_1; $r_d_c_nM9_13_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_2) { $r_d_c_nM9_13_r_p=$cualitativa_formato_2; $r_d_c_nM9_13_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_3) { $r_d_c_nM9_13_r_p=$cualitativa_formato_3; $r_d_c_nM9_13_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_4) { $r_d_c_nM9_13_r_p=$cualitativa_formato_4; $r_d_c_nM9_13_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_5) { $r_d_c_nM9_13_r_p=$cualitativa_formato_5; $r_d_c_nM9_13_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_6) { $r_d_c_nM9_13_r_p=$cualitativa_formato_6; $r_d_c_nM9_13_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_7) { $r_d_c_nM9_13_r_p=$cualitativa_formato_7; $r_d_c_nM9_13_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_8) { $r_d_c_nM9_13_r_p=$cualitativa_formato_8; $r_d_c_nM9_13_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_9) { $r_d_c_nM9_13_r_p=$cualitativa_formato_9; $r_d_c_nM9_13_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_10) {$r_d_c_nM9_13_r_p=$cualitativa_formato_10; $r_d_c_nM9_13_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_11) {$r_d_c_nM9_13_r_p=$cualitativa_formato_11; $r_d_c_nM9_13_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM9_13_redon>=$comparativo_formato_12) {$r_d_c_nM9_13_r_p=$cualitativa_formato_12; $r_d_c_nM9_13_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM9['nt_13'] == '') { $r_d_c_nM9_13_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM9_13_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM9_13_r_p_co; echo $parent_close;
                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM9['d_14'] != '') {

$el_d_14 =  $row_datos_control_notasM9['d_14'];

include("../../conectar.php");
$query_indi_14 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_14'                     
               order by id_indicador limit 1" ;
$datos_control_indi_14 = mysqli_query($enlace, $query_indi_14) or die(mysqli_error());
$row_datos_control_indi_14 = mysqli_fetch_array($datos_control_indi_14); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_14['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM9_14_redon =  number_format($row_datos_control_notasM9['nt_14'], 0, '.', '');

if ($formato_eva_M9 == '3') {
 
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_1) { $r_d_c_nM9_14_r_p=$literal_formato_1; $r_d_c_nM9_14_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_2) { $r_d_c_nM9_14_r_p=$literal_formato_2; $r_d_c_nM9_14_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_3) { $r_d_c_nM9_14_r_p=$literal_formato_3; $r_d_c_nM9_14_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_4) { $r_d_c_nM9_14_r_p=$literal_formato_4; $r_d_c_nM9_14_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_5) { $r_d_c_nM9_14_r_p=$literal_formato_5; $r_d_c_nM9_14_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_6) { $r_d_c_nM9_14_r_p=$literal_formato_6; $r_d_c_nM9_14_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_7) { $r_d_c_nM9_14_r_p=$literal_formato_7; $r_d_c_nM9_14_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_8) { $r_d_c_nM9_14_r_p=$literal_formato_8; $r_d_c_nM9_14_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_9) { $r_d_c_nM9_14_r_p=$literal_formato_9; $r_d_c_nM9_14_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_10) {$r_d_c_nM9_14_r_p=$literal_formato_10; $r_d_c_nM9_14_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_11) {$r_d_c_nM9_14_r_p=$literal_formato_11; $r_d_c_nM9_14_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_12) {$r_d_c_nM9_14_r_p=$literal_formato_12; $r_d_c_nM9_14_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M9 == '4') {
 
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_1) { $r_d_c_nM9_14_r_p=$cualitativa_formato_1; $r_d_c_nM9_14_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_2) { $r_d_c_nM9_14_r_p=$cualitativa_formato_2; $r_d_c_nM9_14_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_3) { $r_d_c_nM9_14_r_p=$cualitativa_formato_3; $r_d_c_nM9_14_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_4) { $r_d_c_nM9_14_r_p=$cualitativa_formato_4; $r_d_c_nM9_14_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_5) { $r_d_c_nM9_14_r_p=$cualitativa_formato_5; $r_d_c_nM9_14_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_6) { $r_d_c_nM9_14_r_p=$cualitativa_formato_6; $r_d_c_nM9_14_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_7) { $r_d_c_nM9_14_r_p=$cualitativa_formato_7; $r_d_c_nM9_14_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_8) { $r_d_c_nM9_14_r_p=$cualitativa_formato_8; $r_d_c_nM9_14_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_9) { $r_d_c_nM9_14_r_p=$cualitativa_formato_9; $r_d_c_nM9_14_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_10) {$r_d_c_nM9_14_r_p=$cualitativa_formato_10; $r_d_c_nM9_14_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_11) {$r_d_c_nM9_14_r_p=$cualitativa_formato_11; $r_d_c_nM9_14_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM9_14_redon>=$comparativo_formato_12) {$r_d_c_nM9_14_r_p=$cualitativa_formato_12; $r_d_c_nM9_14_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM9['nt_14'] == '') { $r_d_c_nM9_14_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM9_14_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM9_14_r_p_co; echo $parent_close; 
                            echo $td_closeB;


  echo $tr_close;

}



if ($row_datos_control_notasM9['d_15'] != '') {

$el_d_15 =  $row_datos_control_notasM9['d_15'];

include("../../conectar.php");
$query_indi_15 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_15'                     
               order by id_indicador limit 1" ;
$datos_control_indi_15 = mysqli_query($enlace, $query_indi_15) or die(mysqli_error());
$row_datos_control_indi_15 = mysqli_fetch_array($datos_control_indi_15); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_15['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM9_15_redon =  number_format($row_datos_control_notasM9['nt_15'], 0, '.', '');
if ($formato_eva_M9 == '3') {
 
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_1) { $r_d_c_nM9_15_r_p=$literal_formato_1; $r_d_c_nM9_15_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_2) { $r_d_c_nM9_15_r_p=$literal_formato_2; $r_d_c_nM9_15_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_3) { $r_d_c_nM9_15_r_p=$literal_formato_3; $r_d_c_nM9_15_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_4) { $r_d_c_nM9_15_r_p=$literal_formato_4; $r_d_c_nM9_15_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_5) { $r_d_c_nM9_15_r_p=$literal_formato_5; $r_d_c_nM9_15_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_6) { $r_d_c_nM9_15_r_p=$literal_formato_6; $r_d_c_nM9_15_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_7) { $r_d_c_nM9_15_r_p=$literal_formato_7; $r_d_c_nM9_15_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_8) { $r_d_c_nM9_15_r_p=$literal_formato_8; $r_d_c_nM9_15_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_9) { $r_d_c_nM9_15_r_p=$literal_formato_9; $r_d_c_nM9_15_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_10) {$r_d_c_nM9_15_r_p=$literal_formato_10; $r_d_c_nM9_15_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_11) {$r_d_c_nM9_15_r_p=$literal_formato_11; $r_d_c_nM9_15_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_12) {$r_d_c_nM9_15_r_p=$literal_formato_12; $r_d_c_nM9_15_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M9 == '4') {
 
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_1) { $r_d_c_nM9_15_r_p=$cualitativa_formato_1; $r_d_c_nM9_15_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_2) { $r_d_c_nM9_15_r_p=$cualitativa_formato_2; $r_d_c_nM9_15_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_3) { $r_d_c_nM9_15_r_p=$cualitativa_formato_3; $r_d_c_nM9_15_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_4) { $r_d_c_nM9_15_r_p=$cualitativa_formato_4; $r_d_c_nM9_15_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_5) { $r_d_c_nM9_15_r_p=$cualitativa_formato_5; $r_d_c_nM9_15_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_6) { $r_d_c_nM9_15_r_p=$cualitativa_formato_6; $r_d_c_nM9_15_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_7) { $r_d_c_nM9_15_r_p=$cualitativa_formato_7; $r_d_c_nM9_15_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_8) { $r_d_c_nM9_15_r_p=$cualitativa_formato_8; $r_d_c_nM9_15_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_9) { $r_d_c_nM9_15_r_p=$cualitativa_formato_9; $r_d_c_nM9_15_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_10) {$r_d_c_nM9_15_r_p=$cualitativa_formato_10; $r_d_c_nM9_15_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_11) {$r_d_c_nM9_15_r_p=$cualitativa_formato_11; $r_d_c_nM9_15_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM9_15_redon>=$comparativo_formato_12) {$r_d_c_nM9_15_r_p=$cualitativa_formato_12; $r_d_c_nM9_15_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM9['nt_15'] == '') { $r_d_c_nM9_15_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM9_15_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM9_15_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}


if ($row_datos_control_notasM9['d_16'] != '') {

$el_d_16 =  $row_datos_control_notasM9['d_16'];

include("../../conectar.php");
$query_indi_16 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_16'                     
               order by id_indicador limit 1" ;
$datos_control_indi_16 = mysqli_query($enlace, $query_indi_16) or die(mysqli_error());
$row_datos_control_indi_16 = mysqli_fetch_array($datos_control_indi_16); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_16['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM9_16_redon =  number_format($row_datos_control_notasM9['nt_16'], 0, '.', '');

if ($formato_eva_M9 == '3') {
 
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_1) { $r_d_c_nM9_16_r_p=$literal_formato_1; $r_d_c_nM9_16_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_2) { $r_d_c_nM9_16_r_p=$literal_formato_2; $r_d_c_nM9_16_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_3) { $r_d_c_nM9_16_r_p=$literal_formato_3; $r_d_c_nM9_16_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_4) { $r_d_c_nM9_16_r_p=$literal_formato_4; $r_d_c_nM9_16_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_5) { $r_d_c_nM9_16_r_p=$literal_formato_5; $r_d_c_nM9_16_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_6) { $r_d_c_nM9_16_r_p=$literal_formato_6; $r_d_c_nM9_16_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_7) { $r_d_c_nM9_16_r_p=$literal_formato_7; $r_d_c_nM9_16_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_8) { $r_d_c_nM9_16_r_p=$literal_formato_8; $r_d_c_nM9_16_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_9) { $r_d_c_nM9_16_r_p=$literal_formato_9; $r_d_c_nM9_16_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_10) {$r_d_c_nM9_16_r_p=$literal_formato_10; $r_d_c_nM9_16_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_11) {$r_d_c_nM9_16_r_p=$literal_formato_11; $r_d_c_nM9_16_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_12) {$r_d_c_nM9_16_r_p=$literal_formato_12; $r_d_c_nM9_16_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M9 == '4') {
 
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_1) { $r_d_c_nM9_16_r_p=$cualitativa_formato_1; $r_d_c_nM9_16_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_2) { $r_d_c_nM9_16_r_p=$cualitativa_formato_2; $r_d_c_nM9_16_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_3) { $r_d_c_nM9_16_r_p=$cualitativa_formato_3; $r_d_c_nM9_16_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_4) { $r_d_c_nM9_16_r_p=$cualitativa_formato_4; $r_d_c_nM9_16_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_5) { $r_d_c_nM9_16_r_p=$cualitativa_formato_5; $r_d_c_nM9_16_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_6) { $r_d_c_nM9_16_r_p=$cualitativa_formato_6; $r_d_c_nM9_16_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_7) { $r_d_c_nM9_16_r_p=$cualitativa_formato_7; $r_d_c_nM9_16_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_8) { $r_d_c_nM9_16_r_p=$cualitativa_formato_8; $r_d_c_nM9_16_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_9) { $r_d_c_nM9_16_r_p=$cualitativa_formato_9; $r_d_c_nM9_16_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_10) {$r_d_c_nM9_16_r_p=$cualitativa_formato_10; $r_d_c_nM9_16_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_11) {$r_d_c_nM9_16_r_p=$cualitativa_formato_11; $r_d_c_nM9_16_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM9_16_redon>=$comparativo_formato_12) {$r_d_c_nM9_16_r_p=$cualitativa_formato_12; $r_d_c_nM9_16_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM9['nt_16'] == '') { $r_d_c_nM9_16_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM9_16_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM9_16_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM9['d_17'] != '') {

$el_d_17 =  $row_datos_control_notasM9['d_17'];

include("../../conectar.php");
$query_indi_17 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_17'                     
               order by id_indicador limit 1" ;
$datos_control_indi_17 = mysqli_query($enlace, $query_indi_17) or die(mysqli_error());
$row_datos_control_indi_17 = mysqli_fetch_array($datos_control_indi_17); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_17['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM9_17_redon =  number_format($row_datos_control_notasM9['nt_17'], 0, '.', '');
if ($formato_eva_M9 == '3') {
 
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_1) { $r_d_c_nM9_17_r_p=$literal_formato_1; $r_d_c_nM9_17_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_2) { $r_d_c_nM9_17_r_p=$literal_formato_2; $r_d_c_nM9_17_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_3) { $r_d_c_nM9_17_r_p=$literal_formato_3; $r_d_c_nM9_17_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_4) { $r_d_c_nM9_17_r_p=$literal_formato_4; $r_d_c_nM9_17_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_5) { $r_d_c_nM9_17_r_p=$literal_formato_5; $r_d_c_nM9_17_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_6) { $r_d_c_nM9_17_r_p=$literal_formato_6; $r_d_c_nM9_17_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_7) { $r_d_c_nM9_17_r_p=$literal_formato_7; $r_d_c_nM9_17_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_8) { $r_d_c_nM9_17_r_p=$literal_formato_8; $r_d_c_nM9_17_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_9) { $r_d_c_nM9_17_r_p=$literal_formato_9; $r_d_c_nM9_17_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_10) {$r_d_c_nM9_17_r_p=$literal_formato_10; $r_d_c_nM9_17_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_11) {$r_d_c_nM9_17_r_p=$literal_formato_11; $r_d_c_nM9_17_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_12) {$r_d_c_nM9_17_r_p=$literal_formato_12; $r_d_c_nM9_17_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M9 == '4') {
 
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_1) { $r_d_c_nM9_17_r_p=$cualitativa_formato_1; $r_d_c_nM9_17_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_2) { $r_d_c_nM9_17_r_p=$cualitativa_formato_2; $r_d_c_nM9_17_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_3) { $r_d_c_nM9_17_r_p=$cualitativa_formato_3; $r_d_c_nM9_17_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_4) { $r_d_c_nM9_17_r_p=$cualitativa_formato_4; $r_d_c_nM9_17_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_5) { $r_d_c_nM9_17_r_p=$cualitativa_formato_5; $r_d_c_nM9_17_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_6) { $r_d_c_nM9_17_r_p=$cualitativa_formato_6; $r_d_c_nM9_17_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_7) { $r_d_c_nM9_17_r_p=$cualitativa_formato_7; $r_d_c_nM9_17_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_8) { $r_d_c_nM9_17_r_p=$cualitativa_formato_8; $r_d_c_nM9_17_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_9) { $r_d_c_nM9_17_r_p=$cualitativa_formato_9; $r_d_c_nM9_17_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_10) {$r_d_c_nM9_17_r_p=$cualitativa_formato_10; $r_d_c_nM9_17_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_11) {$r_d_c_nM9_17_r_p=$cualitativa_formato_11; $r_d_c_nM9_17_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM9_17_redon>=$comparativo_formato_12) {$r_d_c_nM9_17_r_p=$cualitativa_formato_12; $r_d_c_nM9_17_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM9['nt_17'] == '') { $r_d_c_nM9_17_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM9_17_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM9_17_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}
}










if ($row_datos_controlmat['j_jjj'] != '') {

    echo $tr_open;
                echo $tdd_open; echo $asterisco;   echo $row_datos_controlmat['j_jjj']; echo $dos_puntos;  echo $tdd_close;
     echo $tr_close;

}



if ($row_datos_controlmat['j_jjj'] != '') { 

if ($row_datos_control_notasM10['d_11'] != '') {

$el_d_11 =  $row_datos_control_notasM10['d_11'];

include("../../conectar.php");
$query_indi_11 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_11'                       
               order by id_indicador limit 1" ;
$datos_control_indi_11 = mysqli_query($enlace, $query_indi_11) or die(mysqli_error());
$row_datos_control_indi_11 = mysqli_fetch_array($datos_control_indi_11); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_11['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM10_11_redon =  number_format($row_datos_control_notasM10['nt_11'], 0, '.', '');

if ($formato_eva_M10 == '3') {
 
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_1) { $r_d_c_nM10_11_r_p=$literal_formato_1; $r_d_c_nM10_11_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_2) { $r_d_c_nM10_11_r_p=$literal_formato_2; $r_d_c_nM10_11_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_3) { $r_d_c_nM10_11_r_p=$literal_formato_3; $r_d_c_nM10_11_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_4) { $r_d_c_nM10_11_r_p=$literal_formato_4; $r_d_c_nM10_11_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_5) { $r_d_c_nM10_11_r_p=$literal_formato_5; $r_d_c_nM10_11_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_6) { $r_d_c_nM10_11_r_p=$literal_formato_6; $r_d_c_nM10_11_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_7) { $r_d_c_nM10_11_r_p=$literal_formato_7; $r_d_c_nM10_11_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_8) { $r_d_c_nM10_11_r_p=$literal_formato_8; $r_d_c_nM10_11_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_9) { $r_d_c_nM10_11_r_p=$literal_formato_9; $r_d_c_nM10_11_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_10) {$r_d_c_nM10_11_r_p=$literal_formato_10; $r_d_c_nM10_11_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_11) {$r_d_c_nM10_11_r_p=$literal_formato_11; $r_d_c_nM10_11_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_12) {$r_d_c_nM10_11_r_p=$literal_formato_12; $r_d_c_nM10_11_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M10 == '4') {
 
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_1) { $r_d_c_nM10_11_r_p=$cualitativa_formato_1; $r_d_c_nM10_11_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_2) { $r_d_c_nM10_11_r_p=$cualitativa_formato_2; $r_d_c_nM10_11_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_3) { $r_d_c_nM10_11_r_p=$cualitativa_formato_3; $r_d_c_nM10_11_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_4) { $r_d_c_nM10_11_r_p=$cualitativa_formato_4; $r_d_c_nM10_11_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_5) { $r_d_c_nM10_11_r_p=$cualitativa_formato_5; $r_d_c_nM10_11_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_6) { $r_d_c_nM10_11_r_p=$cualitativa_formato_6; $r_d_c_nM10_11_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_7) { $r_d_c_nM10_11_r_p=$cualitativa_formato_7; $r_d_c_nM10_11_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_8) { $r_d_c_nM10_11_r_p=$cualitativa_formato_8; $r_d_c_nM10_11_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_9) { $r_d_c_nM10_11_r_p=$cualitativa_formato_9; $r_d_c_nM10_11_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_10) {$r_d_c_nM10_11_r_p=$cualitativa_formato_10; $r_d_c_nM10_11_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_11) {$r_d_c_nM10_11_r_p=$cualitativa_formato_11; $r_d_c_nM10_11_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM10_11_redon>=$comparativo_formato_12) {$r_d_c_nM10_11_r_p=$cualitativa_formato_12; $r_d_c_nM10_11_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM10['nt_11'] == '') { $r_d_c_nM10_11_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM10_11_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM10_11_r_p_co; echo $parent_close;

                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM10['d_12'] != '') {

$el_d_12 =  $row_datos_control_notasM10['d_12'];

include("../../conectar.php");
$query_indi_12 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_12'                     
               order by id_indicador limit 1" ;
$datos_control_indi_12 = mysqli_query($enlace, $query_indi_12) or die(mysqli_error());
$row_datos_control_indi_12 = mysqli_fetch_array($datos_control_indi_12); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_12['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM10_12_redon =  number_format($row_datos_control_notasM10['nt_12'], 0, '.', '');

if ($formato_eva_M10 == '3') {
 
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_1) { $r_d_c_nM10_12_r_p=$literal_formato_1; $r_d_c_nM10_12_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_2) { $r_d_c_nM10_12_r_p=$literal_formato_2; $r_d_c_nM10_12_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_3) { $r_d_c_nM10_12_r_p=$literal_formato_3; $r_d_c_nM10_12_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_4) { $r_d_c_nM10_12_r_p=$literal_formato_4; $r_d_c_nM10_12_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_5) { $r_d_c_nM10_12_r_p=$literal_formato_5; $r_d_c_nM10_12_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_6) { $r_d_c_nM10_12_r_p=$literal_formato_6; $r_d_c_nM10_12_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_7) { $r_d_c_nM10_12_r_p=$literal_formato_7; $r_d_c_nM10_12_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_8) { $r_d_c_nM10_12_r_p=$literal_formato_8; $r_d_c_nM10_12_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_9) { $r_d_c_nM10_12_r_p=$literal_formato_9; $r_d_c_nM10_12_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_10) {$r_d_c_nM10_12_r_p=$literal_formato_10; $r_d_c_nM10_12_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_11) {$r_d_c_nM10_12_r_p=$literal_formato_11; $r_d_c_nM10_12_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_12) {$r_d_c_nM10_12_r_p=$literal_formato_12; $r_d_c_nM10_12_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M10 == '4') {
 
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_1) { $r_d_c_nM10_12_r_p=$cualitativa_formato_1; $r_d_c_nM10_12_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_2) { $r_d_c_nM10_12_r_p=$cualitativa_formato_2; $r_d_c_nM10_12_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_3) { $r_d_c_nM10_12_r_p=$cualitativa_formato_3; $r_d_c_nM10_12_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_4) { $r_d_c_nM10_12_r_p=$cualitativa_formato_4; $r_d_c_nM10_12_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_5) { $r_d_c_nM10_12_r_p=$cualitativa_formato_5; $r_d_c_nM10_12_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_6) { $r_d_c_nM10_12_r_p=$cualitativa_formato_6; $r_d_c_nM10_12_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_7) { $r_d_c_nM10_12_r_p=$cualitativa_formato_7; $r_d_c_nM10_12_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_8) { $r_d_c_nM10_12_r_p=$cualitativa_formato_8; $r_d_c_nM10_12_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_9) { $r_d_c_nM10_12_r_p=$cualitativa_formato_9; $r_d_c_nM10_12_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_10) {$r_d_c_nM10_12_r_p=$cualitativa_formato_10; $r_d_c_nM10_12_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_11) {$r_d_c_nM10_12_r_p=$cualitativa_formato_11; $r_d_c_nM10_12_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM10_12_redon>=$comparativo_formato_12) {$r_d_c_nM10_12_r_p=$cualitativa_formato_12; $r_d_c_nM10_12_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM10['nt_12'] == '') { $r_d_c_nM10_12_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM10_12_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM10_12_r_p_co; echo $parent_close;

                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM10['d_13'] != '') {


$el_d_13 =  $row_datos_control_notasM10['d_13'];

include("../../conectar.php");
$query_indi_13 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_13'                     
               order by id_indicador limit 1" ;
$datos_control_indi_13 = mysqli_query($enlace, $query_indi_13) or die(mysqli_error());
$row_datos_control_indi_13 = mysqli_fetch_array($datos_control_indi_13); 
 
 mysqli_close($enlace);


echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_13['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
                                        $row_datos_control_notasM10_13_redon =  number_format($row_datos_control_notasM10['nt_13'], 0, '.', '');

if ($formato_eva_M10 == '3') {
 
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_1) { $r_d_c_nM10_13_r_p=$literal_formato_1; $r_d_c_nM10_13_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_2) { $r_d_c_nM10_13_r_p=$literal_formato_2; $r_d_c_nM10_13_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_3) { $r_d_c_nM10_13_r_p=$literal_formato_3; $r_d_c_nM10_13_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_4) { $r_d_c_nM10_13_r_p=$literal_formato_4; $r_d_c_nM10_13_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_5) { $r_d_c_nM10_13_r_p=$literal_formato_5; $r_d_c_nM10_13_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_6) { $r_d_c_nM10_13_r_p=$literal_formato_6; $r_d_c_nM10_13_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_7) { $r_d_c_nM10_13_r_p=$literal_formato_7; $r_d_c_nM10_13_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_8) { $r_d_c_nM10_13_r_p=$literal_formato_8; $r_d_c_nM10_13_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_9) { $r_d_c_nM10_13_r_p=$literal_formato_9; $r_d_c_nM10_13_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_10) {$r_d_c_nM10_13_r_p=$literal_formato_10; $r_d_c_nM10_13_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_11) {$r_d_c_nM10_13_r_p=$literal_formato_11; $r_d_c_nM10_13_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_12) {$r_d_c_nM10_13_r_p=$literal_formato_12; $r_d_c_nM10_13_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M10 == '4') {
 
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_1) { $r_d_c_nM10_13_r_p=$cualitativa_formato_1; $r_d_c_nM10_13_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_2) { $r_d_c_nM10_13_r_p=$cualitativa_formato_2; $r_d_c_nM10_13_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_3) { $r_d_c_nM10_13_r_p=$cualitativa_formato_3; $r_d_c_nM10_13_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_4) { $r_d_c_nM10_13_r_p=$cualitativa_formato_4; $r_d_c_nM10_13_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_5) { $r_d_c_nM10_13_r_p=$cualitativa_formato_5; $r_d_c_nM10_13_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_6) { $r_d_c_nM10_13_r_p=$cualitativa_formato_6; $r_d_c_nM10_13_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_7) { $r_d_c_nM10_13_r_p=$cualitativa_formato_7; $r_d_c_nM10_13_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_8) { $r_d_c_nM10_13_r_p=$cualitativa_formato_8; $r_d_c_nM10_13_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_9) { $r_d_c_nM10_13_r_p=$cualitativa_formato_9; $r_d_c_nM10_13_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_10) {$r_d_c_nM10_13_r_p=$cualitativa_formato_10; $r_d_c_nM10_13_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_11) {$r_d_c_nM10_13_r_p=$cualitativa_formato_11; $r_d_c_nM10_13_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM10_13_redon>=$comparativo_formato_12) {$r_d_c_nM10_13_r_p=$cualitativa_formato_12; $r_d_c_nM10_13_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM10['nt_13'] == '') { $r_d_c_nM10_13_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM10_13_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM10_13_r_p_co; echo $parent_close;
                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM10['d_14'] != '') {

$el_d_14 =  $row_datos_control_notasM10['d_14'];

include("../../conectar.php");
$query_indi_14 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_14'                     
               order by id_indicador limit 1" ;
$datos_control_indi_14 = mysqli_query($enlace, $query_indi_14) or die(mysqli_error());
$row_datos_control_indi_14 = mysqli_fetch_array($datos_control_indi_14); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_14['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM10_14_redon =  number_format($row_datos_control_notasM10['nt_14'], 0, '.', '');


if ($formato_eva_M10 == '3') {
 
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_1) { $r_d_c_nM10_14_r_p=$literal_formato_1; $r_d_c_nM10_14_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_2) { $r_d_c_nM10_14_r_p=$literal_formato_2; $r_d_c_nM10_14_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_3) { $r_d_c_nM10_14_r_p=$literal_formato_3; $r_d_c_nM10_14_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_4) { $r_d_c_nM10_14_r_p=$literal_formato_4; $r_d_c_nM10_14_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_5) { $r_d_c_nM10_14_r_p=$literal_formato_5; $r_d_c_nM10_14_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_6) { $r_d_c_nM10_14_r_p=$literal_formato_6; $r_d_c_nM10_14_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_7) { $r_d_c_nM10_14_r_p=$literal_formato_7; $r_d_c_nM10_14_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_8) { $r_d_c_nM10_14_r_p=$literal_formato_8; $r_d_c_nM10_14_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_9) { $r_d_c_nM10_14_r_p=$literal_formato_9; $r_d_c_nM10_14_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_10) {$r_d_c_nM10_14_r_p=$literal_formato_10; $r_d_c_nM10_14_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_11) {$r_d_c_nM10_14_r_p=$literal_formato_11; $r_d_c_nM10_14_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_12) {$r_d_c_nM10_14_r_p=$literal_formato_12; $r_d_c_nM10_14_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M10 == '4') {
 
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_1) { $r_d_c_nM10_14_r_p=$cualitativa_formato_1; $r_d_c_nM10_14_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_2) { $r_d_c_nM10_14_r_p=$cualitativa_formato_2; $r_d_c_nM10_14_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_3) { $r_d_c_nM10_14_r_p=$cualitativa_formato_3; $r_d_c_nM10_14_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_4) { $r_d_c_nM10_14_r_p=$cualitativa_formato_4; $r_d_c_nM10_14_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_5) { $r_d_c_nM10_14_r_p=$cualitativa_formato_5; $r_d_c_nM10_14_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_6) { $r_d_c_nM10_14_r_p=$cualitativa_formato_6; $r_d_c_nM10_14_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_7) { $r_d_c_nM10_14_r_p=$cualitativa_formato_7; $r_d_c_nM10_14_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_8) { $r_d_c_nM10_14_r_p=$cualitativa_formato_8; $r_d_c_nM10_14_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_9) { $r_d_c_nM10_14_r_p=$cualitativa_formato_9; $r_d_c_nM10_14_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_10) {$r_d_c_nM10_14_r_p=$cualitativa_formato_10; $r_d_c_nM10_14_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_11) {$r_d_c_nM10_14_r_p=$cualitativa_formato_11; $r_d_c_nM10_14_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM10_14_redon>=$comparativo_formato_12) {$r_d_c_nM10_14_r_p=$cualitativa_formato_12; $r_d_c_nM10_14_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM10['nt_14'] == '') { $r_d_c_nM10_14_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM10_14_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM10_14_r_p_co; echo $parent_close; 
                            echo $td_closeB;


  echo $tr_close;

}



if ($row_datos_control_notasM10['d_15'] != '') {

$el_d_15 =  $row_datos_control_notasM10['d_15'];

include("../../conectar.php");
$query_indi_15 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_15'                     
               order by id_indicador limit 1" ;
$datos_control_indi_15 = mysqli_query($enlace, $query_indi_15) or die(mysqli_error());
$row_datos_control_indi_15 = mysqli_fetch_array($datos_control_indi_15); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_15['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM10_15_redon =  number_format($row_datos_control_notasM10['nt_15'], 0, '.', '');
if ($formato_eva_M10 == '3') {
 
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_1) { $r_d_c_nM10_15_r_p=$literal_formato_1; $r_d_c_nM10_15_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_2) { $r_d_c_nM10_15_r_p=$literal_formato_2; $r_d_c_nM10_15_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_3) { $r_d_c_nM10_15_r_p=$literal_formato_3; $r_d_c_nM10_15_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_4) { $r_d_c_nM10_15_r_p=$literal_formato_4; $r_d_c_nM10_15_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_5) { $r_d_c_nM10_15_r_p=$literal_formato_5; $r_d_c_nM10_15_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_6) { $r_d_c_nM10_15_r_p=$literal_formato_6; $r_d_c_nM10_15_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_7) { $r_d_c_nM10_15_r_p=$literal_formato_7; $r_d_c_nM10_15_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_8) { $r_d_c_nM10_15_r_p=$literal_formato_8; $r_d_c_nM10_15_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_9) { $r_d_c_nM10_15_r_p=$literal_formato_9; $r_d_c_nM10_15_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_10) {$r_d_c_nM10_15_r_p=$literal_formato_10; $r_d_c_nM10_15_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_11) {$r_d_c_nM10_15_r_p=$literal_formato_11; $r_d_c_nM10_15_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_12) {$r_d_c_nM10_15_r_p=$literal_formato_12; $r_d_c_nM10_15_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M10 == '4') {
 
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_1) { $r_d_c_nM10_15_r_p=$cualitativa_formato_1; $r_d_c_nM10_15_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_2) { $r_d_c_nM10_15_r_p=$cualitativa_formato_2; $r_d_c_nM10_15_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_3) { $r_d_c_nM10_15_r_p=$cualitativa_formato_3; $r_d_c_nM10_15_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_4) { $r_d_c_nM10_15_r_p=$cualitativa_formato_4; $r_d_c_nM10_15_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_5) { $r_d_c_nM10_15_r_p=$cualitativa_formato_5; $r_d_c_nM10_15_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_6) { $r_d_c_nM10_15_r_p=$cualitativa_formato_6; $r_d_c_nM10_15_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_7) { $r_d_c_nM10_15_r_p=$cualitativa_formato_7; $r_d_c_nM10_15_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_8) { $r_d_c_nM10_15_r_p=$cualitativa_formato_8; $r_d_c_nM10_15_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_9) { $r_d_c_nM10_15_r_p=$cualitativa_formato_9; $r_d_c_nM10_15_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_10) {$r_d_c_nM10_15_r_p=$cualitativa_formato_10; $r_d_c_nM10_15_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_11) {$r_d_c_nM10_15_r_p=$cualitativa_formato_11; $r_d_c_nM10_15_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM10_15_redon>=$comparativo_formato_12) {$r_d_c_nM10_15_r_p=$cualitativa_formato_12; $r_d_c_nM10_15_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM10['nt_15'] == '') { $r_d_c_nM10_15_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM10_15_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM10_15_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}


if ($row_datos_control_notasM10['d_16'] != '') {

$el_d_16 =  $row_datos_control_notasM10['d_16'];

include("../../conectar.php");
$query_indi_16 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_16'                     
               order by id_indicador limit 1" ;
$datos_control_indi_16 = mysqli_query($enlace, $query_indi_16) or die(mysqli_error());
$row_datos_control_indi_16 = mysqli_fetch_array($datos_control_indi_16); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_16['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM10_16_redon =  number_format($row_datos_control_notasM10['nt_16'], 0, '.', '');
if ($formato_eva_M10 == '3') {
 
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_1) { $r_d_c_nM10_16_r_p=$literal_formato_1; $r_d_c_nM10_16_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_2) { $r_d_c_nM10_16_r_p=$literal_formato_2; $r_d_c_nM10_16_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_3) { $r_d_c_nM10_16_r_p=$literal_formato_3; $r_d_c_nM10_16_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_4) { $r_d_c_nM10_16_r_p=$literal_formato_4; $r_d_c_nM10_16_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_5) { $r_d_c_nM10_16_r_p=$literal_formato_5; $r_d_c_nM10_16_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_6) { $r_d_c_nM10_16_r_p=$literal_formato_6; $r_d_c_nM10_16_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_7) { $r_d_c_nM10_16_r_p=$literal_formato_7; $r_d_c_nM10_16_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_8) { $r_d_c_nM10_16_r_p=$literal_formato_8; $r_d_c_nM10_16_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_9) { $r_d_c_nM10_16_r_p=$literal_formato_9; $r_d_c_nM10_16_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_10) {$r_d_c_nM10_16_r_p=$literal_formato_10; $r_d_c_nM10_16_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_11) {$r_d_c_nM10_16_r_p=$literal_formato_11; $r_d_c_nM10_16_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_12) {$r_d_c_nM10_16_r_p=$literal_formato_12; $r_d_c_nM10_16_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M10 == '4') {
 
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_1) { $r_d_c_nM10_16_r_p=$cualitativa_formato_1; $r_d_c_nM10_16_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_2) { $r_d_c_nM10_16_r_p=$cualitativa_formato_2; $r_d_c_nM10_16_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_3) { $r_d_c_nM10_16_r_p=$cualitativa_formato_3; $r_d_c_nM10_16_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_4) { $r_d_c_nM10_16_r_p=$cualitativa_formato_4; $r_d_c_nM10_16_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_5) { $r_d_c_nM10_16_r_p=$cualitativa_formato_5; $r_d_c_nM10_16_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_6) { $r_d_c_nM10_16_r_p=$cualitativa_formato_6; $r_d_c_nM10_16_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_7) { $r_d_c_nM10_16_r_p=$cualitativa_formato_7; $r_d_c_nM10_16_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_8) { $r_d_c_nM10_16_r_p=$cualitativa_formato_8; $r_d_c_nM10_16_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_9) { $r_d_c_nM10_16_r_p=$cualitativa_formato_9; $r_d_c_nM10_16_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_10) {$r_d_c_nM10_16_r_p=$cualitativa_formato_10; $r_d_c_nM10_16_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_11) {$r_d_c_nM10_16_r_p=$cualitativa_formato_11; $r_d_c_nM10_16_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM10_16_redon>=$comparativo_formato_12) {$r_d_c_nM10_16_r_p=$cualitativa_formato_12; $r_d_c_nM10_16_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM10['nt_16'] == '') { $r_d_c_nM10_16_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM10_16_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM10_16_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM10['d_17'] != '') {

$el_d_17 =  $row_datos_control_notasM10['d_17'];

include("../../conectar.php");
$query_indi_17 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_17'                     
               order by id_indicador limit 1" ;
$datos_control_indi_17 = mysqli_query($enlace, $query_indi_17) or die(mysqli_error());
$row_datos_control_indi_17 = mysqli_fetch_array($datos_control_indi_17); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_17['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM10_17_redon =  number_format($row_datos_control_notasM10['nt_17'], 0, '.', '');
if ($formato_eva_M10 == '3') {
 
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_1) { $r_d_c_nM10_17_r_p=$literal_formato_1; $r_d_c_nM10_17_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_2) { $r_d_c_nM10_17_r_p=$literal_formato_2; $r_d_c_nM10_17_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_3) { $r_d_c_nM10_17_r_p=$literal_formato_3; $r_d_c_nM10_17_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_4) { $r_d_c_nM10_17_r_p=$literal_formato_4; $r_d_c_nM10_17_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_5) { $r_d_c_nM10_17_r_p=$literal_formato_5; $r_d_c_nM10_17_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_6) { $r_d_c_nM10_17_r_p=$literal_formato_6; $r_d_c_nM10_17_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_7) { $r_d_c_nM10_17_r_p=$literal_formato_7; $r_d_c_nM10_17_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_8) { $r_d_c_nM10_17_r_p=$literal_formato_8; $r_d_c_nM10_17_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_9) { $r_d_c_nM10_17_r_p=$literal_formato_9; $r_d_c_nM10_17_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_10) {$r_d_c_nM10_17_r_p=$literal_formato_10; $r_d_c_nM10_17_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_11) {$r_d_c_nM10_17_r_p=$literal_formato_11; $r_d_c_nM10_17_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_12) {$r_d_c_nM10_17_r_p=$literal_formato_12; $r_d_c_nM10_17_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M10 == '4') {
 
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_1) { $r_d_c_nM10_17_r_p=$cualitativa_formato_1; $r_d_c_nM10_17_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_2) { $r_d_c_nM10_17_r_p=$cualitativa_formato_2; $r_d_c_nM10_17_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_3) { $r_d_c_nM10_17_r_p=$cualitativa_formato_3; $r_d_c_nM10_17_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_4) { $r_d_c_nM10_17_r_p=$cualitativa_formato_4; $r_d_c_nM10_17_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_5) { $r_d_c_nM10_17_r_p=$cualitativa_formato_5; $r_d_c_nM10_17_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_6) { $r_d_c_nM10_17_r_p=$cualitativa_formato_6; $r_d_c_nM10_17_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_7) { $r_d_c_nM10_17_r_p=$cualitativa_formato_7; $r_d_c_nM10_17_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_8) { $r_d_c_nM10_17_r_p=$cualitativa_formato_8; $r_d_c_nM10_17_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_9) { $r_d_c_nM10_17_r_p=$cualitativa_formato_9; $r_d_c_nM10_17_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_10) {$r_d_c_nM10_17_r_p=$cualitativa_formato_10; $r_d_c_nM10_17_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_11) {$r_d_c_nM10_17_r_p=$cualitativa_formato_11; $r_d_c_nM10_17_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM10_17_redon>=$comparativo_formato_12) {$r_d_c_nM10_17_r_p=$cualitativa_formato_12; $r_d_c_nM10_17_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM10['nt_17'] == '') { $r_d_c_nM10_17_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM10_17_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM10_17_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}
}





if ($row_datos_controlmat['k_kkk'] != '') {

    echo $tr_open;
                echo $tdd_open; echo $asterisco;   echo $row_datos_controlmat['k_kkk']; echo $dos_puntos;  echo $tdd_close;
     echo $tr_close;

}



if ($row_datos_controlmat['k_kkk'] != '') { 

if ($row_datos_control_notasM11['d_11'] != '') {

$el_d_11 =  $row_datos_control_notasM11['d_11'];

include("../../conectar.php");
$query_indi_11 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_11'                       
               order by id_indicador limit 1" ;
$datos_control_indi_11 = mysqli_query($enlace, $query_indi_11) or die(mysqli_error());
$row_datos_control_indi_11 = mysqli_fetch_array($datos_control_indi_11); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_11['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM11_11_redon =  number_format($row_datos_control_notasM11['nt_11'], 0, '.', '');

if ($formato_eva_M11 == '3') {
 
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_1) { $r_d_c_nM11_11_r_p=$literal_formato_1; $r_d_c_nM11_11_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_2) { $r_d_c_nM11_11_r_p=$literal_formato_2; $r_d_c_nM11_11_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_3) { $r_d_c_nM11_11_r_p=$literal_formato_3; $r_d_c_nM11_11_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_4) { $r_d_c_nM11_11_r_p=$literal_formato_4; $r_d_c_nM11_11_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_5) { $r_d_c_nM11_11_r_p=$literal_formato_5; $r_d_c_nM11_11_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_6) { $r_d_c_nM11_11_r_p=$literal_formato_6; $r_d_c_nM11_11_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_7) { $r_d_c_nM11_11_r_p=$literal_formato_7; $r_d_c_nM11_11_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_8) { $r_d_c_nM11_11_r_p=$literal_formato_8; $r_d_c_nM11_11_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_9) { $r_d_c_nM11_11_r_p=$literal_formato_9; $r_d_c_nM11_11_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_10) {$r_d_c_nM11_11_r_p=$literal_formato_10; $r_d_c_nM11_11_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_11) {$r_d_c_nM11_11_r_p=$literal_formato_11; $r_d_c_nM11_11_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_12) {$r_d_c_nM11_11_r_p=$literal_formato_12; $r_d_c_nM11_11_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M11 == '4') {
 
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_1) { $r_d_c_nM11_11_r_p=$cualitativa_formato_1; $r_d_c_nM11_11_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_2) { $r_d_c_nM11_11_r_p=$cualitativa_formato_2; $r_d_c_nM11_11_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_3) { $r_d_c_nM11_11_r_p=$cualitativa_formato_3; $r_d_c_nM11_11_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_4) { $r_d_c_nM11_11_r_p=$cualitativa_formato_4; $r_d_c_nM11_11_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_5) { $r_d_c_nM11_11_r_p=$cualitativa_formato_5; $r_d_c_nM11_11_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_6) { $r_d_c_nM11_11_r_p=$cualitativa_formato_6; $r_d_c_nM11_11_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_7) { $r_d_c_nM11_11_r_p=$cualitativa_formato_7; $r_d_c_nM11_11_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_8) { $r_d_c_nM11_11_r_p=$cualitativa_formato_8; $r_d_c_nM11_11_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_9) { $r_d_c_nM11_11_r_p=$cualitativa_formato_9; $r_d_c_nM11_11_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_10) {$r_d_c_nM11_11_r_p=$cualitativa_formato_10; $r_d_c_nM11_11_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_11) {$r_d_c_nM11_11_r_p=$cualitativa_formato_11; $r_d_c_nM11_11_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM11_11_redon>=$comparativo_formato_12) {$r_d_c_nM11_11_r_p=$cualitativa_formato_12; $r_d_c_nM11_11_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM11['nt_11'] == '') { $r_d_c_nM11_11_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM11_11_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM11_11_r_p_co; echo $parent_close;

                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM11['d_12'] != '') {

$el_d_12 =  $row_datos_control_notasM11['d_12'];

include("../../conectar.php");
$query_indi_12 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_12'                     
               order by id_indicador limit 1" ;
$datos_control_indi_12 = mysqli_query($enlace, $query_indi_12) or die(mysqli_error());
$row_datos_control_indi_12 = mysqli_fetch_array($datos_control_indi_12); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_12['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM11_12_redon =  number_format($row_datos_control_notasM11['nt_12'], 0, '.', '');

if ($formato_eva_M11 == '3') {
 
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_1) { $r_d_c_nM11_12_r_p=$literal_formato_1; $r_d_c_nM11_12_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_2) { $r_d_c_nM11_12_r_p=$literal_formato_2; $r_d_c_nM11_12_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_3) { $r_d_c_nM11_12_r_p=$literal_formato_3; $r_d_c_nM11_12_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_4) { $r_d_c_nM11_12_r_p=$literal_formato_4; $r_d_c_nM11_12_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_5) { $r_d_c_nM11_12_r_p=$literal_formato_5; $r_d_c_nM11_12_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_6) { $r_d_c_nM11_12_r_p=$literal_formato_6; $r_d_c_nM11_12_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_7) { $r_d_c_nM11_12_r_p=$literal_formato_7; $r_d_c_nM11_12_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_8) { $r_d_c_nM11_12_r_p=$literal_formato_8; $r_d_c_nM11_12_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_9) { $r_d_c_nM11_12_r_p=$literal_formato_9; $r_d_c_nM11_12_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_10) {$r_d_c_nM11_12_r_p=$literal_formato_10; $r_d_c_nM11_12_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_11) {$r_d_c_nM11_12_r_p=$literal_formato_11; $r_d_c_nM11_12_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_12) {$r_d_c_nM11_12_r_p=$literal_formato_12; $r_d_c_nM11_12_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M11 == '4') {
 
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_1) { $r_d_c_nM11_12_r_p=$cualitativa_formato_1; $r_d_c_nM11_12_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_2) { $r_d_c_nM11_12_r_p=$cualitativa_formato_2; $r_d_c_nM11_12_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_3) { $r_d_c_nM11_12_r_p=$cualitativa_formato_3; $r_d_c_nM11_12_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_4) { $r_d_c_nM11_12_r_p=$cualitativa_formato_4; $r_d_c_nM11_12_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_5) { $r_d_c_nM11_12_r_p=$cualitativa_formato_5; $r_d_c_nM11_12_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_6) { $r_d_c_nM11_12_r_p=$cualitativa_formato_6; $r_d_c_nM11_12_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_7) { $r_d_c_nM11_12_r_p=$cualitativa_formato_7; $r_d_c_nM11_12_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_8) { $r_d_c_nM11_12_r_p=$cualitativa_formato_8; $r_d_c_nM11_12_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_9) { $r_d_c_nM11_12_r_p=$cualitativa_formato_9; $r_d_c_nM11_12_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_10) {$r_d_c_nM11_12_r_p=$cualitativa_formato_10; $r_d_c_nM11_12_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_11) {$r_d_c_nM11_12_r_p=$cualitativa_formato_11; $r_d_c_nM11_12_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM11_12_redon>=$comparativo_formato_12) {$r_d_c_nM11_12_r_p=$cualitativa_formato_12; $r_d_c_nM11_12_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM11['nt_12'] == '') { $r_d_c_nM11_12_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM11_12_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM11_12_r_p_co; echo $parent_close;

                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM11['d_13'] != '') {


$el_d_13 =  $row_datos_control_notasM11['d_13'];

include("../../conectar.php");
$query_indi_13 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_13'                     
               order by id_indicador limit 1" ;
$datos_control_indi_13 = mysqli_query($enlace, $query_indi_13) or die(mysqli_error());
$row_datos_control_indi_13 = mysqli_fetch_array($datos_control_indi_13); 
 
 mysqli_close($enlace);


echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_13['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
                                        $row_datos_control_notasM11_13_redon =  number_format($row_datos_control_notasM11['nt_13'], 0, '.', '');


if ($formato_eva_M11 == '3') {
 
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_1) { $r_d_c_nM11_13_r_p=$literal_formato_1; $r_d_c_nM11_13_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_2) { $r_d_c_nM11_13_r_p=$literal_formato_2; $r_d_c_nM11_13_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_3) { $r_d_c_nM11_13_r_p=$literal_formato_3; $r_d_c_nM11_13_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_4) { $r_d_c_nM11_13_r_p=$literal_formato_4; $r_d_c_nM11_13_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_5) { $r_d_c_nM11_13_r_p=$literal_formato_5; $r_d_c_nM11_13_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_6) { $r_d_c_nM11_13_r_p=$literal_formato_6; $r_d_c_nM11_13_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_7) { $r_d_c_nM11_13_r_p=$literal_formato_7; $r_d_c_nM11_13_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_8) { $r_d_c_nM11_13_r_p=$literal_formato_8; $r_d_c_nM11_13_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_9) { $r_d_c_nM11_13_r_p=$literal_formato_9; $r_d_c_nM11_13_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_10) {$r_d_c_nM11_13_r_p=$literal_formato_10; $r_d_c_nM11_13_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_11) {$r_d_c_nM11_13_r_p=$literal_formato_11; $r_d_c_nM11_13_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_12) {$r_d_c_nM11_13_r_p=$literal_formato_12; $r_d_c_nM11_13_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M11 == '4') {
 
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_1) { $r_d_c_nM11_13_r_p=$cualitativa_formato_1; $r_d_c_nM11_13_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_2) { $r_d_c_nM11_13_r_p=$cualitativa_formato_2; $r_d_c_nM11_13_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_3) { $r_d_c_nM11_13_r_p=$cualitativa_formato_3; $r_d_c_nM11_13_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_4) { $r_d_c_nM11_13_r_p=$cualitativa_formato_4; $r_d_c_nM11_13_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_5) { $r_d_c_nM11_13_r_p=$cualitativa_formato_5; $r_d_c_nM11_13_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_6) { $r_d_c_nM11_13_r_p=$cualitativa_formato_6; $r_d_c_nM11_13_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_7) { $r_d_c_nM11_13_r_p=$cualitativa_formato_7; $r_d_c_nM11_13_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_8) { $r_d_c_nM11_13_r_p=$cualitativa_formato_8; $r_d_c_nM11_13_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_9) { $r_d_c_nM11_13_r_p=$cualitativa_formato_9; $r_d_c_nM11_13_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_10) {$r_d_c_nM11_13_r_p=$cualitativa_formato_10; $r_d_c_nM11_13_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_11) {$r_d_c_nM11_13_r_p=$cualitativa_formato_11; $r_d_c_nM11_13_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM11_13_redon>=$comparativo_formato_12) {$r_d_c_nM11_13_r_p=$cualitativa_formato_12; $r_d_c_nM11_13_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM11['nt_13'] == '') { $r_d_c_nM11_13_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM11_13_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM11_13_r_p_co; echo $parent_close;
                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM11['d_14'] != '') {

$el_d_14 =  $row_datos_control_notasM11['d_14'];

include("../../conectar.php");
$query_indi_14 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_14'                     
               order by id_indicador limit 1" ;
$datos_control_indi_14 = mysqli_query($enlace, $query_indi_14) or die(mysqli_error());
$row_datos_control_indi_14 = mysqli_fetch_array($datos_control_indi_14); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_14['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM11_14_redon =  number_format($row_datos_control_notasM11['nt_14'], 0, '.', '');

if ($formato_eva_M11 == '3') {
 
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_1) { $r_d_c_nM11_14_r_p=$literal_formato_1; $r_d_c_nM11_14_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_2) { $r_d_c_nM11_14_r_p=$literal_formato_2; $r_d_c_nM11_14_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_3) { $r_d_c_nM11_14_r_p=$literal_formato_3; $r_d_c_nM11_14_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_4) { $r_d_c_nM11_14_r_p=$literal_formato_4; $r_d_c_nM11_14_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_5) { $r_d_c_nM11_14_r_p=$literal_formato_5; $r_d_c_nM11_14_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_6) { $r_d_c_nM11_14_r_p=$literal_formato_6; $r_d_c_nM11_14_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_7) { $r_d_c_nM11_14_r_p=$literal_formato_7; $r_d_c_nM11_14_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_8) { $r_d_c_nM11_14_r_p=$literal_formato_8; $r_d_c_nM11_14_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_9) { $r_d_c_nM11_14_r_p=$literal_formato_9; $r_d_c_nM11_14_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_10) {$r_d_c_nM11_14_r_p=$literal_formato_10; $r_d_c_nM11_14_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_11) {$r_d_c_nM11_14_r_p=$literal_formato_11; $r_d_c_nM11_14_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_12) {$r_d_c_nM11_14_r_p=$literal_formato_12; $r_d_c_nM11_14_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M11 == '4') {
 
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_1) { $r_d_c_nM11_14_r_p=$cualitativa_formato_1; $r_d_c_nM11_14_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_2) { $r_d_c_nM11_14_r_p=$cualitativa_formato_2; $r_d_c_nM11_14_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_3) { $r_d_c_nM11_14_r_p=$cualitativa_formato_3; $r_d_c_nM11_14_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_4) { $r_d_c_nM11_14_r_p=$cualitativa_formato_4; $r_d_c_nM11_14_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_5) { $r_d_c_nM11_14_r_p=$cualitativa_formato_5; $r_d_c_nM11_14_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_6) { $r_d_c_nM11_14_r_p=$cualitativa_formato_6; $r_d_c_nM11_14_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_7) { $r_d_c_nM11_14_r_p=$cualitativa_formato_7; $r_d_c_nM11_14_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_8) { $r_d_c_nM11_14_r_p=$cualitativa_formato_8; $r_d_c_nM11_14_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_9) { $r_d_c_nM11_14_r_p=$cualitativa_formato_9; $r_d_c_nM11_14_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_10) {$r_d_c_nM11_14_r_p=$cualitativa_formato_10; $r_d_c_nM11_14_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_11) {$r_d_c_nM11_14_r_p=$cualitativa_formato_11; $r_d_c_nM11_14_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM11_14_redon>=$comparativo_formato_12) {$r_d_c_nM11_14_r_p=$cualitativa_formato_12; $r_d_c_nM11_14_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM11['nt_14'] == '') { $r_d_c_nM11_14_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM11_14_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM11_14_r_p_co; echo $parent_close; 
                            echo $td_closeB;


  echo $tr_close;

}



if ($row_datos_control_notasM11['d_15'] != '') {

$el_d_15 =  $row_datos_control_notasM11['d_15'];

include("../../conectar.php");
$query_indi_15 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_15'                     
               order by id_indicador limit 1" ;
$datos_control_indi_15 = mysqli_query($enlace, $query_indi_15) or die(mysqli_error());
$row_datos_control_indi_15 = mysqli_fetch_array($datos_control_indi_15); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_15['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM11_15_redon =  number_format($row_datos_control_notasM11['nt_15'], 0, '.', '');
if ($formato_eva_M11 == '3') {
 
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_1) { $r_d_c_nM11_15_r_p=$literal_formato_1; $r_d_c_nM11_15_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_2) { $r_d_c_nM11_15_r_p=$literal_formato_2; $r_d_c_nM11_15_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_3) { $r_d_c_nM11_15_r_p=$literal_formato_3; $r_d_c_nM11_15_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_4) { $r_d_c_nM11_15_r_p=$literal_formato_4; $r_d_c_nM11_15_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_5) { $r_d_c_nM11_15_r_p=$literal_formato_5; $r_d_c_nM11_15_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_6) { $r_d_c_nM11_15_r_p=$literal_formato_6; $r_d_c_nM11_15_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_7) { $r_d_c_nM11_15_r_p=$literal_formato_7; $r_d_c_nM11_15_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_8) { $r_d_c_nM11_15_r_p=$literal_formato_8; $r_d_c_nM11_15_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_9) { $r_d_c_nM11_15_r_p=$literal_formato_9; $r_d_c_nM11_15_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_10) {$r_d_c_nM11_15_r_p=$literal_formato_10; $r_d_c_nM11_15_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_11) {$r_d_c_nM11_15_r_p=$literal_formato_11; $r_d_c_nM11_15_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_12) {$r_d_c_nM11_15_r_p=$literal_formato_12; $r_d_c_nM11_15_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M11 == '4') {
 
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_1) { $r_d_c_nM11_15_r_p=$cualitativa_formato_1; $r_d_c_nM11_15_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_2) { $r_d_c_nM11_15_r_p=$cualitativa_formato_2; $r_d_c_nM11_15_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_3) { $r_d_c_nM11_15_r_p=$cualitativa_formato_3; $r_d_c_nM11_15_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_4) { $r_d_c_nM11_15_r_p=$cualitativa_formato_4; $r_d_c_nM11_15_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_5) { $r_d_c_nM11_15_r_p=$cualitativa_formato_5; $r_d_c_nM11_15_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_6) { $r_d_c_nM11_15_r_p=$cualitativa_formato_6; $r_d_c_nM11_15_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_7) { $r_d_c_nM11_15_r_p=$cualitativa_formato_7; $r_d_c_nM11_15_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_8) { $r_d_c_nM11_15_r_p=$cualitativa_formato_8; $r_d_c_nM11_15_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_9) { $r_d_c_nM11_15_r_p=$cualitativa_formato_9; $r_d_c_nM11_15_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_10) {$r_d_c_nM11_15_r_p=$cualitativa_formato_10; $r_d_c_nM11_15_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_11) {$r_d_c_nM11_15_r_p=$cualitativa_formato_11; $r_d_c_nM11_15_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM11_15_redon>=$comparativo_formato_12) {$r_d_c_nM11_15_r_p=$cualitativa_formato_12; $r_d_c_nM11_15_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM11['nt_15'] == '') { $r_d_c_nM11_15_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM11_15_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM11_15_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}


if ($row_datos_control_notasM11['d_16'] != '') {

$el_d_16 =  $row_datos_control_notasM11['d_16'];

include("../../conectar.php");
$query_indi_16 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_16'                     
               order by id_indicador limit 1" ;
$datos_control_indi_16 = mysqli_query($enlace, $query_indi_16) or die(mysqli_error());
$row_datos_control_indi_16 = mysqli_fetch_array($datos_control_indi_16); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_16['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM11_16_redon =  number_format($row_datos_control_notasM11['nt_16'], 0, '.', '');
if ($formato_eva_M11 == '3') {
 
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_1) { $r_d_c_nM11_16_r_p=$literal_formato_1; $r_d_c_nM11_16_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_2) { $r_d_c_nM11_16_r_p=$literal_formato_2; $r_d_c_nM11_16_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_3) { $r_d_c_nM11_16_r_p=$literal_formato_3; $r_d_c_nM11_16_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_4) { $r_d_c_nM11_16_r_p=$literal_formato_4; $r_d_c_nM11_16_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_5) { $r_d_c_nM11_16_r_p=$literal_formato_5; $r_d_c_nM11_16_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_6) { $r_d_c_nM11_16_r_p=$literal_formato_6; $r_d_c_nM11_16_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_7) { $r_d_c_nM11_16_r_p=$literal_formato_7; $r_d_c_nM11_16_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_8) { $r_d_c_nM11_16_r_p=$literal_formato_8; $r_d_c_nM11_16_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_9) { $r_d_c_nM11_16_r_p=$literal_formato_9; $r_d_c_nM11_16_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_10) {$r_d_c_nM11_16_r_p=$literal_formato_10; $r_d_c_nM11_16_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_11) {$r_d_c_nM11_16_r_p=$literal_formato_11; $r_d_c_nM11_16_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_12) {$r_d_c_nM11_16_r_p=$literal_formato_12; $r_d_c_nM11_16_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M11 == '4') {
 
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_1) { $r_d_c_nM11_16_r_p=$cualitativa_formato_1; $r_d_c_nM11_16_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_2) { $r_d_c_nM11_16_r_p=$cualitativa_formato_2; $r_d_c_nM11_16_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_3) { $r_d_c_nM11_16_r_p=$cualitativa_formato_3; $r_d_c_nM11_16_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_4) { $r_d_c_nM11_16_r_p=$cualitativa_formato_4; $r_d_c_nM11_16_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_5) { $r_d_c_nM11_16_r_p=$cualitativa_formato_5; $r_d_c_nM11_16_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_6) { $r_d_c_nM11_16_r_p=$cualitativa_formato_6; $r_d_c_nM11_16_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_7) { $r_d_c_nM11_16_r_p=$cualitativa_formato_7; $r_d_c_nM11_16_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_8) { $r_d_c_nM11_16_r_p=$cualitativa_formato_8; $r_d_c_nM11_16_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_9) { $r_d_c_nM11_16_r_p=$cualitativa_formato_9; $r_d_c_nM11_16_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_10) {$r_d_c_nM11_16_r_p=$cualitativa_formato_10; $r_d_c_nM11_16_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_11) {$r_d_c_nM11_16_r_p=$cualitativa_formato_11; $r_d_c_nM11_16_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM11_16_redon>=$comparativo_formato_12) {$r_d_c_nM11_16_r_p=$cualitativa_formato_12; $r_d_c_nM11_16_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM11['nt_16'] == '') { $r_d_c_nM11_16_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM11_16_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM11_16_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM11['d_17'] != '') {

$el_d_17 =  $row_datos_control_notasM11['d_17'];

include("../../conectar.php");
$query_indi_17 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_17'                     
               order by id_indicador limit 1" ;
$datos_control_indi_17 = mysqli_query($enlace, $query_indi_17) or die(mysqli_error());
$row_datos_control_indi_17 = mysqli_fetch_array($datos_control_indi_17); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_17['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM11_17_redon =  number_format($row_datos_control_notasM11['nt_17'], 0, '.', '');
if ($formato_eva_M11 == '3') {
 
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_1) { $r_d_c_nM11_17_r_p=$literal_formato_1; $r_d_c_nM11_17_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_2) { $r_d_c_nM11_17_r_p=$literal_formato_2; $r_d_c_nM11_17_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_3) { $r_d_c_nM11_17_r_p=$literal_formato_3; $r_d_c_nM11_17_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_4) { $r_d_c_nM11_17_r_p=$literal_formato_4; $r_d_c_nM11_17_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_5) { $r_d_c_nM11_17_r_p=$literal_formato_5; $r_d_c_nM11_17_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_6) { $r_d_c_nM11_17_r_p=$literal_formato_6; $r_d_c_nM11_17_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_7) { $r_d_c_nM11_17_r_p=$literal_formato_7; $r_d_c_nM11_17_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_8) { $r_d_c_nM11_17_r_p=$literal_formato_8; $r_d_c_nM11_17_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_9) { $r_d_c_nM11_17_r_p=$literal_formato_9; $r_d_c_nM11_17_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_10) {$r_d_c_nM11_17_r_p=$literal_formato_10; $r_d_c_nM11_17_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_11) {$r_d_c_nM11_17_r_p=$literal_formato_11; $r_d_c_nM11_17_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_12) {$r_d_c_nM11_17_r_p=$literal_formato_12; $r_d_c_nM11_17_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M11 == '4') {
 
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_1) { $r_d_c_nM11_17_r_p=$cualitativa_formato_1; $r_d_c_nM11_17_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_2) { $r_d_c_nM11_17_r_p=$cualitativa_formato_2; $r_d_c_nM11_17_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_3) { $r_d_c_nM11_17_r_p=$cualitativa_formato_3; $r_d_c_nM11_17_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_4) { $r_d_c_nM11_17_r_p=$cualitativa_formato_4; $r_d_c_nM11_17_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_5) { $r_d_c_nM11_17_r_p=$cualitativa_formato_5; $r_d_c_nM11_17_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_6) { $r_d_c_nM11_17_r_p=$cualitativa_formato_6; $r_d_c_nM11_17_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_7) { $r_d_c_nM11_17_r_p=$cualitativa_formato_7; $r_d_c_nM11_17_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_8) { $r_d_c_nM11_17_r_p=$cualitativa_formato_8; $r_d_c_nM11_17_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_9) { $r_d_c_nM11_17_r_p=$cualitativa_formato_9; $r_d_c_nM11_17_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_10) {$r_d_c_nM11_17_r_p=$cualitativa_formato_10; $r_d_c_nM11_17_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_11) {$r_d_c_nM11_17_r_p=$cualitativa_formato_11; $r_d_c_nM11_17_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM11_17_redon>=$comparativo_formato_12) {$r_d_c_nM11_17_r_p=$cualitativa_formato_12; $r_d_c_nM11_17_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM11['nt_17'] == '') { $r_d_c_nM11_17_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM11_17_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM11_17_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}
}









if ($row_datos_controlmat['l_lll'] != '') {

    echo $tr_open;
                echo $tdd_open; echo $asterisco;   echo $row_datos_controlmat['l_lll']; echo $dos_puntos;  echo $tdd_close;
     echo $tr_close;

}




if ($row_datos_controlmat['l_lll'] != '') { 

if ($row_datos_control_notasM12['d_11'] != '') {

$el_d_11 =  $row_datos_control_notasM12['d_11'];

include("../../conectar.php");
$query_indi_11 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_11'                       
               order by id_indicador limit 1" ;
$datos_control_indi_11 = mysqli_query($enlace, $query_indi_11) or die(mysqli_error());
$row_datos_control_indi_11 = mysqli_fetch_array($datos_control_indi_11); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_11['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM12_11_redon =  number_format($row_datos_control_notasM12['nt_11'], 0, '.', '');

if ($formato_eva_M12 == '3') {
 
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_1) { $r_d_c_nM12_11_r_p=$literal_formato_1; $r_d_c_nM12_11_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_2) { $r_d_c_nM12_11_r_p=$literal_formato_2; $r_d_c_nM12_11_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_3) { $r_d_c_nM12_11_r_p=$literal_formato_3; $r_d_c_nM12_11_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_4) { $r_d_c_nM12_11_r_p=$literal_formato_4; $r_d_c_nM12_11_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_5) { $r_d_c_nM12_11_r_p=$literal_formato_5; $r_d_c_nM12_11_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_6) { $r_d_c_nM12_11_r_p=$literal_formato_6; $r_d_c_nM12_11_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_7) { $r_d_c_nM12_11_r_p=$literal_formato_7; $r_d_c_nM12_11_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_8) { $r_d_c_nM12_11_r_p=$literal_formato_8; $r_d_c_nM12_11_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_9) { $r_d_c_nM12_11_r_p=$literal_formato_9; $r_d_c_nM12_11_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_10) {$r_d_c_nM12_11_r_p=$literal_formato_10; $r_d_c_nM12_11_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_11) {$r_d_c_nM12_11_r_p=$literal_formato_11; $r_d_c_nM12_11_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_12) {$r_d_c_nM12_11_r_p=$literal_formato_12; $r_d_c_nM12_11_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M12 == '4') {
 
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_1) { $r_d_c_nM12_11_r_p=$cualitativa_formato_1; $r_d_c_nM12_11_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_2) { $r_d_c_nM12_11_r_p=$cualitativa_formato_2; $r_d_c_nM12_11_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_3) { $r_d_c_nM12_11_r_p=$cualitativa_formato_3; $r_d_c_nM12_11_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_4) { $r_d_c_nM12_11_r_p=$cualitativa_formato_4; $r_d_c_nM12_11_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_5) { $r_d_c_nM12_11_r_p=$cualitativa_formato_5; $r_d_c_nM12_11_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_6) { $r_d_c_nM12_11_r_p=$cualitativa_formato_6; $r_d_c_nM12_11_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_7) { $r_d_c_nM12_11_r_p=$cualitativa_formato_7; $r_d_c_nM12_11_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_8) { $r_d_c_nM12_11_r_p=$cualitativa_formato_8; $r_d_c_nM12_11_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_9) { $r_d_c_nM12_11_r_p=$cualitativa_formato_9; $r_d_c_nM12_11_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_10) {$r_d_c_nM12_11_r_p=$cualitativa_formato_10; $r_d_c_nM12_11_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_11) {$r_d_c_nM12_11_r_p=$cualitativa_formato_11; $r_d_c_nM12_11_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM12_11_redon>=$comparativo_formato_12) {$r_d_c_nM12_11_r_p=$cualitativa_formato_12; $r_d_c_nM12_11_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM12['nt_11'] == '') { $r_d_c_nM12_11_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM12_11_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM12_11_r_p_co; echo $parent_close;

                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM12['d_12'] != '') {

$el_d_12 =  $row_datos_control_notasM12['d_12'];

include("../../conectar.php");
$query_indi_12 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_12'                     
               order by id_indicador limit 1" ;
$datos_control_indi_12 = mysqli_query($enlace, $query_indi_12) or die(mysqli_error());
$row_datos_control_indi_12 = mysqli_fetch_array($datos_control_indi_12); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_12['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM12_12_redon =  number_format($row_datos_control_notasM12['nt_12'], 0, '.', '');

if ($formato_eva_M12 == '3') {
 
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_1) { $r_d_c_nM12_12_r_p=$literal_formato_1; $r_d_c_nM12_12_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_2) { $r_d_c_nM12_12_r_p=$literal_formato_2; $r_d_c_nM12_12_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_3) { $r_d_c_nM12_12_r_p=$literal_formato_3; $r_d_c_nM12_12_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_4) { $r_d_c_nM12_12_r_p=$literal_formato_4; $r_d_c_nM12_12_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_5) { $r_d_c_nM12_12_r_p=$literal_formato_5; $r_d_c_nM12_12_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_6) { $r_d_c_nM12_12_r_p=$literal_formato_6; $r_d_c_nM12_12_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_7) { $r_d_c_nM12_12_r_p=$literal_formato_7; $r_d_c_nM12_12_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_8) { $r_d_c_nM12_12_r_p=$literal_formato_8; $r_d_c_nM12_12_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_9) { $r_d_c_nM12_12_r_p=$literal_formato_9; $r_d_c_nM12_12_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_10) {$r_d_c_nM12_12_r_p=$literal_formato_10; $r_d_c_nM12_12_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_11) {$r_d_c_nM12_12_r_p=$literal_formato_11; $r_d_c_nM12_12_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_12) {$r_d_c_nM12_12_r_p=$literal_formato_12; $r_d_c_nM12_12_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M12 == '4') {
 
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_1) { $r_d_c_nM12_12_r_p=$cualitativa_formato_1; $r_d_c_nM12_12_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_2) { $r_d_c_nM12_12_r_p=$cualitativa_formato_2; $r_d_c_nM12_12_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_3) { $r_d_c_nM12_12_r_p=$cualitativa_formato_3; $r_d_c_nM12_12_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_4) { $r_d_c_nM12_12_r_p=$cualitativa_formato_4; $r_d_c_nM12_12_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_5) { $r_d_c_nM12_12_r_p=$cualitativa_formato_5; $r_d_c_nM12_12_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_6) { $r_d_c_nM12_12_r_p=$cualitativa_formato_6; $r_d_c_nM12_12_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_7) { $r_d_c_nM12_12_r_p=$cualitativa_formato_7; $r_d_c_nM12_12_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_8) { $r_d_c_nM12_12_r_p=$cualitativa_formato_8; $r_d_c_nM12_12_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_9) { $r_d_c_nM12_12_r_p=$cualitativa_formato_9; $r_d_c_nM12_12_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_10) {$r_d_c_nM12_12_r_p=$cualitativa_formato_10; $r_d_c_nM12_12_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_11) {$r_d_c_nM12_12_r_p=$cualitativa_formato_11; $r_d_c_nM12_12_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM12_12_redon>=$comparativo_formato_12) {$r_d_c_nM12_12_r_p=$cualitativa_formato_12; $r_d_c_nM12_12_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM12['nt_12'] == '') { $r_d_c_nM12_12_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM12_12_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM12_12_r_p_co; echo $parent_close;

                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM12['d_13'] != '') {


$el_d_13 =  $row_datos_control_notasM12['d_13'];

include("../../conectar.php");
$query_indi_13 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_13'                     
               order by id_indicador limit 1" ;
$datos_control_indi_13 = mysqli_query($enlace, $query_indi_13) or die(mysqli_error());
$row_datos_control_indi_13 = mysqli_fetch_array($datos_control_indi_13); 
 
 mysqli_close($enlace);


echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_13['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
                                        $row_datos_control_notasM12_13_redon =  number_format($row_datos_control_notasM12['nt_13'], 0, '.', '');

if ($formato_eva_M12 == '3') {
 
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_1) { $r_d_c_nM12_13_r_p=$literal_formato_1; $r_d_c_nM12_13_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_2) { $r_d_c_nM12_13_r_p=$literal_formato_2; $r_d_c_nM12_13_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_3) { $r_d_c_nM12_13_r_p=$literal_formato_3; $r_d_c_nM12_13_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_4) { $r_d_c_nM12_13_r_p=$literal_formato_4; $r_d_c_nM12_13_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_5) { $r_d_c_nM12_13_r_p=$literal_formato_5; $r_d_c_nM12_13_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_6) { $r_d_c_nM12_13_r_p=$literal_formato_6; $r_d_c_nM12_13_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_7) { $r_d_c_nM12_13_r_p=$literal_formato_7; $r_d_c_nM12_13_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_8) { $r_d_c_nM12_13_r_p=$literal_formato_8; $r_d_c_nM12_13_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_9) { $r_d_c_nM12_13_r_p=$literal_formato_9; $r_d_c_nM12_13_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_10) {$r_d_c_nM12_13_r_p=$literal_formato_10; $r_d_c_nM12_13_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_11) {$r_d_c_nM12_13_r_p=$literal_formato_11; $r_d_c_nM12_13_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_12) {$r_d_c_nM12_13_r_p=$literal_formato_12; $r_d_c_nM12_13_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M12 == '4') {
 
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_1) { $r_d_c_nM12_13_r_p=$cualitativa_formato_1; $r_d_c_nM12_13_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_2) { $r_d_c_nM12_13_r_p=$cualitativa_formato_2; $r_d_c_nM12_13_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_3) { $r_d_c_nM12_13_r_p=$cualitativa_formato_3; $r_d_c_nM12_13_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_4) { $r_d_c_nM12_13_r_p=$cualitativa_formato_4; $r_d_c_nM12_13_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_5) { $r_d_c_nM12_13_r_p=$cualitativa_formato_5; $r_d_c_nM12_13_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_6) { $r_d_c_nM12_13_r_p=$cualitativa_formato_6; $r_d_c_nM12_13_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_7) { $r_d_c_nM12_13_r_p=$cualitativa_formato_7; $r_d_c_nM12_13_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_8) { $r_d_c_nM12_13_r_p=$cualitativa_formato_8; $r_d_c_nM12_13_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_9) { $r_d_c_nM12_13_r_p=$cualitativa_formato_9; $r_d_c_nM12_13_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_10) {$r_d_c_nM12_13_r_p=$cualitativa_formato_10; $r_d_c_nM12_13_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_11) {$r_d_c_nM12_13_r_p=$cualitativa_formato_11; $r_d_c_nM12_13_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM12_13_redon>=$comparativo_formato_12) {$r_d_c_nM12_13_r_p=$cualitativa_formato_12; $r_d_c_nM12_13_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM12['nt_13'] == '') { $r_d_c_nM12_13_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM12_13_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM12_13_r_p_co; echo $parent_close;
                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM12['d_14'] != '') {

$el_d_14 =  $row_datos_control_notasM12['d_14'];

include("../../conectar.php");
$query_indi_14 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_14'                     
               order by id_indicador limit 1" ;
$datos_control_indi_14 = mysqli_query($enlace, $query_indi_14) or die(mysqli_error());
$row_datos_control_indi_14 = mysqli_fetch_array($datos_control_indi_14); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_14['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM12_14_redon =  number_format($row_datos_control_notasM12['nt_14'], 0, '.', '');

if ($formato_eva_M12 == '3') {
 
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_1) { $r_d_c_nM12_14_r_p=$literal_formato_1; $r_d_c_nM12_14_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_2) { $r_d_c_nM12_14_r_p=$literal_formato_2; $r_d_c_nM12_14_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_3) { $r_d_c_nM12_14_r_p=$literal_formato_3; $r_d_c_nM12_14_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_4) { $r_d_c_nM12_14_r_p=$literal_formato_4; $r_d_c_nM12_14_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_5) { $r_d_c_nM12_14_r_p=$literal_formato_5; $r_d_c_nM12_14_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_6) { $r_d_c_nM12_14_r_p=$literal_formato_6; $r_d_c_nM12_14_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_7) { $r_d_c_nM12_14_r_p=$literal_formato_7; $r_d_c_nM12_14_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_8) { $r_d_c_nM12_14_r_p=$literal_formato_8; $r_d_c_nM12_14_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_9) { $r_d_c_nM12_14_r_p=$literal_formato_9; $r_d_c_nM12_14_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_10) {$r_d_c_nM12_14_r_p=$literal_formato_10; $r_d_c_nM12_14_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_11) {$r_d_c_nM12_14_r_p=$literal_formato_11; $r_d_c_nM12_14_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_12) {$r_d_c_nM12_14_r_p=$literal_formato_12; $r_d_c_nM12_14_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M12 == '4') {
 
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_1) { $r_d_c_nM12_14_r_p=$cualitativa_formato_1; $r_d_c_nM12_14_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_2) { $r_d_c_nM12_14_r_p=$cualitativa_formato_2; $r_d_c_nM12_14_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_3) { $r_d_c_nM12_14_r_p=$cualitativa_formato_3; $r_d_c_nM12_14_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_4) { $r_d_c_nM12_14_r_p=$cualitativa_formato_4; $r_d_c_nM12_14_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_5) { $r_d_c_nM12_14_r_p=$cualitativa_formato_5; $r_d_c_nM12_14_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_6) { $r_d_c_nM12_14_r_p=$cualitativa_formato_6; $r_d_c_nM12_14_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_7) { $r_d_c_nM12_14_r_p=$cualitativa_formato_7; $r_d_c_nM12_14_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_8) { $r_d_c_nM12_14_r_p=$cualitativa_formato_8; $r_d_c_nM12_14_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_9) { $r_d_c_nM12_14_r_p=$cualitativa_formato_9; $r_d_c_nM12_14_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_10) {$r_d_c_nM12_14_r_p=$cualitativa_formato_10; $r_d_c_nM12_14_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_11) {$r_d_c_nM12_14_r_p=$cualitativa_formato_11; $r_d_c_nM12_14_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM12_14_redon>=$comparativo_formato_12) {$r_d_c_nM12_14_r_p=$cualitativa_formato_12; $r_d_c_nM12_14_r_p_co = $cualitativa_formato_12_completo;} 

}


if ($row_datos_control_notasM12['nt_14'] == '') { $r_d_c_nM12_14_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM12_14_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM12_14_r_p_co; echo $parent_close; 
                            echo $td_closeB;


  echo $tr_close;

}



if ($row_datos_control_notasM12['d_15'] != '') {

$el_d_15 =  $row_datos_control_notasM12['d_15'];

include("../../conectar.php");
$query_indi_15 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_15'                     
               order by id_indicador limit 1" ;
$datos_control_indi_15 = mysqli_query($enlace, $query_indi_15) or die(mysqli_error());
$row_datos_control_indi_15 = mysqli_fetch_array($datos_control_indi_15); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_15['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM12_15_redon =  number_format($row_datos_control_notasM12['nt_15'], 0, '.', '');
if ($formato_eva_M12 == '3') {
 
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_1) { $r_d_c_nM12_15_r_p=$literal_formato_1; $r_d_c_nM12_15_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_2) { $r_d_c_nM12_15_r_p=$literal_formato_2; $r_d_c_nM12_15_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_3) { $r_d_c_nM12_15_r_p=$literal_formato_3; $r_d_c_nM12_15_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_4) { $r_d_c_nM12_15_r_p=$literal_formato_4; $r_d_c_nM12_15_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_5) { $r_d_c_nM12_15_r_p=$literal_formato_5; $r_d_c_nM12_15_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_6) { $r_d_c_nM12_15_r_p=$literal_formato_6; $r_d_c_nM12_15_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_7) { $r_d_c_nM12_15_r_p=$literal_formato_7; $r_d_c_nM12_15_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_8) { $r_d_c_nM12_15_r_p=$literal_formato_8; $r_d_c_nM12_15_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_9) { $r_d_c_nM12_15_r_p=$literal_formato_9; $r_d_c_nM12_15_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_10) {$r_d_c_nM12_15_r_p=$literal_formato_10; $r_d_c_nM12_15_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_11) {$r_d_c_nM12_15_r_p=$literal_formato_11; $r_d_c_nM12_15_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_12) {$r_d_c_nM12_15_r_p=$literal_formato_12; $r_d_c_nM12_15_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M12 == '4') {
 
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_1) { $r_d_c_nM12_15_r_p=$cualitativa_formato_1; $r_d_c_nM12_15_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_2) { $r_d_c_nM12_15_r_p=$cualitativa_formato_2; $r_d_c_nM12_15_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_3) { $r_d_c_nM12_15_r_p=$cualitativa_formato_3; $r_d_c_nM12_15_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_4) { $r_d_c_nM12_15_r_p=$cualitativa_formato_4; $r_d_c_nM12_15_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_5) { $r_d_c_nM12_15_r_p=$cualitativa_formato_5; $r_d_c_nM12_15_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_6) { $r_d_c_nM12_15_r_p=$cualitativa_formato_6; $r_d_c_nM12_15_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_7) { $r_d_c_nM12_15_r_p=$cualitativa_formato_7; $r_d_c_nM12_15_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_8) { $r_d_c_nM12_15_r_p=$cualitativa_formato_8; $r_d_c_nM12_15_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_9) { $r_d_c_nM12_15_r_p=$cualitativa_formato_9; $r_d_c_nM12_15_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_10) {$r_d_c_nM12_15_r_p=$cualitativa_formato_10; $r_d_c_nM12_15_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_11) {$r_d_c_nM12_15_r_p=$cualitativa_formato_11; $r_d_c_nM12_15_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM12_15_redon>=$comparativo_formato_12) {$r_d_c_nM12_15_r_p=$cualitativa_formato_12; $r_d_c_nM12_15_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM12['nt_15'] == '') { $r_d_c_nM12_15_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM12_15_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM12_15_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}


if ($row_datos_control_notasM12['d_16'] != '') {

$el_d_16 =  $row_datos_control_notasM12['d_16'];

include("../../conectar.php");
$query_indi_16 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_16'                     
               order by id_indicador limit 1" ;
$datos_control_indi_16 = mysqli_query($enlace, $query_indi_16) or die(mysqli_error());
$row_datos_control_indi_16 = mysqli_fetch_array($datos_control_indi_16); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_16['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM12_16_redon =  number_format($row_datos_control_notasM12['nt_16'], 0, '.', '');
if ($formato_eva_M12 == '3') {
 
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_1) { $r_d_c_nM12_16_r_p=$literal_formato_1; $r_d_c_nM12_16_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_2) { $r_d_c_nM12_16_r_p=$literal_formato_2; $r_d_c_nM12_16_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_3) { $r_d_c_nM12_16_r_p=$literal_formato_3; $r_d_c_nM12_16_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_4) { $r_d_c_nM12_16_r_p=$literal_formato_4; $r_d_c_nM12_16_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_5) { $r_d_c_nM12_16_r_p=$literal_formato_5; $r_d_c_nM12_16_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_6) { $r_d_c_nM12_16_r_p=$literal_formato_6; $r_d_c_nM12_16_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_7) { $r_d_c_nM12_16_r_p=$literal_formato_7; $r_d_c_nM12_16_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_8) { $r_d_c_nM12_16_r_p=$literal_formato_8; $r_d_c_nM12_16_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_9) { $r_d_c_nM12_16_r_p=$literal_formato_9; $r_d_c_nM12_16_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_10) {$r_d_c_nM12_16_r_p=$literal_formato_10; $r_d_c_nM12_16_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_11) {$r_d_c_nM12_16_r_p=$literal_formato_11; $r_d_c_nM12_16_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_12) {$r_d_c_nM12_16_r_p=$literal_formato_12; $r_d_c_nM12_16_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M12 == '4') {
 
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_1) { $r_d_c_nM12_16_r_p=$cualitativa_formato_1; $r_d_c_nM12_16_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_2) { $r_d_c_nM12_16_r_p=$cualitativa_formato_2; $r_d_c_nM12_16_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_3) { $r_d_c_nM12_16_r_p=$cualitativa_formato_3; $r_d_c_nM12_16_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_4) { $r_d_c_nM12_16_r_p=$cualitativa_formato_4; $r_d_c_nM12_16_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_5) { $r_d_c_nM12_16_r_p=$cualitativa_formato_5; $r_d_c_nM12_16_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_6) { $r_d_c_nM12_16_r_p=$cualitativa_formato_6; $r_d_c_nM12_16_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_7) { $r_d_c_nM12_16_r_p=$cualitativa_formato_7; $r_d_c_nM12_16_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_8) { $r_d_c_nM12_16_r_p=$cualitativa_formato_8; $r_d_c_nM12_16_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_9) { $r_d_c_nM12_16_r_p=$cualitativa_formato_9; $r_d_c_nM12_16_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_10) {$r_d_c_nM12_16_r_p=$cualitativa_formato_10; $r_d_c_nM12_16_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_11) {$r_d_c_nM12_16_r_p=$cualitativa_formato_11; $r_d_c_nM12_16_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM12_16_redon>=$comparativo_formato_12) {$r_d_c_nM12_16_r_p=$cualitativa_formato_12; $r_d_c_nM12_16_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM12['nt_16'] == '') { $r_d_c_nM12_16_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM12_16_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM12_16_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM12['d_17'] != '') {

$el_d_17 =  $row_datos_control_notasM12['d_17'];

include("../../conectar.php");
$query_indi_17 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_17'                     
               order by id_indicador limit 1" ;
$datos_control_indi_17 = mysqli_query($enlace, $query_indi_17) or die(mysqli_error());
$row_datos_control_indi_17 = mysqli_fetch_array($datos_control_indi_17); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_17['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM12_17_redon =  number_format($row_datos_control_notasM12['nt_17'], 0, '.', '');
if ($formato_eva_M12 == '3') {
 
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_1) { $r_d_c_nM12_17_r_p=$literal_formato_1; $r_d_c_nM12_17_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_2) { $r_d_c_nM12_17_r_p=$literal_formato_2; $r_d_c_nM12_17_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_3) { $r_d_c_nM12_17_r_p=$literal_formato_3; $r_d_c_nM12_17_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_4) { $r_d_c_nM12_17_r_p=$literal_formato_4; $r_d_c_nM12_17_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_5) { $r_d_c_nM12_17_r_p=$literal_formato_5; $r_d_c_nM12_17_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_6) { $r_d_c_nM12_17_r_p=$literal_formato_6; $r_d_c_nM12_17_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_7) { $r_d_c_nM12_17_r_p=$literal_formato_7; $r_d_c_nM12_17_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_8) { $r_d_c_nM12_17_r_p=$literal_formato_8; $r_d_c_nM12_17_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_9) { $r_d_c_nM12_17_r_p=$literal_formato_9; $r_d_c_nM12_17_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_10) {$r_d_c_nM12_17_r_p=$literal_formato_10; $r_d_c_nM12_17_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_11) {$r_d_c_nM12_17_r_p=$literal_formato_11; $r_d_c_nM12_17_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_12) {$r_d_c_nM12_17_r_p=$literal_formato_12; $r_d_c_nM12_17_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M12 == '4') {
 
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_1) { $r_d_c_nM12_17_r_p=$cualitativa_formato_1; $r_d_c_nM12_17_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_2) { $r_d_c_nM12_17_r_p=$cualitativa_formato_2; $r_d_c_nM12_17_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_3) { $r_d_c_nM12_17_r_p=$cualitativa_formato_3; $r_d_c_nM12_17_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_4) { $r_d_c_nM12_17_r_p=$cualitativa_formato_4; $r_d_c_nM12_17_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_5) { $r_d_c_nM12_17_r_p=$cualitativa_formato_5; $r_d_c_nM12_17_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_6) { $r_d_c_nM12_17_r_p=$cualitativa_formato_6; $r_d_c_nM12_17_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_7) { $r_d_c_nM12_17_r_p=$cualitativa_formato_7; $r_d_c_nM12_17_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_8) { $r_d_c_nM12_17_r_p=$cualitativa_formato_8; $r_d_c_nM12_17_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_9) { $r_d_c_nM12_17_r_p=$cualitativa_formato_9; $r_d_c_nM12_17_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_10) {$r_d_c_nM12_17_r_p=$cualitativa_formato_10; $r_d_c_nM12_17_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_11) {$r_d_c_nM12_17_r_p=$cualitativa_formato_11; $r_d_c_nM12_17_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM12_17_redon>=$comparativo_formato_12) {$r_d_c_nM12_17_r_p=$cualitativa_formato_12; $r_d_c_nM12_17_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM12['nt_17'] == '') { $r_d_c_nM12_17_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM12_17_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM12_17_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}
}











if ($row_datos_controlmat['m_mmm'] != '') {

    echo $tr_open;
                echo $tdd_open; echo $asterisco;   echo $row_datos_controlmat['m_mmm']; echo $dos_puntos;  echo $tdd_close;
     echo $tr_close;

}





if ($row_datos_controlmat['m_mmm'] != '') { 

if ($row_datos_control_notasM13['d_11'] != '') {

$el_d_11 =  $row_datos_control_notasM13['d_11'];

include("../../conectar.php");
$query_indi_11 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_11'                       
               order by id_indicador limit 1" ;
$datos_control_indi_11 = mysqli_query($enlace, $query_indi_11) or die(mysqli_error());
$row_datos_control_indi_11 = mysqli_fetch_array($datos_control_indi_11); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_11['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM13_11_redon =  number_format($row_datos_control_notasM13['nt_11'], 0, '.', '');

if ($formato_eva_M13 == '3') {
 
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_1) { $r_d_c_nM13_11_r_p=$literal_formato_1; $r_d_c_nM13_11_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_2) { $r_d_c_nM13_11_r_p=$literal_formato_2; $r_d_c_nM13_11_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_3) { $r_d_c_nM13_11_r_p=$literal_formato_3; $r_d_c_nM13_11_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_4) { $r_d_c_nM13_11_r_p=$literal_formato_4; $r_d_c_nM13_11_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_5) { $r_d_c_nM13_11_r_p=$literal_formato_5; $r_d_c_nM13_11_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_6) { $r_d_c_nM13_11_r_p=$literal_formato_6; $r_d_c_nM13_11_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_7) { $r_d_c_nM13_11_r_p=$literal_formato_7; $r_d_c_nM13_11_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_8) { $r_d_c_nM13_11_r_p=$literal_formato_8; $r_d_c_nM13_11_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_9) { $r_d_c_nM13_11_r_p=$literal_formato_9; $r_d_c_nM13_11_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_10) {$r_d_c_nM13_11_r_p=$literal_formato_10; $r_d_c_nM13_11_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_11) {$r_d_c_nM13_11_r_p=$literal_formato_11; $r_d_c_nM13_11_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_12) {$r_d_c_nM13_11_r_p=$literal_formato_12; $r_d_c_nM13_11_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M13 == '4') {
 
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_1) { $r_d_c_nM13_11_r_p=$cualitativa_formato_1; $r_d_c_nM13_11_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_2) { $r_d_c_nM13_11_r_p=$cualitativa_formato_2; $r_d_c_nM13_11_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_3) { $r_d_c_nM13_11_r_p=$cualitativa_formato_3; $r_d_c_nM13_11_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_4) { $r_d_c_nM13_11_r_p=$cualitativa_formato_4; $r_d_c_nM13_11_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_5) { $r_d_c_nM13_11_r_p=$cualitativa_formato_5; $r_d_c_nM13_11_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_6) { $r_d_c_nM13_11_r_p=$cualitativa_formato_6; $r_d_c_nM13_11_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_7) { $r_d_c_nM13_11_r_p=$cualitativa_formato_7; $r_d_c_nM13_11_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_8) { $r_d_c_nM13_11_r_p=$cualitativa_formato_8; $r_d_c_nM13_11_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_9) { $r_d_c_nM13_11_r_p=$cualitativa_formato_9; $r_d_c_nM13_11_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_10) {$r_d_c_nM13_11_r_p=$cualitativa_formato_10; $r_d_c_nM13_11_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_11) {$r_d_c_nM13_11_r_p=$cualitativa_formato_11; $r_d_c_nM13_11_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM13_11_redon>=$comparativo_formato_12) {$r_d_c_nM13_11_r_p=$cualitativa_formato_12; $r_d_c_nM13_11_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM13['nt_11'] == '') { $r_d_c_nM13_11_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM13_11_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM13_11_r_p_co; echo $parent_close;

                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM13['d_12'] != '') {

$el_d_12 =  $row_datos_control_notasM13['d_12'];

include("../../conectar.php");
$query_indi_12 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_12'                     
               order by id_indicador limit 1" ;
$datos_control_indi_12 = mysqli_query($enlace, $query_indi_12) or die(mysqli_error());
$row_datos_control_indi_12 = mysqli_fetch_array($datos_control_indi_12); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_12['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM13_12_redon =  number_format($row_datos_control_notasM13['nt_12'], 0, '.', '');

if ($formato_eva_M13 == '3') {
 
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_1) { $r_d_c_nM13_12_r_p=$literal_formato_1; $r_d_c_nM13_12_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_2) { $r_d_c_nM13_12_r_p=$literal_formato_2; $r_d_c_nM13_12_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_3) { $r_d_c_nM13_12_r_p=$literal_formato_3; $r_d_c_nM13_12_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_4) { $r_d_c_nM13_12_r_p=$literal_formato_4; $r_d_c_nM13_12_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_5) { $r_d_c_nM13_12_r_p=$literal_formato_5; $r_d_c_nM13_12_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_6) { $r_d_c_nM13_12_r_p=$literal_formato_6; $r_d_c_nM13_12_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_7) { $r_d_c_nM13_12_r_p=$literal_formato_7; $r_d_c_nM13_12_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_8) { $r_d_c_nM13_12_r_p=$literal_formato_8; $r_d_c_nM13_12_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_9) { $r_d_c_nM13_12_r_p=$literal_formato_9; $r_d_c_nM13_12_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_10) {$r_d_c_nM13_12_r_p=$literal_formato_10; $r_d_c_nM13_12_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_11) {$r_d_c_nM13_12_r_p=$literal_formato_11; $r_d_c_nM13_12_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_12) {$r_d_c_nM13_12_r_p=$literal_formato_12; $r_d_c_nM13_12_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M13 == '4') {
 
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_1) { $r_d_c_nM13_12_r_p=$cualitativa_formato_1; $r_d_c_nM13_12_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_2) { $r_d_c_nM13_12_r_p=$cualitativa_formato_2; $r_d_c_nM13_12_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_3) { $r_d_c_nM13_12_r_p=$cualitativa_formato_3; $r_d_c_nM13_12_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_4) { $r_d_c_nM13_12_r_p=$cualitativa_formato_4; $r_d_c_nM13_12_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_5) { $r_d_c_nM13_12_r_p=$cualitativa_formato_5; $r_d_c_nM13_12_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_6) { $r_d_c_nM13_12_r_p=$cualitativa_formato_6; $r_d_c_nM13_12_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_7) { $r_d_c_nM13_12_r_p=$cualitativa_formato_7; $r_d_c_nM13_12_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_8) { $r_d_c_nM13_12_r_p=$cualitativa_formato_8; $r_d_c_nM13_12_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_9) { $r_d_c_nM13_12_r_p=$cualitativa_formato_9; $r_d_c_nM13_12_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_10) {$r_d_c_nM13_12_r_p=$cualitativa_formato_10; $r_d_c_nM13_12_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_11) {$r_d_c_nM13_12_r_p=$cualitativa_formato_11; $r_d_c_nM13_12_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM13_12_redon>=$comparativo_formato_12) {$r_d_c_nM13_12_r_p=$cualitativa_formato_12; $r_d_c_nM13_12_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM13['nt_12'] == '') { $r_d_c_nM13_12_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM13_12_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM13_12_r_p_co; echo $parent_close;

                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM13['d_13'] != '') {


$el_d_13 =  $row_datos_control_notasM13['d_13'];

include("../../conectar.php");
$query_indi_13 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_13'                     
               order by id_indicador limit 1" ;
$datos_control_indi_13 = mysqli_query($enlace, $query_indi_13) or die(mysqli_error());
$row_datos_control_indi_13 = mysqli_fetch_array($datos_control_indi_13); 
 
 mysqli_close($enlace);


echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_13['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
                                        $row_datos_control_notasM13_13_redon =  number_format($row_datos_control_notasM13['nt_13'], 0, '.', '');

if ($formato_eva_M13 == '3') {
 
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_1) { $r_d_c_nM13_13_r_p=$literal_formato_1; $r_d_c_nM13_13_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_2) { $r_d_c_nM13_13_r_p=$literal_formato_2; $r_d_c_nM13_13_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_3) { $r_d_c_nM13_13_r_p=$literal_formato_3; $r_d_c_nM13_13_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_4) { $r_d_c_nM13_13_r_p=$literal_formato_4; $r_d_c_nM13_13_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_5) { $r_d_c_nM13_13_r_p=$literal_formato_5; $r_d_c_nM13_13_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_6) { $r_d_c_nM13_13_r_p=$literal_formato_6; $r_d_c_nM13_13_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_7) { $r_d_c_nM13_13_r_p=$literal_formato_7; $r_d_c_nM13_13_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_8) { $r_d_c_nM13_13_r_p=$literal_formato_8; $r_d_c_nM13_13_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_9) { $r_d_c_nM13_13_r_p=$literal_formato_9; $r_d_c_nM13_13_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_10) {$r_d_c_nM13_13_r_p=$literal_formato_10; $r_d_c_nM13_13_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_11) {$r_d_c_nM13_13_r_p=$literal_formato_11; $r_d_c_nM13_13_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_12) {$r_d_c_nM13_13_r_p=$literal_formato_12; $r_d_c_nM13_13_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M13 == '4') {
 
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_1) { $r_d_c_nM13_13_r_p=$cualitativa_formato_1; $r_d_c_nM13_13_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_2) { $r_d_c_nM13_13_r_p=$cualitativa_formato_2; $r_d_c_nM13_13_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_3) { $r_d_c_nM13_13_r_p=$cualitativa_formato_3; $r_d_c_nM13_13_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_4) { $r_d_c_nM13_13_r_p=$cualitativa_formato_4; $r_d_c_nM13_13_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_5) { $r_d_c_nM13_13_r_p=$cualitativa_formato_5; $r_d_c_nM13_13_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_6) { $r_d_c_nM13_13_r_p=$cualitativa_formato_6; $r_d_c_nM13_13_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_7) { $r_d_c_nM13_13_r_p=$cualitativa_formato_7; $r_d_c_nM13_13_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_8) { $r_d_c_nM13_13_r_p=$cualitativa_formato_8; $r_d_c_nM13_13_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_9) { $r_d_c_nM13_13_r_p=$cualitativa_formato_9; $r_d_c_nM13_13_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_10) {$r_d_c_nM13_13_r_p=$cualitativa_formato_10; $r_d_c_nM13_13_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_11) {$r_d_c_nM13_13_r_p=$cualitativa_formato_11; $r_d_c_nM13_13_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM13_13_redon>=$comparativo_formato_12) {$r_d_c_nM13_13_r_p=$cualitativa_formato_12; $r_d_c_nM13_13_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM13['nt_13'] == '') { $r_d_c_nM13_13_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM13_13_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM13_13_r_p_co; echo $parent_close;
                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM13['d_14'] != '') {

$el_d_14 =  $row_datos_control_notasM13['d_14'];

include("../../conectar.php");
$query_indi_14 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_14'                     
               order by id_indicador limit 1" ;
$datos_control_indi_14 = mysqli_query($enlace, $query_indi_14) or die(mysqli_error());
$row_datos_control_indi_14 = mysqli_fetch_array($datos_control_indi_14); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_14['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM13_14_redon =  number_format($row_datos_control_notasM13['nt_14'], 0, '.', '');

if ($formato_eva_M13 == '3') {
 
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_1) { $r_d_c_nM13_14_r_p=$literal_formato_1; $r_d_c_nM13_14_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_2) { $r_d_c_nM13_14_r_p=$literal_formato_2; $r_d_c_nM13_14_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_3) { $r_d_c_nM13_14_r_p=$literal_formato_3; $r_d_c_nM13_14_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_4) { $r_d_c_nM13_14_r_p=$literal_formato_4; $r_d_c_nM13_14_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_5) { $r_d_c_nM13_14_r_p=$literal_formato_5; $r_d_c_nM13_14_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_6) { $r_d_c_nM13_14_r_p=$literal_formato_6; $r_d_c_nM13_14_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_7) { $r_d_c_nM13_14_r_p=$literal_formato_7; $r_d_c_nM13_14_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_8) { $r_d_c_nM13_14_r_p=$literal_formato_8; $r_d_c_nM13_14_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_9) { $r_d_c_nM13_14_r_p=$literal_formato_9; $r_d_c_nM13_14_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_10) {$r_d_c_nM13_14_r_p=$literal_formato_10; $r_d_c_nM13_14_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_11) {$r_d_c_nM13_14_r_p=$literal_formato_11; $r_d_c_nM13_14_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_12) {$r_d_c_nM13_14_r_p=$literal_formato_12; $r_d_c_nM13_14_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M13 == '4') {
 
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_1) { $r_d_c_nM13_14_r_p=$cualitativa_formato_1; $r_d_c_nM13_14_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_2) { $r_d_c_nM13_14_r_p=$cualitativa_formato_2; $r_d_c_nM13_14_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_3) { $r_d_c_nM13_14_r_p=$cualitativa_formato_3; $r_d_c_nM13_14_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_4) { $r_d_c_nM13_14_r_p=$cualitativa_formato_4; $r_d_c_nM13_14_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_5) { $r_d_c_nM13_14_r_p=$cualitativa_formato_5; $r_d_c_nM13_14_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_6) { $r_d_c_nM13_14_r_p=$cualitativa_formato_6; $r_d_c_nM13_14_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_7) { $r_d_c_nM13_14_r_p=$cualitativa_formato_7; $r_d_c_nM13_14_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_8) { $r_d_c_nM13_14_r_p=$cualitativa_formato_8; $r_d_c_nM13_14_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_9) { $r_d_c_nM13_14_r_p=$cualitativa_formato_9; $r_d_c_nM13_14_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_10) {$r_d_c_nM13_14_r_p=$cualitativa_formato_10; $r_d_c_nM13_14_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_11) {$r_d_c_nM13_14_r_p=$cualitativa_formato_11; $r_d_c_nM13_14_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM13_14_redon>=$comparativo_formato_12) {$r_d_c_nM13_14_r_p=$cualitativa_formato_12; $r_d_c_nM13_14_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM13['nt_14'] == '') { $r_d_c_nM13_14_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM13_14_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM13_14_r_p_co; echo $parent_close; 
                            echo $td_closeB;


  echo $tr_close;

}



if ($row_datos_control_notasM13['d_15'] != '') {

$el_d_15 =  $row_datos_control_notasM13['d_15'];

include("../../conectar.php");
$query_indi_15 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_15'                     
               order by id_indicador limit 1" ;
$datos_control_indi_15 = mysqli_query($enlace, $query_indi_15) or die(mysqli_error());
$row_datos_control_indi_15 = mysqli_fetch_array($datos_control_indi_15); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_15['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM13_15_redon =  number_format($row_datos_control_notasM13['nt_15'], 0, '.', '');
if ($formato_eva_M13 == '3') {
 
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_1) { $r_d_c_nM13_15_r_p=$literal_formato_1; $r_d_c_nM13_15_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_2) { $r_d_c_nM13_15_r_p=$literal_formato_2; $r_d_c_nM13_15_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_3) { $r_d_c_nM13_15_r_p=$literal_formato_3; $r_d_c_nM13_15_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_4) { $r_d_c_nM13_15_r_p=$literal_formato_4; $r_d_c_nM13_15_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_5) { $r_d_c_nM13_15_r_p=$literal_formato_5; $r_d_c_nM13_15_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_6) { $r_d_c_nM13_15_r_p=$literal_formato_6; $r_d_c_nM13_15_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_7) { $r_d_c_nM13_15_r_p=$literal_formato_7; $r_d_c_nM13_15_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_8) { $r_d_c_nM13_15_r_p=$literal_formato_8; $r_d_c_nM13_15_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_9) { $r_d_c_nM13_15_r_p=$literal_formato_9; $r_d_c_nM13_15_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_10) {$r_d_c_nM13_15_r_p=$literal_formato_10; $r_d_c_nM13_15_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_11) {$r_d_c_nM13_15_r_p=$literal_formato_11; $r_d_c_nM13_15_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_12) {$r_d_c_nM13_15_r_p=$literal_formato_12; $r_d_c_nM13_15_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M13 == '4') {
 
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_1) { $r_d_c_nM13_15_r_p=$cualitativa_formato_1; $r_d_c_nM13_15_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_2) { $r_d_c_nM13_15_r_p=$cualitativa_formato_2; $r_d_c_nM13_15_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_3) { $r_d_c_nM13_15_r_p=$cualitativa_formato_3; $r_d_c_nM13_15_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_4) { $r_d_c_nM13_15_r_p=$cualitativa_formato_4; $r_d_c_nM13_15_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_5) { $r_d_c_nM13_15_r_p=$cualitativa_formato_5; $r_d_c_nM13_15_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_6) { $r_d_c_nM13_15_r_p=$cualitativa_formato_6; $r_d_c_nM13_15_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_7) { $r_d_c_nM13_15_r_p=$cualitativa_formato_7; $r_d_c_nM13_15_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_8) { $r_d_c_nM13_15_r_p=$cualitativa_formato_8; $r_d_c_nM13_15_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_9) { $r_d_c_nM13_15_r_p=$cualitativa_formato_9; $r_d_c_nM13_15_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_10) {$r_d_c_nM13_15_r_p=$cualitativa_formato_10; $r_d_c_nM13_15_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_11) {$r_d_c_nM13_15_r_p=$cualitativa_formato_11; $r_d_c_nM13_15_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM13_15_redon>=$comparativo_formato_12) {$r_d_c_nM13_15_r_p=$cualitativa_formato_12; $r_d_c_nM13_15_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM13['nt_15'] == '') { $r_d_c_nM13_15_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM13_15_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM13_15_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}


if ($row_datos_control_notasM13['d_16'] != '') {

$el_d_16 =  $row_datos_control_notasM13['d_16'];

include("../../conectar.php");
$query_indi_16 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_16'                     
               order by id_indicador limit 1" ;
$datos_control_indi_16 = mysqli_query($enlace, $query_indi_16) or die(mysqli_error());
$row_datos_control_indi_16 = mysqli_fetch_array($datos_control_indi_16); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_16['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM13_16_redon =  number_format($row_datos_control_notasM13['nt_16'], 0, '.', '');
if ($formato_eva_M13 == '3') {
 
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_1) { $r_d_c_nM13_16_r_p=$literal_formato_1; $r_d_c_nM13_16_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_2) { $r_d_c_nM13_16_r_p=$literal_formato_2; $r_d_c_nM13_16_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_3) { $r_d_c_nM13_16_r_p=$literal_formato_3; $r_d_c_nM13_16_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_4) { $r_d_c_nM13_16_r_p=$literal_formato_4; $r_d_c_nM13_16_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_5) { $r_d_c_nM13_16_r_p=$literal_formato_5; $r_d_c_nM13_16_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_6) { $r_d_c_nM13_16_r_p=$literal_formato_6; $r_d_c_nM13_16_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_7) { $r_d_c_nM13_16_r_p=$literal_formato_7; $r_d_c_nM13_16_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_8) { $r_d_c_nM13_16_r_p=$literal_formato_8; $r_d_c_nM13_16_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_9) { $r_d_c_nM13_16_r_p=$literal_formato_9; $r_d_c_nM13_16_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_10) {$r_d_c_nM13_16_r_p=$literal_formato_10; $r_d_c_nM13_16_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_11) {$r_d_c_nM13_16_r_p=$literal_formato_11; $r_d_c_nM13_16_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_12) {$r_d_c_nM13_16_r_p=$literal_formato_12; $r_d_c_nM13_16_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M13 == '4') {
 
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_1) { $r_d_c_nM13_16_r_p=$cualitativa_formato_1; $r_d_c_nM13_16_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_2) { $r_d_c_nM13_16_r_p=$cualitativa_formato_2; $r_d_c_nM13_16_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_3) { $r_d_c_nM13_16_r_p=$cualitativa_formato_3; $r_d_c_nM13_16_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_4) { $r_d_c_nM13_16_r_p=$cualitativa_formato_4; $r_d_c_nM13_16_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_5) { $r_d_c_nM13_16_r_p=$cualitativa_formato_5; $r_d_c_nM13_16_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_6) { $r_d_c_nM13_16_r_p=$cualitativa_formato_6; $r_d_c_nM13_16_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_7) { $r_d_c_nM13_16_r_p=$cualitativa_formato_7; $r_d_c_nM13_16_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_8) { $r_d_c_nM13_16_r_p=$cualitativa_formato_8; $r_d_c_nM13_16_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_9) { $r_d_c_nM13_16_r_p=$cualitativa_formato_9; $r_d_c_nM13_16_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_10) {$r_d_c_nM13_16_r_p=$cualitativa_formato_10; $r_d_c_nM13_16_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_11) {$r_d_c_nM13_16_r_p=$cualitativa_formato_11; $r_d_c_nM13_16_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM13_16_redon>=$comparativo_formato_12) {$r_d_c_nM13_16_r_p=$cualitativa_formato_12; $r_d_c_nM13_16_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM13['nt_16'] == '') { $r_d_c_nM13_16_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM13_16_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM13_16_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM13['d_17'] != '') {

$el_d_17 =  $row_datos_control_notasM13['d_17'];

include("../../conectar.php");
$query_indi_17 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_17'                     
               order by id_indicador limit 1" ;
$datos_control_indi_17 = mysqli_query($enlace, $query_indi_17) or die(mysqli_error());
$row_datos_control_indi_17 = mysqli_fetch_array($datos_control_indi_17); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_17['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM13_17_redon =  number_format($row_datos_control_notasM13['nt_17'], 0, '.', '');
if ($formato_eva_M13 == '3') {
 
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_1) { $r_d_c_nM13_17_r_p=$literal_formato_1; $r_d_c_nM13_17_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_2) { $r_d_c_nM13_17_r_p=$literal_formato_2; $r_d_c_nM13_17_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_3) { $r_d_c_nM13_17_r_p=$literal_formato_3; $r_d_c_nM13_17_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_4) { $r_d_c_nM13_17_r_p=$literal_formato_4; $r_d_c_nM13_17_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_5) { $r_d_c_nM13_17_r_p=$literal_formato_5; $r_d_c_nM13_17_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_6) { $r_d_c_nM13_17_r_p=$literal_formato_6; $r_d_c_nM13_17_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_7) { $r_d_c_nM13_17_r_p=$literal_formato_7; $r_d_c_nM13_17_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_8) { $r_d_c_nM13_17_r_p=$literal_formato_8; $r_d_c_nM13_17_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_9) { $r_d_c_nM13_17_r_p=$literal_formato_9; $r_d_c_nM13_17_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_10) {$r_d_c_nM13_17_r_p=$literal_formato_10; $r_d_c_nM13_17_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_11) {$r_d_c_nM13_17_r_p=$literal_formato_11; $r_d_c_nM13_17_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_12) {$r_d_c_nM13_17_r_p=$literal_formato_12; $r_d_c_nM13_17_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M13 == '4') {
 
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_1) { $r_d_c_nM13_17_r_p=$cualitativa_formato_1; $r_d_c_nM13_17_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_2) { $r_d_c_nM13_17_r_p=$cualitativa_formato_2; $r_d_c_nM13_17_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_3) { $r_d_c_nM13_17_r_p=$cualitativa_formato_3; $r_d_c_nM13_17_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_4) { $r_d_c_nM13_17_r_p=$cualitativa_formato_4; $r_d_c_nM13_17_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_5) { $r_d_c_nM13_17_r_p=$cualitativa_formato_5; $r_d_c_nM13_17_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_6) { $r_d_c_nM13_17_r_p=$cualitativa_formato_6; $r_d_c_nM13_17_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_7) { $r_d_c_nM13_17_r_p=$cualitativa_formato_7; $r_d_c_nM13_17_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_8) { $r_d_c_nM13_17_r_p=$cualitativa_formato_8; $r_d_c_nM13_17_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_9) { $r_d_c_nM13_17_r_p=$cualitativa_formato_9; $r_d_c_nM13_17_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_10) {$r_d_c_nM13_17_r_p=$cualitativa_formato_10; $r_d_c_nM13_17_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_11) {$r_d_c_nM13_17_r_p=$cualitativa_formato_11; $r_d_c_nM13_17_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM13_17_redon>=$comparativo_formato_12) {$r_d_c_nM13_17_r_p=$cualitativa_formato_12; $r_d_c_nM13_17_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM13['nt_17'] == '') { $r_d_c_nM13_17_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM13_17_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM13_17_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}
}








if ($row_datos_controlmat['n_nnn'] != '') {

    echo $tr_open;
                echo $tdd_open; echo $asterisco;   echo $row_datos_controlmat['n_nnn']; echo $dos_puntos;  echo $tdd_close;
     echo $tr_close;

}





if ($row_datos_controlmat['n_nnn'] != '') { 

if ($row_datos_control_notasM14['d_11'] != '') {

$el_d_11 =  $row_datos_control_notasM14['d_11'];

include("../../conectar.php");
$query_indi_11 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_11'                       
               order by id_indicador limit 1" ;
$datos_control_indi_11 = mysqli_query($enlace, $query_indi_11) or die(mysqli_error());
$row_datos_control_indi_11 = mysqli_fetch_array($datos_control_indi_11); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_11['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM14_11_redon =  number_format($row_datos_control_notasM14['nt_11'], 0, '.', '');

if ($formato_eva_M14 == '3') {
 
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_1) { $r_d_c_nM14_11_r_p=$literal_formato_1; $r_d_c_nM14_11_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_2) { $r_d_c_nM14_11_r_p=$literal_formato_2; $r_d_c_nM14_11_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_3) { $r_d_c_nM14_11_r_p=$literal_formato_3; $r_d_c_nM14_11_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_4) { $r_d_c_nM14_11_r_p=$literal_formato_4; $r_d_c_nM14_11_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_5) { $r_d_c_nM14_11_r_p=$literal_formato_5; $r_d_c_nM14_11_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_6) { $r_d_c_nM14_11_r_p=$literal_formato_6; $r_d_c_nM14_11_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_7) { $r_d_c_nM14_11_r_p=$literal_formato_7; $r_d_c_nM14_11_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_8) { $r_d_c_nM14_11_r_p=$literal_formato_8; $r_d_c_nM14_11_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_9) { $r_d_c_nM14_11_r_p=$literal_formato_9; $r_d_c_nM14_11_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_10) {$r_d_c_nM14_11_r_p=$literal_formato_10; $r_d_c_nM14_11_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_11) {$r_d_c_nM14_11_r_p=$literal_formato_11; $r_d_c_nM14_11_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_12) {$r_d_c_nM14_11_r_p=$literal_formato_12; $r_d_c_nM14_11_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M14 == '4') {
 
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_1) { $r_d_c_nM14_11_r_p=$cualitativa_formato_1; $r_d_c_nM14_11_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_2) { $r_d_c_nM14_11_r_p=$cualitativa_formato_2; $r_d_c_nM14_11_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_3) { $r_d_c_nM14_11_r_p=$cualitativa_formato_3; $r_d_c_nM14_11_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_4) { $r_d_c_nM14_11_r_p=$cualitativa_formato_4; $r_d_c_nM14_11_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_5) { $r_d_c_nM14_11_r_p=$cualitativa_formato_5; $r_d_c_nM14_11_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_6) { $r_d_c_nM14_11_r_p=$cualitativa_formato_6; $r_d_c_nM14_11_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_7) { $r_d_c_nM14_11_r_p=$cualitativa_formato_7; $r_d_c_nM14_11_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_8) { $r_d_c_nM14_11_r_p=$cualitativa_formato_8; $r_d_c_nM14_11_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_9) { $r_d_c_nM14_11_r_p=$cualitativa_formato_9; $r_d_c_nM14_11_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_10) {$r_d_c_nM14_11_r_p=$cualitativa_formato_10; $r_d_c_nM14_11_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_11) {$r_d_c_nM14_11_r_p=$cualitativa_formato_11; $r_d_c_nM14_11_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM14_11_redon>=$comparativo_formato_12) {$r_d_c_nM14_11_r_p=$cualitativa_formato_12; $r_d_c_nM14_11_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM14['nt_11'] == '') { $r_d_c_nM14_11_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM14_11_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM14_11_r_p_co; echo $parent_close;

                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM14['d_12'] != '') {

$el_d_12 =  $row_datos_control_notasM14['d_12'];

include("../../conectar.php");
$query_indi_12 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_12'                     
               order by id_indicador limit 1" ;
$datos_control_indi_12 = mysqli_query($enlace, $query_indi_12) or die(mysqli_error());
$row_datos_control_indi_12 = mysqli_fetch_array($datos_control_indi_12); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_12['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;

$row_datos_control_notasM14_12_redon =  number_format($row_datos_control_notasM14['nt_12'], 0, '.', '');

if ($formato_eva_M14 == '3') {
 
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_1) { $r_d_c_nM14_12_r_p=$literal_formato_1; $r_d_c_nM14_12_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_2) { $r_d_c_nM14_12_r_p=$literal_formato_2; $r_d_c_nM14_12_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_3) { $r_d_c_nM14_12_r_p=$literal_formato_3; $r_d_c_nM14_12_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_4) { $r_d_c_nM14_12_r_p=$literal_formato_4; $r_d_c_nM14_12_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_5) { $r_d_c_nM14_12_r_p=$literal_formato_5; $r_d_c_nM14_12_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_6) { $r_d_c_nM14_12_r_p=$literal_formato_6; $r_d_c_nM14_12_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_7) { $r_d_c_nM14_12_r_p=$literal_formato_7; $r_d_c_nM14_12_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_8) { $r_d_c_nM14_12_r_p=$literal_formato_8; $r_d_c_nM14_12_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_9) { $r_d_c_nM14_12_r_p=$literal_formato_9; $r_d_c_nM14_12_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_10) {$r_d_c_nM14_12_r_p=$literal_formato_10; $r_d_c_nM14_12_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_11) {$r_d_c_nM14_12_r_p=$literal_formato_11; $r_d_c_nM14_12_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_12) {$r_d_c_nM14_12_r_p=$literal_formato_12; $r_d_c_nM14_12_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M14 == '4') {
 
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_1) { $r_d_c_nM14_12_r_p=$cualitativa_formato_1; $r_d_c_nM14_12_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_2) { $r_d_c_nM14_12_r_p=$cualitativa_formato_2; $r_d_c_nM14_12_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_3) { $r_d_c_nM14_12_r_p=$cualitativa_formato_3; $r_d_c_nM14_12_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_4) { $r_d_c_nM14_12_r_p=$cualitativa_formato_4; $r_d_c_nM14_12_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_5) { $r_d_c_nM14_12_r_p=$cualitativa_formato_5; $r_d_c_nM14_12_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_6) { $r_d_c_nM14_12_r_p=$cualitativa_formato_6; $r_d_c_nM14_12_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_7) { $r_d_c_nM14_12_r_p=$cualitativa_formato_7; $r_d_c_nM14_12_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_8) { $r_d_c_nM14_12_r_p=$cualitativa_formato_8; $r_d_c_nM14_12_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_9) { $r_d_c_nM14_12_r_p=$cualitativa_formato_9; $r_d_c_nM14_12_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_10) {$r_d_c_nM14_12_r_p=$cualitativa_formato_10; $r_d_c_nM14_12_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_11) {$r_d_c_nM14_12_r_p=$cualitativa_formato_11; $r_d_c_nM14_12_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM14_12_redon>=$comparativo_formato_12) {$r_d_c_nM14_12_r_p=$cualitativa_formato_12; $r_d_c_nM14_12_r_p_co = $cualitativa_formato_12_completo;} 

}


if ($row_datos_control_notasM14['nt_12'] == '') { $r_d_c_nM14_12_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM14_12_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM14_12_r_p_co; echo $parent_close;

                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM14['d_13'] != '') {


$el_d_13 =  $row_datos_control_notasM14['d_13'];

include("../../conectar.php");
$query_indi_13 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_13'                     
               order by id_indicador limit 1" ;
$datos_control_indi_13 = mysqli_query($enlace, $query_indi_13) or die(mysqli_error());
$row_datos_control_indi_13 = mysqli_fetch_array($datos_control_indi_13); 
 
 mysqli_close($enlace);


echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_13['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
                                        $row_datos_control_notasM14_13_redon =  number_format($row_datos_control_notasM14['nt_13'], 0, '.', '');

if ($formato_eva_M14 == '3') {
 
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_1) { $r_d_c_nM14_13_r_p=$literal_formato_1; $r_d_c_nM14_13_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_2) { $r_d_c_nM14_13_r_p=$literal_formato_2; $r_d_c_nM14_13_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_3) { $r_d_c_nM14_13_r_p=$literal_formato_3; $r_d_c_nM14_13_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_4) { $r_d_c_nM14_13_r_p=$literal_formato_4; $r_d_c_nM14_13_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_5) { $r_d_c_nM14_13_r_p=$literal_formato_5; $r_d_c_nM14_13_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_6) { $r_d_c_nM14_13_r_p=$literal_formato_6; $r_d_c_nM14_13_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_7) { $r_d_c_nM14_13_r_p=$literal_formato_7; $r_d_c_nM14_13_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_8) { $r_d_c_nM14_13_r_p=$literal_formato_8; $r_d_c_nM14_13_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_9) { $r_d_c_nM14_13_r_p=$literal_formato_9; $r_d_c_nM14_13_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_10) {$r_d_c_nM14_13_r_p=$literal_formato_10; $r_d_c_nM14_13_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_11) {$r_d_c_nM14_13_r_p=$literal_formato_11; $r_d_c_nM14_13_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_12) {$r_d_c_nM14_13_r_p=$literal_formato_12; $r_d_c_nM14_13_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M14 == '4') {
 
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_1) { $r_d_c_nM14_13_r_p=$cualitativa_formato_1; $r_d_c_nM14_13_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_2) { $r_d_c_nM14_13_r_p=$cualitativa_formato_2; $r_d_c_nM14_13_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_3) { $r_d_c_nM14_13_r_p=$cualitativa_formato_3; $r_d_c_nM14_13_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_4) { $r_d_c_nM14_13_r_p=$cualitativa_formato_4; $r_d_c_nM14_13_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_5) { $r_d_c_nM14_13_r_p=$cualitativa_formato_5; $r_d_c_nM14_13_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_6) { $r_d_c_nM14_13_r_p=$cualitativa_formato_6; $r_d_c_nM14_13_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_7) { $r_d_c_nM14_13_r_p=$cualitativa_formato_7; $r_d_c_nM14_13_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_8) { $r_d_c_nM14_13_r_p=$cualitativa_formato_8; $r_d_c_nM14_13_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_9) { $r_d_c_nM14_13_r_p=$cualitativa_formato_9; $r_d_c_nM14_13_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_10) {$r_d_c_nM14_13_r_p=$cualitativa_formato_10; $r_d_c_nM14_13_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_11) {$r_d_c_nM14_13_r_p=$cualitativa_formato_11; $r_d_c_nM14_13_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM14_13_redon>=$comparativo_formato_12) {$r_d_c_nM14_13_r_p=$cualitativa_formato_12; $r_d_c_nM14_13_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM14['nt_13'] == '') { $r_d_c_nM14_13_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM14_13_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM14_13_r_p_co; echo $parent_close;
                            echo $td_closeB;


  echo $tr_close;

}


if ($row_datos_control_notasM14['d_14'] != '') {

$el_d_14 =  $row_datos_control_notasM14['d_14'];

include("../../conectar.php");
$query_indi_14 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_14'                     
               order by id_indicador limit 1" ;
$datos_control_indi_14 = mysqli_query($enlace, $query_indi_14) or die(mysqli_error());
$row_datos_control_indi_14 = mysqli_fetch_array($datos_control_indi_14); 
 
 mysqli_close($enlace);



echo $tr_open;

                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_14['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM14_14_redon =  number_format($row_datos_control_notasM14['nt_14'], 0, '.', '');

if ($formato_eva_M14 == '3') {
 
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_1) { $r_d_c_nM14_14_r_p=$literal_formato_1; $r_d_c_nM14_14_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_2) { $r_d_c_nM14_14_r_p=$literal_formato_2; $r_d_c_nM14_14_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_3) { $r_d_c_nM14_14_r_p=$literal_formato_3; $r_d_c_nM14_14_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_4) { $r_d_c_nM14_14_r_p=$literal_formato_4; $r_d_c_nM14_14_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_5) { $r_d_c_nM14_14_r_p=$literal_formato_5; $r_d_c_nM14_14_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_6) { $r_d_c_nM14_14_r_p=$literal_formato_6; $r_d_c_nM14_14_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_7) { $r_d_c_nM14_14_r_p=$literal_formato_7; $r_d_c_nM14_14_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_8) { $r_d_c_nM14_14_r_p=$literal_formato_8; $r_d_c_nM14_14_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_9) { $r_d_c_nM14_14_r_p=$literal_formato_9; $r_d_c_nM14_14_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_10) {$r_d_c_nM14_14_r_p=$literal_formato_10; $r_d_c_nM14_14_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_11) {$r_d_c_nM14_14_r_p=$literal_formato_11; $r_d_c_nM14_14_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_12) {$r_d_c_nM14_14_r_p=$literal_formato_12; $r_d_c_nM14_14_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M14 == '4') {
 
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_1) { $r_d_c_nM14_14_r_p=$cualitativa_formato_1; $r_d_c_nM14_14_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_2) { $r_d_c_nM14_14_r_p=$cualitativa_formato_2; $r_d_c_nM14_14_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_3) { $r_d_c_nM14_14_r_p=$cualitativa_formato_3; $r_d_c_nM14_14_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_4) { $r_d_c_nM14_14_r_p=$cualitativa_formato_4; $r_d_c_nM14_14_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_5) { $r_d_c_nM14_14_r_p=$cualitativa_formato_5; $r_d_c_nM14_14_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_6) { $r_d_c_nM14_14_r_p=$cualitativa_formato_6; $r_d_c_nM14_14_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_7) { $r_d_c_nM14_14_r_p=$cualitativa_formato_7; $r_d_c_nM14_14_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_8) { $r_d_c_nM14_14_r_p=$cualitativa_formato_8; $r_d_c_nM14_14_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_9) { $r_d_c_nM14_14_r_p=$cualitativa_formato_9; $r_d_c_nM14_14_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_10) {$r_d_c_nM14_14_r_p=$cualitativa_formato_10; $r_d_c_nM14_14_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_11) {$r_d_c_nM14_14_r_p=$cualitativa_formato_11; $r_d_c_nM14_14_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM14_14_redon>=$comparativo_formato_12) {$r_d_c_nM14_14_r_p=$cualitativa_formato_12; $r_d_c_nM14_14_r_p_co = $cualitativa_formato_12_completo;} 

}

if ($row_datos_control_notasM14['nt_14'] == '') { $r_d_c_nM14_14_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM14_14_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM14_14_r_p_co; echo $parent_close; 
                            echo $td_closeB;


  echo $tr_close;

}



if ($row_datos_control_notasM14['d_15'] != '') {

$el_d_15 =  $row_datos_control_notasM14['d_15'];

include("../../conectar.php");
$query_indi_15 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_15'                     
               order by id_indicador limit 1" ;
$datos_control_indi_15 = mysqli_query($enlace, $query_indi_15) or die(mysqli_error());
$row_datos_control_indi_15 = mysqli_fetch_array($datos_control_indi_15); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_15['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM14_15_redon =  number_format($row_datos_control_notasM14['nt_15'], 0, '.', '');
if ($formato_eva_M14 == '3') {
 
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_1) { $r_d_c_nM14_15_r_p=$literal_formato_1; $r_d_c_nM14_15_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_2) { $r_d_c_nM14_15_r_p=$literal_formato_2; $r_d_c_nM14_15_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_3) { $r_d_c_nM14_15_r_p=$literal_formato_3; $r_d_c_nM14_15_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_4) { $r_d_c_nM14_15_r_p=$literal_formato_4; $r_d_c_nM14_15_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_5) { $r_d_c_nM14_15_r_p=$literal_formato_5; $r_d_c_nM14_15_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_6) { $r_d_c_nM14_15_r_p=$literal_formato_6; $r_d_c_nM14_15_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_7) { $r_d_c_nM14_15_r_p=$literal_formato_7; $r_d_c_nM14_15_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_8) { $r_d_c_nM14_15_r_p=$literal_formato_8; $r_d_c_nM14_15_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_9) { $r_d_c_nM14_15_r_p=$literal_formato_9; $r_d_c_nM14_15_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_10) {$r_d_c_nM14_15_r_p=$literal_formato_10; $r_d_c_nM14_15_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_11) {$r_d_c_nM14_15_r_p=$literal_formato_11; $r_d_c_nM14_15_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_12) {$r_d_c_nM14_15_r_p=$literal_formato_12; $r_d_c_nM14_15_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M14 == '4') {
 
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_1) { $r_d_c_nM14_15_r_p=$cualitativa_formato_1; $r_d_c_nM14_15_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_2) { $r_d_c_nM14_15_r_p=$cualitativa_formato_2; $r_d_c_nM14_15_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_3) { $r_d_c_nM14_15_r_p=$cualitativa_formato_3; $r_d_c_nM14_15_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_4) { $r_d_c_nM14_15_r_p=$cualitativa_formato_4; $r_d_c_nM14_15_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_5) { $r_d_c_nM14_15_r_p=$cualitativa_formato_5; $r_d_c_nM14_15_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_6) { $r_d_c_nM14_15_r_p=$cualitativa_formato_6; $r_d_c_nM14_15_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_7) { $r_d_c_nM14_15_r_p=$cualitativa_formato_7; $r_d_c_nM14_15_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_8) { $r_d_c_nM14_15_r_p=$cualitativa_formato_8; $r_d_c_nM14_15_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_9) { $r_d_c_nM14_15_r_p=$cualitativa_formato_9; $r_d_c_nM14_15_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_10) {$r_d_c_nM14_15_r_p=$cualitativa_formato_10; $r_d_c_nM14_15_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_11) {$r_d_c_nM14_15_r_p=$cualitativa_formato_11; $r_d_c_nM14_15_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM14_15_redon>=$comparativo_formato_12) {$r_d_c_nM14_15_r_p=$cualitativa_formato_12; $r_d_c_nM14_15_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM14['nt_15'] == '') { $r_d_c_nM14_15_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM14_15_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM14_15_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}


if ($row_datos_control_notasM14['d_16'] != '') {

$el_d_16 =  $row_datos_control_notasM14['d_16'];

include("../../conectar.php");
$query_indi_16 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_16'                     
               order by id_indicador limit 1" ;
$datos_control_indi_16 = mysqli_query($enlace, $query_indi_16) or die(mysqli_error());
$row_datos_control_indi_16 = mysqli_fetch_array($datos_control_indi_16); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_16['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM14_16_redon =  number_format($row_datos_control_notasM14['nt_16'], 0, '.', '');
if ($formato_eva_M14 == '3') {
 
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_1) { $r_d_c_nM14_16_r_p=$literal_formato_1; $r_d_c_nM14_16_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_2) { $r_d_c_nM14_16_r_p=$literal_formato_2; $r_d_c_nM14_16_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_3) { $r_d_c_nM14_16_r_p=$literal_formato_3; $r_d_c_nM14_16_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_4) { $r_d_c_nM14_16_r_p=$literal_formato_4; $r_d_c_nM14_16_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_5) { $r_d_c_nM14_16_r_p=$literal_formato_5; $r_d_c_nM14_16_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_6) { $r_d_c_nM14_16_r_p=$literal_formato_6; $r_d_c_nM14_16_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_7) { $r_d_c_nM14_16_r_p=$literal_formato_7; $r_d_c_nM14_16_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_8) { $r_d_c_nM14_16_r_p=$literal_formato_8; $r_d_c_nM14_16_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_9) { $r_d_c_nM14_16_r_p=$literal_formato_9; $r_d_c_nM14_16_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_10) {$r_d_c_nM14_16_r_p=$literal_formato_10; $r_d_c_nM14_16_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_11) {$r_d_c_nM14_16_r_p=$literal_formato_11; $r_d_c_nM14_16_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_12) {$r_d_c_nM14_16_r_p=$literal_formato_12; $r_d_c_nM14_16_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M14 == '4') {
 
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_1) { $r_d_c_nM14_16_r_p=$cualitativa_formato_1; $r_d_c_nM14_16_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_2) { $r_d_c_nM14_16_r_p=$cualitativa_formato_2; $r_d_c_nM14_16_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_3) { $r_d_c_nM14_16_r_p=$cualitativa_formato_3; $r_d_c_nM14_16_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_4) { $r_d_c_nM14_16_r_p=$cualitativa_formato_4; $r_d_c_nM14_16_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_5) { $r_d_c_nM14_16_r_p=$cualitativa_formato_5; $r_d_c_nM14_16_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_6) { $r_d_c_nM14_16_r_p=$cualitativa_formato_6; $r_d_c_nM14_16_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_7) { $r_d_c_nM14_16_r_p=$cualitativa_formato_7; $r_d_c_nM14_16_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_8) { $r_d_c_nM14_16_r_p=$cualitativa_formato_8; $r_d_c_nM14_16_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_9) { $r_d_c_nM14_16_r_p=$cualitativa_formato_9; $r_d_c_nM14_16_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_10) {$r_d_c_nM14_16_r_p=$cualitativa_formato_10; $r_d_c_nM14_16_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_11) {$r_d_c_nM14_16_r_p=$cualitativa_formato_11; $r_d_c_nM14_16_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM14_16_redon>=$comparativo_formato_12) {$r_d_c_nM14_16_r_p=$cualitativa_formato_12; $r_d_c_nM14_16_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM14['nt_16'] == '') { $r_d_c_nM14_16_r_p = $row_datos_modcabecc['no_entrego_abre']; }


echo $r_d_c_nM14_16_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM14_16_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}



if ($row_datos_control_notasM14['d_17'] != '') {

$el_d_17 =  $row_datos_control_notasM14['d_17'];

include("../../conectar.php");
$query_indi_17 = "SELECT * FROM plantilla_indicadores
                 where id_indicador = '$el_d_17'                     
               order by id_indicador limit 1" ;
$datos_control_indi_17 = mysqli_query($enlace, $query_indi_17) or die(mysqli_error());
$row_datos_control_indi_17 = mysqli_fetch_array($datos_control_indi_17); 
mysqli_close($enlace);

echo $tr_open;
                            echo $td_openA;
                                      echo $guion;   echo $row_datos_control_indi_17['ind_desc']; echo $el_punto;  
                            echo $td_closeA;

                            echo $td_openB;
$row_datos_control_notasM14_17_redon =  number_format($row_datos_control_notasM14['nt_17'], 0, '.', '');
if ($formato_eva_M14 == '3') {
 
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_1) { $r_d_c_nM14_17_r_p=$literal_formato_1; $r_d_c_nM14_17_r_p_co = $literal_formato_1_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_2) { $r_d_c_nM14_17_r_p=$literal_formato_2; $r_d_c_nM14_17_r_p_co = $literal_formato_2_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_3) { $r_d_c_nM14_17_r_p=$literal_formato_3; $r_d_c_nM14_17_r_p_co = $literal_formato_3_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_4) { $r_d_c_nM14_17_r_p=$literal_formato_4; $r_d_c_nM14_17_r_p_co = $literal_formato_4_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_5) { $r_d_c_nM14_17_r_p=$literal_formato_5; $r_d_c_nM14_17_r_p_co = $literal_formato_5_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_6) { $r_d_c_nM14_17_r_p=$literal_formato_6; $r_d_c_nM14_17_r_p_co = $literal_formato_6_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_7) { $r_d_c_nM14_17_r_p=$literal_formato_7; $r_d_c_nM14_17_r_p_co = $literal_formato_7_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_8) { $r_d_c_nM14_17_r_p=$literal_formato_8; $r_d_c_nM14_17_r_p_co = $literal_formato_8_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_9) { $r_d_c_nM14_17_r_p=$literal_formato_9; $r_d_c_nM14_17_r_p_co = $literal_formato_9_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_10) {$r_d_c_nM14_17_r_p=$literal_formato_10; $r_d_c_nM14_17_r_p_co = $literal_formato_10_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_11) {$r_d_c_nM14_17_r_p=$literal_formato_11; $r_d_c_nM14_17_r_p_co = $literal_formato_11_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_12) {$r_d_c_nM14_17_r_p=$literal_formato_12; $r_d_c_nM14_17_r_p_co = $literal_formato_12_completo;} 

}


if ($formato_eva_M14 == '4') {
 
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_1) { $r_d_c_nM14_17_r_p=$cualitativa_formato_1; $r_d_c_nM14_17_r_p_co = $cualitativa_formato_1_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_2) { $r_d_c_nM14_17_r_p=$cualitativa_formato_2; $r_d_c_nM14_17_r_p_co = $cualitativa_formato_2_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_3) { $r_d_c_nM14_17_r_p=$cualitativa_formato_3; $r_d_c_nM14_17_r_p_co = $cualitativa_formato_3_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_4) { $r_d_c_nM14_17_r_p=$cualitativa_formato_4; $r_d_c_nM14_17_r_p_co = $cualitativa_formato_4_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_5) { $r_d_c_nM14_17_r_p=$cualitativa_formato_5; $r_d_c_nM14_17_r_p_co = $cualitativa_formato_5_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_6) { $r_d_c_nM14_17_r_p=$cualitativa_formato_6; $r_d_c_nM14_17_r_p_co = $cualitativa_formato_6_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_7) { $r_d_c_nM14_17_r_p=$cualitativa_formato_7; $r_d_c_nM14_17_r_p_co = $cualitativa_formato_7_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_8) { $r_d_c_nM14_17_r_p=$cualitativa_formato_8; $r_d_c_nM14_17_r_p_co = $cualitativa_formato_8_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_9) { $r_d_c_nM14_17_r_p=$cualitativa_formato_9; $r_d_c_nM14_17_r_p_co = $cualitativa_formato_9_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_10) {$r_d_c_nM14_17_r_p=$cualitativa_formato_10; $r_d_c_nM14_17_r_p_co = $cualitativa_formato_10_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_11) {$r_d_c_nM14_17_r_p=$cualitativa_formato_11; $r_d_c_nM14_17_r_p_co = $cualitativa_formato_11_completo;}
if ($row_datos_control_notasM14_17_redon>=$comparativo_formato_12) {$r_d_c_nM14_17_r_p=$cualitativa_formato_12; $r_d_c_nM14_17_r_p_co = $cualitativa_formato_12_completo;} 

}
if ($row_datos_control_notasM14['nt_17'] == '') { $r_d_c_nM14_17_r_p = $row_datos_modcabecc['no_entrego_abre']; }

echo $r_d_c_nM14_17_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM14_17_r_p_co; echo $parent_close;
                            echo $td_closeB;
  echo $tr_close;
}
}








 ?>






</table> <!-- final de table -->



<table style="margin-top: 4px;">
            <tr>
                <td style="width:70%;height:22px; font-size: 12px;" class="table1" align="left" >&nbsp; <span style="font-size: 14px;"><b>Observación:</b></span> <br> <span style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;______________________________________________________________________________.&nbsp;&nbsp;</span><br>


                &nbsp; <span style="font-size: 14px;" ><b>Leyendas:</b></span><br>
<?php

include("../../conectar.php");

$query2_ultra = "SELECT * FROM z_formato GROUP BY literal ORDER BY comparativo DESC";
$datos_dependientes1_ultra = mysqli_query($enlace, $query2_ultra) or die(mysqli_error());
$row_datos_dependientes1_ultra = mysqli_fetch_assoc($datos_dependientes1_ultra);
$totalRows_datos_dependientes1_ultra = mysqli_num_rows($datos_dependientes1_ultra);


$query2_ultraCCC = "SELECT * FROM z_formato GROUP BY cualitativa ORDER BY comparativo DESC";
$datos_dependientes1_ultraCCC = mysqli_query($enlace, $query2_ultraCCC) or die(mysqli_error());
$row_datos_dependientes1_ultraCCC = mysqli_fetch_assoc($datos_dependientes1_ultraCCC);
$totalRows_datos_dependientes1_ultraCCC = mysqli_num_rows($datos_dependientes1_ultraCCC);


mysqli_close($enlace);

?>

 <?php do{?>                                


<span>&nbsp;&nbsp;<b>-
  <?php echo $row_datos_dependientes1_ultra['literal']; ?></b></span>: <?php echo $row_datos_dependientes1_ultra['lit_completo']; ?>.<br>

                                <?php } while ($row_datos_dependientes1_ultra = mysqli_fetch_assoc($datos_dependientes1_ultra)); ?> 

 <?php do{?>                                


<span>&nbsp;&nbsp;<b>-
  <?php echo $row_datos_dependientes1_ultraCCC['cualitativa']; ?></b></span>: <?php echo $row_datos_dependientes1_ultraCCC['cua_completo']; ?>.<br>

                                <?php } while ($row_datos_dependientes1_ultraCCC = mysqli_fetch_assoc($datos_dependientes1_ultraCCC)); ?> 



<span>&nbsp;&nbsp;<b>- <?php echo $row_datos_modcabecc['no_entrego_abre']; ?></b></span>: <?php echo $row_datos_modcabecc['no_entrego_des']; ?>.






                  </td>

                <td style="width:28%;height:22px;" align="left" >
&nbsp;&nbsp;&nbsp;Posición<br>&nbsp;&nbsp;&nbsp;Ranking: &nbsp;&nbsp;&nbsp;<b style="font-size:16px;"><?php echo $row_datos_control['cla_1']; ?></b> de <?php echo  $lap1_totalRows_datos_control; ?>. </td>

            </tr>  
</table>


<table style="margin-top: 4px;" class="table2" >


<tr> 
 <th style="width:760px; height:20px;" BGCOLOR="#C8BBCF" align="left" >&nbsp; - Acotación, áreas y/o aspectos de aprendizaje a reforzar:</th>
</tr>





<?php


if ($row_datos_control_notasM1['asp_1'] != '') {

$el_asp_1 =  $row_datos_control_notasM1['asp_1'];

include("../../conectar.php");
$query_asp_1 = "SELECT * FROM plantilla_reforzar
                 where id_reforzar = '$el_asp_1'                       
               order by id_reforzar limit 1" ;
$datos_control_asp_1 = mysqli_query($enlace, $query_asp_1) or die(mysqli_error());
$row_datos_control_asp_1 = mysqli_fetch_array($datos_control_asp_1); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openAaspecto;
                                      echo $guion; echo $negrin_abre; echo $row_datos_control_asp_1['abre_matee']; echo $dos_puntos;  echo $negrin_cierra; echo $espacio;   echo $row_datos_control_asp_1['ind_refuerza']; echo $el_punto;  
                            echo $td_closeAaspecto;  

  echo $tr_close;
}



if ($row_datos_control_notasM2['asp_1'] != '') {

$el_asp_1 =  $row_datos_control_notasM2['asp_1'];

include("../../conectar.php");
$query_asp_1 = "SELECT * FROM plantilla_reforzar
                 where id_reforzar = '$el_asp_1'                       
               order by id_reforzar limit 1" ;
$datos_control_asp_1 = mysqli_query($enlace, $query_asp_1) or die(mysqli_error());
$row_datos_control_asp_1 = mysqli_fetch_array($datos_control_asp_1); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openAaspecto;
                                      echo $guion; echo $negrin_abre; echo $row_datos_control_asp_1['abre_matee']; echo $dos_puntos;  echo $negrin_cierra; echo $espacio;   echo $row_datos_control_asp_1['ind_refuerza']; echo $el_punto;  
                            echo $td_closeAaspecto;  

  echo $tr_close;
}



if ($row_datos_control_notasM3['asp_1'] != '') {

$el_asp_1 =  $row_datos_control_notasM3['asp_1'];

include("../../conectar.php");
$query_asp_1 = "SELECT * FROM plantilla_reforzar
                 where id_reforzar = '$el_asp_1'                       
               order by id_reforzar limit 1" ;
$datos_control_asp_1 = mysqli_query($enlace, $query_asp_1) or die(mysqli_error());
$row_datos_control_asp_1 = mysqli_fetch_array($datos_control_asp_1); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openAaspecto;
                                      echo $guion; echo $negrin_abre; echo $row_datos_control_asp_1['abre_matee']; echo $dos_puntos;  echo $negrin_cierra; echo $espacio;  echo $row_datos_control_asp_1['ind_refuerza']; echo $el_punto;  
                            echo $td_closeAaspecto;  

  echo $tr_close;
}



if ($row_datos_control_notasM4['asp_1'] != '') {

$el_asp_1 =  $row_datos_control_notasM4['asp_1'];

include("../../conectar.php");
$query_asp_1 = "SELECT * FROM plantilla_reforzar
                 where id_reforzar = '$el_asp_1'                       
               order by id_reforzar limit 1" ;
$datos_control_asp_1 = mysqli_query($enlace, $query_asp_1) or die(mysqli_error());
$row_datos_control_asp_1 = mysqli_fetch_array($datos_control_asp_1); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openAaspecto;
                                      echo $guion; echo $negrin_abre; echo $row_datos_control_asp_1['abre_matee']; echo $dos_puntos;  echo $negrin_cierra; echo $espacio;  echo $row_datos_control_asp_1['ind_refuerza']; echo $el_punto;  
                            echo $td_closeAaspecto;  

  echo $tr_close;
}




if ($row_datos_control_notasM5['asp_1'] != '') {

$el_asp_1 =  $row_datos_control_notasM5['asp_1'];

include("../../conectar.php");
$query_asp_1 = "SELECT * FROM plantilla_reforzar
                 where id_reforzar = '$el_asp_1'                       
               order by id_reforzar limit 1" ;
$datos_control_asp_1 = mysqli_query($enlace, $query_asp_1) or die(mysqli_error());
$row_datos_control_asp_1 = mysqli_fetch_array($datos_control_asp_1); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openAaspecto;
                                      echo $guion;  echo $negrin_abre; echo $row_datos_control_asp_1['abre_matee']; echo $dos_puntos;  echo $negrin_cierra; echo $espacio;  echo $row_datos_control_asp_1['ind_refuerza']; echo $el_punto;  
                            echo $td_closeAaspecto;  

  echo $tr_close;
}





if ($row_datos_control_notasM6['asp_1'] != '') {

$el_asp_1 =  $row_datos_control_notasM6['asp_1'];

include("../../conectar.php");
$query_asp_1 = "SELECT * FROM plantilla_reforzar
                 where id_reforzar = '$el_asp_1'                       
               order by id_reforzar limit 1" ;
$datos_control_asp_1 = mysqli_query($enlace, $query_asp_1) or die(mysqli_error());
$row_datos_control_asp_1 = mysqli_fetch_array($datos_control_asp_1); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openAaspecto;
                                      echo $guion;  echo $negrin_abre; echo $row_datos_control_asp_1['abre_matee']; echo $dos_puntos;  echo $negrin_cierra; echo $espacio;  echo $row_datos_control_asp_1['ind_refuerza']; echo $el_punto;  
                            echo $td_closeAaspecto;  

  echo $tr_close;
}





if ($row_datos_control_notasM7['asp_1'] != '') {

$el_asp_1 =  $row_datos_control_notasM7['asp_1'];

include("../../conectar.php");
$query_asp_1 = "SELECT * FROM plantilla_reforzar
                 where id_reforzar = '$el_asp_1'                       
               order by id_reforzar limit 1" ;
$datos_control_asp_1 = mysqli_query($enlace, $query_asp_1) or die(mysqli_error());
$row_datos_control_asp_1 = mysqli_fetch_array($datos_control_asp_1); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openAaspecto;
                                      echo $guion;  echo $negrin_abre; echo $row_datos_control_asp_1['abre_matee']; echo $dos_puntos;  echo $negrin_cierra; echo $espacio;  echo $row_datos_control_asp_1['ind_refuerza']; echo $el_punto;  
                            echo $td_closeAaspecto;  

  echo $tr_close;
}




if ($row_datos_control_notasM8['asp_1'] != '') {

$el_asp_1 =  $row_datos_control_notasM8['asp_1'];

include("../../conectar.php");
$query_asp_1 = "SELECT * FROM plantilla_reforzar
                 where id_reforzar = '$el_asp_1'                       
               order by id_reforzar limit 1" ;
$datos_control_asp_1 = mysqli_query($enlace, $query_asp_1) or die(mysqli_error());
$row_datos_control_asp_1 = mysqli_fetch_array($datos_control_asp_1); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openAaspecto;
                                      echo $guion; echo $negrin_abre; echo $row_datos_control_asp_1['abre_matee']; echo $dos_puntos;  echo $negrin_cierra; echo $espacio;   echo $row_datos_control_asp_1['ind_refuerza']; echo $el_punto;  
                            echo $td_closeAaspecto;  

  echo $tr_close;
}







if ($row_datos_control_notasM9['asp_1'] != '') {

$el_asp_1 =  $row_datos_control_notasM9['asp_1'];

include("../../conectar.php");
$query_asp_1 = "SELECT * FROM plantilla_reforzar
                 where id_reforzar = '$el_asp_1'                       
               order by id_reforzar limit 1" ;
$datos_control_asp_1 = mysqli_query($enlace, $query_asp_1) or die(mysqli_error());
$row_datos_control_asp_1 = mysqli_fetch_array($datos_control_asp_1); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openAaspecto;
                                      echo $guion;  echo $negrin_abre; echo $row_datos_control_asp_1['abre_matee']; echo $dos_puntos;  echo $negrin_cierra; echo $espacio;  echo $row_datos_control_asp_1['ind_refuerza']; echo $el_punto;  
                            echo $td_closeAaspecto;  

  echo $tr_close;
}




if ($row_datos_control_notasM10['asp_1'] != '') {

$el_asp_1 =  $row_datos_control_notasM10['asp_1'];

include("../../conectar.php");
$query_asp_1 = "SELECT * FROM plantilla_reforzar
                 where id_reforzar = '$el_asp_1'                       
               order by id_reforzar limit 1" ;
$datos_control_asp_1 = mysqli_query($enlace, $query_asp_1) or die(mysqli_error());
$row_datos_control_asp_1 = mysqli_fetch_array($datos_control_asp_1); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openAaspecto;
                                      echo $guion;  echo $negrin_abre; echo $row_datos_control_asp_1['abre_matee']; echo $dos_puntos;  echo $negrin_cierra; echo $espacio;  echo $row_datos_control_asp_1['ind_refuerza']; echo $el_punto;  
                            echo $td_closeAaspecto;  

  echo $tr_close;
}



if ($row_datos_control_notasM11['asp_1'] != '') {

$el_asp_1 =  $row_datos_control_notasM11['asp_1'];

include("../../conectar.php");
$query_asp_1 = "SELECT * FROM plantilla_reforzar
                 where id_reforzar = '$el_asp_1'                       
               order by id_reforzar limit 1" ;
$datos_control_asp_1 = mysqli_query($enlace, $query_asp_1) or die(mysqli_error());
$row_datos_control_asp_1 = mysqli_fetch_array($datos_control_asp_1); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openAaspecto;
                                      echo $guion; echo $negrin_abre; echo $row_datos_control_asp_1['abre_matee']; echo $dos_puntos;  echo $negrin_cierra; echo $espacio;  echo $row_datos_control_asp_1['ind_refuerza']; echo $el_punto;  
                            echo $td_closeAaspecto;  

  echo $tr_close;
}



if ($row_datos_control_notasM12['asp_1'] != '') {

$el_asp_1 =  $row_datos_control_notasM12['asp_1'];

include("../../conectar.php");
$query_asp_1 = "SELECT * FROM plantilla_reforzar
                 where id_reforzar = '$el_asp_1'                       
               order by id_reforzar limit 1" ;
$datos_control_asp_1 = mysqli_query($enlace, $query_asp_1) or die(mysqli_error());
$row_datos_control_asp_1 = mysqli_fetch_array($datos_control_asp_1); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openAaspecto;
                                      echo $guion; echo $negrin_abre; echo $row_datos_control_asp_1['abre_matee']; echo $dos_puntos;  echo $negrin_cierra; echo $espacio;  echo $row_datos_control_asp_1['ind_refuerza']; echo $el_punto;  
                            echo $td_closeAaspecto;  

  echo $tr_close;
}




if ($row_datos_control_notasM13['asp_1'] != '') {

$el_asp_1 =  $row_datos_control_notasM13['asp_1'];

include("../../conectar.php");
$query_asp_1 = "SELECT * FROM plantilla_reforzar
                 where id_reforzar = '$el_asp_1'                       
               order by id_reforzar limit 1" ;
$datos_control_asp_1 = mysqli_query($enlace, $query_asp_1) or die(mysqli_error());
$row_datos_control_asp_1 = mysqli_fetch_array($datos_control_asp_1); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openAaspecto;
                                      echo $guion; echo $negrin_abre; echo $row_datos_control_asp_1['abre_matee']; echo $dos_puntos;  echo $negrin_cierra; echo $espacio;  echo $row_datos_control_asp_1['ind_refuerza']; echo $el_punto;  
                            echo $td_closeAaspecto;  

  echo $tr_close;
}




if ($row_datos_control_notasM14['asp_1'] != '') {

$el_asp_1 =  $row_datos_control_notasM14['asp_1'];

include("../../conectar.php");
$query_asp_1 = "SELECT * FROM plantilla_reforzar
                 where id_reforzar = '$el_asp_1'                       
               order by id_reforzar limit 1" ;
$datos_control_asp_1 = mysqli_query($enlace, $query_asp_1) or die(mysqli_error());
$row_datos_control_asp_1 = mysqli_fetch_array($datos_control_asp_1); 
 
 mysqli_close($enlace);


echo $tr_open;
                            echo $td_openAaspecto;
                                      echo $guion;  echo $negrin_abre; echo $row_datos_control_asp_1['abre_matee']; echo $dos_puntos;  echo $negrin_cierra; echo $espacio; echo $row_datos_control_asp_1['ind_refuerza']; echo $el_punto;  
                            echo $td_closeAaspecto;  

  echo $tr_close;
}

?>





</table>






<table class="basetabla" style="margin-top: 14px; " cellspacing="-1">
    <tr>
        
        <td style="width:90%;" align="left" height="18"><b>Firmas:</b></td>
        <td style="width:10%;" align="center" height="18"></td>
    </tr>
</table>

<table class="basetabla" style="margin-top: 6px; margin-bottom: 6px;" cellspacing="-1">

 <tr>
     <td style="width:5%;" align="center" height="18"></td>
     <td style="width:24%; border-bottom: 1px solid black; " align="center" height="18"></td>
      <td style="width:9%;" align="center" height="18"></td>
           <td style="width:24%; border-bottom: 1px solid black; " align="center" height="18"></td>
      <td style="width:9%;" align="center" height="18"></td>
    <td style="width:24%; border-bottom: 1px solid black; " align="center" height="18"></td>
<td style="width:5%;  " align="center" height="18"></td>
  </tr>

   <tr>
     <td style="width:5%;" align="center" height="12"></td>
     <td style="width:24%; font-size: 11px;" align="center" height="12">Docente - Profesor(a)</td>
      <td style="width:9%;" align="center" height="12"></td>
           <td style="width:24%; font-size: 11px;" align="center" height="12"><?php echo $row_datos_modcabecc['sub_firma_3']; ?></td>
      <td style="width:9%;" align="center" height="12"></td>
    <td style="width:24%; font-size: 11px; " align="center" height="12">Representante</td>
<td style="width:5%;  " align="center" height="12"></td>
  </tr>

     <tr>
     <td style="width:5%;" align="center" height="12"></td>
     <td style="width:24%; font-size: 11px;" align="center" height="12"><b><?php 

include("../../conectar.php");

$query_el_es_id = "SELECT id_grado, el_profesor_es_a, el_profesor_es_b, el_profesor_es_u, el_profesor_es_c, el_profesor_es_d, el_profesor_es_e, el_profesor_es_f, el_profesor_es_g FROM grados
                        
         WHERE  id_grado = '$gradito' limit 1 ";

$datos_plantilla_el_es_id = mysqli_query($enlace, $query_el_es_id) or die(mysqli_error());
$row_datos_plantilla_el_es_id = mysqli_fetch_assoc($datos_plantilla_el_es_id); 

mysqli_close($enlace);

if ($lap1_id_seccionxxx == 1) {$este_es_el_p = $row_datos_plantilla_el_es_id['el_profesor_es_a'];  }
if ($lap1_id_seccionxxx == 2) {$este_es_el_p = $row_datos_plantilla_el_es_id['el_profesor_es_b'];  }
if ($lap1_id_seccionxxx == 9) {$este_es_el_p = $row_datos_plantilla_el_es_id['el_profesor_es_u'];  }

if ($lap1_id_seccionxxx == 11) {$este_es_el_p = $row_datos_plantilla_el_es_id['el_profesor_es_c'];  }
if ($lap1_id_seccionxxx == 12) {$este_es_el_p = $row_datos_plantilla_el_es_id['el_profesor_es_d'];  }
if ($lap1_id_seccionxxx == 13) {$este_es_el_p = $row_datos_plantilla_el_es_id['el_profesor_es_e'];  }
if ($lap1_id_seccionxxx == 14) {$este_es_el_p = $row_datos_plantilla_el_es_id['el_profesor_es_f'];  }
if ($lap1_id_seccionxxx == 15) {$este_es_el_p = $row_datos_plantilla_el_es_id['el_profesor_es_g'];  }


include("../../conectar.php");

$query_el_es = "SELECT id_per, apellido_per, nombre_per FROM plantilla_personal
                        
         WHERE  id_per = '$este_es_el_p' limit 1 ";

$datos_plantilla_el_es = mysqli_query($enlace, $query_el_es) or die(mysqli_error());
$row_datos_plantilla_el_es = mysqli_fetch_assoc($datos_plantilla_el_es); 

mysqli_close($enlace);

$firstape_el = strtok($row_datos_plantilla_el_es['apellido_per'], ' ');
$lastape_el = strstr($row_datos_plantilla_el_es['apellido_per'], ' ');


if ($lastape_el[1] != '') {
   $firstCharacterlastape_el = $lastape_el[1]; 
}

else {
    $firstCharacterlastape_el ='';
}

 echo $firstape_el; ?> <?php echo $firstCharacterlastape_el; ?>.


<?php 
$firstnam_el = strtok($row_datos_plantilla_el_es['nombre_per'], ' ');
$lastnam_el = strstr($row_datos_plantilla_el_es['nombre_per'], ' ');

if ($lastnam_el[1] != '') {
   $firstCharacterlastnam_el = $lastnam_el[1]; 
}

else {
    $firstCharacterlastnam_el ='';
} 

                                     echo $firstnam_el; ?> <?php echo $firstCharacterlastnam_el; ?>. </b>


  </td>











      <td style="width:9%;" align="center" height="12"></td>
           <td style="width:24%; font-size: 11px;" align="center" height="12"><b><?php echo $row_datos_modcabecc['firma_3']; ?></b></td>
      <td style="width:9%;" align="center" height="12"></td>
    <td style="width:24%; font-size: 11px; " align="center" height="12"><b></b></td>
<td style="width:5%;  " align="center" height="12"></td>
  </tr>

</table>











    <TABLE class="basetabla" style="padding-top: 4px;">

<TR >


  <TD style="width:1%; height:auto; font-size: 11px; color:#404347;" align="center" > </TD>

<TD style="width:97%; height:auto; font-size: 11px; color:#404347;" align="center" >Av. <?php echo $row_datos_queryplantel['nombre_av']; ?> <?php echo $row_datos_queryplantel['dir_calle_sector']; ?>,
 <?php echo $row_datos_queryplantel['nombre_vivienda']; ?>  <?php echo $row_datos_queryplantel['dir_nombre_vivienda']; ?>. RIF. <?php echo $row_datos_queryplantel['rif_plantel']; ?></TD>


  <TD style="width:1%;height:auto; font-size: 11px; color:#404347;" align="center" > </TD> 


</TR>



</TABLE>

 </page>


<?php
                }
                ?>








<?php

    $contentxx = ob_get_clean(); 

try
    {
        $hixx = $_POST["id_tituloxxx"];

        $html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356

        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("Descrip_1er_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>