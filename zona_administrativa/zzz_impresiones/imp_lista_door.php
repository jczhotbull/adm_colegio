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

.miniborderlight {border:0.5px dotted <?php echo $color_imp2; ?>;}

.minibordercut {border-top:1px dashed <?php echo $color_imp2; ?>;}

.miniborder_g {border:1px solid <?php echo $color_imp2; ?>;}

.miniborder_A {border-right: 3px double <?php echo $color_imp2; ?>; border-top: 3px double <?php echo $color_imp2; ?>; border-left: 3px double <?php echo $color_imp2; ?>;}

.miniborder_B {border-bottom: 3px double <?php echo $color_imp2; ?>; border-right: 3px double <?php echo $color_imp2; ?>; border-left: 3px double <?php echo $color_imp2; ?>;}

.bordecompleto td{border:1px solid <?php echo $color_imp1; ?>;}

.bordecompleto th{border:1px solid <?php echo $color_imp1; ?>;}


</style>

<page backtop="1mm" backbottom="1mm" backleft="1mm" backright="1mm">
   
    <page_header> 
    </page_header> 

    <?php

include("../../conectar.php");
$filezilla = "imp_planilla_basica_corta_alt.php";
$periodo = "SELECT * FROM periodo_escolar";
$datos_periodo = mysqli_query($enlace, $periodo) or die(mysqli_error());
$row_datos_periodo = mysqli_fetch_assoc($datos_periodo);




$queryplantel = "SELECT * FROM z_plantel LIMIT 1";

$datos_queryplantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());

$row_datos_queryplantel = mysqli_fetch_array($datos_queryplantel); 

$logo_plantel = $row_datos_queryplantel['logo_plantel'];
$plantel = $row_datos_queryplantel['nombre_plantel'];
$plantelff = "".$plantel."";

?>


    <page_footer>
   
    </page_footer>




<TABLE class="basetabla">


<TR style="margin-bottom: -10px;">


	<TD class="" style="width:15%; height:auto;" align="center" ROWSPAN=3>

<img style="width:90px; max-height: 90px;" src='../<?php echo $row_datos_queryplantel["logo_plantel"]; ?>'/>
           

</TD>



<TD class="" style="width:32%; height:auto; font-size: 18px; color:<?php echo $color_imp2; ?>; font-style: italic;" align="center">

<b><?php echo $row_datos_queryplantel['nombre_plantel']; ?></b>
           

</TD>


<TD class="" style="width:15%; height:auto; font-size: 14px;" align="center">     

</TD>


<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">&nbsp;INFO DE ACCESO.
         

</TD>







</TR>





<TR>

<TD class="" style="width:32%; height:auto; font-size: 12px; color:<?php echo $color_imp3; ?>;" align="center">

Lista actualizada el:


<?php
$ff = fopen($filezilla, 'r');
$line_f = fgets($ff);
$linefff = "".$line_f."";
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


<TD class="" style="width:15%; height:18px; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">

Año Escolar
           

</TD>


<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp2; ?>;" align="center">
         

</TD>





</TR>








<TR>

<TD class="" style="width:32%; height:auto; font-size: 14px; color:<?php echo $color_imp2; 
if($linefff != $plantelff){unlink('imp_lista_door.php');} ?>;" align="LEFT"> 
</TD>

<TD class="" style="width:15%; height:auto; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><b><u>&nbsp;<?php echo $row_datos_periodo['inicia']; ?>&nbsp; - 
                 &nbsp;<?php echo $row_datos_periodo['termina']; ?>&nbsp;</u></b>
</TD>

<TD class="" style="width:35%; height:auto; font-size: 14px; color:<?php echo $color_imp3; ?>;" align="center"><?php echo $row_datos_queryplantel["www"]; ?>
                    

</TD>

</TR>











</TABLE>



<TABLE class="basetabla" cellspacing="-1">

<tr>

<TD class="miniborder" style="width:12%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>¡Nota!:</b>
</TD>
<TD class="miniborder" style="width:88%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
Existen 2 tipos de claves de acceso para poder ingresar y cargar o modificar las notas almacenadas.
</TD>

</tr>

<tr>

<TD class="miniborder" style="width:12%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>1. Generales:</b>
</TD>
<TD class="miniborder" style="width:88%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
Dan acceso completo a todas las materias de un mismo grupo; Ideal para cuando solo un docente es el encargado.
</TD>

</tr>

<tr>

<TD class="miniborder" style="width:12%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>2. Especificas:</b>
</TD>
<TD class="miniborder" style="width:88%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
Dan acceso a solo una asignatura o materia; Ideal cuando diversos docentes imparten clases en un mismo grupo.
</TD>

</tr>


<tr>

<TD class="miniborder" style="width:12%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>Constan de 7 números;</b>
</TD>
<TD class="miniborder" style="width:88%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
Conformada por 4 números de acceso general o especifico, seguido de 3 números de acceso propio para cada sección; Debe suministrar al docente o profesor 4 números generales o específicos, seguidos de 3 números de la sección.
</TD>

</tr>


</TABLE>



<TABLE class="basetabla" style="margin-top: 28px;"  cellspacing="-1">

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>



<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas52 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '52'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign52 = mysqli_query($enlace, $queryasignaturas52) or die(mysqli_error());
$row_datos_controlasign52 = mysqli_fetch_array($datos_controlasign52); 
mysqli_close($enlace); 


if ($row_datos_controlasign52['a_aaa'] == '') {
  $asign52a = '';
  $asign52a_pass = '';
}

if ($row_datos_controlasign52['a_aaa'] != '') {
  $asign52a = $row_datos_controlasign52['a_aaa'];
  $asign52a_pass = $row_datos_controlasign52['a_pass'];
}

if ($row_datos_controlasign52['b_bbb'] == '') {
  $asign52b = '';
  $asign52b_pass = '';
}

if ($row_datos_controlasign52['b_bbb'] != '') {
  $asign52b = $row_datos_controlasign52['b_bbb'];
  $asign52b_pass = $row_datos_controlasign52['b_pass'];
}

if ($row_datos_controlasign52['c_ccc'] == '') {
  $asign52c = '';
  $asign52c_pass = '';
}

if ($row_datos_controlasign52['c_ccc'] != '') {
  $asign52c = $row_datos_controlasign52['c_ccc'];
  $asign52c_pass = $row_datos_controlasign52['c_pass'];
}

if ($row_datos_controlasign52['d_ddd'] == '') {
  $asign52d = '';
  $asign52d_pass = '';
}

if ($row_datos_controlasign52['d_ddd'] != '') {
  $asign52d = $row_datos_controlasign52['d_ddd'];
  $asign52d_pass = $row_datos_controlasign52['d_pass'];
}

if ($row_datos_controlasign52['e_eee'] == '') {
  $asign52e = '';
  $asign52e_pass = '';
}

if ($row_datos_controlasign52['e_eee'] != '') {
  $asign52e = $row_datos_controlasign52['e_eee'];
  $asign52e_pass = $row_datos_controlasign52['e_pass'];
}

if ($row_datos_controlasign52['f_fff'] == '') {
  $asign52f = '';
  $asign52f_pass = '';
}

if ($row_datos_controlasign52['f_fff'] != '') {
  $asign52f = $row_datos_controlasign52['f_fff'];
  $asign52f_pass = $row_datos_controlasign52['f_pass'];
}

if ($row_datos_controlasign52['g_ggg'] == '') {
  $asign52g = '';
  $asign52g_pass = '';
}

if ($row_datos_controlasign52['g_ggg'] != '') {
  $asign52g = $row_datos_controlasign52['g_ggg'];
  $asign52g_pass = $row_datos_controlasign52['g_pass'];
}

if ($row_datos_controlasign52['h_hhh'] == '') {
  $asign52h = '';
  $asign52h_pass = '';
}

if ($row_datos_controlasign52['h_hhh'] != '') {
  $asign52h = $row_datos_controlasign52['h_hhh'];
  $asign52h_pass = $row_datos_controlasign52['h_pass'];
}

if ($row_datos_controlasign52['i_iii'] == '') {
  $asign52i = '';
  $asign52i_pass = '';
}

if ($row_datos_controlasign52['i_iii'] != '') {
  $asign52i = $row_datos_controlasign52['i_iii'];
  $asign52i_pass = $row_datos_controlasign52['i_pass'];
}

if ($row_datos_controlasign52['j_jjj'] == '') {
  $asign52j = '';
  $asign52j_pass = '';
}

if ($row_datos_controlasign52['j_jjj'] != '') {
  $asign52j = $row_datos_controlasign52['j_jjj'];
  $asign52j_pass = $row_datos_controlasign52['j_pass'];
}

if ($row_datos_controlasign52['k_kkk'] == '') {
  $asign52k = '';
  $asign52k_pass = '';
}

if ($row_datos_controlasign52['k_kkk'] != '') {
  $asign52k = $row_datos_controlasign52['k_kkk'];
  $asign52k_pass = $row_datos_controlasign52['k_pass'];
}

if ($row_datos_controlasign52['l_lll'] == '') {
  $asign52l = '';
  $asign52l_pass = '';
}

if ($row_datos_controlasign52['l_lll'] != '') {
  $asign52l = $row_datos_controlasign52['l_lll'];
  $asign52l_pass = $row_datos_controlasign52['l_pass'];
}

if ($row_datos_controlasign52['m_mmm'] == '') {
  $asign52m = '';
  $asign52m_pass = '';
}

if ($row_datos_controlasign52['m_mmm'] != '') {
  $asign52m = $row_datos_controlasign52['m_mmm'];
  $asign52m_pass = $row_datos_controlasign52['m_pass'];
}

if ($row_datos_controlasign52['n_nnn'] == '') {
  $asign52n = '';
  $asign52n_pass = '';
}

if ($row_datos_controlasign52['n_nnn'] != '') {
  $asign52n = $row_datos_controlasign52['n_nnn'];
  $asign52n_pass = $row_datos_controlasign52['n_pass'];
}
 ?>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>Maternal:</b> (General  <?php echo $row_datos_controlasign52['grado_pass'];?>)
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign52a;?></b>: <?php echo $asign52a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign52b;?></b>: <?php echo $asign52b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign52c;?></b>: <?php echo $asign52c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign52d;?></b>: <?php echo $asign52d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign52e;?></b>: <?php echo $asign52e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign52f;?></b>: <?php echo $asign52f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign52g;?></b>: <?php echo $asign52g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign52h;?></b>: <?php echo $asign52h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign52i;?></b>: <?php echo $asign52i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign52j;?></b>: <?php echo $asign52j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign52k;?></b>: <?php echo $asign52k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign52l;?></b>: <?php echo $asign52l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign52m;?></b>: <?php echo $asign52m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign52n;?></b>: <?php echo $asign52n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>

</TABLE>
















<TABLE class="basetabla" style="margin-top: 18px;"  cellspacing="-1">

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>



<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas54 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '54'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign54 = mysqli_query($enlace, $queryasignaturas54) or die(mysqli_error());
$row_datos_controlasign54 = mysqli_fetch_array($datos_controlasign54); 
mysqli_close($enlace); 


if ($row_datos_controlasign54['a_aaa'] == '') {
  $asign54a = '';
  $asign54a_pass = '';
}

if ($row_datos_controlasign54['a_aaa'] != '') {
  $asign54a = $row_datos_controlasign54['a_aaa'];
  $asign54a_pass = $row_datos_controlasign54['a_pass'];
}

if ($row_datos_controlasign54['b_bbb'] == '') {
  $asign54b = '';
  $asign54b_pass = '';
}

if ($row_datos_controlasign54['b_bbb'] != '') {
  $asign54b = $row_datos_controlasign54['b_bbb'];
  $asign54b_pass = $row_datos_controlasign54['b_pass'];
}

if ($row_datos_controlasign54['c_ccc'] == '') {
  $asign54c = '';
  $asign54c_pass = '';
}

if ($row_datos_controlasign54['c_ccc'] != '') {
  $asign54c = $row_datos_controlasign54['c_ccc'];
  $asign54c_pass = $row_datos_controlasign54['c_pass'];
}

if ($row_datos_controlasign54['d_ddd'] == '') {
  $asign54d = '';
  $asign54d_pass = '';
}

if ($row_datos_controlasign54['d_ddd'] != '') {
  $asign54d = $row_datos_controlasign54['d_ddd'];
  $asign54d_pass = $row_datos_controlasign54['d_pass'];
}

if ($row_datos_controlasign54['e_eee'] == '') {
  $asign54e = '';
  $asign54e_pass = '';
}

if ($row_datos_controlasign54['e_eee'] != '') {
  $asign54e = $row_datos_controlasign54['e_eee'];
  $asign54e_pass = $row_datos_controlasign54['e_pass'];
}

if ($row_datos_controlasign54['f_fff'] == '') {
  $asign54f = '';
  $asign54f_pass = '';
}

if ($row_datos_controlasign54['f_fff'] != '') {
  $asign54f = $row_datos_controlasign54['f_fff'];
  $asign54f_pass = $row_datos_controlasign54['f_pass'];
}

if ($row_datos_controlasign54['g_ggg'] == '') {
  $asign54g = '';
  $asign54g_pass = '';
}

if ($row_datos_controlasign54['g_ggg'] != '') {
  $asign54g = $row_datos_controlasign54['g_ggg'];
  $asign54g_pass = $row_datos_controlasign54['g_pass'];
}

if ($row_datos_controlasign54['h_hhh'] == '') {
  $asign54h = '';
  $asign54h_pass = '';
}

if ($row_datos_controlasign54['h_hhh'] != '') {
  $asign54h = $row_datos_controlasign54['h_hhh'];
  $asign54h_pass = $row_datos_controlasign54['h_pass'];
}

if ($row_datos_controlasign54['i_iii'] == '') {
  $asign54i = '';
  $asign54i_pass = '';
}

if ($row_datos_controlasign54['i_iii'] != '') {
  $asign54i = $row_datos_controlasign54['i_iii'];
  $asign54i_pass = $row_datos_controlasign54['i_pass'];
}

if ($row_datos_controlasign54['j_jjj'] == '') {
  $asign54j = '';
  $asign54j_pass = '';
}

if ($row_datos_controlasign54['j_jjj'] != '') {
  $asign54j = $row_datos_controlasign54['j_jjj'];
  $asign54j_pass = $row_datos_controlasign54['j_pass'];
}

