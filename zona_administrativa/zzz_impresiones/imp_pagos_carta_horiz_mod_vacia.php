<?php
error_reporting(0); //hide php errors
require '../../0 html2pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;


$el_total_real = "0";
error_reporting(0);

$r = "R:";
$i="1";
// captura la hoja a ser impresa
ob_start();
?>


<?php

$total_ins = '';
$total_1 = '';
$total_2 = '';
$total_3 = '';

$total_4 = '';
$total_5 = '';
$total_6 = '';

$total_7 = '';
$total_8 = '';
$total_9 = '';

$total_10 = '';
$total_11 = '';
$total_12 = '';


 ?>

<style>
.centrado{ padding-left: 85px;}
.bannersize {width: 614px; height: 50px;}

.basetabla { margin:auto; width:100%;}
.miniborder {border:0.5px solid black;}

.miniborderlight {border:0.5px dotted grey;}

.minibordercut {border-top:1px dashed grey;}

.miniborder_g {border:1px solid grey;}

.miniborder_A {border-right: 3px double grey; border-top: 3px double grey; border-left: 3px double grey;}

.miniborder_B {border-bottom: 3px double grey; border-right: 3px double grey; border-left: 3px double grey;}

.bordecompleto td{border:1px solid black;}

.bordecompleto th{border:1px solid black;}


</style>

<page backtop="8mm" backbottom="1mm" backleft="1mm" backright="1mm">
   
    <page_header> 
    </page_header> 

    <?php

include("../../conectar.php");

$ciclo_actu_xx = $_POST["id_cicloxxx"];


$queryperiodo_act1 = "SELECT * FROM temporada_escolar WHERE id_periodo_es = '$ciclo_actu_xx' limit 1";
$datos_periodo_act1 = mysqli_query($enlace, $queryperiodo_act1) or die(mysqli_error());
$row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1);




$queryplantel = "SELECT * FROM z_plantel LIMIT 1";

$datos_queryplantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());

$row_datos_queryplantel = mysqli_fetch_array($datos_queryplantel); 

$logo_plantel = $row_datos_queryplantel['logo_plantel'];

?>

    <page_footer>
    
    </page_footer>





<TABLE class="basetabla">


<TR>

<TD class="" style="width:40%; height:auto; font-size: 14px; font-style: italic;" align="center">
<b style="color:black; ">Control Manual </b>
<b style="color:#3333ff; "><?php echo $row_datos_queryplantel['nombre_plantel']; ?></b>
           

</TD>


<TD class="" style="width:15%; height:auto; font-size: 12px;" align="center">

    <b><?php echo $_POST["id_tituloxxx"]; ?></b>



</TD>


<TD class="" style="width:24%; height:auto; font-size: 12px; color:grey;" align="left">

    Actualizada el:

  
         

</TD>





<TD class="" style="width:18%; height:auto; font-size: 10px;" align="center">

Año Escolar:  <b><?php echo $row_datos_periodo_act1['periodo_escolar']; ?></b>
           

</TD>

</TR>






</TABLE>












<TABLE class="basetabla" style="margin-top: 12px;" cellspacing="-1">

<TR >

<TD class="miniborder" style="width:1.3%; height:13px; font-size: 9px; color:#404347; background-color: #ecf2f4;" align="center"><b>N°</b>
</TD>



<TD class="miniborder" style="width:11.5%; height:13px; font-size: 9px; color:#404347;" align="center">Estudiantes
</TD>
                                                                                                    
<TD class="miniborder" style="width:6.6%; height:13px; font-size: 9px; color:grey;" align="center">Representantes
</TD>

<TD class="miniborder" style="width:6%; height:13px; font-size: 9px; color:grey;" align="center">Teléfono
</TD>


<?php

include("../../conectar.php");

              $querymod2 = "SELECT * FROM periodo_de_pago where id_periodo_pago = 1 ";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());
              
              $row_datos_mod2 = mysqli_fetch_array($datos_mod2);
                         
               mysqli_close($enlace);    

$primer_pago = $row_datos_mod2['1er_pago'];
$segundo_pago = $row_datos_mod2['2do_pago'];
$tercero_pago = $row_datos_mod2['3er_pago'];

$especial_primero = $row_datos_mod2['especial_1'];

$cuarto_pago = $row_datos_mod2['4to_pago'];
$quinto_pago = $row_datos_mod2['5to_pago'];
$sexto_pago = $row_datos_mod2['6to_pago'];

$especial_segundo = $row_datos_mod2['especial_2'];



