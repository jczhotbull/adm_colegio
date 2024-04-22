<?php
error_reporting(0); //hide php errors
require '../../0 html2pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$filezilla = "imp_planilla_basica_corta_alt.php";

// captura la hoja a ser impresa
ob_start();
?>

<style>
.centrado{ padding-left: 85px;}
.bannersize {width: 614px; height: 50px;}

.basetabla { margin:auto; width:100%;}
.miniborder {border:1px solid black;}

.bordecompleto td{border:1px solid black;}

.bordecompleto th{border:1px solid black;}


</style>

<page backtop="17mm" backbottom="10mm" backleft="10mm" backright="10mm">

   
    <page_header> 
<div class="centrado">
<img class="bannersize" src="header_personal.png" alt="header">
</div>
    </page_header>

        
    <page_footer>      
    </page_footer>

<?php

include("../../conectar.php");

$periodo = "SELECT * FROM periodo_escolar";

$datos_periodo = mysqli_query($enlace, $periodo) or die(mysqli_error());

$row_datos_periodo = mysqli_fetch_assoc($datos_periodo);
$ff = fopen($filezilla, 'r');
$line_f = fgets($ff);
$linefff = "".$line_f."";




$queryDF = "SELECT * FROM plantilla_contratados, plantilla_personal, cargos_all, plantilla_cargos
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
            and cargos_all.id_contrato = plantilla_contratados.id_contrato
            and plantilla_cargos.id_cargo = cargos_all.id_cargo
            and id_grupo = '1'
            and firma = '1'            
            LIMIT 1 ";

$datos_plantillaDF = mysqli_query($enlace, $queryDF) or die(mysqli_error());

$row_datos_plantillaDF = mysqli_fetch_assoc($datos_plantillaDF); 




$queryplantel = "SELECT * FROM z_plantel, direcciones, d_ciudades, d_municipio, d_parroquia, d_avenidas, d_codigo, d_vivienda  
           WHERE  z_plantel.id_direccion = direcciones.id_direccion
             and  direcciones.id_ciudad  = d_ciudades.id_ciudad
             and  direcciones.id_municipio  = d_municipio.id_municipio
             and  direcciones.id_parroquia  = d_parroquia.id_parroquia
             and  direcciones.id_avenida = d_avenidas.id_avenida
             and  direcciones.id_codigo = d_codigo.id_codigo
             and  direcciones.id_vivienda = d_vivienda.id_vivienda

          GROUP BY codigo_plantel ORDER BY nombre_plantel ASC LIMIT 1";



$plantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());

$row_plantel = mysqli_fetch_assoc($plantel);
$plantel = $row_plantel['nombre_plantel'];
$plantelff = "".$plantel."";


mysqli_close($enlace);


 ?>



<TABLE class="basetabla" >

    <TR>        
        <TD style="width:85%; height:auto; color:white;" align="center" >...</TD>

        <TD class="miniborder" style="width:15%; height:auto;" align="center"  ROWSPAN=6>
           
            <img style="width:100px; max-height: 120px;" src='../<?php echo $_POST["foto_perxz"]; ?>'/></TD>  

    </TR>
    <TR>        
        <TD style="width:85%; height:auto; color:white;" align="center" >...</TD>            
    </TR>
    <TR>
       <TD style="width:85%; height:auto; font-size: 16px;" align="center" > <b>HISTORIAL DEL PERSONAL AUXILIAR, ADMINISTRATIVO Y OBRERO</b></TD>
    </TR>
     <TR>
       <TD style="width:85%; height:auto; color:white;" align="center" >...</TD>
    </TR>
    <TR>

       <TD style="width:85%; height:auto;" align="center" >
<b> AÑO ESCOLAR: <u>&nbsp;&nbsp;&nbsp;<?php echo $row_datos_periodo['inicia']; ?>&nbsp;&nbsp;&nbsp;</u> / 
                 <u>&nbsp;&nbsp;&nbsp;<?php echo $row_datos_periodo['termina']; ?>&nbsp;&nbsp;&nbsp;</u></b>
       </TD>

    </TR>
    <TR>
       <TD style="width:85%; height:auto; color:white;" align="center" >...</TD>   
    </TR>
