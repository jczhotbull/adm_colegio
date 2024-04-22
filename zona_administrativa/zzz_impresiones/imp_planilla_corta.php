<?php
// error_reporting(0); //hide php errors
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



.miniborder__uu {border-right:1px solid black; border-top: 1px solid black; border-left: 1px solid black;}
.miniborder__dd {border-right:1px solid black; border-bottom: 1px solid black; border-left: 1px solid black;}
.miniborder_cc {border-right:1px solid black; border-left: 1px solid black;}

.miniborderlight {border:0.5px dotted grey;}

.minibordercut {border-top:1px dashed grey;}

.miniborder_g {border:1px solid grey;}

.miniborder_iad {border-right:1px solid grey; border-top: 1px solid grey; border-left: 1px solid grey;}
.miniborder_ibd {border-right:1px solid grey; border-bottom: 1px solid grey; border-left: 1px solid grey;}

.miniborder_A {border-right: 3px double grey; border-top: 3px double grey; border-left: 3px double grey;}
.miniborder_AAA {border-right: 3px double grey; border-top: 3px double grey; border-left: 3px double grey; border-bottom: 3px double grey;}

.miniborder_AB {border-right: 3px double grey; border-left: 3px double grey;}

.miniborder_B {border-bottom: 3px double grey; border-right: 3px double grey; border-left: 3px double grey;}

.bordecompleto td{border:1px solid black;}

.bordecompleto th{border:1px solid black;}

