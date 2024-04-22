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


.miniborder_topC {border-right: 1px solid <?php echo $color_imp2; ?>; border-top:  1px solid <?php echo $color_imp2; ?>; border-left:  1px solid <?php echo $color_imp2; ?>; }
.miniborder_medC {border-right: 1px solid <?php echo $color_imp2; ?>; border-left:  1px solid <?php echo $color_imp2; ?>; }
.miniborder_dowC {border-right: 1px solid <?php echo $color_imp2; ?>; border-bottom: 1px solid <?php echo $color_imp2; ?>; border-left:  1px solid <?php echo $color_imp2; ?>; }


.miniborder_A {border-right: 3px double <?php echo $color_imp2; ?>; border-top: 3px double <?php echo $color_imp2; ?>; border-left: 3px double <?php echo $color_imp2; ?>;}

.miniborder_abajo {border-right: 3px double <?php echo $color_imp2; ?>; border-bottom: 3px double <?php echo $color_imp2; ?>; border-left: 3px double <?php echo $color_imp2; ?>;}

.miniborder_centro {border-right: 3px double <?php echo $color_imp2; ?>; border-left: 3px double <?php echo $color_imp2; ?>;}


.miniborder_B {border-bottom: 3px double <?php echo $color_imp2; ?>; border-right: 3px double <?php echo $color_imp2; ?>; border-left: 3px double <?php echo $color_imp2; ?>;}

.bordecompleto td{border:1px solid <?php echo $color_imp1; ?>;}

.bordecompleto th{border:1px solid <?php echo $color_imp1; ?>;}

.flip {transform: rotate(-180deg);}


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




<?php

include("../../conectar.php");

              $querymodcabecc = "SELECT * FROM z_cabecera where id_cabecera = 1 ";

              $datos_modcabecc = mysqli_query($enlace, $querymodcabecc) or die(mysqli_error());
              
              $row_datos_modcabecc = mysqli_fetch_array($datos_modcabecc);

$cab_principal = $row_datos_modcabecc['cab_principal'];
$cab_secundaria = $row_datos_modcabecc['cab_secund'];

$cab_div1 = $row_datos_modcabecc['cab_div1'];
$cab_div2 = $row_datos_modcabecc['cab_div2'];



$el_id_del_pago_esx = $_POST["id_reg_pagoooo"] ;


              $querymod9 = "SELECT * FROM reg_pagos where id_pago = '$el_id_del_pago_esx' ";

              $datos_mod9 = mysqli_query($enlace, $querymod9) or die(mysqli_error());
              
              $row_datos_mod9 = mysqli_fetch_array($datos_mod9);
                         




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









mysqli_close($enlace);   

?>



    <page_footer>
   
    </page_footer>





<TABLE class="basetabla">


<TR>   

<TD style="width:50%; height:10px; font-size: 14px;" align="center" ></TD>

<TD class="" style="width:50%; height:auto;" align="center"></TD>


</TR>



<TR>    
<TD style="width:50%; height:auto; font-size: 14px;" align="left" > <b><div style="rotate:-180;">&nbsp;&nbsp;&nbsp;&nbsp;HISTORIAL DE PAGOS - CICLO <?php echo $_POST["periodo_es"]; ?>.</div></b></TD>

  <TD class="" style="width:50%; height:auto; font-size: 12px;" align="left"><div style="rotate:-180;">&nbsp;&nbsp;&nbsp;&nbsp;Telfs: <?php echo $row_datos_queryplantel['telf_plantel1']; ?>,  <?php echo $row_datos_queryplantel['telf_plantel2']; ?>.</div>
           
</TD>


</TR>


<TR>    
<TD style="width:50%; height:auto; font-size: 14px;" align="left" ></TD>

  <TD class="" style="width:50%; height:auto; font-size: 12px;" align="left"><div style="rotate:-180;">&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $row_datos_queryplantel['email_plantel']; ?> </div>
           
</TD>


</TR>







<TR>   

<TD style="width:50%; height:2px; font-size: 14px;" align="center" ></TD>

<TD class="" style="width:50%; height:auto;" align="center"></TD>


</TR>




<TR>

  <TD class="" style="width:50%; height:auto;" align="left">
           
           <div style="rotate:-180;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img style="width:350px; max-height: 350px;" src='../<?php echo $logo_plantel; ?>'/></div></TD>


  <TD class="" style="width:50%; height:auto;" align="center">
           
</TD>


</TR>



<TR>   

