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
           
            $color2 =  '#F6EFC0';
           
            $color3 =  '#F6DDC0';
            $color3b = '#F4E7D9';

            $color4 =  '#B9AAA6';

            $color5 =  '#DBE2E8';   // azul claro claro   

            $color6 =  '#F8F7F7';// azul claro     ADD8E1

            $color7 =  '#EDEEEF';// azul claro ocuro

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


$query_formato_2 = "SELECT * FROM z_formato where id_formato = 2  order by id_formato ASC limit 1" ;
$datos_formato_2 = mysqli_query($enlace, $query_formato_2) or die(mysqli_error());
$row_datos_formato_2 = mysqli_fetch_array($datos_formato_2);
$comparativo_formato_2 = $row_datos_formato_2['comparativo'];
$alfabetico_formato_2 = $row_datos_formato_2['alfabetico'];
$literal_formato_2 = $row_datos_formato_2['literal'];

$query_formato_3 = "SELECT * FROM z_formato where id_formato = 3  order by id_formato ASC limit 1" ;
$datos_formato_3 = mysqli_query($enlace, $query_formato_3) or die(mysqli_error());
$row_datos_formato_3 = mysqli_fetch_array($datos_formato_3);
$comparativo_formato_3 = $row_datos_formato_3['comparativo'];
$alfabetico_formato_3 = $row_datos_formato_3['alfabetico'];
$literal_formato_3 = $row_datos_formato_3['literal'];

$query_formato_4 = "SELECT * FROM z_formato where id_formato = 4  order by id_formato ASC limit 1" ;
$datos_formato_4 = mysqli_query($enlace, $query_formato_4) or die(mysqli_error());
$row_datos_formato_4 = mysqli_fetch_array($datos_formato_4);
$comparativo_formato_4 = $row_datos_formato_4['comparativo'];
$alfabetico_formato_4 = $row_datos_formato_4['alfabetico'];
$literal_formato_4 = $row_datos_formato_4['literal'];

$query_formato_5 = "SELECT * FROM z_formato where id_formato = 5  order by id_formato ASC limit 1" ;
$datos_formato_5 = mysqli_query($enlace, $query_formato_5) or die(mysqli_error());
$row_datos_formato_5 = mysqli_fetch_array($datos_formato_5);
$comparativo_formato_5 = $row_datos_formato_5['comparativo'];
$alfabetico_formato_5 = $row_datos_formato_5['alfabetico'];
$literal_formato_5 = $row_datos_formato_5['literal'];

$query_formato_6 = "SELECT * FROM z_formato where id_formato = 6  order by id_formato ASC limit 1" ;
$datos_formato_6 = mysqli_query($enlace, $query_formato_6) or die(mysqli_error());
$row_datos_formato_6 = mysqli_fetch_array($datos_formato_6);
$comparativo_formato_6 = $row_datos_formato_6['comparativo'];
$alfabetico_formato_6 = $row_datos_formato_6['alfabetico'];
$literal_formato_6 = $row_datos_formato_6['literal'];

$query_formato_7 = "SELECT * FROM z_formato where id_formato = 7 order by id_formato ASC limit 1" ;
$datos_formato_7 = mysqli_query($enlace, $query_formato_7) or die(mysqli_error());
$row_datos_formato_7 = mysqli_fetch_array($datos_formato_7);
$comparativo_formato_7 = $row_datos_formato_7['comparativo'];
$alfabetico_formato_7 = $row_datos_formato_7['alfabetico'];
$literal_formato_7 = $row_datos_formato_7['literal'];

$query_formato_8 = "SELECT * FROM z_formato where id_formato = 8 order by id_formato ASC limit 1" ;
$datos_formato_8 = mysqli_query($enlace, $query_formato_8) or die(mysqli_error());
$row_datos_formato_8 = mysqli_fetch_array($datos_formato_8);
$comparativo_formato_8 = $row_datos_formato_8['comparativo'];
$alfabetico_formato_8 = $row_datos_formato_8['alfabetico'];
$literal_formato_8 = $row_datos_formato_8['literal'];

$query_formato_9 = "SELECT * FROM z_formato where id_formato = 9 order by id_formato ASC limit 1" ;
$datos_formato_9 = mysqli_query($enlace, $query_formato_9) or die(mysqli_error());
$row_datos_formato_9 = mysqli_fetch_array($datos_formato_9);
$comparativo_formato_9 = $row_datos_formato_9['comparativo'];
$alfabetico_formato_9 = $row_datos_formato_9['alfabetico'];
$literal_formato_9 = $row_datos_formato_9['literal'];

$query_formato_10 = "SELECT * FROM z_formato where id_formato = 10 order by id_formato ASC limit 1" ;
$datos_formato_10 = mysqli_query($enlace, $query_formato_10) or die(mysqli_error());
$row_datos_formato_10 = mysqli_fetch_array($datos_formato_10);
$comparativo_formato_10 = $row_datos_formato_10['comparativo'];
$alfabetico_formato_10 = $row_datos_formato_10['alfabetico'];
$literal_formato_10 = $row_datos_formato_10['literal'];

$query_formato_11 = "SELECT * FROM z_formato where id_formato = 11 order by id_formato ASC limit 1" ;
$datos_formato_11 = mysqli_query($enlace, $query_formato_11) or die(mysqli_error());
$row_datos_formato_11 = mysqli_fetch_array($datos_formato_11);
$comparativo_formato_11 = $row_datos_formato_11['comparativo'];
$alfabetico_formato_11 = $row_datos_formato_11['alfabetico'];
$literal_formato_11 = $row_datos_formato_11['literal'];

$query_formato_12 = "SELECT * FROM z_formato where id_formato = 12 order by id_formato ASC limit 1" ;
$datos_formato_12 = mysqli_query($enlace, $query_formato_12) or die(mysqli_error());
$row_datos_formato_12 = mysqli_fetch_array($datos_formato_12);
$comparativo_formato_12 = $row_datos_formato_12['comparativo'];
$alfabetico_formato_12 = $row_datos_formato_12['alfabetico'];
$literal_formato_12 = $row_datos_formato_12['literal'];

$dominio_numerico = 0;
$dominio_alfabetico = 0;
$dominio_literal = 0;



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














<page backtop="1mm" backbottom="1mm" backleft="6mm" backright="1mm">


<?php

$id_seccionxxx = $_POST['id_seccionxxx'];
$id_cicloxxx = $_POST['id_cicloxxx'];
$id_gradoxxx = $_POST['id_gradoxxx'];


$id_estuxxx = $_POST['id_estuxxx'];

include("../../conectar.php");


$query = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$id_seccionxxx'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
       and  cursa_actualmente = '$id_cicloxxx'
         and  grados.id_grado = '$id_gradoxxx'         
         and reg_estu_actual.id_estud = '$id_estuxxx'        
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC LIMIT 1 " ;

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







 <TABLE class="basetabla">

<TR>

  <TD style="width:99%; height:22px; font-size: 12px;" align="center" > 

  <b>  <?php echo $row_datos_queryplantel['nombre_plantel']; ?></b> - Boleta de Calificaciones | Fecha de Expedición: <?php echo $fechaactuaaal; ?>.     

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
                <th style="width:100px;height:10px;" BGCOLOR="<?php echo $color3b;?>">Doc de Id.</th>
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




                 <td colspan="2"  align="center" ><?php echo $_POST["id_tituloxxx"]; ?> - <b><?php echo $_POST["id_tituloxxxb"]; ?></b></td>
                
                <td colspan="2"><?php echo $row_datos_estudiantes_YYY['celular_repre']; ?>  -  <?php echo $row_datos_estudiantes_YYY['telefono_repre']; ?></td>
            </tr>
        
</table>



 <table style="margin-top: 4px;" class="table2">
              <tr>
                    <th style="width:144px; height:10px;" BGCOLOR="<?php echo $color0;?>">Áreas - Asignaturas</th>

                    <th style="width:142px; height:10px;"  colspan="2" BGCOLOR="<?php echo $color1;?>">&nbsp;
                        <span style="color:grey; font-size: 10px;">&nbsp;&nbsp;Nota</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1°&nbsp;&nbsp;&nbsp;<span style="color:grey; font-size: 10px;">Promedio</span><br>



                        <span style="color:grey; font-size: 10px; ">Estudiante</span>&nbsp;&nbsp;<span style="color: grey; font-size: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aula</span>&nbsp;&nbsp;&nbsp;

                    </th>

                    <th style="width:120px; height:10px;" colspan="2" BGCOLOR="<?php echo $color2;?>">2°<br><span style="color:grey; font-size: 10px; ">Estudiante</span>&nbsp;&nbsp;<span style="color: grey; font-size: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aula</span>&nbsp;&nbsp;</th>

                    <th style="width:120px; height:10px;" colspan="2" BGCOLOR="<?php echo $color3;?>">3°<br><span style="color:grey; font-size: 10px;">Estudiante</span>&nbsp;&nbsp;<span style="color: grey; font-size: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aula</span>&nbsp;&nbsp;</th>


                    <th style="width:120px; height:10px;" colspan="2" BGCOLOR="<?php echo $color5;?>">Definitiva<br><span style="color:grey;  font-size: 10px;">Estudiante</span>&nbsp;&nbsp;<span style="color: grey; font-size: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aula</span>&nbsp;&nbsp;</th>

                    <th style="width:60px; height:10px; font-size: 12px;" colspan="2" BGCOLOR="<?php echo $color0;?>">Revisión<br><span style="color:grey;  font-size: 10px;">1F&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2F</span></th>

                </tr>




<tr style="font-size: 12px;">

                <td style="width:144px;height:10px;font-size: 11px;"><?php echo $row_datos_controlmat['a_aaa'];?>
                    
<span style="color:red;"><b> <?php

               $a_ayuda = '';

                if ($row_datos_controlmat['a_suma'] !=1) {
                  $a_ayuda = '#';
               }

                echo $a_ayuda;?></b></span>

                </td>


<?php


$el_reg_del_est_es = $row_datos_control['id_reg_estu_actual'];

$el_dicho_id_e = $row_datos_control['id_estud'];


include("../../conectar.php");

$query_notas1 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = 1
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas1 = mysqli_query($enlace, $query_notas1) or die(mysqli_error());
$row_datos_control_notasM1 = mysqli_fetch_array($datos_control_notas1); 


$query_notas2 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = 2
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas2 = mysqli_query($enlace, $query_notas2) or die(mysqli_error());
$row_datos_control_notasM2 = mysqli_fetch_array($datos_control_notas2); 


$query_notas3 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = 3
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas3 = mysqli_query($enlace, $query_notas3) or die(mysqli_error());
$row_datos_control_notasM3 = mysqli_fetch_array($datos_control_notas3); 


$query_notas4 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = 4
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas4 = mysqli_query($enlace, $query_notas4) or die(mysqli_error());
$row_datos_control_notasM4 = mysqli_fetch_array($datos_control_notas4); 


$query_notas5 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = 5
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas5 = mysqli_query($enlace, $query_notas5) or die(mysqli_error());
$row_datos_control_notasM5 = mysqli_fetch_array($datos_control_notas5); 


$query_notas6 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = 6
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas6 = mysqli_query($enlace, $query_notas6) or die(mysqli_error());
$row_datos_control_notasM6 = mysqli_fetch_array($datos_control_notas6); 


$query_notas7 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = 7
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas7 = mysqli_query($enlace, $query_notas7) or die(mysqli_error());
$row_datos_control_notasM7 = mysqli_fetch_array($datos_control_notas7); 


$query_notas8 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = 8
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas8 = mysqli_query($enlace, $query_notas8) or die(mysqli_error());
$row_datos_control_notasM8 = mysqli_fetch_array($datos_control_notas8); 


$query_notas9 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = 9
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas9 = mysqli_query($enlace, $query_notas9) or die(mysqli_error());
$row_datos_control_notasM9 = mysqli_fetch_array($datos_control_notas9); 


$query_notas10 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = 10
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas10 = mysqli_query($enlace, $query_notas10) or die(mysqli_error());
$row_datos_control_notasM10 = mysqli_fetch_array($datos_control_notas10); 


$query_notas11 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = 11
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas11 = mysqli_query($enlace, $query_notas11) or die(mysqli_error());
$row_datos_control_notasM11 = mysqli_fetch_array($datos_control_notas11); 


$query_notas12 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = 12
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas12 = mysqli_query($enlace, $query_notas12) or die(mysqli_error());
$row_datos_control_notasM12 = mysqli_fetch_array($datos_control_notas12); 


$query_notas13 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = 13
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas13 = mysqli_query($enlace, $query_notas13) or die(mysqli_error());
$row_datos_control_notasM13 = mysqli_fetch_array($datos_control_notas13); 


$query_notas14 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = 14
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas14 = mysqli_query($enlace, $query_notas14) or die(mysqli_error());
$row_datos_control_notasM14 = mysqli_fetch_array($datos_control_notas14); 

 mysqli_close($enlace);



       

$nota_1_M1_L1 = $row_datos_control_notasM1["nt_11"];
$nota_2_M1_L1 = $row_datos_control_notasM1["nt_12"];
$nota_3_M1_L1 = $row_datos_control_notasM1["nt_13"];
$nota_4_M1_L1 = $row_datos_control_notasM1["nt_14"];
$nota_5_M1_L1 = $row_datos_control_notasM1["nt_15"];
$nota_6_M1_L1 = $row_datos_control_notasM1["nt_16"];
$nota_7_M1_L1 = $row_datos_control_notasM1["nt_17"];
$notaAu_M1_L1 = $row_datos_control_notasM1["nt_Au1"];


$nota_real_1_M1_L1 = ($row_datos_control_notasM1["nt_11"] * $para_el_porc_V1_M1_L1)/$el_puntaje_completo_es;
$nota_real_2_M1_L1 = ($row_datos_control_notasM1["nt_12"] * $para_el_porc_V2_M1_L1)/$el_puntaje_completo_es;
$nota_real_3_M1_L1 = ($row_datos_control_notasM1["nt_13"] * $para_el_porc_V3_M1_L1)/$el_puntaje_completo_es;
$nota_real_4_M1_L1 = ($row_datos_control_notasM1["nt_14"] * $para_el_porc_V4_M1_L1)/$el_puntaje_completo_es;
$nota_real_5_M1_L1 = ($row_datos_control_notasM1["nt_15"] * $para_el_porc_V5_M1_L1)/$el_puntaje_completo_es;
$nota_real_6_M1_L1 = ($row_datos_control_notasM1["nt_16"] * $para_el_porc_V6_M1_L1)/$el_puntaje_completo_es;
$nota_real_7_M1_L1 = ($row_datos_control_notasM1["nt_17"] * $para_el_porc_V7_M1_L1)/$el_puntaje_completo_es;

$total_seven_M1_L1 = $nota_real_1_M1_L1+$nota_real_2_M1_L1+$nota_real_3_M1_L1+$nota_real_4_M1_L1+$nota_real_5_M1_L1+$nota_real_6_M1_L1+$nota_real_7_M1_L1;

$total_seven_con_Au_M1_L1 = $total_seven_M1_L1+ $row_datos_control_notasM1["nt_Au1"];

$total_seven_con_Au_redon_M1_L1_redondeado1 =number_format($total_seven_con_Au_M1_L1, 1, '.', '');

$total_seven_con_Au_redon_M1_L1 =number_format($total_seven_con_Au_redon_M1_L1_redondeado1);


if ($total_seven_con_Au_M1_L1 == 0) {
    $total_seven_con_Au_redon_M1_L1xx = '';

    $M1_L1 = '0';
}

else {
 $total_seven_con_Au_redon_M1_L1xx = $total_seven_con_Au_redon_M1_L1;

    $M1_L1 = '1';
}

//materia 1 lapso 1 




$nota_1_M1_L2 = $row_datos_control_notasM1["nt_21"];
$nota_2_M1_L2 = $row_datos_control_notasM1["nt_22"];
$nota_3_M1_L2 = $row_datos_control_notasM1["nt_23"];
$nota_4_M1_L2 = $row_datos_control_notasM1["nt_24"];
$nota_5_M1_L2 = $row_datos_control_notasM1["nt_25"];
$nota_6_M1_L2 = $row_datos_control_notasM1["nt_26"];
$nota_7_M1_L2 = $row_datos_control_notasM1["nt_27"];
$notaAu_M1_L2 = $row_datos_control_notasM1["nt_Au2"];


$nota_real_1_M1_L2 = ($row_datos_control_notasM1["nt_21"] * $para_el_porc_V1_M1_L2)/$el_puntaje_completo_es;
$nota_real_2_M1_L2 = ($row_datos_control_notasM1["nt_22"] * $para_el_porc_V2_M1_L2)/$el_puntaje_completo_es;
$nota_real_3_M1_L2 = ($row_datos_control_notasM1["nt_23"] * $para_el_porc_V3_M1_L2)/$el_puntaje_completo_es;
$nota_real_4_M1_L2 = ($row_datos_control_notasM1["nt_24"] * $para_el_porc_V4_M1_L2)/$el_puntaje_completo_es;
$nota_real_5_M1_L2 = ($row_datos_control_notasM1["nt_25"] * $para_el_porc_V5_M1_L2)/$el_puntaje_completo_es;
$nota_real_6_M1_L2 = ($row_datos_control_notasM1["nt_26"] * $para_el_porc_V6_M1_L2)/$el_puntaje_completo_es;
$nota_real_7_M1_L2 = ($row_datos_control_notasM1["nt_27"] * $para_el_porc_V7_M1_L2)/$el_puntaje_completo_es;

$total_seven_M1_L2 = $nota_real_1_M1_L2+$nota_real_2_M1_L2+$nota_real_3_M1_L2+$nota_real_4_M1_L2+$nota_real_5_M1_L2+$nota_real_6_M1_L2+$nota_real_7_M1_L2;

$total_seven_con_Au_M1_L2 = $total_seven_M1_L2+ $row_datos_control_notasM1["nt_Au2"];

$total_seven_con_Au_redon_M1_L2_redondeado1 =number_format($total_seven_con_Au_M1_L2, 1, '.', '');

$total_seven_con_Au_redon_M1_L2 =number_format($total_seven_con_Au_redon_M1_L2_redondeado1);


if ($total_seven_con_Au_M1_L2 == 0) {
    $total_seven_con_Au_redon_M1_L2xx = '';

    $M1_L2 = '0';
}

else {
 $total_seven_con_Au_redon_M1_L2xx = $total_seven_con_Au_redon_M1_L2;

 $M1_L2 = '1';
}



//materia 1 lapso 2 

$nota_1_M1_L3 = $row_datos_control_notasM1["nt_31"];
$nota_2_M1_L3 = $row_datos_control_notasM1["nt_32"];
$nota_3_M1_L3 = $row_datos_control_notasM1["nt_33"];
$nota_4_M1_L3 = $row_datos_control_notasM1["nt_34"];
$nota_5_M1_L3 = $row_datos_control_notasM1["nt_35"];
$nota_6_M1_L3 = $row_datos_control_notasM1["nt_36"];
$nota_7_M1_L3 = $row_datos_control_notasM1["nt_37"];
$notaAu_M1_L3 = $row_datos_control_notasM1["nt_Au3"];


$nota_real_1_M1_L3 = ($row_datos_control_notasM1["nt_31"] * $para_el_porc_V1_M1_L3)/$el_puntaje_completo_es;
$nota_real_2_M1_L3 = ($row_datos_control_notasM1["nt_32"] * $para_el_porc_V2_M1_L3)/$el_puntaje_completo_es;
$nota_real_3_M1_L3 = ($row_datos_control_notasM1["nt_33"] * $para_el_porc_V3_M1_L3)/$el_puntaje_completo_es;
$nota_real_4_M1_L3 = ($row_datos_control_notasM1["nt_34"] * $para_el_porc_V4_M1_L3)/$el_puntaje_completo_es;
$nota_real_5_M1_L3 = ($row_datos_control_notasM1["nt_35"] * $para_el_porc_V5_M1_L3)/$el_puntaje_completo_es;
$nota_real_6_M1_L3 = ($row_datos_control_notasM1["nt_36"] * $para_el_porc_V6_M1_L3)/$el_puntaje_completo_es;
$nota_real_7_M1_L3 = ($row_datos_control_notasM1["nt_37"] * $para_el_porc_V7_M1_L3)/$el_puntaje_completo_es;

$total_seven_M1_L3 = $nota_real_1_M1_L3+$nota_real_2_M1_L3+$nota_real_3_M1_L3+$nota_real_4_M1_L3+$nota_real_5_M1_L3+$nota_real_6_M1_L3+$nota_real_7_M1_L3;

$total_seven_con_Au_M1_L3 = $total_seven_M1_L3+ $row_datos_control_notasM1["nt_Au3"];

$total_seven_con_Au_redon_M1_L3_redondeado1 =number_format($total_seven_con_Au_M1_L3, 1, '.', '');

$total_seven_con_Au_redon_M1_L3 =number_format($total_seven_con_Au_redon_M1_L3_redondeado1);




if ($total_seven_con_Au_M1_L3 == 0) {
    $total_seven_con_Au_redon_M1_L3xx = '';

    $M1_L3 = '0';
}

else {
 $total_seven_con_Au_redon_M1_L3xx = $total_seven_con_Au_redon_M1_L3;

 $M1_L3 = '1';
}


//materia 1 lapso 3 


$divisor_M1 = '';

if ($total_seven_con_Au_M1_L1 == 0) {
    $divisor_M1 = $divisor_M1+0.0000001;
}

else {$divisor_M1++;}


if ($total_seven_con_Au_M1_L2 == 0) {
    $divisor_M1 = $divisor_M1+0.0000001;
}

else {$divisor_M1++;}


if ($total_seven_con_Au_M1_L3 == 0) {
    $divisor_M1 = $divisor_M1+0.0000001;
}

else {$divisor_M1++;}


$total_seven_con_Au_redon_M1_aprox = ($total_seven_con_Au_redon_M1_L1 + $total_seven_con_Au_redon_M1_L2 + $total_seven_con_Au_redon_M1_L3)/$divisor_M1;

$total_seven_con_Au_redon_M1aux =number_format($total_seven_con_Au_redon_M1_aprox, 1, '.', '');

$total_seven_con_Au_redon_M1 =number_format($total_seven_con_Au_redon_M1aux);


if ($total_seven_con_Au_redon_M1_aprox == 0) {
    $total_seven_con_Au_redon_M1_aproxxx = '';

    $tot_M1 = '0';
}


if ($total_seven_con_Au_redon_M1_aprox >= 0.00000000000000001 && $total_seven_con_Au_redon_M1_aprox <=0.4) {
    $total_seven_con_Au_redon_M1_aproxxx = '0';

    $tot_M1 = '1';
}


else {
 $total_seven_con_Au_redon_M1_aproxxx = $total_seven_con_Au_redon_M1;

 $tot_M1 = '1';
}




$nota_1_M2_L1 = $row_datos_control_notasM2["nt_11"];
$nota_2_M2_L1 = $row_datos_control_notasM2["nt_12"];
$nota_3_M2_L1 = $row_datos_control_notasM2["nt_13"];
$nota_4_M2_L1 = $row_datos_control_notasM2["nt_14"];
$nota_5_M2_L1 = $row_datos_control_notasM2["nt_15"];
$nota_6_M2_L1 = $row_datos_control_notasM2["nt_16"];
$nota_7_M2_L1 = $row_datos_control_notasM2["nt_17"];
$notaAu_M2_L1 = $row_datos_control_notasM2["nt_Au1"];


$nota_real_1_M2_L1 = ($row_datos_control_notasM2["nt_11"] * $para_el_porc_V1_M2_L1)/$el_puntaje_completo_es;
$nota_real_2_M2_L1 = ($row_datos_control_notasM2["nt_12"] * $para_el_porc_V2_M2_L1)/$el_puntaje_completo_es;
$nota_real_3_M2_L1 = ($row_datos_control_notasM2["nt_13"] * $para_el_porc_V3_M2_L1)/$el_puntaje_completo_es;
$nota_real_4_M2_L1 = ($row_datos_control_notasM2["nt_14"] * $para_el_porc_V4_M2_L1)/$el_puntaje_completo_es;
$nota_real_5_M2_L1 = ($row_datos_control_notasM2["nt_15"] * $para_el_porc_V5_M2_L1)/$el_puntaje_completo_es;
$nota_real_6_M2_L1 = ($row_datos_control_notasM2["nt_16"] * $para_el_porc_V6_M2_L1)/$el_puntaje_completo_es;
$nota_real_7_M2_L1 = ($row_datos_control_notasM2["nt_17"] * $para_el_porc_V7_M2_L1)/$el_puntaje_completo_es;

$total_seven_M2_L1 = $nota_real_1_M2_L1+$nota_real_2_M2_L1+$nota_real_3_M2_L1+$nota_real_4_M2_L1+$nota_real_5_M2_L1+$nota_real_6_M2_L1+$nota_real_7_M2_L1;

$total_seven_con_Au_M2_L1 = $total_seven_M2_L1+ $row_datos_control_notasM2["nt_Au1"];

$total_seven_con_Au_M2_L1_redondeado1 =number_format($total_seven_con_Au_M2_L1, 1, '.', '');

$total_seven_con_Au_redon_M2_L1 =number_format($total_seven_con_Au_M2_L1_redondeado1);


if ($total_seven_con_Au_M2_L1 == 0) {
    $total_seven_con_Au_redon_M2_L1xx = '';

    $M2_L1 = '0';
}

else {
 $total_seven_con_Au_redon_M2_L1xx = $total_seven_con_Au_redon_M2_L1;

    $M2_L1 = '1';
}

//materia 1 lapso 1 




$nota_1_M2_L2 = $row_datos_control_notasM2["nt_21"];
$nota_2_M2_L2 = $row_datos_control_notasM2["nt_22"];
$nota_3_M2_L2 = $row_datos_control_notasM2["nt_23"];
$nota_4_M2_L2 = $row_datos_control_notasM2["nt_24"];
$nota_5_M2_L2 = $row_datos_control_notasM2["nt_25"];
$nota_6_M2_L2 = $row_datos_control_notasM2["nt_26"];
$nota_7_M2_L2 = $row_datos_control_notasM2["nt_27"];
$notaAu_M2_L2 = $row_datos_control_notasM2["nt_Au2"];


$nota_real_1_M2_L2 = ($row_datos_control_notasM2["nt_21"] * $para_el_porc_V1_M2_L2)/$el_puntaje_completo_es;
$nota_real_2_M2_L2 = ($row_datos_control_notasM2["nt_22"] * $para_el_porc_V2_M2_L2)/$el_puntaje_completo_es;
$nota_real_3_M2_L2 = ($row_datos_control_notasM2["nt_23"] * $para_el_porc_V3_M2_L2)/$el_puntaje_completo_es;
$nota_real_4_M2_L2 = ($row_datos_control_notasM2["nt_24"] * $para_el_porc_V4_M2_L2)/$el_puntaje_completo_es;
$nota_real_5_M2_L2 = ($row_datos_control_notasM2["nt_25"] * $para_el_porc_V5_M2_L2)/$el_puntaje_completo_es;
$nota_real_6_M2_L2 = ($row_datos_control_notasM2["nt_26"] * $para_el_porc_V6_M2_L2)/$el_puntaje_completo_es;
$nota_real_7_M2_L2 = ($row_datos_control_notasM2["nt_27"] * $para_el_porc_V7_M2_L2)/$el_puntaje_completo_es;

$total_seven_M2_L2 = $nota_real_1_M2_L2+$nota_real_2_M2_L2+$nota_real_3_M2_L2+$nota_real_4_M2_L2+$nota_real_5_M2_L2+$nota_real_6_M2_L2+$nota_real_7_M2_L2;

$total_seven_con_Au_M2_L2 = $total_seven_M2_L2+ $row_datos_control_notasM2["nt_Au2"];

$total_seven_con_Au_M2_L2_redondeado1 =number_format($total_seven_con_Au_M2_L2, 1, '.', '');

$total_seven_con_Au_redon_M2_L2 =number_format($total_seven_con_Au_M2_L2_redondeado1);


if ($total_seven_con_Au_M2_L2 == 0) {
    $total_seven_con_Au_redon_M2_L2xx = '';

    $M2_L2 = '0';
}

else {
 $total_seven_con_Au_redon_M2_L2xx = $total_seven_con_Au_redon_M2_L2;

 $M2_L2 = '1';
}



//materia 1 lapso 2 

$nota_1_M2_L3 = $row_datos_control_notasM2["nt_31"];
$nota_2_M2_L3 = $row_datos_control_notasM2["nt_32"];
$nota_3_M2_L3 = $row_datos_control_notasM2["nt_33"];
$nota_4_M2_L3 = $row_datos_control_notasM2["nt_34"];
$nota_5_M2_L3 = $row_datos_control_notasM2["nt_35"];
$nota_6_M2_L3 = $row_datos_control_notasM2["nt_36"];
$nota_7_M2_L3 = $row_datos_control_notasM2["nt_37"];
$notaAu_M2_L3 = $row_datos_control_notasM2["nt_Au3"];


$nota_real_1_M2_L3 = ($row_datos_control_notasM2["nt_31"] * $para_el_porc_V1_M2_L3)/$el_puntaje_completo_es;
$nota_real_2_M2_L3 = ($row_datos_control_notasM2["nt_32"] * $para_el_porc_V2_M2_L3)/$el_puntaje_completo_es;
$nota_real_3_M2_L3 = ($row_datos_control_notasM2["nt_33"] * $para_el_porc_V3_M2_L3)/$el_puntaje_completo_es;
$nota_real_4_M2_L3 = ($row_datos_control_notasM2["nt_34"] * $para_el_porc_V4_M2_L3)/$el_puntaje_completo_es;
$nota_real_5_M2_L3 = ($row_datos_control_notasM2["nt_35"] * $para_el_porc_V5_M2_L3)/$el_puntaje_completo_es;
$nota_real_6_M2_L3 = ($row_datos_control_notasM2["nt_36"] * $para_el_porc_V6_M2_L3)/$el_puntaje_completo_es;
$nota_real_7_M2_L3 = ($row_datos_control_notasM2["nt_37"] * $para_el_porc_V7_M2_L3)/$el_puntaje_completo_es;

$total_seven_M2_L3 = $nota_real_1_M2_L3+$nota_real_2_M2_L3+$nota_real_3_M2_L3+$nota_real_4_M2_L3+$nota_real_5_M2_L3+$nota_real_6_M2_L3+$nota_real_7_M2_L3;

$total_seven_con_Au_M2_L3 = $total_seven_M2_L3+ $row_datos_control_notasM2["nt_Au3"];

$total_seven_con_Au_M2_L3_redondeado1 =number_format($total_seven_con_Au_M2_L3, 1, '.', '');

$total_seven_con_Au_redon_M2_L3 =number_format($total_seven_con_Au_M2_L3_redondeado1);




if ($total_seven_con_Au_M2_L3 == 0) {
    $total_seven_con_Au_redon_M2_L3xx = '';

    $M2_L3 = '0';
}

else {
 $total_seven_con_Au_redon_M2_L3xx = $total_seven_con_Au_redon_M2_L3;

 $M2_L3 = '1';
}


//materia 1 lapso 3 


$divisor_M2 = '';

if ($total_seven_con_Au_M2_L1 == 0) {
    $divisor_M2 = $divisor_M2+0.0000001;
}

else {$divisor_M2++;}


if ($total_seven_con_Au_M2_L2 == 0) {
    $divisor_M2 = $divisor_M2+0.0000001;
}

else {$divisor_M2++;}


if ($total_seven_con_Au_M2_L3 == 0) {
    $divisor_M2 = $divisor_M2+0.0000001;
}

else {$divisor_M2++;}


$total_seven_con_Au_redon_M2_aprox = ($total_seven_con_Au_redon_M2_L1 + $total_seven_con_Au_redon_M2_L2 + $total_seven_con_Au_redon_M2_L3)/$divisor_M2;

$total_seven_con_Au_redon_M2_aprox_redondeado1 =number_format($total_seven_con_Au_redon_M2_aprox, 1, '.', '');

$total_seven_con_Au_redon_M2 =number_format($total_seven_con_Au_redon_M2_aprox_redondeado1);


if ($total_seven_con_Au_redon_M2_aprox == 0) {
    $total_seven_con_Au_redon_M2_aproxxx = '';

    $tot_M2 = '0';
}

if ($total_seven_con_Au_redon_M2_aprox >= 0.00000000000000001 && $total_seven_con_Au_redon_M2_aprox <=0.4) {
    $total_seven_con_Au_redon_M2_aproxxx = '0';

    $tot_M2 = '1';
}



else {
 $total_seven_con_Au_redon_M2_aproxxx = $total_seven_con_Au_redon_M2;

 $tot_M2 = '1';
}






$nota_1_M3_L1 = $row_datos_control_notasM3["nt_11"];
$nota_2_M3_L1 = $row_datos_control_notasM3["nt_12"];
$nota_3_M3_L1 = $row_datos_control_notasM3["nt_13"];
$nota_4_M3_L1 = $row_datos_control_notasM3["nt_14"];
$nota_5_M3_L1 = $row_datos_control_notasM3["nt_15"];
$nota_6_M3_L1 = $row_datos_control_notasM3["nt_16"];
$nota_7_M3_L1 = $row_datos_control_notasM3["nt_17"];
$notaAu_M3_L1 = $row_datos_control_notasM3["nt_Au1"];


$nota_real_1_M3_L1 = ($row_datos_control_notasM3["nt_11"] * $para_el_porc_V1_M3_L1)/$el_puntaje_completo_es;
$nota_real_2_M3_L1 = ($row_datos_control_notasM3["nt_12"] * $para_el_porc_V2_M3_L1)/$el_puntaje_completo_es;
$nota_real_3_M3_L1 = ($row_datos_control_notasM3["nt_13"] * $para_el_porc_V3_M3_L1)/$el_puntaje_completo_es;
$nota_real_4_M3_L1 = ($row_datos_control_notasM3["nt_14"] * $para_el_porc_V4_M3_L1)/$el_puntaje_completo_es;
$nota_real_5_M3_L1 = ($row_datos_control_notasM3["nt_15"] * $para_el_porc_V5_M3_L1)/$el_puntaje_completo_es;
$nota_real_6_M3_L1 = ($row_datos_control_notasM3["nt_16"] * $para_el_porc_V6_M3_L1)/$el_puntaje_completo_es;
$nota_real_7_M3_L1 = ($row_datos_control_notasM3["nt_17"] * $para_el_porc_V7_M3_L1)/$el_puntaje_completo_es;

$total_seven_M3_L1 = $nota_real_1_M3_L1+$nota_real_2_M3_L1+$nota_real_3_M3_L1+$nota_real_4_M3_L1+$nota_real_5_M3_L1+$nota_real_6_M3_L1+$nota_real_7_M3_L1;

$total_seven_con_Au_M3_L1 = $total_seven_M3_L1+ $row_datos_control_notasM3["nt_Au1"];

$total_seven_con_Au_M3_L1_redondeado1 =number_format($total_seven_con_Au_M3_L1, 1, '.', '');

$total_seven_con_Au_redon_M3_L1 =number_format($total_seven_con_Au_M3_L1_redondeado1);


if ($total_seven_con_Au_M3_L1 == 0) {
    $total_seven_con_Au_redon_M3_L1xx = '';

    $M3_L1 = '0';
}

else {
 $total_seven_con_Au_redon_M3_L1xx = $total_seven_con_Au_redon_M3_L1;

    $M3_L1 = '1';
}

//materia 1 lapso 1 




$nota_1_M3_L2 = $row_datos_control_notasM3["nt_21"];
$nota_2_M3_L2 = $row_datos_control_notasM3["nt_22"];
$nota_3_M3_L2 = $row_datos_control_notasM3["nt_23"];
$nota_4_M3_L2 = $row_datos_control_notasM3["nt_24"];
$nota_5_M3_L2 = $row_datos_control_notasM3["nt_25"];
$nota_6_M3_L2 = $row_datos_control_notasM3["nt_26"];
$nota_7_M3_L2 = $row_datos_control_notasM3["nt_27"];
$notaAu_M3_L2 = $row_datos_control_notasM3["nt_Au2"];


$nota_real_1_M3_L2 = ($row_datos_control_notasM3["nt_21"] * $para_el_porc_V1_M3_L2)/$el_puntaje_completo_es;
$nota_real_2_M3_L2 = ($row_datos_control_notasM3["nt_22"] * $para_el_porc_V2_M3_L2)/$el_puntaje_completo_es;
$nota_real_3_M3_L2 = ($row_datos_control_notasM3["nt_23"] * $para_el_porc_V3_M3_L2)/$el_puntaje_completo_es;
$nota_real_4_M3_L2 = ($row_datos_control_notasM3["nt_24"] * $para_el_porc_V4_M3_L2)/$el_puntaje_completo_es;
$nota_real_5_M3_L2 = ($row_datos_control_notasM3["nt_25"] * $para_el_porc_V5_M3_L2)/$el_puntaje_completo_es;
$nota_real_6_M3_L2 = ($row_datos_control_notasM3["nt_26"] * $para_el_porc_V6_M3_L2)/$el_puntaje_completo_es;
$nota_real_7_M3_L2 = ($row_datos_control_notasM3["nt_27"] * $para_el_porc_V7_M3_L2)/$el_puntaje_completo_es;

