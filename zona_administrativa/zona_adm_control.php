<?php
error_reporting(0);   // con esto no me muestra el error de la variable de secion claver

include("identificador.php");

  if ($_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario' && $_SESSION ['cargo'] != 'Cajero' )

    {

      session_unset();                     // libera todas las variables de sessión
        setcookie("id", "", time()-60*60);   // crea la cookie id con el valor vacio y que caduque una hora antes.
        $_COOKIE ['id']="";                  // borra el valor de id contenido en el cookie, por medida extra

        setcookie("cargo", "", time()-60*60);   // crea la cookie cargo con el valor vacio y que caduque una hora antes.
        $_COOKIE ['cargo']="";                  // borra el valor de cargo contenido en el cookie, por medida extra

        header("Location: ../index.php");

    }



header('Cache-Control: max-age=900');

include("../conectar.php");
include("listas_php/00_lista_control.php");     // enlista los resultados de la tarjetas del menu incio



$_SESSION ['id_del_repre_del_alum']="";





/* proceso anterior q medio guardaba

 if(isset($_POST['cambiar_periodo']))
    {
  $id_periodo_seleccionadoXX = $_POST['set_periodo'];
    }

    else {$id_periodo_seleccionadoXX = ""; }

 $id_periodo_seleccionado = $id_periodo_seleccionadoXX;    */



  if(isset($_POST['cambiar_periodo']))
    {
      $id_periodo_seleccionadoXX = $_POST['set_periodo'];
    }

    else {$id_periodo_seleccionadoXX = ""; }

if ($_SESSION['periodo_claver'] != '' and $id_periodo_seleccionadoXX == '' ) {
  $id_periodo_seleccionado = $_SESSION['periodo_claver'];
}

else { $id_periodo_seleccionado = $id_periodo_seleccionadoXX; }




if ($id_periodo_seleccionado == "") {  

$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  status = '1' and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);

/* $id_periodo_clave =  $row_datos_periodo_actual['id_periodo_es'];  */

$_SESSION['periodo_claver']=$row_datos_periodo_actual['id_periodo_es'];

$id_periodo_clave = $_SESSION['periodo_claver'];

}


else {

$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  id_periodo_es = '$id_periodo_seleccionado'
 and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);

/*$id_periodo_clave =  $id_periodo_seleccionado; */

$_SESSION['periodo_claver']=  $id_periodo_seleccionado;

$id_periodo_clave = $_SESSION['periodo_claver'];

 }


// me permite obtener el id del periodo anterior a partir del periodo seleccionado...

$seleccionado = "SELECT *   FROM temporada_escolar WHERE id_periodo_es ='$id_periodo_clave' LIMIT 1";
$datos_seleccionado = mysqli_query($enlace, $seleccionado) or die(mysqli_error());
$row_datos_seleccionado = mysqli_fetch_assoc($datos_seleccionado);

$respuestagg = $row_datos_seleccionado['periodo_escolar'];

$restA = substr($respuestagg, 0, -5);


$comienzo = $restA - 1;
$fin = $restA;

$per_resultante = "".$comienzo."-".$fin."";


$per_anterior_seleccionado = "SELECT id_periodo_es FROM temporada_escolar WHERE periodo_escolar ='$per_resultante' LIMIT 1";
$datos_anterior_seleccionado = mysqli_query($enlace, $per_anterior_seleccionado) or die(mysqli_error());
$row_datos_anterior_seleccionado = mysqli_fetch_assoc($datos_anterior_seleccionado);

$respuesta_per_anterior_gg = $row_datos_anterior_seleccionado['id_periodo_es'];

//




$queryperiodo_act1 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar DESC";
$datos_periodo_act1 = mysqli_query($enlace, $queryperiodo_act1) or die(mysqli_error());
$row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1);



$queryperiodo_oldie = "SELECT * FROM temporada_escolar WHERE old = '5' LIMIT 1";
$datos_periodo_oldie = mysqli_query($enlace, $queryperiodo_oldie) or die(mysqli_error());
$row_datos_periodo_oldie = mysqli_fetch_assoc($datos_periodo_oldie);

$id_periodo_oldie =  $row_datos_periodo_oldie['id_periodo_es'];



$queryperiodo_nextie = "SELECT * FROM temporada_escolar WHERE status = '1' LIMIT 1";
$datos_periodo_nextie = mysqli_query($enlace, $queryperiodo_nextie) or die(mysqli_error());
$row_datos_periodo_nextie = mysqli_fetch_assoc($datos_periodo_nextie);

$id_periodo_nextie =  $row_datos_periodo_nextie['id_periodo_es'];



$queryperiodo_siguiente_fut = "SELECT * FROM temporada_escolar WHERE next = '8' LIMIT 1";
$datos_periodo_siguiente_fut = mysqli_query($enlace, $queryperiodo_siguiente_fut) or die(mysqli_error());
$row_datos_periodo_siguiente_fut = mysqli_fetch_assoc($datos_periodo_siguiente_fut);

$el_periodo_siguiente_fut =  $row_datos_periodo_siguiente_fut['periodo_escolar'];



include("listas_php/00_listar_conteo_control_inicial.php");

include("listas_php/00_listar_conteo_control_basica.php");

include("listas_php/00_listar_conteo_control_media.php");

include("listas_php/00_listar_conteo_control_media_g.php");


include("listas_php/00_listar_conteo_control_separados.php");

include("listas_php/00_listar_conteo_exacto.php");

include("listas_php/00_listar_conteo_exacto_separados.php");




$totalRows_datos_estudiantes_ins_total =  $totalRows_datos_estudiantes_ins_mediaG + $totalRows_datos_estudiantes_ins_media + $totalRows_datos_estudiantes_ins_basica + $totalRows_datos_estudiantes_ins_inicial;


$totalRows_datos_estudiantes_ins_totalF =  $totalRows_datos_estudiantes_ins_mediaGF + $totalRows_datos_estudiantes_ins_mediaF + $totalRows_datos_estudiantes_ins_basicaF + $totalRows_datos_estudiantes_ins_inicialF;


$totalRows_datos_estudiantes_ins_totalM = $totalRows_datos_estudiantes_ins_total - $totalRows_datos_estudiantes_ins_totalF;



$totalRows_datos_estudiantes_pre_total =  $totalRows_datos_estudiantes_pre_mediaG + $totalRows_datos_estudiantes_pre_media + $totalRows_datos_estudiantes_pre_basica + $totalRows_datos_estudiantes_pre_inicial;


$totalRows_datos_estudiantes_pre_totalF =  $totalRows_datos_estudiantes_pre_mediaGF + $totalRows_datos_estudiantes_pre_mediaF + $totalRows_datos_estudiantes_pre_basicaF + $totalRows_datos_estudiantes_pre_inicialF;


$totalRows_datos_estudiantes_pre_totalM = $totalRows_datos_estudiantes_pre_total - $totalRows_datos_estudiantes_pre_totalF;






$totalRows_datos_estudiantes_no_ins_total =  $totalRows_datos_estudiantes_no_ins_mediaG + $totalRows_datos_estudiantes_no_ins_media + $totalRows_datos_estudiantes_no_ins_basica + $totalRows_datos_estudiantes_no_ins_inicial;


$totalRows_datos_estudiantes_no_ins_totalF =  $totalRows_datos_estudiantes_no_ins_mediaGF + $totalRows_datos_estudiantes_no_ins_mediaF + $totalRows_datos_estudiantes_no_ins_basicaF + $totalRows_datos_estudiantes_no_ins_inicialF;


$totalRows_datos_estudiantes_no_ins_totalM = $totalRows_datos_estudiantes_no_ins_total - $totalRows_datos_estudiantes_no_ins_totalF;





$totalRows_datos_estudiantes_ret_total =  $totalRows_datos_estudiantes_ret_mediaG + $totalRows_datos_estudiantes_ret_media + $totalRows_datos_estudiantes_ret_basica + $totalRows_datos_estudiantes_ret_inicial;


$totalRows_datos_estudiantes_ret_totalF =  $totalRows_datos_estudiantes_ret_mediaGF + $totalRows_datos_estudiantes_ret_mediaF + $totalRows_datos_estudiantes_ret_basicaF + $totalRows_datos_estudiantes_ret_inicialF;


$totalRows_datos_estudiantes_ret_totalM = $totalRows_datos_estudiantes_ret_total - $totalRows_datos_estudiantes_ret_totalF;








mysqli_close($enlace); 



 if(isset($_POST['el_doc_del_repre']))
    {

       if (!$_POST['search_this_doc_id'])      // verifica que no este vacío
          {   $errorZ .= "- El Doc. de Id. del representante es requerido. "; }


           if (strlen($_POST['search_this_doc_id']) >9 )  // verifica que el campo cedula no sea mayor a 9 caracteres
              {  $errorZ .= "- Doc. de Id. ingresado invalido."; }   // mas de 9.

          if(!is_numeric($_POST['search_this_doc_id']) ) // verifica que sean solo números
            {  $errorZ .= "- Doc. de Id. ingresado no valido."; }


            if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. "  ";  
              }


          else {

                include("../conectar.php");

                $queryCTB = "SELECT * FROM reg_representante WHERE ci_repre='".mysqli_real_escape_string($enlace,$_POST['search_this_doc_id'])."' LIMIT 1";

                        $resultCTB = mysqli_query($enlace,$queryCTB);
                        $fila_query=mysqli_fetch_assoc($resultCTB); 



                        $el_id_del_repreW = $fila_query["id_repre"]; 

                        $el_inscribe_hasta_repreW = $fila_query["inscribe_hasta"];
                        $pre_ins_si_o_no_repreW = $fila_query["pre_ins_si_o_no"];

                        $el_inscribe_nuev_hasta_repreW = $fila_query["inscribe_nuevamente_hasta"];
                        $pre_ins_nuev_si_o_no_repreW = $fila_query["pre_ins_nuev_si_o_no"];

                        $chequeo_habilitacion = $fila_query["acceso"];



                if (mysqli_num_rows($resultCTB)==0)
            {
             $errorZ.="- El N°. de Doc. de Id. ingresado, no se encuentra registrado.";  
                  } 


                  if ( $chequeo_habilitacion == '1' && mysqli_num_rows($resultCTB)!=0)
            {
             $errorZ.="- El representante&nbsp;<b>DEBE CONTACTAR CON ADMINISTRACIÓN</b>.";        
                  } 



                  if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                    {
                       $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " "; 
                  mysqli_close($enlace);

                    }


            else { 


               if ( ( $el_inscribe_hasta_repreW != '11'  OR  $pre_ins_si_o_no_repreW == '2' ) && mysqli_num_rows($resultC)!=0)
            {
             $errorZ.="- El representante&nbsp;<b>debe completar antes</b>&nbsp;una pre-inscripción, de&nbsp;<b>NUEVO INGRESO</b>.";        
                  } 



                  if (  ( $el_inscribe_nuev_hasta_repreW != '11'  OR  $pre_ins_nuev_si_o_no_repreW == '2' ) && mysqli_num_rows($resultC)!=0 )
            {
             $errorZ.="- El representante&nbsp;<b>debe completar antes</b>&nbsp;una pre-inscripción, de&nbsp;<b>ALUMNO REGULAR</b>.";        
                  } 


                  if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                    {
                       $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " "; 
                  mysqli_close($enlace);

                    }


                    else {    // dado que la ci si esta y el repre no tiene nada pendiente, procedo a abrir y enviar el id hacia la otra pagina


                      $_SESSION ['id_del_repre_del_alum'] = "".$el_id_del_repreW."";

                      mysqli_close($enlace);

                      header('Location: plantilla_estudiantes_add_extra.php');



                    }   // // cierre en donde envio el id hacia la otra pagina
       
          }


               }


    } 












 if(isset($_POST['el_doc_del_repre_dos']))
    {

       if (!$_POST['search_this_doc_id_dos'])      // verifica que no este vacío
          {   $errorZ .= "- El Doc. de Id. del representante es requerido. "; }


           if (strlen($_POST['search_this_doc_id_dos']) >9 )  // verifica que el campo cedula no sea mayor a 9 caracteres
              {  $errorZ .= "- Doc. de Id. ingresado invalido."; }   // mas de 9.

          if(!is_numeric($_POST['search_this_doc_id_dos']) ) // verifica que sean solo números
            {  $errorZ .= "- Doc. de Id. ingresado no valido."; }


            if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. "  ";  
              }


          else {

                include("../conectar.php");

                $queryCTB = "SELECT * FROM reg_representante WHERE ci_repre='".mysqli_real_escape_string($enlace,$_POST['search_this_doc_id_dos'])."' LIMIT 1";

                        $resultCTB = mysqli_query($enlace,$queryCTB);
                        $fila_query=mysqli_fetch_assoc($resultCTB); 



                        $el_id_del_repreW = $fila_query["id_repre"]; 

                        $el_inscribe_hasta_repreW = $fila_query["inscribe_hasta"];
                        $pre_ins_si_o_no_repreW = $fila_query["pre_ins_si_o_no"];

                        $el_inscribe_nuev_hasta_repreW = $fila_query["inscribe_nuevamente_hasta"];
                        $pre_ins_nuev_si_o_no_repreW = $fila_query["pre_ins_nuev_si_o_no"];

                        $chequeo_habilitacionW = $fila_query["acceso"];


                if (mysqli_num_rows($resultCTB)==0)
            {
             $errorZ.="- El N°. de Doc. de Id. ingresado, no se encuentra registrado.";  
                  } 


                                  if ( $chequeo_habilitacionW == '1' && mysqli_num_rows($resultCTB)!=0)
            {
             $errorZ.="- El representante&nbsp;<b>DEBE CONTACTAR CON ADMINISTRACIÓN</b>.";        
                  } 


                  if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                    {
                       $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " "; 
                  mysqli_close($enlace);

                    }


            else { 


               if ( ( $el_inscribe_hasta_repreW != '11'  OR  $pre_ins_si_o_no_repreW == '2' ) && mysqli_num_rows($resultC)!=0)
            {
             $errorZ.="- El representante&nbsp;<b>debe completar antes</b>&nbsp;una pre-inscripción, de&nbsp;<b>NUEVO INGRESO</b>.";        
                  } 



                  if (  ( $el_inscribe_nuev_hasta_repreW != '11'  OR  $pre_ins_nuev_si_o_no_repreW == '2' ) && mysqli_num_rows($resultC)!=0 )
            {
             $errorZ.="- El representante&nbsp;<b>debe completar antes</b>&nbsp;una pre-inscripción, de&nbsp;<b>ALUMNO REGULAR</b>.";        
                  } 


                  if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                    {
                       $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " "; 
                  mysqli_close($enlace);

                    }


                    else {    // dado que la ci si esta y el repre no tiene nada pendiente, procedo a abrir y enviar el id hacia la otra pagina


                      $_SESSION ['id_del_repre_del_alum'] = "".$el_id_del_repreW."";

                      mysqli_close($enlace);

                      header('Location: plantilla_estudiantes_add_extra_dos.php');



                    }   // // cierre en donde envio el id hacia la otra pagina
       
          }


               }


    } 