<TD style="width:50%; height:12px; font-size: 14px;" align="center" ></TD>

<TD class="" style="width:50%; height:auto;" align="center"></TD>


</TR>




<TR>    
<TD style="width:50%; height:auto; font-size: 14px;" align="left" ><div style="rotate:-180;">&nbsp;&nbsp;&nbsp;&nbsp;RIF. <?php echo $row_datos_queryplantel['rif_plantel']; ?></div></TD>

  <TD class="" style="width:50%; height:auto;" align="center">
           
</TD>


</TR>


<TR>    
<TD style="width:50%; height:auto; font-size: 14px;" align="left" ><div style="rotate:-180;">&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $cab_div2; ?>:  <?php echo $row_datos_queryplantel['codigo_plantel']; ?></b></div></TD>

  <TD class="" style="width:50%; height:auto;" align="center">
           
</TD>


</TR>

<TR>    
<TD style="width:50%; height:auto; font-size: 14px;" align="left" ><div style="rotate:-180;">&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $cab_principal; ?></b></div></TD>

  <TD class="" style="width:50%; height:auto;" align="left"><div style="rotate:-180;">&nbsp;&nbsp;&nbsp;&nbsp;<b>Anotaciones:</b></div>
           
</TD>


</TR>



</TABLE>

<!-- empieza la tabla derecha -->





<TABLE class="basetabla">


<TR>

  <TD class="" style="width:20%; height:30px;" align="center">           
           </TD>


  <TD style="width:28%; height:12px; font-size: 10px;" align="center" > </TD>
  <TD style="width:30%; height:12px; font-size: 10px;" align="center" > </TD>

    <TD class="" style="width:20%; height:20px;" align="center"  >           
            </TD>  
  
</TR>


<TR>

  <TD class="" style="width:20%; height:auto;" align="center"> <b>Estudiante:</b>         
           </TD>


  <TD style="width:28%; height:12px; font-size: 10px;" align="center" > </TD>
  <TD style="width:30%; height:12px; font-size: 10px;" align="center" > </TD>

    <TD class="" style="width:20%; height:auto;" align="center"  > <b>Representante:</b>     
            </TD>  
  
</TR>



<TR>

  <TD class="" style="width:20%; height:auto;" align="center"  ROWSPAN=6>           
            <img style="width:100px; max-height: 120px;" src='../<?php echo $_POST["foto_estuxxx"]; ?>'/></TD>


  <TD style="width:28%; height:auto; font-size: 12px;" class="miniborder_A " align="left">&nbsp;&nbsp;<b>Inscrito(a) el:</b> <?php

$fecha_insc_c = date('d-m-Y', strtotime($row_datos_mod9['fecha_pago_ins']));

   echo $fecha_insc_c; ?> </TD>

  <TD style="width:30%; height:auto; font-size: 10px;" align="center" ></TD>

    <TD class="" style="width:20%; height:auto;" align="center"  ROWSPAN=6>           
            <img style="width:100px; max-height: 120px;" src='../<?php echo $_POST["foto_reprexxx"]; ?>'/></TD>  
  
</TR>




<TR>


<?php 

if ($row_datos_mod9['Inscripcion'] <= 1) {
  $inshidd = '';
}

else { $inshidd = number_format($row_datos_mod9['Inscripcion'],1,",",".");}

 ?>


  <TD style="width:28%; height:auto; font-size: 12px;" class="miniborder_centro " align="left">&nbsp;&nbsp;<b>Monto:</b> <?php echo $inshidd; ?></TD>
  <TD style="width:30%; height:auto; font-size: 10px;" align="center" ></TD>
</TR>




<TR> 
    <TD style="width:28%; height:auto; font-size: 12px;" class="miniborder_centro " align="left">&nbsp;&nbsp;<b>Recibo:</b> <?php echo $row_datos_mod9['recibo_pago_insc']; ?>.</TD>
  <TD style="width:30%; height:auto; font-size: 10px;" align="center" ></TD>
</TR>




<TR>

  <TD style="width:28%; height:auto; font-size: 10px;" class="miniborder_centro " align="center"></TD>    
  <TD style="width:30%; height:auto; font-size: 10px;" align="center" ></TD>

</TR>


<TR> 
    <TD style="width:28%; height:auto; font-size: 12px;" class="miniborder_centro " align="left">&nbsp;&nbsp;<b>Cursa:</b>&nbsp; <?php echo $_POST["grados_estuxxx"]; ?>.</TD>
  <TD style="width:30%; height:auto; font-size: 10px;" align="center" ></TD>