$total_seven_M3_L2 = $nota_real_1_M3_L2+$nota_real_2_M3_L2+$nota_real_3_M3_L2+$nota_real_4_M3_L2+$nota_real_5_M3_L2+$nota_real_6_M3_L2+$nota_real_7_M3_L2;

$total_seven_con_Au_M3_L2 = $total_seven_M3_L2+ $row_datos_control_notasM3["nt_Au2"];

$total_seven_con_Au_M3_L2_redondeado1 =number_format($total_seven_con_Au_M3_L2, 1, '.', '');

$total_seven_con_Au_redon_M3_L2 =number_format($total_seven_con_Au_M3_L2_redondeado1);


if ($total_seven_con_Au_M3_L2 == 0) {
    $total_seven_con_Au_redon_M3_L2xx = '';

    $M3_L2 = '0';
}

else {
 $total_seven_con_Au_redon_M3_L2xx = $total_seven_con_Au_redon_M3_L2;

 $M3_L2 = '1';
}



//materia 1 lapso 2 

$nota_1_M3_L3 = $row_datos_control_notasM3["nt_31"];
$nota_2_M3_L3 = $row_datos_control_notasM3["nt_32"];
$nota_3_M3_L3 = $row_datos_control_notasM3["nt_33"];
$nota_4_M3_L3 = $row_datos_control_notasM3["nt_34"];
$nota_5_M3_L3 = $row_datos_control_notasM3["nt_35"];
$nota_6_M3_L3 = $row_datos_control_notasM3["nt_36"];
$nota_7_M3_L3 = $row_datos_control_notasM3["nt_37"];
$notaAu_M3_L3 = $row_datos_control_notasM3["nt_Au3"];


$nota_real_1_M3_L3 = ($row_datos_control_notasM3["nt_31"] * $para_el_porc_V1_M3_L3)/$el_puntaje_completo_es;
$nota_real_2_M3_L3 = ($row_datos_control_notasM3["nt_32"] * $para_el_porc_V2_M3_L3)/$el_puntaje_completo_es;
$nota_real_3_M3_L3 = ($row_datos_control_notasM3["nt_33"] * $para_el_porc_V3_M3_L3)/$el_puntaje_completo_es;
$nota_real_4_M3_L3 = ($row_datos_control_notasM3["nt_34"] * $para_el_porc_V4_M3_L3)/$el_puntaje_completo_es;
$nota_real_5_M3_L3 = ($row_datos_control_notasM3["nt_35"] * $para_el_porc_V5_M3_L3)/$el_puntaje_completo_es;
$nota_real_6_M3_L3 = ($row_datos_control_notasM3["nt_36"] * $para_el_porc_V6_M3_L3)/$el_puntaje_completo_es;
$nota_real_7_M3_L3 = ($row_datos_control_notasM3["nt_37"] * $para_el_porc_V7_M3_L3)/$el_puntaje_completo_es;

$total_seven_M3_L3 = $nota_real_1_M3_L3+$nota_real_2_M3_L3+$nota_real_3_M3_L3+$nota_real_4_M3_L3+$nota_real_5_M3_L3+$nota_real_6_M3_L3+$nota_real_7_M3_L3;

$total_seven_con_Au_M3_L3 = $total_seven_M3_L3+ $row_datos_control_notasM3["nt_Au3"];

$total_seven_con_Au_M3_L3_redondeado1 =number_format($total_seven_con_Au_M3_L3, 1, '.', '');

$total_seven_con_Au_redon_M3_L3 =number_format($total_seven_con_Au_M3_L3_redondeado1);




if ($total_seven_con_Au_M3_L3 == 0) {
    $total_seven_con_Au_redon_M3_L3xx = '';

    $M3_L3 = '0';
}

else {
 $total_seven_con_Au_redon_M3_L3xx = $total_seven_con_Au_redon_M3_L3;

 $M3_L3 = '1';
}


//materia 1 lapso 3 


$divisor_M3 = '';

if ($total_seven_con_Au_M3_L1 == 0) {
    $divisor_M3 = $divisor_M3+0.0000001;
}

else {$divisor_M3++;}


if ($total_seven_con_Au_M3_L2 == 0) {
    $divisor_M3 = $divisor_M3+0.0000001;
}

else {$divisor_M3++;}


if ($total_seven_con_Au_M3_L3 == 0) {
    $divisor_M3 = $divisor_M3+0.0000001;
}

else {$divisor_M3++;}


$total_seven_con_Au_redon_M3_aprox = ($total_seven_con_Au_redon_M3_L1 + $total_seven_con_Au_redon_M3_L2 + $total_seven_con_Au_redon_M3_L3)/$divisor_M3;

$total_seven_con_Au_redon_M3_redondeado1 =number_format($total_seven_con_Au_redon_M3_aprox, 1, '.', '');


$total_seven_con_Au_redon_M3 =number_format($total_seven_con_Au_redon_M3_redondeado1);


if ($total_seven_con_Au_redon_M3_aprox == 0) {
    $total_seven_con_Au_redon_M3_aproxxx = '';

    $tot_M3 = '0';
}


if ($total_seven_con_Au_redon_M3_aprox >= 0.00000000000000001 && $total_seven_con_Au_redon_M3_aprox <=0.4) {
    $total_seven_con_Au_redon_M3_aproxxx = '0';

    $tot_M3 = '1';
}



else {
 $total_seven_con_Au_redon_M3_aproxxx = $total_seven_con_Au_redon_M3;

 $tot_M3 = '1';
}










$nota_1_M4_L1 = $row_datos_control_notasM4["nt_11"];
$nota_2_M4_L1 = $row_datos_control_notasM4["nt_12"];
$nota_3_M4_L1 = $row_datos_control_notasM4["nt_13"];
$nota_4_M4_L1 = $row_datos_control_notasM4["nt_14"];
$nota_5_M4_L1 = $row_datos_control_notasM4["nt_15"];
$nota_6_M4_L1 = $row_datos_control_notasM4["nt_16"];
$nota_7_M4_L1 = $row_datos_control_notasM4["nt_17"];
$notaAu_M4_L1 = $row_datos_control_notasM4["nt_Au1"];


$nota_real_1_M4_L1 = ($row_datos_control_notasM4["nt_11"] * $para_el_porc_V1_M4_L1)/$el_puntaje_completo_es;
$nota_real_2_M4_L1 = ($row_datos_control_notasM4["nt_12"] * $para_el_porc_V2_M4_L1)/$el_puntaje_completo_es;
$nota_real_3_M4_L1 = ($row_datos_control_notasM4["nt_13"] * $para_el_porc_V3_M4_L1)/$el_puntaje_completo_es;
$nota_real_4_M4_L1 = ($row_datos_control_notasM4["nt_14"] * $para_el_porc_V4_M4_L1)/$el_puntaje_completo_es;
$nota_real_5_M4_L1 = ($row_datos_control_notasM4["nt_15"] * $para_el_porc_V5_M4_L1)/$el_puntaje_completo_es;
$nota_real_6_M4_L1 = ($row_datos_control_notasM4["nt_16"] * $para_el_porc_V6_M4_L1)/$el_puntaje_completo_es;
$nota_real_7_M4_L1 = ($row_datos_control_notasM4["nt_17"] * $para_el_porc_V7_M4_L1)/$el_puntaje_completo_es;

$total_seven_M4_L1 = $nota_real_1_M4_L1+$nota_real_2_M4_L1+$nota_real_3_M4_L1+$nota_real_4_M4_L1+$nota_real_5_M4_L1+$nota_real_6_M4_L1+$nota_real_7_M4_L1;

$total_seven_con_Au_M4_L1 = $total_seven_M4_L1+ $row_datos_control_notasM4["nt_Au1"];


$total_seven_con_Au_M4_L1_redondeado1 =number_format($total_seven_con_Au_M4_L1, 1, '.', '');


$total_seven_con_Au_redon_M4_L1 =number_format($total_seven_con_Au_M4_L1_redondeado1);


if ($total_seven_con_Au_M4_L1 == 0) {
    $total_seven_con_Au_redon_M4_L1xx = '';

    $M4_L1 = '0';
}

else {
 $total_seven_con_Au_redon_M4_L1xx = $total_seven_con_Au_redon_M4_L1;

    $M4_L1 = '1';
}

//materia 1 lapso 1 




$nota_1_M4_L2 = $row_datos_control_notasM4["nt_21"];
$nota_2_M4_L2 = $row_datos_control_notasM4["nt_22"];
$nota_3_M4_L2 = $row_datos_control_notasM4["nt_23"];
$nota_4_M4_L2 = $row_datos_control_notasM4["nt_24"];
$nota_5_M4_L2 = $row_datos_control_notasM4["nt_25"];
$nota_6_M4_L2 = $row_datos_control_notasM4["nt_26"];
$nota_7_M4_L2 = $row_datos_control_notasM4["nt_27"];
$notaAu_M4_L2 = $row_datos_control_notasM4["nt_Au2"];


$nota_real_1_M4_L2 = ($row_datos_control_notasM4["nt_21"] * $para_el_porc_V1_M4_L2)/$el_puntaje_completo_es;
$nota_real_2_M4_L2 = ($row_datos_control_notasM4["nt_22"] * $para_el_porc_V2_M4_L2)/$el_puntaje_completo_es;
$nota_real_3_M4_L2 = ($row_datos_control_notasM4["nt_23"] * $para_el_porc_V3_M4_L2)/$el_puntaje_completo_es;
$nota_real_4_M4_L2 = ($row_datos_control_notasM4["nt_24"] * $para_el_porc_V4_M4_L2)/$el_puntaje_completo_es;
$nota_real_5_M4_L2 = ($row_datos_control_notasM4["nt_25"] * $para_el_porc_V5_M4_L2)/$el_puntaje_completo_es;
$nota_real_6_M4_L2 = ($row_datos_control_notasM4["nt_26"] * $para_el_porc_V6_M4_L2)/$el_puntaje_completo_es;
$nota_real_7_M4_L2 = ($row_datos_control_notasM4["nt_27"] * $para_el_porc_V7_M4_L2)/$el_puntaje_completo_es;

$total_seven_M4_L2 = $nota_real_1_M4_L2+$nota_real_2_M4_L2+$nota_real_3_M4_L2+$nota_real_4_M4_L2+$nota_real_5_M4_L2+$nota_real_6_M4_L2+$nota_real_7_M4_L2;

$total_seven_con_Au_M4_L2 = $total_seven_M4_L2+ $row_datos_control_notasM4["nt_Au2"];

$total_seven_con_Au_M4_L2_redondeado1 =number_format($total_seven_con_Au_M4_L2, 1, '.', '');

$total_seven_con_Au_redon_M4_L2 =number_format($total_seven_con_Au_M4_L2_redondeado1);


if ($total_seven_con_Au_M4_L2 == 0) {
    $total_seven_con_Au_redon_M4_L2xx = '';

    $M4_L2 = '0';
}

else {
 $total_seven_con_Au_redon_M4_L2xx = $total_seven_con_Au_redon_M4_L2;

 $M4_L2 = '1';
}



//materia 1 lapso 2 

$nota_1_M4_L3 = $row_datos_control_notasM4["nt_31"];
$nota_2_M4_L3 = $row_datos_control_notasM4["nt_32"];
$nota_3_M4_L3 = $row_datos_control_notasM4["nt_33"];
$nota_4_M4_L3 = $row_datos_control_notasM4["nt_34"];
$nota_5_M4_L3 = $row_datos_control_notasM4["nt_35"];
$nota_6_M4_L3 = $row_datos_control_notasM4["nt_36"];
$nota_7_M4_L3 = $row_datos_control_notasM4["nt_37"];
$notaAu_M4_L3 = $row_datos_control_notasM4["nt_Au3"];


$nota_real_1_M4_L3 = ($row_datos_control_notasM4["nt_31"] * $para_el_porc_V1_M4_L3)/$el_puntaje_completo_es;
$nota_real_2_M4_L3 = ($row_datos_control_notasM4["nt_32"] * $para_el_porc_V2_M4_L3)/$el_puntaje_completo_es;
$nota_real_3_M4_L3 = ($row_datos_control_notasM4["nt_33"] * $para_el_porc_V3_M4_L3)/$el_puntaje_completo_es;
$nota_real_4_M4_L3 = ($row_datos_control_notasM4["nt_34"] * $para_el_porc_V4_M4_L3)/$el_puntaje_completo_es;
$nota_real_5_M4_L3 = ($row_datos_control_notasM4["nt_35"] * $para_el_porc_V5_M4_L3)/$el_puntaje_completo_es;
$nota_real_6_M4_L3 = ($row_datos_control_notasM4["nt_36"] * $para_el_porc_V6_M4_L3)/$el_puntaje_completo_es;
$nota_real_7_M4_L3 = ($row_datos_control_notasM4["nt_37"] * $para_el_porc_V7_M4_L3)/$el_puntaje_completo_es;

$total_seven_M4_L3 = $nota_real_1_M4_L3+$nota_real_2_M4_L3+$nota_real_3_M4_L3+$nota_real_4_M4_L3+$nota_real_5_M4_L3+$nota_real_6_M4_L3+$nota_real_7_M4_L3;

$total_seven_con_Au_M4_L3 = $total_seven_M4_L3+ $row_datos_control_notasM4["nt_Au3"];

$total_seven_con_Au_M4_L3_redondeado1 =number_format($total_seven_con_Au_M4_L3, 1, '.', '');

$total_seven_con_Au_redon_M4_L3 =number_format($total_seven_con_Au_M4_L3_redondeado1);




if ($total_seven_con_Au_M4_L3 == 0) {
    $total_seven_con_Au_redon_M4_L3xx = '';

    $M4_L3 = '0';
}

else {
 $total_seven_con_Au_redon_M4_L3xx = $total_seven_con_Au_redon_M4_L3;

 $M4_L3 = '1';
}


//materia 1 lapso 3 


$divisor_M4 = '';

if ($total_seven_con_Au_M4_L1 == 0) {
    $divisor_M4 = $divisor_M4+0.0000001;
}

else {$divisor_M4++;}


if ($total_seven_con_Au_M4_L2 == 0) {
    $divisor_M4 = $divisor_M4+0.0000001;
}

else {$divisor_M4++;}


if ($total_seven_con_Au_M4_L3 == 0) {
    $divisor_M4 = $divisor_M4+0.0000001;
}

else {$divisor_M4++;}


$total_seven_con_Au_redon_M4_aprox = ($total_seven_con_Au_redon_M4_L1 + $total_seven_con_Au_redon_M4_L2 + $total_seven_con_Au_redon_M4_L3)/$divisor_M4;

$total_seven_con_Au_redon_M4_redondeado1 =number_format($total_seven_con_Au_redon_M4_aprox, 1, '.', '');

$total_seven_con_Au_redon_M4 =number_format($total_seven_con_Au_redon_M4_redondeado1);


if ($total_seven_con_Au_redon_M4_aprox == 0) {
    $total_seven_con_Au_redon_M4_aproxxx = '';

    $tot_M4 = '0';
}


if ($total_seven_con_Au_redon_M4_aprox >= 0.00000000000000001 && $total_seven_con_Au_redon_M4_aprox <=0.4) {
    $total_seven_con_Au_redon_M4_aproxxx = '0';

    $tot_M4 = '1';
}


else {
 $total_seven_con_Au_redon_M4_aproxxx = $total_seven_con_Au_redon_M4;

 $tot_M4 = '1';
}






$nota_1_M5_L1 = $row_datos_control_notasM5["nt_11"];
$nota_2_M5_L1 = $row_datos_control_notasM5["nt_12"];
$nota_3_M5_L1 = $row_datos_control_notasM5["nt_13"];
$nota_4_M5_L1 = $row_datos_control_notasM5["nt_14"];
$nota_5_M5_L1 = $row_datos_control_notasM5["nt_15"];
$nota_6_M5_L1 = $row_datos_control_notasM5["nt_16"];
$nota_7_M5_L1 = $row_datos_control_notasM5["nt_17"];
$notaAu_M5_L1 = $row_datos_control_notasM5["nt_Au1"];


$nota_real_1_M5_L1 = ($row_datos_control_notasM5["nt_11"] * $para_el_porc_V1_M5_L1)/$el_puntaje_completo_es;
$nota_real_2_M5_L1 = ($row_datos_control_notasM5["nt_12"] * $para_el_porc_V2_M5_L1)/$el_puntaje_completo_es;
$nota_real_3_M5_L1 = ($row_datos_control_notasM5["nt_13"] * $para_el_porc_V3_M5_L1)/$el_puntaje_completo_es;
$nota_real_4_M5_L1 = ($row_datos_control_notasM5["nt_14"] * $para_el_porc_V4_M5_L1)/$el_puntaje_completo_es;
$nota_real_5_M5_L1 = ($row_datos_control_notasM5["nt_15"] * $para_el_porc_V5_M5_L1)/$el_puntaje_completo_es;
$nota_real_6_M5_L1 = ($row_datos_control_notasM5["nt_16"] * $para_el_porc_V6_M5_L1)/$el_puntaje_completo_es;
$nota_real_7_M5_L1 = ($row_datos_control_notasM5["nt_17"] * $para_el_porc_V7_M5_L1)/$el_puntaje_completo_es;

$total_seven_M5_L1 = $nota_real_1_M5_L1+$nota_real_2_M5_L1+$nota_real_3_M5_L1+$nota_real_4_M5_L1+$nota_real_5_M5_L1+$nota_real_6_M5_L1+$nota_real_7_M5_L1;

$total_seven_con_Au_M5_L1 = $total_seven_M5_L1+ $row_datos_control_notasM5["nt_Au1"];

$total_seven_con_Au_M5_L1_redondeado1 =number_format($total_seven_con_Au_M5_L1, 1, '.', '');

$total_seven_con_Au_redon_M5_L1 =number_format($total_seven_con_Au_M5_L1_redondeado1);


if ($total_seven_con_Au_M5_L1 == 0) {
    $total_seven_con_Au_redon_M5_L1xx = '';

    $M5_L1 = '0';
}

else {
 $total_seven_con_Au_redon_M5_L1xx = $total_seven_con_Au_redon_M5_L1;

    $M5_L1 = '1';
}

//materia 1 lapso 1 




$nota_1_M5_L2 = $row_datos_control_notasM5["nt_21"];
$nota_2_M5_L2 = $row_datos_control_notasM5["nt_22"];
$nota_3_M5_L2 = $row_datos_control_notasM5["nt_23"];
$nota_4_M5_L2 = $row_datos_control_notasM5["nt_24"];
$nota_5_M5_L2 = $row_datos_control_notasM5["nt_25"];
$nota_6_M5_L2 = $row_datos_control_notasM5["nt_26"];
$nota_7_M5_L2 = $row_datos_control_notasM5["nt_27"];
$notaAu_M5_L2 = $row_datos_control_notasM5["nt_Au2"];


$nota_real_1_M5_L2 = ($row_datos_control_notasM5["nt_21"] * $para_el_porc_V1_M5_L2)/$el_puntaje_completo_es;
$nota_real_2_M5_L2 = ($row_datos_control_notasM5["nt_22"] * $para_el_porc_V2_M5_L2)/$el_puntaje_completo_es;
$nota_real_3_M5_L2 = ($row_datos_control_notasM5["nt_23"] * $para_el_porc_V3_M5_L2)/$el_puntaje_completo_es;
$nota_real_4_M5_L2 = ($row_datos_control_notasM5["nt_24"] * $para_el_porc_V4_M5_L2)/$el_puntaje_completo_es;
$nota_real_5_M5_L2 = ($row_datos_control_notasM5["nt_25"] * $para_el_porc_V5_M5_L2)/$el_puntaje_completo_es;
$nota_real_6_M5_L2 = ($row_datos_control_notasM5["nt_26"] * $para_el_porc_V6_M5_L2)/$el_puntaje_completo_es;
$nota_real_7_M5_L2 = ($row_datos_control_notasM5["nt_27"] * $para_el_porc_V7_M5_L2)/$el_puntaje_completo_es;

$total_seven_M5_L2 = $nota_real_1_M5_L2+$nota_real_2_M5_L2+$nota_real_3_M5_L2+$nota_real_4_M5_L2+$nota_real_5_M5_L2+$nota_real_6_M5_L2+$nota_real_7_M5_L2;

$total_seven_con_Au_M5_L2 = $total_seven_M5_L2+ $row_datos_control_notasM5["nt_Au2"];

$total_seven_con_Au_M5_L2_redondeado1 =number_format($total_seven_con_Au_M5_L2, 1, '.', '');

$total_seven_con_Au_redon_M5_L2 =number_format($total_seven_con_Au_M5_L2_redondeado1);


if ($total_seven_con_Au_M5_L2 == 0) {
    $total_seven_con_Au_redon_M5_L2xx = '';

    $M5_L2 = '0';
}

else {
 $total_seven_con_Au_redon_M5_L2xx = $total_seven_con_Au_redon_M5_L2;

 $M5_L2 = '1';
}



//materia 1 lapso 2 

$nota_1_M5_L3 = $row_datos_control_notasM5["nt_31"];
$nota_2_M5_L3 = $row_datos_control_notasM5["nt_32"];
$nota_3_M5_L3 = $row_datos_control_notasM5["nt_33"];
$nota_4_M5_L3 = $row_datos_control_notasM5["nt_34"];
$nota_5_M5_L3 = $row_datos_control_notasM5["nt_35"];
$nota_6_M5_L3 = $row_datos_control_notasM5["nt_36"];
$nota_7_M5_L3 = $row_datos_control_notasM5["nt_37"];
$notaAu_M5_L3 = $row_datos_control_notasM5["nt_Au3"];


$nota_real_1_M5_L3 = ($row_datos_control_notasM5["nt_31"] * $para_el_porc_V1_M5_L3)/$el_puntaje_completo_es;
$nota_real_2_M5_L3 = ($row_datos_control_notasM5["nt_32"] * $para_el_porc_V2_M5_L3)/$el_puntaje_completo_es;
$nota_real_3_M5_L3 = ($row_datos_control_notasM5["nt_33"] * $para_el_porc_V3_M5_L3)/$el_puntaje_completo_es;
$nota_real_4_M5_L3 = ($row_datos_control_notasM5["nt_34"] * $para_el_porc_V4_M5_L3)/$el_puntaje_completo_es;
$nota_real_5_M5_L3 = ($row_datos_control_notasM5["nt_35"] * $para_el_porc_V5_M5_L3)/$el_puntaje_completo_es;
$nota_real_6_M5_L3 = ($row_datos_control_notasM5["nt_36"] * $para_el_porc_V6_M5_L3)/$el_puntaje_completo_es;
$nota_real_7_M5_L3 = ($row_datos_control_notasM5["nt_37"] * $para_el_porc_V7_M5_L3)/$el_puntaje_completo_es;

$total_seven_M5_L3 = $nota_real_1_M5_L3+$nota_real_2_M5_L3+$nota_real_3_M5_L3+$nota_real_4_M5_L3+$nota_real_5_M5_L3+$nota_real_6_M5_L3+$nota_real_7_M5_L3;

$total_seven_con_Au_M5_L3 = $total_seven_M5_L3+ $row_datos_control_notasM5["nt_Au3"];

$total_seven_con_Au_M5_L3_redondeado1 =number_format($total_seven_con_Au_M5_L3, 1, '.', '');

$total_seven_con_Au_redon_M5_L3 =number_format($total_seven_con_Au_M5_L3_redondeado1);




if ($total_seven_con_Au_M5_L3 == 0) {
    $total_seven_con_Au_redon_M5_L3xx = '';

    $M5_L3 = '0';
}

else {
 $total_seven_con_Au_redon_M5_L3xx = $total_seven_con_Au_redon_M5_L3;

 $M5_L3 = '1';
}


//materia 1 lapso 3 


$divisor_M5 = '';

if ($total_seven_con_Au_M5_L1 == 0) {
    $divisor_M5 = $divisor_M5+0.0000001;
}

else {$divisor_M5++;}


if ($total_seven_con_Au_M5_L2 == 0) {
    $divisor_M5 = $divisor_M5+0.0000001;
}

else {$divisor_M5++;}


if ($total_seven_con_Au_M5_L3 == 0) {
    $divisor_M5 = $divisor_M5+0.0000001;
}

else {$divisor_M5++;}


$total_seven_con_Au_redon_M5_aprox = ($total_seven_con_Au_redon_M5_L1 + $total_seven_con_Au_redon_M5_L2 + $total_seven_con_Au_redon_M5_L3)/$divisor_M5;

$total_seven_con_Au_redon_M5_redondeado1 =number_format($total_seven_con_Au_redon_M5_aprox, 1, '.', '');

$total_seven_con_Au_redon_M5 =number_format($total_seven_con_Au_redon_M5_redondeado1);


if ($total_seven_con_Au_redon_M5_aprox == 0) {
    $total_seven_con_Au_redon_M5_aproxxx = '';

    $tot_M5 = '0';
}


if ($total_seven_con_Au_redon_M5_aprox >= 0.00000000000000001 && $total_seven_con_Au_redon_M5_aprox <=0.4) {
    $total_seven_con_Au_redon_M5_aproxxx = '0';

    $tot_M5 = '1';
}


else {
 $total_seven_con_Au_redon_M5_aproxxx = $total_seven_con_Au_redon_M5;

 $tot_M5 = '1';
}



$nota_1_M6_L1 = $row_datos_control_notasM6["nt_11"];
$nota_2_M6_L1 = $row_datos_control_notasM6["nt_12"];
$nota_3_M6_L1 = $row_datos_control_notasM6["nt_13"];
$nota_4_M6_L1 = $row_datos_control_notasM6["nt_14"];
$nota_5_M6_L1 = $row_datos_control_notasM6["nt_15"];
$nota_6_M6_L1 = $row_datos_control_notasM6["nt_16"];
$nota_7_M6_L1 = $row_datos_control_notasM6["nt_17"];
$notaAu_M6_L1 = $row_datos_control_notasM6["nt_Au1"];


$nota_real_1_M6_L1 = ($row_datos_control_notasM6["nt_11"] * $para_el_porc_V1_M6_L1)/$el_puntaje_completo_es;
$nota_real_2_M6_L1 = ($row_datos_control_notasM6["nt_12"] * $para_el_porc_V2_M6_L1)/$el_puntaje_completo_es;
$nota_real_3_M6_L1 = ($row_datos_control_notasM6["nt_13"] * $para_el_porc_V3_M6_L1)/$el_puntaje_completo_es;
$nota_real_4_M6_L1 = ($row_datos_control_notasM6["nt_14"] * $para_el_porc_V4_M6_L1)/$el_puntaje_completo_es;
$nota_real_5_M6_L1 = ($row_datos_control_notasM6["nt_15"] * $para_el_porc_V5_M6_L1)/$el_puntaje_completo_es;
$nota_real_6_M6_L1 = ($row_datos_control_notasM6["nt_16"] * $para_el_porc_V6_M6_L1)/$el_puntaje_completo_es;
$nota_real_7_M6_L1 = ($row_datos_control_notasM6["nt_17"] * $para_el_porc_V7_M6_L1)/$el_puntaje_completo_es;

$total_seven_M6_L1 = $nota_real_1_M6_L1+$nota_real_2_M6_L1+$nota_real_3_M6_L1+$nota_real_4_M6_L1+$nota_real_5_M6_L1+$nota_real_6_M6_L1+$nota_real_7_M6_L1;

$total_seven_con_Au_M6_L1 = $total_seven_M6_L1+ $row_datos_control_notasM6["nt_Au1"];

$total_seven_con_Au_M6_L1_redondeado1 =number_format($total_seven_con_Au_M6_L1, 1, '.', '');

$total_seven_con_Au_redon_M6_L1 =number_format($total_seven_con_Au_M6_L1_redondeado1);


if ($total_seven_con_Au_M6_L1 == 0) {
    $total_seven_con_Au_redon_M6_L1xx = '';

    $M6_L1 = '0';
}

else {
 $total_seven_con_Au_redon_M6_L1xx = $total_seven_con_Au_redon_M6_L1;

    $M6_L1 = '1';
}

//materia 1 lapso 1 




$nota_1_M6_L2 = $row_datos_control_notasM6["nt_21"];
$nota_2_M6_L2 = $row_datos_control_notasM6["nt_22"];
$nota_3_M6_L2 = $row_datos_control_notasM6["nt_23"];
$nota_4_M6_L2 = $row_datos_control_notasM6["nt_24"];
$nota_5_M6_L2 = $row_datos_control_notasM6["nt_25"];
$nota_6_M6_L2 = $row_datos_control_notasM6["nt_26"];
$nota_7_M6_L2 = $row_datos_control_notasM6["nt_27"];
$notaAu_M6_L2 = $row_datos_control_notasM6["nt_Au2"];


$nota_real_1_M6_L2 = ($row_datos_control_notasM6["nt_21"] * $para_el_porc_V1_M6_L2)/$el_puntaje_completo_es;
$nota_real_2_M6_L2 = ($row_datos_control_notasM6["nt_22"] * $para_el_porc_V2_M6_L2)/$el_puntaje_completo_es;
$nota_real_3_M6_L2 = ($row_datos_control_notasM6["nt_23"] * $para_el_porc_V3_M6_L2)/$el_puntaje_completo_es;
$nota_real_4_M6_L2 = ($row_datos_control_notasM6["nt_24"] * $para_el_porc_V4_M6_L2)/$el_puntaje_completo_es;
$nota_real_5_M6_L2 = ($row_datos_control_notasM6["nt_25"] * $para_el_porc_V5_M6_L2)/$el_puntaje_completo_es;
$nota_real_6_M6_L2 = ($row_datos_control_notasM6["nt_26"] * $para_el_porc_V6_M6_L2)/$el_puntaje_completo_es;
$nota_real_7_M6_L2 = ($row_datos_control_notasM6["nt_27"] * $para_el_porc_V7_M6_L2)/$el_puntaje_completo_es;

$total_seven_M6_L2 = $nota_real_1_M6_L2+$nota_real_2_M6_L2+$nota_real_3_M6_L2+$nota_real_4_M6_L2+$nota_real_5_M6_L2+$nota_real_6_M6_L2+$nota_real_7_M6_L2;

$total_seven_con_Au_M6_L2 = $total_seven_M6_L2+ $row_datos_control_notasM6["nt_Au2"];

$total_seven_con_Au_M6_L2_redondeado1 =number_format($total_seven_con_Au_M6_L2, 1, '.', '');

$total_seven_con_Au_redon_M6_L2 =number_format($total_seven_con_Au_M6_L2_redondeado1);


if ($total_seven_con_Au_M6_L2 == 0) {
    $total_seven_con_Au_redon_M6_L2xx = '';

    $M6_L2 = '0';
}

else {
 $total_seven_con_Au_redon_M6_L2xx = $total_seven_con_Au_redon_M6_L2;

 $M6_L2 = '1';
}



//materia 1 lapso 2 

$nota_1_M6_L3 = $row_datos_control_notasM6["nt_31"];
$nota_2_M6_L3 = $row_datos_control_notasM6["nt_32"];
$nota_3_M6_L3 = $row_datos_control_notasM6["nt_33"];
$nota_4_M6_L3 = $row_datos_control_notasM6["nt_34"];
$nota_5_M6_L3 = $row_datos_control_notasM6["nt_35"];
$nota_6_M6_L3 = $row_datos_control_notasM6["nt_36"];
$nota_7_M6_L3 = $row_datos_control_notasM6["nt_37"];
$notaAu_M6_L3 = $row_datos_control_notasM6["nt_Au3"];


$nota_real_1_M6_L3 = ($row_datos_control_notasM6["nt_31"] * $para_el_porc_V1_M6_L3)/$el_puntaje_completo_es;
$nota_real_2_M6_L3 = ($row_datos_control_notasM6["nt_32"] * $para_el_porc_V2_M6_L3)/$el_puntaje_completo_es;
$nota_real_3_M6_L3 = ($row_datos_control_notasM6["nt_33"] * $para_el_porc_V3_M6_L3)/$el_puntaje_completo_es;
$nota_real_4_M6_L3 = ($row_datos_control_notasM6["nt_34"] * $para_el_porc_V4_M6_L3)/$el_puntaje_completo_es;
$nota_real_5_M6_L3 = ($row_datos_control_notasM6["nt_35"] * $para_el_porc_V5_M6_L3)/$el_puntaje_completo_es;
$nota_real_6_M6_L3 = ($row_datos_control_notasM6["nt_36"] * $para_el_porc_V6_M6_L3)/$el_puntaje_completo_es;
$nota_real_7_M6_L3 = ($row_datos_control_notasM6["nt_37"] * $para_el_porc_V7_M6_L3)/$el_puntaje_completo_es;

$total_seven_M6_L3 = $nota_real_1_M6_L3+$nota_real_2_M6_L3+$nota_real_3_M6_L3+$nota_real_4_M6_L3+$nota_real_5_M6_L3+$nota_real_6_M6_L3+$nota_real_7_M6_L3;

$total_seven_con_Au_M6_L3 = $total_seven_M6_L3+ $row_datos_control_notasM6["nt_Au3"];

$total_seven_con_Au_M6_L3_redondeado1 =number_format($total_seven_con_Au_M6_L3, 1, '.', '');

$total_seven_con_Au_redon_M6_L3 =number_format($total_seven_con_Au_M6_L3_redondeado1);




if ($total_seven_con_Au_M6_L3 == 0) {
    $total_seven_con_Au_redon_M6_L3xx = '';

    $M6_L3 = '0';
}

else {
 $total_seven_con_Au_redon_M6_L3xx = $total_seven_con_Au_redon_M6_L3;

 $M6_L3 = '1';
}


//materia 1 lapso 3 


$divisor_M6 = '';

if ($total_seven_con_Au_M6_L1 == 0) {
    $divisor_M6 = $divisor_M6+0.0000001;
}

else {$divisor_M6++;}


if ($total_seven_con_Au_M6_L2 == 0) {
    $divisor_M6 = $divisor_M6+0.0000001;
}

else {$divisor_M6++;}


if ($total_seven_con_Au_M6_L3 == 0) {
    $divisor_M6 = $divisor_M6+0.0000001;
}

else {$divisor_M6++;}


$total_seven_con_Au_redon_M6_aprox = ($total_seven_con_Au_redon_M6_L1 + $total_seven_con_Au_redon_M6_L2 + $total_seven_con_Au_redon_M6_L3)/$divisor_M6;

$total_seven_con_Au_redon_M6_redondeado1 =number_format($total_seven_con_Au_redon_M6_aprox, 1, '.', '');

$total_seven_con_Au_redon_M6 =number_format($total_seven_con_Au_redon_M6_redondeado1);


if ($total_seven_con_Au_redon_M6_aprox == 0) {
    $total_seven_con_Au_redon_M6_aproxxx = '';

    $tot_M6 = '0';
}


if ($total_seven_con_Au_redon_M6_aprox >= 0.00000000000000001 && $total_seven_con_Au_redon_M6_aprox <=0.4) {
    $total_seven_con_Au_redon_M6_aproxxx = '0';

    $tot_M6 = '1';
}


else {
 $total_seven_con_Au_redon_M6_aproxxx = $total_seven_con_Au_redon_M6;

 $tot_M6 = '1';
}





$nota_1_M7_L1 = $row_datos_control_notasM7["nt_11"];
$nota_2_M7_L1 = $row_datos_control_notasM7["nt_12"];
$nota_3_M7_L1 = $row_datos_control_notasM7["nt_13"];
$nota_4_M7_L1 = $row_datos_control_notasM7["nt_14"];
$nota_5_M7_L1 = $row_datos_control_notasM7["nt_15"];
$nota_6_M7_L1 = $row_datos_control_notasM7["nt_16"];
$nota_7_M7_L1 = $row_datos_control_notasM7["nt_17"];
$notaAu_M7_L1 = $row_datos_control_notasM7["nt_Au1"];


$nota_real_1_M7_L1 = ($row_datos_control_notasM7["nt_11"] * $para_el_porc_V1_M7_L1)/$el_puntaje_completo_es;
$nota_real_2_M7_L1 = ($row_datos_control_notasM7["nt_12"] * $para_el_porc_V2_M7_L1)/$el_puntaje_completo_es;
$nota_real_3_M7_L1 = ($row_datos_control_notasM7["nt_13"] * $para_el_porc_V3_M7_L1)/$el_puntaje_completo_es;
$nota_real_4_M7_L1 = ($row_datos_control_notasM7["nt_14"] * $para_el_porc_V4_M7_L1)/$el_puntaje_completo_es;
$nota_real_5_M7_L1 = ($row_datos_control_notasM7["nt_15"] * $para_el_porc_V5_M7_L1)/$el_puntaje_completo_es;
$nota_real_6_M7_L1 = ($row_datos_control_notasM7["nt_16"] * $para_el_porc_V6_M7_L1)/$el_puntaje_completo_es;
$nota_real_7_M7_L1 = ($row_datos_control_notasM7["nt_17"] * $para_el_porc_V7_M7_L1)/$el_puntaje_completo_es;

$total_seven_M7_L1 = $nota_real_1_M7_L1+$nota_real_2_M7_L1+$nota_real_3_M7_L1+$nota_real_4_M7_L1+$nota_real_5_M7_L1+$nota_real_6_M7_L1+$nota_real_7_M7_L1;

$total_seven_con_Au_M7_L1 = $total_seven_M7_L1+ $row_datos_control_notasM7["nt_Au1"];

