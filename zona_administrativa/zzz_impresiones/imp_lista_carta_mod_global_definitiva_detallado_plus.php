<?php
error_reporting(0); //hide php errors
require '../../0 html2pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$i="1";
$conteo_repro = '0';
$puntaje_sumado = '0';
$promedio_divisor = '0';


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



ob_start();
?>


<?php

$color_imp1 = $row_datos_color['color1'];
$color_imp2 = $row_datos_color['color2'];
$color_imp3 = $row_datos_color['color3'];


include("../../conectar.php");

$queryimp = "SELECT * FROM tb_colores_imp where activo = '1' LIMIT 1";

$datos_color = mysqli_query($enlace, $queryimp) or die(mysqli_error());

$row_datos_color = mysqli_fetch_array($datos_color );



$query_z_puntaje = "SELECT * FROM z_puntaje where pt_selecc = '1' LIMIT 1";

$datos_z_puntaje = mysqli_query($enlace, $query_z_puntaje) or die(mysqli_error());

$row_datos_z_puntaje = mysqli_fetch_array($datos_z_puntaje );

$la_mitad_es = $row_datos_z_puntaje['el_puntaje']/2;

$el_puntaje_completo_es = $row_datos_z_puntaje['el_puntaje'];

$el_puntaje_aprobatorio_aprox = $row_datos_z_puntaje['el_aproximado'];
$el_puntaje_aprobatorio_prom = $row_datos_z_puntaje['el_promedio'];
$el_puntaje_aprobatorio_neto = $row_datos_z_puntaje['el_minimo'];

$el_id_puntaje_es = $row_datos_z_puntaje['id_puntaje'];


mysqli_close($enlace);

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


</style>

<page backtop="8mm" backbottom="1mm" backleft="1mm" backright="1mm">
   
    <page_header> 
    </page_header> 

    <?php

include("../../conectar.php");

$periodo = "SELECT * FROM periodo_escolar";
$datos_periodo = mysqli_query($enlace, $periodo) or die(mysqli_error());
$row_datos_periodo = mysqli_fetch_assoc($datos_periodo);

$id_cicloxxx = $_POST['id_cicloxxx'];
$query_peXX = "SELECT id_periodo_es, periodo_escolar FROM temporada_escolar 
         WHERE   id_periodo_es = '$id_cicloxxx' limit 1" ;
$datos_controlXX = mysqli_query($enlace, $query_peXX) or die(mysqli_error());

$row_datos_queryperXX = mysqli_fetch_array($datos_controlXX); 


$queryplantel = "SELECT * FROM z_plantel LIMIT 1";

$datos_queryplantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());

$row_datos_queryplantel = mysqli_fetch_array($datos_queryplantel); 

$logo_plantel = $row_datos_queryplantel['logo_plantel'];

?>

    <page_footer>
   
    </page_footer>





<TABLE class="basetabla">


<TR style="margin-bottom: -10px;">


    <TD class="" style="width:15%; height:auto;" align="center" ROWSPAN=3>

<img style="width:90px; max-height: 90px;" src='../<?php echo $row_datos_queryplantel["logo_plantel"]; ?>'/>
           

</TD>


<TD class="" style="width:32%; height:auto; font-size: 18px; color:<?php echo $color_imp2; ?>; font-style: italic;" align="center">

<b><?php echo $row_datos_queryplantel['nombre_plantel']; ?></b>
           

</TD>


<TD class="" style="width:15%; height:auto; font-size: 14px;" align="center">     

</TD>


<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">__________________________.
         

</TD>






</TR>





<TR>

<TD class="" style="width:32%; height:auto; font-size: 12px; color:<?php echo $color_imp3; ?>;" align="center">

Notas actualizadas el:


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
                case 1:$m="01"; break;
                case 2:$m="02"; break;
                case 3:$m="03"; break;
                case 4:$m="04"; break;
                case 5:$m="05"; break;
                case 6:$m="06"; break;
                case 7:$m="07"; break;
                case 8:$m="08"; break;
                case 9:$m="09"; break;
                case 10:$m="10"; break;
                case 11:$m="11"; break;
                case 12:$m="12"; break;
            }
            echo "&nbsp;&nbsp;" .$dia."/".$m."/".$anio;
            ?>




</TD>


<TD class="" style="width:15%; height:18px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">

Año Escolar
           

</TD>


<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><b><?php echo $_POST["id_tituloxxx"]; ?></b> -&nbsp;&nbsp;Lapso: <u>   <span style="font-size: 14px; color:<?php echo $color_imp2; ?>;"><b>Det</b></span>  </u>.
         

</TD>





</TR>








<TR>

<TD class="" style="width:32%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="LEFT">
</TD>

<TD class="" style="width:15%; height:auto; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><b><u>&nbsp;<?php echo $row_datos_queryperXX['periodo_escolar']; ?>&nbsp;</u></b>
</TD>

<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><?php echo $row_datos_queryplantel["www"]; ?>
                    

</TD>

</TR>











</TABLE>




<TABLE class="basetabla" cellspacing="-1">


<TR>



<TD class="" style="width:3.585%; height:90px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="" style="width:1.8%; height:90px; font-size: 14px; color:<?php echo $color_imp3; ?>; " align=""><div style="rotate:90; margin-top: 50px;">Asignaturas</div>
</TD>






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


?>

 


<TD class="miniborder" style="width:6.384%; height:90px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="">
    <div style="margin-top: 75px; margin-left: 5px;" ><b><?php echo $row_datos_controlmat['a_abrev'];?></b></div>
</TD>
<TD class="miniborder" style="width:6.384%; height:90px; font-size: 11px; background-color:<?php echo $back_emergency; ?>; 
color:<?php echo $color_imp2; ?>;" align="">
    <div style="margin-top: 75px; margin-left: 5px;"><b><?php echo $row_datos_controlmat['b_abrev'];?></b></div>
</TD>




<TD class="miniborderleft" style="width:6.384%; height:90px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="">
    <div style="margin-top: 75px; margin-left: 5px;"><b><?php echo $row_datos_controlmat['c_abrev'];?></b></div>
</TD>
<TD class="miniborder" style="width:6.384%; height:90px; font-size: 11px; background-color:<?php echo $back_emergency; ?>; 
color:<?php echo $color_imp2; ?>;" align="">
    <div style="margin-top: 75px; margin-left: 5px;"><b><?php echo $row_datos_controlmat['d_abrev'];?></b></div>
</TD>





<TD class="miniborderleft" style="width:6.384%; height:90px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="">
    <div style="margin-top: 75px; margin-left: 5px;"><b><?php echo $row_datos_controlmat['e_abrev'];?></b></div>
</TD>
<TD class="miniborder" style="width:6.384%; height:90px; font-size: 11px; background-color:<?php echo $back_emergency; ?>; 
color:<?php echo $color_imp2; ?>;" align="">
    <div style="margin-top: 75px; margin-left: 5px;"><b><?php echo $row_datos_controlmat['f_abrev'];?></b></div>
</TD>




<TD class="miniborderleft" style="width:6.384%; height:90px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="">
    <div style="margin-top: 75px; margin-left: 5px;"><b><?php echo $row_datos_controlmat['g_abrev'];?></b></div>
</TD>
<TD class="miniborder" style="width:6.384%; height:90px; font-size: 11px; background-color:<?php echo $back_emergency; ?>; 
color:<?php echo $color_imp2; ?>;" align="">
    <div style="margin-top: 75px; margin-left: 5px;"><b><?php echo $row_datos_controlmat['h_abrev'];?></b></div>
</TD>





<TD class="miniborderleft" style="width:6.384%; height:90px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="">
    <div style="margin-top: 75px; margin-left: 5px;"><b><?php echo $row_datos_controlmat['i_abrev'];?></b></div>
</TD>
<TD class="miniborder" style="width:6.384%; height:90px; font-size: 11px; background-color:<?php echo $back_emergency; ?>; 
color:<?php echo $color_imp2; ?>;" align="">
    <div style="margin-top: 75px; margin-left: 5px;"><b><?php echo $row_datos_controlmat['j_abrev'];?></b></div>
</TD>




<TD class="miniborderleft" style="width:6.384%; height:90px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="">
    <div style="margin-top: 75px; margin-left: 5px;"><b><?php echo $row_datos_controlmat['k_abrev'];?></b></div>
</TD>
<TD class="miniborder" style="width:6.384%; height:90px; font-size: 11px; background-color:<?php echo $back_emergency; ?>; 
color:<?php echo $color_imp2; ?>;" align="">
    <div style="margin-top: 75px; margin-left: 5px;"><b><?php echo $row_datos_controlmat['l_abrev'];?></b></div>
</TD>




<TD class="miniborderleft" style="width:6.384%; height:90px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="">
    <div style="margin-top: 75px; margin-left: 5px;"><b><?php echo $row_datos_controlmat['m_abrev'];?></b></div>
</TD>
<TD class="miniborder" style="width:6.384%; height:90px; font-size: 11px; background-color:<?php echo $back_emergency; ?>; 
color:<?php echo $color_imp2; ?>;" align="">
    <div style="margin-top: 75px; margin-left: 5px;"><b><?php echo $row_datos_controlmat['n_abrev'];?></b></div>
</TD>











<TD class="" style="width:2.041%; height:90px; font-size: 10px; color:<?php echo $color_imp3; ?>;" align=""><div style="margin-top: 75px;"><b>&nbsp;&nbsp;&nbsp;Pro.</b></div>   
</TD>
<TD class="" style="width:0.225%; height:90px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborder" style="width:1.845%; height:90px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="left">
    <div style="rotate:90; margin-left: 8px; margin-top: 60px;"><b>Aplazadas</b></div>
</TD>

</TR>


</TABLE>







<TABLE class="basetabla" style="margin-top: 4px;" cellspacing="-1">


<TR >



<TD class="" style="width:5.385%; height:15px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="right">Pond.:&nbsp;&nbsp;
</TD>



