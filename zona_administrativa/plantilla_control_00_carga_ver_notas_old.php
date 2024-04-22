<?php

include("identificador.php");

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





$query_de_la_asignaturas = "SELECT * FROM asignaturas
                            Where id_asign = '$las_asignaturas'
                            
                            GROUP BY id_asign limit 1" ;

$datos_de_la_asignaturas = mysqli_query($enlace, $query_de_la_asignaturas) or die(mysqli_error());
$row_datos_de_la_asignaturas = mysqli_fetch_array($datos_de_la_asignaturas); 


$porcentaje_A1_L1_N1 = ($row_datos_de_la_asignaturas["A11"] * 20)/100;        
$porcentaje_A1_L1_N2 = ($row_datos_de_la_asignaturas["A12"] * 20)/100; 
$porcentaje_A1_L1_N3 = ($row_datos_de_la_asignaturas["A13"] * 20)/100; 
$porcentaje_A1_L1_N4 = ($row_datos_de_la_asignaturas["A14"] * 20)/100; 
$porcentaje_A1_L1_N5 = ($row_datos_de_la_asignaturas["A15"] * 20)/100; 
$porcentaje_A1_L1_N6 = ($row_datos_de_la_asignaturas["A16"] * 20)/100; 
$porcentaje_A1_L1_N7 = ($row_datos_de_la_asignaturas["A17"] * 20)/100; 
$porcentaje_A1_L2_N1 = ($row_datos_de_la_asignaturas["A21"] * 20)/100; 
$porcentaje_A1_L2_N2 = ($row_datos_de_la_asignaturas["A22"] * 20)/100; 
$porcentaje_A1_L2_N3 = ($row_datos_de_la_asignaturas["A23"] * 20)/100; 
$porcentaje_A1_L2_N4 = ($row_datos_de_la_asignaturas["A24"] * 20)/100; 
$porcentaje_A1_L2_N5 = ($row_datos_de_la_asignaturas["A25"] * 20)/100; 
$porcentaje_A1_L2_N6 = ($row_datos_de_la_asignaturas["A26"] * 20)/100; 
$porcentaje_A1_L2_N7 = ($row_datos_de_la_asignaturas["A27"] * 20)/100;
$porcentaje_A1_L3_N1 = ($row_datos_de_la_asignaturas["A31"] * 20)/100; 
$porcentaje_A1_L3_N2 = ($row_datos_de_la_asignaturas["A32"] * 20)/100; 
$porcentaje_A1_L3_N3 = ($row_datos_de_la_asignaturas["A33"] * 20)/100; 
$porcentaje_A1_L3_N4 = ($row_datos_de_la_asignaturas["A34"] * 20)/100; 
$porcentaje_A1_L3_N5 = ($row_datos_de_la_asignaturas["A35"] * 20)/100; 
$porcentaje_A1_L3_N6 = ($row_datos_de_la_asignaturas["A36"] * 20)/100; 
$porcentaje_A1_L3_N7 = ($row_datos_de_la_asignaturas["A37"] * 20)/100; 

$porcentaje_A2_L1_N1 = ($row_datos_de_la_asignaturas["B11"] * 20)/100;        
$porcentaje_A2_L1_N2 = ($row_datos_de_la_asignaturas["B12"] * 20)/100; 
$porcentaje_A2_L1_N3 = ($row_datos_de_la_asignaturas["B13"] * 20)/100; 
$porcentaje_A2_L1_N4 = ($row_datos_de_la_asignaturas["B14"] * 20)/100; 
$porcentaje_A2_L1_N5 = ($row_datos_de_la_asignaturas["B15"] * 20)/100; 
$porcentaje_A2_L1_N6 = ($row_datos_de_la_asignaturas["B16"] * 20)/100; 
$porcentaje_A2_L1_N7 = ($row_datos_de_la_asignaturas["B17"] * 20)/100; 
$porcentaje_A2_L2_N1 = ($row_datos_de_la_asignaturas["B21"] * 20)/100; 
$porcentaje_A2_L2_N2 = ($row_datos_de_la_asignaturas["B22"] * 20)/100; 
$porcentaje_A2_L2_N3 = ($row_datos_de_la_asignaturas["B23"] * 20)/100; 
$porcentaje_A2_L2_N4 = ($row_datos_de_la_asignaturas["B24"] * 20)/100; 
$porcentaje_A2_L2_N5 = ($row_datos_de_la_asignaturas["B25"] * 20)/100; 
$porcentaje_A2_L2_N6 = ($row_datos_de_la_asignaturas["B26"] * 20)/100; 
$porcentaje_A2_L2_N7 = ($row_datos_de_la_asignaturas["B27"] * 20)/100;
$porcentaje_A2_L3_N1 = ($row_datos_de_la_asignaturas["B31"] * 20)/100; 
$porcentaje_A2_L3_N2 = ($row_datos_de_la_asignaturas["B32"] * 20)/100; 
$porcentaje_A2_L3_N3 = ($row_datos_de_la_asignaturas["B33"] * 20)/100; 
$porcentaje_A2_L3_N4 = ($row_datos_de_la_asignaturas["B34"] * 20)/100; 
$porcentaje_A2_L3_N5 = ($row_datos_de_la_asignaturas["B35"] * 20)/100; 
$porcentaje_A2_L3_N6 = ($row_datos_de_la_asignaturas["B36"] * 20)/100; 
$porcentaje_A2_L3_N7 = ($row_datos_de_la_asignaturas["B37"] * 20)/100;

$porcentaje_A3_L1_N1 = ($row_datos_de_la_asignaturas["C11"] * 20)/100;        
$porcentaje_A3_L1_N2 = ($row_datos_de_la_asignaturas["C12"] * 20)/100; 
$porcentaje_A3_L1_N3 = ($row_datos_de_la_asignaturas["C13"] * 20)/100; 
$porcentaje_A3_L1_N4 = ($row_datos_de_la_asignaturas["C14"] * 20)/100; 
$porcentaje_A3_L1_N5 = ($row_datos_de_la_asignaturas["C15"] * 20)/100; 
$porcentaje_A3_L1_N6 = ($row_datos_de_la_asignaturas["C16"] * 20)/100; 
$porcentaje_A3_L1_N7 = ($row_datos_de_la_asignaturas["C17"] * 20)/100;
$porcentaje_A3_L2_N1 = ($row_datos_de_la_asignaturas["C21"] * 20)/100; 
$porcentaje_A3_L2_N2 = ($row_datos_de_la_asignaturas["C22"] * 20)/100; 
$porcentaje_A3_L2_N3 = ($row_datos_de_la_asignaturas["C23"] * 20)/100; 
$porcentaje_A3_L2_N4 = ($row_datos_de_la_asignaturas["C24"] * 20)/100; 
$porcentaje_A3_L2_N5 = ($row_datos_de_la_asignaturas["C25"] * 20)/100; 
$porcentaje_A3_L2_N6 = ($row_datos_de_la_asignaturas["C26"] * 20)/100; 
$porcentaje_A3_L2_N7 = ($row_datos_de_la_asignaturas["C27"] * 20)/100; 
$porcentaje_A3_L3_N1 = ($row_datos_de_la_asignaturas["C31"] * 20)/100; 
$porcentaje_A3_L3_N2 = ($row_datos_de_la_asignaturas["C32"] * 20)/100; 
$porcentaje_A3_L3_N3 = ($row_datos_de_la_asignaturas["C33"] * 20)/100; 
$porcentaje_A3_L3_N4 = ($row_datos_de_la_asignaturas["C34"] * 20)/100; 
$porcentaje_A3_L3_N5 = ($row_datos_de_la_asignaturas["C35"] * 20)/100; 
$porcentaje_A3_L3_N6 = ($row_datos_de_la_asignaturas["C36"] * 20)/100; 
$porcentaje_A3_L3_N7 = ($row_datos_de_la_asignaturas["C37"] * 20)/100;  

$porcentaje_A4_L1_N1 = ($row_datos_de_la_asignaturas["D11"] * 20)/100;        
$porcentaje_A4_L1_N2 = ($row_datos_de_la_asignaturas["D12"] * 20)/100; 
$porcentaje_A4_L1_N3 = ($row_datos_de_la_asignaturas["D13"] * 20)/100; 
$porcentaje_A4_L1_N4 = ($row_datos_de_la_asignaturas["D14"] * 20)/100; 
$porcentaje_A4_L1_N5 = ($row_datos_de_la_asignaturas["D15"] * 20)/100; 
$porcentaje_A4_L1_N6 = ($row_datos_de_la_asignaturas["D16"] * 20)/100; 
$porcentaje_A4_L1_N7 = ($row_datos_de_la_asignaturas["D17"] * 20)/100;
$porcentaje_A4_L2_N1 = ($row_datos_de_la_asignaturas["D21"] * 20)/100; 
$porcentaje_A4_L2_N2 = ($row_datos_de_la_asignaturas["D22"] * 20)/100; 
$porcentaje_A4_L2_N3 = ($row_datos_de_la_asignaturas["D23"] * 20)/100; 
$porcentaje_A4_L2_N4 = ($row_datos_de_la_asignaturas["D24"] * 20)/100; 
$porcentaje_A4_L2_N5 = ($row_datos_de_la_asignaturas["D25"] * 20)/100; 
$porcentaje_A4_L2_N6 = ($row_datos_de_la_asignaturas["D26"] * 20)/100; 
$porcentaje_A4_L2_N7 = ($row_datos_de_la_asignaturas["D27"] * 20)/100;
$porcentaje_A4_L3_N1 = ($row_datos_de_la_asignaturas["D31"] * 20)/100; 
$porcentaje_A4_L3_N2 = ($row_datos_de_la_asignaturas["D32"] * 20)/100; 
$porcentaje_A4_L3_N3 = ($row_datos_de_la_asignaturas["D33"] * 20)/100; 
$porcentaje_A4_L3_N4 = ($row_datos_de_la_asignaturas["D34"] * 20)/100; 
$porcentaje_A4_L3_N5 = ($row_datos_de_la_asignaturas["D35"] * 20)/100; 
$porcentaje_A4_L3_N6 = ($row_datos_de_la_asignaturas["D36"] * 20)/100; 
$porcentaje_A4_L3_N7 = ($row_datos_de_la_asignaturas["D37"] * 20)/100; 

$porcentaje_A5_L1_N1 = ($row_datos_de_la_asignaturas["E11"] * 20)/100;        
$porcentaje_A5_L1_N2 = ($row_datos_de_la_asignaturas["E12"] * 20)/100; 
$porcentaje_A5_L1_N3 = ($row_datos_de_la_asignaturas["E13"] * 20)/100; 
$porcentaje_A5_L1_N4 = ($row_datos_de_la_asignaturas["E14"] * 20)/100; 
$porcentaje_A5_L1_N5 = ($row_datos_de_la_asignaturas["E15"] * 20)/100; 
$porcentaje_A5_L1_N6 = ($row_datos_de_la_asignaturas["E16"] * 20)/100; 
$porcentaje_A5_L1_N7 = ($row_datos_de_la_asignaturas["E17"] * 20)/100;
$porcentaje_A5_L2_N1 = ($row_datos_de_la_asignaturas["E21"] * 20)/100; 
$porcentaje_A5_L2_N2 = ($row_datos_de_la_asignaturas["E22"] * 20)/100; 
$porcentaje_A5_L2_N3 = ($row_datos_de_la_asignaturas["E23"] * 20)/100; 
$porcentaje_A5_L2_N4 = ($row_datos_de_la_asignaturas["E24"] * 20)/100; 
$porcentaje_A5_L2_N5 = ($row_datos_de_la_asignaturas["E25"] * 20)/100; 
$porcentaje_A5_L2_N6 = ($row_datos_de_la_asignaturas["E26"] * 20)/100; 
$porcentaje_A5_L2_N7 = ($row_datos_de_la_asignaturas["E27"] * 20)/100;
$porcentaje_A5_L3_N1 = ($row_datos_de_la_asignaturas["E31"] * 20)/100; 
$porcentaje_A5_L3_N2 = ($row_datos_de_la_asignaturas["E32"] * 20)/100; 
$porcentaje_A5_L3_N3 = ($row_datos_de_la_asignaturas["E33"] * 20)/100; 
$porcentaje_A5_L3_N4 = ($row_datos_de_la_asignaturas["E34"] * 20)/100; 
$porcentaje_A5_L3_N5 = ($row_datos_de_la_asignaturas["E35"] * 20)/100; 
$porcentaje_A5_L3_N6 = ($row_datos_de_la_asignaturas["E36"] * 20)/100; 
$porcentaje_A5_L3_N7 = ($row_datos_de_la_asignaturas["E37"] * 20)/100; 


$porcentaje_A6_L1_N1 = ($row_datos_de_la_asignaturas["F11"] * 20)/100;        
$porcentaje_A6_L1_N2 = ($row_datos_de_la_asignaturas["F12"] * 20)/100; 
$porcentaje_A6_L1_N3 = ($row_datos_de_la_asignaturas["F13"] * 20)/100; 
$porcentaje_A6_L1_N4 = ($row_datos_de_la_asignaturas["F14"] * 20)/100; 
$porcentaje_A6_L1_N5 = ($row_datos_de_la_asignaturas["F15"] * 20)/100; 
$porcentaje_A6_L1_N6 = ($row_datos_de_la_asignaturas["F16"] * 20)/100; 
$porcentaje_A6_L1_N7 = ($row_datos_de_la_asignaturas["F17"] * 20)/100;
$porcentaje_A6_L2_N1 = ($row_datos_de_la_asignaturas["F21"] * 20)/100; 
$porcentaje_A6_L2_N2 = ($row_datos_de_la_asignaturas["F22"] * 20)/100; 
$porcentaje_A6_L2_N3 = ($row_datos_de_la_asignaturas["F23"] * 20)/100; 
$porcentaje_A6_L2_N4 = ($row_datos_de_la_asignaturas["F24"] * 20)/100; 
$porcentaje_A6_L2_N5 = ($row_datos_de_la_asignaturas["F25"] * 20)/100; 
$porcentaje_A6_L2_N6 = ($row_datos_de_la_asignaturas["F26"] * 20)/100; 
$porcentaje_A6_L2_N7 = ($row_datos_de_la_asignaturas["F27"] * 20)/100;
$porcentaje_A6_L3_N1 = ($row_datos_de_la_asignaturas["F31"] * 20)/100; 
$porcentaje_A6_L3_N2 = ($row_datos_de_la_asignaturas["F32"] * 20)/100; 
$porcentaje_A6_L3_N3 = ($row_datos_de_la_asignaturas["F33"] * 20)/100; 
$porcentaje_A6_L3_N4 = ($row_datos_de_la_asignaturas["F34"] * 20)/100; 
$porcentaje_A6_L3_N5 = ($row_datos_de_la_asignaturas["F35"] * 20)/100; 
$porcentaje_A6_L3_N6 = ($row_datos_de_la_asignaturas["F36"] * 20)/100; 
$porcentaje_A6_L3_N7 = ($row_datos_de_la_asignaturas["F37"] * 20)/100; 

$porcentaje_A7_L1_N1 = ($row_datos_de_la_asignaturas["G11"] * 20)/100;        
$porcentaje_A7_L1_N2 = ($row_datos_de_la_asignaturas["G12"] * 20)/100; 
$porcentaje_A7_L1_N3 = ($row_datos_de_la_asignaturas["G13"] * 20)/100; 
$porcentaje_A7_L1_N4 = ($row_datos_de_la_asignaturas["G14"] * 20)/100; 
$porcentaje_A7_L1_N5 = ($row_datos_de_la_asignaturas["G15"] * 20)/100; 
$porcentaje_A7_L1_N6 = ($row_datos_de_la_asignaturas["G16"] * 20)/100; 
$porcentaje_A7_L1_N7 = ($row_datos_de_la_asignaturas["G17"] * 20)/100;
$porcentaje_A7_L2_N1 = ($row_datos_de_la_asignaturas["G21"] * 20)/100; 
$porcentaje_A7_L2_N2 = ($row_datos_de_la_asignaturas["G22"] * 20)/100; 
$porcentaje_A7_L2_N3 = ($row_datos_de_la_asignaturas["G23"] * 20)/100; 
$porcentaje_A7_L2_N4 = ($row_datos_de_la_asignaturas["G24"] * 20)/100; 
$porcentaje_A7_L2_N5 = ($row_datos_de_la_asignaturas["G25"] * 20)/100; 
$porcentaje_A7_L2_N6 = ($row_datos_de_la_asignaturas["G26"] * 20)/100; 
$porcentaje_A7_L2_N7 = ($row_datos_de_la_asignaturas["G27"] * 20)/100;
$porcentaje_A7_L3_N1 = ($row_datos_de_la_asignaturas["G31"] * 20)/100; 
$porcentaje_A7_L3_N2 = ($row_datos_de_la_asignaturas["G32"] * 20)/100; 
$porcentaje_A7_L3_N3 = ($row_datos_de_la_asignaturas["G33"] * 20)/100; 
$porcentaje_A7_L3_N4 = ($row_datos_de_la_asignaturas["G34"] * 20)/100; 
$porcentaje_A7_L3_N5 = ($row_datos_de_la_asignaturas["G35"] * 20)/100; 
$porcentaje_A7_L3_N6 = ($row_datos_de_la_asignaturas["G36"] * 20)/100; 
$porcentaje_A7_L3_N7 = ($row_datos_de_la_asignaturas["G37"] * 20)/100; 

$porcentaje_A8_L1_N1 = ($row_datos_de_la_asignaturas["H11"] * 20)/100;        
$porcentaje_A8_L1_N2 = ($row_datos_de_la_asignaturas["H12"] * 20)/100; 
$porcentaje_A8_L1_N3 = ($row_datos_de_la_asignaturas["H13"] * 20)/100; 
$porcentaje_A8_L1_N4 = ($row_datos_de_la_asignaturas["H14"] * 20)/100; 
$porcentaje_A8_L1_N5 = ($row_datos_de_la_asignaturas["H15"] * 20)/100; 
$porcentaje_A8_L1_N6 = ($row_datos_de_la_asignaturas["H16"] * 20)/100; 
$porcentaje_A8_L1_N7 = ($row_datos_de_la_asignaturas["H17"] * 20)/100;
$porcentaje_A8_L2_N1 = ($row_datos_de_la_asignaturas["H21"] * 20)/100; 
$porcentaje_A8_L2_N2 = ($row_datos_de_la_asignaturas["H22"] * 20)/100; 
$porcentaje_A8_L2_N3 = ($row_datos_de_la_asignaturas["H23"] * 20)/100; 
$porcentaje_A8_L2_N4 = ($row_datos_de_la_asignaturas["H24"] * 20)/100; 
$porcentaje_A8_L2_N5 = ($row_datos_de_la_asignaturas["H25"] * 20)/100; 
$porcentaje_A8_L2_N6 = ($row_datos_de_la_asignaturas["H26"] * 20)/100; 
$porcentaje_A8_L2_N7 = ($row_datos_de_la_asignaturas["H27"] * 20)/100;
$porcentaje_A8_L3_N1 = ($row_datos_de_la_asignaturas["H31"] * 20)/100; 
$porcentaje_A8_L3_N2 = ($row_datos_de_la_asignaturas["H32"] * 20)/100; 
$porcentaje_A8_L3_N3 = ($row_datos_de_la_asignaturas["H33"] * 20)/100; 
$porcentaje_A8_L3_N4 = ($row_datos_de_la_asignaturas["H34"] * 20)/100; 
$porcentaje_A8_L3_N5 = ($row_datos_de_la_asignaturas["H35"] * 20)/100; 
$porcentaje_A8_L3_N6 = ($row_datos_de_la_asignaturas["H36"] * 20)/100; 
$porcentaje_A8_L3_N7 = ($row_datos_de_la_asignaturas["H37"] * 20)/100;

$porcentaje_A9_L1_N1 = ($row_datos_de_la_asignaturas["I11"] * 20)/100;        
$porcentaje_A9_L1_N2 = ($row_datos_de_la_asignaturas["I12"] * 20)/100; 
$porcentaje_A9_L1_N3 = ($row_datos_de_la_asignaturas["I13"] * 20)/100; 
$porcentaje_A9_L1_N4 = ($row_datos_de_la_asignaturas["I14"] * 20)/100; 
$porcentaje_A9_L1_N5 = ($row_datos_de_la_asignaturas["I15"] * 20)/100; 
$porcentaje_A9_L1_N6 = ($row_datos_de_la_asignaturas["I16"] * 20)/100; 
$porcentaje_A9_L1_N7 = ($row_datos_de_la_asignaturas["I17"] * 20)/100;
$porcentaje_A9_L2_N1 = ($row_datos_de_la_asignaturas["I21"] * 20)/100; 
$porcentaje_A9_L2_N2 = ($row_datos_de_la_asignaturas["I22"] * 20)/100; 
$porcentaje_A9_L2_N3 = ($row_datos_de_la_asignaturas["I23"] * 20)/100; 
$porcentaje_A9_L2_N4 = ($row_datos_de_la_asignaturas["I24"] * 20)/100; 
$porcentaje_A9_L2_N5 = ($row_datos_de_la_asignaturas["I25"] * 20)/100; 
$porcentaje_A9_L2_N6 = ($row_datos_de_la_asignaturas["I26"] * 20)/100; 
$porcentaje_A9_L2_N7 = ($row_datos_de_la_asignaturas["I27"] * 20)/100;
$porcentaje_A9_L3_N1 = ($row_datos_de_la_asignaturas["I31"] * 20)/100; 
$porcentaje_A9_L3_N2 = ($row_datos_de_la_asignaturas["I32"] * 20)/100; 
$porcentaje_A9_L3_N3 = ($row_datos_de_la_asignaturas["I33"] * 20)/100; 
$porcentaje_A9_L3_N4 = ($row_datos_de_la_asignaturas["I34"] * 20)/100; 
$porcentaje_A9_L3_N5 = ($row_datos_de_la_asignaturas["I35"] * 20)/100; 
$porcentaje_A9_L3_N6 = ($row_datos_de_la_asignaturas["I36"] * 20)/100; 
$porcentaje_A9_L3_N7 = ($row_datos_de_la_asignaturas["I37"] * 20)/100;

$porcentaje_A10_L1_N1 = ($row_datos_de_la_asignaturas["J11"] * 20)/100;        
$porcentaje_A10_L1_N2 = ($row_datos_de_la_asignaturas["J12"] * 20)/100; 
$porcentaje_A10_L1_N3 = ($row_datos_de_la_asignaturas["J13"] * 20)/100; 
$porcentaje_A10_L1_N4 = ($row_datos_de_la_asignaturas["J14"] * 20)/100; 
$porcentaje_A10_L1_N5 = ($row_datos_de_la_asignaturas["J15"] * 20)/100; 
$porcentaje_A10_L1_N6 = ($row_datos_de_la_asignaturas["J16"] * 20)/100; 
$porcentaje_A10_L1_N7 = ($row_datos_de_la_asignaturas["J17"] * 20)/100;
$porcentaje_A10_L2_N1 = ($row_datos_de_la_asignaturas["J21"] * 20)/100; 
$porcentaje_A10_L2_N2 = ($row_datos_de_la_asignaturas["J22"] * 20)/100; 
$porcentaje_A10_L2_N3 = ($row_datos_de_la_asignaturas["J23"] * 20)/100; 
$porcentaje_A10_L2_N4 = ($row_datos_de_la_asignaturas["J24"] * 20)/100; 
$porcentaje_A10_L2_N5 = ($row_datos_de_la_asignaturas["J25"] * 20)/100; 
$porcentaje_A10_L2_N6 = ($row_datos_de_la_asignaturas["J26"] * 20)/100; 
$porcentaje_A10_L2_N7 = ($row_datos_de_la_asignaturas["J27"] * 20)/100;
$porcentaje_A10_L3_N1 = ($row_datos_de_la_asignaturas["J31"] * 20)/100; 
$porcentaje_A10_L3_N2 = ($row_datos_de_la_asignaturas["J32"] * 20)/100; 
$porcentaje_A10_L3_N3 = ($row_datos_de_la_asignaturas["J33"] * 20)/100; 
$porcentaje_A10_L3_N4 = ($row_datos_de_la_asignaturas["J34"] * 20)/100; 
$porcentaje_A10_L3_N5 = ($row_datos_de_la_asignaturas["J35"] * 20)/100; 
$porcentaje_A10_L3_N6 = ($row_datos_de_la_asignaturas["J36"] * 20)/100; 
$porcentaje_A10_L3_N7 = ($row_datos_de_la_asignaturas["J37"] * 20)/100; 

