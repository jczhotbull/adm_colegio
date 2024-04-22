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

// seleccionar periodo

$periodo = "SELECT * FROM periodo_escolar";

$datos_periodo = mysqli_query($enlace, $periodo) or die(mysqli_error());

$row_datos_periodo = mysqli_fetch_assoc($datos_periodo);
  $colegiatura = "../udb";

// datos del personal 1


$id_del_per1 = $_POST['id_per1'];

$query1 = "SELECT * FROM plantilla_contratados, plantilla_personal, cargos_all, plantilla_cargos
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
         and cargos_all.id_contrato = plantilla_contratados.id_contrato
         and plantilla_cargos.id_cargo = cargos_all.id_cargo

            and plantilla_personal.id_per = '$id_del_per1' Limit 1 ";

$datos_plantilla1 = mysqli_query($enlace, $query1) or die(mysqli_error());
$row_datos_plantilla1 = mysqli_fetch_assoc($datos_plantilla1); 


$trab1 = $row_datos_plantilla1['id_cargo'];





$query30001 = "SELECT * FROM plantilla_cargos WHERE id_cargo = '$trab1'    Limit 1 ";

$datos_30001 = mysqli_query($enlace, $query30001) or die(mysqli_error());
$row_datos_30001 = mysqli_fetch_assoc($datos_30001); 

$el_puesto_es1 = $row_datos_30001['nombre_cargo'];






// datos del personal 2


$id_del_per2 = $_POST['id_per2'];

$query2 = "SELECT * FROM plantilla_contratados, plantilla_personal, cargos_all, plantilla_cargos
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
         and cargos_all.id_contrato = plantilla_contratados.id_contrato
         and plantilla_cargos.id_cargo = cargos_all.id_cargo

            and plantilla_personal.id_per = '$id_del_per2' Limit 1 ";

$datos_plantilla2 = mysqli_query($enlace, $query2) or die(mysqli_error());
$row_datos_plantilla2 = mysqli_fetch_assoc($datos_plantilla2); 


$trab2 = $row_datos_plantilla2['id_cargo'];




$query30002 = "SELECT * FROM plantilla_cargos WHERE id_cargo = '$trab2'    Limit 1 ";

$datos_30002 = mysqli_query($enlace, $query30002) or die(mysqli_error());
$row_datos_30002 = mysqli_fetch_assoc($datos_30002); 

$el_puesto_es2 = $row_datos_30002['nombre_cargo'];




mysqli_close($enlace);


?>




<span style="margin-top: 10px;"></span>



<div style="background:url(carnet_plant.jpg); margin-top: 26px; background-repeat:no-repeat;">


<TABLE class="basetabla "  cellspacing="-1" >

<TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:18%;" align="center" height="18"></td>
        
     <td style="width:17%;" align="left" height="18" ROWSPAN=3 >

<div style="rotate:90; margin-left: -12px; margin-top: -55px;">
         <img style="width:82px;  max-height: auto;" src='../<?php echo $row_datos_plantilla1['foto_per']; ?>'/ > </div>  </td>

        <td style="width:14%;" align="left" height="18"></td>
        <td style="width:25%;" align="left" height="18"></td>

        <td style="width:21%;" align="left" height="18" ROWSPAN=2> <img style="width:40px; max-height: auto;" src='scisor.png'/></td>       
</TR>

<TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:18%;" align="center" height="18"></td>  
        <td style="width:14%;" align="left" height="18"></td>
        <td style="width:25%;" align="left" height="18"></td>
</TR>

<TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:18%;" align="center" height="18"></td> 
        <td style="width:14%;" align="left" height="18"></td>
        <td style="width:25%;" align="left" height="18"></td>
        <td style="width:21%; font-size: 12px; color:gray;" align="left" height="18"></td>       
</TR>

<TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:18%;" align="center" height="18"></td>        
         <td style="width:17%;" align="center" height="18"></td>
        <td style="width:14%;" align="left" height="18"></td>
        <td style="width:25%;" align="left" height="18"></td>
        <td style="width:21%; font-size: 12px; color:gray;" align="left" height="18"></td>       
</TR>

</TABLE>



<TABLE class="basetabla "  cellspacing="-1" style="margin-top: -5px;">

<TR>

        <td class="" style="width:5%; height:195px; font-size: 14px;" align="center" ></td>
        <td class="" style="width:19%; height:195px; font-size: 14px;" align="center" ></td>


<TD class="" style="width:2%; height:195px; font-size: 16px;" align=""><div style="rotate:90; margin-top: 50px; margin-left: -10px; "><b><?php echo $row_datos_periodo['inicia']; ?>-<?php echo $row_datos_periodo['termina']; ?></b></div>
</TD>


<?php 

$firstnam1 = strtok($row_datos_plantilla1['nombre_per'], ' ');

$lastnam1 = strstr($row_datos_plantilla1['nombre_per'], ' ');

$firstCharacterlastnam1 = $lastnam1[1]; 

