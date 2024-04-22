<?php
error_reporting(0); //hide php errors

include("identificador.php");

$nnn1 = $nnn['ci'];

include("../conectar.php");



 




$el_g = $nnn['id_grado']; 


// $el_cicloXX = $_SESSION['el_ciclo_exxx'];
$el_cicloXX = $_GET['p78g']; 
$el_gradoXX = $_GET['k2yt'];
$la_seccionXX = $_GET['rt4m'];
$tituloJKL = $_GET['l22h'];


$i = 1;





$query_ciclones = "SELECT * FROM temporada_escolar where id_periodo_es = '$el_cicloXX' limit 1" ;
$datos_ciclones = mysqli_query($enlace, $query_ciclones) or die(mysqli_error());
$row_datos_ciclones = mysqli_fetch_array($datos_ciclones);
$periodoo_ciclones = $row_datos_ciclones['periodo_escolar'];




$query_formato_1 = "SELECT * FROM z_formato where id_formato = 1 order by id_formato ASC limit 1" ;
$datos_formato_1 = mysqli_query($enlace, $query_formato_1) or die(mysqli_error());
$row_datos_formato_1 = mysqli_fetch_array($datos_formato_1);
$comparativo_formato_1 = $row_datos_formato_1['comparativo'];
$alfabetico_formato_1 = $row_datos_formato_1['alfabetico'];
$literal_formato_1 = $row_datos_formato_1['literal'];
$cualitativa_formato_1 = $row_datos_formato_1['cualitativa'];  


$query_formato_2 = "SELECT * FROM z_formato where id_formato = 2  order by id_formato ASC limit 1" ;
$datos_formato_2 = mysqli_query($enlace, $query_formato_2) or die(mysqli_error());
$row_datos_formato_2 = mysqli_fetch_array($datos_formato_2);
$comparativo_formato_2 = $row_datos_formato_2['comparativo'];
$alfabetico_formato_2 = $row_datos_formato_2['alfabetico'];
$literal_formato_2 = $row_datos_formato_2['literal'];
$cualitativa_formato_2 = $row_datos_formato_2['cualitativa'];

$query_formato_3 = "SELECT * FROM z_formato where id_formato = 3  order by id_formato ASC limit 1" ;
$datos_formato_3 = mysqli_query($enlace, $query_formato_3) or die(mysqli_error());
$row_datos_formato_3 = mysqli_fetch_array($datos_formato_3);
$comparativo_formato_3 = $row_datos_formato_3['comparativo'];
$alfabetico_formato_3 = $row_datos_formato_3['alfabetico'];
$literal_formato_3 = $row_datos_formato_3['literal'];
$cualitativa_formato_3 = $row_datos_formato_3['cualitativa'];

$query_formato_4 = "SELECT * FROM z_formato where id_formato = 4  order by id_formato ASC limit 1" ;
$datos_formato_4 = mysqli_query($enlace, $query_formato_4) or die(mysqli_error());
$row_datos_formato_4 = mysqli_fetch_array($datos_formato_4);
$comparativo_formato_4 = $row_datos_formato_4['comparativo'];
$alfabetico_formato_4 = $row_datos_formato_4['alfabetico'];
$literal_formato_4 = $row_datos_formato_4['literal'];
$cualitativa_formato_4 = $row_datos_formato_4['cualitativa'];

$query_formato_5 = "SELECT * FROM z_formato where id_formato = 5  order by id_formato ASC limit 1" ;
$datos_formato_5 = mysqli_query($enlace, $query_formato_5) or die(mysqli_error());
$row_datos_formato_5 = mysqli_fetch_array($datos_formato_5);
$comparativo_formato_5 = $row_datos_formato_5['comparativo'];
$alfabetico_formato_5 = $row_datos_formato_5['alfabetico'];
$literal_formato_5 = $row_datos_formato_5['literal'];
$cualitativa_formato_5 = $row_datos_formato_5['cualitativa'];

$query_formato_6 = "SELECT * FROM z_formato where id_formato = 6  order by id_formato ASC limit 1" ;
$datos_formato_6 = mysqli_query($enlace, $query_formato_6) or die(mysqli_error());
$row_datos_formato_6 = mysqli_fetch_array($datos_formato_6);
$comparativo_formato_6 = $row_datos_formato_6['comparativo'];
$alfabetico_formato_6 = $row_datos_formato_6['alfabetico'];
$literal_formato_6 = $row_datos_formato_6['literal'];
$cualitativa_formato_6 = $row_datos_formato_6['cualitativa'];

$query_formato_7 = "SELECT * FROM z_formato where id_formato = 7 order by id_formato ASC limit 1" ;
$datos_formato_7 = mysqli_query($enlace, $query_formato_7) or die(mysqli_error());
$row_datos_formato_7 = mysqli_fetch_array($datos_formato_7);
$comparativo_formato_7 = $row_datos_formato_7['comparativo'];
$alfabetico_formato_7 = $row_datos_formato_7['alfabetico'];
$literal_formato_7 = $row_datos_formato_7['literal'];
$cualitativa_formato_7 = $row_datos_formato_7['cualitativa'];

$query_formato_8 = "SELECT * FROM z_formato where id_formato = 8 order by id_formato ASC limit 1" ;
$datos_formato_8 = mysqli_query($enlace, $query_formato_8) or die(mysqli_error());
$row_datos_formato_8 = mysqli_fetch_array($datos_formato_8);
$comparativo_formato_8 = $row_datos_formato_8['comparativo'];
$alfabetico_formato_8 = $row_datos_formato_8['alfabetico'];
$literal_formato_8 = $row_datos_formato_8['literal'];
$cualitativa_formato_8 = $row_datos_formato_8['cualitativa'];

$query_formato_9 = "SELECT * FROM z_formato where id_formato = 9 order by id_formato ASC limit 1" ;
$datos_formato_9 = mysqli_query($enlace, $query_formato_9) or die(mysqli_error());
$row_datos_formato_9 = mysqli_fetch_array($datos_formato_9);
$comparativo_formato_9 = $row_datos_formato_9['comparativo'];
$alfabetico_formato_9 = $row_datos_formato_9['alfabetico'];
$literal_formato_9 = $row_datos_formato_9['literal'];
$cualitativa_formato_9 = $row_datos_formato_9['cualitativa'];

$query_formato_10 = "SELECT * FROM z_formato where id_formato = 10 order by id_formato ASC limit 1" ;
$datos_formato_10 = mysqli_query($enlace, $query_formato_10) or die(mysqli_error());
$row_datos_formato_10 = mysqli_fetch_array($datos_formato_10);
$comparativo_formato_10 = $row_datos_formato_10['comparativo'];
$alfabetico_formato_10 = $row_datos_formato_10['alfabetico'];
$literal_formato_10 = $row_datos_formato_10['literal'];
$cualitativa_formato_10 = $row_datos_formato_10['cualitativa'];

$query_formato_11 = "SELECT * FROM z_formato where id_formato = 11 order by id_formato ASC limit 1" ;
$datos_formato_11 = mysqli_query($enlace, $query_formato_11) or die(mysqli_error());
$row_datos_formato_11 = mysqli_fetch_array($datos_formato_11);
$comparativo_formato_11 = $row_datos_formato_11['comparativo'];
$alfabetico_formato_11 = $row_datos_formato_11['alfabetico'];
$literal_formato_11 = $row_datos_formato_11['literal'];
$cualitativa_formato_11 = $row_datos_formato_11['cualitativa'];

$query_formato_12 = "SELECT * FROM z_formato where id_formato = 12 order by id_formato ASC limit 1" ;
$datos_formato_12 = mysqli_query($enlace, $query_formato_12) or die(mysqli_error());
$row_datos_formato_12 = mysqli_fetch_array($datos_formato_12);
$comparativo_formato_12 = $row_datos_formato_12['comparativo'];
$alfabetico_formato_12 = $row_datos_formato_12['alfabetico'];
$literal_formato_12 = $row_datos_formato_12['literal'];
$cualitativa_formato_12 = $row_datos_formato_12['cualitativa'];


$queryasignaturas = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $el_cicloXX
         and  asignatura_ciclo_grado.id_del_grado = $el_gradoXX                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC limit 1" ;

$datos_controlasign = mysqli_query($enlace, $queryasignaturas) or die(mysqli_error());
$row_datos_controlasign = mysqli_fetch_array($datos_controlasign); 

$general = $row_datos_controlasign['grado_pass'];   // me da los primeros 4 generales

$asign1_pass = $row_datos_controlasign['a_pass'];
$asign2_pass = $row_datos_controlasign['b_pass'];
$asign3_pass = $row_datos_controlasign['c_pass'];
$asign4_pass = $row_datos_controlasign['d_pass'];
$asign5_pass = $row_datos_controlasign['e_pass'];
$asign6_pass = $row_datos_controlasign['f_pass'];
$asign7_pass = $row_datos_controlasign['g_pass'];
$asign8_pass = $row_datos_controlasign['h_pass'];
$asign9_pass = $row_datos_controlasign['i_pass'];
$asign10_pass = $row_datos_controlasign['j_pass'];
$asign11_pass = $row_datos_controlasign['k_pass'];
$asign12_pass = $row_datos_controlasign['l_pass'];
$asign13_pass = $row_datos_controlasign['m_pass'];
$asign14_pass = $row_datos_controlasign['n_pass'];


$asign1_status = $row_datos_controlasign['a_estado'];
$asign2_status = $row_datos_controlasign['b_estado'];
$asign3_status = $row_datos_controlasign['c_estado'];
$asign4_status = $row_datos_controlasign['d_estado'];
$asign5_status = $row_datos_controlasign['e_estado'];
$asign6_status = $row_datos_controlasign['f_estado'];
$asign7_status = $row_datos_controlasign['g_estado'];
$asign8_status = $row_datos_controlasign['h_estado'];
$asign9_status = $row_datos_controlasign['i_estado'];
$asign10_status = $row_datos_controlasign['j_estado'];
$asign11_status = $row_datos_controlasign['k_estado'];
$asign12_status = $row_datos_controlasign['l_estado'];
$asign13_status = $row_datos_controlasign['m_estado'];
$asign14_status = $row_datos_controlasign['n_estado'];



$asign1_name = $row_datos_controlasign['a_aaa'];
$asign2_name = $row_datos_controlasign['b_bbb'];
$asign3_name = $row_datos_controlasign['c_ccc'];
$asign4_name = $row_datos_controlasign['d_ddd'];
$asign5_name = $row_datos_controlasign['e_eee'];
$asign6_name = $row_datos_controlasign['f_fff'];
$asign7_name = $row_datos_controlasign['g_ggg'];
$asign8_name = $row_datos_controlasign['h_hhh'];
$asign9_name = $row_datos_controlasign['i_iii'];
$asign10_name = $row_datos_controlasign['j_jjj'];
$asign11_name = $row_datos_controlasign['k_kkk'];
$asign12_name = $row_datos_controlasign['l_lll'];
$asign13_name = $row_datos_controlasign['m_mmm'];
$asign14_name = $row_datos_controlasign['n_nnn'];





$query_secc_pass = "SELECT * FROM secciones
            where id_seccion = $la_seccionXX
            GROUP BY id_seccion limit 1";



$query_secc_pass_r = mysqli_query($enlace, $query_secc_pass) or die(mysqli_error());
$query_secc_pass_resultados = mysqli_fetch_assoc($query_secc_pass_r);

$seccion_parcial = $query_secc_pass_resultados['pass'];
$seccion_continuacion = $general[0];

$seccion_completa = ''.$general.''.$seccion_parcial.''.$seccion_continuacion.'';

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







if ($el_g == 57 ) {
$permiso_completo = 1;
$_SESSION['pass_ingresado'] = $seccion_completa;
$_SESSION['materia_general'] = '99';
}


if ($_SESSION['pass_ingresado'] == $seccion_completa ) {
$permiso_completo = 1;
$_SESSION['permiso_full'] = $permiso_completo;
$_SESSION['materia_general'] = '99';
}


/* 
if ($_SESSION['pass_ingresado'] == $materia1 ) {
$permiso_parcial = 1;
$_SESSION['permiso_parcialito'] = $permiso_parcial;
}  */













 if(isset($_POST['abrir_asign']))
{ 


    if (strlen($_POST['pass_de_acceso']) <7 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- La clave de ingreso no es valida. "; }


    if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }



  else {

$llave_de_clase =  $_POST['pass_de_acceso'];

$_SESSION['permiso_unico_a'] = '0';
$_SESSION['permiso_unico_b'] = '0';
$_SESSION['permiso_unico_c'] = '0';
$_SESSION['permiso_unico_d'] = '0';
$_SESSION['permiso_unico_e'] = '0';
$_SESSION['permiso_unico_f'] = '0';
$_SESSION['permiso_unico_g'] = '0';
$_SESSION['permiso_unico_h'] = '0';
$_SESSION['permiso_unico_i'] = '0';
$_SESSION['permiso_unico_j'] = '0';
$_SESSION['permiso_unico_k'] = '0';
$_SESSION['permiso_unico_l'] = '0';
$_SESSION['permiso_unico_m'] = '0';
$_SESSION['permiso_unico_n'] = '0';


$_SESSION['materia'] = '0';






if ($seccion_completa == $llave_de_clase) {

$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_completo = 1;

$_SESSION['permiso_full'] = $permiso_completo;
$_SESSION['materia_general'] = 99;


$exitoZ .= "- Acceso Completo";   

}


else {




if ($materia1 == $llave_de_clase) {


if ($asign1_status == 1) {
 
$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_medio = 1;

$_SESSION['permiso_unico_a'] = $permiso_medio;
$_SESSION['materia'] = '1';
$_SESSION['materia_general'] = '101';

$exitoZ .= "- Acceso Permitido &nbsp;<b>".$asign1_name."</b>&nbsp; 1. ";   

}

else {
$errorZ .= "-&nbsp;<b>".$asign1_name."</b>&nbsp;esta bloqueada(o) por el Dpto de Evaluación y Control de Estudios; 1. ";
}



}


    else {

      if ($exitoZ =='' and ($materia2 == $llave_de_clase) ) {


if ($asign2_status == 1) {
 

$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_medio = 1;

$_SESSION['permiso_unico_b'] = $permiso_medio;
$_SESSION['materia'] = '2';
$_SESSION['materia_general'] = '101';

$exitoZ .= "- Acceso Permitido &nbsp;<b>".$asign2_name."</b>&nbsp; 2. ";   

}

else {
$errorZ .= "-&nbsp;<b>".$asign2_name."</b>&nbsp;esta bloqueada(o) por el Dpto de Evaluación y Control de Estudios; 2. ";
}


}

else {          if ($exitoZ =='' and ($materia3 == $llave_de_clase) ) {



if ($asign3_status == 1) {
 

$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_medio = 1;

$_SESSION['permiso_unico_c'] = $permiso_medio;
$_SESSION['materia'] = '3';
$_SESSION['materia_general'] = '101';

$exitoZ .= "- Acceso Permitido &nbsp;<b>".$asign3_name."</b>&nbsp; 3. ";   

}

else {
$errorZ .= "-&nbsp;<b>".$asign3_name."</b>&nbsp;esta bloqueada(o) por el Dpto de Evaluación y Control de Estudios; 3. ";
}




}

else {  if ($exitoZ =='' and ($materia4 == $llave_de_clase) ) {



if ($asign4_status == 1) {
 


$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_medio = 1;

$_SESSION['permiso_unico_d'] = $permiso_medio;
$_SESSION['materia'] = '4';
$_SESSION['materia_general'] = '101';

$exitoZ .= "- Acceso Permitido &nbsp;<b>".$asign4_name."</b>&nbsp; 4. ";   

}

else {
$errorZ .= "-&nbsp;<b>".$asign4_name."</b>&nbsp;esta bloqueada(o) por el Dpto de Evaluación y Control de Estudios; 4. ";
}



}

else {  if ($exitoZ =='' and ($materia5 == $llave_de_clase) ) {


if ($asign5_status == 1) {
 

$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_medio = 1;

$_SESSION['permiso_unico_e'] = $permiso_medio;
$_SESSION['materia'] = '5';
$_SESSION['materia_general'] = '101';

$exitoZ .= "- Acceso Permitido &nbsp;<b>".$asign5_name."</b>&nbsp; 5. ";   

}

else {
$errorZ .= "-&nbsp;<b>".$asign5_name."</b>&nbsp;esta bloqueada(o) por el Dpto de Evaluación y Control de Estudios; 5. ";
}


}

else {  if ($exitoZ =='' and ($materia6 == $llave_de_clase) ) {

if ($asign6_status == 1) {
 

$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_medio = 1;

$_SESSION['permiso_unico_f'] = $permiso_medio;
$_SESSION['materia'] = '6';
$_SESSION['materia_general'] = '101';

$exitoZ .= "- Acceso Permitido &nbsp;<b>".$asign6_name."</b>&nbsp; 6. ";   

}

else {
$errorZ .= "-&nbsp;<b>".$asign6_name."</b>&nbsp;esta bloqueada(o) por el Dpto de Evaluación y Control de Estudios; 6. ";
}


}

else {  if ($exitoZ =='' and ($materia7 == $llave_de_clase) ) {

if ($asign7_status == 1) {
 
$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_medio = 1;

$_SESSION['permiso_unico_g'] = $permiso_medio;
$_SESSION['materia'] = '7';
$_SESSION['materia_general'] = '101';

$exitoZ .= "- Acceso Permitido &nbsp;<b>".$asign7_name."</b>&nbsp; 7. ";   

}

else {
$errorZ .= "-&nbsp;<b>".$asign7_name."</b>&nbsp;esta bloqueada(o) por el Dpto de Evaluación y Control de Estudios; 7. ";
}

 

}

else {  if ($exitoZ =='' and ($materia8 == $llave_de_clase) ) {

if ($asign8_status == 1) {
 
$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_medio = 1;

$_SESSION['permiso_unico_h'] = $permiso_medio;
$_SESSION['materia'] = '8';
$_SESSION['materia_general'] = '101';

$exitoZ .= "- Acceso Permitido &nbsp;<b>".$asign8_name."</b>&nbsp; 8. ";   

}

else {
$errorZ .= "-&nbsp;<b>".$asign8_name."</b>&nbsp;esta bloqueada(o) por el Dpto de Evaluación y Control de Estudios; 8. ";
}



}

else {  if ($exitoZ =='' and ($materia9 == $llave_de_clase) ) {

if ($asign9_status == 1) {
 
$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_medio = 1;

$_SESSION['permiso_unico_i'] = $permiso_medio;
$_SESSION['materia'] = '9';
$_SESSION['materia_general'] = '101';

$exitoZ .= "- Acceso Permitido &nbsp;<b>".$asign9_name."</b>&nbsp; 9. ";   

}

else {
$errorZ .= "-&nbsp;<b>".$asign9_name."</b>&nbsp;esta bloqueada(o) por el Dpto de Evaluación y Control de Estudios; 9. ";
}


}

else {  if ($exitoZ =='' and ($materia10 == $llave_de_clase) ) {


if ($asign10_status == 1) {
 
$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_medio = 1;

$_SESSION['permiso_unico_j'] = $permiso_medio;
$_SESSION['materia'] = '10';
$_SESSION['materia_general'] = '101';

$exitoZ .= "- Acceso Permitido &nbsp;<b>".$asign10_name."</b>&nbsp; 10. ";   

}

else {
$errorZ .= "-&nbsp;<b>".$asign10_name."</b>&nbsp;esta bloqueada(o) por el Dpto de Evaluación y Control de Estudios; 10. ";
}


}

else {  if ($exitoZ =='' and ($materia11 == $llave_de_clase) ) {


if ($asign11_status == 1) {
 
$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_medio = 1;

$_SESSION['permiso_unico_k'] = $permiso_medio;
$_SESSION['materia'] = '11';
$_SESSION['materia_general'] = '101';

$exitoZ .= "- Acceso Permitido &nbsp;<b>".$asign11_name."</b>&nbsp; 11. ";   

}

else {
$errorZ .= "-&nbsp;<b>".$asign11_name."</b>&nbsp;esta bloqueada(o) por el Dpto de Evaluación y Control de Estudios; 11. ";
}


}

else {  if ($exitoZ =='' and ($materia12 == $llave_de_clase) ) {

if ($asign12_status == 1) {
 
$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_medio = 1;

$_SESSION['permiso_unico_l'] = $permiso_medio;
$_SESSION['materia'] = '12';
$_SESSION['materia_general'] = '101';

$exitoZ .= "- Acceso Permitido &nbsp;<b>".$asign12_name."</b>&nbsp; 12. ";   

}

else {
$errorZ .= "-&nbsp;<b>".$asign12_name."</b>&nbsp;esta bloqueada(o) por el Dpto de Evaluación y Control de Estudios; 12. ";
}
 

}

else {  if ($exitoZ =='' and ($materia13 == $llave_de_clase) ) {


if ($asign13_status == 1) {
 
$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_medio = 1;

$_SESSION['permiso_unico_m'] = $permiso_medio;
$_SESSION['materia'] = '13';
$_SESSION['materia_general'] = '101';

$exitoZ .= "- Acceso Permitido &nbsp;<b>".$asign13_name."</b>&nbsp; 13. ";   

}

else {
$errorZ .= "-&nbsp;<b>".$asign13_name."</b>&nbsp;esta bloqueada(o) por el Dpto de Evaluación y Control de Estudios; 13. ";
}



}

else {  if ($exitoZ =='' and ($materia14 == $llave_de_clase) ) {


if ($asign14_status == 1) {
 

$_SESSION['pass_ingresado'] = $llave_de_clase;
$permiso_medio = 1;

$_SESSION['permiso_unico_n'] = $permiso_medio;
$_SESSION['materia'] = '14';
$_SESSION['materia_general'] = '101';

$exitoZ .= "- Acceso Permitido &nbsp;<b>".$asign14_name."</b>&nbsp; 14. ";   

}

else {
$errorZ .= "-&nbsp;<b>".$asign14_name."</b>&nbsp;esta bloqueada(o) por el Dpto de Evaluación y Control de Estudios; 14. ";
}


}

else { $errorZ .= "- Clave de ingreso incorrecta. ";   }   }   }   }   }   }   }  }  }  }  }   }   }

  



    }

}




  }

}  // cierre de verificar y abrir aula