$total_seven_con_Au_M7_L1_redondeado1 =number_format($total_seven_con_Au_M7_L1, 1, '.', '');

$total_seven_con_Au_redon_M7_L1 =number_format($total_seven_con_Au_M7_L1_redondeado1);


if ($total_seven_con_Au_M7_L1 == 0) {
    $total_seven_con_Au_redon_M7_L1xx = '';

    $M7_L1 = '0';
}

else {
 $total_seven_con_Au_redon_M7_L1xx = $total_seven_con_Au_redon_M7_L1;

    $M7_L1 = '1';
}

//materia 1 lapso 1 




$nota_1_M7_L2 = $row_datos_control_notasM7["nt_21"];
$nota_2_M7_L2 = $row_datos_control_notasM7["nt_22"];
$nota_3_M7_L2 = $row_datos_control_notasM7["nt_23"];
$nota_4_M7_L2 = $row_datos_control_notasM7["nt_24"];
$nota_5_M7_L2 = $row_datos_control_notasM7["nt_25"];
$nota_6_M7_L2 = $row_datos_control_notasM7["nt_26"];
$nota_7_M7_L2 = $row_datos_control_notasM7["nt_27"];
$notaAu_M7_L2 = $row_datos_control_notasM7["nt_Au2"];


$nota_real_1_M7_L2 = ($row_datos_control_notasM7["nt_21"] * $para_el_porc_V1_M7_L2)/$el_puntaje_completo_es;
$nota_real_2_M7_L2 = ($row_datos_control_notasM7["nt_22"] * $para_el_porc_V2_M7_L2)/$el_puntaje_completo_es;
$nota_real_3_M7_L2 = ($row_datos_control_notasM7["nt_23"] * $para_el_porc_V3_M7_L2)/$el_puntaje_completo_es;
$nota_real_4_M7_L2 = ($row_datos_control_notasM7["nt_24"] * $para_el_porc_V4_M7_L2)/$el_puntaje_completo_es;
$nota_real_5_M7_L2 = ($row_datos_control_notasM7["nt_25"] * $para_el_porc_V5_M7_L2)/$el_puntaje_completo_es;
$nota_real_6_M7_L2 = ($row_datos_control_notasM7["nt_26"] * $para_el_porc_V6_M7_L2)/$el_puntaje_completo_es;
$nota_real_7_M7_L2 = ($row_datos_control_notasM7["nt_27"] * $para_el_porc_V7_M7_L2)/$el_puntaje_completo_es;

$total_seven_M7_L2 = $nota_real_1_M7_L2+$nota_real_2_M7_L2+$nota_real_3_M7_L2+$nota_real_4_M7_L2+$nota_real_5_M7_L2+$nota_real_6_M7_L2+$nota_real_7_M7_L2;

$total_seven_con_Au_M7_L2 = $total_seven_M7_L2+ $row_datos_control_notasM7["nt_Au2"];

$total_seven_con_Au_M7_L2_redondeado1 =number_format($total_seven_con_Au_M7_L2, 1, '.', '');

$total_seven_con_Au_redon_M7_L2 =number_format($total_seven_con_Au_M7_L2_redondeado1);


if ($total_seven_con_Au_M7_L2 == 0) {
    $total_seven_con_Au_redon_M7_L2xx = '';

    $M7_L2 = '0';
}

else {
 $total_seven_con_Au_redon_M7_L2xx = $total_seven_con_Au_redon_M7_L2;

 $M7_L2 = '1';
}



//materia 1 lapso 2 

$nota_1_M7_L3 = $row_datos_control_notasM7["nt_31"];
$nota_2_M7_L3 = $row_datos_control_notasM7["nt_32"];
$nota_3_M7_L3 = $row_datos_control_notasM7["nt_33"];
$nota_4_M7_L3 = $row_datos_control_notasM7["nt_34"];
$nota_5_M7_L3 = $row_datos_control_notasM7["nt_35"];
$nota_6_M7_L3 = $row_datos_control_notasM7["nt_36"];
$nota_7_M7_L3 = $row_datos_control_notasM7["nt_37"];
$notaAu_M7_L3 = $row_datos_control_notasM7["nt_Au3"];


$nota_real_1_M7_L3 = ($row_datos_control_notasM7["nt_31"] * $para_el_porc_V1_M7_L3)/$el_puntaje_completo_es;
$nota_real_2_M7_L3 = ($row_datos_control_notasM7["nt_32"] * $para_el_porc_V2_M7_L3)/$el_puntaje_completo_es;
$nota_real_3_M7_L3 = ($row_datos_control_notasM7["nt_33"] * $para_el_porc_V3_M7_L3)/$el_puntaje_completo_es;
$nota_real_4_M7_L3 = ($row_datos_control_notasM7["nt_34"] * $para_el_porc_V4_M7_L3)/$el_puntaje_completo_es;
$nota_real_5_M7_L3 = ($row_datos_control_notasM7["nt_35"] * $para_el_porc_V5_M7_L3)/$el_puntaje_completo_es;
$nota_real_6_M7_L3 = ($row_datos_control_notasM7["nt_36"] * $para_el_porc_V6_M7_L3)/$el_puntaje_completo_es;
$nota_real_7_M7_L3 = ($row_datos_control_notasM7["nt_37"] * $para_el_porc_V7_M7_L3)/$el_puntaje_completo_es;

$total_seven_M7_L3 = $nota_real_1_M7_L3+$nota_real_2_M7_L3+$nota_real_3_M7_L3+$nota_real_4_M7_L3+$nota_real_5_M7_L3+$nota_real_6_M7_L3+$nota_real_7_M7_L3;

$total_seven_con_Au_M7_L3 = $total_seven_M7_L3+ $row_datos_control_notasM7["nt_Au3"];

$total_seven_con_Au_M7_L3_redondeado1 =number_format($total_seven_con_Au_M7_L3, 1, '.', '');

$total_seven_con_Au_redon_M7_L3 =number_format($total_seven_con_Au_M7_L3_redondeado1);




if ($total_seven_con_Au_M7_L3 == 0) {
    $total_seven_con_Au_redon_M7_L3xx = '';

    $M7_L3 = '0';
}

else {
 $total_seven_con_Au_redon_M7_L3xx = $total_seven_con_Au_redon_M7_L3;

 $M7_L3 = '1';
}


//materia 1 lapso 3 


$divisor_M7 = '';

if ($total_seven_con_Au_M7_L1 == 0) {
    $divisor_M7 = $divisor_M7+0.0000001;
}

else {$divisor_M7++;}


if ($total_seven_con_Au_M7_L2 == 0) {
    $divisor_M7 = $divisor_M7+0.0000001;
}

else {$divisor_M7++;}


if ($total_seven_con_Au_M7_L3 == 0) {
    $divisor_M7 = $divisor_M7+0.0000001;
}

else {$divisor_M7++;}


$total_seven_con_Au_redon_M7_aprox = ($total_seven_con_Au_redon_M7_L1 + $total_seven_con_Au_redon_M7_L2 + $total_seven_con_Au_redon_M7_L3)/$divisor_M7;

$total_seven_con_Au_redon_M7_redondeado1 =number_format($total_seven_con_Au_redon_M7_aprox, 1, '.', '');
$total_seven_con_Au_redon_M7 =number_format($total_seven_con_Au_redon_M7_redondeado1);


if ($total_seven_con_Au_redon_M7_aprox == 0) {
    $total_seven_con_Au_redon_M7_aproxxx = '';

    $tot_M7 = '0';
}


if ($total_seven_con_Au_redon_M7_aprox >= 0.00000000000000001 && $total_seven_con_Au_redon_M7_aprox <=0.4) {
    $total_seven_con_Au_redon_M7_aproxxx = '0';

    $tot_M7 = '1';
}



else {
 $total_seven_con_Au_redon_M7_aproxxx = $total_seven_con_Au_redon_M7;

 $tot_M7 = '1';
}





$nota_1_M8_L1 = $row_datos_control_notasM8["nt_11"];
$nota_2_M8_L1 = $row_datos_control_notasM8["nt_12"];
$nota_3_M8_L1 = $row_datos_control_notasM8["nt_13"];
$nota_4_M8_L1 = $row_datos_control_notasM8["nt_14"];
$nota_5_M8_L1 = $row_datos_control_notasM8["nt_15"];
$nota_6_M8_L1 = $row_datos_control_notasM8["nt_16"];
$nota_7_M8_L1 = $row_datos_control_notasM8["nt_17"];
$notaAu_M8_L1 = $row_datos_control_notasM8["nt_Au1"];


$nota_real_1_M8_L1 = ($row_datos_control_notasM8["nt_11"] * $para_el_porc_V1_M8_L1)/$el_puntaje_completo_es;
$nota_real_2_M8_L1 = ($row_datos_control_notasM8["nt_12"] * $para_el_porc_V2_M8_L1)/$el_puntaje_completo_es;
$nota_real_3_M8_L1 = ($row_datos_control_notasM8["nt_13"] * $para_el_porc_V3_M8_L1)/$el_puntaje_completo_es;
$nota_real_4_M8_L1 = ($row_datos_control_notasM8["nt_14"] * $para_el_porc_V4_M8_L1)/$el_puntaje_completo_es;
$nota_real_5_M8_L1 = ($row_datos_control_notasM8["nt_15"] * $para_el_porc_V5_M8_L1)/$el_puntaje_completo_es;
$nota_real_6_M8_L1 = ($row_datos_control_notasM8["nt_16"] * $para_el_porc_V6_M8_L1)/$el_puntaje_completo_es;
$nota_real_7_M8_L1 = ($row_datos_control_notasM8["nt_17"] * $para_el_porc_V7_M8_L1)/$el_puntaje_completo_es;

$total_seven_M8_L1 = $nota_real_1_M8_L1+$nota_real_2_M8_L1+$nota_real_3_M8_L1+$nota_real_4_M8_L1+$nota_real_5_M8_L1+$nota_real_6_M8_L1+$nota_real_7_M8_L1;

$total_seven_con_Au_M8_L1 = $total_seven_M8_L1+ $row_datos_control_notasM8["nt_Au1"];

$total_seven_con_Au_M8_L1_redondeado1 =number_format($total_seven_con_Au_M8_L1, 1, '.', '');

$total_seven_con_Au_redon_M8_L1 =number_format($total_seven_con_Au_M8_L1_redondeado1);


if ($total_seven_con_Au_M8_L1 == 0) {
    $total_seven_con_Au_redon_M8_L1xx = '';

    $M8_L1 = '0';
}

else {
 $total_seven_con_Au_redon_M8_L1xx = $total_seven_con_Au_redon_M8_L1;

    $M8_L1 = '1';
}

//materia 1 lapso 1 




$nota_1_M8_L2 = $row_datos_control_notasM8["nt_21"];
$nota_2_M8_L2 = $row_datos_control_notasM8["nt_22"];
$nota_3_M8_L2 = $row_datos_control_notasM8["nt_23"];
$nota_4_M8_L2 = $row_datos_control_notasM8["nt_24"];
$nota_5_M8_L2 = $row_datos_control_notasM8["nt_25"];
$nota_6_M8_L2 = $row_datos_control_notasM8["nt_26"];
$nota_7_M8_L2 = $row_datos_control_notasM8["nt_27"];
$notaAu_M8_L2 = $row_datos_control_notasM8["nt_Au2"];


$nota_real_1_M8_L2 = ($row_datos_control_notasM8["nt_21"] * $para_el_porc_V1_M8_L2)/$el_puntaje_completo_es;
$nota_real_2_M8_L2 = ($row_datos_control_notasM8["nt_22"] * $para_el_porc_V2_M8_L2)/$el_puntaje_completo_es;
$nota_real_3_M8_L2 = ($row_datos_control_notasM8["nt_23"] * $para_el_porc_V3_M8_L2)/$el_puntaje_completo_es;
$nota_real_4_M8_L2 = ($row_datos_control_notasM8["nt_24"] * $para_el_porc_V4_M8_L2)/$el_puntaje_completo_es;
$nota_real_5_M8_L2 = ($row_datos_control_notasM8["nt_25"] * $para_el_porc_V5_M8_L2)/$el_puntaje_completo_es;
$nota_real_6_M8_L2 = ($row_datos_control_notasM8["nt_26"] * $para_el_porc_V6_M8_L2)/$el_puntaje_completo_es;
$nota_real_7_M8_L2 = ($row_datos_control_notasM8["nt_27"] * $para_el_porc_V7_M8_L2)/$el_puntaje_completo_es;

$total_seven_M8_L2 = $nota_real_1_M8_L2+$nota_real_2_M8_L2+$nota_real_3_M8_L2+$nota_real_4_M8_L2+$nota_real_5_M8_L2+$nota_real_6_M8_L2+$nota_real_7_M8_L2;

$total_seven_con_Au_M8_L2 = $total_seven_M8_L2+ $row_datos_control_notasM8["nt_Au2"];

$total_seven_con_Au_M8_L2_redondeado1 =number_format($total_seven_con_Au_M8_L2, 1, '.', '');

$total_seven_con_Au_redon_M8_L2 =number_format($total_seven_con_Au_M8_L2_redondeado1);


if ($total_seven_con_Au_M8_L2 == 0) {
    $total_seven_con_Au_redon_M8_L2xx = '';

    $M8_L2 = '0';
}

else {
 $total_seven_con_Au_redon_M8_L2xx = $total_seven_con_Au_redon_M8_L2;

 $M8_L2 = '1';
}



//materia 1 lapso 2 

$nota_1_M8_L3 = $row_datos_control_notasM8["nt_31"];
$nota_2_M8_L3 = $row_datos_control_notasM8["nt_32"];
$nota_3_M8_L3 = $row_datos_control_notasM8["nt_33"];
$nota_4_M8_L3 = $row_datos_control_notasM8["nt_34"];
$nota_5_M8_L3 = $row_datos_control_notasM8["nt_35"];
$nota_6_M8_L3 = $row_datos_control_notasM8["nt_36"];
$nota_7_M8_L3 = $row_datos_control_notasM8["nt_37"];
$notaAu_M8_L3 = $row_datos_control_notasM8["nt_Au3"];


$nota_real_1_M8_L3 = ($row_datos_control_notasM8["nt_31"] * $para_el_porc_V1_M8_L3)/$el_puntaje_completo_es;
$nota_real_2_M8_L3 = ($row_datos_control_notasM8["nt_32"] * $para_el_porc_V2_M8_L3)/$el_puntaje_completo_es;
$nota_real_3_M8_L3 = ($row_datos_control_notasM8["nt_33"] * $para_el_porc_V3_M8_L3)/$el_puntaje_completo_es;
$nota_real_4_M8_L3 = ($row_datos_control_notasM8["nt_34"] * $para_el_porc_V4_M8_L3)/$el_puntaje_completo_es;
$nota_real_5_M8_L3 = ($row_datos_control_notasM8["nt_35"] * $para_el_porc_V5_M8_L3)/$el_puntaje_completo_es;
$nota_real_6_M8_L3 = ($row_datos_control_notasM8["nt_36"] * $para_el_porc_V6_M8_L3)/$el_puntaje_completo_es;
$nota_real_7_M8_L3 = ($row_datos_control_notasM8["nt_37"] * $para_el_porc_V7_M8_L3)/$el_puntaje_completo_es;

$total_seven_M8_L3 = $nota_real_1_M8_L3+$nota_real_2_M8_L3+$nota_real_3_M8_L3+$nota_real_4_M8_L3+$nota_real_5_M8_L3+$nota_real_6_M8_L3+$nota_real_7_M8_L3;

$total_seven_con_Au_M8_L3 = $total_seven_M8_L3+ $row_datos_control_notasM8["nt_Au3"];

$total_seven_con_Au_M8_L3_redondeado1 =number_format($total_seven_con_Au_M8_L3, 1, '.', '');

$total_seven_con_Au_redon_M8_L3 =number_format($total_seven_con_Au_M8_L3_redondeado1);




if ($total_seven_con_Au_M8_L3 == 0) {
    $total_seven_con_Au_redon_M8_L3xx = '';

    $M8_L3 = '0';
}

else {
 $total_seven_con_Au_redon_M8_L3xx = $total_seven_con_Au_redon_M8_L3;

 $M8_L3 = '1';
}


//materia 1 lapso 3 


$divisor_M8 = '';

if ($total_seven_con_Au_M8_L1 == 0) {
    $divisor_M8 = $divisor_M8+0.0000001;
}

else {$divisor_M8++;}


if ($total_seven_con_Au_M8_L2 == 0) {
    $divisor_M8 = $divisor_M8+0.0000001;
}

else {$divisor_M8++;}


if ($total_seven_con_Au_M8_L3 == 0) {
    $divisor_M8 = $divisor_M8+0.0000001;
}

else {$divisor_M8++;}


$total_seven_con_Au_redon_M8_aprox = ($total_seven_con_Au_redon_M8_L1 + $total_seven_con_Au_redon_M8_L2 + $total_seven_con_Au_redon_M8_L3)/$divisor_M8;

$total_seven_con_Au_redon_M8_redondeado1 =number_format($total_seven_con_Au_redon_M8_aprox, 1, '.', '');

$total_seven_con_Au_redon_M8 =number_format($total_seven_con_Au_redon_M8_redondeado1);


if ($total_seven_con_Au_redon_M8_aprox == 0) {
    $total_seven_con_Au_redon_M8_aproxxx = '';

    $tot_M8 = '0';
}



if ($total_seven_con_Au_redon_M8_aprox >= 0.00000000000000001 && $total_seven_con_Au_redon_M8_aprox <=0.4) {
    $total_seven_con_Au_redon_M8_aproxxx = '0';

    $tot_M8 = '1';
}


else {
 $total_seven_con_Au_redon_M8_aproxxx = $total_seven_con_Au_redon_M8;

 $tot_M8 = '1';
}






$nota_1_M9_L1 = $row_datos_control_notasM9["nt_11"];
$nota_2_M9_L1 = $row_datos_control_notasM9["nt_12"];
$nota_3_M9_L1 = $row_datos_control_notasM9["nt_13"];
$nota_4_M9_L1 = $row_datos_control_notasM9["nt_14"];
$nota_5_M9_L1 = $row_datos_control_notasM9["nt_15"];
$nota_6_M9_L1 = $row_datos_control_notasM9["nt_16"];
$nota_7_M9_L1 = $row_datos_control_notasM9["nt_17"];
$notaAu_M9_L1 = $row_datos_control_notasM9["nt_Au1"];


$nota_real_1_M9_L1 = ($row_datos_control_notasM9["nt_11"] * $para_el_porc_V1_M9_L1)/$el_puntaje_completo_es;
$nota_real_2_M9_L1 = ($row_datos_control_notasM9["nt_12"] * $para_el_porc_V2_M9_L1)/$el_puntaje_completo_es;
$nota_real_3_M9_L1 = ($row_datos_control_notasM9["nt_13"] * $para_el_porc_V3_M9_L1)/$el_puntaje_completo_es;
$nota_real_4_M9_L1 = ($row_datos_control_notasM9["nt_14"] * $para_el_porc_V4_M9_L1)/$el_puntaje_completo_es;
$nota_real_5_M9_L1 = ($row_datos_control_notasM9["nt_15"] * $para_el_porc_V5_M9_L1)/$el_puntaje_completo_es;
$nota_real_6_M9_L1 = ($row_datos_control_notasM9["nt_16"] * $para_el_porc_V6_M9_L1)/$el_puntaje_completo_es;
$nota_real_7_M9_L1 = ($row_datos_control_notasM9["nt_17"] * $para_el_porc_V7_M9_L1)/$el_puntaje_completo_es;

$total_seven_M9_L1 = $nota_real_1_M9_L1+$nota_real_2_M9_L1+$nota_real_3_M9_L1+$nota_real_4_M9_L1+$nota_real_5_M9_L1+$nota_real_6_M9_L1+$nota_real_7_M9_L1;

$total_seven_con_Au_M9_L1 = $total_seven_M9_L1+ $row_datos_control_notasM9["nt_Au1"];

$total_seven_con_Au_M9_L1_redondeado1 =number_format($total_seven_con_Au_M9_L1, 1, '.', '');

$total_seven_con_Au_redon_M9_L1 =number_format($total_seven_con_Au_M9_L1_redondeado1);


if ($total_seven_con_Au_M9_L1 == 0) {
    $total_seven_con_Au_redon_M9_L1xx = '';

    $M9_L1 = '0';
}

else {
 $total_seven_con_Au_redon_M9_L1xx = $total_seven_con_Au_redon_M9_L1;

    $M9_L1 = '1';
}

//materia 1 lapso 1 




$nota_1_M9_L2 = $row_datos_control_notasM9["nt_21"];
$nota_2_M9_L2 = $row_datos_control_notasM9["nt_22"];
$nota_3_M9_L2 = $row_datos_control_notasM9["nt_23"];
$nota_4_M9_L2 = $row_datos_control_notasM9["nt_24"];
$nota_5_M9_L2 = $row_datos_control_notasM9["nt_25"];
$nota_6_M9_L2 = $row_datos_control_notasM9["nt_26"];
$nota_7_M9_L2 = $row_datos_control_notasM9["nt_27"];
$notaAu_M9_L2 = $row_datos_control_notasM9["nt_Au2"];


$nota_real_1_M9_L2 = ($row_datos_control_notasM9["nt_21"] * $para_el_porc_V1_M9_L2)/$el_puntaje_completo_es;
$nota_real_2_M9_L2 = ($row_datos_control_notasM9["nt_22"] * $para_el_porc_V2_M9_L2)/$el_puntaje_completo_es;
$nota_real_3_M9_L2 = ($row_datos_control_notasM9["nt_23"] * $para_el_porc_V3_M9_L2)/$el_puntaje_completo_es;
$nota_real_4_M9_L2 = ($row_datos_control_notasM9["nt_24"] * $para_el_porc_V4_M9_L2)/$el_puntaje_completo_es;
$nota_real_5_M9_L2 = ($row_datos_control_notasM9["nt_25"] * $para_el_porc_V5_M9_L2)/$el_puntaje_completo_es;
$nota_real_6_M9_L2 = ($row_datos_control_notasM9["nt_26"] * $para_el_porc_V6_M9_L2)/$el_puntaje_completo_es;
$nota_real_7_M9_L2 = ($row_datos_control_notasM9["nt_27"] * $para_el_porc_V7_M9_L2)/$el_puntaje_completo_es;

$total_seven_M9_L2 = $nota_real_1_M9_L2+$nota_real_2_M9_L2+$nota_real_3_M9_L2+$nota_real_4_M9_L2+$nota_real_5_M9_L2+$nota_real_6_M9_L2+$nota_real_7_M9_L2;

$total_seven_con_Au_M9_L2 = $total_seven_M9_L2+ $row_datos_control_notasM9["nt_Au2"];

$total_seven_con_Au_M9_L2_redondeado1 =number_format($total_seven_con_Au_M9_L2, 1, '.', '');

$total_seven_con_Au_redon_M9_L2 =number_format($total_seven_con_Au_M9_L2_redondeado1);


if ($total_seven_con_Au_M9_L2 == 0) {
    $total_seven_con_Au_redon_M9_L2xx = '';

    $M9_L2 = '0';
}

else {
 $total_seven_con_Au_redon_M9_L2xx = $total_seven_con_Au_redon_M9_L2;

 $M9_L2 = '1';
}



//materia 1 lapso 2 

$nota_1_M9_L3 = $row_datos_control_notasM9["nt_31"];
$nota_2_M9_L3 = $row_datos_control_notasM9["nt_32"];
$nota_3_M9_L3 = $row_datos_control_notasM9["nt_33"];
$nota_4_M9_L3 = $row_datos_control_notasM9["nt_34"];
$nota_5_M9_L3 = $row_datos_control_notasM9["nt_35"];
$nota_6_M9_L3 = $row_datos_control_notasM9["nt_36"];
$nota_7_M9_L3 = $row_datos_control_notasM9["nt_37"];
$notaAu_M9_L3 = $row_datos_control_notasM9["nt_Au3"];


$nota_real_1_M9_L3 = ($row_datos_control_notasM9["nt_31"] * $para_el_porc_V1_M9_L3)/$el_puntaje_completo_es;
$nota_real_2_M9_L3 = ($row_datos_control_notasM9["nt_32"] * $para_el_porc_V2_M9_L3)/$el_puntaje_completo_es;
$nota_real_3_M9_L3 = ($row_datos_control_notasM9["nt_33"] * $para_el_porc_V3_M9_L3)/$el_puntaje_completo_es;
$nota_real_4_M9_L3 = ($row_datos_control_notasM9["nt_34"] * $para_el_porc_V4_M9_L3)/$el_puntaje_completo_es;
$nota_real_5_M9_L3 = ($row_datos_control_notasM9["nt_35"] * $para_el_porc_V5_M9_L3)/$el_puntaje_completo_es;
$nota_real_6_M9_L3 = ($row_datos_control_notasM9["nt_36"] * $para_el_porc_V6_M9_L3)/$el_puntaje_completo_es;
$nota_real_7_M9_L3 = ($row_datos_control_notasM9["nt_37"] * $para_el_porc_V7_M9_L3)/$el_puntaje_completo_es;

$total_seven_M9_L3 = $nota_real_1_M9_L3+$nota_real_2_M9_L3+$nota_real_3_M9_L3+$nota_real_4_M9_L3+$nota_real_5_M9_L3+$nota_real_6_M9_L3+$nota_real_7_M9_L3;

$total_seven_con_Au_M9_L3 = $total_seven_M9_L3+ $row_datos_control_notasM9["nt_Au3"];

$total_seven_con_Au_M9_L3_redondeado1 =number_format($total_seven_con_Au_M9_L3, 1, '.', '');

$total_seven_con_Au_redon_M9_L3 =number_format($total_seven_con_Au_M9_L3_redondeado1);




if ($total_seven_con_Au_M9_L3 == 0) {
    $total_seven_con_Au_redon_M9_L3xx = '';

    $M9_L3 = '0';
}

else {
 $total_seven_con_Au_redon_M9_L3xx = $total_seven_con_Au_redon_M9_L3;

 $M9_L3 = '1';
}


//materia 1 lapso 3 


$divisor_M9 = '';

if ($total_seven_con_Au_M9_L1 == 0) {
    $divisor_M9 = $divisor_M9+0.0000001;
}

else {$divisor_M9++;}


if ($total_seven_con_Au_M9_L2 == 0) {
    $divisor_M9 = $divisor_M9+0.0000001;
}

else {$divisor_M9++;}


if ($total_seven_con_Au_M9_L3 == 0) {
    $divisor_M9 = $divisor_M9+0.0000001;
}

else {$divisor_M9++;}


$total_seven_con_Au_redon_M9_aprox = ($total_seven_con_Au_redon_M9_L1 + $total_seven_con_Au_redon_M9_L2 + $total_seven_con_Au_redon_M9_L3)/$divisor_M9;

$total_seven_con_Au_redon_M9_redondeado1 =number_format($total_seven_con_Au_redon_M9_aprox, 1, '.', '');

$total_seven_con_Au_redon_M9 =number_format($total_seven_con_Au_redon_M9_redondeado1);


if ($total_seven_con_Au_redon_M9_aprox == 0) {
    $total_seven_con_Au_redon_M9_aproxxx = '';

    $tot_M9 = '0';
}


if ($total_seven_con_Au_redon_M9_aprox >= 0.00000000000000001 && $total_seven_con_Au_redon_M9_aprox <=0.4) {
    $total_seven_con_Au_redon_M9_aproxxx = '0';

    $tot_M9 = '1';
}



else {
 $total_seven_con_Au_redon_M9_aproxxx = $total_seven_con_Au_redon_M9;

 $tot_M9 = '1';
}






$nota_1_M10_L1 = $row_datos_control_notasM10["nt_11"];
$nota_2_M10_L1 = $row_datos_control_notasM10["nt_12"];
$nota_3_M10_L1 = $row_datos_control_notasM10["nt_13"];
$nota_4_M10_L1 = $row_datos_control_notasM10["nt_14"];
$nota_5_M10_L1 = $row_datos_control_notasM10["nt_15"];
$nota_6_M10_L1 = $row_datos_control_notasM10["nt_16"];
$nota_7_M10_L1 = $row_datos_control_notasM10["nt_17"];
$notaAu_M10_L1 = $row_datos_control_notasM10["nt_Au1"];


$nota_real_1_M10_L1 = ($row_datos_control_notasM10["nt_11"] * $para_el_porc_V1_M10_L1)/$el_puntaje_completo_es;
$nota_real_2_M10_L1 = ($row_datos_control_notasM10["nt_12"] * $para_el_porc_V2_M10_L1)/$el_puntaje_completo_es;
$nota_real_3_M10_L1 = ($row_datos_control_notasM10["nt_13"] * $para_el_porc_V3_M10_L1)/$el_puntaje_completo_es;
$nota_real_4_M10_L1 = ($row_datos_control_notasM10["nt_14"] * $para_el_porc_V4_M10_L1)/$el_puntaje_completo_es;
$nota_real_5_M10_L1 = ($row_datos_control_notasM10["nt_15"] * $para_el_porc_V5_M10_L1)/$el_puntaje_completo_es;
$nota_real_6_M10_L1 = ($row_datos_control_notasM10["nt_16"] * $para_el_porc_V6_M10_L1)/$el_puntaje_completo_es;
$nota_real_7_M10_L1 = ($row_datos_control_notasM10["nt_17"] * $para_el_porc_V7_M10_L1)/$el_puntaje_completo_es;

$total_seven_M10_L1 = $nota_real_1_M10_L1+$nota_real_2_M10_L1+$nota_real_3_M10_L1+$nota_real_4_M10_L1+$nota_real_5_M10_L1+$nota_real_6_M10_L1+$nota_real_7_M10_L1;

$total_seven_con_Au_M10_L1 = $total_seven_M10_L1+ $row_datos_control_notasM10["nt_Au1"];

$total_seven_con_Au_M10_L1_redondeado1 =number_format($total_seven_con_Au_M10_L1, 1, '.', '');

$total_seven_con_Au_redon_M10_L1 =number_format($total_seven_con_Au_M10_L1_redondeado1);


if ($total_seven_con_Au_M10_L1 == 0) {
    $total_seven_con_Au_redon_M10_L1xx = '';

    $M10_L1 = '0';
}

else {
 $total_seven_con_Au_redon_M10_L1xx = $total_seven_con_Au_redon_M10_L1;

    $M10_L1 = '1';
}

//materia 1 lapso 1 




$nota_1_M10_L2 = $row_datos_control_notasM10["nt_21"];
$nota_2_M10_L2 = $row_datos_control_notasM10["nt_22"];
$nota_3_M10_L2 = $row_datos_control_notasM10["nt_23"];
$nota_4_M10_L2 = $row_datos_control_notasM10["nt_24"];
$nota_5_M10_L2 = $row_datos_control_notasM10["nt_25"];
$nota_6_M10_L2 = $row_datos_control_notasM10["nt_26"];
$nota_7_M10_L2 = $row_datos_control_notasM10["nt_27"];
$notaAu_M10_L2 = $row_datos_control_notasM10["nt_Au2"];


$nota_real_1_M10_L2 = ($row_datos_control_notasM10["nt_21"] * $para_el_porc_V1_M10_L2)/$el_puntaje_completo_es;
$nota_real_2_M10_L2 = ($row_datos_control_notasM10["nt_22"] * $para_el_porc_V2_M10_L2)/$el_puntaje_completo_es;
$nota_real_3_M10_L2 = ($row_datos_control_notasM10["nt_23"] * $para_el_porc_V3_M10_L2)/$el_puntaje_completo_es;
$nota_real_4_M10_L2 = ($row_datos_control_notasM10["nt_24"] * $para_el_porc_V4_M10_L2)/$el_puntaje_completo_es;
$nota_real_5_M10_L2 = ($row_datos_control_notasM10["nt_25"] * $para_el_porc_V5_M10_L2)/$el_puntaje_completo_es;
$nota_real_6_M10_L2 = ($row_datos_control_notasM10["nt_26"] * $para_el_porc_V6_M10_L2)/$el_puntaje_completo_es;
$nota_real_7_M10_L2 = ($row_datos_control_notasM10["nt_27"] * $para_el_porc_V7_M10_L2)/$el_puntaje_completo_es;

$total_seven_M10_L2 = $nota_real_1_M10_L2+$nota_real_2_M10_L2+$nota_real_3_M10_L2+$nota_real_4_M10_L2+$nota_real_5_M10_L2+$nota_real_6_M10_L2+$nota_real_7_M10_L2;

$total_seven_con_Au_M10_L2 = $total_seven_M10_L2+ $row_datos_control_notasM10["nt_Au2"];

$total_seven_con_Au_M10_L2_redondeado1 =number_format($total_seven_con_Au_M10_L2, 1, '.', '');

$total_seven_con_Au_redon_M10_L2 =number_format($total_seven_con_Au_M10_L2_redondeado1);


if ($total_seven_con_Au_M10_L2 == 0) {
    $total_seven_con_Au_redon_M10_L2xx = '';

    $M10_L2 = '0';
}

else {
 $total_seven_con_Au_redon_M10_L2xx = $total_seven_con_Au_redon_M10_L2;

 $M10_L2 = '1';
}



//materia 1 lapso 2 

$nota_1_M10_L3 = $row_datos_control_notasM10["nt_31"];
$nota_2_M10_L3 = $row_datos_control_notasM10["nt_32"];
$nota_3_M10_L3 = $row_datos_control_notasM10["nt_33"];
$nota_4_M10_L3 = $row_datos_control_notasM10["nt_34"];
$nota_5_M10_L3 = $row_datos_control_notasM10["nt_35"];
$nota_6_M10_L3 = $row_datos_control_notasM10["nt_36"];
$nota_7_M10_L3 = $row_datos_control_notasM10["nt_37"];
$notaAu_M10_L3 = $row_datos_control_notasM10["nt_Au3"];


$nota_real_1_M10_L3 = ($row_datos_control_notasM10["nt_31"] * $para_el_porc_V1_M10_L3)/$el_puntaje_completo_es;
$nota_real_2_M10_L3 = ($row_datos_control_notasM10["nt_32"] * $para_el_porc_V2_M10_L3)/$el_puntaje_completo_es;
$nota_real_3_M10_L3 = ($row_datos_control_notasM10["nt_33"] * $para_el_porc_V3_M10_L3)/$el_puntaje_completo_es;
$nota_real_4_M10_L3 = ($row_datos_control_notasM10["nt_34"] * $para_el_porc_V4_M10_L3)/$el_puntaje_completo_es;
$nota_real_5_M10_L3 = ($row_datos_control_notasM10["nt_35"] * $para_el_porc_V5_M10_L3)/$el_puntaje_completo_es;
$nota_real_6_M10_L3 = ($row_datos_control_notasM10["nt_36"] * $para_el_porc_V6_M10_L3)/$el_puntaje_completo_es;
$nota_real_7_M10_L3 = ($row_datos_control_notasM10["nt_37"] * $para_el_porc_V7_M10_L3)/$el_puntaje_completo_es;

$total_seven_M10_L3 = $nota_real_1_M10_L3+$nota_real_2_M10_L3+$nota_real_3_M10_L3+$nota_real_4_M10_L3+$nota_real_5_M10_L3+$nota_real_6_M10_L3+$nota_real_7_M10_L3;

$total_seven_con_Au_M10_L3 = $total_seven_M10_L3+ $row_datos_control_notasM10["nt_Au3"];

$total_seven_con_Au_M10_L3_redondeado1 =number_format($total_seven_con_Au_M10_L3, 1, '.', '');

$total_seven_con_Au_redon_M10_L3 =number_format($total_seven_con_Au_M10_L3_redondeado1);




if ($total_seven_con_Au_M10_L3 == 0) {
    $total_seven_con_Au_redon_M10_L3xx = '';

    $M10_L3 = '0';
}

else {
 $total_seven_con_Au_redon_M10_L3xx = $total_seven_con_Au_redon_M10_L3;

 $M10_L3 = '1';
}


//materia 1 lapso 3 


$divisor_M10 = '';

if ($total_seven_con_Au_M10_L1 == 0) {
    $divisor_M10 = $divisor_M10+0.0000001;
}

else {$divisor_M10++;}


if ($total_seven_con_Au_M10_L2 == 0) {
    $divisor_M10 = $divisor_M10+0.0000001;
}

else {$divisor_M10++;}


if ($total_seven_con_Au_M10_L3 == 0) {
    $divisor_M10 = $divisor_M10+0.0000001;
}

else {$divisor_M10++;}


$total_seven_con_Au_redon_M10_aprox = ($total_seven_con_Au_redon_M10_L1 + $total_seven_con_Au_redon_M10_L2 + $total_seven_con_Au_redon_M10_L3)/$divisor_M10;

$total_seven_con_Au_redon_M10_redondeado1 =number_format($total_seven_con_Au_redon_M10_aprox, 1, '.', '');
$total_seven_con_Au_redon_M10 =number_format($total_seven_con_Au_redon_M10_redondeado1);



if ($total_seven_con_Au_redon_M10_aprox == 0) {
    $total_seven_con_Au_redon_M10_aproxxx = '';

    $tot_M10 = '0';
}


if ($total_seven_con_Au_redon_M10_aprox >= 0.00000000000000001 && $total_seven_con_Au_redon_M10_aprox <=0.4) {
    $total_seven_con_Au_redon_M10_aproxxx = '0';

    $tot_M10 = '1';
}


