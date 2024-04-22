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




$periodo = "SELECT * FROM periodo_escolar";
$datos_periodo = mysqli_query($enlace, $periodo) or die(mysqli_error());
$row_datos_periodo = mysqli_fetch_assoc($datos_periodo);



$queryDF = "SELECT * FROM plantilla_contratados, plantilla_personal, cargos_all, plantilla_cargos
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
            and cargos_all.id_contrato = plantilla_contratados.id_contrato
            and plantilla_cargos.id_cargo = cargos_all.id_cargo
            and id_grupo = '1'
            and firma = '1'            
            LIMIT 1 ";

$datos_plantillaDF = mysqli_query($enlace, $queryDF) or die(mysqli_error());

$row_datos_plantillaDF = mysqli_fetch_assoc($datos_plantillaDF); 


if ($row_datos_plantillaDF['id_sexo'] == '1') {
    $sexiest = 'Directora';
}

else { $sexiest = 'Director'; }


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




while( $row_datos_control = mysqli_fetch_assoc($datos_control)){ 


?>




<?php



include("../../conectar.php");

$el_id_esssxx = $row_datos_control['id_estud'];
$el_idesito = $row_datos_control['id_estud'];

$query_YYY = "SELECT * FROM reg_estu_repre_all, reg_representante

         WHERE  reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = '$el_id_esssxx' ";

$datos_estudiantes_YYY = mysqli_query($enlace, $query_YYY) or die(mysqli_error());

$row_datos_estudiantes_YYY = mysqli_fetch_array($datos_estudiantes_YYY); 



$query_estu = "SELECT * FROM reg_estu_actual, divisiones, grados, secciones, d_ciudades, d_estados, reg_estudiantes, temporada_escolar 

         WHERE  divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and secciones.id_seccion = reg_estu_actual.id_seccion
         and reg_estudiantes.id_ciudad = d_ciudades.id_ciudad
         and reg_estudiantes.id_estado = d_estados.id_estado 
         and temporada_escolar.id_periodo_es = reg_estu_actual.cursa_actualmente
         
         and  reg_estu_actual.cursa_actualmente = '$ciclito'
         and reg_estudiantes.id_estud = '$el_idesito'
        
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC LIMIT 1 ";

$datos_estudiantes = mysqli_query($enlace, $query_estu) or die(mysqli_error());

$row_datos_estudiantes = mysqli_fetch_array($datos_estudiantes); 


    

mysqli_close($enlace);   ?>





<page_footer> 


    <TABLE class="basetabla" style="padding-top: 82px;">

<TR >


  <TD style="width:5%; height:auto; font-size: 14px; color:#404347;" align="center" > </TD>

<TD style="width:90%; height:auto; font-size: 14px; color:#404347;" align="center" >Av. <?php echo $row_datos_queryplantel['nombre_av']; ?> <?php echo $row_datos_queryplantel['dir_calle_sector']; ?>,
 <?php echo $row_datos_queryplantel['nombre_vivienda']; ?>  <?php echo $row_datos_queryplantel['dir_nombre_vivienda']; ?>.</TD>


  <TD style="width:5%;height:auto; font-size: 14px; color:#404347;" align="center" > </TD> 


</TR>

<TR >


  <TD style="width:5%; height:auto; font-size: 14px; color:#404347;" align="center" > </TD>

<TD style="width:90%; height:auto; font-size: 14px; color:#404347;" align="center" >Correo Electrónico: <?php echo $row_datos_queryplantel['email_plantel']; ?>  Telfs: <?php echo $row_datos_queryplantel['telf_plantel1']; ?>,  <?php echo $row_datos_queryplantel['telf_plantel2']; ?>. RIF. <?php echo $row_datos_queryplantel['rif_plantel']; ?></TD>


  <TD style="width:5%;height:auto; font-size: 14px; color:#404347;" align="center" > </TD> 


</TR>

</TABLE>

    

    </page_footer>






<?php

include("../../conectar.php");

              $querymodcabecc = "SELECT * FROM z_cabecera where id_cabecera = 1 ";

              $datos_modcabecc = mysqli_query($enlace, $querymodcabecc) or die(mysqli_error());
              
              $row_datos_modcabecc = mysqli_fetch_array($datos_modcabecc);

$cab_principal = $row_datos_modcabecc['cab_principal'];
$cab_secundaria = $row_datos_modcabecc['cab_secund'];

$cab_div1 = $row_datos_modcabecc['cab_div1'];
$cab_div2 = $row_datos_modcabecc['cab_div2'];

   mysqli_close($enlace);    


?>




<TABLE class="basetabla">

<TR >

  <TD style="width:15%;" align="center" ROWSPAN=6>
   <img style="width:115px; max-height: 115px;" src='../<?php echo $row_datos_queryplantel["logo_plantel"]; ?>'/>
  </TD>
           
<TD style="width:55%; height:auto; font-size: 12px; color:#404347;" align="left" ><?php echo $cab_principal; ?></TD>

<TD style="width:30%; margin-top: 4px;  height:auto; color: gray; font-size: 10px;" align="center"> </TD>

</TR>


<TR >  

<TD style="width:55%; height:auto; font-size: 12px; color:#404347; text-transform: uppercase;" align="left" ><?php echo $row_datos_queryplantel["nombre_plantel"]; ?></TD>

<TD style="width:30%; margin-top: 4px;  height:auto; color: gray; font-size: 10px;" align="center"> </TD>

</TR>


<TR >  

<TD style="width:55%; height:auto; font-size: 12px; color:#404347;" align="left" ><?php echo $cab_secundaria; ?></TD>

<TD style="width:30%; margin-top: 4px;  height:auto; color: gray; font-size: 10px;" align="center"> </TD>

</TR>



<TR >  

<TD style="width:55%; height:auto; font-size: 12px; color:#404347;" align="left" ><?php echo $cab_div1; ?> <?php echo $cab_div2; ?> <?php echo $row_datos_queryplantel["codigo_plantel"]; ?> </TD>

<TD style="width:30%; margin-top: 4px;  height:auto; color: gray; font-size: 10px;" align="center"> </TD>

</TR>


<TR >  

<TD style="width:55%; height:auto; font-size: 12px; color:#404347; text-transform: uppercase;" align="left" >
    <?php echo $row_datos_queryplantel['nombre_parroquia']; ?> - <?php echo $row_datos_queryplantel['nombre_ciudad']; ?> </TD>

<TD style="width:30%; margin-top: 4px;  height:auto; color: gray; font-size: 10px;" align="center"></TD>

</TR>


<TR >  

<TD style="width:55%; height:auto; font-size: 12px; color: grey; text-transform: uppercase;" align="left" >
    </TD>

<TD style="width:30%; margin-top: 4px;  height:auto; color: gray; font-size: 10px;" align="center"></TD>

</TR>


</TABLE>  





<br>



 <TABLE class="basetabla">


<TR>


  <TD style="width:99%; margin-top: 4px;  height:auto; font-size: 28px; text-decoration: underline; font-weight: bold;" align="center">INFORME DE EVALUACIÓN FINAL</TD> 

</TR>







 </TABLE>

























<!-- aqui -->





             



 <?php

               $a_ayuda = '';

                if ($row_datos_controlmat['a_suma'] !=1) {
                  $a_ayuda = '#';
               }

                ?>


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




                        <?php 
if ($row_datos_controlmat['a_convertir'] == 1 ) {  /* numerico */
      
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
    } /* cierre alfabetico */

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
   } /* cierre literal */
                    ?>        
                        

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
   } /* cierre alfabetico */

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
   } /* cierre literal */


 ?>

                    <?php 
if ($row_datos_controlmat['a_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['a_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M1_L2xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M1_L2xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M1_L2xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M1_L2xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M1_L2xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M1_L2xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M1_L2xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M1_L2xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M1_L2xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M1_L2xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M1_L2xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M1_L2xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['a_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M1_L2xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M1_L2xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M1_L2xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M1_L2xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M1_L2xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M1_L2xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M1_L2xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M1_L2xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M1_L2xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M1_L2xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M1_L2xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M1_L2xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M1_L2xx = $literal_formato_12;  } 
   } /* cierre literal */
                    ?> 



<?php 
if ($lap2_div_mat1 == '') {
    $lap2_pro_todo_M1_redond = '';
}
else {
    $lap2_pro_todo_M1 = $lap2_tot_mat1/$lap2_div_mat1;
 $lap2_pro_todo_M1_redondeado1 =number_format($lap2_pro_todo_M1, 1, '.', '');
    $lap2_pro_todo_M1_redond =number_format($lap2_pro_todo_M1_redondeado1);


    $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 + 1;   //  lleva el conteo de la division para el promedio del salon del 2do lapso
    $lap_suma_total_promedio_Lap_2 = $lap_suma_total_promedio_Lap_2 + $lap2_pro_todo_M1_redond;  // lleva el divisor para el promedio del salon 2do lapso


        if ($row_datos_controlmat['a_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_2 =  $lap_suma_total_promedio_Lap_2 - $lap2_pro_todo_M1_redond; $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 - 1;  }



    $lapso1_materia1_promedio_aula = $lap2_pro_todo_M1_redond;
    $lapso1_materia1_promedio_aula_divisor = $lapso2_materia1_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia1_aula_promedio =  $definitiva_materia1_aula_promedio + $lap2_pro_todo_M1_redond;
     $definitiva_materia1_aula_divisor = $definitiva_materia1_aula_divisor + 1;
}

if ($row_datos_controlmat['a_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['a_convertir'] == 2 ) {  /* alfabetico */
   if ($lap2_pro_todo_M1_redond >= $comparativo_formato_1) { $alfabetico_lap2_pro_todo_M1_redond = $alfabetico_formato_1;  }
   if ($lap2_pro_todo_M1_redond >= $comparativo_formato_2) { $alfabetico_lap2_pro_todo_M1_redond = $alfabetico_formato_2;  }
   if ($lap2_pro_todo_M1_redond >= $comparativo_formato_3) { $alfabetico_lap2_pro_todo_M1_redond = $alfabetico_formato_3;  }
   if ($lap2_pro_todo_M1_redond >= $comparativo_formato_4) { $alfabetico_lap2_pro_todo_M1_redond = $alfabetico_formato_4;  }
   if ($lap2_pro_todo_M1_redond >= $comparativo_formato_5) { $alfabetico_lap2_pro_todo_M1_redond = $alfabetico_formato_5;  }
   if ($lap2_pro_todo_M1_redond >= $comparativo_formato_6) { $alfabetico_lap2_pro_todo_M1_redond = $alfabetico_formato_6;  }
   if ($lap2_pro_todo_M1_redond >= $comparativo_formato_7) { $alfabetico_lap2_pro_todo_M1_redond = $alfabetico_formato_7;  }
   if ($lap2_pro_todo_M1_redond >= $comparativo_formato_8) { $alfabetico_lap2_pro_todo_M1_redond = $alfabetico_formato_8;  }
   if ($lap2_pro_todo_M1_redond >= $comparativo_formato_9) { $alfabetico_lap2_pro_todo_M1_redond = $alfabetico_formato_9;  }
   if ($lap2_pro_todo_M1_redond >= $comparativo_formato_10) { $alfabetico_lap2_pro_todo_M1_redond = $alfabetico_formato_10;  }
   if ($lap2_pro_todo_M1_redond >= $comparativo_formato_11) { $alfabetico_lap2_pro_todo_M1_redond = $alfabetico_formato_11;  }
   if ($lap2_pro_todo_M1_redond >= $comparativo_formato_12) { $alfabetico_lap2_pro_todo_M1_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['a_convertir'] == 3 ) {  /* literal */
  if ($lap2_pro_todo_M1_redond >= $comparativo_formato_1) { $literal_lap2_pro_todo_M1_redond = $literal_formato_1;  }
  if ($lap2_pro_todo_M1_redond >= $comparativo_formato_2) { $literal_lap2_pro_todo_M1_redond = $literal_formato_2;  }
  if ($lap2_pro_todo_M1_redond >= $comparativo_formato_3) { $literal_lap2_pro_todo_M1_redond = $literal_formato_3;  }
  if ($lap2_pro_todo_M1_redond >= $comparativo_formato_4) { $literal_lap2_pro_todo_M1_redond = $literal_formato_4;  }
  if ($lap2_pro_todo_M1_redond >= $comparativo_formato_5) { $literal_lap2_pro_todo_M1_redond = $literal_formato_5;  }
  if ($lap2_pro_todo_M1_redond >= $comparativo_formato_6) { $literal_lap2_pro_todo_M1_redond = $literal_formato_6;  }
  if ($lap2_pro_todo_M1_redond >= $comparativo_formato_7) { $literal_lap2_pro_todo_M1_redond = $literal_formato_7;  }
  if ($lap2_pro_todo_M1_redond >= $comparativo_formato_8) { $literal_lap2_pro_todo_M1_redond = $literal_formato_8;  }
  if ($lap2_pro_todo_M1_redond >= $comparativo_formato_9) { $literal_lap2_pro_todo_M1_redond = $literal_formato_9;  }
  if ($lap2_pro_todo_M1_redond >= $comparativo_formato_10) { $literal_lap2_pro_todo_M1_redond = $literal_formato_10;  }
  if ($lap2_pro_todo_M1_redond >= $comparativo_formato_11) { $literal_lap2_pro_todo_M1_redond = $literal_formato_11;  }
  if ($lap2_pro_todo_M1_redond >= $comparativo_formato_12) { $literal_lap2_pro_todo_M1_redond = $literal_formato_12;  } 
   } /* cierre literal */ ?>
                        
                    

                     <?php 
if ($row_datos_controlmat['a_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['a_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M1_L3xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M1_L3xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M1_L3xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M1_L3xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M1_L3xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M1_L3xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M1_L3xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M1_L3xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M1_L3xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M1_L3xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M1_L3xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M1_L3xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['a_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M1_L3xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M1_L3xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M1_L3xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M1_L3xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M1_L3xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M1_L3xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M1_L3xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M1_L3xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M1_L3xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M1_L3xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M1_L3xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M1_L3xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M1_L3xx = $literal_formato_12;  } 
   } /* cierre literal */
                    ?> 



                        

<?php 
if ($lap3_div_mat1 == '') {
    $lap3_pro_todo_M1_redond = '';
}
else {
    $lap3_pro_todo_M1 = $lap3_tot_mat1/$lap3_div_mat1;
 $lap3_pro_todo_M1_redondeado1 =number_format($lap3_pro_todo_M1, 1, '.', '');
    $lap3_pro_todo_M1_redond =number_format($lap3_pro_todo_M1_redondeado1);


    $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 + 1;   //  lleva el conteo de la division para el promedio del salon del 3er lapso
    $lap_suma_total_promedio_Lap_3 = $lap_suma_total_promedio_Lap_3 + $lap3_pro_todo_M1_redond;  // lleva el divisor para el promedio del salon 2do lapso


if ($row_datos_controlmat['a_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_3 =  $lap_suma_total_promedio_Lap_3 - $lap3_pro_todo_M1_redond; $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 - 1;  }


    $lapso3_materia1_promedio_aula = $lap3_pro_todo_M1_redond;
    $lapso3_materia1_promedio_aula_divisor = $lapso3_materia1_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia1_aula_promedio =  $definitiva_materia1_aula_promedio + $lap3_pro_todo_M1_redond;
     $definitiva_materia1_aula_divisor = $definitiva_materia1_aula_divisor + 1;
}

if ($row_datos_controlmat['a_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['a_convertir'] == 2 ) {  /* alfabetico */
   if ($lap3_pro_todo_M1_redond >= $comparativo_formato_1) { $alfabetico_lap3_pro_todo_M1_redond = $alfabetico_formato_1;  }
   if ($lap3_pro_todo_M1_redond >= $comparativo_formato_2) { $alfabetico_lap3_pro_todo_M1_redond = $alfabetico_formato_2;  }
   if ($lap3_pro_todo_M1_redond >= $comparativo_formato_3) { $alfabetico_lap3_pro_todo_M1_redond = $alfabetico_formato_3;  }
   if ($lap3_pro_todo_M1_redond >= $comparativo_formato_4) { $alfabetico_lap3_pro_todo_M1_redond = $alfabetico_formato_4;  }
   if ($lap3_pro_todo_M1_redond >= $comparativo_formato_5) { $alfabetico_lap3_pro_todo_M1_redond = $alfabetico_formato_5;  }
   if ($lap3_pro_todo_M1_redond >= $comparativo_formato_6) { $alfabetico_lap3_pro_todo_M1_redond = $alfabetico_formato_6;  }
   if ($lap3_pro_todo_M1_redond >= $comparativo_formato_7) { $alfabetico_lap3_pro_todo_M1_redond = $alfabetico_formato_7;  }
   if ($lap3_pro_todo_M1_redond >= $comparativo_formato_8) { $alfabetico_lap3_pro_todo_M1_redond = $alfabetico_formato_8;  }
   if ($lap3_pro_todo_M1_redond >= $comparativo_formato_9) { $alfabetico_lap3_pro_todo_M1_redond = $alfabetico_formato_9;  }
   if ($lap3_pro_todo_M1_redond >= $comparativo_formato_10) { $alfabetico_lap3_pro_todo_M1_redond = $alfabetico_formato_10;  }
   if ($lap3_pro_todo_M1_redond >= $comparativo_formato_11) { $alfabetico_lap3_pro_todo_M1_redond = $alfabetico_formato_11;  }
   if ($lap3_pro_todo_M1_redond >= $comparativo_formato_12) { $alfabetico_lap3_pro_todo_M1_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['a_convertir'] == 3 ) {  /* literal */
  if ($lap3_pro_todo_M1_redond >= $comparativo_formato_1) { $literal_lap3_pro_todo_M1_redond = $literal_formato_1;  }
  if ($lap3_pro_todo_M1_redond >= $comparativo_formato_2) { $literal_lap3_pro_todo_M1_redond = $literal_formato_2;  }
  if ($lap3_pro_todo_M1_redond >= $comparativo_formato_3) { $literal_lap3_pro_todo_M1_redond = $literal_formato_3;  }
  if ($lap3_pro_todo_M1_redond >= $comparativo_formato_4) { $literal_lap3_pro_todo_M1_redond = $literal_formato_4;  }
  if ($lap3_pro_todo_M1_redond >= $comparativo_formato_5) { $literal_lap3_pro_todo_M1_redond = $literal_formato_5;  }
  if ($lap3_pro_todo_M1_redond >= $comparativo_formato_6) { $literal_lap3_pro_todo_M1_redond = $literal_formato_6;  }
  if ($lap3_pro_todo_M1_redond >= $comparativo_formato_7) { $literal_lap3_pro_todo_M1_redond = $literal_formato_7;  }
  if ($lap3_pro_todo_M1_redond >= $comparativo_formato_8) { $literal_lap3_pro_todo_M1_redond = $literal_formato_8;  }
  if ($lap3_pro_todo_M1_redond >= $comparativo_formato_9) { $literal_lap3_pro_todo_M1_redond = $literal_formato_9;  }
  if ($lap3_pro_todo_M1_redond >= $comparativo_formato_10) { $literal_lap3_pro_todo_M1_redond = $literal_formato_10;  }
  if ($lap3_pro_todo_M1_redond >= $comparativo_formato_11) { $literal_lap3_pro_todo_M1_redond = $literal_formato_11;  }
  if ($lap3_pro_todo_M1_redond >= $comparativo_formato_12) { $literal_lap3_pro_todo_M1_redond = $literal_formato_12;  } 
   } /* cierre literal */ ?>   




<?php

if ($lap1_pro_todo_M1_redond== '' && $lap2_pro_todo_M1_redond== ''  && $lap3_pro_todo_M1_redond== '') {
    $totalcito_M1 = '';
    $tot_M1 = '';

}

else {
    $totalcito_M1 = $total_seven_con_Au_redon_M1_aproxxx + $row_datos_control_notasM1["nt_AuF"];
}
    
if ($row_datos_controlmat['a_convertir'] == 1 ) {  /* numerico */
      
} /* cierre numerico */
if ($row_datos_controlmat['a_convertir'] == 2 ) {  /* alfabetico */
   if ($totalcito_M1 >= $comparativo_formato_1) { $alfabetico_totalcito_M1 = $alfabetico_formato_1;  }
   if ($totalcito_M1 >= $comparativo_formato_2) { $alfabetico_totalcito_M1 = $alfabetico_formato_2;  }
   if ($totalcito_M1 >= $comparativo_formato_3) { $alfabetico_totalcito_M1 = $alfabetico_formato_3;  }
   if ($totalcito_M1 >= $comparativo_formato_4) { $alfabetico_totalcito_M1 = $alfabetico_formato_4;  }
   if ($totalcito_M1 >= $comparativo_formato_5) { $alfabetico_totalcito_M1 = $alfabetico_formato_5;  }
   if ($totalcito_M1 >= $comparativo_formato_6) { $alfabetico_totalcito_M1 = $alfabetico_formato_6;  }
   if ($totalcito_M1 >= $comparativo_formato_7) { $alfabetico_totalcito_M1 = $alfabetico_formato_7;  }
   if ($totalcito_M1 >= $comparativo_formato_8) { $alfabetico_totalcito_M1 = $alfabetico_formato_8;  }
   if ($totalcito_M1 >= $comparativo_formato_9) { $alfabetico_totalcito_M1 = $alfabetico_formato_9;  }
   if ($totalcito_M1 >= $comparativo_formato_10) { $alfabetico_totalcito_M1 = $alfabetico_formato_10;  }
   if ($totalcito_M1 >= $comparativo_formato_11) { $alfabetico_totalcito_M1 = $alfabetico_formato_11;  }
   if ($totalcito_M1 >= $comparativo_formato_12) { $alfabetico_totalcito_M1 = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['a_convertir'] == 3 ) {  /* literal */
  if ($totalcito_M1 >= $comparativo_formato_1) { $literal_totalcito_M1 = $literal_formato_1;  }
  if ($totalcito_M1 >= $comparativo_formato_2) { $literal_totalcito_M1 = $literal_formato_2;  }
  if ($totalcito_M1 >= $comparativo_formato_3) { $literal_totalcito_M1 = $literal_formato_3;  }
  if ($totalcito_M1 >= $comparativo_formato_4) { $literal_totalcito_M1 = $literal_formato_4;  }
  if ($totalcito_M1 >= $comparativo_formato_5) { $literal_totalcito_M1 = $literal_formato_5;  }
  if ($totalcito_M1 >= $comparativo_formato_6) { $literal_totalcito_M1 = $literal_formato_6;  }
  if ($totalcito_M1 >= $comparativo_formato_7) { $literal_totalcito_M1 = $literal_formato_7;  }
  if ($totalcito_M1 >= $comparativo_formato_8) { $literal_totalcito_M1 = $literal_formato_8;  }
  if ($totalcito_M1 >= $comparativo_formato_9) { $literal_totalcito_M1 = $literal_formato_9;  }
  if ($totalcito_M1 >= $comparativo_formato_10) { $literal_totalcito_M1 = $literal_formato_10;  }
  if ($totalcito_M1 >= $comparativo_formato_11) { $literal_totalcito_M1 = $literal_formato_11;  }
  if ($totalcito_M1 >= $comparativo_formato_12) { $literal_totalcito_M1 = $literal_formato_12;  } 
   } /* cierre literal */
                    ?> 
                         

                   
                        
<?php

$tot123_M1 = $definitiva_materia1_aula_promedio/$definitiva_materia1_aula_divisor;
if ($definitiva_materia1_aula_divisor == '0') {
    $tot123_M1_form = '';
}
else {
$tot123_M1_form_redondeado1 = number_format($tot123_M1, 1, '.', '');
    $tot123_M1_form = number_format($tot123_M1_form_redondeado1);

$promedio_total123 = $promedio_total123 +  $tot123_M1_form;     // acumula el promedio total
$promedio_total123_divisor = $promedio_total123_divisor + 1 ;


if ($row_datos_controlmat['a_suma'] != 1)
 {  $promedio_total123 =  $promedio_total123 - $tot123_M1_form; $promedio_total123_divisor =  $promedio_total123_divisor - 1;  }



}


if ($row_datos_controlmat['a_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['a_convertir'] == 2 ) {  /* alfabetico */
   if ($tot123_M1_form >= $comparativo_formato_1) { $alfabetico_tot123_M1_form = $alfabetico_formato_1;  }
   if ($tot123_M1_form >= $comparativo_formato_2) { $alfabetico_tot123_M1_form = $alfabetico_formato_2;  }
   if ($tot123_M1_form >= $comparativo_formato_3) { $alfabetico_tot123_M1_form = $alfabetico_formato_3;  }
   if ($tot123_M1_form >= $comparativo_formato_4) { $alfabetico_tot123_M1_form = $alfabetico_formato_4;  }
   if ($tot123_M1_form >= $comparativo_formato_5) { $alfabetico_tot123_M1_form = $alfabetico_formato_5;  }
   if ($tot123_M1_form >= $comparativo_formato_6) { $alfabetico_tot123_M1_form = $alfabetico_formato_6;  }
   if ($tot123_M1_form >= $comparativo_formato_7) { $alfabetico_tot123_M1_form = $alfabetico_formato_7;  }
   if ($tot123_M1_form >= $comparativo_formato_8) { $alfabetico_tot123_M1_form = $alfabetico_formato_8;  }
   if ($tot123_M1_form >= $comparativo_formato_9) { $alfabetico_tot123_M1_form = $alfabetico_formato_9;  }
   if ($tot123_M1_form >= $comparativo_formato_10) { $alfabetico_tot123_M1_form = $alfabetico_formato_10;  }
   if ($tot123_M1_form >= $comparativo_formato_11) { $alfabetico_tot123_M1_form = $alfabetico_formato_11;  }
   if ($tot123_M1_form >= $comparativo_formato_12) { $alfabetico_tot123_M1_form = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['a_convertir'] == 3 ) {  /* literal */
  if ($tot123_M1_form >= $comparativo_formato_1) { $literal_tot123_M1_form = $literal_formato_1;  }
  if ($tot123_M1_form >= $comparativo_formato_2) { $literal_tot123_M1_form = $literal_formato_2;  }
  if ($tot123_M1_form >= $comparativo_formato_3) { $literal_tot123_M1_form = $literal_formato_3;  }
  if ($tot123_M1_form >= $comparativo_formato_4) { $literal_tot123_M1_form = $literal_formato_4;  }
  if ($tot123_M1_form >= $comparativo_formato_5) { $literal_tot123_M1_form = $literal_formato_5;  }
  if ($tot123_M1_form >= $comparativo_formato_6) { $literal_tot123_M1_form = $literal_formato_6;  }
  if ($tot123_M1_form >= $comparativo_formato_7) { $literal_tot123_M1_form = $literal_formato_7;  }
  if ($tot123_M1_form >= $comparativo_formato_8) { $literal_tot123_M1_form = $literal_formato_8;  }
  if ($tot123_M1_form >= $comparativo_formato_9) { $literal_tot123_M1_form = $literal_formato_9;  }
  if ($tot123_M1_form >= $comparativo_formato_10) { $literal_tot123_M1_form = $literal_formato_10;  }
  if ($tot123_M1_form >= $comparativo_formato_11) { $literal_tot123_M1_form = $literal_formato_11;  }
  if ($tot123_M1_form >= $comparativo_formato_12) { $literal_tot123_M1_form = $literal_formato_12;  } 
     }

$definitiva_materia1_aula_promedio = '0';
$definitiva_materia1_aula_divisor = '0';

?>



                   



<?php  
$pruebass_M1_1 = $row_datos_control_notasM1["rev_uno"];
$pruebass_M1_2 = $row_datos_control_notasM1["rev_dos"];
$pruebass_redond_M1_1 =number_format($pruebass_M1_1);
$pruebass_redond_M1_2 =number_format($pruebass_M1_2); 
  ?>

<!-- nuevo añadido 1 -->
 
<?php

if ($pruebass_M1_1 != '') {  
    if ($row_datos_controlmat['a_convertir'] == 1 ) {  /* numerico */
           
    } /* cierre numerico */
    if ($row_datos_controlmat['a_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redond_M1_1 >= $comparativo_formato_1) { $alfabetico_pruebass_redond_M1_1 = $alfabetico_formato_1;  }
       if ($pruebass_redond_M1_1 >= $comparativo_formato_2) { $alfabetico_pruebass_redond_M1_1 = $alfabetico_formato_2;  }
       if ($pruebass_redond_M1_1 >= $comparativo_formato_3) { $alfabetico_pruebass_redond_M1_1 = $alfabetico_formato_3;  }
       if ($pruebass_redond_M1_1 >= $comparativo_formato_4) { $alfabetico_pruebass_redond_M1_1 = $alfabetico_formato_4;  }
       if ($pruebass_redond_M1_1 >= $comparativo_formato_5) { $alfabetico_pruebass_redond_M1_1 = $alfabetico_formato_5;  }
       if ($pruebass_redond_M1_1 >= $comparativo_formato_6) { $alfabetico_pruebass_redond_M1_1 = $alfabetico_formato_6;  }
       if ($pruebass_redond_M1_1 >= $comparativo_formato_7) { $alfabetico_pruebass_redond_M1_1 = $alfabetico_formato_7;  }
       if ($pruebass_redond_M1_1 >= $comparativo_formato_8) { $alfabetico_pruebass_redond_M1_1 = $alfabetico_formato_8;  }
       if ($pruebass_redond_M1_1 >= $comparativo_formato_9) { $alfabetico_pruebass_redond_M1_1 = $alfabetico_formato_9;  }
       if ($pruebass_redond_M1_1 >= $comparativo_formato_10) { $alfabetico_pruebass_redond_M1_1 = $alfabetico_formato_10;  }
       if ($pruebass_redond_M1_1 >= $comparativo_formato_11) { $alfabetico_pruebass_redond_M1_1 = $alfabetico_formato_11;  }
       if ($pruebass_redond_M1_1 >= $comparativo_formato_12) { $alfabetico_pruebass_redond_M1_1 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['a_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redond_M1_1 >= $comparativo_formato_1) { $literal_pruebass_redond_M1_1 = $literal_formato_1;  }
      if ($pruebass_redond_M1_1 >= $comparativo_formato_2) { $literal_pruebass_redond_M1_1 = $literal_formato_2;  }
      if ($pruebass_redond_M1_1 >= $comparativo_formato_3) { $literal_pruebass_redond_M1_1 = $literal_formato_3;  }
      if ($pruebass_redond_M1_1 >= $comparativo_formato_4) { $literal_pruebass_redond_M1_1 = $literal_formato_4;  }
      if ($pruebass_redond_M1_1 >= $comparativo_formato_5) { $literal_pruebass_redond_M1_1 = $literal_formato_5;  }
      if ($pruebass_redond_M1_1 >= $comparativo_formato_6) { $literal_pruebass_redond_M1_1 = $literal_formato_6;  }
      if ($pruebass_redond_M1_1 >= $comparativo_formato_7) { $literal_pruebass_redond_M1_1 = $literal_formato_7;  }
      if ($pruebass_redond_M1_1 >= $comparativo_formato_8) { $literal_pruebass_redond_M1_1 = $literal_formato_8;  }
      if ($pruebass_redond_M1_1 >= $comparativo_formato_9) { $literal_pruebass_redond_M1_1 = $literal_formato_9;  }
      if ($pruebass_redond_M1_1 >= $comparativo_formato_10) { $literal_pruebass_redond_M1_1 = $literal_formato_10;  }
      if ($pruebass_redond_M1_1 >= $comparativo_formato_11) { $literal_pruebass_redond_M1_1 = $literal_formato_11;  }
      if ($pruebass_redond_M1_1 >= $comparativo_formato_12) { $literal_pruebass_redond_M1_1 = $literal_formato_12;  } 
        }
}
?>  
   
   <?php

if ($pruebass_M1_2 != '') {  
    if ($row_datos_controlmat['a_convertir'] == 1 ) {  /* numerico */
           
    } /* cierre numerico */
    if ($row_datos_controlmat['a_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redond_M1_2 >= $comparativo_formato_1) { $alfabetico_pruebass_redond_M1_2 = $alfabetico_formato_1;  }
       if ($pruebass_redond_M1_2 >= $comparativo_formato_2) { $alfabetico_pruebass_redond_M1_2 = $alfabetico_formato_2;  }
       if ($pruebass_redond_M1_2 >= $comparativo_formato_3) { $alfabetico_pruebass_redond_M1_2 = $alfabetico_formato_3;  }
       if ($pruebass_redond_M1_2 >= $comparativo_formato_4) { $alfabetico_pruebass_redond_M1_2 = $alfabetico_formato_4;  }
       if ($pruebass_redond_M1_2 >= $comparativo_formato_5) { $alfabetico_pruebass_redond_M1_2 = $alfabetico_formato_5;  }
       if ($pruebass_redond_M1_2 >= $comparativo_formato_6) { $alfabetico_pruebass_redond_M1_2 = $alfabetico_formato_6;  }
       if ($pruebass_redond_M1_2 >= $comparativo_formato_7) { $alfabetico_pruebass_redond_M1_2 = $alfabetico_formato_7;  }
       if ($pruebass_redond_M1_2 >= $comparativo_formato_8) { $alfabetico_pruebass_redond_M1_2 = $alfabetico_formato_8;  }
       if ($pruebass_redond_M1_2 >= $comparativo_formato_9) { $alfabetico_pruebass_redond_M1_2 = $alfabetico_formato_9;  }
       if ($pruebass_redond_M1_2 >= $comparativo_formato_10) { $alfabetico_pruebass_redond_M1_2 = $alfabetico_formato_10;  }
       if ($pruebass_redond_M1_2 >= $comparativo_formato_11) { $alfabetico_pruebass_redond_M1_2 = $alfabetico_formato_11;  }
       if ($pruebass_redond_M1_2 >= $comparativo_formato_12) { $alfabetico_pruebass_redond_M1_2 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['a_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redond_M1_2 >= $comparativo_formato_1) { $literal_pruebass_redond_M1_2 = $literal_formato_1;  }
      if ($pruebass_redond_M1_2 >= $comparativo_formato_2) { $literal_pruebass_redond_M1_2 = $literal_formato_2;  }
      if ($pruebass_redond_M1_2 >= $comparativo_formato_3) { $literal_pruebass_redond_M1_2 = $literal_formato_3;  }
      if ($pruebass_redond_M1_2 >= $comparativo_formato_4) { $literal_pruebass_redond_M1_2 = $literal_formato_4;  }
      if ($pruebass_redond_M1_2 >= $comparativo_formato_5) { $literal_pruebass_redond_M1_2 = $literal_formato_5;  }
      if ($pruebass_redond_M1_2 >= $comparativo_formato_6) { $literal_pruebass_redond_M1_2 = $literal_formato_6;  }
      if ($pruebass_redond_M1_2 >= $comparativo_formato_7) { $literal_pruebass_redond_M1_2 = $literal_formato_7;  }
      if ($pruebass_redond_M1_2 >= $comparativo_formato_8) { $literal_pruebass_redond_M1_2 = $literal_formato_8;  }
      if ($pruebass_redond_M1_2 >= $comparativo_formato_9) { $literal_pruebass_redond_M1_2 = $literal_formato_9;  }
      if ($pruebass_redond_M1_2 >= $comparativo_formato_10) { $literal_pruebass_redond_M1_2 = $literal_formato_10;  }
      if ($pruebass_redond_M1_2 >= $comparativo_formato_11) { $literal_pruebass_redond_M1_2 = $literal_formato_11;  }
      if ($pruebass_redond_M1_2 >= $comparativo_formato_12) { $literal_pruebass_redond_M1_2 = $literal_formato_12;  } 
        }
}
?>    



<!-- fin -->




































 <?php

               $b_ayuda = '';

                if ($row_datos_controlmat['b_suma'] !=1) {
                  $b_ayuda = '#';
               }

               ?>

               <?php 

if ($row_datos_controlmat['b_convertir'] == 1 ) {  /* numerico */
       
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
    } /* cierre alfabetico */

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
 } /* cierre literal */


                    ?>

                        
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
   } /* cierre alfabetico */

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
   } /* cierre literal */ ?>




                    <?php 

if ($row_datos_controlmat['b_convertir'] == 1 ) {  /* numerico */
  
} /* cierre numerico */
if ($row_datos_controlmat['b_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M2_L2xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M2_L2xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M2_L2xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M2_L2xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M2_L2xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M2_L2xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M2_L2xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M2_L2xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M2_L2xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M2_L2xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M2_L2xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M2_L2xx = $alfabetico_formato_12;  }
   } /* cierre alfabetico */

if ($row_datos_controlmat['b_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M2_L2xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M2_L2xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M2_L2xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M2_L2xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M2_L2xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M2_L2xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M2_L2xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M2_L2xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M2_L2xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M2_L2xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M2_L2xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M2_L2xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M2_L2xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>


<?php 

if ($lap2_div_mat2 == '') {
    $lap2_pro_todo_M2_redond = '';
}

else {

    $lap2_pro_todo_M2 = $lap2_tot_mat2/$lap2_div_mat2;

  $lap2_pro_todo_M2_redondeado1 =number_format($lap2_pro_todo_M2, 1, '.', '');

    $lap2_pro_todo_M2_redond =number_format($lap2_pro_todo_M2_redondeado1);


    $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 + 1;   //  lleva el conteo de la division para el promedio del salon del 2do lapso
    $lap_suma_total_promedio_Lap_2 = $lap_suma_total_promedio_Lap_2 + $lap2_pro_todo_M2_redond;  // lleva el divisor para el promedio del salon 2do lapso


    if ($row_datos_controlmat['b_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_2 =  $lap_suma_total_promedio_Lap_2 - $lap2_pro_todo_M2_redond; $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 - 1;  }


    $lapso1_materia2_promedio_aula = $lap2_pro_todo_M2_redond;
    $lapso1_materia2_promedio_aula_divisor = $lapso1_materia2_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia2_aula_promedio =  $definitiva_materia2_aula_promedio + $lap2_pro_todo_M2_redond;
     $definitiva_materia2_aula_divisor = $definitiva_materia2_aula_divisor + 1;


}



if ($row_datos_controlmat['b_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['b_convertir'] == 2 ) {  /* alfabetico */
   if ($lap2_pro_todo_M2_redond >= $comparativo_formato_1) { $alfabetico_lap2_pro_todo_M2_redond = $alfabetico_formato_1;  }
   if ($lap2_pro_todo_M2_redond >= $comparativo_formato_2) { $alfabetico_lap2_pro_todo_M2_redond = $alfabetico_formato_2;  }
   if ($lap2_pro_todo_M2_redond >= $comparativo_formato_3) { $alfabetico_lap2_pro_todo_M2_redond = $alfabetico_formato_3;  }
   if ($lap2_pro_todo_M2_redond >= $comparativo_formato_4) { $alfabetico_lap2_pro_todo_M2_redond = $alfabetico_formato_4;  }
   if ($lap2_pro_todo_M2_redond >= $comparativo_formato_5) { $alfabetico_lap2_pro_todo_M2_redond = $alfabetico_formato_5;  }
   if ($lap2_pro_todo_M2_redond >= $comparativo_formato_6) { $alfabetico_lap2_pro_todo_M2_redond = $alfabetico_formato_6;  }
   if ($lap2_pro_todo_M2_redond >= $comparativo_formato_7) { $alfabetico_lap2_pro_todo_M2_redond = $alfabetico_formato_7;  }
   if ($lap2_pro_todo_M2_redond >= $comparativo_formato_8) { $alfabetico_lap2_pro_todo_M2_redond = $alfabetico_formato_8;  }
   if ($lap2_pro_todo_M2_redond >= $comparativo_formato_9) { $alfabetico_lap2_pro_todo_M2_redond = $alfabetico_formato_9;  }
   if ($lap2_pro_todo_M2_redond >= $comparativo_formato_10) { $alfabetico_lap2_pro_todo_M2_redond = $alfabetico_formato_10;  }
   if ($lap2_pro_todo_M2_redond >= $comparativo_formato_11) { $alfabetico_lap2_pro_todo_M2_redond = $alfabetico_formato_11;  }
   if ($lap2_pro_todo_M2_redond >= $comparativo_formato_12) { $alfabetico_lap2_pro_todo_M2_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['b_convertir'] == 3 ) {  /* literal */
  if ($lap2_pro_todo_M2_redond >= $comparativo_formato_1) { $literal_lap2_pro_todo_M2_redond = $literal_formato_1;  }
  if ($lap2_pro_todo_M2_redond >= $comparativo_formato_2) { $literal_lap2_pro_todo_M2_redond = $literal_formato_2;  }
  if ($lap2_pro_todo_M2_redond >= $comparativo_formato_3) { $literal_lap2_pro_todo_M2_redond = $literal_formato_3;  }
  if ($lap2_pro_todo_M2_redond >= $comparativo_formato_4) { $literal_lap2_pro_todo_M2_redond = $literal_formato_4;  }
  if ($lap2_pro_todo_M2_redond >= $comparativo_formato_5) { $literal_lap2_pro_todo_M2_redond = $literal_formato_5;  }
  if ($lap2_pro_todo_M2_redond >= $comparativo_formato_6) { $literal_lap2_pro_todo_M2_redond = $literal_formato_6;  }
  if ($lap2_pro_todo_M2_redond >= $comparativo_formato_7) { $literal_lap2_pro_todo_M2_redond = $literal_formato_7;  }
  if ($lap2_pro_todo_M2_redond >= $comparativo_formato_8) { $literal_lap2_pro_todo_M2_redond = $literal_formato_8;  }
  if ($lap2_pro_todo_M2_redond >= $comparativo_formato_9) { $literal_lap2_pro_todo_M2_redond = $literal_formato_9;  }
  if ($lap2_pro_todo_M2_redond >= $comparativo_formato_10) { $literal_lap2_pro_todo_M2_redond = $literal_formato_10;  }
  if ($lap2_pro_todo_M2_redond >= $comparativo_formato_11) { $literal_lap2_pro_todo_M2_redond = $literal_formato_11;  }
  if ($lap2_pro_todo_M2_redond >= $comparativo_formato_12) { $literal_lap2_pro_todo_M2_redond = $literal_formato_12;  } 
   } /* cierre literal */   ?>








                   <?php 

if ($row_datos_controlmat['b_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['b_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M2_L3xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M2_L3xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M2_L3xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M2_L3xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M2_L3xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M2_L3xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M2_L3xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M2_L3xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M2_L3xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M2_L3xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M2_L3xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M2_L3xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['b_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M2_L3xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M2_L3xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M2_L3xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M2_L3xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M2_L3xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M2_L3xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M2_L3xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M2_L3xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M2_L3xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M2_L3xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M2_L3xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M2_L3xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M2_L3xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>
                        

<?php 
if ($lap3_div_mat2 == '') {
    $lap3_pro_todo_M2_redond = '';
}
else {
    $lap3_pro_todo_M2 = $lap3_tot_mat2/$lap3_div_mat2;
 $lap3_pro_todo_M2_redondeado1 =number_format($lap3_pro_todo_M2, 1, '.', '');
    $lap3_pro_todo_M2_redond =number_format($lap3_pro_todo_M2_redondeado1);


    $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 + 1;   //  lleva el conteo de la division para el promedio del salon del 3er lapso
    $lap_suma_total_promedio_Lap_3 = $lap_suma_total_promedio_Lap_3 + $lap3_pro_todo_M2_redond;  // lleva el divisor para el promedio del salon 2do lapso


if ($row_datos_controlmat['b_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_3 =  $lap_suma_total_promedio_Lap_3 - $lap3_pro_todo_M2_redond; $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 - 1;  }



    $lapso3_materia2_promedio_aula = $lap3_pro_todo_M2_redond;
    $lapso3_materia2_promedio_aula_divisor = $lapso3_materia2_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia2_aula_promedio =  $definitiva_materia2_aula_promedio + $lap3_pro_todo_M2_redond;
     $definitiva_materia2_aula_divisor = $definitiva_materia2_aula_divisor + 1;
}

if ($row_datos_controlmat['b_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['b_convertir'] == 2 ) {  /* alfabetico */
   if ($lap3_pro_todo_M2_redond >= $comparativo_formato_1) { $alfabetico_lap3_pro_todo_M2_redond = $alfabetico_formato_1;  }
   if ($lap3_pro_todo_M2_redond >= $comparativo_formato_2) { $alfabetico_lap3_pro_todo_M2_redond = $alfabetico_formato_2;  }
   if ($lap3_pro_todo_M2_redond >= $comparativo_formato_3) { $alfabetico_lap3_pro_todo_M2_redond = $alfabetico_formato_3;  }
   if ($lap3_pro_todo_M2_redond >= $comparativo_formato_4) { $alfabetico_lap3_pro_todo_M2_redond = $alfabetico_formato_4;  }
   if ($lap3_pro_todo_M2_redond >= $comparativo_formato_5) { $alfabetico_lap3_pro_todo_M2_redond = $alfabetico_formato_5;  }
   if ($lap3_pro_todo_M2_redond >= $comparativo_formato_6) { $alfabetico_lap3_pro_todo_M2_redond = $alfabetico_formato_6;  }
   if ($lap3_pro_todo_M2_redond >= $comparativo_formato_7) { $alfabetico_lap3_pro_todo_M2_redond = $alfabetico_formato_7;  }
   if ($lap3_pro_todo_M2_redond >= $comparativo_formato_8) { $alfabetico_lap3_pro_todo_M2_redond = $alfabetico_formato_8;  }
   if ($lap3_pro_todo_M2_redond >= $comparativo_formato_9) { $alfabetico_lap3_pro_todo_M2_redond = $alfabetico_formato_9;  }
   if ($lap3_pro_todo_M2_redond >= $comparativo_formato_10) { $alfabetico_lap3_pro_todo_M2_redond = $alfabetico_formato_10;  }
   if ($lap3_pro_todo_M2_redond >= $comparativo_formato_11) { $alfabetico_lap3_pro_todo_M2_redond = $alfabetico_formato_11;  }
   if ($lap3_pro_todo_M2_redond >= $comparativo_formato_12) { $alfabetico_lap3_pro_todo_M2_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['b_convertir'] == 3 ) {  /* literal */
  if ($lap3_pro_todo_M2_redond >= $comparativo_formato_1) { $literal_lap3_pro_todo_M2_redond = $literal_formato_1;  }
  if ($lap3_pro_todo_M2_redond >= $comparativo_formato_2) { $literal_lap3_pro_todo_M2_redond = $literal_formato_2;  }
  if ($lap3_pro_todo_M2_redond >= $comparativo_formato_3) { $literal_lap3_pro_todo_M2_redond = $literal_formato_3;  }
  if ($lap3_pro_todo_M2_redond >= $comparativo_formato_4) { $literal_lap3_pro_todo_M2_redond = $literal_formato_4;  }
  if ($lap3_pro_todo_M2_redond >= $comparativo_formato_5) { $literal_lap3_pro_todo_M2_redond = $literal_formato_5;  }
  if ($lap3_pro_todo_M2_redond >= $comparativo_formato_6) { $literal_lap3_pro_todo_M2_redond = $literal_formato_6;  }
  if ($lap3_pro_todo_M2_redond >= $comparativo_formato_7) { $literal_lap3_pro_todo_M2_redond = $literal_formato_7;  }
  if ($lap3_pro_todo_M2_redond >= $comparativo_formato_8) { $literal_lap3_pro_todo_M2_redond = $literal_formato_8;  }
  if ($lap3_pro_todo_M2_redond >= $comparativo_formato_9) { $literal_lap3_pro_todo_M2_redond = $literal_formato_9;  }
  if ($lap3_pro_todo_M2_redond >= $comparativo_formato_10) { $literal_lap3_pro_todo_M2_redond = $literal_formato_10;  }
  if ($lap3_pro_todo_M2_redond >= $comparativo_formato_11) { $literal_lap3_pro_todo_M2_redond = $literal_formato_11;  }
  if ($lap3_pro_todo_M2_redond >= $comparativo_formato_12) { $literal_lap3_pro_todo_M2_redond = $literal_formato_12;  } 
  } /* cierre literal */ ?> 





                    <?php

if ($lap1_pro_todo_M2_redond== '' && $lap2_pro_todo_M2_redond== ''  && $lap3_pro_todo_M2_redond== '') {
    $totalcito_M2 = '';
    $tot_M2 = '';

}

else {
    $totalcito_M2 = $total_seven_con_Au_redon_M2_aproxxx + $row_datos_control_notasM2["nt_AuF"];
}


                    if ($row_datos_controlmat['b_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['b_convertir'] == 2 ) {  /* alfabetico */
   if ($totalcito_M2 >= $comparativo_formato_1) { $alfabetico_totalcito_M2 = $alfabetico_formato_1;  }
   if ($totalcito_M2 >= $comparativo_formato_2) { $alfabetico_totalcito_M2 = $alfabetico_formato_2;  }
   if ($totalcito_M2 >= $comparativo_formato_3) { $alfabetico_totalcito_M2 = $alfabetico_formato_3;  }
   if ($totalcito_M2 >= $comparativo_formato_4) { $alfabetico_totalcito_M2 = $alfabetico_formato_4;  }
   if ($totalcito_M2 >= $comparativo_formato_5) { $alfabetico_totalcito_M2 = $alfabetico_formato_5;  }
   if ($totalcito_M2 >= $comparativo_formato_6) { $alfabetico_totalcito_M2 = $alfabetico_formato_6;  }
   if ($totalcito_M2 >= $comparativo_formato_7) { $alfabetico_totalcito_M2 = $alfabetico_formato_7;  }
   if ($totalcito_M2 >= $comparativo_formato_8) { $alfabetico_totalcito_M2 = $alfabetico_formato_8;  }
   if ($totalcito_M2 >= $comparativo_formato_9) { $alfabetico_totalcito_M2 = $alfabetico_formato_9;  }
   if ($totalcito_M2 >= $comparativo_formato_10) { $alfabetico_totalcito_M2 = $alfabetico_formato_10;  }
   if ($totalcito_M2 >= $comparativo_formato_11) { $alfabetico_totalcito_M2 = $alfabetico_formato_11;  }
   if ($totalcito_M2 >= $comparativo_formato_12) { $alfabetico_totalcito_M2 = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['b_convertir'] == 3 ) {  /* literal */
  if ($totalcito_M2 >= $comparativo_formato_1) { $literal_totalcito_M2 = $literal_formato_1;  }
  if ($totalcito_M2 >= $comparativo_formato_2) { $literal_totalcito_M2 = $literal_formato_2;  }
  if ($totalcito_M2 >= $comparativo_formato_3) { $literal_totalcito_M2 = $literal_formato_3;  }
  if ($totalcito_M2 >= $comparativo_formato_4) { $literal_totalcito_M2 = $literal_formato_4;  }
  if ($totalcito_M2 >= $comparativo_formato_5) { $literal_totalcito_M2 = $literal_formato_5;  }
  if ($totalcito_M2 >= $comparativo_formato_6) { $literal_totalcito_M2 = $literal_formato_6;  }
  if ($totalcito_M2 >= $comparativo_formato_7) { $literal_totalcito_M2 = $literal_formato_7;  }
  if ($totalcito_M2 >= $comparativo_formato_8) { $literal_totalcito_M2 = $literal_formato_8;  }
  if ($totalcito_M2 >= $comparativo_formato_9) { $literal_totalcito_M2 = $literal_formato_9;  }
  if ($totalcito_M2 >= $comparativo_formato_10) { $literal_totalcito_M2 = $literal_formato_10;  }
  if ($totalcito_M2 >= $comparativo_formato_11) { $literal_totalcito_M2 = $literal_formato_11;  }
  if ($totalcito_M2 >= $comparativo_formato_12) { $literal_totalcito_M2 = $literal_formato_12;  } 
   } /* cierre literal */


  ?>
                         

                    












                   
                        
<?php

$tot123_M2 = $definitiva_materia2_aula_promedio/$definitiva_materia2_aula_divisor;

if ($definitiva_materia2_aula_divisor == '0') {
    $tot123_M1_form = '';
}

else {
$tot123_M2_form_redondeado1 = number_format($tot123_M2, 1, '.', '');
    $tot123_M2_form = number_format($tot123_M2_form_redondeado1);

$promedio_total123 = $promedio_total123 +  $tot123_M2_form;     // acumula el promedio total
$promedio_total123_divisor = $promedio_total123_divisor + 1 ;


if ($row_datos_controlmat['b_suma'] != 1)
 {  $promedio_total123 =  $promedio_total123 - $tot123_M2_form; $promedio_total123_divisor =  $promedio_total123_divisor - 1;  }


}



if ($row_datos_controlmat['b_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['b_convertir'] == 2 ) {  /* alfabetico */
   if ($tot123_M2_form >= $comparativo_formato_1) { $alfabetico_tot123_M2_form = $alfabetico_formato_1;  }
   if ($tot123_M2_form >= $comparativo_formato_2) { $alfabetico_tot123_M2_form = $alfabetico_formato_2;  }
   if ($tot123_M2_form >= $comparativo_formato_3) { $alfabetico_tot123_M2_form = $alfabetico_formato_3;  }
   if ($tot123_M2_form >= $comparativo_formato_4) { $alfabetico_tot123_M2_form = $alfabetico_formato_4;  }
   if ($tot123_M2_form >= $comparativo_formato_5) { $alfabetico_tot123_M2_form = $alfabetico_formato_5;  }
   if ($tot123_M2_form >= $comparativo_formato_6) { $alfabetico_tot123_M2_form = $alfabetico_formato_6;  }
   if ($tot123_M2_form >= $comparativo_formato_7) { $alfabetico_tot123_M2_form = $alfabetico_formato_7;  }
   if ($tot123_M2_form >= $comparativo_formato_8) { $alfabetico_tot123_M2_form = $alfabetico_formato_8;  }
   if ($tot123_M2_form >= $comparativo_formato_9) { $alfabetico_tot123_M2_form = $alfabetico_formato_9;  }
   if ($tot123_M2_form >= $comparativo_formato_10) { $alfabetico_tot123_M2_form = $alfabetico_formato_10;  }
   if ($tot123_M2_form >= $comparativo_formato_11) { $alfabetico_tot123_M2_form = $alfabetico_formato_11;  }
   if ($tot123_M2_form >= $comparativo_formato_12) { $alfabetico_tot123_M2_form = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['b_convertir'] == 3 ) {  /* literal */
  if ($tot123_M2_form >= $comparativo_formato_1) { $literal_tot123_M2_form = $literal_formato_1;  }
  if ($tot123_M2_form >= $comparativo_formato_2) { $literal_tot123_M2_form = $literal_formato_2;  }
  if ($tot123_M2_form >= $comparativo_formato_3) { $literal_tot123_M2_form = $literal_formato_3;  }
  if ($tot123_M2_form >= $comparativo_formato_4) { $literal_tot123_M2_form = $literal_formato_4;  }
  if ($tot123_M2_form >= $comparativo_formato_5) { $literal_tot123_M2_form = $literal_formato_5;  }
  if ($tot123_M2_form >= $comparativo_formato_6) { $literal_tot123_M2_form = $literal_formato_6;  }
  if ($tot123_M2_form >= $comparativo_formato_7) { $literal_tot123_M2_form = $literal_formato_7;  }
  if ($tot123_M2_form >= $comparativo_formato_8) { $literal_tot123_M2_form = $literal_formato_8;  }
  if ($tot123_M2_form >= $comparativo_formato_9) { $literal_tot123_M2_form = $literal_formato_9;  }
  if ($tot123_M2_form >= $comparativo_formato_10) { $literal_tot123_M2_form = $literal_formato_10;  }
  if ($tot123_M2_form >= $comparativo_formato_11) { $literal_tot123_M2_form = $literal_formato_11;  }
  if ($tot123_M2_form >= $comparativo_formato_12) { $literal_tot123_M2_form = $literal_formato_12;  } 
     }

$definitiva_materia2_aula_promedio = '0';
$definitiva_materia2_aula_divisor = '0';


?>




                   



<?php  
$pruebass_M2_1 = $row_datos_control_notasM2["rev_uno"];
$pruebass_M2_2 = $row_datos_control_notasM2["rev_dos"];
$pruebass_redond_M2_1 =number_format($pruebass_M2_1);
$pruebass_redond_M2_2 =number_format($pruebass_M2_2); 
  ?>

<!-- nuevo añadido 1 -->
  
<?php

if ($pruebass_M2_1 != '') {  
    if ($row_datos_controlmat['b_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['b_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redond_M2_1 >= $comparativo_formato_1) { $alfabetico_pruebass_redond_M2_1 = $alfabetico_formato_1;  }
       if ($pruebass_redond_M2_1 >= $comparativo_formato_2) { $alfabetico_pruebass_redond_M2_1 = $alfabetico_formato_2;  }
       if ($pruebass_redond_M2_1 >= $comparativo_formato_3) { $alfabetico_pruebass_redond_M2_1 = $alfabetico_formato_3;  }
       if ($pruebass_redond_M2_1 >= $comparativo_formato_4) { $alfabetico_pruebass_redond_M2_1 = $alfabetico_formato_4;  }
       if ($pruebass_redond_M2_1 >= $comparativo_formato_5) { $alfabetico_pruebass_redond_M2_1 = $alfabetico_formato_5;  }
       if ($pruebass_redond_M2_1 >= $comparativo_formato_6) { $alfabetico_pruebass_redond_M2_1 = $alfabetico_formato_6;  }
       if ($pruebass_redond_M2_1 >= $comparativo_formato_7) { $alfabetico_pruebass_redond_M2_1 = $alfabetico_formato_7;  }
       if ($pruebass_redond_M2_1 >= $comparativo_formato_8) { $alfabetico_pruebass_redond_M2_1 = $alfabetico_formato_8;  }
       if ($pruebass_redond_M2_1 >= $comparativo_formato_9) { $alfabetico_pruebass_redond_M2_1 = $alfabetico_formato_9;  }
       if ($pruebass_redond_M2_1 >= $comparativo_formato_10) { $alfabetico_pruebass_redond_M2_1 = $alfabetico_formato_10;  }
       if ($pruebass_redond_M2_1 >= $comparativo_formato_11) { $alfabetico_pruebass_redond_M2_1 = $alfabetico_formato_11;  }
       if ($pruebass_redond_M2_1 >= $comparativo_formato_12) { $alfabetico_pruebass_redond_M2_1 = $alfabetico_formato_12;  }
       } /* cierre alfabetico */
    if ($row_datos_controlmat['b_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redond_M2_1 >= $comparativo_formato_1) { $literal_pruebass_redond_M2_1 = $literal_formato_1;  }
      if ($pruebass_redond_M2_1 >= $comparativo_formato_2) { $literal_pruebass_redond_M2_1 = $literal_formato_2;  }
      if ($pruebass_redond_M2_1 >= $comparativo_formato_3) { $literal_pruebass_redond_M2_1 = $literal_formato_3;  }
      if ($pruebass_redond_M2_1 >= $comparativo_formato_4) { $literal_pruebass_redond_M2_1 = $literal_formato_4;  }
      if ($pruebass_redond_M2_1 >= $comparativo_formato_5) { $literal_pruebass_redond_M2_1 = $literal_formato_5;  }
      if ($pruebass_redond_M2_1 >= $comparativo_formato_6) { $literal_pruebass_redond_M2_1 = $literal_formato_6;  }
      if ($pruebass_redond_M2_1 >= $comparativo_formato_7) { $literal_pruebass_redond_M2_1 = $literal_formato_7;  }
      if ($pruebass_redond_M2_1 >= $comparativo_formato_8) { $literal_pruebass_redond_M2_1 = $literal_formato_8;  }
      if ($pruebass_redond_M2_1 >= $comparativo_formato_9) { $literal_pruebass_redond_M2_1 = $literal_formato_9;  }
      if ($pruebass_redond_M2_1 >= $comparativo_formato_10) { $literal_pruebass_redond_M2_1 = $literal_formato_10;  }
      if ($pruebass_redond_M2_1 >= $comparativo_formato_11) { $literal_pruebass_redond_M2_1 = $literal_formato_11;  }
      if ($pruebass_redond_M2_1 >= $comparativo_formato_12) { $literal_pruebass_redond_M2_1 = $literal_formato_12;  } 
        }
}
?> 
   
   <?php

if ($pruebass_M2_2 != '') {  
    if ($row_datos_controlmat['b_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['b_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redond_M2_2 >= $comparativo_formato_1) { $alfabetico_pruebass_redond_M2_2 = $alfabetico_formato_1;  }
       if ($pruebass_redond_M2_2 >= $comparativo_formato_2) { $alfabetico_pruebass_redond_M2_2 = $alfabetico_formato_2;  }
       if ($pruebass_redond_M2_2 >= $comparativo_formato_3) { $alfabetico_pruebass_redond_M2_2 = $alfabetico_formato_3;  }
       if ($pruebass_redond_M2_2 >= $comparativo_formato_4) { $alfabetico_pruebass_redond_M2_2 = $alfabetico_formato_4;  }
       if ($pruebass_redond_M2_2 >= $comparativo_formato_5) { $alfabetico_pruebass_redond_M2_2 = $alfabetico_formato_5;  }
       if ($pruebass_redond_M2_2 >= $comparativo_formato_6) { $alfabetico_pruebass_redond_M2_2 = $alfabetico_formato_6;  }
       if ($pruebass_redond_M2_2 >= $comparativo_formato_7) { $alfabetico_pruebass_redond_M2_2 = $alfabetico_formato_7;  }
       if ($pruebass_redond_M2_2 >= $comparativo_formato_8) { $alfabetico_pruebass_redond_M2_2 = $alfabetico_formato_8;  }
       if ($pruebass_redond_M2_2 >= $comparativo_formato_9) { $alfabetico_pruebass_redond_M2_2 = $alfabetico_formato_9;  }
       if ($pruebass_redond_M2_2 >= $comparativo_formato_10) { $alfabetico_pruebass_redond_M2_2 = $alfabetico_formato_10;  }
       if ($pruebass_redond_M2_2 >= $comparativo_formato_11) { $alfabetico_pruebass_redond_M2_2 = $alfabetico_formato_11;  }
       if ($pruebass_redond_M2_2 >= $comparativo_formato_12) { $alfabetico_pruebass_redond_M2_2 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['b_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redond_M2_2 >= $comparativo_formato_1) { $literal_pruebass_redond_M2_2 = $literal_formato_1;  }
      if ($pruebass_redond_M2_2 >= $comparativo_formato_2) { $literal_pruebass_redond_M2_2 = $literal_formato_2;  }
      if ($pruebass_redond_M2_2 >= $comparativo_formato_3) { $literal_pruebass_redond_M2_2 = $literal_formato_3;  }
      if ($pruebass_redond_M2_2 >= $comparativo_formato_4) { $literal_pruebass_redond_M2_2 = $literal_formato_4;  }
      if ($pruebass_redond_M2_2 >= $comparativo_formato_5) { $literal_pruebass_redond_M2_2 = $literal_formato_5;  }
      if ($pruebass_redond_M2_2 >= $comparativo_formato_6) { $literal_pruebass_redond_M2_2 = $literal_formato_6;  }
      if ($pruebass_redond_M2_2 >= $comparativo_formato_7) { $literal_pruebass_redond_M2_2 = $literal_formato_7;  }
      if ($pruebass_redond_M2_2 >= $comparativo_formato_8) { $literal_pruebass_redond_M2_2 = $literal_formato_8;  }
      if ($pruebass_redond_M2_2 >= $comparativo_formato_9) { $literal_pruebass_redond_M2_2 = $literal_formato_9;  }
      if ($pruebass_redond_M2_2 >= $comparativo_formato_10) { $literal_pruebass_redond_M2_2 = $literal_formato_10;  }
      if ($pruebass_redond_M2_2 >= $comparativo_formato_11) { $literal_pruebass_redond_M2_2 = $literal_formato_11;  }
      if ($pruebass_redond_M2_2 >= $comparativo_formato_12) { $literal_pruebass_redond_M2_2 = $literal_formato_12;  } 
         }
}
?> 












<?php

               $c_ayuda = '';

                if ($row_datos_controlmat['c_suma'] !=1) {
                  $c_ayuda = '#';
               }

               ?>

               <?php 

if ($row_datos_controlmat['c_convertir'] == 1 ) {  /* numerico */
       
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
    } /* cierre alfabetico */

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
 } /* cierre literal */


                    ?>

                        
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
   } /* cierre alfabetico */

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
   } /* cierre literal */ ?>




                    <?php 

if ($row_datos_controlmat['c_convertir'] == 1 ) {  /* numerico */
  
} /* cierre numerico */
if ($row_datos_controlmat['c_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M3_L2xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M3_L2xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M3_L2xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M3_L2xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M3_L2xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M3_L2xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M3_L2xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M3_L2xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M3_L2xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M3_L2xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M3_L2xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M3_L2xx = $alfabetico_formato_12;  }
   } /* cierre alfabetico */

if ($row_datos_controlmat['c_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M3_L2xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M3_L2xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M3_L2xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M3_L2xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M3_L2xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M3_L2xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M3_L2xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M3_L2xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M3_L2xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M3_L2xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M3_L2xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M3_L2xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M3_L2xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>


<?php 

if ($lap2_div_mat3 == '') {
    $lap2_pro_todo_M3_redond = '';
}

else {

    $lap2_pro_todo_M3 = $lap2_tot_mat3/$lap2_div_mat3;

  $lap2_pro_todo_M3_redondeado1 =number_format($lap2_pro_todo_M3, 1, '.', '');

    $lap2_pro_todo_M3_redond =number_format($lap2_pro_todo_M3_redondeado1);


    $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 + 1;   //  lleva el conteo de la division para el promedio del salon del 2do lapso
    $lap_suma_total_promedio_Lap_2 = $lap_suma_total_promedio_Lap_2 + $lap2_pro_todo_M3_redond;  // lleva el divisor para el promedio del salon 2do lapso


    if ($row_datos_controlmat['c_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_2 =  $lap_suma_total_promedio_Lap_2 - $lap2_pro_todo_M3_redond; $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 - 1;  }


    $lapso1_materia3_promedio_aula = $lap2_pro_todo_M3_redond;
    $lapso1_materia3_promedio_aula_divisor = $lapso1_materia3_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia3_aula_promedio =  $definitiva_materia3_aula_promedio + $lap2_pro_todo_M3_redond;
     $definitiva_materia3_aula_divisor = $definitiva_materia3_aula_divisor + 1;


}



if ($row_datos_controlmat['c_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['c_convertir'] == 2 ) {  /* alfabetico */
   if ($lap2_pro_todo_M3_redond >= $comparativo_formato_1) { $alfabetico_lap2_pro_todo_M3_redond = $alfabetico_formato_1;  }
   if ($lap2_pro_todo_M3_redond >= $comparativo_formato_2) { $alfabetico_lap2_pro_todo_M3_redond = $alfabetico_formato_2;  }
   if ($lap2_pro_todo_M3_redond >= $comparativo_formato_3) { $alfabetico_lap2_pro_todo_M3_redond = $alfabetico_formato_3;  }
   if ($lap2_pro_todo_M3_redond >= $comparativo_formato_4) { $alfabetico_lap2_pro_todo_M3_redond = $alfabetico_formato_4;  }
   if ($lap2_pro_todo_M3_redond >= $comparativo_formato_5) { $alfabetico_lap2_pro_todo_M3_redond = $alfabetico_formato_5;  }
   if ($lap2_pro_todo_M3_redond >= $comparativo_formato_6) { $alfabetico_lap2_pro_todo_M3_redond = $alfabetico_formato_6;  }
   if ($lap2_pro_todo_M3_redond >= $comparativo_formato_7) { $alfabetico_lap2_pro_todo_M3_redond = $alfabetico_formato_7;  }
   if ($lap2_pro_todo_M3_redond >= $comparativo_formato_8) { $alfabetico_lap2_pro_todo_M3_redond = $alfabetico_formato_8;  }
   if ($lap2_pro_todo_M3_redond >= $comparativo_formato_9) { $alfabetico_lap2_pro_todo_M3_redond = $alfabetico_formato_9;  }
   if ($lap2_pro_todo_M3_redond >= $comparativo_formato_10) { $alfabetico_lap2_pro_todo_M3_redond = $alfabetico_formato_10;  }
   if ($lap2_pro_todo_M3_redond >= $comparativo_formato_11) { $alfabetico_lap2_pro_todo_M3_redond = $alfabetico_formato_11;  }
   if ($lap2_pro_todo_M3_redond >= $comparativo_formato_12) { $alfabetico_lap2_pro_todo_M3_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['c_convertir'] == 3 ) {  /* literal */
  if ($lap2_pro_todo_M3_redond >= $comparativo_formato_1) { $literal_lap2_pro_todo_M3_redond = $literal_formato_1;  }
  if ($lap2_pro_todo_M3_redond >= $comparativo_formato_2) { $literal_lap2_pro_todo_M3_redond = $literal_formato_2;  }
  if ($lap2_pro_todo_M3_redond >= $comparativo_formato_3) { $literal_lap2_pro_todo_M3_redond = $literal_formato_3;  }
  if ($lap2_pro_todo_M3_redond >= $comparativo_formato_4) { $literal_lap2_pro_todo_M3_redond = $literal_formato_4;  }
  if ($lap2_pro_todo_M3_redond >= $comparativo_formato_5) { $literal_lap2_pro_todo_M3_redond = $literal_formato_5;  }
  if ($lap2_pro_todo_M3_redond >= $comparativo_formato_6) { $literal_lap2_pro_todo_M3_redond = $literal_formato_6;  }
  if ($lap2_pro_todo_M3_redond >= $comparativo_formato_7) { $literal_lap2_pro_todo_M3_redond = $literal_formato_7;  }
  if ($lap2_pro_todo_M3_redond >= $comparativo_formato_8) { $literal_lap2_pro_todo_M3_redond = $literal_formato_8;  }
  if ($lap2_pro_todo_M3_redond >= $comparativo_formato_9) { $literal_lap2_pro_todo_M3_redond = $literal_formato_9;  }
  if ($lap2_pro_todo_M3_redond >= $comparativo_formato_10) { $literal_lap2_pro_todo_M3_redond = $literal_formato_10;  }
  if ($lap2_pro_todo_M3_redond >= $comparativo_formato_11) { $literal_lap2_pro_todo_M3_redond = $literal_formato_11;  }
  if ($lap2_pro_todo_M3_redond >= $comparativo_formato_12) { $literal_lap2_pro_todo_M3_redond = $literal_formato_12;  } 
   } /* cierre literal */   ?>








                   <?php 

if ($row_datos_controlmat['c_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['c_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M3_L3xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M3_L3xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M3_L3xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M3_L3xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M3_L3xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M3_L3xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M3_L3xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M3_L3xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M3_L3xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M3_L3xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M3_L3xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M3_L3xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['c_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M3_L3xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M3_L3xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M3_L3xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M3_L3xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M3_L3xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M3_L3xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M3_L3xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M3_L3xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M3_L3xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M3_L3xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M3_L3xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M3_L3xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M3_L3xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>
                        

<?php 
if ($lap3_div_mat3 == '') {
    $lap3_pro_todo_M3_redond = '';
}
else {
    $lap3_pro_todo_M3 = $lap3_tot_mat3/$lap3_div_mat3;
 $lap3_pro_todo_M3_redondeado1 =number_format($lap3_pro_todo_M3, 1, '.', '');
    $lap3_pro_todo_M3_redond =number_format($lap3_pro_todo_M3_redondeado1);


    $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 + 1;   //  lleva el conteo de la division para el promedio del salon del 3er lapso
    $lap_suma_total_promedio_Lap_3 = $lap_suma_total_promedio_Lap_3 + $lap3_pro_todo_M3_redond;  // lleva el divisor para el promedio del salon 2do lapso


if ($row_datos_controlmat['c_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_3 =  $lap_suma_total_promedio_Lap_3 - $lap3_pro_todo_M3_redond; $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 - 1;  }



    $lapso3_materia3_promedio_aula = $lap3_pro_todo_M3_redond;
    $lapso3_materia3_promedio_aula_divisor = $lapso3_materia3_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia3_aula_promedio =  $definitiva_materia3_aula_promedio + $lap3_pro_todo_M3_redond;
     $definitiva_materia3_aula_divisor = $definitiva_materia3_aula_divisor + 1;
}

if ($row_datos_controlmat['c_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['c_convertir'] == 2 ) {  /* alfabetico */
   if ($lap3_pro_todo_M3_redond >= $comparativo_formato_1) { $alfabetico_lap3_pro_todo_M3_redond = $alfabetico_formato_1;  }
   if ($lap3_pro_todo_M3_redond >= $comparativo_formato_2) { $alfabetico_lap3_pro_todo_M3_redond = $alfabetico_formato_2;  }
   if ($lap3_pro_todo_M3_redond >= $comparativo_formato_3) { $alfabetico_lap3_pro_todo_M3_redond = $alfabetico_formato_3;  }
   if ($lap3_pro_todo_M3_redond >= $comparativo_formato_4) { $alfabetico_lap3_pro_todo_M3_redond = $alfabetico_formato_4;  }
   if ($lap3_pro_todo_M3_redond >= $comparativo_formato_5) { $alfabetico_lap3_pro_todo_M3_redond = $alfabetico_formato_5;  }
   if ($lap3_pro_todo_M3_redond >= $comparativo_formato_6) { $alfabetico_lap3_pro_todo_M3_redond = $alfabetico_formato_6;  }
   if ($lap3_pro_todo_M3_redond >= $comparativo_formato_7) { $alfabetico_lap3_pro_todo_M3_redond = $alfabetico_formato_7;  }
   if ($lap3_pro_todo_M3_redond >= $comparativo_formato_8) { $alfabetico_lap3_pro_todo_M3_redond = $alfabetico_formato_8;  }
   if ($lap3_pro_todo_M3_redond >= $comparativo_formato_9) { $alfabetico_lap3_pro_todo_M3_redond = $alfabetico_formato_9;  }
   if ($lap3_pro_todo_M3_redond >= $comparativo_formato_10) { $alfabetico_lap3_pro_todo_M3_redond = $alfabetico_formato_10;  }
   if ($lap3_pro_todo_M3_redond >= $comparativo_formato_11) { $alfabetico_lap3_pro_todo_M3_redond = $alfabetico_formato_11;  }
   if ($lap3_pro_todo_M3_redond >= $comparativo_formato_12) { $alfabetico_lap3_pro_todo_M3_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['c_convertir'] == 3 ) {  /* literal */
  if ($lap3_pro_todo_M3_redond >= $comparativo_formato_1) { $literal_lap3_pro_todo_M3_redond = $literal_formato_1;  }
  if ($lap3_pro_todo_M3_redond >= $comparativo_formato_2) { $literal_lap3_pro_todo_M3_redond = $literal_formato_2;  }
  if ($lap3_pro_todo_M3_redond >= $comparativo_formato_3) { $literal_lap3_pro_todo_M3_redond = $literal_formato_3;  }
  if ($lap3_pro_todo_M3_redond >= $comparativo_formato_4) { $literal_lap3_pro_todo_M3_redond = $literal_formato_4;  }
  if ($lap3_pro_todo_M3_redond >= $comparativo_formato_5) { $literal_lap3_pro_todo_M3_redond = $literal_formato_5;  }
  if ($lap3_pro_todo_M3_redond >= $comparativo_formato_6) { $literal_lap3_pro_todo_M3_redond = $literal_formato_6;  }
  if ($lap3_pro_todo_M3_redond >= $comparativo_formato_7) { $literal_lap3_pro_todo_M3_redond = $literal_formato_7;  }
  if ($lap3_pro_todo_M3_redond >= $comparativo_formato_8) { $literal_lap3_pro_todo_M3_redond = $literal_formato_8;  }
  if ($lap3_pro_todo_M3_redond >= $comparativo_formato_9) { $literal_lap3_pro_todo_M3_redond = $literal_formato_9;  }
  if ($lap3_pro_todo_M3_redond >= $comparativo_formato_10) { $literal_lap3_pro_todo_M3_redond = $literal_formato_10;  }
  if ($lap3_pro_todo_M3_redond >= $comparativo_formato_11) { $literal_lap3_pro_todo_M3_redond = $literal_formato_11;  }
  if ($lap3_pro_todo_M3_redond >= $comparativo_formato_12) { $literal_lap3_pro_todo_M3_redond = $literal_formato_12;  } 
  } /* cierre literal */ ?> 





                    <?php

if ($lap1_pro_todo_M3_redond== '' && $lap2_pro_todo_M3_redond== ''  && $lap3_pro_todo_M3_redond== '') {
    $totalcito_M3 = '';
    $tot_M3 = '';

}

else {
    $totalcito_M3 = $total_seven_con_Au_redon_M3_aproxxx + $row_datos_control_notasM3["nt_AuF"];
}


                    if ($row_datos_controlmat['c_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['c_convertir'] == 2 ) {  /* alfabetico */
   if ($totalcito_M3 >= $comparativo_formato_1) { $alfabetico_totalcito_M3 = $alfabetico_formato_1;  }
   if ($totalcito_M3 >= $comparativo_formato_2) { $alfabetico_totalcito_M3 = $alfabetico_formato_2;  }
   if ($totalcito_M3 >= $comparativo_formato_3) { $alfabetico_totalcito_M3 = $alfabetico_formato_3;  }
   if ($totalcito_M3 >= $comparativo_formato_4) { $alfabetico_totalcito_M3 = $alfabetico_formato_4;  }
   if ($totalcito_M3 >= $comparativo_formato_5) { $alfabetico_totalcito_M3 = $alfabetico_formato_5;  }
   if ($totalcito_M3 >= $comparativo_formato_6) { $alfabetico_totalcito_M3 = $alfabetico_formato_6;  }
   if ($totalcito_M3 >= $comparativo_formato_7) { $alfabetico_totalcito_M3 = $alfabetico_formato_7;  }
   if ($totalcito_M3 >= $comparativo_formato_8) { $alfabetico_totalcito_M3 = $alfabetico_formato_8;  }
   if ($totalcito_M3 >= $comparativo_formato_9) { $alfabetico_totalcito_M3 = $alfabetico_formato_9;  }
   if ($totalcito_M3 >= $comparativo_formato_10) { $alfabetico_totalcito_M3 = $alfabetico_formato_10;  }
   if ($totalcito_M3 >= $comparativo_formato_11) { $alfabetico_totalcito_M3 = $alfabetico_formato_11;  }
   if ($totalcito_M3 >= $comparativo_formato_12) { $alfabetico_totalcito_M3 = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['c_convertir'] == 3 ) {  /* literal */
  if ($totalcito_M3 >= $comparativo_formato_1) { $literal_totalcito_M3 = $literal_formato_1;  }
  if ($totalcito_M3 >= $comparativo_formato_2) { $literal_totalcito_M3 = $literal_formato_2;  }
  if ($totalcito_M3 >= $comparativo_formato_3) { $literal_totalcito_M3 = $literal_formato_3;  }
  if ($totalcito_M3 >= $comparativo_formato_4) { $literal_totalcito_M3 = $literal_formato_4;  }
  if ($totalcito_M3 >= $comparativo_formato_5) { $literal_totalcito_M3 = $literal_formato_5;  }
  if ($totalcito_M3 >= $comparativo_formato_6) { $literal_totalcito_M3 = $literal_formato_6;  }
  if ($totalcito_M3 >= $comparativo_formato_7) { $literal_totalcito_M3 = $literal_formato_7;  }
  if ($totalcito_M3 >= $comparativo_formato_8) { $literal_totalcito_M3 = $literal_formato_8;  }
  if ($totalcito_M3 >= $comparativo_formato_9) { $literal_totalcito_M3 = $literal_formato_9;  }
  if ($totalcito_M3 >= $comparativo_formato_10) { $literal_totalcito_M3 = $literal_formato_10;  }
  if ($totalcito_M3 >= $comparativo_formato_11) { $literal_totalcito_M3 = $literal_formato_11;  }
  if ($totalcito_M3 >= $comparativo_formato_12) { $literal_totalcito_M3 = $literal_formato_12;  } 
   } /* cierre literal */


  ?>
                         

                    












                   
                        
<?php

$tot123_M3 = $definitiva_materia3_aula_promedio/$definitiva_materia3_aula_divisor;

if ($definitiva_materia3_aula_divisor == '0') {
    $tot123_M1_form = '';
}

else {
$tot123_M3_form_redondeado1 = number_format($tot123_M3, 1, '.', '');
    $tot123_M3_form = number_format($tot123_M3_form_redondeado1);

$promedio_total123 = $promedio_total123 +  $tot123_M3_form;     // acumula el promedio total
$promedio_total123_divisor = $promedio_total123_divisor + 1 ;


if ($row_datos_controlmat['c_suma'] != 1)
 {  $promedio_total123 =  $promedio_total123 - $tot123_M3_form; $promedio_total123_divisor =  $promedio_total123_divisor - 1;  }


}



if ($row_datos_controlmat['c_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['c_convertir'] == 2 ) {  /* alfabetico */
   if ($tot123_M3_form >= $comparativo_formato_1) { $alfabetico_tot123_M3_form = $alfabetico_formato_1;  }
   if ($tot123_M3_form >= $comparativo_formato_2) { $alfabetico_tot123_M3_form = $alfabetico_formato_2;  }
   if ($tot123_M3_form >= $comparativo_formato_3) { $alfabetico_tot123_M3_form = $alfabetico_formato_3;  }
   if ($tot123_M3_form >= $comparativo_formato_4) { $alfabetico_tot123_M3_form = $alfabetico_formato_4;  }
   if ($tot123_M3_form >= $comparativo_formato_5) { $alfabetico_tot123_M3_form = $alfabetico_formato_5;  }
   if ($tot123_M3_form >= $comparativo_formato_6) { $alfabetico_tot123_M3_form = $alfabetico_formato_6;  }
   if ($tot123_M3_form >= $comparativo_formato_7) { $alfabetico_tot123_M3_form = $alfabetico_formato_7;  }
   if ($tot123_M3_form >= $comparativo_formato_8) { $alfabetico_tot123_M3_form = $alfabetico_formato_8;  }
   if ($tot123_M3_form >= $comparativo_formato_9) { $alfabetico_tot123_M3_form = $alfabetico_formato_9;  }
   if ($tot123_M3_form >= $comparativo_formato_10) { $alfabetico_tot123_M3_form = $alfabetico_formato_10;  }
   if ($tot123_M3_form >= $comparativo_formato_11) { $alfabetico_tot123_M3_form = $alfabetico_formato_11;  }
   if ($tot123_M3_form >= $comparativo_formato_12) { $alfabetico_tot123_M3_form = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['c_convertir'] == 3 ) {  /* literal */
  if ($tot123_M3_form >= $comparativo_formato_1) { $literal_tot123_M3_form = $literal_formato_1;  }
  if ($tot123_M3_form >= $comparativo_formato_2) { $literal_tot123_M3_form = $literal_formato_2;  }
  if ($tot123_M3_form >= $comparativo_formato_3) { $literal_tot123_M3_form = $literal_formato_3;  }
  if ($tot123_M3_form >= $comparativo_formato_4) { $literal_tot123_M3_form = $literal_formato_4;  }
  if ($tot123_M3_form >= $comparativo_formato_5) { $literal_tot123_M3_form = $literal_formato_5;  }
  if ($tot123_M3_form >= $comparativo_formato_6) { $literal_tot123_M3_form = $literal_formato_6;  }
  if ($tot123_M3_form >= $comparativo_formato_7) { $literal_tot123_M3_form = $literal_formato_7;  }
  if ($tot123_M3_form >= $comparativo_formato_8) { $literal_tot123_M3_form = $literal_formato_8;  }
  if ($tot123_M3_form >= $comparativo_formato_9) { $literal_tot123_M3_form = $literal_formato_9;  }
  if ($tot123_M3_form >= $comparativo_formato_10) { $literal_tot123_M3_form = $literal_formato_10;  }
  if ($tot123_M3_form >= $comparativo_formato_11) { $literal_tot123_M3_form = $literal_formato_11;  }
  if ($tot123_M3_form >= $comparativo_formato_12) { $literal_tot123_M3_form = $literal_formato_12;  } 
     }

$definitiva_materia3_aula_promedio = '0';
$definitiva_materia3_aula_divisor = '0';


?>




                   



<?php  
$pruebass_M3_1 = $row_datos_control_notasM3["rev_uno"];
$pruebass_M3_2 = $row_datos_control_notasM3["rev_dos"];
$pruebass_redond_M3_1 =number_format($pruebass_M3_1);
$pruebass_redond_M3_2 =number_format($pruebass_M3_2); 
  ?>

<!-- nuevo añadido 1 -->
  
<?php

if ($pruebass_M3_1 != '') {  
    if ($row_datos_controlmat['c_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['c_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redond_M3_1 >= $comparativo_formato_1) { $alfabetico_pruebass_redond_M3_1 = $alfabetico_formato_1;  }
       if ($pruebass_redond_M3_1 >= $comparativo_formato_2) { $alfabetico_pruebass_redond_M3_1 = $alfabetico_formato_2;  }
       if ($pruebass_redond_M3_1 >= $comparativo_formato_3) { $alfabetico_pruebass_redond_M3_1 = $alfabetico_formato_3;  }
       if ($pruebass_redond_M3_1 >= $comparativo_formato_4) { $alfabetico_pruebass_redond_M3_1 = $alfabetico_formato_4;  }
       if ($pruebass_redond_M3_1 >= $comparativo_formato_5) { $alfabetico_pruebass_redond_M3_1 = $alfabetico_formato_5;  }
       if ($pruebass_redond_M3_1 >= $comparativo_formato_6) { $alfabetico_pruebass_redond_M3_1 = $alfabetico_formato_6;  }
       if ($pruebass_redond_M3_1 >= $comparativo_formato_7) { $alfabetico_pruebass_redond_M3_1 = $alfabetico_formato_7;  }
       if ($pruebass_redond_M3_1 >= $comparativo_formato_8) { $alfabetico_pruebass_redond_M3_1 = $alfabetico_formato_8;  }
       if ($pruebass_redond_M3_1 >= $comparativo_formato_9) { $alfabetico_pruebass_redond_M3_1 = $alfabetico_formato_9;  }
       if ($pruebass_redond_M3_1 >= $comparativo_formato_10) { $alfabetico_pruebass_redond_M3_1 = $alfabetico_formato_10;  }
       if ($pruebass_redond_M3_1 >= $comparativo_formato_11) { $alfabetico_pruebass_redond_M3_1 = $alfabetico_formato_11;  }
       if ($pruebass_redond_M3_1 >= $comparativo_formato_12) { $alfabetico_pruebass_redond_M3_1 = $alfabetico_formato_12;  }
       } /* cierre alfabetico */
    if ($row_datos_controlmat['c_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redond_M3_1 >= $comparativo_formato_1) { $literal_pruebass_redond_M3_1 = $literal_formato_1;  }
      if ($pruebass_redond_M3_1 >= $comparativo_formato_2) { $literal_pruebass_redond_M3_1 = $literal_formato_2;  }
      if ($pruebass_redond_M3_1 >= $comparativo_formato_3) { $literal_pruebass_redond_M3_1 = $literal_formato_3;  }
      if ($pruebass_redond_M3_1 >= $comparativo_formato_4) { $literal_pruebass_redond_M3_1 = $literal_formato_4;  }
      if ($pruebass_redond_M3_1 >= $comparativo_formato_5) { $literal_pruebass_redond_M3_1 = $literal_formato_5;  }
      if ($pruebass_redond_M3_1 >= $comparativo_formato_6) { $literal_pruebass_redond_M3_1 = $literal_formato_6;  }
      if ($pruebass_redond_M3_1 >= $comparativo_formato_7) { $literal_pruebass_redond_M3_1 = $literal_formato_7;  }
      if ($pruebass_redond_M3_1 >= $comparativo_formato_8) { $literal_pruebass_redond_M3_1 = $literal_formato_8;  }
      if ($pruebass_redond_M3_1 >= $comparativo_formato_9) { $literal_pruebass_redond_M3_1 = $literal_formato_9;  }
      if ($pruebass_redond_M3_1 >= $comparativo_formato_10) { $literal_pruebass_redond_M3_1 = $literal_formato_10;  }
      if ($pruebass_redond_M3_1 >= $comparativo_formato_11) { $literal_pruebass_redond_M3_1 = $literal_formato_11;  }
      if ($pruebass_redond_M3_1 >= $comparativo_formato_12) { $literal_pruebass_redond_M3_1 = $literal_formato_12;  } 
        }
}
?> 
   
   <?php

if ($pruebass_M3_2 != '') {  
    if ($row_datos_controlmat['c_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['c_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redond_M3_2 >= $comparativo_formato_1) { $alfabetico_pruebass_redond_M3_2 = $alfabetico_formato_1;  }
       if ($pruebass_redond_M3_2 >= $comparativo_formato_2) { $alfabetico_pruebass_redond_M3_2 = $alfabetico_formato_2;  }
       if ($pruebass_redond_M3_2 >= $comparativo_formato_3) { $alfabetico_pruebass_redond_M3_2 = $alfabetico_formato_3;  }
       if ($pruebass_redond_M3_2 >= $comparativo_formato_4) { $alfabetico_pruebass_redond_M3_2 = $alfabetico_formato_4;  }
       if ($pruebass_redond_M3_2 >= $comparativo_formato_5) { $alfabetico_pruebass_redond_M3_2 = $alfabetico_formato_5;  }
       if ($pruebass_redond_M3_2 >= $comparativo_formato_6) { $alfabetico_pruebass_redond_M3_2 = $alfabetico_formato_6;  }
       if ($pruebass_redond_M3_2 >= $comparativo_formato_7) { $alfabetico_pruebass_redond_M3_2 = $alfabetico_formato_7;  }
       if ($pruebass_redond_M3_2 >= $comparativo_formato_8) { $alfabetico_pruebass_redond_M3_2 = $alfabetico_formato_8;  }
       if ($pruebass_redond_M3_2 >= $comparativo_formato_9) { $alfabetico_pruebass_redond_M3_2 = $alfabetico_formato_9;  }
       if ($pruebass_redond_M3_2 >= $comparativo_formato_10) { $alfabetico_pruebass_redond_M3_2 = $alfabetico_formato_10;  }
       if ($pruebass_redond_M3_2 >= $comparativo_formato_11) { $alfabetico_pruebass_redond_M3_2 = $alfabetico_formato_11;  }
       if ($pruebass_redond_M3_2 >= $comparativo_formato_12) { $alfabetico_pruebass_redond_M3_2 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['c_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redond_M3_2 >= $comparativo_formato_1) { $literal_pruebass_redond_M3_2 = $literal_formato_1;  }
      if ($pruebass_redond_M3_2 >= $comparativo_formato_2) { $literal_pruebass_redond_M3_2 = $literal_formato_2;  }
      if ($pruebass_redond_M3_2 >= $comparativo_formato_3) { $literal_pruebass_redond_M3_2 = $literal_formato_3;  }
      if ($pruebass_redond_M3_2 >= $comparativo_formato_4) { $literal_pruebass_redond_M3_2 = $literal_formato_4;  }
      if ($pruebass_redond_M3_2 >= $comparativo_formato_5) { $literal_pruebass_redond_M3_2 = $literal_formato_5;  }
      if ($pruebass_redond_M3_2 >= $comparativo_formato_6) { $literal_pruebass_redond_M3_2 = $literal_formato_6;  }
      if ($pruebass_redond_M3_2 >= $comparativo_formato_7) { $literal_pruebass_redond_M3_2 = $literal_formato_7;  }
      if ($pruebass_redond_M3_2 >= $comparativo_formato_8) { $literal_pruebass_redond_M3_2 = $literal_formato_8;  }
      if ($pruebass_redond_M3_2 >= $comparativo_formato_9) { $literal_pruebass_redond_M3_2 = $literal_formato_9;  }
      if ($pruebass_redond_M3_2 >= $comparativo_formato_10) { $literal_pruebass_redond_M3_2 = $literal_formato_10;  }
      if ($pruebass_redond_M3_2 >= $comparativo_formato_11) { $literal_pruebass_redond_M3_2 = $literal_formato_11;  }
      if ($pruebass_redond_M3_2 >= $comparativo_formato_12) { $literal_pruebass_redond_M3_2 = $literal_formato_12;  } 
         }
}
?> 









 <?php

               $d_ayuda = '';

                if ($row_datos_controlmat['d_suma'] !=1) {
                  $d_ayuda = '#';
               }

               ?>

               <?php 

if ($row_datos_controlmat['d_convertir'] == 1 ) {  /* numerico */
       
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
    } /* cierre alfabetico */

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
 } /* cierre literal */


                    ?>

                        
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
   } /* cierre alfabetico */

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
   } /* cierre literal */ ?>




                    <?php 

if ($row_datos_controlmat['d_convertir'] == 1 ) {  /* numerico */
  
} /* cierre numerico */
if ($row_datos_controlmat['d_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M4_L2xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M4_L2xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M4_L2xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M4_L2xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M4_L2xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M4_L2xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M4_L2xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M4_L2xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M4_L2xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M4_L2xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M4_L2xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M4_L2xx = $alfabetico_formato_12;  }
   } /* cierre alfabetico */

if ($row_datos_controlmat['d_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M4_L2xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M4_L2xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M4_L2xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M4_L2xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M4_L2xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M4_L2xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M4_L2xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M4_L2xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M4_L2xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M4_L2xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M4_L2xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M4_L2xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M4_L2xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>


<?php 

if ($lap2_div_mat4 == '') {
    $lap2_pro_todo_M4_redond = '';
}

else {

    $lap2_pro_todo_M4 = $lap2_tot_mat4/$lap2_div_mat4;

  $lap2_pro_todo_M4_redondeado1 =number_format($lap2_pro_todo_M4, 1, '.', '');

    $lap2_pro_todo_M4_redond =number_format($lap2_pro_todo_M4_redondeado1);


    $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 + 1;   //  lleva el conteo de la division para el promedio del salon del 2do lapso
    $lap_suma_total_promedio_Lap_2 = $lap_suma_total_promedio_Lap_2 + $lap2_pro_todo_M4_redond;  // lleva el divisor para el promedio del salon 2do lapso


    if ($row_datos_controlmat['d_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_2 =  $lap_suma_total_promedio_Lap_2 - $lap2_pro_todo_M4_redond; $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 - 1;  }


    $lapso1_materia4_promedio_aula = $lap2_pro_todo_M4_redond;
    $lapso1_materia4_promedio_aula_divisor = $lapso1_materia4_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia4_aula_promedio =  $definitiva_materia4_aula_promedio + $lap2_pro_todo_M4_redond;
     $definitiva_materia4_aula_divisor = $definitiva_materia4_aula_divisor + 1;


}



if ($row_datos_controlmat['d_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['d_convertir'] == 2 ) {  /* alfabetico */
   if ($lap2_pro_todo_M4_redond >= $comparativo_formato_1) { $alfabetico_lap2_pro_todo_M4_redond = $alfabetico_formato_1;  }
   if ($lap2_pro_todo_M4_redond >= $comparativo_formato_2) { $alfabetico_lap2_pro_todo_M4_redond = $alfabetico_formato_2;  }
   if ($lap2_pro_todo_M4_redond >= $comparativo_formato_3) { $alfabetico_lap2_pro_todo_M4_redond = $alfabetico_formato_3;  }
   if ($lap2_pro_todo_M4_redond >= $comparativo_formato_4) { $alfabetico_lap2_pro_todo_M4_redond = $alfabetico_formato_4;  }
   if ($lap2_pro_todo_M4_redond >= $comparativo_formato_5) { $alfabetico_lap2_pro_todo_M4_redond = $alfabetico_formato_5;  }
   if ($lap2_pro_todo_M4_redond >= $comparativo_formato_6) { $alfabetico_lap2_pro_todo_M4_redond = $alfabetico_formato_6;  }
   if ($lap2_pro_todo_M4_redond >= $comparativo_formato_7) { $alfabetico_lap2_pro_todo_M4_redond = $alfabetico_formato_7;  }
   if ($lap2_pro_todo_M4_redond >= $comparativo_formato_8) { $alfabetico_lap2_pro_todo_M4_redond = $alfabetico_formato_8;  }
   if ($lap2_pro_todo_M4_redond >= $comparativo_formato_9) { $alfabetico_lap2_pro_todo_M4_redond = $alfabetico_formato_9;  }
   if ($lap2_pro_todo_M4_redond >= $comparativo_formato_10) { $alfabetico_lap2_pro_todo_M4_redond = $alfabetico_formato_10;  }
   if ($lap2_pro_todo_M4_redond >= $comparativo_formato_11) { $alfabetico_lap2_pro_todo_M4_redond = $alfabetico_formato_11;  }
   if ($lap2_pro_todo_M4_redond >= $comparativo_formato_12) { $alfabetico_lap2_pro_todo_M4_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['d_convertir'] == 3 ) {  /* literal */
  if ($lap2_pro_todo_M4_redond >= $comparativo_formato_1) { $literal_lap2_pro_todo_M4_redond = $literal_formato_1;  }
  if ($lap2_pro_todo_M4_redond >= $comparativo_formato_2) { $literal_lap2_pro_todo_M4_redond = $literal_formato_2;  }
  if ($lap2_pro_todo_M4_redond >= $comparativo_formato_3) { $literal_lap2_pro_todo_M4_redond = $literal_formato_3;  }
  if ($lap2_pro_todo_M4_redond >= $comparativo_formato_4) { $literal_lap2_pro_todo_M4_redond = $literal_formato_4;  }
  if ($lap2_pro_todo_M4_redond >= $comparativo_formato_5) { $literal_lap2_pro_todo_M4_redond = $literal_formato_5;  }
  if ($lap2_pro_todo_M4_redond >= $comparativo_formato_6) { $literal_lap2_pro_todo_M4_redond = $literal_formato_6;  }
  if ($lap2_pro_todo_M4_redond >= $comparativo_formato_7) { $literal_lap2_pro_todo_M4_redond = $literal_formato_7;  }
  if ($lap2_pro_todo_M4_redond >= $comparativo_formato_8) { $literal_lap2_pro_todo_M4_redond = $literal_formato_8;  }
  if ($lap2_pro_todo_M4_redond >= $comparativo_formato_9) { $literal_lap2_pro_todo_M4_redond = $literal_formato_9;  }
  if ($lap2_pro_todo_M4_redond >= $comparativo_formato_10) { $literal_lap2_pro_todo_M4_redond = $literal_formato_10;  }
  if ($lap2_pro_todo_M4_redond >= $comparativo_formato_11) { $literal_lap2_pro_todo_M4_redond = $literal_formato_11;  }
  if ($lap2_pro_todo_M4_redond >= $comparativo_formato_12) { $literal_lap2_pro_todo_M4_redond = $literal_formato_12;  } 
   } /* cierre literal */   ?>








                   <?php 

if ($row_datos_controlmat['d_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['d_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M4_L3xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M4_L3xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M4_L3xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M4_L3xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M4_L3xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M4_L3xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M4_L3xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M4_L3xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M4_L3xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M4_L3xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M4_L3xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M4_L3xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['d_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M4_L3xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M4_L3xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M4_L3xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M4_L3xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M4_L3xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M4_L3xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M4_L3xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M4_L3xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M4_L3xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M4_L3xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M4_L3xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M4_L3xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M4_L3xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>
                        

<?php 
if ($lap3_div_mat4 == '') {
    $lap3_pro_todo_M4_redond = '';
}
else {
    $lap3_pro_todo_M4 = $lap3_tot_mat4/$lap3_div_mat4;
 $lap3_pro_todo_M4_redondeado1 =number_format($lap3_pro_todo_M4, 1, '.', '');
    $lap3_pro_todo_M4_redond =number_format($lap3_pro_todo_M4_redondeado1);


    $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 + 1;   //  lleva el conteo de la division para el promedio del salon del 3er lapso
    $lap_suma_total_promedio_Lap_3 = $lap_suma_total_promedio_Lap_3 + $lap3_pro_todo_M4_redond;  // lleva el divisor para el promedio del salon 2do lapso


if ($row_datos_controlmat['d_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_3 =  $lap_suma_total_promedio_Lap_3 - $lap3_pro_todo_M4_redond; $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 - 1;  }



    $lapso3_materia4_promedio_aula = $lap3_pro_todo_M4_redond;
    $lapso3_materia4_promedio_aula_divisor = $lapso3_materia4_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia4_aula_promedio =  $definitiva_materia4_aula_promedio + $lap3_pro_todo_M4_redond;
     $definitiva_materia4_aula_divisor = $definitiva_materia4_aula_divisor + 1;
}

if ($row_datos_controlmat['d_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['d_convertir'] == 2 ) {  /* alfabetico */
   if ($lap3_pro_todo_M4_redond >= $comparativo_formato_1) { $alfabetico_lap3_pro_todo_M4_redond = $alfabetico_formato_1;  }
   if ($lap3_pro_todo_M4_redond >= $comparativo_formato_2) { $alfabetico_lap3_pro_todo_M4_redond = $alfabetico_formato_2;  }
   if ($lap3_pro_todo_M4_redond >= $comparativo_formato_3) { $alfabetico_lap3_pro_todo_M4_redond = $alfabetico_formato_3;  }
   if ($lap3_pro_todo_M4_redond >= $comparativo_formato_4) { $alfabetico_lap3_pro_todo_M4_redond = $alfabetico_formato_4;  }
   if ($lap3_pro_todo_M4_redond >= $comparativo_formato_5) { $alfabetico_lap3_pro_todo_M4_redond = $alfabetico_formato_5;  }
   if ($lap3_pro_todo_M4_redond >= $comparativo_formato_6) { $alfabetico_lap3_pro_todo_M4_redond = $alfabetico_formato_6;  }
   if ($lap3_pro_todo_M4_redond >= $comparativo_formato_7) { $alfabetico_lap3_pro_todo_M4_redond = $alfabetico_formato_7;  }
   if ($lap3_pro_todo_M4_redond >= $comparativo_formato_8) { $alfabetico_lap3_pro_todo_M4_redond = $alfabetico_formato_8;  }
   if ($lap3_pro_todo_M4_redond >= $comparativo_formato_9) { $alfabetico_lap3_pro_todo_M4_redond = $alfabetico_formato_9;  }
   if ($lap3_pro_todo_M4_redond >= $comparativo_formato_10) { $alfabetico_lap3_pro_todo_M4_redond = $alfabetico_formato_10;  }
   if ($lap3_pro_todo_M4_redond >= $comparativo_formato_11) { $alfabetico_lap3_pro_todo_M4_redond = $alfabetico_formato_11;  }
   if ($lap3_pro_todo_M4_redond >= $comparativo_formato_12) { $alfabetico_lap3_pro_todo_M4_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['d_convertir'] == 3 ) {  /* literal */
  if ($lap3_pro_todo_M4_redond >= $comparativo_formato_1) { $literal_lap3_pro_todo_M4_redond = $literal_formato_1;  }
  if ($lap3_pro_todo_M4_redond >= $comparativo_formato_2) { $literal_lap3_pro_todo_M4_redond = $literal_formato_2;  }
  if ($lap3_pro_todo_M4_redond >= $comparativo_formato_3) { $literal_lap3_pro_todo_M4_redond = $literal_formato_3;  }
  if ($lap3_pro_todo_M4_redond >= $comparativo_formato_4) { $literal_lap3_pro_todo_M4_redond = $literal_formato_4;  }
  if ($lap3_pro_todo_M4_redond >= $comparativo_formato_5) { $literal_lap3_pro_todo_M4_redond = $literal_formato_5;  }
  if ($lap3_pro_todo_M4_redond >= $comparativo_formato_6) { $literal_lap3_pro_todo_M4_redond = $literal_formato_6;  }
  if ($lap3_pro_todo_M4_redond >= $comparativo_formato_7) { $literal_lap3_pro_todo_M4_redond = $literal_formato_7;  }
  if ($lap3_pro_todo_M4_redond >= $comparativo_formato_8) { $literal_lap3_pro_todo_M4_redond = $literal_formato_8;  }
  if ($lap3_pro_todo_M4_redond >= $comparativo_formato_9) { $literal_lap3_pro_todo_M4_redond = $literal_formato_9;  }
  if ($lap3_pro_todo_M4_redond >= $comparativo_formato_10) { $literal_lap3_pro_todo_M4_redond = $literal_formato_10;  }
  if ($lap3_pro_todo_M4_redond >= $comparativo_formato_11) { $literal_lap3_pro_todo_M4_redond = $literal_formato_11;  }
  if ($lap3_pro_todo_M4_redond >= $comparativo_formato_12) { $literal_lap3_pro_todo_M4_redond = $literal_formato_12;  } 
  } /* cierre literal */ ?> 





                    <?php

if ($lap1_pro_todo_M4_redond== '' && $lap2_pro_todo_M4_redond== ''  && $lap3_pro_todo_M4_redond== '') {
    $totalcito_M4 = '';
    $tot_M4 = '';

}

else {
    $totalcito_M4 = $total_seven_con_Au_redon_M4_aproxxx + $row_datos_control_notasM4["nt_AuF"];
}


                    if ($row_datos_controlmat['d_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['d_convertir'] == 2 ) {  /* alfabetico */
   if ($totalcito_M4 >= $comparativo_formato_1) { $alfabetico_totalcito_M4 = $alfabetico_formato_1;  }
   if ($totalcito_M4 >= $comparativo_formato_2) { $alfabetico_totalcito_M4 = $alfabetico_formato_2;  }
   if ($totalcito_M4 >= $comparativo_formato_3) { $alfabetico_totalcito_M4 = $alfabetico_formato_3;  }
   if ($totalcito_M4 >= $comparativo_formato_4) { $alfabetico_totalcito_M4 = $alfabetico_formato_4;  }
   if ($totalcito_M4 >= $comparativo_formato_5) { $alfabetico_totalcito_M4 = $alfabetico_formato_5;  }
   if ($totalcito_M4 >= $comparativo_formato_6) { $alfabetico_totalcito_M4 = $alfabetico_formato_6;  }
   if ($totalcito_M4 >= $comparativo_formato_7) { $alfabetico_totalcito_M4 = $alfabetico_formato_7;  }
   if ($totalcito_M4 >= $comparativo_formato_8) { $alfabetico_totalcito_M4 = $alfabetico_formato_8;  }
   if ($totalcito_M4 >= $comparativo_formato_9) { $alfabetico_totalcito_M4 = $alfabetico_formato_9;  }
   if ($totalcito_M4 >= $comparativo_formato_10) { $alfabetico_totalcito_M4 = $alfabetico_formato_10;  }
   if ($totalcito_M4 >= $comparativo_formato_11) { $alfabetico_totalcito_M4 = $alfabetico_formato_11;  }
   if ($totalcito_M4 >= $comparativo_formato_12) { $alfabetico_totalcito_M4 = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['d_convertir'] == 3 ) {  /* literal */
  if ($totalcito_M4 >= $comparativo_formato_1) { $literal_totalcito_M4 = $literal_formato_1;  }
  if ($totalcito_M4 >= $comparativo_formato_2) { $literal_totalcito_M4 = $literal_formato_2;  }
  if ($totalcito_M4 >= $comparativo_formato_3) { $literal_totalcito_M4 = $literal_formato_3;  }
  if ($totalcito_M4 >= $comparativo_formato_4) { $literal_totalcito_M4 = $literal_formato_4;  }
  if ($totalcito_M4 >= $comparativo_formato_5) { $literal_totalcito_M4 = $literal_formato_5;  }
  if ($totalcito_M4 >= $comparativo_formato_6) { $literal_totalcito_M4 = $literal_formato_6;  }
  if ($totalcito_M4 >= $comparativo_formato_7) { $literal_totalcito_M4 = $literal_formato_7;  }
  if ($totalcito_M4 >= $comparativo_formato_8) { $literal_totalcito_M4 = $literal_formato_8;  }
  if ($totalcito_M4 >= $comparativo_formato_9) { $literal_totalcito_M4 = $literal_formato_9;  }
  if ($totalcito_M4 >= $comparativo_formato_10) { $literal_totalcito_M4 = $literal_formato_10;  }
  if ($totalcito_M4 >= $comparativo_formato_11) { $literal_totalcito_M4 = $literal_formato_11;  }
  if ($totalcito_M4 >= $comparativo_formato_12) { $literal_totalcito_M4 = $literal_formato_12;  } 
   } /* cierre literal */


  ?>
                         

                    












                   
                        
<?php

$tot123_M4 = $definitiva_materia4_aula_promedio/$definitiva_materia4_aula_divisor;

if ($definitiva_materia4_aula_divisor == '0') {
    $tot123_M1_form = '';
}

else {
$tot123_M4_form_redondeado1 = number_format($tot123_M4, 1, '.', '');
    $tot123_M4_form = number_format($tot123_M4_form_redondeado1);

$promedio_total123 = $promedio_total123 +  $tot123_M4_form;     // acumula el promedio total
$promedio_total123_divisor = $promedio_total123_divisor + 1 ;


if ($row_datos_controlmat['d_suma'] != 1)
 {  $promedio_total123 =  $promedio_total123 - $tot123_M4_form; $promedio_total123_divisor =  $promedio_total123_divisor - 1;  }


}



if ($row_datos_controlmat['d_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['d_convertir'] == 2 ) {  /* alfabetico */
   if ($tot123_M4_form >= $comparativo_formato_1) { $alfabetico_tot123_M4_form = $alfabetico_formato_1;  }
   if ($tot123_M4_form >= $comparativo_formato_2) { $alfabetico_tot123_M4_form = $alfabetico_formato_2;  }
   if ($tot123_M4_form >= $comparativo_formato_3) { $alfabetico_tot123_M4_form = $alfabetico_formato_3;  }
   if ($tot123_M4_form >= $comparativo_formato_4) { $alfabetico_tot123_M4_form = $alfabetico_formato_4;  }
   if ($tot123_M4_form >= $comparativo_formato_5) { $alfabetico_tot123_M4_form = $alfabetico_formato_5;  }
   if ($tot123_M4_form >= $comparativo_formato_6) { $alfabetico_tot123_M4_form = $alfabetico_formato_6;  }
   if ($tot123_M4_form >= $comparativo_formato_7) { $alfabetico_tot123_M4_form = $alfabetico_formato_7;  }
   if ($tot123_M4_form >= $comparativo_formato_8) { $alfabetico_tot123_M4_form = $alfabetico_formato_8;  }
   if ($tot123_M4_form >= $comparativo_formato_9) { $alfabetico_tot123_M4_form = $alfabetico_formato_9;  }
   if ($tot123_M4_form >= $comparativo_formato_10) { $alfabetico_tot123_M4_form = $alfabetico_formato_10;  }
   if ($tot123_M4_form >= $comparativo_formato_11) { $alfabetico_tot123_M4_form = $alfabetico_formato_11;  }
   if ($tot123_M4_form >= $comparativo_formato_12) { $alfabetico_tot123_M4_form = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['d_convertir'] == 3 ) {  /* literal */
  if ($tot123_M4_form >= $comparativo_formato_1) { $literal_tot123_M4_form = $literal_formato_1;  }
  if ($tot123_M4_form >= $comparativo_formato_2) { $literal_tot123_M4_form = $literal_formato_2;  }
  if ($tot123_M4_form >= $comparativo_formato_3) { $literal_tot123_M4_form = $literal_formato_3;  }
  if ($tot123_M4_form >= $comparativo_formato_4) { $literal_tot123_M4_form = $literal_formato_4;  }
  if ($tot123_M4_form >= $comparativo_formato_5) { $literal_tot123_M4_form = $literal_formato_5;  }
  if ($tot123_M4_form >= $comparativo_formato_6) { $literal_tot123_M4_form = $literal_formato_6;  }
  if ($tot123_M4_form >= $comparativo_formato_7) { $literal_tot123_M4_form = $literal_formato_7;  }
  if ($tot123_M4_form >= $comparativo_formato_8) { $literal_tot123_M4_form = $literal_formato_8;  }
  if ($tot123_M4_form >= $comparativo_formato_9) { $literal_tot123_M4_form = $literal_formato_9;  }
  if ($tot123_M4_form >= $comparativo_formato_10) { $literal_tot123_M4_form = $literal_formato_10;  }
  if ($tot123_M4_form >= $comparativo_formato_11) { $literal_tot123_M4_form = $literal_formato_11;  }
  if ($tot123_M4_form >= $comparativo_formato_12) { $literal_tot123_M4_form = $literal_formato_12;  } 
     }

$definitiva_materia4_aula_promedio = '0';
$definitiva_materia4_aula_divisor = '0';


?>




                   



<?php  
$pruebass_M4_1 = $row_datos_control_notasM4["rev_uno"];
$pruebass_M4_2 = $row_datos_control_notasM4["rev_dos"];
$pruebass_redond_M4_1 =number_format($pruebass_M4_1);
$pruebass_redond_M4_2 =number_format($pruebass_M4_2); 
  ?>

<!-- nuevo añadido 1 -->
  
<?php

if ($pruebass_M4_1 != '') {  
    if ($row_datos_controlmat['d_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['d_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redond_M4_1 >= $comparativo_formato_1) { $alfabetico_pruebass_redond_M4_1 = $alfabetico_formato_1;  }
       if ($pruebass_redond_M4_1 >= $comparativo_formato_2) { $alfabetico_pruebass_redond_M4_1 = $alfabetico_formato_2;  }
       if ($pruebass_redond_M4_1 >= $comparativo_formato_3) { $alfabetico_pruebass_redond_M4_1 = $alfabetico_formato_3;  }
       if ($pruebass_redond_M4_1 >= $comparativo_formato_4) { $alfabetico_pruebass_redond_M4_1 = $alfabetico_formato_4;  }
       if ($pruebass_redond_M4_1 >= $comparativo_formato_5) { $alfabetico_pruebass_redond_M4_1 = $alfabetico_formato_5;  }
       if ($pruebass_redond_M4_1 >= $comparativo_formato_6) { $alfabetico_pruebass_redond_M4_1 = $alfabetico_formato_6;  }
       if ($pruebass_redond_M4_1 >= $comparativo_formato_7) { $alfabetico_pruebass_redond_M4_1 = $alfabetico_formato_7;  }
       if ($pruebass_redond_M4_1 >= $comparativo_formato_8) { $alfabetico_pruebass_redond_M4_1 = $alfabetico_formato_8;  }
       if ($pruebass_redond_M4_1 >= $comparativo_formato_9) { $alfabetico_pruebass_redond_M4_1 = $alfabetico_formato_9;  }
       if ($pruebass_redond_M4_1 >= $comparativo_formato_10) { $alfabetico_pruebass_redond_M4_1 = $alfabetico_formato_10;  }
       if ($pruebass_redond_M4_1 >= $comparativo_formato_11) { $alfabetico_pruebass_redond_M4_1 = $alfabetico_formato_11;  }
       if ($pruebass_redond_M4_1 >= $comparativo_formato_12) { $alfabetico_pruebass_redond_M4_1 = $alfabetico_formato_12;  }
       } /* cierre alfabetico */
    if ($row_datos_controlmat['d_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redond_M4_1 >= $comparativo_formato_1) { $literal_pruebass_redond_M4_1 = $literal_formato_1;  }
      if ($pruebass_redond_M4_1 >= $comparativo_formato_2) { $literal_pruebass_redond_M4_1 = $literal_formato_2;  }
      if ($pruebass_redond_M4_1 >= $comparativo_formato_3) { $literal_pruebass_redond_M4_1 = $literal_formato_3;  }
      if ($pruebass_redond_M4_1 >= $comparativo_formato_4) { $literal_pruebass_redond_M4_1 = $literal_formato_4;  }
      if ($pruebass_redond_M4_1 >= $comparativo_formato_5) { $literal_pruebass_redond_M4_1 = $literal_formato_5;  }
      if ($pruebass_redond_M4_1 >= $comparativo_formato_6) { $literal_pruebass_redond_M4_1 = $literal_formato_6;  }
      if ($pruebass_redond_M4_1 >= $comparativo_formato_7) { $literal_pruebass_redond_M4_1 = $literal_formato_7;  }
      if ($pruebass_redond_M4_1 >= $comparativo_formato_8) { $literal_pruebass_redond_M4_1 = $literal_formato_8;  }
      if ($pruebass_redond_M4_1 >= $comparativo_formato_9) { $literal_pruebass_redond_M4_1 = $literal_formato_9;  }
      if ($pruebass_redond_M4_1 >= $comparativo_formato_10) { $literal_pruebass_redond_M4_1 = $literal_formato_10;  }
      if ($pruebass_redond_M4_1 >= $comparativo_formato_11) { $literal_pruebass_redond_M4_1 = $literal_formato_11;  }
      if ($pruebass_redond_M4_1 >= $comparativo_formato_12) { $literal_pruebass_redond_M4_1 = $literal_formato_12;  } 
        }
}
?> 
   
   <?php

if ($pruebass_M4_2 != '') {  
    if ($row_datos_controlmat['d_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['d_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redond_M4_2 >= $comparativo_formato_1) { $alfabetico_pruebass_redond_M4_2 = $alfabetico_formato_1;  }
       if ($pruebass_redond_M4_2 >= $comparativo_formato_2) { $alfabetico_pruebass_redond_M4_2 = $alfabetico_formato_2;  }
       if ($pruebass_redond_M4_2 >= $comparativo_formato_3) { $alfabetico_pruebass_redond_M4_2 = $alfabetico_formato_3;  }
       if ($pruebass_redond_M4_2 >= $comparativo_formato_4) { $alfabetico_pruebass_redond_M4_2 = $alfabetico_formato_4;  }
       if ($pruebass_redond_M4_2 >= $comparativo_formato_5) { $alfabetico_pruebass_redond_M4_2 = $alfabetico_formato_5;  }
       if ($pruebass_redond_M4_2 >= $comparativo_formato_6) { $alfabetico_pruebass_redond_M4_2 = $alfabetico_formato_6;  }
       if ($pruebass_redond_M4_2 >= $comparativo_formato_7) { $alfabetico_pruebass_redond_M4_2 = $alfabetico_formato_7;  }
       if ($pruebass_redond_M4_2 >= $comparativo_formato_8) { $alfabetico_pruebass_redond_M4_2 = $alfabetico_formato_8;  }
       if ($pruebass_redond_M4_2 >= $comparativo_formato_9) { $alfabetico_pruebass_redond_M4_2 = $alfabetico_formato_9;  }
       if ($pruebass_redond_M4_2 >= $comparativo_formato_10) { $alfabetico_pruebass_redond_M4_2 = $alfabetico_formato_10;  }
       if ($pruebass_redond_M4_2 >= $comparativo_formato_11) { $alfabetico_pruebass_redond_M4_2 = $alfabetico_formato_11;  }
       if ($pruebass_redond_M4_2 >= $comparativo_formato_12) { $alfabetico_pruebass_redond_M4_2 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['d_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redond_M4_2 >= $comparativo_formato_1) { $literal_pruebass_redond_M4_2 = $literal_formato_1;  }
      if ($pruebass_redond_M4_2 >= $comparativo_formato_2) { $literal_pruebass_redond_M4_2 = $literal_formato_2;  }
      if ($pruebass_redond_M4_2 >= $comparativo_formato_3) { $literal_pruebass_redond_M4_2 = $literal_formato_3;  }
      if ($pruebass_redond_M4_2 >= $comparativo_formato_4) { $literal_pruebass_redond_M4_2 = $literal_formato_4;  }
      if ($pruebass_redond_M4_2 >= $comparativo_formato_5) { $literal_pruebass_redond_M4_2 = $literal_formato_5;  }
      if ($pruebass_redond_M4_2 >= $comparativo_formato_6) { $literal_pruebass_redond_M4_2 = $literal_formato_6;  }
      if ($pruebass_redond_M4_2 >= $comparativo_formato_7) { $literal_pruebass_redond_M4_2 = $literal_formato_7;  }
      if ($pruebass_redond_M4_2 >= $comparativo_formato_8) { $literal_pruebass_redond_M4_2 = $literal_formato_8;  }
      if ($pruebass_redond_M4_2 >= $comparativo_formato_9) { $literal_pruebass_redond_M4_2 = $literal_formato_9;  }
      if ($pruebass_redond_M4_2 >= $comparativo_formato_10) { $literal_pruebass_redond_M4_2 = $literal_formato_10;  }
      if ($pruebass_redond_M4_2 >= $comparativo_formato_11) { $literal_pruebass_redond_M4_2 = $literal_formato_11;  }
      if ($pruebass_redond_M4_2 >= $comparativo_formato_12) { $literal_pruebass_redond_M4_2 = $literal_formato_12;  } 
         }
}
?> 






 <?php

               $e_ayuda = '';

                if ($row_datos_controlmat['e_suma'] !=1) {
                  $e_ayuda = '#';
               }

               ?>

               <?php 

if ($row_datos_controlmat['e_convertir'] == 1 ) {  /* numerico */
       
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
    } /* cierre alfabetico */

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
 } /* cierre literal */


                    ?>

                        
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
   } /* cierre alfabetico */

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
   } /* cierre literal */ ?>




                    <?php 

if ($row_datos_controlmat['e_convertir'] == 1 ) {  /* numerico */
  
} /* cierre numerico */
if ($row_datos_controlmat['e_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M5_L2xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M5_L2xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M5_L2xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M5_L2xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M5_L2xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M5_L2xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M5_L2xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M5_L2xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M5_L2xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M5_L2xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M5_L2xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M5_L2xx = $alfabetico_formato_12;  }
   } /* cierre alfabetico */

if ($row_datos_controlmat['e_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M5_L2xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M5_L2xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M5_L2xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M5_L2xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M5_L2xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M5_L2xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M5_L2xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M5_L2xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M5_L2xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M5_L2xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M5_L2xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M5_L2xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M5_L2xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>


<?php 

if ($lap2_div_mat5 == '') {
    $lap2_pro_todo_M5_redond = '';
}

else {

    $lap2_pro_todo_M5 = $lap2_tot_mat5/$lap2_div_mat5;

  $lap2_pro_todo_M5_redondeado1 =number_format($lap2_pro_todo_M5, 1, '.', '');

    $lap2_pro_todo_M5_redond =number_format($lap2_pro_todo_M5_redondeado1);


    $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 + 1;   //  lleva el conteo de la division para el promedio del salon del 2do lapso
    $lap_suma_total_promedio_Lap_2 = $lap_suma_total_promedio_Lap_2 + $lap2_pro_todo_M5_redond;  // lleva el divisor para el promedio del salon 2do lapso


    if ($row_datos_controlmat['e_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_2 =  $lap_suma_total_promedio_Lap_2 - $lap2_pro_todo_M5_redond; $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 - 1;  }


    $lapso1_materia5_promedio_aula = $lap2_pro_todo_M5_redond;
    $lapso1_materia5_promedio_aula_divisor = $lapso1_materia5_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia5_aula_promedio =  $definitiva_materia5_aula_promedio + $lap2_pro_todo_M5_redond;
     $definitiva_materia5_aula_divisor = $definitiva_materia5_aula_divisor + 1;


}



if ($row_datos_controlmat['e_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['e_convertir'] == 2 ) {  /* alfabetico */
   if ($lap2_pro_todo_M5_redond >= $comparativo_formato_1) { $alfabetico_lap2_pro_todo_M5_redond = $alfabetico_formato_1;  }
   if ($lap2_pro_todo_M5_redond >= $comparativo_formato_2) { $alfabetico_lap2_pro_todo_M5_redond = $alfabetico_formato_2;  }
   if ($lap2_pro_todo_M5_redond >= $comparativo_formato_3) { $alfabetico_lap2_pro_todo_M5_redond = $alfabetico_formato_3;  }
   if ($lap2_pro_todo_M5_redond >= $comparativo_formato_4) { $alfabetico_lap2_pro_todo_M5_redond = $alfabetico_formato_4;  }
   if ($lap2_pro_todo_M5_redond >= $comparativo_formato_5) { $alfabetico_lap2_pro_todo_M5_redond = $alfabetico_formato_5;  }
   if ($lap2_pro_todo_M5_redond >= $comparativo_formato_6) { $alfabetico_lap2_pro_todo_M5_redond = $alfabetico_formato_6;  }
   if ($lap2_pro_todo_M5_redond >= $comparativo_formato_7) { $alfabetico_lap2_pro_todo_M5_redond = $alfabetico_formato_7;  }
   if ($lap2_pro_todo_M5_redond >= $comparativo_formato_8) { $alfabetico_lap2_pro_todo_M5_redond = $alfabetico_formato_8;  }
   if ($lap2_pro_todo_M5_redond >= $comparativo_formato_9) { $alfabetico_lap2_pro_todo_M5_redond = $alfabetico_formato_9;  }
   if ($lap2_pro_todo_M5_redond >= $comparativo_formato_10) { $alfabetico_lap2_pro_todo_M5_redond = $alfabetico_formato_10;  }
   if ($lap2_pro_todo_M5_redond >= $comparativo_formato_11) { $alfabetico_lap2_pro_todo_M5_redond = $alfabetico_formato_11;  }
   if ($lap2_pro_todo_M5_redond >= $comparativo_formato_12) { $alfabetico_lap2_pro_todo_M5_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['e_convertir'] == 3 ) {  /* literal */
  if ($lap2_pro_todo_M5_redond >= $comparativo_formato_1) { $literal_lap2_pro_todo_M5_redond = $literal_formato_1;  }
  if ($lap2_pro_todo_M5_redond >= $comparativo_formato_2) { $literal_lap2_pro_todo_M5_redond = $literal_formato_2;  }
  if ($lap2_pro_todo_M5_redond >= $comparativo_formato_3) { $literal_lap2_pro_todo_M5_redond = $literal_formato_3;  }
  if ($lap2_pro_todo_M5_redond >= $comparativo_formato_4) { $literal_lap2_pro_todo_M5_redond = $literal_formato_4;  }
  if ($lap2_pro_todo_M5_redond >= $comparativo_formato_5) { $literal_lap2_pro_todo_M5_redond = $literal_formato_5;  }
  if ($lap2_pro_todo_M5_redond >= $comparativo_formato_6) { $literal_lap2_pro_todo_M5_redond = $literal_formato_6;  }
  if ($lap2_pro_todo_M5_redond >= $comparativo_formato_7) { $literal_lap2_pro_todo_M5_redond = $literal_formato_7;  }
  if ($lap2_pro_todo_M5_redond >= $comparativo_formato_8) { $literal_lap2_pro_todo_M5_redond = $literal_formato_8;  }
  if ($lap2_pro_todo_M5_redond >= $comparativo_formato_9) { $literal_lap2_pro_todo_M5_redond = $literal_formato_9;  }
  if ($lap2_pro_todo_M5_redond >= $comparativo_formato_10) { $literal_lap2_pro_todo_M5_redond = $literal_formato_10;  }
  if ($lap2_pro_todo_M5_redond >= $comparativo_formato_11) { $literal_lap2_pro_todo_M5_redond = $literal_formato_11;  }
  if ($lap2_pro_todo_M5_redond >= $comparativo_formato_12) { $literal_lap2_pro_todo_M5_redond = $literal_formato_12;  } 
   } /* cierre literal */   ?>








                   <?php 

if ($row_datos_controlmat['e_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['e_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M5_L3xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M5_L3xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M5_L3xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M5_L3xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M5_L3xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M5_L3xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M5_L3xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M5_L3xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M5_L3xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M5_L3xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M5_L3xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M5_L3xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['e_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M5_L3xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M5_L3xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M5_L3xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M5_L3xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M5_L3xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M5_L3xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M5_L3xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M5_L3xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M5_L3xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M5_L3xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M5_L3xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M5_L3xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M5_L3xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>
                        

<?php 
if ($lap3_div_mat5 == '') {
    $lap3_pro_todo_M5_redond = '';
}
else {
    $lap3_pro_todo_M5 = $lap3_tot_mat5/$lap3_div_mat5;
 $lap3_pro_todo_M5_redondeado1 =number_format($lap3_pro_todo_M5, 1, '.', '');
    $lap3_pro_todo_M5_redond =number_format($lap3_pro_todo_M5_redondeado1);


    $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 + 1;   //  lleva el conteo de la division para el promedio del salon del 3er lapso
    $lap_suma_total_promedio_Lap_3 = $lap_suma_total_promedio_Lap_3 + $lap3_pro_todo_M5_redond;  // lleva el divisor para el promedio del salon 2do lapso


if ($row_datos_controlmat['e_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_3 =  $lap_suma_total_promedio_Lap_3 - $lap3_pro_todo_M5_redond; $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 - 1;  }



    $lapso3_materia5_promedio_aula = $lap3_pro_todo_M5_redond;
    $lapso3_materia5_promedio_aula_divisor = $lapso3_materia5_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia5_aula_promedio =  $definitiva_materia5_aula_promedio + $lap3_pro_todo_M5_redond;
     $definitiva_materia5_aula_divisor = $definitiva_materia5_aula_divisor + 1;
}

if ($row_datos_controlmat['e_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['e_convertir'] == 2 ) {  /* alfabetico */
   if ($lap3_pro_todo_M5_redond >= $comparativo_formato_1) { $alfabetico_lap3_pro_todo_M5_redond = $alfabetico_formato_1;  }
   if ($lap3_pro_todo_M5_redond >= $comparativo_formato_2) { $alfabetico_lap3_pro_todo_M5_redond = $alfabetico_formato_2;  }
   if ($lap3_pro_todo_M5_redond >= $comparativo_formato_3) { $alfabetico_lap3_pro_todo_M5_redond = $alfabetico_formato_3;  }
   if ($lap3_pro_todo_M5_redond >= $comparativo_formato_4) { $alfabetico_lap3_pro_todo_M5_redond = $alfabetico_formato_4;  }
   if ($lap3_pro_todo_M5_redond >= $comparativo_formato_5) { $alfabetico_lap3_pro_todo_M5_redond = $alfabetico_formato_5;  }
   if ($lap3_pro_todo_M5_redond >= $comparativo_formato_6) { $alfabetico_lap3_pro_todo_M5_redond = $alfabetico_formato_6;  }
   if ($lap3_pro_todo_M5_redond >= $comparativo_formato_7) { $alfabetico_lap3_pro_todo_M5_redond = $alfabetico_formato_7;  }
   if ($lap3_pro_todo_M5_redond >= $comparativo_formato_8) { $alfabetico_lap3_pro_todo_M5_redond = $alfabetico_formato_8;  }
   if ($lap3_pro_todo_M5_redond >= $comparativo_formato_9) { $alfabetico_lap3_pro_todo_M5_redond = $alfabetico_formato_9;  }
   if ($lap3_pro_todo_M5_redond >= $comparativo_formato_10) { $alfabetico_lap3_pro_todo_M5_redond = $alfabetico_formato_10;  }
   if ($lap3_pro_todo_M5_redond >= $comparativo_formato_11) { $alfabetico_lap3_pro_todo_M5_redond = $alfabetico_formato_11;  }
   if ($lap3_pro_todo_M5_redond >= $comparativo_formato_12) { $alfabetico_lap3_pro_todo_M5_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['e_convertir'] == 3 ) {  /* literal */
  if ($lap3_pro_todo_M5_redond >= $comparativo_formato_1) { $literal_lap3_pro_todo_M5_redond = $literal_formato_1;  }
  if ($lap3_pro_todo_M5_redond >= $comparativo_formato_2) { $literal_lap3_pro_todo_M5_redond = $literal_formato_2;  }
  if ($lap3_pro_todo_M5_redond >= $comparativo_formato_3) { $literal_lap3_pro_todo_M5_redond = $literal_formato_3;  }
  if ($lap3_pro_todo_M5_redond >= $comparativo_formato_4) { $literal_lap3_pro_todo_M5_redond = $literal_formato_4;  }
  if ($lap3_pro_todo_M5_redond >= $comparativo_formato_5) { $literal_lap3_pro_todo_M5_redond = $literal_formato_5;  }
  if ($lap3_pro_todo_M5_redond >= $comparativo_formato_6) { $literal_lap3_pro_todo_M5_redond = $literal_formato_6;  }
  if ($lap3_pro_todo_M5_redond >= $comparativo_formato_7) { $literal_lap3_pro_todo_M5_redond = $literal_formato_7;  }
  if ($lap3_pro_todo_M5_redond >= $comparativo_formato_8) { $literal_lap3_pro_todo_M5_redond = $literal_formato_8;  }
  if ($lap3_pro_todo_M5_redond >= $comparativo_formato_9) { $literal_lap3_pro_todo_M5_redond = $literal_formato_9;  }
  if ($lap3_pro_todo_M5_redond >= $comparativo_formato_10) { $literal_lap3_pro_todo_M5_redond = $literal_formato_10;  }
  if ($lap3_pro_todo_M5_redond >= $comparativo_formato_11) { $literal_lap3_pro_todo_M5_redond = $literal_formato_11;  }
  if ($lap3_pro_todo_M5_redond >= $comparativo_formato_12) { $literal_lap3_pro_todo_M5_redond = $literal_formato_12;  } 
  } /* cierre literal */ ?> 





                    <?php

if ($lap1_pro_todo_M5_redond== '' && $lap2_pro_todo_M5_redond== ''  && $lap3_pro_todo_M5_redond== '') {
    $totalcito_M5 = '';
    $tot_M5 = '';

}

else {
    $totalcito_M5 = $total_seven_con_Au_redon_M5_aproxxx + $row_datos_control_notasM5["nt_AuF"];
}


                    if ($row_datos_controlmat['e_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['e_convertir'] == 2 ) {  /* alfabetico */
   if ($totalcito_M5 >= $comparativo_formato_1) { $alfabetico_totalcito_M5 = $alfabetico_formato_1;  }
   if ($totalcito_M5 >= $comparativo_formato_2) { $alfabetico_totalcito_M5 = $alfabetico_formato_2;  }
   if ($totalcito_M5 >= $comparativo_formato_3) { $alfabetico_totalcito_M5 = $alfabetico_formato_3;  }
   if ($totalcito_M5 >= $comparativo_formato_4) { $alfabetico_totalcito_M5 = $alfabetico_formato_4;  }
   if ($totalcito_M5 >= $comparativo_formato_5) { $alfabetico_totalcito_M5 = $alfabetico_formato_5;  }
   if ($totalcito_M5 >= $comparativo_formato_6) { $alfabetico_totalcito_M5 = $alfabetico_formato_6;  }
   if ($totalcito_M5 >= $comparativo_formato_7) { $alfabetico_totalcito_M5 = $alfabetico_formato_7;  }
   if ($totalcito_M5 >= $comparativo_formato_8) { $alfabetico_totalcito_M5 = $alfabetico_formato_8;  }
   if ($totalcito_M5 >= $comparativo_formato_9) { $alfabetico_totalcito_M5 = $alfabetico_formato_9;  }
   if ($totalcito_M5 >= $comparativo_formato_10) { $alfabetico_totalcito_M5 = $alfabetico_formato_10;  }
   if ($totalcito_M5 >= $comparativo_formato_11) { $alfabetico_totalcito_M5 = $alfabetico_formato_11;  }
   if ($totalcito_M5 >= $comparativo_formato_12) { $alfabetico_totalcito_M5 = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['e_convertir'] == 3 ) {  /* literal */
  if ($totalcito_M5 >= $comparativo_formato_1) { $literal_totalcito_M5 = $literal_formato_1;  }
  if ($totalcito_M5 >= $comparativo_formato_2) { $literal_totalcito_M5 = $literal_formato_2;  }
  if ($totalcito_M5 >= $comparativo_formato_3) { $literal_totalcito_M5 = $literal_formato_3;  }
  if ($totalcito_M5 >= $comparativo_formato_4) { $literal_totalcito_M5 = $literal_formato_4;  }
  if ($totalcito_M5 >= $comparativo_formato_5) { $literal_totalcito_M5 = $literal_formato_5;  }
  if ($totalcito_M5 >= $comparativo_formato_6) { $literal_totalcito_M5 = $literal_formato_6;  }
  if ($totalcito_M5 >= $comparativo_formato_7) { $literal_totalcito_M5 = $literal_formato_7;  }
  if ($totalcito_M5 >= $comparativo_formato_8) { $literal_totalcito_M5 = $literal_formato_8;  }
  if ($totalcito_M5 >= $comparativo_formato_9) { $literal_totalcito_M5 = $literal_formato_9;  }
  if ($totalcito_M5 >= $comparativo_formato_10) { $literal_totalcito_M5 = $literal_formato_10;  }
  if ($totalcito_M5 >= $comparativo_formato_11) { $literal_totalcito_M5 = $literal_formato_11;  }
  if ($totalcito_M5 >= $comparativo_formato_12) { $literal_totalcito_M5 = $literal_formato_12;  } 
   } /* cierre literal */


  ?>
                         

                    












                   
                        
<?php

$tot123_M5 = $definitiva_materia5_aula_promedio/$definitiva_materia5_aula_divisor;

if ($definitiva_materia5_aula_divisor == '0') {
    $tot123_M1_form = '';
}

else {
$tot123_M5_form_redondeado1 = number_format($tot123_M5, 1, '.', '');
    $tot123_M5_form = number_format($tot123_M5_form_redondeado1);

$promedio_total123 = $promedio_total123 +  $tot123_M5_form;     // acumula el promedio total
$promedio_total123_divisor = $promedio_total123_divisor + 1 ;


if ($row_datos_controlmat['e_suma'] != 1)
 {  $promedio_total123 =  $promedio_total123 - $tot123_M5_form; $promedio_total123_divisor =  $promedio_total123_divisor - 1;  }


}



if ($row_datos_controlmat['e_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['e_convertir'] == 2 ) {  /* alfabetico */
   if ($tot123_M5_form >= $comparativo_formato_1) { $alfabetico_tot123_M5_form = $alfabetico_formato_1;  }
   if ($tot123_M5_form >= $comparativo_formato_2) { $alfabetico_tot123_M5_form = $alfabetico_formato_2;  }
   if ($tot123_M5_form >= $comparativo_formato_3) { $alfabetico_tot123_M5_form = $alfabetico_formato_3;  }
   if ($tot123_M5_form >= $comparativo_formato_4) { $alfabetico_tot123_M5_form = $alfabetico_formato_4;  }
   if ($tot123_M5_form >= $comparativo_formato_5) { $alfabetico_tot123_M5_form = $alfabetico_formato_5;  }
   if ($tot123_M5_form >= $comparativo_formato_6) { $alfabetico_tot123_M5_form = $alfabetico_formato_6;  }
   if ($tot123_M5_form >= $comparativo_formato_7) { $alfabetico_tot123_M5_form = $alfabetico_formato_7;  }
   if ($tot123_M5_form >= $comparativo_formato_8) { $alfabetico_tot123_M5_form = $alfabetico_formato_8;  }
   if ($tot123_M5_form >= $comparativo_formato_9) { $alfabetico_tot123_M5_form = $alfabetico_formato_9;  }
   if ($tot123_M5_form >= $comparativo_formato_10) { $alfabetico_tot123_M5_form = $alfabetico_formato_10;  }
   if ($tot123_M5_form >= $comparativo_formato_11) { $alfabetico_tot123_M5_form = $alfabetico_formato_11;  }
   if ($tot123_M5_form >= $comparativo_formato_12) { $alfabetico_tot123_M5_form = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['e_convertir'] == 3 ) {  /* literal */
  if ($tot123_M5_form >= $comparativo_formato_1) { $literal_tot123_M5_form = $literal_formato_1;  }
  if ($tot123_M5_form >= $comparativo_formato_2) { $literal_tot123_M5_form = $literal_formato_2;  }
  if ($tot123_M5_form >= $comparativo_formato_3) { $literal_tot123_M5_form = $literal_formato_3;  }
  if ($tot123_M5_form >= $comparativo_formato_4) { $literal_tot123_M5_form = $literal_formato_4;  }
  if ($tot123_M5_form >= $comparativo_formato_5) { $literal_tot123_M5_form = $literal_formato_5;  }
  if ($tot123_M5_form >= $comparativo_formato_6) { $literal_tot123_M5_form = $literal_formato_6;  }
  if ($tot123_M5_form >= $comparativo_formato_7) { $literal_tot123_M5_form = $literal_formato_7;  }
  if ($tot123_M5_form >= $comparativo_formato_8) { $literal_tot123_M5_form = $literal_formato_8;  }
  if ($tot123_M5_form >= $comparativo_formato_9) { $literal_tot123_M5_form = $literal_formato_9;  }
  if ($tot123_M5_form >= $comparativo_formato_10) { $literal_tot123_M5_form = $literal_formato_10;  }
  if ($tot123_M5_form >= $comparativo_formato_11) { $literal_tot123_M5_form = $literal_formato_11;  }
  if ($tot123_M5_form >= $comparativo_formato_12) { $literal_tot123_M5_form = $literal_formato_12;  } 
     }

$definitiva_materia5_aula_promedio = '0';
$definitiva_materia5_aula_divisor = '0';


?>




                   



<?php  
$pruebass_M5_1 = $row_datos_control_notasM5["rev_uno"];
$pruebass_M5_2 = $row_datos_control_notasM5["rev_dos"];
$pruebass_redone_M5_1 =number_format($pruebass_M5_1);
$pruebass_redone_M5_2 =number_format($pruebass_M5_2); 
  ?>

<!-- nuevo añadido 1 -->
  
<?php

if ($pruebass_M5_1 != '') {  
    if ($row_datos_controlmat['e_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['e_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redone_M5_1 >= $comparativo_formato_1) { $alfabetico_pruebass_redone_M5_1 = $alfabetico_formato_1;  }
       if ($pruebass_redone_M5_1 >= $comparativo_formato_2) { $alfabetico_pruebass_redone_M5_1 = $alfabetico_formato_2;  }
       if ($pruebass_redone_M5_1 >= $comparativo_formato_3) { $alfabetico_pruebass_redone_M5_1 = $alfabetico_formato_3;  }
       if ($pruebass_redone_M5_1 >= $comparativo_formato_4) { $alfabetico_pruebass_redone_M5_1 = $alfabetico_formato_4;  }
       if ($pruebass_redone_M5_1 >= $comparativo_formato_5) { $alfabetico_pruebass_redone_M5_1 = $alfabetico_formato_5;  }
       if ($pruebass_redone_M5_1 >= $comparativo_formato_6) { $alfabetico_pruebass_redone_M5_1 = $alfabetico_formato_6;  }
       if ($pruebass_redone_M5_1 >= $comparativo_formato_7) { $alfabetico_pruebass_redone_M5_1 = $alfabetico_formato_7;  }
       if ($pruebass_redone_M5_1 >= $comparativo_formato_8) { $alfabetico_pruebass_redone_M5_1 = $alfabetico_formato_8;  }
       if ($pruebass_redone_M5_1 >= $comparativo_formato_9) { $alfabetico_pruebass_redone_M5_1 = $alfabetico_formato_9;  }
       if ($pruebass_redone_M5_1 >= $comparativo_formato_10) { $alfabetico_pruebass_redone_M5_1 = $alfabetico_formato_10;  }
       if ($pruebass_redone_M5_1 >= $comparativo_formato_11) { $alfabetico_pruebass_redone_M5_1 = $alfabetico_formato_11;  }
       if ($pruebass_redone_M5_1 >= $comparativo_formato_12) { $alfabetico_pruebass_redone_M5_1 = $alfabetico_formato_12;  }
       } /* cierre alfabetico */
    if ($row_datos_controlmat['e_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redone_M5_1 >= $comparativo_formato_1) { $literal_pruebass_redone_M5_1 = $literal_formato_1;  }
      if ($pruebass_redone_M5_1 >= $comparativo_formato_2) { $literal_pruebass_redone_M5_1 = $literal_formato_2;  }
      if ($pruebass_redone_M5_1 >= $comparativo_formato_3) { $literal_pruebass_redone_M5_1 = $literal_formato_3;  }
      if ($pruebass_redone_M5_1 >= $comparativo_formato_4) { $literal_pruebass_redone_M5_1 = $literal_formato_4;  }
      if ($pruebass_redone_M5_1 >= $comparativo_formato_5) { $literal_pruebass_redone_M5_1 = $literal_formato_5;  }
      if ($pruebass_redone_M5_1 >= $comparativo_formato_6) { $literal_pruebass_redone_M5_1 = $literal_formato_6;  }
      if ($pruebass_redone_M5_1 >= $comparativo_formato_7) { $literal_pruebass_redone_M5_1 = $literal_formato_7;  }
      if ($pruebass_redone_M5_1 >= $comparativo_formato_8) { $literal_pruebass_redone_M5_1 = $literal_formato_8;  }
      if ($pruebass_redone_M5_1 >= $comparativo_formato_9) { $literal_pruebass_redone_M5_1 = $literal_formato_9;  }
      if ($pruebass_redone_M5_1 >= $comparativo_formato_10) { $literal_pruebass_redone_M5_1 = $literal_formato_10;  }
      if ($pruebass_redone_M5_1 >= $comparativo_formato_11) { $literal_pruebass_redone_M5_1 = $literal_formato_11;  }
      if ($pruebass_redone_M5_1 >= $comparativo_formato_12) { $literal_pruebass_redone_M5_1 = $literal_formato_12;  } 
        }
}
?> 
   
   <?php

if ($pruebass_M5_2 != '') {  
    if ($row_datos_controlmat['e_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['e_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redone_M5_2 >= $comparativo_formato_1) { $alfabetico_pruebass_redone_M5_2 = $alfabetico_formato_1;  }
       if ($pruebass_redone_M5_2 >= $comparativo_formato_2) { $alfabetico_pruebass_redone_M5_2 = $alfabetico_formato_2;  }
       if ($pruebass_redone_M5_2 >= $comparativo_formato_3) { $alfabetico_pruebass_redone_M5_2 = $alfabetico_formato_3;  }
       if ($pruebass_redone_M5_2 >= $comparativo_formato_4) { $alfabetico_pruebass_redone_M5_2 = $alfabetico_formato_4;  }
       if ($pruebass_redone_M5_2 >= $comparativo_formato_5) { $alfabetico_pruebass_redone_M5_2 = $alfabetico_formato_5;  }
       if ($pruebass_redone_M5_2 >= $comparativo_formato_6) { $alfabetico_pruebass_redone_M5_2 = $alfabetico_formato_6;  }
       if ($pruebass_redone_M5_2 >= $comparativo_formato_7) { $alfabetico_pruebass_redone_M5_2 = $alfabetico_formato_7;  }
       if ($pruebass_redone_M5_2 >= $comparativo_formato_8) { $alfabetico_pruebass_redone_M5_2 = $alfabetico_formato_8;  }
       if ($pruebass_redone_M5_2 >= $comparativo_formato_9) { $alfabetico_pruebass_redone_M5_2 = $alfabetico_formato_9;  }
       if ($pruebass_redone_M5_2 >= $comparativo_formato_10) { $alfabetico_pruebass_redone_M5_2 = $alfabetico_formato_10;  }
       if ($pruebass_redone_M5_2 >= $comparativo_formato_11) { $alfabetico_pruebass_redone_M5_2 = $alfabetico_formato_11;  }
       if ($pruebass_redone_M5_2 >= $comparativo_formato_12) { $alfabetico_pruebass_redone_M5_2 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['e_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redone_M5_2 >= $comparativo_formato_1) { $literal_pruebass_redone_M5_2 = $literal_formato_1;  }
      if ($pruebass_redone_M5_2 >= $comparativo_formato_2) { $literal_pruebass_redone_M5_2 = $literal_formato_2;  }
      if ($pruebass_redone_M5_2 >= $comparativo_formato_3) { $literal_pruebass_redone_M5_2 = $literal_formato_3;  }
      if ($pruebass_redone_M5_2 >= $comparativo_formato_4) { $literal_pruebass_redone_M5_2 = $literal_formato_4;  }
      if ($pruebass_redone_M5_2 >= $comparativo_formato_5) { $literal_pruebass_redone_M5_2 = $literal_formato_5;  }
      if ($pruebass_redone_M5_2 >= $comparativo_formato_6) { $literal_pruebass_redone_M5_2 = $literal_formato_6;  }
      if ($pruebass_redone_M5_2 >= $comparativo_formato_7) { $literal_pruebass_redone_M5_2 = $literal_formato_7;  }
      if ($pruebass_redone_M5_2 >= $comparativo_formato_8) { $literal_pruebass_redone_M5_2 = $literal_formato_8;  }
      if ($pruebass_redone_M5_2 >= $comparativo_formato_9) { $literal_pruebass_redone_M5_2 = $literal_formato_9;  }
      if ($pruebass_redone_M5_2 >= $comparativo_formato_10) { $literal_pruebass_redone_M5_2 = $literal_formato_10;  }
      if ($pruebass_redone_M5_2 >= $comparativo_formato_11) { $literal_pruebass_redone_M5_2 = $literal_formato_11;  }
      if ($pruebass_redone_M5_2 >= $comparativo_formato_12) { $literal_pruebass_redone_M5_2 = $literal_formato_12;  } 
         }
}
?> 








 <?php

               $f_ayuda = '';

                if ($row_datos_controlmat['f_suma'] !=1) {
                  $f_ayuda = '#';
               }

               ?>

               <?php 

if ($row_datos_controlmat['f_convertir'] == 1 ) {  /* numerico */
       
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
    } /* cierre alfabetico */

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
 } /* cierre literal */


                    ?>

                        
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
   } /* cierre alfabetico */

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
   } /* cierre literal */ ?>




                    <?php 

if ($row_datos_controlmat['f_convertir'] == 1 ) {  /* numerico */
  
} /* cierre numerico */
if ($row_datos_controlmat['f_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M6_L2xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M6_L2xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M6_L2xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M6_L2xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M6_L2xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M6_L2xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M6_L2xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M6_L2xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M6_L2xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M6_L2xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M6_L2xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M6_L2xx = $alfabetico_formato_12;  }
   } /* cierre alfabetico */

if ($row_datos_controlmat['f_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M6_L2xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M6_L2xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M6_L2xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M6_L2xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M6_L2xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M6_L2xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M6_L2xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M6_L2xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M6_L2xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M6_L2xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M6_L2xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M6_L2xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M6_L2xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>


<?php 

if ($lap2_div_mat6 == '') {
    $lap2_pro_todo_M6_redond = '';
}

else {

    $lap2_pro_todo_M6 = $lap2_tot_mat6/$lap2_div_mat6;

  $lap2_pro_todo_M6_redondeado1 =number_format($lap2_pro_todo_M6, 1, '.', '');

    $lap2_pro_todo_M6_redond =number_format($lap2_pro_todo_M6_redondeado1);


    $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 + 1;   //  lleva el conteo de la division para el promedio del salon del 2do lapso
    $lap_suma_total_promedio_Lap_2 = $lap_suma_total_promedio_Lap_2 + $lap2_pro_todo_M6_redond;  // lleva el divisor para el promedio del salon 2do lapso


    if ($row_datos_controlmat['f_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_2 =  $lap_suma_total_promedio_Lap_2 - $lap2_pro_todo_M6_redond; $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 - 1;  }


    $lapso1_materia6_promedio_aula = $lap2_pro_todo_M6_redond;
    $lapso1_materia6_promedio_aula_divisor = $lapso1_materia6_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia6_aula_promedio =  $definitiva_materia6_aula_promedio + $lap2_pro_todo_M6_redond;
     $definitiva_materia6_aula_divisor = $definitiva_materia6_aula_divisor + 1;


}



if ($row_datos_controlmat['f_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['f_convertir'] == 2 ) {  /* alfabetico */
   if ($lap2_pro_todo_M6_redond >= $comparativo_formato_1) { $alfabetico_lap2_pro_todo_M6_redond = $alfabetico_formato_1;  }
   if ($lap2_pro_todo_M6_redond >= $comparativo_formato_2) { $alfabetico_lap2_pro_todo_M6_redond = $alfabetico_formato_2;  }
   if ($lap2_pro_todo_M6_redond >= $comparativo_formato_3) { $alfabetico_lap2_pro_todo_M6_redond = $alfabetico_formato_3;  }
   if ($lap2_pro_todo_M6_redond >= $comparativo_formato_4) { $alfabetico_lap2_pro_todo_M6_redond = $alfabetico_formato_4;  }
   if ($lap2_pro_todo_M6_redond >= $comparativo_formato_5) { $alfabetico_lap2_pro_todo_M6_redond = $alfabetico_formato_5;  }
   if ($lap2_pro_todo_M6_redond >= $comparativo_formato_6) { $alfabetico_lap2_pro_todo_M6_redond = $alfabetico_formato_6;  }
   if ($lap2_pro_todo_M6_redond >= $comparativo_formato_7) { $alfabetico_lap2_pro_todo_M6_redond = $alfabetico_formato_7;  }
   if ($lap2_pro_todo_M6_redond >= $comparativo_formato_8) { $alfabetico_lap2_pro_todo_M6_redond = $alfabetico_formato_8;  }
   if ($lap2_pro_todo_M6_redond >= $comparativo_formato_9) { $alfabetico_lap2_pro_todo_M6_redond = $alfabetico_formato_9;  }
   if ($lap2_pro_todo_M6_redond >= $comparativo_formato_10) { $alfabetico_lap2_pro_todo_M6_redond = $alfabetico_formato_10;  }
   if ($lap2_pro_todo_M6_redond >= $comparativo_formato_11) { $alfabetico_lap2_pro_todo_M6_redond = $alfabetico_formato_11;  }
   if ($lap2_pro_todo_M6_redond >= $comparativo_formato_12) { $alfabetico_lap2_pro_todo_M6_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['f_convertir'] == 3 ) {  /* literal */
  if ($lap2_pro_todo_M6_redond >= $comparativo_formato_1) { $literal_lap2_pro_todo_M6_redond = $literal_formato_1;  }
  if ($lap2_pro_todo_M6_redond >= $comparativo_formato_2) { $literal_lap2_pro_todo_M6_redond = $literal_formato_2;  }
  if ($lap2_pro_todo_M6_redond >= $comparativo_formato_3) { $literal_lap2_pro_todo_M6_redond = $literal_formato_3;  }
  if ($lap2_pro_todo_M6_redond >= $comparativo_formato_4) { $literal_lap2_pro_todo_M6_redond = $literal_formato_4;  }
  if ($lap2_pro_todo_M6_redond >= $comparativo_formato_5) { $literal_lap2_pro_todo_M6_redond = $literal_formato_5;  }
  if ($lap2_pro_todo_M6_redond >= $comparativo_formato_6) { $literal_lap2_pro_todo_M6_redond = $literal_formato_6;  }
  if ($lap2_pro_todo_M6_redond >= $comparativo_formato_7) { $literal_lap2_pro_todo_M6_redond = $literal_formato_7;  }
  if ($lap2_pro_todo_M6_redond >= $comparativo_formato_8) { $literal_lap2_pro_todo_M6_redond = $literal_formato_8;  }
  if ($lap2_pro_todo_M6_redond >= $comparativo_formato_9) { $literal_lap2_pro_todo_M6_redond = $literal_formato_9;  }
  if ($lap2_pro_todo_M6_redond >= $comparativo_formato_10) { $literal_lap2_pro_todo_M6_redond = $literal_formato_10;  }
  if ($lap2_pro_todo_M6_redond >= $comparativo_formato_11) { $literal_lap2_pro_todo_M6_redond = $literal_formato_11;  }
  if ($lap2_pro_todo_M6_redond >= $comparativo_formato_12) { $literal_lap2_pro_todo_M6_redond = $literal_formato_12;  } 
   } /* cierre literal */   ?>








                   <?php 

if ($row_datos_controlmat['f_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['f_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M6_L3xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M6_L3xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M6_L3xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M6_L3xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M6_L3xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M6_L3xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M6_L3xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M6_L3xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M6_L3xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M6_L3xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M6_L3xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M6_L3xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['f_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M6_L3xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M6_L3xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M6_L3xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M6_L3xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M6_L3xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M6_L3xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M6_L3xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M6_L3xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M6_L3xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M6_L3xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M6_L3xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M6_L3xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M6_L3xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>
                        

<?php 
if ($lap3_div_mat6 == '') {
    $lap3_pro_todo_M6_redond = '';
}
else {
    $lap3_pro_todo_M6 = $lap3_tot_mat6/$lap3_div_mat6;
 $lap3_pro_todo_M6_redondeado1 =number_format($lap3_pro_todo_M6, 1, '.', '');
    $lap3_pro_todo_M6_redond =number_format($lap3_pro_todo_M6_redondeado1);


    $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 + 1;   //  lleva el conteo de la division para el promedio del salon del 3er lapso
    $lap_suma_total_promedio_Lap_3 = $lap_suma_total_promedio_Lap_3 + $lap3_pro_todo_M6_redond;  // lleva el divisor para el promedio del salon 2do lapso


if ($row_datos_controlmat['f_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_3 =  $lap_suma_total_promedio_Lap_3 - $lap3_pro_todo_M6_redond; $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 - 1;  }



    $lapso3_materia6_promedio_aula = $lap3_pro_todo_M6_redond;
    $lapso3_materia6_promedio_aula_divisor = $lapso3_materia6_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia6_aula_promedio =  $definitiva_materia6_aula_promedio + $lap3_pro_todo_M6_redond;
     $definitiva_materia6_aula_divisor = $definitiva_materia6_aula_divisor + 1;
}

if ($row_datos_controlmat['f_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['f_convertir'] == 2 ) {  /* alfabetico */
   if ($lap3_pro_todo_M6_redond >= $comparativo_formato_1) { $alfabetico_lap3_pro_todo_M6_redond = $alfabetico_formato_1;  }
   if ($lap3_pro_todo_M6_redond >= $comparativo_formato_2) { $alfabetico_lap3_pro_todo_M6_redond = $alfabetico_formato_2;  }
   if ($lap3_pro_todo_M6_redond >= $comparativo_formato_3) { $alfabetico_lap3_pro_todo_M6_redond = $alfabetico_formato_3;  }
   if ($lap3_pro_todo_M6_redond >= $comparativo_formato_4) { $alfabetico_lap3_pro_todo_M6_redond = $alfabetico_formato_4;  }
   if ($lap3_pro_todo_M6_redond >= $comparativo_formato_5) { $alfabetico_lap3_pro_todo_M6_redond = $alfabetico_formato_5;  }
   if ($lap3_pro_todo_M6_redond >= $comparativo_formato_6) { $alfabetico_lap3_pro_todo_M6_redond = $alfabetico_formato_6;  }
   if ($lap3_pro_todo_M6_redond >= $comparativo_formato_7) { $alfabetico_lap3_pro_todo_M6_redond = $alfabetico_formato_7;  }
   if ($lap3_pro_todo_M6_redond >= $comparativo_formato_8) { $alfabetico_lap3_pro_todo_M6_redond = $alfabetico_formato_8;  }
   if ($lap3_pro_todo_M6_redond >= $comparativo_formato_9) { $alfabetico_lap3_pro_todo_M6_redond = $alfabetico_formato_9;  }
   if ($lap3_pro_todo_M6_redond >= $comparativo_formato_10) { $alfabetico_lap3_pro_todo_M6_redond = $alfabetico_formato_10;  }
   if ($lap3_pro_todo_M6_redond >= $comparativo_formato_11) { $alfabetico_lap3_pro_todo_M6_redond = $alfabetico_formato_11;  }
   if ($lap3_pro_todo_M6_redond >= $comparativo_formato_12) { $alfabetico_lap3_pro_todo_M6_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['f_convertir'] == 3 ) {  /* literal */
  if ($lap3_pro_todo_M6_redond >= $comparativo_formato_1) { $literal_lap3_pro_todo_M6_redond = $literal_formato_1;  }
  if ($lap3_pro_todo_M6_redond >= $comparativo_formato_2) { $literal_lap3_pro_todo_M6_redond = $literal_formato_2;  }
  if ($lap3_pro_todo_M6_redond >= $comparativo_formato_3) { $literal_lap3_pro_todo_M6_redond = $literal_formato_3;  }
  if ($lap3_pro_todo_M6_redond >= $comparativo_formato_4) { $literal_lap3_pro_todo_M6_redond = $literal_formato_4;  }
  if ($lap3_pro_todo_M6_redond >= $comparativo_formato_5) { $literal_lap3_pro_todo_M6_redond = $literal_formato_5;  }
  if ($lap3_pro_todo_M6_redond >= $comparativo_formato_6) { $literal_lap3_pro_todo_M6_redond = $literal_formato_6;  }
  if ($lap3_pro_todo_M6_redond >= $comparativo_formato_7) { $literal_lap3_pro_todo_M6_redond = $literal_formato_7;  }
  if ($lap3_pro_todo_M6_redond >= $comparativo_formato_8) { $literal_lap3_pro_todo_M6_redond = $literal_formato_8;  }
  if ($lap3_pro_todo_M6_redond >= $comparativo_formato_9) { $literal_lap3_pro_todo_M6_redond = $literal_formato_9;  }
  if ($lap3_pro_todo_M6_redond >= $comparativo_formato_10) { $literal_lap3_pro_todo_M6_redond = $literal_formato_10;  }
  if ($lap3_pro_todo_M6_redond >= $comparativo_formato_11) { $literal_lap3_pro_todo_M6_redond = $literal_formato_11;  }
  if ($lap3_pro_todo_M6_redond >= $comparativo_formato_12) { $literal_lap3_pro_todo_M6_redond = $literal_formato_12;  } 
  } /* cierre literal */ ?> 





                    <?php

if ($lap1_pro_todo_M6_redond== '' && $lap2_pro_todo_M6_redond== ''  && $lap3_pro_todo_M6_redond== '') {
    $totalcito_M6 = '';
    $tot_M6 = '';

}

else {
    $totalcito_M6 = $total_seven_con_Au_redon_M6_aproxxx + $row_datos_control_notasM6["nt_AuF"];
}


                    if ($row_datos_controlmat['f_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['f_convertir'] == 2 ) {  /* alfabetico */
   if ($totalcito_M6 >= $comparativo_formato_1) { $alfabetico_totalcito_M6 = $alfabetico_formato_1;  }
   if ($totalcito_M6 >= $comparativo_formato_2) { $alfabetico_totalcito_M6 = $alfabetico_formato_2;  }
   if ($totalcito_M6 >= $comparativo_formato_3) { $alfabetico_totalcito_M6 = $alfabetico_formato_3;  }
   if ($totalcito_M6 >= $comparativo_formato_4) { $alfabetico_totalcito_M6 = $alfabetico_formato_4;  }
   if ($totalcito_M6 >= $comparativo_formato_5) { $alfabetico_totalcito_M6 = $alfabetico_formato_5;  }
   if ($totalcito_M6 >= $comparativo_formato_6) { $alfabetico_totalcito_M6 = $alfabetico_formato_6;  }
   if ($totalcito_M6 >= $comparativo_formato_7) { $alfabetico_totalcito_M6 = $alfabetico_formato_7;  }
   if ($totalcito_M6 >= $comparativo_formato_8) { $alfabetico_totalcito_M6 = $alfabetico_formato_8;  }
   if ($totalcito_M6 >= $comparativo_formato_9) { $alfabetico_totalcito_M6 = $alfabetico_formato_9;  }
   if ($totalcito_M6 >= $comparativo_formato_10) { $alfabetico_totalcito_M6 = $alfabetico_formato_10;  }
   if ($totalcito_M6 >= $comparativo_formato_11) { $alfabetico_totalcito_M6 = $alfabetico_formato_11;  }
   if ($totalcito_M6 >= $comparativo_formato_12) { $alfabetico_totalcito_M6 = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['f_convertir'] == 3 ) {  /* literal */
  if ($totalcito_M6 >= $comparativo_formato_1) { $literal_totalcito_M6 = $literal_formato_1;  }
  if ($totalcito_M6 >= $comparativo_formato_2) { $literal_totalcito_M6 = $literal_formato_2;  }
  if ($totalcito_M6 >= $comparativo_formato_3) { $literal_totalcito_M6 = $literal_formato_3;  }
  if ($totalcito_M6 >= $comparativo_formato_4) { $literal_totalcito_M6 = $literal_formato_4;  }
  if ($totalcito_M6 >= $comparativo_formato_5) { $literal_totalcito_M6 = $literal_formato_5;  }
  if ($totalcito_M6 >= $comparativo_formato_6) { $literal_totalcito_M6 = $literal_formato_6;  }
  if ($totalcito_M6 >= $comparativo_formato_7) { $literal_totalcito_M6 = $literal_formato_7;  }
  if ($totalcito_M6 >= $comparativo_formato_8) { $literal_totalcito_M6 = $literal_formato_8;  }
  if ($totalcito_M6 >= $comparativo_formato_9) { $literal_totalcito_M6 = $literal_formato_9;  }
  if ($totalcito_M6 >= $comparativo_formato_10) { $literal_totalcito_M6 = $literal_formato_10;  }
  if ($totalcito_M6 >= $comparativo_formato_11) { $literal_totalcito_M6 = $literal_formato_11;  }
  if ($totalcito_M6 >= $comparativo_formato_12) { $literal_totalcito_M6 = $literal_formato_12;  } 
   } /* cierre literal */


  ?>
                         

                    












                   
                        
<?php

$tot123_M6 = $definitiva_materia6_aula_promedio/$definitiva_materia6_aula_divisor;

if ($definitiva_materia6_aula_divisor == '0') {
    $tot123_M1_form = '';
}

else {
$tot123_M6_form_redondeado1 = number_format($tot123_M6, 1, '.', '');
    $tot123_M6_form = number_format($tot123_M6_form_redondeado1);

$promedio_total123 = $promedio_total123 +  $tot123_M6_form;     // acumula el promedio total
$promedio_total123_divisor = $promedio_total123_divisor + 1 ;


if ($row_datos_controlmat['f_suma'] != 1)
 {  $promedio_total123 =  $promedio_total123 - $tot123_M6_form; $promedio_total123_divisor =  $promedio_total123_divisor - 1;  }


}



if ($row_datos_controlmat['f_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['f_convertir'] == 2 ) {  /* alfabetico */
   if ($tot123_M6_form >= $comparativo_formato_1) { $alfabetico_tot123_M6_form = $alfabetico_formato_1;  }
   if ($tot123_M6_form >= $comparativo_formato_2) { $alfabetico_tot123_M6_form = $alfabetico_formato_2;  }
   if ($tot123_M6_form >= $comparativo_formato_3) { $alfabetico_tot123_M6_form = $alfabetico_formato_3;  }
   if ($tot123_M6_form >= $comparativo_formato_4) { $alfabetico_tot123_M6_form = $alfabetico_formato_4;  }
   if ($tot123_M6_form >= $comparativo_formato_5) { $alfabetico_tot123_M6_form = $alfabetico_formato_5;  }
   if ($tot123_M6_form >= $comparativo_formato_6) { $alfabetico_tot123_M6_form = $alfabetico_formato_6;  }
   if ($tot123_M6_form >= $comparativo_formato_7) { $alfabetico_tot123_M6_form = $alfabetico_formato_7;  }
   if ($tot123_M6_form >= $comparativo_formato_8) { $alfabetico_tot123_M6_form = $alfabetico_formato_8;  }
   if ($tot123_M6_form >= $comparativo_formato_9) { $alfabetico_tot123_M6_form = $alfabetico_formato_9;  }
   if ($tot123_M6_form >= $comparativo_formato_10) { $alfabetico_tot123_M6_form = $alfabetico_formato_10;  }
   if ($tot123_M6_form >= $comparativo_formato_11) { $alfabetico_tot123_M6_form = $alfabetico_formato_11;  }
   if ($tot123_M6_form >= $comparativo_formato_12) { $alfabetico_tot123_M6_form = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['f_convertir'] == 3 ) {  /* literal */
  if ($tot123_M6_form >= $comparativo_formato_1) { $literal_tot123_M6_form = $literal_formato_1;  }
  if ($tot123_M6_form >= $comparativo_formato_2) { $literal_tot123_M6_form = $literal_formato_2;  }
  if ($tot123_M6_form >= $comparativo_formato_3) { $literal_tot123_M6_form = $literal_formato_3;  }
  if ($tot123_M6_form >= $comparativo_formato_4) { $literal_tot123_M6_form = $literal_formato_4;  }
  if ($tot123_M6_form >= $comparativo_formato_5) { $literal_tot123_M6_form = $literal_formato_5;  }
  if ($tot123_M6_form >= $comparativo_formato_6) { $literal_tot123_M6_form = $literal_formato_6;  }
  if ($tot123_M6_form >= $comparativo_formato_7) { $literal_tot123_M6_form = $literal_formato_7;  }
  if ($tot123_M6_form >= $comparativo_formato_8) { $literal_tot123_M6_form = $literal_formato_8;  }
  if ($tot123_M6_form >= $comparativo_formato_9) { $literal_tot123_M6_form = $literal_formato_9;  }
  if ($tot123_M6_form >= $comparativo_formato_10) { $literal_tot123_M6_form = $literal_formato_10;  }
  if ($tot123_M6_form >= $comparativo_formato_11) { $literal_tot123_M6_form = $literal_formato_11;  }
  if ($tot123_M6_form >= $comparativo_formato_12) { $literal_tot123_M6_form = $literal_formato_12;  } 
     }

$definitiva_materia6_aula_promedio = '0';
$definitiva_materia6_aula_divisor = '0';


?>




                   



<?php  
$pruebass_M6_1 = $row_datos_control_notasM6["rev_uno"];
$pruebass_M6_2 = $row_datos_control_notasM6["rev_dos"];
$pruebass_redonf_M6_1 =number_format($pruebass_M6_1);
$pruebass_redonf_M6_2 =number_format($pruebass_M6_2); 
  ?>

<!-- nuevo añadido 1 -->
  
<?php

if ($pruebass_M6_1 != '') {  
    if ($row_datos_controlmat['f_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['f_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redonf_M6_1 >= $comparativo_formato_1) { $alfabetico_pruebass_redonf_M6_1 = $alfabetico_formato_1;  }
       if ($pruebass_redonf_M6_1 >= $comparativo_formato_2) { $alfabetico_pruebass_redonf_M6_1 = $alfabetico_formato_2;  }
       if ($pruebass_redonf_M6_1 >= $comparativo_formato_3) { $alfabetico_pruebass_redonf_M6_1 = $alfabetico_formato_3;  }
       if ($pruebass_redonf_M6_1 >= $comparativo_formato_4) { $alfabetico_pruebass_redonf_M6_1 = $alfabetico_formato_4;  }
       if ($pruebass_redonf_M6_1 >= $comparativo_formato_5) { $alfabetico_pruebass_redonf_M6_1 = $alfabetico_formato_5;  }
       if ($pruebass_redonf_M6_1 >= $comparativo_formato_6) { $alfabetico_pruebass_redonf_M6_1 = $alfabetico_formato_6;  }
       if ($pruebass_redonf_M6_1 >= $comparativo_formato_7) { $alfabetico_pruebass_redonf_M6_1 = $alfabetico_formato_7;  }
       if ($pruebass_redonf_M6_1 >= $comparativo_formato_8) { $alfabetico_pruebass_redonf_M6_1 = $alfabetico_formato_8;  }
       if ($pruebass_redonf_M6_1 >= $comparativo_formato_9) { $alfabetico_pruebass_redonf_M6_1 = $alfabetico_formato_9;  }
       if ($pruebass_redonf_M6_1 >= $comparativo_formato_10) { $alfabetico_pruebass_redonf_M6_1 = $alfabetico_formato_10;  }
       if ($pruebass_redonf_M6_1 >= $comparativo_formato_11) { $alfabetico_pruebass_redonf_M6_1 = $alfabetico_formato_11;  }
       if ($pruebass_redonf_M6_1 >= $comparativo_formato_12) { $alfabetico_pruebass_redonf_M6_1 = $alfabetico_formato_12;  }
       } /* cierre alfabetico */
    if ($row_datos_controlmat['f_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redonf_M6_1 >= $comparativo_formato_1) { $literal_pruebass_redonf_M6_1 = $literal_formato_1;  }
      if ($pruebass_redonf_M6_1 >= $comparativo_formato_2) { $literal_pruebass_redonf_M6_1 = $literal_formato_2;  }
      if ($pruebass_redonf_M6_1 >= $comparativo_formato_3) { $literal_pruebass_redonf_M6_1 = $literal_formato_3;  }
      if ($pruebass_redonf_M6_1 >= $comparativo_formato_4) { $literal_pruebass_redonf_M6_1 = $literal_formato_4;  }
      if ($pruebass_redonf_M6_1 >= $comparativo_formato_5) { $literal_pruebass_redonf_M6_1 = $literal_formato_5;  }
      if ($pruebass_redonf_M6_1 >= $comparativo_formato_6) { $literal_pruebass_redonf_M6_1 = $literal_formato_6;  }
      if ($pruebass_redonf_M6_1 >= $comparativo_formato_7) { $literal_pruebass_redonf_M6_1 = $literal_formato_7;  }
      if ($pruebass_redonf_M6_1 >= $comparativo_formato_8) { $literal_pruebass_redonf_M6_1 = $literal_formato_8;  }
      if ($pruebass_redonf_M6_1 >= $comparativo_formato_9) { $literal_pruebass_redonf_M6_1 = $literal_formato_9;  }
      if ($pruebass_redonf_M6_1 >= $comparativo_formato_10) { $literal_pruebass_redonf_M6_1 = $literal_formato_10;  }
      if ($pruebass_redonf_M6_1 >= $comparativo_formato_11) { $literal_pruebass_redonf_M6_1 = $literal_formato_11;  }
      if ($pruebass_redonf_M6_1 >= $comparativo_formato_12) { $literal_pruebass_redonf_M6_1 = $literal_formato_12;  } 
        }
}
?> 
   
   <?php

if ($pruebass_M6_2 != '') {  
    if ($row_datos_controlmat['f_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['f_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redonf_M6_2 >= $comparativo_formato_1) { $alfabetico_pruebass_redonf_M6_2 = $alfabetico_formato_1;  }
       if ($pruebass_redonf_M6_2 >= $comparativo_formato_2) { $alfabetico_pruebass_redonf_M6_2 = $alfabetico_formato_2;  }
       if ($pruebass_redonf_M6_2 >= $comparativo_formato_3) { $alfabetico_pruebass_redonf_M6_2 = $alfabetico_formato_3;  }
       if ($pruebass_redonf_M6_2 >= $comparativo_formato_4) { $alfabetico_pruebass_redonf_M6_2 = $alfabetico_formato_4;  }
       if ($pruebass_redonf_M6_2 >= $comparativo_formato_5) { $alfabetico_pruebass_redonf_M6_2 = $alfabetico_formato_5;  }
       if ($pruebass_redonf_M6_2 >= $comparativo_formato_6) { $alfabetico_pruebass_redonf_M6_2 = $alfabetico_formato_6;  }
       if ($pruebass_redonf_M6_2 >= $comparativo_formato_7) { $alfabetico_pruebass_redonf_M6_2 = $alfabetico_formato_7;  }
       if ($pruebass_redonf_M6_2 >= $comparativo_formato_8) { $alfabetico_pruebass_redonf_M6_2 = $alfabetico_formato_8;  }
       if ($pruebass_redonf_M6_2 >= $comparativo_formato_9) { $alfabetico_pruebass_redonf_M6_2 = $alfabetico_formato_9;  }
       if ($pruebass_redonf_M6_2 >= $comparativo_formato_10) { $alfabetico_pruebass_redonf_M6_2 = $alfabetico_formato_10;  }
       if ($pruebass_redonf_M6_2 >= $comparativo_formato_11) { $alfabetico_pruebass_redonf_M6_2 = $alfabetico_formato_11;  }
       if ($pruebass_redonf_M6_2 >= $comparativo_formato_12) { $alfabetico_pruebass_redonf_M6_2 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['f_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redonf_M6_2 >= $comparativo_formato_1) { $literal_pruebass_redonf_M6_2 = $literal_formato_1;  }
      if ($pruebass_redonf_M6_2 >= $comparativo_formato_2) { $literal_pruebass_redonf_M6_2 = $literal_formato_2;  }
      if ($pruebass_redonf_M6_2 >= $comparativo_formato_3) { $literal_pruebass_redonf_M6_2 = $literal_formato_3;  }
      if ($pruebass_redonf_M6_2 >= $comparativo_formato_4) { $literal_pruebass_redonf_M6_2 = $literal_formato_4;  }
      if ($pruebass_redonf_M6_2 >= $comparativo_formato_5) { $literal_pruebass_redonf_M6_2 = $literal_formato_5;  }
      if ($pruebass_redonf_M6_2 >= $comparativo_formato_6) { $literal_pruebass_redonf_M6_2 = $literal_formato_6;  }
      if ($pruebass_redonf_M6_2 >= $comparativo_formato_7) { $literal_pruebass_redonf_M6_2 = $literal_formato_7;  }
      if ($pruebass_redonf_M6_2 >= $comparativo_formato_8) { $literal_pruebass_redonf_M6_2 = $literal_formato_8;  }
      if ($pruebass_redonf_M6_2 >= $comparativo_formato_9) { $literal_pruebass_redonf_M6_2 = $literal_formato_9;  }
      if ($pruebass_redonf_M6_2 >= $comparativo_formato_10) { $literal_pruebass_redonf_M6_2 = $literal_formato_10;  }
      if ($pruebass_redonf_M6_2 >= $comparativo_formato_11) { $literal_pruebass_redonf_M6_2 = $literal_formato_11;  }
      if ($pruebass_redonf_M6_2 >= $comparativo_formato_12) { $literal_pruebass_redonf_M6_2 = $literal_formato_12;  } 
         }
}
?> 




 <?php

               $g_ayuda = '';

                if ($row_datos_controlmat['g_suma'] !=1) {
                  $g_ayuda = '#';
               }

               ?>

               <?php 

if ($row_datos_controlmat['g_convertir'] == 1 ) {  /* numerico */
       
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
    } /* cierre alfabetico */

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
 } /* cierre literal */


                    ?>

                        
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
   } /* cierre alfabetico */

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
   } /* cierre literal */ ?>




                    <?php 

if ($row_datos_controlmat['g_convertir'] == 1 ) {  /* numerico */
  
} /* cierre numerico */
if ($row_datos_controlmat['g_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M7_L2xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M7_L2xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M7_L2xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M7_L2xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M7_L2xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M7_L2xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M7_L2xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M7_L2xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M7_L2xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M7_L2xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M7_L2xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M7_L2xx = $alfabetico_formato_12;  }
   } /* cierre alfabetico */

if ($row_datos_controlmat['g_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M7_L2xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M7_L2xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M7_L2xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M7_L2xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M7_L2xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M7_L2xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M7_L2xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M7_L2xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M7_L2xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M7_L2xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M7_L2xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M7_L2xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M7_L2xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>


<?php 

if ($lap2_div_mat7 == '') {
    $lap2_pro_todo_M7_redond = '';
}

else {

    $lap2_pro_todo_M7 = $lap2_tot_mat7/$lap2_div_mat7;

  $lap2_pro_todo_M7_redondeado1 =number_format($lap2_pro_todo_M7, 1, '.', '');

    $lap2_pro_todo_M7_redond =number_format($lap2_pro_todo_M7_redondeado1);


    $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 + 1;   //  lleva el conteo de la division para el promedio del salon del 2do lapso
    $lap_suma_total_promedio_Lap_2 = $lap_suma_total_promedio_Lap_2 + $lap2_pro_todo_M7_redond;  // lleva el divisor para el promedio del salon 2do lapso


    if ($row_datos_controlmat['g_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_2 =  $lap_suma_total_promedio_Lap_2 - $lap2_pro_todo_M7_redond; $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 - 1;  }


    $lapso1_materia7_promedio_aula = $lap2_pro_todo_M7_redond;
    $lapso1_materia7_promedio_aula_divisor = $lapso1_materia7_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia7_aula_promedio =  $definitiva_materia7_aula_promedio + $lap2_pro_todo_M7_redond;
     $definitiva_materia7_aula_divisor = $definitiva_materia7_aula_divisor + 1;


}



if ($row_datos_controlmat['g_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['g_convertir'] == 2 ) {  /* alfabetico */
   if ($lap2_pro_todo_M7_redond >= $comparativo_formato_1) { $alfabetico_lap2_pro_todo_M7_redond = $alfabetico_formato_1;  }
   if ($lap2_pro_todo_M7_redond >= $comparativo_formato_2) { $alfabetico_lap2_pro_todo_M7_redond = $alfabetico_formato_2;  }
   if ($lap2_pro_todo_M7_redond >= $comparativo_formato_3) { $alfabetico_lap2_pro_todo_M7_redond = $alfabetico_formato_3;  }
   if ($lap2_pro_todo_M7_redond >= $comparativo_formato_4) { $alfabetico_lap2_pro_todo_M7_redond = $alfabetico_formato_4;  }
   if ($lap2_pro_todo_M7_redond >= $comparativo_formato_5) { $alfabetico_lap2_pro_todo_M7_redond = $alfabetico_formato_5;  }
   if ($lap2_pro_todo_M7_redond >= $comparativo_formato_6) { $alfabetico_lap2_pro_todo_M7_redond = $alfabetico_formato_6;  }
   if ($lap2_pro_todo_M7_redond >= $comparativo_formato_7) { $alfabetico_lap2_pro_todo_M7_redond = $alfabetico_formato_7;  }
   if ($lap2_pro_todo_M7_redond >= $comparativo_formato_8) { $alfabetico_lap2_pro_todo_M7_redond = $alfabetico_formato_8;  }
   if ($lap2_pro_todo_M7_redond >= $comparativo_formato_9) { $alfabetico_lap2_pro_todo_M7_redond = $alfabetico_formato_9;  }
   if ($lap2_pro_todo_M7_redond >= $comparativo_formato_10) { $alfabetico_lap2_pro_todo_M7_redond = $alfabetico_formato_10;  }
   if ($lap2_pro_todo_M7_redond >= $comparativo_formato_11) { $alfabetico_lap2_pro_todo_M7_redond = $alfabetico_formato_11;  }
   if ($lap2_pro_todo_M7_redond >= $comparativo_formato_12) { $alfabetico_lap2_pro_todo_M7_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['g_convertir'] == 3 ) {  /* literal */
  if ($lap2_pro_todo_M7_redond >= $comparativo_formato_1) { $literal_lap2_pro_todo_M7_redond = $literal_formato_1;  }
  if ($lap2_pro_todo_M7_redond >= $comparativo_formato_2) { $literal_lap2_pro_todo_M7_redond = $literal_formato_2;  }
  if ($lap2_pro_todo_M7_redond >= $comparativo_formato_3) { $literal_lap2_pro_todo_M7_redond = $literal_formato_3;  }
  if ($lap2_pro_todo_M7_redond >= $comparativo_formato_4) { $literal_lap2_pro_todo_M7_redond = $literal_formato_4;  }
  if ($lap2_pro_todo_M7_redond >= $comparativo_formato_5) { $literal_lap2_pro_todo_M7_redond = $literal_formato_5;  }
  if ($lap2_pro_todo_M7_redond >= $comparativo_formato_6) { $literal_lap2_pro_todo_M7_redond = $literal_formato_6;  }
  if ($lap2_pro_todo_M7_redond >= $comparativo_formato_7) { $literal_lap2_pro_todo_M7_redond = $literal_formato_7;  }
  if ($lap2_pro_todo_M7_redond >= $comparativo_formato_8) { $literal_lap2_pro_todo_M7_redond = $literal_formato_8;  }
  if ($lap2_pro_todo_M7_redond >= $comparativo_formato_9) { $literal_lap2_pro_todo_M7_redond = $literal_formato_9;  }
  if ($lap2_pro_todo_M7_redond >= $comparativo_formato_10) { $literal_lap2_pro_todo_M7_redond = $literal_formato_10;  }
  if ($lap2_pro_todo_M7_redond >= $comparativo_formato_11) { $literal_lap2_pro_todo_M7_redond = $literal_formato_11;  }
  if ($lap2_pro_todo_M7_redond >= $comparativo_formato_12) { $literal_lap2_pro_todo_M7_redond = $literal_formato_12;  } 
   } /* cierre literal */   ?>








                   <?php 

if ($row_datos_controlmat['g_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['g_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M7_L3xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M7_L3xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M7_L3xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M7_L3xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M7_L3xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M7_L3xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M7_L3xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M7_L3xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M7_L3xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M7_L3xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M7_L3xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M7_L3xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['g_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M7_L3xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M7_L3xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M7_L3xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M7_L3xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M7_L3xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M7_L3xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M7_L3xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M7_L3xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M7_L3xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M7_L3xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M7_L3xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M7_L3xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M7_L3xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>
                        

<?php 
if ($lap3_div_mat7 == '') {
    $lap3_pro_todo_M7_redond = '';
}
else {
    $lap3_pro_todo_M7 = $lap3_tot_mat7/$lap3_div_mat7;
 $lap3_pro_todo_M7_redondeado1 =number_format($lap3_pro_todo_M7, 1, '.', '');
    $lap3_pro_todo_M7_redond =number_format($lap3_pro_todo_M7_redondeado1);


    $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 + 1;   //  lleva el conteo de la division para el promedio del salon del 3er lapso
    $lap_suma_total_promedio_Lap_3 = $lap_suma_total_promedio_Lap_3 + $lap3_pro_todo_M7_redond;  // lleva el divisor para el promedio del salon 2do lapso


if ($row_datos_controlmat['g_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_3 =  $lap_suma_total_promedio_Lap_3 - $lap3_pro_todo_M7_redond; $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 - 1;  }



    $lapso3_materia7_promedio_aula = $lap3_pro_todo_M7_redond;
    $lapso3_materia7_promedio_aula_divisor = $lapso3_materia7_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia7_aula_promedio =  $definitiva_materia7_aula_promedio + $lap3_pro_todo_M7_redond;
     $definitiva_materia7_aula_divisor = $definitiva_materia7_aula_divisor + 1;
}

if ($row_datos_controlmat['g_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['g_convertir'] == 2 ) {  /* alfabetico */
   if ($lap3_pro_todo_M7_redond >= $comparativo_formato_1) { $alfabetico_lap3_pro_todo_M7_redond = $alfabetico_formato_1;  }
   if ($lap3_pro_todo_M7_redond >= $comparativo_formato_2) { $alfabetico_lap3_pro_todo_M7_redond = $alfabetico_formato_2;  }
   if ($lap3_pro_todo_M7_redond >= $comparativo_formato_3) { $alfabetico_lap3_pro_todo_M7_redond = $alfabetico_formato_3;  }
   if ($lap3_pro_todo_M7_redond >= $comparativo_formato_4) { $alfabetico_lap3_pro_todo_M7_redond = $alfabetico_formato_4;  }
   if ($lap3_pro_todo_M7_redond >= $comparativo_formato_5) { $alfabetico_lap3_pro_todo_M7_redond = $alfabetico_formato_5;  }
   if ($lap3_pro_todo_M7_redond >= $comparativo_formato_6) { $alfabetico_lap3_pro_todo_M7_redond = $alfabetico_formato_6;  }
   if ($lap3_pro_todo_M7_redond >= $comparativo_formato_7) { $alfabetico_lap3_pro_todo_M7_redond = $alfabetico_formato_7;  }
   if ($lap3_pro_todo_M7_redond >= $comparativo_formato_8) { $alfabetico_lap3_pro_todo_M7_redond = $alfabetico_formato_8;  }
   if ($lap3_pro_todo_M7_redond >= $comparativo_formato_9) { $alfabetico_lap3_pro_todo_M7_redond = $alfabetico_formato_9;  }
   if ($lap3_pro_todo_M7_redond >= $comparativo_formato_10) { $alfabetico_lap3_pro_todo_M7_redond = $alfabetico_formato_10;  }
   if ($lap3_pro_todo_M7_redond >= $comparativo_formato_11) { $alfabetico_lap3_pro_todo_M7_redond = $alfabetico_formato_11;  }
   if ($lap3_pro_todo_M7_redond >= $comparativo_formato_12) { $alfabetico_lap3_pro_todo_M7_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['g_convertir'] == 3 ) {  /* literal */
  if ($lap3_pro_todo_M7_redond >= $comparativo_formato_1) { $literal_lap3_pro_todo_M7_redond = $literal_formato_1;  }
  if ($lap3_pro_todo_M7_redond >= $comparativo_formato_2) { $literal_lap3_pro_todo_M7_redond = $literal_formato_2;  }
  if ($lap3_pro_todo_M7_redond >= $comparativo_formato_3) { $literal_lap3_pro_todo_M7_redond = $literal_formato_3;  }
  if ($lap3_pro_todo_M7_redond >= $comparativo_formato_4) { $literal_lap3_pro_todo_M7_redond = $literal_formato_4;  }
  if ($lap3_pro_todo_M7_redond >= $comparativo_formato_5) { $literal_lap3_pro_todo_M7_redond = $literal_formato_5;  }
  if ($lap3_pro_todo_M7_redond >= $comparativo_formato_6) { $literal_lap3_pro_todo_M7_redond = $literal_formato_6;  }
  if ($lap3_pro_todo_M7_redond >= $comparativo_formato_7) { $literal_lap3_pro_todo_M7_redond = $literal_formato_7;  }
  if ($lap3_pro_todo_M7_redond >= $comparativo_formato_8) { $literal_lap3_pro_todo_M7_redond = $literal_formato_8;  }
  if ($lap3_pro_todo_M7_redond >= $comparativo_formato_9) { $literal_lap3_pro_todo_M7_redond = $literal_formato_9;  }
  if ($lap3_pro_todo_M7_redond >= $comparativo_formato_10) { $literal_lap3_pro_todo_M7_redond = $literal_formato_10;  }
  if ($lap3_pro_todo_M7_redond >= $comparativo_formato_11) { $literal_lap3_pro_todo_M7_redond = $literal_formato_11;  }
  if ($lap3_pro_todo_M7_redond >= $comparativo_formato_12) { $literal_lap3_pro_todo_M7_redond = $literal_formato_12;  } 
  } /* cierre literal */ ?> 





                    <?php

if ($lap1_pro_todo_M7_redond== '' && $lap2_pro_todo_M7_redond== ''  && $lap3_pro_todo_M7_redond== '') {
    $totalcito_M7 = '';
    $tot_M7 = '';

}

else {
    $totalcito_M7 = $total_seven_con_Au_redon_M7_aproxxx + $row_datos_control_notasM7["nt_AuF"];
}


                    if ($row_datos_controlmat['g_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['g_convertir'] == 2 ) {  /* alfabetico */
   if ($totalcito_M7 >= $comparativo_formato_1) { $alfabetico_totalcito_M7 = $alfabetico_formato_1;  }
   if ($totalcito_M7 >= $comparativo_formato_2) { $alfabetico_totalcito_M7 = $alfabetico_formato_2;  }
   if ($totalcito_M7 >= $comparativo_formato_3) { $alfabetico_totalcito_M7 = $alfabetico_formato_3;  }
   if ($totalcito_M7 >= $comparativo_formato_4) { $alfabetico_totalcito_M7 = $alfabetico_formato_4;  }
   if ($totalcito_M7 >= $comparativo_formato_5) { $alfabetico_totalcito_M7 = $alfabetico_formato_5;  }
   if ($totalcito_M7 >= $comparativo_formato_6) { $alfabetico_totalcito_M7 = $alfabetico_formato_6;  }
   if ($totalcito_M7 >= $comparativo_formato_7) { $alfabetico_totalcito_M7 = $alfabetico_formato_7;  }
   if ($totalcito_M7 >= $comparativo_formato_8) { $alfabetico_totalcito_M7 = $alfabetico_formato_8;  }
   if ($totalcito_M7 >= $comparativo_formato_9) { $alfabetico_totalcito_M7 = $alfabetico_formato_9;  }
   if ($totalcito_M7 >= $comparativo_formato_10) { $alfabetico_totalcito_M7 = $alfabetico_formato_10;  }
   if ($totalcito_M7 >= $comparativo_formato_11) { $alfabetico_totalcito_M7 = $alfabetico_formato_11;  }
   if ($totalcito_M7 >= $comparativo_formato_12) { $alfabetico_totalcito_M7 = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['g_convertir'] == 3 ) {  /* literal */
  if ($totalcito_M7 >= $comparativo_formato_1) { $literal_totalcito_M7 = $literal_formato_1;  }
  if ($totalcito_M7 >= $comparativo_formato_2) { $literal_totalcito_M7 = $literal_formato_2;  }
  if ($totalcito_M7 >= $comparativo_formato_3) { $literal_totalcito_M7 = $literal_formato_3;  }
  if ($totalcito_M7 >= $comparativo_formato_4) { $literal_totalcito_M7 = $literal_formato_4;  }
  if ($totalcito_M7 >= $comparativo_formato_5) { $literal_totalcito_M7 = $literal_formato_5;  }
  if ($totalcito_M7 >= $comparativo_formato_6) { $literal_totalcito_M7 = $literal_formato_6;  }
  if ($totalcito_M7 >= $comparativo_formato_7) { $literal_totalcito_M7 = $literal_formato_7;  }
  if ($totalcito_M7 >= $comparativo_formato_8) { $literal_totalcito_M7 = $literal_formato_8;  }
  if ($totalcito_M7 >= $comparativo_formato_9) { $literal_totalcito_M7 = $literal_formato_9;  }
  if ($totalcito_M7 >= $comparativo_formato_10) { $literal_totalcito_M7 = $literal_formato_10;  }
  if ($totalcito_M7 >= $comparativo_formato_11) { $literal_totalcito_M7 = $literal_formato_11;  }
  if ($totalcito_M7 >= $comparativo_formato_12) { $literal_totalcito_M7 = $literal_formato_12;  } 
   } /* cierre literal */


  ?>
                         

                    












                   
                        
<?php

$tot123_M7 = $definitiva_materia7_aula_promedio/$definitiva_materia7_aula_divisor;

if ($definitiva_materia7_aula_divisor == '0') {
    $tot123_M1_form = '';
}

else {
$tot123_M7_form_redondeado1 = number_format($tot123_M7, 1, '.', '');
    $tot123_M7_form = number_format($tot123_M7_form_redondeado1);

$promedio_total123 = $promedio_total123 +  $tot123_M7_form;     // acumula el promedio total
$promedio_total123_divisor = $promedio_total123_divisor + 1 ;


if ($row_datos_controlmat['g_suma'] != 1)
 {  $promedio_total123 =  $promedio_total123 - $tot123_M7_form; $promedio_total123_divisor =  $promedio_total123_divisor - 1;  }


}



if ($row_datos_controlmat['g_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['g_convertir'] == 2 ) {  /* alfabetico */
   if ($tot123_M7_form >= $comparativo_formato_1) { $alfabetico_tot123_M7_form = $alfabetico_formato_1;  }
   if ($tot123_M7_form >= $comparativo_formato_2) { $alfabetico_tot123_M7_form = $alfabetico_formato_2;  }
   if ($tot123_M7_form >= $comparativo_formato_3) { $alfabetico_tot123_M7_form = $alfabetico_formato_3;  }
   if ($tot123_M7_form >= $comparativo_formato_4) { $alfabetico_tot123_M7_form = $alfabetico_formato_4;  }
   if ($tot123_M7_form >= $comparativo_formato_5) { $alfabetico_tot123_M7_form = $alfabetico_formato_5;  }
   if ($tot123_M7_form >= $comparativo_formato_6) { $alfabetico_tot123_M7_form = $alfabetico_formato_6;  }
   if ($tot123_M7_form >= $comparativo_formato_7) { $alfabetico_tot123_M7_form = $alfabetico_formato_7;  }
   if ($tot123_M7_form >= $comparativo_formato_8) { $alfabetico_tot123_M7_form = $alfabetico_formato_8;  }
   if ($tot123_M7_form >= $comparativo_formato_9) { $alfabetico_tot123_M7_form = $alfabetico_formato_9;  }
   if ($tot123_M7_form >= $comparativo_formato_10) { $alfabetico_tot123_M7_form = $alfabetico_formato_10;  }
   if ($tot123_M7_form >= $comparativo_formato_11) { $alfabetico_tot123_M7_form = $alfabetico_formato_11;  }
   if ($tot123_M7_form >= $comparativo_formato_12) { $alfabetico_tot123_M7_form = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['g_convertir'] == 3 ) {  /* literal */
  if ($tot123_M7_form >= $comparativo_formato_1) { $literal_tot123_M7_form = $literal_formato_1;  }
  if ($tot123_M7_form >= $comparativo_formato_2) { $literal_tot123_M7_form = $literal_formato_2;  }
  if ($tot123_M7_form >= $comparativo_formato_3) { $literal_tot123_M7_form = $literal_formato_3;  }
  if ($tot123_M7_form >= $comparativo_formato_4) { $literal_tot123_M7_form = $literal_formato_4;  }
  if ($tot123_M7_form >= $comparativo_formato_5) { $literal_tot123_M7_form = $literal_formato_5;  }
  if ($tot123_M7_form >= $comparativo_formato_6) { $literal_tot123_M7_form = $literal_formato_6;  }
  if ($tot123_M7_form >= $comparativo_formato_7) { $literal_tot123_M7_form = $literal_formato_7;  }
  if ($tot123_M7_form >= $comparativo_formato_8) { $literal_tot123_M7_form = $literal_formato_8;  }
  if ($tot123_M7_form >= $comparativo_formato_9) { $literal_tot123_M7_form = $literal_formato_9;  }
  if ($tot123_M7_form >= $comparativo_formato_10) { $literal_tot123_M7_form = $literal_formato_10;  }
  if ($tot123_M7_form >= $comparativo_formato_11) { $literal_tot123_M7_form = $literal_formato_11;  }
  if ($tot123_M7_form >= $comparativo_formato_12) { $literal_tot123_M7_form = $literal_formato_12;  } 
     }

$definitiva_materia7_aula_promedio = '0';
$definitiva_materia7_aula_divisor = '0';


?>




                   



<?php  
$pruebass_M7_1 = $row_datos_control_notasM7["rev_uno"];
$pruebass_M7_2 = $row_datos_control_notasM7["rev_dos"];
$pruebass_redong_M7_1 =number_format($pruebass_M7_1);
$pruebass_redong_M7_2 =number_format($pruebass_M7_2); 
  ?>

<!-- nuevo añadido 1 -->
  
<?php

if ($pruebass_M7_1 != '') {  
    if ($row_datos_controlmat['g_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['g_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redong_M7_1 >= $comparativo_formato_1) { $alfabetico_pruebass_redong_M7_1 = $alfabetico_formato_1;  }
       if ($pruebass_redong_M7_1 >= $comparativo_formato_2) { $alfabetico_pruebass_redong_M7_1 = $alfabetico_formato_2;  }
       if ($pruebass_redong_M7_1 >= $comparativo_formato_3) { $alfabetico_pruebass_redong_M7_1 = $alfabetico_formato_3;  }
       if ($pruebass_redong_M7_1 >= $comparativo_formato_4) { $alfabetico_pruebass_redong_M7_1 = $alfabetico_formato_4;  }
       if ($pruebass_redong_M7_1 >= $comparativo_formato_5) { $alfabetico_pruebass_redong_M7_1 = $alfabetico_formato_5;  }
       if ($pruebass_redong_M7_1 >= $comparativo_formato_6) { $alfabetico_pruebass_redong_M7_1 = $alfabetico_formato_6;  }
       if ($pruebass_redong_M7_1 >= $comparativo_formato_7) { $alfabetico_pruebass_redong_M7_1 = $alfabetico_formato_7;  }
       if ($pruebass_redong_M7_1 >= $comparativo_formato_8) { $alfabetico_pruebass_redong_M7_1 = $alfabetico_formato_8;  }
       if ($pruebass_redong_M7_1 >= $comparativo_formato_9) { $alfabetico_pruebass_redong_M7_1 = $alfabetico_formato_9;  }
       if ($pruebass_redong_M7_1 >= $comparativo_formato_10) { $alfabetico_pruebass_redong_M7_1 = $alfabetico_formato_10;  }
       if ($pruebass_redong_M7_1 >= $comparativo_formato_11) { $alfabetico_pruebass_redong_M7_1 = $alfabetico_formato_11;  }
       if ($pruebass_redong_M7_1 >= $comparativo_formato_12) { $alfabetico_pruebass_redong_M7_1 = $alfabetico_formato_12;  }
       } /* cierre alfabetico */
    if ($row_datos_controlmat['g_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redong_M7_1 >= $comparativo_formato_1) { $literal_pruebass_redong_M7_1 = $literal_formato_1;  }
      if ($pruebass_redong_M7_1 >= $comparativo_formato_2) { $literal_pruebass_redong_M7_1 = $literal_formato_2;  }
      if ($pruebass_redong_M7_1 >= $comparativo_formato_3) { $literal_pruebass_redong_M7_1 = $literal_formato_3;  }
      if ($pruebass_redong_M7_1 >= $comparativo_formato_4) { $literal_pruebass_redong_M7_1 = $literal_formato_4;  }
      if ($pruebass_redong_M7_1 >= $comparativo_formato_5) { $literal_pruebass_redong_M7_1 = $literal_formato_5;  }
      if ($pruebass_redong_M7_1 >= $comparativo_formato_6) { $literal_pruebass_redong_M7_1 = $literal_formato_6;  }
      if ($pruebass_redong_M7_1 >= $comparativo_formato_7) { $literal_pruebass_redong_M7_1 = $literal_formato_7;  }
      if ($pruebass_redong_M7_1 >= $comparativo_formato_8) { $literal_pruebass_redong_M7_1 = $literal_formato_8;  }
      if ($pruebass_redong_M7_1 >= $comparativo_formato_9) { $literal_pruebass_redong_M7_1 = $literal_formato_9;  }
      if ($pruebass_redong_M7_1 >= $comparativo_formato_10) { $literal_pruebass_redong_M7_1 = $literal_formato_10;  }
      if ($pruebass_redong_M7_1 >= $comparativo_formato_11) { $literal_pruebass_redong_M7_1 = $literal_formato_11;  }
      if ($pruebass_redong_M7_1 >= $comparativo_formato_12) { $literal_pruebass_redong_M7_1 = $literal_formato_12;  } 
        }
}
?> 
   
   <?php

if ($pruebass_M7_2 != '') {  
    if ($row_datos_controlmat['g_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['g_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redong_M7_2 >= $comparativo_formato_1) { $alfabetico_pruebass_redong_M7_2 = $alfabetico_formato_1;  }
       if ($pruebass_redong_M7_2 >= $comparativo_formato_2) { $alfabetico_pruebass_redong_M7_2 = $alfabetico_formato_2;  }
       if ($pruebass_redong_M7_2 >= $comparativo_formato_3) { $alfabetico_pruebass_redong_M7_2 = $alfabetico_formato_3;  }
       if ($pruebass_redong_M7_2 >= $comparativo_formato_4) { $alfabetico_pruebass_redong_M7_2 = $alfabetico_formato_4;  }
       if ($pruebass_redong_M7_2 >= $comparativo_formato_5) { $alfabetico_pruebass_redong_M7_2 = $alfabetico_formato_5;  }
       if ($pruebass_redong_M7_2 >= $comparativo_formato_6) { $alfabetico_pruebass_redong_M7_2 = $alfabetico_formato_6;  }
       if ($pruebass_redong_M7_2 >= $comparativo_formato_7) { $alfabetico_pruebass_redong_M7_2 = $alfabetico_formato_7;  }
       if ($pruebass_redong_M7_2 >= $comparativo_formato_8) { $alfabetico_pruebass_redong_M7_2 = $alfabetico_formato_8;  }
       if ($pruebass_redong_M7_2 >= $comparativo_formato_9) { $alfabetico_pruebass_redong_M7_2 = $alfabetico_formato_9;  }
       if ($pruebass_redong_M7_2 >= $comparativo_formato_10) { $alfabetico_pruebass_redong_M7_2 = $alfabetico_formato_10;  }
       if ($pruebass_redong_M7_2 >= $comparativo_formato_11) { $alfabetico_pruebass_redong_M7_2 = $alfabetico_formato_11;  }
       if ($pruebass_redong_M7_2 >= $comparativo_formato_12) { $alfabetico_pruebass_redong_M7_2 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['g_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redong_M7_2 >= $comparativo_formato_1) { $literal_pruebass_redong_M7_2 = $literal_formato_1;  }
      if ($pruebass_redong_M7_2 >= $comparativo_formato_2) { $literal_pruebass_redong_M7_2 = $literal_formato_2;  }
      if ($pruebass_redong_M7_2 >= $comparativo_formato_3) { $literal_pruebass_redong_M7_2 = $literal_formato_3;  }
      if ($pruebass_redong_M7_2 >= $comparativo_formato_4) { $literal_pruebass_redong_M7_2 = $literal_formato_4;  }
      if ($pruebass_redong_M7_2 >= $comparativo_formato_5) { $literal_pruebass_redong_M7_2 = $literal_formato_5;  }
      if ($pruebass_redong_M7_2 >= $comparativo_formato_6) { $literal_pruebass_redong_M7_2 = $literal_formato_6;  }
      if ($pruebass_redong_M7_2 >= $comparativo_formato_7) { $literal_pruebass_redong_M7_2 = $literal_formato_7;  }
      if ($pruebass_redong_M7_2 >= $comparativo_formato_8) { $literal_pruebass_redong_M7_2 = $literal_formato_8;  }
      if ($pruebass_redong_M7_2 >= $comparativo_formato_9) { $literal_pruebass_redong_M7_2 = $literal_formato_9;  }
      if ($pruebass_redong_M7_2 >= $comparativo_formato_10) { $literal_pruebass_redong_M7_2 = $literal_formato_10;  }
      if ($pruebass_redong_M7_2 >= $comparativo_formato_11) { $literal_pruebass_redong_M7_2 = $literal_formato_11;  }
      if ($pruebass_redong_M7_2 >= $comparativo_formato_12) { $literal_pruebass_redong_M7_2 = $literal_formato_12;  } 
         }
}
?> 











 <?php

               $h_ayuda = '';

                if ($row_datos_controlmat['h_suma'] !=1) {
                  $h_ayuda = '#';
               }

               ?>

               <?php 

if ($row_datos_controlmat['h_convertir'] == 1 ) {  /* numerico */
       
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
    } /* cierre alfabetico */

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
 } /* cierre literal */


                    ?>

                        
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
   } /* cierre alfabetico */

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
   } /* cierre literal */ ?>




                    <?php 

if ($row_datos_controlmat['h_convertir'] == 1 ) {  /* numerico */
  
} /* cierre numerico */
if ($row_datos_controlmat['h_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M8_L2xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M8_L2xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M8_L2xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M8_L2xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M8_L2xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M8_L2xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M8_L2xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M8_L2xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M8_L2xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M8_L2xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M8_L2xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M8_L2xx = $alfabetico_formato_12;  }
   } /* cierre alfabetico */

if ($row_datos_controlmat['h_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M8_L2xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M8_L2xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M8_L2xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M8_L2xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M8_L2xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M8_L2xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M8_L2xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M8_L2xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M8_L2xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M8_L2xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M8_L2xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M8_L2xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M8_L2xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>


<?php 

if ($lap2_div_mat8 == '') {
    $lap2_pro_todo_M8_redond = '';
}

else {

    $lap2_pro_todo_M8 = $lap2_tot_mat8/$lap2_div_mat8;

  $lap2_pro_todo_M8_redondeado1 =number_format($lap2_pro_todo_M8, 1, '.', '');

    $lap2_pro_todo_M8_redond =number_format($lap2_pro_todo_M8_redondeado1);


    $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 + 1;   //  lleva el conteo de la division para el promedio del salon del 2do lapso
    $lap_suma_total_promedio_Lap_2 = $lap_suma_total_promedio_Lap_2 + $lap2_pro_todo_M8_redond;  // lleva el divisor para el promedio del salon 2do lapso


    if ($row_datos_controlmat['h_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_2 =  $lap_suma_total_promedio_Lap_2 - $lap2_pro_todo_M8_redond; $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 - 1;  }


    $lapso1_materia8_promedio_aula = $lap2_pro_todo_M8_redond;
    $lapso1_materia8_promedio_aula_divisor = $lapso1_materia8_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia8_aula_promedio =  $definitiva_materia8_aula_promedio + $lap2_pro_todo_M8_redond;
     $definitiva_materia8_aula_divisor = $definitiva_materia8_aula_divisor + 1;


}



if ($row_datos_controlmat['h_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['h_convertir'] == 2 ) {  /* alfabetico */
   if ($lap2_pro_todo_M8_redond >= $comparativo_formato_1) { $alfabetico_lap2_pro_todo_M8_redond = $alfabetico_formato_1;  }
   if ($lap2_pro_todo_M8_redond >= $comparativo_formato_2) { $alfabetico_lap2_pro_todo_M8_redond = $alfabetico_formato_2;  }
   if ($lap2_pro_todo_M8_redond >= $comparativo_formato_3) { $alfabetico_lap2_pro_todo_M8_redond = $alfabetico_formato_3;  }
   if ($lap2_pro_todo_M8_redond >= $comparativo_formato_4) { $alfabetico_lap2_pro_todo_M8_redond = $alfabetico_formato_4;  }
   if ($lap2_pro_todo_M8_redond >= $comparativo_formato_5) { $alfabetico_lap2_pro_todo_M8_redond = $alfabetico_formato_5;  }
   if ($lap2_pro_todo_M8_redond >= $comparativo_formato_6) { $alfabetico_lap2_pro_todo_M8_redond = $alfabetico_formato_6;  }
   if ($lap2_pro_todo_M8_redond >= $comparativo_formato_7) { $alfabetico_lap2_pro_todo_M8_redond = $alfabetico_formato_7;  }
   if ($lap2_pro_todo_M8_redond >= $comparativo_formato_8) { $alfabetico_lap2_pro_todo_M8_redond = $alfabetico_formato_8;  }
   if ($lap2_pro_todo_M8_redond >= $comparativo_formato_9) { $alfabetico_lap2_pro_todo_M8_redond = $alfabetico_formato_9;  }
   if ($lap2_pro_todo_M8_redond >= $comparativo_formato_10) { $alfabetico_lap2_pro_todo_M8_redond = $alfabetico_formato_10;  }
   if ($lap2_pro_todo_M8_redond >= $comparativo_formato_11) { $alfabetico_lap2_pro_todo_M8_redond = $alfabetico_formato_11;  }
   if ($lap2_pro_todo_M8_redond >= $comparativo_formato_12) { $alfabetico_lap2_pro_todo_M8_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['h_convertir'] == 3 ) {  /* literal */
  if ($lap2_pro_todo_M8_redond >= $comparativo_formato_1) { $literal_lap2_pro_todo_M8_redond = $literal_formato_1;  }
  if ($lap2_pro_todo_M8_redond >= $comparativo_formato_2) { $literal_lap2_pro_todo_M8_redond = $literal_formato_2;  }
  if ($lap2_pro_todo_M8_redond >= $comparativo_formato_3) { $literal_lap2_pro_todo_M8_redond = $literal_formato_3;  }
  if ($lap2_pro_todo_M8_redond >= $comparativo_formato_4) { $literal_lap2_pro_todo_M8_redond = $literal_formato_4;  }
  if ($lap2_pro_todo_M8_redond >= $comparativo_formato_5) { $literal_lap2_pro_todo_M8_redond = $literal_formato_5;  }
  if ($lap2_pro_todo_M8_redond >= $comparativo_formato_6) { $literal_lap2_pro_todo_M8_redond = $literal_formato_6;  }
  if ($lap2_pro_todo_M8_redond >= $comparativo_formato_7) { $literal_lap2_pro_todo_M8_redond = $literal_formato_7;  }
  if ($lap2_pro_todo_M8_redond >= $comparativo_formato_8) { $literal_lap2_pro_todo_M8_redond = $literal_formato_8;  }
  if ($lap2_pro_todo_M8_redond >= $comparativo_formato_9) { $literal_lap2_pro_todo_M8_redond = $literal_formato_9;  }
  if ($lap2_pro_todo_M8_redond >= $comparativo_formato_10) { $literal_lap2_pro_todo_M8_redond = $literal_formato_10;  }
  if ($lap2_pro_todo_M8_redond >= $comparativo_formato_11) { $literal_lap2_pro_todo_M8_redond = $literal_formato_11;  }
  if ($lap2_pro_todo_M8_redond >= $comparativo_formato_12) { $literal_lap2_pro_todo_M8_redond = $literal_formato_12;  } 
   } /* cierre literal */   ?>








                   <?php 

if ($row_datos_controlmat['h_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['h_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M8_L3xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M8_L3xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M8_L3xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M8_L3xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M8_L3xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M8_L3xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M8_L3xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M8_L3xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M8_L3xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M8_L3xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M8_L3xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M8_L3xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['h_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M8_L3xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M8_L3xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M8_L3xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M8_L3xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M8_L3xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M8_L3xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M8_L3xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M8_L3xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M8_L3xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M8_L3xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M8_L3xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M8_L3xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M8_L3xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>
                        

<?php 
if ($lap3_div_mat8 == '') {
    $lap3_pro_todo_M8_redond = '';
}
else {
    $lap3_pro_todo_M8 = $lap3_tot_mat8/$lap3_div_mat8;
 $lap3_pro_todo_M8_redondeado1 =number_format($lap3_pro_todo_M8, 1, '.', '');
    $lap3_pro_todo_M8_redond =number_format($lap3_pro_todo_M8_redondeado1);


    $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 + 1;   //  lleva el conteo de la division para el promedio del salon del 3er lapso
    $lap_suma_total_promedio_Lap_3 = $lap_suma_total_promedio_Lap_3 + $lap3_pro_todo_M8_redond;  // lleva el divisor para el promedio del salon 2do lapso


if ($row_datos_controlmat['h_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_3 =  $lap_suma_total_promedio_Lap_3 - $lap3_pro_todo_M8_redond; $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 - 1;  }



    $lapso3_materia8_promedio_aula = $lap3_pro_todo_M8_redond;
    $lapso3_materia8_promedio_aula_divisor = $lapso3_materia8_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia8_aula_promedio =  $definitiva_materia8_aula_promedio + $lap3_pro_todo_M8_redond;
     $definitiva_materia8_aula_divisor = $definitiva_materia8_aula_divisor + 1;
}

if ($row_datos_controlmat['h_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['h_convertir'] == 2 ) {  /* alfabetico */
   if ($lap3_pro_todo_M8_redond >= $comparativo_formato_1) { $alfabetico_lap3_pro_todo_M8_redond = $alfabetico_formato_1;  }
   if ($lap3_pro_todo_M8_redond >= $comparativo_formato_2) { $alfabetico_lap3_pro_todo_M8_redond = $alfabetico_formato_2;  }
   if ($lap3_pro_todo_M8_redond >= $comparativo_formato_3) { $alfabetico_lap3_pro_todo_M8_redond = $alfabetico_formato_3;  }
   if ($lap3_pro_todo_M8_redond >= $comparativo_formato_4) { $alfabetico_lap3_pro_todo_M8_redond = $alfabetico_formato_4;  }
   if ($lap3_pro_todo_M8_redond >= $comparativo_formato_5) { $alfabetico_lap3_pro_todo_M8_redond = $alfabetico_formato_5;  }
   if ($lap3_pro_todo_M8_redond >= $comparativo_formato_6) { $alfabetico_lap3_pro_todo_M8_redond = $alfabetico_formato_6;  }
   if ($lap3_pro_todo_M8_redond >= $comparativo_formato_7) { $alfabetico_lap3_pro_todo_M8_redond = $alfabetico_formato_7;  }
   if ($lap3_pro_todo_M8_redond >= $comparativo_formato_8) { $alfabetico_lap3_pro_todo_M8_redond = $alfabetico_formato_8;  }
   if ($lap3_pro_todo_M8_redond >= $comparativo_formato_9) { $alfabetico_lap3_pro_todo_M8_redond = $alfabetico_formato_9;  }
   if ($lap3_pro_todo_M8_redond >= $comparativo_formato_10) { $alfabetico_lap3_pro_todo_M8_redond = $alfabetico_formato_10;  }
   if ($lap3_pro_todo_M8_redond >= $comparativo_formato_11) { $alfabetico_lap3_pro_todo_M8_redond = $alfabetico_formato_11;  }
   if ($lap3_pro_todo_M8_redond >= $comparativo_formato_12) { $alfabetico_lap3_pro_todo_M8_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['h_convertir'] == 3 ) {  /* literal */
  if ($lap3_pro_todo_M8_redond >= $comparativo_formato_1) { $literal_lap3_pro_todo_M8_redond = $literal_formato_1;  }
  if ($lap3_pro_todo_M8_redond >= $comparativo_formato_2) { $literal_lap3_pro_todo_M8_redond = $literal_formato_2;  }
  if ($lap3_pro_todo_M8_redond >= $comparativo_formato_3) { $literal_lap3_pro_todo_M8_redond = $literal_formato_3;  }
  if ($lap3_pro_todo_M8_redond >= $comparativo_formato_4) { $literal_lap3_pro_todo_M8_redond = $literal_formato_4;  }
  if ($lap3_pro_todo_M8_redond >= $comparativo_formato_5) { $literal_lap3_pro_todo_M8_redond = $literal_formato_5;  }
  if ($lap3_pro_todo_M8_redond >= $comparativo_formato_6) { $literal_lap3_pro_todo_M8_redond = $literal_formato_6;  }
  if ($lap3_pro_todo_M8_redond >= $comparativo_formato_7) { $literal_lap3_pro_todo_M8_redond = $literal_formato_7;  }
  if ($lap3_pro_todo_M8_redond >= $comparativo_formato_8) { $literal_lap3_pro_todo_M8_redond = $literal_formato_8;  }
  if ($lap3_pro_todo_M8_redond >= $comparativo_formato_9) { $literal_lap3_pro_todo_M8_redond = $literal_formato_9;  }
  if ($lap3_pro_todo_M8_redond >= $comparativo_formato_10) { $literal_lap3_pro_todo_M8_redond = $literal_formato_10;  }
  if ($lap3_pro_todo_M8_redond >= $comparativo_formato_11) { $literal_lap3_pro_todo_M8_redond = $literal_formato_11;  }
  if ($lap3_pro_todo_M8_redond >= $comparativo_formato_12) { $literal_lap3_pro_todo_M8_redond = $literal_formato_12;  } 
  } /* cierre literal */ ?> 





                    <?php

if ($lap1_pro_todo_M8_redond== '' && $lap2_pro_todo_M8_redond== ''  && $lap3_pro_todo_M8_redond== '') {
    $totalcito_M8 = '';
    $tot_M8 = '';

}

else {
    $totalcito_M8 = $total_seven_con_Au_redon_M8_aproxxx + $row_datos_control_notasM8["nt_AuF"];
}


                    if ($row_datos_controlmat['h_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['h_convertir'] == 2 ) {  /* alfabetico */
   if ($totalcito_M8 >= $comparativo_formato_1) { $alfabetico_totalcito_M8 = $alfabetico_formato_1;  }
   if ($totalcito_M8 >= $comparativo_formato_2) { $alfabetico_totalcito_M8 = $alfabetico_formato_2;  }
   if ($totalcito_M8 >= $comparativo_formato_3) { $alfabetico_totalcito_M8 = $alfabetico_formato_3;  }
   if ($totalcito_M8 >= $comparativo_formato_4) { $alfabetico_totalcito_M8 = $alfabetico_formato_4;  }
   if ($totalcito_M8 >= $comparativo_formato_5) { $alfabetico_totalcito_M8 = $alfabetico_formato_5;  }
   if ($totalcito_M8 >= $comparativo_formato_6) { $alfabetico_totalcito_M8 = $alfabetico_formato_6;  }
   if ($totalcito_M8 >= $comparativo_formato_7) { $alfabetico_totalcito_M8 = $alfabetico_formato_7;  }
   if ($totalcito_M8 >= $comparativo_formato_8) { $alfabetico_totalcito_M8 = $alfabetico_formato_8;  }
   if ($totalcito_M8 >= $comparativo_formato_9) { $alfabetico_totalcito_M8 = $alfabetico_formato_9;  }
   if ($totalcito_M8 >= $comparativo_formato_10) { $alfabetico_totalcito_M8 = $alfabetico_formato_10;  }
   if ($totalcito_M8 >= $comparativo_formato_11) { $alfabetico_totalcito_M8 = $alfabetico_formato_11;  }
   if ($totalcito_M8 >= $comparativo_formato_12) { $alfabetico_totalcito_M8 = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['h_convertir'] == 3 ) {  /* literal */
  if ($totalcito_M8 >= $comparativo_formato_1) { $literal_totalcito_M8 = $literal_formato_1;  }
  if ($totalcito_M8 >= $comparativo_formato_2) { $literal_totalcito_M8 = $literal_formato_2;  }
  if ($totalcito_M8 >= $comparativo_formato_3) { $literal_totalcito_M8 = $literal_formato_3;  }
  if ($totalcito_M8 >= $comparativo_formato_4) { $literal_totalcito_M8 = $literal_formato_4;  }
  if ($totalcito_M8 >= $comparativo_formato_5) { $literal_totalcito_M8 = $literal_formato_5;  }
  if ($totalcito_M8 >= $comparativo_formato_6) { $literal_totalcito_M8 = $literal_formato_6;  }
  if ($totalcito_M8 >= $comparativo_formato_7) { $literal_totalcito_M8 = $literal_formato_7;  }
  if ($totalcito_M8 >= $comparativo_formato_8) { $literal_totalcito_M8 = $literal_formato_8;  }
  if ($totalcito_M8 >= $comparativo_formato_9) { $literal_totalcito_M8 = $literal_formato_9;  }
  if ($totalcito_M8 >= $comparativo_formato_10) { $literal_totalcito_M8 = $literal_formato_10;  }
  if ($totalcito_M8 >= $comparativo_formato_11) { $literal_totalcito_M8 = $literal_formato_11;  }
  if ($totalcito_M8 >= $comparativo_formato_12) { $literal_totalcito_M8 = $literal_formato_12;  } 
   } /* cierre literal */


  ?>
                         

                    












                   
                        
<?php

$tot123_M8 = $definitiva_materia8_aula_promedio/$definitiva_materia8_aula_divisor;

if ($definitiva_materia8_aula_divisor == '0') {
    $tot123_M1_form = '';
}

else {
$tot123_M8_form_redondeado1 = number_format($tot123_M8, 1, '.', '');
    $tot123_M8_form = number_format($tot123_M8_form_redondeado1);

$promedio_total123 = $promedio_total123 +  $tot123_M8_form;     // acumula el promedio total
$promedio_total123_divisor = $promedio_total123_divisor + 1 ;


if ($row_datos_controlmat['h_suma'] != 1)
 {  $promedio_total123 =  $promedio_total123 - $tot123_M8_form; $promedio_total123_divisor =  $promedio_total123_divisor - 1;  }


}



if ($row_datos_controlmat['h_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['h_convertir'] == 2 ) {  /* alfabetico */
   if ($tot123_M8_form >= $comparativo_formato_1) { $alfabetico_tot123_M8_form = $alfabetico_formato_1;  }
   if ($tot123_M8_form >= $comparativo_formato_2) { $alfabetico_tot123_M8_form = $alfabetico_formato_2;  }
   if ($tot123_M8_form >= $comparativo_formato_3) { $alfabetico_tot123_M8_form = $alfabetico_formato_3;  }
   if ($tot123_M8_form >= $comparativo_formato_4) { $alfabetico_tot123_M8_form = $alfabetico_formato_4;  }
   if ($tot123_M8_form >= $comparativo_formato_5) { $alfabetico_tot123_M8_form = $alfabetico_formato_5;  }
   if ($tot123_M8_form >= $comparativo_formato_6) { $alfabetico_tot123_M8_form = $alfabetico_formato_6;  }
   if ($tot123_M8_form >= $comparativo_formato_7) { $alfabetico_tot123_M8_form = $alfabetico_formato_7;  }
   if ($tot123_M8_form >= $comparativo_formato_8) { $alfabetico_tot123_M8_form = $alfabetico_formato_8;  }
   if ($tot123_M8_form >= $comparativo_formato_9) { $alfabetico_tot123_M8_form = $alfabetico_formato_9;  }
   if ($tot123_M8_form >= $comparativo_formato_10) { $alfabetico_tot123_M8_form = $alfabetico_formato_10;  }
   if ($tot123_M8_form >= $comparativo_formato_11) { $alfabetico_tot123_M8_form = $alfabetico_formato_11;  }
   if ($tot123_M8_form >= $comparativo_formato_12) { $alfabetico_tot123_M8_form = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['h_convertir'] == 3 ) {  /* literal */
  if ($tot123_M8_form >= $comparativo_formato_1) { $literal_tot123_M8_form = $literal_formato_1;  }
  if ($tot123_M8_form >= $comparativo_formato_2) { $literal_tot123_M8_form = $literal_formato_2;  }
  if ($tot123_M8_form >= $comparativo_formato_3) { $literal_tot123_M8_form = $literal_formato_3;  }
  if ($tot123_M8_form >= $comparativo_formato_4) { $literal_tot123_M8_form = $literal_formato_4;  }
  if ($tot123_M8_form >= $comparativo_formato_5) { $literal_tot123_M8_form = $literal_formato_5;  }
  if ($tot123_M8_form >= $comparativo_formato_6) { $literal_tot123_M8_form = $literal_formato_6;  }
  if ($tot123_M8_form >= $comparativo_formato_7) { $literal_tot123_M8_form = $literal_formato_7;  }
  if ($tot123_M8_form >= $comparativo_formato_8) { $literal_tot123_M8_form = $literal_formato_8;  }
  if ($tot123_M8_form >= $comparativo_formato_9) { $literal_tot123_M8_form = $literal_formato_9;  }
  if ($tot123_M8_form >= $comparativo_formato_10) { $literal_tot123_M8_form = $literal_formato_10;  }
  if ($tot123_M8_form >= $comparativo_formato_11) { $literal_tot123_M8_form = $literal_formato_11;  }
  if ($tot123_M8_form >= $comparativo_formato_12) { $literal_tot123_M8_form = $literal_formato_12;  } 
     }

$definitiva_materia8_aula_promedio = '0';
$definitiva_materia8_aula_divisor = '0';


?>




                   



<?php  
$pruebass_M8_1 = $row_datos_control_notasM8["rev_uno"];
$pruebass_M8_2 = $row_datos_control_notasM8["rev_dos"];
$pruebass_redonh_M8_1 =number_format($pruebass_M8_1);
$pruebass_redonh_M8_2 =number_format($pruebass_M8_2); 
  ?>

<!-- nuevo añadido 1 -->
  
<?php

if ($pruebass_M8_1 != '') {  
    if ($row_datos_controlmat['h_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['h_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redonh_M8_1 >= $comparativo_formato_1) { $alfabetico_pruebass_redonh_M8_1 = $alfabetico_formato_1;  }
       if ($pruebass_redonh_M8_1 >= $comparativo_formato_2) { $alfabetico_pruebass_redonh_M8_1 = $alfabetico_formato_2;  }
       if ($pruebass_redonh_M8_1 >= $comparativo_formato_3) { $alfabetico_pruebass_redonh_M8_1 = $alfabetico_formato_3;  }
       if ($pruebass_redonh_M8_1 >= $comparativo_formato_4) { $alfabetico_pruebass_redonh_M8_1 = $alfabetico_formato_4;  }
       if ($pruebass_redonh_M8_1 >= $comparativo_formato_5) { $alfabetico_pruebass_redonh_M8_1 = $alfabetico_formato_5;  }
       if ($pruebass_redonh_M8_1 >= $comparativo_formato_6) { $alfabetico_pruebass_redonh_M8_1 = $alfabetico_formato_6;  }
       if ($pruebass_redonh_M8_1 >= $comparativo_formato_7) { $alfabetico_pruebass_redonh_M8_1 = $alfabetico_formato_7;  }
       if ($pruebass_redonh_M8_1 >= $comparativo_formato_8) { $alfabetico_pruebass_redonh_M8_1 = $alfabetico_formato_8;  }
       if ($pruebass_redonh_M8_1 >= $comparativo_formato_9) { $alfabetico_pruebass_redonh_M8_1 = $alfabetico_formato_9;  }
       if ($pruebass_redonh_M8_1 >= $comparativo_formato_10) { $alfabetico_pruebass_redonh_M8_1 = $alfabetico_formato_10;  }
       if ($pruebass_redonh_M8_1 >= $comparativo_formato_11) { $alfabetico_pruebass_redonh_M8_1 = $alfabetico_formato_11;  }
       if ($pruebass_redonh_M8_1 >= $comparativo_formato_12) { $alfabetico_pruebass_redonh_M8_1 = $alfabetico_formato_12;  }
       } /* cierre alfabetico */
    if ($row_datos_controlmat['h_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redonh_M8_1 >= $comparativo_formato_1) { $literal_pruebass_redonh_M8_1 = $literal_formato_1;  }
      if ($pruebass_redonh_M8_1 >= $comparativo_formato_2) { $literal_pruebass_redonh_M8_1 = $literal_formato_2;  }
      if ($pruebass_redonh_M8_1 >= $comparativo_formato_3) { $literal_pruebass_redonh_M8_1 = $literal_formato_3;  }
      if ($pruebass_redonh_M8_1 >= $comparativo_formato_4) { $literal_pruebass_redonh_M8_1 = $literal_formato_4;  }
      if ($pruebass_redonh_M8_1 >= $comparativo_formato_5) { $literal_pruebass_redonh_M8_1 = $literal_formato_5;  }
      if ($pruebass_redonh_M8_1 >= $comparativo_formato_6) { $literal_pruebass_redonh_M8_1 = $literal_formato_6;  }
      if ($pruebass_redonh_M8_1 >= $comparativo_formato_7) { $literal_pruebass_redonh_M8_1 = $literal_formato_7;  }
      if ($pruebass_redonh_M8_1 >= $comparativo_formato_8) { $literal_pruebass_redonh_M8_1 = $literal_formato_8;  }
      if ($pruebass_redonh_M8_1 >= $comparativo_formato_9) { $literal_pruebass_redonh_M8_1 = $literal_formato_9;  }
      if ($pruebass_redonh_M8_1 >= $comparativo_formato_10) { $literal_pruebass_redonh_M8_1 = $literal_formato_10;  }
      if ($pruebass_redonh_M8_1 >= $comparativo_formato_11) { $literal_pruebass_redonh_M8_1 = $literal_formato_11;  }
      if ($pruebass_redonh_M8_1 >= $comparativo_formato_12) { $literal_pruebass_redonh_M8_1 = $literal_formato_12;  } 
        }
}
?> 
   
   <?php

if ($pruebass_M8_2 != '') {  
    if ($row_datos_controlmat['h_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['h_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redonh_M8_2 >= $comparativo_formato_1) { $alfabetico_pruebass_redonh_M8_2 = $alfabetico_formato_1;  }
       if ($pruebass_redonh_M8_2 >= $comparativo_formato_2) { $alfabetico_pruebass_redonh_M8_2 = $alfabetico_formato_2;  }
       if ($pruebass_redonh_M8_2 >= $comparativo_formato_3) { $alfabetico_pruebass_redonh_M8_2 = $alfabetico_formato_3;  }
       if ($pruebass_redonh_M8_2 >= $comparativo_formato_4) { $alfabetico_pruebass_redonh_M8_2 = $alfabetico_formato_4;  }
       if ($pruebass_redonh_M8_2 >= $comparativo_formato_5) { $alfabetico_pruebass_redonh_M8_2 = $alfabetico_formato_5;  }
       if ($pruebass_redonh_M8_2 >= $comparativo_formato_6) { $alfabetico_pruebass_redonh_M8_2 = $alfabetico_formato_6;  }
       if ($pruebass_redonh_M8_2 >= $comparativo_formato_7) { $alfabetico_pruebass_redonh_M8_2 = $alfabetico_formato_7;  }
       if ($pruebass_redonh_M8_2 >= $comparativo_formato_8) { $alfabetico_pruebass_redonh_M8_2 = $alfabetico_formato_8;  }
       if ($pruebass_redonh_M8_2 >= $comparativo_formato_9) { $alfabetico_pruebass_redonh_M8_2 = $alfabetico_formato_9;  }
       if ($pruebass_redonh_M8_2 >= $comparativo_formato_10) { $alfabetico_pruebass_redonh_M8_2 = $alfabetico_formato_10;  }
       if ($pruebass_redonh_M8_2 >= $comparativo_formato_11) { $alfabetico_pruebass_redonh_M8_2 = $alfabetico_formato_11;  }
       if ($pruebass_redonh_M8_2 >= $comparativo_formato_12) { $alfabetico_pruebass_redonh_M8_2 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['h_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redonh_M8_2 >= $comparativo_formato_1) { $literal_pruebass_redonh_M8_2 = $literal_formato_1;  }
      if ($pruebass_redonh_M8_2 >= $comparativo_formato_2) { $literal_pruebass_redonh_M8_2 = $literal_formato_2;  }
      if ($pruebass_redonh_M8_2 >= $comparativo_formato_3) { $literal_pruebass_redonh_M8_2 = $literal_formato_3;  }
      if ($pruebass_redonh_M8_2 >= $comparativo_formato_4) { $literal_pruebass_redonh_M8_2 = $literal_formato_4;  }
      if ($pruebass_redonh_M8_2 >= $comparativo_formato_5) { $literal_pruebass_redonh_M8_2 = $literal_formato_5;  }
      if ($pruebass_redonh_M8_2 >= $comparativo_formato_6) { $literal_pruebass_redonh_M8_2 = $literal_formato_6;  }
      if ($pruebass_redonh_M8_2 >= $comparativo_formato_7) { $literal_pruebass_redonh_M8_2 = $literal_formato_7;  }
      if ($pruebass_redonh_M8_2 >= $comparativo_formato_8) { $literal_pruebass_redonh_M8_2 = $literal_formato_8;  }
      if ($pruebass_redonh_M8_2 >= $comparativo_formato_9) { $literal_pruebass_redonh_M8_2 = $literal_formato_9;  }
      if ($pruebass_redonh_M8_2 >= $comparativo_formato_10) { $literal_pruebass_redonh_M8_2 = $literal_formato_10;  }
      if ($pruebass_redonh_M8_2 >= $comparativo_formato_11) { $literal_pruebass_redonh_M8_2 = $literal_formato_11;  }
      if ($pruebass_redonh_M8_2 >= $comparativo_formato_12) { $literal_pruebass_redonh_M8_2 = $literal_formato_12;  } 
         }
}
?> 




 <?php

               $i_ayuda = '';

                if ($row_datos_controlmat['i_suma'] !=1) {
                  $i_ayuda = '#';
               }

               ?>

               <?php 

if ($row_datos_controlmat['i_convertir'] == 1 ) {  /* numerico */
       
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
    } /* cierre alfabetico */

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
 } /* cierre literal */


                    ?>

                        
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
   } /* cierre alfabetico */

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
   } /* cierre literal */ ?>




                    <?php 

if ($row_datos_controlmat['i_convertir'] == 1 ) {  /* numerico */
  
} /* cierre numerico */
if ($row_datos_controlmat['i_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M9_L2xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M9_L2xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M9_L2xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M9_L2xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M9_L2xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M9_L2xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M9_L2xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M9_L2xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M9_L2xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M9_L2xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M9_L2xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M9_L2xx = $alfabetico_formato_12;  }
   } /* cierre alfabetico */

if ($row_datos_controlmat['i_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M9_L2xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M9_L2xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M9_L2xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M9_L2xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M9_L2xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M9_L2xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M9_L2xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M9_L2xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M9_L2xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M9_L2xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M9_L2xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M9_L2xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M9_L2xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>


<?php 

if ($lap2_div_mat9 == '') {
    $lap2_pro_todo_M9_redond = '';
}

else {

    $lap2_pro_todo_M9 = $lap2_tot_mat9/$lap2_div_mat9;

  $lap2_pro_todo_M9_redondeado1 =number_format($lap2_pro_todo_M9, 1, '.', '');

    $lap2_pro_todo_M9_redond =number_format($lap2_pro_todo_M9_redondeado1);


    $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 + 1;   //  lleva el conteo de la division para el promedio del salon del 2do lapso
    $lap_suma_total_promedio_Lap_2 = $lap_suma_total_promedio_Lap_2 + $lap2_pro_todo_M9_redond;  // lleva el divisor para el promedio del salon 2do lapso


    if ($row_datos_controlmat['i_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_2 =  $lap_suma_total_promedio_Lap_2 - $lap2_pro_todo_M9_redond; $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 - 1;  }


    $lapso1_materia9_promedio_aula = $lap2_pro_todo_M9_redond;
    $lapso1_materia9_promedio_aula_divisor = $lapso1_materia9_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia9_aula_promedio =  $definitiva_materia9_aula_promedio + $lap2_pro_todo_M9_redond;
     $definitiva_materia9_aula_divisor = $definitiva_materia9_aula_divisor + 1;


}



if ($row_datos_controlmat['i_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['i_convertir'] == 2 ) {  /* alfabetico */
   if ($lap2_pro_todo_M9_redond >= $comparativo_formato_1) { $alfabetico_lap2_pro_todo_M9_redond = $alfabetico_formato_1;  }
   if ($lap2_pro_todo_M9_redond >= $comparativo_formato_2) { $alfabetico_lap2_pro_todo_M9_redond = $alfabetico_formato_2;  }
   if ($lap2_pro_todo_M9_redond >= $comparativo_formato_3) { $alfabetico_lap2_pro_todo_M9_redond = $alfabetico_formato_3;  }
   if ($lap2_pro_todo_M9_redond >= $comparativo_formato_4) { $alfabetico_lap2_pro_todo_M9_redond = $alfabetico_formato_4;  }
   if ($lap2_pro_todo_M9_redond >= $comparativo_formato_5) { $alfabetico_lap2_pro_todo_M9_redond = $alfabetico_formato_5;  }
   if ($lap2_pro_todo_M9_redond >= $comparativo_formato_6) { $alfabetico_lap2_pro_todo_M9_redond = $alfabetico_formato_6;  }
   if ($lap2_pro_todo_M9_redond >= $comparativo_formato_7) { $alfabetico_lap2_pro_todo_M9_redond = $alfabetico_formato_7;  }
   if ($lap2_pro_todo_M9_redond >= $comparativo_formato_8) { $alfabetico_lap2_pro_todo_M9_redond = $alfabetico_formato_8;  }
   if ($lap2_pro_todo_M9_redond >= $comparativo_formato_9) { $alfabetico_lap2_pro_todo_M9_redond = $alfabetico_formato_9;  }
   if ($lap2_pro_todo_M9_redond >= $comparativo_formato_10) { $alfabetico_lap2_pro_todo_M9_redond = $alfabetico_formato_10;  }
   if ($lap2_pro_todo_M9_redond >= $comparativo_formato_11) { $alfabetico_lap2_pro_todo_M9_redond = $alfabetico_formato_11;  }
   if ($lap2_pro_todo_M9_redond >= $comparativo_formato_12) { $alfabetico_lap2_pro_todo_M9_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['i_convertir'] == 3 ) {  /* literal */
  if ($lap2_pro_todo_M9_redond >= $comparativo_formato_1) { $literal_lap2_pro_todo_M9_redond = $literal_formato_1;  }
  if ($lap2_pro_todo_M9_redond >= $comparativo_formato_2) { $literal_lap2_pro_todo_M9_redond = $literal_formato_2;  }
  if ($lap2_pro_todo_M9_redond >= $comparativo_formato_3) { $literal_lap2_pro_todo_M9_redond = $literal_formato_3;  }
  if ($lap2_pro_todo_M9_redond >= $comparativo_formato_4) { $literal_lap2_pro_todo_M9_redond = $literal_formato_4;  }
  if ($lap2_pro_todo_M9_redond >= $comparativo_formato_5) { $literal_lap2_pro_todo_M9_redond = $literal_formato_5;  }
  if ($lap2_pro_todo_M9_redond >= $comparativo_formato_6) { $literal_lap2_pro_todo_M9_redond = $literal_formato_6;  }
  if ($lap2_pro_todo_M9_redond >= $comparativo_formato_7) { $literal_lap2_pro_todo_M9_redond = $literal_formato_7;  }
  if ($lap2_pro_todo_M9_redond >= $comparativo_formato_8) { $literal_lap2_pro_todo_M9_redond = $literal_formato_8;  }
  if ($lap2_pro_todo_M9_redond >= $comparativo_formato_9) { $literal_lap2_pro_todo_M9_redond = $literal_formato_9;  }
  if ($lap2_pro_todo_M9_redond >= $comparativo_formato_10) { $literal_lap2_pro_todo_M9_redond = $literal_formato_10;  }
  if ($lap2_pro_todo_M9_redond >= $comparativo_formato_11) { $literal_lap2_pro_todo_M9_redond = $literal_formato_11;  }
  if ($lap2_pro_todo_M9_redond >= $comparativo_formato_12) { $literal_lap2_pro_todo_M9_redond = $literal_formato_12;  } 
   } /* cierre literal */   ?>








                   <?php 

if ($row_datos_controlmat['i_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['i_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M9_L3xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M9_L3xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M9_L3xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M9_L3xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M9_L3xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M9_L3xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M9_L3xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M9_L3xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M9_L3xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M9_L3xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M9_L3xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M9_L3xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['i_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M9_L3xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M9_L3xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M9_L3xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M9_L3xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M9_L3xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M9_L3xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M9_L3xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M9_L3xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M9_L3xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M9_L3xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M9_L3xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M9_L3xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M9_L3xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>
                        

<?php 
if ($lap3_div_mat9 == '') {
    $lap3_pro_todo_M9_redond = '';
}
else {
    $lap3_pro_todo_M9 = $lap3_tot_mat9/$lap3_div_mat9;
 $lap3_pro_todo_M9_redondeado1 =number_format($lap3_pro_todo_M9, 1, '.', '');
    $lap3_pro_todo_M9_redond =number_format($lap3_pro_todo_M9_redondeado1);


    $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 + 1;   //  lleva el conteo de la division para el promedio del salon del 3er lapso
    $lap_suma_total_promedio_Lap_3 = $lap_suma_total_promedio_Lap_3 + $lap3_pro_todo_M9_redond;  // lleva el divisor para el promedio del salon 2do lapso


if ($row_datos_controlmat['i_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_3 =  $lap_suma_total_promedio_Lap_3 - $lap3_pro_todo_M9_redond; $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 - 1;  }



    $lapso3_materia9_promedio_aula = $lap3_pro_todo_M9_redond;
    $lapso3_materia9_promedio_aula_divisor = $lapso3_materia9_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia9_aula_promedio =  $definitiva_materia9_aula_promedio + $lap3_pro_todo_M9_redond;
     $definitiva_materia9_aula_divisor = $definitiva_materia9_aula_divisor + 1;
}

if ($row_datos_controlmat['i_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['i_convertir'] == 2 ) {  /* alfabetico */
   if ($lap3_pro_todo_M9_redond >= $comparativo_formato_1) { $alfabetico_lap3_pro_todo_M9_redond = $alfabetico_formato_1;  }
   if ($lap3_pro_todo_M9_redond >= $comparativo_formato_2) { $alfabetico_lap3_pro_todo_M9_redond = $alfabetico_formato_2;  }
   if ($lap3_pro_todo_M9_redond >= $comparativo_formato_3) { $alfabetico_lap3_pro_todo_M9_redond = $alfabetico_formato_3;  }
   if ($lap3_pro_todo_M9_redond >= $comparativo_formato_4) { $alfabetico_lap3_pro_todo_M9_redond = $alfabetico_formato_4;  }
   if ($lap3_pro_todo_M9_redond >= $comparativo_formato_5) { $alfabetico_lap3_pro_todo_M9_redond = $alfabetico_formato_5;  }
   if ($lap3_pro_todo_M9_redond >= $comparativo_formato_6) { $alfabetico_lap3_pro_todo_M9_redond = $alfabetico_formato_6;  }
   if ($lap3_pro_todo_M9_redond >= $comparativo_formato_7) { $alfabetico_lap3_pro_todo_M9_redond = $alfabetico_formato_7;  }
   if ($lap3_pro_todo_M9_redond >= $comparativo_formato_8) { $alfabetico_lap3_pro_todo_M9_redond = $alfabetico_formato_8;  }
   if ($lap3_pro_todo_M9_redond >= $comparativo_formato_9) { $alfabetico_lap3_pro_todo_M9_redond = $alfabetico_formato_9;  }
   if ($lap3_pro_todo_M9_redond >= $comparativo_formato_10) { $alfabetico_lap3_pro_todo_M9_redond = $alfabetico_formato_10;  }
   if ($lap3_pro_todo_M9_redond >= $comparativo_formato_11) { $alfabetico_lap3_pro_todo_M9_redond = $alfabetico_formato_11;  }
   if ($lap3_pro_todo_M9_redond >= $comparativo_formato_12) { $alfabetico_lap3_pro_todo_M9_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['i_convertir'] == 3 ) {  /* literal */
  if ($lap3_pro_todo_M9_redond >= $comparativo_formato_1) { $literal_lap3_pro_todo_M9_redond = $literal_formato_1;  }
  if ($lap3_pro_todo_M9_redond >= $comparativo_formato_2) { $literal_lap3_pro_todo_M9_redond = $literal_formato_2;  }
  if ($lap3_pro_todo_M9_redond >= $comparativo_formato_3) { $literal_lap3_pro_todo_M9_redond = $literal_formato_3;  }
  if ($lap3_pro_todo_M9_redond >= $comparativo_formato_4) { $literal_lap3_pro_todo_M9_redond = $literal_formato_4;  }
  if ($lap3_pro_todo_M9_redond >= $comparativo_formato_5) { $literal_lap3_pro_todo_M9_redond = $literal_formato_5;  }
  if ($lap3_pro_todo_M9_redond >= $comparativo_formato_6) { $literal_lap3_pro_todo_M9_redond = $literal_formato_6;  }
  if ($lap3_pro_todo_M9_redond >= $comparativo_formato_7) { $literal_lap3_pro_todo_M9_redond = $literal_formato_7;  }
  if ($lap3_pro_todo_M9_redond >= $comparativo_formato_8) { $literal_lap3_pro_todo_M9_redond = $literal_formato_8;  }
  if ($lap3_pro_todo_M9_redond >= $comparativo_formato_9) { $literal_lap3_pro_todo_M9_redond = $literal_formato_9;  }
  if ($lap3_pro_todo_M9_redond >= $comparativo_formato_10) { $literal_lap3_pro_todo_M9_redond = $literal_formato_10;  }
  if ($lap3_pro_todo_M9_redond >= $comparativo_formato_11) { $literal_lap3_pro_todo_M9_redond = $literal_formato_11;  }
  if ($lap3_pro_todo_M9_redond >= $comparativo_formato_12) { $literal_lap3_pro_todo_M9_redond = $literal_formato_12;  } 
  } /* cierre literal */ ?> 





                    <?php

if ($lap1_pro_todo_M9_redond== '' && $lap2_pro_todo_M9_redond== ''  && $lap3_pro_todo_M9_redond== '') {
    $totalcito_M9 = '';
    $tot_M9 = '';

}

else {
    $totalcito_M9 = $total_seven_con_Au_redon_M9_aproxxx + $row_datos_control_notasM9["nt_AuF"];
}


                    if ($row_datos_controlmat['i_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['i_convertir'] == 2 ) {  /* alfabetico */
   if ($totalcito_M9 >= $comparativo_formato_1) { $alfabetico_totalcito_M9 = $alfabetico_formato_1;  }
   if ($totalcito_M9 >= $comparativo_formato_2) { $alfabetico_totalcito_M9 = $alfabetico_formato_2;  }
   if ($totalcito_M9 >= $comparativo_formato_3) { $alfabetico_totalcito_M9 = $alfabetico_formato_3;  }
   if ($totalcito_M9 >= $comparativo_formato_4) { $alfabetico_totalcito_M9 = $alfabetico_formato_4;  }
   if ($totalcito_M9 >= $comparativo_formato_5) { $alfabetico_totalcito_M9 = $alfabetico_formato_5;  }
   if ($totalcito_M9 >= $comparativo_formato_6) { $alfabetico_totalcito_M9 = $alfabetico_formato_6;  }
   if ($totalcito_M9 >= $comparativo_formato_7) { $alfabetico_totalcito_M9 = $alfabetico_formato_7;  }
   if ($totalcito_M9 >= $comparativo_formato_8) { $alfabetico_totalcito_M9 = $alfabetico_formato_8;  }
   if ($totalcito_M9 >= $comparativo_formato_9) { $alfabetico_totalcito_M9 = $alfabetico_formato_9;  }
   if ($totalcito_M9 >= $comparativo_formato_10) { $alfabetico_totalcito_M9 = $alfabetico_formato_10;  }
   if ($totalcito_M9 >= $comparativo_formato_11) { $alfabetico_totalcito_M9 = $alfabetico_formato_11;  }
   if ($totalcito_M9 >= $comparativo_formato_12) { $alfabetico_totalcito_M9 = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['i_convertir'] == 3 ) {  /* literal */
  if ($totalcito_M9 >= $comparativo_formato_1) { $literal_totalcito_M9 = $literal_formato_1;  }
  if ($totalcito_M9 >= $comparativo_formato_2) { $literal_totalcito_M9 = $literal_formato_2;  }
  if ($totalcito_M9 >= $comparativo_formato_3) { $literal_totalcito_M9 = $literal_formato_3;  }
  if ($totalcito_M9 >= $comparativo_formato_4) { $literal_totalcito_M9 = $literal_formato_4;  }
  if ($totalcito_M9 >= $comparativo_formato_5) { $literal_totalcito_M9 = $literal_formato_5;  }
  if ($totalcito_M9 >= $comparativo_formato_6) { $literal_totalcito_M9 = $literal_formato_6;  }
  if ($totalcito_M9 >= $comparativo_formato_7) { $literal_totalcito_M9 = $literal_formato_7;  }
  if ($totalcito_M9 >= $comparativo_formato_8) { $literal_totalcito_M9 = $literal_formato_8;  }
  if ($totalcito_M9 >= $comparativo_formato_9) { $literal_totalcito_M9 = $literal_formato_9;  }
  if ($totalcito_M9 >= $comparativo_formato_10) { $literal_totalcito_M9 = $literal_formato_10;  }
  if ($totalcito_M9 >= $comparativo_formato_11) { $literal_totalcito_M9 = $literal_formato_11;  }
  if ($totalcito_M9 >= $comparativo_formato_12) { $literal_totalcito_M9 = $literal_formato_12;  } 
   } /* cierre literal */


  ?>
                         

                    












                   
                        
<?php

$tot123_M9 = $definitiva_materia9_aula_promedio/$definitiva_materia9_aula_divisor;

if ($definitiva_materia9_aula_divisor == '0') {
    $tot123_M1_form = '';
}

else {
$tot123_M9_form_redondeado1 = number_format($tot123_M9, 1, '.', '');
    $tot123_M9_form = number_format($tot123_M9_form_redondeado1);

$promedio_total123 = $promedio_total123 +  $tot123_M9_form;     // acumula el promedio total
$promedio_total123_divisor = $promedio_total123_divisor + 1 ;


if ($row_datos_controlmat['i_suma'] != 1)
 {  $promedio_total123 =  $promedio_total123 - $tot123_M9_form; $promedio_total123_divisor =  $promedio_total123_divisor - 1;  }


}



if ($row_datos_controlmat['i_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['i_convertir'] == 2 ) {  /* alfabetico */
   if ($tot123_M9_form >= $comparativo_formato_1) { $alfabetico_tot123_M9_form = $alfabetico_formato_1;  }
   if ($tot123_M9_form >= $comparativo_formato_2) { $alfabetico_tot123_M9_form = $alfabetico_formato_2;  }
   if ($tot123_M9_form >= $comparativo_formato_3) { $alfabetico_tot123_M9_form = $alfabetico_formato_3;  }
   if ($tot123_M9_form >= $comparativo_formato_4) { $alfabetico_tot123_M9_form = $alfabetico_formato_4;  }
   if ($tot123_M9_form >= $comparativo_formato_5) { $alfabetico_tot123_M9_form = $alfabetico_formato_5;  }
   if ($tot123_M9_form >= $comparativo_formato_6) { $alfabetico_tot123_M9_form = $alfabetico_formato_6;  }
   if ($tot123_M9_form >= $comparativo_formato_7) { $alfabetico_tot123_M9_form = $alfabetico_formato_7;  }
   if ($tot123_M9_form >= $comparativo_formato_8) { $alfabetico_tot123_M9_form = $alfabetico_formato_8;  }
   if ($tot123_M9_form >= $comparativo_formato_9) { $alfabetico_tot123_M9_form = $alfabetico_formato_9;  }
   if ($tot123_M9_form >= $comparativo_formato_10) { $alfabetico_tot123_M9_form = $alfabetico_formato_10;  }
   if ($tot123_M9_form >= $comparativo_formato_11) { $alfabetico_tot123_M9_form = $alfabetico_formato_11;  }
   if ($tot123_M9_form >= $comparativo_formato_12) { $alfabetico_tot123_M9_form = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['i_convertir'] == 3 ) {  /* literal */
  if ($tot123_M9_form >= $comparativo_formato_1) { $literal_tot123_M9_form = $literal_formato_1;  }
  if ($tot123_M9_form >= $comparativo_formato_2) { $literal_tot123_M9_form = $literal_formato_2;  }
  if ($tot123_M9_form >= $comparativo_formato_3) { $literal_tot123_M9_form = $literal_formato_3;  }
  if ($tot123_M9_form >= $comparativo_formato_4) { $literal_tot123_M9_form = $literal_formato_4;  }
  if ($tot123_M9_form >= $comparativo_formato_5) { $literal_tot123_M9_form = $literal_formato_5;  }
  if ($tot123_M9_form >= $comparativo_formato_6) { $literal_tot123_M9_form = $literal_formato_6;  }
  if ($tot123_M9_form >= $comparativo_formato_7) { $literal_tot123_M9_form = $literal_formato_7;  }
  if ($tot123_M9_form >= $comparativo_formato_8) { $literal_tot123_M9_form = $literal_formato_8;  }
  if ($tot123_M9_form >= $comparativo_formato_9) { $literal_tot123_M9_form = $literal_formato_9;  }
  if ($tot123_M9_form >= $comparativo_formato_10) { $literal_tot123_M9_form = $literal_formato_10;  }
  if ($tot123_M9_form >= $comparativo_formato_11) { $literal_tot123_M9_form = $literal_formato_11;  }
  if ($tot123_M9_form >= $comparativo_formato_12) { $literal_tot123_M9_form = $literal_formato_12;  } 
     }

$definitiva_materia9_aula_promedio = '0';
$definitiva_materia9_aula_divisor = '0';


?>




                   



<?php  
$pruebass_M9_1 = $row_datos_control_notasM9["rev_uno"];
$pruebass_M9_2 = $row_datos_control_notasM9["rev_dos"];
$pruebass_redoni_M9_1 =number_format($pruebass_M9_1);
$pruebass_redoni_M9_2 =number_format($pruebass_M9_2); 
  ?>

<!-- nuevo añadido 1 -->
  
<?php

if ($pruebass_M9_1 != '') {  
    if ($row_datos_controlmat['i_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['i_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redoni_M9_1 >= $comparativo_formato_1) { $alfabetico_pruebass_redoni_M9_1 = $alfabetico_formato_1;  }
       if ($pruebass_redoni_M9_1 >= $comparativo_formato_2) { $alfabetico_pruebass_redoni_M9_1 = $alfabetico_formato_2;  }
       if ($pruebass_redoni_M9_1 >= $comparativo_formato_3) { $alfabetico_pruebass_redoni_M9_1 = $alfabetico_formato_3;  }
       if ($pruebass_redoni_M9_1 >= $comparativo_formato_4) { $alfabetico_pruebass_redoni_M9_1 = $alfabetico_formato_4;  }
       if ($pruebass_redoni_M9_1 >= $comparativo_formato_5) { $alfabetico_pruebass_redoni_M9_1 = $alfabetico_formato_5;  }
       if ($pruebass_redoni_M9_1 >= $comparativo_formato_6) { $alfabetico_pruebass_redoni_M9_1 = $alfabetico_formato_6;  }
       if ($pruebass_redoni_M9_1 >= $comparativo_formato_7) { $alfabetico_pruebass_redoni_M9_1 = $alfabetico_formato_7;  }
       if ($pruebass_redoni_M9_1 >= $comparativo_formato_8) { $alfabetico_pruebass_redoni_M9_1 = $alfabetico_formato_8;  }
       if ($pruebass_redoni_M9_1 >= $comparativo_formato_9) { $alfabetico_pruebass_redoni_M9_1 = $alfabetico_formato_9;  }
       if ($pruebass_redoni_M9_1 >= $comparativo_formato_10) { $alfabetico_pruebass_redoni_M9_1 = $alfabetico_formato_10;  }
       if ($pruebass_redoni_M9_1 >= $comparativo_formato_11) { $alfabetico_pruebass_redoni_M9_1 = $alfabetico_formato_11;  }
       if ($pruebass_redoni_M9_1 >= $comparativo_formato_12) { $alfabetico_pruebass_redoni_M9_1 = $alfabetico_formato_12;  }
       } /* cierre alfabetico */
    if ($row_datos_controlmat['i_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redoni_M9_1 >= $comparativo_formato_1) { $literal_pruebass_redoni_M9_1 = $literal_formato_1;  }
      if ($pruebass_redoni_M9_1 >= $comparativo_formato_2) { $literal_pruebass_redoni_M9_1 = $literal_formato_2;  }
      if ($pruebass_redoni_M9_1 >= $comparativo_formato_3) { $literal_pruebass_redoni_M9_1 = $literal_formato_3;  }
      if ($pruebass_redoni_M9_1 >= $comparativo_formato_4) { $literal_pruebass_redoni_M9_1 = $literal_formato_4;  }
      if ($pruebass_redoni_M9_1 >= $comparativo_formato_5) { $literal_pruebass_redoni_M9_1 = $literal_formato_5;  }
      if ($pruebass_redoni_M9_1 >= $comparativo_formato_6) { $literal_pruebass_redoni_M9_1 = $literal_formato_6;  }
      if ($pruebass_redoni_M9_1 >= $comparativo_formato_7) { $literal_pruebass_redoni_M9_1 = $literal_formato_7;  }
      if ($pruebass_redoni_M9_1 >= $comparativo_formato_8) { $literal_pruebass_redoni_M9_1 = $literal_formato_8;  }
      if ($pruebass_redoni_M9_1 >= $comparativo_formato_9) { $literal_pruebass_redoni_M9_1 = $literal_formato_9;  }
      if ($pruebass_redoni_M9_1 >= $comparativo_formato_10) { $literal_pruebass_redoni_M9_1 = $literal_formato_10;  }
      if ($pruebass_redoni_M9_1 >= $comparativo_formato_11) { $literal_pruebass_redoni_M9_1 = $literal_formato_11;  }
      if ($pruebass_redoni_M9_1 >= $comparativo_formato_12) { $literal_pruebass_redoni_M9_1 = $literal_formato_12;  } 
        }
}
?> 
   
   <?php

if ($pruebass_M9_2 != '') {  
    if ($row_datos_controlmat['i_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['i_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redoni_M9_2 >= $comparativo_formato_1) { $alfabetico_pruebass_redoni_M9_2 = $alfabetico_formato_1;  }
       if ($pruebass_redoni_M9_2 >= $comparativo_formato_2) { $alfabetico_pruebass_redoni_M9_2 = $alfabetico_formato_2;  }
       if ($pruebass_redoni_M9_2 >= $comparativo_formato_3) { $alfabetico_pruebass_redoni_M9_2 = $alfabetico_formato_3;  }
       if ($pruebass_redoni_M9_2 >= $comparativo_formato_4) { $alfabetico_pruebass_redoni_M9_2 = $alfabetico_formato_4;  }
       if ($pruebass_redoni_M9_2 >= $comparativo_formato_5) { $alfabetico_pruebass_redoni_M9_2 = $alfabetico_formato_5;  }
       if ($pruebass_redoni_M9_2 >= $comparativo_formato_6) { $alfabetico_pruebass_redoni_M9_2 = $alfabetico_formato_6;  }
       if ($pruebass_redoni_M9_2 >= $comparativo_formato_7) { $alfabetico_pruebass_redoni_M9_2 = $alfabetico_formato_7;  }
       if ($pruebass_redoni_M9_2 >= $comparativo_formato_8) { $alfabetico_pruebass_redoni_M9_2 = $alfabetico_formato_8;  }
       if ($pruebass_redoni_M9_2 >= $comparativo_formato_9) { $alfabetico_pruebass_redoni_M9_2 = $alfabetico_formato_9;  }
       if ($pruebass_redoni_M9_2 >= $comparativo_formato_10) { $alfabetico_pruebass_redoni_M9_2 = $alfabetico_formato_10;  }
       if ($pruebass_redoni_M9_2 >= $comparativo_formato_11) { $alfabetico_pruebass_redoni_M9_2 = $alfabetico_formato_11;  }
       if ($pruebass_redoni_M9_2 >= $comparativo_formato_12) { $alfabetico_pruebass_redoni_M9_2 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['i_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redoni_M9_2 >= $comparativo_formato_1) { $literal_pruebass_redoni_M9_2 = $literal_formato_1;  }
      if ($pruebass_redoni_M9_2 >= $comparativo_formato_2) { $literal_pruebass_redoni_M9_2 = $literal_formato_2;  }
      if ($pruebass_redoni_M9_2 >= $comparativo_formato_3) { $literal_pruebass_redoni_M9_2 = $literal_formato_3;  }
      if ($pruebass_redoni_M9_2 >= $comparativo_formato_4) { $literal_pruebass_redoni_M9_2 = $literal_formato_4;  }
      if ($pruebass_redoni_M9_2 >= $comparativo_formato_5) { $literal_pruebass_redoni_M9_2 = $literal_formato_5;  }
      if ($pruebass_redoni_M9_2 >= $comparativo_formato_6) { $literal_pruebass_redoni_M9_2 = $literal_formato_6;  }
      if ($pruebass_redoni_M9_2 >= $comparativo_formato_7) { $literal_pruebass_redoni_M9_2 = $literal_formato_7;  }
      if ($pruebass_redoni_M9_2 >= $comparativo_formato_8) { $literal_pruebass_redoni_M9_2 = $literal_formato_8;  }
      if ($pruebass_redoni_M9_2 >= $comparativo_formato_9) { $literal_pruebass_redoni_M9_2 = $literal_formato_9;  }
      if ($pruebass_redoni_M9_2 >= $comparativo_formato_10) { $literal_pruebass_redoni_M9_2 = $literal_formato_10;  }
      if ($pruebass_redoni_M9_2 >= $comparativo_formato_11) { $literal_pruebass_redoni_M9_2 = $literal_formato_11;  }
      if ($pruebass_redoni_M9_2 >= $comparativo_formato_12) { $literal_pruebass_redoni_M9_2 = $literal_formato_12;  } 
         }
}
?> 







 <?php

               $j_ayuda = '';

                if ($row_datos_controlmat['j_suma'] !=1) {
                  $j_ayuda = '#';
               }

               ?>

               <?php 

if ($row_datos_controlmat['j_convertir'] == 1 ) {  /* numerico */
       
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
    } /* cierre alfabetico */

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
 } /* cierre literal */


                    ?>

                        
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
   } /* cierre alfabetico */

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
   } /* cierre literal */ ?>




                    <?php 

if ($row_datos_controlmat['j_convertir'] == 1 ) {  /* numerico */
  
} /* cierre numerico */
if ($row_datos_controlmat['j_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M10_L2xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M10_L2xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M10_L2xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M10_L2xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M10_L2xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M10_L2xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M10_L2xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M10_L2xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M10_L2xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M10_L2xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M10_L2xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M10_L2xx = $alfabetico_formato_12;  }
   } /* cierre alfabetico */

if ($row_datos_controlmat['j_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M10_L2xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M10_L2xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M10_L2xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M10_L2xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M10_L2xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M10_L2xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M10_L2xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M10_L2xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M10_L2xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M10_L2xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M10_L2xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M10_L2xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M10_L2xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>


<?php 

if ($lap2_div_mat10 == '') {
    $lap2_pro_todo_M10_redond = '';
}

else {

    $lap2_pro_todo_M10 = $lap2_tot_mat10/$lap2_div_mat10;

  $lap2_pro_todo_M10_redondeado1 =number_format($lap2_pro_todo_M10, 1, '.', '');

    $lap2_pro_todo_M10_redond =number_format($lap2_pro_todo_M10_redondeado1);


    $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 + 1;   //  lleva el conteo de la division para el promedio del salon del 2do lapso
    $lap_suma_total_promedio_Lap_2 = $lap_suma_total_promedio_Lap_2 + $lap2_pro_todo_M10_redond;  // lleva el divisor para el promedio del salon 2do lapso


    if ($row_datos_controlmat['j_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_2 =  $lap_suma_total_promedio_Lap_2 - $lap2_pro_todo_M10_redond; $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 - 1;  }


    $lapso1_materia10_promedio_aula = $lap2_pro_todo_M10_redond;
    $lapso1_materia10_promedio_aula_divisor = $lapso1_materia10_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia10_aula_promedio =  $definitiva_materia10_aula_promedio + $lap2_pro_todo_M10_redond;
     $definitiva_materia10_aula_divisor = $definitiva_materia10_aula_divisor + 1;


}



if ($row_datos_controlmat['j_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['j_convertir'] == 2 ) {  /* alfabetico */
   if ($lap2_pro_todo_M10_redond >= $comparativo_formato_1) { $alfabetico_lap2_pro_todo_M10_redond = $alfabetico_formato_1;  }
   if ($lap2_pro_todo_M10_redond >= $comparativo_formato_2) { $alfabetico_lap2_pro_todo_M10_redond = $alfabetico_formato_2;  }
   if ($lap2_pro_todo_M10_redond >= $comparativo_formato_3) { $alfabetico_lap2_pro_todo_M10_redond = $alfabetico_formato_3;  }
   if ($lap2_pro_todo_M10_redond >= $comparativo_formato_4) { $alfabetico_lap2_pro_todo_M10_redond = $alfabetico_formato_4;  }
   if ($lap2_pro_todo_M10_redond >= $comparativo_formato_5) { $alfabetico_lap2_pro_todo_M10_redond = $alfabetico_formato_5;  }
   if ($lap2_pro_todo_M10_redond >= $comparativo_formato_6) { $alfabetico_lap2_pro_todo_M10_redond = $alfabetico_formato_6;  }
   if ($lap2_pro_todo_M10_redond >= $comparativo_formato_7) { $alfabetico_lap2_pro_todo_M10_redond = $alfabetico_formato_7;  }
   if ($lap2_pro_todo_M10_redond >= $comparativo_formato_8) { $alfabetico_lap2_pro_todo_M10_redond = $alfabetico_formato_8;  }
   if ($lap2_pro_todo_M10_redond >= $comparativo_formato_9) { $alfabetico_lap2_pro_todo_M10_redond = $alfabetico_formato_9;  }
   if ($lap2_pro_todo_M10_redond >= $comparativo_formato_10) { $alfabetico_lap2_pro_todo_M10_redond = $alfabetico_formato_10;  }
   if ($lap2_pro_todo_M10_redond >= $comparativo_formato_11) { $alfabetico_lap2_pro_todo_M10_redond = $alfabetico_formato_11;  }
   if ($lap2_pro_todo_M10_redond >= $comparativo_formato_12) { $alfabetico_lap2_pro_todo_M10_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['j_convertir'] == 3 ) {  /* literal */
  if ($lap2_pro_todo_M10_redond >= $comparativo_formato_1) { $literal_lap2_pro_todo_M10_redond = $literal_formato_1;  }
  if ($lap2_pro_todo_M10_redond >= $comparativo_formato_2) { $literal_lap2_pro_todo_M10_redond = $literal_formato_2;  }
  if ($lap2_pro_todo_M10_redond >= $comparativo_formato_3) { $literal_lap2_pro_todo_M10_redond = $literal_formato_3;  }
  if ($lap2_pro_todo_M10_redond >= $comparativo_formato_4) { $literal_lap2_pro_todo_M10_redond = $literal_formato_4;  }
  if ($lap2_pro_todo_M10_redond >= $comparativo_formato_5) { $literal_lap2_pro_todo_M10_redond = $literal_formato_5;  }
  if ($lap2_pro_todo_M10_redond >= $comparativo_formato_6) { $literal_lap2_pro_todo_M10_redond = $literal_formato_6;  }
  if ($lap2_pro_todo_M10_redond >= $comparativo_formato_7) { $literal_lap2_pro_todo_M10_redond = $literal_formato_7;  }
  if ($lap2_pro_todo_M10_redond >= $comparativo_formato_8) { $literal_lap2_pro_todo_M10_redond = $literal_formato_8;  }
  if ($lap2_pro_todo_M10_redond >= $comparativo_formato_9) { $literal_lap2_pro_todo_M10_redond = $literal_formato_9;  }
  if ($lap2_pro_todo_M10_redond >= $comparativo_formato_10) { $literal_lap2_pro_todo_M10_redond = $literal_formato_10;  }
  if ($lap2_pro_todo_M10_redond >= $comparativo_formato_11) { $literal_lap2_pro_todo_M10_redond = $literal_formato_11;  }
  if ($lap2_pro_todo_M10_redond >= $comparativo_formato_12) { $literal_lap2_pro_todo_M10_redond = $literal_formato_12;  } 
   } /* cierre literal */   ?>








                   <?php 

if ($row_datos_controlmat['j_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['j_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M10_L3xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M10_L3xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M10_L3xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M10_L3xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M10_L3xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M10_L3xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M10_L3xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M10_L3xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M10_L3xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M10_L3xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M10_L3xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M10_L3xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['j_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M10_L3xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M10_L3xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M10_L3xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M10_L3xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M10_L3xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M10_L3xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M10_L3xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M10_L3xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M10_L3xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M10_L3xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M10_L3xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M10_L3xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M10_L3xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>
                        

<?php 
if ($lap3_div_mat10 == '') {
    $lap3_pro_todo_M10_redond = '';
}
else {
    $lap3_pro_todo_M10 = $lap3_tot_mat10/$lap3_div_mat10;
 $lap3_pro_todo_M10_redondeado1 =number_format($lap3_pro_todo_M10, 1, '.', '');
    $lap3_pro_todo_M10_redond =number_format($lap3_pro_todo_M10_redondeado1);


    $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 + 1;   //  lleva el conteo de la division para el promedio del salon del 3er lapso
    $lap_suma_total_promedio_Lap_3 = $lap_suma_total_promedio_Lap_3 + $lap3_pro_todo_M10_redond;  // lleva el divisor para el promedio del salon 2do lapso


if ($row_datos_controlmat['j_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_3 =  $lap_suma_total_promedio_Lap_3 - $lap3_pro_todo_M10_redond; $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 - 1;  }



    $lapso3_materia10_promedio_aula = $lap3_pro_todo_M10_redond;
    $lapso3_materia10_promedio_aula_divisor = $lapso3_materia10_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia10_aula_promedio =  $definitiva_materia10_aula_promedio + $lap3_pro_todo_M10_redond;
     $definitiva_materia10_aula_divisor = $definitiva_materia10_aula_divisor + 1;
}

if ($row_datos_controlmat['j_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['j_convertir'] == 2 ) {  /* alfabetico */
   if ($lap3_pro_todo_M10_redond >= $comparativo_formato_1) { $alfabetico_lap3_pro_todo_M10_redond = $alfabetico_formato_1;  }
   if ($lap3_pro_todo_M10_redond >= $comparativo_formato_2) { $alfabetico_lap3_pro_todo_M10_redond = $alfabetico_formato_2;  }
   if ($lap3_pro_todo_M10_redond >= $comparativo_formato_3) { $alfabetico_lap3_pro_todo_M10_redond = $alfabetico_formato_3;  }
   if ($lap3_pro_todo_M10_redond >= $comparativo_formato_4) { $alfabetico_lap3_pro_todo_M10_redond = $alfabetico_formato_4;  }
   if ($lap3_pro_todo_M10_redond >= $comparativo_formato_5) { $alfabetico_lap3_pro_todo_M10_redond = $alfabetico_formato_5;  }
   if ($lap3_pro_todo_M10_redond >= $comparativo_formato_6) { $alfabetico_lap3_pro_todo_M10_redond = $alfabetico_formato_6;  }
   if ($lap3_pro_todo_M10_redond >= $comparativo_formato_7) { $alfabetico_lap3_pro_todo_M10_redond = $alfabetico_formato_7;  }
   if ($lap3_pro_todo_M10_redond >= $comparativo_formato_8) { $alfabetico_lap3_pro_todo_M10_redond = $alfabetico_formato_8;  }
   if ($lap3_pro_todo_M10_redond >= $comparativo_formato_9) { $alfabetico_lap3_pro_todo_M10_redond = $alfabetico_formato_9;  }
   if ($lap3_pro_todo_M10_redond >= $comparativo_formato_10) { $alfabetico_lap3_pro_todo_M10_redond = $alfabetico_formato_10;  }
   if ($lap3_pro_todo_M10_redond >= $comparativo_formato_11) { $alfabetico_lap3_pro_todo_M10_redond = $alfabetico_formato_11;  }
   if ($lap3_pro_todo_M10_redond >= $comparativo_formato_12) { $alfabetico_lap3_pro_todo_M10_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['j_convertir'] == 3 ) {  /* literal */
  if ($lap3_pro_todo_M10_redond >= $comparativo_formato_1) { $literal_lap3_pro_todo_M10_redond = $literal_formato_1;  }
  if ($lap3_pro_todo_M10_redond >= $comparativo_formato_2) { $literal_lap3_pro_todo_M10_redond = $literal_formato_2;  }
  if ($lap3_pro_todo_M10_redond >= $comparativo_formato_3) { $literal_lap3_pro_todo_M10_redond = $literal_formato_3;  }
  if ($lap3_pro_todo_M10_redond >= $comparativo_formato_4) { $literal_lap3_pro_todo_M10_redond = $literal_formato_4;  }
  if ($lap3_pro_todo_M10_redond >= $comparativo_formato_5) { $literal_lap3_pro_todo_M10_redond = $literal_formato_5;  }
  if ($lap3_pro_todo_M10_redond >= $comparativo_formato_6) { $literal_lap3_pro_todo_M10_redond = $literal_formato_6;  }
  if ($lap3_pro_todo_M10_redond >= $comparativo_formato_7) { $literal_lap3_pro_todo_M10_redond = $literal_formato_7;  }
  if ($lap3_pro_todo_M10_redond >= $comparativo_formato_8) { $literal_lap3_pro_todo_M10_redond = $literal_formato_8;  }
  if ($lap3_pro_todo_M10_redond >= $comparativo_formato_9) { $literal_lap3_pro_todo_M10_redond = $literal_formato_9;  }
  if ($lap3_pro_todo_M10_redond >= $comparativo_formato_10) { $literal_lap3_pro_todo_M10_redond = $literal_formato_10;  }
  if ($lap3_pro_todo_M10_redond >= $comparativo_formato_11) { $literal_lap3_pro_todo_M10_redond = $literal_formato_11;  }
  if ($lap3_pro_todo_M10_redond >= $comparativo_formato_12) { $literal_lap3_pro_todo_M10_redond = $literal_formato_12;  } 
  } /* cierre literal */ ?> 





                    <?php

if ($lap1_pro_todo_M10_redond== '' && $lap2_pro_todo_M10_redond== ''  && $lap3_pro_todo_M10_redond== '') {
    $totalcito_M10 = '';
    $tot_M10 = '';

}

else {
    $totalcito_M10 = $total_seven_con_Au_redon_M10_aproxxx + $row_datos_control_notasM10["nt_AuF"];
}


                    if ($row_datos_controlmat['j_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['j_convertir'] == 2 ) {  /* alfabetico */
   if ($totalcito_M10 >= $comparativo_formato_1) { $alfabetico_totalcito_M10 = $alfabetico_formato_1;  }
   if ($totalcito_M10 >= $comparativo_formato_2) { $alfabetico_totalcito_M10 = $alfabetico_formato_2;  }
   if ($totalcito_M10 >= $comparativo_formato_3) { $alfabetico_totalcito_M10 = $alfabetico_formato_3;  }
   if ($totalcito_M10 >= $comparativo_formato_4) { $alfabetico_totalcito_M10 = $alfabetico_formato_4;  }
   if ($totalcito_M10 >= $comparativo_formato_5) { $alfabetico_totalcito_M10 = $alfabetico_formato_5;  }
   if ($totalcito_M10 >= $comparativo_formato_6) { $alfabetico_totalcito_M10 = $alfabetico_formato_6;  }
   if ($totalcito_M10 >= $comparativo_formato_7) { $alfabetico_totalcito_M10 = $alfabetico_formato_7;  }
   if ($totalcito_M10 >= $comparativo_formato_8) { $alfabetico_totalcito_M10 = $alfabetico_formato_8;  }
   if ($totalcito_M10 >= $comparativo_formato_9) { $alfabetico_totalcito_M10 = $alfabetico_formato_9;  }
   if ($totalcito_M10 >= $comparativo_formato_10) { $alfabetico_totalcito_M10 = $alfabetico_formato_10;  }
   if ($totalcito_M10 >= $comparativo_formato_11) { $alfabetico_totalcito_M10 = $alfabetico_formato_11;  }
   if ($totalcito_M10 >= $comparativo_formato_12) { $alfabetico_totalcito_M10 = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['j_convertir'] == 3 ) {  /* literal */
  if ($totalcito_M10 >= $comparativo_formato_1) { $literal_totalcito_M10 = $literal_formato_1;  }
  if ($totalcito_M10 >= $comparativo_formato_2) { $literal_totalcito_M10 = $literal_formato_2;  }
  if ($totalcito_M10 >= $comparativo_formato_3) { $literal_totalcito_M10 = $literal_formato_3;  }
  if ($totalcito_M10 >= $comparativo_formato_4) { $literal_totalcito_M10 = $literal_formato_4;  }
  if ($totalcito_M10 >= $comparativo_formato_5) { $literal_totalcito_M10 = $literal_formato_5;  }
  if ($totalcito_M10 >= $comparativo_formato_6) { $literal_totalcito_M10 = $literal_formato_6;  }
  if ($totalcito_M10 >= $comparativo_formato_7) { $literal_totalcito_M10 = $literal_formato_7;  }
  if ($totalcito_M10 >= $comparativo_formato_8) { $literal_totalcito_M10 = $literal_formato_8;  }
  if ($totalcito_M10 >= $comparativo_formato_9) { $literal_totalcito_M10 = $literal_formato_9;  }
  if ($totalcito_M10 >= $comparativo_formato_10) { $literal_totalcito_M10 = $literal_formato_10;  }
  if ($totalcito_M10 >= $comparativo_formato_11) { $literal_totalcito_M10 = $literal_formato_11;  }
  if ($totalcito_M10 >= $comparativo_formato_12) { $literal_totalcito_M10 = $literal_formato_12;  } 
   } /* cierre literal */


  ?>
                         

                    












                   
                        
<?php

$tot123_M10 = $definitiva_materia10_aula_promedio/$definitiva_materia10_aula_divisor;

if ($definitiva_materia10_aula_divisor == '0') {
    $tot123_M1_form = '';
}

else {
$tot123_M10_form_redondeado1 = number_format($tot123_M10, 1, '.', '');
    $tot123_M10_form = number_format($tot123_M10_form_redondeado1);

$promedio_total123 = $promedio_total123 +  $tot123_M10_form;     // acumula el promedio total
$promedio_total123_divisor = $promedio_total123_divisor + 1 ;


if ($row_datos_controlmat['j_suma'] != 1)
 {  $promedio_total123 =  $promedio_total123 - $tot123_M10_form; $promedio_total123_divisor =  $promedio_total123_divisor - 1;  }


}



if ($row_datos_controlmat['j_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['j_convertir'] == 2 ) {  /* alfabetico */
   if ($tot123_M10_form >= $comparativo_formato_1) { $alfabetico_tot123_M10_form = $alfabetico_formato_1;  }
   if ($tot123_M10_form >= $comparativo_formato_2) { $alfabetico_tot123_M10_form = $alfabetico_formato_2;  }
   if ($tot123_M10_form >= $comparativo_formato_3) { $alfabetico_tot123_M10_form = $alfabetico_formato_3;  }
   if ($tot123_M10_form >= $comparativo_formato_4) { $alfabetico_tot123_M10_form = $alfabetico_formato_4;  }
   if ($tot123_M10_form >= $comparativo_formato_5) { $alfabetico_tot123_M10_form = $alfabetico_formato_5;  }
   if ($tot123_M10_form >= $comparativo_formato_6) { $alfabetico_tot123_M10_form = $alfabetico_formato_6;  }
   if ($tot123_M10_form >= $comparativo_formato_7) { $alfabetico_tot123_M10_form = $alfabetico_formato_7;  }
   if ($tot123_M10_form >= $comparativo_formato_8) { $alfabetico_tot123_M10_form = $alfabetico_formato_8;  }
   if ($tot123_M10_form >= $comparativo_formato_9) { $alfabetico_tot123_M10_form = $alfabetico_formato_9;  }
   if ($tot123_M10_form >= $comparativo_formato_10) { $alfabetico_tot123_M10_form = $alfabetico_formato_10;  }
   if ($tot123_M10_form >= $comparativo_formato_11) { $alfabetico_tot123_M10_form = $alfabetico_formato_11;  }
   if ($tot123_M10_form >= $comparativo_formato_12) { $alfabetico_tot123_M10_form = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['j_convertir'] == 3 ) {  /* literal */
  if ($tot123_M10_form >= $comparativo_formato_1) { $literal_tot123_M10_form = $literal_formato_1;  }
  if ($tot123_M10_form >= $comparativo_formato_2) { $literal_tot123_M10_form = $literal_formato_2;  }
  if ($tot123_M10_form >= $comparativo_formato_3) { $literal_tot123_M10_form = $literal_formato_3;  }
  if ($tot123_M10_form >= $comparativo_formato_4) { $literal_tot123_M10_form = $literal_formato_4;  }
  if ($tot123_M10_form >= $comparativo_formato_5) { $literal_tot123_M10_form = $literal_formato_5;  }
  if ($tot123_M10_form >= $comparativo_formato_6) { $literal_tot123_M10_form = $literal_formato_6;  }
  if ($tot123_M10_form >= $comparativo_formato_7) { $literal_tot123_M10_form = $literal_formato_7;  }
  if ($tot123_M10_form >= $comparativo_formato_8) { $literal_tot123_M10_form = $literal_formato_8;  }
  if ($tot123_M10_form >= $comparativo_formato_9) { $literal_tot123_M10_form = $literal_formato_9;  }
  if ($tot123_M10_form >= $comparativo_formato_10) { $literal_tot123_M10_form = $literal_formato_10;  }
  if ($tot123_M10_form >= $comparativo_formato_11) { $literal_tot123_M10_form = $literal_formato_11;  }
  if ($tot123_M10_form >= $comparativo_formato_12) { $literal_tot123_M10_form = $literal_formato_12;  } 
     }

$definitiva_materia10_aula_promedio = '0';
$definitiva_materia10_aula_divisor = '0';


?>




                   



<?php  
$pruebass_M10_1 = $row_datos_control_notasM10["rev_uno"];
$pruebass_M10_2 = $row_datos_control_notasM10["rev_dos"];
$pruebass_redonj_M10_1 =number_format($pruebass_M10_1);
$pruebass_redonj_M10_2 =number_format($pruebass_M10_2); 
  ?>

<!-- nuevo añadido 1 -->
  
<?php

if ($pruebass_M10_1 != '') {  
    if ($row_datos_controlmat['j_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['j_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redonj_M10_1 >= $comparativo_formato_1) { $alfabetico_pruebass_redonj_M10_1 = $alfabetico_formato_1;  }
       if ($pruebass_redonj_M10_1 >= $comparativo_formato_2) { $alfabetico_pruebass_redonj_M10_1 = $alfabetico_formato_2;  }
       if ($pruebass_redonj_M10_1 >= $comparativo_formato_3) { $alfabetico_pruebass_redonj_M10_1 = $alfabetico_formato_3;  }
       if ($pruebass_redonj_M10_1 >= $comparativo_formato_4) { $alfabetico_pruebass_redonj_M10_1 = $alfabetico_formato_4;  }
       if ($pruebass_redonj_M10_1 >= $comparativo_formato_5) { $alfabetico_pruebass_redonj_M10_1 = $alfabetico_formato_5;  }
       if ($pruebass_redonj_M10_1 >= $comparativo_formato_6) { $alfabetico_pruebass_redonj_M10_1 = $alfabetico_formato_6;  }
       if ($pruebass_redonj_M10_1 >= $comparativo_formato_7) { $alfabetico_pruebass_redonj_M10_1 = $alfabetico_formato_7;  }
       if ($pruebass_redonj_M10_1 >= $comparativo_formato_8) { $alfabetico_pruebass_redonj_M10_1 = $alfabetico_formato_8;  }
       if ($pruebass_redonj_M10_1 >= $comparativo_formato_9) { $alfabetico_pruebass_redonj_M10_1 = $alfabetico_formato_9;  }
       if ($pruebass_redonj_M10_1 >= $comparativo_formato_10) { $alfabetico_pruebass_redonj_M10_1 = $alfabetico_formato_10;  }
       if ($pruebass_redonj_M10_1 >= $comparativo_formato_11) { $alfabetico_pruebass_redonj_M10_1 = $alfabetico_formato_11;  }
       if ($pruebass_redonj_M10_1 >= $comparativo_formato_12) { $alfabetico_pruebass_redonj_M10_1 = $alfabetico_formato_12;  }
       } /* cierre alfabetico */
    if ($row_datos_controlmat['j_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redonj_M10_1 >= $comparativo_formato_1) { $literal_pruebass_redonj_M10_1 = $literal_formato_1;  }
      if ($pruebass_redonj_M10_1 >= $comparativo_formato_2) { $literal_pruebass_redonj_M10_1 = $literal_formato_2;  }
      if ($pruebass_redonj_M10_1 >= $comparativo_formato_3) { $literal_pruebass_redonj_M10_1 = $literal_formato_3;  }
      if ($pruebass_redonj_M10_1 >= $comparativo_formato_4) { $literal_pruebass_redonj_M10_1 = $literal_formato_4;  }
      if ($pruebass_redonj_M10_1 >= $comparativo_formato_5) { $literal_pruebass_redonj_M10_1 = $literal_formato_5;  }
      if ($pruebass_redonj_M10_1 >= $comparativo_formato_6) { $literal_pruebass_redonj_M10_1 = $literal_formato_6;  }
      if ($pruebass_redonj_M10_1 >= $comparativo_formato_7) { $literal_pruebass_redonj_M10_1 = $literal_formato_7;  }
      if ($pruebass_redonj_M10_1 >= $comparativo_formato_8) { $literal_pruebass_redonj_M10_1 = $literal_formato_8;  }
      if ($pruebass_redonj_M10_1 >= $comparativo_formato_9) { $literal_pruebass_redonj_M10_1 = $literal_formato_9;  }
      if ($pruebass_redonj_M10_1 >= $comparativo_formato_10) { $literal_pruebass_redonj_M10_1 = $literal_formato_10;  }
      if ($pruebass_redonj_M10_1 >= $comparativo_formato_11) { $literal_pruebass_redonj_M10_1 = $literal_formato_11;  }
      if ($pruebass_redonj_M10_1 >= $comparativo_formato_12) { $literal_pruebass_redonj_M10_1 = $literal_formato_12;  } 
        }
}
?> 
   
   <?php

if ($pruebass_M10_2 != '') {  
    if ($row_datos_controlmat['j_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['j_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redonj_M10_2 >= $comparativo_formato_1) { $alfabetico_pruebass_redonj_M10_2 = $alfabetico_formato_1;  }
       if ($pruebass_redonj_M10_2 >= $comparativo_formato_2) { $alfabetico_pruebass_redonj_M10_2 = $alfabetico_formato_2;  }
       if ($pruebass_redonj_M10_2 >= $comparativo_formato_3) { $alfabetico_pruebass_redonj_M10_2 = $alfabetico_formato_3;  }
       if ($pruebass_redonj_M10_2 >= $comparativo_formato_4) { $alfabetico_pruebass_redonj_M10_2 = $alfabetico_formato_4;  }
       if ($pruebass_redonj_M10_2 >= $comparativo_formato_5) { $alfabetico_pruebass_redonj_M10_2 = $alfabetico_formato_5;  }
       if ($pruebass_redonj_M10_2 >= $comparativo_formato_6) { $alfabetico_pruebass_redonj_M10_2 = $alfabetico_formato_6;  }
       if ($pruebass_redonj_M10_2 >= $comparativo_formato_7) { $alfabetico_pruebass_redonj_M10_2 = $alfabetico_formato_7;  }
       if ($pruebass_redonj_M10_2 >= $comparativo_formato_8) { $alfabetico_pruebass_redonj_M10_2 = $alfabetico_formato_8;  }
       if ($pruebass_redonj_M10_2 >= $comparativo_formato_9) { $alfabetico_pruebass_redonj_M10_2 = $alfabetico_formato_9;  }
       if ($pruebass_redonj_M10_2 >= $comparativo_formato_10) { $alfabetico_pruebass_redonj_M10_2 = $alfabetico_formato_10;  }
       if ($pruebass_redonj_M10_2 >= $comparativo_formato_11) { $alfabetico_pruebass_redonj_M10_2 = $alfabetico_formato_11;  }
       if ($pruebass_redonj_M10_2 >= $comparativo_formato_12) { $alfabetico_pruebass_redonj_M10_2 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['j_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redonj_M10_2 >= $comparativo_formato_1) { $literal_pruebass_redonj_M10_2 = $literal_formato_1;  }
      if ($pruebass_redonj_M10_2 >= $comparativo_formato_2) { $literal_pruebass_redonj_M10_2 = $literal_formato_2;  }
      if ($pruebass_redonj_M10_2 >= $comparativo_formato_3) { $literal_pruebass_redonj_M10_2 = $literal_formato_3;  }
      if ($pruebass_redonj_M10_2 >= $comparativo_formato_4) { $literal_pruebass_redonj_M10_2 = $literal_formato_4;  }
      if ($pruebass_redonj_M10_2 >= $comparativo_formato_5) { $literal_pruebass_redonj_M10_2 = $literal_formato_5;  }
      if ($pruebass_redonj_M10_2 >= $comparativo_formato_6) { $literal_pruebass_redonj_M10_2 = $literal_formato_6;  }
      if ($pruebass_redonj_M10_2 >= $comparativo_formato_7) { $literal_pruebass_redonj_M10_2 = $literal_formato_7;  }
      if ($pruebass_redonj_M10_2 >= $comparativo_formato_8) { $literal_pruebass_redonj_M10_2 = $literal_formato_8;  }
      if ($pruebass_redonj_M10_2 >= $comparativo_formato_9) { $literal_pruebass_redonj_M10_2 = $literal_formato_9;  }
      if ($pruebass_redonj_M10_2 >= $comparativo_formato_10) { $literal_pruebass_redonj_M10_2 = $literal_formato_10;  }
      if ($pruebass_redonj_M10_2 >= $comparativo_formato_11) { $literal_pruebass_redonj_M10_2 = $literal_formato_11;  }
      if ($pruebass_redonj_M10_2 >= $comparativo_formato_12) { $literal_pruebass_redonj_M10_2 = $literal_formato_12;  } 
         }
}
?> 




 <?php

               $k_ayuda = '';

                if ($row_datos_controlmat['k_suma'] !=1) {
                  $k_ayuda = '#';
               }

               ?>

               <?php 

if ($row_datos_controlmat['k_convertir'] == 1 ) {  /* numerico */
       
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
    } /* cierre alfabetico */

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
 } /* cierre literal */


                    ?>

                        
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
   } /* cierre alfabetico */

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
   } /* cierre literal */ ?>




                    <?php 

if ($row_datos_controlmat['k_convertir'] == 1 ) {  /* numerico */
  
} /* cierre numerico */
if ($row_datos_controlmat['k_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M11_L2xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M11_L2xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M11_L2xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M11_L2xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M11_L2xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M11_L2xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M11_L2xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M11_L2xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M11_L2xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M11_L2xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M11_L2xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M11_L2xx = $alfabetico_formato_12;  }
   } /* cierre alfabetico */

if ($row_datos_controlmat['k_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M11_L2xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M11_L2xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M11_L2xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M11_L2xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M11_L2xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M11_L2xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M11_L2xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M11_L2xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M11_L2xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M11_L2xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M11_L2xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M11_L2xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M11_L2xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>


<?php 

if ($lap2_div_mat11 == '') {
    $lap2_pro_todo_M11_redond = '';
}

else {

    $lap2_pro_todo_M11 = $lap2_tot_mat11/$lap2_div_mat11;

  $lap2_pro_todo_M11_redondeado1 =number_format($lap2_pro_todo_M11, 1, '.', '');

    $lap2_pro_todo_M11_redond =number_format($lap2_pro_todo_M11_redondeado1);


    $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 + 1;   //  lleva el conteo de la division para el promedio del salon del 2do lapso
    $lap_suma_total_promedio_Lap_2 = $lap_suma_total_promedio_Lap_2 + $lap2_pro_todo_M11_redond;  // lleva el divisor para el promedio del salon 2do lapso


    if ($row_datos_controlmat['k_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_2 =  $lap_suma_total_promedio_Lap_2 - $lap2_pro_todo_M11_redond; $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 - 1;  }


    $lapso1_materia11_promedio_aula = $lap2_pro_todo_M11_redond;
    $lapso1_materia11_promedio_aula_divisor = $lapso1_materia11_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia11_aula_promedio =  $definitiva_materia11_aula_promedio + $lap2_pro_todo_M11_redond;
     $definitiva_materia11_aula_divisor = $definitiva_materia11_aula_divisor + 1;


}



if ($row_datos_controlmat['k_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['k_convertir'] == 2 ) {  /* alfabetico */
   if ($lap2_pro_todo_M11_redond >= $comparativo_formato_1) { $alfabetico_lap2_pro_todo_M11_redond = $alfabetico_formato_1;  }
   if ($lap2_pro_todo_M11_redond >= $comparativo_formato_2) { $alfabetico_lap2_pro_todo_M11_redond = $alfabetico_formato_2;  }
   if ($lap2_pro_todo_M11_redond >= $comparativo_formato_3) { $alfabetico_lap2_pro_todo_M11_redond = $alfabetico_formato_3;  }
   if ($lap2_pro_todo_M11_redond >= $comparativo_formato_4) { $alfabetico_lap2_pro_todo_M11_redond = $alfabetico_formato_4;  }
   if ($lap2_pro_todo_M11_redond >= $comparativo_formato_5) { $alfabetico_lap2_pro_todo_M11_redond = $alfabetico_formato_5;  }
   if ($lap2_pro_todo_M11_redond >= $comparativo_formato_6) { $alfabetico_lap2_pro_todo_M11_redond = $alfabetico_formato_6;  }
   if ($lap2_pro_todo_M11_redond >= $comparativo_formato_7) { $alfabetico_lap2_pro_todo_M11_redond = $alfabetico_formato_7;  }
   if ($lap2_pro_todo_M11_redond >= $comparativo_formato_8) { $alfabetico_lap2_pro_todo_M11_redond = $alfabetico_formato_8;  }
   if ($lap2_pro_todo_M11_redond >= $comparativo_formato_9) { $alfabetico_lap2_pro_todo_M11_redond = $alfabetico_formato_9;  }
   if ($lap2_pro_todo_M11_redond >= $comparativo_formato_10) { $alfabetico_lap2_pro_todo_M11_redond = $alfabetico_formato_10;  }
   if ($lap2_pro_todo_M11_redond >= $comparativo_formato_11) { $alfabetico_lap2_pro_todo_M11_redond = $alfabetico_formato_11;  }
   if ($lap2_pro_todo_M11_redond >= $comparativo_formato_12) { $alfabetico_lap2_pro_todo_M11_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['k_convertir'] == 3 ) {  /* literal */
  if ($lap2_pro_todo_M11_redond >= $comparativo_formato_1) { $literal_lap2_pro_todo_M11_redond = $literal_formato_1;  }
  if ($lap2_pro_todo_M11_redond >= $comparativo_formato_2) { $literal_lap2_pro_todo_M11_redond = $literal_formato_2;  }
  if ($lap2_pro_todo_M11_redond >= $comparativo_formato_3) { $literal_lap2_pro_todo_M11_redond = $literal_formato_3;  }
  if ($lap2_pro_todo_M11_redond >= $comparativo_formato_4) { $literal_lap2_pro_todo_M11_redond = $literal_formato_4;  }
  if ($lap2_pro_todo_M11_redond >= $comparativo_formato_5) { $literal_lap2_pro_todo_M11_redond = $literal_formato_5;  }
  if ($lap2_pro_todo_M11_redond >= $comparativo_formato_6) { $literal_lap2_pro_todo_M11_redond = $literal_formato_6;  }
  if ($lap2_pro_todo_M11_redond >= $comparativo_formato_7) { $literal_lap2_pro_todo_M11_redond = $literal_formato_7;  }
  if ($lap2_pro_todo_M11_redond >= $comparativo_formato_8) { $literal_lap2_pro_todo_M11_redond = $literal_formato_8;  }
  if ($lap2_pro_todo_M11_redond >= $comparativo_formato_9) { $literal_lap2_pro_todo_M11_redond = $literal_formato_9;  }
  if ($lap2_pro_todo_M11_redond >= $comparativo_formato_10) { $literal_lap2_pro_todo_M11_redond = $literal_formato_10;  }
  if ($lap2_pro_todo_M11_redond >= $comparativo_formato_11) { $literal_lap2_pro_todo_M11_redond = $literal_formato_11;  }
  if ($lap2_pro_todo_M11_redond >= $comparativo_formato_12) { $literal_lap2_pro_todo_M11_redond = $literal_formato_12;  } 
   } /* cierre literal */   ?>








                   <?php 

if ($row_datos_controlmat['k_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['k_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M11_L3xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M11_L3xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M11_L3xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M11_L3xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M11_L3xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M11_L3xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M11_L3xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M11_L3xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M11_L3xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M11_L3xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M11_L3xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M11_L3xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['k_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M11_L3xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M11_L3xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M11_L3xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M11_L3xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M11_L3xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M11_L3xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M11_L3xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M11_L3xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M11_L3xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M11_L3xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M11_L3xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M11_L3xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M11_L3xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>
                        

<?php 
if ($lap3_div_mat11 == '') {
    $lap3_pro_todo_M11_redond = '';
}
else {
    $lap3_pro_todo_M11 = $lap3_tot_mat11/$lap3_div_mat11;
 $lap3_pro_todo_M11_redondeado1 =number_format($lap3_pro_todo_M11, 1, '.', '');
    $lap3_pro_todo_M11_redond =number_format($lap3_pro_todo_M11_redondeado1);


    $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 + 1;   //  lleva el conteo de la division para el promedio del salon del 3er lapso
    $lap_suma_total_promedio_Lap_3 = $lap_suma_total_promedio_Lap_3 + $lap3_pro_todo_M11_redond;  // lleva el divisor para el promedio del salon 2do lapso


if ($row_datos_controlmat['k_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_3 =  $lap_suma_total_promedio_Lap_3 - $lap3_pro_todo_M11_redond; $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 - 1;  }



    $lapso3_materia11_promedio_aula = $lap3_pro_todo_M11_redond;
    $lapso3_materia11_promedio_aula_divisor = $lapso3_materia11_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia11_aula_promedio =  $definitiva_materia11_aula_promedio + $lap3_pro_todo_M11_redond;
     $definitiva_materia11_aula_divisor = $definitiva_materia11_aula_divisor + 1;
}

if ($row_datos_controlmat['k_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['k_convertir'] == 2 ) {  /* alfabetico */
   if ($lap3_pro_todo_M11_redond >= $comparativo_formato_1) { $alfabetico_lap3_pro_todo_M11_redond = $alfabetico_formato_1;  }
   if ($lap3_pro_todo_M11_redond >= $comparativo_formato_2) { $alfabetico_lap3_pro_todo_M11_redond = $alfabetico_formato_2;  }
   if ($lap3_pro_todo_M11_redond >= $comparativo_formato_3) { $alfabetico_lap3_pro_todo_M11_redond = $alfabetico_formato_3;  }
   if ($lap3_pro_todo_M11_redond >= $comparativo_formato_4) { $alfabetico_lap3_pro_todo_M11_redond = $alfabetico_formato_4;  }
   if ($lap3_pro_todo_M11_redond >= $comparativo_formato_5) { $alfabetico_lap3_pro_todo_M11_redond = $alfabetico_formato_5;  }
   if ($lap3_pro_todo_M11_redond >= $comparativo_formato_6) { $alfabetico_lap3_pro_todo_M11_redond = $alfabetico_formato_6;  }
   if ($lap3_pro_todo_M11_redond >= $comparativo_formato_7) { $alfabetico_lap3_pro_todo_M11_redond = $alfabetico_formato_7;  }
   if ($lap3_pro_todo_M11_redond >= $comparativo_formato_8) { $alfabetico_lap3_pro_todo_M11_redond = $alfabetico_formato_8;  }
   if ($lap3_pro_todo_M11_redond >= $comparativo_formato_9) { $alfabetico_lap3_pro_todo_M11_redond = $alfabetico_formato_9;  }
   if ($lap3_pro_todo_M11_redond >= $comparativo_formato_10) { $alfabetico_lap3_pro_todo_M11_redond = $alfabetico_formato_10;  }
   if ($lap3_pro_todo_M11_redond >= $comparativo_formato_11) { $alfabetico_lap3_pro_todo_M11_redond = $alfabetico_formato_11;  }
   if ($lap3_pro_todo_M11_redond >= $comparativo_formato_12) { $alfabetico_lap3_pro_todo_M11_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['k_convertir'] == 3 ) {  /* literal */
  if ($lap3_pro_todo_M11_redond >= $comparativo_formato_1) { $literal_lap3_pro_todo_M11_redond = $literal_formato_1;  }
  if ($lap3_pro_todo_M11_redond >= $comparativo_formato_2) { $literal_lap3_pro_todo_M11_redond = $literal_formato_2;  }
  if ($lap3_pro_todo_M11_redond >= $comparativo_formato_3) { $literal_lap3_pro_todo_M11_redond = $literal_formato_3;  }
  if ($lap3_pro_todo_M11_redond >= $comparativo_formato_4) { $literal_lap3_pro_todo_M11_redond = $literal_formato_4;  }
  if ($lap3_pro_todo_M11_redond >= $comparativo_formato_5) { $literal_lap3_pro_todo_M11_redond = $literal_formato_5;  }
  if ($lap3_pro_todo_M11_redond >= $comparativo_formato_6) { $literal_lap3_pro_todo_M11_redond = $literal_formato_6;  }
  if ($lap3_pro_todo_M11_redond >= $comparativo_formato_7) { $literal_lap3_pro_todo_M11_redond = $literal_formato_7;  }
  if ($lap3_pro_todo_M11_redond >= $comparativo_formato_8) { $literal_lap3_pro_todo_M11_redond = $literal_formato_8;  }
  if ($lap3_pro_todo_M11_redond >= $comparativo_formato_9) { $literal_lap3_pro_todo_M11_redond = $literal_formato_9;  }
  if ($lap3_pro_todo_M11_redond >= $comparativo_formato_10) { $literal_lap3_pro_todo_M11_redond = $literal_formato_10;  }
  if ($lap3_pro_todo_M11_redond >= $comparativo_formato_11) { $literal_lap3_pro_todo_M11_redond = $literal_formato_11;  }
  if ($lap3_pro_todo_M11_redond >= $comparativo_formato_12) { $literal_lap3_pro_todo_M11_redond = $literal_formato_12;  } 
  } /* cierre literal */ ?> 





                    <?php

if ($lap1_pro_todo_M11_redond== '' && $lap2_pro_todo_M11_redond== ''  && $lap3_pro_todo_M11_redond== '') {
    $totalcito_M11 = '';
    $tot_M11 = '';

}

else {
    $totalcito_M11 = $total_seven_con_Au_redon_M11_aproxxx + $row_datos_control_notasM11["nt_AuF"];
}


                    if ($row_datos_controlmat['k_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['k_convertir'] == 2 ) {  /* alfabetico */
   if ($totalcito_M11 >= $comparativo_formato_1) { $alfabetico_totalcito_M11 = $alfabetico_formato_1;  }
   if ($totalcito_M11 >= $comparativo_formato_2) { $alfabetico_totalcito_M11 = $alfabetico_formato_2;  }
   if ($totalcito_M11 >= $comparativo_formato_3) { $alfabetico_totalcito_M11 = $alfabetico_formato_3;  }
   if ($totalcito_M11 >= $comparativo_formato_4) { $alfabetico_totalcito_M11 = $alfabetico_formato_4;  }
   if ($totalcito_M11 >= $comparativo_formato_5) { $alfabetico_totalcito_M11 = $alfabetico_formato_5;  }
   if ($totalcito_M11 >= $comparativo_formato_6) { $alfabetico_totalcito_M11 = $alfabetico_formato_6;  }
   if ($totalcito_M11 >= $comparativo_formato_7) { $alfabetico_totalcito_M11 = $alfabetico_formato_7;  }
   if ($totalcito_M11 >= $comparativo_formato_8) { $alfabetico_totalcito_M11 = $alfabetico_formato_8;  }
   if ($totalcito_M11 >= $comparativo_formato_9) { $alfabetico_totalcito_M11 = $alfabetico_formato_9;  }
   if ($totalcito_M11 >= $comparativo_formato_10) { $alfabetico_totalcito_M11 = $alfabetico_formato_10;  }
   if ($totalcito_M11 >= $comparativo_formato_11) { $alfabetico_totalcito_M11 = $alfabetico_formato_11;  }
   if ($totalcito_M11 >= $comparativo_formato_12) { $alfabetico_totalcito_M11 = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['k_convertir'] == 3 ) {  /* literal */
  if ($totalcito_M11 >= $comparativo_formato_1) { $literal_totalcito_M11 = $literal_formato_1;  }
  if ($totalcito_M11 >= $comparativo_formato_2) { $literal_totalcito_M11 = $literal_formato_2;  }
  if ($totalcito_M11 >= $comparativo_formato_3) { $literal_totalcito_M11 = $literal_formato_3;  }
  if ($totalcito_M11 >= $comparativo_formato_4) { $literal_totalcito_M11 = $literal_formato_4;  }
  if ($totalcito_M11 >= $comparativo_formato_5) { $literal_totalcito_M11 = $literal_formato_5;  }
  if ($totalcito_M11 >= $comparativo_formato_6) { $literal_totalcito_M11 = $literal_formato_6;  }
  if ($totalcito_M11 >= $comparativo_formato_7) { $literal_totalcito_M11 = $literal_formato_7;  }
  if ($totalcito_M11 >= $comparativo_formato_8) { $literal_totalcito_M11 = $literal_formato_8;  }
  if ($totalcito_M11 >= $comparativo_formato_9) { $literal_totalcito_M11 = $literal_formato_9;  }
  if ($totalcito_M11 >= $comparativo_formato_10) { $literal_totalcito_M11 = $literal_formato_10;  }
  if ($totalcito_M11 >= $comparativo_formato_11) { $literal_totalcito_M11 = $literal_formato_11;  }
  if ($totalcito_M11 >= $comparativo_formato_12) { $literal_totalcito_M11 = $literal_formato_12;  } 
   } /* cierre literal */


  ?>
                         

                    












                   
                        
<?php

$tot123_M11 = $definitiva_materia11_aula_promedio/$definitiva_materia11_aula_divisor;

if ($definitiva_materia11_aula_divisor == '0') {
    $tot123_M1_form = '';
}

else {
$tot123_M11_form_redondeado1 = number_format($tot123_M11, 1, '.', '');
    $tot123_M11_form = number_format($tot123_M11_form_redondeado1);

$promedio_total123 = $promedio_total123 +  $tot123_M11_form;     // acumula el promedio total
$promedio_total123_divisor = $promedio_total123_divisor + 1 ;


if ($row_datos_controlmat['k_suma'] != 1)
 {  $promedio_total123 =  $promedio_total123 - $tot123_M11_form; $promedio_total123_divisor =  $promedio_total123_divisor - 1;  }


}



if ($row_datos_controlmat['k_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['k_convertir'] == 2 ) {  /* alfabetico */
   if ($tot123_M11_form >= $comparativo_formato_1) { $alfabetico_tot123_M11_form = $alfabetico_formato_1;  }
   if ($tot123_M11_form >= $comparativo_formato_2) { $alfabetico_tot123_M11_form = $alfabetico_formato_2;  }
   if ($tot123_M11_form >= $comparativo_formato_3) { $alfabetico_tot123_M11_form = $alfabetico_formato_3;  }
   if ($tot123_M11_form >= $comparativo_formato_4) { $alfabetico_tot123_M11_form = $alfabetico_formato_4;  }
   if ($tot123_M11_form >= $comparativo_formato_5) { $alfabetico_tot123_M11_form = $alfabetico_formato_5;  }
   if ($tot123_M11_form >= $comparativo_formato_6) { $alfabetico_tot123_M11_form = $alfabetico_formato_6;  }
   if ($tot123_M11_form >= $comparativo_formato_7) { $alfabetico_tot123_M11_form = $alfabetico_formato_7;  }
   if ($tot123_M11_form >= $comparativo_formato_8) { $alfabetico_tot123_M11_form = $alfabetico_formato_8;  }
   if ($tot123_M11_form >= $comparativo_formato_9) { $alfabetico_tot123_M11_form = $alfabetico_formato_9;  }
   if ($tot123_M11_form >= $comparativo_formato_10) { $alfabetico_tot123_M11_form = $alfabetico_formato_10;  }
   if ($tot123_M11_form >= $comparativo_formato_11) { $alfabetico_tot123_M11_form = $alfabetico_formato_11;  }
   if ($tot123_M11_form >= $comparativo_formato_12) { $alfabetico_tot123_M11_form = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['k_convertir'] == 3 ) {  /* literal */
  if ($tot123_M11_form >= $comparativo_formato_1) { $literal_tot123_M11_form = $literal_formato_1;  }
  if ($tot123_M11_form >= $comparativo_formato_2) { $literal_tot123_M11_form = $literal_formato_2;  }
  if ($tot123_M11_form >= $comparativo_formato_3) { $literal_tot123_M11_form = $literal_formato_3;  }
  if ($tot123_M11_form >= $comparativo_formato_4) { $literal_tot123_M11_form = $literal_formato_4;  }
  if ($tot123_M11_form >= $comparativo_formato_5) { $literal_tot123_M11_form = $literal_formato_5;  }
  if ($tot123_M11_form >= $comparativo_formato_6) { $literal_tot123_M11_form = $literal_formato_6;  }
  if ($tot123_M11_form >= $comparativo_formato_7) { $literal_tot123_M11_form = $literal_formato_7;  }
  if ($tot123_M11_form >= $comparativo_formato_8) { $literal_tot123_M11_form = $literal_formato_8;  }
  if ($tot123_M11_form >= $comparativo_formato_9) { $literal_tot123_M11_form = $literal_formato_9;  }
  if ($tot123_M11_form >= $comparativo_formato_10) { $literal_tot123_M11_form = $literal_formato_10;  }
  if ($tot123_M11_form >= $comparativo_formato_11) { $literal_tot123_M11_form = $literal_formato_11;  }
  if ($tot123_M11_form >= $comparativo_formato_12) { $literal_tot123_M11_form = $literal_formato_12;  } 
     }

$definitiva_materia11_aula_promedio = '0';
$definitiva_materia11_aula_divisor = '0';


?>




                   



<?php  
$pruebass_M11_1 = $row_datos_control_notasM11["rev_uno"];
$pruebass_M11_2 = $row_datos_control_notasM11["rev_dos"];
$pruebass_redonk_M11_1 =number_format($pruebass_M11_1);
$pruebass_redonk_M11_2 =number_format($pruebass_M11_2); 
  ?>

<!-- nuevo añadido 1 -->
  
<?php

if ($pruebass_M11_1 != '') {  
    if ($row_datos_controlmat['k_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['k_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redonk_M11_1 >= $comparativo_formato_1) { $alfabetico_pruebass_redonk_M11_1 = $alfabetico_formato_1;  }
       if ($pruebass_redonk_M11_1 >= $comparativo_formato_2) { $alfabetico_pruebass_redonk_M11_1 = $alfabetico_formato_2;  }
       if ($pruebass_redonk_M11_1 >= $comparativo_formato_3) { $alfabetico_pruebass_redonk_M11_1 = $alfabetico_formato_3;  }
       if ($pruebass_redonk_M11_1 >= $comparativo_formato_4) { $alfabetico_pruebass_redonk_M11_1 = $alfabetico_formato_4;  }
       if ($pruebass_redonk_M11_1 >= $comparativo_formato_5) { $alfabetico_pruebass_redonk_M11_1 = $alfabetico_formato_5;  }
       if ($pruebass_redonk_M11_1 >= $comparativo_formato_6) { $alfabetico_pruebass_redonk_M11_1 = $alfabetico_formato_6;  }
       if ($pruebass_redonk_M11_1 >= $comparativo_formato_7) { $alfabetico_pruebass_redonk_M11_1 = $alfabetico_formato_7;  }
       if ($pruebass_redonk_M11_1 >= $comparativo_formato_8) { $alfabetico_pruebass_redonk_M11_1 = $alfabetico_formato_8;  }
       if ($pruebass_redonk_M11_1 >= $comparativo_formato_9) { $alfabetico_pruebass_redonk_M11_1 = $alfabetico_formato_9;  }
       if ($pruebass_redonk_M11_1 >= $comparativo_formato_10) { $alfabetico_pruebass_redonk_M11_1 = $alfabetico_formato_10;  }
       if ($pruebass_redonk_M11_1 >= $comparativo_formato_11) { $alfabetico_pruebass_redonk_M11_1 = $alfabetico_formato_11;  }
       if ($pruebass_redonk_M11_1 >= $comparativo_formato_12) { $alfabetico_pruebass_redonk_M11_1 = $alfabetico_formato_12;  }
       } /* cierre alfabetico */
    if ($row_datos_controlmat['k_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redonk_M11_1 >= $comparativo_formato_1) { $literal_pruebass_redonk_M11_1 = $literal_formato_1;  }
      if ($pruebass_redonk_M11_1 >= $comparativo_formato_2) { $literal_pruebass_redonk_M11_1 = $literal_formato_2;  }
      if ($pruebass_redonk_M11_1 >= $comparativo_formato_3) { $literal_pruebass_redonk_M11_1 = $literal_formato_3;  }
      if ($pruebass_redonk_M11_1 >= $comparativo_formato_4) { $literal_pruebass_redonk_M11_1 = $literal_formato_4;  }
      if ($pruebass_redonk_M11_1 >= $comparativo_formato_5) { $literal_pruebass_redonk_M11_1 = $literal_formato_5;  }
      if ($pruebass_redonk_M11_1 >= $comparativo_formato_6) { $literal_pruebass_redonk_M11_1 = $literal_formato_6;  }
      if ($pruebass_redonk_M11_1 >= $comparativo_formato_7) { $literal_pruebass_redonk_M11_1 = $literal_formato_7;  }
      if ($pruebass_redonk_M11_1 >= $comparativo_formato_8) { $literal_pruebass_redonk_M11_1 = $literal_formato_8;  }
      if ($pruebass_redonk_M11_1 >= $comparativo_formato_9) { $literal_pruebass_redonk_M11_1 = $literal_formato_9;  }
      if ($pruebass_redonk_M11_1 >= $comparativo_formato_10) { $literal_pruebass_redonk_M11_1 = $literal_formato_10;  }
      if ($pruebass_redonk_M11_1 >= $comparativo_formato_11) { $literal_pruebass_redonk_M11_1 = $literal_formato_11;  }
      if ($pruebass_redonk_M11_1 >= $comparativo_formato_12) { $literal_pruebass_redonk_M11_1 = $literal_formato_12;  } 
        }
}
?> 
   
   <?php

if ($pruebass_M11_2 != '') {  
    if ($row_datos_controlmat['k_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['k_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redonk_M11_2 >= $comparativo_formato_1) { $alfabetico_pruebass_redonk_M11_2 = $alfabetico_formato_1;  }
       if ($pruebass_redonk_M11_2 >= $comparativo_formato_2) { $alfabetico_pruebass_redonk_M11_2 = $alfabetico_formato_2;  }
       if ($pruebass_redonk_M11_2 >= $comparativo_formato_3) { $alfabetico_pruebass_redonk_M11_2 = $alfabetico_formato_3;  }
       if ($pruebass_redonk_M11_2 >= $comparativo_formato_4) { $alfabetico_pruebass_redonk_M11_2 = $alfabetico_formato_4;  }
       if ($pruebass_redonk_M11_2 >= $comparativo_formato_5) { $alfabetico_pruebass_redonk_M11_2 = $alfabetico_formato_5;  }
       if ($pruebass_redonk_M11_2 >= $comparativo_formato_6) { $alfabetico_pruebass_redonk_M11_2 = $alfabetico_formato_6;  }
       if ($pruebass_redonk_M11_2 >= $comparativo_formato_7) { $alfabetico_pruebass_redonk_M11_2 = $alfabetico_formato_7;  }
       if ($pruebass_redonk_M11_2 >= $comparativo_formato_8) { $alfabetico_pruebass_redonk_M11_2 = $alfabetico_formato_8;  }
       if ($pruebass_redonk_M11_2 >= $comparativo_formato_9) { $alfabetico_pruebass_redonk_M11_2 = $alfabetico_formato_9;  }
       if ($pruebass_redonk_M11_2 >= $comparativo_formato_10) { $alfabetico_pruebass_redonk_M11_2 = $alfabetico_formato_10;  }
       if ($pruebass_redonk_M11_2 >= $comparativo_formato_11) { $alfabetico_pruebass_redonk_M11_2 = $alfabetico_formato_11;  }
       if ($pruebass_redonk_M11_2 >= $comparativo_formato_12) { $alfabetico_pruebass_redonk_M11_2 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['k_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redonk_M11_2 >= $comparativo_formato_1) { $literal_pruebass_redonk_M11_2 = $literal_formato_1;  }
      if ($pruebass_redonk_M11_2 >= $comparativo_formato_2) { $literal_pruebass_redonk_M11_2 = $literal_formato_2;  }
      if ($pruebass_redonk_M11_2 >= $comparativo_formato_3) { $literal_pruebass_redonk_M11_2 = $literal_formato_3;  }
      if ($pruebass_redonk_M11_2 >= $comparativo_formato_4) { $literal_pruebass_redonk_M11_2 = $literal_formato_4;  }
      if ($pruebass_redonk_M11_2 >= $comparativo_formato_5) { $literal_pruebass_redonk_M11_2 = $literal_formato_5;  }
      if ($pruebass_redonk_M11_2 >= $comparativo_formato_6) { $literal_pruebass_redonk_M11_2 = $literal_formato_6;  }
      if ($pruebass_redonk_M11_2 >= $comparativo_formato_7) { $literal_pruebass_redonk_M11_2 = $literal_formato_7;  }
      if ($pruebass_redonk_M11_2 >= $comparativo_formato_8) { $literal_pruebass_redonk_M11_2 = $literal_formato_8;  }
      if ($pruebass_redonk_M11_2 >= $comparativo_formato_9) { $literal_pruebass_redonk_M11_2 = $literal_formato_9;  }
      if ($pruebass_redonk_M11_2 >= $comparativo_formato_10) { $literal_pruebass_redonk_M11_2 = $literal_formato_10;  }
      if ($pruebass_redonk_M11_2 >= $comparativo_formato_11) { $literal_pruebass_redonk_M11_2 = $literal_formato_11;  }
      if ($pruebass_redonk_M11_2 >= $comparativo_formato_12) { $literal_pruebass_redonk_M11_2 = $literal_formato_12;  } 
         }
}
?> 




 <?php

               $l_ayuda = '';

                if ($row_datos_controlmat['l_suma'] !=1) {
                  $l_ayuda = '#';
               }

               ?>

               <?php 

if ($row_datos_controlmat['l_convertir'] == 1 ) {  /* numerico */
       
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
    } /* cierre alfabetico */

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
 } /* cierre literal */


                    ?>

                        
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
   } /* cierre alfabetico */

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
   } /* cierre literal */ ?>




                    <?php 

if ($row_datos_controlmat['l_convertir'] == 1 ) {  /* numerico */
  
} /* cierre numerico */
if ($row_datos_controlmat['l_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M12_L2xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M12_L2xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M12_L2xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M12_L2xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M12_L2xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M12_L2xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M12_L2xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M12_L2xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M12_L2xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M12_L2xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M12_L2xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M12_L2xx = $alfabetico_formato_12;  }
   } /* cierre alfabetico */

if ($row_datos_controlmat['l_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M12_L2xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M12_L2xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M12_L2xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M12_L2xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M12_L2xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M12_L2xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M12_L2xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M12_L2xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M12_L2xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M12_L2xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M12_L2xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M12_L2xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M12_L2xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>


<?php 

if ($lap2_div_mat12 == '') {
    $lap2_pro_todo_M12_redond = '';
}

else {

    $lap2_pro_todo_M12 = $lap2_tot_mat12/$lap2_div_mat12;

  $lap2_pro_todo_M12_redondeado1 =number_format($lap2_pro_todo_M12, 1, '.', '');

    $lap2_pro_todo_M12_redond =number_format($lap2_pro_todo_M12_redondeado1);


    $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 + 1;   //  lleva el conteo de la division para el promedio del salon del 2do lapso
    $lap_suma_total_promedio_Lap_2 = $lap_suma_total_promedio_Lap_2 + $lap2_pro_todo_M12_redond;  // lleva el divisor para el promedio del salon 2do lapso


    if ($row_datos_controlmat['l_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_2 =  $lap_suma_total_promedio_Lap_2 - $lap2_pro_todo_M12_redond; $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 - 1;  }


    $lapso1_materia12_promedio_aula = $lap2_pro_todo_M12_redond;
    $lapso1_materia12_promedio_aula_divisor = $lapso1_materia12_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia12_aula_promedio =  $definitiva_materia12_aula_promedio + $lap2_pro_todo_M12_redond;
     $definitiva_materia12_aula_divisor = $definitiva_materia12_aula_divisor + 1;


}



if ($row_datos_controlmat['l_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['l_convertir'] == 2 ) {  /* alfabetico */
   if ($lap2_pro_todo_M12_redond >= $comparativo_formato_1) { $alfabetico_lap2_pro_todo_M12_redond = $alfabetico_formato_1;  }
   if ($lap2_pro_todo_M12_redond >= $comparativo_formato_2) { $alfabetico_lap2_pro_todo_M12_redond = $alfabetico_formato_2;  }
   if ($lap2_pro_todo_M12_redond >= $comparativo_formato_3) { $alfabetico_lap2_pro_todo_M12_redond = $alfabetico_formato_3;  }
   if ($lap2_pro_todo_M12_redond >= $comparativo_formato_4) { $alfabetico_lap2_pro_todo_M12_redond = $alfabetico_formato_4;  }
   if ($lap2_pro_todo_M12_redond >= $comparativo_formato_5) { $alfabetico_lap2_pro_todo_M12_redond = $alfabetico_formato_5;  }
   if ($lap2_pro_todo_M12_redond >= $comparativo_formato_6) { $alfabetico_lap2_pro_todo_M12_redond = $alfabetico_formato_6;  }
   if ($lap2_pro_todo_M12_redond >= $comparativo_formato_7) { $alfabetico_lap2_pro_todo_M12_redond = $alfabetico_formato_7;  }
   if ($lap2_pro_todo_M12_redond >= $comparativo_formato_8) { $alfabetico_lap2_pro_todo_M12_redond = $alfabetico_formato_8;  }
   if ($lap2_pro_todo_M12_redond >= $comparativo_formato_9) { $alfabetico_lap2_pro_todo_M12_redond = $alfabetico_formato_9;  }
   if ($lap2_pro_todo_M12_redond >= $comparativo_formato_10) { $alfabetico_lap2_pro_todo_M12_redond = $alfabetico_formato_10;  }
   if ($lap2_pro_todo_M12_redond >= $comparativo_formato_11) { $alfabetico_lap2_pro_todo_M12_redond = $alfabetico_formato_11;  }
   if ($lap2_pro_todo_M12_redond >= $comparativo_formato_12) { $alfabetico_lap2_pro_todo_M12_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['l_convertir'] == 3 ) {  /* literal */
  if ($lap2_pro_todo_M12_redond >= $comparativo_formato_1) { $literal_lap2_pro_todo_M12_redond = $literal_formato_1;  }
  if ($lap2_pro_todo_M12_redond >= $comparativo_formato_2) { $literal_lap2_pro_todo_M12_redond = $literal_formato_2;  }
  if ($lap2_pro_todo_M12_redond >= $comparativo_formato_3) { $literal_lap2_pro_todo_M12_redond = $literal_formato_3;  }
  if ($lap2_pro_todo_M12_redond >= $comparativo_formato_4) { $literal_lap2_pro_todo_M12_redond = $literal_formato_4;  }
  if ($lap2_pro_todo_M12_redond >= $comparativo_formato_5) { $literal_lap2_pro_todo_M12_redond = $literal_formato_5;  }
  if ($lap2_pro_todo_M12_redond >= $comparativo_formato_6) { $literal_lap2_pro_todo_M12_redond = $literal_formato_6;  }
  if ($lap2_pro_todo_M12_redond >= $comparativo_formato_7) { $literal_lap2_pro_todo_M12_redond = $literal_formato_7;  }
  if ($lap2_pro_todo_M12_redond >= $comparativo_formato_8) { $literal_lap2_pro_todo_M12_redond = $literal_formato_8;  }
  if ($lap2_pro_todo_M12_redond >= $comparativo_formato_9) { $literal_lap2_pro_todo_M12_redond = $literal_formato_9;  }
  if ($lap2_pro_todo_M12_redond >= $comparativo_formato_10) { $literal_lap2_pro_todo_M12_redond = $literal_formato_10;  }
  if ($lap2_pro_todo_M12_redond >= $comparativo_formato_11) { $literal_lap2_pro_todo_M12_redond = $literal_formato_11;  }
  if ($lap2_pro_todo_M12_redond >= $comparativo_formato_12) { $literal_lap2_pro_todo_M12_redond = $literal_formato_12;  } 
   } /* cierre literal */   ?>








                   <?php 

if ($row_datos_controlmat['l_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['l_convertir'] == 2 ) {  /* alfabetico */
   if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M12_L3xx = $alfabetico_formato_1;  }
   if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M12_L3xx = $alfabetico_formato_2;  }
   if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M12_L3xx = $alfabetico_formato_3;  }
   if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M12_L3xx = $alfabetico_formato_4;  }
   if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M12_L3xx = $alfabetico_formato_5;  }
   if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M12_L3xx = $alfabetico_formato_6;  }
   if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M12_L3xx = $alfabetico_formato_7;  }
   if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M12_L3xx = $alfabetico_formato_8;  }
   if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M12_L3xx = $alfabetico_formato_9;  }
   if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M12_L3xx = $alfabetico_formato_10;  }
   if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M12_L3xx = $alfabetico_formato_11;  }
   if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M12_L3xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['l_convertir'] == 3 ) {  /* literal */
  if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_1) { $literal_seven_con_Au_redon_M12_L3xx = $literal_formato_1;  }
  if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_2) { $literal_seven_con_Au_redon_M12_L3xx = $literal_formato_2;  }
  if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_3) { $literal_seven_con_Au_redon_M12_L3xx = $literal_formato_3;  }
  if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_4) { $literal_seven_con_Au_redon_M12_L3xx = $literal_formato_4;  }
  if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_5) { $literal_seven_con_Au_redon_M12_L3xx = $literal_formato_5;  }
  if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_6) { $literal_seven_con_Au_redon_M12_L3xx = $literal_formato_6;  }
  if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_7) { $literal_seven_con_Au_redon_M12_L3xx = $literal_formato_7;  }
  if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_8) { $literal_seven_con_Au_redon_M12_L3xx = $literal_formato_8;  }
  if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_9) { $literal_seven_con_Au_redon_M12_L3xx = $literal_formato_9;  }
  if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_10) { $literal_seven_con_Au_redon_M12_L3xx = $literal_formato_10;  }
  if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_11) { $literal_seven_con_Au_redon_M12_L3xx = $literal_formato_11;  }
  if ($total_seven_con_Au_redon_M12_L3xx >= $comparativo_formato_12) { $literal_seven_con_Au_redon_M12_L3xx = $literal_formato_12;  } 
   } /* cierre literal */


                    ?>
                        

<?php 
if ($lap3_div_mat12 == '') {
    $lap3_pro_todo_M12_redond = '';
}
else {
    $lap3_pro_todo_M12 = $lap3_tot_mat12/$lap3_div_mat12;
 $lap3_pro_todo_M12_redondeado1 =number_format($lap3_pro_todo_M12, 1, '.', '');
    $lap3_pro_todo_M12_redond =number_format($lap3_pro_todo_M12_redondeado1);


    $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 + 1;   //  lleva el conteo de la division para el promedio del salon del 3er lapso
    $lap_suma_total_promedio_Lap_3 = $lap_suma_total_promedio_Lap_3 + $lap3_pro_todo_M12_redond;  // lleva el divisor para el promedio del salon 2do lapso


if ($row_datos_controlmat['l_suma'] != 1)
 {  $lap_suma_total_promedio_Lap_3 =  $lap_suma_total_promedio_Lap_3 - $lap3_pro_todo_M12_redond; $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 - 1;  }



    $lapso3_materia12_promedio_aula = $lap3_pro_todo_M12_redond;
    $lapso3_materia12_promedio_aula_divisor = $lapso3_materia12_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia12_aula_promedio =  $definitiva_materia12_aula_promedio + $lap3_pro_todo_M12_redond;
     $definitiva_materia12_aula_divisor = $definitiva_materia12_aula_divisor + 1;
}

if ($row_datos_controlmat['l_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['l_convertir'] == 2 ) {  /* alfabetico */
   if ($lap3_pro_todo_M12_redond >= $comparativo_formato_1) { $alfabetico_lap3_pro_todo_M12_redond = $alfabetico_formato_1;  }
   if ($lap3_pro_todo_M12_redond >= $comparativo_formato_2) { $alfabetico_lap3_pro_todo_M12_redond = $alfabetico_formato_2;  }
   if ($lap3_pro_todo_M12_redond >= $comparativo_formato_3) { $alfabetico_lap3_pro_todo_M12_redond = $alfabetico_formato_3;  }
   if ($lap3_pro_todo_M12_redond >= $comparativo_formato_4) { $alfabetico_lap3_pro_todo_M12_redond = $alfabetico_formato_4;  }
   if ($lap3_pro_todo_M12_redond >= $comparativo_formato_5) { $alfabetico_lap3_pro_todo_M12_redond = $alfabetico_formato_5;  }
   if ($lap3_pro_todo_M12_redond >= $comparativo_formato_6) { $alfabetico_lap3_pro_todo_M12_redond = $alfabetico_formato_6;  }
   if ($lap3_pro_todo_M12_redond >= $comparativo_formato_7) { $alfabetico_lap3_pro_todo_M12_redond = $alfabetico_formato_7;  }
   if ($lap3_pro_todo_M12_redond >= $comparativo_formato_8) { $alfabetico_lap3_pro_todo_M12_redond = $alfabetico_formato_8;  }
   if ($lap3_pro_todo_M12_redond >= $comparativo_formato_9) { $alfabetico_lap3_pro_todo_M12_redond = $alfabetico_formato_9;  }
   if ($lap3_pro_todo_M12_redond >= $comparativo_formato_10) { $alfabetico_lap3_pro_todo_M12_redond = $alfabetico_formato_10;  }
   if ($lap3_pro_todo_M12_redond >= $comparativo_formato_11) { $alfabetico_lap3_pro_todo_M12_redond = $alfabetico_formato_11;  }
   if ($lap3_pro_todo_M12_redond >= $comparativo_formato_12) { $alfabetico_lap3_pro_todo_M12_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['l_convertir'] == 3 ) {  /* literal */
  if ($lap3_pro_todo_M12_redond >= $comparativo_formato_1) { $literal_lap3_pro_todo_M12_redond = $literal_formato_1;  }
  if ($lap3_pro_todo_M12_redond >= $comparativo_formato_2) { $literal_lap3_pro_todo_M12_redond = $literal_formato_2;  }
  if ($lap3_pro_todo_M12_redond >= $comparativo_formato_3) { $literal_lap3_pro_todo_M12_redond = $literal_formato_3;  }
  if ($lap3_pro_todo_M12_redond >= $comparativo_formato_4) { $literal_lap3_pro_todo_M12_redond = $literal_formato_4;  }
  if ($lap3_pro_todo_M12_redond >= $comparativo_formato_5) { $literal_lap3_pro_todo_M12_redond = $literal_formato_5;  }
  if ($lap3_pro_todo_M12_redond >= $comparativo_formato_6) { $literal_lap3_pro_todo_M12_redond = $literal_formato_6;  }
  if ($lap3_pro_todo_M12_redond >= $comparativo_formato_7) { $literal_lap3_pro_todo_M12_redond = $literal_formato_7;  }
  if ($lap3_pro_todo_M12_redond >= $comparativo_formato_8) { $literal_lap3_pro_todo_M12_redond = $literal_formato_8;  }
  if ($lap3_pro_todo_M12_redond >= $comparativo_formato_9) { $literal_lap3_pro_todo_M12_redond = $literal_formato_9;  }
  if ($lap3_pro_todo_M12_redond >= $comparativo_formato_10) { $literal_lap3_pro_todo_M12_redond = $literal_formato_10;  }
  if ($lap3_pro_todo_M12_redond >= $comparativo_formato_11) { $literal_lap3_pro_todo_M12_redond = $literal_formato_11;  }
  if ($lap3_pro_todo_M12_redond >= $comparativo_formato_12) { $literal_lap3_pro_todo_M12_redond = $literal_formato_12;  } 
  } /* cierre literal */ ?> 





                    <?php

if ($lap1_pro_todo_M12_redond== '' && $lap2_pro_todo_M12_redond== ''  && $lap3_pro_todo_M12_redond== '') {
    $totalcito_M12 = '';
    $tot_M12 = '';

}

else {
    $totalcito_M12 = $total_seven_con_Au_redon_M12_aproxxx + $row_datos_control_notasM12["nt_AuF"];
}


                    if ($row_datos_controlmat['l_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['l_convertir'] == 2 ) {  /* alfabetico */
   if ($totalcito_M12 >= $comparativo_formato_1) { $alfabetico_totalcito_M12 = $alfabetico_formato_1;  }
   if ($totalcito_M12 >= $comparativo_formato_2) { $alfabetico_totalcito_M12 = $alfabetico_formato_2;  }
   if ($totalcito_M12 >= $comparativo_formato_3) { $alfabetico_totalcito_M12 = $alfabetico_formato_3;  }
   if ($totalcito_M12 >= $comparativo_formato_4) { $alfabetico_totalcito_M12 = $alfabetico_formato_4;  }
   if ($totalcito_M12 >= $comparativo_formato_5) { $alfabetico_totalcito_M12 = $alfabetico_formato_5;  }
   if ($totalcito_M12 >= $comparativo_formato_6) { $alfabetico_totalcito_M12 = $alfabetico_formato_6;  }
   if ($totalcito_M12 >= $comparativo_formato_7) { $alfabetico_totalcito_M12 = $alfabetico_formato_7;  }
   if ($totalcito_M12 >= $comparativo_formato_8) { $alfabetico_totalcito_M12 = $alfabetico_formato_8;  }
   if ($totalcito_M12 >= $comparativo_formato_9) { $alfabetico_totalcito_M12 = $alfabetico_formato_9;  }
   if ($totalcito_M12 >= $comparativo_formato_10) { $alfabetico_totalcito_M12 = $alfabetico_formato_10;  }
   if ($totalcito_M12 >= $comparativo_formato_11) { $alfabetico_totalcito_M12 = $alfabetico_formato_11;  }
   if ($totalcito_M12 >= $comparativo_formato_12) { $alfabetico_totalcito_M12 = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['l_convertir'] == 3 ) {  /* literal */
  if ($totalcito_M12 >= $comparativo_formato_1) { $literal_totalcito_M12 = $literal_formato_1;  }
  if ($totalcito_M12 >= $comparativo_formato_2) { $literal_totalcito_M12 = $literal_formato_2;  }
  if ($totalcito_M12 >= $comparativo_formato_3) { $literal_totalcito_M12 = $literal_formato_3;  }
  if ($totalcito_M12 >= $comparativo_formato_4) { $literal_totalcito_M12 = $literal_formato_4;  }
  if ($totalcito_M12 >= $comparativo_formato_5) { $literal_totalcito_M12 = $literal_formato_5;  }
  if ($totalcito_M12 >= $comparativo_formato_6) { $literal_totalcito_M12 = $literal_formato_6;  }
  if ($totalcito_M12 >= $comparativo_formato_7) { $literal_totalcito_M12 = $literal_formato_7;  }
  if ($totalcito_M12 >= $comparativo_formato_8) { $literal_totalcito_M12 = $literal_formato_8;  }
  if ($totalcito_M12 >= $comparativo_formato_9) { $literal_totalcito_M12 = $literal_formato_9;  }
  if ($totalcito_M12 >= $comparativo_formato_10) { $literal_totalcito_M12 = $literal_formato_10;  }
  if ($totalcito_M12 >= $comparativo_formato_11) { $literal_totalcito_M12 = $literal_formato_11;  }
  if ($totalcito_M12 >= $comparativo_formato_12) { $literal_totalcito_M12 = $literal_formato_12;  } 
   } /* cierre literal */


  ?>
                         

                    












                   
                        
<?php

$tot123_M12 = $definitiva_materia12_aula_promedio/$definitiva_materia12_aula_divisor;

if ($definitiva_materia12_aula_divisor == '0') {
    $tot123_M1_form = '';
}

else {
$tot123_M12_form_redondeado1 = number_format($tot123_M12, 1, '.', '');
    $tot123_M12_form = number_format($tot123_M12_form_redondeado1);

$promedio_total123 = $promedio_total123 +  $tot123_M12_form;     // acumula el promedio total
$promedio_total123_divisor = $promedio_total123_divisor + 1 ;


if ($row_datos_controlmat['l_suma'] != 1)
 {  $promedio_total123 =  $promedio_total123 - $tot123_M12_form; $promedio_total123_divisor =  $promedio_total123_divisor - 1;  }


}



if ($row_datos_controlmat['l_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['l_convertir'] == 2 ) {  /* alfabetico */
   if ($tot123_M12_form >= $comparativo_formato_1) { $alfabetico_tot123_M12_form = $alfabetico_formato_1;  }
   if ($tot123_M12_form >= $comparativo_formato_2) { $alfabetico_tot123_M12_form = $alfabetico_formato_2;  }
   if ($tot123_M12_form >= $comparativo_formato_3) { $alfabetico_tot123_M12_form = $alfabetico_formato_3;  }
   if ($tot123_M12_form >= $comparativo_formato_4) { $alfabetico_tot123_M12_form = $alfabetico_formato_4;  }
   if ($tot123_M12_form >= $comparativo_formato_5) { $alfabetico_tot123_M12_form = $alfabetico_formato_5;  }
   if ($tot123_M12_form >= $comparativo_formato_6) { $alfabetico_tot123_M12_form = $alfabetico_formato_6;  }
   if ($tot123_M12_form >= $comparativo_formato_7) { $alfabetico_tot123_M12_form = $alfabetico_formato_7;  }
   if ($tot123_M12_form >= $comparativo_formato_8) { $alfabetico_tot123_M12_form = $alfabetico_formato_8;  }
   if ($tot123_M12_form >= $comparativo_formato_9) { $alfabetico_tot123_M12_form = $alfabetico_formato_9;  }
   if ($tot123_M12_form >= $comparativo_formato_10) { $alfabetico_tot123_M12_form = $alfabetico_formato_10;  }
   if ($tot123_M12_form >= $comparativo_formato_11) { $alfabetico_tot123_M12_form = $alfabetico_formato_11;  }
   if ($tot123_M12_form >= $comparativo_formato_12) { $alfabetico_tot123_M12_form = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['l_convertir'] == 3 ) {  /* literal */
  if ($tot123_M12_form >= $comparativo_formato_1) { $literal_tot123_M12_form = $literal_formato_1;  }
  if ($tot123_M12_form >= $comparativo_formato_2) { $literal_tot123_M12_form = $literal_formato_2;  }
  if ($tot123_M12_form >= $comparativo_formato_3) { $literal_tot123_M12_form = $literal_formato_3;  }
  if ($tot123_M12_form >= $comparativo_formato_4) { $literal_tot123_M12_form = $literal_formato_4;  }
  if ($tot123_M12_form >= $comparativo_formato_5) { $literal_tot123_M12_form = $literal_formato_5;  }
  if ($tot123_M12_form >= $comparativo_formato_6) { $literal_tot123_M12_form = $literal_formato_6;  }
  if ($tot123_M12_form >= $comparativo_formato_7) { $literal_tot123_M12_form = $literal_formato_7;  }
  if ($tot123_M12_form >= $comparativo_formato_8) { $literal_tot123_M12_form = $literal_formato_8;  }
  if ($tot123_M12_form >= $comparativo_formato_9) { $literal_tot123_M12_form = $literal_formato_9;  }
  if ($tot123_M12_form >= $comparativo_formato_10) { $literal_tot123_M12_form = $literal_formato_10;  }
  if ($tot123_M12_form >= $comparativo_formato_11) { $literal_tot123_M12_form = $literal_formato_11;  }
  if ($tot123_M12_form >= $comparativo_formato_12) { $literal_tot123_M12_form = $literal_formato_12;  } 
     }

$definitiva_materia12_aula_promedio = '0';
$definitiva_materia12_aula_divisor = '0';


?>




                   



<?php  
$pruebass_M12_1 = $row_datos_control_notasM12["rev_uno"];
$pruebass_M12_2 = $row_datos_control_notasM12["rev_dos"];
$pruebass_redonl_M12_1 =number_format($pruebass_M12_1);
$pruebass_redonl_M12_2 =number_format($pruebass_M12_2); 
  ?>

<!-- nuevo añadido 1 -->
  
<?php

if ($pruebass_M12_1 != '') {  
    if ($row_datos_controlmat['l_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['l_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redonl_M12_1 >= $comparativo_formato_1) { $alfabetico_pruebass_redonl_M12_1 = $alfabetico_formato_1;  }
       if ($pruebass_redonl_M12_1 >= $comparativo_formato_2) { $alfabetico_pruebass_redonl_M12_1 = $alfabetico_formato_2;  }
       if ($pruebass_redonl_M12_1 >= $comparativo_formato_3) { $alfabetico_pruebass_redonl_M12_1 = $alfabetico_formato_3;  }
       if ($pruebass_redonl_M12_1 >= $comparativo_formato_4) { $alfabetico_pruebass_redonl_M12_1 = $alfabetico_formato_4;  }
       if ($pruebass_redonl_M12_1 >= $comparativo_formato_5) { $alfabetico_pruebass_redonl_M12_1 = $alfabetico_formato_5;  }
       if ($pruebass_redonl_M12_1 >= $comparativo_formato_6) { $alfabetico_pruebass_redonl_M12_1 = $alfabetico_formato_6;  }
       if ($pruebass_redonl_M12_1 >= $comparativo_formato_7) { $alfabetico_pruebass_redonl_M12_1 = $alfabetico_formato_7;  }
       if ($pruebass_redonl_M12_1 >= $comparativo_formato_8) { $alfabetico_pruebass_redonl_M12_1 = $alfabetico_formato_8;  }
       if ($pruebass_redonl_M12_1 >= $comparativo_formato_9) { $alfabetico_pruebass_redonl_M12_1 = $alfabetico_formato_9;  }
       if ($pruebass_redonl_M12_1 >= $comparativo_formato_10) { $alfabetico_pruebass_redonl_M12_1 = $alfabetico_formato_10;  }
       if ($pruebass_redonl_M12_1 >= $comparativo_formato_11) { $alfabetico_pruebass_redonl_M12_1 = $alfabetico_formato_11;  }
       if ($pruebass_redonl_M12_1 >= $comparativo_formato_12) { $alfabetico_pruebass_redonl_M12_1 = $alfabetico_formato_12;  }
       } /* cierre alfabetico */
    if ($row_datos_controlmat['l_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redonl_M12_1 >= $comparativo_formato_1) { $literal_pruebass_redonl_M12_1 = $literal_formato_1;  }
      if ($pruebass_redonl_M12_1 >= $comparativo_formato_2) { $literal_pruebass_redonl_M12_1 = $literal_formato_2;  }
      if ($pruebass_redonl_M12_1 >= $comparativo_formato_3) { $literal_pruebass_redonl_M12_1 = $literal_formato_3;  }
      if ($pruebass_redonl_M12_1 >= $comparativo_formato_4) { $literal_pruebass_redonl_M12_1 = $literal_formato_4;  }
      if ($pruebass_redonl_M12_1 >= $comparativo_formato_5) { $literal_pruebass_redonl_M12_1 = $literal_formato_5;  }
      if ($pruebass_redonl_M12_1 >= $comparativo_formato_6) { $literal_pruebass_redonl_M12_1 = $literal_formato_6;  }
      if ($pruebass_redonl_M12_1 >= $comparativo_formato_7) { $literal_pruebass_redonl_M12_1 = $literal_formato_7;  }
      if ($pruebass_redonl_M12_1 >= $comparativo_formato_8) { $literal_pruebass_redonl_M12_1 = $literal_formato_8;  }
      if ($pruebass_redonl_M12_1 >= $comparativo_formato_9) { $literal_pruebass_redonl_M12_1 = $literal_formato_9;  }
      if ($pruebass_redonl_M12_1 >= $comparativo_formato_10) { $literal_pruebass_redonl_M12_1 = $literal_formato_10;  }
      if ($pruebass_redonl_M12_1 >= $comparativo_formato_11) { $literal_pruebass_redonl_M12_1 = $literal_formato_11;  }
      if ($pruebass_redonl_M12_1 >= $comparativo_formato_12) { $literal_pruebass_redonl_M12_1 = $literal_formato_12;  } 
        }
}
?> 
   
   <?php

if ($pruebass_M12_2 != '') {  
    if ($row_datos_controlmat['l_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['l_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redonl_M12_2 >= $comparativo_formato_1) { $alfabetico_pruebass_redonl_M12_2 = $alfabetico_formato_1;  }
       if ($pruebass_redonl_M12_2 >= $comparativo_formato_2) { $alfabetico_pruebass_redonl_M12_2 = $alfabetico_formato_2;  }
       if ($pruebass_redonl_M12_2 >= $comparativo_formato_3) { $alfabetico_pruebass_redonl_M12_2 = $alfabetico_formato_3;  }
       if ($pruebass_redonl_M12_2 >= $comparativo_formato_4) { $alfabetico_pruebass_redonl_M12_2 = $alfabetico_formato_4;  }
       if ($pruebass_redonl_M12_2 >= $comparativo_formato_5) { $alfabetico_pruebass_redonl_M12_2 = $alfabetico_formato_5;  }
       if ($pruebass_redonl_M12_2 >= $comparativo_formato_6) { $alfabetico_pruebass_redonl_M12_2 = $alfabetico_formato_6;  }
       if ($pruebass_redonl_M12_2 >= $comparativo_formato_7) { $alfabetico_pruebass_redonl_M12_2 = $alfabetico_formato_7;  }
       if ($pruebass_redonl_M12_2 >= $comparativo_formato_8) { $alfabetico_pruebass_redonl_M12_2 = $alfabetico_formato_8;  }
       if ($pruebass_redonl_M12_2 >= $comparativo_formato_9) { $alfabetico_pruebass_redonl_M12_2 = $alfabetico_formato_9;  }
       if ($pruebass_redonl_M12_2 >= $comparativo_formato_10) { $alfabetico_pruebass_redonl_M12_2 = $alfabetico_formato_10;  }
       if ($pruebass_redonl_M12_2 >= $comparativo_formato_11) { $alfabetico_pruebass_redonl_M12_2 = $alfabetico_formato_11;  }
       if ($pruebass_redonl_M12_2 >= $comparativo_formato_12) { $alfabetico_pruebass_redonl_M12_2 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['l_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redonl_M12_2 >= $comparativo_formato_1) { $literal_pruebass_redonl_M12_2 = $literal_formato_1;  }
      if ($pruebass_redonl_M12_2 >= $comparativo_formato_2) { $literal_pruebass_redonl_M12_2 = $literal_formato_2;  }
      if ($pruebass_redonl_M12_2 >= $comparativo_formato_3) { $literal_pruebass_redonl_M12_2 = $literal_formato_3;  }
      if ($pruebass_redonl_M12_2 >= $comparativo_formato_4) { $literal_pruebass_redonl_M12_2 = $literal_formato_4;  }
      if ($pruebass_redonl_M12_2 >= $comparativo_formato_5) { $literal_pruebass_redonl_M12_2 = $literal_formato_5;  }
      if ($pruebass_redonl_M12_2 >= $comparativo_formato_6) { $literal_pruebass_redonl_M12_2 = $literal_formato_6;  }
      if ($pruebass_redonl_M12_2 >= $comparativo_formato_7) { $literal_pruebass_redonl_M12_2 = $literal_formato_7;  }
      if ($pruebass_redonl_M12_2 >= $comparativo_formato_8) { $literal_pruebass_redonl_M12_2 = $literal_formato_8;  }
      if ($pruebass_redonl_M12_2 >= $comparativo_formato_9) { $literal_pruebass_redonl_M12_2 = $literal_formato_9;  }
      if ($pruebass_redonl_M12_2 >= $comparativo_formato_10) { $literal_pruebass_redonl_M12_2 = $literal_formato_10;  }
      if ($pruebass_redonl_M12_2 >= $comparativo_formato_11) { $literal_pruebass_redonl_M12_2 = $literal_formato_11;  }
      if ($pruebass_redonl_M12_2 >= $comparativo_formato_12) { $literal_pruebass_redonl_M12_2 = $literal_formato_12;  } 
         }
}
?> 



 <?php

               $m_ayuda = '';

                if ($row_datos_controlmat['m_suma'] !=1) {
                  $m_ayuda = '#';
               }

               ?>

               <?php 

if ($row_datos_controlmat['m_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['m_convertir'] == 2 ) {  /* alfabetico */
   if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_1;  }
   if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_2;  }
   if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_3;  }
   if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_4;  }
   if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_5;  }
   if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_6;  }
   if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_7;  }
   if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_8;  }
   if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_9;  }
   if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_10;  }
   if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_11;  }
   if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M13_L1xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['m_convertir'] == 3 ) {  /* literal */
  if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_1) { $literam_seven_con_Au_redon_M13_L1xx = $literam_formato_1;  }
  if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_2) { $literam_seven_con_Au_redon_M13_L1xx = $literam_formato_2;  }
  if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_3) { $literam_seven_con_Au_redon_M13_L1xx = $literam_formato_3;  }
  if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_4) { $literam_seven_con_Au_redon_M13_L1xx = $literam_formato_4;  }
  if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_5) { $literam_seven_con_Au_redon_M13_L1xx = $literam_formato_5;  }
  if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_6) { $literam_seven_con_Au_redon_M13_L1xx = $literam_formato_6;  }
  if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_7) { $literam_seven_con_Au_redon_M13_L1xx = $literam_formato_7;  }
  if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_8) { $literam_seven_con_Au_redon_M13_L1xx = $literam_formato_8;  }
  if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_9) { $literam_seven_con_Au_redon_M13_L1xx = $literam_formato_9;  }
  if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_10) { $literam_seven_con_Au_redon_M13_L1xx = $literam_formato_10;  }
  if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_11) { $literam_seven_con_Au_redon_M13_L1xx = $literam_formato_11;  }
  if ($totam_seven_con_Au_redon_M13_L1xx >= $comparativo_formato_12) { $literam_seven_con_Au_redon_M13_L1xx = $literam_formato_12;  } 
 } /* cierre literal */


                    ?>

                        
<?php 

if ($lap1_div_mat13 == '') {
    $lap1_pro_todo_M13_redond = '';
}

else {

    $lap1_pro_todo_M13 = $lap1_tot_mat13/$lap1_div_mat13;

  $lap1_pro_todo_M13_redondeado1 =number_format($lap1_pro_todo_M13, 1, '.', '');

    $lap1_pro_todo_M13_redond =number_format($lap1_pro_todo_M13_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_totam_promedio_Lap_1 = $lap_suma_totam_promedio_Lap_1 + $lap1_pro_todo_M13_redond;


if ($row_datos_controlmat['m_suma'] != 1)
 {  $lap_suma_totam_promedio_Lap_1 =  $lap_suma_totam_promedio_Lap_1 - $lap1_pro_todo_M13_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia13_promedio_aula = $lap1_pro_todo_M13_redond;
    $lapso1_materia13_promedio_aula_divisor = $lapso1_materia13_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia13_aula_promedio =  $definitiva_materia13_aula_promedio + $lap1_pro_todo_M13_redond;
     $definitiva_materia13_aula_divisor = $definitiva_materia13_aula_divisor + 1;


}



if ($row_datos_controlmat['m_convertir'] == 1 ) {  /* numerico */
       
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
   } /* cierre alfabetico */

if ($row_datos_controlmat['m_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_1) { $literam_lap1_pro_todo_M13_redond = $literam_formato_1;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_2) { $literam_lap1_pro_todo_M13_redond = $literam_formato_2;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_3) { $literam_lap1_pro_todo_M13_redond = $literam_formato_3;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_4) { $literam_lap1_pro_todo_M13_redond = $literam_formato_4;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_5) { $literam_lap1_pro_todo_M13_redond = $literam_formato_5;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_6) { $literam_lap1_pro_todo_M13_redond = $literam_formato_6;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_7) { $literam_lap1_pro_todo_M13_redond = $literam_formato_7;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_8) { $literam_lap1_pro_todo_M13_redond = $literam_formato_8;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_9) { $literam_lap1_pro_todo_M13_redond = $literam_formato_9;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_10) { $literam_lap1_pro_todo_M13_redond = $literam_formato_10;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_11) { $literam_lap1_pro_todo_M13_redond = $literam_formato_11;  }
  if ($lap1_pro_todo_M13_redond >= $comparativo_formato_12) { $literam_lap1_pro_todo_M13_redond = $literam_formato_12;  } 
   } /* cierre literal */ ?>




                    <?php 

if ($row_datos_controlmat['m_convertir'] == 1 ) {  /* numerico */
  
} /* cierre numerico */
if ($row_datos_controlmat['m_convertir'] == 2 ) {  /* alfabetico */
   if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M13_L2xx = $alfabetico_formato_1;  }
   if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M13_L2xx = $alfabetico_formato_2;  }
   if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M13_L2xx = $alfabetico_formato_3;  }
   if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M13_L2xx = $alfabetico_formato_4;  }
   if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M13_L2xx = $alfabetico_formato_5;  }
   if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M13_L2xx = $alfabetico_formato_6;  }
   if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M13_L2xx = $alfabetico_formato_7;  }
   if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M13_L2xx = $alfabetico_formato_8;  }
   if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M13_L2xx = $alfabetico_formato_9;  }
   if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M13_L2xx = $alfabetico_formato_10;  }
   if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M13_L2xx = $alfabetico_formato_11;  }
   if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M13_L2xx = $alfabetico_formato_12;  }
   } /* cierre alfabetico */

if ($row_datos_controlmat['m_convertir'] == 3 ) {  /* literal */
  if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_1) { $literam_seven_con_Au_redon_M13_L2xx = $literam_formato_1;  }
  if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_2) { $literam_seven_con_Au_redon_M13_L2xx = $literam_formato_2;  }
  if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_3) { $literam_seven_con_Au_redon_M13_L2xx = $literam_formato_3;  }
  if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_4) { $literam_seven_con_Au_redon_M13_L2xx = $literam_formato_4;  }
  if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_5) { $literam_seven_con_Au_redon_M13_L2xx = $literam_formato_5;  }
  if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_6) { $literam_seven_con_Au_redon_M13_L2xx = $literam_formato_6;  }
  if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_7) { $literam_seven_con_Au_redon_M13_L2xx = $literam_formato_7;  }
  if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_8) { $literam_seven_con_Au_redon_M13_L2xx = $literam_formato_8;  }
  if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_9) { $literam_seven_con_Au_redon_M13_L2xx = $literam_formato_9;  }
  if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_10) { $literam_seven_con_Au_redon_M13_L2xx = $literam_formato_10;  }
  if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_11) { $literam_seven_con_Au_redon_M13_L2xx = $literam_formato_11;  }
  if ($totam_seven_con_Au_redon_M13_L2xx >= $comparativo_formato_12) { $literam_seven_con_Au_redon_M13_L2xx = $literam_formato_12;  } 
   } /* cierre literal */


                    ?>


<?php 

if ($lap2_div_mat13 == '') {
    $lap2_pro_todo_M13_redond = '';
}

else {

    $lap2_pro_todo_M13 = $lap2_tot_mat13/$lap2_div_mat13;

  $lap2_pro_todo_M13_redondeado1 =number_format($lap2_pro_todo_M13, 1, '.', '');

    $lap2_pro_todo_M13_redond =number_format($lap2_pro_todo_M13_redondeado1);


    $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 + 1;   //  lleva el conteo de la division para el promedio del salon del 2do lapso
    $lap_suma_totam_promedio_Lap_2 = $lap_suma_totam_promedio_Lap_2 + $lap2_pro_todo_M13_redond;  // lleva el divisor para el promedio del salon 2do lapso


    if ($row_datos_controlmat['m_suma'] != 1)
 {  $lap_suma_totam_promedio_Lap_2 =  $lap_suma_totam_promedio_Lap_2 - $lap2_pro_todo_M13_redond; $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 - 1;  }


    $lapso1_materia13_promedio_aula = $lap2_pro_todo_M13_redond;
    $lapso1_materia13_promedio_aula_divisor = $lapso1_materia13_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia13_aula_promedio =  $definitiva_materia13_aula_promedio + $lap2_pro_todo_M13_redond;
     $definitiva_materia13_aula_divisor = $definitiva_materia13_aula_divisor + 1;


}



if ($row_datos_controlmat['m_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['m_convertir'] == 2 ) {  /* alfabetico */
   if ($lap2_pro_todo_M13_redond >= $comparativo_formato_1) { $alfabetico_lap2_pro_todo_M13_redond = $alfabetico_formato_1;  }
   if ($lap2_pro_todo_M13_redond >= $comparativo_formato_2) { $alfabetico_lap2_pro_todo_M13_redond = $alfabetico_formato_2;  }
   if ($lap2_pro_todo_M13_redond >= $comparativo_formato_3) { $alfabetico_lap2_pro_todo_M13_redond = $alfabetico_formato_3;  }
   if ($lap2_pro_todo_M13_redond >= $comparativo_formato_4) { $alfabetico_lap2_pro_todo_M13_redond = $alfabetico_formato_4;  }
   if ($lap2_pro_todo_M13_redond >= $comparativo_formato_5) { $alfabetico_lap2_pro_todo_M13_redond = $alfabetico_formato_5;  }
   if ($lap2_pro_todo_M13_redond >= $comparativo_formato_6) { $alfabetico_lap2_pro_todo_M13_redond = $alfabetico_formato_6;  }
   if ($lap2_pro_todo_M13_redond >= $comparativo_formato_7) { $alfabetico_lap2_pro_todo_M13_redond = $alfabetico_formato_7;  }
   if ($lap2_pro_todo_M13_redond >= $comparativo_formato_8) { $alfabetico_lap2_pro_todo_M13_redond = $alfabetico_formato_8;  }
   if ($lap2_pro_todo_M13_redond >= $comparativo_formato_9) { $alfabetico_lap2_pro_todo_M13_redond = $alfabetico_formato_9;  }
   if ($lap2_pro_todo_M13_redond >= $comparativo_formato_10) { $alfabetico_lap2_pro_todo_M13_redond = $alfabetico_formato_10;  }
   if ($lap2_pro_todo_M13_redond >= $comparativo_formato_11) { $alfabetico_lap2_pro_todo_M13_redond = $alfabetico_formato_11;  }
   if ($lap2_pro_todo_M13_redond >= $comparativo_formato_12) { $alfabetico_lap2_pro_todo_M13_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['m_convertir'] == 3 ) {  /* literal */
  if ($lap2_pro_todo_M13_redond >= $comparativo_formato_1) { $literam_lap2_pro_todo_M13_redond = $literam_formato_1;  }
  if ($lap2_pro_todo_M13_redond >= $comparativo_formato_2) { $literam_lap2_pro_todo_M13_redond = $literam_formato_2;  }
  if ($lap2_pro_todo_M13_redond >= $comparativo_formato_3) { $literam_lap2_pro_todo_M13_redond = $literam_formato_3;  }
  if ($lap2_pro_todo_M13_redond >= $comparativo_formato_4) { $literam_lap2_pro_todo_M13_redond = $literam_formato_4;  }
  if ($lap2_pro_todo_M13_redond >= $comparativo_formato_5) { $literam_lap2_pro_todo_M13_redond = $literam_formato_5;  }
  if ($lap2_pro_todo_M13_redond >= $comparativo_formato_6) { $literam_lap2_pro_todo_M13_redond = $literam_formato_6;  }
  if ($lap2_pro_todo_M13_redond >= $comparativo_formato_7) { $literam_lap2_pro_todo_M13_redond = $literam_formato_7;  }
  if ($lap2_pro_todo_M13_redond >= $comparativo_formato_8) { $literam_lap2_pro_todo_M13_redond = $literam_formato_8;  }
  if ($lap2_pro_todo_M13_redond >= $comparativo_formato_9) { $literam_lap2_pro_todo_M13_redond = $literam_formato_9;  }
  if ($lap2_pro_todo_M13_redond >= $comparativo_formato_10) { $literam_lap2_pro_todo_M13_redond = $literam_formato_10;  }
  if ($lap2_pro_todo_M13_redond >= $comparativo_formato_11) { $literam_lap2_pro_todo_M13_redond = $literam_formato_11;  }
  if ($lap2_pro_todo_M13_redond >= $comparativo_formato_12) { $literam_lap2_pro_todo_M13_redond = $literam_formato_12;  } 
   } /* cierre literal */   ?>








                   <?php 

if ($row_datos_controlmat['m_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['m_convertir'] == 2 ) {  /* alfabetico */
   if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M13_L3xx = $alfabetico_formato_1;  }
   if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M13_L3xx = $alfabetico_formato_2;  }
   if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M13_L3xx = $alfabetico_formato_3;  }
   if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M13_L3xx = $alfabetico_formato_4;  }
   if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M13_L3xx = $alfabetico_formato_5;  }
   if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M13_L3xx = $alfabetico_formato_6;  }
   if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M13_L3xx = $alfabetico_formato_7;  }
   if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M13_L3xx = $alfabetico_formato_8;  }
   if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M13_L3xx = $alfabetico_formato_9;  }
   if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M13_L3xx = $alfabetico_formato_10;  }
   if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M13_L3xx = $alfabetico_formato_11;  }
   if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M13_L3xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['m_convertir'] == 3 ) {  /* literal */
  if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_1) { $literam_seven_con_Au_redon_M13_L3xx = $literam_formato_1;  }
  if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_2) { $literam_seven_con_Au_redon_M13_L3xx = $literam_formato_2;  }
  if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_3) { $literam_seven_con_Au_redon_M13_L3xx = $literam_formato_3;  }
  if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_4) { $literam_seven_con_Au_redon_M13_L3xx = $literam_formato_4;  }
  if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_5) { $literam_seven_con_Au_redon_M13_L3xx = $literam_formato_5;  }
  if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_6) { $literam_seven_con_Au_redon_M13_L3xx = $literam_formato_6;  }
  if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_7) { $literam_seven_con_Au_redon_M13_L3xx = $literam_formato_7;  }
  if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_8) { $literam_seven_con_Au_redon_M13_L3xx = $literam_formato_8;  }
  if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_9) { $literam_seven_con_Au_redon_M13_L3xx = $literam_formato_9;  }
  if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_10) { $literam_seven_con_Au_redon_M13_L3xx = $literam_formato_10;  }
  if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_11) { $literam_seven_con_Au_redon_M13_L3xx = $literam_formato_11;  }
  if ($totam_seven_con_Au_redon_M13_L3xx >= $comparativo_formato_12) { $literam_seven_con_Au_redon_M13_L3xx = $literam_formato_12;  } 
   } /* cierre literal */


                    ?>
                        

<?php 
if ($lap3_div_mat13 == '') {
    $lap3_pro_todo_M13_redond = '';
}
else {
    $lap3_pro_todo_M13 = $lap3_tot_mat13/$lap3_div_mat13;
 $lap3_pro_todo_M13_redondeado1 =number_format($lap3_pro_todo_M13, 1, '.', '');
    $lap3_pro_todo_M13_redond =number_format($lap3_pro_todo_M13_redondeado1);


    $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 + 1;   //  lleva el conteo de la division para el promedio del salon del 3er lapso
    $lap_suma_totam_promedio_Lap_3 = $lap_suma_totam_promedio_Lap_3 + $lap3_pro_todo_M13_redond;  // lleva el divisor para el promedio del salon 2do lapso


if ($row_datos_controlmat['m_suma'] != 1)
 {  $lap_suma_totam_promedio_Lap_3 =  $lap_suma_totam_promedio_Lap_3 - $lap3_pro_todo_M13_redond; $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 - 1;  }



    $lapso3_materia13_promedio_aula = $lap3_pro_todo_M13_redond;
    $lapso3_materia13_promedio_aula_divisor = $lapso3_materia13_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia13_aula_promedio =  $definitiva_materia13_aula_promedio + $lap3_pro_todo_M13_redond;
     $definitiva_materia13_aula_divisor = $definitiva_materia13_aula_divisor + 1;
}

if ($row_datos_controlmat['m_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['m_convertir'] == 2 ) {  /* alfabetico */
   if ($lap3_pro_todo_M13_redond >= $comparativo_formato_1) { $alfabetico_lap3_pro_todo_M13_redond = $alfabetico_formato_1;  }
   if ($lap3_pro_todo_M13_redond >= $comparativo_formato_2) { $alfabetico_lap3_pro_todo_M13_redond = $alfabetico_formato_2;  }
   if ($lap3_pro_todo_M13_redond >= $comparativo_formato_3) { $alfabetico_lap3_pro_todo_M13_redond = $alfabetico_formato_3;  }
   if ($lap3_pro_todo_M13_redond >= $comparativo_formato_4) { $alfabetico_lap3_pro_todo_M13_redond = $alfabetico_formato_4;  }
   if ($lap3_pro_todo_M13_redond >= $comparativo_formato_5) { $alfabetico_lap3_pro_todo_M13_redond = $alfabetico_formato_5;  }
   if ($lap3_pro_todo_M13_redond >= $comparativo_formato_6) { $alfabetico_lap3_pro_todo_M13_redond = $alfabetico_formato_6;  }
   if ($lap3_pro_todo_M13_redond >= $comparativo_formato_7) { $alfabetico_lap3_pro_todo_M13_redond = $alfabetico_formato_7;  }
   if ($lap3_pro_todo_M13_redond >= $comparativo_formato_8) { $alfabetico_lap3_pro_todo_M13_redond = $alfabetico_formato_8;  }
   if ($lap3_pro_todo_M13_redond >= $comparativo_formato_9) { $alfabetico_lap3_pro_todo_M13_redond = $alfabetico_formato_9;  }
   if ($lap3_pro_todo_M13_redond >= $comparativo_formato_10) { $alfabetico_lap3_pro_todo_M13_redond = $alfabetico_formato_10;  }
   if ($lap3_pro_todo_M13_redond >= $comparativo_formato_11) { $alfabetico_lap3_pro_todo_M13_redond = $alfabetico_formato_11;  }
   if ($lap3_pro_todo_M13_redond >= $comparativo_formato_12) { $alfabetico_lap3_pro_todo_M13_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['m_convertir'] == 3 ) {  /* literal */
  if ($lap3_pro_todo_M13_redond >= $comparativo_formato_1) { $literam_lap3_pro_todo_M13_redond = $literam_formato_1;  }
  if ($lap3_pro_todo_M13_redond >= $comparativo_formato_2) { $literam_lap3_pro_todo_M13_redond = $literam_formato_2;  }
  if ($lap3_pro_todo_M13_redond >= $comparativo_formato_3) { $literam_lap3_pro_todo_M13_redond = $literam_formato_3;  }
  if ($lap3_pro_todo_M13_redond >= $comparativo_formato_4) { $literam_lap3_pro_todo_M13_redond = $literam_formato_4;  }
  if ($lap3_pro_todo_M13_redond >= $comparativo_formato_5) { $literam_lap3_pro_todo_M13_redond = $literam_formato_5;  }
  if ($lap3_pro_todo_M13_redond >= $comparativo_formato_6) { $literam_lap3_pro_todo_M13_redond = $literam_formato_6;  }
  if ($lap3_pro_todo_M13_redond >= $comparativo_formato_7) { $literam_lap3_pro_todo_M13_redond = $literam_formato_7;  }
  if ($lap3_pro_todo_M13_redond >= $comparativo_formato_8) { $literam_lap3_pro_todo_M13_redond = $literam_formato_8;  }
  if ($lap3_pro_todo_M13_redond >= $comparativo_formato_9) { $literam_lap3_pro_todo_M13_redond = $literam_formato_9;  }
  if ($lap3_pro_todo_M13_redond >= $comparativo_formato_10) { $literam_lap3_pro_todo_M13_redond = $literam_formato_10;  }
  if ($lap3_pro_todo_M13_redond >= $comparativo_formato_11) { $literam_lap3_pro_todo_M13_redond = $literam_formato_11;  }
  if ($lap3_pro_todo_M13_redond >= $comparativo_formato_12) { $literam_lap3_pro_todo_M13_redond = $literam_formato_12;  } 
  } /* cierre literal */ ?> 





                    <?php

if ($lap1_pro_todo_M13_redond== '' && $lap2_pro_todo_M13_redond== ''  && $lap3_pro_todo_M13_redond== '') {
    $totalcito_M13 = '';
    $tot_M13 = '';

}

else {
    $totalcito_M13 = $totam_seven_con_Au_redon_M13_aproxxx + $row_datos_controm_notasM13["nt_AuF"];
}


                    if ($row_datos_controlmat['m_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['m_convertir'] == 2 ) {  /* alfabetico */
   if ($totalcito_M13 >= $comparativo_formato_1) { $alfabetico_totalcito_M13 = $alfabetico_formato_1;  }
   if ($totalcito_M13 >= $comparativo_formato_2) { $alfabetico_totalcito_M13 = $alfabetico_formato_2;  }
   if ($totalcito_M13 >= $comparativo_formato_3) { $alfabetico_totalcito_M13 = $alfabetico_formato_3;  }
   if ($totalcito_M13 >= $comparativo_formato_4) { $alfabetico_totalcito_M13 = $alfabetico_formato_4;  }
   if ($totalcito_M13 >= $comparativo_formato_5) { $alfabetico_totalcito_M13 = $alfabetico_formato_5;  }
   if ($totalcito_M13 >= $comparativo_formato_6) { $alfabetico_totalcito_M13 = $alfabetico_formato_6;  }
   if ($totalcito_M13 >= $comparativo_formato_7) { $alfabetico_totalcito_M13 = $alfabetico_formato_7;  }
   if ($totalcito_M13 >= $comparativo_formato_8) { $alfabetico_totalcito_M13 = $alfabetico_formato_8;  }
   if ($totalcito_M13 >= $comparativo_formato_9) { $alfabetico_totalcito_M13 = $alfabetico_formato_9;  }
   if ($totalcito_M13 >= $comparativo_formato_10) { $alfabetico_totalcito_M13 = $alfabetico_formato_10;  }
   if ($totalcito_M13 >= $comparativo_formato_11) { $alfabetico_totalcito_M13 = $alfabetico_formato_11;  }
   if ($totalcito_M13 >= $comparativo_formato_12) { $alfabetico_totalcito_M13 = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['m_convertir'] == 3 ) {  /* literal */
  if ($totalcito_M13 >= $comparativo_formato_1) { $literam_totalcito_M13 = $literam_formato_1;  }
  if ($totalcito_M13 >= $comparativo_formato_2) { $literam_totalcito_M13 = $literam_formato_2;  }
  if ($totalcito_M13 >= $comparativo_formato_3) { $literam_totalcito_M13 = $literam_formato_3;  }
  if ($totalcito_M13 >= $comparativo_formato_4) { $literam_totalcito_M13 = $literam_formato_4;  }
  if ($totalcito_M13 >= $comparativo_formato_5) { $literam_totalcito_M13 = $literam_formato_5;  }
  if ($totalcito_M13 >= $comparativo_formato_6) { $literam_totalcito_M13 = $literam_formato_6;  }
  if ($totalcito_M13 >= $comparativo_formato_7) { $literam_totalcito_M13 = $literam_formato_7;  }
  if ($totalcito_M13 >= $comparativo_formato_8) { $literam_totalcito_M13 = $literam_formato_8;  }
  if ($totalcito_M13 >= $comparativo_formato_9) { $literam_totalcito_M13 = $literam_formato_9;  }
  if ($totalcito_M13 >= $comparativo_formato_10) { $literam_totalcito_M13 = $literam_formato_10;  }
  if ($totalcito_M13 >= $comparativo_formato_11) { $literam_totalcito_M13 = $literam_formato_11;  }
  if ($totalcito_M13 >= $comparativo_formato_12) { $literam_totalcito_M13 = $literam_formato_12;  } 
   } /* cierre literal */


  ?>
                         

                    












                   
                        
<?php

$tot123_M13 = $definitiva_materia13_aula_promedio/$definitiva_materia13_aula_divisor;

if ($definitiva_materia13_aula_divisor == '0') {
    $tot123_M1_form = '';
}

else {
$tot123_M13_form_redondeado1 = number_format($tot123_M13, 1, '.', '');
    $tot123_M13_form = number_format($tot123_M13_form_redondeado1);

$promedio_total123 = $promedio_total123 +  $tot123_M13_form;     // acumula el promedio total
$promedio_total123_divisor = $promedio_total123_divisor + 1 ;


if ($row_datos_controlmat['m_suma'] != 1)
 {  $promedio_total123 =  $promedio_total123 - $tot123_M13_form; $promedio_total123_divisor =  $promedio_total123_divisor - 1;  }


}



if ($row_datos_controlmat['m_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['m_convertir'] == 2 ) {  /* alfabetico */
   if ($tot123_M13_form >= $comparativo_formato_1) { $alfabetico_tot123_M13_form = $alfabetico_formato_1;  }
   if ($tot123_M13_form >= $comparativo_formato_2) { $alfabetico_tot123_M13_form = $alfabetico_formato_2;  }
   if ($tot123_M13_form >= $comparativo_formato_3) { $alfabetico_tot123_M13_form = $alfabetico_formato_3;  }
   if ($tot123_M13_form >= $comparativo_formato_4) { $alfabetico_tot123_M13_form = $alfabetico_formato_4;  }
   if ($tot123_M13_form >= $comparativo_formato_5) { $alfabetico_tot123_M13_form = $alfabetico_formato_5;  }
   if ($tot123_M13_form >= $comparativo_formato_6) { $alfabetico_tot123_M13_form = $alfabetico_formato_6;  }
   if ($tot123_M13_form >= $comparativo_formato_7) { $alfabetico_tot123_M13_form = $alfabetico_formato_7;  }
   if ($tot123_M13_form >= $comparativo_formato_8) { $alfabetico_tot123_M13_form = $alfabetico_formato_8;  }
   if ($tot123_M13_form >= $comparativo_formato_9) { $alfabetico_tot123_M13_form = $alfabetico_formato_9;  }
   if ($tot123_M13_form >= $comparativo_formato_10) { $alfabetico_tot123_M13_form = $alfabetico_formato_10;  }
   if ($tot123_M13_form >= $comparativo_formato_11) { $alfabetico_tot123_M13_form = $alfabetico_formato_11;  }
   if ($tot123_M13_form >= $comparativo_formato_12) { $alfabetico_tot123_M13_form = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['m_convertir'] == 3 ) {  /* literal */
  if ($tot123_M13_form >= $comparativo_formato_1) { $literam_tot123_M13_form = $literam_formato_1;  }
  if ($tot123_M13_form >= $comparativo_formato_2) { $literam_tot123_M13_form = $literam_formato_2;  }
  if ($tot123_M13_form >= $comparativo_formato_3) { $literam_tot123_M13_form = $literam_formato_3;  }
  if ($tot123_M13_form >= $comparativo_formato_4) { $literam_tot123_M13_form = $literam_formato_4;  }
  if ($tot123_M13_form >= $comparativo_formato_5) { $literam_tot123_M13_form = $literam_formato_5;  }
  if ($tot123_M13_form >= $comparativo_formato_6) { $literam_tot123_M13_form = $literam_formato_6;  }
  if ($tot123_M13_form >= $comparativo_formato_7) { $literam_tot123_M13_form = $literam_formato_7;  }
  if ($tot123_M13_form >= $comparativo_formato_8) { $literam_tot123_M13_form = $literam_formato_8;  }
  if ($tot123_M13_form >= $comparativo_formato_9) { $literam_tot123_M13_form = $literam_formato_9;  }
  if ($tot123_M13_form >= $comparativo_formato_10) { $literam_tot123_M13_form = $literam_formato_10;  }
  if ($tot123_M13_form >= $comparativo_formato_11) { $literam_tot123_M13_form = $literam_formato_11;  }
  if ($tot123_M13_form >= $comparativo_formato_12) { $literam_tot123_M13_form = $literam_formato_12;  } 
     }

$definitiva_materia13_aula_promedio = '0';
$definitiva_materia13_aula_divisor = '0';


?>




                   



<?php  
$pruebass_M13_1 = $row_datos_controm_notasM13["rev_uno"];
$pruebass_M13_2 = $row_datos_controm_notasM13["rev_dos"];
$pruebass_redonm_M13_1 =number_format($pruebass_M13_1);
$pruebass_redonm_M13_2 =number_format($pruebass_M13_2); 
  ?>

<!-- nuevo añadido 1 -->
  
<?php

if ($pruebass_M13_1 != '') {  
    if ($row_datos_controlmat['m_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['m_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redonm_M13_1 >= $comparativo_formato_1) { $alfabetico_pruebass_redonm_M13_1 = $alfabetico_formato_1;  }
       if ($pruebass_redonm_M13_1 >= $comparativo_formato_2) { $alfabetico_pruebass_redonm_M13_1 = $alfabetico_formato_2;  }
       if ($pruebass_redonm_M13_1 >= $comparativo_formato_3) { $alfabetico_pruebass_redonm_M13_1 = $alfabetico_formato_3;  }
       if ($pruebass_redonm_M13_1 >= $comparativo_formato_4) { $alfabetico_pruebass_redonm_M13_1 = $alfabetico_formato_4;  }
       if ($pruebass_redonm_M13_1 >= $comparativo_formato_5) { $alfabetico_pruebass_redonm_M13_1 = $alfabetico_formato_5;  }
       if ($pruebass_redonm_M13_1 >= $comparativo_formato_6) { $alfabetico_pruebass_redonm_M13_1 = $alfabetico_formato_6;  }
       if ($pruebass_redonm_M13_1 >= $comparativo_formato_7) { $alfabetico_pruebass_redonm_M13_1 = $alfabetico_formato_7;  }
       if ($pruebass_redonm_M13_1 >= $comparativo_formato_8) { $alfabetico_pruebass_redonm_M13_1 = $alfabetico_formato_8;  }
       if ($pruebass_redonm_M13_1 >= $comparativo_formato_9) { $alfabetico_pruebass_redonm_M13_1 = $alfabetico_formato_9;  }
       if ($pruebass_redonm_M13_1 >= $comparativo_formato_10) { $alfabetico_pruebass_redonm_M13_1 = $alfabetico_formato_10;  }
       if ($pruebass_redonm_M13_1 >= $comparativo_formato_11) { $alfabetico_pruebass_redonm_M13_1 = $alfabetico_formato_11;  }
       if ($pruebass_redonm_M13_1 >= $comparativo_formato_12) { $alfabetico_pruebass_redonm_M13_1 = $alfabetico_formato_12;  }
       } /* cierre alfabetico */
    if ($row_datos_controlmat['m_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redonm_M13_1 >= $comparativo_formato_1) { $literam_pruebass_redonm_M13_1 = $literam_formato_1;  }
      if ($pruebass_redonm_M13_1 >= $comparativo_formato_2) { $literam_pruebass_redonm_M13_1 = $literam_formato_2;  }
      if ($pruebass_redonm_M13_1 >= $comparativo_formato_3) { $literam_pruebass_redonm_M13_1 = $literam_formato_3;  }
      if ($pruebass_redonm_M13_1 >= $comparativo_formato_4) { $literam_pruebass_redonm_M13_1 = $literam_formato_4;  }
      if ($pruebass_redonm_M13_1 >= $comparativo_formato_5) { $literam_pruebass_redonm_M13_1 = $literam_formato_5;  }
      if ($pruebass_redonm_M13_1 >= $comparativo_formato_6) { $literam_pruebass_redonm_M13_1 = $literam_formato_6;  }
      if ($pruebass_redonm_M13_1 >= $comparativo_formato_7) { $literam_pruebass_redonm_M13_1 = $literam_formato_7;  }
      if ($pruebass_redonm_M13_1 >= $comparativo_formato_8) { $literam_pruebass_redonm_M13_1 = $literam_formato_8;  }
      if ($pruebass_redonm_M13_1 >= $comparativo_formato_9) { $literam_pruebass_redonm_M13_1 = $literam_formato_9;  }
      if ($pruebass_redonm_M13_1 >= $comparativo_formato_10) { $literam_pruebass_redonm_M13_1 = $literam_formato_10;  }
      if ($pruebass_redonm_M13_1 >= $comparativo_formato_11) { $literam_pruebass_redonm_M13_1 = $literam_formato_11;  }
      if ($pruebass_redonm_M13_1 >= $comparativo_formato_12) { $literam_pruebass_redonm_M13_1 = $literam_formato_12;  } 
        }
}
?> 
   
   <?php

if ($pruebass_M13_2 != '') {  
    if ($row_datos_controlmat['m_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['m_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redonm_M13_2 >= $comparativo_formato_1) { $alfabetico_pruebass_redonm_M13_2 = $alfabetico_formato_1;  }
       if ($pruebass_redonm_M13_2 >= $comparativo_formato_2) { $alfabetico_pruebass_redonm_M13_2 = $alfabetico_formato_2;  }
       if ($pruebass_redonm_M13_2 >= $comparativo_formato_3) { $alfabetico_pruebass_redonm_M13_2 = $alfabetico_formato_3;  }
       if ($pruebass_redonm_M13_2 >= $comparativo_formato_4) { $alfabetico_pruebass_redonm_M13_2 = $alfabetico_formato_4;  }
       if ($pruebass_redonm_M13_2 >= $comparativo_formato_5) { $alfabetico_pruebass_redonm_M13_2 = $alfabetico_formato_5;  }
       if ($pruebass_redonm_M13_2 >= $comparativo_formato_6) { $alfabetico_pruebass_redonm_M13_2 = $alfabetico_formato_6;  }
       if ($pruebass_redonm_M13_2 >= $comparativo_formato_7) { $alfabetico_pruebass_redonm_M13_2 = $alfabetico_formato_7;  }
       if ($pruebass_redonm_M13_2 >= $comparativo_formato_8) { $alfabetico_pruebass_redonm_M13_2 = $alfabetico_formato_8;  }
       if ($pruebass_redonm_M13_2 >= $comparativo_formato_9) { $alfabetico_pruebass_redonm_M13_2 = $alfabetico_formato_9;  }
       if ($pruebass_redonm_M13_2 >= $comparativo_formato_10) { $alfabetico_pruebass_redonm_M13_2 = $alfabetico_formato_10;  }
       if ($pruebass_redonm_M13_2 >= $comparativo_formato_11) { $alfabetico_pruebass_redonm_M13_2 = $alfabetico_formato_11;  }
       if ($pruebass_redonm_M13_2 >= $comparativo_formato_12) { $alfabetico_pruebass_redonm_M13_2 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['m_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redonm_M13_2 >= $comparativo_formato_1) { $literam_pruebass_redonm_M13_2 = $literam_formato_1;  }
      if ($pruebass_redonm_M13_2 >= $comparativo_formato_2) { $literam_pruebass_redonm_M13_2 = $literam_formato_2;  }
      if ($pruebass_redonm_M13_2 >= $comparativo_formato_3) { $literam_pruebass_redonm_M13_2 = $literam_formato_3;  }
      if ($pruebass_redonm_M13_2 >= $comparativo_formato_4) { $literam_pruebass_redonm_M13_2 = $literam_formato_4;  }
      if ($pruebass_redonm_M13_2 >= $comparativo_formato_5) { $literam_pruebass_redonm_M13_2 = $literam_formato_5;  }
      if ($pruebass_redonm_M13_2 >= $comparativo_formato_6) { $literam_pruebass_redonm_M13_2 = $literam_formato_6;  }
      if ($pruebass_redonm_M13_2 >= $comparativo_formato_7) { $literam_pruebass_redonm_M13_2 = $literam_formato_7;  }
      if ($pruebass_redonm_M13_2 >= $comparativo_formato_8) { $literam_pruebass_redonm_M13_2 = $literam_formato_8;  }
      if ($pruebass_redonm_M13_2 >= $comparativo_formato_9) { $literam_pruebass_redonm_M13_2 = $literam_formato_9;  }
      if ($pruebass_redonm_M13_2 >= $comparativo_formato_10) { $literam_pruebass_redonm_M13_2 = $literam_formato_10;  }
      if ($pruebass_redonm_M13_2 >= $comparativo_formato_11) { $literam_pruebass_redonm_M13_2 = $literam_formato_11;  }
      if ($pruebass_redonm_M13_2 >= $comparativo_formato_12) { $literam_pruebass_redonm_M13_2 = $literam_formato_12;  } 
         }
}
?> 




 <?php

               $n_ayuda = '';

                if ($row_datos_controlmat['n_suma'] !=1) {
                  $n_ayuda = '#';
               }

               ?>

               <?php 

if ($row_datos_controlmat['n_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['n_convertir'] == 2 ) {  /* alfabetico */
   if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_1;  }
   if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_2;  }
   if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_3;  }
   if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_4;  }
   if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_5;  }
   if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_6;  }
   if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_7;  }
   if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_8;  }
   if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_9;  }
   if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_10;  }
   if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_11;  }
   if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M14_L1xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['n_convertir'] == 3 ) {  /* literal */
  if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_1) { $literan_seven_con_Au_redon_M14_L1xx = $literan_formato_1;  }
  if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_2) { $literan_seven_con_Au_redon_M14_L1xx = $literan_formato_2;  }
  if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_3) { $literan_seven_con_Au_redon_M14_L1xx = $literan_formato_3;  }
  if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_4) { $literan_seven_con_Au_redon_M14_L1xx = $literan_formato_4;  }
  if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_5) { $literan_seven_con_Au_redon_M14_L1xx = $literan_formato_5;  }
  if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_6) { $literan_seven_con_Au_redon_M14_L1xx = $literan_formato_6;  }
  if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_7) { $literan_seven_con_Au_redon_M14_L1xx = $literan_formato_7;  }
  if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_8) { $literan_seven_con_Au_redon_M14_L1xx = $literan_formato_8;  }
  if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_9) { $literan_seven_con_Au_redon_M14_L1xx = $literan_formato_9;  }
  if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_10) { $literan_seven_con_Au_redon_M14_L1xx = $literan_formato_10;  }
  if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_11) { $literan_seven_con_Au_redon_M14_L1xx = $literan_formato_11;  }
  if ($totan_seven_con_Au_redon_M14_L1xx >= $comparativo_formato_12) { $literan_seven_con_Au_redon_M14_L1xx = $literan_formato_12;  } 
 } /* cierre literal */


                    ?>

                        
<?php 

if ($lap1_div_mat14 == '') {
    $lap1_pro_todo_M14_redond = '';
}

else {

    $lap1_pro_todo_M14 = $lap1_tot_mat14/$lap1_div_mat14;

  $lap1_pro_todo_M14_redondeado1 =number_format($lap1_pro_todo_M14, 1, '.', '');

    $lap1_pro_todo_M14_redond =number_format($lap1_pro_todo_M14_redondeado1);


    $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 + 1;
    $lap_suma_totan_promedio_Lap_1 = $lap_suma_totan_promedio_Lap_1 + $lap1_pro_todo_M14_redond;


if ($row_datos_controlmat['n_suma'] != 1)
 {  $lap_suma_totan_promedio_Lap_1 =  $lap_suma_totan_promedio_Lap_1 - $lap1_pro_todo_M14_redond; $lap_divisor_promedio_Lap_1 =  $lap_divisor_promedio_Lap_1 - 1;  }


    $lapso1_materia14_promedio_aula = $lap1_pro_todo_M14_redond;
    $lapso1_materia14_promedio_aula_divisor = $lapso1_materia14_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia14_aula_promedio =  $definitiva_materia14_aula_promedio + $lap1_pro_todo_M14_redond;
     $definitiva_materia14_aula_divisor = $definitiva_materia14_aula_divisor + 1;


}



if ($row_datos_controlmat['n_convertir'] == 1 ) {  /* numerico */
       
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
   } /* cierre alfabetico */

if ($row_datos_controlmat['n_convertir'] == 3 ) {  /* literal */
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_1) { $literan_lap1_pro_todo_M14_redond = $literan_formato_1;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_2) { $literan_lap1_pro_todo_M14_redond = $literan_formato_2;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_3) { $literan_lap1_pro_todo_M14_redond = $literan_formato_3;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_4) { $literan_lap1_pro_todo_M14_redond = $literan_formato_4;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_5) { $literan_lap1_pro_todo_M14_redond = $literan_formato_5;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_6) { $literan_lap1_pro_todo_M14_redond = $literan_formato_6;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_7) { $literan_lap1_pro_todo_M14_redond = $literan_formato_7;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_8) { $literan_lap1_pro_todo_M14_redond = $literan_formato_8;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_9) { $literan_lap1_pro_todo_M14_redond = $literan_formato_9;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_10) { $literan_lap1_pro_todo_M14_redond = $literan_formato_10;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_11) { $literan_lap1_pro_todo_M14_redond = $literan_formato_11;  }
  if ($lap1_pro_todo_M14_redond >= $comparativo_formato_12) { $literan_lap1_pro_todo_M14_redond = $literan_formato_12;  } 
   } /* cierre literal */ ?>




                    <?php 

if ($row_datos_controlmat['n_convertir'] == 1 ) {  /* numerico */
  
} /* cierre numerico */
if ($row_datos_controlmat['n_convertir'] == 2 ) {  /* alfabetico */
   if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M14_L2xx = $alfabetico_formato_1;  }
   if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M14_L2xx = $alfabetico_formato_2;  }
   if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M14_L2xx = $alfabetico_formato_3;  }
   if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M14_L2xx = $alfabetico_formato_4;  }
   if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M14_L2xx = $alfabetico_formato_5;  }
   if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M14_L2xx = $alfabetico_formato_6;  }
   if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M14_L2xx = $alfabetico_formato_7;  }
   if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M14_L2xx = $alfabetico_formato_8;  }
   if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M14_L2xx = $alfabetico_formato_9;  }
   if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M14_L2xx = $alfabetico_formato_10;  }
   if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M14_L2xx = $alfabetico_formato_11;  }
   if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M14_L2xx = $alfabetico_formato_12;  }
   } /* cierre alfabetico */

if ($row_datos_controlmat['n_convertir'] == 3 ) {  /* literal */
  if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_1) { $literan_seven_con_Au_redon_M14_L2xx = $literan_formato_1;  }
  if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_2) { $literan_seven_con_Au_redon_M14_L2xx = $literan_formato_2;  }
  if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_3) { $literan_seven_con_Au_redon_M14_L2xx = $literan_formato_3;  }
  if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_4) { $literan_seven_con_Au_redon_M14_L2xx = $literan_formato_4;  }
  if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_5) { $literan_seven_con_Au_redon_M14_L2xx = $literan_formato_5;  }
  if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_6) { $literan_seven_con_Au_redon_M14_L2xx = $literan_formato_6;  }
  if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_7) { $literan_seven_con_Au_redon_M14_L2xx = $literan_formato_7;  }
  if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_8) { $literan_seven_con_Au_redon_M14_L2xx = $literan_formato_8;  }
  if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_9) { $literan_seven_con_Au_redon_M14_L2xx = $literan_formato_9;  }
  if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_10) { $literan_seven_con_Au_redon_M14_L2xx = $literan_formato_10;  }
  if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_11) { $literan_seven_con_Au_redon_M14_L2xx = $literan_formato_11;  }
  if ($totan_seven_con_Au_redon_M14_L2xx >= $comparativo_formato_12) { $literan_seven_con_Au_redon_M14_L2xx = $literan_formato_12;  } 
   } /* cierre literal */


                    ?>


<?php 

if ($lap2_div_mat14 == '') {
    $lap2_pro_todo_M14_redond = '';
}

else {

    $lap2_pro_todo_M14 = $lap2_tot_mat14/$lap2_div_mat14;

  $lap2_pro_todo_M14_redondeado1 =number_format($lap2_pro_todo_M14, 1, '.', '');

    $lap2_pro_todo_M14_redond =number_format($lap2_pro_todo_M14_redondeado1);


    $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 + 1;   //  lleva el conteo de la division para el promedio del salon del 2do lapso
    $lap_suma_totan_promedio_Lap_2 = $lap_suma_totan_promedio_Lap_2 + $lap2_pro_todo_M14_redond;  // lleva el divisor para el promedio del salon 2do lapso


    if ($row_datos_controlmat['n_suma'] != 1)
 {  $lap_suma_totan_promedio_Lap_2 =  $lap_suma_totan_promedio_Lap_2 - $lap2_pro_todo_M14_redond; $lap_divisor_promedio_Lap_2 =  $lap_divisor_promedio_Lap_2 - 1;  }


    $lapso1_materia14_promedio_aula = $lap2_pro_todo_M14_redond;
    $lapso1_materia14_promedio_aula_divisor = $lapso1_materia14_promedio_aula_divisor + 1;


     // lo de antes tiene problemas este es el que sirve

     $definitiva_materia14_aula_promedio =  $definitiva_materia14_aula_promedio + $lap2_pro_todo_M14_redond;
     $definitiva_materia14_aula_divisor = $definitiva_materia14_aula_divisor + 1;


}



if ($row_datos_controlmat['n_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['n_convertir'] == 2 ) {  /* alfabetico */
   if ($lap2_pro_todo_M14_redond >= $comparativo_formato_1) { $alfabetico_lap2_pro_todo_M14_redond = $alfabetico_formato_1;  }
   if ($lap2_pro_todo_M14_redond >= $comparativo_formato_2) { $alfabetico_lap2_pro_todo_M14_redond = $alfabetico_formato_2;  }
   if ($lap2_pro_todo_M14_redond >= $comparativo_formato_3) { $alfabetico_lap2_pro_todo_M14_redond = $alfabetico_formato_3;  }
   if ($lap2_pro_todo_M14_redond >= $comparativo_formato_4) { $alfabetico_lap2_pro_todo_M14_redond = $alfabetico_formato_4;  }
   if ($lap2_pro_todo_M14_redond >= $comparativo_formato_5) { $alfabetico_lap2_pro_todo_M14_redond = $alfabetico_formato_5;  }
   if ($lap2_pro_todo_M14_redond >= $comparativo_formato_6) { $alfabetico_lap2_pro_todo_M14_redond = $alfabetico_formato_6;  }
   if ($lap2_pro_todo_M14_redond >= $comparativo_formato_7) { $alfabetico_lap2_pro_todo_M14_redond = $alfabetico_formato_7;  }
   if ($lap2_pro_todo_M14_redond >= $comparativo_formato_8) { $alfabetico_lap2_pro_todo_M14_redond = $alfabetico_formato_8;  }
   if ($lap2_pro_todo_M14_redond >= $comparativo_formato_9) { $alfabetico_lap2_pro_todo_M14_redond = $alfabetico_formato_9;  }
   if ($lap2_pro_todo_M14_redond >= $comparativo_formato_10) { $alfabetico_lap2_pro_todo_M14_redond = $alfabetico_formato_10;  }
   if ($lap2_pro_todo_M14_redond >= $comparativo_formato_11) { $alfabetico_lap2_pro_todo_M14_redond = $alfabetico_formato_11;  }
   if ($lap2_pro_todo_M14_redond >= $comparativo_formato_12) { $alfabetico_lap2_pro_todo_M14_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['n_convertir'] == 3 ) {  /* literal */
  if ($lap2_pro_todo_M14_redond >= $comparativo_formato_1) { $literan_lap2_pro_todo_M14_redond = $literan_formato_1;  }
  if ($lap2_pro_todo_M14_redond >= $comparativo_formato_2) { $literan_lap2_pro_todo_M14_redond = $literan_formato_2;  }
  if ($lap2_pro_todo_M14_redond >= $comparativo_formato_3) { $literan_lap2_pro_todo_M14_redond = $literan_formato_3;  }
  if ($lap2_pro_todo_M14_redond >= $comparativo_formato_4) { $literan_lap2_pro_todo_M14_redond = $literan_formato_4;  }
  if ($lap2_pro_todo_M14_redond >= $comparativo_formato_5) { $literan_lap2_pro_todo_M14_redond = $literan_formato_5;  }
  if ($lap2_pro_todo_M14_redond >= $comparativo_formato_6) { $literan_lap2_pro_todo_M14_redond = $literan_formato_6;  }
  if ($lap2_pro_todo_M14_redond >= $comparativo_formato_7) { $literan_lap2_pro_todo_M14_redond = $literan_formato_7;  }
  if ($lap2_pro_todo_M14_redond >= $comparativo_formato_8) { $literan_lap2_pro_todo_M14_redond = $literan_formato_8;  }
  if ($lap2_pro_todo_M14_redond >= $comparativo_formato_9) { $literan_lap2_pro_todo_M14_redond = $literan_formato_9;  }
  if ($lap2_pro_todo_M14_redond >= $comparativo_formato_10) { $literan_lap2_pro_todo_M14_redond = $literan_formato_10;  }
  if ($lap2_pro_todo_M14_redond >= $comparativo_formato_11) { $literan_lap2_pro_todo_M14_redond = $literan_formato_11;  }
  if ($lap2_pro_todo_M14_redond >= $comparativo_formato_12) { $literan_lap2_pro_todo_M14_redond = $literan_formato_12;  } 
   } /* cierre literal */   ?>








                   <?php 

if ($row_datos_controlmat['n_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['n_convertir'] == 2 ) {  /* alfabetico */
   if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_1) { $alfabetico_seven_con_Au_redon_M14_L3xx = $alfabetico_formato_1;  }
   if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_2) { $alfabetico_seven_con_Au_redon_M14_L3xx = $alfabetico_formato_2;  }
   if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_3) { $alfabetico_seven_con_Au_redon_M14_L3xx = $alfabetico_formato_3;  }
   if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_4) { $alfabetico_seven_con_Au_redon_M14_L3xx = $alfabetico_formato_4;  }
   if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_5) { $alfabetico_seven_con_Au_redon_M14_L3xx = $alfabetico_formato_5;  }
   if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_6) { $alfabetico_seven_con_Au_redon_M14_L3xx = $alfabetico_formato_6;  }
   if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_7) { $alfabetico_seven_con_Au_redon_M14_L3xx = $alfabetico_formato_7;  }
   if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_8) { $alfabetico_seven_con_Au_redon_M14_L3xx = $alfabetico_formato_8;  }
   if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_9) { $alfabetico_seven_con_Au_redon_M14_L3xx = $alfabetico_formato_9;  }
   if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_10) { $alfabetico_seven_con_Au_redon_M14_L3xx = $alfabetico_formato_10;  }
   if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_11) { $alfabetico_seven_con_Au_redon_M14_L3xx = $alfabetico_formato_11;  }
   if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_12) { $alfabetico_seven_con_Au_redon_M14_L3xx = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['n_convertir'] == 3 ) {  /* literal */
  if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_1) { $literan_seven_con_Au_redon_M14_L3xx = $literan_formato_1;  }
  if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_2) { $literan_seven_con_Au_redon_M14_L3xx = $literan_formato_2;  }
  if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_3) { $literan_seven_con_Au_redon_M14_L3xx = $literan_formato_3;  }
  if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_4) { $literan_seven_con_Au_redon_M14_L3xx = $literan_formato_4;  }
  if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_5) { $literan_seven_con_Au_redon_M14_L3xx = $literan_formato_5;  }
  if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_6) { $literan_seven_con_Au_redon_M14_L3xx = $literan_formato_6;  }
  if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_7) { $literan_seven_con_Au_redon_M14_L3xx = $literan_formato_7;  }
  if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_8) { $literan_seven_con_Au_redon_M14_L3xx = $literan_formato_8;  }
  if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_9) { $literan_seven_con_Au_redon_M14_L3xx = $literan_formato_9;  }
  if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_10) { $literan_seven_con_Au_redon_M14_L3xx = $literan_formato_10;  }
  if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_11) { $literan_seven_con_Au_redon_M14_L3xx = $literan_formato_11;  }
  if ($totan_seven_con_Au_redon_M14_L3xx >= $comparativo_formato_12) { $literan_seven_con_Au_redon_M14_L3xx = $literan_formato_12;  } 
   } /* cierre literal */


                    ?>
                        

<?php 
if ($lap3_div_mat14 == '') {
    $lap3_pro_todo_M14_redond = '';
}
else {
    $lap3_pro_todo_M14 = $lap3_tot_mat14/$lap3_div_mat14;
 $lap3_pro_todo_M14_redondeado1 =number_format($lap3_pro_todo_M14, 1, '.', '');
    $lap3_pro_todo_M14_redond =number_format($lap3_pro_todo_M14_redondeado1);


    $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 + 1;   //  lleva el conteo de la division para el promedio del salon del 3er lapso
    $lap_suma_totan_promedio_Lap_3 = $lap_suma_totan_promedio_Lap_3 + $lap3_pro_todo_M14_redond;  // lleva el divisor para el promedio del salon 2do lapso


if ($row_datos_controlmat['n_suma'] != 1)
 {  $lap_suma_totan_promedio_Lap_3 =  $lap_suma_totan_promedio_Lap_3 - $lap3_pro_todo_M14_redond; $lap_divisor_promedio_Lap_3 =  $lap_divisor_promedio_Lap_3 - 1;  }



    $lapso3_materia14_promedio_aula = $lap3_pro_todo_M14_redond;
    $lapso3_materia14_promedio_aula_divisor = $lapso3_materia14_promedio_aula_divisor + 1;

// error incierto arriba
     $definitiva_materia14_aula_promedio =  $definitiva_materia14_aula_promedio + $lap3_pro_todo_M14_redond;
     $definitiva_materia14_aula_divisor = $definitiva_materia14_aula_divisor + 1;
}

if ($row_datos_controlmat['n_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['n_convertir'] == 2 ) {  /* alfabetico */
   if ($lap3_pro_todo_M14_redond >= $comparativo_formato_1) { $alfabetico_lap3_pro_todo_M14_redond = $alfabetico_formato_1;  }
   if ($lap3_pro_todo_M14_redond >= $comparativo_formato_2) { $alfabetico_lap3_pro_todo_M14_redond = $alfabetico_formato_2;  }
   if ($lap3_pro_todo_M14_redond >= $comparativo_formato_3) { $alfabetico_lap3_pro_todo_M14_redond = $alfabetico_formato_3;  }
   if ($lap3_pro_todo_M14_redond >= $comparativo_formato_4) { $alfabetico_lap3_pro_todo_M14_redond = $alfabetico_formato_4;  }
   if ($lap3_pro_todo_M14_redond >= $comparativo_formato_5) { $alfabetico_lap3_pro_todo_M14_redond = $alfabetico_formato_5;  }
   if ($lap3_pro_todo_M14_redond >= $comparativo_formato_6) { $alfabetico_lap3_pro_todo_M14_redond = $alfabetico_formato_6;  }
   if ($lap3_pro_todo_M14_redond >= $comparativo_formato_7) { $alfabetico_lap3_pro_todo_M14_redond = $alfabetico_formato_7;  }
   if ($lap3_pro_todo_M14_redond >= $comparativo_formato_8) { $alfabetico_lap3_pro_todo_M14_redond = $alfabetico_formato_8;  }
   if ($lap3_pro_todo_M14_redond >= $comparativo_formato_9) { $alfabetico_lap3_pro_todo_M14_redond = $alfabetico_formato_9;  }
   if ($lap3_pro_todo_M14_redond >= $comparativo_formato_10) { $alfabetico_lap3_pro_todo_M14_redond = $alfabetico_formato_10;  }
   if ($lap3_pro_todo_M14_redond >= $comparativo_formato_11) { $alfabetico_lap3_pro_todo_M14_redond = $alfabetico_formato_11;  }
   if ($lap3_pro_todo_M14_redond >= $comparativo_formato_12) { $alfabetico_lap3_pro_todo_M14_redond = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['n_convertir'] == 3 ) {  /* literal */
  if ($lap3_pro_todo_M14_redond >= $comparativo_formato_1) { $literan_lap3_pro_todo_M14_redond = $literan_formato_1;  }
  if ($lap3_pro_todo_M14_redond >= $comparativo_formato_2) { $literan_lap3_pro_todo_M14_redond = $literan_formato_2;  }
  if ($lap3_pro_todo_M14_redond >= $comparativo_formato_3) { $literan_lap3_pro_todo_M14_redond = $literan_formato_3;  }
  if ($lap3_pro_todo_M14_redond >= $comparativo_formato_4) { $literan_lap3_pro_todo_M14_redond = $literan_formato_4;  }
  if ($lap3_pro_todo_M14_redond >= $comparativo_formato_5) { $literan_lap3_pro_todo_M14_redond = $literan_formato_5;  }
  if ($lap3_pro_todo_M14_redond >= $comparativo_formato_6) { $literan_lap3_pro_todo_M14_redond = $literan_formato_6;  }
  if ($lap3_pro_todo_M14_redond >= $comparativo_formato_7) { $literan_lap3_pro_todo_M14_redond = $literan_formato_7;  }
  if ($lap3_pro_todo_M14_redond >= $comparativo_formato_8) { $literan_lap3_pro_todo_M14_redond = $literan_formato_8;  }
  if ($lap3_pro_todo_M14_redond >= $comparativo_formato_9) { $literan_lap3_pro_todo_M14_redond = $literan_formato_9;  }
  if ($lap3_pro_todo_M14_redond >= $comparativo_formato_10) { $literan_lap3_pro_todo_M14_redond = $literan_formato_10;  }
  if ($lap3_pro_todo_M14_redond >= $comparativo_formato_11) { $literan_lap3_pro_todo_M14_redond = $literan_formato_11;  }
  if ($lap3_pro_todo_M14_redond >= $comparativo_formato_12) { $literan_lap3_pro_todo_M14_redond = $literan_formato_12;  } 
  } /* cierre literal */ ?> 





                    <?php

if ($lap1_pro_todo_M14_redond== '' && $lap2_pro_todo_M14_redond== ''  && $lap3_pro_todo_M14_redond== '') {
    $totalcito_M14 = '';
    $tot_M14 = '';

}

else {
    $totalcito_M14 = $totan_seven_con_Au_redon_M14_aproxxx + $row_datos_contron_notasM14["nt_AuF"];
}


                    if ($row_datos_controlmat['n_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['n_convertir'] == 2 ) {  /* alfabetico */
   if ($totalcito_M14 >= $comparativo_formato_1) { $alfabetico_totalcito_M14 = $alfabetico_formato_1;  }
   if ($totalcito_M14 >= $comparativo_formato_2) { $alfabetico_totalcito_M14 = $alfabetico_formato_2;  }
   if ($totalcito_M14 >= $comparativo_formato_3) { $alfabetico_totalcito_M14 = $alfabetico_formato_3;  }
   if ($totalcito_M14 >= $comparativo_formato_4) { $alfabetico_totalcito_M14 = $alfabetico_formato_4;  }
   if ($totalcito_M14 >= $comparativo_formato_5) { $alfabetico_totalcito_M14 = $alfabetico_formato_5;  }
   if ($totalcito_M14 >= $comparativo_formato_6) { $alfabetico_totalcito_M14 = $alfabetico_formato_6;  }
   if ($totalcito_M14 >= $comparativo_formato_7) { $alfabetico_totalcito_M14 = $alfabetico_formato_7;  }
   if ($totalcito_M14 >= $comparativo_formato_8) { $alfabetico_totalcito_M14 = $alfabetico_formato_8;  }
   if ($totalcito_M14 >= $comparativo_formato_9) { $alfabetico_totalcito_M14 = $alfabetico_formato_9;  }
   if ($totalcito_M14 >= $comparativo_formato_10) { $alfabetico_totalcito_M14 = $alfabetico_formato_10;  }
   if ($totalcito_M14 >= $comparativo_formato_11) { $alfabetico_totalcito_M14 = $alfabetico_formato_11;  }
   if ($totalcito_M14 >= $comparativo_formato_12) { $alfabetico_totalcito_M14 = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['n_convertir'] == 3 ) {  /* literal */
  if ($totalcito_M14 >= $comparativo_formato_1) { $literan_totalcito_M14 = $literan_formato_1;  }
  if ($totalcito_M14 >= $comparativo_formato_2) { $literan_totalcito_M14 = $literan_formato_2;  }
  if ($totalcito_M14 >= $comparativo_formato_3) { $literan_totalcito_M14 = $literan_formato_3;  }
  if ($totalcito_M14 >= $comparativo_formato_4) { $literan_totalcito_M14 = $literan_formato_4;  }
  if ($totalcito_M14 >= $comparativo_formato_5) { $literan_totalcito_M14 = $literan_formato_5;  }
  if ($totalcito_M14 >= $comparativo_formato_6) { $literan_totalcito_M14 = $literan_formato_6;  }
  if ($totalcito_M14 >= $comparativo_formato_7) { $literan_totalcito_M14 = $literan_formato_7;  }
  if ($totalcito_M14 >= $comparativo_formato_8) { $literan_totalcito_M14 = $literan_formato_8;  }
  if ($totalcito_M14 >= $comparativo_formato_9) { $literan_totalcito_M14 = $literan_formato_9;  }
  if ($totalcito_M14 >= $comparativo_formato_10) { $literan_totalcito_M14 = $literan_formato_10;  }
  if ($totalcito_M14 >= $comparativo_formato_11) { $literan_totalcito_M14 = $literan_formato_11;  }
  if ($totalcito_M14 >= $comparativo_formato_12) { $literan_totalcito_M14 = $literan_formato_12;  } 
   } /* cierre literal */


  ?>
                         

                    












                   
                        
<?php

$tot123_M14 = $definitiva_materia14_aula_promedio/$definitiva_materia14_aula_divisor;

if ($definitiva_materia14_aula_divisor == '0') {
    $tot123_M1_form = '';
}

else {
$tot123_M14_forn_redondeado1 = number_format($tot123_M14, 1, '.', '');
    $tot123_M14_form = number_format($tot123_M14_forn_redondeado1);

$promedio_total123 = $promedio_total123 +  $tot123_M14_form;     // acumula el promedio total
$promedio_total123_divisor = $promedio_total123_divisor + 1 ;


if ($row_datos_controlmat['n_suma'] != 1)
 {  $promedio_total123 =  $promedio_total123 - $tot123_M14_form; $promedio_total123_divisor =  $promedio_total123_divisor - 1;  }


}



if ($row_datos_controlmat['n_convertir'] == 1 ) {  /* numerico */
       
} /* cierre numerico */
if ($row_datos_controlmat['n_convertir'] == 2 ) {  /* alfabetico */
   if ($tot123_M14_form >= $comparativo_formato_1) { $alfabetico_tot123_M14_form = $alfabetico_formato_1;  }
   if ($tot123_M14_form >= $comparativo_formato_2) { $alfabetico_tot123_M14_form = $alfabetico_formato_2;  }
   if ($tot123_M14_form >= $comparativo_formato_3) { $alfabetico_tot123_M14_form = $alfabetico_formato_3;  }
   if ($tot123_M14_form >= $comparativo_formato_4) { $alfabetico_tot123_M14_form = $alfabetico_formato_4;  }
   if ($tot123_M14_form >= $comparativo_formato_5) { $alfabetico_tot123_M14_form = $alfabetico_formato_5;  }
   if ($tot123_M14_form >= $comparativo_formato_6) { $alfabetico_tot123_M14_form = $alfabetico_formato_6;  }
   if ($tot123_M14_form >= $comparativo_formato_7) { $alfabetico_tot123_M14_form = $alfabetico_formato_7;  }
   if ($tot123_M14_form >= $comparativo_formato_8) { $alfabetico_tot123_M14_form = $alfabetico_formato_8;  }
   if ($tot123_M14_form >= $comparativo_formato_9) { $alfabetico_tot123_M14_form = $alfabetico_formato_9;  }
   if ($tot123_M14_form >= $comparativo_formato_10) { $alfabetico_tot123_M14_form = $alfabetico_formato_10;  }
   if ($tot123_M14_form >= $comparativo_formato_11) { $alfabetico_tot123_M14_form = $alfabetico_formato_11;  }
   if ($tot123_M14_form >= $comparativo_formato_12) { $alfabetico_tot123_M14_form = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($row_datos_controlmat['n_convertir'] == 3 ) {  /* literal */
  if ($tot123_M14_form >= $comparativo_formato_1) { $literan_tot123_M14_form = $literan_formato_1;  }
  if ($tot123_M14_form >= $comparativo_formato_2) { $literan_tot123_M14_form = $literan_formato_2;  }
  if ($tot123_M14_form >= $comparativo_formato_3) { $literan_tot123_M14_form = $literan_formato_3;  }
  if ($tot123_M14_form >= $comparativo_formato_4) { $literan_tot123_M14_form = $literan_formato_4;  }
  if ($tot123_M14_form >= $comparativo_formato_5) { $literan_tot123_M14_form = $literan_formato_5;  }
  if ($tot123_M14_form >= $comparativo_formato_6) { $literan_tot123_M14_form = $literan_formato_6;  }
  if ($tot123_M14_form >= $comparativo_formato_7) { $literan_tot123_M14_form = $literan_formato_7;  }
  if ($tot123_M14_form >= $comparativo_formato_8) { $literan_tot123_M14_form = $literan_formato_8;  }
  if ($tot123_M14_form >= $comparativo_formato_9) { $literan_tot123_M14_form = $literan_formato_9;  }
  if ($tot123_M14_form >= $comparativo_formato_10) { $literan_tot123_M14_form = $literan_formato_10;  }
  if ($tot123_M14_form >= $comparativo_formato_11) { $literan_tot123_M14_form = $literan_formato_11;  }
  if ($tot123_M14_form >= $comparativo_formato_12) { $literan_tot123_M14_form = $literan_formato_12;  } 
     }

$definitiva_materia14_aula_promedio = '0';
$definitiva_materia14_aula_divisor = '0';


?>




                   



<?php  
$pruebass_M14_1 = $row_datos_contron_notasM14["rev_uno"];
$pruebass_M14_2 = $row_datos_contron_notasM14["rev_dos"];
$pruebass_redonn_M14_1 =number_format($pruebass_M14_1);
$pruebass_redonn_M14_2 =number_format($pruebass_M14_2); 
  ?>

<!-- nuevo añadido 1 -->
  
<?php

if ($pruebass_M14_1 != '') {  
    if ($row_datos_controlmat['n_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['n_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redonn_M14_1 >= $comparativo_formato_1) { $alfabetico_pruebass_redonn_M14_1 = $alfabetico_formato_1;  }
       if ($pruebass_redonn_M14_1 >= $comparativo_formato_2) { $alfabetico_pruebass_redonn_M14_1 = $alfabetico_formato_2;  }
       if ($pruebass_redonn_M14_1 >= $comparativo_formato_3) { $alfabetico_pruebass_redonn_M14_1 = $alfabetico_formato_3;  }
       if ($pruebass_redonn_M14_1 >= $comparativo_formato_4) { $alfabetico_pruebass_redonn_M14_1 = $alfabetico_formato_4;  }
       if ($pruebass_redonn_M14_1 >= $comparativo_formato_5) { $alfabetico_pruebass_redonn_M14_1 = $alfabetico_formato_5;  }
       if ($pruebass_redonn_M14_1 >= $comparativo_formato_6) { $alfabetico_pruebass_redonn_M14_1 = $alfabetico_formato_6;  }
       if ($pruebass_redonn_M14_1 >= $comparativo_formato_7) { $alfabetico_pruebass_redonn_M14_1 = $alfabetico_formato_7;  }
       if ($pruebass_redonn_M14_1 >= $comparativo_formato_8) { $alfabetico_pruebass_redonn_M14_1 = $alfabetico_formato_8;  }
       if ($pruebass_redonn_M14_1 >= $comparativo_formato_9) { $alfabetico_pruebass_redonn_M14_1 = $alfabetico_formato_9;  }
       if ($pruebass_redonn_M14_1 >= $comparativo_formato_10) { $alfabetico_pruebass_redonn_M14_1 = $alfabetico_formato_10;  }
       if ($pruebass_redonn_M14_1 >= $comparativo_formato_11) { $alfabetico_pruebass_redonn_M14_1 = $alfabetico_formato_11;  }
       if ($pruebass_redonn_M14_1 >= $comparativo_formato_12) { $alfabetico_pruebass_redonn_M14_1 = $alfabetico_formato_12;  }
       } /* cierre alfabetico */
    if ($row_datos_controlmat['n_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redonn_M14_1 >= $comparativo_formato_1) { $literan_pruebass_redonn_M14_1 = $literan_formato_1;  }
      if ($pruebass_redonn_M14_1 >= $comparativo_formato_2) { $literan_pruebass_redonn_M14_1 = $literan_formato_2;  }
      if ($pruebass_redonn_M14_1 >= $comparativo_formato_3) { $literan_pruebass_redonn_M14_1 = $literan_formato_3;  }
      if ($pruebass_redonn_M14_1 >= $comparativo_formato_4) { $literan_pruebass_redonn_M14_1 = $literan_formato_4;  }
      if ($pruebass_redonn_M14_1 >= $comparativo_formato_5) { $literan_pruebass_redonn_M14_1 = $literan_formato_5;  }
      if ($pruebass_redonn_M14_1 >= $comparativo_formato_6) { $literan_pruebass_redonn_M14_1 = $literan_formato_6;  }
      if ($pruebass_redonn_M14_1 >= $comparativo_formato_7) { $literan_pruebass_redonn_M14_1 = $literan_formato_7;  }
      if ($pruebass_redonn_M14_1 >= $comparativo_formato_8) { $literan_pruebass_redonn_M14_1 = $literan_formato_8;  }
      if ($pruebass_redonn_M14_1 >= $comparativo_formato_9) { $literan_pruebass_redonn_M14_1 = $literan_formato_9;  }
      if ($pruebass_redonn_M14_1 >= $comparativo_formato_10) { $literan_pruebass_redonn_M14_1 = $literan_formato_10;  }
      if ($pruebass_redonn_M14_1 >= $comparativo_formato_11) { $literan_pruebass_redonn_M14_1 = $literan_formato_11;  }
      if ($pruebass_redonn_M14_1 >= $comparativo_formato_12) { $literan_pruebass_redonn_M14_1 = $literan_formato_12;  } 
        }
}
?> 
   
   <?php

if ($pruebass_M14_2 != '') {  
    if ($row_datos_controlmat['n_convertir'] == 1 ) {  /* numerico */
          
    } /* cierre numerico */
    if ($row_datos_controlmat['n_convertir'] == 2 ) {  /* alfabetico */
       if ($pruebass_redonn_M14_2 >= $comparativo_formato_1) { $alfabetico_pruebass_redonn_M14_2 = $alfabetico_formato_1;  }
       if ($pruebass_redonn_M14_2 >= $comparativo_formato_2) { $alfabetico_pruebass_redonn_M14_2 = $alfabetico_formato_2;  }
       if ($pruebass_redonn_M14_2 >= $comparativo_formato_3) { $alfabetico_pruebass_redonn_M14_2 = $alfabetico_formato_3;  }
       if ($pruebass_redonn_M14_2 >= $comparativo_formato_4) { $alfabetico_pruebass_redonn_M14_2 = $alfabetico_formato_4;  }
       if ($pruebass_redonn_M14_2 >= $comparativo_formato_5) { $alfabetico_pruebass_redonn_M14_2 = $alfabetico_formato_5;  }
       if ($pruebass_redonn_M14_2 >= $comparativo_formato_6) { $alfabetico_pruebass_redonn_M14_2 = $alfabetico_formato_6;  }
       if ($pruebass_redonn_M14_2 >= $comparativo_formato_7) { $alfabetico_pruebass_redonn_M14_2 = $alfabetico_formato_7;  }
       if ($pruebass_redonn_M14_2 >= $comparativo_formato_8) { $alfabetico_pruebass_redonn_M14_2 = $alfabetico_formato_8;  }
       if ($pruebass_redonn_M14_2 >= $comparativo_formato_9) { $alfabetico_pruebass_redonn_M14_2 = $alfabetico_formato_9;  }
       if ($pruebass_redonn_M14_2 >= $comparativo_formato_10) { $alfabetico_pruebass_redonn_M14_2 = $alfabetico_formato_10;  }
       if ($pruebass_redonn_M14_2 >= $comparativo_formato_11) { $alfabetico_pruebass_redonn_M14_2 = $alfabetico_formato_11;  }
       if ($pruebass_redonn_M14_2 >= $comparativo_formato_12) { $alfabetico_pruebass_redonn_M14_2 = $alfabetico_formato_12;  }
        } /* cierre alfabetico */
    if ($row_datos_controlmat['n_convertir'] == 3 ) {  /* literal */
      if ($pruebass_redonn_M14_2 >= $comparativo_formato_1) { $literan_pruebass_redonn_M14_2 = $literan_formato_1;  }
      if ($pruebass_redonn_M14_2 >= $comparativo_formato_2) { $literan_pruebass_redonn_M14_2 = $literan_formato_2;  }
      if ($pruebass_redonn_M14_2 >= $comparativo_formato_3) { $literan_pruebass_redonn_M14_2 = $literan_formato_3;  }
      if ($pruebass_redonn_M14_2 >= $comparativo_formato_4) { $literan_pruebass_redonn_M14_2 = $literan_formato_4;  }
      if ($pruebass_redonn_M14_2 >= $comparativo_formato_5) { $literan_pruebass_redonn_M14_2 = $literan_formato_5;  }
      if ($pruebass_redonn_M14_2 >= $comparativo_formato_6) { $literan_pruebass_redonn_M14_2 = $literan_formato_6;  }
      if ($pruebass_redonn_M14_2 >= $comparativo_formato_7) { $literan_pruebass_redonn_M14_2 = $literan_formato_7;  }
      if ($pruebass_redonn_M14_2 >= $comparativo_formato_8) { $literan_pruebass_redonn_M14_2 = $literan_formato_8;  }
      if ($pruebass_redonn_M14_2 >= $comparativo_formato_9) { $literan_pruebass_redonn_M14_2 = $literan_formato_9;  }
      if ($pruebass_redonn_M14_2 >= $comparativo_formato_10) { $literan_pruebass_redonn_M14_2 = $literan_formato_10;  }
      if ($pruebass_redonn_M14_2 >= $comparativo_formato_11) { $literan_pruebass_redonn_M14_2 = $literan_formato_11;  }
      if ($pruebass_redonn_M14_2 >= $comparativo_formato_12) { $literan_pruebass_redonn_M14_2 = $literan_formato_12;  } 
         }
}
?> 







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



              <?php 
$general_1xx_entero = number_format($general_1xx);

   if ( $dominio_numerico >= 4  ) {  /* numerico */
      
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
   } /* cierre alfabetico */

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
  }

  ?>

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
    } /* cierre alfabetico */

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
   }

?>

                    <?php 
$general_2xx_entero = number_format($general_2xx);

   if ( $dominio_numerico >= 4  ) {  /* numerico */
       
} /* cierre numerico */
if ($dominio_alfabetico >= 4 ) {  /* alfabetico */
   if ($general_2xx_entero >= $comparativo_formato_1) { $alfabetico_general_2xx_entero = $alfabetico_formato_1;  }
   if ($general_2xx_entero >= $comparativo_formato_2) { $alfabetico_general_2xx_entero = $alfabetico_formato_2;  }
   if ($general_2xx_entero >= $comparativo_formato_3) { $alfabetico_general_2xx_entero = $alfabetico_formato_3;  }
   if ($general_2xx_entero >= $comparativo_formato_4) { $alfabetico_general_2xx_entero = $alfabetico_formato_4;  }
   if ($general_2xx_entero >= $comparativo_formato_5) { $alfabetico_general_2xx_entero = $alfabetico_formato_5;  }
   if ($general_2xx_entero >= $comparativo_formato_6) { $alfabetico_general_2xx_entero = $alfabetico_formato_6;  }
   if ($general_2xx_entero >= $comparativo_formato_7) { $alfabetico_general_2xx_entero = $alfabetico_formato_7;  }
   if ($general_2xx_entero >= $comparativo_formato_8) { $alfabetico_general_2xx_entero = $alfabetico_formato_8;  }
   if ($general_2xx_entero >= $comparativo_formato_9) { $alfabetico_general_2xx_entero = $alfabetico_formato_9;  }
   if ($general_2xx_entero >= $comparativo_formato_10) { $alfabetico_general_2xx_entero = $alfabetico_formato_10;  }
   if ($general_2xx_entero >= $comparativo_formato_11) { $alfabetico_general_2xx_entero = $alfabetico_formato_11;  }
   if ($general_2xx_entero >= $comparativo_formato_12) { $alfabetico_general_2xx_entero = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($dominio_literal >= 4  ) {  /* literal */
  if ($general_2xx_entero >= $comparativo_formato_1) { $literal_general_2xx_entero = $literal_formato_1;  }
  if ($general_2xx_entero >= $comparativo_formato_2) { $literal_general_2xx_entero = $literal_formato_2;  }
  if ($general_2xx_entero >= $comparativo_formato_3) { $literal_general_2xx_entero = $literal_formato_3;  }
  if ($general_2xx_entero >= $comparativo_formato_4) { $literal_general_2xx_entero = $literal_formato_4;  }
  if ($general_2xx_entero >= $comparativo_formato_5) { $literal_general_2xx_entero = $literal_formato_5;  }
  if ($general_2xx_entero >= $comparativo_formato_6) { $literal_general_2xx_entero = $literal_formato_6;  }
  if ($general_2xx_entero >= $comparativo_formato_7) { $literal_general_2xx_entero = $literal_formato_7;  }
  if ($general_2xx_entero >= $comparativo_formato_8) { $literal_general_2xx_entero = $literal_formato_8;  }
  if ($general_2xx_entero >= $comparativo_formato_9) { $literal_general_2xx_entero = $literal_formato_9;  }
  if ($general_2xx_entero >= $comparativo_formato_10) { $literal_general_2xx_entero = $literal_formato_10;  }
  if ($general_2xx_entero >= $comparativo_formato_11) { $literal_general_2xx_entero = $literal_formato_11;  }
  if ($general_2xx_entero >= $comparativo_formato_12) { $literal_general_2xx_entero = $literal_formato_12;  } 
   }
?>

                    
<?php


$promedio_real_aula_L2 = $lap_suma_total_promedio_Lap_2 / $lap_divisor_promedio_Lap_2;


if ($lap_divisor_promedio_Lap_2 == '0') {
    $promedio_real_aula_L2xxx = '';
}

else {
 $promedio_real_aula_L2xxx = number_format($promedio_real_aula_L2, 2, ',', '');

}



$promedio_real_aula_L2xxx_entero = number_format($promedio_real_aula_L2xxx);

   if ( $dominio_numerico >= 4  ) {  /* numerico */
      
} /* cierre numerico */
if ($dominio_alfabetico >= 4 ) {  /* alfabetico */
   if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_1) { $alfabetico_aula_L2xxx_entero = $alfabetico_formato_1;  }
   if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_2) { $alfabetico_aula_L2xxx_entero = $alfabetico_formato_2;  }
   if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_3) { $alfabetico_aula_L2xxx_entero = $alfabetico_formato_3;  }
   if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_4) { $alfabetico_aula_L2xxx_entero = $alfabetico_formato_4;  }
   if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_5) { $alfabetico_aula_L2xxx_entero = $alfabetico_formato_5;  }
   if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_6) { $alfabetico_aula_L2xxx_entero = $alfabetico_formato_6;  }
   if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_7) { $alfabetico_aula_L2xxx_entero = $alfabetico_formato_7;  }
   if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_8) { $alfabetico_aula_L2xxx_entero = $alfabetico_formato_8;  }
   if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_9) { $alfabetico_aula_L2xxx_entero = $alfabetico_formato_9;  }
   if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_10) { $alfabetico_aula_L2xxx_entero = $alfabetico_formato_10;  }
   if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_11) { $alfabetico_aula_L2xxx_entero = $alfabetico_formato_11;  }
   if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_12) { $alfabetico_aula_L2xxx_entero = $alfabetico_formato_12;  }
   } /* cierre alfabetico */

if ($dominio_literal >= 4  ) {  /* literal */
  if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_1) { $literal_aula_L2xxx_entero = $literal_formato_1;  }
  if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_2) { $literal_aula_L2xxx_entero = $literal_formato_2;  }
  if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_3) { $literal_aula_L2xxx_entero = $literal_formato_3;  }
  if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_4) { $literal_aula_L2xxx_entero = $literal_formato_4;  }
  if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_5) { $literal_aula_L2xxx_entero = $literal_formato_5;  }
  if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_6) { $literal_aula_L2xxx_entero = $literal_formato_6;  }
  if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_7) { $literal_aula_L2xxx_entero = $literal_formato_7;  }
  if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_8) { $literal_aula_L2xxx_entero = $literal_formato_8;  }
  if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_9) { $literal_aula_L2xxx_entero = $literal_formato_9;  }
  if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_10) { $literal_aula_L2xxx_entero = $literal_formato_10;  }
  if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_11) { $literal_aula_L2xxx_entero = $literal_formato_11;  }
  if ($promedio_real_aula_L2xxx_entero >= $comparativo_formato_12) { $literal_aula_L2xxx_entero = $literal_formato_12;  } 
  }




?>

<?php 
$general_3xx_entero = number_format($general_3xx);

   if ( $dominio_numerico >= 4  ) {  /* numerico */
       
} /* cierre numerico */
if ($dominio_alfabetico >= 4 ) {  /* alfabetico */
   if ($general_3xx_entero >= $comparativo_formato_1) { $alfabetico_general_3xx_entero = $alfabetico_formato_1;  }
   if ($general_3xx_entero >= $comparativo_formato_2) { $alfabetico_general_3xx_entero = $alfabetico_formato_2;  }
   if ($general_3xx_entero >= $comparativo_formato_3) { $alfabetico_general_3xx_entero = $alfabetico_formato_3;  }
   if ($general_3xx_entero >= $comparativo_formato_4) { $alfabetico_general_3xx_entero = $alfabetico_formato_4;  }
   if ($general_3xx_entero >= $comparativo_formato_5) { $alfabetico_general_3xx_entero = $alfabetico_formato_5;  }
   if ($general_3xx_entero >= $comparativo_formato_6) { $alfabetico_general_3xx_entero = $alfabetico_formato_6;  }
   if ($general_3xx_entero >= $comparativo_formato_7) { $alfabetico_general_3xx_entero = $alfabetico_formato_7;  }
   if ($general_3xx_entero >= $comparativo_formato_8) { $alfabetico_general_3xx_entero = $alfabetico_formato_8;  }
   if ($general_3xx_entero >= $comparativo_formato_9) { $alfabetico_general_3xx_entero = $alfabetico_formato_9;  }
   if ($general_3xx_entero >= $comparativo_formato_10) { $alfabetico_general_3xx_entero = $alfabetico_formato_10;  }
   if ($general_3xx_entero >= $comparativo_formato_11) { $alfabetico_general_3xx_entero = $alfabetico_formato_11;  }
   if ($general_3xx_entero >= $comparativo_formato_12) { $alfabetico_general_3xx_entero = $alfabetico_formato_12;  }
  } /* cierre alfabetico */

if ($dominio_literal >= 4  ) {  /* literal */
  if ($general_3xx_entero >= $comparativo_formato_1) { $literal_general_3xx_entero = $literal_formato_1;  }
  if ($general_3xx_entero >= $comparativo_formato_2) { $literal_general_3xx_entero = $literal_formato_2;  }
  if ($general_3xx_entero >= $comparativo_formato_3) { $literal_general_3xx_entero = $literal_formato_3;  }
  if ($general_3xx_entero >= $comparativo_formato_4) { $literal_general_3xx_entero = $literal_formato_4;  }
  if ($general_3xx_entero >= $comparativo_formato_5) { $literal_general_3xx_entero = $literal_formato_5;  }
  if ($general_3xx_entero >= $comparativo_formato_6) { $literal_general_3xx_entero = $literal_formato_6;  }
  if ($general_3xx_entero >= $comparativo_formato_7) { $literal_general_3xx_entero = $literal_formato_7;  }
  if ($general_3xx_entero >= $comparativo_formato_8) { $literal_general_3xx_entero = $literal_formato_8;  }
  if ($general_3xx_entero >= $comparativo_formato_9) { $literal_general_3xx_entero = $literal_formato_9;  }
  if ($general_3xx_entero >= $comparativo_formato_10) { $literal_general_3xx_entero = $literal_formato_10;  }
  if ($general_3xx_entero >= $comparativo_formato_11) { $literal_general_3xx_entero = $literal_formato_11;  }
  if ($general_3xx_entero >= $comparativo_formato_12) { $literal_general_3xx_entero = $literal_formato_12;  } 
   }?>



<?php

$promedio_real_aula_L3 = $lap_suma_total_promedio_Lap_3 / $lap_divisor_promedio_Lap_3;


if ($lap_divisor_promedio_Lap_3 == '0') {
    $promedio_real_aula_L3xxx = '';
}

else {
 $promedio_real_aula_L3xxx = number_format($promedio_real_aula_L3, 2, ',', '');

}

$promedio_real_aula_L3xxx_entero = number_format($promedio_real_aula_L3xxx);

   if ( $dominio_numerico >= 4  ) {  /* numerico */
      
} /* cierre numerico */
if ($dominio_alfabetico >= 4 ) {  /* alfabetico */
   if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_1) { $alfabetico_aula_L3xxx_entero = $alfabetico_formato_1;  }
   if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_2) { $alfabetico_aula_L3xxx_entero = $alfabetico_formato_2;  }
   if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_3) { $alfabetico_aula_L3xxx_entero = $alfabetico_formato_3;  }
   if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_4) { $alfabetico_aula_L3xxx_entero = $alfabetico_formato_4;  }
   if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_5) { $alfabetico_aula_L3xxx_entero = $alfabetico_formato_5;  }
   if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_6) { $alfabetico_aula_L3xxx_entero = $alfabetico_formato_6;  }
   if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_7) { $alfabetico_aula_L3xxx_entero = $alfabetico_formato_7;  }
   if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_8) { $alfabetico_aula_L3xxx_entero = $alfabetico_formato_8;  }
   if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_9) { $alfabetico_aula_L3xxx_entero = $alfabetico_formato_9;  }
   if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_10) { $alfabetico_aula_L3xxx_entero = $alfabetico_formato_10;  }
   if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_11) { $alfabetico_aula_L3xxx_entero = $alfabetico_formato_11;  }
   if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_12) { $alfabetico_aula_L3xxx_entero = $alfabetico_formato_12;  }
    } /* cierre alfabetico */

if ($dominio_literal >= 4  ) {  /* literal */
  if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_1) { $literal_aula_L3xxx_entero = $literal_formato_1;  }
  if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_2) { $literal_aula_L3xxx_entero = $literal_formato_2;  }
  if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_3) { $literal_aula_L3xxx_entero = $literal_formato_3;  }
  if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_4) { $literal_aula_L3xxx_entero = $literal_formato_4;  }
  if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_5) { $literal_aula_L3xxx_entero = $literal_formato_5;  }
  if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_6) { $literal_aula_L3xxx_entero = $literal_formato_6;  }
  if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_7) { $literal_aula_L3xxx_entero = $literal_formato_7;  }
  if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_8) { $literal_aula_L3xxx_entero = $literal_formato_8;  }
  if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_9) { $literal_aula_L3xxx_entero = $literal_formato_9;  }
  if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_10) { $literal_aula_L3xxx_entero = $literal_formato_10;  }
  if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_11) { $literal_aula_L3xxx_entero = $literal_formato_11;  }
  if ($promedio_real_aula_L3xxx_entero >= $comparativo_formato_12) { $literal_aula_L3xxx_entero = $literal_formato_12;  } 
   }




?>










                     <!-- detectar aqui -->

                        <?php   $signito = '='; 
/* if ( $dominio_numerico >= 4  )  { }  ?> <?php  if ( $dominio_numerico >= 4  ) 
                       
                        {  /* numerico */
     /*  echo $general_defxxxE; 
} */ /* cierre numerico */

/* if ($dominio_alfabetico >= 4 ) {  /* alfabetico */
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
  $este_es_la_nota = $alfabetico_general_defxxxE;    /* } cierre alfabetico */


/* if ($dominio_literal >= 4  ) {  /* literal */
/*  if ($general_defxxxE >= $comparativo_formato_1) { $literal_general_defxxxE = $literal_formato_1;  }
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
 /* echo $literal_general_defxxxE;  } */   ?>     

 <?php   

$gran_promedio123 =  $promedio_total123 / $promedio_total123_divisor;

$gran_promedio123xxx = number_format($gran_promedio123, 2, ',', '');

$gran_promedio123xxxneto_redondeado1 = number_format($gran_promedio123, 1, '.', '');

$gran_promedio123xxxneto = number_format($gran_promedio123xxxneto_redondeado1);

$signito = '=';
if ( $dominio_numerico >= 4  )  { }  ?> <?php  if ( $dominio_numerico >= 4  ) 
                       
                        {  /* numerico */
     
} /* cierre numerico */

if ($dominio_alfabetico >= 4 ) {  /* alfabetico */
   if ($gran_promedio123xxxneto >= $comparativo_formato_1) { $alfabetico_promedio123xxxneto = $alfabetico_formato_1;  }
   if ($gran_promedio123xxxneto >= $comparativo_formato_2) { $alfabetico_promedio123xxxneto = $alfabetico_formato_2;  }
   if ($gran_promedio123xxxneto >= $comparativo_formato_3) { $alfabetico_promedio123xxxneto = $alfabetico_formato_3;  }
   if ($gran_promedio123xxxneto >= $comparativo_formato_4) { $alfabetico_promedio123xxxneto = $alfabetico_formato_4;  }
   if ($gran_promedio123xxxneto >= $comparativo_formato_5) { $alfabetico_promedio123xxxneto = $alfabetico_formato_5;  }
   if ($gran_promedio123xxxneto >= $comparativo_formato_6) { $alfabetico_promedio123xxxneto = $alfabetico_formato_6;  }
   if ($gran_promedio123xxxneto >= $comparativo_formato_7) { $alfabetico_promedio123xxxneto = $alfabetico_formato_7;  }
   if ($gran_promedio123xxxneto >= $comparativo_formato_8) { $alfabetico_promedio123xxxneto = $alfabetico_formato_8;  }
   if ($gran_promedio123xxxneto >= $comparativo_formato_9) { $alfabetico_promedio123xxxneto = $alfabetico_formato_9;  }
   if ($gran_promedio123xxxneto >= $comparativo_formato_10) { $alfabetico_promedio123xxxneto = $alfabetico_formato_10;  }
   if ($gran_promedio123xxxneto >= $comparativo_formato_11) { $alfabetico_promedio123xxxneto = $alfabetico_formato_11;  }
   if ($gran_promedio123xxxneto >= $comparativo_formato_12) { $alfabetico_promedio123xxxneto = $alfabetico_formato_12;  }
 } /* cierre alfabetico */

if ($dominio_literal >= 4  ) {  /* literal */
  if ($gran_promedio123xxxneto >= $comparativo_formato_1) { $literal_promedio123xxxneto = $literal_formato_1;  }
  if ($gran_promedio123xxxneto >= $comparativo_formato_2) { $literal_promedio123xxxneto = $literal_formato_2;  }
  if ($gran_promedio123xxxneto >= $comparativo_formato_3) { $literal_promedio123xxxneto = $literal_formato_3;  }
  if ($gran_promedio123xxxneto >= $comparativo_formato_4) { $literal_promedio123xxxneto = $literal_formato_4;  }
  if ($gran_promedio123xxxneto >= $comparativo_formato_5) { $literal_promedio123xxxneto = $literal_formato_5;  }
  if ($gran_promedio123xxxneto >= $comparativo_formato_6) { $literal_promedio123xxxneto = $literal_formato_6;  }
  if ($gran_promedio123xxxneto >= $comparativo_formato_7) { $literal_promedio123xxxneto = $literal_formato_7;  }
  if ($gran_promedio123xxxneto >= $comparativo_formato_8) { $literal_promedio123xxxneto = $literal_formato_8;  }
  if ($gran_promedio123xxxneto >= $comparativo_formato_9) { $literal_promedio123xxxneto = $literal_formato_9;  }
  if ($gran_promedio123xxxneto >= $comparativo_formato_10) { $literal_promedio123xxxneto = $literal_formato_10;  }
  if ($gran_promedio123xxxneto >= $comparativo_formato_11) { $literal_promedio123xxxneto = $literal_formato_11;  }
  if ($gran_promedio123xxxneto >= $comparativo_formato_12) { $literal_promedio123xxxneto = $literal_formato_12;  } 
 }  ?>





                   




































<TABLE class="basetabla" style="padding-top: 26px;">

<TR >


  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 18px;" align="center"> </TD>

  <TD style="width:85%; margin-top: 4px;  line-height: 24px; font-size: 20px;" align="center">


 <?php

     if ($row_datos_estudiantes['id_division'] == '1' ) {        
        $texto_div = 'Inicial';
    }


     if ($row_datos_estudiantes['id_division'] == '2' ) {        
        $texto_div = 'Primaria';
    }


    if ($row_datos_estudiantes['id_division'] == '5' ) {        
        $texto_div = 'Media General';
    }

     if ($row_datos_estudiantes['id_division'] == '3' ) {        
        $texto_div = 'Media General en Ciencias';
    }  

      if (strlen($row_datos_estudiantes['ci_estu']) > '9') {
        $ci_es = $row_datos_estudiantes['ci_estu'];
      }

      if (strlen($row_datos_estudiantes['ci_estu']) <= '9') {
        $ci_es = number_format($row_datos_estudiantes['ci_estu'], 0 , ' , ' ,  '.');
      }


       if ($row_datos_estudiantes['id_sexo'] == '1') {
        $him_her = 'la alumna';
      }

      if ($row_datos_estudiantes['id_sexo'] == '2') {
        $him_her = 'el alumno';
      }

 
       ?>


        <?php


            $diaf = date('d', strtotime($row_datos_estudiantes['nacimiento_estu']));
            $mesf = date('n', strtotime($row_datos_estudiantes['nacimiento_estu'])); 
            $aniof = date('Y', strtotime($row_datos_estudiantes['nacimiento_estu']));  
            $mf="";
            switch ($mesf) {
                case 1:$mf="Enero"; break;
                case 2:$mf="Febrero"; break;
                case 3:$mf="Marzo"; break;
                case 4:$mf="Abril"; break;
                case 5:$mf="Mayo"; break;
                case 6:$mf="Junio"; break;
                case 7:$mf="Julio"; break;
                case 8:$mf="Agosto"; break;
                case 9:$mf="Septiembre"; break;
                case 10:$mf="Octubre"; break;
                case 11:$mf="Noviembre"; break;
                case 12:$mf="Diciembre"; break;
            }



$fecha_hoy = date('d/m/Y'); 



    
       ?>



<p style="text-align: justify; text-justify: inter-word; font-style: italic; text-indent: 20px; ">

    Quien suscribe,  <b><u> <?php echo $row_datos_modcabecc['firma_1']; ?>, </u></b> titular de la Cédula de identidad <b><u> Nº 
      <?php echo number_format($row_datos_plantillaDF['ci_per'], 0 , ' , ' ,  '.'); ?>, </u></b> <?php echo $sexiest; ?> <?php echo $row_datos_modcabecc['art']; ?> <?php echo $row_datos_queryplantel["nombre_plantel"]; ?>, situada en la Parroquia <?php echo $row_datos_queryplantel['nombre_parroquia']; ?>, Municipio <?php echo $row_datos_queryplantel['nombre_municipio']; ?>, certifica que  <?php echo $him_her; ?>: <b><u><?php echo $row_datos_estudiantes['nombre_estu']; ?> <?php echo $row_datos_estudiantes['apellidos_estu']; ?>,</u></b> titular de la Cédula de Identidad (escolar) N° <b><u> <?php echo $ci_es; ?>,</u></b> cursante de <b><u><?php echo $row_datos_estudiantes['nombre_grados']; ?></u></b> de Educación  <?php echo $texto_div; ?>, sección: <b><u><?php echo $row_datos_estudiantes['nombre_seccion']; ?></u></b>    nacido(a) en: <b><u><?php echo $row_datos_estudiantes['nombre_ciudad']; ?> - <?php echo $row_datos_estudiantes['nombre_estado']; ?>,</u></b>          el día <b><u><?php echo $diaf; ?> de <?php echo $mf; ?> del <?php echo $aniof; ?></u></b>.

</p>

  </TD>

  <TD style="width:10%; margin-top: 4px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 

</TR>

</TABLE>


<TABLE class="basetabla" style="padding-top: 12px;">  
    <TR>

<TD style="width:5%; margin-top: 0px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 
<TD style="width:90%; margin-top: 0px; padding-left: 20px;  line-height: 24px; font-size: 20px; text-align: left;  font-style: italic; " >Ha evidenciado como resultado de su rendimiento estudiantil durante el</TD> 
<TD style="width:10%; margin-top: 0px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 

    </TR>

</TABLE>

<TABLE class="basetabla" style="padding-top: -2px;">  
    <TR>
<TD style="width:5%; margin-top: 0px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 
<TD style="width:45%; margin-top: 0px;  padding-left: 0px; line-height: 24px; font-size: 20px; text-align: left;  font-style: italic; " >presente año escolar: <?php echo $row_datos_periodo['inicia']; ?>-<?php echo $row_datos_periodo['termina']; ?> que:</TD>
<TD style="width:40%; margin-top: 0px;  line-height: 24px; font-size: 20px; text-align: left; border-bottom: 1px solid black;" ></TD>  
<TD style="width:10%; margin-top: 0px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 
    </TR>
    
</TABLE>

<TABLE class="basetabla" style="padding-top: 24px;">  
    <TR>
<TD style="width:5%; margin-top: 0px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 
<TD style="width:85%; margin-top: 0px;  line-height: 24px; font-size: 20px; text-align: left; border-bottom: 1px solid black;" ></TD>  
<TD style="width:10%; margin-top: 0px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 
    </TR>
    
</TABLE>


<TABLE class="basetabla" style="padding-top: 4px;">  
    <TR>
<TD style="width:5%; margin-top: 0px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 
<TD style="width:83%; margin-top: 0px;  line-height: 24px; font-size: 20px; text-align: left; border-bottom: 1px solid black;" ></TD> 
<TD style="width:2%; margin-top: 0px;  padding-left: 0px; line-height: 24px; font-size: 20px; text-align: left;  font-style: italic; " >.</TD> 
<TD style="width:10%; margin-top: 0px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 
    </TR>
    
</TABLE>


<TABLE class="basetabla" style="padding-top: 4px;">  
    <TR>
<TD style="width:5%; margin-top: 0px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 
<TD style="width:86%; margin-top: 0px;  padding-left: 0px; line-height: 24px; font-size: 20px; text-align: left;  font-style: italic; " >Haciendose en consecuencia merecedor(a) de acuerdo a lo establecido en la evaluación del literal:</TD> 
<TD style="width:9%; margin-top: 0px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 
    </TR>
    
</TABLE>



<TABLE class="basetabla" style="padding-top: 10px;">  

<?php

$promovido = '';
$no_promovido = '';


$nota_numerica_detector = $general_defxxxE;

include("../../conectar.php");

$puntaje = "SELECT * FROM z_puntaje where pt_selecc = '1' limit 1";
$datos_puntaje = mysqli_query($enlace, $puntaje) or die(mysqli_error());
$row_datos_puntaje = mysqli_fetch_assoc($datos_puntaje);

$minimo_aprobatorio = $row_datos_puntaje['el_minimo'];

mysqli_close($enlace);


if ($nota_numerica_detector >= $minimo_aprobatorio) {
$promovido = 'X';
}

else { $no_promovido = 'X'; }






$marcar_A = '';
$marcar_B = '';
$marcar_C = '';
$marcar_D = '';
$marcar_D = '';



if ($este_es_la_nota == 'A') {
   $marcar_A = 'X';
   
}

if ($este_es_la_nota == 'B') {
   $marcar_B = 'X';
  
}

if ($este_es_la_nota == 'C') {
   $marcar_C = 'X';
  
}

if ($este_es_la_nota == 'D') {
   $marcar_D = 'X';
  
}

if ($este_es_la_nota == 'E') {
   $marcar_E = 'X';
   
}



?>


    <TR>
<TD style="width:5%; margin-top: 0px;  line-height: 28px; font-size: 22px;" align="center"> </TD> 

  <TD style="width:3%; margin-top: 4px;  line-height: 28px; font-size: 22px;" align="center"><b>"A"</b></TD>
<TD style="width:3%; margin-top: 0px;  line-height: 28px; font-size: 22px;" align="center"> </TD> 
  <TD style="width:6%; margin-top: 4px;  line-height: 28px; font-size: 22px; border: 3px solid black;" align="center"><b><?php echo $marcar_A; ?></b></TD>
<TD style="width:5%; margin-top: 0px;  line-height: 28px; font-size: 22px;" align="center"> </TD> 


  <TD style="width:3%; margin-top: 4px;  line-height: 28px; font-size: 22px;" align="center"><b>"B"</b></TD>
<TD style="width:3%; margin-top: 0px;  line-height: 28px; font-size: 22px;" align="center"> </TD> 
  <TD style="width:6%; margin-top: 4px;  line-height: 28px; font-size: 22px; border: 3px solid black;" align="center"><b><?php echo $marcar_B; ?></b></TD>
<TD style="width:5%; margin-top: 0px;  line-height: 28px; font-size: 22px;" align="center"> </TD> 

  <TD style="width:3%; margin-top: 4px;  line-height: 28px; font-size: 22px;" align="center"><b>"C"</b></TD>
<TD style="width:3%; margin-top: 0px;  line-height: 28px; font-size: 22px;" align="center"> </TD> 
  <TD style="width:6%; margin-top: 4px;  line-height: 28px; font-size: 22px; border: 3px solid black;" align="center"><b><?php echo $marcar_C; ?></b></TD>
<TD style="width:5%; margin-top: 0px;  line-height: 28px; font-size: 22px;" align="center"> </TD> 


  <TD style="width:3%; margin-top: 4px;  line-height: 28px; font-size: 22px;" align="center"><b>"D"</b></TD>
<TD style="width:3%; margin-top: 0px;  line-height: 28px; font-size: 22px;" align="center"> </TD> 
  <TD style="width:6%; margin-top: 4px;  line-height: 28px; font-size: 22px; border: 3px solid black;" align="center"><b><?php echo $marcar_D; ?></b></TD>
<TD style="width:5%; margin-top: 0px;  line-height: 28px; font-size: 22px;" align="center"> </TD> 


  <TD style="width:3%; margin-top: 4px;  line-height: 28px; font-size: 22px;" align="center"><b>"E"</b></TD>
<TD style="width:3%; margin-top: 0px;  line-height: 28px; font-size: 22px;" align="center"> </TD> 
  <TD style="width:6%; margin-top: 4px;  line-height: 28px; font-size: 22px; border: 3px solid black;" align="center"><b><?php echo $marcar_E; ?></b></TD>
<TD style="width:5%; margin-top: 0px;  line-height: 28px; font-size: 22px;" align="center"> </TD> 

<TD style="width:10%; margin-top: 0px;  line-height: 28px; font-size: 22px;" align="center"> </TD> 

    </TR>
    
</TABLE>



<TABLE class="basetabla" style="padding-top: 40px;">  

    <TR>
<TD style="width:5%; margin-top: 0px;  line-height: 28px; font-size: 20px;" align="center" ROWSPAN=5> </TD> 

<TD style="width:10%; margin-top: 0px;  line-height: 28px; font-size: 20px;" align="center">
</TD>

<TD style="width:5%; margin-top: 0px;  line-height: 28px; font-size: 20px;" align="center" ROWSPAN=5>
</TD>

  <TD style="width:4%; margin-top: 4px;  line-height: 28px; font-size: 20px; border: 3px solid black;" align="center"><b><?php echo $promovido; ?></b></TD>
  <TD style="width:20%; margin-top: 4px;  line-height: 28px; font-size: 18px;" align="left">Promovido(a).</TD>

<TD style="width:6%; margin-top: 0px;  line-height: 28px; font-size: 20px;" align="center" ROWSPAN=5>
</TD>


<?php

$gradillo_actual = $row_datos_estudiantes['id_grado'];


if ($gradillo_actual == '35') {
   $next_gradillo = '36';
}

if ($gradillo_actual == '36') {
   $next_gradillo = '37';
}

if ($gradillo_actual == '37') {
   $next_gradillo = '38';
}

if ($gradillo_actual == '38') {
   $next_gradillo = '40';
}

if ($gradillo_actual == '40') {
   $next_gradillo = '41';
}

include("../../conectar.php");


$lap1_query_gradillo = "SELECT id_grado, nombre_grados FROM grados 
         WHERE   id_grado = '$next_gradillo'
         
         GROUP BY id_grado limit 1" ;

$lap1_datos_control_gradillo = mysqli_query($enlace, $lap1_query_gradillo) or die(mysqli_error());
$lap1_datos_control_gradillo_es = mysqli_fetch_array($lap1_datos_control_gradillo); 

$el_next_es_es = $lap1_datos_control_gradillo_es['nombre_grados'];


mysqli_close($enlace);

?>



  <TD style="width:39%; margin-top: 4px; padding-left: 6px;  line-height: 28px; font-size: 20px; border: 3px solid black;" align="left" ROWSPAN=5> al <u><b><?php echo $el_next_es_es; ?></b></u> de Educación Primaria.</TD>
<TD style="width:5%; margin-top: 0px;  line-height: 28px; font-size: 20px;" align="center" ROWSPAN=5> </TD> 
    </TR>


<TR>
<TD style="width:10%; margin-top: 0px;  line-height: 28px; font-size: 20px;" align="center">
</TD>
  <TD style="width:4%; margin-top: 4px;  line-height: 28px; font-size: 20px; " align="center"></TD>
  <TD style="width:20%; margin-top: 4px;  line-height: 28px; font-size: 20px;" align="center"></TD>
</TR>



 <TR>

<TD style="width:10%; margin-top: 0px;  line-height: 28px; font-size: 20px;" align="left"><b>Siendo:</b>
</TD>

  <TD style="width:4%; margin-top: 4px;  line-height: 28px; font-size: 20px; " align="center"></TD>
  <TD style="width:20%; margin-top: 4px;  line-height: 28px; font-size: 20px;" align="center"></TD>

</TR>


<TR>
<TD style="width:10%; margin-top: 0px;  line-height: 28px; font-size: 20px;" align="center">
</TD>
  <TD style="width:4%; margin-top: 4px;  line-height: 28px; font-size: 20px; " align="center"></TD>
  <TD style="width:20%; margin-top: 4px;  line-height: 28px; font-size: 20px;" align="center"></TD>
</TR>


    <TR>


<TD style="width:10%; margin-top: 0px;  line-height: 28px; font-size: 20px;" align="center">
</TD>



  <TD style="width:4%; margin-top: 4px;  line-height: 28px; font-size: 20px; border: 3px solid black;" align="center"><b><?php echo $no_promovido; ?></b></TD>
  <TD style="width:20%; margin-top: 4px;  line-height: 28px; font-size: 18px;" align="left">No Promovido(a).</TD>

  </TR>



    
</TABLE>



<TABLE class="basetabla" style="padding-top: 26px;">

<TR >


  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 18px;" align="center"> </TD>

  <TD style="width:85%; margin-top: 4px;  line-height: 24px; font-size: 20px;" align="left">


 <?php
$fecha = date('Y-m-j H:i:s'); 
$nuevafecha = strtotime ( '-7 hour' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'j/m/Y  H:i:s' , $nuevafecha );
            //echo $nuevafecha." hrs<br>";
            $dia = date("j"); 
            $mes = date("n"); 
            $anio = date("Y"); 
            $m="";
            switch ($mes) {
                case 1:$m="Enero"; break;
                case 2:$m="Febrero"; break;
                case 3:$m="Marzo"; break;
                case 4:$m="Abril"; break;
                case 5:$m="Mayo"; break;
                case 6:$m="Junio"; break;
                case 7:$m="Julio"; break;
                case 8:$m="Agosto"; break;
                case 9:$m="Septiembre"; break;
                case 10:$m="Octubre"; break;
                case 11:$m="Noviembre"; break;
                case 12:$m="Diciembre"; break;
            }
            
            ?> 


<p style=" font-style: italic; text-indent: 20px; ">

En Caracas a los <u> <?php echo $dia; ?> días </u> del mes de <u><?php echo $m; ?></u>  del año <u><?php echo $anio; ?>.</u>                                                                 
    
</p>

  </TD>


  <TD style="width:10%; margin-top: 4px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 


</TR>

</TABLE>






<br><br>
<br>











<?php

include("../../conectar.php");

              $querymodcabecc = "SELECT * FROM z_cabecera where id_cabecera = 1 ";

              $datos_modcabecc = mysqli_query($enlace, $querymodcabecc) or die(mysqli_error());
              
              $row_datos_modcabecc = mysqli_fetch_array($datos_modcabecc);

   mysqli_close($enlace);    

?>



<table class="basetabla" style="margin-top: 14px; " cellspacing="-1">
    <tr>  
        <td style="width:5%;" align="center" height="18"></td>      
        <td style="width:85%;" align="left" height="18"><b>Firmas:</b></td>
        <td style="width:10%;" align="center" height="18"></td>
    </tr>
</table>

<table class="basetabla" style="margin-top: 16px; margin-bottom: 6px;" cellspacing="-1">

 <tr>
     <td style="width:5%;" align="center" height="18"></td>
     <td style="width:24%; border-bottom: 1px solid black; " align="center" height="18"></td>
      <td style="width:9%;" align="center" height="18"></td>
           <td style="width:24%; border-bottom: 1px solid black; " align="center" height="18"></td>
      <td style="width:9%;" align="center" height="18"></td>
    <td style="width:20%; border-bottom: 1px solid black; " align="center" height="18"></td>
<td style="width:9%;  " align="center" height="18"></td>
  </tr>

   <tr>
     <td style="width:5%;" align="center" height="12"></td>
     <td style="width:24%; font-size: 11px;" align="center" height="12">Docente - Profesor(a)</td>
      <td style="width:9%;" align="center" height="12"></td>
           <td style="width:24%; font-size: 11px;" align="center" height="12">Director(a)</td>
      <td style="width:9%;" align="center" height="12"></td>
    <td style="width:20%; font-size: 11px; " align="center" height="12">Representante</td>
<td style="width:9%;  " align="center" height="12"></td>
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
           <td style="width:24%; font-size: 11px;" align="center" height="12"><b><?php echo $row_datos_modcabecc['firma_1']; ?></b></td>
      <td style="width:9%;" align="center" height="12"></td>
    <td style="width:20%; font-size: 11px; " align="center" height="12"><b></b></td>
<td style="width:9%;  " align="center" height="12"></td>
  </tr>

</table>








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
        $html2pdf->Output("AlfNum_3er_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>