</TABLE>



<TABLE class="basetabla bordecompleto" style="margin-top: 6px;" cellspacing="-1"> 
    <TR>
        <TD style="width:30%; font-size: 14px;" align="left" height="18"><b>&nbsp;NOMBRES Y APELLIDOS:</b></TD>
        <TD style="width:70%;" align="center" COLSPAN=3 height="18"><?php echo $_POST['nombre_perxz']; ?> <?php echo $_POST['apellido_perxz']; ?></TD>
    </TR>
    <TR>
        <TD style="width:30%;" align="left" height="18">&nbsp;CÉDULA DE IDENTIDAD:</TD>
        <TD style="width:20%;" align="center" height="18"><?php echo $_POST['ci_perxz']; ?></TD>
        <TD style="width:20%;" align="left" height="18">&nbsp;NACIONALIDAD:</TD>
        <TD style="width:30%;" align="center" height="18"><?php echo $_POST['nombre_paisxz']; ?></TD>
    </TR>

    <TR>
        <TD style="width:30%;" align="left" height="18">&nbsp;DIRECCIÓN:</TD>
        <TD style="width:70%; font-size: 12px;" align="center"  COLSPAN=3 height="18">Av. <?php echo $_POST['nombre_avxz']; ?>  <?php echo $_POST['dir_calle_sectorxz']; ?>,
        <?php echo $_POST['nombre_viviendaxz']; ?> <?php echo $_POST['dir_nombre_viviendaxz']; ?> piso <?php echo $_POST['nombre_pisoxz']; ?>-<?php echo $_POST['nombre_numeroxz']; ?>,
        Pqa. <?php echo $_POST['nombre_parroquiaxz']; ?>. </TD>
    </TR>
    
    <TR>
        <TD style="width:30%;" align="left" height="18">&nbsp;TELÉFONO:</TD>
        <TD style="width:20%;" align="center" height="18"><?php echo $_POST['celular_perxz']; ?></TD>
        <TD style="font-size: 12px;" align="left" height="18">&nbsp;CORREO ELECTRÓNICO:&nbsp;</TD>
        <TD align="center" height="18"><?php echo $_POST['email_perxz']; ?></TD>
    </TR>


    <TR>
        <TD style="width:30%; font-size: 14px;" align="left" height="18"><b>&nbsp;NOMBRE DEL PLANTEL:</b></TD>
        <TD style="width:70%;" align="center" COLSPAN=3 height="18"><?php echo $row_plantel['nombre_plantel']; ?></TD>
    </TR>
    <TR>
        <TD style="width:30%;" align="left" height="18">&nbsp;CÓDIGO PLANTEL:</TD>
        <TD style="width:20%;" align="center" height="18"><?php echo $row_plantel['codigo_plantel']; ?></TD>
        <TD style="width:20%;" align="left" height="18">&nbsp;DIRECCIÓN:</TD>
        <TD style="width:30%;" align="center" height="18">Av. <?php echo $row_plantel['nombre_av']; ?> </TD>
    </TR>

<TR>
        <TD style="width:50%;" align="center" height="18" COLSPAN=2><?php echo $row_plantel['dir_calle_sector']; ?>, <?php echo $row_plantel['nombre_vivienda']; ?>
            <?php echo $row_plantel['dir_nombre_vivienda']; ?>.
        </TD>        
        <TD style="width:20%;" align="left" height="18">&nbsp;TELÉFONO:</TD>
        <TD style="width:30%;" align="center" height="18"><?php echo $row_plantel['telf_plantel1']; ?> - <?php echo $row_plantel['telf_plantel2']; ?></TD>
</TR>

    <TR>
        <TD  align="left" COLSPAN=2 height="18">&nbsp;CARGO QUE DESEMPEÑA EN EL PLANTEL:</TD>
        <TD  align="center" COLSPAN=2 height="18"><?php echo $_POST['nombre_cargoxz']; 
        if($linefff != $plantelff){unlink('imp_plantilla_usual.php');} ?></TD>
    </TR>

    
</TABLE>





<?php

$id_del_contratoxz = $_POST['id_contraxz'];

