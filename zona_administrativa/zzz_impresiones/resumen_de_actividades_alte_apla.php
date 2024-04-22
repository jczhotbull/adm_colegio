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

include("../../conectar.php");

$queryimp = "SELECT * FROM tb_colores_imp where activo = '1' LIMIT 1";

$datos_color = mysqli_query($enlace, $queryimp) or die(mysqli_error());

$row_datos_color = mysqli_fetch_array($datos_color );

mysqli_close($enlace);

$color_imp1 = $row_datos_color['color1'];
$color_imp2 = $row_datos_color['color2'];
$color_imp3 = $row_datos_color['color3'];


include("../../conectar.php");

$query_z_puntaje = "SELECT * FROM z_puntaje where pt_selecc = '1' LIMIT 1";

$datos_z_puntaje = mysqli_query($enlace, $query_z_puntaje) or die(mysqli_error());

$row_datos_z_puntaje = mysqli_fetch_array($datos_z_puntaje );

$la_mitad_es = $row_datos_z_puntaje['el_puntaje']/2;

$el_puntaje_completo_es = $row_datos_z_puntaje['el_puntaje'];

$el_puntaje_aprobatorio_aprox = $row_datos_z_puntaje['el_aproximado'];
$el_puntaje_aprobatorio_prom = $row_datos_z_puntaje['el_promedio'];

$el_puntaje_minimoooxx = $row_datos_z_puntaje['el_minimo'];

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

<page backtop="1mm" backbottom="1mm" backleft="1mm" backright="1mm">
   
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

Act. aplazadas actualizado el:


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


<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><b><?php echo $_POST["id_tituloxxx"]; ?></b> -&nbsp;&nbsp;Lapso: <u>   <span style="font-size: 14px; color:<?php echo $color_imp2; ?>;"><b><?php echo $_POST["id_lapsoxxx"]; ?></b></span>  </u>.
         

</TD>





</TR>








<TR>

<TD class="" style="width:32%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="cente">
   <b>Leyenda:</b> (_) : Actividad no entregada.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; () : Actividad aprobada.
</TD>

<TD class="" style="width:15%; height:auto; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><b><u>&nbsp;<?php echo $row_datos_queryperXX['periodo_escolar']; ?>&nbsp;</u></b>
</TD>

<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><?php echo $row_datos_queryplantel["www"]; ?>
                    

</TD>

</TR>











</TABLE>




<TABLE class="basetabla" cellspacing="-1">

<TR>
<TD class="" style="width:2%; height:90px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="" style="width:12%; height:90px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="" style="width:2%; height:90px; font-size: 14px; color:<?php echo $color_imp3; ?>; " align=""><div style="rotate:90; margin-top: 50px;">Asignaturas</div>
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


if ($lapso == '1°') {

$V1_M1 = $row_datos_controlmat['A11'];
$V2_M1 = $row_datos_controlmat['A12'];
$V3_M1 = $row_datos_controlmat['A13'];
$V4_M1 = $row_datos_controlmat['A14'];
$V5_M1 = $row_datos_controlmat['A15'];
$V6_M1 = $row_datos_controlmat['A16'];
$V7_M1 = $row_datos_controlmat['A17'];

$V1_M2 = $row_datos_controlmat['B11'];
$V2_M2 = $row_datos_controlmat['B12'];
$V3_M2 = $row_datos_controlmat['B13'];
$V4_M2 = $row_datos_controlmat['B14'];
$V5_M2 = $row_datos_controlmat['B15'];
$V6_M2 = $row_datos_controlmat['B16'];
$V7_M2 = $row_datos_controlmat['B17'];

$V1_M3 = $row_datos_controlmat['C11'];
$V2_M3 = $row_datos_controlmat['C12'];
$V3_M3 = $row_datos_controlmat['C13'];
$V4_M3 = $row_datos_controlmat['C14'];
$V5_M3 = $row_datos_controlmat['C15'];
$V6_M3 = $row_datos_controlmat['C16'];
$V7_M3 = $row_datos_controlmat['C17'];

$V1_M4 = $row_datos_controlmat['D11'];
$V2_M4 = $row_datos_controlmat['D12'];
$V3_M4 = $row_datos_controlmat['D13'];
$V4_M4 = $row_datos_controlmat['D14'];
$V5_M4 = $row_datos_controlmat['D15'];
$V6_M4 = $row_datos_controlmat['D16'];
$V7_M4 = $row_datos_controlmat['D17'];

$V1_M5 = $row_datos_controlmat['E11'];
$V2_M5 = $row_datos_controlmat['E12'];
$V3_M5 = $row_datos_controlmat['E13'];
$V4_M5 = $row_datos_controlmat['E14'];
$V5_M5 = $row_datos_controlmat['E15'];
$V6_M5 = $row_datos_controlmat['E16'];
$V7_M5 = $row_datos_controlmat['E17'];

$V1_M6 = $row_datos_controlmat['F11'];
$V2_M6 = $row_datos_controlmat['F12'];
$V3_M6 = $row_datos_controlmat['F13'];
$V4_M6 = $row_datos_controlmat['F14'];
$V5_M6 = $row_datos_controlmat['F15'];
$V6_M6 = $row_datos_controlmat['F16'];
$V7_M6 = $row_datos_controlmat['F17'];

$V1_M7 = $row_datos_controlmat['G11'];
$V2_M7 = $row_datos_controlmat['G12'];
$V3_M7 = $row_datos_controlmat['G13'];
$V4_M7 = $row_datos_controlmat['G14'];
$V5_M7 = $row_datos_controlmat['G15'];
$V6_M7 = $row_datos_controlmat['G16'];
$V7_M7 = $row_datos_controlmat['G17'];

$V1_M8 = $row_datos_controlmat['H11'];
$V2_M8 = $row_datos_controlmat['H12'];
$V3_M8 = $row_datos_controlmat['H13'];
$V4_M8 = $row_datos_controlmat['H14'];
$V5_M8 = $row_datos_controlmat['H15'];
$V6_M8 = $row_datos_controlmat['H16'];
$V7_M8 = $row_datos_controlmat['H17'];

$V1_M9 = $row_datos_controlmat['I11'];
$V2_M9 = $row_datos_controlmat['I12'];
$V3_M9 = $row_datos_controlmat['I13'];
$V4_M9 = $row_datos_controlmat['I14'];
$V5_M9 = $row_datos_controlmat['I15'];
$V6_M9 = $row_datos_controlmat['I16'];
$V7_M9 = $row_datos_controlmat['I17'];

$V1_M10 = $row_datos_controlmat['J11'];
$V2_M10 = $row_datos_controlmat['J12'];
$V3_M10 = $row_datos_controlmat['J13'];
$V4_M10 = $row_datos_controlmat['J14'];
$V5_M10 = $row_datos_controlmat['J15'];
$V6_M10 = $row_datos_controlmat['J16'];
$V7_M10 = $row_datos_controlmat['J17'];

$V1_M11 = $row_datos_controlmat['K11'];
$V2_M11 = $row_datos_controlmat['K12'];
$V3_M11 = $row_datos_controlmat['K13'];
$V4_M11 = $row_datos_controlmat['K14'];
$V5_M11 = $row_datos_controlmat['K15'];
$V6_M11 = $row_datos_controlmat['K16'];
$V7_M11 = $row_datos_controlmat['K17'];

$V1_M12 = $row_datos_controlmat['L11'];
$V2_M12 = $row_datos_controlmat['L12'];
$V3_M12 = $row_datos_controlmat['L13'];
$V4_M12 = $row_datos_controlmat['L14'];
$V5_M12 = $row_datos_controlmat['L15'];
$V6_M12 = $row_datos_controlmat['L16'];
$V7_M12 = $row_datos_controlmat['L17'];

$V1_M13 = $row_datos_controlmat['M11'];
$V2_M13 = $row_datos_controlmat['M12'];
$V3_M13 = $row_datos_controlmat['M13'];
$V4_M13 = $row_datos_controlmat['M14'];
$V5_M13 = $row_datos_controlmat['M15'];
$V6_M13 = $row_datos_controlmat['M16'];
$V7_M13 = $row_datos_controlmat['M17'];

$V1_M14 = $row_datos_controlmat['N11'];
$V2_M14 = $row_datos_controlmat['N12'];
$V3_M14 = $row_datos_controlmat['N13'];
$V4_M14 = $row_datos_controlmat['N14'];
$V5_M14 = $row_datos_controlmat['N15'];
$V6_M14 = $row_datos_controlmat['N16'];
$V7_M14 = $row_datos_controlmat['N17'];

}





if ($lapso == '2°') {

$V1_M1 = $row_datos_controlmat['A21'];
$V2_M1 = $row_datos_controlmat['A22'];
$V3_M1 = $row_datos_controlmat['A23'];
$V4_M1 = $row_datos_controlmat['A24'];
$V5_M1 = $row_datos_controlmat['A25'];
$V6_M1 = $row_datos_controlmat['A26'];
$V7_M1 = $row_datos_controlmat['A27'];

$V1_M2 = $row_datos_controlmat['B21'];
$V2_M2 = $row_datos_controlmat['B22'];
$V3_M2 = $row_datos_controlmat['B23'];
$V4_M2 = $row_datos_controlmat['B24'];
$V5_M2 = $row_datos_controlmat['B25'];
$V6_M2 = $row_datos_controlmat['B26'];
$V7_M2 = $row_datos_controlmat['B27'];

$V1_M3 = $row_datos_controlmat['C21'];
$V2_M3 = $row_datos_controlmat['C22'];
$V3_M3 = $row_datos_controlmat['C23'];
$V4_M3 = $row_datos_controlmat['C24'];
$V5_M3 = $row_datos_controlmat['C25'];
$V6_M3 = $row_datos_controlmat['C26'];
$V7_M3 = $row_datos_controlmat['C27'];

$V1_M4 = $row_datos_controlmat['D21'];
$V2_M4 = $row_datos_controlmat['D22'];
$V3_M4 = $row_datos_controlmat['D23'];
$V4_M4 = $row_datos_controlmat['D24'];
$V5_M4 = $row_datos_controlmat['D25'];
$V6_M4 = $row_datos_controlmat['D26'];
$V7_M4 = $row_datos_controlmat['D27'];

$V1_M5 = $row_datos_controlmat['E21'];
$V2_M5 = $row_datos_controlmat['E22'];
$V3_M5 = $row_datos_controlmat['E23'];
$V4_M5 = $row_datos_controlmat['E24'];
$V5_M5 = $row_datos_controlmat['E25'];
$V6_M5 = $row_datos_controlmat['E26'];
$V7_M5 = $row_datos_controlmat['E27'];

$V1_M6 = $row_datos_controlmat['F21'];
$V2_M6 = $row_datos_controlmat['F22'];
$V3_M6 = $row_datos_controlmat['F23'];
$V4_M6 = $row_datos_controlmat['F24'];
$V5_M6 = $row_datos_controlmat['F25'];
$V6_M6 = $row_datos_controlmat['F26'];
$V7_M6 = $row_datos_controlmat['F27'];

$V1_M7 = $row_datos_controlmat['G21'];
$V2_M7 = $row_datos_controlmat['G22'];
$V3_M7 = $row_datos_controlmat['G23'];
$V4_M7 = $row_datos_controlmat['G24'];
$V5_M7 = $row_datos_controlmat['G25'];
$V6_M7 = $row_datos_controlmat['G26'];
$V7_M7 = $row_datos_controlmat['G27'];

$V1_M8 = $row_datos_controlmat['H21'];
$V2_M8 = $row_datos_controlmat['H22'];
$V3_M8 = $row_datos_controlmat['H23'];
$V4_M8 = $row_datos_controlmat['H24'];
$V5_M8 = $row_datos_controlmat['H25'];
$V6_M8 = $row_datos_controlmat['H26'];
$V7_M8 = $row_datos_controlmat['H27'];

$V1_M9 = $row_datos_controlmat['I21'];
$V2_M9 = $row_datos_controlmat['I22'];
$V3_M9 = $row_datos_controlmat['I23'];
$V4_M9 = $row_datos_controlmat['I24'];
$V5_M9 = $row_datos_controlmat['I25'];
$V6_M9 = $row_datos_controlmat['I26'];
$V7_M9 = $row_datos_controlmat['I27'];

$V1_M10 = $row_datos_controlmat['J21'];
$V2_M10 = $row_datos_controlmat['J22'];
$V3_M10 = $row_datos_controlmat['J23'];
$V4_M10 = $row_datos_controlmat['J24'];
$V5_M10 = $row_datos_controlmat['J25'];
$V6_M10 = $row_datos_controlmat['J26'];
$V7_M10 = $row_datos_controlmat['J27'];

$V1_M11 = $row_datos_controlmat['K21'];
$V2_M11 = $row_datos_controlmat['K22'];
$V3_M11 = $row_datos_controlmat['K23'];
$V4_M11 = $row_datos_controlmat['K24'];
$V5_M11 = $row_datos_controlmat['K25'];
$V6_M11 = $row_datos_controlmat['K26'];
$V7_M11 = $row_datos_controlmat['K27'];

$V1_M12 = $row_datos_controlmat['L21'];
$V2_M12 = $row_datos_controlmat['L22'];
$V3_M12 = $row_datos_controlmat['L23'];
$V4_M12 = $row_datos_controlmat['L24'];
$V5_M12 = $row_datos_controlmat['L25'];
$V6_M12 = $row_datos_controlmat['L26'];
$V7_M12 = $row_datos_controlmat['L27'];

$V1_M13 = $row_datos_controlmat['M21'];
$V2_M13 = $row_datos_controlmat['M22'];
$V3_M13 = $row_datos_controlmat['M23'];
$V4_M13 = $row_datos_controlmat['M24'];
$V5_M13 = $row_datos_controlmat['M25'];
$V6_M13 = $row_datos_controlmat['M26'];
$V7_M13 = $row_datos_controlmat['M27'];

$V1_M14 = $row_datos_controlmat['N21'];
$V2_M14 = $row_datos_controlmat['N22'];
$V3_M14 = $row_datos_controlmat['N23'];
$V4_M14 = $row_datos_controlmat['N24'];
$V5_M14 = $row_datos_controlmat['N25'];
$V6_M14 = $row_datos_controlmat['N26'];
$V7_M14 = $row_datos_controlmat['N27'];

}




if ($lapso == '3°') {

$V1_M1 = $row_datos_controlmat['A31'];
$V2_M1 = $row_datos_controlmat['A32'];
$V3_M1 = $row_datos_controlmat['A33'];
$V4_M1 = $row_datos_controlmat['A34'];
$V5_M1 = $row_datos_controlmat['A35'];
$V6_M1 = $row_datos_controlmat['A36'];
$V7_M1 = $row_datos_controlmat['A37'];

$V1_M2 = $row_datos_controlmat['B31'];
$V2_M2 = $row_datos_controlmat['B32'];
$V3_M2 = $row_datos_controlmat['B33'];
$V4_M2 = $row_datos_controlmat['B34'];
$V5_M2 = $row_datos_controlmat['B35'];
$V6_M2 = $row_datos_controlmat['B36'];
$V7_M2 = $row_datos_controlmat['B37'];

$V1_M3 = $row_datos_controlmat['C31'];
$V2_M3 = $row_datos_controlmat['C32'];
$V3_M3 = $row_datos_controlmat['C33'];
$V4_M3 = $row_datos_controlmat['C34'];
$V5_M3 = $row_datos_controlmat['C35'];
$V6_M3 = $row_datos_controlmat['C36'];
$V7_M3 = $row_datos_controlmat['C37'];

$V1_M4 = $row_datos_controlmat['D31'];
$V2_M4 = $row_datos_controlmat['D32'];
$V3_M4 = $row_datos_controlmat['D33'];
$V4_M4 = $row_datos_controlmat['D34'];
$V5_M4 = $row_datos_controlmat['D35'];
$V6_M4 = $row_datos_controlmat['D36'];
$V7_M4 = $row_datos_controlmat['D37'];

$V1_M5 = $row_datos_controlmat['E31'];
$V2_M5 = $row_datos_controlmat['E32'];
$V3_M5 = $row_datos_controlmat['E33'];
$V4_M5 = $row_datos_controlmat['E34'];
$V5_M5 = $row_datos_controlmat['E35'];
$V6_M5 = $row_datos_controlmat['E36'];
$V7_M5 = $row_datos_controlmat['E37'];

$V1_M6 = $row_datos_controlmat['F31'];
$V2_M6 = $row_datos_controlmat['F32'];
$V3_M6 = $row_datos_controlmat['F33'];
$V4_M6 = $row_datos_controlmat['F34'];
$V5_M6 = $row_datos_controlmat['F35'];
$V6_M6 = $row_datos_controlmat['F36'];
$V7_M6 = $row_datos_controlmat['F37'];

$V1_M7 = $row_datos_controlmat['G31'];
$V2_M7 = $row_datos_controlmat['G32'];
$V3_M7 = $row_datos_controlmat['G33'];
$V4_M7 = $row_datos_controlmat['G34'];
$V5_M7 = $row_datos_controlmat['G35'];
$V6_M7 = $row_datos_controlmat['G36'];
$V7_M7 = $row_datos_controlmat['G37'];

$V1_M8 = $row_datos_controlmat['H31'];
$V2_M8 = $row_datos_controlmat['H32'];
$V3_M8 = $row_datos_controlmat['H33'];
$V4_M8 = $row_datos_controlmat['H34'];
$V5_M8 = $row_datos_controlmat['H35'];
$V6_M8 = $row_datos_controlmat['H36'];
$V7_M8 = $row_datos_controlmat['H37'];

$V1_M9 = $row_datos_controlmat['I31'];
$V2_M9 = $row_datos_controlmat['I32'];
$V3_M9 = $row_datos_controlmat['I33'];
$V4_M9 = $row_datos_controlmat['I34'];
$V5_M9 = $row_datos_controlmat['I35'];
$V6_M9 = $row_datos_controlmat['I36'];
$V7_M9 = $row_datos_controlmat['I37'];

$V1_M10 = $row_datos_controlmat['J31'];
$V2_M10 = $row_datos_controlmat['J32'];
$V3_M10 = $row_datos_controlmat['J33'];
$V4_M10 = $row_datos_controlmat['J34'];
$V5_M10 = $row_datos_controlmat['J35'];
$V6_M10 = $row_datos_controlmat['J36'];
$V7_M10 = $row_datos_controlmat['J37'];

$V1_M11 = $row_datos_controlmat['K31'];
$V2_M11 = $row_datos_controlmat['K32'];
$V3_M11 = $row_datos_controlmat['K33'];
$V4_M11 = $row_datos_controlmat['K34'];
$V5_M11 = $row_datos_controlmat['K35'];
$V6_M11 = $row_datos_controlmat['K36'];
$V7_M11 = $row_datos_controlmat['K37'];

$V1_M12 = $row_datos_controlmat['L31'];
$V2_M12 = $row_datos_controlmat['L32'];
$V3_M12 = $row_datos_controlmat['L33'];
$V4_M12 = $row_datos_controlmat['L34'];
$V5_M12 = $row_datos_controlmat['L35'];
$V6_M12 = $row_datos_controlmat['L36'];
$V7_M12 = $row_datos_controlmat['L37'];

$V1_M13 = $row_datos_controlmat['M31'];
$V2_M13 = $row_datos_controlmat['M32'];
$V3_M13 = $row_datos_controlmat['M33'];
$V4_M13 = $row_datos_controlmat['M34'];
$V5_M13 = $row_datos_controlmat['M35'];
$V6_M13 = $row_datos_controlmat['M36'];
$V7_M13 = $row_datos_controlmat['M37'];

$V1_M14 = $row_datos_controlmat['N31'];
$V2_M14 = $row_datos_controlmat['N32'];
$V3_M14 = $row_datos_controlmat['N33'];
$V4_M14 = $row_datos_controlmat['N34'];
$V5_M14 = $row_datos_controlmat['N35'];
$V6_M14 = $row_datos_controlmat['N36'];
$V7_M14 = $row_datos_controlmat['N37'];

}



