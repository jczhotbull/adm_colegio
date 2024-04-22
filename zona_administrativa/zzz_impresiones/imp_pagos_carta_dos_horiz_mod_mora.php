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


$monto2 = $row_datos_queryplantel["moneydos"];
$monto1 = $row_datos_queryplantel["moneyuno"];
$dolor  = $monto2/$monto1;

?>

    <page_footer>
    
    </page_footer>





<TABLE class="basetabla">


<TR>

<TD class="" style="width:40%; height:auto; font-size: 14px; font-style: italic;" align="center">
<b style="color:black; ">Control de Mora </b>
<b style="color:#3333ff; "><?php echo $row_datos_queryplantel['nombre_plantel']; ?></b>
           

</TD>


<TD class="" style="width:15%; height:auto; font-size: 12px;" align="center">

    <b><?php echo $_POST["id_tituloxxx"]; ?></b>



</TD>


<TD class="" style="width:24%; height:auto; font-size: 12px; color:grey;" align="left">

    Actualizada el:


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





<TD class="" style="width:18%; height:auto; font-size: 10px;" align="center">

Año Escolar:  <b><?php echo $row_datos_periodo_act1['periodo_escolar']; ?></b>
           

</TD>

</TR>






</TABLE>












<TABLE class="basetabla" style="margin-top: 12px;" cellspacing="-1">

<TR >

<TD class="miniborder" style="width:1%; height:13px; font-size: 9px; color:#404347; background-color: #ecf2f4;" align="center"><b>N°</b>
</TD>



<TD class="miniborder" style="width:8.5%; height:13px; font-size: 9px; color:#404347;" align="center">Estudiantes
</TD>
                                                                                                    
<TD class="miniborder" style="width:6%; height:13px; font-size: 9px; color:grey;" align="center">Representantes
</TD>

<TD class="miniborder" style="width:5%; height:13px; font-size: 9px; color:grey;" align="center">Teléfono
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

$el_mes_actual_es = $row_datos_mod2['mes_pagado'];




?>




  



<TD class="miniborder" style="width:5%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center"><b>Inscripción</b>
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



<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center"><b>Tot. Personal</b> 
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

<TD class="miniborder" style="width:1%; height:12.5px; font-size: 9px; color:#404347; background-color: #ecf2f4;" align="center">


<b><?php
    echo $i;
    $i++; 

?></b>



</TD>

<TD class="miniborder" style="width:8.5%; height:12.5px; font-size: 9px; color:black; padding-left: 4px;" align="left">
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


<TD class="miniborder" style="width:6%; height:12.5px; font-size: 9px; color:black; padding-left: 4px;" align="left">
                                    

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





<TD class="miniborder" style="width:5%; height:12.5px; font-size: 9px; color:black;" align="center"> 

<?php echo $row_datos_controlP['celular_repre']; ?> <br><?php echo $row_datos_controlP['telefono_repre']; ?>


</TD>




<?php 
$cero_cero = '';
?>

<TD class="miniborder" style="width:5%; height:12.5px; font-size: 9px; color:black; background-color: #ecf2f4;" align="center">

<?php

$total_de_uno_good = '';
$total_de_uno = '';

if ($row_datos_controlP['Inscripcion'] < 1) {
	$total_de_uno = 'X';
}

if ($row_datos_controlP['Inscripcion'] >= 1) {
    $total_de_uno_good = '*';
}


$total_ins = '';  // $total_ins = $total_ins + $row_datos_controlP['Inscripcion'];



 ?><b><span style="font-size: 14px; color:red;"><?php echo $total_de_uno; ?> </span></b>
 <b><span style="font-size: 26px; color:LimeGreen;"><?php echo $total_de_uno_good; ?> </span></b>


  
</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">


<?php

 $total_de_aula_aaa = '';

 $total_personal = '';

 $total_de_aaa_good = '';

 
if ($el_mes_actual_es >=1) {



$total_de_aaa = '';
$cuenta_de_aaa = '';

if ($row_datos_controlP['1er_pago'] < 1 OR $row_datos_controlP['1er_pago'] == '' ) {
	$total_de_aaa = 'X';
	$cuenta_de_aaa = '1';
}

else { $total_de_aula_aaa = '1'; $total_de_aaa_good = '*'; }  // pago

$total_1 = $total_1 + $cuenta_de_aaa;
$total_aula_aaa_global = $total_aula_aaa_global +  $total_de_aula_aaa;

}

 ?>    <b><span style="font-size: 14px; color:red;"><?php echo $total_de_aaa; ?> </span></b>

 <b><span style="font-size: 26px; color:LimeGreen;"><?php echo $total_de_aaa_good; ?> </span></b>


   

</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">



<?php

 $total_de_aula_bbb = '';
 $total_de_bbb_good = '';