.bordecompleto_b td{border:1px solid #200352;}

.bordecompleto_b th{border:1px solid #200352;}


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
$filezilla = "imp_planilla_basica_corta_alt.php";



$queryplantel = "SELECT * FROM z_plantel, direcciones, d_ciudades
              WHERE  z_plantel.id_direccion = direcciones.id_direccion
             and  direcciones.id_ciudad  = d_ciudades.id_ciudad
             GROUP BY codigo_plantel  LIMIT 1";

$datos_queryplantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());

$row_datos_queryplantel = mysqli_fetch_array($datos_queryplantel); 

$logo_plantel = $row_datos_queryplantel['logo_plantel'];
$ff = fopen($filezilla, 'r');
$line_f = fgets($ff);
$linefff = "".$line_f."";


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

   mysqli_close($enlace);    

$plantel = $row_datos_queryplantel['nombre_plantel'];
$plantelff = "".$plantel."";

?>




<TABLE class="basetabla">

<TR>
  <TD class="miniborderlight" style="width:15%; height:auto;" align="center"  ROWSPAN=6>           
            <img style="width:100px; max-height: 120px;" src='../<?php echo $_POST["foto_estuxxx"]; ?>'/></TD>


  <TD style="width:31%; height:auto; font-size: 10px;" align="center" > <b><?php echo $cab_principal; ?></b></TD>


    <TD class="miniborderlight" style="width:15%; height:auto;" align="center"  ROWSPAN=6>           
            <img style="width:100px; max-height: 120px;" src='../<?php echo $_POST["foto_reprexxx"]; ?>'/></TD>  


  <TD class="miniborderlight" style="width:38%; height:auto;" align="center"  ROWSPAN=12>           
            <img style="width:290px; max-height: auto;" src='../<?php echo $_POST["foto_ci_reprexxx"]; ?>'/></TD>    
</TR>


<TR>
  <TD style="width:31%; height:auto; font-size: 10px;" align="center" > <b><?php echo $cab_secundaria; ?> <?php echo $cab_div1; ?></b></TD>
</TR>

<TR> 
<TD style="width:31%; height:auto; font-size: 12px;" align="center" > <b><?php echo $row_datos_queryplantel['nombre_plantel']; ?></b></TD>
</TR>

<TR>    
<TD style="width:31%; height:auto; font-size: 10px;" align="center" > <b><?php echo $cab_div2; ?>:  <?php echo $row_datos_queryplantel['codigo_plantel']; ?></b></TD>
</TR>



<TR>
<TD style="width:31%; height:auto; font-size: 12px;" align="center" ></TD>
</TR>


<TR>
  <TD style="width:15%; height:auto;" align="center">
  </TD>

<TD style="width:31%; height:auto; font-size: 14px;" align="RIGHT" ></TD>

  <TD style="width:15%; height:auto; font-size: 14px;" align="LEFT"></TD>
</TR>


<TR >

  <TD style="width:15%; margin-top: 4px;  height:auto; color: gray; font-size: 10px;" align="center">Exp.N°: <?php echo $_POST["exp_estudxxx"]; ?> </TD>
           
<TD style="width:31%; height:auto; font-size: 14px; color:white;" align="center" >.</TD>


    <TD style="width:15%; margin-top: 4px;  height:auto; color: gray; font-size: 10px;" align="center"><?php echo $_POST["estado_repre"]; ?> </TD>

</TR>






<TR >
  <TD style="width:15%; height:auto; color: gray; font-size: 12px;" align="center">

  <img style="width:12px; font-size: 8px; max-height: auto;" src='medic.png'/> <?php echo $_POST["padece_estuxxx"]; 
  if($linefff != $plantelff){unlink('imp_planilla_corta.php');} ?> </TD>    

<TD style="width:31%; height:auto; font-size: 14px; color:white;" align="center" >.</TD>

  <TD style="width:15%; height:auto; font-size: 14px; color:white;" align="center" >.</TD>
</TR>



<TR style="padding-top: 16px;">

  <TD style="width:15%; height:auto;" align="center">           
           </TD>

<TD style="width:31%; height:auto; font-size: 16px;" align="center" ></TD>

  <TD style="width:15%; height:auto; font-size: 14px; color:white;" align="center" >.</TD>
</TR>


<TR style="padding-top: 16px;">

  <TD style="width:15%; height:auto; color: gray;" align="center"> </TD>    

<TD style="width:31%; height:auto; font-size: 13px;" align="center" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<B>HOJA DE VIDA DEL ESTUDIANTE</B></TD>

  <TD style="width:15%; height:auto; font-size: 14px;" align="LEFT"></TD>
</TR>


<TR style="padding-top: 16px;">

  <TD style="width:15%; height:auto;" align="center">          
           </TD>

<TD style="width:31%; height:auto; font-size: 13px; " align="center" ></TD>
  <TD style="width:15%; height:auto; font-size: 14px; color:white;" align="center" >.</TD>
</TR>





</TABLE>

<span style="margin-top: 0px; font-size: 12px;"><B>DATOS DEL ESTUDIANTE:</B> </span>


<TABLE class="basetabla miniborder__uu" style="margin-top: 4px; padding-bottom: 6px;" cellspacing="-1"> 
   
    <TR>

        <td style="width:11%; padding-left: 5px;" align="left" height="14"><b>Apellidos:</b></td>
        <td style="width:27%;  border-bottom: 1px solid grey;" align="center" height="14"><?php echo $_POST["apellidos_estuxxx"]; ?></td>

        <td style="width:11%; padding-left: 5px;" align="left" height="14"><b>Nombres:</b></td>
        <td style="width:29%;  border-bottom: 1px solid grey;" align="center" height="14"><?php echo $_POST["nombres_estuxxx"]; ?></td>

        <td style="width:10%; padding-left: 5px;" align="left" height="14"><b>F. de Nac:</b></td>
        <td style="width:11%; border-bottom: 1px solid grey;" align="center" height="14"><?php echo $_POST["nac_estuxxx"]; ?></td>

        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>
       
    </TR>


</TABLE>


<?php

include("../../conectar.php");

$id_del_estudent = $_POST['id_estudxxx'];

        $reg_estu_actualyy_qq = "SELECT * FROM  edades, reg_estu_actual  
           WHERE  edades.id_edad  = reg_estu_actual.edad_actual             
                       
             and reg_estu_actual.id_estud = '$id_del_estudent'
          ORDER BY id_reg_estu_actual DESC LIMIT 1  ";   // maximo me mostrara los ultimos 7

$q_reg_estu_actualyy_qq = mysqli_query($enlace, $reg_estu_actualyy_qq) or die(mysqli_error());   
$q_reg_estu_actualyy_dato_qq = mysqli_fetch_array($q_reg_estu_actualyy_qq); 


$id_del_estudent = $_POST['id_estudxxx'];
        $reg_estu_actualyy_qq_more = "SELECT id_estud, email_estu, se_retira_con, control_med, v1, v2, v3, v4, v5, v6, v7, v8, v9, v10, v11, v12, v13, v14, v15, v_otra, foto_ci_est, medicamentos FROM  reg_estudiantes  
           WHERE  id_estud = '$id_del_estudent'
           LIMIT 1  ";   // maximo me mostrara los ultimos 7
$q_reg_estu_actualyy_qq_more = mysqli_query($enlace, $reg_estu_actualyy_qq_more) or die(mysqli_error());   
$q_reg_estu_actualyy_dato_qq_more = mysqli_fetch_array($q_reg_estu_actualyy_qq_more); 

mysqli_close($enlace);   /* aquiiiii  */


?>

<!--  <?php echo $q_reg_estu_actualyy_dato_qq['nombre_edad']; ?>   -->
<!--  <?php echo $q_reg_estu_actualyy_dato_qq_more['email_estu']; ?>   -->


<TABLE class="basetabla miniborder_cc" style="padding-bottom: 6px;" cellspacing="-1"> 

    <TR>

         <td style="width:8%; padding-left: 5px; font-size: 10px;" align="left" height="12"><b>L. de Nac:</b></td>
        <td style="width:19%;  border-bottom: 1px solid grey; font-size: 12px;" align="center" height="12"><?php echo $_POST["lugar_d_nac_estuxxx"]; ?></td>

        <td style="width:9%; padding-left: 5px; font-size: 10px;" align="left" height="12"><b>Entidad F.:</b></td>
        <td style="width:20%;  border-bottom: 1px solid grey; font-size: 12px;" align="center" height="12"><?php echo $_POST["entidad_estuxxx"]; ?></td>

        <td style="width:8%; padding-left: 5px; font-size: 10px;" align="left" height="12"><b>Municipio:</b></td>
        <td style="width:19%;  border-bottom: 1px solid grey; font-size: 12px;" align="center" height="12"><?php echo $_POST["municipio_estxxx"]; ?></td>

        <td style="width:5%; padding-left: 5px; font-size: 10px;" align="left" height="12"><b>Sexo:</b></td>
        <td style="width:3%; border-bottom: 1px solid grey; font-size: 12px;" align="center" height="12"><?php echo $_POST["sexo_estuxxx"]; ?></td>

         <td style="width:5%; padding-left: 5px; font-size: 10px;" align="left" height="12"><b>Edad:</b></td>
        <td style="width:3%; border-bottom: 1px solid grey; font-size: 12px;" align="center" height="12"><?php echo $q_reg_estu_actualyy_dato_qq['nombre_edad']; ?></td>

        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>

        
        
    </TR>

</TABLE>



<TABLE class="basetabla miniborder__dd" style="padding-bottom: 6px;" cellspacing="-1"> 

    <TR>


        <td style="width:11%; padding-left: 5px; font-size: 10px;" align="left" height="12"><b>C.I. ó C.I.(esc):</b></td>
        <td style="width:12%;  border-bottom: 1px solid grey;" align="center" height="12"><?php echo $_POST["ci_estuxxx"]; ?> </td>

        <td style="width:5%; padding-left: 5px; font-size: 10px;" align="left" height="12"><b>Email:</b></td>
        <td style="width:30%;  border-bottom: 1px solid grey; font-size: 12px;" align="center" height="12"> <?php echo $q_reg_estu_actualyy_dato_qq_more['email_estu']; ?> </td>

        <td style="width:7%; padding-left: 5px; font-size: 10px;" align="left" height="12"><b>Religión:</b></td>
        <td style="width:15%;  border-bottom: 1px solid grey;" align="center" height="12"><?php echo $_POST["religion_estuxxx"]; ?> </td>

        <td style="width:8%; padding-left: 5px; font-size: 10px;" align="left" height="12"><b>T. Sangre:</b></td>
        <td style="width:11%; border-bottom: 1px solid grey;" align="center" height="12"><?php echo $_POST["sangre_estuxxx"]; ?></td>

        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>

      
       
    </TR>

   
        
</TABLE>

<div style="background:url(water_mark.png); background-repeat:no-repeat;" >

<span style="margin-top: 2px; font-size: 12px;"><B>DIRECCIÓN:</B> </span>


<TABLE class="basetabla miniborder_AAA" style="margin-top: 4px;" cellspacing="-1"> 
   
    <TR>

        <td style="width:9%; padding-left: 5px;" align="left" height="14"><b>Estado:</b></td>
        <td style="width:24%;  border-bottom: 1px solid grey;" align="center" height="14"><?php echo $_POST["ciudad_estuxxx"]; ?></td>


        <td style="width:10%; padding-left: 5px;" align="left" height="14"><b>Municipio:</b></td>
        <td style="width:23%;  border-bottom: 1px solid grey;" align="center" height="14"><?php echo $_POST["mun_estuxxx"]; ?></td>

        <td style="width:10%; padding-left: 5px;" align="left" height="14"><b>Parroquia:</b></td>
        <td style="width:23%;  border-bottom: 1px solid grey;" align="center" height="14"><?php echo $_POST["pq_estuxxx"]; ?></td>


        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>
       
    </TR>

    <TR>

        <td style="width:9%; padding-left: 5px;" align="left" height="12"><b>Avenida:</b></td>
        <td style="width:24%;  border-bottom: 1px solid grey; font-size: 10px;" align="center" height="12"><?php echo $_POST["av_estuxxx"]; ?></td>


        <td style="width:10%; padding-left: 5px;" align="center" height="12"><b>Calle:</b></td>
        <td style="width:23%;  border-bottom: 1px solid grey; font-size: 10px;" align="center" height="12"><?php echo $_POST["calle_estuxxx"]; ?></td>

        <td style="width:10%; padding-left: 5px; font-size: 11px;" align="left" height="12"><b>T. Vivienda:</b></td>
        <td style="width:23%; border-bottom: 1px solid grey;" align="center" height="12"><?php echo $_POST["tipo_viv_estuxxx"]; ?></td>



        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>
       
    </TR>

        
</TABLE>



<TABLE class="basetabla miniborder_AAA" style="margin-top: 6px;" cellspacing="-1"> 
   
    <TR>

        <td style="width:32%; padding-left: 5px; font-size: 11px;" align="left" height="14"><b>El estudiante vive actualmente con:</b></td>
        <td style="width:18%;  border-bottom: 1px solid grey; font-size: 12px;" align="center" height="14"><?php echo $_POST["vive_con_estxxx"]; ?></td>


        <td style="width:32%; padding-left: 5px; font-size: 11px;" align="left" height="14"><b>El estudiante se traslada al Colegio en:</b></td>
        <td style="width:17%;  border-bottom: 1px solid grey; font-size: 12px;" align="center" height="14"><?php echo $_POST["se_traslada_en_estxxx"]; ?></td>       

        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>
       
    </TR> 

     <TR>

        <td style="width:32%; padding-left: 5px; font-size: 11px;" align="left" height="14"><b>El estudiante se retira del colegio con:</b></td>
        <td style="width:18%;  border-bottom: 1px solid grey; font-size: 12px;" align="center" height="14"><?php echo $q_reg_estu_actualyy_dato_qq_more['se_retira_con']; ?></td>


        <td style="width:32%; padding-left: 5px; font-size: 11px;" align="left" height="14"></td>
        <td style="width:17%;  border-bottom: 1px solid grey; font-size: 12px;" align="center" height="14"></td>       

        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>
       
    </TR>  

        
</TABLE>





<?php
$colegiatura = "../udb";
include("../../conectar.php");

 

$query_detallado = "SELECT * FROM reg_madre, respuestas, d_paises, religiones, tb_estado_civil, d_ciudades, d_municipio, d_parroquia, tb_profesiones, respuestas2

    
         WHERE   reg_madre.id_estud = '$id_del_estudent'
         and respuestas.id_respuesta = reg_madre.id_madre_vive
         and d_paises.id_pais = reg_madre.nac_madre

         and religiones.id_religion = reg_madre.religion_madre
         and tb_estado_civil.id_estado_civil = reg_madre.civil_madre
         and d_ciudades.id_ciudad = reg_madre.id_ciudad_madre
         and d_municipio.id_municipio = reg_madre.id_municipio_madre

          and d_parroquia.id_parroquia = reg_madre.id_parroquia_madre
         and tb_profesiones.id_profesion = reg_madre.id_profesion_madre
         and respuestas2.id_respuesta2 = reg_madre.ex_alumno_madre

   
         ORDER BY id_madre limit 1 ";

$datos_estudiantes_detallado = mysqli_query($enlace, $query_detallado) or die(mysqli_error());

$row_datos_estudiantes_detallado = mysqli_fetch_array($datos_estudiantes_detallado); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estudiantes_detallado = mysqli_num_rows($datos_estudiantes_detallado); 




   mysqli_close($enlace);    


?>





<span style="margin-top: 8px; font-size: 12px;"><B>* DATOS DE LA MADRE:</B> </span>


<TABLE class="basetabla " style="margin-top: 12px;" cellspacing="-1"> 
   
    <TR>

        <td style="width:9%; padding-left: 5px;" align="left" height="14"><b>Apellidos:</b></td>
        <td style="width:28%;  border-bottom: 1px solid grey;" align="center" height="14"><?php echo $row_datos_estudiantes_detallado['apellidos_madre']; ?></td>

        <td style="width:12%; padding-left: 5px;" align="left" height="14"><b>Nombres:</b></td>
        <td style="width:24%;  border-bottom: 1px solid grey;" align="center" height="14"><?php echo $row_datos_estudiantes_detallado['nombres_madre']; ?></td>

        <td style="width:13%; padding-left: 5px;" align="left" height="14"><b>Está viva?:</b></td>
        <td style="width:13%; border-bottom: 1px solid grey;" align="center" height="14">
          <?php if ($row_datos_estudiantes_detallado["nombre_respuesta"]=='.') { $nombre_respuestaa = '';} else {$nombre_respuestaa = $row_datos_estudiantes_detallado["nombre_respuesta"];}
                      
          echo $nombre_respuestaa; ?></td>

 
       
    </TR>


    <TR>

        <td style="width:9%; padding-left: 5px;" align="left" height="12"><b>Doc. Id:</b></td>
        <td style="width:28%;  border-bottom: 1px solid grey; font-size: 12px;" align="center" height="12">
          <?php echo $row_datos_estudiantes_detallado["ci_madre"]; ?></td>

        <td style="width:12%; padding-left: 5px;" align="left" height="12"><b>Nacionalidad:</b></td>
        <td style="width:24%;  border-bottom: 1px solid grey;" align="center" height="12">
<?php if ($row_datos_estudiantes_detallado["nombre_pais"]=='.') { $nombre_paisa = '';} else {$nombre_paisa = $row_datos_estudiantes_detallado["nombre_pais"];}
echo $nombre_paisa; ?></td>

        <td style="width:13%; padding-left: 5px;" align="left" height="12"><b>Religíon:</b></td>
        <td style="width:13%; border-bottom: 1px solid grey;" align="center" height="12">
<?php if ($row_datos_estudiantes_detallado["tipo_religion"]=='.') { $tipo_religiona = '';} else {$tipo_religiona = $row_datos_estudiantes_detallado["tipo_religion"];}
echo $tipo_religiona; ?></td>

        

        
        
    </TR>


    <TR>


        <td style="width:9%; padding-left: 5px;" align="left" height="12"><b>Edo.Civil:</b></td>
        <td style="width:28%;  border-bottom: 1px solid grey;" align="center" height="12">
<?php if ($row_datos_estudiantes_detallado["nombre_estado_civil"]=='.') { $nombre_estado_civila = '';} else {$nombre_estado_civila = $row_datos_estudiantes_detallado["nombre_estado_civil"];}
echo $nombre_estado_civila; ?></td>

        <td style="width:12%; padding-left: 5px; font-size: 11px;" align="left" height="12"><b>Profesión/Oficio:</b></td>
        <td style="width:24%;  border-bottom: 1px solid grey;" align="center" height="12">
<?php if ($row_datos_estudiantes_detallado["nombre_profesion"]=='.') { $nombre_profesiona = '';} else {$nombre_profesiona = $row_datos_estudiantes_detallado["nombre_profesion"];}
echo $nombre_profesiona; ?></td>

        <td style="width:13%; padding-left: 5px;" align="left" height="12"><b>Ex Alumno?:</b></td>
        <td style="width:13%; border-bottom: 1px solid grey;" align="center" height="12">
<?php if ($row_datos_estudiantes_detallado["nombre_respuesta2"]=='.') { $nombre_respuesta2a = '';} else {$nombre_respuesta2a = $row_datos_estudiantes_detallado["nombre_respuesta2"];}
echo $nombre_respuesta2a; ?></td>
   

        

      
       
    </TR>

        
</TABLE>


<TABLE class="basetabla " style="margin-top: 2px;" cellspacing="-1"> 
   
    <TR>

        <td style="width:17%; padding-left: 5px;" align="left" height="12"><b>Teléf. de Contacto:</b></td>
        <td style="width:15%;  border-bottom: 1px solid grey;" align="center" height="12"><?php echo $row_datos_estudiantes_detallado['tlf_contacto_madre']; ?></td>
        <td style="width:6%; padding-left: 5px;" align="left" height="12"><b>Email:</b></td>
        <td style="width:40%;  border-bottom: 1px solid grey;" align="center" height="12"><?php echo $row_datos_estudiantes_detallado['email_madre']; ?></td>
        <td style="width:16%; padding-left: 5px;" align="left" height="12"><b>Vive en el país?:</b></td>
        <td style="width:5%;  border-bottom: 1px solid grey;" align="center" height="12"><?php echo $row_datos_estudiantes_detallado['fuera_pais_madre']; ?></td>
         
       
    </TR>

        
</TABLE>




<TABLE class="basetabla " style="margin-top: 2px;" cellspacing="-1"> 

  <TR>
   
  <td style="width:10%; padding-left: 5px;" align="left" height="14"><b>Dirección:</b></td>

  <td style="width:89%; border-bottom: 1px solid grey;" align="center" height="14">
    
        <?php if ($row_datos_estudiantes_detallado['nombre_ciudad']=='.') { $nombre_ciudada = '';} else {$nombre_ciudada = $row_datos_estudiantes_detallado['nombre_ciudad'];}
echo $nombre_ciudada; ?>, <?php if ($row_datos_estudiantes_detallado['nombre_municipio']=='.') { $nombre_municipioa = '';} else {$nombre_municipioa = $row_datos_estudiantes_detallado['nombre_municipio'];}
echo $nombre_municipioa; ?>, <?php if ($row_datos_estudiantes_detallado['nombre_parroquia']=='.') { $nombre_parroquiaa = '';} else {$nombre_parroquiaa = $row_datos_estudiantes_detallado['nombre_parroquia'];}
echo $nombre_parroquiaa; ?>, <?php echo $row_datos_estudiantes_detallado['datos_vivienda_madre']; ?>.


  </td> 

      
  </TR>

</TABLE>





<?php
$cargo_del = fgets(fopen($colegiatura, 'r'));
include("../../conectar.php");

 

$query_detalladop = "SELECT * FROM reg_padre, respuestas, d_paises, religiones, tb_estado_civil, d_ciudades, d_municipio, d_parroquia, tb_profesiones, respuestas2

    
         WHERE   reg_padre.id_estud = '$id_del_estudent'
         and respuestas.id_respuesta = reg_padre.id_padre_vive
         and d_paises.id_pais = reg_padre.nac_padre

         and religiones.id_religion = reg_padre.religion_padre
         and tb_estado_civil.id_estado_civil = reg_padre.civil_padre
         and d_ciudades.id_ciudad = reg_padre.id_ciudad_padre
         and d_municipio.id_municipio = reg_padre.id_municipio_padre

          and d_parroquia.id_parroquia = reg_padre.id_parroquia_padre
         and tb_profesiones.id_profesion = reg_padre.id_profesion_padre
         and respuestas2.id_respuesta2 = reg_padre.ex_alumno_padre

   
         ORDER BY id_padre limit 1 ";

$datos_estudiantes_detalladop = mysqli_query($enlace, $query_detalladop) or die(mysqli_error());

$row_datos_estudiantes_detalladop = mysqli_fetch_array($datos_estudiantes_detalladop); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estudiantes_detalladop = mysqli_num_rows($datos_estudiantes_detalladop); 




   mysqli_close($enlace);    


?>






<span style="margin-top: 10px; font-size: 12px;"><B>* DATOS DEL PADRE:</B> </span>


<TABLE class="basetabla " style="margin-top: 14px;" cellspacing="-1"> 
   
    <TR>

        <td style="width:9%; padding-left: 5px;" align="left" height="14"><b>Apellidos:</b></td>
        <td style="width:28%;  border-bottom: 1px solid grey;" align="center" height="14"><?php echo $row_datos_estudiantes_detalladop['apellidos_padre']; ?></td>

        <td style="width:12%; padding-left: 5px;" align="left" height="14"><b>Nombres:</b></td>
        <td style="width:24%;  border-bottom: 1px solid grey;" align="center" height="14"><?php echo $row_datos_estudiantes_detalladop['nombres_padre']; ?></td>

        <td style="width:13%; padding-left: 5px;" align="left" height="14"><b>Está vivo?:</b></td>
        <td style="width:13%; border-bottom: 1px solid grey;" align="center" height="14">
          <?php if ($row_datos_estudiantes_detalladop["nombre_respuesta"]=='.') { $nombre_respuestaap = '';} else {$nombre_respuestaap = $row_datos_estudiantes_detalladop["nombre_respuesta"];}
                      
          echo $nombre_respuestaap; ?></td>

 
       
    </TR>


    <TR>

        <td style="width:9%; padding-left: 5px;" align="left" height="12"><b>Doc. Id:</b></td>
        <td style="width:28%;  border-bottom: 1px solid grey; font-size: 12px;" align="center" height="12">
          <?php echo $row_datos_estudiantes_detalladop["ci_padre"]; ?></td>

        <td style="width:12%; padding-left: 5px;" align="left" height="12"><b>Nacionalidad:</b></td>
        <td style="width:24%;  border-bottom: 1px solid grey;" align="center" height="12">
<?php if ($row_datos_estudiantes_detalladop["nombre_pais"]=='.') { $nombre_paisap = '';} else {$nombre_paisap = $row_datos_estudiantes_detalladop["nombre_pais"];}
echo $nombre_paisap; ?></td>

        <td style="width:13%; padding-left: 5px;" align="left" height="12"><b>Religíon:</b></td>
        <td style="width:13%; border-bottom: 1px solid grey;" align="center" height="12">
<?php if ($row_datos_estudiantes_detalladop["tipo_religion"]=='.') { $tipo_religionap = '';} else {$tipo_religionap = $row_datos_estudiantes_detalladop["tipo_religion"];}
echo $tipo_religionap; ?></td>

        

        
        
    </TR>


    <TR>


        <td style="width:9%; padding-left: 5px;" align="left" height="12"><b>Edo.Civil:</b></td>
        <td style="width:28%;  border-bottom: 1px solid grey;" align="center" height="12">
<?php if ($row_datos_estudiantes_detalladop["nombre_estado_civil"]=='.') { $nombre_estado_civilap = '';} else {$nombre_estado_civilap = $row_datos_estudiantes_detalladop["nombre_estado_civil"];}
echo $nombre_estado_civilap; ?></td>

        <td style="width:12%; padding-left: 5px; font-size: 11px;" align="left" height="12"><b>Profesión/Oficio:</b></td>
        <td style="width:24%;  border-bottom: 1px solid grey;" align="center" height="12">
<?php if ($row_datos_estudiantes_detalladop["nombre_profesion"]=='.') { $nombre_profesionap = '';} else {$nombre_profesionap = $row_datos_estudiantes_detalladop["nombre_profesion"];}
echo $nombre_profesionap; ?></td>

        <td style="width:13%; padding-left: 5px;" align="left" height="12"><b>Ex Alumno?:</b></td>
        <td style="width:13%; border-bottom: 1px solid grey;" align="center" height="12">
<?php if ($row_datos_estudiantes_detalladop["nombre_respuesta2"]=='.') { $nombre_respuesta2ap = '';} else {$nombre_respuesta2ap = $row_datos_estudiantes_detalladop["nombre_respuesta2"];}
echo $nombre_respuesta2ap; ?></td>
   

        

      
       
    </TR>

        
</TABLE>


<TABLE class="basetabla " style="margin-top: 2px;" cellspacing="-1"> 
   
    <TR>

        <td style="width:17%; padding-left: 5px;" align="left" height="12"><b>Teléf. de Contacto:</b></td>
        <td style="width:15%;  border-bottom: 1px solid grey;" align="center" height="12"><?php echo $row_datos_estudiantes_detalladop['tlf_contacto_padre']; ?></td>
        <td style="width:6%; padding-left: 5px;" align="left" height="12"><b>Email:</b></td>
        <td style="width:40%;  border-bottom: 1px solid grey;" align="center" height="12"><?php echo $row_datos_estudiantes_detalladop['email_padre']; ?></td>
        <td style="width:16%; padding-left: 5px;" align="left" height="12"><b>Vive en el país?:</b></td>
        <td style="width:5%;  border-bottom: 1px solid grey;" align="center" height="12"><?php echo $row_datos_estudiantes_detalladop['fuera_pais_padre']; ?></td>
         
       
    </TR>

        
</TABLE>




<TABLE class="basetabla " style="margin-top: 2px;" cellspacing="-1"> 

  <TR>
   
  <td style="width:10%; padding-left: 5px;" align="left" height="14"><b>Dirección:</b></td>

  <td style="width:89%; border-bottom: 1px solid grey;" align="center" height="14">
    
        <?php if ($row_datos_estudiantes_detalladop['nombre_ciudad']=='.') { $nombre_ciudadap = '';} else {$nombre_ciudadap = $row_datos_estudiantes_detalladop['nombre_ciudad'];}
echo $nombre_ciudadap; ?>, <?php if ($row_datos_estudiantes_detalladop['nombre_municipio']=='.') { $nombre_municipioap = '';} else {$nombre_municipioap = $row_datos_estudiantes_detalladop['nombre_municipio'];}
echo $nombre_municipioap; ?>, <?php if ($row_datos_estudiantes_detalladop['nombre_parroquia']=='.') { $nombre_parroquiaap = '';} else {$nombre_parroquiaap = $row_datos_estudiantes_detalladop['nombre_parroquia'];}
echo $nombre_parroquiaap; ?>, <?php echo $row_datos_estudiantes_detalladop['datos_vivienda_padre']; ?>.


  </td> 

      
  </TR>

</TABLE>



<HR style="margin-top: 0px;">

<span style="margin-top: 0px; font-size: 12px;"><B>DATOS DEL REPRESENTANTE LEGAL:</B> </span>


<TABLE class="basetabla " style="margin-top: 2px;" cellspacing="-1"> 
   
    <TR>

        <td style="width:9%; padding-left: 5px;" align="left" height="18"><b>Apellidos:</b></td>
        <td style="width:30%;  border-bottom: 1px solid grey;" align="center" height="18"><?php echo $_POST["apellidos_reprexxx"]; ?></td>

        <td style="width:12%; padding-left: 5px;" align="left" height="18"><b>Nombres:</b></td>
        <td style="width:24%;  border-bottom: 1px solid grey;" align="center" height="18"><?php echo $_POST["nombres_reprexxx"]; ?></td>

        <td style="width:11%; padding-left: 5px;" align="left" height="18"><b>Sexo:</b></td>
        <td style="width:13%; border-bottom: 1px solid grey;" align="center" height="18"><?php echo $_POST["sexo_reprexxx"]; ?></td>

        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>
       
    </TR>


    <TR>

        <td style="width:9%; padding-left: 5px;" align="left" height="14"><b>Email:</b></td>
        <td style="width:30%;  border-bottom: 1px solid grey; font-size: 12px;" align="center" height="14"><?php echo $_POST["email_reprexxx"]; ?></td>

        <td style="width:12%; padding-left: 5px; font-size: 11px;" align="left" height="14"><b>Profesión/Oficio:</b></td>
        <td style="width:24%;  border-bottom: 1px solid grey;" align="center" height="14"><?php echo $_POST["oficio_reprexxx"]; ?></td>

        <td style="width:11%; padding-left: 5px;" align="left" height="14"><b>Parentesco:</b></td>
        <td style="width:13%; border-bottom: 1px solid grey;" align="center" height="14"><?php echo $_POST["parentesco_reprexxx"]; ?></td>

        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>

        
        
    </TR>


    <TR>


        <td style="width:9%; padding-left: 5px;" align="left" height="14"><b>Cedula:</b></td>
        <td style="width:30%;  border-bottom: 1px solid grey;" align="center" height="14"><?php echo $_POST["ci_reprexxx"]; ?></td>

        <td style="width:12%; padding-left: 5px;" align="left" height="14"><b>Tlf. Celular:</b></td>
        <td style="width:24%;  border-bottom: 1px solid grey;" align="center" height="14"><?php echo $_POST["cel_reprexxx"]; ?></td>

        <td style="width:11%; padding-left: 5px;" align="left" height="14"><b>Tlf. Local:</b></td>
        <td style="width:13%; border-bottom: 1px solid grey;" align="center" height="14"><?php echo $_POST["tel_reprexxx"]; ?></td>

        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>

      
       
    </TR>

        
</TABLE>



<?php
include("../../conectar.php");
$query_detalladop_sobre = "SELECT id_reg_estu_sobre, id_estud, areas_pendientes FROM reg_estu_sobre    
         WHERE   id_estud = '$id_del_estudent'
         limit 1 ";

$datos_estudiantes_detalladop_sobre = mysqli_query($enlace, $query_detalladop_sobre) or die(mysqli_error());
$row_datos_estudiantes_detalladop_sobre = mysqli_fetch_array($datos_estudiantes_detalladop_sobre); 
   mysqli_close($enlace);    
?>



<HR style="margin-top: 0px;">


<span style="margin-top: 0px; font-size: 12px;"><B>DATOS DEL PLANTEL DE PROCEDENCIA:</B> </span>

<TABLE class="basetabla miniborder_iad" style="margin-top: 2px; padding-bottom: 2px; padding-top: 2px;" cellspacing="-1"> 
  
    <TR>
        <td style="width:8.5%; padding-left: 5px; font-size: 11px;" align="left" height="14"><b>Institución:</b></td>
        <td style="width:25%;  border-bottom: 1px solid grey; font-size: 11px;" align="center" height="14"><?php echo $_POST["plantel_proc_est"]; ?></td>

        <td style="width:6%; padding-left: 5px; font-size: 11px;" align="left" height="14"><b>Estado:</b></td>
        <td style="width:14%;  border-bottom: 1px solid grey; font-size: 11px;" align="center" height="14"><?php echo $_POST["lugar_del_p"]; ?></td>

        <td style="width:5.5%; padding-left: 5px; font-size: 11px;" align="left" height="14"><b>Cursó:</b></td>
        <td style="width:14%;  border-bottom: 1px solid grey; font-size: 11px;" align="center" height="14"><?php echo $_POST["curso_proc_est"]; ?></td>

        <td style="width:10%; padding-left: 5px; font-size: 11px;" align="left" height="14"><b>Año Escolar:</b></td>
        <td style="width:8%;  border-bottom: 1px solid grey; font-size: 11px;" align="center" height="14"><?php echo $_POST["ciclo_cursado"]; ?></td>

        <td style="width:6%; padding-left: 5px; font-size: 11px;" align="left" height="14"><b>Repite:</b></td>
        <td style="width:2.5%;  border-bottom: 1px solid grey; font-size: 11px;" align="center" height="14"><?php echo $_POST["resp_repite"]; ?></td>

        <TD style="width:0.5%; height:auto; color:white;" align="center" >.</TD>       
    </TR>        
</TABLE>

<TABLE class="basetabla miniborder_ibd" style="margin-top: 0px; padding-bottom: 1px; padding-top: 0px;" cellspacing="-1"> 
  
    <TR>
        <td style="width:24%; padding-left: 5px; font-size: 11px;" align="left" height="14"><b>Áreas de formación pendientes:</b></td>
        <td style="width:75.5%;  border-bottom: 1px solid grey; font-size: 11px;" align="left" height="14"><?php echo $row_datos_estudiantes_detalladop_sobre["areas_pendientes"]; ?></td>       

        <TD style="width:0.5%; height:auto; color:white;" align="center" >.</TD>       
    </TR>        
</TABLE>



</div>

<TABLE class="basetabla" style="margin-top: 2px;"> 
    <TR>
        <td style="width:100%; font-size: 14px; color: #200352;" align="center" height="18" ><B>HISTORIAL DEL ESTUDIANTE</B> </td>
    </TR>
</TABLE>



<TABLE class="basetabla bordecompleto" style="margin-top: 1px;" cellspacing="-1"> 

<tr>
  <td style="width:10.7%; font-size: 10px;" align="center" height="18">AÑO ESCOLAR</td>
   <td style="width:14.7%; font-size: 10px;" align="center" height="18">AÑO ó GRADO</td>
   <td style="width:7.2%; font-size: 9px;" align="center" height="18">REPITE</td>
   <td style="width:12.2%; font-size: 9px;" align="center" height="18">FECHA DE INSCRIPCIÓN</td>

   <td style="width:7.2%; font-size: 9px;" align="center" height="18">EDAD</td>
   <td style="width:9.2%; font-size: 9px;" align="center" height="18">TALLA DE CAMISA</td>
   <td style="width:10.2%; font-size: 9px;" align="center" height="18">TALLA DE PANTALON</td>
   <td style="width:9.2%; font-size: 9px;" align="center" height="18">TALLA DE ZAPATOS</td>

   <td style="width:9.2%; font-size: 9px;" align="center" height="18">PESO</td>
   <td style="width:10.2%; font-size: 9px;" align="center" height="18">ESTATURA</td>
</tr>



<?php

$id_del_estudent = $_POST['id_estudxxx'];

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




while( $row_q_reg_estu_actual = mysqli_fetch_array($q_reg_estu_actual)){ 


?>



<tr>

   <td style="width:10.7%; font-size: 12px;" align="center" height="12"><?php echo $row_q_reg_estu_actual['periodo_escolar']; ?></td>
   <td style="width:14.7%; font-size: 12px;" align="center" height="12"><?php echo $row_q_reg_estu_actual['nombre_grados']; ?></td>
   <td style="width:7.2%; color:grey; " align="center" height="12"><b><?php echo $row_q_reg_estu_actual['nombre_respuesta']; ?></b></td>
    <td style="width:12.2%;" align="center" height="12"><?php

if ($row_q_reg_estu_actual['fecha_inscripcion'] !="") {

  $fecha_insc_corre = date('d-m-Y', strtotime($row_q_reg_estu_actual['fecha_inscripcion']));
}

else {$fecha_insc_corre="";}



     echo $fecha_insc_corre; ?></td>

   <td style="width:7.2%;" align="center" height="12"><b><?php echo $row_q_reg_estu_actual['nombre_edad']; ?></b></td>

   <td style="width:9.2%;" align="center" height="12"><?php echo $row_q_reg_estu_actual['talla_camisa']; ?></td>
   <td style="width:10.2%;" align="center" height="12"><?php echo $row_q_reg_estu_actual['nombre_pantalon']; ?></td>
   <td style="width:9.2%;" align="center" height="12"><?php echo $row_q_reg_estu_actual['talla_zapato']; ?></td>

   <td style="width:9.2%; color:grey;" align="center" height="12"><b><?php echo $row_q_reg_estu_actual['nombre_peso']; ?> Kg</b></td>
   <td style="width:10.2%;" align="center" height="12"><?php echo $row_q_reg_estu_actual['nombre_altura']; ?> cms</td>


</tr>


<?php
                }
                ?>





<?php 

$repetir_por = 8 - $q_reg_estu_actual_cuenta;

while( $repetir_por > 1  ){ 

?>



<tr>

   <td style="width:10.7%; color:white; " align="center" height="12">ALT</td>
   <td style="width:14.7%; color:white; " align="center" height="12"></td>
   <td style="width:7.2%; color:white; " align="center" height="12"></td>
    <td style="width:12.2%; color:white;" align="center" height="12"></td>

   <td style="width:7.2%; color:white;" align="center" height="12"></td>

   <td style="width:9.2%; color:white;" align="center" height="12"></td>
   <td style="width:10.2%; color:white;" align="center" height="12"></td>
   <td style="width:9.2%; color:white;" align="center" height="12"></td>

   <td style="width:9.2%; color:white;" align="center" height="12"></td>
   <td style="width:10.2%; color:white;" align="center" height="12"></td>


</tr>


<?php
 $repetir_por--;    }
                ?>




</TABLE>


</page>




<page>


<?php


include("../../conectar.php");

        $reg_estu_actualyy = "SELECT * FROM  temporada_escolar, grados, edades, tall_cam, tall_pant, pesos, alturas,  reg_estu_actual  
           WHERE  temporada_escolar.id_periodo_es = reg_estu_actual.cursa_actualmente

             and  grados.id_grado  = reg_estu_actual.grado_actual
             
             and  edades.id_edad  = reg_estu_actual.edad_actual
             and  tall_cam.id_camisa = reg_estu_actual.t_camisa_act
             and  tall_pant.id_pantalon = reg_estu_actual.t_pantalon_act
             
             and  pesos.id_peso = reg_estu_actual.peso_act
             and  alturas.id_altura = reg_estu_actual.estatura_act
                       
             and reg_estu_actual.id_estud = '$id_del_estudent'
          ORDER BY id_reg_estu_actual DESC LIMIT 1  ";   // maximo me mostrara los ultimos 7

$q_reg_estu_actualyy = mysqli_query($enlace, $reg_estu_actualyy) or die(mysqli_error());

   
$q_reg_estu_actualyy_dato = mysqli_fetch_array($q_reg_estu_actualyy); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);