if(isset($_POST['buscar_estud_idx']))
    {


if (strlen($_POST['buscar_estud_id']) <=2 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 3 caracteres, para iniciar la busqueda. "; }


else { 

$busqueda = $_POST['buscar_estud_id'];
$ciclo_cicloso = $_POST['ciclo_cicloso'];

include("../conectar.php");






      $query_bus = " SELECT * FROM  reg_estudiantes, reg_estu_actual

WHERE  reg_estu_actual.id_estud = reg_estudiantes.id_estud
        
        /* and  reg_estu_actual.el_activo = '1'  */
         and  reg_estu_actual.cursa_actualmente = '$ciclo_cicloso'
         
      
            

         and reg_estudiantes.ci_estu LIKE '".$busqueda."%'  GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

mysqli_close($enlace); 

$enlace = "<b><a href=\" plantilla_estudiantes_search_id.php?ciclo=".$ciclo_cicloso."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultado.</a></b>";

$enlace_s = "<b><a href=\" plantilla_estudiantes_search_id.php?ciclo=".$ciclo_cicloso."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultados.</a></b>";


if ($totalRows_datos_plantilla_bus == 0 ) {

  $errorZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados. ";

}


if ($totalRows_datos_plantilla_bus >= 1 && $totalRows_datos_plantilla_bus < 2 ) {

  $exitoZ .= "- Se encontró &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia.&nbsp;&nbsp; ".$enlace." "; 

}


if ($totalRows_datos_plantilla_bus >= 2 && $totalRows_datos_plantilla_bus <=12 ) {

  $exitoZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencias.&nbsp;&nbsp; ".$enlace_s." "; 

}


if ($totalRows_datos_plantilla_bus >= 13) {

  $exitoZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencias, favor refinar busqueda. "; 

}



}

    } 






if(isset($_POST['buscar_estud_nombrex']))
    {


if (strlen($_POST['buscar_estud_nombre']) <=2 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 3 caracteres, para iniciar la busqueda. "; }


else { 

$busqueda = $_POST['buscar_estud_nombre'];
$ciclo_cicloso = $_POST['ciclo_cicloso'];

include("../conectar.php");






      $query_bus = " SELECT * FROM  reg_estudiantes, reg_estu_actual

WHERE  reg_estu_actual.id_estud = reg_estudiantes.id_estud
        
      /*   and  reg_estu_actual.el_activo = '1'  */
         and  reg_estu_actual.cursa_actualmente = '$ciclo_cicloso'
         
      
            

         and reg_estudiantes.nombre_estu LIKE '%".$busqueda."%'  GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

mysqli_close($enlace); 

$enlace = "<b><a href=\" plantilla_estudiantes_search_name.php?ciclo=".$ciclo_cicloso."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultado.</a></b>";

$enlace_s = "<b><a href=\" plantilla_estudiantes_search_name.php?ciclo=".$ciclo_cicloso."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultados.</a></b>";


if ($totalRows_datos_plantilla_bus == 0 ) {

  $errorZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados. ";

}


if ($totalRows_datos_plantilla_bus >= 1 && $totalRows_datos_plantilla_bus < 2 ) {

  $exitoZ .= "- Se encontró &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia.&nbsp;&nbsp; ".$enlace." "; 

}


if ($totalRows_datos_plantilla_bus >= 2 && $totalRows_datos_plantilla_bus <=12 ) {

  $exitoZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencias.&nbsp;&nbsp; ".$enlace_s." "; 

}


if ($totalRows_datos_plantilla_bus >= 13) {

  $exitoZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencias, favor refinar busqueda. "; 

}



}

    } 




if(isset($_POST['buscar_estud_apellx']))
    {


if (strlen($_POST['buscar_estud_apell']) <=2 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 3 caracteres, para iniciar la busqueda. "; }


else { 

$busqueda = $_POST['buscar_estud_apell'];
$ciclo_cicloso = $_POST['ciclo_cicloso'];


include("../conectar.php");




      $query_bus = " SELECT * FROM  reg_estudiantes, reg_estu_actual

WHERE  reg_estu_actual.id_estud = reg_estudiantes.id_estud
        
     /*    and  reg_estu_actual.el_activo = '1'  */
         and  reg_estu_actual.cursa_actualmente = '$ciclo_cicloso'
         
        
            

         and reg_estudiantes.apellidos_estu LIKE '%".$busqueda."%'  GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

mysqli_close($enlace); 

$enlace = "<b><a href=\" plantilla_estudiantes_search_ape.php?ciclo=".$ciclo_cicloso."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultado.</a></b>";

$enlace_s = "<b><a href=\" plantilla_estudiantes_search_ape.php?ciclo=".$ciclo_cicloso."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultados.</a></b>";


if ($totalRows_datos_plantilla_bus == 0 ) {

  $errorZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados. ";

}


if ($totalRows_datos_plantilla_bus >= 1 && $totalRows_datos_plantilla_bus < 2 ) {

  $exitoZ .= "- Se encontró &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia.&nbsp;&nbsp; ".$enlace." "; 

}


if ($totalRows_datos_plantilla_bus >= 2 && $totalRows_datos_plantilla_bus <=12 ) {

  $exitoZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencias.&nbsp;&nbsp; ".$enlace_s." "; 

}


if ($totalRows_datos_plantilla_bus >= 13) {

  $exitoZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencias, favor refinar busqueda. "; 

}



}

    } 







if(isset($_POST['buscar_estud_religx']))
    {


if (strlen($_POST['buscar_estud_relig']) <=2 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 3 caracteres, para iniciar la busqueda. "; }


else { 

$busqueda = $_POST['buscar_estud_relig'];
$ciclo_cicloso = $_POST['ciclo_cicloso'];


include("../conectar.php");




      $query_bus = " SELECT * FROM  reg_estudiantes, religiones, reg_estu_actual

WHERE  reg_estu_actual.id_estud = reg_estudiantes.id_estud
and reg_estudiantes.id_religion = religiones.id_religion
        
         and  reg_estu_actual.el_activo = '1'
         and  reg_estu_actual.cursa_actualmente = '$ciclo_cicloso'
         
         and reg_estudiantes.retirado_si_o_no = '0'
            

         and religiones.tipo_religion LIKE '".$busqueda."%'  GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

mysqli_close($enlace); 

$enlace = "<b><a href=\" plantilla_estudiantes_search_reli.php?ciclo=".$ciclo_cicloso."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultado.</a></b>";

$enlace_s = "<b><a href=\" plantilla_estudiantes_search_reli.php?ciclo=".$ciclo_cicloso."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultados.</a></b>";


if ($totalRows_datos_plantilla_bus == 0 ) {

  $errorZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados. ";

}


if ($totalRows_datos_plantilla_bus >= 1 && $totalRows_datos_plantilla_bus < 2 ) {

  $exitoZ .= "- Se encontró &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia.&nbsp;&nbsp; ".$enlace." "; 

}


if ($totalRows_datos_plantilla_bus >= 2 && $totalRows_datos_plantilla_bus <=12 ) {

  $exitoZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencias.&nbsp;&nbsp; ".$enlace_s." "; 

}


if ($totalRows_datos_plantilla_bus >= 13) {

  $exitoZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencias, favor refinar busqueda. "; 

}



}

    } 

















if(isset($_POST['buscar_edad']))
    {

$busqueda_ed = $_POST['buscar_edaddd'];

$ciclo_cicloso_ed = $_POST['ciclo_cicloso'];


if (!$_POST['buscar_edaddd'])      // verifica que no este vacío
    {   $errorZ .= "- Favor ingresar un número. "; }

        if(!is_numeric($_POST['buscar_edaddd']) ) // verifica que sean solo números
    {  $errorZ .= "- Ingrese solo números. "; }


else {    




include("../conectar.php");

/*
$q_corriente = "SELECT * FROM temporada_escolar WHERE status = '1' LIMIT 1";
$datos_corriente = mysqli_query($enlace, $q_corriente) or die(mysqli_error());
$row_datos_corriente = mysqli_fetch_assoc($datos_corriente); */

$id_corriente =  $ciclo_cicloso_ed;



      $query_bus_masc_ini = " SELECT * FROM  reg_estu_actual, reg_estudiantes, edades, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud
and reg_estu_actual.edad_actual = edades.id_edad
and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (52, 54, 55, 56)
 
and reg_estudiantes.id_sexo = '2'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and edades.nombre_edad = '$busqueda_ed'

            GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus_masc_ini = mysqli_query($enlace, $query_bus_masc_ini) or die(mysqli_error());
$totalRows_datos_plantilla_bus_masc_ini = mysqli_num_rows($datos_plantilla_bus_masc_ini); 




      $query_bus_fenm_ini = " SELECT * FROM  reg_estu_actual, reg_estudiantes, edades, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud
and reg_estu_actual.edad_actual = edades.id_edad
and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (52, 54, 55, 56)

and reg_estudiantes.id_sexo = '1'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and edades.nombre_edad = '$busqueda_ed'

            GROUP BY reg_estudiantes.id_estud";


$datos_plantilla_bus_fenm_ini = mysqli_query($enlace, $query_bus_fenm_ini) or die(mysqli_error());
$totalRows_datos_plantilla_bus_fenm_ini = mysqli_num_rows($datos_plantilla_bus_fenm_ini); 


$total_por_edades_ini = $totalRows_datos_plantilla_bus_masc_ini + $totalRows_datos_plantilla_bus_fenm_ini;









  $query_bus_masc_prim = " SELECT * FROM  reg_estu_actual, reg_estudiantes, edades, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud
and reg_estu_actual.edad_actual = edades.id_edad
and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (35, 36, 37, 38, 40, 41)
 
and reg_estudiantes.id_sexo = '2'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and edades.nombre_edad = '$busqueda_ed'

            GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus_masc_prim = mysqli_query($enlace, $query_bus_masc_prim) or die(mysqli_error());
$totalRows_datos_plantilla_bus_masc_prim = mysqli_num_rows($datos_plantilla_bus_masc_prim); 




      $query_bus_fenm_prim = " SELECT * FROM  reg_estu_actual, reg_estudiantes, edades, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud
and reg_estu_actual.edad_actual = edades.id_edad
and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (35, 36, 37, 38, 40, 41)

and reg_estudiantes.id_sexo = '1'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and edades.nombre_edad = '$busqueda_ed'

            GROUP BY reg_estudiantes.id_estud";


$datos_plantilla_bus_fenm_prim = mysqli_query($enlace, $query_bus_fenm_prim) or die(mysqli_error());
$totalRows_datos_plantilla_bus_fenm_prim = mysqli_num_rows($datos_plantilla_bus_fenm_prim); 


$total_por_edades_prim = $totalRows_datos_plantilla_bus_masc_prim + $totalRows_datos_plantilla_bus_fenm_prim;









  $query_bus_masc_med = " SELECT * FROM  reg_estu_actual, reg_estudiantes, edades, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud
and reg_estu_actual.edad_actual = edades.id_edad
and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (42, 43, 44)
 
and reg_estudiantes.id_sexo = '2'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and edades.nombre_edad = '$busqueda_ed'

            GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus_masc_med = mysqli_query($enlace, $query_bus_masc_med) or die(mysqli_error());
$totalRows_datos_plantilla_bus_masc_med = mysqli_num_rows($datos_plantilla_bus_masc_med); 




      $query_bus_fenm_med = " SELECT * FROM  reg_estu_actual, reg_estudiantes, edades, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud
and reg_estu_actual.edad_actual = edades.id_edad
and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (42, 43, 44)

and reg_estudiantes.id_sexo = '1'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and edades.nombre_edad = '$busqueda_ed'

            GROUP BY reg_estudiantes.id_estud";


$datos_plantilla_bus_fenm_med = mysqli_query($enlace, $query_bus_fenm_med) or die(mysqli_error());
$totalRows_datos_plantilla_bus_fenm_med = mysqli_num_rows($datos_plantilla_bus_fenm_med); 


$total_por_edades_med = $totalRows_datos_plantilla_bus_masc_med + $totalRows_datos_plantilla_bus_fenm_med;










  $query_bus_masc_gen = " SELECT * FROM  reg_estu_actual, reg_estudiantes, edades, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud
and reg_estu_actual.edad_actual = edades.id_edad
and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (45, 46, 53)
 
and reg_estudiantes.id_sexo = '2'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and edades.nombre_edad = '$busqueda_ed'

            GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus_masc_gen = mysqli_query($enlace, $query_bus_masc_gen) or die(mysqli_error());
$totalRows_datos_plantilla_bus_masc_gen = mysqli_num_rows($datos_plantilla_bus_masc_gen); 




      $query_bus_fenm_gen = " SELECT * FROM  reg_estu_actual, reg_estudiantes, edades, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud
and reg_estu_actual.edad_actual = edades.id_edad
and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (45, 46, 53)

and reg_estudiantes.id_sexo = '1'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and edades.nombre_edad = '$busqueda_ed'

            GROUP BY reg_estudiantes.id_estud";


$datos_plantilla_bus_fenm_gen = mysqli_query($enlace, $query_bus_fenm_gen) or die(mysqli_error());
$totalRows_datos_plantilla_bus_fenm_gen = mysqli_num_rows($datos_plantilla_bus_fenm_gen); 


$total_por_edades_gen = $totalRows_datos_plantilla_bus_masc_gen + $totalRows_datos_plantilla_bus_fenm_gen;








      $query_bus_masc = " SELECT * FROM  reg_estu_actual, reg_estudiantes, edades, sexo
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud
and reg_estu_actual.edad_actual = edades.id_edad
/* and grados.id_grado = reg_estu_actual.grado_actual
 and reg_estu_actual.grado_actual = '42' and reg_estu_actual.grado_actual = '43' and reg_estu_actual.grado_actual = '44' and reg_estu_actual.grado_actual = '45' and reg_estu_actual.grado_actual = '46'  */
and reg_estudiantes.id_sexo = '2'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and edades.nombre_edad = '$busqueda_ed'

            GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus_masc = mysqli_query($enlace, $query_bus_masc) or die(mysqli_error());
$totalRows_datos_plantilla_bus_masc = mysqli_num_rows($datos_plantilla_bus_masc); 




      $query_bus_fenm = " SELECT * FROM  reg_estu_actual, reg_estudiantes, edades, sexo
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud
and reg_estu_actual.edad_actual = edades.id_edad
/* and grados.id_grado = reg_estu_actual.grado_actual
 and reg_estu_actual.grado_actual = '42' and reg_estu_actual.grado_actual = '43' and reg_estu_actual.grado_actual = '44' and reg_estu_actual.grado_actual = '45' and reg_estu_actual.grado_actual = '46' */
and reg_estudiantes.id_sexo = '1'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and edades.nombre_edad = '$busqueda_ed'

            GROUP BY reg_estudiantes.id_estud";


$datos_plantilla_bus_fenm = mysqli_query($enlace, $query_bus_fenm) or die(mysqli_error());
$totalRows_datos_plantilla_bus_fenm = mysqli_num_rows($datos_plantilla_bus_fenm); 


$total_por_edades = $totalRows_datos_plantilla_bus_masc + $totalRows_datos_plantilla_bus_fenm;

mysqli_close($enlace); 




if ($total_por_edades == 0 ) {

  $errorZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados.";

}


if ($total_por_edades_ini >= 1) {

  $exitoZ .= "Ini: &nbsp; <i class=\"fas fa-female fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_fenm_ini."/&nbsp;  <i class=\"fas fa-male fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_masc_ini." =<b>".$total_por_edades_ini."</b>,&nbsp;&nbsp;&nbsp;"; 

}


if ($total_por_edades_prim >= 1) {

  $exitoZ .= "Bás: &nbsp; <i class=\"fas fa-female fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_fenm_prim."/&nbsp;  <i class=\"fas fa-male fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_masc_prim." =<b>".$total_por_edades_prim."</b>,&nbsp;&nbsp;&nbsp;"; 

}


if ($total_por_edades_med >= 1) {

  $exitoZ .= "Med: &nbsp; <i class=\"fas fa-female fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_fenm_med."/&nbsp;  <i class=\"fas fa-male fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_masc_med." =<b>".$total_por_edades_med."</b>,&nbsp;&nbsp;&nbsp;"; 

}


if ($total_por_edades_gen >= 1) {

  $exitoZ .= "Gen: &nbsp; <i class=\"fas fa-female fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_fenm_gen."/&nbsp;  <i class=\"fas fa-male fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_masc_gen." =<b>".$total_por_edades_gen."</b>,&nbsp;&nbsp;&nbsp;"; 

}


if ($total_por_edades >= 1) {

  $exitoZ .= "Tot: &nbsp; <i class=\"fas fa-female fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_fenm."/&nbsp;  <i class=\"fas fa-male fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_masc." =<b>".$total_por_edades."</b>. "; 

}



 }  

    } 





















if(isset($_POST['buscar_vacuna']))
    {

$busqueda_ed = $_POST['buscar_vacunaaa'];

$ciclo_cicloso_ed = $_POST['ciclo_cicloso'];


include("../conectar.php");

$id_corriente =  $ciclo_cicloso_ed;

      $query_bus_masc_ini = " SELECT * FROM  reg_estu_actual, reg_estudiantes, sexo, grados
    
WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud

and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (52, 54, 55, 56)
 
and reg_estudiantes.id_sexo = '2'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and $busqueda_ed = 'Si'

            GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus_masc_ini = mysqli_query($enlace, $query_bus_masc_ini) or die(mysqli_error());
$totalRows_datos_plantilla_bus_masc_ini = mysqli_num_rows($datos_plantilla_bus_masc_ini); 




      $query_bus_fenm_ini = " SELECT * FROM  reg_estu_actual, reg_estudiantes, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud

and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (52, 54, 55, 56)

and reg_estudiantes.id_sexo = '1'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and $busqueda_ed = 'Si'

            GROUP BY reg_estudiantes.id_estud";


$datos_plantilla_bus_fenm_ini = mysqli_query($enlace, $query_bus_fenm_ini) or die(mysqli_error());
$totalRows_datos_plantilla_bus_fenm_ini = mysqli_num_rows($datos_plantilla_bus_fenm_ini); 


$total_por_edades_ini = $totalRows_datos_plantilla_bus_masc_ini + $totalRows_datos_plantilla_bus_fenm_ini;



  $query_bus_masc_prim = " SELECT * FROM  reg_estu_actual, reg_estudiantes, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud

and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (35, 36, 37, 38, 40, 41)
 
and reg_estudiantes.id_sexo = '2'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and $busqueda_ed = 'Si'

            GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus_masc_prim = mysqli_query($enlace, $query_bus_masc_prim) or die(mysqli_error());
$totalRows_datos_plantilla_bus_masc_prim = mysqli_num_rows($datos_plantilla_bus_masc_prim); 




      $query_bus_fenm_prim = " SELECT * FROM  reg_estu_actual, reg_estudiantes, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud

and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (35, 36, 37, 38, 40, 41)

and reg_estudiantes.id_sexo = '1'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and $busqueda_ed = 'Si'

            GROUP BY reg_estudiantes.id_estud";


$datos_plantilla_bus_fenm_prim = mysqli_query($enlace, $query_bus_fenm_prim) or die(mysqli_error());
$totalRows_datos_plantilla_bus_fenm_prim = mysqli_num_rows($datos_plantilla_bus_fenm_prim); 


$total_por_edades_prim = $totalRows_datos_plantilla_bus_masc_prim + $totalRows_datos_plantilla_bus_fenm_prim;





  $query_bus_masc_med = " SELECT * FROM  reg_estu_actual, reg_estudiantes, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud

and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (42, 43, 44)
 
and reg_estudiantes.id_sexo = '2'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and $busqueda_ed = 'Si'

            GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus_masc_med = mysqli_query($enlace, $query_bus_masc_med) or die(mysqli_error());
$totalRows_datos_plantilla_bus_masc_med = mysqli_num_rows($datos_plantilla_bus_masc_med); 




      $query_bus_fenm_med = " SELECT * FROM  reg_estu_actual, reg_estudiantes, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud

and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (42, 43, 44)

and reg_estudiantes.id_sexo = '1'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and $busqueda_ed = 'Si'

            GROUP BY reg_estudiantes.id_estud";


$datos_plantilla_bus_fenm_med = mysqli_query($enlace, $query_bus_fenm_med) or die(mysqli_error());
$totalRows_datos_plantilla_bus_fenm_med = mysqli_num_rows($datos_plantilla_bus_fenm_med); 


$total_por_edades_med = $totalRows_datos_plantilla_bus_masc_med + $totalRows_datos_plantilla_bus_fenm_med;





  $query_bus_masc_gen = " SELECT * FROM  reg_estu_actual, reg_estudiantes, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud

and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (45, 46, 53)
 
and reg_estudiantes.id_sexo = '2'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and $busqueda_ed = 'Si'

            GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus_masc_gen = mysqli_query($enlace, $query_bus_masc_gen) or die(mysqli_error());
$totalRows_datos_plantilla_bus_masc_gen = mysqli_num_rows($datos_plantilla_bus_masc_gen); 




      $query_bus_fenm_gen = " SELECT * FROM  reg_estu_actual, reg_estudiantes, sexo, grados
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud

and grados.id_grado = reg_estu_actual.grado_actual

and reg_estu_actual.grado_actual IN (45, 46, 53)

and reg_estudiantes.id_sexo = '1'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and $busqueda_ed = 'Si'

            GROUP BY reg_estudiantes.id_estud";


$datos_plantilla_bus_fenm_gen = mysqli_query($enlace, $query_bus_fenm_gen) or die(mysqli_error());
$totalRows_datos_plantilla_bus_fenm_gen = mysqli_num_rows($datos_plantilla_bus_fenm_gen); 


$total_por_edades_gen = $totalRows_datos_plantilla_bus_masc_gen + $totalRows_datos_plantilla_bus_fenm_gen;






      $query_bus_masc = " SELECT * FROM  reg_estu_actual, reg_estudiantes, sexo
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud


and reg_estudiantes.id_sexo = '2'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and $busqueda_ed = 'Si'

            GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus_masc = mysqli_query($enlace, $query_bus_masc) or die(mysqli_error());
$totalRows_datos_plantilla_bus_masc = mysqli_num_rows($datos_plantilla_bus_masc); 




      $query_bus_fenm = " SELECT * FROM  reg_estu_actual, reg_estudiantes, sexo
    

WHERE  reg_estudiantes.id_estud = reg_estu_actual.id_estud

and reg_estudiantes.id_sexo = '1'

and reg_estu_actual.fecha_inscripcion != ''
and  reg_estu_actual.el_activo = '1'
and  reg_estu_actual.cursa_actualmente = '$id_corriente'
         
and reg_estudiantes.retirado_si_o_no = '0' 
and $busqueda_ed = 'Si'

            GROUP BY reg_estudiantes.id_estud";


$datos_plantilla_bus_fenm = mysqli_query($enlace, $query_bus_fenm) or die(mysqli_error());
$totalRows_datos_plantilla_bus_fenm = mysqli_num_rows($datos_plantilla_bus_fenm); 


$total_por_edades = $totalRows_datos_plantilla_bus_masc + $totalRows_datos_plantilla_bus_fenm;

mysqli_close($enlace); 




if ($total_por_edades == 0 ) {

  $errorZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados.";

}


if ($total_por_edades_ini >= 1) {

  $exitoZ .= "Ini: &nbsp; <i class=\"fas fa-female fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_fenm_ini."/&nbsp;  <i class=\"fas fa-male fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_masc_ini." =<b>".$total_por_edades_ini."</b>,&nbsp;&nbsp;&nbsp;"; 

}


if ($total_por_edades_prim >= 1) {

  $exitoZ .= "Bás: &nbsp; <i class=\"fas fa-female fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_fenm_prim."/&nbsp;  <i class=\"fas fa-male fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_masc_prim." =<b>".$total_por_edades_prim."</b>,&nbsp;&nbsp;&nbsp;"; 

}


if ($total_por_edades_med >= 1) {

  $exitoZ .= "Med: &nbsp; <i class=\"fas fa-female fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_fenm_med."/&nbsp;  <i class=\"fas fa-male fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_masc_med." =<b>".$total_por_edades_med."</b>,&nbsp;&nbsp;&nbsp;"; 

}


if ($total_por_edades_gen >= 1) {

  $exitoZ .= "Gen: &nbsp; <i class=\"fas fa-female fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_fenm_gen."/&nbsp;  <i class=\"fas fa-male fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_masc_gen." =<b>".$total_por_edades_gen."</b>,&nbsp;&nbsp;&nbsp;"; 

}


if ($total_por_edades >= 1) {

  $exitoZ .= "Tot: &nbsp; <i class=\"fas fa-female fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_fenm."/&nbsp;  <i class=\"fas fa-male fa-lg\"></i>:&nbsp;".$totalRows_datos_plantilla_bus_masc." =<b>".$total_por_edades."</b>. "; 

}





    } 
































if(isset($_POST['pre_ins_estud_cur']))
    {

if (strlen($_POST['buscar_estud_reg_pre_ins']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 6 caracteres, para iniciar la busqueda. "; }

else { 

$busqueda = $_POST['buscar_estud_reg_pre_ins'];

include("../conectar.php");

/* $q_corriente = "SELECT * FROM temporada_escolar WHERE next = '8' LIMIT 1";
$datos_corriente = mysqli_query($enlace, $q_corriente) or die(mysqli_error());
$row_datos_corriente = mysqli_fetch_assoc($datos_corriente);

$id_corriente =  $row_datos_corriente['id_periodo_es'];   */

$id_corriente = $id_periodo_clave;

      $query_bus = " SELECT * FROM  reg_estu_actual, (
    
SELECT id_estud, ci_estu, retirado_si_o_no FROM reg_estudiantes ) AS Virtual_table
WHERE  reg_estu_actual.id_estud = Virtual_table.id_estud        
         and  reg_estu_actual.el_activo = '1'
         and  reg_estu_actual.cursa_actualmente != '$id_corriente'
                 
         and Virtual_table.retirado_si_o_no = '0'
         and Virtual_table.ci_estu = '".$busqueda."' GROUP BY Virtual_table.id_estud ";

$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$filaKK=mysqli_fetch_array($datos_plantilla_bus);
$su_id_es = $filaKK["id_estud"];
$statuto = $filaKK["fecha_inscripcion"];
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

mysqli_close($enlace); 

/* $enlace = "<b><a href=\" zona_adm_estudiante_reg_pre_ins.php?ciclo=".$id_corriente."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultados.</a></b>";             */

$enlace = "<b><a href=\" zona_adm_estudiante_reg_pre_ins.php?ci_alum=".$busqueda."&id_alum=".$su_id_es."\">Pre-Inscribir.</a></b>";

if ($totalRows_datos_plantilla_bus >= 1 && $statuto !=''  ) {

  $exitoZ .= "- Estudiante encontrado.&nbsp;&nbsp; ".$enlace." "; 

}

if ($totalRows_datos_plantilla_bus >= 1 && $statuto ==''  ) {

  $errorZ .= "- El estudiante está &nbsp; <b>Pre-Inscrito.</b> "; 

}


if ($totalRows_datos_plantilla_bus == 0  ) {

  $errorZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados y/o el estudiante ya está &nbsp; <b>Pre-Inscrito</b>. "; 

}

/*
else {

  $errorZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados. ";

}  */

}
    } 














if(isset($_POST['ins_estud_cur']))
    {

if (strlen($_POST['buscar_estud_reg_ins']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 6 caracteres, para iniciar la busqueda. "; }

else { 

$busqueda = $_POST['buscar_estud_reg_ins'];

include("../conectar.php");

/* $q_corriente = "SELECT * FROM temporada_escolar WHERE next = '8' LIMIT 1";
$datos_corriente = mysqli_query($enlace, $q_corriente) or die(mysqli_error());
$row_datos_corriente = mysqli_fetch_assoc($datos_corriente);

$id_corriente =  $row_datos_corriente['id_periodo_es'];   */

$id_corriente = $id_periodo_clave;

      $query_bus = " SELECT * FROM  reg_estu_actual, (
    
SELECT id_estud, ci_estu, retirado_si_o_no FROM reg_estudiantes ) AS Virtual_table
WHERE  reg_estu_actual.id_estud = Virtual_table.id_estud        
         and  reg_estu_actual.el_activo = '1' 
         and  reg_estu_actual.cursa_actualmente != '$id_corriente'

         and Virtual_table.retirado_si_o_no = '0'
         and Virtual_table.ci_estu = '".$busqueda."' GROUP BY Virtual_table.id_estud ";

$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$filaKK=mysqli_fetch_array($datos_plantilla_bus);
$su_id_es = $filaKK["id_estud"];
$statutoX = $filaKK["fecha_inscripcion"];
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

mysqli_close($enlace); 

/* $enlace = "<b><a href=\" zona_adm_estudiante_reg_pre_ins.php?ciclo=".$id_corriente."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultados.</a></b>";  */

$enlace = "<b><a href=\" zona_adm_estudiante_reg_ins.php?ci_alum=".$busqueda."&id_alum=".$su_id_es."\">Inscribir.</a></b>";

if ($totalRows_datos_plantilla_bus >= 1 && $statutoX !=''  ) {

  $exitoZ .= "- Estudiante encontrado.&nbsp;&nbsp; ".$enlace." "; 

}

if ($totalRows_datos_plantilla_bus >= 1 && $statutoX ==''  ) {

  $errorZ .= "- El estudiante está &nbsp; <b>Inscrito.</b> "; 

}


if ($totalRows_datos_plantilla_bus == 0  ) {

  $errorZ.="- No encontrado o ya &nbsp;<b>Inscrito</b>. Confirme o realice la&nbsp;<b>Inscripción</b>&nbsp; por búsqueda directa."; 

}


/*

else {

  $errorZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados y/o el estudiante ya está &nbsp; <b>Inscrito</b>. ";

}   */











}
    } 



?>




<?php include ("Header.php"); ?>


        <div class="content-wrapper">
            <div class="container-fluid">
      

<form method="POST">
<div class="form-row">


<div class="input-group col-md-4 col-lg-4 mb-2">




                    <div class="input-group-prepend">
                      <span class="input-group-text alert-primary" id=""><i class="fas fa-boxes fa-lg "></i>
                      &nbsp;<b>Ciclo/año: </b></span>     <!--  <?php echo $id_periodo_clave; ?> -->
                    </div>
                 
                            <select class="form-control" id="set_periodo" name="set_periodo">



<option value="<?php echo $row_datos_periodo_oldie['id_periodo_es']; ?>">
  <?php echo $row_datos_periodo_oldie['periodo_escolar']; ?></option>


<option value="<?php echo $row_datos_periodo_actual['id_periodo_es']; ?>" selected>
  <?php echo $row_datos_periodo_actual['periodo_escolar']; ?></option>



<option value="<?php echo $row_datos_periodo_nextie['id_periodo_es']; ?>">
  <?php echo $row_datos_periodo_nextie['periodo_escolar']; ?></option>

<option disabled></option>





                                <optgroup label="Cambiar a...">
                                <option disabled></option>                              

                               <?php do{?> 

<option value="<?php echo $row_datos_periodo_act1['id_periodo_es']; ?>"><?php echo $row_datos_periodo_act1['periodo_escolar']; ?></option>

                                <?php } while ($row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1)); ?> 
                              
                        </select>


                        <div class="input-group-append">
                            <button type="submit" name="cambiar_periodo" class="btn btn-info"><i class="fas fa-check fa-lg "></i>&nbsp;Seleccionar</button> 
                        </div>
                 
</div> </form>

  <?php

 $total_n = $totalRows_datos_estudiantes_ins_inicial - $totalRows_datos_estudiantes_ins_inicial_r; 
 $total_nb = $totalRows_datos_estudiantes_ins_basica - $totalRows_datos_estudiantes_ins_basica_r;
 $total_nib = $totalRows_datos_estudiantes_ins_media - $totalRows_datos_estudiantes_ins_media_r;
 $total_im = $totalRows_datos_estudiantes_ins_mediaG - $totalRows_datos_estudiantes_ins_mediaG_r;

   $total_insTTTnnn = $total_n + $total_nb + $total_nib + $total_im; ?>




<div class="input-group col-md-1 col-lg-1 mb-2">       


<div data-toggle="tooltip" data-placement="bottom" title="Listado Nuevos Ingresos" >
<form target="_blank" action="zzz_impresiones/imp_cart_datos_news.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">

    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Nuevos Ingresos">


          <button type="submit" name="imp_cart_datos_news" id="imp_cart_datos_news" class="btn btn-secondary" >
           <i class="fas fa-print"></i>&nbsp; "N.I. <i class="fas fa-chess-bishop"></i>"</button>


</form></div>


</div>  



<div class="input-group col-md-1 col-lg-1 mb-2">       


<div data-toggle="tooltip" data-placement="bottom" title="Listado Inscritos Regulares" >
<form target="_blank" action="zzz_impresiones/imp_cart_datos_news_old.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">

    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Alumnos Regulares">


          <button type="submit" name="imp_cart_datos_news_old" id="imp_cart_datos_news_old" class="btn btn-warning" >
           <i class="fas fa-print"></i>&nbsp; "I.R. <i class="fas fa-chess-knight"></i>"</button>


</form></div>


</div>








 <div class="col-md-6 col-lg-6 mb-2">
              

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










 <h4 class="glowwhite mt-2 mb-2">Opciones:</h4> 

 <!-- per selecc <?php echo $respuestagg; ?> / periodo anterior "<?php echo $per_resultante; ?>"  / el id es: <?php echo $respuesta_per_anterior_gg; ?>  -->


<div class="row">




  <div class="col-xl-3 col-sm-6 mb-3" >
          <div class="card text-white relleno-lila o-hidden h-100">

            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-search"></i>
              </div>

            <div class="col-lg-9 col-md-12" style="margin-left: -25px; margin-top: -10px;">



              <span class="" style="font-size: 16px;">Buscar, ciclo y/o año escolar <b><?php echo $row_datos_periodo_actual['periodo_escolar']; ?></b> por:</span>


  <script type="text/javascript" src="00_auto/jquery-1.12.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="00_auto/jquery-ui.css">
  <script type="text/javascript" src="00_auto/jquery-ui.js"></script>
  <script type="text/javascript" src="00_auto/jquery.ui.autocomplete.scroll.min.js"></script> 



<form method="POST">

           <div class="input-group input-group-sm mb-1" style="margin-top: 10px;">            
            <input type="text" class="form-control" name="buscar_estud_id" placeholder="Doc de Id...">
            <input type="hidden" id="ciclo_cicloso" name="ciclo_cicloso" value="<?php echo $id_periodo_clave; ?>">
            <div class="input-group-append">
            <button type="submit" name="buscar_estud_idx" class="btn btn-default"><i style="color:#BE2E71;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>
 <form method="POST">

           <div class="input-group input-group-sm mb-1">            
            <input type="text" id="buscar_estud_nombre" class="form-control" name="buscar_estud_nombre" placeholder="Nombre(s)...">

<?php

include("../conectar.php");

$query_search_name = "SELECT reg_estudiantes.id_estud, reg_estudiantes.nombre_estu, reg_estu_actual.* FROM reg_estu_actual, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
      /*   and  reg_estu_actual.el_activo = '1'   */
         and  reg_estu_actual.cursa_actualmente = '$id_periodo_clave'               
         GROUP BY reg_estudiantes.nombre_estu";

$datos_search_name = mysqli_query($enlace, $query_search_name) or die(mysqli_error());
$totalRows_search_name = mysqli_num_rows($datos_search_name); 

$el_listado_name = array();

while ($row_name = mysqli_fetch_array($datos_search_name)) {
        /*  $estudiantesNN = $row['nombre_estu'].' '.$row['apellidos_estu']; */
          $estudiantes_name = $row_name['nombre_estu'];
          array_push ($el_listado_name, $estudiantes_name );          
}
mysqli_close($enlace);
?>

<script type="text/javascript">

    $(document).ready(function () {
      var items_name = <?= json_encode($el_listado_name);  ?>

$("#buscar_estud_nombre").autocomplete({
  source: items_name,
  minLength: 3,
  autoFocus: true,
  maxShowItems: 7
});
        });

  </script>




            <input type="hidden" id="ciclo_cicloso" name="ciclo_cicloso" value="<?php echo $id_periodo_clave; ?>">
            <div class="input-group-append">
            <button type="submit" name="buscar_estud_nombrex" class="btn btn-default"><i style="color:#BE2E71;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>
 <form method="POST">

           <div class="input-group input-group-sm mb-1">            
            <input type="text" class="form-control" id="buscar_estud_apell" name="buscar_estud_apell" placeholder="Apellido(s)...">


<?php

include("../conectar.php");

$query_search_ape = "SELECT reg_estudiantes.id_estud, reg_estudiantes.apellidos_estu, reg_estu_actual.* FROM reg_estu_actual, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
      /*   and  reg_estu_actual.el_activo = '1'  */
         and  reg_estu_actual.cursa_actualmente = '$id_periodo_clave'               
         GROUP BY reg_estudiantes.apellidos_estu";

$datos_search_ape = mysqli_query($enlace, $query_search_ape) or die(mysqli_error());
$totalRows_search_ape = mysqli_num_rows($datos_search_ape); 

$el_listado_ape = array();

while ($row_ape = mysqli_fetch_array($datos_search_ape)) {
        /*  $estudiantesNN = $row['nombre_estu'].' '.$row['apellidos_estu']; */
          $estudiantes_ape = $row_ape['apellidos_estu'];
          array_push ($el_listado_ape, $estudiantes_ape );          
}
mysqli_close($enlace);
?>

<script type="text/javascript">

    $(document).ready(function () {
      var items_ape = <?= json_encode($el_listado_ape);  ?>

$("#buscar_estud_apell").autocomplete({
  source: items_ape,
  minLength: 3,
  autoFocus: true,
  maxShowItems: 7
});
        });

  </script>








            <input type="hidden" id="ciclo_cicloso" name="ciclo_cicloso" value="<?php echo $id_periodo_clave; ?>">
            <div class="input-group-append">
            <button type="submit" name="buscar_estud_apellx" class="btn btn-default"><i style="color:#BE2E71;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>
  <form method="POST">

           <div class="input-group input-group-sm mb-1">            
            <input type="text" class="form-control" name="buscar_estud_relig" placeholder="Religión...">
            <input type="hidden" id="ciclo_cicloso" name="ciclo_cicloso" value="<?php echo $id_periodo_clave; ?>">
            <div class="input-group-append">
            <button type="submit" name="buscar_estud_religx" class="btn btn-default"><i style="color:#BE2E71;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>

            </div>              
            </div>   

          </div>
      </div>



























 <div class="col-xl-3 col-sm-6 mb-3" >
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
               
<span class="fa-layers fa-fw">
    <i class="fas fa-clipboard" ></i>
  <i class="fas fa-sync" style="color:#86333B"
   data-fa-transform="shrink-10 down-1.6"></i>   
  </span>

              </div>
              <div class="mr-5 cantidadzzzpe">Pre-Inscribir</div>
              <div class="infozzzpe">alumno cursante al</div>
               <div class="infozzzpe">año escolar <b><?php echo $row_datos_periodo_actual['periodo_escolar']; ?></b>.</div>

            </div>            
           <div class="card-footer card-footerz  clearfix z-1 small" >

<form method="POST">
           <div class="input-group input-group-sm">

            <input type="text" class="form-control" name="buscar_estud_reg_pre_ins" placeholder="Ingresar ci o ci escolar...">
            <div class="input-group-append">
              <button type="submit" name="pre_ins_estud_cur" class="btn btn-default"><i style="color:#86333B;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>
            </div>
          </div>
 </div>





  <div class="col-xl-3 col-sm-6 mb-3" >
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
               
<span class="fa-layers fa-fw">
    <i class="fas fa-clipboard" ></i> 
  <i class="fas fa-retweet" style="color:#86333B"
   data-fa-transform="shrink-10 down-1.6"></i>
  </span>

              </div>
              <div class="mr-5 cantidadzzzpe">Inscribir</div>
              <div class="infozzzpe">alumno cursante al</div>
              <div class="infozzzpe">año escolar <b><?php echo $row_datos_periodo_actual['periodo_escolar']; ?></b>.</div>

            </div>            
           <div class="card-footer card-footerz  clearfix z-1 small" >

<form method="POST">
           <div class="input-group input-group-sm">

            <input type="text" class="form-control" name="buscar_estud_reg_ins" placeholder="Ingresar ci o ci escolar...">
            <div class="input-group-append">
              <button type="submit" name="ins_estud_cur" class="btn btn-default"><i style="color:#86333B;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>
            </div>
          </div>
 </div>






  <div class="col-xl-3 col-sm-6 mb-3" >


        <div class="form-row">

        

        <div class="col-xl-12 col-sm-12 mb-2">   

          <div class="card text-white relleno-grama">
            <div class="card-body">
              <div class="mini_card_icon_pe ">
                 <i class="far fa-laugh-beam"></i>        
              </div>

            <div class="mr-5 infozzz" style="margin-top: -15px; margin-bottom:-15px;">Contar Edades Ciclo <b><?php echo $row_datos_periodo_actual['periodo_escolar']; ?></b>:</div>
                           
            </div>

             <div class="card-footer card-footerz  clearfix z-1 small" >

<form method="POST">
           <div class="input-group input-group-sm">


<input type="hidden" id="ciclo_cicloso" name="ciclo_cicloso" value="<?php echo $id_periodo_clave; ?>">


            <input type="text" class="form-control" name="buscar_edaddd" placeholder="Ingresar edad...">
            <div class="input-group-append">
              <button type="submit" name="buscar_edad" class="btn btn-default"><i style="color:#088A4B;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>
            </div>
                    
          </div> 




        </div>




  <div class="col-xl-12 col-sm-12 mt-2">   

          <div class="card text-white relleno-ocean">
            <div class="card-body">
              <div class="mini_card_icon_pe ">
                 <i class="fas fa-syringe"></i>        
              </div>

            <div class="mr-5 infozzz" style="margin-top: -15px; margin-bottom:-15px;">Contar Vacunas Ciclo <b><?php echo $row_datos_periodo_actual['periodo_escolar']; ?></b>:</div>
                           
            </div>

             <div class="card-footer card-footerz  clearfix z-1 small" >

<form method="POST">
           <div class="input-group input-group-sm">


<input type="hidden" id="ciclo_cicloso" name="ciclo_cicloso" value="<?php echo $id_periodo_clave; ?>">


<select class="form-control" name="buscar_vacunaaa" id="buscar_vacunaaa">

      <option value = "v1" >Antipoliomelitis</option>
      <option value = "v2" >BCG</option>
      <option value = "v3" >Difteria</option>
      <option value = "v4" >Anti-Influenza</option>
      <option value = "v5" >Hepatitis A</option>

      <option value = "v6" >TosFerina (DTpa)</option>
      <option value = "v7" >HB</option>
      <option value = "v8" >Tétanos</option>
      <option value = "v9" >Rotavirus</option>
      <option value = "v10" >Rubéola</option>

      <option value = "v11" >Parotiditis (SRP)</option>
      <option value = "v12" >Covid-19</option>
      <option value = "v13" >Varicela</option>
      <option value = "v14" >Fiebre Amarilla (FA)</option>
      <option value = "v15" >Sarampión</option>

</select>
           


            <div class="input-group-append">
              <button type="submit" name="buscar_vacuna" class="btn btn-default"><i style="color:#268092;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>




          </div>
 </form>
            </div>
                    
          </div> 




        </div>







      






</div>  


 </div>














</div>  <!-- cierre row -->


<div class="alert alert-danger" role="alert">
<b>Nota:</b> No se puede inscribir estudiantes retirados, es necesario re-incorporarlos.
</div>


<div class="row">


  <div class="col-xl-3 col-sm-6 mb-3">

          <div class="card text-white relleno-orange o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user"></i>
              </div>
              <div class="mr-5 cantidadzzzpe">Pre-Inscribir</div>
              
            </div>

            <div class="pl-1 ml-3 infozzzpe">Cantidad?</div>

            <div class="card-footer card-footerz  clearfix z-1 small" >

              <a class="btn btn-warning btn-sm" href="zona_adm_estudiante_pre.php?num_alum=1" role="button">x1</a>
              <a class="btn btn-warning btn-sm" href="zona_adm_estudiante_pre.php?num_alum=2" role="button">x2</a>
              <a class="btn btn-warning btn-sm" href="zona_adm_estudiante_pre.php?num_alum=3" role="button">x3</a>
          <!--    <a class="btn btn-warning btn-sm" href="zona_adm_estudiante_pre.php?num_alum=4" role="button">x4</a>
              <a class="btn btn-warning btn-sm" href="zona_adm_estudiante_pre.php?num_alum=5" role="button">x5</a>   -->            
              
            </div>

          </div>

  </div>









      <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-orange o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <div class="mr-5 cantidadzzzpe">Pre-Inscribir</div>
              <div class="infozzzsmall">a grupo familiar.</div>              
            </div>           

            <div class="card-footer card-footerz  clearfix z-1 small" >

<form method="POST">

           <div class="input-group input-group-sm">
            <div class="input-group-prepend">
              
              <button type="button" class="btn btn-warning" disabled><i class="far fa-id-card fa-lg"></i></button>
            </div>
            <input type="text" class="form-control" name="search_this_doc_id" placeholder="Doc. de Id. del representante...">
            <div class="input-group-append">
              <button type="submit" name="el_doc_del_repre" class="btn btn-warning">&nbsp;&nbsp;<i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;</button>
            </div>
          </div>

 </form>
            </div>          
        </div>
  </div>









      <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-orange_b o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-check"></i>
              </div>
              <div class="mr-5 cantidadzzzpe">Inscribir</div>              
            </div>

            <div class="pl-1 ml-3 infozzzpe">Cantidad?</div>

            <div class="card-footer card-footerz  clearfix z-1 small" >

              <a class="btn btn-warning btn-sm" href="zona_adm_estudiante_ins.php?num_alum=1" role="button">x1</a>
              <a class="btn btn-warning btn-sm" href="zona_adm_estudiante_ins.php?num_alum=2" role="button">x2</a>
              <a class="btn btn-warning btn-sm" href="zona_adm_estudiante_ins.php?num_alum=3" role="button">x3</a>
         <!--      <a class="btn btn-warning btn-sm" href="zona_adm_estudiante_ins.php?num_alum=4" role="button">x4</a>
              <a class="btn btn-warning btn-sm" href="zona_adm_estudiante_ins.php?num_alum=5" role="button">x5</a>     -->          
              
            </div>

          
        </div>

  </div>




        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-orange_b o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-tag"></i>
              </div>
              <div class="mr-5 cantidadzzzpe">Inscribir</div>
              <div class="infozzzsmall">a grupo familiar.</div>              
            </div>           

            <div class="card-footer card-footerz  clearfix z-1 small" >

<form method="POST">

           <div class="input-group input-group-sm">
            <div class="input-group-prepend">
              
              <button type="button" class="btn btn-warning" disabled><i class="far fa-id-card fa-lg"></i></button>
            </div>
            <input type="text" class="form-control" name="search_this_doc_id_dos" placeholder="Doc. de Id. del representante...">
            <div class="input-group-append">
              <button type="submit" name="el_doc_del_repre_dos" class="btn btn-warning">&nbsp;&nbsp;<i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;</button>
            </div>
          </div>

 </form>
            </div>          
        </div>
  </div>









</div>









<div <?php  if ($id_periodo_clave == "0"){?>style="display:none"<?php } ?> >  <!-- div que encierra todas las cards -->

 <!-- Icon Cards-->
 <h4 class="glowwhite mt-2 mb-2">Inicial:</h4>

      
      <div class="row">

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight_a o-hidden h-100">
            <div class="card-bodywwwaa">

              <div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_ins_inicial; ?></b> Inscritos
              </div>


 <div class="cantidadzzzpe"><i class="fas fa-chess-bishop"></i> : <?php echo $total_n; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_inicial_r; ?> </div>



              <div class="mini_card_iconaa">
                <i class="far fa-smile"></i>    
              </div>
              

              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_ins_inicialF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_ins_inicialM; ?> </div>


              <div class="mt-3 cantidadzzzsmall">


                <a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&elstatus=8&tituloJKL=Inscritos Maternal">

  <b><?php echo $totalRows_datos_estudiantes_ins_inicial_m; ?></b>   - Maternal.  

                
                </a>

                </div>

           
            <div class="cantidadzzzsmall">

                <a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&elstatus=8&tituloJKL=Inscritos 1er Nivel">

                
  <b><?php echo $totalRows_datos_estudiantes_ins_inicial_1n; ?></b>   - 1º Niv.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_1n = $totalRows_datos_estudiantes_ins_inicial_1n - $totalRows_datos_estudiantes_ins_inicial_1nr; echo $tot_1n; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_inicial_1nr; ?> )
                
                 
                  </a>

              </div>


      <div class="cantidadzzzsmall">

              <a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&elstatus=8&tituloJKL=Inscritos 2do Nivel">


  <b><?php echo $totalRows_datos_estudiantes_ins_inicial_2n; ?></b>   - 2º Niv.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_2n = $totalRows_datos_estudiantes_ins_inicial_2n - $totalRows_datos_estudiantes_ins_inicial_2nr; echo $tot_2n; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_inicial_2nr; ?> )

                  
               </a>

              </div>


          <div class="cantidadzzzsmall">

            <a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&elstatus=8&tituloJKL=Inscritos 3er Nivel">


  <b><?php echo $totalRows_datos_estudiantes_ins_inicial_3n; ?></b>   - 3º Niv.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_3n = $totalRows_datos_estudiantes_ins_inicial_3n - $totalRows_datos_estudiantes_ins_inicial_3nr; echo $tot_3n; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_inicial_3nr; ?> )
                
            </a>

              </div>





            </div>
            <a class="card-footer card-footerz text-white clearfix small z-1"
href="plantilla_estudiantes_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grupo=1&elstatus=8&tituloJKL=Inscritos Inicial">





              <span class="float-left">Ver Listado General</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight_a o-hidden h-100">
            <div class="card-bodywwwaa">


<div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_pre_inicial; ?></b> Pre-Inscritos
              </div>


 <div class="cantidadzzzpe"><i class="fas fa-chess-bishop"></i> : <?php $total_np = $totalRows_datos_estudiantes_pre_inicial - $totalRows_datos_estudiantes_pre_inicial_r; echo $total_np; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_inicial_r; ?> </div>






              <div class="mini_card_iconbb">
                
  <span class="fa-layers fa-fw">
    <i class="fas fa-clipboard" ></i>
  <i class="fas fa-user-check" style="color:#C2815C"
   data-fa-transform="shrink-10 down-1.6"></i>
  </span>


              </div>
             
              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_pre_inicialF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_pre_inicialM; ?> </div>





<div class="mt-3 cantidadzzzsmall">


  <a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&elstatus=8&tituloJKL=Pre-Inscritos Maternal">


      <b><?php echo $totalRows_datos_estudiantes_pre_inicial_m; ?></b>   - Maternal. 

  </a>             

                </div>


                <div class="cantidadzzzsmall">

 <a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&elstatus=8&tituloJKL=Pre-Inscritos 1er Nivel">


  <b><?php echo $totalRows_datos_estudiantes_pre_inicial_1n; ?></b>   - 1º Niv.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_1nrr = $totalRows_datos_estudiantes_pre_inicial_1n - $totalRows_datos_estudiantes_pre_inicial_1nr; echo $tot_1nrr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_inicial_1nr; ?> )


 </a> 

                </div>


      <div class="cantidadzzzsmall">

         <a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&elstatus=8&tituloJKL=Pre-Inscritos 2do Nivel">



  <b><?php echo $totalRows_datos_estudiantes_pre_inicial_2n; ?></b>   - 2º Niv.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_2nrr = $totalRows_datos_estudiantes_pre_inicial_2n - $totalRows_datos_estudiantes_pre_inicial_2nr; echo $tot_2nrr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_inicial_2nr; ?> )



 </a>             

              </div>


                    <div class="cantidadzzzsmall">

         <a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&elstatus=8&tituloJKL=Pre-Inscritos 3er Nivel">

  <b><?php echo $totalRows_datos_estudiantes_pre_inicial_3n; ?></b>   - 3º Niv.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_3nrr = $totalRows_datos_estudiantes_pre_inicial_3n - $totalRows_datos_estudiantes_pre_inicial_3nr; echo $tot_3nrr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_inicial_3nr; ?> )
     
      </a> 


              </div>






            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 
            href="plantilla_estudiantes_0a.php?ciclo=<?php echo $id_periodo_clave; ?>&grupo=1&elstatus=8&tituloJKL=Pre-Inscritos Inicial">

              <span class="float-left">Revisar y/o inscribir</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>








        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-bodywwwaa">


              <div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_no_ins_inicial; ?></b> No Inscritos
              </div>


              <div class="mini_card_iconaa">
                <i class="far fa-meh"></i>
              </div>
              
              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_no_ins_inicialF; ?>  </div>

              <div class="cantidadzzzpe" > <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_no_ins_inicialM; ?> </div>



          <br>



              <div class="mt-3 cantidadzzzsmall">


                <b><?php echo $totalRows_datos_estudiantes_no_inicial_m; ?></b>   - de Mater. van a <b>1º Niv</b>. 

              </div>


