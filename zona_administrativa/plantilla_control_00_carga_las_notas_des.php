<?php

include("identificador.php");

error_reporting(0);

$nnn1 = $nnn['ci'];

$el_g = $nnn['id_grado']; 


//$el_cicloXX = $_SESSION['el_ciclo_exxx'];
$el_cicloXX = $_GET['p78g']; 
$el_gradoXX = $_GET['k2yt'];
$la_seccionXX = $_GET['rt4m'];
$num_materia = $_GET['65bc'];

$el_titulo = $_GET['l22h'];
$la_materia = $_GET['54yu'];

$bb=1;
$cc=1;


include("../conectar.php");

$query_z_puntaje = "SELECT * FROM z_puntaje where pt_selecc = '1' LIMIT 1";

$datos_z_puntaje = mysqli_query($enlace, $query_z_puntaje) or die(mysqli_error());

$row_datos_z_puntaje = mysqli_fetch_array($datos_z_puntaje );

$la_mitad_es = $row_datos_z_puntaje['el_puntaje']/2;

$el_puntaje_completo_es = $row_datos_z_puntaje['el_puntaje'];

$el_puntaje_aprobatorio_aprox = $row_datos_z_puntaje['el_aproximado'];

$el_id_puntaje_es = $row_datos_z_puntaje['id_puntaje'];


$query_grado_ZZA = "SELECT * FROM grados where id_grado = '$el_gradoXX' LIMIT 1";
$datos_grado_ZZA = mysqli_query($enlace, $query_grado_ZZA) or die(mysqli_error());
$row_datos_grado_ZZA = mysqli_fetch_array($datos_grado_ZZA);
$tipo_evaluacion = $row_datos_grado_ZZA['sistema_ev'];

$ver_lapso_aa = $row_datos_grado_ZZA['activo_a'];
$ver_lapso_bb = $row_datos_grado_ZZA['activo_b'];
$ver_lapso_cc = $row_datos_grado_ZZA['activo_c'];
$ver_a_reti = $row_datos_grado_ZZA['ver_reti'];
$ver_corte_finalillo = $row_datos_grado_ZZA['ver_corte_finn'];





mysqli_close($enlace);




$text_rest_a = '';
$text_rest_b = '';
$text_rest_c = '';
$text_rest_d = '';
$text_rest_e = '';
$text_rest_f = '';
$text_rest_g = '';

$apla_nt_11 = '0';
$apla_nt_12 = '0';
$apla_nt_13 = '0';
$apla_nt_14 = '0';
$apla_nt_15 = '0';
$apla_nt_16 = '0';
$apla_nt_17 = '0';

$apla_nt_21 = '0';
$apla_nt_22 = '0';
$apla_nt_23 = '0';
$apla_nt_24 = '0';
$apla_nt_25 = '0';
$apla_nt_26 = '0';
$apla_nt_27 = '0';

$apla_nt_31 = '0';
$apla_nt_32 = '0';
$apla_nt_33 = '0';
$apla_nt_34 = '0';
$apla_nt_35 = '0';
$apla_nt_36 = '0';
$apla_nt_37 = '0';



include("../conectar.php");
$queryasignaturash = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $el_cicloXX
         and  asignatura_ciclo_grado.id_del_grado = $el_gradoXX                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC limit 1" ;

$datos_controlasignh = mysqli_query($enlace, $queryasignaturash) or die(mysqli_error());
$row_datos_controlasignh = mysqli_fetch_array($datos_controlasignh); 

$generalh = $row_datos_controlasignh['grado_pass'];   // me da los primeros 4 generales

$asign1_pass = $row_datos_controlasignh['a_pass'];
$asign2_pass = $row_datos_controlasignh['b_pass'];
$asign3_pass = $row_datos_controlasignh['c_pass'];
$asign4_pass = $row_datos_controlasignh['d_pass'];
$asign5_pass = $row_datos_controlasignh['e_pass'];
$asign6_pass = $row_datos_controlasignh['f_pass'];
$asign7_pass = $row_datos_controlasignh['g_pass'];
$asign8_pass = $row_datos_controlasignh['h_pass'];
$asign9_pass = $row_datos_controlasignh['i_pass'];
$asign10_pass = $row_datos_controlasignh['j_pass'];
$asign11_pass = $row_datos_controlasignh['k_pass'];
$asign12_pass = $row_datos_controlasignh['l_pass'];
$asign13_pass = $row_datos_controlasignh['m_pass'];
$asign14_pass = $row_datos_controlasignh['n_pass'];

$query_secc_pass = "SELECT * FROM secciones
            where id_seccion = $la_seccionXX
            GROUP BY id_seccion limit 1";



$query_secc_pass_r = mysqli_query($enlace, $query_secc_pass) or die(mysqli_error());
$query_secc_pass_resultados = mysqli_fetch_assoc($query_secc_pass_r);

$seccion_parcial = $query_secc_pass_resultados['pass'];
$seccion_continuacion = $generalh[0];

$seccion_completa = ''.$generalh.''.$seccion_parcial.''.$seccion_continuacion.'';

$materia1 = ''.$asign1_pass.''.$seccion_parcial.''.$seccion_continuacion.'';
$materia2 = ''.$asign2_pass.''.$seccion_parcial.''.$seccion_continuacion.'';
$materia3 = ''.$asign3_pass.''.$seccion_parcial.''.$seccion_continuacion.'';
$materia4 = ''.$asign4_pass.''.$seccion_parcial.''.$seccion_continuacion.'';
$materia5 = ''.$asign5_pass.''.$seccion_parcial.''.$seccion_continuacion.'';
$materia6 = ''.$asign6_pass.''.$seccion_parcial.''.$seccion_continuacion.'';
$materia7 = ''.$asign7_pass.''.$seccion_parcial.''.$seccion_continuacion.'';
$materia8 = ''.$asign8_pass.''.$seccion_parcial.''.$seccion_continuacion.'';
$materia9 = ''.$asign9_pass.''.$seccion_parcial.''.$seccion_continuacion.'';
$materia10 = ''.$asign10_pass.''.$seccion_parcial.''.$seccion_continuacion.'';
$materia11 = ''.$asign11_pass.''.$seccion_parcial.''.$seccion_continuacion.'';
$materia12 = ''.$asign12_pass.''.$seccion_parcial.''.$seccion_continuacion.'';
$materia13 = ''.$asign13_pass.''.$seccion_parcial.''.$seccion_continuacion.'';
$materia14 = ''.$asign14_pass.''.$seccion_parcial.''.$seccion_continuacion.'';

 mysqli_close($enlace); 

if ($_SESSION['materia_general'] != 99 ) {

if ($_SESSION['materia'] != $num_materia ) {
  echo "<script>window.close();</script>";
}  }



if ($_SESSION['pass_ingresado'] != $seccion_completa) {

   if ($_SESSION['pass_ingresado'] != $materia1) {
    
    if ($_SESSION['pass_ingresado'] != $materia2) {
        
        if ($_SESSION['pass_ingresado'] != $materia3) {
    
        if ($_SESSION['pass_ingresado'] != $materia4) {
  
          if ($_SESSION['pass_ingresado'] != $materia5) {
        
              if ($_SESSION['pass_ingresado'] != $materia6) {
      
                    if ($_SESSION['pass_ingresado'] != $materia7) {

                      if ($_SESSION['pass_ingresado'] != $materia8) {

                                 if ($_SESSION['pass_ingresado'] != $materia9) {

                                  if ($_SESSION['pass_ingresado'] != $materia10) {
        
        if ($_SESSION['pass_ingresado'] != $materia11) {
  
          if ($_SESSION['pass_ingresado'] != $materia12) {
        
if ($_SESSION['pass_ingresado'] != $materia13) {
        if ($_SESSION['pass_ingresado'] != $materia14) {
        echo "<script>window.close();</script>";
  }      
  }      
  } 
  }     
  }      
  }
  }
  }
  }
  }
  }
  }
  }
  }

}  






include("../conectar.php");

$queryasignaturas = "SELECT * FROM asignatura_ciclo_grado
         WHERE id_del_ciclo = $el_cicloXX
         and   id_del_grado = $el_gradoXX
                 
         GROUP BY id_asign_ciclo_grado Limit 1" ;

$datos_controlasign = mysqli_query($enlace, $queryasignaturas) or die(mysqli_error());
$row_datos_controlasign = mysqli_fetch_array($datos_controlasign); 

$la_asign_es = $row_datos_controlasign['id_asignatura'];


mysqli_close($enlace);  






$i = 1;


// guarda los valores de los porcentajes del 1er Lapso

