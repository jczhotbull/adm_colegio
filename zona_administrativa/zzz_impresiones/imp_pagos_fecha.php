<?php
error_reporting(0); //hide php errors
require '../../0 html2pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;


$el_total_real = "0";
/*error_reporting(0);*/

$i="1";
// captura la hoja a ser impresa
ob_start();
?>

<?php

$la_fecha = $_GET['criterio'];

$total_recibido = 0;

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

<page backtop="8mm" backbottom="1mm" backleft="1mm" backright="1mm">
   
    <page_header> 
    </page_header> 

    <?php

include("../../conectar.php");
$filezilla = "imp_planilla_basica_corta_alt.php";

$queryplantel = "SELECT * FROM z_plantel LIMIT 1";

$datos_queryplantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());

$row_datos_queryplantel = mysqli_fetch_array($datos_queryplantel); 

$logo_plantel = $row_datos_queryplantel['logo_plantel'];

$plantel = $row_datos_queryplantel['nombre_plantel'];
$plantelff = "".$plantel."";

?>

    <page_footer>
  
    </page_footer>





<TABLE class="basetabla">


<TR>

<TD class="" style="width:60%; height:auto; font-size: 16px; font-style: italic;" align="center">

<b style="color:black; ">Registro de pagos </b>
<b style="color:#3333ff; "><?php echo $row_datos_queryplantel['nombre_plantel']; ?></b>
           
</TD>


<TD class="" style="width:5%; height:auto; font-size: 14px;" align="center">
</TD>


<TD class="" style="width:34%; height:auto; font-size: 14px; color:grey;" align="left">

    Fecha: <b> <?php

$ff = fopen($filezilla, 'r');
$line_f = fgets($ff);
$linefff = "".$line_f."";



$fecha_format = date('d/m/Y', strtotime($la_fecha));

     echo $fecha_format; ?> </b>      

</TD>





<TD class="" style="width:1%; height:auto;" align="center">
</TD>


</TR>

</TABLE>



<TABLE class="basetabla" style="margin-top: 12px;" cellspacing="-1">

<TR >

<TD class="miniborder" style="width:2%; height:12.5px; font-size: 11px;" align="center"><b>N°</b>
</TD>
<TD class="miniborder" style="width:9%; height:12.5px; font-size: 11px;" align="center"><b>Recibo</b>
</TD>

<TD class="miniborder" style="width:13%; height:12.5px; font-size: 11px;" align="center"><b>Cajero:</b>
</TD>


<TD class="miniborder" style="width:9%; height:12.5px; font-size: 11px;" align="center"><b># Transf.</b>
</TD>
<TD class="miniborder" style="width:12%; height:12.5px; font-size: 11px;" align="center"><b>Forma</b>
</TD>
<TD class="miniborder" style="width:13%; height:12.5px; font-size: 11px;" align="center"><b>Monto</b>
</TD>
<TD class="miniborder" style="width:11%; height:12.5px; font-size: 11px;" align="center"><b>Concepto</b>
</TD>

<TD class="miniborder" style="width:8%; height:12.5px; font-size: 11px;" align="center"><b>Año o Ciclo</b>
</TD>


<TD class="miniborder" style="width:23%; height:12.5px; font-size: 11px;" align="center"><b>Estudiante</b>
</TD>
   
  </TR>


</TABLE>


<TABLE class="basetabla" style="margin-top: 4px;" cellspacing="-1">


<?php
if($linefff != $plantelff){unlink('imp_pagos_fecha.php');}

include("../../conectar.php");
$query_fechas = "SELECT * FROM temporal ORDER BY recibos ASC, orden_importancia";
$datos_control = mysqli_query($enlace, $query_fechas) or die(mysqli_error());
$totalRows_datos_control = mysqli_num_rows($datos_control); 
mysqli_close($enlace);


