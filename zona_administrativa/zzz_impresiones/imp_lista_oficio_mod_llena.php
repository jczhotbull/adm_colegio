<?php
error_reporting(0); //hide php errors
require '../../0 html2pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$i="1";
$conteo_repro = '0';
$puntaje_sumado = '0';
$promedio_divisor = '0';
// captura la hoja a ser impresa
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


<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">&nbsp;Profesor: __________________________.
         

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


<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><b><?php echo $_POST["id_tituloxxx"]; ?></b> -&nbsp;&nbsp;Lapso: <u>   <span style="font-size: 14px; color:<?php echo $color_imp2; ?>;"><b><?php echo $_POST["id_lapsoxxx"]; ?></b></span>  </u>.
         

</TD>





</TR>








<TR>

<TD class="" style="width:32%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="LEFT"> Materia:  <u>   <span style="font-size: 14px; color:<?php echo $color_imp2; ?>;"><b><?php echo $_POST["id_materiaxxx"]; ?></b></span>  </u>.
</TD>

<TD class="" style="width:15%; height:auto; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><b><u>&nbsp;<?php echo $row_datos_periodo['inicia']; ?>&nbsp; - 
                 &nbsp;<?php echo $row_datos_periodo['termina']; ?>&nbsp;</u></b>
</TD>

<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><?php echo $row_datos_queryplantel["www"]; ?>
                    

</TD>

</TR>











</TABLE>




<TABLE class="basetabla" cellspacing="-1">


<TR>

<TD class="" style="width:3%; height:90px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="" style="width:29.5%; height:90px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="" style="width:4%; height:90px; font-size: 14px; color:<?php echo $color_imp3; ?>; " align=""><div style="rotate:90; margin-top: 50px;">Evaluaciones</div>
</TD>

<TD class="miniborder" style="width:6.8%; height:90px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:6.8%; height:90px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:6.8%; height:90px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:6.8%; height:90px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:6.8%; height:90px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:6.8%; height:90px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:6.8%; height:90px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:6.8%; height:90px; font-size: 14px; color:<?php echo $color_imp1; ?>;" align="center"><div style="rotate:90; margin-left: 5px;">Actividad Superación Pedagógica</div>
</TD>





<TD class="" style="width:4.5%; height:90px; font-size: 10px; color:<?php echo $color_imp3; ?>;" align=""><div style="margin-top: 75px;"><b>&nbsp;&nbsp;Prom.</b></div>  
</TD>
<TD class="" style="width:0.5%; height:90px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="" style="width:4.1%; height:90px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align=""><div style="margin-top: 75px;"><b>&nbsp;DEF.</b></div>  
</TD>

</TR>


</TABLE>

<?php

$back_emergency = '#EBECEC';


?>



<TABLE class="basetabla" style="margin-top: 4px;" cellspacing="-1">


<TR >

<TD class="" style="width:3%; height:15px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>

<TD class="" style="width:33.5%; height:15px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="right">
</TD>

<TD class="miniborder" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; background-color:<?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">%
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; background-color:<?php echo $back_emergency; ?>;  color:<?php echo $color_imp2; ?>;" align="center">%
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">%
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">%
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">%
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">%
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">%
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">%
</TD>


<TD class="miniborderleft" style="width:4.5%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="right">
</TD>
<TD class="" style="width:0.5%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:4.1%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

</TR>

</TABLE>




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


if ($num_materia == '1') {


$querymateria = "SELECT id_asign, A11, A12, A13, A14, A15, A16, A17, A21, A22, A23, A24, A25, A26, A27, A31, A32, A33, A34, A35, A36, A37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 

if ($lapso == '1°') {

$V1 = $row_datos_controlmat['A11'];
$V2 = $row_datos_controlmat['A12'];
$V3 = $row_datos_controlmat['A13'];
$V4 = $row_datos_controlmat['A14'];
$V5 = $row_datos_controlmat['A15'];
$V6 = $row_datos_controlmat['A16'];
$V7 = $row_datos_controlmat['A17'];

}

if ($lapso == '2°') {

$V1 = $row_datos_controlmat['A21'];
$V2 = $row_datos_controlmat['A22'];
$V3 = $row_datos_controlmat['A23'];
$V4 = $row_datos_controlmat['A24'];
$V5 = $row_datos_controlmat['A25'];
$V6 = $row_datos_controlmat['A26'];
$V7 = $row_datos_controlmat['A27'];

 }


 if ($lapso == '3°') {


$V1 = $row_datos_controlmat['A31'];
$V2 = $row_datos_controlmat['A32'];
$V3 = $row_datos_controlmat['A33'];
$V4 = $row_datos_controlmat['A34'];
$V5 = $row_datos_controlmat['A35'];
$V6 = $row_datos_controlmat['A36'];
$V7 = $row_datos_controlmat['A37'];


 }


}