if(isset($_POST['save_1']))
{ 

if($_FILES['archivo1']['name']!='')
{

  $ci_estu =  $_POST['ci_estu1'];

       if ($_FILES['archivo1']["error"] > 0)
        {
      $errorZ.="- " . $_FILES['archivo1']['error'] . " ";
        }

      else
        {

$estamos_en_ciclo =  $_POST['ciclo_del_1'];
$el_id_estud_es =  $_POST['id_estud_1'];
$indicativo = '1ro';

$path = $_FILES['archivo1']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

      $file_AdjN = "".$ci_estu."";
      move_uploaded_file($_FILES['archivo1']['tmp_name'],

      "../zzz_notas_boletas/zzz_notas_boletas_1er_Corte/".$indicativo."_".$estamos_en_ciclo.".".$el_id_estud_es.".".$ext );

      $exitoZ .= " &nbsp; Archivo &nbsp;<b>** ".$file_AdjN." **</b>&nbsp; 1° corte, cargado correctamente. &nbsp;";       
          
      }
}

 }




 if(isset($_POST['save_2']))
{ 

if($_FILES['archivo2']['name']!='')
{

  $ci_estu =  $_POST['ci_estu2'];

       if ($_FILES['archivo2']["error"] > 0)
        {
      $errorZ.="- " . $_FILES['archivo2']['error'] . " ";
        }

      else
        {

$estamos_en_ciclo =  $_POST['ciclo_del_2'];
$el_id_estud_es =  $_POST['id_estud_2'];
$indicativo = '2do';

$path = $_FILES['archivo2']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

      $file_AdjN = "".$ci_estu."";
      move_uploaded_file($_FILES['archivo2']['tmp_name'],

      "../zzz_notas_boletas/zzz_notas_boletas_2do_Corte/".$indicativo."_".$estamos_en_ciclo.".".$el_id_estud_es.".".$ext );

      $exitoZ .= " &nbsp; Archivo &nbsp;<b>** ".$file_AdjN." **</b>&nbsp;  2° corte, cargado correctamente. &nbsp;";       
          
      }
}

 }





 if(isset($_POST['save_3']))
{ 

if($_FILES['archivo3']['name']!='')
{

  $ci_estu =  $_POST['ci_estu3'];

       if ($_FILES['archivo3']["error"] > 0)
        {
      $errorZ.="- " . $_FILES['archivo3']['error'] . " ";
        }

      else
        {

$estamos_en_ciclo =  $_POST['ciclo_del_3'];
$el_id_estud_es =  $_POST['id_estud_3'];
$indicativo = '3ro';

$path = $_FILES['archivo3']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

      $file_AdjN = "".$ci_estu."";
      move_uploaded_file($_FILES['archivo3']['tmp_name'],

      "../zzz_notas_boletas/zzz_notas_boletas_3er_Corte/".$indicativo."_".$estamos_en_ciclo.".".$el_id_estud_es.".".$ext );

      $exitoZ .= " &nbsp; Archivo &nbsp;<b>** ".$file_AdjN." **</b>&nbsp; 3° corte, cargado correctamente. &nbsp;";       
          
      }
}

 }





 if(isset($_POST['save_4']))
{ 

if($_FILES['archivo4']['name']!='')
{

  $ci_estu =  $_POST['ci_estu4'];

       if ($_FILES['archivo4']["error"] > 0)
        {
      $errorZ.="- " . $_FILES['archivo4']['error'] . " ";
        }

      else
        {

$estamos_en_ciclo =  $_POST['ciclo_del_4'];
$el_id_estud_es =  $_POST['id_estud_4'];
$indicativo = '4to';

$path = $_FILES['archivo4']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

      $file_AdjN = "".$ci_estu."";
      move_uploaded_file($_FILES['archivo4']['tmp_name'],

      "../zzz_notas_boletas/zzz_notas_boletas_4to_Final/".$indicativo."_".$estamos_en_ciclo.".".$el_id_estud_es.".".$ext );

      $exitoZ .= " &nbsp; Archivo &nbsp;<b>** ".$file_AdjN." **</b>&nbsp; 4° corte o final, cargado correctamente. &nbsp;";       
          
      }
}

 }





 if(isset($_POST['borrar_1']))
    {

  $ci_estu =  $_POST['ci_estu1'];
  $el_id_estud_es =  $_POST['id_estud_1'];
  $indicativo = '1ro';

$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_1er_Corte"; 

$estamos_en_ciclo =  $_POST['ciclo_del_1'];

$files = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estud_es.'.*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
} 


      $exitoZ="- 1° Corte Borrado. ";

             }



 if(isset($_POST['borrar_2']))
    {

  $ci_estu =  $_POST['ci_estu2'];
  $el_id_estud_es =  $_POST['id_estud_2'];
  $indicativo = '2do';

$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_2do_Corte"; 

$estamos_en_ciclo =  $_POST['ciclo_del_2'];

$files = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estud_es.'.*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
} 


      $exitoZ="- 2° Corte Borrado. ";

             }





 if(isset($_POST['borrar_3']))
    {

  $ci_estu =  $_POST['ci_estu3'];
  $el_id_estud_es =  $_POST['id_estud_3'];
  $indicativo = '3ro';

$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_3er_Corte"; 

$estamos_en_ciclo =  $_POST['ciclo_del_3'];

$files = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estud_es.'.*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
} 


      $exitoZ="- 3° Corte Borrado. ";

             }





 if(isset($_POST['borrar_4']))
    {

  $ci_estu =  $_POST['ci_estu4'];
  $el_id_estud_es =  $_POST['id_estud_4'];
  $indicativo = '4to';

$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_4to_Final"; 

$estamos_en_ciclo =  $_POST['ciclo_del_4'];

$files = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estud_es.'.*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
} 


      $exitoZ="- 4° Corte o Corte Final, Borrado. ";

             }




 if(isset($_POST['editar_selecc']))
        {


 include("consultas_mod/chequeo_estudiantes_mod_corto.php");   // chequea que lo introducido este bien.




if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }

else { 

include ("../conectar.php");


 include("plantilla_estudiantes_00_update_corto.php");   // procesa los datos

 }


}  // cierre de modificar datos del estudiante









// los siguientes permite cambiar el estado a inactivo de un registrado y cambiar fecha....

   if(isset($_POST['retirar_alumno']))
    {


        if (!$_POST['nota_text'])      // verifica que no este vacío
        {   $errorZ = "- Escriba, una nota u observación relacionada con el retiro. "; }


        if (strlen($_POST['nota_text']) >250 )  // no sea mayor a 250 caracteres
              {   $errorZ = "- Nota de retiro supera los 250 caracteres. "; }


        if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                              {
                                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                              
                              }



           
else {
      include("../conectar.php");


      $queryDC = "SELECT * FROM reg_estudiantes, quien_y_cuando_estu
                         WHERE  reg_estudiantes.id_estud = '$_POST[retirar_alumno]'
                          and  quien_y_cuando_estu.id_estud = '$_POST[retirar_alumno]' LIMIT 1 ";
          

                      $resultDC = mysqli_query($enlace,$queryDC);
                      $filaDC=mysqli_fetch_array($resultDC);         // lo anterior me permite tener lo relacionado con el estu
                                                                  
                      $id_filacd_q_y = $filaDC["id_q_y_c_estu"];



        $sql_DES = "UPDATE reg_estudiantes SET retirado_si_o_no = '1'                                        
                                      WHERE id_estud = '$_POST[retirar_alumno]' LIMIT 1 ";
            

                      if (!mysqli_query($enlace,$sql_DES))      // si no ha logrado actualizar
                         {
                          $errorZ="Error al cambiar estado, contactar al Ing.  ";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



                      else {  

                       
             $sql_DES_next = "UPDATE quien_y_cuando_estu SET fecha_retiro = '$_POST[retiro_date]',
                         tex_retiro = '".mysqli_real_escape_string($enlace,$_POST['nota_text'])."'
                                        
                                      WHERE id_q_y_c_estu = '$id_filacd_q_y' LIMIT 1 ";


                      if (!mysqli_query($enlace,$sql_DES_next))      // si no ha logrado actualizar
                         {
                          $errorZ="Error al guardar las observaciones, contactar al Ing.  ";
                          }



                      else { 


                   $exitoZ = "El alumno &nbsp; <b>--&nbsp;  " . $filaDC['nombre_estu'] . " &nbsp;--</b> &nbsp; ha pasado al listado de retirados.";

                      }           // hasta aqui gracias a borrar la direccion al estar en cascada se lleva el contenido del plantel.
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
                              mysqli_close($enlace);                                          
                          }


                 }  
}          

 }







 if(isset($_POST['update_logoX']))
        {   




include("../conectar.php");

$queryKKC = "SELECT * FROM reg_estudiantes WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1";

                      $resultKKC = mysqli_query($enlace,$queryKKC);
                      $filaKK=mysqli_fetch_array($resultKKC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$foto_a_borrar = $filaKK["foto_estu"];


                      if (!empty( $foto_a_borrar )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($foto_a_borrar);


$deleteXX = "UPDATE reg_estudiantes SET foto_estu = '' WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1 ";
$resultXXC = mysqli_query($enlace,$deleteXX);               

             }


mysqli_close($enlace); 



$id_estu_KL = $_POST['id_del_est_UU'];

$exp_estu_KL = $_POST['exp_del_est_UU'];

clearstatcache();
$filenameUPd_fot_ES = '../0 Croppie/foto_estu_update' . $nnn1 . '.png';

$fot_ES_bandera = "0";


          if (file_exists($filenameUPd_fot_ES )) {    // de haber una foto le cambia el nombre y la mueve a otro lugar 

            $fot_ES_bandera = "1";

          $imageXXfot_ES = imagecreatefrompng("../0 Croppie/foto_estu_update". $nnn1 . ".png");  
                           unlink("../0 Croppie/foto_estu_update". $nnn1 . ".png"); 
                           imagejpeg($imageXXfot_ES,"../0 Croppie/foto_estu_update". $nnn1 . ".png",85); // comprimer la imagen           
        

            $extU = 'png';
            /* $newfilename = '../zz_fotos_l/logocropx.png'; */
            $newfilenameUPd_fot_ES = "../zz_fotos_estudiantes/".$id_estu_KL."_".$exp_estu_KL.".".$extU;

             
            if(rename($filenameUPd_fot_ES,$newfilenameUPd_fot_ES))
      {     

      include("../conectar.php");         

          $query_fotoU_E = "UPDATE reg_estudiantes SET foto_estu = '$newfilenameUPd_fot_ES' WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1 ";
          

          if (!mysqli_query($enlace,$query_fotoU_E))      // si no ha logrado ingresar la foto
                   {

         $errorZ="- Foto del estudiante no actualizada. ";

              unlink($newfilenameUPd_fot_ES); 
                        
              mysqli_close($enlace);

                   }

          else {
          
          $exitoZ = "- Foto del estudiante actualizada. ";
          mysqli_close($enlace);  

            }   

             
      }

            else{

              $errorZ="- Error en la foto del estudiante, contactar al Ing. ";
            
             unlink($filenameUPd_fot_ES); 
                         
              mysqli_close($enlace);


            }
          

      

                 }  // cierre de que no hay foto..



              
                if ( $fot_ES_bandera == "0" ) { 

            $errorZ="- No se ha cargado al sistema ninguna imagen. ";  

            }




             if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             
                          }     


                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. "  ";            
                         

                     

                           }



}  // cierre en caso de haber pulsado actualizar fotos