<div class=" cantidadzzzsmall">

  <b><?php echo $totalRows_datos_estudiantes_no_inicial_1n; ?></b>   - de 1º Niv. van a <b>2º Niv</b>. 

</div>

<div class=" cantidadzzzsmall">

  <b><?php echo $totalRows_datos_estudiantes_no_inicial_2n; ?></b>   - de 2º Niv. van a <b>3º Niv</b>. 



</div>





            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 
             href="plantilla_estudiantes_no_ins.php?ciclo=<?php echo $respuesta_per_anterior_gg; ?>&grupo=1&elstatus=8&tituloJKL=No Inscritos, Inicial">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-bodywwwaa">


<div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_ret_inicial; ?></b> Retirados
              </div>

              <div class="mini_card_iconaa">



  <span class="fa-layers fa-fw">
    <i class="fas fa-clipboard" ></i>
  <i class="fas fa-user-minus" style="color:#AD6A42"
   data-fa-transform="shrink-10 down-1.6"></i>
  </span>



              </div>
              

              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_ret_inicialF; ?>  </div>

              <div class="cantidadzzzpe"><i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_ret_inicialM; ?> </div>

            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 
             href="plantilla_estudiantes_ret.php?ciclo=<?php echo $id_periodo_clave; ?>&grupo=1&elstatus=8&tituloJKL=Retirados, Inicial">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