mysqli_close($enlace);

?>




<TABLE class="basetabla miniborder_AAA" style="margin-top: 36px;" cellspacing="-1">    
    <TR>
        <td style="width:35%; padding-left: 5px; font-size: 12px;" align="left" height="14"><b>Enfermedades que ha padecido el estudiante:</b></td>
        <td style="width:63%;  border-bottom: 1px solid grey; font-size: 12px;" align="left" height="14"><?php echo $_POST["enf_padecidas_estxxx"]; ?></td>
        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>       
    </TR>          
</TABLE>

<TABLE class="basetabla miniborder_AAA" style="margin-top: 4px;" cellspacing="-1">    
    <TR>
        <td style="width:35%; padding-left: 5px; font-size: 12px;" align="left" height="14"><b>Enfermedades que padece el estudiante:</b></td>
        <td style="width:63%;  border-bottom: 1px solid grey; font-size: 12px;" align="left" height="14"><?php echo $_POST["padece_estuxxx"]; ?></td> 
        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>       
    </TR>          
</TABLE>

<TABLE class="basetabla miniborder_AAA" style="margin-top: 4px;" cellspacing="-1">    
    <TR>
        <td style="width:30%; padding-left: 5px; font-size: 12px;" align="left" height="14"><b>El estudiante es alérgico a:</b></td>
        <td style="width:68%;  border-bottom: 1px solid grey; font-size: 12px;" align="left" height="14"><?php echo $_POST["alergico_a_estxxx"]; ?></td>
        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>       
    </TR> 
