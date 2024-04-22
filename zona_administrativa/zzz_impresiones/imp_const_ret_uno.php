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


$el_idesito = $_POST["id_estu"];


$query_estu = "SELECT * FROM reg_estu_actual, divisiones, grados, d_ciudades, d_estados, reg_estudiantes, temporada_escolar 

         WHERE  divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and reg_estudiantes.id_ciudad = d_ciudades.id_ciudad
         and reg_estudiantes.id_estado = d_estados.id_estado 
         and temporada_escolar.id_periodo_es = reg_estu_actual.cursa_actualmente
         
         and  el_activo = '1'
         and reg_estudiantes.id_estud = '$el_idesito'
        
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC LIMIT 1 ";

$datos_estudiantes = mysqli_query($enlace, $query_estu) or die(mysqli_error());

$row_datos_estudiantes = mysqli_fetch_array($datos_estudiantes); 


mysqli_close($enlace);


?>

    <page_footer> 


    <TABLE class="basetabla" style="padding-top: 82px;">

<TR >


  <TD style="width:5%; height:auto; font-size: 14px; color:#404347;" align="center" > </TD>

<TD style="width:90%; height:auto; font-size: 14px; color:#404347;" align="center" >Av. <?php echo $row_datos_queryplantel['nombre_av']; ?> <?php echo $row_datos_queryplantel['dir_calle_sector']; ?>,
 <?php echo $row_datos_queryplantel['nombre_vivienda']; ?>  <?php echo $row_datos_queryplantel['dir_nombre_vivienda']; ?>.</TD>


  <TD style="width:5%;height:auto; font-size: 14px; color:#404347;" align="center" > </TD> 


</TR>

<TR >


  <TD style="width:5%; height:auto; font-size: 14px; color:#404347;" align="center" > </TD>

<TD style="width:90%; height:auto; font-size: 14px; color:#404347;" align="center" >Correo Electrónico: <?php echo $row_datos_queryplantel['email_plantel']; ?>  Telfs: <?php echo $row_datos_queryplantel['telf_plantel1']; ?>,  <?php echo $row_datos_queryplantel['telf_plantel2']; ?>. RIF. <?php echo $row_datos_queryplantel['rif_plantel']; ?></TD>


  <TD style="width:5%;height:auto; font-size: 14px; color:#404347;" align="center" > </TD> 


</TR>

</TABLE>

    

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




<TABLE class="basetabla">

<TR >

  <TD style="width:15%;" align="center" ROWSPAN=6>
   <img style="width:115px; max-height: 115px;" src='../<?php echo $row_datos_queryplantel["logo_plantel"]; ?>'/>
  </TD>
           
<TD style="width:55%; height:auto; font-size: 12px; color:#404347;" align="left" ><?php echo $cab_principal; ?></TD>

<TD style="width:30%; margin-top: 4px;  height:auto; color: gray; font-size: 10px;" align="center"> </TD>

</TR>


<TR >  

<TD style="width:55%; height:auto; font-size: 12px; color:#404347; text-transform: uppercase;" align="left" ><?php echo $row_datos_queryplantel["nombre_plantel"]; ?></TD>

<TD style="width:30%; margin-top: 4px;  height:auto; color: gray; font-size: 10px;" align="center"> </TD>

</TR>


<TR >  

<TD style="width:55%; height:auto; font-size: 12px; color:#404347;" align="left" ><?php echo $cab_secundaria; ?></TD>

<TD style="width:30%; margin-top: 4px;  height:auto; color: gray; font-size: 10px;" align="center"> </TD>

</TR>



<TR >  

<TD style="width:55%; height:auto; font-size: 12px; color:#404347;" align="left" ><?php echo $cab_div1; ?> <?php echo $cab_div2; ?> <?php echo $row_datos_queryplantel["codigo_plantel"]; ?> </TD>

<TD style="width:30%; margin-top: 4px;  height:auto; color: gray; font-size: 10px;" align="center"> </TD>

</TR>


<TR >  

<TD style="width:55%; height:auto; font-size: 12px; color:#404347; text-transform: uppercase;" align="left" >
    <?php echo $row_datos_queryplantel['nombre_parroquia']; ?> - <?php echo $row_datos_queryplantel['nombre_ciudad']; ?> </TD>

<TD style="width:30%; margin-top: 4px;  height:auto; color: gray; font-size: 10px;" align="center"></TD>

</TR>


<TR >  

<TD style="width:55%; height:auto; font-size: 12px; color: grey; text-transform: uppercase;" align="left" >
     </TD>

<TD style="width:30%; margin-top: 4px;  height:auto; color: gray; font-size: 10px;" align="center"></TD>

</TR>


</TABLE>  


<TABLE class="basetabla" style="padding-top: 92px;">

<TR >
  <TD style="width:100%; margin-top: 4px;  height:auto; font-size: 28px; text-decoration: underline; font-weight: bold;" align="center">CONSTANCIA DE RETIRO</TD>   
</TR>

</TABLE>



<TABLE class="basetabla" style="padding-top: 46px;">