if ($el_mes_actual_es >=2) {

$total_de_bbb = '';
$cuenta_de_bbb = '';

if ($row_datos_controlP['2do_pago'] < 1 OR $row_datos_controlP['2do_pago'] == '' ) {
	$total_de_bbb = 'X';
	$cuenta_de_bbb = '1';
}

else { $total_de_aula_bbb = '1'; $total_de_bbb_good = '*'; }  // pago

$total_2 = $total_2 + $cuenta_de_bbb;
$total_aula_bbb_global = $total_aula_bbb_global +  $total_de_aula_bbb;

}

 ?>    <b><span style="font-size: 14px; color:red;"><?php echo $total_de_bbb; ?> </span></b>
<b><span style="font-size: 26px; color:LimeGreen;"><?php echo $total_de_bbb_good; ?> </span></b>





</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">



<?php

 $total_de_aula_ccc = '';
 $total_de_ccc_good = '';

if ($el_mes_actual_es >=3) {

$cuenta_de_ccc = '';
$total_de_ccc = '';

if ($row_datos_controlP['3er_pago'] < 1 OR $row_datos_controlP['3er_pago'] == '' ) {
	$total_de_ccc = 'X';
	$cuenta_de_ccc = '1';
}

else { $total_de_aula_ccc = '1'; $total_de_ccc_good = '*'; }  // pago

$total_3 = $total_3 + $cuenta_de_ccc;
$total_aula_ccc_global = $total_aula_ccc_global +  $total_de_aula_ccc;

}

 ?>    <b><span style="font-size: 14px; color:red;"><?php echo $total_de_ccc; ?> </span></b>
<b><span style="font-size: 26px; color:LimeGreen;"><?php echo $total_de_ccc_good; ?> </span></b>








</TD>







<TD class="miniborder" style="width:5.9%; height:12.5px; font-size: 9px; color:black; background-color: #ecf2f4;" align="center">



<?php

 $total_de_aula_ddd = '';
 $total_de_ddd_good = '';

if ($el_mes_actual_es >=4) {

$cuenta_de_ddd = '';
$total_de_ddd = '';

if ($row_datos_controlP['4to_pago'] < 1 OR $row_datos_controlP['4to_pago'] == '' ) {
	$total_de_ddd = 'X';
	$cuenta_de_ddd = '1';
}

else { $total_de_aula_ddd = '1';  $total_de_ddd_good = '*';  }  // pago

$total_4 = $total_4 + $cuenta_de_ddd;
$total_aula_ddd_global = $total_aula_ddd_global +  $total_de_aula_ddd;


}

 ?>    <b><span style="font-size: 14px; color:red;"><?php echo $total_de_ddd; ?> </span></b>
<b><span style="font-size: 26px; color:LimeGreen;"><?php echo $total_de_ddd_good; ?> </span></b>





</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">



<?php

 $total_de_aula_eee = '';
 $total_de_eee_good = '';

if ($el_mes_actual_es >=5) {

$cuenta_de_eee = '';
$total_de_eee = '';

if ($row_datos_controlP['5to_pago'] < 1 OR $row_datos_controlP['5to_pago'] == '' ) {
	$total_de_eee = 'X';
	$cuenta_de_eee = '1';
}

else { $total_de_aula_eee = '1'; $total_de_eee_good = '*'; }  // pago

$total_5 = $total_5 + $cuenta_de_eee;
$total_aula_eee_global = $total_aula_eee_global +  $total_de_aula_eee;


}

 ?>    <b><span style="font-size: 14px; color:red;"><?php echo $total_de_eee; ?> </span></b>

<b><span style="font-size: 26px; color:LimeGreen;"><?php echo $total_de_eee_good; ?> </span></b>





</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">

<?php

 $total_de_aula_fff = '';
 $total_de_fff_good = '';

if ($el_mes_actual_es >=6) {

$cuenta_de_fff = '';
$total_de_fff = '';

if ($row_datos_controlP['6to_pago'] < 1 OR $row_datos_controlP['6to_pago'] == '' ) {
	$total_de_fff = 'X';
	$cuenta_de_fff = '1';
}


else { $total_de_aula_fff = '1'; $total_de_fff_good = '*'; }  // pago

$total_6 = $total_6 + $cuenta_de_fff;
$total_aula_fff_global = $total_aula_fff_global +  $total_de_aula_fff;

}

 ?>    <b><span style="font-size: 14px; color:red;"><?php echo $total_de_fff; ?> </span></b>
<b><span style="font-size: 26px; color:LimeGreen;"><?php echo $total_de_fff_good; ?> </span></b>





</TD>





<TD class="miniborder" style="width:5.9%; height:12.5px; font-size: 9px; color:black; background-color: #ecf2f4;" align="center">


<?php

 $total_de_aula_ggg = '';
  $total_de_ggg_good = '';

if ($el_mes_actual_es >=7) {

$cuenta_de_ggg = '';
$total_de_ggg = '';

if ($row_datos_controlP['7mo_pago'] < 1 OR $row_datos_controlP['7mo_pago'] == '' ) {
	$total_de_ggg = 'X';
	$cuenta_de_ggg = '1';
}

else { $total_de_aula_ggg = '1'; $total_de_ggg_good = '*'; }  // pago

$total_7 = $total_7 + $cuenta_de_ggg;
$total_aula_ggg_global = $total_aula_ggg_global +  $total_de_aula_ggg;

}

 ?>    <b><span style="font-size: 14px; color:red;"><?php echo $total_de_ggg; ?> </span></b>
 <b><span style="font-size: 26px; color:LimeGreen;"><?php echo $total_de_ggg_good; ?> </span></b>