$porcentaje_A11_L1_N1 = ($row_datos_de_la_asignaturas["K11"] * 20)/100;        
$porcentaje_A11_L1_N2 = ($row_datos_de_la_asignaturas["K12"] * 20)/100; 
$porcentaje_A11_L1_N3 = ($row_datos_de_la_asignaturas["K13"] * 20)/100; 
$porcentaje_A11_L1_N4 = ($row_datos_de_la_asignaturas["K14"] * 20)/100; 
$porcentaje_A11_L1_N5 = ($row_datos_de_la_asignaturas["K15"] * 20)/100; 
$porcentaje_A11_L1_N6 = ($row_datos_de_la_asignaturas["K16"] * 20)/100; 
$porcentaje_A11_L1_N7 = ($row_datos_de_la_asignaturas["K17"] * 20)/100;
$porcentaje_A11_L2_N1 = ($row_datos_de_la_asignaturas["K21"] * 20)/100; 
$porcentaje_A11_L2_N2 = ($row_datos_de_la_asignaturas["K22"] * 20)/100; 
$porcentaje_A11_L2_N3 = ($row_datos_de_la_asignaturas["K23"] * 20)/100; 
$porcentaje_A11_L2_N4 = ($row_datos_de_la_asignaturas["K24"] * 20)/100; 
$porcentaje_A11_L2_N5 = ($row_datos_de_la_asignaturas["K25"] * 20)/100; 
$porcentaje_A11_L2_N6 = ($row_datos_de_la_asignaturas["K26"] * 20)/100; 
$porcentaje_A11_L2_N7 = ($row_datos_de_la_asignaturas["K27"] * 20)/100;
$porcentaje_A11_L3_N1 = ($row_datos_de_la_asignaturas["K31"] * 20)/100; 
$porcentaje_A11_L3_N2 = ($row_datos_de_la_asignaturas["K32"] * 20)/100; 
$porcentaje_A11_L3_N3 = ($row_datos_de_la_asignaturas["K33"] * 20)/100; 
$porcentaje_A11_L3_N4 = ($row_datos_de_la_asignaturas["K34"] * 20)/100; 
$porcentaje_A11_L3_N5 = ($row_datos_de_la_asignaturas["K35"] * 20)/100; 
$porcentaje_A11_L3_N6 = ($row_datos_de_la_asignaturas["K36"] * 20)/100; 
$porcentaje_A11_L3_N7 = ($row_datos_de_la_asignaturas["K37"] * 20)/100;

$porcentaje_A12_L1_N1 = ($row_datos_de_la_asignaturas["L11"] * 20)/100;        
$porcentaje_A12_L1_N2 = ($row_datos_de_la_asignaturas["L12"] * 20)/100; 
$porcentaje_A12_L1_N3 = ($row_datos_de_la_asignaturas["L13"] * 20)/100; 
$porcentaje_A12_L1_N4 = ($row_datos_de_la_asignaturas["L14"] * 20)/100; 
$porcentaje_A12_L1_N5 = ($row_datos_de_la_asignaturas["L15"] * 20)/100; 
$porcentaje_A12_L1_N6 = ($row_datos_de_la_asignaturas["L16"] * 20)/100; 
$porcentaje_A12_L1_N7 = ($row_datos_de_la_asignaturas["L17"] * 20)/100;
$porcentaje_A12_L2_N1 = ($row_datos_de_la_asignaturas["L21"] * 20)/100; 
$porcentaje_A12_L2_N2 = ($row_datos_de_la_asignaturas["L22"] * 20)/100; 
$porcentaje_A12_L2_N3 = ($row_datos_de_la_asignaturas["L23"] * 20)/100; 
$porcentaje_A12_L2_N4 = ($row_datos_de_la_asignaturas["L24"] * 20)/100; 
$porcentaje_A12_L2_N5 = ($row_datos_de_la_asignaturas["L25"] * 20)/100; 
$porcentaje_A12_L2_N6 = ($row_datos_de_la_asignaturas["L26"] * 20)/100; 
$porcentaje_A12_L2_N7 = ($row_datos_de_la_asignaturas["L27"] * 20)/100;
$porcentaje_A12_L3_N1 = ($row_datos_de_la_asignaturas["L31"] * 20)/100; 
$porcentaje_A12_L3_N2 = ($row_datos_de_la_asignaturas["L32"] * 20)/100; 
$porcentaje_A12_L3_N3 = ($row_datos_de_la_asignaturas["L33"] * 20)/100; 
$porcentaje_A12_L3_N4 = ($row_datos_de_la_asignaturas["L34"] * 20)/100; 
$porcentaje_A12_L3_N5 = ($row_datos_de_la_asignaturas["L35"] * 20)/100; 
$porcentaje_A12_L3_N6 = ($row_datos_de_la_asignaturas["L36"] * 20)/100; 
$porcentaje_A12_L3_N7 = ($row_datos_de_la_asignaturas["L37"] * 20)/100; 



$porcentaje_A13_L1_N1 = ($row_datos_de_la_asignaturas["M11"] * 20)/100;        
$porcentaje_A13_L1_N2 = ($row_datos_de_la_asignaturas["M12"] * 20)/100; 
$porcentaje_A13_L1_N3 = ($row_datos_de_la_asignaturas["M13"] * 20)/100; 
$porcentaje_A13_L1_N4 = ($row_datos_de_la_asignaturas["M14"] * 20)/100; 
$porcentaje_A13_L1_N5 = ($row_datos_de_la_asignaturas["M15"] * 20)/100; 
$porcentaje_A13_L1_N6 = ($row_datos_de_la_asignaturas["M16"] * 20)/100; 
$porcentaje_A13_L1_N7 = ($row_datos_de_la_asignaturas["M17"] * 20)/100;
$porcentaje_A13_L2_N1 = ($row_datos_de_la_asignaturas["M21"] * 20)/100; 
$porcentaje_A13_L2_N2 = ($row_datos_de_la_asignaturas["M22"] * 20)/100; 
$porcentaje_A13_L2_N3 = ($row_datos_de_la_asignaturas["M23"] * 20)/100; 
$porcentaje_A13_L2_N4 = ($row_datos_de_la_asignaturas["M24"] * 20)/100; 
$porcentaje_A13_L2_N5 = ($row_datos_de_la_asignaturas["M25"] * 20)/100; 
$porcentaje_A13_L2_N6 = ($row_datos_de_la_asignaturas["M26"] * 20)/100; 
$porcentaje_A13_L2_N7 = ($row_datos_de_la_asignaturas["M27"] * 20)/100;
$porcentaje_A13_L3_N1 = ($row_datos_de_la_asignaturas["M31"] * 20)/100; 
$porcentaje_A13_L3_N2 = ($row_datos_de_la_asignaturas["M32"] * 20)/100; 
$porcentaje_A13_L3_N3 = ($row_datos_de_la_asignaturas["M33"] * 20)/100; 
$porcentaje_A13_L3_N4 = ($row_datos_de_la_asignaturas["M34"] * 20)/100; 
$porcentaje_A13_L3_N5 = ($row_datos_de_la_asignaturas["M35"] * 20)/100; 
$porcentaje_A13_L3_N6 = ($row_datos_de_la_asignaturas["M36"] * 20)/100; 
$porcentaje_A13_L3_N7 = ($row_datos_de_la_asignaturas["M37"] * 20)/100; 



$porcentaje_A14_L1_N1 = ($row_datos_de_la_asignaturas["N11"] * 20)/100;        
$porcentaje_A14_L1_N2 = ($row_datos_de_la_asignaturas["N12"] * 20)/100; 
$porcentaje_A14_L1_N3 = ($row_datos_de_la_asignaturas["N13"] * 20)/100; 
$porcentaje_A14_L1_N4 = ($row_datos_de_la_asignaturas["N14"] * 20)/100; 
$porcentaje_A14_L1_N5 = ($row_datos_de_la_asignaturas["N15"] * 20)/100; 
$porcentaje_A14_L1_N6 = ($row_datos_de_la_asignaturas["N16"] * 20)/100; 
$porcentaje_A14_L1_N7 = ($row_datos_de_la_asignaturas["N17"] * 20)/100;
$porcentaje_A14_L2_N1 = ($row_datos_de_la_asignaturas["N21"] * 20)/100; 
$porcentaje_A14_L2_N2 = ($row_datos_de_la_asignaturas["N22"] * 20)/100; 
$porcentaje_A14_L2_N3 = ($row_datos_de_la_asignaturas["N23"] * 20)/100; 
$porcentaje_A14_L2_N4 = ($row_datos_de_la_asignaturas["N24"] * 20)/100; 
$porcentaje_A14_L2_N5 = ($row_datos_de_la_asignaturas["N25"] * 20)/100; 
$porcentaje_A14_L2_N6 = ($row_datos_de_la_asignaturas["N26"] * 20)/100; 
$porcentaje_A14_L2_N7 = ($row_datos_de_la_asignaturas["N27"] * 20)/100;
$porcentaje_A14_L3_N1 = ($row_datos_de_la_asignaturas["N31"] * 20)/100; 
$porcentaje_A14_L3_N2 = ($row_datos_de_la_asignaturas["N32"] * 20)/100; 
$porcentaje_A14_L3_N3 = ($row_datos_de_la_asignaturas["N33"] * 20)/100; 
$porcentaje_A14_L3_N4 = ($row_datos_de_la_asignaturas["N34"] * 20)/100; 
$porcentaje_A14_L3_N5 = ($row_datos_de_la_asignaturas["N35"] * 20)/100; 
$porcentaje_A14_L3_N6 = ($row_datos_de_la_asignaturas["N36"] * 20)/100; 
$porcentaje_A14_L3_N7 = ($row_datos_de_la_asignaturas["N37"] * 20)/100; 



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




$nota_A1_L1_N1 = ($row_datos_control_notas_A1["nt_11"] * $porcentaje_A1_L1_N1)/20;
$nota_A1_L1_N2 = ($row_datos_control_notas_A1["nt_12"] * $porcentaje_A1_L1_N2)/20;
$nota_A1_L1_N3 = ($row_datos_control_notas_A1["nt_13"] * $porcentaje_A1_L1_N3)/20;
$nota_A1_L1_N4 = ($row_datos_control_notas_A1["nt_14"] * $porcentaje_A1_L1_N4)/20;
$nota_A1_L1_N5 = ($row_datos_control_notas_A1["nt_15"] * $porcentaje_A1_L1_N5)/20;
$nota_A1_L1_N6 = ($row_datos_control_notas_A1["nt_16"] * $porcentaje_A1_L1_N6)/20;
$nota_A1_L1_N7 = ($row_datos_control_notas_A1["nt_17"] * $porcentaje_A1_L1_N7)/20;
$notaAu_A1_L1 = $row_datos_control_notas_A1["nt_Au1"];

$nota_final_A1_L1 = $nota_A1_L1_N1 + $nota_A1_L1_N2 + $nota_A1_L1_N3 + $nota_A1_L1_N4 + $nota_A1_L1_N5 + $nota_A1_L1_N6 + $nota_A1_L1_N7 + $notaAu_A1_L1;



$nota_A1_L2_N1 = ($row_datos_control_notas_A1["nt_21"] * $porcentaje_A1_L2_N1)/20;
$nota_A1_L2_N2 = ($row_datos_control_notas_A1["nt_22"] * $porcentaje_A1_L2_N2)/20;
$nota_A1_L2_N3 = ($row_datos_control_notas_A1["nt_23"] * $porcentaje_A1_L2_N3)/20;
$nota_A1_L2_N4 = ($row_datos_control_notas_A1["nt_24"] * $porcentaje_A1_L2_N4)/20;
$nota_A1_L2_N5 = ($row_datos_control_notas_A1["nt_25"] * $porcentaje_A1_L2_N5)/20;
$nota_A1_L2_N6 = ($row_datos_control_notas_A1["nt_26"] * $porcentaje_A1_L2_N6)/20;
$nota_A1_L2_N7 = ($row_datos_control_notas_A1["nt_27"] * $porcentaje_A1_L2_N7)/20;
$notaAu_A1_L2 = $row_datos_control_notas_A1["nt_Au2"];

$nota_final_A1_L2 = $nota_A1_L2_N1 + $nota_A1_L2_N2 + $nota_A1_L2_N3 + $nota_A1_L2_N4 + $nota_A1_L2_N5 + $nota_A1_L2_N6 + $nota_A1_L2_N7 + $notaAu_A1_L2;



$nota_A1_L3_N1 = ($row_datos_control_notas_A1["nt_31"] * $porcentaje_A1_L3_N1)/20;
$nota_A1_L3_N2 = ($row_datos_control_notas_A1["nt_32"] * $porcentaje_A1_L3_N2)/20;
$nota_A1_L3_N3 = ($row_datos_control_notas_A1["nt_33"] * $porcentaje_A1_L3_N3)/20;
$nota_A1_L3_N4 = ($row_datos_control_notas_A1["nt_34"] * $porcentaje_A1_L3_N4)/20;
$nota_A1_L3_N5 = ($row_datos_control_notas_A1["nt_35"] * $porcentaje_A1_L3_N5)/20;
$nota_A1_L3_N6 = ($row_datos_control_notas_A1["nt_36"] * $porcentaje_A1_L3_N6)/20;
$nota_A1_L3_N7 = ($row_datos_control_notas_A1["nt_37"] * $porcentaje_A1_L3_N7)/20;
$notaAu_A1_L3 = $row_datos_control_notas_A1["nt_Au3"];

$nota_final_A1_L3 = $nota_A1_L3_N1 + $nota_A1_L3_N2 + $nota_A1_L3_N3 + $nota_A1_L3_N4 + $nota_A1_L3_N5 + $nota_A1_L3_N6 + $nota_A1_L3_N7 + $notaAu_A1_L3;



$notaAu_Final_A1 = $row_datos_control_notas_A1["nt_AuF"];









$query_notas_A2 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 2
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A2 = mysqli_query($enlace, $query_notas_A2) or die(mysqli_error());
$row_datos_control_notas_A2 = mysqli_fetch_array($datos_control_notas_A2); 




$nota_A2_L1_N1 = ($row_datos_control_notas_A2["nt_11"] * $porcentaje_A2_L1_N1)/20;
$nota_A2_L1_N2 = ($row_datos_control_notas_A2["nt_12"] * $porcentaje_A2_L1_N2)/20;
$nota_A2_L1_N3 = ($row_datos_control_notas_A2["nt_13"] * $porcentaje_A2_L1_N3)/20;
$nota_A2_L1_N4 = ($row_datos_control_notas_A2["nt_14"] * $porcentaje_A2_L1_N4)/20;
$nota_A2_L1_N5 = ($row_datos_control_notas_A2["nt_15"] * $porcentaje_A2_L1_N5)/20;
$nota_A2_L1_N6 = ($row_datos_control_notas_A2["nt_16"] * $porcentaje_A2_L1_N6)/20;
$nota_A2_L1_N7 = ($row_datos_control_notas_A2["nt_17"] * $porcentaje_A2_L1_N7)/20;
$notaAu_A2_L1 = $row_datos_control_notas_A2["nt_Au1"];

$nota_final_A2_L1 = $nota_A2_L1_N1 + $nota_A2_L1_N2 + $nota_A2_L1_N3 + $nota_A2_L1_N4 + $nota_A2_L1_N5 + $nota_A2_L1_N6 + $nota_A2_L1_N7 + $notaAu_A2_L1;



$nota_A2_L2_N1 = ($row_datos_control_notas_A2["nt_21"] * $porcentaje_A2_L2_N1)/20;
$nota_A2_L2_N2 = ($row_datos_control_notas_A2["nt_22"] * $porcentaje_A2_L2_N2)/20;
$nota_A2_L2_N3 = ($row_datos_control_notas_A2["nt_23"] * $porcentaje_A2_L2_N3)/20;
$nota_A2_L2_N4 = ($row_datos_control_notas_A2["nt_24"] * $porcentaje_A2_L2_N4)/20;
$nota_A2_L2_N5 = ($row_datos_control_notas_A2["nt_25"] * $porcentaje_A2_L2_N5)/20;
$nota_A2_L2_N6 = ($row_datos_control_notas_A2["nt_26"] * $porcentaje_A2_L2_N6)/20;
$nota_A2_L2_N7 = ($row_datos_control_notas_A2["nt_27"] * $porcentaje_A2_L2_N7)/20;
$notaAu_A2_L2 = $row_datos_control_notas_A2["nt_Au2"];

$nota_final_A2_L2 = $nota_A2_L2_N1 + $nota_A2_L2_N2 + $nota_A2_L2_N3 + $nota_A2_L2_N4 + $nota_A2_L2_N5 + $nota_A2_L2_N6 + $nota_A2_L2_N7 + $notaAu_A2_L2;




$nota_A2_L3_N1 = ($row_datos_control_notas_A2["nt_31"] * $porcentaje_A2_L3_N1)/20;
$nota_A2_L3_N2 = ($row_datos_control_notas_A2["nt_32"] * $porcentaje_A2_L3_N2)/20;
$nota_A2_L3_N3 = ($row_datos_control_notas_A2["nt_33"] * $porcentaje_A2_L3_N3)/20;
$nota_A2_L3_N4 = ($row_datos_control_notas_A2["nt_34"] * $porcentaje_A2_L3_N4)/20;
$nota_A2_L3_N5 = ($row_datos_control_notas_A2["nt_35"] * $porcentaje_A2_L3_N5)/20;
$nota_A2_L3_N6 = ($row_datos_control_notas_A2["nt_36"] * $porcentaje_A2_L3_N6)/20;
$nota_A2_L3_N7 = ($row_datos_control_notas_A2["nt_37"] * $porcentaje_A2_L3_N7)/20;
$notaAu_A2_L3 = $row_datos_control_notas_A2["nt_Au3"];

$nota_final_A2_L3 = $nota_A2_L3_N1 + $nota_A2_L3_N2 + $nota_A2_L3_N3 + $nota_A2_L3_N4 + $nota_A2_L3_N5 + $nota_A2_L3_N6 + $nota_A2_L3_N7 + $notaAu_A2_L3;




$notaAu_Final_A2 = $row_datos_control_notas_A2["nt_AuF"];







$query_notas_A3 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 3
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A3 = mysqli_query($enlace, $query_notas_A3) or die(mysqli_error());
$row_datos_control_notas_A3 = mysqli_fetch_array($datos_control_notas_A3); 




$nota_A3_L1_N1 = ($row_datos_control_notas_A3["nt_11"] * $porcentaje_A3_L1_N1)/20;
$nota_A3_L1_N2 = ($row_datos_control_notas_A3["nt_12"] * $porcentaje_A3_L1_N2)/20;
$nota_A3_L1_N3 = ($row_datos_control_notas_A3["nt_13"] * $porcentaje_A3_L1_N3)/20;
$nota_A3_L1_N4 = ($row_datos_control_notas_A3["nt_14"] * $porcentaje_A3_L1_N4)/20;
$nota_A3_L1_N5 = ($row_datos_control_notas_A3["nt_15"] * $porcentaje_A3_L1_N5)/20;
$nota_A3_L1_N6 = ($row_datos_control_notas_A3["nt_16"] * $porcentaje_A3_L1_N6)/20;
$nota_A3_L1_N7 = ($row_datos_control_notas_A3["nt_17"] * $porcentaje_A3_L1_N7)/20;
$notaAu_A3_L1 = $row_datos_control_notas_A3["nt_Au1"];

$nota_final_A3_L1 = $nota_A3_L1_N1 + $nota_A3_L1_N2 + $nota_A3_L1_N3 + $nota_A3_L1_N4 + $nota_A3_L1_N5 + $nota_A3_L1_N6 + $nota_A3_L1_N7 + $notaAu_A3_L1;



$nota_A3_L2_N1 = ($row_datos_control_notas_A3["nt_21"] * $porcentaje_A3_L2_N1)/20;
$nota_A3_L2_N2 = ($row_datos_control_notas_A3["nt_22"] * $porcentaje_A3_L2_N2)/20;
$nota_A3_L2_N3 = ($row_datos_control_notas_A3["nt_23"] * $porcentaje_A3_L2_N3)/20;
$nota_A3_L2_N4 = ($row_datos_control_notas_A3["nt_24"] * $porcentaje_A3_L2_N4)/20;
$nota_A3_L2_N5 = ($row_datos_control_notas_A3["nt_25"] * $porcentaje_A3_L2_N5)/20;
$nota_A3_L2_N6 = ($row_datos_control_notas_A3["nt_26"] * $porcentaje_A3_L2_N6)/20;
$nota_A3_L2_N7 = ($row_datos_control_notas_A3["nt_27"] * $porcentaje_A3_L2_N7)/20;
$notaAu_A3_L2 = $row_datos_control_notas_A3["nt_Au2"];

$nota_final_A3_L2 = $nota_A3_L2_N1 + $nota_A3_L2_N2 + $nota_A3_L2_N3 + $nota_A3_L2_N4 + $nota_A3_L2_N5 + $nota_A3_L2_N6 + $nota_A3_L2_N7 + $notaAu_A3_L2;




$nota_A3_L3_N1 = ($row_datos_control_notas_A3["nt_31"] * $porcentaje_A3_L3_N1)/20;
$nota_A3_L3_N2 = ($row_datos_control_notas_A3["nt_32"] * $porcentaje_A3_L3_N2)/20;
$nota_A3_L3_N3 = ($row_datos_control_notas_A3["nt_33"] * $porcentaje_A3_L3_N3)/20;
$nota_A3_L3_N4 = ($row_datos_control_notas_A3["nt_34"] * $porcentaje_A3_L3_N4)/20;
$nota_A3_L3_N5 = ($row_datos_control_notas_A3["nt_35"] * $porcentaje_A3_L3_N5)/20;
$nota_A3_L3_N6 = ($row_datos_control_notas_A3["nt_36"] * $porcentaje_A3_L3_N6)/20;
$nota_A3_L3_N7 = ($row_datos_control_notas_A3["nt_37"] * $porcentaje_A3_L3_N7)/20;
$notaAu_A3_L3 = $row_datos_control_notas_A3["nt_Au3"];

$nota_final_A3_L3 = $nota_A3_L3_N1 + $nota_A3_L3_N2 + $nota_A3_L3_N3 + $nota_A3_L3_N4 + $nota_A3_L3_N5 + $nota_A3_L3_N6 + $nota_A3_L3_N7 + $notaAu_A3_L3;




$notaAu_Final_A3 = $row_datos_control_notas_A3["nt_AuF"];







$query_notas_A4 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 4
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A4 = mysqli_query($enlace, $query_notas_A4) or die(mysqli_error());
$row_datos_control_notas_A4 = mysqli_fetch_array($datos_control_notas_A4); 




$nota_A4_L1_N1 = ($row_datos_control_notas_A4["nt_11"] * $porcentaje_A4_L1_N1)/20;
$nota_A4_L1_N2 = ($row_datos_control_notas_A4["nt_12"] * $porcentaje_A4_L1_N2)/20;
$nota_A4_L1_N3 = ($row_datos_control_notas_A4["nt_13"] * $porcentaje_A4_L1_N3)/20;
$nota_A4_L1_N4 = ($row_datos_control_notas_A4["nt_14"] * $porcentaje_A4_L1_N4)/20;
$nota_A4_L1_N5 = ($row_datos_control_notas_A4["nt_15"] * $porcentaje_A4_L1_N5)/20;
$nota_A4_L1_N6 = ($row_datos_control_notas_A4["nt_16"] * $porcentaje_A4_L1_N6)/20;
$nota_A4_L1_N7 = ($row_datos_control_notas_A4["nt_17"] * $porcentaje_A4_L1_N7)/20;
$notaAu_A4_L1 = $row_datos_control_notas_A4["nt_Au1"];

$nota_final_A4_L1 = $nota_A4_L1_N1 + $nota_A4_L1_N2 + $nota_A4_L1_N3 + $nota_A4_L1_N4 + $nota_A4_L1_N5 + $nota_A4_L1_N6 + $nota_A4_L1_N7 + $notaAu_A4_L1;



