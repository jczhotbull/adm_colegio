<?php

include("identificador.php");

error_reporting(0);

$nnn1 = $nnn['ci'];


$el_cicloXX = $_GET['ciclo'];

$tituloJKL = $_GET['tituloJKL'];

$alertin = $_GET['alertin'];
 

include("../conectar.php");

        $queryplantelH = "SELECT size_planilla FROM z_plantel LIMIT 1  
          
            ";

$datos_queryplantelH = mysqli_query($enlace, $queryplantelH) or die(mysqli_error());

$row_datos_queryplantelH = mysqli_fetch_array($datos_queryplantelH); 

$size_de_la_planilla = $row_datos_queryplantelH['size_planilla'];


mysqli_close($enlace);

$la_planilla_es = '';

if ($size_de_la_planilla != 'Full') {
  $la_planilla_es = '_corta';
}


 $alerton ='0';


if(isset($_POST['cancelXX']))
    {

$filenameZZ = '../0 Croppie/foto_estu_update' . $nnn1 . '.png';


if (file_exists($filenameZZ )) { 

unlink($filenameZZ);

  }


}




if(isset($_POST['buscalo']))
    {



if (strlen($_POST['buscar_estud']) <=2 )  // no sea mayor a 40 caracteres
 
    {   

    $xxxsearch = "xxxxxx";

    header( "Location: plantilla_estudiantes_search_reli.php?ciclo=".$el_cicloXX."&tituloJKL=Resultados...&criterio=".$xxxsearch."&alertin=5" ); 

     }


else { 

      $busqueda = $_POST['buscar_estud'];
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




      if ($totalRows_datos_plantilla_bus == '0') {

        $xxxsearch = "xxxxxx";

       header( "Location: plantilla_estudiantes_search_reli.php?ciclo=".$el_cicloXX."&tituloJKL=Resultados...&criterio=".$xxxsearch."&alertin=55" );


      }



      if ($totalRows_datos_plantilla_bus >= '1' and $totalRows_datos_plantilla_bus <= '16') {

        header( "Location: plantilla_estudiantes_search_reli.php?ciclo=".$el_cicloXX."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0" );

      }


      if ($totalRows_datos_plantilla_bus >= '17') {

        $xxxsearch = "xxxxxx";

        header( "Location: plantilla_estudiantes_search_reli.php?ciclo=".$el_cicloXX."&tituloJKL=Resultados...&criterio=".$xxxsearch."&alertin=1" ); 

      }

}

    }  // cierre principal del if




if(isset($_POST['incorporate_a_el']))
    {

$actividad_extra = $_POST['actividad_extra'];

$id_del_est_UU =  $_POST['id_del_est_UU'];


 include("../conectar.php");

$ver_duplicado = "SELECT id_estud FROM extra_catedra WHERE id_area ='$actividad_extra' and id_estud = '$id_del_est_UU' ";
$resultE = mysqli_query($enlace,$ver_duplicado);

if (mysqli_num_rows($resultE)>0)
    {
    $errorZ="- El estudiante ya pertenece a la actividad o lista seleccionada. ";
    mysqli_close($enlace); 
    }


    else {  


      $query_d = "INSERT INTO extra_catedra (id_estud, id_area) 

              VALUES ( '$id_del_est_UU', '$actividad_extra')";


if (!mysqli_query($enlace,$query_d))  // si no logro ingresar la direccion...
      {

      $errorZ.="- &nbsp; Error, No se logro incorporar a la actividad o lista!!! &nbsp ";
     
      mysqli_close($enlace); 
      
      }

else {

$exitoZ.="- &nbsp; Estudiante incorporado a una actividad o lista!!! &nbsp ";
     
      mysqli_close($enlace); 

}



     }


 
    }





if(isset($_POST['cancelTT']))
    {

$filenameTT = '../0 Croppie/foto_repre_update' . $nnn1 . '.png';


if (file_exists($filenameTT )) { 

unlink($filenameTT);

  }


}