</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">

<?php

 $total_de_aula_hhh = '';
  $total_de_hhh_good = '';

if ($el_mes_actual_es >=8) {

$cuenta_de_hhh = '';
$total_de_hhh = '';

if ($row_datos_controlP['8vo_pago'] < 1 OR $row_datos_controlP['8vo_pago'] == '' ) {
	$total_de_hhh = 'X';
	$cuenta_de_hhh = '1';
}

else { $total_de_aula_hhh = '1';  $total_de_hhh_good = '*'; }  // pago

$total_8 = $total_8 + $cuenta_de_hhh;
$total_aula_hhh_global = $total_aula_hhh_global +  $total_de_aula_hhh;


}

 ?>    <b><span style="font-size: 14px; color:red;"><?php echo $total_de_hhh; ?> </span></b>

<b><span style="font-size: 26px; color:LimeGreen;"><?php echo $total_de_hhh_good; ?> </span></b>





</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">

<?php

 $total_de_aula_iii = '';
  $total_de_iii_good = '';

if ($el_mes_actual_es >=9) {

$cuenta_de_iii = '';
$total_de_iii = '';

if ($row_datos_controlP['9no_pago'] < 1 OR $row_datos_controlP['9no_pago'] == '' ) {
	$total_de_iii = 'X';
	$cuenta_de_iii = '1';
}

else { $total_de_aula_iii = '1'; $total_de_iii_good = '*'; }  // pago

$total_9 = $total_9 + $cuenta_de_iii;
$total_aula_iii_global = $total_aula_iii_global +  $total_de_aula_iii;


}

 ?>    <b><span style="font-size: 14px; color:red;"><?php echo $total_de_iii; ?> </span></b>
 <b><span style="font-size: 26px; color:LimeGreen;"><?php echo $total_de_iii_good; ?> </span></b>






</TD>


<TD class="miniborder" style="width:5.9%; height:12.5px; font-size: 9px; color:black; background-color: #ecf2f4;" align="center">


<?php

 $total_de_aula_jjj = '';
  $total_de_jjj_good = '';

if ($el_mes_actual_es >=10) {

$cuenta_de_jjj = '';
$total_de_jjj = '';

if ($row_datos_controlP['10m_pago'] < 1 OR $row_datos_controlP['10m_pago'] == '' ) {
	$total_de_jjj = 'X';
	$cuenta_de_jjj = '1';
}

else { $total_de_aula_jjj = '1';  $total_de_jjj_good = '*'; }  // pago

$total_10 = $total_10 + $cuenta_de_jjj;
$total_aula_jjj_global = $total_aula_jjj_global +  $total_de_aula_jjj;


}

 ?>    <b><span style="font-size: 14px; color:red;"><?php echo $total_de_jjj; ?> </span></b>
 <b><span style="font-size: 26px; color:LimeGreen;"><?php echo $total_de_jjj_good; ?> </span></b>







</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">

<?php

 $total_de_aula_kkk = '';
  $total_de_kkk_good = '';

if ($el_mes_actual_es >=11) {

$cuenta_de_kkk = '';
$total_de_kkk = '';

if ($row_datos_controlP['11o_pago'] < 1 OR $row_datos_controlP['11o_pago'] == '' ) {
	$total_de_kkk = 'X';
	$cuenta_de_kkk = '1';
}

else { $total_de_aula_kkk = '1'; $total_de_kkk_good = '*'; }  // pago

$total_11 = $total_11 + $cuenta_de_kkk;
$total_aula_kkk_global = $total_aula_kkk_global +  $total_de_aula_kkk;


}

 ?>    <b><span style="font-size: 14px; color:red;"><?php echo $total_de_kkk; ?> </span></b>
 <b><span style="font-size: 26px; color:LimeGreen;"><?php echo $total_de_kkk_good; ?> </span></b>





</TD>

<TD class="miniborder" style="width:5.7%; height:12.5px; font-size: 9px; color:black;" align="center">

<?php

 $total_de_aula_lll = '';
 $total_de_lll_good = '';


if ($el_mes_actual_es >=12) {

$cuenta_de_lll = '';
$total_de_lll = '';

if ($row_datos_controlP['12o_pago'] < 1 OR $row_datos_controlP['12o_pago'] == '' ) {
	$total_de_lll = 'X';
	$cuenta_de_lll = '1';
}

else { $total_de_aula_lll = '1'; $total_de_lll_good = '*'; }  // pago

$total_12 = $total_12 + $cuenta_de_lll;
$total_aula_lll_global = $total_aula_lll_global +  $total_de_aula_lll;

}