</TABLE>

<TABLE class="basetabla miniborder_g" style="margin-top: 4px;" cellspacing="-1">    
    <TR>
        <td style="width:55%; padding-left: 5px; font-size: 12px;" align="left" height="14"><b>El estudiante se encuentra en control médico con un especialista en:</b></td>
        <td style="width:43%;  border-bottom: 1px solid grey; font-size: 12px;" align="left" height="14"><?php echo $q_reg_estu_actualyy_dato_qq_more['control_med']; ?></td>
        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>       
    </TR> 
</TABLE>

<TABLE class="basetabla miniborder_g" style="margin-top: 4px;" cellspacing="-1">    
    <TR>
        <td style="width:40%; padding-left: 5px; font-size: 12px;" align="left" height="14"><b>¿El estudiante recibe medicación? ¿Cuál(es)?:</b></td>
        <td style="width:58%;  border-bottom: 1px solid grey; font-size: 12px;" align="left" height="14"><?php echo $q_reg_estu_actualyy_dato_qq_more['medicamentos']; ?></td>
        <TD style="width:1%; height:auto; color:white;" align="center" >.</TD>       
    </TR>          
</TABLE>




<TABLE class="basetabla miniborder_A" style="margin-top: 6px;" cellspacing="-1"> 
       <TR>
        <td style="width:80%; padding-left: 5px;" align="left" height="18"><b>Control de vacunas:</b></td>
        <td style="width:19%;" align="center" height="18"></td>         
    </TR>       