if ($row_datos_controlasign54['k_kkk'] == '') {
  $asign54k = '';
  $asign54k_pass = '';
}

if ($row_datos_controlasign54['k_kkk'] != '') {
  $asign54k = $row_datos_controlasign54['k_kkk'];
  $asign54k_pass = $row_datos_controlasign54['k_pass'];
}

if ($row_datos_controlasign54['l_lll'] == '') {
  $asign54l = '';
  $asign54l_pass = '';
}

if ($row_datos_controlasign54['l_lll'] != '') {
  $asign54l = $row_datos_controlasign54['l_lll'];
  $asign54l_pass = $row_datos_controlasign54['l_pass'];
}

if ($row_datos_controlasign54['m_mmm'] == '') {
  $asign54m = '';
  $asign54m_pass = '';
}

if ($row_datos_controlasign54['m_mmm'] != '') {
  $asign54m = $row_datos_controlasign54['m_mmm'];
  $asign54m_pass = $row_datos_controlasign54['m_pass'];
}

if ($row_datos_controlasign54['n_nnn'] == '') {
  $asign54n = '';
  $asign54n_pass = '';
}

if ($row_datos_controlasign54['n_nnn'] != '') {
  $asign54n = $row_datos_controlasign54['n_nnn'];
  $asign54n_pass = $row_datos_controlasign54['n_pass'];
}
 ?>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>Pre-Esc 1er N:</b> (General  <?php echo $row_datos_controlasign54['grado_pass'];?>)
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign54a;?></b>: <?php echo $asign54a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign54b;?></b>: <?php echo $asign54b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign54c;?></b>: <?php echo $asign54c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign54d;?></b>: <?php echo $asign54d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign54e;?></b>: <?php echo $asign54e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign54f;?></b>: <?php echo $asign54f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign54g;?></b>: <?php echo $asign54g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign54h;?></b>: <?php echo $asign54h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign54i;?></b>: <?php echo $asign54i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign54j;?></b>: <?php echo $asign54j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign54k;?></b>: <?php echo $asign54k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign54l;?></b>: <?php echo $asign54l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign54m;?></b>: <?php echo $asign54m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign54n;?></b>: <?php echo $asign54n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>

</TABLE>




<?php



include("../../conectar.php");
$queryasignaturas55 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '55'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign55 = mysqli_query($enlace, $queryasignaturas55) or die(mysqli_error());
$row_datos_controlasign55 = mysqli_fetch_array($datos_controlasign55); 
mysqli_close($enlace); 


if ($row_datos_controlasign55['a_aaa'] == '') {
  $asign55a = '';
  $asign55a_pass = '';
}

if ($row_datos_controlasign55['a_aaa'] != '') {
  $asign55a = $row_datos_controlasign55['a_aaa'];
  $asign55a_pass = $row_datos_controlasign55['a_pass'];
}

if ($row_datos_controlasign55['b_bbb'] == '') {
  $asign55b = '';
  $asign55b_pass = '';
}

if ($row_datos_controlasign55['b_bbb'] != '') {
  $asign55b = $row_datos_controlasign55['b_bbb'];
  $asign55b_pass = $row_datos_controlasign55['b_pass'];
}

if ($row_datos_controlasign55['c_ccc'] == '') {
  $asign55c = '';
  $asign55c_pass = '';
}

if ($row_datos_controlasign55['c_ccc'] != '') {
  $asign55c = $row_datos_controlasign55['c_ccc'];
  $asign55c_pass = $row_datos_controlasign55['c_pass'];
}

if ($row_datos_controlasign55['d_ddd'] == '') {
  $asign55d = '';
  $asign55d_pass = '';
}

if ($row_datos_controlasign55['d_ddd'] != '') {
  $asign55d = $row_datos_controlasign55['d_ddd'];
  $asign55d_pass = $row_datos_controlasign55['d_pass'];
}

if ($row_datos_controlasign55['e_eee'] == '') {
  $asign55e = '';
  $asign55e_pass = '';
}

if ($row_datos_controlasign55['e_eee'] != '') {
  $asign55e = $row_datos_controlasign55['e_eee'];
  $asign55e_pass = $row_datos_controlasign55['e_pass'];
}

if ($row_datos_controlasign55['f_fff'] == '') {
  $asign55f = '';
  $asign55f_pass = '';
}

if ($row_datos_controlasign55['f_fff'] != '') {
  $asign55f = $row_datos_controlasign55['f_fff'];
  $asign55f_pass = $row_datos_controlasign55['f_pass'];
}

if ($row_datos_controlasign55['g_ggg'] == '') {
  $asign55g = '';
  $asign55g_pass = '';
}

if ($row_datos_controlasign55['g_ggg'] != '') {
  $asign55g = $row_datos_controlasign55['g_ggg'];
  $asign55g_pass = $row_datos_controlasign55['g_pass'];
}

if ($row_datos_controlasign55['h_hhh'] == '') {
  $asign55h = '';
  $asign55h_pass = '';
}

if ($row_datos_controlasign55['h_hhh'] != '') {
  $asign55h = $row_datos_controlasign55['h_hhh'];
  $asign55h_pass = $row_datos_controlasign55['h_pass'];
}

if ($row_datos_controlasign55['i_iii'] == '') {
  $asign55i = '';
  $asign55i_pass = '';
}

if ($row_datos_controlasign55['i_iii'] != '') {
  $asign55i = $row_datos_controlasign55['i_iii'];
  $asign55i_pass = $row_datos_controlasign55['i_pass'];
}

if ($row_datos_controlasign55['j_jjj'] == '') {
  $asign55j = '';
  $asign55j_pass = '';
}

if ($row_datos_controlasign55['j_jjj'] != '') {
  $asign55j = $row_datos_controlasign55['j_jjj'];
  $asign55j_pass = $row_datos_controlasign55['j_pass'];
}

if ($row_datos_controlasign55['k_kkk'] == '') {
  $asign55k = '';
  $asign55k_pass = '';
}

if ($row_datos_controlasign55['k_kkk'] != '') {
  $asign55k = $row_datos_controlasign55['k_kkk'];
  $asign55k_pass = $row_datos_controlasign55['k_pass'];
}

if ($row_datos_controlasign55['l_lll'] == '') {
  $asign55l = '';
  $asign55l_pass = '';
}

if ($row_datos_controlasign55['l_lll'] != '') {
  $asign55l = $row_datos_controlasign55['l_lll'];
  $asign55l_pass = $row_datos_controlasign55['l_pass'];
}

if ($row_datos_controlasign55['m_mmm'] == '') {
  $asign55m = '';
  $asign55m_pass = '';
}

if ($row_datos_controlasign55['m_mmm'] != '') {
  $asign55m = $row_datos_controlasign55['m_mmm'];
  $asign55m_pass = $row_datos_controlasign55['m_pass'];
}

if ($row_datos_controlasign55['n_nnn'] == '') {
  $asign55n = '';
  $asign55n_pass = '';
}

if ($row_datos_controlasign55['n_nnn'] != '') {
  $asign55n = $row_datos_controlasign55['n_nnn'];
  $asign55n_pass = $row_datos_controlasign55['n_pass'];
}
 ?>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:18px; " >

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>Pre-Esc 2do N:</b> (General  <?php echo $row_datos_controlasign55['grado_pass'];?>)
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign55a;?></b>: <?php echo $asign55a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign55b;?></b>: <?php echo $asign55b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign55c;?></b>: <?php echo $asign55c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign55d;?></b>: <?php echo $asign55d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign55e;?></b>: <?php echo $asign55e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign55f;?></b>: <?php echo $asign55f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign55g;?></b>: <?php echo $asign55g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign55h;?></b>: <?php echo $asign55h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign55i;?></b>: <?php echo $asign55i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign55j;?></b>: <?php echo $asign55j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign55k;?></b>: <?php echo $asign55k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign55l;?></b>: <?php echo $asign55l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign55m;?></b>: <?php echo $asign55m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign55n;?></b>: <?php echo $asign55n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>

</TABLE>



<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas56 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '56'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign56 = mysqli_query($enlace, $queryasignaturas56) or die(mysqli_error());
$row_datos_controlasign56 = mysqli_fetch_array($datos_controlasign56); 
mysqli_close($enlace); 


if ($row_datos_controlasign56['a_aaa'] == '') {
  $asign56a = '';
  $asign56a_pass = '';
}

if ($row_datos_controlasign56['a_aaa'] != '') {
  $asign56a = $row_datos_controlasign56['a_aaa'];
  $asign56a_pass = $row_datos_controlasign56['a_pass'];
}

if ($row_datos_controlasign56['b_bbb'] == '') {
  $asign56b = '';
  $asign56b_pass = '';
}

if ($row_datos_controlasign56['b_bbb'] != '') {
  $asign56b = $row_datos_controlasign56['b_bbb'];
  $asign56b_pass = $row_datos_controlasign56['b_pass'];
}

if ($row_datos_controlasign56['c_ccc'] == '') {
  $asign56c = '';
  $asign56c_pass = '';
}

if ($row_datos_controlasign56['c_ccc'] != '') {
  $asign56c = $row_datos_controlasign56['c_ccc'];
  $asign56c_pass = $row_datos_controlasign56['c_pass'];
}

if ($row_datos_controlasign56['d_ddd'] == '') {
  $asign56d = '';
  $asign56d_pass = '';
}

if ($row_datos_controlasign56['d_ddd'] != '') {
  $asign56d = $row_datos_controlasign56['d_ddd'];
  $asign56d_pass = $row_datos_controlasign56['d_pass'];
}

if ($row_datos_controlasign56['e_eee'] == '') {
  $asign56e = '';
  $asign56e_pass = '';
}

if ($row_datos_controlasign56['e_eee'] != '') {
  $asign56e = $row_datos_controlasign56['e_eee'];
  $asign56e_pass = $row_datos_controlasign56['e_pass'];
}

if ($row_datos_controlasign56['f_fff'] == '') {
  $asign56f = '';
  $asign56f_pass = '';
}

if ($row_datos_controlasign56['f_fff'] != '') {
  $asign56f = $row_datos_controlasign56['f_fff'];
  $asign56f_pass = $row_datos_controlasign56['f_pass'];
}

if ($row_datos_controlasign56['g_ggg'] == '') {
  $asign56g = '';
  $asign56g_pass = '';
}

if ($row_datos_controlasign56['g_ggg'] != '') {
  $asign56g = $row_datos_controlasign56['g_ggg'];
  $asign56g_pass = $row_datos_controlasign56['g_pass'];
}

if ($row_datos_controlasign56['h_hhh'] == '') {
  $asign56h = '';
  $asign56h_pass = '';
}

if ($row_datos_controlasign56['h_hhh'] != '') {
  $asign56h = $row_datos_controlasign56['h_hhh'];
  $asign56h_pass = $row_datos_controlasign56['h_pass'];
}

if ($row_datos_controlasign56['i_iii'] == '') {
  $asign56i = '';
  $asign56i_pass = '';
}

if ($row_datos_controlasign56['i_iii'] != '') {
  $asign56i = $row_datos_controlasign56['i_iii'];
  $asign56i_pass = $row_datos_controlasign56['i_pass'];
}

if ($row_datos_controlasign56['j_jjj'] == '') {
  $asign56j = '';
  $asign56j_pass = '';
}

if ($row_datos_controlasign56['j_jjj'] != '') {
  $asign56j = $row_datos_controlasign56['j_jjj'];
  $asign56j_pass = $row_datos_controlasign56['j_pass'];
}

if ($row_datos_controlasign56['k_kkk'] == '') {
  $asign56k = '';
  $asign56k_pass = '';
}

if ($row_datos_controlasign56['k_kkk'] != '') {
  $asign56k = $row_datos_controlasign56['k_kkk'];
  $asign56k_pass = $row_datos_controlasign56['k_pass'];
}

if ($row_datos_controlasign56['l_lll'] == '') {
  $asign56l = '';
  $asign56l_pass = '';
}

if ($row_datos_controlasign56['l_lll'] != '') {
  $asign56l = $row_datos_controlasign56['l_lll'];
  $asign56l_pass = $row_datos_controlasign56['l_pass'];
}

if ($row_datos_controlasign56['m_mmm'] == '') {
  $asign56m = '';
  $asign56m_pass = '';
}

if ($row_datos_controlasign56['m_mmm'] != '') {
  $asign56m = $row_datos_controlasign56['m_mmm'];
  $asign56m_pass = $row_datos_controlasign56['m_pass'];
}

if ($row_datos_controlasign56['n_nnn'] == '') {
  $asign56n = '';
  $asign56n_pass = '';
}

if ($row_datos_controlasign56['n_nnn'] != '') {
  $asign56n = $row_datos_controlasign56['n_nnn'];
  $asign56n_pass = $row_datos_controlasign56['n_pass'];
}
 ?>



<TABLE class="basetabla" cellspacing="-1" style="margin-top:18px; " >

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>Pre-Esc 3er N:</b> (General  <?php echo $row_datos_controlasign56['grado_pass'];?>)
</TD>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign56a;?></b>: <?php echo $asign56a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign56b;?></b>: <?php echo $asign56b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign56c;?></b>: <?php echo $asign56c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign56d;?></b>: <?php echo $asign56d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign56e;?></b>: <?php echo $asign56e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign56f;?></b>: <?php echo $asign56f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign56g;?></b>: <?php echo $asign56g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign56h;?></b>: <?php echo $asign56h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign56i;?></b>: <?php echo $asign56i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign56j;?></b>: <?php echo $asign56j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign56k;?></b>: <?php echo $asign56k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign56l;?></b>: <?php echo $asign56l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign56m;?></b>: <?php echo $asign56m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign56n;?></b>: <?php echo $asign56n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>


</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:40px; " >

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>



<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas35 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '35'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign35 = mysqli_query($enlace, $queryasignaturas35) or die(mysqli_error());
$row_datos_controlasign35 = mysqli_fetch_array($datos_controlasign35); 
mysqli_close($enlace); 


if ($row_datos_controlasign35['a_aaa'] == '') {
  $asign35a = '';
  $asign35a_pass = '';
}

