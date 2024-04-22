<table class="table table-sm">
  <thead class="align-middle" align="center">
    <tr>
    <th scope="col" BGCOLOR="<?php echo $color0;?>">#</th>
    <th scope="col" BGCOLOR="<?php echo $color0;?>" <?php if
      ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> >
        <?php echo $row_datos_controlasign['a_abrev'];?></th>
      <th scope="col" BGCOLOR="<?php echo $color0;?>" <?php if
      ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> >
        <?php echo $row_datos_controlasign['b_abrev'];?></th>
      <th scope="col" BGCOLOR="<?php echo $color0;?>" <?php if
      ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> >
        <?php echo $row_datos_controlasign['c_abrev'];?></th>
      <th scope="col" BGCOLOR="<?php echo $color0;?>" <?php if
      ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> >
        <?php echo $row_datos_controlasign['d_abrev'];?></th>
      <th scope="col" BGCOLOR="<?php echo $color0;?>" <?php if
      ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> >
        <?php echo $row_datos_controlasign['e_abrev'];?></th>
      <th scope="col" BGCOLOR="<?php echo $color0;?>" <?php if
      ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> >
        <?php echo $row_datos_controlasign['f_abrev'];?></th>
      <th scope="col" BGCOLOR="<?php echo $color0;?>" <?php if
      ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> >
        <?php echo $row_datos_controlasign['g_abrev'];?></th>
      <th scope="col" BGCOLOR="<?php echo $color0;?>" <?php if
      ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> >
        <?php echo $row_datos_controlasign['h_abrev'];?></th>
      <th scope="col" BGCOLOR="<?php echo $color0;?>" <?php if
      ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> >
        <?php echo $row_datos_controlasign['i_abrev'];?></th>
      <th scope="col" BGCOLOR="<?php echo $color0;?>" <?php if
      ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> >
        <?php echo $row_datos_controlasign['j_abrev'];?></th>
      <th scope="col" BGCOLOR="<?php echo $color0;?>" <?php if
      ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> >
        <?php echo $row_datos_controlasign['k_abrev'];?></th>
      <th scope="col" BGCOLOR="<?php echo $color0;?>" <?php if
      ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> >
        <?php echo $row_datos_controlasign['l_abrev'];?></th>
      <th scope="col" BGCOLOR="<?php echo $color0;?>" <?php if
      ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> >
        <?php echo $row_datos_controlasign['m_abrev'];?></th>
      <th scope="col" BGCOLOR="<?php echo $color0;?>" <?php if
      ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> >
        <?php echo $row_datos_controlasign['n_abrev'];?></th>
    </tr>
  </thead>


<?php

$promedio_L1_A1 = 0.00000000001;
$promedio_L2_A1 = 0.00000000001;
$promedio_L3_A1 = 0.00000000001;

include("../conectar.php");

$registro_notas = $r_d_reg_estu_HOYx["id_reg_estu_actual"];


$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_estxx1'
               and materia = 1
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 








$nota_A1_L1_N1 = ($row_datos_control_notas["nt_11"] * $porcentaje_A1_L1_N1)/$el_puntaje_completo_es;
$nota_A1_L1_N2 = ($row_datos_control_notas["nt_12"] * $porcentaje_A1_L1_N2)/$el_puntaje_completo_es;
$nota_A1_L1_N3 = ($row_datos_control_notas["nt_13"] * $porcentaje_A1_L1_N3)/$el_puntaje_completo_es;
$nota_A1_L1_N4 = ($row_datos_control_notas["nt_14"] * $porcentaje_A1_L1_N4)/$el_puntaje_completo_es;
$nota_A1_L1_N5 = ($row_datos_control_notas["nt_15"] * $porcentaje_A1_L1_N5)/$el_puntaje_completo_es;
$nota_A1_L1_N6 = ($row_datos_control_notas["nt_16"] * $porcentaje_A1_L1_N6)/$el_puntaje_completo_es;
$nota_A1_L1_N7 = ($row_datos_control_notas["nt_17"] * $porcentaje_A1_L1_N7)/$el_puntaje_completo_es;
$notaAu_A1_L1 = $row_datos_control_notas["nt_Au1"];

$nota_final_A1_L1 = $nota_A1_L1_N1 + $nota_A1_L1_N2 + $nota_A1_L1_N3 + $nota_A1_L1_N4 + $nota_A1_L1_N5 + $nota_A1_L1_N6 + $nota_A1_L1_N7 + $notaAu_A1_L1;

$nota_final_A1_L1_redon1 =number_format($nota_final_A1_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1



if ($nota_final_A1_L1 >=0.1) {
   $promedio_L1_A1 = 1;
}

$nota_A1_L2_N1 = ($row_datos_control_notas["nt_21"] * $porcentaje_A1_L2_N1)/$el_puntaje_completo_es;
$nota_A1_L2_N2 = ($row_datos_control_notas["nt_22"] * $porcentaje_A1_L2_N2)/$el_puntaje_completo_es;
$nota_A1_L2_N3 = ($row_datos_control_notas["nt_23"] * $porcentaje_A1_L2_N3)/$el_puntaje_completo_es;
$nota_A1_L2_N4 = ($row_datos_control_notas["nt_24"] * $porcentaje_A1_L2_N4)/$el_puntaje_completo_es;
$nota_A1_L2_N5 = ($row_datos_control_notas["nt_25"] * $porcentaje_A1_L2_N5)/$el_puntaje_completo_es;
$nota_A1_L2_N6 = ($row_datos_control_notas["nt_26"] * $porcentaje_A1_L2_N6)/$el_puntaje_completo_es;
$nota_A1_L2_N7 = ($row_datos_control_notas["nt_27"] * $porcentaje_A1_L2_N7)/$el_puntaje_completo_es;
$notaAu_A1_L2 = $row_datos_control_notas["nt_Au2"];

$nota_final_A1_L2 = $nota_A1_L2_N1 + $nota_A1_L2_N2 + $nota_A1_L2_N3 + $nota_A1_L2_N4 + $nota_A1_L2_N5 + $nota_A1_L2_N6 + $nota_A1_L2_N7 + $notaAu_A1_L2;

$nota_final_A1_L2_redon1 =number_format($nota_final_A1_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A1_L2 >=0.1) {
   $promedio_L2_A1 = 1;
}


$nota_A1_L3_N1 = ($row_datos_control_notas["nt_31"] * $porcentaje_A1_L3_N1)/$el_puntaje_completo_es;
$nota_A1_L3_N2 = ($row_datos_control_notas["nt_32"] * $porcentaje_A1_L3_N2)/$el_puntaje_completo_es;
$nota_A1_L3_N3 = ($row_datos_control_notas["nt_33"] * $porcentaje_A1_L3_N3)/$el_puntaje_completo_es;
$nota_A1_L3_N4 = ($row_datos_control_notas["nt_34"] * $porcentaje_A1_L3_N4)/$el_puntaje_completo_es;
$nota_A1_L3_N5 = ($row_datos_control_notas["nt_35"] * $porcentaje_A1_L3_N5)/$el_puntaje_completo_es;
$nota_A1_L3_N6 = ($row_datos_control_notas["nt_36"] * $porcentaje_A1_L3_N6)/$el_puntaje_completo_es;
$nota_A1_L3_N7 = ($row_datos_control_notas["nt_37"] * $porcentaje_A1_L3_N7)/$el_puntaje_completo_es;
$notaAu_A1_L3 = $row_datos_control_notas["nt_Au3"];

$nota_final_A1_L3 = $nota_A1_L3_N1 + $nota_A1_L3_N2 + $nota_A1_L3_N3 + $nota_A1_L3_N4 + $nota_A1_L3_N5 + $nota_A1_L3_N6 + $nota_A1_L3_N7 + $notaAu_A1_L3;

$nota_final_A1_L3_redon1 =number_format($nota_final_A1_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1



if ($nota_final_A1_L3 >=0.1) {
   $promedio_L3_A1 = 1;
}


$notaAu_Final_A1 = $row_datos_control_notas["nt_AuF"];

$promedio_L123_A1 = $promedio_L1_A1 + $promedio_L2_A1 + $promedio_L3_A1;




$promedio_L1_A2 = 0.00000000001;
$promedio_L2_A2 = 0.00000000001;
$promedio_L3_A2 = 0.00000000001;



$registro_notas = $r_d_reg_estu_HOYx["id_reg_estu_actual"];


$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_estxx1'
               and materia = 2
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 






$nota_A2_L1_N1 = ($row_datos_control_notas["nt_11"] * $porcentaje_A2_L1_N1)/$el_puntaje_completo_es;
$nota_A2_L1_N2 = ($row_datos_control_notas["nt_12"] * $porcentaje_A2_L1_N2)/$el_puntaje_completo_es;
$nota_A2_L1_N3 = ($row_datos_control_notas["nt_13"] * $porcentaje_A2_L1_N3)/$el_puntaje_completo_es;
$nota_A2_L1_N4 = ($row_datos_control_notas["nt_14"] * $porcentaje_A2_L1_N4)/$el_puntaje_completo_es;
$nota_A2_L1_N5 = ($row_datos_control_notas["nt_15"] * $porcentaje_A2_L1_N5)/$el_puntaje_completo_es;
$nota_A2_L1_N6 = ($row_datos_control_notas["nt_16"] * $porcentaje_A2_L1_N6)/$el_puntaje_completo_es;
$nota_A2_L1_N7 = ($row_datos_control_notas["nt_17"] * $porcentaje_A2_L1_N7)/$el_puntaje_completo_es;
$notaAu_A2_L1 = $row_datos_control_notas["nt_Au1"];

$nota_final_A2_L1 = $nota_A2_L1_N1 + $nota_A2_L1_N2 + $nota_A2_L1_N3 + $nota_A2_L1_N4 + $nota_A2_L1_N5 + $nota_A2_L1_N6 + $nota_A2_L1_N7 + $notaAu_A2_L1;

$nota_final_A2_L1_redon1 =number_format($nota_final_A2_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1



if ($nota_final_A2_L1 >=0.1) {
   $promedio_L1_A2 = 1;
}

$nota_A2_L2_N1 = ($row_datos_control_notas["nt_21"] * $porcentaje_A2_L2_N1)/$el_puntaje_completo_es;
$nota_A2_L2_N2 = ($row_datos_control_notas["nt_22"] * $porcentaje_A2_L2_N2)/$el_puntaje_completo_es;
$nota_A2_L2_N3 = ($row_datos_control_notas["nt_23"] * $porcentaje_A2_L2_N3)/$el_puntaje_completo_es;
$nota_A2_L2_N4 = ($row_datos_control_notas["nt_24"] * $porcentaje_A2_L2_N4)/$el_puntaje_completo_es;
$nota_A2_L2_N5 = ($row_datos_control_notas["nt_25"] * $porcentaje_A2_L2_N5)/$el_puntaje_completo_es;
$nota_A2_L2_N6 = ($row_datos_control_notas["nt_26"] * $porcentaje_A2_L2_N6)/$el_puntaje_completo_es;
$nota_A2_L2_N7 = ($row_datos_control_notas["nt_27"] * $porcentaje_A2_L2_N7)/$el_puntaje_completo_es;
$notaAu_A2_L2 = $row_datos_control_notas["nt_Au2"];

$nota_final_A2_L2 = $nota_A2_L2_N1 + $nota_A2_L2_N2 + $nota_A2_L2_N3 + $nota_A2_L2_N4 + $nota_A2_L2_N5 + $nota_A2_L2_N6 + $nota_A2_L2_N7 + $notaAu_A2_L2;

$nota_final_A2_L2_redon1 =number_format($nota_final_A2_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A2_L2 >=0.1) {
   $promedio_L2_A2 = 1;
}


$nota_A2_L3_N1 = ($row_datos_control_notas["nt_31"] * $porcentaje_A2_L3_N1)/$el_puntaje_completo_es;
$nota_A2_L3_N2 = ($row_datos_control_notas["nt_32"] * $porcentaje_A2_L3_N2)/$el_puntaje_completo_es;
$nota_A2_L3_N3 = ($row_datos_control_notas["nt_33"] * $porcentaje_A2_L3_N3)/$el_puntaje_completo_es;
$nota_A2_L3_N4 = ($row_datos_control_notas["nt_34"] * $porcentaje_A2_L3_N4)/$el_puntaje_completo_es;
$nota_A2_L3_N5 = ($row_datos_control_notas["nt_35"] * $porcentaje_A2_L3_N5)/$el_puntaje_completo_es;
$nota_A2_L3_N6 = ($row_datos_control_notas["nt_36"] * $porcentaje_A2_L3_N6)/$el_puntaje_completo_es;
$nota_A2_L3_N7 = ($row_datos_control_notas["nt_37"] * $porcentaje_A2_L3_N7)/$el_puntaje_completo_es;
$notaAu_A2_L3 = $row_datos_control_notas["nt_Au3"];

$nota_final_A2_L3 = $nota_A2_L3_N1 + $nota_A2_L3_N2 + $nota_A2_L3_N3 + $nota_A2_L3_N4 + $nota_A2_L3_N5 + $nota_A2_L3_N6 + $nota_A2_L3_N7 + $notaAu_A2_L3;

$nota_final_A2_L3_redon1 =number_format($nota_final_A2_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A2_L3 >=0.1) {
   $promedio_L3_A2 = 1;
}


$notaAu_Final_A2 = $row_datos_control_notas["nt_AuF"];

$promedio_L123_A2 = $promedio_L1_A2 + $promedio_L2_A2 + $promedio_L3_A2;




$promedio_L1_A3 = 0.00000000001;
$promedio_L2_A3 = 0.00000000001;
$promedio_L3_A3 = 0.00000000001;



$registro_notas = $r_d_reg_estu_HOYx["id_reg_estu_actual"];


$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_estxx1'
               and materia = 3
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 






$nota_A3_L1_N1 = ($row_datos_control_notas["nt_11"] * $porcentaje_A3_L1_N1)/$el_puntaje_completo_es;
$nota_A3_L1_N2 = ($row_datos_control_notas["nt_12"] * $porcentaje_A3_L1_N2)/$el_puntaje_completo_es;
$nota_A3_L1_N3 = ($row_datos_control_notas["nt_13"] * $porcentaje_A3_L1_N3)/$el_puntaje_completo_es;
$nota_A3_L1_N4 = ($row_datos_control_notas["nt_14"] * $porcentaje_A3_L1_N4)/$el_puntaje_completo_es;
$nota_A3_L1_N5 = ($row_datos_control_notas["nt_15"] * $porcentaje_A3_L1_N5)/$el_puntaje_completo_es;
$nota_A3_L1_N6 = ($row_datos_control_notas["nt_16"] * $porcentaje_A3_L1_N6)/$el_puntaje_completo_es;
$nota_A3_L1_N7 = ($row_datos_control_notas["nt_17"] * $porcentaje_A3_L1_N7)/$el_puntaje_completo_es;
$notaAu_A3_L1 = $row_datos_control_notas["nt_Au1"];

$nota_final_A3_L1 = $nota_A3_L1_N1 + $nota_A3_L1_N2 + $nota_A3_L1_N3 + $nota_A3_L1_N4 + $nota_A3_L1_N5 + $nota_A3_L1_N6 + $nota_A3_L1_N7 + $notaAu_A3_L1;

$nota_final_A3_L1_redon1 =number_format($nota_final_A3_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A3_L1 >=0.1) {
   $promedio_L1_A3 = 1;
}

$nota_A3_L2_N1 = ($row_datos_control_notas["nt_21"] * $porcentaje_A3_L2_N1)/$el_puntaje_completo_es;
$nota_A3_L2_N2 = ($row_datos_control_notas["nt_22"] * $porcentaje_A3_L2_N2)/$el_puntaje_completo_es;
$nota_A3_L2_N3 = ($row_datos_control_notas["nt_23"] * $porcentaje_A3_L2_N3)/$el_puntaje_completo_es;
$nota_A3_L2_N4 = ($row_datos_control_notas["nt_24"] * $porcentaje_A3_L2_N4)/$el_puntaje_completo_es;
$nota_A3_L2_N5 = ($row_datos_control_notas["nt_25"] * $porcentaje_A3_L2_N5)/$el_puntaje_completo_es;
$nota_A3_L2_N6 = ($row_datos_control_notas["nt_26"] * $porcentaje_A3_L2_N6)/$el_puntaje_completo_es;
$nota_A3_L2_N7 = ($row_datos_control_notas["nt_27"] * $porcentaje_A3_L2_N7)/$el_puntaje_completo_es;
$notaAu_A3_L2 = $row_datos_control_notas["nt_Au2"];

$nota_final_A3_L2 = $nota_A3_L2_N1 + $nota_A3_L2_N2 + $nota_A3_L2_N3 + $nota_A3_L2_N4 + $nota_A3_L2_N5 + $nota_A3_L2_N6 + $nota_A3_L2_N7 + $notaAu_A3_L2;

$nota_final_A3_L2_redon1 =number_format($nota_final_A3_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A3_L2 >=0.1) {
   $promedio_L2_A3 = 1;
}


$nota_A3_L3_N1 = ($row_datos_control_notas["nt_31"] * $porcentaje_A3_L3_N1)/$el_puntaje_completo_es;
$nota_A3_L3_N2 = ($row_datos_control_notas["nt_32"] * $porcentaje_A3_L3_N2)/$el_puntaje_completo_es;
$nota_A3_L3_N3 = ($row_datos_control_notas["nt_33"] * $porcentaje_A3_L3_N3)/$el_puntaje_completo_es;
$nota_A3_L3_N4 = ($row_datos_control_notas["nt_34"] * $porcentaje_A3_L3_N4)/$el_puntaje_completo_es;
$nota_A3_L3_N5 = ($row_datos_control_notas["nt_35"] * $porcentaje_A3_L3_N5)/$el_puntaje_completo_es;
$nota_A3_L3_N6 = ($row_datos_control_notas["nt_36"] * $porcentaje_A3_L3_N6)/$el_puntaje_completo_es;
$nota_A3_L3_N7 = ($row_datos_control_notas["nt_37"] * $porcentaje_A3_L3_N7)/$el_puntaje_completo_es;
$notaAu_A3_L3 = $row_datos_control_notas["nt_Au3"];

$nota_final_A3_L3 = $nota_A3_L3_N1 + $nota_A3_L3_N2 + $nota_A3_L3_N3 + $nota_A3_L3_N4 + $nota_A3_L3_N5 + $nota_A3_L3_N6 + $nota_A3_L3_N7 + $notaAu_A3_L3;

$nota_final_A3_L3_redon1 =number_format($nota_final_A3_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A3_L3 >=0.1) {
   $promedio_L3_A3 = 1;
}


$notaAu_Final_A3 = $row_datos_control_notas["nt_AuF"];

$promedio_L123_A3 = $promedio_L1_A3 + $promedio_L2_A3 + $promedio_L3_A3;




$promedio_L1_A4 = 0.00000000001;
$promedio_L2_A4 = 0.00000000001;
$promedio_L3_A4 = 0.00000000001;



$registro_notas = $r_d_reg_estu_HOYx["id_reg_estu_actual"];


$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_estxx1'
               and materia = 4
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 





$nota_A4_L1_N1 = ($row_datos_control_notas["nt_11"] * $porcentaje_A4_L1_N1)/$el_puntaje_completo_es;
$nota_A4_L1_N2 = ($row_datos_control_notas["nt_12"] * $porcentaje_A4_L1_N2)/$el_puntaje_completo_es;
$nota_A4_L1_N3 = ($row_datos_control_notas["nt_13"] * $porcentaje_A4_L1_N3)/$el_puntaje_completo_es;
$nota_A4_L1_N4 = ($row_datos_control_notas["nt_14"] * $porcentaje_A4_L1_N4)/$el_puntaje_completo_es;
$nota_A4_L1_N5 = ($row_datos_control_notas["nt_15"] * $porcentaje_A4_L1_N5)/$el_puntaje_completo_es;
$nota_A4_L1_N6 = ($row_datos_control_notas["nt_16"] * $porcentaje_A4_L1_N6)/$el_puntaje_completo_es;
$nota_A4_L1_N7 = ($row_datos_control_notas["nt_17"] * $porcentaje_A4_L1_N7)/$el_puntaje_completo_es;
$notaAu_A4_L1 = $row_datos_control_notas["nt_Au1"];

$nota_final_A4_L1 = $nota_A4_L1_N1 + $nota_A4_L1_N2 + $nota_A4_L1_N3 + $nota_A4_L1_N4 + $nota_A4_L1_N5 + $nota_A4_L1_N6 + $nota_A4_L1_N7 + $notaAu_A4_L1;

$nota_final_A4_L1_redon1 =number_format($nota_final_A4_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A4_L1 >=0.1) {
   $promedio_L1_A4 = 1;
}

$nota_A4_L2_N1 = ($row_datos_control_notas["nt_21"] * $porcentaje_A4_L2_N1)/$el_puntaje_completo_es;
$nota_A4_L2_N2 = ($row_datos_control_notas["nt_22"] * $porcentaje_A4_L2_N2)/$el_puntaje_completo_es;
$nota_A4_L2_N3 = ($row_datos_control_notas["nt_23"] * $porcentaje_A4_L2_N3)/$el_puntaje_completo_es;
$nota_A4_L2_N4 = ($row_datos_control_notas["nt_24"] * $porcentaje_A4_L2_N4)/$el_puntaje_completo_es;
$nota_A4_L2_N5 = ($row_datos_control_notas["nt_25"] * $porcentaje_A4_L2_N5)/$el_puntaje_completo_es;
$nota_A4_L2_N6 = ($row_datos_control_notas["nt_26"] * $porcentaje_A4_L2_N6)/$el_puntaje_completo_es;
$nota_A4_L2_N7 = ($row_datos_control_notas["nt_27"] * $porcentaje_A4_L2_N7)/$el_puntaje_completo_es;
$notaAu_A4_L2 = $row_datos_control_notas["nt_Au2"];

$nota_final_A4_L2 = $nota_A4_L2_N1 + $nota_A4_L2_N2 + $nota_A4_L2_N3 + $nota_A4_L2_N4 + $nota_A4_L2_N5 + $nota_A4_L2_N6 + $nota_A4_L2_N7 + $notaAu_A4_L2;

$nota_final_A4_L2_redon1 =number_format($nota_final_A4_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A4_L2 >=0.1) {
   $promedio_L2_A4 = 1;
}


$nota_A4_L3_N1 = ($row_datos_control_notas["nt_31"] * $porcentaje_A4_L3_N1)/$el_puntaje_completo_es;
$nota_A4_L3_N2 = ($row_datos_control_notas["nt_32"] * $porcentaje_A4_L3_N2)/$el_puntaje_completo_es;
$nota_A4_L3_N3 = ($row_datos_control_notas["nt_33"] * $porcentaje_A4_L3_N3)/$el_puntaje_completo_es;
$nota_A4_L3_N4 = ($row_datos_control_notas["nt_34"] * $porcentaje_A4_L3_N4)/$el_puntaje_completo_es;
$nota_A4_L3_N5 = ($row_datos_control_notas["nt_35"] * $porcentaje_A4_L3_N5)/$el_puntaje_completo_es;
$nota_A4_L3_N6 = ($row_datos_control_notas["nt_36"] * $porcentaje_A4_L3_N6)/$el_puntaje_completo_es;
$nota_A4_L3_N7 = ($row_datos_control_notas["nt_37"] * $porcentaje_A4_L3_N7)/$el_puntaje_completo_es;
$notaAu_A4_L3 = $row_datos_control_notas["nt_Au3"];

$nota_final_A4_L3 = $nota_A4_L3_N1 + $nota_A4_L3_N2 + $nota_A4_L3_N3 + $nota_A4_L3_N4 + $nota_A4_L3_N5 + $nota_A4_L3_N6 + $nota_A4_L3_N7 + $notaAu_A4_L3;

$nota_final_A4_L3_redon1 =number_format($nota_final_A4_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A4_L3 >=0.1) {
   $promedio_L3_A4 = 1;
}


$notaAu_Final_A4 = $row_datos_control_notas["nt_AuF"];

$promedio_L123_A4 = $promedio_L1_A4 + $promedio_L2_A4 + $promedio_L3_A4;




$promedio_L1_A5 = 0.00000000001;
$promedio_L2_A5 = 0.00000000001;
$promedio_L3_A5 = 0.00000000001;



$registro_notas = $r_d_reg_estu_HOYx["id_reg_estu_actual"];


$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_estxx1'
               and materia = 5
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 





$nota_A5_L1_N1 = ($row_datos_control_notas["nt_11"] * $porcentaje_A5_L1_N1)/$el_puntaje_completo_es;
$nota_A5_L1_N2 = ($row_datos_control_notas["nt_12"] * $porcentaje_A5_L1_N2)/$el_puntaje_completo_es;
$nota_A5_L1_N3 = ($row_datos_control_notas["nt_13"] * $porcentaje_A5_L1_N3)/$el_puntaje_completo_es;
$nota_A5_L1_N4 = ($row_datos_control_notas["nt_14"] * $porcentaje_A5_L1_N4)/$el_puntaje_completo_es;
$nota_A5_L1_N5 = ($row_datos_control_notas["nt_15"] * $porcentaje_A5_L1_N5)/$el_puntaje_completo_es;
$nota_A5_L1_N6 = ($row_datos_control_notas["nt_16"] * $porcentaje_A5_L1_N6)/$el_puntaje_completo_es;
$nota_A5_L1_N7 = ($row_datos_control_notas["nt_17"] * $porcentaje_A5_L1_N7)/$el_puntaje_completo_es;
$notaAu_A5_L1 = $row_datos_control_notas["nt_Au1"];

$nota_final_A5_L1 = $nota_A5_L1_N1 + $nota_A5_L1_N2 + $nota_A5_L1_N3 + $nota_A5_L1_N4 + $nota_A5_L1_N5 + $nota_A5_L1_N6 + $nota_A5_L1_N7 + $notaAu_A5_L1;

$nota_final_A5_L1_redon1 =number_format($nota_final_A5_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A5_L1 >=0.1) {
   $promedio_L1_A5 = 1;
}

$nota_A5_L2_N1 = ($row_datos_control_notas["nt_21"] * $porcentaje_A5_L2_N1)/$el_puntaje_completo_es;
$nota_A5_L2_N2 = ($row_datos_control_notas["nt_22"] * $porcentaje_A5_L2_N2)/$el_puntaje_completo_es;
$nota_A5_L2_N3 = ($row_datos_control_notas["nt_23"] * $porcentaje_A5_L2_N3)/$el_puntaje_completo_es;
$nota_A5_L2_N4 = ($row_datos_control_notas["nt_24"] * $porcentaje_A5_L2_N4)/$el_puntaje_completo_es;
$nota_A5_L2_N5 = ($row_datos_control_notas["nt_25"] * $porcentaje_A5_L2_N5)/$el_puntaje_completo_es;
$nota_A5_L2_N6 = ($row_datos_control_notas["nt_26"] * $porcentaje_A5_L2_N6)/$el_puntaje_completo_es;
$nota_A5_L2_N7 = ($row_datos_control_notas["nt_27"] * $porcentaje_A5_L2_N7)/$el_puntaje_completo_es;
$notaAu_A5_L2 = $row_datos_control_notas["nt_Au2"];

$nota_final_A5_L2 = $nota_A5_L2_N1 + $nota_A5_L2_N2 + $nota_A5_L2_N3 + $nota_A5_L2_N4 + $nota_A5_L2_N5 + $nota_A5_L2_N6 + $nota_A5_L2_N7 + $notaAu_A5_L2;
$nota_final_A5_L2_redon1 =number_format($nota_final_A5_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A5_L2 >=0.1) {
   $promedio_L2_A5 = 1;
}


$nota_A5_L3_N1 = ($row_datos_control_notas["nt_31"] * $porcentaje_A5_L3_N1)/$el_puntaje_completo_es;
$nota_A5_L3_N2 = ($row_datos_control_notas["nt_32"] * $porcentaje_A5_L3_N2)/$el_puntaje_completo_es;
$nota_A5_L3_N3 = ($row_datos_control_notas["nt_33"] * $porcentaje_A5_L3_N3)/$el_puntaje_completo_es;
$nota_A5_L3_N4 = ($row_datos_control_notas["nt_34"] * $porcentaje_A5_L3_N4)/$el_puntaje_completo_es;
$nota_A5_L3_N5 = ($row_datos_control_notas["nt_35"] * $porcentaje_A5_L3_N5)/$el_puntaje_completo_es;
$nota_A5_L3_N6 = ($row_datos_control_notas["nt_36"] * $porcentaje_A5_L3_N6)/$el_puntaje_completo_es;
$nota_A5_L3_N7 = ($row_datos_control_notas["nt_37"] * $porcentaje_A5_L3_N7)/$el_puntaje_completo_es;
$notaAu_A5_L3 = $row_datos_control_notas["nt_Au3"];

$nota_final_A5_L3 = $nota_A5_L3_N1 + $nota_A5_L3_N2 + $nota_A5_L3_N3 + $nota_A5_L3_N4 + $nota_A5_L3_N5 + $nota_A5_L3_N6 + $nota_A5_L3_N7 + $notaAu_A5_L3;
$nota_final_A5_L3_redon1 =number_format($nota_final_A5_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A5_L3 >=0.1) {
   $promedio_L3_A5 = 1;
}


$notaAu_Final_A5 = $row_datos_control_notas["nt_AuF"];

$promedio_L123_A5 = $promedio_L1_A5 + $promedio_L2_A5 + $promedio_L3_A5;




$promedio_L1_A6 = 0.00000000001;
$promedio_L2_A6 = 0.00000000001;
$promedio_L3_A6 = 0.00000000001;



$registro_notas = $r_d_reg_estu_HOYx["id_reg_estu_actual"];


$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_estxx1'
               and materia = 6
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 






$nota_A6_L1_N1 = ($row_datos_control_notas["nt_11"] * $porcentaje_A6_L1_N1)/$el_puntaje_completo_es;
$nota_A6_L1_N2 = ($row_datos_control_notas["nt_12"] * $porcentaje_A6_L1_N2)/$el_puntaje_completo_es;
$nota_A6_L1_N3 = ($row_datos_control_notas["nt_13"] * $porcentaje_A6_L1_N3)/$el_puntaje_completo_es;
$nota_A6_L1_N4 = ($row_datos_control_notas["nt_14"] * $porcentaje_A6_L1_N4)/$el_puntaje_completo_es;
$nota_A6_L1_N5 = ($row_datos_control_notas["nt_15"] * $porcentaje_A6_L1_N5)/$el_puntaje_completo_es;
$nota_A6_L1_N6 = ($row_datos_control_notas["nt_16"] * $porcentaje_A6_L1_N6)/$el_puntaje_completo_es;
$nota_A6_L1_N7 = ($row_datos_control_notas["nt_17"] * $porcentaje_A6_L1_N7)/$el_puntaje_completo_es;
$notaAu_A6_L1 = $row_datos_control_notas["nt_Au1"];

$nota_final_A6_L1 = $nota_A6_L1_N1 + $nota_A6_L1_N2 + $nota_A6_L1_N3 + $nota_A6_L1_N4 + $nota_A6_L1_N5 + $nota_A6_L1_N6 + $nota_A6_L1_N7 + $notaAu_A6_L1;
$nota_final_A6_L1_redon1 =number_format($nota_final_A6_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A6_L1 >=0.1) {
   $promedio_L1_A6 = 1;
}

$nota_A6_L2_N1 = ($row_datos_control_notas["nt_21"] * $porcentaje_A6_L2_N1)/$el_puntaje_completo_es;
$nota_A6_L2_N2 = ($row_datos_control_notas["nt_22"] * $porcentaje_A6_L2_N2)/$el_puntaje_completo_es;
$nota_A6_L2_N3 = ($row_datos_control_notas["nt_23"] * $porcentaje_A6_L2_N3)/$el_puntaje_completo_es;
$nota_A6_L2_N4 = ($row_datos_control_notas["nt_24"] * $porcentaje_A6_L2_N4)/$el_puntaje_completo_es;
$nota_A6_L2_N5 = ($row_datos_control_notas["nt_25"] * $porcentaje_A6_L2_N5)/$el_puntaje_completo_es;
$nota_A6_L2_N6 = ($row_datos_control_notas["nt_26"] * $porcentaje_A6_L2_N6)/$el_puntaje_completo_es;
$nota_A6_L2_N7 = ($row_datos_control_notas["nt_27"] * $porcentaje_A6_L2_N7)/$el_puntaje_completo_es;
$notaAu_A6_L2 = $row_datos_control_notas["nt_Au2"];

$nota_final_A6_L2 = $nota_A6_L2_N1 + $nota_A6_L2_N2 + $nota_A6_L2_N3 + $nota_A6_L2_N4 + $nota_A6_L2_N5 + $nota_A6_L2_N6 + $nota_A6_L2_N7 + $notaAu_A6_L2;
$nota_final_A6_L2_redon1 =number_format($nota_final_A6_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A6_L2 >=0.1) {
   $promedio_L2_A6 = 1;
}


$nota_A6_L3_N1 = ($row_datos_control_notas["nt_31"] * $porcentaje_A6_L3_N1)/$el_puntaje_completo_es;
$nota_A6_L3_N2 = ($row_datos_control_notas["nt_32"] * $porcentaje_A6_L3_N2)/$el_puntaje_completo_es;
$nota_A6_L3_N3 = ($row_datos_control_notas["nt_33"] * $porcentaje_A6_L3_N3)/$el_puntaje_completo_es;
$nota_A6_L3_N4 = ($row_datos_control_notas["nt_34"] * $porcentaje_A6_L3_N4)/$el_puntaje_completo_es;
$nota_A6_L3_N5 = ($row_datos_control_notas["nt_35"] * $porcentaje_A6_L3_N5)/$el_puntaje_completo_es;
$nota_A6_L3_N6 = ($row_datos_control_notas["nt_36"] * $porcentaje_A6_L3_N6)/$el_puntaje_completo_es;
$nota_A6_L3_N7 = ($row_datos_control_notas["nt_37"] * $porcentaje_A6_L3_N7)/$el_puntaje_completo_es;
$notaAu_A6_L3 = $row_datos_control_notas["nt_Au3"];

$nota_final_A6_L3 = $nota_A6_L3_N1 + $nota_A6_L3_N2 + $nota_A6_L3_N3 + $nota_A6_L3_N4 + $nota_A6_L3_N5 + $nota_A6_L3_N6 + $nota_A6_L3_N7 + $notaAu_A6_L3;
$nota_final_A6_L3_redon1 =number_format($nota_final_A6_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A6_L3 >=0.1) {
   $promedio_L3_A6 = 1;
}


$notaAu_Final_A6 = $row_datos_control_notas["nt_AuF"];

$promedio_L123_A6 = $promedio_L1_A6 + $promedio_L2_A6 + $promedio_L3_A6;




$promedio_L1_A7 = 0.00000000001;
$promedio_L2_A7 = 0.00000000001;
$promedio_L3_A7 = 0.00000000001;



$registro_notas = $r_d_reg_estu_HOYx["id_reg_estu_actual"];


$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_estxx1'
               and materia = 7
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 






$nota_A7_L1_N1 = ($row_datos_control_notas["nt_11"] * $porcentaje_A7_L1_N1)/$el_puntaje_completo_es;
$nota_A7_L1_N2 = ($row_datos_control_notas["nt_12"] * $porcentaje_A7_L1_N2)/$el_puntaje_completo_es;
$nota_A7_L1_N3 = ($row_datos_control_notas["nt_13"] * $porcentaje_A7_L1_N3)/$el_puntaje_completo_es;
$nota_A7_L1_N4 = ($row_datos_control_notas["nt_14"] * $porcentaje_A7_L1_N4)/$el_puntaje_completo_es;
$nota_A7_L1_N5 = ($row_datos_control_notas["nt_15"] * $porcentaje_A7_L1_N5)/$el_puntaje_completo_es;
$nota_A7_L1_N6 = ($row_datos_control_notas["nt_16"] * $porcentaje_A7_L1_N6)/$el_puntaje_completo_es;
$nota_A7_L1_N7 = ($row_datos_control_notas["nt_17"] * $porcentaje_A7_L1_N7)/$el_puntaje_completo_es;
$notaAu_A7_L1 = $row_datos_control_notas["nt_Au1"];

$nota_final_A7_L1 = $nota_A7_L1_N1 + $nota_A7_L1_N2 + $nota_A7_L1_N3 + $nota_A7_L1_N4 + $nota_A7_L1_N5 + $nota_A7_L1_N6 + $nota_A7_L1_N7 + $notaAu_A7_L1;
$nota_final_A7_L1_redon1 =number_format($nota_final_A7_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A7_L1 >=0.1) {
   $promedio_L1_A7 = 1;
}

$nota_A7_L2_N1 = ($row_datos_control_notas["nt_21"] * $porcentaje_A7_L2_N1)/$el_puntaje_completo_es;
$nota_A7_L2_N2 = ($row_datos_control_notas["nt_22"] * $porcentaje_A7_L2_N2)/$el_puntaje_completo_es;
$nota_A7_L2_N3 = ($row_datos_control_notas["nt_23"] * $porcentaje_A7_L2_N3)/$el_puntaje_completo_es;
$nota_A7_L2_N4 = ($row_datos_control_notas["nt_24"] * $porcentaje_A7_L2_N4)/$el_puntaje_completo_es;
$nota_A7_L2_N5 = ($row_datos_control_notas["nt_25"] * $porcentaje_A7_L2_N5)/$el_puntaje_completo_es;
$nota_A7_L2_N6 = ($row_datos_control_notas["nt_26"] * $porcentaje_A7_L2_N6)/$el_puntaje_completo_es;
$nota_A7_L2_N7 = ($row_datos_control_notas["nt_27"] * $porcentaje_A7_L2_N7)/$el_puntaje_completo_es;
$notaAu_A7_L2 = $row_datos_control_notas["nt_Au2"];

$nota_final_A7_L2 = $nota_A7_L2_N1 + $nota_A7_L2_N2 + $nota_A7_L2_N3 + $nota_A7_L2_N4 + $nota_A7_L2_N5 + $nota_A7_L2_N6 + $nota_A7_L2_N7 + $notaAu_A7_L2;
$nota_final_A7_L2_redon1 =number_format($nota_final_A7_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A7_L2 >=0.1) {
   $promedio_L2_A7 = 1;
}


$nota_A7_L3_N1 = ($row_datos_control_notas["nt_31"] * $porcentaje_A7_L3_N1)/$el_puntaje_completo_es;
$nota_A7_L3_N2 = ($row_datos_control_notas["nt_32"] * $porcentaje_A7_L3_N2)/$el_puntaje_completo_es;
$nota_A7_L3_N3 = ($row_datos_control_notas["nt_33"] * $porcentaje_A7_L3_N3)/$el_puntaje_completo_es;
$nota_A7_L3_N4 = ($row_datos_control_notas["nt_34"] * $porcentaje_A7_L3_N4)/$el_puntaje_completo_es;
$nota_A7_L3_N5 = ($row_datos_control_notas["nt_35"] * $porcentaje_A7_L3_N5)/$el_puntaje_completo_es;
$nota_A7_L3_N6 = ($row_datos_control_notas["nt_36"] * $porcentaje_A7_L3_N6)/$el_puntaje_completo_es;
$nota_A7_L3_N7 = ($row_datos_control_notas["nt_37"] * $porcentaje_A7_L3_N7)/$el_puntaje_completo_es;
$notaAu_A7_L3 = $row_datos_control_notas["nt_Au3"];

$nota_final_A7_L3 = $nota_A7_L3_N1 + $nota_A7_L3_N2 + $nota_A7_L3_N3 + $nota_A7_L3_N4 + $nota_A7_L3_N5 + $nota_A7_L3_N6 + $nota_A7_L3_N7 + $notaAu_A7_L3;
$nota_final_A7_L3_redon1 =number_format($nota_final_A7_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A7_L3 >=0.1) {
   $promedio_L3_A7 = 1;
}


$notaAu_Final_A7 = $row_datos_control_notas["nt_AuF"];

$promedio_L123_A7 = $promedio_L1_A7 + $promedio_L2_A7 + $promedio_L3_A7;




$promedio_L1_A8 = 0.00000000001;
$promedio_L2_A8 = 0.00000000001;
$promedio_L3_A8 = 0.00000000001;



$registro_notas = $r_d_reg_estu_HOYx["id_reg_estu_actual"];


$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_estxx1'
               and materia = 8
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 





$nota_A8_L1_N1 = ($row_datos_control_notas["nt_11"] * $porcentaje_A8_L1_N1)/$el_puntaje_completo_es;
$nota_A8_L1_N2 = ($row_datos_control_notas["nt_12"] * $porcentaje_A8_L1_N2)/$el_puntaje_completo_es;
$nota_A8_L1_N3 = ($row_datos_control_notas["nt_13"] * $porcentaje_A8_L1_N3)/$el_puntaje_completo_es;
$nota_A8_L1_N4 = ($row_datos_control_notas["nt_14"] * $porcentaje_A8_L1_N4)/$el_puntaje_completo_es;
$nota_A8_L1_N5 = ($row_datos_control_notas["nt_15"] * $porcentaje_A8_L1_N5)/$el_puntaje_completo_es;
$nota_A8_L1_N6 = ($row_datos_control_notas["nt_16"] * $porcentaje_A8_L1_N6)/$el_puntaje_completo_es;
$nota_A8_L1_N7 = ($row_datos_control_notas["nt_17"] * $porcentaje_A8_L1_N7)/$el_puntaje_completo_es;
$notaAu_A8_L1 = $row_datos_control_notas["nt_Au1"];

$nota_final_A8_L1 = $nota_A8_L1_N1 + $nota_A8_L1_N2 + $nota_A8_L1_N3 + $nota_A8_L1_N4 + $nota_A8_L1_N5 + $nota_A8_L1_N6 + $nota_A8_L1_N7 + $notaAu_A8_L1;
$nota_final_A8_L1_redon1 =number_format($nota_final_A8_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A8_L1 >=0.1) {
   $promedio_L1_A8 = 1;
}

$nota_A8_L2_N1 = ($row_datos_control_notas["nt_21"] * $porcentaje_A8_L2_N1)/$el_puntaje_completo_es;
$nota_A8_L2_N2 = ($row_datos_control_notas["nt_22"] * $porcentaje_A8_L2_N2)/$el_puntaje_completo_es;
$nota_A8_L2_N3 = ($row_datos_control_notas["nt_23"] * $porcentaje_A8_L2_N3)/$el_puntaje_completo_es;
$nota_A8_L2_N4 = ($row_datos_control_notas["nt_24"] * $porcentaje_A8_L2_N4)/$el_puntaje_completo_es;
$nota_A8_L2_N5 = ($row_datos_control_notas["nt_25"] * $porcentaje_A8_L2_N5)/$el_puntaje_completo_es;
$nota_A8_L2_N6 = ($row_datos_control_notas["nt_26"] * $porcentaje_A8_L2_N6)/$el_puntaje_completo_es;
$nota_A8_L2_N7 = ($row_datos_control_notas["nt_27"] * $porcentaje_A8_L2_N7)/$el_puntaje_completo_es;
$notaAu_A8_L2 = $row_datos_control_notas["nt_Au2"];

$nota_final_A8_L2 = $nota_A8_L2_N1 + $nota_A8_L2_N2 + $nota_A8_L2_N3 + $nota_A8_L2_N4 + $nota_A8_L2_N5 + $nota_A8_L2_N6 + $nota_A8_L2_N7 + $notaAu_A8_L2;
$nota_final_A8_L2_redon1 =number_format($nota_final_A8_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A8_L2 >=0.1) {
   $promedio_L2_A8 = 1;
}


$nota_A8_L3_N1 = ($row_datos_control_notas["nt_31"] * $porcentaje_A8_L3_N1)/$el_puntaje_completo_es;
$nota_A8_L3_N2 = ($row_datos_control_notas["nt_32"] * $porcentaje_A8_L3_N2)/$el_puntaje_completo_es;
$nota_A8_L3_N3 = ($row_datos_control_notas["nt_33"] * $porcentaje_A8_L3_N3)/$el_puntaje_completo_es;
$nota_A8_L3_N4 = ($row_datos_control_notas["nt_34"] * $porcentaje_A8_L3_N4)/$el_puntaje_completo_es;
$nota_A8_L3_N5 = ($row_datos_control_notas["nt_35"] * $porcentaje_A8_L3_N5)/$el_puntaje_completo_es;
$nota_A8_L3_N6 = ($row_datos_control_notas["nt_36"] * $porcentaje_A8_L3_N6)/$el_puntaje_completo_es;
$nota_A8_L3_N7 = ($row_datos_control_notas["nt_37"] * $porcentaje_A8_L3_N7)/$el_puntaje_completo_es;
$notaAu_A8_L3 = $row_datos_control_notas["nt_Au3"];

$nota_final_A8_L3 = $nota_A8_L3_N1 + $nota_A8_L3_N2 + $nota_A8_L3_N3 + $nota_A8_L3_N4 + $nota_A8_L3_N5 + $nota_A8_L3_N6 + $nota_A8_L3_N7 + $notaAu_A8_L3;
$nota_final_A8_L3_redon1 =number_format($nota_final_A8_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A8_L3 >=0.1) {
   $promedio_L3_A8 = 1;
}


$notaAu_Final_A8 = $row_datos_control_notas["nt_AuF"];

$promedio_L123_A8 = $promedio_L1_A8 + $promedio_L2_A8 + $promedio_L3_A8;


 

$promedio_L1_A9 = 0.00000000001;
$promedio_L2_A9 = 0.00000000001;
$promedio_L3_A9 = 0.00000000001;



$registro_notas = $r_d_reg_estu_HOYx["id_reg_estu_actual"];


$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_estxx1'
               and materia = 9
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 






$nota_A9_L1_N1 = ($row_datos_control_notas["nt_11"] * $porcentaje_A9_L1_N1)/$el_puntaje_completo_es;
$nota_A9_L1_N2 = ($row_datos_control_notas["nt_12"] * $porcentaje_A9_L1_N2)/$el_puntaje_completo_es;
$nota_A9_L1_N3 = ($row_datos_control_notas["nt_13"] * $porcentaje_A9_L1_N3)/$el_puntaje_completo_es;
$nota_A9_L1_N4 = ($row_datos_control_notas["nt_14"] * $porcentaje_A9_L1_N4)/$el_puntaje_completo_es;
$nota_A9_L1_N5 = ($row_datos_control_notas["nt_15"] * $porcentaje_A9_L1_N5)/$el_puntaje_completo_es;
$nota_A9_L1_N6 = ($row_datos_control_notas["nt_16"] * $porcentaje_A9_L1_N6)/$el_puntaje_completo_es;
$nota_A9_L1_N7 = ($row_datos_control_notas["nt_17"] * $porcentaje_A9_L1_N7)/$el_puntaje_completo_es;
$notaAu_A9_L1 = $row_datos_control_notas["nt_Au1"];

$nota_final_A9_L1 = $nota_A9_L1_N1 + $nota_A9_L1_N2 + $nota_A9_L1_N3 + $nota_A9_L1_N4 + $nota_A9_L1_N5 + $nota_A9_L1_N6 + $nota_A9_L1_N7 + $notaAu_A9_L1;
$nota_final_A9_L1_redon1 =number_format($nota_final_A9_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A9_L1 >=0.1) {
   $promedio_L1_A9 = 1;
}

$nota_A9_L2_N1 = ($row_datos_control_notas["nt_21"] * $porcentaje_A9_L2_N1)/$el_puntaje_completo_es;
$nota_A9_L2_N2 = ($row_datos_control_notas["nt_22"] * $porcentaje_A9_L2_N2)/$el_puntaje_completo_es;
$nota_A9_L2_N3 = ($row_datos_control_notas["nt_23"] * $porcentaje_A9_L2_N3)/$el_puntaje_completo_es;
$nota_A9_L2_N4 = ($row_datos_control_notas["nt_24"] * $porcentaje_A9_L2_N4)/$el_puntaje_completo_es;
$nota_A9_L2_N5 = ($row_datos_control_notas["nt_25"] * $porcentaje_A9_L2_N5)/$el_puntaje_completo_es;
$nota_A9_L2_N6 = ($row_datos_control_notas["nt_26"] * $porcentaje_A9_L2_N6)/$el_puntaje_completo_es;
$nota_A9_L2_N7 = ($row_datos_control_notas["nt_27"] * $porcentaje_A9_L2_N7)/$el_puntaje_completo_es;
$notaAu_A9_L2 = $row_datos_control_notas["nt_Au2"];

$nota_final_A9_L2 = $nota_A9_L2_N1 + $nota_A9_L2_N2 + $nota_A9_L2_N3 + $nota_A9_L2_N4 + $nota_A9_L2_N5 + $nota_A9_L2_N6 + $nota_A9_L2_N7 + $notaAu_A9_L2;
$nota_final_A9_L2_redon1 =number_format($nota_final_A9_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A9_L2 >=0.1) {
   $promedio_L2_A9 = 1;
}


$nota_A9_L3_N1 = ($row_datos_control_notas["nt_31"] * $porcentaje_A9_L3_N1)/$el_puntaje_completo_es;
$nota_A9_L3_N2 = ($row_datos_control_notas["nt_32"] * $porcentaje_A9_L3_N2)/$el_puntaje_completo_es;
$nota_A9_L3_N3 = ($row_datos_control_notas["nt_33"] * $porcentaje_A9_L3_N3)/$el_puntaje_completo_es;
$nota_A9_L3_N4 = ($row_datos_control_notas["nt_34"] * $porcentaje_A9_L3_N4)/$el_puntaje_completo_es;
$nota_A9_L3_N5 = ($row_datos_control_notas["nt_35"] * $porcentaje_A9_L3_N5)/$el_puntaje_completo_es;
$nota_A9_L3_N6 = ($row_datos_control_notas["nt_36"] * $porcentaje_A9_L3_N6)/$el_puntaje_completo_es;
$nota_A9_L3_N7 = ($row_datos_control_notas["nt_37"] * $porcentaje_A9_L3_N7)/$el_puntaje_completo_es;
$notaAu_A9_L3 = $row_datos_control_notas["nt_Au3"];

$nota_final_A9_L3 = $nota_A9_L3_N1 + $nota_A9_L3_N2 + $nota_A9_L3_N3 + $nota_A9_L3_N4 + $nota_A9_L3_N5 + $nota_A9_L3_N6 + $nota_A9_L3_N7 + $notaAu_A9_L3;
$nota_final_A9_L3_redon1 =number_format($nota_final_A9_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A9_L3 >=0.1) {
   $promedio_L3_A9 = 1;
}


$notaAu_Final_A9 = $row_datos_control_notas["nt_AuF"];

$promedio_L123_A9 = $promedio_L1_A9 + $promedio_L2_A9 + $promedio_L3_A9;




$promedio_L1_A10 = 0.00000000001;
$promedio_L2_A10 = 0.00000000001;
$promedio_L3_A10 = 0.00000000001;



$registro_notas = $r_d_reg_estu_HOYx["id_reg_estu_actual"];


$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_estxx1'
               and materia = 10
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 





$nota_A10_L1_N1 = ($row_datos_control_notas["nt_11"] * $porcentaje_A10_L1_N1)/$el_puntaje_completo_es;
$nota_A10_L1_N2 = ($row_datos_control_notas["nt_12"] * $porcentaje_A10_L1_N2)/$el_puntaje_completo_es;
$nota_A10_L1_N3 = ($row_datos_control_notas["nt_13"] * $porcentaje_A10_L1_N3)/$el_puntaje_completo_es;
$nota_A10_L1_N4 = ($row_datos_control_notas["nt_14"] * $porcentaje_A10_L1_N4)/$el_puntaje_completo_es;
$nota_A10_L1_N5 = ($row_datos_control_notas["nt_15"] * $porcentaje_A10_L1_N5)/$el_puntaje_completo_es;
$nota_A10_L1_N6 = ($row_datos_control_notas["nt_16"] * $porcentaje_A10_L1_N6)/$el_puntaje_completo_es;
$nota_A10_L1_N7 = ($row_datos_control_notas["nt_17"] * $porcentaje_A10_L1_N7)/$el_puntaje_completo_es;
$notaAu_A10_L1 = $row_datos_control_notas["nt_Au1"];

$nota_final_A10_L1 = $nota_A10_L1_N1 + $nota_A10_L1_N2 + $nota_A10_L1_N3 + $nota_A10_L1_N4 + $nota_A10_L1_N5 + $nota_A10_L1_N6 + $nota_A10_L1_N7 + $notaAu_A10_L1;
$nota_final_A10_L1_redon1 =number_format($nota_final_A10_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A10_L1 >=0.1) {
   $promedio_L1_A10 = 1;
}

$nota_A10_L2_N1 = ($row_datos_control_notas["nt_21"] * $porcentaje_A10_L2_N1)/$el_puntaje_completo_es;
$nota_A10_L2_N2 = ($row_datos_control_notas["nt_22"] * $porcentaje_A10_L2_N2)/$el_puntaje_completo_es;
$nota_A10_L2_N3 = ($row_datos_control_notas["nt_23"] * $porcentaje_A10_L2_N3)/$el_puntaje_completo_es;
$nota_A10_L2_N4 = ($row_datos_control_notas["nt_24"] * $porcentaje_A10_L2_N4)/$el_puntaje_completo_es;
$nota_A10_L2_N5 = ($row_datos_control_notas["nt_25"] * $porcentaje_A10_L2_N5)/$el_puntaje_completo_es;
$nota_A10_L2_N6 = ($row_datos_control_notas["nt_26"] * $porcentaje_A10_L2_N6)/$el_puntaje_completo_es;
$nota_A10_L2_N7 = ($row_datos_control_notas["nt_27"] * $porcentaje_A10_L2_N7)/$el_puntaje_completo_es;
$notaAu_A10_L2 = $row_datos_control_notas["nt_Au2"];

$nota_final_A10_L2 = $nota_A10_L2_N1 + $nota_A10_L2_N2 + $nota_A10_L2_N3 + $nota_A10_L2_N4 + $nota_A10_L2_N5 + $nota_A10_L2_N6 + $nota_A10_L2_N7 + $notaAu_A10_L2;
$nota_final_A10_L2_redon1 =number_format($nota_final_A10_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A10_L2 >=0.1) {
   $promedio_L2_A10 = 1;
}


$nota_A10_L3_N1 = ($row_datos_control_notas["nt_31"] * $porcentaje_A10_L3_N1)/$el_puntaje_completo_es;
$nota_A10_L3_N2 = ($row_datos_control_notas["nt_32"] * $porcentaje_A10_L3_N2)/$el_puntaje_completo_es;
$nota_A10_L3_N3 = ($row_datos_control_notas["nt_33"] * $porcentaje_A10_L3_N3)/$el_puntaje_completo_es;
$nota_A10_L3_N4 = ($row_datos_control_notas["nt_34"] * $porcentaje_A10_L3_N4)/$el_puntaje_completo_es;
$nota_A10_L3_N5 = ($row_datos_control_notas["nt_35"] * $porcentaje_A10_L3_N5)/$el_puntaje_completo_es;
$nota_A10_L3_N6 = ($row_datos_control_notas["nt_36"] * $porcentaje_A10_L3_N6)/$el_puntaje_completo_es;
$nota_A10_L3_N7 = ($row_datos_control_notas["nt_37"] * $porcentaje_A10_L3_N7)/$el_puntaje_completo_es;
$notaAu_A10_L3 = $row_datos_control_notas["nt_Au3"];

$nota_final_A10_L3 = $nota_A10_L3_N1 + $nota_A10_L3_N2 + $nota_A10_L3_N3 + $nota_A10_L3_N4 + $nota_A10_L3_N5 + $nota_A10_L3_N6 + $nota_A10_L3_N7 + $notaAu_A10_L3;
$nota_final_A10_L3_redon1 =number_format($nota_final_A10_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A10_L3 >=0.1) {
   $promedio_L3_A10 = 1;
}


$notaAu_Final_A10 = $row_datos_control_notas["nt_AuF"];

$promedio_L123_A10 = $promedio_L1_A10 + $promedio_L2_A10 + $promedio_L3_A10;




$promedio_L1_A11 = 0.00000000001;
$promedio_L2_A11 = 0.00000000001;
$promedio_L3_A11 = 0.00000000001;



$registro_notas = $r_d_reg_estu_HOYx["id_reg_estu_actual"];


$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_estxx1'
               and materia = 11
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 






$nota_A11_L1_N1 = ($row_datos_control_notas["nt_11"] * $porcentaje_A11_L1_N1)/$el_puntaje_completo_es;
$nota_A11_L1_N2 = ($row_datos_control_notas["nt_12"] * $porcentaje_A11_L1_N2)/$el_puntaje_completo_es;
$nota_A11_L1_N3 = ($row_datos_control_notas["nt_13"] * $porcentaje_A11_L1_N3)/$el_puntaje_completo_es;
$nota_A11_L1_N4 = ($row_datos_control_notas["nt_14"] * $porcentaje_A11_L1_N4)/$el_puntaje_completo_es;
$nota_A11_L1_N5 = ($row_datos_control_notas["nt_15"] * $porcentaje_A11_L1_N5)/$el_puntaje_completo_es;
$nota_A11_L1_N6 = ($row_datos_control_notas["nt_16"] * $porcentaje_A11_L1_N6)/$el_puntaje_completo_es;
$nota_A11_L1_N7 = ($row_datos_control_notas["nt_17"] * $porcentaje_A11_L1_N7)/$el_puntaje_completo_es;
$notaAu_A11_L1 = $row_datos_control_notas["nt_Au1"];

$nota_final_A11_L1 = $nota_A11_L1_N1 + $nota_A11_L1_N2 + $nota_A11_L1_N3 + $nota_A11_L1_N4 + $nota_A11_L1_N5 + $nota_A11_L1_N6 + $nota_A11_L1_N7 + $notaAu_A11_L1;
$nota_final_A11_L1_redon1 =number_format($nota_final_A11_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A11_L1 >=0.1) {
   $promedio_L1_A11 = 1;
}

$nota_A11_L2_N1 = ($row_datos_control_notas["nt_21"] * $porcentaje_A11_L2_N1)/$el_puntaje_completo_es;
$nota_A11_L2_N2 = ($row_datos_control_notas["nt_22"] * $porcentaje_A11_L2_N2)/$el_puntaje_completo_es;
$nota_A11_L2_N3 = ($row_datos_control_notas["nt_23"] * $porcentaje_A11_L2_N3)/$el_puntaje_completo_es;
$nota_A11_L2_N4 = ($row_datos_control_notas["nt_24"] * $porcentaje_A11_L2_N4)/$el_puntaje_completo_es;
$nota_A11_L2_N5 = ($row_datos_control_notas["nt_25"] * $porcentaje_A11_L2_N5)/$el_puntaje_completo_es;
$nota_A11_L2_N6 = ($row_datos_control_notas["nt_26"] * $porcentaje_A11_L2_N6)/$el_puntaje_completo_es;
$nota_A11_L2_N7 = ($row_datos_control_notas["nt_27"] * $porcentaje_A11_L2_N7)/$el_puntaje_completo_es;
$notaAu_A11_L2 = $row_datos_control_notas["nt_Au2"];

$nota_final_A11_L2 = $nota_A11_L2_N1 + $nota_A11_L2_N2 + $nota_A11_L2_N3 + $nota_A11_L2_N4 + $nota_A11_L2_N5 + $nota_A11_L2_N6 + $nota_A11_L2_N7 + $notaAu_A11_L2;
$nota_final_A11_L2_redon1 =number_format($nota_final_A11_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A11_L2 >=0.1) {
   $promedio_L2_A11 = 1;
}


$nota_A11_L3_N1 = ($row_datos_control_notas["nt_31"] * $porcentaje_A11_L3_N1)/$el_puntaje_completo_es;
$nota_A11_L3_N2 = ($row_datos_control_notas["nt_32"] * $porcentaje_A11_L3_N2)/$el_puntaje_completo_es;
$nota_A11_L3_N3 = ($row_datos_control_notas["nt_33"] * $porcentaje_A11_L3_N3)/$el_puntaje_completo_es;
$nota_A11_L3_N4 = ($row_datos_control_notas["nt_34"] * $porcentaje_A11_L3_N4)/$el_puntaje_completo_es;
$nota_A11_L3_N5 = ($row_datos_control_notas["nt_35"] * $porcentaje_A11_L3_N5)/$el_puntaje_completo_es;
$nota_A11_L3_N6 = ($row_datos_control_notas["nt_36"] * $porcentaje_A11_L3_N6)/$el_puntaje_completo_es;
$nota_A11_L3_N7 = ($row_datos_control_notas["nt_37"] * $porcentaje_A11_L3_N7)/$el_puntaje_completo_es;
$notaAu_A11_L3 = $row_datos_control_notas["nt_Au3"];

$nota_final_A11_L3 = $nota_A11_L3_N1 + $nota_A11_L3_N2 + $nota_A11_L3_N3 + $nota_A11_L3_N4 + $nota_A11_L3_N5 + $nota_A11_L3_N6 + $nota_A11_L3_N7 + $notaAu_A11_L3;
$nota_final_A11_L3_redon1 =number_format($nota_final_A11_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A11_L3 >=0.1) {
   $promedio_L3_A11 = 1;
}


$notaAu_Final_A11 = $row_datos_control_notas["nt_AuF"];

$promedio_L123_A11 = $promedio_L1_A11 + $promedio_L2_A11 + $promedio_L3_A11;




$promedio_L1_A12 = 0.00000000001;
$promedio_L2_A12 = 0.00000000001;
$promedio_L3_A12 = 0.00000000001;



$registro_notas = $r_d_reg_estu_HOYx["id_reg_estu_actual"];


$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_estxx1'
               and materia = 12
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 






$nota_A12_L1_N1 = ($row_datos_control_notas["nt_11"] * $porcentaje_A12_L1_N1)/$el_puntaje_completo_es;
$nota_A12_L1_N2 = ($row_datos_control_notas["nt_12"] * $porcentaje_A12_L1_N2)/$el_puntaje_completo_es;
$nota_A12_L1_N3 = ($row_datos_control_notas["nt_13"] * $porcentaje_A12_L1_N3)/$el_puntaje_completo_es;
$nota_A12_L1_N4 = ($row_datos_control_notas["nt_14"] * $porcentaje_A12_L1_N4)/$el_puntaje_completo_es;
$nota_A12_L1_N5 = ($row_datos_control_notas["nt_15"] * $porcentaje_A12_L1_N5)/$el_puntaje_completo_es;
$nota_A12_L1_N6 = ($row_datos_control_notas["nt_16"] * $porcentaje_A12_L1_N6)/$el_puntaje_completo_es;
$nota_A12_L1_N7 = ($row_datos_control_notas["nt_17"] * $porcentaje_A12_L1_N7)/$el_puntaje_completo_es;
$notaAu_A12_L1 = $row_datos_control_notas["nt_Au1"];

$nota_final_A12_L1 = $nota_A12_L1_N1 + $nota_A12_L1_N2 + $nota_A12_L1_N3 + $nota_A12_L1_N4 + $nota_A12_L1_N5 + $nota_A12_L1_N6 + $nota_A12_L1_N7 + $notaAu_A12_L1;
$nota_final_A12_L1_redon1 =number_format($nota_final_A12_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A12_L1 >=0.1) {
   $promedio_L1_A12 = 1;
}

$nota_A12_L2_N1 = ($row_datos_control_notas["nt_21"] * $porcentaje_A12_L2_N1)/$el_puntaje_completo_es;
$nota_A12_L2_N2 = ($row_datos_control_notas["nt_22"] * $porcentaje_A12_L2_N2)/$el_puntaje_completo_es;
$nota_A12_L2_N3 = ($row_datos_control_notas["nt_23"] * $porcentaje_A12_L2_N3)/$el_puntaje_completo_es;
$nota_A12_L2_N4 = ($row_datos_control_notas["nt_24"] * $porcentaje_A12_L2_N4)/$el_puntaje_completo_es;
$nota_A12_L2_N5 = ($row_datos_control_notas["nt_25"] * $porcentaje_A12_L2_N5)/$el_puntaje_completo_es;
$nota_A12_L2_N6 = ($row_datos_control_notas["nt_26"] * $porcentaje_A12_L2_N6)/$el_puntaje_completo_es;
$nota_A12_L2_N7 = ($row_datos_control_notas["nt_27"] * $porcentaje_A12_L2_N7)/$el_puntaje_completo_es;
$notaAu_A12_L2 = $row_datos_control_notas["nt_Au2"];

$nota_final_A12_L2 = $nota_A12_L2_N1 + $nota_A12_L2_N2 + $nota_A12_L2_N3 + $nota_A12_L2_N4 + $nota_A12_L2_N5 + $nota_A12_L2_N6 + $nota_A12_L2_N7 + $notaAu_A12_L2;
$nota_final_A12_L2_redon1 =number_format($nota_final_A12_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A12_L2 >=0.1) {
   $promedio_L2_A12 = 1;
}


$nota_A12_L3_N1 = ($row_datos_control_notas["nt_31"] * $porcentaje_A12_L3_N1)/$el_puntaje_completo_es;
$nota_A12_L3_N2 = ($row_datos_control_notas["nt_32"] * $porcentaje_A12_L3_N2)/$el_puntaje_completo_es;
$nota_A12_L3_N3 = ($row_datos_control_notas["nt_33"] * $porcentaje_A12_L3_N3)/$el_puntaje_completo_es;
$nota_A12_L3_N4 = ($row_datos_control_notas["nt_34"] * $porcentaje_A12_L3_N4)/$el_puntaje_completo_es;
$nota_A12_L3_N5 = ($row_datos_control_notas["nt_35"] * $porcentaje_A12_L3_N5)/$el_puntaje_completo_es;
$nota_A12_L3_N6 = ($row_datos_control_notas["nt_36"] * $porcentaje_A12_L3_N6)/$el_puntaje_completo_es;
$nota_A12_L3_N7 = ($row_datos_control_notas["nt_37"] * $porcentaje_A12_L3_N7)/$el_puntaje_completo_es;
$notaAu_A12_L3 = $row_datos_control_notas["nt_Au3"];

$nota_final_A12_L3 = $nota_A12_L3_N1 + $nota_A12_L3_N2 + $nota_A12_L3_N3 + $nota_A12_L3_N4 + $nota_A12_L3_N5 + $nota_A12_L3_N6 + $nota_A12_L3_N7 + $notaAu_A12_L3;
$nota_final_A12_L3_redon1 =number_format($nota_final_A12_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


if ($nota_final_A12_L3 >=0.1) {
   $promedio_L3_A12 = 1;
}


$notaAu_Final_A12 = $row_datos_control_notas["nt_AuF"];

$promedio_L123_A12 = $promedio_L1_A12 + $promedio_L2_A12 + $promedio_L3_A12;




$promedio_L1_A13 = 0.00000000001;
$promedio_L2_A13 = 0.00000000001;
$promedio_L3_A13 = 0.00000000001;



$registro_notas = $r_d_reg_estu_HOYx["id_reg_estu_actual"];


$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_estxx1'
               and materia = 13
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 






$nota_A13_L1_N1 = ($row_datos_control_notas["nt_11"] * $porcentaje_A13_L1_N1)/$el_puntaje_completo_es;
$nota_A13_L1_N2 = ($row_datos_control_notas["nt_12"] * $porcentaje_A13_L1_N2)/$el_puntaje_completo_es;
$nota_A13_L1_N3 = ($row_datos_control_notas["nt_13"] * $porcentaje_A13_L1_N3)/$el_puntaje_completo_es;
$nota_A13_L1_N4 = ($row_datos_control_notas["nt_14"] * $porcentaje_A13_L1_N4)/$el_puntaje_completo_es;
$nota_A13_L1_N5 = ($row_datos_control_notas["nt_15"] * $porcentaje_A13_L1_N5)/$el_puntaje_completo_es;
$nota_A13_L1_N6 = ($row_datos_control_notas["nt_16"] * $porcentaje_A13_L1_N6)/$el_puntaje_completo_es;
$nota_A13_L1_N7 = ($row_datos_control_notas["nt_17"] * $porcentaje_A13_L1_N7)/$el_puntaje_completo_es;
$notaAu_A13_L1 = $row_datos_control_notas["nt_Au1"];

$nota_final_A13_L1 = $nota_A13_L1_N1 + $nota_A13_L1_N2 + $nota_A13_L1_N3 + $nota_A13_L1_N4 + $nota_A13_L1_N5 + $nota_A13_L1_N6 + $nota_A13_L1_N7 + $notaAu_A13_L1;
$nota_final_A13_L1_redon1 =number_format($nota_final_A13_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A13_L1 >=0.1) {
   $promedio_L1_A13 = 1;
}

$nota_A13_L2_N1 = ($row_datos_control_notas["nt_21"] * $porcentaje_A13_L2_N1)/$el_puntaje_completo_es;
$nota_A13_L2_N2 = ($row_datos_control_notas["nt_22"] * $porcentaje_A13_L2_N2)/$el_puntaje_completo_es;
$nota_A13_L2_N3 = ($row_datos_control_notas["nt_23"] * $porcentaje_A13_L2_N3)/$el_puntaje_completo_es;
$nota_A13_L2_N4 = ($row_datos_control_notas["nt_24"] * $porcentaje_A13_L2_N4)/$el_puntaje_completo_es;
$nota_A13_L2_N5 = ($row_datos_control_notas["nt_25"] * $porcentaje_A13_L2_N5)/$el_puntaje_completo_es;
$nota_A13_L2_N6 = ($row_datos_control_notas["nt_26"] * $porcentaje_A13_L2_N6)/$el_puntaje_completo_es;
$nota_A13_L2_N7 = ($row_datos_control_notas["nt_27"] * $porcentaje_A13_L2_N7)/$el_puntaje_completo_es;
$notaAu_A13_L2 = $row_datos_control_notas["nt_Au2"];

$nota_final_A13_L2 = $nota_A13_L2_N1 + $nota_A13_L2_N2 + $nota_A13_L2_N3 + $nota_A13_L2_N4 + $nota_A13_L2_N5 + $nota_A13_L2_N6 + $nota_A13_L2_N7 + $notaAu_A13_L2;
$nota_final_A13_L2_redon1 =number_format($nota_final_A13_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A13_L2 >=0.1) {
   $promedio_L2_A13 = 1;
}


$nota_A13_L3_N1 = ($row_datos_control_notas["nt_31"] * $porcentaje_A13_L3_N1)/$el_puntaje_completo_es;
$nota_A13_L3_N2 = ($row_datos_control_notas["nt_32"] * $porcentaje_A13_L3_N2)/$el_puntaje_completo_es;
$nota_A13_L3_N3 = ($row_datos_control_notas["nt_33"] * $porcentaje_A13_L3_N3)/$el_puntaje_completo_es;
$nota_A13_L3_N4 = ($row_datos_control_notas["nt_34"] * $porcentaje_A13_L3_N4)/$el_puntaje_completo_es;
$nota_A13_L3_N5 = ($row_datos_control_notas["nt_35"] * $porcentaje_A13_L3_N5)/$el_puntaje_completo_es;
$nota_A13_L3_N6 = ($row_datos_control_notas["nt_36"] * $porcentaje_A13_L3_N6)/$el_puntaje_completo_es;
$nota_A13_L3_N7 = ($row_datos_control_notas["nt_37"] * $porcentaje_A13_L3_N7)/$el_puntaje_completo_es;
$notaAu_A13_L3 = $row_datos_control_notas["nt_Au3"];

$nota_final_A13_L3 = $nota_A13_L3_N1 + $nota_A13_L3_N2 + $nota_A13_L3_N3 + $nota_A13_L3_N4 + $nota_A13_L3_N5 + $nota_A13_L3_N6 + $nota_A13_L3_N7 + $notaAu_A13_L3;
$nota_final_A13_L3_redon1 =number_format($nota_final_A13_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A13_L3 >=0.1) {
   $promedio_L3_A13 = 1;
}


$notaAu_Final_A13 = $row_datos_control_notas["nt_AuF"];

$promedio_L123_A13 = $promedio_L1_A13 + $promedio_L2_A13 + $promedio_L3_A13;




$promedio_L1_A14 = 0.00000000001;
$promedio_L2_A14 = 0.00000000001;
$promedio_L3_A14 = 0.00000000001;



$registro_notas = $r_d_reg_estu_HOYx["id_reg_estu_actual"];


$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$registro_notas'
               and id_estud = '$id_estxx1'
               and materia = 14
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 


 mysqli_close($enlace); 



$nota_A14_L1_N1 = ($row_datos_control_notas["nt_11"] * $porcentaje_A14_L1_N1)/$el_puntaje_completo_es;
$nota_A14_L1_N2 = ($row_datos_control_notas["nt_12"] * $porcentaje_A14_L1_N2)/$el_puntaje_completo_es;
$nota_A14_L1_N3 = ($row_datos_control_notas["nt_13"] * $porcentaje_A14_L1_N3)/$el_puntaje_completo_es;
$nota_A14_L1_N4 = ($row_datos_control_notas["nt_14"] * $porcentaje_A14_L1_N4)/$el_puntaje_completo_es;
$nota_A14_L1_N5 = ($row_datos_control_notas["nt_15"] * $porcentaje_A14_L1_N5)/$el_puntaje_completo_es;
$nota_A14_L1_N6 = ($row_datos_control_notas["nt_16"] * $porcentaje_A14_L1_N6)/$el_puntaje_completo_es;
$nota_A14_L1_N7 = ($row_datos_control_notas["nt_17"] * $porcentaje_A14_L1_N7)/$el_puntaje_completo_es;
$notaAu_A14_L1 = $row_datos_control_notas["nt_Au1"];

$nota_final_A14_L1 = $nota_A14_L1_N1 + $nota_A14_L1_N2 + $nota_A14_L1_N3 + $nota_A14_L1_N4 + $nota_A14_L1_N5 + $nota_A14_L1_N6 + $nota_A14_L1_N7 + $notaAu_A14_L1;
$nota_final_A14_L1_redon1 =number_format($nota_final_A14_L1, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A14_L1 >=0.1) {
   $promedio_L1_A14 = 1;
}

$nota_A14_L2_N1 = ($row_datos_control_notas["nt_21"] * $porcentaje_A14_L2_N1)/$el_puntaje_completo_es;
$nota_A14_L2_N2 = ($row_datos_control_notas["nt_22"] * $porcentaje_A14_L2_N2)/$el_puntaje_completo_es;
$nota_A14_L2_N3 = ($row_datos_control_notas["nt_23"] * $porcentaje_A14_L2_N3)/$el_puntaje_completo_es;
$nota_A14_L2_N4 = ($row_datos_control_notas["nt_24"] * $porcentaje_A14_L2_N4)/$el_puntaje_completo_es;
$nota_A14_L2_N5 = ($row_datos_control_notas["nt_25"] * $porcentaje_A14_L2_N5)/$el_puntaje_completo_es;
$nota_A14_L2_N6 = ($row_datos_control_notas["nt_26"] * $porcentaje_A14_L2_N6)/$el_puntaje_completo_es;
$nota_A14_L2_N7 = ($row_datos_control_notas["nt_27"] * $porcentaje_A14_L2_N7)/$el_puntaje_completo_es;
$notaAu_A14_L2 = $row_datos_control_notas["nt_Au2"];

$nota_final_A14_L2 = $nota_A14_L2_N1 + $nota_A14_L2_N2 + $nota_A14_L2_N3 + $nota_A14_L2_N4 + $nota_A14_L2_N5 + $nota_A14_L2_N6 + $nota_A14_L2_N7 + $notaAu_A14_L2;
$nota_final_A14_L2_redon1 =number_format($nota_final_A14_L2, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A14_L2 >=0.1) {
   $promedio_L2_A14 = 1;
}


$nota_A14_L3_N1 = ($row_datos_control_notas["nt_31"] * $porcentaje_A14_L3_N1)/$el_puntaje_completo_es;
$nota_A14_L3_N2 = ($row_datos_control_notas["nt_32"] * $porcentaje_A14_L3_N2)/$el_puntaje_completo_es;
$nota_A14_L3_N3 = ($row_datos_control_notas["nt_33"] * $porcentaje_A14_L3_N3)/$el_puntaje_completo_es;
$nota_A14_L3_N4 = ($row_datos_control_notas["nt_34"] * $porcentaje_A14_L3_N4)/$el_puntaje_completo_es;
$nota_A14_L3_N5 = ($row_datos_control_notas["nt_35"] * $porcentaje_A14_L3_N5)/$el_puntaje_completo_es;
$nota_A14_L3_N6 = ($row_datos_control_notas["nt_36"] * $porcentaje_A14_L3_N6)/$el_puntaje_completo_es;
$nota_A14_L3_N7 = ($row_datos_control_notas["nt_37"] * $porcentaje_A14_L3_N7)/$el_puntaje_completo_es;
$notaAu_A14_L3 = $row_datos_control_notas["nt_Au3"];

$nota_final_A14_L3 = $nota_A14_L3_N1 + $nota_A14_L3_N2 + $nota_A14_L3_N3 + $nota_A14_L3_N4 + $nota_A14_L3_N5 + $nota_A14_L3_N6 + $nota_A14_L3_N7 + $notaAu_A14_L3;
$nota_final_A14_L3_redon1 =number_format($nota_final_A14_L3, 1, '.', '');  // al redondear a 1 es necesario formatear a 1

if ($nota_final_A14_L3 >=0.1) {
   $promedio_L3_A14 = 1;
}


$notaAu_Final_A14 = $row_datos_control_notas["nt_AuF"];

$promedio_L123_A14 = $promedio_L1_A14 + $promedio_L2_A14 + $promedio_L3_A14;


?>






  <tbody class="align-middle" align="center">
    <tr>
      <th scope="row" BGCOLOR="<?php echo $color1;?>">1°</th>
     
      <td BGCOLOR="<?php echo $color1;?>" <?php if
      ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> >


        <?php $nota_final_A1_L1a =number_format($nota_final_A1_L1_redon1); 

if ($row_datos_controlasign['a_convertir'] == 1 ) {  /* numerico */
       $nota_final_A1_L1a_print = $nota_final_A1_L1a;
} /* cierre numerico */
if ($row_datos_controlasign['a_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A1_L1a >= $comparativo_formato_1) { $alfabetico_final_A1_L1a = $alfabetico_formato_1;  }
   if ($nota_final_A1_L1a >= $comparativo_formato_2) { $alfabetico_final_A1_L1a = $alfabetico_formato_2;  }
   if ($nota_final_A1_L1a >= $comparativo_formato_3) { $alfabetico_final_A1_L1a = $alfabetico_formato_3;  }
   if ($nota_final_A1_L1a >= $comparativo_formato_4) { $alfabetico_final_A1_L1a = $alfabetico_formato_4;  }
   if ($nota_final_A1_L1a >= $comparativo_formato_5) { $alfabetico_final_A1_L1a = $alfabetico_formato_5;  }
   if ($nota_final_A1_L1a >= $comparativo_formato_6) { $alfabetico_final_A1_L1a = $alfabetico_formato_6;  }
   if ($nota_final_A1_L1a >= $comparativo_formato_7) { $alfabetico_final_A1_L1a = $alfabetico_formato_7;  }
   if ($nota_final_A1_L1a >= $comparativo_formato_8) { $alfabetico_final_A1_L1a = $alfabetico_formato_8;  }
   if ($nota_final_A1_L1a >= $comparativo_formato_9) { $alfabetico_final_A1_L1a = $alfabetico_formato_9;  }
   if ($nota_final_A1_L1a >= $comparativo_formato_10) { $alfabetico_final_A1_L1a = $alfabetico_formato_10;  }
   if ($nota_final_A1_L1a >= $comparativo_formato_11) { $alfabetico_final_A1_L1a = $alfabetico_formato_11;  }
   if ($nota_final_A1_L1a >= $comparativo_formato_12) { $alfabetico_final_A1_L1a = $alfabetico_formato_12;  }
   $nota_final_A1_L1a_print = $alfabetico_final_A1_L1a; } /* cierre alfabetico */

if ($row_datos_controlasign['a_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A1_L1a >= $comparativo_formato_1) { $literal_final_A1_L1a = $literal_formato_1;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_2) { $literal_final_A1_L1a = $literal_formato_2;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_3) { $literal_final_A1_L1a = $literal_formato_3;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_4) { $literal_final_A1_L1a = $literal_formato_4;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_5) { $literal_final_A1_L1a = $literal_formato_5;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_6) { $literal_final_A1_L1a = $literal_formato_6;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_7) { $literal_final_A1_L1a = $literal_formato_7;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_8) { $literal_final_A1_L1a = $literal_formato_8;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_9) { $literal_final_A1_L1a = $literal_formato_9;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_10) { $literal_final_A1_L1a = $literal_formato_10;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_11) { $literal_final_A1_L1a = $literal_formato_11;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_12) { $literal_final_A1_L1a = $literal_formato_12;  } 
  $nota_final_A1_L1a_print = $literal_final_A1_L1a; } /* cierre literal */


  if ($row_datos_controlasign['a_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A1_L1a >= $comparativo_formato_1) { $cualitativa_final_A1_L1a = $cualitativa_formato_1;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_2) { $cualitativa_final_A1_L1a = $cualitativa_formato_2;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_3) { $cualitativa_final_A1_L1a = $cualitativa_formato_3;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_4) { $cualitativa_final_A1_L1a = $cualitativa_formato_4;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_5) { $cualitativa_final_A1_L1a = $cualitativa_formato_5;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_6) { $cualitativa_final_A1_L1a = $cualitativa_formato_6;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_7) { $cualitativa_final_A1_L1a = $cualitativa_formato_7;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_8) { $cualitativa_final_A1_L1a = $cualitativa_formato_8;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_9) { $cualitativa_final_A1_L1a = $cualitativa_formato_9;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_10) { $cualitativa_final_A1_L1a = $cualitativa_formato_10;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_11) { $cualitativa_final_A1_L1a = $cualitativa_formato_11;  }
  if ($nota_final_A1_L1a >= $comparativo_formato_12) { $cualitativa_final_A1_L1a = $cualitativa_formato_12;  } 
  $nota_final_A1_L1a_print = $cualitativa_final_A1_L1a; } /* cierre cualitativo */



if ($nota_final_A1_L1 == '' ) {
$nota_final_A1_L1a_print = " ";
}

echo $nota_final_A1_L1a_print;

        ?> 




           </td>


      <td BGCOLOR="<?php echo $color1;?>" <?php if
      ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> >



         <?php $nota_final_A2_L1a =number_format($nota_final_A2_L1_redon1); 

if ($row_datos_controlasign['b_convertir'] == 1 ) {  /* numerico */
       $nota_final_A2_L1a_print = $nota_final_A2_L1a;
} /* cierre numerico */
if ($row_datos_controlasign['b_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A2_L1a >= $comparativo_formato_1) { $alfabetico_final_A2_L1a = $alfabetico_formato_1;  }
   if ($nota_final_A2_L1a >= $comparativo_formato_2) { $alfabetico_final_A2_L1a = $alfabetico_formato_2;  }
   if ($nota_final_A2_L1a >= $comparativo_formato_3) { $alfabetico_final_A2_L1a = $alfabetico_formato_3;  }
   if ($nota_final_A2_L1a >= $comparativo_formato_4) { $alfabetico_final_A2_L1a = $alfabetico_formato_4;  }
   if ($nota_final_A2_L1a >= $comparativo_formato_5) { $alfabetico_final_A2_L1a = $alfabetico_formato_5;  }
   if ($nota_final_A2_L1a >= $comparativo_formato_6) { $alfabetico_final_A2_L1a = $alfabetico_formato_6;  }
   if ($nota_final_A2_L1a >= $comparativo_formato_7) { $alfabetico_final_A2_L1a = $alfabetico_formato_7;  }
   if ($nota_final_A2_L1a >= $comparativo_formato_8) { $alfabetico_final_A2_L1a = $alfabetico_formato_8;  }
   if ($nota_final_A2_L1a >= $comparativo_formato_9) { $alfabetico_final_A2_L1a = $alfabetico_formato_9;  }
   if ($nota_final_A2_L1a >= $comparativo_formato_10) { $alfabetico_final_A2_L1a = $alfabetico_formato_10;  }
   if ($nota_final_A2_L1a >= $comparativo_formato_11) { $alfabetico_final_A2_L1a = $alfabetico_formato_11;  }
   if ($nota_final_A2_L1a >= $comparativo_formato_12) { $alfabetico_final_A2_L1a = $alfabetico_formato_12;  }
   $nota_final_A2_L1a_print = $alfabetico_final_A2_L1a; } /* cierre alfabetico */

if ($row_datos_controlasign['b_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A2_L1a >= $comparativo_formato_1) { $literal_final_A2_L1a = $literal_formato_1;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_2) { $literal_final_A2_L1a = $literal_formato_2;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_3) { $literal_final_A2_L1a = $literal_formato_3;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_4) { $literal_final_A2_L1a = $literal_formato_4;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_5) { $literal_final_A2_L1a = $literal_formato_5;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_6) { $literal_final_A2_L1a = $literal_formato_6;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_7) { $literal_final_A2_L1a = $literal_formato_7;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_8) { $literal_final_A2_L1a = $literal_formato_8;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_9) { $literal_final_A2_L1a = $literal_formato_9;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_10) { $literal_final_A2_L1a = $literal_formato_10;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_11) { $literal_final_A2_L1a = $literal_formato_11;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_12) { $literal_final_A2_L1a = $literal_formato_12;  } 
  $nota_final_A2_L1a_print = $literal_final_A2_L1a; } /* cierre literal */

  if ($row_datos_controlasign['b_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A2_L1a >= $comparativo_formato_1) { $cualitativa_final_A2_L1a = $cualitativa_formato_1;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_2) { $cualitativa_final_A2_L1a = $cualitativa_formato_2;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_3) { $cualitativa_final_A2_L1a = $cualitativa_formato_3;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_4) { $cualitativa_final_A2_L1a = $cualitativa_formato_4;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_5) { $cualitativa_final_A2_L1a = $cualitativa_formato_5;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_6) { $cualitativa_final_A2_L1a = $cualitativa_formato_6;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_7) { $cualitativa_final_A2_L1a = $cualitativa_formato_7;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_8) { $cualitativa_final_A2_L1a = $cualitativa_formato_8;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_9) { $cualitativa_final_A2_L1a = $cualitativa_formato_9;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_10) { $cualitativa_final_A2_L1a = $cualitativa_formato_10;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_11) { $cualitativa_final_A2_L1a = $cualitativa_formato_11;  }
  if ($nota_final_A2_L1a >= $comparativo_formato_12) { $cualitativa_final_A2_L1a = $cualitativa_formato_12;  } 
  $nota_final_A2_L1a_print = $cualitativa_final_A2_L1a; } /* cierre cualitativo */

if ($nota_final_A2_L1 == '' ) {
$nota_final_A2_L1a_print = " ";
}
echo $nota_final_A2_L1a_print;
        ?> 





      </td>
      <td BGCOLOR="<?php echo $color1;?>" <?php if
      ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> >
       <?php $nota_final_A3_L1a =number_format($nota_final_A3_L1_redon1); 

if ($row_datos_controlasign['c_convertir'] == 1 ) {  /* numerico */
       $nota_final_A3_L1a_print = $nota_final_A3_L1a;
} /* cierre numerico */
if ($row_datos_controlasign['c_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A3_L1a >= $comparativo_formato_1) { $alfabetico_final_A3_L1a = $alfabetico_formato_1;  }
   if ($nota_final_A3_L1a >= $comparativo_formato_2) { $alfabetico_final_A3_L1a = $alfabetico_formato_2;  }
   if ($nota_final_A3_L1a >= $comparativo_formato_3) { $alfabetico_final_A3_L1a = $alfabetico_formato_3;  }
   if ($nota_final_A3_L1a >= $comparativo_formato_4) { $alfabetico_final_A3_L1a = $alfabetico_formato_4;  }
   if ($nota_final_A3_L1a >= $comparativo_formato_5) { $alfabetico_final_A3_L1a = $alfabetico_formato_5;  }
   if ($nota_final_A3_L1a >= $comparativo_formato_6) { $alfabetico_final_A3_L1a = $alfabetico_formato_6;  }
   if ($nota_final_A3_L1a >= $comparativo_formato_7) { $alfabetico_final_A3_L1a = $alfabetico_formato_7;  }
   if ($nota_final_A3_L1a >= $comparativo_formato_8) { $alfabetico_final_A3_L1a = $alfabetico_formato_8;  }
   if ($nota_final_A3_L1a >= $comparativo_formato_9) { $alfabetico_final_A3_L1a = $alfabetico_formato_9;  }
   if ($nota_final_A3_L1a >= $comparativo_formato_10) { $alfabetico_final_A3_L1a = $alfabetico_formato_10;  }
   if ($nota_final_A3_L1a >= $comparativo_formato_11) { $alfabetico_final_A3_L1a = $alfabetico_formato_11;  }
   if ($nota_final_A3_L1a >= $comparativo_formato_12) { $alfabetico_final_A3_L1a = $alfabetico_formato_12;  }
   $nota_final_A3_L1a_print = $alfabetico_final_A3_L1a; } /* cierre alfabetico */

if ($row_datos_controlasign['c_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A3_L1a >= $comparativo_formato_1) { $literal_final_A3_L1a = $literal_formato_1;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_2) { $literal_final_A3_L1a = $literal_formato_2;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_3) { $literal_final_A3_L1a = $literal_formato_3;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_4) { $literal_final_A3_L1a = $literal_formato_4;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_5) { $literal_final_A3_L1a = $literal_formato_5;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_6) { $literal_final_A3_L1a = $literal_formato_6;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_7) { $literal_final_A3_L1a = $literal_formato_7;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_8) { $literal_final_A3_L1a = $literal_formato_8;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_9) { $literal_final_A3_L1a = $literal_formato_9;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_10) { $literal_final_A3_L1a = $literal_formato_10;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_11) { $literal_final_A3_L1a = $literal_formato_11;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_12) { $literal_final_A3_L1a = $literal_formato_12;  } 
  $nota_final_A3_L1a_print = $literal_final_A3_L1a; } /* cierre literal */

  if ($row_datos_controlasign['c_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A3_L1a >= $comparativo_formato_1) { $cualitativa_final_A3_L1a = $cualitativa_formato_1;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_2) { $cualitativa_final_A3_L1a = $cualitativa_formato_2;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_3) { $cualitativa_final_A3_L1a = $cualitativa_formato_3;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_4) { $cualitativa_final_A3_L1a = $cualitativa_formato_4;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_5) { $cualitativa_final_A3_L1a = $cualitativa_formato_5;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_6) { $cualitativa_final_A3_L1a = $cualitativa_formato_6;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_7) { $cualitativa_final_A3_L1a = $cualitativa_formato_7;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_8) { $cualitativa_final_A3_L1a = $cualitativa_formato_8;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_9) { $cualitativa_final_A3_L1a = $cualitativa_formato_9;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_10) { $cualitativa_final_A3_L1a = $cualitativa_formato_10;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_11) { $cualitativa_final_A3_L1a = $cualitativa_formato_11;  }
  if ($nota_final_A3_L1a >= $comparativo_formato_12) { $cualitativa_final_A3_L1a = $cualitativa_formato_12;  } 
  $nota_final_A3_L1a_print = $cualitativa_final_A3_L1a; } /* cierre cualitativo */

if ($nota_final_A3_L1 == '' ) {
$nota_final_A3_L1a_print = " ";
}
echo $nota_final_A3_L1a_print;
        ?>   </td>


      <td BGCOLOR="<?php echo $color1;?>" <?php if
      ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> >
      <?php $nota_final_A4_L1a =number_format($nota_final_A4_L1_redon1); 

if ($row_datos_controlasign['d_convertir'] == 1 ) {  /* numerico */
       $nota_final_A4_L1a_print = $nota_final_A4_L1a;
} /* cierre numerico */
if ($row_datos_controlasign['d_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A4_L1a >= $comparativo_formato_1) { $alfabetico_final_A4_L1a = $alfabetico_formato_1;  }
   if ($nota_final_A4_L1a >= $comparativo_formato_2) { $alfabetico_final_A4_L1a = $alfabetico_formato_2;  }
   if ($nota_final_A4_L1a >= $comparativo_formato_3) { $alfabetico_final_A4_L1a = $alfabetico_formato_3;  }
   if ($nota_final_A4_L1a >= $comparativo_formato_4) { $alfabetico_final_A4_L1a = $alfabetico_formato_4;  }
   if ($nota_final_A4_L1a >= $comparativo_formato_5) { $alfabetico_final_A4_L1a = $alfabetico_formato_5;  }
   if ($nota_final_A4_L1a >= $comparativo_formato_6) { $alfabetico_final_A4_L1a = $alfabetico_formato_6;  }
   if ($nota_final_A4_L1a >= $comparativo_formato_7) { $alfabetico_final_A4_L1a = $alfabetico_formato_7;  }
   if ($nota_final_A4_L1a >= $comparativo_formato_8) { $alfabetico_final_A4_L1a = $alfabetico_formato_8;  }
   if ($nota_final_A4_L1a >= $comparativo_formato_9) { $alfabetico_final_A4_L1a = $alfabetico_formato_9;  }
   if ($nota_final_A4_L1a >= $comparativo_formato_10) { $alfabetico_final_A4_L1a = $alfabetico_formato_10;  }
   if ($nota_final_A4_L1a >= $comparativo_formato_11) { $alfabetico_final_A4_L1a = $alfabetico_formato_11;  }
   if ($nota_final_A4_L1a >= $comparativo_formato_12) { $alfabetico_final_A4_L1a = $alfabetico_formato_12;  }
   $nota_final_A4_L1a_print = $alfabetico_final_A4_L1a; } /* cierre alfabetico */

if ($row_datos_controlasign['d_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A4_L1a >= $comparativo_formato_1) { $literal_final_A4_L1a = $literal_formato_1;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_2) { $literal_final_A4_L1a = $literal_formato_2;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_3) { $literal_final_A4_L1a = $literal_formato_3;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_4) { $literal_final_A4_L1a = $literal_formato_4;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_5) { $literal_final_A4_L1a = $literal_formato_5;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_6) { $literal_final_A4_L1a = $literal_formato_6;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_7) { $literal_final_A4_L1a = $literal_formato_7;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_8) { $literal_final_A4_L1a = $literal_formato_8;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_9) { $literal_final_A4_L1a = $literal_formato_9;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_10) { $literal_final_A4_L1a = $literal_formato_10;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_11) { $literal_final_A4_L1a = $literal_formato_11;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_12) { $literal_final_A4_L1a = $literal_formato_12;  } 
  $nota_final_A4_L1a_print = $literal_final_A4_L1a; } /* cierre literal */

  if ($row_datos_controlasign['d_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A4_L1a >= $comparativo_formato_1) { $cualitativa_final_A4_L1a = $cualitativa_formato_1;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_2) { $cualitativa_final_A4_L1a = $cualitativa_formato_2;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_3) { $cualitativa_final_A4_L1a = $cualitativa_formato_3;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_4) { $cualitativa_final_A4_L1a = $cualitativa_formato_4;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_5) { $cualitativa_final_A4_L1a = $cualitativa_formato_5;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_6) { $cualitativa_final_A4_L1a = $cualitativa_formato_6;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_7) { $cualitativa_final_A4_L1a = $cualitativa_formato_7;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_8) { $cualitativa_final_A4_L1a = $cualitativa_formato_8;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_9) { $cualitativa_final_A4_L1a = $cualitativa_formato_9;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_10) { $cualitativa_final_A4_L1a = $cualitativa_formato_10;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_11) { $cualitativa_final_A4_L1a = $cualitativa_formato_11;  }
  if ($nota_final_A4_L1a >= $comparativo_formato_12) { $cualitativa_final_A4_L1a = $cualitativa_formato_12;  } 
  $nota_final_A4_L1a_print = $cualitativa_final_A4_L1a; } /* cierre cualitativo */

if ($nota_final_A4_L1 == '' ) {
$nota_final_A4_L1a_print = " ";
}
echo $nota_final_A4_L1a_print;
        ?>  </td>


      <td BGCOLOR="<?php echo $color1;?>" <?php if
      ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> >


       <?php $nota_final_A5_L1a =number_format($nota_final_A5_L1_redon1); 

if ($row_datos_controlasign['e_convertir'] == 1 ) {  /* numerico */
       $nota_final_A5_L1a_print = $nota_final_A5_L1a;
} /* cierre numerico */
if ($row_datos_controlasign['e_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A5_L1a >= $comparativo_formato_1) { $alfabetico_final_A5_L1a = $alfabetico_formato_1;  }
   if ($nota_final_A5_L1a >= $comparativo_formato_2) { $alfabetico_final_A5_L1a = $alfabetico_formato_2;  }
   if ($nota_final_A5_L1a >= $comparativo_formato_3) { $alfabetico_final_A5_L1a = $alfabetico_formato_3;  }
   if ($nota_final_A5_L1a >= $comparativo_formato_4) { $alfabetico_final_A5_L1a = $alfabetico_formato_4;  }
   if ($nota_final_A5_L1a >= $comparativo_formato_5) { $alfabetico_final_A5_L1a = $alfabetico_formato_5;  }
   if ($nota_final_A5_L1a >= $comparativo_formato_6) { $alfabetico_final_A5_L1a = $alfabetico_formato_6;  }
   if ($nota_final_A5_L1a >= $comparativo_formato_7) { $alfabetico_final_A5_L1a = $alfabetico_formato_7;  }
   if ($nota_final_A5_L1a >= $comparativo_formato_8) { $alfabetico_final_A5_L1a = $alfabetico_formato_8;  }
   if ($nota_final_A5_L1a >= $comparativo_formato_9) { $alfabetico_final_A5_L1a = $alfabetico_formato_9;  }
   if ($nota_final_A5_L1a >= $comparativo_formato_10) { $alfabetico_final_A5_L1a = $alfabetico_formato_10;  }
   if ($nota_final_A5_L1a >= $comparativo_formato_11) { $alfabetico_final_A5_L1a = $alfabetico_formato_11;  }
   if ($nota_final_A5_L1a >= $comparativo_formato_12) { $alfabetico_final_A5_L1a = $alfabetico_formato_12;  }
   $nota_final_A5_L1a_print = $alfabetico_final_A5_L1a; } /* cierre alfabetico */

if ($row_datos_controlasign['e_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A5_L1a >= $comparativo_formato_1) { $literal_final_A5_L1a = $literal_formato_1;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_2) { $literal_final_A5_L1a = $literal_formato_2;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_3) { $literal_final_A5_L1a = $literal_formato_3;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_4) { $literal_final_A5_L1a = $literal_formato_4;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_5) { $literal_final_A5_L1a = $literal_formato_5;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_6) { $literal_final_A5_L1a = $literal_formato_6;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_7) { $literal_final_A5_L1a = $literal_formato_7;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_8) { $literal_final_A5_L1a = $literal_formato_8;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_9) { $literal_final_A5_L1a = $literal_formato_9;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_10) { $literal_final_A5_L1a = $literal_formato_10;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_11) { $literal_final_A5_L1a = $literal_formato_11;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_12) { $literal_final_A5_L1a = $literal_formato_12;  } 
  $nota_final_A5_L1a_print = $literal_final_A5_L1a; } /* cierre literal */

  if ($row_datos_controlasign['e_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A5_L1a >= $comparativo_formato_1) { $cualitativa_final_A5_L1a = $cualitativa_formato_1;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_2) { $cualitativa_final_A5_L1a = $cualitativa_formato_2;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_3) { $cualitativa_final_A5_L1a = $cualitativa_formato_3;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_4) { $cualitativa_final_A5_L1a = $cualitativa_formato_4;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_5) { $cualitativa_final_A5_L1a = $cualitativa_formato_5;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_6) { $cualitativa_final_A5_L1a = $cualitativa_formato_6;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_7) { $cualitativa_final_A5_L1a = $cualitativa_formato_7;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_8) { $cualitativa_final_A5_L1a = $cualitativa_formato_8;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_9) { $cualitativa_final_A5_L1a = $cualitativa_formato_9;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_10) { $cualitativa_final_A5_L1a = $cualitativa_formato_10;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_11) { $cualitativa_final_A5_L1a = $cualitativa_formato_11;  }
  if ($nota_final_A5_L1a >= $comparativo_formato_12) { $cualitativa_final_A5_L1a = $cualitativa_formato_12;  } 
  $nota_final_A5_L1a_print = $cualitativa_final_A5_L1a; } /* cierre cualitativo */

if ($nota_final_A5_L1 == '' ) {
$nota_final_A5_L1a_print = " ";
}
echo $nota_final_A5_L1a_print;
        ?>  </td>


      <td BGCOLOR="<?php echo $color1;?>" <?php if
      ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> >
  <?php $nota_final_A6_L1a =number_format($nota_final_A6_L1_redon1); 

if ($row_datos_controlasign['f_convertir'] == 1 ) {  /* numerico */
       $nota_final_A6_L1a_print = $nota_final_A6_L1a;
} /* cierre numerico */
if ($row_datos_controlasign['f_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A6_L1a >= $comparativo_formato_1) { $alfabetico_final_A6_L1a = $alfabetico_formato_1;  }
   if ($nota_final_A6_L1a >= $comparativo_formato_2) { $alfabetico_final_A6_L1a = $alfabetico_formato_2;  }
   if ($nota_final_A6_L1a >= $comparativo_formato_3) { $alfabetico_final_A6_L1a = $alfabetico_formato_3;  }
   if ($nota_final_A6_L1a >= $comparativo_formato_4) { $alfabetico_final_A6_L1a = $alfabetico_formato_4;  }
   if ($nota_final_A6_L1a >= $comparativo_formato_5) { $alfabetico_final_A6_L1a = $alfabetico_formato_5;  }
   if ($nota_final_A6_L1a >= $comparativo_formato_6) { $alfabetico_final_A6_L1a = $alfabetico_formato_6;  }
   if ($nota_final_A6_L1a >= $comparativo_formato_7) { $alfabetico_final_A6_L1a = $alfabetico_formato_7;  }
   if ($nota_final_A6_L1a >= $comparativo_formato_8) { $alfabetico_final_A6_L1a = $alfabetico_formato_8;  }
   if ($nota_final_A6_L1a >= $comparativo_formato_9) { $alfabetico_final_A6_L1a = $alfabetico_formato_9;  }
   if ($nota_final_A6_L1a >= $comparativo_formato_10) { $alfabetico_final_A6_L1a = $alfabetico_formato_10;  }
   if ($nota_final_A6_L1a >= $comparativo_formato_11) { $alfabetico_final_A6_L1a = $alfabetico_formato_11;  }
   if ($nota_final_A6_L1a >= $comparativo_formato_12) { $alfabetico_final_A6_L1a = $alfabetico_formato_12;  }
   $nota_final_A6_L1a_print = $alfabetico_final_A6_L1a; } /* cierre alfabetico */

if ($row_datos_controlasign['f_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A6_L1a >= $comparativo_formato_1) { $literal_final_A6_L1a = $literal_formato_1;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_2) { $literal_final_A6_L1a = $literal_formato_2;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_3) { $literal_final_A6_L1a = $literal_formato_3;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_4) { $literal_final_A6_L1a = $literal_formato_4;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_5) { $literal_final_A6_L1a = $literal_formato_5;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_6) { $literal_final_A6_L1a = $literal_formato_6;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_7) { $literal_final_A6_L1a = $literal_formato_7;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_8) { $literal_final_A6_L1a = $literal_formato_8;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_9) { $literal_final_A6_L1a = $literal_formato_9;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_10) { $literal_final_A6_L1a = $literal_formato_10;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_11) { $literal_final_A6_L1a = $literal_formato_11;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_12) { $literal_final_A6_L1a = $literal_formato_12;  } 
  $nota_final_A6_L1a_print = $literal_final_A6_L1a; } /* cierre literal */

  if ($row_datos_controlasign['f_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A6_L1a >= $comparativo_formato_1) { $cualitativa_final_A6_L1a = $cualitativa_formato_1;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_2) { $cualitativa_final_A6_L1a = $cualitativa_formato_2;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_3) { $cualitativa_final_A6_L1a = $cualitativa_formato_3;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_4) { $cualitativa_final_A6_L1a = $cualitativa_formato_4;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_5) { $cualitativa_final_A6_L1a = $cualitativa_formato_5;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_6) { $cualitativa_final_A6_L1a = $cualitativa_formato_6;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_7) { $cualitativa_final_A6_L1a = $cualitativa_formato_7;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_8) { $cualitativa_final_A6_L1a = $cualitativa_formato_8;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_9) { $cualitativa_final_A6_L1a = $cualitativa_formato_9;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_10) { $cualitativa_final_A6_L1a = $cualitativa_formato_10;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_11) { $cualitativa_final_A6_L1a = $cualitativa_formato_11;  }
  if ($nota_final_A6_L1a >= $comparativo_formato_12) { $cualitativa_final_A6_L1a = $cualitativa_formato_12;  } 
  $nota_final_A6_L1a_print = $cualitativa_final_A6_L1a; } /* cierre cualitativo */

if ($nota_final_A6_L1 == '' ) {
$nota_final_A6_L1a_print = " ";
}
echo $nota_final_A6_L1a_print;
        ?>   

       </td>



      <td BGCOLOR="<?php echo $color1;?>" <?php if
      ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> >
      <?php $nota_final_A7_L1a =number_format($nota_final_A7_L1_redon1); 

if ($row_datos_controlasign['g_convertir'] == 1 ) {  /* numerico */
       $nota_final_A7_L1a_print = $nota_final_A7_L1a;
} /* cierre numerico */
if ($row_datos_controlasign['g_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A7_L1a >= $comparativo_formato_1) { $alfabetico_final_A7_L1a = $alfabetico_formato_1;  }
   if ($nota_final_A7_L1a >= $comparativo_formato_2) { $alfabetico_final_A7_L1a = $alfabetico_formato_2;  }
   if ($nota_final_A7_L1a >= $comparativo_formato_3) { $alfabetico_final_A7_L1a = $alfabetico_formato_3;  }
   if ($nota_final_A7_L1a >= $comparativo_formato_4) { $alfabetico_final_A7_L1a = $alfabetico_formato_4;  }
   if ($nota_final_A7_L1a >= $comparativo_formato_5) { $alfabetico_final_A7_L1a = $alfabetico_formato_5;  }
   if ($nota_final_A7_L1a >= $comparativo_formato_6) { $alfabetico_final_A7_L1a = $alfabetico_formato_6;  }
   if ($nota_final_A7_L1a >= $comparativo_formato_7) { $alfabetico_final_A7_L1a = $alfabetico_formato_7;  }
   if ($nota_final_A7_L1a >= $comparativo_formato_8) { $alfabetico_final_A7_L1a = $alfabetico_formato_8;  }
   if ($nota_final_A7_L1a >= $comparativo_formato_9) { $alfabetico_final_A7_L1a = $alfabetico_formato_9;  }
   if ($nota_final_A7_L1a >= $comparativo_formato_10) { $alfabetico_final_A7_L1a = $alfabetico_formato_10;  }
   if ($nota_final_A7_L1a >= $comparativo_formato_11) { $alfabetico_final_A7_L1a = $alfabetico_formato_11;  }
   if ($nota_final_A7_L1a >= $comparativo_formato_12) { $alfabetico_final_A7_L1a = $alfabetico_formato_12;  }
   $nota_final_A7_L1a_print = $alfabetico_final_A7_L1a; } /* cierre alfabetico */

if ($row_datos_controlasign['g_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A7_L1a >= $comparativo_formato_1) { $literal_final_A7_L1a = $literal_formato_1;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_2) { $literal_final_A7_L1a = $literal_formato_2;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_3) { $literal_final_A7_L1a = $literal_formato_3;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_4) { $literal_final_A7_L1a = $literal_formato_4;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_5) { $literal_final_A7_L1a = $literal_formato_5;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_6) { $literal_final_A7_L1a = $literal_formato_6;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_7) { $literal_final_A7_L1a = $literal_formato_7;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_8) { $literal_final_A7_L1a = $literal_formato_8;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_9) { $literal_final_A7_L1a = $literal_formato_9;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_10) { $literal_final_A7_L1a = $literal_formato_10;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_11) { $literal_final_A7_L1a = $literal_formato_11;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_12) { $literal_final_A7_L1a = $literal_formato_12;  } 
  $nota_final_A7_L1a_print = $literal_final_A7_L1a; } /* cierre literal */

  if ($row_datos_controlasign['g_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A7_L1a >= $comparativo_formato_1) { $cualitativa_final_A7_L1a = $cualitativa_formato_1;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_2) { $cualitativa_final_A7_L1a = $cualitativa_formato_2;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_3) { $cualitativa_final_A7_L1a = $cualitativa_formato_3;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_4) { $cualitativa_final_A7_L1a = $cualitativa_formato_4;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_5) { $cualitativa_final_A7_L1a = $cualitativa_formato_5;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_6) { $cualitativa_final_A7_L1a = $cualitativa_formato_6;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_7) { $cualitativa_final_A7_L1a = $cualitativa_formato_7;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_8) { $cualitativa_final_A7_L1a = $cualitativa_formato_8;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_9) { $cualitativa_final_A7_L1a = $cualitativa_formato_9;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_10) { $cualitativa_final_A7_L1a = $cualitativa_formato_10;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_11) { $cualitativa_final_A7_L1a = $cualitativa_formato_11;  }
  if ($nota_final_A7_L1a >= $comparativo_formato_12) { $cualitativa_final_A7_L1a = $cualitativa_formato_12;  } 
  $nota_final_A7_L1a_print = $cualitativa_final_A7_L1a; } /* cierre cualitativo */

if ($nota_final_A7_L1 == '' ) {
$nota_final_A7_L1a_print = " ";
}
echo $nota_final_A7_L1a_print;
        ?>   </td>
      <td BGCOLOR="<?php echo $color1;?>" <?php if
      ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> >
       <?php $nota_final_A8_L1a =number_format($nota_final_A8_L1_redon1); 

if ($row_datos_controlasign['h_convertir'] == 1 ) {  /* numerico */
       $nota_final_A8_L1a_print = $nota_final_A8_L1a;
} /* cierre numerico */
if ($row_datos_controlasign['h_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A8_L1a >= $comparativo_formato_1) { $alfabetico_final_A8_L1a = $alfabetico_formato_1;  }
   if ($nota_final_A8_L1a >= $comparativo_formato_2) { $alfabetico_final_A8_L1a = $alfabetico_formato_2;  }
   if ($nota_final_A8_L1a >= $comparativo_formato_3) { $alfabetico_final_A8_L1a = $alfabetico_formato_3;  }
   if ($nota_final_A8_L1a >= $comparativo_formato_4) { $alfabetico_final_A8_L1a = $alfabetico_formato_4;  }
   if ($nota_final_A8_L1a >= $comparativo_formato_5) { $alfabetico_final_A8_L1a = $alfabetico_formato_5;  }
   if ($nota_final_A8_L1a >= $comparativo_formato_6) { $alfabetico_final_A8_L1a = $alfabetico_formato_6;  }
   if ($nota_final_A8_L1a >= $comparativo_formato_7) { $alfabetico_final_A8_L1a = $alfabetico_formato_7;  }
   if ($nota_final_A8_L1a >= $comparativo_formato_8) { $alfabetico_final_A8_L1a = $alfabetico_formato_8;  }
   if ($nota_final_A8_L1a >= $comparativo_formato_9) { $alfabetico_final_A8_L1a = $alfabetico_formato_9;  }
   if ($nota_final_A8_L1a >= $comparativo_formato_10) { $alfabetico_final_A8_L1a = $alfabetico_formato_10;  }
   if ($nota_final_A8_L1a >= $comparativo_formato_11) { $alfabetico_final_A8_L1a = $alfabetico_formato_11;  }
   if ($nota_final_A8_L1a >= $comparativo_formato_12) { $alfabetico_final_A8_L1a = $alfabetico_formato_12;  }
   $nota_final_A8_L1a_print = $alfabetico_final_A8_L1a; } /* cierre alfabetico */

if ($row_datos_controlasign['h_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A8_L1a >= $comparativo_formato_1) { $literal_final_A8_L1a = $literal_formato_1;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_2) { $literal_final_A8_L1a = $literal_formato_2;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_3) { $literal_final_A8_L1a = $literal_formato_3;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_4) { $literal_final_A8_L1a = $literal_formato_4;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_5) { $literal_final_A8_L1a = $literal_formato_5;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_6) { $literal_final_A8_L1a = $literal_formato_6;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_7) { $literal_final_A8_L1a = $literal_formato_7;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_8) { $literal_final_A8_L1a = $literal_formato_8;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_9) { $literal_final_A8_L1a = $literal_formato_9;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_10) { $literal_final_A8_L1a = $literal_formato_10;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_11) { $literal_final_A8_L1a = $literal_formato_11;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_12) { $literal_final_A8_L1a = $literal_formato_12;  } 
  $nota_final_A8_L1a_print = $literal_final_A8_L1a; } /* cierre literal */

  if ($row_datos_controlasign['h_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A8_L1a >= $comparativo_formato_1) { $cualitativa_final_A8_L1a = $cualitativa_formato_1;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_2) { $cualitativa_final_A8_L1a = $cualitativa_formato_2;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_3) { $cualitativa_final_A8_L1a = $cualitativa_formato_3;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_4) { $cualitativa_final_A8_L1a = $cualitativa_formato_4;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_5) { $cualitativa_final_A8_L1a = $cualitativa_formato_5;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_6) { $cualitativa_final_A8_L1a = $cualitativa_formato_6;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_7) { $cualitativa_final_A8_L1a = $cualitativa_formato_7;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_8) { $cualitativa_final_A8_L1a = $cualitativa_formato_8;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_9) { $cualitativa_final_A8_L1a = $cualitativa_formato_9;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_10) { $cualitativa_final_A8_L1a = $cualitativa_formato_10;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_11) { $cualitativa_final_A8_L1a = $cualitativa_formato_11;  }
  if ($nota_final_A8_L1a >= $comparativo_formato_12) { $cualitativa_final_A8_L1a = $cualitativa_formato_12;  } 
  $nota_final_A8_L1a_print = $cualitativa_final_A8_L1a; } /* cierre cualitativo */

if ($nota_final_A8_L1 == '' ) {
$nota_final_A8_L1a_print = " ";
}
echo $nota_final_A8_L1a_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color1;?>" <?php if
      ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> >
       <?php $nota_final_A9_L1a =number_format($nota_final_A9_L1_redon1); 

if ($row_datos_controlasign['i_convertir'] == 1 ) {  /* numerico */
       $nota_final_A9_L1a_print = $nota_final_A9_L1a;
} /* cierre numerico */
if ($row_datos_controlasign['i_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A9_L1a >= $comparativo_formato_1) { $alfabetico_final_A9_L1a = $alfabetico_formato_1;  }
   if ($nota_final_A9_L1a >= $comparativo_formato_2) { $alfabetico_final_A9_L1a = $alfabetico_formato_2;  }
   if ($nota_final_A9_L1a >= $comparativo_formato_3) { $alfabetico_final_A9_L1a = $alfabetico_formato_3;  }
   if ($nota_final_A9_L1a >= $comparativo_formato_4) { $alfabetico_final_A9_L1a = $alfabetico_formato_4;  }
   if ($nota_final_A9_L1a >= $comparativo_formato_5) { $alfabetico_final_A9_L1a = $alfabetico_formato_5;  }
   if ($nota_final_A9_L1a >= $comparativo_formato_6) { $alfabetico_final_A9_L1a = $alfabetico_formato_6;  }
   if ($nota_final_A9_L1a >= $comparativo_formato_7) { $alfabetico_final_A9_L1a = $alfabetico_formato_7;  }
   if ($nota_final_A9_L1a >= $comparativo_formato_8) { $alfabetico_final_A9_L1a = $alfabetico_formato_8;  }
   if ($nota_final_A9_L1a >= $comparativo_formato_9) { $alfabetico_final_A9_L1a = $alfabetico_formato_9;  }
   if ($nota_final_A9_L1a >= $comparativo_formato_10) { $alfabetico_final_A9_L1a = $alfabetico_formato_10;  }
   if ($nota_final_A9_L1a >= $comparativo_formato_11) { $alfabetico_final_A9_L1a = $alfabetico_formato_11;  }
   if ($nota_final_A9_L1a >= $comparativo_formato_12) { $alfabetico_final_A9_L1a = $alfabetico_formato_12;  }
   $nota_final_A9_L1a_print = $alfabetico_final_A9_L1a; } /* cierre alfabetico */

if ($row_datos_controlasign['i_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A9_L1a >= $comparativo_formato_1) { $literal_final_A9_L1a = $literal_formato_1;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_2) { $literal_final_A9_L1a = $literal_formato_2;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_3) { $literal_final_A9_L1a = $literal_formato_3;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_4) { $literal_final_A9_L1a = $literal_formato_4;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_5) { $literal_final_A9_L1a = $literal_formato_5;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_6) { $literal_final_A9_L1a = $literal_formato_6;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_7) { $literal_final_A9_L1a = $literal_formato_7;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_8) { $literal_final_A9_L1a = $literal_formato_8;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_9) { $literal_final_A9_L1a = $literal_formato_9;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_10) { $literal_final_A9_L1a = $literal_formato_10;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_11) { $literal_final_A9_L1a = $literal_formato_11;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_12) { $literal_final_A9_L1a = $literal_formato_12;  } 
  $nota_final_A9_L1a_print = $literal_final_A9_L1a; } /* cierre literal */

  if ($row_datos_controlasign['i_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A9_L1a >= $comparativo_formato_1) { $cualitativa_final_A9_L1a = $cualitativa_formato_1;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_2) { $cualitativa_final_A9_L1a = $cualitativa_formato_2;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_3) { $cualitativa_final_A9_L1a = $cualitativa_formato_3;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_4) { $cualitativa_final_A9_L1a = $cualitativa_formato_4;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_5) { $cualitativa_final_A9_L1a = $cualitativa_formato_5;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_6) { $cualitativa_final_A9_L1a = $cualitativa_formato_6;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_7) { $cualitativa_final_A9_L1a = $cualitativa_formato_7;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_8) { $cualitativa_final_A9_L1a = $cualitativa_formato_8;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_9) { $cualitativa_final_A9_L1a = $cualitativa_formato_9;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_10) { $cualitativa_final_A9_L1a = $cualitativa_formato_10;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_11) { $cualitativa_final_A9_L1a = $cualitativa_formato_11;  }
  if ($nota_final_A9_L1a >= $comparativo_formato_12) { $cualitativa_final_A9_L1a = $cualitativa_formato_12;  } 
  $nota_final_A9_L1a_print = $cualitativa_final_A9_L1a; } /* cierre cualitativo */

if ($nota_final_A9_L1 == '' ) {
$nota_final_A9_L1a_print = " ";
}
echo $nota_final_A9_L1a_print;
        ?>   </td>
      <td BGCOLOR="<?php echo $color1;?>" <?php if
      ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> >
       <?php $nota_final_A10_L1a =number_format($nota_final_A10_L1_redon1); 

if ($row_datos_controlasign['j_convertir'] == 1 ) {  /* numerico */
       $nota_final_A10_L1a_print = $nota_final_A10_L1a;
} /* cierre numerico */
if ($row_datos_controlasign['j_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A10_L1a >= $comparativo_formato_1) { $alfabetico_final_A10_L1a = $alfabetico_formato_1;  }
   if ($nota_final_A10_L1a >= $comparativo_formato_2) { $alfabetico_final_A10_L1a = $alfabetico_formato_2;  }
   if ($nota_final_A10_L1a >= $comparativo_formato_3) { $alfabetico_final_A10_L1a = $alfabetico_formato_3;  }
   if ($nota_final_A10_L1a >= $comparativo_formato_4) { $alfabetico_final_A10_L1a = $alfabetico_formato_4;  }
   if ($nota_final_A10_L1a >= $comparativo_formato_5) { $alfabetico_final_A10_L1a = $alfabetico_formato_5;  }
   if ($nota_final_A10_L1a >= $comparativo_formato_6) { $alfabetico_final_A10_L1a = $alfabetico_formato_6;  }
   if ($nota_final_A10_L1a >= $comparativo_formato_7) { $alfabetico_final_A10_L1a = $alfabetico_formato_7;  }
   if ($nota_final_A10_L1a >= $comparativo_formato_8) { $alfabetico_final_A10_L1a = $alfabetico_formato_8;  }
   if ($nota_final_A10_L1a >= $comparativo_formato_9) { $alfabetico_final_A10_L1a = $alfabetico_formato_9;  }
   if ($nota_final_A10_L1a >= $comparativo_formato_10) { $alfabetico_final_A10_L1a = $alfabetico_formato_10;  }
   if ($nota_final_A10_L1a >= $comparativo_formato_11) { $alfabetico_final_A10_L1a = $alfabetico_formato_11;  }
   if ($nota_final_A10_L1a >= $comparativo_formato_12) { $alfabetico_final_A10_L1a = $alfabetico_formato_12;  }
   $nota_final_A10_L1a_print = $alfabetico_final_A10_L1a; } /* cierre alfabetico */

if ($row_datos_controlasign['j_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A10_L1a >= $comparativo_formato_1) { $literal_final_A10_L1a = $literal_formato_1;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_2) { $literal_final_A10_L1a = $literal_formato_2;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_3) { $literal_final_A10_L1a = $literal_formato_3;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_4) { $literal_final_A10_L1a = $literal_formato_4;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_5) { $literal_final_A10_L1a = $literal_formato_5;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_6) { $literal_final_A10_L1a = $literal_formato_6;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_7) { $literal_final_A10_L1a = $literal_formato_7;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_8) { $literal_final_A10_L1a = $literal_formato_8;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_9) { $literal_final_A10_L1a = $literal_formato_9;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_10) { $literal_final_A10_L1a = $literal_formato_10;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_11) { $literal_final_A10_L1a = $literal_formato_11;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_12) { $literal_final_A10_L1a = $literal_formato_12;  } 
  $nota_final_A10_L1a_print = $literal_final_A10_L1a; } /* cierre literal */

  if ($row_datos_controlasign['j_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A10_L1a >= $comparativo_formato_1) { $cualitativa_final_A10_L1a = $cualitativa_formato_1;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_2) { $cualitativa_final_A10_L1a = $cualitativa_formato_2;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_3) { $cualitativa_final_A10_L1a = $cualitativa_formato_3;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_4) { $cualitativa_final_A10_L1a = $cualitativa_formato_4;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_5) { $cualitativa_final_A10_L1a = $cualitativa_formato_5;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_6) { $cualitativa_final_A10_L1a = $cualitativa_formato_6;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_7) { $cualitativa_final_A10_L1a = $cualitativa_formato_7;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_8) { $cualitativa_final_A10_L1a = $cualitativa_formato_8;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_9) { $cualitativa_final_A10_L1a = $cualitativa_formato_9;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_10) { $cualitativa_final_A10_L1a = $cualitativa_formato_10;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_11) { $cualitativa_final_A10_L1a = $cualitativa_formato_11;  }
  if ($nota_final_A10_L1a >= $comparativo_formato_12) { $cualitativa_final_A10_L1a = $cualitativa_formato_12;  } 
  $nota_final_A10_L1a_print = $cualitativa_final_A10_L1a; } /* cierre cualitativo */

if ($nota_final_A10_L1 == '' ) {
$nota_final_A10_L1a_print = " ";
}
echo $nota_final_A10_L1a_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color1;?>" <?php if
      ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> >
       <?php $nota_final_A11_L1a =number_format($nota_final_A11_L1_redon1); 

if ($row_datos_controlasign['k_convertir'] == 1 ) {  /* numerico */
       $nota_final_A11_L1a_print = $nota_final_A11_L1a;
} /* cierre numerico */
if ($row_datos_controlasign['k_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A11_L1a >= $comparativo_formato_1) { $alfabetico_final_A11_L1a = $alfabetico_formato_1;  }
   if ($nota_final_A11_L1a >= $comparativo_formato_2) { $alfabetico_final_A11_L1a = $alfabetico_formato_2;  }
   if ($nota_final_A11_L1a >= $comparativo_formato_3) { $alfabetico_final_A11_L1a = $alfabetico_formato_3;  }
   if ($nota_final_A11_L1a >= $comparativo_formato_4) { $alfabetico_final_A11_L1a = $alfabetico_formato_4;  }
   if ($nota_final_A11_L1a >= $comparativo_formato_5) { $alfabetico_final_A11_L1a = $alfabetico_formato_5;  }
   if ($nota_final_A11_L1a >= $comparativo_formato_6) { $alfabetico_final_A11_L1a = $alfabetico_formato_6;  }
   if ($nota_final_A11_L1a >= $comparativo_formato_7) { $alfabetico_final_A11_L1a = $alfabetico_formato_7;  }
   if ($nota_final_A11_L1a >= $comparativo_formato_8) { $alfabetico_final_A11_L1a = $alfabetico_formato_8;  }
   if ($nota_final_A11_L1a >= $comparativo_formato_9) { $alfabetico_final_A11_L1a = $alfabetico_formato_9;  }
   if ($nota_final_A11_L1a >= $comparativo_formato_10) { $alfabetico_final_A11_L1a = $alfabetico_formato_10;  }
   if ($nota_final_A11_L1a >= $comparativo_formato_11) { $alfabetico_final_A11_L1a = $alfabetico_formato_11;  }
   if ($nota_final_A11_L1a >= $comparativo_formato_12) { $alfabetico_final_A11_L1a = $alfabetico_formato_12;  }
   $nota_final_A11_L1a_print = $alfabetico_final_A11_L1a; } /* cierre alfabetico */

if ($row_datos_controlasign['k_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A11_L1a >= $comparativo_formato_1) { $literal_final_A11_L1a = $literal_formato_1;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_2) { $literal_final_A11_L1a = $literal_formato_2;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_3) { $literal_final_A11_L1a = $literal_formato_3;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_4) { $literal_final_A11_L1a = $literal_formato_4;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_5) { $literal_final_A11_L1a = $literal_formato_5;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_6) { $literal_final_A11_L1a = $literal_formato_6;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_7) { $literal_final_A11_L1a = $literal_formato_7;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_8) { $literal_final_A11_L1a = $literal_formato_8;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_9) { $literal_final_A11_L1a = $literal_formato_9;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_10) { $literal_final_A11_L1a = $literal_formato_10;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_11) { $literal_final_A11_L1a = $literal_formato_11;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_12) { $literal_final_A11_L1a = $literal_formato_12;  } 
  $nota_final_A11_L1a_print = $literal_final_A11_L1a; } /* cierre literal */

  if ($row_datos_controlasign['k_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A11_L1a >= $comparativo_formato_1) { $cualitativa_final_A11_L1a = $cualitativa_formato_1;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_2) { $cualitativa_final_A11_L1a = $cualitativa_formato_2;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_3) { $cualitativa_final_A11_L1a = $cualitativa_formato_3;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_4) { $cualitativa_final_A11_L1a = $cualitativa_formato_4;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_5) { $cualitativa_final_A11_L1a = $cualitativa_formato_5;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_6) { $cualitativa_final_A11_L1a = $cualitativa_formato_6;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_7) { $cualitativa_final_A11_L1a = $cualitativa_formato_7;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_8) { $cualitativa_final_A11_L1a = $cualitativa_formato_8;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_9) { $cualitativa_final_A11_L1a = $cualitativa_formato_9;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_10) { $cualitativa_final_A11_L1a = $cualitativa_formato_10;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_11) { $cualitativa_final_A11_L1a = $cualitativa_formato_11;  }
  if ($nota_final_A11_L1a >= $comparativo_formato_12) { $cualitativa_final_A11_L1a = $cualitativa_formato_12;  } 
  $nota_final_A11_L1a_print = $cualitativa_final_A11_L1a; } /* cierre cualitativo */

if ($nota_final_A11_L1 == '' ) {
$nota_final_A11_L1a_print = " ";
}
echo $nota_final_A11_L1a_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color1;?>" <?php if
      ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> >
       <?php $nota_final_A12_L1a =number_format($nota_final_A12_L1_redon1); 

if ($row_datos_controlasign['l_convertir'] == 1 ) {  /* numerico */
       $nota_final_A12_L1a_print = $nota_final_A12_L1a;
} /* cierre numerico */
if ($row_datos_controlasign['l_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A12_L1a >= $comparativo_formato_1) { $alfabetico_final_A12_L1a = $alfabetico_formato_1;  }
   if ($nota_final_A12_L1a >= $comparativo_formato_2) { $alfabetico_final_A12_L1a = $alfabetico_formato_2;  }
   if ($nota_final_A12_L1a >= $comparativo_formato_3) { $alfabetico_final_A12_L1a = $alfabetico_formato_3;  }
   if ($nota_final_A12_L1a >= $comparativo_formato_4) { $alfabetico_final_A12_L1a = $alfabetico_formato_4;  }
   if ($nota_final_A12_L1a >= $comparativo_formato_5) { $alfabetico_final_A12_L1a = $alfabetico_formato_5;  }
   if ($nota_final_A12_L1a >= $comparativo_formato_6) { $alfabetico_final_A12_L1a = $alfabetico_formato_6;  }
   if ($nota_final_A12_L1a >= $comparativo_formato_7) { $alfabetico_final_A12_L1a = $alfabetico_formato_7;  }
   if ($nota_final_A12_L1a >= $comparativo_formato_8) { $alfabetico_final_A12_L1a = $alfabetico_formato_8;  }
   if ($nota_final_A12_L1a >= $comparativo_formato_9) { $alfabetico_final_A12_L1a = $alfabetico_formato_9;  }
   if ($nota_final_A12_L1a >= $comparativo_formato_10) { $alfabetico_final_A12_L1a = $alfabetico_formato_10;  }
   if ($nota_final_A12_L1a >= $comparativo_formato_11) { $alfabetico_final_A12_L1a = $alfabetico_formato_11;  }
   if ($nota_final_A12_L1a >= $comparativo_formato_12) { $alfabetico_final_A12_L1a = $alfabetico_formato_12;  }
   $nota_final_A12_L1a_print = $alfabetico_final_A12_L1a; } /* cierre alfabetico */

if ($row_datos_controlasign['l_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A12_L1a >= $comparativo_formato_1) { $literal_final_A12_L1a = $literal_formato_1;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_2) { $literal_final_A12_L1a = $literal_formato_2;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_3) { $literal_final_A12_L1a = $literal_formato_3;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_4) { $literal_final_A12_L1a = $literal_formato_4;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_5) { $literal_final_A12_L1a = $literal_formato_5;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_6) { $literal_final_A12_L1a = $literal_formato_6;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_7) { $literal_final_A12_L1a = $literal_formato_7;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_8) { $literal_final_A12_L1a = $literal_formato_8;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_9) { $literal_final_A12_L1a = $literal_formato_9;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_10) { $literal_final_A12_L1a = $literal_formato_10;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_11) { $literal_final_A12_L1a = $literal_formato_11;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_12) { $literal_final_A12_L1a = $literal_formato_12;  } 
  $nota_final_A12_L1a_print = $literal_final_A12_L1a; } /* cierre literal */

  if ($row_datos_controlasign['l_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A12_L1a >= $comparativo_formato_1) { $cualitativa_final_A12_L1a = $cualitativa_formato_1;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_2) { $cualitativa_final_A12_L1a = $cualitativa_formato_2;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_3) { $cualitativa_final_A12_L1a = $cualitativa_formato_3;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_4) { $cualitativa_final_A12_L1a = $cualitativa_formato_4;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_5) { $cualitativa_final_A12_L1a = $cualitativa_formato_5;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_6) { $cualitativa_final_A12_L1a = $cualitativa_formato_6;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_7) { $cualitativa_final_A12_L1a = $cualitativa_formato_7;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_8) { $cualitativa_final_A12_L1a = $cualitativa_formato_8;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_9) { $cualitativa_final_A12_L1a = $cualitativa_formato_9;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_10) { $cualitativa_final_A12_L1a = $cualitativa_formato_10;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_11) { $cualitativa_final_A12_L1a = $cualitativa_formato_11;  }
  if ($nota_final_A12_L1a >= $comparativo_formato_12) { $cualitativa_final_A12_L1a = $cualitativa_formato_12;  } 
  $nota_final_A12_L1a_print = $cualitativa_final_A12_L1a; } /* cierre cualitativo */

if ($nota_final_A12_L1 == '' ) {
$nota_final_A12_L1a_print = " ";
}
echo $nota_final_A12_L1a_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color1;?>" <?php if
      ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> >
        <?php $nota_final_A13_L1a =number_format($nota_final_A13_L1_redon1); 

if ($row_datos_controlasign['m_convertir'] == 1 ) {  /* numerico */
       $nota_final_A13_L1a_print = $nota_final_A13_L1a;
} /* cierre numerico */
if ($row_datos_controlasign['m_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A13_L1a >= $comparativo_formato_1) { $alfabetico_final_A13_L1a = $alfabetico_formato_1;  }
   if ($nota_final_A13_L1a >= $comparativo_formato_2) { $alfabetico_final_A13_L1a = $alfabetico_formato_2;  }
   if ($nota_final_A13_L1a >= $comparativo_formato_3) { $alfabetico_final_A13_L1a = $alfabetico_formato_3;  }
   if ($nota_final_A13_L1a >= $comparativo_formato_4) { $alfabetico_final_A13_L1a = $alfabetico_formato_4;  }
   if ($nota_final_A13_L1a >= $comparativo_formato_5) { $alfabetico_final_A13_L1a = $alfabetico_formato_5;  }
   if ($nota_final_A13_L1a >= $comparativo_formato_6) { $alfabetico_final_A13_L1a = $alfabetico_formato_6;  }
   if ($nota_final_A13_L1a >= $comparativo_formato_7) { $alfabetico_final_A13_L1a = $alfabetico_formato_7;  }
   if ($nota_final_A13_L1a >= $comparativo_formato_8) { $alfabetico_final_A13_L1a = $alfabetico_formato_8;  }
   if ($nota_final_A13_L1a >= $comparativo_formato_9) { $alfabetico_final_A13_L1a = $alfabetico_formato_9;  }
   if ($nota_final_A13_L1a >= $comparativo_formato_10) { $alfabetico_final_A13_L1a = $alfabetico_formato_10;  }
   if ($nota_final_A13_L1a >= $comparativo_formato_11) { $alfabetico_final_A13_L1a = $alfabetico_formato_11;  }
   if ($nota_final_A13_L1a >= $comparativo_formato_12) { $alfabetico_final_A13_L1a = $alfabetico_formato_12;  }
   $nota_final_A13_L1a_print = $alfabetico_final_A13_L1a; } /* cierre alfabetico */

if ($row_datos_controlasign['m_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A13_L1a >= $comparativo_formato_1) { $literal_final_A13_L1a = $literal_formato_1;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_2) { $literal_final_A13_L1a = $literal_formato_2;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_3) { $literal_final_A13_L1a = $literal_formato_3;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_4) { $literal_final_A13_L1a = $literal_formato_4;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_5) { $literal_final_A13_L1a = $literal_formato_5;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_6) { $literal_final_A13_L1a = $literal_formato_6;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_7) { $literal_final_A13_L1a = $literal_formato_7;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_8) { $literal_final_A13_L1a = $literal_formato_8;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_9) { $literal_final_A13_L1a = $literal_formato_9;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_10) { $literal_final_A13_L1a = $literal_formato_10;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_11) { $literal_final_A13_L1a = $literal_formato_11;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_12) { $literal_final_A13_L1a = $literal_formato_12;  } 
  $nota_final_A13_L1a_print = $literal_final_A13_L1a; } /* cierre literal */

  if ($row_datos_controlasign['m_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A13_L1a >= $comparativo_formato_1) { $cualitativa_final_A13_L1a = $cualitativa_formato_1;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_2) { $cualitativa_final_A13_L1a = $cualitativa_formato_2;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_3) { $cualitativa_final_A13_L1a = $cualitativa_formato_3;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_4) { $cualitativa_final_A13_L1a = $cualitativa_formato_4;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_5) { $cualitativa_final_A13_L1a = $cualitativa_formato_5;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_6) { $cualitativa_final_A13_L1a = $cualitativa_formato_6;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_7) { $cualitativa_final_A13_L1a = $cualitativa_formato_7;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_8) { $cualitativa_final_A13_L1a = $cualitativa_formato_8;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_9) { $cualitativa_final_A13_L1a = $cualitativa_formato_9;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_10) { $cualitativa_final_A13_L1a = $cualitativa_formato_10;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_11) { $cualitativa_final_A13_L1a = $cualitativa_formato_11;  }
  if ($nota_final_A13_L1a >= $comparativo_formato_12) { $cualitativa_final_A13_L1a = $cualitativa_formato_12;  } 
  $nota_final_A13_L1a_print = $cualitativa_final_A13_L1a; } /* cierre cualitativo */

if ($nota_final_A13_L1 == '' ) {
$nota_final_A13_L1a_print = " ";
}
echo $nota_final_A13_L1a_print;
        ?> </td>
      <td BGCOLOR="<?php echo $color1;?>" <?php if
      ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> >
       <?php $nota_final_A14_L1a =number_format($nota_final_A14_L1_redon1); 

if ($row_datos_controlasign['n_convertir'] == 1 ) {  /* numerico */
       $nota_final_A14_L1a_print = $nota_final_A14_L1a;
} /* cierre numerico */
if ($row_datos_controlasign['n_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A14_L1a >= $comparativo_formato_1) { $alfabetico_final_A14_L1a = $alfabetico_formato_1;  }
   if ($nota_final_A14_L1a >= $comparativo_formato_2) { $alfabetico_final_A14_L1a = $alfabetico_formato_2;  }
   if ($nota_final_A14_L1a >= $comparativo_formato_3) { $alfabetico_final_A14_L1a = $alfabetico_formato_3;  }
   if ($nota_final_A14_L1a >= $comparativo_formato_4) { $alfabetico_final_A14_L1a = $alfabetico_formato_4;  }
   if ($nota_final_A14_L1a >= $comparativo_formato_5) { $alfabetico_final_A14_L1a = $alfabetico_formato_5;  }
   if ($nota_final_A14_L1a >= $comparativo_formato_6) { $alfabetico_final_A14_L1a = $alfabetico_formato_6;  }
   if ($nota_final_A14_L1a >= $comparativo_formato_7) { $alfabetico_final_A14_L1a = $alfabetico_formato_7;  }
   if ($nota_final_A14_L1a >= $comparativo_formato_8) { $alfabetico_final_A14_L1a = $alfabetico_formato_8;  }
   if ($nota_final_A14_L1a >= $comparativo_formato_9) { $alfabetico_final_A14_L1a = $alfabetico_formato_9;  }
   if ($nota_final_A14_L1a >= $comparativo_formato_10) { $alfabetico_final_A14_L1a = $alfabetico_formato_10;  }
   if ($nota_final_A14_L1a >= $comparativo_formato_11) { $alfabetico_final_A14_L1a = $alfabetico_formato_11;  }
   if ($nota_final_A14_L1a >= $comparativo_formato_12) { $alfabetico_final_A14_L1a = $alfabetico_formato_12;  }
   $nota_final_A14_L1a_print = $alfabetico_final_A14_L1a; } /* cierre alfabetico */

if ($row_datos_controlasign['n_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A14_L1a >= $comparativo_formato_1) { $literal_final_A14_L1a = $literal_formato_1;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_2) { $literal_final_A14_L1a = $literal_formato_2;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_3) { $literal_final_A14_L1a = $literal_formato_3;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_4) { $literal_final_A14_L1a = $literal_formato_4;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_5) { $literal_final_A14_L1a = $literal_formato_5;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_6) { $literal_final_A14_L1a = $literal_formato_6;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_7) { $literal_final_A14_L1a = $literal_formato_7;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_8) { $literal_final_A14_L1a = $literal_formato_8;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_9) { $literal_final_A14_L1a = $literal_formato_9;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_10) { $literal_final_A14_L1a = $literal_formato_10;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_11) { $literal_final_A14_L1a = $literal_formato_11;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_12) { $literal_final_A14_L1a = $literal_formato_12;  } 
  $nota_final_A14_L1a_print = $literal_final_A14_L1a; } /* cierre literal */

  if ($row_datos_controlasign['n_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A14_L1a >= $comparativo_formato_1) { $cualitativa_final_A14_L1a = $cualitativa_formato_1;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_2) { $cualitativa_final_A14_L1a = $cualitativa_formato_2;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_3) { $cualitativa_final_A14_L1a = $cualitativa_formato_3;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_4) { $cualitativa_final_A14_L1a = $cualitativa_formato_4;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_5) { $cualitativa_final_A14_L1a = $cualitativa_formato_5;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_6) { $cualitativa_final_A14_L1a = $cualitativa_formato_6;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_7) { $cualitativa_final_A14_L1a = $cualitativa_formato_7;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_8) { $cualitativa_final_A14_L1a = $cualitativa_formato_8;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_9) { $cualitativa_final_A14_L1a = $cualitativa_formato_9;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_10) { $cualitativa_final_A14_L1a = $cualitativa_formato_10;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_11) { $cualitativa_final_A14_L1a = $cualitativa_formato_11;  }
  if ($nota_final_A14_L1a >= $comparativo_formato_12) { $cualitativa_final_A14_L1a = $cualitativa_formato_12;  } 
  $nota_final_A14_L1a_print = $cualitativa_final_A14_L1a; } /* cierre cualitativo */

if ($nota_final_A14_L1 == '' ) {
$nota_final_A14_L1a_print = " ";
}
echo $nota_final_A14_L1a_print;
        ?>  </td>

      <?php  // ayuda a saber quien tiene mas nota acumulada

if ($row_datos_controlasign['a_suma'] == 1) { $nota_final_A1_L1_redon1_valida = $nota_final_A1_L1_redon1; } else { $nota_final_A1_L1_redon1_valida = 0; }
if ($row_datos_controlasign['b_suma'] == 1) { $nota_final_A2_L1_redon1_valida = $nota_final_A2_L1_redon1; } else { $nota_final_A2_L1_redon1_valida = 0; }
if ($row_datos_controlasign['c_suma'] == 1) { $nota_final_A3_L1_redon1_valida = $nota_final_A3_L1_redon1; } else { $nota_final_A3_L1_redon1_valida = 0; }
if ($row_datos_controlasign['d_suma'] == 1) { $nota_final_A4_L1_redon1_valida = $nota_final_A4_L1_redon1; } else { $nota_final_A4_L1_redon1_valida = 0; }
if ($row_datos_controlasign['e_suma'] == 1) { $nota_final_A5_L1_redon1_valida = $nota_final_A5_L1_redon1; } else { $nota_final_A5_L1_redon1_valida = 0; }
if ($row_datos_controlasign['f_suma'] == 1) { $nota_final_A6_L1_redon1_valida = $nota_final_A6_L1_redon1; } else { $nota_final_A6_L1_redon1_valida = 0; }
if ($row_datos_controlasign['g_suma'] == 1) { $nota_final_A7_L1_redon1_valida = $nota_final_A7_L1_redon1; } else { $nota_final_A7_L1_redon1_valida = 0; }
if ($row_datos_controlasign['h_suma'] == 1) { $nota_final_A8_L1_redon1_valida = $nota_final_A8_L1_redon1; } else { $nota_final_A8_L1_redon1_valida = 0; }
if ($row_datos_controlasign['i_suma'] == 1) { $nota_final_A9_L1_redon1_valida = $nota_final_A9_L1_redon1; } else { $nota_final_A9_L1_redon1_valida = 0; }
if ($row_datos_controlasign['j_suma'] == 1) { $nota_final_A10_L1_redon1_valida = $nota_final_A10_L1_redon1; } else { $nota_final_A10_L1_redon1_valida = 0;}
if ($row_datos_controlasign['k_suma'] == 1) { $nota_final_A11_L1_redon1_valida = $nota_final_A11_L1_redon1; } else { $nota_final_A11_L1_redon1_valida = 0; }
if ($row_datos_controlasign['l_suma'] == 1) { $nota_final_A12_L1_redon1_valida = $nota_final_A12_L1_redon1; } else { $nota_final_A12_L1_redon1_valida = 0; }
if ($row_datos_controlasign['m_suma'] == 1) { $nota_final_A13_L1_redon1_valida = $nota_final_A13_L1_redon1; } else { $nota_final_A13_L1_redon1_valida = 0; }
if ($row_datos_controlasign['n_suma'] == 1) { $nota_final_A14_L1_redon1_valida = $nota_final_A14_L1_redon1; } else { $nota_final_A14_L1_redon1_valida = 0; }


      $nooootaaa_1 = $nota_final_A1_L1_redon1_valida + $nota_final_A2_L1_redon1_valida + $nota_final_A3_L1_redon1_valida + $nota_final_A4_L1_redon1_valida + $nota_final_A5_L1_redon1_valida
                   + $nota_final_A6_L1_redon1_valida + $nota_final_A7_L1_redon1_valida + $nota_final_A8_L1_redon1_valida + $nota_final_A9_L1_redon1_valida + $nota_final_A10_L1_redon1_valida
                   + $nota_final_A11_L1_redon1_valida + $nota_final_A12_L1_redon1_valida + $nota_final_A13_L1_redon1_valida + $nota_final_A14_L1_redon1_valida;


      include("../conectar.php");


$nota_101 = "UPDATE reg_estudiantes
SET nota_1= '$nooootaaa_1'
WHERE id_estud='$id_estxx1'";


$datos_nota_101 = mysqli_query($enlace, $nota_101) or die(mysqli_error());

mysqli_close($enlace);  
     ?>




    </tr>
    <tr>
      <th scope="row" BGCOLOR="<?php echo $color2;?>">2°</th>
      <td BGCOLOR="<?php echo $color2;?>" <?php if
      ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> >

      <?php $nota_final_A1_L2b =number_format($nota_final_A1_L2_redon1); if ($row_datos_controlasign['a_convertir'] == 1 ) {  /* numerico */
       $nota_final_A1_L2b_print = $nota_final_A1_L2b;
} /* cierre numerico */


if ($row_datos_controlasign['a_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A1_L2b >= $comparativo_formato_1) { $alfabetico_final_A1_L2b = $alfabetico_formato_1;  }
   if ($nota_final_A1_L2b >= $comparativo_formato_2) { $alfabetico_final_A1_L2b = $alfabetico_formato_2;  }
   if ($nota_final_A1_L2b >= $comparativo_formato_3) { $alfabetico_final_A1_L2b = $alfabetico_formato_3;  }
   if ($nota_final_A1_L2b >= $comparativo_formato_4) { $alfabetico_final_A1_L2b = $alfabetico_formato_4;  }
   if ($nota_final_A1_L2b >= $comparativo_formato_5) { $alfabetico_final_A1_L2b = $alfabetico_formato_5;  }
   if ($nota_final_A1_L2b >= $comparativo_formato_6) { $alfabetico_final_A1_L2b = $alfabetico_formato_6;  }
   if ($nota_final_A1_L2b >= $comparativo_formato_7) { $alfabetico_final_A1_L2b = $alfabetico_formato_7;  }
   if ($nota_final_A1_L2b >= $comparativo_formato_8) { $alfabetico_final_A1_L2b = $alfabetico_formato_8;  }
   if ($nota_final_A1_L2b >= $comparativo_formato_9) { $alfabetico_final_A1_L2b = $alfabetico_formato_9;  }
   if ($nota_final_A1_L2b >= $comparativo_formato_10) { $alfabetico_final_A1_L2b = $alfabetico_formato_10;  }
   if ($nota_final_A1_L2b >= $comparativo_formato_11) { $alfabetico_final_A1_L2b = $alfabetico_formato_11;  }
   if ($nota_final_A1_L2b >= $comparativo_formato_12) { $alfabetico_final_A1_L2b = $alfabetico_formato_12;  }
  $nota_final_A1_L2b_print = $alfabetico_final_A1_L2b; } /* cierre alfabetico */

if ($row_datos_controlasign['a_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A1_L2b >= $comparativo_formato_1) { $literal_final_A1_L2b = $literal_formato_1;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_2) { $literal_final_A1_L2b = $literal_formato_2;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_3) { $literal_final_A1_L2b = $literal_formato_3;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_4) { $literal_final_A1_L2b = $literal_formato_4;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_5) { $literal_final_A1_L2b = $literal_formato_5;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_6) { $literal_final_A1_L2b = $literal_formato_6;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_7) { $literal_final_A1_L2b = $literal_formato_7;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_8) { $literal_final_A1_L2b = $literal_formato_8;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_9) { $literal_final_A1_L2b = $literal_formato_9;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_10) { $literal_final_A1_L2b = $literal_formato_10;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_11) { $literal_final_A1_L2b = $literal_formato_11;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_12) { $literal_final_A1_L2b = $literal_formato_12;  } 
  $nota_final_A1_L2b_print = $literal_final_A1_L2b; } /* cierre literal */


  if ($row_datos_controlasign['a_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A1_L2b >= $comparativo_formato_1) { $cualitativa_final_A1_L2b = $cualitativa_formato_1;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_2) { $cualitativa_final_A1_L2b = $cualitativa_formato_2;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_3) { $cualitativa_final_A1_L2b = $cualitativa_formato_3;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_4) { $cualitativa_final_A1_L2b = $cualitativa_formato_4;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_5) { $cualitativa_final_A1_L2b = $cualitativa_formato_5;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_6) { $cualitativa_final_A1_L2b = $cualitativa_formato_6;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_7) { $cualitativa_final_A1_L2b = $cualitativa_formato_7;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_8) { $cualitativa_final_A1_L2b = $cualitativa_formato_8;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_9) { $cualitativa_final_A1_L2b = $cualitativa_formato_9;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_10) { $cualitativa_final_A1_L2b = $cualitativa_formato_10;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_11) { $cualitativa_final_A1_L2b = $cualitativa_formato_11;  }
  if ($nota_final_A1_L2b >= $comparativo_formato_12) { $cualitativa_final_A1_L2b = $cualitativa_formato_12;  } 
  $nota_final_A1_L2b_print = $cualitativa_final_A1_L2b; } /* cierre cualitativo */



if ($nota_final_A1_L2 == '' ) {
$nota_final_A1_L2b_print = " ";
}

echo $nota_final_A1_L2b_print;




        ?>  



      </td>





      <td BGCOLOR="<?php echo $color2;?>" <?php if
      ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> >
       <?php $nota_final_A2_L2b =number_format($nota_final_A2_L2_redon1); 

if ($row_datos_controlasign['b_convertir'] == 1 ) {  /* numerico */
       $nota_final_A2_L2b_print = $nota_final_A2_L2b;
} /* cierre numerico */
if ($row_datos_controlasign['b_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A2_L2b >= $comparativo_formato_1) { $alfabetico_final_A2_L2b = $alfabetico_formato_1;  }
   if ($nota_final_A2_L2b >= $comparativo_formato_2) { $alfabetico_final_A2_L2b = $alfabetico_formato_2;  }
   if ($nota_final_A2_L2b >= $comparativo_formato_3) { $alfabetico_final_A2_L2b = $alfabetico_formato_3;  }
   if ($nota_final_A2_L2b >= $comparativo_formato_4) { $alfabetico_final_A2_L2b = $alfabetico_formato_4;  }
   if ($nota_final_A2_L2b >= $comparativo_formato_5) { $alfabetico_final_A2_L2b = $alfabetico_formato_5;  }
   if ($nota_final_A2_L2b >= $comparativo_formato_6) { $alfabetico_final_A2_L2b = $alfabetico_formato_6;  }
   if ($nota_final_A2_L2b >= $comparativo_formato_7) { $alfabetico_final_A2_L2b = $alfabetico_formato_7;  }
   if ($nota_final_A2_L2b >= $comparativo_formato_8) { $alfabetico_final_A2_L2b = $alfabetico_formato_8;  }
   if ($nota_final_A2_L2b >= $comparativo_formato_9) { $alfabetico_final_A2_L2b = $alfabetico_formato_9;  }
   if ($nota_final_A2_L2b >= $comparativo_formato_10) { $alfabetico_final_A2_L2b = $alfabetico_formato_10;  }
   if ($nota_final_A2_L2b >= $comparativo_formato_11) { $alfabetico_final_A2_L2b = $alfabetico_formato_11;  }
   if ($nota_final_A2_L2b >= $comparativo_formato_12) { $alfabetico_final_A2_L2b = $alfabetico_formato_12;  }
   $nota_final_A2_L2b_print = $alfabetico_final_A2_L2b; } /* cierre alfabetico */

if ($row_datos_controlasign['b_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A2_L2b >= $comparativo_formato_1) { $literal_final_A2_L2b = $literal_formato_1;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_2) { $literal_final_A2_L2b = $literal_formato_2;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_3) { $literal_final_A2_L2b = $literal_formato_3;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_4) { $literal_final_A2_L2b = $literal_formato_4;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_5) { $literal_final_A2_L2b = $literal_formato_5;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_6) { $literal_final_A2_L2b = $literal_formato_6;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_7) { $literal_final_A2_L2b = $literal_formato_7;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_8) { $literal_final_A2_L2b = $literal_formato_8;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_9) { $literal_final_A2_L2b = $literal_formato_9;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_10) { $literal_final_A2_L2b = $literal_formato_10;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_11) { $literal_final_A2_L2b = $literal_formato_11;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_12) { $literal_final_A2_L2b = $literal_formato_12;  } 
  $nota_final_A2_L2b_print = $literal_final_A2_L2b; } /* cierre literal */

  if ($row_datos_controlasign['b_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A2_L2b >= $comparativo_formato_1) { $cualitativa_final_A2_L2b = $cualitativa_formato_1;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_2) { $cualitativa_final_A2_L2b = $cualitativa_formato_2;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_3) { $cualitativa_final_A2_L2b = $cualitativa_formato_3;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_4) { $cualitativa_final_A2_L2b = $cualitativa_formato_4;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_5) { $cualitativa_final_A2_L2b = $cualitativa_formato_5;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_6) { $cualitativa_final_A2_L2b = $cualitativa_formato_6;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_7) { $cualitativa_final_A2_L2b = $cualitativa_formato_7;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_8) { $cualitativa_final_A2_L2b = $cualitativa_formato_8;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_9) { $cualitativa_final_A2_L2b = $cualitativa_formato_9;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_10) { $cualitativa_final_A2_L2b = $cualitativa_formato_10;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_11) { $cualitativa_final_A2_L2b = $cualitativa_formato_11;  }
  if ($nota_final_A2_L2b >= $comparativo_formato_12) { $cualitativa_final_A2_L2b = $cualitativa_formato_12;  } 
  $nota_final_A2_L2b_print = $cualitativa_final_A2_L2b; } /* cierre cualitativo */

if ($nota_final_A2_L2 == '' ) {
$nota_final_A2_L2b_print = " ";
}
echo $nota_final_A2_L2b_print;
        ?>   </td>
      <td BGCOLOR="<?php echo $color2;?>" <?php if
      ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> >
      <?php $nota_final_A3_L2b =number_format($nota_final_A3_L2_redon1); 

if ($row_datos_controlasign['c_convertir'] == 1 ) {  /* numerico */
       $nota_final_A3_L2b_print = $nota_final_A3_L2b;
} /* cierre numerico */
if ($row_datos_controlasign['c_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A3_L2b >= $comparativo_formato_1) { $alfabetico_final_A3_L2b = $alfabetico_formato_1;  }
   if ($nota_final_A3_L2b >= $comparativo_formato_2) { $alfabetico_final_A3_L2b = $alfabetico_formato_2;  }
   if ($nota_final_A3_L2b >= $comparativo_formato_3) { $alfabetico_final_A3_L2b = $alfabetico_formato_3;  }
   if ($nota_final_A3_L2b >= $comparativo_formato_4) { $alfabetico_final_A3_L2b = $alfabetico_formato_4;  }
   if ($nota_final_A3_L2b >= $comparativo_formato_5) { $alfabetico_final_A3_L2b = $alfabetico_formato_5;  }
   if ($nota_final_A3_L2b >= $comparativo_formato_6) { $alfabetico_final_A3_L2b = $alfabetico_formato_6;  }
   if ($nota_final_A3_L2b >= $comparativo_formato_7) { $alfabetico_final_A3_L2b = $alfabetico_formato_7;  }
   if ($nota_final_A3_L2b >= $comparativo_formato_8) { $alfabetico_final_A3_L2b = $alfabetico_formato_8;  }
   if ($nota_final_A3_L2b >= $comparativo_formato_9) { $alfabetico_final_A3_L2b = $alfabetico_formato_9;  }
   if ($nota_final_A3_L2b >= $comparativo_formato_10) { $alfabetico_final_A3_L2b = $alfabetico_formato_10;  }
   if ($nota_final_A3_L2b >= $comparativo_formato_11) { $alfabetico_final_A3_L2b = $alfabetico_formato_11;  }
   if ($nota_final_A3_L2b >= $comparativo_formato_12) { $alfabetico_final_A3_L2b = $alfabetico_formato_12;  }
   $nota_final_A3_L2b_print = $alfabetico_final_A3_L2b; } /* cierre alfabetico */

if ($row_datos_controlasign['c_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A3_L2b >= $comparativo_formato_1) { $literal_final_A3_L2b = $literal_formato_1;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_2) { $literal_final_A3_L2b = $literal_formato_2;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_3) { $literal_final_A3_L2b = $literal_formato_3;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_4) { $literal_final_A3_L2b = $literal_formato_4;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_5) { $literal_final_A3_L2b = $literal_formato_5;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_6) { $literal_final_A3_L2b = $literal_formato_6;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_7) { $literal_final_A3_L2b = $literal_formato_7;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_8) { $literal_final_A3_L2b = $literal_formato_8;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_9) { $literal_final_A3_L2b = $literal_formato_9;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_10) { $literal_final_A3_L2b = $literal_formato_10;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_11) { $literal_final_A3_L2b = $literal_formato_11;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_12) { $literal_final_A3_L2b = $literal_formato_12;  } 
  $nota_final_A3_L2b_print = $literal_final_A3_L2b; } /* cierre literal */

  if ($row_datos_controlasign['c_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A3_L2b >= $comparativo_formato_1) { $cualitativa_final_A3_L2b = $cualitativa_formato_1;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_2) { $cualitativa_final_A3_L2b = $cualitativa_formato_2;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_3) { $cualitativa_final_A3_L2b = $cualitativa_formato_3;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_4) { $cualitativa_final_A3_L2b = $cualitativa_formato_4;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_5) { $cualitativa_final_A3_L2b = $cualitativa_formato_5;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_6) { $cualitativa_final_A3_L2b = $cualitativa_formato_6;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_7) { $cualitativa_final_A3_L2b = $cualitativa_formato_7;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_8) { $cualitativa_final_A3_L2b = $cualitativa_formato_8;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_9) { $cualitativa_final_A3_L2b = $cualitativa_formato_9;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_10) { $cualitativa_final_A3_L2b = $cualitativa_formato_10;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_11) { $cualitativa_final_A3_L2b = $cualitativa_formato_11;  }
  if ($nota_final_A3_L2b >= $comparativo_formato_12) { $cualitativa_final_A3_L2b = $cualitativa_formato_12;  } 
  $nota_final_A3_L2b_print = $cualitativa_final_A3_L2b; } /* cierre cualitativo */

if ($nota_final_A3_L2 == '' ) {
$nota_final_A3_L2b_print = " ";
}
echo $nota_final_A3_L2b_print;
        ?> </td>
      <td BGCOLOR="<?php echo $color2;?>" <?php if
      ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> >
     <?php $nota_final_A4_L2b =number_format($nota_final_A4_L2_redon1); 

if ($row_datos_controlasign['d_convertir'] == 1 ) {  /* numerico */
       $nota_final_A4_L2b_print = $nota_final_A4_L2b;
} /* cierre numerico */
if ($row_datos_controlasign['d_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A4_L2b >= $comparativo_formato_1) { $alfabetico_final_A4_L2b = $alfabetico_formato_1;  }
   if ($nota_final_A4_L2b >= $comparativo_formato_2) { $alfabetico_final_A4_L2b = $alfabetico_formato_2;  }
   if ($nota_final_A4_L2b >= $comparativo_formato_3) { $alfabetico_final_A4_L2b = $alfabetico_formato_3;  }
   if ($nota_final_A4_L2b >= $comparativo_formato_4) { $alfabetico_final_A4_L2b = $alfabetico_formato_4;  }
   if ($nota_final_A4_L2b >= $comparativo_formato_5) { $alfabetico_final_A4_L2b = $alfabetico_formato_5;  }
   if ($nota_final_A4_L2b >= $comparativo_formato_6) { $alfabetico_final_A4_L2b = $alfabetico_formato_6;  }
   if ($nota_final_A4_L2b >= $comparativo_formato_7) { $alfabetico_final_A4_L2b = $alfabetico_formato_7;  }
   if ($nota_final_A4_L2b >= $comparativo_formato_8) { $alfabetico_final_A4_L2b = $alfabetico_formato_8;  }
   if ($nota_final_A4_L2b >= $comparativo_formato_9) { $alfabetico_final_A4_L2b = $alfabetico_formato_9;  }
   if ($nota_final_A4_L2b >= $comparativo_formato_10) { $alfabetico_final_A4_L2b = $alfabetico_formato_10;  }
   if ($nota_final_A4_L2b >= $comparativo_formato_11) { $alfabetico_final_A4_L2b = $alfabetico_formato_11;  }
   if ($nota_final_A4_L2b >= $comparativo_formato_12) { $alfabetico_final_A4_L2b = $alfabetico_formato_12;  }
   $nota_final_A4_L2b_print = $alfabetico_final_A4_L2b; } /* cierre alfabetico */

if ($row_datos_controlasign['d_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A4_L2b >= $comparativo_formato_1) { $literal_final_A4_L2b = $literal_formato_1;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_2) { $literal_final_A4_L2b = $literal_formato_2;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_3) { $literal_final_A4_L2b = $literal_formato_3;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_4) { $literal_final_A4_L2b = $literal_formato_4;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_5) { $literal_final_A4_L2b = $literal_formato_5;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_6) { $literal_final_A4_L2b = $literal_formato_6;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_7) { $literal_final_A4_L2b = $literal_formato_7;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_8) { $literal_final_A4_L2b = $literal_formato_8;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_9) { $literal_final_A4_L2b = $literal_formato_9;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_10) { $literal_final_A4_L2b = $literal_formato_10;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_11) { $literal_final_A4_L2b = $literal_formato_11;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_12) { $literal_final_A4_L2b = $literal_formato_12;  } 
  $nota_final_A4_L2b_print = $literal_final_A4_L2b; } /* cierre literal */

  if ($row_datos_controlasign['d_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A4_L2b >= $comparativo_formato_1) { $cualitativa_final_A4_L2b = $cualitativa_formato_1;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_2) { $cualitativa_final_A4_L2b = $cualitativa_formato_2;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_3) { $cualitativa_final_A4_L2b = $cualitativa_formato_3;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_4) { $cualitativa_final_A4_L2b = $cualitativa_formato_4;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_5) { $cualitativa_final_A4_L2b = $cualitativa_formato_5;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_6) { $cualitativa_final_A4_L2b = $cualitativa_formato_6;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_7) { $cualitativa_final_A4_L2b = $cualitativa_formato_7;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_8) { $cualitativa_final_A4_L2b = $cualitativa_formato_8;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_9) { $cualitativa_final_A4_L2b = $cualitativa_formato_9;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_10) { $cualitativa_final_A4_L2b = $cualitativa_formato_10;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_11) { $cualitativa_final_A4_L2b = $cualitativa_formato_11;  }
  if ($nota_final_A4_L2b >= $comparativo_formato_12) { $cualitativa_final_A4_L2b = $cualitativa_formato_12;  } 
  $nota_final_A4_L2b_print = $cualitativa_final_A4_L2b; } /* cierre cualitativo */

if ($nota_final_A4_L2 == '' ) {
$nota_final_A4_L2b_print = " ";
}
echo $nota_final_A4_L2b_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color2;?>" <?php if
      ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> >
     <?php $nota_final_A5_L2b =number_format($nota_final_A5_L2_redon1); 

if ($row_datos_controlasign['e_convertir'] == 1 ) {  /* numerico */
       $nota_final_A5_L2b_print = $nota_final_A5_L2b;
} /* cierre numerico */
if ($row_datos_controlasign['e_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A5_L2b >= $comparativo_formato_1) { $alfabetico_final_A5_L2b = $alfabetico_formato_1;  }
   if ($nota_final_A5_L2b >= $comparativo_formato_2) { $alfabetico_final_A5_L2b = $alfabetico_formato_2;  }
   if ($nota_final_A5_L2b >= $comparativo_formato_3) { $alfabetico_final_A5_L2b = $alfabetico_formato_3;  }
   if ($nota_final_A5_L2b >= $comparativo_formato_4) { $alfabetico_final_A5_L2b = $alfabetico_formato_4;  }
   if ($nota_final_A5_L2b >= $comparativo_formato_5) { $alfabetico_final_A5_L2b = $alfabetico_formato_5;  }
   if ($nota_final_A5_L2b >= $comparativo_formato_6) { $alfabetico_final_A5_L2b = $alfabetico_formato_6;  }
   if ($nota_final_A5_L2b >= $comparativo_formato_7) { $alfabetico_final_A5_L2b = $alfabetico_formato_7;  }
   if ($nota_final_A5_L2b >= $comparativo_formato_8) { $alfabetico_final_A5_L2b = $alfabetico_formato_8;  }
   if ($nota_final_A5_L2b >= $comparativo_formato_9) { $alfabetico_final_A5_L2b = $alfabetico_formato_9;  }
   if ($nota_final_A5_L2b >= $comparativo_formato_10) { $alfabetico_final_A5_L2b = $alfabetico_formato_10;  }
   if ($nota_final_A5_L2b >= $comparativo_formato_11) { $alfabetico_final_A5_L2b = $alfabetico_formato_11;  }
   if ($nota_final_A5_L2b >= $comparativo_formato_12) { $alfabetico_final_A5_L2b = $alfabetico_formato_12;  }
   $nota_final_A5_L2b_print = $alfabetico_final_A5_L2b; } /* cierre alfabetico */

if ($row_datos_controlasign['e_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A5_L2b >= $comparativo_formato_1) { $literal_final_A5_L2b = $literal_formato_1;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_2) { $literal_final_A5_L2b = $literal_formato_2;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_3) { $literal_final_A5_L2b = $literal_formato_3;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_4) { $literal_final_A5_L2b = $literal_formato_4;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_5) { $literal_final_A5_L2b = $literal_formato_5;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_6) { $literal_final_A5_L2b = $literal_formato_6;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_7) { $literal_final_A5_L2b = $literal_formato_7;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_8) { $literal_final_A5_L2b = $literal_formato_8;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_9) { $literal_final_A5_L2b = $literal_formato_9;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_10) { $literal_final_A5_L2b = $literal_formato_10;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_11) { $literal_final_A5_L2b = $literal_formato_11;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_12) { $literal_final_A5_L2b = $literal_formato_12;  } 
  $nota_final_A5_L2b_print = $literal_final_A5_L2b; } /* cierre literal */

  if ($row_datos_controlasign['e_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A5_L2b >= $comparativo_formato_1) { $cualitativa_final_A5_L2b = $cualitativa_formato_1;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_2) { $cualitativa_final_A5_L2b = $cualitativa_formato_2;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_3) { $cualitativa_final_A5_L2b = $cualitativa_formato_3;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_4) { $cualitativa_final_A5_L2b = $cualitativa_formato_4;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_5) { $cualitativa_final_A5_L2b = $cualitativa_formato_5;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_6) { $cualitativa_final_A5_L2b = $cualitativa_formato_6;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_7) { $cualitativa_final_A5_L2b = $cualitativa_formato_7;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_8) { $cualitativa_final_A5_L2b = $cualitativa_formato_8;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_9) { $cualitativa_final_A5_L2b = $cualitativa_formato_9;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_10) { $cualitativa_final_A5_L2b = $cualitativa_formato_10;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_11) { $cualitativa_final_A5_L2b = $cualitativa_formato_11;  }
  if ($nota_final_A5_L2b >= $comparativo_formato_12) { $cualitativa_final_A5_L2b = $cualitativa_formato_12;  } 
  $nota_final_A5_L2b_print = $cualitativa_final_A5_L2b; } /* cierre cualitativo */

if ($nota_final_A5_L2 == '' ) {
$nota_final_A5_L2b_print = " ";
}
echo $nota_final_A5_L2b_print;
        ?> </td>
      <td BGCOLOR="<?php echo $color2;?>" <?php if
      ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> >
       <?php $nota_final_A6_L2b =number_format($nota_final_A6_L2_redon1); 

if ($row_datos_controlasign['f_convertir'] == 1 ) {  /* numerico */
       $nota_final_A6_L2b_print = $nota_final_A6_L2b;
} /* cierre numerico */
if ($row_datos_controlasign['f_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A6_L2b >= $comparativo_formato_1) { $alfabetico_final_A6_L2b = $alfabetico_formato_1;  }
   if ($nota_final_A6_L2b >= $comparativo_formato_2) { $alfabetico_final_A6_L2b = $alfabetico_formato_2;  }
   if ($nota_final_A6_L2b >= $comparativo_formato_3) { $alfabetico_final_A6_L2b = $alfabetico_formato_3;  }
   if ($nota_final_A6_L2b >= $comparativo_formato_4) { $alfabetico_final_A6_L2b = $alfabetico_formato_4;  }
   if ($nota_final_A6_L2b >= $comparativo_formato_5) { $alfabetico_final_A6_L2b = $alfabetico_formato_5;  }
   if ($nota_final_A6_L2b >= $comparativo_formato_6) { $alfabetico_final_A6_L2b = $alfabetico_formato_6;  }
   if ($nota_final_A6_L2b >= $comparativo_formato_7) { $alfabetico_final_A6_L2b = $alfabetico_formato_7;  }
   if ($nota_final_A6_L2b >= $comparativo_formato_8) { $alfabetico_final_A6_L2b = $alfabetico_formato_8;  }
   if ($nota_final_A6_L2b >= $comparativo_formato_9) { $alfabetico_final_A6_L2b = $alfabetico_formato_9;  }
   if ($nota_final_A6_L2b >= $comparativo_formato_10) { $alfabetico_final_A6_L2b = $alfabetico_formato_10;  }
   if ($nota_final_A6_L2b >= $comparativo_formato_11) { $alfabetico_final_A6_L2b = $alfabetico_formato_11;  }
   if ($nota_final_A6_L2b >= $comparativo_formato_12) { $alfabetico_final_A6_L2b = $alfabetico_formato_12;  }
   $nota_final_A6_L2b_print = $alfabetico_final_A6_L2b; } /* cierre alfabetico */

if ($row_datos_controlasign['f_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A6_L2b >= $comparativo_formato_1) { $literal_final_A6_L2b = $literal_formato_1;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_2) { $literal_final_A6_L2b = $literal_formato_2;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_3) { $literal_final_A6_L2b = $literal_formato_3;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_4) { $literal_final_A6_L2b = $literal_formato_4;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_5) { $literal_final_A6_L2b = $literal_formato_5;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_6) { $literal_final_A6_L2b = $literal_formato_6;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_7) { $literal_final_A6_L2b = $literal_formato_7;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_8) { $literal_final_A6_L2b = $literal_formato_8;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_9) { $literal_final_A6_L2b = $literal_formato_9;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_10) { $literal_final_A6_L2b = $literal_formato_10;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_11) { $literal_final_A6_L2b = $literal_formato_11;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_12) { $literal_final_A6_L2b = $literal_formato_12;  } 
  $nota_final_A6_L2b_print = $literal_final_A6_L2b; } /* cierre literal */

  if ($row_datos_controlasign['f_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A6_L2b >= $comparativo_formato_1) { $cualitativa_final_A6_L2b = $cualitativa_formato_1;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_2) { $cualitativa_final_A6_L2b = $cualitativa_formato_2;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_3) { $cualitativa_final_A6_L2b = $cualitativa_formato_3;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_4) { $cualitativa_final_A6_L2b = $cualitativa_formato_4;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_5) { $cualitativa_final_A6_L2b = $cualitativa_formato_5;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_6) { $cualitativa_final_A6_L2b = $cualitativa_formato_6;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_7) { $cualitativa_final_A6_L2b = $cualitativa_formato_7;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_8) { $cualitativa_final_A6_L2b = $cualitativa_formato_8;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_9) { $cualitativa_final_A6_L2b = $cualitativa_formato_9;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_10) { $cualitativa_final_A6_L2b = $cualitativa_formato_10;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_11) { $cualitativa_final_A6_L2b = $cualitativa_formato_11;  }
  if ($nota_final_A6_L2b >= $comparativo_formato_12) { $cualitativa_final_A6_L2b = $cualitativa_formato_12;  } 
  $nota_final_A6_L2b_print = $cualitativa_final_A6_L2b; } /* cierre cualitativo */

if ($nota_final_A6_L2 == '' ) {
$nota_final_A6_L2b_print = " ";
}
echo $nota_final_A6_L2b_print;
        ?> </td>
      <td BGCOLOR="<?php echo $color2;?>" <?php if
      ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> >
       <?php $nota_final_A7_L2b =number_format($nota_final_A7_L2_redon1); 

if ($row_datos_controlasign['g_convertir'] == 1 ) {  /* numerico */
       $nota_final_A7_L2b_print = $nota_final_A7_L2b;
} /* cierre numerico */
if ($row_datos_controlasign['g_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A7_L2b >= $comparativo_formato_1) { $alfabetico_final_A7_L2b = $alfabetico_formato_1;  }
   if ($nota_final_A7_L2b >= $comparativo_formato_2) { $alfabetico_final_A7_L2b = $alfabetico_formato_2;  }
   if ($nota_final_A7_L2b >= $comparativo_formato_3) { $alfabetico_final_A7_L2b = $alfabetico_formato_3;  }
   if ($nota_final_A7_L2b >= $comparativo_formato_4) { $alfabetico_final_A7_L2b = $alfabetico_formato_4;  }
   if ($nota_final_A7_L2b >= $comparativo_formato_5) { $alfabetico_final_A7_L2b = $alfabetico_formato_5;  }
   if ($nota_final_A7_L2b >= $comparativo_formato_6) { $alfabetico_final_A7_L2b = $alfabetico_formato_6;  }
   if ($nota_final_A7_L2b >= $comparativo_formato_7) { $alfabetico_final_A7_L2b = $alfabetico_formato_7;  }
   if ($nota_final_A7_L2b >= $comparativo_formato_8) { $alfabetico_final_A7_L2b = $alfabetico_formato_8;  }
   if ($nota_final_A7_L2b >= $comparativo_formato_9) { $alfabetico_final_A7_L2b = $alfabetico_formato_9;  }
   if ($nota_final_A7_L2b >= $comparativo_formato_10) { $alfabetico_final_A7_L2b = $alfabetico_formato_10;  }
   if ($nota_final_A7_L2b >= $comparativo_formato_11) { $alfabetico_final_A7_L2b = $alfabetico_formato_11;  }
   if ($nota_final_A7_L2b >= $comparativo_formato_12) { $alfabetico_final_A7_L2b = $alfabetico_formato_12;  }
   $nota_final_A7_L2b_print = $alfabetico_final_A7_L2b; } /* cierre alfabetico */

if ($row_datos_controlasign['g_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A7_L2b >= $comparativo_formato_1) { $literal_final_A7_L2b = $literal_formato_1;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_2) { $literal_final_A7_L2b = $literal_formato_2;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_3) { $literal_final_A7_L2b = $literal_formato_3;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_4) { $literal_final_A7_L2b = $literal_formato_4;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_5) { $literal_final_A7_L2b = $literal_formato_5;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_6) { $literal_final_A7_L2b = $literal_formato_6;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_7) { $literal_final_A7_L2b = $literal_formato_7;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_8) { $literal_final_A7_L2b = $literal_formato_8;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_9) { $literal_final_A7_L2b = $literal_formato_9;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_10) { $literal_final_A7_L2b = $literal_formato_10;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_11) { $literal_final_A7_L2b = $literal_formato_11;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_12) { $literal_final_A7_L2b = $literal_formato_12;  } 
  $nota_final_A7_L2b_print = $literal_final_A7_L2b; } /* cierre literal */

  if ($row_datos_controlasign['g_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A7_L2b >= $comparativo_formato_1) { $cualitativa_final_A7_L2b = $cualitativa_formato_1;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_2) { $cualitativa_final_A7_L2b = $cualitativa_formato_2;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_3) { $cualitativa_final_A7_L2b = $cualitativa_formato_3;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_4) { $cualitativa_final_A7_L2b = $cualitativa_formato_4;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_5) { $cualitativa_final_A7_L2b = $cualitativa_formato_5;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_6) { $cualitativa_final_A7_L2b = $cualitativa_formato_6;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_7) { $cualitativa_final_A7_L2b = $cualitativa_formato_7;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_8) { $cualitativa_final_A7_L2b = $cualitativa_formato_8;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_9) { $cualitativa_final_A7_L2b = $cualitativa_formato_9;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_10) { $cualitativa_final_A7_L2b = $cualitativa_formato_10;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_11) { $cualitativa_final_A7_L2b = $cualitativa_formato_11;  }
  if ($nota_final_A7_L2b >= $comparativo_formato_12) { $cualitativa_final_A7_L2b = $cualitativa_formato_12;  } 
  $nota_final_A7_L2b_print = $cualitativa_final_A7_L2b; } /* cierre cualitativo */

if ($nota_final_A7_L2 == '' ) {
$nota_final_A7_L2b_print = " ";
}
echo $nota_final_A7_L2b_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color2;?>" <?php if
      ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> >
     <?php $nota_final_A8_L2b =number_format($nota_final_A8_L2_redon1); 

if ($row_datos_controlasign['h_convertir'] == 1 ) {  /* numerico */
       $nota_final_A8_L2b_print = $nota_final_A8_L2b;
} /* cierre numerico */
if ($row_datos_controlasign['h_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A8_L2b >= $comparativo_formato_1) { $alfabetico_final_A8_L2b = $alfabetico_formato_1;  }
   if ($nota_final_A8_L2b >= $comparativo_formato_2) { $alfabetico_final_A8_L2b = $alfabetico_formato_2;  }
   if ($nota_final_A8_L2b >= $comparativo_formato_3) { $alfabetico_final_A8_L2b = $alfabetico_formato_3;  }
   if ($nota_final_A8_L2b >= $comparativo_formato_4) { $alfabetico_final_A8_L2b = $alfabetico_formato_4;  }
   if ($nota_final_A8_L2b >= $comparativo_formato_5) { $alfabetico_final_A8_L2b = $alfabetico_formato_5;  }
   if ($nota_final_A8_L2b >= $comparativo_formato_6) { $alfabetico_final_A8_L2b = $alfabetico_formato_6;  }
   if ($nota_final_A8_L2b >= $comparativo_formato_7) { $alfabetico_final_A8_L2b = $alfabetico_formato_7;  }
   if ($nota_final_A8_L2b >= $comparativo_formato_8) { $alfabetico_final_A8_L2b = $alfabetico_formato_8;  }
   if ($nota_final_A8_L2b >= $comparativo_formato_9) { $alfabetico_final_A8_L2b = $alfabetico_formato_9;  }
   if ($nota_final_A8_L2b >= $comparativo_formato_10) { $alfabetico_final_A8_L2b = $alfabetico_formato_10;  }
   if ($nota_final_A8_L2b >= $comparativo_formato_11) { $alfabetico_final_A8_L2b = $alfabetico_formato_11;  }
   if ($nota_final_A8_L2b >= $comparativo_formato_12) { $alfabetico_final_A8_L2b = $alfabetico_formato_12;  }
   $nota_final_A8_L2b_print = $alfabetico_final_A8_L2b; } /* cierre alfabetico */

if ($row_datos_controlasign['h_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A8_L2b >= $comparativo_formato_1) { $literal_final_A8_L2b = $literal_formato_1;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_2) { $literal_final_A8_L2b = $literal_formato_2;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_3) { $literal_final_A8_L2b = $literal_formato_3;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_4) { $literal_final_A8_L2b = $literal_formato_4;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_5) { $literal_final_A8_L2b = $literal_formato_5;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_6) { $literal_final_A8_L2b = $literal_formato_6;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_7) { $literal_final_A8_L2b = $literal_formato_7;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_8) { $literal_final_A8_L2b = $literal_formato_8;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_9) { $literal_final_A8_L2b = $literal_formato_9;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_10) { $literal_final_A8_L2b = $literal_formato_10;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_11) { $literal_final_A8_L2b = $literal_formato_11;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_12) { $literal_final_A8_L2b = $literal_formato_12;  } 
  $nota_final_A8_L2b_print = $literal_final_A8_L2b; } /* cierre literal */

  if ($row_datos_controlasign['h_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A8_L2b >= $comparativo_formato_1) { $cualitativa_final_A8_L2b = $cualitativa_formato_1;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_2) { $cualitativa_final_A8_L2b = $cualitativa_formato_2;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_3) { $cualitativa_final_A8_L2b = $cualitativa_formato_3;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_4) { $cualitativa_final_A8_L2b = $cualitativa_formato_4;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_5) { $cualitativa_final_A8_L2b = $cualitativa_formato_5;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_6) { $cualitativa_final_A8_L2b = $cualitativa_formato_6;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_7) { $cualitativa_final_A8_L2b = $cualitativa_formato_7;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_8) { $cualitativa_final_A8_L2b = $cualitativa_formato_8;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_9) { $cualitativa_final_A8_L2b = $cualitativa_formato_9;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_10) { $cualitativa_final_A8_L2b = $cualitativa_formato_10;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_11) { $cualitativa_final_A8_L2b = $cualitativa_formato_11;  }
  if ($nota_final_A8_L2b >= $comparativo_formato_12) { $cualitativa_final_A8_L2b = $cualitativa_formato_12;  } 
  $nota_final_A8_L2b_print = $cualitativa_final_A8_L2b; } /* cierre cualitativo */

if ($nota_final_A8_L2 == '' ) {
$nota_final_A8_L2b_print = " ";
}
echo $nota_final_A8_L2b_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color2;?>" <?php if
      ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> >
       <?php $nota_final_A9_L2b =number_format($nota_final_A9_L2_redon1); 

if ($row_datos_controlasign['i_convertir'] == 1 ) {  /* numerico */
       $nota_final_A9_L2b_print = $nota_final_A9_L2b;
} /* cierre numerico */
if ($row_datos_controlasign['i_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A9_L2b >= $comparativo_formato_1) { $alfabetico_final_A9_L2b = $alfabetico_formato_1;  }
   if ($nota_final_A9_L2b >= $comparativo_formato_2) { $alfabetico_final_A9_L2b = $alfabetico_formato_2;  }
   if ($nota_final_A9_L2b >= $comparativo_formato_3) { $alfabetico_final_A9_L2b = $alfabetico_formato_3;  }
   if ($nota_final_A9_L2b >= $comparativo_formato_4) { $alfabetico_final_A9_L2b = $alfabetico_formato_4;  }
   if ($nota_final_A9_L2b >= $comparativo_formato_5) { $alfabetico_final_A9_L2b = $alfabetico_formato_5;  }
   if ($nota_final_A9_L2b >= $comparativo_formato_6) { $alfabetico_final_A9_L2b = $alfabetico_formato_6;  }
   if ($nota_final_A9_L2b >= $comparativo_formato_7) { $alfabetico_final_A9_L2b = $alfabetico_formato_7;  }
   if ($nota_final_A9_L2b >= $comparativo_formato_8) { $alfabetico_final_A9_L2b = $alfabetico_formato_8;  }
   if ($nota_final_A9_L2b >= $comparativo_formato_9) { $alfabetico_final_A9_L2b = $alfabetico_formato_9;  }
   if ($nota_final_A9_L2b >= $comparativo_formato_10) { $alfabetico_final_A9_L2b = $alfabetico_formato_10;  }
   if ($nota_final_A9_L2b >= $comparativo_formato_11) { $alfabetico_final_A9_L2b = $alfabetico_formato_11;  }
   if ($nota_final_A9_L2b >= $comparativo_formato_12) { $alfabetico_final_A9_L2b = $alfabetico_formato_12;  }
   $nota_final_A9_L2b_print = $alfabetico_final_A9_L2b; } /* cierre alfabetico */

if ($row_datos_controlasign['i_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A9_L2b >= $comparativo_formato_1) { $literal_final_A9_L2b = $literal_formato_1;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_2) { $literal_final_A9_L2b = $literal_formato_2;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_3) { $literal_final_A9_L2b = $literal_formato_3;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_4) { $literal_final_A9_L2b = $literal_formato_4;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_5) { $literal_final_A9_L2b = $literal_formato_5;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_6) { $literal_final_A9_L2b = $literal_formato_6;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_7) { $literal_final_A9_L2b = $literal_formato_7;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_8) { $literal_final_A9_L2b = $literal_formato_8;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_9) { $literal_final_A9_L2b = $literal_formato_9;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_10) { $literal_final_A9_L2b = $literal_formato_10;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_11) { $literal_final_A9_L2b = $literal_formato_11;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_12) { $literal_final_A9_L2b = $literal_formato_12;  } 
  $nota_final_A9_L2b_print = $literal_final_A9_L2b; } /* cierre literal */

  if ($row_datos_controlasign['i_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A9_L2b >= $comparativo_formato_1) { $cualitativa_final_A9_L2b = $cualitativa_formato_1;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_2) { $cualitativa_final_A9_L2b = $cualitativa_formato_2;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_3) { $cualitativa_final_A9_L2b = $cualitativa_formato_3;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_4) { $cualitativa_final_A9_L2b = $cualitativa_formato_4;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_5) { $cualitativa_final_A9_L2b = $cualitativa_formato_5;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_6) { $cualitativa_final_A9_L2b = $cualitativa_formato_6;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_7) { $cualitativa_final_A9_L2b = $cualitativa_formato_7;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_8) { $cualitativa_final_A9_L2b = $cualitativa_formato_8;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_9) { $cualitativa_final_A9_L2b = $cualitativa_formato_9;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_10) { $cualitativa_final_A9_L2b = $cualitativa_formato_10;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_11) { $cualitativa_final_A9_L2b = $cualitativa_formato_11;  }
  if ($nota_final_A9_L2b >= $comparativo_formato_12) { $cualitativa_final_A9_L2b = $cualitativa_formato_12;  } 
  $nota_final_A9_L2b_print = $cualitativa_final_A9_L2b; } /* cierre cualitativo */

if ($nota_final_A9_L2 == '' ) {
$nota_final_A9_L2b_print = " ";
}
echo $nota_final_A9_L2b_print;
        ?>   </td>
      <td BGCOLOR="<?php echo $color2;?>" <?php if
      ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> >
     <?php $nota_final_A10_L2b =number_format($nota_final_A10_L2_redon1); 

if ($row_datos_controlasign['j_convertir'] == 1 ) {  /* numerico */
       $nota_final_A10_L2b_print = $nota_final_A10_L2b;
} /* cierre numerico */
if ($row_datos_controlasign['j_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A10_L2b >= $comparativo_formato_1) { $alfabetico_final_A10_L2b = $alfabetico_formato_1;  }
   if ($nota_final_A10_L2b >= $comparativo_formato_2) { $alfabetico_final_A10_L2b = $alfabetico_formato_2;  }
   if ($nota_final_A10_L2b >= $comparativo_formato_3) { $alfabetico_final_A10_L2b = $alfabetico_formato_3;  }
   if ($nota_final_A10_L2b >= $comparativo_formato_4) { $alfabetico_final_A10_L2b = $alfabetico_formato_4;  }
   if ($nota_final_A10_L2b >= $comparativo_formato_5) { $alfabetico_final_A10_L2b = $alfabetico_formato_5;  }
   if ($nota_final_A10_L2b >= $comparativo_formato_6) { $alfabetico_final_A10_L2b = $alfabetico_formato_6;  }
   if ($nota_final_A10_L2b >= $comparativo_formato_7) { $alfabetico_final_A10_L2b = $alfabetico_formato_7;  }
   if ($nota_final_A10_L2b >= $comparativo_formato_8) { $alfabetico_final_A10_L2b = $alfabetico_formato_8;  }
   if ($nota_final_A10_L2b >= $comparativo_formato_9) { $alfabetico_final_A10_L2b = $alfabetico_formato_9;  }
   if ($nota_final_A10_L2b >= $comparativo_formato_10) { $alfabetico_final_A10_L2b = $alfabetico_formato_10;  }
   if ($nota_final_A10_L2b >= $comparativo_formato_11) { $alfabetico_final_A10_L2b = $alfabetico_formato_11;  }
   if ($nota_final_A10_L2b >= $comparativo_formato_12) { $alfabetico_final_A10_L2b = $alfabetico_formato_12;  }
   $nota_final_A10_L2b_print = $alfabetico_final_A10_L2b; } /* cierre alfabetico */

if ($row_datos_controlasign['j_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A10_L2b >= $comparativo_formato_1) { $literal_final_A10_L2b = $literal_formato_1;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_2) { $literal_final_A10_L2b = $literal_formato_2;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_3) { $literal_final_A10_L2b = $literal_formato_3;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_4) { $literal_final_A10_L2b = $literal_formato_4;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_5) { $literal_final_A10_L2b = $literal_formato_5;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_6) { $literal_final_A10_L2b = $literal_formato_6;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_7) { $literal_final_A10_L2b = $literal_formato_7;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_8) { $literal_final_A10_L2b = $literal_formato_8;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_9) { $literal_final_A10_L2b = $literal_formato_9;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_10) { $literal_final_A10_L2b = $literal_formato_10;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_11) { $literal_final_A10_L2b = $literal_formato_11;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_12) { $literal_final_A10_L2b = $literal_formato_12;  } 
  $nota_final_A10_L2b_print = $literal_final_A10_L2b; } /* cierre literal */

  if ($row_datos_controlasign['j_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A10_L2b >= $comparativo_formato_1) { $cualitativa_final_A10_L2b = $cualitativa_formato_1;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_2) { $cualitativa_final_A10_L2b = $cualitativa_formato_2;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_3) { $cualitativa_final_A10_L2b = $cualitativa_formato_3;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_4) { $cualitativa_final_A10_L2b = $cualitativa_formato_4;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_5) { $cualitativa_final_A10_L2b = $cualitativa_formato_5;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_6) { $cualitativa_final_A10_L2b = $cualitativa_formato_6;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_7) { $cualitativa_final_A10_L2b = $cualitativa_formato_7;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_8) { $cualitativa_final_A10_L2b = $cualitativa_formato_8;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_9) { $cualitativa_final_A10_L2b = $cualitativa_formato_9;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_10) { $cualitativa_final_A10_L2b = $cualitativa_formato_10;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_11) { $cualitativa_final_A10_L2b = $cualitativa_formato_11;  }
  if ($nota_final_A10_L2b >= $comparativo_formato_12) { $cualitativa_final_A10_L2b = $cualitativa_formato_12;  } 
  $nota_final_A10_L2b_print = $cualitativa_final_A10_L2b; } /* cierre cualitativo */

if ($nota_final_A10_L2 == '' ) {
$nota_final_A10_L2b_print = " ";
}
echo $nota_final_A10_L2b_print;
        ?></td>
      <td BGCOLOR="<?php echo $color2;?>" <?php if
      ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> >
    <?php $nota_final_A11_L2b =number_format($nota_final_A11_L2_redon1); 

if ($row_datos_controlasign['k_convertir'] == 1 ) {  /* numerico */
       $nota_final_A11_L2b_print = $nota_final_A11_L2b;
} /* cierre numerico */
if ($row_datos_controlasign['k_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A11_L2b >= $comparativo_formato_1) { $alfabetico_final_A11_L2b = $alfabetico_formato_1;  }
   if ($nota_final_A11_L2b >= $comparativo_formato_2) { $alfabetico_final_A11_L2b = $alfabetico_formato_2;  }
   if ($nota_final_A11_L2b >= $comparativo_formato_3) { $alfabetico_final_A11_L2b = $alfabetico_formato_3;  }
   if ($nota_final_A11_L2b >= $comparativo_formato_4) { $alfabetico_final_A11_L2b = $alfabetico_formato_4;  }
   if ($nota_final_A11_L2b >= $comparativo_formato_5) { $alfabetico_final_A11_L2b = $alfabetico_formato_5;  }
   if ($nota_final_A11_L2b >= $comparativo_formato_6) { $alfabetico_final_A11_L2b = $alfabetico_formato_6;  }
   if ($nota_final_A11_L2b >= $comparativo_formato_7) { $alfabetico_final_A11_L2b = $alfabetico_formato_7;  }
   if ($nota_final_A11_L2b >= $comparativo_formato_8) { $alfabetico_final_A11_L2b = $alfabetico_formato_8;  }
   if ($nota_final_A11_L2b >= $comparativo_formato_9) { $alfabetico_final_A11_L2b = $alfabetico_formato_9;  }
   if ($nota_final_A11_L2b >= $comparativo_formato_10) { $alfabetico_final_A11_L2b = $alfabetico_formato_10;  }
   if ($nota_final_A11_L2b >= $comparativo_formato_11) { $alfabetico_final_A11_L2b = $alfabetico_formato_11;  }
   if ($nota_final_A11_L2b >= $comparativo_formato_12) { $alfabetico_final_A11_L2b = $alfabetico_formato_12;  }
   $nota_final_A11_L2b_print = $alfabetico_final_A11_L2b; } /* cierre alfabetico */

if ($row_datos_controlasign['k_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A11_L2b >= $comparativo_formato_1) { $literal_final_A11_L2b = $literal_formato_1;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_2) { $literal_final_A11_L2b = $literal_formato_2;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_3) { $literal_final_A11_L2b = $literal_formato_3;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_4) { $literal_final_A11_L2b = $literal_formato_4;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_5) { $literal_final_A11_L2b = $literal_formato_5;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_6) { $literal_final_A11_L2b = $literal_formato_6;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_7) { $literal_final_A11_L2b = $literal_formato_7;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_8) { $literal_final_A11_L2b = $literal_formato_8;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_9) { $literal_final_A11_L2b = $literal_formato_9;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_10) { $literal_final_A11_L2b = $literal_formato_10;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_11) { $literal_final_A11_L2b = $literal_formato_11;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_12) { $literal_final_A11_L2b = $literal_formato_12;  } 
  $nota_final_A11_L2b_print = $literal_final_A11_L2b; } /* cierre literal */

  if ($row_datos_controlasign['k_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A11_L2b >= $comparativo_formato_1) { $cualitativa_final_A11_L2b = $cualitativa_formato_1;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_2) { $cualitativa_final_A11_L2b = $cualitativa_formato_2;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_3) { $cualitativa_final_A11_L2b = $cualitativa_formato_3;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_4) { $cualitativa_final_A11_L2b = $cualitativa_formato_4;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_5) { $cualitativa_final_A11_L2b = $cualitativa_formato_5;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_6) { $cualitativa_final_A11_L2b = $cualitativa_formato_6;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_7) { $cualitativa_final_A11_L2b = $cualitativa_formato_7;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_8) { $cualitativa_final_A11_L2b = $cualitativa_formato_8;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_9) { $cualitativa_final_A11_L2b = $cualitativa_formato_9;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_10) { $cualitativa_final_A11_L2b = $cualitativa_formato_10;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_11) { $cualitativa_final_A11_L2b = $cualitativa_formato_11;  }
  if ($nota_final_A11_L2b >= $comparativo_formato_12) { $cualitativa_final_A11_L2b = $cualitativa_formato_12;  } 
  $nota_final_A11_L2b_print = $cualitativa_final_A11_L2b; } /* cierre cualitativo */

if ($nota_final_A11_L2 == '' ) {
$nota_final_A11_L2b_print = " ";
}
echo $nota_final_A11_L2b_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color2;?>" <?php if
      ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> >
     <?php $nota_final_A12_L2b =number_format($nota_final_A12_L2_redon1); 

if ($row_datos_controlasign['l_convertir'] == 1 ) {  /* numerico */
       $nota_final_A12_L2b_print = $nota_final_A12_L2b;
} /* cierre numerico */
if ($row_datos_controlasign['l_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A12_L2b >= $comparativo_formato_1) { $alfabetico_final_A12_L2b = $alfabetico_formato_1;  }
   if ($nota_final_A12_L2b >= $comparativo_formato_2) { $alfabetico_final_A12_L2b = $alfabetico_formato_2;  }
   if ($nota_final_A12_L2b >= $comparativo_formato_3) { $alfabetico_final_A12_L2b = $alfabetico_formato_3;  }
   if ($nota_final_A12_L2b >= $comparativo_formato_4) { $alfabetico_final_A12_L2b = $alfabetico_formato_4;  }
   if ($nota_final_A12_L2b >= $comparativo_formato_5) { $alfabetico_final_A12_L2b = $alfabetico_formato_5;  }
   if ($nota_final_A12_L2b >= $comparativo_formato_6) { $alfabetico_final_A12_L2b = $alfabetico_formato_6;  }
   if ($nota_final_A12_L2b >= $comparativo_formato_7) { $alfabetico_final_A12_L2b = $alfabetico_formato_7;  }
   if ($nota_final_A12_L2b >= $comparativo_formato_8) { $alfabetico_final_A12_L2b = $alfabetico_formato_8;  }
   if ($nota_final_A12_L2b >= $comparativo_formato_9) { $alfabetico_final_A12_L2b = $alfabetico_formato_9;  }
   if ($nota_final_A12_L2b >= $comparativo_formato_10) { $alfabetico_final_A12_L2b = $alfabetico_formato_10;  }
   if ($nota_final_A12_L2b >= $comparativo_formato_11) { $alfabetico_final_A12_L2b = $alfabetico_formato_11;  }
   if ($nota_final_A12_L2b >= $comparativo_formato_12) { $alfabetico_final_A12_L2b = $alfabetico_formato_12;  }
   $nota_final_A12_L2b_print = $alfabetico_final_A12_L2b; } /* cierre alfabetico */

if ($row_datos_controlasign['l_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A12_L2b >= $comparativo_formato_1) { $literal_final_A12_L2b = $literal_formato_1;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_2) { $literal_final_A12_L2b = $literal_formato_2;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_3) { $literal_final_A12_L2b = $literal_formato_3;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_4) { $literal_final_A12_L2b = $literal_formato_4;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_5) { $literal_final_A12_L2b = $literal_formato_5;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_6) { $literal_final_A12_L2b = $literal_formato_6;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_7) { $literal_final_A12_L2b = $literal_formato_7;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_8) { $literal_final_A12_L2b = $literal_formato_8;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_9) { $literal_final_A12_L2b = $literal_formato_9;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_10) { $literal_final_A12_L2b = $literal_formato_10;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_11) { $literal_final_A12_L2b = $literal_formato_11;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_12) { $literal_final_A12_L2b = $literal_formato_12;  } 
  $nota_final_A12_L2b_print = $literal_final_A12_L2b; } /* cierre literal */

  if ($row_datos_controlasign['l_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A12_L2b >= $comparativo_formato_1) { $cualitativa_final_A12_L2b = $cualitativa_formato_1;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_2) { $cualitativa_final_A12_L2b = $cualitativa_formato_2;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_3) { $cualitativa_final_A12_L2b = $cualitativa_formato_3;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_4) { $cualitativa_final_A12_L2b = $cualitativa_formato_4;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_5) { $cualitativa_final_A12_L2b = $cualitativa_formato_5;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_6) { $cualitativa_final_A12_L2b = $cualitativa_formato_6;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_7) { $cualitativa_final_A12_L2b = $cualitativa_formato_7;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_8) { $cualitativa_final_A12_L2b = $cualitativa_formato_8;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_9) { $cualitativa_final_A12_L2b = $cualitativa_formato_9;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_10) { $cualitativa_final_A12_L2b = $cualitativa_formato_10;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_11) { $cualitativa_final_A12_L2b = $cualitativa_formato_11;  }
  if ($nota_final_A12_L2b >= $comparativo_formato_12) { $cualitativa_final_A12_L2b = $cualitativa_formato_12;  } 
  $nota_final_A12_L2b_print = $cualitativa_final_A12_L2b; } /* cierre cualitativo */

if ($nota_final_A12_L2 == '' ) {
$nota_final_A12_L2b_print = " ";
}
echo $nota_final_A12_L2b_print;
        ?>   </td>
      <td BGCOLOR="<?php echo $color2;?>" <?php if
      ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> >
     <?php $nota_final_A13_L2b =number_format($nota_final_A13_L2_redon1); 

if ($row_datos_controlasign['m_convertir'] == 1 ) {  /* numerico */
       $nota_final_A13_L2b_print = $nota_final_A13_L2b;
} /* cierre numerico */
if ($row_datos_controlasign['m_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A13_L2b >= $comparativo_formato_1) { $alfabetico_final_A13_L2b = $alfabetico_formato_1;  }
   if ($nota_final_A13_L2b >= $comparativo_formato_2) { $alfabetico_final_A13_L2b = $alfabetico_formato_2;  }
   if ($nota_final_A13_L2b >= $comparativo_formato_3) { $alfabetico_final_A13_L2b = $alfabetico_formato_3;  }
   if ($nota_final_A13_L2b >= $comparativo_formato_4) { $alfabetico_final_A13_L2b = $alfabetico_formato_4;  }
   if ($nota_final_A13_L2b >= $comparativo_formato_5) { $alfabetico_final_A13_L2b = $alfabetico_formato_5;  }
   if ($nota_final_A13_L2b >= $comparativo_formato_6) { $alfabetico_final_A13_L2b = $alfabetico_formato_6;  }
   if ($nota_final_A13_L2b >= $comparativo_formato_7) { $alfabetico_final_A13_L2b = $alfabetico_formato_7;  }
   if ($nota_final_A13_L2b >= $comparativo_formato_8) { $alfabetico_final_A13_L2b = $alfabetico_formato_8;  }
   if ($nota_final_A13_L2b >= $comparativo_formato_9) { $alfabetico_final_A13_L2b = $alfabetico_formato_9;  }
   if ($nota_final_A13_L2b >= $comparativo_formato_10) { $alfabetico_final_A13_L2b = $alfabetico_formato_10;  }
   if ($nota_final_A13_L2b >= $comparativo_formato_11) { $alfabetico_final_A13_L2b = $alfabetico_formato_11;  }
   if ($nota_final_A13_L2b >= $comparativo_formato_12) { $alfabetico_final_A13_L2b = $alfabetico_formato_12;  }
   $nota_final_A13_L2b_print = $alfabetico_final_A13_L2b; } /* cierre alfabetico */

if ($row_datos_controlasign['m_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A13_L2b >= $comparativo_formato_1) { $literal_final_A13_L2b = $literal_formato_1;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_2) { $literal_final_A13_L2b = $literal_formato_2;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_3) { $literal_final_A13_L2b = $literal_formato_3;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_4) { $literal_final_A13_L2b = $literal_formato_4;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_5) { $literal_final_A13_L2b = $literal_formato_5;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_6) { $literal_final_A13_L2b = $literal_formato_6;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_7) { $literal_final_A13_L2b = $literal_formato_7;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_8) { $literal_final_A13_L2b = $literal_formato_8;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_9) { $literal_final_A13_L2b = $literal_formato_9;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_10) { $literal_final_A13_L2b = $literal_formato_10;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_11) { $literal_final_A13_L2b = $literal_formato_11;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_12) { $literal_final_A13_L2b = $literal_formato_12;  } 
  $nota_final_A13_L2b_print = $literal_final_A13_L2b; } /* cierre literal */

  if ($row_datos_controlasign['m_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A13_L2b >= $comparativo_formato_1) { $cualitativa_final_A13_L2b = $cualitativa_formato_1;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_2) { $cualitativa_final_A13_L2b = $cualitativa_formato_2;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_3) { $cualitativa_final_A13_L2b = $cualitativa_formato_3;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_4) { $cualitativa_final_A13_L2b = $cualitativa_formato_4;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_5) { $cualitativa_final_A13_L2b = $cualitativa_formato_5;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_6) { $cualitativa_final_A13_L2b = $cualitativa_formato_6;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_7) { $cualitativa_final_A13_L2b = $cualitativa_formato_7;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_8) { $cualitativa_final_A13_L2b = $cualitativa_formato_8;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_9) { $cualitativa_final_A13_L2b = $cualitativa_formato_9;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_10) { $cualitativa_final_A13_L2b = $cualitativa_formato_10;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_11) { $cualitativa_final_A13_L2b = $cualitativa_formato_11;  }
  if ($nota_final_A13_L2b >= $comparativo_formato_12) { $cualitativa_final_A13_L2b = $cualitativa_formato_12;  } 
  $nota_final_A13_L2b_print = $cualitativa_final_A13_L2b; } /* cierre cualitativo */

if ($nota_final_A13_L2 == '' ) {
$nota_final_A13_L2b_print = " ";
}
echo $nota_final_A13_L2b_print;
        ?> </td>
      <td BGCOLOR="<?php echo $color2;?>" <?php if
      ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> >
       <?php $nota_final_A14_L2b =number_format($nota_final_A14_L2_redon1); 

if ($row_datos_controlasign['n_convertir'] == 1 ) {  /* numerico */
       $nota_final_A14_L2b_print = $nota_final_A14_L2b;
} /* cierre numerico */
if ($row_datos_controlasign['n_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A14_L2b >= $comparativo_formato_1) { $alfabetico_final_A14_L2b = $alfabetico_formato_1;  }
   if ($nota_final_A14_L2b >= $comparativo_formato_2) { $alfabetico_final_A14_L2b = $alfabetico_formato_2;  }
   if ($nota_final_A14_L2b >= $comparativo_formato_3) { $alfabetico_final_A14_L2b = $alfabetico_formato_3;  }
   if ($nota_final_A14_L2b >= $comparativo_formato_4) { $alfabetico_final_A14_L2b = $alfabetico_formato_4;  }
   if ($nota_final_A14_L2b >= $comparativo_formato_5) { $alfabetico_final_A14_L2b = $alfabetico_formato_5;  }
   if ($nota_final_A14_L2b >= $comparativo_formato_6) { $alfabetico_final_A14_L2b = $alfabetico_formato_6;  }
   if ($nota_final_A14_L2b >= $comparativo_formato_7) { $alfabetico_final_A14_L2b = $alfabetico_formato_7;  }
   if ($nota_final_A14_L2b >= $comparativo_formato_8) { $alfabetico_final_A14_L2b = $alfabetico_formato_8;  }
   if ($nota_final_A14_L2b >= $comparativo_formato_9) { $alfabetico_final_A14_L2b = $alfabetico_formato_9;  }
   if ($nota_final_A14_L2b >= $comparativo_formato_10) { $alfabetico_final_A14_L2b = $alfabetico_formato_10;  }
   if ($nota_final_A14_L2b >= $comparativo_formato_11) { $alfabetico_final_A14_L2b = $alfabetico_formato_11;  }
   if ($nota_final_A14_L2b >= $comparativo_formato_12) { $alfabetico_final_A14_L2b = $alfabetico_formato_12;  }
   $nota_final_A14_L2b_print = $alfabetico_final_A14_L2b; } /* cierre alfabetico */

if ($row_datos_controlasign['n_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A14_L2b >= $comparativo_formato_1) { $literal_final_A14_L2b = $literal_formato_1;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_2) { $literal_final_A14_L2b = $literal_formato_2;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_3) { $literal_final_A14_L2b = $literal_formato_3;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_4) { $literal_final_A14_L2b = $literal_formato_4;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_5) { $literal_final_A14_L2b = $literal_formato_5;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_6) { $literal_final_A14_L2b = $literal_formato_6;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_7) { $literal_final_A14_L2b = $literal_formato_7;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_8) { $literal_final_A14_L2b = $literal_formato_8;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_9) { $literal_final_A14_L2b = $literal_formato_9;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_10) { $literal_final_A14_L2b = $literal_formato_10;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_11) { $literal_final_A14_L2b = $literal_formato_11;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_12) { $literal_final_A14_L2b = $literal_formato_12;  } 
  $nota_final_A14_L2b_print = $literal_final_A14_L2b; } /* cierre literal */

  if ($row_datos_controlasign['n_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A14_L2b >= $comparativo_formato_1) { $cualitativa_final_A14_L2b = $cualitativa_formato_1;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_2) { $cualitativa_final_A14_L2b = $cualitativa_formato_2;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_3) { $cualitativa_final_A14_L2b = $cualitativa_formato_3;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_4) { $cualitativa_final_A14_L2b = $cualitativa_formato_4;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_5) { $cualitativa_final_A14_L2b = $cualitativa_formato_5;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_6) { $cualitativa_final_A14_L2b = $cualitativa_formato_6;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_7) { $cualitativa_final_A14_L2b = $cualitativa_formato_7;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_8) { $cualitativa_final_A14_L2b = $cualitativa_formato_8;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_9) { $cualitativa_final_A14_L2b = $cualitativa_formato_9;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_10) { $cualitativa_final_A14_L2b = $cualitativa_formato_10;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_11) { $cualitativa_final_A14_L2b = $cualitativa_formato_11;  }
  if ($nota_final_A14_L2b >= $comparativo_formato_12) { $cualitativa_final_A14_L2b = $cualitativa_formato_12;  } 
  $nota_final_A14_L2b_print = $cualitativa_final_A14_L2b; } /* cierre cualitativo */

if ($nota_final_A14_L2 == '' ) {
$nota_final_A14_L2b_print = " ";
}
echo $nota_final_A14_L2b_print;
        ?> </td>
    </tr>

<?php  // ayuda a saber quien tiene mas nota acumulada


if ($row_datos_controlasign['a_suma'] == 1) { $nota_final_A1_L2_redon1_valida = $nota_final_A1_L2_redon1; } else { $nota_final_A1_L2_redon1_valida = 0; }
if ($row_datos_controlasign['b_suma'] == 1) { $nota_final_A2_L2_redon1_valida = $nota_final_A2_L2_redon1; } else { $nota_final_A2_L2_redon1_valida = 0; }
if ($row_datos_controlasign['c_suma'] == 1) { $nota_final_A3_L2_redon1_valida = $nota_final_A3_L2_redon1; } else { $nota_final_A3_L2_redon1_valida = 0; }
if ($row_datos_controlasign['d_suma'] == 1) { $nota_final_A4_L2_redon1_valida = $nota_final_A4_L2_redon1; } else { $nota_final_A4_L2_redon1_valida = 0; }
if ($row_datos_controlasign['e_suma'] == 1) { $nota_final_A5_L2_redon1_valida = $nota_final_A5_L2_redon1; } else { $nota_final_A5_L2_redon1_valida = 0; }
if ($row_datos_controlasign['f_suma'] == 1) { $nota_final_A6_L2_redon1_valida = $nota_final_A6_L2_redon1; } else { $nota_final_A6_L2_redon1_valida = 0; }
if ($row_datos_controlasign['g_suma'] == 1) { $nota_final_A7_L2_redon1_valida = $nota_final_A7_L2_redon1; } else { $nota_final_A7_L2_redon1_valida = 0; }
if ($row_datos_controlasign['h_suma'] == 1) { $nota_final_A8_L2_redon1_valida = $nota_final_A8_L2_redon1; } else { $nota_final_A8_L2_redon1_valida = 0; }
if ($row_datos_controlasign['i_suma'] == 1) { $nota_final_A9_L2_redon1_valida = $nota_final_A9_L2_redon1; } else { $nota_final_A9_L2_redon1_valida = 0; }
if ($row_datos_controlasign['j_suma'] == 1) { $nota_final_A10_L2_redon1_valida = $nota_final_A10_L2_redon1; } else { $nota_final_A10_L2_redon1_valida = 0;}
if ($row_datos_controlasign['k_suma'] == 1) { $nota_final_A11_L2_redon1_valida = $nota_final_A11_L2_redon1; } else { $nota_final_A11_L2_redon1_valida = 0; }
if ($row_datos_controlasign['l_suma'] == 1) { $nota_final_A12_L2_redon1_valida = $nota_final_A12_L2_redon1; } else { $nota_final_A12_L2_redon1_valida = 0; }
if ($row_datos_controlasign['m_suma'] == 1) { $nota_final_A13_L2_redon1_valida = $nota_final_A13_L2_redon1; } else { $nota_final_A13_L2_redon1_valida = 0; }
if ($row_datos_controlasign['n_suma'] == 1) { $nota_final_A14_L2_redon1_valida = $nota_final_A14_L2_redon1; } else { $nota_final_A14_L2_redon1_valida = 0; }


      $nooootaaa_2 = $nota_final_A1_L2_redon1_valida + $nota_final_A2_L2_redon1_valida + $nota_final_A3_L2_redon1_valida + $nota_final_A4_L2_redon1_valida + $nota_final_A5_L2_redon1_valida
                   + $nota_final_A6_L2_redon1_valida + $nota_final_A7_L2_redon1_valida + $nota_final_A8_L2_redon1_valida + $nota_final_A9_L2_redon1_valida + $nota_final_A10_L2_redon1_valida
                   + $nota_final_A11_L2_redon1_valida + $nota_final_A12_L2_redon1_valida + $nota_final_A13_L2_redon1_valida + $nota_final_A14_L2_redon1_valida;



      include("../conectar.php");


$nota_102 = "UPDATE reg_estudiantes
SET nota_2= '$nooootaaa_2'
WHERE id_estud='$id_estxx1'";


$datos_nota_102 = mysqli_query($enlace, $nota_102) or die(mysqli_error());


mysqli_close($enlace);


      ?>





    <tr>
      <th scope="row" BGCOLOR="<?php echo $color3;?>">3°</th>
      <td BGCOLOR="<?php echo $color3;?>" <?php if
      ($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> >


      <?php $nota_final_A1_L3c =number_format($nota_final_A1_L3_redon1); 

if ($row_datos_controlasign['a_convertir'] == 1 ) {  /* numerico */
       $nota_final_A1_L3c_print = $nota_final_A1_L3c;
} /* cierre numerico */
if ($row_datos_controlasign['a_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A1_L3c >= $comparativo_formato_1) { $alfabetico_final_A1_L3c = $alfabetico_formato_1;  }
   if ($nota_final_A1_L3c >= $comparativo_formato_2) { $alfabetico_final_A1_L3c = $alfabetico_formato_2;  }
   if ($nota_final_A1_L3c >= $comparativo_formato_3) { $alfabetico_final_A1_L3c = $alfabetico_formato_3;  }
   if ($nota_final_A1_L3c >= $comparativo_formato_4) { $alfabetico_final_A1_L3c = $alfabetico_formato_4;  }
   if ($nota_final_A1_L3c >= $comparativo_formato_5) { $alfabetico_final_A1_L3c = $alfabetico_formato_5;  }
   if ($nota_final_A1_L3c >= $comparativo_formato_6) { $alfabetico_final_A1_L3c = $alfabetico_formato_6;  }
   if ($nota_final_A1_L3c >= $comparativo_formato_7) { $alfabetico_final_A1_L3c = $alfabetico_formato_7;  }
   if ($nota_final_A1_L3c >= $comparativo_formato_8) { $alfabetico_final_A1_L3c = $alfabetico_formato_8;  }
   if ($nota_final_A1_L3c >= $comparativo_formato_9) { $alfabetico_final_A1_L3c = $alfabetico_formato_9;  }
   if ($nota_final_A1_L3c >= $comparativo_formato_10) { $alfabetico_final_A1_L3c = $alfabetico_formato_10;  }
   if ($nota_final_A1_L3c >= $comparativo_formato_11) { $alfabetico_final_A1_L3c = $alfabetico_formato_11;  }
   if ($nota_final_A1_L3c >= $comparativo_formato_12) { $alfabetico_final_A1_L3c = $alfabetico_formato_12;  }
   $nota_final_A1_L3c_print = $alfabetico_final_A1_L3c; } /* cierre alfabetico */

if ($row_datos_controlasign['a_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A1_L3c >= $comparativo_formato_1) { $literal_final_A1_L3c = $literal_formato_1;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_2) { $literal_final_A1_L3c = $literal_formato_2;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_3) { $literal_final_A1_L3c = $literal_formato_3;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_4) { $literal_final_A1_L3c = $literal_formato_4;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_5) { $literal_final_A1_L3c = $literal_formato_5;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_6) { $literal_final_A1_L3c = $literal_formato_6;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_7) { $literal_final_A1_L3c = $literal_formato_7;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_8) { $literal_final_A1_L3c = $literal_formato_8;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_9) { $literal_final_A1_L3c = $literal_formato_9;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_10) { $literal_final_A1_L3c = $literal_formato_10;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_11) { $literal_final_A1_L3c = $literal_formato_11;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_12) { $literal_final_A1_L3c = $literal_formato_12;  } 
  $nota_final_A1_L3c_print = $literal_final_A1_L3c; } /* cierre literal */

  if ($row_datos_controlasign['a_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A1_L3c >= $comparativo_formato_1) { $cualitativa_final_A1_L3c = $cualitativa_formato_1;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_2) { $cualitativa_final_A1_L3c = $cualitativa_formato_2;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_3) { $cualitativa_final_A1_L3c = $cualitativa_formato_3;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_4) { $cualitativa_final_A1_L3c = $cualitativa_formato_4;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_5) { $cualitativa_final_A1_L3c = $cualitativa_formato_5;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_6) { $cualitativa_final_A1_L3c = $cualitativa_formato_6;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_7) { $cualitativa_final_A1_L3c = $cualitativa_formato_7;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_8) { $cualitativa_final_A1_L3c = $cualitativa_formato_8;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_9) { $cualitativa_final_A1_L3c = $cualitativa_formato_9;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_10) { $cualitativa_final_A1_L3c = $cualitativa_formato_10;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_11) { $cualitativa_final_A1_L3c = $cualitativa_formato_11;  }
  if ($nota_final_A1_L3c >= $comparativo_formato_12) { $cualitativa_final_A1_L3c = $cualitativa_formato_12;  } 
  $nota_final_A1_L3c_print = $cualitativa_final_A1_L3c; } /* cierre cualitativo */

if ($nota_final_A1_L3 == '' ) {
$nota_final_A1_L3c_print = " ";
}
echo $nota_final_A1_L3c_print;
        ?> 




         </td>
      <td BGCOLOR="<?php echo $color3;?>" <?php if
      ($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> >
     <?php $nota_final_A2_L3c =number_format($nota_final_A2_L3_redon1); 

if ($row_datos_controlasign['b_convertir'] == 1 ) {  /* numerico */
       $nota_final_A2_L3c_print = $nota_final_A2_L3c;
} /* cierre numerico */
if ($row_datos_controlasign['b_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A2_L3c >= $comparativo_formato_1) { $alfabetico_final_A2_L3c = $alfabetico_formato_1;  }
   if ($nota_final_A2_L3c >= $comparativo_formato_2) { $alfabetico_final_A2_L3c = $alfabetico_formato_2;  }
   if ($nota_final_A2_L3c >= $comparativo_formato_3) { $alfabetico_final_A2_L3c = $alfabetico_formato_3;  }
   if ($nota_final_A2_L3c >= $comparativo_formato_4) { $alfabetico_final_A2_L3c = $alfabetico_formato_4;  }
   if ($nota_final_A2_L3c >= $comparativo_formato_5) { $alfabetico_final_A2_L3c = $alfabetico_formato_5;  }
   if ($nota_final_A2_L3c >= $comparativo_formato_6) { $alfabetico_final_A2_L3c = $alfabetico_formato_6;  }
   if ($nota_final_A2_L3c >= $comparativo_formato_7) { $alfabetico_final_A2_L3c = $alfabetico_formato_7;  }
   if ($nota_final_A2_L3c >= $comparativo_formato_8) { $alfabetico_final_A2_L3c = $alfabetico_formato_8;  }
   if ($nota_final_A2_L3c >= $comparativo_formato_9) { $alfabetico_final_A2_L3c = $alfabetico_formato_9;  }
   if ($nota_final_A2_L3c >= $comparativo_formato_10) { $alfabetico_final_A2_L3c = $alfabetico_formato_10;  }
   if ($nota_final_A2_L3c >= $comparativo_formato_11) { $alfabetico_final_A2_L3c = $alfabetico_formato_11;  }
   if ($nota_final_A2_L3c >= $comparativo_formato_12) { $alfabetico_final_A2_L3c = $alfabetico_formato_12;  }
   $nota_final_A2_L3c_print = $alfabetico_final_A2_L3c; } /* cierre alfabetico */

if ($row_datos_controlasign['b_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A2_L3c >= $comparativo_formato_1) { $literal_final_A2_L3c = $literal_formato_1;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_2) { $literal_final_A2_L3c = $literal_formato_2;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_3) { $literal_final_A2_L3c = $literal_formato_3;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_4) { $literal_final_A2_L3c = $literal_formato_4;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_5) { $literal_final_A2_L3c = $literal_formato_5;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_6) { $literal_final_A2_L3c = $literal_formato_6;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_7) { $literal_final_A2_L3c = $literal_formato_7;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_8) { $literal_final_A2_L3c = $literal_formato_8;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_9) { $literal_final_A2_L3c = $literal_formato_9;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_10) { $literal_final_A2_L3c = $literal_formato_10;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_11) { $literal_final_A2_L3c = $literal_formato_11;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_12) { $literal_final_A2_L3c = $literal_formato_12;  } 
  $nota_final_A2_L3c_print = $literal_final_A2_L3c; } /* cierre literal */

  if ($row_datos_controlasign['b_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A2_L3c >= $comparativo_formato_1) { $cualitativa_final_A2_L3c = $cualitativa_formato_1;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_2) { $cualitativa_final_A2_L3c = $cualitativa_formato_2;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_3) { $cualitativa_final_A2_L3c = $cualitativa_formato_3;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_4) { $cualitativa_final_A2_L3c = $cualitativa_formato_4;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_5) { $cualitativa_final_A2_L3c = $cualitativa_formato_5;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_6) { $cualitativa_final_A2_L3c = $cualitativa_formato_6;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_7) { $cualitativa_final_A2_L3c = $cualitativa_formato_7;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_8) { $cualitativa_final_A2_L3c = $cualitativa_formato_8;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_9) { $cualitativa_final_A2_L3c = $cualitativa_formato_9;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_10) { $cualitativa_final_A2_L3c = $cualitativa_formato_10;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_11) { $cualitativa_final_A2_L3c = $cualitativa_formato_11;  }
  if ($nota_final_A2_L3c >= $comparativo_formato_12) { $cualitativa_final_A2_L3c = $cualitativa_formato_12;  } 
  $nota_final_A2_L3c_print = $cualitativa_final_A2_L3c; } /* cierre cualitativo */

if ($nota_final_A2_L3 == '' ) {
$nota_final_A2_L3c_print = " ";
}
echo $nota_final_A2_L3c_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color3;?>" <?php if
      ($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> >
      <?php $nota_final_A3_L3c =number_format($nota_final_A3_L3_redon1); 

if ($row_datos_controlasign['c_convertir'] == 1 ) {  /* numerico */
       $nota_final_A3_L3c_print = $nota_final_A3_L3c;
} /* cierre numerico */
if ($row_datos_controlasign['c_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A3_L3c >= $comparativo_formato_1) { $alfabetico_final_A3_L3c = $alfabetico_formato_1;  }
   if ($nota_final_A3_L3c >= $comparativo_formato_2) { $alfabetico_final_A3_L3c = $alfabetico_formato_2;  }
   if ($nota_final_A3_L3c >= $comparativo_formato_3) { $alfabetico_final_A3_L3c = $alfabetico_formato_3;  }
   if ($nota_final_A3_L3c >= $comparativo_formato_4) { $alfabetico_final_A3_L3c = $alfabetico_formato_4;  }
   if ($nota_final_A3_L3c >= $comparativo_formato_5) { $alfabetico_final_A3_L3c = $alfabetico_formato_5;  }
   if ($nota_final_A3_L3c >= $comparativo_formato_6) { $alfabetico_final_A3_L3c = $alfabetico_formato_6;  }
   if ($nota_final_A3_L3c >= $comparativo_formato_7) { $alfabetico_final_A3_L3c = $alfabetico_formato_7;  }
   if ($nota_final_A3_L3c >= $comparativo_formato_8) { $alfabetico_final_A3_L3c = $alfabetico_formato_8;  }
   if ($nota_final_A3_L3c >= $comparativo_formato_9) { $alfabetico_final_A3_L3c = $alfabetico_formato_9;  }
   if ($nota_final_A3_L3c >= $comparativo_formato_10) { $alfabetico_final_A3_L3c = $alfabetico_formato_10;  }
   if ($nota_final_A3_L3c >= $comparativo_formato_11) { $alfabetico_final_A3_L3c = $alfabetico_formato_11;  }
   if ($nota_final_A3_L3c >= $comparativo_formato_12) { $alfabetico_final_A3_L3c = $alfabetico_formato_12;  }
   $nota_final_A3_L3c_print = $alfabetico_final_A3_L3c; } /* cierre alfabetico */

if ($row_datos_controlasign['c_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A3_L3c >= $comparativo_formato_1) { $literal_final_A3_L3c = $literal_formato_1;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_2) { $literal_final_A3_L3c = $literal_formato_2;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_3) { $literal_final_A3_L3c = $literal_formato_3;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_4) { $literal_final_A3_L3c = $literal_formato_4;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_5) { $literal_final_A3_L3c = $literal_formato_5;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_6) { $literal_final_A3_L3c = $literal_formato_6;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_7) { $literal_final_A3_L3c = $literal_formato_7;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_8) { $literal_final_A3_L3c = $literal_formato_8;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_9) { $literal_final_A3_L3c = $literal_formato_9;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_10) { $literal_final_A3_L3c = $literal_formato_10;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_11) { $literal_final_A3_L3c = $literal_formato_11;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_12) { $literal_final_A3_L3c = $literal_formato_12;  } 
  $nota_final_A3_L3c_print = $literal_final_A3_L3c; } /* cierre literal */

  if ($row_datos_controlasign['c_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A3_L3c >= $comparativo_formato_1) { $cualitativa_final_A3_L3c = $cualitativa_formato_1;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_2) { $cualitativa_final_A3_L3c = $cualitativa_formato_2;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_3) { $cualitativa_final_A3_L3c = $cualitativa_formato_3;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_4) { $cualitativa_final_A3_L3c = $cualitativa_formato_4;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_5) { $cualitativa_final_A3_L3c = $cualitativa_formato_5;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_6) { $cualitativa_final_A3_L3c = $cualitativa_formato_6;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_7) { $cualitativa_final_A3_L3c = $cualitativa_formato_7;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_8) { $cualitativa_final_A3_L3c = $cualitativa_formato_8;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_9) { $cualitativa_final_A3_L3c = $cualitativa_formato_9;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_10) { $cualitativa_final_A3_L3c = $cualitativa_formato_10;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_11) { $cualitativa_final_A3_L3c = $cualitativa_formato_11;  }
  if ($nota_final_A3_L3c >= $comparativo_formato_12) { $cualitativa_final_A3_L3c = $cualitativa_formato_12;  } 
  $nota_final_A3_L3c_print = $cualitativa_final_A3_L3c; } /* cierre cualitativo */

if ($nota_final_A3_L3 == '' ) {
$nota_final_A3_L3c_print = " ";
}
echo $nota_final_A3_L3c_print;
        ?> </td>
      <td BGCOLOR="<?php echo $color3;?>" <?php if
      ($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> >
       <?php $nota_final_A4_L3c =number_format($nota_final_A4_L3_redon1); 

if ($row_datos_controlasign['d_convertir'] == 1 ) {  /* numerico */
       $nota_final_A4_L3c_print = $nota_final_A4_L3c;
} /* cierre numerico */
if ($row_datos_controlasign['d_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A4_L3c >= $comparativo_formato_1) { $alfabetico_final_A4_L3c = $alfabetico_formato_1;  }
   if ($nota_final_A4_L3c >= $comparativo_formato_2) { $alfabetico_final_A4_L3c = $alfabetico_formato_2;  }
   if ($nota_final_A4_L3c >= $comparativo_formato_3) { $alfabetico_final_A4_L3c = $alfabetico_formato_3;  }
   if ($nota_final_A4_L3c >= $comparativo_formato_4) { $alfabetico_final_A4_L3c = $alfabetico_formato_4;  }
   if ($nota_final_A4_L3c >= $comparativo_formato_5) { $alfabetico_final_A4_L3c = $alfabetico_formato_5;  }
   if ($nota_final_A4_L3c >= $comparativo_formato_6) { $alfabetico_final_A4_L3c = $alfabetico_formato_6;  }
   if ($nota_final_A4_L3c >= $comparativo_formato_7) { $alfabetico_final_A4_L3c = $alfabetico_formato_7;  }
   if ($nota_final_A4_L3c >= $comparativo_formato_8) { $alfabetico_final_A4_L3c = $alfabetico_formato_8;  }
   if ($nota_final_A4_L3c >= $comparativo_formato_9) { $alfabetico_final_A4_L3c = $alfabetico_formato_9;  }
   if ($nota_final_A4_L3c >= $comparativo_formato_10) { $alfabetico_final_A4_L3c = $alfabetico_formato_10;  }
   if ($nota_final_A4_L3c >= $comparativo_formato_11) { $alfabetico_final_A4_L3c = $alfabetico_formato_11;  }
   if ($nota_final_A4_L3c >= $comparativo_formato_12) { $alfabetico_final_A4_L3c = $alfabetico_formato_12;  }
   $nota_final_A4_L3c_print = $alfabetico_final_A4_L3c; } /* cierre alfabetico */

if ($row_datos_controlasign['d_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A4_L3c >= $comparativo_formato_1) { $literal_final_A4_L3c = $literal_formato_1;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_2) { $literal_final_A4_L3c = $literal_formato_2;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_3) { $literal_final_A4_L3c = $literal_formato_3;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_4) { $literal_final_A4_L3c = $literal_formato_4;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_5) { $literal_final_A4_L3c = $literal_formato_5;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_6) { $literal_final_A4_L3c = $literal_formato_6;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_7) { $literal_final_A4_L3c = $literal_formato_7;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_8) { $literal_final_A4_L3c = $literal_formato_8;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_9) { $literal_final_A4_L3c = $literal_formato_9;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_10) { $literal_final_A4_L3c = $literal_formato_10;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_11) { $literal_final_A4_L3c = $literal_formato_11;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_12) { $literal_final_A4_L3c = $literal_formato_12;  } 
  $nota_final_A4_L3c_print = $literal_final_A4_L3c; } /* cierre literal */

  if ($row_datos_controlasign['d_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A4_L3c >= $comparativo_formato_1) { $cualitativa_final_A4_L3c = $cualitativa_formato_1;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_2) { $cualitativa_final_A4_L3c = $cualitativa_formato_2;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_3) { $cualitativa_final_A4_L3c = $cualitativa_formato_3;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_4) { $cualitativa_final_A4_L3c = $cualitativa_formato_4;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_5) { $cualitativa_final_A4_L3c = $cualitativa_formato_5;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_6) { $cualitativa_final_A4_L3c = $cualitativa_formato_6;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_7) { $cualitativa_final_A4_L3c = $cualitativa_formato_7;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_8) { $cualitativa_final_A4_L3c = $cualitativa_formato_8;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_9) { $cualitativa_final_A4_L3c = $cualitativa_formato_9;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_10) { $cualitativa_final_A4_L3c = $cualitativa_formato_10;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_11) { $cualitativa_final_A4_L3c = $cualitativa_formato_11;  }
  if ($nota_final_A4_L3c >= $comparativo_formato_12) { $cualitativa_final_A4_L3c = $cualitativa_formato_12;  } 
  $nota_final_A4_L3c_print = $cualitativa_final_A4_L3c; } /* cierre cualitativo */

if ($nota_final_A4_L3 == '' ) {
$nota_final_A4_L3c_print = " ";
}
echo $nota_final_A4_L3c_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color3;?>" <?php if
      ($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> >
          <?php $nota_final_A5_L3c =number_format($nota_final_A5_L3_redon1); 

if ($row_datos_controlasign['e_convertir'] == 1 ) {  /* numerico */
       $nota_final_A5_L3c_print = $nota_final_A5_L3c;
} /* cierre numerico */
if ($row_datos_controlasign['e_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A5_L3c >= $comparativo_formato_1) { $alfabetico_final_A5_L3c = $alfabetico_formato_1;  }
   if ($nota_final_A5_L3c >= $comparativo_formato_2) { $alfabetico_final_A5_L3c = $alfabetico_formato_2;  }
   if ($nota_final_A5_L3c >= $comparativo_formato_3) { $alfabetico_final_A5_L3c = $alfabetico_formato_3;  }
   if ($nota_final_A5_L3c >= $comparativo_formato_4) { $alfabetico_final_A5_L3c = $alfabetico_formato_4;  }
   if ($nota_final_A5_L3c >= $comparativo_formato_5) { $alfabetico_final_A5_L3c = $alfabetico_formato_5;  }
   if ($nota_final_A5_L3c >= $comparativo_formato_6) { $alfabetico_final_A5_L3c = $alfabetico_formato_6;  }
   if ($nota_final_A5_L3c >= $comparativo_formato_7) { $alfabetico_final_A5_L3c = $alfabetico_formato_7;  }
   if ($nota_final_A5_L3c >= $comparativo_formato_8) { $alfabetico_final_A5_L3c = $alfabetico_formato_8;  }
   if ($nota_final_A5_L3c >= $comparativo_formato_9) { $alfabetico_final_A5_L3c = $alfabetico_formato_9;  }
   if ($nota_final_A5_L3c >= $comparativo_formato_10) { $alfabetico_final_A5_L3c = $alfabetico_formato_10;  }
   if ($nota_final_A5_L3c >= $comparativo_formato_11) { $alfabetico_final_A5_L3c = $alfabetico_formato_11;  }
   if ($nota_final_A5_L3c >= $comparativo_formato_12) { $alfabetico_final_A5_L3c = $alfabetico_formato_12;  }
   $nota_final_A5_L3c_print = $alfabetico_final_A5_L3c; } /* cierre alfabetico */

if ($row_datos_controlasign['e_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A5_L3c >= $comparativo_formato_1) { $literal_final_A5_L3c = $literal_formato_1;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_2) { $literal_final_A5_L3c = $literal_formato_2;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_3) { $literal_final_A5_L3c = $literal_formato_3;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_4) { $literal_final_A5_L3c = $literal_formato_4;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_5) { $literal_final_A5_L3c = $literal_formato_5;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_6) { $literal_final_A5_L3c = $literal_formato_6;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_7) { $literal_final_A5_L3c = $literal_formato_7;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_8) { $literal_final_A5_L3c = $literal_formato_8;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_9) { $literal_final_A5_L3c = $literal_formato_9;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_10) { $literal_final_A5_L3c = $literal_formato_10;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_11) { $literal_final_A5_L3c = $literal_formato_11;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_12) { $literal_final_A5_L3c = $literal_formato_12;  } 
  $nota_final_A5_L3c_print = $literal_final_A5_L3c; } /* cierre literal */

  if ($row_datos_controlasign['e_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A5_L3c >= $comparativo_formato_1) { $cualitativa_final_A5_L3c = $cualitativa_formato_1;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_2) { $cualitativa_final_A5_L3c = $cualitativa_formato_2;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_3) { $cualitativa_final_A5_L3c = $cualitativa_formato_3;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_4) { $cualitativa_final_A5_L3c = $cualitativa_formato_4;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_5) { $cualitativa_final_A5_L3c = $cualitativa_formato_5;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_6) { $cualitativa_final_A5_L3c = $cualitativa_formato_6;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_7) { $cualitativa_final_A5_L3c = $cualitativa_formato_7;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_8) { $cualitativa_final_A5_L3c = $cualitativa_formato_8;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_9) { $cualitativa_final_A5_L3c = $cualitativa_formato_9;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_10) { $cualitativa_final_A5_L3c = $cualitativa_formato_10;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_11) { $cualitativa_final_A5_L3c = $cualitativa_formato_11;  }
  if ($nota_final_A5_L3c >= $comparativo_formato_12) { $cualitativa_final_A5_L3c = $cualitativa_formato_12;  } 
  $nota_final_A5_L3c_print = $cualitativa_final_A5_L3c; } /* cierre cualitativo */

if ($nota_final_A5_L3 == '' ) {
$nota_final_A5_L3c_print = " ";
}
echo $nota_final_A5_L3c_print;
        ?> </td>
      <td BGCOLOR="<?php echo $color3;?>" <?php if
      ($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> >
             <?php $nota_final_A6_L3c =number_format($nota_final_A6_L3_redon1); 

if ($row_datos_controlasign['f_convertir'] == 1 ) {  /* numerico */
       $nota_final_A6_L3c_print = $nota_final_A6_L3c;
} /* cierre numerico */
if ($row_datos_controlasign['f_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A6_L3c >= $comparativo_formato_1) { $alfabetico_final_A6_L3c = $alfabetico_formato_1;  }
   if ($nota_final_A6_L3c >= $comparativo_formato_2) { $alfabetico_final_A6_L3c = $alfabetico_formato_2;  }
   if ($nota_final_A6_L3c >= $comparativo_formato_3) { $alfabetico_final_A6_L3c = $alfabetico_formato_3;  }
   if ($nota_final_A6_L3c >= $comparativo_formato_4) { $alfabetico_final_A6_L3c = $alfabetico_formato_4;  }
   if ($nota_final_A6_L3c >= $comparativo_formato_5) { $alfabetico_final_A6_L3c = $alfabetico_formato_5;  }
   if ($nota_final_A6_L3c >= $comparativo_formato_6) { $alfabetico_final_A6_L3c = $alfabetico_formato_6;  }
   if ($nota_final_A6_L3c >= $comparativo_formato_7) { $alfabetico_final_A6_L3c = $alfabetico_formato_7;  }
   if ($nota_final_A6_L3c >= $comparativo_formato_8) { $alfabetico_final_A6_L3c = $alfabetico_formato_8;  }
   if ($nota_final_A6_L3c >= $comparativo_formato_9) { $alfabetico_final_A6_L3c = $alfabetico_formato_9;  }
   if ($nota_final_A6_L3c >= $comparativo_formato_10) { $alfabetico_final_A6_L3c = $alfabetico_formato_10;  }
   if ($nota_final_A6_L3c >= $comparativo_formato_11) { $alfabetico_final_A6_L3c = $alfabetico_formato_11;  }
   if ($nota_final_A6_L3c >= $comparativo_formato_12) { $alfabetico_final_A6_L3c = $alfabetico_formato_12;  }
   $nota_final_A6_L3c_print = $alfabetico_final_A6_L3c; } /* cierre alfabetico */

if ($row_datos_controlasign['f_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A6_L3c >= $comparativo_formato_1) { $literal_final_A6_L3c = $literal_formato_1;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_2) { $literal_final_A6_L3c = $literal_formato_2;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_3) { $literal_final_A6_L3c = $literal_formato_3;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_4) { $literal_final_A6_L3c = $literal_formato_4;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_5) { $literal_final_A6_L3c = $literal_formato_5;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_6) { $literal_final_A6_L3c = $literal_formato_6;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_7) { $literal_final_A6_L3c = $literal_formato_7;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_8) { $literal_final_A6_L3c = $literal_formato_8;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_9) { $literal_final_A6_L3c = $literal_formato_9;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_10) { $literal_final_A6_L3c = $literal_formato_10;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_11) { $literal_final_A6_L3c = $literal_formato_11;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_12) { $literal_final_A6_L3c = $literal_formato_12;  } 
  $nota_final_A6_L3c_print = $literal_final_A6_L3c; } /* cierre literal */

  if ($row_datos_controlasign['f_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A6_L3c >= $comparativo_formato_1) { $cualitativa_final_A6_L3c = $cualitativa_formato_1;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_2) { $cualitativa_final_A6_L3c = $cualitativa_formato_2;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_3) { $cualitativa_final_A6_L3c = $cualitativa_formato_3;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_4) { $cualitativa_final_A6_L3c = $cualitativa_formato_4;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_5) { $cualitativa_final_A6_L3c = $cualitativa_formato_5;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_6) { $cualitativa_final_A6_L3c = $cualitativa_formato_6;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_7) { $cualitativa_final_A6_L3c = $cualitativa_formato_7;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_8) { $cualitativa_final_A6_L3c = $cualitativa_formato_8;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_9) { $cualitativa_final_A6_L3c = $cualitativa_formato_9;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_10) { $cualitativa_final_A6_L3c = $cualitativa_formato_10;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_11) { $cualitativa_final_A6_L3c = $cualitativa_formato_11;  }
  if ($nota_final_A6_L3c >= $comparativo_formato_12) { $cualitativa_final_A6_L3c = $cualitativa_formato_12;  } 
  $nota_final_A6_L3c_print = $cualitativa_final_A6_L3c; } /* cierre cualitativo */

if ($nota_final_A6_L3 == '' ) {
$nota_final_A6_L3c_print = " ";
}
echo $nota_final_A6_L3c_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color3;?>" <?php if
      ($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> >
            <?php $nota_final_A7_L3c =number_format($nota_final_A7_L3_redon1); 

if ($row_datos_controlasign['g_convertir'] == 1 ) {  /* numerico */
       $nota_final_A7_L3c_print = $nota_final_A7_L3c;
} /* cierre numerico */
if ($row_datos_controlasign['g_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A7_L3c >= $comparativo_formato_1) { $alfabetico_final_A7_L3c = $alfabetico_formato_1;  }
   if ($nota_final_A7_L3c >= $comparativo_formato_2) { $alfabetico_final_A7_L3c = $alfabetico_formato_2;  }
   if ($nota_final_A7_L3c >= $comparativo_formato_3) { $alfabetico_final_A7_L3c = $alfabetico_formato_3;  }
   if ($nota_final_A7_L3c >= $comparativo_formato_4) { $alfabetico_final_A7_L3c = $alfabetico_formato_4;  }
   if ($nota_final_A7_L3c >= $comparativo_formato_5) { $alfabetico_final_A7_L3c = $alfabetico_formato_5;  }
   if ($nota_final_A7_L3c >= $comparativo_formato_6) { $alfabetico_final_A7_L3c = $alfabetico_formato_6;  }
   if ($nota_final_A7_L3c >= $comparativo_formato_7) { $alfabetico_final_A7_L3c = $alfabetico_formato_7;  }
   if ($nota_final_A7_L3c >= $comparativo_formato_8) { $alfabetico_final_A7_L3c = $alfabetico_formato_8;  }
   if ($nota_final_A7_L3c >= $comparativo_formato_9) { $alfabetico_final_A7_L3c = $alfabetico_formato_9;  }
   if ($nota_final_A7_L3c >= $comparativo_formato_10) { $alfabetico_final_A7_L3c = $alfabetico_formato_10;  }
   if ($nota_final_A7_L3c >= $comparativo_formato_11) { $alfabetico_final_A7_L3c = $alfabetico_formato_11;  }
   if ($nota_final_A7_L3c >= $comparativo_formato_12) { $alfabetico_final_A7_L3c = $alfabetico_formato_12;  }
   $nota_final_A7_L3c_print = $alfabetico_final_A7_L3c; } /* cierre alfabetico */

if ($row_datos_controlasign['g_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A7_L3c >= $comparativo_formato_1) { $literal_final_A7_L3c = $literal_formato_1;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_2) { $literal_final_A7_L3c = $literal_formato_2;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_3) { $literal_final_A7_L3c = $literal_formato_3;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_4) { $literal_final_A7_L3c = $literal_formato_4;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_5) { $literal_final_A7_L3c = $literal_formato_5;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_6) { $literal_final_A7_L3c = $literal_formato_6;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_7) { $literal_final_A7_L3c = $literal_formato_7;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_8) { $literal_final_A7_L3c = $literal_formato_8;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_9) { $literal_final_A7_L3c = $literal_formato_9;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_10) { $literal_final_A7_L3c = $literal_formato_10;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_11) { $literal_final_A7_L3c = $literal_formato_11;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_12) { $literal_final_A7_L3c = $literal_formato_12;  } 
  $nota_final_A7_L3c_print = $literal_final_A7_L3c; } /* cierre literal */

  if ($row_datos_controlasign['g_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A7_L3c >= $comparativo_formato_1) { $cualitativa_final_A7_L3c = $cualitativa_formato_1;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_2) { $cualitativa_final_A7_L3c = $cualitativa_formato_2;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_3) { $cualitativa_final_A7_L3c = $cualitativa_formato_3;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_4) { $cualitativa_final_A7_L3c = $cualitativa_formato_4;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_5) { $cualitativa_final_A7_L3c = $cualitativa_formato_5;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_6) { $cualitativa_final_A7_L3c = $cualitativa_formato_6;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_7) { $cualitativa_final_A7_L3c = $cualitativa_formato_7;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_8) { $cualitativa_final_A7_L3c = $cualitativa_formato_8;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_9) { $cualitativa_final_A7_L3c = $cualitativa_formato_9;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_10) { $cualitativa_final_A7_L3c = $cualitativa_formato_10;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_11) { $cualitativa_final_A7_L3c = $cualitativa_formato_11;  }
  if ($nota_final_A7_L3c >= $comparativo_formato_12) { $cualitativa_final_A7_L3c = $cualitativa_formato_12;  } 
  $nota_final_A7_L3c_print = $cualitativa_final_A7_L3c; } /* cierre cualitativo */

if ($nota_final_A7_L3 == '' ) {
$nota_final_A7_L3c_print = " ";
}
echo $nota_final_A7_L3c_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color3;?>" <?php if
      ($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> >
          <?php $nota_final_A8_L3c =number_format($nota_final_A8_L3_redon1); 

if ($row_datos_controlasign['h_convertir'] == 1 ) {  /* numerico */
       $nota_final_A8_L3c_print = $nota_final_A8_L3c;
} /* cierre numerico */
if ($row_datos_controlasign['h_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A8_L3c >= $comparativo_formato_1) { $alfabetico_final_A8_L3c = $alfabetico_formato_1;  }
   if ($nota_final_A8_L3c >= $comparativo_formato_2) { $alfabetico_final_A8_L3c = $alfabetico_formato_2;  }
   if ($nota_final_A8_L3c >= $comparativo_formato_3) { $alfabetico_final_A8_L3c = $alfabetico_formato_3;  }
   if ($nota_final_A8_L3c >= $comparativo_formato_4) { $alfabetico_final_A8_L3c = $alfabetico_formato_4;  }
   if ($nota_final_A8_L3c >= $comparativo_formato_5) { $alfabetico_final_A8_L3c = $alfabetico_formato_5;  }
   if ($nota_final_A8_L3c >= $comparativo_formato_6) { $alfabetico_final_A8_L3c = $alfabetico_formato_6;  }
   if ($nota_final_A8_L3c >= $comparativo_formato_7) { $alfabetico_final_A8_L3c = $alfabetico_formato_7;  }
   if ($nota_final_A8_L3c >= $comparativo_formato_8) { $alfabetico_final_A8_L3c = $alfabetico_formato_8;  }
   if ($nota_final_A8_L3c >= $comparativo_formato_9) { $alfabetico_final_A8_L3c = $alfabetico_formato_9;  }
   if ($nota_final_A8_L3c >= $comparativo_formato_10) { $alfabetico_final_A8_L3c = $alfabetico_formato_10;  }
   if ($nota_final_A8_L3c >= $comparativo_formato_11) { $alfabetico_final_A8_L3c = $alfabetico_formato_11;  }
   if ($nota_final_A8_L3c >= $comparativo_formato_12) { $alfabetico_final_A8_L3c = $alfabetico_formato_12;  }
   $nota_final_A8_L3c_print = $alfabetico_final_A8_L3c; } /* cierre alfabetico */

if ($row_datos_controlasign['h_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A8_L3c >= $comparativo_formato_1) { $literal_final_A8_L3c = $literal_formato_1;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_2) { $literal_final_A8_L3c = $literal_formato_2;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_3) { $literal_final_A8_L3c = $literal_formato_3;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_4) { $literal_final_A8_L3c = $literal_formato_4;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_5) { $literal_final_A8_L3c = $literal_formato_5;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_6) { $literal_final_A8_L3c = $literal_formato_6;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_7) { $literal_final_A8_L3c = $literal_formato_7;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_8) { $literal_final_A8_L3c = $literal_formato_8;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_9) { $literal_final_A8_L3c = $literal_formato_9;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_10) { $literal_final_A8_L3c = $literal_formato_10;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_11) { $literal_final_A8_L3c = $literal_formato_11;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_12) { $literal_final_A8_L3c = $literal_formato_12;  } 
  $nota_final_A8_L3c_print = $literal_final_A8_L3c; } /* cierre literal */

  if ($row_datos_controlasign['h_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A8_L3c >= $comparativo_formato_1) { $cualitativa_final_A8_L3c = $cualitativa_formato_1;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_2) { $cualitativa_final_A8_L3c = $cualitativa_formato_2;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_3) { $cualitativa_final_A8_L3c = $cualitativa_formato_3;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_4) { $cualitativa_final_A8_L3c = $cualitativa_formato_4;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_5) { $cualitativa_final_A8_L3c = $cualitativa_formato_5;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_6) { $cualitativa_final_A8_L3c = $cualitativa_formato_6;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_7) { $cualitativa_final_A8_L3c = $cualitativa_formato_7;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_8) { $cualitativa_final_A8_L3c = $cualitativa_formato_8;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_9) { $cualitativa_final_A8_L3c = $cualitativa_formato_9;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_10) { $cualitativa_final_A8_L3c = $cualitativa_formato_10;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_11) { $cualitativa_final_A8_L3c = $cualitativa_formato_11;  }
  if ($nota_final_A8_L3c >= $comparativo_formato_12) { $cualitativa_final_A8_L3c = $cualitativa_formato_12;  } 
  $nota_final_A8_L3c_print = $cualitativa_final_A8_L3c; } /* cierre cualitativo */

if ($nota_final_A8_L3 == '' ) {
$nota_final_A8_L3c_print = " ";
}
echo $nota_final_A8_L3c_print;
        ?>   </td>
      <td BGCOLOR="<?php echo $color3;?>" <?php if
      ($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> >
          <?php $nota_final_A9_L3c =number_format($nota_final_A9_L3_redon1); 

if ($row_datos_controlasign['i_convertir'] == 1 ) {  /* numerico */
       $nota_final_A9_L3c_print = $nota_final_A9_L3c;
} /* cierre numerico */
if ($row_datos_controlasign['i_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A9_L3c >= $comparativo_formato_1) { $alfabetico_final_A9_L3c = $alfabetico_formato_1;  }
   if ($nota_final_A9_L3c >= $comparativo_formato_2) { $alfabetico_final_A9_L3c = $alfabetico_formato_2;  }
   if ($nota_final_A9_L3c >= $comparativo_formato_3) { $alfabetico_final_A9_L3c = $alfabetico_formato_3;  }
   if ($nota_final_A9_L3c >= $comparativo_formato_4) { $alfabetico_final_A9_L3c = $alfabetico_formato_4;  }
   if ($nota_final_A9_L3c >= $comparativo_formato_5) { $alfabetico_final_A9_L3c = $alfabetico_formato_5;  }
   if ($nota_final_A9_L3c >= $comparativo_formato_6) { $alfabetico_final_A9_L3c = $alfabetico_formato_6;  }
   if ($nota_final_A9_L3c >= $comparativo_formato_7) { $alfabetico_final_A9_L3c = $alfabetico_formato_7;  }
   if ($nota_final_A9_L3c >= $comparativo_formato_8) { $alfabetico_final_A9_L3c = $alfabetico_formato_8;  }
   if ($nota_final_A9_L3c >= $comparativo_formato_9) { $alfabetico_final_A9_L3c = $alfabetico_formato_9;  }
   if ($nota_final_A9_L3c >= $comparativo_formato_10) { $alfabetico_final_A9_L3c = $alfabetico_formato_10;  }
   if ($nota_final_A9_L3c >= $comparativo_formato_11) { $alfabetico_final_A9_L3c = $alfabetico_formato_11;  }
   if ($nota_final_A9_L3c >= $comparativo_formato_12) { $alfabetico_final_A9_L3c = $alfabetico_formato_12;  }
   $nota_final_A9_L3c_print = $alfabetico_final_A9_L3c; } /* cierre alfabetico */

if ($row_datos_controlasign['i_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A9_L3c >= $comparativo_formato_1) { $literal_final_A9_L3c = $literal_formato_1;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_2) { $literal_final_A9_L3c = $literal_formato_2;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_3) { $literal_final_A9_L3c = $literal_formato_3;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_4) { $literal_final_A9_L3c = $literal_formato_4;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_5) { $literal_final_A9_L3c = $literal_formato_5;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_6) { $literal_final_A9_L3c = $literal_formato_6;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_7) { $literal_final_A9_L3c = $literal_formato_7;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_8) { $literal_final_A9_L3c = $literal_formato_8;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_9) { $literal_final_A9_L3c = $literal_formato_9;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_10) { $literal_final_A9_L3c = $literal_formato_10;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_11) { $literal_final_A9_L3c = $literal_formato_11;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_12) { $literal_final_A9_L3c = $literal_formato_12;  } 
  $nota_final_A9_L3c_print = $literal_final_A9_L3c; } /* cierre literal */

  if ($row_datos_controlasign['i_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A9_L3c >= $comparativo_formato_1) { $cualitativa_final_A9_L3c = $cualitativa_formato_1;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_2) { $cualitativa_final_A9_L3c = $cualitativa_formato_2;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_3) { $cualitativa_final_A9_L3c = $cualitativa_formato_3;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_4) { $cualitativa_final_A9_L3c = $cualitativa_formato_4;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_5) { $cualitativa_final_A9_L3c = $cualitativa_formato_5;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_6) { $cualitativa_final_A9_L3c = $cualitativa_formato_6;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_7) { $cualitativa_final_A9_L3c = $cualitativa_formato_7;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_8) { $cualitativa_final_A9_L3c = $cualitativa_formato_8;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_9) { $cualitativa_final_A9_L3c = $cualitativa_formato_9;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_10) { $cualitativa_final_A9_L3c = $cualitativa_formato_10;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_11) { $cualitativa_final_A9_L3c = $cualitativa_formato_11;  }
  if ($nota_final_A9_L3c >= $comparativo_formato_12) { $cualitativa_final_A9_L3c = $cualitativa_formato_12;  } 
  $nota_final_A9_L3c_print = $cualitativa_final_A9_L3c; } /* cierre cualitativo */

if ($nota_final_A9_L3 == '' ) {
$nota_final_A9_L3c_print = " ";
}
echo $nota_final_A9_L3c_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color3;?>" <?php if
      ($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> >
         <?php $nota_final_A10_L3c =number_format($nota_final_A10_L3_redon1); 

if ($row_datos_controlasign['j_convertir'] == 1 ) {  /* numerico */
       $nota_final_A10_L3c_print = $nota_final_A10_L3c;
} /* cierre numerico */
if ($row_datos_controlasign['j_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A10_L3c >= $comparativo_formato_1) { $alfabetico_final_A10_L3c = $alfabetico_formato_1;  }
   if ($nota_final_A10_L3c >= $comparativo_formato_2) { $alfabetico_final_A10_L3c = $alfabetico_formato_2;  }
   if ($nota_final_A10_L3c >= $comparativo_formato_3) { $alfabetico_final_A10_L3c = $alfabetico_formato_3;  }
   if ($nota_final_A10_L3c >= $comparativo_formato_4) { $alfabetico_final_A10_L3c = $alfabetico_formato_4;  }
   if ($nota_final_A10_L3c >= $comparativo_formato_5) { $alfabetico_final_A10_L3c = $alfabetico_formato_5;  }
   if ($nota_final_A10_L3c >= $comparativo_formato_6) { $alfabetico_final_A10_L3c = $alfabetico_formato_6;  }
   if ($nota_final_A10_L3c >= $comparativo_formato_7) { $alfabetico_final_A10_L3c = $alfabetico_formato_7;  }
   if ($nota_final_A10_L3c >= $comparativo_formato_8) { $alfabetico_final_A10_L3c = $alfabetico_formato_8;  }
   if ($nota_final_A10_L3c >= $comparativo_formato_9) { $alfabetico_final_A10_L3c = $alfabetico_formato_9;  }
   if ($nota_final_A10_L3c >= $comparativo_formato_10) { $alfabetico_final_A10_L3c = $alfabetico_formato_10;  }
   if ($nota_final_A10_L3c >= $comparativo_formato_11) { $alfabetico_final_A10_L3c = $alfabetico_formato_11;  }
   if ($nota_final_A10_L3c >= $comparativo_formato_12) { $alfabetico_final_A10_L3c = $alfabetico_formato_12;  }
   $nota_final_A10_L3c_print = $alfabetico_final_A10_L3c; } /* cierre alfabetico */

if ($row_datos_controlasign['j_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A10_L3c >= $comparativo_formato_1) { $literal_final_A10_L3c = $literal_formato_1;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_2) { $literal_final_A10_L3c = $literal_formato_2;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_3) { $literal_final_A10_L3c = $literal_formato_3;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_4) { $literal_final_A10_L3c = $literal_formato_4;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_5) { $literal_final_A10_L3c = $literal_formato_5;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_6) { $literal_final_A10_L3c = $literal_formato_6;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_7) { $literal_final_A10_L3c = $literal_formato_7;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_8) { $literal_final_A10_L3c = $literal_formato_8;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_9) { $literal_final_A10_L3c = $literal_formato_9;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_10) { $literal_final_A10_L3c = $literal_formato_10;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_11) { $literal_final_A10_L3c = $literal_formato_11;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_12) { $literal_final_A10_L3c = $literal_formato_12;  } 
  $nota_final_A10_L3c_print = $literal_final_A10_L3c; } /* cierre literal */

  if ($row_datos_controlasign['j_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A10_L3c >= $comparativo_formato_1) { $cualitativa_final_A10_L3c = $cualitativa_formato_1;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_2) { $cualitativa_final_A10_L3c = $cualitativa_formato_2;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_3) { $cualitativa_final_A10_L3c = $cualitativa_formato_3;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_4) { $cualitativa_final_A10_L3c = $cualitativa_formato_4;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_5) { $cualitativa_final_A10_L3c = $cualitativa_formato_5;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_6) { $cualitativa_final_A10_L3c = $cualitativa_formato_6;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_7) { $cualitativa_final_A10_L3c = $cualitativa_formato_7;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_8) { $cualitativa_final_A10_L3c = $cualitativa_formato_8;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_9) { $cualitativa_final_A10_L3c = $cualitativa_formato_9;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_10) { $cualitativa_final_A10_L3c = $cualitativa_formato_10;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_11) { $cualitativa_final_A10_L3c = $cualitativa_formato_11;  }
  if ($nota_final_A10_L3c >= $comparativo_formato_12) { $cualitativa_final_A10_L3c = $cualitativa_formato_12;  } 
  $nota_final_A10_L3c_print = $cualitativa_final_A10_L3c; } /* cierre cualitativo */

if ($nota_final_A10_L3 == '' ) {
$nota_final_A10_L3c_print = " ";
}
echo $nota_final_A10_L3c_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color3;?>" <?php if
      ($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> >
          <?php $nota_final_A11_L3c =number_format($nota_final_A11_L3_redon1); 

if ($row_datos_controlasign['k_convertir'] == 1 ) {  /* numerico */
       $nota_final_A11_L3c_print = $nota_final_A11_L3c;
} /* cierre numerico */
if ($row_datos_controlasign['k_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A11_L3c >= $comparativo_formato_1) { $alfabetico_final_A11_L3c = $alfabetico_formato_1;  }
   if ($nota_final_A11_L3c >= $comparativo_formato_2) { $alfabetico_final_A11_L3c = $alfabetico_formato_2;  }
   if ($nota_final_A11_L3c >= $comparativo_formato_3) { $alfabetico_final_A11_L3c = $alfabetico_formato_3;  }
   if ($nota_final_A11_L3c >= $comparativo_formato_4) { $alfabetico_final_A11_L3c = $alfabetico_formato_4;  }
   if ($nota_final_A11_L3c >= $comparativo_formato_5) { $alfabetico_final_A11_L3c = $alfabetico_formato_5;  }
   if ($nota_final_A11_L3c >= $comparativo_formato_6) { $alfabetico_final_A11_L3c = $alfabetico_formato_6;  }
   if ($nota_final_A11_L3c >= $comparativo_formato_7) { $alfabetico_final_A11_L3c = $alfabetico_formato_7;  }
   if ($nota_final_A11_L3c >= $comparativo_formato_8) { $alfabetico_final_A11_L3c = $alfabetico_formato_8;  }
   if ($nota_final_A11_L3c >= $comparativo_formato_9) { $alfabetico_final_A11_L3c = $alfabetico_formato_9;  }
   if ($nota_final_A11_L3c >= $comparativo_formato_10) { $alfabetico_final_A11_L3c = $alfabetico_formato_10;  }
   if ($nota_final_A11_L3c >= $comparativo_formato_11) { $alfabetico_final_A11_L3c = $alfabetico_formato_11;  }
   if ($nota_final_A11_L3c >= $comparativo_formato_12) { $alfabetico_final_A11_L3c = $alfabetico_formato_12;  }
   $nota_final_A11_L3c_print = $alfabetico_final_A11_L3c; } /* cierre alfabetico */

if ($row_datos_controlasign['k_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A11_L3c >= $comparativo_formato_1) { $literal_final_A11_L3c = $literal_formato_1;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_2) { $literal_final_A11_L3c = $literal_formato_2;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_3) { $literal_final_A11_L3c = $literal_formato_3;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_4) { $literal_final_A11_L3c = $literal_formato_4;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_5) { $literal_final_A11_L3c = $literal_formato_5;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_6) { $literal_final_A11_L3c = $literal_formato_6;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_7) { $literal_final_A11_L3c = $literal_formato_7;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_8) { $literal_final_A11_L3c = $literal_formato_8;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_9) { $literal_final_A11_L3c = $literal_formato_9;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_10) { $literal_final_A11_L3c = $literal_formato_10;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_11) { $literal_final_A11_L3c = $literal_formato_11;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_12) { $literal_final_A11_L3c = $literal_formato_12;  } 
  $nota_final_A11_L3c_print = $literal_final_A11_L3c; } /* cierre literal */

  if ($row_datos_controlasign['k_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A11_L3c >= $comparativo_formato_1) { $cualitativa_final_A11_L3c = $cualitativa_formato_1;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_2) { $cualitativa_final_A11_L3c = $cualitativa_formato_2;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_3) { $cualitativa_final_A11_L3c = $cualitativa_formato_3;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_4) { $cualitativa_final_A11_L3c = $cualitativa_formato_4;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_5) { $cualitativa_final_A11_L3c = $cualitativa_formato_5;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_6) { $cualitativa_final_A11_L3c = $cualitativa_formato_6;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_7) { $cualitativa_final_A11_L3c = $cualitativa_formato_7;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_8) { $cualitativa_final_A11_L3c = $cualitativa_formato_8;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_9) { $cualitativa_final_A11_L3c = $cualitativa_formato_9;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_10) { $cualitativa_final_A11_L3c = $cualitativa_formato_10;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_11) { $cualitativa_final_A11_L3c = $cualitativa_formato_11;  }
  if ($nota_final_A11_L3c >= $comparativo_formato_12) { $cualitativa_final_A11_L3c = $cualitativa_formato_12;  } 
  $nota_final_A11_L3c_print = $cualitativa_final_A11_L3c; } /* cierre cualitativo */

if ($nota_final_A11_L3 == '' ) {
$nota_final_A11_L3c_print = " ";
}
echo $nota_final_A11_L3c_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color3;?>" <?php if
      ($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> >
        <?php $nota_final_A12_L3c =number_format($nota_final_A12_L3_redon1); 

if ($row_datos_controlasign['l_convertir'] == 1 ) {  /* numerico */
       $nota_final_A12_L3c_print = $nota_final_A12_L3c;
} /* cierre numerico */
if ($row_datos_controlasign['l_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A12_L3c >= $comparativo_formato_1) { $alfabetico_final_A12_L3c = $alfabetico_formato_1;  }
   if ($nota_final_A12_L3c >= $comparativo_formato_2) { $alfabetico_final_A12_L3c = $alfabetico_formato_2;  }
   if ($nota_final_A12_L3c >= $comparativo_formato_3) { $alfabetico_final_A12_L3c = $alfabetico_formato_3;  }
   if ($nota_final_A12_L3c >= $comparativo_formato_4) { $alfabetico_final_A12_L3c = $alfabetico_formato_4;  }
   if ($nota_final_A12_L3c >= $comparativo_formato_5) { $alfabetico_final_A12_L3c = $alfabetico_formato_5;  }
   if ($nota_final_A12_L3c >= $comparativo_formato_6) { $alfabetico_final_A12_L3c = $alfabetico_formato_6;  }
   if ($nota_final_A12_L3c >= $comparativo_formato_7) { $alfabetico_final_A12_L3c = $alfabetico_formato_7;  }
   if ($nota_final_A12_L3c >= $comparativo_formato_8) { $alfabetico_final_A12_L3c = $alfabetico_formato_8;  }
   if ($nota_final_A12_L3c >= $comparativo_formato_9) { $alfabetico_final_A12_L3c = $alfabetico_formato_9;  }
   if ($nota_final_A12_L3c >= $comparativo_formato_10) { $alfabetico_final_A12_L3c = $alfabetico_formato_10;  }
   if ($nota_final_A12_L3c >= $comparativo_formato_11) { $alfabetico_final_A12_L3c = $alfabetico_formato_11;  }
   if ($nota_final_A12_L3c >= $comparativo_formato_12) { $alfabetico_final_A12_L3c = $alfabetico_formato_12;  }
   $nota_final_A12_L3c_print = $alfabetico_final_A12_L3c; } /* cierre alfabetico */

if ($row_datos_controlasign['l_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A12_L3c >= $comparativo_formato_1) { $literal_final_A12_L3c = $literal_formato_1;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_2) { $literal_final_A12_L3c = $literal_formato_2;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_3) { $literal_final_A12_L3c = $literal_formato_3;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_4) { $literal_final_A12_L3c = $literal_formato_4;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_5) { $literal_final_A12_L3c = $literal_formato_5;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_6) { $literal_final_A12_L3c = $literal_formato_6;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_7) { $literal_final_A12_L3c = $literal_formato_7;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_8) { $literal_final_A12_L3c = $literal_formato_8;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_9) { $literal_final_A12_L3c = $literal_formato_9;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_10) { $literal_final_A12_L3c = $literal_formato_10;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_11) { $literal_final_A12_L3c = $literal_formato_11;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_12) { $literal_final_A12_L3c = $literal_formato_12;  } 
  $nota_final_A12_L3c_print = $literal_final_A12_L3c; } /* cierre literal */

  if ($row_datos_controlasign['l_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A12_L3c >= $comparativo_formato_1) { $cualitativa_final_A12_L3c = $cualitativa_formato_1;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_2) { $cualitativa_final_A12_L3c = $cualitativa_formato_2;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_3) { $cualitativa_final_A12_L3c = $cualitativa_formato_3;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_4) { $cualitativa_final_A12_L3c = $cualitativa_formato_4;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_5) { $cualitativa_final_A12_L3c = $cualitativa_formato_5;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_6) { $cualitativa_final_A12_L3c = $cualitativa_formato_6;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_7) { $cualitativa_final_A12_L3c = $cualitativa_formato_7;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_8) { $cualitativa_final_A12_L3c = $cualitativa_formato_8;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_9) { $cualitativa_final_A12_L3c = $cualitativa_formato_9;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_10) { $cualitativa_final_A12_L3c = $cualitativa_formato_10;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_11) { $cualitativa_final_A12_L3c = $cualitativa_formato_11;  }
  if ($nota_final_A12_L3c >= $comparativo_formato_12) { $cualitativa_final_A12_L3c = $cualitativa_formato_12;  } 
  $nota_final_A12_L3c_print = $cualitativa_final_A12_L3c; } /* cierre cualitativo */

if ($nota_final_A12_L3 == '' ) {
$nota_final_A12_L3c_print = " ";
}
echo $nota_final_A12_L3c_print;
        ?>  </td>
      <td BGCOLOR="<?php echo $color3;?>" <?php if
      ($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> >
          <?php $nota_final_A13_L3c =number_format($nota_final_A13_L3_redon1); 

if ($row_datos_controlasign['m_convertir'] == 1 ) {  /* numerico */
       $nota_final_A13_L3c_print = $nota_final_A13_L3c;
} /* cierre numerico */
if ($row_datos_controlasign['m_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A13_L3c >= $comparativo_formato_1) { $alfabetico_final_A13_L3c = $alfabetico_formato_1;  }
   if ($nota_final_A13_L3c >= $comparativo_formato_2) { $alfabetico_final_A13_L3c = $alfabetico_formato_2;  }
   if ($nota_final_A13_L3c >= $comparativo_formato_3) { $alfabetico_final_A13_L3c = $alfabetico_formato_3;  }
   if ($nota_final_A13_L3c >= $comparativo_formato_4) { $alfabetico_final_A13_L3c = $alfabetico_formato_4;  }
   if ($nota_final_A13_L3c >= $comparativo_formato_5) { $alfabetico_final_A13_L3c = $alfabetico_formato_5;  }
   if ($nota_final_A13_L3c >= $comparativo_formato_6) { $alfabetico_final_A13_L3c = $alfabetico_formato_6;  }
   if ($nota_final_A13_L3c >= $comparativo_formato_7) { $alfabetico_final_A13_L3c = $alfabetico_formato_7;  }
   if ($nota_final_A13_L3c >= $comparativo_formato_8) { $alfabetico_final_A13_L3c = $alfabetico_formato_8;  }
   if ($nota_final_A13_L3c >= $comparativo_formato_9) { $alfabetico_final_A13_L3c = $alfabetico_formato_9;  }
   if ($nota_final_A13_L3c >= $comparativo_formato_10) { $alfabetico_final_A13_L3c = $alfabetico_formato_10;  }
   if ($nota_final_A13_L3c >= $comparativo_formato_11) { $alfabetico_final_A13_L3c = $alfabetico_formato_11;  }
   if ($nota_final_A13_L3c >= $comparativo_formato_12) { $alfabetico_final_A13_L3c = $alfabetico_formato_12;  }
   $nota_final_A13_L3c_print = $alfabetico_final_A13_L3c; } /* cierre alfabetico */

if ($row_datos_controlasign['m_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A13_L3c >= $comparativo_formato_1) { $literal_final_A13_L3c = $literal_formato_1;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_2) { $literal_final_A13_L3c = $literal_formato_2;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_3) { $literal_final_A13_L3c = $literal_formato_3;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_4) { $literal_final_A13_L3c = $literal_formato_4;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_5) { $literal_final_A13_L3c = $literal_formato_5;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_6) { $literal_final_A13_L3c = $literal_formato_6;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_7) { $literal_final_A13_L3c = $literal_formato_7;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_8) { $literal_final_A13_L3c = $literal_formato_8;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_9) { $literal_final_A13_L3c = $literal_formato_9;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_10) { $literal_final_A13_L3c = $literal_formato_10;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_11) { $literal_final_A13_L3c = $literal_formato_11;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_12) { $literal_final_A13_L3c = $literal_formato_12;  } 
  $nota_final_A13_L3c_print = $literal_final_A13_L3c; } /* cierre literal */

  if ($row_datos_controlasign['m_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A13_L3c >= $comparativo_formato_1) { $cualitativa_final_A13_L3c = $cualitativa_formato_1;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_2) { $cualitativa_final_A13_L3c = $cualitativa_formato_2;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_3) { $cualitativa_final_A13_L3c = $cualitativa_formato_3;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_4) { $cualitativa_final_A13_L3c = $cualitativa_formato_4;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_5) { $cualitativa_final_A13_L3c = $cualitativa_formato_5;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_6) { $cualitativa_final_A13_L3c = $cualitativa_formato_6;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_7) { $cualitativa_final_A13_L3c = $cualitativa_formato_7;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_8) { $cualitativa_final_A13_L3c = $cualitativa_formato_8;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_9) { $cualitativa_final_A13_L3c = $cualitativa_formato_9;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_10) { $cualitativa_final_A13_L3c = $cualitativa_formato_10;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_11) { $cualitativa_final_A13_L3c = $cualitativa_formato_11;  }
  if ($nota_final_A13_L3c >= $comparativo_formato_12) { $cualitativa_final_A13_L3c = $cualitativa_formato_12;  } 
  $nota_final_A13_L3c_print = $cualitativa_final_A13_L3c; } /* cierre cualitativo */

if ($nota_final_A13_L3 == '' ) {
$nota_final_A13_L3c_print = " ";
}
echo $nota_final_A13_L3c_print;
        ?>   </td>
      <td BGCOLOR="<?php echo $color3;?>" <?php if
      ($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> >
            <?php $nota_final_A14_L3c =number_format($nota_final_A14_L3_redon1); 

if ($row_datos_controlasign['n_convertir'] == 1 ) {  /* numerico */
       $nota_final_A14_L3c_print = $nota_final_A14_L3c;
} /* cierre numerico */
if ($row_datos_controlasign['n_convertir'] == 2 ) {  /* alfabetico */
   if ($nota_final_A14_L3c >= $comparativo_formato_1) { $alfabetico_final_A14_L3c = $alfabetico_formato_1;  }
   if ($nota_final_A14_L3c >= $comparativo_formato_2) { $alfabetico_final_A14_L3c = $alfabetico_formato_2;  }
   if ($nota_final_A14_L3c >= $comparativo_formato_3) { $alfabetico_final_A14_L3c = $alfabetico_formato_3;  }
   if ($nota_final_A14_L3c >= $comparativo_formato_4) { $alfabetico_final_A14_L3c = $alfabetico_formato_4;  }
   if ($nota_final_A14_L3c >= $comparativo_formato_5) { $alfabetico_final_A14_L3c = $alfabetico_formato_5;  }
   if ($nota_final_A14_L3c >= $comparativo_formato_6) { $alfabetico_final_A14_L3c = $alfabetico_formato_6;  }
   if ($nota_final_A14_L3c >= $comparativo_formato_7) { $alfabetico_final_A14_L3c = $alfabetico_formato_7;  }
   if ($nota_final_A14_L3c >= $comparativo_formato_8) { $alfabetico_final_A14_L3c = $alfabetico_formato_8;  }
   if ($nota_final_A14_L3c >= $comparativo_formato_9) { $alfabetico_final_A14_L3c = $alfabetico_formato_9;  }
   if ($nota_final_A14_L3c >= $comparativo_formato_10) { $alfabetico_final_A14_L3c = $alfabetico_formato_10;  }
   if ($nota_final_A14_L3c >= $comparativo_formato_11) { $alfabetico_final_A14_L3c = $alfabetico_formato_11;  }
   if ($nota_final_A14_L3c >= $comparativo_formato_12) { $alfabetico_final_A14_L3c = $alfabetico_formato_12;  }
   $nota_final_A14_L3c_print = $alfabetico_final_A14_L3c; } /* cierre alfabetico */

if ($row_datos_controlasign['n_convertir'] == 3 ) {  /* literal */
  if ($nota_final_A14_L3c >= $comparativo_formato_1) { $literal_final_A14_L3c = $literal_formato_1;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_2) { $literal_final_A14_L3c = $literal_formato_2;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_3) { $literal_final_A14_L3c = $literal_formato_3;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_4) { $literal_final_A14_L3c = $literal_formato_4;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_5) { $literal_final_A14_L3c = $literal_formato_5;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_6) { $literal_final_A14_L3c = $literal_formato_6;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_7) { $literal_final_A14_L3c = $literal_formato_7;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_8) { $literal_final_A14_L3c = $literal_formato_8;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_9) { $literal_final_A14_L3c = $literal_formato_9;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_10) { $literal_final_A14_L3c = $literal_formato_10;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_11) { $literal_final_A14_L3c = $literal_formato_11;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_12) { $literal_final_A14_L3c = $literal_formato_12;  } 
  $nota_final_A14_L3c_print = $literal_final_A14_L3c; } /* cierre literal */

  if ($row_datos_controlasign['n_convertir'] == 4 ) {  /* cualitativo */
  if ($nota_final_A14_L3c >= $comparativo_formato_1) { $cualitativa_final_A14_L3c = $cualitativa_formato_1;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_2) { $cualitativa_final_A14_L3c = $cualitativa_formato_2;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_3) { $cualitativa_final_A14_L3c = $cualitativa_formato_3;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_4) { $cualitativa_final_A14_L3c = $cualitativa_formato_4;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_5) { $cualitativa_final_A14_L3c = $cualitativa_formato_5;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_6) { $cualitativa_final_A14_L3c = $cualitativa_formato_6;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_7) { $cualitativa_final_A14_L3c = $cualitativa_formato_7;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_8) { $cualitativa_final_A14_L3c = $cualitativa_formato_8;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_9) { $cualitativa_final_A14_L3c = $cualitativa_formato_9;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_10) { $cualitativa_final_A14_L3c = $cualitativa_formato_10;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_11) { $cualitativa_final_A14_L3c = $cualitativa_formato_11;  }
  if ($nota_final_A14_L3c >= $comparativo_formato_12) { $cualitativa_final_A14_L3c = $cualitativa_formato_12;  } 
  $nota_final_A14_L3c_print = $cualitativa_final_A14_L3c; } /* cierre cualitativo */

if ($nota_final_A14_L3 == '' ) {
$nota_final_A14_L3c_print = " ";
}
echo $nota_final_A14_L3c_print;
        ?>  </td>
    </tr>

<?php  // ayuda a saber quien tiene mas nota acumulada

if ($row_datos_controlasign['a_suma'] == 1) { $nota_final_A1_L3_redon1_valida = $nota_final_A1_L3_redon1; } else { $nota_final_A1_L3_redon1_valida = 0; }
if ($row_datos_controlasign['b_suma'] == 1) { $nota_final_A2_L3_redon1_valida = $nota_final_A2_L3_redon1; } else { $nota_final_A2_L3_redon1_valida = 0; }
if ($row_datos_controlasign['c_suma'] == 1) { $nota_final_A3_L3_redon1_valida = $nota_final_A3_L3_redon1; } else { $nota_final_A3_L3_redon1_valida = 0; }
if ($row_datos_controlasign['d_suma'] == 1) { $nota_final_A4_L3_redon1_valida = $nota_final_A4_L3_redon1; } else { $nota_final_A4_L3_redon1_valida = 0; }
if ($row_datos_controlasign['e_suma'] == 1) { $nota_final_A5_L3_redon1_valida = $nota_final_A5_L3_redon1; } else { $nota_final_A5_L3_redon1_valida = 0; }
if ($row_datos_controlasign['f_suma'] == 1) { $nota_final_A6_L3_redon1_valida = $nota_final_A6_L3_redon1; } else { $nota_final_A6_L3_redon1_valida = 0; }
if ($row_datos_controlasign['g_suma'] == 1) { $nota_final_A7_L3_redon1_valida = $nota_final_A7_L3_redon1; } else { $nota_final_A7_L3_redon1_valida = 0; }
if ($row_datos_controlasign['h_suma'] == 1) { $nota_final_A8_L3_redon1_valida = $nota_final_A8_L3_redon1; } else { $nota_final_A8_L3_redon1_valida = 0; }
if ($row_datos_controlasign['i_suma'] == 1) { $nota_final_A9_L3_redon1_valida = $nota_final_A9_L3_redon1; } else { $nota_final_A9_L3_redon1_valida = 0; }
if ($row_datos_controlasign['j_suma'] == 1) { $nota_final_A10_L3_redon1_valida = $nota_final_A10_L3_redon1; } else { $nota_final_A10_L3_redon1_valida = 0;}
if ($row_datos_controlasign['k_suma'] == 1) { $nota_final_A11_L3_redon1_valida = $nota_final_A11_L3_redon1; } else { $nota_final_A11_L3_redon1_valida = 0; }
if ($row_datos_controlasign['l_suma'] == 1) { $nota_final_A12_L3_redon1_valida = $nota_final_A12_L3_redon1; } else { $nota_final_A12_L3_redon1_valida = 0; }
if ($row_datos_controlasign['m_suma'] == 1) { $nota_final_A13_L3_redon1_valida = $nota_final_A13_L3_redon1; } else { $nota_final_A13_L3_redon1_valida = 0; }
if ($row_datos_controlasign['n_suma'] == 1) { $nota_final_A14_L3_redon1_valida = $nota_final_A14_L3_redon1; } else { $nota_final_A14_L3_redon1_valida = 0; }


      $nooootaaa_3 = $nota_final_A1_L3_redon1_valida + $nota_final_A2_L3_redon1_valida + $nota_final_A3_L3_redon1_valida + $nota_final_A4_L3_redon1_valida + $nota_final_A5_L3_redon1_valida
                   + $nota_final_A6_L3_redon1_valida + $nota_final_A7_L3_redon1_valida + $nota_final_A8_L3_redon1_valida + $nota_final_A9_L3_redon1_valida + $nota_final_A10_L3_redon1_valida
                   + $nota_final_A11_L3_redon1_valida + $nota_final_A12_L3_redon1_valida + $nota_final_A13_L3_redon1_valida + $nota_final_A14_L3_redon1_valida;


      include("../conectar.php");


$nota_103 = "UPDATE reg_estudiantes
SET nota_3= '$nooootaaa_3'
WHERE id_estud='$id_estxx1'";


$datos_nota_103 = mysqli_query($enlace, $nota_103) or die(mysqli_error());


mysqli_close($enlace);


      ?>










    <tr>
    <th scope="row" BGCOLOR="<?php echo $color0;?>"><i>Def.</i></th>  
<td BGCOLOR="<?php echo $color0;?>" <?php if
($row_datos_controlasign['a_aaa'] == '' ){?>style="display:none"<?php } ?> >



  <b><?php $fin_A1 = ( ($nota_final_A1_L1a+$nota_final_A1_L2b+$nota_final_A1_L3c)/$promedio_L123_A1 );  $fin_A1_f=number_format($fin_A1); 
  if ($row_datos_controlasign['a_convertir'] == 1 ) {  /* numerico */
       $fin_A1_f_print = $fin_A1_f;
} /* cierre numerico */
if ($row_datos_controlasign['a_convertir'] == 2 ) {  /* alfabetico */
   if ($fin_A1_f >= $comparativo_formato_1) { $alfabetico_fin_A1_f = $alfabetico_formato_1;  }
   if ($fin_A1_f >= $comparativo_formato_2) { $alfabetico_fin_A1_f = $alfabetico_formato_2;  }
   if ($fin_A1_f >= $comparativo_formato_3) { $alfabetico_fin_A1_f = $alfabetico_formato_3;  }
   if ($fin_A1_f >= $comparativo_formato_4) { $alfabetico_fin_A1_f = $alfabetico_formato_4;  }
   if ($fin_A1_f >= $comparativo_formato_5) { $alfabetico_fin_A1_f = $alfabetico_formato_5;  }
   if ($fin_A1_f >= $comparativo_formato_6) { $alfabetico_fin_A1_f = $alfabetico_formato_6;  }
   if ($fin_A1_f >= $comparativo_formato_7) { $alfabetico_fin_A1_f = $alfabetico_formato_7;  }
   if ($fin_A1_f >= $comparativo_formato_8) { $alfabetico_fin_A1_f = $alfabetico_formato_8;  }
   if ($fin_A1_f >= $comparativo_formato_9) { $alfabetico_fin_A1_f = $alfabetico_formato_9;  }
   if ($fin_A1_f >= $comparativo_formato_10) { $alfabetico_fin_A1_f = $alfabetico_formato_10;  }
   if ($fin_A1_f >= $comparativo_formato_11) { $alfabetico_fin_A1_f = $alfabetico_formato_11;  }
   if ($fin_A1_f >= $comparativo_formato_12) { $alfabetico_fin_A1_f = $alfabetico_formato_12;  }
   $fin_A1_f_print =  $alfabetico_fin_A1_f; } /* cierre alfabetico */

if ($row_datos_controlasign['a_convertir'] == 3 ) {  /* literal */
  if ($fin_A1_f >= $comparativo_formato_1) { $literal_fin_A1_f = $literal_formato_1;  }
  if ($fin_A1_f >= $comparativo_formato_2) { $literal_fin_A1_f = $literal_formato_2;  }
  if ($fin_A1_f >= $comparativo_formato_3) { $literal_fin_A1_f = $literal_formato_3;  }
  if ($fin_A1_f >= $comparativo_formato_4) { $literal_fin_A1_f = $literal_formato_4;  }
  if ($fin_A1_f >= $comparativo_formato_5) { $literal_fin_A1_f = $literal_formato_5;  }
  if ($fin_A1_f >= $comparativo_formato_6) { $literal_fin_A1_f = $literal_formato_6;  }
  if ($fin_A1_f >= $comparativo_formato_7) { $literal_fin_A1_f = $literal_formato_7;  }
  if ($fin_A1_f >= $comparativo_formato_8) { $literal_fin_A1_f = $literal_formato_8;  }
  if ($fin_A1_f >= $comparativo_formato_9) { $literal_fin_A1_f = $literal_formato_9;  }
  if ($fin_A1_f >= $comparativo_formato_10) { $literal_fin_A1_f = $literal_formato_10;  }
  if ($fin_A1_f >= $comparativo_formato_11) { $literal_fin_A1_f = $literal_formato_11;  }
  if ($fin_A1_f >= $comparativo_formato_12) { $literal_fin_A1_f = $literal_formato_12;  } 
  $fin_A1_f_print =  $literal_fin_A1_f; } /* cierre literal */


if ($row_datos_controlasign['a_convertir'] == 4 ) {  /* cualitativo */
  if ($fin_A1_f >= $comparativo_formato_1) { $cualitativa_fin_A1_f = $cualitativa_formato_1;  }
  if ($fin_A1_f >= $comparativo_formato_2) { $cualitativa_fin_A1_f = $cualitativa_formato_2;  }
  if ($fin_A1_f >= $comparativo_formato_3) { $cualitativa_fin_A1_f = $cualitativa_formato_3;  }
  if ($fin_A1_f >= $comparativo_formato_4) { $cualitativa_fin_A1_f = $cualitativa_formato_4;  }
  if ($fin_A1_f >= $comparativo_formato_5) { $cualitativa_fin_A1_f = $cualitativa_formato_5;  }
  if ($fin_A1_f >= $comparativo_formato_6) { $cualitativa_fin_A1_f = $cualitativa_formato_6;  }
  if ($fin_A1_f >= $comparativo_formato_7) { $cualitativa_fin_A1_f = $cualitativa_formato_7;  }
  if ($fin_A1_f >= $comparativo_formato_8) { $cualitativa_fin_A1_f = $cualitativa_formato_8;  }
  if ($fin_A1_f >= $comparativo_formato_9) { $cualitativa_fin_A1_f = $cualitativa_formato_9;  }
  if ($fin_A1_f >= $comparativo_formato_10) { $cualitativa_fin_A1_f = $cualitativa_formato_10;  }
  if ($fin_A1_f >= $comparativo_formato_11) { $cualitativa_fin_A1_f = $cualitativa_formato_11;  }
  if ($fin_A1_f >= $comparativo_formato_12) { $cualitativa_fin_A1_f = $cualitativa_formato_12;  } 
 $fin_A1_f_print =  $cualitativa_fin_A1_f; } /* cierre cualitativo */

 echo $fin_A1_f_print;   ?> <?php   $simbolillo1 = " ";  if ($notaAu_Final_A1 != '') {  $simbolillo1 = "+"; }echo $simbolillo1;?><?php echo $notaAu_Final_A1;?>
  
  </b>






</td>

<td BGCOLOR="<?php echo $color0;?>" <?php if
($row_datos_controlasign['b_bbb'] == '' ){?>style="display:none"<?php } ?> >
   <b><?php $fin_A2 = ( ($nota_final_A2_L1a+$nota_final_A2_L2b+$nota_final_A2_L3c)/$promedio_L123_A2 );  $fin_A2_f=number_format($fin_A2); 
  if ($row_datos_controlasign['b_convertir'] == 1 ) {  /* numerico */
       $fin_A2_f_print = $fin_A2_f;
} /* cierre numerico */
if ($row_datos_controlasign['b_convertir'] == 2 ) {  /* alfabetico */
   if ($fin_A2_f >= $comparativo_formato_1) { $alfabetico_fin_A2_f = $alfabetico_formato_1;  }
   if ($fin_A2_f >= $comparativo_formato_2) { $alfabetico_fin_A2_f = $alfabetico_formato_2;  }
   if ($fin_A2_f >= $comparativo_formato_3) { $alfabetico_fin_A2_f = $alfabetico_formato_3;  }
   if ($fin_A2_f >= $comparativo_formato_4) { $alfabetico_fin_A2_f = $alfabetico_formato_4;  }
   if ($fin_A2_f >= $comparativo_formato_5) { $alfabetico_fin_A2_f = $alfabetico_formato_5;  }
   if ($fin_A2_f >= $comparativo_formato_6) { $alfabetico_fin_A2_f = $alfabetico_formato_6;  }
   if ($fin_A2_f >= $comparativo_formato_7) { $alfabetico_fin_A2_f = $alfabetico_formato_7;  }
   if ($fin_A2_f >= $comparativo_formato_8) { $alfabetico_fin_A2_f = $alfabetico_formato_8;  }
   if ($fin_A2_f >= $comparativo_formato_9) { $alfabetico_fin_A2_f = $alfabetico_formato_9;  }
   if ($fin_A2_f >= $comparativo_formato_10) { $alfabetico_fin_A2_f = $alfabetico_formato_10;  }
   if ($fin_A2_f >= $comparativo_formato_11) { $alfabetico_fin_A2_f = $alfabetico_formato_11;  }
   if ($fin_A2_f >= $comparativo_formato_12) { $alfabetico_fin_A2_f = $alfabetico_formato_12;  }
   $fin_A2_f_print =  $alfabetico_fin_A2_f; } /* cierre alfabetico */

if ($row_datos_controlasign['b_convertir'] == 3 ) {  /* literal */
  if ($fin_A2_f >= $comparativo_formato_1) { $literal_fin_A2_f = $literal_formato_1;  }
  if ($fin_A2_f >= $comparativo_formato_2) { $literal_fin_A2_f = $literal_formato_2;  }
  if ($fin_A2_f >= $comparativo_formato_3) { $literal_fin_A2_f = $literal_formato_3;  }
  if ($fin_A2_f >= $comparativo_formato_4) { $literal_fin_A2_f = $literal_formato_4;  }
  if ($fin_A2_f >= $comparativo_formato_5) { $literal_fin_A2_f = $literal_formato_5;  }
  if ($fin_A2_f >= $comparativo_formato_6) { $literal_fin_A2_f = $literal_formato_6;  }
  if ($fin_A2_f >= $comparativo_formato_7) { $literal_fin_A2_f = $literal_formato_7;  }
  if ($fin_A2_f >= $comparativo_formato_8) { $literal_fin_A2_f = $literal_formato_8;  }
  if ($fin_A2_f >= $comparativo_formato_9) { $literal_fin_A2_f = $literal_formato_9;  }
  if ($fin_A2_f >= $comparativo_formato_10) { $literal_fin_A2_f = $literal_formato_10;  }
  if ($fin_A2_f >= $comparativo_formato_11) { $literal_fin_A2_f = $literal_formato_11;  }
  if ($fin_A2_f >= $comparativo_formato_12) { $literal_fin_A2_f = $literal_formato_12;  } 
  $fin_A2_f_print =  $literal_fin_A2_f; } /* cierre literal */


if ($row_datos_controlasign['b_convertir'] == 4 ) {  /* cualitativo */
  if ($fin_A2_f >= $comparativo_formato_1) { $cualitativa_fin_A2_f = $cualitativa_formato_1;  }
  if ($fin_A2_f >= $comparativo_formato_2) { $cualitativa_fin_A2_f = $cualitativa_formato_2;  }
  if ($fin_A2_f >= $comparativo_formato_3) { $cualitativa_fin_A2_f = $cualitativa_formato_3;  }
  if ($fin_A2_f >= $comparativo_formato_4) { $cualitativa_fin_A2_f = $cualitativa_formato_4;  }
  if ($fin_A2_f >= $comparativo_formato_5) { $cualitativa_fin_A2_f = $cualitativa_formato_5;  }
  if ($fin_A2_f >= $comparativo_formato_6) { $cualitativa_fin_A2_f = $cualitativa_formato_6;  }
  if ($fin_A2_f >= $comparativo_formato_7) { $cualitativa_fin_A2_f = $cualitativa_formato_7;  }
  if ($fin_A2_f >= $comparativo_formato_8) { $cualitativa_fin_A2_f = $cualitativa_formato_8;  }
  if ($fin_A2_f >= $comparativo_formato_9) { $cualitativa_fin_A2_f = $cualitativa_formato_9;  }
  if ($fin_A2_f >= $comparativo_formato_10) { $cualitativa_fin_A2_f = $cualitativa_formato_10;  }
  if ($fin_A2_f >= $comparativo_formato_11) { $cualitativa_fin_A2_f = $cualitativa_formato_11;  }
  if ($fin_A2_f >= $comparativo_formato_12) { $cualitativa_fin_A2_f = $cualitativa_formato_12;  } 
 $fin_A2_f_print =  $cualitativa_fin_A2_f; } /* cierre cualitativo */

 echo $fin_A2_f_print;   ?> <?php   $simbolillo2 = " ";  if ($notaAu_Final_A2 != '') {  $simbolillo2 = "+"; }echo $simbolillo2;?><?php echo $notaAu_Final_A2;?>
  
  </b></td>

<td BGCOLOR="<?php echo $color0;?>" <?php if
($row_datos_controlasign['c_ccc'] == '' ){?>style="display:none"<?php } ?> >
  <b><?php $fin_A3 = ( ($nota_final_A3_L1a+$nota_final_A3_L2b+$nota_final_A3_L3c)/$promedio_L123_A3 );  $fin_A3_f=number_format($fin_A3); 
  if ($row_datos_controlasign['c_convertir'] == 1 ) {  /* numerico */
       $fin_A3_f_print = $fin_A3_f;
} /* cierre numerico */
if ($row_datos_controlasign['c_convertir'] == 2 ) {  /* alfabetico */
   if ($fin_A3_f >= $comparativo_formato_1) { $alfabetico_fin_A3_f = $alfabetico_formato_1;  }
   if ($fin_A3_f >= $comparativo_formato_2) { $alfabetico_fin_A3_f = $alfabetico_formato_2;  }
   if ($fin_A3_f >= $comparativo_formato_3) { $alfabetico_fin_A3_f = $alfabetico_formato_3;  }
   if ($fin_A3_f >= $comparativo_formato_4) { $alfabetico_fin_A3_f = $alfabetico_formato_4;  }
   if ($fin_A3_f >= $comparativo_formato_5) { $alfabetico_fin_A3_f = $alfabetico_formato_5;  }
   if ($fin_A3_f >= $comparativo_formato_6) { $alfabetico_fin_A3_f = $alfabetico_formato_6;  }
   if ($fin_A3_f >= $comparativo_formato_7) { $alfabetico_fin_A3_f = $alfabetico_formato_7;  }
   if ($fin_A3_f >= $comparativo_formato_8) { $alfabetico_fin_A3_f = $alfabetico_formato_8;  }
   if ($fin_A3_f >= $comparativo_formato_9) { $alfabetico_fin_A3_f = $alfabetico_formato_9;  }
   if ($fin_A3_f >= $comparativo_formato_10) { $alfabetico_fin_A3_f = $alfabetico_formato_10;  }
   if ($fin_A3_f >= $comparativo_formato_11) { $alfabetico_fin_A3_f = $alfabetico_formato_11;  }
   if ($fin_A3_f >= $comparativo_formato_12) { $alfabetico_fin_A3_f = $alfabetico_formato_12;  }
   $fin_A3_f_print =  $alfabetico_fin_A3_f; } /* cierre alfabetico */

if ($row_datos_controlasign['c_convertir'] == 3 ) {  /* literal */
  if ($fin_A3_f >= $comparativo_formato_1) { $literal_fin_A3_f = $literal_formato_1;  }
  if ($fin_A3_f >= $comparativo_formato_2) { $literal_fin_A3_f = $literal_formato_2;  }
  if ($fin_A3_f >= $comparativo_formato_3) { $literal_fin_A3_f = $literal_formato_3;  }
  if ($fin_A3_f >= $comparativo_formato_4) { $literal_fin_A3_f = $literal_formato_4;  }
  if ($fin_A3_f >= $comparativo_formato_5) { $literal_fin_A3_f = $literal_formato_5;  }
  if ($fin_A3_f >= $comparativo_formato_6) { $literal_fin_A3_f = $literal_formato_6;  }
  if ($fin_A3_f >= $comparativo_formato_7) { $literal_fin_A3_f = $literal_formato_7;  }
  if ($fin_A3_f >= $comparativo_formato_8) { $literal_fin_A3_f = $literal_formato_8;  }
  if ($fin_A3_f >= $comparativo_formato_9) { $literal_fin_A3_f = $literal_formato_9;  }
  if ($fin_A3_f >= $comparativo_formato_10) { $literal_fin_A3_f = $literal_formato_10;  }
  if ($fin_A3_f >= $comparativo_formato_11) { $literal_fin_A3_f = $literal_formato_11;  }
  if ($fin_A3_f >= $comparativo_formato_12) { $literal_fin_A3_f = $literal_formato_12;  } 
  $fin_A3_f_print =  $literal_fin_A3_f; } /* cierre literal */


if ($row_datos_controlasign['c_convertir'] == 4 ) {  /* cualitativo */
  if ($fin_A3_f >= $comparativo_formato_1) { $cualitativa_fin_A3_f = $cualitativa_formato_1;  }
  if ($fin_A3_f >= $comparativo_formato_2) { $cualitativa_fin_A3_f = $cualitativa_formato_2;  }
  if ($fin_A3_f >= $comparativo_formato_3) { $cualitativa_fin_A3_f = $cualitativa_formato_3;  }
  if ($fin_A3_f >= $comparativo_formato_4) { $cualitativa_fin_A3_f = $cualitativa_formato_4;  }
  if ($fin_A3_f >= $comparativo_formato_5) { $cualitativa_fin_A3_f = $cualitativa_formato_5;  }
  if ($fin_A3_f >= $comparativo_formato_6) { $cualitativa_fin_A3_f = $cualitativa_formato_6;  }
  if ($fin_A3_f >= $comparativo_formato_7) { $cualitativa_fin_A3_f = $cualitativa_formato_7;  }
  if ($fin_A3_f >= $comparativo_formato_8) { $cualitativa_fin_A3_f = $cualitativa_formato_8;  }
  if ($fin_A3_f >= $comparativo_formato_9) { $cualitativa_fin_A3_f = $cualitativa_formato_9;  }
  if ($fin_A3_f >= $comparativo_formato_10) { $cualitativa_fin_A3_f = $cualitativa_formato_10;  }
  if ($fin_A3_f >= $comparativo_formato_11) { $cualitativa_fin_A3_f = $cualitativa_formato_11;  }
  if ($fin_A3_f >= $comparativo_formato_12) { $cualitativa_fin_A3_f = $cualitativa_formato_12;  } 
 $fin_A3_f_print =  $cualitativa_fin_A3_f; } /* cierre cualitativo */

  echo $fin_A3_f_print;   ?> <?php   $simbolillo3 = " ";  if ($notaAu_Final_A3 != '') {  $simbolillo3 = "+"; }echo $simbolillo3;?><?php echo $notaAu_Final_A3;?>
  
  </b></td>

<td BGCOLOR="<?php echo $color0;?>" <?php if
($row_datos_controlasign['d_ddd'] == '' ){?>style="display:none"<?php } ?> >
   <b><?php $fin_A4 = ( ($nota_final_A4_L1a+$nota_final_A4_L2b+$nota_final_A4_L3c)/$promedio_L123_A4 );  $fin_A4_f=number_format($fin_A4); 
  if ($row_datos_controlasign['d_convertir'] == 1 ) {  /* numerico */
       $fin_A4_f_print = $fin_A4_f;
} /* cierre numerico */
if ($row_datos_controlasign['d_convertir'] == 2 ) {  /* alfabetico */
   if ($fin_A4_f >= $comparativo_formato_1) { $alfabetico_fin_A4_f = $alfabetico_formato_1;  }
   if ($fin_A4_f >= $comparativo_formato_2) { $alfabetico_fin_A4_f = $alfabetico_formato_2;  }
   if ($fin_A4_f >= $comparativo_formato_3) { $alfabetico_fin_A4_f = $alfabetico_formato_3;  }
   if ($fin_A4_f >= $comparativo_formato_4) { $alfabetico_fin_A4_f = $alfabetico_formato_4;  }
   if ($fin_A4_f >= $comparativo_formato_5) { $alfabetico_fin_A4_f = $alfabetico_formato_5;  }
   if ($fin_A4_f >= $comparativo_formato_6) { $alfabetico_fin_A4_f = $alfabetico_formato_6;  }
   if ($fin_A4_f >= $comparativo_formato_7) { $alfabetico_fin_A4_f = $alfabetico_formato_7;  }
   if ($fin_A4_f >= $comparativo_formato_8) { $alfabetico_fin_A4_f = $alfabetico_formato_8;  }
   if ($fin_A4_f >= $comparativo_formato_9) { $alfabetico_fin_A4_f = $alfabetico_formato_9;  }
   if ($fin_A4_f >= $comparativo_formato_10) { $alfabetico_fin_A4_f = $alfabetico_formato_10;  }
   if ($fin_A4_f >= $comparativo_formato_11) { $alfabetico_fin_A4_f = $alfabetico_formato_11;  }
   if ($fin_A4_f >= $comparativo_formato_12) { $alfabetico_fin_A4_f = $alfabetico_formato_12;  }
   $fin_A4_f_print =  $alfabetico_fin_A4_f; } /* cierre alfabetico */

if ($row_datos_controlasign['d_convertir'] == 3 ) {  /* literal */
  if ($fin_A4_f >= $comparativo_formato_1) { $literal_fin_A4_f = $literal_formato_1;  }
  if ($fin_A4_f >= $comparativo_formato_2) { $literal_fin_A4_f = $literal_formato_2;  }
  if ($fin_A4_f >= $comparativo_formato_3) { $literal_fin_A4_f = $literal_formato_3;  }
  if ($fin_A4_f >= $comparativo_formato_4) { $literal_fin_A4_f = $literal_formato_4;  }
  if ($fin_A4_f >= $comparativo_formato_5) { $literal_fin_A4_f = $literal_formato_5;  }
  if ($fin_A4_f >= $comparativo_formato_6) { $literal_fin_A4_f = $literal_formato_6;  }
  if ($fin_A4_f >= $comparativo_formato_7) { $literal_fin_A4_f = $literal_formato_7;  }
  if ($fin_A4_f >= $comparativo_formato_8) { $literal_fin_A4_f = $literal_formato_8;  }
  if ($fin_A4_f >= $comparativo_formato_9) { $literal_fin_A4_f = $literal_formato_9;  }
  if ($fin_A4_f >= $comparativo_formato_10) { $literal_fin_A4_f = $literal_formato_10;  }
  if ($fin_A4_f >= $comparativo_formato_11) { $literal_fin_A4_f = $literal_formato_11;  }
  if ($fin_A4_f >= $comparativo_formato_12) { $literal_fin_A4_f = $literal_formato_12;  } 
  $fin_A4_f_print =  $literal_fin_A4_f; } /* cierre literal */


if ($row_datos_controlasign['d_convertir'] == 4 ) {  /* cualitativo */
  if ($fin_A4_f >= $comparativo_formato_1) { $cualitativa_fin_A4_f = $cualitativa_formato_1;  }
  if ($fin_A4_f >= $comparativo_formato_2) { $cualitativa_fin_A4_f = $cualitativa_formato_2;  }
  if ($fin_A4_f >= $comparativo_formato_3) { $cualitativa_fin_A4_f = $cualitativa_formato_3;  }
  if ($fin_A4_f >= $comparativo_formato_4) { $cualitativa_fin_A4_f = $cualitativa_formato_4;  }
  if ($fin_A4_f >= $comparativo_formato_5) { $cualitativa_fin_A4_f = $cualitativa_formato_5;  }
  if ($fin_A4_f >= $comparativo_formato_6) { $cualitativa_fin_A4_f = $cualitativa_formato_6;  }
  if ($fin_A4_f >= $comparativo_formato_7) { $cualitativa_fin_A4_f = $cualitativa_formato_7;  }
  if ($fin_A4_f >= $comparativo_formato_8) { $cualitativa_fin_A4_f = $cualitativa_formato_8;  }
  if ($fin_A4_f >= $comparativo_formato_9) { $cualitativa_fin_A4_f = $cualitativa_formato_9;  }
  if ($fin_A4_f >= $comparativo_formato_10) { $cualitativa_fin_A4_f = $cualitativa_formato_10;  }
  if ($fin_A4_f >= $comparativo_formato_11) { $cualitativa_fin_A4_f = $cualitativa_formato_11;  }
  if ($fin_A4_f >= $comparativo_formato_12) { $cualitativa_fin_A4_f = $cualitativa_formato_12;  } 
 $fin_A4_f_print =  $cualitativa_fin_A4_f; } /* cierre cualitativo */

 echo $fin_A4_f_print;   ?> <?php   $simbolillo4 = " ";  if ($notaAu_Final_A4 != '') {  $simbolillo4 = "+"; }echo $simbolillo4;?><?php echo $notaAu_Final_A4;?>
  
  </b></td>

<td BGCOLOR="<?php echo $color0;?>" <?php if
($row_datos_controlasign['e_eee'] == '' ){?>style="display:none"<?php } ?> >
  <b><?php $fin_A5 = ( ($nota_final_A5_L1a+$nota_final_A5_L2b+$nota_final_A5_L3c)/$promedio_L123_A5 );  $fin_A5_f=number_format($fin_A5); 
  if ($row_datos_controlasign['e_convertir'] == 1 ) {  /* numerico */
       $fin_A5_f_print = $fin_A5_f;
} /* cierre numerico */
if ($row_datos_controlasign['e_convertir'] == 2 ) {  /* alfabetico */
   if ($fin_A5_f >= $comparativo_formato_1) { $alfabetico_fin_A5_f = $alfabetico_formato_1;  }
   if ($fin_A5_f >= $comparativo_formato_2) { $alfabetico_fin_A5_f = $alfabetico_formato_2;  }
   if ($fin_A5_f >= $comparativo_formato_3) { $alfabetico_fin_A5_f = $alfabetico_formato_3;  }
   if ($fin_A5_f >= $comparativo_formato_4) { $alfabetico_fin_A5_f = $alfabetico_formato_4;  }
   if ($fin_A5_f >= $comparativo_formato_5) { $alfabetico_fin_A5_f = $alfabetico_formato_5;  }
   if ($fin_A5_f >= $comparativo_formato_6) { $alfabetico_fin_A5_f = $alfabetico_formato_6;  }
   if ($fin_A5_f >= $comparativo_formato_7) { $alfabetico_fin_A5_f = $alfabetico_formato_7;  }
   if ($fin_A5_f >= $comparativo_formato_8) { $alfabetico_fin_A5_f = $alfabetico_formato_8;  }
   if ($fin_A5_f >= $comparativo_formato_9) { $alfabetico_fin_A5_f = $alfabetico_formato_9;  }
   if ($fin_A5_f >= $comparativo_formato_10) { $alfabetico_fin_A5_f = $alfabetico_formato_10;  }
   if ($fin_A5_f >= $comparativo_formato_11) { $alfabetico_fin_A5_f = $alfabetico_formato_11;  }
   if ($fin_A5_f >= $comparativo_formato_12) { $alfabetico_fin_A5_f = $alfabetico_formato_12;  }
   $fin_A5_f_print =  $alfabetico_fin_A5_f; } /* cierre alfabetico */

if ($row_datos_controlasign['e_convertir'] == 3 ) {  /* literal */
  if ($fin_A5_f >= $comparativo_formato_1) { $literal_fin_A5_f = $literal_formato_1;  }
  if ($fin_A5_f >= $comparativo_formato_2) { $literal_fin_A5_f = $literal_formato_2;  }
  if ($fin_A5_f >= $comparativo_formato_3) { $literal_fin_A5_f = $literal_formato_3;  }
  if ($fin_A5_f >= $comparativo_formato_4) { $literal_fin_A5_f = $literal_formato_4;  }
  if ($fin_A5_f >= $comparativo_formato_5) { $literal_fin_A5_f = $literal_formato_5;  }
  if ($fin_A5_f >= $comparativo_formato_6) { $literal_fin_A5_f = $literal_formato_6;  }
  if ($fin_A5_f >= $comparativo_formato_7) { $literal_fin_A5_f = $literal_formato_7;  }
  if ($fin_A5_f >= $comparativo_formato_8) { $literal_fin_A5_f = $literal_formato_8;  }
  if ($fin_A5_f >= $comparativo_formato_9) { $literal_fin_A5_f = $literal_formato_9;  }
  if ($fin_A5_f >= $comparativo_formato_10) { $literal_fin_A5_f = $literal_formato_10;  }
  if ($fin_A5_f >= $comparativo_formato_11) { $literal_fin_A5_f = $literal_formato_11;  }
  if ($fin_A5_f >= $comparativo_formato_12) { $literal_fin_A5_f = $literal_formato_12;  } 
  $fin_A5_f_print =  $literal_fin_A5_f; } /* cierre literal */


if ($row_datos_controlasign['e_convertir'] == 4 ) {  /* cualitativo */
  if ($fin_A5_f >= $comparativo_formato_1) { $cualitativa_fin_A5_f = $cualitativa_formato_1;  }
  if ($fin_A5_f >= $comparativo_formato_2) { $cualitativa_fin_A5_f = $cualitativa_formato_2;  }
  if ($fin_A5_f >= $comparativo_formato_3) { $cualitativa_fin_A5_f = $cualitativa_formato_3;  }
  if ($fin_A5_f >= $comparativo_formato_4) { $cualitativa_fin_A5_f = $cualitativa_formato_4;  }
  if ($fin_A5_f >= $comparativo_formato_5) { $cualitativa_fin_A5_f = $cualitativa_formato_5;  }
  if ($fin_A5_f >= $comparativo_formato_6) { $cualitativa_fin_A5_f = $cualitativa_formato_6;  }
  if ($fin_A5_f >= $comparativo_formato_7) { $cualitativa_fin_A5_f = $cualitativa_formato_7;  }
  if ($fin_A5_f >= $comparativo_formato_8) { $cualitativa_fin_A5_f = $cualitativa_formato_8;  }
  if ($fin_A5_f >= $comparativo_formato_9) { $cualitativa_fin_A5_f = $cualitativa_formato_9;  }
  if ($fin_A5_f >= $comparativo_formato_10) { $cualitativa_fin_A5_f = $cualitativa_formato_10;  }
  if ($fin_A5_f >= $comparativo_formato_11) { $cualitativa_fin_A5_f = $cualitativa_formato_11;  }
  if ($fin_A5_f >= $comparativo_formato_12) { $cualitativa_fin_A5_f = $cualitativa_formato_12;  } 
 $fin_A5_f_print =  $cualitativa_fin_A5_f; } /* cierre cualitativo */

  echo $fin_A5_f_print;   ?> <?php   $simbolillo5 = " ";  if ($notaAu_Final_A5 != '') {  $simbolillo5 = "+"; }echo $simbolillo5;?><?php echo $notaAu_Final_A5;?>
  
  </b></td>

<td BGCOLOR="<?php echo $color0;?>" <?php if
($row_datos_controlasign['f_fff'] == '' ){?>style="display:none"<?php } ?> >
   <b><?php $fin_A6 = ( ($nota_final_A6_L1a+$nota_final_A6_L2b+$nota_final_A6_L3c)/$promedio_L123_A6 );  $fin_A6_f=number_format($fin_A6); 
  if ($row_datos_controlasign['f_convertir'] == 1 ) {  /* numerico */
       $fin_A6_f_print = $fin_A6_f;
} /* cierre numerico */
if ($row_datos_controlasign['f_convertir'] == 2 ) {  /* alfabetico */
   if ($fin_A6_f >= $comparativo_formato_1) { $alfabetico_fin_A6_f = $alfabetico_formato_1;  }
   if ($fin_A6_f >= $comparativo_formato_2) { $alfabetico_fin_A6_f = $alfabetico_formato_2;  }
   if ($fin_A6_f >= $comparativo_formato_3) { $alfabetico_fin_A6_f = $alfabetico_formato_3;  }
   if ($fin_A6_f >= $comparativo_formato_4) { $alfabetico_fin_A6_f = $alfabetico_formato_4;  }
   if ($fin_A6_f >= $comparativo_formato_5) { $alfabetico_fin_A6_f = $alfabetico_formato_5;  }
   if ($fin_A6_f >= $comparativo_formato_6) { $alfabetico_fin_A6_f = $alfabetico_formato_6;  }
   if ($fin_A6_f >= $comparativo_formato_7) { $alfabetico_fin_A6_f = $alfabetico_formato_7;  }
   if ($fin_A6_f >= $comparativo_formato_8) { $alfabetico_fin_A6_f = $alfabetico_formato_8;  }
   if ($fin_A6_f >= $comparativo_formato_9) { $alfabetico_fin_A6_f = $alfabetico_formato_9;  }
   if ($fin_A6_f >= $comparativo_formato_10) { $alfabetico_fin_A6_f = $alfabetico_formato_10;  }
   if ($fin_A6_f >= $comparativo_formato_11) { $alfabetico_fin_A6_f = $alfabetico_formato_11;  }
   if ($fin_A6_f >= $comparativo_formato_12) { $alfabetico_fin_A6_f = $alfabetico_formato_12;  }
   $fin_A6_f_print =  $alfabetico_fin_A6_f; } /* cierre alfabetico */

if ($row_datos_controlasign['f_convertir'] == 3 ) {  /* literal */
  if ($fin_A6_f >= $comparativo_formato_1) { $literal_fin_A6_f = $literal_formato_1;  }
  if ($fin_A6_f >= $comparativo_formato_2) { $literal_fin_A6_f = $literal_formato_2;  }
  if ($fin_A6_f >= $comparativo_formato_3) { $literal_fin_A6_f = $literal_formato_3;  }
  if ($fin_A6_f >= $comparativo_formato_4) { $literal_fin_A6_f = $literal_formato_4;  }
  if ($fin_A6_f >= $comparativo_formato_5) { $literal_fin_A6_f = $literal_formato_5;  }
  if ($fin_A6_f >= $comparativo_formato_6) { $literal_fin_A6_f = $literal_formato_6;  }
  if ($fin_A6_f >= $comparativo_formato_7) { $literal_fin_A6_f = $literal_formato_7;  }
  if ($fin_A6_f >= $comparativo_formato_8) { $literal_fin_A6_f = $literal_formato_8;  }
  if ($fin_A6_f >= $comparativo_formato_9) { $literal_fin_A6_f = $literal_formato_9;  }
  if ($fin_A6_f >= $comparativo_formato_10) { $literal_fin_A6_f = $literal_formato_10;  }
  if ($fin_A6_f >= $comparativo_formato_11) { $literal_fin_A6_f = $literal_formato_11;  }
  if ($fin_A6_f >= $comparativo_formato_12) { $literal_fin_A6_f = $literal_formato_12;  } 
  $fin_A6_f_print =  $literal_fin_A6_f; } /* cierre literal */


if ($row_datos_controlasign['f_convertir'] == 4 ) {  /* cualitativo */
  if ($fin_A6_f >= $comparativo_formato_1) { $cualitativa_fin_A6_f = $cualitativa_formato_1;  }
  if ($fin_A6_f >= $comparativo_formato_2) { $cualitativa_fin_A6_f = $cualitativa_formato_2;  }
  if ($fin_A6_f >= $comparativo_formato_3) { $cualitativa_fin_A6_f = $cualitativa_formato_3;  }
  if ($fin_A6_f >= $comparativo_formato_4) { $cualitativa_fin_A6_f = $cualitativa_formato_4;  }
  if ($fin_A6_f >= $comparativo_formato_5) { $cualitativa_fin_A6_f = $cualitativa_formato_5;  }
  if ($fin_A6_f >= $comparativo_formato_6) { $cualitativa_fin_A6_f = $cualitativa_formato_6;  }
  if ($fin_A6_f >= $comparativo_formato_7) { $cualitativa_fin_A6_f = $cualitativa_formato_7;  }
  if ($fin_A6_f >= $comparativo_formato_8) { $cualitativa_fin_A6_f = $cualitativa_formato_8;  }
  if ($fin_A6_f >= $comparativo_formato_9) { $cualitativa_fin_A6_f = $cualitativa_formato_9;  }
  if ($fin_A6_f >= $comparativo_formato_10) { $cualitativa_fin_A6_f = $cualitativa_formato_10;  }
  if ($fin_A6_f >= $comparativo_formato_11) { $cualitativa_fin_A6_f = $cualitativa_formato_11;  }
  if ($fin_A6_f >= $comparativo_formato_12) { $cualitativa_fin_A6_f = $cualitativa_formato_12;  } 
 $fin_A6_f_print =  $cualitativa_fin_A6_f; } /* cierre cualitativo */

  echo $fin_A6_f_print;   ?> <?php   $simbolillo6 = " ";  if ($notaAu_Final_A6 != '') {  $simbolillo6 = "+"; }echo $simbolillo6;?><?php echo $notaAu_Final_A6;?>
  
  </b></td>

<td BGCOLOR="<?php echo $color0;?>" <?php if
($row_datos_controlasign['g_ggg'] == '' ){?>style="display:none"<?php } ?> >
 <b><?php $fin_A7 = ( ($nota_final_A7_L1a+$nota_final_A7_L2b+$nota_final_A7_L3c)/$promedio_L123_A7 );  $fin_A7_f=number_format($fin_A7); 
  if ($row_datos_controlasign['g_convertir'] == 1 ) {  /* numerico */
       $fin_A7_f_print = $fin_A7_f;
} /* cierre numerico */
if ($row_datos_controlasign['g_convertir'] == 2 ) {  /* alfabetico */
   if ($fin_A7_f >= $comparativo_formato_1) { $alfabetico_fin_A7_f = $alfabetico_formato_1;  }
   if ($fin_A7_f >= $comparativo_formato_2) { $alfabetico_fin_A7_f = $alfabetico_formato_2;  }
   if ($fin_A7_f >= $comparativo_formato_3) { $alfabetico_fin_A7_f = $alfabetico_formato_3;  }
   if ($fin_A7_f >= $comparativo_formato_4) { $alfabetico_fin_A7_f = $alfabetico_formato_4;  }
   if ($fin_A7_f >= $comparativo_formato_5) { $alfabetico_fin_A7_f = $alfabetico_formato_5;  }
   if ($fin_A7_f >= $comparativo_formato_6) { $alfabetico_fin_A7_f = $alfabetico_formato_6;  }
   if ($fin_A7_f >= $comparativo_formato_7) { $alfabetico_fin_A7_f = $alfabetico_formato_7;  }
   if ($fin_A7_f >= $comparativo_formato_8) { $alfabetico_fin_A7_f = $alfabetico_formato_8;  }
   if ($fin_A7_f >= $comparativo_formato_9) { $alfabetico_fin_A7_f = $alfabetico_formato_9;  }
   if ($fin_A7_f >= $comparativo_formato_10) { $alfabetico_fin_A7_f = $alfabetico_formato_10;  }
   if ($fin_A7_f >= $comparativo_formato_11) { $alfabetico_fin_A7_f = $alfabetico_formato_11;  }
   if ($fin_A7_f >= $comparativo_formato_12) { $alfabetico_fin_A7_f = $alfabetico_formato_12;  }
   $fin_A7_f_print =  $alfabetico_fin_A7_f; } /* cierre alfabetico */

if ($row_datos_controlasign['g_convertir'] == 3 ) {  /* literal */
  if ($fin_A7_f >= $comparativo_formato_1) { $literal_fin_A7_f = $literal_formato_1;  }
  if ($fin_A7_f >= $comparativo_formato_2) { $literal_fin_A7_f = $literal_formato_2;  }
  if ($fin_A7_f >= $comparativo_formato_3) { $literal_fin_A7_f = $literal_formato_3;  }
  if ($fin_A7_f >= $comparativo_formato_4) { $literal_fin_A7_f = $literal_formato_4;  }
  if ($fin_A7_f >= $comparativo_formato_5) { $literal_fin_A7_f = $literal_formato_5;  }
  if ($fin_A7_f >= $comparativo_formato_6) { $literal_fin_A7_f = $literal_formato_6;  }
  if ($fin_A7_f >= $comparativo_formato_7) { $literal_fin_A7_f = $literal_formato_7;  }
  if ($fin_A7_f >= $comparativo_formato_8) { $literal_fin_A7_f = $literal_formato_8;  }
  if ($fin_A7_f >= $comparativo_formato_9) { $literal_fin_A7_f = $literal_formato_9;  }
  if ($fin_A7_f >= $comparativo_formato_10) { $literal_fin_A7_f = $literal_formato_10;  }
  if ($fin_A7_f >= $comparativo_formato_11) { $literal_fin_A7_f = $literal_formato_11;  }
  if ($fin_A7_f >= $comparativo_formato_12) { $literal_fin_A7_f = $literal_formato_12;  } 
  $fin_A7_f_print =  $literal_fin_A7_f; } /* cierre literal */


if ($row_datos_controlasign['g_convertir'] == 4 ) {  /* cualitativo */
  if ($fin_A7_f >= $comparativo_formato_1) { $cualitativa_fin_A7_f = $cualitativa_formato_1;  }
  if ($fin_A7_f >= $comparativo_formato_2) { $cualitativa_fin_A7_f = $cualitativa_formato_2;  }
  if ($fin_A7_f >= $comparativo_formato_3) { $cualitativa_fin_A7_f = $cualitativa_formato_3;  }
  if ($fin_A7_f >= $comparativo_formato_4) { $cualitativa_fin_A7_f = $cualitativa_formato_4;  }
  if ($fin_A7_f >= $comparativo_formato_5) { $cualitativa_fin_A7_f = $cualitativa_formato_5;  }
  if ($fin_A7_f >= $comparativo_formato_6) { $cualitativa_fin_A7_f = $cualitativa_formato_6;  }
  if ($fin_A7_f >= $comparativo_formato_7) { $cualitativa_fin_A7_f = $cualitativa_formato_7;  }
  if ($fin_A7_f >= $comparativo_formato_8) { $cualitativa_fin_A7_f = $cualitativa_formato_8;  }
  if ($fin_A7_f >= $comparativo_formato_9) { $cualitativa_fin_A7_f = $cualitativa_formato_9;  }
  if ($fin_A7_f >= $comparativo_formato_10) { $cualitativa_fin_A7_f = $cualitativa_formato_10;  }
  if ($fin_A7_f >= $comparativo_formato_11) { $cualitativa_fin_A7_f = $cualitativa_formato_11;  }
  if ($fin_A7_f >= $comparativo_formato_12) { $cualitativa_fin_A7_f = $cualitativa_formato_12;  } 
 $fin_A7_f_print =  $cualitativa_fin_A7_f; } /* cierre cualitativo */

  echo $fin_A7_f_print;   ?> <?php   $simbolillo7 = " ";  if ($notaAu_Final_A7 != '') {  $simbolillo7 = "+"; }echo $simbolillo7;?><?php echo $notaAu_Final_A7;?>
  
  </b></td>

<td BGCOLOR="<?php echo $color0;?>" <?php if
($row_datos_controlasign['h_hhh'] == '' ){?>style="display:none"<?php } ?> >
  <b><?php $fin_A8 = ( ($nota_final_A8_L1a+$nota_final_A8_L2b+$nota_final_A8_L3c)/$promedio_L123_A8 );  $fin_A8_f=number_format($fin_A8); 
  if ($row_datos_controlasign['h_convertir'] == 1 ) {  /* numerico */
       $fin_A8_f_print = $fin_A8_f;
} /* cierre numerico */
if ($row_datos_controlasign['h_convertir'] == 2 ) {  /* alfabetico */
   if ($fin_A8_f >= $comparativo_formato_1) { $alfabetico_fin_A8_f = $alfabetico_formato_1;  }
   if ($fin_A8_f >= $comparativo_formato_2) { $alfabetico_fin_A8_f = $alfabetico_formato_2;  }
   if ($fin_A8_f >= $comparativo_formato_3) { $alfabetico_fin_A8_f = $alfabetico_formato_3;  }
   if ($fin_A8_f >= $comparativo_formato_4) { $alfabetico_fin_A8_f = $alfabetico_formato_4;  }
   if ($fin_A8_f >= $comparativo_formato_5) { $alfabetico_fin_A8_f = $alfabetico_formato_5;  }
   if ($fin_A8_f >= $comparativo_formato_6) { $alfabetico_fin_A8_f = $alfabetico_formato_6;  }
   if ($fin_A8_f >= $comparativo_formato_7) { $alfabetico_fin_A8_f = $alfabetico_formato_7;  }
   if ($fin_A8_f >= $comparativo_formato_8) { $alfabetico_fin_A8_f = $alfabetico_formato_8;  }
   if ($fin_A8_f >= $comparativo_formato_9) { $alfabetico_fin_A8_f = $alfabetico_formato_9;  }
   if ($fin_A8_f >= $comparativo_formato_10) { $alfabetico_fin_A8_f = $alfabetico_formato_10;  }
   if ($fin_A8_f >= $comparativo_formato_11) { $alfabetico_fin_A8_f = $alfabetico_formato_11;  }
   if ($fin_A8_f >= $comparativo_formato_12) { $alfabetico_fin_A8_f = $alfabetico_formato_12;  }
   $fin_A8_f_print =  $alfabetico_fin_A8_f; } /* cierre alfabetico */

if ($row_datos_controlasign['h_convertir'] == 3 ) {  /* literal */
  if ($fin_A8_f >= $comparativo_formato_1) { $literal_fin_A8_f = $literal_formato_1;  }
  if ($fin_A8_f >= $comparativo_formato_2) { $literal_fin_A8_f = $literal_formato_2;  }
  if ($fin_A8_f >= $comparativo_formato_3) { $literal_fin_A8_f = $literal_formato_3;  }
  if ($fin_A8_f >= $comparativo_formato_4) { $literal_fin_A8_f = $literal_formato_4;  }
  if ($fin_A8_f >= $comparativo_formato_5) { $literal_fin_A8_f = $literal_formato_5;  }
  if ($fin_A8_f >= $comparativo_formato_6) { $literal_fin_A8_f = $literal_formato_6;  }
  if ($fin_A8_f >= $comparativo_formato_7) { $literal_fin_A8_f = $literal_formato_7;  }
  if ($fin_A8_f >= $comparativo_formato_8) { $literal_fin_A8_f = $literal_formato_8;  }
  if ($fin_A8_f >= $comparativo_formato_9) { $literal_fin_A8_f = $literal_formato_9;  }
  if ($fin_A8_f >= $comparativo_formato_10) { $literal_fin_A8_f = $literal_formato_10;  }
  if ($fin_A8_f >= $comparativo_formato_11) { $literal_fin_A8_f = $literal_formato_11;  }
  if ($fin_A8_f >= $comparativo_formato_12) { $literal_fin_A8_f = $literal_formato_12;  } 
  $fin_A8_f_print =  $literal_fin_A8_f; } /* cierre literal */


if ($row_datos_controlasign['h_convertir'] == 4 ) {  /* cualitativo */
  if ($fin_A8_f >= $comparativo_formato_1) { $cualitativa_fin_A8_f = $cualitativa_formato_1;  }
  if ($fin_A8_f >= $comparativo_formato_2) { $cualitativa_fin_A8_f = $cualitativa_formato_2;  }
  if ($fin_A8_f >= $comparativo_formato_3) { $cualitativa_fin_A8_f = $cualitativa_formato_3;  }
  if ($fin_A8_f >= $comparativo_formato_4) { $cualitativa_fin_A8_f = $cualitativa_formato_4;  }
  if ($fin_A8_f >= $comparativo_formato_5) { $cualitativa_fin_A8_f = $cualitativa_formato_5;  }
  if ($fin_A8_f >= $comparativo_formato_6) { $cualitativa_fin_A8_f = $cualitativa_formato_6;  }
  if ($fin_A8_f >= $comparativo_formato_7) { $cualitativa_fin_A8_f = $cualitativa_formato_7;  }
  if ($fin_A8_f >= $comparativo_formato_8) { $cualitativa_fin_A8_f = $cualitativa_formato_8;  }
  if ($fin_A8_f >= $comparativo_formato_9) { $cualitativa_fin_A8_f = $cualitativa_formato_9;  }
  if ($fin_A8_f >= $comparativo_formato_10) { $cualitativa_fin_A8_f = $cualitativa_formato_10;  }
  if ($fin_A8_f >= $comparativo_formato_11) { $cualitativa_fin_A8_f = $cualitativa_formato_11;  }
  if ($fin_A8_f >= $comparativo_formato_12) { $cualitativa_fin_A8_f = $cualitativa_formato_12;  } 
 $fin_A8_f_print =  $cualitativa_fin_A8_f; } /* cierre cualitativo */

  echo $fin_A8_f_print;   ?> <?php   $simbolillo8 = " ";  if ($notaAu_Final_A8 != '') {  $simbolillo8 = "+"; }echo $simbolillo8;?><?php echo $notaAu_Final_A8;?>
  
  </b></td>

<td BGCOLOR="<?php echo $color0;?>" <?php if
($row_datos_controlasign['i_iii'] == '' ){?>style="display:none"<?php } ?> >
   <b><?php $fin_A9 = ( ($nota_final_A9_L1a+$nota_final_A9_L2b+$nota_final_A9_L3c)/$promedio_L123_A9 );  $fin_A9_f=number_format($fin_A9); 
  if ($row_datos_controlasign['i_convertir'] == 1 ) {  /* numerico */
       $fin_A9_f_print = $fin_A9_f;
} /* cierre numerico */
if ($row_datos_controlasign['i_convertir'] == 2 ) {  /* alfabetico */
   if ($fin_A9_f >= $comparativo_formato_1) { $alfabetico_fin_A9_f = $alfabetico_formato_1;  }
   if ($fin_A9_f >= $comparativo_formato_2) { $alfabetico_fin_A9_f = $alfabetico_formato_2;  }
   if ($fin_A9_f >= $comparativo_formato_3) { $alfabetico_fin_A9_f = $alfabetico_formato_3;  }
   if ($fin_A9_f >= $comparativo_formato_4) { $alfabetico_fin_A9_f = $alfabetico_formato_4;  }
   if ($fin_A9_f >= $comparativo_formato_5) { $alfabetico_fin_A9_f = $alfabetico_formato_5;  }
   if ($fin_A9_f >= $comparativo_formato_6) { $alfabetico_fin_A9_f = $alfabetico_formato_6;  }
   if ($fin_A9_f >= $comparativo_formato_7) { $alfabetico_fin_A9_f = $alfabetico_formato_7;  }
   if ($fin_A9_f >= $comparativo_formato_8) { $alfabetico_fin_A9_f = $alfabetico_formato_8;  }
   if ($fin_A9_f >= $comparativo_formato_9) { $alfabetico_fin_A9_f = $alfabetico_formato_9;  }
   if ($fin_A9_f >= $comparativo_formato_10) { $alfabetico_fin_A9_f = $alfabetico_formato_10;  }
   if ($fin_A9_f >= $comparativo_formato_11) { $alfabetico_fin_A9_f = $alfabetico_formato_11;  }
   if ($fin_A9_f >= $comparativo_formato_12) { $alfabetico_fin_A9_f = $alfabetico_formato_12;  }
   $fin_A9_f_print =  $alfabetico_fin_A9_f; } /* cierre alfabetico */

if ($row_datos_controlasign['i_convertir'] == 3 ) {  /* literal */
  if ($fin_A9_f >= $comparativo_formato_1) { $literal_fin_A9_f = $literal_formato_1;  }
  if ($fin_A9_f >= $comparativo_formato_2) { $literal_fin_A9_f = $literal_formato_2;  }
  if ($fin_A9_f >= $comparativo_formato_3) { $literal_fin_A9_f = $literal_formato_3;  }
  if ($fin_A9_f >= $comparativo_formato_4) { $literal_fin_A9_f = $literal_formato_4;  }
  if ($fin_A9_f >= $comparativo_formato_5) { $literal_fin_A9_f = $literal_formato_5;  }
  if ($fin_A9_f >= $comparativo_formato_6) { $literal_fin_A9_f = $literal_formato_6;  }
  if ($fin_A9_f >= $comparativo_formato_7) { $literal_fin_A9_f = $literal_formato_7;  }
  if ($fin_A9_f >= $comparativo_formato_8) { $literal_fin_A9_f = $literal_formato_8;  }
  if ($fin_A9_f >= $comparativo_formato_9) { $literal_fin_A9_f = $literal_formato_9;  }
  if ($fin_A9_f >= $comparativo_formato_10) { $literal_fin_A9_f = $literal_formato_10;  }
  if ($fin_A9_f >= $comparativo_formato_11) { $literal_fin_A9_f = $literal_formato_11;  }
  if ($fin_A9_f >= $comparativo_formato_12) { $literal_fin_A9_f = $literal_formato_12;  } 
  $fin_A9_f_print =  $literal_fin_A9_f; } /* cierre literal */


if ($row_datos_controlasign['i_convertir'] == 4 ) {  /* cualitativo */
  if ($fin_A9_f >= $comparativo_formato_1) { $cualitativa_fin_A9_f = $cualitativa_formato_1;  }
  if ($fin_A9_f >= $comparativo_formato_2) { $cualitativa_fin_A9_f = $cualitativa_formato_2;  }
  if ($fin_A9_f >= $comparativo_formato_3) { $cualitativa_fin_A9_f = $cualitativa_formato_3;  }
  if ($fin_A9_f >= $comparativo_formato_4) { $cualitativa_fin_A9_f = $cualitativa_formato_4;  }
  if ($fin_A9_f >= $comparativo_formato_5) { $cualitativa_fin_A9_f = $cualitativa_formato_5;  }
  if ($fin_A9_f >= $comparativo_formato_6) { $cualitativa_fin_A9_f = $cualitativa_formato_6;  }
  if ($fin_A9_f >= $comparativo_formato_7) { $cualitativa_fin_A9_f = $cualitativa_formato_7;  }
  if ($fin_A9_f >= $comparativo_formato_8) { $cualitativa_fin_A9_f = $cualitativa_formato_8;  }
  if ($fin_A9_f >= $comparativo_formato_9) { $cualitativa_fin_A9_f = $cualitativa_formato_9;  }
  if ($fin_A9_f >= $comparativo_formato_10) { $cualitativa_fin_A9_f = $cualitativa_formato_10;  }
  if ($fin_A9_f >= $comparativo_formato_11) { $cualitativa_fin_A9_f = $cualitativa_formato_11;  }
  if ($fin_A9_f >= $comparativo_formato_12) { $cualitativa_fin_A9_f = $cualitativa_formato_12;  } 
 $fin_A9_f_print =  $cualitativa_fin_A9_f; } /* cierre cualitativo */

  echo $fin_A9_f_print;   ?> <?php   $simbolillo9 = " ";  if ($notaAu_Final_A9 != '') {  $simbolillo9 = "+"; }echo $simbolillo9;?><?php echo $notaAu_Final_A9;?>
  
  </b></td>

<td BGCOLOR="<?php echo $color0;?>" <?php if
($row_datos_controlasign['j_jjj'] == '' ){?>style="display:none"<?php } ?> >
  <b><?php $fin_A10 = ( ($nota_final_A10_L1a+$nota_final_A10_L2b+$nota_final_A10_L3c)/$promedio_L123_A10 );  $fin_A10_f=number_format($fin_A10); 
  if ($row_datos_controlasign['j_convertir'] == 1 ) {  /* numerico */
       $fin_A10_f_print = $fin_A10_f;
} /* cierre numerico */
if ($row_datos_controlasign['j_convertir'] == 2 ) {  /* alfabetico */
   if ($fin_A10_f >= $comparativo_formato_1) { $alfabetico_fin_A10_f = $alfabetico_formato_1;  }
   if ($fin_A10_f >= $comparativo_formato_2) { $alfabetico_fin_A10_f = $alfabetico_formato_2;  }
   if ($fin_A10_f >= $comparativo_formato_3) { $alfabetico_fin_A10_f = $alfabetico_formato_3;  }
   if ($fin_A10_f >= $comparativo_formato_4) { $alfabetico_fin_A10_f = $alfabetico_formato_4;  }
   if ($fin_A10_f >= $comparativo_formato_5) { $alfabetico_fin_A10_f = $alfabetico_formato_5;  }
   if ($fin_A10_f >= $comparativo_formato_6) { $alfabetico_fin_A10_f = $alfabetico_formato_6;  }
   if ($fin_A10_f >= $comparativo_formato_7) { $alfabetico_fin_A10_f = $alfabetico_formato_7;  }
   if ($fin_A10_f >= $comparativo_formato_8) { $alfabetico_fin_A10_f = $alfabetico_formato_8;  }
   if ($fin_A10_f >= $comparativo_formato_9) { $alfabetico_fin_A10_f = $alfabetico_formato_9;  }
   if ($fin_A10_f >= $comparativo_formato_10) { $alfabetico_fin_A10_f = $alfabetico_formato_10;  }
   if ($fin_A10_f >= $comparativo_formato_11) { $alfabetico_fin_A10_f = $alfabetico_formato_11;  }
   if ($fin_A10_f >= $comparativo_formato_12) { $alfabetico_fin_A10_f = $alfabetico_formato_12;  }
   $fin_A10_f_print =  $alfabetico_fin_A10_f; } /* cierre alfabetico */

if ($row_datos_controlasign['j_convertir'] == 3 ) {  /* literal */
  if ($fin_A10_f >= $comparativo_formato_1) { $literal_fin_A10_f = $literal_formato_1;  }
  if ($fin_A10_f >= $comparativo_formato_2) { $literal_fin_A10_f = $literal_formato_2;  }
  if ($fin_A10_f >= $comparativo_formato_3) { $literal_fin_A10_f = $literal_formato_3;  }
  if ($fin_A10_f >= $comparativo_formato_4) { $literal_fin_A10_f = $literal_formato_4;  }
  if ($fin_A10_f >= $comparativo_formato_5) { $literal_fin_A10_f = $literal_formato_5;  }
  if ($fin_A10_f >= $comparativo_formato_6) { $literal_fin_A10_f = $literal_formato_6;  }
  if ($fin_A10_f >= $comparativo_formato_7) { $literal_fin_A10_f = $literal_formato_7;  }
  if ($fin_A10_f >= $comparativo_formato_8) { $literal_fin_A10_f = $literal_formato_8;  }
  if ($fin_A10_f >= $comparativo_formato_9) { $literal_fin_A10_f = $literal_formato_9;  }
  if ($fin_A10_f >= $comparativo_formato_10) { $literal_fin_A10_f = $literal_formato_10;  }
  if ($fin_A10_f >= $comparativo_formato_11) { $literal_fin_A10_f = $literal_formato_11;  }
  if ($fin_A10_f >= $comparativo_formato_12) { $literal_fin_A10_f = $literal_formato_12;  } 
  $fin_A10_f_print =  $literal_fin_A10_f; } /* cierre literal */


if ($row_datos_controlasign['j_convertir'] == 4 ) {  /* cualitativo */
  if ($fin_A10_f >= $comparativo_formato_1) { $cualitativa_fin_A10_f = $cualitativa_formato_1;  }
  if ($fin_A10_f >= $comparativo_formato_2) { $cualitativa_fin_A10_f = $cualitativa_formato_2;  }
  if ($fin_A10_f >= $comparativo_formato_3) { $cualitativa_fin_A10_f = $cualitativa_formato_3;  }
  if ($fin_A10_f >= $comparativo_formato_4) { $cualitativa_fin_A10_f = $cualitativa_formato_4;  }
  if ($fin_A10_f >= $comparativo_formato_5) { $cualitativa_fin_A10_f = $cualitativa_formato_5;  }
  if ($fin_A10_f >= $comparativo_formato_6) { $cualitativa_fin_A10_f = $cualitativa_formato_6;  }
  if ($fin_A10_f >= $comparativo_formato_7) { $cualitativa_fin_A10_f = $cualitativa_formato_7;  }
  if ($fin_A10_f >= $comparativo_formato_8) { $cualitativa_fin_A10_f = $cualitativa_formato_8;  }
  if ($fin_A10_f >= $comparativo_formato_9) { $cualitativa_fin_A10_f = $cualitativa_formato_9;  }
  if ($fin_A10_f >= $comparativo_formato_10) { $cualitativa_fin_A10_f = $cualitativa_formato_10;  }
  if ($fin_A10_f >= $comparativo_formato_11) { $cualitativa_fin_A10_f = $cualitativa_formato_11;  }
  if ($fin_A10_f >= $comparativo_formato_12) { $cualitativa_fin_A10_f = $cualitativa_formato_12;  } 
 $fin_A10_f_print =  $cualitativa_fin_A10_f; } /* cierre cualitativo */

  echo $fin_A10_f_print;   ?> <?php   $simbolillo10 = " ";  if ($notaAu_Final_A10 != '') {  $simbolillo10 = "+"; }echo $simbolillo10;?><?php echo $notaAu_Final_A10;?>
  
  </b></td>

<td BGCOLOR="<?php echo $color0;?>" <?php if
($row_datos_controlasign['k_kkk'] == '' ){?>style="display:none"<?php } ?> >
 <b><?php $fin_A11 = ( ($nota_final_A11_L1a+$nota_final_A11_L2b+$nota_final_A11_L3c)/$promedio_L123_A11 );  $fin_A11_f=number_format($fin_A11); 
  if ($row_datos_controlasign['k_convertir'] == 1 ) {  /* numerico */
       $fin_A11_f_print = $fin_A11_f;
} /* cierre numerico */
if ($row_datos_controlasign['k_convertir'] == 2 ) {  /* alfabetico */
   if ($fin_A11_f >= $comparativo_formato_1) { $alfabetico_fin_A11_f = $alfabetico_formato_1;  }
   if ($fin_A11_f >= $comparativo_formato_2) { $alfabetico_fin_A11_f = $alfabetico_formato_2;  }
   if ($fin_A11_f >= $comparativo_formato_3) { $alfabetico_fin_A11_f = $alfabetico_formato_3;  }
   if ($fin_A11_f >= $comparativo_formato_4) { $alfabetico_fin_A11_f = $alfabetico_formato_4;  }
   if ($fin_A11_f >= $comparativo_formato_5) { $alfabetico_fin_A11_f = $alfabetico_formato_5;  }
   if ($fin_A11_f >= $comparativo_formato_6) { $alfabetico_fin_A11_f = $alfabetico_formato_6;  }
   if ($fin_A11_f >= $comparativo_formato_7) { $alfabetico_fin_A11_f = $alfabetico_formato_7;  }
   if ($fin_A11_f >= $comparativo_formato_8) { $alfabetico_fin_A11_f = $alfabetico_formato_8;  }
   if ($fin_A11_f >= $comparativo_formato_9) { $alfabetico_fin_A11_f = $alfabetico_formato_9;  }
   if ($fin_A11_f >= $comparativo_formato_10) { $alfabetico_fin_A11_f = $alfabetico_formato_10;  }
   if ($fin_A11_f >= $comparativo_formato_11) { $alfabetico_fin_A11_f = $alfabetico_formato_11;  }
   if ($fin_A11_f >= $comparativo_formato_12) { $alfabetico_fin_A11_f = $alfabetico_formato_12;  }
   $fin_A11_f_print =  $alfabetico_fin_A11_f; } /* cierre alfabetico */

if ($row_datos_controlasign['k_convertir'] == 3 ) {  /* literal */
  if ($fin_A11_f >= $comparativo_formato_1) { $literal_fin_A11_f = $literal_formato_1;  }
  if ($fin_A11_f >= $comparativo_formato_2) { $literal_fin_A11_f = $literal_formato_2;  }
  if ($fin_A11_f >= $comparativo_formato_3) { $literal_fin_A11_f = $literal_formato_3;  }
  if ($fin_A11_f >= $comparativo_formato_4) { $literal_fin_A11_f = $literal_formato_4;  }
  if ($fin_A11_f >= $comparativo_formato_5) { $literal_fin_A11_f = $literal_formato_5;  }
  if ($fin_A11_f >= $comparativo_formato_6) { $literal_fin_A11_f = $literal_formato_6;  }
  if ($fin_A11_f >= $comparativo_formato_7) { $literal_fin_A11_f = $literal_formato_7;  }
  if ($fin_A11_f >= $comparativo_formato_8) { $literal_fin_A11_f = $literal_formato_8;  }
  if ($fin_A11_f >= $comparativo_formato_9) { $literal_fin_A11_f = $literal_formato_9;  }
  if ($fin_A11_f >= $comparativo_formato_10) { $literal_fin_A11_f = $literal_formato_10;  }
  if ($fin_A11_f >= $comparativo_formato_11) { $literal_fin_A11_f = $literal_formato_11;  }
  if ($fin_A11_f >= $comparativo_formato_12) { $literal_fin_A11_f = $literal_formato_12;  } 
  $fin_A11_f_print =  $literal_fin_A11_f; } /* cierre literal */


if ($row_datos_controlasign['k_convertir'] == 4 ) {  /* cualitativo */
  if ($fin_A11_f >= $comparativo_formato_1) { $cualitativa_fin_A11_f = $cualitativa_formato_1;  }
  if ($fin_A11_f >= $comparativo_formato_2) { $cualitativa_fin_A11_f = $cualitativa_formato_2;  }
  if ($fin_A11_f >= $comparativo_formato_3) { $cualitativa_fin_A11_f = $cualitativa_formato_3;  }
  if ($fin_A11_f >= $comparativo_formato_4) { $cualitativa_fin_A11_f = $cualitativa_formato_4;  }
  if ($fin_A11_f >= $comparativo_formato_5) { $cualitativa_fin_A11_f = $cualitativa_formato_5;  }
  if ($fin_A11_f >= $comparativo_formato_6) { $cualitativa_fin_A11_f = $cualitativa_formato_6;  }
  if ($fin_A11_f >= $comparativo_formato_7) { $cualitativa_fin_A11_f = $cualitativa_formato_7;  }
  if ($fin_A11_f >= $comparativo_formato_8) { $cualitativa_fin_A11_f = $cualitativa_formato_8;  }
  if ($fin_A11_f >= $comparativo_formato_9) { $cualitativa_fin_A11_f = $cualitativa_formato_9;  }
  if ($fin_A11_f >= $comparativo_formato_10) { $cualitativa_fin_A11_f = $cualitativa_formato_10;  }
  if ($fin_A11_f >= $comparativo_formato_11) { $cualitativa_fin_A11_f = $cualitativa_formato_11;  }
  if ($fin_A11_f >= $comparativo_formato_12) { $cualitativa_fin_A11_f = $cualitativa_formato_12;  } 
 $fin_A11_f_print =  $cualitativa_fin_A11_f; } /* cierre cualitativo */

  echo $fin_A11_f_print;   ?> <?php   $simbolillo11 = " ";  if ($notaAu_Final_A11 != '') {  $simbolillo11 = "+"; }echo $simbolillo11;?><?php echo $notaAu_Final_A11;?>
  
  </b></td>

<td BGCOLOR="<?php echo $color0;?>" <?php if
($row_datos_controlasign['l_lll'] == '' ){?>style="display:none"<?php } ?> >
 <b><?php $fin_A12 = ( ($nota_final_A12_L1a+$nota_final_A12_L2b+$nota_final_A12_L3c)/$promedio_L123_A12 );  $fin_A12_f=number_format($fin_A12); 
  if ($row_datos_controlasign['l_convertir'] == 1 ) {  /* numerico */
       $fin_A12_f_print = $fin_A12_f;
} /* cierre numerico */
if ($row_datos_controlasign['l_convertir'] == 2 ) {  /* alfabetico */
   if ($fin_A12_f >= $comparativo_formato_1) { $alfabetico_fin_A12_f = $alfabetico_formato_1;  }
   if ($fin_A12_f >= $comparativo_formato_2) { $alfabetico_fin_A12_f = $alfabetico_formato_2;  }
   if ($fin_A12_f >= $comparativo_formato_3) { $alfabetico_fin_A12_f = $alfabetico_formato_3;  }
   if ($fin_A12_f >= $comparativo_formato_4) { $alfabetico_fin_A12_f = $alfabetico_formato_4;  }
   if ($fin_A12_f >= $comparativo_formato_5) { $alfabetico_fin_A12_f = $alfabetico_formato_5;  }
   if ($fin_A12_f >= $comparativo_formato_6) { $alfabetico_fin_A12_f = $alfabetico_formato_6;  }
   if ($fin_A12_f >= $comparativo_formato_7) { $alfabetico_fin_A12_f = $alfabetico_formato_7;  }
   if ($fin_A12_f >= $comparativo_formato_8) { $alfabetico_fin_A12_f = $alfabetico_formato_8;  }
   if ($fin_A12_f >= $comparativo_formato_9) { $alfabetico_fin_A12_f = $alfabetico_formato_9;  }
   if ($fin_A12_f >= $comparativo_formato_10) { $alfabetico_fin_A12_f = $alfabetico_formato_10;  }
   if ($fin_A12_f >= $comparativo_formato_11) { $alfabetico_fin_A12_f = $alfabetico_formato_11;  }
   if ($fin_A12_f >= $comparativo_formato_12) { $alfabetico_fin_A12_f = $alfabetico_formato_12;  }
   $fin_A12_f_print =  $alfabetico_fin_A12_f; } /* cierre alfabetico */

if ($row_datos_controlasign['l_convertir'] == 3 ) {  /* literal */
  if ($fin_A12_f >= $comparativo_formato_1) { $literal_fin_A12_f = $literal_formato_1;  }
  if ($fin_A12_f >= $comparativo_formato_2) { $literal_fin_A12_f = $literal_formato_2;  }
  if ($fin_A12_f >= $comparativo_formato_3) { $literal_fin_A12_f = $literal_formato_3;  }
  if ($fin_A12_f >= $comparativo_formato_4) { $literal_fin_A12_f = $literal_formato_4;  }
  if ($fin_A12_f >= $comparativo_formato_5) { $literal_fin_A12_f = $literal_formato_5;  }
  if ($fin_A12_f >= $comparativo_formato_6) { $literal_fin_A12_f = $literal_formato_6;  }
  if ($fin_A12_f >= $comparativo_formato_7) { $literal_fin_A12_f = $literal_formato_7;  }
  if ($fin_A12_f >= $comparativo_formato_8) { $literal_fin_A12_f = $literal_formato_8;  }
  if ($fin_A12_f >= $comparativo_formato_9) { $literal_fin_A12_f = $literal_formato_9;  }
  if ($fin_A12_f >= $comparativo_formato_10) { $literal_fin_A12_f = $literal_formato_10;  }
  if ($fin_A12_f >= $comparativo_formato_11) { $literal_fin_A12_f = $literal_formato_11;  }
  if ($fin_A12_f >= $comparativo_formato_12) { $literal_fin_A12_f = $literal_formato_12;  } 
  $fin_A12_f_print =  $literal_fin_A12_f; } /* cierre literal */


if ($row_datos_controlasign['l_convertir'] == 4 ) {  /* cualitativo */
  if ($fin_A12_f >= $comparativo_formato_1) { $cualitativa_fin_A12_f = $cualitativa_formato_1;  }
  if ($fin_A12_f >= $comparativo_formato_2) { $cualitativa_fin_A12_f = $cualitativa_formato_2;  }
  if ($fin_A12_f >= $comparativo_formato_3) { $cualitativa_fin_A12_f = $cualitativa_formato_3;  }
  if ($fin_A12_f >= $comparativo_formato_4) { $cualitativa_fin_A12_f = $cualitativa_formato_4;  }
  if ($fin_A12_f >= $comparativo_formato_5) { $cualitativa_fin_A12_f = $cualitativa_formato_5;  }
  if ($fin_A12_f >= $comparativo_formato_6) { $cualitativa_fin_A12_f = $cualitativa_formato_6;  }
  if ($fin_A12_f >= $comparativo_formato_7) { $cualitativa_fin_A12_f = $cualitativa_formato_7;  }
  if ($fin_A12_f >= $comparativo_formato_8) { $cualitativa_fin_A12_f = $cualitativa_formato_8;  }
  if ($fin_A12_f >= $comparativo_formato_9) { $cualitativa_fin_A12_f = $cualitativa_formato_9;  }
  if ($fin_A12_f >= $comparativo_formato_10) { $cualitativa_fin_A12_f = $cualitativa_formato_10;  }
  if ($fin_A12_f >= $comparativo_formato_11) { $cualitativa_fin_A12_f = $cualitativa_formato_11;  }
  if ($fin_A12_f >= $comparativo_formato_12) { $cualitativa_fin_A12_f = $cualitativa_formato_12;  } 
 $fin_A12_f_print =  $cualitativa_fin_A12_f; } /* cierre cualitativo */

  echo $fin_A12_f_print;   ?> <?php   $simbolillo12 = " ";  if ($notaAu_Final_A12 != '') {  $simbolillo12 = "+"; }echo $simbolillo12;?><?php echo $notaAu_Final_A12;?>
  
  </b></td>

<td BGCOLOR="<?php echo $color0;?>" <?php if
($row_datos_controlasign['m_mmm'] == '' ){?>style="display:none"<?php } ?> >
  <b><?php $fin_A13 = ( ($nota_final_A13_L1a+$nota_final_A13_L2b+$nota_final_A13_L3c)/$promedio_L123_A13 );  $fin_A13_f=number_format($fin_A13); 
  if ($row_datos_controlasign['m_convertir'] == 1 ) {  /* numerico */
       $fin_A13_f_print = $fin_A13_f;
} /* cierre numerico */
if ($row_datos_controlasign['m_convertir'] == 2 ) {  /* alfabetico */
   if ($fin_A13_f >= $comparativo_formato_1) { $alfabetico_fin_A13_f = $alfabetico_formato_1;  }
   if ($fin_A13_f >= $comparativo_formato_2) { $alfabetico_fin_A13_f = $alfabetico_formato_2;  }
   if ($fin_A13_f >= $comparativo_formato_3) { $alfabetico_fin_A13_f = $alfabetico_formato_3;  }
   if ($fin_A13_f >= $comparativo_formato_4) { $alfabetico_fin_A13_f = $alfabetico_formato_4;  }
   if ($fin_A13_f >= $comparativo_formato_5) { $alfabetico_fin_A13_f = $alfabetico_formato_5;  }
   if ($fin_A13_f >= $comparativo_formato_6) { $alfabetico_fin_A13_f = $alfabetico_formato_6;  }
   if ($fin_A13_f >= $comparativo_formato_7) { $alfabetico_fin_A13_f = $alfabetico_formato_7;  }
   if ($fin_A13_f >= $comparativo_formato_8) { $alfabetico_fin_A13_f = $alfabetico_formato_8;  }
   if ($fin_A13_f >= $comparativo_formato_9) { $alfabetico_fin_A13_f = $alfabetico_formato_9;  }
   if ($fin_A13_f >= $comparativo_formato_10) { $alfabetico_fin_A13_f = $alfabetico_formato_10;  }
   if ($fin_A13_f >= $comparativo_formato_11) { $alfabetico_fin_A13_f = $alfabetico_formato_11;  }
   if ($fin_A13_f >= $comparativo_formato_12) { $alfabetico_fin_A13_f = $alfabetico_formato_12;  }
   $fin_A13_f_print =  $alfabetico_fin_A13_f; } /* cierre alfabetico */

if ($row_datos_controlasign['m_convertir'] == 3 ) {  /* literal */
  if ($fin_A13_f >= $comparativo_formato_1) { $literal_fin_A13_f = $literal_formato_1;  }
  if ($fin_A13_f >= $comparativo_formato_2) { $literal_fin_A13_f = $literal_formato_2;  }
  if ($fin_A13_f >= $comparativo_formato_3) { $literal_fin_A13_f = $literal_formato_3;  }
  if ($fin_A13_f >= $comparativo_formato_4) { $literal_fin_A13_f = $literal_formato_4;  }
  if ($fin_A13_f >= $comparativo_formato_5) { $literal_fin_A13_f = $literal_formato_5;  }
  if ($fin_A13_f >= $comparativo_formato_6) { $literal_fin_A13_f = $literal_formato_6;  }
  if ($fin_A13_f >= $comparativo_formato_7) { $literal_fin_A13_f = $literal_formato_7;  }
  if ($fin_A13_f >= $comparativo_formato_8) { $literal_fin_A13_f = $literal_formato_8;  }
  if ($fin_A13_f >= $comparativo_formato_9) { $literal_fin_A13_f = $literal_formato_9;  }
  if ($fin_A13_f >= $comparativo_formato_10) { $literal_fin_A13_f = $literal_formato_10;  }
  if ($fin_A13_f >= $comparativo_formato_11) { $literal_fin_A13_f = $literal_formato_11;  }
  if ($fin_A13_f >= $comparativo_formato_12) { $literal_fin_A13_f = $literal_formato_12;  } 
  $fin_A13_f_print =  $literal_fin_A13_f; } /* cierre literal */


if ($row_datos_controlasign['m_convertir'] == 4 ) {  /* cualitativo */
  if ($fin_A13_f >= $comparativo_formato_1) { $cualitativa_fin_A13_f = $cualitativa_formato_1;  }
  if ($fin_A13_f >= $comparativo_formato_2) { $cualitativa_fin_A13_f = $cualitativa_formato_2;  }
  if ($fin_A13_f >= $comparativo_formato_3) { $cualitativa_fin_A13_f = $cualitativa_formato_3;  }
  if ($fin_A13_f >= $comparativo_formato_4) { $cualitativa_fin_A13_f = $cualitativa_formato_4;  }
  if ($fin_A13_f >= $comparativo_formato_5) { $cualitativa_fin_A13_f = $cualitativa_formato_5;  }
  if ($fin_A13_f >= $comparativo_formato_6) { $cualitativa_fin_A13_f = $cualitativa_formato_6;  }
  if ($fin_A13_f >= $comparativo_formato_7) { $cualitativa_fin_A13_f = $cualitativa_formato_7;  }
  if ($fin_A13_f >= $comparativo_formato_8) { $cualitativa_fin_A13_f = $cualitativa_formato_8;  }
  if ($fin_A13_f >= $comparativo_formato_9) { $cualitativa_fin_A13_f = $cualitativa_formato_9;  }
  if ($fin_A13_f >= $comparativo_formato_10) { $cualitativa_fin_A13_f = $cualitativa_formato_10;  }
  if ($fin_A13_f >= $comparativo_formato_11) { $cualitativa_fin_A13_f = $cualitativa_formato_11;  }
  if ($fin_A13_f >= $comparativo_formato_12) { $cualitativa_fin_A13_f = $cualitativa_formato_12;  } 
 $fin_A13_f_print =  $cualitativa_fin_A13_f; } /* cierre cualitativo */

  echo $fin_A13_f_print;   ?> <?php   $simbolillo13 = " ";  if ($notaAu_Final_A13 != '') {  $simbolillo13 = "+"; }echo $simbolillo13;?><?php echo $notaAu_Final_A13;?>
  
  </b></td>

<td BGCOLOR="<?php echo $color0;?>" <?php if
($row_datos_controlasign['n_nnn'] == '' ){?>style="display:none"<?php } ?> >
 <b><?php $fin_A14 = ( ($nota_final_A14_L1a+$nota_final_A14_L2b+$nota_final_A14_L3c)/$promedio_L123_A14 );  $fin_A14_f=number_format($fin_A14); 
  if ($row_datos_controlasign['n_convertir'] == 1 ) {  /* numerico */
       $fin_A14_f_print = $fin_A14_f;
} /* cierre numerico */
if ($row_datos_controlasign['n_convertir'] == 2 ) {  /* alfabetico */
   if ($fin_A14_f >= $comparativo_formato_1) { $alfabetico_fin_A14_f = $alfabetico_formato_1;  }
   if ($fin_A14_f >= $comparativo_formato_2) { $alfabetico_fin_A14_f = $alfabetico_formato_2;  }
   if ($fin_A14_f >= $comparativo_formato_3) { $alfabetico_fin_A14_f = $alfabetico_formato_3;  }
   if ($fin_A14_f >= $comparativo_formato_4) { $alfabetico_fin_A14_f = $alfabetico_formato_4;  }
   if ($fin_A14_f >= $comparativo_formato_5) { $alfabetico_fin_A14_f = $alfabetico_formato_5;  }
   if ($fin_A14_f >= $comparativo_formato_6) { $alfabetico_fin_A14_f = $alfabetico_formato_6;  }
   if ($fin_A14_f >= $comparativo_formato_7) { $alfabetico_fin_A14_f = $alfabetico_formato_7;  }
   if ($fin_A14_f >= $comparativo_formato_8) { $alfabetico_fin_A14_f = $alfabetico_formato_8;  }
   if ($fin_A14_f >= $comparativo_formato_9) { $alfabetico_fin_A14_f = $alfabetico_formato_9;  }
   if ($fin_A14_f >= $comparativo_formato_10) { $alfabetico_fin_A14_f = $alfabetico_formato_10;  }
   if ($fin_A14_f >= $comparativo_formato_11) { $alfabetico_fin_A14_f = $alfabetico_formato_11;  }
   if ($fin_A14_f >= $comparativo_formato_12) { $alfabetico_fin_A14_f = $alfabetico_formato_12;  }
   $fin_A14_f_print =  $alfabetico_fin_A14_f; } /* cierre alfabetico */

if ($row_datos_controlasign['n_convertir'] == 3 ) {  /* literal */
  if ($fin_A14_f >= $comparativo_formato_1) { $literal_fin_A14_f = $literal_formato_1;  }
  if ($fin_A14_f >= $comparativo_formato_2) { $literal_fin_A14_f = $literal_formato_2;  }
  if ($fin_A14_f >= $comparativo_formato_3) { $literal_fin_A14_f = $literal_formato_3;  }
  if ($fin_A14_f >= $comparativo_formato_4) { $literal_fin_A14_f = $literal_formato_4;  }
  if ($fin_A14_f >= $comparativo_formato_5) { $literal_fin_A14_f = $literal_formato_5;  }
  if ($fin_A14_f >= $comparativo_formato_6) { $literal_fin_A14_f = $literal_formato_6;  }
  if ($fin_A14_f >= $comparativo_formato_7) { $literal_fin_A14_f = $literal_formato_7;  }
  if ($fin_A14_f >= $comparativo_formato_8) { $literal_fin_A14_f = $literal_formato_8;  }
  if ($fin_A14_f >= $comparativo_formato_9) { $literal_fin_A14_f = $literal_formato_9;  }
  if ($fin_A14_f >= $comparativo_formato_10) { $literal_fin_A14_f = $literal_formato_10;  }
  if ($fin_A14_f >= $comparativo_formato_11) { $literal_fin_A14_f = $literal_formato_11;  }
  if ($fin_A14_f >= $comparativo_formato_12) { $literal_fin_A14_f = $literal_formato_12;  } 
  $fin_A14_f_print =  $literal_fin_A14_f; } /* cierre literal */


if ($row_datos_controlasign['n_convertir'] == 4 ) {  /* cualitativo */
  if ($fin_A14_f >= $comparativo_formato_1) { $cualitativa_fin_A14_f = $cualitativa_formato_1;  }
  if ($fin_A14_f >= $comparativo_formato_2) { $cualitativa_fin_A14_f = $cualitativa_formato_2;  }
  if ($fin_A14_f >= $comparativo_formato_3) { $cualitativa_fin_A14_f = $cualitativa_formato_3;  }
  if ($fin_A14_f >= $comparativo_formato_4) { $cualitativa_fin_A14_f = $cualitativa_formato_4;  }
  if ($fin_A14_f >= $comparativo_formato_5) { $cualitativa_fin_A14_f = $cualitativa_formato_5;  }
  if ($fin_A14_f >= $comparativo_formato_6) { $cualitativa_fin_A14_f = $cualitativa_formato_6;  }
  if ($fin_A14_f >= $comparativo_formato_7) { $cualitativa_fin_A14_f = $cualitativa_formato_7;  }
  if ($fin_A14_f >= $comparativo_formato_8) { $cualitativa_fin_A14_f = $cualitativa_formato_8;  }
  if ($fin_A14_f >= $comparativo_formato_9) { $cualitativa_fin_A14_f = $cualitativa_formato_9;  }
  if ($fin_A14_f >= $comparativo_formato_10) { $cualitativa_fin_A14_f = $cualitativa_formato_10;  }
  if ($fin_A14_f >= $comparativo_formato_11) { $cualitativa_fin_A14_f = $cualitativa_formato_11;  }
  if ($fin_A14_f >= $comparativo_formato_12) { $cualitativa_fin_A14_f = $cualitativa_formato_12;  } 
 $fin_A14_f_print =  $cualitativa_fin_A14_f; } /* cierre cualitativo */

  echo $fin_A14_f_print;   ?> <?php   $simbolillo14 = " ";  if ($notaAu_Final_A14 != '') {  $simbolillo14 = "+"; }echo $simbolillo14;?><?php echo $notaAu_Final_A14;?>
  
  </b></td>


    </tr>


<?php  // ayuda a saber quien tiene mas nota acumulada

if ($row_datos_controlasign['a_suma'] == 1) { $fin_A1_f_valida = $fin_A1_f; } else { $fin_A1_f_valida = 0; }
if ($row_datos_controlasign['b_suma'] == 1) { $fin_A2_f_valida = $fin_A2_f; } else { $fin_A2_f_valida = 0; }
if ($row_datos_controlasign['c_suma'] == 1) { $fin_A3_f_valida = $fin_A3_f; } else { $fin_A3_f_valida = 0; }
if ($row_datos_controlasign['d_suma'] == 1) { $fin_A4_f_valida = $fin_A4_f; } else { $fin_A4_f_valida = 0; }
if ($row_datos_controlasign['e_suma'] == 1) { $fin_A5_f_valida = $fin_A5_f; } else { $fin_A5_f_valida = 0; }
if ($row_datos_controlasign['f_suma'] == 1) { $fin_A6_f_valida = $fin_A6_f; } else { $fin_A6_f_valida = 0; }
if ($row_datos_controlasign['g_suma'] == 1) { $fin_A7_f_valida = $fin_A7_f; } else { $fin_A7_f_valida = 0; }
if ($row_datos_controlasign['h_suma'] == 1) { $fin_A8_f_valida = $fin_A8_f; } else { $fin_A8_f_valida = 0; }
if ($row_datos_controlasign['i_suma'] == 1) { $fin_A9_f_valida = $fin_A9_f; } else { $fin_A9_f_valida = 0; }
if ($row_datos_controlasign['j_suma'] == 1) { $fin_A10_f_valida = $fin_A10_f; } else { $fin_A10_f_valida = 0; }
if ($row_datos_controlasign['k_suma'] == 1) { $fin_A11_f_valida = $fin_A11_f; } else { $fin_A11_f_valida = 0; }
if ($row_datos_controlasign['l_suma'] == 1) { $fin_A12_f_valida = $fin_A12_f; } else { $fin_A12_f_valida = 0; }
if ($row_datos_controlasign['m_suma'] == 1) { $fin_A13_f_valida = $fin_A13_f; } else { $fin_A13_f_valida = 0; }
if ($row_datos_controlasign['n_suma'] == 1) { $fin_A14_f_valida = $fin_A14_f; } else { $fin_A14_f_valida = 0; }

if ($row_datos_controlasign['a_suma'] == 1) { $notaAu_Final_A1_valida = $notaAu_Final_A1; } else { $notaAu_Final_A1_valida = 0; }
if ($row_datos_controlasign['b_suma'] == 1) { $notaAu_Final_A2_valida = $notaAu_Final_A2; } else { $notaAu_Final_A2_valida = 0; }
if ($row_datos_controlasign['c_suma'] == 1) { $notaAu_Final_A3_valida = $notaAu_Final_A3; } else { $notaAu_Final_A3_valida = 0; }
if ($row_datos_controlasign['d_suma'] == 1) { $notaAu_Final_A4_valida = $notaAu_Final_A4; } else { $notaAu_Final_A4_valida = 0; }
if ($row_datos_controlasign['e_suma'] == 1) { $notaAu_Final_A5_valida = $notaAu_Final_A5; } else { $notaAu_Final_A5_valida = 0; }
if ($row_datos_controlasign['f_suma'] == 1) { $notaAu_Final_A6_valida = $notaAu_Final_A6; } else { $notaAu_Final_A6_valida = 0; }
if ($row_datos_controlasign['g_suma'] == 1) { $notaAu_Final_A7_valida = $notaAu_Final_A7; } else { $notaAu_Final_A7_valida = 0; }
if ($row_datos_controlasign['h_suma'] == 1) { $notaAu_Final_A8_valida = $notaAu_Final_A8; } else { $notaAu_Final_A8_valida = 0; }
if ($row_datos_controlasign['i_suma'] == 1) { $notaAu_Final_A9_valida = $notaAu_Final_A9; } else { $notaAu_Final_A9_valida = 0; }
if ($row_datos_controlasign['j_suma'] == 1) { $notaAu_Final_A10_valida = $notaAu_Final_A10; } else { $notaAu_Final_A10_valida = 0; }
if ($row_datos_controlasign['k_suma'] == 1) { $notaAu_Final_A11_valida = $notaAu_Final_A11; } else { $notaAu_Final_A11_valida = 0; }
if ($row_datos_controlasign['l_suma'] == 1) { $notaAu_Final_A12_valida = $notaAu_Final_A12; } else { $notaAu_Final_A12_valida = 0; }
if ($row_datos_controlasign['m_suma'] == 1) { $notaAu_Final_A13_valida = $notaAu_Final_A13; } else { $notaAu_Final_A13_valida = 0; }
if ($row_datos_controlasign['n_suma'] == 1) { $notaAu_Final_A14_valida = $notaAu_Final_A14; } else { $notaAu_Final_A14_valida = 0; }



      $nooootaaa_4 = $fin_A1_f_valida + $fin_A2_f_valida + $fin_A3_f_valida + $fin_A4_f_valida + $fin_A5_f_valida + $fin_A6_f_valida + $fin_A7_f_valida
                   + $fin_A8_f_valida + $fin_A9_f_valida + $fin_A10_f_valida + $fin_A11_f_valida + $fin_A12_f_valida + $fin_A13_f_valida + $fin_A14_f_valida
                   + $notaAu_Final_A1_valida + $notaAu_Final_A2_valida + $notaAu_Final_A3_valida + $notaAu_Final_A4_valida + $notaAu_Final_A5_valida + $notaAu_Final_A6_valida
                   + $notaAu_Final_A7_valida + $notaAu_Final_A8_valida + $notaAu_Final_A9_valida + $notaAu_Final_A10_valida + $notaAu_Final_A11_valida + $notaAu_Final_A12_valida
                   + $notaAu_Final_A13_valida + $notaAu_Final_A14_valida;


      include("../conectar.php");


$nota_104 = "UPDATE reg_estudiantes
SET nota_4= '$nooootaaa_4'
WHERE id_estud='$id_estxx1'";


$datos_nota_104 = mysqli_query($enlace, $nota_104) or die(mysqli_error());


mysqli_close($enlace);


      ?>



  </tbody>
</table>