$septimo_pago = $row_datos_mod2['7mo_pago'];
$octavo_pago = $row_datos_mod2['8vo_pago'];
$noveno_pago = $row_datos_mod2['9no_pago'];

$especial_tercero = $row_datos_mod2['especial_3'];



$decimo_pago = $row_datos_mod2['10m_pago'];
$onceavo_pago = $row_datos_mod2['11o_pago'];
$doceavo_pago = $row_datos_mod2['12o_pago'];

$especial_cuarto = $row_datos_mod2['especial_4'];



?>




  



<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center"><b>Inscripción</b>
</TD>
<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center"><?php echo $primer_pago; ?>
 <span style="font-size: 10px; color:black;"><sup>(1)</sup></span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center"><?php echo $segundo_pago; ?>
 <span style="font-size: 10px; color:black;"><sup>(2)</sup></span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center"><?php echo $tercero_pago; ?>
 <span style="font-size: 10px; color:black;"><sup>(3)</sup></span>
</TD>





<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center"><b><?php echo $cuarto_pago; ?></b> <span style="font-size: 10px; color:black;"><sup>(4)</sup></span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center"><?php echo $quinto_pago; ?>
  <span style="font-size: 10px; color:black;"><sup>(5)</sup></span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center"><?php echo $sexto_pago; ?>
 <span style="font-size: 10px; color:black;"><sup>(6)</sup></span>
</TD>





<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center"><b><?php echo $septimo_pago; ?></b> <span style="font-size: 10px; color:black;"><sup>(7)</sup></span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center"><?php echo $octavo_pago; ?>
 <span style="font-size: 10px; color:black;"><sup>(8)</sup></span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center"><?php echo $noveno_pago; ?>
  <span style="font-size: 10px; color:black;"><sup>(9)</sup></span>
</TD>



<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center"><b><?php echo $decimo_pago; ?></b> <span style="font-size: 10px; color:black;"><sup>(10)</sup></span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center"><?php echo $onceavo_pago; ?>
 <span style="font-size: 10px; color:black;"><sup>(11)</sup></span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center"><?php echo $doceavo_pago; ?>
 <span style="font-size: 10px; color:black;"><sup>(12)</sup></span>
</TD>














</TR>



</TABLE>






<TABLE class="basetabla" style="margin-top: 6px;" cellspacing="-1">



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
       /*  and retirado_si_o_no = '0'        */
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$datos_control = mysqli_query($enlace, $query) or die(mysqli_error());

$totalRows_datos_control = mysqli_num_rows($datos_control); 

$media =  ceil($totalRows_datos_control/2);

$centro = $media + 1;




    

mysqli_close($enlace);




