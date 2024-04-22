<?php

include("identificador.php");

error_reporting(0);

$nnn1 = $nnn['ci'];


$id_del_est = $_GET['id_e'];
$name_del_est = $_GET['name_e'];
$ape_del_est = $_GET['ape_e'];
$expe_del_est = $_GET['expe_e'];
$ci_del_est = $_GET['ci_est'];

$el_cicloXX = $_GET['ciclo'];
$el_gradoXX = $_GET['grado'];

$las_asignaturas = $_GET['las_asignn'];

$registro_notas = $_GET["id_reg_actual"];

$i = 1;

$porsign = '%';





include("../conectar.php");


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


$query_z_puntaje = "SELECT * FROM z_puntaje where pt_selecc = '1' LIMIT 1";

$datos_z_puntaje = mysqli_query($enlace, $query_z_puntaje) or die(mysqli_error());

$row_datos_z_puntaje = mysqli_fetch_array($datos_z_puntaje );

$la_mitad_es = $row_datos_z_puntaje['el_puntaje']/2;

$el_puntaje_completo_es = $row_datos_z_puntaje['el_puntaje'];

$el_puntaje_aprobatorio_aprox = $row_datos_z_puntaje['el_aproximado'];

$el_id_puntaje_es = $row_datos_z_puntaje['id_puntaje'];


mysqli_close($enlace);





include("../conectar.php");


$query_de_la_asignaturas = "SELECT * FROM asignaturas
                            Where id_asign = '$las_asignaturas'
                            
                            GROUP BY id_asign limit 1" ;

$datos_de_la_asignaturas = mysqli_query($enlace, $query_de_la_asignaturas) or die(mysqli_error());
$row_datos_de_la_asignaturas = mysqli_fetch_array($datos_de_la_asignaturas); 


$porcentaje_A1_L1_N1 = ($row_datos_de_la_asignaturas["A11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A1_L1_N2 = ($row_datos_de_la_asignaturas["A12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L1_N3 = ($row_datos_de_la_asignaturas["A13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L1_N4 = ($row_datos_de_la_asignaturas["A14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L1_N5 = ($row_datos_de_la_asignaturas["A15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L1_N6 = ($row_datos_de_la_asignaturas["A16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L1_N7 = ($row_datos_de_la_asignaturas["A17"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L2_N1 = ($row_datos_de_la_asignaturas["A21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L2_N2 = ($row_datos_de_la_asignaturas["A22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L2_N3 = ($row_datos_de_la_asignaturas["A23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L2_N4 = ($row_datos_de_la_asignaturas["A24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L2_N5 = ($row_datos_de_la_asignaturas["A25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L2_N6 = ($row_datos_de_la_asignaturas["A26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L2_N7 = ($row_datos_de_la_asignaturas["A27"] * $el_puntaje_completo_es)/100;
$porcentaje_A1_L3_N1 = ($row_datos_de_la_asignaturas["A31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L3_N2 = ($row_datos_de_la_asignaturas["A32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L3_N3 = ($row_datos_de_la_asignaturas["A33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L3_N4 = ($row_datos_de_la_asignaturas["A34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L3_N5 = ($row_datos_de_la_asignaturas["A35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L3_N6 = ($row_datos_de_la_asignaturas["A36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L3_N7 = ($row_datos_de_la_asignaturas["A37"] * $el_puntaje_completo_es)/100; 

$porcentaje_A2_L1_N1 = ($row_datos_de_la_asignaturas["B11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A2_L1_N2 = ($row_datos_de_la_asignaturas["B12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L1_N3 = ($row_datos_de_la_asignaturas["B13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L1_N4 = ($row_datos_de_la_asignaturas["B14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L1_N5 = ($row_datos_de_la_asignaturas["B15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L1_N6 = ($row_datos_de_la_asignaturas["B16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L1_N7 = ($row_datos_de_la_asignaturas["B17"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L2_N1 = ($row_datos_de_la_asignaturas["B21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L2_N2 = ($row_datos_de_la_asignaturas["B22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L2_N3 = ($row_datos_de_la_asignaturas["B23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L2_N4 = ($row_datos_de_la_asignaturas["B24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L2_N5 = ($row_datos_de_la_asignaturas["B25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L2_N6 = ($row_datos_de_la_asignaturas["B26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L2_N7 = ($row_datos_de_la_asignaturas["B27"] * $el_puntaje_completo_es)/100;
$porcentaje_A2_L3_N1 = ($row_datos_de_la_asignaturas["B31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L3_N2 = ($row_datos_de_la_asignaturas["B32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L3_N3 = ($row_datos_de_la_asignaturas["B33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L3_N4 = ($row_datos_de_la_asignaturas["B34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L3_N5 = ($row_datos_de_la_asignaturas["B35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L3_N6 = ($row_datos_de_la_asignaturas["B36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L3_N7 = ($row_datos_de_la_asignaturas["B37"] * $el_puntaje_completo_es)/100;

$porcentaje_A3_L1_N1 = ($row_datos_de_la_asignaturas["C11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A3_L1_N2 = ($row_datos_de_la_asignaturas["C12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L1_N3 = ($row_datos_de_la_asignaturas["C13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L1_N4 = ($row_datos_de_la_asignaturas["C14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L1_N5 = ($row_datos_de_la_asignaturas["C15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L1_N6 = ($row_datos_de_la_asignaturas["C16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L1_N7 = ($row_datos_de_la_asignaturas["C17"] * $el_puntaje_completo_es)/100;
$porcentaje_A3_L2_N1 = ($row_datos_de_la_asignaturas["C21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L2_N2 = ($row_datos_de_la_asignaturas["C22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L2_N3 = ($row_datos_de_la_asignaturas["C23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L2_N4 = ($row_datos_de_la_asignaturas["C24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L2_N5 = ($row_datos_de_la_asignaturas["C25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L2_N6 = ($row_datos_de_la_asignaturas["C26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L2_N7 = ($row_datos_de_la_asignaturas["C27"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L3_N1 = ($row_datos_de_la_asignaturas["C31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L3_N2 = ($row_datos_de_la_asignaturas["C32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L3_N3 = ($row_datos_de_la_asignaturas["C33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L3_N4 = ($row_datos_de_la_asignaturas["C34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L3_N5 = ($row_datos_de_la_asignaturas["C35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L3_N6 = ($row_datos_de_la_asignaturas["C36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L3_N7 = ($row_datos_de_la_asignaturas["C37"] * $el_puntaje_completo_es)/100;  

$porcentaje_A4_L1_N1 = ($row_datos_de_la_asignaturas["D11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A4_L1_N2 = ($row_datos_de_la_asignaturas["D12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L1_N3 = ($row_datos_de_la_asignaturas["D13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L1_N4 = ($row_datos_de_la_asignaturas["D14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L1_N5 = ($row_datos_de_la_asignaturas["D15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L1_N6 = ($row_datos_de_la_asignaturas["D16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L1_N7 = ($row_datos_de_la_asignaturas["D17"] * $el_puntaje_completo_es)/100;
$porcentaje_A4_L2_N1 = ($row_datos_de_la_asignaturas["D21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L2_N2 = ($row_datos_de_la_asignaturas["D22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L2_N3 = ($row_datos_de_la_asignaturas["D23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L2_N4 = ($row_datos_de_la_asignaturas["D24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L2_N5 = ($row_datos_de_la_asignaturas["D25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L2_N6 = ($row_datos_de_la_asignaturas["D26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L2_N7 = ($row_datos_de_la_asignaturas["D27"] * $el_puntaje_completo_es)/100;
$porcentaje_A4_L3_N1 = ($row_datos_de_la_asignaturas["D31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L3_N2 = ($row_datos_de_la_asignaturas["D32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L3_N3 = ($row_datos_de_la_asignaturas["D33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L3_N4 = ($row_datos_de_la_asignaturas["D34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L3_N5 = ($row_datos_de_la_asignaturas["D35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L3_N6 = ($row_datos_de_la_asignaturas["D36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L3_N7 = ($row_datos_de_la_asignaturas["D37"] * $el_puntaje_completo_es)/100; 

$porcentaje_A5_L1_N1 = ($row_datos_de_la_asignaturas["E11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A5_L1_N2 = ($row_datos_de_la_asignaturas["E12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L1_N3 = ($row_datos_de_la_asignaturas["E13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L1_N4 = ($row_datos_de_la_asignaturas["E14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L1_N5 = ($row_datos_de_la_asignaturas["E15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L1_N6 = ($row_datos_de_la_asignaturas["E16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L1_N7 = ($row_datos_de_la_asignaturas["E17"] * $el_puntaje_completo_es)/100;
$porcentaje_A5_L2_N1 = ($row_datos_de_la_asignaturas["E21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L2_N2 = ($row_datos_de_la_asignaturas["E22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L2_N3 = ($row_datos_de_la_asignaturas["E23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L2_N4 = ($row_datos_de_la_asignaturas["E24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L2_N5 = ($row_datos_de_la_asignaturas["E25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L2_N6 = ($row_datos_de_la_asignaturas["E26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L2_N7 = ($row_datos_de_la_asignaturas["E27"] * $el_puntaje_completo_es)/100;
$porcentaje_A5_L3_N1 = ($row_datos_de_la_asignaturas["E31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L3_N2 = ($row_datos_de_la_asignaturas["E32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L3_N3 = ($row_datos_de_la_asignaturas["E33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L3_N4 = ($row_datos_de_la_asignaturas["E34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L3_N5 = ($row_datos_de_la_asignaturas["E35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L3_N6 = ($row_datos_de_la_asignaturas["E36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L3_N7 = ($row_datos_de_la_asignaturas["E37"] * $el_puntaje_completo_es)/100; 


$porcentaje_A6_L1_N1 = ($row_datos_de_la_asignaturas["F11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A6_L1_N2 = ($row_datos_de_la_asignaturas["F12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L1_N3 = ($row_datos_de_la_asignaturas["F13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L1_N4 = ($row_datos_de_la_asignaturas["F14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L1_N5 = ($row_datos_de_la_asignaturas["F15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L1_N6 = ($row_datos_de_la_asignaturas["F16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L1_N7 = ($row_datos_de_la_asignaturas["F17"] * $el_puntaje_completo_es)/100;
$porcentaje_A6_L2_N1 = ($row_datos_de_la_asignaturas["F21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L2_N2 = ($row_datos_de_la_asignaturas["F22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L2_N3 = ($row_datos_de_la_asignaturas["F23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L2_N4 = ($row_datos_de_la_asignaturas["F24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L2_N5 = ($row_datos_de_la_asignaturas["F25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L2_N6 = ($row_datos_de_la_asignaturas["F26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L2_N7 = ($row_datos_de_la_asignaturas["F27"] * $el_puntaje_completo_es)/100;
$porcentaje_A6_L3_N1 = ($row_datos_de_la_asignaturas["F31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L3_N2 = ($row_datos_de_la_asignaturas["F32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L3_N3 = ($row_datos_de_la_asignaturas["F33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L3_N4 = ($row_datos_de_la_asignaturas["F34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L3_N5 = ($row_datos_de_la_asignaturas["F35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L3_N6 = ($row_datos_de_la_asignaturas["F36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L3_N7 = ($row_datos_de_la_asignaturas["F37"] * $el_puntaje_completo_es)/100; 

$porcentaje_A7_L1_N1 = ($row_datos_de_la_asignaturas["G11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A7_L1_N2 = ($row_datos_de_la_asignaturas["G12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L1_N3 = ($row_datos_de_la_asignaturas["G13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L1_N4 = ($row_datos_de_la_asignaturas["G14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L1_N5 = ($row_datos_de_la_asignaturas["G15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L1_N6 = ($row_datos_de_la_asignaturas["G16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L1_N7 = ($row_datos_de_la_asignaturas["G17"] * $el_puntaje_completo_es)/100;
$porcentaje_A7_L2_N1 = ($row_datos_de_la_asignaturas["G21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L2_N2 = ($row_datos_de_la_asignaturas["G22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L2_N3 = ($row_datos_de_la_asignaturas["G23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L2_N4 = ($row_datos_de_la_asignaturas["G24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L2_N5 = ($row_datos_de_la_asignaturas["G25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L2_N6 = ($row_datos_de_la_asignaturas["G26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L2_N7 = ($row_datos_de_la_asignaturas["G27"] * $el_puntaje_completo_es)/100;
$porcentaje_A7_L3_N1 = ($row_datos_de_la_asignaturas["G31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L3_N2 = ($row_datos_de_la_asignaturas["G32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L3_N3 = ($row_datos_de_la_asignaturas["G33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L3_N4 = ($row_datos_de_la_asignaturas["G34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L3_N5 = ($row_datos_de_la_asignaturas["G35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L3_N6 = ($row_datos_de_la_asignaturas["G36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L3_N7 = ($row_datos_de_la_asignaturas["G37"] * $el_puntaje_completo_es)/100; 

$porcentaje_A8_L1_N1 = ($row_datos_de_la_asignaturas["H11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A8_L1_N2 = ($row_datos_de_la_asignaturas["H12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L1_N3 = ($row_datos_de_la_asignaturas["H13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L1_N4 = ($row_datos_de_la_asignaturas["H14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L1_N5 = ($row_datos_de_la_asignaturas["H15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L1_N6 = ($row_datos_de_la_asignaturas["H16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L1_N7 = ($row_datos_de_la_asignaturas["H17"] * $el_puntaje_completo_es)/100;
$porcentaje_A8_L2_N1 = ($row_datos_de_la_asignaturas["H21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L2_N2 = ($row_datos_de_la_asignaturas["H22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L2_N3 = ($row_datos_de_la_asignaturas["H23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L2_N4 = ($row_datos_de_la_asignaturas["H24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L2_N5 = ($row_datos_de_la_asignaturas["H25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L2_N6 = ($row_datos_de_la_asignaturas["H26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L2_N7 = ($row_datos_de_la_asignaturas["H27"] * $el_puntaje_completo_es)/100;
$porcentaje_A8_L3_N1 = ($row_datos_de_la_asignaturas["H31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L3_N2 = ($row_datos_de_la_asignaturas["H32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L3_N3 = ($row_datos_de_la_asignaturas["H33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L3_N4 = ($row_datos_de_la_asignaturas["H34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L3_N5 = ($row_datos_de_la_asignaturas["H35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L3_N6 = ($row_datos_de_la_asignaturas["H36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L3_N7 = ($row_datos_de_la_asignaturas["H37"] * $el_puntaje_completo_es)/100;

$porcentaje_A9_L1_N1 = ($row_datos_de_la_asignaturas["I11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A9_L1_N2 = ($row_datos_de_la_asignaturas["I12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L1_N3 = ($row_datos_de_la_asignaturas["I13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L1_N4 = ($row_datos_de_la_asignaturas["I14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L1_N5 = ($row_datos_de_la_asignaturas["I15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L1_N6 = ($row_datos_de_la_asignaturas["I16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L1_N7 = ($row_datos_de_la_asignaturas["I17"] * $el_puntaje_completo_es)/100;
$porcentaje_A9_L2_N1 = ($row_datos_de_la_asignaturas["I21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L2_N2 = ($row_datos_de_la_asignaturas["I22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L2_N3 = ($row_datos_de_la_asignaturas["I23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L2_N4 = ($row_datos_de_la_asignaturas["I24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L2_N5 = ($row_datos_de_la_asignaturas["I25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L2_N6 = ($row_datos_de_la_asignaturas["I26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L2_N7 = ($row_datos_de_la_asignaturas["I27"] * $el_puntaje_completo_es)/100;
$porcentaje_A9_L3_N1 = ($row_datos_de_la_asignaturas["I31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L3_N2 = ($row_datos_de_la_asignaturas["I32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L3_N3 = ($row_datos_de_la_asignaturas["I33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L3_N4 = ($row_datos_de_la_asignaturas["I34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L3_N5 = ($row_datos_de_la_asignaturas["I35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L3_N6 = ($row_datos_de_la_asignaturas["I36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L3_N7 = ($row_datos_de_la_asignaturas["I37"] * $el_puntaje_completo_es)/100;

$porcentaje_A10_L1_N1 = ($row_datos_de_la_asignaturas["J11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A10_L1_N2 = ($row_datos_de_la_asignaturas["J12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L1_N3 = ($row_datos_de_la_asignaturas["J13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L1_N4 = ($row_datos_de_la_asignaturas["J14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L1_N5 = ($row_datos_de_la_asignaturas["J15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L1_N6 = ($row_datos_de_la_asignaturas["J16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L1_N7 = ($row_datos_de_la_asignaturas["J17"] * $el_puntaje_completo_es)/100;
$porcentaje_A10_L2_N1 = ($row_datos_de_la_asignaturas["J21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L2_N2 = ($row_datos_de_la_asignaturas["J22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L2_N3 = ($row_datos_de_la_asignaturas["J23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L2_N4 = ($row_datos_de_la_asignaturas["J24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L2_N5 = ($row_datos_de_la_asignaturas["J25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L2_N6 = ($row_datos_de_la_asignaturas["J26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L2_N7 = ($row_datos_de_la_asignaturas["J27"] * $el_puntaje_completo_es)/100;
$porcentaje_A10_L3_N1 = ($row_datos_de_la_asignaturas["J31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L3_N2 = ($row_datos_de_la_asignaturas["J32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L3_N3 = ($row_datos_de_la_asignaturas["J33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L3_N4 = ($row_datos_de_la_asignaturas["J34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L3_N5 = ($row_datos_de_la_asignaturas["J35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L3_N6 = ($row_datos_de_la_asignaturas["J36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L3_N7 = ($row_datos_de_la_asignaturas["J37"] * $el_puntaje_completo_es)/100; 

$porcentaje_A11_L1_N1 = ($row_datos_de_la_asignaturas["K11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A11_L1_N2 = ($row_datos_de_la_asignaturas["K12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L1_N3 = ($row_datos_de_la_asignaturas["K13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L1_N4 = ($row_datos_de_la_asignaturas["K14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L1_N5 = ($row_datos_de_la_asignaturas["K15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L1_N6 = ($row_datos_de_la_asignaturas["K16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L1_N7 = ($row_datos_de_la_asignaturas["K17"] * $el_puntaje_completo_es)/100;
$porcentaje_A11_L2_N1 = ($row_datos_de_la_asignaturas["K21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L2_N2 = ($row_datos_de_la_asignaturas["K22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L2_N3 = ($row_datos_de_la_asignaturas["K23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L2_N4 = ($row_datos_de_la_asignaturas["K24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L2_N5 = ($row_datos_de_la_asignaturas["K25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L2_N6 = ($row_datos_de_la_asignaturas["K26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L2_N7 = ($row_datos_de_la_asignaturas["K27"] * $el_puntaje_completo_es)/100;
$porcentaje_A11_L3_N1 = ($row_datos_de_la_asignaturas["K31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L3_N2 = ($row_datos_de_la_asignaturas["K32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L3_N3 = ($row_datos_de_la_asignaturas["K33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L3_N4 = ($row_datos_de_la_asignaturas["K34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L3_N5 = ($row_datos_de_la_asignaturas["K35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L3_N6 = ($row_datos_de_la_asignaturas["K36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L3_N7 = ($row_datos_de_la_asignaturas["K37"] * $el_puntaje_completo_es)/100;

$porcentaje_A12_L1_N1 = ($row_datos_de_la_asignaturas["L11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A12_L1_N2 = ($row_datos_de_la_asignaturas["L12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L1_N3 = ($row_datos_de_la_asignaturas["L13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L1_N4 = ($row_datos_de_la_asignaturas["L14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L1_N5 = ($row_datos_de_la_asignaturas["L15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L1_N6 = ($row_datos_de_la_asignaturas["L16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L1_N7 = ($row_datos_de_la_asignaturas["L17"] * $el_puntaje_completo_es)/100;
$porcentaje_A12_L2_N1 = ($row_datos_de_la_asignaturas["L21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L2_N2 = ($row_datos_de_la_asignaturas["L22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L2_N3 = ($row_datos_de_la_asignaturas["L23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L2_N4 = ($row_datos_de_la_asignaturas["L24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L2_N5 = ($row_datos_de_la_asignaturas["L25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L2_N6 = ($row_datos_de_la_asignaturas["L26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L2_N7 = ($row_datos_de_la_asignaturas["L27"] * $el_puntaje_completo_es)/100;
$porcentaje_A12_L3_N1 = ($row_datos_de_la_asignaturas["L31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L3_N2 = ($row_datos_de_la_asignaturas["L32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L3_N3 = ($row_datos_de_la_asignaturas["L33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L3_N4 = ($row_datos_de_la_asignaturas["L34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L3_N5 = ($row_datos_de_la_asignaturas["L35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L3_N6 = ($row_datos_de_la_asignaturas["L36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L3_N7 = ($row_datos_de_la_asignaturas["L37"] * $el_puntaje_completo_es)/100; 



$porcentaje_A13_L1_N1 = ($row_datos_de_la_asignaturas["M11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A13_L1_N2 = ($row_datos_de_la_asignaturas["M12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L1_N3 = ($row_datos_de_la_asignaturas["M13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L1_N4 = ($row_datos_de_la_asignaturas["M14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L1_N5 = ($row_datos_de_la_asignaturas["M15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L1_N6 = ($row_datos_de_la_asignaturas["M16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L1_N7 = ($row_datos_de_la_asignaturas["M17"] * $el_puntaje_completo_es)/100;
$porcentaje_A13_L2_N1 = ($row_datos_de_la_asignaturas["M21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L2_N2 = ($row_datos_de_la_asignaturas["M22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L2_N3 = ($row_datos_de_la_asignaturas["M23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L2_N4 = ($row_datos_de_la_asignaturas["M24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L2_N5 = ($row_datos_de_la_asignaturas["M25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L2_N6 = ($row_datos_de_la_asignaturas["M26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L2_N7 = ($row_datos_de_la_asignaturas["M27"] * $el_puntaje_completo_es)/100;
$porcentaje_A13_L3_N1 = ($row_datos_de_la_asignaturas["M31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L3_N2 = ($row_datos_de_la_asignaturas["M32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L3_N3 = ($row_datos_de_la_asignaturas["M33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L3_N4 = ($row_datos_de_la_asignaturas["M34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L3_N5 = ($row_datos_de_la_asignaturas["M35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L3_N6 = ($row_datos_de_la_asignaturas["M36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L3_N7 = ($row_datos_de_la_asignaturas["M37"] * $el_puntaje_completo_es)/100; 



$porcentaje_A14_L1_N1 = ($row_datos_de_la_asignaturas["N11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A14_L1_N2 = ($row_datos_de_la_asignaturas["N12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L1_N3 = ($row_datos_de_la_asignaturas["N13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L1_N4 = ($row_datos_de_la_asignaturas["N14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L1_N5 = ($row_datos_de_la_asignaturas["N15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L1_N6 = ($row_datos_de_la_asignaturas["N16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L1_N7 = ($row_datos_de_la_asignaturas["N17"] * $el_puntaje_completo_es)/100;
$porcentaje_A14_L2_N1 = ($row_datos_de_la_asignaturas["N21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L2_N2 = ($row_datos_de_la_asignaturas["N22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L2_N3 = ($row_datos_de_la_asignaturas["N23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L2_N4 = ($row_datos_de_la_asignaturas["N24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L2_N5 = ($row_datos_de_la_asignaturas["N25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L2_N6 = ($row_datos_de_la_asignaturas["N26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L2_N7 = ($row_datos_de_la_asignaturas["N27"] * $el_puntaje_completo_es)/100;
$porcentaje_A14_L3_N1 = ($row_datos_de_la_asignaturas["N31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L3_N2 = ($row_datos_de_la_asignaturas["N32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L3_N3 = ($row_datos_de_la_asignaturas["N33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L3_N4 = ($row_datos_de_la_asignaturas["N34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L3_N5 = ($row_datos_de_la_asignaturas["N35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L3_N6 = ($row_datos_de_la_asignaturas["N36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L3_N7 = ($row_datos_de_la_asignaturas["N37"] * $el_puntaje_completo_es)/100; 



$promedio_L1_A1 = 0.00000000001;
$promedio_L2_A1 = 0.00000000001;
$promedio_L3_A1 = 0.00000000001;




$query_notas_A1 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 1
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A1 = mysqli_query($enlace, $query_notas_A1) or die(mysqli_error());
$row_datos_control_notas_A1 = mysqli_fetch_array($datos_control_notas_A1); 




$nota_A1_L1_N1 = ($row_datos_control_notas_A1["nt_11"] * $porcentaje_A1_L1_N1)/$el_puntaje_completo_es;
$nota_A1_L1_N2 = ($row_datos_control_notas_A1["nt_12"] * $porcentaje_A1_L1_N2)/$el_puntaje_completo_es;
$nota_A1_L1_N3 = ($row_datos_control_notas_A1["nt_13"] * $porcentaje_A1_L1_N3)/$el_puntaje_completo_es;
$nota_A1_L1_N4 = ($row_datos_control_notas_A1["nt_14"] * $porcentaje_A1_L1_N4)/$el_puntaje_completo_es;
$nota_A1_L1_N5 = ($row_datos_control_notas_A1["nt_15"] * $porcentaje_A1_L1_N5)/$el_puntaje_completo_es;
$nota_A1_L1_N6 = ($row_datos_control_notas_A1["nt_16"] * $porcentaje_A1_L1_N6)/$el_puntaje_completo_es;
$nota_A1_L1_N7 = ($row_datos_control_notas_A1["nt_17"] * $porcentaje_A1_L1_N7)/$el_puntaje_completo_es;
$notaAu_A1_L1 = $row_datos_control_notas_A1["nt_Au1"];

$nota_final_A1_L1 = $nota_A1_L1_N1 + $nota_A1_L1_N2 + $nota_A1_L1_N3 + $nota_A1_L1_N4 + $nota_A1_L1_N5 + $nota_A1_L1_N6 + $nota_A1_L1_N7 + $notaAu_A1_L1;


$nota_final_A1_L1_redon1 =number_format($nota_final_A1_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A1_L1_redon =number_format($nota_final_A1_L1_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto




$nota_A1_L2_N1 = ($row_datos_control_notas_A1["nt_21"] * $porcentaje_A1_L2_N1)/$el_puntaje_completo_es;
$nota_A1_L2_N2 = ($row_datos_control_notas_A1["nt_22"] * $porcentaje_A1_L2_N2)/$el_puntaje_completo_es;
$nota_A1_L2_N3 = ($row_datos_control_notas_A1["nt_23"] * $porcentaje_A1_L2_N3)/$el_puntaje_completo_es;
$nota_A1_L2_N4 = ($row_datos_control_notas_A1["nt_24"] * $porcentaje_A1_L2_N4)/$el_puntaje_completo_es;
$nota_A1_L2_N5 = ($row_datos_control_notas_A1["nt_25"] * $porcentaje_A1_L2_N5)/$el_puntaje_completo_es;
$nota_A1_L2_N6 = ($row_datos_control_notas_A1["nt_26"] * $porcentaje_A1_L2_N6)/$el_puntaje_completo_es;
$nota_A1_L2_N7 = ($row_datos_control_notas_A1["nt_27"] * $porcentaje_A1_L2_N7)/$el_puntaje_completo_es;
$notaAu_A1_L2 = $row_datos_control_notas_A1["nt_Au2"];

$nota_final_A1_L2 = $nota_A1_L2_N1 + $nota_A1_L2_N2 + $nota_A1_L2_N3 + $nota_A1_L2_N4 + $nota_A1_L2_N5 + $nota_A1_L2_N6 + $nota_A1_L2_N7 + $notaAu_A1_L2;


$nota_final_A1_L2_redon1 =number_format($nota_final_A1_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A1_L2_redon =number_format($nota_final_A1_L2_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$nota_A1_L3_N1 = ($row_datos_control_notas_A1["nt_31"] * $porcentaje_A1_L3_N1)/$el_puntaje_completo_es;
$nota_A1_L3_N2 = ($row_datos_control_notas_A1["nt_32"] * $porcentaje_A1_L3_N2)/$el_puntaje_completo_es;
$nota_A1_L3_N3 = ($row_datos_control_notas_A1["nt_33"] * $porcentaje_A1_L3_N3)/$el_puntaje_completo_es;
$nota_A1_L3_N4 = ($row_datos_control_notas_A1["nt_34"] * $porcentaje_A1_L3_N4)/$el_puntaje_completo_es;
$nota_A1_L3_N5 = ($row_datos_control_notas_A1["nt_35"] * $porcentaje_A1_L3_N5)/$el_puntaje_completo_es;
$nota_A1_L3_N6 = ($row_datos_control_notas_A1["nt_36"] * $porcentaje_A1_L3_N6)/$el_puntaje_completo_es;
$nota_A1_L3_N7 = ($row_datos_control_notas_A1["nt_37"] * $porcentaje_A1_L3_N7)/$el_puntaje_completo_es;
$notaAu_A1_L3 = $row_datos_control_notas_A1["nt_Au3"];

$nota_final_A1_L3 = $nota_A1_L3_N1 + $nota_A1_L3_N2 + $nota_A1_L3_N3 + $nota_A1_L3_N4 + $nota_A1_L3_N5 + $nota_A1_L3_N6 + $nota_A1_L3_N7 + $notaAu_A1_L3;

$nota_final_A1_L3_redon1 =number_format($nota_final_A1_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A1_L3_redon =number_format($nota_final_A1_L3_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$notaAu_Final_A1 = $row_datos_control_notas_A1["nt_AuF"];









$query_notas_A2 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 2
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A2 = mysqli_query($enlace, $query_notas_A2) or die(mysqli_error());
$row_datos_control_notas_A2 = mysqli_fetch_array($datos_control_notas_A2); 




$nota_A2_L1_N1 = ($row_datos_control_notas_A2["nt_11"] * $porcentaje_A2_L1_N1)/$el_puntaje_completo_es;
$nota_A2_L1_N2 = ($row_datos_control_notas_A2["nt_12"] * $porcentaje_A2_L1_N2)/$el_puntaje_completo_es;
$nota_A2_L1_N3 = ($row_datos_control_notas_A2["nt_13"] * $porcentaje_A2_L1_N3)/$el_puntaje_completo_es;
$nota_A2_L1_N4 = ($row_datos_control_notas_A2["nt_14"] * $porcentaje_A2_L1_N4)/$el_puntaje_completo_es;
$nota_A2_L1_N5 = ($row_datos_control_notas_A2["nt_15"] * $porcentaje_A2_L1_N5)/$el_puntaje_completo_es;
$nota_A2_L1_N6 = ($row_datos_control_notas_A2["nt_16"] * $porcentaje_A2_L1_N6)/$el_puntaje_completo_es;
$nota_A2_L1_N7 = ($row_datos_control_notas_A2["nt_17"] * $porcentaje_A2_L1_N7)/$el_puntaje_completo_es;
$notaAu_A2_L1 = $row_datos_control_notas_A2["nt_Au1"];

$nota_final_A2_L1 = $nota_A2_L1_N1 + $nota_A2_L1_N2 + $nota_A2_L1_N3 + $nota_A2_L1_N4 + $nota_A2_L1_N5 + $nota_A2_L1_N6 + $nota_A2_L1_N7 + $notaAu_A2_L1;

$nota_final_A2_L1_redon1 =number_format($nota_final_A2_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A2_L1_redon =number_format($nota_final_A2_L1_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$nota_A2_L2_N1 = ($row_datos_control_notas_A2["nt_21"] * $porcentaje_A2_L2_N1)/$el_puntaje_completo_es;
$nota_A2_L2_N2 = ($row_datos_control_notas_A2["nt_22"] * $porcentaje_A2_L2_N2)/$el_puntaje_completo_es;
$nota_A2_L2_N3 = ($row_datos_control_notas_A2["nt_23"] * $porcentaje_A2_L2_N3)/$el_puntaje_completo_es;
$nota_A2_L2_N4 = ($row_datos_control_notas_A2["nt_24"] * $porcentaje_A2_L2_N4)/$el_puntaje_completo_es;
$nota_A2_L2_N5 = ($row_datos_control_notas_A2["nt_25"] * $porcentaje_A2_L2_N5)/$el_puntaje_completo_es;
$nota_A2_L2_N6 = ($row_datos_control_notas_A2["nt_26"] * $porcentaje_A2_L2_N6)/$el_puntaje_completo_es;
$nota_A2_L2_N7 = ($row_datos_control_notas_A2["nt_27"] * $porcentaje_A2_L2_N7)/$el_puntaje_completo_es;
$notaAu_A2_L2 = $row_datos_control_notas_A2["nt_Au2"];

$nota_final_A2_L2 = $nota_A2_L2_N1 + $nota_A2_L2_N2 + $nota_A2_L2_N3 + $nota_A2_L2_N4 + $nota_A2_L2_N5 + $nota_A2_L2_N6 + $nota_A2_L2_N7 + $notaAu_A2_L2;

$nota_final_A2_L2_redon1 =number_format($nota_final_A2_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A2_L2_redon =number_format($nota_final_A2_L2_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$nota_A2_L3_N1 = ($row_datos_control_notas_A2["nt_31"] * $porcentaje_A2_L3_N1)/$el_puntaje_completo_es;
$nota_A2_L3_N2 = ($row_datos_control_notas_A2["nt_32"] * $porcentaje_A2_L3_N2)/$el_puntaje_completo_es;
$nota_A2_L3_N3 = ($row_datos_control_notas_A2["nt_33"] * $porcentaje_A2_L3_N3)/$el_puntaje_completo_es;
$nota_A2_L3_N4 = ($row_datos_control_notas_A2["nt_34"] * $porcentaje_A2_L3_N4)/$el_puntaje_completo_es;
$nota_A2_L3_N5 = ($row_datos_control_notas_A2["nt_35"] * $porcentaje_A2_L3_N5)/$el_puntaje_completo_es;
$nota_A2_L3_N6 = ($row_datos_control_notas_A2["nt_36"] * $porcentaje_A2_L3_N6)/$el_puntaje_completo_es;
$nota_A2_L3_N7 = ($row_datos_control_notas_A2["nt_37"] * $porcentaje_A2_L3_N7)/$el_puntaje_completo_es;
$notaAu_A2_L3 = $row_datos_control_notas_A2["nt_Au3"];

$nota_final_A2_L3 = $nota_A2_L3_N1 + $nota_A2_L3_N2 + $nota_A2_L3_N3 + $nota_A2_L3_N4 + $nota_A2_L3_N5 + $nota_A2_L3_N6 + $nota_A2_L3_N7 + $notaAu_A2_L3;
$nota_final_A2_L3_redon1 =number_format($nota_final_A2_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A2_L3_redon =number_format($nota_final_A2_L3_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$notaAu_Final_A2 = $row_datos_control_notas_A2["nt_AuF"];







$query_notas_A3 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 3
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A3 = mysqli_query($enlace, $query_notas_A3) or die(mysqli_error());
$row_datos_control_notas_A3 = mysqli_fetch_array($datos_control_notas_A3); 




$nota_A3_L1_N1 = ($row_datos_control_notas_A3["nt_11"] * $porcentaje_A3_L1_N1)/$el_puntaje_completo_es;
$nota_A3_L1_N2 = ($row_datos_control_notas_A3["nt_12"] * $porcentaje_A3_L1_N2)/$el_puntaje_completo_es;
$nota_A3_L1_N3 = ($row_datos_control_notas_A3["nt_13"] * $porcentaje_A3_L1_N3)/$el_puntaje_completo_es;
$nota_A3_L1_N4 = ($row_datos_control_notas_A3["nt_14"] * $porcentaje_A3_L1_N4)/$el_puntaje_completo_es;
$nota_A3_L1_N5 = ($row_datos_control_notas_A3["nt_15"] * $porcentaje_A3_L1_N5)/$el_puntaje_completo_es;
$nota_A3_L1_N6 = ($row_datos_control_notas_A3["nt_16"] * $porcentaje_A3_L1_N6)/$el_puntaje_completo_es;
$nota_A3_L1_N7 = ($row_datos_control_notas_A3["nt_17"] * $porcentaje_A3_L1_N7)/$el_puntaje_completo_es;
$notaAu_A3_L1 = $row_datos_control_notas_A3["nt_Au1"];

$nota_final_A3_L1 = $nota_A3_L1_N1 + $nota_A3_L1_N2 + $nota_A3_L1_N3 + $nota_A3_L1_N4 + $nota_A3_L1_N5 + $nota_A3_L1_N6 + $nota_A3_L1_N7 + $notaAu_A3_L1;
$nota_final_A3_L1_redon1 =number_format($nota_final_A3_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A3_L1_redon =number_format($nota_final_A3_L1_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$nota_A3_L2_N1 = ($row_datos_control_notas_A3["nt_21"] * $porcentaje_A3_L2_N1)/$el_puntaje_completo_es;
$nota_A3_L2_N2 = ($row_datos_control_notas_A3["nt_22"] * $porcentaje_A3_L2_N2)/$el_puntaje_completo_es;
$nota_A3_L2_N3 = ($row_datos_control_notas_A3["nt_23"] * $porcentaje_A3_L2_N3)/$el_puntaje_completo_es;
$nota_A3_L2_N4 = ($row_datos_control_notas_A3["nt_24"] * $porcentaje_A3_L2_N4)/$el_puntaje_completo_es;
$nota_A3_L2_N5 = ($row_datos_control_notas_A3["nt_25"] * $porcentaje_A3_L2_N5)/$el_puntaje_completo_es;
$nota_A3_L2_N6 = ($row_datos_control_notas_A3["nt_26"] * $porcentaje_A3_L2_N6)/$el_puntaje_completo_es;
$nota_A3_L2_N7 = ($row_datos_control_notas_A3["nt_27"] * $porcentaje_A3_L2_N7)/$el_puntaje_completo_es;
$notaAu_A3_L2 = $row_datos_control_notas_A3["nt_Au2"];

$nota_final_A3_L2 = $nota_A3_L2_N1 + $nota_A3_L2_N2 + $nota_A3_L2_N3 + $nota_A3_L2_N4 + $nota_A3_L2_N5 + $nota_A3_L2_N6 + $nota_A3_L2_N7 + $notaAu_A3_L2;
$nota_final_A3_L2_redon1 =number_format($nota_final_A3_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A3_L2_redon =number_format($nota_final_A3_L2_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$nota_A3_L3_N1 = ($row_datos_control_notas_A3["nt_31"] * $porcentaje_A3_L3_N1)/$el_puntaje_completo_es;
$nota_A3_L3_N2 = ($row_datos_control_notas_A3["nt_32"] * $porcentaje_A3_L3_N2)/$el_puntaje_completo_es;
$nota_A3_L3_N3 = ($row_datos_control_notas_A3["nt_33"] * $porcentaje_A3_L3_N3)/$el_puntaje_completo_es;
$nota_A3_L3_N4 = ($row_datos_control_notas_A3["nt_34"] * $porcentaje_A3_L3_N4)/$el_puntaje_completo_es;
$nota_A3_L3_N5 = ($row_datos_control_notas_A3["nt_35"] * $porcentaje_A3_L3_N5)/$el_puntaje_completo_es;
$nota_A3_L3_N6 = ($row_datos_control_notas_A3["nt_36"] * $porcentaje_A3_L3_N6)/$el_puntaje_completo_es;
$nota_A3_L3_N7 = ($row_datos_control_notas_A3["nt_37"] * $porcentaje_A3_L3_N7)/$el_puntaje_completo_es;
$notaAu_A3_L3 = $row_datos_control_notas_A3["nt_Au3"];

$nota_final_A3_L3 = $nota_A3_L3_N1 + $nota_A3_L3_N2 + $nota_A3_L3_N3 + $nota_A3_L3_N4 + $nota_A3_L3_N5 + $nota_A3_L3_N6 + $nota_A3_L3_N7 + $notaAu_A3_L3;
$nota_final_A3_L3_redon1 =number_format($nota_final_A3_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A3_L3_redon =number_format($nota_final_A3_L3_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$notaAu_Final_A3 = $row_datos_control_notas_A3["nt_AuF"];







$query_notas_A4 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 4
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A4 = mysqli_query($enlace, $query_notas_A4) or die(mysqli_error());
$row_datos_control_notas_A4 = mysqli_fetch_array($datos_control_notas_A4); 




$nota_A4_L1_N1 = ($row_datos_control_notas_A4["nt_11"] * $porcentaje_A4_L1_N1)/$el_puntaje_completo_es;
$nota_A4_L1_N2 = ($row_datos_control_notas_A4["nt_12"] * $porcentaje_A4_L1_N2)/$el_puntaje_completo_es;
$nota_A4_L1_N3 = ($row_datos_control_notas_A4["nt_13"] * $porcentaje_A4_L1_N3)/$el_puntaje_completo_es;
$nota_A4_L1_N4 = ($row_datos_control_notas_A4["nt_14"] * $porcentaje_A4_L1_N4)/$el_puntaje_completo_es;
$nota_A4_L1_N5 = ($row_datos_control_notas_A4["nt_15"] * $porcentaje_A4_L1_N5)/$el_puntaje_completo_es;
$nota_A4_L1_N6 = ($row_datos_control_notas_A4["nt_16"] * $porcentaje_A4_L1_N6)/$el_puntaje_completo_es;
$nota_A4_L1_N7 = ($row_datos_control_notas_A4["nt_17"] * $porcentaje_A4_L1_N7)/$el_puntaje_completo_es;
$notaAu_A4_L1 = $row_datos_control_notas_A4["nt_Au1"];

$nota_final_A4_L1 = $nota_A4_L1_N1 + $nota_A4_L1_N2 + $nota_A4_L1_N3 + $nota_A4_L1_N4 + $nota_A4_L1_N5 + $nota_A4_L1_N6 + $nota_A4_L1_N7 + $notaAu_A4_L1;
$nota_final_A4_L1_redon1 =number_format($nota_final_A4_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A4_L1_redon =number_format($nota_final_A4_L1_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$nota_A4_L2_N1 = ($row_datos_control_notas_A4["nt_21"] * $porcentaje_A4_L2_N1)/$el_puntaje_completo_es;
$nota_A4_L2_N2 = ($row_datos_control_notas_A4["nt_22"] * $porcentaje_A4_L2_N2)/$el_puntaje_completo_es;
$nota_A4_L2_N3 = ($row_datos_control_notas_A4["nt_23"] * $porcentaje_A4_L2_N3)/$el_puntaje_completo_es;
$nota_A4_L2_N4 = ($row_datos_control_notas_A4["nt_24"] * $porcentaje_A4_L2_N4)/$el_puntaje_completo_es;
$nota_A4_L2_N5 = ($row_datos_control_notas_A4["nt_25"] * $porcentaje_A4_L2_N5)/$el_puntaje_completo_es;
$nota_A4_L2_N6 = ($row_datos_control_notas_A4["nt_26"] * $porcentaje_A4_L2_N6)/$el_puntaje_completo_es;
$nota_A4_L2_N7 = ($row_datos_control_notas_A4["nt_27"] * $porcentaje_A4_L2_N7)/$el_puntaje_completo_es;
$notaAu_A4_L2 = $row_datos_control_notas_A4["nt_Au2"];

$nota_final_A4_L2 = $nota_A4_L2_N1 + $nota_A4_L2_N2 + $nota_A4_L2_N3 + $nota_A4_L2_N4 + $nota_A4_L2_N5 + $nota_A4_L2_N6 + $nota_A4_L2_N7 + $notaAu_A4_L2;
$nota_final_A4_L2_redon1 =number_format($nota_final_A4_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A4_L2_redon =number_format($nota_final_A4_L2_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$nota_A4_L3_N1 = ($row_datos_control_notas_A4["nt_31"] * $porcentaje_A4_L3_N1)/$el_puntaje_completo_es;
$nota_A4_L3_N2 = ($row_datos_control_notas_A4["nt_32"] * $porcentaje_A4_L3_N2)/$el_puntaje_completo_es;
$nota_A4_L3_N3 = ($row_datos_control_notas_A4["nt_33"] * $porcentaje_A4_L3_N3)/$el_puntaje_completo_es;
$nota_A4_L3_N4 = ($row_datos_control_notas_A4["nt_34"] * $porcentaje_A4_L3_N4)/$el_puntaje_completo_es;
$nota_A4_L3_N5 = ($row_datos_control_notas_A4["nt_35"] * $porcentaje_A4_L3_N5)/$el_puntaje_completo_es;
$nota_A4_L3_N6 = ($row_datos_control_notas_A4["nt_36"] * $porcentaje_A4_L3_N6)/$el_puntaje_completo_es;
$nota_A4_L3_N7 = ($row_datos_control_notas_A4["nt_37"] * $porcentaje_A4_L3_N7)/$el_puntaje_completo_es;
$notaAu_A4_L3 = $row_datos_control_notas_A4["nt_Au3"];

$nota_final_A4_L3 = $nota_A4_L3_N1 + $nota_A4_L3_N2 + $nota_A4_L3_N3 + $nota_A4_L3_N4 + $nota_A4_L3_N5 + $nota_A4_L3_N6 + $nota_A4_L3_N7 + $notaAu_A4_L3;
$nota_final_A4_L3_redon1 =number_format($nota_final_A4_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A4_L3_redon =number_format($nota_final_A4_L3_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$notaAu_Final_A4 = $row_datos_control_notas_A4["nt_AuF"];







$query_notas_A5 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 5
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A5 = mysqli_query($enlace, $query_notas_A5) or die(mysqli_error());
$row_datos_control_notas_A5 = mysqli_fetch_array($datos_control_notas_A5); 




$nota_A5_L1_N1 = ($row_datos_control_notas_A5["nt_11"] * $porcentaje_A5_L1_N1)/$el_puntaje_completo_es;
$nota_A5_L1_N2 = ($row_datos_control_notas_A5["nt_12"] * $porcentaje_A5_L1_N2)/$el_puntaje_completo_es;
$nota_A5_L1_N3 = ($row_datos_control_notas_A5["nt_13"] * $porcentaje_A5_L1_N3)/$el_puntaje_completo_es;
$nota_A5_L1_N4 = ($row_datos_control_notas_A5["nt_14"] * $porcentaje_A5_L1_N4)/$el_puntaje_completo_es;
$nota_A5_L1_N5 = ($row_datos_control_notas_A5["nt_15"] * $porcentaje_A5_L1_N5)/$el_puntaje_completo_es;
$nota_A5_L1_N6 = ($row_datos_control_notas_A5["nt_16"] * $porcentaje_A5_L1_N6)/$el_puntaje_completo_es;
$nota_A5_L1_N7 = ($row_datos_control_notas_A5["nt_17"] * $porcentaje_A5_L1_N7)/$el_puntaje_completo_es;
$notaAu_A5_L1 = $row_datos_control_notas_A5["nt_Au1"];

$nota_final_A5_L1 = $nota_A5_L1_N1 + $nota_A5_L1_N2 + $nota_A5_L1_N3 + $nota_A5_L1_N4 + $nota_A5_L1_N5 + $nota_A5_L1_N6 + $nota_A5_L1_N7 + $notaAu_A5_L1;
$nota_final_A5_L1_redon1 =number_format($nota_final_A5_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A5_L1_redon =number_format($nota_final_A5_L1_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$nota_A5_L2_N1 = ($row_datos_control_notas_A5["nt_21"] * $porcentaje_A5_L2_N1)/$el_puntaje_completo_es;
$nota_A5_L2_N2 = ($row_datos_control_notas_A5["nt_22"] * $porcentaje_A5_L2_N2)/$el_puntaje_completo_es;
$nota_A5_L2_N3 = ($row_datos_control_notas_A5["nt_23"] * $porcentaje_A5_L2_N3)/$el_puntaje_completo_es;
$nota_A5_L2_N4 = ($row_datos_control_notas_A5["nt_24"] * $porcentaje_A5_L2_N4)/$el_puntaje_completo_es;
$nota_A5_L2_N5 = ($row_datos_control_notas_A5["nt_25"] * $porcentaje_A5_L2_N5)/$el_puntaje_completo_es;
$nota_A5_L2_N6 = ($row_datos_control_notas_A5["nt_26"] * $porcentaje_A5_L2_N6)/$el_puntaje_completo_es;
$nota_A5_L2_N7 = ($row_datos_control_notas_A5["nt_27"] * $porcentaje_A5_L2_N7)/$el_puntaje_completo_es;
$notaAu_A5_L2 = $row_datos_control_notas_A5["nt_Au2"];

$nota_final_A5_L2 = $nota_A5_L2_N1 + $nota_A5_L2_N2 + $nota_A5_L2_N3 + $nota_A5_L2_N4 + $nota_A5_L2_N5 + $nota_A5_L2_N6 + $nota_A5_L2_N7 + $notaAu_A5_L2;

$nota_final_A5_L2_redon1 =number_format($nota_final_A5_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A5_L2_redon =number_format($nota_final_A5_L2_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$nota_A5_L3_N1 = ($row_datos_control_notas_A5["nt_31"] * $porcentaje_A5_L3_N1)/$el_puntaje_completo_es;
$nota_A5_L3_N2 = ($row_datos_control_notas_A5["nt_32"] * $porcentaje_A5_L3_N2)/$el_puntaje_completo_es;
$nota_A5_L3_N3 = ($row_datos_control_notas_A5["nt_33"] * $porcentaje_A5_L3_N3)/$el_puntaje_completo_es;
$nota_A5_L3_N4 = ($row_datos_control_notas_A5["nt_34"] * $porcentaje_A5_L3_N4)/$el_puntaje_completo_es;
$nota_A5_L3_N5 = ($row_datos_control_notas_A5["nt_35"] * $porcentaje_A5_L3_N5)/$el_puntaje_completo_es;
$nota_A5_L3_N6 = ($row_datos_control_notas_A5["nt_36"] * $porcentaje_A5_L3_N6)/$el_puntaje_completo_es;
$nota_A5_L3_N7 = ($row_datos_control_notas_A5["nt_37"] * $porcentaje_A5_L3_N7)/$el_puntaje_completo_es;
$notaAu_A5_L3 = $row_datos_control_notas_A5["nt_Au3"];

$nota_final_A5_L3 = $nota_A5_L3_N1 + $nota_A5_L3_N2 + $nota_A5_L3_N3 + $nota_A5_L3_N4 + $nota_A5_L3_N5 + $nota_A5_L3_N6 + $nota_A5_L3_N7 + $notaAu_A5_L3;
$nota_final_A5_L3_redon1 =number_format($nota_final_A5_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A5_L3_redon =number_format($nota_final_A5_L3_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$notaAu_Final_A5 = $row_datos_control_notas_A5["nt_AuF"];







$query_notas_A6 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 6
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A6 = mysqli_query($enlace, $query_notas_A6) or die(mysqli_error());
$row_datos_control_notas_A6 = mysqli_fetch_array($datos_control_notas_A6); 




$nota_A6_L1_N1 = ($row_datos_control_notas_A6["nt_11"] * $porcentaje_A6_L1_N1)/$el_puntaje_completo_es;
$nota_A6_L1_N2 = ($row_datos_control_notas_A6["nt_12"] * $porcentaje_A6_L1_N2)/$el_puntaje_completo_es;
$nota_A6_L1_N3 = ($row_datos_control_notas_A6["nt_13"] * $porcentaje_A6_L1_N3)/$el_puntaje_completo_es;
$nota_A6_L1_N4 = ($row_datos_control_notas_A6["nt_14"] * $porcentaje_A6_L1_N4)/$el_puntaje_completo_es;
$nota_A6_L1_N5 = ($row_datos_control_notas_A6["nt_15"] * $porcentaje_A6_L1_N5)/$el_puntaje_completo_es;
$nota_A6_L1_N6 = ($row_datos_control_notas_A6["nt_16"] * $porcentaje_A6_L1_N6)/$el_puntaje_completo_es;
$nota_A6_L1_N7 = ($row_datos_control_notas_A6["nt_17"] * $porcentaje_A6_L1_N7)/$el_puntaje_completo_es;
$notaAu_A6_L1 = $row_datos_control_notas_A6["nt_Au1"];

$nota_final_A6_L1 = $nota_A6_L1_N1 + $nota_A6_L1_N2 + $nota_A6_L1_N3 + $nota_A6_L1_N4 + $nota_A6_L1_N5 + $nota_A6_L1_N6 + $nota_A6_L1_N7 + $notaAu_A6_L1;
$nota_final_A6_L1_redon1 =number_format($nota_final_A6_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A6_L1_redon =number_format($nota_final_A6_L1_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$nota_A6_L2_N1 = ($row_datos_control_notas_A6["nt_21"] * $porcentaje_A6_L2_N1)/$el_puntaje_completo_es;
$nota_A6_L2_N2 = ($row_datos_control_notas_A6["nt_22"] * $porcentaje_A6_L2_N2)/$el_puntaje_completo_es;
$nota_A6_L2_N3 = ($row_datos_control_notas_A6["nt_23"] * $porcentaje_A6_L2_N3)/$el_puntaje_completo_es;
$nota_A6_L2_N4 = ($row_datos_control_notas_A6["nt_24"] * $porcentaje_A6_L2_N4)/$el_puntaje_completo_es;
$nota_A6_L2_N5 = ($row_datos_control_notas_A6["nt_25"] * $porcentaje_A6_L2_N5)/$el_puntaje_completo_es;
$nota_A6_L2_N6 = ($row_datos_control_notas_A6["nt_26"] * $porcentaje_A6_L2_N6)/$el_puntaje_completo_es;
$nota_A6_L2_N7 = ($row_datos_control_notas_A6["nt_27"] * $porcentaje_A6_L2_N7)/$el_puntaje_completo_es;
$notaAu_A6_L2 = $row_datos_control_notas_A6["nt_Au2"];

$nota_final_A6_L2 = $nota_A6_L2_N1 + $nota_A6_L2_N2 + $nota_A6_L2_N3 + $nota_A6_L2_N4 + $nota_A6_L2_N5 + $nota_A6_L2_N6 + $nota_A6_L2_N7 + $notaAu_A6_L2;
$nota_final_A6_L2_redon1 =number_format($nota_final_A6_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A6_L2_redon =number_format($nota_final_A6_L2_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$nota_A6_L3_N1 = ($row_datos_control_notas_A6["nt_31"] * $porcentaje_A6_L3_N1)/$el_puntaje_completo_es;
$nota_A6_L3_N2 = ($row_datos_control_notas_A6["nt_32"] * $porcentaje_A6_L3_N2)/$el_puntaje_completo_es;
$nota_A6_L3_N3 = ($row_datos_control_notas_A6["nt_33"] * $porcentaje_A6_L3_N3)/$el_puntaje_completo_es;
$nota_A6_L3_N4 = ($row_datos_control_notas_A6["nt_34"] * $porcentaje_A6_L3_N4)/$el_puntaje_completo_es;
$nota_A6_L3_N5 = ($row_datos_control_notas_A6["nt_35"] * $porcentaje_A6_L3_N5)/$el_puntaje_completo_es;
$nota_A6_L3_N6 = ($row_datos_control_notas_A6["nt_36"] * $porcentaje_A6_L3_N6)/$el_puntaje_completo_es;
$nota_A6_L3_N7 = ($row_datos_control_notas_A6["nt_37"] * $porcentaje_A6_L3_N7)/$el_puntaje_completo_es;
$notaAu_A6_L3 = $row_datos_control_notas_A6["nt_Au3"];

$nota_final_A6_L3 = $nota_A6_L3_N1 + $nota_A6_L3_N2 + $nota_A6_L3_N3 + $nota_A6_L3_N4 + $nota_A6_L3_N5 + $nota_A6_L3_N6 + $nota_A6_L3_N7 + $notaAu_A6_L3;
$nota_final_A6_L3_redon1 =number_format($nota_final_A6_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A6_L3_redon =number_format($nota_final_A6_L3_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$notaAu_Final_A6 = $row_datos_control_notas_A6["nt_AuF"];







$query_notas_A7 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 7
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A7 = mysqli_query($enlace, $query_notas_A7) or die(mysqli_error());
$row_datos_control_notas_A7 = mysqli_fetch_array($datos_control_notas_A7); 




$nota_A7_L1_N1 = ($row_datos_control_notas_A7["nt_11"] * $porcentaje_A7_L1_N1)/$el_puntaje_completo_es;
$nota_A7_L1_N2 = ($row_datos_control_notas_A7["nt_12"] * $porcentaje_A7_L1_N2)/$el_puntaje_completo_es;
$nota_A7_L1_N3 = ($row_datos_control_notas_A7["nt_13"] * $porcentaje_A7_L1_N3)/$el_puntaje_completo_es;
$nota_A7_L1_N4 = ($row_datos_control_notas_A7["nt_14"] * $porcentaje_A7_L1_N4)/$el_puntaje_completo_es;
$nota_A7_L1_N5 = ($row_datos_control_notas_A7["nt_15"] * $porcentaje_A7_L1_N5)/$el_puntaje_completo_es;
$nota_A7_L1_N6 = ($row_datos_control_notas_A7["nt_16"] * $porcentaje_A7_L1_N6)/$el_puntaje_completo_es;
$nota_A7_L1_N7 = ($row_datos_control_notas_A7["nt_17"] * $porcentaje_A7_L1_N7)/$el_puntaje_completo_es;
$notaAu_A7_L1 = $row_datos_control_notas_A7["nt_Au1"];

$nota_final_A7_L1 = $nota_A7_L1_N1 + $nota_A7_L1_N2 + $nota_A7_L1_N3 + $nota_A7_L1_N4 + $nota_A7_L1_N5 + $nota_A7_L1_N6 + $nota_A7_L1_N7 + $notaAu_A7_L1;
$nota_final_A7_L1_redon1 =number_format($nota_final_A7_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A7_L1_redon =number_format($nota_final_A7_L1_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$nota_A7_L2_N1 = ($row_datos_control_notas_A7["nt_21"] * $porcentaje_A7_L2_N1)/$el_puntaje_completo_es;
$nota_A7_L2_N2 = ($row_datos_control_notas_A7["nt_22"] * $porcentaje_A7_L2_N2)/$el_puntaje_completo_es;
$nota_A7_L2_N3 = ($row_datos_control_notas_A7["nt_23"] * $porcentaje_A7_L2_N3)/$el_puntaje_completo_es;
$nota_A7_L2_N4 = ($row_datos_control_notas_A7["nt_24"] * $porcentaje_A7_L2_N4)/$el_puntaje_completo_es;
$nota_A7_L2_N5 = ($row_datos_control_notas_A7["nt_25"] * $porcentaje_A7_L2_N5)/$el_puntaje_completo_es;
$nota_A7_L2_N6 = ($row_datos_control_notas_A7["nt_26"] * $porcentaje_A7_L2_N6)/$el_puntaje_completo_es;
$nota_A7_L2_N7 = ($row_datos_control_notas_A7["nt_27"] * $porcentaje_A7_L2_N7)/$el_puntaje_completo_es;
$notaAu_A7_L2 = $row_datos_control_notas_A7["nt_Au2"];

$nota_final_A7_L2 = $nota_A7_L2_N1 + $nota_A7_L2_N2 + $nota_A7_L2_N3 + $nota_A7_L2_N4 + $nota_A7_L2_N5 + $nota_A7_L2_N6 + $nota_A7_L2_N7 + $notaAu_A7_L2;
$nota_final_A7_L2_redon1 =number_format($nota_final_A7_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A7_L2_redon =number_format($nota_final_A7_L2_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto




$nota_A7_L3_N1 = ($row_datos_control_notas_A7["nt_31"] * $porcentaje_A7_L3_N1)/$el_puntaje_completo_es;
$nota_A7_L3_N2 = ($row_datos_control_notas_A7["nt_32"] * $porcentaje_A7_L3_N2)/$el_puntaje_completo_es;
$nota_A7_L3_N3 = ($row_datos_control_notas_A7["nt_33"] * $porcentaje_A7_L3_N3)/$el_puntaje_completo_es;
$nota_A7_L3_N4 = ($row_datos_control_notas_A7["nt_34"] * $porcentaje_A7_L3_N4)/$el_puntaje_completo_es;
$nota_A7_L3_N5 = ($row_datos_control_notas_A7["nt_35"] * $porcentaje_A7_L3_N5)/$el_puntaje_completo_es;
$nota_A7_L3_N6 = ($row_datos_control_notas_A7["nt_36"] * $porcentaje_A7_L3_N6)/$el_puntaje_completo_es;
$nota_A7_L3_N7 = ($row_datos_control_notas_A7["nt_37"] * $porcentaje_A7_L3_N7)/$el_puntaje_completo_es;
$notaAu_A7_L3 = $row_datos_control_notas_A7["nt_Au3"];

$nota_final_A7_L3 = $nota_A7_L3_N1 + $nota_A7_L3_N2 + $nota_A7_L3_N3 + $nota_A7_L3_N4 + $nota_A7_L3_N5 + $nota_A7_L3_N6 + $nota_A7_L3_N7 + $notaAu_A7_L3;
$nota_final_A7_L3_redon1 =number_format($nota_final_A7_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A7_L3_redon =number_format($nota_final_A7_L3_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$notaAu_Final_A7 = $row_datos_control_notas_A7["nt_AuF"];








$query_notas_A8 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 8
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A8 = mysqli_query($enlace, $query_notas_A8) or die(mysqli_error());
$row_datos_control_notas_A8 = mysqli_fetch_array($datos_control_notas_A8); 




$nota_A8_L1_N1 = ($row_datos_control_notas_A8["nt_11"] * $porcentaje_A8_L1_N1)/$el_puntaje_completo_es;
$nota_A8_L1_N2 = ($row_datos_control_notas_A8["nt_12"] * $porcentaje_A8_L1_N2)/$el_puntaje_completo_es;
$nota_A8_L1_N3 = ($row_datos_control_notas_A8["nt_13"] * $porcentaje_A8_L1_N3)/$el_puntaje_completo_es;
$nota_A8_L1_N4 = ($row_datos_control_notas_A8["nt_14"] * $porcentaje_A8_L1_N4)/$el_puntaje_completo_es;
$nota_A8_L1_N5 = ($row_datos_control_notas_A8["nt_15"] * $porcentaje_A8_L1_N5)/$el_puntaje_completo_es;
$nota_A8_L1_N6 = ($row_datos_control_notas_A8["nt_16"] * $porcentaje_A8_L1_N6)/$el_puntaje_completo_es;
$nota_A8_L1_N7 = ($row_datos_control_notas_A8["nt_17"] * $porcentaje_A8_L1_N7)/$el_puntaje_completo_es;
$notaAu_A8_L1 = $row_datos_control_notas_A8["nt_Au1"];

$nota_final_A8_L1 = $nota_A8_L1_N1 + $nota_A8_L1_N2 + $nota_A8_L1_N3 + $nota_A8_L1_N4 + $nota_A8_L1_N5 + $nota_A8_L1_N6 + $nota_A8_L1_N7 + $notaAu_A8_L1;
$nota_final_A8_L1_redon1 =number_format($nota_final_A8_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A8_L1_redon =number_format($nota_final_A8_L1_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto

$nota_A8_L2_N1 = ($row_datos_control_notas_A8["nt_21"] * $porcentaje_A8_L2_N1)/$el_puntaje_completo_es;
$nota_A8_L2_N2 = ($row_datos_control_notas_A8["nt_22"] * $porcentaje_A8_L2_N2)/$el_puntaje_completo_es;
$nota_A8_L2_N3 = ($row_datos_control_notas_A8["nt_23"] * $porcentaje_A8_L2_N3)/$el_puntaje_completo_es;
$nota_A8_L2_N4 = ($row_datos_control_notas_A8["nt_24"] * $porcentaje_A8_L2_N4)/$el_puntaje_completo_es;
$nota_A8_L2_N5 = ($row_datos_control_notas_A8["nt_25"] * $porcentaje_A8_L2_N5)/$el_puntaje_completo_es;
$nota_A8_L2_N6 = ($row_datos_control_notas_A8["nt_26"] * $porcentaje_A8_L2_N6)/$el_puntaje_completo_es;
$nota_A8_L2_N7 = ($row_datos_control_notas_A8["nt_27"] * $porcentaje_A8_L2_N7)/$el_puntaje_completo_es;
$notaAu_A8_L2 = $row_datos_control_notas_A8["nt_Au2"];

$nota_final_A8_L2 = $nota_A8_L2_N1 + $nota_A8_L2_N2 + $nota_A8_L2_N3 + $nota_A8_L2_N4 + $nota_A8_L2_N5 + $nota_A8_L2_N6 + $nota_A8_L2_N7 + $notaAu_A8_L2;
$nota_final_A8_L2_redon1 =number_format($nota_final_A8_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A8_L2_redon =number_format($nota_final_A8_L2_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto




$nota_A8_L3_N1 = ($row_datos_control_notas_A8["nt_31"] * $porcentaje_A8_L3_N1)/$el_puntaje_completo_es;
$nota_A8_L3_N2 = ($row_datos_control_notas_A8["nt_32"] * $porcentaje_A8_L3_N2)/$el_puntaje_completo_es;
$nota_A8_L3_N3 = ($row_datos_control_notas_A8["nt_33"] * $porcentaje_A8_L3_N3)/$el_puntaje_completo_es;
$nota_A8_L3_N4 = ($row_datos_control_notas_A8["nt_34"] * $porcentaje_A8_L3_N4)/$el_puntaje_completo_es;
$nota_A8_L3_N5 = ($row_datos_control_notas_A8["nt_35"] * $porcentaje_A8_L3_N5)/$el_puntaje_completo_es;
$nota_A8_L3_N6 = ($row_datos_control_notas_A8["nt_36"] * $porcentaje_A8_L3_N6)/$el_puntaje_completo_es;
$nota_A8_L3_N7 = ($row_datos_control_notas_A8["nt_37"] * $porcentaje_A8_L3_N7)/$el_puntaje_completo_es;
$notaAu_A8_L3 = $row_datos_control_notas_A8["nt_Au3"];

$nota_final_A8_L3 = $nota_A8_L3_N1 + $nota_A8_L3_N2 + $nota_A8_L3_N3 + $nota_A8_L3_N4 + $nota_A8_L3_N5 + $nota_A8_L3_N6 + $nota_A8_L3_N7 + $notaAu_A8_L3;
$nota_final_A8_L3_redon1 =number_format($nota_final_A8_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A8_L3_redon =number_format($nota_final_A8_L3_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$notaAu_Final_A8 = $row_datos_control_notas_A8["nt_AuF"];








$query_notas_A9 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 9
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A9 = mysqli_query($enlace, $query_notas_A9) or die(mysqli_error());
$row_datos_control_notas_A9 = mysqli_fetch_array($datos_control_notas_A9); 




$nota_A9_L1_N1 = ($row_datos_control_notas_A9["nt_11"] * $porcentaje_A9_L1_N1)/$el_puntaje_completo_es;
$nota_A9_L1_N2 = ($row_datos_control_notas_A9["nt_12"] * $porcentaje_A9_L1_N2)/$el_puntaje_completo_es;
$nota_A9_L1_N3 = ($row_datos_control_notas_A9["nt_13"] * $porcentaje_A9_L1_N3)/$el_puntaje_completo_es;
$nota_A9_L1_N4 = ($row_datos_control_notas_A9["nt_14"] * $porcentaje_A9_L1_N4)/$el_puntaje_completo_es;
$nota_A9_L1_N5 = ($row_datos_control_notas_A9["nt_15"] * $porcentaje_A9_L1_N5)/$el_puntaje_completo_es;
$nota_A9_L1_N6 = ($row_datos_control_notas_A9["nt_16"] * $porcentaje_A9_L1_N6)/$el_puntaje_completo_es;
$nota_A9_L1_N7 = ($row_datos_control_notas_A9["nt_17"] * $porcentaje_A9_L1_N7)/$el_puntaje_completo_es;
$notaAu_A9_L1 = $row_datos_control_notas_A9["nt_Au1"];

$nota_final_A9_L1 = $nota_A9_L1_N1 + $nota_A9_L1_N2 + $nota_A9_L1_N3 + $nota_A9_L1_N4 + $nota_A9_L1_N5 + $nota_A9_L1_N6 + $nota_A9_L1_N7 + $notaAu_A9_L1;
$nota_final_A9_L1_redon1 =number_format($nota_final_A9_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A9_L1_redon =number_format($nota_final_A9_L1_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$nota_A9_L2_N1 = ($row_datos_control_notas_A9["nt_21"] * $porcentaje_A9_L2_N1)/$el_puntaje_completo_es;
$nota_A9_L2_N2 = ($row_datos_control_notas_A9["nt_22"] * $porcentaje_A9_L2_N2)/$el_puntaje_completo_es;
$nota_A9_L2_N3 = ($row_datos_control_notas_A9["nt_23"] * $porcentaje_A9_L2_N3)/$el_puntaje_completo_es;
$nota_A9_L2_N4 = ($row_datos_control_notas_A9["nt_24"] * $porcentaje_A9_L2_N4)/$el_puntaje_completo_es;
$nota_A9_L2_N5 = ($row_datos_control_notas_A9["nt_25"] * $porcentaje_A9_L2_N5)/$el_puntaje_completo_es;
$nota_A9_L2_N6 = ($row_datos_control_notas_A9["nt_26"] * $porcentaje_A9_L2_N6)/$el_puntaje_completo_es;
$nota_A9_L2_N7 = ($row_datos_control_notas_A9["nt_27"] * $porcentaje_A9_L2_N7)/$el_puntaje_completo_es;
$notaAu_A9_L2 = $row_datos_control_notas_A9["nt_Au2"];

$nota_final_A9_L2 = $nota_A9_L2_N1 + $nota_A9_L2_N2 + $nota_A9_L2_N3 + $nota_A9_L2_N4 + $nota_A9_L2_N5 + $nota_A9_L2_N6 + $nota_A9_L2_N7 + $notaAu_A9_L2;
$nota_final_A9_L2_redon1 =number_format($nota_final_A9_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A9_L2_redon =number_format($nota_final_A9_L2_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$nota_A9_L3_N1 = ($row_datos_control_notas_A9["nt_31"] * $porcentaje_A9_L3_N1)/$el_puntaje_completo_es;
$nota_A9_L3_N2 = ($row_datos_control_notas_A9["nt_32"] * $porcentaje_A9_L3_N2)/$el_puntaje_completo_es;
$nota_A9_L3_N3 = ($row_datos_control_notas_A9["nt_33"] * $porcentaje_A9_L3_N3)/$el_puntaje_completo_es;
$nota_A9_L3_N4 = ($row_datos_control_notas_A9["nt_34"] * $porcentaje_A9_L3_N4)/$el_puntaje_completo_es;
$nota_A9_L3_N5 = ($row_datos_control_notas_A9["nt_35"] * $porcentaje_A9_L3_N5)/$el_puntaje_completo_es;
$nota_A9_L3_N6 = ($row_datos_control_notas_A9["nt_36"] * $porcentaje_A9_L3_N6)/$el_puntaje_completo_es;
$nota_A9_L3_N7 = ($row_datos_control_notas_A9["nt_37"] * $porcentaje_A9_L3_N7)/$el_puntaje_completo_es;
$notaAu_A9_L3 = $row_datos_control_notas_A9["nt_Au3"];

$nota_final_A9_L3 = $nota_A9_L3_N1 + $nota_A9_L3_N2 + $nota_A9_L3_N3 + $nota_A9_L3_N4 + $nota_A9_L3_N5 + $nota_A9_L3_N6 + $nota_A9_L3_N7 + $notaAu_A9_L3;
$nota_final_A9_L3_redon1 =number_format($nota_final_A9_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A9_L3_redon =number_format($nota_final_A9_L3_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$notaAu_Final_A9 = $row_datos_control_notas_A9["nt_AuF"];







$query_notas_A10 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 10
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A10 = mysqli_query($enlace, $query_notas_A10) or die(mysqli_error());
$row_datos_control_notas_A10 = mysqli_fetch_array($datos_control_notas_A10); 




$nota_A10_L1_N1 = ($row_datos_control_notas_A10["nt_11"] * $porcentaje_A10_L1_N1)/$el_puntaje_completo_es;
$nota_A10_L1_N2 = ($row_datos_control_notas_A10["nt_12"] * $porcentaje_A10_L1_N2)/$el_puntaje_completo_es;
$nota_A10_L1_N3 = ($row_datos_control_notas_A10["nt_13"] * $porcentaje_A10_L1_N3)/$el_puntaje_completo_es;
$nota_A10_L1_N4 = ($row_datos_control_notas_A10["nt_14"] * $porcentaje_A10_L1_N4)/$el_puntaje_completo_es;
$nota_A10_L1_N5 = ($row_datos_control_notas_A10["nt_15"] * $porcentaje_A10_L1_N5)/$el_puntaje_completo_es;
$nota_A10_L1_N6 = ($row_datos_control_notas_A10["nt_16"] * $porcentaje_A10_L1_N6)/$el_puntaje_completo_es;
$nota_A10_L1_N7 = ($row_datos_control_notas_A10["nt_17"] * $porcentaje_A10_L1_N7)/$el_puntaje_completo_es;
$notaAu_A10_L1 = $row_datos_control_notas_A10["nt_Au1"];

$nota_final_A10_L1 = $nota_A10_L1_N1 + $nota_A10_L1_N2 + $nota_A10_L1_N3 + $nota_A10_L1_N4 + $nota_A10_L1_N5 + $nota_A10_L1_N6 + $nota_A10_L1_N7 + $notaAu_A10_L1;
$nota_final_A10_L1_redon1 =number_format($nota_final_A10_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A10_L1_redon =number_format($nota_final_A10_L1_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$nota_A10_L2_N1 = ($row_datos_control_notas_A10["nt_21"] * $porcentaje_A10_L2_N1)/$el_puntaje_completo_es;
$nota_A10_L2_N2 = ($row_datos_control_notas_A10["nt_22"] * $porcentaje_A10_L2_N2)/$el_puntaje_completo_es;
$nota_A10_L2_N3 = ($row_datos_control_notas_A10["nt_23"] * $porcentaje_A10_L2_N3)/$el_puntaje_completo_es;
$nota_A10_L2_N4 = ($row_datos_control_notas_A10["nt_24"] * $porcentaje_A10_L2_N4)/$el_puntaje_completo_es;
$nota_A10_L2_N5 = ($row_datos_control_notas_A10["nt_25"] * $porcentaje_A10_L2_N5)/$el_puntaje_completo_es;
$nota_A10_L2_N6 = ($row_datos_control_notas_A10["nt_26"] * $porcentaje_A10_L2_N6)/$el_puntaje_completo_es;
$nota_A10_L2_N7 = ($row_datos_control_notas_A10["nt_27"] * $porcentaje_A10_L2_N7)/$el_puntaje_completo_es;
$notaAu_A10_L2 = $row_datos_control_notas_A10["nt_Au2"];

$nota_final_A10_L2 = $nota_A10_L2_N1 + $nota_A10_L2_N2 + $nota_A10_L2_N3 + $nota_A10_L2_N4 + $nota_A10_L2_N5 + $nota_A10_L2_N6 + $nota_A10_L2_N7 + $notaAu_A10_L2;
$nota_final_A10_L2_redon1 =number_format($nota_final_A10_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A10_L2_redon =number_format($nota_final_A10_L2_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto




$nota_A10_L3_N1 = ($row_datos_control_notas_A10["nt_31"] * $porcentaje_A10_L3_N1)/$el_puntaje_completo_es;
$nota_A10_L3_N2 = ($row_datos_control_notas_A10["nt_32"] * $porcentaje_A10_L3_N2)/$el_puntaje_completo_es;
$nota_A10_L3_N3 = ($row_datos_control_notas_A10["nt_33"] * $porcentaje_A10_L3_N3)/$el_puntaje_completo_es;
$nota_A10_L3_N4 = ($row_datos_control_notas_A10["nt_34"] * $porcentaje_A10_L3_N4)/$el_puntaje_completo_es;
$nota_A10_L3_N5 = ($row_datos_control_notas_A10["nt_35"] * $porcentaje_A10_L3_N5)/$el_puntaje_completo_es;
$nota_A10_L3_N6 = ($row_datos_control_notas_A10["nt_36"] * $porcentaje_A10_L3_N6)/$el_puntaje_completo_es;
$nota_A10_L3_N7 = ($row_datos_control_notas_A10["nt_37"] * $porcentaje_A10_L3_N7)/$el_puntaje_completo_es;
$notaAu_A10_L3 = $row_datos_control_notas_A10["nt_Au3"];

$nota_final_A10_L3 = $nota_A10_L3_N1 + $nota_A10_L3_N2 + $nota_A10_L3_N3 + $nota_A10_L3_N4 + $nota_A10_L3_N5 + $nota_A10_L3_N6 + $nota_A10_L3_N7 + $notaAu_A10_L3;
$nota_final_A10_L3_redon1 =number_format($nota_final_A10_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A10_L3_redon =number_format($nota_final_A10_L3_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$notaAu_Final_A10 = $row_datos_control_notas_A10["nt_AuF"];







$query_notas_A11 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 11
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A11 = mysqli_query($enlace, $query_notas_A11) or die(mysqli_error());
$row_datos_control_notas_A11 = mysqli_fetch_array($datos_control_notas_A11); 




$nota_A11_L1_N1 = ($row_datos_control_notas_A11["nt_11"] * $porcentaje_A11_L1_N1)/$el_puntaje_completo_es;
$nota_A11_L1_N2 = ($row_datos_control_notas_A11["nt_12"] * $porcentaje_A11_L1_N2)/$el_puntaje_completo_es;
$nota_A11_L1_N3 = ($row_datos_control_notas_A11["nt_13"] * $porcentaje_A11_L1_N3)/$el_puntaje_completo_es;
$nota_A11_L1_N4 = ($row_datos_control_notas_A11["nt_14"] * $porcentaje_A11_L1_N4)/$el_puntaje_completo_es;
$nota_A11_L1_N5 = ($row_datos_control_notas_A11["nt_15"] * $porcentaje_A11_L1_N5)/$el_puntaje_completo_es;
$nota_A11_L1_N6 = ($row_datos_control_notas_A11["nt_16"] * $porcentaje_A11_L1_N6)/$el_puntaje_completo_es;
$nota_A11_L1_N7 = ($row_datos_control_notas_A11["nt_17"] * $porcentaje_A11_L1_N7)/$el_puntaje_completo_es;
$notaAu_A11_L1 = $row_datos_control_notas_A11["nt_Au1"];

$nota_final_A11_L1 = $nota_A11_L1_N1 + $nota_A11_L1_N2 + $nota_A11_L1_N3 + $nota_A11_L1_N4 + $nota_A11_L1_N5 + $nota_A11_L1_N6 + $nota_A11_L1_N7 + $notaAu_A11_L1;
$nota_final_A11_L1_redon1 =number_format($nota_final_A11_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A11_L1_redon =number_format($nota_final_A11_L1_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$nota_A11_L2_N1 = ($row_datos_control_notas_A11["nt_21"] * $porcentaje_A11_L2_N1)/$el_puntaje_completo_es;
$nota_A11_L2_N2 = ($row_datos_control_notas_A11["nt_22"] * $porcentaje_A11_L2_N2)/$el_puntaje_completo_es;
$nota_A11_L2_N3 = ($row_datos_control_notas_A11["nt_23"] * $porcentaje_A11_L2_N3)/$el_puntaje_completo_es;
$nota_A11_L2_N4 = ($row_datos_control_notas_A11["nt_24"] * $porcentaje_A11_L2_N4)/$el_puntaje_completo_es;
$nota_A11_L2_N5 = ($row_datos_control_notas_A11["nt_25"] * $porcentaje_A11_L2_N5)/$el_puntaje_completo_es;
$nota_A11_L2_N6 = ($row_datos_control_notas_A11["nt_26"] * $porcentaje_A11_L2_N6)/$el_puntaje_completo_es;
$nota_A11_L2_N7 = ($row_datos_control_notas_A11["nt_27"] * $porcentaje_A11_L2_N7)/$el_puntaje_completo_es;
$notaAu_A11_L2 = $row_datos_control_notas_A11["nt_Au2"];

$nota_final_A11_L2 = $nota_A11_L2_N1 + $nota_A11_L2_N2 + $nota_A11_L2_N3 + $nota_A11_L2_N4 + $nota_A11_L2_N5 + $nota_A11_L2_N6 + $nota_A11_L2_N7 + $notaAu_A11_L2;
$nota_final_A11_L2_redon1 =number_format($nota_final_A11_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A11_L2_redon =number_format($nota_final_A11_L2_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$nota_A11_L3_N1 = ($row_datos_control_notas_A11["nt_31"] * $porcentaje_A11_L3_N1)/$el_puntaje_completo_es;
$nota_A11_L3_N2 = ($row_datos_control_notas_A11["nt_32"] * $porcentaje_A11_L3_N2)/$el_puntaje_completo_es;
$nota_A11_L3_N3 = ($row_datos_control_notas_A11["nt_33"] * $porcentaje_A11_L3_N3)/$el_puntaje_completo_es;
$nota_A11_L3_N4 = ($row_datos_control_notas_A11["nt_34"] * $porcentaje_A11_L3_N4)/$el_puntaje_completo_es;
$nota_A11_L3_N5 = ($row_datos_control_notas_A11["nt_35"] * $porcentaje_A11_L3_N5)/$el_puntaje_completo_es;
$nota_A11_L3_N6 = ($row_datos_control_notas_A11["nt_36"] * $porcentaje_A11_L3_N6)/$el_puntaje_completo_es;
$nota_A11_L3_N7 = ($row_datos_control_notas_A11["nt_37"] * $porcentaje_A11_L3_N7)/$el_puntaje_completo_es;
$notaAu_A11_L3 = $row_datos_control_notas_A11["nt_Au3"];

$nota_final_A11_L3 = $nota_A11_L3_N1 + $nota_A11_L3_N2 + $nota_A11_L3_N3 + $nota_A11_L3_N4 + $nota_A11_L3_N5 + $nota_A11_L3_N6 + $nota_A11_L3_N7 + $notaAu_A11_L3;
$nota_final_A11_L3_redon1 =number_format($nota_final_A11_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A11_L3_redon =number_format($nota_final_A11_L3_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$notaAu_Final_A11 = $row_datos_control_notas_A11["nt_AuF"];








$query_notas_A12 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 12
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A12 = mysqli_query($enlace, $query_notas_A12) or die(mysqli_error());
$row_datos_control_notas_A12 = mysqli_fetch_array($datos_control_notas_A12); 




$nota_A12_L1_N1 = ($row_datos_control_notas_A12["nt_11"] * $porcentaje_A12_L1_N1)/$el_puntaje_completo_es;
$nota_A12_L1_N2 = ($row_datos_control_notas_A12["nt_12"] * $porcentaje_A12_L1_N2)/$el_puntaje_completo_es;
$nota_A12_L1_N3 = ($row_datos_control_notas_A12["nt_13"] * $porcentaje_A12_L1_N3)/$el_puntaje_completo_es;
$nota_A12_L1_N4 = ($row_datos_control_notas_A12["nt_14"] * $porcentaje_A12_L1_N4)/$el_puntaje_completo_es;
$nota_A12_L1_N5 = ($row_datos_control_notas_A12["nt_15"] * $porcentaje_A12_L1_N5)/$el_puntaje_completo_es;
$nota_A12_L1_N6 = ($row_datos_control_notas_A12["nt_16"] * $porcentaje_A12_L1_N6)/$el_puntaje_completo_es;
$nota_A12_L1_N7 = ($row_datos_control_notas_A12["nt_17"] * $porcentaje_A12_L1_N7)/$el_puntaje_completo_es;
$notaAu_A12_L1 = $row_datos_control_notas_A12["nt_Au1"];

$nota_final_A12_L1 = $nota_A12_L1_N1 + $nota_A12_L1_N2 + $nota_A12_L1_N3 + $nota_A12_L1_N4 + $nota_A12_L1_N5 + $nota_A12_L1_N6 + $nota_A12_L1_N7 + $notaAu_A12_L1;
$nota_final_A12_L1_redon1 =number_format($nota_final_A12_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A12_L1_redon =number_format($nota_final_A12_L1_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$nota_A12_L2_N1 = ($row_datos_control_notas_A12["nt_21"] * $porcentaje_A12_L2_N1)/$el_puntaje_completo_es;
$nota_A12_L2_N2 = ($row_datos_control_notas_A12["nt_22"] * $porcentaje_A12_L2_N2)/$el_puntaje_completo_es;
$nota_A12_L2_N3 = ($row_datos_control_notas_A12["nt_23"] * $porcentaje_A12_L2_N3)/$el_puntaje_completo_es;
$nota_A12_L2_N4 = ($row_datos_control_notas_A12["nt_24"] * $porcentaje_A12_L2_N4)/$el_puntaje_completo_es;
$nota_A12_L2_N5 = ($row_datos_control_notas_A12["nt_25"] * $porcentaje_A12_L2_N5)/$el_puntaje_completo_es;
$nota_A12_L2_N6 = ($row_datos_control_notas_A12["nt_26"] * $porcentaje_A12_L2_N6)/$el_puntaje_completo_es;
$nota_A12_L2_N7 = ($row_datos_control_notas_A12["nt_27"] * $porcentaje_A12_L2_N7)/$el_puntaje_completo_es;
$notaAu_A12_L2 = $row_datos_control_notas_A12["nt_Au2"];

$nota_final_A12_L2 = $nota_A12_L2_N1 + $nota_A12_L2_N2 + $nota_A12_L2_N3 + $nota_A12_L2_N4 + $nota_A12_L2_N5 + $nota_A12_L2_N6 + $nota_A12_L2_N7 + $notaAu_A12_L2;
$nota_final_A12_L2_redon1 =number_format($nota_final_A12_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A12_L2_redon =number_format($nota_final_A12_L2_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$nota_A12_L3_N1 = ($row_datos_control_notas_A12["nt_31"] * $porcentaje_A12_L3_N1)/$el_puntaje_completo_es;
$nota_A12_L3_N2 = ($row_datos_control_notas_A12["nt_32"] * $porcentaje_A12_L3_N2)/$el_puntaje_completo_es;
$nota_A12_L3_N3 = ($row_datos_control_notas_A12["nt_33"] * $porcentaje_A12_L3_N3)/$el_puntaje_completo_es;
$nota_A12_L3_N4 = ($row_datos_control_notas_A12["nt_34"] * $porcentaje_A12_L3_N4)/$el_puntaje_completo_es;
$nota_A12_L3_N5 = ($row_datos_control_notas_A12["nt_35"] * $porcentaje_A12_L3_N5)/$el_puntaje_completo_es;
$nota_A12_L3_N6 = ($row_datos_control_notas_A12["nt_36"] * $porcentaje_A12_L3_N6)/$el_puntaje_completo_es;
$nota_A12_L3_N7 = ($row_datos_control_notas_A12["nt_37"] * $porcentaje_A12_L3_N7)/$el_puntaje_completo_es;
$notaAu_A12_L3 = $row_datos_control_notas_A12["nt_Au3"];

$nota_final_A12_L3 = $nota_A12_L3_N1 + $nota_A12_L3_N2 + $nota_A12_L3_N3 + $nota_A12_L3_N4 + $nota_A12_L3_N5 + $nota_A12_L3_N6 + $nota_A12_L3_N7 + $notaAu_A12_L3;
$nota_final_A12_L3_redon1 =number_format($nota_final_A12_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A12_L3_redon =number_format($nota_final_A12_L3_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$notaAu_Final_A12 = $row_datos_control_notas_A12["nt_AuF"];








$query_notas_A13 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 13
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A13 = mysqli_query($enlace, $query_notas_A13) or die(mysqli_error());
$row_datos_control_notas_A13 = mysqli_fetch_array($datos_control_notas_A13); 




$nota_A13_L1_N1 = ($row_datos_control_notas_A13["nt_11"] * $porcentaje_A13_L1_N1)/$el_puntaje_completo_es;
$nota_A13_L1_N2 = ($row_datos_control_notas_A13["nt_12"] * $porcentaje_A13_L1_N2)/$el_puntaje_completo_es;
$nota_A13_L1_N3 = ($row_datos_control_notas_A13["nt_13"] * $porcentaje_A13_L1_N3)/$el_puntaje_completo_es;
$nota_A13_L1_N4 = ($row_datos_control_notas_A13["nt_14"] * $porcentaje_A13_L1_N4)/$el_puntaje_completo_es;
$nota_A13_L1_N5 = ($row_datos_control_notas_A13["nt_15"] * $porcentaje_A13_L1_N5)/$el_puntaje_completo_es;
$nota_A13_L1_N6 = ($row_datos_control_notas_A13["nt_16"] * $porcentaje_A13_L1_N6)/$el_puntaje_completo_es;
$nota_A13_L1_N7 = ($row_datos_control_notas_A13["nt_17"] * $porcentaje_A13_L1_N7)/$el_puntaje_completo_es;
$notaAu_A13_L1 = $row_datos_control_notas_A13["nt_Au1"];

$nota_final_A13_L1 = $nota_A13_L1_N1 + $nota_A13_L1_N2 + $nota_A13_L1_N3 + $nota_A13_L1_N4 + $nota_A13_L1_N5 + $nota_A13_L1_N6 + $nota_A13_L1_N7 + $notaAu_A13_L1;
$nota_final_A13_L1_redon1 =number_format($nota_final_A13_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A13_L1_redon =number_format($nota_final_A13_L1_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$nota_A13_L2_N1 = ($row_datos_control_notas_A13["nt_21"] * $porcentaje_A13_L2_N1)/$el_puntaje_completo_es;
$nota_A13_L2_N2 = ($row_datos_control_notas_A13["nt_22"] * $porcentaje_A13_L2_N2)/$el_puntaje_completo_es;
$nota_A13_L2_N3 = ($row_datos_control_notas_A13["nt_23"] * $porcentaje_A13_L2_N3)/$el_puntaje_completo_es;
$nota_A13_L2_N4 = ($row_datos_control_notas_A13["nt_24"] * $porcentaje_A13_L2_N4)/$el_puntaje_completo_es;
$nota_A13_L2_N5 = ($row_datos_control_notas_A13["nt_25"] * $porcentaje_A13_L2_N5)/$el_puntaje_completo_es;
$nota_A13_L2_N6 = ($row_datos_control_notas_A13["nt_26"] * $porcentaje_A13_L2_N6)/$el_puntaje_completo_es;
$nota_A13_L2_N7 = ($row_datos_control_notas_A13["nt_27"] * $porcentaje_A13_L2_N7)/$el_puntaje_completo_es;
$notaAu_A13_L2 = $row_datos_control_notas_A13["nt_Au2"];

$nota_final_A13_L2 = $nota_A13_L2_N1 + $nota_A13_L2_N2 + $nota_A13_L2_N3 + $nota_A13_L2_N4 + $nota_A13_L2_N5 + $nota_A13_L2_N6 + $nota_A13_L2_N7 + $notaAu_A13_L2;
$nota_final_A13_L2_redon1 =number_format($nota_final_A13_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A13_L2_redon =number_format($nota_final_A13_L2_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$nota_A13_L3_N1 = ($row_datos_control_notas_A13["nt_31"] * $porcentaje_A13_L3_N1)/$el_puntaje_completo_es;
$nota_A13_L3_N2 = ($row_datos_control_notas_A13["nt_32"] * $porcentaje_A13_L3_N2)/$el_puntaje_completo_es;
$nota_A13_L3_N3 = ($row_datos_control_notas_A13["nt_33"] * $porcentaje_A13_L3_N3)/$el_puntaje_completo_es;
$nota_A13_L3_N4 = ($row_datos_control_notas_A13["nt_34"] * $porcentaje_A13_L3_N4)/$el_puntaje_completo_es;
$nota_A13_L3_N5 = ($row_datos_control_notas_A13["nt_35"] * $porcentaje_A13_L3_N5)/$el_puntaje_completo_es;
$nota_A13_L3_N6 = ($row_datos_control_notas_A13["nt_36"] * $porcentaje_A13_L3_N6)/$el_puntaje_completo_es;
$nota_A13_L3_N7 = ($row_datos_control_notas_A13["nt_37"] * $porcentaje_A13_L3_N7)/$el_puntaje_completo_es;
$notaAu_A13_L3 = $row_datos_control_notas_A13["nt_Au3"];

$nota_final_A13_L3 = $nota_A13_L3_N1 + $nota_A13_L3_N2 + $nota_A13_L3_N3 + $nota_A13_L3_N4 + $nota_A13_L3_N5 + $nota_A13_L3_N6 + $nota_A13_L3_N7 + $notaAu_A13_L3;
$nota_final_A13_L3_redon1 =number_format($nota_final_A13_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A13_L3_redon =number_format($nota_final_A13_L3_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$notaAu_Final_A13 = $row_datos_control_notas_A13["nt_AuF"];







$query_notas_A14 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 14
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A14 = mysqli_query($enlace, $query_notas_A14) or die(mysqli_error());
$row_datos_control_notas_A14 = mysqli_fetch_array($datos_control_notas_A14); 




$nota_A14_L1_N1 = ($row_datos_control_notas_A14["nt_11"] * $porcentaje_A14_L1_N1)/$el_puntaje_completo_es;
$nota_A14_L1_N2 = ($row_datos_control_notas_A14["nt_12"] * $porcentaje_A14_L1_N2)/$el_puntaje_completo_es;
$nota_A14_L1_N3 = ($row_datos_control_notas_A14["nt_13"] * $porcentaje_A14_L1_N3)/$el_puntaje_completo_es;
$nota_A14_L1_N4 = ($row_datos_control_notas_A14["nt_14"] * $porcentaje_A14_L1_N4)/$el_puntaje_completo_es;
$nota_A14_L1_N5 = ($row_datos_control_notas_A14["nt_15"] * $porcentaje_A14_L1_N5)/$el_puntaje_completo_es;
$nota_A14_L1_N6 = ($row_datos_control_notas_A14["nt_16"] * $porcentaje_A14_L1_N6)/$el_puntaje_completo_es;
$nota_A14_L1_N7 = ($row_datos_control_notas_A14["nt_17"] * $porcentaje_A14_L1_N7)/$el_puntaje_completo_es;
$notaAu_A14_L1 = $row_datos_control_notas_A14["nt_Au1"];

$nota_final_A14_L1 = $nota_A14_L1_N1 + $nota_A14_L1_N2 + $nota_A14_L1_N3 + $nota_A14_L1_N4 + $nota_A14_L1_N5 + $nota_A14_L1_N6 + $nota_A14_L1_N7 + $notaAu_A14_L1;
$nota_final_A14_L1_redon1 =number_format($nota_final_A14_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A14_L1_redon =number_format($nota_final_A14_L1_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto


$nota_A14_L2_N1 = ($row_datos_control_notas_A14["nt_21"] * $porcentaje_A14_L2_N1)/$el_puntaje_completo_es;
$nota_A14_L2_N2 = ($row_datos_control_notas_A14["nt_22"] * $porcentaje_A14_L2_N2)/$el_puntaje_completo_es;
$nota_A14_L2_N3 = ($row_datos_control_notas_A14["nt_23"] * $porcentaje_A14_L2_N3)/$el_puntaje_completo_es;
$nota_A14_L2_N4 = ($row_datos_control_notas_A14["nt_24"] * $porcentaje_A14_L2_N4)/$el_puntaje_completo_es;
$nota_A14_L2_N5 = ($row_datos_control_notas_A14["nt_25"] * $porcentaje_A14_L2_N5)/$el_puntaje_completo_es;
$nota_A14_L2_N6 = ($row_datos_control_notas_A14["nt_26"] * $porcentaje_A14_L2_N6)/$el_puntaje_completo_es;
$nota_A14_L2_N7 = ($row_datos_control_notas_A14["nt_27"] * $porcentaje_A14_L2_N7)/$el_puntaje_completo_es;
$notaAu_A14_L2 = $row_datos_control_notas_A14["nt_Au2"];

$nota_final_A14_L2 = $nota_A14_L2_N1 + $nota_A14_L2_N2 + $nota_A14_L2_N3 + $nota_A14_L2_N4 + $nota_A14_L2_N5 + $nota_A14_L2_N6 + $nota_A14_L2_N7 + $notaAu_A14_L2;
$nota_final_A14_L2_redon1 =number_format($nota_final_A14_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A14_L2_redon =number_format($nota_final_A14_L2_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$nota_A14_L3_N1 = ($row_datos_control_notas_A14["nt_31"] * $porcentaje_A14_L3_N1)/$el_puntaje_completo_es;
$nota_A14_L3_N2 = ($row_datos_control_notas_A14["nt_32"] * $porcentaje_A14_L3_N2)/$el_puntaje_completo_es;
$nota_A14_L3_N3 = ($row_datos_control_notas_A14["nt_33"] * $porcentaje_A14_L3_N3)/$el_puntaje_completo_es;
$nota_A14_L3_N4 = ($row_datos_control_notas_A14["nt_34"] * $porcentaje_A14_L3_N4)/$el_puntaje_completo_es;
$nota_A14_L3_N5 = ($row_datos_control_notas_A14["nt_35"] * $porcentaje_A14_L3_N5)/$el_puntaje_completo_es;
$nota_A14_L3_N6 = ($row_datos_control_notas_A14["nt_36"] * $porcentaje_A14_L3_N6)/$el_puntaje_completo_es;
$nota_A14_L3_N7 = ($row_datos_control_notas_A14["nt_37"] * $porcentaje_A14_L3_N7)/$el_puntaje_completo_es;
$notaAu_A14_L3 = $row_datos_control_notas_A14["nt_Au3"];

$nota_final_A14_L3 = $nota_A14_L3_N1 + $nota_A14_L3_N2 + $nota_A14_L3_N3 + $nota_A14_L3_N4 + $nota_A14_L3_N5 + $nota_A14_L3_N6 + $nota_A14_L3_N7 + $notaAu_A14_L3;
$nota_final_A14_L3_redon1 =number_format($nota_final_A14_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1
$nota_final_A14_L3_redon =number_format($nota_final_A14_L3_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$notaAu_Final_A14 = $row_datos_control_notas_A14["nt_AuF"];





 mysqli_close($enlace); 


?>



<?php include ("Header_Alt.php"); ?>




<div class="se-pre-con"></div>



  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        
<br>




         <div class="form-row">

        
        <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-file-alt"></i></span> 
</div>

  <input maxlength="39" type="text" readonly="readonly" class="form-control form-control-sm " id="mod_nombres_estud" name="mod_nombres_estud"
value="<?php echo $name_del_est; ?>" required> 
       
        </div>





        <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="far fa-file-alt"></i></span> 
</div>

  <input maxlength="39" type="text" readonly="readonly" class="form-control form-control-sm " id="mod_apellidos_estud" name="mod_apellidos_estud"
value="<?php echo $ape_del_est; ?>" required> 
       
        </div>








        <div class="input-group input-group-sm col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-user-tag"></i><i>&nbsp; Exp:</i></span> 
</div>

<input maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" readonly="readonly" class="form-control form-control-sm " id="mod_exp_estud" name="mod_exp_estud"
value="<?php echo $expe_del_est; ?>" required> 
       
        </div>




      <div class="input-group input-group-sm col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i>Ci:</i></span> 
</div>

<input maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" readonly="readonly" class="form-control form-control-sm " id="mod_ci_estud" name="mod_ci_estud"
value="<?php echo $ci_del_est; ?>"> 
       
        </div>





<?php   // esto permite obtener los datos necesarios del representante y simplificar la busqueda

$id_del_estud = $id_del_est;

include("../conectar.php");   

$query_estud = "SELECT * FROM sexo, reg_estudiantes                        
                        
         WHERE  reg_estudiantes.id_sexo = sexo.id_sexo            
            and id_estud = '$id_del_estud' ";

$datos_plantilla_estud = mysqli_query($enlace, $query_estud) or die(mysqli_error());

$row_datos_plantilla_estud = mysqli_fetch_array($datos_plantilla_estud); 




$id_del_estudiante = $row_datos_plantilla_estud['id_estud'];



$query_estuXX = "SELECT * FROM d_ciudades, d_estados, d_paises, religiones, tb_medicos, tipo_sangres, reg_estudiantes 

         WHERE  d_ciudades.id_ciudad = reg_estudiantes.id_ciudad
         and d_estados.id_estado = reg_estudiantes.id_estado
         and d_paises.id_pais = reg_estudiantes.id_pais
         and religiones.id_religion = reg_estudiantes.id_religion
         and tb_medicos.id_medico = reg_estudiantes.id_medico
         and tipo_sangres.id_sangre = reg_estudiantes.id_sangre

         and id_estud = '$id_del_estudiante'
         
       ";

$datos_estuXX = mysqli_query($enlace, $query_estuXX) or die(mysqli_error());

$row_datos_estuXX = mysqli_fetch_array($datos_estuXX); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estuXX = mysqli_num_rows($datos_estuXX); 








$id_del_estudiante = $row_datos_plantilla_estud['id_estud'];


$reg_estu_actual_HOY = "SELECT * FROM temporada_escolar, grados, secciones, reg_estu_actual  
           WHERE  temporada_escolar.id_periodo_es = reg_estu_actual.cursa_actualmente
             and  grados.id_grado  = reg_estu_actual.grado_actual             
             and  secciones.id_seccion = reg_estu_actual.id_seccion
             and id_estud = '$id_del_estudiante'
             and el_activo = '1'
            ORDER BY id_reg_estu_actual DESC LIMIT 1";   // me selecciona el ultimo es decir el actual en curso

$q_reg_estu_actual_HOY = mysqli_query($enlace, $reg_estu_actual_HOY) or die(mysqli_error());

$r_d_reg_estu_actual_HOY = mysqli_fetch_array($q_reg_estu_actual_HOY); 
 
mysqli_close($enlace);



?>

<div class="input-group input-group-sm col-md-4 mb-2">
<span class="input-group-text alert-info" id="basic-addon1"><i><?php echo $r_d_reg_estu_actual_HOY['nombre_grados']; ?> / Sección "<?php echo $r_d_reg_estu_actual_HOY['nombre_seccion']; ?>" / Ciclo "<?php echo $r_d_reg_estu_actual_HOY['periodo_escolar']; ?>"</i></span> 
</div>

        

      </div> <!--Cierre de row con las 12 columnas-->




      </div>
    </div>
  </div>

<?php      //   para setear los colores, de esta manera solo se ha de cambiar una sola variable y se riega en todas
           //  las filas de la tabla....
$color0 =  '#DCDAD7';

$color1 =  '#DCF6C0';
$color1a =  '#C4E5A1';
           
$color2 =  '#F6EFC0';
$color2a =  '#E9D195';
           
$color3 =  '#F6DDC0';
$color3a =  '#E5AC85';

$color4 =  '#CCE2E8';



include("../conectar.php");


$queryasignaturas = "SELECT asignatura_ciclo_grado.*, temporada_escolar.*, grados.*,
asignaturas.id_asign, asignaturas.id_periodo_es,
asignaturas.a_aaa, asignaturas.a_abrev, asignaturas.b_bbb, asignaturas.b_abrev,
asignaturas.c_ccc, asignaturas.c_abrev, asignaturas.d_ddd, asignaturas.d_abrev,
asignaturas.e_eee, asignaturas.e_abrev, asignaturas.f_fff, asignaturas.f_abrev,
asignaturas.g_ggg, asignaturas.g_abrev, asignaturas.h_hhh, asignaturas.h_abrev,
asignaturas.i_iii, asignaturas.i_abrev, asignaturas.j_jjj, asignaturas.j_abrev,
asignaturas.k_kkk, asignaturas.k_abrev, asignaturas.l_lll, asignaturas.l_abrev,
asignaturas.m_mmm, asignaturas.m_abrev, asignaturas.n_nnn, asignaturas.n_abrev,

asignaturas.a_suma, asignaturas.b_suma, asignaturas.c_suma, asignaturas.d_suma,
asignaturas.e_suma, asignaturas.f_suma, asignaturas.g_suma, asignaturas.h_suma,
asignaturas.i_suma, asignaturas.j_suma, asignaturas.k_suma, asignaturas.l_suma,
asignaturas.m_suma, asignaturas.n_suma,

asignaturas.a_convertir, asignaturas.b_convertir, asignaturas.c_convertir, asignaturas.d_convertir,
asignaturas.e_convertir, asignaturas.f_convertir, asignaturas.g_convertir, asignaturas.h_convertir,
asignaturas.i_convertir, asignaturas.j_convertir, asignaturas.k_convertir, asignaturas.l_convertir,
asignaturas.m_convertir, asignaturas.n_convertir 


 FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura         
         
         and  asignatura_ciclo_grado.id_del_ciclo = $el_cicloXX
         and  asignatura_ciclo_grado.id_del_grado = $el_gradoXX
                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign = mysqli_query($enlace, $queryasignaturas) or die(mysqli_error());
$row_datos_controlasign = mysqli_fetch_array($datos_controlasign); 
$totalRows_controlasign = mysqli_num_rows($datos_controlasign); 


mysqli_close($enlace); 



 ?>



<style>      /* ayuda con la forma en la q se muestran las celdas */



.borde_izq_y_der_blanco {border-right:1px solid white; border-left: 1px solid white;}
.borde_inf_y_sup_blanco {border-top:2px solid white; border-bottom: 1px solid white;}
.borde_izq_sup_der_blanco {border-right: 1px solid white;  border-top:1px solid white; border-left: 1px solid white;}
.borde_izq_inf_der_blanco {border-right: 1px solid white;  border-left:1px solid white; border-bottom: 1px solid white;}

.borde_izq_y_der_negro  {border-right:1px solid black; border-left: 1px solid black;}
.borde_izq_sup_der_negro  {border-right:1px solid black; border-top:1px solid black; border-left: 1px solid black;}
.borde_izq_inf_der_negro  {border-right:1px solid black; border-bottom: 1px solid black; border-left: 1px solid black;}
.borde_izq_inf_sup_negro  {border-top:1px solid black; border-bottom: 1px solid black; border-left: 1px solid black;}
.borde_der_inf_sup_negro  {border-top:1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;}
.borde_inf_y_sup_negro  {border-top:1px solid black; border-bottom: 1px solid black;}

.borde_negro {border: 1px solid black;}
.borde_blanco {border: 1px solid white;}


.miniborderlight {border:0.5px dotted grey;}  /* con puntos gris */
.minibordercut {border-top:1px dashed grey;}  /* con ----  gris */


.borde_doble_negro {border: 3px solid black;}

</style>


<div class="alert alert-light mb-2 ml-4 mr-4" role="alert">
  <b>Nota:</b> La o las asignaturas que presenten el símbolo <b style="color:red; font-size: 16px;">#</b> hace referencia a que la materia no cuenta para el promedio.
</div>


           
<div class="card border-primary ml-4 mt-3 mr-4">
  <div class="card-header text-white bg-secondary" style='text-align:center;vertical-align:middle; font-size: 22px;'>Histórico por actividad o contenido realizado en cada asignatura, área o materia.</div>
<div class="card-body">
<div class="form-row" >

<div class="col-md-12 mb-1">  <!--  unica tabla -->


 <table class="" style='text-align:center;vertical-align:middle; width:100%;'>   
                                     
            <tr>

            <td class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color0;?>" style="height: 23px; width: 5%; font-size: 14px;"><b>Asig.</b><br><b>Área</b><br><b>Materia</b></td>

            <td style="height: 23px; width: 1.2%;">  </td>

             <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color1;?>" style="width:17.5%;height:23px;">1er Lapso - Momento</th>
             <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color1a;?>" style="width:2.7%;font-size:12px;height:23px;">Aux.</th>
             <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color1;?>" style="width:2.7%;font-size:12px;height:23px;">Nota Def.</th>

             <td style="height: 23px; width: 1.2%;">

             <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color2;?>" style="width:17.5%;height:23px;">2do Lapso - Momento</th>
             <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color2a;?>" style="width:2.7%;font-size:12px;height:23px;">Aux.</th>
             <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color2;?>" style="width:2.7%;font-size:12px;height:23px;">Nota Def.</th>

             <td style="height: 23px; width: 1.2%;">

             <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color3;?>" style="width:17.5%;height:23px;">3er Lapso - Momento</th>
             <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color3a;?>" style="width:2.7%;font-size:12px;height:23px;">Aux.</th>
             <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color3;?>" style="width:2.7%;font-size:12px;height:23px;">Nota Def.</th>

             <td style="height: 23px; width: 1.2%;">

            <th class="borde_negro" colspan="5" BGCOLOR="<?php echo $color4;?>" style="width:12.5%; height: 23px; font-size:14px;">Calificación - Valoración Final</th>
            <th class="borde_negro" rowspan="3" style="width:5%; height: 23px; font-size: 11px;"><b>Asig.</b><br><b>Área</b><br><b>Materia</b></th>    



            </tr>




            <tr>
            	         

            <td style="height: 23px; width: 1.2%;">  </td>

              <td class="borde_negro" colspan="7" style="width:17.5%; height: 23px;">Actividad - Contenido</td>


             <td style="height: 23px; width: 1.2%;">

           <td class="borde_negro" colspan="7" style="width:17.5%; height: 23px;">Actividad - Contenido</td>


             <td style="height: 23px; width: 1.2%;">

             <td class="borde_negro" colspan="7" style="width:17.5%; height: 23px;">Actividad - Contenido</td>


             <td style="height: 23px; width: 1.2%;">

 <td class="borde_negro" rowspan="2" style="width:2.5%; font-size: 12px; height:46px;"><b>Prom.</b></td>
    <td class="borde_negro" rowspan="2" style="width:2.5%; font-size: 12px; height:46px;"><b>Aux. Final</b></td> 
    <td class="borde_negro" rowspan="2" BGCOLOR="<?php echo $color4;?>" style="width:2.5%; font-size: 12px; height:46px;"><b>Def.</b></td>  

        <td class="borde_negro" rowspan="2" BGCOLOR="<?php echo $color0;?>" style=" width:2.5%; font-size: 12px; height:46px;"><b>Revisión 1</b></td> 
          <td class="borde_negro" rowspan="2" BGCOLOR="<?php echo $color0;?>" style=" width:2.5%; font-size: 12px; height:46px;"><b>Rev. 2</b></td>
   
  

            </tr>
           


            <tr>
            	         

            <td style="height: 23px; width: 1.2%;">  </td>

                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >1</th>  
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >2</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >3</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >4</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >5</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >6</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >7</th>


             <td style="height: 23px; width: 1.2%;">

                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >1</th>  
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >2</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >3</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >4</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >5</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >6</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >7</th>


             <td style="height: 23px; width: 1.2%;">

                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >1</th>  
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >2</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >3</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >4</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >5</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >6</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >7</th>


             <td style="height: 23px; width: 1.2%;">


  

            </tr>


            <tr>
            	         <td style="height: 23px;">
            </tr>


<!-- empiezan las filas de materia con notas -->

             <tr>
            	         


              <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['a_abrev'];?>
              	
<span style="color:red; font-size: 16px;"><b> <?php

               $a_ayuda = '';

                if ($row_datos_controlasign['a_suma'] !=1) {
                  $a_ayuda = '#';
               }

                echo $a_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 1.2%;">  </td>

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A1["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A1_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A1_L1_redon;?>"><b><?php



if ($row_datos_controlasign['a_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A1_L1;
} /* cierre numerico */
if ($row_datos_controlasign['a_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A1_L1_redon >= $comparativo_formato_1) { $alfabetico_final_A1_L1 = $alfabetico_formato_1;  }
   if ($nota_final_A1_L1_redon >= $comparativo_formato_2) { $alfabetico_final_A1_L1 = $alfabetico_formato_2;  }
   if ($nota_final_A1_L1_redon >= $comparativo_formato_3) { $alfabetico_final_A1_L1 = $alfabetico_formato_3;  }
   if ($nota_final_A1_L1_redon >= $comparativo_formato_4) { $alfabetico_final_A1_L1 = $alfabetico_formato_4;  }
   if ($nota_final_A1_L1_redon >= $comparativo_formato_5) { $alfabetico_final_A1_L1 = $alfabetico_formato_5;  }
   if ($nota_final_A1_L1_redon >= $comparativo_formato_6) { $alfabetico_final_A1_L1 = $alfabetico_formato_6;  }
   if ($nota_final_A1_L1_redon >= $comparativo_formato_7) { $alfabetico_final_A1_L1 = $alfabetico_formato_7;  }
   if ($nota_final_A1_L1_redon >= $comparativo_formato_8) { $alfabetico_final_A1_L1 = $alfabetico_formato_8;  }
   if ($nota_final_A1_L1_redon >= $comparativo_formato_9) { $alfabetico_final_A1_L1 = $alfabetico_formato_9;  }
   if ($nota_final_A1_L1_redon >= $comparativo_formato_10) { $alfabetico_final_A1_L1 = $alfabetico_formato_10;  }
   if ($nota_final_A1_L1_redon >= $comparativo_formato_11) { $alfabetico_final_A1_L1 = $alfabetico_formato_11;  }
   if ($nota_final_A1_L1_redon >= $comparativo_formato_12) { $alfabetico_final_A1_L1 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A1_L1; } /* cierre alfabetico */

if ($row_datos_controlasign['a_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A1_L1_redon >= $comparativo_formato_1) { $literal_final_A1_L1 = $literal_formato_1;  }
  if ($nota_final_A1_L1_redon >= $comparativo_formato_2) { $literal_final_A1_L1 = $literal_formato_2;  }
  if ($nota_final_A1_L1_redon >= $comparativo_formato_3) { $literal_final_A1_L1 = $literal_formato_3;  }
  if ($nota_final_A1_L1_redon >= $comparativo_formato_4) { $literal_final_A1_L1 = $literal_formato_4;  }
  if ($nota_final_A1_L1_redon >= $comparativo_formato_5) { $literal_final_A1_L1 = $literal_formato_5;  }
  if ($nota_final_A1_L1_redon >= $comparativo_formato_6) { $literal_final_A1_L1 = $literal_formato_6;  }
  if ($nota_final_A1_L1_redon >= $comparativo_formato_7) { $literal_final_A1_L1 = $literal_formato_7;  }
  if ($nota_final_A1_L1_redon >= $comparativo_formato_8) { $literal_final_A1_L1 = $literal_formato_8;  }
  if ($nota_final_A1_L1_redon >= $comparativo_formato_9) { $literal_final_A1_L1 = $literal_formato_9;  }
  if ($nota_final_A1_L1_redon >= $comparativo_formato_10) { $literal_final_A1_L1 = $literal_formato_10;  }
  if ($nota_final_A1_L1_redon >= $comparativo_formato_11) { $literal_final_A1_L1 = $literal_formato_11;  }
  if ($nota_final_A1_L1_redon >= $comparativo_formato_12) { $literal_final_A1_L1 = $literal_formato_12;  } 
  echo $literal_final_A1_L1; } /* cierre literal */
        ?> </b></span></td> 

             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A1["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A1_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A1_L2_redon;?>"><b><?php if ($row_datos_controlasign['a_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A1_L2;
} /* cierre numerico */
if ($row_datos_controlasign['a_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A1_L2_redon >= $comparativo_formato_1) { $alfabetico_final_A1_L2 = $alfabetico_formato_1;  }
   if ($nota_final_A1_L2_redon >= $comparativo_formato_2) { $alfabetico_final_A1_L2 = $alfabetico_formato_2;  }
   if ($nota_final_A1_L2_redon >= $comparativo_formato_3) { $alfabetico_final_A1_L2 = $alfabetico_formato_3;  }
   if ($nota_final_A1_L2_redon >= $comparativo_formato_4) { $alfabetico_final_A1_L2 = $alfabetico_formato_4;  }
   if ($nota_final_A1_L2_redon >= $comparativo_formato_5) { $alfabetico_final_A1_L2 = $alfabetico_formato_5;  }
   if ($nota_final_A1_L2_redon >= $comparativo_formato_6) { $alfabetico_final_A1_L2 = $alfabetico_formato_6;  }
   if ($nota_final_A1_L2_redon >= $comparativo_formato_7) { $alfabetico_final_A1_L2 = $alfabetico_formato_7;  }
   if ($nota_final_A1_L2_redon >= $comparativo_formato_8) { $alfabetico_final_A1_L2 = $alfabetico_formato_8;  }
   if ($nota_final_A1_L2_redon >= $comparativo_formato_9) { $alfabetico_final_A1_L2 = $alfabetico_formato_9;  }
   if ($nota_final_A1_L2_redon >= $comparativo_formato_10) { $alfabetico_final_A1_L2 = $alfabetico_formato_10;  }
   if ($nota_final_A1_L2_redon >= $comparativo_formato_11) { $alfabetico_final_A1_L2 = $alfabetico_formato_11;  }
   if ($nota_final_A1_L2_redon >= $comparativo_formato_12) { $alfabetico_final_A1_L2 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A1_L2; } /* cierre alfabetico */

if ($row_datos_controlasign['a_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A1_L2_redon >= $comparativo_formato_1) { $literal_final_A1_L2 = $literal_formato_1;  }
  if ($nota_final_A1_L2_redon >= $comparativo_formato_2) { $literal_final_A1_L2 = $literal_formato_2;  }
  if ($nota_final_A1_L2_redon >= $comparativo_formato_3) { $literal_final_A1_L2 = $literal_formato_3;  }
  if ($nota_final_A1_L2_redon >= $comparativo_formato_4) { $literal_final_A1_L2 = $literal_formato_4;  }
  if ($nota_final_A1_L2_redon >= $comparativo_formato_5) { $literal_final_A1_L2 = $literal_formato_5;  }
  if ($nota_final_A1_L2_redon >= $comparativo_formato_6) { $literal_final_A1_L2 = $literal_formato_6;  }
  if ($nota_final_A1_L2_redon >= $comparativo_formato_7) { $literal_final_A1_L2 = $literal_formato_7;  }
  if ($nota_final_A1_L2_redon >= $comparativo_formato_8) { $literal_final_A1_L2 = $literal_formato_8;  }
  if ($nota_final_A1_L2_redon >= $comparativo_formato_9) { $literal_final_A1_L2 = $literal_formato_9;  }
  if ($nota_final_A1_L2_redon >= $comparativo_formato_10) { $literal_final_A1_L2 = $literal_formato_10;  }
  if ($nota_final_A1_L2_redon >= $comparativo_formato_11) { $literal_final_A1_L2 = $literal_formato_11;  }
  if ($nota_final_A1_L2_redon >= $comparativo_formato_12) { $literal_final_A1_L2 = $literal_formato_12;  } 
  echo $literal_final_A1_L2; } /* cierre literal */  ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A1["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A1_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A1_L3_redon;?>"><b><?php if ($row_datos_controlasign['a_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A1_L3;
} /* cierre numerico */
if ($row_datos_controlasign['a_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A1_L3_redon >= $comparativo_formato_1) { $alfabetico_final_A1_L3 = $alfabetico_formato_1;  }
   if ($nota_final_A1_L3_redon >= $comparativo_formato_2) { $alfabetico_final_A1_L3 = $alfabetico_formato_2;  }
   if ($nota_final_A1_L3_redon >= $comparativo_formato_3) { $alfabetico_final_A1_L3 = $alfabetico_formato_3;  }
   if ($nota_final_A1_L3_redon >= $comparativo_formato_4) { $alfabetico_final_A1_L3 = $alfabetico_formato_4;  }
   if ($nota_final_A1_L3_redon >= $comparativo_formato_5) { $alfabetico_final_A1_L3 = $alfabetico_formato_5;  }
   if ($nota_final_A1_L3_redon >= $comparativo_formato_6) { $alfabetico_final_A1_L3 = $alfabetico_formato_6;  }
   if ($nota_final_A1_L3_redon >= $comparativo_formato_7) { $alfabetico_final_A1_L3 = $alfabetico_formato_7;  }
   if ($nota_final_A1_L3_redon >= $comparativo_formato_8) { $alfabetico_final_A1_L3 = $alfabetico_formato_8;  }
   if ($nota_final_A1_L3_redon >= $comparativo_formato_9) { $alfabetico_final_A1_L3 = $alfabetico_formato_9;  }
   if ($nota_final_A1_L3_redon >= $comparativo_formato_10) { $alfabetico_final_A1_L3 = $alfabetico_formato_10;  }
   if ($nota_final_A1_L3_redon >= $comparativo_formato_11) { $alfabetico_final_A1_L3 = $alfabetico_formato_11;  }
   if ($nota_final_A1_L3_redon >= $comparativo_formato_12) { $alfabetico_final_A1_L3 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A1_L3; } /* cierre alfabetico */

if ($row_datos_controlasign['a_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A1_L3_redon >= $comparativo_formato_1) { $literal_final_A1_L3 = $literal_formato_1;  }
  if ($nota_final_A1_L3_redon >= $comparativo_formato_2) { $literal_final_A1_L3 = $literal_formato_2;  }
  if ($nota_final_A1_L3_redon >= $comparativo_formato_3) { $literal_final_A1_L3 = $literal_formato_3;  }
  if ($nota_final_A1_L3_redon >= $comparativo_formato_4) { $literal_final_A1_L3 = $literal_formato_4;  }
  if ($nota_final_A1_L3_redon >= $comparativo_formato_5) { $literal_final_A1_L3 = $literal_formato_5;  }
  if ($nota_final_A1_L3_redon >= $comparativo_formato_6) { $literal_final_A1_L3 = $literal_formato_6;  }
  if ($nota_final_A1_L3_redon >= $comparativo_formato_7) { $literal_final_A1_L3 = $literal_formato_7;  }
  if ($nota_final_A1_L3_redon >= $comparativo_formato_8) { $literal_final_A1_L3 = $literal_formato_8;  }
  if ($nota_final_A1_L3_redon >= $comparativo_formato_9) { $literal_final_A1_L3 = $literal_formato_9;  }
  if ($nota_final_A1_L3_redon >= $comparativo_formato_10) { $literal_final_A1_L3 = $literal_formato_10;  }
  if ($nota_final_A1_L3_redon >= $comparativo_formato_11) { $literal_final_A1_L3 = $literal_formato_11;  }
  if ($nota_final_A1_L3_redon >= $comparativo_formato_12) { $literal_final_A1_L3 = $literal_formato_12;  } 
  echo $literal_final_A1_L3; } /* cierre literal */    ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">



<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
<?php

$Parcial_A1_L1 = 0.000000001;
$Parcial_A1_L2 = 0.000000001;
$Parcial_A1_L3 = 0.000000001;



$Nota_Pro_Final_A1_L1_entero=$nota_final_A1_L1_redon1;          
$Nota_Pro_Final_A1_L2_entero=$nota_final_A1_L2_redon1;
$Nota_Pro_Final_A1_L3_entero=$nota_final_A1_L3_redon1;

if ($Nota_Pro_Final_A1_L1_entero >= 0.1) {
  $Parcial_A1_L1 = 1;
}

if ($Nota_Pro_Final_A1_L2_entero >= 0.1) {
  $Parcial_A1_L2 = 1;
}

if ($Nota_Pro_Final_A1_L3_entero >= 0.1) {
  $Parcial_A1_L3 = 1;
}


$Num_divisor_A1_L123 = $Parcial_A1_L1+$Parcial_A1_L2+$Parcial_A1_L3;       /* ojoooo */


 $Nota_Pro_all_A1_L123 =($nota_final_A1_L1_redon+$nota_final_A1_L2_redon+$nota_final_A1_L3_redon)/$Num_divisor_A1_L123;

$Nota_Pro_all_A1_L123_decimal=number_format($Nota_Pro_all_A1_L123, 1, ',', '');  echo $Nota_Pro_all_A1_L123_decimal;?></td>




  <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 14px;">
  	<b><?php echo $row_datos_control_notas_A1["nt_AuF"];?></b></td>



<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A1_all_L123 = $Nota_Pro_all_A1_L123+$row_datos_control_notas_A1["nt_AuF"];




$Def_aux_total_A1_all_L123_redondeado1 = number_format($Def_aux_total_A1_all_L123, 1, '.', '');

$Definitiva_completa_A1_L123=number_format($Def_aux_total_A1_all_L123_redondeado1);  if ($row_datos_controlasign['a_convertir'] == 1 ) {  /* numerico */
       echo $Definitiva_completa_A1_L123;
} /* cierre numerico */
if ($row_datos_controlasign['a_convertir'] == 2 ) {  /* alfabetico */
   if ($Definitiva_completa_A1_L123 >= $comparativo_formato_1) { $alfabetico_completa_A1_L123 = $alfabetico_formato_1;  }
   if ($Definitiva_completa_A1_L123 >= $comparativo_formato_2) { $alfabetico_completa_A1_L123 = $alfabetico_formato_2;  }
   if ($Definitiva_completa_A1_L123 >= $comparativo_formato_3) { $alfabetico_completa_A1_L123 = $alfabetico_formato_3;  }
   if ($Definitiva_completa_A1_L123 >= $comparativo_formato_4) { $alfabetico_completa_A1_L123 = $alfabetico_formato_4;  }
   if ($Definitiva_completa_A1_L123 >= $comparativo_formato_5) { $alfabetico_completa_A1_L123 = $alfabetico_formato_5;  }
   if ($Definitiva_completa_A1_L123 >= $comparativo_formato_6) { $alfabetico_completa_A1_L123 = $alfabetico_formato_6;  }
   if ($Definitiva_completa_A1_L123 >= $comparativo_formato_7) { $alfabetico_completa_A1_L123 = $alfabetico_formato_7;  }
   if ($Definitiva_completa_A1_L123 >= $comparativo_formato_8) { $alfabetico_completa_A1_L123 = $alfabetico_formato_8;  }
   if ($Definitiva_completa_A1_L123 >= $comparativo_formato_9) { $alfabetico_completa_A1_L123 = $alfabetico_formato_9;  }
   if ($Definitiva_completa_A1_L123 >= $comparativo_formato_10) { $alfabetico_completa_A1_L123 = $alfabetico_formato_10;  }
   if ($Definitiva_completa_A1_L123 >= $comparativo_formato_11) { $alfabetico_completa_A1_L123 = $alfabetico_formato_11;  }
   if ($Definitiva_completa_A1_L123 >= $comparativo_formato_12) { $alfabetico_completa_A1_L123 = $alfabetico_formato_12;  }
   echo $alfabetico_completa_A1_L123; } /* cierre alfabetico */

if ($row_datos_controlasign['a_convertir'] == 3 ) {  /* literal */
  if ($Definitiva_completa_A1_L123 >= $comparativo_formato_1) { $literal_completa_A1_L123 = $literal_formato_1;  }
  if ($Definitiva_completa_A1_L123 >= $comparativo_formato_2) { $literal_completa_A1_L123 = $literal_formato_2;  }
  if ($Definitiva_completa_A1_L123 >= $comparativo_formato_3) { $literal_completa_A1_L123 = $literal_formato_3;  }
  if ($Definitiva_completa_A1_L123 >= $comparativo_formato_4) { $literal_completa_A1_L123 = $literal_formato_4;  }
  if ($Definitiva_completa_A1_L123 >= $comparativo_formato_5) { $literal_completa_A1_L123 = $literal_formato_5;  }
  if ($Definitiva_completa_A1_L123 >= $comparativo_formato_6) { $literal_completa_A1_L123 = $literal_formato_6;  }
  if ($Definitiva_completa_A1_L123 >= $comparativo_formato_7) { $literal_completa_A1_L123 = $literal_formato_7;  }
  if ($Definitiva_completa_A1_L123 >= $comparativo_formato_8) { $literal_completa_A1_L123 = $literal_formato_8;  }
  if ($Definitiva_completa_A1_L123 >= $comparativo_formato_9) { $literal_completa_A1_L123 = $literal_formato_9;  }
  if ($Definitiva_completa_A1_L123 >= $comparativo_formato_10) { $literal_completa_A1_L123 = $literal_formato_10;  }
  if ($Definitiva_completa_A1_L123 >= $comparativo_formato_11) { $literal_completa_A1_L123 = $literal_formato_11;  }
  if ($Definitiva_completa_A1_L123 >= $comparativo_formato_12) { $literal_completa_A1_L123 = $literal_formato_12;  } 
  echo $literal_completa_A1_L123; } /* cierre literal */ ?></b></td>


<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
	<?php echo $row_datos_control_notas_A1['rev_uno'];?></td>

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
	<?php echo $row_datos_control_notas_A1['rev_dos'];?></td>



<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5%; height: 23px;"><?php echo $row_datos_controlasign['a_abrev'];?>
	
<span style="color:red; font-size: 16px;"><b> <?php

               $a_ayuda = '';

                if ($row_datos_controlasign['a_suma'] !=1) {
                  $a_ayuda = '#';
               }

                echo $a_ayuda;?></b></span>

</td>




            </tr>








            <tr>
                       


              <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['b_abrev'];?>
                
<span style="color:red; font-size: 16px;"><b> <?php

               $b_ayuda = '';

                if ($row_datos_controlasign['b_suma'] !=1) {
                  $b_ayuda = '#';
               }

                echo $b_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 1.2%;">  </td>

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A2["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A2_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A2_L1_redon;?>"><b><?php



if ($row_datos_controlasign['b_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A2_L1;
} /* cierre numerico */
if ($row_datos_controlasign['b_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A2_L1_redon >= $comparativo_formato_1) { $alfabetico_final_A2_L1 = $alfabetico_formato_1;  }
   if ($nota_final_A2_L1_redon >= $comparativo_formato_2) { $alfabetico_final_A2_L1 = $alfabetico_formato_2;  }
   if ($nota_final_A2_L1_redon >= $comparativo_formato_3) { $alfabetico_final_A2_L1 = $alfabetico_formato_3;  }
   if ($nota_final_A2_L1_redon >= $comparativo_formato_4) { $alfabetico_final_A2_L1 = $alfabetico_formato_4;  }
   if ($nota_final_A2_L1_redon >= $comparativo_formato_5) { $alfabetico_final_A2_L1 = $alfabetico_formato_5;  }
   if ($nota_final_A2_L1_redon >= $comparativo_formato_6) { $alfabetico_final_A2_L1 = $alfabetico_formato_6;  }
   if ($nota_final_A2_L1_redon >= $comparativo_formato_7) { $alfabetico_final_A2_L1 = $alfabetico_formato_7;  }
   if ($nota_final_A2_L1_redon >= $comparativo_formato_8) { $alfabetico_final_A2_L1 = $alfabetico_formato_8;  }
   if ($nota_final_A2_L1_redon >= $comparativo_formato_9) { $alfabetico_final_A2_L1 = $alfabetico_formato_9;  }
   if ($nota_final_A2_L1_redon >= $comparativo_formato_10) { $alfabetico_final_A2_L1 = $alfabetico_formato_10;  }
   if ($nota_final_A2_L1_redon >= $comparativo_formato_11) { $alfabetico_final_A2_L1 = $alfabetico_formato_11;  }
   if ($nota_final_A2_L1_redon >= $comparativo_formato_12) { $alfabetico_final_A2_L1 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A2_L1; } /* cierre alfabetico */

if ($row_datos_controlasign['b_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A2_L1_redon >= $comparativo_formato_1) { $literal_final_A2_L1 = $literal_formato_1;  }
  if ($nota_final_A2_L1_redon >= $comparativo_formato_2) { $literal_final_A2_L1 = $literal_formato_2;  }
  if ($nota_final_A2_L1_redon >= $comparativo_formato_3) { $literal_final_A2_L1 = $literal_formato_3;  }
  if ($nota_final_A2_L1_redon >= $comparativo_formato_4) { $literal_final_A2_L1 = $literal_formato_4;  }
  if ($nota_final_A2_L1_redon >= $comparativo_formato_5) { $literal_final_A2_L1 = $literal_formato_5;  }
  if ($nota_final_A2_L1_redon >= $comparativo_formato_6) { $literal_final_A2_L1 = $literal_formato_6;  }
  if ($nota_final_A2_L1_redon >= $comparativo_formato_7) { $literal_final_A2_L1 = $literal_formato_7;  }
  if ($nota_final_A2_L1_redon >= $comparativo_formato_8) { $literal_final_A2_L1 = $literal_formato_8;  }
  if ($nota_final_A2_L1_redon >= $comparativo_formato_9) { $literal_final_A2_L1 = $literal_formato_9;  }
  if ($nota_final_A2_L1_redon >= $comparativo_formato_10) { $literal_final_A2_L1 = $literal_formato_10;  }
  if ($nota_final_A2_L1_redon >= $comparativo_formato_11) { $literal_final_A2_L1 = $literal_formato_11;  }
  if ($nota_final_A2_L1_redon >= $comparativo_formato_12) { $literal_final_A2_L1 = $literal_formato_12;  } 
  echo $literal_final_A2_L1; } /* cierre literal */
        ?> </b></span></td> 

             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A2["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A2_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A2_L2_redon;?>"><b><?php if ($row_datos_controlasign['b_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A2_L2;
} /* cierre numerico */
if ($row_datos_controlasign['b_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A2_L2_redon >= $comparativo_formato_1) { $alfabetico_final_A2_L2 = $alfabetico_formato_1;  }
   if ($nota_final_A2_L2_redon >= $comparativo_formato_2) { $alfabetico_final_A2_L2 = $alfabetico_formato_2;  }
   if ($nota_final_A2_L2_redon >= $comparativo_formato_3) { $alfabetico_final_A2_L2 = $alfabetico_formato_3;  }
   if ($nota_final_A2_L2_redon >= $comparativo_formato_4) { $alfabetico_final_A2_L2 = $alfabetico_formato_4;  }
   if ($nota_final_A2_L2_redon >= $comparativo_formato_5) { $alfabetico_final_A2_L2 = $alfabetico_formato_5;  }
   if ($nota_final_A2_L2_redon >= $comparativo_formato_6) { $alfabetico_final_A2_L2 = $alfabetico_formato_6;  }
   if ($nota_final_A2_L2_redon >= $comparativo_formato_7) { $alfabetico_final_A2_L2 = $alfabetico_formato_7;  }
   if ($nota_final_A2_L2_redon >= $comparativo_formato_8) { $alfabetico_final_A2_L2 = $alfabetico_formato_8;  }
   if ($nota_final_A2_L2_redon >= $comparativo_formato_9) { $alfabetico_final_A2_L2 = $alfabetico_formato_9;  }
   if ($nota_final_A2_L2_redon >= $comparativo_formato_10) { $alfabetico_final_A2_L2 = $alfabetico_formato_10;  }
   if ($nota_final_A2_L2_redon >= $comparativo_formato_11) { $alfabetico_final_A2_L2 = $alfabetico_formato_11;  }
   if ($nota_final_A2_L2_redon >= $comparativo_formato_12) { $alfabetico_final_A2_L2 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A2_L2; } /* cierre alfabetico */

if ($row_datos_controlasign['b_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A2_L2_redon >= $comparativo_formato_1) { $literal_final_A2_L2 = $literal_formato_1;  }
  if ($nota_final_A2_L2_redon >= $comparativo_formato_2) { $literal_final_A2_L2 = $literal_formato_2;  }
  if ($nota_final_A2_L2_redon >= $comparativo_formato_3) { $literal_final_A2_L2 = $literal_formato_3;  }
  if ($nota_final_A2_L2_redon >= $comparativo_formato_4) { $literal_final_A2_L2 = $literal_formato_4;  }
  if ($nota_final_A2_L2_redon >= $comparativo_formato_5) { $literal_final_A2_L2 = $literal_formato_5;  }
  if ($nota_final_A2_L2_redon >= $comparativo_formato_6) { $literal_final_A2_L2 = $literal_formato_6;  }
  if ($nota_final_A2_L2_redon >= $comparativo_formato_7) { $literal_final_A2_L2 = $literal_formato_7;  }
  if ($nota_final_A2_L2_redon >= $comparativo_formato_8) { $literal_final_A2_L2 = $literal_formato_8;  }
  if ($nota_final_A2_L2_redon >= $comparativo_formato_9) { $literal_final_A2_L2 = $literal_formato_9;  }
  if ($nota_final_A2_L2_redon >= $comparativo_formato_10) { $literal_final_A2_L2 = $literal_formato_10;  }
  if ($nota_final_A2_L2_redon >= $comparativo_formato_11) { $literal_final_A2_L2 = $literal_formato_11;  }
  if ($nota_final_A2_L2_redon >= $comparativo_formato_12) { $literal_final_A2_L2 = $literal_formato_12;  } 
  echo $literal_final_A2_L2; } /* cierre literal */  ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A2["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A2_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A2_L3_redon;?>"><b><?php if ($row_datos_controlasign['b_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A2_L3;
} /* cierre numerico */
if ($row_datos_controlasign['b_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A2_L3_redon >= $comparativo_formato_1) { $alfabetico_final_A2_L3 = $alfabetico_formato_1;  }
   if ($nota_final_A2_L3_redon >= $comparativo_formato_2) { $alfabetico_final_A2_L3 = $alfabetico_formato_2;  }
   if ($nota_final_A2_L3_redon >= $comparativo_formato_3) { $alfabetico_final_A2_L3 = $alfabetico_formato_3;  }
   if ($nota_final_A2_L3_redon >= $comparativo_formato_4) { $alfabetico_final_A2_L3 = $alfabetico_formato_4;  }
   if ($nota_final_A2_L3_redon >= $comparativo_formato_5) { $alfabetico_final_A2_L3 = $alfabetico_formato_5;  }
   if ($nota_final_A2_L3_redon >= $comparativo_formato_6) { $alfabetico_final_A2_L3 = $alfabetico_formato_6;  }
   if ($nota_final_A2_L3_redon >= $comparativo_formato_7) { $alfabetico_final_A2_L3 = $alfabetico_formato_7;  }
   if ($nota_final_A2_L3_redon >= $comparativo_formato_8) { $alfabetico_final_A2_L3 = $alfabetico_formato_8;  }
   if ($nota_final_A2_L3_redon >= $comparativo_formato_9) { $alfabetico_final_A2_L3 = $alfabetico_formato_9;  }
   if ($nota_final_A2_L3_redon >= $comparativo_formato_10) { $alfabetico_final_A2_L3 = $alfabetico_formato_10;  }
   if ($nota_final_A2_L3_redon >= $comparativo_formato_11) { $alfabetico_final_A2_L3 = $alfabetico_formato_11;  }
   if ($nota_final_A2_L3_redon >= $comparativo_formato_12) { $alfabetico_final_A2_L3 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A2_L3; } /* cierre alfabetico */

if ($row_datos_controlasign['b_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A2_L3_redon >= $comparativo_formato_1) { $literal_final_A2_L3 = $literal_formato_1;  }
  if ($nota_final_A2_L3_redon >= $comparativo_formato_2) { $literal_final_A2_L3 = $literal_formato_2;  }
  if ($nota_final_A2_L3_redon >= $comparativo_formato_3) { $literal_final_A2_L3 = $literal_formato_3;  }
  if ($nota_final_A2_L3_redon >= $comparativo_formato_4) { $literal_final_A2_L3 = $literal_formato_4;  }
  if ($nota_final_A2_L3_redon >= $comparativo_formato_5) { $literal_final_A2_L3 = $literal_formato_5;  }
  if ($nota_final_A2_L3_redon >= $comparativo_formato_6) { $literal_final_A2_L3 = $literal_formato_6;  }
  if ($nota_final_A2_L3_redon >= $comparativo_formato_7) { $literal_final_A2_L3 = $literal_formato_7;  }
  if ($nota_final_A2_L3_redon >= $comparativo_formato_8) { $literal_final_A2_L3 = $literal_formato_8;  }
  if ($nota_final_A2_L3_redon >= $comparativo_formato_9) { $literal_final_A2_L3 = $literal_formato_9;  }
  if ($nota_final_A2_L3_redon >= $comparativo_formato_10) { $literal_final_A2_L3 = $literal_formato_10;  }
  if ($nota_final_A2_L3_redon >= $comparativo_formato_11) { $literal_final_A2_L3 = $literal_formato_11;  }
  if ($nota_final_A2_L3_redon >= $comparativo_formato_12) { $literal_final_A2_L3 = $literal_formato_12;  } 
  echo $literal_final_A2_L3; } /* cierre literal */    ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">



<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
<?php

$Parcial_A2_L1 = 0.000000001;
$Parcial_A2_L2 = 0.000000001;
$Parcial_A2_L3 = 0.000000001;



$Nota_Pro_Final_A2_L1_entero=$nota_final_A2_L1_redon1;          
$Nota_Pro_Final_A2_L2_entero=$nota_final_A2_L2_redon1;
$Nota_Pro_Final_A2_L3_entero=$nota_final_A2_L3_redon1;

if ($Nota_Pro_Final_A2_L1_entero >= 0.1) {
  $Parcial_A2_L1 = 1;
}

if ($Nota_Pro_Final_A2_L2_entero >= 0.1) {
  $Parcial_A2_L2 = 1;
}

if ($Nota_Pro_Final_A2_L3_entero >= 0.1) {
  $Parcial_A2_L3 = 1;
}


$Num_divisor_A2_L123 = $Parcial_A2_L1+$Parcial_A2_L2+$Parcial_A2_L3;       /* ojoooo */


 $Nota_Pro_all_A2_L123 =($nota_final_A2_L1_redon+$nota_final_A2_L2_redon+$nota_final_A2_L3_redon)/$Num_divisor_A2_L123;

$Nota_Pro_all_A2_L123_decimal=number_format($Nota_Pro_all_A2_L123, 1, ',', '');  echo $Nota_Pro_all_A2_L123_decimal;?></td>




  <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 14px;">
    <b><?php echo $row_datos_control_notas_A2["nt_AuF"];?></b></td>



<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A2_all_L123 = $Nota_Pro_all_A2_L123+$row_datos_control_notas_A2["nt_AuF"];




$Def_aux_total_A2_all_L123_redondeado1 = number_format($Def_aux_total_A2_all_L123, 1, '.', '');

$Definitiva_completa_A2_L123=number_format($Def_aux_total_A2_all_L123_redondeado1);  if ($row_datos_controlasign['b_convertir'] == 1 ) {  /* numerico */
       echo $Definitiva_completa_A2_L123;
} /* cierre numerico */
if ($row_datos_controlasign['b_convertir'] == 2 ) {  /* alfabetico */
   if ($Definitiva_completa_A2_L123 >= $comparativo_formato_1) { $alfabetico_completa_A2_L123 = $alfabetico_formato_1;  }
   if ($Definitiva_completa_A2_L123 >= $comparativo_formato_2) { $alfabetico_completa_A2_L123 = $alfabetico_formato_2;  }
   if ($Definitiva_completa_A2_L123 >= $comparativo_formato_3) { $alfabetico_completa_A2_L123 = $alfabetico_formato_3;  }
   if ($Definitiva_completa_A2_L123 >= $comparativo_formato_4) { $alfabetico_completa_A2_L123 = $alfabetico_formato_4;  }
   if ($Definitiva_completa_A2_L123 >= $comparativo_formato_5) { $alfabetico_completa_A2_L123 = $alfabetico_formato_5;  }
   if ($Definitiva_completa_A2_L123 >= $comparativo_formato_6) { $alfabetico_completa_A2_L123 = $alfabetico_formato_6;  }
   if ($Definitiva_completa_A2_L123 >= $comparativo_formato_7) { $alfabetico_completa_A2_L123 = $alfabetico_formato_7;  }
   if ($Definitiva_completa_A2_L123 >= $comparativo_formato_8) { $alfabetico_completa_A2_L123 = $alfabetico_formato_8;  }
   if ($Definitiva_completa_A2_L123 >= $comparativo_formato_9) { $alfabetico_completa_A2_L123 = $alfabetico_formato_9;  }
   if ($Definitiva_completa_A2_L123 >= $comparativo_formato_10) { $alfabetico_completa_A2_L123 = $alfabetico_formato_10;  }
   if ($Definitiva_completa_A2_L123 >= $comparativo_formato_11) { $alfabetico_completa_A2_L123 = $alfabetico_formato_11;  }
   if ($Definitiva_completa_A2_L123 >= $comparativo_formato_12) { $alfabetico_completa_A2_L123 = $alfabetico_formato_12;  }
   echo $alfabetico_completa_A2_L123; } /* cierre alfabetico */

if ($row_datos_controlasign['b_convertir'] == 3 ) {  /* literal */
  if ($Definitiva_completa_A2_L123 >= $comparativo_formato_1) { $literal_completa_A2_L123 = $literal_formato_1;  }
  if ($Definitiva_completa_A2_L123 >= $comparativo_formato_2) { $literal_completa_A2_L123 = $literal_formato_2;  }
  if ($Definitiva_completa_A2_L123 >= $comparativo_formato_3) { $literal_completa_A2_L123 = $literal_formato_3;  }
  if ($Definitiva_completa_A2_L123 >= $comparativo_formato_4) { $literal_completa_A2_L123 = $literal_formato_4;  }
  if ($Definitiva_completa_A2_L123 >= $comparativo_formato_5) { $literal_completa_A2_L123 = $literal_formato_5;  }
  if ($Definitiva_completa_A2_L123 >= $comparativo_formato_6) { $literal_completa_A2_L123 = $literal_formato_6;  }
  if ($Definitiva_completa_A2_L123 >= $comparativo_formato_7) { $literal_completa_A2_L123 = $literal_formato_7;  }
  if ($Definitiva_completa_A2_L123 >= $comparativo_formato_8) { $literal_completa_A2_L123 = $literal_formato_8;  }
  if ($Definitiva_completa_A2_L123 >= $comparativo_formato_9) { $literal_completa_A2_L123 = $literal_formato_9;  }
  if ($Definitiva_completa_A2_L123 >= $comparativo_formato_10) { $literal_completa_A2_L123 = $literal_formato_10;  }
  if ($Definitiva_completa_A2_L123 >= $comparativo_formato_11) { $literal_completa_A2_L123 = $literal_formato_11;  }
  if ($Definitiva_completa_A2_L123 >= $comparativo_formato_12) { $literal_completa_A2_L123 = $literal_formato_12;  } 
  echo $literal_completa_A2_L123; } /* cierre literal */ ?></b></td>


<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A2['rev_uno'];?></td>

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A2['rev_dos'];?></td>



<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5%; height: 23px;"><?php echo $row_datos_controlasign['b_abrev'];?>
  
<span style="color:red; font-size: 16px;"><b> <?php

               $b_ayuda = '';

                if ($row_datos_controlasign['b_suma'] !=1) {
                  $b_ayuda = '#';
               }

                echo $b_ayuda;?></b></span>

</td>




            </tr>





            <tr>
                       


              <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['c_abrev'];?>
                
<span style="color:red; font-size: 16px;"><b> <?php

               $c_ayuda = '';

                if ($row_datos_controlasign['c_suma'] !=1) {
                  $c_ayuda = '#';
               }

                echo $c_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 1.2%;">  </td>

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A3["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A3_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A3_L1_redon;?>"><b><?php



if ($row_datos_controlasign['c_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A3_L1;
} /* cierre numerico */
if ($row_datos_controlasign['c_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A3_L1_redon >= $comparativo_formato_1) { $alfabetico_final_A3_L1 = $alfabetico_formato_1;  }
   if ($nota_final_A3_L1_redon >= $comparativo_formato_2) { $alfabetico_final_A3_L1 = $alfabetico_formato_2;  }
   if ($nota_final_A3_L1_redon >= $comparativo_formato_3) { $alfabetico_final_A3_L1 = $alfabetico_formato_3;  }
   if ($nota_final_A3_L1_redon >= $comparativo_formato_4) { $alfabetico_final_A3_L1 = $alfabetico_formato_4;  }
   if ($nota_final_A3_L1_redon >= $comparativo_formato_5) { $alfabetico_final_A3_L1 = $alfabetico_formato_5;  }
   if ($nota_final_A3_L1_redon >= $comparativo_formato_6) { $alfabetico_final_A3_L1 = $alfabetico_formato_6;  }
   if ($nota_final_A3_L1_redon >= $comparativo_formato_7) { $alfabetico_final_A3_L1 = $alfabetico_formato_7;  }
   if ($nota_final_A3_L1_redon >= $comparativo_formato_8) { $alfabetico_final_A3_L1 = $alfabetico_formato_8;  }
   if ($nota_final_A3_L1_redon >= $comparativo_formato_9) { $alfabetico_final_A3_L1 = $alfabetico_formato_9;  }
   if ($nota_final_A3_L1_redon >= $comparativo_formato_10) { $alfabetico_final_A3_L1 = $alfabetico_formato_10;  }
   if ($nota_final_A3_L1_redon >= $comparativo_formato_11) { $alfabetico_final_A3_L1 = $alfabetico_formato_11;  }
   if ($nota_final_A3_L1_redon >= $comparativo_formato_12) { $alfabetico_final_A3_L1 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A3_L1; } /* cierre alfabetico */

if ($row_datos_controlasign['c_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A3_L1_redon >= $comparativo_formato_1) { $literal_final_A3_L1 = $literal_formato_1;  }
  if ($nota_final_A3_L1_redon >= $comparativo_formato_2) { $literal_final_A3_L1 = $literal_formato_2;  }
  if ($nota_final_A3_L1_redon >= $comparativo_formato_3) { $literal_final_A3_L1 = $literal_formato_3;  }
  if ($nota_final_A3_L1_redon >= $comparativo_formato_4) { $literal_final_A3_L1 = $literal_formato_4;  }
  if ($nota_final_A3_L1_redon >= $comparativo_formato_5) { $literal_final_A3_L1 = $literal_formato_5;  }
  if ($nota_final_A3_L1_redon >= $comparativo_formato_6) { $literal_final_A3_L1 = $literal_formato_6;  }
  if ($nota_final_A3_L1_redon >= $comparativo_formato_7) { $literal_final_A3_L1 = $literal_formato_7;  }
  if ($nota_final_A3_L1_redon >= $comparativo_formato_8) { $literal_final_A3_L1 = $literal_formato_8;  }
  if ($nota_final_A3_L1_redon >= $comparativo_formato_9) { $literal_final_A3_L1 = $literal_formato_9;  }
  if ($nota_final_A3_L1_redon >= $comparativo_formato_10) { $literal_final_A3_L1 = $literal_formato_10;  }
  if ($nota_final_A3_L1_redon >= $comparativo_formato_11) { $literal_final_A3_L1 = $literal_formato_11;  }
  if ($nota_final_A3_L1_redon >= $comparativo_formato_12) { $literal_final_A3_L1 = $literal_formato_12;  } 
  echo $literal_final_A3_L1; } /* cierre literal */
        ?> </b></span></td> 

             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A3["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A3_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A3_L2_redon;?>"><b><?php if ($row_datos_controlasign['c_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A3_L2;
} /* cierre numerico */
if ($row_datos_controlasign['c_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A3_L2_redon >= $comparativo_formato_1) { $alfabetico_final_A3_L2 = $alfabetico_formato_1;  }
   if ($nota_final_A3_L2_redon >= $comparativo_formato_2) { $alfabetico_final_A3_L2 = $alfabetico_formato_2;  }
   if ($nota_final_A3_L2_redon >= $comparativo_formato_3) { $alfabetico_final_A3_L2 = $alfabetico_formato_3;  }
   if ($nota_final_A3_L2_redon >= $comparativo_formato_4) { $alfabetico_final_A3_L2 = $alfabetico_formato_4;  }
   if ($nota_final_A3_L2_redon >= $comparativo_formato_5) { $alfabetico_final_A3_L2 = $alfabetico_formato_5;  }
   if ($nota_final_A3_L2_redon >= $comparativo_formato_6) { $alfabetico_final_A3_L2 = $alfabetico_formato_6;  }
   if ($nota_final_A3_L2_redon >= $comparativo_formato_7) { $alfabetico_final_A3_L2 = $alfabetico_formato_7;  }
   if ($nota_final_A3_L2_redon >= $comparativo_formato_8) { $alfabetico_final_A3_L2 = $alfabetico_formato_8;  }
   if ($nota_final_A3_L2_redon >= $comparativo_formato_9) { $alfabetico_final_A3_L2 = $alfabetico_formato_9;  }
   if ($nota_final_A3_L2_redon >= $comparativo_formato_10) { $alfabetico_final_A3_L2 = $alfabetico_formato_10;  }
   if ($nota_final_A3_L2_redon >= $comparativo_formato_11) { $alfabetico_final_A3_L2 = $alfabetico_formato_11;  }
   if ($nota_final_A3_L2_redon >= $comparativo_formato_12) { $alfabetico_final_A3_L2 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A3_L2; } /* cierre alfabetico */

if ($row_datos_controlasign['c_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A3_L2_redon >= $comparativo_formato_1) { $literal_final_A3_L2 = $literal_formato_1;  }
  if ($nota_final_A3_L2_redon >= $comparativo_formato_2) { $literal_final_A3_L2 = $literal_formato_2;  }
  if ($nota_final_A3_L2_redon >= $comparativo_formato_3) { $literal_final_A3_L2 = $literal_formato_3;  }
  if ($nota_final_A3_L2_redon >= $comparativo_formato_4) { $literal_final_A3_L2 = $literal_formato_4;  }
  if ($nota_final_A3_L2_redon >= $comparativo_formato_5) { $literal_final_A3_L2 = $literal_formato_5;  }
  if ($nota_final_A3_L2_redon >= $comparativo_formato_6) { $literal_final_A3_L2 = $literal_formato_6;  }
  if ($nota_final_A3_L2_redon >= $comparativo_formato_7) { $literal_final_A3_L2 = $literal_formato_7;  }
  if ($nota_final_A3_L2_redon >= $comparativo_formato_8) { $literal_final_A3_L2 = $literal_formato_8;  }
  if ($nota_final_A3_L2_redon >= $comparativo_formato_9) { $literal_final_A3_L2 = $literal_formato_9;  }
  if ($nota_final_A3_L2_redon >= $comparativo_formato_10) { $literal_final_A3_L2 = $literal_formato_10;  }
  if ($nota_final_A3_L2_redon >= $comparativo_formato_11) { $literal_final_A3_L2 = $literal_formato_11;  }
  if ($nota_final_A3_L2_redon >= $comparativo_formato_12) { $literal_final_A3_L2 = $literal_formato_12;  } 
  echo $literal_final_A3_L2; } /* cierre literal */  ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A3["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A3_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A3_L3_redon;?>"><b><?php if ($row_datos_controlasign['c_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A3_L3;
} /* cierre numerico */
if ($row_datos_controlasign['c_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A3_L3_redon >= $comparativo_formato_1) { $alfabetico_final_A3_L3 = $alfabetico_formato_1;  }
   if ($nota_final_A3_L3_redon >= $comparativo_formato_2) { $alfabetico_final_A3_L3 = $alfabetico_formato_2;  }
   if ($nota_final_A3_L3_redon >= $comparativo_formato_3) { $alfabetico_final_A3_L3 = $alfabetico_formato_3;  }
   if ($nota_final_A3_L3_redon >= $comparativo_formato_4) { $alfabetico_final_A3_L3 = $alfabetico_formato_4;  }
   if ($nota_final_A3_L3_redon >= $comparativo_formato_5) { $alfabetico_final_A3_L3 = $alfabetico_formato_5;  }
   if ($nota_final_A3_L3_redon >= $comparativo_formato_6) { $alfabetico_final_A3_L3 = $alfabetico_formato_6;  }
   if ($nota_final_A3_L3_redon >= $comparativo_formato_7) { $alfabetico_final_A3_L3 = $alfabetico_formato_7;  }
   if ($nota_final_A3_L3_redon >= $comparativo_formato_8) { $alfabetico_final_A3_L3 = $alfabetico_formato_8;  }
   if ($nota_final_A3_L3_redon >= $comparativo_formato_9) { $alfabetico_final_A3_L3 = $alfabetico_formato_9;  }
   if ($nota_final_A3_L3_redon >= $comparativo_formato_10) { $alfabetico_final_A3_L3 = $alfabetico_formato_10;  }
   if ($nota_final_A3_L3_redon >= $comparativo_formato_11) { $alfabetico_final_A3_L3 = $alfabetico_formato_11;  }
   if ($nota_final_A3_L3_redon >= $comparativo_formato_12) { $alfabetico_final_A3_L3 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A3_L3; } /* cierre alfabetico */

if ($row_datos_controlasign['c_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A3_L3_redon >= $comparativo_formato_1) { $literal_final_A3_L3 = $literal_formato_1;  }
  if ($nota_final_A3_L3_redon >= $comparativo_formato_2) { $literal_final_A3_L3 = $literal_formato_2;  }
  if ($nota_final_A3_L3_redon >= $comparativo_formato_3) { $literal_final_A3_L3 = $literal_formato_3;  }
  if ($nota_final_A3_L3_redon >= $comparativo_formato_4) { $literal_final_A3_L3 = $literal_formato_4;  }
  if ($nota_final_A3_L3_redon >= $comparativo_formato_5) { $literal_final_A3_L3 = $literal_formato_5;  }
  if ($nota_final_A3_L3_redon >= $comparativo_formato_6) { $literal_final_A3_L3 = $literal_formato_6;  }
  if ($nota_final_A3_L3_redon >= $comparativo_formato_7) { $literal_final_A3_L3 = $literal_formato_7;  }
  if ($nota_final_A3_L3_redon >= $comparativo_formato_8) { $literal_final_A3_L3 = $literal_formato_8;  }
  if ($nota_final_A3_L3_redon >= $comparativo_formato_9) { $literal_final_A3_L3 = $literal_formato_9;  }
  if ($nota_final_A3_L3_redon >= $comparativo_formato_10) { $literal_final_A3_L3 = $literal_formato_10;  }
  if ($nota_final_A3_L3_redon >= $comparativo_formato_11) { $literal_final_A3_L3 = $literal_formato_11;  }
  if ($nota_final_A3_L3_redon >= $comparativo_formato_12) { $literal_final_A3_L3 = $literal_formato_12;  } 
  echo $literal_final_A3_L3; } /* cierre literal */    ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">



<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
<?php

$Parcial_A3_L1 = 0.000000001;
$Parcial_A3_L2 = 0.000000001;
$Parcial_A3_L3 = 0.000000001;



$Nota_Pro_Final_A3_L1_entero=$nota_final_A3_L1_redon1;          
$Nota_Pro_Final_A3_L2_entero=$nota_final_A3_L2_redon1;
$Nota_Pro_Final_A3_L3_entero=$nota_final_A3_L3_redon1;

if ($Nota_Pro_Final_A3_L1_entero >= 0.1) {
  $Parcial_A3_L1 = 1;
}

if ($Nota_Pro_Final_A3_L2_entero >= 0.1) {
  $Parcial_A3_L2 = 1;
}

if ($Nota_Pro_Final_A3_L3_entero >= 0.1) {
  $Parcial_A3_L3 = 1;
}


$Num_divisor_A3_L123 = $Parcial_A3_L1+$Parcial_A3_L2+$Parcial_A3_L3;       /* ojoooo */


 $Nota_Pro_all_A3_L123 =($nota_final_A3_L1_redon+$nota_final_A3_L2_redon+$nota_final_A3_L3_redon)/$Num_divisor_A3_L123;

$Nota_Pro_all_A3_L123_decimal=number_format($Nota_Pro_all_A3_L123, 1, ',', '');  echo $Nota_Pro_all_A3_L123_decimal;?></td>




  <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 14px;">
    <b><?php echo $row_datos_control_notas_A3["nt_AuF"];?></b></td>



<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A3_all_L123 = $Nota_Pro_all_A3_L123+$row_datos_control_notas_A3["nt_AuF"];




$Def_aux_total_A3_all_L123_redondeado1 = number_format($Def_aux_total_A3_all_L123, 1, '.', '');

$Definitiva_completa_A3_L123=number_format($Def_aux_total_A3_all_L123_redondeado1);  if ($row_datos_controlasign['c_convertir'] == 1 ) {  /* numerico */
       echo $Definitiva_completa_A3_L123;
} /* cierre numerico */
if ($row_datos_controlasign['c_convertir'] == 2 ) {  /* alfabetico */
   if ($Definitiva_completa_A3_L123 >= $comparativo_formato_1) { $alfabetico_completa_A3_L123 = $alfabetico_formato_1;  }
   if ($Definitiva_completa_A3_L123 >= $comparativo_formato_2) { $alfabetico_completa_A3_L123 = $alfabetico_formato_2;  }
   if ($Definitiva_completa_A3_L123 >= $comparativo_formato_3) { $alfabetico_completa_A3_L123 = $alfabetico_formato_3;  }
   if ($Definitiva_completa_A3_L123 >= $comparativo_formato_4) { $alfabetico_completa_A3_L123 = $alfabetico_formato_4;  }
   if ($Definitiva_completa_A3_L123 >= $comparativo_formato_5) { $alfabetico_completa_A3_L123 = $alfabetico_formato_5;  }
   if ($Definitiva_completa_A3_L123 >= $comparativo_formato_6) { $alfabetico_completa_A3_L123 = $alfabetico_formato_6;  }
   if ($Definitiva_completa_A3_L123 >= $comparativo_formato_7) { $alfabetico_completa_A3_L123 = $alfabetico_formato_7;  }
   if ($Definitiva_completa_A3_L123 >= $comparativo_formato_8) { $alfabetico_completa_A3_L123 = $alfabetico_formato_8;  }
   if ($Definitiva_completa_A3_L123 >= $comparativo_formato_9) { $alfabetico_completa_A3_L123 = $alfabetico_formato_9;  }
   if ($Definitiva_completa_A3_L123 >= $comparativo_formato_10) { $alfabetico_completa_A3_L123 = $alfabetico_formato_10;  }
   if ($Definitiva_completa_A3_L123 >= $comparativo_formato_11) { $alfabetico_completa_A3_L123 = $alfabetico_formato_11;  }
   if ($Definitiva_completa_A3_L123 >= $comparativo_formato_12) { $alfabetico_completa_A3_L123 = $alfabetico_formato_12;  }
   echo $alfabetico_completa_A3_L123; } /* cierre alfabetico */

if ($row_datos_controlasign['c_convertir'] == 3 ) {  /* literal */
  if ($Definitiva_completa_A3_L123 >= $comparativo_formato_1) { $literal_completa_A3_L123 = $literal_formato_1;  }
  if ($Definitiva_completa_A3_L123 >= $comparativo_formato_2) { $literal_completa_A3_L123 = $literal_formato_2;  }
  if ($Definitiva_completa_A3_L123 >= $comparativo_formato_3) { $literal_completa_A3_L123 = $literal_formato_3;  }
  if ($Definitiva_completa_A3_L123 >= $comparativo_formato_4) { $literal_completa_A3_L123 = $literal_formato_4;  }
  if ($Definitiva_completa_A3_L123 >= $comparativo_formato_5) { $literal_completa_A3_L123 = $literal_formato_5;  }
  if ($Definitiva_completa_A3_L123 >= $comparativo_formato_6) { $literal_completa_A3_L123 = $literal_formato_6;  }
  if ($Definitiva_completa_A3_L123 >= $comparativo_formato_7) { $literal_completa_A3_L123 = $literal_formato_7;  }
  if ($Definitiva_completa_A3_L123 >= $comparativo_formato_8) { $literal_completa_A3_L123 = $literal_formato_8;  }
  if ($Definitiva_completa_A3_L123 >= $comparativo_formato_9) { $literal_completa_A3_L123 = $literal_formato_9;  }
  if ($Definitiva_completa_A3_L123 >= $comparativo_formato_10) { $literal_completa_A3_L123 = $literal_formato_10;  }
  if ($Definitiva_completa_A3_L123 >= $comparativo_formato_11) { $literal_completa_A3_L123 = $literal_formato_11;  }
  if ($Definitiva_completa_A3_L123 >= $comparativo_formato_12) { $literal_completa_A3_L123 = $literal_formato_12;  } 
  echo $literal_completa_A3_L123; } /* cierre literal */ ?></b></td>


<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A3['rev_uno'];?></td>

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A3['rev_dos'];?></td>



<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5%; height: 23px;"><?php echo $row_datos_controlasign['c_abrev'];?>
  
<span style="color:red; font-size: 16px;"><b> <?php

               $c_ayuda = '';

                if ($row_datos_controlasign['c_suma'] !=1) {
                  $c_ayuda = '#';
               }

                echo $c_ayuda;?></b></span>

</td>




            </tr>


            <tr>
                       


              <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['d_abrev'];?>
                
<span style="color:red; font-size: 16px;"><b> <?php

               $d_ayuda = '';

                if ($row_datos_controlasign['d_suma'] !=1) {
                  $d_ayuda = '#';
               }

                echo $d_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 1.2%;">  </td>

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A4["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A4_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A4_L1_redon;?>"><b><?php



if ($row_datos_controlasign['d_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A4_L1;
} /* cierre numerico */
if ($row_datos_controlasign['d_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A4_L1_redon >= $comparativo_formato_1) { $alfabetico_final_A4_L1 = $alfabetico_formato_1;  }
   if ($nota_final_A4_L1_redon >= $comparativo_formato_2) { $alfabetico_final_A4_L1 = $alfabetico_formato_2;  }
   if ($nota_final_A4_L1_redon >= $comparativo_formato_3) { $alfabetico_final_A4_L1 = $alfabetico_formato_3;  }
   if ($nota_final_A4_L1_redon >= $comparativo_formato_4) { $alfabetico_final_A4_L1 = $alfabetico_formato_4;  }
   if ($nota_final_A4_L1_redon >= $comparativo_formato_5) { $alfabetico_final_A4_L1 = $alfabetico_formato_5;  }
   if ($nota_final_A4_L1_redon >= $comparativo_formato_6) { $alfabetico_final_A4_L1 = $alfabetico_formato_6;  }
   if ($nota_final_A4_L1_redon >= $comparativo_formato_7) { $alfabetico_final_A4_L1 = $alfabetico_formato_7;  }
   if ($nota_final_A4_L1_redon >= $comparativo_formato_8) { $alfabetico_final_A4_L1 = $alfabetico_formato_8;  }
   if ($nota_final_A4_L1_redon >= $comparativo_formato_9) { $alfabetico_final_A4_L1 = $alfabetico_formato_9;  }
   if ($nota_final_A4_L1_redon >= $comparativo_formato_10) { $alfabetico_final_A4_L1 = $alfabetico_formato_10;  }
   if ($nota_final_A4_L1_redon >= $comparativo_formato_11) { $alfabetico_final_A4_L1 = $alfabetico_formato_11;  }
   if ($nota_final_A4_L1_redon >= $comparativo_formato_12) { $alfabetico_final_A4_L1 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A4_L1; } /* cierre alfabetico */

if ($row_datos_controlasign['d_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A4_L1_redon >= $comparativo_formato_1) { $literal_final_A4_L1 = $literal_formato_1;  }
  if ($nota_final_A4_L1_redon >= $comparativo_formato_2) { $literal_final_A4_L1 = $literal_formato_2;  }
  if ($nota_final_A4_L1_redon >= $comparativo_formato_3) { $literal_final_A4_L1 = $literal_formato_3;  }
  if ($nota_final_A4_L1_redon >= $comparativo_formato_4) { $literal_final_A4_L1 = $literal_formato_4;  }
  if ($nota_final_A4_L1_redon >= $comparativo_formato_5) { $literal_final_A4_L1 = $literal_formato_5;  }
  if ($nota_final_A4_L1_redon >= $comparativo_formato_6) { $literal_final_A4_L1 = $literal_formato_6;  }
  if ($nota_final_A4_L1_redon >= $comparativo_formato_7) { $literal_final_A4_L1 = $literal_formato_7;  }
  if ($nota_final_A4_L1_redon >= $comparativo_formato_8) { $literal_final_A4_L1 = $literal_formato_8;  }
  if ($nota_final_A4_L1_redon >= $comparativo_formato_9) { $literal_final_A4_L1 = $literal_formato_9;  }
  if ($nota_final_A4_L1_redon >= $comparativo_formato_10) { $literal_final_A4_L1 = $literal_formato_10;  }
  if ($nota_final_A4_L1_redon >= $comparativo_formato_11) { $literal_final_A4_L1 = $literal_formato_11;  }
  if ($nota_final_A4_L1_redon >= $comparativo_formato_12) { $literal_final_A4_L1 = $literal_formato_12;  } 
  echo $literal_final_A4_L1; } /* cierre literal */
        ?> </b></span></td> 

             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A4["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A4_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A4_L2_redon;?>"><b><?php if ($row_datos_controlasign['d_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A4_L2;
} /* cierre numerico */
if ($row_datos_controlasign['d_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A4_L2_redon >= $comparativo_formato_1) { $alfabetico_final_A4_L2 = $alfabetico_formato_1;  }
   if ($nota_final_A4_L2_redon >= $comparativo_formato_2) { $alfabetico_final_A4_L2 = $alfabetico_formato_2;  }
   if ($nota_final_A4_L2_redon >= $comparativo_formato_3) { $alfabetico_final_A4_L2 = $alfabetico_formato_3;  }
   if ($nota_final_A4_L2_redon >= $comparativo_formato_4) { $alfabetico_final_A4_L2 = $alfabetico_formato_4;  }
   if ($nota_final_A4_L2_redon >= $comparativo_formato_5) { $alfabetico_final_A4_L2 = $alfabetico_formato_5;  }
   if ($nota_final_A4_L2_redon >= $comparativo_formato_6) { $alfabetico_final_A4_L2 = $alfabetico_formato_6;  }
   if ($nota_final_A4_L2_redon >= $comparativo_formato_7) { $alfabetico_final_A4_L2 = $alfabetico_formato_7;  }
   if ($nota_final_A4_L2_redon >= $comparativo_formato_8) { $alfabetico_final_A4_L2 = $alfabetico_formato_8;  }
   if ($nota_final_A4_L2_redon >= $comparativo_formato_9) { $alfabetico_final_A4_L2 = $alfabetico_formato_9;  }
   if ($nota_final_A4_L2_redon >= $comparativo_formato_10) { $alfabetico_final_A4_L2 = $alfabetico_formato_10;  }
   if ($nota_final_A4_L2_redon >= $comparativo_formato_11) { $alfabetico_final_A4_L2 = $alfabetico_formato_11;  }
   if ($nota_final_A4_L2_redon >= $comparativo_formato_12) { $alfabetico_final_A4_L2 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A4_L2; } /* cierre alfabetico */

if ($row_datos_controlasign['d_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A4_L2_redon >= $comparativo_formato_1) { $literal_final_A4_L2 = $literal_formato_1;  }
  if ($nota_final_A4_L2_redon >= $comparativo_formato_2) { $literal_final_A4_L2 = $literal_formato_2;  }
  if ($nota_final_A4_L2_redon >= $comparativo_formato_3) { $literal_final_A4_L2 = $literal_formato_3;  }
  if ($nota_final_A4_L2_redon >= $comparativo_formato_4) { $literal_final_A4_L2 = $literal_formato_4;  }
  if ($nota_final_A4_L2_redon >= $comparativo_formato_5) { $literal_final_A4_L2 = $literal_formato_5;  }
  if ($nota_final_A4_L2_redon >= $comparativo_formato_6) { $literal_final_A4_L2 = $literal_formato_6;  }
  if ($nota_final_A4_L2_redon >= $comparativo_formato_7) { $literal_final_A4_L2 = $literal_formato_7;  }
  if ($nota_final_A4_L2_redon >= $comparativo_formato_8) { $literal_final_A4_L2 = $literal_formato_8;  }
  if ($nota_final_A4_L2_redon >= $comparativo_formato_9) { $literal_final_A4_L2 = $literal_formato_9;  }
  if ($nota_final_A4_L2_redon >= $comparativo_formato_10) { $literal_final_A4_L2 = $literal_formato_10;  }
  if ($nota_final_A4_L2_redon >= $comparativo_formato_11) { $literal_final_A4_L2 = $literal_formato_11;  }
  if ($nota_final_A4_L2_redon >= $comparativo_formato_12) { $literal_final_A4_L2 = $literal_formato_12;  } 
  echo $literal_final_A4_L2; } /* cierre literal */  ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A4["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A4_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A4_L3_redon;?>"><b><?php if ($row_datos_controlasign['d_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A4_L3;
} /* cierre numerico */
if ($row_datos_controlasign['d_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A4_L3_redon >= $comparativo_formato_1) { $alfabetico_final_A4_L3 = $alfabetico_formato_1;  }
   if ($nota_final_A4_L3_redon >= $comparativo_formato_2) { $alfabetico_final_A4_L3 = $alfabetico_formato_2;  }
   if ($nota_final_A4_L3_redon >= $comparativo_formato_3) { $alfabetico_final_A4_L3 = $alfabetico_formato_3;  }
   if ($nota_final_A4_L3_redon >= $comparativo_formato_4) { $alfabetico_final_A4_L3 = $alfabetico_formato_4;  }
   if ($nota_final_A4_L3_redon >= $comparativo_formato_5) { $alfabetico_final_A4_L3 = $alfabetico_formato_5;  }
   if ($nota_final_A4_L3_redon >= $comparativo_formato_6) { $alfabetico_final_A4_L3 = $alfabetico_formato_6;  }
   if ($nota_final_A4_L3_redon >= $comparativo_formato_7) { $alfabetico_final_A4_L3 = $alfabetico_formato_7;  }
   if ($nota_final_A4_L3_redon >= $comparativo_formato_8) { $alfabetico_final_A4_L3 = $alfabetico_formato_8;  }
   if ($nota_final_A4_L3_redon >= $comparativo_formato_9) { $alfabetico_final_A4_L3 = $alfabetico_formato_9;  }
   if ($nota_final_A4_L3_redon >= $comparativo_formato_10) { $alfabetico_final_A4_L3 = $alfabetico_formato_10;  }
   if ($nota_final_A4_L3_redon >= $comparativo_formato_11) { $alfabetico_final_A4_L3 = $alfabetico_formato_11;  }
   if ($nota_final_A4_L3_redon >= $comparativo_formato_12) { $alfabetico_final_A4_L3 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A4_L3; } /* cierre alfabetico */

if ($row_datos_controlasign['d_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A4_L3_redon >= $comparativo_formato_1) { $literal_final_A4_L3 = $literal_formato_1;  }
  if ($nota_final_A4_L3_redon >= $comparativo_formato_2) { $literal_final_A4_L3 = $literal_formato_2;  }
  if ($nota_final_A4_L3_redon >= $comparativo_formato_3) { $literal_final_A4_L3 = $literal_formato_3;  }
  if ($nota_final_A4_L3_redon >= $comparativo_formato_4) { $literal_final_A4_L3 = $literal_formato_4;  }
  if ($nota_final_A4_L3_redon >= $comparativo_formato_5) { $literal_final_A4_L3 = $literal_formato_5;  }
  if ($nota_final_A4_L3_redon >= $comparativo_formato_6) { $literal_final_A4_L3 = $literal_formato_6;  }
  if ($nota_final_A4_L3_redon >= $comparativo_formato_7) { $literal_final_A4_L3 = $literal_formato_7;  }
  if ($nota_final_A4_L3_redon >= $comparativo_formato_8) { $literal_final_A4_L3 = $literal_formato_8;  }
  if ($nota_final_A4_L3_redon >= $comparativo_formato_9) { $literal_final_A4_L3 = $literal_formato_9;  }
  if ($nota_final_A4_L3_redon >= $comparativo_formato_10) { $literal_final_A4_L3 = $literal_formato_10;  }
  if ($nota_final_A4_L3_redon >= $comparativo_formato_11) { $literal_final_A4_L3 = $literal_formato_11;  }
  if ($nota_final_A4_L3_redon >= $comparativo_formato_12) { $literal_final_A4_L3 = $literal_formato_12;  } 
  echo $literal_final_A4_L3; } /* cierre literal */    ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">



<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
<?php

$Parcial_A4_L1 = 0.000000001;
$Parcial_A4_L2 = 0.000000001;
$Parcial_A4_L3 = 0.000000001;



$Nota_Pro_Final_A4_L1_entero=$nota_final_A4_L1_redon1;          
$Nota_Pro_Final_A4_L2_entero=$nota_final_A4_L2_redon1;
$Nota_Pro_Final_A4_L3_entero=$nota_final_A4_L3_redon1;

if ($Nota_Pro_Final_A4_L1_entero >= 0.1) {
  $Parcial_A4_L1 = 1;
}

if ($Nota_Pro_Final_A4_L2_entero >= 0.1) {
  $Parcial_A4_L2 = 1;
}

if ($Nota_Pro_Final_A4_L3_entero >= 0.1) {
  $Parcial_A4_L3 = 1;
}


$Num_divisor_A4_L123 = $Parcial_A4_L1+$Parcial_A4_L2+$Parcial_A4_L3;       /* ojoooo */


 $Nota_Pro_all_A4_L123 =($nota_final_A4_L1_redon+$nota_final_A4_L2_redon+$nota_final_A4_L3_redon)/$Num_divisor_A4_L123;

$Nota_Pro_all_A4_L123_decimal=number_format($Nota_Pro_all_A4_L123, 1, ',', '');  echo $Nota_Pro_all_A4_L123_decimal;?></td>




  <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 14px;">
    <b><?php echo $row_datos_control_notas_A4["nt_AuF"];?></b></td>



<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A4_all_L123 = $Nota_Pro_all_A4_L123+$row_datos_control_notas_A4["nt_AuF"];




$Def_aux_total_A4_all_L123_redondeado1 = number_format($Def_aux_total_A4_all_L123, 1, '.', '');

$Definitiva_completa_A4_L123=number_format($Def_aux_total_A4_all_L123_redondeado1);  if ($row_datos_controlasign['d_convertir'] == 1 ) {  /* numerico */
       echo $Definitiva_completa_A4_L123;
} /* cierre numerico */
if ($row_datos_controlasign['d_convertir'] == 2 ) {  /* alfabetico */
   if ($Definitiva_completa_A4_L123 >= $comparativo_formato_1) { $alfabetico_completa_A4_L123 = $alfabetico_formato_1;  }
   if ($Definitiva_completa_A4_L123 >= $comparativo_formato_2) { $alfabetico_completa_A4_L123 = $alfabetico_formato_2;  }
   if ($Definitiva_completa_A4_L123 >= $comparativo_formato_3) { $alfabetico_completa_A4_L123 = $alfabetico_formato_3;  }
   if ($Definitiva_completa_A4_L123 >= $comparativo_formato_4) { $alfabetico_completa_A4_L123 = $alfabetico_formato_4;  }
   if ($Definitiva_completa_A4_L123 >= $comparativo_formato_5) { $alfabetico_completa_A4_L123 = $alfabetico_formato_5;  }
   if ($Definitiva_completa_A4_L123 >= $comparativo_formato_6) { $alfabetico_completa_A4_L123 = $alfabetico_formato_6;  }
   if ($Definitiva_completa_A4_L123 >= $comparativo_formato_7) { $alfabetico_completa_A4_L123 = $alfabetico_formato_7;  }
   if ($Definitiva_completa_A4_L123 >= $comparativo_formato_8) { $alfabetico_completa_A4_L123 = $alfabetico_formato_8;  }
   if ($Definitiva_completa_A4_L123 >= $comparativo_formato_9) { $alfabetico_completa_A4_L123 = $alfabetico_formato_9;  }
   if ($Definitiva_completa_A4_L123 >= $comparativo_formato_10) { $alfabetico_completa_A4_L123 = $alfabetico_formato_10;  }
   if ($Definitiva_completa_A4_L123 >= $comparativo_formato_11) { $alfabetico_completa_A4_L123 = $alfabetico_formato_11;  }
   if ($Definitiva_completa_A4_L123 >= $comparativo_formato_12) { $alfabetico_completa_A4_L123 = $alfabetico_formato_12;  }
   echo $alfabetico_completa_A4_L123; } /* cierre alfabetico */

if ($row_datos_controlasign['d_convertir'] == 3 ) {  /* literal */
  if ($Definitiva_completa_A4_L123 >= $comparativo_formato_1) { $literal_completa_A4_L123 = $literal_formato_1;  }
  if ($Definitiva_completa_A4_L123 >= $comparativo_formato_2) { $literal_completa_A4_L123 = $literal_formato_2;  }
  if ($Definitiva_completa_A4_L123 >= $comparativo_formato_3) { $literal_completa_A4_L123 = $literal_formato_3;  }
  if ($Definitiva_completa_A4_L123 >= $comparativo_formato_4) { $literal_completa_A4_L123 = $literal_formato_4;  }
  if ($Definitiva_completa_A4_L123 >= $comparativo_formato_5) { $literal_completa_A4_L123 = $literal_formato_5;  }
  if ($Definitiva_completa_A4_L123 >= $comparativo_formato_6) { $literal_completa_A4_L123 = $literal_formato_6;  }
  if ($Definitiva_completa_A4_L123 >= $comparativo_formato_7) { $literal_completa_A4_L123 = $literal_formato_7;  }
  if ($Definitiva_completa_A4_L123 >= $comparativo_formato_8) { $literal_completa_A4_L123 = $literal_formato_8;  }
  if ($Definitiva_completa_A4_L123 >= $comparativo_formato_9) { $literal_completa_A4_L123 = $literal_formato_9;  }
  if ($Definitiva_completa_A4_L123 >= $comparativo_formato_10) { $literal_completa_A4_L123 = $literal_formato_10;  }
  if ($Definitiva_completa_A4_L123 >= $comparativo_formato_11) { $literal_completa_A4_L123 = $literal_formato_11;  }
  if ($Definitiva_completa_A4_L123 >= $comparativo_formato_12) { $literal_completa_A4_L123 = $literal_formato_12;  } 
  echo $literal_completa_A4_L123; } /* cierre literal */ ?></b></td>


<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A4['rev_uno'];?></td>

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A4['rev_dos'];?></td>



<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5%; height: 23px;"><?php echo $row_datos_controlasign['d_abrev'];?>
  
<span style="color:red; font-size: 16px;"><b> <?php

               $d_ayuda = '';

                if ($row_datos_controlasign['d_suma'] !=1) {
                  $d_ayuda = '#';
               }

                echo $d_ayuda;?></b></span>

</td>




            </tr>



            <tr>
                       


              <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['e_abrev'];?>
                
<span style="color:red; font-size: 16px;"><b> <?php

               $e_ayuda = '';

                if ($row_datos_controlasign['e_suma'] !=1) {
                  $e_ayuda = '#';
               }

                echo $e_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 1.2%;">  </td>

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A5["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A5_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A5_L1_redon;?>"><b><?php



if ($row_datos_controlasign['e_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A5_L1;
} /* cierre numerico */
if ($row_datos_controlasign['e_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A5_L1_redon >= $comparativo_formato_1) { $alfabetico_final_A5_L1 = $alfabetico_formato_1;  }
   if ($nota_final_A5_L1_redon >= $comparativo_formato_2) { $alfabetico_final_A5_L1 = $alfabetico_formato_2;  }
   if ($nota_final_A5_L1_redon >= $comparativo_formato_3) { $alfabetico_final_A5_L1 = $alfabetico_formato_3;  }
   if ($nota_final_A5_L1_redon >= $comparativo_formato_4) { $alfabetico_final_A5_L1 = $alfabetico_formato_4;  }
   if ($nota_final_A5_L1_redon >= $comparativo_formato_5) { $alfabetico_final_A5_L1 = $alfabetico_formato_5;  }
   if ($nota_final_A5_L1_redon >= $comparativo_formato_6) { $alfabetico_final_A5_L1 = $alfabetico_formato_6;  }
   if ($nota_final_A5_L1_redon >= $comparativo_formato_7) { $alfabetico_final_A5_L1 = $alfabetico_formato_7;  }
   if ($nota_final_A5_L1_redon >= $comparativo_formato_8) { $alfabetico_final_A5_L1 = $alfabetico_formato_8;  }
   if ($nota_final_A5_L1_redon >= $comparativo_formato_9) { $alfabetico_final_A5_L1 = $alfabetico_formato_9;  }
   if ($nota_final_A5_L1_redon >= $comparativo_formato_10) { $alfabetico_final_A5_L1 = $alfabetico_formato_10;  }
   if ($nota_final_A5_L1_redon >= $comparativo_formato_11) { $alfabetico_final_A5_L1 = $alfabetico_formato_11;  }
   if ($nota_final_A5_L1_redon >= $comparativo_formato_12) { $alfabetico_final_A5_L1 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A5_L1; } /* cierre alfabetico */

if ($row_datos_controlasign['e_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A5_L1_redon >= $comparativo_formato_1) { $literal_final_A5_L1 = $literal_formato_1;  }
  if ($nota_final_A5_L1_redon >= $comparativo_formato_2) { $literal_final_A5_L1 = $literal_formato_2;  }
  if ($nota_final_A5_L1_redon >= $comparativo_formato_3) { $literal_final_A5_L1 = $literal_formato_3;  }
  if ($nota_final_A5_L1_redon >= $comparativo_formato_4) { $literal_final_A5_L1 = $literal_formato_4;  }
  if ($nota_final_A5_L1_redon >= $comparativo_formato_5) { $literal_final_A5_L1 = $literal_formato_5;  }
  if ($nota_final_A5_L1_redon >= $comparativo_formato_6) { $literal_final_A5_L1 = $literal_formato_6;  }
  if ($nota_final_A5_L1_redon >= $comparativo_formato_7) { $literal_final_A5_L1 = $literal_formato_7;  }
  if ($nota_final_A5_L1_redon >= $comparativo_formato_8) { $literal_final_A5_L1 = $literal_formato_8;  }
  if ($nota_final_A5_L1_redon >= $comparativo_formato_9) { $literal_final_A5_L1 = $literal_formato_9;  }
  if ($nota_final_A5_L1_redon >= $comparativo_formato_10) { $literal_final_A5_L1 = $literal_formato_10;  }
  if ($nota_final_A5_L1_redon >= $comparativo_formato_11) { $literal_final_A5_L1 = $literal_formato_11;  }
  if ($nota_final_A5_L1_redon >= $comparativo_formato_12) { $literal_final_A5_L1 = $literal_formato_12;  } 
  echo $literal_final_A5_L1; } /* cierre literal */
        ?> </b></span></td> 

             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A5["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A5_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A5_L2_redon;?>"><b><?php if ($row_datos_controlasign['e_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A5_L2;
} /* cierre numerico */
if ($row_datos_controlasign['e_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A5_L2_redon >= $comparativo_formato_1) { $alfabetico_final_A5_L2 = $alfabetico_formato_1;  }
   if ($nota_final_A5_L2_redon >= $comparativo_formato_2) { $alfabetico_final_A5_L2 = $alfabetico_formato_2;  }
   if ($nota_final_A5_L2_redon >= $comparativo_formato_3) { $alfabetico_final_A5_L2 = $alfabetico_formato_3;  }
   if ($nota_final_A5_L2_redon >= $comparativo_formato_4) { $alfabetico_final_A5_L2 = $alfabetico_formato_4;  }
   if ($nota_final_A5_L2_redon >= $comparativo_formato_5) { $alfabetico_final_A5_L2 = $alfabetico_formato_5;  }
   if ($nota_final_A5_L2_redon >= $comparativo_formato_6) { $alfabetico_final_A5_L2 = $alfabetico_formato_6;  }
   if ($nota_final_A5_L2_redon >= $comparativo_formato_7) { $alfabetico_final_A5_L2 = $alfabetico_formato_7;  }
   if ($nota_final_A5_L2_redon >= $comparativo_formato_8) { $alfabetico_final_A5_L2 = $alfabetico_formato_8;  }
   if ($nota_final_A5_L2_redon >= $comparativo_formato_9) { $alfabetico_final_A5_L2 = $alfabetico_formato_9;  }
   if ($nota_final_A5_L2_redon >= $comparativo_formato_10) { $alfabetico_final_A5_L2 = $alfabetico_formato_10;  }
   if ($nota_final_A5_L2_redon >= $comparativo_formato_11) { $alfabetico_final_A5_L2 = $alfabetico_formato_11;  }
   if ($nota_final_A5_L2_redon >= $comparativo_formato_12) { $alfabetico_final_A5_L2 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A5_L2; } /* cierre alfabetico */

if ($row_datos_controlasign['e_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A5_L2_redon >= $comparativo_formato_1) { $literal_final_A5_L2 = $literal_formato_1;  }
  if ($nota_final_A5_L2_redon >= $comparativo_formato_2) { $literal_final_A5_L2 = $literal_formato_2;  }
  if ($nota_final_A5_L2_redon >= $comparativo_formato_3) { $literal_final_A5_L2 = $literal_formato_3;  }
  if ($nota_final_A5_L2_redon >= $comparativo_formato_4) { $literal_final_A5_L2 = $literal_formato_4;  }
  if ($nota_final_A5_L2_redon >= $comparativo_formato_5) { $literal_final_A5_L2 = $literal_formato_5;  }
  if ($nota_final_A5_L2_redon >= $comparativo_formato_6) { $literal_final_A5_L2 = $literal_formato_6;  }
  if ($nota_final_A5_L2_redon >= $comparativo_formato_7) { $literal_final_A5_L2 = $literal_formato_7;  }
  if ($nota_final_A5_L2_redon >= $comparativo_formato_8) { $literal_final_A5_L2 = $literal_formato_8;  }
  if ($nota_final_A5_L2_redon >= $comparativo_formato_9) { $literal_final_A5_L2 = $literal_formato_9;  }
  if ($nota_final_A5_L2_redon >= $comparativo_formato_10) { $literal_final_A5_L2 = $literal_formato_10;  }
  if ($nota_final_A5_L2_redon >= $comparativo_formato_11) { $literal_final_A5_L2 = $literal_formato_11;  }
  if ($nota_final_A5_L2_redon >= $comparativo_formato_12) { $literal_final_A5_L2 = $literal_formato_12;  } 
  echo $literal_final_A5_L2; } /* cierre literal */  ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A5["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A5_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A5_L3_redon;?>"><b><?php if ($row_datos_controlasign['e_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A5_L3;
} /* cierre numerico */
if ($row_datos_controlasign['e_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A5_L3_redon >= $comparativo_formato_1) { $alfabetico_final_A5_L3 = $alfabetico_formato_1;  }
   if ($nota_final_A5_L3_redon >= $comparativo_formato_2) { $alfabetico_final_A5_L3 = $alfabetico_formato_2;  }
   if ($nota_final_A5_L3_redon >= $comparativo_formato_3) { $alfabetico_final_A5_L3 = $alfabetico_formato_3;  }
   if ($nota_final_A5_L3_redon >= $comparativo_formato_4) { $alfabetico_final_A5_L3 = $alfabetico_formato_4;  }
   if ($nota_final_A5_L3_redon >= $comparativo_formato_5) { $alfabetico_final_A5_L3 = $alfabetico_formato_5;  }
   if ($nota_final_A5_L3_redon >= $comparativo_formato_6) { $alfabetico_final_A5_L3 = $alfabetico_formato_6;  }
   if ($nota_final_A5_L3_redon >= $comparativo_formato_7) { $alfabetico_final_A5_L3 = $alfabetico_formato_7;  }
   if ($nota_final_A5_L3_redon >= $comparativo_formato_8) { $alfabetico_final_A5_L3 = $alfabetico_formato_8;  }
   if ($nota_final_A5_L3_redon >= $comparativo_formato_9) { $alfabetico_final_A5_L3 = $alfabetico_formato_9;  }
   if ($nota_final_A5_L3_redon >= $comparativo_formato_10) { $alfabetico_final_A5_L3 = $alfabetico_formato_10;  }
   if ($nota_final_A5_L3_redon >= $comparativo_formato_11) { $alfabetico_final_A5_L3 = $alfabetico_formato_11;  }
   if ($nota_final_A5_L3_redon >= $comparativo_formato_12) { $alfabetico_final_A5_L3 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A5_L3; } /* cierre alfabetico */

if ($row_datos_controlasign['e_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A5_L3_redon >= $comparativo_formato_1) { $literal_final_A5_L3 = $literal_formato_1;  }
  if ($nota_final_A5_L3_redon >= $comparativo_formato_2) { $literal_final_A5_L3 = $literal_formato_2;  }
  if ($nota_final_A5_L3_redon >= $comparativo_formato_3) { $literal_final_A5_L3 = $literal_formato_3;  }
  if ($nota_final_A5_L3_redon >= $comparativo_formato_4) { $literal_final_A5_L3 = $literal_formato_4;  }
  if ($nota_final_A5_L3_redon >= $comparativo_formato_5) { $literal_final_A5_L3 = $literal_formato_5;  }
  if ($nota_final_A5_L3_redon >= $comparativo_formato_6) { $literal_final_A5_L3 = $literal_formato_6;  }
  if ($nota_final_A5_L3_redon >= $comparativo_formato_7) { $literal_final_A5_L3 = $literal_formato_7;  }
  if ($nota_final_A5_L3_redon >= $comparativo_formato_8) { $literal_final_A5_L3 = $literal_formato_8;  }
  if ($nota_final_A5_L3_redon >= $comparativo_formato_9) { $literal_final_A5_L3 = $literal_formato_9;  }
  if ($nota_final_A5_L3_redon >= $comparativo_formato_10) { $literal_final_A5_L3 = $literal_formato_10;  }
  if ($nota_final_A5_L3_redon >= $comparativo_formato_11) { $literal_final_A5_L3 = $literal_formato_11;  }
  if ($nota_final_A5_L3_redon >= $comparativo_formato_12) { $literal_final_A5_L3 = $literal_formato_12;  } 
  echo $literal_final_A5_L3; } /* cierre literal */    ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">



<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
<?php

$Parcial_A5_L1 = 0.000000001;
$Parcial_A5_L2 = 0.000000001;
$Parcial_A5_L3 = 0.000000001;



$Nota_Pro_Final_A5_L1_entero=$nota_final_A5_L1_redon1;          
$Nota_Pro_Final_A5_L2_entero=$nota_final_A5_L2_redon1;
$Nota_Pro_Final_A5_L3_entero=$nota_final_A5_L3_redon1;

if ($Nota_Pro_Final_A5_L1_entero >= 0.1) {
  $Parcial_A5_L1 = 1;
}

if ($Nota_Pro_Final_A5_L2_entero >= 0.1) {
  $Parcial_A5_L2 = 1;
}

if ($Nota_Pro_Final_A5_L3_entero >= 0.1) {
  $Parcial_A5_L3 = 1;
}


$Num_divisor_A5_L123 = $Parcial_A5_L1+$Parcial_A5_L2+$Parcial_A5_L3;       /* ojoooo */


 $Nota_Pro_all_A5_L123 =($nota_final_A5_L1_redon+$nota_final_A5_L2_redon+$nota_final_A5_L3_redon)/$Num_divisor_A5_L123;

$Nota_Pro_all_A5_L123_decimal=number_format($Nota_Pro_all_A5_L123, 1, ',', '');  echo $Nota_Pro_all_A5_L123_decimal;?></td>




  <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 14px;">
    <b><?php echo $row_datos_control_notas_A5["nt_AuF"];?></b></td>



<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A5_all_L123 = $Nota_Pro_all_A5_L123+$row_datos_control_notas_A5["nt_AuF"];




$Def_aux_total_A5_all_L123_redondeado1 = number_format($Def_aux_total_A5_all_L123, 1, '.', '');

$Definitiva_completa_A5_L123=number_format($Def_aux_total_A5_all_L123_redondeado1);  if ($row_datos_controlasign['e_convertir'] == 1 ) {  /* numerico */
       echo $Definitiva_completa_A5_L123;
} /* cierre numerico */
if ($row_datos_controlasign['e_convertir'] == 2 ) {  /* alfabetico */
   if ($Definitiva_completa_A5_L123 >= $comparativo_formato_1) { $alfabetico_completa_A5_L123 = $alfabetico_formato_1;  }
   if ($Definitiva_completa_A5_L123 >= $comparativo_formato_2) { $alfabetico_completa_A5_L123 = $alfabetico_formato_2;  }
   if ($Definitiva_completa_A5_L123 >= $comparativo_formato_3) { $alfabetico_completa_A5_L123 = $alfabetico_formato_3;  }
   if ($Definitiva_completa_A5_L123 >= $comparativo_formato_4) { $alfabetico_completa_A5_L123 = $alfabetico_formato_4;  }
   if ($Definitiva_completa_A5_L123 >= $comparativo_formato_5) { $alfabetico_completa_A5_L123 = $alfabetico_formato_5;  }
   if ($Definitiva_completa_A5_L123 >= $comparativo_formato_6) { $alfabetico_completa_A5_L123 = $alfabetico_formato_6;  }
   if ($Definitiva_completa_A5_L123 >= $comparativo_formato_7) { $alfabetico_completa_A5_L123 = $alfabetico_formato_7;  }
   if ($Definitiva_completa_A5_L123 >= $comparativo_formato_8) { $alfabetico_completa_A5_L123 = $alfabetico_formato_8;  }
   if ($Definitiva_completa_A5_L123 >= $comparativo_formato_9) { $alfabetico_completa_A5_L123 = $alfabetico_formato_9;  }
   if ($Definitiva_completa_A5_L123 >= $comparativo_formato_10) { $alfabetico_completa_A5_L123 = $alfabetico_formato_10;  }
   if ($Definitiva_completa_A5_L123 >= $comparativo_formato_11) { $alfabetico_completa_A5_L123 = $alfabetico_formato_11;  }
   if ($Definitiva_completa_A5_L123 >= $comparativo_formato_12) { $alfabetico_completa_A5_L123 = $alfabetico_formato_12;  }
   echo $alfabetico_completa_A5_L123; } /* cierre alfabetico */

if ($row_datos_controlasign['e_convertir'] == 3 ) {  /* literal */
  if ($Definitiva_completa_A5_L123 >= $comparativo_formato_1) { $literal_completa_A5_L123 = $literal_formato_1;  }
  if ($Definitiva_completa_A5_L123 >= $comparativo_formato_2) { $literal_completa_A5_L123 = $literal_formato_2;  }
  if ($Definitiva_completa_A5_L123 >= $comparativo_formato_3) { $literal_completa_A5_L123 = $literal_formato_3;  }
  if ($Definitiva_completa_A5_L123 >= $comparativo_formato_4) { $literal_completa_A5_L123 = $literal_formato_4;  }
  if ($Definitiva_completa_A5_L123 >= $comparativo_formato_5) { $literal_completa_A5_L123 = $literal_formato_5;  }
  if ($Definitiva_completa_A5_L123 >= $comparativo_formato_6) { $literal_completa_A5_L123 = $literal_formato_6;  }
  if ($Definitiva_completa_A5_L123 >= $comparativo_formato_7) { $literal_completa_A5_L123 = $literal_formato_7;  }
  if ($Definitiva_completa_A5_L123 >= $comparativo_formato_8) { $literal_completa_A5_L123 = $literal_formato_8;  }
  if ($Definitiva_completa_A5_L123 >= $comparativo_formato_9) { $literal_completa_A5_L123 = $literal_formato_9;  }
  if ($Definitiva_completa_A5_L123 >= $comparativo_formato_10) { $literal_completa_A5_L123 = $literal_formato_10;  }
  if ($Definitiva_completa_A5_L123 >= $comparativo_formato_11) { $literal_completa_A5_L123 = $literal_formato_11;  }
  if ($Definitiva_completa_A5_L123 >= $comparativo_formato_12) { $literal_completa_A5_L123 = $literal_formato_12;  } 
  echo $literal_completa_A5_L123; } /* cierre literal */ ?></b></td>


<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A5['rev_uno'];?></td>

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A5['rev_dos'];?></td>



<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5%; height: 23px;"><?php echo $row_datos_controlasign['e_abrev'];?>
  
<span style="color:red; font-size: 16px;"><b> <?php

               $e_ayuda = '';

                if ($row_datos_controlasign['e_suma'] !=1) {
                  $e_ayuda = '#';
               }

                echo $e_ayuda;?></b></span>

</td>




            </tr>




            <tr>
                       


              <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['f_abrev'];?>
                
<span style="color:red; font-size: 16px;"><b> <?php

               $f_ayuda = '';

                if ($row_datos_controlasign['f_suma'] !=1) {
                  $f_ayuda = '#';
               }

                echo $f_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 1.2%;">  </td>

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A6["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A6_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A6_L1_redon;?>"><b><?php



if ($row_datos_controlasign['f_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A6_L1;
} /* cierre numerico */
if ($row_datos_controlasign['f_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A6_L1_redon >= $comparativo_formato_1) { $alfabetico_final_A6_L1 = $alfabetico_formato_1;  }
   if ($nota_final_A6_L1_redon >= $comparativo_formato_2) { $alfabetico_final_A6_L1 = $alfabetico_formato_2;  }
   if ($nota_final_A6_L1_redon >= $comparativo_formato_3) { $alfabetico_final_A6_L1 = $alfabetico_formato_3;  }
   if ($nota_final_A6_L1_redon >= $comparativo_formato_4) { $alfabetico_final_A6_L1 = $alfabetico_formato_4;  }
   if ($nota_final_A6_L1_redon >= $comparativo_formato_5) { $alfabetico_final_A6_L1 = $alfabetico_formato_5;  }
   if ($nota_final_A6_L1_redon >= $comparativo_formato_6) { $alfabetico_final_A6_L1 = $alfabetico_formato_6;  }
   if ($nota_final_A6_L1_redon >= $comparativo_formato_7) { $alfabetico_final_A6_L1 = $alfabetico_formato_7;  }
   if ($nota_final_A6_L1_redon >= $comparativo_formato_8) { $alfabetico_final_A6_L1 = $alfabetico_formato_8;  }
   if ($nota_final_A6_L1_redon >= $comparativo_formato_9) { $alfabetico_final_A6_L1 = $alfabetico_formato_9;  }
   if ($nota_final_A6_L1_redon >= $comparativo_formato_10) { $alfabetico_final_A6_L1 = $alfabetico_formato_10;  }
   if ($nota_final_A6_L1_redon >= $comparativo_formato_11) { $alfabetico_final_A6_L1 = $alfabetico_formato_11;  }
   if ($nota_final_A6_L1_redon >= $comparativo_formato_12) { $alfabetico_final_A6_L1 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A6_L1; } /* cierre alfabetico */

if ($row_datos_controlasign['f_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A6_L1_redon >= $comparativo_formato_1) { $literal_final_A6_L1 = $literal_formato_1;  }
  if ($nota_final_A6_L1_redon >= $comparativo_formato_2) { $literal_final_A6_L1 = $literal_formato_2;  }
  if ($nota_final_A6_L1_redon >= $comparativo_formato_3) { $literal_final_A6_L1 = $literal_formato_3;  }
  if ($nota_final_A6_L1_redon >= $comparativo_formato_4) { $literal_final_A6_L1 = $literal_formato_4;  }
  if ($nota_final_A6_L1_redon >= $comparativo_formato_5) { $literal_final_A6_L1 = $literal_formato_5;  }
  if ($nota_final_A6_L1_redon >= $comparativo_formato_6) { $literal_final_A6_L1 = $literal_formato_6;  }
  if ($nota_final_A6_L1_redon >= $comparativo_formato_7) { $literal_final_A6_L1 = $literal_formato_7;  }
  if ($nota_final_A6_L1_redon >= $comparativo_formato_8) { $literal_final_A6_L1 = $literal_formato_8;  }
  if ($nota_final_A6_L1_redon >= $comparativo_formato_9) { $literal_final_A6_L1 = $literal_formato_9;  }
  if ($nota_final_A6_L1_redon >= $comparativo_formato_10) { $literal_final_A6_L1 = $literal_formato_10;  }
  if ($nota_final_A6_L1_redon >= $comparativo_formato_11) { $literal_final_A6_L1 = $literal_formato_11;  }
  if ($nota_final_A6_L1_redon >= $comparativo_formato_12) { $literal_final_A6_L1 = $literal_formato_12;  } 
  echo $literal_final_A6_L1; } /* cierre literal */
        ?> </b></span></td> 

             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A6["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A6_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A6_L2_redon;?>"><b><?php if ($row_datos_controlasign['f_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A6_L2;
} /* cierre numerico */
if ($row_datos_controlasign['f_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A6_L2_redon >= $comparativo_formato_1) { $alfabetico_final_A6_L2 = $alfabetico_formato_1;  }
   if ($nota_final_A6_L2_redon >= $comparativo_formato_2) { $alfabetico_final_A6_L2 = $alfabetico_formato_2;  }
   if ($nota_final_A6_L2_redon >= $comparativo_formato_3) { $alfabetico_final_A6_L2 = $alfabetico_formato_3;  }
   if ($nota_final_A6_L2_redon >= $comparativo_formato_4) { $alfabetico_final_A6_L2 = $alfabetico_formato_4;  }
   if ($nota_final_A6_L2_redon >= $comparativo_formato_5) { $alfabetico_final_A6_L2 = $alfabetico_formato_5;  }
   if ($nota_final_A6_L2_redon >= $comparativo_formato_6) { $alfabetico_final_A6_L2 = $alfabetico_formato_6;  }
   if ($nota_final_A6_L2_redon >= $comparativo_formato_7) { $alfabetico_final_A6_L2 = $alfabetico_formato_7;  }
   if ($nota_final_A6_L2_redon >= $comparativo_formato_8) { $alfabetico_final_A6_L2 = $alfabetico_formato_8;  }
   if ($nota_final_A6_L2_redon >= $comparativo_formato_9) { $alfabetico_final_A6_L2 = $alfabetico_formato_9;  }
   if ($nota_final_A6_L2_redon >= $comparativo_formato_10) { $alfabetico_final_A6_L2 = $alfabetico_formato_10;  }
   if ($nota_final_A6_L2_redon >= $comparativo_formato_11) { $alfabetico_final_A6_L2 = $alfabetico_formato_11;  }
   if ($nota_final_A6_L2_redon >= $comparativo_formato_12) { $alfabetico_final_A6_L2 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A6_L2; } /* cierre alfabetico */

if ($row_datos_controlasign['f_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A6_L2_redon >= $comparativo_formato_1) { $literal_final_A6_L2 = $literal_formato_1;  }
  if ($nota_final_A6_L2_redon >= $comparativo_formato_2) { $literal_final_A6_L2 = $literal_formato_2;  }
  if ($nota_final_A6_L2_redon >= $comparativo_formato_3) { $literal_final_A6_L2 = $literal_formato_3;  }
  if ($nota_final_A6_L2_redon >= $comparativo_formato_4) { $literal_final_A6_L2 = $literal_formato_4;  }
  if ($nota_final_A6_L2_redon >= $comparativo_formato_5) { $literal_final_A6_L2 = $literal_formato_5;  }
  if ($nota_final_A6_L2_redon >= $comparativo_formato_6) { $literal_final_A6_L2 = $literal_formato_6;  }
  if ($nota_final_A6_L2_redon >= $comparativo_formato_7) { $literal_final_A6_L2 = $literal_formato_7;  }
  if ($nota_final_A6_L2_redon >= $comparativo_formato_8) { $literal_final_A6_L2 = $literal_formato_8;  }
  if ($nota_final_A6_L2_redon >= $comparativo_formato_9) { $literal_final_A6_L2 = $literal_formato_9;  }
  if ($nota_final_A6_L2_redon >= $comparativo_formato_10) { $literal_final_A6_L2 = $literal_formato_10;  }
  if ($nota_final_A6_L2_redon >= $comparativo_formato_11) { $literal_final_A6_L2 = $literal_formato_11;  }
  if ($nota_final_A6_L2_redon >= $comparativo_formato_12) { $literal_final_A6_L2 = $literal_formato_12;  } 
  echo $literal_final_A6_L2; } /* cierre literal */  ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A6["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A6_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A6_L3_redon;?>"><b><?php if ($row_datos_controlasign['f_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A6_L3;
} /* cierre numerico */
if ($row_datos_controlasign['f_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A6_L3_redon >= $comparativo_formato_1) { $alfabetico_final_A6_L3 = $alfabetico_formato_1;  }
   if ($nota_final_A6_L3_redon >= $comparativo_formato_2) { $alfabetico_final_A6_L3 = $alfabetico_formato_2;  }
   if ($nota_final_A6_L3_redon >= $comparativo_formato_3) { $alfabetico_final_A6_L3 = $alfabetico_formato_3;  }
   if ($nota_final_A6_L3_redon >= $comparativo_formato_4) { $alfabetico_final_A6_L3 = $alfabetico_formato_4;  }
   if ($nota_final_A6_L3_redon >= $comparativo_formato_5) { $alfabetico_final_A6_L3 = $alfabetico_formato_5;  }
   if ($nota_final_A6_L3_redon >= $comparativo_formato_6) { $alfabetico_final_A6_L3 = $alfabetico_formato_6;  }
   if ($nota_final_A6_L3_redon >= $comparativo_formato_7) { $alfabetico_final_A6_L3 = $alfabetico_formato_7;  }
   if ($nota_final_A6_L3_redon >= $comparativo_formato_8) { $alfabetico_final_A6_L3 = $alfabetico_formato_8;  }
   if ($nota_final_A6_L3_redon >= $comparativo_formato_9) { $alfabetico_final_A6_L3 = $alfabetico_formato_9;  }
   if ($nota_final_A6_L3_redon >= $comparativo_formato_10) { $alfabetico_final_A6_L3 = $alfabetico_formato_10;  }
   if ($nota_final_A6_L3_redon >= $comparativo_formato_11) { $alfabetico_final_A6_L3 = $alfabetico_formato_11;  }
   if ($nota_final_A6_L3_redon >= $comparativo_formato_12) { $alfabetico_final_A6_L3 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A6_L3; } /* cierre alfabetico */

if ($row_datos_controlasign['f_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A6_L3_redon >= $comparativo_formato_1) { $literal_final_A6_L3 = $literal_formato_1;  }
  if ($nota_final_A6_L3_redon >= $comparativo_formato_2) { $literal_final_A6_L3 = $literal_formato_2;  }
  if ($nota_final_A6_L3_redon >= $comparativo_formato_3) { $literal_final_A6_L3 = $literal_formato_3;  }
  if ($nota_final_A6_L3_redon >= $comparativo_formato_4) { $literal_final_A6_L3 = $literal_formato_4;  }
  if ($nota_final_A6_L3_redon >= $comparativo_formato_5) { $literal_final_A6_L3 = $literal_formato_5;  }
  if ($nota_final_A6_L3_redon >= $comparativo_formato_6) { $literal_final_A6_L3 = $literal_formato_6;  }
  if ($nota_final_A6_L3_redon >= $comparativo_formato_7) { $literal_final_A6_L3 = $literal_formato_7;  }
  if ($nota_final_A6_L3_redon >= $comparativo_formato_8) { $literal_final_A6_L3 = $literal_formato_8;  }
  if ($nota_final_A6_L3_redon >= $comparativo_formato_9) { $literal_final_A6_L3 = $literal_formato_9;  }
  if ($nota_final_A6_L3_redon >= $comparativo_formato_10) { $literal_final_A6_L3 = $literal_formato_10;  }
  if ($nota_final_A6_L3_redon >= $comparativo_formato_11) { $literal_final_A6_L3 = $literal_formato_11;  }
  if ($nota_final_A6_L3_redon >= $comparativo_formato_12) { $literal_final_A6_L3 = $literal_formato_12;  } 
  echo $literal_final_A6_L3; } /* cierre literal */    ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">



<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
<?php

$Parcial_A6_L1 = 0.000000001;
$Parcial_A6_L2 = 0.000000001;
$Parcial_A6_L3 = 0.000000001;



$Nota_Pro_Final_A6_L1_entero=$nota_final_A6_L1_redon1;          
$Nota_Pro_Final_A6_L2_entero=$nota_final_A6_L2_redon1;
$Nota_Pro_Final_A6_L3_entero=$nota_final_A6_L3_redon1;

if ($Nota_Pro_Final_A6_L1_entero >= 0.1) {
  $Parcial_A6_L1 = 1;
}

if ($Nota_Pro_Final_A6_L2_entero >= 0.1) {
  $Parcial_A6_L2 = 1;
}

if ($Nota_Pro_Final_A6_L3_entero >= 0.1) {
  $Parcial_A6_L3 = 1;
}


$Num_divisor_A6_L123 = $Parcial_A6_L1+$Parcial_A6_L2+$Parcial_A6_L3;       /* ojoooo */


 $Nota_Pro_all_A6_L123 =($nota_final_A6_L1_redon+$nota_final_A6_L2_redon+$nota_final_A6_L3_redon)/$Num_divisor_A6_L123;

$Nota_Pro_all_A6_L123_decimal=number_format($Nota_Pro_all_A6_L123, 1, ',', '');  echo $Nota_Pro_all_A6_L123_decimal;?></td>




  <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 14px;">
    <b><?php echo $row_datos_control_notas_A6["nt_AuF"];?></b></td>



<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A6_all_L123 = $Nota_Pro_all_A6_L123+$row_datos_control_notas_A6["nt_AuF"];




$Def_aux_total_A6_all_L123_redondeado1 = number_format($Def_aux_total_A6_all_L123, 1, '.', '');

$Definitiva_completa_A6_L123=number_format($Def_aux_total_A6_all_L123_redondeado1);  if ($row_datos_controlasign['f_convertir'] == 1 ) {  /* numerico */
       echo $Definitiva_completa_A6_L123;
} /* cierre numerico */
if ($row_datos_controlasign['f_convertir'] == 2 ) {  /* alfabetico */
   if ($Definitiva_completa_A6_L123 >= $comparativo_formato_1) { $alfabetico_completa_A6_L123 = $alfabetico_formato_1;  }
   if ($Definitiva_completa_A6_L123 >= $comparativo_formato_2) { $alfabetico_completa_A6_L123 = $alfabetico_formato_2;  }
   if ($Definitiva_completa_A6_L123 >= $comparativo_formato_3) { $alfabetico_completa_A6_L123 = $alfabetico_formato_3;  }
   if ($Definitiva_completa_A6_L123 >= $comparativo_formato_4) { $alfabetico_completa_A6_L123 = $alfabetico_formato_4;  }
   if ($Definitiva_completa_A6_L123 >= $comparativo_formato_5) { $alfabetico_completa_A6_L123 = $alfabetico_formato_5;  }
   if ($Definitiva_completa_A6_L123 >= $comparativo_formato_6) { $alfabetico_completa_A6_L123 = $alfabetico_formato_6;  }
   if ($Definitiva_completa_A6_L123 >= $comparativo_formato_7) { $alfabetico_completa_A6_L123 = $alfabetico_formato_7;  }
   if ($Definitiva_completa_A6_L123 >= $comparativo_formato_8) { $alfabetico_completa_A6_L123 = $alfabetico_formato_8;  }
   if ($Definitiva_completa_A6_L123 >= $comparativo_formato_9) { $alfabetico_completa_A6_L123 = $alfabetico_formato_9;  }
   if ($Definitiva_completa_A6_L123 >= $comparativo_formato_10) { $alfabetico_completa_A6_L123 = $alfabetico_formato_10;  }
   if ($Definitiva_completa_A6_L123 >= $comparativo_formato_11) { $alfabetico_completa_A6_L123 = $alfabetico_formato_11;  }
   if ($Definitiva_completa_A6_L123 >= $comparativo_formato_12) { $alfabetico_completa_A6_L123 = $alfabetico_formato_12;  }
   echo $alfabetico_completa_A6_L123; } /* cierre alfabetico */

if ($row_datos_controlasign['f_convertir'] == 3 ) {  /* literal */
  if ($Definitiva_completa_A6_L123 >= $comparativo_formato_1) { $literal_completa_A6_L123 = $literal_formato_1;  }
  if ($Definitiva_completa_A6_L123 >= $comparativo_formato_2) { $literal_completa_A6_L123 = $literal_formato_2;  }
  if ($Definitiva_completa_A6_L123 >= $comparativo_formato_3) { $literal_completa_A6_L123 = $literal_formato_3;  }
  if ($Definitiva_completa_A6_L123 >= $comparativo_formato_4) { $literal_completa_A6_L123 = $literal_formato_4;  }
  if ($Definitiva_completa_A6_L123 >= $comparativo_formato_5) { $literal_completa_A6_L123 = $literal_formato_5;  }
  if ($Definitiva_completa_A6_L123 >= $comparativo_formato_6) { $literal_completa_A6_L123 = $literal_formato_6;  }
  if ($Definitiva_completa_A6_L123 >= $comparativo_formato_7) { $literal_completa_A6_L123 = $literal_formato_7;  }
  if ($Definitiva_completa_A6_L123 >= $comparativo_formato_8) { $literal_completa_A6_L123 = $literal_formato_8;  }
  if ($Definitiva_completa_A6_L123 >= $comparativo_formato_9) { $literal_completa_A6_L123 = $literal_formato_9;  }
  if ($Definitiva_completa_A6_L123 >= $comparativo_formato_10) { $literal_completa_A6_L123 = $literal_formato_10;  }
  if ($Definitiva_completa_A6_L123 >= $comparativo_formato_11) { $literal_completa_A6_L123 = $literal_formato_11;  }
  if ($Definitiva_completa_A6_L123 >= $comparativo_formato_12) { $literal_completa_A6_L123 = $literal_formato_12;  } 
  echo $literal_completa_A6_L123; } /* cierre literal */ ?></b></td>


<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A6['rev_uno'];?></td>

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A6['rev_dos'];?></td>



<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5%; height: 23px;"><?php echo $row_datos_controlasign['f_abrev'];?>
  
<span style="color:red; font-size: 16px;"><b> <?php

               $f_ayuda = '';

                if ($row_datos_controlasign['f_suma'] !=1) {
                  $f_ayuda = '#';
               }

                echo $f_ayuda;?></b></span>

</td>




            </tr>



            <tr>
                       


              <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['g_abrev'];?>
                
<span style="color:red; font-size: 16px;"><b> <?php

               $g_ayuda = '';

                if ($row_datos_controlasign['g_suma'] !=1) {
                  $g_ayuda = '#';
               }

                echo $g_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 1.2%;">  </td>

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A7["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A7_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A7_L1_redon;?>"><b><?php



if ($row_datos_controlasign['g_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A7_L1;
} /* cierre numerico */
if ($row_datos_controlasign['g_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A7_L1_redon >= $comparativo_formato_1) { $alfabetico_final_A7_L1 = $alfabetico_formato_1;  }
   if ($nota_final_A7_L1_redon >= $comparativo_formato_2) { $alfabetico_final_A7_L1 = $alfabetico_formato_2;  }
   if ($nota_final_A7_L1_redon >= $comparativo_formato_3) { $alfabetico_final_A7_L1 = $alfabetico_formato_3;  }
   if ($nota_final_A7_L1_redon >= $comparativo_formato_4) { $alfabetico_final_A7_L1 = $alfabetico_formato_4;  }
   if ($nota_final_A7_L1_redon >= $comparativo_formato_5) { $alfabetico_final_A7_L1 = $alfabetico_formato_5;  }
   if ($nota_final_A7_L1_redon >= $comparativo_formato_6) { $alfabetico_final_A7_L1 = $alfabetico_formato_6;  }
   if ($nota_final_A7_L1_redon >= $comparativo_formato_7) { $alfabetico_final_A7_L1 = $alfabetico_formato_7;  }
   if ($nota_final_A7_L1_redon >= $comparativo_formato_8) { $alfabetico_final_A7_L1 = $alfabetico_formato_8;  }
   if ($nota_final_A7_L1_redon >= $comparativo_formato_9) { $alfabetico_final_A7_L1 = $alfabetico_formato_9;  }
   if ($nota_final_A7_L1_redon >= $comparativo_formato_10) { $alfabetico_final_A7_L1 = $alfabetico_formato_10;  }
   if ($nota_final_A7_L1_redon >= $comparativo_formato_11) { $alfabetico_final_A7_L1 = $alfabetico_formato_11;  }
   if ($nota_final_A7_L1_redon >= $comparativo_formato_12) { $alfabetico_final_A7_L1 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A7_L1; } /* cierre alfabetico */

if ($row_datos_controlasign['g_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A7_L1_redon >= $comparativo_formato_1) { $literal_final_A7_L1 = $literal_formato_1;  }
  if ($nota_final_A7_L1_redon >= $comparativo_formato_2) { $literal_final_A7_L1 = $literal_formato_2;  }
  if ($nota_final_A7_L1_redon >= $comparativo_formato_3) { $literal_final_A7_L1 = $literal_formato_3;  }
  if ($nota_final_A7_L1_redon >= $comparativo_formato_4) { $literal_final_A7_L1 = $literal_formato_4;  }
  if ($nota_final_A7_L1_redon >= $comparativo_formato_5) { $literal_final_A7_L1 = $literal_formato_5;  }
  if ($nota_final_A7_L1_redon >= $comparativo_formato_6) { $literal_final_A7_L1 = $literal_formato_6;  }
  if ($nota_final_A7_L1_redon >= $comparativo_formato_7) { $literal_final_A7_L1 = $literal_formato_7;  }
  if ($nota_final_A7_L1_redon >= $comparativo_formato_8) { $literal_final_A7_L1 = $literal_formato_8;  }
  if ($nota_final_A7_L1_redon >= $comparativo_formato_9) { $literal_final_A7_L1 = $literal_formato_9;  }
  if ($nota_final_A7_L1_redon >= $comparativo_formato_10) { $literal_final_A7_L1 = $literal_formato_10;  }
  if ($nota_final_A7_L1_redon >= $comparativo_formato_11) { $literal_final_A7_L1 = $literal_formato_11;  }
  if ($nota_final_A7_L1_redon >= $comparativo_formato_12) { $literal_final_A7_L1 = $literal_formato_12;  } 
  echo $literal_final_A7_L1; } /* cierre literal */
        ?> </b></span></td> 

             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A7["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A7_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A7_L2_redon;?>"><b><?php if ($row_datos_controlasign['g_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A7_L2;
} /* cierre numerico */
if ($row_datos_controlasign['g_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A7_L2_redon >= $comparativo_formato_1) { $alfabetico_final_A7_L2 = $alfabetico_formato_1;  }
   if ($nota_final_A7_L2_redon >= $comparativo_formato_2) { $alfabetico_final_A7_L2 = $alfabetico_formato_2;  }
   if ($nota_final_A7_L2_redon >= $comparativo_formato_3) { $alfabetico_final_A7_L2 = $alfabetico_formato_3;  }
   if ($nota_final_A7_L2_redon >= $comparativo_formato_4) { $alfabetico_final_A7_L2 = $alfabetico_formato_4;  }
   if ($nota_final_A7_L2_redon >= $comparativo_formato_5) { $alfabetico_final_A7_L2 = $alfabetico_formato_5;  }
   if ($nota_final_A7_L2_redon >= $comparativo_formato_6) { $alfabetico_final_A7_L2 = $alfabetico_formato_6;  }
   if ($nota_final_A7_L2_redon >= $comparativo_formato_7) { $alfabetico_final_A7_L2 = $alfabetico_formato_7;  }
   if ($nota_final_A7_L2_redon >= $comparativo_formato_8) { $alfabetico_final_A7_L2 = $alfabetico_formato_8;  }
   if ($nota_final_A7_L2_redon >= $comparativo_formato_9) { $alfabetico_final_A7_L2 = $alfabetico_formato_9;  }
   if ($nota_final_A7_L2_redon >= $comparativo_formato_10) { $alfabetico_final_A7_L2 = $alfabetico_formato_10;  }
   if ($nota_final_A7_L2_redon >= $comparativo_formato_11) { $alfabetico_final_A7_L2 = $alfabetico_formato_11;  }
   if ($nota_final_A7_L2_redon >= $comparativo_formato_12) { $alfabetico_final_A7_L2 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A7_L2; } /* cierre alfabetico */

if ($row_datos_controlasign['g_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A7_L2_redon >= $comparativo_formato_1) { $literal_final_A7_L2 = $literal_formato_1;  }
  if ($nota_final_A7_L2_redon >= $comparativo_formato_2) { $literal_final_A7_L2 = $literal_formato_2;  }
  if ($nota_final_A7_L2_redon >= $comparativo_formato_3) { $literal_final_A7_L2 = $literal_formato_3;  }
  if ($nota_final_A7_L2_redon >= $comparativo_formato_4) { $literal_final_A7_L2 = $literal_formato_4;  }
  if ($nota_final_A7_L2_redon >= $comparativo_formato_5) { $literal_final_A7_L2 = $literal_formato_5;  }
  if ($nota_final_A7_L2_redon >= $comparativo_formato_6) { $literal_final_A7_L2 = $literal_formato_6;  }
  if ($nota_final_A7_L2_redon >= $comparativo_formato_7) { $literal_final_A7_L2 = $literal_formato_7;  }
  if ($nota_final_A7_L2_redon >= $comparativo_formato_8) { $literal_final_A7_L2 = $literal_formato_8;  }
  if ($nota_final_A7_L2_redon >= $comparativo_formato_9) { $literal_final_A7_L2 = $literal_formato_9;  }
  if ($nota_final_A7_L2_redon >= $comparativo_formato_10) { $literal_final_A7_L2 = $literal_formato_10;  }
  if ($nota_final_A7_L2_redon >= $comparativo_formato_11) { $literal_final_A7_L2 = $literal_formato_11;  }
  if ($nota_final_A7_L2_redon >= $comparativo_formato_12) { $literal_final_A7_L2 = $literal_formato_12;  } 
  echo $literal_final_A7_L2; } /* cierre literal */  ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A7["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A7_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A7_L3_redon;?>"><b><?php if ($row_datos_controlasign['g_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A7_L3;
} /* cierre numerico */
if ($row_datos_controlasign['g_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A7_L3_redon >= $comparativo_formato_1) { $alfabetico_final_A7_L3 = $alfabetico_formato_1;  }
   if ($nota_final_A7_L3_redon >= $comparativo_formato_2) { $alfabetico_final_A7_L3 = $alfabetico_formato_2;  }
   if ($nota_final_A7_L3_redon >= $comparativo_formato_3) { $alfabetico_final_A7_L3 = $alfabetico_formato_3;  }
   if ($nota_final_A7_L3_redon >= $comparativo_formato_4) { $alfabetico_final_A7_L3 = $alfabetico_formato_4;  }
   if ($nota_final_A7_L3_redon >= $comparativo_formato_5) { $alfabetico_final_A7_L3 = $alfabetico_formato_5;  }
   if ($nota_final_A7_L3_redon >= $comparativo_formato_6) { $alfabetico_final_A7_L3 = $alfabetico_formato_6;  }
   if ($nota_final_A7_L3_redon >= $comparativo_formato_7) { $alfabetico_final_A7_L3 = $alfabetico_formato_7;  }
   if ($nota_final_A7_L3_redon >= $comparativo_formato_8) { $alfabetico_final_A7_L3 = $alfabetico_formato_8;  }
   if ($nota_final_A7_L3_redon >= $comparativo_formato_9) { $alfabetico_final_A7_L3 = $alfabetico_formato_9;  }
   if ($nota_final_A7_L3_redon >= $comparativo_formato_10) { $alfabetico_final_A7_L3 = $alfabetico_formato_10;  }
   if ($nota_final_A7_L3_redon >= $comparativo_formato_11) { $alfabetico_final_A7_L3 = $alfabetico_formato_11;  }
   if ($nota_final_A7_L3_redon >= $comparativo_formato_12) { $alfabetico_final_A7_L3 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A7_L3; } /* cierre alfabetico */

if ($row_datos_controlasign['g_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A7_L3_redon >= $comparativo_formato_1) { $literal_final_A7_L3 = $literal_formato_1;  }
  if ($nota_final_A7_L3_redon >= $comparativo_formato_2) { $literal_final_A7_L3 = $literal_formato_2;  }
  if ($nota_final_A7_L3_redon >= $comparativo_formato_3) { $literal_final_A7_L3 = $literal_formato_3;  }
  if ($nota_final_A7_L3_redon >= $comparativo_formato_4) { $literal_final_A7_L3 = $literal_formato_4;  }
  if ($nota_final_A7_L3_redon >= $comparativo_formato_5) { $literal_final_A7_L3 = $literal_formato_5;  }
  if ($nota_final_A7_L3_redon >= $comparativo_formato_6) { $literal_final_A7_L3 = $literal_formato_6;  }
  if ($nota_final_A7_L3_redon >= $comparativo_formato_7) { $literal_final_A7_L3 = $literal_formato_7;  }
  if ($nota_final_A7_L3_redon >= $comparativo_formato_8) { $literal_final_A7_L3 = $literal_formato_8;  }
  if ($nota_final_A7_L3_redon >= $comparativo_formato_9) { $literal_final_A7_L3 = $literal_formato_9;  }
  if ($nota_final_A7_L3_redon >= $comparativo_formato_10) { $literal_final_A7_L3 = $literal_formato_10;  }
  if ($nota_final_A7_L3_redon >= $comparativo_formato_11) { $literal_final_A7_L3 = $literal_formato_11;  }
  if ($nota_final_A7_L3_redon >= $comparativo_formato_12) { $literal_final_A7_L3 = $literal_formato_12;  } 
  echo $literal_final_A7_L3; } /* cierre literal */    ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">



<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
<?php

$Parcial_A7_L1 = 0.000000001;
$Parcial_A7_L2 = 0.000000001;
$Parcial_A7_L3 = 0.000000001;



$Nota_Pro_Final_A7_L1_entero=$nota_final_A7_L1_redon1;          
$Nota_Pro_Final_A7_L2_entero=$nota_final_A7_L2_redon1;
$Nota_Pro_Final_A7_L3_entero=$nota_final_A7_L3_redon1;

if ($Nota_Pro_Final_A7_L1_entero >= 0.1) {
  $Parcial_A7_L1 = 1;
}

if ($Nota_Pro_Final_A7_L2_entero >= 0.1) {
  $Parcial_A7_L2 = 1;
}

if ($Nota_Pro_Final_A7_L3_entero >= 0.1) {
  $Parcial_A7_L3 = 1;
}


$Num_divisor_A7_L123 = $Parcial_A7_L1+$Parcial_A7_L2+$Parcial_A7_L3;       /* ojoooo */


 $Nota_Pro_all_A7_L123 =($nota_final_A7_L1_redon+$nota_final_A7_L2_redon+$nota_final_A7_L3_redon)/$Num_divisor_A7_L123;

$Nota_Pro_all_A7_L123_decimal=number_format($Nota_Pro_all_A7_L123, 1, ',', '');  echo $Nota_Pro_all_A7_L123_decimal;?></td>




  <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 14px;">
    <b><?php echo $row_datos_control_notas_A7["nt_AuF"];?></b></td>



<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A7_all_L123 = $Nota_Pro_all_A7_L123+$row_datos_control_notas_A7["nt_AuF"];




$Def_aux_total_A7_all_L123_redondeado1 = number_format($Def_aux_total_A7_all_L123, 1, '.', '');

$Definitiva_completa_A7_L123=number_format($Def_aux_total_A7_all_L123_redondeado1);  if ($row_datos_controlasign['g_convertir'] == 1 ) {  /* numerico */
       echo $Definitiva_completa_A7_L123;
} /* cierre numerico */
if ($row_datos_controlasign['g_convertir'] == 2 ) {  /* alfabetico */
   if ($Definitiva_completa_A7_L123 >= $comparativo_formato_1) { $alfabetico_completa_A7_L123 = $alfabetico_formato_1;  }
   if ($Definitiva_completa_A7_L123 >= $comparativo_formato_2) { $alfabetico_completa_A7_L123 = $alfabetico_formato_2;  }
   if ($Definitiva_completa_A7_L123 >= $comparativo_formato_3) { $alfabetico_completa_A7_L123 = $alfabetico_formato_3;  }
   if ($Definitiva_completa_A7_L123 >= $comparativo_formato_4) { $alfabetico_completa_A7_L123 = $alfabetico_formato_4;  }
   if ($Definitiva_completa_A7_L123 >= $comparativo_formato_5) { $alfabetico_completa_A7_L123 = $alfabetico_formato_5;  }
   if ($Definitiva_completa_A7_L123 >= $comparativo_formato_6) { $alfabetico_completa_A7_L123 = $alfabetico_formato_6;  }
   if ($Definitiva_completa_A7_L123 >= $comparativo_formato_7) { $alfabetico_completa_A7_L123 = $alfabetico_formato_7;  }
   if ($Definitiva_completa_A7_L123 >= $comparativo_formato_8) { $alfabetico_completa_A7_L123 = $alfabetico_formato_8;  }
   if ($Definitiva_completa_A7_L123 >= $comparativo_formato_9) { $alfabetico_completa_A7_L123 = $alfabetico_formato_9;  }
   if ($Definitiva_completa_A7_L123 >= $comparativo_formato_10) { $alfabetico_completa_A7_L123 = $alfabetico_formato_10;  }
   if ($Definitiva_completa_A7_L123 >= $comparativo_formato_11) { $alfabetico_completa_A7_L123 = $alfabetico_formato_11;  }
   if ($Definitiva_completa_A7_L123 >= $comparativo_formato_12) { $alfabetico_completa_A7_L123 = $alfabetico_formato_12;  }
   echo $alfabetico_completa_A7_L123; } /* cierre alfabetico */

if ($row_datos_controlasign['g_convertir'] == 3 ) {  /* literal */
  if ($Definitiva_completa_A7_L123 >= $comparativo_formato_1) { $literal_completa_A7_L123 = $literal_formato_1;  }
  if ($Definitiva_completa_A7_L123 >= $comparativo_formato_2) { $literal_completa_A7_L123 = $literal_formato_2;  }
  if ($Definitiva_completa_A7_L123 >= $comparativo_formato_3) { $literal_completa_A7_L123 = $literal_formato_3;  }
  if ($Definitiva_completa_A7_L123 >= $comparativo_formato_4) { $literal_completa_A7_L123 = $literal_formato_4;  }
  if ($Definitiva_completa_A7_L123 >= $comparativo_formato_5) { $literal_completa_A7_L123 = $literal_formato_5;  }
  if ($Definitiva_completa_A7_L123 >= $comparativo_formato_6) { $literal_completa_A7_L123 = $literal_formato_6;  }
  if ($Definitiva_completa_A7_L123 >= $comparativo_formato_7) { $literal_completa_A7_L123 = $literal_formato_7;  }
  if ($Definitiva_completa_A7_L123 >= $comparativo_formato_8) { $literal_completa_A7_L123 = $literal_formato_8;  }
  if ($Definitiva_completa_A7_L123 >= $comparativo_formato_9) { $literal_completa_A7_L123 = $literal_formato_9;  }
  if ($Definitiva_completa_A7_L123 >= $comparativo_formato_10) { $literal_completa_A7_L123 = $literal_formato_10;  }
  if ($Definitiva_completa_A7_L123 >= $comparativo_formato_11) { $literal_completa_A7_L123 = $literal_formato_11;  }
  if ($Definitiva_completa_A7_L123 >= $comparativo_formato_12) { $literal_completa_A7_L123 = $literal_formato_12;  } 
  echo $literal_completa_A7_L123; } /* cierre literal */ ?></b></td>


<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A7['rev_uno'];?></td>

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A7['rev_dos'];?></td>



<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5%; height: 23px;"><?php echo $row_datos_controlasign['g_abrev'];?>
  
<span style="color:red; font-size: 16px;"><b> <?php

               $g_ayuda = '';

                if ($row_datos_controlasign['g_suma'] !=1) {
                  $g_ayuda = '#';
               }

                echo $g_ayuda;?></b></span>

</td>




            </tr>



            <tr>
                       


              <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['h_abrev'];?>
                
<span style="color:red; font-size: 16px;"><b> <?php

               $h_ayuda = '';

                if ($row_datos_controlasign['h_suma'] !=1) {
                  $h_ayuda = '#';
               }

                echo $h_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 1.2%;">  </td>

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A8["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A8_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A8_L1_redon;?>"><b><?php



if ($row_datos_controlasign['h_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A8_L1;
} /* cierre numerico */
if ($row_datos_controlasign['h_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A8_L1_redon >= $comparativo_formato_1) { $alfabetico_final_A8_L1 = $alfabetico_formato_1;  }
   if ($nota_final_A8_L1_redon >= $comparativo_formato_2) { $alfabetico_final_A8_L1 = $alfabetico_formato_2;  }
   if ($nota_final_A8_L1_redon >= $comparativo_formato_3) { $alfabetico_final_A8_L1 = $alfabetico_formato_3;  }
   if ($nota_final_A8_L1_redon >= $comparativo_formato_4) { $alfabetico_final_A8_L1 = $alfabetico_formato_4;  }
   if ($nota_final_A8_L1_redon >= $comparativo_formato_5) { $alfabetico_final_A8_L1 = $alfabetico_formato_5;  }
   if ($nota_final_A8_L1_redon >= $comparativo_formato_6) { $alfabetico_final_A8_L1 = $alfabetico_formato_6;  }
   if ($nota_final_A8_L1_redon >= $comparativo_formato_7) { $alfabetico_final_A8_L1 = $alfabetico_formato_7;  }
   if ($nota_final_A8_L1_redon >= $comparativo_formato_8) { $alfabetico_final_A8_L1 = $alfabetico_formato_8;  }
   if ($nota_final_A8_L1_redon >= $comparativo_formato_9) { $alfabetico_final_A8_L1 = $alfabetico_formato_9;  }
   if ($nota_final_A8_L1_redon >= $comparativo_formato_10) { $alfabetico_final_A8_L1 = $alfabetico_formato_10;  }
   if ($nota_final_A8_L1_redon >= $comparativo_formato_11) { $alfabetico_final_A8_L1 = $alfabetico_formato_11;  }
   if ($nota_final_A8_L1_redon >= $comparativo_formato_12) { $alfabetico_final_A8_L1 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A8_L1; } /* cierre alfabetico */

if ($row_datos_controlasign['h_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A8_L1_redon >= $comparativo_formato_1) { $literal_final_A8_L1 = $literal_formato_1;  }
  if ($nota_final_A8_L1_redon >= $comparativo_formato_2) { $literal_final_A8_L1 = $literal_formato_2;  }
  if ($nota_final_A8_L1_redon >= $comparativo_formato_3) { $literal_final_A8_L1 = $literal_formato_3;  }
  if ($nota_final_A8_L1_redon >= $comparativo_formato_4) { $literal_final_A8_L1 = $literal_formato_4;  }
  if ($nota_final_A8_L1_redon >= $comparativo_formato_5) { $literal_final_A8_L1 = $literal_formato_5;  }
  if ($nota_final_A8_L1_redon >= $comparativo_formato_6) { $literal_final_A8_L1 = $literal_formato_6;  }
  if ($nota_final_A8_L1_redon >= $comparativo_formato_7) { $literal_final_A8_L1 = $literal_formato_7;  }
  if ($nota_final_A8_L1_redon >= $comparativo_formato_8) { $literal_final_A8_L1 = $literal_formato_8;  }
  if ($nota_final_A8_L1_redon >= $comparativo_formato_9) { $literal_final_A8_L1 = $literal_formato_9;  }
  if ($nota_final_A8_L1_redon >= $comparativo_formato_10) { $literal_final_A8_L1 = $literal_formato_10;  }
  if ($nota_final_A8_L1_redon >= $comparativo_formato_11) { $literal_final_A8_L1 = $literal_formato_11;  }
  if ($nota_final_A8_L1_redon >= $comparativo_formato_12) { $literal_final_A8_L1 = $literal_formato_12;  } 
  echo $literal_final_A8_L1; } /* cierre literal */
        ?> </b></span></td> 

             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A8["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A8_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A8_L2_redon;?>"><b><?php if ($row_datos_controlasign['h_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A8_L2;
} /* cierre numerico */
if ($row_datos_controlasign['h_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A8_L2_redon >= $comparativo_formato_1) { $alfabetico_final_A8_L2 = $alfabetico_formato_1;  }
   if ($nota_final_A8_L2_redon >= $comparativo_formato_2) { $alfabetico_final_A8_L2 = $alfabetico_formato_2;  }
   if ($nota_final_A8_L2_redon >= $comparativo_formato_3) { $alfabetico_final_A8_L2 = $alfabetico_formato_3;  }
   if ($nota_final_A8_L2_redon >= $comparativo_formato_4) { $alfabetico_final_A8_L2 = $alfabetico_formato_4;  }
   if ($nota_final_A8_L2_redon >= $comparativo_formato_5) { $alfabetico_final_A8_L2 = $alfabetico_formato_5;  }
   if ($nota_final_A8_L2_redon >= $comparativo_formato_6) { $alfabetico_final_A8_L2 = $alfabetico_formato_6;  }
   if ($nota_final_A8_L2_redon >= $comparativo_formato_7) { $alfabetico_final_A8_L2 = $alfabetico_formato_7;  }
   if ($nota_final_A8_L2_redon >= $comparativo_formato_8) { $alfabetico_final_A8_L2 = $alfabetico_formato_8;  }
   if ($nota_final_A8_L2_redon >= $comparativo_formato_9) { $alfabetico_final_A8_L2 = $alfabetico_formato_9;  }
   if ($nota_final_A8_L2_redon >= $comparativo_formato_10) { $alfabetico_final_A8_L2 = $alfabetico_formato_10;  }
   if ($nota_final_A8_L2_redon >= $comparativo_formato_11) { $alfabetico_final_A8_L2 = $alfabetico_formato_11;  }
   if ($nota_final_A8_L2_redon >= $comparativo_formato_12) { $alfabetico_final_A8_L2 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A8_L2; } /* cierre alfabetico */

if ($row_datos_controlasign['h_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A8_L2_redon >= $comparativo_formato_1) { $literal_final_A8_L2 = $literal_formato_1;  }
  if ($nota_final_A8_L2_redon >= $comparativo_formato_2) { $literal_final_A8_L2 = $literal_formato_2;  }
  if ($nota_final_A8_L2_redon >= $comparativo_formato_3) { $literal_final_A8_L2 = $literal_formato_3;  }
  if ($nota_final_A8_L2_redon >= $comparativo_formato_4) { $literal_final_A8_L2 = $literal_formato_4;  }
  if ($nota_final_A8_L2_redon >= $comparativo_formato_5) { $literal_final_A8_L2 = $literal_formato_5;  }
  if ($nota_final_A8_L2_redon >= $comparativo_formato_6) { $literal_final_A8_L2 = $literal_formato_6;  }
  if ($nota_final_A8_L2_redon >= $comparativo_formato_7) { $literal_final_A8_L2 = $literal_formato_7;  }
  if ($nota_final_A8_L2_redon >= $comparativo_formato_8) { $literal_final_A8_L2 = $literal_formato_8;  }
  if ($nota_final_A8_L2_redon >= $comparativo_formato_9) { $literal_final_A8_L2 = $literal_formato_9;  }
  if ($nota_final_A8_L2_redon >= $comparativo_formato_10) { $literal_final_A8_L2 = $literal_formato_10;  }
  if ($nota_final_A8_L2_redon >= $comparativo_formato_11) { $literal_final_A8_L2 = $literal_formato_11;  }
  if ($nota_final_A8_L2_redon >= $comparativo_formato_12) { $literal_final_A8_L2 = $literal_formato_12;  } 
  echo $literal_final_A8_L2; } /* cierre literal */  ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A8["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A8_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A8_L3_redon;?>"><b><?php if ($row_datos_controlasign['h_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A8_L3;
} /* cierre numerico */
if ($row_datos_controlasign['h_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A8_L3_redon >= $comparativo_formato_1) { $alfabetico_final_A8_L3 = $alfabetico_formato_1;  }
   if ($nota_final_A8_L3_redon >= $comparativo_formato_2) { $alfabetico_final_A8_L3 = $alfabetico_formato_2;  }
   if ($nota_final_A8_L3_redon >= $comparativo_formato_3) { $alfabetico_final_A8_L3 = $alfabetico_formato_3;  }
   if ($nota_final_A8_L3_redon >= $comparativo_formato_4) { $alfabetico_final_A8_L3 = $alfabetico_formato_4;  }
   if ($nota_final_A8_L3_redon >= $comparativo_formato_5) { $alfabetico_final_A8_L3 = $alfabetico_formato_5;  }
   if ($nota_final_A8_L3_redon >= $comparativo_formato_6) { $alfabetico_final_A8_L3 = $alfabetico_formato_6;  }
   if ($nota_final_A8_L3_redon >= $comparativo_formato_7) { $alfabetico_final_A8_L3 = $alfabetico_formato_7;  }
   if ($nota_final_A8_L3_redon >= $comparativo_formato_8) { $alfabetico_final_A8_L3 = $alfabetico_formato_8;  }
   if ($nota_final_A8_L3_redon >= $comparativo_formato_9) { $alfabetico_final_A8_L3 = $alfabetico_formato_9;  }
   if ($nota_final_A8_L3_redon >= $comparativo_formato_10) { $alfabetico_final_A8_L3 = $alfabetico_formato_10;  }
   if ($nota_final_A8_L3_redon >= $comparativo_formato_11) { $alfabetico_final_A8_L3 = $alfabetico_formato_11;  }
   if ($nota_final_A8_L3_redon >= $comparativo_formato_12) { $alfabetico_final_A8_L3 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A8_L3; } /* cierre alfabetico */

if ($row_datos_controlasign['h_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A8_L3_redon >= $comparativo_formato_1) { $literal_final_A8_L3 = $literal_formato_1;  }
  if ($nota_final_A8_L3_redon >= $comparativo_formato_2) { $literal_final_A8_L3 = $literal_formato_2;  }
  if ($nota_final_A8_L3_redon >= $comparativo_formato_3) { $literal_final_A8_L3 = $literal_formato_3;  }
  if ($nota_final_A8_L3_redon >= $comparativo_formato_4) { $literal_final_A8_L3 = $literal_formato_4;  }
  if ($nota_final_A8_L3_redon >= $comparativo_formato_5) { $literal_final_A8_L3 = $literal_formato_5;  }
  if ($nota_final_A8_L3_redon >= $comparativo_formato_6) { $literal_final_A8_L3 = $literal_formato_6;  }
  if ($nota_final_A8_L3_redon >= $comparativo_formato_7) { $literal_final_A8_L3 = $literal_formato_7;  }
  if ($nota_final_A8_L3_redon >= $comparativo_formato_8) { $literal_final_A8_L3 = $literal_formato_8;  }
  if ($nota_final_A8_L3_redon >= $comparativo_formato_9) { $literal_final_A8_L3 = $literal_formato_9;  }
  if ($nota_final_A8_L3_redon >= $comparativo_formato_10) { $literal_final_A8_L3 = $literal_formato_10;  }
  if ($nota_final_A8_L3_redon >= $comparativo_formato_11) { $literal_final_A8_L3 = $literal_formato_11;  }
  if ($nota_final_A8_L3_redon >= $comparativo_formato_12) { $literal_final_A8_L3 = $literal_formato_12;  } 
  echo $literal_final_A8_L3; } /* cierre literal */    ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">



<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
<?php

$Parcial_A8_L1 = 0.000000001;
$Parcial_A8_L2 = 0.000000001;
$Parcial_A8_L3 = 0.000000001;



$Nota_Pro_Final_A8_L1_entero=$nota_final_A8_L1_redon1;          
$Nota_Pro_Final_A8_L2_entero=$nota_final_A8_L2_redon1;
$Nota_Pro_Final_A8_L3_entero=$nota_final_A8_L3_redon1;

if ($Nota_Pro_Final_A8_L1_entero >= 0.1) {
  $Parcial_A8_L1 = 1;
}

if ($Nota_Pro_Final_A8_L2_entero >= 0.1) {
  $Parcial_A8_L2 = 1;
}

if ($Nota_Pro_Final_A8_L3_entero >= 0.1) {
  $Parcial_A8_L3 = 1;
}


$Num_divisor_A8_L123 = $Parcial_A8_L1+$Parcial_A8_L2+$Parcial_A8_L3;       /* ojoooo */


 $Nota_Pro_all_A8_L123 =($nota_final_A8_L1_redon+$nota_final_A8_L2_redon+$nota_final_A8_L3_redon)/$Num_divisor_A8_L123;

$Nota_Pro_all_A8_L123_decimal=number_format($Nota_Pro_all_A8_L123, 1, ',', '');  echo $Nota_Pro_all_A8_L123_decimal;?></td>




  <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 14px;">
    <b><?php echo $row_datos_control_notas_A8["nt_AuF"];?></b></td>



<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A8_all_L123 = $Nota_Pro_all_A8_L123+$row_datos_control_notas_A8["nt_AuF"];




$Def_aux_total_A8_all_L123_redondeado1 = number_format($Def_aux_total_A8_all_L123, 1, '.', '');

$Definitiva_completa_A8_L123=number_format($Def_aux_total_A8_all_L123_redondeado1);  if ($row_datos_controlasign['h_convertir'] == 1 ) {  /* numerico */
       echo $Definitiva_completa_A8_L123;
} /* cierre numerico */
if ($row_datos_controlasign['h_convertir'] == 2 ) {  /* alfabetico */
   if ($Definitiva_completa_A8_L123 >= $comparativo_formato_1) { $alfabetico_completa_A8_L123 = $alfabetico_formato_1;  }
   if ($Definitiva_completa_A8_L123 >= $comparativo_formato_2) { $alfabetico_completa_A8_L123 = $alfabetico_formato_2;  }
   if ($Definitiva_completa_A8_L123 >= $comparativo_formato_3) { $alfabetico_completa_A8_L123 = $alfabetico_formato_3;  }
   if ($Definitiva_completa_A8_L123 >= $comparativo_formato_4) { $alfabetico_completa_A8_L123 = $alfabetico_formato_4;  }
   if ($Definitiva_completa_A8_L123 >= $comparativo_formato_5) { $alfabetico_completa_A8_L123 = $alfabetico_formato_5;  }
   if ($Definitiva_completa_A8_L123 >= $comparativo_formato_6) { $alfabetico_completa_A8_L123 = $alfabetico_formato_6;  }
   if ($Definitiva_completa_A8_L123 >= $comparativo_formato_7) { $alfabetico_completa_A8_L123 = $alfabetico_formato_7;  }
   if ($Definitiva_completa_A8_L123 >= $comparativo_formato_8) { $alfabetico_completa_A8_L123 = $alfabetico_formato_8;  }
   if ($Definitiva_completa_A8_L123 >= $comparativo_formato_9) { $alfabetico_completa_A8_L123 = $alfabetico_formato_9;  }
   if ($Definitiva_completa_A8_L123 >= $comparativo_formato_10) { $alfabetico_completa_A8_L123 = $alfabetico_formato_10;  }
   if ($Definitiva_completa_A8_L123 >= $comparativo_formato_11) { $alfabetico_completa_A8_L123 = $alfabetico_formato_11;  }
   if ($Definitiva_completa_A8_L123 >= $comparativo_formato_12) { $alfabetico_completa_A8_L123 = $alfabetico_formato_12;  }
   echo $alfabetico_completa_A8_L123; } /* cierre alfabetico */

if ($row_datos_controlasign['h_convertir'] == 3 ) {  /* literal */
  if ($Definitiva_completa_A8_L123 >= $comparativo_formato_1) { $literal_completa_A8_L123 = $literal_formato_1;  }
  if ($Definitiva_completa_A8_L123 >= $comparativo_formato_2) { $literal_completa_A8_L123 = $literal_formato_2;  }
  if ($Definitiva_completa_A8_L123 >= $comparativo_formato_3) { $literal_completa_A8_L123 = $literal_formato_3;  }
  if ($Definitiva_completa_A8_L123 >= $comparativo_formato_4) { $literal_completa_A8_L123 = $literal_formato_4;  }
  if ($Definitiva_completa_A8_L123 >= $comparativo_formato_5) { $literal_completa_A8_L123 = $literal_formato_5;  }
  if ($Definitiva_completa_A8_L123 >= $comparativo_formato_6) { $literal_completa_A8_L123 = $literal_formato_6;  }
  if ($Definitiva_completa_A8_L123 >= $comparativo_formato_7) { $literal_completa_A8_L123 = $literal_formato_7;  }
  if ($Definitiva_completa_A8_L123 >= $comparativo_formato_8) { $literal_completa_A8_L123 = $literal_formato_8;  }
  if ($Definitiva_completa_A8_L123 >= $comparativo_formato_9) { $literal_completa_A8_L123 = $literal_formato_9;  }
  if ($Definitiva_completa_A8_L123 >= $comparativo_formato_10) { $literal_completa_A8_L123 = $literal_formato_10;  }
  if ($Definitiva_completa_A8_L123 >= $comparativo_formato_11) { $literal_completa_A8_L123 = $literal_formato_11;  }
  if ($Definitiva_completa_A8_L123 >= $comparativo_formato_12) { $literal_completa_A8_L123 = $literal_formato_12;  } 
  echo $literal_completa_A8_L123; } /* cierre literal */ ?></b></td>


<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A8['rev_uno'];?></td>

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A8['rev_dos'];?></td>



<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5%; height: 23px;"><?php echo $row_datos_controlasign['h_abrev'];?>
  
<span style="color:red; font-size: 16px;"><b> <?php

               $h_ayuda = '';

                if ($row_datos_controlasign['h_suma'] !=1) {
                  $h_ayuda = '#';
               }

                echo $h_ayuda;?></b></span>

</td>




            </tr>




            <tr>
                       


              <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['i_abrev'];?>
                
<span style="color:red; font-size: 16px;"><b> <?php

               $i_ayuda = '';

                if ($row_datos_controlasign['i_suma'] !=1) {
                  $i_ayuda = '#';
               }

                echo $i_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 1.2%;">  </td>

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A9["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A9_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A9_L1_redon;?>"><b><?php



if ($row_datos_controlasign['i_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A9_L1;
} /* cierre numerico */
if ($row_datos_controlasign['i_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A9_L1_redon >= $comparativo_formato_1) { $alfabetico_final_A9_L1 = $alfabetico_formato_1;  }
   if ($nota_final_A9_L1_redon >= $comparativo_formato_2) { $alfabetico_final_A9_L1 = $alfabetico_formato_2;  }
   if ($nota_final_A9_L1_redon >= $comparativo_formato_3) { $alfabetico_final_A9_L1 = $alfabetico_formato_3;  }
   if ($nota_final_A9_L1_redon >= $comparativo_formato_4) { $alfabetico_final_A9_L1 = $alfabetico_formato_4;  }
   if ($nota_final_A9_L1_redon >= $comparativo_formato_5) { $alfabetico_final_A9_L1 = $alfabetico_formato_5;  }
   if ($nota_final_A9_L1_redon >= $comparativo_formato_6) { $alfabetico_final_A9_L1 = $alfabetico_formato_6;  }
   if ($nota_final_A9_L1_redon >= $comparativo_formato_7) { $alfabetico_final_A9_L1 = $alfabetico_formato_7;  }
   if ($nota_final_A9_L1_redon >= $comparativo_formato_8) { $alfabetico_final_A9_L1 = $alfabetico_formato_8;  }
   if ($nota_final_A9_L1_redon >= $comparativo_formato_9) { $alfabetico_final_A9_L1 = $alfabetico_formato_9;  }
   if ($nota_final_A9_L1_redon >= $comparativo_formato_10) { $alfabetico_final_A9_L1 = $alfabetico_formato_10;  }
   if ($nota_final_A9_L1_redon >= $comparativo_formato_11) { $alfabetico_final_A9_L1 = $alfabetico_formato_11;  }
   if ($nota_final_A9_L1_redon >= $comparativo_formato_12) { $alfabetico_final_A9_L1 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A9_L1; } /* cierre alfabetico */

if ($row_datos_controlasign['i_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A9_L1_redon >= $comparativo_formato_1) { $literal_final_A9_L1 = $literal_formato_1;  }
  if ($nota_final_A9_L1_redon >= $comparativo_formato_2) { $literal_final_A9_L1 = $literal_formato_2;  }
  if ($nota_final_A9_L1_redon >= $comparativo_formato_3) { $literal_final_A9_L1 = $literal_formato_3;  }
  if ($nota_final_A9_L1_redon >= $comparativo_formato_4) { $literal_final_A9_L1 = $literal_formato_4;  }
  if ($nota_final_A9_L1_redon >= $comparativo_formato_5) { $literal_final_A9_L1 = $literal_formato_5;  }
  if ($nota_final_A9_L1_redon >= $comparativo_formato_6) { $literal_final_A9_L1 = $literal_formato_6;  }
  if ($nota_final_A9_L1_redon >= $comparativo_formato_7) { $literal_final_A9_L1 = $literal_formato_7;  }
  if ($nota_final_A9_L1_redon >= $comparativo_formato_8) { $literal_final_A9_L1 = $literal_formato_8;  }
  if ($nota_final_A9_L1_redon >= $comparativo_formato_9) { $literal_final_A9_L1 = $literal_formato_9;  }
  if ($nota_final_A9_L1_redon >= $comparativo_formato_10) { $literal_final_A9_L1 = $literal_formato_10;  }
  if ($nota_final_A9_L1_redon >= $comparativo_formato_11) { $literal_final_A9_L1 = $literal_formato_11;  }
  if ($nota_final_A9_L1_redon >= $comparativo_formato_12) { $literal_final_A9_L1 = $literal_formato_12;  } 
  echo $literal_final_A9_L1; } /* cierre literal */
        ?> </b></span></td> 

             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A9["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A9_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A9_L2_redon;?>"><b><?php if ($row_datos_controlasign['i_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A9_L2;
} /* cierre numerico */
if ($row_datos_controlasign['i_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A9_L2_redon >= $comparativo_formato_1) { $alfabetico_final_A9_L2 = $alfabetico_formato_1;  }
   if ($nota_final_A9_L2_redon >= $comparativo_formato_2) { $alfabetico_final_A9_L2 = $alfabetico_formato_2;  }
   if ($nota_final_A9_L2_redon >= $comparativo_formato_3) { $alfabetico_final_A9_L2 = $alfabetico_formato_3;  }
   if ($nota_final_A9_L2_redon >= $comparativo_formato_4) { $alfabetico_final_A9_L2 = $alfabetico_formato_4;  }
   if ($nota_final_A9_L2_redon >= $comparativo_formato_5) { $alfabetico_final_A9_L2 = $alfabetico_formato_5;  }
   if ($nota_final_A9_L2_redon >= $comparativo_formato_6) { $alfabetico_final_A9_L2 = $alfabetico_formato_6;  }
   if ($nota_final_A9_L2_redon >= $comparativo_formato_7) { $alfabetico_final_A9_L2 = $alfabetico_formato_7;  }
   if ($nota_final_A9_L2_redon >= $comparativo_formato_8) { $alfabetico_final_A9_L2 = $alfabetico_formato_8;  }
   if ($nota_final_A9_L2_redon >= $comparativo_formato_9) { $alfabetico_final_A9_L2 = $alfabetico_formato_9;  }
   if ($nota_final_A9_L2_redon >= $comparativo_formato_10) { $alfabetico_final_A9_L2 = $alfabetico_formato_10;  }
   if ($nota_final_A9_L2_redon >= $comparativo_formato_11) { $alfabetico_final_A9_L2 = $alfabetico_formato_11;  }
   if ($nota_final_A9_L2_redon >= $comparativo_formato_12) { $alfabetico_final_A9_L2 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A9_L2; } /* cierre alfabetico */

if ($row_datos_controlasign['i_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A9_L2_redon >= $comparativo_formato_1) { $literal_final_A9_L2 = $literal_formato_1;  }
  if ($nota_final_A9_L2_redon >= $comparativo_formato_2) { $literal_final_A9_L2 = $literal_formato_2;  }
  if ($nota_final_A9_L2_redon >= $comparativo_formato_3) { $literal_final_A9_L2 = $literal_formato_3;  }
  if ($nota_final_A9_L2_redon >= $comparativo_formato_4) { $literal_final_A9_L2 = $literal_formato_4;  }
  if ($nota_final_A9_L2_redon >= $comparativo_formato_5) { $literal_final_A9_L2 = $literal_formato_5;  }
  if ($nota_final_A9_L2_redon >= $comparativo_formato_6) { $literal_final_A9_L2 = $literal_formato_6;  }
  if ($nota_final_A9_L2_redon >= $comparativo_formato_7) { $literal_final_A9_L2 = $literal_formato_7;  }
  if ($nota_final_A9_L2_redon >= $comparativo_formato_8) { $literal_final_A9_L2 = $literal_formato_8;  }
  if ($nota_final_A9_L2_redon >= $comparativo_formato_9) { $literal_final_A9_L2 = $literal_formato_9;  }
  if ($nota_final_A9_L2_redon >= $comparativo_formato_10) { $literal_final_A9_L2 = $literal_formato_10;  }
  if ($nota_final_A9_L2_redon >= $comparativo_formato_11) { $literal_final_A9_L2 = $literal_formato_11;  }
  if ($nota_final_A9_L2_redon >= $comparativo_formato_12) { $literal_final_A9_L2 = $literal_formato_12;  } 
  echo $literal_final_A9_L2; } /* cierre literal */  ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A9["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A9_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A9_L3_redon;?>"><b><?php if ($row_datos_controlasign['i_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A9_L3;
} /* cierre numerico */
if ($row_datos_controlasign['i_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A9_L3_redon >= $comparativo_formato_1) { $alfabetico_final_A9_L3 = $alfabetico_formato_1;  }
   if ($nota_final_A9_L3_redon >= $comparativo_formato_2) { $alfabetico_final_A9_L3 = $alfabetico_formato_2;  }
   if ($nota_final_A9_L3_redon >= $comparativo_formato_3) { $alfabetico_final_A9_L3 = $alfabetico_formato_3;  }
   if ($nota_final_A9_L3_redon >= $comparativo_formato_4) { $alfabetico_final_A9_L3 = $alfabetico_formato_4;  }
   if ($nota_final_A9_L3_redon >= $comparativo_formato_5) { $alfabetico_final_A9_L3 = $alfabetico_formato_5;  }
   if ($nota_final_A9_L3_redon >= $comparativo_formato_6) { $alfabetico_final_A9_L3 = $alfabetico_formato_6;  }
   if ($nota_final_A9_L3_redon >= $comparativo_formato_7) { $alfabetico_final_A9_L3 = $alfabetico_formato_7;  }
   if ($nota_final_A9_L3_redon >= $comparativo_formato_8) { $alfabetico_final_A9_L3 = $alfabetico_formato_8;  }
   if ($nota_final_A9_L3_redon >= $comparativo_formato_9) { $alfabetico_final_A9_L3 = $alfabetico_formato_9;  }
   if ($nota_final_A9_L3_redon >= $comparativo_formato_10) { $alfabetico_final_A9_L3 = $alfabetico_formato_10;  }
   if ($nota_final_A9_L3_redon >= $comparativo_formato_11) { $alfabetico_final_A9_L3 = $alfabetico_formato_11;  }
   if ($nota_final_A9_L3_redon >= $comparativo_formato_12) { $alfabetico_final_A9_L3 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A9_L3; } /* cierre alfabetico */

if ($row_datos_controlasign['i_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A9_L3_redon >= $comparativo_formato_1) { $literal_final_A9_L3 = $literal_formato_1;  }
  if ($nota_final_A9_L3_redon >= $comparativo_formato_2) { $literal_final_A9_L3 = $literal_formato_2;  }
  if ($nota_final_A9_L3_redon >= $comparativo_formato_3) { $literal_final_A9_L3 = $literal_formato_3;  }
  if ($nota_final_A9_L3_redon >= $comparativo_formato_4) { $literal_final_A9_L3 = $literal_formato_4;  }
  if ($nota_final_A9_L3_redon >= $comparativo_formato_5) { $literal_final_A9_L3 = $literal_formato_5;  }
  if ($nota_final_A9_L3_redon >= $comparativo_formato_6) { $literal_final_A9_L3 = $literal_formato_6;  }
  if ($nota_final_A9_L3_redon >= $comparativo_formato_7) { $literal_final_A9_L3 = $literal_formato_7;  }
  if ($nota_final_A9_L3_redon >= $comparativo_formato_8) { $literal_final_A9_L3 = $literal_formato_8;  }
  if ($nota_final_A9_L3_redon >= $comparativo_formato_9) { $literal_final_A9_L3 = $literal_formato_9;  }
  if ($nota_final_A9_L3_redon >= $comparativo_formato_10) { $literal_final_A9_L3 = $literal_formato_10;  }
  if ($nota_final_A9_L3_redon >= $comparativo_formato_11) { $literal_final_A9_L3 = $literal_formato_11;  }
  if ($nota_final_A9_L3_redon >= $comparativo_formato_12) { $literal_final_A9_L3 = $literal_formato_12;  } 
  echo $literal_final_A9_L3; } /* cierre literal */    ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">



<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
<?php

$Parcial_A9_L1 = 0.000000001;
$Parcial_A9_L2 = 0.000000001;
$Parcial_A9_L3 = 0.000000001;



$Nota_Pro_Final_A9_L1_entero=$nota_final_A9_L1_redon1;          
$Nota_Pro_Final_A9_L2_entero=$nota_final_A9_L2_redon1;
$Nota_Pro_Final_A9_L3_entero=$nota_final_A9_L3_redon1;

if ($Nota_Pro_Final_A9_L1_entero >= 0.1) {
  $Parcial_A9_L1 = 1;
}

if ($Nota_Pro_Final_A9_L2_entero >= 0.1) {
  $Parcial_A9_L2 = 1;
}

if ($Nota_Pro_Final_A9_L3_entero >= 0.1) {
  $Parcial_A9_L3 = 1;
}


$Num_divisor_A9_L123 = $Parcial_A9_L1+$Parcial_A9_L2+$Parcial_A9_L3;       /* ojoooo */


 $Nota_Pro_all_A9_L123 =($nota_final_A9_L1_redon+$nota_final_A9_L2_redon+$nota_final_A9_L3_redon)/$Num_divisor_A9_L123;

$Nota_Pro_all_A9_L123_decimal=number_format($Nota_Pro_all_A9_L123, 1, ',', '');  echo $Nota_Pro_all_A9_L123_decimal;?></td>




  <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 14px;">
    <b><?php echo $row_datos_control_notas_A9["nt_AuF"];?></b></td>



<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A9_all_L123 = $Nota_Pro_all_A9_L123+$row_datos_control_notas_A9["nt_AuF"];




$Def_aux_total_A9_all_L123_redondeado1 = number_format($Def_aux_total_A9_all_L123, 1, '.', '');

$Definitiva_completa_A9_L123=number_format($Def_aux_total_A9_all_L123_redondeado1);  if ($row_datos_controlasign['i_convertir'] == 1 ) {  /* numerico */
       echo $Definitiva_completa_A9_L123;
} /* cierre numerico */
if ($row_datos_controlasign['i_convertir'] == 2 ) {  /* alfabetico */
   if ($Definitiva_completa_A9_L123 >= $comparativo_formato_1) { $alfabetico_completa_A9_L123 = $alfabetico_formato_1;  }
   if ($Definitiva_completa_A9_L123 >= $comparativo_formato_2) { $alfabetico_completa_A9_L123 = $alfabetico_formato_2;  }
   if ($Definitiva_completa_A9_L123 >= $comparativo_formato_3) { $alfabetico_completa_A9_L123 = $alfabetico_formato_3;  }
   if ($Definitiva_completa_A9_L123 >= $comparativo_formato_4) { $alfabetico_completa_A9_L123 = $alfabetico_formato_4;  }
   if ($Definitiva_completa_A9_L123 >= $comparativo_formato_5) { $alfabetico_completa_A9_L123 = $alfabetico_formato_5;  }
   if ($Definitiva_completa_A9_L123 >= $comparativo_formato_6) { $alfabetico_completa_A9_L123 = $alfabetico_formato_6;  }
   if ($Definitiva_completa_A9_L123 >= $comparativo_formato_7) { $alfabetico_completa_A9_L123 = $alfabetico_formato_7;  }
   if ($Definitiva_completa_A9_L123 >= $comparativo_formato_8) { $alfabetico_completa_A9_L123 = $alfabetico_formato_8;  }
   if ($Definitiva_completa_A9_L123 >= $comparativo_formato_9) { $alfabetico_completa_A9_L123 = $alfabetico_formato_9;  }
   if ($Definitiva_completa_A9_L123 >= $comparativo_formato_10) { $alfabetico_completa_A9_L123 = $alfabetico_formato_10;  }
   if ($Definitiva_completa_A9_L123 >= $comparativo_formato_11) { $alfabetico_completa_A9_L123 = $alfabetico_formato_11;  }
   if ($Definitiva_completa_A9_L123 >= $comparativo_formato_12) { $alfabetico_completa_A9_L123 = $alfabetico_formato_12;  }
   echo $alfabetico_completa_A9_L123; } /* cierre alfabetico */

if ($row_datos_controlasign['i_convertir'] == 3 ) {  /* literal */
  if ($Definitiva_completa_A9_L123 >= $comparativo_formato_1) { $literal_completa_A9_L123 = $literal_formato_1;  }
  if ($Definitiva_completa_A9_L123 >= $comparativo_formato_2) { $literal_completa_A9_L123 = $literal_formato_2;  }
  if ($Definitiva_completa_A9_L123 >= $comparativo_formato_3) { $literal_completa_A9_L123 = $literal_formato_3;  }
  if ($Definitiva_completa_A9_L123 >= $comparativo_formato_4) { $literal_completa_A9_L123 = $literal_formato_4;  }
  if ($Definitiva_completa_A9_L123 >= $comparativo_formato_5) { $literal_completa_A9_L123 = $literal_formato_5;  }
  if ($Definitiva_completa_A9_L123 >= $comparativo_formato_6) { $literal_completa_A9_L123 = $literal_formato_6;  }
  if ($Definitiva_completa_A9_L123 >= $comparativo_formato_7) { $literal_completa_A9_L123 = $literal_formato_7;  }
  if ($Definitiva_completa_A9_L123 >= $comparativo_formato_8) { $literal_completa_A9_L123 = $literal_formato_8;  }
  if ($Definitiva_completa_A9_L123 >= $comparativo_formato_9) { $literal_completa_A9_L123 = $literal_formato_9;  }
  if ($Definitiva_completa_A9_L123 >= $comparativo_formato_10) { $literal_completa_A9_L123 = $literal_formato_10;  }
  if ($Definitiva_completa_A9_L123 >= $comparativo_formato_11) { $literal_completa_A9_L123 = $literal_formato_11;  }
  if ($Definitiva_completa_A9_L123 >= $comparativo_formato_12) { $literal_completa_A9_L123 = $literal_formato_12;  } 
  echo $literal_completa_A9_L123; } /* cierre literal */ ?></b></td>


<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A9['rev_uno'];?></td>

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A9['rev_dos'];?></td>



<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5%; height: 23px;"><?php echo $row_datos_controlasign['i_abrev'];?>
  
<span style="color:red; font-size: 16px;"><b> <?php

               $i_ayuda = '';

                if ($row_datos_controlasign['i_suma'] !=1) {
                  $i_ayuda = '#';
               }

                echo $i_ayuda;?></b></span>

</td>




            </tr>



            <tr>
                       


              <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['j_abrev'];?>
                
<span style="color:red; font-size: 16px;"><b> <?php

               $j_ayuda = '';

                if ($row_datos_controlasign['j_suma'] !=1) {
                  $j_ayuda = '#';
               }

                echo $j_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 1.2%;">  </td>

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A10["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A10_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A10_L1_redon;?>"><b><?php



if ($row_datos_controlasign['j_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A10_L1;
} /* cierre numerico */
if ($row_datos_controlasign['j_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A10_L1_redon >= $comparativo_formato_1) { $alfabetico_final_A10_L1 = $alfabetico_formato_1;  }
   if ($nota_final_A10_L1_redon >= $comparativo_formato_2) { $alfabetico_final_A10_L1 = $alfabetico_formato_2;  }
   if ($nota_final_A10_L1_redon >= $comparativo_formato_3) { $alfabetico_final_A10_L1 = $alfabetico_formato_3;  }
   if ($nota_final_A10_L1_redon >= $comparativo_formato_4) { $alfabetico_final_A10_L1 = $alfabetico_formato_4;  }
   if ($nota_final_A10_L1_redon >= $comparativo_formato_5) { $alfabetico_final_A10_L1 = $alfabetico_formato_5;  }
   if ($nota_final_A10_L1_redon >= $comparativo_formato_6) { $alfabetico_final_A10_L1 = $alfabetico_formato_6;  }
   if ($nota_final_A10_L1_redon >= $comparativo_formato_7) { $alfabetico_final_A10_L1 = $alfabetico_formato_7;  }
   if ($nota_final_A10_L1_redon >= $comparativo_formato_8) { $alfabetico_final_A10_L1 = $alfabetico_formato_8;  }
   if ($nota_final_A10_L1_redon >= $comparativo_formato_9) { $alfabetico_final_A10_L1 = $alfabetico_formato_9;  }
   if ($nota_final_A10_L1_redon >= $comparativo_formato_10) { $alfabetico_final_A10_L1 = $alfabetico_formato_10;  }
   if ($nota_final_A10_L1_redon >= $comparativo_formato_11) { $alfabetico_final_A10_L1 = $alfabetico_formato_11;  }
   if ($nota_final_A10_L1_redon >= $comparativo_formato_12) { $alfabetico_final_A10_L1 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A10_L1; } /* cierre alfabetico */

if ($row_datos_controlasign['j_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A10_L1_redon >= $comparativo_formato_1) { $literal_final_A10_L1 = $literal_formato_1;  }
  if ($nota_final_A10_L1_redon >= $comparativo_formato_2) { $literal_final_A10_L1 = $literal_formato_2;  }
  if ($nota_final_A10_L1_redon >= $comparativo_formato_3) { $literal_final_A10_L1 = $literal_formato_3;  }
  if ($nota_final_A10_L1_redon >= $comparativo_formato_4) { $literal_final_A10_L1 = $literal_formato_4;  }
  if ($nota_final_A10_L1_redon >= $comparativo_formato_5) { $literal_final_A10_L1 = $literal_formato_5;  }
  if ($nota_final_A10_L1_redon >= $comparativo_formato_6) { $literal_final_A10_L1 = $literal_formato_6;  }
  if ($nota_final_A10_L1_redon >= $comparativo_formato_7) { $literal_final_A10_L1 = $literal_formato_7;  }
  if ($nota_final_A10_L1_redon >= $comparativo_formato_8) { $literal_final_A10_L1 = $literal_formato_8;  }
  if ($nota_final_A10_L1_redon >= $comparativo_formato_9) { $literal_final_A10_L1 = $literal_formato_9;  }
  if ($nota_final_A10_L1_redon >= $comparativo_formato_10) { $literal_final_A10_L1 = $literal_formato_10;  }
  if ($nota_final_A10_L1_redon >= $comparativo_formato_11) { $literal_final_A10_L1 = $literal_formato_11;  }
  if ($nota_final_A10_L1_redon >= $comparativo_formato_12) { $literal_final_A10_L1 = $literal_formato_12;  } 
  echo $literal_final_A10_L1; } /* cierre literal */
        ?> </b></span></td> 

             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A10["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A10_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A10_L2_redon;?>"><b><?php if ($row_datos_controlasign['j_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A10_L2;
} /* cierre numerico */
if ($row_datos_controlasign['j_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A10_L2_redon >= $comparativo_formato_1) { $alfabetico_final_A10_L2 = $alfabetico_formato_1;  }
   if ($nota_final_A10_L2_redon >= $comparativo_formato_2) { $alfabetico_final_A10_L2 = $alfabetico_formato_2;  }
   if ($nota_final_A10_L2_redon >= $comparativo_formato_3) { $alfabetico_final_A10_L2 = $alfabetico_formato_3;  }
   if ($nota_final_A10_L2_redon >= $comparativo_formato_4) { $alfabetico_final_A10_L2 = $alfabetico_formato_4;  }
   if ($nota_final_A10_L2_redon >= $comparativo_formato_5) { $alfabetico_final_A10_L2 = $alfabetico_formato_5;  }
   if ($nota_final_A10_L2_redon >= $comparativo_formato_6) { $alfabetico_final_A10_L2 = $alfabetico_formato_6;  }
   if ($nota_final_A10_L2_redon >= $comparativo_formato_7) { $alfabetico_final_A10_L2 = $alfabetico_formato_7;  }
   if ($nota_final_A10_L2_redon >= $comparativo_formato_8) { $alfabetico_final_A10_L2 = $alfabetico_formato_8;  }
   if ($nota_final_A10_L2_redon >= $comparativo_formato_9) { $alfabetico_final_A10_L2 = $alfabetico_formato_9;  }
   if ($nota_final_A10_L2_redon >= $comparativo_formato_10) { $alfabetico_final_A10_L2 = $alfabetico_formato_10;  }
   if ($nota_final_A10_L2_redon >= $comparativo_formato_11) { $alfabetico_final_A10_L2 = $alfabetico_formato_11;  }
   if ($nota_final_A10_L2_redon >= $comparativo_formato_12) { $alfabetico_final_A10_L2 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A10_L2; } /* cierre alfabetico */

if ($row_datos_controlasign['j_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A10_L2_redon >= $comparativo_formato_1) { $literal_final_A10_L2 = $literal_formato_1;  }
  if ($nota_final_A10_L2_redon >= $comparativo_formato_2) { $literal_final_A10_L2 = $literal_formato_2;  }
  if ($nota_final_A10_L2_redon >= $comparativo_formato_3) { $literal_final_A10_L2 = $literal_formato_3;  }
  if ($nota_final_A10_L2_redon >= $comparativo_formato_4) { $literal_final_A10_L2 = $literal_formato_4;  }
  if ($nota_final_A10_L2_redon >= $comparativo_formato_5) { $literal_final_A10_L2 = $literal_formato_5;  }
  if ($nota_final_A10_L2_redon >= $comparativo_formato_6) { $literal_final_A10_L2 = $literal_formato_6;  }
  if ($nota_final_A10_L2_redon >= $comparativo_formato_7) { $literal_final_A10_L2 = $literal_formato_7;  }
  if ($nota_final_A10_L2_redon >= $comparativo_formato_8) { $literal_final_A10_L2 = $literal_formato_8;  }
  if ($nota_final_A10_L2_redon >= $comparativo_formato_9) { $literal_final_A10_L2 = $literal_formato_9;  }
  if ($nota_final_A10_L2_redon >= $comparativo_formato_10) { $literal_final_A10_L2 = $literal_formato_10;  }
  if ($nota_final_A10_L2_redon >= $comparativo_formato_11) { $literal_final_A10_L2 = $literal_formato_11;  }
  if ($nota_final_A10_L2_redon >= $comparativo_formato_12) { $literal_final_A10_L2 = $literal_formato_12;  } 
  echo $literal_final_A10_L2; } /* cierre literal */  ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A10["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A10_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A10_L3_redon;?>"><b><?php if ($row_datos_controlasign['j_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A10_L3;
} /* cierre numerico */
if ($row_datos_controlasign['j_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A10_L3_redon >= $comparativo_formato_1) { $alfabetico_final_A10_L3 = $alfabetico_formato_1;  }
   if ($nota_final_A10_L3_redon >= $comparativo_formato_2) { $alfabetico_final_A10_L3 = $alfabetico_formato_2;  }
   if ($nota_final_A10_L3_redon >= $comparativo_formato_3) { $alfabetico_final_A10_L3 = $alfabetico_formato_3;  }
   if ($nota_final_A10_L3_redon >= $comparativo_formato_4) { $alfabetico_final_A10_L3 = $alfabetico_formato_4;  }
   if ($nota_final_A10_L3_redon >= $comparativo_formato_5) { $alfabetico_final_A10_L3 = $alfabetico_formato_5;  }
   if ($nota_final_A10_L3_redon >= $comparativo_formato_6) { $alfabetico_final_A10_L3 = $alfabetico_formato_6;  }
   if ($nota_final_A10_L3_redon >= $comparativo_formato_7) { $alfabetico_final_A10_L3 = $alfabetico_formato_7;  }
   if ($nota_final_A10_L3_redon >= $comparativo_formato_8) { $alfabetico_final_A10_L3 = $alfabetico_formato_8;  }
   if ($nota_final_A10_L3_redon >= $comparativo_formato_9) { $alfabetico_final_A10_L3 = $alfabetico_formato_9;  }
   if ($nota_final_A10_L3_redon >= $comparativo_formato_10) { $alfabetico_final_A10_L3 = $alfabetico_formato_10;  }
   if ($nota_final_A10_L3_redon >= $comparativo_formato_11) { $alfabetico_final_A10_L3 = $alfabetico_formato_11;  }
   if ($nota_final_A10_L3_redon >= $comparativo_formato_12) { $alfabetico_final_A10_L3 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A10_L3; } /* cierre alfabetico */

if ($row_datos_controlasign['j_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A10_L3_redon >= $comparativo_formato_1) { $literal_final_A10_L3 = $literal_formato_1;  }
  if ($nota_final_A10_L3_redon >= $comparativo_formato_2) { $literal_final_A10_L3 = $literal_formato_2;  }
  if ($nota_final_A10_L3_redon >= $comparativo_formato_3) { $literal_final_A10_L3 = $literal_formato_3;  }
  if ($nota_final_A10_L3_redon >= $comparativo_formato_4) { $literal_final_A10_L3 = $literal_formato_4;  }
  if ($nota_final_A10_L3_redon >= $comparativo_formato_5) { $literal_final_A10_L3 = $literal_formato_5;  }
  if ($nota_final_A10_L3_redon >= $comparativo_formato_6) { $literal_final_A10_L3 = $literal_formato_6;  }
  if ($nota_final_A10_L3_redon >= $comparativo_formato_7) { $literal_final_A10_L3 = $literal_formato_7;  }
  if ($nota_final_A10_L3_redon >= $comparativo_formato_8) { $literal_final_A10_L3 = $literal_formato_8;  }
  if ($nota_final_A10_L3_redon >= $comparativo_formato_9) { $literal_final_A10_L3 = $literal_formato_9;  }
  if ($nota_final_A10_L3_redon >= $comparativo_formato_10) { $literal_final_A10_L3 = $literal_formato_10;  }
  if ($nota_final_A10_L3_redon >= $comparativo_formato_11) { $literal_final_A10_L3 = $literal_formato_11;  }
  if ($nota_final_A10_L3_redon >= $comparativo_formato_12) { $literal_final_A10_L3 = $literal_formato_12;  } 
  echo $literal_final_A10_L3; } /* cierre literal */    ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">



<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
<?php

$Parcial_A10_L1 = 0.000000001;
$Parcial_A10_L2 = 0.000000001;
$Parcial_A10_L3 = 0.000000001;



$Nota_Pro_Final_A10_L1_entero=$nota_final_A10_L1_redon1;          
$Nota_Pro_Final_A10_L2_entero=$nota_final_A10_L2_redon1;
$Nota_Pro_Final_A10_L3_entero=$nota_final_A10_L3_redon1;

if ($Nota_Pro_Final_A10_L1_entero >= 0.1) {
  $Parcial_A10_L1 = 1;
}

if ($Nota_Pro_Final_A10_L2_entero >= 0.1) {
  $Parcial_A10_L2 = 1;
}

if ($Nota_Pro_Final_A10_L3_entero >= 0.1) {
  $Parcial_A10_L3 = 1;
}


$Num_divisor_A10_L123 = $Parcial_A10_L1+$Parcial_A10_L2+$Parcial_A10_L3;       /* ojoooo */


 $Nota_Pro_all_A10_L123 =($nota_final_A10_L1_redon+$nota_final_A10_L2_redon+$nota_final_A10_L3_redon)/$Num_divisor_A10_L123;

$Nota_Pro_all_A10_L123_decimal=number_format($Nota_Pro_all_A10_L123, 1, ',', '');  echo $Nota_Pro_all_A10_L123_decimal;?></td>




  <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 14px;">
    <b><?php echo $row_datos_control_notas_A10["nt_AuF"];?></b></td>



<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A10_all_L123 = $Nota_Pro_all_A10_L123+$row_datos_control_notas_A10["nt_AuF"];




$Def_aux_total_A10_all_L123_redondeado1 = number_format($Def_aux_total_A10_all_L123, 1, '.', '');

$Definitiva_completa_A10_L123=number_format($Def_aux_total_A10_all_L123_redondeado1);  if ($row_datos_controlasign['j_convertir'] == 1 ) {  /* numerico */
       echo $Definitiva_completa_A10_L123;
} /* cierre numerico */
if ($row_datos_controlasign['j_convertir'] == 2 ) {  /* alfabetico */
   if ($Definitiva_completa_A10_L123 >= $comparativo_formato_1) { $alfabetico_completa_A10_L123 = $alfabetico_formato_1;  }
   if ($Definitiva_completa_A10_L123 >= $comparativo_formato_2) { $alfabetico_completa_A10_L123 = $alfabetico_formato_2;  }
   if ($Definitiva_completa_A10_L123 >= $comparativo_formato_3) { $alfabetico_completa_A10_L123 = $alfabetico_formato_3;  }
   if ($Definitiva_completa_A10_L123 >= $comparativo_formato_4) { $alfabetico_completa_A10_L123 = $alfabetico_formato_4;  }
   if ($Definitiva_completa_A10_L123 >= $comparativo_formato_5) { $alfabetico_completa_A10_L123 = $alfabetico_formato_5;  }
   if ($Definitiva_completa_A10_L123 >= $comparativo_formato_6) { $alfabetico_completa_A10_L123 = $alfabetico_formato_6;  }
   if ($Definitiva_completa_A10_L123 >= $comparativo_formato_7) { $alfabetico_completa_A10_L123 = $alfabetico_formato_7;  }
   if ($Definitiva_completa_A10_L123 >= $comparativo_formato_8) { $alfabetico_completa_A10_L123 = $alfabetico_formato_8;  }
   if ($Definitiva_completa_A10_L123 >= $comparativo_formato_9) { $alfabetico_completa_A10_L123 = $alfabetico_formato_9;  }
   if ($Definitiva_completa_A10_L123 >= $comparativo_formato_10) { $alfabetico_completa_A10_L123 = $alfabetico_formato_10;  }
   if ($Definitiva_completa_A10_L123 >= $comparativo_formato_11) { $alfabetico_completa_A10_L123 = $alfabetico_formato_11;  }
   if ($Definitiva_completa_A10_L123 >= $comparativo_formato_12) { $alfabetico_completa_A10_L123 = $alfabetico_formato_12;  }
   echo $alfabetico_completa_A10_L123; } /* cierre alfabetico */

if ($row_datos_controlasign['j_convertir'] == 3 ) {  /* literal */
  if ($Definitiva_completa_A10_L123 >= $comparativo_formato_1) { $literal_completa_A10_L123 = $literal_formato_1;  }
  if ($Definitiva_completa_A10_L123 >= $comparativo_formato_2) { $literal_completa_A10_L123 = $literal_formato_2;  }
  if ($Definitiva_completa_A10_L123 >= $comparativo_formato_3) { $literal_completa_A10_L123 = $literal_formato_3;  }
  if ($Definitiva_completa_A10_L123 >= $comparativo_formato_4) { $literal_completa_A10_L123 = $literal_formato_4;  }
  if ($Definitiva_completa_A10_L123 >= $comparativo_formato_5) { $literal_completa_A10_L123 = $literal_formato_5;  }
  if ($Definitiva_completa_A10_L123 >= $comparativo_formato_6) { $literal_completa_A10_L123 = $literal_formato_6;  }
  if ($Definitiva_completa_A10_L123 >= $comparativo_formato_7) { $literal_completa_A10_L123 = $literal_formato_7;  }
  if ($Definitiva_completa_A10_L123 >= $comparativo_formato_8) { $literal_completa_A10_L123 = $literal_formato_8;  }
  if ($Definitiva_completa_A10_L123 >= $comparativo_formato_9) { $literal_completa_A10_L123 = $literal_formato_9;  }
  if ($Definitiva_completa_A10_L123 >= $comparativo_formato_10) { $literal_completa_A10_L123 = $literal_formato_10;  }
  if ($Definitiva_completa_A10_L123 >= $comparativo_formato_11) { $literal_completa_A10_L123 = $literal_formato_11;  }
  if ($Definitiva_completa_A10_L123 >= $comparativo_formato_12) { $literal_completa_A10_L123 = $literal_formato_12;  } 
  echo $literal_completa_A10_L123; } /* cierre literal */ ?></b></td>


<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A10['rev_uno'];?></td>

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A10['rev_dos'];?></td>



<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5%; height: 23px;"><?php echo $row_datos_controlasign['j_abrev'];?>
  
<span style="color:red; font-size: 16px;"><b> <?php

               $j_ayuda = '';

                if ($row_datos_controlasign['j_suma'] !=1) {
                  $j_ayuda = '#';
               }

                echo $j_ayuda;?></b></span>

</td>




            </tr>



            <tr>
                       


              <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['k_abrev'];?>
                
<span style="color:red; font-size: 16px;"><b> <?php

               $k_ayuda = '';

                if ($row_datos_controlasign['k_suma'] !=1) {
                  $k_ayuda = '#';
               }

                echo $k_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 1.2%;">  </td>

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A11["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A11_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A11_L1_redon;?>"><b><?php



if ($row_datos_controlasign['k_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A11_L1;
} /* cierre numerico */
if ($row_datos_controlasign['k_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A11_L1_redon >= $comparativo_formato_1) { $alfabetico_final_A11_L1 = $alfabetico_formato_1;  }
   if ($nota_final_A11_L1_redon >= $comparativo_formato_2) { $alfabetico_final_A11_L1 = $alfabetico_formato_2;  }
   if ($nota_final_A11_L1_redon >= $comparativo_formato_3) { $alfabetico_final_A11_L1 = $alfabetico_formato_3;  }
   if ($nota_final_A11_L1_redon >= $comparativo_formato_4) { $alfabetico_final_A11_L1 = $alfabetico_formato_4;  }
   if ($nota_final_A11_L1_redon >= $comparativo_formato_5) { $alfabetico_final_A11_L1 = $alfabetico_formato_5;  }
   if ($nota_final_A11_L1_redon >= $comparativo_formato_6) { $alfabetico_final_A11_L1 = $alfabetico_formato_6;  }
   if ($nota_final_A11_L1_redon >= $comparativo_formato_7) { $alfabetico_final_A11_L1 = $alfabetico_formato_7;  }
   if ($nota_final_A11_L1_redon >= $comparativo_formato_8) { $alfabetico_final_A11_L1 = $alfabetico_formato_8;  }
   if ($nota_final_A11_L1_redon >= $comparativo_formato_9) { $alfabetico_final_A11_L1 = $alfabetico_formato_9;  }
   if ($nota_final_A11_L1_redon >= $comparativo_formato_10) { $alfabetico_final_A11_L1 = $alfabetico_formato_10;  }
   if ($nota_final_A11_L1_redon >= $comparativo_formato_11) { $alfabetico_final_A11_L1 = $alfabetico_formato_11;  }
   if ($nota_final_A11_L1_redon >= $comparativo_formato_12) { $alfabetico_final_A11_L1 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A11_L1; } /* cierre alfabetico */

if ($row_datos_controlasign['k_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A11_L1_redon >= $comparativo_formato_1) { $literal_final_A11_L1 = $literal_formato_1;  }
  if ($nota_final_A11_L1_redon >= $comparativo_formato_2) { $literal_final_A11_L1 = $literal_formato_2;  }
  if ($nota_final_A11_L1_redon >= $comparativo_formato_3) { $literal_final_A11_L1 = $literal_formato_3;  }
  if ($nota_final_A11_L1_redon >= $comparativo_formato_4) { $literal_final_A11_L1 = $literal_formato_4;  }
  if ($nota_final_A11_L1_redon >= $comparativo_formato_5) { $literal_final_A11_L1 = $literal_formato_5;  }
  if ($nota_final_A11_L1_redon >= $comparativo_formato_6) { $literal_final_A11_L1 = $literal_formato_6;  }
  if ($nota_final_A11_L1_redon >= $comparativo_formato_7) { $literal_final_A11_L1 = $literal_formato_7;  }
  if ($nota_final_A11_L1_redon >= $comparativo_formato_8) { $literal_final_A11_L1 = $literal_formato_8;  }
  if ($nota_final_A11_L1_redon >= $comparativo_formato_9) { $literal_final_A11_L1 = $literal_formato_9;  }
  if ($nota_final_A11_L1_redon >= $comparativo_formato_10) { $literal_final_A11_L1 = $literal_formato_10;  }
  if ($nota_final_A11_L1_redon >= $comparativo_formato_11) { $literal_final_A11_L1 = $literal_formato_11;  }
  if ($nota_final_A11_L1_redon >= $comparativo_formato_12) { $literal_final_A11_L1 = $literal_formato_12;  } 
  echo $literal_final_A11_L1; } /* cierre literal */
        ?> </b></span></td> 

             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A11["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A11_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A11_L2_redon;?>"><b><?php if ($row_datos_controlasign['k_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A11_L2;
} /* cierre numerico */
if ($row_datos_controlasign['k_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A11_L2_redon >= $comparativo_formato_1) { $alfabetico_final_A11_L2 = $alfabetico_formato_1;  }
   if ($nota_final_A11_L2_redon >= $comparativo_formato_2) { $alfabetico_final_A11_L2 = $alfabetico_formato_2;  }
   if ($nota_final_A11_L2_redon >= $comparativo_formato_3) { $alfabetico_final_A11_L2 = $alfabetico_formato_3;  }
   if ($nota_final_A11_L2_redon >= $comparativo_formato_4) { $alfabetico_final_A11_L2 = $alfabetico_formato_4;  }
   if ($nota_final_A11_L2_redon >= $comparativo_formato_5) { $alfabetico_final_A11_L2 = $alfabetico_formato_5;  }
   if ($nota_final_A11_L2_redon >= $comparativo_formato_6) { $alfabetico_final_A11_L2 = $alfabetico_formato_6;  }
   if ($nota_final_A11_L2_redon >= $comparativo_formato_7) { $alfabetico_final_A11_L2 = $alfabetico_formato_7;  }
   if ($nota_final_A11_L2_redon >= $comparativo_formato_8) { $alfabetico_final_A11_L2 = $alfabetico_formato_8;  }
   if ($nota_final_A11_L2_redon >= $comparativo_formato_9) { $alfabetico_final_A11_L2 = $alfabetico_formato_9;  }
   if ($nota_final_A11_L2_redon >= $comparativo_formato_10) { $alfabetico_final_A11_L2 = $alfabetico_formato_10;  }
   if ($nota_final_A11_L2_redon >= $comparativo_formato_11) { $alfabetico_final_A11_L2 = $alfabetico_formato_11;  }
   if ($nota_final_A11_L2_redon >= $comparativo_formato_12) { $alfabetico_final_A11_L2 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A11_L2; } /* cierre alfabetico */

if ($row_datos_controlasign['k_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A11_L2_redon >= $comparativo_formato_1) { $literal_final_A11_L2 = $literal_formato_1;  }
  if ($nota_final_A11_L2_redon >= $comparativo_formato_2) { $literal_final_A11_L2 = $literal_formato_2;  }
  if ($nota_final_A11_L2_redon >= $comparativo_formato_3) { $literal_final_A11_L2 = $literal_formato_3;  }
  if ($nota_final_A11_L2_redon >= $comparativo_formato_4) { $literal_final_A11_L2 = $literal_formato_4;  }
  if ($nota_final_A11_L2_redon >= $comparativo_formato_5) { $literal_final_A11_L2 = $literal_formato_5;  }
  if ($nota_final_A11_L2_redon >= $comparativo_formato_6) { $literal_final_A11_L2 = $literal_formato_6;  }
  if ($nota_final_A11_L2_redon >= $comparativo_formato_7) { $literal_final_A11_L2 = $literal_formato_7;  }
  if ($nota_final_A11_L2_redon >= $comparativo_formato_8) { $literal_final_A11_L2 = $literal_formato_8;  }
  if ($nota_final_A11_L2_redon >= $comparativo_formato_9) { $literal_final_A11_L2 = $literal_formato_9;  }
  if ($nota_final_A11_L2_redon >= $comparativo_formato_10) { $literal_final_A11_L2 = $literal_formato_10;  }
  if ($nota_final_A11_L2_redon >= $comparativo_formato_11) { $literal_final_A11_L2 = $literal_formato_11;  }
  if ($nota_final_A11_L2_redon >= $comparativo_formato_12) { $literal_final_A11_L2 = $literal_formato_12;  } 
  echo $literal_final_A11_L2; } /* cierre literal */  ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A11["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A11_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A11_L3_redon;?>"><b><?php if ($row_datos_controlasign['k_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A11_L3;
} /* cierre numerico */
if ($row_datos_controlasign['k_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A11_L3_redon >= $comparativo_formato_1) { $alfabetico_final_A11_L3 = $alfabetico_formato_1;  }
   if ($nota_final_A11_L3_redon >= $comparativo_formato_2) { $alfabetico_final_A11_L3 = $alfabetico_formato_2;  }
   if ($nota_final_A11_L3_redon >= $comparativo_formato_3) { $alfabetico_final_A11_L3 = $alfabetico_formato_3;  }
   if ($nota_final_A11_L3_redon >= $comparativo_formato_4) { $alfabetico_final_A11_L3 = $alfabetico_formato_4;  }
   if ($nota_final_A11_L3_redon >= $comparativo_formato_5) { $alfabetico_final_A11_L3 = $alfabetico_formato_5;  }
   if ($nota_final_A11_L3_redon >= $comparativo_formato_6) { $alfabetico_final_A11_L3 = $alfabetico_formato_6;  }
   if ($nota_final_A11_L3_redon >= $comparativo_formato_7) { $alfabetico_final_A11_L3 = $alfabetico_formato_7;  }
   if ($nota_final_A11_L3_redon >= $comparativo_formato_8) { $alfabetico_final_A11_L3 = $alfabetico_formato_8;  }
   if ($nota_final_A11_L3_redon >= $comparativo_formato_9) { $alfabetico_final_A11_L3 = $alfabetico_formato_9;  }
   if ($nota_final_A11_L3_redon >= $comparativo_formato_10) { $alfabetico_final_A11_L3 = $alfabetico_formato_10;  }
   if ($nota_final_A11_L3_redon >= $comparativo_formato_11) { $alfabetico_final_A11_L3 = $alfabetico_formato_11;  }
   if ($nota_final_A11_L3_redon >= $comparativo_formato_12) { $alfabetico_final_A11_L3 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A11_L3; } /* cierre alfabetico */

if ($row_datos_controlasign['k_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A11_L3_redon >= $comparativo_formato_1) { $literal_final_A11_L3 = $literal_formato_1;  }
  if ($nota_final_A11_L3_redon >= $comparativo_formato_2) { $literal_final_A11_L3 = $literal_formato_2;  }
  if ($nota_final_A11_L3_redon >= $comparativo_formato_3) { $literal_final_A11_L3 = $literal_formato_3;  }
  if ($nota_final_A11_L3_redon >= $comparativo_formato_4) { $literal_final_A11_L3 = $literal_formato_4;  }
  if ($nota_final_A11_L3_redon >= $comparativo_formato_5) { $literal_final_A11_L3 = $literal_formato_5;  }
  if ($nota_final_A11_L3_redon >= $comparativo_formato_6) { $literal_final_A11_L3 = $literal_formato_6;  }
  if ($nota_final_A11_L3_redon >= $comparativo_formato_7) { $literal_final_A11_L3 = $literal_formato_7;  }
  if ($nota_final_A11_L3_redon >= $comparativo_formato_8) { $literal_final_A11_L3 = $literal_formato_8;  }
  if ($nota_final_A11_L3_redon >= $comparativo_formato_9) { $literal_final_A11_L3 = $literal_formato_9;  }
  if ($nota_final_A11_L3_redon >= $comparativo_formato_10) { $literal_final_A11_L3 = $literal_formato_10;  }
  if ($nota_final_A11_L3_redon >= $comparativo_formato_11) { $literal_final_A11_L3 = $literal_formato_11;  }
  if ($nota_final_A11_L3_redon >= $comparativo_formato_12) { $literal_final_A11_L3 = $literal_formato_12;  } 
  echo $literal_final_A11_L3; } /* cierre literal */    ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">



<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
<?php

$Parcial_A11_L1 = 0.000000001;
$Parcial_A11_L2 = 0.000000001;
$Parcial_A11_L3 = 0.000000001;



$Nota_Pro_Final_A11_L1_entero=$nota_final_A11_L1_redon1;          
$Nota_Pro_Final_A11_L2_entero=$nota_final_A11_L2_redon1;
$Nota_Pro_Final_A11_L3_entero=$nota_final_A11_L3_redon1;

if ($Nota_Pro_Final_A11_L1_entero >= 0.1) {
  $Parcial_A11_L1 = 1;
}

if ($Nota_Pro_Final_A11_L2_entero >= 0.1) {
  $Parcial_A11_L2 = 1;
}

if ($Nota_Pro_Final_A11_L3_entero >= 0.1) {
  $Parcial_A11_L3 = 1;
}


$Num_divisor_A11_L123 = $Parcial_A11_L1+$Parcial_A11_L2+$Parcial_A11_L3;       /* ojoooo */


 $Nota_Pro_all_A11_L123 =($nota_final_A11_L1_redon+$nota_final_A11_L2_redon+$nota_final_A11_L3_redon)/$Num_divisor_A11_L123;

$Nota_Pro_all_A11_L123_decimal=number_format($Nota_Pro_all_A11_L123, 1, ',', '');  echo $Nota_Pro_all_A11_L123_decimal;?></td>




  <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 14px;">
    <b><?php echo $row_datos_control_notas_A11["nt_AuF"];?></b></td>



<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A11_all_L123 = $Nota_Pro_all_A11_L123+$row_datos_control_notas_A11["nt_AuF"];




$Def_aux_total_A11_all_L123_redondeado1 = number_format($Def_aux_total_A11_all_L123, 1, '.', '');

$Definitiva_completa_A11_L123=number_format($Def_aux_total_A11_all_L123_redondeado1);  if ($row_datos_controlasign['k_convertir'] == 1 ) {  /* numerico */
       echo $Definitiva_completa_A11_L123;
} /* cierre numerico */
if ($row_datos_controlasign['k_convertir'] == 2 ) {  /* alfabetico */
   if ($Definitiva_completa_A11_L123 >= $comparativo_formato_1) { $alfabetico_completa_A11_L123 = $alfabetico_formato_1;  }
   if ($Definitiva_completa_A11_L123 >= $comparativo_formato_2) { $alfabetico_completa_A11_L123 = $alfabetico_formato_2;  }
   if ($Definitiva_completa_A11_L123 >= $comparativo_formato_3) { $alfabetico_completa_A11_L123 = $alfabetico_formato_3;  }
   if ($Definitiva_completa_A11_L123 >= $comparativo_formato_4) { $alfabetico_completa_A11_L123 = $alfabetico_formato_4;  }
   if ($Definitiva_completa_A11_L123 >= $comparativo_formato_5) { $alfabetico_completa_A11_L123 = $alfabetico_formato_5;  }
   if ($Definitiva_completa_A11_L123 >= $comparativo_formato_6) { $alfabetico_completa_A11_L123 = $alfabetico_formato_6;  }
   if ($Definitiva_completa_A11_L123 >= $comparativo_formato_7) { $alfabetico_completa_A11_L123 = $alfabetico_formato_7;  }
   if ($Definitiva_completa_A11_L123 >= $comparativo_formato_8) { $alfabetico_completa_A11_L123 = $alfabetico_formato_8;  }
   if ($Definitiva_completa_A11_L123 >= $comparativo_formato_9) { $alfabetico_completa_A11_L123 = $alfabetico_formato_9;  }
   if ($Definitiva_completa_A11_L123 >= $comparativo_formato_10) { $alfabetico_completa_A11_L123 = $alfabetico_formato_10;  }
   if ($Definitiva_completa_A11_L123 >= $comparativo_formato_11) { $alfabetico_completa_A11_L123 = $alfabetico_formato_11;  }
   if ($Definitiva_completa_A11_L123 >= $comparativo_formato_12) { $alfabetico_completa_A11_L123 = $alfabetico_formato_12;  }
   echo $alfabetico_completa_A11_L123; } /* cierre alfabetico */

if ($row_datos_controlasign['k_convertir'] == 3 ) {  /* literal */
  if ($Definitiva_completa_A11_L123 >= $comparativo_formato_1) { $literal_completa_A11_L123 = $literal_formato_1;  }
  if ($Definitiva_completa_A11_L123 >= $comparativo_formato_2) { $literal_completa_A11_L123 = $literal_formato_2;  }
  if ($Definitiva_completa_A11_L123 >= $comparativo_formato_3) { $literal_completa_A11_L123 = $literal_formato_3;  }
  if ($Definitiva_completa_A11_L123 >= $comparativo_formato_4) { $literal_completa_A11_L123 = $literal_formato_4;  }
  if ($Definitiva_completa_A11_L123 >= $comparativo_formato_5) { $literal_completa_A11_L123 = $literal_formato_5;  }
  if ($Definitiva_completa_A11_L123 >= $comparativo_formato_6) { $literal_completa_A11_L123 = $literal_formato_6;  }
  if ($Definitiva_completa_A11_L123 >= $comparativo_formato_7) { $literal_completa_A11_L123 = $literal_formato_7;  }
  if ($Definitiva_completa_A11_L123 >= $comparativo_formato_8) { $literal_completa_A11_L123 = $literal_formato_8;  }
  if ($Definitiva_completa_A11_L123 >= $comparativo_formato_9) { $literal_completa_A11_L123 = $literal_formato_9;  }
  if ($Definitiva_completa_A11_L123 >= $comparativo_formato_10) { $literal_completa_A11_L123 = $literal_formato_10;  }
  if ($Definitiva_completa_A11_L123 >= $comparativo_formato_11) { $literal_completa_A11_L123 = $literal_formato_11;  }
  if ($Definitiva_completa_A11_L123 >= $comparativo_formato_12) { $literal_completa_A11_L123 = $literal_formato_12;  } 
  echo $literal_completa_A11_L123; } /* cierre literal */ ?></b></td>


<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A11['rev_uno'];?></td>

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A11['rev_dos'];?></td>



<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5%; height: 23px;"><?php echo $row_datos_controlasign['k_abrev'];?>
  
<span style="color:red; font-size: 16px;"><b> <?php

               $k_ayuda = '';

                if ($row_datos_controlasign['k_suma'] !=1) {
                  $k_ayuda = '#';
               }

                echo $k_ayuda;?></b></span>

</td>




            </tr>




            <tr>
                       


              <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['l_abrev'];?>
                
<span style="color:red; font-size: 16px;"><b> <?php

               $l_ayuda = '';

                if ($row_datos_controlasign['l_suma'] !=1) {
                  $l_ayuda = '#';
               }

                echo $l_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 1.2%;">  </td>

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A12["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A12_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A12_L1_redon;?>"><b><?php



if ($row_datos_controlasign['l_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A12_L1;
} /* cierre numerico */
if ($row_datos_controlasign['l_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A12_L1_redon >= $comparativo_formato_1) { $alfabetico_final_A12_L1 = $alfabetico_formato_1;  }
   if ($nota_final_A12_L1_redon >= $comparativo_formato_2) { $alfabetico_final_A12_L1 = $alfabetico_formato_2;  }
   if ($nota_final_A12_L1_redon >= $comparativo_formato_3) { $alfabetico_final_A12_L1 = $alfabetico_formato_3;  }
   if ($nota_final_A12_L1_redon >= $comparativo_formato_4) { $alfabetico_final_A12_L1 = $alfabetico_formato_4;  }
   if ($nota_final_A12_L1_redon >= $comparativo_formato_5) { $alfabetico_final_A12_L1 = $alfabetico_formato_5;  }
   if ($nota_final_A12_L1_redon >= $comparativo_formato_6) { $alfabetico_final_A12_L1 = $alfabetico_formato_6;  }
   if ($nota_final_A12_L1_redon >= $comparativo_formato_7) { $alfabetico_final_A12_L1 = $alfabetico_formato_7;  }
   if ($nota_final_A12_L1_redon >= $comparativo_formato_8) { $alfabetico_final_A12_L1 = $alfabetico_formato_8;  }
   if ($nota_final_A12_L1_redon >= $comparativo_formato_9) { $alfabetico_final_A12_L1 = $alfabetico_formato_9;  }
   if ($nota_final_A12_L1_redon >= $comparativo_formato_10) { $alfabetico_final_A12_L1 = $alfabetico_formato_10;  }
   if ($nota_final_A12_L1_redon >= $comparativo_formato_11) { $alfabetico_final_A12_L1 = $alfabetico_formato_11;  }
   if ($nota_final_A12_L1_redon >= $comparativo_formato_12) { $alfabetico_final_A12_L1 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A12_L1; } /* cierre alfabetico */

if ($row_datos_controlasign['l_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A12_L1_redon >= $comparativo_formato_1) { $literal_final_A12_L1 = $literal_formato_1;  }
  if ($nota_final_A12_L1_redon >= $comparativo_formato_2) { $literal_final_A12_L1 = $literal_formato_2;  }
  if ($nota_final_A12_L1_redon >= $comparativo_formato_3) { $literal_final_A12_L1 = $literal_formato_3;  }
  if ($nota_final_A12_L1_redon >= $comparativo_formato_4) { $literal_final_A12_L1 = $literal_formato_4;  }
  if ($nota_final_A12_L1_redon >= $comparativo_formato_5) { $literal_final_A12_L1 = $literal_formato_5;  }
  if ($nota_final_A12_L1_redon >= $comparativo_formato_6) { $literal_final_A12_L1 = $literal_formato_6;  }
  if ($nota_final_A12_L1_redon >= $comparativo_formato_7) { $literal_final_A12_L1 = $literal_formato_7;  }
  if ($nota_final_A12_L1_redon >= $comparativo_formato_8) { $literal_final_A12_L1 = $literal_formato_8;  }
  if ($nota_final_A12_L1_redon >= $comparativo_formato_9) { $literal_final_A12_L1 = $literal_formato_9;  }
  if ($nota_final_A12_L1_redon >= $comparativo_formato_10) { $literal_final_A12_L1 = $literal_formato_10;  }
  if ($nota_final_A12_L1_redon >= $comparativo_formato_11) { $literal_final_A12_L1 = $literal_formato_11;  }
  if ($nota_final_A12_L1_redon >= $comparativo_formato_12) { $literal_final_A12_L1 = $literal_formato_12;  } 
  echo $literal_final_A12_L1; } /* cierre literal */
        ?> </b></span></td> 

             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A12["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A12_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A12_L2_redon;?>"><b><?php if ($row_datos_controlasign['l_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A12_L2;
} /* cierre numerico */
if ($row_datos_controlasign['l_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A12_L2_redon >= $comparativo_formato_1) { $alfabetico_final_A12_L2 = $alfabetico_formato_1;  }
   if ($nota_final_A12_L2_redon >= $comparativo_formato_2) { $alfabetico_final_A12_L2 = $alfabetico_formato_2;  }
   if ($nota_final_A12_L2_redon >= $comparativo_formato_3) { $alfabetico_final_A12_L2 = $alfabetico_formato_3;  }
   if ($nota_final_A12_L2_redon >= $comparativo_formato_4) { $alfabetico_final_A12_L2 = $alfabetico_formato_4;  }
   if ($nota_final_A12_L2_redon >= $comparativo_formato_5) { $alfabetico_final_A12_L2 = $alfabetico_formato_5;  }
   if ($nota_final_A12_L2_redon >= $comparativo_formato_6) { $alfabetico_final_A12_L2 = $alfabetico_formato_6;  }
   if ($nota_final_A12_L2_redon >= $comparativo_formato_7) { $alfabetico_final_A12_L2 = $alfabetico_formato_7;  }
   if ($nota_final_A12_L2_redon >= $comparativo_formato_8) { $alfabetico_final_A12_L2 = $alfabetico_formato_8;  }
   if ($nota_final_A12_L2_redon >= $comparativo_formato_9) { $alfabetico_final_A12_L2 = $alfabetico_formato_9;  }
   if ($nota_final_A12_L2_redon >= $comparativo_formato_10) { $alfabetico_final_A12_L2 = $alfabetico_formato_10;  }
   if ($nota_final_A12_L2_redon >= $comparativo_formato_11) { $alfabetico_final_A12_L2 = $alfabetico_formato_11;  }
   if ($nota_final_A12_L2_redon >= $comparativo_formato_12) { $alfabetico_final_A12_L2 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A12_L2; } /* cierre alfabetico */

if ($row_datos_controlasign['l_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A12_L2_redon >= $comparativo_formato_1) { $literal_final_A12_L2 = $literal_formato_1;  }
  if ($nota_final_A12_L2_redon >= $comparativo_formato_2) { $literal_final_A12_L2 = $literal_formato_2;  }
  if ($nota_final_A12_L2_redon >= $comparativo_formato_3) { $literal_final_A12_L2 = $literal_formato_3;  }
  if ($nota_final_A12_L2_redon >= $comparativo_formato_4) { $literal_final_A12_L2 = $literal_formato_4;  }
  if ($nota_final_A12_L2_redon >= $comparativo_formato_5) { $literal_final_A12_L2 = $literal_formato_5;  }
  if ($nota_final_A12_L2_redon >= $comparativo_formato_6) { $literal_final_A12_L2 = $literal_formato_6;  }
  if ($nota_final_A12_L2_redon >= $comparativo_formato_7) { $literal_final_A12_L2 = $literal_formato_7;  }
  if ($nota_final_A12_L2_redon >= $comparativo_formato_8) { $literal_final_A12_L2 = $literal_formato_8;  }
  if ($nota_final_A12_L2_redon >= $comparativo_formato_9) { $literal_final_A12_L2 = $literal_formato_9;  }
  if ($nota_final_A12_L2_redon >= $comparativo_formato_10) { $literal_final_A12_L2 = $literal_formato_10;  }
  if ($nota_final_A12_L2_redon >= $comparativo_formato_11) { $literal_final_A12_L2 = $literal_formato_11;  }
  if ($nota_final_A12_L2_redon >= $comparativo_formato_12) { $literal_final_A12_L2 = $literal_formato_12;  } 
  echo $literal_final_A12_L2; } /* cierre literal */  ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A12["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A12_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A12_L3_redon;?>"><b><?php if ($row_datos_controlasign['l_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A12_L3;
} /* cierre numerico */
if ($row_datos_controlasign['l_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A12_L3_redon >= $comparativo_formato_1) { $alfabetico_final_A12_L3 = $alfabetico_formato_1;  }
   if ($nota_final_A12_L3_redon >= $comparativo_formato_2) { $alfabetico_final_A12_L3 = $alfabetico_formato_2;  }
   if ($nota_final_A12_L3_redon >= $comparativo_formato_3) { $alfabetico_final_A12_L3 = $alfabetico_formato_3;  }
   if ($nota_final_A12_L3_redon >= $comparativo_formato_4) { $alfabetico_final_A12_L3 = $alfabetico_formato_4;  }
   if ($nota_final_A12_L3_redon >= $comparativo_formato_5) { $alfabetico_final_A12_L3 = $alfabetico_formato_5;  }
   if ($nota_final_A12_L3_redon >= $comparativo_formato_6) { $alfabetico_final_A12_L3 = $alfabetico_formato_6;  }
   if ($nota_final_A12_L3_redon >= $comparativo_formato_7) { $alfabetico_final_A12_L3 = $alfabetico_formato_7;  }
   if ($nota_final_A12_L3_redon >= $comparativo_formato_8) { $alfabetico_final_A12_L3 = $alfabetico_formato_8;  }
   if ($nota_final_A12_L3_redon >= $comparativo_formato_9) { $alfabetico_final_A12_L3 = $alfabetico_formato_9;  }
   if ($nota_final_A12_L3_redon >= $comparativo_formato_10) { $alfabetico_final_A12_L3 = $alfabetico_formato_10;  }
   if ($nota_final_A12_L3_redon >= $comparativo_formato_11) { $alfabetico_final_A12_L3 = $alfabetico_formato_11;  }
   if ($nota_final_A12_L3_redon >= $comparativo_formato_12) { $alfabetico_final_A12_L3 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A12_L3; } /* cierre alfabetico */

if ($row_datos_controlasign['l_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A12_L3_redon >= $comparativo_formato_1) { $literal_final_A12_L3 = $literal_formato_1;  }
  if ($nota_final_A12_L3_redon >= $comparativo_formato_2) { $literal_final_A12_L3 = $literal_formato_2;  }
  if ($nota_final_A12_L3_redon >= $comparativo_formato_3) { $literal_final_A12_L3 = $literal_formato_3;  }
  if ($nota_final_A12_L3_redon >= $comparativo_formato_4) { $literal_final_A12_L3 = $literal_formato_4;  }
  if ($nota_final_A12_L3_redon >= $comparativo_formato_5) { $literal_final_A12_L3 = $literal_formato_5;  }
  if ($nota_final_A12_L3_redon >= $comparativo_formato_6) { $literal_final_A12_L3 = $literal_formato_6;  }
  if ($nota_final_A12_L3_redon >= $comparativo_formato_7) { $literal_final_A12_L3 = $literal_formato_7;  }
  if ($nota_final_A12_L3_redon >= $comparativo_formato_8) { $literal_final_A12_L3 = $literal_formato_8;  }
  if ($nota_final_A12_L3_redon >= $comparativo_formato_9) { $literal_final_A12_L3 = $literal_formato_9;  }
  if ($nota_final_A12_L3_redon >= $comparativo_formato_10) { $literal_final_A12_L3 = $literal_formato_10;  }
  if ($nota_final_A12_L3_redon >= $comparativo_formato_11) { $literal_final_A12_L3 = $literal_formato_11;  }
  if ($nota_final_A12_L3_redon >= $comparativo_formato_12) { $literal_final_A12_L3 = $literal_formato_12;  } 
  echo $literal_final_A12_L3; } /* cierre literal */    ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">



<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
<?php

$Parcial_A12_L1 = 0.000000001;
$Parcial_A12_L2 = 0.000000001;
$Parcial_A12_L3 = 0.000000001;



$Nota_Pro_Final_A12_L1_entero=$nota_final_A12_L1_redon1;          
$Nota_Pro_Final_A12_L2_entero=$nota_final_A12_L2_redon1;
$Nota_Pro_Final_A12_L3_entero=$nota_final_A12_L3_redon1;

if ($Nota_Pro_Final_A12_L1_entero >= 0.1) {
  $Parcial_A12_L1 = 1;
}

if ($Nota_Pro_Final_A12_L2_entero >= 0.1) {
  $Parcial_A12_L2 = 1;
}

if ($Nota_Pro_Final_A12_L3_entero >= 0.1) {
  $Parcial_A12_L3 = 1;
}


$Num_divisor_A12_L123 = $Parcial_A12_L1+$Parcial_A12_L2+$Parcial_A12_L3;       /* ojoooo */


 $Nota_Pro_all_A12_L123 =($nota_final_A12_L1_redon+$nota_final_A12_L2_redon+$nota_final_A12_L3_redon)/$Num_divisor_A12_L123;

$Nota_Pro_all_A12_L123_decimal=number_format($Nota_Pro_all_A12_L123, 1, ',', '');  echo $Nota_Pro_all_A12_L123_decimal;?></td>




  <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 14px;">
    <b><?php echo $row_datos_control_notas_A12["nt_AuF"];?></b></td>



<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A12_all_L123 = $Nota_Pro_all_A12_L123+$row_datos_control_notas_A12["nt_AuF"];




$Def_aux_total_A12_all_L123_redondeado1 = number_format($Def_aux_total_A12_all_L123, 1, '.', '');

$Definitiva_completa_A12_L123=number_format($Def_aux_total_A12_all_L123_redondeado1);  if ($row_datos_controlasign['l_convertir'] == 1 ) {  /* numerico */
       echo $Definitiva_completa_A12_L123;
} /* cierre numerico */
if ($row_datos_controlasign['l_convertir'] == 2 ) {  /* alfabetico */
   if ($Definitiva_completa_A12_L123 >= $comparativo_formato_1) { $alfabetico_completa_A12_L123 = $alfabetico_formato_1;  }
   if ($Definitiva_completa_A12_L123 >= $comparativo_formato_2) { $alfabetico_completa_A12_L123 = $alfabetico_formato_2;  }
   if ($Definitiva_completa_A12_L123 >= $comparativo_formato_3) { $alfabetico_completa_A12_L123 = $alfabetico_formato_3;  }
   if ($Definitiva_completa_A12_L123 >= $comparativo_formato_4) { $alfabetico_completa_A12_L123 = $alfabetico_formato_4;  }
   if ($Definitiva_completa_A12_L123 >= $comparativo_formato_5) { $alfabetico_completa_A12_L123 = $alfabetico_formato_5;  }
   if ($Definitiva_completa_A12_L123 >= $comparativo_formato_6) { $alfabetico_completa_A12_L123 = $alfabetico_formato_6;  }
   if ($Definitiva_completa_A12_L123 >= $comparativo_formato_7) { $alfabetico_completa_A12_L123 = $alfabetico_formato_7;  }
   if ($Definitiva_completa_A12_L123 >= $comparativo_formato_8) { $alfabetico_completa_A12_L123 = $alfabetico_formato_8;  }
   if ($Definitiva_completa_A12_L123 >= $comparativo_formato_9) { $alfabetico_completa_A12_L123 = $alfabetico_formato_9;  }
   if ($Definitiva_completa_A12_L123 >= $comparativo_formato_10) { $alfabetico_completa_A12_L123 = $alfabetico_formato_10;  }
   if ($Definitiva_completa_A12_L123 >= $comparativo_formato_11) { $alfabetico_completa_A12_L123 = $alfabetico_formato_11;  }
   if ($Definitiva_completa_A12_L123 >= $comparativo_formato_12) { $alfabetico_completa_A12_L123 = $alfabetico_formato_12;  }
   echo $alfabetico_completa_A12_L123; } /* cierre alfabetico */

if ($row_datos_controlasign['l_convertir'] == 3 ) {  /* literal */
  if ($Definitiva_completa_A12_L123 >= $comparativo_formato_1) { $literal_completa_A12_L123 = $literal_formato_1;  }
  if ($Definitiva_completa_A12_L123 >= $comparativo_formato_2) { $literal_completa_A12_L123 = $literal_formato_2;  }
  if ($Definitiva_completa_A12_L123 >= $comparativo_formato_3) { $literal_completa_A12_L123 = $literal_formato_3;  }
  if ($Definitiva_completa_A12_L123 >= $comparativo_formato_4) { $literal_completa_A12_L123 = $literal_formato_4;  }
  if ($Definitiva_completa_A12_L123 >= $comparativo_formato_5) { $literal_completa_A12_L123 = $literal_formato_5;  }
  if ($Definitiva_completa_A12_L123 >= $comparativo_formato_6) { $literal_completa_A12_L123 = $literal_formato_6;  }
  if ($Definitiva_completa_A12_L123 >= $comparativo_formato_7) { $literal_completa_A12_L123 = $literal_formato_7;  }
  if ($Definitiva_completa_A12_L123 >= $comparativo_formato_8) { $literal_completa_A12_L123 = $literal_formato_8;  }
  if ($Definitiva_completa_A12_L123 >= $comparativo_formato_9) { $literal_completa_A12_L123 = $literal_formato_9;  }
  if ($Definitiva_completa_A12_L123 >= $comparativo_formato_10) { $literal_completa_A12_L123 = $literal_formato_10;  }
  if ($Definitiva_completa_A12_L123 >= $comparativo_formato_11) { $literal_completa_A12_L123 = $literal_formato_11;  }
  if ($Definitiva_completa_A12_L123 >= $comparativo_formato_12) { $literal_completa_A12_L123 = $literal_formato_12;  } 
  echo $literal_completa_A12_L123; } /* cierre literal */ ?></b></td>


<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A12['rev_uno'];?></td>

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A12['rev_dos'];?></td>



<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5%; height: 23px;"><?php echo $row_datos_controlasign['l_abrev'];?>
  
<span style="color:red; font-size: 16px;"><b> <?php

               $l_ayuda = '';

                if ($row_datos_controlasign['l_suma'] !=1) {
                  $l_ayuda = '#';
               }

                echo $l_ayuda;?></b></span>

</td>




            </tr>



 <tr>
                       


              <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['m_abrev'];?>
                
<span style="color:red; font-size: 16px;"><b> <?php

               $m_ayuda = '';

                if ($row_datos_controlasign['m_suma'] !=1) {
                  $m_ayuda = '#';
               }

                echo $m_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 1.2%;">  </td>

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A13["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A13_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A13_L1_redon;?>"><b><?php



if ($row_datos_controlasign['m_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A13_L1;
} /* cierre numerico */
if ($row_datos_controlasign['m_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A13_L1_redon >= $comparativo_formato_1) { $alfabetico_final_A13_L1 = $alfabetico_formato_1;  }
   if ($nota_final_A13_L1_redon >= $comparativo_formato_2) { $alfabetico_final_A13_L1 = $alfabetico_formato_2;  }
   if ($nota_final_A13_L1_redon >= $comparativo_formato_3) { $alfabetico_final_A13_L1 = $alfabetico_formato_3;  }
   if ($nota_final_A13_L1_redon >= $comparativo_formato_4) { $alfabetico_final_A13_L1 = $alfabetico_formato_4;  }
   if ($nota_final_A13_L1_redon >= $comparativo_formato_5) { $alfabetico_final_A13_L1 = $alfabetico_formato_5;  }
   if ($nota_final_A13_L1_redon >= $comparativo_formato_6) { $alfabetico_final_A13_L1 = $alfabetico_formato_6;  }
   if ($nota_final_A13_L1_redon >= $comparativo_formato_7) { $alfabetico_final_A13_L1 = $alfabetico_formato_7;  }
   if ($nota_final_A13_L1_redon >= $comparativo_formato_8) { $alfabetico_final_A13_L1 = $alfabetico_formato_8;  }
   if ($nota_final_A13_L1_redon >= $comparativo_formato_9) { $alfabetico_final_A13_L1 = $alfabetico_formato_9;  }
   if ($nota_final_A13_L1_redon >= $comparativo_formato_10) { $alfabetico_final_A13_L1 = $alfabetico_formato_10;  }
   if ($nota_final_A13_L1_redon >= $comparativo_formato_11) { $alfabetico_final_A13_L1 = $alfabetico_formato_11;  }
   if ($nota_final_A13_L1_redon >= $comparativo_formato_12) { $alfabetico_final_A13_L1 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A13_L1; } /* cierre alfabetico */

if ($row_datos_controlasign['m_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A13_L1_redon >= $comparativo_formato_1) { $literal_final_A13_L1 = $literal_formato_1;  }
  if ($nota_final_A13_L1_redon >= $comparativo_formato_2) { $literal_final_A13_L1 = $literal_formato_2;  }
  if ($nota_final_A13_L1_redon >= $comparativo_formato_3) { $literal_final_A13_L1 = $literal_formato_3;  }
  if ($nota_final_A13_L1_redon >= $comparativo_formato_4) { $literal_final_A13_L1 = $literal_formato_4;  }
  if ($nota_final_A13_L1_redon >= $comparativo_formato_5) { $literal_final_A13_L1 = $literal_formato_5;  }
  if ($nota_final_A13_L1_redon >= $comparativo_formato_6) { $literal_final_A13_L1 = $literal_formato_6;  }
  if ($nota_final_A13_L1_redon >= $comparativo_formato_7) { $literal_final_A13_L1 = $literal_formato_7;  }
  if ($nota_final_A13_L1_redon >= $comparativo_formato_8) { $literal_final_A13_L1 = $literal_formato_8;  }
  if ($nota_final_A13_L1_redon >= $comparativo_formato_9) { $literal_final_A13_L1 = $literal_formato_9;  }
  if ($nota_final_A13_L1_redon >= $comparativo_formato_10) { $literal_final_A13_L1 = $literal_formato_10;  }
  if ($nota_final_A13_L1_redon >= $comparativo_formato_11) { $literal_final_A13_L1 = $literal_formato_11;  }
  if ($nota_final_A13_L1_redon >= $comparativo_formato_12) { $literal_final_A13_L1 = $literal_formato_12;  } 
  echo $literal_final_A13_L1; } /* cierre literal */
        ?> </b></span></td> 

             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A13["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A13_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A13_L2_redon;?>"><b><?php if ($row_datos_controlasign['m_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A13_L2;
} /* cierre numerico */
if ($row_datos_controlasign['m_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A13_L2_redon >= $comparativo_formato_1) { $alfabetico_final_A13_L2 = $alfabetico_formato_1;  }
   if ($nota_final_A13_L2_redon >= $comparativo_formato_2) { $alfabetico_final_A13_L2 = $alfabetico_formato_2;  }
   if ($nota_final_A13_L2_redon >= $comparativo_formato_3) { $alfabetico_final_A13_L2 = $alfabetico_formato_3;  }
   if ($nota_final_A13_L2_redon >= $comparativo_formato_4) { $alfabetico_final_A13_L2 = $alfabetico_formato_4;  }
   if ($nota_final_A13_L2_redon >= $comparativo_formato_5) { $alfabetico_final_A13_L2 = $alfabetico_formato_5;  }
   if ($nota_final_A13_L2_redon >= $comparativo_formato_6) { $alfabetico_final_A13_L2 = $alfabetico_formato_6;  }
   if ($nota_final_A13_L2_redon >= $comparativo_formato_7) { $alfabetico_final_A13_L2 = $alfabetico_formato_7;  }
   if ($nota_final_A13_L2_redon >= $comparativo_formato_8) { $alfabetico_final_A13_L2 = $alfabetico_formato_8;  }
   if ($nota_final_A13_L2_redon >= $comparativo_formato_9) { $alfabetico_final_A13_L2 = $alfabetico_formato_9;  }
   if ($nota_final_A13_L2_redon >= $comparativo_formato_10) { $alfabetico_final_A13_L2 = $alfabetico_formato_10;  }
   if ($nota_final_A13_L2_redon >= $comparativo_formato_11) { $alfabetico_final_A13_L2 = $alfabetico_formato_11;  }
   if ($nota_final_A13_L2_redon >= $comparativo_formato_12) { $alfabetico_final_A13_L2 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A13_L2; } /* cierre alfabetico */

if ($row_datos_controlasign['m_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A13_L2_redon >= $comparativo_formato_1) { $literal_final_A13_L2 = $literal_formato_1;  }
  if ($nota_final_A13_L2_redon >= $comparativo_formato_2) { $literal_final_A13_L2 = $literal_formato_2;  }
  if ($nota_final_A13_L2_redon >= $comparativo_formato_3) { $literal_final_A13_L2 = $literal_formato_3;  }
  if ($nota_final_A13_L2_redon >= $comparativo_formato_4) { $literal_final_A13_L2 = $literal_formato_4;  }
  if ($nota_final_A13_L2_redon >= $comparativo_formato_5) { $literal_final_A13_L2 = $literal_formato_5;  }
  if ($nota_final_A13_L2_redon >= $comparativo_formato_6) { $literal_final_A13_L2 = $literal_formato_6;  }
  if ($nota_final_A13_L2_redon >= $comparativo_formato_7) { $literal_final_A13_L2 = $literal_formato_7;  }
  if ($nota_final_A13_L2_redon >= $comparativo_formato_8) { $literal_final_A13_L2 = $literal_formato_8;  }
  if ($nota_final_A13_L2_redon >= $comparativo_formato_9) { $literal_final_A13_L2 = $literal_formato_9;  }
  if ($nota_final_A13_L2_redon >= $comparativo_formato_10) { $literal_final_A13_L2 = $literal_formato_10;  }
  if ($nota_final_A13_L2_redon >= $comparativo_formato_11) { $literal_final_A13_L2 = $literal_formato_11;  }
  if ($nota_final_A13_L2_redon >= $comparativo_formato_12) { $literal_final_A13_L2 = $literal_formato_12;  } 
  echo $literal_final_A13_L2; } /* cierre literal */  ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A13["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A13_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A13_L3_redon;?>"><b><?php if ($row_datos_controlasign['m_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A13_L3;
} /* cierre numerico */
if ($row_datos_controlasign['m_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A13_L3_redon >= $comparativo_formato_1) { $alfabetico_final_A13_L3 = $alfabetico_formato_1;  }
   if ($nota_final_A13_L3_redon >= $comparativo_formato_2) { $alfabetico_final_A13_L3 = $alfabetico_formato_2;  }
   if ($nota_final_A13_L3_redon >= $comparativo_formato_3) { $alfabetico_final_A13_L3 = $alfabetico_formato_3;  }
   if ($nota_final_A13_L3_redon >= $comparativo_formato_4) { $alfabetico_final_A13_L3 = $alfabetico_formato_4;  }
   if ($nota_final_A13_L3_redon >= $comparativo_formato_5) { $alfabetico_final_A13_L3 = $alfabetico_formato_5;  }
   if ($nota_final_A13_L3_redon >= $comparativo_formato_6) { $alfabetico_final_A13_L3 = $alfabetico_formato_6;  }
   if ($nota_final_A13_L3_redon >= $comparativo_formato_7) { $alfabetico_final_A13_L3 = $alfabetico_formato_7;  }
   if ($nota_final_A13_L3_redon >= $comparativo_formato_8) { $alfabetico_final_A13_L3 = $alfabetico_formato_8;  }
   if ($nota_final_A13_L3_redon >= $comparativo_formato_9) { $alfabetico_final_A13_L3 = $alfabetico_formato_9;  }
   if ($nota_final_A13_L3_redon >= $comparativo_formato_10) { $alfabetico_final_A13_L3 = $alfabetico_formato_10;  }
   if ($nota_final_A13_L3_redon >= $comparativo_formato_11) { $alfabetico_final_A13_L3 = $alfabetico_formato_11;  }
   if ($nota_final_A13_L3_redon >= $comparativo_formato_12) { $alfabetico_final_A13_L3 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A13_L3; } /* cierre alfabetico */

if ($row_datos_controlasign['m_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A13_L3_redon >= $comparativo_formato_1) { $literal_final_A13_L3 = $literal_formato_1;  }
  if ($nota_final_A13_L3_redon >= $comparativo_formato_2) { $literal_final_A13_L3 = $literal_formato_2;  }
  if ($nota_final_A13_L3_redon >= $comparativo_formato_3) { $literal_final_A13_L3 = $literal_formato_3;  }
  if ($nota_final_A13_L3_redon >= $comparativo_formato_4) { $literal_final_A13_L3 = $literal_formato_4;  }
  if ($nota_final_A13_L3_redon >= $comparativo_formato_5) { $literal_final_A13_L3 = $literal_formato_5;  }
  if ($nota_final_A13_L3_redon >= $comparativo_formato_6) { $literal_final_A13_L3 = $literal_formato_6;  }
  if ($nota_final_A13_L3_redon >= $comparativo_formato_7) { $literal_final_A13_L3 = $literal_formato_7;  }
  if ($nota_final_A13_L3_redon >= $comparativo_formato_8) { $literal_final_A13_L3 = $literal_formato_8;  }
  if ($nota_final_A13_L3_redon >= $comparativo_formato_9) { $literal_final_A13_L3 = $literal_formato_9;  }
  if ($nota_final_A13_L3_redon >= $comparativo_formato_10) { $literal_final_A13_L3 = $literal_formato_10;  }
  if ($nota_final_A13_L3_redon >= $comparativo_formato_11) { $literal_final_A13_L3 = $literal_formato_11;  }
  if ($nota_final_A13_L3_redon >= $comparativo_formato_12) { $literal_final_A13_L3 = $literal_formato_12;  } 
  echo $literal_final_A13_L3; } /* cierre literal */    ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">



<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
<?php

$Parcial_A13_L1 = 0.000000001;
$Parcial_A13_L2 = 0.000000001;
$Parcial_A13_L3 = 0.000000001;



$Nota_Pro_Final_A13_L1_entero=$nota_final_A13_L1_redon1;          
$Nota_Pro_Final_A13_L2_entero=$nota_final_A13_L2_redon1;
$Nota_Pro_Final_A13_L3_entero=$nota_final_A13_L3_redon1;

if ($Nota_Pro_Final_A13_L1_entero >= 0.1) {
  $Parcial_A13_L1 = 1;
}

if ($Nota_Pro_Final_A13_L2_entero >= 0.1) {
  $Parcial_A13_L2 = 1;
}

if ($Nota_Pro_Final_A13_L3_entero >= 0.1) {
  $Parcial_A13_L3 = 1;
}


$Num_divisor_A13_L123 = $Parcial_A13_L1+$Parcial_A13_L2+$Parcial_A13_L3;       /* ojoooo */


 $Nota_Pro_all_A13_L123 =($nota_final_A13_L1_redon+$nota_final_A13_L2_redon+$nota_final_A13_L3_redon)/$Num_divisor_A13_L123;

$Nota_Pro_all_A13_L123_decimal=number_format($Nota_Pro_all_A13_L123, 1, ',', '');  echo $Nota_Pro_all_A13_L123_decimal;?></td>




  <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 14px;">
    <b><?php echo $row_datos_control_notas_A13["nt_AuF"];?></b></td>



<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A13_all_L123 = $Nota_Pro_all_A13_L123+$row_datos_control_notas_A13["nt_AuF"];




$Def_aux_total_A13_all_L123_redondeado1 = number_format($Def_aux_total_A13_all_L123, 1, '.', '');

$Definitiva_completa_A13_L123=number_format($Def_aux_total_A13_all_L123_redondeado1);  if ($row_datos_controlasign['m_convertir'] == 1 ) {  /* numerico */
       echo $Definitiva_completa_A13_L123;
} /* cierre numerico */
if ($row_datos_controlasign['m_convertir'] == 2 ) {  /* alfabetico */
   if ($Definitiva_completa_A13_L123 >= $comparativo_formato_1) { $alfabetico_completa_A13_L123 = $alfabetico_formato_1;  }
   if ($Definitiva_completa_A13_L123 >= $comparativo_formato_2) { $alfabetico_completa_A13_L123 = $alfabetico_formato_2;  }
   if ($Definitiva_completa_A13_L123 >= $comparativo_formato_3) { $alfabetico_completa_A13_L123 = $alfabetico_formato_3;  }
   if ($Definitiva_completa_A13_L123 >= $comparativo_formato_4) { $alfabetico_completa_A13_L123 = $alfabetico_formato_4;  }
   if ($Definitiva_completa_A13_L123 >= $comparativo_formato_5) { $alfabetico_completa_A13_L123 = $alfabetico_formato_5;  }
   if ($Definitiva_completa_A13_L123 >= $comparativo_formato_6) { $alfabetico_completa_A13_L123 = $alfabetico_formato_6;  }
   if ($Definitiva_completa_A13_L123 >= $comparativo_formato_7) { $alfabetico_completa_A13_L123 = $alfabetico_formato_7;  }
   if ($Definitiva_completa_A13_L123 >= $comparativo_formato_8) { $alfabetico_completa_A13_L123 = $alfabetico_formato_8;  }
   if ($Definitiva_completa_A13_L123 >= $comparativo_formato_9) { $alfabetico_completa_A13_L123 = $alfabetico_formato_9;  }
   if ($Definitiva_completa_A13_L123 >= $comparativo_formato_10) { $alfabetico_completa_A13_L123 = $alfabetico_formato_10;  }
   if ($Definitiva_completa_A13_L123 >= $comparativo_formato_11) { $alfabetico_completa_A13_L123 = $alfabetico_formato_11;  }
   if ($Definitiva_completa_A13_L123 >= $comparativo_formato_12) { $alfabetico_completa_A13_L123 = $alfabetico_formato_12;  }
   echo $alfabetico_completa_A13_L123; } /* cierre alfabetico */

if ($row_datos_controlasign['m_convertir'] == 3 ) {  /* literal */
  if ($Definitiva_completa_A13_L123 >= $comparativo_formato_1) { $literal_completa_A13_L123 = $literal_formato_1;  }
  if ($Definitiva_completa_A13_L123 >= $comparativo_formato_2) { $literal_completa_A13_L123 = $literal_formato_2;  }
  if ($Definitiva_completa_A13_L123 >= $comparativo_formato_3) { $literal_completa_A13_L123 = $literal_formato_3;  }
  if ($Definitiva_completa_A13_L123 >= $comparativo_formato_4) { $literal_completa_A13_L123 = $literal_formato_4;  }
  if ($Definitiva_completa_A13_L123 >= $comparativo_formato_5) { $literal_completa_A13_L123 = $literal_formato_5;  }
  if ($Definitiva_completa_A13_L123 >= $comparativo_formato_6) { $literal_completa_A13_L123 = $literal_formato_6;  }
  if ($Definitiva_completa_A13_L123 >= $comparativo_formato_7) { $literal_completa_A13_L123 = $literal_formato_7;  }
  if ($Definitiva_completa_A13_L123 >= $comparativo_formato_8) { $literal_completa_A13_L123 = $literal_formato_8;  }
  if ($Definitiva_completa_A13_L123 >= $comparativo_formato_9) { $literal_completa_A13_L123 = $literal_formato_9;  }
  if ($Definitiva_completa_A13_L123 >= $comparativo_formato_10) { $literal_completa_A13_L123 = $literal_formato_10;  }
  if ($Definitiva_completa_A13_L123 >= $comparativo_formato_11) { $literal_completa_A13_L123 = $literal_formato_11;  }
  if ($Definitiva_completa_A13_L123 >= $comparativo_formato_12) { $literal_completa_A13_L123 = $literal_formato_12;  } 
  echo $literal_completa_A13_L123; } /* cierre literal */ ?></b></td>


<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A13['rev_uno'];?></td>

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A13['rev_dos'];?></td>



<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5%; height: 23px;"><?php echo $row_datos_controlasign['m_abrev'];?>
  
<span style="color:red; font-size: 16px;"><b> <?php

               $m_ayuda = '';

                if ($row_datos_controlasign['m_suma'] !=1) {
                  $m_ayuda = '#';
               }

                echo $m_ayuda;?></b></span>

</td>




            </tr>



            <tr>
                       


              <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['n_abrev'];?>
                
<span style="color:red; font-size: 16px;"><b> <?php

               $n_ayuda = '';

                if ($row_datos_controlasign['n_suma'] !=1) {
                  $n_ayuda = '#';
               }

                echo $n_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 1.2%;">  </td>

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A14["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A14_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A14_L1_redon;?>"><b><?php



if ($row_datos_controlasign['n_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A14_L1;
} /* cierre numerico */
if ($row_datos_controlasign['n_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A14_L1_redon >= $comparativo_formato_1) { $alfabetico_final_A14_L1 = $alfabetico_formato_1;  }
   if ($nota_final_A14_L1_redon >= $comparativo_formato_2) { $alfabetico_final_A14_L1 = $alfabetico_formato_2;  }
   if ($nota_final_A14_L1_redon >= $comparativo_formato_3) { $alfabetico_final_A14_L1 = $alfabetico_formato_3;  }
   if ($nota_final_A14_L1_redon >= $comparativo_formato_4) { $alfabetico_final_A14_L1 = $alfabetico_formato_4;  }
   if ($nota_final_A14_L1_redon >= $comparativo_formato_5) { $alfabetico_final_A14_L1 = $alfabetico_formato_5;  }
   if ($nota_final_A14_L1_redon >= $comparativo_formato_6) { $alfabetico_final_A14_L1 = $alfabetico_formato_6;  }
   if ($nota_final_A14_L1_redon >= $comparativo_formato_7) { $alfabetico_final_A14_L1 = $alfabetico_formato_7;  }
   if ($nota_final_A14_L1_redon >= $comparativo_formato_8) { $alfabetico_final_A14_L1 = $alfabetico_formato_8;  }
   if ($nota_final_A14_L1_redon >= $comparativo_formato_9) { $alfabetico_final_A14_L1 = $alfabetico_formato_9;  }
   if ($nota_final_A14_L1_redon >= $comparativo_formato_10) { $alfabetico_final_A14_L1 = $alfabetico_formato_10;  }
   if ($nota_final_A14_L1_redon >= $comparativo_formato_11) { $alfabetico_final_A14_L1 = $alfabetico_formato_11;  }
   if ($nota_final_A14_L1_redon >= $comparativo_formato_12) { $alfabetico_final_A14_L1 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A14_L1; } /* cierre alfabetico */

if ($row_datos_controlasign['n_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A14_L1_redon >= $comparativo_formato_1) { $literal_final_A14_L1 = $literal_formato_1;  }
  if ($nota_final_A14_L1_redon >= $comparativo_formato_2) { $literal_final_A14_L1 = $literal_formato_2;  }
  if ($nota_final_A14_L1_redon >= $comparativo_formato_3) { $literal_final_A14_L1 = $literal_formato_3;  }
  if ($nota_final_A14_L1_redon >= $comparativo_formato_4) { $literal_final_A14_L1 = $literal_formato_4;  }
  if ($nota_final_A14_L1_redon >= $comparativo_formato_5) { $literal_final_A14_L1 = $literal_formato_5;  }
  if ($nota_final_A14_L1_redon >= $comparativo_formato_6) { $literal_final_A14_L1 = $literal_formato_6;  }
  if ($nota_final_A14_L1_redon >= $comparativo_formato_7) { $literal_final_A14_L1 = $literal_formato_7;  }
  if ($nota_final_A14_L1_redon >= $comparativo_formato_8) { $literal_final_A14_L1 = $literal_formato_8;  }
  if ($nota_final_A14_L1_redon >= $comparativo_formato_9) { $literal_final_A14_L1 = $literal_formato_9;  }
  if ($nota_final_A14_L1_redon >= $comparativo_formato_10) { $literal_final_A14_L1 = $literal_formato_10;  }
  if ($nota_final_A14_L1_redon >= $comparativo_formato_11) { $literal_final_A14_L1 = $literal_formato_11;  }
  if ($nota_final_A14_L1_redon >= $comparativo_formato_12) { $literal_final_A14_L1 = $literal_formato_12;  } 
  echo $literal_final_A14_L1; } /* cierre literal */
        ?> </b></span></td> 

             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A14["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A14_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A14_L2_redon;?>"><b><?php if ($row_datos_controlasign['n_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A14_L2;
} /* cierre numerico */
if ($row_datos_controlasign['n_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A14_L2_redon >= $comparativo_formato_1) { $alfabetico_final_A14_L2 = $alfabetico_formato_1;  }
   if ($nota_final_A14_L2_redon >= $comparativo_formato_2) { $alfabetico_final_A14_L2 = $alfabetico_formato_2;  }
   if ($nota_final_A14_L2_redon >= $comparativo_formato_3) { $alfabetico_final_A14_L2 = $alfabetico_formato_3;  }
   if ($nota_final_A14_L2_redon >= $comparativo_formato_4) { $alfabetico_final_A14_L2 = $alfabetico_formato_4;  }
   if ($nota_final_A14_L2_redon >= $comparativo_formato_5) { $alfabetico_final_A14_L2 = $alfabetico_formato_5;  }
   if ($nota_final_A14_L2_redon >= $comparativo_formato_6) { $alfabetico_final_A14_L2 = $alfabetico_formato_6;  }
   if ($nota_final_A14_L2_redon >= $comparativo_formato_7) { $alfabetico_final_A14_L2 = $alfabetico_formato_7;  }
   if ($nota_final_A14_L2_redon >= $comparativo_formato_8) { $alfabetico_final_A14_L2 = $alfabetico_formato_8;  }
   if ($nota_final_A14_L2_redon >= $comparativo_formato_9) { $alfabetico_final_A14_L2 = $alfabetico_formato_9;  }
   if ($nota_final_A14_L2_redon >= $comparativo_formato_10) { $alfabetico_final_A14_L2 = $alfabetico_formato_10;  }
   if ($nota_final_A14_L2_redon >= $comparativo_formato_11) { $alfabetico_final_A14_L2 = $alfabetico_formato_11;  }
   if ($nota_final_A14_L2_redon >= $comparativo_formato_12) { $alfabetico_final_A14_L2 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A14_L2; } /* cierre alfabetico */

if ($row_datos_controlasign['n_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A14_L2_redon >= $comparativo_formato_1) { $literal_final_A14_L2 = $literal_formato_1;  }
  if ($nota_final_A14_L2_redon >= $comparativo_formato_2) { $literal_final_A14_L2 = $literal_formato_2;  }
  if ($nota_final_A14_L2_redon >= $comparativo_formato_3) { $literal_final_A14_L2 = $literal_formato_3;  }
  if ($nota_final_A14_L2_redon >= $comparativo_formato_4) { $literal_final_A14_L2 = $literal_formato_4;  }
  if ($nota_final_A14_L2_redon >= $comparativo_formato_5) { $literal_final_A14_L2 = $literal_formato_5;  }
  if ($nota_final_A14_L2_redon >= $comparativo_formato_6) { $literal_final_A14_L2 = $literal_formato_6;  }
  if ($nota_final_A14_L2_redon >= $comparativo_formato_7) { $literal_final_A14_L2 = $literal_formato_7;  }
  if ($nota_final_A14_L2_redon >= $comparativo_formato_8) { $literal_final_A14_L2 = $literal_formato_8;  }
  if ($nota_final_A14_L2_redon >= $comparativo_formato_9) { $literal_final_A14_L2 = $literal_formato_9;  }
  if ($nota_final_A14_L2_redon >= $comparativo_formato_10) { $literal_final_A14_L2 = $literal_formato_10;  }
  if ($nota_final_A14_L2_redon >= $comparativo_formato_11) { $literal_final_A14_L2 = $literal_formato_11;  }
  if ($nota_final_A14_L2_redon >= $comparativo_formato_12) { $literal_final_A14_L2 = $literal_formato_12;  } 
  echo $literal_final_A14_L2; } /* cierre literal */  ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">


<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A14["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A14_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.7%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $nota_final_A14_L3_redon;?>"><b><?php if ($row_datos_controlasign['n_convertir'] == 1 ) {  /* numerico */
       echo $nota_final_A14_L3;
} /* cierre numerico */
if ($row_datos_controlasign['n_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A14_L3_redon >= $comparativo_formato_1) { $alfabetico_final_A14_L3 = $alfabetico_formato_1;  }
   if ($nota_final_A14_L3_redon >= $comparativo_formato_2) { $alfabetico_final_A14_L3 = $alfabetico_formato_2;  }
   if ($nota_final_A14_L3_redon >= $comparativo_formato_3) { $alfabetico_final_A14_L3 = $alfabetico_formato_3;  }
   if ($nota_final_A14_L3_redon >= $comparativo_formato_4) { $alfabetico_final_A14_L3 = $alfabetico_formato_4;  }
   if ($nota_final_A14_L3_redon >= $comparativo_formato_5) { $alfabetico_final_A14_L3 = $alfabetico_formato_5;  }
   if ($nota_final_A14_L3_redon >= $comparativo_formato_6) { $alfabetico_final_A14_L3 = $alfabetico_formato_6;  }
   if ($nota_final_A14_L3_redon >= $comparativo_formato_7) { $alfabetico_final_A14_L3 = $alfabetico_formato_7;  }
   if ($nota_final_A14_L3_redon >= $comparativo_formato_8) { $alfabetico_final_A14_L3 = $alfabetico_formato_8;  }
   if ($nota_final_A14_L3_redon >= $comparativo_formato_9) { $alfabetico_final_A14_L3 = $alfabetico_formato_9;  }
   if ($nota_final_A14_L3_redon >= $comparativo_formato_10) { $alfabetico_final_A14_L3 = $alfabetico_formato_10;  }
   if ($nota_final_A14_L3_redon >= $comparativo_formato_11) { $alfabetico_final_A14_L3 = $alfabetico_formato_11;  }
   if ($nota_final_A14_L3_redon >= $comparativo_formato_12) { $alfabetico_final_A14_L3 = $alfabetico_formato_12;  }
   echo $alfabetico_final_A14_L3; } /* cierre alfabetico */

if ($row_datos_controlasign['n_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A14_L3_redon >= $comparativo_formato_1) { $literal_final_A14_L3 = $literal_formato_1;  }
  if ($nota_final_A14_L3_redon >= $comparativo_formato_2) { $literal_final_A14_L3 = $literal_formato_2;  }
  if ($nota_final_A14_L3_redon >= $comparativo_formato_3) { $literal_final_A14_L3 = $literal_formato_3;  }
  if ($nota_final_A14_L3_redon >= $comparativo_formato_4) { $literal_final_A14_L3 = $literal_formato_4;  }
  if ($nota_final_A14_L3_redon >= $comparativo_formato_5) { $literal_final_A14_L3 = $literal_formato_5;  }
  if ($nota_final_A14_L3_redon >= $comparativo_formato_6) { $literal_final_A14_L3 = $literal_formato_6;  }
  if ($nota_final_A14_L3_redon >= $comparativo_formato_7) { $literal_final_A14_L3 = $literal_formato_7;  }
  if ($nota_final_A14_L3_redon >= $comparativo_formato_8) { $literal_final_A14_L3 = $literal_formato_8;  }
  if ($nota_final_A14_L3_redon >= $comparativo_formato_9) { $literal_final_A14_L3 = $literal_formato_9;  }
  if ($nota_final_A14_L3_redon >= $comparativo_formato_10) { $literal_final_A14_L3 = $literal_formato_10;  }
  if ($nota_final_A14_L3_redon >= $comparativo_formato_11) { $literal_final_A14_L3 = $literal_formato_11;  }
  if ($nota_final_A14_L3_redon >= $comparativo_formato_12) { $literal_final_A14_L3 = $literal_formato_12;  } 
  echo $literal_final_A14_L3; } /* cierre literal */    ?></b></span></td> 


             <td style="height: 23px; width: 1.2%;">



<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
<?php

$Parcial_A14_L1 = 0.000000001;
$Parcial_A14_L2 = 0.000000001;
$Parcial_A14_L3 = 0.000000001;



$Nota_Pro_Final_A14_L1_entero=$nota_final_A14_L1_redon1;          
$Nota_Pro_Final_A14_L2_entero=$nota_final_A14_L2_redon1;
$Nota_Pro_Final_A14_L3_entero=$nota_final_A14_L3_redon1;

if ($Nota_Pro_Final_A14_L1_entero >= 0.1) {
  $Parcial_A14_L1 = 1;
}

if ($Nota_Pro_Final_A14_L2_entero >= 0.1) {
  $Parcial_A14_L2 = 1;
}

if ($Nota_Pro_Final_A14_L3_entero >= 0.1) {
  $Parcial_A14_L3 = 1;
}


$Num_divisor_A14_L123 = $Parcial_A14_L1+$Parcial_A14_L2+$Parcial_A14_L3;       /* ojoooo */


 $Nota_Pro_all_A14_L123 =($nota_final_A14_L1_redon+$nota_final_A14_L2_redon+$nota_final_A14_L3_redon)/$Num_divisor_A14_L123;

$Nota_Pro_all_A14_L123_decimal=number_format($Nota_Pro_all_A14_L123, 1, ',', '');  echo $Nota_Pro_all_A14_L123_decimal;?></td>




  <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 14px;">
    <b><?php echo $row_datos_control_notas_A14["nt_AuF"];?></b></td>



<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A14_all_L123 = $Nota_Pro_all_A14_L123+$row_datos_control_notas_A14["nt_AuF"];




$Def_aux_total_A14_all_L123_redondeado1 = number_format($Def_aux_total_A14_all_L123, 1, '.', '');

$Definitiva_completa_A14_L123=number_format($Def_aux_total_A14_all_L123_redondeado1);  if ($row_datos_controlasign['n_convertir'] == 1 ) {  /* numerico */
       echo $Definitiva_completa_A14_L123;
} /* cierre numerico */
if ($row_datos_controlasign['n_convertir'] == 2 ) {  /* alfabetico */
   if ($Definitiva_completa_A14_L123 >= $comparativo_formato_1) { $alfabetico_completa_A14_L123 = $alfabetico_formato_1;  }
   if ($Definitiva_completa_A14_L123 >= $comparativo_formato_2) { $alfabetico_completa_A14_L123 = $alfabetico_formato_2;  }
   if ($Definitiva_completa_A14_L123 >= $comparativo_formato_3) { $alfabetico_completa_A14_L123 = $alfabetico_formato_3;  }
   if ($Definitiva_completa_A14_L123 >= $comparativo_formato_4) { $alfabetico_completa_A14_L123 = $alfabetico_formato_4;  }
   if ($Definitiva_completa_A14_L123 >= $comparativo_formato_5) { $alfabetico_completa_A14_L123 = $alfabetico_formato_5;  }
   if ($Definitiva_completa_A14_L123 >= $comparativo_formato_6) { $alfabetico_completa_A14_L123 = $alfabetico_formato_6;  }
   if ($Definitiva_completa_A14_L123 >= $comparativo_formato_7) { $alfabetico_completa_A14_L123 = $alfabetico_formato_7;  }
   if ($Definitiva_completa_A14_L123 >= $comparativo_formato_8) { $alfabetico_completa_A14_L123 = $alfabetico_formato_8;  }
   if ($Definitiva_completa_A14_L123 >= $comparativo_formato_9) { $alfabetico_completa_A14_L123 = $alfabetico_formato_9;  }
   if ($Definitiva_completa_A14_L123 >= $comparativo_formato_10) { $alfabetico_completa_A14_L123 = $alfabetico_formato_10;  }
   if ($Definitiva_completa_A14_L123 >= $comparativo_formato_11) { $alfabetico_completa_A14_L123 = $alfabetico_formato_11;  }
   if ($Definitiva_completa_A14_L123 >= $comparativo_formato_12) { $alfabetico_completa_A14_L123 = $alfabetico_formato_12;  }
   echo $alfabetico_completa_A14_L123; } /* cierre alfabetico */

if ($row_datos_controlasign['n_convertir'] == 3 ) {  /* literal */
  if ($Definitiva_completa_A14_L123 >= $comparativo_formato_1) { $literal_completa_A14_L123 = $literal_formato_1;  }
  if ($Definitiva_completa_A14_L123 >= $comparativo_formato_2) { $literal_completa_A14_L123 = $literal_formato_2;  }
  if ($Definitiva_completa_A14_L123 >= $comparativo_formato_3) { $literal_completa_A14_L123 = $literal_formato_3;  }
  if ($Definitiva_completa_A14_L123 >= $comparativo_formato_4) { $literal_completa_A14_L123 = $literal_formato_4;  }
  if ($Definitiva_completa_A14_L123 >= $comparativo_formato_5) { $literal_completa_A14_L123 = $literal_formato_5;  }
  if ($Definitiva_completa_A14_L123 >= $comparativo_formato_6) { $literal_completa_A14_L123 = $literal_formato_6;  }
  if ($Definitiva_completa_A14_L123 >= $comparativo_formato_7) { $literal_completa_A14_L123 = $literal_formato_7;  }
  if ($Definitiva_completa_A14_L123 >= $comparativo_formato_8) { $literal_completa_A14_L123 = $literal_formato_8;  }
  if ($Definitiva_completa_A14_L123 >= $comparativo_formato_9) { $literal_completa_A14_L123 = $literal_formato_9;  }
  if ($Definitiva_completa_A14_L123 >= $comparativo_formato_10) { $literal_completa_A14_L123 = $literal_formato_10;  }
  if ($Definitiva_completa_A14_L123 >= $comparativo_formato_11) { $literal_completa_A14_L123 = $literal_formato_11;  }
  if ($Definitiva_completa_A14_L123 >= $comparativo_formato_12) { $literal_completa_A14_L123 = $literal_formato_12;  } 
  echo $literal_completa_A14_L123; } /* cierre literal */ ?></b></td>


<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A14['rev_uno'];?></td>

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;">
  <?php echo $row_datos_control_notas_A14['rev_dos'];?></td>



<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5%; height: 23px;"><?php echo $row_datos_controlasign['n_abrev'];?>
  
<span style="color:red; font-size: 16px;"><b> <?php

               $n_ayuda = '';

                if ($row_datos_controlasign['n_suma'] !=1) {
                  $n_ayuda = '#';
               }

                echo $n_ayuda;?></b></span>

</td>




            </tr>






















































































            <tr>
            	         <td style="height: 23px;">
            </tr>



            <tr>

            

            <td colspan="6" style="height: 23px; width: 17.5%;">  </td>

                <td class="borde_izq_inf_sup_negro" colspan="3" style="width:7.5%; height: 23px; "BGCOLOR="<?php echo $color1;?>"><b>Promedio 1°L:</b></td>
               
                <td class="borde_inf_y_sup_negro" style="width:2.7%; height: 23px; "BGCOLOR="<?php echo $color1;?>"></td> 

<?php 

$A1_L1 = 0.00000000001;
$A2_L1 = 0.00000000001;
$A3_L1 = 0.00000000001;
$A4_L1 = 0.00000000001;
$A5_L1 = 0.00000000001;
$A6_L1 = 0.00000000001;
$A7_L1 = 0.00000000001;
$A8_L1 = 0.00000000001;
$A9_L1 = 0.00000000001;
$A10_L1 = 0.00000000001;
$A11_L1 = 0.00000000001;
$A12_L1 = 0.00000000001;
$A13_L1 = 0.00000000001;
$A14_L1 = 0.00000000001;

if ($nota_final_A1_L1 >=0.1) {
  $A1_L1 = 1;
}

if ($nota_final_A2_L1 >=0.1) {
  $A2_L1 = 1;
}

if ($nota_final_A3_L1 >=0.1) {
  $A3_L1 = 1;
}

if ($nota_final_A4_L1 >=0.1) {
  $A4_L1 = 1;
}

if ($nota_final_A5_L1 >=0.1) {
  $A5_L1 = 1;
}

if ($nota_final_A6_L1 >=0.1) {
  $A6_L1 = 1;
}

if ($nota_final_A7_L1 >=0.1) {
  $A7_L1 = 1;
}

if ($nota_final_A8_L1 >=0.1) {
  $A8_L1 = 1;
}

if ($nota_final_A9_L1 >=0.1) {
  $A9_L1 = 1;
}

if ($nota_final_A10_L1 >=0.1) {
  $A10_L1 = 1;
}

if ($nota_final_A11_L1 >=0.1) {
  $A11_L1 = 1;
}

if ($nota_final_A12_L1 >=0.1) {
  $A12_L1 = 1;
}

if ($nota_final_A13_L1 >=0.1) {
  $A13_L1 = 1;
}

if ($nota_final_A14_L1 >=0.1) {
  $A14_L1 = 1;
}


$co = 0.00000000001;   /* comodin */

if ($row_datos_controlasign['a_suma'] == 1) { $nota_final_A1_L1_redon_valida = $nota_final_A1_L1_redon; $A1_L1_valida = $A1_L1; } else { $nota_final_A1_L1_redon_valida = 0; $A1_L1_valida = $co; }
if ($row_datos_controlasign['b_suma'] == 1) { $nota_final_A2_L1_redon_valida = $nota_final_A2_L1_redon; $A2_L1_valida = $A2_L1; } else { $nota_final_A2_L1_redon_valida = 0; $A2_L1_valida = $co; }
if ($row_datos_controlasign['c_suma'] == 1) { $nota_final_A3_L1_redon_valida = $nota_final_A3_L1_redon; $A3_L1_valida = $A3_L1; } else { $nota_final_A3_L1_redon_valida = 0; $A3_L1_valida = $co; }
if ($row_datos_controlasign['d_suma'] == 1) { $nota_final_A4_L1_redon_valida = $nota_final_A4_L1_redon; $A4_L1_valida = $A4_L1; } else { $nota_final_A4_L1_redon_valida = 0; $A4_L1_valida = $co; }
if ($row_datos_controlasign['e_suma'] == 1) { $nota_final_A5_L1_redon_valida = $nota_final_A5_L1_redon; $A5_L1_valida = $A5_L1; } else { $nota_final_A5_L1_redon_valida = 0; $A5_L1_valida = $co; }
if ($row_datos_controlasign['f_suma'] == 1) { $nota_final_A6_L1_redon_valida = $nota_final_A6_L1_redon; $A6_L1_valida = $A6_L1; } else { $nota_final_A6_L1_redon_valida = 0; $A6_L1_valida = $co; }
if ($row_datos_controlasign['g_suma'] == 1) { $nota_final_A7_L1_redon_valida = $nota_final_A7_L1_redon; $A7_L1_valida = $A7_L1; } else { $nota_final_A7_L1_redon_valida = 0; $A7_L1_valida = $co; }
if ($row_datos_controlasign['h_suma'] == 1) { $nota_final_A8_L1_redon_valida = $nota_final_A8_L1_redon; $A8_L1_valida = $A8_L1; } else { $nota_final_A8_L1_redon_valida = 0; $A8_L1_valida = $co; }
if ($row_datos_controlasign['i_suma'] == 1) { $nota_final_A9_L1_redon_valida = $nota_final_A9_L1_redon; $A9_L1_valida = $A9_L1; } else { $nota_final_A9_L1_redon_valida = 0; $A9_L1_valida = $co; }
if ($row_datos_controlasign['j_suma'] == 1) { $nota_final_A10_L1_redon_valida = $nota_final_A10_L1_redon; $A10_L1_valida = $A10_L1; } else { $nota_final_A10_L1_redon_valida = 0; $A10_L1_valida = $co; }
if ($row_datos_controlasign['k_suma'] == 1) { $nota_final_A11_L1_redon_valida = $nota_final_A11_L1_redon; $A11_L1_valida = $A11_L1; } else { $nota_final_A11_L1_redon_valida = 0; $A11_L1_valida = $co; }
if ($row_datos_controlasign['l_suma'] == 1) { $nota_final_A12_L1_redon_valida = $nota_final_A12_L1_redon; $A12_L1_valida = $A12_L1; } else { $nota_final_A12_L1_redon_valida = 0; $A12_L1_valida = $co; }
if ($row_datos_controlasign['m_suma'] == 1) { $nota_final_A13_L1_redon_valida = $nota_final_A13_L1_redon; $A13_L1_valida = $A13_L1; } else { $nota_final_A13_L1_redon_valida = 0; $A13_L1_valida = $co; }
if ($row_datos_controlasign['n_suma'] == 1) { $nota_final_A14_L1_redon_valida = $nota_final_A14_L1_redon; $A14_L1_valida = $A14_L1; } else { $nota_final_A14_L1_redon_valida = 0; $A14_L1_valida = $co; }


$el_promedio_divisor_L1 = $A1_L1_valida+$A2_L1_valida+$A3_L1_valida+$A4_L1_valida+$A5_L1_valida+$A6_L1_valida+$A7_L1_valida
                          +$A8_L1_valida+$A9_L1_valida+$A10_L1_valida+$A11_L1_valida+$A12_L1_valida+$A13_L1_valida+$A14_L1_valida; 


$promedio_primer_L1 = ($nota_final_A1_L1_redon_valida + $nota_final_A2_L1_redon_valida + $nota_final_A3_L1_redon_valida + $nota_final_A4_L1_redon_valida + $nota_final_A5_L1_redon_valida
                     + $nota_final_A6_L1_redon_valida + $nota_final_A7_L1_redon_valida + $nota_final_A8_L1_redon_valida + $nota_final_A9_L1_redon_valida + $nota_final_A10_L1_redon_valida
                     + $nota_final_A11_L1_redon_valida + $nota_final_A12_L1_redon_valida   + $nota_final_A13_L1_redon_valida + $nota_final_A14_L1_redon_valida) / $el_promedio_divisor_L1; 


$pro_dec_L1_redondeado1=number_format($promedio_primer_L1, 1, '.', '');  
$pro_dec_L1=number_format($pro_dec_L1_redondeado1);                         ?>



<?php

if ($row_datos_controlasign['a_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }
if ($row_datos_controlasign['b_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }
if ($row_datos_controlasign['c_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }
if ($row_datos_controlasign['d_convertir'] == 1) { $dominio_numerico = $dominio_numerico +1; }

if ($row_datos_controlasign['a_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }
if ($row_datos_controlasign['b_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }
if ($row_datos_controlasign['c_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }
if ($row_datos_controlasign['d_convertir'] == 2) { $dominio_alfabetico = $dominio_alfabetico +1; }

if ($row_datos_controlasign['a_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }
if ($row_datos_controlasign['b_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }
if ($row_datos_controlasign['c_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }
if ($row_datos_controlasign['d_convertir'] == 3) { $dominio_literal = $dominio_literal +1; }


?>




<td class="borde_der_inf_sup_negro" style="width:2.7%; font-size: 18px; height: 23px; "BGCOLOR="<?php echo $color1;?>">
<span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $pro_dec_L1;?>">
<b><?php if ($dominio_numerico >= 4) {  /* numerico */
       echo $pro_dec_L1_redondeado1;
} /* cierre numerico */
if ($dominio_alfabetico >= 4 ) {  /* alfabetico */
   if ($pro_dec_L1_redondeado1 >= $comparativo_formato_1) { $alfabetico_L1_redondeado1 = $alfabetico_formato_1;  }
   if ($pro_dec_L1_redondeado1 >= $comparativo_formato_2) { $alfabetico_L1_redondeado1 = $alfabetico_formato_2;  }
   if ($pro_dec_L1_redondeado1 >= $comparativo_formato_3) { $alfabetico_L1_redondeado1 = $alfabetico_formato_3;  }
   if ($pro_dec_L1_redondeado1 >= $comparativo_formato_4) { $alfabetico_L1_redondeado1 = $alfabetico_formato_4;  }
   if ($pro_dec_L1_redondeado1 >= $comparativo_formato_5) { $alfabetico_L1_redondeado1 = $alfabetico_formato_5;  }
   if ($pro_dec_L1_redondeado1 >= $comparativo_formato_6) { $alfabetico_L1_redondeado1 = $alfabetico_formato_6;  }
   if ($pro_dec_L1_redondeado1 >= $comparativo_formato_7) { $alfabetico_L1_redondeado1 = $alfabetico_formato_7;  }
   if ($pro_dec_L1_redondeado1 >= $comparativo_formato_8) { $alfabetico_L1_redondeado1 = $alfabetico_formato_8;  }
   if ($pro_dec_L1_redondeado1 >= $comparativo_formato_9) { $alfabetico_L1_redondeado1 = $alfabetico_formato_9;  }
   if ($pro_dec_L1_redondeado1 >= $comparativo_formato_10) { $alfabetico_L1_redondeado1 = $alfabetico_formato_10;  }
   if ($pro_dec_L1_redondeado1 >= $comparativo_formato_11) { $alfabetico_L1_redondeado1 = $alfabetico_formato_11;  }
   if ($pro_dec_L1_redondeado1 >= $comparativo_formato_12) { $alfabetico_L1_redondeado1 = $alfabetico_formato_12;  }
   echo $alfabetico_L1_redondeado1; } /* cierre alfabetico */

if ($dominio_literal >= 4  ) {  /* literal */
  if ($pro_dec_L1_redondeado1 >= $comparativo_formato_1) { $literal_L1_redondeado1 = $literal_formato_1;  }
  if ($pro_dec_L1_redondeado1 >= $comparativo_formato_2) { $literal_L1_redondeado1 = $literal_formato_2;  }
  if ($pro_dec_L1_redondeado1 >= $comparativo_formato_3) { $literal_L1_redondeado1 = $literal_formato_3;  }
  if ($pro_dec_L1_redondeado1 >= $comparativo_formato_4) { $literal_L1_redondeado1 = $literal_formato_4;  }
  if ($pro_dec_L1_redondeado1 >= $comparativo_formato_5) { $literal_L1_redondeado1 = $literal_formato_5;  }
  if ($pro_dec_L1_redondeado1 >= $comparativo_formato_6) { $literal_L1_redondeado1 = $literal_formato_6;  }
  if ($pro_dec_L1_redondeado1 >= $comparativo_formato_7) { $literal_L1_redondeado1 = $literal_formato_7;  }
  if ($pro_dec_L1_redondeado1 >= $comparativo_formato_8) { $literal_L1_redondeado1 = $literal_formato_8;  }
  if ($pro_dec_L1_redondeado1 >= $comparativo_formato_9) { $literal_L1_redondeado1 = $literal_formato_9;  }
  if ($pro_dec_L1_redondeado1 >= $comparativo_formato_10) { $literal_L1_redondeado1 = $literal_formato_10;  }
  if ($pro_dec_L1_redondeado1 >= $comparativo_formato_11) { $literal_L1_redondeado1 = $literal_formato_11;  }
  if ($pro_dec_L1_redondeado1 >= $comparativo_formato_12) { $literal_L1_redondeado1 = $literal_formato_12;  } 
  echo $literal_L1_redondeado1; } /* cierre literal */?></b></span></td>  





             <td colspan="5" style="height: 23px; width: 12.5%;">  </td>

            <td class="borde_izq_inf_sup_negro" colspan="3" style="width:7.5%; height: 23px; "BGCOLOR="<?php echo $color2;?>"><b>Promedio 2°L:</b></td>
               
                <td class="borde_inf_y_sup_negro" style="width:2.7%; height: 23px; "BGCOLOR="<?php echo $color2;?>"></td> 

<?php 

$A1_L2 = 0.00000000001;
$A2_L2 = 0.00000000001;
$A3_L2 = 0.00000000001;
$A4_L2 = 0.00000000001;
$A5_L2 = 0.00000000001;
$A6_L2 = 0.00000000001;
$A7_L2 = 0.00000000001;
$A8_L2 = 0.00000000001;
$A9_L2 = 0.00000000001;
$A10_L2 = 0.00000000001;
$A11_L2 = 0.00000000001;
$A12_L2 = 0.00000000001;
$A13_L2 = 0.00000000001;
$A14_L2 = 0.00000000001;


if ($nota_final_A1_L2 >=0.1) {
  $A1_L2 = 1;
}

if ($nota_final_A2_L2 >=0.1) {
  $A2_L2 = 1;
}

if ($nota_final_A3_L2 >=0.1) {
  $A3_L2 = 1;
}

if ($nota_final_A4_L2 >=0.1) {
  $A4_L2 = 1;
}

if ($nota_final_A5_L2 >=0.1) {
  $A5_L2 = 1;
}

if ($nota_final_A6_L2 >=0.1) {
  $A6_L2 = 1;
}

if ($nota_final_A7_L2 >=0.1) {
  $A7_L2 = 1;
}

if ($nota_final_A8_L2 >=0.1) {
  $A8_L2 = 1;
}

if ($nota_final_A9_L2 >=0.1) {
  $A9_L2 = 1;
}

if ($nota_final_A10_L2 >=0.1) {
  $A10_L2 = 1;
}

if ($nota_final_A11_L2 >=0.1) {
  $A11_L2 = 1;
}

if ($nota_final_A12_L2 >=0.1) {
  $A12_L2 = 1;
}


if ($nota_final_A13_L2 >=0.1) {
  $A13_L2 = 1;
}

if ($nota_final_A14_L2 >=0.1) {
  $A14_L2 = 1;
}



$co = 0.00000000001;   /* comodin */

if ($row_datos_controlasign['a_suma'] == 1) { $nota_final_A1_L2_redon_valida = $nota_final_A1_L2_redon; $A1_L2_valida = $A1_L2; } else { $nota_final_A1_L2_redon_valida = 0; $A1_L2_valida = $co; }
if ($row_datos_controlasign['b_suma'] == 1) { $nota_final_A2_L2_redon_valida = $nota_final_A2_L2_redon; $A2_L2_valida = $A2_L2; } else { $nota_final_A2_L2_redon_valida = 0; $A2_L2_valida = $co; }
if ($row_datos_controlasign['c_suma'] == 1) { $nota_final_A3_L2_redon_valida = $nota_final_A3_L2_redon; $A3_L2_valida = $A3_L2; } else { $nota_final_A3_L2_redon_valida = 0; $A3_L2_valida = $co; }
if ($row_datos_controlasign['d_suma'] == 1) { $nota_final_A4_L2_redon_valida = $nota_final_A4_L2_redon; $A4_L2_valida = $A4_L2; } else { $nota_final_A4_L2_redon_valida = 0; $A4_L2_valida = $co; }
if ($row_datos_controlasign['e_suma'] == 1) { $nota_final_A5_L2_redon_valida = $nota_final_A5_L2_redon; $A5_L2_valida = $A5_L2; } else { $nota_final_A5_L2_redon_valida = 0; $A5_L2_valida = $co; }
if ($row_datos_controlasign['f_suma'] == 1) { $nota_final_A6_L2_redon_valida = $nota_final_A6_L2_redon; $A6_L2_valida = $A6_L2; } else { $nota_final_A6_L2_redon_valida = 0; $A6_L2_valida = $co; }
if ($row_datos_controlasign['g_suma'] == 1) { $nota_final_A7_L2_redon_valida = $nota_final_A7_L2_redon; $A7_L2_valida = $A7_L2; } else { $nota_final_A7_L2_redon_valida = 0; $A7_L2_valida = $co; }
if ($row_datos_controlasign['h_suma'] == 1) { $nota_final_A8_L2_redon_valida = $nota_final_A8_L2_redon; $A8_L2_valida = $A8_L2; } else { $nota_final_A8_L2_redon_valida = 0; $A8_L2_valida = $co; }
if ($row_datos_controlasign['i_suma'] == 1) { $nota_final_A9_L2_redon_valida = $nota_final_A9_L2_redon; $A9_L2_valida = $A9_L2; } else { $nota_final_A9_L2_redon_valida = 0; $A9_L2_valida = $co; }
if ($row_datos_controlasign['j_suma'] == 1) { $nota_final_A10_L2_redon_valida = $nota_final_A10_L2_redon; $A10_L2_valida = $A10_L2; } else { $nota_final_A10_L2_redon_valida = 0; $A10_L2_valida = $co; }
if ($row_datos_controlasign['k_suma'] == 1) { $nota_final_A11_L2_redon_valida = $nota_final_A11_L2_redon; $A11_L2_valida = $A11_L2; } else { $nota_final_A11_L2_redon_valida = 0; $A11_L2_valida = $co; }
if ($row_datos_controlasign['l_suma'] == 1) { $nota_final_A12_L2_redon_valida = $nota_final_A12_L2_redon; $A12_L2_valida = $A12_L2; } else { $nota_final_A12_L2_redon_valida = 0; $A12_L2_valida = $co; }
if ($row_datos_controlasign['m_suma'] == 1) { $nota_final_A13_L2_redon_valida = $nota_final_A13_L2_redon; $A13_L2_valida = $A13_L2; } else { $nota_final_A13_L2_redon_valida = 0; $A13_L2_valida = $co; }
if ($row_datos_controlasign['n_suma'] == 1) { $nota_final_A14_L2_redon_valida = $nota_final_A14_L2_redon; $A14_L2_valida = $A14_L2; } else { $nota_final_A14_L2_redon_valida = 0; $A14_L2_valida = $co; }


$el_promedio_divisor_L2 = $A1_L2_valida+$A2_L2_valida+$A3_L2_valida+$A4_L2_valida+$A5_L2_valida+$A6_L2_valida+$A7_L2_valida
                          +$A8_L2_valida+$A9_L2_valida+$A10_L2_valida+$A11_L2_valida+$A12_L2_valida+$A13_L2_valida+$A14_L2_valida; 


$promedio_primer_L2 = ($nota_final_A1_L2_redon_valida + $nota_final_A2_L2_redon_valida + $nota_final_A3_L2_redon_valida + $nota_final_A4_L2_redon_valida + $nota_final_A5_L2_redon_valida
                     + $nota_final_A6_L2_redon_valida + $nota_final_A7_L2_redon_valida + $nota_final_A8_L2_redon_valida + $nota_final_A9_L2_redon_valida + $nota_final_A10_L2_redon_valida
                     + $nota_final_A11_L2_redon_valida + $nota_final_A12_L2_redon_valida   + $nota_final_A13_L2_redon_valida + $nota_final_A14_L2_redon_valida) / $el_promedio_divisor_L2; 


$pro_dec_L2_redondeado1=number_format($promedio_primer_L2, 1, '.', '');  
$pro_dec_L2=number_format($pro_dec_L2_redondeado1);   



                           ?>


<td class="borde_der_inf_sup_negro" style="width:2.7%; font-size: 18px; height: 23px; "BGCOLOR="<?php echo $color2;?>">
<span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $pro_dec_L2;?>">
<b><?php if ($dominio_numerico >= 4 ) {  /* numerico */
       echo $pro_dec_L2_redondeado1;
} /* cierre numerico */
if ($dominio_alfabetico >= 4) {  /* alfabetico */
   if ($pro_dec_L2_redondeado1 >= $comparativo_formato_1) { $alfabetico_L2_redondeado1 = $alfabetico_formato_1;  }
   if ($pro_dec_L2_redondeado1 >= $comparativo_formato_2) { $alfabetico_L2_redondeado1 = $alfabetico_formato_2;  }
   if ($pro_dec_L2_redondeado1 >= $comparativo_formato_3) { $alfabetico_L2_redondeado1 = $alfabetico_formato_3;  }
   if ($pro_dec_L2_redondeado1 >= $comparativo_formato_4) { $alfabetico_L2_redondeado1 = $alfabetico_formato_4;  }
   if ($pro_dec_L2_redondeado1 >= $comparativo_formato_5) { $alfabetico_L2_redondeado1 = $alfabetico_formato_5;  }
   if ($pro_dec_L2_redondeado1 >= $comparativo_formato_6) { $alfabetico_L2_redondeado1 = $alfabetico_formato_6;  }
   if ($pro_dec_L2_redondeado1 >= $comparativo_formato_7) { $alfabetico_L2_redondeado1 = $alfabetico_formato_7;  }
   if ($pro_dec_L2_redondeado1 >= $comparativo_formato_8) { $alfabetico_L2_redondeado1 = $alfabetico_formato_8;  }
   if ($pro_dec_L2_redondeado1 >= $comparativo_formato_9) { $alfabetico_L2_redondeado1 = $alfabetico_formato_9;  }
   if ($pro_dec_L2_redondeado1 >= $comparativo_formato_10) { $alfabetico_L2_redondeado1 = $alfabetico_formato_10;  }
   if ($pro_dec_L2_redondeado1 >= $comparativo_formato_11) { $alfabetico_L2_redondeado1 = $alfabetico_formato_11;  }
   if ($pro_dec_L2_redondeado1 >= $comparativo_formato_12) { $alfabetico_L2_redondeado1 = $alfabetico_formato_12;  }
   echo $alfabetico_L2_redondeado1; } /* cierre alfabetico */

if ($dominio_literal >= 4 ) {  /* literal */
  if ($pro_dec_L2_redondeado1 >= $comparativo_formato_1) { $literal_L2_redondeado1 = $literal_formato_1;  }
  if ($pro_dec_L2_redondeado1 >= $comparativo_formato_2) { $literal_L2_redondeado1 = $literal_formato_2;  }
  if ($pro_dec_L2_redondeado1 >= $comparativo_formato_3) { $literal_L2_redondeado1 = $literal_formato_3;  }
  if ($pro_dec_L2_redondeado1 >= $comparativo_formato_4) { $literal_L2_redondeado1 = $literal_formato_4;  }
  if ($pro_dec_L2_redondeado1 >= $comparativo_formato_5) { $literal_L2_redondeado1 = $literal_formato_5;  }
  if ($pro_dec_L2_redondeado1 >= $comparativo_formato_6) { $literal_L2_redondeado1 = $literal_formato_6;  }
  if ($pro_dec_L2_redondeado1 >= $comparativo_formato_7) { $literal_L2_redondeado1 = $literal_formato_7;  }
  if ($pro_dec_L2_redondeado1 >= $comparativo_formato_8) { $literal_L2_redondeado1 = $literal_formato_8;  }
  if ($pro_dec_L2_redondeado1 >= $comparativo_formato_9) { $literal_L2_redondeado1 = $literal_formato_9;  }
  if ($pro_dec_L2_redondeado1 >= $comparativo_formato_10) { $literal_L2_redondeado1 = $literal_formato_10;  }
  if ($pro_dec_L2_redondeado1 >= $comparativo_formato_11) { $literal_L2_redondeado1 = $literal_formato_11;  }
  if ($pro_dec_L2_redondeado1 >= $comparativo_formato_12) { $literal_L2_redondeado1 = $literal_formato_12;  } 
  echo $literal_L2_redondeado1; } /* cierre literal */?></b></span></td> 


             <td colspan="5" style="height: 23px; width: 12.5%;">  </td>

              <td class="borde_izq_inf_sup_negro" colspan="3" style="width:7.5%; height: 23px; "BGCOLOR="<?php echo $color3;?>"><b>Promedio 3°L:</b></td>
               
                <td class="borde_inf_y_sup_negro" style="width:2.7%; height: 23px; "BGCOLOR="<?php echo $color3;?>"></td> 

<?php 

$A1_L3 = 0.00000000001;
$A2_L3 = 0.00000000001;
$A3_L3 = 0.00000000001;
$A4_L3 = 0.00000000001;
$A5_L3 = 0.00000000001;
$A6_L3 = 0.00000000001;
$A7_L3 = 0.00000000001;
$A8_L3 = 0.00000000001;
$A9_L3 = 0.00000000001;
$A10_L3 = 0.00000000001;
$A11_L3 = 0.00000000001;
$A12_L3 = 0.00000000001;
$A13_L3 = 0.00000000001;
$A14_L3 = 0.00000000001;


if ($nota_final_A1_L3 >=0.1) {
  $A1_L3 = 1;
}

if ($nota_final_A2_L3 >=0.1) {
  $A2_L3 = 1;
}

if ($nota_final_A3_L3 >=0.1) {
  $A3_L3 = 1;
}

if ($nota_final_A4_L3 >=0.1) {
  $A4_L3 = 1;
}

if ($nota_final_A5_L3 >=0.1) {
  $A5_L3 = 1;
}

if ($nota_final_A6_L3 >=0.1) {
  $A6_L3 = 1;
}

if ($nota_final_A7_L3 >=0.1) {
  $A7_L3 = 1;
}

if ($nota_final_A8_L3 >=0.1) {
  $A8_L3 = 1;
}

if ($nota_final_A9_L3 >=0.1) {
  $A9_L3 = 1;
}

if ($nota_final_A10_L3 >=0.1) {
  $A10_L3 = 1;
}

if ($nota_final_A11_L3 >=0.1) {
  $A11_L3 = 1;
}

if ($nota_final_A12_L3 >=0.1) {
  $A12_L3 = 1;
}

if ($nota_final_A13_L3 >=0.1) {
  $A13_L3 = 1;
}

if ($nota_final_A14_L3 >=0.1) {
  $A14_L3 = 1;
}


$co = 0.00000000001;   /* comodin */

if ($row_datos_controlasign['a_suma'] == 1) { $nota_final_A1_L3_redon_valida = $nota_final_A1_L3_redon; $A1_L3_valida = $A1_L3; } else { $nota_final_A1_L3_redon_valida = 0; $A1_L3_valida = $co; }
if ($row_datos_controlasign['b_suma'] == 1) { $nota_final_A2_L3_redon_valida = $nota_final_A2_L3_redon; $A2_L3_valida = $A2_L3; } else { $nota_final_A2_L3_redon_valida = 0; $A2_L3_valida = $co; }
if ($row_datos_controlasign['c_suma'] == 1) { $nota_final_A3_L3_redon_valida = $nota_final_A3_L3_redon; $A3_L3_valida = $A3_L3; } else { $nota_final_A3_L3_redon_valida = 0; $A3_L3_valida = $co; }
if ($row_datos_controlasign['d_suma'] == 1) { $nota_final_A4_L3_redon_valida = $nota_final_A4_L3_redon; $A4_L3_valida = $A4_L3; } else { $nota_final_A4_L3_redon_valida = 0; $A4_L3_valida = $co; }
if ($row_datos_controlasign['e_suma'] == 1) { $nota_final_A5_L3_redon_valida = $nota_final_A5_L3_redon; $A5_L3_valida = $A5_L3; } else { $nota_final_A5_L3_redon_valida = 0; $A5_L3_valida = $co; }
if ($row_datos_controlasign['f_suma'] == 1) { $nota_final_A6_L3_redon_valida = $nota_final_A6_L3_redon; $A6_L3_valida = $A6_L3; } else { $nota_final_A6_L3_redon_valida = 0; $A6_L3_valida = $co; }
if ($row_datos_controlasign['g_suma'] == 1) { $nota_final_A7_L3_redon_valida = $nota_final_A7_L3_redon; $A7_L3_valida = $A7_L3; } else { $nota_final_A7_L3_redon_valida = 0; $A7_L3_valida = $co; }
if ($row_datos_controlasign['h_suma'] == 1) { $nota_final_A8_L3_redon_valida = $nota_final_A8_L3_redon; $A8_L3_valida = $A8_L3; } else { $nota_final_A8_L3_redon_valida = 0; $A8_L3_valida = $co; }
if ($row_datos_controlasign['i_suma'] == 1) { $nota_final_A9_L3_redon_valida = $nota_final_A9_L3_redon; $A9_L3_valida = $A9_L3; } else { $nota_final_A9_L3_redon_valida = 0; $A9_L3_valida = $co; }
if ($row_datos_controlasign['j_suma'] == 1) { $nota_final_A10_L3_redon_valida = $nota_final_A10_L3_redon; $A10_L3_valida = $A10_L3; } else { $nota_final_A10_L3_redon_valida = 0; $A10_L3_valida = $co; }
if ($row_datos_controlasign['k_suma'] == 1) { $nota_final_A11_L3_redon_valida = $nota_final_A11_L3_redon; $A11_L3_valida = $A11_L3; } else { $nota_final_A11_L3_redon_valida = 0; $A11_L3_valida = $co; }
if ($row_datos_controlasign['l_suma'] == 1) { $nota_final_A12_L3_redon_valida = $nota_final_A12_L3_redon; $A12_L3_valida = $A12_L3; } else { $nota_final_A12_L3_redon_valida = 0; $A12_L3_valida = $co; }
if ($row_datos_controlasign['m_suma'] == 1) { $nota_final_A13_L3_redon_valida = $nota_final_A13_L3_redon; $A13_L3_valida = $A13_L3; } else { $nota_final_A13_L3_redon_valida = 0; $A13_L3_valida = $co; }
if ($row_datos_controlasign['n_suma'] == 1) { $nota_final_A14_L3_redon_valida = $nota_final_A14_L3_redon; $A14_L3_valida = $A14_L3; } else { $nota_final_A14_L3_redon_valida = 0; $A14_L3_valida = $co; }


$el_promedio_divisor_L3 = $A1_L3_valida+$A2_L3_valida+$A3_L3_valida+$A4_L3_valida+$A5_L3_valida+$A6_L3_valida+$A7_L3_valida
                          +$A8_L3_valida+$A9_L3_valida+$A10_L3_valida+$A11_L3_valida+$A12_L3_valida+$A13_L3_valida+$A14_L3_valida; 


$promedio_primer_L3 = ($nota_final_A1_L3_redon_valida + $nota_final_A2_L3_redon_valida + $nota_final_A3_L3_redon_valida + $nota_final_A4_L3_redon_valida + $nota_final_A5_L3_redon_valida
                     + $nota_final_A6_L3_redon_valida + $nota_final_A7_L3_redon_valida + $nota_final_A8_L3_redon_valida + $nota_final_A9_L3_redon_valida + $nota_final_A10_L3_redon_valida
                     + $nota_final_A11_L3_redon_valida + $nota_final_A12_L3_redon_valida   + $nota_final_A13_L3_redon_valida + $nota_final_A14_L3_redon_valida) / $el_promedio_divisor_L3; 


$pro_dec_L3_redondeado1=number_format($promedio_primer_L3, 1, '.', '');  
$pro_dec_L3=number_format($pro_dec_L3_redondeado1);   

                            ?>


<td class="borde_der_inf_sup_negro" style="width:2.7%; font-size: 18px; height: 23px; "BGCOLOR="<?php echo $color3;?>">
<span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php echo $pro_dec_L3;?>">
<b><?php if ($dominio_numerico >= 4  ) {  /* numerico */
       echo $pro_dec_L3_redondeado1;
} /* cierre numerico */
if ($dominio_alfabetico >= 4) {  /* alfabetico */
   if ($pro_dec_L3_redondeado1 >= $comparativo_formato_1) { $alfabetico_L3_redondeado1 = $alfabetico_formato_1;  }
   if ($pro_dec_L3_redondeado1 >= $comparativo_formato_2) { $alfabetico_L3_redondeado1 = $alfabetico_formato_2;  }
   if ($pro_dec_L3_redondeado1 >= $comparativo_formato_3) { $alfabetico_L3_redondeado1 = $alfabetico_formato_3;  }
   if ($pro_dec_L3_redondeado1 >= $comparativo_formato_4) { $alfabetico_L3_redondeado1 = $alfabetico_formato_4;  }
   if ($pro_dec_L3_redondeado1 >= $comparativo_formato_5) { $alfabetico_L3_redondeado1 = $alfabetico_formato_5;  }
   if ($pro_dec_L3_redondeado1 >= $comparativo_formato_6) { $alfabetico_L3_redondeado1 = $alfabetico_formato_6;  }
   if ($pro_dec_L3_redondeado1 >= $comparativo_formato_7) { $alfabetico_L3_redondeado1 = $alfabetico_formato_7;  }
   if ($pro_dec_L3_redondeado1 >= $comparativo_formato_8) { $alfabetico_L3_redondeado1 = $alfabetico_formato_8;  }
   if ($pro_dec_L3_redondeado1 >= $comparativo_formato_9) { $alfabetico_L3_redondeado1 = $alfabetico_formato_9;  }
   if ($pro_dec_L3_redondeado1 >= $comparativo_formato_10) { $alfabetico_L3_redondeado1 = $alfabetico_formato_10;  }
   if ($pro_dec_L3_redondeado1 >= $comparativo_formato_11) { $alfabetico_L3_redondeado1 = $alfabetico_formato_11;  }
   if ($pro_dec_L3_redondeado1 >= $comparativo_formato_12) { $alfabetico_L3_redondeado1 = $alfabetico_formato_12;  }
   echo $alfabetico_L3_redondeado1; } /* cierre alfabetico */

if ($dominio_literal >= 4 ) {  /* literal */
  if ($pro_dec_L3_redondeado1 >= $comparativo_formato_1) { $literal_L3_redondeado1 = $literal_formato_1;  }
  if ($pro_dec_L3_redondeado1 >= $comparativo_formato_2) { $literal_L3_redondeado1 = $literal_formato_2;  }
  if ($pro_dec_L3_redondeado1 >= $comparativo_formato_3) { $literal_L3_redondeado1 = $literal_formato_3;  }
  if ($pro_dec_L3_redondeado1 >= $comparativo_formato_4) { $literal_L3_redondeado1 = $literal_formato_4;  }
  if ($pro_dec_L3_redondeado1 >= $comparativo_formato_5) { $literal_L3_redondeado1 = $literal_formato_5;  }
  if ($pro_dec_L3_redondeado1 >= $comparativo_formato_6) { $literal_L3_redondeado1 = $literal_formato_6;  }
  if ($pro_dec_L3_redondeado1 >= $comparativo_formato_7) { $literal_L3_redondeado1 = $literal_formato_7;  }
  if ($pro_dec_L3_redondeado1 >= $comparativo_formato_8) { $literal_L3_redondeado1 = $literal_formato_8;  }
  if ($pro_dec_L3_redondeado1 >= $comparativo_formato_9) { $literal_L3_redondeado1 = $literal_formato_9;  }
  if ($pro_dec_L3_redondeado1 >= $comparativo_formato_10) { $literal_L3_redondeado1 = $literal_formato_10;  }
  if ($pro_dec_L3_redondeado1 >= $comparativo_formato_11) { $literal_L3_redondeado1 = $literal_formato_11;  }
  if ($pro_dec_L3_redondeado1 >= $comparativo_formato_12) { $literal_L3_redondeado1 = $literal_formato_12;  } 
  echo $literal_L3_redondeado1; } /* cierre literal */?></b></span></td>  


             <td colspan="3" style="height: 23px; width: 9.4%;">  </td>



<?php

$def_pro_g1 = 0.0000000001;
$def_pro_g2 = 0.0000000001;
$def_pro_g3 = 0.0000000001;
$def_pro_g4 = 0.0000000001;
$def_pro_g5 = 0.0000000001;
$def_pro_g6 = 0.0000000001;
$def_pro_g7 = 0.0000000001;
$def_pro_g8 = 0.0000000001;
$def_pro_g9 = 0.0000000001;
$def_pro_g10 = 0.0000000001;
$def_pro_g11 = 0.0000000001;
$def_pro_g12 = 0.0000000001;
$def_pro_g13 = 0.0000000001;
$def_pro_g14 = 0.0000000001;


if ($Definitiva_completa_A1_L123 >=0.1) {
$def_pro_g1 = 1;
}

if ($Definitiva_completa_A2_L123 >=0.1) {
$def_pro_g2 = 1;
}

if ($Definitiva_completa_A3_L123 >=0.1) {
$def_pro_g3 = 1;
}

if ($Definitiva_completa_A4_L123 >=0.1) {
$def_pro_g4 = 1;
}

if ($Definitiva_completa_A5_L123 >=0.1) {
$def_pro_g5 = 1;
}

if ($Definitiva_completa_A6_L123 >=0.1) {
$def_pro_g6 = 1;
}

if ($Definitiva_completa_A7_L123 >=0.1) {
$def_pro_g7 = 1;
}

if ($Definitiva_completa_A8_L123 >=0.1) {
$def_pro_g8 = 1;
}

if ($Definitiva_completa_A9_L123 >=0.1) {
$def_pro_g9 = 1;
}

if ($Definitiva_completa_A10_L123 >=0.1) {
$def_pro_g10 = 1;
}

if ($Definitiva_completa_A11_L123 >=0.1) {
$def_pro_g11 = 1;
}

if ($Definitiva_completa_A12_L123 >=0.1) {
$def_pro_g12 = 1;
}

if ($Definitiva_completa_A13_L123 >=0.1) {
$def_pro_g13 = 1;
}

if ($Definitiva_completa_A14_L123 >=0.1) {
$def_pro_g14 = 1;
}



$co = 0.00000000001;   /* comodin */

if ($row_datos_controlasign['a_suma'] == 1) { $Definitiva_completa_A1_L123_valida = $Definitiva_completa_A1_L123; $def_pro_g1_valida = $def_pro_g1; } else { $Definitiva_completa_A1_L123_valida = 0; $def_pro_g1_valida = $co; }
if ($row_datos_controlasign['b_suma'] == 1) { $Definitiva_completa_A2_L123_valida = $Definitiva_completa_A2_L123; $def_pro_g2_valida = $def_pro_g2; } else { $Definitiva_completa_A2_L123_valida = 0; $def_pro_g2_valida = $co; }
if ($row_datos_controlasign['c_suma'] == 1) { $Definitiva_completa_A3_L123_valida = $Definitiva_completa_A3_L123; $def_pro_g3_valida = $def_pro_g3; } else { $Definitiva_completa_A3_L123_valida = 0; $def_pro_g3_valida = $co; }
if ($row_datos_controlasign['d_suma'] == 1) { $Definitiva_completa_A4_L123_valida = $Definitiva_completa_A4_L123; $def_pro_g4_valida = $def_pro_g4; } else { $Definitiva_completa_A4_L123_valida = 0; $def_pro_g4_valida = $co; }
if ($row_datos_controlasign['e_suma'] == 1) { $Definitiva_completa_A5_L123_valida = $Definitiva_completa_A5_L123; $def_pro_g5_valida = $def_pro_g5; } else { $Definitiva_completa_A5_L123_valida = 0; $def_pro_g5_valida = $co; }
if ($row_datos_controlasign['f_suma'] == 1) { $Definitiva_completa_A6_L123_valida = $Definitiva_completa_A6_L123; $def_pro_g6_valida = $def_pro_g6; } else { $Definitiva_completa_A6_L123_valida = 0; $def_pro_g6_valida = $co; }
if ($row_datos_controlasign['g_suma'] == 1) { $Definitiva_completa_A7_L123_valida = $Definitiva_completa_A7_L123; $def_pro_g7_valida = $def_pro_g7; } else { $Definitiva_completa_A7_L123_valida = 0; $def_pro_g7_valida = $co; }
if ($row_datos_controlasign['h_suma'] == 1) { $Definitiva_completa_A8_L123_valida = $Definitiva_completa_A8_L123; $def_pro_g8_valida = $def_pro_g8; } else { $Definitiva_completa_A8_L123_valida = 0; $def_pro_g8_valida = $co; }
if ($row_datos_controlasign['i_suma'] == 1) { $Definitiva_completa_A9_L123_valida = $Definitiva_completa_A9_L123; $def_pro_g9_valida = $def_pro_g9; } else { $Definitiva_completa_A9_L123_valida = 0; $def_pro_g9_valida = $co; }
if ($row_datos_controlasign['j_suma'] == 1) { $Definitiva_completa_A10_L123_valida = $Definitiva_completa_A10_L123; $def_pro_g10_valida = $def_pro_g10; } else { $Definitiva_completa_A10_L123_valida = 0; $def_pro_g10_valida = $co; }
if ($row_datos_controlasign['k_suma'] == 1) { $Definitiva_completa_A11_L123_valida = $Definitiva_completa_A11_L123; $def_pro_g11_valida = $def_pro_g11; } else { $Definitiva_completa_A11_L123_valida = 0; $def_pro_g11_valida = $co; }
if ($row_datos_controlasign['l_suma'] == 1) { $Definitiva_completa_A12_L123_valida = $Definitiva_completa_A12_L123; $def_pro_g12_valida = $def_pro_g12; } else { $Definitiva_completa_A12_L123_valida = 0; $def_pro_g12_valida = $co; }
if ($row_datos_controlasign['m_suma'] == 1) { $Definitiva_completa_A13_L123_valida = $Definitiva_completa_A13_L123; $def_pro_g13_valida = $def_pro_g13; } else { $Definitiva_completa_A13_L123_valida = 0; $def_pro_g13_valida = $co; }
if ($row_datos_controlasign['n_suma'] == 1) { $Definitiva_completa_A14_L123_valida = $Definitiva_completa_A14_L123; $def_pro_g14_valida = $def_pro_g14; } else { $Definitiva_completa_A14_L123_valida = 0; $def_pro_g14_valida = $co; }



$suma_dividendo_total_final_valida = $def_pro_g1_valida+$def_pro_g2_valida+$def_pro_g3_valida+$def_pro_g4_valida+$def_pro_g5_valida+$def_pro_g6_valida
                                   +$def_pro_g7_valida+$def_pro_g8_valida+$def_pro_g9_valida+$def_pro_g10_valida+$def_pro_g11_valida+$def_pro_g12_valida
                                   +$def_pro_g13_valida+$def_pro_g14_valida;

$prom_final_todas_las_asignaturas =($Definitiva_completa_A1_L123_valida+$Definitiva_completa_A2_L123_valida+$Definitiva_completa_A3_L123_valida+$Definitiva_completa_A4_L123_valida+$Definitiva_completa_A5_L123_valida
+$Definitiva_completa_A6_L123_valida+$Definitiva_completa_A7_L123_valida+$Definitiva_completa_A8_L123_valida+$Definitiva_completa_A9_L123_valida+$Definitiva_completa_A10_L123_valida
+$Definitiva_completa_A11_L123_valida+$Definitiva_completa_A12_L123_valida+$Definitiva_completa_A13_L123_valida+$Definitiva_completa_A14_L123_valida )/$suma_dividendo_total_final_valida;


$prom_total_entero_redondeado1 =number_format($prom_final_todas_las_asignaturas, 1, '.', ''); 

$prom_total_entero =number_format($prom_total_entero_redondeado1); 

?>




          <td class="borde_doble_negro" style="width:4.4%; font-size: 18px; height: 23px;"><b>
          	<?php if ($dominio_numerico >= 4 ) {  /* numerico */
       echo $prom_total_entero;
} /* cierre numerico */
if ($dominio_alfabetico >= 4) {  /* alfabetico */
   if ($prom_total_entero >= $comparativo_formato_1) { $alfabetico_total_entero = $alfabetico_formato_1;  }
   if ($prom_total_entero >= $comparativo_formato_2) { $alfabetico_total_entero = $alfabetico_formato_2;  }
   if ($prom_total_entero >= $comparativo_formato_3) { $alfabetico_total_entero = $alfabetico_formato_3;  }
   if ($prom_total_entero >= $comparativo_formato_4) { $alfabetico_total_entero = $alfabetico_formato_4;  }
   if ($prom_total_entero >= $comparativo_formato_5) { $alfabetico_total_entero = $alfabetico_formato_5;  }
   if ($prom_total_entero >= $comparativo_formato_6) { $alfabetico_total_entero = $alfabetico_formato_6;  }
   if ($prom_total_entero >= $comparativo_formato_7) { $alfabetico_total_entero = $alfabetico_formato_7;  }
   if ($prom_total_entero >= $comparativo_formato_8) { $alfabetico_total_entero = $alfabetico_formato_8;  }
   if ($prom_total_entero >= $comparativo_formato_9) { $alfabetico_total_entero = $alfabetico_formato_9;  }
   if ($prom_total_entero >= $comparativo_formato_10) { $alfabetico_total_entero = $alfabetico_formato_10;  }
   if ($prom_total_entero >= $comparativo_formato_11) { $alfabetico_total_entero = $alfabetico_formato_11;  }
   if ($prom_total_entero >= $comparativo_formato_12) { $alfabetico_total_entero = $alfabetico_formato_12;  }
   echo $alfabetico_total_entero; } /* cierre alfabetico */

if ($dominio_literal >= 4 ) {  /* literal */
  if ($prom_total_entero >= $comparativo_formato_1) { $literal_total_entero = $literal_formato_1;  }
  if ($prom_total_entero >= $comparativo_formato_2) { $literal_total_entero = $literal_formato_2;  }
  if ($prom_total_entero >= $comparativo_formato_3) { $literal_total_entero = $literal_formato_3;  }
  if ($prom_total_entero >= $comparativo_formato_4) { $literal_total_entero = $literal_formato_4;  }
  if ($prom_total_entero >= $comparativo_formato_5) { $literal_total_entero = $literal_formato_5;  }
  if ($prom_total_entero >= $comparativo_formato_6) { $literal_total_entero = $literal_formato_6;  }
  if ($prom_total_entero >= $comparativo_formato_7) { $literal_total_entero = $literal_formato_7;  }
  if ($prom_total_entero >= $comparativo_formato_8) { $literal_total_entero = $literal_formato_8;  }
  if ($prom_total_entero >= $comparativo_formato_9) { $literal_total_entero = $literal_formato_9;  }
  if ($prom_total_entero >= $comparativo_formato_10) { $literal_total_entero = $literal_formato_10;  }
  if ($prom_total_entero >= $comparativo_formato_11) { $literal_total_entero = $literal_formato_11;  }
  if ($prom_total_entero >= $comparativo_formato_12) { $literal_total_entero = $literal_formato_12;  } 
  echo $literal_total_entero; } /* cierre literal */?></b></td>
            <th  style="width:5%; height: 23px;"></th>    



            </tr>

                             
          
                           
        </table>   







</div> <!-- cierre col unica tabla -->

</div> <!-- cierre form-row -->
</div> <!--  cierre card body-->
</div> <!--  cierre card-->



<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->





























<div class="card border-success ml-4 mt-5 mr-4 mb-4">
  <div class="card-header text-white bg-secondary" style='text-align:center;vertical-align:middle; font-size: 22px;'>Porcentaje a evaluar en cada actividad ó contenido por asignatura, área o materia - Indicados en el Plan de Evaluación.</div>

<div class="card-body">


<div class="form-row" >   <!--  fila inferior tablas pequeñas-->

<div class="col-md-12 mb-1">  <!--  primera tabla superior asignaturas-->

       
 <table class="" style='text-align:center;vertical-align:middle; width:100%;'>   


            <tr>

            <td class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color0;?>" style="height: 23px; width: 5%; font-size: 14px;"><b>Asig.</b><br><b>Área</b><br><b>Materia</b></td>

            <td style="height: 23px; width: 2.5%;">  </td>

             <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color1;?>" style="width:17.5%;height:23px;">Planificación 1° Lapso - Momento</th>

             <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color1;?>" style="width:5.4%;font-size:14px;height:23px;">% Total</th>

             <td style="height: 23px; width: 2.5%;">

             <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color2;?>" style="width:17.5%;height:23px;">Planificación 2° Lapso - Momento</th>

             <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color2;?>" style="width:5.4%;font-size:14px;height:23px;">% Total</th>

             <td style="height: 23px; width: 2.5%;">

             <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color3;?>" style="width:17.5%;height:23px;">Planificación 3° Lapso - Momento</th>

             <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color3;?>" style="width:5.4%;font-size:14px;height:23px;">% Total</th>

             <td rowspan="3" style="height: 23px; width: 18.8%;">
  



            </tr>




            <tr>
            	         

            <td style="height: 23px; width: 2.5%;">  </td>

              <td class="borde_negro" colspan="7" style="width:17.5%; height: 23px;">Actividad - Contenido</td>


             <td style="height: 23px; width: 2.5%;">

           <td class="borde_negro" colspan="7" style="width:17.5%; height: 23px;">Actividad - Contenido</td>


             <td style="height: 23px; width: 2.5%;">

             <td class="borde_negro" colspan="7" style="width:17.5%; height: 23px;">Actividad - Contenido</td>


            
  

            </tr>
           


            <tr>
            	         

            <td style="height: 23px; width: 2.5%;">  </td>

                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >1</th>  
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >2</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >3</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >4</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >5</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >6</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >7</th>


             <td style="height: 23px; width: 2.5%;">

                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >1</th>  
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >2</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >3</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >4</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >5</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >6</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >7</th>


             <td style="height: 23px; width: 2.5%;">

                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >1</th>  
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >2</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >3</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >4</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >5</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >6</th>
                <th class="borde_negro" style="width:2.5%; font-size: 12px; height:23px;" >7</th>


            


  

            </tr>


            <tr>
            	         <td style="height: 23px;">
            </tr>






  <tr>      <!-- comienzo de filas de materia con % -->
            	         


              <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['a_abrev'];?>

              <span style="color:red; font-size: 16px;"><b> <?php

               $a_ayuda = '';

                if ($row_datos_controlasign['a_suma'] !=1) {
                  $a_ayuda = '#';
               }

                echo $a_ayuda;?></b></span>


                </td>

            <td style="height: 23px; width: 2.5%;">  </td>


           <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A11"]; if ($row_datos_de_la_asignaturas["A11"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A12"]; if ($row_datos_de_la_asignaturas["A12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A13"]; if ($row_datos_de_la_asignaturas["A13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A14"]; if ($row_datos_de_la_asignaturas["A14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A15"]; if ($row_datos_de_la_asignaturas["A15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A16"]; if ($row_datos_de_la_asignaturas["A16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A17"]; if ($row_datos_de_la_asignaturas["A17"]>=0.1) {
                	   echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_A1_L1 = $row_datos_de_la_asignaturas["A11"]+$row_datos_de_la_asignaturas["A12"]
+$row_datos_de_la_asignaturas["A13"]+$row_datos_de_la_asignaturas["A14"]+$row_datos_de_la_asignaturas["A15"]+$row_datos_de_la_asignaturas["A16"]+
$row_datos_de_la_asignaturas["A17"]; echo $total_A1_L1; if ($total_A1_L1>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">


  <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A21"]; if ($row_datos_de_la_asignaturas["A21"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A22"]; if ($row_datos_de_la_asignaturas["A22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A23"]; if ($row_datos_de_la_asignaturas["A23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A24"]; if ($row_datos_de_la_asignaturas["A24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A25"]; if ($row_datos_de_la_asignaturas["A25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A26"]; if ($row_datos_de_la_asignaturas["A26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A27"]; if ($row_datos_de_la_asignaturas["A27"]>=0.1) {
                	   echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_A1_L2 = $row_datos_de_la_asignaturas["A21"]+$row_datos_de_la_asignaturas["A22"]
+$row_datos_de_la_asignaturas["A23"]+$row_datos_de_la_asignaturas["A24"]+$row_datos_de_la_asignaturas["A25"]+$row_datos_de_la_asignaturas["A26"]+
$row_datos_de_la_asignaturas["A27"]; echo $total_A1_L2; if ($total_A1_L2>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">



             	<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A31"]; if ($row_datos_de_la_asignaturas["A31"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A32"]; if ($row_datos_de_la_asignaturas["A32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A33"]; if ($row_datos_de_la_asignaturas["A33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A34"]; if ($row_datos_de_la_asignaturas["A34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A35"]; if ($row_datos_de_la_asignaturas["A35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A36"]; if ($row_datos_de_la_asignaturas["A36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A37"]; if ($row_datos_de_la_asignaturas["A37"]>=0.1) {
                	   echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_A1_L3 = $row_datos_de_la_asignaturas["A31"]+$row_datos_de_la_asignaturas["A32"]
+$row_datos_de_la_asignaturas["A33"]+$row_datos_de_la_asignaturas["A34"]+$row_datos_de_la_asignaturas["A35"]+$row_datos_de_la_asignaturas["A36"]+
$row_datos_de_la_asignaturas["A37"]; echo $total_A1_L3; if ($total_A1_L3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>





<tr>      <!-- comienzo de filas de materia con % -->
                       


              <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['b_abrev'];?>
              	
<span style="color:red; font-size: 16px;"><b> <?php

               $b_ayuda = '';

                if ($row_datos_controlasign['b_suma'] !=1) {
                  $b_ayuda = '#';
               }

                echo $b_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 2.5%;">  </td>


           <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B11"]; if ($row_datos_de_la_asignaturas["B11"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B12"]; if ($row_datos_de_la_asignaturas["B12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B13"]; if ($row_datos_de_la_asignaturas["B13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B14"]; if ($row_datos_de_la_asignaturas["B14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B15"]; if ($row_datos_de_la_asignaturas["B15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B16"]; if ($row_datos_de_la_asignaturas["B16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B17"]; if ($row_datos_de_la_asignaturas["B17"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_B1_L1 = $row_datos_de_la_asignaturas["B11"]+$row_datos_de_la_asignaturas["B12"]
+$row_datos_de_la_asignaturas["B13"]+$row_datos_de_la_asignaturas["B14"]+$row_datos_de_la_asignaturas["B15"]+$row_datos_de_la_asignaturas["B16"]+
$row_datos_de_la_asignaturas["B17"]; echo $total_B1_L1; if ($total_B1_L1>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">


  <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B21"]; if ($row_datos_de_la_asignaturas["B21"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B22"]; if ($row_datos_de_la_asignaturas["B22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B23"]; if ($row_datos_de_la_asignaturas["B23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B24"]; if ($row_datos_de_la_asignaturas["B24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B25"]; if ($row_datos_de_la_asignaturas["B25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B26"]; if ($row_datos_de_la_asignaturas["B26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B27"]; if ($row_datos_de_la_asignaturas["B27"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_B1_L2 = $row_datos_de_la_asignaturas["B21"]+$row_datos_de_la_asignaturas["B22"]
+$row_datos_de_la_asignaturas["B23"]+$row_datos_de_la_asignaturas["B24"]+$row_datos_de_la_asignaturas["B25"]+$row_datos_de_la_asignaturas["B26"]+
$row_datos_de_la_asignaturas["B27"]; echo $total_B1_L2; if ($total_B1_L2>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">



              <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B31"]; if ($row_datos_de_la_asignaturas["B31"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B32"]; if ($row_datos_de_la_asignaturas["B32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B33"]; if ($row_datos_de_la_asignaturas["B33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B34"]; if ($row_datos_de_la_asignaturas["B34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B35"]; if ($row_datos_de_la_asignaturas["B35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B36"]; if ($row_datos_de_la_asignaturas["B36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B37"]; if ($row_datos_de_la_asignaturas["B37"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_B1_L3 = $row_datos_de_la_asignaturas["B31"]+$row_datos_de_la_asignaturas["B32"]
+$row_datos_de_la_asignaturas["B33"]+$row_datos_de_la_asignaturas["B34"]+$row_datos_de_la_asignaturas["B35"]+$row_datos_de_la_asignaturas["B36"]+
$row_datos_de_la_asignaturas["B37"]; echo $total_B1_L3; if ($total_B1_L3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>




  <tr>      <!-- comienzo de filas de materia con % -->
                       


              <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['c_abrev'];?>
              	

<span style="color:red; font-size: 16px;"><b> <?php

               $c_ayuda = '';

                if ($row_datos_controlasign['c_suma'] !=1) {
                  $c_ayuda = '#';
               }

                echo $c_ayuda;?></b></span>


              </td>

            <td style="height: 23px; width: 2.5%;">  </td>


           <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C11"]; if ($row_datos_de_la_asignaturas["C11"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C12"]; if ($row_datos_de_la_asignaturas["C12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C13"]; if ($row_datos_de_la_asignaturas["C13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C14"]; if ($row_datos_de_la_asignaturas["C14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C15"]; if ($row_datos_de_la_asignaturas["C15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C16"]; if ($row_datos_de_la_asignaturas["C16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C17"]; if ($row_datos_de_la_asignaturas["C17"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_C1_L1 = $row_datos_de_la_asignaturas["C11"]+$row_datos_de_la_asignaturas["C12"]
+$row_datos_de_la_asignaturas["C13"]+$row_datos_de_la_asignaturas["C14"]+$row_datos_de_la_asignaturas["C15"]+$row_datos_de_la_asignaturas["C16"]+
$row_datos_de_la_asignaturas["C17"]; echo $total_C1_L1; if ($total_C1_L1>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">


  <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C21"]; if ($row_datos_de_la_asignaturas["C21"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C22"]; if ($row_datos_de_la_asignaturas["C22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C23"]; if ($row_datos_de_la_asignaturas["C23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C24"]; if ($row_datos_de_la_asignaturas["C24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C25"]; if ($row_datos_de_la_asignaturas["C25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C26"]; if ($row_datos_de_la_asignaturas["C26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C27"]; if ($row_datos_de_la_asignaturas["C27"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_C1_L2 = $row_datos_de_la_asignaturas["C21"]+$row_datos_de_la_asignaturas["C22"]
+$row_datos_de_la_asignaturas["C23"]+$row_datos_de_la_asignaturas["C24"]+$row_datos_de_la_asignaturas["C25"]+$row_datos_de_la_asignaturas["C26"]+
$row_datos_de_la_asignaturas["C27"]; echo $total_C1_L2; if ($total_C1_L2>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">



              <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C31"]; if ($row_datos_de_la_asignaturas["C31"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C32"]; if ($row_datos_de_la_asignaturas["C32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C33"]; if ($row_datos_de_la_asignaturas["C33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C34"]; if ($row_datos_de_la_asignaturas["C34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C35"]; if ($row_datos_de_la_asignaturas["C35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C36"]; if ($row_datos_de_la_asignaturas["C36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C37"]; if ($row_datos_de_la_asignaturas["C37"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_C1_L3 = $row_datos_de_la_asignaturas["C31"]+$row_datos_de_la_asignaturas["C32"]
+$row_datos_de_la_asignaturas["C33"]+$row_datos_de_la_asignaturas["C34"]+$row_datos_de_la_asignaturas["C35"]+$row_datos_de_la_asignaturas["C36"]+
$row_datos_de_la_asignaturas["C37"]; echo $total_C1_L3; if ($total_C1_L3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>



            <tr>      <!-- comienzo de filas de materia con % -->
                       


              <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['d_abrev'];?>
              	
<span style="color:red; font-size: 16px;"><b> <?php

               $d_ayuda = '';

                if ($row_datos_controlasign['d_suma'] !=1) {
                  $d_ayuda = '#';
               }

                echo $d_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 2.5%;">  </td>


           <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D11"]; if ($row_datos_de_la_asignaturas["D11"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D12"]; if ($row_datos_de_la_asignaturas["D12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D13"]; if ($row_datos_de_la_asignaturas["D13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D14"]; if ($row_datos_de_la_asignaturas["D14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D15"]; if ($row_datos_de_la_asignaturas["D15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D16"]; if ($row_datos_de_la_asignaturas["D16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D17"]; if ($row_datos_de_la_asignaturas["D17"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_D1_L1 = $row_datos_de_la_asignaturas["D11"]+$row_datos_de_la_asignaturas["D12"]
+$row_datos_de_la_asignaturas["D13"]+$row_datos_de_la_asignaturas["D14"]+$row_datos_de_la_asignaturas["D15"]+$row_datos_de_la_asignaturas["D16"]+
$row_datos_de_la_asignaturas["D17"]; echo $total_D1_L1; if ($total_D1_L1>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">


  <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D21"]; if ($row_datos_de_la_asignaturas["D21"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D22"]; if ($row_datos_de_la_asignaturas["D22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D23"]; if ($row_datos_de_la_asignaturas["D23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D24"]; if ($row_datos_de_la_asignaturas["D24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D25"]; if ($row_datos_de_la_asignaturas["D25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D26"]; if ($row_datos_de_la_asignaturas["D26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D27"]; if ($row_datos_de_la_asignaturas["D27"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_D1_L2 = $row_datos_de_la_asignaturas["D21"]+$row_datos_de_la_asignaturas["D22"]
+$row_datos_de_la_asignaturas["D23"]+$row_datos_de_la_asignaturas["D24"]+$row_datos_de_la_asignaturas["D25"]+$row_datos_de_la_asignaturas["D26"]+
$row_datos_de_la_asignaturas["D27"]; echo $total_D1_L2; if ($total_D1_L2>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">



              <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D31"]; if ($row_datos_de_la_asignaturas["D31"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D32"]; if ($row_datos_de_la_asignaturas["D32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D33"]; if ($row_datos_de_la_asignaturas["D33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D34"]; if ($row_datos_de_la_asignaturas["D34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D35"]; if ($row_datos_de_la_asignaturas["D35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D36"]; if ($row_datos_de_la_asignaturas["D36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D37"]; if ($row_datos_de_la_asignaturas["D37"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_D1_L3 = $row_datos_de_la_asignaturas["D31"]+$row_datos_de_la_asignaturas["D32"]
+$row_datos_de_la_asignaturas["D33"]+$row_datos_de_la_asignaturas["D34"]+$row_datos_de_la_asignaturas["D35"]+$row_datos_de_la_asignaturas["D36"]+
$row_datos_de_la_asignaturas["D37"]; echo $total_D1_L3; if ($total_D1_L3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>




<tr>      <!-- comienzo de filas de materia con % -->
                       


              <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['e_abrev'];?>
              	
<span style="color:red; font-size: 16px;"><b> <?php

               $e_ayuda = '';

                if ($row_datos_controlasign['e_suma'] !=1) {
                  $e_ayuda = '#';
               }

                echo $e_ayuda;?></b></span>


              </td>

            <td style="height: 23px; width: 2.5%;">  </td>


           <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E11"]; if ($row_datos_de_la_asignaturas["E11"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E12"]; if ($row_datos_de_la_asignaturas["E12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E13"]; if ($row_datos_de_la_asignaturas["E13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E14"]; if ($row_datos_de_la_asignaturas["E14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E15"]; if ($row_datos_de_la_asignaturas["E15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E16"]; if ($row_datos_de_la_asignaturas["E16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E17"]; if ($row_datos_de_la_asignaturas["E17"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_E1_L1 = $row_datos_de_la_asignaturas["E11"]+$row_datos_de_la_asignaturas["E12"]
+$row_datos_de_la_asignaturas["E13"]+$row_datos_de_la_asignaturas["E14"]+$row_datos_de_la_asignaturas["E15"]+$row_datos_de_la_asignaturas["E16"]+
$row_datos_de_la_asignaturas["E17"]; echo $total_E1_L1; if ($total_E1_L1>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">


  <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E21"]; if ($row_datos_de_la_asignaturas["E21"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E22"]; if ($row_datos_de_la_asignaturas["E22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E23"]; if ($row_datos_de_la_asignaturas["E23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E24"]; if ($row_datos_de_la_asignaturas["E24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E25"]; if ($row_datos_de_la_asignaturas["E25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E26"]; if ($row_datos_de_la_asignaturas["E26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E27"]; if ($row_datos_de_la_asignaturas["E27"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_E1_L2 = $row_datos_de_la_asignaturas["E21"]+$row_datos_de_la_asignaturas["E22"]
+$row_datos_de_la_asignaturas["E23"]+$row_datos_de_la_asignaturas["E24"]+$row_datos_de_la_asignaturas["E25"]+$row_datos_de_la_asignaturas["E26"]+
$row_datos_de_la_asignaturas["E27"]; echo $total_E1_L2; if ($total_E1_L2>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">



              <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E31"]; if ($row_datos_de_la_asignaturas["E31"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E32"]; if ($row_datos_de_la_asignaturas["E32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E33"]; if ($row_datos_de_la_asignaturas["E33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E34"]; if ($row_datos_de_la_asignaturas["E34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E35"]; if ($row_datos_de_la_asignaturas["E35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E36"]; if ($row_datos_de_la_asignaturas["E36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E37"]; if ($row_datos_de_la_asignaturas["E37"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_E1_L3 = $row_datos_de_la_asignaturas["E31"]+$row_datos_de_la_asignaturas["E32"]
+$row_datos_de_la_asignaturas["E33"]+$row_datos_de_la_asignaturas["E34"]+$row_datos_de_la_asignaturas["E35"]+$row_datos_de_la_asignaturas["E36"]+
$row_datos_de_la_asignaturas["E37"]; echo $total_E1_L3; if ($total_E1_L3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>



            <tr>      <!-- comienzo de filas de materia con % -->
                       


              <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['f_abrev'];?>
              	
<span style="color:red; font-size: 16px;"><b> <?php

               $f_ayuda = '';

                if ($row_datos_controlasign['f_suma'] !=1) {
                  $f_ayuda = '#';
               }

                echo $f_ayuda;?></b></span>


              </td>

            <td style="height: 23px; width: 2.5%;">  </td>


           <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F11"]; if ($row_datos_de_la_asignaturas["F11"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F12"]; if ($row_datos_de_la_asignaturas["F12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F13"]; if ($row_datos_de_la_asignaturas["F13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F14"]; if ($row_datos_de_la_asignaturas["F14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F15"]; if ($row_datos_de_la_asignaturas["F15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F16"]; if ($row_datos_de_la_asignaturas["F16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F17"]; if ($row_datos_de_la_asignaturas["F17"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_F1_L1 = $row_datos_de_la_asignaturas["F11"]+$row_datos_de_la_asignaturas["F12"]
+$row_datos_de_la_asignaturas["F13"]+$row_datos_de_la_asignaturas["F14"]+$row_datos_de_la_asignaturas["F15"]+$row_datos_de_la_asignaturas["F16"]+
$row_datos_de_la_asignaturas["F17"]; echo $total_F1_L1; if ($total_F1_L1>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">


  <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F21"]; if ($row_datos_de_la_asignaturas["F21"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F22"]; if ($row_datos_de_la_asignaturas["F22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F23"]; if ($row_datos_de_la_asignaturas["F23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F24"]; if ($row_datos_de_la_asignaturas["F24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F25"]; if ($row_datos_de_la_asignaturas["F25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F26"]; if ($row_datos_de_la_asignaturas["F26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F27"]; if ($row_datos_de_la_asignaturas["F27"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_F1_L2 = $row_datos_de_la_asignaturas["F21"]+$row_datos_de_la_asignaturas["F22"]
+$row_datos_de_la_asignaturas["F23"]+$row_datos_de_la_asignaturas["F24"]+$row_datos_de_la_asignaturas["F25"]+$row_datos_de_la_asignaturas["F26"]+
$row_datos_de_la_asignaturas["F27"]; echo $total_F1_L2; if ($total_F1_L2>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">



              <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F31"]; if ($row_datos_de_la_asignaturas["F31"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F32"]; if ($row_datos_de_la_asignaturas["F32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F33"]; if ($row_datos_de_la_asignaturas["F33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F34"]; if ($row_datos_de_la_asignaturas["F34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F35"]; if ($row_datos_de_la_asignaturas["F35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F36"]; if ($row_datos_de_la_asignaturas["F36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F37"]; if ($row_datos_de_la_asignaturas["F37"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_F1_L3 = $row_datos_de_la_asignaturas["F31"]+$row_datos_de_la_asignaturas["F32"]
+$row_datos_de_la_asignaturas["F33"]+$row_datos_de_la_asignaturas["F34"]+$row_datos_de_la_asignaturas["F35"]+$row_datos_de_la_asignaturas["F36"]+
$row_datos_de_la_asignaturas["F37"]; echo $total_F1_L3; if ($total_F1_L3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>



             <tr>      <!-- comienzo de filas de materia con % -->
                       


              <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['g_abrev'];?>
              	
<span style="color:red; font-size: 16px;"><b> <?php

               $g_ayuda = '';

                if ($row_datos_controlasign['g_suma'] !=1) {
                  $g_ayuda = '#';
               }

                echo $g_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 2.5%;">  </td>


           <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G11"]; if ($row_datos_de_la_asignaturas["G11"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G12"]; if ($row_datos_de_la_asignaturas["G12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G13"]; if ($row_datos_de_la_asignaturas["G13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G14"]; if ($row_datos_de_la_asignaturas["G14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G15"]; if ($row_datos_de_la_asignaturas["G15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G16"]; if ($row_datos_de_la_asignaturas["G16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G17"]; if ($row_datos_de_la_asignaturas["G17"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_G1_L1 = $row_datos_de_la_asignaturas["G11"]+$row_datos_de_la_asignaturas["G12"]
+$row_datos_de_la_asignaturas["G13"]+$row_datos_de_la_asignaturas["G14"]+$row_datos_de_la_asignaturas["G15"]+$row_datos_de_la_asignaturas["G16"]+
$row_datos_de_la_asignaturas["G17"]; echo $total_G1_L1; if ($total_G1_L1>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">


  <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G21"]; if ($row_datos_de_la_asignaturas["G21"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G22"]; if ($row_datos_de_la_asignaturas["G22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G23"]; if ($row_datos_de_la_asignaturas["G23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G24"]; if ($row_datos_de_la_asignaturas["G24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G25"]; if ($row_datos_de_la_asignaturas["G25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G26"]; if ($row_datos_de_la_asignaturas["G26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G27"]; if ($row_datos_de_la_asignaturas["G27"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_G1_L2 = $row_datos_de_la_asignaturas["G21"]+$row_datos_de_la_asignaturas["G22"]
+$row_datos_de_la_asignaturas["G23"]+$row_datos_de_la_asignaturas["G24"]+$row_datos_de_la_asignaturas["G25"]+$row_datos_de_la_asignaturas["G26"]+
$row_datos_de_la_asignaturas["G27"]; echo $total_G1_L2; if ($total_G1_L2>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">



              <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G31"]; if ($row_datos_de_la_asignaturas["G31"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G32"]; if ($row_datos_de_la_asignaturas["G32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G33"]; if ($row_datos_de_la_asignaturas["G33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G34"]; if ($row_datos_de_la_asignaturas["G34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G35"]; if ($row_datos_de_la_asignaturas["G35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G36"]; if ($row_datos_de_la_asignaturas["G36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G37"]; if ($row_datos_de_la_asignaturas["G37"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_G1_L3 = $row_datos_de_la_asignaturas["G31"]+$row_datos_de_la_asignaturas["G32"]
+$row_datos_de_la_asignaturas["G33"]+$row_datos_de_la_asignaturas["G34"]+$row_datos_de_la_asignaturas["G35"]+$row_datos_de_la_asignaturas["G36"]+
$row_datos_de_la_asignaturas["G37"]; echo $total_G1_L3; if ($total_G1_L3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>




            <tr>      <!-- comienzo de filas de materia con % -->
                       


              <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['h_abrev'];?>
              	
              	<span style="color:red; font-size: 16px;"><b> <?php

               $h_ayuda = '';

                if ($row_datos_controlasign['h_suma'] !=1) {
                  $h_ayuda = '#';
               }

                echo $h_ayuda;?></b></span>


              </td>

            <td style="height: 23px; width: 2.5%;">  </td>


           <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H11"]; if ($row_datos_de_la_asignaturas["H11"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H12"]; if ($row_datos_de_la_asignaturas["H12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H13"]; if ($row_datos_de_la_asignaturas["H13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H14"]; if ($row_datos_de_la_asignaturas["H14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H15"]; if ($row_datos_de_la_asignaturas["H15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H16"]; if ($row_datos_de_la_asignaturas["H16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H17"]; if ($row_datos_de_la_asignaturas["H17"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_H1_L1 = $row_datos_de_la_asignaturas["H11"]+$row_datos_de_la_asignaturas["H12"]
+$row_datos_de_la_asignaturas["H13"]+$row_datos_de_la_asignaturas["H14"]+$row_datos_de_la_asignaturas["H15"]+$row_datos_de_la_asignaturas["H16"]+
$row_datos_de_la_asignaturas["H17"]; echo $total_H1_L1; if ($total_H1_L1>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">


  <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H21"]; if ($row_datos_de_la_asignaturas["H21"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H22"]; if ($row_datos_de_la_asignaturas["H22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H23"]; if ($row_datos_de_la_asignaturas["H23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H24"]; if ($row_datos_de_la_asignaturas["H24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H25"]; if ($row_datos_de_la_asignaturas["H25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H26"]; if ($row_datos_de_la_asignaturas["H26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H27"]; if ($row_datos_de_la_asignaturas["H27"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_H1_L2 = $row_datos_de_la_asignaturas["H21"]+$row_datos_de_la_asignaturas["H22"]
+$row_datos_de_la_asignaturas["H23"]+$row_datos_de_la_asignaturas["H24"]+$row_datos_de_la_asignaturas["H25"]+$row_datos_de_la_asignaturas["H26"]+
$row_datos_de_la_asignaturas["H27"]; echo $total_H1_L2; if ($total_H1_L2>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">



              <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H31"]; if ($row_datos_de_la_asignaturas["H31"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H32"]; if ($row_datos_de_la_asignaturas["H32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H33"]; if ($row_datos_de_la_asignaturas["H33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H34"]; if ($row_datos_de_la_asignaturas["H34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H35"]; if ($row_datos_de_la_asignaturas["H35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H36"]; if ($row_datos_de_la_asignaturas["H36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H37"]; if ($row_datos_de_la_asignaturas["H37"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_H1_L3 = $row_datos_de_la_asignaturas["H31"]+$row_datos_de_la_asignaturas["H32"]
+$row_datos_de_la_asignaturas["H33"]+$row_datos_de_la_asignaturas["H34"]+$row_datos_de_la_asignaturas["H35"]+$row_datos_de_la_asignaturas["H36"]+
$row_datos_de_la_asignaturas["H37"]; echo $total_H1_L3; if ($total_H1_L3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>



 <tr>      <!-- comienzo de filas de materia con % -->
                       


              <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['i_abrev'];?>
              	
<span style="color:red; font-size: 16px;"><b> <?php

               $i_ayuda = '';

                if ($row_datos_controlasign['i_suma'] !=1) {
                  $i_ayuda = '#';
               }

                echo $i_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 2.5%;">  </td>


           <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I11"]; if ($row_datos_de_la_asignaturas["I11"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I12"]; if ($row_datos_de_la_asignaturas["I12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I13"]; if ($row_datos_de_la_asignaturas["I13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I14"]; if ($row_datos_de_la_asignaturas["I14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I15"]; if ($row_datos_de_la_asignaturas["I15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I16"]; if ($row_datos_de_la_asignaturas["I16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I17"]; if ($row_datos_de_la_asignaturas["I17"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_I1_L1 = $row_datos_de_la_asignaturas["I11"]+$row_datos_de_la_asignaturas["I12"]
+$row_datos_de_la_asignaturas["I13"]+$row_datos_de_la_asignaturas["I14"]+$row_datos_de_la_asignaturas["I15"]+$row_datos_de_la_asignaturas["I16"]+
$row_datos_de_la_asignaturas["I17"]; echo $total_I1_L1; if ($total_I1_L1>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">


  <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I21"]; if ($row_datos_de_la_asignaturas["I21"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I22"]; if ($row_datos_de_la_asignaturas["I22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I23"]; if ($row_datos_de_la_asignaturas["I23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I24"]; if ($row_datos_de_la_asignaturas["I24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I25"]; if ($row_datos_de_la_asignaturas["I25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I26"]; if ($row_datos_de_la_asignaturas["I26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I27"]; if ($row_datos_de_la_asignaturas["I27"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_I1_L2 = $row_datos_de_la_asignaturas["I21"]+$row_datos_de_la_asignaturas["I22"]
+$row_datos_de_la_asignaturas["I23"]+$row_datos_de_la_asignaturas["I24"]+$row_datos_de_la_asignaturas["I25"]+$row_datos_de_la_asignaturas["I26"]+
$row_datos_de_la_asignaturas["I27"]; echo $total_I1_L2; if ($total_I1_L2>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">



              <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I31"]; if ($row_datos_de_la_asignaturas["I31"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I32"]; if ($row_datos_de_la_asignaturas["I32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I33"]; if ($row_datos_de_la_asignaturas["I33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I34"]; if ($row_datos_de_la_asignaturas["I34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I35"]; if ($row_datos_de_la_asignaturas["I35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I36"]; if ($row_datos_de_la_asignaturas["I36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I37"]; if ($row_datos_de_la_asignaturas["I37"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_I1_L3 = $row_datos_de_la_asignaturas["I31"]+$row_datos_de_la_asignaturas["I32"]
+$row_datos_de_la_asignaturas["I33"]+$row_datos_de_la_asignaturas["I34"]+$row_datos_de_la_asignaturas["I35"]+$row_datos_de_la_asignaturas["I36"]+
$row_datos_de_la_asignaturas["I37"]; echo $total_I1_L3; if ($total_I1_L3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>





            <tr>      <!-- comienzo de filas de materia con % -->
                       


              <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['j_abrev'];?>
              	
<span style="color:red; font-size: 16px;"><b> <?php

               $j_ayuda = '';

                if ($row_datos_controlasign['j_suma'] !=1) {
                  $j_ayuda = '#';
               }

                echo $j_ayuda;?></b></span>


              </td>

            <td style="height: 23px; width: 2.5%;">  </td>


           <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J11"]; if ($row_datos_de_la_asignaturas["J11"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J12"]; if ($row_datos_de_la_asignaturas["J12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J13"]; if ($row_datos_de_la_asignaturas["J13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J14"]; if ($row_datos_de_la_asignaturas["J14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J15"]; if ($row_datos_de_la_asignaturas["J15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J16"]; if ($row_datos_de_la_asignaturas["J16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J17"]; if ($row_datos_de_la_asignaturas["J17"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_J1_L1 = $row_datos_de_la_asignaturas["J11"]+$row_datos_de_la_asignaturas["J12"]
+$row_datos_de_la_asignaturas["J13"]+$row_datos_de_la_asignaturas["J14"]+$row_datos_de_la_asignaturas["J15"]+$row_datos_de_la_asignaturas["J16"]+
$row_datos_de_la_asignaturas["J17"]; echo $total_J1_L1; if ($total_J1_L1>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">


  <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J21"]; if ($row_datos_de_la_asignaturas["J21"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J22"]; if ($row_datos_de_la_asignaturas["J22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J23"]; if ($row_datos_de_la_asignaturas["J23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J24"]; if ($row_datos_de_la_asignaturas["J24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J25"]; if ($row_datos_de_la_asignaturas["J25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J26"]; if ($row_datos_de_la_asignaturas["J26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J27"]; if ($row_datos_de_la_asignaturas["J27"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_J1_L2 = $row_datos_de_la_asignaturas["J21"]+$row_datos_de_la_asignaturas["J22"]
+$row_datos_de_la_asignaturas["J23"]+$row_datos_de_la_asignaturas["J24"]+$row_datos_de_la_asignaturas["J25"]+$row_datos_de_la_asignaturas["J26"]+
$row_datos_de_la_asignaturas["J27"]; echo $total_J1_L2; if ($total_J1_L2>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">



              <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J31"]; if ($row_datos_de_la_asignaturas["J31"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J32"]; if ($row_datos_de_la_asignaturas["J32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J33"]; if ($row_datos_de_la_asignaturas["J33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J34"]; if ($row_datos_de_la_asignaturas["J34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J35"]; if ($row_datos_de_la_asignaturas["J35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J36"]; if ($row_datos_de_la_asignaturas["J36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J37"]; if ($row_datos_de_la_asignaturas["J37"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_J1_L3 = $row_datos_de_la_asignaturas["J31"]+$row_datos_de_la_asignaturas["J32"]
+$row_datos_de_la_asignaturas["J33"]+$row_datos_de_la_asignaturas["J34"]+$row_datos_de_la_asignaturas["J35"]+$row_datos_de_la_asignaturas["J36"]+
$row_datos_de_la_asignaturas["J37"]; echo $total_J1_L3; if ($total_J1_L3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>



         <tr>      <!-- comienzo de filas de materia con % -->
                       


              <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['k_abrev'];?>
              	

<span style="color:red; font-size: 16px;"><b> <?php

               $k_ayuda = '';

                if ($row_datos_controlasign['k_suma'] !=1) {
                  $k_ayuda = '#';
               }

                echo $k_ayuda;?></b></span>


              </td>

            <td style="height: 23px; width: 2.5%;">  </td>


           <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K11"]; if ($row_datos_de_la_asignaturas["K11"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K12"]; if ($row_datos_de_la_asignaturas["K12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K13"]; if ($row_datos_de_la_asignaturas["K13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K14"]; if ($row_datos_de_la_asignaturas["K14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K15"]; if ($row_datos_de_la_asignaturas["K15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K16"]; if ($row_datos_de_la_asignaturas["K16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K17"]; if ($row_datos_de_la_asignaturas["K17"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_K1_K1 = $row_datos_de_la_asignaturas["K11"]+$row_datos_de_la_asignaturas["K12"]
+$row_datos_de_la_asignaturas["K13"]+$row_datos_de_la_asignaturas["K14"]+$row_datos_de_la_asignaturas["K15"]+$row_datos_de_la_asignaturas["K16"]+
$row_datos_de_la_asignaturas["K17"]; echo $total_K1_K1; if ($total_K1_K1>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">


  <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K21"]; if ($row_datos_de_la_asignaturas["K21"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K22"]; if ($row_datos_de_la_asignaturas["K22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K23"]; if ($row_datos_de_la_asignaturas["K23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K24"]; if ($row_datos_de_la_asignaturas["K24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K25"]; if ($row_datos_de_la_asignaturas["K25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K26"]; if ($row_datos_de_la_asignaturas["K26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K27"]; if ($row_datos_de_la_asignaturas["K27"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_K1_K2 = $row_datos_de_la_asignaturas["K21"]+$row_datos_de_la_asignaturas["K22"]
+$row_datos_de_la_asignaturas["K23"]+$row_datos_de_la_asignaturas["K24"]+$row_datos_de_la_asignaturas["K25"]+$row_datos_de_la_asignaturas["K26"]+
$row_datos_de_la_asignaturas["K27"]; echo $total_K1_K2; if ($total_K1_K2>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">



              <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K31"]; if ($row_datos_de_la_asignaturas["K31"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K32"]; if ($row_datos_de_la_asignaturas["K32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K33"]; if ($row_datos_de_la_asignaturas["K33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K34"]; if ($row_datos_de_la_asignaturas["K34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K35"]; if ($row_datos_de_la_asignaturas["K35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K36"]; if ($row_datos_de_la_asignaturas["K36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K37"]; if ($row_datos_de_la_asignaturas["K37"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_K1_K3 = $row_datos_de_la_asignaturas["K31"]+$row_datos_de_la_asignaturas["K32"]
+$row_datos_de_la_asignaturas["K33"]+$row_datos_de_la_asignaturas["K34"]+$row_datos_de_la_asignaturas["K35"]+$row_datos_de_la_asignaturas["K36"]+
$row_datos_de_la_asignaturas["K37"]; echo $total_K1_K3; if ($total_K1_K3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>



            <tr>      <!-- comienzo de filas de materia con % -->
                       


              <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['l_abrev'];?>
              	
<span style="color:red; font-size: 16px;"><b> <?php

               $l_ayuda = '';

                if ($row_datos_controlasign['l_suma'] !=1) {
                  $l_ayuda = '#';
               }

                echo $l_ayuda;?></b></span>


              </td>

            <td style="height: 23px; width: 2.5%;">  </td>


           <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L11"]; if ($row_datos_de_la_asignaturas["L11"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L12"]; if ($row_datos_de_la_asignaturas["L12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L13"]; if ($row_datos_de_la_asignaturas["L13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L14"]; if ($row_datos_de_la_asignaturas["L14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L15"]; if ($row_datos_de_la_asignaturas["L15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L16"]; if ($row_datos_de_la_asignaturas["L16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L17"]; if ($row_datos_de_la_asignaturas["L17"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_L1_L1 = $row_datos_de_la_asignaturas["L11"]+$row_datos_de_la_asignaturas["L12"]
+$row_datos_de_la_asignaturas["L13"]+$row_datos_de_la_asignaturas["L14"]+$row_datos_de_la_asignaturas["L15"]+$row_datos_de_la_asignaturas["L16"]+
$row_datos_de_la_asignaturas["L17"]; echo $total_L1_L1; if ($total_L1_L1>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">


  <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L21"]; if ($row_datos_de_la_asignaturas["L21"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L22"]; if ($row_datos_de_la_asignaturas["L22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L23"]; if ($row_datos_de_la_asignaturas["L23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L24"]; if ($row_datos_de_la_asignaturas["L24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L25"]; if ($row_datos_de_la_asignaturas["L25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L26"]; if ($row_datos_de_la_asignaturas["L26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L27"]; if ($row_datos_de_la_asignaturas["L27"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_L1_L2 = $row_datos_de_la_asignaturas["L21"]+$row_datos_de_la_asignaturas["L22"]
+$row_datos_de_la_asignaturas["L23"]+$row_datos_de_la_asignaturas["L24"]+$row_datos_de_la_asignaturas["L25"]+$row_datos_de_la_asignaturas["L26"]+
$row_datos_de_la_asignaturas["L27"]; echo $total_L1_L2; if ($total_L1_L2>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">



              <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L31"]; if ($row_datos_de_la_asignaturas["L31"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L32"]; if ($row_datos_de_la_asignaturas["L32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L33"]; if ($row_datos_de_la_asignaturas["L33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L34"]; if ($row_datos_de_la_asignaturas["L34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L35"]; if ($row_datos_de_la_asignaturas["L35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L36"]; if ($row_datos_de_la_asignaturas["L36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L37"]; if ($row_datos_de_la_asignaturas["L37"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_L1_L3 = $row_datos_de_la_asignaturas["L31"]+$row_datos_de_la_asignaturas["L32"]
+$row_datos_de_la_asignaturas["L33"]+$row_datos_de_la_asignaturas["L34"]+$row_datos_de_la_asignaturas["L35"]+$row_datos_de_la_asignaturas["L36"]+
$row_datos_de_la_asignaturas["L37"]; echo $total_L1_L3; if ($total_L1_L3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>


            <tr>      <!-- comienzo de filas de materia con % -->
                       


              <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['m_abrev'];?>
              	
<span style="color:red; font-size: 16px;"><b> <?php

               $m_ayuda = '';

                if ($row_datos_controlasign['m_suma'] !=1) {
                  $m_ayuda = '#';
               }

                echo $m_ayuda;?></b></span>


              </td>

            <td style="height: 23px; width: 2.5%;">  </td>


           <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M11"]; if ($row_datos_de_la_asignaturas["M11"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M12"]; if ($row_datos_de_la_asignaturas["M12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M13"]; if ($row_datos_de_la_asignaturas["M13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M14"]; if ($row_datos_de_la_asignaturas["M14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M15"]; if ($row_datos_de_la_asignaturas["M15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M16"]; if ($row_datos_de_la_asignaturas["M16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M17"]; if ($row_datos_de_la_asignaturas["M17"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_M1_M1 = $row_datos_de_la_asignaturas["M11"]+$row_datos_de_la_asignaturas["M12"]
+$row_datos_de_la_asignaturas["M13"]+$row_datos_de_la_asignaturas["M14"]+$row_datos_de_la_asignaturas["M15"]+$row_datos_de_la_asignaturas["M16"]+
$row_datos_de_la_asignaturas["M17"]; echo $total_M1_M1; if ($total_M1_M1>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">


  <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M21"]; if ($row_datos_de_la_asignaturas["M21"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M22"]; if ($row_datos_de_la_asignaturas["M22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M23"]; if ($row_datos_de_la_asignaturas["M23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M24"]; if ($row_datos_de_la_asignaturas["M24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M25"]; if ($row_datos_de_la_asignaturas["M25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M26"]; if ($row_datos_de_la_asignaturas["M26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M27"]; if ($row_datos_de_la_asignaturas["M27"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_M1_M2 = $row_datos_de_la_asignaturas["M21"]+$row_datos_de_la_asignaturas["M22"]
+$row_datos_de_la_asignaturas["M23"]+$row_datos_de_la_asignaturas["M24"]+$row_datos_de_la_asignaturas["M25"]+$row_datos_de_la_asignaturas["M26"]+
$row_datos_de_la_asignaturas["M27"]; echo $total_M1_M2; if ($total_M1_M2>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">



              <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M31"]; if ($row_datos_de_la_asignaturas["M31"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M32"]; if ($row_datos_de_la_asignaturas["M32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M33"]; if ($row_datos_de_la_asignaturas["M33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M34"]; if ($row_datos_de_la_asignaturas["M34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M35"]; if ($row_datos_de_la_asignaturas["M35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M36"]; if ($row_datos_de_la_asignaturas["M36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M37"]; if ($row_datos_de_la_asignaturas["M37"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_M1_M3 = $row_datos_de_la_asignaturas["M31"]+$row_datos_de_la_asignaturas["M32"]
+$row_datos_de_la_asignaturas["M33"]+$row_datos_de_la_asignaturas["M34"]+$row_datos_de_la_asignaturas["M35"]+$row_datos_de_la_asignaturas["M36"]+
$row_datos_de_la_asignaturas["M37"]; echo $total_M1_M3; if ($total_M1_M3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>



            <tr>      <!-- comienzo de filas de materia con % -->
                       


              <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px; width: 5%;">
              <?php echo $row_datos_controlasign['n_abrev'];?>
              	

<span style="color:red; font-size: 16px;"><b> <?php

               $n_ayuda = '';

                if ($row_datos_controlasign['n_suma'] !=1) {
                  $n_ayuda = '#';
               }

                echo $n_ayuda;?></b></span>



              </td>

            <td style="height: 23px; width: 2.5%;">  </td>


           <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N11"]; if ($row_datos_de_la_asignaturas["N11"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N12"]; if ($row_datos_de_la_asignaturas["N12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N13"]; if ($row_datos_de_la_asignaturas["N13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N14"]; if ($row_datos_de_la_asignaturas["N14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N15"]; if ($row_datos_de_la_asignaturas["N15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N16"]; if ($row_datos_de_la_asignaturas["N16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N17"]; if ($row_datos_de_la_asignaturas["N17"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_N1_N1 = $row_datos_de_la_asignaturas["N11"]+$row_datos_de_la_asignaturas["N12"]
+$row_datos_de_la_asignaturas["N13"]+$row_datos_de_la_asignaturas["N14"]+$row_datos_de_la_asignaturas["N15"]+$row_datos_de_la_asignaturas["N16"]+
$row_datos_de_la_asignaturas["N17"]; echo $total_N1_N1; if ($total_N1_N1>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">


  <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N21"]; if ($row_datos_de_la_asignaturas["N21"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N22"]; if ($row_datos_de_la_asignaturas["N22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N23"]; if ($row_datos_de_la_asignaturas["N23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N24"]; if ($row_datos_de_la_asignaturas["N24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N25"]; if ($row_datos_de_la_asignaturas["N25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N26"]; if ($row_datos_de_la_asignaturas["N26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N27"]; if ($row_datos_de_la_asignaturas["N27"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_N1_N2 = $row_datos_de_la_asignaturas["N21"]+$row_datos_de_la_asignaturas["N22"]
+$row_datos_de_la_asignaturas["N23"]+$row_datos_de_la_asignaturas["N24"]+$row_datos_de_la_asignaturas["N25"]+$row_datos_de_la_asignaturas["N26"]+
$row_datos_de_la_asignaturas["N27"]; echo $total_N1_N2; if ($total_N1_N2>=0.1) {echo $porsign; }  ?></b></td> 



             <td style="height: 23px; width: 2.5%;">



              <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N31"]; if ($row_datos_de_la_asignaturas["N31"]>=0.1) {
                  echo $porsign; }  ?></td>


             <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N32"]; if ($row_datos_de_la_asignaturas["N32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N33"]; if ($row_datos_de_la_asignaturas["N33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N34"]; if ($row_datos_de_la_asignaturas["N34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N35"]; if ($row_datos_de_la_asignaturas["N35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N36"]; if ($row_datos_de_la_asignaturas["N36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:2.5%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N37"]; if ($row_datos_de_la_asignaturas["N37"]>=0.1) {
                     echo $porsign; }  ?></td>  



<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:5.4%; height: 23px; "><b><?php $total_N1_N3 = $row_datos_de_la_asignaturas["N31"]+$row_datos_de_la_asignaturas["N32"]
+$row_datos_de_la_asignaturas["N33"]+$row_datos_de_la_asignaturas["N34"]+$row_datos_de_la_asignaturas["N35"]+$row_datos_de_la_asignaturas["N36"]+
$row_datos_de_la_asignaturas["N37"]; echo $total_N1_N3; if ($total_N1_N3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>





 </table>






</div> <!--  cierre cold fila inferior-->

</div> <!--  cierre form-->
</div> <!--  cierre card body-->
</div> <!-- cierre card -->


















  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        
<br>




         <div class="form-row mb-3">

        
        <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-file-alt"></i></span> 
</div>

  <input maxlength="39" type="text" readonly="readonly" class="form-control form-control-sm " id="mod_nombres_estud" name="mod_nombres_estud"
value="<?php echo $name_del_est; ?>" required> 
       
        </div>





        <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="far fa-file-alt"></i></span> 
</div>

  <input maxlength="39" type="text" readonly="readonly" class="form-control form-control-sm " id="mod_apellidos_estud" name="mod_apellidos_estud"
value="<?php echo $ape_del_est; ?>" required> 
       
        </div>








        <div class="input-group input-group-sm col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-user-tag"></i><i>&nbsp; Exp:</i></span> 
</div>

<input maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" readonly="readonly" class="form-control form-control-sm " id="mod_exp_estud" name="mod_exp_estud"
value="<?php echo $expe_del_est; ?>" required> 
       
        </div>




      <div class="input-group input-group-sm col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i>Ci:</i></span> 
</div>

<input maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" readonly="readonly" class="form-control form-control-sm " id="mod_ci_estud" name="mod_ci_estud"
value="<?php echo $ci_del_est; ?>"> 
       
        </div>






<div class="input-group input-group-sm col-md-4 mb-2">
<span class="input-group-text alert-info" id="basic-addon1"><i><?php echo $r_d_reg_estu_actual_HOY['nombre_grados']; ?> / Sección "<?php echo $r_d_reg_estu_actual_HOY['nombre_seccion']; ?>" / Ciclo "<?php echo $r_d_reg_estu_actual_HOY['periodo_escolar']; ?>"</i></span> 
</div>

        

      </div> <!--Cierre de row con las 12 columnas-->




      </div>
    </div>
  </div>





<?php include ("Footer_Alt.php"); ?>