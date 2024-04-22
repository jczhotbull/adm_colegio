<?php
error_reporting(0); //hide php errors
require '../../0 html2pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$lap_i="1";
$lap_conteo_repro = '0';
$lap_puntaje_sumado = '0';
$lap_promedio_divisor = '0';
// captura la hoja a ser impresa

$lap_tot_mat1 = '';
$lap_tot_mat2 = '';
$lap_tot_mat3 = '';
$lap_tot_mat4 = '';
$lap_tot_mat5 = '';
$lap_tot_mat6 = '';
$lap_tot_mat7 = '';
$lap_tot_mat8 = '';
$lap_tot_mat9 = '';
$lap_tot_mat10 = '';
$lap_tot_mat11 = '';
$lap_tot_mat12 = '';
$lap_tot_mat13 = '';
$lap_tot_mat14 = '';



$lap_div_mat1 = '';
$lap_div_mat2 = '';
$lap_div_mat3 = '';
$lap_div_mat4 = '';
$lap_div_mat5 = '';
$lap_div_mat6 = '';
$lap_div_mat7 = '';
$lap_div_mat8 = '';
$lap_div_mat9 = '';
$lap_div_mat10 = '';
$lap_div_mat11 = '';
$lap_div_mat12 = '';
$lap_div_mat13 = '';
$lap_div_mat14 = '';



$lap_apla_mat1 = '';
$lap_apla_mat2 = '';
$lap_apla_mat3 = '';
$lap_apla_mat4 = '';
$lap_apla_mat5 = '';
$lap_apla_mat6 = '';
$lap_apla_mat7 = '';
$lap_apla_mat8 = '';
$lap_apla_mat9 = '';
$lap_apla_mat10 = '';
$lap_apla_mat11 = '';
$lap_apla_mat12 = '';
$lap_apla_mat13 = '';
$lap_apla_mat14 = '';



ob_start();
?>


<?php

include("../../conectar.php");

$lap_queryimp = "SELECT * FROM tb_colores_imp where activo = '1' LIMIT 1";

$lap_datos_color = mysqli_query($enlace, $lap_queryimp) or die(mysqli_error());

$lap_row_datos_color = mysqli_fetch_array($lap_datos_color );

mysqli_close($enlace);

$lap_color_imp1 = $lap_row_datos_color['color1'];
$lap_color_imp2 = $lap_row_datos_color['color2'];
$lap_color_imp3 = $lap_row_datos_color['color3'];



include("../../conectar.php");

$query_z_puntaje = "SELECT * FROM z_puntaje where pt_selecc = '1' LIMIT 1";

$datos_z_puntaje = mysqli_query($enlace, $query_z_puntaje) or die(mysqli_error());

$row_datos_z_puntaje = mysqli_fetch_array($datos_z_puntaje );

$la_mitad_es = $row_datos_z_puntaje['el_puntaje']/2;

$el_puntaje_completo_es = $row_datos_z_puntaje['el_puntaje'];

$el_puntaje_aprobatorio_aprox = $row_datos_z_puntaje['el_aproximado'];
$el_puntaje_aprobatorio_prom = $row_datos_z_puntaje['el_promedio'];

$el_id_puntaje_es = $row_datos_z_puntaje['id_puntaje'];


mysqli_close($enlace);



 ?>

<style>
.centrado{ padding-left: 85px;}
.bannersize {width: 614px; height: 50px;}

.basetabla { margin:auto; width:100%;}
.miniborder {border:0.5px solid <?php echo $lap_color_imp1; ?>;}

.miniborderleft {border-left: 2px solid <?php echo $lap_color_imp1; ?>; border-top: 0.5px solid <?php echo $lap_color_imp1; ?>; border-bottom: 0.5px solid <?php echo $lap_color_imp1; ?>; border-right: 0.5px solid <?php echo $lap_color_imp1; ?>;}

.miniborderlight {border:0.5px dotted <?php echo $lap_color_imp2; ?>;}

.minibordercut {border-top:1px dashed <?php echo $lap_color_imp2; ?>;}

.miniborder_g {border:1px solid <?php echo $lap_color_imp2; ?>;}

.miniborder_A {border-right: 3px double <?php echo $lap_color_imp2; ?>; border-top: 3px double <?php echo $lap_color_imp2; ?>; border-left: 3px double <?php echo $lap_color_imp2; ?>;}

.miniborder_B {border-bottom: 3px double <?php echo $lap_color_imp2; ?>; border-right: 3px double <?php echo $lap_color_imp2; ?>; border-left: 3px double <?php echo $lap_color_imp2; ?>;}

.bordecompleto td{border:1px solid <?php echo $lap_color_imp1; ?>;}

.bordecompleto th{border:1px solid <?php echo $lap_color_imp1; ?>;}


</style>

<page backtop="1mm" backbottom="1mm" backleft="1mm" backright="1mm">
   
    <page_header> 
    </page_header> 

    <?php

include("../../conectar.php");

$lap_periodo = "SELECT * FROM periodo_escolar";
$lap_datos_periodo = mysqli_query($enlace, $lap_periodo) or die(mysqli_error());
$lap_row_datos_periodo = mysqli_fetch_assoc($lap_datos_periodo);



$id_cicloxxx = $_POST['id_cicloxxx'];
$query_peXX = "SELECT id_periodo_es, periodo_escolar FROM temporada_escolar 
         WHERE   id_periodo_es = '$id_cicloxxx' limit 1" ;
$datos_controlXX = mysqli_query($enlace, $query_peXX) or die(mysqli_error());

$row_datos_queryperXX = mysqli_fetch_array($datos_controlXX); 




$lap_queryplantel = "SELECT * FROM z_plantel LIMIT 1";

$lap_datos_queryplantel = mysqli_query($enlace, $lap_queryplantel) or die(mysqli_error());

$lap_row_datos_queryplantel = mysqli_fetch_array($lap_datos_queryplantel); 

$lap_logo_plantel = $lap_row_datos_queryplantel['logo_plantel'];

?>

    <page_footer>
   
    </page_footer>





<TABLE class="basetabla">


<TR style="margin-bottom: -10px;">

<TD class="" style="width:15%; height:auto;" align="center" ROWSPAN=3>

<img style="width:90px; max-height: 90px;" src='../<?php echo $lap_row_datos_queryplantel["logo_plantel"]; ?>'/>
           

</TD>


<TD class="" style="width:32%; height:auto; font-size: 18px; color:<?php echo $lap_color_imp2; ?>; font-style: italic;" align="center">

<b><?php echo $lap_row_datos_queryplantel['nombre_plantel']; ?></b>
           

</TD>


<TD class="" style="width:15%; height:auto; font-size: 14px;" align="center">     

</TD>


<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center">__________________________.
         

</TD>







</TR>





<TR>

<TD class="" style="width:32%; height:auto; font-size: 12px; color:<?php echo $lap_color_imp3; ?>;" align="center">

Notas actualizadas el:


<?php
$lap_fecha = date('Y-m-j H:i:s'); 
$lap_nuevafecha = strtotime ( '-7 hour' , strtotime ( $lap_fecha ) ) ;
$lap_nuevafecha = date ( 'j/m/Y  H:i:s' , $lap_nuevafecha );
            //echo $lap_nuevafecha." hrs<br>";
            $lap_dia = date("j"); 
            $lap_mes = date("n"); 
            $lap_anio = date("Y"); 
            $lap_m="";
            switch ($lap_mes) {
                case 1:$lap_m="01"; break;
                case 2:$lap_m="02"; break;
                case 3:$lap_m="03"; break;
                case 4:$lap_m="04"; break;
                case 5:$lap_m="05"; break;
                case 6:$lap_m="06"; break;
                case 7:$lap_m="07"; break;
                case 8:$lap_m="08"; break;
                case 9:$lap_m="09"; break;
                case 10:$lap_m="10"; break;
                case 11:$lap_m="11"; break;
                case 12:$lap_m="12"; break;
            }
            echo "&nbsp;&nbsp;" .$lap_dia."/".$lap_m."/".$lap_anio;
            ?>




</TD>


<TD class="" style="width:15%; height:18px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center">

Año Escolar
           

</TD>


<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center"><b><?php echo $_POST["id_tituloxxx"]; ?></b> -&nbsp;&nbsp;Lapso: <u>   <span style="font-size: 14px; color:<?php echo $lap_color_imp2; ?>;"><b><?php echo $_POST["id_lapsoxxx"]; ?></b></span>  </u>.
         

</TD>





</TR>








<TR>

<TD class="" style="width:32%; height:auto; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="LEFT">
</TD>

<TD class="" style="width:15%; height:auto; font-size: 14px; color:<?php echo $lap_color_imp3; ?>;" align="center"><b><u>&nbsp;<?php echo $row_datos_queryperXX['periodo_escolar']; ?>&nbsp;</u></b>
</TD>

<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $lap_color_imp3; ?>;" align="center"><?php echo $lap_row_datos_queryplantel["www"]; ?>
                    

</TD>

</TR>











</TABLE>




<TABLE class="basetabla" cellspacing="-1">


<TR>

<TD class="" style="width:3%; height:90px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>

<TD class="" style="width:29.5%; height:90px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>

<TD class="" style="width:4%; height:90px; font-size: 14px; color:<?php echo $lap_color_imp3; ?>; " align=""><div style="rotate:90; margin-top: 50px;">Asignaturas</div>
</TD>






<?php

include("../../conectar.php");

$lap_ciclito = $_POST["id_cicloxxx"];
$lap_gradito = $_POST["id_gradoxxx"];


$lap_queryasignaturas = "SELECT * FROM asignatura_ciclo_grado
         WHERE id_del_ciclo = $lap_ciclito
         and   id_del_grado = $lap_gradito 
                 
         GROUP BY id_asign_ciclo_grado Limit 1" ;

$lap_datos_controlasign = mysqli_query($enlace, $lap_queryasignaturas) or die(mysqli_error());
$lap_row_datos_controlasign = mysqli_fetch_array($lap_datos_controlasign); 

$lap_la_asign_es = $lap_row_datos_controlasign['id_asignatura'];

$lap_num_materia = $_POST["id_num_matxxx"];
$lap_lapso= $_POST["id_lapsoxxx"];


$lap_querymateria = "SELECT * FROM asignaturas
         WHERE id_asign = $lap_la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$lap_datos_controlmat = mysqli_query($enlace, $lap_querymateria) or die(mysqli_error());
$lap_row_datos_controlmat = mysqli_fetch_array($lap_datos_controlmat); 

mysqli_close($enlace); 

$lap_back_emergency = '#EBECEC';


if ($lap_lapso == '1°') {

$lap_V1_M1 = $lap_row_datos_controlmat['A11'];
$lap_V2_M1 = $lap_row_datos_controlmat['A12'];
$lap_V3_M1 = $lap_row_datos_controlmat['A13'];
$lap_V4_M1 = $lap_row_datos_controlmat['A14'];
$lap_V5_M1 = $lap_row_datos_controlmat['A15'];
$lap_V6_M1 = $lap_row_datos_controlmat['A16'];
$lap_V7_M1 = $lap_row_datos_controlmat['A17'];

$lap_V1_M2 = $lap_row_datos_controlmat['B11'];
$lap_V2_M2 = $lap_row_datos_controlmat['B12'];
$lap_V3_M2 = $lap_row_datos_controlmat['B13'];
$lap_V4_M2 = $lap_row_datos_controlmat['B14'];
$lap_V5_M2 = $lap_row_datos_controlmat['B15'];
$lap_V6_M2 = $lap_row_datos_controlmat['B16'];
$lap_V7_M2 = $lap_row_datos_controlmat['B17'];

$lap_V1_M3 = $lap_row_datos_controlmat['C11'];
$lap_V2_M3 = $lap_row_datos_controlmat['C12'];
$lap_V3_M3 = $lap_row_datos_controlmat['C13'];
$lap_V4_M3 = $lap_row_datos_controlmat['C14'];
$lap_V5_M3 = $lap_row_datos_controlmat['C15'];
$lap_V6_M3 = $lap_row_datos_controlmat['C16'];
$lap_V7_M3 = $lap_row_datos_controlmat['C17'];

$lap_V1_M4 = $lap_row_datos_controlmat['D11'];
$lap_V2_M4 = $lap_row_datos_controlmat['D12'];
$lap_V3_M4 = $lap_row_datos_controlmat['D13'];
$lap_V4_M4 = $lap_row_datos_controlmat['D14'];
$lap_V5_M4 = $lap_row_datos_controlmat['D15'];
$lap_V6_M4 = $lap_row_datos_controlmat['D16'];
$lap_V7_M4 = $lap_row_datos_controlmat['D17'];

$lap_V1_M5 = $lap_row_datos_controlmat['E11'];
$lap_V2_M5 = $lap_row_datos_controlmat['E12'];
$lap_V3_M5 = $lap_row_datos_controlmat['E13'];
$lap_V4_M5 = $lap_row_datos_controlmat['E14'];
$lap_V5_M5 = $lap_row_datos_controlmat['E15'];
$lap_V6_M5 = $lap_row_datos_controlmat['E16'];
$lap_V7_M5 = $lap_row_datos_controlmat['E17'];

$lap_V1_M6 = $lap_row_datos_controlmat['F11'];
$lap_V2_M6 = $lap_row_datos_controlmat['F12'];
$lap_V3_M6 = $lap_row_datos_controlmat['F13'];
$lap_V4_M6 = $lap_row_datos_controlmat['F14'];
$lap_V5_M6 = $lap_row_datos_controlmat['F15'];
$lap_V6_M6 = $lap_row_datos_controlmat['F16'];
$lap_V7_M6 = $lap_row_datos_controlmat['F17'];

$lap_V1_M7 = $lap_row_datos_controlmat['G11'];
$lap_V2_M7 = $lap_row_datos_controlmat['G12'];
$lap_V3_M7 = $lap_row_datos_controlmat['G13'];
$lap_V4_M7 = $lap_row_datos_controlmat['G14'];
$lap_V5_M7 = $lap_row_datos_controlmat['G15'];
$lap_V6_M7 = $lap_row_datos_controlmat['G16'];
$lap_V7_M7 = $lap_row_datos_controlmat['G17'];

$lap_V1_M8 = $lap_row_datos_controlmat['H11'];
$lap_V2_M8 = $lap_row_datos_controlmat['H12'];
$lap_V3_M8 = $lap_row_datos_controlmat['H13'];
$lap_V4_M8 = $lap_row_datos_controlmat['H14'];
$lap_V5_M8 = $lap_row_datos_controlmat['H15'];
$lap_V6_M8 = $lap_row_datos_controlmat['H16'];
$lap_V7_M8 = $lap_row_datos_controlmat['H17'];

$lap_V1_M9 = $lap_row_datos_controlmat['I11'];
$lap_V2_M9 = $lap_row_datos_controlmat['I12'];
$lap_V3_M9 = $lap_row_datos_controlmat['I13'];
$lap_V4_M9 = $lap_row_datos_controlmat['I14'];
$lap_V5_M9 = $lap_row_datos_controlmat['I15'];
$lap_V6_M9 = $lap_row_datos_controlmat['I16'];
$lap_V7_M9 = $lap_row_datos_controlmat['I17'];

$lap_V1_M10 = $lap_row_datos_controlmat['J11'];
$lap_V2_M10 = $lap_row_datos_controlmat['J12'];
$lap_V3_M10 = $lap_row_datos_controlmat['J13'];
$lap_V4_M10 = $lap_row_datos_controlmat['J14'];
$lap_V5_M10 = $lap_row_datos_controlmat['J15'];
$lap_V6_M10 = $lap_row_datos_controlmat['J16'];
$lap_V7_M10 = $lap_row_datos_controlmat['J17'];

$lap_V1_M11 = $lap_row_datos_controlmat['K11'];
$lap_V2_M11 = $lap_row_datos_controlmat['K12'];
$lap_V3_M11 = $lap_row_datos_controlmat['K13'];
$lap_V4_M11 = $lap_row_datos_controlmat['K14'];
$lap_V5_M11 = $lap_row_datos_controlmat['K15'];
$lap_V6_M11 = $lap_row_datos_controlmat['K16'];
$lap_V7_M11 = $lap_row_datos_controlmat['K17'];

$lap_V1_M12 = $lap_row_datos_controlmat['L11'];
$lap_V2_M12 = $lap_row_datos_controlmat['L12'];
$lap_V3_M12 = $lap_row_datos_controlmat['L13'];
$lap_V4_M12 = $lap_row_datos_controlmat['L14'];
$lap_V5_M12 = $lap_row_datos_controlmat['L15'];
$lap_V6_M12 = $lap_row_datos_controlmat['L16'];
$lap_V7_M12 = $lap_row_datos_controlmat['L17'];

$lap_V1_M13 = $lap_row_datos_controlmat['M11'];
$lap_V2_M13 = $lap_row_datos_controlmat['M12'];
$lap_V3_M13 = $lap_row_datos_controlmat['M13'];
$lap_V4_M13 = $lap_row_datos_controlmat['M14'];
$lap_V5_M13 = $lap_row_datos_controlmat['M15'];
$lap_V6_M13 = $lap_row_datos_controlmat['M16'];
$lap_V7_M13 = $lap_row_datos_controlmat['M17'];

$lap_V1_M14 = $lap_row_datos_controlmat['N11'];
$lap_V2_M14 = $lap_row_datos_controlmat['N12'];
$lap_V3_M14 = $lap_row_datos_controlmat['N13'];
$lap_V4_M14 = $lap_row_datos_controlmat['N14'];
$lap_V5_M14 = $lap_row_datos_controlmat['N15'];
$lap_V6_M14 = $lap_row_datos_controlmat['N16'];
$lap_V7_M14 = $lap_row_datos_controlmat['N17'];

}





if ($lap_lapso == '2°') {

$lap_V1_M1 = $lap_row_datos_controlmat['A21'];
$lap_V2_M1 = $lap_row_datos_controlmat['A22'];
$lap_V3_M1 = $lap_row_datos_controlmat['A23'];
$lap_V4_M1 = $lap_row_datos_controlmat['A24'];
$lap_V5_M1 = $lap_row_datos_controlmat['A25'];
$lap_V6_M1 = $lap_row_datos_controlmat['A26'];
$lap_V7_M1 = $lap_row_datos_controlmat['A27'];

$lap_V1_M2 = $lap_row_datos_controlmat['B21'];
$lap_V2_M2 = $lap_row_datos_controlmat['B22'];
$lap_V3_M2 = $lap_row_datos_controlmat['B23'];
$lap_V4_M2 = $lap_row_datos_controlmat['B24'];
$lap_V5_M2 = $lap_row_datos_controlmat['B25'];
$lap_V6_M2 = $lap_row_datos_controlmat['B26'];
$lap_V7_M2 = $lap_row_datos_controlmat['B27'];

$lap_V1_M3 = $lap_row_datos_controlmat['C21'];
$lap_V2_M3 = $lap_row_datos_controlmat['C22'];
$lap_V3_M3 = $lap_row_datos_controlmat['C23'];
$lap_V4_M3 = $lap_row_datos_controlmat['C24'];
$lap_V5_M3 = $lap_row_datos_controlmat['C25'];
$lap_V6_M3 = $lap_row_datos_controlmat['C26'];
$lap_V7_M3 = $lap_row_datos_controlmat['C27'];

$lap_V1_M4 = $lap_row_datos_controlmat['D21'];
$lap_V2_M4 = $lap_row_datos_controlmat['D22'];
$lap_V3_M4 = $lap_row_datos_controlmat['D23'];
$lap_V4_M4 = $lap_row_datos_controlmat['D24'];
$lap_V5_M4 = $lap_row_datos_controlmat['D25'];
$lap_V6_M4 = $lap_row_datos_controlmat['D26'];
$lap_V7_M4 = $lap_row_datos_controlmat['D27'];

$lap_V1_M5 = $lap_row_datos_controlmat['E21'];
$lap_V2_M5 = $lap_row_datos_controlmat['E22'];
$lap_V3_M5 = $lap_row_datos_controlmat['E23'];
$lap_V4_M5 = $lap_row_datos_controlmat['E24'];
$lap_V5_M5 = $lap_row_datos_controlmat['E25'];
$lap_V6_M5 = $lap_row_datos_controlmat['E26'];
$lap_V7_M5 = $lap_row_datos_controlmat['E27'];

$lap_V1_M6 = $lap_row_datos_controlmat['F21'];
$lap_V2_M6 = $lap_row_datos_controlmat['F22'];
$lap_V3_M6 = $lap_row_datos_controlmat['F23'];
$lap_V4_M6 = $lap_row_datos_controlmat['F24'];
$lap_V5_M6 = $lap_row_datos_controlmat['F25'];
$lap_V6_M6 = $lap_row_datos_controlmat['F26'];
$lap_V7_M6 = $lap_row_datos_controlmat['F27'];

$lap_V1_M7 = $lap_row_datos_controlmat['G21'];
$lap_V2_M7 = $lap_row_datos_controlmat['G22'];
$lap_V3_M7 = $lap_row_datos_controlmat['G23'];
$lap_V4_M7 = $lap_row_datos_controlmat['G24'];
$lap_V5_M7 = $lap_row_datos_controlmat['G25'];
$lap_V6_M7 = $lap_row_datos_controlmat['G26'];
$lap_V7_M7 = $lap_row_datos_controlmat['G27'];

$lap_V1_M8 = $lap_row_datos_controlmat['H21'];
$lap_V2_M8 = $lap_row_datos_controlmat['H22'];
$lap_V3_M8 = $lap_row_datos_controlmat['H23'];
$lap_V4_M8 = $lap_row_datos_controlmat['H24'];
$lap_V5_M8 = $lap_row_datos_controlmat['H25'];
$lap_V6_M8 = $lap_row_datos_controlmat['H26'];
$lap_V7_M8 = $lap_row_datos_controlmat['H27'];

$lap_V1_M9 = $lap_row_datos_controlmat['I21'];
$lap_V2_M9 = $lap_row_datos_controlmat['I22'];
$lap_V3_M9 = $lap_row_datos_controlmat['I23'];
$lap_V4_M9 = $lap_row_datos_controlmat['I24'];
$lap_V5_M9 = $lap_row_datos_controlmat['I25'];
$lap_V6_M9 = $lap_row_datos_controlmat['I26'];
$lap_V7_M9 = $lap_row_datos_controlmat['I27'];

$lap_V1_M10 = $lap_row_datos_controlmat['J21'];
$lap_V2_M10 = $lap_row_datos_controlmat['J22'];
$lap_V3_M10 = $lap_row_datos_controlmat['J23'];
$lap_V4_M10 = $lap_row_datos_controlmat['J24'];
$lap_V5_M10 = $lap_row_datos_controlmat['J25'];
$lap_V6_M10 = $lap_row_datos_controlmat['J26'];
$lap_V7_M10 = $lap_row_datos_controlmat['J27'];

$lap_V1_M11 = $lap_row_datos_controlmat['K21'];
$lap_V2_M11 = $lap_row_datos_controlmat['K22'];
$lap_V3_M11 = $lap_row_datos_controlmat['K23'];
$lap_V4_M11 = $lap_row_datos_controlmat['K24'];
$lap_V5_M11 = $lap_row_datos_controlmat['K25'];
$lap_V6_M11 = $lap_row_datos_controlmat['K26'];
$lap_V7_M11 = $lap_row_datos_controlmat['K27'];

$lap_V1_M12 = $lap_row_datos_controlmat['L21'];
$lap_V2_M12 = $lap_row_datos_controlmat['L22'];
$lap_V3_M12 = $lap_row_datos_controlmat['L23'];
$lap_V4_M12 = $lap_row_datos_controlmat['L24'];
$lap_V5_M12 = $lap_row_datos_controlmat['L25'];
$lap_V6_M12 = $lap_row_datos_controlmat['L26'];
$lap_V7_M12 = $lap_row_datos_controlmat['L27'];

$lap_V1_M13 = $lap_row_datos_controlmat['M21'];
$lap_V2_M13 = $lap_row_datos_controlmat['M22'];
$lap_V3_M13 = $lap_row_datos_controlmat['M23'];
$lap_V4_M13 = $lap_row_datos_controlmat['M24'];
$lap_V5_M13 = $lap_row_datos_controlmat['M25'];
$lap_V6_M13 = $lap_row_datos_controlmat['M26'];
$lap_V7_M13 = $lap_row_datos_controlmat['M27'];

$lap_V1_M14 = $lap_row_datos_controlmat['N21'];
$lap_V2_M14 = $lap_row_datos_controlmat['N22'];
$lap_V3_M14 = $lap_row_datos_controlmat['N23'];
$lap_V4_M14 = $lap_row_datos_controlmat['N24'];
$lap_V5_M14 = $lap_row_datos_controlmat['N25'];
$lap_V6_M14 = $lap_row_datos_controlmat['N26'];
$lap_V7_M14 = $lap_row_datos_controlmat['N27'];

}