</TABLE>

<TABLE class="basetabla miniborder_B" style="margin-top: -1px; padding-top: 3px; padding-bottom: 6px;" cellspacing="-1"> 
<TR>
        <td style="width:1.5%;  padding-left: 5px; " align="center" height="18"></td>
        <td style="width:5.25%;  padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v1']; ?> </td>
        <td style="width:27.5%; padding-left: 5px;" align="left" height="18"><b>Antipoliomelitis(bpi).</b></td>

        <td style="width:3.25%; padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v2']; ?> </td>
        <td style="width:11%; padding-left: 5px;" align="left" height="18"><b>BCG.</b></td>      

        <td style="width:3.25%; padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v3']; ?> </td>
        <td style="width:10%; padding-left: 5px;" align="left" height="18"><b>Difteria.</b></td>      

        <td style="width:3.25%; padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v4']; ?> </td>
        <td style="width:17.75%; padding-left: 5px; font-size: 13px;" align="left" height="18"><b>Anti Influenza.</b></td>

        <td style="width:3.25%; padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v5']; ?> </td>
        <td style="width:13%; padding-left: 5px;" align="left" height="18"><b>Hepatitis A.</b></td>   
                        
</TR>

<TR>
        <td style="width:1.5%;  padding-left: 5px; " align="center" height="18"></td>
        <td style="width:5.25%;  padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v6']; ?> </td>
        <td style="width:27.5%; padding-left: 5px;" align="left" height="18"><b>TosFerina (DTpa).</b></td>

        <td style="width:3.25%; padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v7']; ?> </td>
        <td style="width:11%; padding-left: 5px;" align="left" height="18"><b>HB.</b></td>      

        <td style="width:3.25%; padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v8']; ?> </td>
        <td style="width:10%; padding-left: 5px;" align="left" height="18"><b>Tétanos.</b></td>      

        <td style="width:3.25%; padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v9']; ?> </td>
        <td style="width:17.75%; padding-left: 5px;" align="left" height="18"><b>Rotavirus.</b></td>

        <td style="width:3.25%; padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v10']; ?> </td>
        <td style="width:13%; padding-left: 5px;" align="left" height="18"><b>Rubéola.</b></td> 
                        