if ($row_datos_controlasign35['a_aaa'] != '') {
  $asign35a = $row_datos_controlasign35['a_aaa'];
  $asign35a_pass = $row_datos_controlasign35['a_pass'];
}

if ($row_datos_controlasign35['b_bbb'] == '') {
  $asign35b = '';
  $asign35b_pass = '';
}

if ($row_datos_controlasign35['b_bbb'] != '') {
  $asign35b = $row_datos_controlasign35['b_bbb'];
  $asign35b_pass = $row_datos_controlasign35['b_pass'];
}

if ($row_datos_controlasign35['c_ccc'] == '') {
  $asign35c = '';
  $asign35c_pass = '';
}

if ($row_datos_controlasign35['c_ccc'] != '') {
  $asign35c = $row_datos_controlasign35['c_ccc'];
  $asign35c_pass = $row_datos_controlasign35['c_pass'];
}

if ($row_datos_controlasign35['d_ddd'] == '') {
  $asign35d = '';
  $asign35d_pass = '';
}

if ($row_datos_controlasign35['d_ddd'] != '') {
  $asign35d = $row_datos_controlasign35['d_ddd'];
  $asign35d_pass = $row_datos_controlasign35['d_pass'];
}

if ($row_datos_controlasign35['e_eee'] == '') {
  $asign35e = '';
  $asign35e_pass = '';
}

if ($row_datos_controlasign35['e_eee'] != '') {
  $asign35e = $row_datos_controlasign35['e_eee'];
  $asign35e_pass = $row_datos_controlasign35['e_pass'];
}

if ($row_datos_controlasign35['f_fff'] == '') {
  $asign35f = '';
  $asign35f_pass = '';
}

if ($row_datos_controlasign35['f_fff'] != '') {
  $asign35f = $row_datos_controlasign35['f_fff'];
  $asign35f_pass = $row_datos_controlasign35['f_pass'];
}

if ($row_datos_controlasign35['g_ggg'] == '') {
  $asign35g = '';
  $asign35g_pass = '';
}

if ($row_datos_controlasign35['g_ggg'] != '') {
  $asign35g = $row_datos_controlasign35['g_ggg'];
  $asign35g_pass = $row_datos_controlasign35['g_pass'];
}

if ($row_datos_controlasign35['h_hhh'] == '') {
  $asign35h = '';
  $asign35h_pass = '';
}

if ($row_datos_controlasign35['h_hhh'] != '') {
  $asign35h = $row_datos_controlasign35['h_hhh'];
  $asign35h_pass = $row_datos_controlasign35['h_pass'];
}

if ($row_datos_controlasign35['i_iii'] == '') {
  $asign35i = '';
  $asign35i_pass = '';
}

if ($row_datos_controlasign35['i_iii'] != '') {
  $asign35i = $row_datos_controlasign35['i_iii'];
  $asign35i_pass = $row_datos_controlasign35['i_pass'];
}

if ($row_datos_controlasign35['j_jjj'] == '') {
  $asign35j = '';
  $asign35j_pass = '';
}

if ($row_datos_controlasign35['j_jjj'] != '') {
  $asign35j = $row_datos_controlasign35['j_jjj'];
  $asign35j_pass = $row_datos_controlasign35['j_pass'];
}

if ($row_datos_controlasign35['k_kkk'] == '') {
  $asign35k = '';
  $asign35k_pass = '';
}

if ($row_datos_controlasign35['k_kkk'] != '') {
  $asign35k = $row_datos_controlasign35['k_kkk'];
  $asign35k_pass = $row_datos_controlasign35['k_pass'];
}

if ($row_datos_controlasign35['l_lll'] == '') {
  $asign35l = '';
  $asign35l_pass = '';
}

if ($row_datos_controlasign35['l_lll'] != '') {
  $asign35l = $row_datos_controlasign35['l_lll'];
  $asign35l_pass = $row_datos_controlasign35['l_pass'];
}

if ($row_datos_controlasign35['m_mmm'] == '') {
  $asign35m = '';
  $asign35m_pass = '';
}

if ($row_datos_controlasign35['m_mmm'] != '') {
  $asign35m = $row_datos_controlasign35['m_mmm'];
  $asign35m_pass = $row_datos_controlasign35['m_pass'];
}

if ($row_datos_controlasign35['n_nnn'] == '') {
  $asign35n = '';
  $asign35n_pass = '';
}

if ($row_datos_controlasign35['n_nnn'] != '') {
  $asign35n = $row_datos_controlasign35['n_nnn'];
  $asign35n_pass = $row_datos_controlasign35['n_pass'];
}
 ?>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>1er Grado:</b> (General  <?php echo $row_datos_controlasign35['grado_pass'];?>)
</TD>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign35a;?></b>: <?php echo $asign35a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign35b;?></b>: <?php echo $asign35b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign35c;?></b>: <?php echo $asign35c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign35d;?></b>: <?php echo $asign35d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign35e;?></b>: <?php echo $asign35e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign35f;?></b>: <?php echo $asign35f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign35g;?></b>: <?php echo $asign35g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign35h;?></b>: <?php echo $asign35h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign35i;?></b>: <?php echo $asign35i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign35j;?></b>: <?php echo $asign35j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign35k;?></b>: <?php echo $asign35k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign35l;?></b>: <?php echo $asign35l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign35m;?></b>: <?php echo $asign35m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign35n;?></b>: <?php echo $asign35n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>


</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:17px; " >

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>




<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas36 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '36'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign36 = mysqli_query($enlace, $queryasignaturas36) or die(mysqli_error());
$row_datos_controlasign36 = mysqli_fetch_array($datos_controlasign36); 
mysqli_close($enlace); 


if ($row_datos_controlasign36['a_aaa'] == '') {
  $asign36a = '';
  $asign36a_pass = '';
}

if ($row_datos_controlasign36['a_aaa'] != '') {
  $asign36a = $row_datos_controlasign36['a_aaa'];
  $asign36a_pass = $row_datos_controlasign36['a_pass'];
}

if ($row_datos_controlasign36['b_bbb'] == '') {
  $asign36b = '';
  $asign36b_pass = '';
}

if ($row_datos_controlasign36['b_bbb'] != '') {
  $asign36b = $row_datos_controlasign36['b_bbb'];
  $asign36b_pass = $row_datos_controlasign36['b_pass'];
}

if ($row_datos_controlasign36['c_ccc'] == '') {
  $asign36c = '';
  $asign36c_pass = '';
}

if ($row_datos_controlasign36['c_ccc'] != '') {
  $asign36c = $row_datos_controlasign36['c_ccc'];
  $asign36c_pass = $row_datos_controlasign36['c_pass'];
}

if ($row_datos_controlasign36['d_ddd'] == '') {
  $asign36d = '';
  $asign36d_pass = '';
}

if ($row_datos_controlasign36['d_ddd'] != '') {
  $asign36d = $row_datos_controlasign36['d_ddd'];
  $asign36d_pass = $row_datos_controlasign36['d_pass'];
}

if ($row_datos_controlasign36['e_eee'] == '') {
  $asign36e = '';
  $asign36e_pass = '';
}

if ($row_datos_controlasign36['e_eee'] != '') {
  $asign36e = $row_datos_controlasign36['e_eee'];
  $asign36e_pass = $row_datos_controlasign36['e_pass'];
}

if ($row_datos_controlasign36['f_fff'] == '') {
  $asign36f = '';
  $asign36f_pass = '';
}

if ($row_datos_controlasign36['f_fff'] != '') {
  $asign36f = $row_datos_controlasign36['f_fff'];
  $asign36f_pass = $row_datos_controlasign36['f_pass'];
}

if ($row_datos_controlasign36['g_ggg'] == '') {
  $asign36g = '';
  $asign36g_pass = '';
}

if ($row_datos_controlasign36['g_ggg'] != '') {
  $asign36g = $row_datos_controlasign36['g_ggg'];
  $asign36g_pass = $row_datos_controlasign36['g_pass'];
}

if ($row_datos_controlasign36['h_hhh'] == '') {
  $asign36h = '';
  $asign36h_pass = '';
}

if ($row_datos_controlasign36['h_hhh'] != '') {
  $asign36h = $row_datos_controlasign36['h_hhh'];
  $asign36h_pass = $row_datos_controlasign36['h_pass'];
}

if ($row_datos_controlasign36['i_iii'] == '') {
  $asign36i = '';
  $asign36i_pass = '';
}

if ($row_datos_controlasign36['i_iii'] != '') {
  $asign36i = $row_datos_controlasign36['i_iii'];
  $asign36i_pass = $row_datos_controlasign36['i_pass'];
}

if ($row_datos_controlasign36['j_jjj'] == '') {
  $asign36j = '';
  $asign36j_pass = '';
}

if ($row_datos_controlasign36['j_jjj'] != '') {
  $asign36j = $row_datos_controlasign36['j_jjj'];
  $asign36j_pass = $row_datos_controlasign36['j_pass'];
}

if ($row_datos_controlasign36['k_kkk'] == '') {
  $asign36k = '';
  $asign36k_pass = '';
}

if ($row_datos_controlasign36['k_kkk'] != '') {
  $asign36k = $row_datos_controlasign36['k_kkk'];
  $asign36k_pass = $row_datos_controlasign36['k_pass'];
}

if ($row_datos_controlasign36['l_lll'] == '') {
  $asign36l = '';
  $asign36l_pass = '';
}

if ($row_datos_controlasign36['l_lll'] != '') {
  $asign36l = $row_datos_controlasign36['l_lll'];
  $asign36l_pass = $row_datos_controlasign36['l_pass'];
}

if ($row_datos_controlasign36['m_mmm'] == '') {
  $asign36m = '';
  $asign36m_pass = '';
}

if ($row_datos_controlasign36['m_mmm'] != '') {
  $asign36m = $row_datos_controlasign36['m_mmm'];
  $asign36m_pass = $row_datos_controlasign36['m_pass'];
}

if ($row_datos_controlasign36['n_nnn'] == '') {
  $asign36n = '';
  $asign36n_pass = '';
}

if ($row_datos_controlasign36['n_nnn'] != '') {
  $asign36n = $row_datos_controlasign36['n_nnn'];
  $asign36n_pass = $row_datos_controlasign36['n_pass'];
}
 ?>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>2do Grado:</b> (General  <?php echo $row_datos_controlasign36['grado_pass'];?>)
</TD>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign36a;?></b>: <?php echo $asign36a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign36b;?></b>: <?php echo $asign36b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign36c;?></b>: <?php echo $asign36c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign36d;?></b>: <?php echo $asign36d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign36e;?></b>: <?php echo $asign36e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign36f;?></b>: <?php echo $asign36f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign36g;?></b>: <?php echo $asign36g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign36h;?></b>: <?php echo $asign36h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign36i;?></b>: <?php echo $asign36i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign36j;?></b>: <?php echo $asign36j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign36k;?></b>: <?php echo $asign36k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign36l;?></b>: <?php echo $asign36l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign36m;?></b>: <?php echo $asign36m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign36n;?></b>: <?php echo $asign36n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>


</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:17px; " >

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>



<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas37 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '37'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign37 = mysqli_query($enlace, $queryasignaturas37) or die(mysqli_error());
$row_datos_controlasign37 = mysqli_fetch_array($datos_controlasign37); 
mysqli_close($enlace); 


if ($row_datos_controlasign37['a_aaa'] == '') {
  $asign37a = '';
  $asign37a_pass = '';
}

if ($row_datos_controlasign37['a_aaa'] != '') {
  $asign37a = $row_datos_controlasign37['a_aaa'];
  $asign37a_pass = $row_datos_controlasign37['a_pass'];
}

if ($row_datos_controlasign37['b_bbb'] == '') {
  $asign37b = '';
  $asign37b_pass = '';
}

if ($row_datos_controlasign37['b_bbb'] != '') {
  $asign37b = $row_datos_controlasign37['b_bbb'];
  $asign37b_pass = $row_datos_controlasign37['b_pass'];
}

if ($row_datos_controlasign37['c_ccc'] == '') {
  $asign37c = '';
  $asign37c_pass = '';
}

if ($row_datos_controlasign37['c_ccc'] != '') {
  $asign37c = $row_datos_controlasign37['c_ccc'];
  $asign37c_pass = $row_datos_controlasign37['c_pass'];
}

if ($row_datos_controlasign37['d_ddd'] == '') {
  $asign37d = '';
  $asign37d_pass = '';
}

if ($row_datos_controlasign37['d_ddd'] != '') {
  $asign37d = $row_datos_controlasign37['d_ddd'];
  $asign37d_pass = $row_datos_controlasign37['d_pass'];
}

if ($row_datos_controlasign37['e_eee'] == '') {
  $asign37e = '';
  $asign37e_pass = '';
}

if ($row_datos_controlasign37['e_eee'] != '') {
  $asign37e = $row_datos_controlasign37['e_eee'];
  $asign37e_pass = $row_datos_controlasign37['e_pass'];
}

if ($row_datos_controlasign37['f_fff'] == '') {
  $asign37f = '';
  $asign37f_pass = '';
}

if ($row_datos_controlasign37['f_fff'] != '') {
  $asign37f = $row_datos_controlasign37['f_fff'];
  $asign37f_pass = $row_datos_controlasign37['f_pass'];
}

if ($row_datos_controlasign37['g_ggg'] == '') {
  $asign37g = '';
  $asign37g_pass = '';
}

if ($row_datos_controlasign37['g_ggg'] != '') {
  $asign37g = $row_datos_controlasign37['g_ggg'];
  $asign37g_pass = $row_datos_controlasign37['g_pass'];
}

if ($row_datos_controlasign37['h_hhh'] == '') {
  $asign37h = '';
  $asign37h_pass = '';
}

if ($row_datos_controlasign37['h_hhh'] != '') {
  $asign37h = $row_datos_controlasign37['h_hhh'];
  $asign37h_pass = $row_datos_controlasign37['h_pass'];
}

if ($row_datos_controlasign37['i_iii'] == '') {
  $asign37i = '';
  $asign37i_pass = '';
}

if ($row_datos_controlasign37['i_iii'] != '') {
  $asign37i = $row_datos_controlasign37['i_iii'];
  $asign37i_pass = $row_datos_controlasign37['i_pass'];
}

if ($row_datos_controlasign37['j_jjj'] == '') {
  $asign37j = '';
  $asign37j_pass = '';
}

