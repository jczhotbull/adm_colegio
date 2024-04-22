<?php
error_reporting(0); //hide php errors
require '../../0 html2pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$ipp="1";
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

<TR>


<TD class="" style="width:40%; height:auto; font-size: 14px; color: <?php echo $color_imp3; ?>;" align="center"><?php echo $row_datos_queryplantel["www"]; ?>
 
</TD>


<TD class="" style="width:20%; height:auto; font-size: 14px; color: <?php echo $color_imp3; ?>;" align="center">
 
</TD>

<TD class="" style="width:40%; height:auto; font-size: 14px; color: <?php echo $color_imp3; ?>;" align="center">A = Asistente&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;I = Inasistente
 
</TD>


</TR>


</TABLE>




<table>


 <TR>
    <td style="height:0.5px; font-size: 1px; color:white;" align="center"></td>
</TR>
</table>

<TABLE class="basetabla" cellspacing="-1">

<TR>

<TD class="" style="width:3%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>


<TD class="" style="width:3%; height:105px; font-size: 14px; color:<?php echo $color_imp3; ?>; " align=""><div style="rotate:90; margin-top: 40px;">Contenido</div>
</TD>

<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>


<TD class="" style="width:1%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>


<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>

<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>


<TD class="" style="width:1%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>


<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:105px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>



</TR>



</TABLE>




<TABLE class="basetabla" style="margin-top: 6px;" cellspacing="-1">

<TR >


<TD class="" style="width:3%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>


<TD class="" style="width:3%; height:40px; font-size: 12px; color:<?php echo $color_imp1; ?>; " align=""><div style="rotate:90; margin-top: 5px;">Fecha</div>
</TD>

<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>


<TD class="" style="width:1%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>


<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>

<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>


<TD class="" style="width:1%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>


<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:40px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>




</TR>



</TABLE>






<TABLE class="basetabla" style="margin-top: 6px;" cellspacing="-1">


<?php 

$repetir_por = 35;

while( $repetir_por > 1  ){ 

?>


    <TR  >

<TD class="miniborder" style="width:3%; height:16px; font-size: 13px; color:<?php echo $color_imp2; ?>; margin-top: 1px;" align="center">

 <b>   <?php
    echo $ipp;
    $ipp++;    
?></b>



</TD>

<TD class="" style="width:3%; height:16px; font-size: 13px; color:<?php echo $color_imp1; ?>; padding-left: 4px;" align="left">
                                    
</TD>

<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>


<TD class="" style="width:1%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>


<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>

<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>


<TD class="" style="width:1%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>


<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.8%; height:16px; font-size: 14px; color:<?php echo $color_imp2; ?>; background-color: #eceae8;" align="center">
</TD>


</TR>


 <TR>
    <td style="height:0.5px; font-size: 1px; color:white;" align="center"></td>
</TR>

<?php
 $repetir_por--;    }
                ?>


</TABLE>


</page>







<?php

    $contentxx = ob_get_clean(); 

try
    {
        

        $html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("Hoja_lista_Carta_vacia_Mod.pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>