$nota_A4_L2_N1 = ($row_datos_control_notas_A4["nt_21"] * $porcentaje_A4_L2_N1)/20;
$nota_A4_L2_N2 = ($row_datos_control_notas_A4["nt_22"] * $porcentaje_A4_L2_N2)/20;
$nota_A4_L2_N3 = ($row_datos_control_notas_A4["nt_23"] * $porcentaje_A4_L2_N3)/20;
$nota_A4_L2_N4 = ($row_datos_control_notas_A4["nt_24"] * $porcentaje_A4_L2_N4)/20;
$nota_A4_L2_N5 = ($row_datos_control_notas_A4["nt_25"] * $porcentaje_A4_L2_N5)/20;
$nota_A4_L2_N6 = ($row_datos_control_notas_A4["nt_26"] * $porcentaje_A4_L2_N6)/20;
$nota_A4_L2_N7 = ($row_datos_control_notas_A4["nt_27"] * $porcentaje_A4_L2_N7)/20;
$notaAu_A4_L2 = $row_datos_control_notas_A4["nt_Au2"];

$nota_final_A4_L2 = $nota_A4_L2_N1 + $nota_A4_L2_N2 + $nota_A4_L2_N3 + $nota_A4_L2_N4 + $nota_A4_L2_N5 + $nota_A4_L2_N6 + $nota_A4_L2_N7 + $notaAu_A4_L2;




$nota_A4_L3_N1 = ($row_datos_control_notas_A4["nt_31"] * $porcentaje_A4_L3_N1)/20;
$nota_A4_L3_N2 = ($row_datos_control_notas_A4["nt_32"] * $porcentaje_A4_L3_N2)/20;
$nota_A4_L3_N3 = ($row_datos_control_notas_A4["nt_33"] * $porcentaje_A4_L3_N3)/20;
$nota_A4_L3_N4 = ($row_datos_control_notas_A4["nt_34"] * $porcentaje_A4_L3_N4)/20;
$nota_A4_L3_N5 = ($row_datos_control_notas_A4["nt_35"] * $porcentaje_A4_L3_N5)/20;
$nota_A4_L3_N6 = ($row_datos_control_notas_A4["nt_36"] * $porcentaje_A4_L3_N6)/20;
$nota_A4_L3_N7 = ($row_datos_control_notas_A4["nt_37"] * $porcentaje_A4_L3_N7)/20;
$notaAu_A4_L3 = $row_datos_control_notas_A4["nt_Au3"];

$nota_final_A4_L3 = $nota_A4_L3_N1 + $nota_A4_L3_N2 + $nota_A4_L3_N3 + $nota_A4_L3_N4 + $nota_A4_L3_N5 + $nota_A4_L3_N6 + $nota_A4_L3_N7 + $notaAu_A4_L3;



$notaAu_Final_A4 = $row_datos_control_notas_A4["nt_AuF"];







$query_notas_A5 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 5
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A5 = mysqli_query($enlace, $query_notas_A5) or die(mysqli_error());
$row_datos_control_notas_A5 = mysqli_fetch_array($datos_control_notas_A5); 




$nota_A5_L1_N1 = ($row_datos_control_notas_A5["nt_11"] * $porcentaje_A5_L1_N1)/20;
$nota_A5_L1_N2 = ($row_datos_control_notas_A5["nt_12"] * $porcentaje_A5_L1_N2)/20;
$nota_A5_L1_N3 = ($row_datos_control_notas_A5["nt_13"] * $porcentaje_A5_L1_N3)/20;
$nota_A5_L1_N4 = ($row_datos_control_notas_A5["nt_14"] * $porcentaje_A5_L1_N4)/20;
$nota_A5_L1_N5 = ($row_datos_control_notas_A5["nt_15"] * $porcentaje_A5_L1_N5)/20;
$nota_A5_L1_N6 = ($row_datos_control_notas_A5["nt_16"] * $porcentaje_A5_L1_N6)/20;
$nota_A5_L1_N7 = ($row_datos_control_notas_A5["nt_17"] * $porcentaje_A5_L1_N7)/20;
$notaAu_A5_L1 = $row_datos_control_notas_A5["nt_Au1"];

$nota_final_A5_L1 = $nota_A5_L1_N1 + $nota_A5_L1_N2 + $nota_A5_L1_N3 + $nota_A5_L1_N4 + $nota_A5_L1_N5 + $nota_A5_L1_N6 + $nota_A5_L1_N7 + $notaAu_A5_L1;



$nota_A5_L2_N1 = ($row_datos_control_notas_A5["nt_21"] * $porcentaje_A5_L2_N1)/20;
$nota_A5_L2_N2 = ($row_datos_control_notas_A5["nt_22"] * $porcentaje_A5_L2_N2)/20;
$nota_A5_L2_N3 = ($row_datos_control_notas_A5["nt_23"] * $porcentaje_A5_L2_N3)/20;
$nota_A5_L2_N4 = ($row_datos_control_notas_A5["nt_24"] * $porcentaje_A5_L2_N4)/20;
$nota_A5_L2_N5 = ($row_datos_control_notas_A5["nt_25"] * $porcentaje_A5_L2_N5)/20;
$nota_A5_L2_N6 = ($row_datos_control_notas_A5["nt_26"] * $porcentaje_A5_L2_N6)/20;
$nota_A5_L2_N7 = ($row_datos_control_notas_A5["nt_27"] * $porcentaje_A5_L2_N7)/20;
$notaAu_A5_L2 = $row_datos_control_notas_A5["nt_Au2"];

$nota_final_A5_L2 = $nota_A5_L2_N1 + $nota_A5_L2_N2 + $nota_A5_L2_N3 + $nota_A5_L2_N4 + $nota_A5_L2_N5 + $nota_A5_L2_N6 + $nota_A5_L2_N7 + $notaAu_A5_L2;




$nota_A5_L3_N1 = ($row_datos_control_notas_A5["nt_31"] * $porcentaje_A5_L3_N1)/20;
$nota_A5_L3_N2 = ($row_datos_control_notas_A5["nt_32"] * $porcentaje_A5_L3_N2)/20;
$nota_A5_L3_N3 = ($row_datos_control_notas_A5["nt_33"] * $porcentaje_A5_L3_N3)/20;
$nota_A5_L3_N4 = ($row_datos_control_notas_A5["nt_34"] * $porcentaje_A5_L3_N4)/20;
$nota_A5_L3_N5 = ($row_datos_control_notas_A5["nt_35"] * $porcentaje_A5_L3_N5)/20;
$nota_A5_L3_N6 = ($row_datos_control_notas_A5["nt_36"] * $porcentaje_A5_L3_N6)/20;
$nota_A5_L3_N7 = ($row_datos_control_notas_A5["nt_37"] * $porcentaje_A5_L3_N7)/20;
$notaAu_A5_L3 = $row_datos_control_notas_A5["nt_Au3"];

$nota_final_A5_L3 = $nota_A5_L3_N1 + $nota_A5_L3_N2 + $nota_A5_L3_N3 + $nota_A5_L3_N4 + $nota_A5_L3_N5 + $nota_A5_L3_N6 + $nota_A5_L3_N7 + $notaAu_A5_L3;



$notaAu_Final_A5 = $row_datos_control_notas_A5["nt_AuF"];







$query_notas_A6 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 6
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A6 = mysqli_query($enlace, $query_notas_A6) or die(mysqli_error());
$row_datos_control_notas_A6 = mysqli_fetch_array($datos_control_notas_A6); 




$nota_A6_L1_N1 = ($row_datos_control_notas_A6["nt_11"] * $porcentaje_A6_L1_N1)/20;
$nota_A6_L1_N2 = ($row_datos_control_notas_A6["nt_12"] * $porcentaje_A6_L1_N2)/20;
$nota_A6_L1_N3 = ($row_datos_control_notas_A6["nt_13"] * $porcentaje_A6_L1_N3)/20;
$nota_A6_L1_N4 = ($row_datos_control_notas_A6["nt_14"] * $porcentaje_A6_L1_N4)/20;
$nota_A6_L1_N5 = ($row_datos_control_notas_A6["nt_15"] * $porcentaje_A6_L1_N5)/20;
$nota_A6_L1_N6 = ($row_datos_control_notas_A6["nt_16"] * $porcentaje_A6_L1_N6)/20;
$nota_A6_L1_N7 = ($row_datos_control_notas_A6["nt_17"] * $porcentaje_A6_L1_N7)/20;
$notaAu_A6_L1 = $row_datos_control_notas_A6["nt_Au1"];

$nota_final_A6_L1 = $nota_A6_L1_N1 + $nota_A6_L1_N2 + $nota_A6_L1_N3 + $nota_A6_L1_N4 + $nota_A6_L1_N5 + $nota_A6_L1_N6 + $nota_A6_L1_N7 + $notaAu_A6_L1;




$nota_A6_L2_N1 = ($row_datos_control_notas_A6["nt_21"] * $porcentaje_A6_L2_N1)/20;
$nota_A6_L2_N2 = ($row_datos_control_notas_A6["nt_22"] * $porcentaje_A6_L2_N2)/20;
$nota_A6_L2_N3 = ($row_datos_control_notas_A6["nt_23"] * $porcentaje_A6_L2_N3)/20;
$nota_A6_L2_N4 = ($row_datos_control_notas_A6["nt_24"] * $porcentaje_A6_L2_N4)/20;
$nota_A6_L2_N5 = ($row_datos_control_notas_A6["nt_25"] * $porcentaje_A6_L2_N5)/20;
$nota_A6_L2_N6 = ($row_datos_control_notas_A6["nt_26"] * $porcentaje_A6_L2_N6)/20;
$nota_A6_L2_N7 = ($row_datos_control_notas_A6["nt_27"] * $porcentaje_A6_L2_N7)/20;
$notaAu_A6_L2 = $row_datos_control_notas_A6["nt_Au2"];

$nota_final_A6_L2 = $nota_A6_L2_N1 + $nota_A6_L2_N2 + $nota_A6_L2_N3 + $nota_A6_L2_N4 + $nota_A6_L2_N5 + $nota_A6_L2_N6 + $nota_A6_L2_N7 + $notaAu_A6_L2;




$nota_A6_L3_N1 = ($row_datos_control_notas_A6["nt_31"] * $porcentaje_A6_L3_N1)/20;
$nota_A6_L3_N2 = ($row_datos_control_notas_A6["nt_32"] * $porcentaje_A6_L3_N2)/20;
$nota_A6_L3_N3 = ($row_datos_control_notas_A6["nt_33"] * $porcentaje_A6_L3_N3)/20;
$nota_A6_L3_N4 = ($row_datos_control_notas_A6["nt_34"] * $porcentaje_A6_L3_N4)/20;
$nota_A6_L3_N5 = ($row_datos_control_notas_A6["nt_35"] * $porcentaje_A6_L3_N5)/20;
$nota_A6_L3_N6 = ($row_datos_control_notas_A6["nt_36"] * $porcentaje_A6_L3_N6)/20;
$nota_A6_L3_N7 = ($row_datos_control_notas_A6["nt_37"] * $porcentaje_A6_L3_N7)/20;
$notaAu_A6_L3 = $row_datos_control_notas_A6["nt_Au3"];

$nota_final_A6_L3 = $nota_A6_L3_N1 + $nota_A6_L3_N2 + $nota_A6_L3_N3 + $nota_A6_L3_N4 + $nota_A6_L3_N5 + $nota_A6_L3_N6 + $nota_A6_L3_N7 + $notaAu_A6_L3;




$notaAu_Final_A6 = $row_datos_control_notas_A6["nt_AuF"];







$query_notas_A7 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 7
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A7 = mysqli_query($enlace, $query_notas_A7) or die(mysqli_error());
$row_datos_control_notas_A7 = mysqli_fetch_array($datos_control_notas_A7); 




$nota_A7_L1_N1 = ($row_datos_control_notas_A7["nt_11"] * $porcentaje_A7_L1_N1)/20;
$nota_A7_L1_N2 = ($row_datos_control_notas_A7["nt_12"] * $porcentaje_A7_L1_N2)/20;
$nota_A7_L1_N3 = ($row_datos_control_notas_A7["nt_13"] * $porcentaje_A7_L1_N3)/20;
$nota_A7_L1_N4 = ($row_datos_control_notas_A7["nt_14"] * $porcentaje_A7_L1_N4)/20;
$nota_A7_L1_N5 = ($row_datos_control_notas_A7["nt_15"] * $porcentaje_A7_L1_N5)/20;
$nota_A7_L1_N6 = ($row_datos_control_notas_A7["nt_16"] * $porcentaje_A7_L1_N6)/20;
$nota_A7_L1_N7 = ($row_datos_control_notas_A7["nt_17"] * $porcentaje_A7_L1_N7)/20;
$notaAu_A7_L1 = $row_datos_control_notas_A7["nt_Au1"];

$nota_final_A7_L1 = $nota_A7_L1_N1 + $nota_A7_L1_N2 + $nota_A7_L1_N3 + $nota_A7_L1_N4 + $nota_A7_L1_N5 + $nota_A7_L1_N6 + $nota_A7_L1_N7 + $notaAu_A7_L1;



$nota_A7_L2_N1 = ($row_datos_control_notas_A7["nt_21"] * $porcentaje_A7_L2_N1)/20;
$nota_A7_L2_N2 = ($row_datos_control_notas_A7["nt_22"] * $porcentaje_A7_L2_N2)/20;
$nota_A7_L2_N3 = ($row_datos_control_notas_A7["nt_23"] * $porcentaje_A7_L2_N3)/20;
$nota_A7_L2_N4 = ($row_datos_control_notas_A7["nt_24"] * $porcentaje_A7_L2_N4)/20;
$nota_A7_L2_N5 = ($row_datos_control_notas_A7["nt_25"] * $porcentaje_A7_L2_N5)/20;
$nota_A7_L2_N6 = ($row_datos_control_notas_A7["nt_26"] * $porcentaje_A7_L2_N6)/20;
$nota_A7_L2_N7 = ($row_datos_control_notas_A7["nt_27"] * $porcentaje_A7_L2_N7)/20;
$notaAu_A7_L2 = $row_datos_control_notas_A7["nt_Au2"];

$nota_final_A7_L2 = $nota_A7_L2_N1 + $nota_A7_L2_N2 + $nota_A7_L2_N3 + $nota_A7_L2_N4 + $nota_A7_L2_N5 + $nota_A7_L2_N6 + $nota_A7_L2_N7 + $notaAu_A7_L2;





$nota_A7_L3_N1 = ($row_datos_control_notas_A7["nt_31"] * $porcentaje_A7_L3_N1)/20;
$nota_A7_L3_N2 = ($row_datos_control_notas_A7["nt_32"] * $porcentaje_A7_L3_N2)/20;
$nota_A7_L3_N3 = ($row_datos_control_notas_A7["nt_33"] * $porcentaje_A7_L3_N3)/20;
$nota_A7_L3_N4 = ($row_datos_control_notas_A7["nt_34"] * $porcentaje_A7_L3_N4)/20;
$nota_A7_L3_N5 = ($row_datos_control_notas_A7["nt_35"] * $porcentaje_A7_L3_N5)/20;
$nota_A7_L3_N6 = ($row_datos_control_notas_A7["nt_36"] * $porcentaje_A7_L3_N6)/20;
$nota_A7_L3_N7 = ($row_datos_control_notas_A7["nt_37"] * $porcentaje_A7_L3_N7)/20;
$notaAu_A7_L3 = $row_datos_control_notas_A7["nt_Au3"];

$nota_final_A7_L3 = $nota_A7_L3_N1 + $nota_A7_L3_N2 + $nota_A7_L3_N3 + $nota_A7_L3_N4 + $nota_A7_L3_N5 + $nota_A7_L3_N6 + $nota_A7_L3_N7 + $notaAu_A7_L3;



$notaAu_Final_A7 = $row_datos_control_notas_A7["nt_AuF"];








$query_notas_A8 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 8
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A8 = mysqli_query($enlace, $query_notas_A8) or die(mysqli_error());
$row_datos_control_notas_A8 = mysqli_fetch_array($datos_control_notas_A8); 




$nota_A8_L1_N1 = ($row_datos_control_notas_A8["nt_11"] * $porcentaje_A8_L1_N1)/20;
$nota_A8_L1_N2 = ($row_datos_control_notas_A8["nt_12"] * $porcentaje_A8_L1_N2)/20;
$nota_A8_L1_N3 = ($row_datos_control_notas_A8["nt_13"] * $porcentaje_A8_L1_N3)/20;
$nota_A8_L1_N4 = ($row_datos_control_notas_A8["nt_14"] * $porcentaje_A8_L1_N4)/20;
$nota_A8_L1_N5 = ($row_datos_control_notas_A8["nt_15"] * $porcentaje_A8_L1_N5)/20;
$nota_A8_L1_N6 = ($row_datos_control_notas_A8["nt_16"] * $porcentaje_A8_L1_N6)/20;
$nota_A8_L1_N7 = ($row_datos_control_notas_A8["nt_17"] * $porcentaje_A8_L1_N7)/20;
$notaAu_A8_L1 = $row_datos_control_notas_A8["nt_Au1"];

$nota_final_A8_L1 = $nota_A8_L1_N1 + $nota_A8_L1_N2 + $nota_A8_L1_N3 + $nota_A8_L1_N4 + $nota_A8_L1_N5 + $nota_A8_L1_N6 + $nota_A8_L1_N7 + $notaAu_A8_L1;


$nota_A8_L2_N1 = ($row_datos_control_notas_A8["nt_21"] * $porcentaje_A8_L2_N1)/20;
$nota_A8_L2_N2 = ($row_datos_control_notas_A8["nt_22"] * $porcentaje_A8_L2_N2)/20;
$nota_A8_L2_N3 = ($row_datos_control_notas_A8["nt_23"] * $porcentaje_A8_L2_N3)/20;
$nota_A8_L2_N4 = ($row_datos_control_notas_A8["nt_24"] * $porcentaje_A8_L2_N4)/20;
$nota_A8_L2_N5 = ($row_datos_control_notas_A8["nt_25"] * $porcentaje_A8_L2_N5)/20;
$nota_A8_L2_N6 = ($row_datos_control_notas_A8["nt_26"] * $porcentaje_A8_L2_N6)/20;
$nota_A8_L2_N7 = ($row_datos_control_notas_A8["nt_27"] * $porcentaje_A8_L2_N7)/20;
$notaAu_A8_L2 = $row_datos_control_notas_A8["nt_Au2"];

$nota_final_A8_L2 = $nota_A8_L2_N1 + $nota_A8_L2_N2 + $nota_A8_L2_N3 + $nota_A8_L2_N4 + $nota_A8_L2_N5 + $nota_A8_L2_N6 + $nota_A8_L2_N7 + $notaAu_A8_L2;





$nota_A8_L3_N1 = ($row_datos_control_notas_A8["nt_31"] * $porcentaje_A8_L3_N1)/20;
$nota_A8_L3_N2 = ($row_datos_control_notas_A8["nt_32"] * $porcentaje_A8_L3_N2)/20;
$nota_A8_L3_N3 = ($row_datos_control_notas_A8["nt_33"] * $porcentaje_A8_L3_N3)/20;
$nota_A8_L3_N4 = ($row_datos_control_notas_A8["nt_34"] * $porcentaje_A8_L3_N4)/20;
$nota_A8_L3_N5 = ($row_datos_control_notas_A8["nt_35"] * $porcentaje_A8_L3_N5)/20;
$nota_A8_L3_N6 = ($row_datos_control_notas_A8["nt_36"] * $porcentaje_A8_L3_N6)/20;
$nota_A8_L3_N7 = ($row_datos_control_notas_A8["nt_37"] * $porcentaje_A8_L3_N7)/20;
$notaAu_A8_L3 = $row_datos_control_notas_A8["nt_Au3"];

$nota_final_A8_L3 = $nota_A8_L3_N1 + $nota_A8_L3_N2 + $nota_A8_L3_N3 + $nota_A8_L3_N4 + $nota_A8_L3_N5 + $nota_A8_L3_N6 + $nota_A8_L3_N7 + $notaAu_A8_L3;




$notaAu_Final_A8 = $row_datos_control_notas_A8["nt_AuF"];








$query_notas_A9 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 9
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A9 = mysqli_query($enlace, $query_notas_A9) or die(mysqli_error());
$row_datos_control_notas_A9 = mysqli_fetch_array($datos_control_notas_A9); 




$nota_A9_L1_N1 = ($row_datos_control_notas_A9["nt_11"] * $porcentaje_A9_L1_N1)/20;
$nota_A9_L1_N2 = ($row_datos_control_notas_A9["nt_12"] * $porcentaje_A9_L1_N2)/20;
$nota_A9_L1_N3 = ($row_datos_control_notas_A9["nt_13"] * $porcentaje_A9_L1_N3)/20;
$nota_A9_L1_N4 = ($row_datos_control_notas_A9["nt_14"] * $porcentaje_A9_L1_N4)/20;
$nota_A9_L1_N5 = ($row_datos_control_notas_A9["nt_15"] * $porcentaje_A9_L1_N5)/20;
$nota_A9_L1_N6 = ($row_datos_control_notas_A9["nt_16"] * $porcentaje_A9_L1_N6)/20;
$nota_A9_L1_N7 = ($row_datos_control_notas_A9["nt_17"] * $porcentaje_A9_L1_N7)/20;
$notaAu_A9_L1 = $row_datos_control_notas_A9["nt_Au1"];

$nota_final_A9_L1 = $nota_A9_L1_N1 + $nota_A9_L1_N2 + $nota_A9_L1_N3 + $nota_A9_L1_N4 + $nota_A9_L1_N5 + $nota_A9_L1_N6 + $nota_A9_L1_N7 + $notaAu_A9_L1;




$nota_A9_L2_N1 = ($row_datos_control_notas_A9["nt_21"] * $porcentaje_A9_L2_N1)/20;
$nota_A9_L2_N2 = ($row_datos_control_notas_A9["nt_22"] * $porcentaje_A9_L2_N2)/20;
$nota_A9_L2_N3 = ($row_datos_control_notas_A9["nt_23"] * $porcentaje_A9_L2_N3)/20;
$nota_A9_L2_N4 = ($row_datos_control_notas_A9["nt_24"] * $porcentaje_A9_L2_N4)/20;
$nota_A9_L2_N5 = ($row_datos_control_notas_A9["nt_25"] * $porcentaje_A9_L2_N5)/20;
$nota_A9_L2_N6 = ($row_datos_control_notas_A9["nt_26"] * $porcentaje_A9_L2_N6)/20;
$nota_A9_L2_N7 = ($row_datos_control_notas_A9["nt_27"] * $porcentaje_A9_L2_N7)/20;
$notaAu_A9_L2 = $row_datos_control_notas_A9["nt_Au2"];

$nota_final_A9_L2 = $nota_A9_L2_N1 + $nota_A9_L2_N2 + $nota_A9_L2_N3 + $nota_A9_L2_N4 + $nota_A9_L2_N5 + $nota_A9_L2_N6 + $nota_A9_L2_N7 + $notaAu_A9_L2;




$nota_A9_L3_N1 = ($row_datos_control_notas_A9["nt_31"] * $porcentaje_A9_L3_N1)/20;
$nota_A9_L3_N2 = ($row_datos_control_notas_A9["nt_32"] * $porcentaje_A9_L3_N2)/20;
$nota_A9_L3_N3 = ($row_datos_control_notas_A9["nt_33"] * $porcentaje_A9_L3_N3)/20;
$nota_A9_L3_N4 = ($row_datos_control_notas_A9["nt_34"] * $porcentaje_A9_L3_N4)/20;
$nota_A9_L3_N5 = ($row_datos_control_notas_A9["nt_35"] * $porcentaje_A9_L3_N5)/20;
$nota_A9_L3_N6 = ($row_datos_control_notas_A9["nt_36"] * $porcentaje_A9_L3_N6)/20;
$nota_A9_L3_N7 = ($row_datos_control_notas_A9["nt_37"] * $porcentaje_A9_L3_N7)/20;
$notaAu_A9_L3 = $row_datos_control_notas_A9["nt_Au3"];

$nota_final_A9_L3 = $nota_A9_L3_N1 + $nota_A9_L3_N2 + $nota_A9_L3_N3 + $nota_A9_L3_N4 + $nota_A9_L3_N5 + $nota_A9_L3_N6 + $nota_A9_L3_N7 + $notaAu_A9_L3;



$notaAu_Final_A9 = $row_datos_control_notas_A9["nt_AuF"];