$firstape1 = strtok($row_datos_plantilla1['apellido_per'], ' ');

$lastape1 = strstr($row_datos_plantilla1['apellido_per'], ' ');

$firstCharacterlastape1 = $lastape1[1]; 
$cargo_del = fgets(fopen($colegiatura, 'r'));

 ?> 

<TD class="" style="width:2%; height:195px; font-size: 14px;" align=""><div style="rotate:90; margin-top: 40px; margin-left: -10px; "><b><?php echo $firstnam1; ?></b></div>
</TD>

<TD class="" style="width:2%; height:195px; font-size: 14px;" align=""><div style="rotate:90; margin-top: 40px; margin-left: -10px; "><b><?php echo $firstape1; ?> </b></div>
</TD>

<TD class="" style="width:3%; height:195px; font-size: 16px; color: #34312F;" align=""><div style="rotate:90; margin-top: 44px; margin-left: -10px; "><b><?php echo $row_datos_plantilla1['ci_per']; ?></b></div>   
</TD> 


<TD class="" style="width:3%; height:195px; font-size: 18px; color:#006bb3;" align=""><div style="rotate:90; margin-top: 50px; margin-left: -8px; "><?php  $string_r1 = str_replace(' ', '&nbsp;', $el_puesto_es1) ?>
<B><?php echo $string_r1; ?></B></div>
</TD>

<TD class="" style="width:3%; height:195px; font-size: 11px; color:#7C0430;" align="">
<div style="rotate:90; margin-top: -38px; margin-left: -8px; ">
  <B><?php echo $cargo_del; ?></B>
</div>  

</TD>


<td class="" style="width:1%; height:195px; font-size: 14px;" align="center" >  </td>  




<?php

  $folder_path = "../../000 Temporales"; 


$filesz = glob($folder_path.'/*QR.*');  
   
// Deleting all the files in the list 
foreach($filesz as $filea) { 
   
    if(is_file($filea))  
    
        // Delete the given file 
        unlink($filea);  
} 


  //Agregamos la libreria para genera códigos QR
  require "../../00_QR/qrlib.php";    
  
  //Declaramos una carpeta temporal para guardar la imagenes generadas
  $dir = '../../000 Temporales/';
  
  //Si no existe la carpeta la creamos
  if (!file_exists($dir))
        mkdir($dir);

      $la_doc_id_es = $row_datos_plantilla1['ci_per'];
  
        //Declaramos la ruta y nombre del archivo a generar
  $filename = $dir.''.$la_doc_id_es.'QR.png';
 
        //Parametros de Condiguración
  
  $tamaño = 10; //Tamaño de Pixel
  $level = 'M'; //Precisión Baja
  $framSize = 1; //Tamaño espacio blanco
  $contenido = $la_doc_id_es; //Texto
  
        //Enviamos los parametros a la Función para generar código QR 
  QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
  
        //Mostramos la imagen generada
 // echo '<img src="'.$dir.basename($filename).'" />';  


/*

Precisión:

L = Baja
M = Mediana
Q = Alta
H= Máxima

Tipo de Contenido:

Texto: ‘Codigos de Programacion’

URL: ‘http://www.codigosdeprogramacion.com’

Télefono: ‘tel:(049)123-456-789′

SMS: »smsto:(049)012-345-678:Cuerpo de sms’

Email: ‘mailto:micorreo@dominio.com?subject=Asunto&body=contenido’

VCard: ‘BEGIN:VCARD’.’\n»;
‘FN:Codigos de Programacion’.»\n»;
‘TEL;WORK;VOICE:(049)012-345-678’.»\n»;
‘END:VCARD

WIFI: ‘WIFI:S:MISSID;T:WPA;P:PASSWORD;H:true;’

*/


?>






     <td style="width:17%; height:195px; font-size: 14px;" align="center" >

<div style="rotate:-90; margin-left: -34px; margin-top: -57px;">
         <img style="width:88px;  max-height: auto;" src='../../000 Temporales/<?php echo $contenido; ?>QR.png'/> </div>  </td>

       

        <td class="" style="width:42%; height:195px; font-size: 14px;" align="center" >  </td>       
</TR>



</TABLE>





</div>











<BR><BR><BR><BR><BR><BR><BR><BR>








<span style="margin-top: 10px;"></span>



<div style="background:url(carnet_plant.jpg); margin-top: 26px; background-repeat:no-repeat;">


<TABLE class="basetabla "  cellspacing="-1" >

<TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:18%;" align="center" height="18"></td>
        
     <td style="width:17%;" align="left" height="18" ROWSPAN=3 >

<div style="rotate:90; margin-left: -12px; margin-top: -55px;">
         <img style="width:82px;  max-height: auto;" src='../<?php echo $row_datos_plantilla2['foto_per']; ?>'/ > </div>  </td>

        <td style="width:14%;" align="left" height="18"></td>
        <td style="width:25%;" align="left" height="18"></td>

        <td style="width:21%;" align="left" height="18" ROWSPAN=2> <img style="width:40px; max-height: auto;" src='scisor.png'/></td>       