</TR>


<TR>
        <td style="width:1.5%;  padding-left: 5px; " align="center" height="18"></td>
        <td style="width:5.25%;  padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v11']; ?> </td>
        <td style="width:27.5%; padding-left: 5px;" align="left" height="18"><b>Parotiditis (SRP).</b></td>

        <td style="width:3.25%; padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v12']; ?> </td>
        <td style="width:11%; padding-left: 5px;" align="left" height="18"><b>Covid-19.</b></td>      

        <td style="width:3.25%; padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v13']; ?> </td>
        <td style="width:10%; padding-left: 5px;" align="left" height="18"><b>Varicela.</b></td>      

        <td style="width:3.25%; padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v14']; ?> </td>
        <td style="width:17.75%; padding-left: 5px;" align="left" height="18"><b>Fiebre Amarilla.</b></td>

         <td style="width:3.25%; padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v15']; ?> </td>
        <td style="width:13%; padding-left: 5px;" align="left" height="18"><b>Sarampión.</b></td> 
                       
</TR>

<TR>
        <td style="width:1.5%;  padding-left: 5px; " align="center" height="18"></td>
        <td style="width:5.25%;  padding-left: 5px; font-size: 12px; " align="left" height="18"><b>Otra(s):</b></td>
        <td style="width:27.5%; padding-left: 5px; border-bottom: 1px solid grey;" align="left" height="18"><?php echo $q_reg_estu_actualyy_dato_qq_more['v_otra']; ?> </td>

       <td style="width:3.25%; padding-left: 5px;" align="center" height="18"></td>
        <td style="width:11%; padding-left: 5px;" align="left" height="18"></td>      

       <td style="width:3.25%; padding-left: 5px; " align="center" height="18"></td>
        <td style="width:10%; padding-left: 5px; " align="center" height="18"></td>   

        <td style="width:3.25%; padding-left: 5px; " align="center" height="18"></td>
        <td style="width:17.75%; padding-left: 5px; " align="center" height="18"></td>

         <td style="width:3.25%; padding-left: 5px; " align="center" height="18"></td>
        <td style="width:13%; padding-left: 5px; " align="center" height="18"></td>
                        
