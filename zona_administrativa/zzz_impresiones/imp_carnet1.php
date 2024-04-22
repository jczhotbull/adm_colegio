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


// datos del personal 1

$id_del_per1 = $_POST['id_per1'];

$query1 = "SELECT * FROM plantilla_contratados, plantilla_personal, cargos_all, plantilla_cargos
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
         and cargos_all.id_contrato = plantilla_contratados.id_contrato
         and plantilla_cargos.id_cargo = cargos_all.id_cargo

            and plantilla_personal.id_per = '$id_del_per1' Limit 1 ";

$datos_plantilla1 = mysqli_query($enlace, $query1) or die(mysqli_error());
$row_datos_plantilla1 = mysqli_fetch_assoc($datos_plantilla1); 
$colegiatura = "../udb";

$trab1 = $row_datos_plantilla1['id_cargo'];





$query3000 = "SELECT * FROM plantilla_cargos WHERE id_cargo = '$trab1'    Limit 1 ";

$datos_3000 = mysqli_query($enlace, $query3000) or die(mysqli_error());
$row_datos_3000 = mysqli_fetch_assoc($datos_3000); 

$el_puesto_es = $row_datos_3000['nombre_cargo'];



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
$cargo_del = fgets(fopen($colegiatura, 'r'));
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






        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; " align="center" height="18">


            <b>&nbsp;<?php echo $row_datos_periodo['inicia']; ?>&nbsp; - &nbsp;<?php echo $row_datos_periodo['termina']; ?>&nbsp;</b>



        </td>
        
<td style="width:15%;" align="center" height="18" ROWSPAN=6><img style="width:82px;  max-height: auto;" src='../<?php echo $row_datos_plantilla1['foto_per']; ?>'/></td>


        <td style="width:14%;" align="left" height="18" ROWSPAN=6><img style="width:110px;  max-height: auto;" src='../../000 Temporales/<?php echo $contenido; ?>QR.png'/></td>
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
        <td style="width:20%; font-size: 18px; color:#006bb3;" align="center" height="18"><?php  $string_r = str_replace(' ', '&nbsp;', $el_puesto_es) ?>
<B><?php echo $string_r; ?></B></td>
        
       

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