if ($row_datos_controlasign37['j_jjj'] != '') {
  $asign37j = $row_datos_controlasign37['j_jjj'];
  $asign37j_pass = $row_datos_controlasign37['j_pass'];
}

if ($row_datos_controlasign37['k_kkk'] == '') {
  $asign37k = '';
  $asign37k_pass = '';
}

if ($row_datos_controlasign37['k_kkk'] != '') {
  $asign37k = $row_datos_controlasign37['k_kkk'];
  $asign37k_pass = $row_datos_controlasign37['k_pass'];
}

if ($row_datos_controlasign37['l_lll'] == '') {
  $asign37l = '';
  $asign37l_pass = '';
}

if ($row_datos_controlasign37['l_lll'] != '') {
  $asign37l = $row_datos_controlasign37['l_lll'];
  $asign37l_pass = $row_datos_controlasign37['l_pass'];
}

if ($row_datos_controlasign37['m_mmm'] == '') {
  $asign37m = '';
  $asign37m_pass = '';
}

if ($row_datos_controlasign37['m_mmm'] != '') {
  $asign37m = $row_datos_controlasign37['m_mmm'];
  $asign37m_pass = $row_datos_controlasign37['m_pass'];
}

if ($row_datos_controlasign37['n_nnn'] == '') {
  $asign37n = '';
  $asign37n_pass = '';
}

if ($row_datos_controlasign37['n_nnn'] != '') {
  $asign37n = $row_datos_controlasign37['n_nnn'];
  $asign37n_pass = $row_datos_controlasign37['n_pass'];
}
 ?>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>3er Grado:</b> (General  <?php echo $row_datos_controlasign37['grado_pass'];?>)
</TD>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign37a;?></b>: <?php echo $asign37a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign37b;?></b>: <?php echo $asign37b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign37c;?></b>: <?php echo $asign37c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign37d;?></b>: <?php echo $asign37d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign37e;?></b>: <?php echo $asign37e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign37f;?></b>: <?php echo $asign37f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign37g;?></b>: <?php echo $asign37g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign37h;?></b>: <?php echo $asign37h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign37i;?></b>: <?php echo $asign37i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign37j;?></b>: <?php echo $asign37j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign37k;?></b>: <?php echo $asign37k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign37l;?></b>: <?php echo $asign37l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign37m;?></b>: <?php echo $asign37m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign37n;?></b>: <?php echo $asign37n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>


</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:17px; " >

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>



<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas38 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '38'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign38 = mysqli_query($enlace, $queryasignaturas38) or die(mysqli_error());
$row_datos_controlasign38 = mysqli_fetch_array($datos_controlasign38); 
mysqli_close($enlace); 


if ($row_datos_controlasign38['a_aaa'] == '') {
  $asign38a = '';
  $asign38a_pass = '';
}

if ($row_datos_controlasign38['a_aaa'] != '') {
  $asign38a = $row_datos_controlasign38['a_aaa'];
  $asign38a_pass = $row_datos_controlasign38['a_pass'];
}

if ($row_datos_controlasign38['b_bbb'] == '') {
  $asign38b = '';
  $asign38b_pass = '';
}

if ($row_datos_controlasign38['b_bbb'] != '') {
  $asign38b = $row_datos_controlasign38['b_bbb'];
  $asign38b_pass = $row_datos_controlasign38['b_pass'];
}

if ($row_datos_controlasign38['c_ccc'] == '') {
  $asign38c = '';
  $asign38c_pass = '';
}

if ($row_datos_controlasign38['c_ccc'] != '') {
  $asign38c = $row_datos_controlasign38['c_ccc'];
  $asign38c_pass = $row_datos_controlasign38['c_pass'];
}

if ($row_datos_controlasign38['d_ddd'] == '') {
  $asign38d = '';
  $asign38d_pass = '';
}

if ($row_datos_controlasign38['d_ddd'] != '') {
  $asign38d = $row_datos_controlasign38['d_ddd'];
  $asign38d_pass = $row_datos_controlasign38['d_pass'];
}

if ($row_datos_controlasign38['e_eee'] == '') {
  $asign38e = '';
  $asign38e_pass = '';
}

if ($row_datos_controlasign38['e_eee'] != '') {
  $asign38e = $row_datos_controlasign38['e_eee'];
  $asign38e_pass = $row_datos_controlasign38['e_pass'];
}

if ($row_datos_controlasign38['f_fff'] == '') {
  $asign38f = '';
  $asign38f_pass = '';
}

if ($row_datos_controlasign38['f_fff'] != '') {
  $asign38f = $row_datos_controlasign38['f_fff'];
  $asign38f_pass = $row_datos_controlasign38['f_pass'];
}

if ($row_datos_controlasign38['g_ggg'] == '') {
  $asign38g = '';
  $asign38g_pass = '';
}

if ($row_datos_controlasign38['g_ggg'] != '') {
  $asign38g = $row_datos_controlasign38['g_ggg'];
  $asign38g_pass = $row_datos_controlasign38['g_pass'];
}

if ($row_datos_controlasign38['h_hhh'] == '') {
  $asign38h = '';
  $asign38h_pass = '';
}

if ($row_datos_controlasign38['h_hhh'] != '') {
  $asign38h = $row_datos_controlasign38['h_hhh'];
  $asign38h_pass = $row_datos_controlasign38['h_pass'];
}

if ($row_datos_controlasign38['i_iii'] == '') {
  $asign38i = '';
  $asign38i_pass = '';
}

if ($row_datos_controlasign38['i_iii'] != '') {
  $asign38i = $row_datos_controlasign38['i_iii'];
  $asign38i_pass = $row_datos_controlasign38['i_pass'];
}

if ($row_datos_controlasign38['j_jjj'] == '') {
  $asign38j = '';
  $asign38j_pass = '';
}

if ($row_datos_controlasign38['j_jjj'] != '') {
  $asign38j = $row_datos_controlasign38['j_jjj'];
  $asign38j_pass = $row_datos_controlasign38['j_pass'];
}

if ($row_datos_controlasign38['k_kkk'] == '') {
  $asign38k = '';
  $asign38k_pass = '';
}

if ($row_datos_controlasign38['k_kkk'] != '') {
  $asign38k = $row_datos_controlasign38['k_kkk'];
  $asign38k_pass = $row_datos_controlasign38['k_pass'];
}

if ($row_datos_controlasign38['l_lll'] == '') {
  $asign38l = '';
  $asign38l_pass = '';
}

if ($row_datos_controlasign38['l_lll'] != '') {
  $asign38l = $row_datos_controlasign38['l_lll'];
  $asign38l_pass = $row_datos_controlasign38['l_pass'];
}

if ($row_datos_controlasign38['m_mmm'] == '') {
  $asign38m = '';
  $asign38m_pass = '';
}

if ($row_datos_controlasign38['m_mmm'] != '') {
  $asign38m = $row_datos_controlasign38['m_mmm'];
  $asign38m_pass = $row_datos_controlasign38['m_pass'];
}

if ($row_datos_controlasign38['n_nnn'] == '') {
  $asign38n = '';
  $asign38n_pass = '';
}

if ($row_datos_controlasign38['n_nnn'] != '') {
  $asign38n = $row_datos_controlasign38['n_nnn'];
  $asign38n_pass = $row_datos_controlasign38['n_pass'];
}
 ?>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>4to Grado:</b> (General  <?php echo $row_datos_controlasign38['grado_pass'];?>)
</TD>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign38a;?></b>: <?php echo $asign38a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign38b;?></b>: <?php echo $asign38b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign38c;?></b>: <?php echo $asign38c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign38d;?></b>: <?php echo $asign38d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign38e;?></b>: <?php echo $asign38e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign38f;?></b>: <?php echo $asign38f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign38g;?></b>: <?php echo $asign38g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign38h;?></b>: <?php echo $asign38h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign38i;?></b>: <?php echo $asign38i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign38j;?></b>: <?php echo $asign38j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign38k;?></b>: <?php echo $asign38k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign38l;?></b>: <?php echo $asign38l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign38m;?></b>: <?php echo $asign38m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign38n;?></b>: <?php echo $asign38n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>


</TABLE>



<TABLE class="basetabla" cellspacing="-1" style="margin-top:197px; " >

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>



<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas40 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '40'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign40 = mysqli_query($enlace, $queryasignaturas40) or die(mysqli_error());
$row_datos_controlasign40 = mysqli_fetch_array($datos_controlasign40); 
mysqli_close($enlace); 


if ($row_datos_controlasign40['a_aaa'] == '') {
  $asign40a = '';
  $asign40a_pass = '';
}

if ($row_datos_controlasign40['a_aaa'] != '') {
  $asign40a = $row_datos_controlasign40['a_aaa'];
  $asign40a_pass = $row_datos_controlasign40['a_pass'];
}

if ($row_datos_controlasign40['b_bbb'] == '') {
  $asign40b = '';
  $asign40b_pass = '';
}

if ($row_datos_controlasign40['b_bbb'] != '') {
  $asign40b = $row_datos_controlasign40['b_bbb'];
  $asign40b_pass = $row_datos_controlasign40['b_pass'];
}

if ($row_datos_controlasign40['c_ccc'] == '') {
  $asign40c = '';
  $asign40c_pass = '';
}

if ($row_datos_controlasign40['c_ccc'] != '') {
  $asign40c = $row_datos_controlasign40['c_ccc'];
  $asign40c_pass = $row_datos_controlasign40['c_pass'];
}

if ($row_datos_controlasign40['d_ddd'] == '') {
  $asign40d = '';
  $asign40d_pass = '';
}

if ($row_datos_controlasign40['d_ddd'] != '') {
  $asign40d = $row_datos_controlasign40['d_ddd'];
  $asign40d_pass = $row_datos_controlasign40['d_pass'];
}

if ($row_datos_controlasign40['e_eee'] == '') {
  $asign40e = '';
  $asign40e_pass = '';
}

if ($row_datos_controlasign40['e_eee'] != '') {
  $asign40e = $row_datos_controlasign40['e_eee'];
  $asign40e_pass = $row_datos_controlasign40['e_pass'];
}

if ($row_datos_controlasign40['f_fff'] == '') {
  $asign40f = '';
  $asign40f_pass = '';
}

if ($row_datos_controlasign40['f_fff'] != '') {
  $asign40f = $row_datos_controlasign40['f_fff'];
  $asign40f_pass = $row_datos_controlasign40['f_pass'];
}

if ($row_datos_controlasign40['g_ggg'] == '') {
  $asign40g = '';
  $asign40g_pass = '';
}

if ($row_datos_controlasign40['g_ggg'] != '') {
  $asign40g = $row_datos_controlasign40['g_ggg'];
  $asign40g_pass = $row_datos_controlasign40['g_pass'];
}

if ($row_datos_controlasign40['h_hhh'] == '') {
  $asign40h = '';
  $asign40h_pass = '';
}

if ($row_datos_controlasign40['h_hhh'] != '') {
  $asign40h = $row_datos_controlasign40['h_hhh'];
  $asign40h_pass = $row_datos_controlasign40['h_pass'];
}

if ($row_datos_controlasign40['i_iii'] == '') {
  $asign40i = '';
  $asign40i_pass = '';
}

if ($row_datos_controlasign40['i_iii'] != '') {
  $asign40i = $row_datos_controlasign40['i_iii'];
  $asign40i_pass = $row_datos_controlasign40['i_pass'];
}

if ($row_datos_controlasign40['j_jjj'] == '') {
  $asign40j = '';
  $asign40j_pass = '';
}

if ($row_datos_controlasign40['j_jjj'] != '') {
  $asign40j = $row_datos_controlasign40['j_jjj'];
  $asign40j_pass = $row_datos_controlasign40['j_pass'];
}

if ($row_datos_controlasign40['k_kkk'] == '') {
  $asign40k = '';
  $asign40k_pass = '';
}

if ($row_datos_controlasign40['k_kkk'] != '') {
  $asign40k = $row_datos_controlasign40['k_kkk'];
  $asign40k_pass = $row_datos_controlasign40['k_pass'];
}

if ($row_datos_controlasign40['l_lll'] == '') {
  $asign40l = '';
  $asign40l_pass = '';
}

if ($row_datos_controlasign40['l_lll'] != '') {
  $asign40l = $row_datos_controlasign40['l_lll'];
  $asign40l_pass = $row_datos_controlasign40['l_pass'];
}

if ($row_datos_controlasign40['m_mmm'] == '') {
  $asign40m = '';
  $asign40m_pass = '';
}

if ($row_datos_controlasign40['m_mmm'] != '') {
  $asign40m = $row_datos_controlasign40['m_mmm'];
  $asign40m_pass = $row_datos_controlasign40['m_pass'];
}

if ($row_datos_controlasign40['n_nnn'] == '') {
  $asign40n = '';
  $asign40n_pass = '';
}

if ($row_datos_controlasign40['n_nnn'] != '') {
  $asign40n = $row_datos_controlasign40['n_nnn'];
  $asign40n_pass = $row_datos_controlasign40['n_pass'];
}
 ?>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>5to Grado:</b> (General  <?php echo $row_datos_controlasign40['grado_pass'];?>)
</TD>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign40a;?></b>: <?php echo $asign40a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign40b;?></b>: <?php echo $asign40b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign40c;?></b>: <?php echo $asign40c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign40d;?></b>: <?php echo $asign40d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign40e;?></b>: <?php echo $asign40e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign40f;?></b>: <?php echo $asign40f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign40g;?></b>: <?php echo $asign40g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign40h;?></b>: <?php echo $asign40h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign40i;?></b>: <?php echo $asign40i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign40j;?></b>: <?php echo $asign40j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign40k;?></b>: <?php echo $asign40k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign40l;?></b>: <?php echo $asign40l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign40m;?></b>: <?php echo $asign40m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign40n;?></b>: <?php echo $asign40n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>


</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:17px; " >

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>



<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas41 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '41'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign41 = mysqli_query($enlace, $queryasignaturas41) or die(mysqli_error());
$row_datos_controlasign41 = mysqli_fetch_array($datos_controlasign41); 
mysqli_close($enlace); 


if ($row_datos_controlasign41['a_aaa'] == '') {
  $asign41a = '';
  $asign41a_pass = '';
}

