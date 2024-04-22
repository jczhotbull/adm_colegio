<?php
//error_reporting(0); //hide php errors
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


.borde_izq_top_der {border-right:1px solid black; border-top:1px solid black; border-left:1px solid black;}
.borde_izq_der_aba {border-bottom:1px solid black; border-right:1px solid black; border-left:1px solid black;}


</style>

<page backtop="16mm" backbottom="1mm" backleft="10mm" backright="16mm">
   
    



<TABLE class="basetabla" style="padding-top: 18px;" >

<TR>
 <TD style="width:90%;" align="center" >
   <img style="width:650px; " src='header_certificado.png'/>
  </TD>
</TR>

</TABLE>



<TABLE class="basetabla" style="padding-top: 42px;" >

<TR>
 <TD style="width:90%;" align="center" >
   <img style="width:70px; " src='header_escudo.png'/>
  </TD>
</TR>

</TABLE>




    <?php

include("../../conectar.php");

$periodo = "SELECT * FROM periodo_escolar";
$datos_periodo = mysqli_query($enlace, $periodo) or die(mysqli_error());
$row_datos_periodo = mysqli_fetch_assoc($datos_periodo);



$queryDF = "SELECT * FROM plantilla_contratados, plantilla_personal, cargos_all, plantilla_cargos
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
            and cargos_all.id_contrato = plantilla_contratados.id_contrato
            and plantilla_cargos.id_cargo = cargos_all.id_cargo
            and id_grupo = '1'
            and firma = '1'            
            LIMIT 1 ";

$datos_plantillaDF = mysqli_query($enlace, $queryDF) or die(mysqli_error());

$row_datos_plantillaDF = mysqli_fetch_assoc($datos_plantillaDF); 


if ($row_datos_plantillaDF['id_sexo'] == '1') {
    $sexiest = 'Directora';
}

else { $sexiest = 'Director'; }



$queryplantel = "SELECT * FROM z_plantel, direcciones, d_ciudades, d_municipio, d_parroquia, d_avenidas, d_codigo, d_vivienda  
           WHERE  z_plantel.id_direccion = direcciones.id_direccion
             and  direcciones.id_ciudad  = d_ciudades.id_ciudad
             and  direcciones.id_municipio  = d_municipio.id_municipio
             and  direcciones.id_parroquia  = d_parroquia.id_parroquia
             and  direcciones.id_avenida = d_avenidas.id_avenida
             and  direcciones.id_codigo = d_codigo.id_codigo
             and  direcciones.id_vivienda = d_vivienda.id_vivienda

          GROUP BY codigo_plantel ORDER BY nombre_plantel ASC LIMIT 1";

$datos_queryplantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());

$row_datos_queryplantel = mysqli_fetch_array($datos_queryplantel); 

$logo_plantel = $row_datos_queryplantel['logo_plantel'];


$el_idesito = $_POST["id_estudxxx"];


$query_estu = "SELECT * FROM reg_estu_actual, divisiones, grados, d_ciudades, temporada_escolar, reg_estudiantes 

         WHERE  divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and d_ciudades.id_ciudad =  reg_estudiantes.id_ciudad
         and temporada_escolar.id_periodo_es =  reg_estu_actual.cursa_actualmente
         
         and  el_activo = '1'
         and reg_estudiantes.id_estud = '$el_idesito'
        
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC LIMIT 1 ";

$datos_estudiantes = mysqli_query($enlace, $query_estu) or die(mysqli_error());

$row_datos_estudiantes = mysqli_fetch_array($datos_estudiantes); 


mysqli_close($enlace);


?>

    <page_footer>   
    </page_footer>



<?php

include("../../conectar.php");

              $querymodcabecc = "SELECT * FROM z_cabecera where id_cabecera = 1 ";

              $datos_modcabecc = mysqli_query($enlace, $querymodcabecc) or die(mysqli_error());
              
              $row_datos_modcabecc = mysqli_fetch_array($datos_modcabecc);

$cab_principal = $row_datos_modcabecc['cab_principal'];
$cab_secundaria = $row_datos_modcabecc['cab_secund'];

$cab_div1 = $row_datos_modcabecc['cab_div1'];
$cab_div2 = $row_datos_modcabecc['cab_div2'];

   mysqli_close($enlace);    


?>







<TABLE class="basetabla" style="padding-top: 11px;">

<TR >
  <TD style="width:100%; margin-top: 4px;  height:auto; font-size: 21px; font-weight: bold;" align="center">CONSTANCIA DE PROSECUCIÓN</TD>   
</TR>

<TR >
  <TD style="width:100%; margin-top: 4px;  height:auto; font-size: 21px; font-weight: bold;" align="center">EN EL NIVEL DE EDUCACIÓN INICIAL</TD>   
</TR>

</TABLE>



<TABLE class="basetabla" style="padding-top: 36px;">