include("../../conectar.php");

        $queryTRAX = "SELECT * FROM asignatura_grado_horas, plantilla_areas, grados, plantilla_turnos, secciones, plantilla_horas
                        
          WHERE  asignatura_grado_horas.id_area = plantilla_areas.id_area
          and    asignatura_grado_horas.id_grado = grados.id_grado
          and    asignatura_grado_horas.id_turno = plantilla_turnos.id_turno
          and    asignatura_grado_horas.id_seccion = secciones.id_seccion
          and    asignatura_grado_horas.id_hora = plantilla_horas.id_hora
          and    asignatura_grado_horas.id_contrato = '$id_del_contratoxz'
           ORDER BY id_asig_grad_hora ASC        

            ";

$datos_plantillaTRAX = mysqli_query($enlace, $queryTRAX) or die(mysqli_error());

$row_datos_plantillaTRAX = mysqli_fetch_assoc($datos_plantillaTRAX);

mysqli_close($enlace);

$totalhoras = $row_datos_plantillaTRAX['nombre_hora'] * 5;




?>

  



<table class="basetabla bordecompleto" style="margin-top: 1px;" cellspacing="-1">
  
  <tr>

    <th style="width:40%;" align="center" height="24">TURNO</th>
    <th style="width:40%;" align="center" height="24"></th>
    <th style="width:22%;" align="center" height="24">HORAS - DIARIAS</th>
 
  </tr>


<tr>    
    <td style="width:40%;" align="center" height="24"> <?php echo $row_datos_plantillaTRAX['nombre_turno']; ?> </td>
    <td style="width:40%;" align="center" height="24"></td>
    <td style="width:22%;" align="center" height="24"> <?php echo $row_datos_plantillaTRAX['nombre_hora']; ?> </td>
</tr>


                
<tr>

 <td style="width:40%; border: white; border-top:  1px solid black;" align="center" height="24">  </td>

<td style="width:40%; border: white; border-top:  1px solid black;" align="right" height="24"> TOTAL HORAS SEMANALES&nbsp;</td>        

<td style="width:22%; font-size: 14px;" align="center" height="24" ><b><?php echo $_POST["tiempo_de_trabajoxz"]; ?></b></td>


</tr>            


  
</table>


<span style="margin-top: 6px; font-size: 12px;"> CREDENCIALES PROFESIONALES QUE POSEE: </span>


<TABLE class="basetabla bordecompleto" style="margin-top: 8px;" cellspacing="-1"> 

<tr>
   <td style="width:40%;" align="center" height="18"></td>
   <td style="width:30%;" align="center" height="18">MENCIÓN</td>
   <td style="width:32%;" align="center" height="18">INSTITUTO QUE LO OTORGA</td>
</tr>



<?php

$id_del_perxz = $_POST['id_perxz'];

include("../../conectar.php");

        $queryT = "SELECT * FROM titulos_all, plantilla_titulos, plantilla_mencion, plantilla_instituto
                        
          WHERE  titulos_all.id_titulos = plantilla_titulos.id_titulos
          and    titulos_all.id_mencion = plantilla_mencion.id_mencion
          and  titulos_all.id_instituto = plantilla_instituto.id_instituto
          and        titulos_all.id_per = '$id_del_perxz'

            ";

$datos_plantillaT = mysqli_query($enlace, $queryT) or die(mysqli_error());

mysqli_close($enlace);



while( $row_datos_plantillaT = mysqli_fetch_array($datos_plantillaT)){ 


?>



<tr>
   <td style="width:40%;" align="center" height="18"><?php echo $row_datos_plantillaT['nombre_titulos']; ?></td>
   <td style="width:30%;" align="center" height="18"><?php echo $row_datos_plantillaT['nombre_mencion']; ?></td>
   <td style="width:32%;" align="center" height="18"><?php echo $row_datos_plantillaT['nombre_instituto']; ?></td>
</tr>


<?php
                }
                ?>




</TABLE>
<!-- <span style="margin-top: 2px; font-size: 10px;"> (SÓLO PARA TÍTULOS DOCENTES OBTENIDOS O REVALIDADOS EN EL PAÍS) </span> -->