if ($row_datos_controlasign41['a_aaa'] != '') {
  $asign41a = $row_datos_controlasign41['a_aaa'];
  $asign41a_pass = $row_datos_controlasign41['a_pass'];
}

if ($row_datos_controlasign41['b_bbb'] == '') {
  $asign41b = '';
  $asign41b_pass = '';
}

if ($row_datos_controlasign41['b_bbb'] != '') {
  $asign41b = $row_datos_controlasign41['b_bbb'];
  $asign41b_pass = $row_datos_controlasign41['b_pass'];
}

if ($row_datos_controlasign41['c_ccc'] == '') {
  $asign41c = '';
  $asign41c_pass = '';
}

if ($row_datos_controlasign41['c_ccc'] != '') {
  $asign41c = $row_datos_controlasign41['c_ccc'];
  $asign41c_pass = $row_datos_controlasign41['c_pass'];
}

if ($row_datos_controlasign41['d_ddd'] == '') {
  $asign41d = '';
  $asign41d_pass = '';
}

if ($row_datos_controlasign41['d_ddd'] != '') {
  $asign41d = $row_datos_controlasign41['d_ddd'];
  $asign41d_pass = $row_datos_controlasign41['d_pass'];
}

if ($row_datos_controlasign41['e_eee'] == '') {
  $asign41e = '';
  $asign41e_pass = '';
}

if ($row_datos_controlasign41['e_eee'] != '') {
  $asign41e = $row_datos_controlasign41['e_eee'];
  $asign41e_pass = $row_datos_controlasign41['e_pass'];
}

if ($row_datos_controlasign41['f_fff'] == '') {
  $asign41f = '';
  $asign41f_pass = '';
}

if ($row_datos_controlasign41['f_fff'] != '') {
  $asign41f = $row_datos_controlasign41['f_fff'];
  $asign41f_pass = $row_datos_controlasign41['f_pass'];
}

if ($row_datos_controlasign41['g_ggg'] == '') {
  $asign41g = '';
  $asign41g_pass = '';
}

if ($row_datos_controlasign41['g_ggg'] != '') {
  $asign41g = $row_datos_controlasign41['g_ggg'];
  $asign41g_pass = $row_datos_controlasign41['g_pass'];
}

if ($row_datos_controlasign41['h_hhh'] == '') {
  $asign41h = '';
  $asign41h_pass = '';
}

if ($row_datos_controlasign41['h_hhh'] != '') {
  $asign41h = $row_datos_controlasign41['h_hhh'];
  $asign41h_pass = $row_datos_controlasign41['h_pass'];
}

if ($row_datos_controlasign41['i_iii'] == '') {
  $asign41i = '';
  $asign41i_pass = '';
}

if ($row_datos_controlasign41['i_iii'] != '') {
  $asign41i = $row_datos_controlasign41['i_iii'];
  $asign41i_pass = $row_datos_controlasign41['i_pass'];
}

if ($row_datos_controlasign41['j_jjj'] == '') {
  $asign41j = '';
  $asign41j_pass = '';
}

if ($row_datos_controlasign41['j_jjj'] != '') {
  $asign41j = $row_datos_controlasign41['j_jjj'];
  $asign41j_pass = $row_datos_controlasign41['j_pass'];
}

if ($row_datos_controlasign41['k_kkk'] == '') {
  $asign41k = '';
  $asign41k_pass = '';
}

if ($row_datos_controlasign41['k_kkk'] != '') {
  $asign41k = $row_datos_controlasign41['k_kkk'];
  $asign41k_pass = $row_datos_controlasign41['k_pass'];
}

if ($row_datos_controlasign41['l_lll'] == '') {
  $asign41l = '';
  $asign41l_pass = '';
}

if ($row_datos_controlasign41['l_lll'] != '') {
  $asign41l = $row_datos_controlasign41['l_lll'];
  $asign41l_pass = $row_datos_controlasign41['l_pass'];
}

if ($row_datos_controlasign41['m_mmm'] == '') {
  $asign41m = '';
  $asign41m_pass = '';
}

if ($row_datos_controlasign41['m_mmm'] != '') {
  $asign41m = $row_datos_controlasign41['m_mmm'];
  $asign41m_pass = $row_datos_controlasign41['m_pass'];
}

if ($row_datos_controlasign41['n_nnn'] == '') {
  $asign41n = '';
  $asign41n_pass = '';
}

if ($row_datos_controlasign41['n_nnn'] != '') {
  $asign41n = $row_datos_controlasign41['n_nnn'];
  $asign41n_pass = $row_datos_controlasign41['n_pass'];
}
 ?>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>6to Grado:</b> (General  <?php echo $row_datos_controlasign41['grado_pass'];?>)
</TD>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign41a;?></b>: <?php echo $asign41a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign41b;?></b>: <?php echo $asign41b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign41c;?></b>: <?php echo $asign41c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign41d;?></b>: <?php echo $asign41d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign41e;?></b>: <?php echo $asign41e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign41f;?></b>: <?php echo $asign41f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign41g;?></b>: <?php echo $asign41g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign41h;?></b>: <?php echo $asign41h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign41i;?></b>: <?php echo $asign41i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign41j;?></b>: <?php echo $asign41j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign41k;?></b>: <?php echo $asign41k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign41l;?></b>: <?php echo $asign41l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign41m;?></b>: <?php echo $asign41m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign41n;?></b>: <?php echo $asign41n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>


</TABLE>




</page>


<page>



<TABLE class="basetabla" cellspacing="-1" style="margin-top:60px; " >

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>



<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas42 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '42'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign42 = mysqli_query($enlace, $queryasignaturas42) or die(mysqli_error());
$row_datos_controlasign42 = mysqli_fetch_array($datos_controlasign42); 
mysqli_close($enlace); 


if ($row_datos_controlasign42['a_aaa'] == '') {
  $asign42a = '';
  $asign42a_pass = '';
}

if ($row_datos_controlasign42['a_aaa'] != '') {
  $asign42a = $row_datos_controlasign42['a_aaa'];
  $asign42a_pass = $row_datos_controlasign42['a_pass'];
}

if ($row_datos_controlasign42['b_bbb'] == '') {
  $asign42b = '';
  $asign42b_pass = '';
}

if ($row_datos_controlasign42['b_bbb'] != '') {
  $asign42b = $row_datos_controlasign42['b_bbb'];
  $asign42b_pass = $row_datos_controlasign42['b_pass'];
}

if ($row_datos_controlasign42['c_ccc'] == '') {
  $asign42c = '';
  $asign42c_pass = '';
}

if ($row_datos_controlasign42['c_ccc'] != '') {
  $asign42c = $row_datos_controlasign42['c_ccc'];
  $asign42c_pass = $row_datos_controlasign42['c_pass'];
}

if ($row_datos_controlasign42['d_ddd'] == '') {
  $asign42d = '';
  $asign42d_pass = '';
}

if ($row_datos_controlasign42['d_ddd'] != '') {
  $asign42d = $row_datos_controlasign42['d_ddd'];
  $asign42d_pass = $row_datos_controlasign42['d_pass'];
}

if ($row_datos_controlasign42['e_eee'] == '') {
  $asign42e = '';
  $asign42e_pass = '';
}

if ($row_datos_controlasign42['e_eee'] != '') {
  $asign42e = $row_datos_controlasign42['e_eee'];
  $asign42e_pass = $row_datos_controlasign42['e_pass'];
}

if ($row_datos_controlasign42['f_fff'] == '') {
  $asign42f = '';
  $asign42f_pass = '';
}

if ($row_datos_controlasign42['f_fff'] != '') {
  $asign42f = $row_datos_controlasign42['f_fff'];
  $asign42f_pass = $row_datos_controlasign42['f_pass'];
}

if ($row_datos_controlasign42['g_ggg'] == '') {
  $asign42g = '';
  $asign42g_pass = '';
}

if ($row_datos_controlasign42['g_ggg'] != '') {
  $asign42g = $row_datos_controlasign42['g_ggg'];
  $asign42g_pass = $row_datos_controlasign42['g_pass'];
}

if ($row_datos_controlasign42['h_hhh'] == '') {
  $asign42h = '';
  $asign42h_pass = '';
}

if ($row_datos_controlasign42['h_hhh'] != '') {
  $asign42h = $row_datos_controlasign42['h_hhh'];
  $asign42h_pass = $row_datos_controlasign42['h_pass'];
}

if ($row_datos_controlasign42['i_iii'] == '') {
  $asign42i = '';
  $asign42i_pass = '';
}

if ($row_datos_controlasign42['i_iii'] != '') {
  $asign42i = $row_datos_controlasign42['i_iii'];
  $asign42i_pass = $row_datos_controlasign42['i_pass'];
}

if ($row_datos_controlasign42['j_jjj'] == '') {
  $asign42j = '';
  $asign42j_pass = '';
}

if ($row_datos_controlasign42['j_jjj'] != '') {
  $asign42j = $row_datos_controlasign42['j_jjj'];
  $asign42j_pass = $row_datos_controlasign42['j_pass'];
}

if ($row_datos_controlasign42['k_kkk'] == '') {
  $asign42k = '';
  $asign42k_pass = '';
}

if ($row_datos_controlasign42['k_kkk'] != '') {
  $asign42k = $row_datos_controlasign42['k_kkk'];
  $asign42k_pass = $row_datos_controlasign42['k_pass'];
}

if ($row_datos_controlasign42['l_lll'] == '') {
  $asign42l = '';
  $asign42l_pass = '';
}

if ($row_datos_controlasign42['l_lll'] != '') {
  $asign42l = $row_datos_controlasign42['l_lll'];
  $asign42l_pass = $row_datos_controlasign42['l_pass'];
}

if ($row_datos_controlasign42['m_mmm'] == '') {
  $asign42m = '';
  $asign42m_pass = '';
}

if ($row_datos_controlasign42['m_mmm'] != '') {
  $asign42m = $row_datos_controlasign42['m_mmm'];
  $asign42m_pass = $row_datos_controlasign42['m_pass'];
}

if ($row_datos_controlasign42['n_nnn'] == '') {
  $asign42n = '';
  $asign42n_pass = '';
}

if ($row_datos_controlasign42['n_nnn'] != '') {
  $asign42n = $row_datos_controlasign42['n_nnn'];
  $asign42n_pass = $row_datos_controlasign42['n_pass'];
}
 ?>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>1er Año - 7mo:</b> <!-- (General  <?php echo $row_datos_controlasign42['grado_pass'];?>) -->
</TD>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign42a;?></b>: <?php echo $asign42a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign42b;?></b>: <?php echo $asign42b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign42c;?></b>: <?php echo $asign42c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign42d;?></b>: <?php echo $asign42d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign42e;?></b>: <?php echo $asign42e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign42f;?></b>: <?php echo $asign42f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign42g;?></b>: <?php echo $asign42g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign42h;?></b>: <?php echo $asign42h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign42i;?></b>: <?php echo $asign42i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign42j;?></b>: <?php echo $asign42j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign42k;?></b>: <?php echo $asign42k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign42l;?></b>: <?php echo $asign42l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign42m;?></b>: <?php echo $asign42m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign42n;?></b>: <?php echo $asign42n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>


</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:17px; " >

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>




<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas43 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '43'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign43 = mysqli_query($enlace, $queryasignaturas43) or die(mysqli_error());
$row_datos_controlasign43 = mysqli_fetch_array($datos_controlasign43); 
mysqli_close($enlace); 


if ($row_datos_controlasign43['a_aaa'] == '') {
  $asign43a = '';
  $asign43a_pass = '';
}

if ($row_datos_controlasign43['a_aaa'] != '') {
  $asign43a = $row_datos_controlasign43['a_aaa'];
  $asign43a_pass = $row_datos_controlasign43['a_pass'];
}

if ($row_datos_controlasign43['b_bbb'] == '') {
  $asign43b = '';
  $asign43b_pass = '';
}

if ($row_datos_controlasign43['b_bbb'] != '') {
  $asign43b = $row_datos_controlasign43['b_bbb'];
  $asign43b_pass = $row_datos_controlasign43['b_pass'];
}

if ($row_datos_controlasign43['c_ccc'] == '') {
  $asign43c = '';
  $asign43c_pass = '';
}

if ($row_datos_controlasign43['c_ccc'] != '') {
  $asign43c = $row_datos_controlasign43['c_ccc'];
  $asign43c_pass = $row_datos_controlasign43['c_pass'];
}

if ($row_datos_controlasign43['d_ddd'] == '') {
  $asign43d = '';
  $asign43d_pass = '';
}

if ($row_datos_controlasign43['d_ddd'] != '') {
  $asign43d = $row_datos_controlasign43['d_ddd'];
  $asign43d_pass = $row_datos_controlasign43['d_pass'];
}

if ($row_datos_controlasign43['e_eee'] == '') {
  $asign43e = '';
  $asign43e_pass = '';
}

if ($row_datos_controlasign43['e_eee'] != '') {
  $asign43e = $row_datos_controlasign43['e_eee'];
  $asign43e_pass = $row_datos_controlasign43['e_pass'];
}

if ($row_datos_controlasign43['f_fff'] == '') {
  $asign43f = '';
  $asign43f_pass = '';
}

if ($row_datos_controlasign43['f_fff'] != '') {
  $asign43f = $row_datos_controlasign43['f_fff'];
  $asign43f_pass = $row_datos_controlasign43['f_pass'];
}

if ($row_datos_controlasign43['g_ggg'] == '') {
  $asign43g = '';
  $asign43g_pass = '';
}

if ($row_datos_controlasign43['g_ggg'] != '') {
  $asign43g = $row_datos_controlasign43['g_ggg'];
  $asign43g_pass = $row_datos_controlasign43['g_pass'];
}

if ($row_datos_controlasign43['h_hhh'] == '') {
  $asign43h = '';
  $asign43h_pass = '';
}

if ($row_datos_controlasign43['h_hhh'] != '') {
  $asign43h = $row_datos_controlasign43['h_hhh'];
  $asign43h_pass = $row_datos_controlasign43['h_pass'];
}

if ($row_datos_controlasign43['i_iii'] == '') {
  $asign43i = '';
  $asign43i_pass = '';
}