else {
 $total_seven_con_Au_redon_M10_aproxxx = $total_seven_con_Au_redon_M10;

 $tot_M10 = '1';
}





$nota_1_M11_L1 = $row_datos_control_notasM11["nt_11"];
$nota_2_M11_L1 = $row_datos_control_notasM11["nt_12"];
$nota_3_M11_L1 = $row_datos_control_notasM11["nt_13"];
$nota_4_M11_L1 = $row_datos_control_notasM11["nt_14"];
$nota_5_M11_L1 = $row_datos_control_notasM11["nt_15"];
$nota_6_M11_L1 = $row_datos_control_notasM11["nt_16"];
$nota_7_M11_L1 = $row_datos_control_notasM11["nt_17"];
$notaAu_M11_L1 = $row_datos_control_notasM11["nt_Au1"];


$nota_real_1_M11_L1 = ($row_datos_control_notasM11["nt_11"] * $para_el_porc_V1_M11_L1)/$el_puntaje_completo_es;
$nota_real_2_M11_L1 = ($row_datos_control_notasM11["nt_12"] * $para_el_porc_V2_M11_L1)/$el_puntaje_completo_es;
$nota_real_3_M11_L1 = ($row_datos_control_notasM11["nt_13"] * $para_el_porc_V3_M11_L1)/$el_puntaje_completo_es;
$nota_real_4_M11_L1 = ($row_datos_control_notasM11["nt_14"] * $para_el_porc_V4_M11_L1)/$el_puntaje_completo_es;
$nota_real_5_M11_L1 = ($row_datos_control_notasM11["nt_15"] * $para_el_porc_V5_M11_L1)/$el_puntaje_completo_es;
$nota_real_6_M11_L1 = ($row_datos_control_notasM11["nt_16"] * $para_el_porc_V6_M11_L1)/$el_puntaje_completo_es;
$nota_real_7_M11_L1 = ($row_datos_control_notasM11["nt_17"] * $para_el_porc_V7_M11_L1)/$el_puntaje_completo_es;

$total_seven_M11_L1 = $nota_real_1_M11_L1+$nota_real_2_M11_L1+$nota_real_3_M11_L1+$nota_real_4_M11_L1+$nota_real_5_M11_L1+$nota_real_6_M11_L1+$nota_real_7_M11_L1;

$total_seven_con_Au_M11_L1 = $total_seven_M11_L1+ $row_datos_control_notasM11["nt_Au1"];

$total_seven_con_Au_M11_L1_redondeado1 =number_format($total_seven_con_Au_M11_L1, 1, '.', '');

$total_seven_con_Au_redon_M11_L1 =number_format($total_seven_con_Au_M11_L1_redondeado1);


if ($total_seven_con_Au_M11_L1 == 0) {
    $total_seven_con_Au_redon_M11_L1xx = '';

    $M11_L1 = '0';
}

else {
 $total_seven_con_Au_redon_M11_L1xx = $total_seven_con_Au_redon_M11_L1;

    $M11_L1 = '1';
}

//materia 1 lapso 1 




$nota_1_M11_L2 = $row_datos_control_notasM11["nt_21"];
$nota_2_M11_L2 = $row_datos_control_notasM11["nt_22"];
$nota_3_M11_L2 = $row_datos_control_notasM11["nt_23"];
$nota_4_M11_L2 = $row_datos_control_notasM11["nt_24"];
$nota_5_M11_L2 = $row_datos_control_notasM11["nt_25"];
$nota_6_M11_L2 = $row_datos_control_notasM11["nt_26"];
$nota_7_M11_L2 = $row_datos_control_notasM11["nt_27"];
$notaAu_M11_L2 = $row_datos_control_notasM11["nt_Au2"];


$nota_real_1_M11_L2 = ($row_datos_control_notasM11["nt_21"] * $para_el_porc_V1_M11_L2)/$el_puntaje_completo_es;
$nota_real_2_M11_L2 = ($row_datos_control_notasM11["nt_22"] * $para_el_porc_V2_M11_L2)/$el_puntaje_completo_es;
$nota_real_3_M11_L2 = ($row_datos_control_notasM11["nt_23"] * $para_el_porc_V3_M11_L2)/$el_puntaje_completo_es;
$nota_real_4_M11_L2 = ($row_datos_control_notasM11["nt_24"] * $para_el_porc_V4_M11_L2)/$el_puntaje_completo_es;
$nota_real_5_M11_L2 = ($row_datos_control_notasM11["nt_25"] * $para_el_porc_V5_M11_L2)/$el_puntaje_completo_es;
$nota_real_6_M11_L2 = ($row_datos_control_notasM11["nt_26"] * $para_el_porc_V6_M11_L2)/$el_puntaje_completo_es;
$nota_real_7_M11_L2 = ($row_datos_control_notasM11["nt_27"] * $para_el_porc_V7_M11_L2)/$el_puntaje_completo_es;

$total_seven_M11_L2 = $nota_real_1_M11_L2+$nota_real_2_M11_L2+$nota_real_3_M11_L2+$nota_real_4_M11_L2+$nota_real_5_M11_L2+$nota_real_6_M11_L2+$nota_real_7_M11_L2;

$total_seven_con_Au_M11_L2 = $total_seven_M11_L2+ $row_datos_control_notasM11["nt_Au2"];

$total_seven_con_Au_M11_L2_redondeado1 =number_format($total_seven_con_Au_M11_L2, 1, '.', '');

$total_seven_con_Au_redon_M11_L2 =number_format($total_seven_con_Au_M11_L2_redondeado1);


if ($total_seven_con_Au_M11_L2 == 0) {
    $total_seven_con_Au_redon_M11_L2xx = '';

    $M11_L2 = '0';
}

else {
 $total_seven_con_Au_redon_M11_L2xx = $total_seven_con_Au_redon_M11_L2;

 $M11_L2 = '1';
}



//materia 1 lapso 2 

$nota_1_M11_L3 = $row_datos_control_notasM11["nt_31"];
$nota_2_M11_L3 = $row_datos_control_notasM11["nt_32"];
$nota_3_M11_L3 = $row_datos_control_notasM11["nt_33"];
$nota_4_M11_L3 = $row_datos_control_notasM11["nt_34"];
$nota_5_M11_L3 = $row_datos_control_notasM11["nt_35"];
$nota_6_M11_L3 = $row_datos_control_notasM11["nt_36"];
$nota_7_M11_L3 = $row_datos_control_notasM11["nt_37"];
$notaAu_M11_L3 = $row_datos_control_notasM11["nt_Au3"];


$nota_real_1_M11_L3 = ($row_datos_control_notasM11["nt_31"] * $para_el_porc_V1_M11_L3)/$el_puntaje_completo_es;
$nota_real_2_M11_L3 = ($row_datos_control_notasM11["nt_32"] * $para_el_porc_V2_M11_L3)/$el_puntaje_completo_es;
$nota_real_3_M11_L3 = ($row_datos_control_notasM11["nt_33"] * $para_el_porc_V3_M11_L3)/$el_puntaje_completo_es;
$nota_real_4_M11_L3 = ($row_datos_control_notasM11["nt_34"] * $para_el_porc_V4_M11_L3)/$el_puntaje_completo_es;
$nota_real_5_M11_L3 = ($row_datos_control_notasM11["nt_35"] * $para_el_porc_V5_M11_L3)/$el_puntaje_completo_es;
$nota_real_6_M11_L3 = ($row_datos_control_notasM11["nt_36"] * $para_el_porc_V6_M11_L3)/$el_puntaje_completo_es;
$nota_real_7_M11_L3 = ($row_datos_control_notasM11["nt_37"] * $para_el_porc_V7_M11_L3)/$el_puntaje_completo_es;

$total_seven_M11_L3 = $nota_real_1_M11_L3+$nota_real_2_M11_L3+$nota_real_3_M11_L3+$nota_real_4_M11_L3+$nota_real_5_M11_L3+$nota_real_6_M11_L3+$nota_real_7_M11_L3;

$total_seven_con_Au_M11_L3 = $total_seven_M11_L3+ $row_datos_control_notasM11["nt_Au3"];

$total_seven_con_Au_M11_L3_redondeado1 =number_format($total_seven_con_Au_M11_L3, 1, '.', '');

$total_seven_con_Au_redon_M11_L3 =number_format($total_seven_con_Au_M11_L3_redondeado1);




if ($total_seven_con_Au_M11_L3 == 0) {
    $total_seven_con_Au_redon_M11_L3xx = '';

    $M11_L3 = '0';
}

else {
 $total_seven_con_Au_redon_M11_L3xx = $total_seven_con_Au_redon_M11_L3;

 $M11_L3 = '1';
}


//materia 1 lapso 3 


$divisor_M11 = '';

if ($total_seven_con_Au_M11_L1 == 0) {
    $divisor_M11 = $divisor_M11+0.0000001;
}

else {$divisor_M11++;}


if ($total_seven_con_Au_M11_L2 == 0) {
    $divisor_M11 = $divisor_M11+0.0000001;
}

else {$divisor_M11++;}


if ($total_seven_con_Au_M11_L3 == 0) {
    $divisor_M11 = $divisor_M11+0.0000001;
}

else {$divisor_M11++;}


$total_seven_con_Au_redon_M11_aprox = ($total_seven_con_Au_redon_M11_L1 + $total_seven_con_Au_redon_M11_L2 + $total_seven_con_Au_redon_M11_L3)/$divisor_M11;

$total_seven_con_Au_redon_M11_redondeado1 =number_format($total_seven_con_Au_redon_M11_aprox, 1, '.', '');

$total_seven_con_Au_redon_M11 =number_format($total_seven_con_Au_redon_M11_redondeado1);


if ($total_seven_con_Au_redon_M11_aprox == 0) {
    $total_seven_con_Au_redon_M11_aproxxx = '';

    $tot_M11 = '0';
}


if ($total_seven_con_Au_redon_M11_aprox >= 0.00000000000000001 && $total_seven_con_Au_redon_M11_aprox <=0.4) {
    $total_seven_con_Au_redon_M11_aproxxx = '0';

    $tot_M11 = '1';
}





else {
 $total_seven_con_Au_redon_M11_aproxxx = $total_seven_con_Au_redon_M11;

 $tot_M11 = '1';
}








$nota_1_M12_L1 = $row_datos_control_notasM12["nt_11"];
$nota_2_M12_L1 = $row_datos_control_notasM12["nt_12"];
$nota_3_M12_L1 = $row_datos_control_notasM12["nt_13"];
$nota_4_M12_L1 = $row_datos_control_notasM12["nt_14"];
$nota_5_M12_L1 = $row_datos_control_notasM12["nt_15"];
$nota_6_M12_L1 = $row_datos_control_notasM12["nt_16"];
$nota_7_M12_L1 = $row_datos_control_notasM12["nt_17"];
$notaAu_M12_L1 = $row_datos_control_notasM12["nt_Au1"];


$nota_real_1_M12_L1 = ($row_datos_control_notasM12["nt_11"] * $para_el_porc_V1_M12_L1)/$el_puntaje_completo_es;
$nota_real_2_M12_L1 = ($row_datos_control_notasM12["nt_12"] * $para_el_porc_V2_M12_L1)/$el_puntaje_completo_es;
$nota_real_3_M12_L1 = ($row_datos_control_notasM12["nt_13"] * $para_el_porc_V3_M12_L1)/$el_puntaje_completo_es;
$nota_real_4_M12_L1 = ($row_datos_control_notasM12["nt_14"] * $para_el_porc_V4_M12_L1)/$el_puntaje_completo_es;
$nota_real_5_M12_L1 = ($row_datos_control_notasM12["nt_15"] * $para_el_porc_V5_M12_L1)/$el_puntaje_completo_es;
$nota_real_6_M12_L1 = ($row_datos_control_notasM12["nt_16"] * $para_el_porc_V6_M12_L1)/$el_puntaje_completo_es;
$nota_real_7_M12_L1 = ($row_datos_control_notasM12["nt_17"] * $para_el_porc_V7_M12_L1)/$el_puntaje_completo_es;

$total_seven_M12_L1 = $nota_real_1_M12_L1+$nota_real_2_M12_L1+$nota_real_3_M12_L1+$nota_real_4_M12_L1+$nota_real_5_M12_L1+$nota_real_6_M12_L1+$nota_real_7_M12_L1;

$total_seven_con_Au_M12_L1 = $total_seven_M12_L1+ $row_datos_control_notasM12["nt_Au1"];

$total_seven_con_Au_M12_L1_redondeado1 =number_format($total_seven_con_Au_M12_L1, 1, '.', '');

$total_seven_con_Au_redon_M12_L1 =number_format($total_seven_con_Au_M12_L1_redondeado1);


if ($total_seven_con_Au_M12_L1 == 0) {
    $total_seven_con_Au_redon_M12_L1xx = '';

    $M12_L1 = '0';
}

else {
 $total_seven_con_Au_redon_M12_L1xx = $total_seven_con_Au_redon_M12_L1;

    $M12_L1 = '1';
}

//materia 1 lapso 1 




$nota_1_M12_L2 = $row_datos_control_notasM12["nt_21"];
$nota_2_M12_L2 = $row_datos_control_notasM12["nt_22"];
$nota_3_M12_L2 = $row_datos_control_notasM12["nt_23"];
$nota_4_M12_L2 = $row_datos_control_notasM12["nt_24"];
$nota_5_M12_L2 = $row_datos_control_notasM12["nt_25"];
$nota_6_M12_L2 = $row_datos_control_notasM12["nt_26"];
$nota_7_M12_L2 = $row_datos_control_notasM12["nt_27"];
$notaAu_M12_L2 = $row_datos_control_notasM12["nt_Au2"];


$nota_real_1_M12_L2 = ($row_datos_control_notasM12["nt_21"] * $para_el_porc_V1_M12_L2)/$el_puntaje_completo_es;
$nota_real_2_M12_L2 = ($row_datos_control_notasM12["nt_22"] * $para_el_porc_V2_M12_L2)/$el_puntaje_completo_es;
$nota_real_3_M12_L2 = ($row_datos_control_notasM12["nt_23"] * $para_el_porc_V3_M12_L2)/$el_puntaje_completo_es;
$nota_real_4_M12_L2 = ($row_datos_control_notasM12["nt_24"] * $para_el_porc_V4_M12_L2)/$el_puntaje_completo_es;
$nota_real_5_M12_L2 = ($row_datos_control_notasM12["nt_25"] * $para_el_porc_V5_M12_L2)/$el_puntaje_completo_es;
$nota_real_6_M12_L2 = ($row_datos_control_notasM12["nt_26"] * $para_el_porc_V6_M12_L2)/$el_puntaje_completo_es;
$nota_real_7_M12_L2 = ($row_datos_control_notasM12["nt_27"] * $para_el_porc_V7_M12_L2)/$el_puntaje_completo_es;

$total_seven_M12_L2 = $nota_real_1_M12_L2+$nota_real_2_M12_L2+$nota_real_3_M12_L2+$nota_real_4_M12_L2+$nota_real_5_M12_L2+$nota_real_6_M12_L2+$nota_real_7_M12_L2;

$total_seven_con_Au_M12_L2 = $total_seven_M12_L2+ $row_datos_control_notasM12["nt_Au2"];

$total_seven_con_Au_M12_L2_redondeado1 =number_format($total_seven_con_Au_M12_L2, 1, '.', '');


$total_seven_con_Au_redon_M12_L2 =number_format($total_seven_con_Au_M12_L2_redondeado1);


if ($total_seven_con_Au_M12_L2 == 0) {
    $total_seven_con_Au_redon_M12_L2xx = '';

    $M12_L2 = '0';
}

else {
 $total_seven_con_Au_redon_M12_L2xx = $total_seven_con_Au_redon_M12_L2;

 $M12_L2 = '1';
}



//materia 1 lapso 2 

$nota_1_M12_L3 = $row_datos_control_notasM12["nt_31"];
$nota_2_M12_L3 = $row_datos_control_notasM12["nt_32"];
$nota_3_M12_L3 = $row_datos_control_notasM12["nt_33"];
$nota_4_M12_L3 = $row_datos_control_notasM12["nt_34"];
$nota_5_M12_L3 = $row_datos_control_notasM12["nt_35"];
$nota_6_M12_L3 = $row_datos_control_notasM12["nt_36"];
$nota_7_M12_L3 = $row_datos_control_notasM12["nt_37"];
$notaAu_M12_L3 = $row_datos_control_notasM12["nt_Au3"];


$nota_real_1_M12_L3 = ($row_datos_control_notasM12["nt_31"] * $para_el_porc_V1_M12_L3)/$el_puntaje_completo_es;
$nota_real_2_M12_L3 = ($row_datos_control_notasM12["nt_32"] * $para_el_porc_V2_M12_L3)/$el_puntaje_completo_es;
$nota_real_3_M12_L3 = ($row_datos_control_notasM12["nt_33"] * $para_el_porc_V3_M12_L3)/$el_puntaje_completo_es;
$nota_real_4_M12_L3 = ($row_datos_control_notasM12["nt_34"] * $para_el_porc_V4_M12_L3)/$el_puntaje_completo_es;
$nota_real_5_M12_L3 = ($row_datos_control_notasM12["nt_35"] * $para_el_porc_V5_M12_L3)/$el_puntaje_completo_es;
$nota_real_6_M12_L3 = ($row_datos_control_notasM12["nt_36"] * $para_el_porc_V6_M12_L3)/$el_puntaje_completo_es;
$nota_real_7_M12_L3 = ($row_datos_control_notasM12["nt_37"] * $para_el_porc_V7_M12_L3)/$el_puntaje_completo_es;

$total_seven_M12_L3 = $nota_real_1_M12_L3+$nota_real_2_M12_L3+$nota_real_3_M12_L3+$nota_real_4_M12_L3+$nota_real_5_M12_L3+$nota_real_6_M12_L3+$nota_real_7_M12_L3;

$total_seven_con_Au_M12_L3 = $total_seven_M12_L3+ $row_datos_control_notasM12["nt_Au3"];

$total_seven_con_Au_M12_L3_redondeado1 =number_format($total_seven_con_Au_M12_L3, 1, '.', '');

$total_seven_con_Au_redon_M12_L3 =number_format($total_seven_con_Au_M12_L3_redondeado1);




if ($total_seven_con_Au_M12_L3 == 0) {
    $total_seven_con_Au_redon_M12_L3xx = '';

    $M12_L3 = '0';
}

else {
 $total_seven_con_Au_redon_M12_L3xx = $total_seven_con_Au_redon_M12_L3;

 $M12_L3 = '1';
}


//materia 1 lapso 3 


$divisor_M12 = '';

if ($total_seven_con_Au_M12_L1 == 0) {
    $divisor_M12 = $divisor_M12+0.0000001;
}

else {$divisor_M12++;}


if ($total_seven_con_Au_M12_L2 == 0) {
    $divisor_M12 = $divisor_M12+0.0000001;
}

else {$divisor_M12++;}


if ($total_seven_con_Au_M12_L3 == 0) {
    $divisor_M12 = $divisor_M12+0.0000001;
}

else {$divisor_M12++;}


$total_seven_con_Au_redon_M12_aprox = ($total_seven_con_Au_redon_M12_L1 + $total_seven_con_Au_redon_M12_L2 + $total_seven_con_Au_redon_M12_L3)/$divisor_M12;

$total_seven_con_Au_redon_M12_redondeado1 =number_format($total_seven_con_Au_redon_M12_aprox, 1, '.', '');

$total_seven_con_Au_redon_M12 =number_format($total_seven_con_Au_redon_M12_redondeado1);

if ($total_seven_con_Au_redon_M12_aprox == 0) {
    $total_seven_con_Au_redon_M12_aproxxx = '';

    $tot_M12 = '0';
}


if ($total_seven_con_Au_redon_M12_aprox >= 0.00000000000000001 && $total_seven_con_Au_redon_M12_aprox <=0.4) {
    $total_seven_con_Au_redon_M12_aproxxx = '0';

    $tot_M12 = '1';
}




else {
 $total_seven_con_Au_redon_M12_aproxxx = $total_seven_con_Au_redon_M12;

 $tot_M12 = '1';
}



$nota_1_M13_L1 = $row_datos_control_notasM13["nt_11"];
$nota_2_M13_L1 = $row_datos_control_notasM13["nt_12"];
$nota_3_M13_L1 = $row_datos_control_notasM13["nt_13"];
$nota_4_M13_L1 = $row_datos_control_notasM13["nt_14"];
$nota_5_M13_L1 = $row_datos_control_notasM13["nt_15"];
$nota_6_M13_L1 = $row_datos_control_notasM13["nt_16"];
$nota_7_M13_L1 = $row_datos_control_notasM13["nt_17"];
$notaAu_M13_L1 = $row_datos_control_notasM13["nt_Au1"];


$nota_real_1_M13_L1 = ($row_datos_control_notasM13["nt_11"] * $para_el_porc_V1_M13_L1)/$el_puntaje_completo_es;
$nota_real_2_M13_L1 = ($row_datos_control_notasM13["nt_12"] * $para_el_porc_V2_M13_L1)/$el_puntaje_completo_es;
$nota_real_3_M13_L1 = ($row_datos_control_notasM13["nt_13"] * $para_el_porc_V3_M13_L1)/$el_puntaje_completo_es;
$nota_real_4_M13_L1 = ($row_datos_control_notasM13["nt_14"] * $para_el_porc_V4_M13_L1)/$el_puntaje_completo_es;
$nota_real_5_M13_L1 = ($row_datos_control_notasM13["nt_15"] * $para_el_porc_V5_M13_L1)/$el_puntaje_completo_es;
$nota_real_6_M13_L1 = ($row_datos_control_notasM13["nt_16"] * $para_el_porc_V6_M13_L1)/$el_puntaje_completo_es;
$nota_real_7_M13_L1 = ($row_datos_control_notasM13["nt_17"] * $para_el_porc_V7_M13_L1)/$el_puntaje_completo_es;

$total_seven_M13_L1 = $nota_real_1_M13_L1+$nota_real_2_M13_L1+$nota_real_3_M13_L1+$nota_real_4_M13_L1+$nota_real_5_M13_L1+$nota_real_6_M13_L1+$nota_real_7_M13_L1;

$total_seven_con_Au_M13_L1 = $total_seven_M13_L1+ $row_datos_control_notasM13["nt_Au1"];

$total_seven_con_Au_M13_L1_redondeado1 =number_format($total_seven_con_Au_M13_L1, 1, '.', '');

$total_seven_con_Au_redon_M13_L1 =number_format($total_seven_con_Au_M13_L1_redondeado1);


if ($total_seven_con_Au_M13_L1 == 0) {
    $total_seven_con_Au_redon_M13_L1xx = '';

    $M13_L1 = '0';
}

else {
 $total_seven_con_Au_redon_M13_L1xx = $total_seven_con_Au_redon_M13_L1;

    $M13_L1 = '1';
}

//materia 1 lapso 1 




$nota_1_M13_L2 = $row_datos_control_notasM13["nt_21"];
$nota_2_M13_L2 = $row_datos_control_notasM13["nt_22"];
$nota_3_M13_L2 = $row_datos_control_notasM13["nt_23"];
$nota_4_M13_L2 = $row_datos_control_notasM13["nt_24"];
$nota_5_M13_L2 = $row_datos_control_notasM13["nt_25"];
$nota_6_M13_L2 = $row_datos_control_notasM13["nt_26"];
$nota_7_M13_L2 = $row_datos_control_notasM13["nt_27"];
$notaAu_M13_L2 = $row_datos_control_notasM13["nt_Au2"];


$nota_real_1_M13_L2 = ($row_datos_control_notasM13["nt_21"] * $para_el_porc_V1_M13_L2)/$el_puntaje_completo_es;
$nota_real_2_M13_L2 = ($row_datos_control_notasM13["nt_22"] * $para_el_porc_V2_M13_L2)/$el_puntaje_completo_es;
$nota_real_3_M13_L2 = ($row_datos_control_notasM13["nt_23"] * $para_el_porc_V3_M13_L2)/$el_puntaje_completo_es;
$nota_real_4_M13_L2 = ($row_datos_control_notasM13["nt_24"] * $para_el_porc_V4_M13_L2)/$el_puntaje_completo_es;
$nota_real_5_M13_L2 = ($row_datos_control_notasM13["nt_25"] * $para_el_porc_V5_M13_L2)/$el_puntaje_completo_es;
$nota_real_6_M13_L2 = ($row_datos_control_notasM13["nt_26"] * $para_el_porc_V6_M13_L2)/$el_puntaje_completo_es;
$nota_real_7_M13_L2 = ($row_datos_control_notasM13["nt_27"] * $para_el_porc_V7_M13_L2)/$el_puntaje_completo_es;

$total_seven_M13_L2 = $nota_real_1_M13_L2+$nota_real_2_M13_L2+$nota_real_3_M13_L2+$nota_real_4_M13_L2+$nota_real_5_M13_L2+$nota_real_6_M13_L2+$nota_real_7_M13_L2;

$total_seven_con_Au_M13_L2 = $total_seven_M13_L2+ $row_datos_control_notasM13["nt_Au2"];

$total_seven_con_Au_M13_L2_redondeado1 =number_format($total_seven_con_Au_M13_L2, 1, '.', '');

$total_seven_con_Au_redon_M13_L2 =number_format($total_seven_con_Au_M13_L2_redondeado1);


if ($total_seven_con_Au_M13_L2 == 0) {
    $total_seven_con_Au_redon_M13_L2xx = '';

    $M13_L2 = '0';
}

else {
 $total_seven_con_Au_redon_M13_L2xx = $total_seven_con_Au_redon_M13_L2;

 $M13_L2 = '1';
}



//materia 1 lapso 2 

$nota_1_M13_L3 = $row_datos_control_notasM13["nt_31"];
$nota_2_M13_L3 = $row_datos_control_notasM13["nt_32"];
$nota_3_M13_L3 = $row_datos_control_notasM13["nt_33"];
$nota_4_M13_L3 = $row_datos_control_notasM13["nt_34"];
$nota_5_M13_L3 = $row_datos_control_notasM13["nt_35"];
$nota_6_M13_L3 = $row_datos_control_notasM13["nt_36"];
$nota_7_M13_L3 = $row_datos_control_notasM13["nt_37"];
$notaAu_M13_L3 = $row_datos_control_notasM13["nt_Au3"];


$nota_real_1_M13_L3 = ($row_datos_control_notasM13["nt_31"] * $para_el_porc_V1_M13_L3)/$el_puntaje_completo_es;
$nota_real_2_M13_L3 = ($row_datos_control_notasM13["nt_32"] * $para_el_porc_V2_M13_L3)/$el_puntaje_completo_es;
$nota_real_3_M13_L3 = ($row_datos_control_notasM13["nt_33"] * $para_el_porc_V3_M13_L3)/$el_puntaje_completo_es;
$nota_real_4_M13_L3 = ($row_datos_control_notasM13["nt_34"] * $para_el_porc_V4_M13_L3)/$el_puntaje_completo_es;
$nota_real_5_M13_L3 = ($row_datos_control_notasM13["nt_35"] * $para_el_porc_V5_M13_L3)/$el_puntaje_completo_es;
$nota_real_6_M13_L3 = ($row_datos_control_notasM13["nt_36"] * $para_el_porc_V6_M13_L3)/$el_puntaje_completo_es;
$nota_real_7_M13_L3 = ($row_datos_control_notasM13["nt_37"] * $para_el_porc_V7_M13_L3)/$el_puntaje_completo_es;

$total_seven_M13_L3 = $nota_real_1_M13_L3+$nota_real_2_M13_L3+$nota_real_3_M13_L3+$nota_real_4_M13_L3+$nota_real_5_M13_L3+$nota_real_6_M13_L3+$nota_real_7_M13_L3;

$total_seven_con_Au_M13_L3 = $total_seven_M13_L3+ $row_datos_control_notasM13["nt_Au3"];

$total_seven_con_Au_M13_L3_redondeado1 =number_format($total_seven_con_Au_M13_L3, 1, '.', '');

$total_seven_con_Au_redon_M13_L3 =number_format($total_seven_con_Au_M13_L3_redondeado1);




if ($total_seven_con_Au_M13_L3 == 0) {
    $total_seven_con_Au_redon_M13_L3xx = '';

    $M13_L3 = '0';
}

else {
 $total_seven_con_Au_redon_M13_L3xx = $total_seven_con_Au_redon_M13_L3;

 $M13_L3 = '1';
}


//materia 1 lapso 3 


$divisor_M13 = '';

if ($total_seven_con_Au_M13_L1 == 0) {
    $divisor_M13 = $divisor_M13+0.0000001;
}

else {$divisor_M13++;}


if ($total_seven_con_Au_M13_L2 == 0) {
    $divisor_M13 = $divisor_M13+0.0000001;
}

else {$divisor_M13++;}


if ($total_seven_con_Au_M13_L3 == 0) {
    $divisor_M13 = $divisor_M13+0.0000001;
}

else {$divisor_M13++;}


$total_seven_con_Au_redon_M13_aprox = ($total_seven_con_Au_redon_M13_L1 + $total_seven_con_Au_redon_M13_L2 + $total_seven_con_Au_redon_M13_L3)/$divisor_M13;

$total_seven_con_Au_redon_M13_redondeado1 =number_format($total_seven_con_Au_redon_M13_aprox, 1, '.', '');

$total_seven_con_Au_redon_M13 =number_format($total_seven_con_Au_redon_M13_redondeado1);


if ($total_seven_con_Au_redon_M13_aprox == 0) {
    $total_seven_con_Au_redon_M13_aproxxx = '';

    $tot_M13 = '0';
}


if ($total_seven_con_Au_redon_M13_aprox >= 0.00000000000000001 && $total_seven_con_Au_redon_M13_aprox <=0.4) {
    $total_seven_con_Au_redon_M13_aproxxx = '0';

    $tot_M13 = '1';
}




else {
 $total_seven_con_Au_redon_M13_aproxxx = $total_seven_con_Au_redon_M13;

 $tot_M13 = '1';
}




$nota_1_M14_L1 = $row_datos_control_notasM14["nt_11"];
$nota_2_M14_L1 = $row_datos_control_notasM14["nt_12"];
$nota_3_M14_L1 = $row_datos_control_notasM14["nt_13"];
$nota_4_M14_L1 = $row_datos_control_notasM14["nt_14"];
$nota_5_M14_L1 = $row_datos_control_notasM14["nt_15"];
$nota_6_M14_L1 = $row_datos_control_notasM14["nt_16"];
$nota_7_M14_L1 = $row_datos_control_notasM14["nt_17"];
$notaAu_M14_L1 = $row_datos_control_notasM14["nt_Au1"];


$nota_real_1_M14_L1 = ($row_datos_control_notasM14["nt_11"] * $para_el_porc_V1_M14_L1)/$el_puntaje_completo_es;
$nota_real_2_M14_L1 = ($row_datos_control_notasM14["nt_12"] * $para_el_porc_V2_M14_L1)/$el_puntaje_completo_es;
$nota_real_3_M14_L1 = ($row_datos_control_notasM14["nt_13"] * $para_el_porc_V3_M14_L1)/$el_puntaje_completo_es;
$nota_real_4_M14_L1 = ($row_datos_control_notasM14["nt_14"] * $para_el_porc_V4_M14_L1)/$el_puntaje_completo_es;
$nota_real_5_M14_L1 = ($row_datos_control_notasM14["nt_15"] * $para_el_porc_V5_M14_L1)/$el_puntaje_completo_es;
$nota_real_6_M14_L1 = ($row_datos_control_notasM14["nt_16"] * $para_el_porc_V6_M14_L1)/$el_puntaje_completo_es;
$nota_real_7_M14_L1 = ($row_datos_control_notasM14["nt_17"] * $para_el_porc_V7_M14_L1)/$el_puntaje_completo_es;

$total_seven_M14_L1 = $nota_real_1_M14_L1+$nota_real_2_M14_L1+$nota_real_3_M14_L1+$nota_real_4_M14_L1+$nota_real_5_M14_L1+$nota_real_6_M14_L1+$nota_real_7_M14_L1;

$total_seven_con_Au_M14_L1 = $total_seven_M14_L1+ $row_datos_control_notasM14["nt_Au1"];

$total_seven_con_Au_M14_L1_redondeado1 =number_format($total_seven_con_Au_M14_L1, 1, '.', '');

$total_seven_con_Au_redon_M14_L1 =number_format($total_seven_con_Au_M14_L1_redondeado1);


if ($total_seven_con_Au_M14_L1 == 0) {
    $total_seven_con_Au_redon_M14_L1xx = '';

    $M14_L1 = '0';
}

else {
 $total_seven_con_Au_redon_M14_L1xx = $total_seven_con_Au_redon_M14_L1;

    $M14_L1 = '1';
}

//materia 1 lapso 1 




$nota_1_M14_L2 = $row_datos_control_notasM14["nt_21"];
$nota_2_M14_L2 = $row_datos_control_notasM14["nt_22"];
$nota_3_M14_L2 = $row_datos_control_notasM14["nt_23"];
$nota_4_M14_L2 = $row_datos_control_notasM14["nt_24"];
$nota_5_M14_L2 = $row_datos_control_notasM14["nt_25"];
$nota_6_M14_L2 = $row_datos_control_notasM14["nt_26"];
$nota_7_M14_L2 = $row_datos_control_notasM14["nt_27"];
$notaAu_M14_L2 = $row_datos_control_notasM14["nt_Au2"];


$nota_real_1_M14_L2 = ($row_datos_control_notasM14["nt_21"] * $para_el_porc_V1_M14_L2)/$el_puntaje_completo_es;
$nota_real_2_M14_L2 = ($row_datos_control_notasM14["nt_22"] * $para_el_porc_V2_M14_L2)/$el_puntaje_completo_es;
$nota_real_3_M14_L2 = ($row_datos_control_notasM14["nt_23"] * $para_el_porc_V3_M14_L2)/$el_puntaje_completo_es;
$nota_real_4_M14_L2 = ($row_datos_control_notasM14["nt_24"] * $para_el_porc_V4_M14_L2)/$el_puntaje_completo_es;
$nota_real_5_M14_L2 = ($row_datos_control_notasM14["nt_25"] * $para_el_porc_V5_M14_L2)/$el_puntaje_completo_es;
$nota_real_6_M14_L2 = ($row_datos_control_notasM14["nt_26"] * $para_el_porc_V6_M14_L2)/$el_puntaje_completo_es;
$nota_real_7_M14_L2 = ($row_datos_control_notasM14["nt_27"] * $para_el_porc_V7_M14_L2)/$el_puntaje_completo_es;

$total_seven_M14_L2 = $nota_real_1_M14_L2+$nota_real_2_M14_L2+$nota_real_3_M14_L2+$nota_real_4_M14_L2+$nota_real_5_M14_L2+$nota_real_6_M14_L2+$nota_real_7_M14_L2;

$total_seven_con_Au_M14_L2 = $total_seven_M14_L2+ $row_datos_control_notasM14["nt_Au2"];

$total_seven_con_Au_M14_L2_redondeado1 =number_format($total_seven_con_Au_M14_L2, 1, '.', '');

$total_seven_con_Au_redon_M14_L2 =number_format($total_seven_con_Au_M14_L2_redondeado1);


if ($total_seven_con_Au_M14_L2 == 0) {
    $total_seven_con_Au_redon_M14_L2xx = '';

    $M14_L2 = '0';
}

else {
 $total_seven_con_Au_redon_M14_L2xx = $total_seven_con_Au_redon_M14_L2;

 $M14_L2 = '1';
}



//materia 1 lapso 2 

$nota_1_M14_L3 = $row_datos_control_notasM14["nt_31"];
$nota_2_M14_L3 = $row_datos_control_notasM14["nt_32"];
$nota_3_M14_L3 = $row_datos_control_notasM14["nt_33"];
$nota_4_M14_L3 = $row_datos_control_notasM14["nt_34"];
$nota_5_M14_L3 = $row_datos_control_notasM14["nt_35"];
$nota_6_M14_L3 = $row_datos_control_notasM14["nt_36"];
$nota_7_M14_L3 = $row_datos_control_notasM14["nt_37"];
$notaAu_M14_L3 = $row_datos_control_notasM14["nt_Au3"];


$nota_real_1_M14_L3 = ($row_datos_control_notasM14["nt_31"] * $para_el_porc_V1_M14_L3)/$el_puntaje_completo_es;
$nota_real_2_M14_L3 = ($row_datos_control_notasM14["nt_32"] * $para_el_porc_V2_M14_L3)/$el_puntaje_completo_es;
$nota_real_3_M14_L3 = ($row_datos_control_notasM14["nt_33"] * $para_el_porc_V3_M14_L3)/$el_puntaje_completo_es;
$nota_real_4_M14_L3 = ($row_datos_control_notasM14["nt_34"] * $para_el_porc_V4_M14_L3)/$el_puntaje_completo_es;
$nota_real_5_M14_L3 = ($row_datos_control_notasM14["nt_35"] * $para_el_porc_V5_M14_L3)/$el_puntaje_completo_es;
$nota_real_6_M14_L3 = ($row_datos_control_notasM14["nt_36"] * $para_el_porc_V6_M14_L3)/$el_puntaje_completo_es;
$nota_real_7_M14_L3 = ($row_datos_control_notasM14["nt_37"] * $para_el_porc_V7_M14_L3)/$el_puntaje_completo_es;