</TR>




<TR>
  <TD style="width:28%; height:auto; font-size: 12px;" class="miniborder_centro " align="left">&nbsp;&nbsp;<b>Sección:</b>&nbsp; "<?php echo $_POST["seccion_estuxxx"]; ?>"</TD>    
  <TD style="width:30%; height:auto; font-size: 10px;" align="center" ></TD>

</TR>



<TR>

  <TD class="" style="width:20%; height:auto;" align="center"> <?php echo $_POST["apellidos_estuxxx"]; ?>          
           </TD>

  <TD style="width:28%; height:auto; font-size: 10px;" class="miniborder_centro " align="center"></TD>
  <TD style="width:30%; height:auto; font-size: 10px;" align="center" ></TD>

    <TD class="" style="width:20%; height:auto;" align="center"  > <?php echo $_POST["apellidos_reprexxx"]; ?>          
            </TD>  
  
</TR>


<TR>

  <TD class="" style="width:20%; height:auto;" align="center"> <?php echo $_POST["nombres_estuxxx"]; ?>          
           </TD>

<TD style="width:28%; height:auto; font-size: 10px;" class="miniborder_centro " align="center"></TD>
  <TD style="width:30%; height:auto; font-size: 10px;" align="center" ></TD>

    <TD class="" style="width:20%; height:auto;" align="center"  >  <?php echo $_POST["nombres_reprexxx"]; ?>         
            </TD>  
  
</TR>



<TR>

  <TD class="" style="width:20%; height:auto; font-size: 14px;" align="center"> <b>Doc:</b>   <?php echo $_POST["ci_estuxxx"]; ?>        
           </TD>

<TD style="width:28%; height:auto; font-size: 10px;" class="miniborder_abajo " align="center"></TD>
  <TD style="width:30%; height:auto; font-size: 10px;" align="center" ></TD>

    <TD class="" style="width:20%; height:auto; font-size: 14px;" align="center"  > <b>Doc:</b>  <?php echo $_POST["ci_reprexxx"]; ?>         
            </TD>  
  
</TR>



<TR>

  <TD class="" style="width:20%; height:12px;" align="center">     </TD>



  <TD style="width:28%; height:12px; font-size: 10px;" align="center" > </TD>
  <TD style="width:30%; height:12px; font-size: 10px;" align="center" > </TD>

    <TD class="" style="width:20%; height:12px;" align="center"  >        </TD>  
  
</TR>



</TABLE>






<TABLE class="basetabla bordecompleto" style="margin-top: 4px;" cellspacing="-1"> 

<tr>
   <td class="" style="width:16%; height:16px; font-size: 14px;" align="center"><b><?php echo $primer_pago; ?> (1)</b></td>
   <td class="" style="width:16%; height:16px; font-size: 14px;" align="center" ><b><?php echo $segundo_pago; ?> (2)</b></td>
   <td class=""  style="width:16%; height:16px; font-size: 14px;" align="center" ><b><?php echo $tercero_pago; ?> (3)</b></td>
   <td style="width:3.5%; font-size: 10px; height:auto;" align="center" ></td>
   <td class="" style="width:16%; height:16px; font-size: 14px;" align="center" ><b><?php echo $septimo_pago; ?> (7)</b></td>
   <td class="" style="width:16%; height:16px; font-size: 14px;" align="center" ><b><?php echo $octavo_pago; ?> (8)</b></td>
   <td class="" style="width:16%; height:16px; font-size: 14px;" align="center" ><b><?php echo $noveno_pago; ?> (9)</b></td>
</tr>



</TABLE>


<TABLE class="basetabla" style="margin-top: 2px;" cellspacing="-1"  >



<?php

if ($row_datos_mod9['1er_pago'] <= 1) {
  $unohidd = '';
}
else { $unohidd = number_format($row_datos_mod9['1er_pago'],1,",",".");}


if ($row_datos_mod9['2do_pago'] <= 1) {
  $doshidd = '';
}
else { $doshidd = number_format($row_datos_mod9['2do_pago'],1,",",".");}


if ($row_datos_mod9['3er_pago'] <= 1) {
  $treshidd = '';
}
else { $treshidd = number_format($row_datos_mod9['3er_pago'],1,",",".");}


if ($row_datos_mod9['7mo_pago'] <= 1) {
  $sephidd = '';
}
else { $sephidd = number_format($row_datos_mod9['7mo_pago'],1,",",".");}