if ($lap_lapso == '3°') {

$lap_V1_M1 = $lap_row_datos_controlmat['A31'];
$lap_V2_M1 = $lap_row_datos_controlmat['A32'];
$lap_V3_M1 = $lap_row_datos_controlmat['A33'];
$lap_V4_M1 = $lap_row_datos_controlmat['A34'];
$lap_V5_M1 = $lap_row_datos_controlmat['A35'];
$lap_V6_M1 = $lap_row_datos_controlmat['A36'];
$lap_V7_M1 = $lap_row_datos_controlmat['A37'];

$lap_V1_M2 = $lap_row_datos_controlmat['B31'];
$lap_V2_M2 = $lap_row_datos_controlmat['B32'];
$lap_V3_M2 = $lap_row_datos_controlmat['B33'];
$lap_V4_M2 = $lap_row_datos_controlmat['B34'];
$lap_V5_M2 = $lap_row_datos_controlmat['B35'];
$lap_V6_M2 = $lap_row_datos_controlmat['B36'];
$lap_V7_M2 = $lap_row_datos_controlmat['B37'];

$lap_V1_M3 = $lap_row_datos_controlmat['C31'];
$lap_V2_M3 = $lap_row_datos_controlmat['C32'];
$lap_V3_M3 = $lap_row_datos_controlmat['C33'];
$lap_V4_M3 = $lap_row_datos_controlmat['C34'];
$lap_V5_M3 = $lap_row_datos_controlmat['C35'];
$lap_V6_M3 = $lap_row_datos_controlmat['C36'];
$lap_V7_M3 = $lap_row_datos_controlmat['C37'];

$lap_V1_M4 = $lap_row_datos_controlmat['D31'];
$lap_V2_M4 = $lap_row_datos_controlmat['D32'];
$lap_V3_M4 = $lap_row_datos_controlmat['D33'];
$lap_V4_M4 = $lap_row_datos_controlmat['D34'];
$lap_V5_M4 = $lap_row_datos_controlmat['D35'];
$lap_V6_M4 = $lap_row_datos_controlmat['D36'];
$lap_V7_M4 = $lap_row_datos_controlmat['D37'];

$lap_V1_M5 = $lap_row_datos_controlmat['E31'];
$lap_V2_M5 = $lap_row_datos_controlmat['E32'];
$lap_V3_M5 = $lap_row_datos_controlmat['E33'];
$lap_V4_M5 = $lap_row_datos_controlmat['E34'];
$lap_V5_M5 = $lap_row_datos_controlmat['E35'];
$lap_V6_M5 = $lap_row_datos_controlmat['E36'];
$lap_V7_M5 = $lap_row_datos_controlmat['E37'];

$lap_V1_M6 = $lap_row_datos_controlmat['F31'];
$lap_V2_M6 = $lap_row_datos_controlmat['F32'];
$lap_V3_M6 = $lap_row_datos_controlmat['F33'];
$lap_V4_M6 = $lap_row_datos_controlmat['F34'];
$lap_V5_M6 = $lap_row_datos_controlmat['F35'];
$lap_V6_M6 = $lap_row_datos_controlmat['F36'];
$lap_V7_M6 = $lap_row_datos_controlmat['F37'];

$lap_V1_M7 = $lap_row_datos_controlmat['G31'];
$lap_V2_M7 = $lap_row_datos_controlmat['G32'];
$lap_V3_M7 = $lap_row_datos_controlmat['G33'];
$lap_V4_M7 = $lap_row_datos_controlmat['G34'];
$lap_V5_M7 = $lap_row_datos_controlmat['G35'];
$lap_V6_M7 = $lap_row_datos_controlmat['G36'];
$lap_V7_M7 = $lap_row_datos_controlmat['G37'];

$lap_V1_M8 = $lap_row_datos_controlmat['H31'];
$lap_V2_M8 = $lap_row_datos_controlmat['H32'];
$lap_V3_M8 = $lap_row_datos_controlmat['H33'];
$lap_V4_M8 = $lap_row_datos_controlmat['H34'];
$lap_V5_M8 = $lap_row_datos_controlmat['H35'];
$lap_V6_M8 = $lap_row_datos_controlmat['H36'];
$lap_V7_M8 = $lap_row_datos_controlmat['H37'];

$lap_V1_M9 = $lap_row_datos_controlmat['I31'];
$lap_V2_M9 = $lap_row_datos_controlmat['I32'];
$lap_V3_M9 = $lap_row_datos_controlmat['I33'];
$lap_V4_M9 = $lap_row_datos_controlmat['I34'];
$lap_V5_M9 = $lap_row_datos_controlmat['I35'];
$lap_V6_M9 = $lap_row_datos_controlmat['I36'];
$lap_V7_M9 = $lap_row_datos_controlmat['I37'];

$lap_V1_M10 = $lap_row_datos_controlmat['J31'];
$lap_V2_M10 = $lap_row_datos_controlmat['J32'];
$lap_V3_M10 = $lap_row_datos_controlmat['J33'];
$lap_V4_M10 = $lap_row_datos_controlmat['J34'];
$lap_V5_M10 = $lap_row_datos_controlmat['J35'];
$lap_V6_M10 = $lap_row_datos_controlmat['J36'];
$lap_V7_M10 = $lap_row_datos_controlmat['J37'];

$lap_V1_M11 = $lap_row_datos_controlmat['K31'];
$lap_V2_M11 = $lap_row_datos_controlmat['K32'];
$lap_V3_M11 = $lap_row_datos_controlmat['K33'];
$lap_V4_M11 = $lap_row_datos_controlmat['K34'];
$lap_V5_M11 = $lap_row_datos_controlmat['K35'];
$lap_V6_M11 = $lap_row_datos_controlmat['K36'];
$lap_V7_M11 = $lap_row_datos_controlmat['K37'];

$lap_V1_M12 = $lap_row_datos_controlmat['L31'];
$lap_V2_M12 = $lap_row_datos_controlmat['L32'];
$lap_V3_M12 = $lap_row_datos_controlmat['L33'];
$lap_V4_M12 = $lap_row_datos_controlmat['L34'];
$lap_V5_M12 = $lap_row_datos_controlmat['L35'];
$lap_V6_M12 = $lap_row_datos_controlmat['L36'];
$lap_V7_M12 = $lap_row_datos_controlmat['L37'];

$lap_V1_M13 = $lap_row_datos_controlmat['M31'];
$lap_V2_M13 = $lap_row_datos_controlmat['M32'];
$lap_V3_M13 = $lap_row_datos_controlmat['M33'];
$lap_V4_M13 = $lap_row_datos_controlmat['M34'];
$lap_V5_M13 = $lap_row_datos_controlmat['M35'];
$lap_V6_M13 = $lap_row_datos_controlmat['M36'];
$lap_V7_M13 = $lap_row_datos_controlmat['M37'];

$lap_V1_M14 = $lap_row_datos_controlmat['N31'];
$lap_V2_M14 = $lap_row_datos_controlmat['N32'];
$lap_V3_M14 = $lap_row_datos_controlmat['N33'];
$lap_V4_M14 = $lap_row_datos_controlmat['N34'];
$lap_V5_M14 = $lap_row_datos_controlmat['N35'];
$lap_V6_M14 = $lap_row_datos_controlmat['N36'];
$lap_V7_M14 = $lap_row_datos_controlmat['N37'];

}