<TR >


  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 18px;" align="center"> </TD>

  <TD style="width:90%; margin-top: 4px;  line-height: 24px; font-size: 18px;" align="center">


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
        $him_her = 'la alumna';
      }

      if ($row_datos_estudiantes['id_sexo'] == '2') {
        $him_her = 'el alumno';
      }
   
       ?>


 <?php


            $diaf = date('d', strtotime($row_datos_estudiantes['nacimiento_estu']));
            $mesf = date('n', strtotime($row_datos_estudiantes['nacimiento_estu'])); 
            $aniof = date('Y', strtotime($row_datos_estudiantes['nacimiento_estu']));  
            $mf="";
            switch ($mesf) {
                case 1:$mf="Enero"; break;
                case 2:$mf="Febrero"; break;
                case 3:$mf="Marzo"; break;
                case 4:$mf="Abril"; break;
                case 5:$mf="Mayo"; break;
                case 6:$mf="Junio"; break;
                case 7:$mf="Julio"; break;
                case 8:$mf="Agosto"; break;
                case 9:$mf="Septiembre"; break;
                case 10:$mf="Octubre"; break;
                case 11:$mf="Noviembre"; break;
                case 12:$mf="Diciembre"; break;
            }



$fecha_hoy = date('d/m/Y'); 
    
       ?>



<p style="text-align: justify; text-justify: inter-word; font-style: italic; text-indent: 20px; ">


    Quien suscribe <b><?php echo $row_datos_modcabecc['firma_1']; ?>, C.I. Nº 
      <?php echo number_format($row_datos_plantillaDF['ci_per'], 0 , ' , ' ,  '.'); ?>,</b> <?php echo $sexiest; ?> <?php echo $row_datos_modcabecc['art']; ?> <?php echo $row_datos_queryplantel["nombre_plantel"]; ?> Código Plantel <?php echo $row_datos_queryplantel["codigo_plantel"]; ?>  situada en la <?php echo $row_datos_queryplantel['dir_calle_sector']; ?>  <?php echo $row_datos_queryplantel['nombre_vivienda']; ?> <?php echo $row_datos_queryplantel['dir_nombre_vivienda']; ?>  <?php echo $row_datos_queryplantel['nombre_parroquia']; ?>, hace constar por medio de la presente que  <?php echo $him_her; ?>: <b><u><?php echo $row_datos_estudiantes['nombre_estu']; ?> <?php echo $row_datos_estudiantes['apellidos_estu']; ?>,</u></b> titular de la Cédula de Identidad (escolar) <b><u>V <?php echo $ci_es; ?>,</u></b> nacido(a)  en: <b><u><?php echo $row_datos_estudiantes['nombre_ciudad']; ?> - <?php echo $row_datos_estudiantes['nombre_estado']; ?>,</u></b> el: <b><u><?php echo $diaf; ?> de <?php echo $mf; ?> del <?php echo $aniof; ?>,</u></b>   cursó en este Instituto Educativo, el <b>primer momento académico</b> en <b><?php echo $row_datos_estudiantes['nombre_grados']; ?> <!--  <?php echo $row_datos_estudiantes['nombre_grados']; ?> --></b> de Educación  <?php echo $texto_div; ?>, durante el año escolar <?php echo $row_datos_estudiantes['periodo_escolar']; ?>,  y se retira de este plantel por la siguiente causa: <u>Personales,</u> expuesta por su representante. 

    <br><br>Fecha de Egreso:  <b><u><?php echo $fecha_hoy; ?>.</u></b> 

</p>

  </TD>

  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 


</TR>

</TABLE>




<TABLE class="basetabla" style="padding-top: 26px;">

<TR >


  <TD style="width:10%; margin-top: 4px;  line-height: 24px; font-size: 18px;" align="center"> </TD>

  <TD style="width:80%; margin-top: 4px;  line-height: 24px; font-size: 18px;" align="center">


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


<p style="text-align: justify; text-justify: inter-word; font-style: italic; text-indent: 20px; ">

La presente se expide a petición de la parte interesada a los <?php echo $dia; ?> días del mes de <?php echo $m; ?>  del año <?php echo $anio; ?>.                                                                      
    
</p>

  </TD>


  <TD style="width:10%; margin-top: 4px;  line-height: 24px; font-size: 18px;" align="center"> </TD> 


</TR>

</TABLE>







<TABLE class="basetabla" style="padding-top: 102px;">

<TR >


  <TD style="width:10%; margin-top: 4px;  line-height: 22px; font-size: 20px;" align="center"> </TD>

  <TD style="width:80%; margin-top: 4px;  line-height: 22px; font-size: 20px; font-weight: bold; font-style: italic;" align="center">Atentamente:


  </TD>


  <TD style="width:10%; margin-top: 4px;  line-height: 22px; font-size: 20px;" align="center"> </TD> 


</TR>

</TABLE>



<TABLE class="basetabla" style="padding-top: 82px;">

<TR >


  <TD style="width:10%; margin-top: 4px;  line-height: 22px; font-size: 20px;" align="center"> </TD>

  <TD style="width:80%; margin-top: 4px;  line-height: 22px; font-size: 20px; font-weight: bold; font-style: italic;" align="center"><?php echo $row_datos_modcabecc['firma_1']; ?></TD>


  <TD style="width:10%; margin-top: 4px;  line-height: 22px; font-size: 20px;" align="center"> </TD> 


</TR>

</TABLE>


<TABLE class="basetabla" style="padding-top: 6px;">

<TR >


  <TD style="width:10%; margin-top: 4px;  line-height: 22px; font-size: 20px;" align="center"> </TD>

  <TD style="width:80%; margin-top: 4px;  line-height: 22px; font-size: 20px; font-weight: bold; font-style: italic;" align="center"><?php echo $sexiest; ?></TD>


  <TD style="width:10%; margin-top: 4px;  line-height: 22px; font-size: 20px;" align="center"> </TD> 


</TR>

</TABLE>










</page>







<?php

    $contentxx = ob_get_clean(); 

try
    {
        $hixx = $_POST["id_estu"];

        $html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("constancia_de_retiro_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>