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

$periodo = "SELECT * FROM periodo_escolar";
$datos_periodo = mysqli_query($enlace, $periodo) or die(mysqli_error());
$row_datos_periodo = mysqli_fetch_assoc($datos_periodo);




$queryplantel = "SELECT * FROM z_plantel LIMIT 1";

$datos_queryplantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());
$colegiatura = "../udb";
$row_datos_queryplantel = mysqli_fetch_array($datos_queryplantel); 

$logo_plantel = $row_datos_queryplantel['logo_plantel'];

?>














<span style="margin-top: 10px;"></span>








<?php

$id_del_estudent = $_POST['id_estudxxx'];
$cargo_del = fgets(fopen($colegiatura, 'r'));
include("../../conectar.php");

        $reg_estu_actual = "SELECT * FROM ( select * from temporada_escolar, grados, respuestas, edades, tall_cam, tall_pant, tall_zap, pesos, alturas, reg_estu_actual  
           WHERE  temporada_escolar.id_periodo_es = reg_estu_actual.cursa_actualmente
             and  grados.id_grado  = reg_estu_actual.grado_actual
             and  respuestas.id_respuesta  = reg_estu_actual.repite_actual
             and  edades.id_edad  = reg_estu_actual.edad_actual
             and  tall_cam.id_camisa = reg_estu_actual.t_camisa_act
             and  tall_pant.id_pantalon = reg_estu_actual.t_pantalon_act
             and  tall_zap.id_zapato = reg_estu_actual.t_zapatos_act
             and  pesos.id_peso = reg_estu_actual.peso_act
             and  alturas.id_altura = reg_estu_actual.estatura_act
             
             and id_estud = '$id_del_estudent'
          ORDER BY id_reg_estu_actual DESC LIMIT 7) sub order by id_reg_estu_actual ASC ";   // maximo me mostrara los ultimos 7

$q_reg_estu_actual = mysqli_query($enlace, $reg_estu_actual) or die(mysqli_error());
$q_reg_estu_actual_cuenta = mysqli_num_rows($q_reg_estu_actual);       

mysqli_close($enlace);





?>








<div style="background:url(carnet_alt.jpg); margin-top: 26px; background-repeat:no-repeat;">

<TABLE class="basetabla minibordercut"  cellspacing="-1" >
   
    <TR>

        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
        <td style="width:15%;" align="center" height="18"></td>

        <td style="width:39%;" align="center" height="18"></td>
        <td style="width:21%;" align="left" height="18" ROWSPAN=2> <img style="width:40px; max-height: auto;" src='scisor.png'/></td>       
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
        <td style="width:15%;" align="center" height="18"></td>

        <td style="width:39%;" align="center" height="18"></td>
           
       
    </TR>


        <TR>
         <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
        <td style="width:15%;" align="center" height="18"></td>

        <td style="width:39%;" align="center" height="18"></td>
         <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18"><b>Recortar</b>, cuando el carnet</td>       
       
    </TR>


        <TR>
         <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
        <td style="width:15%;" align="center" height="18"></td>

        <td style="width:39%;" align="center" height="18"></td>
        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">sea autorizado, con el</td>       
       
    </TR>


    <?php

$id_del_estudent = $_POST['id_estudxxx'];

include("../../conectar.php");

        $reg_estu_actual_p = "SELECT * FROM temporada_escolar, reg_estu_actual  
           WHERE  temporada_escolar.id_periodo_es = reg_estu_actual.cursa_actualmente 
           and  reg_estu_actual.el_activo = '1'           
             
             and id_estud = '$id_del_estudent'
          ORDER BY id_reg_estu_actual LIMIT 1  ";   

$q_reg_estu_actual_p = mysqli_query($enlace, $reg_estu_actual_p) or die(mysqli_error());

$q_reg_estu_actual_pp = mysqli_fetch_array($q_reg_estu_actual_p);    

mysqli_close($enlace);


?>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; " align="center" height="18"><b><?php echo $q_reg_estu_actual_pp["periodo_escolar"]; ?></b></td>
        
        <td style="width:15%;" align="center" height="18" ROWSPAN=6><img style="width:82px;  max-height: auto;" src='../<?php echo $_POST["foto_estuxxx"]; ?>'/></td>

        <td style="width:39%;" align="center" height="18"></td>
        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">sello de la institución.</td>          
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; font-size: 12px;" align="center" height="18"><b><?php echo $_POST["nombres_estuxxx"]; ?></b></td>
        
        
        

        <td style="width:39%;" align="center" height="18"></td>
        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18"></td>       
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; font-size: 12px;" align="center" height="18"><b><?php echo $_POST["apellidos_estuxxx"]; ?></b></td>
        
        
        

        <td style="width:39%;" align="center" height="18"></td>
         <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">Imprimir, si es posible a</td>         
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; font-size: 14px;" align="center" height="18"><b>Ci ó Ce: <?php echo $_POST["ci_estuxxx"]; ?></b></td>
        
        
       

        <td style="width:39%;" align="center" height="18"></td>
       <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">color, o con muy buena</td>      
       
    </TR>


        <TR>
       <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
       

                <td style="width:25%; font-size: 11px; color:#7C0430;" align="center" height="18"><div style="rotate:90; margin-left:132px; margin-top:-120px; ">
         <B><?php echo $cargo_del; ?></B></div></td>
        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">escala de grises.</td>         
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
       

        <td style="width:39%;" align="center" height="18"></td>
        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18"></td>       
       
    </TR>






    
   
        
</TABLE>
</div>








</page>















<?php

    $contentxx = ob_get_clean(); 

try
    {
        $hixx = $_POST["id_estudxxx"];

        $html2pdf = new HTML2PDF('P', 'A4_LONG', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("datos_de_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>