</div>  <!-- cierre row -->






 <!-- Icon Cards-->
 <h4 class="glowwhite mt-2 mb-2">Básica:</h4>     

      
      <div class="row">

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-grama o-hidden h-100">
            <div class="card-bodywwwaa">

<div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_ins_basica; ?></b> Inscritos
              </div>


 <div class="cantidadzzzpe"><i class="fas fa-chess-bishop"></i> : <?php  echo $total_nb; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_basica_r; ?> </div>


              <div class="mini_card_iconaa">
                <i class="far fa-smile"></i>    
              </div>
            



              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_ins_basicaF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_ins_basicaM; ?> </div>

              <div class="mt-3 cantidadzzzsmall">

                <a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&elstatus=8&tituloJKL=Inscritos 1er Grado">


  <b><?php echo $totalRows_datos_estudiantes_ins_basica_1; ?></b>   - 1º Gra.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_1b = $totalRows_datos_estudiantes_ins_basica_1 - $totalRows_datos_estudiantes_ins_basica_1r; echo $tot_1b; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_basica_1r; ?> )

              
              </a>
                            
              </div>


              <div class="cantidadzzzsmall">

                <a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&elstatus=8&tituloJKL=Inscritos 2do Grado">


                    <b><?php echo $totalRows_datos_estudiantes_ins_basica_2; ?></b>   - 2º Gra.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_2b = $totalRows_datos_estudiantes_ins_basica_2 - $totalRows_datos_estudiantes_ins_basica_2r; echo $tot_2b; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_basica_2r; ?> )


                      
               </a>

              </div>


              <div class="cantidadzzzsmall">

                <a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&elstatus=8&tituloJKL=Inscritos 3er Grado">
              
                <b><?php echo $totalRows_datos_estudiantes_ins_basica_3; ?></b>   - 3º Gra.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_3b = $totalRows_datos_estudiantes_ins_basica_3 - $totalRows_datos_estudiantes_ins_basica_3r; echo $tot_3b; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_basica_3r; ?> )

               </a>
              
              </div>

               <div class="cantidadzzzsmall">

                <a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&elstatus=8&tituloJKL=Inscritos 4to Grado">
              
                <b><?php echo $totalRows_datos_estudiantes_ins_basica_4; ?></b>   - 4º Gra.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_4b = $totalRows_datos_estudiantes_ins_basica_4 - $totalRows_datos_estudiantes_ins_basica_4r; echo $tot_4b; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_basica_4r; ?> )

               </a>

              </div>


              <div class="cantidadzzzsmall">

                <a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&elstatus=8&tituloJKL=Inscritos 5to Grado">
                
              <b><?php echo $totalRows_datos_estudiantes_ins_basica_5; ?></b>   - 5º Gra.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_5b = $totalRows_datos_estudiantes_ins_basica_5 - $totalRows_datos_estudiantes_ins_basica_5r; echo $tot_5b; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_basica_5r; ?> )

                 </a>

               </div>


              <div class="cantidadzzzsmall">

                <a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&elstatus=8&tituloJKL=Inscritos 6to Grado">
                
               <b><?php echo $totalRows_datos_estudiantes_ins_basica_6; ?></b>   - 6º Gra.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_6b = $totalRows_datos_estudiantes_ins_basica_6 - $totalRows_datos_estudiantes_ins_basica_6r; echo $tot_6b; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_basica_6r; ?> )

                 </a>

               </div>



            </div>
            <a class="card-footer card-footerz text-white clearfix small z-1"
             href="plantilla_estudiantes_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grupo=2&elstatus=8&tituloJKL=Inscritos Básica">


              <span class="float-left">Ver Listado General</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-grama o-hidden h-100">
            <div class="card-bodywwwaa">