</TR>

<TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:18%;" align="center" height="18"></td>  
        <td style="width:14%;" align="left" height="18"></td>
        <td style="width:25%;" align="left" height="18"></td>
</TR>

<TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:18%;" align="center" height="18"></td> 
        <td style="width:14%;" align="left" height="18"></td>
        <td style="width:25%;" align="left" height="18"></td>
        <td style="width:21%; font-size: 12px; color:gray;" align="left" height="18"></td>       
</TR>

<TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:18%;" align="center" height="18"></td>        
         <td style="width:17%;" align="center" height="18"></td>
        <td style="width:14%;" align="left" height="18"></td>
        <td style="width:25%;" align="left" height="18"></td>
        <td style="width:21%; font-size: 12px; color:gray;" align="left" height="18"></td>       
</TR>

</TABLE>



<TABLE class="basetabla "  cellspacing="-1" style="margin-top: -5px;">

<TR>

        <td class="" style="width:5%; height:195px; font-size: 14px;" align="center" ></td>
        <td class="" style="width:19%; height:195px; font-size: 14px;" align="center" ></td>


<TD class="" style="width:2%; height:195px; font-size: 16px;" align=""><div style="rotate:90; margin-top: 50px; margin-left: -10px; "><b><?php echo $row_datos_periodo['inicia']; ?>-<?php echo $row_datos_periodo['termina']; ?></b></div>
</TD>


<?php 

$firstnam2 = strtok($row_datos_plantilla2['nombre_per'], ' ');

$lastnam2 = strstr($row_datos_plantilla2['nombre_per'], ' ');

$firstCharacterlastnam2 = $lastnam2[1]; 

$firstape2 = strtok($row_datos_plantilla2['apellido_per'], ' ');

$lastape2 = strstr($row_datos_plantilla2['apellido_per'], ' ');

$firstCharacterlastape2 = $lastape2[1];  ?> 

<TD class="" style="width:2%; height:195px; font-size: 14px;" align=""><div style="rotate:90; margin-top: 40px; margin-left: -10px; "><b><?php echo $firstnam2; ?></b></div>
</TD>

<TD class="" style="width:2%; height:195px; font-size: 14px;" align=""><div style="rotate:90; margin-top: 40px; margin-left: -10px; "><b><?php echo $firstape2; ?> </b></div>
</TD>

<TD class="" style="width:3%; height:195px; font-size: 16px; color: #34312F;" align=""><div style="rotate:90; margin-top: 42px; margin-left: -10px; "><b><?php echo $row_datos_plantilla2['ci_per']; ?></b></div>   
</TD> 


<TD class="" style="width:3%; height:195px; font-size: 18px; color:#006bb3;" align=""><div style="rotate:90; margin-top: 50px; margin-left: -8px; "><?php  $string_r2 = str_replace(' ', '&nbsp;', $el_puesto_es2) ?>
<B><?php echo $string_r2; ?></B></div>
</TD>

<TD class="" style="width:3%; height:195px; font-size: 11px; color:#7C0430;" align="">
<div style="rotate:90; margin-top: -38px; margin-left: -8px; ">
  <B><?php echo $cargo_del; ?></B>
</div>  

</TD>


<td class="" style="width:1%; height:195px; font-size: 14px;" align="center" >  </td>  




<?php


  //Agregamos la libreria para genera códigos QR

  
  //Declaramos una carpeta temporal para guardar la imagenes generadas
  $dir2 = '../../000 Temporales/';
  

      $la_doc_id_es2 = $row_datos_plantilla2['ci_per'];
  
        //Declaramos la ruta y nombre del archivo a generar
  $filename2 = $dir2.''.$la_doc_id_es2.'QR.png';
 
        //Parametros de Condiguración
  
  $tamaño2 = 10; //Tamaño de Pixel
  $level2 = 'M'; //Precisión Baja
  $framSize2 = 1; //Tamaño espacio blanco
  $contenido2 = $la_doc_id_es2; //Texto
  
        //Enviamos los parametros a la Función para generar código QR 
  QRcode::png($contenido2, $filename2, $level2, $tamaño2, $framSize2); 
  
        //Mostramos la imagen generada
 // echo '<img src="'.$dir.basename($filename).'" />';  


?>






     <td style="width:17%; height:195px; font-size: 14px;" align="center" >

<div style="rotate:-90; margin-left: -34px; margin-top: -57px;">
         <img style="width:88px;  max-height: auto;" src='../../000 Temporales/<?php echo $contenido2; ?>QR.png'/> </div>  </td>

       

        <td class="" style="width:42%; height:195px; font-size: 14px;" align="center" >  </td>       
</TR>



</TABLE>



</div>























</page>







<?php

    $contentxx = ob_get_clean(); 

try
    {
        

        $html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("carnet2_vert.pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>