if ($num_materia == '2') {


$querymateria = "SELECT id_asign, B11, B12, B13, B14, B15, B16, B17, B21, B22, B23, B24, B25, B26, B27, B31, B32, B33, B34, B35, B36, B37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


if ($lapso == '1°') {

$V1 = $row_datos_controlmat['B11'];
$V2 = $row_datos_controlmat['B12'];
$V3 = $row_datos_controlmat['B13'];
$V4 = $row_datos_controlmat['B14'];
$V5 = $row_datos_controlmat['B15'];
$V6 = $row_datos_controlmat['B16'];
$V7 = $row_datos_controlmat['B17'];

}

if ($lapso == '2°') {

$V1 = $row_datos_controlmat['B21'];
$V2 = $row_datos_controlmat['B22'];
$V3 = $row_datos_controlmat['B23'];
$V4 = $row_datos_controlmat['B24'];
$V5 = $row_datos_controlmat['B25'];
$V6 = $row_datos_controlmat['B26'];
$V7 = $row_datos_controlmat['B27'];

 }


 if ($lapso == '3°') {


$V1 = $row_datos_controlmat['B31'];
$V2 = $row_datos_controlmat['B32'];
$V3 = $row_datos_controlmat['B33'];
$V4 = $row_datos_controlmat['B34'];
$V5 = $row_datos_controlmat['B35'];
$V6 = $row_datos_controlmat['B36'];
$V7 = $row_datos_controlmat['B37'];


 }

}


if ($num_materia == '3') {


$querymateria = "SELECT id_asign, C11, C12, C13, C14, C15, C16, C17, C21, C22, C23, C24, C25, C26, C27, C31, C32, C33, C34, C35, C36, C37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


if ($lapso == '1°') {

$V1 = $row_datos_controlmat['C11'];
$V2 = $row_datos_controlmat['C12'];
$V3 = $row_datos_controlmat['C13'];
$V4 = $row_datos_controlmat['C14'];
$V5 = $row_datos_controlmat['C15'];
$V6 = $row_datos_controlmat['C16'];
$V7 = $row_datos_controlmat['C17'];

}

if ($lapso == '2°') {

$V1 = $row_datos_controlmat['C21'];
$V2 = $row_datos_controlmat['C22'];
$V3 = $row_datos_controlmat['C23'];
$V4 = $row_datos_controlmat['C24'];
$V5 = $row_datos_controlmat['C25'];
$V6 = $row_datos_controlmat['C26'];
$V7 = $row_datos_controlmat['C27'];

 }


 if ($lapso == '3°') {


$V1 = $row_datos_controlmat['C31'];
$V2 = $row_datos_controlmat['C32'];
$V3 = $row_datos_controlmat['C33'];
$V4 = $row_datos_controlmat['C34'];
$V5 = $row_datos_controlmat['C35'];
$V6 = $row_datos_controlmat['C36'];
$V7 = $row_datos_controlmat['C37'];


 }



}


if ($num_materia == '4') {


$querymateria = "SELECT id_asign, D11, D12, D13, D14, D15, D16, D17, D21, D22, D23, D24, D25, D26, D27, D31, D32, D33, D34, D35, D36, D37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 



if ($lapso == '1°') {

$V1 = $row_datos_controlmat['D11'];
$V2 = $row_datos_controlmat['D12'];
$V3 = $row_datos_controlmat['D13'];
$V4 = $row_datos_controlmat['D14'];
$V5 = $row_datos_controlmat['D15'];
$V6 = $row_datos_controlmat['D16'];
$V7 = $row_datos_controlmat['D17'];

}

if ($lapso == '2°') {

$V1 = $row_datos_controlmat['D21'];
$V2 = $row_datos_controlmat['D22'];
$V3 = $row_datos_controlmat['D23'];
$V4 = $row_datos_controlmat['D24'];
$V5 = $row_datos_controlmat['D25'];
$V6 = $row_datos_controlmat['D26'];
$V7 = $row_datos_controlmat['D27'];

 }


 if ($lapso == '3°') {


$V1 = $row_datos_controlmat['D31'];
$V2 = $row_datos_controlmat['D32'];
$V3 = $row_datos_controlmat['D33'];
$V4 = $row_datos_controlmat['D34'];
$V5 = $row_datos_controlmat['D35'];
$V6 = $row_datos_controlmat['D36'];
$V7 = $row_datos_controlmat['D37'];


 }


}