</TR>
</TABLE>


<div style="background:url(water_mark.png); background-repeat:no-repeat;" >

<table class="basetabla" style="margin-top: 24px;" >
 <tr> 


<td style="width:100%; font-size: 14px; " align="center" height="14" ><B>ACTA DE ACEPTACIÓN DE LOS ACUERDOS DE CONVIVENCIA</B> </td>

</tr>
</table>

<table class="basetabla" style="margin-top: 6px;" >
<TR >

  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"> </TD>
  <TD style="width:4%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left">Yo,</TD>
  <td style="width:42%;  border-bottom: 1px solid grey; font-size: 14px;" align="center" height="18"><?php echo $_POST["apellidos_reprexxx"]; ?>, <?php echo $_POST["nombres_reprexxx"]; ?> </td>
    <TD style="width:29%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="center">titular de la cédula de identidad</TD>
    <td style="width:15%;  border-bottom: 1px solid grey; font-size: 14px;" align="center" height="18"><?php echo $_POST["ci_reprexxx"]; ?></td>        
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"> </TD> 

</TR>
</TABLE>

<TABLE class="basetabla" style="margin-top: 0px; padding-bottom: 6px;" cellspacing="-1"> 
<TR >
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD>
  <TD style="width:90%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14">mayor de edad, hábil en cuanto a derecho se requiere, actuando en mi propio nombre y en representación de</TD> 
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD> 
</TR>
</TABLE>

<TABLE class="basetabla" style="margin-top: 0px; padding-bottom: 6px;" cellspacing="-1"> 
<TR >
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD>
  <td style="width:47%;  border-bottom: 1px solid grey; font-size: 14px;" align="center" height="14"><b><?php echo $_POST["apellidos_estuxxx"]; ?></b>, <?php echo $_POST["nombres_estuxxx"]; ?></td>
  <TD style="width:42%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="center"  height="14">a continuación identificada(o), estudiante del o la</TD> 
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"> </TD> 
</TR>

</table>



<TABLE class="basetabla" style="margin-top: 0px; padding-bottom: 6px;" cellspacing="-1"> 

<TR >
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD>
  <TD style="width:90%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"><b><?php echo $row_datos_queryplantel['nombre_plantel']; ?></b>, cursante de 
    <b><?php echo $q_reg_estu_actualyy_dato['nombre_grados']; ?></b> y con <b><?php echo $q_reg_estu_actualyy_dato['nombre_edad']; ?></b> años de edad.</TD> 
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD> 
</TR>
</TABLE>


<TABLE class="basetabla" style="margin-top: 0px; padding-bottom: 6px;" cellspacing="-1"> 

<TR >
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD>
  <TD style="width:90%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14">Declaro que <b>HE LEIDO, CONOZCO Y ACEPTO</b>, Los Acuerdos de Convivencia del o la <b><?php echo $row_datos_queryplantel['nombre_plantel']; ?></b>.</TD> 
   <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD> 
</TR>
</TABLE>






<table class="basetabla" style="margin-top: 20px;" >
 <tr> 

<td style="width:100%; font-size: 14px; " align="center" height="14" ><B>ACTA COMPROMISO DE PAGO</B> </td>

</tr>
</table>


<table class="basetabla" style="margin-top: 6px;" >
<TR >

  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"> </TD>
  <TD style="width:4%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left">Yo,</TD>
  <td style="width:42%;  border-bottom: 1px solid grey; font-size: 14px;" align="center" height="18"><?php echo $_POST["apellidos_reprexxx"]; ?>, <?php echo $_POST["nombres_reprexxx"]; ?> </td>
    <TD style="width:29%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="center">titular de la cédula de identidad</TD>
    <td style="width:15%;  border-bottom: 1px solid grey; font-size: 14px;" align="center" height="18"><?php echo $_POST["ci_reprexxx"]; ?></td>        
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"> </TD> 

</TR>
</TABLE>

<TABLE class="basetabla" style="margin-top: 0px; padding-bottom: 6px;" cellspacing="-1"> 
<TR >
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD>
  <TD style="width:90%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14">mayor de edad, hábil en cuanto a derecho se requiere, actuando en mi propio nombre y en representación de</TD> 
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD> 
</TR>
</TABLE>

<TABLE class="basetabla" style="margin-top: 0px; padding-bottom: 6px;" cellspacing="-1"> 
<TR >
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD>
  <td style="width:44%;  border-bottom: 1px solid grey; font-size: 14px;" align="center" height="14"><b><?php echo $_POST["apellidos_estuxxx"]; ?></b>, <?php echo $_POST["nombres_estuxxx"]; ?></td>
  <TD style="width:45%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14">cursante de 
    <b><?php echo $q_reg_estu_actualyy_dato['nombre_grados']; ?></b> y con <b><?php echo $q_reg_estu_actualyy_dato['nombre_edad']; ?></b> años de edad.</TD> 
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"> </TD> 
</TR>

</table>



<TABLE class="basetabla" style="margin-top: 0px; padding-bottom: 6px;" cellspacing="-1"> 

<TR >
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD>
  <TD style="width:90%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14">Formalmente declaro que me constituyo en responsable y principal pagador de las obligaciones surgidas como consecuencia de la inscripción y mensualidades de mi representado(a) ante el o la <b><?php echo $row_datos_queryplantel['nombre_plantel']; ?></b>.</TD> 
   <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD> 
</TR>
</TABLE>




<table class="basetabla" style="margin-top: 20px;" >
 <tr>

<td style="width:100%; font-size: 14px; " align="center" height="14" ><B>ACTA DE COMPROMISO DE MATERIA PENDIENTE</B> </td>
  
</tr>
</table>