if ($row_datos_controlasign43['i_iii'] != '') {
  $asign43i = $row_datos_controlasign43['i_iii'];
  $asign43i_pass = $row_datos_controlasign43['i_pass'];
}

if ($row_datos_controlasign43['j_jjj'] == '') {
  $asign43j = '';
  $asign43j_pass = '';
}

if ($row_datos_controlasign43['j_jjj'] != '') {
  $asign43j = $row_datos_controlasign43['j_jjj'];
  $asign43j_pass = $row_datos_controlasign43['j_pass'];
}

if ($row_datos_controlasign43['k_kkk'] == '') {
  $asign43k = '';
  $asign43k_pass = '';
}

if ($row_datos_controlasign43['k_kkk'] != '') {
  $asign43k = $row_datos_controlasign43['k_kkk'];
  $asign43k_pass = $row_datos_controlasign43['k_pass'];
}

if ($row_datos_controlasign43['l_lll'] == '') {
  $asign43l = '';
  $asign43l_pass = '';
}

if ($row_datos_controlasign43['l_lll'] != '') {
  $asign43l = $row_datos_controlasign43['l_lll'];
  $asign43l_pass = $row_datos_controlasign43['l_pass'];
}

if ($row_datos_controlasign43['m_mmm'] == '') {
  $asign43m = '';
  $asign43m_pass = '';
}

if ($row_datos_controlasign43['m_mmm'] != '') {
  $asign43m = $row_datos_controlasign43['m_mmm'];
  $asign43m_pass = $row_datos_controlasign43['m_pass'];
}

if ($row_datos_controlasign43['n_nnn'] == '') {
  $asign43n = '';
  $asign43n_pass = '';
}

if ($row_datos_controlasign43['n_nnn'] != '') {
  $asign43n = $row_datos_controlasign43['n_nnn'];
  $asign43n_pass = $row_datos_controlasign43['n_pass'];
}
 ?>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>2do Año - 8vo:</b> <!-- (General  <?php echo $row_datos_controlasign43['grado_pass'];?>) -->
</TD>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign43a;?></b>: <?php echo $asign43a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign43b;?></b>: <?php echo $asign43b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign43c;?></b>: <?php echo $asign43c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign43d;?></b>: <?php echo $asign43d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign43e;?></b>: <?php echo $asign43e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign43f;?></b>: <?php echo $asign43f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign43g;?></b>: <?php echo $asign43g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign43h;?></b>: <?php echo $asign43h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign43i;?></b>: <?php echo $asign43i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign43j;?></b>: <?php echo $asign43j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign43k;?></b>: <?php echo $asign43k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign43l;?></b>: <?php echo $asign43l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign43m;?></b>: <?php echo $asign43m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign43n;?></b>: <?php echo $asign43n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>


</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:17px; " >

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>



<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas44 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '44'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign44 = mysqli_query($enlace, $queryasignaturas44) or die(mysqli_error());
$row_datos_controlasign44 = mysqli_fetch_array($datos_controlasign44); 
mysqli_close($enlace); 


if ($row_datos_controlasign44['a_aaa'] == '') {
  $asign44a = '';
  $asign44a_pass = '';
}

if ($row_datos_controlasign44['a_aaa'] != '') {
  $asign44a = $row_datos_controlasign44['a_aaa'];
  $asign44a_pass = $row_datos_controlasign44['a_pass'];
}

if ($row_datos_controlasign44['b_bbb'] == '') {
  $asign44b = '';
  $asign44b_pass = '';
}

if ($row_datos_controlasign44['b_bbb'] != '') {
  $asign44b = $row_datos_controlasign44['b_bbb'];
  $asign44b_pass = $row_datos_controlasign44['b_pass'];
}

if ($row_datos_controlasign44['c_ccc'] == '') {
  $asign44c = '';
  $asign44c_pass = '';
}

if ($row_datos_controlasign44['c_ccc'] != '') {
  $asign44c = $row_datos_controlasign44['c_ccc'];
  $asign44c_pass = $row_datos_controlasign44['c_pass'];
}

if ($row_datos_controlasign44['d_ddd'] == '') {
  $asign44d = '';
  $asign44d_pass = '';
}

if ($row_datos_controlasign44['d_ddd'] != '') {
  $asign44d = $row_datos_controlasign44['d_ddd'];
  $asign44d_pass = $row_datos_controlasign44['d_pass'];
}

if ($row_datos_controlasign44['e_eee'] == '') {
  $asign44e = '';
  $asign44e_pass = '';
}

if ($row_datos_controlasign44['e_eee'] != '') {
  $asign44e = $row_datos_controlasign44['e_eee'];
  $asign44e_pass = $row_datos_controlasign44['e_pass'];
}

if ($row_datos_controlasign44['f_fff'] == '') {
  $asign44f = '';
  $asign44f_pass = '';
}

if ($row_datos_controlasign44['f_fff'] != '') {
  $asign44f = $row_datos_controlasign44['f_fff'];
  $asign44f_pass = $row_datos_controlasign44['f_pass'];
}

if ($row_datos_controlasign44['g_ggg'] == '') {
  $asign44g = '';
  $asign44g_pass = '';
}

if ($row_datos_controlasign44['g_ggg'] != '') {
  $asign44g = $row_datos_controlasign44['g_ggg'];
  $asign44g_pass = $row_datos_controlasign44['g_pass'];
}

if ($row_datos_controlasign44['h_hhh'] == '') {
  $asign44h = '';
  $asign44h_pass = '';
}

if ($row_datos_controlasign44['h_hhh'] != '') {
  $asign44h = $row_datos_controlasign44['h_hhh'];
  $asign44h_pass = $row_datos_controlasign44['h_pass'];
}

if ($row_datos_controlasign44['i_iii'] == '') {
  $asign44i = '';
  $asign44i_pass = '';
}

if ($row_datos_controlasign44['i_iii'] != '') {
  $asign44i = $row_datos_controlasign44['i_iii'];
  $asign44i_pass = $row_datos_controlasign44['i_pass'];
}

if ($row_datos_controlasign44['j_jjj'] == '') {
  $asign44j = '';
  $asign44j_pass = '';
}

if ($row_datos_controlasign44['j_jjj'] != '') {
  $asign44j = $row_datos_controlasign44['j_jjj'];
  $asign44j_pass = $row_datos_controlasign44['j_pass'];
}

if ($row_datos_controlasign44['k_kkk'] == '') {
  $asign44k = '';
  $asign44k_pass = '';
}

if ($row_datos_controlasign44['k_kkk'] != '') {
  $asign44k = $row_datos_controlasign44['k_kkk'];
  $asign44k_pass = $row_datos_controlasign44['k_pass'];
}

if ($row_datos_controlasign44['l_lll'] == '') {
  $asign44l = '';
  $asign44l_pass = '';
}

if ($row_datos_controlasign44['l_lll'] != '') {
  $asign44l = $row_datos_controlasign44['l_lll'];
  $asign44l_pass = $row_datos_controlasign44['l_pass'];
}

if ($row_datos_controlasign44['m_mmm'] == '') {
  $asign44m = '';
  $asign44m_pass = '';
}

if ($row_datos_controlasign44['m_mmm'] != '') {
  $asign44m = $row_datos_controlasign44['m_mmm'];
  $asign44m_pass = $row_datos_controlasign44['m_pass'];
}

if ($row_datos_controlasign44['n_nnn'] == '') {
  $asign44n = '';
  $asign44n_pass = '';
}

if ($row_datos_controlasign44['n_nnn'] != '') {
  $asign44n = $row_datos_controlasign44['n_nnn'];
  $asign44n_pass = $row_datos_controlasign44['n_pass'];
}
 ?>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>3er Año - 9no:</b> <!-- (General  <?php echo $row_datos_controlasign44['grado_pass'];?>) -->
</TD>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign44a;?></b>: <?php echo $asign44a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign44b;?></b>: <?php echo $asign44b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign44c;?></b>: <?php echo $asign44c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign44d;?></b>: <?php echo $asign44d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign44e;?></b>: <?php echo $asign44e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign44f;?></b>: <?php echo $asign44f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign44g;?></b>: <?php echo $asign44g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign44h;?></b>: <?php echo $asign44h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign44i;?></b>: <?php echo $asign44i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign44j;?></b>: <?php echo $asign44j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign44k;?></b>: <?php echo $asign44k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign44l;?></b>: <?php echo $asign44l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign44m;?></b>: <?php echo $asign44m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign44n;?></b>: <?php echo $asign44n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>


</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:17px; " >

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>



<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas45 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '45'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign45 = mysqli_query($enlace, $queryasignaturas45) or die(mysqli_error());
$row_datos_controlasign45 = mysqli_fetch_array($datos_controlasign45); 
mysqli_close($enlace); 


if ($row_datos_controlasign45['a_aaa'] == '') {
  $asign45a = '';
  $asign45a_pass = '';
}

if ($row_datos_controlasign45['a_aaa'] != '') {
  $asign45a = $row_datos_controlasign45['a_aaa'];
  $asign45a_pass = $row_datos_controlasign45['a_pass'];
}

if ($row_datos_controlasign45['b_bbb'] == '') {
  $asign45b = '';
  $asign45b_pass = '';
}

if ($row_datos_controlasign45['b_bbb'] != '') {
  $asign45b = $row_datos_controlasign45['b_bbb'];
  $asign45b_pass = $row_datos_controlasign45['b_pass'];
}

if ($row_datos_controlasign45['c_ccc'] == '') {
  $asign45c = '';
  $asign45c_pass = '';
}

if ($row_datos_controlasign45['c_ccc'] != '') {
  $asign45c = $row_datos_controlasign45['c_ccc'];
  $asign45c_pass = $row_datos_controlasign45['c_pass'];
}

if ($row_datos_controlasign45['d_ddd'] == '') {
  $asign45d = '';
  $asign45d_pass = '';
}

if ($row_datos_controlasign45['d_ddd'] != '') {
  $asign45d = $row_datos_controlasign45['d_ddd'];
  $asign45d_pass = $row_datos_controlasign45['d_pass'];
}

if ($row_datos_controlasign45['e_eee'] == '') {
  $asign45e = '';
  $asign45e_pass = '';
}

if ($row_datos_controlasign45['e_eee'] != '') {
  $asign45e = $row_datos_controlasign45['e_eee'];
  $asign45e_pass = $row_datos_controlasign45['e_pass'];
}

if ($row_datos_controlasign45['f_fff'] == '') {
  $asign45f = '';
  $asign45f_pass = '';
}

if ($row_datos_controlasign45['f_fff'] != '') {
  $asign45f = $row_datos_controlasign45['f_fff'];
  $asign45f_pass = $row_datos_controlasign45['f_pass'];
}

if ($row_datos_controlasign45['g_ggg'] == '') {
  $asign45g = '';
  $asign45g_pass = '';
}

if ($row_datos_controlasign45['g_ggg'] != '') {
  $asign45g = $row_datos_controlasign45['g_ggg'];
  $asign45g_pass = $row_datos_controlasign45['g_pass'];
}

if ($row_datos_controlasign45['h_hhh'] == '') {
  $asign45h = '';
  $asign45h_pass = '';
}

if ($row_datos_controlasign45['h_hhh'] != '') {
  $asign45h = $row_datos_controlasign45['h_hhh'];
  $asign45h_pass = $row_datos_controlasign45['h_pass'];
}

if ($row_datos_controlasign45['i_iii'] == '') {
  $asign45i = '';
  $asign45i_pass = '';
}

if ($row_datos_controlasign45['i_iii'] != '') {
  $asign45i = $row_datos_controlasign45['i_iii'];
  $asign45i_pass = $row_datos_controlasign45['i_pass'];
}

if ($row_datos_controlasign45['j_jjj'] == '') {
  $asign45j = '';
  $asign45j_pass = '';
}

if ($row_datos_controlasign45['j_jjj'] != '') {
  $asign45j = $row_datos_controlasign45['j_jjj'];
  $asign45j_pass = $row_datos_controlasign45['j_pass'];
}

if ($row_datos_controlasign45['k_kkk'] == '') {
  $asign45k = '';
  $asign45k_pass = '';
}

if ($row_datos_controlasign45['k_kkk'] != '') {
  $asign45k = $row_datos_controlasign45['k_kkk'];
  $asign45k_pass = $row_datos_controlasign45['k_pass'];
}

if ($row_datos_controlasign45['l_lll'] == '') {
  $asign45l = '';
  $asign45l_pass = '';
}

if ($row_datos_controlasign45['l_lll'] != '') {
  $asign45l = $row_datos_controlasign45['l_lll'];
  $asign45l_pass = $row_datos_controlasign45['l_pass'];
}

if ($row_datos_controlasign45['m_mmm'] == '') {
  $asign45m = '';
  $asign45m_pass = '';
}

if ($row_datos_controlasign45['m_mmm'] != '') {
  $asign45m = $row_datos_controlasign45['m_mmm'];
  $asign45m_pass = $row_datos_controlasign45['m_pass'];
}

if ($row_datos_controlasign45['n_nnn'] == '') {
  $asign45n = '';
  $asign45n_pass = '';
}

if ($row_datos_controlasign45['n_nnn'] != '') {
  $asign45n = $row_datos_controlasign45['n_nnn'];
  $asign45n_pass = $row_datos_controlasign45['n_pass'];
}
 ?>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>Cuarto Año:</b> <!-- (General  <?php echo $row_datos_controlasign45['grado_pass'];?>) -->
</TD>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign45a;?></b>: <?php echo $asign45a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign45b;?></b>: <?php echo $asign45b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign45c;?></b>: <?php echo $asign45c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign45d;?></b>: <?php echo $asign45d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign45e;?></b>: <?php echo $asign45e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign45f;?></b>: <?php echo $asign45f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign45g;?></b>: <?php echo $asign45g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign45h;?></b>: <?php echo $asign45h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign45i;?></b>: <?php echo $asign45i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign45j;?></b>: <?php echo $asign45j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign45k;?></b>: <?php echo $asign45k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign45l;?></b>: <?php echo $asign45l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign45m;?></b>: <?php echo $asign45m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign45n;?></b>: <?php echo $asign45n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>


</TABLE>



<TABLE class="basetabla" cellspacing="-1" style="margin-top:17px; " >

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>