if ($num_materia == '5') {


$querymateria = "SELECT id_asign, E11, E12, E13, E14, E15, E16, E17, E21, E22, E23, E24, E25, E26, E27, E31, E32, E33, E34, E35, E36, E37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 



if ($lapso == '1°') {

$V1 = $row_datos_controlmat['E11'];
$V2 = $row_datos_controlmat['E12'];
$V3 = $row_datos_controlmat['E13'];
$V4 = $row_datos_controlmat['E14'];
$V5 = $row_datos_controlmat['E15'];
$V6 = $row_datos_controlmat['E16'];
$V7 = $row_datos_controlmat['E17'];

}

if ($lapso == '2°') {

$V1 = $row_datos_controlmat['E21'];
$V2 = $row_datos_controlmat['E22'];
$V3 = $row_datos_controlmat['E23'];
$V4 = $row_datos_controlmat['E24'];
$V5 = $row_datos_controlmat['E25'];
$V6 = $row_datos_controlmat['E26'];
$V7 = $row_datos_controlmat['E27'];

 }


 if ($lapso == '3°') {


$V1 = $row_datos_controlmat['E31'];
$V2 = $row_datos_controlmat['E32'];
$V3 = $row_datos_controlmat['E33'];
$V4 = $row_datos_controlmat['E34'];
$V5 = $row_datos_controlmat['E35'];
$V6 = $row_datos_controlmat['E36'];
$V7 = $row_datos_controlmat['E37'];


 }


}


if ($num_materia == '6') {


$querymateria = "SELECT id_asign, F11, F12, F13, F14, F15, F16, F17, F21, F22, F23, F24, F25, F26, F27, F31, F32, F33, F34, F35, F36, F37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


if ($lapso == '1°') {

$V1 = $row_datos_controlmat['F11'];
$V2 = $row_datos_controlmat['F12'];
$V3 = $row_datos_controlmat['F13'];
$V4 = $row_datos_controlmat['F14'];
$V5 = $row_datos_controlmat['F15'];
$V6 = $row_datos_controlmat['F16'];
$V7 = $row_datos_controlmat['F17'];

}

if ($lapso == '2°') {

$V1 = $row_datos_controlmat['F21'];
$V2 = $row_datos_controlmat['F22'];
$V3 = $row_datos_controlmat['F23'];
$V4 = $row_datos_controlmat['F24'];
$V5 = $row_datos_controlmat['F25'];
$V6 = $row_datos_controlmat['F26'];
$V7 = $row_datos_controlmat['F27'];

 }


 if ($lapso == '3°') {


$V1 = $row_datos_controlmat['F31'];
$V2 = $row_datos_controlmat['F32'];
$V3 = $row_datos_controlmat['F33'];
$V4 = $row_datos_controlmat['F34'];
$V5 = $row_datos_controlmat['F35'];
$V6 = $row_datos_controlmat['F36'];
$V7 = $row_datos_controlmat['F37'];


 }


}


if ($num_materia == '7') {


$querymateria = "SELECT id_asign, G11, G12, G13, G14, G15, G16, G17, G21, G22, G23, G24, G25, G26, G27, G31, G32, G33, G34, G35, G36, G37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 



if ($lapso == '1°') {

$V1 = $row_datos_controlmat['G11'];
$V2 = $row_datos_controlmat['G12'];
$V3 = $row_datos_controlmat['G13'];
$V4 = $row_datos_controlmat['G14'];
$V5 = $row_datos_controlmat['G15'];
$V6 = $row_datos_controlmat['G16'];
$V7 = $row_datos_controlmat['G17'];

}

if ($lapso == '2°') {

$V1 = $row_datos_controlmat['G21'];
$V2 = $row_datos_controlmat['G22'];
$V3 = $row_datos_controlmat['G23'];
$V4 = $row_datos_controlmat['G24'];
$V5 = $row_datos_controlmat['G25'];
$V6 = $row_datos_controlmat['G26'];
$V7 = $row_datos_controlmat['G27'];

 }


 if ($lapso == '3°') {


$V1 = $row_datos_controlmat['G31'];
$V2 = $row_datos_controlmat['G32'];
$V3 = $row_datos_controlmat['G33'];
$V4 = $row_datos_controlmat['G34'];
$V5 = $row_datos_controlmat['G35'];
$V6 = $row_datos_controlmat['G36'];
$V7 = $row_datos_controlmat['G37'];


 }


}