<?php 
if ($row_datos_controlmat['a_abrev'] == '') {
 $nn1 = '';   # code...
}
else {
   $nn1 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">1°</TD>
<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">2°</TD>
<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">3°</TD>
<TD class="miniborder" style="width:1.064%; height:15px; font-size: 9px; color:<?php echo $color_imp2; ?>;" align="center">DF</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 9px; color:<?php echo $color_imp2; ?>;" align="center">R1</TD>
<TD class="miniborder" style="width:1.064%; height:15px; font-size: 9px; color:<?php echo $color_imp2; ?>;" align="center">R2</TD>



<?php 
if ($row_datos_controlmat['b_abrev'] == '') {
 $nn2 = '';   # code...
}
else {
   $nn2 = '';  
}
?>



<TD class="miniborder" style="width:6.384%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php echo $nn2; ?>
</TD>

<?php 
if ($row_datos_controlmat['c_abrev'] == '') {
 $nn3 = '';   # code...
}
else {
   $nn3 = '';  
}
?>



<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn3; ?>
</TD>

<?php 
if ($row_datos_controlmat['d_abrev'] == '') {
 $nn4 = '';   # code...
}
else {
   $nn4 = '';  
}
?>


<TD class="miniborder" style="width:6.384%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php echo $nn4; ?>
</TD>

<?php 
if ($row_datos_controlmat['e_abrev'] == '') {
 $nn5 = '';   # code...
}
else {
   $nn5 = '';  
}
?>


<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn5; ?>
</TD>


<?php 
if ($row_datos_controlmat['f_abrev'] == '') {
 $nn6 = '';   # code...
}
else {
   $nn6 = '';  
}
?>

<TD class="miniborder" style="width:6.384%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php echo $nn6; ?>
</TD>


<?php 
if ($row_datos_controlmat['g_abrev'] == '') {
 $nn7 = '';   # code...
}
else {
   $nn7 = '';  
}
?>

<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn7; ?>
</TD>

<?php 
if ($row_datos_controlmat['h_abrev'] == '') {
 $nn8 = '';   # code...
}
else {
   $nn8 = '';  
}
?>


<TD class="miniborder" style="width:6.384%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php echo $nn8; ?>
</TD>

<?php 
if ($row_datos_controlmat['i_abrev'] == '') {
 $nn9 = '';   # code...
}
else {
   $nn9 = '';  
}
?>


<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn9; ?>
</TD>

<?php 
if ($row_datos_controlmat['j_abrev'] == '') {
 $nn10 = '';   # code...
}
else {
   $nn10 = '';  
}
?>

<TD class="miniborder" style="width:6.384%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php echo $nn10; ?>
</TD>


<?php 
if ($row_datos_controlmat['k_abrev'] == '') {
 $nn11 = '';   # code...
}
else {
   $nn11 = '';  
}
?>

<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn11; ?>
</TD>

<?php 
if ($row_datos_controlmat['l_abrev'] == '') {
 $nn12 = '';   # code...
}
else {
   $nn12 = '';  
}
?>


<TD class="miniborder" style="width:6.384%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php echo $nn12; ?>
</TD>

<?php 
if ($row_datos_controlmat['m_abrev'] == '') {
 $nn13 = '';   # code...
}
else {
   $nn13 = '';  
}
?>

<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn13; ?>
</TD>

<?php 
if ($row_datos_controlmat['n_abrev'] == '') {
 $nn14 = '';   # code...
}
else {
   $nn14 = '';  
}
?>

<TD class="miniborder" style="width:6.384%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php echo $nn14; ?>
</TD>








<TD class="miniborderleft" style="width:2.041%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="right">
</TD>
<TD class="" style="width:0.225%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:1.845%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

</TR>





</TABLE>






<TABLE class="basetabla" style="margin-top: 5px;" cellspacing="-1">



<?php

$id_seccionxxx = $_POST['id_seccionxxx'];
$id_cicloxxx = $_POST['id_cicloxxx'];
$id_gradoxxx = $_POST['id_gradoxxx'];

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
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$datos_control = mysqli_query($enlace, $query) or die(mysqli_error());

$totalRows_datos_control = mysqli_num_rows($datos_control); 

$media =  ceil($totalRows_datos_control/2);

$centro = $media + 1;

    

mysqli_close($enlace);




while( $row_datos_control = mysqli_fetch_assoc($datos_control)){ 


?>









    <TR >

<TD class="miniborder" style="width:5.385%; height:15px; font-size: 9px; color:<?php echo $color_imp1; ?>; padding-left: 4px;" align="left">


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



    echo $i;
    $i++; 



   

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

$total_seven_con_Au_M1_L1_redon_M1_redondeado1 =number_format($total_seven_con_Au_M1_L1, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M1_L1 =number_format($total_seven_con_Au_M1_L1_redon_M1_redondeado1);




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

$total_seven_con_Au_M1_L2_redon_M1_redondeado1 =number_format($total_seven_con_Au_M1_L2, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M1_L2 =number_format($total_seven_con_Au_M1_L2_redon_M1_redondeado1);



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

$total_seven_con_Au_M1_L3_redon_M1_redondeado1 =number_format($total_seven_con_Au_M1_L3, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M1_L3 =number_format($total_seven_con_Au_M1_L3_redon_M1_redondeado1);

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

$total_seven_con_Au_redon_M1_redon1 =number_format($total_seven_con_Au_redon_M1_aprox, 1, '.', '');   ///  ojoooooooooooooooooo

$total_seven_con_Au_redon_M1 =number_format($total_seven_con_Au_redon_M1_redon1);







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

$total_seven_con_Au_M2_L1_redon_M2_redondeado1 =number_format($total_seven_con_Au_M2_L1, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M2_L1 =number_format($total_seven_con_Au_M2_L1_redon_M2_redondeado1);




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

$total_seven_con_Au_M2_L2_redon_M2_redondeado1 =number_format($total_seven_con_Au_M2_L2, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M2_L2 =number_format($total_seven_con_Au_M2_L2_redon_M2_redondeado1);



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

$total_seven_con_Au_M2_L3_redon_M2_redondeado1 =number_format($total_seven_con_Au_M2_L3, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M2_L3 =number_format($total_seven_con_Au_M2_L3_redon_M2_redondeado1);

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

$total_seven_con_Au_redon_M2_redon1 =number_format($total_seven_con_Au_redon_M2_aprox, 1, '.', '');   ///  ojoooooooooooooooooo

$total_seven_con_Au_redon_M2 =number_format($total_seven_con_Au_redon_M2_redon1);






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

$total_seven_con_Au_M3_L1_redon_M3_redondeado1 =number_format($total_seven_con_Au_M3_L1, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M3_L1 =number_format($total_seven_con_Au_M3_L1_redon_M3_redondeado1);




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

$total_seven_con_Au_M3_L2_redon_M3_redondeado1 =number_format($total_seven_con_Au_M3_L2, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M3_L2 =number_format($total_seven_con_Au_M3_L2_redon_M3_redondeado1);



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

$total_seven_con_Au_M3_L3_redon_M3_redondeado1 =number_format($total_seven_con_Au_M3_L3, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M3_L3 =number_format($total_seven_con_Au_M3_L3_redon_M3_redondeado1);

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

$total_seven_con_Au_redon_M3_redon1 =number_format($total_seven_con_Au_redon_M3_aprox, 1, '.', '');   ///  ojoooooooooooooooooo

$total_seven_con_Au_redon_M3 =number_format($total_seven_con_Au_redon_M3_redon1);









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

$total_seven_con_Au_M4_L1_redon_M4_redondeado1 =number_format($total_seven_con_Au_M4_L1, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M4_L1 =number_format($total_seven_con_Au_M4_L1_redon_M4_redondeado1);




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

$total_seven_con_Au_M4_L2_redon_M4_redondeado1 =number_format($total_seven_con_Au_M4_L2, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M4_L2 =number_format($total_seven_con_Au_M4_L2_redon_M4_redondeado1);



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

$total_seven_con_Au_M4_L3_redon_M4_redondeado1 =number_format($total_seven_con_Au_M4_L3, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M4_L3 =number_format($total_seven_con_Au_M4_L3_redon_M4_redondeado1);

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

$total_seven_con_Au_redon_M4_redon1 =number_format($total_seven_con_Au_redon_M4_aprox, 1, '.', '');   ///  ojoooooooooooooooooo

$total_seven_con_Au_redon_M4 =number_format($total_seven_con_Au_redon_M4_redon1);









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

$total_seven_con_Au_M5_L1_redon_M5_redondeado1 =number_format($total_seven_con_Au_M5_L1, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M5_L1 =number_format($total_seven_con_Au_M5_L1_redon_M5_redondeado1);




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

$total_seven_con_Au_M5_L2_redon_M5_redondeado1 =number_format($total_seven_con_Au_M5_L2, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M5_L2 =number_format($total_seven_con_Au_M5_L2_redon_M5_redondeado1);



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

$total_seven_con_Au_M5_L3_redon_M5_redondeado1 =number_format($total_seven_con_Au_M5_L3, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M5_L3 =number_format($total_seven_con_Au_M5_L3_redon_M5_redondeado1);

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

$total_seven_con_Au_redon_M5_redon1 =number_format($total_seven_con_Au_redon_M5_aprox, 1, '.', '');   ///  ojoooooooooooooooooo

$total_seven_con_Au_redon_M5 =number_format($total_seven_con_Au_redon_M5_redon1);








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

$total_seven_con_Au_M6_L1_redon_M6_redondeado1 =number_format($total_seven_con_Au_M6_L1, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M6_L1 =number_format($total_seven_con_Au_M6_L1_redon_M6_redondeado1);




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

$total_seven_con_Au_M6_L2_redon_M6_redondeado1 =number_format($total_seven_con_Au_M6_L2, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M6_L2 =number_format($total_seven_con_Au_M6_L2_redon_M6_redondeado1);



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

$total_seven_con_Au_M6_L3_redon_M6_redondeado1 =number_format($total_seven_con_Au_M6_L3, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M6_L3 =number_format($total_seven_con_Au_M6_L3_redon_M6_redondeado1);

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

$total_seven_con_Au_redon_M6_redon1 =number_format($total_seven_con_Au_redon_M6_aprox, 1, '.', '');   ///  ojoooooooooooooooooo

$total_seven_con_Au_redon_M6 =number_format($total_seven_con_Au_redon_M6_redon1);






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

$total_seven_con_Au_M7_L1_redon_M7_redondeado1 =number_format($total_seven_con_Au_M7_L1, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M7_L1 =number_format($total_seven_con_Au_M7_L1_redon_M7_redondeado1);




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

$total_seven_con_Au_M7_L2_redon_M7_redondeado1 =number_format($total_seven_con_Au_M7_L2, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M7_L2 =number_format($total_seven_con_Au_M7_L2_redon_M7_redondeado1);



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

$total_seven_con_Au_M7_L3_redon_M7_redondeado1 =number_format($total_seven_con_Au_M7_L3, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M7_L3 =number_format($total_seven_con_Au_M7_L3_redon_M7_redondeado1);

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

$total_seven_con_Au_redon_M7_redon1 =number_format($total_seven_con_Au_redon_M7_aprox, 1, '.', '');   ///  ojoooooooooooooooooo

$total_seven_con_Au_redon_M7 =number_format($total_seven_con_Au_redon_M7_redon1);






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

$total_seven_con_Au_M8_L1_redon_M8_redondeado1 =number_format($total_seven_con_Au_M8_L1, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M8_L1 =number_format($total_seven_con_Au_M8_L1_redon_M8_redondeado1);




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

$total_seven_con_Au_M8_L2_redon_M8_redondeado1 =number_format($total_seven_con_Au_M8_L2, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M8_L2 =number_format($total_seven_con_Au_M8_L2_redon_M8_redondeado1);



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

$total_seven_con_Au_M8_L3_redon_M8_redondeado1 =number_format($total_seven_con_Au_M8_L3, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M8_L3 =number_format($total_seven_con_Au_M8_L3_redon_M8_redondeado1);

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

$total_seven_con_Au_redon_M8_redon1 =number_format($total_seven_con_Au_redon_M8_aprox, 1, '.', '');   ///  ojoooooooooooooooooo

$total_seven_con_Au_redon_M8 =number_format($total_seven_con_Au_redon_M8_redon1);






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

$total_seven_con_Au_M9_L1_redon_M9_redondeado1 =number_format($total_seven_con_Au_M9_L1, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M9_L1 =number_format($total_seven_con_Au_M9_L1_redon_M9_redondeado1);




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

$total_seven_con_Au_M9_L2_redon_M9_redondeado1 =number_format($total_seven_con_Au_M9_L2, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M9_L2 =number_format($total_seven_con_Au_M9_L2_redon_M9_redondeado1);



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

$total_seven_con_Au_M9_L3_redon_M9_redondeado1 =number_format($total_seven_con_Au_M9_L3, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M9_L3 =number_format($total_seven_con_Au_M9_L3_redon_M9_redondeado1);

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

$total_seven_con_Au_redon_M9_redon1 =number_format($total_seven_con_Au_redon_M9_aprox, 1, '.', '');   ///  ojoooooooooooooooooo

$total_seven_con_Au_redon_M9 =number_format($total_seven_con_Au_redon_M9_redon1);







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

$total_seven_con_Au_M10_L1_redon_M10_redondeado1 =number_format($total_seven_con_Au_M10_L1, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M10_L1 =number_format($total_seven_con_Au_M10_L1_redon_M10_redondeado1);




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

$total_seven_con_Au_M10_L2_redon_M10_redondeado1 =number_format($total_seven_con_Au_M10_L2, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M10_L2 =number_format($total_seven_con_Au_M10_L2_redon_M10_redondeado1);



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

$total_seven_con_Au_M10_L3_redon_M10_redondeado1 =number_format($total_seven_con_Au_M10_L3, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M10_L3 =number_format($total_seven_con_Au_M10_L3_redon_M10_redondeado1);

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

$total_seven_con_Au_redon_M10_redon1 =number_format($total_seven_con_Au_redon_M10_aprox, 1, '.', '');   ///  ojoooooooooooooooooo

$total_seven_con_Au_redon_M10 =number_format($total_seven_con_Au_redon_M10_redon1);







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

$total_seven_con_Au_M11_L1_redon_M11_redondeado1 =number_format($total_seven_con_Au_M11_L1, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M11_L1 =number_format($total_seven_con_Au_M11_L1_redon_M11_redondeado1);




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

$total_seven_con_Au_M11_L2_redon_M11_redondeado1 =number_format($total_seven_con_Au_M11_L2, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M11_L2 =number_format($total_seven_con_Au_M11_L2_redon_M11_redondeado1);



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

$total_seven_con_Au_M11_L3_redon_M11_redondeado1 =number_format($total_seven_con_Au_M11_L3, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M11_L3 =number_format($total_seven_con_Au_M11_L3_redon_M11_redondeado1);

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

$total_seven_con_Au_redon_M11_redon1 =number_format($total_seven_con_Au_redon_M11_aprox, 1, '.', '');   ///  ojoooooooooooooooooo

$total_seven_con_Au_redon_M11 =number_format($total_seven_con_Au_redon_M11_redon1);







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

$total_seven_con_Au_M12_L1_redon_M12_redondeado1 =number_format($total_seven_con_Au_M12_L1, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M12_L1 =number_format($total_seven_con_Au_M12_L1_redon_M12_redondeado1);




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

$total_seven_con_Au_M12_L2_redon_M12_redondeado1 =number_format($total_seven_con_Au_M12_L2, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M12_L2 =number_format($total_seven_con_Au_M12_L2_redon_M12_redondeado1);



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

$total_seven_con_Au_M12_L3_redon_M12_redondeado1 =number_format($total_seven_con_Au_M12_L3, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M12_L3 =number_format($total_seven_con_Au_M12_L3_redon_M12_redondeado1);

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

$total_seven_con_Au_redon_M12_redon1 =number_format($total_seven_con_Au_redon_M12_aprox, 1, '.', '');   ///  ojoooooooooooooooooo

$total_seven_con_Au_redon_M12 =number_format($total_seven_con_Au_redon_M12_redon1);







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

$total_seven_con_Au_M13_L1_redon_M13_redondeado1 =number_format($total_seven_con_Au_M13_L1, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M13_L1 =number_format($total_seven_con_Au_M13_L1_redon_M13_redondeado1);




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

$total_seven_con_Au_M13_L2_redon_M13_redondeado1 =number_format($total_seven_con_Au_M13_L2, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M13_L2 =number_format($total_seven_con_Au_M13_L2_redon_M13_redondeado1);



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

$total_seven_con_Au_M13_L3_redon_M13_redondeado1 =number_format($total_seven_con_Au_M13_L3, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M13_L3 =number_format($total_seven_con_Au_M13_L3_redon_M13_redondeado1);

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

$total_seven_con_Au_redon_M13_redon1 =number_format($total_seven_con_Au_redon_M13_aprox, 1, '.', '');   ///  ojoooooooooooooooooo

$total_seven_con_Au_redon_M13 =number_format($total_seven_con_Au_redon_M13_redon1);





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

$total_seven_con_Au_M14_L1_redon_M14_redondeado1 =number_format($total_seven_con_Au_M14_L1, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M14_L1 =number_format($total_seven_con_Au_M14_L1_redon_M14_redondeado1);




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

$total_seven_con_Au_M14_L2_redon_M14_redondeado1 =number_format($total_seven_con_Au_M14_L2, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M14_L2 =number_format($total_seven_con_Au_M14_L2_redon_M14_redondeado1);



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

$total_seven_con_Au_M14_L3_redon_M14_redondeado1 =number_format($total_seven_con_Au_M14_L3, 1, '.', '');      ////        nuevoooooooooooooo

$total_seven_con_Au_redon_M14_L3 =number_format($total_seven_con_Au_M14_L3_redon_M14_redondeado1);

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

$total_seven_con_Au_redon_M14_redon1 =number_format($total_seven_con_Au_redon_M14_aprox, 1, '.', '');   ///  ojoooooooooooooooooo

$total_seven_con_Au_redon_M14 =number_format($total_seven_con_Au_redon_M14_redon1);

?>.








<?php

$firstape = strtok($row_datos_control['apellidos_estu'], ' ');

$lastape = strstr($row_datos_control['apellidos_estu'], ' ');


if ($lastape[1] != '') {

   $firstCharacterlastape = $lastape[1]; 
}

else {
    $firstCharacterlastape ='';
}
   

                                     echo $firstape; ?> <?php echo $firstCharacterlastape; ?>. 

                                




</TD>  

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
  <?php
     $cuenta_personal ='0';
     $suma_personal = '';
     $entre_cuanto = '';
     $color_a = $color_imp2;   
     $marquitaper ='';
     $total_seven_con_Au_redon_M1a = '';

     if ($total_seven_con_Au_redon_M1 >= 1 and $total_seven_con_Au_redon_M1 <= $el_puntaje_aprobatorio_prom) {
      $cuenta_personal = $cuenta_personal + 1;
      $color_a = red;
      $apla_mat1 = $apla_mat1 + 1;
    } 

     if ($total_seven_con_Au_redon_M1 == 0) {
      $total_seven_con_Au_redon_M1a = '';
    } 

    if ($total_seven_con_Au_redon_M1 >= 1) {
      $total_seven_con_Au_redon_M1a = $total_seven_con_Au_redon_M1;
      $tot_mat1 = $tot_mat1 + $total_seven_con_Au_redon_M1a;
      $div_mat1 = $div_mat1 + 1;

  $suma_personal = $suma_personal + $total_seven_con_Au_redon_M1a;
      $entre_cuanto = $entre_cuanto + 1;   
    } 


/*

  $total_seven_con_Au_redon_M1_L1tt = '';
if ($total_seven_con_Au_redon_M1_L1 > 0.1) {
  $total_seven_con_Au_redon_M1_L1tt = $total_seven_con_Au_redon_M1_L1;
}

  $total_seven_con_Au_redon_M1_L2tt = '';
if ($total_seven_con_Au_redon_M1_L2 > 0.1) {
  $total_seven_con_Au_redon_M1_L2tt = $total_seven_con_Au_redon_M1_L2;
}  

  $total_seven_con_Au_redon_M1_L3tt = '';
if ($total_seven_con_Au_redon_M1_L3 > 0.1) {
  $total_seven_con_Au_redon_M1_L3tt = $total_seven_con_Au_redon_M1_L3;
}

*/


  $total_seven_con_Au_redon_M1_L1tt = '';
if ($total_seven_con_Au_M1_L1 >= 0.1) {

$total_seven_con_Au_M1_L1_redondos =number_format($total_seven_con_Au_M1_L1);

  $total_seven_con_Au_redon_M1_L1tt = $total_seven_con_Au_M1_L1_redondos;
}


  $total_seven_con_Au_redon_M1_L2tt = '';
if ($total_seven_con_Au_M1_L2 >= 0.1) {

$total_seven_con_Au_M1_L2_redondos =number_format($total_seven_con_Au_M1_L2);

  $total_seven_con_Au_redon_M1_L2tt = $total_seven_con_Au_M1_L2_redondos;
}


  $total_seven_con_Au_redon_M1_L3tt = '';
if ($total_seven_con_Au_M1_L3 >= 0.1) {

$total_seven_con_Au_M1_L3_redondos =number_format($total_seven_con_Au_M1_L3);

  $total_seven_con_Au_redon_M1_L3tt = $total_seven_con_Au_M1_L3_redondos;
}




echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M1_L1tt."</span>";
 ?>        


</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M1_L2tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M1_L3tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
  
  <b><?php    

    echo "<span style=\"font-size: 10px; color:".$color_a."\" >".$total_seven_con_Au_redon_M1a."</span>";

 ?></b>         

</TD>



<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">  <b>
  
         <?php  $color_XX = 'orange';

         if ($row_datos_control_notasM1["rev_uno"] == '') {
                 $rev_unoxxx_form = '';

                 $color_XX = 'orange';
             }

             else     {    

$rev_unoxxx = $row_datos_control_notasM1["rev_uno"];
$rev_unoxxx_form =number_format($rev_unoxxx); 

                if ($rev_unoxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_XX = 'green';
                }
  }

    echo "<span style=\"font-size: 10px; color:".$color_XX."\" >".$rev_unoxxx_form."</span>";

 ?>  </b>

</TD>  


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">   <b>
       
         <?php    $color_YY = 'orange';

            if ($row_datos_control_notasM1["rev_dos"] == '') {
                 $rev_dosxxx_form = '';
                  $color_YY = 'orange';
             }

             else     {      

$rev_dosxxx = $row_datos_control_notasM1["rev_dos"];
$rev_dosxxx_form =number_format($rev_dosxxx);  

 if ($rev_dosxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_YY = 'green';
                }
 }

    echo "<span style=\"font-size: 10px; color:".$color_YY."\" >".$rev_dosxxx_form."</span>";

 ?>  </b>
</TD>








<TD class="miniborderleft" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
  <?php
   
     $color_a = $color_imp2;   
     $marquitaper ='';
     $total_seven_con_Au_redon_M22 = '';

     if ($total_seven_con_Au_redon_M2 >= 1 and $total_seven_con_Au_redon_M2 <= $el_puntaje_aprobatorio_prom) {
      $cuenta_personal = $cuenta_personal + 1;
      $color_a = red;
      $apla_mat2 = $apla_mat2 + 1;
    } 

     if ($total_seven_con_Au_redon_M2 == 0) {
      $total_seven_con_Au_redon_M22 = '';
    } 

    if ($total_seven_con_Au_redon_M2 >= 1) {
      $total_seven_con_Au_redon_M22 = $total_seven_con_Au_redon_M2;
      
      $tot_mat2 = $tot_mat2 + $total_seven_con_Au_redon_M22;
      $div_mat2 = $div_mat2 + 1;

  $suma_personal = $suma_personal + $total_seven_con_Au_redon_M22;
      $entre_cuanto = $entre_cuanto + 1;   
    } 

/*
  $total_seven_con_Au_redon_M2_L1tt = '';
if ($total_seven_con_Au_redon_M2_L1 > 0.1) {
  $total_seven_con_Au_redon_M2_L1tt = $total_seven_con_Au_redon_M2_L1;
}

  $total_seven_con_Au_redon_M2_L2tt = '';
if ($total_seven_con_Au_redon_M2_L2 > 0.1) {
  $total_seven_con_Au_redon_M2_L2tt = $total_seven_con_Au_redon_M2_L2;
}

  $total_seven_con_Au_redon_M2_L3tt = '';
if ($total_seven_con_Au_redon_M2_L3 > 0.1) {
  $total_seven_con_Au_redon_M2_L3tt = $total_seven_con_Au_redon_M2_L3;
}   */



   $total_seven_con_Au_redon_M2_L1tt = '';
if ($total_seven_con_Au_M2_L1 >= 0.1) {

$total_seven_con_Au_M2_L1_redondos =number_format($total_seven_con_Au_M2_L1);

  $total_seven_con_Au_redon_M2_L1tt = $total_seven_con_Au_M2_L1_redondos;
}


  $total_seven_con_Au_redon_M2_L2tt = '';
if ($total_seven_con_Au_M2_L2 >= 0.1) {

$total_seven_con_Au_M2_L2_redondos =number_format($total_seven_con_Au_M2_L2);

  $total_seven_con_Au_redon_M2_L2tt = $total_seven_con_Au_M2_L2_redondos;
}


  $total_seven_con_Au_redon_M2_L3tt = '';
if ($total_seven_con_Au_M2_L3 >= 0.1) {

$total_seven_con_Au_M2_L3_redondos =number_format($total_seven_con_Au_M2_L3);

  $total_seven_con_Au_redon_M2_L3tt = $total_seven_con_Au_M2_L3_redondos;
}







echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M2_L1tt."</span>";
 ?>        


</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M2_L2tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M2_L3tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
  
  <b><?php    

    echo "<span style=\"font-size: 10px; color:".$color_a."\" >".$total_seven_con_Au_redon_M22."</span>";

 ?></b>         

</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;"  align="center">  <b>
  
         <?php  $color_XX = 'orange';

         if ($row_datos_control_notasM2["rev_uno"] == '') {
                 $rev_unoxxx_form = '';

                 $color_XX = 'orange';
             }

             else     {    

$rev_unoxxx = $row_datos_control_notasM2["rev_uno"];
$rev_unoxxx_form =number_format($rev_unoxxx); 

                if ($rev_unoxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_XX = 'green';
                }
  }

    echo "<span style=\"font-size: 10px; color:".$color_XX."\" >".$rev_unoxxx_form."</span>";

 ?>  </b>

</TD>  


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;"  align="center">   <b>
       
         <?php    $color_YY = 'orange';

            if ($row_datos_control_notasM2["rev_dos"] == '') {
                 $rev_dosxxx_form = '';
                  $color_YY = 'orange';
             }

             else     {      

$rev_dosxxx = $row_datos_control_notasM2["rev_dos"];
$rev_dosxxx_form =number_format($rev_dosxxx);  

 if ($rev_dosxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_YY = 'green';
                }
 }

    echo "<span style=\"font-size: 10px; color:".$color_YY."\" >".$rev_dosxxx_form."</span>";

 ?>  </b>
</TD>





<TD class="miniborderleft" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
  <?php
   
     $color_a = $color_imp2;   
     $marquitaper ='';
     $total_seven_con_Au_redon_M33 = '';

     if ($total_seven_con_Au_redon_M3 >= 1 and $total_seven_con_Au_redon_M3 <= $el_puntaje_aprobatorio_prom) {
      $cuenta_personal = $cuenta_personal + 1;
      $color_a = red;
      $apla_mat3 = $apla_mat3 + 1;
    } 

     if ($total_seven_con_Au_redon_M3 == 0) {
      $total_seven_con_Au_redon_M33 = '';
    } 

    if ($total_seven_con_Au_redon_M3 >= 1) {
      $total_seven_con_Au_redon_M33 = $total_seven_con_Au_redon_M3;
      
      $tot_mat3 = $tot_mat3 + $total_seven_con_Au_redon_M33;
      $div_mat3 = $div_mat3 + 1;

  $suma_personal = $suma_personal + $total_seven_con_Au_redon_M33;
      $entre_cuanto = $entre_cuanto + 1;   
    } 

/*
  $total_seven_con_Au_redon_M3_L1tt = '';
if ($total_seven_con_Au_redon_M3_L1 > 0.1) {
  $total_seven_con_Au_redon_M3_L1tt = $total_seven_con_Au_redon_M3_L1;
}

  $total_seven_con_Au_redon_M3_L2tt = '';
if ($total_seven_con_Au_redon_M3_L2 > 0.1) {
  $total_seven_con_Au_redon_M3_L2tt = $total_seven_con_Au_redon_M3_L2;
}

  $total_seven_con_Au_redon_M3_L3tt = '';
if ($total_seven_con_Au_redon_M3_L3 > 0.1) {
  $total_seven_con_Au_redon_M3_L3tt = $total_seven_con_Au_redon_M3_L3;
} */

   $total_seven_con_Au_redon_M3_L1tt = '';
if ($total_seven_con_Au_M3_L1 >= 0.1) {

$total_seven_con_Au_M3_L1_redondos =number_format($total_seven_con_Au_M3_L1);

  $total_seven_con_Au_redon_M3_L1tt = $total_seven_con_Au_M3_L1_redondos;
}


  $total_seven_con_Au_redon_M3_L2tt = '';
if ($total_seven_con_Au_M3_L2 >= 0.1) {

$total_seven_con_Au_M3_L2_redondos =number_format($total_seven_con_Au_M3_L2);

  $total_seven_con_Au_redon_M3_L2tt = $total_seven_con_Au_M3_L2_redondos;
}


  $total_seven_con_Au_redon_M3_L3tt = '';
if ($total_seven_con_Au_M3_L3 >= 0.1) {

$total_seven_con_Au_M3_L3_redondos =number_format($total_seven_con_Au_M3_L3);

  $total_seven_con_Au_redon_M3_L3tt = $total_seven_con_Au_M3_L3_redondos;
}


echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M3_L1tt."</span>";
 ?>        


</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M3_L2tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M3_L3tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
  
  <b><?php    

    echo "<span style=\"font-size: 10px; color:".$color_a."\" >".$total_seven_con_Au_redon_M33."</span>";

 ?></b>         

</TD>




<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">  <b>
  
         <?php  $color_XX = 'orange';

         if ($row_datos_control_notasM3["rev_uno"] == '') {
                 $rev_unoxxx_form = '';

                 $color_XX = 'orange';
             }

             else     {    

$rev_unoxxx = $row_datos_control_notasM3["rev_uno"];
$rev_unoxxx_form =number_format($rev_unoxxx); 

                if ($rev_unoxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_XX = 'green';
                }
  }

    echo "<span style=\"font-size: 10px; color:".$color_XX."\" >".$rev_unoxxx_form."</span>";

 ?>  </b>

</TD>  


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">   <b>
       
         <?php    $color_YY = 'orange';

            if ($row_datos_control_notasM3["rev_dos"] == '') {
                 $rev_dosxxx_form = '';
                  $color_YY = 'orange';
             }

             else     {      

$rev_dosxxx = $row_datos_control_notasM3["rev_dos"];
$rev_dosxxx_form =number_format($rev_dosxxx);  

 if ($rev_dosxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_YY = 'green';
                }
 }

    echo "<span style=\"font-size: 10px; color:".$color_YY."\" >".$rev_dosxxx_form."</span>";

 ?>  </b>
</TD>








<TD class="miniborderleft" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
  <?php
   
     $color_a = $color_imp2;   
     $marquitaper ='';
     $total_seven_con_Au_redon_M44 = '';

     if ($total_seven_con_Au_redon_M4 >= 1 and $total_seven_con_Au_redon_M4 <= $el_puntaje_aprobatorio_prom) {
      $cuenta_personal = $cuenta_personal + 1;
      $color_a = red;
      $apla_mat4 = $apla_mat4 + 1;
    } 

     if ($total_seven_con_Au_redon_M4 == 0) {
      $total_seven_con_Au_redon_M44 = '';
    } 

    if ($total_seven_con_Au_redon_M4 >= 1) {
      $total_seven_con_Au_redon_M44 = $total_seven_con_Au_redon_M4;
      
      $tot_mat4 = $tot_mat4 + $total_seven_con_Au_redon_M44;
      $div_mat4 = $div_mat4 + 1;

  $suma_personal = $suma_personal + $total_seven_con_Au_redon_M44;
      $entre_cuanto = $entre_cuanto + 1;   
    } 

   $total_seven_con_Au_redon_M4_L1tt = '';
if ($total_seven_con_Au_M4_L1 >= 0.1) {

$total_seven_con_Au_M4_L1_redondos =number_format($total_seven_con_Au_M4_L1);

  $total_seven_con_Au_redon_M4_L1tt = $total_seven_con_Au_M4_L1_redondos;
}


  $total_seven_con_Au_redon_M4_L2tt = '';
if ($total_seven_con_Au_M4_L2 >= 0.1) {

$total_seven_con_Au_M4_L2_redondos =number_format($total_seven_con_Au_M4_L2);

  $total_seven_con_Au_redon_M4_L2tt = $total_seven_con_Au_M4_L2_redondos;
}


  $total_seven_con_Au_redon_M4_L3tt = '';
if ($total_seven_con_Au_M4_L3 >= 0.1) {

$total_seven_con_Au_M4_L3_redondos =number_format($total_seven_con_Au_M4_L3);

  $total_seven_con_Au_redon_M4_L3tt = $total_seven_con_Au_M4_L3_redondos;
}


echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M4_L1tt."</span>";
 ?>        


</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M4_L2tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M4_L3tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
  
  <b><?php    

    echo "<span style=\"font-size: 10px; color:".$color_a."\" >".$total_seven_con_Au_redon_M44."</span>";

 ?></b>         

</TD>



<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;"  align="center">  <b>
  
         <?php  $color_XX = 'orange';

         if ($row_datos_control_notasM4["rev_uno"] == '') {
                 $rev_unoxxx_form = '';

                 $color_XX = 'orange';
             }

             else     {    

$rev_unoxxx = $row_datos_control_notasM4["rev_uno"];
$rev_unoxxx_form =number_format($rev_unoxxx); 

                if ($rev_unoxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_XX = 'green';
                }
  }

    echo "<span style=\"font-size: 10px; color:".$color_XX."\" >".$rev_unoxxx_form."</span>";

 ?>  </b>

</TD>  


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;"  align="center">   <b>
       
         <?php    $color_YY = 'orange';

            if ($row_datos_control_notasM4["rev_dos"] == '') {
                 $rev_dosxxx_form = '';
                  $color_YY = 'orange';
             }

             else     {      

$rev_dosxxx = $row_datos_control_notasM4["rev_dos"];
$rev_dosxxx_form =number_format($rev_dosxxx);  

 if ($rev_dosxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_YY = 'green';
                }
 }

    echo "<span style=\"font-size: 10px; color:".$color_YY."\" >".$rev_dosxxx_form."</span>";

 ?>  </b>
</TD>




<TD class="miniborderleft" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
  <?php
   
     $color_a = $color_imp2;   
     $marquitaper ='';
     $total_seven_con_Au_redon_M55 = '';

     if ($total_seven_con_Au_redon_M5 >= 1 and $total_seven_con_Au_redon_M5 <= $el_puntaje_aprobatorio_prom) {
      $cuenta_personal = $cuenta_personal + 1;
      $color_a = red;
      $apla_mat5 = $apla_mat5 + 1;
    } 

     if ($total_seven_con_Au_redon_M5 == 0) {
      $total_seven_con_Au_redon_M55 = '';
    } 

    if ($total_seven_con_Au_redon_M5 >= 1) {
      $total_seven_con_Au_redon_M55 = $total_seven_con_Au_redon_M5;
      
      $tot_mat5 = $tot_mat5 + $total_seven_con_Au_redon_M55;
      $div_mat5 = $div_mat5 + 1;

  $suma_personal = $suma_personal + $total_seven_con_Au_redon_M55;
      $entre_cuanto = $entre_cuanto + 1;   
    } 


   $total_seven_con_Au_redon_M5_L1tt = '';
if ($total_seven_con_Au_M5_L1 >= 0.1) {

$total_seven_con_Au_M5_L1_redondos =number_format($total_seven_con_Au_M5_L1);

  $total_seven_con_Au_redon_M5_L1tt = $total_seven_con_Au_M5_L1_redondos;
}


  $total_seven_con_Au_redon_M5_L2tt = '';
if ($total_seven_con_Au_M5_L2 >= 0.1) {

$total_seven_con_Au_M5_L2_redondos =number_format($total_seven_con_Au_M5_L2);

  $total_seven_con_Au_redon_M5_L2tt = $total_seven_con_Au_M5_L2_redondos;
}


  $total_seven_con_Au_redon_M5_L3tt = '';
if ($total_seven_con_Au_M5_L3 >= 0.1) {

$total_seven_con_Au_M5_L3_redondos =number_format($total_seven_con_Au_M5_L3);

  $total_seven_con_Au_redon_M5_L3tt = $total_seven_con_Au_M5_L3_redondos;
}



echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M5_L1tt."</span>";
 ?>        


</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M5_L2tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M5_L3tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
  
  <b><?php    

    echo "<span style=\"font-size: 10px; color:".$color_a."\" >".$total_seven_con_Au_redon_M55."</span>";

 ?></b>         

</TD>




<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">  <b>
  
         <?php  $color_XX = 'orange';

         if ($row_datos_control_notasM5["rev_uno"] == '') {
                 $rev_unoxxx_form = '';

                 $color_XX = 'orange';
             }

             else     {    

$rev_unoxxx = $row_datos_control_notasM5["rev_uno"];
$rev_unoxxx_form =number_format($rev_unoxxx); 

                if ($rev_unoxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_XX = 'green';
                }
  }

    echo "<span style=\"font-size: 10px; color:".$color_XX."\" >".$rev_unoxxx_form."</span>";

 ?>  </b>

</TD>  


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">   <b>
       
         <?php    $color_YY = 'orange';

            if ($row_datos_control_notasM5["rev_dos"] == '') {
                 $rev_dosxxx_form = '';
                  $color_YY = 'orange';
             }

             else     {      

$rev_dosxxx = $row_datos_control_notasM5["rev_dos"];
$rev_dosxxx_form =number_format($rev_dosxxx);  

 if ($rev_dosxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_YY = 'green';
                }
 }

    echo "<span style=\"font-size: 10px; color:".$color_YY."\" >".$rev_dosxxx_form."</span>";

 ?>  </b>
</TD>






<TD class="miniborderleft" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
  <?php
   
     $color_a = $color_imp2;   
     $marquitaper ='';
     $total_seven_con_Au_redon_M66 = '';

     if ($total_seven_con_Au_redon_M6 >= 1 and $total_seven_con_Au_redon_M6 <= $el_puntaje_aprobatorio_prom) {
      $cuenta_personal = $cuenta_personal + 1;
      $color_a = red;
      $apla_mat6 = $apla_mat6 + 1;
    } 

     if ($total_seven_con_Au_redon_M6 == 0) {
      $total_seven_con_Au_redon_M66 = '';
    } 

    if ($total_seven_con_Au_redon_M6 >= 1) {
      $total_seven_con_Au_redon_M66 = $total_seven_con_Au_redon_M6;
      
      $tot_mat6 = $tot_mat6 + $total_seven_con_Au_redon_M66;
      $div_mat6 = $div_mat6 + 1;

  $suma_personal = $suma_personal + $total_seven_con_Au_redon_M66;
      $entre_cuanto = $entre_cuanto + 1;   
    } 


   $total_seven_con_Au_redon_M6_L1tt = '';
if ($total_seven_con_Au_M6_L1 >= 0.1) {

$total_seven_con_Au_M6_L1_redondos =number_format($total_seven_con_Au_M6_L1);

  $total_seven_con_Au_redon_M6_L1tt = $total_seven_con_Au_M6_L1_redondos;
}


  $total_seven_con_Au_redon_M6_L2tt = '';
if ($total_seven_con_Au_M6_L2 >= 0.1) {

$total_seven_con_Au_M6_L2_redondos =number_format($total_seven_con_Au_M6_L2);

  $total_seven_con_Au_redon_M6_L2tt = $total_seven_con_Au_M6_L2_redondos;
}


  $total_seven_con_Au_redon_M6_L3tt = '';
if ($total_seven_con_Au_M6_L3 >= 0.1) {

$total_seven_con_Au_M6_L3_redondos =number_format($total_seven_con_Au_M6_L3);

  $total_seven_con_Au_redon_M6_L3tt = $total_seven_con_Au_M6_L3_redondos;
}



echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M6_L1tt."</span>";
 ?>        


</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M6_L2tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M6_L3tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
  
  <b><?php    

    echo "<span style=\"font-size: 10px; color:".$color_a."\" >".$total_seven_con_Au_redon_M66."</span>";

 ?></b>         

</TD>



<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;"  align="center">  <b>
  
         <?php  $color_XX = 'orange';

         if ($row_datos_control_notasM6["rev_uno"] == '') {
                 $rev_unoxxx_form = '';

                 $color_XX = 'orange';
             }

             else     {    

$rev_unoxxx = $row_datos_control_notasM6["rev_uno"];
$rev_unoxxx_form =number_format($rev_unoxxx); 

                if ($rev_unoxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_XX = 'green';
                }
  }

    echo "<span style=\"font-size: 10px; color:".$color_XX."\" >".$rev_unoxxx_form."</span>";

 ?>  </b>

</TD>  


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;"  align="center">   <b>
       
         <?php    $color_YY = 'orange';

            if ($row_datos_control_notasM6["rev_dos"] == '') {
                 $rev_dosxxx_form = '';
                  $color_YY = 'orange';
             }

             else     {      

$rev_dosxxx = $row_datos_control_notasM6["rev_dos"];
$rev_dosxxx_form =number_format($rev_dosxxx);  

 if ($rev_dosxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_YY = 'green';
                }
 }

    echo "<span style=\"font-size: 10px; color:".$color_YY."\" >".$rev_dosxxx_form."</span>";

 ?>  </b>
</TD>







<TD class="miniborderleft" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
  <?php
   
     $color_a = $color_imp2;   
     $marquitaper ='';
     $total_seven_con_Au_redon_M77 = '';

     if ($total_seven_con_Au_redon_M7 >= 1 and $total_seven_con_Au_redon_M7 <= $el_puntaje_aprobatorio_prom) {
      $cuenta_personal = $cuenta_personal + 1;
      $color_a = red;
      $apla_mat7 = $apla_mat7 + 1;
    } 

     if ($total_seven_con_Au_redon_M7 == 0) {
      $total_seven_con_Au_redon_M77 = '';
    } 

    if ($total_seven_con_Au_redon_M7 >= 1) {
      $total_seven_con_Au_redon_M77 = $total_seven_con_Au_redon_M7;
      
      $tot_mat7 = $tot_mat7 + $total_seven_con_Au_redon_M77;
      $div_mat7 = $div_mat7 + 1;

  $suma_personal = $suma_personal + $total_seven_con_Au_redon_M77;
      $entre_cuanto = $entre_cuanto + 1;   
    } 



   $total_seven_con_Au_redon_M7_L1tt = '';
if ($total_seven_con_Au_M7_L1 >= 0.1) {

$total_seven_con_Au_M7_L1_redondos =number_format($total_seven_con_Au_M7_L1);

  $total_seven_con_Au_redon_M7_L1tt = $total_seven_con_Au_M7_L1_redondos;
}


  $total_seven_con_Au_redon_M7_L2tt = '';
if ($total_seven_con_Au_M7_L2 >= 0.1) {

$total_seven_con_Au_M7_L2_redondos =number_format($total_seven_con_Au_M7_L2);

  $total_seven_con_Au_redon_M7_L2tt = $total_seven_con_Au_M7_L2_redondos;
}


  $total_seven_con_Au_redon_M7_L3tt = '';
if ($total_seven_con_Au_M7_L3 >= 0.1) {

$total_seven_con_Au_M7_L3_redondos =number_format($total_seven_con_Au_M7_L3);

  $total_seven_con_Au_redon_M7_L3tt = $total_seven_con_Au_M7_L3_redondos;
}



echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M7_L1tt."</span>";
 ?>        


</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M7_L2tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M7_L3tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
  
  <b><?php    

    echo "<span style=\"font-size: 10px; color:".$color_a."\" >".$total_seven_con_Au_redon_M77."</span>";

 ?></b>         

</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">  <b>
  
         <?php  $color_XX = 'orange';

         if ($row_datos_control_notasM7["rev_uno"] == '') {
                 $rev_unoxxx_form = '';

                 $color_XX = 'orange';
             }

             else     {    

$rev_unoxxx = $row_datos_control_notasM7["rev_uno"];
$rev_unoxxx_form =number_format($rev_unoxxx); 

                if ($rev_unoxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_XX = 'green';
                }
  }

    echo "<span style=\"font-size: 10px; color:".$color_XX."\" >".$rev_unoxxx_form."</span>";

 ?>  </b>

</TD>  


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">   <b>
       
         <?php    $color_YY = 'orange';

            if ($row_datos_control_notasM7["rev_dos"] == '') {
                 $rev_dosxxx_form = '';
                  $color_YY = 'orange';
             }

             else     {      

$rev_dosxxx = $row_datos_control_notasM7["rev_dos"];
$rev_dosxxx_form =number_format($rev_dosxxx);  

 if ($rev_dosxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_YY = 'green';
                }
 }

    echo "<span style=\"font-size: 10px; color:".$color_YY."\" >".$rev_dosxxx_form."</span>";

 ?>  </b>
</TD>




<TD class="miniborderleft" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
  <?php
   
     $color_a = $color_imp2;   
     $marquitaper ='';
     $total_seven_con_Au_redon_M88 = '';

     if ($total_seven_con_Au_redon_M8 >= 1 and $total_seven_con_Au_redon_M8 <= $el_puntaje_aprobatorio_prom) {
      $cuenta_personal = $cuenta_personal + 1;
      $color_a = red;
      $apla_mat8 = $apla_mat8 + 1;
    } 

     if ($total_seven_con_Au_redon_M8 == 0) {
      $total_seven_con_Au_redon_M88 = '';
    } 

    if ($total_seven_con_Au_redon_M8 >= 1) {
      $total_seven_con_Au_redon_M88 = $total_seven_con_Au_redon_M8;
      
      $tot_mat8 = $tot_mat8 + $total_seven_con_Au_redon_M88;
      $div_mat8 = $div_mat8 + 1;

  $suma_personal = $suma_personal + $total_seven_con_Au_redon_M88;
      $entre_cuanto = $entre_cuanto + 1;   
    } 


   $total_seven_con_Au_redon_M8_L1tt = '';
if ($total_seven_con_Au_M8_L1 >= 0.1) {

$total_seven_con_Au_M8_L1_redondos =number_format($total_seven_con_Au_M8_L1);

  $total_seven_con_Au_redon_M8_L1tt = $total_seven_con_Au_M8_L1_redondos;
}


  $total_seven_con_Au_redon_M8_L2tt = '';
if ($total_seven_con_Au_M8_L2 >= 0.1) {

$total_seven_con_Au_M8_L2_redondos =number_format($total_seven_con_Au_M8_L2);

  $total_seven_con_Au_redon_M8_L2tt = $total_seven_con_Au_M8_L2_redondos;
}


  $total_seven_con_Au_redon_M8_L3tt = '';
if ($total_seven_con_Au_M8_L3 >= 0.1) {

$total_seven_con_Au_M8_L3_redondos =number_format($total_seven_con_Au_M8_L3);

  $total_seven_con_Au_redon_M8_L3tt = $total_seven_con_Au_M8_L3_redondos;
}



echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M8_L1tt."</span>";
 ?>        


</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M8_L2tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M8_L3tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
  
  <b><?php    

    echo "<span style=\"font-size: 10px; color:".$color_a."\" >".$total_seven_con_Au_redon_M88."</span>";

 ?></b>         

</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;"  align="center">  <b>
  
         <?php  $color_XX = 'orange';

         if ($row_datos_control_notasM8["rev_uno"] == '') {
                 $rev_unoxxx_form = '';

                 $color_XX = 'orange';
             }

             else     {    

$rev_unoxxx = $row_datos_control_notasM8["rev_uno"];
$rev_unoxxx_form =number_format($rev_unoxxx); 

                if ($rev_unoxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_XX = 'green';
                }
  }

    echo "<span style=\"font-size: 10px; color:".$color_XX."\" >".$rev_unoxxx_form."</span>";

 ?>  </b>

</TD>  


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;"  align="center">   <b>
       
         <?php    $color_YY = 'orange';

            if ($row_datos_control_notasM8["rev_dos"] == '') {
                 $rev_dosxxx_form = '';
                  $color_YY = 'orange';
             }

             else     {      

$rev_dosxxx = $row_datos_control_notasM8["rev_dos"];
$rev_dosxxx_form =number_format($rev_dosxxx);  

 if ($rev_dosxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_YY = 'green';
                }
 }

    echo "<span style=\"font-size: 10px; color:".$color_YY."\" >".$rev_dosxxx_form."</span>";

 ?>  </b>
</TD>





<TD class="miniborderleft" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
  <?php
   
     $color_a = $color_imp2;   
     $marquitaper ='';
     $total_seven_con_Au_redon_M99 = '';

     if ($total_seven_con_Au_redon_M9 >= 1 and $total_seven_con_Au_redon_M9 <= $el_puntaje_aprobatorio_prom) {
      $cuenta_personal = $cuenta_personal + 1;
      $color_a = red;
      $apla_mat9 = $apla_mat9 + 1;
    } 

     if ($total_seven_con_Au_redon_M9 == 0) {
      $total_seven_con_Au_redon_M99 = '';
    } 

    if ($total_seven_con_Au_redon_M9 >= 1) {
      $total_seven_con_Au_redon_M99 = $total_seven_con_Au_redon_M9;
      
      $tot_mat9 = $tot_mat9 + $total_seven_con_Au_redon_M99;
      $div_mat9 = $div_mat9 + 1;

  $suma_personal = $suma_personal + $total_seven_con_Au_redon_M99;
      $entre_cuanto = $entre_cuanto + 1;   
    } 


   $total_seven_con_Au_redon_M9_L1tt = '';
if ($total_seven_con_Au_M9_L1 >= 0.1) {

$total_seven_con_Au_M9_L1_redondos =number_format($total_seven_con_Au_M9_L1);

  $total_seven_con_Au_redon_M9_L1tt = $total_seven_con_Au_M9_L1_redondos;
}


  $total_seven_con_Au_redon_M9_L2tt = '';
if ($total_seven_con_Au_M9_L2 >= 0.1) {

$total_seven_con_Au_M9_L2_redondos =number_format($total_seven_con_Au_M9_L2);

  $total_seven_con_Au_redon_M9_L2tt = $total_seven_con_Au_M9_L2_redondos;
}


  $total_seven_con_Au_redon_M9_L3tt = '';
if ($total_seven_con_Au_M9_L3 >= 0.1) {

$total_seven_con_Au_M9_L3_redondos =number_format($total_seven_con_Au_M9_L3);

  $total_seven_con_Au_redon_M9_L3tt = $total_seven_con_Au_M9_L3_redondos;
}



echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M9_L1tt."</span>";
 ?>        


</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M9_L2tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M9_L3tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
  
  <b><?php    

    echo "<span style=\"font-size: 10px; color:".$color_a."\" >".$total_seven_con_Au_redon_M99."</span>";

 ?></b>         

</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">  <b>
  
         <?php  $color_XX = 'orange';

         if ($row_datos_control_notasM9["rev_uno"] == '') {
                 $rev_unoxxx_form = '';

                 $color_XX = 'orange';
             }

             else     {    

$rev_unoxxx = $row_datos_control_notasM9["rev_uno"];
$rev_unoxxx_form =number_format($rev_unoxxx); 

                if ($rev_unoxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_XX = 'green';
                }
  }

    echo "<span style=\"font-size: 10px; color:".$color_XX."\" >".$rev_unoxxx_form."</span>";

 ?>  </b>

</TD>  


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">   <b>
       
         <?php    $color_YY = 'orange';

            if ($row_datos_control_notasM9["rev_dos"] == '') {
                 $rev_dosxxx_form = '';
                  $color_YY = 'orange';
             }

             else     {      

$rev_dosxxx = $row_datos_control_notasM9["rev_dos"];
$rev_dosxxx_form =number_format($rev_dosxxx);  

 if ($rev_dosxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_YY = 'green';
                }
 }

    echo "<span style=\"font-size: 10px; color:".$color_YY."\" >".$rev_dosxxx_form."</span>";

 ?>  </b>
</TD>







<TD class="miniborderleft" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
  <?php
   
     $color_a = $color_imp2;   
     $marquitaper ='';
     $total_seven_con_Au_redon_M100 = '';

     if ($total_seven_con_Au_redon_M10 >= 1 and $total_seven_con_Au_redon_M10 <= $el_puntaje_aprobatorio_prom) {
      $cuenta_personal = $cuenta_personal + 1;
      $color_a = red;
      $apla_mat10 = $apla_mat10 + 1;
    } 

     if ($total_seven_con_Au_redon_M10 == 0) {
      $total_seven_con_Au_redon_M100 = '';
    } 

    if ($total_seven_con_Au_redon_M10 >= 1) {
      $total_seven_con_Au_redon_M100 = $total_seven_con_Au_redon_M10;
      
      $tot_mat10 = $tot_mat10 + $total_seven_con_Au_redon_M100;
      $div_mat10 = $div_mat10 + 1;

  $suma_personal = $suma_personal + $total_seven_con_Au_redon_M100;
      $entre_cuanto = $entre_cuanto + 1;   
    } 


   $total_seven_con_Au_redon_M10_L1tt = '';
if ($total_seven_con_Au_M10_L1 >= 0.1) {

$total_seven_con_Au_M10_L1_redondos =number_format($total_seven_con_Au_M10_L1);

  $total_seven_con_Au_redon_M10_L1tt = $total_seven_con_Au_M10_L1_redondos;
}


  $total_seven_con_Au_redon_M10_L2tt = '';
if ($total_seven_con_Au_M10_L2 >= 0.1) {

$total_seven_con_Au_M10_L2_redondos =number_format($total_seven_con_Au_M10_L2);

  $total_seven_con_Au_redon_M10_L2tt = $total_seven_con_Au_M10_L2_redondos;
}


  $total_seven_con_Au_redon_M10_L3tt = '';
if ($total_seven_con_Au_M10_L3 >= 0.1) {

$total_seven_con_Au_M10_L3_redondos =number_format($total_seven_con_Au_M10_L3);

  $total_seven_con_Au_redon_M10_L3tt = $total_seven_con_Au_M10_L3_redondos;
}




echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M10_L1tt."</span>";
 ?>        


</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M10_L2tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M10_L3tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
  
  <b><?php    

    echo "<span style=\"font-size: 10px; color:".$color_a."\" >".$total_seven_con_Au_redon_M100."</span>";

 ?></b>         

</TD>



<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;"  align="center">  <b>
  
         <?php  $color_XX = 'orange';

         if ($row_datos_control_notasM10["rev_uno"] == '') {
                 $rev_unoxxx_form = '';

                 $color_XX = 'orange';
             }

             else     {    

$rev_unoxxx = $row_datos_control_notasM10["rev_uno"];
$rev_unoxxx_form =number_format($rev_unoxxx); 

                if ($rev_unoxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_XX = 'green';
                }
  }

    echo "<span style=\"font-size: 10px; color:".$color_XX."\" >".$rev_unoxxx_form."</span>";

 ?>  </b>

</TD>  


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;"  align="center">   <b>
       
         <?php    $color_YY = 'orange';

            if ($row_datos_control_notasM10["rev_dos"] == '') {
                 $rev_dosxxx_form = '';
                  $color_YY = 'orange';
             }

             else     {      

$rev_dosxxx = $row_datos_control_notasM10["rev_dos"];
$rev_dosxxx_form =number_format($rev_dosxxx);  

 if ($rev_dosxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_YY = 'green';
                }
 }

    echo "<span style=\"font-size: 10px; color:".$color_YY."\" >".$rev_dosxxx_form."</span>";

 ?>  </b>
</TD>





<TD class="miniborderleft" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
  <?php
   
     $color_a = $color_imp2;   
     $marquitaper ='';
     $total_seven_con_Au_redon_M110 = '';

     if ($total_seven_con_Au_redon_M11 >= 1 and $total_seven_con_Au_redon_M11 <= $el_puntaje_aprobatorio_prom) {
      $cuenta_personal = $cuenta_personal + 1;
      $color_a = red;
      $apla_mat11 = $apla_mat11 + 1;
    } 

     if ($total_seven_con_Au_redon_M11 == 0) {
      $total_seven_con_Au_redon_M110 = '';
    } 

    if ($total_seven_con_Au_redon_M11 >= 1) {
      $total_seven_con_Au_redon_M110 = $total_seven_con_Au_redon_M11;
      
      $tot_mat11 = $tot_mat11 + $total_seven_con_Au_redon_M110;
      $div_mat11 = $div_mat11 + 1;

  $suma_personal = $suma_personal + $total_seven_con_Au_redon_M110;
      $entre_cuanto = $entre_cuanto + 1;   
    } 


   $total_seven_con_Au_redon_M11_L1tt = '';
if ($total_seven_con_Au_M11_L1 >= 0.1) {

$total_seven_con_Au_M11_L1_redondos =number_format($total_seven_con_Au_M11_L1);

  $total_seven_con_Au_redon_M11_L1tt = $total_seven_con_Au_M11_L1_redondos;
}


  $total_seven_con_Au_redon_M11_L2tt = '';
if ($total_seven_con_Au_M11_L2 >= 0.1) {

$total_seven_con_Au_M11_L2_redondos =number_format($total_seven_con_Au_M11_L2);

  $total_seven_con_Au_redon_M11_L2tt = $total_seven_con_Au_M11_L2_redondos;
}


  $total_seven_con_Au_redon_M11_L3tt = '';
if ($total_seven_con_Au_M11_L3 >= 0.1) {

$total_seven_con_Au_M11_L3_redondos =number_format($total_seven_con_Au_M11_L3);

  $total_seven_con_Au_redon_M11_L3tt = $total_seven_con_Au_M11_L3_redondos;
}



echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M11_L1tt."</span>";
 ?>        


</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M11_L2tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M11_L3tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
  
  <b><?php    

    echo "<span style=\"font-size: 10px; color:".$color_a."\" >".$total_seven_con_Au_redon_M110."</span>";

 ?></b>         

</TD>




<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">  <b>
  
         <?php  $color_XX = 'orange';

         if ($row_datos_control_notasM11["rev_uno"] == '') {
                 $rev_unoxxx_form = '';

                 $color_XX = 'orange';
             }

             else     {    

$rev_unoxxx = $row_datos_control_notasM11["rev_uno"];
$rev_unoxxx_form =number_format($rev_unoxxx); 

                if ($rev_unoxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_XX = 'green';
                }
  }

    echo "<span style=\"font-size: 10px; color:".$color_XX."\" >".$rev_unoxxx_form."</span>";

 ?>  </b>

</TD>  


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">   <b>
       
         <?php    $color_YY = 'orange';

            if ($row_datos_control_notasM11["rev_dos"] == '') {
                 $rev_dosxxx_form = '';
                  $color_YY = 'orange';
             }

             else     {      

$rev_dosxxx = $row_datos_control_notasM11["rev_dos"];
$rev_dosxxx_form =number_format($rev_dosxxx);  

 if ($rev_dosxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_YY = 'green';
                }
 }

    echo "<span style=\"font-size: 10px; color:".$color_YY."\" >".$rev_dosxxx_form."</span>";

 ?>  </b>
</TD>






<TD class="miniborderleft" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
  <?php
   
     $color_a = $color_imp2;   
     $marquitaper ='';
     $total_seven_con_Au_redon_M120 = '';

     if ($total_seven_con_Au_redon_M12 >= 1 and $total_seven_con_Au_redon_M12 <= $el_puntaje_aprobatorio_prom) {
      $cuenta_personal = $cuenta_personal + 1;
      $color_a = red;
      $apla_mat12 = $apla_mat12 + 1;
    } 

     if ($total_seven_con_Au_redon_M12 == 0) {
      $total_seven_con_Au_redon_M120 = '';
    } 

    if ($total_seven_con_Au_redon_M12 >= 1) {
      $total_seven_con_Au_redon_M120 = $total_seven_con_Au_redon_M12;
      
      $tot_mat12 = $tot_mat12 + $total_seven_con_Au_redon_M120;
      $div_mat12 = $div_mat12 + 1;

  $suma_personal = $suma_personal + $total_seven_con_Au_redon_M120;
      $entre_cuanto = $entre_cuanto + 1;   
    } 

   $total_seven_con_Au_redon_M12_L1tt = '';
if ($total_seven_con_Au_M12_L1 >= 0.1) {

$total_seven_con_Au_M12_L1_redondos =number_format($total_seven_con_Au_M12_L1);

  $total_seven_con_Au_redon_M12_L1tt = $total_seven_con_Au_M12_L1_redondos;
}


  $total_seven_con_Au_redon_M12_L2tt = '';
if ($total_seven_con_Au_M12_L2 >= 0.1) {

$total_seven_con_Au_M12_L2_redondos =number_format($total_seven_con_Au_M12_L2);

  $total_seven_con_Au_redon_M12_L2tt = $total_seven_con_Au_M12_L2_redondos;
}


  $total_seven_con_Au_redon_M12_L3tt = '';
if ($total_seven_con_Au_M12_L3 >= 0.1) {

$total_seven_con_Au_M12_L3_redondos =number_format($total_seven_con_Au_M12_L3);

  $total_seven_con_Au_redon_M12_L3tt = $total_seven_con_Au_M12_L3_redondos;
}




echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M12_L1tt."</span>";
 ?>        


</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M12_L2tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M12_L3tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
  
  <b><?php    

    echo "<span style=\"font-size: 10px; color:".$color_a."\" >".$total_seven_con_Au_redon_M120."</span>";

 ?></b>         

</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;"  align="center">  <b>
  
         <?php  $color_XX = 'orange';

         if ($row_datos_control_notasM12["rev_uno"] == '') {
                 $rev_unoxxx_form = '';

                 $color_XX = 'orange';
             }

             else     {    

$rev_unoxxx = $row_datos_control_notasM12["rev_uno"];
$rev_unoxxx_form =number_format($rev_unoxxx); 

                if ($rev_unoxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_XX = 'green';
                }
  }

    echo "<span style=\"font-size: 10px; color:".$color_XX."\" >".$rev_unoxxx_form."</span>";

 ?>  </b>

</TD>  


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;"  align="center">   <b>
       
         <?php    $color_YY = 'orange';

            if ($row_datos_control_notasM12["rev_dos"] == '') {
                 $rev_dosxxx_form = '';
                  $color_YY = 'orange';
             }

             else     {      

$rev_dosxxx = $row_datos_control_notasM12["rev_dos"];
$rev_dosxxx_form =number_format($rev_dosxxx);  

 if ($rev_dosxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_YY = 'green';
                }
 }

    echo "<span style=\"font-size: 10px; color:".$color_YY."\" >".$rev_dosxxx_form."</span>";

 ?>  </b>
</TD>





<TD class="miniborderleft" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
  <?php
   
     $color_a = $color_imp2;   
     $marquitaper ='';
     $total_seven_con_Au_redon_M130 = '';

     if ($total_seven_con_Au_redon_M13 >= 1 and $total_seven_con_Au_redon_M13 <= $el_puntaje_aprobatorio_prom) {
      $cuenta_personal = $cuenta_personal + 1;
      $color_a = red;
      $apla_mat13 = $apla_mat13 + 1;
    } 

     if ($total_seven_con_Au_redon_M13 == 0) {
      $total_seven_con_Au_redon_M130 = '';
    } 

    if ($total_seven_con_Au_redon_M13 >= 1) {
      $total_seven_con_Au_redon_M130 = $total_seven_con_Au_redon_M13;
      
      $tot_mat13 = $tot_mat13 + $total_seven_con_Au_redon_M130;
      $div_mat13 = $div_mat13 + 1;

  $suma_personal = $suma_personal + $total_seven_con_Au_redon_M130;
      $entre_cuanto = $entre_cuanto + 1;   
    } 


   $total_seven_con_Au_redon_M13_L1tt = '';
if ($total_seven_con_Au_M13_L1 >= 0.1) {

$total_seven_con_Au_M13_L1_redondos =number_format($total_seven_con_Au_M13_L1);

  $total_seven_con_Au_redon_M13_L1tt = $total_seven_con_Au_M13_L1_redondos;
}


  $total_seven_con_Au_redon_M13_L2tt = '';
if ($total_seven_con_Au_M13_L2 >= 0.1) {

$total_seven_con_Au_M13_L2_redondos =number_format($total_seven_con_Au_M13_L2);

  $total_seven_con_Au_redon_M13_L2tt = $total_seven_con_Au_M13_L2_redondos;
}


  $total_seven_con_Au_redon_M13_L3tt = '';
if ($total_seven_con_Au_M13_L3 >= 0.1) {

$total_seven_con_Au_M13_L3_redondos =number_format($total_seven_con_Au_M13_L3);

  $total_seven_con_Au_redon_M13_L3tt = $total_seven_con_Au_M13_L3_redondos;
}



echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M13_L1tt."</span>";
 ?>        


</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M13_L2tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M13_L3tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
  
  <b><?php    

    echo "<span style=\"font-size: 10px; color:".$color_a."\" >".$total_seven_con_Au_redon_M130."</span>";

 ?></b>         

</TD>



<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">  <b>
  
         <?php  $color_XX = 'orange';

         if ($row_datos_control_notasM13["rev_uno"] == '') {
                 $rev_unoxxx_form = '';

                 $color_XX = 'orange';
             }

             else     {    

$rev_unoxxx = $row_datos_control_notasM13["rev_uno"];
$rev_unoxxx_form =number_format($rev_unoxxx); 

                if ($rev_unoxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_XX = 'green';
                }
  }

    echo "<span style=\"font-size: 10px; color:".$color_XX."\" >".$rev_unoxxx_form."</span>";

 ?>  </b>

</TD>  


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; color:<?php echo $color_imp2; ?>;" align="center">   <b>
       
         <?php    $color_YY = 'orange';

            if ($row_datos_control_notasM13["rev_dos"] == '') {
                 $rev_dosxxx_form = '';
                  $color_YY = 'orange';
             }

             else     {      

$rev_dosxxx = $row_datos_control_notasM13["rev_dos"];
$rev_dosxxx_form =number_format($rev_dosxxx);  

 if ($rev_dosxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_YY = 'green';
                }
 }

    echo "<span style=\"font-size: 10px; color:".$color_YY."\" >".$rev_dosxxx_form."</span>";

 ?>  </b>
</TD>






<TD class="miniborderleft" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
  <?php
   
     $color_a = $color_imp2;   
     $marquitaper ='';
     $total_seven_con_Au_redon_M140 = '';

     if ($total_seven_con_Au_redon_M14 >= 1 and $total_seven_con_Au_redon_M14 <= $el_puntaje_aprobatorio_prom) {
      $cuenta_personal = $cuenta_personal + 1;
      $color_a = red;
      $apla_mat14 = $apla_mat14 + 1;
    } 

     if ($total_seven_con_Au_redon_M14 == 0) {
      $total_seven_con_Au_redon_M140 = '';
    } 

    if ($total_seven_con_Au_redon_M14 >= 1) {
      $total_seven_con_Au_redon_M140 = $total_seven_con_Au_redon_M14;
      
      $tot_mat14 = $tot_mat14 + $total_seven_con_Au_redon_M140;
      $div_mat14 = $div_mat14 + 1;

  $suma_personal = $suma_personal + $total_seven_con_Au_redon_M140;
      $entre_cuanto = $entre_cuanto + 1;   
    } 



   $total_seven_con_Au_redon_M14_L1tt = '';
if ($total_seven_con_Au_M14_L1 >= 0.1) {

$total_seven_con_Au_M14_L1_redondos =number_format($total_seven_con_Au_M14_L1);

  $total_seven_con_Au_redon_M14_L1tt = $total_seven_con_Au_M14_L1_redondos;
}


  $total_seven_con_Au_redon_M14_L2tt = '';
if ($total_seven_con_Au_M14_L2 >= 0.1) {

$total_seven_con_Au_M14_L2_redondos =number_format($total_seven_con_Au_M14_L2);

  $total_seven_con_Au_redon_M14_L2tt = $total_seven_con_Au_M14_L2_redondos;
}


  $total_seven_con_Au_redon_M14_L3tt = '';
if ($total_seven_con_Au_M14_L3 >= 0.1) {

$total_seven_con_Au_M14_L3_redondos =number_format($total_seven_con_Au_M14_L3);

  $total_seven_con_Au_redon_M14_L3tt = $total_seven_con_Au_M14_L3_redondos;
}



echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M14_L1tt."</span>";
 ?>        


</TD>

<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M14_L2tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php    
    echo "<span style=\"font-size: 10px; color:black;\" >".$total_seven_con_Au_redon_M14_L3tt."</span>";
 ?>
</TD>


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
  
  <b><?php    

    echo "<span style=\"font-size: 10px; color:".$color_a."\" >".$total_seven_con_Au_redon_M140."</span>";

 ?></b>         

</TD>



<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;"  align="center">  <b>
  
         <?php  $color_XX = 'orange';

         if ($row_datos_control_notasM14["rev_uno"] == '') {
                 $rev_unoxxx_form = '';

                 $color_XX = 'orange';
             }

             else     {    

$rev_unoxxx = $row_datos_control_notasM14["rev_uno"];
$rev_unoxxx_form =number_format($rev_unoxxx); 

                if ($rev_unoxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_XX = 'green';
                }
  }

    echo "<span style=\"font-size: 10px; color:".$color_XX."\" >".$rev_unoxxx_form."</span>";

 ?>  </b>

</TD>  


<TD class="miniborder" style="width:1.064%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;"  align="center">   <b>
       
         <?php    $color_YY = 'orange';

            if ($row_datos_control_notasM14["rev_dos"] == '') {
                 $rev_dosxxx_form = '';
                  $color_YY = 'orange';
             }

             else     {      

$rev_dosxxx = $row_datos_control_notasM14["rev_dos"];
$rev_dosxxx_form =number_format($rev_dosxxx);  

 if ($rev_dosxxx_form >= $el_puntaje_aprobatorio_neto) {
                    $color_YY = 'green';
                }
 }

    echo "<span style=\"font-size: 10px; color:".$color_YY."\" >".$rev_dosxxx_form."</span>";

 ?>  </b>
</TD>






<TD class="miniborderleft" style="width:2.041%; height:15px; font-size: 13px; color:<?php echo $color_imp2; ?>;" align="center">
   <!--  <span style="font-size: 10px;"><?php 

      $el_promeee_es = $suma_personal/$entre_cuanto;

      $el_promeee_es_redondeado1 =number_format($el_promeee_es, 1, '.', '');  
      $el_promeee_es_redon =number_format($el_promeee_es_redondeado1 );  

       echo $el_promeee_es_redondeado1;  ?> = </span> --> <b><?php echo $el_promeee_es_redon;  ?></b>
</TD>


<TD class="" style="width:0.225%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>


<TD class="miniborder" style="width:1.845%; height:15px; font-size: 14px;  color:<?php echo $color_imp2; ?>;" align="center">
   <?php echo $cuenta_personal; ?>
</TD>


</TR>









<?php
                }
                ?>


</TABLE>




<TABLE class="basetabla" style="margin-top: 6px;">



<TR >




<TD class="miniborder" style="width:5.385%; height:15px; font-size: 11px; color:<?php echo $color_imp1; ?>; padding-left: 4px;" align="right">
 Promedios:                                      
</TD>

<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
    <?php   $pro_todo_M1 = $tot_mat1/$div_mat1; $pro_todo_M1_redond =number_format($pro_todo_M1, 0, ',', '');  echo $pro_todo_M1_redond; ?>
</TD>

<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">      <?php   $pro_todo_M2 = $tot_mat2/$div_mat2; $pro_todo_M2_redond =number_format($pro_todo_M2, 0, ',', '');  echo $pro_todo_M2_redond; ?>
</TD>

<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
         <?php   $pro_todo_M3 = $tot_mat3/$div_mat3; $pro_todo_M3_redond =number_format($pro_todo_M3, 0, ',', '');  echo $pro_todo_M3_redond; ?>
</TD>

<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">     <?php   $pro_todo_M4 = $tot_mat4/$div_mat4; $pro_todo_M4_redond =number_format($pro_todo_M4, 0, ',', '');  echo $pro_todo_M4_redond; ?>
</TD>


<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
         <?php   $pro_todo_M5 = $tot_mat5/$div_mat5; $pro_todo_M5_redond =number_format($pro_todo_M5, 0, ',', '');  echo $pro_todo_M5_redond; ?>
</TD>


<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">     <?php   $pro_todo_M6 = $tot_mat6/$div_mat6; $pro_todo_M6_redond =number_format($pro_todo_M6, 0, ',', '');  echo $pro_todo_M6_redond; ?>
</TD>

<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
         <?php   $pro_todo_M7 = $tot_mat7/$div_mat7; $pro_todo_M7_redond =number_format($pro_todo_M7, 0, ',', '');  echo $pro_todo_M7_redond; ?>
</TD>




<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">  <?php   $pro_todo_M8 = $tot_mat8/$div_mat8; $pro_todo_M8_redond =number_format($pro_todo_M8, 0, ',', '');  echo $pro_todo_M8_redond; ?>
</TD>



<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
     <?php   $pro_todo_M9 = $tot_mat9/$div_mat9; $pro_todo_M9_redond =number_format($pro_todo_M9, 0, ',', '');  echo $pro_todo_M9_redond; ?>
</TD>


<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">  <?php   $pro_todo_M10 = $tot_mat10/$div_mat10; $pro_todo_M10_redond =number_format($pro_todo_M10, 0, ',', '');  echo $pro_todo_M10_redond; ?>
</TD>


<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
     <?php   $pro_todo_M11 = $tot_mat11/$div_mat11; $pro_todo_M11_redond =number_format($pro_todo_M11, 0, ',', '');  echo $pro_todo_M11_redond; ?>
</TD>

<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">  <?php   $pro_todo_M12 = $tot_mat12/$div_mat12; $pro_todo_M12_redond =number_format($pro_todo_M12, 0, ',', '');  echo $pro_todo_M12_redond; ?>
</TD>



<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
     <?php   $pro_todo_M13 = $tot_mat13/$div_mat13; $pro_todo_M13_redond =number_format($pro_todo_M13, 0, ',', '');  echo $pro_todo_M13_redond; ?>
</TD>

<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">  <?php   $pro_todo_M14 = $tot_mat14/$div_mat14; $pro_todo_M14_redond =number_format($pro_todo_M14, 0, ',', '');  echo $pro_todo_M14_redond; ?>
</TD>





<TD class="miniborderleft" style="width:2.041%; height:15px; font-size: 13px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="" style="width:0.225%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>


<TD class="miniborder" style="width:1.845%; height:15px; font-size: 14px;  color:<?php echo $color_imp2; ?>;" align="center">
</TD>


</TR>


</TABLE>



<TABLE class="basetabla" style="margin-top: 6px;">



<TR >




<TD class="miniborder" style="width:5.385%; height:15px; font-size: 11px; color:<?php echo $color_imp1; ?>; padding-left: 4px;" align="right">
Aplazados:                                      
</TD>

<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
    <?php echo $apla_mat1; ?>
</TD>



<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center"> <?php echo $apla_mat2; ?>
</TD>

<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
     <?php echo $apla_mat3; ?>
</TD>

<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center"> <?php echo $apla_mat4; ?>
</TD>


<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
     <?php echo $apla_mat5; ?>
</TD>


<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center"> <?php echo $apla_mat6; ?>
</TD>

<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
     <?php echo $apla_mat7; ?>
</TD>




<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center"> <?php echo $apla_mat8; ?>
</TD>



<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
     <?php echo $apla_mat9; ?>
</TD>


<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center"> <?php echo $apla_mat10; ?>
</TD>


<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
     <?php echo $apla_mat11; ?>
</TD>

<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center"> <?php echo $apla_mat12; ?>
</TD>



<TD class="miniborderleft" style="width:6.384%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
     <?php echo $apla_mat13; ?>
</TD>

<TD class="miniborder" style="width:6.384%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center"> <?php echo $apla_mat14; ?>
</TD>





<TD class="miniborderleft" style="width:2.041%; height:15px; font-size: 13px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="" style="width:0.225%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>


<TD class="miniborder" style="width:1.845%; height:15px; font-size: 14px;  color:<?php echo $color_imp2; ?>;" align="center">
</TD>


</TR>


</TABLE>



</page>















<?php

    $contentxx = ob_get_clean(); 

try
    {
        $hixx = $_POST["id_tituloxxx"];

       // $html2pdf = new HTML2PDF('L', 'LEGAL', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm 
        $html2pdf = new HTML2PDF('L', array(216,420), 'en', true, 'UTF-8', array(0, 0, 0, 0));

        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("Hoja_detalle_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>