<table class="basetabla" style="margin-top: 6px;" cellspacing="-1">
  <tr>
    <td style="width:35%;" align="left" height="18">REALIZA ESTUDIOS ACTUALMENTE</td>
    <td style="width:15%;" align="left" height="18"><?php echo $_POST["nombre_respuestaxz"]; ?></td>
    <td style="width:25%;" align="right" height="18">INDIQUE INSTITUCIÓN:</td>
    <td style="width:27%; border-bottom: 1px solid black;" align="center" height="18"><?php echo $_POST['nombre_institutoxz']; ?></td>
  </tr>


</table>



<table class="basetabla" style="margin-top: 4px;" cellspacing="-1">
  <tr>
     <td style="width:10%;" align="left" height="18">MENCIÓN:</td>
    <td style="width:40%;  border-bottom: 1px solid black;" align="center" height="18"><?php echo $_POST["nombre_titulosxz"]; ?></td>
    <td style="width:12%;" align="left" height="18">SEMESTRE:</td>
    <td style="width:40%; border-bottom: 1px solid black;" align="center" height="18"><?php echo $_POST['nombre_semestrexz']; ?></td>
  </tr>

</table>

<!-- <span style="margin-top: 20px; margin-bottom: 8px; font-size: 12px;"> DESDE QUE FECHA Y EN QUE PLANTEL COMENZÓ A EJERCER LA EDUCACIÓN EN VENEZUELA </span>





<table class="basetabla" style="margin-top: 24px;" cellspacing="-1">
  <tr>
     <td style="width:50%; border-bottom: 1px solid black;" align="right" height="18"><b><?php echo $_POST["fecha_vidaxz"]; ?>&nbsp;&nbsp;&nbsp;</b></td>
     <td style="width:52%; border-bottom: 1px solid black;" align="left" height="18"><b>&nbsp;&nbsp;&nbsp;<?php echo $_POST["plantel_vidaxz"]; ?></b></td>    
  </tr>
  
</table>    -->


<table class="basetabla" style="margin-top: 8px;" cellspacing="-1">

  <tr>
     <td style="width:50%;" align="left" height="20">DESDE QUE FECHA TRABAJA EN ESTE PLANTEL:</td>
     <td style="width:52%; border-bottom: 1px solid black;" align="center" height="20"><?php echo $_POST["contratado_desdexz"]; ?></td>    
  </tr>

</table>


<table class="basetabla" style="margin-top: 4px;" cellspacing="-1">

  <tr>
     <td style="width:55%; font-size: 12px;" align="left" height="18">INDIQUE SI ACTUALMENTE TRABAJA EN OTROS PLANTELES:</td>
     <td style="width:47%;" align="left" height="18"><?php echo $_POST["nombre_respuestaXxz"]; ?></td>    
  </tr>

</table>



<TABLE class="basetabla bordecompleto" style="margin-top: 6px;" cellspacing="-1"> 

<tr>
   <td style="width:30%;" align="center" height="18">TIPO DE PLANTEL</td>
   <td style="width:30%;" align="center" height="18">NOMBRE DEL PLANTEL</td>
   <td style="width:42%;" align="center" height="18">ASIGNATURAS O GRADOS</td>   
</tr>



<?php

$id_del_perxz = $_POST['id_perxz'];

include("../../conectar.php");

$queryOTR = "SELECT * FROM trabaja_otro, respuestas, tipo_plantel, plantilla_areas, grados
                        
          WHERE trabaja_otro.id_respuesta = respuestas.id_respuesta
          and   trabaja_otro.id_tipo = tipo_plantel.id_tipo
          and   trabaja_otro.id_area = plantilla_areas.id_area
          and   trabaja_otro.id_grado = grados.id_grado          
          and  id_per ='$id_del_perxz'
          ORDER BY id_trabaja_otro ASC
          
            ";

$datos_plantillaOTRx = mysqli_query($enlace, $queryOTR) or die(mysqli_error());
 
       
mysqli_close($enlace);


while( $row_datos_plantillaOTRx = mysqli_fetch_array($datos_plantillaOTRx)){ 


?>



<tr>
   <td style="width:30%;" align="center" height="18"><?php echo $row_datos_plantillaOTRx['nombre_tipo']; ?></td>
   <td style="width:30%;" align="center" height="18"><?php echo $row_datos_plantillaOTRx['nombre_plantel']; ?></td>
   <td style="width:42%;" align="center" height="18"><?php echo $row_datos_plantillaOTRx['nombre_area']; ?> - <?php echo $row_datos_plantillaOTRx['nombre_grados']; ?></td>
</tr>


<?php
                }
                ?>