if ($num_materia == '8') {


$querymateria = "SELECT id_asign, H11, H12, H13, H14, H15, H16, H17, H21, H22, H23, H24, H25, H26, H27, H31, H32, H33, H34, H35, H36, H37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 



if ($lapso == '1°') {

$V1 = $row_datos_controlmat['H11'];
$V2 = $row_datos_controlmat['H12'];
$V3 = $row_datos_controlmat['H13'];
$V4 = $row_datos_controlmat['H14'];
$V5 = $row_datos_controlmat['H15'];
$V6 = $row_datos_controlmat['H16'];
$V7 = $row_datos_controlmat['H17'];

}

if ($lapso == '2°') {

$V1 = $row_datos_controlmat['H21'];
$V2 = $row_datos_controlmat['H22'];
$V3 = $row_datos_controlmat['H23'];
$V4 = $row_datos_controlmat['H24'];
$V5 = $row_datos_controlmat['H25'];
$V6 = $row_datos_controlmat['H26'];
$V7 = $row_datos_controlmat['H27'];

 }


 if ($lapso == '3°') {


$V1 = $row_datos_controlmat['H31'];
$V2 = $row_datos_controlmat['H32'];
$V3 = $row_datos_controlmat['H33'];
$V4 = $row_datos_controlmat['H34'];
$V5 = $row_datos_controlmat['H35'];
$V6 = $row_datos_controlmat['H36'];
$V7 = $row_datos_controlmat['H37'];


 }


}



if ($num_materia == '9') {


$querymateria = "SELECT id_asign, I11, I12, I13, I14, I15, I16, I17, I21, I22, I23, I24, I25, I26, I27, I31, I32, I33, I34, I35, I36, I37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 



if ($lapso == '1°') {

$V1 = $row_datos_controlmat['I11'];
$V2 = $row_datos_controlmat['I12'];
$V3 = $row_datos_controlmat['I13'];
$V4 = $row_datos_controlmat['I14'];
$V5 = $row_datos_controlmat['I15'];
$V6 = $row_datos_controlmat['I16'];
$V7 = $row_datos_controlmat['I17'];

}

if ($lapso == '2°') {

$V1 = $row_datos_controlmat['I21'];
$V2 = $row_datos_controlmat['I22'];
$V3 = $row_datos_controlmat['I23'];
$V4 = $row_datos_controlmat['I24'];
$V5 = $row_datos_controlmat['I25'];
$V6 = $row_datos_controlmat['I26'];
$V7 = $row_datos_controlmat['I27'];

 }


 if ($lapso == '3°') {


$V1 = $row_datos_controlmat['I31'];
$V2 = $row_datos_controlmat['I32'];
$V3 = $row_datos_controlmat['I33'];
$V4 = $row_datos_controlmat['I34'];
$V5 = $row_datos_controlmat['I35'];
$V6 = $row_datos_controlmat['I36'];
$V7 = $row_datos_controlmat['I37'];


 }


}



if ($num_materia == '10') {


$querymateria = "SELECT id_asign, J11, J12, J13, J14, J15, J16, J17, J21, J22, J23, J24, J25, J26, J27, J31, J32, J33, J34, J35, J36, J37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 



if ($lapso == '1°') {

$V1 = $row_datos_controlmat['J11'];
$V2 = $row_datos_controlmat['J12'];
$V3 = $row_datos_controlmat['J13'];
$V4 = $row_datos_controlmat['J14'];
$V5 = $row_datos_controlmat['J15'];
$V6 = $row_datos_controlmat['J16'];
$V7 = $row_datos_controlmat['J17'];

}

if ($lapso == '2°') {

$V1 = $row_datos_controlmat['J21'];
$V2 = $row_datos_controlmat['J22'];
$V3 = $row_datos_controlmat['J23'];
$V4 = $row_datos_controlmat['J24'];
$V5 = $row_datos_controlmat['J25'];
$V6 = $row_datos_controlmat['J26'];
$V7 = $row_datos_controlmat['J27'];

 }


 if ($lapso == '3°') {


$V1 = $row_datos_controlmat['J31'];
$V2 = $row_datos_controlmat['J32'];
$V3 = $row_datos_controlmat['J33'];
$V4 = $row_datos_controlmat['J34'];
$V5 = $row_datos_controlmat['J35'];
$V6 = $row_datos_controlmat['J36'];
$V7 = $row_datos_controlmat['J37'];


 }


}



if ($num_materia == '11') {


$querymateria = "SELECT id_asign, K11, K12, K13, K14, K15, K16, K17, K21, K22, K23, K24, K25, K26, K27, K31, K32, K33, K34, K35, K36, K37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 



if ($lapso == '1°') {

$V1 = $row_datos_controlmat['K11'];
$V2 = $row_datos_controlmat['K12'];
$V3 = $row_datos_controlmat['K13'];
$V4 = $row_datos_controlmat['K14'];
$V5 = $row_datos_controlmat['K15'];
$V6 = $row_datos_controlmat['K16'];
$V7 = $row_datos_controlmat['K17'];

}

if ($lapso == '2°') {

$V1 = $row_datos_controlmat['K21'];
$V2 = $row_datos_controlmat['K22'];
$V3 = $row_datos_controlmat['K23'];
$V4 = $row_datos_controlmat['K24'];
$V5 = $row_datos_controlmat['K25'];
$V6 = $row_datos_controlmat['K26'];
$V7 = $row_datos_controlmat['K27'];

 }


 if ($lapso == '3°') {


$V1 = $row_datos_controlmat['K31'];
$V2 = $row_datos_controlmat['K32'];
$V3 = $row_datos_controlmat['K33'];
$V4 = $row_datos_controlmat['K34'];
$V5 = $row_datos_controlmat['K35'];
$V6 = $row_datos_controlmat['K36'];
$V7 = $row_datos_controlmat['K37'];


 }

}



