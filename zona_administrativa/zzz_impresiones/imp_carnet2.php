<?php
error_reporting(0); //hide php errors
require '../../0 html2pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$colegiatura = "../udb";

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
$cargo_del = fgets(fopen($colegiatura, 'r'));
include("../../conectar.php");

// seleccionar periodo

$periodo = "SELECT * FROM periodo_escolar";

$datos_periodo = mysqli_query($enlace, $periodo) or die(mysqli_error());

$row_datos_periodo = mysqli_fetch_assoc($datos_periodo);


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
        <td style="width:20%;" align="center" height="18"></td>
        
        <td style="width:15%;" align="center" height="18"></td>

        <td style="width:14%;" align="center" height="18"></td>
        <td style="width:25%;" align="center" height="18"></td>
        <td style="width:21%;" align="left" height="18" ROWSPAN=2> <img style="width:40px; max-height: auto;" src='scisor.png'/></td>       
       
    </TR>


     <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
        <td style="width:15%;" align="center" height="18"></td>

        <td style="width:14%;" align="center" height="18"></td>
        <td style="width:25%;" align="center" height="18"></td>
           
       
    </TR>


    <TR>
         <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
        <td style="width:15%;" align="center" height="18"></td>

        <td style="width:14%;" align="center" height="18"></td>
        <td style="width:25%;" align="center" height="18"></td>
         <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18"><b>Recortar</b>, cuando el carnet</td>       
       
    </TR>


     <TR>
         <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
        <td style="width:15%;" align="center" height="18"></td>

        <td style="width:14%;" align="center" height="18"></td>
        <td style="width:25%;" align="center" height="18"></td>
        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">sea autorizado, con el</td>       
       
    </TR>




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
  $dir1 = '../../000 Temporales/';
  


      $la_doc_id_es1 = $row_datos_plantilla1['ci_per'];
  
        //Declaramos la ruta y nombre del archivo a generar
  $filename1 = $dir1.''.$la_doc_id_es1.'QR.png';
 
        //Parametros de Condiguración
  
  $tamaño1 = 10; //Tamaño de Pixel
  $level1 = 'M'; //Precisión Baja
  $framSize1 = 1; //Tamaño espacio blanco
  $contenido1 = $la_doc_id_es1; //Texto
  
        //Enviamos los parametros a la Función para generar código QR 
  QRcode::png($contenido1, $filename1, $level1, $tamaño1, $framSize1); 
  
        //Mostramos la imagen generada
 // echo '<img src="'.$dir.basename($filename).'" />';  

?>




        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; " align="center" height="18">


            <b>&nbsp;<?php echo $row_datos_periodo['inicia']; ?>&nbsp; - &nbsp;<?php echo $row_datos_periodo['termina']; ?>&nbsp;</b>



        </td>
        
<td style="width:15%;" align="center" height="18" ROWSPAN=6><img style="width:82px;  max-height: auto;" src='../<?php echo $row_datos_plantilla1['foto_per']; ?>'/></td>


<td style="width:14%;" align="left" height="18" ROWSPAN=6><img style="width:110px;  max-height: auto;" src='../../000 Temporales/<?php echo $contenido1; ?>QR.png'/></td>
        <td style="width:25%;" align="center" height="18"></td>


        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">sello de la institución.</td>          
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; font-size: 12px;" align="center" height="18"><b><?php echo $row_datos_plantilla1['nombre_per']; ?></b></td>
        
        
        


        <td style="width:25%;" align="center" height="18"></td>
        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18"></td>       
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; font-size: 12px;" align="center" height="18"><b><?php echo $row_datos_plantilla1['apellido_per']; ?></b></td>
        
        
        

        <td style="width:25%;" align="center" height="18"></td>
         <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">Imprimir, si es posible a</td>         
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; font-size: 14px;" align="center" height="18"><b>Ci: <?php echo $row_datos_plantilla1['ci_per']; ?></b></td>
        
        

        <td style="width:25%;" align="center" height="18"></td>
       <td style="width:21% font-size: 12px; color:gray;" align="center" height="18">color, o con muy buena</td>      
       
    </TR>


        <TR>
       <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; font-size: 18px; color:#006bb3;" align="center" height="18"><?php  $string_r1 = str_replace(' ', '&nbsp;', $el_puesto_es1) ?>