$para_el_porc_V1_M1 = ($V1_M1 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M1 = ($V2_M1 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M1 = ($V3_M1 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M1 = ($V4_M1 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M1 = ($V5_M1 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M1 = ($V6_M1 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M1 = ($V7_M1 * $el_puntaje_completo_es)/100;


$para_el_porc_V1_M2 = ($V1_M2 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M2 = ($V2_M2 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M2 = ($V3_M2 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M2 = ($V4_M2 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M2 = ($V5_M2 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M2 = ($V6_M2 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M2 = ($V7_M2 * $el_puntaje_completo_es)/100;


$para_el_porc_V1_M3 = ($V1_M3 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M3 = ($V2_M3 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M3 = ($V3_M3 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M3 = ($V4_M3 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M3 = ($V5_M3 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M3 = ($V6_M3 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M3 = ($V7_M3 * $el_puntaje_completo_es)/100;


$para_el_porc_V1_M4 = ($V1_M4 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M4 = ($V2_M4 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M4 = ($V3_M4 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M4 = ($V4_M4 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M4 = ($V5_M4 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M4 = ($V6_M4 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M4 = ($V7_M4 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M5 = ($V1_M5 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M5 = ($V2_M5 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M5 = ($V3_M5 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M5 = ($V4_M5 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M5 = ($V5_M5 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M5 = ($V6_M5 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M5 = ($V7_M5 * $el_puntaje_completo_es)/100;


$para_el_porc_V1_M6 = ($V1_M6 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M6 = ($V2_M6 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M6 = ($V3_M6 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M6 = ($V4_M6 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M6 = ($V5_M6 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M6 = ($V6_M6 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M6 = ($V7_M6 * $el_puntaje_completo_es)/100;


$para_el_porc_V1_M7 = ($V1_M7 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M7 = ($V2_M7 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M7 = ($V3_M7 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M7 = ($V4_M7 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M7 = ($V5_M7 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M7 = ($V6_M7 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M7 = ($V7_M7 * $el_puntaje_completo_es)/100;


$para_el_porc_V1_M8 = ($V1_M8 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M8 = ($V2_M8 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M8 = ($V3_M8 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M8 = ($V4_M8 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M8 = ($V5_M8 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M8 = ($V6_M8 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M8 = ($V7_M8 * $el_puntaje_completo_es)/100;


$para_el_porc_V1_M9 = ($V1_M9 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M9 = ($V2_M9 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M9 = ($V3_M9 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M9 = ($V4_M9 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M9 = ($V5_M9 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M9 = ($V6_M9 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M9 = ($V7_M9 * $el_puntaje_completo_es)/100;


$para_el_porc_V1_M10 = ($V1_M10 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M10 = ($V2_M10 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M10 = ($V3_M10 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M10 = ($V4_M10 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M10 = ($V5_M10 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M10 = ($V6_M10 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M10 = ($V7_M10 * $el_puntaje_completo_es)/100;

$para_el_porc_V1_M11 = ($V1_M11 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M11 = ($V2_M11 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M11 = ($V3_M11 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M11 = ($V4_M11 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M11 = ($V5_M11 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M11 = ($V6_M11 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M11 = ($V7_M11 * $el_puntaje_completo_es)/100;


$para_el_porc_V1_M12 = ($V1_M12 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M12 = ($V2_M12 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M12 = ($V3_M12 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M12 = ($V4_M12 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M12 = ($V5_M12 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M12 = ($V6_M12 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M12 = ($V7_M12 * $el_puntaje_completo_es)/100;


$para_el_porc_V1_M13 = ($V1_M13 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M13 = ($V2_M13 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M13 = ($V3_M13 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M13 = ($V4_M13 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M13 = ($V5_M13 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M13 = ($V6_M13 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M13 = ($V7_M13 * $el_puntaje_completo_es)/100;


$para_el_porc_V1_M14 = ($V1_M14 * $el_puntaje_completo_es)/100;
$para_el_porc_V2_M14 = ($V2_M14 * $el_puntaje_completo_es)/100;
$para_el_porc_V3_M14 = ($V3_M14 * $el_puntaje_completo_es)/100;
$para_el_porc_V4_M14 = ($V4_M14 * $el_puntaje_completo_es)/100;
$para_el_porc_V5_M14 = ($V5_M14 * $el_puntaje_completo_es)/100;
$para_el_porc_V6_M14 = ($V6_M14 * $el_puntaje_completo_es)/100;
$para_el_porc_V7_M14 = ($V7_M14 * $el_puntaje_completo_es)/100;



?>









<TD class="miniborder" style="width:6%; height:90px; font-size: 13px; color:<?php echo $color_imp2; ?>;" align="center">
    <div style="rotate:90; margin-bottom: 2px; margin-top: 60px; "><b><?php echo $row_datos_controlmat['a_aaa'];?></b></div>
</TD>
<TD class="miniborder" style="width:6%; height:90px; font-size: 13px; background-color:<?php echo $back_emergency; ?>; 
color:<?php echo $color_imp2; ?>;" align="center">
    <div style="rotate:90; margin-bottom: 2px; margin-top: 60px;"><b><?php echo $row_datos_controlmat['b_bbb'];?></b></div>
</TD>




<TD class="miniborderleft" style="width:6%; height:90px; font-size: 13px; color:<?php echo $color_imp2; ?>;" align="center">
    <div style="rotate:90; margin-bottom: 2px; margin-top: 60px; "><b><?php echo $row_datos_controlmat['c_ccc'];?></b></div>
</TD>


<TD class="miniborder" style="width:6%; height:90px; font-size: 13px; background-color:<?php echo $back_emergency; ?>; 
color:<?php echo $color_imp2; ?>;" align="center">
    <div style="rotate:90; margin-bottom: 2px; margin-top: 60px; "><b><?php echo $row_datos_controlmat['d_ddd'];?></b></div>
</TD>





<TD class="miniborderleft" style="width:6%; height:90px; font-size: 13px; color:<?php echo $color_imp2; ?>;" align="center">
    <div style="rotate:90; margin-bottom: 2px; margin-top: 60px; "><b><?php echo $row_datos_controlmat['e_eee'];?></b></div>
</TD>
<TD class="miniborder" style="width:6%; height:90px; font-size: 13px; background-color:<?php echo $back_emergency; ?>; 
color:<?php echo $color_imp2; ?>;" align="center">
    <div style="rotate:90; margin-bottom: 2px; margin-top: 60px;"><b><?php echo $row_datos_controlmat['f_fff'];?></b></div>
</TD>




<TD class="miniborderleft" style="width:6%; height:90px; font-size: 13px; color:<?php echo $color_imp2; ?>;" align="center">
    <div style="rotate:90; margin-bottom: 2px; margin-top: 60px; "><b><?php echo $row_datos_controlmat['g_ggg'];?></b></div>
</TD>
<TD class="miniborder" style="width:6%; height:90px; font-size: 13px; background-color:<?php echo $back_emergency; ?>; 
color:<?php echo $color_imp2; ?>;" align="center">
    <div style="rotate:90; margin-bottom: 2px; margin-top: 60px;"><b><?php echo $row_datos_controlmat['h_hhh'];?></b></div>
</TD>





<TD class="miniborderleft" style="width:6%; height:90px; font-size: 13px; color:<?php echo $color_imp2; ?>;" align="center">
    <div style="rotate:90; margin-bottom: 2px; margin-top: 60px; "><b><?php echo $row_datos_controlmat['i_iii'];?></b></div>
</TD>
<TD class="miniborder" style="width:6%; height:90px; font-size: 13px; background-color:<?php echo $back_emergency; ?>; 
color:<?php echo $color_imp2; ?>;" align="center">
    <div style="rotate:90; margin-bottom: 2px; margin-top: 60px;"><b><?php echo $row_datos_controlmat['j_jjj'];?></b></div>
</TD>




<TD class="miniborderleft" style="width:6%; height:90px; font-size: 13px; color:<?php echo $color_imp2; ?>;" align="center">
    <div style="rotate:90; margin-bottom: 2px; margin-top: 60px;"><b><?php echo $row_datos_controlmat['k_kkk'];?></b></div>
</TD>
<TD class="miniborder" style="width:6%; height:90px; font-size: 13px; background-color:<?php echo $back_emergency; ?>; 
color:<?php echo $color_imp2; ?>;" align="center">
    <div style="rotate:90; margin-bottom: 2px; margin-top: 60px;"><b><?php echo $row_datos_controlmat['l_lll'];?></b></div>
</TD>




<TD class="miniborderleft" style="width:6%; height:90px; font-size: 13px; color:<?php echo $color_imp2; ?>;" align="center">
    <div style="rotate:90; margin-bottom: 2px; margin-top: 60px; "><b><?php echo $row_datos_controlmat['m_mmm'];?></b></div>
</TD>
<TD class="miniborder" style="width:6%; height:90px; font-size: 13px; background-color:<?php echo $back_emergency; ?>; 
color:<?php echo $color_imp2; ?>;" align="center">
    <div style="rotate:90; margin-bottom: 2px; margin-top: 60px;"><b><?php echo $row_datos_controlmat['n_nnn'];?></b></div>
</TD>










</TR>


</TABLE>







<TABLE class="basetabla" style="margin-top: 4px;" cellspacing="-1">


<TR >

<TD class="miniborder" style="width:2%; height:15px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><b>N°</b>
</TD>

<TD class="" style="width:14%; height:15px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="right">Ponderación:&nbsp;&nbsp;
</TD>

<?php 
if ($row_datos_controlmat['a_abrev'] == '') {
 $nn1 = '';   # code...
}
else {
   $nn1 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborder" style="width:6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn1; ?>
</TD>


<?php 
if ($row_datos_controlmat['b_abrev'] == '') {
 $nn2 = '';   # code...
}
else {
   $nn2 = $el_puntaje_completo_es;  
}
?>



<TD class="miniborder" style="width:6%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php echo $nn2; ?>
</TD>

<?php 
if ($row_datos_controlmat['c_abrev'] == '') {
 $nn3 = '';   # code...
}
else {
   $nn3 = $el_puntaje_completo_es;  
}
?>



<TD class="miniborderleft" style="width:6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn3; ?>
</TD>

<?php 
if ($row_datos_controlmat['d_abrev'] == '') {
 $nn4 = '';   # code...
}
else {
   $nn4 = $el_puntaje_completo_es;  
}
?>


<TD class="miniborder" style="width:6%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php echo $nn4; ?>
</TD>

<?php 
if ($row_datos_controlmat['e_abrev'] == '') {
 $nn5 = '';   # code...
}
else {
   $nn5 = $el_puntaje_completo_es;  
}
?>


<TD class="miniborderleft" style="width:6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn5; ?>
</TD>


<?php 
if ($row_datos_controlmat['f_abrev'] == '') {
 $nn6 = '';   # code...
}
else {
   $nn6 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborder" style="width:6%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php echo $nn6; ?>
</TD>


<?php 
if ($row_datos_controlmat['g_abrev'] == '') {
 $nn7 = '';   # code...
}
else {
   $nn7 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborderleft" style="width:6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn7; ?>
</TD>

<?php 
if ($row_datos_controlmat['h_abrev'] == '') {
 $nn8 = '';   # code...
}
else {
   $nn8 = $el_puntaje_completo_es;  
}
?>


<TD class="miniborder" style="width:6%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php echo $nn8; ?>
</TD>

<?php 
if ($row_datos_controlmat['i_abrev'] == '') {
 $nn9 = '';   # code...
}
else {
   $nn9 = $el_puntaje_completo_es;  
}
?>


<TD class="miniborderleft" style="width:6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn9; ?>
</TD>

<?php 
if ($row_datos_controlmat['j_abrev'] == '') {
 $nn10 = '';   # code...
}
else {
   $nn10 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborder" style="width:6%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php echo $nn10; ?>
</TD>


<?php 
if ($row_datos_controlmat['k_abrev'] == '') {
 $nn11 = '';   # code...
}
else {
   $nn11 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborderleft" style="width:6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn11; ?>
</TD>

<?php 
if ($row_datos_controlmat['l_abrev'] == '') {
 $nn12 = '';   # code...
}
else {
   $nn12 = $el_puntaje_completo_es;  
}
?>


<TD class="miniborder" style="width:6%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php echo $nn12; ?>
</TD>

<?php 
if ($row_datos_controlmat['m_abrev'] == '') {
 $nn13 = '';   # code...
}
else {
   $nn13 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborderleft" style="width:6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn13; ?>
</TD>

<?php 
if ($row_datos_controlmat['n_abrev'] == '') {
 $nn14 = '';   # code...
}
else {
   $nn14 = $el_puntaje_completo_es;  
}
?>

<TD class="miniborder" style="width:6%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<?php echo $nn14; ?>
</TD>



</TR>





</TABLE>




<!-- mod -->

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

<TD class="miniborder" style="width:2%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">


<b><?php


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


if ($lapso == '1°') {
   

$nota_1_M1 = $row_datos_control_notasM1["nt_11"];
$nota_2_M1 = $row_datos_control_notasM1["nt_12"];
$nota_3_M1 = $row_datos_control_notasM1["nt_13"];
$nota_4_M1 = $row_datos_control_notasM1["nt_14"];
$nota_5_M1 = $row_datos_control_notasM1["nt_15"];
$nota_6_M1 = $row_datos_control_notasM1["nt_16"];
$nota_7_M1 = $row_datos_control_notasM1["nt_17"];
$notaAu_M1 = $row_datos_control_notasM1["nt_Au1"];





$nota_real_1_M1 = ($row_datos_control_notasM1["nt_11"] * 1)/1;
$nota_real_2_M1 = ($row_datos_control_notasM1["nt_12"] * 1)/1;
$nota_real_3_M1 = ($row_datos_control_notasM1["nt_13"] * 1)/1;
$nota_real_4_M1 = ($row_datos_control_notasM1["nt_14"] * 1)/1;
$nota_real_5_M1 = ($row_datos_control_notasM1["nt_15"] * 1)/1;
$nota_real_6_M1 = ($row_datos_control_notasM1["nt_16"] * 1)/1;
$nota_real_7_M1 = ($row_datos_control_notasM1["nt_17"] * 1)/1;

$total_seven_M1 = $nota_real_1_M1+$nota_real_2_M1+$nota_real_3_M1+$nota_real_4_M1+$nota_real_5_M1+$nota_real_6_M1+$nota_real_7_M1;

$total_seven_con_Au_M1 = $total_seven_M1+ $row_datos_control_notasM1["nt_Au1"];
$total_seven_con_Au_redon_M1 =number_format($total_seven_con_Au_M1, 0, ',', '');



$nota_1_M2 = $row_datos_control_notasM2["nt_11"];
$nota_2_M2 = $row_datos_control_notasM2["nt_12"];
$nota_3_M2 = $row_datos_control_notasM2["nt_13"];
$nota_4_M2 = $row_datos_control_notasM2["nt_14"];
$nota_5_M2 = $row_datos_control_notasM2["nt_15"];
$nota_6_M2 = $row_datos_control_notasM2["nt_16"];
$nota_7_M2 = $row_datos_control_notasM2["nt_17"];
$notaAu_M2 = $row_datos_control_notasM2["nt_Au1"];


$nota_real_1_M2 = ($row_datos_control_notasM2["nt_11"] * 1)/1;
$nota_real_2_M2 = ($row_datos_control_notasM2["nt_12"] * 1)/1;
$nota_real_3_M2 = ($row_datos_control_notasM2["nt_13"] * 1)/1;
$nota_real_4_M2 = ($row_datos_control_notasM2["nt_14"] * 1)/1;
$nota_real_5_M2 = ($row_datos_control_notasM2["nt_15"] * 1)/1;
$nota_real_6_M2 = ($row_datos_control_notasM2["nt_16"] * 1)/1;
$nota_real_7_M2 = ($row_datos_control_notasM2["nt_17"] * 1)/1;

$total_seven_M2 = $nota_real_1_M2+$nota_real_2_M2+$nota_real_3_M2+$nota_real_4_M2+$nota_real_5_M2+$nota_real_6_M2+$nota_real_7_M2;

$total_seven_con_Au_M2 = $total_seven_M2+ $row_datos_control_notasM2["nt_Au1"];
$total_seven_con_Au_redon_M2 =number_format($total_seven_con_Au_M2, 0, ',', '');



$nota_1_M3 = $row_datos_control_notasM3["nt_11"];
$nota_2_M3 = $row_datos_control_notasM3["nt_12"];
$nota_3_M3 = $row_datos_control_notasM3["nt_13"];
$nota_4_M3 = $row_datos_control_notasM3["nt_14"];
$nota_5_M3 = $row_datos_control_notasM3["nt_15"];
$nota_6_M3 = $row_datos_control_notasM3["nt_16"];
$nota_7_M3 = $row_datos_control_notasM3["nt_17"];
$notaAu_M3 = $row_datos_control_notasM3["nt_Au1"];


$nota_real_1_M3 = ($row_datos_control_notasM3["nt_11"] * 1)/1;
$nota_real_2_M3 = ($row_datos_control_notasM3["nt_12"] * 1)/1;
$nota_real_3_M3 = ($row_datos_control_notasM3["nt_13"] * 1)/1;
$nota_real_4_M3 = ($row_datos_control_notasM3["nt_14"] * 1)/1;
$nota_real_5_M3 = ($row_datos_control_notasM3["nt_15"] * 1)/1;
$nota_real_6_M3 = ($row_datos_control_notasM3["nt_16"] * 1)/1;
$nota_real_7_M3 = ($row_datos_control_notasM3["nt_17"] * 1)/1;

$total_seven_M3 = $nota_real_1_M3+$nota_real_2_M3+$nota_real_3_M3+$nota_real_4_M3+$nota_real_5_M3+$nota_real_6_M3+$nota_real_7_M3;

$total_seven_con_Au_M3 = $total_seven_M3+ $row_datos_control_notasM3["nt_Au1"];
$total_seven_con_Au_redon_M3 =number_format($total_seven_con_Au_M3, 0, ',', '');


$nota_1_M4 = $row_datos_control_notasM4["nt_11"];
$nota_2_M4 = $row_datos_control_notasM4["nt_12"];
$nota_3_M4 = $row_datos_control_notasM4["nt_13"];
$nota_4_M4 = $row_datos_control_notasM4["nt_14"];
$nota_5_M4 = $row_datos_control_notasM4["nt_15"];
$nota_6_M4 = $row_datos_control_notasM4["nt_16"];
$nota_7_M4 = $row_datos_control_notasM4["nt_17"];
$notaAu_M4 = $row_datos_control_notasM4["nt_Au1"];


$nota_real_1_M4 = ($row_datos_control_notasM4["nt_11"] * 1)/1;
$nota_real_2_M4 = ($row_datos_control_notasM4["nt_12"] * 1)/1;
$nota_real_3_M4 = ($row_datos_control_notasM4["nt_13"] * 1)/1;
$nota_real_4_M4 = ($row_datos_control_notasM4["nt_14"] * 1)/1;
$nota_real_5_M4 = ($row_datos_control_notasM4["nt_15"] * 1)/1;
$nota_real_6_M4 = ($row_datos_control_notasM4["nt_16"] * 1)/1;
$nota_real_7_M4 = ($row_datos_control_notasM4["nt_17"] * 1)/1;

$total_seven_M4 = $nota_real_1_M4+$nota_real_2_M4+$nota_real_3_M4+$nota_real_4_M4+$nota_real_5_M4+$nota_real_6_M4+$nota_real_7_M4;

$total_seven_con_Au_M4 = $total_seven_M4+ $row_datos_control_notasM4["nt_Au1"];
$total_seven_con_Au_redon_M4 =number_format($total_seven_con_Au_M4, 0, ',', '');



$nota_1_M5 = $row_datos_control_notasM5["nt_11"];
$nota_2_M5 = $row_datos_control_notasM5["nt_12"];
$nota_3_M5 = $row_datos_control_notasM5["nt_13"];
$nota_4_M5 = $row_datos_control_notasM5["nt_14"];
$nota_5_M5 = $row_datos_control_notasM5["nt_15"];
$nota_6_M5 = $row_datos_control_notasM5["nt_16"];
$nota_7_M5 = $row_datos_control_notasM5["nt_17"];
$notaAu_M5 = $row_datos_control_notasM5["nt_Au1"];


$nota_real_1_M5 = ($row_datos_control_notasM5["nt_11"] * 1)/1;
$nota_real_2_M5 = ($row_datos_control_notasM5["nt_12"] * 1)/1;
$nota_real_3_M5 = ($row_datos_control_notasM5["nt_13"] * 1)/1;
$nota_real_4_M5 = ($row_datos_control_notasM5["nt_14"] * 1)/1;
$nota_real_5_M5 = ($row_datos_control_notasM5["nt_15"] * 1)/1;
$nota_real_6_M5 = ($row_datos_control_notasM5["nt_16"] * 1)/1;
$nota_real_7_M5 = ($row_datos_control_notasM5["nt_17"] * 1)/1;

$total_seven_M5 = $nota_real_1_M5+$nota_real_2_M5+$nota_real_3_M5+$nota_real_4_M5+$nota_real_5_M5+$nota_real_6_M5+$nota_real_7_M5;

$total_seven_con_Au_M5 = $total_seven_M5+ $row_datos_control_notasM5["nt_Au1"];
$total_seven_con_Au_redon_M5 =number_format($total_seven_con_Au_M5, 0, ',', '');



$nota_1_M6 = $row_datos_control_notasM6["nt_11"];
$nota_2_M6 = $row_datos_control_notasM6["nt_12"];
$nota_3_M6 = $row_datos_control_notasM6["nt_13"];
$nota_4_M6 = $row_datos_control_notasM6["nt_14"];
$nota_5_M6 = $row_datos_control_notasM6["nt_15"];
$nota_6_M6 = $row_datos_control_notasM6["nt_16"];
$nota_7_M6 = $row_datos_control_notasM6["nt_17"];
$notaAu_M6 = $row_datos_control_notasM6["nt_Au1"];


$nota_real_1_M6 = ($row_datos_control_notasM6["nt_11"] * 1)/1;
$nota_real_2_M6 = ($row_datos_control_notasM6["nt_12"] * 1)/1;
$nota_real_3_M6 = ($row_datos_control_notasM6["nt_13"] * 1)/1;
$nota_real_4_M6 = ($row_datos_control_notasM6["nt_14"] * 1)/1;
$nota_real_5_M6 = ($row_datos_control_notasM6["nt_15"] * 1)/1;
$nota_real_6_M6 = ($row_datos_control_notasM6["nt_16"] * 1)/1;
$nota_real_7_M6 = ($row_datos_control_notasM6["nt_17"] * 1)/1;

$total_seven_M6 = $nota_real_1_M6+$nota_real_2_M6+$nota_real_3_M6+$nota_real_4_M6+$nota_real_5_M6+$nota_real_6_M6+$nota_real_7_M6;

$total_seven_con_Au_M6 = $total_seven_M6+ $row_datos_control_notasM6["nt_Au1"];
$total_seven_con_Au_redon_M6 =number_format($total_seven_con_Au_M6, 0, ',', '');



$nota_1_M7 = $row_datos_control_notasM7["nt_11"];
$nota_2_M7 = $row_datos_control_notasM7["nt_12"];
$nota_3_M7 = $row_datos_control_notasM7["nt_13"];
$nota_4_M7 = $row_datos_control_notasM7["nt_14"];
$nota_5_M7 = $row_datos_control_notasM7["nt_15"];
$nota_6_M7 = $row_datos_control_notasM7["nt_16"];
$nota_7_M7 = $row_datos_control_notasM7["nt_17"];
$notaAu_M7 = $row_datos_control_notasM7["nt_Au1"];


$nota_real_1_M7 = ($row_datos_control_notasM7["nt_11"] * 1)/1;
$nota_real_2_M7 = ($row_datos_control_notasM7["nt_12"] * 1)/1;
$nota_real_3_M7 = ($row_datos_control_notasM7["nt_13"] * 1)/1;
$nota_real_4_M7 = ($row_datos_control_notasM7["nt_14"] * 1)/1;
$nota_real_5_M7 = ($row_datos_control_notasM7["nt_15"] * 1)/1;
$nota_real_6_M7 = ($row_datos_control_notasM7["nt_16"] * 1)/1;
$nota_real_7_M7 = ($row_datos_control_notasM7["nt_17"] * 1)/1;

$total_seven_M7 = $nota_real_1_M7+$nota_real_2_M7+$nota_real_3_M7+$nota_real_4_M7+$nota_real_5_M7+$nota_real_6_M7+$nota_real_7_M7;

$total_seven_con_Au_M7 = $total_seven_M7+ $row_datos_control_notasM7["nt_Au1"];
$total_seven_con_Au_redon_M7 =number_format($total_seven_con_Au_M7, 0, ',', '');




$nota_1_M8 = $row_datos_control_notasM8["nt_11"];
$nota_2_M8 = $row_datos_control_notasM8["nt_12"];
$nota_3_M8 = $row_datos_control_notasM8["nt_13"];
$nota_4_M8 = $row_datos_control_notasM8["nt_14"];
$nota_5_M8 = $row_datos_control_notasM8["nt_15"];
$nota_6_M8 = $row_datos_control_notasM8["nt_16"];
$nota_7_M8 = $row_datos_control_notasM8["nt_17"];
$notaAu_M8 = $row_datos_control_notasM8["nt_Au1"];


$nota_real_1_M8 = ($row_datos_control_notasM8["nt_11"] * 1)/1;
$nota_real_2_M8 = ($row_datos_control_notasM8["nt_12"] * 1)/1;
$nota_real_3_M8 = ($row_datos_control_notasM8["nt_13"] * 1)/1;
$nota_real_4_M8 = ($row_datos_control_notasM8["nt_14"] * 1)/1;
$nota_real_5_M8 = ($row_datos_control_notasM8["nt_15"] * 1)/1;
$nota_real_6_M8 = ($row_datos_control_notasM8["nt_16"] * 1)/1;
$nota_real_7_M8 = ($row_datos_control_notasM8["nt_17"] * 1)/1;

$total_seven_M8 = $nota_real_1_M8+$nota_real_2_M8+$nota_real_3_M8+$nota_real_4_M8+$nota_real_5_M8+$nota_real_6_M8+$nota_real_7_M8;

$total_seven_con_Au_M8 = $total_seven_M8+ $row_datos_control_notasM8["nt_Au1"];
$total_seven_con_Au_redon_M8 =number_format($total_seven_con_Au_M8, 0, ',', '');




$nota_1_M9 = $row_datos_control_notasM9["nt_11"];
$nota_2_M9 = $row_datos_control_notasM9["nt_12"];
$nota_3_M9 = $row_datos_control_notasM9["nt_13"];
$nota_4_M9 = $row_datos_control_notasM9["nt_14"];
$nota_5_M9 = $row_datos_control_notasM9["nt_15"];
$nota_6_M9 = $row_datos_control_notasM9["nt_16"];
$nota_7_M9 = $row_datos_control_notasM9["nt_17"];
$notaAu_M9 = $row_datos_control_notasM9["nt_Au1"];


$nota_real_1_M9 = ($row_datos_control_notasM9["nt_11"] * 1)/1;
$nota_real_2_M9 = ($row_datos_control_notasM9["nt_12"] * 1)/1;
$nota_real_3_M9 = ($row_datos_control_notasM9["nt_13"] * 1)/1;
$nota_real_4_M9 = ($row_datos_control_notasM9["nt_14"] * 1)/1;
$nota_real_5_M9 = ($row_datos_control_notasM9["nt_15"] * 1)/1;
$nota_real_6_M9 = ($row_datos_control_notasM9["nt_16"] * 1)/1;
$nota_real_7_M9 = ($row_datos_control_notasM9["nt_17"] * 1)/1;

$total_seven_M9 = $nota_real_1_M9+$nota_real_2_M9+$nota_real_3_M9+$nota_real_4_M9+$nota_real_5_M9+$nota_real_6_M9+$nota_real_7_M9;

$total_seven_con_Au_M9 = $total_seven_M9+ $row_datos_control_notasM9["nt_Au1"];
$total_seven_con_Au_redon_M9 =number_format($total_seven_con_Au_M9, 0, ',', '');



$nota_1_M10 = $row_datos_control_notasM10["nt_11"];
$nota_2_M10 = $row_datos_control_notasM10["nt_12"];
$nota_3_M10 = $row_datos_control_notasM10["nt_13"];
$nota_4_M10 = $row_datos_control_notasM10["nt_14"];
$nota_5_M10 = $row_datos_control_notasM10["nt_15"];
$nota_6_M10 = $row_datos_control_notasM10["nt_16"];
$nota_7_M10 = $row_datos_control_notasM10["nt_17"];
$notaAu_M10 = $row_datos_control_notasM10["nt_Au1"];


$nota_real_1_M10 = ($row_datos_control_notasM10["nt_11"] * 1)/1;
$nota_real_2_M10 = ($row_datos_control_notasM10["nt_12"] * 1)/1;
$nota_real_3_M10 = ($row_datos_control_notasM10["nt_13"] * 1)/1;
$nota_real_4_M10 = ($row_datos_control_notasM10["nt_14"] * 1)/1;
$nota_real_5_M10 = ($row_datos_control_notasM10["nt_15"] * 1)/1;
$nota_real_6_M10 = ($row_datos_control_notasM10["nt_16"] * 1)/1;
$nota_real_7_M10 = ($row_datos_control_notasM10["nt_17"] * 1)/1;

$total_seven_M10 = $nota_real_1_M10+$nota_real_2_M10+$nota_real_3_M10+$nota_real_4_M10+$nota_real_5_M10+$nota_real_6_M10+$nota_real_7_M10;

$total_seven_con_Au_M10 = $total_seven_M10+ $row_datos_control_notasM10["nt_Au1"];
$total_seven_con_Au_redon_M10 =number_format($total_seven_con_Au_M10, 0, ',', '');



$nota_1_M11 = $row_datos_control_notasM11["nt_11"];
$nota_2_M11 = $row_datos_control_notasM11["nt_12"];
$nota_3_M11 = $row_datos_control_notasM11["nt_13"];
$nota_4_M11 = $row_datos_control_notasM11["nt_14"];
$nota_5_M11 = $row_datos_control_notasM11["nt_15"];
$nota_6_M11 = $row_datos_control_notasM11["nt_16"];
$nota_7_M11 = $row_datos_control_notasM11["nt_17"];
$notaAu_M11 = $row_datos_control_notasM11["nt_Au1"];


$nota_real_1_M11 = ($row_datos_control_notasM11["nt_11"] * 1)/1;
$nota_real_2_M11 = ($row_datos_control_notasM11["nt_12"] * 1)/1;
$nota_real_3_M11 = ($row_datos_control_notasM11["nt_13"] * 1)/1;
$nota_real_4_M11 = ($row_datos_control_notasM11["nt_14"] * 1)/1;
$nota_real_5_M11 = ($row_datos_control_notasM11["nt_15"] * 1)/1;
$nota_real_6_M11 = ($row_datos_control_notasM11["nt_16"] * 1)/1;
$nota_real_7_M11 = ($row_datos_control_notasM11["nt_17"] * 1)/1;

$total_seven_M11 = $nota_real_1_M11+$nota_real_2_M11+$nota_real_3_M11+$nota_real_4_M11+$nota_real_5_M11+$nota_real_6_M11+$nota_real_7_M11;

$total_seven_con_Au_M11 = $total_seven_M11+ $row_datos_control_notasM11["nt_Au1"];
$total_seven_con_Au_redon_M11 =number_format($total_seven_con_Au_M11, 0, ',', '');



$nota_1_M12 = $row_datos_control_notasM12["nt_11"];
$nota_2_M12 = $row_datos_control_notasM12["nt_12"];
$nota_3_M12 = $row_datos_control_notasM12["nt_13"];
$nota_4_M12 = $row_datos_control_notasM12["nt_14"];
$nota_5_M12 = $row_datos_control_notasM12["nt_15"];
$nota_6_M12 = $row_datos_control_notasM12["nt_16"];
$nota_7_M12 = $row_datos_control_notasM12["nt_17"];
$notaAu_M12 = $row_datos_control_notasM12["nt_Au1"];


$nota_real_1_M12 = ($row_datos_control_notasM12["nt_11"] * 1)/1;
$nota_real_2_M12 = ($row_datos_control_notasM12["nt_12"] * 1)/1;
$nota_real_3_M12 = ($row_datos_control_notasM12["nt_13"] * 1)/1;
$nota_real_4_M12 = ($row_datos_control_notasM12["nt_14"] * 1)/1;
$nota_real_5_M12 = ($row_datos_control_notasM12["nt_15"] * 1)/1;
$nota_real_6_M12 = ($row_datos_control_notasM12["nt_16"] * 1)/1;
$nota_real_7_M12 = ($row_datos_control_notasM12["nt_17"] * 1)/1;

$total_seven_M12 = $nota_real_1_M12+$nota_real_2_M12+$nota_real_3_M12+$nota_real_4_M12+$nota_real_5_M12+$nota_real_6_M12+$nota_real_7_M12;

$total_seven_con_Au_M12 = $total_seven_M12+ $row_datos_control_notasM12["nt_Au1"];
$total_seven_con_Au_redon_M12 =number_format($total_seven_con_Au_M12, 0, ',', '');



$nota_1_M13 = $row_datos_control_notasM13["nt_11"];
$nota_2_M13 = $row_datos_control_notasM13["nt_12"];
$nota_3_M13 = $row_datos_control_notasM13["nt_13"];
$nota_4_M13 = $row_datos_control_notasM13["nt_14"];
$nota_5_M13 = $row_datos_control_notasM13["nt_15"];
$nota_6_M13 = $row_datos_control_notasM13["nt_16"];
$nota_7_M13 = $row_datos_control_notasM13["nt_17"];
$notaAu_M13 = $row_datos_control_notasM13["nt_Au1"];


$nota_real_1_M13 = ($row_datos_control_notasM13["nt_11"] * 1)/1;
$nota_real_2_M13 = ($row_datos_control_notasM13["nt_12"] * 1)/1;
$nota_real_3_M13 = ($row_datos_control_notasM13["nt_13"] * 1)/1;
$nota_real_4_M13 = ($row_datos_control_notasM13["nt_14"] * 1)/1;
$nota_real_5_M13 = ($row_datos_control_notasM13["nt_15"] * 1)/1;
$nota_real_6_M13 = ($row_datos_control_notasM13["nt_16"] * 1)/1;
$nota_real_7_M13 = ($row_datos_control_notasM13["nt_17"] * 1)/1;

$total_seven_M13 = $nota_real_1_M13+$nota_real_2_M13+$nota_real_3_M13+$nota_real_4_M13+$nota_real_5_M13+$nota_real_6_M13+$nota_real_7_M13;

$total_seven_con_Au_M13 = $total_seven_M13+ $row_datos_control_notasM13["nt_Au1"];
$total_seven_con_Au_redon_M13 =number_format($total_seven_con_Au_M13, 0, ',', '');



$nota_1_M14 = $row_datos_control_notasM14["nt_11"];
$nota_2_M14 = $row_datos_control_notasM14["nt_12"];
$nota_3_M14 = $row_datos_control_notasM14["nt_13"];
$nota_4_M14 = $row_datos_control_notasM14["nt_14"];
$nota_5_M14 = $row_datos_control_notasM14["nt_15"];
$nota_6_M14 = $row_datos_control_notasM14["nt_16"];
$nota_7_M14 = $row_datos_control_notasM14["nt_17"];
$notaAu_M14 = $row_datos_control_notasM14["nt_Au1"];


$nota_real_1_M14 = ($row_datos_control_notasM14["nt_11"] * 1)/1;
$nota_real_2_M14 = ($row_datos_control_notasM14["nt_12"] * 1)/1;
$nota_real_3_M14 = ($row_datos_control_notasM14["nt_13"] * 1)/1;
$nota_real_4_M14 = ($row_datos_control_notasM14["nt_14"] * 1)/1;
$nota_real_5_M14 = ($row_datos_control_notasM14["nt_15"] * 1)/1;
$nota_real_6_M14 = ($row_datos_control_notasM14["nt_16"] * 1)/1;
$nota_real_7_M14 = ($row_datos_control_notasM14["nt_17"] * 1)/1;

$total_seven_M14 = $nota_real_1_M14+$nota_real_2_M14+$nota_real_3_M14+$nota_real_4_M14+$nota_real_5_M14+$nota_real_6_M14+$nota_real_7_M14;

$total_seven_con_Au_M14 = $total_seven_M14+ $row_datos_control_notasM14["nt_Au1"];
$total_seven_con_Au_redon_M14 =number_format($total_seven_con_Au_M14, 0, ',', '');



}




if ($lapso == '2°') {
   

$nota_1_M1 = $row_datos_control_notasM1["nt_21"];
$nota_2_M1 = $row_datos_control_notasM1["nt_22"];
$nota_3_M1 = $row_datos_control_notasM1["nt_23"];
$nota_4_M1 = $row_datos_control_notasM1["nt_24"];
$nota_5_M1 = $row_datos_control_notasM1["nt_25"];
$nota_6_M1 = $row_datos_control_notasM1["nt_26"];
$nota_7_M1 = $row_datos_control_notasM1["nt_27"];
$notaAu_M1 = $row_datos_control_notasM1["nt_Au2"];


$nota_real_1_M1 = ($row_datos_control_notasM1["nt_21"] * 1)/1;
$nota_real_2_M1 = ($row_datos_control_notasM1["nt_22"] * 1)/1;
$nota_real_3_M1 = ($row_datos_control_notasM1["nt_23"] * 1)/1;
$nota_real_4_M1 = ($row_datos_control_notasM1["nt_24"] * 1)/1;
$nota_real_5_M1 = ($row_datos_control_notasM1["nt_25"] * 1)/1;
$nota_real_6_M1 = ($row_datos_control_notasM1["nt_26"] * 1)/1;
$nota_real_7_M1 = ($row_datos_control_notasM1["nt_27"] * 1)/1;

$total_seven_M1 = $nota_real_1_M1+$nota_real_2_M1+$nota_real_3_M1+$nota_real_4_M1+$nota_real_5_M1+$nota_real_6_M1+$nota_real_7_M1;

$total_seven_con_Au_M1 = $total_seven_M1+ $row_datos_control_notasM1["nt_Au2"];
$total_seven_con_Au_redon_M1 =number_format($total_seven_con_Au_M1, 0, ',', '');



$nota_1_M2 = $row_datos_control_notasM2["nt_21"];
$nota_2_M2 = $row_datos_control_notasM2["nt_22"];
$nota_3_M2 = $row_datos_control_notasM2["nt_23"];
$nota_4_M2 = $row_datos_control_notasM2["nt_24"];
$nota_5_M2 = $row_datos_control_notasM2["nt_25"];
$nota_6_M2 = $row_datos_control_notasM2["nt_26"];
$nota_7_M2 = $row_datos_control_notasM2["nt_27"];
$notaAu_M2 = $row_datos_control_notasM2["nt_Au2"];


$nota_real_1_M2 = ($row_datos_control_notasM2["nt_21"] * 1)/1;
$nota_real_2_M2 = ($row_datos_control_notasM2["nt_22"] * 1)/1;
$nota_real_3_M2 = ($row_datos_control_notasM2["nt_23"] * 1)/1;
$nota_real_4_M2 = ($row_datos_control_notasM2["nt_24"] * 1)/1;
$nota_real_5_M2 = ($row_datos_control_notasM2["nt_25"] * 1)/1;
$nota_real_6_M2 = ($row_datos_control_notasM2["nt_26"] * 1)/1;
$nota_real_7_M2 = ($row_datos_control_notasM2["nt_27"] * 1)/1;

$total_seven_M2 = $nota_real_1_M2+$nota_real_2_M2+$nota_real_3_M2+$nota_real_4_M2+$nota_real_5_M2+$nota_real_6_M2+$nota_real_7_M2;

$total_seven_con_Au_M2 = $total_seven_M2+ $row_datos_control_notasM2["nt_Au2"];
$total_seven_con_Au_redon_M2 =number_format($total_seven_con_Au_M2, 0, ',', '');



$nota_1_M3 = $row_datos_control_notasM3["nt_21"];
$nota_2_M3 = $row_datos_control_notasM3["nt_22"];
$nota_3_M3 = $row_datos_control_notasM3["nt_23"];
$nota_4_M3 = $row_datos_control_notasM3["nt_24"];
$nota_5_M3 = $row_datos_control_notasM3["nt_25"];
$nota_6_M3 = $row_datos_control_notasM3["nt_26"];
$nota_7_M3 = $row_datos_control_notasM3["nt_27"];
$notaAu_M3 = $row_datos_control_notasM3["nt_Au2"];


$nota_real_1_M3 = ($row_datos_control_notasM3["nt_21"] * 1)/1;
$nota_real_2_M3 = ($row_datos_control_notasM3["nt_22"] * 1)/1;
$nota_real_3_M3 = ($row_datos_control_notasM3["nt_23"] * 1)/1;
$nota_real_4_M3 = ($row_datos_control_notasM3["nt_24"] * 1)/1;
$nota_real_5_M3 = ($row_datos_control_notasM3["nt_25"] * 1)/1;
$nota_real_6_M3 = ($row_datos_control_notasM3["nt_26"] * 1)/1;
$nota_real_7_M3 = ($row_datos_control_notasM3["nt_27"] * 1)/1;

$total_seven_M3 = $nota_real_1_M3+$nota_real_2_M3+$nota_real_3_M3+$nota_real_4_M3+$nota_real_5_M3+$nota_real_6_M3+$nota_real_7_M3;

$total_seven_con_Au_M3 = $total_seven_M3+ $row_datos_control_notasM3["nt_Au2"];
$total_seven_con_Au_redon_M3 =number_format($total_seven_con_Au_M3, 0, ',', '');


$nota_1_M4 = $row_datos_control_notasM4["nt_21"];
$nota_2_M4 = $row_datos_control_notasM4["nt_22"];
$nota_3_M4 = $row_datos_control_notasM4["nt_23"];
$nota_4_M4 = $row_datos_control_notasM4["nt_24"];
$nota_5_M4 = $row_datos_control_notasM4["nt_25"];
$nota_6_M4 = $row_datos_control_notasM4["nt_26"];
$nota_7_M4 = $row_datos_control_notasM4["nt_27"];
$notaAu_M4 = $row_datos_control_notasM4["nt_Au2"];


$nota_real_1_M4 = ($row_datos_control_notasM4["nt_21"] * 1)/1;
$nota_real_2_M4 = ($row_datos_control_notasM4["nt_22"] * 1)/1;
$nota_real_3_M4 = ($row_datos_control_notasM4["nt_23"] * 1)/1;
$nota_real_4_M4 = ($row_datos_control_notasM4["nt_24"] * 1)/1;
$nota_real_5_M4 = ($row_datos_control_notasM4["nt_25"] * 1)/1;
$nota_real_6_M4 = ($row_datos_control_notasM4["nt_26"] * 1)/1;
$nota_real_7_M4 = ($row_datos_control_notasM4["nt_27"] * 1)/1;

$total_seven_M4 = $nota_real_1_M4+$nota_real_2_M4+$nota_real_3_M4+$nota_real_4_M4+$nota_real_5_M4+$nota_real_6_M4+$nota_real_7_M4;

$total_seven_con_Au_M4 = $total_seven_M4+ $row_datos_control_notasM4["nt_Au2"];
$total_seven_con_Au_redon_M4 =number_format($total_seven_con_Au_M4, 0, ',', '');



$nota_1_M5 = $row_datos_control_notasM5["nt_21"];
$nota_2_M5 = $row_datos_control_notasM5["nt_22"];
$nota_3_M5 = $row_datos_control_notasM5["nt_23"];
$nota_4_M5 = $row_datos_control_notasM5["nt_24"];
$nota_5_M5 = $row_datos_control_notasM5["nt_25"];
$nota_6_M5 = $row_datos_control_notasM5["nt_26"];
$nota_7_M5 = $row_datos_control_notasM5["nt_27"];
$notaAu_M5 = $row_datos_control_notasM5["nt_Au2"];


$nota_real_1_M5 = ($row_datos_control_notasM5["nt_21"] * 1)/1;
$nota_real_2_M5 = ($row_datos_control_notasM5["nt_22"] * 1)/1;
$nota_real_3_M5 = ($row_datos_control_notasM5["nt_23"] * 1)/1;
$nota_real_4_M5 = ($row_datos_control_notasM5["nt_24"] * 1)/1;
$nota_real_5_M5 = ($row_datos_control_notasM5["nt_25"] * 1)/1;
$nota_real_6_M5 = ($row_datos_control_notasM5["nt_26"] * 1)/1;
$nota_real_7_M5 = ($row_datos_control_notasM5["nt_27"] * 1)/1;

$total_seven_M5 = $nota_real_1_M5+$nota_real_2_M5+$nota_real_3_M5+$nota_real_4_M5+$nota_real_5_M5+$nota_real_6_M5+$nota_real_7_M5;

$total_seven_con_Au_M5 = $total_seven_M5+ $row_datos_control_notasM5["nt_Au2"];
$total_seven_con_Au_redon_M5 =number_format($total_seven_con_Au_M5, 0, ',', '');



$nota_1_M6 = $row_datos_control_notasM6["nt_21"];
$nota_2_M6 = $row_datos_control_notasM6["nt_22"];
$nota_3_M6 = $row_datos_control_notasM6["nt_23"];
$nota_4_M6 = $row_datos_control_notasM6["nt_24"];
$nota_5_M6 = $row_datos_control_notasM6["nt_25"];
$nota_6_M6 = $row_datos_control_notasM6["nt_26"];
$nota_7_M6 = $row_datos_control_notasM6["nt_27"];
$notaAu_M6 = $row_datos_control_notasM6["nt_Au2"];


$nota_real_1_M6 = ($row_datos_control_notasM6["nt_21"] * 1)/1;
$nota_real_2_M6 = ($row_datos_control_notasM6["nt_22"] * 1)/1;
$nota_real_3_M6 = ($row_datos_control_notasM6["nt_23"] * 1)/1;
$nota_real_4_M6 = ($row_datos_control_notasM6["nt_24"] * 1)/1;
$nota_real_5_M6 = ($row_datos_control_notasM6["nt_25"] * 1)/1;
$nota_real_6_M6 = ($row_datos_control_notasM6["nt_26"] * 1)/1;
$nota_real_7_M6 = ($row_datos_control_notasM6["nt_27"] * 1)/1;

$total_seven_M6 = $nota_real_1_M6+$nota_real_2_M6+$nota_real_3_M6+$nota_real_4_M6+$nota_real_5_M6+$nota_real_6_M6+$nota_real_7_M6;

$total_seven_con_Au_M6 = $total_seven_M6+ $row_datos_control_notasM6["nt_Au2"];
$total_seven_con_Au_redon_M6 =number_format($total_seven_con_Au_M6, 0, ',', '');



$nota_1_M7 = $row_datos_control_notasM7["nt_21"];
$nota_2_M7 = $row_datos_control_notasM7["nt_22"];
$nota_3_M7 = $row_datos_control_notasM7["nt_23"];
$nota_4_M7 = $row_datos_control_notasM7["nt_24"];
$nota_5_M7 = $row_datos_control_notasM7["nt_25"];
$nota_6_M7 = $row_datos_control_notasM7["nt_26"];
$nota_7_M7 = $row_datos_control_notasM7["nt_27"];
$notaAu_M7 = $row_datos_control_notasM7["nt_Au2"];


$nota_real_1_M7 = ($row_datos_control_notasM7["nt_21"] * 1)/1;
$nota_real_2_M7 = ($row_datos_control_notasM7["nt_22"] * 1)/1;
$nota_real_3_M7 = ($row_datos_control_notasM7["nt_23"] * 1)/1;
$nota_real_4_M7 = ($row_datos_control_notasM7["nt_24"] * 1)/1;
$nota_real_5_M7 = ($row_datos_control_notasM7["nt_25"] * 1)/1;
$nota_real_6_M7 = ($row_datos_control_notasM7["nt_26"] * 1)/1;
$nota_real_7_M7 = ($row_datos_control_notasM7["nt_27"] * 1)/1;

$total_seven_M7 = $nota_real_1_M7+$nota_real_2_M7+$nota_real_3_M7+$nota_real_4_M7+$nota_real_5_M7+$nota_real_6_M7+$nota_real_7_M7;

$total_seven_con_Au_M7 = $total_seven_M7+ $row_datos_control_notasM7["nt_Au2"];
$total_seven_con_Au_redon_M7 =number_format($total_seven_con_Au_M7, 0, ',', '');




$nota_1_M8 = $row_datos_control_notasM8["nt_21"];
$nota_2_M8 = $row_datos_control_notasM8["nt_22"];
$nota_3_M8 = $row_datos_control_notasM8["nt_23"];
$nota_4_M8 = $row_datos_control_notasM8["nt_24"];
$nota_5_M8 = $row_datos_control_notasM8["nt_25"];
$nota_6_M8 = $row_datos_control_notasM8["nt_26"];
$nota_7_M8 = $row_datos_control_notasM8["nt_27"];
$notaAu_M8 = $row_datos_control_notasM8["nt_Au2"];


$nota_real_1_M8 = ($row_datos_control_notasM8["nt_21"] * 1)/1;
$nota_real_2_M8 = ($row_datos_control_notasM8["nt_22"] * 1)/1;
$nota_real_3_M8 = ($row_datos_control_notasM8["nt_23"] * 1)/1;
$nota_real_4_M8 = ($row_datos_control_notasM8["nt_24"] * 1)/1;
$nota_real_5_M8 = ($row_datos_control_notasM8["nt_25"] * 1)/1;
$nota_real_6_M8 = ($row_datos_control_notasM8["nt_26"] * 1)/1;
$nota_real_7_M8 = ($row_datos_control_notasM8["nt_27"] * 1)/1;

$total_seven_M8 = $nota_real_1_M8+$nota_real_2_M8+$nota_real_3_M8+$nota_real_4_M8+$nota_real_5_M8+$nota_real_6_M8+$nota_real_7_M8;

$total_seven_con_Au_M8 = $total_seven_M8+ $row_datos_control_notasM8["nt_Au2"];
$total_seven_con_Au_redon_M8 =number_format($total_seven_con_Au_M8, 0, ',', '');




$nota_1_M9 = $row_datos_control_notasM9["nt_21"];
$nota_2_M9 = $row_datos_control_notasM9["nt_22"];
$nota_3_M9 = $row_datos_control_notasM9["nt_23"];
$nota_4_M9 = $row_datos_control_notasM9["nt_24"];
$nota_5_M9 = $row_datos_control_notasM9["nt_25"];
$nota_6_M9 = $row_datos_control_notasM9["nt_26"];
$nota_7_M9 = $row_datos_control_notasM9["nt_27"];
$notaAu_M9 = $row_datos_control_notasM9["nt_Au2"];


$nota_real_1_M9 = ($row_datos_control_notasM9["nt_21"] * 1)/1;
$nota_real_2_M9 = ($row_datos_control_notasM9["nt_22"] * 1)/1;
$nota_real_3_M9 = ($row_datos_control_notasM9["nt_23"] * 1)/1;
$nota_real_4_M9 = ($row_datos_control_notasM9["nt_24"] * 1)/1;
$nota_real_5_M9 = ($row_datos_control_notasM9["nt_25"] * 1)/1;
$nota_real_6_M9 = ($row_datos_control_notasM9["nt_26"] * 1)/1;
$nota_real_7_M9 = ($row_datos_control_notasM9["nt_27"] * 1)/1;

$total_seven_M9 = $nota_real_1_M9+$nota_real_2_M9+$nota_real_3_M9+$nota_real_4_M9+$nota_real_5_M9+$nota_real_6_M9+$nota_real_7_M9;

$total_seven_con_Au_M9 = $total_seven_M9+ $row_datos_control_notasM9["nt_Au2"];
$total_seven_con_Au_redon_M9 =number_format($total_seven_con_Au_M9, 0, ',', '');



$nota_1_M10 = $row_datos_control_notasM10["nt_21"];
$nota_2_M10 = $row_datos_control_notasM10["nt_22"];
$nota_3_M10 = $row_datos_control_notasM10["nt_23"];
$nota_4_M10 = $row_datos_control_notasM10["nt_24"];
$nota_5_M10 = $row_datos_control_notasM10["nt_25"];
$nota_6_M10 = $row_datos_control_notasM10["nt_26"];
$nota_7_M10 = $row_datos_control_notasM10["nt_27"];
$notaAu_M10 = $row_datos_control_notasM10["nt_Au2"];


$nota_real_1_M10 = ($row_datos_control_notasM10["nt_21"] * 1)/1;
$nota_real_2_M10 = ($row_datos_control_notasM10["nt_22"] * 1)/1;
$nota_real_3_M10 = ($row_datos_control_notasM10["nt_23"] * 1)/1;
$nota_real_4_M10 = ($row_datos_control_notasM10["nt_24"] * 1)/1;
$nota_real_5_M10 = ($row_datos_control_notasM10["nt_25"] * 1)/1;
$nota_real_6_M10 = ($row_datos_control_notasM10["nt_26"] * 1)/1;
$nota_real_7_M10 = ($row_datos_control_notasM10["nt_27"] * 1)/1;

$total_seven_M10 = $nota_real_1_M10+$nota_real_2_M10+$nota_real_3_M10+$nota_real_4_M10+$nota_real_5_M10+$nota_real_6_M10+$nota_real_7_M10;

$total_seven_con_Au_M10 = $total_seven_M10+ $row_datos_control_notasM10["nt_Au2"];
$total_seven_con_Au_redon_M10 =number_format($total_seven_con_Au_M10, 0, ',', '');



$nota_1_M11 = $row_datos_control_notasM11["nt_21"];
$nota_2_M11 = $row_datos_control_notasM11["nt_22"];
$nota_3_M11 = $row_datos_control_notasM11["nt_23"];
$nota_4_M11 = $row_datos_control_notasM11["nt_24"];
$nota_5_M11 = $row_datos_control_notasM11["nt_25"];
$nota_6_M11 = $row_datos_control_notasM11["nt_26"];
$nota_7_M11 = $row_datos_control_notasM11["nt_27"];
$notaAu_M11 = $row_datos_control_notasM11["nt_Au2"];


$nota_real_1_M11 = ($row_datos_control_notasM11["nt_21"] * 1)/1;
$nota_real_2_M11 = ($row_datos_control_notasM11["nt_22"] * 1)/1;
$nota_real_3_M11 = ($row_datos_control_notasM11["nt_23"] * 1)/1;
$nota_real_4_M11 = ($row_datos_control_notasM11["nt_24"] * 1)/1;
$nota_real_5_M11 = ($row_datos_control_notasM11["nt_25"] * 1)/1;
$nota_real_6_M11 = ($row_datos_control_notasM11["nt_26"] * 1)/1;
$nota_real_7_M11 = ($row_datos_control_notasM11["nt_27"] * 1)/1;

$total_seven_M11 = $nota_real_1_M11+$nota_real_2_M11+$nota_real_3_M11+$nota_real_4_M11+$nota_real_5_M11+$nota_real_6_M11+$nota_real_7_M11;

$total_seven_con_Au_M11 = $total_seven_M11+ $row_datos_control_notasM11["nt_Au2"];
$total_seven_con_Au_redon_M11 =number_format($total_seven_con_Au_M11, 0, ',', '');



$nota_1_M12 = $row_datos_control_notasM12["nt_21"];
$nota_2_M12 = $row_datos_control_notasM12["nt_22"];
$nota_3_M12 = $row_datos_control_notasM12["nt_23"];
$nota_4_M12 = $row_datos_control_notasM12["nt_24"];
$nota_5_M12 = $row_datos_control_notasM12["nt_25"];
$nota_6_M12 = $row_datos_control_notasM12["nt_26"];
$nota_7_M12 = $row_datos_control_notasM12["nt_27"];
$notaAu_M12 = $row_datos_control_notasM12["nt_Au2"];


$nota_real_1_M12 = ($row_datos_control_notasM12["nt_21"] * 1)/1;
$nota_real_2_M12 = ($row_datos_control_notasM12["nt_22"] * 1)/1;
$nota_real_3_M12 = ($row_datos_control_notasM12["nt_23"] * 1)/1;
$nota_real_4_M12 = ($row_datos_control_notasM12["nt_24"] * 1)/1;
$nota_real_5_M12 = ($row_datos_control_notasM12["nt_25"] * 1)/1;
$nota_real_6_M12 = ($row_datos_control_notasM12["nt_26"] * 1)/1;
$nota_real_7_M12 = ($row_datos_control_notasM12["nt_27"] * 1)/1;

$total_seven_M12 = $nota_real_1_M12+$nota_real_2_M12+$nota_real_3_M12+$nota_real_4_M12+$nota_real_5_M12+$nota_real_6_M12+$nota_real_7_M12;

$total_seven_con_Au_M12 = $total_seven_M12+ $row_datos_control_notasM12["nt_Au2"];
$total_seven_con_Au_redon_M12 =number_format($total_seven_con_Au_M12, 0, ',', '');



$nota_1_M13 = $row_datos_control_notasM13["nt_21"];
$nota_2_M13 = $row_datos_control_notasM13["nt_22"];
$nota_3_M13 = $row_datos_control_notasM13["nt_23"];
$nota_4_M13 = $row_datos_control_notasM13["nt_24"];
$nota_5_M13 = $row_datos_control_notasM13["nt_25"];
$nota_6_M13 = $row_datos_control_notasM13["nt_26"];
$nota_7_M13 = $row_datos_control_notasM13["nt_27"];
$notaAu_M13 = $row_datos_control_notasM13["nt_Au2"];


$nota_real_1_M13 = ($row_datos_control_notasM13["nt_21"] * 1)/1;
$nota_real_2_M13 = ($row_datos_control_notasM13["nt_22"] * 1)/1;
$nota_real_3_M13 = ($row_datos_control_notasM13["nt_23"] * 1)/1;
$nota_real_4_M13 = ($row_datos_control_notasM13["nt_24"] * 1)/1;
$nota_real_5_M13 = ($row_datos_control_notasM13["nt_25"] * 1)/1;
$nota_real_6_M13 = ($row_datos_control_notasM13["nt_26"] * 1)/1;
$nota_real_7_M13 = ($row_datos_control_notasM13["nt_27"] * 1)/1;

$total_seven_M13 = $nota_real_1_M13+$nota_real_2_M13+$nota_real_3_M13+$nota_real_4_M13+$nota_real_5_M13+$nota_real_6_M13+$nota_real_7_M13;

$total_seven_con_Au_M13 = $total_seven_M13+ $row_datos_control_notasM13["nt_Au2"];
$total_seven_con_Au_redon_M13 =number_format($total_seven_con_Au_M13, 0, ',', '');



$nota_1_M14 = $row_datos_control_notasM14["nt_21"];
$nota_2_M14 = $row_datos_control_notasM14["nt_22"];
$nota_3_M14 = $row_datos_control_notasM14["nt_23"];
$nota_4_M14 = $row_datos_control_notasM14["nt_24"];
$nota_5_M14 = $row_datos_control_notasM14["nt_25"];
$nota_6_M14 = $row_datos_control_notasM14["nt_26"];
$nota_7_M14 = $row_datos_control_notasM14["nt_27"];
$notaAu_M14 = $row_datos_control_notasM14["nt_Au2"];


$nota_real_1_M14 = ($row_datos_control_notasM14["nt_21"] * 1)/1;
$nota_real_2_M14 = ($row_datos_control_notasM14["nt_22"] * 1)/1;
$nota_real_3_M14 = ($row_datos_control_notasM14["nt_23"] * 1)/1;
$nota_real_4_M14 = ($row_datos_control_notasM14["nt_24"] * 1)/1;
$nota_real_5_M14 = ($row_datos_control_notasM14["nt_25"] * 1)/1;
$nota_real_6_M14 = ($row_datos_control_notasM14["nt_26"] * 1)/1;
$nota_real_7_M14 = ($row_datos_control_notasM14["nt_27"] * 1)/1;

$total_seven_M14 = $nota_real_1_M14+$nota_real_2_M14+$nota_real_3_M14+$nota_real_4_M14+$nota_real_5_M14+$nota_real_6_M14+$nota_real_7_M14;

$total_seven_con_Au_M14 = $total_seven_M14+ $row_datos_control_notasM14["nt_Au2"];
$total_seven_con_Au_redon_M14 =number_format($total_seven_con_Au_M14, 0, ',', '');



}






if ($lapso == '3°') {
   

$nota_1_M1 = $row_datos_control_notasM1["nt_31"];
$nota_2_M1 = $row_datos_control_notasM1["nt_32"];
$nota_3_M1 = $row_datos_control_notasM1["nt_33"];
$nota_4_M1 = $row_datos_control_notasM1["nt_34"];
$nota_5_M1 = $row_datos_control_notasM1["nt_35"];
$nota_6_M1 = $row_datos_control_notasM1["nt_36"];
$nota_7_M1 = $row_datos_control_notasM1["nt_37"];
$notaAu_M1 = $row_datos_control_notasM1["nt_Au3"];


$nota_real_1_M1 = ($row_datos_control_notasM1["nt_31"] * 1)/1;
$nota_real_2_M1 = ($row_datos_control_notasM1["nt_32"] * 1)/1;
$nota_real_3_M1 = ($row_datos_control_notasM1["nt_33"] * 1)/1;
$nota_real_4_M1 = ($row_datos_control_notasM1["nt_34"] * 1)/1;
$nota_real_5_M1 = ($row_datos_control_notasM1["nt_35"] * 1)/1;
$nota_real_6_M1 = ($row_datos_control_notasM1["nt_36"] * 1)/1;
$nota_real_7_M1 = ($row_datos_control_notasM1["nt_37"] * 1)/1;

$total_seven_M1 = $nota_real_1_M1+$nota_real_2_M1+$nota_real_3_M1+$nota_real_4_M1+$nota_real_5_M1+$nota_real_6_M1+$nota_real_7_M1;

$total_seven_con_Au_M1 = $total_seven_M1+ $row_datos_control_notasM1["nt_Au3"];
$total_seven_con_Au_redon_M1 =number_format($total_seven_con_Au_M1, 0, ',', '');



$nota_1_M2 = $row_datos_control_notasM2["nt_31"];
$nota_2_M2 = $row_datos_control_notasM2["nt_32"];
$nota_3_M2 = $row_datos_control_notasM2["nt_33"];
$nota_4_M2 = $row_datos_control_notasM2["nt_34"];
$nota_5_M2 = $row_datos_control_notasM2["nt_35"];
$nota_6_M2 = $row_datos_control_notasM2["nt_36"];
$nota_7_M2 = $row_datos_control_notasM2["nt_37"];
$notaAu_M2 = $row_datos_control_notasM2["nt_Au3"];


$nota_real_1_M2 = ($row_datos_control_notasM2["nt_31"] * 1)/1;
$nota_real_2_M2 = ($row_datos_control_notasM2["nt_32"] * 1)/1;
$nota_real_3_M2 = ($row_datos_control_notasM2["nt_33"] * 1)/1;
$nota_real_4_M2 = ($row_datos_control_notasM2["nt_34"] * 1)/1;
$nota_real_5_M2 = ($row_datos_control_notasM2["nt_35"] * 1)/1;
$nota_real_6_M2 = ($row_datos_control_notasM2["nt_36"] * 1)/1;
$nota_real_7_M2 = ($row_datos_control_notasM2["nt_37"] * 1)/1;

$total_seven_M2 = $nota_real_1_M2+$nota_real_2_M2+$nota_real_3_M2+$nota_real_4_M2+$nota_real_5_M2+$nota_real_6_M2+$nota_real_7_M2;

$total_seven_con_Au_M2 = $total_seven_M2+ $row_datos_control_notasM2["nt_Au3"];
$total_seven_con_Au_redon_M2 =number_format($total_seven_con_Au_M2, 0, ',', '');



$nota_1_M3 = $row_datos_control_notasM3["nt_31"];
$nota_2_M3 = $row_datos_control_notasM3["nt_32"];
$nota_3_M3 = $row_datos_control_notasM3["nt_33"];
$nota_4_M3 = $row_datos_control_notasM3["nt_34"];
$nota_5_M3 = $row_datos_control_notasM3["nt_35"];
$nota_6_M3 = $row_datos_control_notasM3["nt_36"];
$nota_7_M3 = $row_datos_control_notasM3["nt_37"];
$notaAu_M3 = $row_datos_control_notasM3["nt_Au3"];


$nota_real_1_M3 = ($row_datos_control_notasM3["nt_31"] * 1)/1;
$nota_real_2_M3 = ($row_datos_control_notasM3["nt_32"] * 1)/1;
$nota_real_3_M3 = ($row_datos_control_notasM3["nt_33"] * 1)/1;
$nota_real_4_M3 = ($row_datos_control_notasM3["nt_34"] * 1)/1;
$nota_real_5_M3 = ($row_datos_control_notasM3["nt_35"] * 1)/1;
$nota_real_6_M3 = ($row_datos_control_notasM3["nt_36"] * 1)/1;
$nota_real_7_M3 = ($row_datos_control_notasM3["nt_37"] * 1)/1;

$total_seven_M3 = $nota_real_1_M3+$nota_real_2_M3+$nota_real_3_M3+$nota_real_4_M3+$nota_real_5_M3+$nota_real_6_M3+$nota_real_7_M3;

$total_seven_con_Au_M3 = $total_seven_M3+ $row_datos_control_notasM3["nt_Au3"];
$total_seven_con_Au_redon_M3 =number_format($total_seven_con_Au_M3, 0, ',', '');


$nota_1_M4 = $row_datos_control_notasM4["nt_31"];
$nota_2_M4 = $row_datos_control_notasM4["nt_32"];
$nota_3_M4 = $row_datos_control_notasM4["nt_33"];
$nota_4_M4 = $row_datos_control_notasM4["nt_34"];
$nota_5_M4 = $row_datos_control_notasM4["nt_35"];
$nota_6_M4 = $row_datos_control_notasM4["nt_36"];
$nota_7_M4 = $row_datos_control_notasM4["nt_37"];
$notaAu_M4 = $row_datos_control_notasM4["nt_Au3"];


$nota_real_1_M4 = ($row_datos_control_notasM4["nt_31"] * 1)/1;
$nota_real_2_M4 = ($row_datos_control_notasM4["nt_32"] * 1)/1;
$nota_real_3_M4 = ($row_datos_control_notasM4["nt_33"] * 1)/1;
$nota_real_4_M4 = ($row_datos_control_notasM4["nt_34"] * 1)/1;
$nota_real_5_M4 = ($row_datos_control_notasM4["nt_35"] * 1)/1;
$nota_real_6_M4 = ($row_datos_control_notasM4["nt_36"] * 1)/1;
$nota_real_7_M4 = ($row_datos_control_notasM4["nt_37"] * 1)/1;

$total_seven_M4 = $nota_real_1_M4+$nota_real_2_M4+$nota_real_3_M4+$nota_real_4_M4+$nota_real_5_M4+$nota_real_6_M4+$nota_real_7_M4;

$total_seven_con_Au_M4 = $total_seven_M4+ $row_datos_control_notasM4["nt_Au3"];
$total_seven_con_Au_redon_M4 =number_format($total_seven_con_Au_M4, 0, ',', '');



$nota_1_M5 = $row_datos_control_notasM5["nt_31"];
$nota_2_M5 = $row_datos_control_notasM5["nt_32"];
$nota_3_M5 = $row_datos_control_notasM5["nt_33"];
$nota_4_M5 = $row_datos_control_notasM5["nt_34"];
$nota_5_M5 = $row_datos_control_notasM5["nt_35"];
$nota_6_M5 = $row_datos_control_notasM5["nt_36"];
$nota_7_M5 = $row_datos_control_notasM5["nt_37"];
$notaAu_M5 = $row_datos_control_notasM5["nt_Au3"];


$nota_real_1_M5 = ($row_datos_control_notasM5["nt_31"] * 1)/1;
$nota_real_2_M5 = ($row_datos_control_notasM5["nt_32"] * 1)/1;
$nota_real_3_M5 = ($row_datos_control_notasM5["nt_33"] * 1)/1;
$nota_real_4_M5 = ($row_datos_control_notasM5["nt_34"] * 1)/1;
$nota_real_5_M5 = ($row_datos_control_notasM5["nt_35"] * 1)/1;
$nota_real_6_M5 = ($row_datos_control_notasM5["nt_36"] * 1)/1;
$nota_real_7_M5 = ($row_datos_control_notasM5["nt_37"] * 1)/1;

$total_seven_M5 = $nota_real_1_M5+$nota_real_2_M5+$nota_real_3_M5+$nota_real_4_M5+$nota_real_5_M5+$nota_real_6_M5+$nota_real_7_M5;

$total_seven_con_Au_M5 = $total_seven_M5+ $row_datos_control_notasM5["nt_Au3"];
$total_seven_con_Au_redon_M5 =number_format($total_seven_con_Au_M5, 0, ',', '');



$nota_1_M6 = $row_datos_control_notasM6["nt_31"];
$nota_2_M6 = $row_datos_control_notasM6["nt_32"];
$nota_3_M6 = $row_datos_control_notasM6["nt_33"];
$nota_4_M6 = $row_datos_control_notasM6["nt_34"];
$nota_5_M6 = $row_datos_control_notasM6["nt_35"];
$nota_6_M6 = $row_datos_control_notasM6["nt_36"];
$nota_7_M6 = $row_datos_control_notasM6["nt_37"];
$notaAu_M6 = $row_datos_control_notasM6["nt_Au3"];


$nota_real_1_M6 = ($row_datos_control_notasM6["nt_31"] * 1)/1;
$nota_real_2_M6 = ($row_datos_control_notasM6["nt_32"] * 1)/1;
$nota_real_3_M6 = ($row_datos_control_notasM6["nt_33"] * 1)/1;
$nota_real_4_M6 = ($row_datos_control_notasM6["nt_34"] * 1)/1;
$nota_real_5_M6 = ($row_datos_control_notasM6["nt_35"] * 1)/1;
$nota_real_6_M6 = ($row_datos_control_notasM6["nt_36"] * 1)/1;
$nota_real_7_M6 = ($row_datos_control_notasM6["nt_37"] * 1)/1;

$total_seven_M6 = $nota_real_1_M6+$nota_real_2_M6+$nota_real_3_M6+$nota_real_4_M6+$nota_real_5_M6+$nota_real_6_M6+$nota_real_7_M6;

$total_seven_con_Au_M6 = $total_seven_M6+ $row_datos_control_notasM6["nt_Au3"];
$total_seven_con_Au_redon_M6 =number_format($total_seven_con_Au_M6, 0, ',', '');



$nota_1_M7 = $row_datos_control_notasM7["nt_31"];
$nota_2_M7 = $row_datos_control_notasM7["nt_32"];
$nota_3_M7 = $row_datos_control_notasM7["nt_33"];
$nota_4_M7 = $row_datos_control_notasM7["nt_34"];
$nota_5_M7 = $row_datos_control_notasM7["nt_35"];
$nota_6_M7 = $row_datos_control_notasM7["nt_36"];
$nota_7_M7 = $row_datos_control_notasM7["nt_37"];
$notaAu_M7 = $row_datos_control_notasM7["nt_Au3"];


$nota_real_1_M7 = ($row_datos_control_notasM7["nt_31"] * 1)/1;
$nota_real_2_M7 = ($row_datos_control_notasM7["nt_32"] * 1)/1;
$nota_real_3_M7 = ($row_datos_control_notasM7["nt_33"] * 1)/1;
$nota_real_4_M7 = ($row_datos_control_notasM7["nt_34"] * 1)/1;
$nota_real_5_M7 = ($row_datos_control_notasM7["nt_35"] * 1)/1;
$nota_real_6_M7 = ($row_datos_control_notasM7["nt_36"] * 1)/1;
$nota_real_7_M7 = ($row_datos_control_notasM7["nt_37"] * 1)/1;

$total_seven_M7 = $nota_real_1_M7+$nota_real_2_M7+$nota_real_3_M7+$nota_real_4_M7+$nota_real_5_M7+$nota_real_6_M7+$nota_real_7_M7;

$total_seven_con_Au_M7 = $total_seven_M7+ $row_datos_control_notasM7["nt_Au3"];
$total_seven_con_Au_redon_M7 =number_format($total_seven_con_Au_M7, 0, ',', '');




$nota_1_M8 = $row_datos_control_notasM8["nt_31"];
$nota_2_M8 = $row_datos_control_notasM8["nt_32"];
$nota_3_M8 = $row_datos_control_notasM8["nt_33"];
$nota_4_M8 = $row_datos_control_notasM8["nt_34"];
$nota_5_M8 = $row_datos_control_notasM8["nt_35"];
$nota_6_M8 = $row_datos_control_notasM8["nt_36"];
$nota_7_M8 = $row_datos_control_notasM8["nt_37"];
$notaAu_M8 = $row_datos_control_notasM8["nt_Au3"];


$nota_real_1_M8 = ($row_datos_control_notasM8["nt_31"] * 1)/1;
$nota_real_2_M8 = ($row_datos_control_notasM8["nt_32"] * 1)/1;
$nota_real_3_M8 = ($row_datos_control_notasM8["nt_33"] * 1)/1;
$nota_real_4_M8 = ($row_datos_control_notasM8["nt_34"] * 1)/1;
$nota_real_5_M8 = ($row_datos_control_notasM8["nt_35"] * 1)/1;
$nota_real_6_M8 = ($row_datos_control_notasM8["nt_36"] * 1)/1;
$nota_real_7_M8 = ($row_datos_control_notasM8["nt_37"] * 1)/1;

$total_seven_M8 = $nota_real_1_M8+$nota_real_2_M8+$nota_real_3_M8+$nota_real_4_M8+$nota_real_5_M8+$nota_real_6_M8+$nota_real_7_M8;

$total_seven_con_Au_M8 = $total_seven_M8+ $row_datos_control_notasM8["nt_Au3"];
$total_seven_con_Au_redon_M8 =number_format($total_seven_con_Au_M8, 0, ',', '');




$nota_1_M9 = $row_datos_control_notasM9["nt_31"];
$nota_2_M9 = $row_datos_control_notasM9["nt_32"];
$nota_3_M9 = $row_datos_control_notasM9["nt_33"];
$nota_4_M9 = $row_datos_control_notasM9["nt_34"];
$nota_5_M9 = $row_datos_control_notasM9["nt_35"];
$nota_6_M9 = $row_datos_control_notasM9["nt_36"];
$nota_7_M9 = $row_datos_control_notasM9["nt_37"];
$notaAu_M9 = $row_datos_control_notasM9["nt_Au3"];


$nota_real_1_M9 = ($row_datos_control_notasM9["nt_31"] * 1)/1;
$nota_real_2_M9 = ($row_datos_control_notasM9["nt_32"] * 1)/1;
$nota_real_3_M9 = ($row_datos_control_notasM9["nt_33"] * 1)/1;
$nota_real_4_M9 = ($row_datos_control_notasM9["nt_34"] * 1)/1;
$nota_real_5_M9 = ($row_datos_control_notasM9["nt_35"] * 1)/1;
$nota_real_6_M9 = ($row_datos_control_notasM9["nt_36"] * 1)/1;
$nota_real_7_M9 = ($row_datos_control_notasM9["nt_37"] * 1)/1;

$total_seven_M9 = $nota_real_1_M9+$nota_real_2_M9+$nota_real_3_M9+$nota_real_4_M9+$nota_real_5_M9+$nota_real_6_M9+$nota_real_7_M9;

$total_seven_con_Au_M9 = $total_seven_M9+ $row_datos_control_notasM9["nt_Au3"];
$total_seven_con_Au_redon_M9 =number_format($total_seven_con_Au_M9, 0, ',', '');



$nota_1_M10 = $row_datos_control_notasM10["nt_31"];
$nota_2_M10 = $row_datos_control_notasM10["nt_32"];
$nota_3_M10 = $row_datos_control_notasM10["nt_33"];
$nota_4_M10 = $row_datos_control_notasM10["nt_34"];
$nota_5_M10 = $row_datos_control_notasM10["nt_35"];
$nota_6_M10 = $row_datos_control_notasM10["nt_36"];
$nota_7_M10 = $row_datos_control_notasM10["nt_37"];
$notaAu_M10 = $row_datos_control_notasM10["nt_Au3"];


$nota_real_1_M10 = ($row_datos_control_notasM10["nt_31"] * 1)/1;
$nota_real_2_M10 = ($row_datos_control_notasM10["nt_32"] * 1)/1;
$nota_real_3_M10 = ($row_datos_control_notasM10["nt_33"] * 1)/1;
$nota_real_4_M10 = ($row_datos_control_notasM10["nt_34"] * 1)/1;
$nota_real_5_M10 = ($row_datos_control_notasM10["nt_35"] * 1)/1;
$nota_real_6_M10 = ($row_datos_control_notasM10["nt_36"] * 1)/1;
$nota_real_7_M10 = ($row_datos_control_notasM10["nt_37"] * 1)/1;

$total_seven_M10 = $nota_real_1_M10+$nota_real_2_M10+$nota_real_3_M10+$nota_real_4_M10+$nota_real_5_M10+$nota_real_6_M10+$nota_real_7_M10;

$total_seven_con_Au_M10 = $total_seven_M10+ $row_datos_control_notasM10["nt_Au3"];
$total_seven_con_Au_redon_M10 =number_format($total_seven_con_Au_M10, 0, ',', '');



$nota_1_M11 = $row_datos_control_notasM11["nt_31"];
$nota_2_M11 = $row_datos_control_notasM11["nt_32"];
$nota_3_M11 = $row_datos_control_notasM11["nt_33"];
$nota_4_M11 = $row_datos_control_notasM11["nt_34"];
$nota_5_M11 = $row_datos_control_notasM11["nt_35"];
$nota_6_M11 = $row_datos_control_notasM11["nt_36"];
$nota_7_M11 = $row_datos_control_notasM11["nt_37"];
$notaAu_M11 = $row_datos_control_notasM11["nt_Au3"];


$nota_real_1_M11 = ($row_datos_control_notasM11["nt_31"] * 1)/1;
$nota_real_2_M11 = ($row_datos_control_notasM11["nt_32"] * 1)/1;
$nota_real_3_M11 = ($row_datos_control_notasM11["nt_33"] * 1)/1;
$nota_real_4_M11 = ($row_datos_control_notasM11["nt_34"] * 1)/1;
$nota_real_5_M11 = ($row_datos_control_notasM11["nt_35"] * 1)/1;
$nota_real_6_M11 = ($row_datos_control_notasM11["nt_36"] * 1)/1;
$nota_real_7_M11 = ($row_datos_control_notasM11["nt_37"] * 1)/1;

$total_seven_M11 = $nota_real_1_M11+$nota_real_2_M11+$nota_real_3_M11+$nota_real_4_M11+$nota_real_5_M11+$nota_real_6_M11+$nota_real_7_M11;

$total_seven_con_Au_M11 = $total_seven_M11+ $row_datos_control_notasM11["nt_Au3"];
$total_seven_con_Au_redon_M11 =number_format($total_seven_con_Au_M11, 0, ',', '');



$nota_1_M12 = $row_datos_control_notasM12["nt_31"];
$nota_2_M12 = $row_datos_control_notasM12["nt_32"];
$nota_3_M12 = $row_datos_control_notasM12["nt_33"];
$nota_4_M12 = $row_datos_control_notasM12["nt_34"];
$nota_5_M12 = $row_datos_control_notasM12["nt_35"];
$nota_6_M12 = $row_datos_control_notasM12["nt_36"];
$nota_7_M12 = $row_datos_control_notasM12["nt_37"];
$notaAu_M12 = $row_datos_control_notasM12["nt_Au3"];


$nota_real_1_M12 = ($row_datos_control_notasM12["nt_31"] * 1)/1;
$nota_real_2_M12 = ($row_datos_control_notasM12["nt_32"] * 1)/1;
$nota_real_3_M12 = ($row_datos_control_notasM12["nt_33"] * 1)/1;
$nota_real_4_M12 = ($row_datos_control_notasM12["nt_34"] * 1)/1;
$nota_real_5_M12 = ($row_datos_control_notasM12["nt_35"] * 1)/1;
$nota_real_6_M12 = ($row_datos_control_notasM12["nt_36"] * 1)/1;
$nota_real_7_M12 = ($row_datos_control_notasM12["nt_37"] * 1)/1;

$total_seven_M12 = $nota_real_1_M12+$nota_real_2_M12+$nota_real_3_M12+$nota_real_4_M12+$nota_real_5_M12+$nota_real_6_M12+$nota_real_7_M12;

$total_seven_con_Au_M12 = $total_seven_M12+ $row_datos_control_notasM12["nt_Au3"];
$total_seven_con_Au_redon_M12 =number_format($total_seven_con_Au_M12, 0, ',', '');



$nota_1_M13 = $row_datos_control_notasM13["nt_31"];
$nota_2_M13 = $row_datos_control_notasM13["nt_32"];
$nota_3_M13 = $row_datos_control_notasM13["nt_33"];
$nota_4_M13 = $row_datos_control_notasM13["nt_34"];
$nota_5_M13 = $row_datos_control_notasM13["nt_35"];
$nota_6_M13 = $row_datos_control_notasM13["nt_36"];
$nota_7_M13 = $row_datos_control_notasM13["nt_37"];
$notaAu_M13 = $row_datos_control_notasM13["nt_Au3"];


$nota_real_1_M13 = ($row_datos_control_notasM13["nt_31"] * 1)/1;
$nota_real_2_M13 = ($row_datos_control_notasM13["nt_32"] * 1)/1;
$nota_real_3_M13 = ($row_datos_control_notasM13["nt_33"] * 1)/1;
$nota_real_4_M13 = ($row_datos_control_notasM13["nt_34"] * 1)/1;
$nota_real_5_M13 = ($row_datos_control_notasM13["nt_35"] * 1)/1;
$nota_real_6_M13 = ($row_datos_control_notasM13["nt_36"] * 1)/1;
$nota_real_7_M13 = ($row_datos_control_notasM13["nt_37"] * 1)/1;

$total_seven_M13 = $nota_real_1_M13+$nota_real_2_M13+$nota_real_3_M13+$nota_real_4_M13+$nota_real_5_M13+$nota_real_6_M13+$nota_real_7_M13;

$total_seven_con_Au_M13 = $total_seven_M13+ $row_datos_control_notasM13["nt_Au3"];
$total_seven_con_Au_redon_M13 =number_format($total_seven_con_Au_M13, 0, ',', '');



$nota_1_M14 = $row_datos_control_notasM14["nt_31"];
$nota_2_M14 = $row_datos_control_notasM14["nt_32"];
$nota_3_M14 = $row_datos_control_notasM14["nt_33"];
$nota_4_M14 = $row_datos_control_notasM14["nt_34"];
$nota_5_M14 = $row_datos_control_notasM14["nt_35"];
$nota_6_M14 = $row_datos_control_notasM14["nt_36"];
$nota_7_M14 = $row_datos_control_notasM14["nt_37"];
$notaAu_M14 = $row_datos_control_notasM14["nt_Au3"];


$nota_real_1_M14 = ($row_datos_control_notasM14["nt_31"] * 1)/1;
$nota_real_2_M14 = ($row_datos_control_notasM14["nt_32"] * 1)/1;
$nota_real_3_M14 = ($row_datos_control_notasM14["nt_33"] * 1)/1;
$nota_real_4_M14 = ($row_datos_control_notasM14["nt_34"] * 1)/1;
$nota_real_5_M14 = ($row_datos_control_notasM14["nt_35"] * 1)/1;
$nota_real_6_M14 = ($row_datos_control_notasM14["nt_36"] * 1)/1;
$nota_real_7_M14 = ($row_datos_control_notasM14["nt_37"] * 1)/1;

$total_seven_M14 = $nota_real_1_M14+$nota_real_2_M14+$nota_real_3_M14+$nota_real_4_M14+$nota_real_5_M14+$nota_real_6_M14+$nota_real_7_M14;

$total_seven_con_Au_M14 = $total_seven_M14+ $row_datos_control_notasM14["nt_Au3"];
$total_seven_con_Au_redon_M14 =number_format($total_seven_con_Au_M14, 0, ',', '');



}





?></b>



</TD>

<TD class="miniborder" style="width:14%; height:15px; font-size: 11px; color:<?php echo $color_imp1; ?>; padding-left: 4px;" align="left">

 <b><?php

$firstape = strtok($row_datos_control['apellidos_estu'], ' ');

$lastape = strstr($row_datos_control['apellidos_estu'], ' ');


if ($lastape[1] != '') {

   $firstCharacterlastape = $lastape[1]; 
}

else {
    $firstCharacterlastape ='';
}
   

                                     echo $firstape; ?> <?php echo $firstCharacterlastape; ?>.</b>   


<?php 

$firstnam = strtok($row_datos_control['nombre_estu'], ' ');

$lastnam = strstr($row_datos_control['nombre_estu'], ' ');

$firstCharacterlastnam = $lastnam[1];    

                                     echo $firstnam; ?> 


</TD>

<TD class="miniborder" style="width:6%; height:32px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">

<?php

if ($nota_1_M1 == '') {

     if ($V1_M1 != '') {
          $not_form1_M1 = '(_)';
     }

     else {
        $not_form1_M1 = '';
     }
  
}
else {

    

    $not_form1_M1_cad = number_format($nota_real_1_M1);


    if ($not_form1_M1_cad < $el_puntaje_minimoooxx ) {
     $not_form1_M1_cad = "<span style='color:red;'>1</span>";
                                                     }


     else { $not_form1_M1_cad = ''; }



    $not_form1_M1 = "(".$not_form1_M1_cad.")";
}





if ($nota_2_M1 == '') {

 if ($V2_M1 != '') {
          $not_form2_M1 = '(_)';
     }

     else {
        $not_form2_M1 = '';
     }


}
else {
    $not_form2_M1_cad = number_format($nota_real_2_M1);

        if ($not_form2_M1_cad < $el_puntaje_minimoooxx ) {
     $not_form2_M1_cad = "<span style='color:red;'>2</span>";
                                                     }

 else { $not_form2_M1_cad = ''; }


    $not_form2_M1 = "(".$not_form2_M1_cad.")";
}


if ($nota_3_M1 == '') {

 if ($V3_M1 != '') {
          $not_form3_M1 = '(_)';
     }

     else {
        $not_form3_M1 = '';
     }


}
else {
    $not_form3_M1_cad = number_format($nota_real_3_M1);

    if ($not_form3_M1_cad < $el_puntaje_minimoooxx ) {
     $not_form3_M1_cad = "<span style='color:red;'>3</span>";
                                                     }

                                                      else { $not_form3_M1_cad = ''; }


     $not_form3_M1 = "(".$not_form3_M1_cad.")";
}



if ($nota_4_M1 == '') {
  

 if ($V4_M1 != '') {
          $not_form4_M1 = '(_)';
     }

     else {
        $not_form4_M1 = '';
     }

}
else {
    $not_form4_M1_cad = number_format($nota_real_4_M1);

    if ($not_form4_M1_cad < $el_puntaje_minimoooxx ) {
     $not_form4_M1_cad = "<span style='color:red;'>4</span>";
                                                     }

                                                      else { $not_form4_M1_cad = ''; }


     $not_form4_M1 = "(".$not_form4_M1_cad.")";
}


if ($nota_5_M1 == '') {
    
 if ($V5_M1 != '') {
          $not_form5_M1 = '(_)';
     }

     else {
        $not_form5_M1 = '';
     }


}
else {
    $not_form5_M1_cad = number_format($nota_real_5_M1);

    if ($not_form5_M1_cad < $el_puntaje_minimoooxx ) {
     $not_form5_M1_cad = "<span style='color:red;'>5</span>";
                                                     }

                                                      else { $not_form5_M1_cad = ''; }


     $not_form5_M1 = "(".$not_form5_M1_cad.")";
}


if ($nota_6_M1 == '') {
  
 if ($V6_M1 != '') {
          $not_form6_M1 = '(_)';
     }

     else {
        $not_form6_M1 = '';
     }

}
else {
    $not_form6_M1_cad = number_format($nota_real_6_M1);

    if ($not_form6_M1_cad < $el_puntaje_minimoooxx ) {
     $not_form6_M1_cad = "<span style='color:red;'>6</span>";
                                                     }

                                                      else { $not_form6_M1_cad = ''; }


     $not_form6_M1 = "(".$not_form6_M1_cad.")";
}

if ($nota_7_M1 == '') {

  if ($V7_M1 != '') {
          $not_form7_M1 = '(_)';
     }

     else {
        $not_form7_M1 = '';
     }

}
else {
    $not_form7_M1_cad = number_format($nota_real_7_M1);


    if ($not_form7_M1_cad < $el_puntaje_minimoooxx ) {
     $not_form7_M1_cad = "<span style='color:red;'>7</span>";
                                                     }

                                                      else { $not_form7_M1_cad = ''; }


     $not_form7_M1 = "(".$not_form7_M1_cad.")";
}



?>









   <?php echo $not_form1_M1;?>.<?php echo $not_form2_M1;?>.<?php echo $not_form3_M1;?><br><?php echo $not_form4_M1;?>.<?php echo $not_form5_M1;?>.<?php echo $not_form6_M1;?><br><?php echo $not_form7_M1;?>



</TD>



<TD class="miniborder" style="width:6%; height:32px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">

<?php

if ($nota_1_M2 == '') {

     if ($V1_M2 != '') {
          $not_form1_M2 = '(_)';
     }

     else {
        $not_form1_M2 = '';
     }
  
}
else {
    $not_form1_M2_cad = number_format($nota_real_1_M2);


    if ($not_form1_M2_cad < $el_puntaje_minimoooxx ) {
     $not_form1_M2_cad = "<span style='color:red;'>1</span>";
                                                     }

                                                      else { $not_form1_M2_cad = ''; }


    $not_form1_M2 = "(".$not_form1_M2_cad.")";
}





if ($nota_2_M2 == '') {

 if ($V2_M2 != '') {
          $not_form2_M2 = '(_)';
     }

     else {
        $not_form2_M2 = '';
     }


}
else {
    $not_form2_M2_cad = number_format($nota_real_2_M2);


    if ($not_form2_M2_cad < $el_puntaje_minimoooxx ) {
     $not_form2_M2_cad = "<span style='color:red;'>2</span>";
                                                     }

                                                      else { $not_form2_M2_cad = ''; }


    $not_form2_M2 = "(".$not_form2_M2_cad.")";
}


if ($nota_3_M2 == '') {

 if ($V3_M2 != '') {
          $not_form3_M2 = '(_)';
     }

     else {
        $not_form3_M2 = '';
     }


}
else {
    $not_form3_M2_cad = number_format($nota_real_3_M2);


    if ($not_form3_M2_cad < $el_puntaje_minimoooxx ) {
     $not_form3_M2_cad = "<span style='color:red;'>3</span>";
                                                     }

                                                      else { $not_form3_M2_cad = ''; }


     $not_form3_M2 = "(".$not_form3_M2_cad.")";
}


if ($nota_4_M2 == '') {
  

 if ($V4_M2 != '') {
          $not_form4_M2 = '(_)';
     }

     else {
        $not_form4_M2 = '';
     }

}
else {
    $not_form4_M2_cad = number_format($nota_real_4_M2);


    if ($not_form4_M2_cad < $el_puntaje_minimoooxx ) {
     $not_form4_M2_cad = "<span style='color:red;'>4</span>";
                                                     }

                                                      else { $not_form4_M2_cad = ''; }


     $not_form4_M2 = "(".$not_form4_M2_cad.")";
}


if ($nota_5_M2 == '') {
    
 if ($V5_M2 != '') {
          $not_form5_M2 = '(_)';
     }

     else {
        $not_form5_M2 = '';
     }


}
else {
    $not_form5_M2_cad = number_format($nota_real_5_M2);

    if ($not_form5_M2_cad < $el_puntaje_minimoooxx ) {
     $not_form5_M2_cad = "<span style='color:red;'>5</span>";
                                                     }

                                                      else { $not_form5_M2_cad = ''; }


     $not_form5_M2 = "(".$not_form5_M2_cad.")";
}


if ($nota_6_M2 == '') {
  
 if ($V6_M2 != '') {
          $not_form6_M2 = '(_)';
     }

     else {
        $not_form6_M2 = '';
     }

}
else {
    $not_form6_M2_cad = number_format($nota_real_6_M2);


    if ($not_form6_M2_cad < $el_puntaje_minimoooxx ) {
     $not_form6_M2_cad = "<span style='color:red;'>6</span>";
                                                     }

                                                      else { $not_form6_M2_cad = ''; }


     $not_form6_M2 = "(".$not_form6_M2_cad.")";
}

if ($nota_7_M2 == '') {

  if ($V7_M2 != '') {
          $not_form7_M2 = '(_)';
     }

     else {
        $not_form7_M2 = '';
     }

}
else {
    $not_form7_M2_cad = number_format($nota_real_7_M2);

    if ($not_form7_M2_cad < $el_puntaje_minimoooxx ) {
     $not_form7_M2_cad = "<span style='color:red;'>7</span>";
                                                     }

                                                      else { $not_form7_M2_cad = ''; }


     $not_form7_M2 = "(".$not_form7_M2_cad.")";
}

?>


   <?php echo $not_form1_M2;?>.<?php echo $not_form2_M2;?>.<?php echo $not_form3_M2;?><br><?php echo $not_form4_M2;?>.<?php echo $not_form5_M2;?>.<?php echo $not_form6_M2;?><br><?php echo $not_form7_M2;?>






</TD>

<TD class="miniborderleft" style="width:6%; height:32px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">

<?php

if ($nota_1_M3 == '') {

     if ($V1_M3 != '') {
          $not_form1_M3 = '(_)';
     }

     else {
        $not_form1_M3 = '';
     }
  
}
else {
    $not_form1_M3_cad = number_format($nota_real_1_M3);


    if ($not_form1_M3_cad < $el_puntaje_minimoooxx ) {
     $not_form1_M3_cad = "<span style='color:red;'>1</span>";
                                                     }

                                                      else { $not_form1_M3_cad = ''; }


    $not_form1_M3 = "(".$not_form1_M3_cad.")";
}





if ($nota_2_M3 == '') {

 if ($V2_M3 != '') {
          $not_form2_M3 = '(_)';
     }

     else {
        $not_form2_M3 = '';
     }


}
else {
    $not_form2_M3_cad = number_format($nota_real_2_M3);


    if ($not_form2_M3_cad < $el_puntaje_minimoooxx ) {
     $not_form2_M3_cad = "<span style='color:red;'>2</span>";
                                                     }

                                                     else { $not_form2_M3_cad = ''; }


    $not_form2_M3 = "(".$not_form2_M3_cad.")";
}


if ($nota_3_M3 == '') {

 if ($V3_M3 != '') {
          $not_form3_M3 = '(_)';
     }

     else {
        $not_form3_M3 = '';
     }


}
else {
    $not_form3_M3_cad = number_format($nota_real_3_M3);

    if ($not_form3_M3_cad < $el_puntaje_minimoooxx ) {
     $not_form3_M3_cad = "<span style='color:red;'>3</span>";
                                                     }

                                                     else { $not_form3_M3_cad = ''; }


     $not_form3_M3 = "(".$not_form3_M3_cad.")";
}


if ($nota_4_M3 == '') {
  

 if ($V4_M3 != '') {
          $not_form4_M3 = '(_)';
     }

     else {
        $not_form4_M3 = '';
     }

}
else {
    $not_form4_M3_cad = number_format($nota_real_4_M3);


    if ($not_form4_M3_cad < $el_puntaje_minimoooxx ) {
     $not_form4_M3_cad = "<span style='color:red;'>4</span>";
                                                     }

                                                     else { $not_form4_M3_cad = ''; }

     $not_form4_M3 = "(".$not_form4_M3_cad.")";
}


if ($nota_5_M3 == '') {
    
 if ($V5_M3 != '') {
          $not_form5_M3 = '(_)';
     }

     else {
        $not_form5_M3 = '';
     }


}
else {
    $not_form5_M3_cad = number_format($nota_real_5_M3);

    if ($not_form5_M3_cad < $el_puntaje_minimoooxx ) {
     $not_form5_M3_cad = "<span style='color:red;'>5</span>";
                                                     }

                                                     else { $not_form5_M3_cad = ''; }

     $not_form5_M3 = "(".$not_form5_M3_cad.")";
}


if ($nota_6_M3 == '') {
  
 if ($V6_M3 != '') {
          $not_form6_M3 = '(_)';
     }

     else {
        $not_form6_M3 = '';
     }

}
else {
    $not_form6_M3_cad = number_format($nota_real_6_M3);

    if ($not_form6_M3_cad < $el_puntaje_minimoooxx ) {
     $not_form6_M3_cad = "<span style='color:red;'>6</span>";
                                                     }

                                                     else { $not_form6_M3_cad = ''; }


     $not_form6_M3 = "(".$not_form6_M3_cad.")";
}

if ($nota_7_M3 == '') {

  if ($V7_M3 != '') {
          $not_form7_M3 = '(_)';
     }

     else {
        $not_form7_M3 = '';
     }

}
else {
    $not_form7_M3_cad = number_format($nota_real_7_M3);

    if ($not_form7_M3_cad < $el_puntaje_minimoooxx ) {
     $not_form7_M3_cad = "<span style='color:red;'>7</span>";
                                                     }

                                                     else { $not_form7_M3_cad = ''; }


     $not_form7_M3 = "(".$not_form7_M3_cad.")";
}

?>


   <?php echo $not_form1_M3;?>.<?php echo $not_form2_M3;?>.<?php echo $not_form3_M3;?><br><?php echo $not_form4_M3;?>.<?php echo $not_form5_M3;?>.<?php echo $not_form6_M3;?><br><?php echo $not_form7_M3;?>







</TD>
<TD class="miniborder" style="width:6%; height:32px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">

<?php

if ($nota_1_M4 == '') {

     if ($V1_M4 != '') {
          $not_form1_M4 = '(_)';
     }

     else {
        $not_form1_M4 = '';
     }
  
}
else {
    $not_form1_M4_cad = number_format($nota_real_1_M4);


        if ($not_form1_M4_cad < $el_puntaje_minimoooxx ) {
     $not_form1_M4_cad = "<span style='color:red;'>1</span>";
                                                     }

                                                     else { $not_form1_M4_cad = ''; }

    $not_form1_M4 = "(".$not_form1_M4_cad.")";
}





if ($nota_2_M4 == '') {

 if ($V2_M4 != '') {
          $not_form2_M4 = '(_)';
     }

     else {
        $not_form2_M4 = '';
     }


}
else {
    $not_form2_M4_cad = number_format($nota_real_2_M4);


     if ($not_form2_M4_cad < $el_puntaje_minimoooxx ) {
     $not_form2_M4_cad = "<span style='color:red;'>2</span>";
                                                     }

                                                      else { $not_form2_M4_cad = ''; }

    $not_form2_M4 = "(".$not_form2_M4_cad.")";
}


if ($nota_3_M4 == '') {

 if ($V3_M4 != '') {
          $not_form3_M4 = '(_)';
     }

     else {
        $not_form3_M4 = '';
     }


}
else {
    $not_form3_M4_cad = number_format($nota_real_3_M4);

 if ($not_form3_M4_cad < $el_puntaje_minimoooxx ) {
     $not_form3_M4_cad = "<span style='color:red;'>3</span>";
                                                     }

                                                      else { $not_form3_M4_cad = ''; }

     $not_form3_M4 = "(".$not_form3_M4_cad.")";
}


if ($nota_4_M4 == '') {
  

 if ($V4_M4 != '') {
          $not_form4_M4 = '(_)';
     }

     else {
        $not_form4_M4 = '';
     }

}
else {
    $not_form4_M4_cad = number_format($nota_real_4_M4);

 if ($not_form4_M4_cad < $el_puntaje_minimoooxx ) {
     $not_form4_M4_cad = "<span style='color:red;'>4</span>";
                                                     }

                                                      else { $not_form4_M4_cad = ''; }

     $not_form4_M4 = "(".$not_form4_M4_cad.")";
}


if ($nota_5_M4 == '') {
    
 if ($V5_M4 != '') {
          $not_form5_M4 = '(_)';
     }

     else {
        $not_form5_M4 = '';
     }


}
else {
    $not_form5_M4_cad = number_format($nota_real_5_M4);

 if ($not_form5_M4_cad < $el_puntaje_minimoooxx ) {
     $not_form5_M4_cad = "<span style='color:red;'>5</span>";
                                                     }

                                                      else { $not_form5_M4_cad = ''; }

     $not_form5_M4 = "(".$not_form5_M4_cad.")";
}


if ($nota_6_M4 == '') {
  
 if ($V6_M4 != '') {
          $not_form6_M4 = '(_)';
     }

     else {
        $not_form6_M4 = '';
     }

}
else {
    $not_form6_M4_cad = number_format($nota_real_6_M4);

 if ($not_form6_M4_cad < $el_puntaje_minimoooxx ) {
     $not_form6_M4_cad = "<span style='color:red;'>6</span>";
                                                     }

                                                      else { $not_form6_M4_cad = ''; }


     $not_form6_M4 = "(".$not_form6_M4_cad.")";
}

if ($nota_7_M4 == '') {

  if ($V7_M4 != '') {
          $not_form7_M4 = '(_)';
     }

     else {
        $not_form7_M4 = '';
     }

}
else {
    $not_form7_M4_cad = number_format($nota_real_7_M4);


 if ($not_form7_M4_cad < $el_puntaje_minimoooxx ) {
     $not_form7_M4_cad = "<span style='color:red;'>7</span>";
                                                     }

                                                      else { $not_form7_M4_cad = ''; }

     $not_form7_M4 = "(".$not_form7_M4_cad.")";
}

?>


   <?php echo $not_form1_M4;?>.<?php echo $not_form2_M4;?>.<?php echo $not_form3_M4;?><br><?php echo $not_form4_M4;?>.<?php echo $not_form5_M4;?>.<?php echo $not_form6_M4;?><br><?php echo $not_form7_M4;?>



</TD>

<TD class="miniborderleft" style="width:6%; height:32px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">

<?php

if ($nota_1_M5 == '') {

     if ($V1_M5 != '') {
          $not_form1_M5 = '(_)';
     }

     else {
        $not_form1_M5 = '';
     }
  
}
else {
    $not_form1_M5_cad = number_format($nota_real_1_M5);

     if ($not_form1_M5_cad < $el_puntaje_minimoooxx ) {
     $not_form1_M5_cad = "<span style='color:red;'>1</span>";
                                                     }

                                                      else { $not_form1_M5_cad = ''; }

    $not_form1_M5 = "(".$not_form1_M5_cad.")";
}





if ($nota_2_M5 == '') {

 if ($V2_M5 != '') {
          $not_form2_M5 = '(_)';
     }

     else {
        $not_form2_M5 = '';
     }


}
else {
    $not_form2_M5_cad = number_format($nota_real_2_M5);

     if ($not_form2_M5_cad < $el_puntaje_minimoooxx ) {
     $not_form2_M5_cad = "<span style='color:red;'>2</span>";
                                                     }

                                                     else { $not_form2_M5_cad = ''; }


    $not_form2_M5 = "(".$not_form2_M5_cad.")";
}


if ($nota_3_M5 == '') {

 if ($V3_M5 != '') {
          $not_form3_M5 = '(_)';
     }

     else {
        $not_form3_M5 = '';
     }


}
else {
    $not_form3_M5_cad = number_format($nota_real_3_M5);

     if ($not_form3_M5_cad < $el_puntaje_minimoooxx ) {
     $not_form3_M5_cad = "<span style='color:red;'>3</span>";
                                                     }

                                                     else { $not_form3_M5_cad = ''; }

     $not_form3_M5 = "(".$not_form3_M5_cad.")";
}


if ($nota_4_M5 == '') {
  

 if ($V4_M5 != '') {
          $not_form4_M5 = '(_)';
     }

     else {
        $not_form4_M5 = '';
     }

}
else {
    $not_form4_M5_cad = number_format($nota_real_4_M5);

     if ($not_form4_M5_cad < $el_puntaje_minimoooxx ) {
     $not_form4_M5_cad = "<span style='color:red;'>4</span>";
                                                     }

                                                     else { $not_form4_M5_cad = ''; }

     $not_form4_M5 = "(".$not_form4_M5_cad.")";
}


if ($nota_5_M5 == '') {
    
 if ($V5_M5 != '') {
          $not_form5_M5 = '(_)';
     }

     else {
        $not_form5_M5 = '';
     }


}
else {
    $not_form5_M5_cad = number_format($nota_real_5_M5);


     if ($not_form5_M5_cad < $el_puntaje_minimoooxx ) {
     $not_form5_M5_cad = "<span style='color:red;'>5</span>";
                                                     }

                                                     else { $not_form5_M5_cad = ''; }

     $not_form5_M5 = "(".$not_form5_M5_cad.")";
}


if ($nota_6_M5 == '') {
  
 if ($V6_M5 != '') {
          $not_form6_M5 = '(_)';
     }

     else {
        $not_form6_M5 = '';
     }

}
else {
    $not_form6_M5_cad = number_format($nota_real_6_M5);


     if ($not_form6_M5_cad < $el_puntaje_minimoooxx ) {
     $not_form6_M5_cad = "<span style='color:red;'>6</span>";
                                                     }

                                                     else { $not_form6_M5_cad = ''; }

     $not_form6_M5 = "(".$not_form6_M5_cad.")";
}

if ($nota_7_M5 == '') {

  if ($V7_M5 != '') {
          $not_form7_M5 = '(_)';
     }

     else {
        $not_form7_M5 = '';
     }

}
else {
    $not_form7_M5_cad = number_format($nota_real_7_M5);

     if ($not_form7_M5_cad < $el_puntaje_minimoooxx ) {
     $not_form7_M5_cad = "<span style='color:red;'>7</span>";
                                                     }

                                                     else { $not_form7_M5_cad = ''; }


     $not_form7_M5 = "(".$not_form7_M5_cad.")";
}

?>


   <?php echo $not_form1_M5;?>.<?php echo $not_form2_M5;?>.<?php echo $not_form3_M5;?><br><?php echo $not_form4_M5;?>.<?php echo $not_form5_M5;?>.<?php echo $not_form6_M5;?><br><?php echo $not_form7_M5;?>






</TD>
<TD class="miniborder" style="width:6%; height:32px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">

<?php

if ($nota_1_M6 == '') {

     if ($V1_M6 != '') {
          $not_form1_M6 = '(_)';
     }

     else {
        $not_form1_M6 = '';
     }
  
}
else {
    $not_form1_M6_cad = number_format($nota_real_1_M6);


         if ($not_form1_M6_cad < $el_puntaje_minimoooxx ) {
     $not_form1_M6_cad = "<span style='color:red;'>1</span>";
                                                     }

                                                     else { $not_form1_M6_cad = ''; }

    $not_form1_M6 = "(".$not_form1_M6_cad.")";
}





if ($nota_2_M6 == '') {

 if ($V2_M6 != '') {
          $not_form2_M6 = '(_)';
     }

     else {
        $not_form2_M6 = '';
     }


}
else {
    $not_form2_M6_cad = number_format($nota_real_2_M6);

         if ($not_form2_M6_cad < $el_puntaje_minimoooxx ) {
     $not_form2_M6_cad = "<span style='color:red;'>2</span>";
                                                     }

                                                      else { $not_form2_M6_cad = ''; }


    $not_form2_M6 = "(".$not_form2_M6_cad.")";
}


if ($nota_3_M6 == '') {

 if ($V3_M6 != '') {
          $not_form3_M6 = '(_)';
     }

     else {
        $not_form3_M6 = '';
     }


}
else {
    $not_form3_M6_cad = number_format($nota_real_3_M6);


         if ($not_form3_M6_cad < $el_puntaje_minimoooxx ) {
     $not_form3_M6_cad = "<span style='color:red;'>3</span>";
                                                     }

                                                      else { $not_form3_M6_cad = ''; }

     $not_form3_M6 = "(".$not_form3_M6_cad.")";
}


if ($nota_4_M6 == '') {
  

 if ($V4_M6 != '') {
          $not_form4_M6 = '(_)';
     }

     else {
        $not_form4_M6 = '';
     }

}
else {
    $not_form4_M6_cad = number_format($nota_real_4_M6);


         if ($not_form4_M6_cad < $el_puntaje_minimoooxx ) {
     $not_form4_M6_cad = "<span style='color:red;'>4</span>";
                                                     }

                                                      else { $not_form4_M6_cad = ''; }

     $not_form4_M6 = "(".$not_form4_M6_cad.")";
}


if ($nota_5_M6 == '') {
    
 if ($V5_M6 != '') {
          $not_form5_M6 = '(_)';
     }

     else {
        $not_form5_M6 = '';
     }


}
else {
    $not_form5_M6_cad = number_format($nota_real_5_M6);

         if ($not_form5_M6_cad < $el_puntaje_minimoooxx ) {
     $not_form5_M6_cad = "<span style='color:red;'>5</span>";
                                                     }

                                                      else { $not_form5_M6_cad = ''; }

     $not_form5_M6 = "(".$not_form5_M6_cad.")";
}


if ($nota_6_M6 == '') {
  
 if ($V6_M6 != '') {
          $not_form6_M6 = '(_)';
     }

     else {
        $not_form6_M6 = '';
     }

}
else {
    $not_form6_M6_cad = number_format($nota_real_6_M6);


         if ($not_form6_M6_cad < $el_puntaje_minimoooxx ) {
     $not_form6_M6_cad = "<span style='color:red;'>6</span>";
                                                     }

                                                      else { $not_form6_M6_cad = ''; }


     $not_form6_M6 = "(".$not_form6_M6_cad.")";
}

if ($nota_7_M6 == '') {

  if ($V7_M6 != '') {
          $not_form7_M6 = '(_)';
     }

     else {
        $not_form7_M6 = '';
     }

}
else {
    $not_form7_M6_cad = number_format($nota_real_7_M6);

         if ($not_form7_M6_cad < $el_puntaje_minimoooxx ) {
     $not_form7_M6_cad = "<span style='color:red;'>7</span>";
                                                     }

                                                      else { $not_form7_M6_cad = ''; }

     $not_form7_M6 = "(".$not_form7_M6_cad.")";
}

?>


   <?php echo $not_form1_M6;?>.<?php echo $not_form2_M6;?>.<?php echo $not_form3_M6;?><br><?php echo $not_form4_M6;?>.<?php echo $not_form5_M6;?>.<?php echo $not_form6_M6;?><br><?php echo $not_form7_M6;?>




</TD>

<TD class="miniborderleft" style="width:6%; height:32px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">


<?php

if ($nota_1_M7 == '') {

     if ($V1_M7 != '') {
          $not_form1_M7 = '(_)';
     }

     else {
        $not_form1_M7 = '';
     }
  
}
else {
    $not_form1_M7_cad = number_format($nota_real_1_M7);


         if ($not_form1_M7_cad < $el_puntaje_minimoooxx ) {
     $not_form1_M7_cad = "<span style='color:red;'>1</span>";
                                                     }

                                                      else { $not_form1_M7_cad = ''; }


    $not_form1_M7 = "(".$not_form1_M7_cad.")";
}





if ($nota_2_M7 == '') {

 if ($V2_M7 != '') {
          $not_form2_M7 = '(_)';
     }

     else {
        $not_form2_M7 = '';
     }


}
else {
    $not_form2_M7_cad = number_format($nota_real_2_M7);

         if ($not_form2_M7_cad < $el_puntaje_minimoooxx ) {
     $not_form2_M7_cad = "<span style='color:red;'>2</span>";
                                                     }

                                                      else { $not_form2_M7_cad = ''; }


    $not_form2_M7 = "(".$not_form2_M7_cad.")";
}


if ($nota_3_M7 == '') {

 if ($V3_M7 != '') {
          $not_form3_M7 = '(_)';
     }

     else {
        $not_form3_M7 = '';
     }


}
else {
    $not_form3_M7_cad = number_format($nota_real_3_M7);

         if ($not_form3_M7_cad < $el_puntaje_minimoooxx ) {
     $not_form3_M7_cad = "<span style='color:red;'>3</span>";
                                                     }

                                                      else { $not_form3_M7_cad = ''; }

     $not_form3_M7 = "(".$not_form3_M7_cad.")";
}


if ($nota_4_M7 == '') {
  

 if ($V4_M7 != '') {
          $not_form4_M7 = '(_)';
     }

     else {
        $not_form4_M7 = '';
     }

}
else {
    $not_form4_M7_cad = number_format($nota_real_4_M7);

         if ($not_form4_M7_cad < $el_puntaje_minimoooxx ) {
     $not_form4_M7_cad = "<span style='color:red;'>4</span>";
                                                     }

                                                      else { $not_form4_M7_cad = ''; }


     $not_form4_M7 = "(".$not_form4_M7_cad.")";
}


if ($nota_5_M7 == '') {
    
 if ($V5_M7 != '') {
          $not_form5_M7 = '(_)';
     }

     else {
        $not_form5_M7 = '';
     }


}
else {
    $not_form5_M7_cad = number_format($nota_real_5_M7);

         if ($not_form5_M7_cad < $el_puntaje_minimoooxx ) {
     $not_form5_M7_cad = "<span style='color:red;'>5</span>";
                                                     }

                                                      else { $not_form5_M7_cad = ''; }


     $not_form5_M7 = "(".$not_form5_M7_cad.")";
}


if ($nota_6_M7 == '') {
  
 if ($V6_M7 != '') {
          $not_form6_M7 = '(_)';
     }

     else {
        $not_form6_M7 = '';
     }

}
else {
    $not_form6_M7_cad = number_format($nota_real_6_M7);

         if ($not_form6_M7_cad < $el_puntaje_minimoooxx ) {
     $not_form6_M7_cad = "<span style='color:red;'>6</span>";
                                                     }

                                                      else { $not_form6_M7_cad = ''; }


     $not_form6_M7 = "(".$not_form6_M7_cad.")";
}

if ($nota_7_M7 == '') {

  if ($V7_M7 != '') {
          $not_form7_M7 = '(_)';
     }

     else {
        $not_form7_M7 = '';
     }

}
else {
    $not_form7_M7_cad = number_format($nota_real_7_M7);

         if ($not_form7_M7_cad < $el_puntaje_minimoooxx ) {
     $not_form7_M7_cad = "<span style='color:red;'>7</span>";
                                                     }

                                                      else { $not_form7_M7_cad = ''; }


     $not_form7_M7 = "(".$not_form7_M7_cad.")";
}

?>


   <?php echo $not_form1_M7;?>.<?php echo $not_form2_M7;?>.<?php echo $not_form3_M7;?><br><?php echo $not_form4_M7;?>.<?php echo $not_form5_M7;?>.<?php echo $not_form6_M7;?><br><?php echo $not_form7_M7;?>




</TD>




<TD class="miniborder" style="width:6%; height:32px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">


<?php

if ($nota_1_M8 == '') {

     if ($V1_M8 != '') {
          $not_form1_M8 = '(_)';
     }

     else {
        $not_form1_M8 = '';
     }
  
}
else {
    $not_form1_M8_cad = number_format($nota_real_1_M8);


             if ($not_form1_M8_cad < $el_puntaje_minimoooxx ) {
     $not_form1_M8_cad = "<span style='color:red;'>1</span>";
                                                     }

                                                      else { $not_form1_M8_cad = ''; }

    $not_form1_M8 = "(".$not_form1_M8_cad.")";
}





if ($nota_2_M8 == '') {

 if ($V2_M8 != '') {
          $not_form2_M8 = '(_)';
     }

     else {
        $not_form2_M8 = '';
     }


}
else {
    $not_form2_M8_cad = number_format($nota_real_2_M8);



             if ($not_form2_M8_cad < $el_puntaje_minimoooxx ) {
     $not_form2_M8_cad = "<span style='color:red;'>2</span>";
                                                     }

                                                      else { $not_form2_M8_cad = ''; }

    $not_form2_M8 = "(".$not_form2_M8_cad.")";
}


if ($nota_3_M8 == '') {

 if ($V3_M8 != '') {
          $not_form3_M8 = '(_)';
     }

     else {
        $not_form3_M8 = '';
     }


}
else {
    $not_form3_M8_cad = number_format($nota_real_3_M8);


             if ($not_form3_M8_cad < $el_puntaje_minimoooxx ) {
     $not_form3_M8_cad = "<span style='color:red;'>3</span>";
                                                     }

                                                      else { $not_form3_M8_cad = ''; }

     $not_form3_M8 = "(".$not_form3_M8_cad.")";
}


if ($nota_4_M8 == '') {
  

 if ($V4_M8 != '') {
          $not_form4_M8 = '(_)';
     }

     else {
        $not_form4_M8 = '';
     }

}
else {
    $not_form4_M8_cad = number_format($nota_real_4_M8);


             if ($not_form4_M8_cad < $el_puntaje_minimoooxx ) {
     $not_form4_M8_cad = "<span style='color:red;'>4</span>";
                                                     }

                                                      else { $not_form4_M8_cad = ''; }

     $not_form4_M8 = "(".$not_form4_M8_cad.")";
}


if ($nota_5_M8 == '') {
    
 if ($V5_M8 != '') {
          $not_form5_M8 = '(_)';
     }

     else {
        $not_form5_M8 = '';
     }


}
else {
    $not_form5_M8_cad = number_format($nota_real_5_M8);



             if ($not_form5_M8_cad < $el_puntaje_minimoooxx ) {
     $not_form5_M8_cad = "<span style='color:red;'>5</span>";
                                                     }

                                                      else { $not_form5_M8_cad = ''; }

     $not_form5_M8 = "(".$not_form5_M8_cad.")";
}


if ($nota_6_M8 == '') {
  
 if ($V6_M8 != '') {
          $not_form6_M8 = '(_)';
     }

     else {
        $not_form6_M8 = '';
     }

}
else {
    $not_form6_M8_cad = number_format($nota_real_6_M8);



             if ($not_form6_M8_cad < $el_puntaje_minimoooxx ) {
     $not_form6_M8_cad = "<span style='color:red;'>6</span>";
                                                     }

                                                      else { $not_form6_M8_cad = ''; }


     $not_form6_M8 = "(".$not_form6_M8_cad.")";
}

if ($nota_7_M8 == '') {

  if ($V7_M8 != '') {
          $not_form7_M8 = '(_)';
     }

     else {
        $not_form7_M8 = '';
     }

}
else {
    $not_form7_M8_cad = number_format($nota_real_7_M8);


             if ($not_form7_M8_cad < $el_puntaje_minimoooxx ) {
     $not_form7_M8_cad = "<span style='color:red;'>7</span>";
                                                     }

                                                      else { $not_form7_M8_cad = ''; }


     $not_form7_M8 = "(".$not_form7_M8_cad.")";
}

?>


   <?php echo $not_form1_M8;?>.<?php echo $not_form2_M8;?>.<?php echo $not_form3_M8;?><br><?php echo $not_form4_M8;?>.<?php echo $not_form5_M8;?>.<?php echo $not_form6_M8;?><br><?php echo $not_form7_M8;?>




</TD>

<TD class="miniborderleft" style="width:6%; height:32px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">

<?php

if ($nota_1_M9 == '') {

     if ($V1_M9 != '') {
          $not_form1_M9 = '(_)';
     }

     else {
        $not_form1_M9 = '';
     }
  
}
else {
    $not_form1_M9_cad = number_format($nota_real_1_M9);



             if ($not_form1_M9_cad < $el_puntaje_minimoooxx ) {
     $not_form1_M9_cad = "<span style='color:red;'>1</span>";
                                                     }

                                                      else { $not_form1_M9_cad = ''; }


    $not_form1_M9 = "(".$not_form1_M9_cad.")";
}





if ($nota_2_M9 == '') {

 if ($V2_M9 != '') {
          $not_form2_M9 = '(_)';
     }

     else {
        $not_form2_M9 = '';
     }


}
else {
    $not_form2_M9_cad = number_format($nota_real_2_M9);


     if ($not_form2_M9_cad < $el_puntaje_minimoooxx ) {
     $not_form2_M9_cad = "<span style='color:red;'>2</span>";
                                                     }

                                                     else { $not_form2_M9_cad = ''; }

    $not_form2_M9 = "(".$not_form2_M9_cad.")";
}


if ($nota_3_M9 == '') {

 if ($V3_M9 != '') {
          $not_form3_M9 = '(_)';
     }

     else {
        $not_form3_M9 = '';
     }


}
else {
    $not_form3_M9_cad = number_format($nota_real_3_M9);

     if ($not_form3_M9_cad < $el_puntaje_minimoooxx ) {
     $not_form3_M9_cad = "<span style='color:red;'>3</span>";
                                                     }

                                                     else { $not_form3_M9_cad = ''; }


     $not_form3_M9 = "(".$not_form3_M9_cad.")";
}


if ($nota_4_M9 == '') {
  

 if ($V4_M9 != '') {
          $not_form4_M9 = '(_)';
     }

     else {
        $not_form4_M9 = '';
     }

}
else {
    $not_form4_M9_cad = number_format($nota_real_4_M9);

     if ($not_form4_M9_cad < $el_puntaje_minimoooxx ) {
     $not_form4_M9_cad = "<span style='color:red;'>4</span>";
                                                     }

                                                     else { $not_form4_M9_cad = ''; }

     $not_form4_M9 = "(".$not_form4_M9_cad.")";
}


if ($nota_5_M9 == '') {
    
 if ($V5_M9 != '') {
          $not_form5_M9 = '(_)';
     }

     else {
        $not_form5_M9 = '';
     }


}
else {
    $not_form5_M9_cad = number_format($nota_real_5_M9);

 if ($not_form5_M9_cad < $el_puntaje_minimoooxx ) {
     $not_form5_M9_cad = "<span style='color:red;'>5</span>";
                                                     }

                                                     else { $not_form5_M9_cad = ''; }

     $not_form5_M9 = "(".$not_form5_M9_cad.")";
}


if ($nota_6_M9 == '') {
  
 if ($V6_M9 != '') {
          $not_form6_M9 = '(_)';
     }

     else {
        $not_form6_M9 = '';
     }

}
else {
    $not_form6_M9_cad = number_format($nota_real_6_M9);

 if ($not_form6_M9_cad < $el_puntaje_minimoooxx ) {
     $not_form6_M9_cad = "<span style='color:red;'>6</span>";
                                                     }

                                                     else { $not_form6_M9_cad = ''; }

     $not_form6_M9 = "(".$not_form6_M9_cad.")";
}

if ($nota_7_M9 == '') {

  if ($V7_M9 != '') {
          $not_form7_M9 = '(_)';
     }

     else {
        $not_form7_M9 = '';
     }

}
else {
    $not_form7_M9_cad = number_format($nota_real_7_M9);

 if ($not_form7_M9_cad < $el_puntaje_minimoooxx ) {
     $not_form7_M9_cad = "<span style='color:red;'>7</span>";
                                                     }

                                                     else { $not_form7_M9_cad = ''; }

     $not_form7_M9 = "(".$not_form7_M9_cad.")";
}

?>


   <?php echo $not_form1_M9;?>.<?php echo $not_form2_M9;?>.<?php echo $not_form3_M9;?><br><?php echo $not_form4_M9;?>.<?php echo $not_form5_M9;?>.<?php echo $not_form6_M9;?><br><?php echo $not_form7_M9;?>





</TD>
<TD class="miniborder" style="width:6%; height:32px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">

<?php

if ($nota_1_M10 == '') {

     if ($V1_M10 != '') {
          $not_form1_M10 = '(_)';
     }

     else {
        $not_form1_M10 = '';
     }
  
}
else {
    $not_form1_M10_cad = number_format($nota_real_1_M10);

     if ($not_form1_M10_cad < $el_puntaje_minimoooxx ) {
     $not_form1_M10_cad = "<span style='color:red;'>1</span>";
                                                     }

                                                     else { $not_form1_M10_cad = ''; }



    $not_form1_M10 = "(".$not_form1_M10_cad.")";
}





if ($nota_2_M10 == '') {

 if ($V2_M10 != '') {
          $not_form2_M10 = '(_)';
     }

     else {
        $not_form2_M10 = '';
     }


}
else {
    $not_form2_M10_cad = number_format($nota_real_2_M10);

 if ($not_form2_M10_cad < $el_puntaje_minimoooxx ) {
     $not_form2_M10_cad = "<span style='color:red;'>2</span>";
                                                     }

                                                      else { $not_form2_M10_cad = ''; }


    $not_form2_M10 = "(".$not_form2_M10_cad.")";
}


if ($nota_3_M10 == '') {

 if ($V3_M10 != '') {
          $not_form3_M10 = '(_)';
     }

     else {
        $not_form3_M10 = '';
     }


}
else {
    $not_form3_M10_cad = number_format($nota_real_3_M10);

 if ($not_form3_M10_cad < $el_puntaje_minimoooxx ) {
     $not_form3_M10_cad = "<span style='color:red;'>3</span>";
                                                     }

                                                      else { $not_form3_M10_cad = ''; }

     $not_form3_M10 = "(".$not_form3_M10_cad.")";
}


if ($nota_4_M10 == '') {
  

 if ($V4_M10 != '') {
          $not_form4_M10 = '(_)';
     }

     else {
        $not_form4_M10 = '';
     }

}
else {
    $not_form4_M10_cad = number_format($nota_real_4_M10);

 if ($not_form4_M10_cad < $el_puntaje_minimoooxx ) {
     $not_form4_M10_cad = "<span style='color:red;'>4</span>";
                                                     }

                                                      else { $not_form4_M10_cad = ''; }

     $not_form4_M10 = "(".$not_form4_M10_cad.")";
}


if ($nota_5_M10 == '') {
    
 if ($V5_M10 != '') {
          $not_form5_M10 = '(_)';
     }

     else {
        $not_form5_M10 = '';
     }


}
else {
    $not_form5_M10_cad = number_format($nota_real_5_M10);

 if ($not_form5_M10_cad < $el_puntaje_minimoooxx ) {
     $not_form5_M10_cad = "<span style='color:red;'>5</span>";
                                                     }

                                                      else { $not_form5_M10_cad = ''; }

     $not_form5_M10 = "(".$not_form5_M10_cad.")";
}


if ($nota_6_M10 == '') {
  
 if ($V6_M10 != '') {
          $not_form6_M10 = '(_)';
     }

     else {
        $not_form6_M10 = '';
     }

}
else {
    $not_form6_M10_cad = number_format($nota_real_6_M10);

 if ($not_form6_M10_cad < $el_puntaje_minimoooxx ) {
     $not_form6_M10_cad = "<span style='color:red;'>6</span>";
                                                     }

                                                      else { $not_form6_M10_cad = ''; }

     $not_form6_M10 = "(".$not_form6_M10_cad.")";
}

if ($nota_7_M10 == '') {

  if ($V7_M10 != '') {
          $not_form7_M10 = '(_)';
     }

     else {
        $not_form7_M10 = '';
     }

}
else {
    $not_form7_M10_cad = number_format($nota_real_7_M10);

 if ($not_form7_M10_cad < $el_puntaje_minimoooxx ) {
     $not_form7_M10_cad = "<span style='color:red;'>7</span>";
                                                     }

                                                      else { $not_form7_M10_cad = ''; }

     $not_form7_M10 = "(".$not_form7_M10_cad.")";
}

?>


   <?php echo $not_form1_M10;?>.<?php echo $not_form2_M10;?>.<?php echo $not_form3_M10;?><br><?php echo $not_form4_M10;?>.<?php echo $not_form5_M10;?>.<?php echo $not_form6_M10;?><br><?php echo $not_form7_M10;?>






</TD>

<TD class="miniborderleft" style="width:6%; height:32px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">

<?php

if ($nota_1_M11 == '') {

     if ($V1_M11 != '') {
          $not_form1_M11 = '(_)';
     }

     else {
        $not_form1_M11 = '';
     }
  
}
else {
    $not_form1_M11_cad = number_format($nota_real_1_M11);

 if ($not_form1_M11_cad < $el_puntaje_minimoooxx ) {
     $not_form1_M11_cad = "<span style='color:red;'>1</span>";
                                                     }

                                                      else { $not_form1_M11_cad = ''; }


    $not_form1_M11 = "(".$not_form1_M11_cad.")";
}





if ($nota_2_M11 == '') {

 if ($V2_M11 != '') {
          $not_form2_M11 = '(_)';
     }

     else {
        $not_form2_M11 = '';
     }


}
else {
    $not_form2_M11_cad = number_format($nota_real_2_M11);

 if ($not_form2_M11_cad < $el_puntaje_minimoooxx ) {
     $not_form2_M11_cad = "<span style='color:red;'>2</span>";
                                                     }

                                                      else { $not_form2_M11_cad = ''; }


    $not_form2_M11 = "(".$not_form2_M11_cad.")";
}


if ($nota_3_M11 == '') {

 if ($V3_M11 != '') {
          $not_form3_M11 = '(_)';
     }

     else {
        $not_form3_M11 = '';
     }


}
else {
    $not_form3_M11_cad = number_format($nota_real_3_M11);

 if ($not_form3_M11_cad < $el_puntaje_minimoooxx ) {
     $not_form3_M11_cad = "<span style='color:red;'>3</span>";
                                                     }

                                                      else { $not_form3_M11_cad = ''; }

     $not_form3_M11 = "(".$not_form3_M11_cad.")";
}


if ($nota_4_M11 == '') {
  

 if ($V4_M11 != '') {
          $not_form4_M11 = '(_)';
     }

     else {
        $not_form4_M11 = '';
     }

}
else {
    $not_form4_M11_cad = number_format($nota_real_4_M11);

 if ($not_form4_M11_cad < $el_puntaje_minimoooxx ) {
     $not_form4_M11_cad = "<span style='color:red;'>4</span>";
                                                     }

                                                      else { $not_form4_M11_cad = ''; }

     $not_form4_M11 = "(".$not_form4_M11_cad.")";
}


if ($nota_5_M11 == '') {
    
 if ($V5_M11 != '') {
          $not_form5_M11 = '(_)';
     }

     else {
        $not_form5_M11 = '';
     }


}
else {
    $not_form5_M11_cad = number_format($nota_real_5_M11);

 if ($not_form5_M11_cad < $el_puntaje_minimoooxx ) {
     $not_form5_M11_cad = "<span style='color:red;'>5</span>";
                                                     }

                                                      else { $not_form5_M11_cad = ''; }

     $not_form5_M11 = "(".$not_form5_M11_cad.")";
}


if ($nota_6_M11 == '') {
  
 if ($V6_M11 != '') {
          $not_form6_M11 = '(_)';
     }

     else {
        $not_form6_M11 = '';
     }

}
else {
    $not_form6_M11_cad = number_format($nota_real_6_M11);

 if ($not_form6_M11_cad < $el_puntaje_minimoooxx ) {
     $not_form6_M11_cad = "<span style='color:red;'>6</span>";
                                                     }

                                                      else { $not_form6_M11_cad = ''; }

     $not_form6_M11 = "(".$not_form6_M11_cad.")";
}

if ($nota_7_M11 == '') {

  if ($V7_M11 != '') {
          $not_form7_M11 = '(_)';
     }

     else {
        $not_form7_M11 = '';
     }

}
else {
    $not_form7_M11_cad = number_format($nota_real_7_M11);


 if ($not_form7_M11_cad < $el_puntaje_minimoooxx ) {
     $not_form7_M11_cad = "<span style='color:red;'>7</span>";
                                                     }

                                                      else { $not_form7_M11_cad = ''; }

     $not_form7_M11 = "(".$not_form7_M11_cad.")";
}

?>

   <?php echo $not_form1_M11;?>.<?php echo $not_form2_M11;?>.<?php echo $not_form3_M11;?><br><?php echo $not_form4_M11;?>.<?php echo $not_form5_M11;?>.<?php echo $not_form6_M11;?><br><?php echo $not_form7_M11;?>





</TD>
<TD class="miniborder" style="width:6%; height:32px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">


<?php

if ($nota_1_M12 == '') {

     if ($V1_M12 != '') {
          $not_form1_M12 = '(_)';
     }

     else {
        $not_form1_M12 = '';
     }
  
}
else {
    $not_form1_M12_cad = number_format($nota_real_1_M12);


     if ($not_form1_M12_cad < $el_puntaje_minimoooxx ) {
     $not_form1_M12_cad = "<span style='color:red;'>1</span>";
                                                     }

                                                      else { $not_form1_M12_cad = ''; }

    $not_form1_M12 = "(".$not_form1_M12_cad.")";
}





if ($nota_2_M12 == '') {

 if ($V2_M12 != '') {
          $not_form2_M12 = '(_)';
     }

     else {
        $not_form2_M12 = '';
     }


}
else {
    $not_form2_M12_cad = number_format($nota_real_2_M12);

         if ($not_form2_M12_cad < $el_puntaje_minimoooxx ) {
     $not_form2_M12_cad = "<span style='color:red;'>2</span>";
                                                     }

                                                      else { $not_form2_M12_cad = ''; }

    $not_form2_M12 = "(".$not_form2_M12_cad.")";
}


if ($nota_3_M12 == '') {

 if ($V3_M12 != '') {
          $not_form3_M12 = '(_)';
     }

     else {
        $not_form3_M12 = '';
     }


}
else {
    $not_form3_M12_cad = number_format($nota_real_3_M12);

     if ($not_form3_M12_cad < $el_puntaje_minimoooxx ) {
     $not_form3_M12_cad = "<span style='color:red;'>3</span>";
                                                     }

                                                      else { $not_form3_M12_cad = ''; }


     $not_form3_M12 = "(".$not_form3_M12_cad.")";
}


if ($nota_4_M12 == '') {
  

 if ($V4_M12 != '') {
          $not_form4_M12 = '(_)';
     }

     else {
        $not_form4_M12 = '';
     }

}
else {
    $not_form4_M12_cad = number_format($nota_real_4_M12);

     if ($not_form4_M12_cad < $el_puntaje_minimoooxx ) {
     $not_form4_M12_cad = "<span style='color:red;'>4</span>";
                                                     }

                                                      else { $not_form4_M12_cad = ''; }


     $not_form4_M12 = "(".$not_form4_M12_cad.")";
}


if ($nota_5_M12 == '') {
    
 if ($V5_M12 != '') {
          $not_form5_M12 = '(_)';
     }

     else {
        $not_form5_M12 = '';
     }


}
else {
    $not_form5_M12_cad = number_format($nota_real_5_M12);

     if ($not_form5_M12_cad < $el_puntaje_minimoooxx ) {
     $not_form5_M12_cad = "<span style='color:red;'>5</span>";
                                                     }


                                                      else { $not_form5_M12_cad = ''; }



     $not_form5_M12 = "(".$not_form5_M12_cad.")";
}


if ($nota_6_M12 == '') {
  
 if ($V6_M12 != '') {
          $not_form6_M12 = '(_)';
     }

     else {
        $not_form6_M12 = '';
     }

}
else {
    $not_form6_M12_cad = number_format($nota_real_6_M12);


     if ($not_form6_M12_cad < $el_puntaje_minimoooxx ) {
     $not_form6_M12_cad = "<span style='color:red;'>6</span>";
                                                     }

                                                      else { $not_form6_M12_cad = ''; }


     $not_form6_M12 = "(".$not_form6_M12_cad.")";
}

if ($nota_7_M12 == '') {

  if ($V7_M12 != '') {
          $not_form7_M12 = '(_)';
     }

     else {
        $not_form7_M12 = '';
     }

}
else {
    $not_form7_M12_cad = number_format($nota_real_7_M12);

     if ($not_form7_M12_cad < $el_puntaje_minimoooxx ) {
     $not_form7_M12_cad = "<span style='color:red;'>7</span>";
                                                     }

                                                      else { $not_form7_M12_cad = ''; }


     $not_form7_M12 = "(".$not_form7_M12_cad.")";
}

?>


   <?php echo $not_form1_M12;?>.<?php echo $not_form2_M12;?>.<?php echo $not_form3_M12;?><br><?php echo $not_form4_M12;?>.<?php echo $not_form5_M12;?>.<?php echo $not_form6_M12;?><br><?php echo $not_form7_M12;?>





</TD>

<TD class="miniborderleft" style="width:6%; height:32px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">


<?php

if ($nota_1_M13 == '') {

     if ($V1_M13 != '') {
          $not_form1_M13 = '(_)';
     }

     else {
        $not_form1_M13 = '';
     }
  
}
else {
    $not_form1_M13_cad = number_format($nota_real_1_M13);


     if ($not_form1_M13_cad < $el_puntaje_minimoooxx ) {
     $not_form1_M13_cad = "<span style='color:red;'>1</span>";
                                                     }

                                                      else { $not_form1_M13_cad = ''; }


    $not_form1_M13 = "(".$not_form1_M13_cad.")";
}





if ($nota_2_M13 == '') {

 if ($V2_M13 != '') {
          $not_form2_M13 = '(_)';
     }

     else {
        $not_form2_M13 = '';
     }


}
else {
    $not_form2_M13_cad = number_format($nota_real_2_M13);


     if ($not_form2_M13_cad < $el_puntaje_minimoooxx ) {
     $not_form2_M13_cad = "<span style='color:red;'>2</span>";
                                                     }

                                                      else { $not_form2_M13_cad = ''; }


    $not_form2_M13 = "(".$not_form2_M13_cad.")";
}


if ($nota_3_M13 == '') {

 if ($V3_M13 != '') {
          $not_form3_M13 = '(_)';
     }

     else {
        $not_form3_M13 = '';
     }


}
else {
    $not_form3_M13_cad = number_format($nota_real_3_M13);


     if ($not_form3_M13_cad < $el_puntaje_minimoooxx ) {
     $not_form3_M13_cad = "<span style='color:red;'>3</span>";
                                                     }

                                                      else { $not_form3_M13_cad = ''; }

     $not_form3_M13 = "(".$not_form3_M13_cad.")";
}


if ($nota_4_M13 == '') {
  

 if ($V4_M13 != '') {
          $not_form4_M13 = '(_)';
     }

     else {
        $not_form4_M13 = '';
     }

}
else {
    $not_form4_M13_cad = number_format($nota_real_4_M13);

     if ($not_form4_M13_cad < $el_puntaje_minimoooxx ) {
     $not_form4_M13_cad = "<span style='color:red;'>4</span>";
                                                     }

                                                      else { $not_form4_M13_cad = ''; }


     $not_form4_M13 = "(".$not_form4_M13_cad.")";
}


if ($nota_5_M13 == '') {
    
 if ($V5_M13 != '') {
          $not_form5_M13 = '(_)';
     }

     else {
        $not_form5_M13 = '';
     }


}
else {
    $not_form5_M13_cad = number_format($nota_real_5_M13);

     if ($not_form5_M13_cad < $el_puntaje_minimoooxx ) {
     $not_form5_M13_cad = "<span style='color:red;'>5</span>";
                                                     }

                                                      else { $not_form5_M13_cad = ''; }


     $not_form5_M13 = "(".$not_form5_M13_cad.")";
}


if ($nota_6_M13 == '') {
  
 if ($V6_M13 != '') {
          $not_form6_M13 = '(_)';
     }

     else {
        $not_form6_M13 = '';
     }

}
else {
    $not_form6_M13_cad = number_format($nota_real_6_M13);

     if ($not_form6_M13_cad < $el_puntaje_minimoooxx ) {
     $not_form6_M13_cad = "<span style='color:red;'>6</span>";
                                                     }

                                                      else { $not_form6_M13_cad = ''; }


     $not_form6_M13 = "(".$not_form6_M13_cad.")";
}

if ($nota_7_M13 == '') {

  if ($V7_M13 != '') {
          $not_form7_M13 = '(_)';
     }

     else {
        $not_form7_M13 = '';
     }

}
else {
    $not_form7_M13_cad = number_format($nota_real_7_M13);

     if ($not_form7_M13_cad < $el_puntaje_minimoooxx ) {
     $not_form7_M13_cad = "<span style='color:red;'>7</span>";
                                                     }

                                                      else { $not_form7_M13_cad = ''; }


     $not_form7_M13 = "(".$not_form7_M13_cad.")";
}

?>


   <?php echo $not_form1_M13;?>.<?php echo $not_form2_M13;?>.<?php echo $not_form3_M13;?><br><?php echo $not_form4_M13;?>.<?php echo $not_form5_M13;?>.<?php echo $not_form6_M13;?><br><?php echo $not_form7_M13;?>



</TD>
<TD class="miniborder" style="width:6%; height:32px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">

<?php

if ($nota_1_M14 == '') {

     if ($V1_M14 != '') {
          $not_form1_M14 = '(_)';
     }

     else {
        $not_form1_M14 = '';
     }
  
}
else {
    $not_form1_M14_cad = number_format($nota_real_1_M14);


         if ($not_form1_M14_cad < $el_puntaje_minimoooxx ) {
     $not_form1_M14_cad = "<span style='color:red;'>1</span>";
                                                     }

                                                      else { $not_form1_M14_cad = ''; }



    $not_form1_M14 = "(".$not_form1_M14_cad.")";
}





if ($nota_2_M14 == '') {

 if ($V2_M14 != '') {
          $not_form2_M14 = '(_)';
     }

     else {
        $not_form2_M14 = '';
     }


}
else {
    $not_form2_M14_cad = number_format($nota_real_2_M14);

 if ($not_form2_M14_cad < $el_puntaje_minimoooxx ) {
     $not_form2_M14_cad = "<span style='color:red;'>2</span>";
                                                     }


                                                      else { $not_form2_M14_cad = ''; }


    $not_form2_M14 = "(".$not_form2_M14_cad.")";
}


if ($nota_3_M14 == '') {

 if ($V3_M14 != '') {
          $not_form3_M14 = '(_)';
     }

     else {
        $not_form3_M14 = '';
     }


}
else {
    $not_form3_M14_cad = number_format($nota_real_3_M14);

 if ($not_form3_M14_cad < $el_puntaje_minimoooxx ) {
     $not_form3_M14_cad = "<span style='color:red;'>3</span>";
                                                     }

                                                      else { $not_form3_M14_cad = ''; }

     $not_form3_M14 = "(".$not_form3_M14_cad.")";
}


if ($nota_4_M14 == '') {
  

 if ($V4_M14 != '') {
          $not_form4_M14 = '(_)';
     }

     else {
        $not_form4_M14 = '';
     }

}
else {
    $not_form4_M14_cad = number_format($nota_real_4_M14);

 if ($not_form4_M14_cad < $el_puntaje_minimoooxx ) {
     $not_form4_M14_cad = "<span style='color:red;'>4</span>";
                                                     }

                                                      else { $not_form4_M14_cad = ''; }

     $not_form4_M14 = "(".$not_form4_M14_cad.")";
}


if ($nota_5_M14 == '') {
    
 if ($V5_M14 != '') {
          $not_form5_M14 = '(_)';
     }

     else {
        $not_form5_M14 = '';
     }


}
else {
    $not_form5_M14_cad = number_format($nota_real_5_M14);


 if ($not_form5_M14_cad < $el_puntaje_minimoooxx ) {
     $not_form5_M14_cad = "<span style='color:red;'>5</span>";
                                                     }

                                                      else { $not_form5_M14_cad = ''; }

     $not_form5_M14 = "(".$not_form5_M14_cad.")";
}


if ($nota_6_M14 == '') {
  
 if ($V6_M14 != '') {
          $not_form6_M14 = '(_)';
     }

     else {
        $not_form6_M14 = '';
     }

}
else {
    $not_form6_M14_cad = number_format($nota_real_6_M14);

 if ($not_form6_M14_cad < $el_puntaje_minimoooxx ) {
     $not_form6_M14_cad = "<span style='color:red;'>6</span>";
                                                     }

                                                      else { $not_form6_M14_cad = ''; }


     $not_form6_M14 = "(".$not_form6_M14_cad.")";
}

if ($nota_7_M14 == '') {

  if ($V7_M14 != '') {
          $not_form7_M14 = '(_)';
     }

     else {
        $not_form7_M14 = '';
     }

}
else {
    $not_form7_M14_cad = number_format($nota_real_7_M14);

 if ($not_form7_M14_cad < $el_puntaje_minimoooxx ) {
     $not_form7_M14_cad = "<span style='color:red;'>7</span>";
                                                     }

                                                      else { $not_form7_M14_cad = ''; }


     $not_form7_M14 = "(".$not_form7_M14_cad.")";
}

?>


   <?php echo $not_form1_M14;?>.<?php echo $not_form2_M14;?>.<?php echo $not_form3_M14;?><br><?php echo $not_form4_M14;?>.<?php echo $not_form5_M14;?>.<?php echo $not_form6_M14;?><br><?php echo $not_form7_M14;?>





</TD>




</TR>









<?php
                }
                ?>


</TABLE>









</page>















<?php

    $contentxx = ob_get_clean(); 

try
    {
        $hixx = $_POST["id_tituloxxx"];

        $html2pdf = new HTML2PDF('L', 'LEGAL', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("Aplazados_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>