if ($num_materia == '12') {


$querymateria = "SELECT id_asign, L11, L12, L13, L14, L15, L16, L17, L21, L22, L23, L24, L25, L26, L27, L31, L32, L33, L34, L35, L36, L37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 



if ($lapso == '1°') {

$V1 = $row_datos_controlmat['L11'];
$V2 = $row_datos_controlmat['L12'];
$V3 = $row_datos_controlmat['L13'];
$V4 = $row_datos_controlmat['L14'];
$V5 = $row_datos_controlmat['L15'];
$V6 = $row_datos_controlmat['L16'];
$V7 = $row_datos_controlmat['L17'];

}

if ($lapso == '2°') {

$V1 = $row_datos_controlmat['L21'];
$V2 = $row_datos_controlmat['L22'];
$V3 = $row_datos_controlmat['L23'];
$V4 = $row_datos_controlmat['L24'];
$V5 = $row_datos_controlmat['L25'];
$V6 = $row_datos_controlmat['L26'];
$V7 = $row_datos_controlmat['L27'];

 }


 if ($lapso == '3°') {


$V1 = $row_datos_controlmat['L31'];
$V2 = $row_datos_controlmat['L32'];
$V3 = $row_datos_controlmat['L33'];
$V4 = $row_datos_controlmat['L34'];
$V5 = $row_datos_controlmat['L35'];
$V6 = $row_datos_controlmat['L36'];
$V7 = $row_datos_controlmat['L37'];


 }


}



if ($num_materia == '13') {


$querymateria = "SELECT id_asign, M11, M12, M13, M14, M15, M16, M17, M21, M22, M23, M24, M25, M26, M27, M31, M32, M33, M34, M35, M36, M37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 



if ($lapso == '1°') {

$V1 = $row_datos_controlmat['M11'];
$V2 = $row_datos_controlmat['M12'];
$V3 = $row_datos_controlmat['M13'];
$V4 = $row_datos_controlmat['M14'];
$V5 = $row_datos_controlmat['M15'];
$V6 = $row_datos_controlmat['M16'];
$V7 = $row_datos_controlmat['M17'];

}

if ($lapso == '2°') {

$V1 = $row_datos_controlmat['M21'];
$V2 = $row_datos_controlmat['M22'];
$V3 = $row_datos_controlmat['M23'];
$V4 = $row_datos_controlmat['M24'];
$V5 = $row_datos_controlmat['M25'];
$V6 = $row_datos_controlmat['M26'];
$V7 = $row_datos_controlmat['M27'];

 }


 if ($lapso == '3°') {


$V1 = $row_datos_controlmat['M31'];
$V2 = $row_datos_controlmat['M32'];
$V3 = $row_datos_controlmat['M33'];
$V4 = $row_datos_controlmat['M34'];
$V5 = $row_datos_controlmat['M35'];
$V6 = $row_datos_controlmat['M36'];
$V7 = $row_datos_controlmat['M37'];


 }
}


if ($num_materia == '14') {


$querymateria = "SELECT id_asign, N11, N12, N13, N14, N15, N16, N17, N21, N22, N23, N24, N25, N26, N27, N31, N32, N33, N34, N35, N36, N37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 



if ($lapso == '1°') {

$V1 = $row_datos_controlmat['N11'];
$V2 = $row_datos_controlmat['N12'];
$V3 = $row_datos_controlmat['N13'];
$V4 = $row_datos_controlmat['N14'];
$V5 = $row_datos_controlmat['N15'];
$V6 = $row_datos_controlmat['N16'];
$V7 = $row_datos_controlmat['N17'];

}

if ($lapso == '2°') {

$V1 = $row_datos_controlmat['N21'];
$V2 = $row_datos_controlmat['N22'];
$V3 = $row_datos_controlmat['N23'];
$V4 = $row_datos_controlmat['N24'];
$V5 = $row_datos_controlmat['N25'];
$V6 = $row_datos_controlmat['N26'];
$V7 = $row_datos_controlmat['N27'];

 }


 if ($lapso == '3°') {


$V1 = $row_datos_controlmat['N31'];
$V2 = $row_datos_controlmat['N32'];
$V3 = $row_datos_controlmat['N33'];
$V4 = $row_datos_controlmat['N34'];
$V5 = $row_datos_controlmat['N35'];
$V6 = $row_datos_controlmat['N36'];
$V7 = $row_datos_controlmat['N37'];


 }

}