if(isset($_POST['cancelMM']))
    {

$filenameMM = '../0 Croppie/foto_ci_repre_update' . $nnn1 . '.png';


if (file_exists($filenameMM )) { 

unlink($filenameMM);

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









 if(isset($_POST['update_logoX_re_']))
        {    



include("../conectar.php");

$queryTTC = "SELECT * FROM reg_representante WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1";

                      $resultTTC = mysqli_query($enlace,$queryTTC);
                      $filaTT=mysqli_fetch_array($resultTTC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$foto_a_borrarTT = $filaTT["foto_repre"];


                      if (!empty( $foto_a_borrarTT )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($foto_a_borrarTT);


$deleteTT = "UPDATE reg_representante SET foto_repre = '' WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1 ";
$resultTTC = mysqli_query($enlace,$deleteTT);
              

             }
             

mysqli_close($enlace); 



$id_repre_KL = $_POST['id_del_repreX'];

$ci_repre_KL = $_POST['ci_del_repreX'];

clearstatcache();
$filenameUPd_fot_REP = '../0 Croppie/foto_repre_update' . $nnn1 . '.png';

$fot_REP_bandera = "0";


          if (file_exists($filenameUPd_fot_REP )) {    // de haber una foto le cambia el nombre y la mueve a otro lugar 

            $fot_REP_bandera = "1";

          $imageXXfot_REP = imagecreatefrompng("../0 Croppie/foto_repre_update". $nnn1 . ".png");  
                           unlink("../0 Croppie/foto_repre_update". $nnn1 . ".png"); 
                           imagejpeg($imageXXfot_REP,"../0 Croppie/foto_repre_update". $nnn1 . ".png",85); // comprimer la imagen           
        

            $extU = 'png';
            /* $newfilename = '../zz_fotos_l/logocropx.png'; */
            $newfilenameUPd_fot_REP = "../zz_fotos_repre/".$id_repre_KL."_".$ci_repre_KL.".".$extU;

             
            if(rename($filenameUPd_fot_REP,$newfilenameUPd_fot_REP))
      {     

      include("../conectar.php");         

          $query_fotoU_REP = "UPDATE reg_representante SET foto_repre = '$newfilenameUPd_fot_REP' WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1 ";
          

          if (!mysqli_query($enlace,$query_fotoU_REP))      // si no ha logrado ingresar la foto
                   {

         $errorZ="- Foto del representante no actualizada. ";

              unlink($newfilenameUPd_fot_REP); 
                        
              mysqli_close($enlace);

                   }

          else {
          
          $exitoZ = "- Foto del representante actualizada. ";
          mysqli_close($enlace);  

            }   

             
      }

            else{

              $errorZ="- Error en la foto del representante, contactar al Ing. ";
            
             unlink($filenameUPd_fot_REP); 
                         
              mysqli_close($enlace);


            }
          

      

                 }  // cierre de que no hay foto..



              
                if ( $fot_REP_bandera == "0" ) { 

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









 if(isset($_POST['update_logoX_doc']))
        {   



include("../conectar.php");

$queryRRC = "SELECT * FROM reg_representante WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1";

                      $resultRRC = mysqli_query($enlace,$queryRRC);
                      $filaRR=mysqli_fetch_array($resultRRC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$foto_a_borrarRR = $filaRR["foto_ci_repre"];


                      if (!empty( $foto_a_borrarRR )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($foto_a_borrarRR);


$deleteRR = "UPDATE reg_representante SET foto_ci_repre = '' WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1 ";
$resultRRC = mysqli_query($enlace,$deleteRR);

              

             }

            

mysqli_close($enlace);  

$id_repre_KL = $_POST['id_del_repreX'];

$ci_repre_KL = $_POST['ci_del_repreX'];

clearstatcache();
$filenameUPd_ci_REP = '../0 Croppie/foto_ci_repre_update' . $nnn1 . '.png';

$fot_ci_REP_bandera = "0";


          if (file_exists($filenameUPd_ci_REP )) {    // de haber una foto le cambia el nombre y la mueve a otro lugar 

            $fot_ci_REP_bandera = "1";

          $imageXXfot_ci_REP = imagecreatefrompng("../0 Croppie/foto_ci_repre_update". $nnn1 . ".png");  
                           unlink("../0 Croppie/foto_ci_repre_update". $nnn1 . ".png"); 
                           imagejpeg($imageXXfot_ci_REP,"../0 Croppie/foto_ci_repre_update". $nnn1 . ".png",85); // comprimer la imagen           
        

            $extU = 'png';
            /* $newfilename = '../zz_fotos_l/logocropx.png'; */
            $newfilenameUPd_fot_ci_REP = "../zz_fotos_repre_ci/".$id_repre_KL."_".$ci_repre_KL.".".$extU;

             
            if(rename($filenameUPd_ci_REP,$newfilenameUPd_fot_ci_REP))
      {     

      include("../conectar.php");         

          $query_fotoU_ci_REP = "UPDATE reg_representante SET foto_ci_repre = '$newfilenameUPd_fot_ci_REP' WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1 ";
          

          if (!mysqli_query($enlace,$query_fotoU_ci_REP))      // si no ha logrado ingresar la foto
                   {

         $errorZ="- Foto del representante no actualizada. ";

              unlink($newfilenameUPd_fot_ci_REP); 
                        
              mysqli_close($enlace);

                   }

          else {
          
          $exitoZ = "- Foto del representante actualizada. ";
          mysqli_close($enlace);  

            }   

             
      }

            else{

              $errorZ="- Error en la foto del representante, contactar al Ing. ";
            
             unlink($filenameUPd_fot_ci_REP); 
                         
              mysqli_close($enlace);


            }
          

      

                 }  // cierre de que no hay foto..



              
                if ( $fot_ci_REP_bandera == "0" ) { 

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







if(isset($_POST['borrarTT']))
    {



include("../conectar.php");

$queryTTC = "SELECT * FROM reg_representante WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1";

                      $resultTTC = mysqli_query($enlace,$queryTTC);
                      $filaTT=mysqli_fetch_array($resultTTC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$foto_a_borrarTT = $filaTT["foto_repre"];


                      if (!empty( $foto_a_borrarTT )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($foto_a_borrarTT);


$deleteTT = "UPDATE reg_representante SET foto_repre = '' WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1 ";
$resultTTC = mysqli_query($enlace,$deleteTT);

               $exitoZ="- Foto del representante borrada. ";

             }


              else {

              $errorZ="- El representante seleccionado no posee foto.";

             }

mysqli_close($enlace); 

 }






if(isset($_POST['borrarRR']))
    {



include("../conectar.php");

$queryRRC = "SELECT * FROM reg_representante WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1";

                      $resultRRC = mysqli_query($enlace,$queryRRC);
                      $filaRR=mysqli_fetch_array($resultRRC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$foto_a_borrarRR = $filaRR["foto_ci_repre"];


                      if (!empty( $foto_a_borrarRR )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($foto_a_borrarRR);


$deleteRR = "UPDATE reg_representante SET foto_ci_repre = '' WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1 ";
$resultRRC = mysqli_query($enlace,$deleteRR);

               $exitoZ="- Foto del documento de Id. del representante borrado. ";

             }


              else {

              $errorZ="- El representante seleccionado no posee foto del documento de Id.";

             }

mysqli_close($enlace); 

 }













// los siguientes permiten eliminar un dato

   if(isset($_POST['borrar_estudiante']))
    {



           // $borrar_id = $_POST['borrar_selecc'];
           // $errorZ = " <p> <b>" . $borrar_id . " </b> </p>"; // me ayudan a saber si se esta agarrando el id correcto...

      include("../conectar.php"); 


      $queryC = "SELECT * FROM reg_estudiantes WHERE id_estud = '$_POST[borrar_estudiante]' LIMIT 1";

                      $resultC = mysqli_query($enlace,$queryC);
                      $fila=mysqli_fetch_array($resultC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id de la direccion que esta en la tabla...



                      $foto_a_borrar = $fila["foto_estu"];

                      if (!empty( $foto_a_borrar )) {   // si hay algo en foto, borra ese archivo
                                                     unlink($foto_a_borrar);
                                                     }




                      $queryD = "DELETE FROM reg_estudiantes WHERE id_estud = '$_POST[borrar_estudiante]' LIMIT 1";

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

                         $exitoZ = "<b>--&nbsp; " . $fila['nombre_estu'] . " &nbsp;--</b> ha sido eliminado.";

                      }           // hasta aqui gracias a borrar la direccion al estar en cascada se lleva el contenido del plantel.
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
                              mysqli_close($enlace);                                          
                          }


    }  






// los siguientes permite cambiar el estado a activo de un registrado y cambiar fecha....

   if(isset($_POST['incorporar_estudiante']))
    {

           // $actvivar_contrato = $_POST['activar_personal'];
           // $errorZ = " <p> <b>" . $actvivar_contrato . " </b> </p>"; // me ayudan a saber si se esta agarrando el contrato correcto...

      include("../conectar.php");     


      $queryAC = "SELECT * FROM reg_estudiantes, quien_y_cuando_estu
                         WHERE  reg_estudiantes.id_estud = '$_POST[incorporar_estudiante]'
                          and  quien_y_cuando_estu.id_estud = '$_POST[incorporar_estudiante]' LIMIT 1 ";
          

                      $resultAC = mysqli_query($enlace,$queryAC);
                      $filaAC=mysqli_fetch_array($resultAC);         // lo anterior me permite tener lo relacionado con el estu
                                                                  
                      $id_filacd_q_yy = $filaAC["id_q_y_c_estu"];



       $sql_ACTes = "UPDATE reg_estudiantes SET retirado_si_o_no = '0'                                        
                                      WHERE id_estud = '$_POST[incorporar_estudiante]' LIMIT 1 ";
            

                      if (!mysqli_query($enlace,$sql_ACTes))      // si no ha logrado actualizar
                         {
                          $errorZ="Error al cambiar estado, contactar al Ing.  ";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }





                      else {  



                          $sql_ACT_next = "UPDATE quien_y_cuando_estu SET fecha_reincorp = '$_POST[activar_date]'
                                        
                                      WHERE id_q_y_c_estu = '$id_filacd_q_yy' LIMIT 1 ";


                      if (!mysqli_query($enlace,$sql_ACT_next))      // si no ha logrado actualizar
                         {
                          $errorZ="Error al guardar los cambios, contactar al Ing.  ";
                          }



                      else { 


        $exitoZ = "El alumno &nbsp; <b>--&nbsp;  " . $filaAC['nombre_estu'] . " &nbsp;--</b> &nbsp; ha sido re-incorporado.";

                      }           // hasta aqui gracias a borrar la direccion al estar en cascada se lleva el contenido del plantel.
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
                              mysqli_close($enlace);                                          
                          }


                                                            
                          }


    }  
















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








 if(isset($_POST['editar_selecc']))
        {


 include("consultas_mod/chequeo_estudiantes_mod_pre_alt.php");   // chequea que lo introducido este bien.




if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }


 else { 


include ("../conectar.php");


 include("plantilla_estudiantes_00_update_pre_alt.php");   // procesa los datos

 } 


}  // cierre de modificar datos del repre y del estudiante









 if(isset($_POST['editar_historial']))
        {



include ("../conectar.php");


    $count=count($_POST["id_reg_estu_actual"]);

    for($i=0;$i<$count;$i++){


    $mod_ciclo = $_POST["mod_ciclo"][$i];

        $mod_grados = $_POST["mod_grados"][$i];

        $mod_repitiente = $_POST["mod_repitiente"][$i];

        $mod_inscrip = $_POST["mod_inscrip"][$i];

        $mod_edades = $_POST["mod_edades"][$i];

        $mod_t_camisa = $_POST["mod_t_camisa"][$i];

        $mod_t_pantalon = $_POST["mod_t_pantalon"][$i];

        $mod_t_zapato = $_POST["mod_t_zapato"][$i];

        $mod_pesos = $_POST["mod_pesos"][$i];

        $mod_alturas = $_POST["mod_alturas"][$i];


        $id_reg_estu_actual = $_POST["id_reg_estu_actual"][$i];




    $sql1="UPDATE reg_estu_actual 
                    SET cursa_actualmente = '$mod_ciclo',
                      grado_actual = '$mod_grados',
                      repite_actual = '$mod_repitiente',

                      fecha_inscripcion = '$mod_inscrip',
                      
                      edad_actual = '$mod_edades',
                      t_camisa_act = '$mod_t_camisa',
                      t_pantalon_act = '$mod_t_pantalon',
                      t_zapatos_act = '$mod_t_zapato',

                      peso_act = '$mod_pesos',
                      estatura_act = '$mod_alturas'

                    WHERE id_reg_estu_actual = '$id_reg_estu_actual' ";


    $result1=mysqli_query($enlace, $sql1);

    }



     if ($result1 !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo el historial del estudiante, contactar al Ing. "; 

  
        mysqli_close($enlace);


               }               

            else{
                    

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo el historial del estudiante. ";  

              mysqli_close($enlace);

              }




}  // cierre de modificar el historial del estudiante...







// modificar el status a alumno regular


 if(isset($_POST['cambiarlo_regular']))
        {


include ("../conectar.php");

$id_del_estudiante_esGG = $_POST['cambiarlo_regular'];

$el_nuevo_valor_es = $_POST['status_cambio'];



    $sqlPP1="UPDATE reg_estudiantes
                    SET regular = '$el_nuevo_valor_es'
                  
                    WHERE id_estud = '$id_del_estudiante_esGG' ";

              
            if (!mysqli_query($enlace,$sqlPP1))      // actualiza y si no logra ingresar los datos...
               {
                        $errorZ .="Cambio de estatus no preocesado.";
  
        mysqli_close($enlace);
               }               

            else{
                          $exitoZ .= "Cambio de estatus procesado."; 

        }



mysqli_close($enlace); 



}  // cierre de modificar el status a alumno regular






// modificar el status a nuevo


 if(isset($_POST['cambiarlo_nuevo']))
        {


include ("../conectar.php");

$id_del_estudiante_esGG = $_POST['cambiarlo_nuevo'];

$el_nuevo_valor_es = $_POST['status_cambio'];



    $sqlPP1="UPDATE reg_estudiantes
                    SET regular = '$el_nuevo_valor_es'
                  
                    WHERE id_estud = '$id_del_estudiante_esGG' ";

              
            if (!mysqli_query($enlace,$sqlPP1))      // actualiza y si no logra ingresar los datos...
               {
                        $errorZ .="Cambio de estatus no preocesado.";
  
        mysqli_close($enlace);
               }               

            else{
                          $exitoZ .= "Cambio de estatus procesado."; 

        }



mysqli_close($enlace); 



}  // cierre de modificar a nuevo








if ( $alertin == "1" ) { 

            $errorZ="- Se encontraron muchos resultados, intente refinar la búsqueda.";  

            }


if ( $alertin == "5" ) { 

            $errorZ="- Ingrese más de 3 caracteres, para iniciar la busqueda. ";  

            }




if ( $alertin == "55" ) { 

            $errorZ="- La busqueda arrojo &nbsp;&nbsp;<b>0</b>&nbsp;&nbsp; resultados.";  

            }



?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/lista_estudiantes_search_reli.php"); ?>  <!-- ayuda a hacer el listado -->


<div class="se-pre-con"></div>


<div class="content-wrapper">
  <div class="container-fluid">

    <div class="form-row">  


          <div class="col-md-3 col-lg-3 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i><b>Listado de <?php echo $tituloJKL; ?>:</b> </i></div> 

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


    <div class="form-row">  

<?php

    include("../conectar.php");

$query_per = "SELECT * FROM  temporada_escolar

WHERE  id_periodo_es = '$el_cicloXX'
GROUP by id_periodo_es limit 1";
         

$datos_per = mysqli_query($enlace, $query_per) or die(mysqli_error());

$row_datos_per = mysqli_fetch_array($datos_per); 

mysqli_close($enlace); 

 ?>



          <div class="col-md-12 col-lg-6 mt-2 mb-2">
<form method="POST">

            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text alert-success">Nueva Busqueda Ciclo &nbsp;<b><?php echo $row_datos_per['periodo_escolar']; ?></b></span>
            </div>

            <input type="hidden" id="ciclo_cicloso" name="ciclo_cicloso" value="<?php echo $el_cicloXX; ?>">
            <input type="text" class="form-control" name="buscar_estud" placeholder="Ingrese el o la religión del estudiante." aria-label="">
            <div class="input-group-append">
              <button type="submit" name="buscalo" class="btn btn-success"><i style="color:white;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>


          </div>


 </form>

          </div>
    </div>



<div class="text-muted mt-1">El icono de la impresora " <span style="color: orange;"><i class="fas fa-print fa-lg"></i></span> " indica que el alumno está inscrito y cuando se muestra en color negro
" <span style="color: black;"> <i class="fas fa-print fa-lg"></i></span> " indica pre-inscrito.</div>


<div class="text-muted mt-1">Por intermedio del icono " <span style="color: grey;"><i class="fas fa-id-card"></i></span> " puede imprimir el carnet del alumno, para ello el alumno debe estar inscrito correctamente.</div>



<div class="text-muted mt-1">Al usar el icono " <span style="color: green;"><i class="fas fa-folder-plus fa-lg"></i></span> " incorpora al alumno, al listado de actividades extra catedra.</div>



  <div class="card mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-sm table-hover" id="dataTable" width="100%" cellspacing="0"  >
             
              <thead>
                <tr>
                  
                  <th>Datos:</th>
                 


                  
                  <th><i class="fas fa-camera"></i></th>
                  <th><i class="fas fa-cog"></i></th>
                   <th>Estudiante:</th>
                   <th><i class="fas fa-theater-masks"></i></th>
                   <th>Año/Grado:</th>


<th style="background-color: #EBF0F1;"><i class="fas fa-camera-retro"></i></th>
<th style="background-color: #EBF0F1;"><i class="fas fa-cog"></i></th>
<th style="background-color: #EBF0F1;">Repre.:</th>
                  
                  
                                    
                 
                  


                  
                  <th style="background-color: #EBF0F1;">Doc. Id:</th>
                  
<th style="background-color: #EBF0F1;"> <i class="fas fa-cog"></i></th>
                 

                       <th>Telfs/Email:</th>


                  <th>Opción:</th>
                  
                </tr>
              </thead>
                          
              
              <tbody>

                <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->

                <tr>


<td class="align-middle" align="center"><span class="text-muted">Exp:</span> <br>  <?php echo $row_datos_estudiantes['estu_expediente']; ?>
              <br><span class="text-muted"> Doc. Id:</span><br>  <?php echo $row_datos_estudiantes['ci_estu']; $id_del_estu = $row_datos_estudiantes['id_estud']; ?> </td>
              

                  








                    <td class="align-middle" align="center">







<?php

include("../conectar.php");

  $el_id_es =  $row_datos_estudiantes['id_estud'];   

$directory = "../0000 Fotos Respaldo/*/";
$filecount = 0;
$files = glob($directory.''.$el_id_es.'_*.png');
if ($files){
 $filecount = count($files);
}

mysqli_close($enlace); 


if ($filecount == '0') {
  $el_col_es = 'col-lg-12';
  $div_estado = 'visibility: hidden';
}

else {
  $el_col_es = 'col-lg-6';
  $div_estado = '';
}



 ?>

                
                         <img id="myImg" src="<?php echo $row_datos_estudiantes['foto_estu']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio5.jpg';" width="80px" /> 



<div class="row ml-1" style='<?php echo $div_estado; ?>'> 





<?php

             

                  $dir = '../0000 Fotos Respaldo/*/';
                  $comienzo = '<img id="myImgalt" src=" ';
                  $final = '" width="40px" />';

                  $num = 0;

include("../conectar.php");



foreach(glob($dir.''.$el_id_es.'_*.png') as $file) {

  if ($num < 2) {
    $num++;
    print $comienzo.''.$file.''.$final. "\n";
  }

  else {break;}

   


}

             


mysqli_close($enlace);  

                    ?>

 </div>  







              <!--    <img id="myImg" src="<?php echo $row_datos_estudiantes['foto_estu']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio5.jpg';" width="80px" />  -->











                   </td>


                  <td class="align-middle" align="center">

  <div class="upload-btn-wrapper">

          <div data-toggle="tooltip" data-placement="top" title="Actualizar foto." >
                <button class="btn btn-outline-info btn-sm" ><i class="fas fa-upload"></i></button>

                <input class="center-block punterodd" type="file" accept="image/*"
                   name="upload_image<?php echo $row_datos_estudiantes['id_estud']; ?>" id="upload_image<?php echo $row_datos_estudiantes['id_estud']; ?>"
                   onchange="return fileValidation<?php echo $row_datos_estudiantes['id_estud']; ?>()" /> 
          </div>
                  </div>



  <?php include ("plantilla_estudiantes_00_del_fot.php"); ?> 

                   </td>  

<?php include("plantilla_estudiantes_00_upd_fot.php");   ?>



<?php   

$id_estxx1 = $row_datos_estudiantes['id_estud'];


include("../conectar.php"); 

$reg_estu_HOYx = "SELECT * FROM grados, secciones, edades, reg_estu_actual  
           WHERE  grados.id_grado  = reg_estu_actual.grado_actual             
             and  secciones.id_seccion = reg_estu_actual.id_seccion
             and edades.id_edad = reg_estu_actual.edad_actual
             and id_estud = '$id_estxx1'

             and el_activo = '1'
            ORDER BY id_reg_estu_actual DESC LIMIT 1";   // me selecciona el ultimo es decir el actual en curso

$q_reg_estu_HOYx = mysqli_query($enlace, $reg_estu_HOYx) or die(mysqli_error());

$r_d_reg_estu_HOYx = mysqli_fetch_array($q_reg_estu_HOYx); 





$reg_estu_datax = "SELECT * FROM religiones, tb_medicos, reg_estudiantes  
           WHERE  religiones.id_religion  = reg_estudiantes.id_religion             
             and  tb_medicos.id_medico = reg_estudiantes.id_medico
             
             and reg_estudiantes.id_estud = '$id_estxx1'

            
            GROUP BY id_estud LIMIT 1";   // me selecciona el ultimo es decir el actual en curso

$q_reg_estu_datax = mysqli_query($enlace, $reg_estu_datax) or die(mysqli_error());

$r_d_reg_estu_datax = mysqli_fetch_array($q_reg_estu_datax); 






 $remarcador = "SELECT obs_estud FROM obs_estu
              WHERE  id_estud = '$id_estxx1' limit 1   ";

$query_remarcador = mysqli_query($enlace, $remarcador);

$dato_remarcador = mysqli_fetch_array($query_remarcador); 

$la_obs = $dato_remarcador['obs_estud'];



mysqli_close($enlace);

$bgBB_es = '';
$bg_es = '';

$needle_a = 'a';

if (strpos($la_obs,$needle_a) !== false) {
    $bg_es = '#F9EED4';
}


$needle_e = 'e';

if (strpos($la_obs,$needle_e) !== false) {
    $bg_es = '#F9EED4';
}


$needle_i = 'i';

if (strpos($la_obs,$needle_i) !== false) {
    $bg_es = '#F9EED4';
}


$needle_o = 'o';

if (strpos($la_obs,$needle_o) !== false) {
    $bg_es = '#F9EED4';
}


$needle_u = 'u';

if (strpos($la_obs,$needle_u) !== false) {
    $bg_es = '#F9EED4';
}               



$needle_aa = 'A';

if (strpos($la_obs,$needle_aa) !== false) {
    $bg_es = '#F9EED4';
}


$needle_ee = 'E';

if (strpos($la_obs,$needle_ee) !== false) {
    $bg_es = '#F9EED4';
}


$needle_ii = 'I';

if (strpos($la_obs,$needle_ii) !== false) {
    $bg_es = '#F9EED4';
}


$needle_oo = 'O';

if (strpos($la_obs,$needle_oo) !== false) {
    $bg_es = '#F9EED4';
}


$needle_uu = 'U';

if (strpos($la_obs,$needle_uu) !== false) {
    $bg_es = '#F9EED4';
}

              




                  
?>


    <td class="align-middle" align="center" width="30%" style="background-color: <?php echo $bg_es;?>;">

       <?php  if ( $row_datos_estudiantes['retirado_si_o_no'] == '1') {
      $resultiBB = '<b><span style="color:purple;"> " RETIRADO " <i class="fas fa-hand-paper fa-lg"></i> </span></b>&nbsp;<br>'  ;
      $bgBB_es = '#F8D8CA';
      echo $resultiBB;
    }


    if ( $row_datos_estudiantes['int_si_o_no'] == '1') {
      $simbol = '<span style="color:orange;"><i class="far fa-lightbulb fa-lg"></i></span>&nbsp;&nbsp;'  ;
      echo $simbol;
    }

     echo $row_datos_estudiantes['apellidos_estu'];?>,<br>
                   <?php echo $row_datos_estudiantes['nombre_estu'];  ?>  <br><span style="color: #417FD5;">"Edad: <b><?php echo $r_d_reg_estu_HOYx['nombre_edad']; ?></b> años."   </span> 
                    <span style="color: green;"><i>-</i></span> <span><b><?php echo $r_d_reg_estu_datax['tipo_religion']; ?></b></span><br>
                  <span style="color: red;"><i class="fab fa-medrt"></i></span> <span><?php echo $r_d_reg_estu_datax['nombre_medico']; ?></span><br>
                  <span style="color:#EF1752;"><?php echo $la_obs; ?></span>
                    

<span style="color:red;"><b>
<?php  

$el_es = $row_datos_estudiantes['id_estud'];

include("../conectar.php");

$buscar_todos = "SELECT * FROM citas where id_estud = '$el_es' ORDER BY fecha_cita ASC ";   

$encuentralos_ya = mysqli_query($enlace, $buscar_todos) or die(mysqli_error());   

$creame_una_lista = mysqli_fetch_array($encuentralos_ya);

$totalRows_findx = mysqli_num_rows($encuentralos_ya);    

mysqli_close($enlace);    



if ($totalRows_findx >="1") {
  
echo "Citas por:";

do{   ?>

 <span style="color:#334d00;"><b>

   <?php   echo $creame_una_lista['causa_cita']; ?>, </b></span>

<?php   }  while ( $creame_una_lista = mysqli_fetch_array($encuentralos_ya) ); 

}


  ?>




                 </b> </span>





                </td>


                 <td class="align-middle" align="center">





                 <div data-toggle="tooltip" data-placement="top" title="Agregar en listado extra." >

                <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                 data-target="#agregar_extra<?php echo $row_datos_estudiantes['id_estud']; ?>"> <i class="fas fa-folder-plus fa-lg"></i></button>
        
                </div>



                    <?php if ($row_datos_estudiantes['regular']=='0') { ?>
                   
                    <div class="mt-2" data-toggle="tooltip" data-placement="top" title="Cambiar a estudiante regular"> 
                    <button type="button" name="cambio_regular" class="btn btn-outline-secondary btn-sm" data-toggle="modal"
                    data-target="#es_regular<?php echo $row_datos_estudiantes['id_estud']; ?>" >        <!-- este ultimo identifica cual modal abrir -->
                    <i class="far fa-meh-rolling-eyes fa-lg"></i></button>  
                    </div> 

                    <?php   }?>



                    <?php if ($row_datos_estudiantes['regular']=='1') { ?>
                    
                    <div class="mt-2" data-toggle="tooltip" data-placement="top" title="Cambiar a nuevo ingreso">
                    <button type="button" name="cambio_regular" class="btn btn-outline-primary btn-sm"
                    data-toggle="modal" data-target="#no_regular<?php echo $row_datos_estudiantes['id_estud']; ?>" >       
                      <i class="far fa-kiss-wink-heart fa-lg"></i></button>  
                    </div> 

                    <?php   }?>









<!-- ini modal no regular --> 
<div class="modal fade" id="es_regular<?php echo $row_datos_estudiantes['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="far fa-bell fa-lg"></i> &nbsp;Alerta!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">

<div class="form-row">
<div class="input-group col-lg-12 mb-2 text-info">

<p>El estado de&nbsp;<b><?php echo $row_datos_estudiantes['nombre_estu'] ;?></b>&nbsp; <?php echo $row_datos_estudiantes['apellidos_estu'] ;?>, será cambiado a <b>alumno regular</b>.<p>


</div>
</div>


</div> <!-- cierre modal body -->
      <div class="modal-footer"> 

    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>

<input name="status_cambio" type="hidden" value="1">

    <button type="submit" name="cambiarlo_regular" class="btn btn-primary"
    value="<?php echo $row_datos_estudiantes['id_estud']; ?>" > Cambiar</button>

      </div>
      </form>

    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 












<!-- ini modal es regular -->   
<div class="modal fade" id="no_regular<?php echo $row_datos_estudiantes['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-secondary" id="exampleModalLabel">
        <i class="far fa-bell-slash fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">

<div class="form-row">
<div class="input-group col-lg-12 mb-2 text-secondary">

<p>El estado de&nbsp;<b><?php echo $row_datos_estudiantes['nombre_estu'] ;?></b>&nbsp; <?php echo $row_datos_estudiantes['apellidos_estu'] ;?>, será cambiado a <b>nuevo ingreso</b>.<p>

</div>
</div>




      </div> <!-- cierre modal body -->
      <div class="modal-footer">  

    <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>

<input name="status_cambio" type="hidden" value="0">

    <button type="submit" name="cambiarlo_nuevo" class="btn btn-info"
    value="<?php echo $row_datos_estudiantes['id_estud']; ?>" > Cambiar</button>

      </div>
       </form>

    </div>
  </div>
</div>
<!-- cierre modal de activar --> 












                 </td>       <?php include("plantilla_estudiantes_00_agregar_extra.php");   ?>  


    <td class="align-middle" align="center" style="background-color: <?php echo $bgBB_es;?>;" ><?php echo $r_d_reg_estu_HOYx['nombre_grados']; ?> <br> "<b><?php echo $r_d_reg_estu_HOYx['nombre_seccion']; ?></b> "


<br> <?php

if ($r_d_reg_estu_HOYx['fecha_inscripcion'] != "" ) {


   $fecha_formateadAAA = date('d-m-Y', strtotime($r_d_reg_estu_HOYx['fecha_inscripcion']));

    echo "Inscrito(a) el:<br>";
    echo "<span style=\"color:green;\">";
    echo $fecha_formateadAAA;
    echo "<span>";

 } 

  ?>
     

     </td>            





<?php

include("../conectar.php"); 

$query_YYY = "SELECT * FROM reg_estu_repre_all, reg_representante

         WHERE  reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = '$id_estxx1' ";

$datos_estudiantes_YYY = mysqli_query($enlace, $query_YYY) or die(mysqli_error());

$row_datos_estudiantes_YYY = mysqli_fetch_array($datos_estudiantes_YYY); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

mysqli_close($enlace);

?>





                  <td class="align-middle" align="center" style="background-color: #EBF0F1;">


                  <img id="myImg" src="<?php echo $row_datos_estudiantes_YYY['foto_repre']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio1.jpg';" width="80px" />



                    </td>


 <td class="align-middle" align="center" style="background-color: #EBF0F1;" >


  <div class="upload-btn-wrapper">

          <div data-toggle="tooltip" data-placement="top" title="Actualizar foto." >
                <button class="btn btn-outline-info btn-sm" ><i class="fas fa-upload"></i></button>

                <input class="center-block punterodd" type="file" accept="image/*"
                   name="upload_image_re_<?php echo $row_datos_estudiantes['id_estud']; ?>" id="upload_image_re_<?php echo $row_datos_estudiantes['id_estud']; ?>"
                   onchange="return fileValidation_re_<?php echo $row_datos_estudiantes['id_estud']; ?>()" /> 
          </div>
                  </div>



  <?php include ("plantilla_repres_00_del_fot_alt.php"); ?> 

                   </td>  

<?php include("plantilla_repres_00_upd_fot_alt.php");   ?>





                  <td class="align-middle" align="center" style="background-color: #EBF0F1;"><?php echo $row_datos_estudiantes_YYY['apellido_repre']; ?>,<br>
                   <?php echo $row_datos_estudiantes_YYY['nombre_repre']; ?> </td>


                  

                  




             
                  <td class="align-middle" align="center" style="background-color: #EBF0F1;"><?php echo $row_datos_estudiantes_YYY['ci_repre']; ?> <br>

                  <img id="myImg" src="<?php echo $row_datos_estudiantes_YYY['foto_ci_repre']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio3.jpg';" width="105px" />

                  </td>


 <td class="align-middle" align="center" style="background-color: #EBF0F1;">   



                          <div class="upload-btn-wrapper">

          <div data-toggle="tooltip" data-placement="top" title="Actualizar Doc. Id." >
                <button class="btn btn-outline-info btn-sm"  ><i class="fas fa-upload"></i></button>

                <input class="center-block punterodd" type="file" accept="image/*"
                   name="upload_image_doc<?php echo $row_datos_estudiantes['id_estud']; ?>" id="upload_image_doc<?php echo $row_datos_estudiantes['id_estud']; ?>"
                   onchange="return fileValidation_doc<?php echo $row_datos_estudiantes['id_estud']; ?>()" /> 
          </div>
                  </div>



<?php include ("plantilla_repre_00_del_ci_alt.php"); ?> 



                  </td>

<?php include("plantilla_repre_00_upd_ci_alt.php"); ?>

                  



              




 <td class="align-middle" align="center"><?php echo $row_datos_estudiantes_YYY['celular_repre']; 

                                                        if (!$row_datos_estudiantes_YYY['telefono_repre'] == "") {       
                                                            echo " <br>" .$row_datos_estudiantes_YYY['telefono_repre'];
                                                          } 
                  ?><br><br><?php echo $row_datos_estudiantes_YYY['email_repre']; ?> </td>   

 



                  <td class="align-middle" align="center"> 


                    <div class="form-row mb-2">

                      <!--boton 1 -->
                      <div class="col-lg-6" data-toggle="tooltip" data-placement="top" title="Modificar y/o Inscribir">
  
                      <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                              data-target="#modificar<?php echo $row_datos_estudiantes['id_estud']; ?>">
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <i class="fas fa-edit"></i>
                      </button>

                      </div> 






<!-- ini modal editar -->

<div class="modal fade" id="modificar<?php echo $row_datos_estudiantes['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Editar - Modificar y/o Inscribir!!!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


       <?php include("plantilla_estudiantes_00_mod_pre_alt.php"); ?>


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
        <input type="hidden" id="id_repre"  name="id_repre" value="<?php echo $row_datos_estudiantes_YYY['id_repre']; ?>">

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_selecc" class="btn btn-info" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
              Modificar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->



                      <!--boton 2 -->
                      <div class="col-lg-6" data-toggle="tooltip" data-placement="top" title="Planilla Pre-Inscripción." <?php

                      $ready = $row_datos_estudiantes['inscrito_si_o_no'];

                       if ($ready==1){?>style="display:none"<?php } ?>  >



<form target="_blank" action="zzz_impresiones/imp_planilla_basica<?php echo $la_planilla_es; ?>.php" method="POST">

                          <input type="hidden" id="id_estudxxx" name="id_estudxxx" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

                          <input type="hidden" id="exp_estudxxx" name="exp_estudxxx" value="<?php echo $row_datos_estudiantes['estu_expediente']; ?>">



                           <?php 
             if ($row_datos_estudiantes_YYY['foto_repre'] == "")             //  si no hay foto carga la foto vacia
                          {
                             $fotoZR = "../zz_fotos_p/ZZvacio_repre.jpg ";                             
                          }
                else { $fotoZR = $row_datos_estudiantes_YYY['foto_repre']; }
                          ?>

                          <input type="hidden" id="foto_reprexxx" name="foto_reprexxx" value="<?php echo $fotoZR; ?>">








                           <?php 
             if ($row_datos_estudiantes['foto_estu'] == "")             //  si no hay foto carga la foto vacia
                          {
                             $fotoZ = "../zz_fotos_p/ZZvacio_alum.jpg ";                             
                          }
                else { $fotoZ = $row_datos_estudiantes['foto_estu']; }
                          ?>

                          <input type="hidden" id="foto_estuxxx" name="foto_estuxxx" value="<?php echo $fotoZ; ?>">





                           <?php 
             if ($row_datos_estudiantes_YYY['foto_ci_repre'] == "")             //  si no hay foto carga la foto vacia
                          {
                             $fotoZci = "../zz_fotos_p/ZZvacio_bb.jpg ";                             
                          }
                else { $fotoZci = $row_datos_estudiantes_YYY['foto_ci_repre']; }  



$fecha_form_nac = date('d-m-Y', strtotime($row_datos_estudiantes['nacimiento_estu']));


                          ?>

                          <input type="hidden" id="foto_ci_reprexxx" name="foto_ci_reprexxx" value="<?php echo $fotoZci; ?>">



                          <input type="hidden" id="apellidos_estuxxx" name="apellidos_estuxxx" value="<?php echo $row_datos_estudiantes['apellidos_estu']; ?>">
                          <input type="hidden" id="nombres_estuxxx" name="nombres_estuxxx" value="<?php echo $row_datos_estudiantes['nombre_estu']; ?>">

                          <input type="hidden" id="municipio_estxxx" name="municipio_estxxx" value="<?php echo $row_datos_estudiantes['municipio_est']; ?>">

<input type="hidden" id="vive_con_estxxx" name="vive_con_estxxx" value="<?php echo $row_datos_estudiantes['vive_con']; ?>">
<input type="hidden" id="se_traslada_en_estxxx" name="se_traslada_en_estxxx" value="<?php echo $row_datos_estudiantes['se_traslada_en']; ?>">
<input type="hidden" id="enf_padecidas_estxxx" name="enf_padecidas_estxxx" value="<?php echo $row_datos_estudiantes['enf_padecidas']; ?>">
<input type="hidden" id="alergico_a_estxxx" name="alergico_a_estxxx" value="<?php echo $row_datos_estudiantes['alergico_a']; ?>">

                          

                          <input type="hidden" id="nac_estuxxx" name="nac_estuxxx" value="<?php echo $fecha_form_nac; ?>">



                          <input type="hidden" id="lugar_d_nac_estuxxx" name="lugar_d_nac_estuxxx" value="<?php echo $row_datos_estuXX['nombre_ciudad']; ?>">
                          <input type="hidden" id="entidad_estuxxx" name="entidad_estuxxx" value="<?php echo $row_datos_estuXX['nombre_estado']; ?>">



                           <?php 
             if ($row_datos_plantilla_estud['id_sexo'] == "1")            
                          {
                             $sexo_es = "F.";                             
                          }

               if ($row_datos_plantilla_estud['id_sexo'] == "2")            
                          {
                             $sexo_es = "M.";                             
                          } 

                          ?>



                          <input type="hidden" id="sexo_estuxxx" name="sexo_estuxxx" value="<?php echo $sexo_es; ?>">

                          <input type="hidden" id="ci_estuxxx" name="ci_estuxxx" value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">



                        <input type="hidden" id="sangre_estuxxx" name="sangre_estuxxx" value="<?php echo $row_datos_estuXX['tipo_sangre']; ?>">
                        <input type="hidden" id="religion_estuxxx" name="religion_estuxxx" value="<?php echo $row_datos_estuXX['tipo_religion']; ?>">


<input type="hidden" id="ciudad_estuxxx" name="ciudad_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_ciudad']; ?>">

                        <input type="hidden" id="av_estuxxx" name="av_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_av']; ?>">
                        <input type="hidden" id="calle_estuxxx" name="calle_estuxxx" value="<?php echo $row_datos_plantilla_direcc['dir_calle_sector']; ?>">
                        <input type="hidden" id="pq_estuxxx" name="pq_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_parroquia']; ?>">
                        <input type="hidden" id="mun_estuxxx" name="mun_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_municipio']; ?>">


                        <input type="hidden" id="tipo_viv_estuxxx" name="tipo_viv_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_vivienda']; ?>">
                        <input type="hidden" id="nomb_viv_estuxxx" name="nomb_viv_estuxxx" value="<?php echo $row_datos_plantilla_direcc['dir_nombre_vivienda']; ?>">

                        <input type="hidden" id="piso_estuxxx" name="piso_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_piso']; ?>">
                        <input type="hidden" id="numero_estuxxx" name="numero_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_numero']; ?>">

                        <input type="hidden" id="codigoP_estuxxx" name="codigoP_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_codigo']; ?>">



         <?php    

$fecha_formp_nac = date('d-m-Y', strtotime($row_datos_estudiantes_YYY['nacimiento_repre']));




             if ($row_datos_plantilla_repre['id_sexo'] == "1")            
                          {
                             $sexop_es = "F.";                             
                          }

               if ($row_datos_plantilla_repre['id_sexo'] == "2")            
                          {
                             $sexop_es = "M.";                             
                          }                      



                          ?>



                        <input type="hidden" id="apellidos_reprexxx" name="apellidos_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['apellido_repre']; ?>">
                          <input type="hidden" id="nombres_reprexxx" name="nombres_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['nombre_repre']; ?>">

                       <!--   <input type="hidden" id="nac_reprexxx" name="nac_reprexxx" value="<?php echo $fecha_formp_nac; ?>">  -->

                       <input type="hidden" id="email_reprexxx" name="email_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['email_repre']; ?>">

                       <input type="hidden" id="ci_reprexxx" name="ci_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['ci_repre']; ?>">

                       <input type="hidden" id="cel_reprexxx" name="cel_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['celular_repre']; ?>">
                       <input type="hidden" id="tel_reprexxx" name="tel_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['telefono_repre']; ?>">


                        <input type="hidden" id="sexo_reprexxx" name="sexo_reprexxx" value="<?php echo $sexop_es; ?>">
                        <input type="hidden" id="oficio_reprexxx" name="oficio_reprexxx" value="<?php echo $row_datos_plantilla_repre['nombre_profesion']; ?>">
                        <input type="hidden" id="parentesco_reprexxx" name="parentesco_reprexxx" value="<?php echo $row_datos_plantilla_repre['nombre_parentesco']; ?>">




                      <input type="hidden" id="plantel_proc_est" name="plantel_proc_est" value="<?php echo $row_datos_estu_sob['nombre_plantel_pro']; ?>">
                       <input type="hidden" id="lugar_del_p" name="lugar_del_p" value="<?php echo $row_datos_estu_sob['nombre_ciudad']; ?>">

                       <input type="hidden" id="curso_proc_est" name="curso_proc_est" value="<?php echo $row_datos_estu_sob['nombre_grados']; ?>">
                       <input type="hidden" id="ciclo_cursado" name="ciclo_cursado" value="<?php echo $row_datos_estu_sob['periodo_escolar']; ?>">

                       <input type="hidden" id="resp_repite" name="resp_repite" value="<?php echo $row_datos_estu_sob['nombre_respuesta2']; ?>">

                       <input type="hidden" id="obs_estuxxx" name="obs_estuxxx" value="<?php echo $row_datos_plantillaOBS['obs_estud']; ?>">


                       <input type="hidden" id="estado_repre" name="estado_repre" value="<?php echo $row_datos_plantilla_repre['nombre_estado_civil']; ?>">

                       <input type="hidden" id="padece_estuxxx" name="padece_estuxxx" value="<?php echo $row_datos_estuXX['nombre_medico']; ?>">






                        <button type="submit" name="impx" class="btn btn-outline-dark btn-sm"  id="impx">
                        <i class="fas fa-print"></i></button>


                        </form>

                      </div>












<!--boton 2 alterno -->
                      <div class="col-lg-6" data-toggle="tooltip" data-placement="top" title="Planilla Inscripción."   <?php

                      $ready = $row_datos_estudiantes['inscrito_si_o_no'];

                       if ($ready==0){?>style="display:none"<?php } ?>  >


<form target="_blank" action="zzz_impresiones/imp_planilla<?php echo $la_planilla_es; ?>.php" method="POST">

                          <input type="hidden" id="id_estudxxx" name="id_estudxxx" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

                          <input type="hidden" id="exp_estudxxx" name="exp_estudxxx" value="<?php echo $row_datos_estudiantes['estu_expediente']; ?>">



                           <?php 
             if ($row_datos_estudiantes_YYY['foto_repre'] == "")             //  si no hay foto carga la foto vacia
                          {
                             $fotoZR = "../zz_fotos_p/ZZvacio_repre.jpg ";                             
                          }
                else { $fotoZR = $row_datos_estudiantes_YYY['foto_repre']; }
                          ?>

                          <input type="hidden" id="foto_reprexxx" name="foto_reprexxx" value="<?php echo $fotoZR; ?>">




<?php   // esto permite obtener los datos necesarios del representante y simplificar la busqueda

/*

$id_dela_direccion = $row_datos_estudiantes['id_direccion'];

include("../conectar.php");   

$query_direcc = "SELECT * FROM d_ciudades, d_municipio, d_parroquia, d_avenidas, d_codigo, d_vivienda, d_piso, d_numero,  direcciones                      
                        
         WHERE  direcciones.id_ciudad = d_ciudades.id_ciudad
            and direcciones.id_municipio = d_municipio.id_municipio
            and direcciones.id_parroquia = d_parroquia.id_parroquia
            and direcciones.id_avenida = d_avenidas.id_avenida
            and direcciones.id_codigo = d_codigo.id_codigo
            and direcciones.id_vivienda = d_vivienda.id_vivienda
            and direcciones.id_piso = d_piso.id_piso
            and direcciones.id_numero = d_numero.id_numero

            and id_direccion = '$id_dela_direccion' ";

$datos_plantilla_direcc = mysqli_query($enlace, $query_direcc) or die(mysqli_error());

$row_datos_plantilla_direcc = mysqli_fetch_array($datos_plantilla_direcc); 

mysqli_close($enlace);  */


 ?>






                           <?php 
             if ($row_datos_estudiantes['foto_estu'] == "")             //  si no hay foto carga la foto vacia
                          {
                             $fotoZ = "../zz_fotos_p/ZZvacio_alum.jpg ";                             
                          }
                else { $fotoZ = $row_datos_estudiantes['foto_estu']; }
                          ?>

                          <input type="hidden" id="foto_estuxxx" name="foto_estuxxx" value="<?php echo $fotoZ; ?>">





                           <?php 
             if ($row_datos_estudiantes_YYY['foto_ci_repre'] == "")             //  si no hay foto carga la foto vacia
                          {
                             $fotoZci = "../zz_fotos_p/ZZvacio_bb.jpg ";                             
                          }
                else { $fotoZci = $row_datos_estudiantes_YYY['foto_ci_repre']; }  



$fecha_form_nac = date('d-m-Y', strtotime($row_datos_estudiantes['nacimiento_estu']));


                          ?>

                          <input type="hidden" id="foto_ci_reprexxx" name="foto_ci_reprexxx" value="<?php echo $fotoZci; ?>">



                          <input type="hidden" id="apellidos_estuxxx" name="apellidos_estuxxx" value="<?php echo $row_datos_estudiantes['apellidos_estu']; ?>">
                          <input type="hidden" id="nombres_estuxxx" name="nombres_estuxxx" value="<?php echo $row_datos_estudiantes['nombre_estu']; ?>">

                          <input type="hidden" id="municipio_estxxx" name="municipio_estxxx" value="<?php echo $row_datos_estudiantes['municipio_est']; ?>">

<input type="hidden" id="vive_con_estxxx" name="vive_con_estxxx" value="<?php echo $row_datos_estudiantes['vive_con']; ?>">
<input type="hidden" id="se_traslada_en_estxxx" name="se_traslada_en_estxxx" value="<?php echo $row_datos_estudiantes['se_traslada_en']; ?>">
<input type="hidden" id="enf_padecidas_estxxx" name="enf_padecidas_estxxx" value="<?php echo $row_datos_estudiantes['enf_padecidas']; ?>">
<input type="hidden" id="alergico_a_estxxx" name="alergico_a_estxxx" value="<?php echo $row_datos_estudiantes['alergico_a']; ?>">

                          <input type="hidden" id="nac_estuxxx" name="nac_estuxxx" value="<?php echo $fecha_form_nac; ?>">



                          <input type="hidden" id="lugar_d_nac_estuxxx" name="lugar_d_nac_estuxxx" value="<?php echo $row_datos_estuXX['nombre_ciudad']; ?>">
                          <input type="hidden" id="entidad_estuxxx" name="entidad_estuxxx" value="<?php echo $row_datos_estuXX['nombre_estado']; ?>">



                           <?php 
             if ($row_datos_plantilla_estud['id_sexo'] == "1")            
                          {
                             $sexo_es = "F.";                             
                          }

               if ($row_datos_plantilla_estud['id_sexo'] == "2")            
                          {
                             $sexo_es = "M.";                             
                          } 

                          ?>



                          <input type="hidden" id="sexo_estuxxx" name="sexo_estuxxx" value="<?php echo $sexo_es; ?>">

                          <input type="hidden" id="ci_estuxxx" name="ci_estuxxx" value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">



                        <input type="hidden" id="sangre_estuxxx" name="sangre_estuxxx" value="<?php echo $row_datos_estuXX['tipo_sangre']; ?>">
                        <input type="hidden" id="religion_estuxxx" name="religion_estuxxx" value="<?php echo $row_datos_estuXX['tipo_religion']; ?>">


<input type="hidden" id="ciudad_estuxxx" name="ciudad_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_ciudad']; ?>">

                         <input type="hidden" id="av_estuxxx" name="av_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_av']; ?>">
                        <input type="hidden" id="calle_estuxxx" name="calle_estuxxx" value="<?php echo $row_datos_plantilla_direcc['dir_calle_sector']; ?>">
                        <input type="hidden" id="pq_estuxxx" name="pq_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_parroquia']; ?>">
                        <input type="hidden" id="mun_estuxxx" name="mun_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_municipio']; ?>">


                        <input type="hidden" id="tipo_viv_estuxxx" name="tipo_viv_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_vivienda']; ?>">
                        <input type="hidden" id="nomb_viv_estuxxx" name="nomb_viv_estuxxx" value="<?php echo $row_datos_plantilla_direcc['dir_nombre_vivienda']; ?>">

                        <input type="hidden" id="piso_estuxxx" name="piso_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_piso']; ?>">
                        <input type="hidden" id="numero_estuxxx" name="numero_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_numero']; ?>">

                        <input type="hidden" id="codigoP_estuxxx" name="codigoP_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_codigo']; ?>">



         <?php    

$fecha_formp_nac = date('d-m-Y', strtotime($row_datos_estudiantes_YYY['nacimiento_repre']));




             if ($row_datos_plantilla_repre['id_sexo'] == "1")            
                          {
                             $sexop_es = "F.";                             
                          }

               if ($row_datos_plantilla_repre['id_sexo'] == "2")            
                          {
                             $sexop_es = "M.";                             
                          }                      



                          ?>



                        <input type="hidden" id="apellidos_reprexxx" name="apellidos_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['apellido_repre']; ?>">
                          <input type="hidden" id="nombres_reprexxx" name="nombres_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['nombre_repre']; ?>">

                       <!--   <input type="hidden" id="nac_reprexxx" name="nac_reprexxx" value="<?php echo $fecha_formp_nac; ?>">  -->

                       <input type="hidden" id="email_reprexxx" name="email_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['email_repre']; ?>">

                       <input type="hidden" id="ci_reprexxx" name="ci_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['ci_repre']; ?>">

                       <input type="hidden" id="cel_reprexxx" name="cel_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['celular_repre']; ?>">
                       <input type="hidden" id="tel_reprexxx" name="tel_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['telefono_repre']; ?>">


                        <input type="hidden" id="sexo_reprexxx" name="sexo_reprexxx" value="<?php echo $sexop_es; ?>">
                        <input type="hidden" id="oficio_reprexxx" name="oficio_reprexxx" value="<?php echo $row_datos_plantilla_repre['nombre_profesion']; ?>">
                        <input type="hidden" id="parentesco_reprexxx" name="parentesco_reprexxx" value="<?php echo $row_datos_plantilla_repre['nombre_parentesco']; ?>">




                      <input type="hidden" id="plantel_proc_est" name="plantel_proc_est" value="<?php echo $row_datos_estu_sob['nombre_plantel_pro']; ?>">
                       <input type="hidden" id="lugar_del_p" name="lugar_del_p" value="<?php echo $row_datos_estu_sob['nombre_ciudad']; ?>">

                       <input type="hidden" id="curso_proc_est" name="curso_proc_est" value="<?php echo $row_datos_estu_sob['nombre_grados']; ?>">
                       <input type="hidden" id="ciclo_cursado" name="ciclo_cursado" value="<?php echo $row_datos_estu_sob['periodo_escolar']; ?>">

                       <input type="hidden" id="resp_repite" name="resp_repite" value="<?php echo $row_datos_estu_sob['nombre_respuesta2']; ?>">

                       <input type="hidden" id="obs_estuxxx" name="obs_estuxxx" value="<?php echo $row_datos_plantillaOBS['obs_estud']; ?>">


                       <input type="hidden" id="estado_repre" name="estado_repre" value="<?php echo $row_datos_plantilla_repre['nombre_estado_civil']; ?>">

                       <input type="hidden" id="padece_estuxxx" name="padece_estuxxx" value="<?php echo $row_datos_estuXX['nombre_medico']; ?>">






                        <button type="submit" name="impx" class="btn btn-outline-warning btn-sm"  id="impx">
                        <i class="fas fa-print"></i></button>


                        </form>

                      </div>









                    </div>









                    </div>




















                    <div class="form-row"> 

                      <div class="col-lg-6">


                        <?php if ($row_datos_estudiantes['retirado_si_o_no']=='0') { ?>
                   
                    <span data-toggle="tooltip" data-placement="top" title="Retirar Alumno"> 
                    <button type="submit" name="cambio_status" class="btn btn-outline-success btn-sm" data-toggle="modal"
                    data-target="#desactivar<?php echo $row_datos_estudiantes['id_estud']; ?>" >        <!-- este ultimo identifica cual modal abrir -->
                    <i class="far fa-smile"></i></button>
                    </span> 

                    <?php   }?>



                    <?php if ($row_datos_estudiantes['retirado_si_o_no']=='1') { ?>
                    
                    <span data-toggle="tooltip" data-placement="top" title="Incorporar Alumno">
                    <button type="submit" name="cambio_status" class="btn btn-outline-secondary btn-sm"
                    data-toggle="modal" data-target="#activar<?php echo $row_datos_estudiantes['id_estud']; ?>" >       
                      <i class="far fa-meh"></i></button>
                    </span> 

                    <?php   }?>


                      </div>










<!-- ini modal retirar --> 
<div class="modal fade" id="desactivar<?php echo $row_datos_estudiantes['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
El alumno:&nbsp;&nbsp;  <b>" 
<?php

$id_del_reg = $row_datos_estudiantes['id_estud'];

include ("../conectar.php");

$query_quien_y = "SELECT * FROM quien_y_cuando_estu, usuarios                    
         WHERE  quien_y_cuando_estu.id_quien = usuarios.id        
         and  quien_y_cuando_estu.id_estud = '$id_del_reg' 
         LIMIT 1";

$datos_quien_y = mysqli_query($enlace, $query_quien_y) or die(mysqli_error());

$row_datos_quien_y = mysqli_fetch_array($datos_quien_y); 

$totalRows_datos_quien_y = mysqli_num_rows($datos_quien_y); 

mysqli_close($enlace);



$fecha_formateada = date('d-m-Y', strtotime($row_datos_quien_y['cuando_estu']));

echo $row_datos_estudiantes['nombre_estu'];?>, <?php echo $row_datos_estudiantes['apellidos_estu'] ;?>
 "
</b>.
</div>

<div class="input-group col-lg-12"> 
 Fue incorporado al sistema el
 <?php
 echo $fecha_formateada;
 ?>, por el &nbsp;<b><?php echo $row_datos_quien_y['cargo'] ;?></b>&nbsp; <?php echo $row_datos_quien_y['apellidos'] ;?>.
 </div>

</div>

<div class="form-row">
<div class="input-group col-md-12 mt-2 mb-1 text-muted ">
 <b>Indicar fecha de retiro:</b>
</div>
</div>


<div class="form-row">
<div class="input-group col-md-4 mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-minus fa-lg"></i></span>  
                  </div>
<input type="date" class="form-control importantex" id="retiro_date" name="retiro_date" required>

</div>
</div>


<div class="form-row">
<div class="input-group col-md-8 mt-2 mb-1 text-muted ">
 <b>Agregar nota relacionada con el retiro:</b>
</div>
</div>



<div class="form-row ">
<div class="col-md-12">
<textarea maxlength="250" class="form-control" id="nota_text<?php echo $row_datos_estudiantes['id_estud']; ?>" name="nota_text" rows="2" required></textarea>
<span id="chars<?php echo $row_datos_estudiantes['id_estud']; ?>">250</span> caracteres restantes.
</div>
</div> <!-- cierre row  de nota -->


<script type="text/javascript">
  
var maxLength = 250;
$('#nota_text<?php echo $row_datos_estudiantes['id_estud']; ?>').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength-length;
  $('#chars<?php echo $row_datos_estudiantes['id_estud']; ?>').text(length);
});

</script>

<br>

<div class="form-row ">

 <?php

$fecha1="2000-10-10";

 $mensajexx1 = "Nota: Anteriormente el estudiante había sido retirado el: "; 
 $mensajexx2 = "  Y re-incorporado el: "; 
 $puntico =".";

 if ($row_datos_quien_y['fecha_retiro'] > $fecha1 ) {

$fecha_formatxxx = date('d-m-Y', strtotime($row_datos_quien_y['fecha_retiro']));
$fecha_formatyyy = date('d-m-Y', strtotime($row_datos_quien_y['fecha_reincorp']));


   echo $mensajexx1; echo $fecha_formatxxx; echo $puntico; echo $mensajexx2; echo $fecha_formatyyy;
 }



?>.
</div>



</div> <!-- cierre modal body -->
      <div class="modal-footer"> 

    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

<input name="desactivar_status" type="hidden" value="0">

    <button type="submit" name="retirar_alumno" class="btn btn-secondary"
    value="<?php echo $row_datos_estudiantes['id_estud']; ?>" > Retirar</button>

      </div>
      </form>

    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 












<!-- ini modal incorporar -->   
<div class="modal fade" id="activar<?php echo $row_datos_estudiantes['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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


$id_del_reg = $row_datos_estudiantes['id_estud'];

include ("../conectar.php");

$query_quien_y = "SELECT * FROM quien_y_cuando_estu, usuarios                    
         WHERE  quien_y_cuando_estu.id_quien = usuarios.id        
         and  quien_y_cuando_estu.id_estud = '$id_del_reg' 
         LIMIT 1";

$datos_quien_y = mysqli_query($enlace, $query_quien_y) or die(mysqli_error());

$row_datos_quien_y = mysqli_fetch_array($datos_quien_y); 

$totalRows_datos_quien_y = mysqli_num_rows($datos_quien_y); 

mysqli_close($enlace);





$fecha_formateada1 = date('d-m-Y', strtotime($row_datos_quien_y['cuando_estu']));
$fecha_formateada = date('d-m-Y', strtotime($row_datos_quien_y['fecha_retiro']));
  ?>

El estudiante &nbsp;
<b>"  
<?php
echo $row_datos_estudiantes['nombre_estu'];?>, <?php echo $row_datos_estudiantes['apellidos_estu'] ;?> 
"&nbsp; </b>.
</div>

<div class="input-group col-lg-12 mb-1"> 

 Fue incorporado al sistema el
 <?php
 echo $fecha_formateada1;
 ?>, por el &nbsp;<b><?php echo $row_datos_quien_y['cargo'] ;?></b>&nbsp; <?php echo $row_datos_quien_y['apellidos'] ;?>.
</div>



<div class="input-group col-lg-12 mb-2">
 Y fue retirado anteriormente del sistema el
 <?php
 echo $fecha_formateada;
 ?>. 
</div>
</div>

<div class="form-row">
<div class="input-group col-md-6 mt-2 mb-1 text-success ">
 <b>Indicar nueva fecha de re-incorporación:</b>
</div>
</div>

<div class="form-row">
<div class="input-group col-md-4 mb-1">

                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-plus fa-lg"></i></span>  
                  </div>
<input type="date" class="form-control importantex" id="activar_date" name="activar_date"
aria-label="activar_date">

</div>
</div>


<div class="form-row">
<div class="input-group col-md-6 mb-3">
<small class="form-text text-success">Puede usar la fecha anterior de incorporación.</small>
</div>
</div>



<div class="form-row">
<div class="input-group col-md-8 mt-2 mb-1 text-muted ">
 <b>Razones por las cuales se retiró anteriormente:</b>
</div>
</div>

<div class="form-row mb-3">

<div class="col-md-12">

<div class="input-group col-md-12 desincorporadopor">

<?php
echo $row_datos_quien_y['tex_retiro'];
 ?>
   <!-- cierre  nota de desincorporación -->
</div>

</div>

</div>




<br>






      </div> <!-- cierre modal body -->
      <div class="modal-footer">  

    <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>

<input name="activar_status" type="hidden" value="1">

    <button type="submit" name="incorporar_estudiante" class="btn btn-success"
    value="<?php echo $row_datos_estudiantes['id_estud']; ?>" > Re-incorporar</button>

      </div>
       </form>

    </div>
  </div>
</div>
<!-- cierre modal de activar --> 




<!--
                <div class="col-lg-6" data-toggle="tooltip" data-placement="top"  title="Editar Historial" >
                      <button type="button" class="btn btn-outline-dark btn-sm" data-toggle="modal"
                      data-target="#editar_historial<?php echo $row_datos_estudiantes['id_estud']; ?>">
                         <i class="fas fa-list-ol"></i>
                        </button>
                        </div>  -->










<!-- ini modal editar historial -->

<div class="modal fade" id="editar_historial<?php echo $row_datos_estudiantes['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Editar o modificar el historial de: <b> <?php echo $row_datos_estudiantes['apellidos_estu']; ?>,
         <?php echo $row_datos_estudiantes['nombre_estu']; ?> </b> </h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


       <?php include("plantilla_estudiantes_00_hist_pre.php"); ?>


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
        <input type="hidden" id="id_repre"  name="id_repre" value="<?php echo $row_datos_estudiantes['id_repre']; ?>">

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_historial" class="btn btn-info" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
              Modificar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->





<?php if ($row_datos_estudiantes['retirado_si_o_no']=='1') { ?>

<div class="col-lg-6" data-toggle="tooltip" data-placement="top"  title="Eliminar Alumno" >
                      <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                      data-target="#borrar<?php echo $row_datos_estudiantes['id_estud']; ?>">
                         <i class="far fa-frown"></i>
                        </button>


</div>   


                    <?php   }?>



<!-- modal eliminar -->


<div class="modal fade" id="borrar<?php echo $row_datos_estudiantes['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">
        <i class="fas fa-exclamation-triangle fa-lg"></i> &nbsp;Alerta!!!</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        El Alumno <b>" <?php echo $row_datos_estudiantes['nombre_estu'];?>, <?php echo $row_datos_estudiantes['apellidos_estu'];?> "</b> con expediente N°: <?php echo $row_datos_estudiantes['estu_expediente'];?>, quedará fuera del sistema.

<br><br><br>


   <div class="col-md-12">

   <div class="row">
      <p> <b>Nota:</b> Esta acción no se puede deshacer y todos los datos serán eliminados permanentemente.</p>
   </div>
      <div class="row">
      <p> Esta acción no afectara los datos del representante ni a otro miembro del grupo familiar.</p>
   </div>

    </div>


      </div>
      <div class="modal-footer">

  <form method="post">

    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrar_estudiante" class="btn btn-danger"
    value="<?php echo $row_datos_estudiantes['id_estud']; ?>" > Eliminar</button>

  </form>


      </div>
    </div>
  </div>
</div>






<!-- fin modal eliminar  -->







<!--boton impresion de carnet -->   <?php if ($row_datos_estudiantes['retirado_si_o_no']=='0') { ?>

                      <div class="col-lg-6" data-toggle="tooltip" data-placement="top" title="Imprimir Carnet"   <?php

                      $ready = $row_datos_estudiantes['inscrito_si_o_no'];

                       if ($ready==0){?>style="display:none"<?php } ?>  >


                        <form target="_blank" action="zzz_impresiones/imp_carnet.php" method="POST">

                          <input type="hidden" id="id_estudxxx" name="id_estudxxx" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

                          <input type="hidden" id="exp_estudxxx" name="exp_estudxxx" value="<?php echo $row_datos_estudiantes['estu_expediente']; ?>">



                           <?php 
             if ($row_datos_estudiantes_YYY['foto_repre'] == "")             //  si no hay foto carga la foto vacia
                          {
                             $fotoZR = "../zz_fotos_p/ZZvacio_repre.jpg ";                             
                          }
                else { $fotoZR = $row_datos_estudiantes_YYY['foto_repre']; }
                          ?>

                          <input type="hidden" id="foto_reprexxx" name="foto_reprexxx" value="<?php echo $fotoZR; ?>">




<?php   // esto permite obtener los datos necesarios del representante y simplificar la busqueda

/*

$id_dela_direccion = $row_datos_estudiantes['id_direccion'];

include("../conectar.php");   

$query_direcc = "SELECT * FROM d_ciudades, d_municipio, d_parroquia, d_avenidas, d_codigo, d_vivienda, d_piso, d_numero,  direcciones                      
                        
         WHERE  direcciones.id_ciudad = d_ciudades.id_ciudad
            and direcciones.id_municipio = d_municipio.id_municipio
            and direcciones.id_parroquia = d_parroquia.id_parroquia
            and direcciones.id_avenida = d_avenidas.id_avenida
            and direcciones.id_codigo = d_codigo.id_codigo
            and direcciones.id_vivienda = d_vivienda.id_vivienda
            and direcciones.id_piso = d_piso.id_piso
            and direcciones.id_numero = d_numero.id_numero

            and id_direccion = '$id_dela_direccion' ";

$datos_plantilla_direcc = mysqli_query($enlace, $query_direcc) or die(mysqli_error());

$row_datos_plantilla_direcc = mysqli_fetch_array($datos_plantilla_direcc); 

mysqli_close($enlace);  */


 ?>






                           <?php 
             if ($row_datos_estudiantes['foto_estu'] == "")             //  si no hay foto carga la foto vacia
                          {
                             $fotoZ = "../zz_fotos_p/ZZvacio_alum.jpg ";                             
                          }
                else { $fotoZ = $row_datos_estudiantes['foto_estu']; }
                          ?>

                          <input type="hidden" id="foto_estuxxx" name="foto_estuxxx" value="<?php echo $fotoZ; ?>">





                           <?php 
             if ($row_datos_estudiantes_YYY['foto_ci_repre'] == "")             //  si no hay foto carga la foto vacia
                          {
                             $fotoZci = "../zz_fotos_p/ZZvacio_bb.jpg ";                             
                          }
                else { $fotoZci = $row_datos_estudiantes_YYY['foto_ci_repre']; }  



$fecha_form_nac = date('d-m-Y', strtotime($row_datos_estudiantes['nacimiento_estu']));


                          ?>

                          <input type="hidden" id="foto_ci_reprexxx" name="foto_ci_reprexxx" value="<?php echo $fotoZci; ?>">



                          <input type="hidden" id="apellidos_estuxxx" name="apellidos_estuxxx" value="<?php echo $row_datos_estudiantes['apellidos_estu']; ?>">
                          <input type="hidden" id="nombres_estuxxx" name="nombres_estuxxx" value="<?php echo $row_datos_estudiantes['nombre_estu']; ?>">

                          <input type="hidden" id="municipio_estxxx" name="municipio_estxxx" value="<?php echo $row_datos_estudiantes['municipio_est']; ?>">

                          <input type="hidden" id="nac_estuxxx" name="nac_estuxxx" value="<?php echo $fecha_form_nac; ?>">



                          <input type="hidden" id="lugar_d_nac_estuxxx" name="lugar_d_nac_estuxxx" value="<?php echo $row_datos_estuXX['nombre_ciudad']; ?>">
                          <input type="hidden" id="entidad_estuxxx" name="entidad_estuxxx" value="<?php echo $row_datos_estuXX['nombre_estado']; ?>">



                           <?php 
             if ($row_datos_plantilla_estud['id_sexo'] == "1")            
                          {
                             $sexo_es = "F.";                             
                          }

               if ($row_datos_plantilla_estud['id_sexo'] == "2")            
                          {
                             $sexo_es = "M.";                             
                          } 

                          ?>



                          <input type="hidden" id="sexo_estuxxx" name="sexo_estuxxx" value="<?php echo $sexo_es; ?>">

                          <input type="hidden" id="ci_estuxxx" name="ci_estuxxx" value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">



                        <input type="hidden" id="sangre_estuxxx" name="sangre_estuxxx" value="<?php echo $row_datos_estuXX['tipo_sangre']; ?>">
                        <input type="hidden" id="religion_estuxxx" name="religion_estuxxx" value="<?php echo $row_datos_estuXX['tipo_religion']; ?>">




                         <input type="hidden" id="av_estuxxx" name="av_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_av']; ?>">
                        <input type="hidden" id="calle_estuxxx" name="calle_estuxxx" value="<?php echo $row_datos_plantilla_direcc['dir_calle_sector']; ?>">
                        <input type="hidden" id="pq_estuxxx" name="pq_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_parroquia']; ?>">
                        <input type="hidden" id="mun_estuxxx" name="mun_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_municipio']; ?>">


                        <input type="hidden" id="tipo_viv_estuxxx" name="tipo_viv_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_vivienda']; ?>">
                        <input type="hidden" id="nomb_viv_estuxxx" name="nomb_viv_estuxxx" value="<?php echo $row_datos_plantilla_direcc['dir_nombre_vivienda']; ?>">

                        <input type="hidden" id="piso_estuxxx" name="piso_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_piso']; ?>">
                        <input type="hidden" id="numero_estuxxx" name="numero_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_numero']; ?>">

                        <input type="hidden" id="codigoP_estuxxx" name="codigoP_estuxxx" value="<?php echo $row_datos_plantilla_direcc['nombre_codigo']; ?>">



         <?php    

$fecha_formp_nac = date('d-m-Y', strtotime($row_datos_estudiantes_YYY['nacimiento_repre']));




             if ($row_datos_plantilla_repre['id_sexo'] == "1")            
                          {
                             $sexop_es = "F.";                             
                          }

               if ($row_datos_plantilla_repre['id_sexo'] == "2")            
                          {
                             $sexop_es = "M.";                             
                          }                      



                          ?>



                        <input type="hidden" id="apellidos_reprexxx" name="apellidos_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['apellido_repre']; ?>">
                          <input type="hidden" id="nombres_reprexxx" name="nombres_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['nombre_repre']; ?>">

                       <!--   <input type="hidden" id="nac_reprexxx" name="nac_reprexxx" value="<?php echo $fecha_formp_nac; ?>">  -->

                       <input type="hidden" id="email_reprexxx" name="email_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['email_repre']; ?>">

                       <input type="hidden" id="ci_reprexxx" name="ci_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['ci_repre']; ?>">

                       <input type="hidden" id="cel_reprexxx" name="cel_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['celular_repre']; ?>">
                       <input type="hidden" id="tel_reprexxx" name="tel_reprexxx" value="<?php echo $row_datos_estudiantes_YYY['telefono_repre']; ?>">


                        <input type="hidden" id="sexo_reprexxx" name="sexo_reprexxx" value="<?php echo $sexop_es; ?>">
                        <input type="hidden" id="oficio_reprexxx" name="oficio_reprexxx" value="<?php echo $row_datos_plantilla_repre['nombre_profesion']; ?>">
                        <input type="hidden" id="parentesco_reprexxx" name="parentesco_reprexxx" value="<?php echo $row_datos_plantilla_repre['nombre_parentesco']; ?>">




                      <input type="hidden" id="plantel_proc_est" name="plantel_proc_est" value="<?php echo $row_datos_estu_sob['nombre_plantel_pro']; ?>">
                       <input type="hidden" id="lugar_del_p" name="lugar_del_p" value="<?php echo $row_datos_estu_sob['nombre_ciudad']; ?>">

                       <input type="hidden" id="curso_proc_est" name="curso_proc_est" value="<?php echo $row_datos_estu_sob['nombre_grados']; ?>">
                       <input type="hidden" id="ciclo_cursado" name="ciclo_cursado" value="<?php echo $row_datos_estu_sob['periodo_escolar']; ?>">

                       <input type="hidden" id="resp_repite" name="resp_repite" value="<?php echo $row_datos_estu_sob['nombre_respuesta2']; ?>">

                       <input type="hidden" id="obs_estuxxx" name="obs_estuxxx" value="<?php echo $row_datos_plantillaOBS['obs_estud']; ?>">


                       <input type="hidden" id="estado_repre" name="estado_repre" value="<?php echo $row_datos_plantilla_repre['nombre_estado_civil']; ?>">

                       <input type="hidden" id="padece_estuxxx" name="padece_estuxxx" value="<?php echo $row_datos_estuXX['nombre_medico']; ?>">






                        <button type="submit" name="impx" class="btn btn-outline-secondary btn-sm"  id="impx">
                        <i class="fas fa-id-card"></i></button>


                        </form>

                      </div>    <?php   }?>






















<!-- eliminar 

                      <div class="col-lg-6" data-toggle="tooltip" data-placement="top"  title="Eliminar Alumno" >
                      <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                      data-target="#borrar<?php echo $row_datos_estudiantes['id_estud']; ?>">
                         <i class="far fa-frown"></i>
                        </button>
                        </div>   






                      
ini modal eliminar   

<div class="modal fade" id="borrar<?php echo $row_datos_estudiantes['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">
        <i class="fas fa-exclamation-triangle fa-lg"></i> &nbsp;Alerta!!!</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        El Alumno <b>" <?php echo $row_datos_estudiantes['nombre_estu'];?>, <?php echo $row_datos_estudiantes['apellidos_estu'];?> "</b> con expediente N°: <?php echo $row_datos_estudiantes['estu_expediente'];?>, quedará fuera del sistema.

<br><br><br>


   <div class="col-md-12">

   <div class="row">
      <p> <b>Nota:</b> Esta acción no se puede deshacer y todos los datos serán eliminados permanentemente.</p>
   </div>
      <div class="row">
      <p> Esta acción no afectara los datos del representante ni a otro miembro del grupo familiar.</p>
   </div>

    </div>


      </div>
      <div class="modal-footer">

  <form method="post">

    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrar_estudiante" class="btn btn-danger"
    value="<?php echo $row_datos_estudiantes['id_estud']; ?>" > Eliminar</button>

  </form>


      </div>
    </div>
  </div>
</div>

 cierre modal de eliminar 
-->




 <!--   update fotos  

  <div class="col-lg-6" data-toggle="tooltip" data-placement="top"
     title="Actualizar fotos y/o documentos." >
     <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal"
     data-target="#foto_update<?php echo $row_datos_estudiantes['id_estud']; ?>" data-backdrop="static" data-keyboard="false">

                         <i class="far fa-id-card fa-lg"></i>
    </button>
  </div>      -->







                    </div>




                  </td>
                  



                </tr>
                


                 <?php } while ($row_datos_estudiantes = mysqli_fetch_assoc($datos_estudiantes)); ?>

                
              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->

       

        <div class="card-footer text-muted"><b>Info:</b> Puede incorporar, retirar, modificar he imprimir datos, así como retirar de la lista a un estudiante.
        <div class="text-muted">Los apellidos, precedidos del icono&nbsp;&nbsp;<span style="color:orange;"><i class="far fa-lightbulb fa-lg"></i></span>&nbsp;&nbsp;
        son indicativos, de que el alumno ha sido pre-inscrito por su representante.</div></div> 


        

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




























<?php include ("Footer.php"); ?>
