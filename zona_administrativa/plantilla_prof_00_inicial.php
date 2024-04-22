<?php


include("identificador.php");


$nnn1 = $nnn['ci'];


 if(isset($_POST['cancelXX']))
    {



$filenameZZ = '../0 Croppie/foto_ci_update' . $nnn1 . '.png';
$filenameAA = '../0 Croppie/foto_per_update' . $nnn1 . '.png';



if (file_exists($filenameZZ )) { 

unlink($filenameZZ);

  }


if (file_exists($filenameAA )) { 

unlink($filenameAA);

    }

}






if(isset($_POST['borrarXX']))
    {



include("../conectar.php");

$queryKKC = "SELECT * FROM plantilla_personal WHERE id_per = '$_POST[id_del_perUU]' LIMIT 1";

                      $resultKKC = mysqli_query($enlace,$queryKKC);
                      $filaKK=mysqli_fetch_array($resultKKC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$foto_a_borrar = $filaKK["foto_per"];


                      if (!empty( $foto_a_borrar )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($foto_a_borrar);


$deleteXX = "UPDATE plantilla_personal SET foto_per = '' WHERE id_per = '$_POST[id_del_perUU]' LIMIT 1 ";
$resultXXC = mysqli_query($enlace,$deleteXX);

               $exitoZ="- Foto borrada. ";

             }


              else {

              $errorZ="- El personal seleccionado no posee foto.";

             }

mysqli_close($enlace); 

 }




if(isset($_POST['borrarRR']))
    {



include("../conectar.php");

$queryRRC = "SELECT * FROM plantilla_personal WHERE id_per = '$_POST[id_del_perUU]' LIMIT 1";

                      $resultRRC = mysqli_query($enlace,$queryRRC);
                      $filaRR=mysqli_fetch_array($resultRRC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$ci_a_borrar = $filaRR["foto_per_ci"];


                      if (!empty( $ci_a_borrar )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($ci_a_borrar);


$deleteRR = "UPDATE plantilla_personal SET foto_per_ci = '' WHERE id_per = '$_POST[id_del_perUU]' LIMIT 1 ";
$resultRRC = mysqli_query($enlace,$deleteRR);

            $exitoZ="- Documento de identidad borrado. ";


             }

             else {

               $errorZ="- El personal seleccionado no posee Doc. de Id. ";

             }

mysqli_close($enlace); 

 }





include("../conectar.php");
// include("listas_php/00_lista_plantilla.php");     // enlista los resultados de la tarjetas del menu incio
mysqli_close($enlace);  


$ttitulo = $_GET['ttitulo'];




// los siguientes permiten eliminar un dato

   if(isset($_POST['borrar_personal']))
    {



           // $borrar_id = $_POST['borrar_selecc'];
           // $errorZ = " <p> <b>" . $borrar_id . " </b> </p>"; // me ayudan a saber si se esta agarrando el id correcto...

      include("../conectar.php"); 


      $queryC = "SELECT * FROM plantilla_personal WHERE id_direccion = '$_POST[borrar_personal]' LIMIT 1";

                      $resultC = mysqli_query($enlace,$queryC);
                      $fila=mysqli_fetch_array($resultC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id de la direccion que esta en la tabla...



                      $foto_a_borrar = $fila["foto_per"];

                      if (!empty( $foto_a_borrar )) {   // si hay algo en foto, borra ese archivo
                                                     unlink($foto_a_borrar);
                                                     }


                      $ci_a_borrar = $fila["foto_per_ci"];

                      if (!empty( $ci_a_borrar )) {   // si hay algo en ci, borra ese archivo
                                                     unlink($ci_a_borrar);
                                                     }




                      $queryD = "DELETE FROM direcciones WHERE id_direccion = '$_POST[borrar_personal]' LIMIT 1";

                      if (!mysqli_query($enlace,$queryD))      // si no ha logrado borrar los datos de la direccion
                         {
                          $errorZ="Error llamar al Ing.  ";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



                      else {  

                         $exitoZ = "<b>--&nbsp; " . $fila['nombre_per'] . " &nbsp;--</b> ha sido eliminado.";

                      }           // hasta aqui gracias a borrar la direccion al estar en cascada se lleva el contenido del plantel.
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
                              mysqli_close($enlace);                                          
                          }


    }  








// los siguientes permite cambiar el estado a activo de un registrado y cambiar fecha....

   if(isset($_POST['activar_personal']))
    {



           // $actvivar_contrato = $_POST['activar_personal'];
           // $errorZ = " <p> <b>" . $actvivar_contrato . " </b> </p>"; // me ayudan a saber si se esta agarrando el contrato correcto...

      include("../conectar.php");


      $queryAC = "SELECT * FROM plantilla_contratados, plantilla_personal
                         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                         and  id_contrato = '$_POST[activar_personal]' LIMIT 1 ";
          

                      $resultAC = mysqli_query($enlace,$queryAC);
                      $filaAC=mysqli_fetch_array($resultAC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id per que esta en la tabla contratos...




        $sql_ACT = "UPDATE plantilla_contratados SET status = '$_POST[activar_status]',
                                           contratado_desde = '$_POST[activar_date]'   
                                        
                                      WHERE id_contrato = '$_POST[activar_personal]' LIMIT 1 ";
            

                      if (!mysqli_query($enlace,$sql_ACT))      // si no ha logrado actualizar
                         {
                          $errorZ="Error llamar al Ing.  ";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



                      else {  

                         $exitoZ = "<b>--&nbsp; " . $filaAC['nombre_per'] . " &nbsp;--</b> ha sido reincorporado(a).";

                      }           // hasta aqui gracias a borrar la direccion al estar en cascada se lleva el contenido del plantel.
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
                              mysqli_close($enlace);                                          
                          }


    }  






// los siguientes permite cambiar el estado a inactivo de un registrado y cambiar fecha....

   if(isset($_POST['desactivar_personal']))
    {


    if (!$_POST['nota_text'])      // verifica que no este vacío
    {   $errorZ = "- Nota de desincorporación requerida. "; }


    if (strlen($_POST['nota_text']) >250 )  // no sea mayor a 250 caracteres
          {   $errorZ = "- Nota de desincorporación invalida. "; }


    if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                              
                          }



           // $actvivar_contrato = $_POST['activar_personal'];
           // $errorZ = " <p> <b>" . $actvivar_contrato . " </b> </p>"; // me ayudan a saber si se esta agarrando el contrato correcto...
else {
      include("../conectar.php");


      $queryDC = "SELECT * FROM plantilla_contratados, plantilla_personal
                         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                         and  id_contrato = '$_POST[desactivar_personal]' LIMIT 1 ";
          

                      $resultDC = mysqli_query($enlace,$queryDC);
                      $filaDC=mysqli_fetch_array($resultDC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id per que esta en la tabla contratos...




        $sql_DES = "UPDATE plantilla_contratados SET status = '$_POST[desactivar_status]',
                                                fuera_desde = '$_POST[desactivar_date]',
                                                       nota = '".mysqli_real_escape_string($enlace,$_POST['nota_text'])."'
                                        
                                      WHERE id_contrato = '$_POST[desactivar_personal]' LIMIT 1 ";
            

                      if (!mysqli_query($enlace,$sql_DES))      // si no ha logrado actualizar
                         {
                          $errorZ="Error llamar al Ing.  ";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



                      else {  

                         $exitoZ = "<b>--&nbsp; " . $filaDC['nombre_per'] . " &nbsp;--</b> ha sido desincorporado(a).";

                      }           // hasta aqui gracias a borrar la direccion al estar en cascada se lleva el contenido del plantel.
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
                              mysqli_close($enlace);                                          
                          }


    }  
}          







   // lo siguiente permite modificar el nombre de un dato.     






 if(isset($_POST['editar_selecc']))
        {

          

 include("consultas_mod/chequeo_plant_mod.php");   // chequea que lo introducido este bien.
          
 

if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }

else      // verifica primero si el email ya está registrado en la BD...
  {

  include("../conectar.php");

  $id_del_perzzz = $_POST["idzzz"];

  $queryEx = "SELECT id_per FROM plantilla_personal WHERE email_per ='".mysqli_real_escape_string($enlace,$_POST['mod_email_per'])."' LIMIT 1";

  $resultEx = mysqli_query($enlace,$queryEx);

  $filaEx=mysqli_fetch_array($resultEx);

   
  if ($filaEx['id_per'] != $id_del_perzzz AND mysqli_num_rows($resultEx)>0)
    {
    $errorZ="- Email ya registrado a otro personal. ";
    mysqli_close($enlace); 
    }


    else {  // ya que no hay coincidencia de cedula....


  $queryCx = "SELECT id_per FROM plantilla_personal WHERE ci_per ='".mysqli_real_escape_string($enlace,$_POST['mod_ci_per'])."' LIMIT 1";

  $resultCx = mysqli_query($enlace,$queryCx);

  $filaCx=mysqli_fetch_array($resultCx);


  if ($filaCx['id_per'] != $id_del_perzzz AND mysqli_num_rows($resultCx)>0)
      
      {
      $errorZ="- Cedula ya registrada a otro personal. ";
      mysqli_close($enlace); 
      }


      else {   // ya que no hay coincidencia ni de email ni de ci, procedo a modificar
       

           // $dato = $_POST["nombre_area"];

          $id_del_contratozzz = $_POST["contratozzz"];

          $mod_ciudad = $_POST["mod_ciudad"];
          $mod_municipio = $_POST["mod_municipio"];
          $mod_parroquia = $_POST["mod_parroquia"];
          $mod_avenida = $_POST["mod_avenida"];         
          $mod_calle = mysqli_real_escape_string($enlace,$_POST['mod_calle']) ;
          $mod_codigo = $_POST["mod_codigo"];
          $mod_vivienda = $_POST["mod_vivienda"];
          $mod_nombre_vi = mysqli_real_escape_string($enlace,$_POST['mod_nombre_vi']) ;
          $mod_piso = $_POST["mod_piso"];
          $mod_numero = $_POST["mod_numero"];

          $mod_ci_per = mysqli_real_escape_string($enlace,$_POST['mod_ci_per']) ;
          $mod_nombre_per = mysqli_real_escape_string($enlace,$_POST['mod_nombre_per']) ;
          $mod_apellido_per = mysqli_real_escape_string($enlace,$_POST['mod_apellido_per']) ;
          $mod_nacimiento_per = $_POST["mod_nacimiento_per"];
          $mod_celular_per = mysqli_real_escape_string($enlace,$_POST['mod_celular_per']) ;
          $mod_telefono_per = mysqli_real_escape_string($enlace,$_POST['mod_telefono_per']) ;          
          $mod_email_per = mysqli_real_escape_string($enlace,$_POST['mod_email_per']) ;          
          $mod_genero = $_POST["mod_genero"];         
          $mod_paisx = $_POST["mod_paisx"];


$sql_upd = "UPDATE plantilla_personal INNER JOIN direcciones ON plantilla_personal.id_direccion = direcciones.id_direccion 

        SET direcciones.id_ciudad    = '$mod_ciudad',
            direcciones.id_municipio = '$mod_municipio',
            direcciones.id_parroquia = '$mod_parroquia',
            direcciones.id_avenida   = '$mod_avenida',
            direcciones.dir_calle_sector = '$mod_calle',
            direcciones.id_codigo = '$mod_codigo',
            direcciones.id_vivienda = '$mod_vivienda',
            direcciones.dir_nombre_vivienda = '$mod_nombre_vi',
            direcciones.id_piso = '$mod_piso',
            direcciones.id_numero = '$mod_numero',

            plantilla_personal.ci_per = '$mod_ci_per',
            plantilla_personal.nombre_per = '$mod_nombre_per',
            plantilla_personal.apellido_per = '$mod_apellido_per',
            plantilla_personal.nacimiento_per = '$mod_nacimiento_per',
            plantilla_personal.celular_per = '$mod_celular_per',
            plantilla_personal.telefono_per = '$mod_telefono_per',
            plantilla_personal.email_per = '$mod_email_per',
            plantilla_personal.id_sexo = '$mod_genero',
            plantilla_personal.d_paises = '$mod_paisx'            
            

        WHERE plantilla_personal.id_per = '$_POST[editar_selecc]' ";


                       
            if (!mysqli_query($enlace,$sql_upd))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp; = &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos y dirección no actualizados.\">
<i class=\"far fa-address-book fa-lg\"></i></i> &nbsp "; 
               }               

            else{
                     $exitoZ .= "&nbsp; = &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos y dirección actualizados.\">
<i class=\"far fa-address-book fa-lg\"></i></i> &nbsp "; 



$id_titulos_allzz1 = $_POST["id_titulos_allzz1"];
             $titulo1 = $_POST["mod_titulo1"];
           $mencion1 = $_POST["mod_mencion1"];
         $instituto1 = $_POST["mod_instituto1"];

$id_titulos_allzz2 = $_POST["id_titulos_allzz2"];
          $titulo2 = $_POST["mod_titulo2"];
           $mencion2 = $_POST["mod_mencion2"];
         $instituto2 = $_POST["mod_instituto2"];

$id_titulos_allzz3 = $_POST["id_titulos_allzz3"];
          $titulo3 = $_POST["mod_titulo3"];
           $mencion3 = $_POST["mod_mencion3"];
         $instituto3 = $_POST["mod_instituto3"];           
 

$sql_updInst = " UPDATE titulos_all SET

id_titulos = CASE
WHEN id_titulos_all = '$id_titulos_allzz1' THEN '$titulo1'
WHEN id_titulos_all = '$id_titulos_allzz2' THEN '$titulo2'
WHEN id_titulos_all = '$id_titulos_allzz3' THEN '$titulo3'
ELSE id_titulos END,

id_mencion = CASE
WHEN id_titulos_all = '$id_titulos_allzz1' THEN '$mencion1'
WHEN id_titulos_all = '$id_titulos_allzz2' THEN '$mencion2'
WHEN id_titulos_all = '$id_titulos_allzz3' THEN '$mencion3'
ELSE id_mencion END,

id_instituto = CASE
WHEN id_titulos_all = '$id_titulos_allzz1' THEN '$instituto1'
WHEN id_titulos_all = '$id_titulos_allzz2' THEN '$instituto2'
WHEN id_titulos_all = '$id_titulos_allzz3' THEN '$instituto3'
ELSE id_instituto END

WHERE id_titulos_all = '$id_titulos_allzz1' OR id_titulos_all = '$id_titulos_allzz2' OR id_titulos_all = '$id_titulos_allzz3'

 ";




                if (!mysqli_query($enlace,$sql_updInst))      // actualiza y si no ha logrado ingresar los datos
                         {
            $errorZ .=" &nbsp; , &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Estudios no actualizados.\">
<i class=\"fas fa-graduation-cap fa-lg\"></i></i> &nbsp ";
                          
                        
                          }

                   else{     // se actualizaron los estudios

                         // $exitoZ .= " Estudios " . $id_titulos_allzz1 . " actualizados; ";   para saber si esta bien.
                            
                          $exitoZ .= " &nbsp; , &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Estudios actualizados.\">
<i class=\"fas fa-graduation-cap fa-lg\"></i></i> &nbsp "; 



$mod_fecha_ini = $_POST["mod_fecha_ini"];


$mod_cargo_a = $_POST["mod_cargo_a"];

if ($mod_cargo_a == "27" OR $mod_cargo_a == "29" OR $mod_cargo_a == "32"  OR $mod_cargo_a == "58" OR $mod_cargo_a == "59" OR $mod_cargo_a == "60"  OR $mod_cargo_a == "61" OR $mod_cargo_a == "62" ) {

$mod_division = $_POST["mod_division"];
  
}

else  {
  $mod_division = '4';
}



$mod_dicta = $_POST["mod_dicta"];





        $sql_cont1 = "UPDATE plantilla_contratados SET contratado_desde = '$mod_fecha_ini',
                                                            id_division = '$mod_division',
                                                        id_plant_grados = '$mod_dicta'
                                        
                                      WHERE id_per = '$_POST[editar_selecc]' LIMIT 1 ";
            

                      if (!mysqli_query($enlace,$sql_cont1))      // si no ha logrado actualizar
                         {
                          $errorZ .=" &nbsp; , &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Contrato no actualizado.\">
<i class=\"far fa-handshake fa-lg\"></i></i> &nbsp ";
                          }

                      else {

                        $exitoZ .= " &nbsp; , &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Contrato actualizado.\">
<i class=\"far fa-handshake fa-lg\"></i></i> &nbsp ";

                      }   


$id_cargos_allzz1 = $_POST["id_cargos_allzz1"];
             $mod_cargo_a = $_POST["mod_cargo_a"];
          

$id_cargos_allzz2 = $_POST["id_cargos_allzz2"];
         $mod_cargo_b = $_POST["mod_cargo_b"];
         

          
 

$sql_updCarg = " UPDATE cargos_all SET

id_cargo = CASE
WHEN id_cargos_all = '$id_cargos_allzz1' THEN '$mod_cargo_a'
WHEN id_cargos_all = '$id_cargos_allzz2' THEN '$mod_cargo_b'
ELSE id_cargo END

WHERE id_cargos_all = '$id_cargos_allzz1' OR id_cargos_all = '$id_cargos_allzz2' 

 ";


                if (!mysqli_query($enlace,$sql_updCarg))      // actualiza y si no ha logrado ingresar los datos
                         {
            $errorZ .=" &nbsp; , &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Cargos no actualizados.\">
<i class=\"fas fa-exclamation-circle fa-lg\"></i></i> &nbsp ";


// Cargos no actualizados; ". $id_cargos_allzz1 ." . ". $id_cargos_allzz2 ." ";
                          }


                   else{     // se actualizaron los estudios

                         // $exitoZ .= " Estudios " . $id_titulos_allzz1 . " actualizados; ";   para saber si esta bien.
                            
                          $exitoZ .= " &nbsp; , &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Cargos actualizados.\">
<i class=\"fas fa-check-circle fa-lg\"></i></i> &nbsp "; 
                       }




$id_areas_allzz1 = $_POST["id_areas_allzz1"];
             $mod_area_a = $_POST["mod_area_a"];
        
$id_areas_allzz2 = $_POST["id_areas_allzz2"];
          $mod_area_b = $_POST["mod_area_b"];
        
$id_areas_allzz3 = $_POST["id_areas_allzz3"];
          $mod_area_c = $_POST["mod_area_c"];
            
 

$sql_updAre = " UPDATE areas_all SET

id_area = CASE
WHEN id_areas_all = '$id_areas_allzz1' THEN '$mod_area_a'
WHEN id_areas_all = '$id_areas_allzz2' THEN '$mod_area_b'
WHEN id_areas_all = '$id_areas_allzz3' THEN '$mod_area_c'
ELSE id_area END

WHERE id_areas_all = '$id_areas_allzz1' OR id_areas_all = '$id_areas_allzz2' OR id_areas_all = '$id_areas_allzz3'

 ";




                if (!mysqli_query($enlace,$sql_updAre))      // actualiza y si no ha logrado ingresar los datos
                         {
            $errorZ .=" &nbsp; , &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Areas no actualizadas.\">
<i class=\"fas fa-battery-empty fa-lg\"></i></i> &nbsp "; 
                          
                        
                          }

                   else{     // se actualizo las areas

                         // $exitoZ .= " Estudios " . $id_titulos_allzz1 . " actualizados; ";   para saber si esta bien.
                            
                          $exitoZ .= " &nbsp; , &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Areas actualizadas.\">
<i class=\"fas fa-battery-full fa-lg\"></i></i> &nbsp ";  

                      
if ($_POST["mod_fecha_ini_plant"] !="" )
// en caso de que esta fecha tenga algo, inserta o actualiza  

                          {


                            $id_vida_profzzz = $_POST["id_vida_profzzz"];
                            $mod_fecha_ini_plant = $_POST["mod_fecha_ini_plant"];
                            $mod_plantel_ini = mysqli_real_escape_string($enlace,$_POST['mod_plantel_ini']) ;
                            $mod_edad_priv = mysqli_real_escape_string($enlace,$_POST['mod_edad_priv']) ;
                            $mod_edad_ofi = mysqli_real_escape_string($enlace,$_POST['mod_edad_ofi']) ;

                            $mod_edad_tot = mysqli_real_escape_string($enlace,$_POST['mod_edad_total']) ;


                             $sql_vidap = "INSERT INTO vida_prof (id_vida_prof, id_per, fecha_vida, plantel_vida, edad_privados, edad_oficiales, edad_total)  

                                              VALUES ('$id_vida_profzzz', '$_POST[editar_selecc]', '$mod_fecha_ini_plant', '$mod_plantel_ini',
                                                      '$mod_edad_priv', '$mod_edad_ofi', '$mod_edad_tot' )

                                                  ON DUPLICATE KEY 

                                UPDATE fecha_vida = '$mod_fecha_ini_plant', plantel_vida = '$mod_plantel_ini',
                                                     edad_privados = '$mod_edad_priv', edad_oficiales = '$mod_edad_ofi', edad_total = '$mod_edad_tot' ";
                                    
                                        

                                                  if (!mysqli_query($enlace,$sql_vidap))      // si no ha logrado actualizar
                                                     {
                                                      $errorZ .=" &nbsp; , &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Vida Prof. no Actualizada.\">
<i class=\"fas fa-book fa-lg\"></i></i> &nbsp ";  

                                                      }

                                                  else {

                                                    $exitoZ .= " &nbsp; , &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Vida Prof. Actualizada.\">
<i class=\"fas fa-book fa-lg\"></i></i> &nbsp ";  

                                                  } 



                            if ($_POST["mod_obs_text"] == "" )                  // proceso para upd el contenido de obs
                             {$mod_obs_text = "..."; }                          // segun parece siempre tiene espacios vacios..
                    
                    else {$mod_obs_text = mysqli_real_escape_string($enlace,$_POST['mod_obs_text']) ;}


                            $id_obs_perzzz = $_POST["id_obs_perzzz"];  

                             $mod_total_t = $_POST["mod_total_tiempillo"];  


                            $sql_obsmod = "INSERT INTO obs_per (id_obs_per, obs_per, id_per, total_horas) 

                                              VALUES ('$id_obs_perzzz', '$mod_obs_text', '$_POST[editar_selecc]', '$mod_total_t'  ) 

                                                  ON DUPLICATE KEY 

                                UPDATE obs_per = '$mod_obs_text', total_horas = '$mod_total_t' ";



                                 if (!mysqli_query($enlace,$sql_obsmod))      // si no ha logrado actualizar
                                                     {
                                                      $errorZ .=" &nbsp; , &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Observaciones no actualizadas.\">
<i class=\"far fa-comment-alt fa-lg\"></i></i> &nbsp ";  

                                                      }

                                                  else {

                                                    $exitoZ .= " &nbsp; , &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Observaciones actualizadas.\">
<i class=\"far fa-comment-alt fa-lg\"></i></i> &nbsp ";  

                                                  }


                  $id_prof_estudiazzz = $_POST["id_prof_estudiazzz"];
                  $mod_resp1 = $_POST["mod_resp1"];



                        if (empty($_POST["mod_titulos_resp1"]) OR $_POST["mod_resp1"] != "1"  )  // si esta vacío  o la respuesta es no
                       {$mod_titulos_resp1 = "102"; }  
                        else {$mod_titulos_resp1 = $_POST["mod_titulos_resp1"];}

                        if (empty($_POST["mod_mencion_resp1"])  OR $_POST["mod_resp1"] != "1" )      // si esta vacío  o la respuesta es no 
                       {$mod_mencion_resp1= "26"; }  
                        else {$mod_mencion_resp1 = $_POST["mod_mencion_resp1"];}


                        if (empty($_POST["mod_instituto_resp1"])  OR $_POST["mod_resp1"] != "1" )      // si esta vacío   o la respuesta es no
                       {$mod_instituto_resp1= "15"; }  
                        else {$mod_instituto_resp1 = $_POST["mod_instituto_resp1"];}

                        if (empty($_POST["mod_semestre_resp1"]) OR $_POST["mod_resp1"] != "1"  )      // si esta vacío  o la respuesta es no 
                       {$mod_semestre_resp1= "13"; }  
                        else {$mod_semestre_resp1 = $_POST["mod_semestre_resp1"];}



  


    $sql_profestu = "INSERT INTO prof_estudia
                           (id_prof_estudia, id_respuesta, id_titulos, id_mencion, id_instituto, id_semestre, id_per) 

                    VALUES ('$id_prof_estudiazzz', '$mod_resp1', '$mod_titulos_resp1', '$mod_mencion_resp1',
                           '$mod_instituto_resp1', '$mod_semestre_resp1', '$_POST[editar_selecc]' ) 

                                                  ON DUPLICATE KEY 

                                UPDATE id_respuesta = '$mod_resp1', id_titulos = '$mod_titulos_resp1',
                                       id_mencion = '$mod_mencion_resp1', id_instituto = '$mod_instituto_resp1',
                                                     id_semestre = '$mod_semestre_resp1' ";



                          if (!mysqli_query($enlace,$sql_profestu))      // si no ha logrado actualizar
                                                                             {
                                                                              $errorZ .=" &nbsp; , &nbsp;&nbsp;
                        <i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Estudios no actualizados.\">
                        <i class=\"fas fa-clipboard fa-lg\"></i></i> &nbsp ";  

                                                                              }

                                                                          else {

                                                                            $exitoZ .= " &nbsp; , &nbsp;&nbsp;
                        <i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Estudios actualizados.\">
                        <i class=\"fas fa-clipboard-check fa-lg\"></i></i> &nbsp ";  

                                                                          } 

               

                             $id_asig_grad_hora1zzz = $_POST["id_asig_grad_hora1zzz"];   
                            
                            $id_asig_grad_hora2zzz = $_POST["id_asig_grad_hora2zzz"];
                            $id_asig_grad_hora3zzz = $_POST["id_asig_grad_hora3zzz"]; 
                            $id_asig_grad_hora4zzz = $_POST["id_asig_grad_hora4zzz"]; 
                            $id_asig_grad_hora5zzz = $_POST["id_asig_grad_hora5zzz"]; 
                            $id_asig_grad_hora6zzz = $_POST["id_asig_grad_hora6zzz"]; 


                        if (empty($_POST["mod_areaAA"]) )  // si esta vacío  
                       {$mod_areaAA = "66"; }  
                        else {$mod_areaAA = $_POST["mod_areaAA"];}

                         if (empty($_POST["mod_areaBB"]) )  // si esta vacío  
                       {$mod_areaBB = "66"; }  
                        else {$mod_areaBB = $_POST["mod_areaBB"];}

                         if (empty($_POST["mod_areaCC"]) )  // si esta vacío  
                       {$mod_areaCC = "66"; }  
                        else {$mod_areaCC = $_POST["mod_areaCC"];}

                         if (empty($_POST["mod_areaDD"]) )  // si esta vacío  
                       {$mod_areaDD = "66"; }  
                        else {$mod_areaDD = $_POST["mod_areaDD"];}

                         if (empty($_POST["mod_areaEE"]) )  // si esta vacío  
                       {$mod_areaEE = "66"; }  
                        else {$mod_areaEE = $_POST["mod_areaEE"];}

                         if (empty($_POST["mod_areaFF"]) )  // si esta vacío  
                       {$mod_areaFF = "66"; }  
                        else {$mod_areaFF = $_POST["mod_areaFF"];}




                        if (empty($_POST["mod_gradoAA"]) )      // si esta vacío  
                       {$mod_gradoAA = "51"; }  
                        else {$mod_gradoAA = $_POST["mod_gradoAA"];}

                        if (empty($_POST["mod_gradoBB"]) )      // si esta vacío  
                       {$mod_gradoBB = "51"; }  
                        else {$mod_gradoBB = $_POST["mod_gradoBB"];}

                        if (empty($_POST["mod_gradoCC"]) )      // si esta vacío  
                       {$mod_gradoCC = "51"; }  
                        else {$mod_gradoCC = $_POST["mod_gradoCC"];}

                        if (empty($_POST["mod_gradoDD"]) )      // si esta vacío  
                       {$mod_gradoDD = "51"; }  
                        else {$mod_gradoDD = $_POST["mod_gradoDD"];}

                        if (empty($_POST["mod_gradoEE"]) )      // si esta vacío  
                       {$mod_gradoEE = "51"; }  
                        else {$mod_gradoEE = $_POST["mod_gradoEE"];}

                        if (empty($_POST["mod_gradoFF"]) )      // si esta vacío  
                       {$mod_gradoFF = "51"; }  
                        else {$mod_gradoFF = $_POST["mod_gradoFF"];}


                    


                              
                 if (empty($_POST["mod_turnoAA"]) )      // si esta vacío  
                       {$mod_turnoAA = "4"; }  
                        else {$mod_turnoAA = $_POST["mod_turnoAA"];}  

                        if (empty($_POST["mod_turnoBB"]) )      // si esta vacío  
                       {$mod_turnoBB = "4"; }  
                        else {$mod_turnoBB = $_POST["mod_turnoBB"];}

                        if (empty($_POST["mod_turnoCC"]) )      // si esta vacío  
                       {$mod_turnoCC = "4"; }  
                        else {$mod_turnoCC = $_POST["mod_turnoCC"];}

                        if (empty($_POST["mod_turnoDD"]) )      // si esta vacío  
                       {$mod_turnoDD = "4"; }  
                        else {$mod_turnoDD = $_POST["mod_turnoDD"];}

                        if (empty($_POST["mod_turnoEE"]) )      // si esta vacío  
                       {$mod_turnoEE = "4"; }  
                        else {$mod_turnoEE = $_POST["mod_turnoEE"];}

                        if (empty($_POST["mod_turnoFF"]) )      // si esta vacío  
                       {$mod_turnoFF = "4"; }  
                        else {$mod_turnoFF = $_POST["mod_turnoFF"];}


                        if (empty($_POST["mod_seccionAA"]) )      // si esta vacío  
                       {$mod_seccionAA = "8"; }  
                        else {$mod_seccionAA = $_POST["mod_seccionAA"];}

                         if (empty($_POST["mod_seccionBB"]) )      // si esta vacío  
                       {$mod_seccionBB = "8"; }  
                        else {$mod_seccionBB = $_POST["mod_seccionBB"];}

                         if (empty($_POST["mod_seccionCC"]) )      // si esta vacío  
                       {$mod_seccionCC = "8"; }  
                        else {$mod_seccionCC = $_POST["mod_seccionCC"];}

                         if (empty($_POST["mod_seccionDD"]) )      // si esta vacío  
                       {$mod_seccionDD = "8"; }  
                        else {$mod_seccionDD = $_POST["mod_seccionDD"];}

                         if (empty($_POST["mod_seccionEE"]) )      // si esta vacío  
                       {$mod_seccionEE = "8"; }  
                        else {$mod_seccionEE = $_POST["mod_seccionEE"];}

                         if (empty($_POST["mod_seccionFF"]) )      // si esta vacío  
                       {$mod_seccionFF = "8"; }  
                        else {$mod_seccionFF = $_POST["mod_seccionFF"];}


                        



                      if (empty($_POST["mod_horaAA"]) )      // si esta vacío  
                       {$mod_horaAA = "21"; }  
                        else {$mod_horaAA = $_POST["mod_horaAA"];}  

                        if (empty($_POST["mod_horaBB"]) )      // si esta vacío  
                       {$mod_horaBB = "21"; }  
                        else {$mod_horaBB = $_POST["mod_horaBB"];}

                        if (empty($_POST["mod_horaCC"]) )      // si esta vacío  
                       {$mod_horaCC = "21"; }  
                        else {$mod_horaCC = $_POST["mod_horaCC"];}

                        if (empty($_POST["mod_horaDD"]) )      // si esta vacío  
                       {$mod_horaDD = "21"; }  
                        else {$mod_horaDD = $_POST["mod_horaDD"];}

                        if (empty($_POST["mod_horaEE"]) )      // si esta vacío  
                       {$mod_horaEE = "21"; }  
                        else {$mod_horaEE = $_POST["mod_horaEE"];}

                        if (empty($_POST["mod_horaFF"]) )      // si esta vacío  
                       {$mod_horaFF = "21"; }  
                        else {$mod_horaFF = $_POST["mod_horaFF"];}

                     $id_contratox5r = $_POST["id_contratox5"];
                        


                     
$query_x5updt = "INSERT INTO asignatura_grado_horas(id_asig_grad_hora, id_contrato, id_area, id_grado, id_turno, id_seccion, id_hora)  
VALUES('$id_asig_grad_hora1zzz', '$id_contratox5r', '$mod_areaAA', '$mod_gradoAA', '$mod_turnoAA', '$mod_seccionAA', '$mod_horaAA'),
      ('$id_asig_grad_hora2zzz', '$id_contratox5r', '$mod_areaBB', '$mod_gradoBB', '$mod_turnoBB', '$mod_seccionBB', '$mod_horaBB'),
      ('$id_asig_grad_hora3zzz', '$id_contratox5r', '$mod_areaCC', '$mod_gradoCC', '$mod_turnoCC', '$mod_seccionCC', '$mod_horaCC'),
      ('$id_asig_grad_hora4zzz', '$id_contratox5r', '$mod_areaDD', '$mod_gradoDD', '$mod_turnoDD', '$mod_seccionDD', '$mod_horaDD'),
      ('$id_asig_grad_hora5zzz', '$id_contratox5r', '$mod_areaEE', '$mod_gradoEE', '$mod_turnoEE', '$mod_seccionEE', '$mod_horaEE'),
      ('$id_asig_grad_hora6zzz', '$id_contratox5r', '$mod_areaFF', '$mod_gradoFF', '$mod_turnoFF', '$mod_seccionFF', '$mod_horaFF') 
     
ON DUPLICATE KEY 

UPDATE 

id_area = VALUES (id_area),
id_grado = VALUES (id_grado),
id_turno = VALUES (id_turno),
id_seccion = VALUES (id_seccion),
id_hora = VALUES (id_hora)

      ";

     
                        

                          if (!mysqli_query($enlace,$query_x5updt))      // si no ha logrado actualizar
                                                                             {
                                                                              $errorZ .=" &nbsp; , &nbsp;&nbsp;
                        <i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Carga laboral no actualizada.\">
<i class=\"fas fa-calendar-times fa-lg\"></i></i> &nbsp ";  

      // .". $mod_areaAA ." . ". $mod_gradoAA ." . ". $mod_turnoAA ." . ". $mod_horaAA ."

                                                                              }

                                                                          else {

                                                                            $exitoZ .= " &nbsp; , &nbsp;&nbsp;
                        <i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Carga laboral actualizada.\">
                        <i class=\"fas fa-calendar-check fa-lg\"></i></i> &nbsp ";  

                                                                          } 




                           $id_t_o1 = $_POST["id_trabaja_otro1zzz"];
                           $id_t_o2 = $_POST["id_trabaja_otro2zzz"];
                           $id_t_o3 = $_POST["id_trabaja_otro3zzz"];
                           $id_t_o4 = $_POST["id_trabaja_otro4zzz"];

                           
                       
                   if ($_POST["mod_trab_act"] != "1") {
                    $mod_n_p_A = ".";
                    $mod_n_p_B = ".";
                    $mod_n_p_C = ".";
                    $mod_n_p_D = ".";
                   }

                   else {

                           $mod_n_p_A = mysqli_real_escape_string($enlace,$_POST['mod_nombre_plant_traA']) ;
                           $mod_n_p_B = mysqli_real_escape_string($enlace,$_POST['mod_nombre_plant_traB']) ;
                           $mod_n_p_C = mysqli_real_escape_string($enlace,$_POST['mod_nombre_plant_traC']) ;
                           $mod_n_p_D = mysqli_real_escape_string($enlace,$_POST['mod_nombre_plant_traD']) ;

                   }



                     
                   if (empty($_POST["mod_tipo_plantelA"]) OR $_POST["mod_trab_act"] != "1" )      // si esta vacío  
                       {$mod_tipo_plantelA= "3"; }  
                        else {$mod_tipo_plantelA = $_POST["mod_tipo_plantelA"];}


                    if (empty($_POST["mod_asig_otroA"]) OR $_POST["mod_trab_act"] != "1" )      // si esta vacío  
                       {$mod_asig_otroA= "66"; }  
                        else {$mod_asig_otroA = $_POST["mod_asig_otroA"];}


                    if (empty($_POST["mod_grado_otrA"]) OR $_POST["mod_trab_act"] != "1" )      // si esta vacío  
                       {$mod_grado_otrA= "51"; }  
                        else {$mod_grado_otrA = $_POST["mod_grado_otrA"];}



                     if (empty($_POST["mod_tipo_plantelB"]) OR $_POST["mod_trab_act"] != "1" )      // si esta vacío  
                       {$mod_tipo_plantelB= "3"; }  
                        else {$mod_tipo_plantelB = $_POST["mod_tipo_plantelB"];}


                    if (empty($_POST["mod_asig_otroB"]) OR $_POST["mod_trab_act"] != "1" )      // si esta vacío  
                       {$mod_asig_otroB= "66"; }  
                        else {$mod_asig_otroB = $_POST["mod_asig_otroB"];}


                    if (empty($_POST["mod_grado_otrB"]) OR $_POST["mod_trab_act"] != "1" )      // si esta vacío  
                       {$mod_grado_otrB= "51"; }  
                        else {$mod_grado_otrB = $_POST["mod_grado_otrB"];}



                     if (empty($_POST["mod_tipo_plantelC"]) OR $_POST["mod_trab_act"] != "1" )      // si esta vacío  
                       {$mod_tipo_plantelC= "3"; }  
                        else {$mod_tipo_plantelC = $_POST["mod_tipo_plantelC"];}


                    if (empty($_POST["mod_asig_otroC"]) OR $_POST["mod_trab_act"] != "1" )      // si esta vacío  
                       {$mod_asig_otroC= "66"; }  
                        else {$mod_asig_otroC = $_POST["mod_asig_otroC"];}


                    if (empty($_POST["mod_grado_otrC"])  OR $_POST["mod_trab_act"] != "1" )      // si esta vacío  
                       {$mod_grado_otrC= "51"; }  
                        else {$mod_grado_otrC = $_POST["mod_grado_otrC"];}




                        if (empty($_POST["mod_tipo_plantelD"]) OR $_POST["mod_trab_act"] != "1" )      // si esta vacío  
                       {$mod_tipo_plantelD= "3"; }  
                        else {$mod_tipo_plantelD = $_POST["mod_tipo_plantelD"];}


                    if (empty($_POST["mod_asig_otroD"]) OR $_POST["mod_trab_act"] != "1" )      // si esta vacío  
                       {$mod_asig_otroD= "66"; }  
                        else {$mod_asig_otroD = $_POST["mod_asig_otroD"];}


                    if (empty($_POST["mod_grado_otrD"])  OR $_POST["mod_trab_act"] != "1" )      // si esta vacío  
                       {$mod_grado_otrD= "51"; }  
                        else {$mod_grado_otrD = $_POST["mod_grado_otrD"];}

                        $id_perT = $_POST["editar_selecc"];

                        $id_resp_o = $_POST["mod_trab_act"];
                        


                     
$query_x4updt = "INSERT INTO trabaja_otro (id_trabaja_otro, id_respuesta, id_tipo, nombre_plantel, id_area, id_grado, id_per)  
VALUES
('$id_t_o1', '$id_resp_o', '$mod_tipo_plantelA', '$mod_n_p_A', '$mod_asig_otroA', '$mod_grado_otrA', '$id_perT'),
('$id_t_o2', '$id_resp_o', '$mod_tipo_plantelB', '$mod_n_p_B', '$mod_asig_otroB', '$mod_grado_otrB', '$id_perT'),
('$id_t_o3', '$id_resp_o', '$mod_tipo_plantelC', '$mod_n_p_C', '$mod_asig_otroC', '$mod_grado_otrC', '$id_perT'),
('$id_t_o4', '$id_resp_o', '$mod_tipo_plantelD', '$mod_n_p_D', '$mod_asig_otroD', '$mod_grado_otrD', '$id_perT')
      
     
ON DUPLICATE KEY 

UPDATE 

id_respuesta = VALUES (id_respuesta),
id_tipo = VALUES (id_tipo),
nombre_plantel = VALUES (nombre_plantel),
id_area = VALUES (id_area),
id_grado = VALUES (id_grado)

      ";     
                        

                          if (!mysqli_query($enlace,$query_x4updt))      // si no ha logrado actualizar
                                                                             {
                                                                              $errorZ .=" &nbsp; , &nbsp;&nbsp;
                        <i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos otro trab. fallo.\">
                        <i class=\"fas fa-briefcase fa-lg\"></i></i> &nbsp ";  

      // .". $mod_areaAA ." . ". $mod_gradoAA ." . ". $mod_turnoAA ." . ". $mod_horaAA ."

                                                                              }

                                                                          else {

                                                                            $exitoZ .= " &nbsp; , &nbsp;&nbsp;
                        <i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos otro trab. cargado.\">
                        <i class=\"fas fa-briefcase fa-lg\"></i></i> &nbsp ";  

                                                                          } 





                          } // cierre if de si tiene algo la fecha de la vida profesional, si esta aqui es un profesor
                        
                         




                           if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }     


                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. "  ";            
                         

                      mysqli_close($enlace);  

                           }



                       }  // cierre de actualizar las areas




                      }   // cierre de que se actualizaron los estudios...






                }  // exito de que actualizo el usuario y la direccion



                


         }





      }  // cierre ya que no hay coincidencia ni de email ni de ci, procedo a modificar


      

      
         

    } // cierre else en caso de pasar la primera zona de comprobacion, en este se comprueba repitencia de ci y/o email

         
} // cierre if en caso de actualizar