$para_el_porc_V1 = ($V1 * 20)/100;
$para_el_porc_V2 = ($V2 * 20)/100;
$para_el_porc_V3 = ($V3 * 20)/100;
$para_el_porc_V4 = ($V4 * 20)/100;
$para_el_porc_V5 = ($V5 * 20)/100;
$para_el_porc_V6 = ($V6 * 20)/100;
$para_el_porc_V7 = ($V7 * 20)/100;





$Valores = $V1+$V2+$V3+$V4+$V5+$V6+$V7; 

mysqli_close($enlace); 


?>






<TABLE class="basetabla" style="margin-top: 4px;" cellspacing="-1">


<TR >

<TD class="miniborder" style="width:3%; height:15px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><b>N°</b>
</TD>

<TD class="" style="width:33.5%; height:15px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="right">Ponderación:&nbsp;&nbsp;
</TD>

<?php 
if ($V1 == '') {
 $nn1 = '';   # code...
}
else {
   $nn1 = '20';  
}
?>

<TD class="miniborder" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"> <?php echo $nn1; ?>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<b><?php echo $V1;?></b>
</TD>

<?php 
if ($V2 == '') {
 $nn2 = '';   # code...
}
else {
   $nn2 = '20';  
}
?>



<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn2; ?>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<b><?php echo $V2;?></b>
</TD>

<?php 
if ($V3 == '') {
 $nn3 = '';   # code...
}
else {
   $nn3 = '20';  
}
?>


<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn3; ?>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<b><?php echo $V3;?></b>
</TD>

<?php 
if ($V4 == '') {
 $nn4 = '';   # code...
}
else {
   $nn4 = '20';  
}
?>


<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn4; ?>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<b><?php echo $V4;?></b>
</TD>

<?php 
if ($V5 == '') {
 $nn5 = '';   # code...
}
else {
   $nn5 = '20';  
}
?>



<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn5; ?>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<b><?php echo $V5;?></b>
</TD>


<?php 
if ($V6 == '') {
 $nn6 = '';   # code...
}
else {
   $nn6 = '20';  
}
?>


<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn6; ?>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<b><?php echo $V6;?></b>
</TD>

<?php 
if ($V7 == '') {
 $nn7 = '';   # code...
}
else {
   $nn7 = '20';  
}
?>


<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nn7; ?>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 12px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center">
<b><?php echo $V7;?></b>
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>


<TD class="miniborderleft" style="width:4.5%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="right">
</TD>
<TD class="" style="width:0.5%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:4.1%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
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

<TD class="miniborder" style="width:3%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">


<b><?php


$el_reg_del_est_es = $row_datos_control['id_reg_estu_actual'];

$el_dicho_id_e = $row_datos_control['id_estud'];

$num_materiadd = $_POST['id_num_matxxx'];


include("../../conectar.php");

$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = '$num_materiadd'
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 

 mysqli_close($enlace);



    echo $i;
    $i++; 


if ($lapso == '1°') {
   


$nota_1 = $row_datos_control_notas["nt_11"];
$nota_2 = $row_datos_control_notas["nt_12"];
$nota_3 = $row_datos_control_notas["nt_13"];
$nota_4 = $row_datos_control_notas["nt_14"];
$nota_5 = $row_datos_control_notas["nt_15"];
$nota_6 = $row_datos_control_notas["nt_16"];
$nota_7 = $row_datos_control_notas["nt_17"];
$notaAu = $row_datos_control_notas["nt_Au1"];



$nota_real_1 = ($row_datos_control_notas["nt_11"] * $para_el_porc_V1)/20;
$nota_real_2 = ($row_datos_control_notas["nt_12"] * $para_el_porc_V2)/20;
$nota_real_3 = ($row_datos_control_notas["nt_13"] * $para_el_porc_V3)/20;
$nota_real_4 = ($row_datos_control_notas["nt_14"] * $para_el_porc_V4)/20;
$nota_real_5 = ($row_datos_control_notas["nt_15"] * $para_el_porc_V5)/20;
$nota_real_6 = ($row_datos_control_notas["nt_16"] * $para_el_porc_V6)/20;
$nota_real_7 = ($row_datos_control_notas["nt_17"] * $para_el_porc_V7)/20;

$total_seven = $nota_real_1+$nota_real_2+$nota_real_3+$nota_real_4+$nota_real_5+$nota_real_6+$nota_real_7;

$total_seven_con_Au = $total_seven+ $row_datos_control_notas["nt_Au1"];
$total_seven_con_Au_redon1 =number_format($total_seven_con_Au, 1, '.', '');

$total_seven_con_Au_redon =number_format($total_seven_con_Au_redon1);


}