$total_meses =  $total_1 + $total_2 + $total_3 + $total_4 + $total_5 + $total_6 + $total_7 + $total_8 + $total_9 + $total_10 + $total_11 + $total_12;


 $total_personal = $cuenta_de_aaa + $cuenta_de_bbb + $cuenta_de_ccc + $cuenta_de_ddd + $cuenta_de_eee + $cuenta_de_fff
                 + $cuenta_de_ggg + $cuenta_de_hhh + $cuenta_de_iii + $cuenta_de_jjj + $cuenta_de_kkk + $cuenta_de_lll;


 ?>    <b><span style="font-size: 14px; color:red;"><?php echo $total_de_lll; ?> </span></b>
 <b><span style="font-size: 26px; color:LimeGreen;"><?php echo $total_de_lll_good; ?> </span></b>








</TD>





<TD class="miniborder" style="width:5.7%; height:13px; font-size: 11px; color:black; background-color: #ecf2f4;" align="right">

<?php



$totalito_personal = $total_personal*$dolor;


 echo $totalito_personal; ?>&nbsp;&nbsp; <br> <span></span> <br> <span></span><br> <span></span>

</TD>




</TR>










<?php
                }
                ?>


</TABLE>







<TABLE class="basetabla" style="margin-top: 2px;" cellspacing="-1">

<TR >


<TD  style="width:1%; height:13px; font-size: 9px;" align="center">
</TD>



<TD  style="width:8.5%; height:13px; font-size: 9px; color:#404347;" align="center">
</TD>
                                                                                                    
<TD  style="width:6%; height:13px; font-size: 9px; color:grey;" align="center">
</TD>

<TD class="miniborder" style="width:5%; height:13px; font-size: 9px; color:black;" align="center"><b>Mora x Mes:</b>
</TD>



  



<TD class="miniborder" style="width:5%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
<span style="font-size: 11px;"> <?php echo $total_ins; ?> </span>
</TD>
<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
 <span style="font-size: 11px;">    <?php echo $total_1; ?> / <?php $ttt = $i-1; echo $ttt; ?>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
 <span style="font-size: 11px;">    <?php echo $total_2; ?> / <?php $ttt = $i-1; echo $ttt; ?> </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
<span style="font-size: 11px;">     <?php echo $total_3; ?> / <?php $ttt = $i-1; echo $ttt; ?> </span>
</TD>





<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 11px;">     <?php echo $total_4; ?> / <?php $ttt = $i-1; echo $ttt; ?>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">     <?php echo $total_5; ?> / <?php $ttt = $i-1; echo $ttt; ?>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">     <?php echo $total_6; ?> / <?php $ttt = $i-1; echo $ttt; ?>  </span>
</TD>





<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 11px;">     <?php echo $total_7; ?> / <?php $ttt = $i-1; echo $ttt; ?>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">     <?php echo $total_8; ?> / <?php $ttt = $i-1; echo $ttt; ?>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">     <?php echo $total_9; ?> / <?php $ttt = $i-1; echo $ttt; ?>  </span>
</TD>



<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 11px;">     <?php echo $total_10; ?> / <?php $ttt = $i-1; echo $ttt; ?>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">     <?php echo $total_11; ?> / <?php $ttt = $i-1; echo $ttt; ?>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">     <?php echo $total_12; ?> / <?php $ttt = $i-1; echo $ttt; ?> </span>   <?php // echo $total_aula_lll_global;  ?>
</TD>



 <?php 

$total_meses_pagados =  $total_aula_aaa_global + $total_aula_bbb_global + $total_aula_ccc_global + $total_aula_ddd_global + $total_aula_eee_global + $total_aula_fff_global +
                        $total_aula_ggg_global + $total_aula_hhh_global + $total_aula_iii_global + $total_aula_jjj_global + $total_aula_kkk_global + $total_aula_lll_global; 



$total_de_todos_los_meses =  $total_meses_pagados + $total_meses;


$porc_mora_aux = ( $total_meses * 100 ) /   $total_de_todos_los_meses;


$porc_mora = number_format($porc_mora_aux,1,",",".");

 ?>



<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">



</TD>





</TR>



</TABLE>




<TABLE class="basetabla" style="margin-top: 2px;" cellspacing="-1">

<TR >


<TD  style="width:1%; height:13px; font-size: 9px;" align="center">
</TD>



<TD  style="width:8.5%; height:13px; font-size: 9px; color:#404347;" align="center">
</TD>
                                                                                                    
<TD  style="width:6%; height:13px; font-size: 9px; color:grey;" align="center">
</TD>

<TD class="miniborder" style="width:5%; height:13px; font-size: 9px; color:black;" align="center"><b>% x Mes:</b>
</TD>



  



<TD class="miniborder" style="width:5%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
<span style="font-size: 11px;"> <?php echo $total_ins; ?> </span>
</TD>
<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
 <span style="font-size: 11px;">    <?php $cal_per = $i-1;  $total_1_porcentaje = ($total_1*100)/$cal_per; echo number_format($total_1_porcentaje,1,",","."); ?>&nbsp;<b>%</b>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
 <span style="font-size: 11px;">    <?php $total_2_porcentaje = ($total_2*100)/$cal_per; echo number_format($total_2_porcentaje,1,",","."); ?>&nbsp;<b>%</b> </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
