<?php
error_reporting(0); //hide php errors
require '../../0 html2pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$i="1";
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

.miniborderlight {border:0.5px dotted <?php echo $color_imp1; ?>;}

.minibordercut {border-top:1px dashed <?php echo $color_imp1; ?>;}

.miniborder_g {border:1px solid <?php echo $color_imp1; ?>;}

.miniborder_A {border-right: 3px double <?php echo $color_imp1; ?>; border-top: 3px double <?php echo $color_imp1; ?>; border-left: 3px double <?php echo $color_imp1; ?>;}

.miniborder_B {border-bottom: 3px double <?php echo $color_imp1; ?>; border-right: 3px double <?php echo $color_imp1; ?>; border-left: 3px double <?php echo $color_imp1; ?>;}

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
 <!--   <TABLE class="basetabla">

<TR >


<TD style="width:10%; height:auto; font-size: 14px; color: <?php echo $color_imp1; ?>;" align="center" ></TD>

<TD style="width:80%; height:auto; font-size: 14px; color: #404347;" align="center" ><?php echo $row_datos_queryplantel["www"]; ?></TD>


<TD style="width:10%; height:auto; font-size: 14px; color: <?php echo $color_imp1; ?>;" align="center" ></TD>


</TR>

</TABLE>   -->   
    </page_footer>





<TABLE class="basetabla">


<TR>

<TD class="" style="width:32%; height:auto; font-size: 18px; color:<?php echo $color_imp2; ?>; font-style: italic;" align="center">

<b><?php echo $row_datos_queryplantel['nombre_plantel']; ?></b>
           

</TD>


<TD class="" style="width:15%; height:auto; font-size: 18px; color:<?php echo $color_imp2; ?>;" align="center">

    <b><?php echo $_POST["id_tituloxxx"]; ?></b>



</TD>


<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp1; ?>;" align="left">

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





<TD class="" style="width:15%; height:auto; color:<?php echo $color_imp2; ?>;" align="center">

Año Escolar:  <b> <?php echo $row_datos_periodo['inicia']; ?>&nbsp; - 
                 &nbsp;<?php echo $row_datos_periodo['termina']; ?>&nbsp;</b>
           

</TD>

</TR>






</TABLE>

<br>






<TABLE class="basetabla" style="margin-top: 6px;" cellspacing="-1">

<TR >

    <TD class="" style="width:3%; height:16px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center">
    </TD>

    <TD class="miniborder" style="width:34%; height:16px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><b>Datos del Estudiante</b>
    </TD>

    <TD class="miniborder" style="width:30%; height:16px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><b>Datos del Representante</b>
    </TD>

    <TD class="miniborder" style="width:33%; height:16px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center">
    </TD>

</TR>

</TABLE>



<TABLE class="basetabla" style="margin-top: 6px;" cellspacing="-1">

<TR >

    <TD class="miniborder" style="width:3%; height:16px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><b>N°</b>
    </TD>

    <TD class="miniborder" style="width:12%; height:16px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center">Apellidos
    </TD>

    <TD class="miniborder" style="width:12%; height:16px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center">Nombres
    </TD>

    <TD class="miniborder" style="width:10%; height:16px; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center">Grado o Año
    </TD>


 
    <TD class="miniborder" style="width:15%; height:16px; font-size: 14px; color:<?php echo $color_imp1; ?>;" align="center">Apellidos y Nombres
    </TD>
    <TD class="miniborder" style="width:15%; height:16px; font-size: 14px; color:<?php echo $color_imp1; ?>;" align="center">Labora en el plantel ?
    </TD>

    <TD class="miniborder" style="width:33%; height:16px; font-size: 14px; color:<?php echo $color_imp1; ?>;" align="center">Observaciones
    </TD>


</TR>

</TABLE>




<TABLE class="basetabla" style="margin-top: 6px;" cellspacing="-1">



<?php

/* $id_seccionxxx = $_POST['id_seccionxxx'];  */
$el_cicloXX = $_POST['id_cicloxxx'];
$consulXX = $_POST['id_consulXX'];

include("../../conectar.php");

$query = "SELECT * FROM reg_estu_actual, grados, edades, secciones, extra_catedra, reg_estudiantes  
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and extra_catedra.id_estud = reg_estudiantes.id_estud
         and reg_estu_actual.grado_actual = grados.id_grado
         and reg_estu_actual.id_seccion = secciones.id_seccion
         and reg_estu_actual.edad_actual = edades.id_edad  
         
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$el_cicloXX'
         and id_area = '$consulXX'         

         and retirado_si_o_no = '0'
         and inscrito_si_o_no = '1'
                 
         GROUP BY reg_estudiantes.id_estud ORDER BY reg_estudiantes.apellidos_estu ASC" ;

$datos_control = mysqli_query($enlace, $query) or die(mysqli_error());

$totalRows_datos_control = mysqli_num_rows($datos_control); 

$media =  ceil($totalRows_datos_control/2);

$centro = $media + 1;




    

mysqli_close($enlace);