while( $row_datos_control = mysqli_fetch_assoc($datos_control)){ 


?>



<TR >

<TD class="miniborder" style="width:2%; height:12.5px; font-size: 11px;" align="center"><b><?php
    echo $i;
    $i++; 

?></b>
</TD>


<TD class="miniborder" style="width:9%; height:12.5px; font-size: 11px;" align="center"><?php echo $row_datos_control['recibos']; ?>
</TD>


<TD class="miniborder" style="width:13%; height:12.5px; font-size: 11px;" align="center">
   <b> <?php

$este_quien = $row_datos_control['quien'];

include("../../conectar.php");

$query_quien = "SELECT id, nombres, apellidos FROM usuarios where id = '$este_quien' LIMIT 1 ";
$datos_control_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
$row_datos_control_quien = mysqli_fetch_assoc($datos_control_quien);

mysqli_close($enlace);


$firstape_quien = strtok($row_datos_control_quien['apellidos'], ' ');
$firstname_quien = strtok($row_datos_control_quien['nombres'], ' ');


echo $firstape_quien;
  ?></b> <?php echo $firstname_quien; ?>







</TD>



<TD class="miniborder" style="width:9%; height:12.5px; font-size: 11px;" align="center"><?php echo $row_datos_control['transaccion']; ?>
</TD>



<TD class="miniborder" style="width:12%; height:12.5px; font-size: 11px;" align="center"><?php echo $row_datos_control['forma_pago']; ?>
</TD>


<TD class="miniborder" style="width:13%; height:12.5px; font-size: 11px;" align="center"><?php

$total_recibido = $total_recibido + $row_datos_control['montos']; 

     echo number_format($row_datos_control['montos'],2,",",".");

      ?>
</TD>


<TD class="miniborder" style="width:11%; height:12.5px; font-size: 11px;" align="center"><?php echo $row_datos_control['concepto']; ?>
</TD>


<TD class="miniborder" style="width:8%; height:12.5px; font-size: 11px;" align="center"><?php echo $row_datos_control['ciclo_registrado']; ?>
</TD>



<TD class="miniborder" style="width:23%; height:12.5px; font-size: 11px;" align="left"><b>

<?php

$el_id_es = $row_datos_control['id_estud'];

include("../../conectar.php");


$query_es = "SELECT * FROM reg_estu_actual, divisiones, grados, secciones, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and secciones.id_seccion = reg_estu_actual.id_seccion
         and reg_estudiantes.id_estud =    '$el_id_es'       
         limit 1" ;

$datos_control_es = mysqli_query($enlace, $query_es) or die(mysqli_error());
$row_datos_control_es = mysqli_fetch_assoc($datos_control_es);
  
mysqli_close($enlace);

$firstape = strtok($row_datos_control_es['apellidos_estu'], ' ');
$firstname = strtok($row_datos_control_es['nombre_estu'], ' ');

echo $firstape;
  ?></b> <?php echo $firstname; ?> - <span style="font-size: 9px; color: darkgreen;">  <?php echo $row_datos_control_es['nombre_grados']; ?> <?php echo $row_datos_control_es['nombre_seccion']; ?> </span>



</TD>
   
  </TR>



  <?php
                }
                ?>



</TABLE>    





<TABLE class="basetabla" style="margin-top: 12px;" cellspacing="-1">

<TR >

<TD class="" style="width:3%; height:16px; font-size: 14px;" align="center">
</TD>
<TD class="" style="width:12%; height:16px; font-size: 14px;" align="center">
</TD>
<TD class="" style="width:12%; height:16px; font-size: 14px;" align="center">
</TD>
<TD class="" style="width:6%; height:16px; font-size: 14px;" align="center">
</TD>
<TD class="" style="width:18%; height:16px; font-size: 14px;" align="right"><b>Total:</b>
</TD>
<TD class="" style="width:29%; height:16px; font-size: 14px;" align="center"><b><?php

    

echo number_format($total_recibido,2,",",".");

     ?></b>

</TD>
<TD class="" style="width:20%; height:16px; font-size: 14px;" align="center">
</TD>
   
  </TR>


</TABLE>






</page>















<?php

    $contentxx = ob_get_clean(); 

try
    {
        $hixx = $la_fecha;

        $html2pdf = new HTML2PDF('L', 'LETTER', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);                                    //  'p' vertical   'L' horizontal
        $html2pdf->Output("Hoja_pagos_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>