if ($row_datos_mod9['8vo_pago'] <= 1) {
  $octahidd = '';
}
else { $octahidd = number_format($row_datos_mod9['8vo_pago'],1,",",".");}


if ($row_datos_mod9['9no_pago'] <= 1) {
  $novhidd = '';
}
else { $novhidd = number_format($row_datos_mod9['9no_pago'],1,",",".");}

 ?>



<tr>

   <td class="miniborder_topC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Monto:</b> <?php echo $unohidd; ?></td>
   <td class="miniborder_topC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Monto:</b> <?php echo $doshidd; ?></td>
   <td class="miniborder_topC"  style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Monto:</b> <?php echo $treshidd; ?></td>
   <td class="miniborder_topC" style="width:3.5%; font-size: 10px; height:auto;" align="center" ></td>
   <td class="miniborder_topC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Monto:</b> <?php echo $sephidd; ?></td>
   <td class="miniborder_topC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Monto:</b> <?php echo $octahidd; ?></td>
   <td class="miniborder_topC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Monto:</b> <?php echo $novhidd; ?></td>


</tr>


<tr>

   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Fecha:</b>  

    <?php 

if ($row_datos_mod9['fecha_1er_pago'] !="" && $row_datos_mod9['fecha_1er_pago'] !="0000-00-00") {

  $fecha_1er_corre = date('d-m-Y', strtotime($row_datos_mod9['fecha_1er_pago']));
}

else {$fecha_1er_corre="";}

     echo $fecha_1er_corre;       ?>  </td>

   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Fecha:</b>

    <?php 

if ($row_datos_mod9['fecha_2do_pago'] !="" && $row_datos_mod9['fecha_2do_pago'] !="0000-00-00") {

  $fecha_2do_corre = date('d-m-Y', strtotime($row_datos_mod9['fecha_2do_pago']));
}

else {$fecha_2do_corre="";}

     echo $fecha_2do_corre;       ?>  </td>


   <td class="miniborder_medC"  style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Fecha:</b>

    <?php 

if ($row_datos_mod9['fecha_3er_pago'] !="" && $row_datos_mod9['fecha_3er_pago'] !="0000-00-00") {

  $fecha_3er_corre = date('d-m-Y', strtotime($row_datos_mod9['fecha_3er_pago']));
}

else {$fecha_3er_corre="";}

     echo $fecha_3er_corre;       ?>  </td>

   <td class="miniborder_medC" style="width:3.5%; font-size: 10px; height:auto;" align="center" ></td>

   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Fecha:</b>

    <?php 


if ($row_datos_mod9['fecha_7mo_pago'] !="" && $row_datos_mod9['fecha_7mo_pago'] !="0000-00-00") {

  $fecha_7mo_corre = date('d-m-Y', strtotime($row_datos_mod9['fecha_7mo_pago']));
}

else {$fecha_7mo_corre="";}

     echo $fecha_7mo_corre;      ?>  </td>



   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Fecha:</b>

    <?php 

if ($row_datos_mod9['fecha_8vo_pago'] !="" && $row_datos_mod9['fecha_8vo_pago'] !="0000-00-00") {

  $fecha_8vo_corre = date('d-m-Y', strtotime($row_datos_mod9['fecha_8vo_pago']));
}

else {$fecha_8vo_corre="";}

     echo $fecha_8vo_corre;       ?>  </td>




   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Fecha:</b>

    <?php 

if ($row_datos_mod9['fecha_9no_pago'] !="" && $row_datos_mod9['fecha_9no_pago'] !="0000-00-00") {

  $fecha_9no_corre = date('d-m-Y', strtotime($row_datos_mod9['fecha_9no_pago']));
}

else {$fecha_9no_corre="";}

     echo $fecha_9no_corre;       ?>  </td>


</tr>




<tr>

   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Recibo:</b> <?php echo $row_datos_mod9['recibo_1er_pago']; ?>.    </td>
   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Recibo:</b>  <?php echo $row_datos_mod9['recibo_2do_pago']; ?>.   </td>
   <td class="miniborder_medC"  style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Recibo:</b> <?php echo $row_datos_mod9['recibo_3er_pago']; ?>.    </td>
   <td class="miniborder_medC" style="width:3.5%; font-size: 10px; height:auto;" align="center" ></td>
   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Recibo:</b>  <?php echo $row_datos_mod9['recibo_7mo_pago']; ?>.   </td>
   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Recibo:</b>  <?php echo $row_datos_mod9['recibo_8vo_pago']; ?>.   </td>
   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Recibo:</b>  <?php echo $row_datos_mod9['recibo_9no_pago']; ?>.   </td>