$lap_para_el_porc_V1_M1 = ($lap_V1_M1 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V2_M1 = ($lap_V2_M1 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V3_M1 = ($lap_V3_M1 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V4_M1 = ($lap_V4_M1 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V5_M1 = ($lap_V5_M1 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V6_M1 = ($lap_V6_M1 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V7_M1 = ($lap_V7_M1 * $el_puntaje_completo_es)/100;


$lap_para_el_porc_V1_M2 = ($lap_V1_M2 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V2_M2 = ($lap_V2_M2 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V3_M2 = ($lap_V3_M2 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V4_M2 = ($lap_V4_M2 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V5_M2 = ($lap_V5_M2 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V6_M2 = ($lap_V6_M2 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V7_M2 = ($lap_V7_M2 * $el_puntaje_completo_es)/100;


$lap_para_el_porc_V1_M3 = ($lap_V1_M3 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V2_M3 = ($lap_V2_M3 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V3_M3 = ($lap_V3_M3 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V4_M3 = ($lap_V4_M3 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V5_M3 = ($lap_V5_M3 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V6_M3 = ($lap_V6_M3 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V7_M3 = ($lap_V7_M3 * $el_puntaje_completo_es)/100;


$lap_para_el_porc_V1_M4 = ($lap_V1_M4 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V2_M4 = ($lap_V2_M4 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V3_M4 = ($lap_V3_M4 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V4_M4 = ($lap_V4_M4 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V5_M4 = ($lap_V5_M4 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V6_M4 = ($lap_V6_M4 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V7_M4 = ($lap_V7_M4 * $el_puntaje_completo_es)/100;

$lap_para_el_porc_V1_M5 = ($lap_V1_M5 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V2_M5 = ($lap_V2_M5 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V3_M5 = ($lap_V3_M5 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V4_M5 = ($lap_V4_M5 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V5_M5 = ($lap_V5_M5 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V6_M5 = ($lap_V6_M5 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V7_M5 = ($lap_V7_M5 * $el_puntaje_completo_es)/100;


$lap_para_el_porc_V1_M6 = ($lap_V1_M6 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V2_M6 = ($lap_V2_M6 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V3_M6 = ($lap_V3_M6 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V4_M6 = ($lap_V4_M6 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V5_M6 = ($lap_V5_M6 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V6_M6 = ($lap_V6_M6 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V7_M6 = ($lap_V7_M6 * $el_puntaje_completo_es)/100;


$lap_para_el_porc_V1_M7 = ($lap_V1_M7 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V2_M7 = ($lap_V2_M7 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V3_M7 = ($lap_V3_M7 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V4_M7 = ($lap_V4_M7 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V5_M7 = ($lap_V5_M7 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V6_M7 = ($lap_V6_M7 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V7_M7 = ($lap_V7_M7 * $el_puntaje_completo_es)/100;


$lap_para_el_porc_V1_M8 = ($lap_V1_M8 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V2_M8 = ($lap_V2_M8 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V3_M8 = ($lap_V3_M8 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V4_M8 = ($lap_V4_M8 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V5_M8 = ($lap_V5_M8 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V6_M8 = ($lap_V6_M8 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V7_M8 = ($lap_V7_M8 * $el_puntaje_completo_es)/100;


$lap_para_el_porc_V1_M9 = ($lap_V1_M9 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V2_M9 = ($lap_V2_M9 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V3_M9 = ($lap_V3_M9 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V4_M9 = ($lap_V4_M9 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V5_M9 = ($lap_V5_M9 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V6_M9 = ($lap_V6_M9 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V7_M9 = ($lap_V7_M9 * $el_puntaje_completo_es)/100;


$lap_para_el_porc_V1_M10 = ($lap_V1_M10 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V2_M10 = ($lap_V2_M10 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V3_M10 = ($lap_V3_M10 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V4_M10 = ($lap_V4_M10 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V5_M10 = ($lap_V5_M10 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V6_M10 = ($lap_V6_M10 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V7_M10 = ($lap_V7_M10 * $el_puntaje_completo_es)/100;

$lap_para_el_porc_V1_M11 = ($lap_V1_M11 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V2_M11 = ($lap_V2_M11 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V3_M11 = ($lap_V3_M11 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V4_M11 = ($lap_V4_M11 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V5_M11 = ($lap_V5_M11 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V6_M11 = ($lap_V6_M11 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V7_M11 = ($lap_V7_M11 * $el_puntaje_completo_es)/100;


$lap_para_el_porc_V1_M12 = ($lap_V1_M12 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V2_M12 = ($lap_V2_M12 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V3_M12 = ($lap_V3_M12 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V4_M12 = ($lap_V4_M12 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V5_M12 = ($lap_V5_M12 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V6_M12 = ($lap_V6_M12 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V7_M12 = ($lap_V7_M12 * $el_puntaje_completo_es)/100;


$lap_para_el_porc_V1_M13 = ($lap_V1_M13 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V2_M13 = ($lap_V2_M13 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V3_M13 = ($lap_V3_M13 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V4_M13 = ($lap_V4_M13 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V5_M13 = ($lap_V5_M13 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V6_M13 = ($lap_V6_M13 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V7_M13 = ($lap_V7_M13 * $el_puntaje_completo_es)/100;


$lap_para_el_porc_V1_M14 = ($lap_V1_M14 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V2_M14 = ($lap_V2_M14 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V3_M14 = ($lap_V3_M14 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V4_M14 = ($lap_V4_M14 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V5_M14 = ($lap_V5_M14 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V6_M14 = ($lap_V6_M14 * $el_puntaje_completo_es)/100;
$lap_para_el_porc_V7_M14 = ($lap_V7_M14 * $el_puntaje_completo_es)/100;



?>









<TD class="miniborder" style="width:3.4%; height:90px; font-size: 11px; color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px; "><b><?php echo $lap_row_datos_controlmat['a_abrev'];?></b></div>
</TD>
<TD class="miniborder" style="width:3.4%; height:90px; font-size: 11px; background-color:<?php echo $lap_back_emergency; ?>; 
color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px;"><b><?php echo $lap_row_datos_controlmat['b_abrev'];?></b></div>
</TD>




<TD class="miniborderleft" style="width:3.4%; height:90px; font-size: 11px; color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px; "><b><?php echo $lap_row_datos_controlmat['c_abrev'];?></b></div>
</TD>


<TD class="miniborder" style="width:3.4%; height:90px; font-size: 11px; background-color:<?php echo $lap_back_emergency; ?>; 
color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px; "><b><?php echo $lap_row_datos_controlmat['d_abrev'];?></b></div>
</TD>





<TD class="miniborderleft" style="width:3.4%; height:90px; font-size: 11px; color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px; "><b><?php echo $lap_row_datos_controlmat['e_abrev'];?></b></div>
</TD>
<TD class="miniborder" style="width:3.4%; height:90px; font-size: 11px; background-color:<?php echo $lap_back_emergency; ?>; 
color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px;"><b><?php echo $lap_row_datos_controlmat['f_abrev'];?></b></div>
</TD>




<TD class="miniborderleft" style="width:3.4%; height:90px; font-size: 11px; color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px; "><b><?php echo $lap_row_datos_controlmat['g_abrev'];?></b></div>
</TD>
<TD class="miniborder" style="width:3.4%; height:90px; font-size: 11px; background-color:<?php echo $lap_back_emergency; ?>; 
color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px;"><b><?php echo $lap_row_datos_controlmat['h_abrev'];?></b></div>
</TD>





<TD class="miniborderleft" style="width:3.4%; height:90px; font-size: 11px; color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px; "><b><?php echo $lap_row_datos_controlmat['i_abrev'];?></b></div>
</TD>
<TD class="miniborder" style="width:3.3%; height:90px; font-size: 11px; background-color:<?php echo $lap_back_emergency; ?>; 
color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px;"><b><?php echo $lap_row_datos_controlmat['j_abrev'];?></b></div>
</TD>




<TD class="miniborderleft" style="width:3.3%; height:90px; font-size: 11px; color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px;"><b><?php echo $lap_row_datos_controlmat['k_abrev'];?></b></div>
</TD>
<TD class="miniborder" style="width:3.4%; height:90px; font-size: 11px; background-color:<?php echo $lap_back_emergency; ?>; 
color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px;"><b><?php echo $lap_row_datos_controlmat['l_abrev'];?></b></div>
</TD>




<TD class="miniborderleft" style="width:3.4%; height:90px; font-size: 11px; color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px; "><b><?php echo $lap_row_datos_controlmat['m_abrev'];?></b></div>
</TD>
<TD class="miniborder" style="width:3.4%; height:90px; font-size: 11px; background-color:<?php echo $lap_back_emergency; ?>; 
color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px;"><b><?php echo $lap_row_datos_controlmat['n_abrev'];?></b></div>
</TD>




<TD class="miniborderleft" style="width:3.4%; height:90px; font-size: 11px; color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 2px; margin-top: 60px; "></div>
</TD>









<TD class="" style="width:7.9%; height:90px; font-size: 10px; color:<?php echo $lap_color_imp3; ?>;" align=""><div style="margin-top: 75px;"><b>&nbsp;&nbsp;Promedios</b></div>   
</TD>









<TD class="" style="width:0.5%; height:90px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>

<TD class="miniborder" style="width:4.1%; height:90px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 8px; margin-top: 60px;"><b>Aplazadas</b></div>
</TD>

</TR>


</TABLE>







<TABLE class="basetabla" style="margin-top: 4px;" cellspacing="-1">


<TR >

<TD class="miniborder" style="width:3%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp3; ?>;" align="center"><b>N°</b>
</TD>

<TD class="" style="width:33.5%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp3; ?>;" align="right">Ponderación:&nbsp;&nbsp;
</TD>

<?php 
if ($lap_row_datos_controlmat['a_abrev'] == '') {
 $lap_nn1 = '';   # code...
}
else {
   $lap_nn1 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborder" style="width:3.4%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center"><?php echo $lap_nn1; ?>
</TD>


<?php 
if ($lap_row_datos_controlmat['b_abrev'] == '') {
 $lap_nn2 = '';   # code...
}
else {
   $lap_nn2 = $el_puntaje_completo_es;  
}
?>



<TD class="miniborder" style="width:3.4%; height:15px; font-size: 14px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">
<?php echo $lap_nn2; ?>
</TD>

<?php 
if ($lap_row_datos_controlmat['c_abrev'] == '') {
 $lap_nn3 = '';   # code...
}
else {
   $lap_nn3 = $el_puntaje_completo_es;  
}
?>



<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center"><?php echo $lap_nn3; ?>
</TD>

<?php 
if ($lap_row_datos_controlmat['d_abrev'] == '') {
 $lap_nn4 = '';   # code...
}
else {
   $lap_nn4 = $el_puntaje_completo_es;  
}
?>


<TD class="miniborder" style="width:3.4%; height:15px; font-size: 14px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">
<?php echo $lap_nn4; ?>
</TD>

<?php 
if ($lap_row_datos_controlmat['e_abrev'] == '') {
 $lap_nn5 = '';   # code...
}
else {
   $lap_nn5 = $el_puntaje_completo_es;  
}
?>


<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center"><?php echo $lap_nn5; ?>
</TD>


<?php 
if ($lap_row_datos_controlmat['f_abrev'] == '') {
 $lap_nn6 = '';   # code...
}
else {
   $lap_nn6 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborder" style="width:3.4%; height:15px; font-size: 14px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">
<?php echo $lap_nn6; ?>
</TD>


<?php 
if ($lap_row_datos_controlmat['g_abrev'] == '') {
 $lap_nn7 = '';   # code...
}
else {
   $lap_nn7 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center"><?php echo $lap_nn7; ?>
</TD>

<?php 
if ($lap_row_datos_controlmat['h_abrev'] == '') {
 $lap_nn8 = '';   # code...
}
else {
   $lap_nn8 = $el_puntaje_completo_es;  
}
?>


<TD class="miniborder" style="width:3.4%; height:15px; font-size: 14px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">
<?php echo $lap_nn8; ?>
</TD>

<?php 
if ($lap_row_datos_controlmat['i_abrev'] == '') {
 $lap_nn9 = '';   # code...
}
else {
   $lap_nn9 = $el_puntaje_completo_es;  
}
?>


<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center"><?php echo $lap_nn9; ?>
</TD>

<?php 
if ($lap_row_datos_controlmat['j_abrev'] == '') {
 $lap_nn10 = '';   # code...
}
else {
   $lap_nn10 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborder" style="width:3.4%; height:15px; font-size: 14px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">
<?php echo $lap_nn10; ?>
</TD>


<?php 
if ($lap_row_datos_controlmat['k_abrev'] == '') {
 $lap_nn11 = '';   # code...
}
else {
   $lap_nn11 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center"><?php echo $lap_nn11; ?>
</TD>

<?php 
if ($lap_row_datos_controlmat['l_abrev'] == '') {
 $lap_nn12 = '';   # code...
}
else {
   $lap_nn12 = $el_puntaje_completo_es;  
}
?>


<TD class="miniborder" style="width:3.4%; height:15px; font-size: 14px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">
<?php echo $lap_nn12; ?>
</TD>

<?php 
if ($lap_row_datos_controlmat['m_abrev'] == '') {
 $lap_nn13 = '';   # code...
}
else {
   $lap_nn13 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center"><?php echo $lap_nn13; ?>
</TD>

<?php 
if ($lap_row_datos_controlmat['n_abrev'] == '') {
 $lap_nn14 = '';   # code...
}
else {
   $lap_nn14 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborder" style="width:3.4%; height:15px; font-size: 14px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">
<?php echo $lap_nn14; ?>
</TD>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>



<TD class="miniborderleft" style="width:7.9%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="right">
</TD>
<TD class="" style="width:0.5%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:4.1%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>

</TR>





</TABLE>






<TABLE class="basetabla" style="margin-top: 5px;" cellspacing="-1">



<?php

$lap_id_seccionxxx = $_POST['id_seccionxxx'];
$lap_id_cicloxxx = $_POST['id_cicloxxx'];
$lap_id_gradoxxx = $_POST['id_gradoxxx'];

include("../../conectar.php");


$lap_query = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$lap_id_seccionxxx'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$lap_id_cicloxxx'
         and  grados.id_grado = '$lap_id_gradoxxx'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$lap_datos_control = mysqli_query($enlace, $lap_query) or die(mysqli_error());

$lap_totalRows_datos_control = mysqli_num_rows($lap_datos_control); 

$lap_media =  ceil($lap_totalRows_datos_control/2);

$lap_centro = $lap_media + 1;

    

mysqli_close($enlace);




while( $lap_row_datos_control = mysqli_fetch_assoc($lap_datos_control)){ 


?>









    <TR >

<TD class="miniborder" style="width:3%; height:15px; font-size: 13px; color:<?php echo $lap_color_imp3; ?>;" align="center">


<b><?php


$lap_el_reg_del_est_es = $lap_row_datos_control['id_reg_estu_actual'];

$lap_el_dicho_id_e = $lap_row_datos_control['id_estud'];


include("../../conectar.php");

$lap_query_notas1 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap_el_reg_del_est_es'
               and id_estud = '$lap_el_dicho_id_e'
               and materia = 1
                       
               GROUP BY id_asign_notas limit 1" ;

$lap_datos_control_notas1 = mysqli_query($enlace, $lap_query_notas1) or die(mysqli_error());
$lap_row_datos_control_notasM1 = mysqli_fetch_array($lap_datos_control_notas1); 


$lap_query_notas2 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap_el_reg_del_est_es'
               and id_estud = '$lap_el_dicho_id_e'
               and materia = 2
                       
               GROUP BY id_asign_notas limit 1" ;

$lap_datos_control_notas2 = mysqli_query($enlace, $lap_query_notas2) or die(mysqli_error());
$lap_row_datos_control_notasM2 = mysqli_fetch_array($lap_datos_control_notas2); 


$lap_query_notas3 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap_el_reg_del_est_es'
               and id_estud = '$lap_el_dicho_id_e'
               and materia = 3
                       
               GROUP BY id_asign_notas limit 1" ;

$lap_datos_control_notas3 = mysqli_query($enlace, $lap_query_notas3) or die(mysqli_error());
$lap_row_datos_control_notasM3 = mysqli_fetch_array($lap_datos_control_notas3); 


$lap_query_notas4 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap_el_reg_del_est_es'
               and id_estud = '$lap_el_dicho_id_e'
               and materia = 4
                       
               GROUP BY id_asign_notas limit 1" ;

$lap_datos_control_notas4 = mysqli_query($enlace, $lap_query_notas4) or die(mysqli_error());
$lap_row_datos_control_notasM4 = mysqli_fetch_array($lap_datos_control_notas4); 


$lap_query_notas5 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap_el_reg_del_est_es'
               and id_estud = '$lap_el_dicho_id_e'
               and materia = 5
                       
               GROUP BY id_asign_notas limit 1" ;

$lap_datos_control_notas5 = mysqli_query($enlace, $lap_query_notas5) or die(mysqli_error());
$lap_row_datos_control_notasM5 = mysqli_fetch_array($lap_datos_control_notas5); 


$lap_query_notas6 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap_el_reg_del_est_es'
               and id_estud = '$lap_el_dicho_id_e'
               and materia = 6
                       
               GROUP BY id_asign_notas limit 1" ;

$lap_datos_control_notas6 = mysqli_query($enlace, $lap_query_notas6) or die(mysqli_error());
$lap_row_datos_control_notasM6 = mysqli_fetch_array($lap_datos_control_notas6); 


$lap_query_notas7 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap_el_reg_del_est_es'
               and id_estud = '$lap_el_dicho_id_e'
               and materia = 7
                       
               GROUP BY id_asign_notas limit 1" ;

$lap_datos_control_notas7 = mysqli_query($enlace, $lap_query_notas7) or die(mysqli_error());
$lap_row_datos_control_notasM7 = mysqli_fetch_array($lap_datos_control_notas7); 


$lap_query_notas8 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap_el_reg_del_est_es'
               and id_estud = '$lap_el_dicho_id_e'
               and materia = 8
                       
               GROUP BY id_asign_notas limit 1" ;

$lap_datos_control_notas8 = mysqli_query($enlace, $lap_query_notas8) or die(mysqli_error());
$lap_row_datos_control_notasM8 = mysqli_fetch_array($lap_datos_control_notas8); 


$lap_query_notas9 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap_el_reg_del_est_es'
               and id_estud = '$lap_el_dicho_id_e'
               and materia = 9
                       
               GROUP BY id_asign_notas limit 1" ;

$lap_datos_control_notas9 = mysqli_query($enlace, $lap_query_notas9) or die(mysqli_error());
$lap_row_datos_control_notasM9 = mysqli_fetch_array($lap_datos_control_notas9); 


$lap_query_notas10 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap_el_reg_del_est_es'
               and id_estud = '$lap_el_dicho_id_e'
               and materia = 10
                       
               GROUP BY id_asign_notas limit 1" ;

$lap_datos_control_notas10 = mysqli_query($enlace, $lap_query_notas10) or die(mysqli_error());
$lap_row_datos_control_notasM10 = mysqli_fetch_array($lap_datos_control_notas10); 


$lap_query_notas11 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap_el_reg_del_est_es'
               and id_estud = '$lap_el_dicho_id_e'
               and materia = 11
                       
               GROUP BY id_asign_notas limit 1" ;

$lap_datos_control_notas11 = mysqli_query($enlace, $lap_query_notas11) or die(mysqli_error());
$lap_row_datos_control_notasM11 = mysqli_fetch_array($lap_datos_control_notas11); 


$lap_query_notas12 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap_el_reg_del_est_es'
               and id_estud = '$lap_el_dicho_id_e'
               and materia = 12
                       
               GROUP BY id_asign_notas limit 1" ;

$lap_datos_control_notas12 = mysqli_query($enlace, $lap_query_notas12) or die(mysqli_error());
$lap_row_datos_control_notasM12 = mysqli_fetch_array($lap_datos_control_notas12); 


$lap_query_notas13 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap_el_reg_del_est_es'
               and id_estud = '$lap_el_dicho_id_e'
               and materia = 13
                       
               GROUP BY id_asign_notas limit 1" ;

$lap_datos_control_notas13 = mysqli_query($enlace, $lap_query_notas13) or die(mysqli_error());
$lap_row_datos_control_notasM13 = mysqli_fetch_array($lap_datos_control_notas13); 


$lap_query_notas14 = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$lap_el_reg_del_est_es'
               and id_estud = '$lap_el_dicho_id_e'
               and materia = 14
                       
               GROUP BY id_asign_notas limit 1" ;

$lap_datos_control_notas14 = mysqli_query($enlace, $lap_query_notas14) or die(mysqli_error());
$lap_row_datos_control_notasM14 = mysqli_fetch_array($lap_datos_control_notas14); 

 mysqli_close($enlace);



    echo $lap_i;
    $lap_i++; 


if ($lap_lapso == '1°') {
   

$lap_nota_1_M1 = $lap_row_datos_control_notasM1["nt_11"];
$lap_nota_2_M1 = $lap_row_datos_control_notasM1["nt_12"];
$lap_nota_3_M1 = $lap_row_datos_control_notasM1["nt_13"];
$lap_nota_4_M1 = $lap_row_datos_control_notasM1["nt_14"];
$lap_nota_5_M1 = $lap_row_datos_control_notasM1["nt_15"];
$lap_nota_6_M1 = $lap_row_datos_control_notasM1["nt_16"];
$lap_nota_7_M1 = $lap_row_datos_control_notasM1["nt_17"];
$lap_notaAu_M1 = $lap_row_datos_control_notasM1["nt_Au1"];


$lap_nota_real_1_M1 = ($lap_row_datos_control_notasM1["nt_11"] * $lap_para_el_porc_V1_M1)/$el_puntaje_completo_es;
$lap_nota_real_2_M1 = ($lap_row_datos_control_notasM1["nt_12"] * $lap_para_el_porc_V2_M1)/$el_puntaje_completo_es;
$lap_nota_real_3_M1 = ($lap_row_datos_control_notasM1["nt_13"] * $lap_para_el_porc_V3_M1)/$el_puntaje_completo_es;
$lap_nota_real_4_M1 = ($lap_row_datos_control_notasM1["nt_14"] * $lap_para_el_porc_V4_M1)/$el_puntaje_completo_es;
$lap_nota_real_5_M1 = ($lap_row_datos_control_notasM1["nt_15"] * $lap_para_el_porc_V5_M1)/$el_puntaje_completo_es;
$lap_nota_real_6_M1 = ($lap_row_datos_control_notasM1["nt_16"] * $lap_para_el_porc_V6_M1)/$el_puntaje_completo_es;
$lap_nota_real_7_M1 = ($lap_row_datos_control_notasM1["nt_17"] * $lap_para_el_porc_V7_M1)/$el_puntaje_completo_es;

$lap_total_seven_M1 = $lap_nota_real_1_M1+$lap_nota_real_2_M1+$lap_nota_real_3_M1+$lap_nota_real_4_M1+$lap_nota_real_5_M1+$lap_nota_real_6_M1+$lap_nota_real_7_M1;

$lap_total_seven_con_Au_M1 = $lap_total_seven_M1+ $lap_row_datos_control_notasM1["nt_Au1"];

$lap_total_seven_con_Au_redon_M1_redondeado1 =number_format($lap_total_seven_con_Au_M1, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M1 =number_format($lap_total_seven_con_Au_redon_M1_redondeado1);



$lap_nota_1_M2 = $lap_row_datos_control_notasM2["nt_11"];
$lap_nota_2_M2 = $lap_row_datos_control_notasM2["nt_12"];
$lap_nota_3_M2 = $lap_row_datos_control_notasM2["nt_13"];
$lap_nota_4_M2 = $lap_row_datos_control_notasM2["nt_14"];
$lap_nota_5_M2 = $lap_row_datos_control_notasM2["nt_15"];
$lap_nota_6_M2 = $lap_row_datos_control_notasM2["nt_16"];
$lap_nota_7_M2 = $lap_row_datos_control_notasM2["nt_17"];
$lap_notaAu_M2 = $lap_row_datos_control_notasM2["nt_Au1"];


$lap_nota_real_1_M2 = ($lap_row_datos_control_notasM2["nt_11"] * $lap_para_el_porc_V1_M2)/$el_puntaje_completo_es;
$lap_nota_real_2_M2 = ($lap_row_datos_control_notasM2["nt_12"] * $lap_para_el_porc_V2_M2)/$el_puntaje_completo_es;
$lap_nota_real_3_M2 = ($lap_row_datos_control_notasM2["nt_13"] * $lap_para_el_porc_V3_M2)/$el_puntaje_completo_es;
$lap_nota_real_4_M2 = ($lap_row_datos_control_notasM2["nt_14"] * $lap_para_el_porc_V4_M2)/$el_puntaje_completo_es;
$lap_nota_real_5_M2 = ($lap_row_datos_control_notasM2["nt_15"] * $lap_para_el_porc_V5_M2)/$el_puntaje_completo_es;
$lap_nota_real_6_M2 = ($lap_row_datos_control_notasM2["nt_16"] * $lap_para_el_porc_V6_M2)/$el_puntaje_completo_es;
$lap_nota_real_7_M2 = ($lap_row_datos_control_notasM2["nt_17"] * $lap_para_el_porc_V7_M2)/$el_puntaje_completo_es;

$lap_total_seven_M2 = $lap_nota_real_1_M2+$lap_nota_real_2_M2+$lap_nota_real_3_M2+$lap_nota_real_4_M2+$lap_nota_real_5_M2+$lap_nota_real_6_M2+$lap_nota_real_7_M2;

$lap_total_seven_con_Au_M2 = $lap_total_seven_M2+ $lap_row_datos_control_notasM2["nt_Au1"];

$lap_total_seven_con_Au_redon_M2_redondeado1 =number_format($lap_total_seven_con_Au_M2, 1, '.', '');      ////        nuevoooooooooooooo


$lap_total_seven_con_Au_redon_M2 =number_format($lap_total_seven_con_Au_redon_M2_redondeado1);



$lap_nota_1_M3 = $lap_row_datos_control_notasM3["nt_11"];
$lap_nota_2_M3 = $lap_row_datos_control_notasM3["nt_12"];
$lap_nota_3_M3 = $lap_row_datos_control_notasM3["nt_13"];
$lap_nota_4_M3 = $lap_row_datos_control_notasM3["nt_14"];
$lap_nota_5_M3 = $lap_row_datos_control_notasM3["nt_15"];
$lap_nota_6_M3 = $lap_row_datos_control_notasM3["nt_16"];
$lap_nota_7_M3 = $lap_row_datos_control_notasM3["nt_17"];
$lap_notaAu_M3 = $lap_row_datos_control_notasM3["nt_Au1"];


$lap_nota_real_1_M3 = ($lap_row_datos_control_notasM3["nt_11"] * $lap_para_el_porc_V1_M3)/$el_puntaje_completo_es;
$lap_nota_real_2_M3 = ($lap_row_datos_control_notasM3["nt_12"] * $lap_para_el_porc_V2_M3)/$el_puntaje_completo_es;
$lap_nota_real_3_M3 = ($lap_row_datos_control_notasM3["nt_13"] * $lap_para_el_porc_V3_M3)/$el_puntaje_completo_es;
$lap_nota_real_4_M3 = ($lap_row_datos_control_notasM3["nt_14"] * $lap_para_el_porc_V4_M3)/$el_puntaje_completo_es;
$lap_nota_real_5_M3 = ($lap_row_datos_control_notasM3["nt_15"] * $lap_para_el_porc_V5_M3)/$el_puntaje_completo_es;
$lap_nota_real_6_M3 = ($lap_row_datos_control_notasM3["nt_16"] * $lap_para_el_porc_V6_M3)/$el_puntaje_completo_es;
$lap_nota_real_7_M3 = ($lap_row_datos_control_notasM3["nt_17"] * $lap_para_el_porc_V7_M3)/$el_puntaje_completo_es;

$lap_total_seven_M3 = $lap_nota_real_1_M3+$lap_nota_real_2_M3+$lap_nota_real_3_M3+$lap_nota_real_4_M3+$lap_nota_real_5_M3+$lap_nota_real_6_M3+$lap_nota_real_7_M3;

$lap_total_seven_con_Au_M3 = $lap_total_seven_M3+ $lap_row_datos_control_notasM3["nt_Au1"];


$lap_total_seven_con_Au_redon_M3_redondeado1 =number_format($lap_total_seven_con_Au_M3, 1, '.', '');      ////        nuevoooooooooooooo


$lap_total_seven_con_Au_redon_M3 =number_format($lap_total_seven_con_Au_redon_M3_redondeado1);


$lap_nota_1_M4 = $lap_row_datos_control_notasM4["nt_11"];
$lap_nota_2_M4 = $lap_row_datos_control_notasM4["nt_12"];
$lap_nota_3_M4 = $lap_row_datos_control_notasM4["nt_13"];
$lap_nota_4_M4 = $lap_row_datos_control_notasM4["nt_14"];
$lap_nota_5_M4 = $lap_row_datos_control_notasM4["nt_15"];
$lap_nota_6_M4 = $lap_row_datos_control_notasM4["nt_16"];
$lap_nota_7_M4 = $lap_row_datos_control_notasM4["nt_17"];
$lap_notaAu_M4 = $lap_row_datos_control_notasM4["nt_Au1"];


$lap_nota_real_1_M4 = ($lap_row_datos_control_notasM4["nt_11"] * $lap_para_el_porc_V1_M4)/$el_puntaje_completo_es;
$lap_nota_real_2_M4 = ($lap_row_datos_control_notasM4["nt_12"] * $lap_para_el_porc_V2_M4)/$el_puntaje_completo_es;
$lap_nota_real_3_M4 = ($lap_row_datos_control_notasM4["nt_13"] * $lap_para_el_porc_V3_M4)/$el_puntaje_completo_es;
$lap_nota_real_4_M4 = ($lap_row_datos_control_notasM4["nt_14"] * $lap_para_el_porc_V4_M4)/$el_puntaje_completo_es;
$lap_nota_real_5_M4 = ($lap_row_datos_control_notasM4["nt_15"] * $lap_para_el_porc_V5_M4)/$el_puntaje_completo_es;
$lap_nota_real_6_M4 = ($lap_row_datos_control_notasM4["nt_16"] * $lap_para_el_porc_V6_M4)/$el_puntaje_completo_es;
$lap_nota_real_7_M4 = ($lap_row_datos_control_notasM4["nt_17"] * $lap_para_el_porc_V7_M4)/$el_puntaje_completo_es;

$lap_total_seven_M4 = $lap_nota_real_1_M4+$lap_nota_real_2_M4+$lap_nota_real_3_M4+$lap_nota_real_4_M4+$lap_nota_real_5_M4+$lap_nota_real_6_M4+$lap_nota_real_7_M4;

$lap_total_seven_con_Au_M4 = $lap_total_seven_M4+ $lap_row_datos_control_notasM4["nt_Au1"];

$lap_total_seven_con_Au_redon_M4_redondeado1 =number_format($lap_total_seven_con_Au_M4, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M4 =number_format($lap_total_seven_con_Au_redon_M4_redondeado1);



$lap_nota_1_M5 = $lap_row_datos_control_notasM5["nt_11"];
$lap_nota_2_M5 = $lap_row_datos_control_notasM5["nt_12"];
$lap_nota_3_M5 = $lap_row_datos_control_notasM5["nt_13"];
$lap_nota_4_M5 = $lap_row_datos_control_notasM5["nt_14"];
$lap_nota_5_M5 = $lap_row_datos_control_notasM5["nt_15"];
$lap_nota_6_M5 = $lap_row_datos_control_notasM5["nt_16"];
$lap_nota_7_M5 = $lap_row_datos_control_notasM5["nt_17"];
$lap_notaAu_M5 = $lap_row_datos_control_notasM5["nt_Au1"];


$lap_nota_real_1_M5 = ($lap_row_datos_control_notasM5["nt_11"] * $lap_para_el_porc_V1_M5)/$el_puntaje_completo_es;
$lap_nota_real_2_M5 = ($lap_row_datos_control_notasM5["nt_12"] * $lap_para_el_porc_V2_M5)/$el_puntaje_completo_es;
$lap_nota_real_3_M5 = ($lap_row_datos_control_notasM5["nt_13"] * $lap_para_el_porc_V3_M5)/$el_puntaje_completo_es;
$lap_nota_real_4_M5 = ($lap_row_datos_control_notasM5["nt_14"] * $lap_para_el_porc_V4_M5)/$el_puntaje_completo_es;
$lap_nota_real_5_M5 = ($lap_row_datos_control_notasM5["nt_15"] * $lap_para_el_porc_V5_M5)/$el_puntaje_completo_es;
$lap_nota_real_6_M5 = ($lap_row_datos_control_notasM5["nt_16"] * $lap_para_el_porc_V6_M5)/$el_puntaje_completo_es;
$lap_nota_real_7_M5 = ($lap_row_datos_control_notasM5["nt_17"] * $lap_para_el_porc_V7_M5)/$el_puntaje_completo_es;

$lap_total_seven_M5 = $lap_nota_real_1_M5+$lap_nota_real_2_M5+$lap_nota_real_3_M5+$lap_nota_real_4_M5+$lap_nota_real_5_M5+$lap_nota_real_6_M5+$lap_nota_real_7_M5;

$lap_total_seven_con_Au_M5 = $lap_total_seven_M5+ $lap_row_datos_control_notasM5["nt_Au1"];

$lap_total_seven_con_Au_redon_M5_redondeado1 =number_format($lap_total_seven_con_Au_M5, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M5 =number_format($lap_total_seven_con_Au_redon_M5_redondeado1);



$lap_nota_1_M6 = $lap_row_datos_control_notasM6["nt_11"];
$lap_nota_2_M6 = $lap_row_datos_control_notasM6["nt_12"];
$lap_nota_3_M6 = $lap_row_datos_control_notasM6["nt_13"];
$lap_nota_4_M6 = $lap_row_datos_control_notasM6["nt_14"];
$lap_nota_5_M6 = $lap_row_datos_control_notasM6["nt_15"];
$lap_nota_6_M6 = $lap_row_datos_control_notasM6["nt_16"];
$lap_nota_7_M6 = $lap_row_datos_control_notasM6["nt_17"];
$lap_notaAu_M6 = $lap_row_datos_control_notasM6["nt_Au1"];


$lap_nota_real_1_M6 = ($lap_row_datos_control_notasM6["nt_11"] * $lap_para_el_porc_V1_M6)/$el_puntaje_completo_es;
$lap_nota_real_2_M6 = ($lap_row_datos_control_notasM6["nt_12"] * $lap_para_el_porc_V2_M6)/$el_puntaje_completo_es;
$lap_nota_real_3_M6 = ($lap_row_datos_control_notasM6["nt_13"] * $lap_para_el_porc_V3_M6)/$el_puntaje_completo_es;
$lap_nota_real_4_M6 = ($lap_row_datos_control_notasM6["nt_14"] * $lap_para_el_porc_V4_M6)/$el_puntaje_completo_es;
$lap_nota_real_5_M6 = ($lap_row_datos_control_notasM6["nt_15"] * $lap_para_el_porc_V5_M6)/$el_puntaje_completo_es;
$lap_nota_real_6_M6 = ($lap_row_datos_control_notasM6["nt_16"] * $lap_para_el_porc_V6_M6)/$el_puntaje_completo_es;
$lap_nota_real_7_M6 = ($lap_row_datos_control_notasM6["nt_17"] * $lap_para_el_porc_V7_M6)/$el_puntaje_completo_es;

$lap_total_seven_M6 = $lap_nota_real_1_M6+$lap_nota_real_2_M6+$lap_nota_real_3_M6+$lap_nota_real_4_M6+$lap_nota_real_5_M6+$lap_nota_real_6_M6+$lap_nota_real_7_M6;

$lap_total_seven_con_Au_M6 = $lap_total_seven_M6+ $lap_row_datos_control_notasM6["nt_Au1"];

$lap_total_seven_con_Au_redon_M6_redondeado1 =number_format($lap_total_seven_con_Au_M6, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M6 =number_format($lap_total_seven_con_Au_redon_M6_redondeado1);



$lap_nota_1_M7 = $lap_row_datos_control_notasM7["nt_11"];
$lap_nota_2_M7 = $lap_row_datos_control_notasM7["nt_12"];
$lap_nota_3_M7 = $lap_row_datos_control_notasM7["nt_13"];
$lap_nota_4_M7 = $lap_row_datos_control_notasM7["nt_14"];
$lap_nota_5_M7 = $lap_row_datos_control_notasM7["nt_15"];
$lap_nota_6_M7 = $lap_row_datos_control_notasM7["nt_16"];
$lap_nota_7_M7 = $lap_row_datos_control_notasM7["nt_17"];
$lap_notaAu_M7 = $lap_row_datos_control_notasM7["nt_Au1"];


$lap_nota_real_1_M7 = ($lap_row_datos_control_notasM7["nt_11"] * $lap_para_el_porc_V1_M7)/$el_puntaje_completo_es;
$lap_nota_real_2_M7 = ($lap_row_datos_control_notasM7["nt_12"] * $lap_para_el_porc_V2_M7)/$el_puntaje_completo_es;
$lap_nota_real_3_M7 = ($lap_row_datos_control_notasM7["nt_13"] * $lap_para_el_porc_V3_M7)/$el_puntaje_completo_es;
$lap_nota_real_4_M7 = ($lap_row_datos_control_notasM7["nt_14"] * $lap_para_el_porc_V4_M7)/$el_puntaje_completo_es;
$lap_nota_real_5_M7 = ($lap_row_datos_control_notasM7["nt_15"] * $lap_para_el_porc_V5_M7)/$el_puntaje_completo_es;
$lap_nota_real_6_M7 = ($lap_row_datos_control_notasM7["nt_16"] * $lap_para_el_porc_V6_M7)/$el_puntaje_completo_es;
$lap_nota_real_7_M7 = ($lap_row_datos_control_notasM7["nt_17"] * $lap_para_el_porc_V7_M7)/$el_puntaje_completo_es;

$lap_total_seven_M7 = $lap_nota_real_1_M7+$lap_nota_real_2_M7+$lap_nota_real_3_M7+$lap_nota_real_4_M7+$lap_nota_real_5_M7+$lap_nota_real_6_M7+$lap_nota_real_7_M7;

$lap_total_seven_con_Au_M7 = $lap_total_seven_M7+ $lap_row_datos_control_notasM7["nt_Au1"];

$lap_total_seven_con_Au_redon_M7_redondeado1 =number_format($lap_total_seven_con_Au_M7, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M7 =number_format($lap_total_seven_con_Au_redon_M7_redondeado1);




$lap_nota_1_M8 = $lap_row_datos_control_notasM8["nt_11"];
$lap_nota_2_M8 = $lap_row_datos_control_notasM8["nt_12"];
$lap_nota_3_M8 = $lap_row_datos_control_notasM8["nt_13"];
$lap_nota_4_M8 = $lap_row_datos_control_notasM8["nt_14"];
$lap_nota_5_M8 = $lap_row_datos_control_notasM8["nt_15"];
$lap_nota_6_M8 = $lap_row_datos_control_notasM8["nt_16"];
$lap_nota_7_M8 = $lap_row_datos_control_notasM8["nt_17"];
$lap_notaAu_M8 = $lap_row_datos_control_notasM8["nt_Au1"];


$lap_nota_real_1_M8 = ($lap_row_datos_control_notasM8["nt_11"] * $lap_para_el_porc_V1_M8)/$el_puntaje_completo_es;
$lap_nota_real_2_M8 = ($lap_row_datos_control_notasM8["nt_12"] * $lap_para_el_porc_V2_M8)/$el_puntaje_completo_es;
$lap_nota_real_3_M8 = ($lap_row_datos_control_notasM8["nt_13"] * $lap_para_el_porc_V3_M8)/$el_puntaje_completo_es;
$lap_nota_real_4_M8 = ($lap_row_datos_control_notasM8["nt_14"] * $lap_para_el_porc_V4_M8)/$el_puntaje_completo_es;
$lap_nota_real_5_M8 = ($lap_row_datos_control_notasM8["nt_15"] * $lap_para_el_porc_V5_M8)/$el_puntaje_completo_es;
$lap_nota_real_6_M8 = ($lap_row_datos_control_notasM8["nt_16"] * $lap_para_el_porc_V6_M8)/$el_puntaje_completo_es;
$lap_nota_real_7_M8 = ($lap_row_datos_control_notasM8["nt_17"] * $lap_para_el_porc_V7_M8)/$el_puntaje_completo_es;

$lap_total_seven_M8 = $lap_nota_real_1_M8+$lap_nota_real_2_M8+$lap_nota_real_3_M8+$lap_nota_real_4_M8+$lap_nota_real_5_M8+$lap_nota_real_6_M8+$lap_nota_real_7_M8;

$lap_total_seven_con_Au_M8 = $lap_total_seven_M8+ $lap_row_datos_control_notasM8["nt_Au1"];

$lap_total_seven_con_Au_redon_M8_redondeado1 =number_format($lap_total_seven_con_Au_M8, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M8 =number_format($lap_total_seven_con_Au_redon_M8_redondeado1);




$lap_nota_1_M9 = $lap_row_datos_control_notasM9["nt_11"];
$lap_nota_2_M9 = $lap_row_datos_control_notasM9["nt_12"];
$lap_nota_3_M9 = $lap_row_datos_control_notasM9["nt_13"];
$lap_nota_4_M9 = $lap_row_datos_control_notasM9["nt_14"];
$lap_nota_5_M9 = $lap_row_datos_control_notasM9["nt_15"];
$lap_nota_6_M9 = $lap_row_datos_control_notasM9["nt_16"];
$lap_nota_7_M9 = $lap_row_datos_control_notasM9["nt_17"];
$lap_notaAu_M9 = $lap_row_datos_control_notasM9["nt_Au1"];


$lap_nota_real_1_M9 = ($lap_row_datos_control_notasM9["nt_11"] * $lap_para_el_porc_V1_M9)/$el_puntaje_completo_es;
$lap_nota_real_2_M9 = ($lap_row_datos_control_notasM9["nt_12"] * $lap_para_el_porc_V2_M9)/$el_puntaje_completo_es;
$lap_nota_real_3_M9 = ($lap_row_datos_control_notasM9["nt_13"] * $lap_para_el_porc_V3_M9)/$el_puntaje_completo_es;
$lap_nota_real_4_M9 = ($lap_row_datos_control_notasM9["nt_14"] * $lap_para_el_porc_V4_M9)/$el_puntaje_completo_es;
$lap_nota_real_5_M9 = ($lap_row_datos_control_notasM9["nt_15"] * $lap_para_el_porc_V5_M9)/$el_puntaje_completo_es;
$lap_nota_real_6_M9 = ($lap_row_datos_control_notasM9["nt_16"] * $lap_para_el_porc_V6_M9)/$el_puntaje_completo_es;
$lap_nota_real_7_M9 = ($lap_row_datos_control_notasM9["nt_17"] * $lap_para_el_porc_V7_M9)/$el_puntaje_completo_es;

$lap_total_seven_M9 = $lap_nota_real_1_M9+$lap_nota_real_2_M9+$lap_nota_real_3_M9+$lap_nota_real_4_M9+$lap_nota_real_5_M9+$lap_nota_real_6_M9+$lap_nota_real_7_M9;

$lap_total_seven_con_Au_M9 = $lap_total_seven_M9+ $lap_row_datos_control_notasM9["nt_Au1"];

$lap_total_seven_con_Au_redon_M9_redondeado1 =number_format($lap_total_seven_con_Au_M9, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M9 =number_format($lap_total_seven_con_Au_redon_M9_redondeado1);



$lap_nota_1_M10 = $lap_row_datos_control_notasM10["nt_11"];
$lap_nota_2_M10 = $lap_row_datos_control_notasM10["nt_12"];
$lap_nota_3_M10 = $lap_row_datos_control_notasM10["nt_13"];
$lap_nota_4_M10 = $lap_row_datos_control_notasM10["nt_14"];
$lap_nota_5_M10 = $lap_row_datos_control_notasM10["nt_15"];
$lap_nota_6_M10 = $lap_row_datos_control_notasM10["nt_16"];
$lap_nota_7_M10 = $lap_row_datos_control_notasM10["nt_17"];
$lap_notaAu_M10 = $lap_row_datos_control_notasM10["nt_Au1"];


$lap_nota_real_1_M10 = ($lap_row_datos_control_notasM10["nt_11"] * $lap_para_el_porc_V1_M10)/$el_puntaje_completo_es;
$lap_nota_real_2_M10 = ($lap_row_datos_control_notasM10["nt_12"] * $lap_para_el_porc_V2_M10)/$el_puntaje_completo_es;
$lap_nota_real_3_M10 = ($lap_row_datos_control_notasM10["nt_13"] * $lap_para_el_porc_V3_M10)/$el_puntaje_completo_es;
$lap_nota_real_4_M10 = ($lap_row_datos_control_notasM10["nt_14"] * $lap_para_el_porc_V4_M10)/$el_puntaje_completo_es;
$lap_nota_real_5_M10 = ($lap_row_datos_control_notasM10["nt_15"] * $lap_para_el_porc_V5_M10)/$el_puntaje_completo_es;
$lap_nota_real_6_M10 = ($lap_row_datos_control_notasM10["nt_16"] * $lap_para_el_porc_V6_M10)/$el_puntaje_completo_es;
$lap_nota_real_7_M10 = ($lap_row_datos_control_notasM10["nt_17"] * $lap_para_el_porc_V7_M10)/$el_puntaje_completo_es;

$lap_total_seven_M10 = $lap_nota_real_1_M10+$lap_nota_real_2_M10+$lap_nota_real_3_M10+$lap_nota_real_4_M10+$lap_nota_real_5_M10+$lap_nota_real_6_M10+$lap_nota_real_7_M10;

$lap_total_seven_con_Au_M10 = $lap_total_seven_M10+ $lap_row_datos_control_notasM10["nt_Au1"];

$lap_total_seven_con_Au_redon_M10_redondeado1 =number_format($lap_total_seven_con_Au_M10, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M10 =number_format($lap_total_seven_con_Au_redon_M10_redondeado1);



$lap_nota_1_M11 = $lap_row_datos_control_notasM11["nt_11"];
$lap_nota_2_M11 = $lap_row_datos_control_notasM11["nt_12"];
$lap_nota_3_M11 = $lap_row_datos_control_notasM11["nt_13"];
$lap_nota_4_M11 = $lap_row_datos_control_notasM11["nt_14"];
$lap_nota_5_M11 = $lap_row_datos_control_notasM11["nt_15"];
$lap_nota_6_M11 = $lap_row_datos_control_notasM11["nt_16"];
$lap_nota_7_M11 = $lap_row_datos_control_notasM11["nt_17"];
$lap_notaAu_M11 = $lap_row_datos_control_notasM11["nt_Au1"];


$lap_nota_real_1_M11 = ($lap_row_datos_control_notasM11["nt_11"] * $lap_para_el_porc_V1_M11)/$el_puntaje_completo_es;
$lap_nota_real_2_M11 = ($lap_row_datos_control_notasM11["nt_12"] * $lap_para_el_porc_V2_M11)/$el_puntaje_completo_es;
$lap_nota_real_3_M11 = ($lap_row_datos_control_notasM11["nt_13"] * $lap_para_el_porc_V3_M11)/$el_puntaje_completo_es;
$lap_nota_real_4_M11 = ($lap_row_datos_control_notasM11["nt_14"] * $lap_para_el_porc_V4_M11)/$el_puntaje_completo_es;
$lap_nota_real_5_M11 = ($lap_row_datos_control_notasM11["nt_15"] * $lap_para_el_porc_V5_M11)/$el_puntaje_completo_es;
$lap_nota_real_6_M11 = ($lap_row_datos_control_notasM11["nt_16"] * $lap_para_el_porc_V6_M11)/$el_puntaje_completo_es;
$lap_nota_real_7_M11 = ($lap_row_datos_control_notasM11["nt_17"] * $lap_para_el_porc_V7_M11)/$el_puntaje_completo_es;

$lap_total_seven_M11 = $lap_nota_real_1_M11+$lap_nota_real_2_M11+$lap_nota_real_3_M11+$lap_nota_real_4_M11+$lap_nota_real_5_M11+$lap_nota_real_6_M11+$lap_nota_real_7_M11;

$lap_total_seven_con_Au_M11 = $lap_total_seven_M11+ $lap_row_datos_control_notasM11["nt_Au1"];

$lap_total_seven_con_Au_redon_M11_redondeado1 =number_format($lap_total_seven_con_Au_M11, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M11 =number_format($lap_total_seven_con_Au_redon_M11_redondeado1);



$lap_nota_1_M12 = $lap_row_datos_control_notasM12["nt_11"];
$lap_nota_2_M12 = $lap_row_datos_control_notasM12["nt_12"];
$lap_nota_3_M12 = $lap_row_datos_control_notasM12["nt_13"];
$lap_nota_4_M12 = $lap_row_datos_control_notasM12["nt_14"];
$lap_nota_5_M12 = $lap_row_datos_control_notasM12["nt_15"];
$lap_nota_6_M12 = $lap_row_datos_control_notasM12["nt_16"];
$lap_nota_7_M12 = $lap_row_datos_control_notasM12["nt_17"];
$lap_notaAu_M12 = $lap_row_datos_control_notasM12["nt_Au1"];


$lap_nota_real_1_M12 = ($lap_row_datos_control_notasM12["nt_11"] * $lap_para_el_porc_V1_M12)/$el_puntaje_completo_es;
$lap_nota_real_2_M12 = ($lap_row_datos_control_notasM12["nt_12"] * $lap_para_el_porc_V2_M12)/$el_puntaje_completo_es;
$lap_nota_real_3_M12 = ($lap_row_datos_control_notasM12["nt_13"] * $lap_para_el_porc_V3_M12)/$el_puntaje_completo_es;
$lap_nota_real_4_M12 = ($lap_row_datos_control_notasM12["nt_14"] * $lap_para_el_porc_V4_M12)/$el_puntaje_completo_es;
$lap_nota_real_5_M12 = ($lap_row_datos_control_notasM12["nt_15"] * $lap_para_el_porc_V5_M12)/$el_puntaje_completo_es;
$lap_nota_real_6_M12 = ($lap_row_datos_control_notasM12["nt_16"] * $lap_para_el_porc_V6_M12)/$el_puntaje_completo_es;
$lap_nota_real_7_M12 = ($lap_row_datos_control_notasM12["nt_17"] * $lap_para_el_porc_V7_M12)/$el_puntaje_completo_es;

$lap_total_seven_M12 = $lap_nota_real_1_M12+$lap_nota_real_2_M12+$lap_nota_real_3_M12+$lap_nota_real_4_M12+$lap_nota_real_5_M12+$lap_nota_real_6_M12+$lap_nota_real_7_M12;

$lap_total_seven_con_Au_M12 = $lap_total_seven_M12+ $lap_row_datos_control_notasM12["nt_Au1"];

$lap_total_seven_con_Au_redon_M12_redondeado1 =number_format($lap_total_seven_con_Au_M12, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M12 =number_format($lap_total_seven_con_Au_redon_M12_redondeado1);



$lap_nota_1_M13 = $lap_row_datos_control_notasM13["nt_11"];
$lap_nota_2_M13 = $lap_row_datos_control_notasM13["nt_12"];
$lap_nota_3_M13 = $lap_row_datos_control_notasM13["nt_13"];
$lap_nota_4_M13 = $lap_row_datos_control_notasM13["nt_14"];
$lap_nota_5_M13 = $lap_row_datos_control_notasM13["nt_15"];
$lap_nota_6_M13 = $lap_row_datos_control_notasM13["nt_16"];
$lap_nota_7_M13 = $lap_row_datos_control_notasM13["nt_17"];
$lap_notaAu_M13 = $lap_row_datos_control_notasM13["nt_Au1"];


$lap_nota_real_1_M13 = ($lap_row_datos_control_notasM13["nt_11"] * $lap_para_el_porc_V1_M13)/$el_puntaje_completo_es;
$lap_nota_real_2_M13 = ($lap_row_datos_control_notasM13["nt_12"] * $lap_para_el_porc_V2_M13)/$el_puntaje_completo_es;
$lap_nota_real_3_M13 = ($lap_row_datos_control_notasM13["nt_13"] * $lap_para_el_porc_V3_M13)/$el_puntaje_completo_es;
$lap_nota_real_4_M13 = ($lap_row_datos_control_notasM13["nt_14"] * $lap_para_el_porc_V4_M13)/$el_puntaje_completo_es;
$lap_nota_real_5_M13 = ($lap_row_datos_control_notasM13["nt_15"] * $lap_para_el_porc_V5_M13)/$el_puntaje_completo_es;
$lap_nota_real_6_M13 = ($lap_row_datos_control_notasM13["nt_16"] * $lap_para_el_porc_V6_M13)/$el_puntaje_completo_es;
$lap_nota_real_7_M13 = ($lap_row_datos_control_notasM13["nt_17"] * $lap_para_el_porc_V7_M13)/$el_puntaje_completo_es;

$lap_total_seven_M13 = $lap_nota_real_1_M13+$lap_nota_real_2_M13+$lap_nota_real_3_M13+$lap_nota_real_4_M13+$lap_nota_real_5_M13+$lap_nota_real_6_M13+$lap_nota_real_7_M13;

$lap_total_seven_con_Au_M13 = $lap_total_seven_M13+ $lap_row_datos_control_notasM13["nt_Au1"];

$lap_total_seven_con_Au_redon_M13_redondeado1 =number_format($lap_total_seven_con_Au_M13, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M13 =number_format($lap_total_seven_con_Au_redon_M13_redondeado1);



$lap_nota_1_M14 = $lap_row_datos_control_notasM14["nt_11"];
$lap_nota_2_M14 = $lap_row_datos_control_notasM14["nt_12"];
$lap_nota_3_M14 = $lap_row_datos_control_notasM14["nt_13"];
$lap_nota_4_M14 = $lap_row_datos_control_notasM14["nt_14"];
$lap_nota_5_M14 = $lap_row_datos_control_notasM14["nt_15"];
$lap_nota_6_M14 = $lap_row_datos_control_notasM14["nt_16"];
$lap_nota_7_M14 = $lap_row_datos_control_notasM14["nt_17"];
$lap_notaAu_M14 = $lap_row_datos_control_notasM14["nt_Au1"];


$lap_nota_real_1_M14 = ($lap_row_datos_control_notasM14["nt_11"] * $lap_para_el_porc_V1_M14)/$el_puntaje_completo_es;
$lap_nota_real_2_M14 = ($lap_row_datos_control_notasM14["nt_12"] * $lap_para_el_porc_V2_M14)/$el_puntaje_completo_es;
$lap_nota_real_3_M14 = ($lap_row_datos_control_notasM14["nt_13"] * $lap_para_el_porc_V3_M14)/$el_puntaje_completo_es;
$lap_nota_real_4_M14 = ($lap_row_datos_control_notasM14["nt_14"] * $lap_para_el_porc_V4_M14)/$el_puntaje_completo_es;
$lap_nota_real_5_M14 = ($lap_row_datos_control_notasM14["nt_15"] * $lap_para_el_porc_V5_M14)/$el_puntaje_completo_es;
$lap_nota_real_6_M14 = ($lap_row_datos_control_notasM14["nt_16"] * $lap_para_el_porc_V6_M14)/$el_puntaje_completo_es;
$lap_nota_real_7_M14 = ($lap_row_datos_control_notasM14["nt_17"] * $lap_para_el_porc_V7_M14)/$el_puntaje_completo_es;

$lap_total_seven_M14 = $lap_nota_real_1_M14+$lap_nota_real_2_M14+$lap_nota_real_3_M14+$lap_nota_real_4_M14+$lap_nota_real_5_M14+$lap_nota_real_6_M14+$lap_nota_real_7_M14;

$lap_total_seven_con_Au_M14 = $lap_total_seven_M14+ $lap_row_datos_control_notasM14["nt_Au1"];

$lap_total_seven_con_Au_redon_M14_redondeado1 =number_format($lap_total_seven_con_Au_M14, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M14 =number_format($lap_total_seven_con_Au_redon_M14_redondeado1);



}




if ($lap_lapso == '2°') {
   

$lap_nota_1_M1 = $lap_row_datos_control_notasM1["nt_21"];
$lap_nota_2_M1 = $lap_row_datos_control_notasM1["nt_22"];
$lap_nota_3_M1 = $lap_row_datos_control_notasM1["nt_23"];
$lap_nota_4_M1 = $lap_row_datos_control_notasM1["nt_24"];
$lap_nota_5_M1 = $lap_row_datos_control_notasM1["nt_25"];
$lap_nota_6_M1 = $lap_row_datos_control_notasM1["nt_26"];
$lap_nota_7_M1 = $lap_row_datos_control_notasM1["nt_27"];
$lap_notaAu_M1 = $lap_row_datos_control_notasM1["nt_Au2"];


$lap_nota_real_1_M1 = ($lap_row_datos_control_notasM1["nt_21"] * $lap_para_el_porc_V1_M1)/$el_puntaje_completo_es;
$lap_nota_real_2_M1 = ($lap_row_datos_control_notasM1["nt_22"] * $lap_para_el_porc_V2_M1)/$el_puntaje_completo_es;
$lap_nota_real_3_M1 = ($lap_row_datos_control_notasM1["nt_23"] * $lap_para_el_porc_V3_M1)/$el_puntaje_completo_es;
$lap_nota_real_4_M1 = ($lap_row_datos_control_notasM1["nt_24"] * $lap_para_el_porc_V4_M1)/$el_puntaje_completo_es;
$lap_nota_real_5_M1 = ($lap_row_datos_control_notasM1["nt_25"] * $lap_para_el_porc_V5_M1)/$el_puntaje_completo_es;
$lap_nota_real_6_M1 = ($lap_row_datos_control_notasM1["nt_26"] * $lap_para_el_porc_V6_M1)/$el_puntaje_completo_es;
$lap_nota_real_7_M1 = ($lap_row_datos_control_notasM1["nt_27"] * $lap_para_el_porc_V7_M1)/$el_puntaje_completo_es;

$lap_total_seven_M1 = $lap_nota_real_1_M1+$lap_nota_real_2_M1+$lap_nota_real_3_M1+$lap_nota_real_4_M1+$lap_nota_real_5_M1+$lap_nota_real_6_M1+$lap_nota_real_7_M1;

$lap_total_seven_con_Au_M1 = $lap_total_seven_M1+ $lap_row_datos_control_notasM1["nt_Au2"];

$lap_total_seven_con_Au_redon_M1_redondeado1 =number_format($lap_total_seven_con_Au_M1, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M1 =number_format($lap_total_seven_con_Au_redon_M1_redondeado1);



$lap_nota_1_M2 = $lap_row_datos_control_notasM2["nt_21"];
$lap_nota_2_M2 = $lap_row_datos_control_notasM2["nt_22"];
$lap_nota_3_M2 = $lap_row_datos_control_notasM2["nt_23"];
$lap_nota_4_M2 = $lap_row_datos_control_notasM2["nt_24"];
$lap_nota_5_M2 = $lap_row_datos_control_notasM2["nt_25"];
$lap_nota_6_M2 = $lap_row_datos_control_notasM2["nt_26"];
$lap_nota_7_M2 = $lap_row_datos_control_notasM2["nt_27"];
$lap_notaAu_M2 = $lap_row_datos_control_notasM2["nt_Au2"];


$lap_nota_real_1_M2 = ($lap_row_datos_control_notasM2["nt_21"] * $lap_para_el_porc_V1_M2)/$el_puntaje_completo_es;
$lap_nota_real_2_M2 = ($lap_row_datos_control_notasM2["nt_22"] * $lap_para_el_porc_V2_M2)/$el_puntaje_completo_es;
$lap_nota_real_3_M2 = ($lap_row_datos_control_notasM2["nt_23"] * $lap_para_el_porc_V3_M2)/$el_puntaje_completo_es;
$lap_nota_real_4_M2 = ($lap_row_datos_control_notasM2["nt_24"] * $lap_para_el_porc_V4_M2)/$el_puntaje_completo_es;
$lap_nota_real_5_M2 = ($lap_row_datos_control_notasM2["nt_25"] * $lap_para_el_porc_V5_M2)/$el_puntaje_completo_es;
$lap_nota_real_6_M2 = ($lap_row_datos_control_notasM2["nt_26"] * $lap_para_el_porc_V6_M2)/$el_puntaje_completo_es;
$lap_nota_real_7_M2 = ($lap_row_datos_control_notasM2["nt_27"] * $lap_para_el_porc_V7_M2)/$el_puntaje_completo_es;

$lap_total_seven_M2 = $lap_nota_real_1_M2+$lap_nota_real_2_M2+$lap_nota_real_3_M2+$lap_nota_real_4_M2+$lap_nota_real_5_M2+$lap_nota_real_6_M2+$lap_nota_real_7_M2;

$lap_total_seven_con_Au_M2 = $lap_total_seven_M2+ $lap_row_datos_control_notasM2["nt_Au2"];

$lap_total_seven_con_Au_redon_M2_redondeado1 =number_format($lap_total_seven_con_Au_M2, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M2 =number_format($lap_total_seven_con_Au_redon_M2_redondeado1);



$lap_nota_1_M3 = $lap_row_datos_control_notasM3["nt_21"];
$lap_nota_2_M3 = $lap_row_datos_control_notasM3["nt_22"];
$lap_nota_3_M3 = $lap_row_datos_control_notasM3["nt_23"];
$lap_nota_4_M3 = $lap_row_datos_control_notasM3["nt_24"];
$lap_nota_5_M3 = $lap_row_datos_control_notasM3["nt_25"];
$lap_nota_6_M3 = $lap_row_datos_control_notasM3["nt_26"];
$lap_nota_7_M3 = $lap_row_datos_control_notasM3["nt_27"];
$lap_notaAu_M3 = $lap_row_datos_control_notasM3["nt_Au2"];


$lap_nota_real_1_M3 = ($lap_row_datos_control_notasM3["nt_21"] * $lap_para_el_porc_V1_M3)/$el_puntaje_completo_es;
$lap_nota_real_2_M3 = ($lap_row_datos_control_notasM3["nt_22"] * $lap_para_el_porc_V2_M3)/$el_puntaje_completo_es;
$lap_nota_real_3_M3 = ($lap_row_datos_control_notasM3["nt_23"] * $lap_para_el_porc_V3_M3)/$el_puntaje_completo_es;
$lap_nota_real_4_M3 = ($lap_row_datos_control_notasM3["nt_24"] * $lap_para_el_porc_V4_M3)/$el_puntaje_completo_es;
$lap_nota_real_5_M3 = ($lap_row_datos_control_notasM3["nt_25"] * $lap_para_el_porc_V5_M3)/$el_puntaje_completo_es;
$lap_nota_real_6_M3 = ($lap_row_datos_control_notasM3["nt_26"] * $lap_para_el_porc_V6_M3)/$el_puntaje_completo_es;
$lap_nota_real_7_M3 = ($lap_row_datos_control_notasM3["nt_27"] * $lap_para_el_porc_V7_M3)/$el_puntaje_completo_es;

$lap_total_seven_M3 = $lap_nota_real_1_M3+$lap_nota_real_2_M3+$lap_nota_real_3_M3+$lap_nota_real_4_M3+$lap_nota_real_5_M3+$lap_nota_real_6_M3+$lap_nota_real_7_M3;

$lap_total_seven_con_Au_M3 = $lap_total_seven_M3+ $lap_row_datos_control_notasM3["nt_Au2"];

$lap_total_seven_con_Au_redon_M3_redondeado1 =number_format($lap_total_seven_con_Au_M3, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M3 =number_format($lap_total_seven_con_Au_redon_M3_redondeado1);


$lap_nota_1_M4 = $lap_row_datos_control_notasM4["nt_21"];
$lap_nota_2_M4 = $lap_row_datos_control_notasM4["nt_22"];
$lap_nota_3_M4 = $lap_row_datos_control_notasM4["nt_23"];
$lap_nota_4_M4 = $lap_row_datos_control_notasM4["nt_24"];
$lap_nota_5_M4 = $lap_row_datos_control_notasM4["nt_25"];
$lap_nota_6_M4 = $lap_row_datos_control_notasM4["nt_26"];
$lap_nota_7_M4 = $lap_row_datos_control_notasM4["nt_27"];
$lap_notaAu_M4 = $lap_row_datos_control_notasM4["nt_Au2"];


$lap_nota_real_1_M4 = ($lap_row_datos_control_notasM4["nt_21"] * $lap_para_el_porc_V1_M4)/$el_puntaje_completo_es;
$lap_nota_real_2_M4 = ($lap_row_datos_control_notasM4["nt_22"] * $lap_para_el_porc_V2_M4)/$el_puntaje_completo_es;
$lap_nota_real_3_M4 = ($lap_row_datos_control_notasM4["nt_23"] * $lap_para_el_porc_V3_M4)/$el_puntaje_completo_es;
$lap_nota_real_4_M4 = ($lap_row_datos_control_notasM4["nt_24"] * $lap_para_el_porc_V4_M4)/$el_puntaje_completo_es;
$lap_nota_real_5_M4 = ($lap_row_datos_control_notasM4["nt_25"] * $lap_para_el_porc_V5_M4)/$el_puntaje_completo_es;
$lap_nota_real_6_M4 = ($lap_row_datos_control_notasM4["nt_26"] * $lap_para_el_porc_V6_M4)/$el_puntaje_completo_es;
$lap_nota_real_7_M4 = ($lap_row_datos_control_notasM4["nt_27"] * $lap_para_el_porc_V7_M4)/$el_puntaje_completo_es;

$lap_total_seven_M4 = $lap_nota_real_1_M4+$lap_nota_real_2_M4+$lap_nota_real_3_M4+$lap_nota_real_4_M4+$lap_nota_real_5_M4+$lap_nota_real_6_M4+$lap_nota_real_7_M4;

$lap_total_seven_con_Au_M4 = $lap_total_seven_M4+ $lap_row_datos_control_notasM4["nt_Au2"];

$lap_total_seven_con_Au_redon_M4_redondeado1 =number_format($lap_total_seven_con_Au_M4, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M4 =number_format($lap_total_seven_con_Au_redon_M4_redondeado1);



$lap_nota_1_M5 = $lap_row_datos_control_notasM5["nt_21"];
$lap_nota_2_M5 = $lap_row_datos_control_notasM5["nt_22"];
$lap_nota_3_M5 = $lap_row_datos_control_notasM5["nt_23"];
$lap_nota_4_M5 = $lap_row_datos_control_notasM5["nt_24"];
$lap_nota_5_M5 = $lap_row_datos_control_notasM5["nt_25"];
$lap_nota_6_M5 = $lap_row_datos_control_notasM5["nt_26"];
$lap_nota_7_M5 = $lap_row_datos_control_notasM5["nt_27"];
$lap_notaAu_M5 = $lap_row_datos_control_notasM5["nt_Au2"];


$lap_nota_real_1_M5 = ($lap_row_datos_control_notasM5["nt_21"] * $lap_para_el_porc_V1_M5)/$el_puntaje_completo_es;
$lap_nota_real_2_M5 = ($lap_row_datos_control_notasM5["nt_22"] * $lap_para_el_porc_V2_M5)/$el_puntaje_completo_es;
$lap_nota_real_3_M5 = ($lap_row_datos_control_notasM5["nt_23"] * $lap_para_el_porc_V3_M5)/$el_puntaje_completo_es;
$lap_nota_real_4_M5 = ($lap_row_datos_control_notasM5["nt_24"] * $lap_para_el_porc_V4_M5)/$el_puntaje_completo_es;
$lap_nota_real_5_M5 = ($lap_row_datos_control_notasM5["nt_25"] * $lap_para_el_porc_V5_M5)/$el_puntaje_completo_es;
$lap_nota_real_6_M5 = ($lap_row_datos_control_notasM5["nt_26"] * $lap_para_el_porc_V6_M5)/$el_puntaje_completo_es;
$lap_nota_real_7_M5 = ($lap_row_datos_control_notasM5["nt_27"] * $lap_para_el_porc_V7_M5)/$el_puntaje_completo_es;

$lap_total_seven_M5 = $lap_nota_real_1_M5+$lap_nota_real_2_M5+$lap_nota_real_3_M5+$lap_nota_real_4_M5+$lap_nota_real_5_M5+$lap_nota_real_6_M5+$lap_nota_real_7_M5;

$lap_total_seven_con_Au_M5 = $lap_total_seven_M5+ $lap_row_datos_control_notasM5["nt_Au2"];

$lap_total_seven_con_Au_redon_M5_redondeado1 =number_format($lap_total_seven_con_Au_M5, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M5 =number_format($lap_total_seven_con_Au_redon_M5_redondeado1);



$lap_nota_1_M6 = $lap_row_datos_control_notasM6["nt_21"];
$lap_nota_2_M6 = $lap_row_datos_control_notasM6["nt_22"];
$lap_nota_3_M6 = $lap_row_datos_control_notasM6["nt_23"];
$lap_nota_4_M6 = $lap_row_datos_control_notasM6["nt_24"];
$lap_nota_5_M6 = $lap_row_datos_control_notasM6["nt_25"];
$lap_nota_6_M6 = $lap_row_datos_control_notasM6["nt_26"];
$lap_nota_7_M6 = $lap_row_datos_control_notasM6["nt_27"];
$lap_notaAu_M6 = $lap_row_datos_control_notasM6["nt_Au2"];


$lap_nota_real_1_M6 = ($lap_row_datos_control_notasM6["nt_21"] * $lap_para_el_porc_V1_M6)/$el_puntaje_completo_es;
$lap_nota_real_2_M6 = ($lap_row_datos_control_notasM6["nt_22"] * $lap_para_el_porc_V2_M6)/$el_puntaje_completo_es;
$lap_nota_real_3_M6 = ($lap_row_datos_control_notasM6["nt_23"] * $lap_para_el_porc_V3_M6)/$el_puntaje_completo_es;
$lap_nota_real_4_M6 = ($lap_row_datos_control_notasM6["nt_24"] * $lap_para_el_porc_V4_M6)/$el_puntaje_completo_es;
$lap_nota_real_5_M6 = ($lap_row_datos_control_notasM6["nt_25"] * $lap_para_el_porc_V5_M6)/$el_puntaje_completo_es;
$lap_nota_real_6_M6 = ($lap_row_datos_control_notasM6["nt_26"] * $lap_para_el_porc_V6_M6)/$el_puntaje_completo_es;
$lap_nota_real_7_M6 = ($lap_row_datos_control_notasM6["nt_27"] * $lap_para_el_porc_V7_M6)/$el_puntaje_completo_es;

$lap_total_seven_M6 = $lap_nota_real_1_M6+$lap_nota_real_2_M6+$lap_nota_real_3_M6+$lap_nota_real_4_M6+$lap_nota_real_5_M6+$lap_nota_real_6_M6+$lap_nota_real_7_M6;

$lap_total_seven_con_Au_M6 = $lap_total_seven_M6+ $lap_row_datos_control_notasM6["nt_Au2"];

$lap_total_seven_con_Au_redon_M6_redondeado1 =number_format($lap_total_seven_con_Au_M6, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M6 =number_format($lap_total_seven_con_Au_redon_M6_redondeado1);



$lap_nota_1_M7 = $lap_row_datos_control_notasM7["nt_21"];
$lap_nota_2_M7 = $lap_row_datos_control_notasM7["nt_22"];
$lap_nota_3_M7 = $lap_row_datos_control_notasM7["nt_23"];
$lap_nota_4_M7 = $lap_row_datos_control_notasM7["nt_24"];
$lap_nota_5_M7 = $lap_row_datos_control_notasM7["nt_25"];
$lap_nota_6_M7 = $lap_row_datos_control_notasM7["nt_26"];
$lap_nota_7_M7 = $lap_row_datos_control_notasM7["nt_27"];
$lap_notaAu_M7 = $lap_row_datos_control_notasM7["nt_Au2"];


$lap_nota_real_1_M7 = ($lap_row_datos_control_notasM7["nt_21"] * $lap_para_el_porc_V1_M7)/$el_puntaje_completo_es;
$lap_nota_real_2_M7 = ($lap_row_datos_control_notasM7["nt_22"] * $lap_para_el_porc_V2_M7)/$el_puntaje_completo_es;
$lap_nota_real_3_M7 = ($lap_row_datos_control_notasM7["nt_23"] * $lap_para_el_porc_V3_M7)/$el_puntaje_completo_es;
$lap_nota_real_4_M7 = ($lap_row_datos_control_notasM7["nt_24"] * $lap_para_el_porc_V4_M7)/$el_puntaje_completo_es;
$lap_nota_real_5_M7 = ($lap_row_datos_control_notasM7["nt_25"] * $lap_para_el_porc_V5_M7)/$el_puntaje_completo_es;
$lap_nota_real_6_M7 = ($lap_row_datos_control_notasM7["nt_26"] * $lap_para_el_porc_V6_M7)/$el_puntaje_completo_es;
$lap_nota_real_7_M7 = ($lap_row_datos_control_notasM7["nt_27"] * $lap_para_el_porc_V7_M7)/$el_puntaje_completo_es;

$lap_total_seven_M7 = $lap_nota_real_1_M7+$lap_nota_real_2_M7+$lap_nota_real_3_M7+$lap_nota_real_4_M7+$lap_nota_real_5_M7+$lap_nota_real_6_M7+$lap_nota_real_7_M7;

$lap_total_seven_con_Au_M7 = $lap_total_seven_M7+ $lap_row_datos_control_notasM7["nt_Au2"];

$lap_total_seven_con_Au_redon_M7_redondeado1 =number_format($lap_total_seven_con_Au_M7, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M7 =number_format($lap_total_seven_con_Au_redon_M7_redondeado1);




$lap_nota_1_M8 = $lap_row_datos_control_notasM8["nt_21"];
$lap_nota_2_M8 = $lap_row_datos_control_notasM8["nt_22"];
$lap_nota_3_M8 = $lap_row_datos_control_notasM8["nt_23"];
$lap_nota_4_M8 = $lap_row_datos_control_notasM8["nt_24"];
$lap_nota_5_M8 = $lap_row_datos_control_notasM8["nt_25"];
$lap_nota_6_M8 = $lap_row_datos_control_notasM8["nt_26"];
$lap_nota_7_M8 = $lap_row_datos_control_notasM8["nt_27"];
$lap_notaAu_M8 = $lap_row_datos_control_notasM8["nt_Au2"];


$lap_nota_real_1_M8 = ($lap_row_datos_control_notasM8["nt_21"] * $lap_para_el_porc_V1_M8)/$el_puntaje_completo_es;
$lap_nota_real_2_M8 = ($lap_row_datos_control_notasM8["nt_22"] * $lap_para_el_porc_V2_M8)/$el_puntaje_completo_es;
$lap_nota_real_3_M8 = ($lap_row_datos_control_notasM8["nt_23"] * $lap_para_el_porc_V3_M8)/$el_puntaje_completo_es;
$lap_nota_real_4_M8 = ($lap_row_datos_control_notasM8["nt_24"] * $lap_para_el_porc_V4_M8)/$el_puntaje_completo_es;
$lap_nota_real_5_M8 = ($lap_row_datos_control_notasM8["nt_25"] * $lap_para_el_porc_V5_M8)/$el_puntaje_completo_es;
$lap_nota_real_6_M8 = ($lap_row_datos_control_notasM8["nt_26"] * $lap_para_el_porc_V6_M8)/$el_puntaje_completo_es;
$lap_nota_real_7_M8 = ($lap_row_datos_control_notasM8["nt_27"] * $lap_para_el_porc_V7_M8)/$el_puntaje_completo_es;

$lap_total_seven_M8 = $lap_nota_real_1_M8+$lap_nota_real_2_M8+$lap_nota_real_3_M8+$lap_nota_real_4_M8+$lap_nota_real_5_M8+$lap_nota_real_6_M8+$lap_nota_real_7_M8;

$lap_total_seven_con_Au_M8 = $lap_total_seven_M8+ $lap_row_datos_control_notasM8["nt_Au2"];

$lap_total_seven_con_Au_redon_M8_redondeado1 =number_format($lap_total_seven_con_Au_M8, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M8 =number_format($lap_total_seven_con_Au_redon_M8_redondeado1);




$lap_nota_1_M9 = $lap_row_datos_control_notasM9["nt_21"];
$lap_nota_2_M9 = $lap_row_datos_control_notasM9["nt_22"];
$lap_nota_3_M9 = $lap_row_datos_control_notasM9["nt_23"];
$lap_nota_4_M9 = $lap_row_datos_control_notasM9["nt_24"];
$lap_nota_5_M9 = $lap_row_datos_control_notasM9["nt_25"];
$lap_nota_6_M9 = $lap_row_datos_control_notasM9["nt_26"];
$lap_nota_7_M9 = $lap_row_datos_control_notasM9["nt_27"];
$lap_notaAu_M9 = $lap_row_datos_control_notasM9["nt_Au2"];


$lap_nota_real_1_M9 = ($lap_row_datos_control_notasM9["nt_21"] * $lap_para_el_porc_V1_M9)/$el_puntaje_completo_es;
$lap_nota_real_2_M9 = ($lap_row_datos_control_notasM9["nt_22"] * $lap_para_el_porc_V2_M9)/$el_puntaje_completo_es;
$lap_nota_real_3_M9 = ($lap_row_datos_control_notasM9["nt_23"] * $lap_para_el_porc_V3_M9)/$el_puntaje_completo_es;
$lap_nota_real_4_M9 = ($lap_row_datos_control_notasM9["nt_24"] * $lap_para_el_porc_V4_M9)/$el_puntaje_completo_es;
$lap_nota_real_5_M9 = ($lap_row_datos_control_notasM9["nt_25"] * $lap_para_el_porc_V5_M9)/$el_puntaje_completo_es;
$lap_nota_real_6_M9 = ($lap_row_datos_control_notasM9["nt_26"] * $lap_para_el_porc_V6_M9)/$el_puntaje_completo_es;
$lap_nota_real_7_M9 = ($lap_row_datos_control_notasM9["nt_27"] * $lap_para_el_porc_V7_M9)/$el_puntaje_completo_es;

$lap_total_seven_M9 = $lap_nota_real_1_M9+$lap_nota_real_2_M9+$lap_nota_real_3_M9+$lap_nota_real_4_M9+$lap_nota_real_5_M9+$lap_nota_real_6_M9+$lap_nota_real_7_M9;

$lap_total_seven_con_Au_M9 = $lap_total_seven_M9+ $lap_row_datos_control_notasM9["nt_Au2"];

$lap_total_seven_con_Au_redon_M9_redondeado1 =number_format($lap_total_seven_con_Au_M9, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M9 =number_format($lap_total_seven_con_Au_redon_M9_redondeado1);



$lap_nota_1_M10 = $lap_row_datos_control_notasM10["nt_21"];
$lap_nota_2_M10 = $lap_row_datos_control_notasM10["nt_22"];
$lap_nota_3_M10 = $lap_row_datos_control_notasM10["nt_23"];
$lap_nota_4_M10 = $lap_row_datos_control_notasM10["nt_24"];
$lap_nota_5_M10 = $lap_row_datos_control_notasM10["nt_25"];
$lap_nota_6_M10 = $lap_row_datos_control_notasM10["nt_26"];
$lap_nota_7_M10 = $lap_row_datos_control_notasM10["nt_27"];
$lap_notaAu_M10 = $lap_row_datos_control_notasM10["nt_Au2"];


$lap_nota_real_1_M10 = ($lap_row_datos_control_notasM10["nt_21"] * $lap_para_el_porc_V1_M10)/$el_puntaje_completo_es;
$lap_nota_real_2_M10 = ($lap_row_datos_control_notasM10["nt_22"] * $lap_para_el_porc_V2_M10)/$el_puntaje_completo_es;
$lap_nota_real_3_M10 = ($lap_row_datos_control_notasM10["nt_23"] * $lap_para_el_porc_V3_M10)/$el_puntaje_completo_es;
$lap_nota_real_4_M10 = ($lap_row_datos_control_notasM10["nt_24"] * $lap_para_el_porc_V4_M10)/$el_puntaje_completo_es;
$lap_nota_real_5_M10 = ($lap_row_datos_control_notasM10["nt_25"] * $lap_para_el_porc_V5_M10)/$el_puntaje_completo_es;
$lap_nota_real_6_M10 = ($lap_row_datos_control_notasM10["nt_26"] * $lap_para_el_porc_V6_M10)/$el_puntaje_completo_es;
$lap_nota_real_7_M10 = ($lap_row_datos_control_notasM10["nt_27"] * $lap_para_el_porc_V7_M10)/$el_puntaje_completo_es;

$lap_total_seven_M10 = $lap_nota_real_1_M10+$lap_nota_real_2_M10+$lap_nota_real_3_M10+$lap_nota_real_4_M10+$lap_nota_real_5_M10+$lap_nota_real_6_M10+$lap_nota_real_7_M10;

$lap_total_seven_con_Au_M10 = $lap_total_seven_M10+ $lap_row_datos_control_notasM10["nt_Au2"];

$lap_total_seven_con_Au_redon_M10_redondeado1 =number_format($lap_total_seven_con_Au_M10, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M10 =number_format($lap_total_seven_con_Au_redon_M10_redondeado1);



$lap_nota_1_M11 = $lap_row_datos_control_notasM11["nt_21"];
$lap_nota_2_M11 = $lap_row_datos_control_notasM11["nt_22"];
$lap_nota_3_M11 = $lap_row_datos_control_notasM11["nt_23"];
$lap_nota_4_M11 = $lap_row_datos_control_notasM11["nt_24"];
$lap_nota_5_M11 = $lap_row_datos_control_notasM11["nt_25"];
$lap_nota_6_M11 = $lap_row_datos_control_notasM11["nt_26"];
$lap_nota_7_M11 = $lap_row_datos_control_notasM11["nt_27"];
$lap_notaAu_M11 = $lap_row_datos_control_notasM11["nt_Au2"];


$lap_nota_real_1_M11 = ($lap_row_datos_control_notasM11["nt_21"] * $lap_para_el_porc_V1_M11)/$el_puntaje_completo_es;
$lap_nota_real_2_M11 = ($lap_row_datos_control_notasM11["nt_22"] * $lap_para_el_porc_V2_M11)/$el_puntaje_completo_es;
$lap_nota_real_3_M11 = ($lap_row_datos_control_notasM11["nt_23"] * $lap_para_el_porc_V3_M11)/$el_puntaje_completo_es;
$lap_nota_real_4_M11 = ($lap_row_datos_control_notasM11["nt_24"] * $lap_para_el_porc_V4_M11)/$el_puntaje_completo_es;
$lap_nota_real_5_M11 = ($lap_row_datos_control_notasM11["nt_25"] * $lap_para_el_porc_V5_M11)/$el_puntaje_completo_es;
$lap_nota_real_6_M11 = ($lap_row_datos_control_notasM11["nt_26"] * $lap_para_el_porc_V6_M11)/$el_puntaje_completo_es;
$lap_nota_real_7_M11 = ($lap_row_datos_control_notasM11["nt_27"] * $lap_para_el_porc_V7_M11)/$el_puntaje_completo_es;

$lap_total_seven_M11 = $lap_nota_real_1_M11+$lap_nota_real_2_M11+$lap_nota_real_3_M11+$lap_nota_real_4_M11+$lap_nota_real_5_M11+$lap_nota_real_6_M11+$lap_nota_real_7_M11;

$lap_total_seven_con_Au_M11 = $lap_total_seven_M11+ $lap_row_datos_control_notasM11["nt_Au2"];

$lap_total_seven_con_Au_redon_M11_redondeado1 =number_format($lap_total_seven_con_Au_M11, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M11 =number_format($lap_total_seven_con_Au_redon_M11_redondeado1);



$lap_nota_1_M12 = $lap_row_datos_control_notasM12["nt_21"];
$lap_nota_2_M12 = $lap_row_datos_control_notasM12["nt_22"];
$lap_nota_3_M12 = $lap_row_datos_control_notasM12["nt_23"];
$lap_nota_4_M12 = $lap_row_datos_control_notasM12["nt_24"];
$lap_nota_5_M12 = $lap_row_datos_control_notasM12["nt_25"];
$lap_nota_6_M12 = $lap_row_datos_control_notasM12["nt_26"];
$lap_nota_7_M12 = $lap_row_datos_control_notasM12["nt_27"];
$lap_notaAu_M12 = $lap_row_datos_control_notasM12["nt_Au2"];


$lap_nota_real_1_M12 = ($lap_row_datos_control_notasM12["nt_21"] * $lap_para_el_porc_V1_M12)/$el_puntaje_completo_es;
$lap_nota_real_2_M12 = ($lap_row_datos_control_notasM12["nt_22"] * $lap_para_el_porc_V2_M12)/$el_puntaje_completo_es;
$lap_nota_real_3_M12 = ($lap_row_datos_control_notasM12["nt_23"] * $lap_para_el_porc_V3_M12)/$el_puntaje_completo_es;
$lap_nota_real_4_M12 = ($lap_row_datos_control_notasM12["nt_24"] * $lap_para_el_porc_V4_M12)/$el_puntaje_completo_es;
$lap_nota_real_5_M12 = ($lap_row_datos_control_notasM12["nt_25"] * $lap_para_el_porc_V5_M12)/$el_puntaje_completo_es;
$lap_nota_real_6_M12 = ($lap_row_datos_control_notasM12["nt_26"] * $lap_para_el_porc_V6_M12)/$el_puntaje_completo_es;
$lap_nota_real_7_M12 = ($lap_row_datos_control_notasM12["nt_27"] * $lap_para_el_porc_V7_M12)/$el_puntaje_completo_es;

$lap_total_seven_M12 = $lap_nota_real_1_M12+$lap_nota_real_2_M12+$lap_nota_real_3_M12+$lap_nota_real_4_M12+$lap_nota_real_5_M12+$lap_nota_real_6_M12+$lap_nota_real_7_M12;

$lap_total_seven_con_Au_M12 = $lap_total_seven_M12+ $lap_row_datos_control_notasM12["nt_Au2"];

$lap_total_seven_con_Au_redon_M12_redondeado1 =number_format($lap_total_seven_con_Au_M12, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M12 =number_format($lap_total_seven_con_Au_redon_M12_redondeado1);



$lap_nota_1_M13 = $lap_row_datos_control_notasM13["nt_21"];
$lap_nota_2_M13 = $lap_row_datos_control_notasM13["nt_22"];
$lap_nota_3_M13 = $lap_row_datos_control_notasM13["nt_23"];
$lap_nota_4_M13 = $lap_row_datos_control_notasM13["nt_24"];
$lap_nota_5_M13 = $lap_row_datos_control_notasM13["nt_25"];
$lap_nota_6_M13 = $lap_row_datos_control_notasM13["nt_26"];
$lap_nota_7_M13 = $lap_row_datos_control_notasM13["nt_27"];
$lap_notaAu_M13 = $lap_row_datos_control_notasM13["nt_Au2"];


$lap_nota_real_1_M13 = ($lap_row_datos_control_notasM13["nt_21"] * $lap_para_el_porc_V1_M13)/$el_puntaje_completo_es;
$lap_nota_real_2_M13 = ($lap_row_datos_control_notasM13["nt_22"] * $lap_para_el_porc_V2_M13)/$el_puntaje_completo_es;
$lap_nota_real_3_M13 = ($lap_row_datos_control_notasM13["nt_23"] * $lap_para_el_porc_V3_M13)/$el_puntaje_completo_es;
$lap_nota_real_4_M13 = ($lap_row_datos_control_notasM13["nt_24"] * $lap_para_el_porc_V4_M13)/$el_puntaje_completo_es;
$lap_nota_real_5_M13 = ($lap_row_datos_control_notasM13["nt_25"] * $lap_para_el_porc_V5_M13)/$el_puntaje_completo_es;
$lap_nota_real_6_M13 = ($lap_row_datos_control_notasM13["nt_26"] * $lap_para_el_porc_V6_M13)/$el_puntaje_completo_es;
$lap_nota_real_7_M13 = ($lap_row_datos_control_notasM13["nt_27"] * $lap_para_el_porc_V7_M13)/$el_puntaje_completo_es;

$lap_total_seven_M13 = $lap_nota_real_1_M13+$lap_nota_real_2_M13+$lap_nota_real_3_M13+$lap_nota_real_4_M13+$lap_nota_real_5_M13+$lap_nota_real_6_M13+$lap_nota_real_7_M13;

$lap_total_seven_con_Au_M13 = $lap_total_seven_M13+ $lap_row_datos_control_notasM13["nt_Au2"];

$lap_total_seven_con_Au_redon_M13_redondeado1 =number_format($lap_total_seven_con_Au_M13, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M13 =number_format($lap_total_seven_con_Au_redon_M13_redondeado1);



$lap_nota_1_M14 = $lap_row_datos_control_notasM14["nt_21"];
$lap_nota_2_M14 = $lap_row_datos_control_notasM14["nt_22"];
$lap_nota_3_M14 = $lap_row_datos_control_notasM14["nt_23"];
$lap_nota_4_M14 = $lap_row_datos_control_notasM14["nt_24"];
$lap_nota_5_M14 = $lap_row_datos_control_notasM14["nt_25"];
$lap_nota_6_M14 = $lap_row_datos_control_notasM14["nt_26"];
$lap_nota_7_M14 = $lap_row_datos_control_notasM14["nt_27"];
$lap_notaAu_M14 = $lap_row_datos_control_notasM14["nt_Au2"];


$lap_nota_real_1_M14 = ($lap_row_datos_control_notasM14["nt_21"] * $lap_para_el_porc_V1_M14)/$el_puntaje_completo_es;
$lap_nota_real_2_M14 = ($lap_row_datos_control_notasM14["nt_22"] * $lap_para_el_porc_V2_M14)/$el_puntaje_completo_es;
$lap_nota_real_3_M14 = ($lap_row_datos_control_notasM14["nt_23"] * $lap_para_el_porc_V3_M14)/$el_puntaje_completo_es;
$lap_nota_real_4_M14 = ($lap_row_datos_control_notasM14["nt_24"] * $lap_para_el_porc_V4_M14)/$el_puntaje_completo_es;
$lap_nota_real_5_M14 = ($lap_row_datos_control_notasM14["nt_25"] * $lap_para_el_porc_V5_M14)/$el_puntaje_completo_es;
$lap_nota_real_6_M14 = ($lap_row_datos_control_notasM14["nt_26"] * $lap_para_el_porc_V6_M14)/$el_puntaje_completo_es;
$lap_nota_real_7_M14 = ($lap_row_datos_control_notasM14["nt_27"] * $lap_para_el_porc_V7_M14)/$el_puntaje_completo_es;

$lap_total_seven_M14 = $lap_nota_real_1_M14+$lap_nota_real_2_M14+$lap_nota_real_3_M14+$lap_nota_real_4_M14+$lap_nota_real_5_M14+$lap_nota_real_6_M14+$lap_nota_real_7_M14;

$lap_total_seven_con_Au_M14 = $lap_total_seven_M14+ $lap_row_datos_control_notasM14["nt_Au2"];

$lap_total_seven_con_Au_redon_M14_redondeado1 =number_format($lap_total_seven_con_Au_M14, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M14 =number_format($lap_total_seven_con_Au_redon_M14_redondeado1);



}






if ($lap_lapso == '3°') {
   

$lap_nota_1_M1 = $lap_row_datos_control_notasM1["nt_31"];
$lap_nota_2_M1 = $lap_row_datos_control_notasM1["nt_32"];
$lap_nota_3_M1 = $lap_row_datos_control_notasM1["nt_33"];
$lap_nota_4_M1 = $lap_row_datos_control_notasM1["nt_34"];
$lap_nota_5_M1 = $lap_row_datos_control_notasM1["nt_35"];
$lap_nota_6_M1 = $lap_row_datos_control_notasM1["nt_36"];
$lap_nota_7_M1 = $lap_row_datos_control_notasM1["nt_37"];
$lap_notaAu_M1 = $lap_row_datos_control_notasM1["nt_Au3"];


$lap_nota_real_1_M1 = ($lap_row_datos_control_notasM1["nt_31"] * $lap_para_el_porc_V1_M1)/$el_puntaje_completo_es;
$lap_nota_real_2_M1 = ($lap_row_datos_control_notasM1["nt_32"] * $lap_para_el_porc_V2_M1)/$el_puntaje_completo_es;
$lap_nota_real_3_M1 = ($lap_row_datos_control_notasM1["nt_33"] * $lap_para_el_porc_V3_M1)/$el_puntaje_completo_es;
$lap_nota_real_4_M1 = ($lap_row_datos_control_notasM1["nt_34"] * $lap_para_el_porc_V4_M1)/$el_puntaje_completo_es;
$lap_nota_real_5_M1 = ($lap_row_datos_control_notasM1["nt_35"] * $lap_para_el_porc_V5_M1)/$el_puntaje_completo_es;
$lap_nota_real_6_M1 = ($lap_row_datos_control_notasM1["nt_36"] * $lap_para_el_porc_V6_M1)/$el_puntaje_completo_es;
$lap_nota_real_7_M1 = ($lap_row_datos_control_notasM1["nt_37"] * $lap_para_el_porc_V7_M1)/$el_puntaje_completo_es;

$lap_total_seven_M1 = $lap_nota_real_1_M1+$lap_nota_real_2_M1+$lap_nota_real_3_M1+$lap_nota_real_4_M1+$lap_nota_real_5_M1+$lap_nota_real_6_M1+$lap_nota_real_7_M1;

$lap_total_seven_con_Au_M1 = $lap_total_seven_M1+ $lap_row_datos_control_notasM1["nt_Au3"];

$lap_total_seven_con_Au_redon_M1_redondeado1 =number_format($lap_total_seven_con_Au_M1, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M1 =number_format($lap_total_seven_con_Au_redon_M1_redondeado1);



$lap_nota_1_M2 = $lap_row_datos_control_notasM2["nt_31"];
$lap_nota_2_M2 = $lap_row_datos_control_notasM2["nt_32"];
$lap_nota_3_M2 = $lap_row_datos_control_notasM2["nt_33"];
$lap_nota_4_M2 = $lap_row_datos_control_notasM2["nt_34"];
$lap_nota_5_M2 = $lap_row_datos_control_notasM2["nt_35"];
$lap_nota_6_M2 = $lap_row_datos_control_notasM2["nt_36"];
$lap_nota_7_M2 = $lap_row_datos_control_notasM2["nt_37"];
$lap_notaAu_M2 = $lap_row_datos_control_notasM2["nt_Au3"];


$lap_nota_real_1_M2 = ($lap_row_datos_control_notasM2["nt_31"] * $lap_para_el_porc_V1_M2)/$el_puntaje_completo_es;
$lap_nota_real_2_M2 = ($lap_row_datos_control_notasM2["nt_32"] * $lap_para_el_porc_V2_M2)/$el_puntaje_completo_es;
$lap_nota_real_3_M2 = ($lap_row_datos_control_notasM2["nt_33"] * $lap_para_el_porc_V3_M2)/$el_puntaje_completo_es;
$lap_nota_real_4_M2 = ($lap_row_datos_control_notasM2["nt_34"] * $lap_para_el_porc_V4_M2)/$el_puntaje_completo_es;
$lap_nota_real_5_M2 = ($lap_row_datos_control_notasM2["nt_35"] * $lap_para_el_porc_V5_M2)/$el_puntaje_completo_es;
$lap_nota_real_6_M2 = ($lap_row_datos_control_notasM2["nt_36"] * $lap_para_el_porc_V6_M2)/$el_puntaje_completo_es;
$lap_nota_real_7_M2 = ($lap_row_datos_control_notasM2["nt_37"] * $lap_para_el_porc_V7_M2)/$el_puntaje_completo_es;

$lap_total_seven_M2 = $lap_nota_real_1_M2+$lap_nota_real_2_M2+$lap_nota_real_3_M2+$lap_nota_real_4_M2+$lap_nota_real_5_M2+$lap_nota_real_6_M2+$lap_nota_real_7_M2;

$lap_total_seven_con_Au_M2 = $lap_total_seven_M2+ $lap_row_datos_control_notasM2["nt_Au3"];

$lap_total_seven_con_Au_redon_M2_redondeado1 =number_format($lap_total_seven_con_Au_M2, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M2 =number_format($lap_total_seven_con_Au_redon_M2_redondeado1);



$lap_nota_1_M3 = $lap_row_datos_control_notasM3["nt_31"];
$lap_nota_2_M3 = $lap_row_datos_control_notasM3["nt_32"];
$lap_nota_3_M3 = $lap_row_datos_control_notasM3["nt_33"];
$lap_nota_4_M3 = $lap_row_datos_control_notasM3["nt_34"];
$lap_nota_5_M3 = $lap_row_datos_control_notasM3["nt_35"];
$lap_nota_6_M3 = $lap_row_datos_control_notasM3["nt_36"];
$lap_nota_7_M3 = $lap_row_datos_control_notasM3["nt_37"];
$lap_notaAu_M3 = $lap_row_datos_control_notasM3["nt_Au3"];


$lap_nota_real_1_M3 = ($lap_row_datos_control_notasM3["nt_31"] * $lap_para_el_porc_V1_M3)/$el_puntaje_completo_es;
$lap_nota_real_2_M3 = ($lap_row_datos_control_notasM3["nt_32"] * $lap_para_el_porc_V2_M3)/$el_puntaje_completo_es;
$lap_nota_real_3_M3 = ($lap_row_datos_control_notasM3["nt_33"] * $lap_para_el_porc_V3_M3)/$el_puntaje_completo_es;
$lap_nota_real_4_M3 = ($lap_row_datos_control_notasM3["nt_34"] * $lap_para_el_porc_V4_M3)/$el_puntaje_completo_es;
$lap_nota_real_5_M3 = ($lap_row_datos_control_notasM3["nt_35"] * $lap_para_el_porc_V5_M3)/$el_puntaje_completo_es;
$lap_nota_real_6_M3 = ($lap_row_datos_control_notasM3["nt_36"] * $lap_para_el_porc_V6_M3)/$el_puntaje_completo_es;
$lap_nota_real_7_M3 = ($lap_row_datos_control_notasM3["nt_37"] * $lap_para_el_porc_V7_M3)/$el_puntaje_completo_es;

$lap_total_seven_M3 = $lap_nota_real_1_M3+$lap_nota_real_2_M3+$lap_nota_real_3_M3+$lap_nota_real_4_M3+$lap_nota_real_5_M3+$lap_nota_real_6_M3+$lap_nota_real_7_M3;

$lap_total_seven_con_Au_M3 = $lap_total_seven_M3+ $lap_row_datos_control_notasM3["nt_Au3"];

$lap_total_seven_con_Au_redon_M3_redondeado1 =number_format($lap_total_seven_con_Au_M3, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M3 =number_format($lap_total_seven_con_Au_redon_M3_redondeado1);


$lap_nota_1_M4 = $lap_row_datos_control_notasM4["nt_31"];
$lap_nota_2_M4 = $lap_row_datos_control_notasM4["nt_32"];
$lap_nota_3_M4 = $lap_row_datos_control_notasM4["nt_33"];
$lap_nota_4_M4 = $lap_row_datos_control_notasM4["nt_34"];
$lap_nota_5_M4 = $lap_row_datos_control_notasM4["nt_35"];
$lap_nota_6_M4 = $lap_row_datos_control_notasM4["nt_36"];
$lap_nota_7_M4 = $lap_row_datos_control_notasM4["nt_37"];
$lap_notaAu_M4 = $lap_row_datos_control_notasM4["nt_Au3"];


$lap_nota_real_1_M4 = ($lap_row_datos_control_notasM4["nt_31"] * $lap_para_el_porc_V1_M4)/$el_puntaje_completo_es;
$lap_nota_real_2_M4 = ($lap_row_datos_control_notasM4["nt_32"] * $lap_para_el_porc_V2_M4)/$el_puntaje_completo_es;
$lap_nota_real_3_M4 = ($lap_row_datos_control_notasM4["nt_33"] * $lap_para_el_porc_V3_M4)/$el_puntaje_completo_es;
$lap_nota_real_4_M4 = ($lap_row_datos_control_notasM4["nt_34"] * $lap_para_el_porc_V4_M4)/$el_puntaje_completo_es;
$lap_nota_real_5_M4 = ($lap_row_datos_control_notasM4["nt_35"] * $lap_para_el_porc_V5_M4)/$el_puntaje_completo_es;
$lap_nota_real_6_M4 = ($lap_row_datos_control_notasM4["nt_36"] * $lap_para_el_porc_V6_M4)/$el_puntaje_completo_es;
$lap_nota_real_7_M4 = ($lap_row_datos_control_notasM4["nt_37"] * $lap_para_el_porc_V7_M4)/$el_puntaje_completo_es;

$lap_total_seven_M4 = $lap_nota_real_1_M4+$lap_nota_real_2_M4+$lap_nota_real_3_M4+$lap_nota_real_4_M4+$lap_nota_real_5_M4+$lap_nota_real_6_M4+$lap_nota_real_7_M4;

$lap_total_seven_con_Au_M4 = $lap_total_seven_M4+ $lap_row_datos_control_notasM4["nt_Au3"];

$lap_total_seven_con_Au_redon_M4_redondeado1 =number_format($lap_total_seven_con_Au_M4, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M4 =number_format($lap_total_seven_con_Au_redon_M4_redondeado1);



$lap_nota_1_M5 = $lap_row_datos_control_notasM5["nt_31"];
$lap_nota_2_M5 = $lap_row_datos_control_notasM5["nt_32"];
$lap_nota_3_M5 = $lap_row_datos_control_notasM5["nt_33"];
$lap_nota_4_M5 = $lap_row_datos_control_notasM5["nt_34"];
$lap_nota_5_M5 = $lap_row_datos_control_notasM5["nt_35"];
$lap_nota_6_M5 = $lap_row_datos_control_notasM5["nt_36"];
$lap_nota_7_M5 = $lap_row_datos_control_notasM5["nt_37"];
$lap_notaAu_M5 = $lap_row_datos_control_notasM5["nt_Au3"];


$lap_nota_real_1_M5 = ($lap_row_datos_control_notasM5["nt_31"] * $lap_para_el_porc_V1_M5)/$el_puntaje_completo_es;
$lap_nota_real_2_M5 = ($lap_row_datos_control_notasM5["nt_32"] * $lap_para_el_porc_V2_M5)/$el_puntaje_completo_es;
$lap_nota_real_3_M5 = ($lap_row_datos_control_notasM5["nt_33"] * $lap_para_el_porc_V3_M5)/$el_puntaje_completo_es;
$lap_nota_real_4_M5 = ($lap_row_datos_control_notasM5["nt_34"] * $lap_para_el_porc_V4_M5)/$el_puntaje_completo_es;
$lap_nota_real_5_M5 = ($lap_row_datos_control_notasM5["nt_35"] * $lap_para_el_porc_V5_M5)/$el_puntaje_completo_es;
$lap_nota_real_6_M5 = ($lap_row_datos_control_notasM5["nt_36"] * $lap_para_el_porc_V6_M5)/$el_puntaje_completo_es;
$lap_nota_real_7_M5 = ($lap_row_datos_control_notasM5["nt_37"] * $lap_para_el_porc_V7_M5)/$el_puntaje_completo_es;

$lap_total_seven_M5 = $lap_nota_real_1_M5+$lap_nota_real_2_M5+$lap_nota_real_3_M5+$lap_nota_real_4_M5+$lap_nota_real_5_M5+$lap_nota_real_6_M5+$lap_nota_real_7_M5;

$lap_total_seven_con_Au_M5 = $lap_total_seven_M5+ $lap_row_datos_control_notasM5["nt_Au3"];

$lap_total_seven_con_Au_redon_M5_redondeado1 =number_format($lap_total_seven_con_Au_M5, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M5 =number_format($lap_total_seven_con_Au_redon_M5_redondeado1);



$lap_nota_1_M6 = $lap_row_datos_control_notasM6["nt_31"];
$lap_nota_2_M6 = $lap_row_datos_control_notasM6["nt_32"];
$lap_nota_3_M6 = $lap_row_datos_control_notasM6["nt_33"];
$lap_nota_4_M6 = $lap_row_datos_control_notasM6["nt_34"];
$lap_nota_5_M6 = $lap_row_datos_control_notasM6["nt_35"];
$lap_nota_6_M6 = $lap_row_datos_control_notasM6["nt_36"];
$lap_nota_7_M6 = $lap_row_datos_control_notasM6["nt_37"];
$lap_notaAu_M6 = $lap_row_datos_control_notasM6["nt_Au3"];


$lap_nota_real_1_M6 = ($lap_row_datos_control_notasM6["nt_31"] * $lap_para_el_porc_V1_M6)/$el_puntaje_completo_es;
$lap_nota_real_2_M6 = ($lap_row_datos_control_notasM6["nt_32"] * $lap_para_el_porc_V2_M6)/$el_puntaje_completo_es;
$lap_nota_real_3_M6 = ($lap_row_datos_control_notasM6["nt_33"] * $lap_para_el_porc_V3_M6)/$el_puntaje_completo_es;
$lap_nota_real_4_M6 = ($lap_row_datos_control_notasM6["nt_34"] * $lap_para_el_porc_V4_M6)/$el_puntaje_completo_es;
$lap_nota_real_5_M6 = ($lap_row_datos_control_notasM6["nt_35"] * $lap_para_el_porc_V5_M6)/$el_puntaje_completo_es;
$lap_nota_real_6_M6 = ($lap_row_datos_control_notasM6["nt_36"] * $lap_para_el_porc_V6_M6)/$el_puntaje_completo_es;
$lap_nota_real_7_M6 = ($lap_row_datos_control_notasM6["nt_37"] * $lap_para_el_porc_V7_M6)/$el_puntaje_completo_es;

$lap_total_seven_M6 = $lap_nota_real_1_M6+$lap_nota_real_2_M6+$lap_nota_real_3_M6+$lap_nota_real_4_M6+$lap_nota_real_5_M6+$lap_nota_real_6_M6+$lap_nota_real_7_M6;

$lap_total_seven_con_Au_M6 = $lap_total_seven_M6+ $lap_row_datos_control_notasM6["nt_Au3"];

$lap_total_seven_con_Au_redon_M6_redondeado1 =number_format($lap_total_seven_con_Au_M6, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M6 =number_format($lap_total_seven_con_Au_redon_M6_redondeado1);



$lap_nota_1_M7 = $lap_row_datos_control_notasM7["nt_31"];
$lap_nota_2_M7 = $lap_row_datos_control_notasM7["nt_32"];
$lap_nota_3_M7 = $lap_row_datos_control_notasM7["nt_33"];
$lap_nota_4_M7 = $lap_row_datos_control_notasM7["nt_34"];
$lap_nota_5_M7 = $lap_row_datos_control_notasM7["nt_35"];
$lap_nota_6_M7 = $lap_row_datos_control_notasM7["nt_36"];
$lap_nota_7_M7 = $lap_row_datos_control_notasM7["nt_37"];
$lap_notaAu_M7 = $lap_row_datos_control_notasM7["nt_Au3"];


$lap_nota_real_1_M7 = ($lap_row_datos_control_notasM7["nt_31"] * $lap_para_el_porc_V1_M7)/$el_puntaje_completo_es;
$lap_nota_real_2_M7 = ($lap_row_datos_control_notasM7["nt_32"] * $lap_para_el_porc_V2_M7)/$el_puntaje_completo_es;
$lap_nota_real_3_M7 = ($lap_row_datos_control_notasM7["nt_33"] * $lap_para_el_porc_V3_M7)/$el_puntaje_completo_es;
$lap_nota_real_4_M7 = ($lap_row_datos_control_notasM7["nt_34"] * $lap_para_el_porc_V4_M7)/$el_puntaje_completo_es;
$lap_nota_real_5_M7 = ($lap_row_datos_control_notasM7["nt_35"] * $lap_para_el_porc_V5_M7)/$el_puntaje_completo_es;
$lap_nota_real_6_M7 = ($lap_row_datos_control_notasM7["nt_36"] * $lap_para_el_porc_V6_M7)/$el_puntaje_completo_es;
$lap_nota_real_7_M7 = ($lap_row_datos_control_notasM7["nt_37"] * $lap_para_el_porc_V7_M7)/$el_puntaje_completo_es;

$lap_total_seven_M7 = $lap_nota_real_1_M7+$lap_nota_real_2_M7+$lap_nota_real_3_M7+$lap_nota_real_4_M7+$lap_nota_real_5_M7+$lap_nota_real_6_M7+$lap_nota_real_7_M7;

$lap_total_seven_con_Au_M7 = $lap_total_seven_M7+ $lap_row_datos_control_notasM7["nt_Au3"];

$lap_total_seven_con_Au_redon_M7_redondeado1 =number_format($lap_total_seven_con_Au_M7, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M7 =number_format($lap_total_seven_con_Au_redon_M7_redondeado1);




$lap_nota_1_M8 = $lap_row_datos_control_notasM8["nt_31"];
$lap_nota_2_M8 = $lap_row_datos_control_notasM8["nt_32"];
$lap_nota_3_M8 = $lap_row_datos_control_notasM8["nt_33"];
$lap_nota_4_M8 = $lap_row_datos_control_notasM8["nt_34"];
$lap_nota_5_M8 = $lap_row_datos_control_notasM8["nt_35"];
$lap_nota_6_M8 = $lap_row_datos_control_notasM8["nt_36"];
$lap_nota_7_M8 = $lap_row_datos_control_notasM8["nt_37"];
$lap_notaAu_M8 = $lap_row_datos_control_notasM8["nt_Au3"];


$lap_nota_real_1_M8 = ($lap_row_datos_control_notasM8["nt_31"] * $lap_para_el_porc_V1_M8)/$el_puntaje_completo_es;
$lap_nota_real_2_M8 = ($lap_row_datos_control_notasM8["nt_32"] * $lap_para_el_porc_V2_M8)/$el_puntaje_completo_es;
$lap_nota_real_3_M8 = ($lap_row_datos_control_notasM8["nt_33"] * $lap_para_el_porc_V3_M8)/$el_puntaje_completo_es;
$lap_nota_real_4_M8 = ($lap_row_datos_control_notasM8["nt_34"] * $lap_para_el_porc_V4_M8)/$el_puntaje_completo_es;
$lap_nota_real_5_M8 = ($lap_row_datos_control_notasM8["nt_35"] * $lap_para_el_porc_V5_M8)/$el_puntaje_completo_es;
$lap_nota_real_6_M8 = ($lap_row_datos_control_notasM8["nt_36"] * $lap_para_el_porc_V6_M8)/$el_puntaje_completo_es;
$lap_nota_real_7_M8 = ($lap_row_datos_control_notasM8["nt_37"] * $lap_para_el_porc_V7_M8)/$el_puntaje_completo_es;

$lap_total_seven_M8 = $lap_nota_real_1_M8+$lap_nota_real_2_M8+$lap_nota_real_3_M8+$lap_nota_real_4_M8+$lap_nota_real_5_M8+$lap_nota_real_6_M8+$lap_nota_real_7_M8;

$lap_total_seven_con_Au_M8 = $lap_total_seven_M8+ $lap_row_datos_control_notasM8["nt_Au3"];

$lap_total_seven_con_Au_redon_M8_redondeado1 =number_format($lap_total_seven_con_Au_M8, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M8 =number_format($lap_total_seven_con_Au_redon_M8_redondeado1);




$lap_nota_1_M9 = $lap_row_datos_control_notasM9["nt_31"];
$lap_nota_2_M9 = $lap_row_datos_control_notasM9["nt_32"];
$lap_nota_3_M9 = $lap_row_datos_control_notasM9["nt_33"];
$lap_nota_4_M9 = $lap_row_datos_control_notasM9["nt_34"];
$lap_nota_5_M9 = $lap_row_datos_control_notasM9["nt_35"];
$lap_nota_6_M9 = $lap_row_datos_control_notasM9["nt_36"];
$lap_nota_7_M9 = $lap_row_datos_control_notasM9["nt_37"];
$lap_notaAu_M9 = $lap_row_datos_control_notasM9["nt_Au3"];


$lap_nota_real_1_M9 = ($lap_row_datos_control_notasM9["nt_31"] * $lap_para_el_porc_V1_M9)/$el_puntaje_completo_es;
$lap_nota_real_2_M9 = ($lap_row_datos_control_notasM9["nt_32"] * $lap_para_el_porc_V2_M9)/$el_puntaje_completo_es;
$lap_nota_real_3_M9 = ($lap_row_datos_control_notasM9["nt_33"] * $lap_para_el_porc_V3_M9)/$el_puntaje_completo_es;
$lap_nota_real_4_M9 = ($lap_row_datos_control_notasM9["nt_34"] * $lap_para_el_porc_V4_M9)/$el_puntaje_completo_es;
$lap_nota_real_5_M9 = ($lap_row_datos_control_notasM9["nt_35"] * $lap_para_el_porc_V5_M9)/$el_puntaje_completo_es;
$lap_nota_real_6_M9 = ($lap_row_datos_control_notasM9["nt_36"] * $lap_para_el_porc_V6_M9)/$el_puntaje_completo_es;
$lap_nota_real_7_M9 = ($lap_row_datos_control_notasM9["nt_37"] * $lap_para_el_porc_V7_M9)/$el_puntaje_completo_es;

$lap_total_seven_M9 = $lap_nota_real_1_M9+$lap_nota_real_2_M9+$lap_nota_real_3_M9+$lap_nota_real_4_M9+$lap_nota_real_5_M9+$lap_nota_real_6_M9+$lap_nota_real_7_M9;

$lap_total_seven_con_Au_M9 = $lap_total_seven_M9+ $lap_row_datos_control_notasM9["nt_Au3"];

$lap_total_seven_con_Au_redon_M9_redondeado1 =number_format($lap_total_seven_con_Au_M9, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M9 =number_format($lap_total_seven_con_Au_redon_M9_redondeado1);



$lap_nota_1_M10 = $lap_row_datos_control_notasM10["nt_31"];
$lap_nota_2_M10 = $lap_row_datos_control_notasM10["nt_32"];
$lap_nota_3_M10 = $lap_row_datos_control_notasM10["nt_33"];
$lap_nota_4_M10 = $lap_row_datos_control_notasM10["nt_34"];
$lap_nota_5_M10 = $lap_row_datos_control_notasM10["nt_35"];
$lap_nota_6_M10 = $lap_row_datos_control_notasM10["nt_36"];
$lap_nota_7_M10 = $lap_row_datos_control_notasM10["nt_37"];
$lap_notaAu_M10 = $lap_row_datos_control_notasM10["nt_Au3"];


$lap_nota_real_1_M10 = ($lap_row_datos_control_notasM10["nt_31"] * $lap_para_el_porc_V1_M10)/$el_puntaje_completo_es;
$lap_nota_real_2_M10 = ($lap_row_datos_control_notasM10["nt_32"] * $lap_para_el_porc_V2_M10)/$el_puntaje_completo_es;
$lap_nota_real_3_M10 = ($lap_row_datos_control_notasM10["nt_33"] * $lap_para_el_porc_V3_M10)/$el_puntaje_completo_es;
$lap_nota_real_4_M10 = ($lap_row_datos_control_notasM10["nt_34"] * $lap_para_el_porc_V4_M10)/$el_puntaje_completo_es;
$lap_nota_real_5_M10 = ($lap_row_datos_control_notasM10["nt_35"] * $lap_para_el_porc_V5_M10)/$el_puntaje_completo_es;
$lap_nota_real_6_M10 = ($lap_row_datos_control_notasM10["nt_36"] * $lap_para_el_porc_V6_M10)/$el_puntaje_completo_es;
$lap_nota_real_7_M10 = ($lap_row_datos_control_notasM10["nt_37"] * $lap_para_el_porc_V7_M10)/$el_puntaje_completo_es;

$lap_total_seven_M10 = $lap_nota_real_1_M10+$lap_nota_real_2_M10+$lap_nota_real_3_M10+$lap_nota_real_4_M10+$lap_nota_real_5_M10+$lap_nota_real_6_M10+$lap_nota_real_7_M10;

$lap_total_seven_con_Au_M10 = $lap_total_seven_M10+ $lap_row_datos_control_notasM10["nt_Au3"];

$lap_total_seven_con_Au_redon_M10_redondeado1 =number_format($lap_total_seven_con_Au_M10, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M10 =number_format($lap_total_seven_con_Au_redon_M10_redondeado1);



$lap_nota_1_M11 = $lap_row_datos_control_notasM11["nt_31"];
$lap_nota_2_M11 = $lap_row_datos_control_notasM11["nt_32"];
$lap_nota_3_M11 = $lap_row_datos_control_notasM11["nt_33"];
$lap_nota_4_M11 = $lap_row_datos_control_notasM11["nt_34"];
$lap_nota_5_M11 = $lap_row_datos_control_notasM11["nt_35"];
$lap_nota_6_M11 = $lap_row_datos_control_notasM11["nt_36"];
$lap_nota_7_M11 = $lap_row_datos_control_notasM11["nt_37"];
$lap_notaAu_M11 = $lap_row_datos_control_notasM11["nt_Au3"];


$lap_nota_real_1_M11 = ($lap_row_datos_control_notasM11["nt_31"] * $lap_para_el_porc_V1_M11)/$el_puntaje_completo_es;
$lap_nota_real_2_M11 = ($lap_row_datos_control_notasM11["nt_32"] * $lap_para_el_porc_V2_M11)/$el_puntaje_completo_es;
$lap_nota_real_3_M11 = ($lap_row_datos_control_notasM11["nt_33"] * $lap_para_el_porc_V3_M11)/$el_puntaje_completo_es;
$lap_nota_real_4_M11 = ($lap_row_datos_control_notasM11["nt_34"] * $lap_para_el_porc_V4_M11)/$el_puntaje_completo_es;
$lap_nota_real_5_M11 = ($lap_row_datos_control_notasM11["nt_35"] * $lap_para_el_porc_V5_M11)/$el_puntaje_completo_es;
$lap_nota_real_6_M11 = ($lap_row_datos_control_notasM11["nt_36"] * $lap_para_el_porc_V6_M11)/$el_puntaje_completo_es;
$lap_nota_real_7_M11 = ($lap_row_datos_control_notasM11["nt_37"] * $lap_para_el_porc_V7_M11)/$el_puntaje_completo_es;

$lap_total_seven_M11 = $lap_nota_real_1_M11+$lap_nota_real_2_M11+$lap_nota_real_3_M11+$lap_nota_real_4_M11+$lap_nota_real_5_M11+$lap_nota_real_6_M11+$lap_nota_real_7_M11;

$lap_total_seven_con_Au_M11 = $lap_total_seven_M11+ $lap_row_datos_control_notasM11["nt_Au3"];

$lap_total_seven_con_Au_redon_M11_redondeado1 =number_format($lap_total_seven_con_Au_M11, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M11 =number_format($lap_total_seven_con_Au_redon_M11_redondeado1);



$lap_nota_1_M12 = $lap_row_datos_control_notasM12["nt_31"];
$lap_nota_2_M12 = $lap_row_datos_control_notasM12["nt_32"];
$lap_nota_3_M12 = $lap_row_datos_control_notasM12["nt_33"];
$lap_nota_4_M12 = $lap_row_datos_control_notasM12["nt_34"];
$lap_nota_5_M12 = $lap_row_datos_control_notasM12["nt_35"];
$lap_nota_6_M12 = $lap_row_datos_control_notasM12["nt_36"];
$lap_nota_7_M12 = $lap_row_datos_control_notasM12["nt_37"];
$lap_notaAu_M12 = $lap_row_datos_control_notasM12["nt_Au3"];


$lap_nota_real_1_M12 = ($lap_row_datos_control_notasM12["nt_31"] * $lap_para_el_porc_V1_M12)/$el_puntaje_completo_es;
$lap_nota_real_2_M12 = ($lap_row_datos_control_notasM12["nt_32"] * $lap_para_el_porc_V2_M12)/$el_puntaje_completo_es;
$lap_nota_real_3_M12 = ($lap_row_datos_control_notasM12["nt_33"] * $lap_para_el_porc_V3_M12)/$el_puntaje_completo_es;
$lap_nota_real_4_M12 = ($lap_row_datos_control_notasM12["nt_34"] * $lap_para_el_porc_V4_M12)/$el_puntaje_completo_es;
$lap_nota_real_5_M12 = ($lap_row_datos_control_notasM12["nt_35"] * $lap_para_el_porc_V5_M12)/$el_puntaje_completo_es;
$lap_nota_real_6_M12 = ($lap_row_datos_control_notasM12["nt_36"] * $lap_para_el_porc_V6_M12)/$el_puntaje_completo_es;
$lap_nota_real_7_M12 = ($lap_row_datos_control_notasM12["nt_37"] * $lap_para_el_porc_V7_M12)/$el_puntaje_completo_es;

$lap_total_seven_M12 = $lap_nota_real_1_M12+$lap_nota_real_2_M12+$lap_nota_real_3_M12+$lap_nota_real_4_M12+$lap_nota_real_5_M12+$lap_nota_real_6_M12+$lap_nota_real_7_M12;

$lap_total_seven_con_Au_M12 = $lap_total_seven_M12+ $lap_row_datos_control_notasM12["nt_Au3"];

$lap_total_seven_con_Au_redon_M12_redondeado1 =number_format($lap_total_seven_con_Au_M12, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M12 =number_format($lap_total_seven_con_Au_redon_M12_redondeado1);



$lap_nota_1_M13 = $lap_row_datos_control_notasM13["nt_31"];
$lap_nota_2_M13 = $lap_row_datos_control_notasM13["nt_32"];
$lap_nota_3_M13 = $lap_row_datos_control_notasM13["nt_33"];
$lap_nota_4_M13 = $lap_row_datos_control_notasM13["nt_34"];
$lap_nota_5_M13 = $lap_row_datos_control_notasM13["nt_35"];
$lap_nota_6_M13 = $lap_row_datos_control_notasM13["nt_36"];
$lap_nota_7_M13 = $lap_row_datos_control_notasM13["nt_37"];
$lap_notaAu_M13 = $lap_row_datos_control_notasM13["nt_Au3"];


$lap_nota_real_1_M13 = ($lap_row_datos_control_notasM13["nt_31"] * $lap_para_el_porc_V1_M13)/$el_puntaje_completo_es;
$lap_nota_real_2_M13 = ($lap_row_datos_control_notasM13["nt_32"] * $lap_para_el_porc_V2_M13)/$el_puntaje_completo_es;
$lap_nota_real_3_M13 = ($lap_row_datos_control_notasM13["nt_33"] * $lap_para_el_porc_V3_M13)/$el_puntaje_completo_es;
$lap_nota_real_4_M13 = ($lap_row_datos_control_notasM13["nt_34"] * $lap_para_el_porc_V4_M13)/$el_puntaje_completo_es;
$lap_nota_real_5_M13 = ($lap_row_datos_control_notasM13["nt_35"] * $lap_para_el_porc_V5_M13)/$el_puntaje_completo_es;
$lap_nota_real_6_M13 = ($lap_row_datos_control_notasM13["nt_36"] * $lap_para_el_porc_V6_M13)/$el_puntaje_completo_es;
$lap_nota_real_7_M13 = ($lap_row_datos_control_notasM13["nt_37"] * $lap_para_el_porc_V7_M13)/$el_puntaje_completo_es;

$lap_total_seven_M13 = $lap_nota_real_1_M13+$lap_nota_real_2_M13+$lap_nota_real_3_M13+$lap_nota_real_4_M13+$lap_nota_real_5_M13+$lap_nota_real_6_M13+$lap_nota_real_7_M13;

$lap_total_seven_con_Au_M13 = $lap_total_seven_M13+ $lap_row_datos_control_notasM13["nt_Au3"];

$lap_total_seven_con_Au_redon_M13_redondeado1 =number_format($lap_total_seven_con_Au_M13, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M13 =number_format($lap_total_seven_con_Au_redon_M13_redondeado1);



$lap_nota_1_M14 = $lap_row_datos_control_notasM14["nt_31"];
$lap_nota_2_M14 = $lap_row_datos_control_notasM14["nt_32"];
$lap_nota_3_M14 = $lap_row_datos_control_notasM14["nt_33"];
$lap_nota_4_M14 = $lap_row_datos_control_notasM14["nt_34"];
$lap_nota_5_M14 = $lap_row_datos_control_notasM14["nt_35"];
$lap_nota_6_M14 = $lap_row_datos_control_notasM14["nt_36"];
$lap_nota_7_M14 = $lap_row_datos_control_notasM14["nt_37"];
$lap_notaAu_M14 = $lap_row_datos_control_notasM14["nt_Au3"];


$lap_nota_real_1_M14 = ($lap_row_datos_control_notasM14["nt_31"] * $lap_para_el_porc_V1_M14)/$el_puntaje_completo_es;
$lap_nota_real_2_M14 = ($lap_row_datos_control_notasM14["nt_32"] * $lap_para_el_porc_V2_M14)/$el_puntaje_completo_es;
$lap_nota_real_3_M14 = ($lap_row_datos_control_notasM14["nt_33"] * $lap_para_el_porc_V3_M14)/$el_puntaje_completo_es;
$lap_nota_real_4_M14 = ($lap_row_datos_control_notasM14["nt_34"] * $lap_para_el_porc_V4_M14)/$el_puntaje_completo_es;
$lap_nota_real_5_M14 = ($lap_row_datos_control_notasM14["nt_35"] * $lap_para_el_porc_V5_M14)/$el_puntaje_completo_es;
$lap_nota_real_6_M14 = ($lap_row_datos_control_notasM14["nt_36"] * $lap_para_el_porc_V6_M14)/$el_puntaje_completo_es;
$lap_nota_real_7_M14 = ($lap_row_datos_control_notasM14["nt_37"] * $lap_para_el_porc_V7_M14)/$el_puntaje_completo_es;

$lap_total_seven_M14 = $lap_nota_real_1_M14+$lap_nota_real_2_M14+$lap_nota_real_3_M14+$lap_nota_real_4_M14+$lap_nota_real_5_M14+$lap_nota_real_6_M14+$lap_nota_real_7_M14;

$lap_total_seven_con_Au_M14 = $lap_total_seven_M14+ $lap_row_datos_control_notasM14["nt_Au3"];

$lap_total_seven_con_Au_redon_M14_redondeado1 =number_format($lap_total_seven_con_Au_M14, 1, '.', '');      ////        nuevoooooooooooooo

$lap_total_seven_con_Au_redon_M14 =number_format($lap_total_seven_con_Au_redon_M14_redondeado1);



}





?></b>



</TD>

<TD class="miniborder" style="width:33.5%; height:15px; font-size: 11px; color:<?php echo $lap_color_imp1; ?>; padding-left: 4px;" align="left">
                                    <b><?php echo $lap_row_datos_control['apellidos_estu']; ?></b>, <?php echo $lap_row_datos_control['nombre_estu']; ?>    
</TD>

<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
    <b><?php

     $lap_cuenta_personal ='0';

     $lap_suma_personal = '';
     $lap_entre_cuanto = '';
     $lap_color_a = $lap_color_imp2;
   
     $lap_marquitaper ='';
     $lap_total_seven_con_Au_redon_M1a = '';

     if ($lap_total_seven_con_Au_M1 >= 0.1 and $lap_total_seven_con_Au_redon_M1 <= $el_puntaje_aprobatorio_prom) {
      $lap_cuenta_personal = $lap_cuenta_personal + 1;
      $lap_color_a = red;
      $lap_apla_mat1 = $lap_apla_mat1 + 1;
    } 


     if ($lap_total_seven_con_Au_M1 == 0) {
      $lap_total_seven_con_Au_redon_M1a = '';
    } 


    if ($lap_total_seven_con_Au_M1 >= 0.1 and $lap_total_seven_con_Au_M1 <=0.9) {
      $lap_total_seven_con_Au_redon_M1a = $lap_total_seven_con_Au_redon_M1;  

        $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M1a;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;       

    } 



    if ($lap_total_seven_con_Au_redon_M1 >= 1) {
      $lap_total_seven_con_Au_redon_M1a = $lap_total_seven_con_Au_redon_M1;
      $lap_tot_mat1 = $lap_tot_mat1 + $lap_total_seven_con_Au_redon_M1a;
      $lap_div_mat1 = $lap_div_mat1 + 1;

  $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M1a;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;   

    } 

     echo "<span style=\"color:".$lap_color_a."\" >".$lap_total_seven_con_Au_redon_M1a."</span>";
 ?></b>

</TD>



<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">

<b><?php

     $lap_color_a = $lap_color_imp2;

     $lap_marquitaper ='';
     $lap_total_seven_con_Au_redon_M22 = '';

     if ($lap_total_seven_con_Au_M2 >= 0.1 and $lap_total_seven_con_Au_redon_M2 <= $el_puntaje_aprobatorio_prom) {
      $lap_cuenta_personal = $lap_cuenta_personal + 1;
       $lap_color_a = red;
       $lap_apla_mat2 = $lap_apla_mat2 + 1;
    } 


     if ($lap_total_seven_con_Au_M2 == 0) {
      $lap_total_seven_con_Au_redon_M22 = '';
    } 


    if ($lap_total_seven_con_Au_M2 >= 0.1 and $lap_total_seven_con_Au_M2 <=0.9) {           /* */
      $lap_total_seven_con_Au_redon_M22 = $lap_total_seven_con_Au_redon_M2;  

        $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M22;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;       

    } 




    if ($lap_total_seven_con_Au_redon_M2 >= 1) {
      $lap_total_seven_con_Au_redon_M22 = $lap_total_seven_con_Au_redon_M2;

      $lap_tot_mat2 = $lap_tot_mat2 + $lap_total_seven_con_Au_redon_M22;
      $lap_div_mat2 = $lap_div_mat2 + 1;

   $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M22;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;  


    } 

   echo "<span style=\"color:".$lap_color_a."\" >".$lap_total_seven_con_Au_redon_M22."</span>"; ?></b>






</TD>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">


<b><?php

     $lap_color_a = $lap_color_imp2;

     $lap_marquitaper ='';
     $lap_total_seven_con_Au_redon_M33 = '';

     if ($lap_total_seven_con_Au_M3 >= 0.1 and $lap_total_seven_con_Au_redon_M3 <= $el_puntaje_aprobatorio_prom) {
      $lap_cuenta_personal = $lap_cuenta_personal + 1;
       $lap_color_a = red;
       $lap_apla_mat3 = $lap_apla_mat3 + 1;
    } 


     if ($lap_total_seven_con_Au_M3 == 0) {
      $lap_total_seven_con_Au_redon_M33 = '';
    } 


        if ($lap_total_seven_con_Au_M3 >= 0.1 and $lap_total_seven_con_Au_M3 <=0.9) {      /* */
      $lap_total_seven_con_Au_redon_M33 = $lap_total_seven_con_Au_redon_M3;  

        $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M33;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;       

    } 



    if ($lap_total_seven_con_Au_redon_M3 >= 1) {
      $lap_total_seven_con_Au_redon_M33 = $lap_total_seven_con_Au_redon_M3;

      $lap_tot_mat3 = $lap_tot_mat3 + $lap_total_seven_con_Au_redon_M33;
      $lap_div_mat3 = $lap_div_mat3 + 1;

    $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M33;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;  


    } 

   echo "<span style=\"color:".$lap_color_a."\" >".$lap_total_seven_con_Au_redon_M33."</span>"; ?></b>







</TD>
<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">


<b><?php

     $lap_color_a = $lap_color_imp2;

     $lap_marquitaper ='';
     $lap_total_seven_con_Au_redon_M44 = '';

     if ($lap_total_seven_con_Au_M4 >= 0.1 and $lap_total_seven_con_Au_redon_M4 <= $el_puntaje_aprobatorio_prom) {
      $lap_cuenta_personal = $lap_cuenta_personal + 1;
       $lap_color_a = red;
       $lap_apla_mat4 = $lap_apla_mat4 + 1;
    } 


     if ($lap_total_seven_con_Au_M4 == 0) {
      $lap_total_seven_con_Au_redon_M44 = '';
    } 


    if ($lap_total_seven_con_Au_M4 >= 0.1 and $lap_total_seven_con_Au_M4 <=0.9) {      /* */
      $lap_total_seven_con_Au_redon_M44 = $lap_total_seven_con_Au_redon_M4;  

        $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M44;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;       

    } 




    if ($lap_total_seven_con_Au_redon_M4 >= 1) {
      $lap_total_seven_con_Au_redon_M44 = $lap_total_seven_con_Au_redon_M4;

      $lap_tot_mat4 = $lap_tot_mat4 + $lap_total_seven_con_Au_redon_M44;
      $lap_div_mat4 = $lap_div_mat4 + 1;

  $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M44;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;  

    } 

    echo "<span style=\"color:".$lap_color_a."\" >".$lap_total_seven_con_Au_redon_M44."</span>"; ?></b>



</TD>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">


<b><?php

     $lap_color_a = $lap_color_imp2;

     $lap_marquitaper ='';
     $lap_total_seven_con_Au_redon_M55 = '';

     if ($lap_total_seven_con_Au_M5 >= 0.1 and $lap_total_seven_con_Au_redon_M5 <= $el_puntaje_aprobatorio_prom) {
      $lap_cuenta_personal = $lap_cuenta_personal + 1;
       $lap_color_a = red;
       $lap_apla_mat5 = $lap_apla_mat5 + 1;
    } 


     if ($lap_total_seven_con_Au_M5 == 0) {
      $lap_total_seven_con_Au_redon_M55 = '';
    } 


        if ($lap_total_seven_con_Au_M5 >= 0.1 and $lap_total_seven_con_Au_M5 <=0.9) {      /* */
      $lap_total_seven_con_Au_redon_M55 = $lap_total_seven_con_Au_redon_M5;  

        $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M55;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;       

    } 



    if ($lap_total_seven_con_Au_redon_M5 >= 1) {
      $lap_total_seven_con_Au_redon_M55 = $lap_total_seven_con_Au_redon_M5;

      $lap_tot_mat5 = $lap_tot_mat5 + $lap_total_seven_con_Au_redon_M55;
      $lap_div_mat5 = $lap_div_mat5 + 1;

   $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M55;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;   


    } 

   echo "<span style=\"color:".$lap_color_a."\" >".$lap_total_seven_con_Au_redon_M55."</span>"; ?></b>





</TD>
<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">

<b><?php

     $lap_color_a = $lap_color_imp2;

     $lap_marquitaper ='';
     $lap_total_seven_con_Au_redon_M66 = '';

     if ($lap_total_seven_con_Au_M6 >= 0.1 and $lap_total_seven_con_Au_redon_M6 <= $el_puntaje_aprobatorio_prom) {
      $lap_cuenta_personal = $lap_cuenta_personal + 1;
       $lap_color_a = red;
       $lap_apla_mat6 = $lap_apla_mat6 + 1;
    } 


     if ($lap_total_seven_con_Au_M6 == 0) {
      $lap_total_seven_con_Au_redon_M66 = '';
    } 


        if ($lap_total_seven_con_Au_M6 >= 0.1 and $lap_total_seven_con_Au_M6 <=0.9) {      /* */
      $lap_total_seven_con_Au_redon_M66 = $lap_total_seven_con_Au_redon_M6;  

        $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M66;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;       

    } 



    if ($lap_total_seven_con_Au_redon_M6 >= 1) {
      $lap_total_seven_con_Au_redon_M66 = $lap_total_seven_con_Au_redon_M6;

      $lap_tot_mat6 = $lap_tot_mat6 + $lap_total_seven_con_Au_redon_M66;
      $lap_div_mat6 = $lap_div_mat6 + 1;

      $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M66;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;   

    } 

    echo "<span style=\"color:".$lap_color_a."\" >".$lap_total_seven_con_Au_redon_M66."</span>"; ?></b>



</TD>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">


<b><?php

     $lap_color_a = $lap_color_imp2;

     $lap_marquitaper ='';
     $lap_total_seven_con_Au_redon_M77 = '';

     if ($lap_total_seven_con_Au_M7 >= 0.1 and $lap_total_seven_con_Au_redon_M7 <= $el_puntaje_aprobatorio_prom) {
      $lap_cuenta_personal = $lap_cuenta_personal + 1;
       $lap_color_a = red;
       $lap_apla_mat7 = $lap_apla_mat7 + 1;
    } 


     if ($lap_total_seven_con_Au_M7 == 0) {
      $lap_total_seven_con_Au_redon_M77 = '';
    } 

    if ($lap_total_seven_con_Au_M7 >= 0.1 and $lap_total_seven_con_Au_M7 <=0.9) {      /* */
      $lap_total_seven_con_Au_redon_M77 = $lap_total_seven_con_Au_redon_M7;  

        $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M77;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;       

    } 


    if ($lap_total_seven_con_Au_redon_M7 >= 1) {
      $lap_total_seven_con_Au_redon_M77 = $lap_total_seven_con_Au_redon_M7;

      $lap_tot_mat7 = $lap_tot_mat7 + $lap_total_seven_con_Au_redon_M77;
      $lap_div_mat7 = $lap_div_mat7 + 1;

 $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M77;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;  
    } 

    echo "<span style=\"color:".$lap_color_a."\" >".$lap_total_seven_con_Au_redon_M77."</span>"; ?></b>



</TD>




<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">


<b><?php

     $lap_color_a = $lap_color_imp2;

     $lap_marquitaper ='';
     $lap_total_seven_con_Au_redon_M88 = '';

     if ($lap_total_seven_con_Au_M8 >= 0.1 and $lap_total_seven_con_Au_redon_M8 <= $el_puntaje_aprobatorio_prom) {
      $lap_cuenta_personal = $lap_cuenta_personal + 1;
       $lap_color_a = red;
       $lap_apla_mat8 = $lap_apla_mat8 + 1;
    } 


     if ($lap_total_seven_con_Au_M8 == 0) {
      $lap_total_seven_con_Au_redon_M88 = '';
    } 


        if ($lap_total_seven_con_Au_M8 >= 0.1 and $lap_total_seven_con_Au_M8 <=0.9) {      /* */
      $lap_total_seven_con_Au_redon_M88 = $lap_total_seven_con_Au_redon_M8;  

        $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M88;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;       

    } 



    if ($lap_total_seven_con_Au_redon_M8 >= 1) {
      $lap_total_seven_con_Au_redon_M88 = $lap_total_seven_con_Au_redon_M8;

      $lap_tot_mat8 = $lap_tot_mat8 + $lap_total_seven_con_Au_redon_M88;
      $lap_div_mat8 = $lap_div_mat8 + 1;

    $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M88;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;  

    } 

    echo "<span style=\"color:".$lap_color_a."\" >".$lap_total_seven_con_Au_redon_M88."</span>"; ?></b>


</TD>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">


<b><?php

 $lap_color_a = $lap_color_imp2;

     $lap_marquitaper ='';
     $lap_total_seven_con_Au_redon_M99 = '';

     if ($lap_total_seven_con_Au_M9 >= 0.1 and $lap_total_seven_con_Au_redon_M9 <= $el_puntaje_aprobatorio_prom) {
      $lap_cuenta_personal = $lap_cuenta_personal + 1;
       $lap_color_a = red;
       $lap_apla_mat9 = $lap_apla_mat9 + 1;
    } 


     if ($lap_total_seven_con_Au_M9 == 0) {
      $lap_total_seven_con_Au_redon_M99 = '';
    } 


        if ($lap_total_seven_con_Au_M9 >= 0.1 and $lap_total_seven_con_Au_M9 <=0.9) {      /* */
      $lap_total_seven_con_Au_redon_M99 = $lap_total_seven_con_Au_redon_M9;  

        $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M99;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;       

    } 



    if ($lap_total_seven_con_Au_redon_M9 >= 1) {
      $lap_total_seven_con_Au_redon_M99 = $lap_total_seven_con_Au_redon_M9;

      $lap_tot_mat9 = $lap_tot_mat9 + $lap_total_seven_con_Au_redon_M99;
      $lap_div_mat9 = $lap_div_mat9 + 1;

   $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M99;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;  

    } 

    echo "<span style=\"color:".$lap_color_a."\" >".$lap_total_seven_con_Au_redon_M99."</span>"; ?></b>




</TD>
<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">

<b><?php

 $lap_color_a = $lap_color_imp2;

     $lap_marquitaper ='';
     $lap_total_seven_con_Au_redon_M100 = '';

     if ($lap_total_seven_con_Au_M10 >= 0.1 and $lap_total_seven_con_Au_redon_M10 <= $el_puntaje_aprobatorio_prom) {
      $lap_cuenta_personal = $lap_cuenta_personal + 1;
       $lap_color_a = red;
       $lap_apla_mat10 = $lap_apla_mat10 + 1;
    } 


     if ($lap_total_seven_con_Au_M10 == 0) {
      $lap_total_seven_con_Au_redon_M100 = '';
    } 

    if ($lap_total_seven_con_Au_M10 >= 0.1 and $lap_total_seven_con_Au_M10 <=0.9) {      /* */
      $lap_total_seven_con_Au_redon_M100 = $lap_total_seven_con_Au_redon_M10;  

        $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M100;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;       

    } 


    if ($lap_total_seven_con_Au_redon_M10 >= 1) {
      $lap_total_seven_con_Au_redon_M100 = $lap_total_seven_con_Au_redon_M10;

      $lap_tot_mat10 = $lap_tot_mat10 + $lap_total_seven_con_Au_redon_M100;
      $lap_div_mat10 = $lap_div_mat10 + 1;

    $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M100;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;  

    } 

    echo "<span style=\"color:".$lap_color_a."\" >".$lap_total_seven_con_Au_redon_M100."</span>"; ?></b>





</TD>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">

<b><?php

 $lap_color_a = $lap_color_imp2;

     $lap_marquitaper ='';
     $lap_total_seven_con_Au_redon_M110 = '';

     if ($lap_total_seven_con_Au_M11 >= 0.1 and $lap_total_seven_con_Au_redon_M11 <= $el_puntaje_aprobatorio_prom) {
      $lap_cuenta_personal = $lap_cuenta_personal + 1;
       $lap_color_a = red;
       $lap_apla_mat11 = $lap_apla_mat11 + 1;
    } 


     if ($lap_total_seven_con_Au_M11 == 0) {
      $lap_total_seven_con_Au_redon_M110 = '';
    } 



    if ($lap_total_seven_con_Au_M11 >= 0.1 and $lap_total_seven_con_Au_M11 <=0.9) {      /* */
      $lap_total_seven_con_Au_redon_M110 = $lap_total_seven_con_Au_redon_M11;  

        $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M110;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;       

    } 



    if ($lap_total_seven_con_Au_redon_M11 >= 1) {
      $lap_total_seven_con_Au_redon_M110 = $lap_total_seven_con_Au_redon_M11;

      $lap_tot_mat11 = $lap_tot_mat11 + $lap_total_seven_con_Au_redon_M110;
      $lap_div_mat11 = $lap_div_mat11 + 1;

   $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M110;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;  

    } 

   echo "<span style=\"color:".$lap_color_a."\" >".$lap_total_seven_con_Au_redon_M110."</span>"; ?></b>





</TD>
<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">

<b><?php

 $lap_color_a = $lap_color_imp2;

     $lap_marquitaper ='';
     $lap_total_seven_con_Au_redon_M120 = '';

     if ($lap_total_seven_con_Au_M12 >= 0.1 and $lap_total_seven_con_Au_redon_M12 <= $el_puntaje_aprobatorio_prom) {
      $lap_cuenta_personal = $lap_cuenta_personal + 1;
       $lap_color_a = red;
       $lap_apla_mat12 = $lap_apla_mat12 + 1;
    } 


     if ($lap_total_seven_con_Au_M12 == 0) {
      $lap_total_seven_con_Au_redon_M120 = '';
    } 

    if ($lap_total_seven_con_Au_M12 >= 0.1 and $lap_total_seven_con_Au_M12 <=0.9) {      /* */
      $lap_total_seven_con_Au_redon_M120 = $lap_total_seven_con_Au_redon_M12;  

        $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M120;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;       

    } 





    if ($lap_total_seven_con_Au_redon_M12 >= 1) {
      $lap_total_seven_con_Au_redon_M120 = $lap_total_seven_con_Au_redon_M12;

      $lap_tot_mat12 = $lap_tot_mat12 + $lap_total_seven_con_Au_redon_M120;
      $lap_div_mat12 = $lap_div_mat12 + 1;

  $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M120;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;   

    } 

  echo "<span style=\"color:".$lap_color_a."\" >".$lap_total_seven_con_Au_redon_M120."</span>"; ?></b>





</TD>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">

<b><?php

 $lap_color_a = $lap_color_imp2;

     $lap_marquitaper ='';
     $lap_total_seven_con_Au_redon_M130 = '';

     if ($lap_total_seven_con_Au_M13 >= 0.1 and $lap_total_seven_con_Au_redon_M13 <= $el_puntaje_aprobatorio_prom) {
      $lap_cuenta_personal = $lap_cuenta_personal + 1;
       $lap_color_a = red;
       $lap_apla_mat13 = $lap_apla_mat13 + 1;
    } 


     if ($lap_total_seven_con_Au_M13 == 0) {
      $lap_total_seven_con_Au_redon_M130 = '';
    } 

    if ($lap_total_seven_con_Au_M13 >= 0.1 and $lap_total_seven_con_Au_M13 <=0.9) {      /* */
      $lap_total_seven_con_Au_redon_M130 = $lap_total_seven_con_Au_redon_M13;  

        $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M130;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;       

    } 



    if ($lap_total_seven_con_Au_redon_M13 >= 1) {
      $lap_total_seven_con_Au_redon_M130 = $lap_total_seven_con_Au_redon_M13;

      $lap_tot_mat13 = $lap_tot_mat13 + $lap_total_seven_con_Au_redon_M130;
      $lap_div_mat13 = $lap_div_mat13 + 1;


    $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M130;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;  

    } 

    echo "<span style=\"color:".$lap_color_a."\" >".$lap_total_seven_con_Au_redon_M130."</span>"; ?></b>



</TD>
<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">


<b><?php

 $lap_color_a = $lap_color_imp2;

     $lap_marquitaper ='';
     $lap_total_seven_con_Au_redon_M140 = '';

     if ($lap_total_seven_con_Au_M14 >= 0.1 and $lap_total_seven_con_Au_redon_M14 <= $el_puntaje_aprobatorio_prom) {
      $lap_cuenta_personal = $lap_cuenta_personal + 1;
       $lap_color_a = red;
       $lap_apla_mat14 = $lap_apla_mat14 + 1;
    } 


     if ($lap_total_seven_con_Au_M14 == 0) {
      $lap_total_seven_con_Au_redon_M140 = '';
    } 

    if ($lap_total_seven_con_Au_M14 >= 0.1 and $lap_total_seven_con_Au_M14 <=0.9) {      /* */
      $lap_total_seven_con_Au_redon_M140 = $lap_total_seven_con_Au_redon_M14;  

        $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M140;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;       

    } 



    if ($lap_total_seven_con_Au_redon_M14 >= 1) {
      $lap_total_seven_con_Au_redon_M140 = $lap_total_seven_con_Au_redon_M14;

      $lap_tot_mat14 = $lap_tot_mat14 + $lap_total_seven_con_Au_redon_M140;
      $lap_div_mat14 = $lap_div_mat14 + 1;

     $lap_suma_personal = $lap_suma_personal + $lap_total_seven_con_Au_redon_M140;
      $lap_entre_cuanto = $lap_entre_cuanto + 1;  

    } 

   echo "<span style=\"color:".$lap_color_a."\" >".$lap_total_seven_con_Au_redon_M140."</span>"; ?></b>



</TD>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>


<TD class="miniborderleft" style="width:7.9%; height:15px; font-size: 13px; color:<?php echo $lap_color_imp2; ?>;" align="center">
     <span style="font-size: 10px;"><?php 

      $lap_el_promeee_es = $lap_suma_personal/$lap_entre_cuanto;

        $lap_el_promeee_es_redondeado2 =number_format($lap_el_promeee_es, 2, '.', '');    //   ojoooooooooooooooooooooooooooooooooooooooooo
        $lap_el_promeee_es_redondeado1 =number_format($lap_el_promeee_es, 1, '.', '');    //   ojoooooooooooooooooooooooooooooooooooooooooo

        $lap_el_promeee_es_redon =number_format($lap_el_promeee_es_redondeado1);  

       echo $lap_el_promeee_es_redondeado1;  ?> = </span><b><?php echo $lap_el_promeee_es_redon;  ?> </b>
</TD>


<TD class="" style="width:0.5%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>


<TD class="miniborder" style="width:4.1%; height:15px; font-size: 14px;  color:<?php echo $lap_color_imp2; ?>;" align="center">
   <?php echo $lap_cuenta_personal; ?>
</TD>


</TR>









<?php
                }
                ?>


</TABLE>




<TABLE class="basetabla" style="margin-top: 6px;">



<TR >

<TD class="miniborder" style="width:3%; height:15px; font-size: 13px; color:<?php echo $lap_color_imp3; ?>;" align="center">
</TD>


<TD class="miniborder" style="width:33.5%; height:15px; font-size: 11px; color:<?php echo $lap_color_imp1; ?>; padding-left: 4px;" align="right">
 Promedios:                                      
</TD>

<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
    <?php   $lap_pro_todo_M1 = $lap_tot_mat1/$lap_div_mat1; $lap_pro_todo_M1_redond =number_format($lap_pro_todo_M1, 0, ',', '');  echo $lap_pro_todo_M1_redond; ?>
</TD>

<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">      <?php   $lap_pro_todo_M2 = $lap_tot_mat2/$lap_div_mat2; $lap_pro_todo_M2_redond =number_format($lap_pro_todo_M2, 0, ',', '');  echo $lap_pro_todo_M2_redond; ?>
</TD>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
         <?php   $lap_pro_todo_M3 = $lap_tot_mat3/$lap_div_mat3; $lap_pro_todo_M3_redond =number_format($lap_pro_todo_M3, 0, ',', '');  echo $lap_pro_todo_M3_redond; ?>
</TD>

<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">     <?php   $lap_pro_todo_M4 = $lap_tot_mat4/$lap_div_mat4; $lap_pro_todo_M4_redond =number_format($lap_pro_todo_M4, 0, ',', '');  echo $lap_pro_todo_M4_redond; ?>
</TD>


<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
         <?php   $lap_pro_todo_M5 = $lap_tot_mat5/$lap_div_mat5; $lap_pro_todo_M5_redond =number_format($lap_pro_todo_M5, 0, ',', '');  echo $lap_pro_todo_M5_redond; ?>
</TD>


<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">     <?php   $lap_pro_todo_M6 = $lap_tot_mat6/$lap_div_mat6; $lap_pro_todo_M6_redond =number_format($lap_pro_todo_M6, 0, ',', '');  echo $lap_pro_todo_M6_redond; ?>
</TD>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
         <?php   $lap_pro_todo_M7 = $lap_tot_mat7/$lap_div_mat7; $lap_pro_todo_M7_redond =number_format($lap_pro_todo_M7, 0, ',', '');  echo $lap_pro_todo_M7_redond; ?>
</TD>




<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">  <?php   $lap_pro_todo_M8 = $lap_tot_mat8/$lap_div_mat8; $lap_pro_todo_M8_redond =number_format($lap_pro_todo_M8, 0, ',', '');  echo $lap_pro_todo_M8_redond; ?>
</TD>



<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
     <?php   $lap_pro_todo_M9 = $lap_tot_mat9/$lap_div_mat9; $lap_pro_todo_M9_redond =number_format($lap_pro_todo_M9, 0, ',', '');  echo $lap_pro_todo_M9_redond; ?>
</TD>


<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">  <?php   $lap_pro_todo_M10 = $lap_tot_mat10/$lap_div_mat10; $lap_pro_todo_M10_redond =number_format($lap_pro_todo_M10, 0, ',', '');  echo $lap_pro_todo_M10_redond; ?>
</TD>


<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
     <?php   $lap_pro_todo_M11 = $lap_tot_mat11/$lap_div_mat11; $lap_pro_todo_M11_redond =number_format($lap_pro_todo_M11, 0, ',', '');  echo $lap_pro_todo_M11_redond; ?>
</TD>

<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">  <?php   $lap_pro_todo_M12 = $lap_tot_mat12/$lap_div_mat12; $lap_pro_todo_M12_redond =number_format($lap_pro_todo_M12, 0, ',', '');  echo $lap_pro_todo_M12_redond; ?>
</TD>



<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
     <?php   $lap_pro_todo_M13 = $lap_tot_mat13/$lap_div_mat13; $lap_pro_todo_M13_redond =number_format($lap_pro_todo_M13, 0, ',', '');  echo $lap_pro_todo_M13_redond; ?>
</TD>

<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center">  <?php   $lap_pro_todo_M14 = $lap_tot_mat14/$lap_div_mat14; $lap_pro_todo_M14_redond =number_format($lap_pro_todo_M14, 0, ',', '');  echo $lap_pro_todo_M14_redond; ?>
</TD>


<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>



<TD class="miniborderleft" style="width:7.9%; height:15px; font-size: 13px; color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>

<TD class="" style="width:0.5%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>


<TD class="miniborder" style="width:4.1%; height:15px; font-size: 14px;  color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>


</TR>


</TABLE>



<TABLE class="basetabla" style="margin-top: 6px;">



<TR >

<TD class="miniborder" style="width:3%; height:15px; font-size: 13px; color:<?php echo $lap_color_imp3; ?>;" align="center">
</TD>


<TD class="miniborder" style="width:33.5%; height:15px; font-size: 11px; color:<?php echo $lap_color_imp1; ?>; padding-left: 4px;" align="right">
Aplazados:                                      
</TD>

<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
    <?php echo $lap_apla_mat1; ?>
</TD>



<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center"> <?php echo $lap_apla_mat2; ?>
</TD>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
     <?php echo $lap_apla_mat3; ?>
</TD>

<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center"> <?php echo $lap_apla_mat4; ?>
</TD>


<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
     <?php echo $lap_apla_mat5; ?>
</TD>


<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center"> <?php echo $lap_apla_mat6; ?>
</TD>

<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
     <?php echo $lap_apla_mat7; ?>
</TD>




<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center"> <?php echo $lap_apla_mat8; ?>
</TD>



<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
     <?php echo $lap_apla_mat9; ?>
</TD>


<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center"> <?php echo $lap_apla_mat10; ?>
</TD>


<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
     <?php echo $lap_apla_mat11; ?>
</TD>

<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center"> <?php echo $lap_apla_mat12; ?>
</TD>



<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
     <?php echo $lap_apla_mat13; ?>
</TD>

<TD class="miniborder" style="width:3.4%; height:15px; font-size: 12px; background-color: <?php echo $lap_back_emergency; ?>; color:<?php echo $lap_color_imp2; ?>;" align="center"> <?php echo $lap_apla_mat14; ?>
</TD>


<TD class="miniborderleft" style="width:3.4%; height:15px; font-size: 12px; color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>



<TD class="miniborderleft" style="width:7.9%; height:15px; font-size: 13px; color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>

<TD class="" style="width:0.5%; height:15px; font-size: 14px; color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>


<TD class="miniborder" style="width:4.1%; height:15px; font-size: 14px;  color:<?php echo $lap_color_imp2; ?>;" align="center">
</TD>


</TR>


</TABLE>



</page>















<?php

    $contentxx = ob_get_clean(); 

try
    {
        $hixx = $_POST["id_tituloxxx"];

        $html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("Hoja_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>