<div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_pre_basica; ?></b> Pre-Inscritos
              </div>


 <div class="cantidadzzzpe"><i class="fas fa-chess-bishop"></i> : <?php $total_nbp = $totalRows_datos_estudiantes_pre_basica - $totalRows_datos_estudiantes_pre_basica_r; echo $total_nbp; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_basica_r; ?> </div>



              <div class="mini_card_iconbb">
                
  <span class="fa-layers fa-fw">
    <i class="fas fa-clipboard" ></i>
  <i class="fas fa-user-check" style="color:#088A4B"
   data-fa-transform="shrink-10 down-1.6"></i>
  </span>


              </div>
             

              
              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_pre_basicaF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_pre_basicaM; ?> </div>


                <div class="mt-3 cantidadzzzsmall">

     <a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&elstatus=8&tituloJKL=Pre-Inscritos 1er Grado"> 



<b><?php echo $totalRows_datos_estudiantes_pre_basica_1; ?></b>   - 1º Gra.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_1brr = $totalRows_datos_estudiantes_pre_basica_1 - $totalRows_datos_estudiantes_pre_basica_1r; echo $tot_1brr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_basica_1r; ?> )


      </a> 
                            
              </div>


               <div class="cantidadzzzsmall">

<a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&elstatus=8&tituloJKL=Pre-Inscritos 2do Grado">

              <b><?php echo $totalRows_datos_estudiantes_pre_basica_2; ?></b>   - 2º Gra.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_2brr = $totalRows_datos_estudiantes_pre_basica_2 - $totalRows_datos_estudiantes_pre_basica_2r; echo $tot_2brr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_basica_2r; ?> )
  
  </a>

              </div>


              <div class="cantidadzzzsmall">
   