<table class="basetabla" style="margin-top: 6px;" >
<TR >

  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"> </TD>
  <TD style="width:4%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left">Yo,</TD>
  <td style="width:42%;  border-bottom: 1px solid grey; font-size: 14px;" align="center" height="18"><?php echo $_POST["apellidos_reprexxx"]; ?>, <?php echo $_POST["nombres_reprexxx"]; ?> </td>
    <TD style="width:29%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="center">titular de la cédula de identidad</TD>
    <td style="width:15%;  border-bottom: 1px solid grey; font-size: 14px;" align="center" height="18"><?php echo $_POST["ci_reprexxx"]; ?></td>        
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"> </TD> 

</TR>
</TABLE>

<TABLE class="basetabla" style="margin-top: 0px; padding-bottom: 6px;" cellspacing="-1"> 
<TR >
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD>
  <TD style="width:90%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14">mayor de edad, hábil en cuanto a derecho se requiere, actuando en mi propio nombre y en representación de</TD> 
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD> 
</TR>
</TABLE>

<TABLE class="basetabla" style="margin-top: 0px; padding-bottom: 6px;" cellspacing="-1"> 
<TR >
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD>
  <td style="width:44%;  border-bottom: 1px solid grey; font-size: 14px;" align="center" height="14"><b><?php echo $_POST["apellidos_estuxxx"]; ?></b>, <?php echo $_POST["nombres_estuxxx"]; ?></td>
  <TD style="width:45%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14">cursante de 
    <b><?php echo $q_reg_estu_actualyy_dato['nombre_grados']; ?></b> y con <b><?php echo $q_reg_estu_actualyy_dato['nombre_edad']; ?></b> años de edad.</TD> 
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"> </TD> 
</TR>

</table>



<TABLE class="basetabla" style="margin-top: 0px; padding-bottom: 6px;" cellspacing="-1"> 

<TR >
  <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD>
  <TD style="width:90%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14">Formalmente declaro que me constituyo en responsable y principal garante para que mi representado(a) cumpla y apruebe las actividades de la(s) materia(s) pendiente(s) en los momentos establecidos.</TD> 
   <TD style="width:5%; margin-top: 4px;  line-height: 24px; font-size: 14px;" align="left"  height="14"> </TD> 
</TR>
</TABLE>





</DIV>









<table class="basetabla" style="margin-top: 26px;" cellspacing="-1">

 <tr>

     <td style="width:4%;" align="center" height="18"></td>

     <td style="width:20%;  " align="center" height="18"></td>
     <td style="width:5%;" align="center" height="18"></td>

     <td style="width:31%; " align="center" height="18"></td>
     <td style="width:5%;" align="center" height="18"></td>

     <td style="width:25%; border-bottom: 1px solid black;" align="center" height="18"></td>
     <td style="width:5%;" align="center" height="18"></td>


  </tr>

  <tr>

     <td style="width:4%;" align="center" height="18"></td>

     <td style="width:20%;" align="center" height="18"></td>
     <td style="width:5%;" align="center" height="18"></td>

     <td style="width:31%;" align="center" height="18"></td>
     <td style="width:5%;" align="center" height="18"></td>

     <td style="width:25%;" align="center" height="18"><b>FIRMA DEL REPRESENTANTE</b></td>
     <td style="width:5%;" align="center" height="18"></td>
  </tr>

</table>







  <TABLE class="basetabla minibordercut" style="margin-top: 8px;"> 
    <TR>
        <td style="width:100%; font-size: 14px; " align="center" height="14" ><B>COMPROBANTE DE RETIRO</B> </td>
    </TR>
</TABLE>


<table class="basetabla" style="margin-top: 0px;" cellspacing="-1">
  <tr>

     <td style="width:10%; font-size: 14px;" align="left" height="14">CAUSAS:</td>
     <td style="width:90%;  border-bottom: 1px solid black;" align="left" height="14"></td>     

  </tr>
</table>




<table class="basetabla" style="margin-top: 10px;" cellspacing="-1">

  <tr>

     <td style="width:10%; font-size: 14px;" align="left" height="18">Caracas,</td>
     <td style="width:7%; font-size: 14px;" align="center" height="18">______</td>
     <td style="width:4%; font-size: 14px;" align="center" height="18">de</td>
     <td style="width:20%; font-size: 14px;" align="center" height="18">___________________</td>
     <td style="width:4%; font-size: 14px;" align="center" height="18">del</td>
     <td style="width:10%; font-size: 14px;" align="center" height="18">________.</td>
     <td style="width:22%; font-size: 14px; color:white;" align="left" height="18">________</td>
     <td style="width:6%; font-size: 14px;" align="left" height="18">Firma:</td>
     <td style="width:17%; font-size: 14px;" align="center" height="18">_________________</td>     

  </tr>

</table>




</page>




<page>


<br>

<div style="background:url(carnet_alt.jpg); margin-top: 10px; background-repeat:no-repeat;">
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

        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">sea autorizado, con firma y</td>       
       
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

      $la_doc_id_es = $_POST["ci_estuxxx"];
  
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
        <td style="width:20%; " align="center" height="18"><b><?php echo $q_reg_estu_actual_pp["periodo_escolar"]; ?></b></td>  
        
        <td style="width:15%;" align="center" height="18" ROWSPAN=6><img style="width:82px;  max-height: auto;" src='../<?php echo $_POST["foto_estuxxx"]; ?>'/></td>
        

        <td style="width:14%;" align="left" height="18" ROWSPAN=6><img style="width:110px;  max-height: auto;" src='../../000 Temporales/<?php echo $contenido; ?>QR.png'/></td>
        <td style="width:25%;" align="center" height="18"></td>

        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">sello de la institución.</td>          
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; font-size: 12px;" align="center" height="18"><b><?php echo $_POST["nombres_estuxxx"]; ?></b></td>
        
        
        

        <td style="width:25%;" align="center" height="18"></td>

        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18"></td>       
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; font-size: 12px;" align="center" height="18"><b><?php echo $_POST["apellidos_estuxxx"]; ?></b></td>
        
        
        

        <td style="width:25%;" align="center" height="18"></td>

         <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">Imprimir, si es posible a</td>         
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%; font-size: 14px;" align="center" height="18"><b>Ci ó Ce: <?php echo $_POST["ci_estuxxx"]; ?></b></td>
        
        
       

        <td style="width:25%;" align="center" height="18"></td>

       <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">color, o con muy buena</td>      
       
    </TR>


        <TR>
       <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
       

                      <td style="width:25%; font-size: 11px; color:#7C0430;" align="center" height="18"><div style="rotate:90; margin-left:56px; margin-top:-120px; ">
         <B><?php echo $cargo_del; ?></B></div></td>

        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18">escala de grises.</td>         
       
    </TR>


        <TR>
        <td style="width:5%;" align="center" height="18"></td>
        <td style="width:20%;" align="center" height="18"></td>
        
       

        <td style="width:25%;" align="center" height="18"></td>

        <td style="width:21% font-size: 12px; color:gray;;" align="center" height="18"></td>       
       
    </TR>



    
   
        
</TABLE>
</div>

</page>


<?php

$continue1 = '<page>';
$continue2 = '</page>';


if ($q_reg_estu_actualyy_dato_qq_more['foto_ci_est'] !='') {
  
  $cedula_Es = $q_reg_estu_actualyy_dato_qq_more['foto_ci_est'];

  echo "$continue1";

  echo "<br>";   echo "<br>";   echo "<br>";   echo "<br>";   echo "<br>";   echo "<br>";   echo "<br>";   echo "<br>";   echo "<br>";
  echo "<br>";   echo "<br>";   echo "<br>";   echo "<br>";   echo "<br>";

  echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img style=\"width:600px; max-height: 450px;\" src=\"../";

  echo "$cedula_Es";

  echo "\" />";

  echo "$continue2";
  
}
?>






<?php

    $contentxx = ob_get_clean(); 

try
    {
        $hixx = $_POST["id_estudxxx"];

        $html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("datos_de_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>