<span style="font-size: 11px;">     <?php $total_3_porcentaje = ($total_3*100)/$cal_per; echo number_format($total_3_porcentaje,1,",","."); ?>&nbsp;<b>%</b> </span>
</TD>




<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 11px;">     <?php $total_4_porcentaje = ($total_4*100)/$cal_per; echo number_format($total_4_porcentaje,1,",","."); ?>&nbsp;<b>%</b>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">     <?php $total_5_porcentaje = ($total_5*100)/$cal_per; echo number_format($total_5_porcentaje,1,",","."); ?>&nbsp;<b>%</b>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">     <?php $total_6_porcentaje = ($total_6*100)/$cal_per; echo number_format($total_6_porcentaje,1,",","."); ?>&nbsp;<b>%</b>  </span>
</TD>





<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 11px;">     <?php $total_7_porcentaje = ($total_7*100)/$cal_per; echo number_format($total_7_porcentaje,1,",","."); ?>&nbsp;<b>%</b>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">     <?php $total_8_porcentaje = ($total_8*100)/$cal_per; echo number_format($total_8_porcentaje,1,",","."); ?>&nbsp;<b>%</b>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">     <?php $total_9_porcentaje = ($total_9*100)/$cal_per; echo number_format($total_9_porcentaje,1,",","."); ?>&nbsp;<b>%</b>  </span>
</TD>



<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 11px;">     <?php $total_10_porcentaje = ($total_10*100)/$cal_per; echo number_format($total_10_porcentaje,1,",","."); ?>&nbsp;<b>%</b>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">     <?php $total_11_porcentaje = ($total_11*100)/$cal_per; echo number_format($total_11_porcentaje,1,",","."); ?>&nbsp;<b>%</b>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">     <?php $total_12_porcentaje = ($total_12*100)/$cal_per; echo number_format($total_12_porcentaje,1,",","."); ?>&nbsp;<b>%</b> </span>   <?php // echo $total_aula_lll_global;  ?>
</TD>



 <?php 

$total_meses_pagados =  $total_aula_aaa_global + $total_aula_bbb_global + $total_aula_ccc_global + $total_aula_ddd_global + $total_aula_eee_global + $total_aula_fff_global +
                        $total_aula_ggg_global + $total_aula_hhh_global + $total_aula_iii_global + $total_aula_jjj_global + $total_aula_kkk_global + $total_aula_lll_global; 



$total_de_todos_los_meses =  $total_meses_pagados + $total_meses;


$porc_mora_aux = ( $total_meses * 100 ) /   $total_de_todos_los_meses;


$porc_mora = number_format($porc_mora_aux,1,",",".");

 ?>



<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">



</TD>





</TR>



</TABLE>






<TABLE class="basetabla" style="margin-top: 2px;" cellspacing="-1">

<TR >


<TD  style="width:1%; height:13px; font-size: 9px;" align="center">
</TD>



<TD  style="width:8.5%; height:13px; font-size: 9px; color:#404347;" align="center">
</TD>
                                                                                                    
<TD  style="width:6%; height:13px; font-size: 9px; color:grey;" align="center">
</TD>

<TD class="miniborder" style="width:5%; height:13px; font-size: 9px; color:black;" align="center"><b>Monto x Mes:</b>
</TD>



  



<TD class="miniborder" style="width:5%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
<span style="font-size: 11px;"> <?php echo $total_ins; ?> </span>
</TD>
<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
 <span style="font-size: 11px;">    <?php 

$total_mes_1 = $dolor * $total_1;   echo number_format($total_mes_1,1,",",".");

 ?>  </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
 <span style="font-size: 11px;"> <?php 

$total_mes_2 = $dolor * $total_2;   echo number_format($total_mes_2,1,",",".");

 ?>    </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
<span style="font-size: 11px;">   <?php 

$total_mes_3 = $dolor * $total_3;   echo number_format($total_mes_3,1,",",".");

 ?>    </span>
</TD>




<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 11px;">  <?php 

$total_mes_4 = $dolor * $total_4;   echo number_format($total_mes_4,1,",",".");

 ?>     </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;"> <?php 

$total_mes_5 = $dolor * $total_5;   echo number_format($total_mes_5,1,",",".");

 ?>      </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">  <?php 

$total_mes_6 = $dolor * $total_6;   echo number_format($total_mes_6,1,",",".");

 ?>     </span>
</TD>





<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 11px;"> <?php 

$total_mes_7 = $dolor * $total_7;   echo number_format($total_mes_7,1,",",".");

 ?>    </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">   <?php 

$total_mes_8 = $dolor * $total_8;   echo number_format($total_mes_8,1,",",".");

 ?>    </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">  <?php 

$total_mes_9 = $dolor * $total_9;   echo number_format($total_mes_9,1,",",".");

 ?>      </span>
</TD>



<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 11px;"> <?php 

$total_mes_10 = $dolor * $total_10;   echo number_format($total_mes_10,1,",",".");

 ?>    </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">  <?php 