<a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&elstatus=8&tituloJKL=Pre-Inscritos 3er Grado">

                <b><?php echo $totalRows_datos_estudiantes_pre_basica_3; ?></b>   - 3º Gra.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_3brr = $totalRows_datos_estudiantes_pre_basica_3 - $totalRows_datos_estudiantes_pre_basica_3r; echo $tot_3brr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_basica_3r; ?> )
  </a>           
              
              </div>


              <div class="cantidadzzzsmall">
  
<a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&elstatus=8&tituloJKL=Pre-Inscritos 4to Grado">

                <b><?php echo $totalRows_datos_estudiantes_pre_basica_4; ?></b>   - 4º Gra.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_4brr = $totalRows_datos_estudiantes_pre_basica_4 - $totalRows_datos_estudiantes_pre_basica_4r; echo $tot_4brr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_basica_4r; ?> )
  </a> 

              </div>


              <div class="cantidadzzzsmall">
  
<a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&elstatus=8&tituloJKL=Pre-Inscritos 5to Grado">

               <b><?php echo $totalRows_datos_estudiantes_pre_basica_5; ?></b>   - 5º Gra.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_5brr = $totalRows_datos_estudiantes_pre_basica_5 - $totalRows_datos_estudiantes_pre_basica_5r; echo $tot_5brr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_basica_5r; ?> )
   </a>          

               </div>


               <div class="cantidadzzzsmall">
 