</tr>



<tr>

   <td class="miniborder_dowC" style="width:16%; height:30px; font-size: 12px;" align="left" >   </td>
   <td class="miniborder_dowC" style="width:16%; height:30px; font-size: 12px;" align="left" >   </td>
   <td class="miniborder_dowC"  style="width:16%; height:30px; font-size: 12px;" align="left" >   </td>
   <td class="miniborder_medC" style="width:3.5%; font-size: 10px; height:auto;" align="center" ></td>
   <td class="miniborder_dowC" style="width:16%; height:30px; font-size: 12px;" align="left" >  </td>
   <td class="miniborder_dowC" style="width:16%; height:30px; font-size: 12px;" align="left" >   </td>
   <td class="miniborder_dowC" style="width:16%; height:30px; font-size: 12px;" align="left" >   </td>


</tr>







</TABLE>










<TABLE class="basetabla bordecompleto" style="margin-top: 24px;" cellspacing="-1"> 

<tr>
   <td class="" style="width:16%; height:16px; font-size: 14px;" align="center"><b><?php echo $cuarto_pago; ?> (4)</b></td>
   <td class="" style="width:16%; height:16px; font-size: 14px;" align="center" ><b><?php echo $quinto_pago; ?> (5)</b></td>
   <td class=""  style="width:16%; height:16px; font-size: 14px;" align="center" ><b><?php echo $sexto_pago; ?> (6)</b></td>
   <td style="width:3.5%; font-size: 10px; height:auto;" align="center" ></td>
   <td class="" style="width:16%; height:16px; font-size: 14px;" align="center" ><b><?php echo $decimo_pago; ?> (10)</b></td>
   <td class="" style="width:16%; height:16px; font-size: 14px;" align="center" ><b><?php echo $onceavo_pago; ?> (11)</b></td>
   <td class="" style="width:16%; height:16px; font-size: 14px;" align="center" ><b><?php echo $doceavo_pago; ?> (12)</b></td>
</tr>



</TABLE>


<TABLE class="basetabla" style="margin-top: 2px;" cellspacing="-1"  >



<?php

if ($row_datos_mod9['4to_pago'] <= 1) {
  $cuartohidd = '';
}
else { $cuartohidd = number_format($row_datos_mod9['4to_pago'],1,",",".");}


if ($row_datos_mod9['5to_pago'] <= 1) {
  $quintohidd = '';
}
else { $quintohidd = number_format($row_datos_mod9['5to_pago'],1,",",".");}


if ($row_datos_mod9['6to_pago'] <= 1) {
  $sextohidd = '';
}
else { $sextohidd = number_format($row_datos_mod9['6to_pago'],1,",",".");}


if ($row_datos_mod9['10m_pago'] <= 1) {
  $decimohidd = '';
}
else { $decimohidd = number_format($row_datos_mod9['10m_pago'],1,",",".");}


if ($row_datos_mod9['11o_pago'] <= 1) {
  $onceavohidd = '';
}
else { $onceavohidd = number_format($row_datos_mod9['11o_pago'],1,",",".");}


if ($row_datos_mod9['12o_pago'] <= 1) {
  $doceavohidd = '';
}
else { $doceavohidd = number_format($row_datos_mod9['12o_pago'],1,",",".");}

 ?>



<tr>

   <td class="miniborder_topC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Monto:</b> <?php echo $cuartohidd; ?></td>
   <td class="miniborder_topC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Monto:</b> <?php echo $quintoidd; ?></td>
   <td class="miniborder_topC"  style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Monto:</b> <?php echo $sextohidd; ?></td>
   <td class="miniborder_topC" style="width:3.5%; font-size: 10px; height:auto;" align="center" ></td>
   <td class="miniborder_topC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Monto:</b> <?php echo $decimohidd; ?></td>
   <td class="miniborder_topC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Monto:</b> <?php echo $onceavohidd; ?></td>
   <td class="miniborder_topC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Monto:</b> <?php echo $doceavohidd; ?></td>


</tr>


<tr>

   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Fecha:</b>  

    <?php 