$total_mes_11 = $dolor * $total_11;   echo number_format($total_mes_11,1,",",".");

 ?>    </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">  <?php 

$total_mes_12 = $dolor * $total_12;   echo number_format($total_mes_12,1,",",".");

 ?>   </span>   <?php // echo $total_aula_lll_global;  ?>
</TD>



 <?php 

$total_meses_pagados =  $total_aula_aaa_global + $total_aula_bbb_global + $total_aula_ccc_global + $total_aula_ddd_global + $total_aula_eee_global + $total_aula_fff_global +
                        $total_aula_ggg_global + $total_aula_hhh_global + $total_aula_iii_global + $total_aula_jjj_global + $total_aula_kkk_global + $total_aula_lll_global; 



$total_de_todos_los_meses =  $total_meses_pagados + $total_meses;


$porc_mora_aux = ( $total_meses * 100 ) /   $total_de_todos_los_meses;


$porc_mora = number_format($porc_mora_aux,1,",",".");

 ?>



<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">



</TD>





</TR>



</TABLE>





<TABLE class="basetabla" style="margin-top: 2px;" cellspacing="-1">

<TR >


<TD  style="width:1%; height:13px; font-size: 9px;" align="center">
</TD>



<TD  style="width:8.5%; height:13px; font-size: 9px; color:#404347;" align="center">
</TD>
                                                                                                    
<TD  style="width:6%; height:13px; font-size: 9px; color:grey;" align="center">
</TD>

<TD class="miniborder" style="width:5%; height:13px; font-size: 9px; color:black;" align="center"><b>Monto - %</b> <br> <b>Rango:</b>
</TD>







<TD class="miniborder" style="width:5%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
<span style="font-size: 11px;"> <?php echo $total_ins; ?> </span>
</TD>
<TD class="miniborder" style="width:11.4%; height:13px; font-size: 10px; color:grey;" align="center">
 <span style="font-size: 11px;">  <?php $total_1y2 = $total_1+$total_2; echo $total_1y2; ?> / <?php $i_2 = $ttt * 2; echo $i_2;  ?> Meses = 
    <?php $total_1y2_porcentaje = ($total_1_porcentaje+$total_2_porcentaje)/2; echo number_format($total_1y2_porcentaje,1,",","."); ?>  % <br>   <?php 

$total_mes_1y2 = ($dolor * $total_1)+($dolor * $total_2);   echo number_format($total_mes_1y2,1,",",".");

 ?>  </span>
</TD>



<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
<span style="font-size: 11px;">   <?php $total_1y2y3 = $total_1+$total_2+$total_3; echo $total_1y2y3; ?> / <?php $i_3 = $ttt * 3; echo $i_3;  ?> M. <br> 
    <?php $total_1y2y3_porcentaje = ($total_1_porcentaje+$total_2_porcentaje+$total_3_porcentaje)/3; echo number_format($total_1y2y3_porcentaje,1,",","."); ?>  % <br>   <?php 

$total_mes_1y2y3 = ($dolor * $total_1)+($dolor * $total_2)+($dolor * $total_3);   echo number_format($total_mes_1y2y3,1,",",".");

 ?>    </span>
</TD>




<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 11px;">  <?php $total_1y2y3y4 = $total_1+$total_2+$total_3+$total_4; echo $total_1y2y3y4; ?> / <?php $i_4 = $ttt * 4; echo $i_4;  ?> M. <br> 
    <?php $total_1y2y3y4_porcentaje = ($total_1_porcentaje+$total_2_porcentaje+$total_3_porcentaje+$total_4_porcentaje)/4; echo number_format($total_1y2y3y4_porcentaje,1,",","."); ?>  % <br>   <?php 

$total_mes_1y2y3y4 = ($dolor * $total_1)+($dolor * $total_2)+($dolor * $total_3)+($dolor * $total_4);   echo number_format($total_mes_1y2y3y4,1,",",".");

 ?>    </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;"> <?php $total_1y2y3y4y5 = $total_1+$total_2+$total_3+$total_4+$total_5; echo $total_1y2y3y4y5; ?> / <?php $i_5 = $ttt * 5; echo $i_5;  ?> M. <br> 
    <?php $total_1y2y3y4y5_porcentaje = ($total_1_porcentaje+$total_2_porcentaje+$total_3_porcentaje+$total_4_porcentaje+$total_5_porcentaje)/5; echo number_format($total_1y2y3y4y5_porcentaje,1,",","."); ?>  % <br>   <?php 

$total_mes_1y2y3y4y5 = ($dolor * $total_1)+($dolor * $total_2)+($dolor * $total_3)+($dolor * $total_4)+($dolor * $total_5);   echo number_format($total_mes_1y2y3y4y5,1,",",".");

 ?>       </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">  <?php $total_1y2y3y4y5y6 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6; echo $total_1y2y3y4y5y6; ?> / <?php $i_6 = $ttt * 6; echo $i_6;  ?> M. <br> 
    <?php $total_1y2y3y4y5y6_porcentaje = ($total_1_porcentaje+$total_2_porcentaje+$total_3_porcentaje+$total_4_porcentaje+$total_5_porcentaje+$total_6_porcentaje)/6; echo number_format($total_1y2y3y4y5y6_porcentaje,1,",","."); ?>  % <br>   <?php 