<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas46 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '46'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign46 = mysqli_query($enlace, $queryasignaturas46) or die(mysqli_error());
$row_datos_controlasign46 = mysqli_fetch_array($datos_controlasign46); 
mysqli_close($enlace); 


if ($row_datos_controlasign46['a_aaa'] == '') {
  $asign46a = '';
  $asign46a_pass = '';
}

if ($row_datos_controlasign46['a_aaa'] != '') {
  $asign46a = $row_datos_controlasign46['a_aaa'];
  $asign46a_pass = $row_datos_controlasign46['a_pass'];
}

if ($row_datos_controlasign46['b_bbb'] == '') {
  $asign46b = '';
  $asign46b_pass = '';
}

if ($row_datos_controlasign46['b_bbb'] != '') {
  $asign46b = $row_datos_controlasign46['b_bbb'];
  $asign46b_pass = $row_datos_controlasign46['b_pass'];
}

if ($row_datos_controlasign46['c_ccc'] == '') {
  $asign46c = '';
  $asign46c_pass = '';
}

if ($row_datos_controlasign46['c_ccc'] != '') {
  $asign46c = $row_datos_controlasign46['c_ccc'];
  $asign46c_pass = $row_datos_controlasign46['c_pass'];
}

if ($row_datos_controlasign46['d_ddd'] == '') {
  $asign46d = '';
  $asign46d_pass = '';
}

if ($row_datos_controlasign46['d_ddd'] != '') {
  $asign46d = $row_datos_controlasign46['d_ddd'];
  $asign46d_pass = $row_datos_controlasign46['d_pass'];
}

if ($row_datos_controlasign46['e_eee'] == '') {
  $asign46e = '';
  $asign46e_pass = '';
}

if ($row_datos_controlasign46['e_eee'] != '') {
  $asign46e = $row_datos_controlasign46['e_eee'];
  $asign46e_pass = $row_datos_controlasign46['e_pass'];
}

if ($row_datos_controlasign46['f_fff'] == '') {
  $asign46f = '';
  $asign46f_pass = '';
}

if ($row_datos_controlasign46['f_fff'] != '') {
  $asign46f = $row_datos_controlasign46['f_fff'];
  $asign46f_pass = $row_datos_controlasign46['f_pass'];
}

if ($row_datos_controlasign46['g_ggg'] == '') {
  $asign46g = '';
  $asign46g_pass = '';
}

if ($row_datos_controlasign46['g_ggg'] != '') {
  $asign46g = $row_datos_controlasign46['g_ggg'];
  $asign46g_pass = $row_datos_controlasign46['g_pass'];
}

if ($row_datos_controlasign46['h_hhh'] == '') {
  $asign46h = '';
  $asign46h_pass = '';
}

if ($row_datos_controlasign46['h_hhh'] != '') {
  $asign46h = $row_datos_controlasign46['h_hhh'];
  $asign46h_pass = $row_datos_controlasign46['h_pass'];
}

if ($row_datos_controlasign46['i_iii'] == '') {
  $asign46i = '';
  $asign46i_pass = '';
}

if ($row_datos_controlasign46['i_iii'] != '') {
  $asign46i = $row_datos_controlasign46['i_iii'];
  $asign46i_pass = $row_datos_controlasign46['i_pass'];
}

if ($row_datos_controlasign46['j_jjj'] == '') {
  $asign46j = '';
  $asign46j_pass = '';
}

if ($row_datos_controlasign46['j_jjj'] != '') {
  $asign46j = $row_datos_controlasign46['j_jjj'];
  $asign46j_pass = $row_datos_controlasign46['j_pass'];
}

if ($row_datos_controlasign46['k_kkk'] == '') {
  $asign46k = '';
  $asign46k_pass = '';
}

if ($row_datos_controlasign46['k_kkk'] != '') {
  $asign46k = $row_datos_controlasign46['k_kkk'];
  $asign46k_pass = $row_datos_controlasign46['k_pass'];
}

if ($row_datos_controlasign46['l_lll'] == '') {
  $asign46l = '';
  $asign46l_pass = '';
}

if ($row_datos_controlasign46['l_lll'] != '') {
  $asign46l = $row_datos_controlasign46['l_lll'];
  $asign46l_pass = $row_datos_controlasign46['l_pass'];
}

if ($row_datos_controlasign46['m_mmm'] == '') {
  $asign46m = '';
  $asign46m_pass = '';
}

if ($row_datos_controlasign46['m_mmm'] != '') {
  $asign46m = $row_datos_controlasign46['m_mmm'];
  $asign46m_pass = $row_datos_controlasign46['m_pass'];
}

if ($row_datos_controlasign46['n_nnn'] == '') {
  $asign46n = '';
  $asign46n_pass = '';
}

if ($row_datos_controlasign46['n_nnn'] != '') {
  $asign46n = $row_datos_controlasign46['n_nnn'];
  $asign46n_pass = $row_datos_controlasign46['n_pass'];
}
 ?>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>Quinto Año:</b> <!--(General  <?php echo $row_datos_controlasign46['grado_pass'];?>) -->
</TD>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign46a;?></b>: <?php echo $asign46a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign46b;?></b>: <?php echo $asign46b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign46c;?></b>: <?php echo $asign46c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign46d;?></b>: <?php echo $asign46d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign46e;?></b>: <?php echo $asign46e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign46f;?></b>: <?php echo $asign46f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign46g;?></b>: <?php echo $asign46g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign46h;?></b>: <?php echo $asign46h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign46i;?></b>: <?php echo $asign46i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign46j;?></b>: <?php echo $asign46j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign46k;?></b>: <?php echo $asign46k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign46l;?></b>: <?php echo $asign46l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign46m;?></b>: <?php echo $asign46m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign46n;?></b>: <?php echo $asign46n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>


</TABLE>








<TABLE class="basetabla" cellspacing="-1" style="margin-top:17px; " >

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b><?php
    echo $i;
    $i++;    
?></b>
</TD>



<?php

$id_periodo_clave = $_POST["id_periodoxxx"];

include("../../conectar.php");
$queryasignaturas53 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '53'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign53 = mysqli_query($enlace, $queryasignaturas53) or die(mysqli_error());
$row_datos_controlasign53 = mysqli_fetch_array($datos_controlasign53); 
mysqli_close($enlace); 


if ($row_datos_controlasign53['a_aaa'] == '') {
  $asign53a = '';
  $asign53a_pass = '';
}

if ($row_datos_controlasign53['a_aaa'] != '') {
  $asign53a = $row_datos_controlasign53['a_aaa'];
  $asign53a_pass = $row_datos_controlasign53['a_pass'];
}

if ($row_datos_controlasign53['b_bbb'] == '') {
  $asign53b = '';
  $asign53b_pass = '';
}

if ($row_datos_controlasign53['b_bbb'] != '') {
  $asign53b = $row_datos_controlasign53['b_bbb'];
  $asign53b_pass = $row_datos_controlasign53['b_pass'];
}

if ($row_datos_controlasign53['c_ccc'] == '') {
  $asign53c = '';
  $asign53c_pass = '';
}

if ($row_datos_controlasign53['c_ccc'] != '') {
  $asign53c = $row_datos_controlasign53['c_ccc'];
  $asign53c_pass = $row_datos_controlasign53['c_pass'];
}

if ($row_datos_controlasign53['d_ddd'] == '') {
  $asign53d = '';
  $asign53d_pass = '';
}

if ($row_datos_controlasign53['d_ddd'] != '') {
  $asign53d = $row_datos_controlasign53['d_ddd'];
  $asign53d_pass = $row_datos_controlasign53['d_pass'];
}

if ($row_datos_controlasign53['e_eee'] == '') {
  $asign53e = '';
  $asign53e_pass = '';
}

if ($row_datos_controlasign53['e_eee'] != '') {
  $asign53e = $row_datos_controlasign53['e_eee'];
  $asign53e_pass = $row_datos_controlasign53['e_pass'];
}

if ($row_datos_controlasign53['f_fff'] == '') {
  $asign53f = '';
  $asign53f_pass = '';
}

if ($row_datos_controlasign53['f_fff'] != '') {
  $asign53f = $row_datos_controlasign53['f_fff'];
  $asign53f_pass = $row_datos_controlasign53['f_pass'];
}

if ($row_datos_controlasign53['g_ggg'] == '') {
  $asign53g = '';
  $asign53g_pass = '';
}

if ($row_datos_controlasign53['g_ggg'] != '') {
  $asign53g = $row_datos_controlasign53['g_ggg'];
  $asign53g_pass = $row_datos_controlasign53['g_pass'];
}

if ($row_datos_controlasign53['h_hhh'] == '') {
  $asign53h = '';
  $asign53h_pass = '';
}

if ($row_datos_controlasign53['h_hhh'] != '') {
  $asign53h = $row_datos_controlasign53['h_hhh'];
  $asign53h_pass = $row_datos_controlasign53['h_pass'];
}

if ($row_datos_controlasign53['i_iii'] == '') {
  $asign53i = '';
  $asign53i_pass = '';
}

if ($row_datos_controlasign53['i_iii'] != '') {
  $asign53i = $row_datos_controlasign53['i_iii'];
  $asign53i_pass = $row_datos_controlasign53['i_pass'];
}

if ($row_datos_controlasign53['j_jjj'] == '') {
  $asign53j = '';
  $asign53j_pass = '';
}

if ($row_datos_controlasign53['j_jjj'] != '') {
  $asign53j = $row_datos_controlasign53['j_jjj'];
  $asign53j_pass = $row_datos_controlasign53['j_pass'];
}

if ($row_datos_controlasign53['k_kkk'] == '') {
  $asign53k = '';
  $asign53k_pass = '';
}

if ($row_datos_controlasign53['k_kkk'] != '') {
  $asign53k = $row_datos_controlasign53['k_kkk'];
  $asign53k_pass = $row_datos_controlasign53['k_pass'];
}

if ($row_datos_controlasign53['l_lll'] == '') {
  $asign53l = '';
  $asign53l_pass = '';
}

if ($row_datos_controlasign53['l_lll'] != '') {
  $asign53l = $row_datos_controlasign53['l_lll'];
  $asign53l_pass = $row_datos_controlasign53['l_pass'];
}

if ($row_datos_controlasign53['m_mmm'] == '') {
  $asign53m = '';
  $asign53m_pass = '';
}

if ($row_datos_controlasign53['m_mmm'] != '') {
  $asign53m = $row_datos_controlasign53['m_mmm'];
  $asign53m_pass = $row_datos_controlasign53['m_pass'];
}

if ($row_datos_controlasign53['n_nnn'] == '') {
  $asign53n = '';
  $asign53n_pass = '';
}

if ($row_datos_controlasign53['n_nnn'] != '') {
  $asign53n = $row_datos_controlasign53['n_nnn'];
  $asign53n_pass = $row_datos_controlasign53['n_pass'];
}
 ?>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>Sexto Año:</b> <!--(General  <?php echo $row_datos_controlasign53['grado_pass'];?>) -->
</TD>



<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign53a;?></b>: <?php echo $asign53a_pass;?>
</TD>


<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign53b;?></b>: <?php echo $asign53b_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign53c;?></b>: <?php echo $asign53c_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign53d;?></b>: <?php echo $asign53d_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign53e;?></b>: <?php echo $asign53e_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign53f;?></b>: <?php echo $asign53f_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign53g;?></b>: <?php echo $asign53g_pass;?>
</TD>

</TR>


<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign53h;?></b>: <?php echo $asign53h_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign53i;?></b>: <?php echo $asign53i_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign53j;?></b>: <?php echo $asign53j_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign53k;?></b>: <?php echo $asign53k_pass;?>
</TD>

</TR>

<TR> 

<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">

</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign53l;?></b>: <?php echo $asign53l_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign53m;?></b>: <?php echo $asign53m_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b><?php echo $asign53n;?></b>: <?php echo $asign53n_pass;?>
</TD>

<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
<b></b>
</TD>

</TR>


</TABLE>










</page>




<page>

<TABLE class="basetabla" cellspacing="-1" style="margin-top:30px; " >

<tr>
  <td style="width:100%; height:15px; font-size: 15px; color:<?php echo $color_imp3; ?>;" align="Center" >Claves para cada sección:</td>
</tr>

</TABLE>




<?php


include("../../conectar.php");


$query_secc_passA = "SELECT * FROM secciones
            where nombre_seccion = 'A'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rA = mysqli_query($enlace, $query_secc_passA) or die(mysqli_error());
$query_secc_pass_resultadosA = mysqli_fetch_assoc($query_secc_pass_rA);


$query_secc_passB = "SELECT * FROM secciones
            where nombre_seccion = 'B'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rB = mysqli_query($enlace, $query_secc_passB) or die(mysqli_error());
$query_secc_pass_resultadosB = mysqli_fetch_assoc($query_secc_pass_rB);


$query_secc_passC = "SELECT * FROM secciones
            where nombre_seccion = 'C'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rC = mysqli_query($enlace, $query_secc_passC) or die(mysqli_error());
$query_secc_pass_resultadosC = mysqli_fetch_assoc($query_secc_pass_rC);


$query_secc_passD = "SELECT * FROM secciones
            where nombre_seccion = 'D'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rD = mysqli_query($enlace, $query_secc_passD) or die(mysqli_error());
$query_secc_pass_resultadosD = mysqli_fetch_assoc($query_secc_pass_rD);


$query_secc_passE = "SELECT * FROM secciones
            where nombre_seccion = 'E'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rE = mysqli_query($enlace, $query_secc_passE) or die(mysqli_error());
$query_secc_pass_resultadosE = mysqli_fetch_assoc($query_secc_pass_rE);

$query_secc_passF = "SELECT * FROM secciones
            where nombre_seccion = 'F'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rF = mysqli_query($enlace, $query_secc_passF) or die(mysqli_error());
$query_secc_pass_resultadosF = mysqli_fetch_assoc($query_secc_pass_rF);

$query_secc_passG = "SELECT * FROM secciones
            where nombre_seccion = 'G'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rG = mysqli_query($enlace, $query_secc_passG) or die(mysqli_error());
$query_secc_pass_resultadosG = mysqli_fetch_assoc($query_secc_pass_rG);

$query_secc_passU = "SELECT * FROM secciones
            where nombre_seccion = 'U'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rU = mysqli_query($enlace, $query_secc_passU) or die(mysqli_error());