while( $row_datos_control = mysqli_fetch_assoc($datos_control)){ 


?>









    <TR >

<TD class="miniborder" style="width:1.3%; height:12.5px; font-size: 9px; color:#404347; background-color: #ecf2f4;" align="center">


<b><?php
    echo $i;
    $i++; 

?></b>



</TD>

<TD class="miniborder" style="width:11.5%; height:12.5px; font-size: 9px; color:black; padding-left: 4px;" align="left">
                                    <b><?php

$firstape = strtok($row_datos_control['apellidos_estu'], ' ');

$lastape = strstr($row_datos_control['apellidos_estu'], ' ');


if ($lastape[1] != '') {

   $firstCharacterlastape = $lastape[1]; 
}

else {
    $firstCharacterlastape ='';
}
   

                                     echo $row_datos_control['apellidos_estu']; ?> </b>   <br>


<?php 

$firstnam = strtok($row_datos_control['nombre_estu'], ' ');

$lastnam = strstr($row_datos_control['nombre_estu'], ' ');

$firstCharacterlastnam = $lastnam[1];    

                                     echo $row_datos_control['nombre_estu']; ?> 

    <?php  if ($row_datos_control['retirado_si_o_no'] == '1') {
      $resultiBB = '<b><span style="color:purple;">- Ret</span></b>'  ;
            echo $resultiBB;
    }   ?>





<span style="font-size: 12px; color:green;"><sup><b><i>

<?php 



$el_becario = $row_datos_control['id_estud'];

include("../../conectar.php");


$querybbb = "SELECT * FROM extra_catedra 
         WHERE   id_estud = '$el_becario'
         and id_area = '88' limit 1 " ;

$datos_controlbbb = mysqli_query($enlace, $querybbb) or die(mysqli_error());

$totalRows_datos_controlbbb = mysqli_num_rows($datos_controlbbb); 


mysqli_close($enlace);


if ($totalRows_datos_controlbbb >=1) {
    $mensaje = '-BK';
    
}

else {
$mensaje = '';
}

echo $mensaje;
 ?> </i></b> </sup></span>



<br><b>Ci:</b> <?php echo $row_datos_control['ci_estu']; ?>.








<!--

<?php

$firstape = strtok($row_datos_control['apellidos_estu'], ' ');

$lastape = strstr($row_datos_control['apellidos_estu'], ' ');

$firstCharacterlastape = $lastape[1];    

                                     echo $firstape; ?> <?php echo $firstCharacterlastape; ?>.</b>   


<?php 

$firstnam = strtok($row_datos_control['nombre_estu'], ' ');

$lastnam = strstr($row_datos_control['nombre_estu'], ' ');

$firstCharacterlastnam = $lastnam[1];    

                                     echo $firstnam; ?> <?php echo $firstCharacterlastnam; ?>.

-->



</TD>



<?php

include("../../conectar.php");

$el_id = $row_datos_control['id_estud'];

$queryP = "SELECT * FROM reg_estu_repre_all, reg_representante, reg_estu_actual, reg_pagos
         WHERE   reg_estu_repre_all.id_estu = '$el_id'
         and reg_representante.id_repre = reg_estu_repre_all.id_repre
         and reg_estu_actual.id_estud = '$el_id'
         and reg_estu_actual.cursa_actualmente = '$ciclo_actu_xx'
         and reg_pagos.id_pago = reg_estu_actual.id_reg_pagos
  
       
         GROUP BY reg_representante.id_repre LIMIT 1" ;

$datos_controlP = mysqli_query($enlace, $queryP) or die(mysqli_error());

$row_datos_controlP = mysqli_fetch_assoc($datos_controlP);

$id_repre_pp = $row_datos_controlP['id_repre'];



$query_hijos = "SELECT * FROM reg_estu_repre_all, reg_representante, reg_estu_actual
         WHERE   reg_estu_repre_all.id_repre = reg_representante.id_repre
         and     reg_estu_repre_all.id_estu = reg_estu_actual.id_estud
         and     reg_estu_repre_all.id_repre = '$id_repre_pp'
         and     reg_estu_actual.cursa_actualmente = '$id_cicloxxx'
         and     reg_estu_actual.el_activo = '1'
       
         GROUP BY reg_estu_repre_all.id_estu_repre" ;

$datos_control_hijos = mysqli_query($enlace, $query_hijos) or die(mysqli_error());

$row_datos_control_hijos = mysqli_fetch_assoc($datos_control_hijos);

$total_de_hijos = mysqli_num_rows($datos_control_hijos);


mysqli_close($enlace);




?>


<TD class="miniborder" style="width:6.6%; height:12.5px; font-size: 9px; color:black; padding-left: 4px;" align="left">
                                    

<b><?php 

$firstnamr = strtok($row_datos_controlP['nombre_repre'], ' ');

$lastnamr = strstr($row_datos_controlP['nombre_repre'], ' ');

$firstCharacterlastnamr = $lastnamr[1];    


$firstaper = strtok($row_datos_controlP['apellido_repre'], ' ');

$lastaper = strstr($row_datos_controlP['apellido_repre'], ' ');

$firstCharacterlastaper = $lastaper[1];  


                                     echo $firstnamr; ?> <?php echo $firstCharacterlastnamr; ?>.  </b> <br> <?php echo $firstaper; ?> <?php echo $firstCharacterlastaper; ?>


<span style="font-size: 11px; color:blue;"><sup><?php

if ($total_de_hijos >=2) {
    $el_totalsito = $total_de_hijos;
}

else {
    $el_totalsito = '';
}



 echo $el_totalsito;  ?></sup></span> 


 <span style="font-size: 11px; color:red;"><sup><?php


if ($row_datos_controlP['acceso'] ==1) {
    $restringido = '@';
}

else {
    $restringido = '';
}




echo $restringido;  ?></sup></span>  






   <br><b>Ci:</b> <?php echo $row_datos_controlP['ci_repre']; ?>.




<!--
<?php

$firstaper = strtok($row_datos_controlP['apellido_repre'], ' ');

$lastaper = strstr($row_datos_controlP['apellido_repre'], ' ');

$firstCharacterlastaper = $lastaper[1];    

                                     echo $firstaper; ?></b>   


<?php 

$firstnamr = strtok($row_datos_controlP['nombre_repre'], ' ');

$lastnamr = strstr($row_datos_controlP['nombre_repre'], ' ');

$firstCharacterlastnamr = $lastnamr[1];    

                                     echo $firstnamr;  ?>  -->
  
</TD>





<?php


   
       ?>





<TD class="miniborder" style="width:6%; height:12.5px; font-size: 9px; color:black;" align="center"> 

<?php echo $row_datos_controlP['celular_repre']; ?> <br><?php echo $row_datos_controlP['telefono_repre']; ?>


</TD>




<?php 
$cero_cero = '';
?>

<TD class="miniborder" style="width:5.9%; height:12.5px; font-size: 9px; color:black; background-color: #ecf2f4;" align="center">
<b></b>


 <br>
<span style="font-size: 9px;"><i>

</i></span>

<!--

     <br> <b><?php if ($row_datos_controlP['recibo_pago_insc'] != '') {
        echo $r;
     }   ?> </b><?php  echo $row_datos_controlP['recibo_pago_insc']; ?>  -->


  
    
     




</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">


</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">




</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">




</TD>







<TD class="miniborder" style="width:5.9%; height:12.5px; font-size: 9px; color:black; background-color: #ecf2f4;" align="center">



</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">



</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">



</TD>





<TD class="miniborder" style="width:5.9%; height:12.5px; font-size: 9px; color:black; background-color: #ecf2f4;" align="center">



</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">



</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">


</TD>


<TD class="miniborder" style="width:5.9%; height:12.5px; font-size: 9px; color:black; background-color: #ecf2f4;" align="center">



</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">

</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">


</TD>








</TR>










<?php
                }
                ?>