<TR >


  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 18px;" align="center"> </TD>

  <TD style="width:90%; margin-top: 4px;  line-height: 26px; font-size: 16px;" align="center">


 <?php

     if ($row_datos_estudiantes['id_division'] == '1' ) {        
        $texto_div = 'Inicial';
    }


     if ($row_datos_estudiantes['id_division'] == '2' ) {        
        $texto_div = 'Primaria';
    }


    if ($row_datos_estudiantes['id_division'] == '5' ) {        
        $texto_div = 'Media General';
    }

     if ($row_datos_estudiantes['id_division'] == '3' ) {        
        $texto_div = 'Media General en Ciencias';
    }  

      if (strlen($row_datos_estudiantes['ci_estu']) > '9') {
        $ci_es = $row_datos_estudiantes['ci_estu'];
      }

      if (strlen($row_datos_estudiantes['ci_estu']) <= '9') {
        $ci_es = number_format($row_datos_estudiantes['ci_estu'], 0 , ' , ' ,  '.');
      }


       if ($row_datos_estudiantes['id_sexo'] == '1') {
        $him_her = 'la niña';
        $nac_her = 'nacida';
        $promo_her = 'promovida';
        $porta_her = 'portadora';
      }

      if ($row_datos_estudiantes['id_sexo'] == '2') {
        $him_her = 'el niño';
        $nac_her = 'nacido';
        $promo_her = 'promovido';
        $porta_her = 'portador';
      }

 
$fecha_formateadAAA = date('d/m/Y', strtotime($row_datos_estudiantes['nacimiento_estu']));


if ($row_datos_estudiantes['nombre_grados'] == 'Pre Esc. 1° Nivel' ) {
 $pre_fijo_grado = '1er';
 $next_grado = '2do';
}


if ($row_datos_estudiantes['nombre_grados'] == 'Pre Esc. 2° Nivel' ) {
 $pre_fijo_grado = '2do';
 $next_grado = '3er';
}


       ?>   



<p style="text-align: justify; text-justify: inter-word; ">

Quien suscribe&nbsp;<u><b> &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row_datos_modcabecc['firma_1']; ?> &nbsp; &nbsp; &nbsp; &nbsp; </b></u> en su condición de Director(a) (E) del&nbsp;<u><b> &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row_datos_queryplantel["nombre_plantel"]; ?> &nbsp; &nbsp; &nbsp; &nbsp; </b></u> ubicado en el municipio&nbsp;<u><b> &nbsp; &nbsp; &nbsp; <?php echo $row_datos_queryplantel['nombre_municipio']; ?> &nbsp; &nbsp; &nbsp; </b></u> de la parroquia&nbsp;<u><b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row_datos_queryplantel['nombre_parroquia']; ?>, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </b></u> adscrito a la Zona Educativa del estado&nbsp;<u> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row_datos_modcabecc['zona_e']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </u> hace constar por medio de la presente que el niño(a)&nbsp;<u><b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row_datos_estudiantes['apellidos_estu']; ?> <?php echo $row_datos_estudiantes['nombre_estu']; ?>, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </b></u> portador de la Cédula Escolar N° <u><b> &nbsp; &nbsp; &nbsp; V <?php echo $ci_es; ?> &nbsp; &nbsp; &nbsp; </b></u> nacido(a) en&nbsp;<u><b> &nbsp; &nbsp; <?php echo $row_datos_estudiantes['nombre_ciudad']; ?> - Municipio <?php echo $row_datos_estudiantes['municipio_est']; ?> &nbsp; &nbsp; &nbsp; </b></u> en fecha&nbsp;<u><b> &nbsp; &nbsp; <?php echo $fecha_formateadAAA; ?>, &nbsp; &nbsp; </b></u> <b>cursó el&nbsp;</b> <u><b> &nbsp; &nbsp; <?php echo $pre_fijo_grado; ?> &nbsp; &nbsp; </b></u> <b>Grupo de la Etapa</b> <u>&nbsp;Pre-Escolar&nbsp;</u> <b>del Nivel de Educación Inicial</b> previo cumplimiento de los requisitos exigidos en la normativa legal vigente.
 
</p>

  </TD>

  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 


</TR>

</TABLE>




<TABLE class="basetabla" style="padding-top: 26px;">

<TR >


  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 18px;" align="center"> </TD>

  <TD style="width:90%; margin-top: 4px;  line-height: 26px; font-size: 16px;" align="center">


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
            
            ?> 


<p style="text-align: justify; text-justify: inter-word;  ">

Constancia que se expide en&nbsp;<b><u>&nbsp;<?php echo $row_datos_queryplantel["nombre_ciudad"]; ?>,&nbsp;</u></b> a los&nbsp;<b><u> <?php echo $dia; ?> </u></b> días del mes de&nbsp;<b><u>&nbsp;<?php echo $m; ?>  de  <?php echo $anio; ?>&nbsp;</u></b>.                                                             
    