while( $row_datos_control = mysqli_fetch_assoc($datos_control)){ 


?>









    <TR >

<TD class="miniborder" style="width:3%; height:16px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">


<b><?php
    echo $i;
    $i++; 

?></b>



</TD>

<TD class="miniborder" style="width:12%; height:16px; font-size: 12px; color:<?php echo $color_imp1; ?>; padding-left: 4px;" align="left">
                                    <b><?php echo $row_datos_control['apellidos_estu']; ?></b>   
</TD>

<TD class="miniborder" style="width:12%; height:16px; font-size: 12px; color:<?php echo $color_imp1; ?>; padding-left: 4px;" align="left">
                                    <?php echo $row_datos_control['nombre_estu']; ?>   
</TD>


<TD class="miniborder" style="width:10%; height:16px; font-size: 12px; color:<?php echo $color_imp1; ?>;" align="center"><?php echo $row_datos_control['nombre_grados']; ?>

    
</TD>









<TD class="miniborder" style="width:15%; height:16px; font-size: 12px; color:<?php echo $color_imp1; ?>;" align="center">

<b>


<?php


include("../../conectar.php");

$el_id = $row_datos_control['id_estud'];

$queryP = "SELECT * FROM reg_estu_repre_all, reg_representante
         WHERE   reg_estu_repre_all.id_estu = '$el_id'
         and reg_representante.id_repre = reg_estu_repre_all.id_repre
       
         GROUP BY reg_representante.id_repre LIMIT 1" ;

$datos_controlP = mysqli_query($enlace, $queryP) or die(mysqli_error());

$row_datos_controlP = mysqli_fetch_assoc($datos_controlP);


mysqli_close($enlace);



$firstape = strtok($row_datos_controlP['apellido_repre'], ' ');

$lastape = strstr($row_datos_controlP['apellido_repre'], ' ');


if ($lastape[1] != '') {

   $firstCharacterlastape = $lastape[1]; 
}

else {
    $firstCharacterlastape ='';
}
   

                                     echo $firstape; ?> <?php echo $firstCharacterlastape; ?>.</b>


<?php 

$firstnam = strtok($row_datos_controlP['nombre_repre'], ' ');

$lastnam = strstr($row_datos_controlP['nombre_repre'], ' ');

$firstCharacterlastnam = $lastnam[1];    

                                     echo $firstnam; ?>





</TD>
<TD class="miniborder" style="width:15%; height:16px; font-size: 12px; color:<?php echo $color_imp1; ?>;" align="center">



<?php

include("../../conectar.php");

$el_doc_repre_es = $row_datos_controlP['ci_repre'];

$queryP_detectar = " SELECT * FROM plantilla_contratados, plantilla_personal, plantilla_cargos, cargos_all
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
         and  plantilla_contratados.id_contrato = cargos_all.id_contrato
        and  plantilla_cargos.id_cargo = cargos_all.id_cargo
        and plantilla_contratados.status = 1
        and plantilla_personal.ci_per = '$el_doc_repre_es'
        ORDER BY plantilla_personal.apellido_per asc limit 1   " ;

$datos_controlP_detectar = mysqli_query($enlace, $queryP_detectar) or die(mysqli_error());

$row_datos_controlP_detectar = mysqli_fetch_assoc($datos_controlP_detectar);

$totalRows_controlP_detectar = mysqli_num_rows($datos_controlP_detectar); 

mysqli_close($enlace);



$trabaja_de = '';

if ($totalRows_controlP_detectar >= 1 ) {
    
$el_contrato_es = $row_datos_controlP_detectar['id_contrato'];


include("../../conectar.php");

$queryH = "SELECT * FROM cargos_all, plantilla_cargos
                        
          WHERE  cargos_all.id_cargo = plantilla_cargos.id_cargo
          and    cargos_all.id_contrato = '$el_contrato_es' order by id_cargos_all asc limit 1
          
            ";

$datos_plantillaH = mysqli_query($enlace, $queryH) or die(mysqli_error());

$row_datos_plantillaH = mysqli_fetch_array($datos_plantillaH); 

$trabaja_de = $row_datos_plantillaH['nombre_cargo'];


mysqli_close($enlace); 


}


echo $trabaja_de;


 ?>




</TD>


<TD class="miniborder" style="width:33%; height:16px; font-size: 12px; color:<?php echo $color_imp1; ?>;" align="left">&nbsp;&nbsp;<?php echo $row_datos_control['obs_catedra']; ?>

    
</TD>




</TR>


<!--
<?php

if ($centro == $i) {
    echo "<hr style=\"margin-top: 4px;\">";
}


?>   -->





<?php
                }
                ?>


</TABLE>












</page>















<?php

    $contentxx = ob_get_clean(); 

try
    {
        $hixx = $_POST["id_tituloxxx"];

        $html2pdf = new HTML2PDF('L', 'LEGAL', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);                                    //  'p' vertical   'L' horizontal
        $html2pdf->Output("Hoja_todos_los_datos_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>