<a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&elstatus=8&tituloJKL=Pre-Inscritos 6to Grado">

             <b><?php echo $totalRows_datos_estudiantes_pre_basica_6; ?></b>   - 6º Gra.  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_6brr = $totalRows_datos_estudiantes_pre_basica_6 - $totalRows_datos_estudiantes_pre_basica_6r; echo $tot_6brr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_basica_6r; ?> )
</a>

               </div>




            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 

             href="plantilla_estudiantes_0a.php?ciclo=<?php echo $id_periodo_clave; ?>&grupo=2&elstatus=8&tituloJKL=Pre-Inscritos Básica">

              <span class="float-left">Revisar y/o inscribir</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>








        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-verdeosc o-hidden h-100">
            <div class="card-bodywwwaa">




 <div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_no_ins_basica; ?></b> No Inscritos
              </div>


              <div class="mini_card_iconaa">
                <i class="far fa-meh"></i>
              </div>
              
              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_no_ins_basicaF; ?>  </div>

              <div class="cantidadzzzpe" > <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_no_ins_basicaM; ?> </div>




          <div class="mt-3 cantidadzzzsmall">

            <b><?php echo $totalRows_datos_estudiantes_no_inicial_3n; ?></b>   - de 3º Niv. van a <b>1º Gra</b>. 



            </div>





              <div class=" cantidadzzzsmall">

                <b><?php echo $totalRows_datos_estudiantes_no_basica_1; ?></b>   - de 1º Gra. van a <b>2º Gra</b>. 


                
       
 </div>


              <div class="cantidadzzzsmall">
              <b><?php echo $totalRows_datos_estudiantes_no_basica_2; ?></b>   - de 2º Gra. van a <b>3º Gra</b>. 
 </div>




               <div class="cantidadzzzsmall">
              <b><?php echo $totalRows_datos_estudiantes_no_basica_3; ?></b>   - de 3º Gra. van a <b>4º Gra</b>. 
 </div>


              <div class="cantidadzzzsmall">
                <b><?php echo $totalRows_datos_estudiantes_no_basica_4; ?></b>   - de 4º Gra. van a <b>5º Gra</b>. 
               </div>


              <div class="cantidadzzzsmall">
              <b><?php echo $totalRows_datos_estudiantes_no_basica_5; ?></b>   - de 5º Gra. van a <b>6º Gra</b>. 
               </div>


              



            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 
             href="plantilla_estudiantes_no_ins.php?ciclo=<?php echo $respuesta_per_anterior_gg; ?>&grupo=2&elstatus=8&tituloJKL=No Inscritos, Básica">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-verdeosc o-hidden h-100">
            <div class="card-bodywwwaa">


<div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_ret_basica; ?></b> Retirados
              </div>


              <div class="mini_card_iconaa">



  <span class="fa-layers fa-fw">
    <i class="fas fa-clipboard" ></i>
  <i class="fas fa-user-minus" style="color:#0B614B"
   data-fa-transform="shrink-10 down-1.6"></i>
  </span>



              </div>
             
              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_ret_basicaF; ?>  </div>

                  <div class="cantidadzzzpe"> <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_ret_basicaM; ?> </div>


            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 
            href="plantilla_estudiantes_ret.php?ciclo=<?php echo $id_periodo_clave; ?>&grupo=2&elstatus=8&tituloJKL=Retirados, Básica">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


</div>  <!-- cierre row -->






<h4 class="glowwhite mt-2 mb-2">Media:</h4>

      
      <div class="row">

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-ocean o-hidden h-100">
            <div class="card-bodywwwaa">


              <div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_ins_media; ?></b> Inscritos
              </div>


 <div class="cantidadzzzpe"><i class="fas fa-chess-bishop"></i> : <?php  echo $total_nib; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_media_r; ?> </div>




              <div class="mini_card_iconaa">
                <i class="far fa-smile"></i>    
              </div>




              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_ins_mediaF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_ins_mediaM; ?> </div>


             <div class="mt-3 cantidadzzzsmall">

    <a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&elstatus=8&tituloJKL=Inscritos 1er Año">

      <b><?php echo $totalRows_datos_estudiantes_ins_media_1; ?></b>   - 1º Año  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_1a = $totalRows_datos_estudiantes_ins_media_1 - $totalRows_datos_estudiantes_ins_media_1r; echo $tot_1a; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_media_1r; ?> )


              

    </a>
                </div>


                             <div class="cantidadzzzsmall">

<a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&elstatus=8&tituloJKL=Inscritos 2do Año">


<b><?php echo $totalRows_datos_estudiantes_ins_media_2; ?></b>   - 2º Año  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_2a = $totalRows_datos_estudiantes_ins_media_2 - $totalRows_datos_estudiantes_ins_media_2r; echo $tot_2a; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_media_2r; ?> )

</a>

                </div>



           <div class="cantidadzzzsmall">

<a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&elstatus=8&tituloJKL=Inscritos 3er Año">

<b><?php echo $totalRows_datos_estudiantes_ins_media_3; ?></b>   - 3º Año  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_3a = $totalRows_datos_estudiantes_ins_media_3 - $totalRows_datos_estudiantes_ins_media_3r; echo $tot_3a; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_media_3r; ?> )

  </a>              

                </div>



            </div>
            <a class="card-footer card-footerz text-white clearfix small z-1"
             href="plantilla_estudiantes_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grupo=5&elstatus=8&tituloJKL=Inscritos Media">


              <span class="float-left">Ver Listado General</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-ocean o-hidden h-100">
            <div class="card-bodywwwaa">



<div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_pre_media; ?></b> Pre-Inscritos
              </div>


 <div class="cantidadzzzpe"><i class="fas fa-chess-bishop"></i> : <?php $total_pnib = $totalRows_datos_estudiantes_pre_media - $totalRows_datos_estudiantes_pre_media_r; echo $total_pnib; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_media_r; ?> </div>



              <div class="mini_card_iconbb">
                
  <span class="fa-layers fa-fw">
    <i class="fas fa-clipboard" ></i>
  <i class="fas fa-user-check" style="color:#268092"
   data-fa-transform="shrink-10 down-1.6"></i>
  </span>


              </div>

               
              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_pre_mediaF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_pre_mediaM; ?> </div>

             <div class="mt-3 cantidadzzzsmall">

      <a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&elstatus=8&tituloJKL=Pre-Inscritos 1er Año">


          <b><?php echo $totalRows_datos_estudiantes_pre_media_1; ?></b>   - 1º Año  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_1arr = $totalRows_datos_estudiantes_pre_media_1 - $totalRows_datos_estudiantes_pre_media_1r; echo $tot_1arr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_media_1r; ?> )



        </a>        

                </div>


                             <div class="cantidadzzzsmall">

        <a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&elstatus=8&tituloJKL=Pre-Inscritos 2do Año">

                        <b><?php echo $totalRows_datos_estudiantes_pre_media_2; ?></b>   - 2º Año  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_2arr = $totalRows_datos_estudiantes_pre_media_2 - $totalRows_datos_estudiantes_pre_media_2r; echo $tot_2arr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_media_2r; ?> )

 </a> 
                </div>



           <div class="cantidadzzzsmall">


        <a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&elstatus=8&tituloJKL=Pre-Inscritos 3er Año">

                         <b><?php echo $totalRows_datos_estudiantes_pre_media_3; ?></b>   - 3º Año  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_3arr = $totalRows_datos_estudiantes_pre_media_3 - $totalRows_datos_estudiantes_pre_media_3r; echo $tot_3arr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_media_3r; ?> )
            </a>      

                </div>



            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 
            href="plantilla_estudiantes_0a.php?ciclo=<?php echo $id_periodo_clave; ?>&grupo=5&elstatus=8&tituloJKL=Pre-Inscritos Media">

              <span class="float-left">Revisar y/o inscribir</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>




        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-azulgris o-hidden h-100">
            <div class="card-bodywwwaa">


 <div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_no_ins_media; ?></b> No Inscritos
              </div>


              <div class="mini_card_iconaa">
                <i class="far fa-meh"></i>
              </div>
              
              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_no_ins_mediaF; ?>  </div>

              <div class="cantidadzzzpe" > <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_no_ins_mediaM; ?> </div>



            <div class="mt-3 cantidadzzzsmall">

               <b><?php echo $totalRows_datos_estudiantes_no_basica_6; ?></b>   - de 6º Gra. van a <b>1º Año</b> 

                </div>




              <div class=" cantidadzzzsmall">

                <b><?php echo $totalRows_datos_estudiantes_no_media_1; ?></b>   - de 1º Año van a <b>2º Año</b> 

               

             </div>


                     <div class="cantidadzzzsmall">

                    <b><?php echo $totalRows_datos_estudiantes_no_media_2; ?></b>   - de 2º Año van a <b>3º Año</b> 
           
             </div>



                     


            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 

            href="plantilla_estudiantes_no_ins.php?ciclo=<?php echo $respuesta_per_anterior_gg; ?>&grupo=5&elstatus=8&tituloJKL=No Inscritos, Media">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-azulgris o-hidden h-100">
            <div class="card-bodywwwaa">


<div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_ret_media; ?></b> Retirados
              </div>

              <div class="mini_card_iconaa">



  <span class="fa-layers fa-fw">
    <i class="fas fa-clipboard" ></i>
  <i class="fas fa-user-minus" style="color:#25596F"
   data-fa-transform="shrink-10 down-1.6"></i>
  </span>



              </div>
             
              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_ret_mediaF; ?>   </div>

                   <div class="cantidadzzzpe"> <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_ret_mediaM; ?> </div>


            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 
            href="plantilla_estudiantes_ret.php?ciclo=<?php echo $id_periodo_clave; ?>&grupo=5&elstatus=8&tituloJKL=Retirados, Media">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