if(isset($_POST['porcentaje_1er_L']))
        {

$L1_V1_porcentaje = Null;
$L1_V1_porcentaje = !empty($_POST['L1-V1']) ? "'$L1_V1_porcentaje'" : "NULL";

$L1_V2_porcentaje = Null;
$L1_V2_porcentaje = !empty($_POST['L1-V2']) ? "'$L1_V2_porcentaje'" : "NULL";

$L1_V3_porcentaje = Null;
$L1_V3_porcentaje = !empty($_POST['L1-V3']) ? "'$L1_V3_porcentaje'" : "NULL";

$L1_V4_porcentaje = Null;
$L1_V4_porcentaje = !empty($_POST['L1-V4']) ? "'$L1_V4_porcentaje'" : "NULL";

$L1_V5_porcentaje = Null;
$L1_V5_porcentaje = !empty($_POST['L1-V5']) ? "'$L1_V5_porcentaje'" : "NULL";

$L1_V6_porcentaje = Null;
$L1_V6_porcentaje = !empty($_POST['L1-V6']) ? "'$L1_V6_porcentaje'" : "NULL";

$L1_V7_porcentaje = Null;
$L1_V7_porcentaje = !empty($_POST['L1-V7']) ? "'$L1_V7_porcentaje'" : "NULL";



        if ($_POST['L1-V1'])       // si tiene algo entra aqui
                            {         $L1_V1_porcentaje = $_POST['L1-V1'];
if(!is_numeric($_POST['L1-V1']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 1 del 1er Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}  // cierre de si  tiene algo

        if ($_POST['L1-V2'])       // si tiene algo entra aqui
                            {        $L1_V2_porcentaje = $_POST['L1-V2'];
if(!is_numeric($_POST['L1-V2']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 2 del 1er Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}


        if ($_POST['L1-V3'])       // si tiene algo entra aqui
                            {       $L1_V3_porcentaje = $_POST['L1-V3'];
if(!is_numeric($_POST['L1-V3']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 3 del 1er Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}

        if ($_POST['L1-V4'])       // si tiene algo entra aqui
                            {      $L1_V4_porcentaje = $_POST['L1-V4'];
if(!is_numeric($_POST['L1-V4']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 4 del 1er Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}


        if ($_POST['L1-V5'])       // si tiene algo entra aqui
                            {        $L1_V5_porcentaje = $_POST['L1-V5'];
if(!is_numeric($_POST['L1-V5']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 5 del 1er Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}


        if ($_POST['L1-V6'])       // si tiene algo entra aqui
                            {        $L1_V6_porcentaje = $_POST['L1-V6'];
if(!is_numeric($_POST['L1-V6']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 6 del 1er Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}

        if ($_POST['L1-V7'])       // si tiene algo entra aqui
                            {       $L1_V7_porcentaje = $_POST['L1-V7'];
if(!is_numeric($_POST['L1-V7']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 7 del 1er Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }

}

    if ($errorZ!="")   //  si $errorZ es distinto de vacío,  es que ha habido algun error
    {
        $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";            
    }


else { 

   

include("../conectar.php");  


if ($num_materia == '1') {  


    $sql_ass = "UPDATE asignaturas SET A11 = $L1_V1_porcentaje,
                                   A12 = $L1_V2_porcentaje,
                                   A13 = $L1_V3_porcentaje,
                                   A14 = $L1_V4_porcentaje,
                                   A15 = $L1_V5_porcentaje,
                                   A16 = $L1_V6_porcentaje,
                                   A17 = $L1_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 1er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '2') {  

    $sql_ass = "UPDATE asignaturas SET B11 = $L1_V1_porcentaje,
                                   B12 = $L1_V2_porcentaje,
                                   B13 = $L1_V3_porcentaje,
                                   B14 = $L1_V4_porcentaje,
                                   B15 = $L1_V5_porcentaje,
                                   B16 = $L1_V6_porcentaje,
                                   B17 = $L1_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 1er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '3') {  

    $sql_ass = "UPDATE asignaturas SET C11 = $L1_V1_porcentaje,
                                   C12 = $L1_V2_porcentaje,
                                   C13 = $L1_V3_porcentaje,
                                   C14 = $L1_V4_porcentaje,
                                   C15 = $L1_V5_porcentaje,
                                   C16 = $L1_V6_porcentaje,
                                   C17 = $L1_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 1er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '4') {  

    $sql_ass = "UPDATE asignaturas SET D11 = $L1_V1_porcentaje,
                                   D12 = $L1_V2_porcentaje,
                                   D13 = $L1_V3_porcentaje,
                                   D14 = $L1_V4_porcentaje,
                                   D15 = $L1_V5_porcentaje,
                                   D16 = $L1_V6_porcentaje,
                                   D17 = $L1_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 1er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '5') {  

    $sql_ass = "UPDATE asignaturas SET E11 = $L1_V1_porcentaje,
                                   E12 = $L1_V2_porcentaje,
                                   E13 = $L1_V3_porcentaje,
                                   E14 = $L1_V4_porcentaje,
                                   E15 = $L1_V5_porcentaje,
                                   E16 = $L1_V6_porcentaje,
                                   E17 = $L1_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 1er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '6') {  

    $sql_ass = "UPDATE asignaturas SET F11 = $L1_V1_porcentaje,
                                   F12 = $L1_V2_porcentaje,
                                   F13 = $L1_V3_porcentaje,
                                   F14 = $L1_V4_porcentaje,
                                   F15 = $L1_V5_porcentaje,
                                   F16 = $L1_V6_porcentaje,
                                   F17 = $L1_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 1er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '7') {  

    $sql_ass = "UPDATE asignaturas SET G11 = $L1_V1_porcentaje,
                                   G12 = $L1_V2_porcentaje,
                                   G13 = $L1_V3_porcentaje,
                                   G14 = $L1_V4_porcentaje,
                                   G15 = $L1_V5_porcentaje,
                                   G16 = $L1_V6_porcentaje,
                                   G17 = $L1_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 1er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '8') {  

    $sql_ass = "UPDATE asignaturas SET H11 = $L1_V1_porcentaje,
                                   H12 = $L1_V2_porcentaje,
                                   H13 = $L1_V3_porcentaje,
                                   H14 = $L1_V4_porcentaje,
                                   H15 = $L1_V5_porcentaje,
                                   H16 = $L1_V6_porcentaje,
                                   H17 = $L1_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 1er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '9') {  

    $sql_ass = "UPDATE asignaturas SET I11 = $L1_V1_porcentaje,
                                   I12 = $L1_V2_porcentaje,
                                   I13 = $L1_V3_porcentaje,
                                   I14 = $L1_V4_porcentaje,
                                   I15 = $L1_V5_porcentaje,
                                   I16 = $L1_V6_porcentaje,
                                   I17 = $L1_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 1er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '10') {  

    $sql_ass = "UPDATE asignaturas SET J11 = $L1_V1_porcentaje,
                                   J12 = $L1_V2_porcentaje,
                                   J13 = $L1_V3_porcentaje,
                                   J14 = $L1_V4_porcentaje,
                                   J15 = $L1_V5_porcentaje,
                                   J16 = $L1_V6_porcentaje,
                                   J17 = $L1_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 1er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '11') {  

    $sql_ass = "UPDATE asignaturas SET K11 = $L1_V1_porcentaje,
                                   K12 = $L1_V2_porcentaje,
                                   K13 = $L1_V3_porcentaje,
                                   K14 = $L1_V4_porcentaje,
                                   K15 = $L1_V5_porcentaje,
                                   K16 = $L1_V6_porcentaje,
                                   K17 = $L1_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 1er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '12') {  

    $sql_ass = "UPDATE asignaturas SET L11 = $L1_V1_porcentaje,
                                   L12 = $L1_V2_porcentaje,
                                   L13 = $L1_V3_porcentaje,
                                   L14 = $L1_V4_porcentaje,
                                   L15 = $L1_V5_porcentaje,
                                   L16 = $L1_V6_porcentaje,
                                   L17 = $L1_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 1er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '13') {  


    $sql_ass = "UPDATE asignaturas SET M11 = $L1_V1_porcentaje,
                                   M12 = $L1_V2_porcentaje,
                                   M13 = $L1_V3_porcentaje,
                                   M14 = $L1_V4_porcentaje,
                                   M15 = $L1_V5_porcentaje,
                                   M16 = $L1_V6_porcentaje,
                                   M17 = $L1_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 1er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '14') {  

    $sql_ass = "UPDATE asignaturas SET N11 = $L1_V1_porcentaje,
                                   N12 = $L1_V2_porcentaje,
                                   N13 = $L1_V3_porcentaje,
                                   N14 = $L1_V4_porcentaje,
                                   N15 = $L1_V5_porcentaje,
                                   N16 = $L1_V6_porcentaje,
                                   N17 = $L1_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 1er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


} // cierre del else, si los porcentajes estan acordes


} // cierre de actualizar el 1er lapso





// guarda los valores de los porcentajes del 2do Lapso

if(isset($_POST['porcentaje_2do_L']))
        {
$L2_V1_porcentaje = Null;
$L2_V1_porcentaje = !empty($_POST['L2-V1']) ? "'$L2_V1_porcentaje'" : "NULL";

$L2_V2_porcentaje = Null;
$L2_V2_porcentaje = !empty($_POST['L2-V2']) ? "'$L2_V2_porcentaje'" : "NULL";

$L2_V3_porcentaje = Null;
$L2_V3_porcentaje = !empty($_POST['L2-V3']) ? "'$L2_V3_porcentaje'" : "NULL";

$L2_V4_porcentaje = Null;
$L2_V4_porcentaje = !empty($_POST['L2-V4']) ? "'$L2_V4_porcentaje'" : "NULL";

$L2_V5_porcentaje = Null;
$L2_V5_porcentaje = !empty($_POST['L2-V5']) ? "'$L2_V5_porcentaje'" : "NULL";

$L2_V6_porcentaje = Null;
$L2_V6_porcentaje = !empty($_POST['L2-V6']) ? "'$L2_V6_porcentaje'" : "NULL";

$L2_V7_porcentaje = Null;
$L2_V7_porcentaje = !empty($_POST['L2-V7']) ? "'$L2_V7_porcentaje'" : "NULL";


        if ($_POST['L2-V1'])       // si tiene algo entra aqui
                            {         $L2_V1_porcentaje = $_POST['L2-V1'];
if(!is_numeric($_POST['L2-V1']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 1 del 2do Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}  // cierre de si  tiene algo

        if ($_POST['L2-V2'])       // si tiene algo entra aqui
                            {        $L2_V2_porcentaje = $_POST['L2-V2'];
if(!is_numeric($_POST['L2-V2']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 2 del 2do Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}


        if ($_POST['L2-V3'])       // si tiene algo entra aqui
                            {       $L2_V3_porcentaje = $_POST['L2-V3'];
if(!is_numeric($_POST['L2-V3']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 3 del 2do Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}

        if ($_POST['L2-V4'])       // si tiene algo entra aqui
                            {      $L2_V4_porcentaje = $_POST['L2-V4'];
if(!is_numeric($_POST['L2-V4']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 4 del 2do Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}


        if ($_POST['L2-V5'])       // si tiene algo entra aqui
                            {        $L2_V5_porcentaje = $_POST['L2-V5'];
if(!is_numeric($_POST['L2-V5']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 5 del 2do Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}


        if ($_POST['L2-V6'])       // si tiene algo entra aqui
                            {        $L2_V6_porcentaje = $_POST['L2-V6'];
if(!is_numeric($_POST['L2-V6']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 6 del 2do Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}

        if ($_POST['L2-V7'])       // si tiene algo entra aqui
                            {       $L2_V7_porcentaje = $_POST['L2-V7'];
if(!is_numeric($_POST['L2-V7']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 7 del 2do Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }

}

    if ($errorZ!="")   //  si $errorZ es distinto de vacío,  es que ha habido algun error
    {
        $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";            
    }


else { 

   

include("../conectar.php");  


if ($num_materia == '1') {  


    $sql_ass = "UPDATE asignaturas SET A21 = $L2_V1_porcentaje,
                                   A22 = $L2_V2_porcentaje,
                                   A23 = $L2_V3_porcentaje,
                                   A24 = $L2_V4_porcentaje,
                                   A25 = $L2_V5_porcentaje,
                                   A26 = $L2_V6_porcentaje,
                                   A27 = $L2_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 2do Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '2') {  

    $sql_ass = "UPDATE asignaturas SET B21 = $L2_V1_porcentaje,
                                   B22 = $L2_V2_porcentaje,
                                   B23 = $L2_V3_porcentaje,
                                   B24 = $L2_V4_porcentaje,
                                   B25 = $L2_V5_porcentaje,
                                   B26 = $L2_V6_porcentaje,
                                   B27 = $L2_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 2do Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '3') {  

    $sql_ass = "UPDATE asignaturas SET C21 = $L2_V1_porcentaje,
                                   C22 = $L2_V2_porcentaje,
                                   C23 = $L2_V3_porcentaje,
                                   C24 = $L2_V4_porcentaje,
                                   C25 = $L2_V5_porcentaje,
                                   C26 = $L2_V6_porcentaje,
                                   C27 = $L2_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 2do Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '4') {  

    $sql_ass = "UPDATE asignaturas SET D21 = $L2_V1_porcentaje,
                                   D22 = $L2_V2_porcentaje,
                                   D23 = $L2_V3_porcentaje,
                                   D24 = $L2_V4_porcentaje,
                                   D25 = $L2_V5_porcentaje,
                                   D26 = $L2_V6_porcentaje,
                                   D27 = $L2_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 2do Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '5') {  

    $sql_ass = "UPDATE asignaturas SET E21 = $L2_V1_porcentaje,
                                   E22 = $L2_V2_porcentaje,
                                   E23 = $L2_V3_porcentaje,
                                   E24 = $L2_V4_porcentaje,
                                   E25 = $L2_V5_porcentaje,
                                   E26 = $L2_V6_porcentaje,
                                   E27 = $L2_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 2do Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '6') {  

    $sql_ass = "UPDATE asignaturas SET F21 = $L2_V1_porcentaje,
                                   F22 = $L2_V2_porcentaje,
                                   F23 = $L2_V3_porcentaje,
                                   F24 = $L2_V4_porcentaje,
                                   F25 = $L2_V5_porcentaje,
                                   F26 = $L2_V6_porcentaje,
                                   F27 = $L2_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 2do Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '7') {  

    $sql_ass = "UPDATE asignaturas SET G21 = $L2_V1_porcentaje,
                                   G22 = $L2_V2_porcentaje,
                                   G23 = $L2_V3_porcentaje,
                                   G24 = $L2_V4_porcentaje,
                                   G25 = $L2_V5_porcentaje,
                                   G26 = $L2_V6_porcentaje,
                                   G27 = $L2_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 2do Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '8') {  

    $sql_ass = "UPDATE asignaturas SET H21 = $L2_V1_porcentaje,
                                   H22 = $L2_V2_porcentaje,
                                   H23 = $L2_V3_porcentaje,
                                   H24 = $L2_V4_porcentaje,
                                   H25 = $L2_V5_porcentaje,
                                   H26 = $L2_V6_porcentaje,
                                   H27 = $L2_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 2do Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '9') {  

    $sql_ass = "UPDATE asignaturas SET I21 = $L2_V1_porcentaje,
                                   I22 = $L2_V2_porcentaje,
                                   I23 = $L2_V3_porcentaje,
                                   I24 = $L2_V4_porcentaje,
                                   I25 = $L2_V5_porcentaje,
                                   I26 = $L2_V6_porcentaje,
                                   I27 = $L2_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 2do Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '10') {  

    $sql_ass = "UPDATE asignaturas SET J21 = $L2_V1_porcentaje,
                                   J22 = $L2_V2_porcentaje,
                                   J23 = $L2_V3_porcentaje,
                                   J24 = $L2_V4_porcentaje,
                                   J25 = $L2_V5_porcentaje,
                                   J26 = $L2_V6_porcentaje,
                                   J27 = $L2_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 2do Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '11') {  

    $sql_ass = "UPDATE asignaturas SET K21 = $L2_V1_porcentaje,
                                   K22 = $L2_V2_porcentaje,
                                   K23 = $L2_V3_porcentaje,
                                   K24 = $L2_V4_porcentaje,
                                   K25 = $L2_V5_porcentaje,
                                   K26 = $L2_V6_porcentaje,
                                   K27 = $L2_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 2do Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '12') {  

    $sql_ass = "UPDATE asignaturas SET L21 = $L2_V1_porcentaje,
                                   L22 = $L2_V2_porcentaje,
                                   L23 = $L2_V3_porcentaje,
                                   L24 = $L2_V4_porcentaje,
                                   L25 = $L2_V5_porcentaje,
                                   L26 = $L2_V6_porcentaje,
                                   L27 = $L2_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 2do Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '13') {  


    $sql_ass = "UPDATE asignaturas SET M21 = $L2_V1_porcentaje,
                                   M22 = $L2_V2_porcentaje,
                                   M23 = $L2_V3_porcentaje,
                                   M24 = $L2_V4_porcentaje,
                                   M25 = $L2_V5_porcentaje,
                                   M26 = $L2_V6_porcentaje,
                                   M27 = $L2_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 2do Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '14') {  

    $sql_ass = "UPDATE asignaturas SET N21 = $L2_V1_porcentaje,
                                   N22 = $L2_V2_porcentaje,
                                   N23 = $L2_V3_porcentaje,
                                   N24 = $L2_V4_porcentaje,
                                   N25 = $L2_V5_porcentaje,
                                   N26 = $L2_V6_porcentaje,
                                   N27 = $L2_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 2do Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


} // cierre del else, si los porcentajes estan acordes


} // cierre de actualizar el 2do lapso





// guarda los valores de los porcentajes del 3er Lapso

if(isset($_POST['porcentaje_3er_L']))
        {

$L3_V1_porcentaje = Null;
$L3_V1_porcentaje = !empty($_POST['L3-V1']) ? "'$L3_V1_porcentaje'" : "NULL";

$L3_V2_porcentaje = Null;
$L3_V2_porcentaje = !empty($_POST['L3-V2']) ? "'$L3_V2_porcentaje'" : "NULL";

$L3_V3_porcentaje = Null;
$L3_V3_porcentaje = !empty($_POST['L3-V3']) ? "'$L3_V3_porcentaje'" : "NULL";

$L3_V4_porcentaje = Null;
$L3_V4_porcentaje = !empty($_POST['L3-V4']) ? "'$L3_V4_porcentaje'" : "NULL";

$L3_V5_porcentaje = Null;
$L3_V5_porcentaje = !empty($_POST['L3-V5']) ? "'$L3_V5_porcentaje'" : "NULL";

$L3_V6_porcentaje = Null;
$L3_V6_porcentaje = !empty($_POST['L3-V6']) ? "'$L3_V6_porcentaje'" : "NULL";

$L3_V7_porcentaje = Null;
$L3_V7_porcentaje = !empty($_POST['L3-V7']) ? "'$L3_V7_porcentaje'" : "NULL";


        if ($_POST['L3-V1'])       // si tiene algo entra aqui
                            {         $L3_V1_porcentaje = $_POST['L3-V1'];
if(!is_numeric($_POST['L3-V1']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 1 del 3er Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}  // cierre de si  tiene algo

        if ($_POST['L3-V2'])       // si tiene algo entra aqui
                            {        $L3_V2_porcentaje = $_POST['L3-V2'];
if(!is_numeric($_POST['L3-V2']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 2 del 3er Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}


        if ($_POST['L3-V3'])       // si tiene algo entra aqui
                            {       $L3_V3_porcentaje = $_POST['L3-V3'];
if(!is_numeric($_POST['L3-V3']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 3 del 3er Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}

        if ($_POST['L3-V4'])       // si tiene algo entra aqui
                            {      $L3_V4_porcentaje = $_POST['L3-V4'];
if(!is_numeric($_POST['L3-V4']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 4 del 3er Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}


        if ($_POST['L3-V5'])       // si tiene algo entra aqui
                            {        $L3_V5_porcentaje = $_POST['L3-V5'];
if(!is_numeric($_POST['L3-V5']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 5 del 3er Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}


        if ($_POST['L3-V6'])       // si tiene algo entra aqui
                            {        $L3_V6_porcentaje = $_POST['L3-V6'];
if(!is_numeric($_POST['L3-V6']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 6 del 3er Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }
}

        if ($_POST['L3-V7'])       // si tiene algo entra aqui
                            {       $L3_V7_porcentaje = $_POST['L3-V7'];
if(!is_numeric($_POST['L3-V7']) ) // verifica que sean solo números
{  $errorZ .= "- Valor Porcentaje &nbsp;<b>actividad 7 del 3er Lapso</b>&nbsp; es incorrecto, favor introducir solo valores númericos."; }

}

    if ($errorZ!="")   //  si $errorZ es distinto de vacío,  es que ha habido algun error
    {
        $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";            
    }


else { 

   

include("../conectar.php");  


if ($num_materia == '1') {  


    $sql_ass = "UPDATE asignaturas SET A31 = $L3_V1_porcentaje,
                                   A32 = $L3_V2_porcentaje,
                                   A33 = $L3_V3_porcentaje,
                                   A34 = $L3_V4_porcentaje,
                                   A35 = $L3_V5_porcentaje,
                                   A36 = $L3_V6_porcentaje,
                                   A37 = $L3_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 3er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '2') {  

    $sql_ass = "UPDATE asignaturas SET B31 = $L3_V1_porcentaje,
                                   B32 = $L3_V2_porcentaje,
                                   B33 = $L3_V3_porcentaje,
                                   B34 = $L3_V4_porcentaje,
                                   B35 = $L3_V5_porcentaje,
                                   B36 = $L3_V6_porcentaje,
                                   B37 = $L3_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 3er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '3') {  

    $sql_ass = "UPDATE asignaturas SET C31 = $L3_V1_porcentaje,
                                   C32 = $L3_V2_porcentaje,
                                   C33 = $L3_V3_porcentaje,
                                   C34 = $L3_V4_porcentaje,
                                   C35 = $L3_V5_porcentaje,
                                   C36 = $L3_V6_porcentaje,
                                   C37 = $L3_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 3er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '4') {  

    $sql_ass = "UPDATE asignaturas SET D31 = $L3_V1_porcentaje,
                                   D32 = $L3_V2_porcentaje,
                                   D33 = $L3_V3_porcentaje,
                                   D34 = $L3_V4_porcentaje,
                                   D35 = $L3_V5_porcentaje,
                                   D36 = $L3_V6_porcentaje,
                                   D37 = $L3_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 3er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '5') {  

    $sql_ass = "UPDATE asignaturas SET E31 = $L3_V1_porcentaje,
                                   E32 = $L3_V2_porcentaje,
                                   E33 = $L3_V3_porcentaje,
                                   E34 = $L3_V4_porcentaje,
                                   E35 = $L3_V5_porcentaje,
                                   E36 = $L3_V6_porcentaje,
                                   E37 = $L3_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 3er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '6') {  

    $sql_ass = "UPDATE asignaturas SET F31 = $L3_V1_porcentaje,
                                   F32 = $L3_V2_porcentaje,
                                   F33 = $L3_V3_porcentaje,
                                   F34 = $L3_V4_porcentaje,
                                   F35 = $L3_V5_porcentaje,
                                   F36 = $L3_V6_porcentaje,
                                   F37 = $L3_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 3er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '7') {  

    $sql_ass = "UPDATE asignaturas SET G31 = $L3_V1_porcentaje,
                                   G32 = $L3_V2_porcentaje,
                                   G33 = $L3_V3_porcentaje,
                                   G34 = $L3_V4_porcentaje,
                                   G35 = $L3_V5_porcentaje,
                                   G36 = $L3_V6_porcentaje,
                                   G37 = $L3_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 3er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '8') {  

    $sql_ass = "UPDATE asignaturas SET H31 = $L3_V1_porcentaje,
                                   H32 = $L3_V2_porcentaje,
                                   H33 = $L3_V3_porcentaje,
                                   H34 = $L3_V4_porcentaje,
                                   H35 = $L3_V5_porcentaje,
                                   H36 = $L3_V6_porcentaje,
                                   H37 = $L3_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 3er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '9') {  

    $sql_ass = "UPDATE asignaturas SET I31 = $L3_V1_porcentaje,
                                   I32 = $L3_V2_porcentaje,
                                   I33 = $L3_V3_porcentaje,
                                   I34 = $L3_V4_porcentaje,
                                   I35 = $L3_V5_porcentaje,
                                   I36 = $L3_V6_porcentaje,
                                   I37 = $L3_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 3er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '10') {  

    $sql_ass = "UPDATE asignaturas SET J31 = $L3_V1_porcentaje,
                                   J32 = $L3_V2_porcentaje,
                                   J33 = $L3_V3_porcentaje,
                                   J34 = $L3_V4_porcentaje,
                                   J35 = $L3_V5_porcentaje,
                                   J36 = $L3_V6_porcentaje,
                                   J37 = $L3_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 3er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '11') {  

    $sql_ass = "UPDATE asignaturas SET K31 = $L3_V1_porcentaje,
                                   K32 = $L3_V2_porcentaje,
                                   K33 = $L3_V3_porcentaje,
                                   K34 = $L3_V4_porcentaje,
                                   K35 = $L3_V5_porcentaje,
                                   K36 = $L3_V6_porcentaje,
                                   K37 = $L3_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 3er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '12') {  

    $sql_ass = "UPDATE asignaturas SET L31 = $L3_V1_porcentaje,
                                   L32 = $L3_V2_porcentaje,
                                   L33 = $L3_V3_porcentaje,
                                   L34 = $L3_V4_porcentaje,
                                   L35 = $L3_V5_porcentaje,
                                   L36 = $L3_V6_porcentaje,
                                   L37 = $L3_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 3er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '13') {  


    $sql_ass = "UPDATE asignaturas SET M31 = $L3_V1_porcentaje,
                                   M32 = $L3_V2_porcentaje,
                                   M33 = $L3_V3_porcentaje,
                                   M34 = $L3_V4_porcentaje,
                                   M35 = $L3_V5_porcentaje,
                                   M36 = $L3_V6_porcentaje,
                                   M37 = $L3_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 3er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


if ($num_materia == '14') {  

    $sql_ass = "UPDATE asignaturas SET N31 = $L3_V1_porcentaje,
                                   N32 = $L3_V2_porcentaje,
                                   N33 = $L3_V3_porcentaje,
                                   N34 = $L3_V4_porcentaje,
                                   N35 = $L3_V5_porcentaje,
                                   N36 = $L3_V6_porcentaje,
                                   N37 = $L3_V7_porcentaje
                                                
           WHERE id_asign ='$la_asign_es' LIMIT 1 ";
                       
                            if (!mysqli_query($enlace,$sql_ass))      // actualiza y si no ha logrado ingresar los datos
                                   {
                                    $errorZ="- Error al guardar los porcentajes, intente de nuevo o contacte al Ing. ";
                                    mysqli_close($enlace);                                
                                    }

                             else{
                                    $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Porcentajes del 3er Lapso Actualizados. </b>"; 
                                    mysqli_close($enlace);   
                                }

}


} // cierre del else, si los porcentajes estan acordes


} // cierre de actualizar el 3er lapso





if(isset($_POST['guardar_1act1'])) // primer lapso
        {

$AA_L1_N1 = Null;
$errorZ = '';
$exitoZ = '';


$tot_cuenta_L1_N1 = $_POST["conteo_global_L1_N1"];
$count_L1_N1=$tot_cuenta_L1_N1;

include("../conectar.php");  

    for($i=0;$i<$count_L1_N1;$i++){  // segun el total de filas, hace...

// $AA_L1_N1 = !empty($_POST["AA_L1-N1"][$i]) ? "'$AA_L1_N1'" : "NULL"; 




if ($_POST["AA_L1-N1"][$i] !='') {
  $AA_L1_N1 = $_POST["AA_L1-N1"][$i];
}
if ($_POST["AA_L1-N1"][$i] =='') {
  $AA_L1_N1  = 'Null';
}



if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["AA_L1-D1"][0] !='') {
                    $AA_L1_D1 = $_POST["AA_L1-D1"][0];
                      }

                    if ($_POST["AA_L1-D1"][0] =='') {
                    $AA_L1_D1  = 'Null';

                    
                       }    }


else {  

if ($_POST["AA_L1-D1"][$i] !='') {
  $AA_L1_D1 = $_POST["AA_L1-D1"][$i];
}
if ($_POST["AA_L1-D1"][$i] =='') {
  $AA_L1_D1  = 'Null';
}

}

  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_aa="UPDATE asign_notas 
                        SET nt_11 = $AA_L1_N1, d_11 = $AA_L1_D1                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_aa=mysqli_query($enlace, $sql_del_primer_aa);
             }   
 if ($result_primer_aa !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 1- 1er Lapso. ";  

        mysqli_close($enlace);
               }               

            else{   $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 1- 1er Lapso. ";

              mysqli_close($enlace);
              }
        }   // cierre guardar act1 del 1er lapso






if(isset($_POST['guardar_1act2']))
        {

$BB_L1_N2 = Null;
$errorZ = '';
$exitoZ = '';


$tot_cuenta_L1_N2 = $_POST["conteo_global_L1_N2"];
$count_L1_N2=$tot_cuenta_L1_N2;

include("../conectar.php");  

    for($i=0;$i<$count_L1_N2;$i++){  // segun el total de filas, hace...



// $BB_L1_N2 = !empty($_POST["BB_L1-N2"][$i]) ? "'$BB_L1_N2'" : "NULL"; 

if ($_POST["BB_L1-N2"][$i] !='') {
  $BB_L1_N2 = $_POST["BB_L1-N2"][$i];
}

if ($_POST["BB_L1-N2"][$i] =='') {
  $BB_L1_N2  = 'Null';
}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["BB_L1-D2"][0] !='') {
                    $BB_L1_D2 = $_POST["BB_L1-D2"][0];
                      }

                    if ($_POST["BB_L1-D2"][0] =='') {
                    $BB_L1_D2  = 'Null';

                    
                       }    }


else {  



if ($_POST["BB_L1-D2"][$i] !='') {
  $BB_L1_D2 = $_POST["BB_L1-D2"][$i];
}
if ($_POST["BB_L1-D2"][$i] =='') {
  $BB_L1_D2  = 'Null';
}




}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_bb="UPDATE asign_notas 
                        SET nt_12 = $BB_L1_N2, d_12 = $BB_L1_D2                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_bb=mysqli_query($enlace, $sql_del_primer_bb);
       
      }   

 if ($result_primer_bb !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 2- 1er Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 2- 1er Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso



if(isset($_POST['guardar_1act3']))
        {

$CC_L1_N3 = Null;
$errorZ = '';
$exitoZ = '';


$tot_cuenta_L1_N3 = $_POST["conteo_global_L1_N3"];
$count_L1_N3=$tot_cuenta_L1_N3;

include("../conectar.php");  

    for($i=0;$i<$count_L1_N3;$i++){  // segun el total de filas, hace...



// $CC_L1_N3 = !empty($_POST["CC_L1-N3"][$i]) ? "'$CC_L1_N3'" : "NULL"; 

if ($_POST["CC_L1-N3"][$i] !='') {
  $CC_L1_N3 = $_POST["CC_L1-N3"][$i];
}

if ($_POST["CC_L1-N3"][$i] =='') {
  $CC_L1_N3  = 'Null';
}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["CC_L1-D3"][0] !='') {
                    $CC_L1_D3 = $_POST["CC_L1-D3"][0];
                      }

                    if ($_POST["CC_L1-D3"][0] =='') {
                    $CC_L1_D3  = 'Null';

                    
                       }    }


else {  



 if ($_POST["CC_L1-D3"][$i] !='') {
  $CC_L1_D3 = $_POST["CC_L1-D3"][$i];
}
if ($_POST["CC_L1-D3"][$i] =='') {
  $CC_L1_D3  = 'Null';
}




}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_cc="UPDATE asign_notas 
                        SET nt_13 = $CC_L1_N3, d_13 = $CC_L1_D3                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_cc=mysqli_query($enlace, $sql_del_primer_cc);

       
      }   

 if ($result_primer_cc !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 3- 1er Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 3- 1er Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso



if(isset($_POST['guardar_1act4']))
        {

$DD_L1_N4 = Null;
$errorZ = '';
$exitoZ = '';


$tot_cuenta_L1_N4 = $_POST["conteo_global_L1_N4"];
$count_L1_N4=$tot_cuenta_L1_N4;

include("../conectar.php");  

    for($i=0;$i<$count_L1_N4;$i++){  // segun el total de filas, hace...



// $DD_L1_N4 = !empty($_POST["DD_L1-N4"][$i]) ? "'$DD_L1_N4'" : "NULL"; 

if ($_POST["DD_L1-N4"][$i] !='') {
  $DD_L1_N4 = $_POST["DD_L1-N4"][$i];
}

if ($_POST["DD_L1-N4"][$i] =='') {
  $DD_L1_N4  = 'Null';
}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["DD_L1-D4"][0] !='') {
                    $DD_L1_D4 = $_POST["DD_L1-D4"][0];
                      }

                    if ($_POST["DD_L1-D4"][0] =='') {
                    $DD_L1_D4  = 'Null';

                    
                       }    }


else {  



 if ($_POST["DD_L1-D4"][$i] !='') {
  $DD_L1_D4 = $_POST["DD_L1-D4"][$i];
}
if ($_POST["DD_L1-D4"][$i] =='') {
  $DD_L1_D4  = 'Null';
}




}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_dd="UPDATE asign_notas 
                        SET nt_14 = $DD_L1_N4, d_14 = $DD_L1_D4                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_dd=mysqli_query($enlace, $sql_del_primer_dd);
       
      }   

 if ($result_primer_dd !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 4- 1er Lapso. ";  




        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 4- 1er Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso




if(isset($_POST['guardar_1act5']))
        {

$EE_L1_N5 = Null;
$errorZ = '';
$exitoZ = '';


$tot_cuenta_L1_N5 = $_POST["conteo_global_L1_N5"];
$count_L1_N5=$tot_cuenta_L1_N5;

include("../conectar.php");  

    for($i=0;$i<$count_L1_N5;$i++){  // segun el total de filas, hace...



// $EE_L1_N5 = !empty($_POST["EE_L1-N5"][$i]) ? "'$EE_L1_N5'" : "NULL"; 

if ($_POST["EE_L1-N5"][$i] !='') {
  $EE_L1_N5 = $_POST["EE_L1-N5"][$i];
}

if ($_POST["EE_L1-N5"][$i] =='') {
  $EE_L1_N5  = 'Null';
}



if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["EE_L1-D5"][0] !='') {
                    $EE_L1_D5 = $_POST["EE_L1-D5"][0];
                      }

                    if ($_POST["EE_L1-D5"][0] =='') {
                    $EE_L1_D5  = 'Null';

                    
                       }    }


else {  



  if ($_POST["EE_L1-D5"][$i] !='') {
  $EE_L1_D5 = $_POST["EE_L1-D5"][$i];
}
if ($_POST["EE_L1-D5"][$i] =='') {
  $EE_L1_D5  = 'Null';
}




}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_ee="UPDATE asign_notas 
                        SET nt_15 = $EE_L1_N5, d_15 = $EE_L1_D5                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_ee=mysqli_query($enlace, $sql_del_primer_ee);
       
      }   

 if ($result_primer_ee !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 5- 1er Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 5- 1er Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso



if(isset($_POST['guardar_1act6']))
        {

$FF_L1_N6 = Null;
$errorZ = '';
$exitoZ = '';


$tot_cuenta_L1_N6 = $_POST["conteo_global_L1_N6"];
$count_L1_N6=$tot_cuenta_L1_N6;

include("../conectar.php");  

    for($i=0;$i<$count_L1_N6;$i++){  // segun el total de filas, hace...



// $FF_L1_N6 = !empty($_POST["FF_L1-N6"][$i]) ? "'$FF_L1_N6'" : "NULL"; 

if ($_POST["FF_L1-N6"][$i] !='') {
  $FF_L1_N6 = $_POST["FF_L1-N6"][$i];
}


if ($_POST["FF_L1-N6"][$i] =='') {
  $FF_L1_N6  = 'Null';
}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["FF_L1-D6"][0] !='') {
                    $FF_L1_D6 = $_POST["FF_L1-D6"][0];
                      }

                    if ($_POST["FF_L1-D6"][0] =='') {
                    $FF_L1_D6  = 'Null';

                    
                       }    }


else {  



  if ($_POST["FF_L1-D6"][$i] !='') {
  $FF_L1_D6 = $_POST["FF_L1-D6"][$i];
}
if ($_POST["FF_L1-D6"][$i] =='') {
  $FF_L1_D6  = 'Null';
}




}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_ff="UPDATE asign_notas 
                        SET nt_16 = $FF_L1_N6, d_16 = $FF_L1_D6                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_ff=mysqli_query($enlace, $sql_del_primer_ff);
       
      }   

 if ($result_primer_ff !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 6- 1er Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 6- 1er Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso





if(isset($_POST['guardar_1act7']))
        {

$GG_L1_N7 = Null;
$errorZ = '';
$exitoZ = '';


$tot_cuenta_L1_N7 = $_POST["conteo_global_L1_N7"];
$count_L1_N7=$tot_cuenta_L1_N7;

include("../conectar.php");  

    for($i=0;$i<$count_L1_N7;$i++){  // segun el total de filas, hace...



// $GG_L1_N7 = !empty($_POST["GG_L1-N7"][$i]) ? "'$GG_L1_N7'" : "NULL"; 

if ($_POST["GG_L1-N7"][$i] !='') {
  $GG_L1_N7 = $_POST["GG_L1-N7"][$i];
}


if ($_POST["GG_L1-N7"][$i] =='') {
  $GG_L1_N7  = 'Null';
}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["GG_L1-D7"][0] !='') {
                    $GG_L1_D7 = $_POST["GG_L1-D7"][0];
                      }

                    if ($_POST["GG_L1-D7"][0] =='') {
                    $GG_L1_D7  = 'Null';

                    
                       }    }


else {  



  if ($_POST["GG_L1-D7"][$i] !='') {
  $GG_L1_D7 = $_POST["GG_L1-D7"][$i];
}
if ($_POST["GG_L1-D7"][$i] =='') {
  $GG_L1_D7  = 'Null';
}




}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_gg="UPDATE asign_notas 
                        SET nt_17 = $GG_L1_N7, d_17 = $GG_L1_D7                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_gg=mysqli_query($enlace, $sql_del_primer_gg);
       
      }   

 if ($result_primer_gg !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 7- 1er Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 7- 1er Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso




if(isset($_POST['guardar_Aux_final_ZZZ']))
        {

$ZZZ_AuF_final = Null;
$errorZ = '';
$exitoZ = '';


$tot_cuenta_Aux_final_ZZZ = $_POST["conteo_global_Aux_final_ZZZ"];
$count_Aux_final_ZZZ=$tot_cuenta_Aux_final_ZZZ;

include("../conectar.php");  

    for($i=0;$i<$count_Aux_final_ZZZ;$i++){  // segun el total de filas, hace...



// $ZZZ_AuF_final = !empty($_POST["ZZZ_AuF"][$i]) ? "'$ZZZ_AuF_final'" : "NULL";


if ($_POST["ZZZ_AuF"][$i] !='') {
  $ZZZ_AuF_final = $_POST["ZZZ_AuF"][$i];  
}

if ($_POST["ZZZ_AuF"][$i] =='') {
  $ZZZ_AuF_final  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_zz="UPDATE asign_notas 
                        SET nt_AuF = $ZZZ_AuF_final                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_zz=mysqli_query($enlace, $sql_del_primer_zz);
       
      }   

 if ($result_primer_zz !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Aux-Final. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Aux-Final. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso




if(isset($_POST['guardar_Rev1']))
        {


$ZZZ_AuF_final = Null;
$errorZ = '';
$exitoZ = '';


$tot_cuenta_Aux_final_ZZZ = $_POST["conteo_global_Rev1"];
$count_Aux_final_ZZZ=$tot_cuenta_Aux_final_ZZZ;

include("../conectar.php");  

    for($i=0;$i<$count_Aux_final_ZZZ;$i++){  // segun el total de filas, hace...



// $ZZZ_AuF_final = !empty($_POST["ZZZ_AuF"][$i]) ? "'$ZZZ_AuF_final'" : "NULL";


if ($_POST["ZZZ_Rev1"][$i] !='') {
  $ZZZ_AuF_final = $_POST["ZZZ_Rev1"][$i];  
}

if ($_POST["ZZZ_Rev1"][$i] =='') {
  $ZZZ_AuF_final  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_zz="UPDATE asign_notas 
                        SET rev_uno = $ZZZ_AuF_final                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_zz=mysqli_query($enlace, $sql_del_primer_zz);
       
      }   

 if ($result_primer_zz !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Revisión 1. ";  




        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo Revisión 1. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso



if(isset($_POST['guardar_Rev2']))
        {

$ZZZ_AuF_final = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_Aux_final_ZZZ = $_POST["conteo_global_Rev2"];
$count_Aux_final_ZZZ=$tot_cuenta_Aux_final_ZZZ;

include("../conectar.php");  

    for($i=0;$i<$count_Aux_final_ZZZ;$i++){  // segun el total de filas, hace...



// $ZZZ_AuF_final = !empty($_POST["ZZZ_AuF"][$i]) ? "'$ZZZ_AuF_final'" : "NULL";


if ($_POST["ZZZ_Rev2"][$i] !='') {
  $ZZZ_AuF_final = $_POST["ZZZ_Rev2"][$i];  
}

if ($_POST["ZZZ_Rev2"][$i] =='') {
  $ZZZ_AuF_final  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_zz="UPDATE asign_notas 
                        SET rev_dos = $ZZZ_AuF_final                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_zz=mysqli_query($enlace, $sql_del_primer_zz);
       
      }   

 if ($result_primer_zz !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Revisión 2. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Revisión 2. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso



if(isset($_POST['guardar_1act8']))
        {

$ZA_L1_N8 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L1_N8 = $_POST["conteo_global_ZA_Au1"];
$count_L1_N8=$tot_cuenta_L1_N8;

include("../conectar.php");  

    for($i=0;$i<$count_L1_N8;$i++){  // segun el total de filas, hace...



// $ZA_L1_N8 = !empty($_POST["ZA_Au1"][$i]) ? "'$ZA_L1_N8'" : "NULL"; 

if ($_POST["ZA_Au1"][$i] !='') {
  $ZA_L1_N8 = $_POST["ZA_Au1"][$i];
}

if ($_POST["ZA_Au1"][$i] =='') {
  $ZA_L1_N8  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_Au1="UPDATE asign_notas 
                        SET nt_Au1 = $ZA_L1_N8                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_Au1=mysqli_query($enlace, $sql_del_primer_Au1);
       
      }   

 if ($result_primer_Au1 !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act- 1er Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act- 1er Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso




if(isset($_POST['guardar_2act8']))
        {

$ZB_L2_N8 = Null;
$errorZ = '';
$exitoZ = '';



$tot_cuenta_L2_N8 = $_POST["conteo_global_ZB_Au2"];
$count_L2_N8=$tot_cuenta_L2_N8;

include("../conectar.php");  

    for($i=0;$i<$count_L2_N8;$i++){  // segun el total de filas, hace...



// $ZB_L2_N8 = !empty($_POST["ZB_Au2"][$i]) ? "'$ZB_L2_N8'" : "NULL"; 

if ($_POST["ZB_Au2"][$i] !='') {
  $ZB_L2_N8 = $_POST["ZB_Au2"][$i];
}


if ($_POST["ZB_Au2"][$i] =='') {
  $ZB_L2_N8  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_Au2="UPDATE asign_notas 
                        SET nt_Au2 = $ZB_L2_N8                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_Au2=mysqli_query($enlace, $sql_del_primer_Au2);
       
      }   

 if ($result_primer_Au2 !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act- 2do Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act- 2do Lapso. ";



              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso



if(isset($_POST['guardar_3act8']))
        {


$ZC_L3_N8 = Null;
$errorZ = '';
$exitoZ = '';


$tot_cuenta_L3_N8 = $_POST["conteo_global_ZC_Au3"];
$count_L3_N8=$tot_cuenta_L3_N8;

include("../conectar.php");  

    for($i=0;$i<$count_L3_N8;$i++){  // segun el total de filas, hace...



// $ZC_L3_N8 = !empty($_POST["ZC_Au3"][$i]) ? "'$ZC_L3_N8'" : "NULL"; 

if ($_POST["ZC_Au3"][$i] !='') {
  $ZC_L3_N8 = $_POST["ZC_Au3"][$i];
}


if ($_POST["ZC_Au3"][$i] =='') {
  $ZC_L3_N8  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_Au3="UPDATE asign_notas 
                        SET nt_Au3 = $ZC_L3_N8                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_Au3=mysqli_query($enlace, $sql_del_primer_Au3);
       
      }   

 if ($result_primer_Au3 !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act- 3er Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act- 3er Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso


if(isset($_POST['guardar_2act1']))
        {
$HH_L2_N1 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L2_N1 = $_POST["conteo_global_L2_N1"];
$count_L2_N1=$tot_cuenta_L2_N1;

include("../conectar.php");  

    for($i=0;$i<$count_L2_N1;$i++){  // segun el total de filas, hace...



// $HH_L2_N1 = !empty($_POST["HH_L2-N1"][$i]) ? "'$HH_L2_N1'" : "NULL"; 

if ($_POST["HH_L2-N1"][$i] !='') {
  $HH_L2_N1 = $_POST["HH_L2-N1"][$i];
}


if ($_POST["HH_L2-N1"][$i] =='') {
  $HH_L2_N1  = 'Null';
}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["HH_L2-D1"][0] !='') {
                    $HH_L2_D1 = $_POST["HH_L2-D1"][0];
                      }

                    if ($_POST["HH_L2-D1"][0] =='') {
                    $HH_L2_D1  = 'Null';

                    
                       }    }


else {  



  if ($_POST["HH_L2-D1"][$i] !='') {
  $HH_L2_D1 = $_POST["HH_L2-D1"][$i];
}
if ($_POST["HH_L2-D1"][$i] =='') {
  $HH_L2_D1  = 'Null';
}




}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_hh="UPDATE asign_notas 
                        SET nt_21 = $HH_L2_N1, d_21 = $HH_L2_D1                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_hh=mysqli_query($enlace, $sql_del_primer_hh);
       
      }   

 if ($result_primer_hh !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 1- 2do Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 1- 2do Lapso. ";



              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso





if(isset($_POST['guardar_2act2']))
        {
$II_L2_N2 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L2_N2 = $_POST["conteo_global_L2_N2"];
$count_L2_N2=$tot_cuenta_L2_N2;

include("../conectar.php");  

    for($i=0;$i<$count_L2_N2;$i++){  // segun el total de filas, hace...



// $II_L2_N2 = !empty($_POST["II_L2-N2"][$i]) ? "'$II_L2_N2'" : "NULL"; 

if ($_POST["II_L2-N2"][$i] !='') {
  $II_L2_N2 = $_POST["II_L2-N2"][$i];
}

if ($_POST["II_L2-N2"][$i] =='') {
  $II_L2_N2 = 'Null';
}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["II_L2-D2"][0] !='') {
                    $II_L2_D2 = $_POST["II_L2-D2"][0];
                      }

                    if ($_POST["II_L2-D2"][0] =='') {
                    $II_L2_D2  = 'Null';

                    
                       }    }


else {  



  if ($_POST["II_L2-D2"][$i] !='') {
  $II_L2_D2 = $_POST["II_L2-D2"][$i];
}
if ($_POST["II_L2-D2"][$i] =='') {
  $II_L2_D2  = 'Null';
}




}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_ii="UPDATE asign_notas 
                        SET nt_22 = $II_L2_N2, d_22 = $II_L2_D2                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_ii=mysqli_query($enlace, $sql_del_primer_ii);
       
      }   

 if ($result_primer_ii !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 2- 2do Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 2- 2do Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso





if(isset($_POST['guardar_2act3']))
        {
$JJ_L2_N3 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L2_N3 = $_POST["conteo_global_L2_N3"];
$count_L2_N3=$tot_cuenta_L2_N3;

include("../conectar.php");  

    for($i=0;$i<$count_L2_N3;$i++){  // segun el total de filas, hace...



// $JJ_L2_N3 = !empty($_POST["JJ_L2-N3"][$i]) ? "'$JJ_L2_N3'" : "NULL"; 

if ($_POST["JJ_L2-N3"][$i] !='') {
  $JJ_L2_N3 = $_POST["JJ_L2-N3"][$i];
}

if ($_POST["JJ_L2-N3"][$i] =='') {
  $JJ_L2_N3 = 'Null';
}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["JJ_L2-D3"][0] !='') {
                    $JJ_L2_D3 = $_POST["JJ_L2-D3"][0];
                      }

                    if ($_POST["JJ_L2-D3"][0] =='') {
                    $JJ_L2_D3  = 'Null';

                    
                       }    }


else {  


 if ($_POST["JJ_L2-D3"][$i] !='') {
  $JJ_L2_D3 = $_POST["JJ_L2-D3"][$i];
}
if ($_POST["JJ_L2-D3"][$i] =='') {
  $JJ_L2_D3  = 'Null';
}




}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_jj="UPDATE asign_notas 
                        SET nt_23 = $JJ_L2_N3, d_23 = $JJ_L2_D3                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_jj=mysqli_query($enlace, $sql_del_primer_jj);
       
      }   

 if ($result_primer_jj !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 3- 2do Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 3- 2do Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso


if(isset($_POST['guardar_2act4']))
        {
$KK_L2_N4 = Null;
$errorZ = '';
$exitoZ = '';


$tot_cuenta_L2_N4 = $_POST["conteo_global_L2_N4"];
$count_L2_N4=$tot_cuenta_L2_N4;

include("../conectar.php");  

    for($i=0;$i<$count_L2_N4;$i++){  // segun el total de filas, hace...



// $KK_L2_N4 = !empty($_POST["KK_L2-N4"][$i]) ? "'$KK_L2_N4'" : "NULL"; 

if ($_POST["KK_L2-N4"][$i] !='') {
  $KK_L2_N4 = $_POST["KK_L2-N4"][$i];
}

if ($_POST["KK_L2-N4"][$i] =='') {
  $KK_L2_N4 = 'Null';
}



if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["KK_L2-D4"][0] !='') {
                    $KK_L2_D4 = $_POST["KK_L2-D4"][0];
                      }

                    if ($_POST["KK_L2-D4"][0] =='') {
                    $KK_L2_D4  = 'Null';

                    
                       }    }


else {  


if ($_POST["KK_L2-D4"][$i] !='') {
  $KK_L2_D4 = $_POST["KK_L2-D4"][$i];
}
if ($_POST["KK_L2-D4"][$i] =='') {
  $KK_L2_D4  = 'Null';
}




}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_kk="UPDATE asign_notas 
                        SET nt_24 = $KK_L2_N4, d_24 = $KK_L2_D4                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_kk=mysqli_query($enlace, $sql_del_primer_kk);
       
      }   

 if ($result_primer_kk !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 4- 2do Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 4- 2do Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso



if(isset($_POST['guardar_2act5']))
        {
$LL_L2_N5 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L2_N5 = $_POST["conteo_global_L2_N5"];
$count_L2_N5=$tot_cuenta_L2_N5;

include("../conectar.php");  

    for($i=0;$i<$count_L2_N5;$i++){  // segun el total de filas, hace...



// $LL_L2_N5 = !empty($_POST["LL_L2-N5"][$i]) ? "'$LL_L2_N5'" : "NULL"; 

if ($_POST["LL_L2-N5"][$i] !='') {
  $LL_L2_N5 = $_POST["LL_L2-N5"][$i];
}


if ($_POST["LL_L2-N5"][$i] =='') {
  $LL_L2_N5 = 'Null';
}



if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["LL_L2-D5"][0] !='') {
                    $LL_L2_D5 = $_POST["LL_L2-D5"][0];
                      }

                    if ($_POST["LL_L2-D5"][0] =='') {
                    $LL_L2_D5  = 'Null';

                    
                       }    }


else {  


 if ($_POST["LL_L2-D5"][$i] !='') {
  $LL_L2_D5 = $_POST["LL_L2-D5"][$i];
}
if ($_POST["LL_L2-D5"][$i] =='') {
  $LL_L2_D5  = 'Null';
}




}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_ll="UPDATE asign_notas 
                        SET nt_25 = $LL_L2_N5, d_25 = $LL_L2_D5                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_ll=mysqli_query($enlace, $sql_del_primer_ll);
       
      }   

 if ($result_primer_ll !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 5- 2do Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 5- 2do Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso




if(isset($_POST['guardar_2act6']))
        {
$MM_L2_N6 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L2_N6 = $_POST["conteo_global_L2_N6"];
$count_L2_N6=$tot_cuenta_L2_N6;

include("../conectar.php");  

    for($i=0;$i<$count_L2_N6;$i++){  // segun el total de filas, hace...



// $MM_L2_N6 = !empty($_POST["MM_L2-N6"][$i]) ? "'$MM_L2_N6'" : "NULL"; 

if ($_POST["MM_L2-N6"][$i] !='') {
  $MM_L2_N6 = $_POST["MM_L2-N6"][$i];
}

if ($_POST["MM_L2-N6"][$i] =='') {
  $MM_L2_N6 = 'Null';
}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["MM_L2-D6"][0] !='') {
                    $MM_L2_D6 = $_POST["MM_L2-D6"][0];
                      }

                    if ($_POST["MM_L2-D6"][0] =='') {
                    $MM_L2_D6  = 'Null';

                    
                       }    }


else {  


  if ($_POST["MM_L2-D6"][$i] !='') {
  $MM_L2_D6 = $_POST["MM_L2-D6"][$i];
}
if ($_POST["MM_L2-D6"][$i] =='') {
  $MM_L2_D6  = 'Null';
}




}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_mm="UPDATE asign_notas 
                        SET nt_26 = $MM_L2_N6, d_26 = $MM_L2_D6                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_mm=mysqli_query($enlace, $sql_del_primer_mm);
       
      }   

 if ($result_primer_mm !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 6- 2do Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 6- 2do Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso




if(isset($_POST['guardar_2act7']))
        {
$NN_L2_N7 = Null;
$errorZ = '';
$exitoZ = '';


$tot_cuenta_L2_N7 = $_POST["conteo_global_L2_N7"];
$count_L2_N7=$tot_cuenta_L2_N7;

include("../conectar.php");  

    for($i=0;$i<$count_L2_N7;$i++){  // segun el total de filas, hace...



// $NN_L2_N7 = !empty($_POST["NN_L2-N7"][$i]) ? "'$NN_L2_N7'" : "NULL"; 

if ($_POST["NN_L2-N7"][$i] !='') {
  $NN_L2_N7 = $_POST["NN_L2-N7"][$i];
}


if ($_POST["NN_L2-N7"][$i] =='') {
  $NN_L2_N7  = 'Null';
}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["NN_L2-D7"][0] !='') {
                    $NN_L2_D7 = $_POST["NN_L2-D7"][0];
                      }

                    if ($_POST["NN_L2-D7"][0] =='') {
                    $NN_L2_D7  = 'Null';

                    
                       }    }


else {  


if ($_POST["NN_L2-D7"][$i] !='') {
  $NN_L2_D7 = $_POST["NN_L2-D7"][$i];
}
if ($_POST["NN_L2-D7"][$i] =='') {
  $NN_L2_D7  = 'Null';
}




}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_nn="UPDATE asign_notas 
                        SET nt_27 = $NN_L2_N7, d_27 = $NN_L2_D7                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_nn=mysqli_query($enlace, $sql_del_primer_nn);
       
      }   

 if ($result_primer_nn !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 7- 2do Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 7- 2do Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso





if(isset($_POST['guardar_3act1']))
        {
$OO_L3_N1 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L3_N1 = $_POST["conteo_global_L3_N1"];
$count_L3_N1=$tot_cuenta_L3_N1;

include("../conectar.php");  

    for($i=0;$i<$count_L3_N1;$i++){  // segun el total de filas, hace...



// $OO_L3_N1 = !empty($_POST["OO_L3-N1"][$i]) ? "'$OO_L3_N1'" : "NULL"; 

if ($_POST["OO_L3-N1"][$i] !='') {
  $OO_L3_N1 = $_POST["OO_L3-N1"][$i];
}


if ($_POST["OO_L3-N1"][$i] =='') {
  $OO_L3_N1 = 'Null';
}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["OO_L3-D1"][0] !='') {
                    $OO_L3_D1 = $_POST["OO_L3-D1"][0];
                      }

                    if ($_POST["OO_L3-D1"][0] =='') {
                    $OO_L3_D1  = 'Null';

                    
                       }    }


else {  


  if ($_POST["OO_L3-D1"][$i] !='') {
  $OO_L3_D1 = $_POST["OO_L3-D1"][$i];
}
if ($_POST["OO_L3-D1"][$i] =='') {
  $OO_L3_D1  = 'Null';
}




}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_oo="UPDATE asign_notas 
                        SET nt_31 = $OO_L3_N1, d_31 = $OO_L3_D1                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_oo=mysqli_query($enlace, $sql_del_primer_oo);
       
      }   

 if ($result_primer_oo !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 1- 3er Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 1- 3er Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso





if(isset($_POST['guardar_3act2']))
        {
$PP_L3_N2 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L3_N2 = $_POST["conteo_global_L3_N2"];
$count_L3_N2=$tot_cuenta_L3_N2;

include("../conectar.php");  

    for($i=0;$i<$count_L3_N2;$i++){  // segun el total de filas, hace...



// $PP_L3_N2 = !empty($_POST["PP_L3-N2"][$i]) ? "'$PP_L3_N2'" : "NULL"; 

if ($_POST["PP_L3-N2"][$i] !='') {
  $PP_L3_N2 = $_POST["PP_L3-N2"][$i];
}

if ($_POST["PP_L3-N2"][$i] =='') {
  $PP_L3_N2  = 'Null';
}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["PP_L3-D2"][0] !='') {
                    $PP_L3_D2 = $_POST["PP_L3-D2"][0];
                      }

                    if ($_POST["PP_L3-D2"][0] =='') {
                    $PP_L3_D2  = 'Null';

                    
                       }    }


else {  

  if ($_POST["PP_L3-D2"][$i] !='') {
  $PP_L3_D2 = $_POST["PP_L3-D2"][$i];
}
if ($_POST["PP_L3-D2"][$i] =='') {
  $PP_L3_D2  = 'Null';
}



}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_pp="UPDATE asign_notas 
                        SET nt_32 = $PP_L3_N2, d_32 = $PP_L3_D2                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_pp=mysqli_query($enlace, $sql_del_primer_pp);
       
      }   

 if ($result_primer_pp !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 2- 3er Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 2- 3er Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso




if(isset($_POST['guardar_3act3']))
        {
$QQ_L3_N3 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L3_N3 = $_POST["conteo_global_L3_N3"];
$count_L3_N3=$tot_cuenta_L3_N3;

include("../conectar.php");  

    for($i=0;$i<$count_L3_N3;$i++){  // segun el total de filas, hace...



// $QQ_L3_N3 = !empty($_POST["QQ_L3-N3"][$i]) ? "'$QQ_L3_N3'" : "NULL"; 

if ($_POST["QQ_L3-N3"][$i] !='') {
  $QQ_L3_N3 = $_POST["QQ_L3-N3"][$i];
}


if ($_POST["QQ_L3-N3"][$i] =='') {
  $QQ_L3_N3  = 'Null';
}




if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["QQ_L3-D3"][0] !='') {
                   $QQ_L3_D3 = $_POST["QQ_L3-D3"][0];
                      }

                    if ($_POST["QQ_L3-D3"][0] =='') {
                    $QQ_L3_D3  = 'Null';

                    
                       }    }


else {  


  if ($_POST["QQ_L3-D3"][$i] !='') {
  $QQ_L3_D3 = $_POST["QQ_L3-D3"][$i];
}
if ($_POST["QQ_L3-D3"][$i] =='') {
  $QQ_L3_D3  = 'Null';
}


}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_qq="UPDATE asign_notas 
                        SET nt_33 = $QQ_L3_N3, d_33 = $QQ_L3_D3                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_qq=mysqli_query($enlace, $sql_del_primer_qq);
       
      }   

 if ($result_primer_qq !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 3- 3er Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 3- 3er Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso




if(isset($_POST['guardar_3act4']))   // me quede aqui
        {
$RR_L3_N4 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L3_N4 = $_POST["conteo_global_L3_N4"];
$count_L3_N4=$tot_cuenta_L3_N4;

include("../conectar.php");  

    for($i=0;$i<$count_L3_N4;$i++){  // segun el total de filas, hace...



// $RR_L3_N4 = !empty($_POST["RR_L3-N4"][$i]) ? "'$RR_L3_N4'" : "NULL"; 

if ($_POST["RR_L3-N4"][$i] !='') {
  $RR_L3_N4 = $_POST["RR_L3-N4"][$i];

}

if ($_POST["RR_L3-N4"][$i] =='') {
  $RR_L3_N4 = 'Null';

}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["RR_L3-D4"][0] !='') {
                   $RR_L3_D4 = $_POST["RR_L3-D4"][0];
                      }

                    if ($_POST["RR_L3-D4"][0] =='') {
                    $RR_L3_D4  = 'Null';

                    
                       }    }


else {  


  if ($_POST["RR_L3-D4"][$i] !='') {
  $RR_L3_D4 = $_POST["RR_L3-D4"][$i];
}
if ($_POST["RR_L3-D4"][$i] =='') {
  $RR_L3_D4  = 'Null';
}


}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_rr="UPDATE asign_notas 
                        SET nt_34 = $RR_L3_N4, d_34 = $RR_L3_D4                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_rr=mysqli_query($enlace, $sql_del_primer_rr);
       
      }   

 if ($result_primer_rr !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 4- 3er Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 4- 3er Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso   



if(isset($_POST['guardar_3act5']))
        {
$SS_L3_N5 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L3_N5 = $_POST["conteo_global_L3_N5"];
$count_L3_N5=$tot_cuenta_L3_N5;

include("../conectar.php");  

    for($i=0;$i<$count_L3_N5;$i++){  // segun el total de filas, hace...



// $SS_L3_N5 = !empty($_POST["SS_L3-N5"][$i]) ? "'$SS_L3_N5'" : "NULL"; 

if ($_POST["SS_L3-N5"][$i] !='') {
  $SS_L3_N5 = $_POST["SS_L3-N5"][$i];
}

if ($_POST["SS_L3-N5"][$i] =='') {
  $SS_L3_N5  = 'Null';
}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["SS_L3-D5"][0] !='') {
                   $SS_L3_D5 = $_POST["SS_L3-D5"][0];
                      }

                    if ($_POST["SS_L3-D5"][0] =='') {
                    $SS_L3_D5  = 'Null';

                    
                       }    }


else {  


 if ($_POST["SS_L3-D5"][$i] !='') {
  $SS_L3_D5 = $_POST["SS_L3-D5"][$i];
}
if ($_POST["SS_L3-D5"][$i] =='') {
  $SS_L3_D5  = 'Null';
}


}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_ss="UPDATE asign_notas 
                        SET nt_35 = $SS_L3_N5, d_35 = $SS_L3_D5                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_ss=mysqli_query($enlace, $sql_del_primer_ss);
       
      }   

 if ($result_primer_ss !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 5- 3er Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 5- 3er Lapso. ";




              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso       



if(isset($_POST['guardar_3act6']))
        {
$TT_L3_N6 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L3_N6 = $_POST["conteo_global_L3_N6"];
$count_L3_N6=$tot_cuenta_L3_N6;

include("../conectar.php");  

    for($i=0;$i<$count_L3_N6;$i++){  // segun el total de filas, hace...



// $TT_L3_N6 = !empty($_POST["TT_L3-N6"][$i]) ? "'$TT_L3_N6'" : "NULL"; 

if ($_POST["TT_L3-N6"][$i] !='') {
  $TT_L3_N6 = $_POST["TT_L3-N6"][$i];
}


if ($_POST["TT_L3-N6"][$i] =='') {
  $TT_L3_N6  = 'Null';
}


if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["TT_L3-D6"][0] !='') {
                   $TT_L3_D6 = $_POST["TT_L3-D6"][0];
                      }

                    if ($_POST["TT_L3-D6"][0] =='') {
                    $TT_L3_D6  = 'Null';

                    
                       }    }


else {  


  if ($_POST["TT_L3-D6"][$i] !='') {
  $TT_L3_D6 = $_POST["TT_L3-D6"][$i];
}
if ($_POST["TT_L3-D6"][$i] =='') {
  $TT_L3_D6  = 'Null';
}


}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_tt="UPDATE asign_notas 
                        SET nt_36 = $TT_L3_N6, d_36 = $TT_L3_D6                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_tt=mysqli_query($enlace, $sql_del_primer_tt);
       
      }   

 if ($result_primer_tt !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 6- 3er Lapso. ";  





        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 6- 3er Lapso. ";



              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso      




if(isset($_POST['guardar_3act7']))
        {
$UU_L3_N7 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L3_N7 = $_POST["conteo_global_L3_N7"];
$count_L3_N7=$tot_cuenta_L3_N7;

include("../conectar.php");  

    for($i=0;$i<$count_L3_N7;$i++){  // segun el total de filas, hace...

// $UU_L3_N7 = !empty($_POST["UU_L3-N7"][$i]) ? "'$UU_L3_N7'" : "NULL"; 

if ($_POST["UU_L3-N7"][$i] !='') {
  $UU_L3_N7 = $_POST["UU_L3-N7"][$i];
}

if ($_POST["UU_L3-N7"][$i] =='') {
  $UU_L3_N7  = 'Null';
}

if ($_POST["selecc_copy"] == Si) {

                    if ($_POST["UU_L3-D7"][0] !='') {
                   $UU_L3_D7 = $_POST["UU_L3-D7"][0];
                      }

                    if ($_POST["UU_L3-D7"][0] =='') {
                    $UU_L3_D7  = 'Null';

                    
                       }    }


else {  


 if ($_POST["UU_L3-D7"][$i] !='') {
  $UU_L3_D7 = $_POST["UU_L3-D7"][$i];
}
if ($_POST["UU_L3-D7"][$i] =='') {
  $UU_L3_D7  = 'Null';
}


}

  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_uu="UPDATE asign_notas 
                        SET nt_37 = $UU_L3_N7, d_37 = $UU_L3_D7                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_uu=mysqli_query($enlace, $sql_del_primer_uu);
       
      }   

 if ($result_primer_uu !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act, cont, aprend. u objetivo 2- 3er Lapso. ";  
        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act, cont, aprend. u objetivo 2- 3er Lapso. ";
              mysqli_close($enlace);
              }
        }   // cierre guardar 1er lapso





if(isset($_POST['guardar_aspectos1']))   
        {
$AA_L1_Asp1 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L1 = $_POST["conteo_global_aspectos_L1"];
$count_L1=$tot_cuenta_L1;

include("../conectar.php");  

    for($i=0;$i<$count_L1;$i++){  // segun el total de filas, hace...


 if ($_POST["AA_L1-Asp1"][$i] !='') {
  $AA_L1_Asp1 = $_POST["AA_L1-Asp1"][$i];
}
if ($_POST["AA_L1-Asp1"][$i] =='') {
  $AA_L1_Asp1  = 'Null';
}

  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_uu="UPDATE asign_notas 
                        SET asp_1 = $AA_L1_Asp1                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_uu=mysqli_query($enlace, $sql_del_primer_uu);
       
      }   

 if ($result_primer_uu !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo Aspecto a Ref. - 1er Lapso. ";  
        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo Aspecto a Ref. - 1er Lapso. ";
              mysqli_close($enlace);
              }
        }   // cierre guardar 1er lapso










if(isset($_POST['guardar_aspectos2']))   
        {
$AA_L2_Asp2 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L2 = $_POST["conteo_global_aspectos_L2"];
$count_L2=$tot_cuenta_L2;

include("../conectar.php");  

    for($i=0;$i<$count_L2;$i++){  // segun el total de filas, hace...


 if ($_POST["AA_L2-Asp2"][$i] !='') {
  $AA_L2_Asp2 = $_POST["AA_L2-Asp2"][$i];
}
if ($_POST["AA_L2-Asp2"][$i] =='') {
  $AA_L2_Asp2  = 'Null';
}

  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_uu="UPDATE asign_notas 
                        SET asp_2 = $AA_L2_Asp2                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_uu=mysqli_query($enlace, $sql_del_primer_uu);
       
      }   

 if ($result_primer_uu !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo Aspecto a Ref. - 2do Lapso. ";  
        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo Aspecto a Ref. - 2do Lapso. ";
              mysqli_close($enlace);
              }
        }   // cierre guardar 2do lapso








if(isset($_POST['guardar_aspectos3']))   
        {
$AA_L3_Asp3 = Null;
$errorZ = '';
$exitoZ = '';

$tot_cuenta_L3 = $_POST["conteo_global_aspectos_L3"];
$count_L3=$tot_cuenta_L3;

include("../conectar.php");  

    for($i=0;$i<$count_L3;$i++){  // segun el total de filas, hace...


 if ($_POST["AA_L3-Asp3"][$i] !='') {
  $AA_L3_Asp3 = $_POST["AA_L3-Asp3"][$i];
}
if ($_POST["AA_L3-Asp3"][$i] =='') {
  $AA_L3_Asp3  = 'Null';
}

  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_uu="UPDATE asign_notas 
                        SET asp_3 = $AA_L3_Asp3                   
                    WHERE id_asign_notas = '$la_id_asign_notas' ";
    $result_primer_uu=mysqli_query($enlace, $sql_del_primer_uu);
       
      }   

 if ($result_primer_uu !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo Aspecto a Ref. - 3er Lapso. ";  
        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo Aspecto a Ref. - 3er Lapso. ";
              mysqli_close($enlace);
              }
        }   // cierre guardar 3er lapso












if(isset($_POST['submit_des']))
        {
include("../conectar.php");  
$esta_mat = $_POST['esta_materia'];
$este_lapso_es = $_POST['lapso_es_es'];

 if (strlen($_POST['dato_descripcion']) >249 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "La descripción supera los 249 caracteres."; }

                  if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";  

                 mysqli_close($enlace);          
              }

        else     
       {        //   detectar si esta esa descripcion en la base de datos



$queryKKC = "SELECT * FROM plantilla_indicadores WHERE ind_desc = '$_POST[dato_descripcion]' and ind_materia = '$_POST[esta_materia]'  LIMIT 1";
$resultKKC = mysqli_query($enlace,$queryKKC);
 $cuantosKKC = mysqli_num_rows($resultKKC);



if ($cuantosKKC >=1 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "Descripción ingresada, registrada anteriormente de ser necesario &nbsp;<b>habilitarla en Todos</b>."; }

                  if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";  

                 mysqli_close($enlace);          
              }





else     
       {  

         
        $query = "INSERT INTO plantilla_indicadores(ind_materia, ind_desc, en_lapso)
                  VALUES ( '$esta_mat', '".mysqli_real_escape_string($enlace,$_POST['dato_descripcion'])."', '$este_lapso_es'   )";

        if (!mysqli_query($enlace,$query))      // si no ha logrado ingresar los datos
         {
          $errorZ="Error, contactar al Ing.";
          mysqli_close($enlace);

          }

        else
          {
               // Etapa final del registro

          $exitoZ=" <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Registro realizado. </b>";
          mysqli_close($enlace);
          
        }   
        }  }
    } // cierre final







if(isset($_POST['submit_aspecto']))
        {
include("../conectar.php");  
$esta_mat = $_POST['esta_materiax'];

$esta_es_abre = $_POST['esta_abrev'];

$este_lapso_es = $_POST['lapso_es_esx'];

 if (strlen($_POST['dato_aspectos']) >249 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "El aspecto supera los 249 caracteres."; }

                  if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";  

                 mysqli_close($enlace);          
              }

        else     
       {


//   detectar si esta esa descripcion en la base de datos



$queryKKC = "SELECT * FROM plantilla_reforzar WHERE ind_refuerza = '$_POST[dato_aspectos]' and ind_materiax = '$_POST[esta_materiax]'  LIMIT 1";
$resultKKC = mysqli_query($enlace,$queryKKC);
 $cuantosKKC = mysqli_num_rows($resultKKC);



if ($cuantosKKC >=1 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "Aspecto ingresado, registrado anteriormente de ser necesario &nbsp;<b>habilitarlo en Todos</b>."; }

                  if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";  

                 mysqli_close($enlace);          
              }





else     
       {  







         
        $query = "INSERT INTO plantilla_reforzar(ind_materiax, ind_refuerza, este_lapso, abre_matee)
                  VALUES ( '$esta_mat', '".mysqli_real_escape_string($enlace,$_POST['dato_aspectos'])."', '$este_lapso_es', '$esta_es_abre'   )";

        if (!mysqli_query($enlace,$query))      // si no ha logrado ingresar los datos
         {
          $errorZ="Error, contactar al Ing.";
          mysqli_close($enlace);

          }

        else
          {
               // Etapa final del registro

          $exitoZ=" <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Registro realizado. </b>";
          mysqli_close($enlace);
          
        }   
        }   }
    } // cierre final

















if(isset($_POST['borrar_selecc_des']))
    {       

      include("../conectar.php");   


                      $queryD = "DELETE FROM plantilla_indicadores WHERE id_indicador = '$_POST[borrar_selecc_des]' LIMIT 1";

                      if (!mysqli_query($enlace,$queryD))      // si no ha logrado borrar el dato
                         {
                          $errorZ="- Error - Dato actualmente usado en un registro.";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }


                      else {  

                         $exitoZ = "<b>--&nbsp; El registro &nbsp;--</b> ha sido eliminado.";

                      }
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
                             mysqli_close($enlace);            
                          }

    }











if(isset($_POST['borrar_selecc_aspecto']))
    {       

      include("../conectar.php");   


                      $queryD = "DELETE FROM plantilla_reforzar WHERE id_reforzar = '$_POST[borrar_selecc_aspecto]' LIMIT 1";

                      if (!mysqli_query($enlace,$queryD))      // si no ha logrado borrar el dato
                         {
                          $errorZ="- Error - Dato actualmente usado en un registro.";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }


                      else {  

                         $exitoZ = "<b>--&nbsp; El registro &nbsp;--</b> ha sido eliminado.";

                      }
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
                             mysqli_close($enlace);            
                          }

    }












 if(isset($_POST['editar_selecc_des']))
        {

$lapsello = $_POST['mod_lapso_es_es'];

if (strlen($_POST['dato_mod_descripcion']) >249 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "El dato supera los 249 caracteres."; }
      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";
              }

 else  // tras haber confirmado el correcto relleno del campo
        {
        include("../conectar.php");
           // $dato = $_POST["nombre_area"];

   $sql = "UPDATE plantilla_indicadores SET ind_desc = '".mysqli_real_escape_string($enlace,$_POST['dato_mod_descripcion'])."', en_lapso = '$lapsello'
                                                            
                                WHERE id_indicador ='$_POST[editar_selecc_des]' LIMIT 1 ";

            
            if (!mysqli_query($enlace,$sql))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }

               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Descripción Modificada"; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";            
                          }

                      mysqli_close($enlace);  

        }   
}







 if(isset($_POST['editar_selecc_aspecto']))
        {

$lapsello = $_POST['mod_lapso_es_ex'];

$la_abrev_ex = $_POST['esta_abrev_mod'];

if (strlen($_POST['dato_mod_aspecto']) >249 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "El dato supera los 249 caracteres."; }
      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";
              }

 else  // tras haber confirmado el correcto relleno del campo
        {
        include("../conectar.php");
           // $dato = $_POST["nombre_area"];

   $sql = "UPDATE plantilla_reforzar SET ind_refuerza = '".mysqli_real_escape_string($enlace,$_POST['dato_mod_aspecto'])."', este_lapso = '$lapsello', abre_matee = '$la_abrev_ex'
                                                            
                                WHERE id_reforzar ='$_POST[editar_selecc_aspecto]' LIMIT 1 ";

            
            if (!mysqli_query($enlace,$sql))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }

               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Aspecto Modificado"; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";            
                          }

                      mysqli_close($enlace);  

        }   
}






?>



<?php include ("Header_Alt.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->


<?php




        $queryplantelH_dddd = "SELECT ver_ret FROM z_plantel LIMIT 1  ";

$datos_queryplantelH_dddd = mysqli_query($enlace, $queryplantelH_dddd) or die(mysqli_error());

$row_datos_queryplantelH_dddd = mysqli_fetch_array($datos_queryplantelH_dddd); 


$res_ver_retirados = $row_datos_queryplantelH_dddd['ver_ret'];




if ($res_ver_retirados == "No" or $ver_a_reti == "No" ) {

  $valor_re = 0;
  $mensaje_re = "Actualmente Cursando";




$query = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$la_seccionXX'
         and  fecha_inscripcion != ''
         and  cursa_actualmente = '$el_cicloXX'

         and  grados.id_grado = '$el_gradoXX' 

 and reg_estudiantes.retirado_si_o_no = '0' 

       /*  and retirado_si_o_no = '0' */
       /*  and inscrito_si_o_no = '1' */
                 
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$datos_control = mysqli_query($enlace, $query) or die(mysqli_error());
$row_datos_control = mysqli_fetch_array($datos_control); 
$totalRows_control = mysqli_num_rows($datos_control); 





}

else {

  $valor_re = 1;
  $mensaje_re = "Inscritos y Retirados";



  $query = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$la_seccionXX'
         and  fecha_inscripcion != ''
         and  cursa_actualmente = '$el_cicloXX'

         and  grados.id_grado = '$el_gradoXX' 



       /*  and retirado_si_o_no = '0' */
       /*  and inscrito_si_o_no = '1' */
                 
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$datos_control = mysqli_query($enlace, $query) or die(mysqli_error());
$row_datos_control = mysqli_fetch_array($datos_control); 
$totalRows_control = mysqli_num_rows($datos_control); 

}  









$query_tot_real = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$la_seccionXX'
         and  fecha_inscripcion != ''
         and  cursa_actualmente = '$el_cicloXX'

         and  grados.id_grado = '$el_gradoXX' 

         and reg_estudiantes.retirado_si_o_no = '0' 
       /*  and inscrito_si_o_no = '1' */
                 
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$datos_control_tot_real = mysqli_query($enlace, $query_tot_real) or die(mysqli_error());
$row_datos_control_tot_real = mysqli_fetch_array($datos_control_tot_real); 
$totalRows_control_tot_real = mysqli_num_rows($datos_control_tot_real); 




mysqli_close($enlace);




?>




<div class="se-pre-con"></div>



  <div class="container">
  </div>




<?php      //   para setear los colores, de esta manera solo se ha de cambiar una sola variable y se riega en todas
           //  las filas de la tabla....
$color0 =  '#DCDAD7';

$color1 =  '#DCF6C0';
$color1a =  '#C4E5A1';
           
$color2 =  '#F6EFC0';
$color2a =  '#E9D195';
           
$color3 =  '#F6DDC0';
$color3a =  '#E5AC85';

$color4 =  '#CCE2E8';

$colorz = '#D0CDCC';


 ?>


<style>      /* ayuda con la forma en la q se muestran las celdas */



.borde_izq_y_der_blanco {border-right:1px solid white; border-left: 1px solid white;}
.borde_inf_y_sup_blanco {border-top:2px solid white; border-bottom: 1px solid white;}
.borde_izq_sup_der_blanco {border-right: 1px solid white;  border-top:1px solid white; border-left: 1px solid white;}
.borde_izq_inf_der_blanco {border-right: 1px solid white;  border-left:1px solid white; border-bottom: 1px solid white;}

.borde_izq_y_der_negro  {border-right:1px solid black; border-left: 1px solid black;}
.borde_izq_sup_der_negro  {border-right:1px solid black; border-top:1px solid black; border-left: 1px solid black;}
.borde_izq_inf_der_negro  {border-right:1px solid black; border-bottom: 1px solid black; border-left: 1px solid black;}
.borde_izq_inf_sup_negro  {border-top:1px solid black; border-bottom: 1px solid black; border-left: 1px solid black;}
.borde_der_inf_sup_negro  {border-top:1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;}
.borde_inf_y_sup_negro  {border-top:1px solid black; border-bottom: 1px solid black;}

.borde_negro {border: 1px solid black;}
.borde_blanco {border: 1px solid white;}


.miniborderlight {border:0.5px dotted grey;}  /* con puntos gris */
.minibordercut {border-top:1px dashed grey;}  /* con ----  gris */


.borde_doble_negro {border: 3px solid black;}

</style>




    <script type="text/javascript">
        // whatever kind of mobile test you wanna do.
        if (screen.width < 500) {
  
            $("body").addClass("nohover");
            $("td, th")
            .attr("tabindex", "1")
            .on("touchstart", function() {
            $(this).focus();
            });
  
        }
    </script>


<script src="04_signedout/autologout.js"></script>


    <style>
        table {
           overflow: hidden;
        }

        td, th {
           position: relative;
           outline: 0;
        }

        body:not(.nohover) tbody tr:hover {
            background-color: #C6CCCF;
        }

        input:hover {
            background-color: #C6CCCF;
        }

        td:hover::after,
        thead th:not(:empty):hover::after,
        td:focus::after,
        thead th:not(:empty):focus::after { 
            content: '';  
            height: 10000px;
            left: 0;
            position: absolute;  
            top: -5000px;
            width: 100%;
            z-index: -1;
        }

        td:hover::after,
        th:hover::after {
           background-color: #C6CCCF;
        }

        td:focus::after,
        th:focus::after {
           background-color: lightblue;
        }

        /* Focus stuff for mobile */
        td:focus::before,
        tbody th:focus::before {
            background-color: lightblue;
            content: '';  
            height: 100%;
            top: 0;
            left: -5000px;
            position: absolute;  
            width: 10000px;
            z-index: -1;
        }
    </style>


<div class="form-row">
<div class="col-md-6">
<div class="input-group-text alert-primary text-truncate ml-4 mt-3 mr-4">
  <div class="" style='text-align:center;vertical-align:middle;'>Actualizar notas globales de:&nbsp;&nbsp; <i><b><?php echo $la_materia; ?></b></i>&nbsp;&nbsp;-&nbsp;&nbsp;<i><?php echo $el_titulo; ?></i></div>  -&nbsp;<b>*<?php echo $mensaje_re; ?>*</b> 
</div>  <!--  cierre card -->
</div>

<div class="col-md-6">
    <div class="mt-3 mr-4">
        <div  style='text-align:center;vertical-align:middle;'>           

            <?php 
                  if ($errorZ!="")
                  { echo "<div class=\"input-group-text alert-danger text-truncate\" id=\"basic-addon1\" role=\"alert\" align=\"center\" >".$errorZ."</div>"; }
                ?>
                                       <!-- SOLO ES VISIBLE SI LA VARIABLE DE ERROR TIENE ALGO-->


                <?php 
                  if ($exitoZ!="")
                  { echo "<div class=\"input-group-text alert-success text-truncate\" role=\"basic-addon1\" role=\"alert\" align=\"center\">".$exitoZ."</div>"; }
                ?>
                                       <!-- SOLO ES VISIBLE SI LA VARIABLE DE ÉXITO TIENE ALGO-->

        </div>
    </div>
</div>


</div>

<div class="form-row">
  <div class="col-md-6 ml-4 mt-3">

<a href="javascript:history.back()" class="btn btn-warning" onclick="window.close();" role="button"><i class="fas fa-undo-alt"></i> Cerrar / Regresar</a>

   </div>
</div>


<script type="text/javascript">
  
function closeWin() {
  myWindow.close();   // Closes the new window
}
  
</script>






<br>


<?php  // ayuda a bloquear los lapsos inactivos

$text_a = '';
$text_b = '';
$text_c = '';


$text_a_boton = '';
$text_b_boton = '';
$text_c_boton = '';


$text_aaa = '0';
$text_bbb = '0';
$text_ccc = '0';


include("../conectar.php");

        $queryplantelH = "SELECT id_plantel, 1er_L, 2do_L, 3er_L FROM z_plantel LIMIT 1  
          
            ";

$datos_queryplantelH = mysqli_query($enlace, $queryplantelH) or die(mysqli_error());

$row_datos_queryplantelH = mysqli_fetch_array($datos_queryplantelH); 

$id_primer_plantelH = $row_datos_queryplantelH['id_plantel'];

$res_aaa = $row_datos_queryplantelH['1er_L'];

if  ($res_aaa=='Inactivo' and $el_g !=57 ) {

   $text_a = 'disabled';
  
   $text_aaa = '1';
}



if  ($ver_lapso_aa=='Inactivo' and $el_g !=57 ) {

   $text_a = 'disabled';
  
   $text_aaa = '1';
}







$res_bbb = $row_datos_queryplantelH['2do_L'];


if ( $res_bbb=='Inactivo' and $el_g !=57 ) {
   $text_b = 'disabled';
 
   $text_bbb = '1';
}


if  ($ver_lapso_bb=='Inactivo' and $el_g !=57 ) {

   $text_b = 'disabled';
  
   $text_bbb = '1';
}









$res_ccc = $row_datos_queryplantelH['3er_L'];


if ( $res_ccc=='Inactivo'  and  $el_g !=57) {
   $text_c = 'disabled';

   $text_ccc = '1';
}




if  ($ver_lapso_cc=='Inactivo' and $el_g !=57 ) {

   $text_c = 'disabled';
  
   $text_ccc = '1';
}


mysqli_close($enlace);




?>




<!-- <script src="04_signedout/autologout.js"></script> -->








<div class="form-row" >   <!--  1era fila esta fila debe contener los indicadores de cada tabla-->



		<div class="col-lg-12" style="background-color: white; z-index: 1" >  <!--  1era columna indicador Estud(s). -->
<!--		
<p class="ml-4 mr-4 mt-3 mb-3">El valor en porcentaje de cada actividad se ha de mantener entre una misma materia la cual se curse en diferentes secciones de un mismo grado, año o nivel. Por ejemplo, si un mismo grado, año o nivel cursan Castellano la distribución en porcentaje de cada actividad deberá ser igual entre todas las secciones de Castellano en ese mismo grado, año o nivel.</p>

<h5 style="color:darkgreen;" class="ml-4  mt-3 mb-3"><b>¡Importante!</b> Para el correcto cálculo de promedios, al finalizar las evaluaciones de cada lapso, a los estudiantes que no consignaran ninguna actividad será necesario asignarle <b>"0.1"</b> como nota, en la columna de Aux. incluso si no realizo la actividad Aux, de esta manera no se alteran los promedios de Aula.</h5>

<h5 style="color:darkorange;" class="ml-4  mt-3 mb-3"><b>Actividades de Revisión</b> Permite almacenar hasta dos notas completamente independientes del resto, a ser usada como notas de remplazo para dicha materia en todo el año escolar. Las notas de revisión no modifican el ranking del grupo.</h5>

  -->

  <h5 class="ml-4  mt-3 mb-3"><b>Nota:</b> La o las áreas, asignaturas o materias a las cuales se les selecciono como Alfabética, Cualitativa o Literal, el representante en el histórico de Actividades o Contenidos y en la boleta observara dicha nomenclatura o leyenda a pesar de que el sistema trabaje y muestre notas numéricas del lado de los profesores y/o administradores.</h5>


<h5 style="color:red;" class="ml-4  mt-3 mb-3"><b>!Importante!</b> para el correcto funcionamiento de la boleta "alfanumérica" será necesario colocar el valor de <b>"0.1"</b> en la columna "Aux" en aquellos estudiantes que no presentaran o realizaran ninguna de las actividades u objetivos del lapso o momento.; El valor <b>"0.1 - Clave"</b> siempre permanecerá oculto a la vista de los representantes.</h5>

<h5 style="color:darkorange;" class="ml-4  mt-3 mb-3"> El sistema puede hacer los cálculos del sistema de Ranking y calificación final si se trabaja con el registro de porcentajes.</h5>



		    <table class="ml-1" style="text-align:center; vertical-align:middle; width: 99.5%; " >

			    <tr>
                <td class="borde_negro" rowspan="4" style="height: 23px; width: 1.5%; font-size:12px;"><b>N°</b></td>
                <td class="borde_negro" rowspan="4" BGCOLOR="<?php echo $color0;?>" style="height: 23px; width: 10.5%;"><b>Estudiantes:</b></td>
                <td style="height: 23px; width: 1%;">  </td>

                <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color1;?>" style="width:18.2%;height:23px;">1er Lapso - Momento</th>
                <th class="borde_negro" rowspan="4" BGCOLOR="<?php echo $color1a;?>" style="width:2.6%;font-size:12px;height:23px;">Aux.</th>
                <th class="borde_negro" rowspan="4" BGCOLOR="<?php echo $color1;?>" style="width:2.6%;font-size:12px;height:23px;">Nota Def.</th>



                <td style="height: 23px; width: 1.8%;">
                  
<span data-toggle="tooltip" data-placement="top" title="Imprimir - 1er Lapso"  >

<form target="_blank" action="zzz_impresiones/imp_lista_carta_mod_llena.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $el_titulo; ?>">
    <input type="hidden" id="id_num_matxxx"  name="id_num_matxxx"  value="<?php echo $num_materia; ?>">
    <input type="hidden" id="id_materiaxxx"  name="id_materiaxxx"  value="<?php echo $la_materia; ?>">
    <input type="hidden" id="sistema_de_ev"  name="sistema_de_ev"  value="<?php echo $tipo_evaluacion; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="1°">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm btn-aaa" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="far fa-file-pdf fa-lg"></i></button>


</form>


<form target="_blank" action="zzz_impresiones/imp_lista_oficio_mod_llena.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $el_titulo; ?>">
    <input type="hidden" id="id_num_matxxx"  name="id_num_matxxx"  value="<?php echo $num_materia; ?>">
    <input type="hidden" id="id_materiaxxx"  name="id_materiaxxx"  value="<?php echo $la_materia; ?>">
    <input type="hidden" id="sistema_de_ev"  name="sistema_de_ev"  value="<?php echo $tipo_evaluacion; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="1°">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm btn-aaa" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="far fa-file-pdf fa-lg"></i></button>

</form>     </span>



                </td>




                <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color2;?>" style="width:18.2%;height:23px;">2do Lapso  - Momento</th>
                <th class="borde_negro" rowspan="4" BGCOLOR="<?php echo $color2a;?>" style="width:2.6%;font-size:12px;height:23px;">Aux.</th>
                <th class="borde_negro" rowspan="4" BGCOLOR="<?php echo $color2;?>" style="width:2.6%;font-size:12px;height:23px;">Nota Def.</th>



    <td style="height: 23px; width: 1.8%;">
                  
<span data-toggle="tooltip" data-placement="top" title="Imprimir - 2do Lapso">

<form target="_blank" action="zzz_impresiones/imp_lista_carta_mod_llena.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $el_titulo; ?>">
    <input type="hidden" id="id_num_matxxx"  name="id_num_matxxx"  value="<?php echo $num_materia; ?>">
    <input type="hidden" id="id_materiaxxx"  name="id_materiaxxx"  value="<?php echo $la_materia; ?>">
    <input type="hidden" id="sistema_de_ev"  name="sistema_de_ev"  value="<?php echo $tipo_evaluacion; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="2°">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm btn-bbb" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="far fa-file-pdf fa-lg"></i></button>


</form>


<form target="_blank" action="zzz_impresiones/imp_lista_oficio_mod_llena.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $el_titulo; ?>">
    <input type="hidden" id="id_num_matxxx"  name="id_num_matxxx"  value="<?php echo $num_materia; ?>">
    <input type="hidden" id="id_materiaxxx"  name="id_materiaxxx"  value="<?php echo $la_materia; ?>">
    <input type="hidden" id="sistema_de_ev"  name="sistema_de_ev"  value="<?php echo $tipo_evaluacion; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="2°">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm btn-bbb" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="far fa-file-pdf fa-lg"></i></button>

</form>     </span>



                </td>




                <th class="borde_negro" colspan="7" BGCOLOR="<?php echo $color3;?>" style="width:18.2%;height:23px;">3er Lapso  - Momento</th>
                <th class="borde_negro" rowspan="4" BGCOLOR="<?php echo $color3a;?>" style="width:2.6%;font-size:12px;height:23px;">Aux.</th>
                <th class="borde_negro" rowspan="4" BGCOLOR="<?php echo $color3;?>" style="width:2.6%;font-size:12px;height:23px;">Nota Def.</th>


    <td style="height: 23px; width: 1.8%;">
                  
<span data-toggle="tooltip" data-placement="top" title="Imprimir - 3er Lapso">

<form target="_blank" action="zzz_impresiones/imp_lista_carta_mod_llena.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $el_titulo; ?>">
    <input type="hidden" id="id_num_matxxx"  name="id_num_matxxx"  value="<?php echo $num_materia; ?>">
    <input type="hidden" id="id_materiaxxx"  name="id_materiaxxx"  value="<?php echo $la_materia; ?>">
    <input type="hidden" id="sistema_de_ev"  name="sistema_de_ev"  value="<?php echo $tipo_evaluacion; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="3°">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm btn-ccc" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="far fa-file-pdf fa-lg"></i></button>


</form>


<form target="_blank" action="zzz_impresiones/imp_lista_oficio_mod_llena.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $el_titulo; ?>">
    <input type="hidden" id="id_num_matxxx"  name="id_num_matxxx"  value="<?php echo $num_materia; ?>">
    <input type="hidden" id="id_materiaxxx"  name="id_materiaxxx"  value="<?php echo $la_materia; ?>">
    <input type="hidden" id="sistema_de_ev"  name="sistema_de_ev"  value="<?php echo $tipo_evaluacion; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="3°">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm btn-ccc" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="far fa-file-pdf fa-lg"></i></button>

</form>     </span>



                </td>


                <th class="borde_negro" colspan="2" BGCOLOR="<?php echo $color4;?>"  style="width:5.2%;height:23px;"   >Nota Final</th>
                <th class="borde_negro" colspan="2" BGCOLOR="<?php echo $color0;?>"  style="width:5.2%;height:23px;"   >Revisión</th> 
           
                
           


				</tr>


                <tr>

               
                <td style="height: 23px; width: 1%;">  </td>


<?php

include("../conectar.php");


if ($num_materia == '1') {


$querymateria = "SELECT id_asign, a_abrev, A11, A12, A13, A14, A15, A16, A17, A21, A22, A23, A24, A25, A26, A27, A31, A32, A33, A34, A35, A36, A37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


$L1_V1 = $row_datos_controlmat['A11'];
$L1_V2 = $row_datos_controlmat['A12'];
$L1_V3 = $row_datos_controlmat['A13'];
$L1_V4 = $row_datos_controlmat['A14'];
$L1_V5 = $row_datos_controlmat['A15'];
$L1_V6 = $row_datos_controlmat['A16'];
$L1_V7 = $row_datos_controlmat['A17'];

$L2_V1 = $row_datos_controlmat['A21'];
$L2_V2 = $row_datos_controlmat['A22'];
$L2_V3 = $row_datos_controlmat['A23'];
$L2_V4 = $row_datos_controlmat['A24'];
$L2_V5 = $row_datos_controlmat['A25'];
$L2_V6 = $row_datos_controlmat['A26'];
$L2_V7 = $row_datos_controlmat['A27'];

$L3_V1 = $row_datos_controlmat['A31'];
$L3_V2 = $row_datos_controlmat['A32'];
$L3_V3 = $row_datos_controlmat['A33'];
$L3_V4 = $row_datos_controlmat['A34'];
$L3_V5 = $row_datos_controlmat['A35'];
$L3_V6 = $row_datos_controlmat['A36'];
$L3_V7 = $row_datos_controlmat['A37'];

}


if ($num_materia == '2') {


$querymateria = "SELECT id_asign,  b_abrev, B11, B12, B13, B14, B15, B16, B17, B21, B22, B23, B24, B25, B26, B27, B31, B32, B33, B34, B35, B36, B37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


$L1_V1 = $row_datos_controlmat['B11'];
$L1_V2 = $row_datos_controlmat['B12'];
$L1_V3 = $row_datos_controlmat['B13'];
$L1_V4 = $row_datos_controlmat['B14'];
$L1_V5 = $row_datos_controlmat['B15'];
$L1_V6 = $row_datos_controlmat['B16'];
$L1_V7 = $row_datos_controlmat['B17'];

$L2_V1 = $row_datos_controlmat['B21'];
$L2_V2 = $row_datos_controlmat['B22'];
$L2_V3 = $row_datos_controlmat['B23'];
$L2_V4 = $row_datos_controlmat['B24'];
$L2_V5 = $row_datos_controlmat['B25'];
$L2_V6 = $row_datos_controlmat['B26'];
$L2_V7 = $row_datos_controlmat['B27'];

$L3_V1 = $row_datos_controlmat['B31'];
$L3_V2 = $row_datos_controlmat['B32'];
$L3_V3 = $row_datos_controlmat['B33'];
$L3_V4 = $row_datos_controlmat['B34'];
$L3_V5 = $row_datos_controlmat['B35'];
$L3_V6 = $row_datos_controlmat['B36'];
$L3_V7 = $row_datos_controlmat['B37'];

}


if ($num_materia == '3') {


$querymateria = "SELECT id_asign,  c_abrev, C11, C12, C13, C14, C15, C16, C17, C21, C22, C23, C24, C25, C26, C27, C31, C32, C33, C34, C35, C36, C37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 

$L1_V1 = $row_datos_controlmat['C11'];
$L1_V2 = $row_datos_controlmat['C12'];
$L1_V3 = $row_datos_controlmat['C13'];
$L1_V4 = $row_datos_controlmat['C14'];
$L1_V5 = $row_datos_controlmat['C15'];
$L1_V6 = $row_datos_controlmat['C16'];
$L1_V7 = $row_datos_controlmat['C17'];

$L2_V1 = $row_datos_controlmat['C21'];
$L2_V2 = $row_datos_controlmat['C22'];
$L2_V3 = $row_datos_controlmat['C23'];
$L2_V4 = $row_datos_controlmat['C24'];
$L2_V5 = $row_datos_controlmat['C25'];
$L2_V6 = $row_datos_controlmat['C26'];
$L2_V7 = $row_datos_controlmat['C27'];

$L3_V1 = $row_datos_controlmat['C31'];
$L3_V2 = $row_datos_controlmat['C32'];
$L3_V3 = $row_datos_controlmat['C33'];
$L3_V4 = $row_datos_controlmat['C34'];
$L3_V5 = $row_datos_controlmat['C35'];
$L3_V6 = $row_datos_controlmat['C36'];
$L3_V7 = $row_datos_controlmat['C37'];



}


if ($num_materia == '4') {


$querymateria = "SELECT id_asign,  d_abrev, D11, D12, D13, D14, D15, D16, D17, D21, D22, D23, D24, D25, D26, D27, D31, D32, D33, D34, D35, D36, D37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


$L1_V1 = $row_datos_controlmat['D11'];
$L1_V2 = $row_datos_controlmat['D12'];
$L1_V3 = $row_datos_controlmat['D13'];
$L1_V4 = $row_datos_controlmat['D14'];
$L1_V5 = $row_datos_controlmat['D15'];
$L1_V6 = $row_datos_controlmat['D16'];
$L1_V7 = $row_datos_controlmat['D17'];

$L2_V1 = $row_datos_controlmat['D21'];
$L2_V2 = $row_datos_controlmat['D22'];
$L2_V3 = $row_datos_controlmat['D23'];
$L2_V4 = $row_datos_controlmat['D24'];
$L2_V5 = $row_datos_controlmat['D25'];
$L2_V6 = $row_datos_controlmat['D26'];
$L2_V7 = $row_datos_controlmat['D27'];

$L3_V1 = $row_datos_controlmat['D31'];
$L3_V2 = $row_datos_controlmat['D32'];
$L3_V3 = $row_datos_controlmat['D33'];
$L3_V4 = $row_datos_controlmat['D34'];
$L3_V5 = $row_datos_controlmat['D35'];
$L3_V6 = $row_datos_controlmat['D36'];
$L3_V7 = $row_datos_controlmat['D37'];


}


if ($num_materia == '5') {


$querymateria = "SELECT id_asign,  e_abrev, E11, E12, E13, E14, E15, E16, E17, E21, E22, E23, E24, E25, E26, E27, E31, E32, E33, E34, E35, E36, E37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


$L1_V1 = $row_datos_controlmat['E11'];
$L1_V2 = $row_datos_controlmat['E12'];
$L1_V3 = $row_datos_controlmat['E13'];
$L1_V4 = $row_datos_controlmat['E14'];
$L1_V5 = $row_datos_controlmat['E15'];
$L1_V6 = $row_datos_controlmat['E16'];
$L1_V7 = $row_datos_controlmat['E17'];

$L2_V1 = $row_datos_controlmat['E21'];
$L2_V2 = $row_datos_controlmat['E22'];
$L2_V3 = $row_datos_controlmat['E23'];
$L2_V4 = $row_datos_controlmat['E24'];
$L2_V5 = $row_datos_controlmat['E25'];
$L2_V6 = $row_datos_controlmat['E26'];
$L2_V7 = $row_datos_controlmat['E27'];

$L3_V1 = $row_datos_controlmat['E31'];
$L3_V2 = $row_datos_controlmat['E32'];
$L3_V3 = $row_datos_controlmat['E33'];
$L3_V4 = $row_datos_controlmat['E34'];
$L3_V5 = $row_datos_controlmat['E35'];
$L3_V6 = $row_datos_controlmat['E36'];
$L3_V7 = $row_datos_controlmat['E37'];


}


if ($num_materia == '6') {


$querymateria = "SELECT id_asign,  f_abrev, F11, F12, F13, F14, F15, F16, F17, F21, F22, F23, F24, F25, F26, F27, F31, F32, F33, F34, F35, F36, F37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 

$L1_V1 = $row_datos_controlmat['F11'];
$L1_V2 = $row_datos_controlmat['F12'];
$L1_V3 = $row_datos_controlmat['F13'];
$L1_V4 = $row_datos_controlmat['F14'];
$L1_V5 = $row_datos_controlmat['F15'];
$L1_V6 = $row_datos_controlmat['F16'];
$L1_V7 = $row_datos_controlmat['F17'];

$L2_V1 = $row_datos_controlmat['F21'];
$L2_V2 = $row_datos_controlmat['F22'];
$L2_V3 = $row_datos_controlmat['F23'];
$L2_V4 = $row_datos_controlmat['F24'];
$L2_V5 = $row_datos_controlmat['F25'];
$L2_V6 = $row_datos_controlmat['F26'];
$L2_V7 = $row_datos_controlmat['F27'];

$L3_V1 = $row_datos_controlmat['F31'];
$L3_V2 = $row_datos_controlmat['F32'];
$L3_V3 = $row_datos_controlmat['F33'];
$L3_V4 = $row_datos_controlmat['F34'];
$L3_V5 = $row_datos_controlmat['F35'];
$L3_V6 = $row_datos_controlmat['F36'];
$L3_V7 = $row_datos_controlmat['F37'];



}


if ($num_materia == '7') {


$querymateria = "SELECT id_asign,  g_abrev, G11, G12, G13, G14, G15, G16, G17, G21, G22, G23, G24, G25, G26, G27, G31, G32, G33, G34, G35, G36, G37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


$L1_V1 = $row_datos_controlmat['G11'];
$L1_V2 = $row_datos_controlmat['G12'];
$L1_V3 = $row_datos_controlmat['G13'];
$L1_V4 = $row_datos_controlmat['G14'];
$L1_V5 = $row_datos_controlmat['G15'];
$L1_V6 = $row_datos_controlmat['G16'];
$L1_V7 = $row_datos_controlmat['G17'];

$L2_V1 = $row_datos_controlmat['G21'];
$L2_V2 = $row_datos_controlmat['G22'];
$L2_V3 = $row_datos_controlmat['G23'];
$L2_V4 = $row_datos_controlmat['G24'];
$L2_V5 = $row_datos_controlmat['G25'];
$L2_V6 = $row_datos_controlmat['G26'];
$L2_V7 = $row_datos_controlmat['G27'];

$L3_V1 = $row_datos_controlmat['G31'];
$L3_V2 = $row_datos_controlmat['G32'];
$L3_V3 = $row_datos_controlmat['G33'];
$L3_V4 = $row_datos_controlmat['G34'];
$L3_V5 = $row_datos_controlmat['G35'];
$L3_V6 = $row_datos_controlmat['G36'];
$L3_V7 = $row_datos_controlmat['G37'];


}



if ($num_materia == '8') {


$querymateria = "SELECT id_asign,  h_abrev, H11, H12, H13, H14, H15, H16, H17, H21, H22, H23, H24, H25, H26, H27, H31, H32, H33, H34, H35, H36, H37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


$L1_V1 = $row_datos_controlmat['H11'];
$L1_V2 = $row_datos_controlmat['H12'];
$L1_V3 = $row_datos_controlmat['H13'];
$L1_V4 = $row_datos_controlmat['H14'];
$L1_V5 = $row_datos_controlmat['H15'];
$L1_V6 = $row_datos_controlmat['H16'];
$L1_V7 = $row_datos_controlmat['H17'];

$L2_V1 = $row_datos_controlmat['H21'];
$L2_V2 = $row_datos_controlmat['H22'];
$L2_V3 = $row_datos_controlmat['H23'];
$L2_V4 = $row_datos_controlmat['H24'];
$L2_V5 = $row_datos_controlmat['H25'];
$L2_V6 = $row_datos_controlmat['H26'];
$L2_V7 = $row_datos_controlmat['H27'];

$L3_V1 = $row_datos_controlmat['H31'];
$L3_V2 = $row_datos_controlmat['H32'];
$L3_V3 = $row_datos_controlmat['H33'];
$L3_V4 = $row_datos_controlmat['H34'];
$L3_V5 = $row_datos_controlmat['H35'];
$L3_V6 = $row_datos_controlmat['H36'];
$L3_V7 = $row_datos_controlmat['H37'];


}



if ($num_materia == '9') {


$querymateria = "SELECT id_asign,  i_abrev, I11, I12, I13, I14, I15, I16, I17, I21, I22, I23, I24, I25, I26, I27, I31, I32, I33, I34, I35, I36, I37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


$L1_V1 = $row_datos_controlmat['I11'];
$L1_V2 = $row_datos_controlmat['I12'];
$L1_V3 = $row_datos_controlmat['I13'];
$L1_V4 = $row_datos_controlmat['I14'];
$L1_V5 = $row_datos_controlmat['I15'];
$L1_V6 = $row_datos_controlmat['I16'];
$L1_V7 = $row_datos_controlmat['I17'];

$L2_V1 = $row_datos_controlmat['I21'];
$L2_V2 = $row_datos_controlmat['I22'];
$L2_V3 = $row_datos_controlmat['I23'];
$L2_V4 = $row_datos_controlmat['I24'];
$L2_V5 = $row_datos_controlmat['I25'];
$L2_V6 = $row_datos_controlmat['I26'];
$L2_V7 = $row_datos_controlmat['I27'];

$L3_V1 = $row_datos_controlmat['I31'];
$L3_V2 = $row_datos_controlmat['I32'];
$L3_V3 = $row_datos_controlmat['I33'];
$L3_V4 = $row_datos_controlmat['I34'];
$L3_V5 = $row_datos_controlmat['I35'];
$L3_V6 = $row_datos_controlmat['I36'];
$L3_V7 = $row_datos_controlmat['I37'];


}



if ($num_materia == '10') {


$querymateria = "SELECT id_asign,  j_abrev, J11, J12, J13, J14, J15, J16, J17, J21, J22, J23, J24, J25, J26, J27, J31, J32, J33, J34, J35, J36, J37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


$L1_V1 = $row_datos_controlmat['J11'];
$L1_V2 = $row_datos_controlmat['J12'];
$L1_V3 = $row_datos_controlmat['J13'];
$L1_V4 = $row_datos_controlmat['J14'];
$L1_V5 = $row_datos_controlmat['J15'];
$L1_V6 = $row_datos_controlmat['J16'];
$L1_V7 = $row_datos_controlmat['J17'];

$L2_V1 = $row_datos_controlmat['J21'];
$L2_V2 = $row_datos_controlmat['J22'];
$L2_V3 = $row_datos_controlmat['J23'];
$L2_V4 = $row_datos_controlmat['J24'];
$L2_V5 = $row_datos_controlmat['J25'];
$L2_V6 = $row_datos_controlmat['J26'];
$L2_V7 = $row_datos_controlmat['J27'];

$L3_V1 = $row_datos_controlmat['J31'];
$L3_V2 = $row_datos_controlmat['J32'];
$L3_V3 = $row_datos_controlmat['J33'];
$L3_V4 = $row_datos_controlmat['J34'];
$L3_V5 = $row_datos_controlmat['J35'];
$L3_V6 = $row_datos_controlmat['J36'];
$L3_V7 = $row_datos_controlmat['J37'];


}



if ($num_materia == '11') {


$querymateria = "SELECT id_asign,  k_abrev, K11, K12, K13, K14, K15, K16, K17, K21, K22, K23, K24, K25, K26, K27, K31, K32, K33, K34, K35, K36, K37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


$L1_V1 = $row_datos_controlmat['K11'];
$L1_V2 = $row_datos_controlmat['K12'];
$L1_V3 = $row_datos_controlmat['K13'];
$L1_V4 = $row_datos_controlmat['K14'];
$L1_V5 = $row_datos_controlmat['K15'];
$L1_V6 = $row_datos_controlmat['K16'];
$L1_V7 = $row_datos_controlmat['K17'];

$L2_V1 = $row_datos_controlmat['K21'];
$L2_V2 = $row_datos_controlmat['K22'];
$L2_V3 = $row_datos_controlmat['K23'];
$L2_V4 = $row_datos_controlmat['K24'];
$L2_V5 = $row_datos_controlmat['K25'];
$L2_V6 = $row_datos_controlmat['K26'];
$L2_V7 = $row_datos_controlmat['K27'];

$L3_V1 = $row_datos_controlmat['K31'];
$L3_V2 = $row_datos_controlmat['K32'];
$L3_V3 = $row_datos_controlmat['K33'];
$L3_V4 = $row_datos_controlmat['K34'];
$L3_V5 = $row_datos_controlmat['K35'];
$L3_V6 = $row_datos_controlmat['K36'];
$L3_V7 = $row_datos_controlmat['K37'];


}



if ($num_materia == '12') {


$querymateria = "SELECT id_asign,  l_abrev, L11, L12, L13, L14, L15, L16, L17, L21, L22, L23, L24, L25, L26, L27, L31, L32, L33, L34, L35, L36, L37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


$L1_V1 = $row_datos_controlmat['L11'];
$L1_V2 = $row_datos_controlmat['L12'];
$L1_V3 = $row_datos_controlmat['L13'];
$L1_V4 = $row_datos_controlmat['L14'];
$L1_V5 = $row_datos_controlmat['L15'];
$L1_V6 = $row_datos_controlmat['L16'];
$L1_V7 = $row_datos_controlmat['L17'];

$L2_V1 = $row_datos_controlmat['L21'];
$L2_V2 = $row_datos_controlmat['L22'];
$L2_V3 = $row_datos_controlmat['L23'];
$L2_V4 = $row_datos_controlmat['L24'];
$L2_V5 = $row_datos_controlmat['L25'];
$L2_V6 = $row_datos_controlmat['L26'];
$L2_V7 = $row_datos_controlmat['L27'];

$L3_V1 = $row_datos_controlmat['L31'];
$L3_V2 = $row_datos_controlmat['L32'];
$L3_V3 = $row_datos_controlmat['L33'];
$L3_V4 = $row_datos_controlmat['L34'];
$L3_V5 = $row_datos_controlmat['L35'];
$L3_V6 = $row_datos_controlmat['L36'];
$L3_V7 = $row_datos_controlmat['L37'];


}



if ($num_materia == '13') {


$querymateria = "SELECT id_asign,  m_abrev, M11, M12, M13, M14, M15, M16, M17, M21, M22, M23, M24, M25, M26, M27, M31, M32, M33, M34, M35, M36, M37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


$L1_V1 = $row_datos_controlmat['M11'];
$L1_V2 = $row_datos_controlmat['M12'];
$L1_V3 = $row_datos_controlmat['M13'];
$L1_V4 = $row_datos_controlmat['M14'];
$L1_V5 = $row_datos_controlmat['M15'];
$L1_V6 = $row_datos_controlmat['M16'];
$L1_V7 = $row_datos_controlmat['M17'];

$L2_V1 = $row_datos_controlmat['M21'];
$L2_V2 = $row_datos_controlmat['M22'];
$L2_V3 = $row_datos_controlmat['M23'];
$L2_V4 = $row_datos_controlmat['M24'];
$L2_V5 = $row_datos_controlmat['M25'];
$L2_V6 = $row_datos_controlmat['M26'];
$L2_V7 = $row_datos_controlmat['M27'];

$L3_V1 = $row_datos_controlmat['M31'];
$L3_V2 = $row_datos_controlmat['M32'];
$L3_V3 = $row_datos_controlmat['M33'];
$L3_V4 = $row_datos_controlmat['M34'];
$L3_V5 = $row_datos_controlmat['M35'];
$L3_V6 = $row_datos_controlmat['M36'];
$L3_V7 = $row_datos_controlmat['M37'];

}


if ($num_materia == '14') {


$querymateria = "SELECT id_asign,  n_abrev, N11, N12, N13, N14, N15, N16, N17, N21, N22, N23, N24, N25, N26, N27, N31, N32, N33, N34, N35, N36, N37 FROM asignaturas
         WHERE id_asign = $la_asign_es                         
         GROUP BY id_asign Limit 1" ;

$datos_controlmat = mysqli_query($enlace, $querymateria) or die(mysqli_error());
$row_datos_controlmat = mysqli_fetch_array($datos_controlmat); 


$L1_V1 = $row_datos_controlmat['N11'];
$L1_V2 = $row_datos_controlmat['N12'];
$L1_V3 = $row_datos_controlmat['N13'];
$L1_V4 = $row_datos_controlmat['N14'];
$L1_V5 = $row_datos_controlmat['N15'];
$L1_V6 = $row_datos_controlmat['N16'];
$L1_V7 = $row_datos_controlmat['N17'];

$L2_V1 = $row_datos_controlmat['N21'];
$L2_V2 = $row_datos_controlmat['N22'];
$L2_V3 = $row_datos_controlmat['N23'];
$L2_V4 = $row_datos_controlmat['N24'];
$L2_V5 = $row_datos_controlmat['N25'];
$L2_V6 = $row_datos_controlmat['N26'];
$L2_V7 = $row_datos_controlmat['N27'];

$L3_V1 = $row_datos_controlmat['N31'];
$L3_V2 = $row_datos_controlmat['N32'];
$L3_V3 = $row_datos_controlmat['N33'];
$L3_V4 = $row_datos_controlmat['N34'];
$L3_V5 = $row_datos_controlmat['N35'];
$L3_V6 = $row_datos_controlmat['N36'];
$L3_V7 = $row_datos_controlmat['N37'];

}


$para_el_porc_L1_V1 = ($L1_V1 * $el_puntaje_completo_es)/100;
$para_el_porc_L1_V2 = ($L1_V2 * $el_puntaje_completo_es)/100;
$para_el_porc_L1_V3 = ($L1_V3 * $el_puntaje_completo_es)/100;
$para_el_porc_L1_V4 = ($L1_V4 * $el_puntaje_completo_es)/100;
$para_el_porc_L1_V5 = ($L1_V5 * $el_puntaje_completo_es)/100;
$para_el_porc_L1_V6 = ($L1_V6 * $el_puntaje_completo_es)/100;
$para_el_porc_L1_V7 = ($L1_V7 * $el_puntaje_completo_es)/100;


$para_el_porc_L2_V1 = ($L2_V1 * $el_puntaje_completo_es)/100;
$para_el_porc_L2_V2 = ($L2_V2 * $el_puntaje_completo_es)/100;
$para_el_porc_L2_V3 = ($L2_V3 * $el_puntaje_completo_es)/100;
$para_el_porc_L2_V4 = ($L2_V4 * $el_puntaje_completo_es)/100;
$para_el_porc_L2_V5 = ($L2_V5 * $el_puntaje_completo_es)/100;
$para_el_porc_L2_V6 = ($L2_V6 * $el_puntaje_completo_es)/100;
$para_el_porc_L2_V7 = ($L2_V7 * $el_puntaje_completo_es)/100;


$para_el_porc_L3_V1 = ($L3_V1 * $el_puntaje_completo_es)/100;
$para_el_porc_L3_V2 = ($L3_V2 * $el_puntaje_completo_es)/100;
$para_el_porc_L3_V3 = ($L3_V3 * $el_puntaje_completo_es)/100;
$para_el_porc_L3_V4 = ($L3_V4 * $el_puntaje_completo_es)/100;
$para_el_porc_L3_V5 = ($L3_V5 * $el_puntaje_completo_es)/100;
$para_el_porc_L3_V6 = ($L3_V6 * $el_puntaje_completo_es)/100;
$para_el_porc_L3_V7 = ($L3_V7 * $el_puntaje_completo_es)/100;






$L1_Valores = $L1_V1+$L1_V2+$L1_V3+$L1_V4+$L1_V5+$L1_V6+$L1_V7; 

$L2_Valores = $L2_V1+$L2_V2+$L2_V3+$L2_V4+$L2_V5+$L2_V6+$L2_V7; 

$L3_Valores = $L3_V1+$L3_V2+$L3_V3+$L3_V4+$L3_V5+$L3_V6+$L3_V7; 


mysqli_close($enlace); 


?>









                <td class="borde_negro" colspan="7" BGCOLOR="<?php echo $color0;?>" 
                    style="width:18.2%; height: 23px; font-size: 14px;">% por Actividad, Conten. Objetiv. - <b>Total: <?php echo $L1_Valores;?>%</b></td>


                <td style="height: 23px; width: 1.8%;">  </td>


                 <td class="borde_negro" colspan="7" BGCOLOR="<?php echo $color0;?>" 
                    style="width:18.2%; height: 23px; font-size: 14px;">% por Actividad, Conten. Objetiv. - <b>Total:  <?php echo $L2_Valores;?>%</b></td>

                <td style="height: 23px; width: 1.8%;">  </td>


              <td class="borde_negro" colspan="7" BGCOLOR="<?php echo $color0;?>" 
                style="width:18.2%; height: 23px; font-size: 14px;">% por Actividad, Conten. Objetiv. - <b>Total: <?php echo $L3_Valores;?>%</b></td>

                <td style="height: 23px; width: 1.8%;">  </td>



  
            <th class="borde_negro" rowspan="3" style="font-size:14px;height:23px;width:2.6%;">Aux. Final</th>
            <th class="borde_negro" rowspan="3" BGCOLOR="<?php echo $color4;?>" style="font-size:14px;height:23px;width:2.6%;">Def.</th>

            <th class="borde_negro" rowspan="3" style="font-size:14px;height:23px;width:2.6%;">1°</th>
            <th class="borde_negro" rowspan="3" style="font-size:14px;height:23px;width:2.6%;">2°</th>




                </tr>




               <tr>

       
                
                <td style="height: 23px; width: 1%;">  </td>

                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >1</th>  
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >2</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >3</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >4</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >5</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >6</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >7</th>


                <td style="height: 23px; width: 1.8%;">  </td>


                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >1</th>  
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >2</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >3</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >4</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >5</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >6</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >7</th>


                <td style="height: 23px; width: 1.8%;">  </td>


                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >1</th>  
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >2</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >3</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >4</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >5</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >6</th>
                <th class="borde_negro" style="width:2.6%; font-size: 12px; height:23px;" >7</th>


                <td style="height: 23px; width: 1.8%;">  </td>

<?php

if ($row_datos_controlasignh['actividad1'] == 'No' and $el_g !=57 ) {
  $text_rest_a = 'disabled';
}


if ($row_datos_controlasignh['actividad2'] == 'No' and $el_g !=57 ) {
  $text_rest_b = 'disabled';
}


if ($row_datos_controlasignh['actividad3'] == 'No' and $el_g !=57 ) {
  $text_rest_c = 'disabled';
}

if ($row_datos_controlasignh['actividad4'] == 'No' and $el_g !=57 ) {
  $text_rest_d = 'disabled';
}

if ($row_datos_controlasignh['actividad5'] == 'No' and $el_g !=57 ) {
  $text_rest_e = 'disabled';
}

if ($row_datos_controlasignh['actividad6'] == 'No' and $el_g !=57 ) {
  $text_rest_f = 'disabled';
}

if ($row_datos_controlasignh['actividad7'] == 'No' and $el_g !=57 ) {
  $text_rest_g = 'disabled';
}





?>
               
           


                </tr>


                  <tr>

              
                
                <td style="height: 28px; width: 1%;">  </td>        <form method="POST">    

                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L1-V1" name="L1-V1" 
                    value="<?php echo $L1_V1;?>" <?php echo $text_a; ?>  ></th>  
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L1-V2" name="L1-V2" 
                    value="<?php echo $L1_V2;?>" <?php echo $text_a; ?>  ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L1-V3" name="L1-V3" 
                    value="<?php echo $L1_V3;?>" <?php echo $text_a; ?>  ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L1-V4" name="L1-V4" 
                    value="<?php echo $L1_V4;?>" <?php echo $text_a; ?>  ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L1-V5" name="L1-V5" 
                    value="<?php echo $L1_V5;?>" <?php echo $text_a; ?>  ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L1-V6" name="L1-V6" 
                    value="<?php echo $L1_V6;?>" <?php echo $text_a; ?>  ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L1-V7" name="L1-V7" 
                    value="<?php echo $L1_V7;?>" <?php echo $text_a; ?>  ></th>


                <td style="height: 28px; width: 1.8%;">  </td>


                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L2-V1" name="L2-V1" 
                    value="<?php echo $L2_V1;?>" <?php echo $text_b; ?>  ></th>  
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L2-V2" name="L2-V2" 
                    value="<?php echo $L2_V2;?>" <?php echo $text_b; ?>  ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L2-V3" name="L2-V3" 
                    value="<?php echo $L2_V3;?>" <?php echo $text_b; ?>  ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L2-V4" name="L2-V4" 
                    value="<?php echo $L2_V4;?>" <?php echo $text_b; ?>  ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L2-V5" name="L2-V5" 
                    value="<?php echo $L2_V5;?>" <?php echo $text_b; ?>  ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L2-V6" name="L2-V6" 
                    value="<?php echo $L2_V6;?>" <?php echo $text_b; ?>  ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L2-V7" name="L2-V7" 
                    value="<?php echo $L2_V7;?>" <?php echo $text_b; ?>  ></th>


                <td style="height: 28px; width: 1.8%;">  </td>


                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L3-V1" name="L3-V1" 
                    value="<?php echo $L3_V1;?>"  <?php echo $text_c; ?>   ></th>  
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L3-V2" name="L3-V2" 
                    value="<?php echo $L3_V2;?>"  <?php echo $text_c; ?>   ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L3-V3" name="L3-V3" 
                    value="<?php echo $L3_V3;?>"  <?php echo $text_c; ?>   ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L3-V4" name="L3-V4"
                    value="<?php echo $L3_V4;?>"  <?php echo $text_c; ?>   ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L3-V5" name="L3-V5" 
                    value="<?php echo $L3_V5;?>"  <?php echo $text_c; ?>   ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L3-V6" name="L3-V6" 
                    value="<?php echo $L3_V6;?>"  <?php echo $text_c; ?>   ></th>
                <th class="borde_negro" style="width:2.6%; font-size: 14px; height:28px;" ><input type="text" maxlength="2" style="width : 80%; height : 75%" id="L3-V7" name="L3-V7" 
                    value="<?php echo $L3_V7;?>"  <?php echo $text_c; ?>   ></th>


                <td style="height: 28px; width: 1.8%;">  </td>

                     


                </tr>

                <tr>
                    <td style="height: 23px; width: 14%;" colspan="2">

    <span id="GFG_DOWN" 
       style="font-size: 14px; 
              font-weight: bold;  
              color: purple; "> 
    </span> 

                    </td>



                    <td style="height: 23px; width: 1%;">  </td>
                    <td style="height: 23px; width: 23.4%;" colspan="9">  </td>
                    

                    <td style="height: 23px; width: 1.8%;">

                                         

                        <span data-toggle="tooltip" data-placement="right" title="Guardar el Valor en % de cada actividad del 1er Lapso"

<?php if ($text_aaa == 1 ){?>style="display:none"<?php } ?>

                        ><button type="submit" name="porcentaje_1er_L" class="btn btn-sm btn-aaa"><i class="far fa-save fa-lg"></i></button></span>
               

                    </td>

                    <td style="height: 23px; width: 23.4%;" colspan="9">  </td>
                    <td style="height: 23px; width: 1.8%;">

                       
                        <span data-toggle="tooltip" data-placement="right" title="Guardar el Valor en % de cada actividad del 2do Lapso"

<?php if ($text_bbb == 1 ){?>style="display:none"<?php } ?>

                        ><button type="submit" name="porcentaje_2do_L" class="btn btn-sm btn-bbb"><i class="far fa-save fa-lg"></i></button></span>
                      

                    </td>

                    <td style="height: 23px; width: 23.4%;" colspan="9">  </td>
                    <td style="height: 23px; width: 1.8%;">

                        
                        <span data-toggle="tooltip" data-placement="left" title="Guardar el Valor en % de cada actividad del 3er Lapso"

<?php if ($text_ccc == 1 ){?>style="display:none"<?php } ?>

                        ><button type="submit" name="porcentaje_3er_L" class="btn btn-sm btn-ccc"><i class="far fa-save fa-lg"></i></button></span>
                       

                    </td>

                    <td style="height: 23px; width: 5.8%;" colspan="2">  </td>
                </tr>   </form>

               












 <?php $a=1; ?>

                <?php do{?> 

                <tr>     

                <td class="align-middle borde_negro" align="center" style="font-size: 12px; height: 13px; height: 23px; width: 1.5%;">

<?php echo $a; $a=$a+1; ?>

                </td>

                <td class="align-middle borde_negro" align="center" style="font-size: 13px; height: 13px; height: 23px; width: 10.5%;"><b>  
              
<?php   

$firstape = strtok($row_datos_control['apellidos_estu'], ' ');

$lastape = strstr($row_datos_control['apellidos_estu'], ' ');


if ($lastape[1] != '') {

   $firstCharacterlastape = $lastape[1]; 
}

else {
    $firstCharacterlastape ='';
}
   

 echo $firstape; ?> <?php echo $firstCharacterlastape; ?>.</b>




<?php 

$firstnam = strtok($row_datos_control['nombre_estu'], ' ');

$lastnam = strstr($row_datos_control['nombre_estu'], ' ');

$firstCharacterlastnam = $lastnam[1];    

                                     echo $firstnam; ?> <?php echo $firstCharacterlastnam; ?>.   

<?php  if ( $row_datos_control['retirado_si_o_no'] == '1') {
      $resultiBB = '<b><span style="color:purple;"> -"RET"</span></b>'; 
      echo $resultiBB;
    }   ?>


                	</td>



 <?php 

$el_reg_del_est_es = $row_datos_control['id_reg_estu_actual'];

$el_dicho_id_e = $row_datos_control['id_estud'];

include("../conectar.php");

$query_notas = "SELECT * FROM asign_notas
               WHERE   id_reg_estu_actual = '$el_reg_del_est_es'
               and id_estud = '$el_dicho_id_e'
               and materia = '$num_materia'
                       
               GROUP BY id_asign_notas limit 1" ;

$datos_control_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());
$row_datos_control_notas = mysqli_fetch_array($datos_control_notas); 

 mysqli_close($enlace);


?>


                <td style="height: 23px; width: 1%;">  <!-- <?php echo $row_datos_control["id_estud"]; ?>/<?php echo $row_datos_control_notas["id_asign_notas"]; ?> -->

                  </td>








 <?php 


$nota_real_11 = ($row_datos_control_notas["nt_11"] * $para_el_porc_L1_V1)/$el_puntaje_completo_es;
$nota_real_12 = ($row_datos_control_notas["nt_12"] * $para_el_porc_L1_V2)/$el_puntaje_completo_es;
$nota_real_13 = ($row_datos_control_notas["nt_13"] * $para_el_porc_L1_V3)/$el_puntaje_completo_es;
$nota_real_14 = ($row_datos_control_notas["nt_14"] * $para_el_porc_L1_V4)/$el_puntaje_completo_es;
$nota_real_15 = ($row_datos_control_notas["nt_15"] * $para_el_porc_L1_V5)/$el_puntaje_completo_es;
$nota_real_16 = ($row_datos_control_notas["nt_16"] * $para_el_porc_L1_V6)/$el_puntaje_completo_es;
$nota_real_17 = ($row_datos_control_notas["nt_17"] * $para_el_porc_L1_V7)/$el_puntaje_completo_es;

$total_seven_L1 = $nota_real_11+$nota_real_12+$nota_real_13+$nota_real_14+$nota_real_15+$nota_real_16+$nota_real_17;

$total_seven_L1_con_Au = $total_seven_L1+ $row_datos_control_notas["nt_Au1"];
$total_seven_L1_con_Au_redon1 =number_format($total_seven_L1_con_Au, 1, '.', '');  // al redondear a 1 es necesario formatear a 1


$total_seven_L1_con_Au_redon =number_format($total_seven_L1_con_Au_redon1);   // se puede si antes el redondeado a 1 se formateo con un punto



$nota_real_21 = ($row_datos_control_notas["nt_21"] * $para_el_porc_L2_V1)/$el_puntaje_completo_es;
$nota_real_22 = ($row_datos_control_notas["nt_22"] * $para_el_porc_L2_V2)/$el_puntaje_completo_es;
$nota_real_23 = ($row_datos_control_notas["nt_23"] * $para_el_porc_L2_V3)/$el_puntaje_completo_es;
$nota_real_24 = ($row_datos_control_notas["nt_24"] * $para_el_porc_L2_V4)/$el_puntaje_completo_es;
$nota_real_25 = ($row_datos_control_notas["nt_25"] * $para_el_porc_L2_V5)/$el_puntaje_completo_es;
$nota_real_26 = ($row_datos_control_notas["nt_26"] * $para_el_porc_L2_V6)/$el_puntaje_completo_es;
$nota_real_27 = ($row_datos_control_notas["nt_27"] * $para_el_porc_L2_V7)/$el_puntaje_completo_es;

$total_seven_L2 = $nota_real_21+$nota_real_22+$nota_real_23+$nota_real_24+$nota_real_25+$nota_real_26+$nota_real_27;

$total_seven_L2_con_Au = $total_seven_L2+ $row_datos_control_notas["nt_Au2"];
$total_seven_L2_con_Au_redon1 =number_format($total_seven_L2_con_Au, 1, '.', '');


$total_seven_L2_con_Au_redon =number_format($total_seven_L2_con_Au_redon1);


$nota_real_31 = ($row_datos_control_notas["nt_31"] * $para_el_porc_L3_V1)/$el_puntaje_completo_es;
$nota_real_32 = ($row_datos_control_notas["nt_32"] * $para_el_porc_L3_V2)/$el_puntaje_completo_es;
$nota_real_33 = ($row_datos_control_notas["nt_33"] * $para_el_porc_L3_V3)/$el_puntaje_completo_es;
$nota_real_34 = ($row_datos_control_notas["nt_34"] * $para_el_porc_L3_V4)/$el_puntaje_completo_es;
$nota_real_35 = ($row_datos_control_notas["nt_35"] * $para_el_porc_L3_V5)/$el_puntaje_completo_es;
$nota_real_36 = ($row_datos_control_notas["nt_36"] * $para_el_porc_L3_V6)/$el_puntaje_completo_es;
$nota_real_37 = ($row_datos_control_notas["nt_37"] * $para_el_porc_L3_V7)/$el_puntaje_completo_es;

$total_seven_L3 = $nota_real_31+$nota_real_32+$nota_real_33+$nota_real_34+$nota_real_35+$nota_real_36+$nota_real_37;

$total_seven_L3_con_Au = $total_seven_L3+ $row_datos_control_notas["nt_Au3"];
$total_seven_L3_con_Au_redon1 =number_format($total_seven_L3_con_Au, 1, '.', '');

$total_seven_L3_con_Au_redon =number_format($total_seven_L3_con_Au_redon1);


$t1 = 0.000000001;
$t2 = 0.000000001;
$t3 = 0.000000001;

if ($total_seven_L1_con_Au >='0.1') {
    $t1 = 1;
}

if ($total_seven_L2_con_Au >='0.1') {
    $t2 = 1;
}

if ($total_seven_L3_con_Au >='0.1') {
    $t3 = 1;
}

$prom = $t1 + $t2 + $t3;

$total_def = ($total_seven_L1_con_Au_redon + $total_seven_L2_con_Au_redon + $total_seven_L3_con_Au_redon)/$prom;
$total_def_dec =number_format($total_def, 1, '.', '');


$total_def_con_au = $total_def + $row_datos_control_notas["nt_AuF"];


$total_def_un_dec =number_format($total_def_con_au, 1, '.', ''); 
$total_def_prom =number_format($total_def_un_dec);


 ?>



 <form id="save_L1_N1" method="POST" autocomplete="off" >      
</form> 
 <form  id="save_L1_N2" method="POST" autocomplete="off" >      
</form> 
 <form  id="save_L1_N3" method="POST" autocomplete="off" >      
</form> 
 <form  id="save_L1_N4" method="POST" autocomplete="off" >      
</form> 
 <form  id="save_L1_N5" method="POST" autocomplete="off" >      
</form> 
 <form  id="save_L1_N6" method="POST" autocomplete="off" >      
</form> 
 <form  id="save_L1_N7" method="POST" autocomplete="off" >      
</form> 

 <form  id="save_ZA_Au1" method="POST" autocomplete="off" >      
</form> 



 <form  id="save_aspectos_L1" method="POST" autocomplete="off" >      
</form> 




 <form   id="save_L2_N1" method="POST" autocomplete="off" >      
</form> 
 <form   id="save_L2_N2" method="POST" autocomplete="off" >      
</form> 
 <form   id="save_L2_N3" method="POST" autocomplete="off" >      
</form> 
 <form   id="save_L2_N4" method="POST" autocomplete="off" >      
</form> 
 <form   id="save_L2_N5" method="POST" autocomplete="off" >      
</form> 
 <form   id="save_L2_N6" method="POST" autocomplete="off" >      
</form> 
 <form  id="save_L2_N7" method="POST" autocomplete="off" >      
</form> 

 <form  id="save_ZB_Au2" method="POST" autocomplete="off" >      
</form> 


 <form  id="save_aspectos_L2" method="POST" autocomplete="off" >      
</form> 


 <form  id="save_L3_N1" method="POST" autocomplete="off" >      
</form> 
 <form  id="save_L3_N2" method="POST" autocomplete="off" >      
</form> 
 <form  id="save_L3_N3" method="POST" autocomplete="off" >      
</form> 
 <form  id="save_L3_N4" method="POST" autocomplete="off" >      
</form> 
 <form  id="save_L3_N5" method="POST" autocomplete="off" >      
</form> 
 <form  id="save_L3_N6" method="POST" autocomplete="off" >      
</form> 
 <form  id="save_L3_N7" method="POST" autocomplete="off" >      
</form> 

 <form  id="save_ZC_Au3" method="POST" autocomplete="off" >      
</form> 


 <form  id="save_aspectos_L3" method="POST" autocomplete="off" >      
</form> 


 <form  id="save_Aux_final_ZZZ" method="POST" autocomplete="off" >      
</form> 




 <form  id="save_Rev1" method="POST" autocomplete="off" >      
</form> 


 <form  id="save_Rev2" method="POST" autocomplete="off" >      
</form> 



<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L1_N1"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L1_N2"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L1_N3"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L1_N4"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L1_N5"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L1_N6"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L1_N7"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">

<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_ZA_Au1"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">

<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_aspectos_L1"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">




<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L2_N1"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L2_N2"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L2_N3"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L2_N4"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L2_N5"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L2_N6"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L2_N7"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">

<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_ZB_Au2"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">

<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_aspectos_L2"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">


<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L3_N1"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L3_N2"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L3_N3"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L3_N4"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L3_N5"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L3_N6"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_L3_N7"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">

<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_ZC_Au3"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">

<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_aspectos_L3"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">


<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_Aux_final_ZZZ"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">

<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_Rev1"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">
<input type="hidden" id="id_asign_notas"   name="id_asign_notas[]" form="save_Rev2"  value="<?php echo $row_datos_control_notas["id_asign_notas"]; ?>">







<?php

$color_nt_11 = '';

if ($row_datos_control_notas["nt_11"] >= '0' && $row_datos_control_notas["nt_11"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_11 = 'RosyBrown';
}


?>








<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_11; ?>;">



    <?php echo $row_datos_control_notas["nt_11"]; ?> <?php // echo $text_a; ?> <?php echo $text_rest_a; ?>  



</td>









<?php

if ($row_datos_control_notas["nt_11"] >= '0' && $row_datos_control_notas["nt_11"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_11 = $apla_nt_11 + 1;
}


?>    


<?php

$color_nt_12 = '';

if ($row_datos_control_notas["nt_12"] >= '0' && $row_datos_control_notas["nt_12"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_12 = 'RosyBrown';
}


?>


           
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_12; ?>;">
 <?php echo $row_datos_control_notas["nt_12"]; ?> <?php // echo $text_a; ?> <?php echo $text_rest_b; ?>  </td>


 <?php

if ($row_datos_control_notas["nt_12"] >= '0' && $row_datos_control_notas["nt_12"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_12 = $apla_nt_12 + 1;
}


?>

<?php

$color_nt_13 = '';

if ($row_datos_control_notas["nt_13"] >= '0' && $row_datos_control_notas["nt_13"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_13 = 'RosyBrown';
}


?>

            
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_13; ?>;">
<?php echo $row_datos_control_notas["nt_13"]; ?> <?php // echo $text_a; ?>  <?php echo $text_rest_c; ?>   </td>


<?php

if ($row_datos_control_notas["nt_13"] >= '0' && $row_datos_control_notas["nt_13"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_13 = $apla_nt_13 + 1;
}


?>


<?php

$color_nt_14 = '';

if ($row_datos_control_notas["nt_14"] >= '0' && $row_datos_control_notas["nt_14"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_14 = 'RosyBrown';
}


?>

           
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_14; ?>;">
 <?php echo $row_datos_control_notas["nt_14"]; ?> <?php // echo $text_a; ?>  <?php echo $text_rest_d; ?>   </td>

<?php

if ($row_datos_control_notas["nt_14"] >= '0' && $row_datos_control_notas["nt_14"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_14 = $apla_nt_14 + 1;
}


?>

<?php

$color_nt_15 = '';

if ($row_datos_control_notas["nt_15"] >= '0' && $row_datos_control_notas["nt_15"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_15 = 'RosyBrown';
}


?>



            
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_15; ?>;">
 <?php echo $row_datos_control_notas["nt_15"]; ?> <?php // echo $text_a; ?>   <?php echo $text_rest_e; ?>  </td>


<?php

if ($row_datos_control_notas["nt_15"] >= '0' && $row_datos_control_notas["nt_15"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_15 = $apla_nt_15 + 1;
}


?>


<?php

$color_nt_16 = '';

if ($row_datos_control_notas["nt_16"] >= '0' && $row_datos_control_notas["nt_16"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_16 = 'RosyBrown';
}


?>

            
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_16; ?>;">
 <?php echo $row_datos_control_notas["nt_16"]; ?> <?php // echo $text_a; ?>  <?php echo $text_rest_f; ?>   </td>


<?php

if ($row_datos_control_notas["nt_16"] >= '0' && $row_datos_control_notas["nt_16"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_16 = $apla_nt_16 + 1;
}


?>


<?php

$color_nt_17 = '';

if ($row_datos_control_notas["nt_17"] >= '0' && $row_datos_control_notas["nt_17"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_17 = 'RosyBrown';
}


?>

           
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_17; ?>;">
 <?php echo $row_datos_control_notas["nt_17"]; ?> <?php // echo $text_a; ?>  <?php echo $text_rest_g; ?>   </td>


 <?php

if ($row_datos_control_notas["nt_17"] >= '0' && $row_datos_control_notas["nt_17"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_17 = $apla_nt_17 + 1;
}


?>
            

<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.8%;" >
<input type="text" onkeypress="return GFG_Fun(this, event)" maxlength="4" style="width : 90%; height : 85%; background-color: <?php echo $color1a;?>;" id="ZA_Au1[]" name="ZA_Au1[]" form="save_ZA_Au1" value="<?php echo $row_datos_control_notas["nt_Au1"]; ?>" <?php echo $text_a; ?> ></td>
           
 <td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.8%;"><span data-toggle="tooltip" data-placement="top" title="Promedio+Aux = (<?php echo $total_seven_L1 ; ?> + <?php echo $row_datos_control_notas["nt_Au1"]; ?>) ... Redondeado = <?php echo $total_seven_L1_con_Au_redon; ?> ">   
    <b><?php echo $total_seven_L1_con_Au; ?></b>     </span></td>



<script>
  
  function ClearA<?php echo $row_datos_control["id_estud"]; ?>Fields() {

     document.getElementById("txtAA<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtBB<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtCC<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtDD<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtEE<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtFF<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtGG<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     
}

</script>




                <td style="height: 23px; width: 1.8%;"> <!-- <input type="checkbox" name="Limpiar" onclick="ClearA<?php echo $row_datos_control["id_estud"]; ?>Fields();"  <?php if ($text_aaa == 1 ){?>style="display:none"<?php } ?>  /> -->  </td>


<?php

$color_nt_21 = '';

if ($row_datos_control_notas["nt_21"] >= '0' && $row_datos_control_notas["nt_21"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_21 = 'RosyBrown';
}


?>



<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_21; ?>;"><span data-toggle="tooltip" data-placement="left" title="<?php echo $firstape; ?> <?php echo $firstnam; ?>"> 
 <?php echo $row_datos_control_notas["nt_21"]; ?> <?php // echo $text_b; ?>    <?php echo $text_rest_a; ?>     </span></td>


<?php

if ($row_datos_control_notas["nt_21"] >= '0' && $row_datos_control_notas["nt_21"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_21 = $apla_nt_21 + 1;
}


?>

<?php

$color_nt_22 = '';

if ($row_datos_control_notas["nt_22"] >= '0' && $row_datos_control_notas["nt_22"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_22 = 'RosyBrown';
}


?>

           
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_22; ?>;">
<?php echo $row_datos_control_notas["nt_22"]; ?> <?php // echo $text_b; ?>  <?php echo $text_rest_b; ?>   </td>



<?php

if ($row_datos_control_notas["nt_22"] >= '0' && $row_datos_control_notas["nt_22"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_22 = $apla_nt_22 + 1;
}


?>

<?php

$color_nt_23 = '';

if ($row_datos_control_notas["nt_23"] >= '0' && $row_datos_control_notas["nt_23"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_23 = 'RosyBrown';
}


?>

            
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_23; ?>;">
 <?php echo $row_datos_control_notas["nt_23"]; ?> <?php // echo $text_b; ?>   <?php echo $text_rest_c; ?>   </td>


<?php

if ($row_datos_control_notas["nt_23"] >= '0' && $row_datos_control_notas["nt_23"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_23 = $apla_nt_23 + 1;
}


?>


<?php

$color_nt_24 = '';

if ($row_datos_control_notas["nt_24"] >= '0' && $row_datos_control_notas["nt_24"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_24 = 'RosyBrown';
}


?>

           
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_24; ?>;">
 <?php echo $row_datos_control_notas["nt_24"]; ?> <?php // echo $text_b; ?>  <?php echo $text_rest_d; ?>   </td>



<?php

if ($row_datos_control_notas["nt_24"] >= '0' && $row_datos_control_notas["nt_24"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_24 = $apla_nt_24 + 1;
}


?>


<?php

$color_nt_25 = '';

if ($row_datos_control_notas["nt_25"] >= '0' && $row_datos_control_notas["nt_25"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_25 = 'RosyBrown';
}


?>

            
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_25; ?>;">
 <?php echo $row_datos_control_notas["nt_25"]; ?> <?php // echo $text_b; ?> <?php echo $text_rest_e; ?>  </td>



<?php

if ($row_datos_control_notas["nt_25"] >= '0' && $row_datos_control_notas["nt_25"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_25 = $apla_nt_25 + 1;
}


?>


<?php

$color_nt_26 = '';

if ($row_datos_control_notas["nt_26"] >= '0' && $row_datos_control_notas["nt_26"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_26 = 'RosyBrown';
}


?>

            
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_26; ?>;">
 <?php echo $row_datos_control_notas["nt_26"]; ?> <?php // echo $text_b; ?> <?php echo $text_rest_f; ?>   </td>



<?php

if ($row_datos_control_notas["nt_26"] >= '0' && $row_datos_control_notas["nt_26"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_26 = $apla_nt_26 + 1;
}


?>


<?php

$color_nt_27 = '';

if ($row_datos_control_notas["nt_27"] >= '0' && $row_datos_control_notas["nt_27"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_27 = 'RosyBrown';
}


?>

           
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_27; ?>;">
 <?php echo $row_datos_control_notas["nt_27"]; ?> <?php // echo $text_b; ?> <?php echo $text_rest_g; ?>   </td>



<?php

if ($row_datos_control_notas["nt_27"] >= '0' && $row_datos_control_notas["nt_27"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_27 = $apla_nt_27 + 1;
}


?>
            

<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%;" >
  <input type="text" onkeypress="return GFG_Fun(this, event)" maxlength="4" style="width : 90%; height : 85%; background-color: <?php echo $color2a;?>;" id="ZB_Au2[]" name="ZB_Au2[]" form="save_ZB_Au2" value="<?php echo $row_datos_control_notas["nt_Au2"]; ?>" <?php echo $text_b; ?> ></td>
           
 <td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%;"><span data-toggle="tooltip" data-placement="top" title="Promedio+Aux = (<?php echo $total_seven_L2 ; ?> + <?php echo $row_datos_control_notas["nt_Au2"]; ?>) ... Redondeado = <?php echo $total_seven_L2_con_Au_redon; ?> ">
    <b><?php echo $total_seven_L2_con_Au; ?></b>     </span></td>

             
<script>
  
  function ClearB<?php echo $row_datos_control["id_estud"]; ?>Fields() {

     document.getElementById("txtHH<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtII<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtJJ<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtKK<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtLL<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtMM<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtNN<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     
}

</script>




                <td style="height: 23px; width: 1.8%;"> <!-- <input type="checkbox" name="Limpiar" onclick="ClearB<?php echo $row_datos_control["id_estud"]; ?>Fields();" <?php if ($text_bbb == 1 ){?>style="display:none"<?php } ?> /> -->  </td>


<?php

$color_nt_31 = '';

if ($row_datos_control_notas["nt_31"] >= '0' && $row_datos_control_notas["nt_31"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_31 = 'RosyBrown';
}


?>




<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_31; ?>;"><span data-toggle="tooltip" data-placement="left" title="<?php echo $firstape; ?> <?php echo $firstnam; ?>"> 
 <?php echo $row_datos_control_notas["nt_31"]; ?> <?php // echo $text_c; ?>   <?php echo $text_rest_a; ?>    </td>  




<?php

if ($row_datos_control_notas["nt_31"] >= '0' && $row_datos_control_notas["nt_31"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_31 = $apla_nt_31 + 1;
}


?>

<?php

$color_nt_32 = '';

if ($row_datos_control_notas["nt_32"] >= '0' && $row_datos_control_notas["nt_32"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_32 = 'RosyBrown';
}


?>

           
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_32; ?>;">
<?php echo $row_datos_control_notas["nt_32"]; ?> <?php // echo $text_c; ?>  <?php echo $text_rest_b; ?>   </td>


<?php

if ($row_datos_control_notas["nt_32"] >= '0' && $row_datos_control_notas["nt_32"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_32 = $apla_nt_32 + 1;
}


?>


<?php

$color_nt_33 = '';

if ($row_datos_control_notas["nt_33"] >= '0' && $row_datos_control_notas["nt_33"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_33 = 'RosyBrown';
}


?>


            
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_33; ?>;">
 <?php echo $row_datos_control_notas["nt_33"]; ?> <?php // echo $text_c; ?> <?php echo $text_rest_c; ?>  </td>  


<?php

if ($row_datos_control_notas["nt_33"] >= '0' && $row_datos_control_notas["nt_33"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_33 = $apla_nt_33 + 1;
}


?>


<?php

$color_nt_34 = '';

if ($row_datos_control_notas["nt_34"] >= '0' && $row_datos_control_notas["nt_34"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_34 = 'RosyBrown';
}


?>

           
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_34; ?>;">
 <?php echo $row_datos_control_notas["nt_34"]; ?> <?php // echo $text_c; ?>  <?php echo $text_rest_d; ?>  </td>


<?php

if ($row_datos_control_notas["nt_34"] >= '0' && $row_datos_control_notas["nt_34"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_34 = $apla_nt_34 + 1;
}


?>

<?php

$color_nt_35 = '';

if ($row_datos_control_notas["nt_35"] >= '0' && $row_datos_control_notas["nt_35"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_35 = 'RosyBrown';
}


?>

            
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_35; ?>;">
 <?php echo $row_datos_control_notas["nt_35"]; ?> <?php // echo $text_c; ?> <?php echo $text_rest_e; ?>   </td>


<?php

if ($row_datos_control_notas["nt_35"] >= '0' && $row_datos_control_notas["nt_35"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_35 = $apla_nt_35 + 1;
}


?>

<?php

$color_nt_36 = '';

if ($row_datos_control_notas["nt_36"] >= '0' && $row_datos_control_notas["nt_36"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_36 = 'RosyBrown';
}


?>

            
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_36; ?>;">
 <?php echo $row_datos_control_notas["nt_36"]; ?> <?php // echo $text_c; ?>   <?php echo $text_rest_f; ?>   </td>

<?php

if ($row_datos_control_notas["nt_36"] >= '0' && $row_datos_control_notas["nt_36"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_36 = $apla_nt_36 + 1;
}


?>


<?php

$color_nt_37 = '';

if ($row_datos_control_notas["nt_37"] >= '0' && $row_datos_control_notas["nt_37"] <=$el_puntaje_aprobatorio_aprox ) {
  $color_nt_37 = 'RosyBrown';
}


?>

           
<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%; background-color: <?php echo $color_nt_37; ?>;">
 <?php echo $row_datos_control_notas["nt_37"]; ?> <?php // echo $text_c; ?>  <?php echo $text_rest_g; ?>   </td>


<?php

if ($row_datos_control_notas["nt_37"] >= '0' && $row_datos_control_notas["nt_37"] <=$el_puntaje_aprobatorio_aprox ) {
  $apla_nt_37 = $apla_nt_37 + 1;
}


?>


            

<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%;" >
  <input type="text" onkeypress="return GFG_Fun(this, event)" maxlength="4" style="width : 90%; height : 85%; background-color: <?php echo $color3a;?>;" id="ZC_Au3[]" name="ZC_Au3[]" form="save_ZC_Au3" value="<?php echo $row_datos_control_notas["nt_Au3"]; ?>" <?php echo $text_c; ?> > </td>
           
 <td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%;"><span data-toggle="tooltip" data-placement="top" title="Promedio+Aux = (<?php echo $total_seven_L3 ; ?> + <?php echo $row_datos_control_notas["nt_Au3"]; ?>) ... Redondeado = <?php echo $total_seven_L3_con_Au_redon; ?> ">
    <b><?php echo $total_seven_L3_con_Au; ?></b>     </span></td>

             


<script>
  
  function ClearC<?php echo $row_datos_control["id_estud"]; ?>Fields() {

     document.getElementById("txtOO<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtPP<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtQQ<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtRR<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtSS<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtTT<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     document.getElementById("txtUU<?php echo $row_datos_control["id_estud"]; ?>").value = "";
     
}

</script>




                <td style="height: 23px; width: 1.8%;"> <!-- <input type="checkbox" name="Limpiar" onclick="ClearC<?php echo $row_datos_control["id_estud"]; ?>Fields();" <?php if ($text_ccc == 1 ){?>style="display:none"<?php } ?>  /> -->  </td>

                


<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%;">
  <input type="text" onkeypress="return GFG_Fun(this, event)" maxlength="4" style="width : 90%; height : 85%;" id="ZZZ_AuF[]" name="ZZZ_AuF[]"  form="save_Aux_final_ZZZ"
    value="<?php echo $row_datos_control_notas["nt_AuF"]; ?>" <?php echo $text_c; ?> >
            </td>


<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%;"><span data-toggle="tooltip" data-placement="top" title="Promedio+Aux = (<?php echo $total_def_dec; ?> + <?php echo $row_datos_control_notas["nt_AuF"]; ?>) ... Redondeado = <?php echo $total_def_prom; ?> ">
    <b><?php echo $total_def_un_dec; ?></b>
            </td>



<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%;">
  <input type="text" onkeypress="return GFG_Fun(this, event)" maxlength="4" style="width : 90%; height : 85%;" id="ZZZ_Rev1[]" name="ZZZ_Rev1[]"  
  form="save_Rev1"     value="<?php echo $row_datos_control_notas["rev_uno"]; ?>" <?php echo $text_c; ?> >
            </td>


<td class="align-middle borde_negro" align="center" style="font-size: 14px; height: 28px; width:2.6%;">
  <input type="text" onkeypress="return GFG_Fun(this, event)" maxlength="4" style="width : 90%; height : 85%;" id="ZZZ_Rev2[]" name="ZZZ_Rev2[]"  
  form="save_Rev2"     value="<?php echo $row_datos_control_notas["rev_dos"]; ?>" <?php echo $text_c; ?> >
            </td>






                </tr>

 <?php } while ($row_datos_control = mysqli_fetch_assoc($datos_control)); ?>



                <tr>
                    <td style="height: 23px; width: 1.5%;">  </td>
                    <td style="height: 23px; width: 10.5%;">  </td>
                    <td style="height: 23px; width: 1%;">  </td>


     <input type="hidden" id="conteo_global_L1_N1"  name="conteo_global_L1_N1"    form="save_L1_N1" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->

     <input type="hidden" id="conteo_global_L1_N2"  name="conteo_global_L1_N2"    form="save_L1_N2" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->

     <input type="hidden" id="conteo_global_L1_N3"  name="conteo_global_L1_N3"    form="save_L1_N3" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->

     <input type="hidden" id="conteo_global_L1_N4"  name="conteo_global_L1_N4"    form="save_L1_N4" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->

     <input type="hidden" id="conteo_global_L1_N5"  name="conteo_global_L1_N5"    form="save_L1_N5" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->

     <input type="hidden" id="conteo_global_L1_N6"  name="conteo_global_L1_N6"    form="save_L1_N6" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->

     <input type="hidden" id="conteo_global_L1_N7"  name="conteo_global_L1_N7"    form="save_L1_N7" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->

     <input type="hidden" id="conteo_global_ZA_Au1"  name="conteo_global_ZA_Au1"    form="save_ZA_Au1" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->



     <input type="hidden" id="conteo_global_aspectos_L1"  name="conteo_global_aspectos_L1"    form="save_aspectos_L1" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->




     <input type="hidden" id="conteo_global_L2_N1"  name="conteo_global_L2_N1"    form="save_L2_N1" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->
     <input type="hidden" id="conteo_global_L2_N2"  name="conteo_global_L2_N2"    form="save_L2_N2" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->
     <input type="hidden" id="conteo_global_L2_N3"  name="conteo_global_L2_N3"    form="save_L2_N3" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->
     <input type="hidden" id="conteo_global_L2_N4"  name="conteo_global_L2_N4"    form="save_L2_N4" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->
     <input type="hidden" id="conteo_global_L2_N5"  name="conteo_global_L2_N5"    form="save_L2_N5" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->
     <input type="hidden" id="conteo_global_L2_N6"  name="conteo_global_L2_N6"    form="save_L2_N6" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->
     <input type="hidden" id="conteo_global_L2_N7"  name="conteo_global_L2_N7"    form="save_L2_N7" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->

     <input type="hidden" id="conteo_global_ZB_Au2"  name="conteo_global_ZB_Au2"    form="save_ZB_Au2" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->


     <input type="hidden" id="conteo_global_aspectos_L2"  name="conteo_global_aspectos_L2"    form="save_aspectos_L2" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->




     <input type="hidden" id="conteo_global_L3_N1"  name="conteo_global_L3_N1"    form="save_L3_N1" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->
     <input type="hidden" id="conteo_global_L3_N2"  name="conteo_global_L3_N2"    form="save_L3_N2" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->
     <input type="hidden" id="conteo_global_L3_N3"  name="conteo_global_L3_N3"    form="save_L3_N3" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->
     <input type="hidden" id="conteo_global_L3_N4"  name="conteo_global_L3_N4"    form="save_L3_N4" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->
     <input type="hidden" id="conteo_global_L3_N5"  name="conteo_global_L3_N5"    form="save_L3_N5" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->
     <input type="hidden" id="conteo_global_L3_N6"  name="conteo_global_L3_N6"    form="save_L3_N6" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->
     <input type="hidden" id="conteo_global_L3_N7"  name="conteo_global_L3_N7"    form="save_L3_N7" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->

     <input type="hidden" id="conteo_global_ZC_Au3"  name="conteo_global_ZC_Au3"    form="save_ZC_Au3" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->


     <input type="hidden" id="conteo_global_aspectos_L3"  name="conteo_global_aspectos_L3"    form="save_aspectos_L3" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->


     <input type="hidden" id="conteo_global_Aux_final_ZZZ"  name="conteo_global_Aux_final_ZZZ"    form="save_Aux_final_ZZZ" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->


         <input type="hidden" id="conteo_global_Rev1"  name="conteo_global_Rev1"    form="save_Rev1" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->


         <input type="hidden" id="conteo_global_Rev2"  name="conteo_global_Rev2"    form="save_Rev2" 
    value="<?php echo $totalRows_control; ?>">  <!-- para saber el total de filas -->



                    <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="1"
                      <?php if ($text_aaa == 1 OR $text_rest_a == 'disabled'  ){?>style="display:none"<?php } ?>   >

<button type="button" class="btn btn-aaa btn-sm openBtn11"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn11').on('click',function(){
    $('#d_11').load('descriptivo/act1_lap1.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_1act1Modal').modal({show:true});
    });
});
</script>
                  </span>
                    </td>  



                                      <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="2"
                      <?php if ($text_aaa == 1 OR $text_rest_b == 'disabled'  ){?>style="display:none"<?php } ?>   >

<button type="button" class="btn btn-aaa btn-sm openBtn12"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N2" -->

<script>
$('.openBtn12').on('click',function(){
    $('#d_12').load('descriptivo/act2_lap1.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_1act2Modal').modal({show:true});
    });
});
</script>
                  </span>
             

                    </td>


                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="3"
                      <?php if ($text_aaa == 1 OR $text_rest_c == 'disabled'  ){?>style="display:none"<?php } ?>   >

<button type="button" class="btn btn-aaa btn-sm openBtn13"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N3" -->

<script>
$('.openBtn13').on('click',function(){
    $('#d_13').load('descriptivo/act3_lap1.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_1act3Modal').modal({show:true});
    });
});
</script>



                     </span>

                    </td>


                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="4"
                      <?php if ($text_aaa == 1 OR $text_rest_d == 'disabled'  ){?>style="display:none"<?php } ?>   >

  
<button type="button" class="btn btn-aaa btn-sm openBtn14"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N3" -->

<script>
$('.openBtn14').on('click',function(){
    $('#d_14').load('descriptivo/act4_lap1.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_1act4Modal').modal({show:true});
    });
});
</script>



                </span>

                    </td>



                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="5"
                      <?php if ($text_aaa == 1 OR $text_rest_e == 'disabled'  ){?>style="display:none"<?php } ?>   >

<button type="button" class="btn btn-aaa btn-sm openBtn15"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N3" -->

<script>
$('.openBtn15').on('click',function(){
    $('#d_15').load('descriptivo/act5_lap1.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_1act5Modal').modal({show:true});
    });
});
</script>


                     </span>

                    </td>


                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="6"
                      <?php if ($text_aaa == 1 OR $text_rest_f == 'disabled'  ){?>style="display:none"<?php } ?>   >


<button type="button" class="btn btn-aaa btn-sm openBtn16"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N3" -->

<script>
$('.openBtn16').on('click',function(){
    $('#d_16').load('descriptivo/act6_lap1.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_1act6Modal').modal({show:true});
    });
});
</script>


                     </span>

                    </td>


                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="7"
                      <?php if ($text_aaa == 1 OR $text_rest_g == 'disabled'  ){?>style="display:none"<?php } ?>   >


<button type="button" class="btn btn-aaa btn-sm openBtn17"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N3" -->

<script>
$('.openBtn17').on('click',function(){
    $('#d_17').load('descriptivo/act7_lap1.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_1act7Modal').modal({show:true});
    });
});
</script>



                    </span>

                    </td>



                                                            <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="Guardar Auxiliar 1er Lapso-Momento"
                      <?php if ($text_aaa == 1 ){?>style="display:none"<?php } ?>   ><button type="submit"
                    name="guardar_1act8" form="save_ZA_Au1"  class="btn btn-aaa btn-sm"><i class="far fa-save fa-lg"></i></button></span>

                    </td>






                    <td style="height: 23px; width: 2.6%;">  </td>






                    <td style="height: 23px; width: 1.8%;">

                    


                  </td>

<!-- https://blog.koalite.com/bbg/  -->

 <td style="height: 23px; width: 2.6%;">




  <span data-toggle="tooltip" data-placement="bottom" title="1"
                      <?php  if ($text_bbb == 1 OR $text_rest_a == 'disabled' ){?>style="display:none"<?php } ?>   >


<button type="button" class="btn btn-bbb btn-sm openBtn21"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn21').on('click',function(){
    $('#d_21').load('descriptivo/act1_lap2.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_2act1Modal').modal({show:true});
    });
});
</script>
                  </span>

                    </td>


                                      <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="2"
                      <?php if ($text_bbb == 1 OR $text_rest_b == 'disabled' ){?>style="display:none"<?php } ?>   >


<button type="button" class="btn btn-bbb btn-sm openBtn22"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn22').on('click',function(){
    $('#d_22').load('descriptivo/act2_lap2.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_2act2Modal').modal({show:true});
    });
});
</script>


                     </span>

                    </td>


                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="3"
                      <?php if ($text_bbb == 1  OR $text_rest_c == 'disabled' ){?>style="display:none"<?php } ?>   >


<button type="button" class="btn btn-bbb btn-sm openBtn23"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn23').on('click',function(){
    $('#d_23').load('descriptivo/act3_lap2.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_2act3Modal').modal({show:true});
    });
});
</script>

                      </span>

                    </td>


                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="4"
                      <?php if ($text_bbb == 1 OR $text_rest_d == 'disabled' ){?>style="display:none"<?php } ?>   >


<button type="button" class="btn btn-bbb btn-sm openBtn24"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn24').on('click',function(){
    $('#d_24').load('descriptivo/act4_lap2.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_2act4Modal').modal({show:true});
    });
});
</script>


                      



                </span>

                    </td>



                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="5"
                      <?php if ($text_bbb == 1 OR $text_rest_e == 'disabled' ){?>style="display:none"<?php } ?>   >


<button type="button" class="btn btn-bbb btn-sm openBtn25"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn25').on('click',function(){
    $('#d_25').load('descriptivo/act5_lap2.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_2act5Modal').modal({show:true});
    });
});
</script>                 



                </span>

                    </td>


                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="6"
                      <?php if ($text_bbb == 1 OR $text_rest_f == 'disabled' ){?>style="display:none"<?php } ?>   >


<button type="button" class="btn btn-bbb btn-sm openBtn26"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn26').on('click',function(){
    $('#d_26').load('descriptivo/act6_lap2.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_2act6Modal').modal({show:true});
    });
});
</script>   


                    


                </span>

                    </td>


                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="7"
                      <?php if ($text_bbb == 1 OR $text_rest_g == 'disabled' ){?>style="display:none"<?php } ?>   >



<button type="button" class="btn btn-bbb btn-sm openBtn27"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn27').on('click',function(){
    $('#d_27').load('descriptivo/act7_lap2.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_2act7Modal').modal({show:true});
    });
});
</script> 

                     


                </span>

                    </td>



                                                            <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="Guardar Auxiliar 2do Lapso-Momento"
                      <?php if ($text_bbb == 1 ){?>style="display:none"<?php } ?>   ><button type="submit"
                    name="guardar_2act8" form="save_ZB_Au2" class="btn btn-bbb btn-sm"><i class="far fa-save fa-lg"></i></button></span>

                    </td>






                    <td style="height: 23px; width: 2.6%;">  </td>

















                    <td style="height: 23px; width: 1.8%;"></td>



<td style="height: 23px; width: 2.6%;">




  <span data-toggle="tooltip" data-placement="bottom" title="1"
                      <?php if ($text_ccc == 1 OR $text_rest_a == 'disabled' ){?>style="display:none"<?php } ?>   >

<button type="button" class="btn btn-ccc btn-sm openBtn31"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn31').on('click',function(){
    $('#d_31').load('descriptivo/act1_lap3.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_3act1Modal').modal({show:true});
    });
});
</script> 


</span>

                    </td>


                                      <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="2"
                      <?php if ($text_ccc == 1 OR $text_rest_b == 'disabled' ){?>style="display:none"<?php } ?>   >

<button type="button" class="btn btn-ccc btn-sm openBtn32"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn32').on('click',function(){
    $('#d_32').load('descriptivo/act2_lap3.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_3act2Modal').modal({show:true});
    });
});
</script> 



                    </span>

                    </td>


                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="3"
                      <?php if ($text_ccc == 1 OR $text_rest_c == 'disabled' ){?>style="display:none"<?php } ?>   >

<button type="button" class="btn btn-ccc btn-sm openBtn33"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn33').on('click',function(){
    $('#d_33').load('descriptivo/act3_lap3.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_3act3Modal').modal({show:true});
    });
});
</script> 

                    


                </span>

                    </td>


                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="4"
                      <?php if ($text_ccc == 1 OR $text_rest_d == 'disabled' ){?>style="display:none"<?php } ?>   >


<button type="button" class="btn btn-ccc btn-sm openBtn34"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn34').on('click',function(){
    $('#d_34').load('descriptivo/act4_lap3.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_3act4Modal').modal({show:true});
    });
});
</script> 

                      


                </span>

                    </td>



                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="5"
                      <?php if ($text_ccc == 1 OR $text_rest_e == 'disabled' ){?>style="display:none"<?php } ?>   >

<button type="button" class="btn btn-ccc btn-sm openBtn35"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn35').on('click',function(){
    $('#d_35').load('descriptivo/act5_lap3.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_3act5Modal').modal({show:true});
    });
});
</script>    
                     


                </span>

                    </td>


                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="6"
                      <?php if ($text_ccc == 1 OR $text_rest_f == 'disabled' ){?>style="display:none"<?php } ?>   >

<button type="button" class="btn btn-ccc btn-sm openBtn36"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn36').on('click',function(){
    $('#d_36').load('descriptivo/act6_lap3.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_3act6Modal').modal({show:true});
    });
});
</script>  
                   


                </span>

                    </td>


                                        <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="7"
                      <?php if ($text_ccc == 1 OR $text_rest_g == 'disabled' ){?>style="display:none"<?php } ?>   >


<button type="button" class="btn btn-ccc btn-sm openBtn37"  ><i class="far fa-edit fa-lg"></i></button> <!-- form="save_L1_N1" -->

<script>
$('.openBtn37').on('click',function(){
    $('#d_37').load('descriptivo/act7_lap3.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_3act7Modal').modal({show:true});
    });
});
</script> 




                </span>

                    </td>



                                                            <td style="height: 23px; width: 2.6%;">

  <span data-toggle="tooltip" data-placement="bottom" title="Guardar Auxiliar 3er Lapso-Momento"
                      <?php if ($text_ccc == 1 ){?>style="display:none"<?php } ?>   ><button type="submit"
                    name="guardar_3act8" form="save_ZC_Au3" class="btn btn-ccc btn-sm"><i class="far fa-save fa-lg"></i></button></span>

                    </td>






                    <td style="height: 23px; width: 2.6%;">  </td>



                    <td style="height: 23px; width: 1.8%;">  </td> 


<td style="height: 23px; width: 2.6%;"> 


  <span data-toggle="tooltip" data-placement="bottom" title="Aux. Final"
                      <?php if ($text_ccc == 1 ){?>style="display:none"<?php } ?>   ><button type="submit"
                    name="guardar_Aux_final_ZZZ" form="save_Aux_final_ZZZ" class="btn btn-info btn-sm"><i class="far fa-save fa-lg"></i></button></span>



 </td>


<td style="height: 23px; width: 2.6%;">  </td>




<td style="height: 23px; width: 2.6%;"> 


  <span data-toggle="tooltip" data-placement="bottom" title="Revisión 1"
                      <?php if ($text_ccc == 1 ){?>style="display:none"<?php } ?>   ><button type="submit"
                    name="guardar_Rev1" form="save_Rev1" class="btn btn-secondary btn-sm"><i class="far fa-save fa-lg"></i></button></span>



 </td>



<td style="height: 23px; width: 2.6%;"> 


  <span data-toggle="tooltip" data-placement="bottom" title="Revisión 2"
                      <?php if ($text_ccc == 1 ){?>style="display:none"<?php } ?>   ><button type="submit"
                    name="guardar_Rev2" form="save_Rev2" class="btn btn-secondary btn-sm"><i class="far fa-save fa-lg"></i></button></span>



 </td>


           

                    
                </tr>





<tr>
<td>
 <span style="color:white;">.</span> 
</td>
</tr>






<tr>
                    <td class="" style="height: 23px; width: 1.5%;">  </td>
                    <td class="" style="height: 23px; width: 10.5%;"> </td>
                    <td style="height: 23px; width: 1%;">  </td>

                    <td class="" style="height: 23px; width: 18.2%;" colspan="7">  

  <span  <?php if ($text_aaa == 1 ){?>style="display:none"<?php } ?>   >

<button type="button" class="btn btn-aaa btn-sm openBtn_asp1"  ><i class="fas fa-sd-card fa-lg"></i> Aspectos A Reforzar</button> 

<script>
$('.openBtn_asp1').on('click',function(){
    $('#asp1').load('descriptivo/aspectos1.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_aspectos1').modal({show:true});
    });
});
</script>  
                   
</span>             </td>   












                   

                    <td class="" style="height: 23px; width: 5.2%;" colspan="2">  </td>

                    <td style="height: 23px; width: 1.8%;">

                 

                  </td>

                    <td class="" style="height: 23px; width: 18.2%;" colspan="7">


 <span  <?php if ($text_bbb == 1 ){?>style="display:none"<?php } ?>   >

<button type="button" class="btn btn-bbb btn-sm openBtn_asp2"  ><i class="fas fa-sd-card fa-lg"></i> Aspectos A Reforzar</button> 

<script>
$('.openBtn_asp2').on('click',function(){
    $('#asp2').load('descriptivo/aspectos2.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_aspectos2').modal({show:true});
    });
});
</script>  
                   
</span> 







                      </td>

                    <td class="" style="height: 23px; width: 5.2%;" colspan="2">  </td>

                    <td style="height: 23px; width: 1.8%;"></td>

                    <td class="" style="height: 23px; width: 18.2%;" colspan="7">


 <span  <?php if ($text_ccc == 1 ){?>style="display:none"<?php } ?>   >

<button type="button" class="btn btn-ccc btn-sm openBtn_asp3"  ><i class="fas fa-sd-card fa-lg"></i> Aspectos A Reforzar</button> 

<script>
$('.openBtn_asp3').on('click',function(){
    $('#asp3').load('descriptivo/aspectos3.php?&ciclosss=<?php echo $el_cicloXX; ?>&gradosss=<?php echo $el_gradoXX; ?>&seccionsss=<?php echo $la_seccionXX; ?>&materiasss=<?php echo $num_materia; ?>',function(){
        $('#guardar_aspectos3').modal({show:true});
    });
});
</script>  
                   
</span> 


                      </td>

                    <td class="" style="height: 23px; width: 5.2%;" colspan="2">  </td>

                    <td style="height: 23px; width: 1.8%;">  </td> </form> 

                    <td style="height: 23px; width: 5.8%;" colspan="2">  </td>
                </tr>


















<tr>
<td>
 <span style="color:white;">.</span> 
</td>
</tr>



                <tr>
                    <td class="borde_izq_inf_sup_negro" style="height: 23px; width: 1.5%;">  </td>
                    <td class="borde_der_inf_sup_negro" style="height: 23px; width: 10.5%;">Núm. de Aplazados</td>
                    <td style="height: 23px; width: 1%;">  </td>

                    <td class="borde_izq_inf_sup_negro" style="height: 23px; width: 2.6%;"><?php echo $apla_nt_11; ?>  </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_12; ?>  </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_13; ?>  </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_14; ?>  </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_15; ?>  </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_16; ?>  </td>
                    <td class="borde_der_inf_sup_negro" style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_17; ?> </td>

                    <td class="" style="height: 23px; width: 5.2%;" colspan="2">  </td>

                    <td style="height: 23px; width: 1.8%;">

                 

                  </td>

                    <td class="borde_izq_inf_sup_negro" style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_21; ?> </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_22; ?>  </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_23; ?>  </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_24; ?>  </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_25; ?>  </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_26; ?>  </td>
                    <td class="borde_der_inf_sup_negro" style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_27; ?> </td>

                    <td class="" style="height: 23px; width: 5.2%;" colspan="2">  </td>

                    <td style="height: 23px; width: 1.8%;"></td>

                    <td class="borde_izq_inf_sup_negro" style="height: 23px; width: 2.6%;"><?php echo $apla_nt_31; ?>  </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_32; ?> </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_33; ?> </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_34; ?> </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_35; ?> </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_36; ?> </td>
                    <td class="borde_der_inf_sup_negro" style="height: 23px; width: 2.6%;"> <?php echo $apla_nt_37; ?> </td>

                    <td class="" style="height: 23px; width: 5.2%;" colspan="2">  </td>

                    <td style="height: 23px; width: 1.8%;">  </td> </form> 

                    <td style="height: 23px; width: 5.8%;" colspan="2">  </td>
                </tr>


                <tr>
                    <td class="borde_izq_inf_sup_negro" style="height: 23px; width: 1.5%;">  </td>
                    <td class="borde_der_inf_sup_negro" style="height: 23px; width: 10.5%;">% de Aplazados</td>
                    <td style="height: 23px; width: 1%;">  </td>

                    <td class="borde_izq_inf_sup_negro" style="height: 23px; width: 2.6%;">

                     <?php

                     if ($apla_nt_11 == '0') {
                       $formateado_porcentaje_apla_nt_11 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_11 =   ($apla_nt_11 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_11 = number_format($porcentaje_apla_nt_11, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_11; ?>%     </td>


                    <td class="borde_negro"  style="height: 23px; width: 2.6%;">

<?php

                     if ($apla_nt_12 == '0') {
                       $formateado_porcentaje_apla_nt_12 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_12 =   ($apla_nt_12 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_12 = number_format($porcentaje_apla_nt_12, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_12; ?>%







                      </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> 

<?php

                     if ($apla_nt_13 == '0') {
                       $formateado_porcentaje_apla_nt_13 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_13 =   ($apla_nt_13 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_13 = number_format($porcentaje_apla_nt_13, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_13; ?>%





                     </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> 

<?php

                     if ($apla_nt_14 == '0') {
                       $formateado_porcentaje_apla_nt_14 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_14 =   ($apla_nt_14 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_14 = number_format($porcentaje_apla_nt_14, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_14; ?>%




                     </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;">

<?php

                     if ($apla_nt_15 == '0') {
                       $formateado_porcentaje_apla_nt_15 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_15 =   ($apla_nt_15 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_15 = number_format($porcentaje_apla_nt_15, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_15; ?>%



                      </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> 

<?php

                     if ($apla_nt_16 == '0') {
                       $formateado_porcentaje_apla_nt_16 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_16 =   ($apla_nt_16 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_16 = number_format($porcentaje_apla_nt_16, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_16; ?>%




                     </td>
                    <td class="borde_der_inf_sup_negro" style="height: 23px; width: 2.6%;"> 

<?php

                     if ($apla_nt_17 == '0') {
                       $formateado_porcentaje_apla_nt_17 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_17 =   ($apla_nt_17 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_17 = number_format($porcentaje_apla_nt_17, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_17; ?>%




                     </td>

                    <td class="" style="height: 23px; width: 5.2%;" colspan="2">  </td>

                    <td style="height: 23px; width: 1.8%;">

                 

                  </td>

                   <td class="borde_izq_inf_sup_negro" style="height: 23px; width: 2.6%;"> 

<?php

                     if ($apla_nt_21 == '0') {
                       $formateado_porcentaje_apla_nt_21 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_21 =   ($apla_nt_21 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_21 = number_format($porcentaje_apla_nt_21, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_21; ?>%



                    </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> 

<?php

                     if ($apla_nt_22 == '0') {
                       $formateado_porcentaje_apla_nt_22 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_22 =   ($apla_nt_22 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_22 = number_format($porcentaje_apla_nt_22, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_22; ?>%




                     </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;">

<?php

                     if ($apla_nt_23 == '0') {
                       $formateado_porcentaje_apla_nt_23 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_23 =   ($apla_nt_23 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_23 = number_format($porcentaje_apla_nt_23, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_23; ?>%





                      </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> 

<?php

                     if ($apla_nt_24 == '0') {
                       $formateado_porcentaje_apla_nt_24 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_24 =   ($apla_nt_24 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_24 = number_format($porcentaje_apla_nt_24, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_24; ?>%




                     </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;">


<?php

                     if ($apla_nt_25 == '0') {
                       $formateado_porcentaje_apla_nt_25 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_25 =   ($apla_nt_25 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_25 = number_format($porcentaje_apla_nt_25, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_25; ?>%



                      </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> 


<?php

                     if ($apla_nt_26 == '0') {
                       $formateado_porcentaje_apla_nt_26 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_26 =   ($apla_nt_26 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_26 = number_format($porcentaje_apla_nt_26, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_26; ?>%


                     </td>
                    <td class="borde_der_inf_sup_negro" style="height: 23px; width: 2.6%;"> 

<?php

                     if ($apla_nt_27 == '0') {
                       $formateado_porcentaje_apla_nt_27 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_27 =   ($apla_nt_27 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_27 = number_format($porcentaje_apla_nt_27, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_27; ?>%




                     </td>

                    <td class="" style="height: 23px; width: 5.2%;" colspan="2">  </td>

                    <td style="height: 23px; width: 1.8%;"></td>

                    <td class="borde_izq_inf_sup_negro" style="height: 23px; width: 2.6%;">

<?php

                     if ($apla_nt_31 == '0') {
                       $formateado_porcentaje_apla_nt_31 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_31 =   ($apla_nt_31 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_31 = number_format($porcentaje_apla_nt_31, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_31; ?>%





                      </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> 

<?php

                     if ($apla_nt_32 == '0') {
                       $formateado_porcentaje_apla_nt_32 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_32 =   ($apla_nt_32 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_32 = number_format($porcentaje_apla_nt_32, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_32; ?>%


                     </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;">


<?php

                     if ($apla_nt_33 == '0') {
                       $formateado_porcentaje_apla_nt_33 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_33 =   ($apla_nt_33 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_33 = number_format($porcentaje_apla_nt_33, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_33; ?>%


                      </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;">

<?php

                     if ($apla_nt_34 == '0') {
                       $formateado_porcentaje_apla_nt_34 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_34 =   ($apla_nt_34 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_34 = number_format($porcentaje_apla_nt_34, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_34; ?>%



                      </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;">

<?php

                     if ($apla_nt_35 == '0') {
                       $formateado_porcentaje_apla_nt_35 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_35 =   ($apla_nt_35 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_35 = number_format($porcentaje_apla_nt_35, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_35; ?>%



                      </td>
                    <td class="borde_negro"  style="height: 23px; width: 2.6%;"> 

<?php

                     if ($apla_nt_36 == '0') {
                       $formateado_porcentaje_apla_nt_36 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_36 =   ($apla_nt_36 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_36 = number_format($porcentaje_apla_nt_36, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_36; ?>%



                     </td>
                    <td class="borde_der_inf_sup_negro" style="height: 23px; width: 2.6%;"> 

<?php

                     if ($apla_nt_37 == '0') {
                       $formateado_porcentaje_apla_nt_37 = '0';
                     }

                     else {

                      $porcentaje_apla_nt_37 =   ($apla_nt_37 * 100) / $totalRows_control_tot_real;

                     }

                     $formateado_porcentaje_apla_nt_37 = number_format($porcentaje_apla_nt_37, 1, '.', '');

                     echo $formateado_porcentaje_apla_nt_37; ?>%


                     </td>

                    <td class="" style="height: 23px; width: 5.2%;" colspan="2">  </td>

                    <td style="height: 23px; width: 1.8%;">  </td> </form> 

                    <td style="height: 23px; width: 5.8%;" colspan="2">  </td>
                </tr>
















<!--  

                <tr>
                    <td style="height: 23px; width: 1.5%;">  </td>
                    <td style="height: 23px; width: 10.5%;">  </td>
                    <td style="height: 23px; width: 1%;">  </td>
                    <td style="height: 23px; width: 23.4%;" colspan="9">  </td> 
                    <td style="height: 23px; width: 1.8%;"></td>

                    <td style="height: 23px; width: 23.4%;" colspan="9">  </td>

                    <td style="height: 23px; width: 1.8%;"></td>

                    <td style="height: 23px; width: 23.4%;" colspan="9">  </td>

                    <td style="height: 23px; width: 1.8%;">  </td> 

                    <td style="height: 23px; width: 5.8%;" colspan="2">  </td>
                </tr>    -->



               


            </table>

		</div> 

</div>  <!--  cierre form row de la Fila-->


<br><br><br>




<!-- Modal -->
<div class="modal fade" id="guardar_1act1Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 1"</span> - 1er Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="d_11" name="d_11">
       



      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

<button type="submit" name="guardar_1act1" form="save_L1_N1" class="btn btn-aaa ">Guardar</button>

      </div>
    </div>
  </div>
</div>









<!-- Modal -->
<div class="modal fade" id="guardar_2act1Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 1"</span> - 2do Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="d_21" name="d_21">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

        <button type="submit" name="guardar_2act1" form="save_L2_N1" class="btn btn-bbb ">Guardar</button>

      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_3act1Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 1"</span> - 3er Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="d_31" name="d_31">
      
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" name="guardar_3act1" form="save_L3_N1" class="btn btn-ccc ">Guardar</button>
       
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="guardar_1act2Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 2"</span> - 1er Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="d_12" name="d_12">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" name="guardar_1act2" form="save_L1_N2" class="btn btn-aaa ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_2act2Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 2"</span> - 2do Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="d_22" name="d_22">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" name="guardar_2act2" form="save_L2_N2" class="btn btn-bbb ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_3act2Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 2"</span> - 3er Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="d_32" name="d_32">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <button type="submit" name="guardar_3act2" form="save_L3_N2" class="btn btn-ccc ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_1act3Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 3"</span> - 1er Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="d_13" name="d_13">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" name="guardar_1act3" form="save_L1_N3" class="btn btn-aaa ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_2act3Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 3"</span> - 2do Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="d_23" name="d_23">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" name="guardar_2act3" form="save_L2_N3" class="btn btn-bbb ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_3act3Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 3"</span> - 3er Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="d_33" name="d_33">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" name="guardar_3act3" form="save_L3_N3" class="btn btn-ccc ">Guardar</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="guardar_1act4Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 4"</span> - 1er Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="d_14" name="d_14">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" name="guardar_1act4" form="save_L1_N4" class="btn btn-aaa ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_2act4Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 4"</span> - 2do Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="d_24" name="d_24">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" name="guardar_2act4" form="save_L2_N4" class="btn btn-bbb ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_3act4Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 4"</span> - 3er Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"   id="d_34" name="d_34">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
       <button type="submit" name="guardar_3act4" form="save_L3_N4" class="btn btn-ccc ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_1act5Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 5"</span> - 1er Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="d_15" name="d_15">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" name="guardar_1act5" form="save_L1_N5" class="btn btn-aaa ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_2act5Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 5"</span> - 2do Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"   id="d_25" name="d_25">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" name="guardar_2act5" form="save_L2_N5" class="btn btn-bbb ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_3act5Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 5"</span> - 3er Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"   id="d_35" name="d_35">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    <button type="submit" name="guardar_3act5" form="save_L3_N5" class="btn btn-ccc ">Guardar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="guardar_1act6Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 6"</span> - 1er Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="d_16" name="d_16">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" name="guardar_1act6" form="save_L1_N6" class="btn btn-aaa ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_2act6Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 6"</span> - 2do Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="d_26" name="d_26">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
     <button type="submit" name="guardar_2act6" form="save_L2_N6" class="btn btn-bbb ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_3act6Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 6"</span> - 3er Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="d_36" name="d_36">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
       <button type="submit" name="guardar_3act6" form="save_L3_N6" class="btn btn-ccc ">Guardar</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="guardar_1act7Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 7"</span> - 1er Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"   id="d_17" name="d_17">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" name="guardar_1act7" form="save_L1_N7" class="btn btn-aaa ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_2act7Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 7"</span> - 2do Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"   id="d_27" name="d_27">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <button type="submit" name="guardar_2act7" form="save_L2_N7" class="btn btn-bbb ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_3act7Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Guardar y/o editar aprendizaje descriptivo, <span style="color:MediumBlue;">"Actividad, contenido u objetivo 7"</span> - 3er Lapso - Momento.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"   id="d_37" name="d_37">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" name="guardar_3act7" form="save_L3_N7" class="btn btn-ccc ">Guardar</button>
      </div>
    </div>
  </div>
</div>











<!-- Modal -->
<div class="modal fade" id="guardar_aspectos1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Colocar acotación y/o aspecto a reforzar, <span style="color:MediumBlue;">"1er Lapso - Momento"</span>.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="asp1" name="asp1">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" name="guardar_aspectos1" form="save_aspectos_L1" class="btn btn-aaa ">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="guardar_aspectos2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Colocar acotación y/o aspecto a reforzar, <span style="color:MediumBlue;">"2do Lapso - Momento"</span>.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="asp2" name="asp2">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" name="guardar_aspectos2" form="save_aspectos_L2" class="btn btn-bbb ">Guardar</button>
      </div>
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="guardar_aspectos3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Colocar acotación y/o aspecto a reforzar, <span style="color:MediumBlue;">"3er Lapso - Momento"</span>.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="asp3" name="asp3">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" name="guardar_aspectos3" form="save_aspectos_L3" class="btn btn-ccc ">Guardar</button>
      </div>
    </div>
  </div>
</div>
















    <script> 
      
        var el_down = document.getElementById("GFG_DOWN"); 
        
        function isValid(el, evnt) { 
            var charC = (evnt.which) ? evnt.which : evnt.keyCode; 
            if (charC == 46) { 
                if (el.value.indexOf('.') === -1) { 
                    return true; 
                } else { 
                    return false; 
                } 
            } else { 
                if (charC > 31 && (charC < 48 || charC > 57)) 
                    return false; 
            } 
            return true; 
        } 
  
        function GFG_Fun(t, evnt) { 
            var a = isValid(t, evnt); 
            if (a) { 
                el_down.innerHTML = ""; 
            } else { 
                el_down.innerHTML = "Número Invalido."; 
            } 
            return a; 
        } 
    </script> 









<?php include ("../conectar.php"); 

$query_ultra = "SELECT * FROM plantilla_indicadores
WHERE  ind_materia = '$la_materia'
ORDER BY ind_desc ASC";

$datos_selecc_ultra = mysqli_query($enlace, $query_ultra) or die(mysqli_error());

$row_datos_selecc_ultra = mysqli_fetch_assoc($datos_selecc_ultra);

$totalRows_datos_selecc_ultra = mysqli_num_rows($datos_selecc_ultra);


mysqli_close($enlace);


 ?> 













<div class="card mr-2 ml-2">

  <div class="alert alert-primary" style="font-size:18px;" role="alert">
   <b>-</b> Listado descriptivo de aprendizajes u <b>objetivos a lograr o alcanzar</b>, para el área, asignatura o materia</b> <b style="color:black;">"<?php echo $la_materia; ?>"</b>: 
</div>

  
  <div class="card-body">
   


 <form method="POST">
        <div class="form-row">


    <input type="hidden" id="esta_materia"   name="esta_materia"   value="<?php echo $la_materia; ?>">

          <div class="input-group col-md_12 col-lg-10 mt-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i class="fas fa-plus fa-lg"></i></span>  
                  </div>
<input type="text" maxlength="249" class="form-control input-sm" id="dato_descripcion" name="dato_descripcion" placeholder="Agregar la descripción del aprendizajes u objetivos a lograr por el estudiante..." aria-label="dato_selecc" aria-describedby="basic-addon1" required>
          </div>



     <div class="col-md_6 col-lg-1 mt-2">
     
      <select class="form-control" id="lapso_es_es" name="lapso_es_es" required>

        <option selected disabled value="">Lapso:</option>
        <option disabled></option>
        <option value="1°">1°</option>
        <option value="2°">2°</option>
        <option value="3°">3°</option>
        <option value="Todos">Todos</option>

      </select>

    </div>



            <div class="col-md_6 col-lg-1 mt-2">

            <button type="submit" name="submit_des" class="btn btn-primary btn-block">
            </i>Guardar</button>

              </div>

                

        </div><!-- cierre row -->

</form>






  <div class="card mt-4 mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             
              <thead>
                <tr>
                    <th>N°</th>
                  <th>Aprendizajes u objetivos a lograr:</th>
               
                  <th>Lapso</th>
                  <th>Acción 1</th>
                  <th>Acción 2</th>
                </tr>
              </thead>
                          
              
              <tbody>

                <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->

                <tr>

<td> <?php  echo $bb; $bb=$bb+1; ?>   </td>


                  <td><?php echo $row_datos_selecc_ultra['ind_desc']; ?> </td>

                  <td><?php echo $row_datos_selecc_ultra['en_lapso']; ?> </td>
                 
                  
              

<td align="center">



  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal"
          data-target="#modificar<?php echo $row_datos_selecc_ultra['id_indicador']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                     <i class="fas fa-edit"></i> &nbsp; Modificar
  </button>    




</td>


<!-- ini modal editar -->
<div class="modal fade " id="modificar<?php echo $row_datos_selecc_ultra['id_indicador']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Editar o Modificar!!!</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">
   
        <div class="form-row">
        <div class="input-group col-lg-12">                                  
         
 <div class="input-group col-lg-9">
 <div class="input-group-prepend">

  <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-edit fa-lg"></i></span>   

 </div>
  <input type="text" maxlength="249" class="form-control" id="dato_mod_descripcion" name="dato_mod_descripcion" value="<?php echo $row_datos_selecc_ultra['ind_desc']; ?>" required>
 
 </div>  


<div class="col-lg-3">
     
      <select class="form-control" id="mod_lapso_es_es" name="mod_lapso_es_es" required>

        <option selected value="<?php echo $row_datos_selecc_ultra['en_lapso']; ?>"><?php echo $row_datos_selecc_ultra['en_lapso']; ?></option>
        <option disabled></option>
        <option value="1°">1°</option>
        <option value="2°">2°</option>
        <option value="3°">3°</option>
        <option value="Todos">Todos</option>

      </select>

</div>




        </div>
        </div>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_selecc_des" class="btn btn-info" value="<?php echo $row_datos_selecc_ultra['id_indicador']; ?>">
              Modificar</button>  
      </div>
      </form>
      
    </div>
  </div>
</div>
<!-- cierre modal de editar -->




<td align="center">

  <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
          data-target="#borrar<?php echo $row_datos_selecc_ultra['id_indicador']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                     <i class="far fa-trash-alt"></i> &nbsp; Eliminar
  </button>                 

</td>

<!-- ini modal eliminar -->

<div class="modal fade" id="borrar<?php echo $row_datos_selecc_ultra['id_indicador']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">
        <i class="fas fa-exclamation-triangle fa-lg"></i> &nbsp;Alerta!!!</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">
        La descripción: <b>&nbsp;"&nbsp; <?php echo $row_datos_selecc_ultra['ind_desc']; ?> &nbsp;"&nbsp;</b> sera removida de la base de datos. 
      </div>
      <div class="modal-footer">

  <form method="post">

    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrar_selecc_des" class="btn btn-danger" value="<?php echo $row_datos_selecc_ultra['id_indicador']; ?>" >
          Eliminar</button>

  </form>


      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->

                  
                </tr>
                

                 <?php } while ($row_datos_selecc_ultra = mysqli_fetch_assoc($datos_selecc_ultra)); ?>

                
              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->

        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>  -->

  </div> <!-- cierre card -->   







  </div>  
</div>  <br>








<?php include ("../conectar.php"); 



$query_ultrax = "SELECT * FROM plantilla_reforzar
WHERE  ind_materiax = '$la_materia'
ORDER BY ind_refuerza ASC";

$datos_selecc_ultrax = mysqli_query($enlace, $query_ultrax) or die(mysqli_error());

$row_datos_selecc_ultrax = mysqli_fetch_assoc($datos_selecc_ultrax);

$totalRows_datos_selecc_ultrax = mysqli_num_rows($datos_selecc_ultrax);


mysqli_close($enlace);


 ?> 





<div class="card mr-2 ml-2">

  <div class="alert alert-danger" role="alert">
   <b>- Lista de acotaciones y/o posibles aspectos a reforzar</b>:

    <?php

if ($num_materia == 1) {  $e_abrev_mat = $row_datos_controlmat['a_abrev'];    }  
if ($num_materia == 2) {  $e_abrev_mat = $row_datos_controlmat['b_abrev'];    }  
if ($num_materia == 3) {  $e_abrev_mat = $row_datos_controlmat['c_abrev'];    }  
if ($num_materia == 4) {  $e_abrev_mat = $row_datos_controlmat['d_abrev'];    }  
if ($num_materia == 5) {  $e_abrev_mat = $row_datos_controlmat['e_abrev'];    }  
if ($num_materia == 6) {  $e_abrev_mat = $row_datos_controlmat['f_abrev'];    }  
if ($num_materia == 7) {  $e_abrev_mat = $row_datos_controlmat['g_abrev'];    }  
if ($num_materia == 8) {  $e_abrev_mat = $row_datos_controlmat['h_abrev'];    }  
if ($num_materia == 9) {  $e_abrev_mat = $row_datos_controlmat['i_abrev'];    }  
if ($num_materia == 10) {  $e_abrev_mat = $row_datos_controlmat['j_abrev'];    }  
if ($num_materia == 11) {  $e_abrev_mat = $row_datos_controlmat['k_abrev'];    }  
if ($num_materia == 12) {  $e_abrev_mat = $row_datos_controlmat['l_abrev'];    }  
if ($num_materia == 13) {  $e_abrev_mat = $row_datos_controlmat['m_abrev'];    }  
if ($num_materia == 14) {  $e_abrev_mat = $row_datos_controlmat['n_abrev'];    }  

      ?>  



</div>

  
  <div class="card-body">
   


 <form method="POST">
        <div class="form-row">


    <input type="hidden" id="esta_materiax"   name="esta_materiax"   value="<?php echo $la_materia; ?>">
    <input type="hidden" id="esta_abrev"   name="esta_abrev"   value="<?php echo $e_abrev_mat; ?>">

          <div class="input-group col-md_12 col-lg-10 mt-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i class="fas fa-plus fa-lg"></i></span>  
                  </div>
<input type="text" maxlength="249" class="form-control input-sm" id="dato_aspectos" name="dato_aspectos" placeholder="Agregar acotación y/o aspecto..." aria-label="dato_selecc" aria-describedby="basic-addon1" required>
          </div>



     <div class="col-md_6 col-lg-1 mt-2">
     
      <select class="form-control" id="lapso_es_esx" name="lapso_es_esx" required>

        <option selected disabled value="">Lapso:</option>
        <option disabled></option>
        <option value="1°">1°</option>
        <option value="2°">2°</option>
        <option value="3°">3°</option>
        <option value="Todos">Todos</option>

      </select>

    </div>



            <div class="col-md_6 col-lg-1 mt-2">

            <button type="submit" name="submit_aspecto" class="btn btn-warning btn-block">
            </i>Guardar</button>

              </div>

                

        </div><!-- cierre row -->

</form>






  <div class="card mt-4 mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             
              <thead>
                <tr>
                    <th>N°</th>
                  <th>Aspectos:</th>
               
                  <th>Lapso</th>
                  <th>Acción 1</th>
                  <th>Acción 2</th>
                </tr>
              </thead>
                          
              
              <tbody>

                <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->

                <tr>

<td> <?php echo $cc; $cc=$cc+1; ?>    </td>


                  <td><?php echo $row_datos_selecc_ultrax['ind_refuerza']; ?> </td>

                  <td><?php echo $row_datos_selecc_ultrax['este_lapso']; ?> </td>
                 
                  
              

<td align="center">



  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal"
          data-target="#nuevaa<?php echo $row_datos_selecc_ultrax['id_reforzar']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                     <i class="fas fa-edit"></i> &nbsp; Modificar
  </button>    




</td>


<!-- ini modal editar -->
<div class="modal fade " id="nuevaa<?php echo $row_datos_selecc_ultrax['id_reforzar']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" >
        <i class="fas fa-info fa-lg"></i> &nbsp;Editar o Modificar!!!</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">
   
        <div class="form-row">
        <div class="input-group col-lg-12">                                  
         
 <div class="input-group col-lg-9">
 <div class="input-group-prepend">

  <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-edit fa-lg"></i></span> 

 </div>

  <input type="hidden" id="esta_abrev_mod"   name="esta_abrev_mod"   value="<?php echo $e_abrev_mat; ?>">
  <input type="text" maxlength="249" class="form-control" id="dato_mod_aspecto" name="dato_mod_aspecto" value="<?php echo $row_datos_selecc_ultrax['ind_refuerza']; ?>" required>
 
 </div>   




<div class="col-lg-3">
     
      <select class="form-control" id="mod_lapso_es_ex" name="mod_lapso_es_ex" required>

        <option selected value="<?php echo $row_datos_selecc_ultrax['este_lapso']; ?>"><?php echo $row_datos_selecc_ultrax['este_lapso']; ?></option>
        <option disabled></option>
        <option value="1°">1°</option>
        <option value="2°">2°</option>
        <option value="3°">3°</option>
        <option value="Todos">Todos</option>

      </select>

</div>


        </div>
        </div>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_selecc_aspecto" class="btn btn-info" value="<?php echo $row_datos_selecc_ultrax['id_reforzar']; ?>">
              Modificar</button>  
      </div>
      </form>
      
    </div>
  </div>
</div>
<!-- cierre modal de editar -->







<td align="center">

  <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
          data-target="#borrando<?php echo $row_datos_selecc_ultrax['id_reforzar']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                     <i class="far fa-trash-alt"></i> &nbsp; Eliminar
  </button>                 

</td>

<!-- ini modal eliminar -->

<div class="modal fade" id="borrando<?php echo $row_datos_selecc_ultrax['id_reforzar']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" >
        <i class="fas fa-exclamation-triangle fa-lg"></i> &nbsp;Alerta!!!</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">
        El aspecto: <b>&nbsp;"&nbsp; <?php echo $row_datos_selecc_ultrax['ind_refuerza']; ?> &nbsp;"&nbsp;</b> sera removido de la base de datos. 
      </div>
      <div class="modal-footer">

  <form method="post">

    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrar_selecc_aspecto" class="btn btn-danger" value="<?php echo $row_datos_selecc_ultrax['id_reforzar']; ?>" >
          Eliminar</button>

  </form>


      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->

                  
                </tr>
                

                 <?php } while ($row_datos_selecc_ultrax = mysqli_fetch_assoc($datos_selecc_ultrax)); ?>

                
              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->

        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>  -->

  </div> <!-- cierre card -->   





  </div>  
</div>  <br>















<?php include ("Footer_Alt.php"); ?>