if(isset($_POST['borrarXX']))
    {



include("../conectar.php");

$queryKKC = "SELECT * FROM reg_estudiantes WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1";

                      $resultKKC = mysqli_query($enlace,$queryKKC);
                      $filaKK=mysqli_fetch_array($resultKKC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$foto_a_borrar = $filaKK["foto_estu"];


                      if (!empty( $foto_a_borrar )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($foto_a_borrar);


$deleteXX = "UPDATE reg_estudiantes SET foto_estu = '' WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1 ";
$resultXXC = mysqli_query($enlace,$deleteXX);

               $exitoZ="- Foto del estudiante borrada. ";

             }


              else {

              $errorZ="- El estudiante seleccionado no posee foto.";

             }

mysqli_close($enlace); 

 }




 if(isset($_POST['nomenclaturas']))
        {

$id_donde_guardar = $_POST['id_de_la_asignatura'];


$estado_a = $_POST["estado_a"];
$estado_b = $_POST["estado_b"];
$estado_c = $_POST["estado_c"];
$estado_d = $_POST["estado_d"];
$estado_e = $_POST["estado_e"];
$estado_f = $_POST["estado_f"];
$estado_g = $_POST["estado_g"];
$estado_h = $_POST["estado_h"];
$estado_i = $_POST["estado_i"];
$estado_j = $_POST["estado_j"];
$estado_k = $_POST["estado_k"];
$estado_l = $_POST["estado_l"];
$estado_m = $_POST["estado_m"];
$estado_n = $_POST["estado_n"]; 



$suma_a = $_POST["suma_a"];
$suma_b = $_POST["suma_b"];
$suma_c = $_POST["suma_c"];
$suma_d = $_POST["suma_d"];
$suma_e = $_POST["suma_e"];
$suma_f = $_POST["suma_f"];
$suma_g = $_POST["suma_g"];
$suma_h = $_POST["suma_h"];
$suma_i = $_POST["suma_i"];
$suma_j = $_POST["suma_j"];
$suma_k = $_POST["suma_k"];
$suma_l = $_POST["suma_l"];
$suma_m = $_POST["suma_m"];
$suma_n = $_POST["suma_n"]; 


$a_convertir = $_POST["a_convertir"];
$b_convertir = $_POST["b_convertir"];
$c_convertir = $_POST["c_convertir"];
$d_convertir = $_POST["d_convertir"];
$e_convertir = $_POST["e_convertir"];
$f_convertir = $_POST["f_convertir"];
$g_convertir = $_POST["g_convertir"];
$h_convertir = $_POST["h_convertir"];
$i_convertir = $_POST["i_convertir"];
$j_convertir = $_POST["j_convertir"];
$k_convertir = $_POST["k_convertir"];
$l_convertir = $_POST["l_convertir"];
$m_convertir = $_POST["m_convertir"];
$n_convertir = $_POST["n_convertir"];


if ($a_convertir == '2' or $b_convertir == '2' or $c_convertir == '2' or $d_convertir == '2' or $e_convertir == '2' or $f_convertir == '2' or $g_convertir == '2' or
$h_convertir == '2' or $i_convertir == '2' or $j_convertir == '2' or $k_convertir == '2' or $l_convertir == '2' or $m_convertir == '2' or $n_convertir == '2'  ) {
  
                       $errorZ=" Revise los formatos empleados en una de las Áreas, Asignaturas o Materias - No puede ser Alfabética.";

               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             
                          }

}


else {


include("../conectar.php");


$sql = "UPDATE asignaturas SET a_aaa = '".mysqli_real_escape_string($enlace,$_POST['a_texto'])."'   ,
                               a_abrev = '".mysqli_real_escape_string($enlace,$_POST['a_mini'])."'    ,

                               b_bbb = '".mysqli_real_escape_string($enlace,$_POST['b_texto'])."'   ,
                               b_abrev = '".mysqli_real_escape_string($enlace,$_POST['b_mini'])."'    , 

                               c_ccc = '".mysqli_real_escape_string($enlace,$_POST['c_texto'])."'   ,
                               c_abrev = '".mysqli_real_escape_string($enlace,$_POST['c_mini'])."'    , 

                               d_ddd = '".mysqli_real_escape_string($enlace,$_POST['d_texto'])."'   ,
                               d_abrev = '".mysqli_real_escape_string($enlace,$_POST['d_mini'])."'    ,


                               e_eee = '".mysqli_real_escape_string($enlace,$_POST['e_texto'])."'   ,
                               e_abrev = '".mysqli_real_escape_string($enlace,$_POST['e_mini'])."'    ,

                               f_fff = '".mysqli_real_escape_string($enlace,$_POST['f_texto'])."'   ,
                               f_abrev = '".mysqli_real_escape_string($enlace,$_POST['f_mini'])."'    , 

                               g_ggg = '".mysqli_real_escape_string($enlace,$_POST['g_texto'])."'   ,
                               g_abrev = '".mysqli_real_escape_string($enlace,$_POST['g_mini'])."'    , 

                               h_hhh = '".mysqli_real_escape_string($enlace,$_POST['h_texto'])."'   ,
                               h_abrev = '".mysqli_real_escape_string($enlace,$_POST['h_mini'])."'    ,


                               i_iii = '".mysqli_real_escape_string($enlace,$_POST['i_texto'])."'   ,
                               i_abrev = '".mysqli_real_escape_string($enlace,$_POST['i_mini'])."'    ,

                               j_jjj = '".mysqli_real_escape_string($enlace,$_POST['j_texto'])."'   ,
                               j_abrev = '".mysqli_real_escape_string($enlace,$_POST['j_mini'])."'    , 

                               k_kkk = '".mysqli_real_escape_string($enlace,$_POST['k_texto'])."'   ,
                               k_abrev = '".mysqli_real_escape_string($enlace,$_POST['k_mini'])."'    , 

                               l_lll = '".mysqli_real_escape_string($enlace,$_POST['l_texto'])."'   ,
                               l_abrev = '".mysqli_real_escape_string($enlace,$_POST['l_mini'])."'  ,  

                               m_mmm = '".mysqli_real_escape_string($enlace,$_POST['m_texto'])."'   ,
                               m_abrev = '".mysqli_real_escape_string($enlace,$_POST['m_mini'])."'  ,     

                               n_nnn = '".mysqli_real_escape_string($enlace,$_POST['n_texto'])."'   ,
                               n_abrev = '".mysqli_real_escape_string($enlace,$_POST['n_mini'])."',

                               a_estado = '$estado_a', b_estado = '$estado_b', c_estado = '$estado_c', d_estado = '$estado_d',
                               e_estado = '$estado_e', f_estado = '$estado_f', g_estado = '$estado_g', h_estado = '$estado_h',
                               i_estado = '$estado_i', j_estado = '$estado_j', k_estado = '$estado_k', l_estado = '$estado_l',
                               m_estado = '$estado_m', n_estado = '$estado_n',


                               a_suma = '$suma_a', b_suma = '$suma_b', c_suma = '$suma_c', d_suma = '$suma_d',
                               e_suma = '$suma_e', f_suma = '$suma_f', g_suma = '$suma_g', h_suma = '$suma_h',
                               i_suma = '$suma_i', j_suma = '$suma_j', k_suma = '$suma_k', l_suma = '$suma_l',
                               m_suma = '$suma_m', n_suma = '$suma_n',

                               a_convertir = '$a_convertir', b_convertir = '$b_convertir', c_convertir = '$c_convertir',
                               d_convertir = '$d_convertir', e_convertir = '$e_convertir', f_convertir = '$f_convertir',
                               g_convertir = '$g_convertir', h_convertir = '$h_convertir', i_convertir = '$i_convertir',
                               j_convertir = '$j_convertir', k_convertir = '$k_convertir', l_convertir = '$l_convertir',
                               m_convertir = '$m_convertir', n_convertir = '$n_convertir'
                             
                            WHERE id_asign ='$id_donde_guardar' ";



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
                     $exitoZ = "Abreviaturas, Estados y Nomenclaturas actualizadas."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }



}



        }







 if(isset($_POST['status_all_actividades']))
        {
  

 $el_estatus_a1 = $_POST['comp_actividad1'];
 $el_estatus_a2 = $_POST['comp_actividad2'];
 $el_estatus_a3 = $_POST['comp_actividad3'];
 $el_estatus_a4 = $_POST['comp_actividad4'];
 $el_estatus_a5 = $_POST['comp_actividad5'];
 $el_estatus_a6 = $_POST['comp_actividad6'];
 $el_estatus_a7 = $_POST['comp_actividad7'];   

  $hide_1 = $_POST['hide_1']; 
   $hide_2 = $_POST['hide_2']; 
    $hide_3 = $_POST['hide_3']; 



  $mostrar_boleta_unott = $_POST['show_boleta_1']; 

$mostrar_boleta_dostt = 'No';
$mostrar_boleta_trestt = 'No';

   $mostrar_boleta_dostt_principal = $_POST['show_boleta_2']; 

          if ($mostrar_boleta_dostt_principal == 'Si') {
              $mostrar_boleta_unott = 'Si';
              $mostrar_boleta_dostt = 'Si';
              }

    $mostrar_boleta_trestt_principal = $_POST['show_boleta_3']; 

              if ($mostrar_boleta_trestt_principal == 'Si') {
              $mostrar_boleta_unott = 'Si';
              $mostrar_boleta_dostt = 'Si';
              $mostrar_boleta_trestt = 'Si';
              }




 $el_grado_esttmm = $_POST['en_este_ok'];



              
      include("../conectar.php");



 $sql88a = "UPDATE grados SET actividad1 = '$el_estatus_a1',
                              actividad2 = '$el_estatus_a2',
                              actividad3 = '$el_estatus_a3',
                              actividad4 = '$el_estatus_a4',
                              actividad5 = '$el_estatus_a5',
                              actividad6 = '$el_estatus_a6',
                              actividad7 = '$el_estatus_a7',
                              ocultar_1er_porcent = '$hide_1',
                              ocultar_2do_porcent = '$hide_2',
                              ocultar_3er_porcent = '$hide_3',
                              mostrar_boleta_uno = '$mostrar_boleta_unott',
                              mostrar_boleta_dos = '$mostrar_boleta_dostt',
                              mostrar_boleta_tres = '$mostrar_boleta_trestt'


                                WHERE id_grado ='$el_grado_esttmm' ";

                       
            if (!mysqli_query($enlace,$sql88a))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }

               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }
            else{
                     $exitoZ = "Permisos carga de nota por actividad, Visibilidad de Porcentajes y Vista de Boletas actualizados. "; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
     
    } // cierre if en caso de actualizar  el estatus de las pre o de las inscripciones











 if(isset($_POST['status_lapsos']))
        {
  
        include("../conectar.php");

         $id_col =  $_POST["id_del_graooo"]; 

         $aaa =  $_POST["1er_L_status"];
         $bbb =  $_POST["2do_L_status"]; 
         $ccc =  $_POST["3er_L_status"];
         $ddd =  $_POST["ver_retirados"];

         $hhh =  $_POST["ver_corte_final"];
         $iii =  $_POST["ver_tipo_boleta"];    

         $historial =  $_POST["ver_historial"]; 
         $profesor =  $_POST["ver_profesor"];
  
   
if ($la_seccionXX == 1) {

   $sqlWEB = "UPDATE grados SET activo_a = '$aaa' ,
                                activo_b = '$bbb' ,
                                activo_c = '$ccc' ,
                                ver_reti = '$ddd' ,
                                ver_corte_finn =  '$hhh',
                                ver_tipo_boleta =  '$iii',
                                tipo_de_carga = '$historial',
                                el_profesor_es_a = '$profesor'

                                WHERE id_grado ='$id_col' ";


 }

 
if ($la_seccionXX == 2) {   $sqlWEB = "UPDATE grados SET activo_a = '$aaa' ,
                                activo_b = '$bbb' ,
                                activo_c = '$ccc' ,
                                ver_reti = '$ddd' ,
                                ver_corte_finn =  '$hhh',
                                ver_tipo_boleta =  '$iii',
                                tipo_de_carga = '$historial',
                                el_profesor_es_b = '$profesor'


                                WHERE id_grado ='$id_col' "; }



if ($la_seccionXX == 9) {   $sqlWEB = "UPDATE grados SET activo_a = '$aaa' ,
                                activo_b = '$bbb' ,
                                activo_c = '$ccc' ,
                                ver_reti = '$ddd' ,
                                ver_corte_finn =  '$hhh',
                                ver_tipo_boleta =  '$iii',
                                tipo_de_carga = '$historial',
                                el_profesor_es_u = '$profesor'

                                WHERE id_grado ='$id_col' ";}

if ($la_seccionXX == 11) {   $sqlWEB = "UPDATE grados SET activo_a = '$aaa' ,
                                activo_b = '$bbb' ,
                                activo_c = '$ccc' ,
                                ver_reti = '$ddd' ,
                                ver_corte_finn =  '$hhh',
                                ver_tipo_boleta =  '$iii',
                                tipo_de_carga = '$historial',
                                el_profesor_es_c = '$profesor'

                                WHERE id_grado ='$id_col' "; }

if ($la_seccionXX == 12) {   $sqlWEB = "UPDATE grados SET activo_a = '$aaa' ,
                                activo_b = '$bbb' ,
                                activo_c = '$ccc' ,
                                ver_reti = '$ddd' ,
                                ver_corte_finn =  '$hhh',
                                ver_tipo_boleta =  '$iii',
                                tipo_de_carga = '$historial',
                                el_profesor_es_d = '$profesor'

                                WHERE id_grado ='$id_col' "; }

if ($la_seccionXX == 13) {   $sqlWEB = "UPDATE grados SET activo_a = '$aaa' ,
                                activo_b = '$bbb' ,
                                activo_c = '$ccc' ,
                                ver_reti = '$ddd' ,
                                ver_corte_finn =  '$hhh',
                                ver_tipo_boleta =  '$iii',
                                tipo_de_carga = '$historial',
                                el_profesor_es_e = '$profesor'

                                WHERE id_grado ='$id_col' "; }

if ($la_seccionXX == 14) {   $sqlWEB = "UPDATE grados SET activo_a = '$aaa' ,
                                activo_b = '$bbb' ,
                                activo_c = '$ccc' ,
                                ver_reti = '$ddd' ,
                                ver_corte_finn =  '$hhh',
                                ver_tipo_boleta =  '$iii',
                                tipo_de_carga = '$historial',
                                el_profesor_es_f = '$profesor'

                                WHERE id_grado ='$id_col' "; }

if ($la_seccionXX == 15) {   $sqlWEB = "UPDATE grados SET activo_a = '$aaa' ,
                                activo_b = '$bbb' ,
                                activo_c = '$ccc' ,
                                ver_reti = '$ddd' ,
                                ver_corte_finn =  '$hhh',
                                ver_tipo_boleta =  '$iii',
                                tipo_de_carga = '$historial',
                                el_profesor_es_g = '$profesor'

                                WHERE id_grado ='$id_col' "; }

                       
            if (!mysqli_query($enlace,$sqlWEB))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Estado de los Lapsos Actualizados."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
                      


        

    } // cierre if en caso de actualizar  la www 













?>



<?php include ("Header.php"); 

include ("../conectar.php"); 



/* $query = "SELECT reg_estudiantes.id_estud, reg_estudiantes.nombre_estu, reg_estudiantes.apellidos_estu, reg_estudiantes.nacimiento_estu, reg_estudiantes.id_sexo, reg_estudiantes.foto_estu
reg_estudiantes.retirado_si_o_no, reg_estudiantes.nota_1, reg_estudiantes.nota_2, reg_estudiantes.nota_3, reg_estudiantes.nota_4,
reg_estudiantes.cla_1, reg_estudiantes.cla_2, reg_estudiantes.cla_3, reg_estudiantes.cla_4, divisiones.*, grados.id_grado, grados.nombre_grados, grados.id_division,
reg_estu_actual.id_reg_estu_actual, reg_estu_actual.id_estud, reg_estu_actual.cursa_actualmente, reg_estu_actual.grados, reg_estu_actual.fecha_inscripcion, reg_estu_actual.edad_actual,
reg_estu_actual.id_seccion, reg_estu_actual.el_activo FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$la_seccionXX'
         and  fecha_inscripcion != ''
         and  cursa_actualmente = '$el_cicloXX'

         and  grados.id_grado = '$el_gradoXX' 


                 
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;   */


 $query = "SELECT reg_estudiantes.id_estud, reg_estudiantes.estu_expediente, reg_estudiantes.ci_estu, reg_estudiantes.nombre_estu, reg_estudiantes.apellidos_estu, reg_estudiantes.nacimiento_estu, reg_estudiantes.id_sexo, reg_estudiantes.foto_estu,
reg_estudiantes.retirado_si_o_no, reg_estudiantes.nota_1, reg_estudiantes.nota_2, reg_estudiantes.nota_3, reg_estudiantes.nota_4,
reg_estudiantes.cla_1, reg_estudiantes.cla_2, reg_estudiantes.cla_3, reg_estudiantes.cla_4, divisiones.*, grados.id_grado, grados.nombre_grados, grados.id_division,
reg_estu_actual.id_reg_estu_actual, reg_estu_actual.id_estud, reg_estu_actual.cursa_actualmente, reg_estu_actual.grado_actual, reg_estu_actual.fecha_inscripcion, 
reg_estu_actual.id_seccion, reg_estu_actual.el_activo FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual       
         and  id_seccion = '$la_seccionXX'
         and  fecha_inscripcion != ''
         and  cursa_actualmente = '$el_cicloXX'

         and  grados.id_grado = '$el_gradoXX' 


                 
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;  



$datos_control = mysqli_query($enlace, $query) or die(mysqli_error());
$row_datos_control = mysqli_fetch_array($datos_control); 
$totalRows_control = mysqli_num_rows($datos_control); 




$queryF = "SELECT reg_estudiantes.id_estud, reg_estudiantes.id_sexo, 
reg_estudiantes.retirado_si_o_no, divisiones.*, grados.id_grado, grados.id_division,
reg_estu_actual.id_reg_estu_actual, reg_estu_actual.id_estud, reg_estu_actual.cursa_actualmente, reg_estu_actual.grado_actual, reg_estu_actual.fecha_inscripcion, 
reg_estu_actual.id_seccion, reg_estu_actual.el_activo FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual   
         and  id_seccion = '$la_seccionXX'
         and  fecha_inscripcion != ''
         and  cursa_actualmente = '$el_cicloXX'
         and  grados.id_grado = '$el_gradoXX'         
      /*   and retirado_si_o_no = '0'  */
          and id_sexo = '1'        
         GROUP BY reg_estudiantes.id_estud";

$datos_controlF = mysqli_query($enlace, $queryF) or die(mysqli_error());

$totalRows_controlF = mysqli_num_rows($datos_controlF); 



$totalRows_controlM = $totalRows_control - $totalRows_controlF;









$query_z_puntaje = "SELECT * FROM z_puntaje where pt_selecc = '1' LIMIT 1";

$datos_z_puntaje = mysqli_query($enlace, $query_z_puntaje) or die(mysqli_error());

$row_datos_z_puntaje = mysqli_fetch_array($datos_z_puntaje );

$la_mitad_es = $row_datos_z_puntaje['el_puntaje']/2;

$el_puntaje_completo_es = $row_datos_z_puntaje['el_puntaje'];

$el_puntaje_aprobatorio_aprox = $row_datos_z_puntaje['el_aproximado'];

$el_id_puntaje_es = $row_datos_z_puntaje['id_puntaje'];


mysqli_close($enlace);

?>  









<div class="se-pre-con"></div>


<div class="content-wrapper">
  <div class="container-fluid">

    <div class="form-row">  


          <div class="col-md-4 col-lg-4 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i><b><?php echo $tituloJKL; ?> &nbsp; -  &nbsp;&nbsp;&nbsp;<i class="fas fa-female"></i> : <?php echo $totalRows_controlF; ?>&nbsp;&nbsp; / &nbsp;&nbsp;&nbsp;<i class="fas fa-male"></i> : <?php echo $totalRows_controlM; ?></b> </i>  
             </div>        
 
          </div>


          <div class="col-md-8 col-lg-8 mb-2">
          

          <?php 
              if ($errorZ!="")
              { echo "<div class=\"input-group-text alert-danger text-truncate\" id=\"basic-addon1\" role=\"alert\" align=\"center\" >".$errorZ."</div>"; }


              if ($exitoZ!="")
              { echo "<div class=\"input-group-text alert-success text-truncate\" role=\"basic-addon1\" role=\"alert\" align=\"center\">".$exitoZ."</div>"; }
            ?>
                                   <!-- SOLO ES VISIBLE SI LA VARIABLE DE ÉXITO TIENE ALGO-->


                </div> 


     



    </div>

   

  <div class="form-row ml-1">

<div data-toggle="tooltip" data-placement="top" title="Imprimir Lista" >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-primary mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Imprimir Lista" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-primary btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>


















<!-- seccion de correos -->




<div data-toggle="tooltip" data-placement="top" title="Lista con correos" >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_correo.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-dark mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           @&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista con correos" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_correo.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-dark btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           @&nbsp;&nbsp; "Oficio"</button>


</form> </div>











<div data-toggle="tooltip" data-placement="top" title="Lista Evaluación Vacía" >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_mod.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-danger mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fab fa-searchengin fa-lg"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista Evaluación Vacía" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_mod.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-danger btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fab fa-searchengin fa-lg"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>




<!-- listado evauaciones puntuales -->




<div data-toggle="tooltip" data-placement="top" title="Lista Evaluación Puntual" >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_evaluaciones.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-warning mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fab fa-audible"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista Evaluación Puntual" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_evaluaciones.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-warning btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fab fa-audible"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>



<div data-toggle="tooltip" data-placement="top" title="Listado con datos importantes" >
<form target="_blank" action="zzz_impresiones/imp_cart_datos_plus.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_cart_datos_horizontal_plus" id="imp_cart_datos_horizontal_plus" class="btn btn-success mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta - <i class="fas fa-birthday-cake"></i> <i class="fas fa-phone"></i>"</button>


</form></div>



<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Listado con datos importantes" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_plus.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_horizontal_plus" id="imp_ofi_datos_horizontal_plus" class="btn btn-success btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?>   >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-birthday-cake"></i> <i class="fas fa-phone"></i>"</button>


</form></div>





<div data-toggle="tooltip" data-placement="top" title="Global 1er Lapso"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_mod_global_lapso.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="1°">



          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fas fa-battery-quarter fa-lg"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Global 1er Lapso"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_mod_global_lapso.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="1°">



          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fas fa-battery-quarter fa-lg"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>








<div data-toggle="tooltip" data-placement="top" title="Global 2do Lapso"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_mod_global_lapso.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="2°">



          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fas fa-battery-half fa-lg"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Global 2do Lapso"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_mod_global_lapso.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="2°">



          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fas fa-battery-half fa-lg"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>








<div data-toggle="tooltip" data-placement="top" title="Global 3er Lapso"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_mod_global_lapso.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="3°">



          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fas fa-battery-three-quarters fa-lg"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Global 3er Lapso"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_mod_global_lapso.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="3°">



          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fas fa-battery-three-quarters fa-lg"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>














<div data-toggle="tooltip" data-placement="top" title="Global Definitivas  Sin Aux Final"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_mod_global_definitiva.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="Def">



          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fas fa-battery-full fa-lg"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Global Definitivas Sin Aux Final"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_mod_global_definitiva.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="Def°">



          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fas fa-battery-full fa-lg"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>




<div class="mr-1" data-toggle="tooltip" data-placement="top" title="1° Resumen de Actividades"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

 <form target="_blank" action="zzz_impresiones/resumen_de_actividades.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="1°">



          <button type="submit" name="imp_carta_resumen" id="imp_carta_resumen" class="btn btn-success mr-1 mb-1 btn_sizes" > 
           <i class="fas fa-thermometer-quarter fa-lg"></i>&nbsp;&nbsp; "Oficio"</button>

</form> </div>









<div class="mr-1" data-toggle="tooltip" data-placement="top" title="2° Resumen de Actividades"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

 <form target="_blank" action="zzz_impresiones/resumen_de_actividades.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="2°">


          <button type="submit" name="imp_carta_resumen" id="imp_carta_resumen" class="btn btn-success mr-1 mb-1 btn_sizes" >
           <i class="fas fa-thermometer-half fa-lg"></i>&nbsp;&nbsp; "Oficio"</button>

</form> </div>

 

<div class="mr-1" data-toggle="tooltip" data-placement="top" title="3° Resumen de Actividades"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

 <form target="_blank" action="zzz_impresiones/resumen_de_actividades.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="3°">


          <button type="submit" name="imp_carta_resumen" id="imp_carta_resumen" class="btn btn-success mr-1 mb-1 btn_sizes" >
           <i class="fas fa-thermometer-full fa-lg"></i>&nbsp;&nbsp; "Oficio"</button>

</form> </div>



<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista Evaluación Simple" >  

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_mod_simple.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-danger mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="far fa-folder-open fa-lg"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista Evaluación Simple" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_mod_simple.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-danger btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="far fa-folder-open fa-lg"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>









<div data-toggle="tooltip" data-placement="top" title="Global Definitivas Detallado Sin Aux Final"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_mod_global_definitiva_detallado.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="Def">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-warning mr-1 mb-1 btn_sizes" >
           <i class="fas fa-list-ol fa-lg"></i>&nbsp;&nbsp; "Revisar"</button>  

</form> </div>



<div data-toggle="tooltip" data-placement="top" title="Global Definitivas Detallado Sin Aux Final + Notas de Revisión"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_mod_global_definitiva_detallado_plus.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="Def">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-dark mr-1 mb-1 btn_sizes" >  
           <i class="fas fa-check-double fa-lg"></i>&nbsp;&nbsp; "Revisar Plus"</button>  

</form> </div>




<div class="mr-1" data-toggle="tooltip" data-placement="top" title="1° Resumen / Puntaje"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

 <form target="_blank" action="zzz_impresiones/resumen_de_actividades_alte.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="1°">



          <button type="submit" name="imp_carta_resumen" id="imp_carta_resumen" class="btn btn-primary mr-1 mb-1 btn_sizes" > 
           <i class="far fa-hand-rock fa-lg"></i>&nbsp;&nbsp; "Oficio"</button>   

</form> </div>






<div class="mr-1" data-toggle="tooltip" data-placement="top" title="2° Resumen / Puntaje"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

 <form target="_blank" action="zzz_impresiones/resumen_de_actividades_alte.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="2°">


          <button type="submit" name="imp_carta_resumen" id="imp_carta_resumen" class="btn btn-primary mr-1 mb-1 btn_sizes" >
           <i class="far fa-hand-scissors fa-lg"></i>&nbsp;&nbsp; "Oficio"</button> 

</form> </div>

 

<div class="mr-1" data-toggle="tooltip" data-placement="top" title="3° Resumen / Puntaje"  <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

 <form target="_blank" action="zzz_impresiones/resumen_de_actividades_alte.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="3°">


          <button type="submit" name="imp_carta_resumen" id="imp_carta_resumen" class="btn btn-primary mr-1 mb-1 btn_sizes" >
           <i class="far fa-hand-spock fa-lg"></i>&nbsp;&nbsp; "Oficio"</button> 

</form> </div>












</div>   <!-- cierre del bloque general -->


 <div class="ml-1" <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

          





           <form target="_blank"  action="zzz_impresiones/imp_boletas_des.php" method="POST">


           <div class="form-row">

   <input type="hidden"  id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden"  id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden"  id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden"  id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden"  id="id_lapsoxxx"  name="id_lapsoxxx"  value="Def">

    


          <div class="input-group col-md-8 mt-2 ">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-secondary" id="basic-addon1"><i><b>Boleta (Descriptiva 1° Momento - Lapso) desde el N°:</b></i></span>  
                  </div>
<input type="text"  onkeypress="return GFG_Fun(this, event)" maxlength="2" class="form-control" id="desdeeee_des" name="desdeeee_des" required>
                   
                   <span class="input-group-addon alert-success" id="basic-addon1"><i>&nbsp;&nbsp;_ &nbsp;&nbsp;</i></span>

<input type="text"  onkeypress="return GFG_Fun(this, event)" maxlength="2" class="form-control" id="hastaaaa_des" name="hastaaaa_des" required> 
                    
          </div>


            <div class="col-md-2 mt-2 ">

<!-- incluir input hide del lapso -->

            <button type="submit" name="imp_cartab_des"  class="btn btn-success btn-block">
            <i class="fab fa-d-and-d fa-lg"></i>&nbsp; "1° Boleta"</button>

            </div>            

            

        </div><!-- cierre row -->


        </form>





        <form target="_blank"  action="zzz_impresiones/imp_boletas_des_b.php" method="POST">


           <div class="form-row">

   <input type="hidden"  id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden"  id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden"  id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden"  id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden"  id="id_lapsoxxx"  name="id_lapsoxxx"  value="Def">

    


          <div class="input-group col-md-8 mt-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-secondary" id="basic-addon1"><i><b>Boleta (Descriptiva 2° Momento - Lapso) desde el N°:</b></i></span>  
                  </div>
<input type="text"  onkeypress="return GFG_Fun(this, event)" maxlength="2" class="form-control" id="desdeeee_des" name="desdeeee_des" required>
                   
                   <span class="input-group-addon alert-info" id="basic-addon1"><i>&nbsp;&nbsp;_ &nbsp;&nbsp;</i></span>

<input type="text"  onkeypress="return GFG_Fun(this, event)" maxlength="2" class="form-control" id="hastaaaa_des" name="hastaaaa_des" required> 
                    
          </div>


          
             <div class="col-md-2 mt-1">

            <button type="submit" name="imp_cartab_des_b"  class="btn btn-info btn-block">
            <i class="fab fa-d-and-d fa-lg"></i>&nbsp; "2° Boleta"</button>

            </div>

            
            

        </div><!-- cierre row -->


        </form>





         <form target="_blank"  action="zzz_impresiones/imp_boletas_des_c.php" method="POST">


           <div class="form-row">

   <input type="hidden"  id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden"  id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden"  id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden"  id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">
    <input type="hidden"  id="id_lapsoxxx"  name="id_lapsoxxx"  value="Def">

    


          <div class="input-group col-md-8 mt-1 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-secondary" id="basic-addon1"><i><b>Boleta (Descriptiva 3° Momento - Lapso) desde el N°:</b></i></span>  
                  </div>
<input type="text"  onkeypress="return GFG_Fun(this, event)" maxlength="2" class="form-control" id="desdeeee_des" name="desdeeee_des" required>
                   
                   <span class="input-group-addon alert-dark" id="basic-addon1"><i>&nbsp;&nbsp;_ &nbsp;&nbsp;</i></span>

<input type="text"  onkeypress="return GFG_Fun(this, event)" maxlength="2" class="form-control" id="hastaaaa_des" name="hastaaaa_des" required> 
                    
          </div>
          
          

             <div class="col-md-2 mt-1 mb-3">

            <button type="submit" name="imp_cartab_des_c"  class="btn btn-dark btn-block">
            <i class="fab fa-d-and-d fa-lg"></i>&nbsp; "3° Boleta"</button>

            </div>


            

        </div><!-- cierre row -->


        </form>




</div>   








<div class="form-row">







<div class="col-md-12 col-lg-12 ml-1 mb-1" <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> >

            <div class="input-group-text alert-info text-left text-truncate" role="alert" id="basic-addon1">
          
    <span id="GFG_DOWN" 
       style="font-size: 14px; 
              font-weight: bold;  
              color: red; "> 
    </span> 

  <span  ><b>"Imprimir las boletas en grupos no mayores a 20 estudiantes;</b> Imprimir en grupos mayores si el servidor lo soporta."</span>

             </div>     

</div> 
</div>










<div class="card border-success mt-3" <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?>  >
  <div class="card-body">


<div class="alert alert-dark" role="alert">
  <b>¡IMPORTANTE!:</b> Si alguna o varias secciones de un mismo grado-nivel, difieren en una materia o asignatura, ubicar dicha materia o asignatura en los últimos espacios y <b>que esten disponibles</b>. <br> <b>El orden y disposición de las asignaturas se mantiene entre las secciones de un mismo grado o nivel</b>, por lo que solo es necesario actualizar o modificar en una sola sección o nivel; Si el orden aqui presentado presenta error y previamente se han cargado notas, en caso de actualizarlo sera necesario cargar las notas desde cero, en todos los lapsos.

  <br class="mt-1"> <b>Las Abreviaturas no pueden contener espacios, de ser necesario considere usar guion de piso; Ejemp: E._Fís. para Educación Física en vez de usar E.Fís.</b>

  <br class="mt-1"> <b>Bloquear o permitir</b> la carga de notas a una materia, afectara a dicha materia en todas las secciones del mismo año, grado o nivel.
</div>



<?php

include("../conectar.php");


$queryasignaturas = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura         
         
         and  asignatura_ciclo_grado.id_del_ciclo = $el_cicloXX
         and  asignatura_ciclo_grado.id_del_grado = $el_gradoXX
                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign = mysqli_query($enlace, $queryasignaturas) or die(mysqli_error());
$row_datos_controlasign = mysqli_fetch_array($datos_controlasign); 
$totalRows_controlasign = mysqli_num_rows($datos_controlasign); 
$las_asignaturas = $row_datos_controlasign["id_asignatura"];




$por_por = $el_puntaje_completo_es/100;  


$porcentaje_A1_L1_N1 = $row_datos_controlasign["A11"] * $por_por;        
$porcentaje_A1_L1_N2 = $row_datos_controlasign["A12"] * $por_por; 
$porcentaje_A1_L1_N3 = $row_datos_controlasign["A13"] * $por_por; 
$porcentaje_A1_L1_N4 = $row_datos_controlasign["A14"] * $por_por; 
$porcentaje_A1_L1_N5 = $row_datos_controlasign["A15"] * $por_por; 
$porcentaje_A1_L1_N6 = $row_datos_controlasign["A16"] * $por_por; 
$porcentaje_A1_L1_N7 = $row_datos_controlasign["A17"] * $por_por; 
$porcentaje_A1_L2_N1 = $row_datos_controlasign["A21"] * $por_por; 
$porcentaje_A1_L2_N2 = $row_datos_controlasign["A22"] * $por_por; 
$porcentaje_A1_L2_N3 = $row_datos_controlasign["A23"] * $por_por; 
$porcentaje_A1_L2_N4 = $row_datos_controlasign["A24"] * $por_por; 
$porcentaje_A1_L2_N5 = $row_datos_controlasign["A25"] * $por_por; 
$porcentaje_A1_L2_N6 = $row_datos_controlasign["A26"] * $por_por; 
$porcentaje_A1_L2_N7 = $row_datos_controlasign["A27"] * $por_por;
$porcentaje_A1_L3_N1 = $row_datos_controlasign["A31"] * $por_por; 
$porcentaje_A1_L3_N2 = $row_datos_controlasign["A32"] * $por_por; 
$porcentaje_A1_L3_N3 = $row_datos_controlasign["A33"] * $por_por; 
$porcentaje_A1_L3_N4 = $row_datos_controlasign["A34"] * $por_por; 
$porcentaje_A1_L3_N5 = $row_datos_controlasign["A35"] * $por_por; 
$porcentaje_A1_L3_N6 = $row_datos_controlasign["A36"] * $por_por; 
$porcentaje_A1_L3_N7 = $row_datos_controlasign["A37"] * $por_por; 

$porcentaje_A2_L1_N1 = $row_datos_controlasign["B11"] * $por_por;        
$porcentaje_A2_L1_N2 = $row_datos_controlasign["B12"] * $por_por; 
$porcentaje_A2_L1_N3 = $row_datos_controlasign["B13"] * $por_por; 
$porcentaje_A2_L1_N4 = $row_datos_controlasign["B14"] * $por_por; 
$porcentaje_A2_L1_N5 = $row_datos_controlasign["B15"] * $por_por; 
$porcentaje_A2_L1_N6 = $row_datos_controlasign["B16"] * $por_por; 
$porcentaje_A2_L1_N7 = $row_datos_controlasign["B17"] * $por_por; 
$porcentaje_A2_L2_N1 = $row_datos_controlasign["B21"] * $por_por; 
$porcentaje_A2_L2_N2 = $row_datos_controlasign["B22"] * $por_por; 
$porcentaje_A2_L2_N3 = $row_datos_controlasign["B23"] * $por_por; 
$porcentaje_A2_L2_N4 = $row_datos_controlasign["B24"] * $por_por; 
$porcentaje_A2_L2_N5 = $row_datos_controlasign["B25"] * $por_por; 
$porcentaje_A2_L2_N6 = $row_datos_controlasign["B26"] * $por_por; 
$porcentaje_A2_L2_N7 = $row_datos_controlasign["B27"] * $por_por;
$porcentaje_A2_L3_N1 = $row_datos_controlasign["B31"] * $por_por; 
$porcentaje_A2_L3_N2 = $row_datos_controlasign["B32"] * $por_por; 
$porcentaje_A2_L3_N3 = $row_datos_controlasign["B33"] * $por_por; 
$porcentaje_A2_L3_N4 = $row_datos_controlasign["B34"] * $por_por; 
$porcentaje_A2_L3_N5 = $row_datos_controlasign["B35"] * $por_por; 
$porcentaje_A2_L3_N6 = $row_datos_controlasign["B36"] * $por_por; 
$porcentaje_A2_L3_N7 = $row_datos_controlasign["B37"] * $por_por;

$porcentaje_A3_L1_N1 = $row_datos_controlasign["C11"] * $por_por;        
$porcentaje_A3_L1_N2 = $row_datos_controlasign["C12"] * $por_por; 
$porcentaje_A3_L1_N3 = $row_datos_controlasign["C13"] * $por_por; 
$porcentaje_A3_L1_N4 = $row_datos_controlasign["C14"] * $por_por; 
$porcentaje_A3_L1_N5 = $row_datos_controlasign["C15"] * $por_por; 
$porcentaje_A3_L1_N6 = $row_datos_controlasign["C16"] * $por_por; 
$porcentaje_A3_L1_N7 = $row_datos_controlasign["C17"] * $por_por;
$porcentaje_A3_L2_N1 = $row_datos_controlasign["C21"] * $por_por; 
$porcentaje_A3_L2_N2 = $row_datos_controlasign["C22"] * $por_por; 
$porcentaje_A3_L2_N3 = $row_datos_controlasign["C23"] * $por_por; 
$porcentaje_A3_L2_N4 = $row_datos_controlasign["C24"] * $por_por; 
$porcentaje_A3_L2_N5 = $row_datos_controlasign["C25"] * $por_por; 
$porcentaje_A3_L2_N6 = $row_datos_controlasign["C26"] * $por_por; 
$porcentaje_A3_L2_N7 = $row_datos_controlasign["C27"] * $por_por; 
$porcentaje_A3_L3_N1 = $row_datos_controlasign["C31"] * $por_por; 
$porcentaje_A3_L3_N2 = $row_datos_controlasign["C32"] * $por_por; 
$porcentaje_A3_L3_N3 = $row_datos_controlasign["C33"] * $por_por; 
$porcentaje_A3_L3_N4 = $row_datos_controlasign["C34"] * $por_por; 
$porcentaje_A3_L3_N5 = $row_datos_controlasign["C35"] * $por_por; 
$porcentaje_A3_L3_N6 = $row_datos_controlasign["C36"] * $por_por; 
$porcentaje_A3_L3_N7 = $row_datos_controlasign["C37"] * $por_por;  

$porcentaje_A4_L1_N1 = $row_datos_controlasign["D11"] * $por_por;        
$porcentaje_A4_L1_N2 = $row_datos_controlasign["D12"] * $por_por; 
$porcentaje_A4_L1_N3 = $row_datos_controlasign["D13"] * $por_por; 
$porcentaje_A4_L1_N4 = $row_datos_controlasign["D14"] * $por_por; 
$porcentaje_A4_L1_N5 = $row_datos_controlasign["D15"] * $por_por; 
$porcentaje_A4_L1_N6 = $row_datos_controlasign["D16"] * $por_por; 
$porcentaje_A4_L1_N7 = $row_datos_controlasign["D17"] * $por_por;
$porcentaje_A4_L2_N1 = $row_datos_controlasign["D21"] * $por_por; 
$porcentaje_A4_L2_N2 = $row_datos_controlasign["D22"] * $por_por; 
$porcentaje_A4_L2_N3 = $row_datos_controlasign["D23"] * $por_por; 
$porcentaje_A4_L2_N4 = $row_datos_controlasign["D24"] * $por_por; 
$porcentaje_A4_L2_N5 = $row_datos_controlasign["D25"] * $por_por; 
$porcentaje_A4_L2_N6 = $row_datos_controlasign["D26"] * $por_por; 
$porcentaje_A4_L2_N7 = $row_datos_controlasign["D27"] * $por_por;
$porcentaje_A4_L3_N1 = $row_datos_controlasign["D31"] * $por_por; 
$porcentaje_A4_L3_N2 = $row_datos_controlasign["D32"] * $por_por; 
$porcentaje_A4_L3_N3 = $row_datos_controlasign["D33"] * $por_por; 
$porcentaje_A4_L3_N4 = $row_datos_controlasign["D34"] * $por_por; 
$porcentaje_A4_L3_N5 = $row_datos_controlasign["D35"] * $por_por; 
$porcentaje_A4_L3_N6 = $row_datos_controlasign["D36"] * $por_por; 
$porcentaje_A4_L3_N7 = $row_datos_controlasign["D37"] * $por_por; 

$porcentaje_A5_L1_N1 = $row_datos_controlasign["E11"] * $por_por;        
$porcentaje_A5_L1_N2 = $row_datos_controlasign["E12"] * $por_por; 
$porcentaje_A5_L1_N3 = $row_datos_controlasign["E13"] * $por_por; 
$porcentaje_A5_L1_N4 = $row_datos_controlasign["E14"] * $por_por; 
$porcentaje_A5_L1_N5 = $row_datos_controlasign["E15"] * $por_por; 
$porcentaje_A5_L1_N6 = $row_datos_controlasign["E16"] * $por_por; 
$porcentaje_A5_L1_N7 = $row_datos_controlasign["E17"] * $por_por;
$porcentaje_A5_L2_N1 = $row_datos_controlasign["E21"] * $por_por; 
$porcentaje_A5_L2_N2 = $row_datos_controlasign["E22"] * $por_por; 
$porcentaje_A5_L2_N3 = $row_datos_controlasign["E23"] * $por_por; 
$porcentaje_A5_L2_N4 = $row_datos_controlasign["E24"] * $por_por; 
$porcentaje_A5_L2_N5 = $row_datos_controlasign["E25"] * $por_por; 
$porcentaje_A5_L2_N6 = $row_datos_controlasign["E26"] * $por_por; 
$porcentaje_A5_L2_N7 = $row_datos_controlasign["E27"] * $por_por;
$porcentaje_A5_L3_N1 = $row_datos_controlasign["E31"] * $por_por; 
$porcentaje_A5_L3_N2 = $row_datos_controlasign["E32"] * $por_por; 
$porcentaje_A5_L3_N3 = $row_datos_controlasign["E33"] * $por_por; 
$porcentaje_A5_L3_N4 = $row_datos_controlasign["E34"] * $por_por; 
$porcentaje_A5_L3_N5 = $row_datos_controlasign["E35"] * $por_por; 
$porcentaje_A5_L3_N6 = $row_datos_controlasign["E36"] * $por_por; 
$porcentaje_A5_L3_N7 = $row_datos_controlasign["E37"] * $por_por; 


$porcentaje_A6_L1_N1 = $row_datos_controlasign["F11"] * $por_por;        
$porcentaje_A6_L1_N2 = $row_datos_controlasign["F12"] * $por_por; 
$porcentaje_A6_L1_N3 = $row_datos_controlasign["F13"] * $por_por; 
$porcentaje_A6_L1_N4 = $row_datos_controlasign["F14"] * $por_por; 
$porcentaje_A6_L1_N5 = $row_datos_controlasign["F15"] * $por_por; 
$porcentaje_A6_L1_N6 = $row_datos_controlasign["F16"] * $por_por; 
$porcentaje_A6_L1_N7 = $row_datos_controlasign["F17"] * $por_por;
$porcentaje_A6_L2_N1 = $row_datos_controlasign["F21"] * $por_por; 
$porcentaje_A6_L2_N2 = $row_datos_controlasign["F22"] * $por_por; 
$porcentaje_A6_L2_N3 = $row_datos_controlasign["F23"] * $por_por; 
$porcentaje_A6_L2_N4 = $row_datos_controlasign["F24"] * $por_por; 
$porcentaje_A6_L2_N5 = $row_datos_controlasign["F25"] * $por_por; 
$porcentaje_A6_L2_N6 = $row_datos_controlasign["F26"] * $por_por; 
$porcentaje_A6_L2_N7 = $row_datos_controlasign["F27"] * $por_por;
$porcentaje_A6_L3_N1 = $row_datos_controlasign["F31"] * $por_por; 
$porcentaje_A6_L3_N2 = $row_datos_controlasign["F32"] * $por_por; 
$porcentaje_A6_L3_N3 = $row_datos_controlasign["F33"] * $por_por; 
$porcentaje_A6_L3_N4 = $row_datos_controlasign["F34"] * $por_por; 
$porcentaje_A6_L3_N5 = $row_datos_controlasign["F35"] * $por_por; 
$porcentaje_A6_L3_N6 = $row_datos_controlasign["F36"] * $por_por; 
$porcentaje_A6_L3_N7 = $row_datos_controlasign["F37"] * $por_por; 

$porcentaje_A7_L1_N1 = $row_datos_controlasign["G11"] * $por_por;        
$porcentaje_A7_L1_N2 = $row_datos_controlasign["G12"] * $por_por; 
$porcentaje_A7_L1_N3 = $row_datos_controlasign["G13"] * $por_por; 
$porcentaje_A7_L1_N4 = $row_datos_controlasign["G14"] * $por_por; 
$porcentaje_A7_L1_N5 = $row_datos_controlasign["G15"] * $por_por; 
$porcentaje_A7_L1_N6 = $row_datos_controlasign["G16"] * $por_por; 
$porcentaje_A7_L1_N7 = $row_datos_controlasign["G17"] * $por_por;
$porcentaje_A7_L2_N1 = $row_datos_controlasign["G21"] * $por_por; 
$porcentaje_A7_L2_N2 = $row_datos_controlasign["G22"] * $por_por; 
$porcentaje_A7_L2_N3 = $row_datos_controlasign["G23"] * $por_por; 
$porcentaje_A7_L2_N4 = $row_datos_controlasign["G24"] * $por_por; 
$porcentaje_A7_L2_N5 = $row_datos_controlasign["G25"] * $por_por; 
$porcentaje_A7_L2_N6 = $row_datos_controlasign["G26"] * $por_por; 
$porcentaje_A7_L2_N7 = $row_datos_controlasign["G27"] * $por_por;
$porcentaje_A7_L3_N1 = $row_datos_controlasign["G31"] * $por_por; 
$porcentaje_A7_L3_N2 = $row_datos_controlasign["G32"] * $por_por; 
$porcentaje_A7_L3_N3 = $row_datos_controlasign["G33"] * $por_por; 
$porcentaje_A7_L3_N4 = $row_datos_controlasign["G34"] * $por_por; 
$porcentaje_A7_L3_N5 = $row_datos_controlasign["G35"] * $por_por; 
$porcentaje_A7_L3_N6 = $row_datos_controlasign["G36"] * $por_por; 
$porcentaje_A7_L3_N7 = $row_datos_controlasign["G37"] * $por_por; 

$porcentaje_A8_L1_N1 = $row_datos_controlasign["H11"] * $por_por;        
$porcentaje_A8_L1_N2 = $row_datos_controlasign["H12"] * $por_por; 
$porcentaje_A8_L1_N3 = $row_datos_controlasign["H13"] * $por_por; 
$porcentaje_A8_L1_N4 = $row_datos_controlasign["H14"] * $por_por; 
$porcentaje_A8_L1_N5 = $row_datos_controlasign["H15"] * $por_por; 
$porcentaje_A8_L1_N6 = $row_datos_controlasign["H16"] * $por_por; 
$porcentaje_A8_L1_N7 = $row_datos_controlasign["H17"] * $por_por;
$porcentaje_A8_L2_N1 = $row_datos_controlasign["H21"] * $por_por; 
$porcentaje_A8_L2_N2 = $row_datos_controlasign["H22"] * $por_por; 
$porcentaje_A8_L2_N3 = $row_datos_controlasign["H23"] * $por_por; 
$porcentaje_A8_L2_N4 = $row_datos_controlasign["H24"] * $por_por; 
$porcentaje_A8_L2_N5 = $row_datos_controlasign["H25"] * $por_por; 
$porcentaje_A8_L2_N6 = $row_datos_controlasign["H26"] * $por_por; 
$porcentaje_A8_L2_N7 = $row_datos_controlasign["H27"] * $por_por;
$porcentaje_A8_L3_N1 = $row_datos_controlasign["H31"] * $por_por; 
$porcentaje_A8_L3_N2 = $row_datos_controlasign["H32"] * $por_por; 
$porcentaje_A8_L3_N3 = $row_datos_controlasign["H33"] * $por_por; 
$porcentaje_A8_L3_N4 = $row_datos_controlasign["H34"] * $por_por; 
$porcentaje_A8_L3_N5 = $row_datos_controlasign["H35"] * $por_por; 
$porcentaje_A8_L3_N6 = $row_datos_controlasign["H36"] * $por_por; 
$porcentaje_A8_L3_N7 = $row_datos_controlasign["H37"] * $por_por;

$porcentaje_A9_L1_N1 = $row_datos_controlasign["I11"] * $por_por;        
$porcentaje_A9_L1_N2 = $row_datos_controlasign["I12"] * $por_por; 
$porcentaje_A9_L1_N3 = $row_datos_controlasign["I13"] * $por_por; 
$porcentaje_A9_L1_N4 = $row_datos_controlasign["I14"] * $por_por; 
$porcentaje_A9_L1_N5 = $row_datos_controlasign["I15"] * $por_por; 
$porcentaje_A9_L1_N6 = $row_datos_controlasign["I16"] * $por_por; 
$porcentaje_A9_L1_N7 = $row_datos_controlasign["I17"] * $por_por;
$porcentaje_A9_L2_N1 = $row_datos_controlasign["I21"] * $por_por; 
$porcentaje_A9_L2_N2 = $row_datos_controlasign["I22"] * $por_por; 
$porcentaje_A9_L2_N3 = $row_datos_controlasign["I23"] * $por_por; 
$porcentaje_A9_L2_N4 = $row_datos_controlasign["I24"] * $por_por; 
$porcentaje_A9_L2_N5 = $row_datos_controlasign["I25"] * $por_por; 
$porcentaje_A9_L2_N6 = $row_datos_controlasign["I26"] * $por_por; 
$porcentaje_A9_L2_N7 = $row_datos_controlasign["I27"] * $por_por;
$porcentaje_A9_L3_N1 = $row_datos_controlasign["I31"] * $por_por; 
$porcentaje_A9_L3_N2 = $row_datos_controlasign["I32"] * $por_por; 
$porcentaje_A9_L3_N3 = $row_datos_controlasign["I33"] * $por_por; 
$porcentaje_A9_L3_N4 = $row_datos_controlasign["I34"] * $por_por; 
$porcentaje_A9_L3_N5 = $row_datos_controlasign["I35"] * $por_por; 
$porcentaje_A9_L3_N6 = $row_datos_controlasign["I36"] * $por_por; 
$porcentaje_A9_L3_N7 = $row_datos_controlasign["I37"] * $por_por;

$porcentaje_A10_L1_N1 = $row_datos_controlasign["J11"] * $por_por;        
$porcentaje_A10_L1_N2 = $row_datos_controlasign["J12"] * $por_por; 
$porcentaje_A10_L1_N3 = $row_datos_controlasign["J13"] * $por_por; 
$porcentaje_A10_L1_N4 = $row_datos_controlasign["J14"] * $por_por; 
$porcentaje_A10_L1_N5 = $row_datos_controlasign["J15"] * $por_por; 
$porcentaje_A10_L1_N6 = $row_datos_controlasign["J16"] * $por_por; 
$porcentaje_A10_L1_N7 = $row_datos_controlasign["J17"] * $por_por;
$porcentaje_A10_L2_N1 = $row_datos_controlasign["J21"] * $por_por; 
$porcentaje_A10_L2_N2 = $row_datos_controlasign["J22"] * $por_por; 
$porcentaje_A10_L2_N3 = $row_datos_controlasign["J23"] * $por_por; 
$porcentaje_A10_L2_N4 = $row_datos_controlasign["J24"] * $por_por; 
$porcentaje_A10_L2_N5 = $row_datos_controlasign["J25"] * $por_por; 
$porcentaje_A10_L2_N6 = $row_datos_controlasign["J26"] * $por_por; 
$porcentaje_A10_L2_N7 = $row_datos_controlasign["J27"] * $por_por;
$porcentaje_A10_L3_N1 = $row_datos_controlasign["J31"] * $por_por; 
$porcentaje_A10_L3_N2 = $row_datos_controlasign["J32"] * $por_por; 
$porcentaje_A10_L3_N3 = $row_datos_controlasign["J33"] * $por_por; 
$porcentaje_A10_L3_N4 = $row_datos_controlasign["J34"] * $por_por; 
$porcentaje_A10_L3_N5 = $row_datos_controlasign["J35"] * $por_por; 
$porcentaje_A10_L3_N6 = $row_datos_controlasign["J36"] * $por_por; 
$porcentaje_A10_L3_N7 = $row_datos_controlasign["J37"] * $por_por; 

$porcentaje_A11_L1_N1 = $row_datos_controlasign["K11"] * $por_por;        
$porcentaje_A11_L1_N2 = $row_datos_controlasign["K12"] * $por_por; 
$porcentaje_A11_L1_N3 = $row_datos_controlasign["K13"] * $por_por; 
$porcentaje_A11_L1_N4 = $row_datos_controlasign["K14"] * $por_por; 
$porcentaje_A11_L1_N5 = $row_datos_controlasign["K15"] * $por_por; 
$porcentaje_A11_L1_N6 = $row_datos_controlasign["K16"] * $por_por; 
$porcentaje_A11_L1_N7 = $row_datos_controlasign["K17"] * $por_por;
$porcentaje_A11_L2_N1 = $row_datos_controlasign["K21"] * $por_por; 
$porcentaje_A11_L2_N2 = $row_datos_controlasign["K22"] * $por_por; 
$porcentaje_A11_L2_N3 = $row_datos_controlasign["K23"] * $por_por; 
$porcentaje_A11_L2_N4 = $row_datos_controlasign["K24"] * $por_por; 
$porcentaje_A11_L2_N5 = $row_datos_controlasign["K25"] * $por_por; 
$porcentaje_A11_L2_N6 = $row_datos_controlasign["K26"] * $por_por; 
$porcentaje_A11_L2_N7 = $row_datos_controlasign["K27"] * $por_por;
$porcentaje_A11_L3_N1 = $row_datos_controlasign["K31"] * $por_por; 
$porcentaje_A11_L3_N2 = $row_datos_controlasign["K32"] * $por_por; 
$porcentaje_A11_L3_N3 = $row_datos_controlasign["K33"] * $por_por; 
$porcentaje_A11_L3_N4 = $row_datos_controlasign["K34"] * $por_por; 
$porcentaje_A11_L3_N5 = $row_datos_controlasign["K35"] * $por_por; 
$porcentaje_A11_L3_N6 = $row_datos_controlasign["K36"] * $por_por; 
$porcentaje_A11_L3_N7 = $row_datos_controlasign["K37"] * $por_por;

$porcentaje_A12_L1_N1 = $row_datos_controlasign["L11"] * $por_por;        
$porcentaje_A12_L1_N2 = $row_datos_controlasign["L12"] * $por_por; 
$porcentaje_A12_L1_N3 = $row_datos_controlasign["L13"] * $por_por; 
$porcentaje_A12_L1_N4 = $row_datos_controlasign["L14"] * $por_por; 
$porcentaje_A12_L1_N5 = $row_datos_controlasign["L15"] * $por_por; 
$porcentaje_A12_L1_N6 = $row_datos_controlasign["L16"] * $por_por; 
$porcentaje_A12_L1_N7 = $row_datos_controlasign["L17"] * $por_por;
$porcentaje_A12_L2_N1 = $row_datos_controlasign["L21"] * $por_por; 
$porcentaje_A12_L2_N2 = $row_datos_controlasign["L22"] * $por_por; 
$porcentaje_A12_L2_N3 = $row_datos_controlasign["L23"] * $por_por; 
$porcentaje_A12_L2_N4 = $row_datos_controlasign["L24"] * $por_por; 
$porcentaje_A12_L2_N5 = $row_datos_controlasign["L25"] * $por_por; 
$porcentaje_A12_L2_N6 = $row_datos_controlasign["L26"] * $por_por; 
$porcentaje_A12_L2_N7 = $row_datos_controlasign["L27"] * $por_por;
$porcentaje_A12_L3_N1 = $row_datos_controlasign["L31"] * $por_por; 
$porcentaje_A12_L3_N2 = $row_datos_controlasign["L32"] * $por_por; 
$porcentaje_A12_L3_N3 = $row_datos_controlasign["L33"] * $por_por; 
$porcentaje_A12_L3_N4 = $row_datos_controlasign["L34"] * $por_por; 
$porcentaje_A12_L3_N5 = $row_datos_controlasign["L35"] * $por_por; 
$porcentaje_A12_L3_N6 = $row_datos_controlasign["L36"] * $por_por; 
$porcentaje_A12_L3_N7 = $row_datos_controlasign["L37"] * $por_por; 



$porcentaje_A13_L1_N1 = $row_datos_controlasign["M11"] * $por_por;        
$porcentaje_A13_L1_N2 = $row_datos_controlasign["M12"] * $por_por; 
$porcentaje_A13_L1_N3 = $row_datos_controlasign["M13"] * $por_por; 
$porcentaje_A13_L1_N4 = $row_datos_controlasign["M14"] * $por_por; 
$porcentaje_A13_L1_N5 = $row_datos_controlasign["M15"] * $por_por; 
$porcentaje_A13_L1_N6 = $row_datos_controlasign["M16"] * $por_por; 
$porcentaje_A13_L1_N7 = $row_datos_controlasign["M17"] * $por_por;
$porcentaje_A13_L2_N1 = $row_datos_controlasign["M21"] * $por_por; 
$porcentaje_A13_L2_N2 = $row_datos_controlasign["M22"] * $por_por; 
$porcentaje_A13_L2_N3 = $row_datos_controlasign["M23"] * $por_por; 
$porcentaje_A13_L2_N4 = $row_datos_controlasign["M24"] * $por_por; 
$porcentaje_A13_L2_N5 = $row_datos_controlasign["M25"] * $por_por; 
$porcentaje_A13_L2_N6 = $row_datos_controlasign["M26"] * $por_por; 
$porcentaje_A13_L2_N7 = $row_datos_controlasign["M27"] * $por_por;
$porcentaje_A13_L3_N1 = $row_datos_controlasign["M31"] * $por_por; 
$porcentaje_A13_L3_N2 = $row_datos_controlasign["M32"] * $por_por; 
$porcentaje_A13_L3_N3 = $row_datos_controlasign["M33"] * $por_por; 
$porcentaje_A13_L3_N4 = $row_datos_controlasign["M34"] * $por_por; 
$porcentaje_A13_L3_N5 = $row_datos_controlasign["M35"] * $por_por; 
$porcentaje_A13_L3_N6 = $row_datos_controlasign["M36"] * $por_por; 
$porcentaje_A13_L3_N7 = $row_datos_controlasign["M37"] * $por_por; 



$porcentaje_A14_L1_N1 = $row_datos_controlasign["N11"] * $por_por;        
$porcentaje_A14_L1_N2 = $row_datos_controlasign["N12"] * $por_por; 
$porcentaje_A14_L1_N3 = $row_datos_controlasign["N13"] * $por_por; 
$porcentaje_A14_L1_N4 = $row_datos_controlasign["N14"] * $por_por; 
$porcentaje_A14_L1_N5 = $row_datos_controlasign["N15"] * $por_por; 
$porcentaje_A14_L1_N6 = $row_datos_controlasign["N16"] * $por_por; 
$porcentaje_A14_L1_N7 = $row_datos_controlasign["N17"] * $por_por;
$porcentaje_A14_L2_N1 = $row_datos_controlasign["N21"] * $por_por; 
$porcentaje_A14_L2_N2 = $row_datos_controlasign["N22"] * $por_por; 
$porcentaje_A14_L2_N3 = $row_datos_controlasign["N23"] * $por_por; 
$porcentaje_A14_L2_N4 = $row_datos_controlasign["N24"] * $por_por; 
$porcentaje_A14_L2_N5 = $row_datos_controlasign["N25"] * $por_por; 
$porcentaje_A14_L2_N6 = $row_datos_controlasign["N26"] * $por_por; 
$porcentaje_A14_L2_N7 = $row_datos_controlasign["N27"] * $por_por;
$porcentaje_A14_L3_N1 = $row_datos_controlasign["N31"] * $por_por; 
$porcentaje_A14_L3_N2 = $row_datos_controlasign["N32"] * $por_por; 
$porcentaje_A14_L3_N3 = $row_datos_controlasign["N33"] * $por_por; 
$porcentaje_A14_L3_N4 = $row_datos_controlasign["N34"] * $por_por; 
$porcentaje_A14_L3_N5 = $row_datos_controlasign["N35"] * $por_por; 
$porcentaje_A14_L3_N6 = $row_datos_controlasign["N36"] * $por_por; 
$porcentaje_A14_L3_N7 = $row_datos_controlasign["N37"] * $por_por; 


mysqli_close($enlace); 



 ?>



<h6 class="text-success"><i class="fas fa-hat-cowboy fa-lg"></i> <b>Nombre del Área, Asignatura o Materia - Abreviatura y restricciones básicas</b>:</h6>



<form method="POST">
 <div class="form-row">

<script type="text/javascript">
  
function keyPressed(){
  var key = event.keyCode || event.charCode ||
  event.which;
  return key;
}

</script>

<style type="text/css">
select {
  font-family: 'FontAwesome', 'Second Font name'
}
</style>








<div class="input-group input-group-sm col-md-12 col-lg-4 mt-2 mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-secondary" id=""><i><b>1:</b></i></span>
  </div>
  <input maxlength="25" type="text" class="form-control" id="a_texto" name="a_texto" value="<?php echo $row_datos_controlasign['a_aaa'];?>">
  <input maxlength="7"  type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="a_mini" name="a_mini" value="<?php echo $row_datos_controlasign['a_abrev'];?>">




<select id="suma_a" name="suma_a" class="selectpicker form-control" title="Cuenta Para El Promedio?">   

<?php
if ($row_datos_controlasign['a_suma']==1) {
  $suma_activo_a = '&#xf164;';
  $suma_posible_a = '&#xf165;';
  $valor_suma_posible_a = '0';
}
else {
$suma_activo_a = '&#xf165;';
$suma_posible_a = '&#xf164;';
$valor_suma_posible_a = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['a_suma']; ?>" selected><?php echo $suma_activo_a; ?></option>
 <option value="<?php echo $valor_suma_posible_a; ?>"><?php echo $suma_posible_a; ?></option>  

</select>


<select id="a_convertir" name="a_convertir" class="selectpicker form-control" title="Formato">
<?php
if ($row_datos_controlasign['a_convertir']==1) {
  $a_convertir = 'Num.';  
}
if ($row_datos_controlasign['a_convertir']==2) {
  $a_convertir = 'Alf. - Corregir el error, seleccionar la opción correcta.';  
}
if ($row_datos_controlasign['a_convertir']==3) {
  $a_convertir = 'Lit.';  
}
if ($row_datos_controlasign['a_convertir']==4) {
  $a_convertir = 'Cua.';  
}
?>
<option value="<?php echo $row_datos_controlasign['a_convertir']; ?>" selected><?php echo $a_convertir; ?></option>
<option disabled></option>
<option value="1">Numérico</option>

<option value="3">Literal</option>
<option value="4">Cualitativa</option>
</select>



<select id="estado_a" name="estado_a" class="selectpicker form-control" title="Estado">

<?php
if ($row_datos_controlasign['a_estado']==1) {
  $estado_activo_a = '&#xf09c;';
  $estado_posible_a = '&#xf023;';
  $valor_posible_a = '0';
}
else {
$estado_activo_a = '&#xf023;';
$estado_posible_a = '&#xf09c;';
$valor_posible_a = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['a_estado']; ?>" selected><?php echo $estado_activo_a; ?></option>
 <option value="<?php echo $valor_posible_a; ?>"><?php echo $estado_posible_a; ?></option>  

</select>


  </div>


<div class="input-group input-group-sm col-md-12 col-lg-4 mt-2 mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-secondary" id=""><i><b>2:</b></i></span>
  </div>
  <input maxlength="25" type="text" class="form-control" id="b_texto" name="b_texto" value="<?php echo $row_datos_controlasign['b_bbb'];?>">
  <input maxlength="7"  type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="b_mini" name="b_mini" value="<?php echo $row_datos_controlasign['b_abrev'];?>">



<select id="suma_b" name="suma_b" class="selectpicker form-control" title="Cuenta Para El Promedio?">   

<?php
if ($row_datos_controlasign['b_suma']==1) {
  $suma_activo_b = '&#xf164;';
  $suma_posible_b = '&#xf165;';
  $valor_suma_posible_b = '0';
}
else {
$suma_activo_b = '&#xf165;';
$suma_posible_b = '&#xf164;';
$valor_suma_posible_b = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['b_suma']; ?>" selected><?php echo $suma_activo_b; ?></option>
 <option value="<?php echo $valor_suma_posible_b; ?>"><?php echo $suma_posible_b; ?></option>  

</select>


<select id="b_convertir" name="b_convertir" class="selectpicker form-control" title="Formato">
<?php
if ($row_datos_controlasign['b_convertir']==1) {
  $b_convertir = 'Num.';  
}
if ($row_datos_controlasign['b_convertir']==2) {
  $b_convertir = 'Alf. - Corregir el error, seleccionar la opción correcta.';  
}
if ($row_datos_controlasign['b_convertir']==3) {
  $b_convertir = 'Lit.';  
}
if ($row_datos_controlasign['b_convertir']==4) {
  $b_convertir = 'Cua.';  
}
?>
<option value="<?php echo $row_datos_controlasign['b_convertir']; ?>" selected><?php echo $b_convertir; ?></option>
<option disabled></option>
<option value="1">Numérico</option>

<option value="3">Literal</option>
<option value="4">Cualitativa</option>
</select>




<select id="estado_b" name="estado_b" class="selectpicker form-control" title="Estado">

<?php
if ($row_datos_controlasign['b_estado']==1) {
  $estado_activo_b = '&#xf09c;';
  $estado_posible_b = '&#xf023;';
  $valor_posible_b = '0';
}
else {
$estado_activo_b = '&#xf023;';
$estado_posible_b = '&#xf09c;';
$valor_posible_b = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['b_estado']; ?>" selected><?php echo $estado_activo_b; ?></option>
 <option value="<?php echo $valor_posible_b; ?>"><?php echo $estado_posible_b; ?></option>  

</select>

</div>


<div class="input-group input-group-sm col-md-12 col-lg-4 mt-2 mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-secondary" id=""><i><b>3:</b></i></span>
  </div>
   <input maxlength="25" type="text" class="form-control" id="c_texto" name="c_texto" value="<?php echo $row_datos_controlasign['c_ccc'];?>">
  <input maxlength="7"  type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="c_mini" name="c_mini" value="<?php echo $row_datos_controlasign['c_abrev'];?>">






<select id="suma_c" name="suma_c" class="selectpicker form-control" title="Cuenta Para El Promedio?">   

<?php
if ($row_datos_controlasign['c_suma']==1) {
  $suma_activo_c = '&#xf164;';
  $suma_posible_c = '&#xf165;';
  $valor_suma_posible_c = '0';
}
else {
$suma_activo_c = '&#xf165;';
$suma_posible_c = '&#xf164;';
$valor_suma_posible_c = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['c_suma']; ?>" selected><?php echo $suma_activo_c; ?></option>
 <option value="<?php echo $valor_suma_posible_c; ?>"><?php echo $suma_posible_c; ?></option>  

</select>


<select id="c_convertir" name="c_convertir" class="selectpicker form-control" title="Formato">
<?php
if ($row_datos_controlasign['c_convertir']==1) {
  $c_convertir = 'Num.';  
}
if ($row_datos_controlasign['c_convertir']==2) {
  $c_convertir = 'Alf. - Corregir el error, seleccionar la opción correcta.';  
}
if ($row_datos_controlasign['c_convertir']==3) {
  $c_convertir = 'Lit.';  
}
if ($row_datos_controlasign['c_convertir']==4) {
  $c_convertir = 'Cua.';  
}
?>
<option value="<?php echo $row_datos_controlasign['c_convertir']; ?>" selected><?php echo $c_convertir; ?></option>
<option disabled></option>
<option value="1">Numérico</option>

<option value="3">Literal</option>
<option value="4">Cualitativa</option>
</select>




<select id="estado_c" name="estado_c" class="selectpicker form-control" title="Estado">

<?php
if ($row_datos_controlasign['c_estado']==1) {
  $estado_activo_c = '&#xf09c;';
  $estado_posible_c = '&#xf023;';
  $valor_posible_c = '0';
}
else {
$estado_activo_c = '&#xf023;';
$estado_posible_c = '&#xf09c;';
$valor_posible_c = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['c_estado']; ?>" selected><?php echo $estado_activo_c; ?></option>
 <option value="<?php echo $valor_posible_c; ?>"><?php echo $estado_posible_c; ?></option>  

</select>

</div>











</div>

<div class="form-row">



<div class="input-group input-group-sm col-md-12 col-lg-4 mt-2 mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id=""><i><b>4:</b></i></span>
  </div>
  <input maxlength="25" type="text" class="form-control" id="d_texto" name="d_texto" value="<?php echo $row_datos_controlasign['d_ddd'];?>">
  <input maxlength="7"  type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="d_mini" name="d_mini" value="<?php echo $row_datos_controlasign['d_abrev'];?>">




<select id="suma_d" name="suma_d" class="selectpicker form-control" title="Cuenta Para El Promedio?">   

<?php
if ($row_datos_controlasign['d_suma']==1) {
  $suma_activo_d = '&#xf164;';
  $suma_posible_d = '&#xf165;';
  $valor_suma_posible_d = '0';
}
else {
$suma_activo_d = '&#xf165;';
$suma_posible_d = '&#xf164;';
$valor_suma_posible_d = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['d_suma']; ?>" selected><?php echo $suma_activo_d; ?></option>
 <option value="<?php echo $valor_suma_posible_d; ?>"><?php echo $suma_posible_d; ?></option>  

</select>


<select id="d_convertir" name="d_convertir" class="selectpicker form-control" title="Formato">
<?php
if ($row_datos_controlasign['d_convertir']==1) {
  $d_convertir = 'Num.';  
}
if ($row_datos_controlasign['d_convertir']==2) {
  $d_convertir = 'Alf. - Corregir el error, seleccionar la opción correcta.';  
}
if ($row_datos_controlasign['d_convertir']==3) {
  $d_convertir = 'Lit.';  
}
if ($row_datos_controlasign['d_convertir']==4) {
  $d_convertir = 'Cua.';  
}
?>
<option value="<?php echo $row_datos_controlasign['d_convertir']; ?>" selected><?php echo $d_convertir; ?></option>
<option disabled></option>
<option value="1">Numérico</option>

<option value="3">Literal</option>
<option value="4">Cualitativa</option>
</select>



<select id="estado_d" name="estado_d" class="selectpicker form-control" title="Estado">

<?php
if ($row_datos_controlasign['d_estado']==1) {
  $estado_activo_d = '&#xf09c;';
  $estado_posible_d = '&#xf023;';
  $valor_posible_d = '0';
}
else {
$estado_activo_d = '&#xf023;';
$estado_posible_d = '&#xf09c;';
$valor_posible_d = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['d_estado']; ?>" selected><?php echo $estado_activo_d; ?></option>
 <option value="<?php echo $valor_posible_d; ?>"><?php echo $estado_posible_d; ?></option>  

</select>


</div>




<div class="input-group input-group-sm col-md-12 col-lg-4 mt-2 mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id=""><i><b>5:</b></i></span>
  </div>
  <input maxlength="25" type="text" class="form-control" id="e_texto" name="e_texto" value="<?php echo $row_datos_controlasign['e_eee'];?>">
  <input maxlength="7"  type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="e_mini" name="e_mini" value="<?php echo $row_datos_controlasign['e_abrev'];?>">




<select id="suma_e" name="suma_e" class="selectpicker form-control" title="Cuenta Para El Promedio?">   

<?php
if ($row_datos_controlasign['e_suma']==1) {
  $suma_activo_e = '&#xf164;';
  $suma_posible_e = '&#xf165;';
  $valor_suma_posible_e = '0';
}
else {
$suma_activo_e = '&#xf165;';
$suma_posible_e = '&#xf164;';
$valor_suma_posible_e = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['e_suma']; ?>" selected><?php echo $suma_activo_e; ?></option>
 <option value="<?php echo $valor_suma_posible_e; ?>"><?php echo $suma_posible_e; ?></option>  

</select>


<select id="e_convertir" name="e_convertir" class="selectpicker form-control" title="Formato">
<?php
if ($row_datos_controlasign['e_convertir']==1) {
  $e_convertir = 'Num.';  
}
if ($row_datos_controlasign['e_convertir']==2) {
  $e_convertir = 'Alf. - Corregir el error, seleccionar la opción correcta.';  
}
if ($row_datos_controlasign['e_convertir']==3) {
  $e_convertir = 'Lit.';  
}
if ($row_datos_controlasign['e_convertir']==4) {
  $e_convertir = 'Cua.';  
}
?>
<option value="<?php echo $row_datos_controlasign['e_convertir']; ?>" selected><?php echo $e_convertir; ?></option>
<option disabled></option>
<option value="1">Numérico</option>

<option value="3">Literal</option>
<option value="4">Cualitativa</option>
</select>





<select id="estado_e" name="estado_e" class="selectpicker form-control" title="Estado">

<?php
if ($row_datos_controlasign['e_estado']==1) {
  $estado_activo_e = '&#xf09c;';
  $estado_posible_e = '&#xf023;';
  $valor_posible_e = '0';
}
else {
$estado_activo_e = '&#xf023;';
$estado_posible_e = '&#xf09c;';
$valor_posible_e = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['e_estado']; ?>" selected><?php echo $estado_activo_e; ?></option>
 <option value="<?php echo $valor_posible_e; ?>"><?php echo $estado_posible_e; ?></option>  

</select>


</div>


<div class="input-group input-group-sm col-md-12 col-lg-4 mt-2 mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id=""><i><b>6:</b></i></span>
  </div>
   <input maxlength="25" type="text" class="form-control" id="f_texto" name="f_texto" value="<?php echo $row_datos_controlasign['f_fff'];?>">
  <input maxlength="7"  type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="f_mini" name="f_mini" value="<?php echo $row_datos_controlasign['f_abrev'];?>">



<select id="suma_f" name="suma_f" class="selectpicker form-control" title="Cuenta Para El Promedio?">   

<?php
if ($row_datos_controlasign['f_suma']==1) {
  $suma_activo_f = '&#xf164;';
  $suma_posible_f = '&#xf165;';
  $valor_suma_posible_f = '0';
}
else {
$suma_activo_f = '&#xf165;';
$suma_posible_f = '&#xf164;';
$valor_suma_posible_f = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['f_suma']; ?>" selected><?php echo $suma_activo_f; ?></option>
 <option value="<?php echo $valor_suma_posible_f; ?>"><?php echo $suma_posible_f; ?></option>  

</select>


<select id="f_convertir" name="f_convertir" class="selectpicker form-control" title="Formato">
<?php
if ($row_datos_controlasign['f_convertir']==1) {
  $f_convertir = 'Num.';  
}
if ($row_datos_controlasign['f_convertir']==2) {
  $f_convertir = 'Alf. - Corregir el error, seleccionar la opción correcta.';  
}
if ($row_datos_controlasign['f_convertir']==3) {
  $f_convertir = 'Lit.';  
}
if ($row_datos_controlasign['f_convertir']==4) {
  $f_convertir = 'Cua.';  
}
?>
<option value="<?php echo $row_datos_controlasign['f_convertir']; ?>" selected><?php echo $f_convertir; ?></option>
<option disabled></option>
<option value="1">Numérico</option>

<option value="3">Literal</option>
<option value="4">Cualitativa</option>
</select>



<select id="estado_f" name="estado_f" class="selectpicker form-control" title="Estado">

<?php
if ($row_datos_controlasign['f_estado']==1) {
  $estado_activo_f = '&#xf09c;';
  $estado_posible_f = '&#xf023;';
  $valor_posible_f = '0';
}
else {
$estado_activo_f = '&#xf023;';
$estado_posible_f = '&#xf09c;';
$valor_posible_f = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['f_estado']; ?>" selected><?php echo $estado_activo_f; ?></option>
 <option value="<?php echo $valor_posible_f; ?>"><?php echo $estado_posible_f; ?></option>  

</select>

</div>







</div>


 <div class="form-row">





<div class="input-group input-group-sm col-md-12 col-lg-4 mt-2 mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success" id=""><i><b>7:</b></i></span>
  </div>
   <input maxlength="25" type="text" class="form-control" id="g_texto" name="g_texto" value="<?php echo $row_datos_controlasign['g_ggg'];?>">
  <input maxlength="7"  type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="g_mini" name="g_mini" value="<?php echo $row_datos_controlasign['g_abrev'];?>">



<select id="suma_g" name="suma_g" class="selectpicker form-control" title="Cuenta Para El Promedio?">   

<?php
if ($row_datos_controlasign['g_suma']==1) {
  $suma_activo_g = '&#xf164;';
  $suma_posible_g = '&#xf165;';
  $valor_suma_posible_g = '0';
}
else {
$suma_activo_g = '&#xf165;';
$suma_posible_g = '&#xf164;';
$valor_suma_posible_g = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['g_suma']; ?>" selected><?php echo $suma_activo_g; ?></option>
 <option value="<?php echo $valor_suma_posible_g; ?>"><?php echo $suma_posible_g; ?></option>  

</select>



<select id="g_convertir" name="g_convertir" class="selectpicker form-control" title="Formato">
<?php
if ($row_datos_controlasign['g_convertir']==1) {
  $g_convertir = 'Num.';  
}
if ($row_datos_controlasign['g_convertir']==2) {
  $g_convertir = 'Alf. - Corregir el error, seleccionar la opción correcta.';  
}
if ($row_datos_controlasign['g_convertir']==3) {
  $g_convertir = 'Lit.';  
}
if ($row_datos_controlasign['g_convertir']==4) {
  $g_convertir = 'Cua.';  
}
?>
<option value="<?php echo $row_datos_controlasign['g_convertir']; ?>" selected><?php echo $g_convertir; ?></option>
<option disabled></option>
<option value="1">Numérico</option>

<option value="3">Literal</option>
<option value="4">Cualitativa</option>
</select>





<select id="estado_g" name="estado_g" class="selectpicker form-control" title="Estado">

<?php
if ($row_datos_controlasign['g_estado']==1) {
  $estado_activo_g = '&#xf09c;';
  $estado_posible_g = '&#xf023;';
  $valor_posible_g = '0';
}
else {
$estado_activo_g = '&#xf023;';
$estado_posible_g = '&#xf09c;';
$valor_posible_g = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['g_estado']; ?>" selected><?php echo $estado_activo_g; ?></option>
 <option value="<?php echo $valor_posible_g; ?>"><?php echo $estado_posible_g; ?></option>  

</select>

</div>


<div class="input-group input-group-sm col-md-12 col-lg-4 mt-2 mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success" id=""><i><b>8:</b></i></span>
  </div>
   <input maxlength="25" type="text" class="form-control" id="h_texto" name="h_texto" value="<?php echo $row_datos_controlasign['h_hhh'];?>">
  <input maxlength="7"  type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="h_mini" name="h_mini" value="<?php echo $row_datos_controlasign['h_abrev'];?>">



<select id="suma_h" name="suma_h" class="selectpicker form-control" title="Cuenta Para El Promedio?">   

<?php
if ($row_datos_controlasign['h_suma']==1) {
  $suma_activo_h = '&#xf164;';
  $suma_posible_h = '&#xf165;';
  $valor_suma_posible_h = '0';
}
else {
$suma_activo_h = '&#xf165;';
$suma_posible_h = '&#xf164;';
$valor_suma_posible_h = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['h_suma']; ?>" selected><?php echo $suma_activo_h; ?></option>
 <option value="<?php echo $valor_suma_posible_h; ?>"><?php echo $suma_posible_h; ?></option>  

</select>

<select id="h_convertir" name="h_convertir" class="selectpicker form-control" title="Formato">
<?php
if ($row_datos_controlasign['h_convertir']==1) {
  $h_convertir = 'Num.';  
}
if ($row_datos_controlasign['h_convertir']==2) {
  $h_convertir = 'Alf. - Corregir el error, seleccionar la opción correcta.';  
}
if ($row_datos_controlasign['h_convertir']==3) {
  $h_convertir = 'Lit.';  
}
if ($row_datos_controlasign['h_convertir']==4) {
  $h_convertir = 'Cua.';  
}
?>
<option value="<?php echo $row_datos_controlasign['h_convertir']; ?>" selected><?php echo $h_convertir; ?></option>
<option disabled></option>
<option value="1">Numérico</option>

<option value="3">Literal</option>
<option value="4">Cualitativa</option>
</select>


<select id="estado_h" name="estado_h" class="selectpicker form-control" title="Estado">

<?php
if ($row_datos_controlasign['h_estado']==1) {
  $estado_activo_h = '&#xf09c;';
  $estado_posible_h = '&#xf023;';
  $valor_posible_h = '0';
}
else {
$estado_activo_h = '&#xf023;';
$estado_posible_h = '&#xf09c;';
$valor_posible_h = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['h_estado']; ?>" selected><?php echo $estado_activo_h; ?></option>
 <option value="<?php echo $valor_posible_h; ?>"><?php echo $estado_posible_h; ?></option>  

</select>

</div>






<div class="input-group input-group-sm col-md-12 col-lg-4 mt-2 mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success" id=""><i><b>9:</b></i></span>
  </div>
   <input maxlength="25" type="text" class="form-control" id="i_texto" name="i_texto" value="<?php echo $row_datos_controlasign['i_iii'];?>">
  <input maxlength="7"  type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="i_mini" name="i_mini" value="<?php echo $row_datos_controlasign['i_abrev'];?>">



<select id="suma_i" name="suma_i" class="selectpicker form-control" title="Cuenta Para El Promedio?">   

<?php
if ($row_datos_controlasign['i_suma']==1) {
  $suma_activo_i = '&#xf164;';
  $suma_posible_i = '&#xf165;';
  $valor_suma_posible_i = '0';
}
else {
$suma_activo_i = '&#xf165;';
$suma_posible_i = '&#xf164;';
$valor_suma_posible_i = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['i_suma']; ?>" selected><?php echo $suma_activo_i; ?></option>
 <option value="<?php echo $valor_suma_posible_i; ?>"><?php echo $suma_posible_i; ?></option>  

</select>


<select id="i_convertir" name="i_convertir" class="selectpicker form-control" title="Formato">
<?php
if ($row_datos_controlasign['i_convertir']==1) {
  $i_convertir = 'Num.';  
}
if ($row_datos_controlasign['i_convertir']==2) {
  $i_convertir = 'Alf. - Corregir el error, seleccionar la opción correcta.';  
}
if ($row_datos_controlasign['i_convertir']==3) {
  $i_convertir = 'Lit.';  
}
if ($row_datos_controlasign['i_convertir']==4) {
  $i_convertir = 'Cua.';  
}
?>
<option value="<?php echo $row_datos_controlasign['i_convertir']; ?>" selected><?php echo $i_convertir; ?></option>
<option disabled></option>
<option value="1">Numérico</option>

<option value="3">Literal</option>
<option value="4">Cualitativa</option>
</select>


<select id="estado_i" name="estado_i" class="selectpicker form-control" title="Estado">

<?php
if ($row_datos_controlasign['i_estado']==1) {
  $estado_activo_i = '&#xf09c;';
  $estado_posible_i = '&#xf023;';
  $valor_posible_i = '0';
}
else {
$estado_activo_i = '&#xf023;';
$estado_posible_i = '&#xf09c;';
$valor_posible_i = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['i_estado']; ?>" selected><?php echo $estado_activo_i; ?></option>
 <option value="<?php echo $valor_posible_i; ?>"><?php echo $estado_posible_i; ?></option>  

</select>


</div>





</div>   



 <div class="form-row">







<div class="input-group input-group-sm col-md-12 col-lg-4 mt-2 mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id=""><i><b>10:</b></i></span>
  </div>
   <input maxlength="25" type="text" class="form-control" id="j_texto" name="j_texto" value="<?php echo $row_datos_controlasign['j_jjj'];?>">
  <input maxlength="7"  type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="j_mini" name="j_mini" value="<?php echo $row_datos_controlasign['j_abrev'];?>">



<select id="suma_j" name="suma_j" class="selectpicker form-control" title="Cuenta Para El Promedio?">   

<?php
if ($row_datos_controlasign['j_suma']==1) {
  $suma_activo_j = '&#xf164;';
  $suma_posible_j = '&#xf165;';
  $valor_suma_posible_j = '0';
}
else {
$suma_activo_j = '&#xf165;';
$suma_posible_j = '&#xf164;';
$valor_suma_posible_j = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['j_suma']; ?>" selected><?php echo $suma_activo_j; ?></option>
 <option value="<?php echo $valor_suma_posible_j; ?>"><?php echo $suma_posible_j; ?></option>  

</select>

<select id="j_convertir" name="j_convertir" class="selectpicker form-control" title="Formato">
<?php
if ($row_datos_controlasign['j_convertir']==1) {
  $j_convertir = 'Num.';  
}
if ($row_datos_controlasign['j_convertir']==2) {
  $j_convertir = 'Alf. - Corregir el error, seleccionar la opción correcta.';  
}
if ($row_datos_controlasign['j_convertir']==3) {
  $j_convertir = 'Lit.';  
}
if ($row_datos_controlasign['j_convertir']==4) {
  $j_convertir = 'Cua.';  
}
?>
<option value="<?php echo $row_datos_controlasign['j_convertir']; ?>" selected><?php echo $j_convertir; ?></option>
<option disabled></option>
<option value="1">Numérico</option>

<option value="3">Literal</option>
<option value="4">Cualitativa</option>
</select>



<select id="estado_j" name="estado_j" class="selectpicker form-control" title="Estado">

<?php
if ($row_datos_controlasign['j_estado']==1) {
  $estado_activo_j = '&#xf09c;';
  $estado_posible_j = '&#xf023;';
  $valor_posible_j = '0';
}
else {
$estado_activo_j = '&#xf023;';
$estado_posible_j = '&#xf09c;';
$valor_posible_j = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['j_estado']; ?>" selected><?php echo $estado_activo_j; ?></option>
 <option value="<?php echo $valor_posible_j; ?>"><?php echo $estado_posible_j; ?></option>  

</select>


</div>


<div class="input-group input-group-sm col-md-12 col-lg-4 mt-2 mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id=""><i><b>11:</b></i></span>
  </div>
   <input maxlength="25" type="text" class="form-control" id="k_texto" name="k_texto" value="<?php echo $row_datos_controlasign['k_kkk'];?>">
  <input maxlength="7"  type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="k_mini" name="k_mini" value="<?php echo $row_datos_controlasign['k_abrev'];?>">



<select id="suma_k" name="suma_k" class="selectpicker form-control" title="Cuenta Para El Promedio?">   

<?php
if ($row_datos_controlasign['k_suma']==1) {
  $suma_activo_k = '&#xf164;';
  $suma_posible_k = '&#xf165;';
  $valor_suma_posible_k = '0';
}
else {
$suma_activo_k = '&#xf165;';
$suma_posible_k = '&#xf164;';
$valor_suma_posible_k = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['k_suma']; ?>" selected><?php echo $suma_activo_k; ?></option>
 <option value="<?php echo $valor_suma_posible_k; ?>"><?php echo $suma_posible_k; ?></option>  

</select>

<select id="k_convertir" name="k_convertir" class="selectpicker form-control" title="Formato">
<?php
if ($row_datos_controlasign['k_convertir']==1) {
  $k_convertir = 'Num.';  
}
if ($row_datos_controlasign['k_convertir']==2) {
  $k_convertir = 'Alf. - Corregir el error, seleccionar la opción correcta.';  
}
if ($row_datos_controlasign['k_convertir']==3) {
  $k_convertir = 'Lit.';  
}
if ($row_datos_controlasign['k_convertir']==4) {
  $k_convertir = 'Cua.';  
}
?>
<option value="<?php echo $row_datos_controlasign['k_convertir']; ?>" selected><?php echo $k_convertir; ?></option>
<option disabled></option>
<option value="1">Numérico</option>

<option value="3">Literal</option>
<option value="4">Cualitativa</option>
</select>



<select id="estado_k" name="estado_k" class="selectpicker form-control" title="Estado">

<?php
if ($row_datos_controlasign['k_estado']==1) {
  $estado_activo_k = '&#xf09c;';
  $estado_posible_k = '&#xf023;';
  $valor_posible_k = '0';
}
else {
$estado_activo_k = '&#xf023;';
$estado_posible_k = '&#xf09c;';
$valor_posible_k = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['k_estado']; ?>" selected><?php echo $estado_activo_k; ?></option>
 <option value="<?php echo $valor_posible_k; ?>"><?php echo $estado_posible_k; ?></option>  

</select>

</div>


<div class="input-group input-group-sm col-md-12 col-lg-4 mt-2 mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id=""><i><b>12:</b></i></span>
  </div>
   <input maxlength="25" type="text" class="form-control" id="l_texto" name="l_texto" value="<?php echo $row_datos_controlasign['l_lll'];?>">
  <input maxlength="7"  type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="l_mini" name="l_mini" value="<?php echo $row_datos_controlasign['l_abrev'];?>">



<select id="suma_l" name="suma_l" class="selectpicker form-control" title="Cuenta Para El Promedio?">   

<?php
if ($row_datos_controlasign['l_suma']==1) {
  $suma_activo_l = '&#xf164;';
  $suma_posible_l = '&#xf165;';
  $valor_suma_posible_l = '0';
}
else {
$suma_activo_l = '&#xf165;';
$suma_posible_l = '&#xf164;';
$valor_suma_posible_l = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['l_suma']; ?>" selected><?php echo $suma_activo_l; ?></option>
 <option value="<?php echo $valor_suma_posible_l; ?>"><?php echo $suma_posible_l; ?></option>  

</select>


<select id="l_convertir" name="l_convertir" class="selectpicker form-control" title="Formato">
<?php
if ($row_datos_controlasign['l_convertir']==1) {
  $l_convertir = 'Num.';  
}
if ($row_datos_controlasign['l_convertir']==2) {
  $l_convertir = 'Alf. - Corregir el error, seleccionar la opción correcta.';  
}
if ($row_datos_controlasign['l_convertir']==3) {
  $l_convertir = 'Lit.';  
}
if ($row_datos_controlasign['l_convertir']==4) {
  $l_convertir = 'Cua.';  
}
?>
<option value="<?php echo $row_datos_controlasign['l_convertir']; ?>" selected><?php echo $l_convertir; ?></option>
<option disabled></option>
<option value="1">Numérico</option>

<option value="3">Literal</option>
<option value="4">Cualitativa</option>
</select>



<select id="estado_l" name="estado_l" class="selectpicker form-control" title="Estado">

<?php
if ($row_datos_controlasign['l_estado']==1) {
  $estado_activo_l = '&#xf09c;';
  $estado_posible_l = '&#xf023;';
  $valor_posible_l = '0';
}
else {
$estado_activo_l = '&#xf023;';
$estado_posible_l = '&#xf09c;';
$valor_posible_l = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['l_estado']; ?>" selected><?php echo $estado_activo_l; ?></option>
 <option value="<?php echo $valor_posible_l; ?>"><?php echo $estado_posible_l; ?></option>  

</select>

</div>











</div>


<div class="form-row">
  




<input name="id_de_la_asignatura" type="hidden" value="<?php echo $row_datos_controlasign['id_asign'];?>">



<div class="input-group input-group-sm col-md-12 col-lg-4 mt-2 mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success" id=""><i><b>13:</b></i></span>
  </div>
   <input maxlength="25" type="text" class="form-control" id="m_texto" name="m_texto" value="<?php echo $row_datos_controlasign['m_mmm'];?>">
  <input maxlength="7"  type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="m_mini" name="m_mini" value="<?php echo $row_datos_controlasign['m_abrev'];?>">



<select id="suma_m" name="suma_m" class="selectpicker form-control" title="Cuenta Para El Promedio?">   

<?php
if ($row_datos_controlasign['m_suma']==1) {
  $suma_activo_m = '&#xf164;';
  $suma_posible_m = '&#xf165;';
  $valor_suma_posible_m = '0';
}
else {
$suma_activo_m = '&#xf165;';
$suma_posible_m = '&#xf164;';
$valor_suma_posible_m = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['m_suma']; ?>" selected><?php echo $suma_activo_m; ?></option>
 <option value="<?php echo $valor_suma_posible_m; ?>"><?php echo $suma_posible_m; ?></option>  

</select>

<select id="m_convertir" name="m_convertir" class="selectpicker form-control" title="Formato">
<?php
if ($row_datos_controlasign['m_convertir']==1) {
  $m_convertir = 'Num.';  
}
if ($row_datos_controlasign['m_convertir']==2) {
  $m_convertir = 'Alf. - Corregir el error, seleccionar la opción correcta.';  
}
if ($row_datos_controlasign['m_convertir']==3) {
  $m_convertir = 'Lit.';  
}
if ($row_datos_controlasign['m_convertir']==4) {
  $m_convertir = 'Cua.';  
}
?>
<option value="<?php echo $row_datos_controlasign['m_convertir']; ?>" selected><?php echo $m_convertir; ?></option>
<option disabled></option>
<option value="1">Numérico</option>

<option value="3">Literal</option>
<option value="4">Cualitativa</option>
</select>



<select id="estado_m" name="estado_m" class="selectpicker form-control" title="Estado">

<?php
if ($row_datos_controlasign['m_estado']==1) {
  $estado_activo_m = '&#xf09c;';
  $estado_posible_m = '&#xf023;';
  $valor_posible_m = '0';
}
else {
$estado_activo_m = '&#xf023;';
$estado_posible_m = '&#xf09c;';
$valor_posible_m = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['m_estado']; ?>" selected><?php echo $estado_activo_m; ?></option>
 <option value="<?php echo $valor_posible_m; ?>"><?php echo $estado_posible_m; ?></option>  

</select>

</div>


<div class="input-group input-group-sm col-md-12 col-lg-4 mt-2 mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success" id=""><i><b>14:</b></i></span>
  </div>
   <input maxlength="25" type="text" class="form-control" id="n_texto" name="n_texto" value="<?php echo $row_datos_controlasign['n_nnn'];?>">
  <input maxlength="7"  type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="n_mini" name="n_mini" value="<?php echo $row_datos_controlasign['n_abrev'];?>">




<select id="suma_n" name="suma_n" class="selectpicker form-control" title="Cuenta Para El Promedio?">   

<?php
if ($row_datos_controlasign['n_suma']==1) {
  $suma_activo_n = '&#xf164;';
  $suma_posible_n = '&#xf165;';
  $valor_suma_posible_n = '0';
}
else {
$suma_activo_n = '&#xf165;';
$suma_posible_n = '&#xf164;';
$valor_suma_posible_n = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['n_suma']; ?>" selected><?php echo $suma_activo_n; ?></option>
 <option value="<?php echo $valor_suma_posible_n; ?>"><?php echo $suma_posible_n; ?></option>  

</select>



<select id="n_convertir" name="n_convertir" class="selectpicker form-control" title="Formato">
<?php
if ($row_datos_controlasign['n_convertir']==1) {
  $n_convertir = 'Num.';  
}
if ($row_datos_controlasign['n_convertir']==2) {
  $n_convertir = 'Alf. - Corregir el error, seleccionar la opción correcta.';  
}
if ($row_datos_controlasign['n_convertir']==3) {
  $n_convertir = 'Lit.';  
}

if ($row_datos_controlasign['n_convertir']==4) {
  $n_convertir = 'Cua.';  
}


?>
<option value="<?php echo $row_datos_controlasign['n_convertir']; ?>" selected><?php echo $n_convertir; ?></option>
<option disabled></option>
<option value="1">Numérico</option>

<option value="3">Literal</option>
<option value="4">Cualitativa</option>
</select>



<select id="estado_n" name="estado_n" class="selectpicker form-control" title="Estado">

<?php
if ($row_datos_controlasign['n_estado']==1) {
  $estado_activo_n = '&#xf09c;';
  $estado_posible_n = '&#xf023;';
  $valor_posible_n = '0';
}
else {
$estado_activo_n = '&#xf023;';
$estado_posible_n = '&#xf09c;';
$valor_posible_n = '1';
}
?>

<option value="<?php echo $row_datos_controlasign['n_estado']; ?>" selected><?php echo $estado_activo_n; ?></option>
 <option value="<?php echo $valor_posible_n; ?>"><?php echo $estado_posible_n; ?></option>  

</select>

</div>



<script>
  
  function ClearAFields() {

     document.getElementById("a_texto").value = "";
     document.getElementById("a_mini").value = "";
     document.getElementById("b_texto").value = "";
     document.getElementById("b_mini").value = "";
     document.getElementById("c_texto").value = "";
     document.getElementById("c_mini").value = "";
     document.getElementById("d_texto").value = "";
     document.getElementById("d_mini").value = "";

     document.getElementById("e_texto").value = "";
     document.getElementById("e_mini").value = "";
     document.getElementById("f_texto").value = "";
     document.getElementById("f_mini").value = "";
     document.getElementById("g_texto").value = "";
     document.getElementById("g_mini").value = "";
     document.getElementById("h_texto").value = "";
     document.getElementById("h_mini").value = "";
     
     document.getElementById("i_texto").value = "";
     document.getElementById("i_mini").value = "";
     document.getElementById("j_texto").value = "";
     document.getElementById("j_mini").value = "";

     document.getElementById("k_texto").value = "";
     document.getElementById("k_mini").value = "";
     document.getElementById("l_texto").value = "";
     document.getElementById("l_mini").value = "";
     document.getElementById("m_texto").value = "";
     document.getElementById("m_mini").value = "";
     document.getElementById("n_texto").value = "";
     document.getElementById("n_mini").value = "";

     
}

</script>

<style type="text/css">
  
#alls{ text-align:justify; display:flex; flex-direction:column; align-items:center; justify-content:center; }


</style>

<!--
 <div id="alls"  class="col-md-1 mt-2  mb-1" data-toggle="tooltip" data-placement="bottom" title="Borrar Campos" >

<input id="alls"  type="checkbox" name="Limpiar" onclick="ClearAFields();" >


 </div>   -->





 <div class="col-md-12 col-lg-4 mt-2  mb-1">

            <button type="submit" name="nomenclaturas" class="btn btn-success btn-sm btn-block"> Guardar Configuración. &nbsp;
            <i class="far fa-save fa-lg"></i></button>

</div>        







</div>





</form>








<hr>

<h6 class="text-info"><i class="fas fa-hat-cowboy fa-lg"></i> <b>Control por Grado</b>:</h6>




<?php

include("../conectar.php");

$query_ctr_gr = "SELECT * FROM grados where id_grado = '$el_gradoXX' limit 1" ;
$datos_ctr_gr = mysqli_query($enlace, $query_ctr_gr) or die(mysqli_error());
$row_datos_ctr_gr = mysqli_fetch_array($datos_ctr_gr);

mysqli_close($enlace);  

?>






<form method="POST">

 <input type="hidden" id="id_del_graooo"  name="id_del_graooo" value="<?php echo $el_gradoXX; ?>">

<div class="form-row">

<div class="input-group col-md-6 col-lg-4 col-xl-4 mt-2">

                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i><b>1er Lapso:</b></i></span>  
                    </div>
   


<select class="form-control" id="1er_L_status" name="1er_L_status">
  

<option value="<?php echo $row_datos_ctr_gr['activo_a']; ?>" selected><?php echo $row_datos_ctr_gr['activo_a']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Inactivo">Inactivo (No permite cargar nota a los profesores)</option>
    <option value = "Activo">Activo (Permite cargar nota a los profesores)</option>

                                                            
                            </select>    
</div>


<div class="input-group col-md-4 col-lg-2 col-xl-2 mt-2">

                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i><b>2° L.:</b></i></span>  
                    </div>
   


<select class="form-control" id="2do_L_status" name="2do_L_status">
  

<option value="<?php echo $row_datos_ctr_gr['activo_b']; ?>" selected><?php echo $row_datos_ctr_gr['activo_b']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Inactivo">Inactivo</option>
    <option value = "Activo">Activo</option>

                                                            
                            </select>  
</div>


<div class="input-group col-md-4 col-lg-2 col-xl-2 mt-2">

                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i><b>3° L.:</b></i></span>  
                    </div>
   


<select class="form-control" id="3er_L_status" name="3er_L_status">
  

<option value="<?php echo $row_datos_ctr_gr['activo_c']; ?>" selected><?php echo $row_datos_ctr_gr['activo_c']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Inactivo">Inactivo</option>
    <option value = "Activo">Activo</option>

                                                            
                            </select>  
</div>




<div class="input-group col-md-6 col-lg-4 col-xl-4 mt-2">

                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i><b>Historial?:</b></i></span>  
                    </div>
   


<select class="form-control" id="ver_historial" name="ver_historial">
  

<option value="<?php echo $row_datos_ctr_gr['tipo_de_carga']; ?>" selected><?php echo $row_datos_ctr_gr['tipo_de_carga']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Alfanumérico">Alfanumérico (Oculta el grado en el Historial Descriptivo)</option>
    <option value = "Descriptivo">Descriptivo (Oculta el grado en el Historial Alfanumérico)</option>

                                                            
                            </select>


</div>










<div class="input-group col-md-4 col-lg-2 col-xl-2 mt-2">

                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i><b>Ver Retirados?:</b></i></span>  
                    </div>
   


<select class="form-control" id="ver_retirados" name="ver_retirados">
  

<option value="<?php echo $row_datos_ctr_gr['ver_reti']; ?>" selected><?php echo $row_datos_ctr_gr['ver_reti']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Si">Si (Observar a los retirados al momento de cargar notas)</option>
    <option value = "No">No (No observar a los retirados al momento de cargar notas)</option>

                                                            
                            </select>


</div>



<div class="input-group col-md-4 col-lg-2 col-xl-2 mt-2" data-toggle="tooltip" data-placement="top" title="Permite imprimir a los representes el corte promedio de todos los lapsos y las actividades de revisión; Activarlo al dar por finalizado el año escolar." >

                <div class="input-group-prepend">
                      <span class="input-group-text alert-danger "  id="basic-addon1"><i><b>Imp. Corte Final?:</b></i></span>  
                    </div>
   


<select class="form-control" id="ver_corte_final" name="ver_corte_final">
  

<option value="<?php echo $row_datos_ctr_gr['ver_corte_finn']; ?>" selected><?php echo $row_datos_ctr_gr['ver_corte_finn']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Si">Si - Se visualiza en la boleta.</option>
    <option value = "No">No - Ocultar en la boleta.</option>

                                                            
                            </select>  

                            
</div>





<div class="input-group col-md-6 col-lg-3 col-xl-3 mt-2" data-toggle="tooltip" data-placement="top" title="Seleccionar el tipo de boleta que los representantes podrán ver para este grado, sección o nivel." >

                <div class="input-group-prepend">
                      <span class="input-group-text alert-danger "  id="basic-addon1"><i><b>Ver Boleta?:</b></i></span>  
                    </div>
   


<select class="form-control" id="ver_tipo_boleta" name="ver_tipo_boleta">
  

<option value="<?php echo $row_datos_ctr_gr['ver_tipo_boleta']; ?>" selected><?php echo $row_datos_ctr_gr['ver_tipo_boleta']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Alfanumérica">Alfanumérica (Numérica, Alfabética o Literal)</option>
    <option value = "Descriptiva">Descriptiva (Describe los objetivos cumplidos)</option>
    <option value = "Ambas">Ambas</option>
                                                            
                            </select>  

                            
</div>



<div class="input-group col-md-6 col-lg-4 col-xl-4 mt-2">

                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i><b>Docente, Profesor(a):</b></i></span>  
                    </div>
   


<select class="form-control" id="ver_profesor" name="ver_profesor">
  

<option value="<?php

if ($la_seccionXX == 1) {$este_es_el_p = $row_datos_ctr_gr['el_profesor_es_a']; echo $row_datos_ctr_gr['el_profesor_es_a']; }
if ($la_seccionXX == 2) {$este_es_el_p = $row_datos_ctr_gr['el_profesor_es_b']; echo $row_datos_ctr_gr['el_profesor_es_b']; }
if ($la_seccionXX == 9) {$este_es_el_p = $row_datos_ctr_gr['el_profesor_es_u']; echo $row_datos_ctr_gr['el_profesor_es_u']; }

if ($la_seccionXX == 11) {$este_es_el_p = $row_datos_ctr_gr['el_profesor_es_c']; echo $row_datos_ctr_gr['el_profesor_es_c']; }
if ($la_seccionXX == 12) {$este_es_el_p = $row_datos_ctr_gr['el_profesor_es_d']; echo $row_datos_ctr_gr['el_profesor_es_d']; }
if ($la_seccionXX == 13) {$este_es_el_p = $row_datos_ctr_gr['el_profesor_es_e']; echo $row_datos_ctr_gr['el_profesor_es_e']; }
if ($la_seccionXX == 14) {$este_es_el_p = $row_datos_ctr_gr['el_profesor_es_f']; echo $row_datos_ctr_gr['el_profesor_es_f']; }
if ($la_seccionXX == 15) {$este_es_el_p = $row_datos_ctr_gr['el_profesor_es_g']; echo $row_datos_ctr_gr['el_profesor_es_g']; }

 ?>" selected><?php





include("../conectar.php");

$query_el_es = "SELECT id_per, apellido_per, nombre_per FROM plantilla_personal
                        
         WHERE  id_per = '$este_es_el_p' limit 1 ";

$datos_plantilla_el_es = mysqli_query($enlace, $query_el_es) or die(mysqli_error());
$row_datos_plantilla_el_es = mysqli_fetch_assoc($datos_plantilla_el_es); 

mysqli_close($enlace);


$firstape_el = strtok($row_datos_plantilla_el_es['apellido_per'], ' ');

$lastape_el = strstr($row_datos_plantilla_el_es['apellido_per'], ' ');


if ($lastape_el[1] != '') {

   $firstCharacterlastape_el = $lastape_el[1]; 
}

else {
    $firstCharacterlastape_el ='';
}

 echo $firstape_el; ?> <?php echo $firstCharacterlastape_el; ?>.


<?php 

$firstnam_el = strtok($row_datos_plantilla_el_es['nombre_per'], ' ');

$lastnam_el = strstr($row_datos_plantilla_el_es['nombre_per'], ' ');



if ($lastnam_el[1] != '') {

   $firstCharacterlastnam_el = $lastnam_el[1]; 
}

else {
    $firstCharacterlastnam_el ='';
}

  

                                     echo $firstnam_el; ?> <?php echo $firstCharacterlastnam_el; ?>.   







</option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

<?php

include("../conectar.php");

$query = "SELECT * FROM plantilla_contratados, plantilla_personal, plantilla_cargos, cargos_all
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
         and  plantilla_contratados.id_contrato = cargos_all.id_contrato
        and  plantilla_cargos.id_cargo = cargos_all.id_cargo  
           
            and  id_grupo = '5'
            and status = '1'            

            ORDER BY apellido_per ASC ";

$datos_plantilla = mysqli_query($enlace, $query) or die(mysqli_error());
$row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla); 
$totalRows_datos_plantilla = mysqli_num_rows($row_datos_plantilla);

mysqli_close($enlace);

?>

<?php do{?>                               

<option value="<?php echo $row_datos_plantilla['id_per']; ?>"><?php

$firstape = strtok($row_datos_plantilla['apellido_per'], ' ');

$lastape = strstr($row_datos_plantilla['apellido_per'], ' ');


if ($lastape[1] != '') {

   $firstCharacterlastape = $lastape[1]; 
}

else {
    $firstCharacterlastape ='';
}



 echo $firstape; ?> <?php echo $firstCharacterlastape; ?>. 


<?php 

$firstnam = strtok($row_datos_plantilla['nombre_per'], ' ');

$lastnam = strstr($row_datos_plantilla['nombre_per'], ' ');



if ($lastnam[1] != '') {

   $firstCharacterlastnam = $lastnam[1]; 
}

else {
    $firstCharacterlastnam ='';
}

  

                                     echo $firstnam; ?> <?php echo $firstCharacterlastnam; ?>.




</option>

                                <?php } while ($row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla)); ?>   

    

                                                            
                            </select>


</div>






<div class="col-md-12 col-lg-1 col-xl-1 mt-2">

 <button type="submit" name="status_lapsos" class="btn btn-info btn-block">
            <i class="far fa-save fa-lg"></i></button>

</div>



</div>
</form>
<p class="text-dark mt-1"><b>Nota:</b> Afecta a todas las actividades del mismo, nivel, grado o año, su función dependerá del permiso maestro en el cual deberán estar todas las opciones permitidas.</p>


<hr>














<br>
<h5 class="text-danger"><i class="fas fa-hat-cowboy fa-lg"></i> <b>Configuración Adicional:</b></h5>


<form method="POST">
 <div class="form-row mt-1 ">



   <div class="input-group input-group-sm col-md-12 col-lg-6 mb-1">
                  <div class="input-group-prepend">
                        <span class="input-group-text alert-warning" id="basic-addon1"><i>Permitir carga de notas en la primera actividad?:</i></span>  
                      </div> 

  <select class="form-control" id="comp_actividad1" name="comp_actividad1">    
  <option value="<?php echo $row_datos_controlasign["actividad1"]; ?>" selected><?php echo $row_datos_controlasign["actividad1"]; ?></option>
  <option disabled></option>
                                  <optgroup label="Cambiar a...">
                                  <option disabled></option>
      <option value = "Si">Si</option>
      <option value = "No">No</option>                              
                              </select>  
  </div>


     <div class="input-group input-group-sm col-md-6 col-lg-1 mb-1">
                  <div class="input-group-prepend">
                        <span class="input-group-text alert-warning" id="basic-addon1"><i>2?:</i></span>  
                      </div> 

  <select class="form-control" id="comp_actividad2" name="comp_actividad2">    
  <option value="<?php echo $row_datos_controlasign["actividad2"]; ?>" selected><?php echo $row_datos_controlasign["actividad2"]; ?></option>
  <option disabled></option>
                                  <optgroup label="Cambiar a...">
                                  <option disabled></option>
      <option value = "Si">Si</option>
      <option value = "No">No</option>                              
                              </select>  
  </div>



     <div class="input-group input-group-sm col-md-6 col-lg-1 mb-1">
                  <div class="input-group-prepend">
                        <span class="input-group-text alert-warning" id="basic-addon1"><i>3:</i></span>  
                      </div> 

  <select class="form-control" id="comp_actividad3" name="comp_actividad3">    
  <option value="<?php echo $row_datos_controlasign["actividad3"]; ?>" selected><?php echo $row_datos_controlasign["actividad3"]; ?></option>
  <option disabled></option>
                                  <optgroup label="Cambiar a...">
                                  <option disabled></option>
      <option value = "Si">Si</option>
      <option value = "No">No</option>                              
                              </select>  
  </div>



     <div class="input-group input-group-sm col-md-3 col-lg-1 mb-1">
                  <div class="input-group-prepend">
                        <span class="input-group-text alert-warning" id="basic-addon1"><i>4:</i></span>  
                      </div> 

  <select class="form-control" id="comp_actividad4" name="comp_actividad4">    
  <option value="<?php echo $row_datos_controlasign["actividad4"]; ?>" selected><?php echo $row_datos_controlasign["actividad4"]; ?></option>
  <option disabled></option>
                                  <optgroup label="Cambiar a...">
                                  <option disabled></option>
      <option value = "Si">Si</option>
      <option value = "No">No</option>                              
                              </select>  
  </div>



  <div class="input-group input-group-sm col-md-3 col-lg-1 mb-1">
                  <div class="input-group-prepend">
                        <span class="input-group-text alert-warning" id="basic-addon1"><i>5:</i></span>  
                      </div> 

  <select class="form-control" id="comp_actividad5" name="comp_actividad5">    
  <option value="<?php echo $row_datos_controlasign["actividad5"]; ?>" selected><?php echo $row_datos_controlasign["actividad5"]; ?></option>
  <option disabled></option>
                                  <optgroup label="Cambiar a...">
                                  <option disabled></option>
      <option value = "Si">Si</option>
      <option value = "No">No</option>                              
                              </select>  
  </div>


     <div class="input-group input-group-sm col-md-3 col-lg-1 mb-1">
                  <div class="input-group-prepend">
                        <span class="input-group-text alert-warning" id="basic-addon1"><i>6:</i></span>  
                      </div> 

  <select class="form-control" id="comp_actividad6" name="comp_actividad6">    
  <option value="<?php echo $row_datos_controlasign["actividad6"]; ?>" selected><?php echo $row_datos_controlasign["actividad6"]; ?></option>
  <option disabled></option>
                                  <optgroup label="Cambiar a...">
                                  <option disabled></option>
      <option value = "Si">Si</option>
      <option value = "No">No</option>                              
                              </select>  
  </div>



   <div class="input-group input-group-sm col-md-3 col-lg-1 mb-1">
                  <div class="input-group-prepend">
                        <span class="input-group-text alert-warning" id="basic-addon1"><i>7:</i></span>  
                      </div> 

  <select class="form-control" id="comp_actividad7" name="comp_actividad7">    
  <option value="<?php echo $row_datos_controlasign["actividad7"]; ?>" selected><?php echo $row_datos_controlasign["actividad7"]; ?></option>
  <option disabled></option>
                                  <optgroup label="Cambiar a...">
                                  <option disabled></option>
      <option value = "Si">Si</option>
      <option value = "No">No</option>                              
                              </select>  
  </div>





            
</div>


 <div class="form-row mt-1 ">


   <div class="input-group input-group-sm col-md-6 col-lg-6 mb-1">
                  <div class="input-group-prepend">
                        <span class="input-group-text alert-dark" id="basic-addon1"><i>Ocultar a los representantes el % para el 1er Lapso:</i></span>  
                      </div> 

  <select class="form-control" id="hide_1" name="hide_1">    
  <option value="<?php echo $row_datos_controlasign["ocultar_1er_porcent"]; ?>" selected><?php echo $row_datos_controlasign["ocultar_1er_porcent"]; ?></option>
  <option disabled></option>
                                  <optgroup label="Cambiar a...">
                                  <option disabled></option>
      <option value = "Si">Si</option>
      <option value = "No">No</option>                              
                              </select>  
  </div>



   <div class="input-group input-group-sm col-md-6 col-lg-3 mb-1">
                  <div class="input-group-prepend">
                        <span class="input-group-text alert-dark" id="basic-addon1"><i>Ocultar % 2° L.:</i></span>  
                      </div> 

  <select class="form-control" id="hide_2" name="hide_2">    
  <option value="<?php echo $row_datos_controlasign["ocultar_2do_porcent"]; ?>" selected><?php echo $row_datos_controlasign["ocultar_2do_porcent"]; ?></option>
  <option disabled></option>
                                  <optgroup label="Cambiar a...">
                                  <option disabled></option>
      <option value = "Si">Si</option>
      <option value = "No">No</option>                              
                              </select>  
  </div>


   <div class="input-group input-group-sm col-md-12 col-lg-3 mb-1">
                  <div class="input-group-prepend">
                        <span class="input-group-text alert-dark" id="basic-addon1"><i>Ocultar % 3° L.:</i></span>  
                      </div> 

  <select class="form-control" id="hide_3" name="hide_3">    
  <option value="<?php echo $row_datos_controlasign["ocultar_3er_porcent"]; ?>" selected><?php echo $row_datos_controlasign["ocultar_3er_porcent"]; ?></option>
  <option disabled></option>
                                  <optgroup label="Cambiar a...">
                                  <option disabled></option>
      <option value = "Si">Si</option>
      <option value = "No">No</option>                              
                              </select>  
  </div>


 



 </div>




 <div class="form-row mt-1 ">



   <div class="input-group input-group-sm col-md-12 col-lg-12 mb-2">
                  <div class="input-group-prepend">
                        <span class="input-group-text alert-danger" id="basic-addon1"><i>Mostrar a los representantes la boleta del 1er Lapso? (<b>Activar al culminar el 1er lapso</b>):</i></span>  
                      </div> 

  <select class="form-control" id="show_boleta_1" name="show_boleta_1">    
  <option value="<?php echo $row_datos_controlasign["mostrar_boleta_uno"]; ?>" selected><?php echo $row_datos_controlasign["mostrar_boleta_uno"]; ?></option>
  <option disabled></option>
                                  <optgroup label="Cambiar a...">
                                  <option disabled></option>
      <option value = "Si">Si</option>
      <option value = "No">No</option>                              
                              </select>  
  </div>






   <div class="input-group input-group-sm col-md-12 col-lg-7 mb-1">
                  <div class="input-group-prepend">
                        <span class="input-group-text alert-danger" id="basic-addon1"><i>Mostrar boleta 1er & 2do Lapso? (<b>Activar al culminar el 2do lapso</b>):</i></span>  
                      </div> 

  <select class="form-control" id="show_boleta_2" name="show_boleta_2">    
  <option value="<?php echo $row_datos_controlasign["mostrar_boleta_dos"]; ?>" selected><?php echo $row_datos_controlasign["mostrar_boleta_dos"]; ?></option>
  <option disabled></option>
                                  <optgroup label="Cambiar a...">
                                  <option disabled></option>
      <option value = "Si">Si</option>
      <option value = "No">No</option>                              
                              </select>  
  </div>


   <div class="input-group input-group-sm col-md-12 col-lg-4 mb-1">
                  <div class="input-group-prepend">
                        <span class="input-group-text alert-danger" id="basic-addon1"><i>Mostrar boleta 1er al 3er Lapso?</i></span>  
                      </div> 

  <select class="form-control" id="show_boleta_3" name="show_boleta_3">    
  <option value="<?php echo $row_datos_controlasign["mostrar_boleta_tres"]; ?>" selected><?php echo $row_datos_controlasign["mostrar_boleta_tres"]; ?></option>
  <option disabled></option>
                                  <optgroup label="Cambiar a...">
                                  <option disabled></option>
      <option value = "Si">Si</option>
      <option value = "No">No</option>                              
                              </select>  
  </div>





        <input type="hidden" id="en_este_ok" name="en_este_ok" value="<?php echo $row_datos_controlasign["id_grado"]; ?>">


    <div class="col-md-12 col-lg-1 mb-1">
            <button type="submit" name="status_all_actividades" class="btn btn-sm btn-outline-danger btn-block">
            <i class="far fa-save fa-lg"></i></button>
    </div> 


</div>






</form>



<p class="text-danger"><b>Atención:</b> Afecta a todas las actividades del mismo, nivel, grado o año, y funciona independientemente de si se ha restringido el acceso
por asignatura o por lapso.</p>



  </div>
</div>







<div class="card bg-info mt-3 mb-3">
  
<div class="card-body">
   

<form method="POST" <?php if ($_SESSION['permiso_full'] == 1 ){?>style="display:none"<?php } ?> autocomplete="off" >


<div class="form-row">
<div class="input-group  col-md-6 mt-2 mb-2">



      <div class="input-group-prepend">
        <span class="input-group-text alert-dark" id=""><i><b>Clave de Ingreso:</b></i></span>          
      </div>

      <input maxlength="7" type="text" class="form-control" id="pass_de_acceso" name="pass_de_acceso" required>

     <div class="input-group-append">
    <button type="submit" name="abrir_asign" class="input-group btn btn-dark btn-block form-control "> 
                <i class="fas fa-unlock-alt fa-lg"></i>&nbsp; Abrir</button>  
    </div> 



</div>           
</div>  </form>



        <button <?php if ( ($row_datos_controlasign['a_aaa'] == '' or $_SESSION['permiso_full'] == 0) and $_SESSION['permiso_unico_a'] == 0){?>style="display:none"<?php } ?>  type="button" class="btn btn-light btn-sm mb-2" style="width: 210px;"
onclick=" window.open('plantilla_control_00_carga_las_notas_des.php?l22h=<?php echo $tituloJKL; ?>&54yu=<?php echo $row_datos_controlasign['a_aaa']; ?>&p78g=<?php echo $el_cicloXX; ?>&k2yt=<?php echo $el_gradoXX; ?>&rt4m=<?php echo $la_seccionXX; ?>&65bc=1', '_blank'); return false;">

<?php

if ($row_datos_controlasign['a_suma']!=1) {

$suma_activo_a = '<i class="far fa-thumbs-down"></i>';
$suma_posible_a = '<i class="far fa-thumbs-up"></i>';  

}
else {

 $suma_activo_a = '';
  $suma_posible_a = '';

}

 echo $row_datos_controlasign['a_aaa'];?> &nbsp;<?php echo $suma_activo_a; ?>



 </button> 
        

        <button <?php if ( ($row_datos_controlasign['b_bbb'] == '' or $_SESSION['permiso_full'] == 0) and $_SESSION['permiso_unico_b'] == 0 ){?>style="display:none"<?php } ?>  type="button" class="btn btn-light btn-sm mb-2" style="width: 210px;"
onclick=" window.open('plantilla_control_00_carga_las_notas_des.php?l22h=<?php echo $tituloJKL; ?>&54yu=<?php echo $row_datos_controlasign['b_bbb']; ?>&p78g=<?php echo $el_cicloXX; ?>&k2yt=<?php echo $el_gradoXX; ?>&rt4m=<?php echo $la_seccionXX; ?>&65bc=2', '_blank'); return false;">



<?php

if ($row_datos_controlasign['b_suma']!=1) {

$suma_activo_b = '<i class="far fa-thumbs-down"></i>';
$suma_posible_b = '<i class="far fa-thumbs-up"></i>';

}
else {

  $suma_activo_b = '';
  $suma_posible_b = '';




}

 echo $row_datos_controlasign['b_bbb'];?> &nbsp;<?php echo $suma_activo_b; ?>
  




</button>


        <button <?php if ( ($row_datos_controlasign['c_ccc'] == '' or $_SESSION['permiso_full'] == 0) and $_SESSION['permiso_unico_c'] == 0 ){?>style="display:none"<?php } ?>  type="button" class="btn btn-light btn-sm mb-2" style="width: 210px;"
onclick=" window.open('plantilla_control_00_carga_las_notas_des.php?l22h=<?php echo $tituloJKL; ?>&54yu=<?php echo $row_datos_controlasign['c_ccc']; ?>&p78g=<?php echo $el_cicloXX; ?>&k2yt=<?php echo $el_gradoXX; ?>&rt4m=<?php echo $la_seccionXX; ?>&65bc=3', '_blank'); return false;">


<?php

if ($row_datos_controlasign['c_suma']!=1) {
$suma_activo_c = '<i class="far fa-thumbs-down"></i>';
$suma_posible_c = '<i class="far fa-thumbs-up"></i>';
  
}
else {

  $suma_activo_c = '';
  $suma_posible_c = '';




}

 echo $row_datos_controlasign['c_ccc'];?> &nbsp;<?php echo $suma_activo_c; ?>  



</button>


        <button <?php if ( ($row_datos_controlasign['d_ddd'] == '' or $_SESSION['permiso_full'] == 0) and $_SESSION['permiso_unico_d'] == 0 ){?>style="display:none"<?php } ?>  type="button" class="btn btn-light btn-sm mb-2" style="width: 210px;"
onclick=" window.open('plantilla_control_00_carga_las_notas_des.php?l22h=<?php echo $tituloJKL; ?>&54yu=<?php echo $row_datos_controlasign['d_ddd']; ?>&p78g=<?php echo $el_cicloXX; ?>&k2yt=<?php echo $el_gradoXX; ?>&rt4m=<?php echo $la_seccionXX; ?>&65bc=4', '_blank'); return false;">


<?php

if ($row_datos_controlasign['d_suma']!=1) {
$suma_activo_d = '<i class="far fa-thumbs-down"></i>';
$suma_posible_d = '<i class="far fa-thumbs-up"></i>';
  
}
else {

  $suma_activo_d = '';
  $suma_posible_d = '';

}

 echo $row_datos_controlasign['d_ddd'];?> &nbsp;<?php echo $suma_activo_d; ?>  
  



</button>


        
        <button <?php if ( ($row_datos_controlasign['e_eee'] == '' or $_SESSION['permiso_full'] == 0) and $_SESSION['permiso_unico_e'] == 0 ){?>style="display:none"<?php } ?>  type="button" class="btn btn-light btn-sm mb-2" style="width: 210px;"
onclick=" window.open('plantilla_control_00_carga_las_notas_des.php?l22h=<?php echo $tituloJKL; ?>&54yu=<?php echo $row_datos_controlasign['e_eee']; ?>&p78g=<?php echo $el_cicloXX; ?>&k2yt=<?php echo $el_gradoXX; ?>&rt4m=<?php echo $la_seccionXX; ?>&65bc=5', '_blank'); return false;">

<?php

if ($row_datos_controlasign['e_suma']!=1) {
$suma_activo_e = '<i class="far fa-thumbs-down"></i>';
$suma_posible_e = '<i class="far fa-thumbs-up"></i>';
  
}
else {

  $suma_activo_e = '';
  $suma_posible_e = '';




}

 echo $row_datos_controlasign['e_eee'];?> &nbsp;<?php echo $suma_activo_e; ?>  

  



</button>


        <button <?php if ( ($row_datos_controlasign['f_fff'] == '' or $_SESSION['permiso_full'] == 0) and $_SESSION['permiso_unico_f'] == 0 ){?>style="display:none"<?php } ?>  type="button" class="btn btn-light btn-sm mb-2" style="width: 210px;"
onclick=" window.open('plantilla_control_00_carga_las_notas_des.php?l22h=<?php echo $tituloJKL; ?>&54yu=<?php echo $row_datos_controlasign['f_fff']; ?>&p78g=<?php echo $el_cicloXX; ?>&k2yt=<?php echo $el_gradoXX; ?>&rt4m=<?php echo $la_seccionXX; ?>&65bc=6', '_blank'); return false;">

<?php

if ($row_datos_controlasign['f_suma']!=1) {

$suma_activo_f = '<i class="far fa-thumbs-down"></i>';
$suma_posible_f = '<i class="far fa-thumbs-up"></i>';
  
}
else {

  $suma_activo_f = '';
  $suma_posible_f = '';

}

 echo $row_datos_controlasign['f_fff'];?> &nbsp;<?php echo $suma_activo_f; ?>  
  


</button>



        <button <?php if ( ($row_datos_controlasign['g_ggg'] == '' or $_SESSION['permiso_full'] == 0) and $_SESSION['permiso_unico_g'] == 0 ){?>style="display:none"<?php } ?>  type="button" class="btn btn-light btn-sm mb-2" style="width: 210px;"
onclick=" window.open('plantilla_control_00_carga_las_notas_des.php?l22h=<?php echo $tituloJKL; ?>&54yu=<?php echo $row_datos_controlasign['g_ggg']; ?>&p78g=<?php echo $el_cicloXX; ?>&k2yt=<?php echo $el_gradoXX; ?>&rt4m=<?php echo $la_seccionXX; ?>&65bc=7', '_blank'); return false;">

<?php

if ($row_datos_controlasign['g_suma']!=1) {
$suma_activo_g = '<i class="far fa-thumbs-down"></i>';
$suma_posible_g = '<i class="far fa-thumbs-up"></i>';
  
}
else {


  $suma_activo_g = '';
  $suma_posible_g = '';

}

 echo $row_datos_controlasign['g_ggg'];?> &nbsp;<?php echo $suma_activo_g; ?>  

  


</button>


        <button <?php if ( ($row_datos_controlasign['h_hhh'] == '' or $_SESSION['permiso_full'] == 0) and $_SESSION['permiso_unico_h'] == 0 ){?>style="display:none"<?php } ?>  type="button" class="btn btn-light btn-sm mb-2" style="width: 210px;"
onclick=" window.open('plantilla_control_00_carga_las_notas_des.php?l22h=<?php echo $tituloJKL; ?>&54yu=<?php echo $row_datos_controlasign['h_hhh']; ?>&p78g=<?php echo $el_cicloXX; ?>&k2yt=<?php echo $el_gradoXX; ?>&rt4m=<?php echo $la_seccionXX; ?>&65bc=8', '_blank'); return false;">

<?php

if ($row_datos_controlasign['h_suma']!=1) {
$suma_activo_h = '<i class="far fa-thumbs-down"></i>';
$suma_posible_h = '<i class="far fa-thumbs-up"></i>';
  
}
else {

  $suma_activo_h = '';
  $suma_posible_h = '';

}

 echo $row_datos_controlasign['h_hhh'];?> &nbsp;<?php echo $suma_activo_h; ?>  

  


</button>



        <button <?php if ( ($row_datos_controlasign['i_iii'] == '' or $_SESSION['permiso_full'] == 0) and $_SESSION['permiso_unico_i'] == 0 ){?>style="display:none"<?php } ?>  type="button" class="btn btn-light btn-sm mb-2" style="width: 210px;"
onclick=" window.open('plantilla_control_00_carga_las_notas_des.php?l22h=<?php echo $tituloJKL; ?>&54yu=<?php echo $row_datos_controlasign['i_iii']; ?>&p78g=<?php echo $el_cicloXX; ?>&k2yt=<?php echo $el_gradoXX; ?>&rt4m=<?php echo $la_seccionXX; ?>&65bc=9', '_blank'); return false;">

<?php

if ($row_datos_controlasign['i_suma']!=1) {
$suma_activo_i = '<i class="far fa-thumbs-down"></i>';
$suma_posible_i = '<i class="far fa-thumbs-up"></i>';
  
}
else {

  $suma_activo_i = '';
  $suma_posible_i = '';

}

 echo $row_datos_controlasign['i_iii'];?> &nbsp;<?php echo $suma_activo_i; ?>  
  


</button>


        <button <?php if ( ($row_datos_controlasign['j_jjj'] == '' or $_SESSION['permiso_full'] == 0) and $_SESSION['permiso_unico_j'] == 0 ){?>style="display:none"<?php } ?>  type="button" class="btn btn-light btn-sm mb-2" style="width: 210px;"
onclick=" window.open('plantilla_control_00_carga_las_notas_des.php?l22h=<?php echo $tituloJKL; ?>&54yu=<?php echo $row_datos_controlasign['j_jjj']; ?>&p78g=<?php echo $el_cicloXX; ?>&k2yt=<?php echo $el_gradoXX; ?>&rt4m=<?php echo $la_seccionXX; ?>&65bc=10', '_blank'); return false;">

<?php

if ($row_datos_controlasign['j_suma']!=1) {
$suma_activo_j = '<i class="far fa-thumbs-down"></i>';
$suma_posible_j = '<i class="far fa-thumbs-up"></i>';
  
}
else {

  $suma_activo_j = '';
  $suma_posible_j = '';

}

 echo $row_datos_controlasign['j_jjj'];?> &nbsp;<?php echo $suma_activo_j; ?>  
  


</button>



        <button <?php if ( ($row_datos_controlasign['k_kkk'] == '' or $_SESSION['permiso_full'] == 0) and $_SESSION['permiso_unico_k'] == 0 ){?>style="display:none"<?php } ?>  type="button" class="btn btn-light btn-sm mb-2" style="width: 210px;"
onclick=" window.open('plantilla_control_00_carga_las_notas_des.php?l22h=<?php echo $tituloJKL; ?>&54yu=<?php echo $row_datos_controlasign['k_kkk']; ?>&p78g=<?php echo $el_cicloXX; ?>&k2yt=<?php echo $el_gradoXX; ?>&rt4m=<?php echo $la_seccionXX; ?>&65bc=11', '_blank'); return false;">

<?php

if ($row_datos_controlasign['k_suma']!=1) {
$suma_activo_k = '<i class="far fa-thumbs-down"></i>';
$suma_posible_k = '<i class="far fa-thumbs-up"></i>';
  
}
else {

  $suma_activo_k = '';
  $suma_posible_k = '';

}

 echo $row_datos_controlasign['k_kkk'];?> &nbsp;<?php echo $suma_activo_k; ?>  
  


</button>


        <button <?php if ( ($row_datos_controlasign['l_lll'] == '' or $_SESSION['permiso_full'] == 0) and $_SESSION['permiso_unico_l'] == 0 ){?>style="display:none"<?php } ?> type="button" class="btn btn-light btn-sm mb-2" style="width: 210px;"
onclick=" window.open('plantilla_control_00_carga_las_notas_des.php?l22h=<?php echo $tituloJKL; ?>&54yu=<?php echo $row_datos_controlasign['l_lll']; ?>&p78g=<?php echo $el_cicloXX; ?>&k2yt=<?php echo $el_gradoXX; ?>&rt4m=<?php echo $la_seccionXX; ?>&65bc=12', '_blank'); return false;">

<?php

if ($row_datos_controlasign['l_suma']!=1) {
$suma_activo_l = '<i class="far fa-thumbs-down"></i>';
$suma_posible_l = '<i class="far fa-thumbs-up"></i>';
  
}
else {
    $suma_activo_l = '';
  $suma_posible_l = '';


}

 echo $row_datos_controlasign['l_lll'];?> &nbsp;<?php echo $suma_activo_l; ?>  


</button>



<button <?php if ( ($row_datos_controlasign['m_mmm'] == '' or $_SESSION['permiso_full'] == 0) and $_SESSION['permiso_unico_m'] == 0 ){?>style="display:none"<?php } ?>  type="button" class="btn btn-light btn-sm mb-2" style="width: 210px;"
onclick=" window.open('plantilla_control_00_carga_las_notas_des.php?l22h=<?php echo $tituloJKL; ?>&54yu=<?php echo $row_datos_controlasign['m_mmm']; ?>&p78g=<?php echo $el_cicloXX; ?>&k2yt=<?php echo $el_gradoXX; ?>&rt4m=<?php echo $la_seccionXX; ?>&65bc=13', '_blank'); return false;">


<?php

if ($row_datos_controlasign['m_suma']!=1) {
$suma_activo_m = '<i class="far fa-thumbs-down"></i>';
$suma_posible_m = '<i class="far fa-thumbs-up"></i>';
  
}
else {
  $suma_activo_m = '';
  $suma_posible_m = '';

}

 echo $row_datos_controlasign['m_mmm'];?> &nbsp;<?php echo $suma_activo_m; ?>  
  


</button>


<button <?php if ( ($row_datos_controlasign['n_nnn'] == '' or $_SESSION['permiso_full'] == 0) and $_SESSION['permiso_unico_n'] == 0 ){?>style="display:none"<?php } ?>  type="button" class="btn btn-light btn-sm mb-2" style="width: 210px;"
onclick=" window.open('plantilla_control_00_carga_las_notas_des.php?l22h=<?php echo $tituloJKL; ?>&54yu=<?php echo $row_datos_controlasign['n_nnn']; ?>&p78g=<?php echo $el_cicloXX; ?>&k2yt=<?php echo $el_gradoXX; ?>&rt4m=<?php echo $la_seccionXX; ?>&65bc=14', '_blank'); return false;">

<?php

if ($row_datos_controlasign['n_suma']!=1) {
$suma_activo_n = '<i class="far fa-thumbs-down"></i>';
$suma_posible_n = '<i class="far fa-thumbs-up"></i>';
  
}
else {

    $suma_activo_n = '';
  $suma_posible_n = '';



}

 echo $row_datos_controlasign['n_nnn'];?> &nbsp;<?php echo $suma_activo_n; ?>  
  


</button>

  </div>
</div>










<link rel="stylesheet" type="text/css" href="01 css/file-upload.css" />
<script src="02 js/file-upload.js"></script>




  <div class="card mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-sm " id="dataTable" width="100%" cellspacing="0"  >
             
              <thead>
                <tr>
                  
                  <th>N°</th>
                  <th>Datos del estudiante:</th>

                  <th>Ranking:</th>
                 

                  <th <?php if ($_SESSION['permiso_full'] == 0 ){?>style="display:none"<?php } ?>>Notas y/o Boletas:</th>
                                  

                  <th <?php if ($_SESSION['permiso_full'] == 0 ){?>style="display:none"<?php } ?> >Previsualización:</th>                  
                  
                  <th <?php if ($_SESSION['permiso_full'] == 0 ){?>style="display:none"<?php } ?> ><i class="fas fa-cog"></i></th>
                  
                </tr>
              </thead>
                          
              
              <tbody>









                <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->


                <?php

$id_estxx1 = $row_datos_control['id_estud'];

include("../conectar.php");



$reg_estu_HOYx = "SELECT reg_estu_actual.id_reg_estu_actual, reg_estu_actual.id_estud, reg_estu_actual.cursa_actualmente, reg_estu_actual.grado_actual,
reg_estu_actual.edad_actual, reg_estu_actual.id_seccion, edades.* FROM  edades, reg_estu_actual  
           WHERE edades.id_edad = reg_estu_actual.edad_actual
             and id_estud = '$id_estxx1'

             and reg_estu_actual.cursa_actualmente = '$el_cicloXX'
            Group BY id_reg_estu_actual LIMIT 1";   // me selecciona el ultimo es decir el actual en curso

$q_reg_estu_HOYx = mysqli_query($enlace, $reg_estu_HOYx) or die(mysqli_error());

$r_d_reg_estu_HOYx = mysqli_fetch_array($q_reg_estu_HOYx); 





 mysqli_close($enlace); 



                 ?>



                <tr>

              




    <td class="align-middle" align="center">
      
<?php


    echo $i;
    $i++;

    
  ?>



    </td>
    
    <td class="align-middle" align="center">

<?php  if ( $row_datos_control['retirado_si_o_no'] == '1') {
      $resultiBB = '<b><span style="color:purple;"> " RETIRADO " <i class="fas fa-hand-paper fa-lg"></i> </span></b>&nbsp;<br>'  ;
 
      echo $resultiBB;
    }   ?>


    

      <b><?php echo $row_datos_control['apellidos_estu'];?></b> <br>
    <?php echo $row_datos_control['nombre_estu']; echo ','; $la_edad=$r_d_reg_estu_HOYx["nombre_edad"]; ?> <br>
    <b><?php echo 'Edad'?></b> <?php include("plantilla_estudiantes_00_upd_fot_ctrl.php");   ?>








  <?php  if ( $row_datos_control['id_sexo'] == '2') {
  $edadM1 = '<span style="color:#417FD5;"><b>'  ;
   $edadM2 = '</b> años</span> '  ;
  echo " ".$edadM1."  ".$r_d_reg_estu_HOYx["nombre_edad"]." ".$edadM2." ";
}

else 
  {

   $edadM1 = '<span style="color:#ff3399;"><b>'  ;
   $edadM2 = '</b> años</span> '  ;
  echo " ".$edadM1."  ".$r_d_reg_estu_HOYx["nombre_edad"]." ".$edadM2." ";
}

;?><br>


 <?php


        $diaf = date('d', strtotime($row_datos_control['nacimiento_estu']) );
        $mesf = date('n', strtotime($row_datos_control['nacimiento_estu']) ); 

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

   ?>

<span style="color: #876DA0;"><i class="fas fa-birthday-cake"></i></span>  <?php echo $diaf; ?> de <?php echo $mf; ?>. 
 <!--    - (Reg: <?php echo $row_datos_control['id_estud']; ?>)  -->


  


</td>



  <td class="align-middle" align="center">

<span style="color:darkorange;"><b><?php

if ($row_datos_control['cla_4'] == '' or $row_datos_control['cla_4'] == '0') {
  $la_posicion_es = '1000';
}

else {
 $la_posicion_es = $row_datos_control['cla_4'];

}


 echo $la_posicion_es; ?></b></span><br>

                  <img id="myImg" src="<?php echo $row_datos_control['foto_estu']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio5.jpg';" width="100px" />  </td>










<td class="align-middle" align="center" <?php if ($_SESSION['permiso_full'] == 0 ){?>style="display:none"<?php } ?> >



    <div class="form-row mb-2">

                      <!--boton 1 -->

<div class="col-lg-6">




<script type="text/javascript">
    $(document).ready(function() {
        $('.file-upload').file_upload();
    });
</script>

<?php 


$identifi = $row_datos_control['ci_estu'];
$id_del_estu = $row_datos_control['id_estud'];
$indicativo = '1ro';


$boletapdf1 = '../zzz_notas_boletas/zzz_notas_boletas_1er_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.pdf';
$boletapng1 = '../zzz_notas_boletas/zzz_notas_boletas_1er_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.png';
$boletajpg1 = '../zzz_notas_boletas/zzz_notas_boletas_1er_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.jpg';

$si_hay1 ='0';



if (file_exists($boletapdf1)) 
{
  $si_hay1 ='1';
    
  }

if (file_exists($boletapng1)) 
{
  $si_hay1 ='1';
   
  }


if (file_exists($boletajpg1)) 
{
  $si_hay1 ='1';
    
  }



if ($si_hay1 == 0) {
  $respuesta1 = 'show';
  $alterno1 = 'none';
}

else { $respuesta1 = 'none';  $alterno1 = 'show';}





?>


<div style="display: <?php echo $respuesta1; ?>">

<form class="form-horizontal" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10" data-toggle="tooltip" data-placement="top" title="Cargar nota ó boleta." >
            <label class="file-upload btn btn-secondary btn-sm">
                1°<input type="file" name="archivo1" id="archivo1<?php echo $row_datos_control['id_estud']; ?>"  accept=".pdf,.png,.jpg"
                 onchange="document.getElementById('el_subbb1<?php echo $row_datos_control['id_estud']; ?>').click()">
            </label>
        </div>
    </div>

 <input type="hidden" id="ci_estu1<?php echo $row_datos_control['id_estud']; ?>"   name="ci_estu1"  value="<?php echo $row_datos_control['ci_estu']; ?>">

  <input type="hidden" id="id_estud_1"   name="id_estud_1"  value="<?php echo $row_datos_control['id_estud']; ?>">

  <input type="hidden" id="ciclo_del_1"   name="ciclo_del_1"  value="<?php echo $periodoo_ciclones; ?>">

  <button type="submit" name="save_1" class="btn btn-primary btn-sm" id="el_subbb1<?php echo $row_datos_control['id_estud']; ?>"  style="display:none" >
  <i class="fas fa-save"></i></button>   


</form>

</div>



<div style="display: <?php echo $alterno1; ?>">

<form  method="POST" >
    
     <input type="hidden" id="ci_estu1<?php echo $row_datos_control['id_estud']; ?>"   name="ci_estu1"  value="<?php echo $row_datos_control['ci_estu']; ?>">

  <input type="hidden" id="ciclo_del_1"   name="ciclo_del_1"  value="<?php echo $periodoo_ciclones; ?>">
    <input type="hidden" id="id_estud_1"   name="id_estud_1"  value="<?php echo $row_datos_control['id_estud']; ?>">

   <button type="submit" name="borrar_1" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar" >
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <b><i class="far fa-trash-alt"></i> 1° </b>
                      </button>

</form>

<?php
$ci_estu = $row_datos_control['ci_estu'];
$el_id_estu = $row_datos_control['id_estud'];
$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_1er_Corte"; 
$estamos_en_ciclo =  $periodoo_ciclones;
$indicativo = '1ro';

$files_1 = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estu.'.*'); 

foreach($files_1 as $file_1) { 
   
    if(is_file($file_1))  
    
        // Delete the given file 
       $la_file_1 = $file_1;  
} 
?>

<button onclick="document.getElementById('link_1<?php echo $row_datos_control['ci_estu']; ?>').click()" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Descargar" >
  <i class="fas fa-download"></i> 1°  </button> <a id="link_1<?php echo $row_datos_control['ci_estu']; ?>" href="<?php echo $la_file_1; ?>" download hidden></a>

</div> 





</div>





<div class="col-lg-6"  >




<script type="text/javascript">
    $(document).ready(function() {
        $('.file-upload').file_upload();
    });
</script>

<?php 


$identifi = $row_datos_control['ci_estu'];
$id_del_estu = $row_datos_control['id_estud'];
$indicativo = '2do';

$boletapdf2 = '../zzz_notas_boletas/zzz_notas_boletas_2do_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.pdf';
$boletapng2 = '../zzz_notas_boletas/zzz_notas_boletas_2do_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.png';
$boletajpg2 = '../zzz_notas_boletas/zzz_notas_boletas_2do_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.jpg';

$si_hay2 ='0';



if (file_exists($boletapdf2)) 
{
  $si_hay2 ='1';
    
  }

if (file_exists($boletapng2)) 
{
  $si_hay2 ='1';
   
  }


if (file_exists($boletajpg2)) 
{
  $si_hay2 ='1';
    
  }



if ($si_hay2 == 0) {
  $respuesta2 = 'show';
  $alterno2 = 'none';
}

else { $respuesta2 = 'none';  $alterno2 = 'show';}



?>


<div style="display: <?php echo $respuesta2; ?>">

<form class="form-horizontal" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10" data-placement="top" title="Cargar nota ó boleta." >
            <label class="file-upload btn btn-secondary btn-sm">
                2°<input type="file" name="archivo2" id="archivo2<?php echo $row_datos_control['id_estud']; ?>"  accept=".pdf,.png,.jpg"
                 onchange="document.getElementById('el_subbb2<?php echo $row_datos_control['id_estud']; ?>').click()">
            </label>
        </div>
    </div>

 <input type="hidden" id="ci_estu2<?php echo $row_datos_control['id_estud']; ?>"   name="ci_estu2"  value="<?php echo $row_datos_control['ci_estu']; ?>">

 <input type="hidden" id="id_estud_2"   name="id_estud_2"  value="<?php echo $row_datos_control['id_estud']; ?>">

   <input type="hidden" id="ciclo_del_2"   name="ciclo_del_2"  value="<?php echo $periodoo_ciclones; ?>">

  <button type="submit" name="save_2" class="btn btn-primary btn-sm" id="el_subbb2<?php echo $row_datos_control['id_estud']; ?>"  style="display:none">
  <i class="fas fa-save"></i></button>


</form>

</div>



<div style="display: <?php echo $alterno2; ?>">

<form  method="POST" >
    
     <input type="hidden" id="ci_estu2<?php echo $row_datos_control['id_estud']; ?>"   name="ci_estu2"  value="<?php echo $row_datos_control['ci_estu']; ?>">

   <input type="hidden" id="ciclo_del_2"   name="ciclo_del_2"  value="<?php echo $periodoo_ciclones; ?>">
    <input type="hidden" id="id_estud_2"   name="id_estud_2"  value="<?php echo $row_datos_control['id_estud']; ?>">

   <button type="submit" name="borrar_2" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar" >
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <b><i class="far fa-trash-alt"></i> 2° </b>
                      </button>

</form> 


<?php
$ci_estu = $row_datos_control['ci_estu'];
$el_id_estu = $row_datos_control['id_estud'];
$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_2do_Corte"; 
$estamos_en_ciclo =  $periodoo_ciclones;
$indicativo = '2do';

$files_2 = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estu.'.*'); 

foreach($files_2 as $file_2) { 
   
    if(is_file($file_2))  
    
        // Delete the given file 
       $la_file_2 = $file_2;  
} 
?>

<button onclick="document.getElementById('link_2<?php echo $row_datos_control['ci_estu']; ?>').click()" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Descargar" >
  <i class="fas fa-download"></i> 2°  </button> <a id="link_2<?php echo $row_datos_control['ci_estu']; ?>" href="<?php echo $la_file_2; ?>" download hidden></a>


</div>









</div>



</div>





    









    <div class="form-row mt-3 mb-2">

                      <!--boton 3 -->

<div class="col-lg-6">




<script type="text/javascript">
    $(document).ready(function() {
        $('.file-upload').file_upload();
    });
</script>

<?php 


$identifi = $row_datos_control['ci_estu'];
$id_del_estu = $row_datos_control['id_estud'];
$indicativo = '3ro';

$boletapdf3 = '../zzz_notas_boletas/zzz_notas_boletas_3er_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.pdf';
$boletapng3 = '../zzz_notas_boletas/zzz_notas_boletas_3er_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.png';
$boletajpg3 = '../zzz_notas_boletas/zzz_notas_boletas_3er_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.jpg';

$si_hay3 ='0';



if (file_exists($boletapdf3)) 
{
  $si_hay3 ='1';
    
  }

if (file_exists($boletapng3)) 
{
  $si_hay3 ='1';
   
  }


if (file_exists($boletajpg3)) 
{
  $si_hay3 ='1';
    
  }



if ($si_hay3 == 0) {
  $respuesta3 = 'show';
  $alterno3 = 'none';
}

else { $respuesta3 = 'none';  $alterno3 = 'show';}



?>


<div style="display: <?php echo $respuesta3; ?>">

<form class="form-horizontal" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <label class="file-upload btn btn-secondary btn-sm" data-placement="top" title="Cargar nota ó boleta." >
                3°<input type="file" name="archivo3" id="archivo3<?php echo $row_datos_control['id_estud']; ?>"  accept=".pdf,.png,.jpg"
                 onchange="document.getElementById('el_subbb3<?php echo $row_datos_control['id_estud']; ?>').click()">
            </label>
        </div>
    </div>

 <input type="hidden" id="ci_estu3<?php echo $row_datos_control['id_estud']; ?>"   name="ci_estu3"  value="<?php echo $row_datos_control['ci_estu']; ?>">

<input type="hidden" id="id_estud_3"   name="id_estud_3"  value="<?php echo $row_datos_control['id_estud']; ?>">

    <input type="hidden" id="ciclo_del_3"   name="ciclo_del_3"  value="<?php echo $periodoo_ciclones; ?>">

  <button type="submit" name="save_3" class="btn btn-primary btn-sm" id="el_subbb3<?php echo $row_datos_control['id_estud']; ?>"  style="display:none">
  <i class="fas fa-save"></i></button>


</form>

</div>



<div style="display: <?php echo $alterno3; ?>">

<form  method="POST" >
    
     <input type="hidden" id="ci_estu3<?php echo $row_datos_control['id_estud']; ?>"   name="ci_estu3"  value="<?php echo $row_datos_control['ci_estu']; ?>">

   <input type="hidden" id="ciclo_del_3"   name="ciclo_del_3"  value="<?php echo $periodoo_ciclones; ?>">
   <input type="hidden" id="id_estud_3"   name="id_estud_3"  value="<?php echo $row_datos_control['id_estud']; ?>">

   <button type="submit" name="borrar_3" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar" >
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <b><i class="far fa-trash-alt"></i> 3° </b>
                      </button>

</form>


<?php
$ci_estu = $row_datos_control['ci_estu'];
$el_id_estu = $row_datos_control['id_estud'];
$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_3er_Corte"; 
$estamos_en_ciclo =  $periodoo_ciclones;
$indicativo = '3ro';

$files_3 = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estu.'.*'); 

foreach($files_3 as $file_3) { 
   
    if(is_file($file_3))  
    
        // Delete the given file 
       $la_file_3 = $file_3;  
} 
?>

<button onclick="document.getElementById('link_3<?php echo $row_datos_control['ci_estu']; ?>').click()" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Descargar" >
  <i class="fas fa-download"></i> 3°  </button> <a id="link_3<?php echo $row_datos_control['ci_estu']; ?>" href="<?php echo $la_file_3; ?>" download hidden></a>

</div>





</div>





<div class="col-lg-6"  >




<script type="text/javascript">
    $(document).ready(function() {
        $('.file-upload').file_upload();
    });
</script>

<?php 


$identifi = $row_datos_control['ci_estu'];
$id_del_estu = $row_datos_control['id_estud'];
$indicativo = '4to';

$boletapdf4 = '../zzz_notas_boletas/zzz_notas_boletas_4to_Final/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.pdf';
$boletapng4 = '../zzz_notas_boletas/zzz_notas_boletas_4to_Final/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.png';
$boletajpg4 = '../zzz_notas_boletas/zzz_notas_boletas_4to_Final/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.jpg';

$si_hay4 ='0';



if (file_exists($boletapdf4)) 
{
  $si_hay4 ='1';
    
  }

if (file_exists($boletapng4)) 
{
  $si_hay4 ='1';
   
  }


if (file_exists($boletajpg4)) 
{
  $si_hay4 ='1';
    
  }



if ($si_hay4 == 0) {
  $respuesta4 = 'show';
  $alterno4 = 'none';
}

else { $respuesta4 = 'none';  $alterno4 = 'show';}



?>


<div style="display: <?php echo $respuesta4; ?>">

<form class="form-horizontal" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10" data-placement="top" title="Cargar nota ó boleta." >
            <label class="file-upload btn btn-secondary btn-sm">
                4°<input type="file" name="archivo4" id="archivo4<?php echo $row_datos_control['id_estud']; ?>"  accept=".pdf,.png,.jpg"
                 onchange="document.getElementById('el_subbb4<?php echo $row_datos_control['id_estud']; ?>').click()">
            </label>
        </div>
    </div>

 <input type="hidden" id="ci_estu4<?php echo $row_datos_control['id_estud']; ?>"   name="ci_estu4"  value="<?php echo $row_datos_control['ci_estu']; ?>">

    <input type="hidden" id="ciclo_del_4"   name="ciclo_del_4"  value="<?php echo $periodoo_ciclones; ?>">

    <input type="hidden" id="id_estud_4"   name="id_estud_4"  value="<?php echo $row_datos_control['id_estud']; ?>">

  <button type="submit" name="save_4" class="btn btn-primary btn-sm" id="el_subbb4<?php echo $row_datos_control['id_estud']; ?>"  style="display:none">
  <i class="fas fa-save"></i></button>


</form>

</div>



<div style="display: <?php echo $alterno4; ?>">

<form  method="POST" >
    
     <input type="hidden" id="ci_estu4<?php echo $row_datos_control['id_estud']; ?>"   name="ci_estu4"  value="<?php echo $row_datos_control['ci_estu']; ?>">

        <input type="hidden" id="ciclo_del_4"   name="ciclo_del_4"  value="<?php echo $periodoo_ciclones; ?>">
            <input type="hidden" id="id_estud_4"   name="id_estud_4"  value="<?php echo $row_datos_control['id_estud']; ?>">

   <button type="submit" name="borrar_4" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar" >
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <b><i class="far fa-trash-alt"></i> 4° </b>
                      </button>

</form>

<?php
$ci_estu = $row_datos_control['ci_estu'];
$el_id_estu = $row_datos_control['id_estud'];
$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_4to_Final"; 
$estamos_en_ciclo =  $periodoo_ciclones;
$indicativo = '4to';

$files_4 = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estu.'.*'); 

foreach($files_4 as $file_4) { 
   
    if(is_file($file_4))  
    
        // Delete the given file 
       $la_file_4 = $file_4;  
} 
?>

<button onclick="document.getElementById('link_4<?php echo $row_datos_control['ci_estu']; ?>').click()" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Descargar" >
  <i class="fas fa-download"></i> 4°  </button> <a id="link_4<?php echo $row_datos_control['ci_estu']; ?>" href="<?php echo $la_file_4; ?>" download hidden></a>

</div>









</div>



</div>





 </td>

                  
<?php      //   para setear los colores, de esta manera solo se ha de cambiar una sola variable y se riega en todas
           //  las filas de la tabla....

$color0 =  '#DCDAD7';

$color1 =  '#DCF6C0';

$color2 =  '#F6EFC0';

$color3 =  '#F6DDC0';


 ?>



<td class="align-middle" align="center" <?php if ($_SESSION['permiso_full'] == 0 ){?>style="display:none"<?php } ?> >


<?php include ("tablero.php"); ?>



</td>






                  <td class="align-middle" align="center" <?php if ($_SESSION['permiso_full'] == 0 ){?>style="display:none"<?php } ?> > 


                    <div class="form-row mb-2">

                      <!--boton 1 -->
                      <div class="col-lg-6" data-toggle="tooltip" data-placement="top" title="Ver Notas">
  
                      <button type="button" class="btn btn-outline-success "
onclick=" window.open('plantilla_control_00_carga_ver_notas.php?id_e=<?php echo $row_datos_control['id_estud']; ?>&name_e=<?php echo $row_datos_control['nombre_estu']; ?>&ape_e=<?php echo $row_datos_control['apellidos_estu']; ?>&expe_e=<?php echo $row_datos_control['estu_expediente']; ?>&ci_est=<?php echo $row_datos_control['ci_estu']; ?>&ciclo=<?php echo $el_cicloXX; ?>&grado=<?php echo $el_gradoXX; ?>&las_asignn=<?php echo $las_asignaturas; ?>&id_reg_actual=<?php echo $r_d_reg_estu_HOYx['id_reg_estu_actual']; ?>', '_blank'); return false;">  




  

                                         <i class="far fa-eye fa-lg"></i> 
                      </button>

                      </div> 

                    </div>



                  </td>
                  



                </tr>
                


                 <?php } while ($row_datos_control = mysqli_fetch_assoc($datos_control)); ?>

                
              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->

      




<?php

$number1 = '0';

 include("../conectar.php");


$lap1_query = "SELECT reg_estudiantes.id_estud, reg_estudiantes.retirado_si_o_no, reg_estudiantes.nota_1, divisiones.*, grados.id_grado, grados.id_division,
reg_estu_actual.id_reg_estu_actual, reg_estu_actual.id_estud, reg_estu_actual.cursa_actualmente, reg_estu_actual.grado_actual, reg_estu_actual.fecha_inscripcion, 
reg_estu_actual.id_seccion, reg_estu_actual.el_activo FROM reg_estu_actual, divisiones, grados, reg_estudiantes
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$la_seccionXX'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$el_cicloXX'
         and  grados.id_grado = '$el_gradoXX'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud ORDER BY nota_1 DESC" ;

$lap1_datos_control = mysqli_query($enlace, $lap1_query) or die(mysqli_error());

while ($row1 = mysqli_fetch_assoc($lap1_datos_control)) { // Important line !!!


$estudiante_calif_id2 = $row1['id_estud'];


$number1 = $number1 + 1 ;

$calif_101 = "UPDATE reg_estudiantes
SET cla_1= '$number1'
WHERE id_estud='$estudiante_calif_id2'";


$datos_calif_101 = mysqli_query($enlace, $calif_101) or die(mysqli_error());


    }
   



$number2 = '0';




$lap2_query = "SELECT reg_estudiantes.id_estud, reg_estudiantes.retirado_si_o_no, reg_estudiantes.nota_2, divisiones.*, grados.id_grado, grados.id_division,
reg_estu_actual.id_reg_estu_actual, reg_estu_actual.id_estud, reg_estu_actual.cursa_actualmente, reg_estu_actual.grado_actual, reg_estu_actual.fecha_inscripcion, 
reg_estu_actual.id_seccion, reg_estu_actual.el_activo FROM reg_estu_actual, divisiones, grados, reg_estudiantes
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$la_seccionXX'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$el_cicloXX'
         and  grados.id_grado = '$el_gradoXX'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud ORDER BY nota_2 DESC" ;

$lap2_datos_control = mysqli_query($enlace, $lap2_query) or die(mysqli_error());

while ($row2 = mysqli_fetch_assoc($lap2_datos_control)) { // Important line !!!


$estudiante_calif_id2 = $row2['id_estud'];


$number2 = $number2 + 1 ;

$calif_102 = "UPDATE reg_estudiantes
SET cla_2= '$number2'
WHERE id_estud='$estudiante_calif_id2'";


$datos_calif_102 = mysqli_query($enlace, $calif_102) or die(mysqli_error());


    }
   


$number3 = '0';




$lap3_query = "SELECT reg_estudiantes.id_estud, reg_estudiantes.retirado_si_o_no, reg_estudiantes.nota_3, divisiones.*, grados.id_grado, grados.id_division,
reg_estu_actual.id_reg_estu_actual, reg_estu_actual.id_estud, reg_estu_actual.cursa_actualmente, reg_estu_actual.grado_actual, reg_estu_actual.fecha_inscripcion, 
reg_estu_actual.id_seccion, reg_estu_actual.el_activo FROM reg_estu_actual, divisiones, grados, reg_estudiantes
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$la_seccionXX'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$el_cicloXX'
         and  grados.id_grado = '$el_gradoXX'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud ORDER BY nota_3 DESC" ;

$lap3_datos_control = mysqli_query($enlace, $lap3_query) or die(mysqli_error());

while ($row3 = mysqli_fetch_assoc($lap3_datos_control)) { // Important line !!!


$estudiante_calif_id3 = $row3['id_estud'];


$number3 = $number3 + 1 ;

$calif_103 = "UPDATE reg_estudiantes
SET cla_3= '$number3'
WHERE id_estud='$estudiante_calif_id3'";


$datos_calif_103 = mysqli_query($enlace, $calif_103) or die(mysqli_error());


    }
   


$number4 = '0';




$lap4_query = "SELECT reg_estudiantes.id_estud, reg_estudiantes.retirado_si_o_no, reg_estudiantes.nota_4, divisiones.*, grados.id_grado, grados.id_division,
reg_estu_actual.id_reg_estu_actual, reg_estu_actual.id_estud, reg_estu_actual.cursa_actualmente, reg_estu_actual.grado_actual, reg_estu_actual.fecha_inscripcion, 
reg_estu_actual.id_seccion, reg_estu_actual.el_activo FROM reg_estu_actual, divisiones, grados, reg_estudiantes
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$la_seccionXX'
         and  fecha_inscripcion != ''   /*antes   el_activo = '1' */
         and  cursa_actualmente = '$el_cicloXX'
         and  grados.id_grado = '$el_gradoXX'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud ORDER BY nota_4 DESC" ;

$lap4_datos_control = mysqli_query($enlace, $lap4_query) or die(mysqli_error());

while ($row4 = mysqli_fetch_assoc($lap4_datos_control)) { // Important line !!!


$estudiante_calif_id4 = $row4['id_estud'];


$number4 = $number4 + 1 ;

$calif_104 = "UPDATE reg_estudiantes
SET cla_4= '$number4'
WHERE id_estud='$estudiante_calif_id4'";


$datos_calif_104 = mysqli_query($enlace, $calif_104) or die(mysqli_error());


    }
   

mysqli_close($enlace);



     ?>







    <div class="card-footer text-muted"><b>Info:</b> Para poder ver y/o modificar las notas usted debe poseer una clave de acceso.</div> 

  </div> <!-- cierre card -->


                           

  </div>   <!-- cierre container fluid -->
</div>  <!-- cierre wrapper -->



<script type="text/javascript">


  
function stripspaces(input)
{
  input.value = input.value.replace(/(^[\s]+|[\s]+$)/g, '');

  return true;
}



</script>









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
                el_down.innerHTML = "Introducir Números Enteros."; 
            } 
            return a; 
        } 
    </script> 


















<?php include ("Footer_off.php"); ?>