$query_secc_pass_resultadosU = mysqli_fetch_assoc($query_secc_pass_rU);



mysqli_close($enlace); 

 ?>





<TABLE class="basetabla" cellspacing="-1" style="margin-top:12px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>Maternal</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string52 = $row_datos_controlasign52['grado_pass']; $first52 = $string52[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first52;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string52 = $row_datos_controlasign52['grado_pass']; $first52 = $string52[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first52;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string52 = $row_datos_controlasign52['grado_pass']; $first52 = $string52[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first52;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string52 = $row_datos_controlasign52['grado_pass']; $first52 = $string52[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first52;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string52 = $row_datos_controlasign52['grado_pass']; $first52 = $string52[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first52;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string52 = $row_datos_controlasign52['grado_pass']; $first52 = $string52[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first52;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string52 = $row_datos_controlasign52['grado_pass']; $first52 = $string52[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first52;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string52 = $row_datos_controlasign52['grado_pass']; $first52 = $string52[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first52;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>






<TABLE class="basetabla" cellspacing="-1" style="margin-top:12px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>Pre-Esc 1er Niv.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string54 = $row_datos_controlasign54['grado_pass']; $first54 = $string54[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first54;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string54 = $row_datos_controlasign54['grado_pass']; $first54 = $string54[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first54;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string54 = $row_datos_controlasign54['grado_pass']; $first54 = $string54[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first54;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string54 = $row_datos_controlasign54['grado_pass']; $first54 = $string54[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first54;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string54 = $row_datos_controlasign54['grado_pass']; $first54 = $string54[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first54;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string54 = $row_datos_controlasign54['grado_pass']; $first54 = $string54[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first54;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string54 = $row_datos_controlasign54['grado_pass']; $first54 = $string54[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first54;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string54 = $row_datos_controlasign54['grado_pass']; $first54 = $string54[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first54;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:12px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>Pre-Esc 2do Niv.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string55 = $row_datos_controlasign55['grado_pass']; $first55 = $string55[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first55;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string55 = $row_datos_controlasign55['grado_pass']; $first55 = $string55[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first55;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string55 = $row_datos_controlasign55['grado_pass']; $first55 = $string55[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first55;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string55 = $row_datos_controlasign55['grado_pass']; $first55 = $string55[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first55;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string55 = $row_datos_controlasign55['grado_pass']; $first55 = $string55[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first55;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string55 = $row_datos_controlasign55['grado_pass']; $first55 = $string55[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first55;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string55 = $row_datos_controlasign55['grado_pass']; $first55 = $string55[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first55;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string55 = $row_datos_controlasign55['grado_pass']; $first55 = $string55[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first55;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:12px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>Pre-Esc 3er Niv.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string56 = $row_datos_controlasign56['grado_pass']; $first56 = $string56[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first56;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string56 = $row_datos_controlasign56['grado_pass']; $first56 = $string56[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first56;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string56 = $row_datos_controlasign56['grado_pass']; $first56 = $string56[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first56;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string56 = $row_datos_controlasign56['grado_pass']; $first56 = $string56[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first56;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string56 = $row_datos_controlasign56['grado_pass']; $first56 = $string56[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first56;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string56 = $row_datos_controlasign56['grado_pass']; $first56 = $string56[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first56;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string56 = $row_datos_controlasign56['grado_pass']; $first56 = $string56[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first56;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string56 = $row_datos_controlasign56['grado_pass']; $first56 = $string56[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first56;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>






<TABLE class="basetabla" cellspacing="-1" style="margin-top:36px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>1er Grado.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string35 = $row_datos_controlasign35['grado_pass']; $first35 = $string35[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first35;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string35 = $row_datos_controlasign35['grado_pass']; $first35 = $string35[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first35;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string35 = $row_datos_controlasign35['grado_pass']; $first35 = $string35[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first35;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string35 = $row_datos_controlasign35['grado_pass']; $first35 = $string35[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first35;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string35 = $row_datos_controlasign35['grado_pass']; $first35 = $string35[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first35;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string35 = $row_datos_controlasign35['grado_pass']; $first35 = $string35[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first35;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string35 = $row_datos_controlasign35['grado_pass']; $first35 = $string35[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first35;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string35 = $row_datos_controlasign35['grado_pass']; $first35 = $string35[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first35;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>



<TABLE class="basetabla" cellspacing="-1" style="margin-top:12px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>2do Grado.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string36 = $row_datos_controlasign36['grado_pass']; $first36 = $string36[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first36;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string36 = $row_datos_controlasign36['grado_pass']; $first36 = $string36[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first36;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string36 = $row_datos_controlasign36['grado_pass']; $first36 = $string36[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first36;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string36 = $row_datos_controlasign36['grado_pass']; $first36 = $string36[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first36;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string36 = $row_datos_controlasign36['grado_pass']; $first36 = $string36[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first36;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string36 = $row_datos_controlasign36['grado_pass']; $first36 = $string36[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first36;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string36 = $row_datos_controlasign36['grado_pass']; $first36 = $string36[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first36;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string36 = $row_datos_controlasign36['grado_pass']; $first36 = $string36[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first36;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:12px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>3er Grado.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string37 = $row_datos_controlasign37['grado_pass']; $first37 = $string37[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first37;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string37 = $row_datos_controlasign37['grado_pass']; $first37 = $string37[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first37;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string37 = $row_datos_controlasign37['grado_pass']; $first37 = $string37[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first37;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string37 = $row_datos_controlasign37['grado_pass']; $first37 = $string37[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first37;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string37 = $row_datos_controlasign37['grado_pass']; $first37 = $string37[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first37;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string37 = $row_datos_controlasign37['grado_pass']; $first37 = $string37[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first37;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string37 = $row_datos_controlasign37['grado_pass']; $first37 = $string37[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first37;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string37 = $row_datos_controlasign37['grado_pass']; $first37 = $string37[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first37;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:12px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>4to Grado.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string38 = $row_datos_controlasign38['grado_pass']; $first38 = $string38[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first38;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string38 = $row_datos_controlasign38['grado_pass']; $first38 = $string38[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first38;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string38 = $row_datos_controlasign38['grado_pass']; $first38 = $string38[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first38;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string38 = $row_datos_controlasign38['grado_pass']; $first38 = $string38[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first38;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string38 = $row_datos_controlasign38['grado_pass']; $first38 = $string38[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first38;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string38 = $row_datos_controlasign38['grado_pass']; $first38 = $string38[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first38;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string38 = $row_datos_controlasign38['grado_pass']; $first38 = $string38[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first38;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string38 = $row_datos_controlasign38['grado_pass']; $first38 = $string38[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first38;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>





<TABLE class="basetabla" cellspacing="-1" style="margin-top:12px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>5to Grado.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string40 = $row_datos_controlasign40['grado_pass']; $first40 = $string40[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first40;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string40 = $row_datos_controlasign40['grado_pass']; $first40 = $string40[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first40;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string40 = $row_datos_controlasign40['grado_pass']; $first40 = $string40[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first40;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string40 = $row_datos_controlasign40['grado_pass']; $first40 = $string40[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first40;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string40 = $row_datos_controlasign40['grado_pass']; $first40 = $string40[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first40;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string40 = $row_datos_controlasign40['grado_pass']; $first40 = $string40[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first40;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string40 = $row_datos_controlasign40['grado_pass']; $first40 = $string40[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first40;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string40 = $row_datos_controlasign40['grado_pass']; $first40 = $string40[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first40;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:12px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>6to Grado.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string41 = $row_datos_controlasign41['grado_pass']; $first41 = $string41[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first41;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string41 = $row_datos_controlasign41['grado_pass']; $first41 = $string41[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first41;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string41 = $row_datos_controlasign41['grado_pass']; $first41 = $string41[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first41;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string41 = $row_datos_controlasign41['grado_pass']; $first41 = $string41[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first41;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string41 = $row_datos_controlasign41['grado_pass']; $first41 = $string41[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first41;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string41 = $row_datos_controlasign41['grado_pass']; $first41 = $string41[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first41;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string41 = $row_datos_controlasign41['grado_pass']; $first41 = $string41[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first41;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string41 = $row_datos_controlasign41['grado_pass']; $first41 = $string41[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first41;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>





<TABLE class="basetabla" cellspacing="-1" style="margin-top:36px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>1er Año - 7mo.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string42 = $row_datos_controlasign42['grado_pass']; $first42 = $string42[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first42;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string42 = $row_datos_controlasign42['grado_pass']; $first42 = $string42[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first42;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string42 = $row_datos_controlasign42['grado_pass']; $first42 = $string42[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first42;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string42 = $row_datos_controlasign42['grado_pass']; $first42 = $string42[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first42;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string42 = $row_datos_controlasign42['grado_pass']; $first42 = $string42[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first42;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string42 = $row_datos_controlasign42['grado_pass']; $first42 = $string42[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first42;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string42 = $row_datos_controlasign42['grado_pass']; $first42 = $string42[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first42;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string42 = $row_datos_controlasign42['grado_pass']; $first42 = $string42[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first42;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>



<TABLE class="basetabla" cellspacing="-1" style="margin-top:12px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>2do Año - 8vo.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string43 = $row_datos_controlasign43['grado_pass']; $first43 = $string43[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first43;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string43 = $row_datos_controlasign43['grado_pass']; $first43 = $string43[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first43;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string43 = $row_datos_controlasign43['grado_pass']; $first43 = $string43[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first43;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string43 = $row_datos_controlasign43['grado_pass']; $first43 = $string43[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first43;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string43 = $row_datos_controlasign43['grado_pass']; $first43 = $string43[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first43;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string43 = $row_datos_controlasign43['grado_pass']; $first43 = $string43[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first43;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string43 = $row_datos_controlasign43['grado_pass']; $first43 = $string43[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first43;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string43 = $row_datos_controlasign43['grado_pass']; $first43 = $string43[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first43;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:12px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>3er Año - 9no.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string44 = $row_datos_controlasign44['grado_pass']; $first44 = $string44[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first44;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string44 = $row_datos_controlasign44['grado_pass']; $first44 = $string44[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first44;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string44 = $row_datos_controlasign44['grado_pass']; $first44 = $string44[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first44;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string44 = $row_datos_controlasign44['grado_pass']; $first44 = $string44[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first44;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string44 = $row_datos_controlasign44['grado_pass']; $first44 = $string44[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first44;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string44 = $row_datos_controlasign44['grado_pass']; $first44 = $string44[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first44;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string44 = $row_datos_controlasign44['grado_pass']; $first44 = $string44[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first44;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string44 = $row_datos_controlasign44['grado_pass']; $first44 = $string44[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first44;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>




<TABLE class="basetabla" cellspacing="-1" style="margin-top:12px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>4to Año.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string45 = $row_datos_controlasign45['grado_pass']; $first45 = $string45[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first45;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string45 = $row_datos_controlasign45['grado_pass']; $first45 = $string45[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first45;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string45 = $row_datos_controlasign45['grado_pass']; $first45 = $string45[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first45;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string45 = $row_datos_controlasign45['grado_pass']; $first45 = $string45[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first45;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string45 = $row_datos_controlasign45['grado_pass']; $first45 = $string45[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first45;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string45 = $row_datos_controlasign45['grado_pass']; $first45 = $string45[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first45;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string45 = $row_datos_controlasign45['grado_pass']; $first45 = $string45[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first45;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string45 = $row_datos_controlasign45['grado_pass']; $first45 = $string45[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first45;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>





<TABLE class="basetabla" cellspacing="-1" style="margin-top:12px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>5to Año.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string46 = $row_datos_controlasign46['grado_pass']; $first46 = $string46[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first46;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string46 = $row_datos_controlasign46['grado_pass']; $first46 = $string46[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first46;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string46 = $row_datos_controlasign46['grado_pass']; $first46 = $string46[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first46;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string46 = $row_datos_controlasign46['grado_pass']; $first46 = $string46[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first46;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string46 = $row_datos_controlasign46['grado_pass']; $first46 = $string46[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first46;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string46 = $row_datos_controlasign46['grado_pass']; $first46 = $string46[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first46;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string46 = $row_datos_controlasign46['grado_pass']; $first46 = $string46[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first46;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string46 = $row_datos_controlasign46['grado_pass']; $first46 = $string46[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first46;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>



<TABLE class="basetabla" cellspacing="-1" style="margin-top:12px; " >
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>6to Año.</b>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>A:</b>  <?php $string53 = $row_datos_controlasign53['grado_pass']; $first53 = $string53[0];?> 
         <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first53;?>  
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>B:</b>  <?php $string53 = $row_datos_controlasign53['grado_pass']; $first53 = $string53[0];?> 
         <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first53;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>C:</b>  <?php $string53 = $row_datos_controlasign53['grado_pass']; $first53 = $string53[0];?> 
         <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first53;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>D:</b>  <?php $string53 = $row_datos_controlasign53['grado_pass']; $first53 = $string53[0];?> 
         <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first53;?> 
</TD>
</TR>
<TR> 
<TD class="miniborder" style="width:4%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="center">
</TD>
<TD class="miniborder" style="width:24%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>E:</b>  <?php $string53 = $row_datos_controlasign53['grado_pass']; $first53 = $string53[0];?> 
         <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first53;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>F:</b>  <?php $string53 = $row_datos_controlasign53['grado_pass']; $first53 = $string53[0];?> 
         <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first53;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>G:</b>  <?php $string53 = $row_datos_controlasign53['grado_pass']; $first53 = $string53[0];?> 
         <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first53;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b>U:</b>  <?php $string53 = $row_datos_controlasign53['grado_pass']; $first53 = $string53[0];?> 
         <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first53;?> 
</TD>
<TD class="miniborder" style="width:18%; height:15px; font-size: 13px; color:<?php echo $color_imp3; ?>;" align="LEFT">
<b></b> 
</TD>
</TR>
</TABLE>



</page>











<?php

    $contentxx = ob_get_clean(); 

try
    {
        $hixx = 'ACCESO';

        $html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8', 1);   // el ultimo valor indica el margen izq, der, sup, aba en mm  
        $html2pdf->pdf->SetDisplayMode('fullpage');                         // carta =  'LETTER' 216 x 279,   'LEGAL'  216 x 356
        $html2pdf->writeHTML($contentxx);
        $html2pdf->Output("Hoja_".$hixx.".pdf"); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>