if ($row_datos_mod9['fecha_4to_pago'] !="" && $row_datos_mod9['fecha_4to_pago'] !="0000-00-00") {

  $fecha_4to_corre = date('d-m-Y', strtotime($row_datos_mod9['fecha_4to_pago']));
}

else {$fecha_4to_corre="";}

     echo $fecha_4to_corre;       ?>  </td>

   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Fecha:</b>

    <?php 

if ($row_datos_mod9['fecha_5to_pago'] !="" && $row_datos_mod9['fecha_5to_pago'] !="0000-00-00") {

  $fecha_5to_corre = date('d-m-Y', strtotime($row_datos_mod9['fecha_5to_pago']));
}

else {$fecha_5to_corre="";}

     echo $fecha_5to_corre;       ?>  </td>


   <td class="miniborder_medC"  style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Fecha:</b>

    <?php 

if ($row_datos_mod9['fecha_6to_pago'] !="" && $row_datos_mod9['fecha_6to_pago'] !="0000-00-00") {

  $fecha_6to_corre = date('d-m-Y', strtotime($row_datos_mod9['fecha_6to_pago']));
}

else {$fecha_6to_corre="";}

     echo $fecha_6to_corre;       ?>  </td>

   <td class="miniborder_medC" style="width:3.5%; font-size: 10px; height:auto;" align="center" ></td>

   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Fecha:</b>

    <?php 


if ($row_datos_mod9['fecha_10m_pago'] !="" && $row_datos_mod9['fecha_10m_pago'] !="0000-00-00") {

  $fecha_10m_corre = date('d-m-Y', strtotime($row_datos_mod9['fecha_10m_pago']));
}

else {$fecha_10m_corre="";}

     echo $fecha_10m_corre;      ?>  </td>



   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Fecha:</b>

    <?php 

if ($row_datos_mod9['fecha_11o_pago'] !="" && $row_datos_mod9['fecha_11o_pago'] !="0000-00-00") {

  $fecha_11o_corre = date('d-m-Y', strtotime($row_datos_mod9['fecha_11o_pago']));
}

else {$fecha_11o_corre="";}

     echo $fecha_11o_corre;       ?>  </td>




   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Fecha:</b>

    <?php 

if ($row_datos_mod9['fecha_12o_pago'] !="" && $row_datos_mod9['fecha_12o_pago'] !="0000-00-00") {

  $fecha_12o_corre = date('d-m-Y', strtotime($row_datos_mod9['fecha_12o_pago']));
}

else {$fecha_12o_corre="";}

     echo $fecha_12o_corre;       ?>  </td>


</tr>




<tr>

   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Recibo:</b> <?php echo $row_datos_mod9['recibo_4to_pago']; ?>.    </td>
   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Recibo:</b>  <?php echo $row_datos_mod9['recibo_5to_pago']; ?>.   </td>
   <td class="miniborder_medC"  style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Recibo:</b> <?php echo $row_datos_mod9['recibo_6to_pago']; ?>.    </td>
   <td class="miniborder_medC" style="width:3.5%; font-size: 10px; height:auto;" align="center" ></td>
   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Recibo:</b>  <?php echo $row_datos_mod9['recibo_10m_pago']; ?>.   </td>
   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Recibo:</b>  <?php echo $row_datos_mod9['recibo_11o_pago']; ?>.   </td>
   <td class="miniborder_medC" style="width:16%; height:15px; font-size: 12px;" align="left" >&nbsp;<b>Recibo:</b>  <?php echo $row_datos_mod9['recibo_12o_pago']; ?>.   </td>


</tr>



<tr>

   <td class="miniborder_dowC" style="width:16%; height:30px; font-size: 12px;" align="left" >   </td>
   <td class="miniborder_dowC" style="width:16%; height:30px; font-size: 12px;" align="left" >   </td>
   <td class="miniborder_dowC"  style="width:16%; height:30px; font-size: 12px;" align="left" >   </td>
   <td class="miniborder_medC" style="width:3.5%; font-size: 10px; height:auto;" align="center" ></td>
   <td class="miniborder_dowC" style="width:16%; height:30px; font-size: 12px;" align="left" >  </td>
   <td class="miniborder_dowC" style="width:16%; height:30px; font-size: 12px;" align="left" >   </td>
   <td class="miniborder_dowC" style="width:16%; height:30px; font-size: 12px;" align="left" >   </td>


</tr>







</TABLE>









</page>







<?php

    $contentxx = ob_get_clean(); 

try
    {
         $hixx = $_POST["id_estudxxx"];

        $html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("diptico_pago_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>