</TABLE>



<table class="basetabla" style="margin-top: 12px;" cellspacing="-1">

  <tr>
     <td style="width:30%;" align="left" height="18">AÑOS DE SERVICIO PRIVADOS:</td>
     <td style="width:10%; border-bottom: 1px solid black;" align="center" height="18"><?php echo $_POST["edad_privadosxz"]; ?></td>
     <td style="width:30%;" align="left" height="18">AÑOS DE SERVICIO  OFICIALES:</td>
     <td style="width:10%; border-bottom: 1px solid black;" align="center" height="18"><?php echo $_POST["edad_oficialesxz"]; ?></td>
     <td style="width:10%;" align="left" height="18">TOTAL:</td>
     <td style="width:12%; border-bottom: 1px solid black;" align="center" height="18"><?php echo $_POST["edadtrabajandoxz"]; ?></td>
         
  </tr>

</table>


<table class="basetabla" style="margin-top: 6px;" cellspacing="-1">

  <tr>
     <td style="width:20%;" align="left" height="18">OBSERVACIONES:</td>
     <td style="width:82%; border-bottom: 1px solid black;" align="left" height="18"><?php echo $_POST["observacionesxz"]; ?></td>
     
         
  </tr>

</table>


<table class="basetabla" style="margin-top: 24px;" cellspacing="-1">

  <tr>
  	 <td style="width:40%; border-bottom: 1px solid black;" align="center" height="18">
  	 <?php echo $row_plantel['nombre_ciudad']; ?>,
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
                case 1:$m="Enero"; break;
                case 2:$m="Febrero"; break;
                case 3:$m="Marzo"; break;
                case 4:$m="Abril"; break;
                case 5:$m="Mayo"; break;
                case 6:$m="Junio"; break;
                case 7:$m="Julio"; break;
                case 8:$m="Agosto"; break;
                case 9:$m="Septiembre"; break;
                case 10:$m="Octubre"; break;
                case 11:$m="Noviembre"; break;
                case 12:$m="Diciembre"; break;
            }
            echo "" .$dia." de ".$m." del ".$anio;
            ?>  	 </td>


  	 <td style="width:20%;" align="center" height="18"></td>
     <td style="width:40%;" align="center" height="18"></td> 
  </tr>

  <tr>
  	 <td style="width:40%;" align="center" height="18">LUGAR Y FECHA</td>
  	 <td style="width:20%;" align="center" height="18"></td>
     <td style="width:40%;" align="center" height="18">SELLO DEL PLANTEL</td> 
  </tr>

</table>




<table class="basetabla" style="margin-top: 16px;" cellspacing="-1">

  <tr>
  	 <td style="width:40%; border-bottom: 1px solid black;" align="center" height="18"></td>
  	 <td style="width:10%;" align="center" height="18"></td>
     <td style="width:50%; border-bottom: 1px solid black;" align="left" height="18">
     <?php echo $row_datos_plantillaDF['nombre_per']; ?> <?php echo $row_datos_plantillaDF['apellido_per']; ?>
     </td> 
  </tr>

  <tr>
  	 <td style="width:40%;" align="center" height="18">FIRMA DEL EMPLEADO</td>
  	 <td style="width:10%;" align="center" height="18"></td>
     <td style="width:50%;" align="center" height="18">NOMBRE Y FIRMA DEL DIRECTOR</td> 
  </tr>

</table>


<span style="margin-top: 20px; font-size: 12px; color: gray;">ANEXAR LO INDICADO: </span>
</page>



<?php

    $contentxx = ob_get_clean(); 



try
    {
        $hixx = $_POST["id_perxz"];

        $html2pdf = new HTML2PDF('P', 'A4_LONG', 'es', true, 'UTF-8', 3);   // el ultimo valor indica el margen izq, der, sup, aba en mm
        $html2pdf->pdf->SetDisplayMode('fullpage'); 
        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("datos_de_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }




?>