$query_notas_A10 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 10
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A10 = mysqli_query($enlace, $query_notas_A10) or die(mysqli_error());
$row_datos_control_notas_A10 = mysqli_fetch_array($datos_control_notas_A10); 




$nota_A10_L1_N1 = ($row_datos_control_notas_A10["nt_11"] * $porcentaje_A10_L1_N1)/20;
$nota_A10_L1_N2 = ($row_datos_control_notas_A10["nt_12"] * $porcentaje_A10_L1_N2)/20;
$nota_A10_L1_N3 = ($row_datos_control_notas_A10["nt_13"] * $porcentaje_A10_L1_N3)/20;
$nota_A10_L1_N4 = ($row_datos_control_notas_A10["nt_14"] * $porcentaje_A10_L1_N4)/20;
$nota_A10_L1_N5 = ($row_datos_control_notas_A10["nt_15"] * $porcentaje_A10_L1_N5)/20;
$nota_A10_L1_N6 = ($row_datos_control_notas_A10["nt_16"] * $porcentaje_A10_L1_N6)/20;
$nota_A10_L1_N7 = ($row_datos_control_notas_A10["nt_17"] * $porcentaje_A10_L1_N7)/20;
$notaAu_A10_L1 = $row_datos_control_notas_A10["nt_Au1"];

$nota_final_A10_L1 = $nota_A10_L1_N1 + $nota_A10_L1_N2 + $nota_A10_L1_N3 + $nota_A10_L1_N4 + $nota_A10_L1_N5 + $nota_A10_L1_N6 + $nota_A10_L1_N7 + $notaAu_A10_L1;



$nota_A10_L2_N1 = ($row_datos_control_notas_A10["nt_21"] * $porcentaje_A10_L2_N1)/20;
$nota_A10_L2_N2 = ($row_datos_control_notas_A10["nt_22"] * $porcentaje_A10_L2_N2)/20;
$nota_A10_L2_N3 = ($row_datos_control_notas_A10["nt_23"] * $porcentaje_A10_L2_N3)/20;
$nota_A10_L2_N4 = ($row_datos_control_notas_A10["nt_24"] * $porcentaje_A10_L2_N4)/20;
$nota_A10_L2_N5 = ($row_datos_control_notas_A10["nt_25"] * $porcentaje_A10_L2_N5)/20;
$nota_A10_L2_N6 = ($row_datos_control_notas_A10["nt_26"] * $porcentaje_A10_L2_N6)/20;
$nota_A10_L2_N7 = ($row_datos_control_notas_A10["nt_27"] * $porcentaje_A10_L2_N7)/20;
$notaAu_A10_L2 = $row_datos_control_notas_A10["nt_Au2"];

$nota_final_A10_L2 = $nota_A10_L2_N1 + $nota_A10_L2_N2 + $nota_A10_L2_N3 + $nota_A10_L2_N4 + $nota_A10_L2_N5 + $nota_A10_L2_N6 + $nota_A10_L2_N7 + $notaAu_A10_L2;





$nota_A10_L3_N1 = ($row_datos_control_notas_A10["nt_31"] * $porcentaje_A10_L3_N1)/20;
$nota_A10_L3_N2 = ($row_datos_control_notas_A10["nt_32"] * $porcentaje_A10_L3_N2)/20;
$nota_A10_L3_N3 = ($row_datos_control_notas_A10["nt_33"] * $porcentaje_A10_L3_N3)/20;
$nota_A10_L3_N4 = ($row_datos_control_notas_A10["nt_34"] * $porcentaje_A10_L3_N4)/20;
$nota_A10_L3_N5 = ($row_datos_control_notas_A10["nt_35"] * $porcentaje_A10_L3_N5)/20;
$nota_A10_L3_N6 = ($row_datos_control_notas_A10["nt_36"] * $porcentaje_A10_L3_N6)/20;
$nota_A10_L3_N7 = ($row_datos_control_notas_A10["nt_37"] * $porcentaje_A10_L3_N7)/20;
$notaAu_A10_L3 = $row_datos_control_notas_A10["nt_Au3"];

$nota_final_A10_L3 = $nota_A10_L3_N1 + $nota_A10_L3_N2 + $nota_A10_L3_N3 + $nota_A10_L3_N4 + $nota_A10_L3_N5 + $nota_A10_L3_N6 + $nota_A10_L3_N7 + $notaAu_A10_L3;



$notaAu_Final_A10 = $row_datos_control_notas_A10["nt_AuF"];







$query_notas_A11 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 11
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A11 = mysqli_query($enlace, $query_notas_A11) or die(mysqli_error());
$row_datos_control_notas_A11 = mysqli_fetch_array($datos_control_notas_A11); 




$nota_A11_L1_N1 = ($row_datos_control_notas_A11["nt_11"] * $porcentaje_A11_L1_N1)/20;
$nota_A11_L1_N2 = ($row_datos_control_notas_A11["nt_12"] * $porcentaje_A11_L1_N2)/20;
$nota_A11_L1_N3 = ($row_datos_control_notas_A11["nt_13"] * $porcentaje_A11_L1_N3)/20;
$nota_A11_L1_N4 = ($row_datos_control_notas_A11["nt_14"] * $porcentaje_A11_L1_N4)/20;
$nota_A11_L1_N5 = ($row_datos_control_notas_A11["nt_15"] * $porcentaje_A11_L1_N5)/20;
$nota_A11_L1_N6 = ($row_datos_control_notas_A11["nt_16"] * $porcentaje_A11_L1_N6)/20;
$nota_A11_L1_N7 = ($row_datos_control_notas_A11["nt_17"] * $porcentaje_A11_L1_N7)/20;
$notaAu_A11_L1 = $row_datos_control_notas_A11["nt_Au1"];

$nota_final_A11_L1 = $nota_A11_L1_N1 + $nota_A11_L1_N2 + $nota_A11_L1_N3 + $nota_A11_L1_N4 + $nota_A11_L1_N5 + $nota_A11_L1_N6 + $nota_A11_L1_N7 + $notaAu_A11_L1;




$nota_A11_L2_N1 = ($row_datos_control_notas_A11["nt_21"] * $porcentaje_A11_L2_N1)/20;
$nota_A11_L2_N2 = ($row_datos_control_notas_A11["nt_22"] * $porcentaje_A11_L2_N2)/20;
$nota_A11_L2_N3 = ($row_datos_control_notas_A11["nt_23"] * $porcentaje_A11_L2_N3)/20;
$nota_A11_L2_N4 = ($row_datos_control_notas_A11["nt_24"] * $porcentaje_A11_L2_N4)/20;
$nota_A11_L2_N5 = ($row_datos_control_notas_A11["nt_25"] * $porcentaje_A11_L2_N5)/20;
$nota_A11_L2_N6 = ($row_datos_control_notas_A11["nt_26"] * $porcentaje_A11_L2_N6)/20;
$nota_A11_L2_N7 = ($row_datos_control_notas_A11["nt_27"] * $porcentaje_A11_L2_N7)/20;
$notaAu_A11_L2 = $row_datos_control_notas_A11["nt_Au2"];

$nota_final_A11_L2 = $nota_A11_L2_N1 + $nota_A11_L2_N2 + $nota_A11_L2_N3 + $nota_A11_L2_N4 + $nota_A11_L2_N5 + $nota_A11_L2_N6 + $nota_A11_L2_N7 + $notaAu_A11_L2;




$nota_A11_L3_N1 = ($row_datos_control_notas_A11["nt_31"] * $porcentaje_A11_L3_N1)/20;
$nota_A11_L3_N2 = ($row_datos_control_notas_A11["nt_32"] * $porcentaje_A11_L3_N2)/20;
$nota_A11_L3_N3 = ($row_datos_control_notas_A11["nt_33"] * $porcentaje_A11_L3_N3)/20;
$nota_A11_L3_N4 = ($row_datos_control_notas_A11["nt_34"] * $porcentaje_A11_L3_N4)/20;
$nota_A11_L3_N5 = ($row_datos_control_notas_A11["nt_35"] * $porcentaje_A11_L3_N5)/20;
$nota_A11_L3_N6 = ($row_datos_control_notas_A11["nt_36"] * $porcentaje_A11_L3_N6)/20;
$nota_A11_L3_N7 = ($row_datos_control_notas_A11["nt_37"] * $porcentaje_A11_L3_N7)/20;
$notaAu_A11_L3 = $row_datos_control_notas_A11["nt_Au3"];

$nota_final_A11_L3 = $nota_A11_L3_N1 + $nota_A11_L3_N2 + $nota_A11_L3_N3 + $nota_A11_L3_N4 + $nota_A11_L3_N5 + $nota_A11_L3_N6 + $nota_A11_L3_N7 + $notaAu_A11_L3;




$notaAu_Final_A11 = $row_datos_control_notas_A11["nt_AuF"];








$query_notas_A12 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 12
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A12 = mysqli_query($enlace, $query_notas_A12) or die(mysqli_error());
$row_datos_control_notas_A12 = mysqli_fetch_array($datos_control_notas_A12); 




$nota_A12_L1_N1 = ($row_datos_control_notas_A12["nt_11"] * $porcentaje_A12_L1_N1)/20;
$nota_A12_L1_N2 = ($row_datos_control_notas_A12["nt_12"] * $porcentaje_A12_L1_N2)/20;
$nota_A12_L1_N3 = ($row_datos_control_notas_A12["nt_13"] * $porcentaje_A12_L1_N3)/20;
$nota_A12_L1_N4 = ($row_datos_control_notas_A12["nt_14"] * $porcentaje_A12_L1_N4)/20;
$nota_A12_L1_N5 = ($row_datos_control_notas_A12["nt_15"] * $porcentaje_A12_L1_N5)/20;
$nota_A12_L1_N6 = ($row_datos_control_notas_A12["nt_16"] * $porcentaje_A12_L1_N6)/20;
$nota_A12_L1_N7 = ($row_datos_control_notas_A12["nt_17"] * $porcentaje_A12_L1_N7)/20;
$notaAu_A12_L1 = $row_datos_control_notas_A12["nt_Au1"];

$nota_final_A12_L1 = $nota_A12_L1_N1 + $nota_A12_L1_N2 + $nota_A12_L1_N3 + $nota_A12_L1_N4 + $nota_A12_L1_N5 + $nota_A12_L1_N6 + $nota_A12_L1_N7 + $notaAu_A12_L1;



$nota_A12_L2_N1 = ($row_datos_control_notas_A12["nt_21"] * $porcentaje_A12_L2_N1)/20;
$nota_A12_L2_N2 = ($row_datos_control_notas_A12["nt_22"] * $porcentaje_A12_L2_N2)/20;
$nota_A12_L2_N3 = ($row_datos_control_notas_A12["nt_23"] * $porcentaje_A12_L2_N3)/20;
$nota_A12_L2_N4 = ($row_datos_control_notas_A12["nt_24"] * $porcentaje_A12_L2_N4)/20;
$nota_A12_L2_N5 = ($row_datos_control_notas_A12["nt_25"] * $porcentaje_A12_L2_N5)/20;
$nota_A12_L2_N6 = ($row_datos_control_notas_A12["nt_26"] * $porcentaje_A12_L2_N6)/20;
$nota_A12_L2_N7 = ($row_datos_control_notas_A12["nt_27"] * $porcentaje_A12_L2_N7)/20;
$notaAu_A12_L2 = $row_datos_control_notas_A12["nt_Au2"];

$nota_final_A12_L2 = $nota_A12_L2_N1 + $nota_A12_L2_N2 + $nota_A12_L2_N3 + $nota_A12_L2_N4 + $nota_A12_L2_N5 + $nota_A12_L2_N6 + $nota_A12_L2_N7 + $notaAu_A12_L2;




$nota_A12_L3_N1 = ($row_datos_control_notas_A12["nt_31"] * $porcentaje_A12_L3_N1)/20;
$nota_A12_L3_N2 = ($row_datos_control_notas_A12["nt_32"] * $porcentaje_A12_L3_N2)/20;
$nota_A12_L3_N3 = ($row_datos_control_notas_A12["nt_33"] * $porcentaje_A12_L3_N3)/20;
$nota_A12_L3_N4 = ($row_datos_control_notas_A12["nt_34"] * $porcentaje_A12_L3_N4)/20;
$nota_A12_L3_N5 = ($row_datos_control_notas_A12["nt_35"] * $porcentaje_A12_L3_N5)/20;
$nota_A12_L3_N6 = ($row_datos_control_notas_A12["nt_36"] * $porcentaje_A12_L3_N6)/20;
$nota_A12_L3_N7 = ($row_datos_control_notas_A12["nt_37"] * $porcentaje_A12_L3_N7)/20;
$notaAu_A12_L3 = $row_datos_control_notas_A12["nt_Au3"];

$nota_final_A12_L3 = $nota_A12_L3_N1 + $nota_A12_L3_N2 + $nota_A12_L3_N3 + $nota_A12_L3_N4 + $nota_A12_L3_N5 + $nota_A12_L3_N6 + $nota_A12_L3_N7 + $notaAu_A12_L3;




$notaAu_Final_A12 = $row_datos_control_notas_A12["nt_AuF"];








$query_notas_A13 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 13
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A13 = mysqli_query($enlace, $query_notas_A13) or die(mysqli_error());
$row_datos_control_notas_A13 = mysqli_fetch_array($datos_control_notas_A13); 




$nota_A13_L1_N1 = ($row_datos_control_notas_A13["nt_11"] * $porcentaje_A13_L1_N1)/20;
$nota_A13_L1_N2 = ($row_datos_control_notas_A13["nt_12"] * $porcentaje_A13_L1_N2)/20;
$nota_A13_L1_N3 = ($row_datos_control_notas_A13["nt_13"] * $porcentaje_A13_L1_N3)/20;
$nota_A13_L1_N4 = ($row_datos_control_notas_A13["nt_14"] * $porcentaje_A13_L1_N4)/20;
$nota_A13_L1_N5 = ($row_datos_control_notas_A13["nt_15"] * $porcentaje_A13_L1_N5)/20;
$nota_A13_L1_N6 = ($row_datos_control_notas_A13["nt_16"] * $porcentaje_A13_L1_N6)/20;
$nota_A13_L1_N7 = ($row_datos_control_notas_A13["nt_17"] * $porcentaje_A13_L1_N7)/20;
$notaAu_A13_L1 = $row_datos_control_notas_A13["nt_Au1"];

$nota_final_A13_L1 = $nota_A13_L1_N1 + $nota_A13_L1_N2 + $nota_A13_L1_N3 + $nota_A13_L1_N4 + $nota_A13_L1_N5 + $nota_A13_L1_N6 + $nota_A13_L1_N7 + $notaAu_A13_L1;



$nota_A13_L2_N1 = ($row_datos_control_notas_A13["nt_21"] * $porcentaje_A13_L2_N1)/20;
$nota_A13_L2_N2 = ($row_datos_control_notas_A13["nt_22"] * $porcentaje_A13_L2_N2)/20;
$nota_A13_L2_N3 = ($row_datos_control_notas_A13["nt_23"] * $porcentaje_A13_L2_N3)/20;
$nota_A13_L2_N4 = ($row_datos_control_notas_A13["nt_24"] * $porcentaje_A13_L2_N4)/20;
$nota_A13_L2_N5 = ($row_datos_control_notas_A13["nt_25"] * $porcentaje_A13_L2_N5)/20;
$nota_A13_L2_N6 = ($row_datos_control_notas_A13["nt_26"] * $porcentaje_A13_L2_N6)/20;
$nota_A13_L2_N7 = ($row_datos_control_notas_A13["nt_27"] * $porcentaje_A13_L2_N7)/20;
$notaAu_A13_L2 = $row_datos_control_notas_A13["nt_Au2"];

$nota_final_A13_L2 = $nota_A13_L2_N1 + $nota_A13_L2_N2 + $nota_A13_L2_N3 + $nota_A13_L2_N4 + $nota_A13_L2_N5 + $nota_A13_L2_N6 + $nota_A13_L2_N7 + $notaAu_A13_L2;




$nota_A13_L3_N1 = ($row_datos_control_notas_A13["nt_31"] * $porcentaje_A13_L3_N1)/20;
$nota_A13_L3_N2 = ($row_datos_control_notas_A13["nt_32"] * $porcentaje_A13_L3_N2)/20;
$nota_A13_L3_N3 = ($row_datos_control_notas_A13["nt_33"] * $porcentaje_A13_L3_N3)/20;
$nota_A13_L3_N4 = ($row_datos_control_notas_A13["nt_34"] * $porcentaje_A13_L3_N4)/20;
$nota_A13_L3_N5 = ($row_datos_control_notas_A13["nt_35"] * $porcentaje_A13_L3_N5)/20;
$nota_A13_L3_N6 = ($row_datos_control_notas_A13["nt_36"] * $porcentaje_A13_L3_N6)/20;
$nota_A13_L3_N7 = ($row_datos_control_notas_A13["nt_37"] * $porcentaje_A13_L3_N7)/20;
$notaAu_A13_L3 = $row_datos_control_notas_A13["nt_Au3"];

$nota_final_A13_L3 = $nota_A13_L3_N1 + $nota_A13_L3_N2 + $nota_A13_L3_N3 + $nota_A13_L3_N4 + $nota_A13_L3_N5 + $nota_A13_L3_N6 + $nota_A13_L3_N7 + $notaAu_A13_L3;




$notaAu_Final_A13 = $row_datos_control_notas_A13["nt_AuF"];







$query_notas_A14 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_del_est'
               and materia = 14
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas_A14 = mysqli_query($enlace, $query_notas_A14) or die(mysqli_error());
$row_datos_control_notas_A14 = mysqli_fetch_array($datos_control_notas_A14); 




$nota_A14_L1_N1 = ($row_datos_control_notas_A14["nt_11"] * $porcentaje_A14_L1_N1)/20;
$nota_A14_L1_N2 = ($row_datos_control_notas_A14["nt_12"] * $porcentaje_A14_L1_N2)/20;
$nota_A14_L1_N3 = ($row_datos_control_notas_A14["nt_13"] * $porcentaje_A14_L1_N3)/20;
$nota_A14_L1_N4 = ($row_datos_control_notas_A14["nt_14"] * $porcentaje_A14_L1_N4)/20;
$nota_A14_L1_N5 = ($row_datos_control_notas_A14["nt_15"] * $porcentaje_A14_L1_N5)/20;
$nota_A14_L1_N6 = ($row_datos_control_notas_A14["nt_16"] * $porcentaje_A14_L1_N6)/20;
$nota_A14_L1_N7 = ($row_datos_control_notas_A14["nt_17"] * $porcentaje_A14_L1_N7)/20;
$notaAu_A14_L1 = $row_datos_control_notas_A14["nt_Au1"];

$nota_final_A14_L1 = $nota_A14_L1_N1 + $nota_A14_L1_N2 + $nota_A14_L1_N3 + $nota_A14_L1_N4 + $nota_A14_L1_N5 + $nota_A14_L1_N6 + $nota_A14_L1_N7 + $notaAu_A14_L1;



$nota_A14_L2_N1 = ($row_datos_control_notas_A14["nt_21"] * $porcentaje_A14_L2_N1)/20;
$nota_A14_L2_N2 = ($row_datos_control_notas_A14["nt_22"] * $porcentaje_A14_L2_N2)/20;
$nota_A14_L2_N3 = ($row_datos_control_notas_A14["nt_23"] * $porcentaje_A14_L2_N3)/20;
$nota_A14_L2_N4 = ($row_datos_control_notas_A14["nt_24"] * $porcentaje_A14_L2_N4)/20;
$nota_A14_L2_N5 = ($row_datos_control_notas_A14["nt_25"] * $porcentaje_A14_L2_N5)/20;
$nota_A14_L2_N6 = ($row_datos_control_notas_A14["nt_26"] * $porcentaje_A14_L2_N6)/20;
$nota_A14_L2_N7 = ($row_datos_control_notas_A14["nt_27"] * $porcentaje_A14_L2_N7)/20;
$notaAu_A14_L2 = $row_datos_control_notas_A14["nt_Au2"];

$nota_final_A14_L2 = $nota_A14_L2_N1 + $nota_A14_L2_N2 + $nota_A14_L2_N3 + $nota_A14_L2_N4 + $nota_A14_L2_N5 + $nota_A14_L2_N6 + $nota_A14_L2_N7 + $notaAu_A14_L2;




$nota_A14_L3_N1 = ($row_datos_control_notas_A14["nt_31"] * $porcentaje_A14_L3_N1)/20;
$nota_A14_L3_N2 = ($row_datos_control_notas_A14["nt_32"] * $porcentaje_A14_L3_N2)/20;
$nota_A14_L3_N3 = ($row_datos_control_notas_A14["nt_33"] * $porcentaje_A14_L3_N3)/20;
$nota_A14_L3_N4 = ($row_datos_control_notas_A14["nt_34"] * $porcentaje_A14_L3_N4)/20;
$nota_A14_L3_N5 = ($row_datos_control_notas_A14["nt_35"] * $porcentaje_A14_L3_N5)/20;
$nota_A14_L3_N6 = ($row_datos_control_notas_A14["nt_36"] * $porcentaje_A14_L3_N6)/20;
$nota_A14_L3_N7 = ($row_datos_control_notas_A14["nt_37"] * $porcentaje_A14_L3_N7)/20;
$notaAu_A14_L3 = $row_datos_control_notas_A14["nt_Au3"];

$nota_final_A14_L3 = $nota_A14_L3_N1 + $nota_A14_L3_N2 + $nota_A14_L3_N3 + $nota_A14_L3_N4 + $nota_A14_L3_N5 + $nota_A14_L3_N6 + $nota_A14_L3_N7 + $notaAu_A14_L3;




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
asignaturas.m_mmm, asignaturas.m_abrev, asignaturas.n_nnn, asignaturas.n_abrev

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




           
<div class="card border-primary ml-4 mt-3 mr-4">
  <div class="card-header text-white bg-secondary" style='text-align:center;vertical-align:middle; font-size: 22px;'>Histórico de notas por actividad realizada en cada asignatura.</div>

<div class="card-body">

<div class="form-row" >   <!--  fila superior tablas grandes-->


	<div class="col-md-1 mb-1">  <!--  primera tabla superior asignaturas-->

<!--  Notas: antes confundieron los th con los td... los th son solo para titulos, el contenido de las celdas es con td-->


        <table class="ml-2" style='text-align:center;vertical-align:middle; width:66%;'>   
                                     
            <tr>
            <td class="borde_negro" BGCOLOR="<?php echo $color0;?>" style="height: 71px;"><b>Asig.</b></td>
            </tr>
           

            <tr>
            <td class="borde_izq_y_der_blanco" style="height: 23px;"></td>
            </tr>

            <tr>
            <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['a_abrev'];?></td>
            </tr>
                <tr>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['b_abrev'];?></td>
                </tr>
            <tr>
            <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['c_abrev'];?></td>
            </tr>
                <tr>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['d_abrev'];?></td>
                </tr>
            <tr>
            <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['e_abrev'];?></td>
            </tr>
                <tr>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['f_abrev'];?></td>
                </tr>
            <tr>
            <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['g_abrev'];?></td>
            </tr>
                <tr>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['h_abrev'];?></td>
                </tr>
            <tr>
            <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['i_abrev'];?></td>
            </tr>
                <tr>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['j_abrev'];?></td>
                </tr>
            <tr>
            <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['k_abrev'];?></td>
            </tr>
                <tr>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['l_abrev'];?></td>
                </tr>

            <tr>
            <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['m_abrev'];?></td>
            </tr>
                <tr>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['n_abrev'];?></td>
                </tr>



            <tr>
            <td class="borde_izq_y_der_blanco" style="height: 46px;"></td>
            </tr>
                             
          
                           
        </table>   


	</div> <!--  tabla superior asignaturas 1 columna-->







	<div class="col-md-3 mb-1">  <!--  tabla 1er Lapso-->



        <table class="" style='text-align:center;vertical-align:middle'>  
<tr>
    <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color1;?>" style="width:77%; height: 23px;">1er Lapso</th>
    <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color1a;?>" style="width:11%; font-size: 12px; height: 69px;">Aux.</th>
    <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color1;?>" style="width:12%; font-size: 12px; height: 69px;">Nota Def.</th>