$total_mes_1y2y3y4y5y6 = ($dolor * $total_1)+($dolor * $total_2)+($dolor * $total_3)+($dolor * $total_4)+($dolor * $total_5)+($dolor * $total_6);   echo number_format($total_mes_1y2y3y4y5y6,1,",",".");

 ?>    </span>
</TD>





<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 11px;"> <?php $total_1y2y3y4y5y6y7 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7; echo $total_1y2y3y4y5y6y7; ?> / <?php $i_7 = $ttt * 7; echo $i_7;  ?> M. <br> 
    <?php $total_1y2y3y4y5y6y7_porcentaje = ($total_1_porcentaje+$total_2_porcentaje+$total_3_porcentaje+$total_4_porcentaje+$total_5_porcentaje+$total_6_porcentaje+$total_7_porcentaje)/7; echo number_format($total_1y2y3y4y5y6y7_porcentaje,1,",","."); ?>  % <br>   <?php 

$total_mes_1y2y3y4y5y6y7 = ($dolor * $total_1)+($dolor * $total_2)+($dolor * $total_3)+($dolor * $total_4)+($dolor * $total_5)+($dolor * $total_6)+($dolor * $total_7);   echo number_format($total_mes_1y2y3y4y5y6y7,1,",",".");

 ?>    </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">   <?php $total_1y2y3y4y5y6y7y8 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8; echo $total_1y2y3y4y5y6y7y8; ?> / <?php $i_8 = $ttt * 8; echo $i_8;  ?> M. <br> 
    <?php $total_1y2y3y4y5y6y7y8_porcentaje = ($total_1_porcentaje+$total_2_porcentaje+$total_3_porcentaje+$total_4_porcentaje+$total_5_porcentaje+$total_6_porcentaje+$total_7_porcentaje+$total_8_porcentaje)/8; echo number_format($total_1y2y3y4y5y6y7y8_porcentaje,1,",","."); ?>  % <br>   <?php 

$total_mes_1y2y3y4y5y6y7y8 = ($dolor * $total_1)+($dolor * $total_2)+($dolor * $total_3)+($dolor * $total_4)+($dolor * $total_5)+($dolor * $total_6)+($dolor * $total_7)+($dolor * $total_8);   echo number_format($total_mes_1y2y3y4y5y6y7y8,1,",",".");

 ?>    </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;"> <?php $total_1y2y3y4y5y6y7y8y9 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9; echo $total_1y2y3y4y5y6y7y8y9; ?> / <?php $i_9 = $ttt * 9; echo $i_9;  ?> M. <br> 
    <?php $total_1y2y3y4y5y6y7y8y9_porcentaje = ($total_1_porcentaje+$total_2_porcentaje+$total_3_porcentaje+$total_4_porcentaje+$total_5_porcentaje+$total_6_porcentaje+$total_7_porcentaje+$total_8_porcentaje+$total_9_porcentaje)/9; echo number_format($total_1y2y3y4y5y6y7y8y9_porcentaje,1,",","."); ?>  % <br>   <?php 

$total_mes_1y2y3y4y5y6y7y8y9 = ($dolor * $total_1)+($dolor * $total_2)+($dolor * $total_3)+($dolor * $total_4)+($dolor * $total_5)+($dolor * $total_6)+($dolor * $total_7)+($dolor * $total_8)+($dolor * $total_9);   echo number_format($total_mes_1y2y3y4y5y6y7y8y9,1,",",".");

 ?>    </span>
</TD>



<TD class="miniborder" style="width:5.9%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">
    <span style="font-size: 11px;"> <?php $total_1y2y3y4y5y6y7y8y9y10 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10; echo $total_1y2y3y4y5y6y7y8y9y10; ?> / <?php $i_10 = $ttt * 10; echo $i_10;  ?> M. <br> 
    <?php $total_1y2y3y4y5y6y7y8y9y10_porcentaje = ($total_1_porcentaje+$total_2_porcentaje+$total_3_porcentaje+$total_4_porcentaje+$total_5_porcentaje+$total_6_porcentaje+$total_7_porcentaje+$total_8_porcentaje+$total_9_porcentaje+$total_10_porcentaje)/10; echo number_format($total_1y2y3y4y5y6y7y8y9y10_porcentaje,1,",","."); ?>  % <br>   <?php 

