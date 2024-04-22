<?php
error_reporting(0); //hide php errors
require '../../0 html2pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$i="1";
// captura la hoja a ser impresa
ob_start();
?>

<?php

$tituloxxx = $_POST['titulo'];

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

<page backtop="8mm" backbottom="1mm" backleft="1mm" backright="1mm">
   
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


<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">&nbsp;<?php echo $tituloxxx; ?>.
         

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


<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">       

</TD>





</TR>








<TR>

<TD class="" style="width:32%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="LEFT"> 
</TD>

<TD class="" style="width:15%; height:auto; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><b><u>&nbsp;<?php echo $row_datos_periodo['inicia']; ?>&nbsp; - 
                 &nbsp;<?php echo $row_datos_periodo['termina']; ?>&nbsp;</u></b>
</TD>

<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><?php echo $row_datos_queryplantel["www"]; ?>
                    

</TD>

</TR>











</TABLE>










<TABLE class="basetabla" style="margin-top: 12px;" cellspacing="-1">





    <TR >

<TD class="miniborder" style="width:2%; height:15px; font-size: 11px; color:<?php echo $color_imp1; ?>;" align="center">N°
</TD>

<TD class="miniborder" style="width:28%; height:15px; font-size: 11px; color:<?php echo $color_imp1; ?>; padding-left: 4px;" align="left"><b>Nombres y Apellidos</b>                               
</TD>

<TD class="miniborder" style="width:8%; height:15px; font-size: 11px; color:<?php echo $color_imp1; ?>;" align="center"><b>Doc. de Id.</b>
</TD>
<TD class="miniborder" style="width:22%; height:15px; font-size: 11px; color:<?php echo $color_imp1; ?>;" align="center"><b>Email</b>
</TD>
<TD class="miniborder" style="width:20%; height:15px; font-size: 11px; color:<?php echo $color_imp1; ?>;" align="center"><b>Teléfono(s)</b>
</TD>

<TD class="miniborder" style="width:10%; height:15px; font-size: 11px; color:<?php echo $color_imp1; ?>;" align="center"><b>Cargo 1</b>
</TD>
<TD class="miniborder" style="width:10%; height:15px; font-size: 11px; color:<?php echo $color_imp1; ?>;" align="center"><b>Cargo 2</b>
</TD>




</TR>





</TABLE>



<TABLE class="basetabla" style="margin-top: 4px;" cellspacing="-1">



<?php

include("../../conectar.php");


$query = "SELECT * FROM plantilla_contratados, plantilla_personal, sexo, divisiones, grados
                                 
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
           

            and sexo.id_sexo = plantilla_personal.id_sexo
                       
            and plantilla_contratados.id_division = divisiones.id_division
            and plantilla_contratados.id_plant_grados = grados.id_grado 
            and plantilla_personal.id_sexo = '1'
            and plantilla_contratados.status = '1'            

            ORDER BY plantilla_personal.nombre_per ASC ";

$datos_plantilla = mysqli_query($enlace, $query) or die(mysqli_error());


mysqli_close($enlace);



$media =  ceil($totalRows_datos_plantilla/2);

$centro = $media + 1;

    mysqli_data_seek($datos_plantilla, 0);  // al estar el fetch dentro de otro me obvia el primeo, con esto reseteo



while( $row_datos_plantilla = mysqli_fetch_array($datos_plantilla)){ 


?>









    <TR >

<TD class="miniborder" style="width:2%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center">


<b><?php
    echo $i;
    $i++;    
?></b>



</TD>

<TD class="miniborder" style="width:28%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>; padding-left: 4px;" align="left">
                                    <b><?php echo $row_datos_plantilla['nombre_per']; ?></b>, <?php echo $row_datos_plantilla['apellido_per']; ?>
</TD>

<TD class="miniborder" style="width:8%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $row_datos_plantilla['ci_per']; ?>
</TD>
<TD class="miniborder" style="width:22%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $row_datos_plantilla['email_per']; ?>
</TD>
<TD class="miniborder" style="width:20%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $row_datos_plantilla['celular_per'];

                                                          if (!$row_datos_plantilla['telefono_per'] == "") {       
                                                            echo " y " .  $row_datos_plantilla['telefono_per'];
                                                          }

$id_contratox = $row_datos_plantilla['id_contrato'];

                                                           ?>
</TD>


  <?php


 include("../../conectar.php");

$queryH = "SELECT * FROM cargos_all, plantilla_cargos
                        
          WHERE  cargos_all.id_cargo = plantilla_cargos.id_cargo
          and    cargos_all.id_contrato = '$id_contratox'  LIMIT 1 
          

            ";

$datos_plantillaH = mysqli_query($enlace, $queryH) or die(mysqli_error());

$row_datos_plantillaH = mysqli_fetch_array($datos_plantillaH); 


mysqli_close($enlace);  ?>



<TD class="miniborder" style="width:10%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $row_datos_plantillaH['nombre_cargo']; ?>
</TD>


<?php


 include("../../conectar.php");

$queryHa = "SELECT * FROM cargos_all, plantilla_cargos
                        
          WHERE  cargos_all.id_cargo = plantilla_cargos.id_cargo
          and    cargos_all.id_contrato = '$id_contratox'  LIMIT 1,1
          

            ";

$datos_plantillaHa = mysqli_query($enlace, $queryHa) or die(mysqli_error());

$row_datos_plantillaHa = mysqli_fetch_array($datos_plantillaHa); 


mysqli_close($enlace);  ?>



<TD class="miniborder" style="width:10%; height:15px; font-size: 11px; color:<?php echo $color_imp2; ?>;" align="center"><?php echo $row_datos_plantillaHa['nombre_cargo']; ?>
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
        $hixx = $_POST["titulo"];

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