</TABLE>







<TABLE class="basetabla" style="margin-top: 2px;" cellspacing="-1">

<TR >


<TD  style="width:1.3%; height:13px; font-size: 9px;" align="center">
</TD>



<TD  style="width:11.5%; height:13px; font-size: 9px; color:#404347;" align="center">
</TD>
                                                                                                    
<TD  style="width:6.6%; height:13px; font-size: 9px; color:grey;" align="center">
</TD>

<TD class="miniborder" style="width:6%; height:13px; font-size: 9px; color:black;" align="center"><b>Sub-Totales:</b>
</TD>



  



<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
<span style="font-size: 9px;">    <?php echo number_format($total_ins,1,",","."); ?> </span>
</TD>
<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
 <span style="font-size: 9px;">    <?php echo number_format($total_1,1,",","."); ?> </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
 <span style="font-size: 9px;">    <?php echo number_format($total_2,1,",","."); ?> </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
<span style="font-size: 9px;">     <?php echo number_format($total_3,1,",","."); ?> </span>
</TD>





<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 9px;">     <?php echo number_format($total_4,1,",","."); ?> </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 9px;">     <?php echo number_format($total_5,1,",","."); ?> </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 9px;">     <?php echo number_format($total_6,1,",","."); ?> </span>
</TD>





<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 9px;">     <?php echo number_format($total_7,1,",","."); ?> </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 9px;">     <?php echo number_format($total_8,1,",","."); ?> </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 9px;">     <?php echo number_format($total_9,1,",","."); ?> </span>
</TD>



<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 9px;">     <?php echo number_format($total_10,1,",","."); ?> </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 9px;">     <?php echo number_format($total_11,1,",","."); ?> </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 9px;">     <?php echo number_format($total_12,1,",","."); ?> </span>
</TD>














</TR>



</TABLE>


<?php 
if($page_cu == $page_nb) 
{

   echo "<br>";
   echo "<span style=\"height:10px; font-size: 10px; color: black;\"> ".$row_datos_queryplantel["www"]."&nbsp;&nbsp;/&nbsp;&nbsp;
   <b>Super-Indices en representantes indica el <span style=\"color:blue;\">N°</span> de representados.</b>&nbsp;&nbsp;/ &nbsp;&nbsp;Super-Indices en cantidades indica cantidad de abono.&nbsp;&nbsp; / &nbsp;&nbsp; 
    <span style=\"color:green;\"><b><i>-BK</i></b></span> = Becado. &nbsp;&nbsp;&nbsp;
    <span style=\"color:purple;\"><b><i>-Ret</i></b></span> = Retirado. &nbsp;&nbsp;
    <span style=\"color:red;\"><b><i>-@</i></b></span> = Acceso Restringido. </span>";
}
?>



</page>















<?php

    $contentxx = ob_get_clean(); 

try
    {
        $hixx = $_POST["id_tituloxxx"];

        $html2pdf = new HTML2PDF('L', 'LETTER', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);                                    //  'p' vertical   'L' horizontal
        $html2pdf->Output("Hoja_todos_los_datos_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>