</p>

  </TD>


  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 


</TR>

</TABLE>





<TABLE class="basetabla" style="padding-top: 56px;" cellspacing="-1">

<TR>

<TD style="width:5%;" height="18" >  
</TD>
<TD class="borde_izq_top_der" style="width:39%; font-size: 14px;" height="18" align="center"  ><B>PLANTEL</B>
</TD>
<TD style="width:12%;" height="18" >
</TD>
<TD class="borde_izq_top_der" style="width:39%; font-size: 14px;" height="18" align="center" ><B>ZONA EDUCATIVA</B>
</TD>
<TD style="width:5%;" height="18" >  
</TD>

</TR>


</TABLE>





<TABLE class="basetabla" style="padding-top: 1px;" cellspacing="-1">



<TR >

<TD style="width:5%;" height="18" >  
</TD>
<TD class="borde_izq_top_der" style="width:39%; font-size: 13px;" height="18" align="LEFT"  ><B> PARA VALIDEZ A NIVEL NACIONAL</B>
</TD>
<TD style="width:12%;" height="18" >
</TD>
<TD class="borde_izq_top_der" style="width:39%; font-size: 13px;" height="18" align="LEFT" ><B> PARA VALIDEZ A NIVEL INTERNACIONAL</B>
</TD>
<TD style="width:5%;" height="18" >  
</TD>

</TR>



</TABLE>





<TABLE class="basetabla" style="padding-top: 1px;" cellspacing="-1">






<TR >

<TD style="width:5%;" height="18" >  
</TD>
<TD class="borde_izq_top_der" style="width:39%; font-size: 13px;" height="18" align="LEFT"  ><B> DIRECTOR(A)</B>
</TD>
<TD style="width:12%;" height="18" >
</TD>
<TD class="borde_izq_top_der" style="width:39%; font-size: 13px;" height="18" align="LEFT" ><B> DIRECTOR(A)</B>
</TD>
<TD style="width:5%;" height="18" >  
</TD>

</TR>

</TABLE>





<TABLE class="basetabla" style="padding-top: 1px;" cellspacing="-1">



<TR >

<TD style="width:5%;" height="18" >  
</TD>
<TD class="borde_izq_top_der" style="width:39%; font-size: 13px;" height="18" align="LEFT"  ><B> NOMBRE Y APELLIDO: <?php echo $row_datos_modcabecc['nomb_ape']; ?></B>
</TD>
<TD style="width:12%;" height="18" >
</TD>
<TD class="borde_izq_top_der" style="width:39%; font-size: 13px;" height="18" align="LEFT" ><B> NOMBRE Y APELLIDO:</B>
</TD>
<TD style="width:5%;" height="18" >  
</TD>

</TR>

</TABLE>





<TABLE class="basetabla" style="padding-top: 1px;" cellspacing="-1">



<TR >

<TD style="width:5%;" height="18" >  
</TD>
<TD class="borde_izq_top_der" style="width:39%; font-size: 13px;" height="18" align="LEFT"  ><B> NUMERO DE C.I. <?php echo number_format($row_datos_plantillaDF['ci_per'], 0 , ' , ' ,  '.'); ?></B>
</TD>
<TD style="width:12%;" height="18" >
</TD>
<TD class="borde_izq_top_der" style="width:39%; font-size: 13px;" height="18" align="LEFT" ><B> NUMERO DE C.I.</B>
</TD>
<TD style="width:5%;" height="18" >  
</TD>

</TR>

</TABLE>





<TABLE class="basetabla" style="padding-top: 1px;" cellspacing="-1">




<TR >

<TD style="width:5%;" height="18" >  
</TD>
<TD class="borde_izq_top_der" style="width:39%; font-size: 13px;" height="18" align="LEFT"  ><B> FIRMA Y SELLO</B>
</TD>
<TD style="width:12%;" height="18" >
</TD>
<TD class="borde_izq_top_der" style="width:39%; font-size: 13px;" height="18" align="LEFT" ><B> FIRMA Y SELLO</B>
</TD>
<TD style="width:5%;" height="18" >  
</TD>

</TR>

</TABLE>





<TABLE class="basetabla" style="padding-top: 1px;" cellspacing="-1">


<TR >

<TD style="width:5%;" height="78" >  
</TD>
<TD class="borde_izq_der_aba" style="width:39%; font-size: 13px;" height="78" align="LEFT"  >
</TD>
<TD style="width:12%;" height="78" >
</TD>
<TD class="borde_izq_der_aba" style="width:39%; font-size: 13px;" height="78" align="LEFT" >
</TD>
<TD style="width:5%;" height="78" >  
</TD>

</TR>




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
        $html2pdf->Output("constancia_de_estudios_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>