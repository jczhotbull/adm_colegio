<?php
error_reporting(0); //hide php errors
require '../../0 html2pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;


$i="1";

            $color0 =  '#DCDAD7';

            $color1 =  '#DCF6C0';

            $color1aa =  '#e2e9da';   // claro   
            $color1bb =  '#c9d3bd';   // oscuro

            $color2 =  '#F6EFC0';
           
            $color3 =  '#F6DDC0';
            $color3b = '#F4E7D9';

            $color4 =  '#B9AAA6';

            $color5 =  '#DBE2E8';   // azul claro claro   

            $color6 =  '#F8F7F7';// azul claro     ADD8E1

            $color7 =  '#EDEEEF';// azul claro ocuro

            $fechaactuaaal = date('d-m-Y');


ob_start();


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




// para el 1er lapso


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
                }
                ?>














<page backtop="6mm" backbottom="1mm" backleft="6mm" backright="1mm">


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




                 <td colspan="2"  align="center" ><?php echo $_POST["id_tituloxxx"]; ?> - <b><?php echo $_POST["id_tituloxxxb"]; ?></b></td>
                
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


echo $r_d_c_nM1_16_r_p; echo $espacio; // echo $parent_open; echo $r_d_c_nM1_16_r_p_co; echo $parent_close;
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


                &nbsp; <span style="font-size: 14px; "><b>Leyendas:</b></span><br>
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
 <th style="width:760px; height:20px;" BGCOLOR="#C8BBCF" align="left" >&nbsp; - Áreas y/o aspectos de aprendizaje a reforzar:</th>
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

                                     echo $firstnam_el; ?> <?php echo $firstCharacterlastnam_el; ?>. </b></td>
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
        $html2pdf->Output("Descrip_1er_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>