<?php
error_reporting(0); //hide php errors
require '../../0 html2pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$i="1";
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


<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">&nbsp;Profesor: __________________________.
         

</TD>







</TR>





<TR>

<TD class="" style="width:32%; height:auto; font-size: 12px; color:<?php echo $color_imp3; ?>;" align="center">

Lista actualizada el:


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


<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center"><b><?php echo $_POST["id_tituloxxx"]; ?></b> -&nbsp;&nbsp;Lapso: _______.
         

</TD>





</TR>








<TR>

<TD class="" style="width:32%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="LEFT"> Materia:  ________________________.
</TD>

<TD class="" style="width:15%; height:auto; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><b><u>&nbsp;<?php echo $row_datos_queryperXX['periodo_escolar']; ?>&nbsp;</u></b>
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

<TD class="miniborderleft" style="width:6.8%; height:90px; font-size: 14px; color:<?php echo $color_imp1; ?>;" align="center"><div style="rotate:90; margin-left: 5px;"></div>
</TD>





<TD class="" style="width:4.5%; height:90px; font-size: 10px; color:<?php echo $color_imp3; ?>;" align=""><div style="margin-top: 75px;"><b>&nbsp;&nbsp;Prom.</b></div>  
</TD>
<TD class="" style="width:0.5%; height:90px; font-size: 12px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="" style="width:4.1%; height:90px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align=""><div style="margin-top: 75px;"><b>&nbsp;DEF.</b></div>  
</TD>

</TR>


</TABLE>





<TABLE class="basetabla" style="margin-top: 4px;" cellspacing="-1">


<TR >

<TD class="" style="width:3%; height:15px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>

<TD class="" style="width:33.5%; height:15px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="right">
</TD>

<TD class="miniborder" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">%
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">%
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">%
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">%
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">%
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">%
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">Calif
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">%
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





<TABLE class="basetabla" style="margin-top: 4px;" cellspacing="-1">


<TR >

<TD class="miniborder" style="width:3%; height:15px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><b>N°</b>
</TD>

<TD class="" style="width:33.5%; height:15px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="right">Ponderación:&nbsp;&nbsp;
</TD>

<TD class="miniborder" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
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
    echo $i;
    $i++;    
?></b>



</TD>

<TD class="miniborder" style="width:33.5%; height:15px; font-size: 11px; color:<?php echo $color_imp1; ?>; padding-left: 4px;" align="left">
                                    <b><?php echo $row_datos_control['apellidos_estu']; ?></b>, <?php echo $row_datos_control['nombre_estu']; ?>
</TD>

<TD class="miniborder" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>

<TD class="miniborderleft" style="width:3.6%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:3.2%; height:15px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
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



<?php

if ($centro == $i) {
    echo "<hr style=\"margin-top: 3px; color:$color_imp1;\">";
}


?>





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