$total_seven_M14_L3 = $nota_real_1_M14_L3+$nota_real_2_M14_L3+$nota_real_3_M14_L3+$nota_real_4_M14_L3+$nota_real_5_M14_L3+$nota_real_6_M14_L3+$nota_real_7_M14_L3;

$total_seven_con_Au_M14_L3 = $total_seven_M14_L3+ $row_datos_control_notasM14["nt_Au3"];

$total_seven_con_Au_M14_L3_redondeado1 =number_format($total_seven_con_Au_M14_L3, 1, '.', '');

$total_seven_con_Au_redon_M14_L3 =number_format($total_seven_con_Au_M14_L3_redondeado1);




if ($total_seven_con_Au_M14_L3 == 0) {
    $total_seven_con_Au_redon_M14_L3xx = '';

    $M14_L3 = '0';
}

else {
 $total_seven_con_Au_redon_M14_L3xx = $total_seven_con_Au_redon_M14_L3;

 $M14_L3 = '1';
}


//materia 1 lapso 3 


$divisor_M14 = '';

if ($total_seven_con_Au_M14_L1 == 0) {
    $divisor_M14 = $divisor_M14+0.0000001;
}

else {$divisor_M14++;}


if ($total_seven_con_Au_M14_L2 == 0) {
    $divisor_M14 = $divisor_M14+0.0000001;
}

else {$divisor_M14++;}


if ($total_seven_con_Au_M14_L3 == 0) {
    $divisor_M14 = $divisor_M14+0.0000001;
}

else {$divisor_M14++;}


$total_seven_con_Au_redon_M14_aprox = ($total_seven_con_Au_redon_M14_L1 + $total_seven_con_Au_redon_M14_L2 + $total_seven_con_Au_redon_M14_L3)/$divisor_M14;

$total_seven_con_Au_redon_M14_redondeado1 =number_format($total_seven_con_Au_redon_M14_aprox, 1, '.', '');

$total_seven_con_Au_redon_M14 =number_format($total_seven_con_Au_redon_M14_redondeado1);


if ($total_seven_con_Au_redon_M14_aprox == 0) {
    $total_seven_con_Au_redon_M14_aproxxx = '';

    $tot_M14 = '0';
}


if ($total_seven_con_Au_redon_M14_aprox >= 0.00000000000000001 && $total_seven_con_Au_redon_M14_aprox <=0.4) {
    $total_seven_con_Au_redon_M14_aproxxx = '0';

    $tot_M14 = '1';
}




else {
 $total_seven_con_Au_redon_M14_aproxxx = $total_seven_con_Au_redon_M14;

 $tot_M14 = '1';
}




?>




                    <td style="width:71px;height:10px; background-color: #E5F8DC;"  >   
                        <b>     <?php 