if ($lapso == '2°') {



$nota_1 = $row_datos_control_notas["nt_21"];
$nota_2 = $row_datos_control_notas["nt_22"];
$nota_3 = $row_datos_control_notas["nt_23"];
$nota_4 = $row_datos_control_notas["nt_24"];
$nota_5 = $row_datos_control_notas["nt_25"];
$nota_6 = $row_datos_control_notas["nt_26"];
$nota_7 = $row_datos_control_notas["nt_27"];
$notaAu = $row_datos_control_notas["nt_Au2"];


$nota_real_1 = ($row_datos_control_notas["nt_21"] * $para_el_porc_V1)/20;
$nota_real_2 = ($row_datos_control_notas["nt_22"] * $para_el_porc_V2)/20;
$nota_real_3 = ($row_datos_control_notas["nt_23"] * $para_el_porc_V3)/20;
$nota_real_4 = ($row_datos_control_notas["nt_24"] * $para_el_porc_V4)/20;
$nota_real_5 = ($row_datos_control_notas["nt_25"] * $para_el_porc_V5)/20;
$nota_real_6 = ($row_datos_control_notas["nt_26"] * $para_el_porc_V6)/20;
$nota_real_7 = ($row_datos_control_notas["nt_27"] * $para_el_porc_V7)/20;

$total_seven = $nota_real_1+$nota_real_2+$nota_real_3+$nota_real_4+$nota_real_5+$nota_real_6+$nota_real_7;

$total_seven_con_Au = $total_seven+ $row_datos_control_notas["nt_Au2"];
$total_seven_con_Au_redon1 =number_format($total_seven_con_Au, 1, '.', '');

$total_seven_con_Au_redon =number_format($total_seven_con_Au_redon1);

 }


if ($lapso == '3°') {


$nota_1 = $row_datos_control_notas["nt_31"];
$nota_2 = $row_datos_control_notas["nt_32"];
$nota_3 = $row_datos_control_notas["nt_33"];
$nota_4 = $row_datos_control_notas["nt_34"];
$nota_5 = $row_datos_control_notas["nt_35"];
$nota_6 = $row_datos_control_notas["nt_36"];
$nota_7 = $row_datos_control_notas["nt_37"];
$notaAu = $row_datos_control_notas["nt_Au3"];




$nota_real_1 = ($row_datos_control_notas["nt_31"] * $para_el_porc_V1)/20;
$nota_real_2 = ($row_datos_control_notas["nt_32"] * $para_el_porc_V2)/20;
$nota_real_3 = ($row_datos_control_notas["nt_33"] * $para_el_porc_V3)/20;
$nota_real_4 = ($row_datos_control_notas["nt_34"] * $para_el_porc_V4)/20;
$nota_real_5 = ($row_datos_control_notas["nt_35"] * $para_el_porc_V5)/20;
$nota_real_6 = ($row_datos_control_notas["nt_36"] * $para_el_porc_V6)/20;
$nota_real_7 = ($row_datos_control_notas["nt_37"] * $para_el_porc_V7)/20;

$total_seven = $nota_real_1+$nota_real_2+$nota_real_3+$nota_real_4+$nota_real_5+$nota_real_6+$nota_real_7;

$total_seven_con_Au = $total_seven+ $row_datos_control_notas["nt_Au3"];
$total_seven_con_Au_redon1 =number_format($total_seven_con_Au, 1, '.', '');

$total_seven_con_Au_redon =number_format($total_seven_con_Au_redon1);

 }





?></b>



</TD>

<TD class="miniborder" style="width:33.5%; height:15px; font-size: 11px; color:<?php echo $color_imp1; ?>; padding-left: 4px;" align="left">
                                    <b><?php echo $row_datos_control['apellidos_estu']; ?></b>, <?php echo $row_datos_control['nombre_estu']; ?>    
</TD>