</div>  <!-- cierre row -->






<h4 class="glowwhite mt-2 mb-2">Media General:</h4>

      
<div class="row">

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-carne o-hidden h-100">
            <div class="card-bodywwwaa">


              <div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_ins_mediaG; ?></b> Inscritos
              </div>


 <div class="cantidadzzzpe"><i class="fas fa-chess-bishop"></i> : <?php  echo $total_im; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_mediaG_r; ?> </div>




              <div class="mini_card_iconaa">
                <i class="far fa-smile"></i>    
              </div>

               
              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_ins_mediaGF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_ins_mediaGM; ?> </div>



              <div class="mt-3 cantidadzzzsmall">

<a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&elstatus=8&tituloJKL=Inscritos 4to Año">

<b><?php echo $totalRows_datos_estudiantes_ins_mediaG_4; ?></b>   - 4º Año  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_4a = $totalRows_datos_estudiantes_ins_mediaG_4 - $totalRows_datos_estudiantes_ins_mediaG_4r; echo $tot_4a; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_mediaG_4r; ?> )

                
</a>

                </div>


                <div class="cantidadzzzsmall">

<a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&elstatus=8&tituloJKL=Inscritos 5to Año">

             <b><?php echo $totalRows_datos_estudiantes_ins_mediaG_5; ?></b>   - 5º Año  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_5a = $totalRows_datos_estudiantes_ins_mediaG_5 - $totalRows_datos_estudiantes_ins_mediaG_5r; echo $tot_5a; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_mediaG_5r; ?> )
</a>
                </div>



              <div class="cantidadzzzsmall"  <?php if ($totalRows_datos_estudiantes_ins_mediaG_6===0){?>style="display:none"<?php } ?> >

  <a class="infoconteo" href="plantilla_estudiantes_00d.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&elstatus=8&tituloJKL=Inscritos 6to Año"> 

<b><?php echo $totalRows_datos_estudiantes_ins_mediaG_6; ?></b>   - 6to Año  ( <i class="fas fa-chess-bishop"></i> : <?php $tot_6a = $totalRows_datos_estudiantes_ins_mediaG_6 - $totalRows_datos_estudiantes_ins_mediaG_6r; echo $tot_6a; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_ins_mediaG_6r; ?> )

              
</a>
                </div>  




            </div>
            <a class="card-footer card-footerz text-white clearfix small z-1"
            href="plantilla_estudiantes_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grupo=3&elstatus=8&tituloJKL=Inscritos Media General">

              <span class="float-left">Ver Listado General</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-carne o-hidden h-100">
            <div class="card-bodywwwaa">


<div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_pre_mediaG; ?></b> Pre-Inscritos
              </div>


 <div class="cantidadzzzpe"><i class="fas fa-chess-bishop"></i> : <?php $total_pim = $totalRows_datos_estudiantes_pre_mediaG - $totalRows_datos_estudiantes_pre_mediaG_r; echo $total_pim; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_mediaG_r; ?> </div>





              <div class="mini_card_iconbb">
                
  <span class="fa-layers fa-fw">
    <i class="fas fa-clipboard" ></i>
  <i class="fas fa-user-check" style="color:#FA8258"
   data-fa-transform="shrink-10 down-1.6"></i>
  </span>


              </div>
            

              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_pre_mediaGF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_pre_mediaGM; ?> </div>


              <div class="mt-3 cantidadzzzsmall">

        <a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&elstatus=8&tituloJKL=Pre-Inscritos 4to Año">

           <b><?php echo $totalRows_datos_estudiantes_pre_mediaG_4; ?></b>   - 4º Año  ( <i class="fas fa-chess-bishop"></i> :  <?php $tot_4arr = $totalRows_datos_estudiantes_pre_mediaG_4 - $totalRows_datos_estudiantes_pre_mediaG_4r; echo $tot_4arr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_mediaG_4r; ?> )


         </a>        

                </div>


                              <div class="cantidadzzzsmall">

        <a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&elstatus=8&tituloJKL=Pre-Inscritos 5to Año">

               <b><?php echo $totalRows_datos_estudiantes_pre_mediaG_5; ?></b>   - 5º Año  ( <i class="fas fa-chess-bishop"></i> :  <?php $tot_5arr = $totalRows_datos_estudiantes_pre_mediaG_5 - $totalRows_datos_estudiantes_pre_mediaG_5r; echo $tot_5arr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_mediaG_5r; ?> )

                </div>



               <div class="cantidadzzzsmall" <?php if ($totalRows_datos_estudiantes_pre_mediaG_6===0){?>style="display:none"<?php } ?> >

        <a class="infoconteo" href="plantilla_estudiantes_0ad.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&elstatus=8&tituloJKL=Pre-Inscritos 6to Año">


          <b><?php echo $totalRows_datos_estudiantes_pre_mediaG_6; ?></b>   - 6to Año  ( <i class="fas fa-chess-bishop"></i> :  <?php $tot_6arr = $totalRows_datos_estudiantes_pre_mediaG_6 - $totalRows_datos_estudiantes_pre_mediaG_6r; echo $tot_6arr; ?>
  / <i class="fas fa-chess-knight"></i> : <?php echo $totalRows_datos_estudiantes_pre_mediaG_6r; ?> )
                


                </div>  



            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 
            href="plantilla_estudiantes_0a.php?ciclo=<?php echo $id_periodo_clave; ?>&grupo=3&elstatus=8&tituloJKL=Pre-Inscritos Media General">

              <span class="float-left">Revisar y/o inscribir</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>




        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-salmon_a o-hidden h-100">
            <div class="card-bodywwwaa">



 <div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_no_ins_mediaG; ?></b> No Inscritos
              </div>


              <div class="mini_card_iconaa">
                <i class="far fa-meh"></i>
              </div>
              
              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_no_ins_mediaGF; ?>  </div>

              <div class="cantidadzzzpe" > <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_no_ins_mediaGM; ?> </div>




<div class="mt-3 cantidadzzzsmall">

              <b><?php echo $totalRows_datos_estudiantes_no_media_3; ?></b>   - de 3º Año van a <b>4º Año</b> 

             </div>



              <div class=" cantidadzzzsmall">

                <b><?php echo $totalRows_datos_estudiantes_no_mediaG_4; ?></b>   - de 4º Año van a <b>5º Año</b> 

                 

             </div>


                       <div class="cantidadzzzsmall" <?php if ($totalRows_datos_estudiantes_pre_mediaG_6==0 && $totalRows_datos_estudiantes_ins_mediaG_6==0){?>style="display:none"<?php } ?> >

                           <b><?php echo $totalRows_datos_estudiantes_no_mediaG_5; ?></b>   - de 5º Año van a <b>6º Año</b>  
      
             </div>  


    <!--                       <div class="cantidadzzzsmall">

               <b><?php echo $totalRows_datos_estudiantes_no_mediaG_6; ?></b>   - 6to Año. 

             </div>   -->


            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 

            href="plantilla_estudiantes_no_ins.php?ciclo=<?php echo $respuesta_per_anterior_gg; ?>&grupo=3&elstatus=8&tituloJKL=No Inscritos, Media General">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-salmon_a o-hidden h-100">
            <div class="card-bodywwwaa">

<div class="cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_ret_mediaG; ?></b> Retirados
              </div>

              <div class="mini_card_iconaa">



  <span class="fa-layers fa-fw">
    <i class="fas fa-clipboard" ></i>
  <i class="fas fa-user-minus" style="color:#E8673A"
   data-fa-transform="shrink-10 down-1.6"></i>
  </span>



              </div>
             
              <div class="cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_ret_mediaGF; ?> </div>

                    <div class="cantidadzzzpe"> <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_ret_mediaGM; ?> </div>


            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 
href="plantilla_estudiantes_ret.php?ciclo=<?php echo $id_periodo_clave; ?>&grupo=3&elstatus=8&tituloJKL=Retirados, Media General">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


</div>  <!-- cierre row -->


<h4 class="glowwhite mt-2 mb-2">Totales:</h4>

      
<div class="row">



<div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white total_hh relleno-vinolight">
            <div class="mini_card_icon">
                <i class="far fa-smile"></i>    
              </div>
            <span class="ml-3 mt-1 cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_ins_total; ?></b> Inscritos</span>

 <span class="ml-3 cantidadzzzpe"><i class="fas fa-chess-bishop"></i> :

  <?php  echo $total_insTTTnnn; ?>


  / <i class="fas fa-chess-knight"></i> :    <?php $total_insTTTrrr = $totalRows_datos_estudiantes_ins_inicial_r + $totalRows_datos_estudiantes_ins_basica_r + $totalRows_datos_estudiantes_ins_media_r + $totalRows_datos_estudiantes_ins_mediaG_r; echo $total_insTTTrrr; ?>

 </span>


            <span class="ml-3 cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_ins_totalF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_ins_totalM; ?>  </span>
          </div>
</div>



<div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white total_hh relleno-vinolight">
            <div class="mini_card_iconhh">
                
   <span class="fa-layers fa-fw">
    <i class="fas fa-clipboard" ></i>
  <i class="fas fa-user-check" style="color:#AF4C56"
   data-fa-transform="shrink-10 down-1.6"></i>
  </span>   
              </div>
            <span class="ml-3 mt-1 cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_pre_total; ?></b> Pre-Inscritos</span>

 <span class="ml-3 cantidadzzzpe"><i class="fas fa-chess-bishop"></i> :

  <?php $total_preTTTnnn = $total_np + $total_nbp + $total_pnib + $total_pim; echo $total_preTTTnnn; ?>


  / <i class="fas fa-chess-knight"></i> :    <?php $total_preTTTrrr = $totalRows_datos_estudiantes_pre_inicial_r + $totalRows_datos_estudiantes_pre_basica_r + $totalRows_datos_estudiantes_pre_media_r + $totalRows_datos_estudiantes_pre_mediaG_r; echo $total_preTTTrrr; ?>

 </span>




            <span class="ml-3 cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_pre_totalF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_pre_totalM; ?>  </span>
          </div>
</div>



<div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white total_hh relleno-vino">
            <div class="mini_card_icon">
                <i class="far fa-meh"></i>    
              </div>
            <span class="ml-3 mt-1 cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_no_ins_total; ?></b> No-Inscritos</span>
            <span class="ml-3 cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_no_ins_totalF; ?>  </span>

            <span class="ml-3 cantidadzzzpe"> <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_no_ins_totalM; ?>  </span>

          </div>
</div>





<div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white total_hh relleno-vino">
            <div class="mini_card_icon">
 
 <span class="fa-layers fa-fw">
    <i class="fas fa-clipboard" ></i>
  <i class="fas fa-user-minus" style="color:#86333B"
   data-fa-transform="shrink-10 down-1.6"></i>
  </span>   
              </div>
            <span class="ml-3 mt-1 cantidadzzzpe"><b><?php echo $totalRows_datos_estudiantes_ret_total; ?></b> Retirados</span>
            <span class="ml-3 cantidadzzzpe"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_estudiantes_ret_totalF; ?> </span>

            <span class="ml-3 cantidadzzzpe"> <i class="fas fa-male"></i> : <?php echo $totalRows_datos_estudiantes_ret_totalM; ?>  </span>


          </div>
</div>


</div>  <!-- cierre row -->



<div class="card border-info mb-3" style="max-width: 100%;">

  <div class="card-body text-dark">

    <p class="card-text" style="font-size: 17px;"><b>Leyenda</b>: " <i class="fas fa-chess-bishop fa-lg"></i> " : <b>nuevos</b> ingresos. &nbsp;&nbsp;/&nbsp;&nbsp; " <i class="fas fa-chess-knight fa-lg"></i> " : alumnos <b>regulares</b>. &nbsp;&nbsp;/&nbsp;&nbsp;  " <i class="fas fa-female fa-lg"></i> " : cantidad de <b>chicas</b>. &nbsp;&nbsp;/&nbsp;&nbsp; " <i class="fas fa-male fa-lg"></i> " : cantidad de <b>chicos</b>.</p>
  </div>
</div>





</div>   <!-- cierre que engloba todas las cards  -->

                           

            </div>   <!-- cierre container fluid -->
        </div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
