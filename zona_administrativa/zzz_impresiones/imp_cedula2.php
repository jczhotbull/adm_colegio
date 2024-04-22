<?php
error_reporting(0); //hide php errors
require '../../0 html2pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;


// captura la hoja a ser impresa
ob_start();
?>



<style>
.centrado{ padding-left: 85px;}
.bannersize {width: 614px; height: 50px;}

.basetabla { margin:auto; width:100%;}
.miniborder {border:1px solid black;}

.miniborderlight {border:0.5px dotted grey;}

.minibordercut {border-top:1px dashed grey;}

.miniborder_g {border:1px solid grey;}

.miniborder_A {border-right: 3px double grey; border-top: 3px double grey; border-left: 3px double grey;}

.miniborder_B {border-bottom: 3px double grey; border-right: 3px double grey; border-left: 3px double grey;}

.bordecompleto td{border:1px solid black;}

.bordecompleto th{border:1px solid black;}


</style>

<page backtop="1mm" backbottom="1mm" backleft="1mm" backright="1mm">
   
    <page_header> 
    </page_header> 

    <page_footer>      
    </page_footer>



    <?php

include("../../conectar.php");

$id_del_per = $_POST['id_per1'];

$per1 = "SELECT foto_per_ci FROM plantilla_personal WHERE id_per = '$id_del_per' Limit 1 ";
$datos_per1 = mysqli_query($enlace, $per1) or die(mysqli_error());
$row_datos_per1 = mysqli_fetch_assoc($datos_per1);


$id_del_per2 = $_POST['id_per2'];

$per2 = "SELECT foto_per_ci FROM plantilla_personal WHERE id_per = '$id_del_per2' Limit 1 ";
$datos_per2 = mysqli_query($enlace, $per2) or die(mysqli_error());
$row_datos_per2 = mysqli_fetch_assoc($datos_per2);





mysqli_close($enlace);
?>


<br><br>

<TABLE class="basetabla">

<TR>


  <TD class="" style="width:30%; height:auto;" align="center"  ROWSPAN=1> </TD>

  <TD class="miniborderlight" style="width:38%; height:auto;" align="center"  ROWSPAN=12>

    <img style="width:340px; max-height: auto;" src='../<?php echo $row_datos_per1['foto_per_ci']; ?>'/></TD>


     <TD class="" style="width:30%; height:auto;" align="center"  ROWSPAN=1> </TD>

  
</TR>


<TR>
</TR>


</TABLE>




<br><br><br><br><br>

<TABLE class="basetabla">

<TR>


  <TD class="" style="width:30%; height:auto;" align="center"  ROWSPAN=1> </TD>

  <TD class="miniborderlight" style="width:38%; height:auto;" align="center"  ROWSPAN=12>

    <img style="width:340px; max-height: auto;" src='../<?php echo $row_datos_per2['foto_per_ci']; ?>'/></TD>


     <TD class="" style="width:30%; height:auto;" align="center"  ROWSPAN=1> </TD>

  
</TR>


<TR>
</TR>


</TABLE>








</page>















<?php

    $contentxx = ob_get_clean(); 

try
    {
        

        $html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("cedula1.pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>