$total_mes_1y2y3y4y5y6y7y8y9y10 = ($dolor * $total_1)+($dolor * $total_2)+($dolor * $total_3)+($dolor * $total_4)+($dolor * $total_5)+($dolor * $total_6)+($dolor * $total_7)+($dolor * $total_8)+($dolor * $total_9)+($dolor * $total_10);   echo number_format($total_mes_1y2y3y4y5y6y7y8y9y10,1,",",".");

 ?>      </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">  <?php $total_1y2y3y4y5y6y7y8y9y10y11 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11; echo $total_1y2y3y4y5y6y7y8y9y10y11; ?> / <?php $i_11 = $ttt * 11; echo $i_11;  ?> M. <br> 
    <?php $total_1y2y3y4y5y6y7y8y9y10y11_porcentaje = ($total_1_porcentaje+$total_2_porcentaje+$total_3_porcentaje+$total_4_porcentaje+$total_5_porcentaje+$total_6_porcentaje+$total_7_porcentaje+$total_8_porcentaje+$total_9_porcentaje+$total_10_porcentaje+$total_11_porcentaje)/11; echo number_format($total_1y2y3y4y5y6y7y8y9y10y11_porcentaje,1,",","."); ?>  % <br>   <?php 

$total_mes_1y2y3y4y5y6y7y8y9y10y11 = ($dolor * $total_1)+($dolor * $total_2)+($dolor * $total_3)+($dolor * $total_4)+($dolor * $total_5)+($dolor * $total_6)+($dolor * $total_7)+($dolor * $total_8)+($dolor * $total_9)+($dolor * $total_10)+($dolor * $total_11);   echo number_format($total_mes_1y2y3y4y5y6y7y8y9y10y11,1,",",".");

 ?>     </span>
</TD>

<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:grey;" align="center">
    <span style="font-size: 11px;">  <?php $total_1y2y3y4y5y6y7y8y9y10y11y12 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12; echo $total_1y2y3y4y5y6y7y8y9y10y11y12; ?> / <?php $i_12 = $ttt * 12; echo $i_12;  ?> M. <br> 
    <?php $total_1y2y3y4y5y6y7y8y9y10y11y12_porcentaje = ($total_1_porcentaje+$total_2_porcentaje+$total_3_porcentaje+$total_4_porcentaje+$total_5_porcentaje+$total_6_porcentaje+$total_7_porcentaje+$total_8_porcentaje+$total_9_porcentaje+$total_10_porcentaje+$total_11_porcentaje+$total_12_porcentaje)/12; echo number_format($total_1y2y3y4y5y6y7y8y9y10y11y12_porcentaje,1,",","."); ?>  % <br>   <?php 

$total_mes_1y2y3y4y5y6y7y8y9y10y11y12 = ($dolor * $total_1)+($dolor * $total_2)+($dolor * $total_3)+($dolor * $total_4)+($dolor * $total_5)+($dolor * $total_6)+($dolor * $total_7)+($dolor * $total_8)+($dolor * $total_9)+($dolor * $total_10)+($dolor * $total_11)+($dolor * $total_12);   echo number_format($total_mes_1y2y3y4y5y6y7y8y9y10y11y12,1,",",".");

 ?>    </span>   <?php // echo $total_aula_lll_global;  ?>
</TD>



 <?php 

$total_meses_pagados =  $total_aula_aaa_global + $total_aula_bbb_global + $total_aula_ccc_global + $total_aula_ddd_global + $total_aula_eee_global + $total_aula_fff_global +
                        $total_aula_ggg_global + $total_aula_hhh_global + $total_aula_iii_global + $total_aula_jjj_global + $total_aula_kkk_global + $total_aula_lll_global; 



$total_de_todos_los_meses =  $total_meses_pagados + $total_meses;


$porc_mora_aux = ( $total_meses * 100 ) /   $total_de_todos_los_meses;


$porc_mora = number_format($porc_mora_aux,1,",",".");

 ?>



<TD class="miniborder" style="width:5.7%; height:13px; font-size: 10px; color:black; background-color: #ecf2f4;" align="center">



</TD>





</TR>



</TABLE>









<?php 
if($page_cu == $page_nb) 
{

$calulo_deuda = $dolor*$total_meses;

$calulo_deuda_form = number_format($calulo_deuda,1,",",".");

   echo "<br>";
   echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"height:10px; font-size: 10px; color: black;\"> ".$row_datos_queryplantel["www"]."&nbsp;&nbsp;/&nbsp;&nbsp;
   <b>Super-Indices en representantes = <span style=\"color:blue;\">N°</span> de representados.</b>&nbsp;&nbsp;/ &nbsp;&nbsp; 
    <span style=\"color:green;\"><b><i>-BK</i></b></span> = Becado. &nbsp;&nbsp;&nbsp;
    
    <span style=\"color:red;\"><b><i>-@</i></b></span> = Acceso Restringido. </span> / &nbsp;&nbsp; Total Meses Mora = ".$total_meses.".  &nbsp; / &nbsp; Monto Mora del Aula = ".$calulo_deuda_form."   ";   
}
?>



</page>

<!--  &nbsp; Mora del Aula = ".$porc_mora." %  &nbsp; / -->













<?php

    $contentxx = ob_get_clean(); 

try
    {
        $hixx = $_POST["id_tituloxxx"];

        $html2pdf = new HTML2PDF('L', 'LEGAL', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);                                    //  'p' vertical   'L' horizontal
        $html2pdf->Output("Hoja_mora_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>