<TD class="miniborder" style="width:3.6%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nota_1; ?>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center"><?php if ($nota_real_1 == 0) { $nota_real_11 = ''; } else {$nota_real_11 = $nota_real_1;} echo $nota_real_11; ?>
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nota_2; ?>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center"><?php if ($nota_real_2 == 0) { $nota_real_22 = ''; } else {$nota_real_22 = $nota_real_2;} echo $nota_real_22; ?>
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nota_3; ?>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center"><?php if ($nota_real_3 == 0) { $nota_real_33 = ''; } else {$nota_real_33 = $nota_real_3;} echo $nota_real_33; ?>
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nota_4; ?>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center"><?php if ($nota_real_4 == 0) { $nota_real_44 = ''; } else {$nota_real_44 = $nota_real_4;} echo $nota_real_44; ?>
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nota_5; ?>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center"><?php if ($nota_real_5 == 0) { $nota_real_55 = ''; } else {$nota_real_55 = $nota_real_5;} echo $nota_real_55; ?>
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nota_6; ?>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center"><?php if ($nota_real_6 == 0) { $nota_real_66 = ''; } else {$nota_real_66 = $nota_real_6;} echo $nota_real_66; ?>
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $nota_7; ?>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 10px; background-color: <?php echo $back_emergency; ?>; color:<?php echo $color_imp2; ?>;" align="center"><?php if ($nota_real_7 == 0) { $nota_real_77 = ''; } else {$nota_real_77 = $nota_real_7;} echo $nota_real_77; ?>
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center"><b><?php echo $notaAu; ?></b>
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>


<TD class="miniborderleft" style="width:4.5%; height:15px; font-size: 13px; color:<?php echo $color_imp2; ?>;" align="right">
    <?php if ($total_seven_con_Au == 0) { $total_seven_con_Auu = ''; } else {$total_seven_con_Auu = $total_seven_con_Au;} echo $total_seven_con_Auu; ?>
    
</TD>
<TD class="" style="width:0.5%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">

</TD>
<?php 

$resaltador = '#FFFFFF';


 if ($total_seven_con_Au >= 0 and $total_seven_con_Au <= 9.43  ) {
          $resaltador = '#F9F5A6'; $conteo_repro++;
      }    ?>


<TD class="miniborder" style="width:4.1%; height:15px; font-size: 14px; background-color:<?php echo $resaltador; ?>;  color:<?php echo $color_imp2; ?>;" align="center">
    <b>

    <?php if ($total_seven_con_Au_redon == 0)  
                 { $total_seven_con_Auu_redon = ''; }

      else {$total_seven_con_Auu_redon = $total_seven_con_Au_redon;
            $puntaje_sumado = $puntaje_sumado + $total_seven_con_Au_redon;
            $promedio_divisor++;
      }    

    echo $total_seven_con_Auu_redon;


     ?></b>
</TD>


</TR>









<?php
                }
                ?>


</TABLE>




<TABLE class="basetabla" style="margin-top: 6px;">


<TR style="margin-top: 10px;">

<TD class="" style="width:5%; height:auto; font-size: 14px; color:<?php echo $color_imp1; ?>; font-style: italic;" align="center">
<b></b>    
</TD>

<?php
  
  $promedio_del_grupo =  $puntaje_sumado /  $promedio_divisor ; 

 $promedio_del_grupo_redon =number_format($promedio_del_grupo, 2, '.', '');



?>


<TD class="" style="width:40%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>; font-style: italic;" align="center">
<b>Promedio General de la Sección: <?php echo $promedio_del_grupo_redon; ?> Pts. </b>    
</TD>


<?php $aprobtt = $totalRows_datos_control - $conteo_repro; 


$porcentaje_aplazado = ($conteo_repro*100)/$totalRows_datos_control;


$porcentaje_aplazadoform =number_format($porcentaje_aplazado, 2, '.', '');  

 ?>


<TD class="" style="width:50%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>; font-style: italic;" align="center">


<b>Aprobados: <?php echo $aprobtt; ?>  (<?php $por_aprob = 100-$porcentaje_aplazado;
 $por_aprobformat=number_format($por_aprob, 2, '.', '');   
 echo $por_aprobformat; ?>%)  /   Aplazados: <?php echo $conteo_repro; ?>  (<?php echo $porcentaje_aplazadoform; ?>%)</b>   





</TD>


<TD class="" style="width:5%; height:auto; font-size: 14px; color:<?php echo $color_imp1; ?>; font-style: italic;" align="center">
<b></b>    
</TD>



</TR>

<TR style="margin-top: 10px;">

<TD class="" style="width:5%; height:auto; font-size: 14px; color:<?php echo $color_imp1; ?>; font-style: italic;" align="center">
<b></b>    
</TD>


<TD class="" style="width:40%; height:auto; font-size: 12px; color:<?php echo $color_imp3; ?>; font-style: italic;" align="center">
<b>Se excluyen alumnos con "0", o sin notas.</b>    
</TD>

<TD class="" style="width:50%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>; font-style: italic;" align="center">
 
</TD>


<TD class="" style="width:5%; height:auto; font-size: 14px; color:<?php echo $color_imp1; ?>; font-style: italic;" align="center">
<b></b>    
</TD>



</TR>




</TABLE>



</page>















<?php

    $contentxx = ob_get_clean(); 

try
    {
        $hixx = $_POST["id_tituloxxx"];

        $html2pdf = new HTML2PDF('P', 'LEGAL', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("Hoja_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>