// update de las fotos


 if(isset($_POST['update_logoX']))
        {    

$idPer = $_POST['update_logoX'];

$num_cedula = $_POST['update_ciX'];


clearstatcache();
$filenameUPd_fot = '../0 Croppie/foto_per_update' . $nnn1 . '.png';



$ci_bandera = "0";
$fot_bandera = "0";




          if (file_exists($filenameUPd_fot )) {    // de haber una foto le cambia el nombre y la mueve a otro lugar 

            $fot_bandera = "1";

          $imageXXfot = imagecreatefrompng("../0 Croppie/foto_per_update". $nnn1 . ".png");  
                     unlink("../0 Croppie/foto_per_update". $nnn1 . ".png"); 
                     imagejpeg($imageXXfot,"../0 Croppie/foto_per_update". $nnn1 . ".png",85); // comprimer la imagen           
        

            $extU = 'png';
            /* $newfilename = '../zz_fotos_l/logocropx.png'; */
            $newfilenameUPd_fot = "../zz_fotos_personal/".$idPer."_".$num_cedula.".".$extU;

             
            if(rename($filenameUPd_fot,$newfilenameUPd_fot))
      {     

      include("../conectar.php");   

          $query_fotoU = "UPDATE plantilla_personal SET foto_per = '$newfilenameUPd_fot' WHERE id_per = '$idPer' LIMIT 1 ";
          

          if (!mysqli_query($enlace,$query_fotoU))      // si no ha logrado ingresar la foto
                   {

         $errorZ="- Foto personal no actualizada. ";

              unlink($newfilenameUPd_fot); 
                        
              mysqli_close($enlace);

                   }

          else {
          
          $exitoZ = "- Foto personal actualizada. ";
          mysqli_close($enlace);  

            }   

             
      }

            else{

              $errorZ="- Error en foto personal, contactar al Ing. ";
            
             unlink($filenameUPd_fot); 
                         
              mysqli_close($enlace);


            }
          

      

                 }  // cierre de que no hay foto..




clearstatcache();
$filenameUPd_ci = '../0 Croppie/foto_ci_update' . $nnn1 . '.png';





 if (file_exists($filenameUPd_ci )) {    // de haber una ci le cambia el nombre y la mueve a otro lugar 

  $ci_bandera = "1";

          $imageXXci = imagecreatefrompng("../0 Croppie/foto_ci_update". $nnn1 . ".png");  
                     unlink("../0 Croppie/foto_ci_update". $nnn1 . ".png"); 
                     imagejpeg($imageXXci,"../0 Croppie/foto_ci_update". $nnn1 . ".png",85); // comprimer la imagen             
        

            $extCi = 'png';
            /* $newfilename = '../zz_fotos_l/logocropx.png'; */
            $newfilenameUPd_ci = "../zz_fotos_personal_ci/".$idPer."_".$num_cedula.".".$extCi;

             
            if(rename($filenameUPd_ci,$newfilenameUPd_ci))
      {     

      include("../conectar.php");   

          $query_fotoCi = "UPDATE plantilla_personal SET foto_per_ci = '$newfilenameUPd_ci' WHERE id_per = '$idPer' LIMIT 1 ";
          

          if (!mysqli_query($enlace,$query_fotoCi))      // si no ha logrado ingresar la foto
                   {

         $errorZ.="- Documento de identidad no actualizado. ";

                unlink($newfilenameUPd_ci);  
                        
              mysqli_close($enlace);

                   }

          else {
          
          $exitoZ .= "- Documento de identidad actualizado. ";
          mysqli_close($enlace);  

            }   

             
      }

            else{

              $errorZ.="- Error en Doc. de identidad, contactar al Ing. ";
            
              unlink($filenameUPd_ci);  
                         
              mysqli_close($enlace);


            }
          

      

                 }  // cierre de que no hay ci..




              
                if ( $ci_bandera == "0" && $fot_bandera == "0" ) { 

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

    




?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php 


$query = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones, grados
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per    
                     
            and plantilla_contratados.id_division = divisiones.id_division
            and plantilla_contratados.id_plant_grados = grados.id_grado 
            and plantilla_contratados.id_division = '1'
            and plantilla_contratados.status = '1'            

            ORDER BY plantilla_personal.nombre_per ASC ";

$datos_plantilla = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_plantilla = mysqli_fetch_array($datos_plantilla); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_plantilla = mysqli_num_rows($datos_plantilla); 



mysqli_close($enlace);




 ?>  <!-- hace la lista -->

<div class="se-pre-con"></div>



<div class="content-wrapper">
  <div class="container-fluid">

    <div class="form-row">


              <div class="col-md-3 col-lg-3 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i><b><?php echo $ttitulo ?>:</b> </i></div> 

          </div> 


          <div class="col-md-9 col-lg-9 mb-2">
          

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





  <div class="card mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-sm table-hover" id="dataTable" width="100%" cellspacing="0"  >
             
              <thead>
                <tr>
                  
                  <th>Nombres:</th>                  
                  <th>Cedula:</th>
                  <th><i class="fas fa-cog"></i></th>

                  <th>Dicta_clases_a:</th>
                  <th>Foto:</th>
                  <th><i class="fas fa-cog"></i></th>
                  <th>Email y Telfs:</th>
                  
                  <th>Área_1:</th>                  
                  <th>Área_2</th>
                  <th>Área_3</th>
                 <th>Opciones:</th>
                  
                </tr>
              </thead>
                          
              
              <tbody>

                <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->

                <tr>


                   <td class="align-middle" align="center"><?php echo $row_datos_plantilla['nombre_per']; ?>, <br>
                                                            <?php    echo " " .$row_datos_plantilla['apellido_per'];

                  $id_contratox = $row_datos_plantilla['id_contrato'];  $id_perx = $row_datos_plantilla['id_per']; ?></td>



                  <td class="align-middle" align="center"><?php echo $row_datos_plantilla['ci_per']; ?> <br>
                   <img id="myImg" src="<?php echo $row_datos_plantilla['foto_per_ci']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio3.jpg';" width="105px" />  </td>



                   <td class="align-middle" align="center">                           

                    <div class="upload-btn-wrapper">

          <div data-toggle="tooltip" data-placement="top" title="Actualizar Doc. Id." >
                <button class="btn btn-outline-info btn-sm" ><i class="fas fa-upload"></i></button>

                <input class="center-block punterodd" type="file" accept="image/*"
                   name="upload_image_doc<?php echo $row_datos_plantilla['id_per']; ?>" id="upload_image_doc<?php echo $row_datos_plantilla['id_per']; ?>"
                   onchange="return fileValidation_doc<?php echo $row_datos_plantilla['id_per']; ?>()" /> 
          </div>
                  </div>

                 
<?php include ("plantilla_personal_00_del_ci.php"); ?> 


                </td>


<?php include("plantilla_personal_00_upd_ci.php");   ?>



                  <td class="align-middle" align="center"><?php echo $row_datos_plantilla['nombre_grados']; ?> </td>



                  <td class="align-middle" align="center">
                  <img id="myImg" src="<?php echo $row_datos_plantilla['foto_per']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/00vacio.jpg';" width="80px" />  </td>

                   <td class="align-middle" align="center">                           

                    <div class="upload-btn-wrapper">

          <div data-toggle="tooltip" data-placement="top" title="Actualizar foto." >
                <button class="btn btn-outline-info btn-sm" ><i class="fas fa-upload"></i></button>

                <input class="center-block punterodd" type="file" accept="image/*"
                   name="upload_image<?php echo $row_datos_plantilla['id_per']; ?>" id="upload_image<?php echo $row_datos_plantilla['id_per']; ?>"
                   onchange="return fileValidation<?php echo $row_datos_plantilla['id_per']; ?>()" /> 
          </div>
                  </div>

                 

                  <?php include ("plantilla_personal_00_del_fot.php"); ?> 


                </td>




<?php include("plantilla_personal_00_upd_for.php");   ?>


                  
                  <td class="align-middle" align="center"> <?php echo $row_datos_plantilla['email_per']; ?> <br><br>

                                                          <?php echo $row_datos_plantilla['celular_per']; ?><br>

                                                        <?php   if (!$row_datos_plantilla['telefono_per'] == "") {       
                                                            echo   $row_datos_plantilla['telefono_per'];
                                                          }


                                                           ?> </td>  

                  

             
                  <?php




 include("../conectar.php");

$queryH = "SELECT * FROM areas_all, plantilla_areas
                        
          WHERE  areas_all.id_area = plantilla_areas.id_area
          and    areas_all.id_contrato = '$id_contratox'
          

            ";

$datos_plantillaH = mysqli_query($enlace, $queryH) or die(mysqli_error());

$row_datos_plantillaH = mysqli_fetch_array($datos_plantillaH); 


mysqli_close($enlace); 


                  do  {   ?>    <!-- va generarme tantas td como cargos tenga en la DB maximo son 3 -->


                  <td class="align-middle" align="center"><?php echo $row_datos_plantillaH['nombre_area']; ?> </td>
                  
                  

                  <?php }    while ($row_datos_plantillaH = mysqli_fetch_assoc($datos_plantillaH));  ?> 
                  


<td class="align-middle" align="center">


 

  

<div class="form-row">  

   <div class="col-lg-12">
                    <?php if ($row_datos_plantilla['status']=='1') { ?>
                                          
                   
                    <span data-toggle="tooltip" data-placement="top" title="Desincorporar Personal"> 
                    <button type="submit" name="cambio_status" class="btn btn-outline-success btn-sm" data-toggle="modal"
                    data-target="#desactivar<?php echo $row_datos_plantilla['id_per']; ?>" >        <!-- este ultimo identifica cual modal abrir -->
                    <i class="far fa-bell fa-lg"></i></button>
                    </span> 




                    <?php   }?>



                    <?php if ($row_datos_plantilla['status']=='0') { ?>


                    
                    <span data-toggle="tooltip" data-placement="top" title="Incorporar Personal">
                    <button type="submit" name="cambio_status" class="btn btn-outline-secondary btn-sm"
                    data-toggle="modal" data-target="#activar<?php echo $row_datos_plantilla['id_per']; ?>" >       <!-- este ultimo identifica cual modal abrir -->
                      <i class="far fa-bell-slash fa-lg"></i></button>
                    </span> 

                    <?php   }?>
    </div>



 <!--   eliminar

  <div class="col-lg-6" data-toggle="tooltip" data-placement="top"
     title="Eliminar Personal" >
     <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
     data-target="#borrar<?php echo $row_datos_plantilla['id_per']; ?>">
                                                                            

                         <i class="far fa-trash-alt fa-lg"></i>
      </button>
      </div>   -->



 <!--   update fotos  

  <div class="col-lg-6" data-toggle="tooltip" data-placement="top"
     title="Actualizar foto o cedula" >
     <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal"
     data-target="#foto_update<?php echo $row_datos_plantilla['id_per']; ?>" data-backdrop="static" data-keyboard="false">

                         <i class="far fa-id-card fa-lg"></i>
    </button>
  </div>   -->





</div>   <!--   cierre 2do row de opciones  -->




<style type="text/css">

.punterodd{
  display: block;
  cursor: pointer;
}

</style>
 








<!-- ini modal desactivar --> 
<div class="modal fade" id="desactivar<?php echo $row_datos_plantilla['id_per']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-secondary" id="exampleModalLabel">
        <i class="far fa-bell-slash fa-lg"></i> &nbsp;Alerta!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">

<div class="form-row">
<div class="input-group col-lg-12 mb-2">
<b>" 
<?php
$fecha_formateada = date('d-m-Y', strtotime($row_datos_plantilla['contratado_desde']));
echo $row_datos_plantilla['nombre_per'];?>, <?php echo $row_datos_plantilla['apellido_per'] ;?>
 "&nbsp;
</b>
labora en el plantel desde el
 <?php
 echo $fecha_formateada;
 ?>.
 </div>
</div>

<div class="form-row">
<div class="input-group col-md-6 mt-2 mb-1 text-muted ">
 <b>Indicar fecha desincorporación:</b>
</div>
</div>


<div class="form-row">
<div class="input-group col-md-4 mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-minus fa-lg"></i></span>  
                  </div>
<input type="date" class="form-control importantex" id="desactivar_date" name="desactivar_date" aria-label="desactivar_date" aria-describedby="basic-addon1" required>

</div>
</div>


<div class="form-row">
<div class="input-group col-md-8 mt-2 mb-1 text-muted ">
 <b>Agregar nota relacionada con la desincorporación:</b>
</div>
</div>




<?php


include("../conectar.php");

        $queryquien = "SELECT * FROM quien_y_cuando, usuarios
                        
          WHERE quien_y_cuando.id_quien = usuarios.id          
          and  id_per ='$id_perx'
          
            ";

$datos_plantillaquien = mysqli_query($enlace, $queryquien) or die(mysqli_error());

$row_datos_plantillaquien = mysqli_fetch_array($datos_plantillaquien); 

mysqli_close($enlace);


$fecha_form_ing = date('d-m-Y', strtotime($row_datos_plantillaquien['cuando']));
?>

</b>




<div class="form-row ">
<div class="col-md-12">
<textarea class="form-control" id="nota_text" name="nota_text" rows="2" required></textarea>
</div>
</div> <!-- cierre row  de nota -->


<div class="form-row mt-4">
<div class="input-group col-lg-12 mb-2">

<small class="text-muted">

Ingresado en el sistema por primera vez el
 <?php
 echo $fecha_form_ing;
 ?> por el 

  <?php
 echo $row_datos_plantillaquien['cargo'];
 ?>:


<b>
 <?php
 echo $row_datos_plantillaquien['nombres'];?>.
</b>

</small>

</div>
</div>



</div> <!-- cierre modal body -->
      <div class="modal-footer"> 

    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

<input name="desactivar_status" type="hidden" value="0">

    <button type="submit" name="desactivar_personal" class="btn btn-secondary"
    value="<?php echo $row_datos_plantilla['id_contrato']; ?>" > Desincorporar</button>

      </div>
      </form>

    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 



<!-- 
<div class="modal fade" id="activar<?php echo $row_datos_plantilla['id_per']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">
        <i class="far fa-bell fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">

<div class="form-row">
<div class="input-group col-lg-12 mb-1">
  <?php
$fecha_formateada1 = date('d-m-Y', strtotime($row_datos_plantilla['contratado_desde']));
$fecha_formateada = date('d-m-Y', strtotime($row_datos_plantilla['fuera_desde']));
  ?>
<b>"  
<?php
echo $row_datos_plantilla['nombre_per'];?>, <?php echo $row_datos_plantilla['apellido_per'] ;?> 
"&nbsp; </b> Se registro en el plantel el
 <?php
 echo $fecha_formateada1;
 ?>,
</div>
</div>

<div class="form-row">
<div class="input-group col-lg-12 mb-2">
 y fue desincorporado de la plantilla el
 <?php
 echo $fecha_formateada;
 ?>. 
</div>
</div>

<div class="form-row">
<div class="input-group col-md-6 mt-2 mb-1 text-success ">
 <b>Indicar nueva fecha de reincorporación:</b>
</div>
</div>

<div class="form-row">
<div class="input-group col-md-4 mb-1">

                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-plus fa-lg"></i></span>  
                  </div>
<input type="date" class="form-control importantex" id="activar_date" name="activar_date"
aria-label="activar_date" aria-describedby="basic-addon1" value="<?php echo $row_datos_plantilla['contratado_desde'] ;?>">

</div>
</div>

<div class="form-row">
<div class="input-group col-md-6 mb-3">
<small class="form-text text-success">Puede mantener la fecha anterior de registro.</small>
</div>
</div>


<div class="form-row">
<div class="input-group col-md-8 mt-2 mb-1 text-muted ">
 <b>Razón por la cual se desincorporo anteriormente:</b>
</div>
</div>

<div class="form-row mb-3">

<div class="col-md-12">

<div class="input-group col-md-12 desincorporadopor">
<?php
echo $row_datos_plantilla['nota'];
 ?>.  
</div>

</div>

</div>





<div class="form-row mt-1">
<div class="input-group col-lg-12 mb-2">

<small class="text-muted">

Ingresado en el sistema por primera vez el
 <?php
 echo $fecha_form_ing;
 ?> por el 

  <?php
 echo $row_datos_plantillaquien['cargo'];
 ?>:


<b>
 <?php
 echo $row_datos_plantillaquien['nombres'];?>.
</b>

</small>

</div>
</div>




     
      <div class="modal-footer">  

    <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>

<input name="activar_status" type="hidden" value="1">

    <button type="submit" name="activar_personal" class="btn btn-success"
    value="<?php echo $row_datos_plantilla['id_contrato']; ?>" > Incorporar</button>

      </div>
       </form>

    </div>
  </div>
</div>
 cierre modal de activar --> 







<!--
ini modal eliminar

<div class="modal fade" id="borrar<?php echo $row_datos_plantilla['id_per']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
         <b>" <?php echo $row_datos_plantilla['nombre_per'];?> "</b> quedará fuera del sistema. 
      </div>
      <div class="modal-footer">

  <form method="post">

    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrar_personal" class="btn btn-danger"
    value="<?php echo $row_datos_plantilla['id_direccion']; ?>" > Eliminar</button>

  </form>


      </div>
    </div>
  </div>
</div>

 cierre modal de eliminar 
-->




</div>
    

</td>






                  
                </tr>
                


                 <?php } while ($row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla)); ?>

                
              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->

        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>  -->

        <div class="card-footer text-muted"><b>Info:</b> Puede incorporar, desincorporar, modificar he imprimir datos, así como remover de la plantilla a un contratado.</div> 

  </div> <!-- cierre card -->




 



                           

  </div>   <!-- cierre container fluid -->
</div>  <!-- cierre wrapper -->



<?php include ("Footer.php"); ?>