<B><?php echo $string_r1; ?></B></td>
        
       


        <td style="width:25%; font-size: 11px; color:#7C0430;" align="center" height="18"><div style="rotate:90; margin-left:64px; margin-top:-105px; ">
         <B><?php echo $cargo_del; ?></B></div></td>
        <td style="width:21% font-size: 12px; color:gray;" align="center" height="18">escala de grises.</td>         
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
       


        <td style="width:25%;" align="center" height="18"></td>
        <td style="width:21% font-size: 12px; color:gray;" align="center" height="18"></td>       
       
    </TR>

    
   
        
</TABLE>
</div>











<BR><BR><BR><BR><BR><BR><BR><BR>








<span style="margin-top: 10px;"></span>



<div style="background:url(carnet_plant.jpg); margin-top: 26px; background-repeat:no-repeat;">

<TABLE class="basetabla "  cellspacing="-1" >
   
    <TR>

        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
        <td style="width:15%;" align="center" height="18"></td>

        <td style="width:14%;" align="center" height="18"></td>
        <td style="width:25%;" align="center" height="18"></td>
        <td style="width:21%;" align="left" height="18" ROWSPAN=2> <img style="width:40px; max-height: auto;" src='scisor.png'/></td>       
       
    </TR>


     <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
        <td style="width:15%;" align="center" height="18"></td>

        <td style="width:14%;" align="center" height="18"></td>
        <td style="width:25%;" align="center" height="18"></td>
           
       
    </TR>


    <TR>
         <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
        <td style="width:15%;" align="center" height="18"></td>

        <td style="width:14%;" align="center" height="18"></td>
        <td style="width:25%;" align="center" height="18"></td>
         <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18"><b>Recortar</b>, cuando el carnet</td>       
       
    </TR>


     <TR>
         <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
        <td style="width:15%;" align="center" height="18"></td>

        <td style="width:14%;" align="center" height="18"></td>
        <td style="width:25%;" align="center" height="18"></td>
        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">sea autorizado, con el</td>       
       
    </TR>


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


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; " align="center" height="18">


            <b>&nbsp;<?php echo $row_datos_periodo['inicia']; ?>&nbsp; - &nbsp;<?php echo $row_datos_periodo['termina']; ?>&nbsp;</b>



        </td>
        
<td style="width:15%;" align="center" height="18" ROWSPAN=6><img style="width:82px;  max-height: auto;" src='../<?php echo $row_datos_plantilla2['foto_per']; ?>'/></td>

<td style="width:14%;" align="left" height="18" ROWSPAN=6><img style="width:110px;  max-height: auto;" src='../../000 Temporales/<?php echo $contenido2; ?>QR.png'/></td>
        <td style="width:25%;" align="center" height="18"></td>

        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">sello de la institución.</td>          
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; font-size: 12px;" align="center" height="18"><b><?php echo $row_datos_plantilla2['nombre_per']; ?></b></td>
        
        
        

        <td style="width:25%;" align="center" height="18"></td>
        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18"></td>       
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; font-size: 12px;" align="center" height="18"><b><?php echo $row_datos_plantilla2['apellido_per']; ?></b></td>
        
        
        


        <td style="width:25%;" align="center" height="18"></td>
         <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">Imprimir, si es posible a</td>         
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; font-size: 14px;" align="center" height="18"><b>Ci: <?php echo $row_datos_plantilla2['ci_per']; ?></b></td>
        
        
       


        <td style="width:25%;" align="center" height="18"></td>
       <td style="width:21% font-size: 12px; color:gray;" align="center" height="18">color, o con muy buena</td>      
       
    </TR>


        <TR>
       <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; font-size: 18px; color:#006bb3;" align="center" height="18"><?php  $string_r2 = str_replace(' ', '&nbsp;', $el_puesto_es2) ?>
<B><?php echo $string_r2; ?></B></td>
        
       


            <td style="width:25%; font-size: 11px; color:#7C0430;" align="center" height="18"><div style="rotate:90; margin-left:64px; margin-top:-105px; ">
         <B><?php echo $cargo_del; ?></B></div></td>
        <td style="width:21% font-size: 12px; color:gray;" align="center" height="18">escala de grises.</td>         
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
       


        <td style="width:25%;" align="center" height="18"></td>
        <td style="width:21% font-size: 12px; color:gray;" align="center" height="18"></td>       
       
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
        $html2pdf->Output("carnet1.pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>