</tr>

            <tr>  
                <td class="borde_negro" colspan="7" style="width:77%; height: 23px;"></td>
            </tr>
                           
            <tr>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act1</th>  
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act2</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act3</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act4</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act5</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act6</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act7</th>
            <tr>

            <tr>  
                <td class="borde_izq_y_der_blanco" colspan="9" style="width:100%; height: 23px;"></td>   
            </tr>

            <tr> <!--  1era materia-->

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A1["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_14"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A1_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A1_L1=number_format($nota_final_A1_L1, 0, ',', ''); echo $fin_A1_L1;?>"><b><?php echo $nota_final_A1_L1;?></b></span></td> 

            </tr>  

            <tr> <!--  2da materia-->
<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A2["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_14"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A2_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A2_L1=number_format($nota_final_A2_L1, 0, ',', ''); echo $fin_A2_L1;?>"><b><?php echo $nota_final_A2_L1;?></b></span></td> 
            </tr>

            <tr> <!--  3era materia-->

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A3["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_14"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A3_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A3_L1=number_format($nota_final_A3_L1, 0, ',', ''); echo $fin_A3_L1;?>"><b><?php echo $nota_final_A3_L1;?></b></span></td> 

 
            </tr>

            <tr> <!--  4ta materia-->

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A4["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_14"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A4_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A4_L1=number_format($nota_final_A4_L1, 0, ',', ''); echo $fin_A4_L1;?>"><b><?php echo $nota_final_A4_L1;?></b></span></td>              




            </tr>

            <tr> <!--  5ta materia-->

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A5["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_14"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A5_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A5_L1=number_format($nota_final_A5_L1, 0, ',', ''); echo $fin_A5_L1;?>"><b><?php echo $nota_final_A5_L1;?></b></span></td>               




            </tr>

            <tr> <!--  6ta materia-->

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A6["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_14"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A6_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A6_L1=number_format($nota_final_A6_L1, 0, ',', ''); echo $fin_A6_L1;?>"><b><?php echo $nota_final_A6_L1;?></b></span></td>            



            </tr>

            <tr> <!--  7ma materia-->

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A7["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_14"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A7_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A7_L1=number_format($nota_final_A7_L1, 0, ',', ''); echo $fin_A7_L1;?>"><b><?php echo $nota_final_A7_L1;?></b></span></td>              



            </tr>

            <tr> <!--  8va materia-->
               
<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A8["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_14"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A8_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A8_L1=number_format($nota_final_A8_L1, 0, ',', ''); echo $fin_A8_L1;?>"><b><?php echo $nota_final_A8_L1;?></b></span></td>    


            </tr>

            <tr> <!--  9na materia-->
              
<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A9["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_14"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A9_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A9_L1=number_format($nota_final_A9_L1, 0, ',', ''); echo $fin_A9_L1;?>"><b><?php echo $nota_final_A9_L1;?></b></span></td>    



            </tr>

            <tr> <!--  10ma materia-->
              
<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A10["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_14"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A10_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A10_L1=number_format($nota_final_A10_L1, 0, ',', ''); echo $fin_A10_L1;?>"><b><?php echo $nota_final_A10_L1;?></b></span></td> 



            </tr>

             <tr> <!--  11 materia-->
             
<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A11["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_14"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A11_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A11_L1=number_format($nota_final_A11_L1, 0, ',', ''); echo $fin_A11_L1;?>"><b><?php echo $nota_final_A11_L1;?></b></span></td>   



            </tr>

            <tr> <!--  12 materia-->
              
<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A12["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_14"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A12_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A12_L1=number_format($nota_final_A12_L1, 0, ',', ''); echo $fin_A12_L1;?>"><b><?php echo $nota_final_A12_L1;?></b></span></td>   



            </tr>



  <tr> <!--  13 materia-->
              
<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A13["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_14"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A13_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A13_L1=number_format($nota_final_A13_L1, 0, ',', ''); echo $fin_A13_L1;?>"><b><?php echo $nota_final_A13_L1;?></b></span></td>   



            </tr>




              <tr> <!--  14 materia-->
              
<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L1_N1;?>pts">
<?php echo $row_datos_control_notas_A14["nt_11"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L1_N2;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_12"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L1_N3;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_13"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L1_N4;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_14"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L1_N5;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_15"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L1_N6;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_16"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L1_N7;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_17"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color1a;?>"><b><?php echo $notaAu_A14_L1;?></b></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A14_L1=number_format($nota_final_A14_L1, 0, ',', ''); echo $fin_A14_L1;?>"><b><?php echo $nota_final_A14_L1;?></b></span></td>   



            </tr>






            <tr>  
                <td class="" colspan="7" style="width:70%; height: 23px;"></td> <!--  bordes vacios-->
                <td class="borde_inf_y_sup_negro"  style="width:11%; height: 23px;"></td>
                <td class=""  style="width:19%; height: 23px;"></td>
            </tr>

            <tr> <!--  promedios primer lapso-->
                <td class="" colspan="4" style="width:40%; height: 23px;"></td>
                <td class="borde_izq_inf_sup_negro" colspan="3" style="width:30%; height: 23px; "BGCOLOR="<?php echo $color1;?>"><b>Promedio 1°L:</b></td>
               
                <td class="borde_inf_y_sup_negro" style="width:11%; height: 23px; "BGCOLOR="<?php echo $color1;?>"></td> 

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

$el_promedio_divisor_L1 = $A1_L1+$A2_L1+$A3_L1+$A4_L1+$A5_L1+$A6_L1+$A7_L1+$A8_L1+$A9_L1+$A10_L1+$A11_L1+$A12_L1+$A13_L1+$A14_L1; 

$promedio_primer_L1 = ($nota_final_A1_L1 + $nota_final_A2_L1 + $nota_final_A3_L1 + $nota_final_A4_L1 + $nota_final_A5_L1 + $nota_final_A6_L1
                           + $nota_final_A7_L1 + $nota_final_A8_L1 + $nota_final_A9_L1 + $nota_final_A10_L1 + $nota_final_A11_L1 + $nota_final_A12_L1
                           + $nota_final_A13_L1 + $nota_final_A14_L1) / $el_promedio_divisor_L1 ?>


<td class="borde_der_inf_sup_negro" style="width:19%; font-size: 18px; height: 23px; "BGCOLOR="<?php echo $color1;?>">
<span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $proL1=number_format($promedio_primer_L1, 0, ',', ''); echo $proL1;?>">
<b><?php $pro_dec_L1=number_format($promedio_primer_L1, 1, ',', ''); echo $pro_dec_L1;?></b></span></td>  
           
            </tr>
                           
        </table>   


	</div> <!--  cierre 1er lapso-->





	<div class="col-md-3 mb-1">  <!--  tabla 2do Lapso-->




        <table class="ml-4" style='text-align:center;vertical-align:middle'>   
<tr>
    <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color2;?>" style="width:77%; height: 23px;">2do Lapso</th>
    <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color2a;?>" style="width:11%; height: 69px; font-size: 12px;">Aux.</th>
    <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color2;?>" style="width:12%; height: 69px; font-size: 12px;">Nota Def.</th>
</tr>

            <tr>  
                <td class="borde_negro" colspan="7" style="width:77%; height: 23px;"></td>
            </tr>
                           
            <tr>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act1</th>  
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act2</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act3</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act4</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act5</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act6</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act7</th>
            <tr>

            <tr>  
                <td class="borde_izq_y_der_blanco" colspan="9" style="width:100%; height: 23px;"></td>
            </tr>

            <tr> <!--  1era materia-->

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A1["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_24"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A1_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A1_L2=number_format($nota_final_A1_L2, 0, ',', ''); echo $fin_A1_L2;?>"><b><?php echo $nota_final_A1_L2;?></b></span></td> 

            </tr>  

            <tr> <!--  2da materia-->
<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A2["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_24"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A2_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A2_L2=number_format($nota_final_A2_L2, 0, ',', ''); echo $fin_A2_L2;?>"><b><?php echo $nota_final_A2_L2;?></b></span></td> 
            </tr>

            <tr> <!--  3era materia-->

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A3["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_24"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A3_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A3_L2=number_format($nota_final_A3_L2, 0, ',', ''); echo $fin_A3_L2;?>"><b><?php echo $nota_final_A3_L2;?></b></span></td> 

 
            </tr>

            <tr> <!--  4ta materia-->

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A4["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_24"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A4_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A4_L2=number_format($nota_final_A4_L2, 0, ',', ''); echo $fin_A4_L2;?>"><b><?php echo $nota_final_A4_L2;?></b></span></td>              




            </tr>

            <tr> <!--  5ta materia-->

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A5["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_24"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A5_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A5_L2=number_format($nota_final_A5_L2, 0, ',', ''); echo $fin_A5_L2;?>"><b><?php echo $nota_final_A5_L2;?></b></span></td>               




            </tr>

            <tr> <!--  6ta materia-->

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A6["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_24"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A6_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A6_L2=number_format($nota_final_A6_L2, 0, ',', ''); echo $fin_A6_L2;?>"><b><?php echo $nota_final_A6_L2;?></b></span></td>            



            </tr>

            <tr> <!--  7ma materia-->

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A7["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_24"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A7_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A7_L2=number_format($nota_final_A7_L2, 0, ',', ''); echo $fin_A7_L2;?>"><b><?php echo $nota_final_A7_L2;?></b></span></td>              



            </tr>

            <tr> <!--  8va materia-->
               
<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A8["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_24"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A8_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A8_L2=number_format($nota_final_A8_L2, 0, ',', ''); echo $fin_A8_L2;?>"><b><?php echo $nota_final_A8_L2;?></b></span></td>    


            </tr>

            <tr> <!--  9na materia-->
              
<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A9["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_24"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A9_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A9_L2=number_format($nota_final_A9_L2, 0, ',', ''); echo $fin_A9_L2;?>"><b><?php echo $nota_final_A9_L2;?></b></span></td>    



            </tr>

            <tr> <!--  10ma materia-->
              
<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A10["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_24"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A10_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A10_L2=number_format($nota_final_A10_L2, 0, ',', ''); echo $fin_A10_L2;?>"><b><?php echo $nota_final_A10_L2;?></b></span></td> 



            </tr>

             <tr> <!--  11 materia-->
             
<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A11["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_24"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A11_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A11_L2=number_format($nota_final_A11_L2, 0, ',', ''); echo $fin_A11_L2;?>"><b><?php echo $nota_final_A11_L2;?></b></span></td>   



            </tr>

            <tr> <!--  12 materia-->
              
<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A12["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_24"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A12_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A12_L2=number_format($nota_final_A12_L2, 0, ',', ''); echo $fin_A12_L2;?>"><b><?php echo $nota_final_A12_L2;?></b></span></td>   



            </tr>



  <tr> <!--  13 materia-->
              
<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A13["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_24"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A13_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A13_L2=number_format($nota_final_A13_L2, 0, ',', ''); echo $fin_A13_L2;?>"><b><?php echo $nota_final_A13_L2;?></b></span></td>   



            </tr>




              <tr> <!--  14 materia-->
              
<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L2_N1;?>pts">
<?php echo $row_datos_control_notas_A14["nt_21"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L2_N2;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_22"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L2_N3;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_23"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L2_N4;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_24"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L2_N5;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_25"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L2_N6;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_26"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L2_N7;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_27"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color2a;?>"><b><?php echo $notaAu_A14_L2;?></b></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A14_L2=number_format($nota_final_A14_L2, 0, ',', ''); echo $fin_A14_L2;?>"><b><?php echo $nota_final_A14_L2;?></b></span></td>   



            </tr>














            <tr>  
                <td class="" colspan="7" style="width:70%; height: 23px;"></td> <!--  bordes vacios-->
                <td class="borde_inf_y_sup_negro"  style="width:11%; height: 23px;"></td>
                <td class=""  style="width:19%; height: 23px;"></td>
            </tr>

            <tr> <!--  promedios primer lapso-->
                <td class="" colspan="4" style="width:40%; height: 23px;"></td>
                <td class="borde_izq_inf_sup_negro" colspan="3" style="width:30%; height: 23px; "BGCOLOR="<?php echo $color2;?>"><b>Promedio 2°L:</b></td>
               
                <td class="borde_inf_y_sup_negro" style="width:11%; height: 23px; "BGCOLOR="<?php echo $color2;?>"></td> 

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



$el_promedio_divisor_L2 = $A1_L2+$A2_L2+$A3_L2+$A4_L2+$A5_L2+$A6_L2+$A7_L2+$A8_L2+$A9_L2+$A10_L2+$A11_L2+$A12_L2+$A13_L2+$A14_L2; 

$promedio_primer_L2 = ($nota_final_A1_L2 + $nota_final_A2_L2 + $nota_final_A3_L2 + $nota_final_A4_L2 + $nota_final_A5_L2 + $nota_final_A6_L2
                           + $nota_final_A7_L2 + $nota_final_A8_L2 + $nota_final_A9_L2 + $nota_final_A10_L2 + $nota_final_A11_L2 + $nota_final_A12_L2
                           + $nota_final_A13_L2 + $nota_final_A14_L2) / $el_promedio_divisor_L2 ?>


<td class="borde_der_inf_sup_negro" style="width:19%; font-size: 18px; height: 23px; "BGCOLOR="<?php echo $color2;?>">
<span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $proL2=number_format($promedio_primer_L2, 0, ',', ''); echo $proL2;?>">
<b><?php $pro_dec_L2=number_format($promedio_primer_L2, 1, ',', ''); echo $pro_dec_L2;?></b></span></td>  
           
            </tr>
                           
        </table>   


	</div> <!--  cierre 2do lapso-->





	<div class="col-md-3 mb-1">  <!--  tabla 3er Lapso-->




        <table class="ml-4" style='text-align:center;vertical-align:middle'>  
<tr>
    <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color3;?>" style="width:77%; height: 23px;">3er Lapso</th>
    <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color3a;?>" style="width:11%; font-size: 12px; height: 69px;">Aux.</th>
    <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color3;?>" style="width:12%; font-size: 12px; height: 69px;" >Nota Def.</th>
</tr>

            <tr>  
                <td class="borde_negro" colspan="7" style="width:77%; height: 23px;"></td>
            </tr>
                           
            <tr>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act1</th>  
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act2</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act3</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act4</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act5</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act6</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act7</th>
            <tr>

            <tr>  
                <td class="borde_izq_y_der_blanco" colspan="9" style="width:100%; height: 23px;"></td>
            </tr>

           <tr> <!--  1era materia-->

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A1["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_34"];?></span></td> </span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A1_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A1["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A1_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A1_L3=number_format($nota_final_A1_L3, 0, ',', ''); echo $fin_A1_L3;?>"><b><?php echo $nota_final_A1_L3;?></b></span></td> 

            </tr>  

            <tr> <!--  2da materia-->
<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A2["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_34"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A2_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A2["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A2_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A2_L3=number_format($nota_final_A2_L3, 0, ',', ''); echo $fin_A2_L3;?>"><b><?php echo $nota_final_A2_L3;?></b></span></td> 
            </tr>

            <tr> <!--  3era materia-->

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A3["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_34"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A3_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A3["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A3_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A3_L3=number_format($nota_final_A3_L3, 0, ',', ''); echo $fin_A3_L3;?>"><b><?php echo $nota_final_A3_L3;?></b></span></td> 

 
            </tr>

            <tr> <!--  4ta materia-->

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A4["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_34"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A4_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A4["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A4_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A4_L3=number_format($nota_final_A4_L3, 0, ',', ''); echo $fin_A4_L3;?>"><b><?php echo $nota_final_A4_L3;?></b></span></td>              




            </tr>

            <tr> <!--  5ta materia-->

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A5["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_34"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A5_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A5["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A5_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A5_L3=number_format($nota_final_A5_L3, 0, ',', ''); echo $fin_A5_L3;?>"><b><?php echo $nota_final_A5_L3;?></b></span></td>               




            </tr>

            <tr> <!--  6ta materia-->

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A6["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_34"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A6_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A6["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A6_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A6_L3=number_format($nota_final_A6_L3, 0, ',', ''); echo $fin_A6_L3;?>"><b><?php echo $nota_final_A6_L3;?></b></span></td>            



            </tr>

            <tr> <!--  7ma materia-->

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A7["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_34"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A7_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A7["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A7_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A7_L3=number_format($nota_final_A7_L3, 0, ',', ''); echo $fin_A7_L3;?>"><b><?php echo $nota_final_A7_L3;?></b></span></td>              



            </tr>

            <tr> <!--  8va materia-->
               
<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A8["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_34"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A8_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A8["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A8_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A8_L3=number_format($nota_final_A8_L3, 0, ',', ''); echo $fin_A8_L3;?>"><b><?php echo $nota_final_A8_L3;?></b></span></td>    


            </tr>

            <tr> <!--  9na materia-->
              
<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A9["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_34"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A9_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A9["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A9_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A9_L3=number_format($nota_final_A9_L3, 0, ',', ''); echo $fin_A9_L3;?>"><b><?php echo $nota_final_A9_L3;?></b></span></td>    



            </tr>

            <tr> <!--  10ma materia-->
              
<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A10["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_34"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A10_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A10["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A10_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A10_L3=number_format($nota_final_A10_L3, 0, ',', ''); echo $fin_A10_L3;?>"><b><?php echo $nota_final_A10_L3;?></b></span></td> 



            </tr>

             <tr> <!--  11 materia-->
             
<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A11["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_34"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A11_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A11["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A11_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A11_L3=number_format($nota_final_A11_L3, 0, ',', ''); echo $fin_A11_L3;?>"><b><?php echo $nota_final_A11_L3;?></b></span></td>   



            </tr>

            <tr> <!--  12 materia-->
              
<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A12["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_34"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A12_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A12["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A12_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A12_L3=number_format($nota_final_A12_L3, 0, ',', ''); echo $fin_A12_L3;?>"><b><?php echo $nota_final_A12_L3;?></b></span></td>   



            </tr>




  <tr> <!--  13 materia-->
              
<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A13["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_34"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A13_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A13["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A13_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A13_L3=number_format($nota_final_A13_L3, 0, ',', ''); echo $fin_A13_L3;?>"><b><?php echo $nota_final_A13_L3;?></b></span></td>   



            </tr>




              <tr> <!--  14 materia-->
              
<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L3_N1;?>pts">
<?php echo $row_datos_control_notas_A14["nt_31"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L3_N2;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_32"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L3_N3;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_33"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L3_N4;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_34"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L3_N5;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_35"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L3_N6;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_36"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><span data-toggle="tooltip" data-placement="top" title="Equivale a <?php echo $nota_A14_L3_N7;?>pts">
  <?php echo $row_datos_control_notas_A14["nt_37"];?></span></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px; font-size: 14px; "BGCOLOR="<?php echo $color3a;?>"><b><?php echo $notaAu_A14_L3;?></b></td> 

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; font-size: 16px;"><span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $fin_A14_L3=number_format($nota_final_A14_L3, 0, ',', ''); echo $fin_A14_L3;?>"><b><?php echo $nota_final_A14_L3;?></b></span></td>   



            </tr>












            <tr>  
                <td class="" colspan="7" style="width:70%; height: 23px;"></td> <!--  bordes vacios-->
                <td class="borde_inf_y_sup_negro"  style="width:11%; height: 23px;"></td>
                <td class=""  style="width:19%; height: 23px;"></td>
            </tr>

            <tr> <!--  promedios primer lapso-->
                <td class="" colspan="4" style="width:40%; height: 23px;"></td>
                <td class="borde_izq_inf_sup_negro" colspan="3" style="width:30%; height: 23px; "BGCOLOR="<?php echo $color3;?>"><b>Promedio 3°L:</b></td>
               
                <td class="borde_inf_y_sup_negro" style="width:11%; height: 23px; "BGCOLOR="<?php echo $color3;?>"></td> 

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



$el_promedio_divisor_L3 = $A1_L3+$A2_L3+$A3_L3+$A4_L3+$A5_L3+$A6_L3+$A7_L3+$A8_L3+$A9_L3+$A10_L3+$A11_L3+$A12_L3+$A13_L3+$A14_L3; 

$promedio_primer_L3 = ($nota_final_A1_L3 + $nota_final_A2_L3 + $nota_final_A3_L3 + $nota_final_A4_L3 + $nota_final_A5_L3 + $nota_final_A6_L3
                           + $nota_final_A7_L3 + $nota_final_A8_L3 + $nota_final_A9_L3 + $nota_final_A10_L3 + $nota_final_A11_L3 + $nota_final_A12_L3
                           + $nota_final_A13_L3 + $nota_final_A14_L3) / $el_promedio_divisor_L3 ?>


<td class="borde_der_inf_sup_negro" style="width:19%; font-size: 18px; height: 23px; "BGCOLOR="<?php echo $color3;?>">
<span data-toggle="tooltip" data-placement="top" title="Redondeado es <?php $proL3=number_format($promedio_primer_L3, 0, ',', ''); echo $proL3;?>">
<b><?php $pro_dec_L3=number_format($promedio_primer_L3, 1, ',', ''); echo $pro_dec_L3;?></b></span></td>  
           
            </tr>
                           
        </table>   


	</div> <!--  cierre 3er lapso-->





	<div class="col-md-2 mb-1">  <!-- Tabla Final Promedios -->




        <table class="ml-4" style='text-align:center;vertical-align:middle'>  
<tr>
    <th class="borde_negro" colspan="3" BGCOLOR="<?php echo $color4;?>" style="width:89%; height: 23px;">Calificación Final</th>
    <th class="borde_negro" rowspan="2" style="width:11%; font-size: 12px; height: 72px;">&nbsp;Asig.&nbsp;</th>    
</tr>
<tr>
    <td class="borde_negro" style="width:31%; font-size: 12px; height:46px;"><b>Promedios</b></td>
    <td class="borde_negro" style="width:20%; font-size: 12px; height:46px;"><b>Aux. Final</b></td> 
    <td class="borde_negro" BGCOLOR="<?php echo $color4;?>" style="width:38%; font-size: 12px; height:46px;"><b>Definitiva</b></td>     
</tr>

<tr>
    <td class="borde_inf_y_sup_negro" colspan="4"  style="width:100%; height: 23px;"></td>   
</tr>

            <tr>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:31%; height: 23px;">
<?php

$Parcial_A1_L1 = 000000000.1;
$Parcial_A1_L2 = 000000000.1;
$Parcial_A1_L3 = 000000000.1;



$Nota_Pro_Final_A1_L1_entero=number_format($nota_final_A1_L1, 0, ',', '');
$Nota_Pro_Final_A1_L2_entero=number_format($nota_final_A1_L2, 0, ',', '');
$Nota_Pro_Final_A1_L3_entero=number_format($nota_final_A1_L3, 0, ',', '');

if ($Nota_Pro_Final_A1_L1_entero >= 0.1) {
  $Parcial_A1_L1 = 1;
}

if ($Nota_Pro_Final_A1_L2_entero >= 0.1) {
  $Parcial_A1_L2 = 1;
}

if ($Nota_Pro_Final_A1_L3_entero >= 0.1) {
  $Parcial_A1_L3 = 1;
}


$Num_divisor_A1_L123 = $Parcial_A1_L1+$Parcial_A1_L1+$Parcial_A1_L1;


 $Nota_Pro_all_A1_L123 =($Nota_Pro_Final_A1_L1_entero+$Nota_Pro_Final_A1_L2_entero+$Nota_Pro_Final_A1_L3_entero)/$Num_divisor_A1_L123;

$Nota_Pro_all_A1_L123_decimal=number_format($Nota_Pro_all_A1_L123, 1, ',', '');  echo $Nota_Pro_all_A1_L123_decimal;?></td>


                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:20%; height: 23px; font-size: 14px;"><b><?php echo $row_datos_control_notas_A1["nt_AuF"];?></b></td>

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:38%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A1_all_L123 = $Nota_Pro_all_A1_L123+$row_datos_control_notas_A1["nt_AuF"];

$Definitiva_completa_A1_L123=number_format($Def_aux_total_A1_all_L123, 0, ',', '');  echo $Definitiva_completa_A1_L123; ?></b></td>



                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; font-size: 12px; height: 23px;"><?php echo $row_datos_controlasign['a_abrev'];?></td>
            </tr>
            <tr>
               

 <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:31%; height: 23px;">
<?php

$Parcial_A2_L1 = 000000000.1;
$Parcial_A2_L2 = 000000000.1;
$Parcial_A2_L3 = 000000000.1;



$Nota_Pro_Final_A2_L1_entero=number_format($nota_final_A2_L1, 0, ',', '');
$Nota_Pro_Final_A2_L2_entero=number_format($nota_final_A2_L2, 0, ',', '');
$Nota_Pro_Final_A2_L3_entero=number_format($nota_final_A2_L3, 0, ',', '');

if ($Nota_Pro_Final_A2_L1_entero >= 0.1) {
  $Parcial_A2_L1 = 1;
}

if ($Nota_Pro_Final_A2_L2_entero >= 0.1) {
  $Parcial_A2_L2 = 1;
}

if ($Nota_Pro_Final_A2_L3_entero >= 0.1) {
  $Parcial_A2_L3 = 1;
}


$Num_divisor_A2_L123 = $Parcial_A2_L1+$Parcial_A2_L1+$Parcial_A2_L1;


 $Nota_Pro_all_A2_L123 =($Nota_Pro_Final_A2_L1_entero+$Nota_Pro_Final_A2_L2_entero+$Nota_Pro_Final_A2_L3_entero)/$Num_divisor_A2_L123; 

 $Nota_Pro_all_A2_L123_decimal=number_format($Nota_Pro_all_A2_L123, 1, ',', '');  echo $Nota_Pro_all_A2_L123_decimal;?></td>





                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:20%; height: 23px; font-size: 14px;"><b><?php echo $row_datos_control_notas_A2["nt_AuF"];?></b></td>

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:38%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A2_all_L123 = $Nota_Pro_all_A2_L123+$row_datos_control_notas_A2["nt_AuF"];

$Definitiva_completa_A2_L123=number_format($Def_aux_total_A2_all_L123, 0, ',', '');  echo $Definitiva_completa_A2_L123; ?></b></td>

                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; font-size: 12px; height: 23px;"><?php echo $row_datos_controlasign['b_abrev'];?></td>
            </tr>
            <tr>

 <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:31%; height: 23px;">
<?php

$Parcial_A3_L1 = 000000000.1;
$Parcial_A3_L2 = 000000000.1;
$Parcial_A3_L3 = 000000000.1;



$Nota_Pro_Final_A3_L1_entero=number_format($nota_final_A3_L1, 0, ',', '');
$Nota_Pro_Final_A3_L2_entero=number_format($nota_final_A3_L2, 0, ',', '');
$Nota_Pro_Final_A3_L3_entero=number_format($nota_final_A3_L3, 0, ',', '');

if ($Nota_Pro_Final_A3_L1_entero >= 0.1) {
  $Parcial_A3_L1 = 1;
}

if ($Nota_Pro_Final_A3_L2_entero >= 0.1) {
  $Parcial_A3_L2 = 1;
}

if ($Nota_Pro_Final_A3_L3_entero >= 0.1) {
  $Parcial_A3_L3 = 1;
}


$Num_divisor_A3_L123 = $Parcial_A3_L1+$Parcial_A3_L1+$Parcial_A3_L1;


 $Nota_Pro_all_A3_L123 =($Nota_Pro_Final_A3_L1_entero+$Nota_Pro_Final_A3_L2_entero+$Nota_Pro_Final_A3_L3_entero)/$Num_divisor_A3_L123; 

 $Nota_Pro_all_A3_L123_decimal=number_format($Nota_Pro_all_A3_L123, 1, ',', '');  echo $Nota_Pro_all_A3_L123_decimal;?></td>





                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:20%; height: 23px; font-size: 14px;"><b><?php echo $row_datos_control_notas_A3["nt_AuF"];?></b></td>


<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:38%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A3_all_L123 = $Nota_Pro_all_A3_L123+$row_datos_control_notas_A3["nt_AuF"];

$Definitiva_completa_A3_L123=number_format($Def_aux_total_A3_all_L123, 0, ',', '');  echo $Definitiva_completa_A3_L123; ?></b></td>

                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; font-size: 12px; height: 23px;"><?php echo $row_datos_controlasign['c_abrev'];?></td>
            </tr>
            <tr>
<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:31%; height: 23px;">
<?php

$Parcial_A4_L1 = 000000000.1;
$Parcial_A4_L2 = 000000000.1;
$Parcial_A4_L3 = 000000000.1;



$Nota_Pro_Final_A4_L1_entero=number_format($nota_final_A4_L1, 0, ',', '');
$Nota_Pro_Final_A4_L2_entero=number_format($nota_final_A4_L2, 0, ',', '');
$Nota_Pro_Final_A4_L3_entero=number_format($nota_final_A4_L3, 0, ',', '');

if ($Nota_Pro_Final_A4_L1_entero >= 0.1) {
  $Parcial_A4_L1 = 1;
}

if ($Nota_Pro_Final_A4_L2_entero >= 0.1) {
  $Parcial_A4_L2 = 1;
}

if ($Nota_Pro_Final_A4_L3_entero >= 0.1) {
  $Parcial_A4_L3 = 1;
}


$Num_divisor_A4_L123 = $Parcial_A4_L1+$Parcial_A4_L1+$Parcial_A4_L1;


 $Nota_Pro_all_A4_L123 =($Nota_Pro_Final_A4_L1_entero+$Nota_Pro_Final_A4_L2_entero+$Nota_Pro_Final_A4_L3_entero)/$Num_divisor_A4_L123; 

 $Nota_Pro_all_A4_L123_decimal=number_format($Nota_Pro_all_A4_L123, 1, ',', '');  echo $Nota_Pro_all_A4_L123_decimal;?></td>





                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:20%; height: 23px; font-size: 14px;"><b><?php echo $row_datos_control_notas_A4["nt_AuF"];?></b></td>

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:38%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A4_all_L123 = $Nota_Pro_all_A4_L123+$row_datos_control_notas_A4["nt_AuF"];

$Definitiva_completa_A4_L123=number_format($Def_aux_total_A4_all_L123, 0, ',', '');  echo $Definitiva_completa_A4_L123; ?></b></td>


                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; font-size: 12px; height: 23px;"><?php echo $row_datos_controlasign['d_abrev'];?></td>
            </tr>
            <tr>
<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:31%; height: 23px;">
<?php

$Parcial_A5_L1 = 000000000.1;
$Parcial_A5_L2 = 000000000.1;
$Parcial_A5_L3 = 000000000.1;



$Nota_Pro_Final_A5_L1_entero=number_format($nota_final_A5_L1, 0, ',', '');
$Nota_Pro_Final_A5_L2_entero=number_format($nota_final_A5_L2, 0, ',', '');
$Nota_Pro_Final_A5_L3_entero=number_format($nota_final_A5_L3, 0, ',', '');

if ($Nota_Pro_Final_A5_L1_entero >= 0.1) {
  $Parcial_A5_L1 = 1;
}

if ($Nota_Pro_Final_A5_L2_entero >= 0.1) {
  $Parcial_A5_L2 = 1;
}

if ($Nota_Pro_Final_A5_L3_entero >= 0.1) {
  $Parcial_A5_L3 = 1;
}


$Num_divisor_A5_L123 = $Parcial_A5_L1+$Parcial_A5_L1+$Parcial_A5_L1;


 $Nota_Pro_all_A5_L123 =($Nota_Pro_Final_A5_L1_entero+$Nota_Pro_Final_A5_L2_entero+$Nota_Pro_Final_A5_L3_entero)/$Num_divisor_A5_L123; 

 $Nota_Pro_all_A5_L123_decimal=number_format($Nota_Pro_all_A5_L123, 1, ',', '');  echo $Nota_Pro_all_A5_L123_decimal;?></td>





                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:20%; height: 23px; font-size: 14px;"><b><?php echo $row_datos_control_notas_A5["nt_AuF"];?></b></td>

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:38%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A5_all_L123 = $Nota_Pro_all_A5_L123+$row_datos_control_notas_A5["nt_AuF"];

$Definitiva_completa_A5_L123=number_format($Def_aux_total_A5_all_L123, 0, ',', '');  echo $Definitiva_completa_A5_L123; ?></b></td>


                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; font-size: 12px; height: 23px;"><?php echo $row_datos_controlasign['e_abrev'];?></td>
            </tr>
            <tr>
<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:31%; height: 23px;">
<?php

$Parcial_A6_L1 = 000000000.1;
$Parcial_A6_L2 = 000000000.1;
$Parcial_A6_L3 = 000000000.1;



$Nota_Pro_Final_A6_L1_entero=number_format($nota_final_A6_L1, 0, ',', '');
$Nota_Pro_Final_A6_L2_entero=number_format($nota_final_A6_L2, 0, ',', '');
$Nota_Pro_Final_A6_L3_entero=number_format($nota_final_A6_L3, 0, ',', '');

if ($Nota_Pro_Final_A6_L1_entero >= 0.1) {
  $Parcial_A6_L1 = 1;
}

if ($Nota_Pro_Final_A6_L2_entero >= 0.1) {
  $Parcial_A6_L2 = 1;
}

if ($Nota_Pro_Final_A6_L3_entero >= 0.1) {
  $Parcial_A6_L3 = 1;
}


$Num_divisor_A6_L123 = $Parcial_A6_L1+$Parcial_A6_L1+$Parcial_A6_L1;


 $Nota_Pro_all_A6_L123 =($Nota_Pro_Final_A6_L1_entero+$Nota_Pro_Final_A6_L2_entero+$Nota_Pro_Final_A6_L3_entero)/$Num_divisor_A6_L123; 

 $Nota_Pro_all_A6_L123_decimal=number_format($Nota_Pro_all_A6_L123, 1, ',', '');  echo $Nota_Pro_all_A6_L123_decimal;?></td>





                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:20%; height: 23px; font-size: 14px;"><b><?php echo $row_datos_control_notas_A6["nt_AuF"];?></b></td>

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:38%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A6_all_L123 = $Nota_Pro_all_A6_L123+$row_datos_control_notas_A6["nt_AuF"];

$Definitiva_completa_A6_L123=number_format($Def_aux_total_A6_all_L123, 0, ',', '');  echo $Definitiva_completa_A6_L123; ?></b></td>

                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; font-size: 12px; height: 23px;"><?php echo $row_datos_controlasign['f_abrev'];?></td>
            </tr>
            <tr>
<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:31%; height: 23px;">
<?php

$Parcial_A7_L1 = 000000000.1;
$Parcial_A7_L2 = 000000000.1;
$Parcial_A7_L3 = 000000000.1;



$Nota_Pro_Final_A7_L1_entero=number_format($nota_final_A7_L1, 0, ',', '');
$Nota_Pro_Final_A7_L2_entero=number_format($nota_final_A7_L2, 0, ',', '');
$Nota_Pro_Final_A7_L3_entero=number_format($nota_final_A7_L3, 0, ',', '');

if ($Nota_Pro_Final_A7_L1_entero >= 0.1) {
  $Parcial_A7_L1 = 1;
}

if ($Nota_Pro_Final_A7_L2_entero >= 0.1) {
  $Parcial_A7_L2 = 1;
}

if ($Nota_Pro_Final_A7_L3_entero >= 0.1) {
  $Parcial_A7_L3 = 1;
}


$Num_divisor_A7_L123 = $Parcial_A7_L1+$Parcial_A7_L1+$Parcial_A7_L1;


 $Nota_Pro_all_A7_L123 =($Nota_Pro_Final_A7_L1_entero+$Nota_Pro_Final_A7_L2_entero+$Nota_Pro_Final_A7_L3_entero)/$Num_divisor_A7_L123; 

 $Nota_Pro_all_A7_L123_decimal=number_format($Nota_Pro_all_A7_L123, 1, ',', '');  echo $Nota_Pro_all_A7_L123_decimal;?></td>





                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:20%; height: 23px; font-size: 14px;"><b><?php echo $row_datos_control_notas_A7["nt_AuF"];?></b></td>


<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:38%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A7_all_L123 = $Nota_Pro_all_A7_L123+$row_datos_control_notas_A7["nt_AuF"];

$Definitiva_completa_A7_L123=number_format($Def_aux_total_A7_all_L123, 0, ',', '');  echo $Definitiva_completa_A7_L123; ?></b></td>


                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; font-size: 12px; height: 23px;"><?php echo $row_datos_controlasign['g_abrev'];?></td>
            </tr>
            <tr>
<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:31%; height: 23px;">
<?php

$Parcial_A8_L1 = 000000000.1;
$Parcial_A8_L2 = 000000000.1;
$Parcial_A8_L3 = 000000000.1;



$Nota_Pro_Final_A8_L1_entero=number_format($nota_final_A8_L1, 0, ',', '');
$Nota_Pro_Final_A8_L2_entero=number_format($nota_final_A8_L2, 0, ',', '');
$Nota_Pro_Final_A8_L3_entero=number_format($nota_final_A8_L3, 0, ',', '');

if ($Nota_Pro_Final_A8_L1_entero >= 0.1) {
  $Parcial_A8_L1 = 1;
}

if ($Nota_Pro_Final_A8_L2_entero >= 0.1) {
  $Parcial_A8_L2 = 1;
}

if ($Nota_Pro_Final_A8_L3_entero >= 0.1) {
  $Parcial_A8_L3 = 1;
}


$Num_divisor_A8_L123 = $Parcial_A8_L1+$Parcial_A8_L1+$Parcial_A8_L1;


 $Nota_Pro_all_A8_L123 =($Nota_Pro_Final_A8_L1_entero+$Nota_Pro_Final_A8_L2_entero+$Nota_Pro_Final_A8_L3_entero)/$Num_divisor_A8_L123; 

 $Nota_Pro_all_A8_L123_decimal=number_format($Nota_Pro_all_A8_L123, 1, ',', '');  echo $Nota_Pro_all_A8_L123_decimal;?></td>





                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:20%; height: 23px; font-size: 14px;"><b><?php echo $row_datos_control_notas_A8["nt_AuF"];?></b></td>

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:38%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A8_all_L123 = $Nota_Pro_all_A8_L123+$row_datos_control_notas_A8["nt_AuF"];

$Definitiva_completa_A8_L123=number_format($Def_aux_total_A8_all_L123, 0, ',', '');  echo $Definitiva_completa_A8_L123; ?></b></td>


                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; font-size: 12px; height: 23px;"><?php echo $row_datos_controlasign['h_abrev'];?></td>
            </tr>
            <tr>
<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:31%; height: 23px;">
<?php

$Parcial_A9_L1 = 000000000.1;
$Parcial_A9_L2 = 000000000.1;
$Parcial_A9_L3 = 000000000.1;



$Nota_Pro_Final_A9_L1_entero=number_format($nota_final_A9_L1, 0, ',', '');
$Nota_Pro_Final_A9_L2_entero=number_format($nota_final_A9_L2, 0, ',', '');
$Nota_Pro_Final_A9_L3_entero=number_format($nota_final_A9_L3, 0, ',', '');

if ($Nota_Pro_Final_A9_L1_entero >= 0.1) {
  $Parcial_A9_L1 = 1;
}

if ($Nota_Pro_Final_A9_L2_entero >= 0.1) {
  $Parcial_A9_L2 = 1;
}

if ($Nota_Pro_Final_A9_L3_entero >= 0.1) {
  $Parcial_A9_L3 = 1;
}


$Num_divisor_A9_L123 = $Parcial_A9_L1+$Parcial_A9_L1+$Parcial_A9_L1;


 $Nota_Pro_all_A9_L123 =($Nota_Pro_Final_A9_L1_entero+$Nota_Pro_Final_A9_L2_entero+$Nota_Pro_Final_A9_L3_entero)/$Num_divisor_A9_L123; 

 $Nota_Pro_all_A9_L123_decimal=number_format($Nota_Pro_all_A9_L123, 1, ',', '');  echo $Nota_Pro_all_A9_L123_decimal;?></td>





                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:20%; height: 23px; font-size: 14px;"><b><?php echo $row_datos_control_notas_A9["nt_AuF"];?></b></td>

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:38%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A9_all_L123 = $Nota_Pro_all_A9_L123+$row_datos_control_notas_A9["nt_AuF"];

$Definitiva_completa_A9_L123=number_format($Def_aux_total_A9_all_L123, 0, ',', '');  echo $Definitiva_completa_A9_L123; ?></b></td>


                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; font-size: 12px; height: 23px;"><?php echo $row_datos_controlasign['i_abrev'];?></td>
            </tr>
            <tr>
<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:31%; height: 23px;">
<?php

$Parcial_A10_L1 = 000000000.1;
$Parcial_A10_L2 = 000000000.1;
$Parcial_A10_L3 = 000000000.1;



$Nota_Pro_Final_A10_L1_entero=number_format($nota_final_A10_L1, 0, ',', '');
$Nota_Pro_Final_A10_L2_entero=number_format($nota_final_A10_L2, 0, ',', '');
$Nota_Pro_Final_A10_L3_entero=number_format($nota_final_A10_L3, 0, ',', '');

if ($Nota_Pro_Final_A10_L1_entero >= 0.1) {
  $Parcial_A10_L1 = 1;
}

if ($Nota_Pro_Final_A10_L2_entero >= 0.1) {
  $Parcial_A10_L2 = 1;
}

if ($Nota_Pro_Final_A10_L3_entero >= 0.1) {
  $Parcial_A10_L3 = 1;
}


$Num_divisor_A10_L123 = $Parcial_A10_L1+$Parcial_A10_L1+$Parcial_A10_L1;


 $Nota_Pro_all_A10_L123 =($Nota_Pro_Final_A10_L1_entero+$Nota_Pro_Final_A10_L2_entero+$Nota_Pro_Final_A10_L3_entero)/$Num_divisor_A10_L123; 

 $Nota_Pro_all_A10_L123_decimal=number_format($Nota_Pro_all_A10_L123, 1, ',', '');  echo $Nota_Pro_all_A10_L123_decimal;?></td>





                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:20%; height: 23px; font-size: 14px;"><b><?php echo $row_datos_control_notas_A10["nt_AuF"];?></b></td>

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:38%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A10_all_L123 = $Nota_Pro_all_A10_L123+$row_datos_control_notas_A10["nt_AuF"];

$Definitiva_completa_A10_L123=number_format($Def_aux_total_A10_all_L123, 0, ',', '');  echo $Definitiva_completa_A10_L123; ?></b></td>


                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; font-size: 12px; height: 23px;"><?php echo $row_datos_controlasign['j_abrev'];?></td>
            </tr>
            <tr>
<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:31%; height: 23px;">
<?php

$Parcial_A11_L1 = 000000000.1;
$Parcial_A11_L2 = 000000000.1;
$Parcial_A11_L3 = 000000000.1;



$Nota_Pro_Final_A11_L1_entero=number_format($nota_final_A11_L1, 0, ',', '');
$Nota_Pro_Final_A11_L2_entero=number_format($nota_final_A11_L2, 0, ',', '');
$Nota_Pro_Final_A11_L3_entero=number_format($nota_final_A11_L3, 0, ',', '');

if ($Nota_Pro_Final_A11_L1_entero >= 0.1) {
  $Parcial_A11_L1 = 1;
}

if ($Nota_Pro_Final_A11_L2_entero >= 0.1) {
  $Parcial_A11_L2 = 1;
}

if ($Nota_Pro_Final_A11_L3_entero >= 0.1) {
  $Parcial_A11_L3 = 1;
}


$Num_divisor_A11_L123 = $Parcial_A11_L1+$Parcial_A11_L1+$Parcial_A11_L1;


 $Nota_Pro_all_A11_L123 =($Nota_Pro_Final_A11_L1_entero+$Nota_Pro_Final_A11_L2_entero+$Nota_Pro_Final_A11_L3_entero)/$Num_divisor_A11_L123; 

 $Nota_Pro_all_A11_L123_decimal=number_format($Nota_Pro_all_A11_L123, 1, ',', '');  echo $Nota_Pro_all_A11_L123_decimal;?></td>





                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:20%; height: 23px; font-size: 14px;"><b><?php echo $row_datos_control_notas_A11["nt_AuF"];?></b></td>
 
<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:38%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A11_all_L123 = $Nota_Pro_all_A11_L123+$row_datos_control_notas_A11["nt_AuF"];

$Definitiva_completa_A11_L123=number_format($Def_aux_total_A11_all_L123, 0, ',', '');  echo $Definitiva_completa_A11_L123; ?></b></td>


                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; font-size: 12px; height: 23px;"><?php echo $row_datos_controlasign['k_abrev'];?></td>
            </tr>




            <tr>
<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:31%; height: 23px;">
<?php

$Parcial_A12_L1 = 000000000.1;
$Parcial_A12_L2 = 000000000.1;
$Parcial_A12_L3 = 000000000.1;



$Nota_Pro_Final_A12_L1_entero=number_format($nota_final_A12_L1, 0, ',', '');
$Nota_Pro_Final_A12_L2_entero=number_format($nota_final_A12_L2, 0, ',', '');
$Nota_Pro_Final_A12_L3_entero=number_format($nota_final_A12_L3, 0, ',', '');

if ($Nota_Pro_Final_A12_L1_entero >= 0.1) {
  $Parcial_A12_L1 = 1;
}

if ($Nota_Pro_Final_A12_L2_entero >= 0.1) {
  $Parcial_A12_L2 = 1;
}

if ($Nota_Pro_Final_A12_L3_entero >= 0.1) {
  $Parcial_A12_L3 = 1;
}


$Num_divisor_A12_L123 = $Parcial_A12_L1+$Parcial_A12_L1+$Parcial_A12_L1;


 $Nota_Pro_all_A12_L123 =($Nota_Pro_Final_A12_L1_entero+$Nota_Pro_Final_A12_L2_entero+$Nota_Pro_Final_A12_L3_entero)/$Num_divisor_A12_L123; 

 $Nota_Pro_all_A12_L123_decimal=number_format($Nota_Pro_all_A12_L123, 1, ',', '');  echo $Nota_Pro_all_A12_L123_decimal;?></td>





                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:20%; height: 23px; font-size: 14px;"><b><?php echo $row_datos_control_notas_A12["nt_AuF"];?></b></td>

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:38%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A12_all_L123 = $Nota_Pro_all_A12_L123+$row_datos_control_notas_A12["nt_AuF"];

$Definitiva_completa_A12_L123=number_format($Def_aux_total_A12_all_L123, 0, ',', '');  echo $Definitiva_completa_A12_L123; ?></b></td>


                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; font-size: 12px; height: 23px;"><?php echo $row_datos_controlasign['l_abrev'];?></td>
            </tr>
            






            <tr>
<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:31%; height: 23px;">
<?php

$Parcial_A13_L1 = 000000000.1;
$Parcial_A13_L2 = 000000000.1;
$Parcial_A13_L3 = 000000000.1;



$Nota_Pro_Final_A13_L1_entero=number_format($nota_final_A13_L1, 0, ',', '');
$Nota_Pro_Final_A13_L2_entero=number_format($nota_final_A13_L2, 0, ',', '');
$Nota_Pro_Final_A13_L3_entero=number_format($nota_final_A13_L3, 0, ',', '');

if ($Nota_Pro_Final_A13_L1_entero >= 0.1) {
  $Parcial_A13_L1 = 1;
}

if ($Nota_Pro_Final_A13_L2_entero >= 0.1) {
  $Parcial_A13_L2 = 1;
}

if ($Nota_Pro_Final_A13_L3_entero >= 0.1) {
  $Parcial_A13_L3 = 1;
}


$Num_divisor_A13_L123 = $Parcial_A13_L1+$Parcial_A13_L1+$Parcial_A13_L1;


 $Nota_Pro_all_A13_L123 =($Nota_Pro_Final_A13_L1_entero+$Nota_Pro_Final_A13_L2_entero+$Nota_Pro_Final_A13_L3_entero)/$Num_divisor_A13_L123; 

 $Nota_Pro_all_A13_L123_decimal=number_format($Nota_Pro_all_A13_L123, 1, ',', '');  echo $Nota_Pro_all_A13_L123_decimal;?></td>





                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:20%; height: 23px; font-size: 14px;"><b><?php echo $row_datos_control_notas_A13["nt_AuF"];?></b></td>

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:38%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A13_all_L123 = $Nota_Pro_all_A13_L123+$row_datos_control_notas_A13["nt_AuF"];

$Definitiva_completa_A13_L123=number_format($Def_aux_total_A13_all_L123, 0, ',', '');  echo $Definitiva_completa_A13_L123; ?></b></td>


                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; font-size: 12px; height: 23px;"><?php echo $row_datos_controlasign['m_abrev'];?></td>
            </tr>
            






            <tr>
<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:31%; height: 23px;">
<?php

$Parcial_A14_L1 = 000000000.1;
$Parcial_A14_L2 = 000000000.1;
$Parcial_A14_L3 = 000000000.1;



$Nota_Pro_Final_A14_L1_entero=number_format($nota_final_A14_L1, 0, ',', '');
$Nota_Pro_Final_A14_L2_entero=number_format($nota_final_A14_L2, 0, ',', '');
$Nota_Pro_Final_A14_L3_entero=number_format($nota_final_A14_L3, 0, ',', '');

if ($Nota_Pro_Final_A14_L1_entero >= 0.1) {
  $Parcial_A14_L1 = 1;
}

if ($Nota_Pro_Final_A14_L2_entero >= 0.1) {
  $Parcial_A14_L2 = 1;
}

if ($Nota_Pro_Final_A14_L3_entero >= 0.1) {
  $Parcial_A14_L3 = 1;
}


$Num_divisor_A14_L123 = $Parcial_A14_L1+$Parcial_A14_L1+$Parcial_A14_L1;


 $Nota_Pro_all_A14_L123 =($Nota_Pro_Final_A14_L1_entero+$Nota_Pro_Final_A14_L2_entero+$Nota_Pro_Final_A14_L3_entero)/$Num_divisor_A14_L123; 

 $Nota_Pro_all_A14_L123_decimal=number_format($Nota_Pro_all_A14_L123, 1, ',', '');  echo $Nota_Pro_all_A14_L123_decimal;?></td>





                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:20%; height: 23px; font-size: 14px;"><b><?php echo $row_datos_control_notas_A14["nt_AuF"];?></b></td>

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:38%; height: 23px; font-size: 16px;"><b>
<?php 

$Def_aux_total_A14_all_L123 = $Nota_Pro_all_A14_L123+$row_datos_control_notas_A14["nt_AuF"];

$Definitiva_completa_A14_L123=number_format($Def_aux_total_A14_all_L123, 0, ',', '');  echo $Definitiva_completa_A14_L123; ?></b></td>


                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; font-size: 12px; height: 23px;"><?php echo $row_datos_controlasign['n_abrev'];?></td>
            </tr>
            












            <tr>
              <td class="" colspan="4" style="width:100%; height: 23px;"></td>
            </tr>

            <tr>
              <td class="" colspan="2" style="width:51%; height: 243x;"></td>


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

$suma_dividendo_total_final = $def_pro_g1+$def_pro_g2+$def_pro_g3+$def_pro_g4+$def_pro_g5+$def_pro_g6+$def_pro_g7+$def_pro_g8+$def_pro_g9+$def_pro_g10+$def_pro_g11+$def_pro_g12+$def_pro_g13+$def_pro_g14;

$prom_final_todas_las_asignaturas =($Definitiva_completa_A1_L123+$Definitiva_completa_A2_L123+$Definitiva_completa_A3_L123+$Definitiva_completa_A4_L123+$Definitiva_completa_A5_L123
+$Definitiva_completa_A6_L123+$Definitiva_completa_A7_L123+$Definitiva_completa_A8_L123+$Definitiva_completa_A9_L123+$Definitiva_completa_A10_L123
+$Definitiva_completa_A11_L123+$Definitiva_completa_A12_L123+$Definitiva_completa_A13_L123+$Definitiva_completa_A14_L123 )/$suma_dividendo_total_final;

$prom_total_entero =number_format($prom_final_todas_las_asignaturas, 0, ',', ''); 

?>


              <td class="borde_doble_negro" style="width:38%; font-size: 18px; height: 23px;"><b><?php echo $prom_total_entero;?></b></td>
              <td class="" style="width:11%; height: 23px;"></td>
            </tr>

        </table>   


	</div> <!--  cierre tabla promedios finales-->



</div> <!--  cierre form fila superior tablas grandes-->



</div> <!--  cierre card body-->
</div> <!--  cierre card-->



<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->


<div class="card border-success ml-4 mt-5 mr-4 mb-4">
  <div class="card-header text-white bg-secondary" style='text-align:center;vertical-align:middle; font-size: 22px;'>Porcentaje a evaluar en cada actividad por asignatura - Indicados en el Plan de Evaluación.</div>

<div class="card-body">


<div class="form-row" >   <!--  fila inferior tablas pequeñas-->

<div class="col-md-1 mb-1">  <!--  primera tabla superior asignaturas-->

        <table class="ml-2" style='text-align:center;vertical-align:middle; width:66%;'>   
                                     
            <tr>
            <td class="borde_negro" BGCOLOR="<?php echo $color0;?>" style="height: 48px;"><b>Asig.</b></td>
            </tr>
           

            <tr>
            <td class="borde_izq_y_der_blanco" style="height: 23px;"></td>
            </tr>

            <tr>
            <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['a_abrev'];?></td>
            </tr>
                <tr>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['b_abrev'];?></td>
                </tr>
            <tr>
            <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['c_abrev'];?></td>
            </tr>
                <tr>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['d_abrev'];?></td>
                </tr>
            <tr>
            <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['e_abrev'];?></td>
            </tr>
                <tr>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['f_abrev'];?></td>
                </tr>
            <tr>
            <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['g_abrev'];?></td>
            </tr>
                <tr>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['h_abrev'];?></td>
                </tr>
            <tr>
            <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['i_abrev'];?></td>
            </tr>
                <tr>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['j_abrev'];?></td>
                </tr>
            <tr>
            <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['k_abrev'];?></td>
            </tr>
                <tr>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['l_abrev'];?></td>
                </tr>

            <tr>
            <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['m_abrev'];?></td>
            </tr>
                <tr>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="height: 23px;"><?php echo $row_datos_controlasign['n_abrev'];?></td>
                </tr>                            
          
                           
        </table>   


	</div> <!--  tabla superior asignaturas 1 columna-->


	<div class="col-md-3 mb-1">  <!--  tabla 1er Lapso-->




        <table class="" style='text-align:center;vertical-align:middle'>  
<tr>
    <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color1;?>" style="width:77%; height: 23px;">Planificación por Asignatura 1°L</th>
    <th class="" rowspan="2" style="width:11%; height: 48px;"></th>
    <th class="borde_negro" rowspan="2" BGCOLOR="<?php echo $color1;?>" style="width:12%; font-size: 12px; height: 48px;">% Total</th>
</tr>


                           
            <tr>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act1</th>  
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act2</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act3</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act4</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act5</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act6</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act7</th>
            <tr>

            <tr>  
                <td class="borde_izq_y_der_blanco" colspan="7" style="width:77%; height: 23px;"></td>
                <td class="borde_blanco" style="width:11%; height: 23px;"></td>
                <td class="borde_izq_y_der_blanco" style="width:12%; height: 23px;"></td>
            </tr>

            <tr> <!--  1era materia-->
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A11"]; if ($row_datos_de_la_asignaturas["A11"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A12"]; if ($row_datos_de_la_asignaturas["A12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A13"]; if ($row_datos_de_la_asignaturas["A13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A14"]; if ($row_datos_de_la_asignaturas["A14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A15"]; if ($row_datos_de_la_asignaturas["A15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A16"]; if ($row_datos_de_la_asignaturas["A16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A17"]; if ($row_datos_de_la_asignaturas["A17"]>=0.1) {
                  echo $porsign; }  ?></td>  
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_A1_L1 = $row_datos_de_la_asignaturas["A11"]+$row_datos_de_la_asignaturas["A12"]
+$row_datos_de_la_asignaturas["A13"]+$row_datos_de_la_asignaturas["A14"]+$row_datos_de_la_asignaturas["A15"]+$row_datos_de_la_asignaturas["A16"]+
$row_datos_de_la_asignaturas["A17"]; echo $total_A1_L1; if ($total_A1_L1>=0.1) {echo $porsign; }  ?></b></td> 


            </tr>

            <tr> <!--  2da materia-->
               <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B11"];if ($row_datos_de_la_asignaturas["B11"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B12"];if ($row_datos_de_la_asignaturas["B12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B13"];if ($row_datos_de_la_asignaturas["B13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B14"];if ($row_datos_de_la_asignaturas["B14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B15"];if ($row_datos_de_la_asignaturas["B15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B16"];if ($row_datos_de_la_asignaturas["B16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B17"];if ($row_datos_de_la_asignaturas["B17"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_B1_L1 = $row_datos_de_la_asignaturas["B11"]+$row_datos_de_la_asignaturas["B12"]
+$row_datos_de_la_asignaturas["B13"]+$row_datos_de_la_asignaturas["B14"]+$row_datos_de_la_asignaturas["B15"]+$row_datos_de_la_asignaturas["B16"]+
$row_datos_de_la_asignaturas["B17"]; echo $total_B1_L1; if ($total_B1_L1>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>

            <tr> <!--  3era materia-->
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C11"];if ($row_datos_de_la_asignaturas["C11"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C12"];if ($row_datos_de_la_asignaturas["C12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C13"];if ($row_datos_de_la_asignaturas["C13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C14"];if ($row_datos_de_la_asignaturas["C14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C15"];if ($row_datos_de_la_asignaturas["C15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C16"];if ($row_datos_de_la_asignaturas["C16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C17"];if ($row_datos_de_la_asignaturas["C17"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_C1_L1 = $row_datos_de_la_asignaturas["C11"]+$row_datos_de_la_asignaturas["C12"]
+$row_datos_de_la_asignaturas["C13"]+$row_datos_de_la_asignaturas["C14"]+$row_datos_de_la_asignaturas["C15"]+$row_datos_de_la_asignaturas["C16"]+
$row_datos_de_la_asignaturas["C17"]; echo $total_C1_L1; if ($total_C1_L1>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>

            <tr> <!--  4ta materia-->
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D11"];if ($row_datos_de_la_asignaturas["D11"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D12"];if ($row_datos_de_la_asignaturas["D12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D13"];if ($row_datos_de_la_asignaturas["D13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D14"];if ($row_datos_de_la_asignaturas["D14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D15"];if ($row_datos_de_la_asignaturas["D15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D16"];if ($row_datos_de_la_asignaturas["D16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D17"];if ($row_datos_de_la_asignaturas["D17"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_D1_L1 = $row_datos_de_la_asignaturas["D11"]+$row_datos_de_la_asignaturas["D12"]
+$row_datos_de_la_asignaturas["D13"]+$row_datos_de_la_asignaturas["D14"]+$row_datos_de_la_asignaturas["D15"]+$row_datos_de_la_asignaturas["D16"]+
$row_datos_de_la_asignaturas["D17"]; echo $total_D1_L1; if ($total_D1_L1>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  5ta materia-->
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E11"];if ($row_datos_de_la_asignaturas["E11"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E12"];if ($row_datos_de_la_asignaturas["E12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E13"];if ($row_datos_de_la_asignaturas["E13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E14"];if ($row_datos_de_la_asignaturas["E14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E15"];if ($row_datos_de_la_asignaturas["E15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E16"];if ($row_datos_de_la_asignaturas["E16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E17"];if ($row_datos_de_la_asignaturas["E17"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_E1_L1 = $row_datos_de_la_asignaturas["E11"]+$row_datos_de_la_asignaturas["E12"]
+$row_datos_de_la_asignaturas["E13"]+$row_datos_de_la_asignaturas["E14"]+$row_datos_de_la_asignaturas["E15"]+$row_datos_de_la_asignaturas["E16"]+
$row_datos_de_la_asignaturas["E17"]; echo $total_E1_L1; if ($total_E1_L1>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  6ta materia-->
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F11"];if ($row_datos_de_la_asignaturas["F11"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F12"];if ($row_datos_de_la_asignaturas["F12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F13"];if ($row_datos_de_la_asignaturas["F13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F14"];if ($row_datos_de_la_asignaturas["F14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F15"];if ($row_datos_de_la_asignaturas["F15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F16"];if ($row_datos_de_la_asignaturas["F16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F17"];if ($row_datos_de_la_asignaturas["F17"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_F1_L1 = $row_datos_de_la_asignaturas["F11"]+$row_datos_de_la_asignaturas["F12"]
+$row_datos_de_la_asignaturas["F13"]+$row_datos_de_la_asignaturas["F14"]+$row_datos_de_la_asignaturas["F15"]+$row_datos_de_la_asignaturas["F16"]+
$row_datos_de_la_asignaturas["F17"]; echo $total_F1_L1; if ($total_F1_L1>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  7ma materia-->
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G11"];if ($row_datos_de_la_asignaturas["G11"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G12"];if ($row_datos_de_la_asignaturas["G12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G13"];if ($row_datos_de_la_asignaturas["G13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G14"];if ($row_datos_de_la_asignaturas["G14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G15"];if ($row_datos_de_la_asignaturas["G15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G16"];if ($row_datos_de_la_asignaturas["G16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G17"];if ($row_datos_de_la_asignaturas["G17"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_G1_L1 = $row_datos_de_la_asignaturas["G11"]+$row_datos_de_la_asignaturas["G12"]
+$row_datos_de_la_asignaturas["G13"]+$row_datos_de_la_asignaturas["G14"]+$row_datos_de_la_asignaturas["G15"]+$row_datos_de_la_asignaturas["G16"]+
$row_datos_de_la_asignaturas["G17"]; echo $total_G1_L1; if ($total_G1_L1>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  8va materia-->
               <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H11"];if ($row_datos_de_la_asignaturas["H11"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H12"];if ($row_datos_de_la_asignaturas["H12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H13"];if ($row_datos_de_la_asignaturas["H13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H14"];if ($row_datos_de_la_asignaturas["H14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H15"];if ($row_datos_de_la_asignaturas["H15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H16"];if ($row_datos_de_la_asignaturas["H16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H17"];if ($row_datos_de_la_asignaturas["H17"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_H1_L1 = $row_datos_de_la_asignaturas["H11"]+$row_datos_de_la_asignaturas["H12"]
+$row_datos_de_la_asignaturas["H13"]+$row_datos_de_la_asignaturas["H14"]+$row_datos_de_la_asignaturas["H15"]+$row_datos_de_la_asignaturas["H16"]+
$row_datos_de_la_asignaturas["H17"]; echo $total_H1_L1; if ($total_H1_L1>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  9na materia-->
               <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I11"];if ($row_datos_de_la_asignaturas["I11"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I12"];if ($row_datos_de_la_asignaturas["I12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I13"];if ($row_datos_de_la_asignaturas["I13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I14"];if ($row_datos_de_la_asignaturas["I14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I15"];if ($row_datos_de_la_asignaturas["I15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I16"];if ($row_datos_de_la_asignaturas["I16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I17"];if ($row_datos_de_la_asignaturas["I17"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_I1_L1 = $row_datos_de_la_asignaturas["I11"]+$row_datos_de_la_asignaturas["I12"]
+$row_datos_de_la_asignaturas["I13"]+$row_datos_de_la_asignaturas["I14"]+$row_datos_de_la_asignaturas["I15"]+$row_datos_de_la_asignaturas["I16"]+
$row_datos_de_la_asignaturas["I17"]; echo $total_I1_L1; if ($total_I1_L1>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  10ma materia-->
               <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J11"];if ($row_datos_de_la_asignaturas["J11"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J12"];if ($row_datos_de_la_asignaturas["J12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J13"];if ($row_datos_de_la_asignaturas["J13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J14"];if ($row_datos_de_la_asignaturas["J14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J15"];if ($row_datos_de_la_asignaturas["J15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J16"];if ($row_datos_de_la_asignaturas["J16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J17"];if ($row_datos_de_la_asignaturas["J17"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_J1_L1 = $row_datos_de_la_asignaturas["J11"]+$row_datos_de_la_asignaturas["J12"]
+$row_datos_de_la_asignaturas["J13"]+$row_datos_de_la_asignaturas["J14"]+$row_datos_de_la_asignaturas["J15"]+$row_datos_de_la_asignaturas["J16"]+
$row_datos_de_la_asignaturas["J17"]; echo $total_J1_L1; if ($total_J1_L1>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

             <tr> <!--  11 materia-->
               <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K11"];if ($row_datos_de_la_asignaturas["K11"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K12"];if ($row_datos_de_la_asignaturas["K12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K13"];if ($row_datos_de_la_asignaturas["K13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K14"];if ($row_datos_de_la_asignaturas["K14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K15"];if ($row_datos_de_la_asignaturas["K15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K16"];if ($row_datos_de_la_asignaturas["K16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K17"];if ($row_datos_de_la_asignaturas["K17"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_K1_L1 = $row_datos_de_la_asignaturas["K11"]+$row_datos_de_la_asignaturas["K12"]
+$row_datos_de_la_asignaturas["K13"]+$row_datos_de_la_asignaturas["K14"]+$row_datos_de_la_asignaturas["K15"]+$row_datos_de_la_asignaturas["K16"]+
$row_datos_de_la_asignaturas["K17"]; echo $total_K1_L1; if ($total_K1_L1>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  12 materia-->
               <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L11"];if ($row_datos_de_la_asignaturas["L11"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L12"];if ($row_datos_de_la_asignaturas["L12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L13"];if ($row_datos_de_la_asignaturas["L13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L14"];if ($row_datos_de_la_asignaturas["L14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L15"];if ($row_datos_de_la_asignaturas["L15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L16"];if ($row_datos_de_la_asignaturas["L16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L17"];if ($row_datos_de_la_asignaturas["L17"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_L1_L1 = $row_datos_de_la_asignaturas["L11"]+$row_datos_de_la_asignaturas["L12"]
+$row_datos_de_la_asignaturas["L13"]+$row_datos_de_la_asignaturas["L14"]+$row_datos_de_la_asignaturas["L15"]+$row_datos_de_la_asignaturas["L16"]+
$row_datos_de_la_asignaturas["L17"]; echo $total_L1_L1; if ($total_L1_L1>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>



               <tr> <!--  13 materia-->
               <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M11"];if ($row_datos_de_la_asignaturas["M11"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M12"];if ($row_datos_de_la_asignaturas["M12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M13"];if ($row_datos_de_la_asignaturas["M13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M14"];if ($row_datos_de_la_asignaturas["M14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M15"];if ($row_datos_de_la_asignaturas["M15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M16"];if ($row_datos_de_la_asignaturas["M16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M17"];if ($row_datos_de_la_asignaturas["M17"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_L1_L1 = $row_datos_de_la_asignaturas["M11"]+$row_datos_de_la_asignaturas["M12"]
+$row_datos_de_la_asignaturas["M13"]+$row_datos_de_la_asignaturas["M14"]+$row_datos_de_la_asignaturas["M15"]+$row_datos_de_la_asignaturas["M16"]+
$row_datos_de_la_asignaturas["M17"]; echo $total_L1_L1; if ($total_L1_L1>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>




               <tr> <!--  14 materia-->
               <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N11"];if ($row_datos_de_la_asignaturas["N11"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N12"];if ($row_datos_de_la_asignaturas["N12"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N13"];if ($row_datos_de_la_asignaturas["N13"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N14"];if ($row_datos_de_la_asignaturas["N14"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N15"];if ($row_datos_de_la_asignaturas["N15"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N16"];if ($row_datos_de_la_asignaturas["N16"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N17"];if ($row_datos_de_la_asignaturas["N17"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_L1_L1 = $row_datos_de_la_asignaturas["N11"]+$row_datos_de_la_asignaturas["N12"]
+$row_datos_de_la_asignaturas["N13"]+$row_datos_de_la_asignaturas["N14"]+$row_datos_de_la_asignaturas["N15"]+$row_datos_de_la_asignaturas["N16"]+
$row_datos_de_la_asignaturas["N17"]; echo $total_L1_L1; if ($total_L1_L1>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            

                           
        </table>   


	</div> <!--  cierre 1er lapso-->





	<div class="col-md-3 mb-1">  <!--  tabla 2do Lapso-->




        <table class="ml-4" style='text-align:center;vertical-align:middle'>  

<tr>
    <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color2;?>" style="width:77%;">Planificación por Asignatura 2°L</th>
    <th class="" rowspan="2" style="width:11%; height:48px;"></th>
    <th class="borde_negro" rowspan="2" BGCOLOR="<?php echo $color2;?>" style="width:12%; font-size: 12px; height:48px;">% Total</th>
</tr>

           
                           
            <tr>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act1</th>  
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act2</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act3</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act4</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act5</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act6</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act7</th>
            <tr>

            <tr>  
                <td class="borde_izq_y_der_blanco" colspan="7" style="width:77%; height: 23px;"></td>
                <td class="borde_blanco" style="width:11%; height: 23px;"></td>
                <td class="borde_izq_y_der_blanco" style="width:12%; height: 23px;"></td>
            </tr>

            <tr> <!--  1era materia-->
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A21"]; if ($row_datos_de_la_asignaturas["A21"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A22"]; if ($row_datos_de_la_asignaturas["A22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A23"]; if ($row_datos_de_la_asignaturas["A23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A24"]; if ($row_datos_de_la_asignaturas["A24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A25"]; if ($row_datos_de_la_asignaturas["A25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A26"]; if ($row_datos_de_la_asignaturas["A26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A27"]; if ($row_datos_de_la_asignaturas["A27"]>=0.1) {
                  echo $porsign; }  ?></td>  
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_A1_L2 = $row_datos_de_la_asignaturas["A21"]+$row_datos_de_la_asignaturas["A22"]
+$row_datos_de_la_asignaturas["A23"]+$row_datos_de_la_asignaturas["A24"]+$row_datos_de_la_asignaturas["A25"]+$row_datos_de_la_asignaturas["A26"]+
$row_datos_de_la_asignaturas["A27"]; echo $total_A1_L2; if ($total_A1_L2>=0.1) {echo $porsign; }  ?></b></td> 


            </tr>

            <tr> <!--  2da materia-->
               <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B21"];if ($row_datos_de_la_asignaturas["B21"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B22"];if ($row_datos_de_la_asignaturas["B22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B23"];if ($row_datos_de_la_asignaturas["B23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B24"];if ($row_datos_de_la_asignaturas["B24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B25"];if ($row_datos_de_la_asignaturas["B25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B26"];if ($row_datos_de_la_asignaturas["B26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B27"];if ($row_datos_de_la_asignaturas["B27"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_B1_L2 = $row_datos_de_la_asignaturas["B21"]+$row_datos_de_la_asignaturas["B22"]
+$row_datos_de_la_asignaturas["B23"]+$row_datos_de_la_asignaturas["B24"]+$row_datos_de_la_asignaturas["B25"]+$row_datos_de_la_asignaturas["B26"]+
$row_datos_de_la_asignaturas["B27"]; echo $total_B1_L2; if ($total_B1_L2>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>

            <tr> <!--  3era materia-->
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C21"];if ($row_datos_de_la_asignaturas["C21"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C22"];if ($row_datos_de_la_asignaturas["C22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C23"];if ($row_datos_de_la_asignaturas["C23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C24"];if ($row_datos_de_la_asignaturas["C24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C25"];if ($row_datos_de_la_asignaturas["C25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C26"];if ($row_datos_de_la_asignaturas["C26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C27"];if ($row_datos_de_la_asignaturas["C27"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_C1_L2 = $row_datos_de_la_asignaturas["C21"]+$row_datos_de_la_asignaturas["C22"]
+$row_datos_de_la_asignaturas["C23"]+$row_datos_de_la_asignaturas["C24"]+$row_datos_de_la_asignaturas["C25"]+$row_datos_de_la_asignaturas["C26"]+
$row_datos_de_la_asignaturas["C27"]; echo $total_C1_L2; if ($total_C1_L2>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>

            <tr> <!--  4ta materia-->
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D21"];if ($row_datos_de_la_asignaturas["D21"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D22"];if ($row_datos_de_la_asignaturas["D22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D23"];if ($row_datos_de_la_asignaturas["D23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D24"];if ($row_datos_de_la_asignaturas["D24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D25"];if ($row_datos_de_la_asignaturas["D25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D26"];if ($row_datos_de_la_asignaturas["D26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D27"];if ($row_datos_de_la_asignaturas["D27"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_D1_L2 = $row_datos_de_la_asignaturas["D21"]+$row_datos_de_la_asignaturas["D22"]
+$row_datos_de_la_asignaturas["D23"]+$row_datos_de_la_asignaturas["D24"]+$row_datos_de_la_asignaturas["D25"]+$row_datos_de_la_asignaturas["D26"]+
$row_datos_de_la_asignaturas["D27"]; echo $total_D1_L2; if ($total_D1_L2>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  5ta materia-->
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E21"];if ($row_datos_de_la_asignaturas["E21"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E22"];if ($row_datos_de_la_asignaturas["E22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E23"];if ($row_datos_de_la_asignaturas["E23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E24"];if ($row_datos_de_la_asignaturas["E24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E25"];if ($row_datos_de_la_asignaturas["E25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E26"];if ($row_datos_de_la_asignaturas["E26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E27"];if ($row_datos_de_la_asignaturas["E27"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_E1_L2 = $row_datos_de_la_asignaturas["E21"]+$row_datos_de_la_asignaturas["E22"]
+$row_datos_de_la_asignaturas["E23"]+$row_datos_de_la_asignaturas["E24"]+$row_datos_de_la_asignaturas["E25"]+$row_datos_de_la_asignaturas["E26"]+
$row_datos_de_la_asignaturas["E27"]; echo $total_E1_L2; if ($total_E1_L2>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  6ta materia-->
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F21"];if ($row_datos_de_la_asignaturas["F21"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F22"];if ($row_datos_de_la_asignaturas["F22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F23"];if ($row_datos_de_la_asignaturas["F23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F24"];if ($row_datos_de_la_asignaturas["F24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F25"];if ($row_datos_de_la_asignaturas["F25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F26"];if ($row_datos_de_la_asignaturas["F26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F27"];if ($row_datos_de_la_asignaturas["F27"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_F1_L2 = $row_datos_de_la_asignaturas["F21"]+$row_datos_de_la_asignaturas["F22"]
+$row_datos_de_la_asignaturas["F23"]+$row_datos_de_la_asignaturas["F24"]+$row_datos_de_la_asignaturas["F25"]+$row_datos_de_la_asignaturas["F26"]+
$row_datos_de_la_asignaturas["F27"]; echo $total_F1_L2; if ($total_F1_L2>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  7ma materia-->
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G21"];if ($row_datos_de_la_asignaturas["G21"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G22"];if ($row_datos_de_la_asignaturas["G22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G23"];if ($row_datos_de_la_asignaturas["G23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G24"];if ($row_datos_de_la_asignaturas["G24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G25"];if ($row_datos_de_la_asignaturas["G25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G26"];if ($row_datos_de_la_asignaturas["G26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G27"];if ($row_datos_de_la_asignaturas["G27"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_G1_L2 = $row_datos_de_la_asignaturas["G21"]+$row_datos_de_la_asignaturas["G22"]
+$row_datos_de_la_asignaturas["G23"]+$row_datos_de_la_asignaturas["G24"]+$row_datos_de_la_asignaturas["G25"]+$row_datos_de_la_asignaturas["G26"]+
$row_datos_de_la_asignaturas["G27"]; echo $total_G1_L2; if ($total_G1_L2>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  8va materia-->
               <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H21"];if ($row_datos_de_la_asignaturas["H21"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H22"];if ($row_datos_de_la_asignaturas["H22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H23"];if ($row_datos_de_la_asignaturas["H23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H24"];if ($row_datos_de_la_asignaturas["H24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H25"];if ($row_datos_de_la_asignaturas["H25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H26"];if ($row_datos_de_la_asignaturas["H26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H27"];if ($row_datos_de_la_asignaturas["H27"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_H1_L2 = $row_datos_de_la_asignaturas["H21"]+$row_datos_de_la_asignaturas["H22"]
+$row_datos_de_la_asignaturas["H23"]+$row_datos_de_la_asignaturas["H24"]+$row_datos_de_la_asignaturas["H25"]+$row_datos_de_la_asignaturas["H26"]+
$row_datos_de_la_asignaturas["H27"]; echo $total_H1_L2; if ($total_H1_L2>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  9na materia-->
               <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I21"];if ($row_datos_de_la_asignaturas["I21"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I22"];if ($row_datos_de_la_asignaturas["I22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I23"];if ($row_datos_de_la_asignaturas["I23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I24"];if ($row_datos_de_la_asignaturas["I24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I25"];if ($row_datos_de_la_asignaturas["I25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I26"];if ($row_datos_de_la_asignaturas["I26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I27"];if ($row_datos_de_la_asignaturas["I27"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_I1_L2 = $row_datos_de_la_asignaturas["I21"]+$row_datos_de_la_asignaturas["I22"]
+$row_datos_de_la_asignaturas["I23"]+$row_datos_de_la_asignaturas["I24"]+$row_datos_de_la_asignaturas["I25"]+$row_datos_de_la_asignaturas["I26"]+
$row_datos_de_la_asignaturas["I27"]; echo $total_I1_L2; if ($total_I1_L2>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  10ma materia-->
               <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J21"];if ($row_datos_de_la_asignaturas["J21"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J22"];if ($row_datos_de_la_asignaturas["J22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J23"];if ($row_datos_de_la_asignaturas["J23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J24"];if ($row_datos_de_la_asignaturas["J24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J25"];if ($row_datos_de_la_asignaturas["J25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J26"];if ($row_datos_de_la_asignaturas["J26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J27"];if ($row_datos_de_la_asignaturas["J27"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_J1_L2 = $row_datos_de_la_asignaturas["J21"]+$row_datos_de_la_asignaturas["J22"]
+$row_datos_de_la_asignaturas["J23"]+$row_datos_de_la_asignaturas["J24"]+$row_datos_de_la_asignaturas["J25"]+$row_datos_de_la_asignaturas["J26"]+
$row_datos_de_la_asignaturas["J27"]; echo $total_J1_L2; if ($total_J1_L2>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

             <tr> <!--  11 materia-->
               <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K21"];if ($row_datos_de_la_asignaturas["K21"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K22"];if ($row_datos_de_la_asignaturas["K22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K23"];if ($row_datos_de_la_asignaturas["K23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K24"];if ($row_datos_de_la_asignaturas["K24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K25"];if ($row_datos_de_la_asignaturas["K25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K26"];if ($row_datos_de_la_asignaturas["K26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K27"];if ($row_datos_de_la_asignaturas["K27"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_K1_L2 = $row_datos_de_la_asignaturas["K21"]+$row_datos_de_la_asignaturas["K22"]
+$row_datos_de_la_asignaturas["K23"]+$row_datos_de_la_asignaturas["K24"]+$row_datos_de_la_asignaturas["K25"]+$row_datos_de_la_asignaturas["K26"]+
$row_datos_de_la_asignaturas["K27"]; echo $total_K1_L2; if ($total_K1_L2>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  12 materia-->
               <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L21"];if ($row_datos_de_la_asignaturas["L21"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L22"];if ($row_datos_de_la_asignaturas["L22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L23"];if ($row_datos_de_la_asignaturas["L23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L24"];if ($row_datos_de_la_asignaturas["L24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L25"];if ($row_datos_de_la_asignaturas["L25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L26"];if ($row_datos_de_la_asignaturas["L26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L27"];if ($row_datos_de_la_asignaturas["L27"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_L1_L2 = $row_datos_de_la_asignaturas["L21"]+$row_datos_de_la_asignaturas["L22"]
+$row_datos_de_la_asignaturas["L23"]+$row_datos_de_la_asignaturas["L24"]+$row_datos_de_la_asignaturas["L25"]+$row_datos_de_la_asignaturas["L26"]+
$row_datos_de_la_asignaturas["L27"]; echo $total_L1_L2; if ($total_L1_L2>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>





               <tr> <!--  13 materia-->
               <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M21"];if ($row_datos_de_la_asignaturas["M21"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M22"];if ($row_datos_de_la_asignaturas["M22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M23"];if ($row_datos_de_la_asignaturas["M23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M24"];if ($row_datos_de_la_asignaturas["M24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M25"];if ($row_datos_de_la_asignaturas["M25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M26"];if ($row_datos_de_la_asignaturas["M26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M27"];if ($row_datos_de_la_asignaturas["M27"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_L1_L2 = $row_datos_de_la_asignaturas["M21"]+$row_datos_de_la_asignaturas["M22"]
+$row_datos_de_la_asignaturas["M23"]+$row_datos_de_la_asignaturas["M24"]+$row_datos_de_la_asignaturas["M25"]+$row_datos_de_la_asignaturas["M26"]+
$row_datos_de_la_asignaturas["M27"]; echo $total_L1_L2; if ($total_L1_L2>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>




               <tr> <!--  14 materia-->
               <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N21"];if ($row_datos_de_la_asignaturas["N21"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N22"];if ($row_datos_de_la_asignaturas["N22"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N23"];if ($row_datos_de_la_asignaturas["N23"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N24"];if ($row_datos_de_la_asignaturas["N24"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N25"];if ($row_datos_de_la_asignaturas["N25"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N26"];if ($row_datos_de_la_asignaturas["N26"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N27"];if ($row_datos_de_la_asignaturas["N27"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_L1_L2 = $row_datos_de_la_asignaturas["N21"]+$row_datos_de_la_asignaturas["N22"]
+$row_datos_de_la_asignaturas["N23"]+$row_datos_de_la_asignaturas["N24"]+$row_datos_de_la_asignaturas["N25"]+$row_datos_de_la_asignaturas["N26"]+
$row_datos_de_la_asignaturas["N27"]; echo $total_L1_L2; if ($total_L1_L2>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>


           
                           
        </table>   


	</div> <!--  cierre 2do lapso-->





	<div class="col-md-3 mb-1">  <!--  tabla 3er Lapso-->


        <table class="ml-4" style='text-align:center;vertical-align:middle'>  

<tr>
    <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color3;?>" style="width:77%;">Planificación por Asignatura 3°L</th>
    <th class="" rowspan="2" style="width:11%; height:48px;"></th>
    <th class="borde_negro" rowspan="2" BGCOLOR="<?php echo $color3;?>" style="width:12%; font-size: 12px; height:48px;">% Total</th>
</tr>

                           
            <tr>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act1</th>  
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act2</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act3</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act4</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act5</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act6</th>
                <th class="borde_negro" style="width:11%; font-size: 12px; height:23px;" >Act7</th>
            <tr>

            <tr>  
                <td class="borde_izq_y_der_blanco" colspan="7" style="width:77%; height: 23px;"></td>
                <td class="borde_blanco" style="width:11%; height: 23px;"></td>
                <td class="borde_izq_y_der_blanco" style="width:12%; height: 23px;"></td>
            </tr>
          
                           
             <tr> <!--  1era materia-->
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A31"]; if ($row_datos_de_la_asignaturas["A31"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A32"]; if ($row_datos_de_la_asignaturas["A32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A33"]; if ($row_datos_de_la_asignaturas["A33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A34"]; if ($row_datos_de_la_asignaturas["A34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A35"]; if ($row_datos_de_la_asignaturas["A35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A36"]; if ($row_datos_de_la_asignaturas["A36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["A37"]; if ($row_datos_de_la_asignaturas["A37"]>=0.1) {
                  echo $porsign; }  ?></td>  
                <td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_A1_L3 = $row_datos_de_la_asignaturas["A31"]+$row_datos_de_la_asignaturas["A32"]
+$row_datos_de_la_asignaturas["A33"]+$row_datos_de_la_asignaturas["A34"]+$row_datos_de_la_asignaturas["A35"]+$row_datos_de_la_asignaturas["A36"]+
$row_datos_de_la_asignaturas["A37"]; echo $total_A1_L3; if ($total_A1_L3>=0.1) {echo $porsign; }  ?></b></td> 


            </tr>

            <tr> <!--  2da materia-->
               <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B31"];if ($row_datos_de_la_asignaturas["B31"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B32"];if ($row_datos_de_la_asignaturas["B32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B33"];if ($row_datos_de_la_asignaturas["B33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B34"];if ($row_datos_de_la_asignaturas["B34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B35"];if ($row_datos_de_la_asignaturas["B35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B36"];if ($row_datos_de_la_asignaturas["B36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["B37"];if ($row_datos_de_la_asignaturas["B37"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_B1_L3 = $row_datos_de_la_asignaturas["B21"]+$row_datos_de_la_asignaturas["B22"]
+$row_datos_de_la_asignaturas["B23"]+$row_datos_de_la_asignaturas["B24"]+$row_datos_de_la_asignaturas["B25"]+$row_datos_de_la_asignaturas["B26"]+
$row_datos_de_la_asignaturas["B27"]; echo $total_B1_L3; if ($total_B1_L3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>

            <tr> <!--  3era materia-->
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C31"];if ($row_datos_de_la_asignaturas["C31"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C32"];if ($row_datos_de_la_asignaturas["C32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C33"];if ($row_datos_de_la_asignaturas["C33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C34"];if ($row_datos_de_la_asignaturas["C34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C35"];if ($row_datos_de_la_asignaturas["C35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C36"];if ($row_datos_de_la_asignaturas["C36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["C37"];if ($row_datos_de_la_asignaturas["C37"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_C1_L3 = $row_datos_de_la_asignaturas["C31"]+$row_datos_de_la_asignaturas["C32"]
+$row_datos_de_la_asignaturas["C33"]+$row_datos_de_la_asignaturas["C34"]+$row_datos_de_la_asignaturas["C35"]+$row_datos_de_la_asignaturas["C36"]+
$row_datos_de_la_asignaturas["C37"]; echo $total_C1_L3; if ($total_C1_L3>=0.1) {echo $porsign; }  ?></b></td> 

            </tr>

            <tr> <!--  4ta materia-->
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D31"];if ($row_datos_de_la_asignaturas["D31"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D32"];if ($row_datos_de_la_asignaturas["D32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D33"];if ($row_datos_de_la_asignaturas["D33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D34"];if ($row_datos_de_la_asignaturas["D34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D35"];if ($row_datos_de_la_asignaturas["D35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D36"];if ($row_datos_de_la_asignaturas["D36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["D37"];if ($row_datos_de_la_asignaturas["D37"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_D1_L3 = $row_datos_de_la_asignaturas["D31"]+$row_datos_de_la_asignaturas["D32"]
+$row_datos_de_la_asignaturas["D33"]+$row_datos_de_la_asignaturas["D34"]+$row_datos_de_la_asignaturas["D35"]+$row_datos_de_la_asignaturas["D36"]+
$row_datos_de_la_asignaturas["D37"]; echo $total_D1_L3; if ($total_D1_L3>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  5ta materia-->
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E31"];if ($row_datos_de_la_asignaturas["E31"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E32"];if ($row_datos_de_la_asignaturas["E32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E33"];if ($row_datos_de_la_asignaturas["E33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E34"];if ($row_datos_de_la_asignaturas["E34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E35"];if ($row_datos_de_la_asignaturas["E35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E36"];if ($row_datos_de_la_asignaturas["E36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["E37"];if ($row_datos_de_la_asignaturas["E37"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_E1_L3 = $row_datos_de_la_asignaturas["E31"]+$row_datos_de_la_asignaturas["E32"]
+$row_datos_de_la_asignaturas["E33"]+$row_datos_de_la_asignaturas["E34"]+$row_datos_de_la_asignaturas["E35"]+$row_datos_de_la_asignaturas["E36"]+
$row_datos_de_la_asignaturas["E37"]; echo $total_E1_L3; if ($total_E1_L3>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  6ta materia-->
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F31"];if ($row_datos_de_la_asignaturas["F31"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F32"];if ($row_datos_de_la_asignaturas["F32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F33"];if ($row_datos_de_la_asignaturas["F33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F34"];if ($row_datos_de_la_asignaturas["F34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F35"];if ($row_datos_de_la_asignaturas["F35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F36"];if ($row_datos_de_la_asignaturas["F36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["F37"];if ($row_datos_de_la_asignaturas["F37"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_F1_L3 = $row_datos_de_la_asignaturas["F31"]+$row_datos_de_la_asignaturas["F32"]
+$row_datos_de_la_asignaturas["F33"]+$row_datos_de_la_asignaturas["F34"]+$row_datos_de_la_asignaturas["F35"]+$row_datos_de_la_asignaturas["F36"]+
$row_datos_de_la_asignaturas["F37"]; echo $total_F1_L3; if ($total_F1_L3>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  7ma materia-->
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G31"];if ($row_datos_de_la_asignaturas["G31"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G32"];if ($row_datos_de_la_asignaturas["G32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G33"];if ($row_datos_de_la_asignaturas["G33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G34"];if ($row_datos_de_la_asignaturas["G34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G35"];if ($row_datos_de_la_asignaturas["G35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G36"];if ($row_datos_de_la_asignaturas["G36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["G37"];if ($row_datos_de_la_asignaturas["G37"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_G1_L3 = $row_datos_de_la_asignaturas["G31"]+$row_datos_de_la_asignaturas["G32"]
+$row_datos_de_la_asignaturas["G33"]+$row_datos_de_la_asignaturas["G34"]+$row_datos_de_la_asignaturas["G35"]+$row_datos_de_la_asignaturas["G36"]+
$row_datos_de_la_asignaturas["G37"]; echo $total_G1_L3; if ($total_G1_L3>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  8va materia-->
               <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H31"];if ($row_datos_de_la_asignaturas["H31"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H32"];if ($row_datos_de_la_asignaturas["H32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H33"];if ($row_datos_de_la_asignaturas["H33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H34"];if ($row_datos_de_la_asignaturas["H34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H35"];if ($row_datos_de_la_asignaturas["H35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H36"];if ($row_datos_de_la_asignaturas["H36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["H37"];if ($row_datos_de_la_asignaturas["H37"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_H1_L3 = $row_datos_de_la_asignaturas["H31"]+$row_datos_de_la_asignaturas["H32"]
+$row_datos_de_la_asignaturas["H33"]+$row_datos_de_la_asignaturas["H34"]+$row_datos_de_la_asignaturas["H35"]+$row_datos_de_la_asignaturas["H36"]+
$row_datos_de_la_asignaturas["H37"]; echo $total_H1_L3; if ($total_H1_L3>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  9na materia-->
               <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I31"];if ($row_datos_de_la_asignaturas["I31"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I32"];if ($row_datos_de_la_asignaturas["I32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I33"];if ($row_datos_de_la_asignaturas["I33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I34"];if ($row_datos_de_la_asignaturas["I34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I35"];if ($row_datos_de_la_asignaturas["I35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I36"];if ($row_datos_de_la_asignaturas["I36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["I37"];if ($row_datos_de_la_asignaturas["I37"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_I1_L3 = $row_datos_de_la_asignaturas["I31"]+$row_datos_de_la_asignaturas["I32"]
+$row_datos_de_la_asignaturas["I33"]+$row_datos_de_la_asignaturas["I34"]+$row_datos_de_la_asignaturas["I35"]+$row_datos_de_la_asignaturas["I36"]+
$row_datos_de_la_asignaturas["I37"]; echo $total_I1_L3; if ($total_I1_L3>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  10ma materia-->
               <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J31"];if ($row_datos_de_la_asignaturas["J31"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J32"];if ($row_datos_de_la_asignaturas["J32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J33"];if ($row_datos_de_la_asignaturas["J33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J34"];if ($row_datos_de_la_asignaturas["J34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J35"];if ($row_datos_de_la_asignaturas["J35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J36"];if ($row_datos_de_la_asignaturas["J36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["J37"];if ($row_datos_de_la_asignaturas["J37"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_J1_L3 = $row_datos_de_la_asignaturas["J31"]+$row_datos_de_la_asignaturas["J32"]
+$row_datos_de_la_asignaturas["J33"]+$row_datos_de_la_asignaturas["J34"]+$row_datos_de_la_asignaturas["J35"]+$row_datos_de_la_asignaturas["J36"]+
$row_datos_de_la_asignaturas["J37"]; echo $total_J1_L3; if ($total_J1_L3>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

             <tr> <!--  11 materia-->
               <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K31"];if ($row_datos_de_la_asignaturas["K31"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K32"];if ($row_datos_de_la_asignaturas["K32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K33"];if ($row_datos_de_la_asignaturas["K33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K34"];if ($row_datos_de_la_asignaturas["K34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K35"];if ($row_datos_de_la_asignaturas["K35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K36"];if ($row_datos_de_la_asignaturas["K36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["K37"];if ($row_datos_de_la_asignaturas["K37"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_K1_L3 = $row_datos_de_la_asignaturas["K31"]+$row_datos_de_la_asignaturas["K32"]
+$row_datos_de_la_asignaturas["K33"]+$row_datos_de_la_asignaturas["K34"]+$row_datos_de_la_asignaturas["K35"]+$row_datos_de_la_asignaturas["K36"]+
$row_datos_de_la_asignaturas["K37"]; echo $total_K1_L3; if ($total_K1_L3>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>

            <tr> <!--  12 materia-->
               <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L31"];if ($row_datos_de_la_asignaturas["L31"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L32"];if ($row_datos_de_la_asignaturas["L32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L33"];if ($row_datos_de_la_asignaturas["L33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L34"];if ($row_datos_de_la_asignaturas["L34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L35"];if ($row_datos_de_la_asignaturas["L35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L36"];if ($row_datos_de_la_asignaturas["L36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["L37"];if ($row_datos_de_la_asignaturas["L37"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_L1_L3 = $row_datos_de_la_asignaturas["L31"]+$row_datos_de_la_asignaturas["L32"]
+$row_datos_de_la_asignaturas["L33"]+$row_datos_de_la_asignaturas["L34"]+$row_datos_de_la_asignaturas["L35"]+$row_datos_de_la_asignaturas["L36"]+
$row_datos_de_la_asignaturas["L37"]; echo $total_L1_L3; if ($total_L1_L3>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>


           

               <tr> <!--  13 materia-->
               <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M31"];if ($row_datos_de_la_asignaturas["M31"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M32"];if ($row_datos_de_la_asignaturas["M32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M33"];if ($row_datos_de_la_asignaturas["M33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M34"];if ($row_datos_de_la_asignaturas["M34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M35"];if ($row_datos_de_la_asignaturas["M35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M36"];if ($row_datos_de_la_asignaturas["M36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["M37"];if ($row_datos_de_la_asignaturas["M37"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_L1_L3 = $row_datos_de_la_asignaturas["M31"]+$row_datos_de_la_asignaturas["M32"]
+$row_datos_de_la_asignaturas["M33"]+$row_datos_de_la_asignaturas["M34"]+$row_datos_de_la_asignaturas["M35"]+$row_datos_de_la_asignaturas["M36"]+
$row_datos_de_la_asignaturas["M37"]; echo $total_L1_L3; if ($total_L1_L3>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>




               <tr> <!--  14 materia-->
               <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N31"];if ($row_datos_de_la_asignaturas["N31"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N32"];if ($row_datos_de_la_asignaturas["N32"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N33"];if ($row_datos_de_la_asignaturas["N33"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N34"];if ($row_datos_de_la_asignaturas["N34"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N35"];if ($row_datos_de_la_asignaturas["N35"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N36"];if ($row_datos_de_la_asignaturas["N36"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:11%; height: 23px;"><?php echo $row_datos_de_la_asignaturas["N37"];if ($row_datos_de_la_asignaturas["N37"]>=0.1) {
                  echo $porsign; }  ?></td>
                <td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="" style="width:11%; height: 23px;"></td>

<td <?php if ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> class="borde_negro" style="width:12%; height: 23px; "><b><?php $total_L1_L3 = $row_datos_de_la_asignaturas["N31"]+$row_datos_de_la_asignaturas["N32"]
+$row_datos_de_la_asignaturas["N33"]+$row_datos_de_la_asignaturas["N34"]+$row_datos_de_la_asignaturas["N35"]+$row_datos_de_la_asignaturas["N36"]+
$row_datos_de_la_asignaturas["N37"]; echo $total_L1_L3; if ($total_L1_L3>=0.1) {echo $porsign; }  ?></b></td> 
            </tr>






         
                           
        </table>   


	</div> <!--  cierre 3er lapso-->



<!--
<div class="col-md-2 mb-1">  

        <table class="ml-4" style='text-align:center;vertical-align:middle; width:77%;'>   
                                     
            <tr>
            <td class="borde_negro" BGCOLOR="<?php echo $color4;?>" style="height: 48px;"><b>Observaciones:</b></td>
            </tr>
           

            <tr>
            <td class="borde_izq_y_der_blanco" style="height: 23px;"></td>
            </tr>

            <tr>
            <td class="borde_negro" style="height: 293px;"></td>
            </tr>

                                  
          
                           
        </table>   


	</div>  cierre observaciones-->







</div> <!--  cierre fila inferior-->

</div> <!--  cierre card body-->
</div> <!--  cierre card-->




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