if ($row_datos_controlmat['a_convertir'] == 1 ) {  /* numerico */
       echo $total_seven_con_Au_redon_M1_L1xx;
} /* cierre numerico */
if ($row_datos_controlmat['a_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M1_L1xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M1_L1xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M1_L1xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M1_L1xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M1_L1xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M1_L1xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M1_L1xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M1_L1xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M1_L1xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M1_L1xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M1_L1xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M1_L1xx = $alfabetico_formato_12;  }
   echo $alfabetico_seven_con_Au_redon_M1_L1xx; } /* cierre alfabetico */

if ($row_datos_controlmat['a_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M1_L1xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M1_L1xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M1_L1xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M1_L1xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M1_L1xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M1_L1xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M1_L1xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M1_L1xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M1_L1xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M1_L1xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M1_L1xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M1_L1xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M1_L1xx = $literal_formato_12;  } 
  echo $literal_seven_con_Au_redon_M1_L1xx; } /* cierre literal */
                    ?>        </b> 
                    </td> <!-- marca la primera primera nota -->


                    <td style="width:71px;height:10px;">
                        

<?php 

if ($lap1_div_mat1 == '') {
    $lap1_pro_todo_M1_redond = '';
}

else {

    $lap1_pro_todo_M1 = $lap1_tot_mat1/$lap1_div_mat1;
 $lap1_pro_todo_M1_redondeado1 =number_format($lap1_pro_todo_M1, 1, '.', '');
    $lap1_pro_todo_M1_redond =number_format($lap1_pro_todo_M1_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_total_promedio_Lap_1 = $lap_suma_total_promedio_Lap_1 + $lap1_pro_todo_M1_redond;



if ($row_datos_controlmat['a_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_1 =  $lap_suma_total_promedio_Lap_1 - $lap1_pro_todo_M1_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }





    $lapso1_materia1_promedio_aula = $lap1_pro_todo_M1_redond;
    $lapso1_materia1_promedio_aula_divisor = $lapso1_materia1_promedio_aula_divisor + 1;

    // lo de antes tiene problemas este es el que sirve

     $definitiva_materia1_aula_promedio =  $definitiva_materia1_aula_promedio + $lap1_pro_todo_M1_redond;
     $definitiva_materia1_aula_divisor = $definitiva_materia1_aula_divisor + 1;
}

if ($row_datos_controlmat['a_convertir'] == 1 ) {  /* numerico */
       echo $lap1_pro_todo_M1_redond;
} /* cierre numerico */
if ($row_datos_controlmat['a_convertir'] == 2 ) {  /* alfabetico */
   if ($lap1_pro_todo_M1_redond >= $comparativo_formato_1) { $alfabetico_lap1_pro_todo_M1_redond = $alfabetico_formato_1;  }
   if ($lap1_pro_todo_M1_redond >= $comparativo_formato_2) { $alfabetico_lap1_pro_todo_M1_redond = $alfabetico_formato_2;  }
   if ($lap1_pro_todo_M1_redond >= $comparativo_formato_3) { $alfabetico_lap1_pro_todo_M1_redond = $alfabetico_formato_3;  }
   if ($lap1_pro_todo_M1_redond >= $comparativo_formato_4) { $alfabetico_lap1_pro_todo_M1_redond = $alfabetico_formato_4;  }
   if ($lap1_pro_todo_M1_redond >= $comparativo_formato_5) { $alfabetico_lap1_pro_todo_M1_redond = $alfabetico_formato_5;  }
   if ($lap1_pro_todo_M1_redond >= $comparativo_formato_6) { $alfabetico_lap1_pro_todo_M1_redond = $alfabetico_formato_6;  }
   if ($lap1_pro_todo_M1_redond >= $comparativo_formato_7) { $alfabetico_lap1_pro_todo_M1_redond = $alfabetico_formato_7;  }
   if ($lap1_pro_todo_M1_redond >= $comparativo_formato_8) { $alfabetico_lap1_pro_todo_M1_redond = $alfabetico_formato_8;  }
   if ($lap1_pro_todo_M1_redond >= $comparativo_formato_9) { $alfabetico_lap1_pro_todo_M1_redond = $alfabetico_formato_9;  }
   if ($lap1_pro_todo_M1_redond >= $comparativo_formato_10) { $alfabetico_lap1_pro_todo_M1_redond = $alfabetico_formato_10;  }
   if ($lap1_pro_todo_M1_redond >= $comparativo_formato_11) { $alfabetico_lap1_pro_todo_M1_redond = $alfabetico_formato_11;  }
   if ($lap1_pro_todo_M1_redond >= $comparativo_formato_12) { $alfabetico_lap1_pro_todo_M1_redond = $alfabetico_formato_12;  }
   echo $alfabetico_lap1_pro_todo_M1_redond; } /* cierre alfabetico */

if ($row_datos_controlmat['a_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M1_redond >= $comparativo_formato_1) { $literal_lap1_pro_todo_M1_redond = $literal_formato_1;  }
  if ($lap1_pro_todo_M1_redond >= $comparativo_formato_2) { $literal_lap1_pro_todo_M1_redond = $literal_formato_2;  }
  if ($lap1_pro_todo_M1_redond >= $comparativo_formato_3) { $literal_lap1_pro_todo_M1_redond = $literal_formato_3;  }
  if ($lap1_pro_todo_M1_redond >= $comparativo_formato_4) { $literal_lap1_pro_todo_M1_redond = $literal_formato_4;  }
  if ($lap1_pro_todo_M1_redond >= $comparativo_formato_5) { $literal_lap1_pro_todo_M1_redond = $literal_formato_5;  }
  if ($lap1_pro_todo_M1_redond >= $comparativo_formato_6) { $literal_lap1_pro_todo_M1_redond = $literal_formato_6;  }
  if ($lap1_pro_todo_M1_redond >= $comparativo_formato_7) { $literal_lap1_pro_todo_M1_redond = $literal_formato_7;  }
  if ($lap1_pro_todo_M1_redond >= $comparativo_formato_8) { $literal_lap1_pro_todo_M1_redond = $literal_formato_8;  }
  if ($lap1_pro_todo_M1_redond >= $comparativo_formato_9) { $literal_lap1_pro_todo_M1_redond = $literal_formato_9;  }
  if ($lap1_pro_todo_M1_redond >= $comparativo_formato_10) { $literal_lap1_pro_todo_M1_redond = $literal_formato_10;  }
  if ($lap1_pro_todo_M1_redond >= $comparativo_formato_11) { $literal_lap1_pro_todo_M1_redond = $literal_formato_11;  }
  if ($lap1_pro_todo_M1_redond >= $comparativo_formato_12) { $literal_lap1_pro_todo_M1_redond = $literal_formato_12;  } 
  echo $literal_lap1_pro_todo_M1_redond; } /* cierre literal */


 ?>

                    </td>

                    <td style="width:60px;height:10px; background-color: #FDFAE1; "></td>
                    <td style="width:60px;height:10px;">

                        
                    </td>

                    <td style="width:60px;height:10px;  background-color: #FDEDDA; "></td>
                    <td style="width:60px;height:10px;">
                        




                    </td>


                    <td style="width:60px;height:10px; background-color: #E8F3FB; ">



                       </td>






                    <td style="width:60px;height:10px;" >
         


                    </td>


  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" > 
   </td>


<!-- nuevo añadido 2 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" >
   </td>



                </tr>    







 <tr style="font-size: 12px;"   >
                    <td style="width:144px;height:10px; background-color: #F4F3F3;font-size: 11px;"><?php echo $row_datos_controlmat['b_bbb'];?>
                        
                        <span style="color:red;"><b> <?php

               $b_ayuda = '';

                if ($row_datos_controlmat['b_suma'] !=1) {
                  $b_ayuda = '#';
               }

                echo $b_ayuda;?></b></span>


                    </td>

                    <td style="width:71px;height:10px; background-color: #F4F3F3;"><b><?php 

if ($row_datos_controlmat['b_convertir'] == 1 ) {  /* numerico */
       echo $total_seven_con_Au_redon_M2_L1xx;
} /* cierre numerico */
if ($row_datos_controlmat['b_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M2_L1xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M2_L1xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M2_L1xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M2_L1xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M2_L1xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M2_L1xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M2_L1xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M2_L1xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M2_L1xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M2_L1xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M2_L1xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M2_L1xx = $alfabetico_formato_12;  }
   echo $alfabetico_seven_con_Au_redon_M2_L1xx; } /* cierre alfabetico */

if ($row_datos_controlmat['b_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M2_L1xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M2_L1xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M2_L1xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M2_L1xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M2_L1xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M2_L1xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M2_L1xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M2_L1xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M2_L1xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M2_L1xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M2_L1xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M2_L1xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M2_L1xx = $literal_formato_12;  } 
  echo $literal_seven_con_Au_redon_M2_L1xx; } /* cierre literal */


                    ?></b></td>
                    <td style="width:71px;height:10px; background-color: #F4F3F3;">
                        
<?php 

if ($lap1_div_mat2 == '') {
    $lap1_pro_todo_M2_redond = '';
}

else {

    $lap1_pro_todo_M2 = $lap1_tot_mat2/$lap1_div_mat2;

  $lap1_pro_todo_M2_redondeado1 =number_format($lap1_pro_todo_M2, 1, '.', '');

    $lap1_pro_todo_M2_redond =number_format($lap1_pro_todo_M2_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_total_promedio_Lap_1 = $lap_suma_total_promedio_Lap_1 + $lap1_pro_todo_M2_redond;


if ($row_datos_controlmat['b_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_1 =  $lap_suma_total_promedio_Lap_1 - $lap1_pro_todo_M2_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia2_promedio_aula = $lap1_pro_todo_M2_redond;
    $lapso1_materia2_promedio_aula_divisor = $lapso1_materia2_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia2_aula_promedio =  $definitiva_materia2_aula_promedio + $lap1_pro_todo_M2_redond;
     $definitiva_materia2_aula_divisor = $definitiva_materia2_aula_divisor + 1;


}



if ($row_datos_controlmat['b_convertir'] == 1 ) {  /* numerico */
       echo $lap1_pro_todo_M2_redond;
} /* cierre numerico */
if ($row_datos_controlmat['b_convertir'] == 2 ) {  /* alfabetico */
   if ($lap1_pro_todo_M2_redond >= $comparativo_formato_1) { $alfabetico_lap1_pro_todo_M2_redond = $alfabetico_formato_1;  }
   if ($lap1_pro_todo_M2_redond >= $comparativo_formato_2) { $alfabetico_lap1_pro_todo_M2_redond = $alfabetico_formato_2;  }
   if ($lap1_pro_todo_M2_redond >= $comparativo_formato_3) { $alfabetico_lap1_pro_todo_M2_redond = $alfabetico_formato_3;  }
   if ($lap1_pro_todo_M2_redond >= $comparativo_formato_4) { $alfabetico_lap1_pro_todo_M2_redond = $alfabetico_formato_4;  }
   if ($lap1_pro_todo_M2_redond >= $comparativo_formato_5) { $alfabetico_lap1_pro_todo_M2_redond = $alfabetico_formato_5;  }
   if ($lap1_pro_todo_M2_redond >= $comparativo_formato_6) { $alfabetico_lap1_pro_todo_M2_redond = $alfabetico_formato_6;  }
   if ($lap1_pro_todo_M2_redond >= $comparativo_formato_7) { $alfabetico_lap1_pro_todo_M2_redond = $alfabetico_formato_7;  }
   if ($lap1_pro_todo_M2_redond >= $comparativo_formato_8) { $alfabetico_lap1_pro_todo_M2_redond = $alfabetico_formato_8;  }
   if ($lap1_pro_todo_M2_redond >= $comparativo_formato_9) { $alfabetico_lap1_pro_todo_M2_redond = $alfabetico_formato_9;  }
   if ($lap1_pro_todo_M2_redond >= $comparativo_formato_10) { $alfabetico_lap1_pro_todo_M2_redond = $alfabetico_formato_10;  }
   if ($lap1_pro_todo_M2_redond >= $comparativo_formato_11) { $alfabetico_lap1_pro_todo_M2_redond = $alfabetico_formato_11;  }
   if ($lap1_pro_todo_M2_redond >= $comparativo_formato_12) { $alfabetico_lap1_pro_todo_M2_redond = $alfabetico_formato_12;  }
   echo $alfabetico_lap1_pro_todo_M2_redond; } /* cierre alfabetico */

if ($row_datos_controlmat['b_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M2_redond >= $comparativo_formato_1) { $literal_lap1_pro_todo_M2_redond = $literal_formato_1;  }
  if ($lap1_pro_todo_M2_redond >= $comparativo_formato_2) { $literal_lap1_pro_todo_M2_redond = $literal_formato_2;  }
  if ($lap1_pro_todo_M2_redond >= $comparativo_formato_3) { $literal_lap1_pro_todo_M2_redond = $literal_formato_3;  }
  if ($lap1_pro_todo_M2_redond >= $comparativo_formato_4) { $literal_lap1_pro_todo_M2_redond = $literal_formato_4;  }
  if ($lap1_pro_todo_M2_redond >= $comparativo_formato_5) { $literal_lap1_pro_todo_M2_redond = $literal_formato_5;  }
  if ($lap1_pro_todo_M2_redond >= $comparativo_formato_6) { $literal_lap1_pro_todo_M2_redond = $literal_formato_6;  }
  if ($lap1_pro_todo_M2_redond >= $comparativo_formato_7) { $literal_lap1_pro_todo_M2_redond = $literal_formato_7;  }
  if ($lap1_pro_todo_M2_redond >= $comparativo_formato_8) { $literal_lap1_pro_todo_M2_redond = $literal_formato_8;  }
  if ($lap1_pro_todo_M2_redond >= $comparativo_formato_9) { $literal_lap1_pro_todo_M2_redond = $literal_formato_9;  }
  if ($lap1_pro_todo_M2_redond >= $comparativo_formato_10) { $literal_lap1_pro_todo_M2_redond = $literal_formato_10;  }
  if ($lap1_pro_todo_M2_redond >= $comparativo_formato_11) { $literal_lap1_pro_todo_M2_redond = $literal_formato_11;  }
  if ($lap1_pro_todo_M2_redond >= $comparativo_formato_12) { $literal_lap1_pro_todo_M2_redond = $literal_formato_12;  } 
  echo $literal_lap1_pro_todo_M2_redond; } /* cierre literal */ ?>




                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;"></td>
                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
     


                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;"></td>
                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
                        
 </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;">


                       </td>












                    <td style="width:60px;height:10px; background-color: #F4F3F3;">




                    </td>





<!-- nuevo añadido 1 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" >
   </td>


<!-- nuevo añadido 2 -->
  <td style="width:30px; height:10px;" BGCOLOR="<?php echo $color0;?>" > 
   </td>





                </tr>





 <tr style="font-size: 12px;"   >
                    <td style="width:144px;height:10px;font-size: 11px;"><?php echo $row_datos_controlmat['c_ccc'];?>
                        
                        <span style="color:red;"><b> <?php

               $c_ayuda = '';

                if ($row_datos_controlmat['c_suma'] !=1) {
                  $c_ayuda = '#';
               }

                echo $c_ayuda;?></b></span>


                    </td>

                    <td style="width:71px;height:10px; background-color: #E5F8DC;"><b><?php 

if ($row_datos_controlmat['c_convertir'] == 1 ) {  /* numerico */
       echo $total_seven_con_Au_redon_M3_L1xx;
} /* cierre numerico */
if ($row_datos_controlmat['c_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M3_L1xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M3_L1xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M3_L1xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M3_L1xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M3_L1xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M3_L1xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M3_L1xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M3_L1xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M3_L1xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M3_L1xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M3_L1xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M3_L1xx = $alfabetico_formato_12;  }
   echo $alfabetico_seven_con_Au_redon_M3_L1xx; } /* cierre alfabetico */

if ($row_datos_controlmat['c_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M3_L1xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M3_L1xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M3_L1xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M3_L1xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M3_L1xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M3_L1xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M3_L1xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M3_L1xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M3_L1xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M3_L1xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M3_L1xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M3_L1xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M3_L1xx = $literal_formato_12;  } 
  echo $literal_seven_con_Au_redon_M3_L1xx; } /* cierre literal */


                    ?></b></td>
                    <td style="width:71px;height:10px;">
                        
<?php 

if ($lap1_div_mat3 == '') {
    $lap1_pro_todo_M3_redond = '';
}

else {

    $lap1_pro_todo_M3 = $lap1_tot_mat3/$lap1_div_mat3;

  $lap1_pro_todo_M3_redondeado1 =number_format($lap1_pro_todo_M3, 1, '.', '');

    $lap1_pro_todo_M3_redond =number_format($lap1_pro_todo_M3_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_total_promedio_Lap_1 = $lap_suma_total_promedio_Lap_1 + $lap1_pro_todo_M3_redond;


if ($row_datos_controlmat['c_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_1 =  $lap_suma_total_promedio_Lap_1 - $lap1_pro_todo_M3_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia3_promedio_aula = $lap1_pro_todo_M3_redond;
    $lapso1_materia3_promedio_aula_divisor = $lapso1_materia3_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia3_aula_promedio =  $definitiva_materia3_aula_promedio + $lap1_pro_todo_M3_redond;
     $definitiva_materia3_aula_divisor = $definitiva_materia3_aula_divisor + 1;


}



if ($row_datos_controlmat['c_convertir'] == 1 ) {  /* numerico */
       echo $lap1_pro_todo_M3_redond;
} /* cierre numerico */
if ($row_datos_controlmat['c_convertir'] == 2 ) {  /* alfabetico */
   if ($lap1_pro_todo_M3_redond >= $comparativo_formato_1) { $alfabetico_lap1_pro_todo_M3_redond = $alfabetico_formato_1;  }
   if ($lap1_pro_todo_M3_redond >= $comparativo_formato_2) { $alfabetico_lap1_pro_todo_M3_redond = $alfabetico_formato_2;  }
   if ($lap1_pro_todo_M3_redond >= $comparativo_formato_3) { $alfabetico_lap1_pro_todo_M3_redond = $alfabetico_formato_3;  }
   if ($lap1_pro_todo_M3_redond >= $comparativo_formato_4) { $alfabetico_lap1_pro_todo_M3_redond = $alfabetico_formato_4;  }
   if ($lap1_pro_todo_M3_redond >= $comparativo_formato_5) { $alfabetico_lap1_pro_todo_M3_redond = $alfabetico_formato_5;  }
   if ($lap1_pro_todo_M3_redond >= $comparativo_formato_6) { $alfabetico_lap1_pro_todo_M3_redond = $alfabetico_formato_6;  }
   if ($lap1_pro_todo_M3_redond >= $comparativo_formato_7) { $alfabetico_lap1_pro_todo_M3_redond = $alfabetico_formato_7;  }
   if ($lap1_pro_todo_M3_redond >= $comparativo_formato_8) { $alfabetico_lap1_pro_todo_M3_redond = $alfabetico_formato_8;  }
   if ($lap1_pro_todo_M3_redond >= $comparativo_formato_9) { $alfabetico_lap1_pro_todo_M3_redond = $alfabetico_formato_9;  }
   if ($lap1_pro_todo_M3_redond >= $comparativo_formato_10) { $alfabetico_lap1_pro_todo_M3_redond = $alfabetico_formato_10;  }
   if ($lap1_pro_todo_M3_redond >= $comparativo_formato_11) { $alfabetico_lap1_pro_todo_M3_redond = $alfabetico_formato_11;  }
   if ($lap1_pro_todo_M3_redond >= $comparativo_formato_12) { $alfabetico_lap1_pro_todo_M3_redond = $alfabetico_formato_12;  }
   echo $alfabetico_lap1_pro_todo_M3_redond; } /* cierre alfabetico */

if ($row_datos_controlmat['c_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M3_redond >= $comparativo_formato_1) { $literal_lap1_pro_todo_M3_redond = $literal_formato_1;  }
  if ($lap1_pro_todo_M3_redond >= $comparativo_formato_2) { $literal_lap1_pro_todo_M3_redond = $literal_formato_2;  }
  if ($lap1_pro_todo_M3_redond >= $comparativo_formato_3) { $literal_lap1_pro_todo_M3_redond = $literal_formato_3;  }
  if ($lap1_pro_todo_M3_redond >= $comparativo_formato_4) { $literal_lap1_pro_todo_M3_redond = $literal_formato_4;  }
  if ($lap1_pro_todo_M3_redond >= $comparativo_formato_5) { $literal_lap1_pro_todo_M3_redond = $literal_formato_5;  }
  if ($lap1_pro_todo_M3_redond >= $comparativo_formato_6) { $literal_lap1_pro_todo_M3_redond = $literal_formato_6;  }
  if ($lap1_pro_todo_M3_redond >= $comparativo_formato_7) { $literal_lap1_pro_todo_M3_redond = $literal_formato_7;  }
  if ($lap1_pro_todo_M3_redond >= $comparativo_formato_8) { $literal_lap1_pro_todo_M3_redond = $literal_formato_8;  }
  if ($lap1_pro_todo_M3_redond >= $comparativo_formato_9) { $literal_lap1_pro_todo_M3_redond = $literal_formato_9;  }
  if ($lap1_pro_todo_M3_redond >= $comparativo_formato_10) { $literal_lap1_pro_todo_M3_redond = $literal_formato_10;  }
  if ($lap1_pro_todo_M3_redond >= $comparativo_formato_11) { $literal_lap1_pro_todo_M3_redond = $literal_formato_11;  }
  if ($lap1_pro_todo_M3_redond >= $comparativo_formato_12) { $literal_lap1_pro_todo_M3_redond = $literal_formato_12;  } 
  echo $literal_lap1_pro_todo_M3_redond; } /* cierre literal */ ?>




                    </td>


                    <td style="width:60px;height:10px; background-color: #FDFAE1;"></td>
                    <td style="width:60px;height:10px;">
       



                    </td>


                    <td style="width:60px;height:10px; background-color: #FDF0E1;"></td>
                    <td style="width:60px;height:10px;">
                        




                    </td>


                    <td style="width:60px;height:10px; background-color: #E8F3FB;">



                       </td>












                    <td style="width:60px;height:10px;">




                    </td>


<!-- nuevo añadido 1 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" > 
   </td>


<!-- nuevo añadido 2 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" > 
   </td>






                </tr>




 <tr style="font-size: 12px;"   >
                    <td style="width:144px;height:10px; background-color: #F4F3F3;font-size: 11px;"><?php echo $row_datos_controlmat['d_ddd'];?>
                        
                        <span style="color:red;"><b> <?php

               $d_ayuda = '';

                if ($row_datos_controlmat['d_suma'] !=1) {
                  $d_ayuda = '#';
               }

                echo $d_ayuda;?></b></span>


                    </td>

                    <td style="width:71px;height:10px; background-color: #F4F3F3;"><b><?php 

if ($row_datos_controlmat['d_convertir'] == 1 ) {  /* numerico */
       echo $total_seven_con_Au_redon_M4_L1xx;
} /* cierre numerico */
if ($row_datos_controlmat['d_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M4_L1xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M4_L1xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M4_L1xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M4_L1xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M4_L1xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M4_L1xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M4_L1xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M4_L1xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M4_L1xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M4_L1xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M4_L1xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M4_L1xx = $alfabetico_formato_12;  }
   echo $alfabetico_seven_con_Au_redon_M4_L1xx; } /* cierre alfabetico */

if ($row_datos_controlmat['d_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M4_L1xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M4_L1xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M4_L1xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M4_L1xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M4_L1xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M4_L1xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M4_L1xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M4_L1xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M4_L1xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M4_L1xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M4_L1xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M4_L1xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M4_L1xx = $literal_formato_12;  } 
  echo $literal_seven_con_Au_redon_M4_L1xx; } /* cierre literal */


                    ?></b></td>
                    <td style="width:71px;height:10px; background-color: #F4F3F3;">
                        
<?php 

if ($lap1_div_mat4 == '') {
    $lap1_pro_todo_M4_redond = '';
}

else {

    $lap1_pro_todo_M4 = $lap1_tot_mat4/$lap1_div_mat4;

  $lap1_pro_todo_M4_redondeado1 =number_format($lap1_pro_todo_M4, 1, '.', '');

    $lap1_pro_todo_M4_redond =number_format($lap1_pro_todo_M4_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_total_promedio_Lap_1 = $lap_suma_total_promedio_Lap_1 + $lap1_pro_todo_M4_redond;


if ($row_datos_controlmat['d_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_1 =  $lap_suma_total_promedio_Lap_1 - $lap1_pro_todo_M4_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia4_promedio_aula = $lap1_pro_todo_M4_redond;
    $lapso1_materia4_promedio_aula_divisor = $lapso1_materia4_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia4_aula_promedio =  $definitiva_materia4_aula_promedio + $lap1_pro_todo_M4_redond;
     $definitiva_materia4_aula_divisor = $definitiva_materia4_aula_divisor + 1;


}



if ($row_datos_controlmat['d_convertir'] == 1 ) {  /* numerico */
       echo $lap1_pro_todo_M4_redond;
} /* cierre numerico */
if ($row_datos_controlmat['d_convertir'] == 2 ) {  /* alfabetico */
   if ($lap1_pro_todo_M4_redond >= $comparativo_formato_1) { $alfabetico_lap1_pro_todo_M4_redond = $alfabetico_formato_1;  }
   if ($lap1_pro_todo_M4_redond >= $comparativo_formato_2) { $alfabetico_lap1_pro_todo_M4_redond = $alfabetico_formato_2;  }
   if ($lap1_pro_todo_M4_redond >= $comparativo_formato_3) { $alfabetico_lap1_pro_todo_M4_redond = $alfabetico_formato_3;  }
   if ($lap1_pro_todo_M4_redond >= $comparativo_formato_4) { $alfabetico_lap1_pro_todo_M4_redond = $alfabetico_formato_4;  }
   if ($lap1_pro_todo_M4_redond >= $comparativo_formato_5) { $alfabetico_lap1_pro_todo_M4_redond = $alfabetico_formato_5;  }
   if ($lap1_pro_todo_M4_redond >= $comparativo_formato_6) { $alfabetico_lap1_pro_todo_M4_redond = $alfabetico_formato_6;  }
   if ($lap1_pro_todo_M4_redond >= $comparativo_formato_7) { $alfabetico_lap1_pro_todo_M4_redond = $alfabetico_formato_7;  }
   if ($lap1_pro_todo_M4_redond >= $comparativo_formato_8) { $alfabetico_lap1_pro_todo_M4_redond = $alfabetico_formato_8;  }
   if ($lap1_pro_todo_M4_redond >= $comparativo_formato_9) { $alfabetico_lap1_pro_todo_M4_redond = $alfabetico_formato_9;  }
   if ($lap1_pro_todo_M4_redond >= $comparativo_formato_10) { $alfabetico_lap1_pro_todo_M4_redond = $alfabetico_formato_10;  }
   if ($lap1_pro_todo_M4_redond >= $comparativo_formato_11) { $alfabetico_lap1_pro_todo_M4_redond = $alfabetico_formato_11;  }
   if ($lap1_pro_todo_M4_redond >= $comparativo_formato_12) { $alfabetico_lap1_pro_todo_M4_redond = $alfabetico_formato_12;  }
   echo $alfabetico_lap1_pro_todo_M4_redond; } /* cierre alfabetico */

if ($row_datos_controlmat['d_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M4_redond >= $comparativo_formato_1) { $literal_lap1_pro_todo_M4_redond = $literal_formato_1;  }
  if ($lap1_pro_todo_M4_redond >= $comparativo_formato_2) { $literal_lap1_pro_todo_M4_redond = $literal_formato_2;  }
  if ($lap1_pro_todo_M4_redond >= $comparativo_formato_3) { $literal_lap1_pro_todo_M4_redond = $literal_formato_3;  }
  if ($lap1_pro_todo_M4_redond >= $comparativo_formato_4) { $literal_lap1_pro_todo_M4_redond = $literal_formato_4;  }
  if ($lap1_pro_todo_M4_redond >= $comparativo_formato_5) { $literal_lap1_pro_todo_M4_redond = $literal_formato_5;  }
  if ($lap1_pro_todo_M4_redond >= $comparativo_formato_6) { $literal_lap1_pro_todo_M4_redond = $literal_formato_6;  }
  if ($lap1_pro_todo_M4_redond >= $comparativo_formato_7) { $literal_lap1_pro_todo_M4_redond = $literal_formato_7;  }
  if ($lap1_pro_todo_M4_redond >= $comparativo_formato_8) { $literal_lap1_pro_todo_M4_redond = $literal_formato_8;  }
  if ($lap1_pro_todo_M4_redond >= $comparativo_formato_9) { $literal_lap1_pro_todo_M4_redond = $literal_formato_9;  }
  if ($lap1_pro_todo_M4_redond >= $comparativo_formato_10) { $literal_lap1_pro_todo_M4_redond = $literal_formato_10;  }
  if ($lap1_pro_todo_M4_redond >= $comparativo_formato_11) { $literal_lap1_pro_todo_M4_redond = $literal_formato_11;  }
  if ($lap1_pro_todo_M4_redond >= $comparativo_formato_12) { $literal_lap1_pro_todo_M4_redond = $literal_formato_12;  } 
  echo $literal_lap1_pro_todo_M4_redond; } /* cierre literal */ ?>




                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;"></td>
                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
                


                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;"></td>
                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
                        





                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;">


                       </td>












                    <td style="width:60px;height:10px; background-color: #F4F3F3;">  </td>



<!-- nuevo añadido 1 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" >  
   </td>


<!-- nuevo añadido 2 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>">
   </td>


                </tr>



 <tr style="font-size: 12px;"   >
                    <td style="width:144px;height:10px;font-size: 11px;"><?php echo $row_datos_controlmat['e_eee'];?>
                        
                        <span style="color:red;"><b> <?php

               $e_ayuda = '';

                if ($row_datos_controlmat['e_suma'] !=1) {
                  $e_ayuda = '#';
               }

                echo $e_ayuda;?></b></span>


                    </td>

                    <td style="width:71px;height:10px; background-color: #E5F8DC;"><b><?php 

if ($row_datos_controlmat['e_convertir'] == 1 ) {  /* numerico */
       echo $total_seven_con_Au_redon_M5_L1xx;
} /* cierre numerico */
if ($row_datos_controlmat['e_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M5_L1xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M5_L1xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M5_L1xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M5_L1xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M5_L1xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M5_L1xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M5_L1xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M5_L1xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M5_L1xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M5_L1xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M5_L1xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M5_L1xx = $alfabetico_formato_12;  }
   echo $alfabetico_seven_con_Au_redon_M5_L1xx; } /* cierre alfabetico */

if ($row_datos_controlmat['e_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M5_L1xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M5_L1xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M5_L1xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M5_L1xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M5_L1xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M5_L1xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M5_L1xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M5_L1xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M5_L1xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M5_L1xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M5_L1xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M5_L1xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M5_L1xx = $literal_formato_12;  } 
  echo $literal_seven_con_Au_redon_M5_L1xx; } /* cierre literal */


                    ?></b></td>
                    <td style="width:71px;height:10px;">
                        
<?php 

if ($lap1_div_mat5 == '') {
    $lap1_pro_todo_M5_redond = '';
}

else {

    $lap1_pro_todo_M5 = $lap1_tot_mat5/$lap1_div_mat5;

  $lap1_pro_todo_M5_redondeado1 =number_format($lap1_pro_todo_M5, 1, '.', '');

    $lap1_pro_todo_M5_redond =number_format($lap1_pro_todo_M5_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_total_promedio_Lap_1 = $lap_suma_total_promedio_Lap_1 + $lap1_pro_todo_M5_redond;


if ($row_datos_controlmat['e_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_1 =  $lap_suma_total_promedio_Lap_1 - $lap1_pro_todo_M5_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia5_promedio_aula = $lap1_pro_todo_M5_redond;
    $lapso1_materia5_promedio_aula_divisor = $lapso1_materia5_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia5_aula_promedio =  $definitiva_materia5_aula_promedio + $lap1_pro_todo_M5_redond;
     $definitiva_materia5_aula_divisor = $definitiva_materia5_aula_divisor + 1;


}



if ($row_datos_controlmat['e_convertir'] == 1 ) {  /* numerico */
       echo $lap1_pro_todo_M5_redond;
} /* cierre numerico */
if ($row_datos_controlmat['e_convertir'] == 2 ) {  /* alfabetico */
   if ($lap1_pro_todo_M5_redond >= $comparativo_formato_1) { $alfabetico_lap1_pro_todo_M5_redond = $alfabetico_formato_1;  }
   if ($lap1_pro_todo_M5_redond >= $comparativo_formato_2) { $alfabetico_lap1_pro_todo_M5_redond = $alfabetico_formato_2;  }
   if ($lap1_pro_todo_M5_redond >= $comparativo_formato_3) { $alfabetico_lap1_pro_todo_M5_redond = $alfabetico_formato_3;  }
   if ($lap1_pro_todo_M5_redond >= $comparativo_formato_4) { $alfabetico_lap1_pro_todo_M5_redond = $alfabetico_formato_4;  }
   if ($lap1_pro_todo_M5_redond >= $comparativo_formato_5) { $alfabetico_lap1_pro_todo_M5_redond = $alfabetico_formato_5;  }
   if ($lap1_pro_todo_M5_redond >= $comparativo_formato_6) { $alfabetico_lap1_pro_todo_M5_redond = $alfabetico_formato_6;  }
   if ($lap1_pro_todo_M5_redond >= $comparativo_formato_7) { $alfabetico_lap1_pro_todo_M5_redond = $alfabetico_formato_7;  }
   if ($lap1_pro_todo_M5_redond >= $comparativo_formato_8) { $alfabetico_lap1_pro_todo_M5_redond = $alfabetico_formato_8;  }
   if ($lap1_pro_todo_M5_redond >= $comparativo_formato_9) { $alfabetico_lap1_pro_todo_M5_redond = $alfabetico_formato_9;  }
   if ($lap1_pro_todo_M5_redond >= $comparativo_formato_10) { $alfabetico_lap1_pro_todo_M5_redond = $alfabetico_formato_10;  }
   if ($lap1_pro_todo_M5_redond >= $comparativo_formato_11) { $alfabetico_lap1_pro_todo_M5_redond = $alfabetico_formato_11;  }
   if ($lap1_pro_todo_M5_redond >= $comparativo_formato_12) { $alfabetico_lap1_pro_todo_M5_redond = $alfabetico_formato_12;  }
   echo $alfabetico_lap1_pro_todo_M5_redond; } /* cierre alfabetico */

if ($row_datos_controlmat['e_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M5_redond >= $comparativo_formato_1) { $literal_lap1_pro_todo_M5_redond = $literal_formato_1;  }
  if ($lap1_pro_todo_M5_redond >= $comparativo_formato_2) { $literal_lap1_pro_todo_M5_redond = $literal_formato_2;  }
  if ($lap1_pro_todo_M5_redond >= $comparativo_formato_3) { $literal_lap1_pro_todo_M5_redond = $literal_formato_3;  }
  if ($lap1_pro_todo_M5_redond >= $comparativo_formato_4) { $literal_lap1_pro_todo_M5_redond = $literal_formato_4;  }
  if ($lap1_pro_todo_M5_redond >= $comparativo_formato_5) { $literal_lap1_pro_todo_M5_redond = $literal_formato_5;  }
  if ($lap1_pro_todo_M5_redond >= $comparativo_formato_6) { $literal_lap1_pro_todo_M5_redond = $literal_formato_6;  }
  if ($lap1_pro_todo_M5_redond >= $comparativo_formato_7) { $literal_lap1_pro_todo_M5_redond = $literal_formato_7;  }
  if ($lap1_pro_todo_M5_redond >= $comparativo_formato_8) { $literal_lap1_pro_todo_M5_redond = $literal_formato_8;  }
  if ($lap1_pro_todo_M5_redond >= $comparativo_formato_9) { $literal_lap1_pro_todo_M5_redond = $literal_formato_9;  }
  if ($lap1_pro_todo_M5_redond >= $comparativo_formato_10) { $literal_lap1_pro_todo_M5_redond = $literal_formato_10;  }
  if ($lap1_pro_todo_M5_redond >= $comparativo_formato_11) { $literal_lap1_pro_todo_M5_redond = $literal_formato_11;  }
  if ($lap1_pro_todo_M5_redond >= $comparativo_formato_12) { $literal_lap1_pro_todo_M5_redond = $literal_formato_12;  } 
  echo $literal_lap1_pro_todo_M5_redond; } /* cierre literal */ ?>




                    </td>


                    <td style="width:60px;height:10px; background-color: #FDFAE1;"></td>
                    <td style="width:60px;height:10px;">
       
                    </td>


                    <td style="width:60px;height:10px; background-color: #FDF0E1;"></td>
                    <td style="width:60px;height:10px;">
                        


                    </td>


                    <td style="width:60px;height:10px; background-color: #E8F3FB;">



                       </td>












                    <td style="width:60px;height:10px;">
                    </td>



<!-- nuevo añadido 1 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" > 
   </td>


<!-- nuevo añadido 2 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" >  
   </td>




                </tr>




 <tr style="font-size: 12px;"   >
                    <td style="width:144px;height:10px; background-color: #F4F3F3;font-size: 11px;"><?php echo $row_datos_controlmat['f_fff'];?>
                        
                        <span style="color:red;"><b> <?php

               $f_ayuda = '';

                if ($row_datos_controlmat['f_suma'] !=1) {
                  $f_ayuda = '#';
               }

                echo $f_ayuda;?></b></span>


                    </td>

                    <td style="width:71px;height:10px; background-color: #F4F3F3;"><b><?php 

if ($row_datos_controlmat['f_convertir'] == 1 ) {  /* numerico */
       echo $total_seven_con_Au_redon_M6_L1xx;
} /* cierre numerico */
if ($row_datos_controlmat['f_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M6_L1xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M6_L1xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M6_L1xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M6_L1xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M6_L1xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M6_L1xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M6_L1xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M6_L1xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M6_L1xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M6_L1xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M6_L1xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M6_L1xx = $alfabetico_formato_12;  }
   echo $alfabetico_seven_con_Au_redon_M6_L1xx; } /* cierre alfabetico */

if ($row_datos_controlmat['f_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M6_L1xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M6_L1xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M6_L1xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M6_L1xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M6_L1xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M6_L1xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M6_L1xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M6_L1xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M6_L1xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M6_L1xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M6_L1xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M6_L1xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M6_L1xx = $literal_formato_12;  } 
  echo $literal_seven_con_Au_redon_M6_L1xx; } /* cierre literal */


                    ?></b></td>
                    <td style="width:71px;height:10px; background-color: #F4F3F3;">
                        
<?php 

if ($lap1_div_mat6 == '') {
    $lap1_pro_todo_M6_redond = '';
}

else {

    $lap1_pro_todo_M6 = $lap1_tot_mat6/$lap1_div_mat6;

  $lap1_pro_todo_M6_redondeado1 =number_format($lap1_pro_todo_M6, 1, '.', '');

    $lap1_pro_todo_M6_redond =number_format($lap1_pro_todo_M6_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_total_promedio_Lap_1 = $lap_suma_total_promedio_Lap_1 + $lap1_pro_todo_M6_redond;


if ($row_datos_controlmat['f_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_1 =  $lap_suma_total_promedio_Lap_1 - $lap1_pro_todo_M6_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia6_promedio_aula = $lap1_pro_todo_M6_redond;
    $lapso1_materia6_promedio_aula_divisor = $lapso1_materia6_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia6_aula_promedio =  $definitiva_materia6_aula_promedio + $lap1_pro_todo_M6_redond;
     $definitiva_materia6_aula_divisor = $definitiva_materia6_aula_divisor + 1;


}



if ($row_datos_controlmat['f_convertir'] == 1 ) {  /* numerico */
       echo $lap1_pro_todo_M6_redond;
} /* cierre numerico */
if ($row_datos_controlmat['f_convertir'] == 2 ) {  /* alfabetico */
   if ($lap1_pro_todo_M6_redond >= $comparativo_formato_1) { $alfabetico_lap1_pro_todo_M6_redond = $alfabetico_formato_1;  }
   if ($lap1_pro_todo_M6_redond >= $comparativo_formato_2) { $alfabetico_lap1_pro_todo_M6_redond = $alfabetico_formato_2;  }
   if ($lap1_pro_todo_M6_redond >= $comparativo_formato_3) { $alfabetico_lap1_pro_todo_M6_redond = $alfabetico_formato_3;  }
   if ($lap1_pro_todo_M6_redond >= $comparativo_formato_4) { $alfabetico_lap1_pro_todo_M6_redond = $alfabetico_formato_4;  }
   if ($lap1_pro_todo_M6_redond >= $comparativo_formato_5) { $alfabetico_lap1_pro_todo_M6_redond = $alfabetico_formato_5;  }
   if ($lap1_pro_todo_M6_redond >= $comparativo_formato_6) { $alfabetico_lap1_pro_todo_M6_redond = $alfabetico_formato_6;  }
   if ($lap1_pro_todo_M6_redond >= $comparativo_formato_7) { $alfabetico_lap1_pro_todo_M6_redond = $alfabetico_formato_7;  }
   if ($lap1_pro_todo_M6_redond >= $comparativo_formato_8) { $alfabetico_lap1_pro_todo_M6_redond = $alfabetico_formato_8;  }
   if ($lap1_pro_todo_M6_redond >= $comparativo_formato_9) { $alfabetico_lap1_pro_todo_M6_redond = $alfabetico_formato_9;  }
   if ($lap1_pro_todo_M6_redond >= $comparativo_formato_10) { $alfabetico_lap1_pro_todo_M6_redond = $alfabetico_formato_10;  }
   if ($lap1_pro_todo_M6_redond >= $comparativo_formato_11) { $alfabetico_lap1_pro_todo_M6_redond = $alfabetico_formato_11;  }
   if ($lap1_pro_todo_M6_redond >= $comparativo_formato_12) { $alfabetico_lap1_pro_todo_M6_redond = $alfabetico_formato_12;  }
   echo $alfabetico_lap1_pro_todo_M6_redond; } /* cierre alfabetico */

if ($row_datos_controlmat['f_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M6_redond >= $comparativo_formato_1) { $literal_lap1_pro_todo_M6_redond = $literal_formato_1;  }
  if ($lap1_pro_todo_M6_redond >= $comparativo_formato_2) { $literal_lap1_pro_todo_M6_redond = $literal_formato_2;  }
  if ($lap1_pro_todo_M6_redond >= $comparativo_formato_3) { $literal_lap1_pro_todo_M6_redond = $literal_formato_3;  }
  if ($lap1_pro_todo_M6_redond >= $comparativo_formato_4) { $literal_lap1_pro_todo_M6_redond = $literal_formato_4;  }
  if ($lap1_pro_todo_M6_redond >= $comparativo_formato_5) { $literal_lap1_pro_todo_M6_redond = $literal_formato_5;  }
  if ($lap1_pro_todo_M6_redond >= $comparativo_formato_6) { $literal_lap1_pro_todo_M6_redond = $literal_formato_6;  }
  if ($lap1_pro_todo_M6_redond >= $comparativo_formato_7) { $literal_lap1_pro_todo_M6_redond = $literal_formato_7;  }
  if ($lap1_pro_todo_M6_redond >= $comparativo_formato_8) { $literal_lap1_pro_todo_M6_redond = $literal_formato_8;  }
  if ($lap1_pro_todo_M6_redond >= $comparativo_formato_9) { $literal_lap1_pro_todo_M6_redond = $literal_formato_9;  }
  if ($lap1_pro_todo_M6_redond >= $comparativo_formato_10) { $literal_lap1_pro_todo_M6_redond = $literal_formato_10;  }
  if ($lap1_pro_todo_M6_redond >= $comparativo_formato_11) { $literal_lap1_pro_todo_M6_redond = $literal_formato_11;  }
  if ($lap1_pro_todo_M6_redond >= $comparativo_formato_12) { $literal_lap1_pro_todo_M6_redond = $literal_formato_12;  } 
  echo $literal_lap1_pro_todo_M6_redond; } /* cierre literal */ ?>




                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;"></td>
                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
                



                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;"></td>
                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
                        


                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;">



                       </td>












                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
            

                    </td>


<!-- nuevo añadido 1 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" >
   </td>


<!-- nuevo añadido 2 -->
  <td style="width:30px; height:10px; "BGCOLOR="<?php echo $color0;?>" >
   </td>



                </tr>



 <tr style="font-size: 12px;"   >
                    <td style="width:144px;height:10px;font-size: 11px;"><?php echo $row_datos_controlmat['g_ggg'];?>
                        
                        <span style="color:red;"><b> <?php

               $g_ayuda = '';

                if ($row_datos_controlmat['g_suma'] !=1) {
                  $g_ayuda = '#';
               }

                echo $g_ayuda;?></b></span>


                    </td>

                    <td style="width:71px;height:10px; background-color: #E5F8DC;"><b><?php 

if ($row_datos_controlmat['g_convertir'] == 1 ) {  /* numerico */
       echo $total_seven_con_Au_redon_M7_L1xx;
} /* cierre numerico */
if ($row_datos_controlmat['g_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M7_L1xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M7_L1xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M7_L1xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M7_L1xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M7_L1xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M7_L1xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M7_L1xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M7_L1xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M7_L1xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M7_L1xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M7_L1xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M7_L1xx = $alfabetico_formato_12;  }
   echo $alfabetico_seven_con_Au_redon_M7_L1xx; } /* cierre alfabetico */

if ($row_datos_controlmat['g_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M7_L1xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M7_L1xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M7_L1xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M7_L1xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M7_L1xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M7_L1xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M7_L1xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M7_L1xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M7_L1xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M7_L1xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M7_L1xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M7_L1xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M7_L1xx = $literal_formato_12;  } 
  echo $literal_seven_con_Au_redon_M7_L1xx; } /* cierre literal */


                    ?></b></td>
                    <td style="width:71px;height:10px;">
                        
<?php 

if ($lap1_div_mat7 == '') {
    $lap1_pro_todo_M7_redond = '';
}

else {

    $lap1_pro_todo_M7 = $lap1_tot_mat7/$lap1_div_mat7;

  $lap1_pro_todo_M7_redondeado1 =number_format($lap1_pro_todo_M7, 1, '.', '');

    $lap1_pro_todo_M7_redond =number_format($lap1_pro_todo_M7_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_total_promedio_Lap_1 = $lap_suma_total_promedio_Lap_1 + $lap1_pro_todo_M7_redond;


if ($row_datos_controlmat['g_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_1 =  $lap_suma_total_promedio_Lap_1 - $lap1_pro_todo_M7_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia7_promedio_aula = $lap1_pro_todo_M7_redond;
    $lapso1_materia7_promedio_aula_divisor = $lapso1_materia7_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia7_aula_promedio =  $definitiva_materia7_aula_promedio + $lap1_pro_todo_M7_redond;
     $definitiva_materia7_aula_divisor = $definitiva_materia7_aula_divisor + 1;


}



if ($row_datos_controlmat['g_convertir'] == 1 ) {  /* numerico */
       echo $lap1_pro_todo_M7_redond;
} /* cierre numerico */
if ($row_datos_controlmat['g_convertir'] == 2 ) {  /* alfabetico */
   if ($lap1_pro_todo_M7_redond >= $comparativo_formato_1) { $alfabetico_lap1_pro_todo_M7_redond = $alfabetico_formato_1;  }
   if ($lap1_pro_todo_M7_redond >= $comparativo_formato_2) { $alfabetico_lap1_pro_todo_M7_redond = $alfabetico_formato_2;  }
   if ($lap1_pro_todo_M7_redond >= $comparativo_formato_3) { $alfabetico_lap1_pro_todo_M7_redond = $alfabetico_formato_3;  }
   if ($lap1_pro_todo_M7_redond >= $comparativo_formato_4) { $alfabetico_lap1_pro_todo_M7_redond = $alfabetico_formato_4;  }
   if ($lap1_pro_todo_M7_redond >= $comparativo_formato_5) { $alfabetico_lap1_pro_todo_M7_redond = $alfabetico_formato_5;  }
   if ($lap1_pro_todo_M7_redond >= $comparativo_formato_6) { $alfabetico_lap1_pro_todo_M7_redond = $alfabetico_formato_6;  }
   if ($lap1_pro_todo_M7_redond >= $comparativo_formato_7) { $alfabetico_lap1_pro_todo_M7_redond = $alfabetico_formato_7;  }
   if ($lap1_pro_todo_M7_redond >= $comparativo_formato_8) { $alfabetico_lap1_pro_todo_M7_redond = $alfabetico_formato_8;  }
   if ($lap1_pro_todo_M7_redond >= $comparativo_formato_9) { $alfabetico_lap1_pro_todo_M7_redond = $alfabetico_formato_9;  }
   if ($lap1_pro_todo_M7_redond >= $comparativo_formato_10) { $alfabetico_lap1_pro_todo_M7_redond = $alfabetico_formato_10;  }
   if ($lap1_pro_todo_M7_redond >= $comparativo_formato_11) { $alfabetico_lap1_pro_todo_M7_redond = $alfabetico_formato_11;  }
   if ($lap1_pro_todo_M7_redond >= $comparativo_formato_12) { $alfabetico_lap1_pro_todo_M7_redond = $alfabetico_formato_12;  }
   echo $alfabetico_lap1_pro_todo_M7_redond; } /* cierre alfabetico */

if ($row_datos_controlmat['g_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M7_redond >= $comparativo_formato_1) { $literal_lap1_pro_todo_M7_redond = $literal_formato_1;  }
  if ($lap1_pro_todo_M7_redond >= $comparativo_formato_2) { $literal_lap1_pro_todo_M7_redond = $literal_formato_2;  }
  if ($lap1_pro_todo_M7_redond >= $comparativo_formato_3) { $literal_lap1_pro_todo_M7_redond = $literal_formato_3;  }
  if ($lap1_pro_todo_M7_redond >= $comparativo_formato_4) { $literal_lap1_pro_todo_M7_redond = $literal_formato_4;  }
  if ($lap1_pro_todo_M7_redond >= $comparativo_formato_5) { $literal_lap1_pro_todo_M7_redond = $literal_formato_5;  }
  if ($lap1_pro_todo_M7_redond >= $comparativo_formato_6) { $literal_lap1_pro_todo_M7_redond = $literal_formato_6;  }
  if ($lap1_pro_todo_M7_redond >= $comparativo_formato_7) { $literal_lap1_pro_todo_M7_redond = $literal_formato_7;  }
  if ($lap1_pro_todo_M7_redond >= $comparativo_formato_8) { $literal_lap1_pro_todo_M7_redond = $literal_formato_8;  }
  if ($lap1_pro_todo_M7_redond >= $comparativo_formato_9) { $literal_lap1_pro_todo_M7_redond = $literal_formato_9;  }
  if ($lap1_pro_todo_M7_redond >= $comparativo_formato_10) { $literal_lap1_pro_todo_M7_redond = $literal_formato_10;  }
  if ($lap1_pro_todo_M7_redond >= $comparativo_formato_11) { $literal_lap1_pro_todo_M7_redond = $literal_formato_11;  }
  if ($lap1_pro_todo_M7_redond >= $comparativo_formato_12) { $literal_lap1_pro_todo_M7_redond = $literal_formato_12;  } 
  echo $literal_lap1_pro_todo_M7_redond; } /* cierre literal */ ?>




                    </td>


                    <td style="width:60px;height:10px; background-color: #FDFAE1;"></td>
                    <td style="width:60px;height:10px;">
                        




                    </td>


                    <td style="width:60px;height:10px; background-color: #FDF0E1;"></td>
                    <td style="width:60px;height:10px;">
                        



                    </td>


                    <td style="width:60px;height:10px; background-color: #E8F3FB;">





                       </td>












                    <td style="width:60px;height:10px;">
               



                    </td>



<!-- nuevo añadido 1 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" > 
   </td>


<!-- nuevo añadido 2 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" >
   </td>


                </tr>



 <tr style="font-size: 12px;"   >
                    <td style="width:144px;height:10px; background-color: #F4F3F3;font-size: 11px;"><?php echo $row_datos_controlmat['h_hhh'];?>
                        
                        <span style="color:red;"><b> <?php

               $h_ayuda = '';

                if ($row_datos_controlmat['h_suma'] !=1) {
                  $h_ayuda = '#';
               }

                echo $h_ayuda;?></b></span>


                    </td>

                    <td style="width:71px;height:10px; background-color: #F4F3F3;"><b><?php 

if ($row_datos_controlmat['h_convertir'] == 1 ) {  /* numerico */
       echo $total_seven_con_Au_redon_M8_L1xx;
} /* cierre numerico */
if ($row_datos_controlmat['h_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M8_L1xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M8_L1xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M8_L1xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M8_L1xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M8_L1xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M8_L1xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M8_L1xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M8_L1xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M8_L1xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M8_L1xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M8_L1xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M8_L1xx = $alfabetico_formato_12;  }
   echo $alfabetico_seven_con_Au_redon_M8_L1xx; } /* cierre alfabetico */

if ($row_datos_controlmat['h_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M8_L1xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M8_L1xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M8_L1xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M8_L1xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M8_L1xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M8_L1xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M8_L1xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M8_L1xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M8_L1xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M8_L1xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M8_L1xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M8_L1xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M8_L1xx = $literal_formato_12;  } 
  echo $literal_seven_con_Au_redon_M8_L1xx; } /* cierre literal */


                    ?></b></td>
                    <td style="width:71px;height:10px; background-color: #F4F3F3;">
                        
<?php 

if ($lap1_div_mat8 == '') {
    $lap1_pro_todo_M8_redond = '';
}

else {

    $lap1_pro_todo_M8 = $lap1_tot_mat8/$lap1_div_mat8;

  $lap1_pro_todo_M8_redondeado1 =number_format($lap1_pro_todo_M8, 1, '.', '');

    $lap1_pro_todo_M8_redond =number_format($lap1_pro_todo_M8_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_total_promedio_Lap_1 = $lap_suma_total_promedio_Lap_1 + $lap1_pro_todo_M8_redond;


if ($row_datos_controlmat['h_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_1 =  $lap_suma_total_promedio_Lap_1 - $lap1_pro_todo_M8_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia8_promedio_aula = $lap1_pro_todo_M8_redond;
    $lapso1_materia8_promedio_aula_divisor = $lapso1_materia8_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia8_aula_promedio =  $definitiva_materia8_aula_promedio + $lap1_pro_todo_M8_redond;
     $definitiva_materia8_aula_divisor = $definitiva_materia8_aula_divisor + 1;


}



if ($row_datos_controlmat['h_convertir'] == 1 ) {  /* numerico */
       echo $lap1_pro_todo_M8_redond;
} /* cierre numerico */
if ($row_datos_controlmat['h_convertir'] == 2 ) {  /* alfabetico */
   if ($lap1_pro_todo_M8_redond >= $comparativo_formato_1) { $alfabetico_lap1_pro_todo_M8_redond = $alfabetico_formato_1;  }
   if ($lap1_pro_todo_M8_redond >= $comparativo_formato_2) { $alfabetico_lap1_pro_todo_M8_redond = $alfabetico_formato_2;  }
   if ($lap1_pro_todo_M8_redond >= $comparativo_formato_3) { $alfabetico_lap1_pro_todo_M8_redond = $alfabetico_formato_3;  }
   if ($lap1_pro_todo_M8_redond >= $comparativo_formato_4) { $alfabetico_lap1_pro_todo_M8_redond = $alfabetico_formato_4;  }
   if ($lap1_pro_todo_M8_redond >= $comparativo_formato_5) { $alfabetico_lap1_pro_todo_M8_redond = $alfabetico_formato_5;  }
   if ($lap1_pro_todo_M8_redond >= $comparativo_formato_6) { $alfabetico_lap1_pro_todo_M8_redond = $alfabetico_formato_6;  }
   if ($lap1_pro_todo_M8_redond >= $comparativo_formato_7) { $alfabetico_lap1_pro_todo_M8_redond = $alfabetico_formato_7;  }
   if ($lap1_pro_todo_M8_redond >= $comparativo_formato_8) { $alfabetico_lap1_pro_todo_M8_redond = $alfabetico_formato_8;  }
   if ($lap1_pro_todo_M8_redond >= $comparativo_formato_9) { $alfabetico_lap1_pro_todo_M8_redond = $alfabetico_formato_9;  }
   if ($lap1_pro_todo_M8_redond >= $comparativo_formato_10) { $alfabetico_lap1_pro_todo_M8_redond = $alfabetico_formato_10;  }
   if ($lap1_pro_todo_M8_redond >= $comparativo_formato_11) { $alfabetico_lap1_pro_todo_M8_redond = $alfabetico_formato_11;  }
   if ($lap1_pro_todo_M8_redond >= $comparativo_formato_12) { $alfabetico_lap1_pro_todo_M8_redond = $alfabetico_formato_12;  }
   echo $alfabetico_lap1_pro_todo_M8_redond; } /* cierre alfabetico */

if ($row_datos_controlmat['h_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M8_redond >= $comparativo_formato_1) { $literal_lap1_pro_todo_M8_redond = $literal_formato_1;  }
  if ($lap1_pro_todo_M8_redond >= $comparativo_formato_2) { $literal_lap1_pro_todo_M8_redond = $literal_formato_2;  }
  if ($lap1_pro_todo_M8_redond >= $comparativo_formato_3) { $literal_lap1_pro_todo_M8_redond = $literal_formato_3;  }
  if ($lap1_pro_todo_M8_redond >= $comparativo_formato_4) { $literal_lap1_pro_todo_M8_redond = $literal_formato_4;  }
  if ($lap1_pro_todo_M8_redond >= $comparativo_formato_5) { $literal_lap1_pro_todo_M8_redond = $literal_formato_5;  }
  if ($lap1_pro_todo_M8_redond >= $comparativo_formato_6) { $literal_lap1_pro_todo_M8_redond = $literal_formato_6;  }
  if ($lap1_pro_todo_M8_redond >= $comparativo_formato_7) { $literal_lap1_pro_todo_M8_redond = $literal_formato_7;  }
  if ($lap1_pro_todo_M8_redond >= $comparativo_formato_8) { $literal_lap1_pro_todo_M8_redond = $literal_formato_8;  }
  if ($lap1_pro_todo_M8_redond >= $comparativo_formato_9) { $literal_lap1_pro_todo_M8_redond = $literal_formato_9;  }
  if ($lap1_pro_todo_M8_redond >= $comparativo_formato_10) { $literal_lap1_pro_todo_M8_redond = $literal_formato_10;  }
  if ($lap1_pro_todo_M8_redond >= $comparativo_formato_11) { $literal_lap1_pro_todo_M8_redond = $literal_formato_11;  }
  if ($lap1_pro_todo_M8_redond >= $comparativo_formato_12) { $literal_lap1_pro_todo_M8_redond = $literal_formato_12;  } 
  echo $literal_lap1_pro_todo_M8_redond; } /* cierre literal */ ?>




                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;"></td>
                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
        


                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;"></td>
                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
                        



                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;">


                       </td>












                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
         

                    </td>




<!-- nuevo añadido 1 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" >  
   </td>


<!-- nuevo añadido 2 -->
  <td style="width:30px; height:10px; "  BGCOLOR="<?php echo $color0;?>" > 
   </td>




                </tr>



 <tr style="font-size: 12px;"   >
                    <td style="width:144px;height:10px;font-size: 11px;"><?php echo $row_datos_controlmat['i_iii'];?>
                        
                        <span style="color:red;"><b> <?php

               $i_ayuda = '';

                if ($row_datos_controlmat['i_suma'] !=1) {
                  $i_ayuda = '#';
               }

                echo $i_ayuda;?></b></span>


                    </td>

                    <td style="width:71px;height:10px; background-color: #E5F8DC;"><b><?php 

if ($row_datos_controlmat['i_convertir'] == 1 ) {  /* numerico */
       echo $total_seven_con_Au_redon_M9_L1xx;
} /* cierre numerico */
if ($row_datos_controlmat['i_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M9_L1xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M9_L1xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M9_L1xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M9_L1xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M9_L1xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M9_L1xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M9_L1xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M9_L1xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M9_L1xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M9_L1xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M9_L1xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M9_L1xx = $alfabetico_formato_12;  }
   echo $alfabetico_seven_con_Au_redon_M9_L1xx; } /* cierre alfabetico */

if ($row_datos_controlmat['i_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M9_L1xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M9_L1xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M9_L1xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M9_L1xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M9_L1xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M9_L1xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M9_L1xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M9_L1xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M9_L1xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M9_L1xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M9_L1xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M9_L1xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M9_L1xx = $literal_formato_12;  } 
  echo $literal_seven_con_Au_redon_M9_L1xx; } /* cierre literal */


                    ?></b></td>
                    <td style="width:71px;height:10px;">
                        
<?php 

if ($lap1_div_mat9 == '') {
    $lap1_pro_todo_M9_redond = '';
}

else {

    $lap1_pro_todo_M9 = $lap1_tot_mat9/$lap1_div_mat9;

  $lap1_pro_todo_M9_redondeado1 =number_format($lap1_pro_todo_M9, 1, '.', '');

    $lap1_pro_todo_M9_redond =number_format($lap1_pro_todo_M9_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_total_promedio_Lap_1 = $lap_suma_total_promedio_Lap_1 + $lap1_pro_todo_M9_redond;


if ($row_datos_controlmat['i_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_1 =  $lap_suma_total_promedio_Lap_1 - $lap1_pro_todo_M9_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia9_promedio_aula = $lap1_pro_todo_M9_redond;
    $lapso1_materia9_promedio_aula_divisor = $lapso1_materia9_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia9_aula_promedio =  $definitiva_materia9_aula_promedio + $lap1_pro_todo_M9_redond;
     $definitiva_materia9_aula_divisor = $definitiva_materia9_aula_divisor + 1;


}



if ($row_datos_controlmat['i_convertir'] == 1 ) {  /* numerico */
       echo $lap1_pro_todo_M9_redond;
} /* cierre numerico */
if ($row_datos_controlmat['i_convertir'] == 2 ) {  /* alfabetico */
   if ($lap1_pro_todo_M9_redond >= $comparativo_formato_1) { $alfabetico_lap1_pro_todo_M9_redond = $alfabetico_formato_1;  }
   if ($lap1_pro_todo_M9_redond >= $comparativo_formato_2) { $alfabetico_lap1_pro_todo_M9_redond = $alfabetico_formato_2;  }
   if ($lap1_pro_todo_M9_redond >= $comparativo_formato_3) { $alfabetico_lap1_pro_todo_M9_redond = $alfabetico_formato_3;  }
   if ($lap1_pro_todo_M9_redond >= $comparativo_formato_4) { $alfabetico_lap1_pro_todo_M9_redond = $alfabetico_formato_4;  }
   if ($lap1_pro_todo_M9_redond >= $comparativo_formato_5) { $alfabetico_lap1_pro_todo_M9_redond = $alfabetico_formato_5;  }
   if ($lap1_pro_todo_M9_redond >= $comparativo_formato_6) { $alfabetico_lap1_pro_todo_M9_redond = $alfabetico_formato_6;  }
   if ($lap1_pro_todo_M9_redond >= $comparativo_formato_7) { $alfabetico_lap1_pro_todo_M9_redond = $alfabetico_formato_7;  }
   if ($lap1_pro_todo_M9_redond >= $comparativo_formato_8) { $alfabetico_lap1_pro_todo_M9_redond = $alfabetico_formato_8;  }
   if ($lap1_pro_todo_M9_redond >= $comparativo_formato_9) { $alfabetico_lap1_pro_todo_M9_redond = $alfabetico_formato_9;  }
   if ($lap1_pro_todo_M9_redond >= $comparativo_formato_10) { $alfabetico_lap1_pro_todo_M9_redond = $alfabetico_formato_10;  }
   if ($lap1_pro_todo_M9_redond >= $comparativo_formato_11) { $alfabetico_lap1_pro_todo_M9_redond = $alfabetico_formato_11;  }
   if ($lap1_pro_todo_M9_redond >= $comparativo_formato_12) { $alfabetico_lap1_pro_todo_M9_redond = $alfabetico_formato_12;  }
   echo $alfabetico_lap1_pro_todo_M9_redond; } /* cierre alfabetico */

if ($row_datos_controlmat['i_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M9_redond >= $comparativo_formato_1) { $literal_lap1_pro_todo_M9_redond = $literal_formato_1;  }
  if ($lap1_pro_todo_M9_redond >= $comparativo_formato_2) { $literal_lap1_pro_todo_M9_redond = $literal_formato_2;  }
  if ($lap1_pro_todo_M9_redond >= $comparativo_formato_3) { $literal_lap1_pro_todo_M9_redond = $literal_formato_3;  }
  if ($lap1_pro_todo_M9_redond >= $comparativo_formato_4) { $literal_lap1_pro_todo_M9_redond = $literal_formato_4;  }
  if ($lap1_pro_todo_M9_redond >= $comparativo_formato_5) { $literal_lap1_pro_todo_M9_redond = $literal_formato_5;  }
  if ($lap1_pro_todo_M9_redond >= $comparativo_formato_6) { $literal_lap1_pro_todo_M9_redond = $literal_formato_6;  }
  if ($lap1_pro_todo_M9_redond >= $comparativo_formato_7) { $literal_lap1_pro_todo_M9_redond = $literal_formato_7;  }
  if ($lap1_pro_todo_M9_redond >= $comparativo_formato_8) { $literal_lap1_pro_todo_M9_redond = $literal_formato_8;  }
  if ($lap1_pro_todo_M9_redond >= $comparativo_formato_9) { $literal_lap1_pro_todo_M9_redond = $literal_formato_9;  }
  if ($lap1_pro_todo_M9_redond >= $comparativo_formato_10) { $literal_lap1_pro_todo_M9_redond = $literal_formato_10;  }
  if ($lap1_pro_todo_M9_redond >= $comparativo_formato_11) { $literal_lap1_pro_todo_M9_redond = $literal_formato_11;  }
  if ($lap1_pro_todo_M9_redond >= $comparativo_formato_12) { $literal_lap1_pro_todo_M9_redond = $literal_formato_12;  } 
  echo $literal_lap1_pro_todo_M9_redond; } /* cierre literal */ ?>




                    </td>


                    <td style="width:60px;height:10px; background-color: #FDFAE1;"></td>
                    <td style="width:60px;height:10px;">
               


                    </td>


                    <td style="width:60px;height:10px; background-color: #FDF0E1;"></td>
                    <td style="width:60px;height:10px;">
                        



                    </td>


                    <td style="width:60px;height:10px; background-color: #E8F3FB;">



                       </td>












                    <td style="width:60px;height:10px;">




                    </td>



<!-- nuevo añadido 1 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" >
   </td>


<!-- nuevo añadido 2 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" > 
   </td>



                </tr>




 <tr style="font-size: 12px;"   >
                    <td style="width:144px;height:10px; background-color: #F4F3F3;font-size: 11px;"><?php echo $row_datos_controlmat['j_jjj'];?>
                        
                        <span style="color:red;"><b> <?php

               $j_ayuda = '';

                if ($row_datos_controlmat['j_suma'] !=1) {
                  $j_ayuda = '#';
               }

                echo $j_ayuda;?></b></span>


                    </td>

                    <td style="width:71px;height:10px; background-color: #F4F3F3;"><b><?php 

if ($row_datos_controlmat['j_convertir'] == 1 ) {  /* numerico */
       echo $total_seven_con_Au_redon_M10_L1xx;
} /* cierre numerico */
if ($row_datos_controlmat['j_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M10_L1xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M10_L1xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M10_L1xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M10_L1xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M10_L1xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M10_L1xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M10_L1xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M10_L1xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M10_L1xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M10_L1xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M10_L1xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M10_L1xx = $alfabetico_formato_12;  }
   echo $alfabetico_seven_con_Au_redon_M10_L1xx; } /* cierre alfabetico */

if ($row_datos_controlmat['j_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M10_L1xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M10_L1xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M10_L1xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M10_L1xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M10_L1xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M10_L1xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M10_L1xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M10_L1xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M10_L1xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M10_L1xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M10_L1xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M10_L1xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M10_L1xx = $literal_formato_12;  } 
  echo $literal_seven_con_Au_redon_M10_L1xx; } /* cierre literal */


                    ?></b></td>
                    <td style="width:71px;height:10px; background-color: #F4F3F3;">
                        
<?php 

if ($lap1_div_mat10 == '') {
    $lap1_pro_todo_M10_redond = '';
}

else {

    $lap1_pro_todo_M10 = $lap1_tot_mat10/$lap1_div_mat10;

  $lap1_pro_todo_M10_redondeado1 =number_format($lap1_pro_todo_M10, 1, '.', '');

    $lap1_pro_todo_M10_redond =number_format($lap1_pro_todo_M10_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_total_promedio_Lap_1 = $lap_suma_total_promedio_Lap_1 + $lap1_pro_todo_M10_redond;


if ($row_datos_controlmat['j_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_1 =  $lap_suma_total_promedio_Lap_1 - $lap1_pro_todo_M10_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia10_promedio_aula = $lap1_pro_todo_M10_redond;
    $lapso1_materia10_promedio_aula_divisor = $lapso1_materia10_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia10_aula_promedio =  $definitiva_materia10_aula_promedio + $lap1_pro_todo_M10_redond;
     $definitiva_materia10_aula_divisor = $definitiva_materia10_aula_divisor + 1;


}



if ($row_datos_controlmat['j_convertir'] == 1 ) {  /* numerico */
       echo $lap1_pro_todo_M10_redond;
} /* cierre numerico */
if ($row_datos_controlmat['j_convertir'] == 2 ) {  /* alfabetico */
   if ($lap1_pro_todo_M10_redond >= $comparativo_formato_1) { $alfabetico_lap1_pro_todo_M10_redond = $alfabetico_formato_1;  }
   if ($lap1_pro_todo_M10_redond >= $comparativo_formato_2) { $alfabetico_lap1_pro_todo_M10_redond = $alfabetico_formato_2;  }
   if ($lap1_pro_todo_M10_redond >= $comparativo_formato_3) { $alfabetico_lap1_pro_todo_M10_redond = $alfabetico_formato_3;  }
   if ($lap1_pro_todo_M10_redond >= $comparativo_formato_4) { $alfabetico_lap1_pro_todo_M10_redond = $alfabetico_formato_4;  }
   if ($lap1_pro_todo_M10_redond >= $comparativo_formato_5) { $alfabetico_lap1_pro_todo_M10_redond = $alfabetico_formato_5;  }
   if ($lap1_pro_todo_M10_redond >= $comparativo_formato_6) { $alfabetico_lap1_pro_todo_M10_redond = $alfabetico_formato_6;  }
   if ($lap1_pro_todo_M10_redond >= $comparativo_formato_7) { $alfabetico_lap1_pro_todo_M10_redond = $alfabetico_formato_7;  }
   if ($lap1_pro_todo_M10_redond >= $comparativo_formato_8) { $alfabetico_lap1_pro_todo_M10_redond = $alfabetico_formato_8;  }
   if ($lap1_pro_todo_M10_redond >= $comparativo_formato_9) { $alfabetico_lap1_pro_todo_M10_redond = $alfabetico_formato_9;  }
   if ($lap1_pro_todo_M10_redond >= $comparativo_formato_10) { $alfabetico_lap1_pro_todo_M10_redond = $alfabetico_formato_10;  }
   if ($lap1_pro_todo_M10_redond >= $comparativo_formato_11) { $alfabetico_lap1_pro_todo_M10_redond = $alfabetico_formato_11;  }
   if ($lap1_pro_todo_M10_redond >= $comparativo_formato_12) { $alfabetico_lap1_pro_todo_M10_redond = $alfabetico_formato_12;  }
   echo $alfabetico_lap1_pro_todo_M10_redond; } /* cierre alfabetico */

if ($row_datos_controlmat['j_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M10_redond >= $comparativo_formato_1) { $literal_lap1_pro_todo_M10_redond = $literal_formato_1;  }
  if ($lap1_pro_todo_M10_redond >= $comparativo_formato_2) { $literal_lap1_pro_todo_M10_redond = $literal_formato_2;  }
  if ($lap1_pro_todo_M10_redond >= $comparativo_formato_3) { $literal_lap1_pro_todo_M10_redond = $literal_formato_3;  }
  if ($lap1_pro_todo_M10_redond >= $comparativo_formato_4) { $literal_lap1_pro_todo_M10_redond = $literal_formato_4;  }
  if ($lap1_pro_todo_M10_redond >= $comparativo_formato_5) { $literal_lap1_pro_todo_M10_redond = $literal_formato_5;  }
  if ($lap1_pro_todo_M10_redond >= $comparativo_formato_6) { $literal_lap1_pro_todo_M10_redond = $literal_formato_6;  }
  if ($lap1_pro_todo_M10_redond >= $comparativo_formato_7) { $literal_lap1_pro_todo_M10_redond = $literal_formato_7;  }
  if ($lap1_pro_todo_M10_redond >= $comparativo_formato_8) { $literal_lap1_pro_todo_M10_redond = $literal_formato_8;  }
  if ($lap1_pro_todo_M10_redond >= $comparativo_formato_9) { $literal_lap1_pro_todo_M10_redond = $literal_formato_9;  }
  if ($lap1_pro_todo_M10_redond >= $comparativo_formato_10) { $literal_lap1_pro_todo_M10_redond = $literal_formato_10;  }
  if ($lap1_pro_todo_M10_redond >= $comparativo_formato_11) { $literal_lap1_pro_todo_M10_redond = $literal_formato_11;  }
  if ($lap1_pro_todo_M10_redond >= $comparativo_formato_12) { $literal_lap1_pro_todo_M10_redond = $literal_formato_12;  } 
  echo $literal_lap1_pro_todo_M10_redond; } /* cierre literal */ ?>




                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;"></td>
                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
     
                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;"></td>
                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
                        


                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;">



                       </td>












                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
                        


                    </td>


<!-- nuevo añadido 1 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" > 
   </td>


<!-- nuevo añadido 2 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" > 
   </td>


                </tr>



 <tr style="font-size: 12px;"   >
                    <td style="width:144px;height:10px;font-size: 11px;"><?php echo $row_datos_controlmat['k_kkk'];?>
                        
                        <span style="color:red;"><b> <?php

               $k_ayuda = '';

                if ($row_datos_controlmat['k_suma'] !=1) {
                  $k_ayuda = '#';
               }

                echo $k_ayuda;?></b></span>


                    </td>

                    <td style="width:71px;height:10px; background-color: #E5F8DC;"><b><?php 

if ($row_datos_controlmat['k_convertir'] == 1 ) {  /* numerico */
       echo $total_seven_con_Au_redon_M11_L1xx;
} /* cierre numerico */
if ($row_datos_controlmat['k_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M11_L1xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M11_L1xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M11_L1xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M11_L1xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M11_L1xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M11_L1xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M11_L1xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M11_L1xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M11_L1xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M11_L1xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M11_L1xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M11_L1xx = $alfabetico_formato_12;  }
   echo $alfabetico_seven_con_Au_redon_M11_L1xx; } /* cierre alfabetico */

if ($row_datos_controlmat['k_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M11_L1xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M11_L1xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M11_L1xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M11_L1xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M11_L1xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M11_L1xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M11_L1xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M11_L1xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M11_L1xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M11_L1xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M11_L1xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M11_L1xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M11_L1xx = $literal_formato_12;  } 
  echo $literal_seven_con_Au_redon_M11_L1xx; } /* cierre literal */


                    ?></b></td>
                    <td style="width:71px;height:10px;">
                        
<?php 

if ($lap1_div_mat11 == '') {
    $lap1_pro_todo_M11_redond = '';
}

else {

    $lap1_pro_todo_M11 = $lap1_tot_mat11/$lap1_div_mat11;

  $lap1_pro_todo_M11_redondeado1 =number_format($lap1_pro_todo_M11, 1, '.', '');

    $lap1_pro_todo_M11_redond =number_format($lap1_pro_todo_M11_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_total_promedio_Lap_1 = $lap_suma_total_promedio_Lap_1 + $lap1_pro_todo_M11_redond;


if ($row_datos_controlmat['k_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_1 =  $lap_suma_total_promedio_Lap_1 - $lap1_pro_todo_M11_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia11_promedio_aula = $lap1_pro_todo_M11_redond;
    $lapso1_materia11_promedio_aula_divisor = $lapso1_materia11_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia11_aula_promedio =  $definitiva_materia11_aula_promedio + $lap1_pro_todo_M11_redond;
     $definitiva_materia11_aula_divisor = $definitiva_materia11_aula_divisor + 1;


}



if ($row_datos_controlmat['k_convertir'] == 1 ) {  /* numerico */
       echo $lap1_pro_todo_M11_redond;
} /* cierre numerico */
if ($row_datos_controlmat['k_convertir'] == 2 ) {  /* alfabetico */
   if ($lap1_pro_todo_M11_redond >= $comparativo_formato_1) { $alfabetico_lap1_pro_todo_M11_redond = $alfabetico_formato_1;  }
   if ($lap1_pro_todo_M11_redond >= $comparativo_formato_2) { $alfabetico_lap1_pro_todo_M11_redond = $alfabetico_formato_2;  }
   if ($lap1_pro_todo_M11_redond >= $comparativo_formato_3) { $alfabetico_lap1_pro_todo_M11_redond = $alfabetico_formato_3;  }
   if ($lap1_pro_todo_M11_redond >= $comparativo_formato_4) { $alfabetico_lap1_pro_todo_M11_redond = $alfabetico_formato_4;  }
   if ($lap1_pro_todo_M11_redond >= $comparativo_formato_5) { $alfabetico_lap1_pro_todo_M11_redond = $alfabetico_formato_5;  }
   if ($lap1_pro_todo_M11_redond >= $comparativo_formato_6) { $alfabetico_lap1_pro_todo_M11_redond = $alfabetico_formato_6;  }
   if ($lap1_pro_todo_M11_redond >= $comparativo_formato_7) { $alfabetico_lap1_pro_todo_M11_redond = $alfabetico_formato_7;  }
   if ($lap1_pro_todo_M11_redond >= $comparativo_formato_8) { $alfabetico_lap1_pro_todo_M11_redond = $alfabetico_formato_8;  }
   if ($lap1_pro_todo_M11_redond >= $comparativo_formato_9) { $alfabetico_lap1_pro_todo_M11_redond = $alfabetico_formato_9;  }
   if ($lap1_pro_todo_M11_redond >= $comparativo_formato_10) { $alfabetico_lap1_pro_todo_M11_redond = $alfabetico_formato_10;  }
   if ($lap1_pro_todo_M11_redond >= $comparativo_formato_11) { $alfabetico_lap1_pro_todo_M11_redond = $alfabetico_formato_11;  }
   if ($lap1_pro_todo_M11_redond >= $comparativo_formato_12) { $alfabetico_lap1_pro_todo_M11_redond = $alfabetico_formato_12;  }
   echo $alfabetico_lap1_pro_todo_M11_redond; } /* cierre alfabetico */

if ($row_datos_controlmat['k_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M11_redond >= $comparativo_formato_1) { $literal_lap1_pro_todo_M11_redond = $literal_formato_1;  }
  if ($lap1_pro_todo_M11_redond >= $comparativo_formato_2) { $literal_lap1_pro_todo_M11_redond = $literal_formato_2;  }
  if ($lap1_pro_todo_M11_redond >= $comparativo_formato_3) { $literal_lap1_pro_todo_M11_redond = $literal_formato_3;  }
  if ($lap1_pro_todo_M11_redond >= $comparativo_formato_4) { $literal_lap1_pro_todo_M11_redond = $literal_formato_4;  }
  if ($lap1_pro_todo_M11_redond >= $comparativo_formato_5) { $literal_lap1_pro_todo_M11_redond = $literal_formato_5;  }
  if ($lap1_pro_todo_M11_redond >= $comparativo_formato_6) { $literal_lap1_pro_todo_M11_redond = $literal_formato_6;  }
  if ($lap1_pro_todo_M11_redond >= $comparativo_formato_7) { $literal_lap1_pro_todo_M11_redond = $literal_formato_7;  }
  if ($lap1_pro_todo_M11_redond >= $comparativo_formato_8) { $literal_lap1_pro_todo_M11_redond = $literal_formato_8;  }
  if ($lap1_pro_todo_M11_redond >= $comparativo_formato_9) { $literal_lap1_pro_todo_M11_redond = $literal_formato_9;  }
  if ($lap1_pro_todo_M11_redond >= $comparativo_formato_10) { $literal_lap1_pro_todo_M11_redond = $literal_formato_10;  }
  if ($lap1_pro_todo_M11_redond >= $comparativo_formato_11) { $literal_lap1_pro_todo_M11_redond = $literal_formato_11;  }
  if ($lap1_pro_todo_M11_redond >= $comparativo_formato_12) { $literal_lap1_pro_todo_M11_redond = $literal_formato_12;  } 
  echo $literal_lap1_pro_todo_M11_redond; } /* cierre literal */ ?>




                    </td>


                    <td style="width:60px;height:10px; background-color: #FDFAE1;"></td>
                    <td style="width:60px;height:10px;">
           

                    </td>


                    <td style="width:60px;height:10px; background-color: #FDF0E1;"></td>
                    <td style="width:60px;height:10px;">
                        




                    </td>


                    <td style="width:60px;height:10px; background-color: #E8F3FB;">




                       </td>












                    <td style="width:60px;height:10px;">


                    </td>



<!-- nuevo añadido 1 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" > 
   </td>


<!-- nuevo añadido 2 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" > 
   </td>



                </tr>




 <tr style="font-size: 12px;"   >
                    <td style="width:144px;height:10px; background-color: #F4F3F3;font-size: 11px;"><?php echo $row_datos_controlmat['l_lll'];?>
                        
                        <span style="color:red;"><b> <?php

               $l_ayuda = '';

                if ($row_datos_controlmat['l_suma'] !=1) {
                  $l_ayuda = '#';
               }

                echo $l_ayuda;?></b></span>


                    </td>

                    <td style="width:71px;height:10px; background-color: #F4F3F3;"><b><?php 

if ($row_datos_controlmat['l_convertir'] == 1 ) {  /* numerico */
       echo $total_seven_con_Au_redon_M12_L1xx;
} /* cierre numerico */
if ($row_datos_controlmat['l_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M12_L1xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M12_L1xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M12_L1xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M12_L1xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M12_L1xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M12_L1xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M12_L1xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M12_L1xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M12_L1xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M12_L1xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M12_L1xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M12_L1xx = $alfabetico_formato_12;  }
   echo $alfabetico_seven_con_Au_redon_M12_L1xx; } /* cierre alfabetico */

if ($row_datos_controlmat['l_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M12_L1xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M12_L1xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M12_L1xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M12_L1xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M12_L1xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M12_L1xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M12_L1xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M12_L1xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M12_L1xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M12_L1xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M12_L1xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M12_L1xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M12_L1xx = $literal_formato_12;  } 
  echo $literal_seven_con_Au_redon_M12_L1xx; } /* cierre literal */


                    ?></b></td>
                    <td style="width:71px;height:10px; background-color: #F4F3F3;">
                        
<?php 

if ($lap1_div_mat12 == '') {
    $lap1_pro_todo_M12_redond = '';
}

else {

    $lap1_pro_todo_M12 = $lap1_tot_mat12/$lap1_div_mat12;

  $lap1_pro_todo_M12_redondeado1 =number_format($lap1_pro_todo_M12, 1, '.', '');

    $lap1_pro_todo_M12_redond =number_format($lap1_pro_todo_M12_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_total_promedio_Lap_1 = $lap_suma_total_promedio_Lap_1 + $lap1_pro_todo_M12_redond;


if ($row_datos_controlmat['l_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_1 =  $lap_suma_total_promedio_Lap_1 - $lap1_pro_todo_M12_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia12_promedio_aula = $lap1_pro_todo_M12_redond;
    $lapso1_materia12_promedio_aula_divisor = $lapso1_materia12_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia12_aula_promedio =  $definitiva_materia12_aula_promedio + $lap1_pro_todo_M12_redond;
     $definitiva_materia12_aula_divisor = $definitiva_materia12_aula_divisor + 1;


}



if ($row_datos_controlmat['l_convertir'] == 1 ) {  /* numerico */
       echo $lap1_pro_todo_M12_redond;
} /* cierre numerico */
if ($row_datos_controlmat['l_convertir'] == 2 ) {  /* alfabetico */
   if ($lap1_pro_todo_M12_redond >= $comparativo_formato_1) { $alfabetico_lap1_pro_todo_M12_redond = $alfabetico_formato_1;  }
   if ($lap1_pro_todo_M12_redond >= $comparativo_formato_2) { $alfabetico_lap1_pro_todo_M12_redond = $alfabetico_formato_2;  }
   if ($lap1_pro_todo_M12_redond >= $comparativo_formato_3) { $alfabetico_lap1_pro_todo_M12_redond = $alfabetico_formato_3;  }
   if ($lap1_pro_todo_M12_redond >= $comparativo_formato_4) { $alfabetico_lap1_pro_todo_M12_redond = $alfabetico_formato_4;  }
   if ($lap1_pro_todo_M12_redond >= $comparativo_formato_5) { $alfabetico_lap1_pro_todo_M12_redond = $alfabetico_formato_5;  }
   if ($lap1_pro_todo_M12_redond >= $comparativo_formato_6) { $alfabetico_lap1_pro_todo_M12_redond = $alfabetico_formato_6;  }
   if ($lap1_pro_todo_M12_redond >= $comparativo_formato_7) { $alfabetico_lap1_pro_todo_M12_redond = $alfabetico_formato_7;  }
   if ($lap1_pro_todo_M12_redond >= $comparativo_formato_8) { $alfabetico_lap1_pro_todo_M12_redond = $alfabetico_formato_8;  }
   if ($lap1_pro_todo_M12_redond >= $comparativo_formato_9) { $alfabetico_lap1_pro_todo_M12_redond = $alfabetico_formato_9;  }
   if ($lap1_pro_todo_M12_redond >= $comparativo_formato_10) { $alfabetico_lap1_pro_todo_M12_redond = $alfabetico_formato_10;  }
   if ($lap1_pro_todo_M12_redond >= $comparativo_formato_11) { $alfabetico_lap1_pro_todo_M12_redond = $alfabetico_formato_11;  }
   if ($lap1_pro_todo_M12_redond >= $comparativo_formato_12) { $alfabetico_lap1_pro_todo_M12_redond = $alfabetico_formato_12;  }
   echo $alfabetico_lap1_pro_todo_M12_redond; } /* cierre alfabetico */

if ($row_datos_controlmat['l_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M12_redond >= $comparativo_formato_1) { $literal_lap1_pro_todo_M12_redond = $literal_formato_1;  }
  if ($lap1_pro_todo_M12_redond >= $comparativo_formato_2) { $literal_lap1_pro_todo_M12_redond = $literal_formato_2;  }
  if ($lap1_pro_todo_M12_redond >= $comparativo_formato_3) { $literal_lap1_pro_todo_M12_redond = $literal_formato_3;  }
  if ($lap1_pro_todo_M12_redond >= $comparativo_formato_4) { $literal_lap1_pro_todo_M12_redond = $literal_formato_4;  }
  if ($lap1_pro_todo_M12_redond >= $comparativo_formato_5) { $literal_lap1_pro_todo_M12_redond = $literal_formato_5;  }
  if ($lap1_pro_todo_M12_redond >= $comparativo_formato_6) { $literal_lap1_pro_todo_M12_redond = $literal_formato_6;  }
  if ($lap1_pro_todo_M12_redond >= $comparativo_formato_7) { $literal_lap1_pro_todo_M12_redond = $literal_formato_7;  }
  if ($lap1_pro_todo_M12_redond >= $comparativo_formato_8) { $literal_lap1_pro_todo_M12_redond = $literal_formato_8;  }
  if ($lap1_pro_todo_M12_redond >= $comparativo_formato_9) { $literal_lap1_pro_todo_M12_redond = $literal_formato_9;  }
  if ($lap1_pro_todo_M12_redond >= $comparativo_formato_10) { $literal_lap1_pro_todo_M12_redond = $literal_formato_10;  }
  if ($lap1_pro_todo_M12_redond >= $comparativo_formato_11) { $literal_lap1_pro_todo_M12_redond = $literal_formato_11;  }
  if ($lap1_pro_todo_M12_redond >= $comparativo_formato_12) { $literal_lap1_pro_todo_M12_redond = $literal_formato_12;  } 
  echo $literal_lap1_pro_todo_M12_redond; } /* cierre literal */ ?>




                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;"></td>
                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
           
                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;"></td>
                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
                        


                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;">


                       </td>












                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
                




                    </td>


<!-- nuevo añadido 1 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" > 
   </td>


<!-- nuevo añadido 2 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" > 
   </td>


                </tr>



 <tr style="font-size: 12px;"   >
                    <td style="width:144px;height:10px;font-size: 11px;"><?php echo $row_datos_controlmat['m_mmm'];?>
                        
                        <span style="color:red;"><b> <?php

               $m_ayuda = '';

                if ($row_datos_controlmat['m_suma'] !=1) {
                  $m_ayuda = '#';
               }

                echo $m_ayuda;?></b></span>


                    </td>

                    <td style="width:71px;height:10px; background-color: #E5F8DC;"><b><?php 

if ($row_datos_controlmat['m_convertir'] == 1 ) {  /* numerico */
       echo $total_seven_con_Au_redon_M13_L1xx;
} /* cierre numerico */
if ($row_datos_controlmat['m_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_12;  }
   echo $alfabetico_seven_con_Au_redon_M13_L1xx; } /* cierre alfabetico */

if ($row_datos_controlmat['m_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M13_L1xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M13_L1xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M13_L1xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M13_L1xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M13_L1xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M13_L1xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M13_L1xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M13_L1xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M13_L1xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M13_L1xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M13_L1xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M13_L1xx = $literal_formato_12;  } 
  echo $literal_seven_con_Au_redon_M13_L1xx; } /* cierre literal */


                    ?></b></td>
                    <td style="width:71px;height:10px;">
                        
<?php 

if ($lap1_div_mat13 == '') {
    $lap1_pro_todo_M13_redond = '';
}

else {

    $lap1_pro_todo_M13 = $lap1_tot_mat13/$lap1_div_mat13;

  $lap1_pro_todo_M13_redondeado1 =number_format($lap1_pro_todo_M13, 1, '.', '');

    $lap1_pro_todo_M13_redond =number_format($lap1_pro_todo_M13_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_total_promedio_Lap_1 = $lap_suma_total_promedio_Lap_1 + $lap1_pro_todo_M13_redond;


if ($row_datos_controlmat['m_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_1 =  $lap_suma_total_promedio_Lap_1 - $lap1_pro_todo_M13_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia13_promedio_aula = $lap1_pro_todo_M13_redond;
    $lapso1_materia13_promedio_aula_divisor = $lapso1_materia13_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia13_aula_promedio =  $definitiva_materia13_aula_promedio + $lap1_pro_todo_M13_redond;
     $definitiva_materia13_aula_divisor = $definitiva_materia13_aula_divisor + 1;


}



if ($row_datos_controlmat['m_convertir'] == 1 ) {  /* numerico */
       echo $lap1_pro_todo_M13_redond;
} /* cierre numerico */
if ($row_datos_controlmat['m_convertir'] == 2 ) {  /* alfabetico */
   if ($lap1_pro_todo_M13_redond >= $comparativo_formato_1) { $alfabetico_lap1_pro_todo_M13_redond = $alfabetico_formato_1;  }
   if ($lap1_pro_todo_M13_redond >= $comparativo_formato_2) { $alfabetico_lap1_pro_todo_M13_redond = $alfabetico_formato_2;  }
   if ($lap1_pro_todo_M13_redond >= $comparativo_formato_3) { $alfabetico_lap1_pro_todo_M13_redond = $alfabetico_formato_3;  }
   if ($lap1_pro_todo_M13_redond >= $comparativo_formato_4) { $alfabetico_lap1_pro_todo_M13_redond = $alfabetico_formato_4;  }
   if ($lap1_pro_todo_M13_redond >= $comparativo_formato_5) { $alfabetico_lap1_pro_todo_M13_redond = $alfabetico_formato_5;  }
   if ($lap1_pro_todo_M13_redond >= $comparativo_formato_6) { $alfabetico_lap1_pro_todo_M13_redond = $alfabetico_formato_6;  }
   if ($lap1_pro_todo_M13_redond >= $comparativo_formato_7) { $alfabetico_lap1_pro_todo_M13_redond = $alfabetico_formato_7;  }
   if ($lap1_pro_todo_M13_redond >= $comparativo_formato_8) { $alfabetico_lap1_pro_todo_M13_redond = $alfabetico_formato_8;  }
   if ($lap1_pro_todo_M13_redond >= $comparativo_formato_9) { $alfabetico_lap1_pro_todo_M13_redond = $alfabetico_formato_9;  }
   if ($lap1_pro_todo_M13_redond >= $comparativo_formato_10) { $alfabetico_lap1_pro_todo_M13_redond = $alfabetico_formato_10;  }
   if ($lap1_pro_todo_M13_redond >= $comparativo_formato_11) { $alfabetico_lap1_pro_todo_M13_redond = $alfabetico_formato_11;  }
   if ($lap1_pro_todo_M13_redond >= $comparativo_formato_12) { $alfabetico_lap1_pro_todo_M13_redond = $alfabetico_formato_12;  }
   echo $alfabetico_lap1_pro_todo_M13_redond; } /* cierre alfabetico */

if ($row_datos_controlmat['m_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_1) { $literal_lap1_pro_todo_M13_redond = $literal_formato_1;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_2) { $literal_lap1_pro_todo_M13_redond = $literal_formato_2;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_3) { $literal_lap1_pro_todo_M13_redond = $literal_formato_3;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_4) { $literal_lap1_pro_todo_M13_redond = $literal_formato_4;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_5) { $literal_lap1_pro_todo_M13_redond = $literal_formato_5;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_6) { $literal_lap1_pro_todo_M13_redond = $literal_formato_6;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_7) { $literal_lap1_pro_todo_M13_redond = $literal_formato_7;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_8) { $literal_lap1_pro_todo_M13_redond = $literal_formato_8;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_9) { $literal_lap1_pro_todo_M13_redond = $literal_formato_9;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_10) { $literal_lap1_pro_todo_M13_redond = $literal_formato_10;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_11) { $literal_lap1_pro_todo_M13_redond = $literal_formato_11;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_12) { $literal_lap1_pro_todo_M13_redond = $literal_formato_12;  } 
  echo $literal_lap1_pro_todo_M13_redond; } /* cierre literal */ ?>




                    </td>


                    <td style="width:60px;height:10px; background-color: #FDFAE1;"></td>
                    <td style="width:60px;height:10px;">
              



                    </td>


                    <td style="width:60px;height:10px; background-color: #FDF0E1;"></td>
                    <td style="width:60px;height:10px;">
                        



                    </td>


                    <td style="width:60px;height:10px; background-color: #E8F3FB;">




                       </td>












                    <td style="width:60px;height:10px;">
             


                    </td>



<!-- nuevo añadido 1 --> 
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" >  
   </td>


<!-- nuevo añadido 2 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" >  
   </td>


                </tr>




 <tr style="font-size: 12px;"   >
                    <td style="width:144px;height:10px; background-color: #F4F3F3;font-size: 11px;"><?php echo $row_datos_controlmat['n_nnn'];?>
                        
                        <span style="color:red;"><b> <?php

               $n_ayuda = '';

                if ($row_datos_controlmat['n_suma'] !=1) {
                  $n_ayuda = '#';
               }

                echo $n_ayuda;?></b></span>


                    </td>

                    <td style="width:71px;height:10px; background-color: #F4F3F3;"><b><?php 

if ($row_datos_controlmat['n_convertir'] == 1 ) {  /* numerico */
       echo $total_seven_con_Au_redon_M14_L1xx;
} /* cierre numerico */
if ($row_datos_controlmat['n_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_12;  }
   echo $alfabetico_seven_con_Au_redon_M14_L1xx; } /* cierre alfabetico */

if ($row_datos_controlmat['n_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M14_L1xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M14_L1xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M14_L1xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M14_L1xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M14_L1xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M14_L1xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M14_L1xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M14_L1xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M14_L1xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M14_L1xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M14_L1xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M14_L1xx = $literal_formato_12;  } 
  echo $literal_seven_con_Au_redon_M14_L1xx; } /* cierre literal */


                    ?></b></td>
                    <td style="width:71px;height:10px; background-color: #F4F3F3;">
                        
<?php 

if ($lap1_div_mat14 == '') {
    $lap1_pro_todo_M14_redond = '';
}

else {

    $lap1_pro_todo_M14 = $lap1_tot_mat14/$lap1_div_mat14;

  $lap1_pro_todo_M14_redondeado1 =number_format($lap1_pro_todo_M14, 1, '.', '');

    $lap1_pro_todo_M14_redond =number_format($lap1_pro_todo_M14_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_total_promedio_Lap_1 = $lap_suma_total_promedio_Lap_1 + $lap1_pro_todo_M14_redond;


if ($row_datos_controlmat['n_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_1 =  $lap_suma_total_promedio_Lap_1 - $lap1_pro_todo_M14_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia14_promedio_aula = $lap1_pro_todo_M14_redond;
    $lapso1_materia14_promedio_aula_divisor = $lapso1_materia14_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia14_aula_promedio =  $definitiva_materia14_aula_promedio + $lap1_pro_todo_M14_redond;
     $definitiva_materia14_aula_divisor = $definitiva_materia14_aula_divisor + 1;


}



if ($row_datos_controlmat['n_convertir'] == 1 ) {  /* numerico */
       echo $lap1_pro_todo_M14_redond;
} /* cierre numerico */
if ($row_datos_controlmat['n_convertir'] == 2 ) {  /* alfabetico */
   if ($lap1_pro_todo_M14_redond >= $comparativo_formato_1) { $alfabetico_lap1_pro_todo_M14_redond = $alfabetico_formato_1;  }
   if ($lap1_pro_todo_M14_redond >= $comparativo_formato_2) { $alfabetico_lap1_pro_todo_M14_redond = $alfabetico_formato_2;  }
   if ($lap1_pro_todo_M14_redond >= $comparativo_formato_3) { $alfabetico_lap1_pro_todo_M14_redond = $alfabetico_formato_3;  }
   if ($lap1_pro_todo_M14_redond >= $comparativo_formato_4) { $alfabetico_lap1_pro_todo_M14_redond = $alfabetico_formato_4;  }
   if ($lap1_pro_todo_M14_redond >= $comparativo_formato_5) { $alfabetico_lap1_pro_todo_M14_redond = $alfabetico_formato_5;  }
   if ($lap1_pro_todo_M14_redond >= $comparativo_formato_6) { $alfabetico_lap1_pro_todo_M14_redond = $alfabetico_formato_6;  }
   if ($lap1_pro_todo_M14_redond >= $comparativo_formato_7) { $alfabetico_lap1_pro_todo_M14_redond = $alfabetico_formato_7;  }
   if ($lap1_pro_todo_M14_redond >= $comparativo_formato_8) { $alfabetico_lap1_pro_todo_M14_redond = $alfabetico_formato_8;  }
   if ($lap1_pro_todo_M14_redond >= $comparativo_formato_9) { $alfabetico_lap1_pro_todo_M14_redond = $alfabetico_formato_9;  }
   if ($lap1_pro_todo_M14_redond >= $comparativo_formato_10) { $alfabetico_lap1_pro_todo_M14_redond = $alfabetico_formato_10;  }
   if ($lap1_pro_todo_M14_redond >= $comparativo_formato_11) { $alfabetico_lap1_pro_todo_M14_redond = $alfabetico_formato_11;  }
   if ($lap1_pro_todo_M14_redond >= $comparativo_formato_12) { $alfabetico_lap1_pro_todo_M14_redond = $alfabetico_formato_12;  }
   echo $alfabetico_lap1_pro_todo_M14_redond; } /* cierre alfabetico */

if ($row_datos_controlmat['n_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_1) { $literal_lap1_pro_todo_M14_redond = $literal_formato_1;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_2) { $literal_lap1_pro_todo_M14_redond = $literal_formato_2;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_3) { $literal_lap1_pro_todo_M14_redond = $literal_formato_3;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_4) { $literal_lap1_pro_todo_M14_redond = $literal_formato_4;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_5) { $literal_lap1_pro_todo_M14_redond = $literal_formato_5;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_6) { $literal_lap1_pro_todo_M14_redond = $literal_formato_6;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_7) { $literal_lap1_pro_todo_M14_redond = $literal_formato_7;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_8) { $literal_lap1_pro_todo_M14_redond = $literal_formato_8;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_9) { $literal_lap1_pro_todo_M14_redond = $literal_formato_9;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_10) { $literal_lap1_pro_todo_M14_redond = $literal_formato_10;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_11) { $literal_lap1_pro_todo_M14_redond = $literal_formato_11;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_12) { $literal_lap1_pro_todo_M14_redond = $literal_formato_12;  } 
  echo $literal_lap1_pro_todo_M14_redond; } /* cierre literal */ ?>




                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;"></td>
                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
          


                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;"></td>
                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
                        





                    </td>


                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
 




                       </td>












                    <td style="width:60px;height:10px; background-color: #F4F3F3;">
                



                    </td>




<!-- nuevo añadido 1 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" >  
   </td>


<!-- nuevo añadido 2 -->
  <td style="width:30px; height:10px; " BGCOLOR="<?php echo $color0;?>" > 
   </td>


                </tr>


                















































































<?php

$co = 0.00000000001;   /* comodin  */

if ($row_datos_controlmat['a_suma'] == 1) { $total_seven_con_Au_redon_M1_L1xx_v = $total_seven_con_Au_redon_M1_L1xx; $M1_L1_v = $M1_L1; } else { $total_seven_con_Au_redon_M1_L1xx_v = 0; $M1_L1_v = $co; }
if ($row_datos_controlmat['b_suma'] == 1) { $total_seven_con_Au_redon_M2_L1xx_v = $total_seven_con_Au_redon_M2_L1xx; $M2_L1_v = $M2_L1; } else { $total_seven_con_Au_redon_M2_L1xx_v = 0; $M2_L1_v = $co; }
if ($row_datos_controlmat['c_suma'] == 1) { $total_seven_con_Au_redon_M3_L1xx_v = $total_seven_con_Au_redon_M3_L1xx; $M3_L1_v = $M3_L1; } else { $total_seven_con_Au_redon_M3_L1xx_v = 0; $M3_L1_v = $co; }
if ($row_datos_controlmat['d_suma'] == 1) { $total_seven_con_Au_redon_M4_L1xx_v = $total_seven_con_Au_redon_M4_L1xx; $M4_L1_v = $M4_L1; } else { $total_seven_con_Au_redon_M4_L1xx_v = 0; $M4_L1_v = $co; }
if ($row_datos_controlmat['e_suma'] == 1) { $total_seven_con_Au_redon_M5_L1xx_v = $total_seven_con_Au_redon_M5_L1xx; $M5_L1_v = $M5_L1; } else { $total_seven_con_Au_redon_M5_L1xx_v = 0; $M5_L1_v = $co; }
if ($row_datos_controlmat['f_suma'] == 1) { $total_seven_con_Au_redon_M6_L1xx_v = $total_seven_con_Au_redon_M6_L1xx; $M6_L1_v = $M6_L1; } else { $total_seven_con_Au_redon_M6_L1xx_v = 0; $M6_L1_v = $co; }
if ($row_datos_controlmat['g_suma'] == 1) { $total_seven_con_Au_redon_M7_L1xx_v = $total_seven_con_Au_redon_M7_L1xx; $M7_L1_v = $M7_L1; } else { $total_seven_con_Au_redon_M7_L1xx_v = 0; $M7_L1_v = $co; }
if ($row_datos_controlmat['h_suma'] == 1) { $total_seven_con_Au_redon_M8_L1xx_v = $total_seven_con_Au_redon_M8_L1xx; $M8_L1_v = $M8_L1; } else { $total_seven_con_Au_redon_M8_L1xx_v = 0; $M8_L1_v = $co; }
if ($row_datos_controlmat['i_suma'] == 1) { $total_seven_con_Au_redon_M9_L1xx_v = $total_seven_con_Au_redon_M9_L1xx; $M9_L1_v = $M9_L1; } else { $total_seven_con_Au_redon_M9_L1xx_v = 0; $M9_L1_v = $co; }
if ($row_datos_controlmat['j_suma'] == 1) { $total_seven_con_Au_redon_M10_L1xx_v = $total_seven_con_Au_redon_M10_L1xx; $M10_L1_v = $M10_L1; } else { $total_seven_con_Au_redon_M10_L1xx_v = 0; $M10_L1_v = $co; }
if ($row_datos_controlmat['k_suma'] == 1) { $total_seven_con_Au_redon_M11_L1xx_v = $total_seven_con_Au_redon_M11_L1xx; $M11_L1_v = $M11_L1; } else { $total_seven_con_Au_redon_M11_L1xx_v = 0; $M11_L1_v = $co; }
if ($row_datos_controlmat['l_suma'] == 1) { $total_seven_con_Au_redon_M12_L1xx_v = $total_seven_con_Au_redon_M12_L1xx; $M12_L1_v = $M12_L1; } else { $total_seven_con_Au_redon_M12_L1xx_v = 0; $M12_L1_v = $co; }
if ($row_datos_controlmat['m_suma'] == 1) { $total_seven_con_Au_redon_M13_L1xx_v = $total_seven_con_Au_redon_M13_L1xx; $M13_L1_v = $M13_L1; } else { $total_seven_con_Au_redon_M13_L1xx_v = 0; $M13_L1_v = $co; }
if ($row_datos_controlmat['n_suma'] == 1) { $total_seven_con_Au_redon_M14_L1xx_v = $total_seven_con_Au_redon_M14_L1xx; $M14_L1_v = $M14_L1; } else { $total_seven_con_Au_redon_M14_L1xx_v = 0; $M14_L1_v = $co; }


$totxxx_L1 = $total_seven_con_Au_redon_M1_L1xx_v +  $total_seven_con_Au_redon_M2_L1xx_v +  $total_seven_con_Au_redon_M3_L1xx_v +  $total_seven_con_Au_redon_M4_L1xx_v +  $total_seven_con_Au_redon_M5_L1xx_v
             + $total_seven_con_Au_redon_M6_L1xx_v +  $total_seven_con_Au_redon_M7_L1xx_v +  $total_seven_con_Au_redon_M8_L1xx_v +  $total_seven_con_Au_redon_M9_L1xx_v +  $total_seven_con_Au_redon_M10_L1xx_v
             + $total_seven_con_Au_redon_M11_L1xx_v +  $total_seven_con_Au_redon_M12_L1xx_v +  $total_seven_con_Au_redon_M13_L1xx_v +  $total_seven_con_Au_redon_M14_L1xx_v;  

if ($row_datos_controlmat['a_suma'] == 1) { $total_seven_con_Au_redon_M1_L2xx_v = $total_seven_con_Au_redon_M1_L2xx; $M1_L2_v = $M1_L2; } else { $total_seven_con_Au_redon_M1_L2xx_v = 0; $M1_L2_v = $co; }
if ($row_datos_controlmat['b_suma'] == 1) { $total_seven_con_Au_redon_M2_L2xx_v = $total_seven_con_Au_redon_M2_L2xx; $M2_L2_v = $M2_L2; } else { $total_seven_con_Au_redon_M2_L2xx_v = 0; $M2_L2_v = $co; }
if ($row_datos_controlmat['c_suma'] == 1) { $total_seven_con_Au_redon_M3_L2xx_v = $total_seven_con_Au_redon_M3_L2xx; $M3_L2_v = $M3_L2; } else { $total_seven_con_Au_redon_M3_L2xx_v = 0; $M3_L2_v = $co; }
if ($row_datos_controlmat['d_suma'] == 1) { $total_seven_con_Au_redon_M4_L2xx_v = $total_seven_con_Au_redon_M4_L2xx; $M4_L2_v = $M4_L2; } else { $total_seven_con_Au_redon_M4_L2xx_v = 0; $M4_L2_v = $co; }
if ($row_datos_controlmat['e_suma'] == 1) { $total_seven_con_Au_redon_M5_L2xx_v = $total_seven_con_Au_redon_M5_L2xx; $M5_L2_v = $M5_L2; } else { $total_seven_con_Au_redon_M5_L2xx_v = 0; $M5_L2_v = $co; }
if ($row_datos_controlmat['f_suma'] == 1) { $total_seven_con_Au_redon_M6_L2xx_v = $total_seven_con_Au_redon_M6_L2xx; $M6_L2_v = $M6_L2; } else { $total_seven_con_Au_redon_M6_L2xx_v = 0; $M6_L2_v = $co; }
if ($row_datos_controlmat['g_suma'] == 1) { $total_seven_con_Au_redon_M7_L2xx_v = $total_seven_con_Au_redon_M7_L2xx; $M7_L2_v = $M7_L2; } else { $total_seven_con_Au_redon_M7_L2xx_v = 0; $M7_L2_v = $co; }
if ($row_datos_controlmat['h_suma'] == 1) { $total_seven_con_Au_redon_M8_L2xx_v = $total_seven_con_Au_redon_M8_L2xx; $M8_L2_v = $M8_L2; } else { $total_seven_con_Au_redon_M8_L2xx_v = 0; $M8_L2_v = $co; }
if ($row_datos_controlmat['i_suma'] == 1) { $total_seven_con_Au_redon_M9_L2xx_v = $total_seven_con_Au_redon_M9_L2xx; $M9_L2_v = $M9_L2; } else { $total_seven_con_Au_redon_M9_L2xx_v = 0; $M9_L2_v = $co; }
if ($row_datos_controlmat['j_suma'] == 1) { $total_seven_con_Au_redon_M10_L2xx_v = $total_seven_con_Au_redon_M10_L2xx; $M10_L2_v = $M10_L2; } else { $total_seven_con_Au_redon_M10_L2xx_v = 0; $M10_L2_v = $co; }
if ($row_datos_controlmat['k_suma'] == 1) { $total_seven_con_Au_redon_M11_L2xx_v = $total_seven_con_Au_redon_M11_L2xx; $M11_L2_v = $M11_L2; } else { $total_seven_con_Au_redon_M11_L2xx_v = 0; $M11_L2_v = $co; }
if ($row_datos_controlmat['l_suma'] == 1) { $total_seven_con_Au_redon_M12_L2xx_v = $total_seven_con_Au_redon_M12_L2xx; $M12_L2_v = $M12_L2; } else { $total_seven_con_Au_redon_M12_L2xx_v = 0; $M12_L2_v = $co; }
if ($row_datos_controlmat['m_suma'] == 1) { $total_seven_con_Au_redon_M13_L2xx_v = $total_seven_con_Au_redon_M13_L2xx; $M13_L2_v = $M13_L2; } else { $total_seven_con_Au_redon_M13_L2xx_v = 0; $M13_L2_v = $co; }
if ($row_datos_controlmat['n_suma'] == 1) { $total_seven_con_Au_redon_M14_L2xx_v = $total_seven_con_Au_redon_M14_L2xx; $M14_L2_v = $M14_L2; } else { $total_seven_con_Au_redon_M14_L2xx_v = 0; $M14_L2_v = $co; }


$totxxx_L2 = $total_seven_con_Au_redon_M1_L2xx_v +  $total_seven_con_Au_redon_M2_L2xx_v +  $total_seven_con_Au_redon_M3_L2xx_v +  $total_seven_con_Au_redon_M4_L2xx_v +  $total_seven_con_Au_redon_M5_L2xx_v
             + $total_seven_con_Au_redon_M6_L2xx_v +  $total_seven_con_Au_redon_M7_L2xx_v +  $total_seven_con_Au_redon_M8_L2xx_v +  $total_seven_con_Au_redon_M9_L2xx_v +  $total_seven_con_Au_redon_M10_L2xx_v
             + $total_seven_con_Au_redon_M11_L2xx_v +  $total_seven_con_Au_redon_M12_L2xx_v +  $total_seven_con_Au_redon_M13_L2xx_v +  $total_seven_con_Au_redon_M14_L2xx_v; 

if ($row_datos_controlmat['a_suma'] == 1) { $total_seven_con_Au_redon_M1_L3xx_v = $total_seven_con_Au_redon_M1_L3xx; $M1_L3_v = $M1_L3; } else { $total_seven_con_Au_redon_M1_L3xx_v = 0; $M1_L3_v = $co; }
if ($row_datos_controlmat['b_suma'] == 1) { $total_seven_con_Au_redon_M2_L3xx_v = $total_seven_con_Au_redon_M2_L3xx; $M2_L3_v = $M2_L3; } else { $total_seven_con_Au_redon_M2_L3xx_v = 0; $M2_L3_v = $co; }
if ($row_datos_controlmat['c_suma'] == 1) { $total_seven_con_Au_redon_M3_L3xx_v = $total_seven_con_Au_redon_M3_L3xx; $M3_L3_v = $M3_L3; } else { $total_seven_con_Au_redon_M3_L3xx_v = 0; $M3_L3_v = $co; }
if ($row_datos_controlmat['d_suma'] == 1) { $total_seven_con_Au_redon_M4_L3xx_v = $total_seven_con_Au_redon_M4_L3xx; $M4_L3_v = $M4_L3; } else { $total_seven_con_Au_redon_M4_L3xx_v = 0; $M4_L3_v = $co; }
if ($row_datos_controlmat['e_suma'] == 1) { $total_seven_con_Au_redon_M5_L3xx_v = $total_seven_con_Au_redon_M5_L3xx; $M5_L3_v = $M5_L3; } else { $total_seven_con_Au_redon_M5_L3xx_v = 0; $M5_L3_v = $co; }
if ($row_datos_controlmat['f_suma'] == 1) { $total_seven_con_Au_redon_M6_L3xx_v = $total_seven_con_Au_redon_M6_L3xx; $M6_L3_v = $M6_L3; } else { $total_seven_con_Au_redon_M6_L3xx_v = 0; $M6_L3_v = $co; }
if ($row_datos_controlmat['g_suma'] == 1) { $total_seven_con_Au_redon_M7_L3xx_v = $total_seven_con_Au_redon_M7_L3xx; $M7_L3_v = $M7_L3; } else { $total_seven_con_Au_redon_M7_L3xx_v = 0; $M7_L3_v = $co; }
if ($row_datos_controlmat['h_suma'] == 1) { $total_seven_con_Au_redon_M8_L3xx_v = $total_seven_con_Au_redon_M8_L3xx; $M8_L3_v = $M8_L3; } else { $total_seven_con_Au_redon_M8_L3xx_v = 0; $M8_L3_v = $co; }
if ($row_datos_controlmat['i_suma'] == 1) { $total_seven_con_Au_redon_M9_L3xx_v = $total_seven_con_Au_redon_M9_L3xx; $M9_L3_v = $M9_L3; } else { $total_seven_con_Au_redon_M9_L3xx_v = 0; $M9_L3_v = $co; }
if ($row_datos_controlmat['j_suma'] == 1) { $total_seven_con_Au_redon_M10_L3xx_v = $total_seven_con_Au_redon_M10_L3xx; $M10_L3_v = $M10_L3; } else { $total_seven_con_Au_redon_M10_L3xx_v = 0; $M10_L3_v = $co; }
if ($row_datos_controlmat['k_suma'] == 1) { $total_seven_con_Au_redon_M11_L3xx_v = $total_seven_con_Au_redon_M11_L3xx; $M11_L3_v = $M11_L3; } else { $total_seven_con_Au_redon_M11_L3xx_v = 0; $M11_L3_v = $co; }
if ($row_datos_controlmat['l_suma'] == 1) { $total_seven_con_Au_redon_M12_L3xx_v = $total_seven_con_Au_redon_M12_L3xx; $M12_L3_v = $M12_L3; } else { $total_seven_con_Au_redon_M12_L3xx_v = 0; $M12_L3_v = $co; }
if ($row_datos_controlmat['m_suma'] == 1) { $total_seven_con_Au_redon_M13_L3xx_v = $total_seven_con_Au_redon_M13_L3xx; $M13_L3_v = $M13_L3; } else { $total_seven_con_Au_redon_M13_L3xx_v = 0; $M13_L3_v = $co; }
if ($row_datos_controlmat['n_suma'] == 1) { $total_seven_con_Au_redon_M14_L3xx_v = $total_seven_con_Au_redon_M14_L3xx; $M14_L3_v = $M14_L3; } else { $total_seven_con_Au_redon_M14_L3xx_v = 0; $M14_L3_v = $co; }


$totxxx_L3 = $total_seven_con_Au_redon_M1_L3xx_v +  $total_seven_con_Au_redon_M2_L3xx_v +  $total_seven_con_Au_redon_M3_L3xx_v +  $total_seven_con_Au_redon_M4_L3xx_v +  $total_seven_con_Au_redon_M5_L3xx_v
             + $total_seven_con_Au_redon_M6_L3xx_v +  $total_seven_con_Au_redon_M7_L3xx_v +  $total_seven_con_Au_redon_M8_L3xx_v +  $total_seven_con_Au_redon_M9_L3xx_v +  $total_seven_con_Au_redon_M10_L3xx_v
             + $total_seven_con_Au_redon_M11_L3xx_v +  $total_seven_con_Au_redon_M12_L3xx_v +  $total_seven_con_Au_redon_M13_L3xx_v +  $total_seven_con_Au_redon_M14_L3xx_v; 




if ($row_datos_controlmat['a_suma'] == 1) { $total_seven_con_Au_redon_M1_aproxxx_v = $total_seven_con_Au_redon_M1_aproxxx; $tot_M1_v = $tot_M1; } else { $total_seven_con_Au_redon_M1_aproxxx_v = 0; $tot_M1_v = $co; }
if ($row_datos_controlmat['b_suma'] == 1) { $total_seven_con_Au_redon_M2_aproxxx_v = $total_seven_con_Au_redon_M2_aproxxx; $tot_M2_v = $tot_M2; } else { $total_seven_con_Au_redon_M2_aproxxx_v = 0; $tot_M2_v = $co; }
if ($row_datos_controlmat['c_suma'] == 1) { $total_seven_con_Au_redon_M3_aproxxx_v = $total_seven_con_Au_redon_M3_aproxxx; $tot_M3_v = $tot_M3; } else { $total_seven_con_Au_redon_M3_aproxxx_v = 0; $tot_M3_v = $co; }
if ($row_datos_controlmat['d_suma'] == 1) { $total_seven_con_Au_redon_M4_aproxxx_v = $total_seven_con_Au_redon_M4_aproxxx; $tot_M4_v = $tot_M4; } else { $total_seven_con_Au_redon_M4_aproxxx_v = 0; $tot_M4_v = $co; }
if ($row_datos_controlmat['e_suma'] == 1) { $total_seven_con_Au_redon_M5_aproxxx_v = $total_seven_con_Au_redon_M5_aproxxx; $tot_M5_v = $tot_M5; } else { $total_seven_con_Au_redon_M5_aproxxx_v = 0; $tot_M5_v = $co; }
if ($row_datos_controlmat['f_suma'] == 1) { $total_seven_con_Au_redon_M6_aproxxx_v = $total_seven_con_Au_redon_M6_aproxxx; $tot_M6_v = $tot_M6; } else { $total_seven_con_Au_redon_M6_aproxxx_v = 0; $tot_M6_v = $co; }
if ($row_datos_controlmat['g_suma'] == 1) { $total_seven_con_Au_redon_M7_aproxxx_v = $total_seven_con_Au_redon_M7_aproxxx; $tot_M7_v = $tot_M7; } else { $total_seven_con_Au_redon_M7_aproxxx_v = 0; $tot_M7_v = $co; }
if ($row_datos_controlmat['h_suma'] == 1) { $total_seven_con_Au_redon_M8_aproxxx_v = $total_seven_con_Au_redon_M8_aproxxx; $tot_M8_v = $tot_M8; } else { $total_seven_con_Au_redon_M8_aproxxx_v = 0; $tot_M8_v = $co; }
if ($row_datos_controlmat['i_suma'] == 1) { $total_seven_con_Au_redon_M9_aproxxx_v = $total_seven_con_Au_redon_M9_aproxxx; $tot_M9_v = $tot_M9; } else { $total_seven_con_Au_redon_M9_aproxxx_v = 0; $tot_M9_v = $co; }
if ($row_datos_controlmat['j_suma'] == 1) { $total_seven_con_Au_redon_M10_aproxxx_v = $total_seven_con_Au_redon_M10_aproxxx; $tot_M10_v = $tot_M10; } else { $total_seven_con_Au_redon_M10_aproxxx_v = 0; $tot_M10_v = $co; }
if ($row_datos_controlmat['k_suma'] == 1) { $total_seven_con_Au_redon_M11_aproxxx_v = $total_seven_con_Au_redon_M11_aproxxx; $tot_M11_v = $tot_M11; } else { $total_seven_con_Au_redon_M11_aproxxx_v = 0; $tot_M11_v = $co; }
if ($row_datos_controlmat['l_suma'] == 1) { $total_seven_con_Au_redon_M12_aproxxx_v = $total_seven_con_Au_redon_M12_aproxxx; $tot_M12_v = $tot_M12; } else { $total_seven_con_Au_redon_M12_aproxxx_v = 0; $tot_M12_v = $co; }
if ($row_datos_controlmat['m_suma'] == 1) { $total_seven_con_Au_redon_M13_aproxxx_v = $total_seven_con_Au_redon_M13_aproxxx; $tot_M13_v = $tot_M13; } else { $total_seven_con_Au_redon_M13_aproxxx_v = 0; $tot_M13_v = $co; }
if ($row_datos_controlmat['n_suma'] == 1) { $total_seven_con_Au_redon_M14_aproxxx_v = $total_seven_con_Au_redon_M14_aproxxx; $tot_M14_v = $tot_M14; } else { $total_seven_con_Au_redon_M14_aproxxx_v = 0; $tot_M14_v = $co; }



$totxxx_Def =  $total_seven_con_Au_redon_M1_aproxxx_v + $total_seven_con_Au_redon_M2_aproxxx_v + $total_seven_con_Au_redon_M3_aproxxx_v + $total_seven_con_Au_redon_M4_aproxxx_v + 
               $total_seven_con_Au_redon_M5_aproxxx_v + $total_seven_con_Au_redon_M6_aproxxx_v + $total_seven_con_Au_redon_M7_aproxxx_v + $total_seven_con_Au_redon_M8_aproxxx_v +
               $total_seven_con_Au_redon_M9_aproxxx_v + $total_seven_con_Au_redon_M10_aproxxx_v + $total_seven_con_Au_redon_M11_aproxxx_v + $total_seven_con_Au_redon_M12_aproxxx_v +
               $total_seven_con_Au_redon_M13_aproxxx_v + $total_seven_con_Au_redon_M14_aproxxx_v;


$divisorxx_L1 = $M1_L1_v + $M2_L1_v + $M3_L1_v + $M4_L1_v + $M5_L1_v + $M6_L1_v + $M7_L1_v + $M8_L1_v + $M9_L1_v + $M10_L1_v + $M11_L1_v + $M12_L1_v + $M13_L1_v + $M14_L1_v;

if ($divisorxx_L1 == '') {
    $divisorxx_L1xx = '0.0000000000000001';
}

else {
    $divisorxx_L1xx = $divisorxx_L1;
}


$divisorxx_L2 = $M1_L2_v + $M2_L2_v + $M3_L2_v + $M4_L2_v + $M5_L2_v + $M6_L2_v + $M7_L2_v + $M8_L2_v + $M9_L2_v + $M10_L2_v + $M11_L2_v + $M12_L2_v + $M13_L2_v + $M14_L2_v;


if ($divisorxx_L2 == '') {
    $divisorxx_L2xx = '0.0000000000000001';
}

else {
    $divisorxx_L2xx = $divisorxx_L2;
}

$divisorxx_L3 = $M1_L3_v + $M2_L3_v + $M3_L3_v + $M4_L3_v + $M5_L3_v + $M6_L3_v + $M7_L3_v + $M8_L3_v + $M9_L3_v + $M10_L3_v + $M11_L3_v + $M12_L3_v + $M13_L3_v + $M14_L3_v;


if ($divisorxx_L3 == '') {
    $divisorxx_L3xx = '0.0000000000000001';
}

else {
    $divisorxx_L3xx = $divisorxx_L3;
}

$divisorxx_total = $tot_M1_v+ $tot_M2_v+ $tot_M3_v+ $tot_M4_v+ $tot_M5_v+ $tot_M6_v+ $tot_M7_v+ $tot_M8_v+ $tot_M9_v+ $tot_M10_v+ $tot_M11_v+ $tot_M12_v+$tot_M13_v+$tot_M14_v;


if ($divisorxx_total == '') {
    $divisorxx_totalxx = '0.0000000000000001';
}

else {
    $divisorxx_totalxx = $divisorxx_total;

    number_format($general_3, 2, ',', '');
}



$general_1 = $totxxx_L1/$divisorxx_L1xx;
$general_2 = $totxxx_L2/$divisorxx_L2xx;
$general_3 = $totxxx_L3/$divisorxx_L3xx;

$general_def =  $totxxx_Def/$divisorxx_totalxx;

$general_defxxx = number_format($general_def, 2, ',', '');

$general_defxxxE_redondeado1 = number_format($general_def, 1, '.', '');

$general_defxxxE = number_format($general_defxxxE_redondeado1);


if ($general_1 == '0') {
   $general_1xx = '';
}

else {
$general_1xx = number_format($general_1, 2, ',', '');
}


if ($general_2 == '0') {
   $general_2xx = '';
}

else {
$general_2xx = number_format($general_2, 2, ',', '');
}


if ($general_3 == '0') {
   $general_3xx = '';
}

else {
$general_3xx = number_format($general_3, 2, ',', '');
}


?>


<?php
$dominio_numerico = '0';
$dominio_alfabetico = '0';
$dominio_literal = '0';

if ($row_datos_controlmat['a_aaa'] !='') { if ($row_datos_controlmat['a_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }   } 
if ($row_datos_controlmat['b_bbb'] !='') { if ($row_datos_controlmat['b_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }   } 
if ($row_datos_controlmat['c_ccc'] !='') { if ($row_datos_controlmat['c_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }   } 
if ($row_datos_controlmat['d_ddd'] !='') { if ($row_datos_controlmat['d_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }   } 
if ($row_datos_controlmat['e_eee'] !='') { if ($row_datos_controlmat['e_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }   } 
if ($row_datos_controlmat['f_fff'] !='') { if ($row_datos_controlmat['f_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }   } 
if ($row_datos_controlmat['g_ggg'] !='') { if ($row_datos_controlmat['g_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }   } 
if ($row_datos_controlmat['h_hhh'] !='') { if ($row_datos_controlmat['h_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }   } 
if ($row_datos_controlmat['i_iii'] !='') { if ($row_datos_controlmat['i_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }   } 
if ($row_datos_controlmat['j_jjj'] !='') { if ($row_datos_controlmat['j_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }   } 
if ($row_datos_controlmat['k_kkk'] !='') { if ($row_datos_controlmat['k_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }   } 
if ($row_datos_controlmat['l_lll'] !='') { if ($row_datos_controlmat['l_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }   } 

if ($row_datos_controlmat['a_aaa'] !='') { if ($row_datos_controlmat['a_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }    } 
if ($row_datos_controlmat['b_bbb'] !='') { if ($row_datos_controlmat['b_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }    } 
if ($row_datos_controlmat['c_ccc'] !='') { if ($row_datos_controlmat['c_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }    } 
if ($row_datos_controlmat['d_ddd'] !='') { if ($row_datos_controlmat['d_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }    } 
if ($row_datos_controlmat['e_eee'] !='') { if ($row_datos_controlmat['e_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }    } 
if ($row_datos_controlmat['f_fff'] !='') { if ($row_datos_controlmat['f_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }    } 
if ($row_datos_controlmat['g_ggg'] !='') { if ($row_datos_controlmat['g_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }    } 
if ($row_datos_controlmat['h_hhh'] !='') { if ($row_datos_controlmat['h_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }    } 
if ($row_datos_controlmat['i_iii'] !='') { if ($row_datos_controlmat['i_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }    } 
if ($row_datos_controlmat['j_jjj'] !='') { if ($row_datos_controlmat['j_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }    } 
if ($row_datos_controlmat['k_kkk'] !='') { if ($row_datos_controlmat['k_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }    } 
if ($row_datos_controlmat['l_lll'] !='') { if ($row_datos_controlmat['l_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }    } 

if ($row_datos_controlmat['a_aaa'] !='') { if ($row_datos_controlmat['a_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }  } 
if ($row_datos_controlmat['b_bbb'] !='') { if ($row_datos_controlmat['b_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }  } 
if ($row_datos_controlmat['c_ccc'] !='') { if ($row_datos_controlmat['c_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }  } 
if ($row_datos_controlmat['d_ddd'] !='') { if ($row_datos_controlmat['d_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }  } 
if ($row_datos_controlmat['e_eee'] !='') { if ($row_datos_controlmat['e_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }  } 
if ($row_datos_controlmat['f_fff'] !='') { if ($row_datos_controlmat['f_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }  } 
if ($row_datos_controlmat['g_ggg'] !='') { if ($row_datos_controlmat['g_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }  } 
if ($row_datos_controlmat['h_hhh'] !='') { if ($row_datos_controlmat['h_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }  } 
if ($row_datos_controlmat['i_iii'] !='') { if ($row_datos_controlmat['i_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }  } 
if ($row_datos_controlmat['j_jjj'] !='') { if ($row_datos_controlmat['j_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }  } 
if ($row_datos_controlmat['k_kkk'] !='') { if ($row_datos_controlmat['k_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }  } 
if ($row_datos_controlmat['l_lll'] !='') { if ($row_datos_controlmat['l_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }  }  


?>



                <tr>

                    <td rowspan="2" style="width:144px;height:10px; background-color: #DBD3E3;"><b>Promedio General</b><br><b>y Ranking:</b></td>

                    <td style="width:71px;height:10px;" BGCOLOR="#9EEC7A" ><b><?php 
$general_1xx_entero = number_format($general_1xx);

   if ( $dominio_numerico >= 4  ) {  /* numerico */
       echo $general_1xx;
} /* cierre numerico */
if ($dominio_alfabetico >= 4 ) {  /* alfabetico */
   if ($general_1xx_entero >= $comparativo_formato_1) { $alfabetico_general_1xx_entero = $alfabetico_formato_1;  }
   if ($general_1xx_entero >= $comparativo_formato_2) { $alfabetico_general_1xx_entero = $alfabetico_formato_2;  }
   if ($general_1xx_entero >= $comparativo_formato_3) { $alfabetico_general_1xx_entero = $alfabetico_formato_3;  }
   if ($general_1xx_entero >= $comparativo_formato_4) { $alfabetico_general_1xx_entero = $alfabetico_formato_4;  }
   if ($general_1xx_entero >= $comparativo_formato_5) { $alfabetico_general_1xx_entero = $alfabetico_formato_5;  }
   if ($general_1xx_entero >= $comparativo_formato_6) { $alfabetico_general_1xx_entero = $alfabetico_formato_6;  }
   if ($general_1xx_entero >= $comparativo_formato_7) { $alfabetico_general_1xx_entero = $alfabetico_formato_7;  }
   if ($general_1xx_entero >= $comparativo_formato_8) { $alfabetico_general_1xx_entero = $alfabetico_formato_8;  }
   if ($general_1xx_entero >= $comparativo_formato_9) { $alfabetico_general_1xx_entero = $alfabetico_formato_9;  }
   if ($general_1xx_entero >= $comparativo_formato_10) { $alfabetico_general_1xx_entero = $alfabetico_formato_10;  }
   if ($general_1xx_entero >= $comparativo_formato_11) { $alfabetico_general_1xx_entero = $alfabetico_formato_11;  }
   if ($general_1xx_entero >= $comparativo_formato_12) { $alfabetico_general_1xx_entero = $alfabetico_formato_12;  }
   echo $alfabetico_general_1xx_entero; } /* cierre alfabetico */

if ($dominio_literal >= 4  ) {  /* literal */
  if ($general_1xx_entero >= $comparativo_formato_1) { $literal_general_1xx_entero = $literal_formato_1;  }
  if ($general_1xx_entero >= $comparativo_formato_2) { $literal_general_1xx_entero = $literal_formato_2;  }
  if ($general_1xx_entero >= $comparativo_formato_3) { $literal_general_1xx_entero = $literal_formato_3;  }
  if ($general_1xx_entero >= $comparativo_formato_4) { $literal_general_1xx_entero = $literal_formato_4;  }
  if ($general_1xx_entero >= $comparativo_formato_5) { $literal_general_1xx_entero = $literal_formato_5;  }
  if ($general_1xx_entero >= $comparativo_formato_6) { $literal_general_1xx_entero = $literal_formato_6;  }
  if ($general_1xx_entero >= $comparativo_formato_7) { $literal_general_1xx_entero = $literal_formato_7;  }
  if ($general_1xx_entero >= $comparativo_formato_8) { $literal_general_1xx_entero = $literal_formato_8;  }
  if ($general_1xx_entero >= $comparativo_formato_9) { $literal_general_1xx_entero = $literal_formato_9;  }
  if ($general_1xx_entero >= $comparativo_formato_10) { $literal_general_1xx_entero = $literal_formato_10;  }
  if ($general_1xx_entero >= $comparativo_formato_11) { $literal_general_1xx_entero = $literal_formato_11;  }
  if ($general_1xx_entero >= $comparativo_formato_12) { $literal_general_1xx_entero = $literal_formato_12;  } 
  echo $literal_general_1xx_entero; }

  ?></b></td>
                    <td style="width:71px;height:10px;" BGCOLOR="<?php echo $color1;?>" >
    <span style="font-size: 11px;">                    
<?php

$promedio_real_aula_L1 = $lap_suma_total_promedio_Lap_1 / $lap_divisor_promedio_Lap_1;

if ($lap_divisor_promedio_Lap_1 == '0') {
    $promedio_real_aula_L1xxx = '';
}

else {
 $promedio_real_aula_L1xxx = number_format($promedio_real_aula_L1, 2, ',', '');

}



$promedio_real_aula_L1xxx_entero = number_format($promedio_real_aula_L1xxx);

   if ( $dominio_numerico >= 4  ) {  /* numerico */
       echo $promedio_real_aula_L1xxx;
} /* cierre numerico */
if ($dominio_alfabetico >= 4 ) {  /* alfabetico */
   if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_1) { $alfabetico_aula_L1xxx_entero = $alfabetico_formato_1;  }
   if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_2) { $alfabetico_aula_L1xxx_entero = $alfabetico_formato_2;  }
   if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_3) { $alfabetico_aula_L1xxx_entero = $alfabetico_formato_3;  }
   if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_4) { $alfabetico_aula_L1xxx_entero = $alfabetico_formato_4;  }
   if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_5) { $alfabetico_aula_L1xxx_entero = $alfabetico_formato_5;  }
   if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_6) { $alfabetico_aula_L1xxx_entero = $alfabetico_formato_6;  }
   if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_7) { $alfabetico_aula_L1xxx_entero = $alfabetico_formato_7;  }
   if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_8) { $alfabetico_aula_L1xxx_entero = $alfabetico_formato_8;  }
   if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_9) { $alfabetico_aula_L1xxx_entero = $alfabetico_formato_9;  }
   if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_10) { $alfabetico_aula_L1xxx_entero = $alfabetico_formato_10;  }
   if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_11) { $alfabetico_aula_L1xxx_entero = $alfabetico_formato_11;  }
   if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_12) { $alfabetico_aula_L1xxx_entero = $alfabetico_formato_12;  }
   echo $alfabetico_aula_L1xxx_entero; } /* cierre alfabetico */

if ($dominio_literal >= 4  ) {  /* literal */
  if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_1) { $literal_aula_L1xxx_entero = $literal_formato_1;  }
  if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_2) { $literal_aula_L1xxx_entero = $literal_formato_2;  }
  if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_3) { $literal_aula_L1xxx_entero = $literal_formato_3;  }
  if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_4) { $literal_aula_L1xxx_entero = $literal_formato_4;  }
  if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_5) { $literal_aula_L1xxx_entero = $literal_formato_5;  }
  if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_6) { $literal_aula_L1xxx_entero = $literal_formato_6;  }
  if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_7) { $literal_aula_L1xxx_entero = $literal_formato_7;  }
  if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_8) { $literal_aula_L1xxx_entero = $literal_formato_8;  }
  if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_9) { $literal_aula_L1xxx_entero = $literal_formato_9;  }
  if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_10) { $literal_aula_L1xxx_entero = $literal_formato_10;  }
  if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_11) { $literal_aula_L1xxx_entero = $literal_formato_11;  }
  if ($promedio_real_aula_L1xxx_entero >= $comparativo_formato_12) { $literal_aula_L1xxx_entero = $literal_formato_12;  } 
  echo $literal_aula_L1xxx_entero; }

?></span>



                    </td>

                    <td style="width:60px;height:10px;" BGCOLOR="#FAE087" ></td>
                    <td style="width:60px;height:10px;" BGCOLOR="<?php echo $color2;?>" >
       


                    </td>

                    <td style="width:60px;height:10px;" BGCOLOR="#F1A96A" ></td>
                    <td style="width:60px;height:10px;" BGCOLOR="<?php echo $color3;?>" >
                        









                    </td>

                    <td style="width:60px;height:10px;" BGCOLOR="#ABC9F0" ><b><span style="font-size: 11px;">

                        <?php   $signito = '=';
if ( $dominio_numerico >= 4  )  { $general_defxxx;  $signito; }  ?> </span><?php  if ( $dominio_numerico >= 4  ) 
                       
                        {  /* numerico */
        $general_defxxxE;
} /* cierre numerico */

if ($dominio_alfabetico >= 4 ) {  /* alfabetico */
   if ($general_defxxxE >= $comparativo_formato_1) { $alfabetico_general_defxxxE = $alfabetico_formato_1;  }
   if ($general_defxxxE >= $comparativo_formato_2) { $alfabetico_general_defxxxE = $alfabetico_formato_2;  }
   if ($general_defxxxE >= $comparativo_formato_3) { $alfabetico_general_defxxxE = $alfabetico_formato_3;  }
   if ($general_defxxxE >= $comparativo_formato_4) { $alfabetico_general_defxxxE = $alfabetico_formato_4;  }
   if ($general_defxxxE >= $comparativo_formato_5) { $alfabetico_general_defxxxE = $alfabetico_formato_5;  }
   if ($general_defxxxE >= $comparativo_formato_6) { $alfabetico_general_defxxxE = $alfabetico_formato_6;  }
   if ($general_defxxxE >= $comparativo_formato_7) { $alfabetico_general_defxxxE = $alfabetico_formato_7;  }
   if ($general_defxxxE >= $comparativo_formato_8) { $alfabetico_general_defxxxE = $alfabetico_formato_8;  }
   if ($general_defxxxE >= $comparativo_formato_9) { $alfabetico_general_defxxxE = $alfabetico_formato_9;  }
   if ($general_defxxxE >= $comparativo_formato_10) { $alfabetico_general_defxxxE = $alfabetico_formato_10;  }
   if ($general_defxxxE >= $comparativo_formato_11) { $alfabetico_general_defxxxE = $alfabetico_formato_11;  }
   if ($general_defxxxE >= $comparativo_formato_12) { $alfabetico_general_defxxxE = $alfabetico_formato_12;  }
    $alfabetico_general_defxxxE; } /* cierre alfabetico */

if ($dominio_literal >= 4  ) {  /* literal */
  if ($general_defxxxE >= $comparativo_formato_1) { $literal_general_defxxxE = $literal_formato_1;  }
  if ($general_defxxxE >= $comparativo_formato_2) { $literal_general_defxxxE = $literal_formato_2;  }
  if ($general_defxxxE >= $comparativo_formato_3) { $literal_general_defxxxE = $literal_formato_3;  }
  if ($general_defxxxE >= $comparativo_formato_4) { $literal_general_defxxxE = $literal_formato_4;  }
  if ($general_defxxxE >= $comparativo_formato_5) { $literal_general_defxxxE = $literal_formato_5;  }
  if ($general_defxxxE >= $comparativo_formato_6) { $literal_general_defxxxE = $literal_formato_6;  }
  if ($general_defxxxE >= $comparativo_formato_7) { $literal_general_defxxxE = $literal_formato_7;  }
  if ($general_defxxxE >= $comparativo_formato_8) { $literal_general_defxxxE = $literal_formato_8;  }
  if ($general_defxxxE >= $comparativo_formato_9) { $literal_general_defxxxE = $literal_formato_9;  }
  if ($general_defxxxE >= $comparativo_formato_10) { $literal_general_defxxxE = $literal_formato_10;  }
  if ($general_defxxxE >= $comparativo_formato_11) { $literal_general_defxxxE = $literal_formato_11;  }
  if ($general_defxxxE >= $comparativo_formato_12) { $literal_general_defxxxE = $literal_formato_12;  } 
  $literal_general_defxxxE; }?>    </b></td>
                    <td style="width:60px;height:10px;" BGCOLOR="<?php echo $color5;?>" >
                        

                    </td>



<!-- nuevo añadido 1 -->
  <td style="width:60px; height:10px; background-color: #DBD3E3;" rowspan="2" colspan="2" >
   
   </td>






                </tr>


               <tr>
                    

                    <td colspan="2" style="width:142px;height:10px;" BGCOLOR="<?php echo $color1;?>" >
                        
<?php

$calificacion1 =  $row_datos_control['cla_1'];

if ($general_1xx == '') {
   $lugar_aaa = '';
}

else {

$lugar_aaa = ' '.$calificacion1.' de '.$lap3_totalRows_datos_control.' ';

}

 echo $lugar_aaa ;?>





                    </td>
                    

                    <td colspan="2" style="width:120px;height:10px;" BGCOLOR="<?php echo $color2;?>" >
        

                    </td>
                

                    <td colspan="2" style="width:120px;height:10px;" BGCOLOR="<?php echo $color3;?>" >
                        


                    </td>
              

                    <td colspan="2" style="width:120px;height:10px;" BGCOLOR="<?php echo $color5;?>" >

          





                    </td>



                 
    

                </tr>



            </table> <!-- final de table -->



         <table style="margin-top: 4px;">
            



            <tr >
                <td style="width:100%;height:22px; font-size: 20px; margin-top: 4px;" class="table1" align="left" ><b style="font-size: 14px;">&nbsp; * Observación:</b>
                   <span style="color: black; font-size: 12px;">&nbsp;&nbsp;_________________________________________________________________________________________________.</span><span style="font-size: 12px;" ><br>
                &nbsp; <span style="font-size: 14px;" >* <b>Leyendas:</b></span><br>
                &nbsp;&nbsp;&nbsp; <b>-</b> <b style="color:red; font-size: 12px;">#</b><span style="font-size: 12px;">: La asignatura y/o materia no suma en el promedio.  </span><br>
<?php

include("../../conectar.php");

$query2_ultra = "SELECT * FROM z_formato GROUP BY literal ORDER BY comparativo DESC";
$datos_dependientes1_ultra = mysqli_query($enlace, $query2_ultra) or die(mysqli_error());
$row_datos_dependientes1_ultra = mysqli_fetch_assoc($datos_dependientes1_ultra);
$totalRows_datos_dependientes1_ultra = mysqli_num_rows($datos_dependientes1_ultra);


$query2_ultraCCC = "SELECT * FROM z_formato GROUP BY alfabetico ORDER BY comparativo DESC";
$datos_dependientes1_ultraCCC = mysqli_query($enlace, $query2_ultraCCC) or die(mysqli_error());
$row_datos_dependientes1_ultraCCC = mysqli_fetch_assoc($datos_dependientes1_ultraCCC);
$totalRows_datos_dependientes1_ultraCCC = mysqli_num_rows($datos_dependientes1_ultraCCC);


mysqli_close($enlace);

?>


 <?php do{?>                                


<span>&nbsp;&nbsp;&nbsp;&nbsp;<b>-
  <?php echo $row_datos_dependientes1_ultraCCC['alfabetico']; ?></b></span>: <?php echo $row_datos_dependientes1_ultraCCC['alfa_completo']; ?>.<br>

                                <?php } while ($row_datos_dependientes1_ultraCCC = mysqli_fetch_assoc($datos_dependientes1_ultraCCC)); ?> 

 <?php do{?>                                


<span>&nbsp;&nbsp;&nbsp;&nbsp;<b>-
  <?php echo $row_datos_dependientes1_ultra['literal']; ?></b></span>: <?php echo $row_datos_dependientes1_ultra['lit_completo']; ?>.<br>

                                <?php } while ($row_datos_dependientes1_ultra = mysqli_fetch_assoc($datos_dependientes1_ultra)); ?> 


</span>

                  </td>



                
            </tr>



 </table>




<?php

include("../../conectar.php");

              $querymodcabecc = "SELECT * FROM z_cabecera where id_cabecera = 1 ";

              $datos_modcabecc = mysqli_query($enlace, $querymodcabecc) or die(mysqli_error());
              
              $row_datos_modcabecc = mysqli_fetch_array($datos_modcabecc);

   mysqli_close($enlace);    

?>



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
           <td style="width:24%; font-size: 11px;" align="center" height="12"><?php echo $row_datos_modcabecc['sub_firma_2']; ?></td>
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

                                     echo $firstnam_el; ?> <?php echo $firstCharacterlastnam_el; ?>. </b></td>
      <td style="width:9%;" align="center" height="12"></td>
           <td style="width:24%; font-size: 11px;" align="center" height="12"><b><?php echo $row_datos_modcabecc['firma_2']; ?></b></td>
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

<?php
                }
                ?>




 </page>




















<?php

    $contentxx = ob_get_clean(); 

try
    {
        $hixx = $_POST["id_tituloxxx"];

        $html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356

        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("AlfNum_1er_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>