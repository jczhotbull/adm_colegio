<?php

include("identificador.php");

$nnn1 = $nnn['ci'];

include("../conectar.php");

mysqli_close($enlace);  

header('Cache-Control: max-age=900');


if(isset($_POST['cancelXX']))
    {

$filenameZZ = '../0 Croppie/foto_estu_update' . $nnn1 . '.png';


if (file_exists($filenameZZ )) { 

unlink($filenameZZ);

  }


}







 if(isset($_POST['editar_repre']))
        {


 include("consultas_mod/mini_chequeo_repre.php");   // chequea que lo introducido este bien.




if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }

else { 

include ("../conectar.php");


 include("plantillita_repre_update_repre.php");   // procesa los datos

 }


}  // cierre de modificar datos del repre y del estudiante






 if(isset($_POST['limitar_acc']))
        {

 $id_del_repre = $_POST["limitar_acc"]; 
 $resultado = $_POST["status_desact"]; 

include("../conectar.php");


$sql_upd_acceso = "UPDATE reg_representante 
                    SET acceso = '$resultado'

                    WHERE id_repre = '$id_del_repre' ";


                       
            if (!mysqli_query($enlace,$sql_upd_acceso))      // actualiza y si no logra ingresar los datos...
               {
                        $errorZ .="Acceso No Actualizado.";
  
        mysqli_close($enlace);
               }               

            else{
                          $exitoZ .= "Acceso Restringido."; 

        }



mysqli_close($enlace); 



}  // cierre de modificar datos del repre para limitarlo




 if(isset($_POST['validad_acceso']))
        {



$id_del_repre = $_POST["validad_acceso"]; 
 $resultado = $_POST["status_acc"]; 

include("../conectar.php");


$sql_upd_acceso = "UPDATE reg_representante 
                    SET acceso = '$resultado'

                    WHERE id_repre = '$id_del_repre' ";


                       
            if (!mysqli_query($enlace,$sql_upd_acceso))      // actualiza y si no logra ingresar los datos...
               {
                        $errorZ .="Acceso No Actualizado.";
  
        mysqli_close($enlace);
               }               

            else{
                          $exitoZ .= "Acceso Permitido."; 

        }



mysqli_close($enlace); 






}  // cierre de modificar datos del repre para permitirle el acceso














 if(isset($_POST['editar_estu']))
        {


 include("consultas_mod/mini_chequeo_estu.php");   // chequea que lo introducido este bien.




if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }

else { 

include ("../conectar.php");


 include("plantillita_estu_update.php");   // procesa los datos

 }


}  // cierre de modificar datos del repre y del estudiante








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


 include("consultas_mod/chequeo_estudiantes_mod.php");   // chequea que lo introducido este bien.




if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }

else { 

include ("../conectar.php");


 include("plantilla_estudiantes_00_update.php");   // procesa los datos

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










if(isset($_POST['almacenar_todo']))// chequea si se ha dado clic
   {



 if ($_POST['tlf_madre'])  
    {
      if(!is_numeric($_POST['tlf_madre']) ) // verifica que sean solo números
      {  $errorZ .= "- Doc de Id. madre invalido, solo colocar números sin espacios. "; }
    }


        if ($_POST['tlf_padre'])  
    {
      if(!is_numeric($_POST['tlf_padre']) ) // verifica que sean solo números
      {  $errorZ .= "- Doc de Id. padre invalido, solo colocar números sin espacios. "; }
    }





     if ($_POST['cedula_madre'])  
    {
      if(!is_numeric($_POST['cedula_madre']) ) // verifica que sean solo números
      {  $errorZ .= "- Doc de Id. madre invalido, solo colocar números sin espacios. "; }
    }


        if ($_POST['cedula_padre'])  
    {
      if(!is_numeric($_POST['cedula_padre']) ) // verifica que sean solo números
      {  $errorZ .= "- Doc de Id. padre invalido, solo colocar números sin espacios. "; }
    }




     if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                      {
                         $errorZ = "<p> Error: <br> <b>" . $errorZ. " </b> </p>";           
                      }




      else {





 $dicho_id_estud = $_POST['id_del_estudiante'];

 $dicho_id_repre = $_POST['id_del_reprezz'];

  $dicho_id_madre = $_POST['id_del_registro_madre'];

  $fuera_pais_madre = $_POST['fuera_pais_madre'];

  $vive_la_madre = $_POST['vive_madre'];
  $nac_la_madre = $_POST['nac_madre'];
  $ex_la_madre = $_POST['ex_madre'];
  $rel_la_madre = $_POST['religion_madre'];
  $civil_la_madre = $_POST['civil_madre'];
  $prof_la_madre = $_POST['profesion_madre'];
  $vive_en_la_madre = $_POST['vive_en_madre'];
  $muni_la_madre = $_POST['municipio_madre'];
  $parro_la_madre = $_POST['paroquia_madre'];




  $dicho_id_padre = $_POST['id_del_registro_padre'];

  $fuera_pais_padre = $_POST['fuera_pais_padre'];

  $vive_el_padre = $_POST['vive_padre'];
  $nac_el_padre = $_POST['nac_padre'];
  $ex_el_padre = $_POST['ex_padre'];
  $rel_el_padre = $_POST['religion_padre'];
  $civil_el_padre = $_POST['civil_padre'];
  $prof_el_padre = $_POST['profesion_padre'];
  $vive_en_el_padre = $_POST['vive_en_padre'];
  $muni_el_padre = $_POST['municipio_padre'];
  $parro_el_padre = $_POST['paroquia_padre'];


include("../conectar.php");


  $sql_upd_all_madre = "UPDATE reg_madre   SET  nombres_madre = '".mysqli_real_escape_string($enlace,$_POST['nombres_madre'])."'       ,
                                                apellidos_madre = '".mysqli_real_escape_string($enlace,$_POST['apellidos_madre'])."'   ,
                                                id_madre_vive = '$vive_la_madre',

                                                ci_madre = '".mysqli_real_escape_string($enlace,$_POST['cedula_madre'])."'   ,
                                                nac_madre = '$nac_la_madre',
                                                religion_madre = '$rel_la_madre',
                                                civil_madre = ' $civil_la_madre',
                                                id_ciudad_madre = '$vive_en_la_madre',
                                                id_municipio_madre = '$muni_la_madre',
                                                id_parroquia_madre = '$parro_la_madre',

                                                datos_vivienda_madre = '".mysqli_real_escape_string($enlace,$_POST['dirección_madre'])."'   ,
                                                tlf_contacto_madre = '".mysqli_real_escape_string($enlace,$_POST['tlf_madre'])."'   ,
                                                email_madre = '".mysqli_real_escape_string($enlace,$_POST['email_madre'])."'   ,
                                                id_profesion_madre = '$prof_la_madre',
                                                ex_alumno_madre = '$ex_la_madre',
                                                fuera_pais_madre = '$fuera_pais_madre'
                                            
                                               WHERE id_madre = '$dicho_id_madre' ";



                                  if (!mysqli_query($enlace,$sql_upd_all_madre))      // actualiza y si no logra ingresar los datos...
                                       {
                                        
                                        $errorZ .= "&nbsp; <b> - Datos Madre No OK. </b> (Cod. D_b.). ";             
                                        mysqli_close($enlace);

                                       }               

                                    else{

                                      $exitoZ .= "&nbsp; <b> - Datos Madre OK. </b> "; 

                                        


                                        $sql_upd_all_padre = "UPDATE reg_padre   SET  nombres_padre = '".mysqli_real_escape_string($enlace,$_POST['nombres_padre'])."'       ,
                                                apellidos_padre = '".mysqli_real_escape_string($enlace,$_POST['apellidos_padre'])."'   ,
                                                id_padre_vive = '$vive_el_padre',

                                                ci_padre = '".mysqli_real_escape_string($enlace,$_POST['cedula_padre'])."'   ,
                                                nac_padre = '$nac_el_padre',
                                                religion_padre = '$rel_el_padre',
                                                civil_padre = ' $civil_el_padre',
                                                id_ciudad_padre = '$vive_en_el_padre',
                                                id_municipio_padre = '$muni_el_padre',
                                                id_parroquia_padre = '$parro_el_padre',

                                                datos_vivienda_padre = '".mysqli_real_escape_string($enlace,$_POST['dirección_padre'])."'   ,
                                                tlf_contacto_padre = '".mysqli_real_escape_string($enlace,$_POST['tlf_padre'])."'   ,
                                                email_padre = '".mysqli_real_escape_string($enlace,$_POST['email_padre'])."'   ,
                                                id_profesion_padre = '$prof_el_padre',
                                                ex_alumno_padre = '$ex_el_padre',
                                                fuera_pais_padre = '$fuera_pais_padre'
                                            
                                               WHERE id_padre = '$dicho_id_padre' ";



                                  if (!mysqli_query($enlace,$sql_upd_all_padre))      // actualiza y si no logra ingresar los datos...
                                       {
                                        
                                        $errorZ .= "&nbsp; <b> - Datos Padre No OK. </b> (Cod. D_b.). ";             
                                        mysqli_close($enlace);

                                       }               

                                    else{

                                      $exitoZ .= "&nbsp; <b> - Datos Padre OK.</b> "; 


                                      $sql_upd_bandera_extendido = "UPDATE reg_representante   SET  completo_extendida = 1
                                                                    WHERE id_repre = '$dicho_id_repre' ";   
                                      $datos_upd_bandera_extendido = mysqli_query($enlace, $sql_upd_bandera_extendido) or die(mysqli_error());


                                        mysqli_close($enlace);

                                         }


                                         }









      }




}

























/*
$conteoXX = $_GET['conteo'];

$selec = $_GET['selec'];   */

$tituloJKL = $_GET['tituloJKL'];

?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/lista_de_representantes_search.php"); ?>  <!-- ayuda a hacer el listado -->


<div class="se-pre-con"></div>


<div class="content-wrapper">
  <div class="container-fluid">

    <div class="form-row">  


          <div class="col-md-3 col-lg-3 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i><b>Representantes <?php echo $tituloJKL; ?>:</b> </i></div>   

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


<div class="form-row col-md-12 col-lg-12 mt-2 mb-2">

                <div class="text-dark"><b>Atención:</b> La presencia de filas vacías, significa que dicho representante no ha completado correctamente su información.</div> 

</div>


  <div class="card mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

           <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">

            <thead>
                <tr> 
                <th style="display:none;">id</th>                 
                  <th>N° Doc. de Id:</th>
                  <th>Modificar:</th>
                  <th>Foto:</th>

                  <th><i class="fas fa-cog"></i></th>
                  <th>Datos:</th>
                  <th>Doc. de Id:</th>

                  <th><i class="fas fa-cog"></i></th>
                  <th>Telfs-Email-Direcc.:</th>
                  <th>Representados:</th>

                </tr>
            </thead>


            <tbody>

               <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->

                <tr>


                  <?php

                $el_id_esTTT = $row_de_ids['id_repre'];

                include("../conectar.php"); 

                $reg_de_todo = "SELECT * FROM reg_estu_repre_all, reg_representante, reg_estu_actual, reg_estudiantes 

                     WHERE  reg_estu_repre_all.id_repre = reg_representante.id_repre
                     and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud                     
                     and reg_estu_actual.id_estud = reg_estudiantes.id_estud                   
                     
                    and reg_representante.id_repre = '$el_id_esTTT'                     
                     and  reg_estu_actual.el_activo = '1' ";

            $datos_estudiantez = mysqli_query($enlace,  $reg_de_todo) or die(mysqli_error());

            $row_datos_estudiantez = mysqli_fetch_array($datos_estudiantez); 

            // $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

            $totalRows_datos_estudiantez = mysqli_num_rows($datos_estudiantez); 


                mysqli_close($enlace);


                ?>


<td style="display:none;"><?php echo $row_datos_estudiantez['id_repre']; ?> </td> 

                <td class="align-middle" align="center"><?php echo $row_datos_estudiantez['ci_repre']; ?> <br>  

                    <?php if ($row_datos_estudiantez['acceso']=='1') { ?>                   
                   
<div class="text-danger">

<p><b>ACCESO LIMITADO</b></p>

</div>



                    <?php   }?>










                 </td> 

             








                <td class="align-middle" align="center">




    <div class="form-row mb-2">

                      <!--boton 1 -->
                     <div class="col-lg-12" data-toggle="tooltip" data-placement="top" title="Actualizar Datos.">
  
                      <button type="button" class="btn btn-outline-primary " data-toggle="modal"
                              data-target="#modificar<?php echo $row_datos_estudiantez['id_repre']; ?>">
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <i class="fas fa-user-cog"></i>
                      </button>

                      </div> 






<!-- ini modal editar -->

<div class="modal fade" id="modificar<?php echo $row_datos_estudiantez['id_repre']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Editar o Modificar!!!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


      <?php include("plantillita_repre_repre.php"); ?> </div>


       
  <!--      <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_estudiantez['id_estud']; ?>">
        <input type="hidden" id="id_repre"  name="id_repre" value="<?php echo $row_datos_estudiantez['id_repre']; ?>">   -->
        

     </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_repre" class="btn btn-info" value="<?php echo $row_datos_estudiantez['id_repre']; ?>">
              Modificar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->







                    </div>










<!--  *********** -->


 <div class="form-row">     <!--boton 2 -->

                      <div class="col-lg-12">


                      
                   
                    <?php if ($row_datos_estudiantez['acceso']=='0') { ?>
                   
                    <span data-toggle="tooltip" data-placement="top" title="Restringir Acceso On-Line"> 
                    <button type="submit" name="cambio_acceso" class="btn btn-outline-success" data-toggle="modal"
                    data-target="#desactivaracc<?php echo $row_datos_estudiantez['id_repre']; ?>" >        <!-- este ultimo identifica cual modal abrir -->
                    <i class="fas fa-thumbs-up"></i></button>
                    </span> 

                    <?php   }?>



                    <?php if ($row_datos_estudiantez['acceso']=='1') { ?>
                    
                    <span data-toggle="tooltip" data-placement="top" title="Permitir Acceso On-Line">
                    <button type="submit" name="cambio_acceso" class="btn btn-outline-danger"
                    data-toggle="modal" data-target="#activaracc<?php echo $row_datos_estudiantez['id_repre']; ?>" >       
                      <i class="fas fa-thumbs-down"></i></button>
                    </span> 

                    <?php   }?>
                  




                      </div>










<!-- ini modal limitar --> 
<div class="modal fade" id="desactivaracc<?php echo $row_datos_estudiantez['id_repre']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
<div class="input-group col-lg-12 mb-2 text-danger">

<p>El representante &nbsp;<b><?php echo $row_datos_estudiantez['nombre_repre'] ;?></b>&nbsp; <?php echo $row_datos_estudiantez['apellido_repre'] ;?> será limitado.<p>
<p>El representante no podrá ingresar al sistema on-line y no se le permitirá pre-inscribir o inscribir estudiantes.</p>

</div>
</div>


</div> <!-- cierre modal body -->
      <div class="modal-footer"> 

    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

<input name="status_desact" type="hidden" value="1">

    <button type="submit" name="limitar_acc" class="btn btn-secondary"
    value="<?php echo $row_datos_estudiantez['id_repre']; ?>" > Restringir Acceso</button>

      </div>
      </form>

    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 












<!-- ini modal permitir acceso -->   
<div class="modal fade" id="activaracc<?php echo $row_datos_estudiantez['id_repre']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
<div class="input-group col-lg-12 mb-2 text-info">

<p>El representante &nbsp;<b><?php echo $row_datos_estudiantez['nombre_repre'] ;?></b>&nbsp; <?php echo $row_datos_estudiantez['apellido_repre'] ;?> será habilitado.<p>
<p>El representante podrá ingresar al sistema on-line y se le permitirá pre-inscribir o inscribir estudiantes.</p>

</div>
</div>




      </div> <!-- cierre modal body -->
      <div class="modal-footer">  

    <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>

<input name="status_acc" type="hidden" value="0">

    <button type="submit" name="validad_acceso" class="btn btn-success"
    value="<?php echo $row_datos_estudiantez['id_repre']; ?>" > Permitir Acceso</button>

      </div>
       </form>

    </div>
  </div>
</div>
<!-- cierre modal de activar --> 




                    </div>


<!-- *****   -->

    




                 </td>





















                 <td class="align-middle" align="center">

                   <img id="myImg" src="<?php echo $row_datos_estudiantez['foto_repre']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio1.jpg';" width="100px" />





<?php


include("../conectar.php");

$el_doc_repre_es = $row_datos_estudiantez['ci_repre'];

$queryP_detectar = " SELECT * FROM plantilla_contratados, plantilla_personal, plantilla_cargos, cargos_all
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
         and  plantilla_contratados.id_contrato = cargos_all.id_contrato
        and  plantilla_cargos.id_cargo = cargos_all.id_cargo
        and plantilla_contratados.status = 1
        and plantilla_personal.ci_per = '$el_doc_repre_es'
        ORDER BY apellido_per asc limit 1   " ;

$datos_controlP_detectar = mysqli_query($enlace, $queryP_detectar) or die(mysqli_error());

$row_datos_controlP_detectar = mysqli_fetch_assoc($datos_controlP_detectar);

$totalRows_controlP_detectar = mysqli_num_rows($datos_controlP_detectar); 

mysqli_close($enlace);



$frase_previa = '';
$espacio = '   ';
$trabaja_de = '';
$saltarinbb = '';
$icono_giro = '';

if ($totalRows_controlP_detectar >= 1 ) {


$frase_previa = 'Labora en el plantel:';
    
$el_contrato_es = $row_datos_controlP_detectar['id_contrato'];


include("../conectar.php");

$queryH = "SELECT * FROM cargos_all, plantilla_cargos
                        
          WHERE  cargos_all.id_cargo = plantilla_cargos.id_cargo
          and    cargos_all.id_contrato = '$el_contrato_es' order by id_cargos_all asc limit 1
          
            ";

$datos_plantillaH = mysqli_query($enlace, $queryH) or die(mysqli_error());

$row_datos_plantillaH = mysqli_fetch_array($datos_plantillaH); 

$trabaja_de = $row_datos_plantillaH['nombre_cargo'];

$icono_giro = '<i class="fas fa-spinner fa-pulse fa-lg"></i>';
$saltarinbb = '<br>';

mysqli_close($enlace); 


}   ?>



<span style="color:#ED288B;">  <?php echo $frase_previa; ?> </span>
<span style="color:#ED288B;"><b> <?php echo $trabaja_de; echo $espacio; echo $icono_giro; ?>  </b> </span>






                 </td> 




                 <td class="align-middle" align="center">

  <div class="upload-btn-wrapper">

          <div data-toggle="tooltip" data-placement="top" title="Actualizar foto." >
                <button class="btn btn-outline-info btn-sm" ><i class="fas fa-upload"></i></button>

                <input class="center-block punterodd" type="file" accept="image/*"
                   name="upload_image_re_<?php echo $row_datos_estudiantez['id_estud']; ?>" id="upload_image_re_<?php echo $row_datos_estudiantez['id_estud']; ?>"
                   onchange="return fileValidation_re_<?php echo $row_datos_estudiantez['id_estud']; ?>()" /> 
          </div>
                  </div>



  <?php include ("plantilla_repres_00_del_fot_aa.php"); ?> 

                   </td>  

<?php include("plantilla_repres_00_upd_fot_aa.php");   ?>



              <td class="align-middle" align="center"><?php echo $row_datos_estudiantez['nombre_repre']; ?>,<br>
                    <?php echo $row_datos_estudiantez['apellido_repre']; ?>    <br>
                  <span style="color: #417FD5;">" <b><?php echo $row_de_ids['nombre_parentesco']; ?></b> "</span> - 
                  <span style="color: green;"><?php echo $row_de_ids['nombre_profesion']; ?>  </span> <br> <i class="fas fa-key"></i>: <b><?php echo $row_datos_estudiantez['clave_repre']; ?></b> </span>

                  </td> 


                <td class="align-middle" align="center">
                      <img id="myImg" src="<?php echo $row_datos_estudiantez['foto_ci_repre']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio3.jpg';" width="105px" />

                 <br> <br> <?php echo $row_datos_plantilla_repre['nombre_pais']; ?> <br> <span style="color:purple;"><b><?php echo $row_datos_plantilla_repre['nombre_estado_civil']; ?></b>

                   

                </td>






                <td class="align-middle" align="center">

 <div class="upload-btn-wrapper">

          <div data-toggle="tooltip" data-placement="top" title="Actualizar Doc. Id." >
                <button class="btn btn-outline-info btn-sm"  ><i class="fas fa-upload"></i></button>

                <input class="center-block punterodd" type="file" accept="image/*"
                   name="upload_image_doc<?php echo $row_datos_estudiantez['id_estud']; ?>" id="upload_image_doc<?php echo $row_datos_estudiantez['id_estud']; ?>"
                   onchange="return fileValidation_doc<?php echo $row_datos_estudiantez['id_estud']; ?>()" /> 
          </div>
                  </div>



<?php include ("plantilla_repre_00_del_ci_aa.php"); ?> 



                  </td>

<?php include("plantilla_repre_00_upd_ci_aa.php"); ?>






 <td class="align-middle" align="center"><?php echo $row_datos_estudiantez['celular_repre']; 

                                                        if (!$row_datos_estudiantez['telefono_repre'] == "") {       
                                                            echo " <br>" .$row_datos_estudiantez['telefono_repre'];
                                                          } 
                  ?><br><br><?php echo $row_datos_estudiantez['email_repre']; ?> <br>  

<?php

   if ($row_datos_estudiantez['correo_valido'] == 0 ) {
         $el_validoso = 'Email No Confirmado';
         $el_valivali = '0';
       }

       if ($row_datos_estudiantez['correo_valido'] == 1 ) {
         $el_validoso = 'Email Confirmado';
         $el_valivali = '1';
       }


       if ($row_datos_estudiantez['correo_valido'] == 2 ) {
         $el_validoso = 'Email No Valido?';
         $el_valivali = '2';
       }


 if ($row_datos_estudiantez["correo_valido"]=="0") {
        $visto = "<span style='color:orange;' ><b>'Email No Confirmado <i class=\"fas fa-cog fa-spin\"></i>'</b></span>";
      }

      if ($row_datos_estudiantez["correo_valido"]=="1") {
        $visto = "<span style='color:#27408b;' ><b>'Email Confirmado'</b></span>";
      }

      if ($row_datos_estudiantez["correo_valido"]=="2") {
        $visto = "<span style='color:red;' ><b>'Email No Valido? <i class=\"fas fa-cog fa-spin\"></i>'</b></span>";
      }

      echo $visto;
 
 ?>  






                       <br> <span style="color:#1BC150;"><b><?php echo $row_datos_plantilla_direcc['nombre_ciudad']; ?>, <?php echo $row_datos_plantilla_direcc['nombre_municipio']; ?>, <?php echo $row_datos_plantilla_direcc['nombre_parroquia']; ?></b></span><br><b><?php echo $row_datos_plantilla_direcc['nombre_av']; ?>, <?php echo $row_datos_plantilla_direcc['dir_calle_sector']; ?></b> </td>






<?php
          $el_id_esTTT = $row_de_ids['id_repre'];

          include("../conectar.php"); 


$query_YUT = "SELECT * FROM reg_estu_repre_all, secciones, reg_estu_actual, grados, temporada_escolar, reg_estudiantes 

         WHERE  reg_estu_repre_all.id_estu = reg_estudiantes.id_estud

         and  secciones.id_seccion = reg_estu_actual.id_seccion
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  el_activo = '1'
         and temporada_escolar.id_periodo_es = reg_estu_actual.cursa_actualmente
         and reg_estu_repre_all.id_repre = '$el_id_esTTT'
        
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC ";

$datos_estudiantez_YUT = mysqli_query($enlace, $query_YUT) or die(mysqli_error());

$row_datos_estudiantez_YUT = mysqli_fetch_array($datos_estudiantez_YUT); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estudiantez_YUT = mysqli_num_rows($datos_estudiantez_YUT); 

mysqli_close($enlace);


?>






<td>
  

                <table class='table table-borderless align-middle' align="center">

                  <?php do{?>

                    <tr>

                      <td class="align-middle" align="center">
                        
                         <img id="myImg" src="<?php echo $row_datos_estudiantez_YUT['foto_estu']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio5.jpg';" width="55px" /> 


                      </td>

                      <td class="align-middle" align="center"> 

                         <?php  if ($row_datos_estudiantez_YUT['retirado_si_o_no'] == '1') {
      $resultiBB = '<b><span style="color:purple;"> " RETIRADO " <i class="fas fa-hand-paper fa-lg"></i> </span></b>&nbsp;<br>'  ;
      
      echo $resultiBB;
    }   ?>

                    <?php echo $row_datos_estudiantez_YUT['apellidos_estu'];?>, <?php echo $row_datos_estudiantez_YUT['nombre_estu'];  ?><br>
                    <?php echo $row_datos_estudiantez_YUT['nombre_grados'];?> - "<?php echo $row_datos_estudiantez_YUT['nombre_seccion'];?> "<br>
                    <b><a href="plantilla_estudiantes_search_id.php?ciclo=<?php echo $row_datos_estudiantez_YUT['id_periodo_es'];?>&tituloJKL=Resultados&criterio=<?php echo $row_datos_estudiantez_YUT['ci_estu'];?>&alertin=0"><i class="fas fa-link"></i> Doc Id:</a></b>



                     <span style="color: darkgreen;"><?php echo $row_datos_estudiantez_YUT['ci_estu'];  ?>
                      </span> <br> Ciclo:  <b><?php echo $row_datos_estudiantez_YUT['periodo_escolar'];?></b>
                    </td>

<!--    

td removido, buscar bien abajo....

-->

                  <?php } while ($row_datos_estudiantez_YUT = mysqli_fetch_assoc($datos_estudiantez_YUT)); ?>

                  </tr>

                   </table>











</td>


  







                




                </tr>

<?php } while ($row_de_ids = mysqli_fetch_assoc($datos_de_ids)); ?>
               

            </tbody>








          </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->
               

  </div> <!-- cierre card -->



<span class="col-md-12" <?php  if ($totalRows_de_ids != "1" ){?>style="display:none"<?php } ?>  >

<?php do{?>    


<div class="card border-dark mt-2 mb-3"  >
  <div class="card-body">

<span class="text-info" style="font-size: 18px;"><b>-. <?php echo $row_datos_estudiantes['apellidos_estu'];?>,  <?php echo $row_datos_estudiantes['nombre_estu'];?></b>.  </span>
<br><br>



<?php


$id_del_estudiante = $row_datos_estudiantes['id_estud'];


include("../conectar.php");

$query_detallado = "SELECT * FROM reg_madre, respuestas, d_paises, religiones, tb_estado_civil, d_ciudades, d_municipio, d_parroquia, tb_profesiones, respuestas2

    
         WHERE   reg_madre.id_estud = '$id_del_estudiante'
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






<form method="post">

<div class="row">
  <span class="" style="font-size: 18px; color:hotpink;"> <b>Datos de la Madre: </b></span>
</div>

<div class="form-row mt-1">


          <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Vive?:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="vive_madre" name="vive_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['id_madre_vive']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_respuesta']; ?></option>
                              <option disabled></option>




<?php

include("../conectar.php");

$queryvive = "SELECT * FROM respuestas WHERE nombre_respuesta != '.' ORDER BY nombre_respuesta DESC";

      $datos_vive = mysqli_query($enlace, $queryvive) or die(mysqli_error());

      $row_datos_vive = mysqli_fetch_assoc($datos_vive);

mysqli_close($enlace);  

?>


                         
  <?php do{?>                                

<option value="<?php echo $row_datos_vive['id_respuesta']; ?>"><?php echo $row_datos_vive['nombre_respuesta']; ?></option>

                                <?php } while ($row_datos_vive = mysqli_fetch_assoc($datos_vive)); ?> 

     
                              
                        </select>
                 
   </div>





      <div class="input-group input-group-sm col-md-3 mb-2 ">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;Nombres:&nbsp;</i></span>  
      </div>
      <input maxlength="39" type="text" class="form-control" id="nombres_madre" name="nombres_madre" placeholder="" value="<?php echo $row_datos_estudiantes_detallado['nombres_madre']; ?>"
      >
      </div>


       <div class="input-group input-group-sm col-md-3 mb-2 ">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;Apellidos:&nbsp;</i></span>  
      </div>
      <input maxlength="39" type="text" class="form-control" id="apellidos_madre" name="apellidos_madre" placeholder="" value="<?php echo $row_datos_estudiantes_detallado['apellidos_madre']; ?>"
      >
      </div>


      <div class="input-group input-group-sm col-md-2 mb-2 ">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;N° Doc. de Id:&nbsp;</i></span>  
      </div>
      <input maxlength="15" type="text" class="form-control" id="cedula_madre" name="cedula_madre" placeholder=""  value="<?php echo $row_datos_estudiantes_detallado['ci_madre']; ?>"
      >
      </div>



      <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Nacionalidad:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="nac_madre" name="nac_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['nac_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_pais']; ?></option>
                              <option disabled></option>



<?php

include("../conectar.php");

$querypaises = "SELECT * FROM d_paises WHERE nombre_pais != '.' ORDER BY nombre_pais ASC";

      $datos_paises = mysqli_query($enlace, $querypaises) or die(mysqli_error());

      $row_datos_paises = mysqli_fetch_assoc($datos_paises);

mysqli_close($enlace);  

?>


                         
  <?php do{?>                                

<option value="<?php echo $row_datos_paises['id_pais']; ?>"><?php echo $row_datos_paises['nombre_pais']; ?></option>

                                <?php } while ($row_datos_paises = mysqli_fetch_assoc($datos_paises)); ?> 


                              
                        </select>                
          </div>




</div>


<div class="form-row mt-1">  <!-- fila 2 -->


          <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Ex-Alumno?:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="ex_madre" name="ex_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['ex_alumno_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_respuesta2']; ?></option>
                              <option disabled></option>

 

<?php

include("../conectar.php");

$queryex = "SELECT * FROM respuestas2 WHERE nombre_respuesta2 != '.' ORDER BY nombre_respuesta2 DESC";

      $datos_ex = mysqli_query($enlace, $queryex) or die(mysqli_error());

      $row_datos_ex = mysqli_fetch_assoc($datos_ex);

mysqli_close($enlace);  

?>


                         
  <?php do{?>                                

<option value="<?php echo $row_datos_ex['id_respuesta2']; ?>"><?php echo $row_datos_ex['nombre_respuesta2']; ?></option>

                                <?php } while ($row_datos_ex = mysqli_fetch_assoc($datos_ex)); ?> 



                              
                        </select>
                 
        </div>



      <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Religión:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="religion_madre" name="religion_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['religion_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['tipo_religion']; ?></option>
                              <option disabled></option>

    

<?php

include("../conectar.php");

$queryreligion = "SELECT * FROM religiones WHERE tipo_religion != '.' ORDER BY tipo_religion ASC";

      $datos_religion = mysqli_query($enlace, $queryreligion) or die(mysqli_error());

      $row_datos_religion = mysqli_fetch_assoc($datos_religion);

mysqli_close($enlace);  

?>


                         
  <?php do{?>                                

<option value="<?php echo $row_datos_religion['id_religion']; ?>"><?php echo $row_datos_religion['tipo_religion']; ?></option>

                                <?php } while ($row_datos_religion = mysqli_fetch_assoc($datos_religion)); ?> 





                              
                        </select>                
          </div>



              <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>E. Civil:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="civil_madre" name="civil_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['civil_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_estado_civil']; ?></option>
                              <option disabled></option>


<?php

include("../conectar.php");

$querycivil = "SELECT * FROM tb_estado_civil WHERE nombre_estado_civil != '.' ORDER BY nombre_estado_civil ASC";

$datos_civil = mysqli_query($enlace, $querycivil) or die(mysqli_error());

$row_datos_civil = mysqli_fetch_assoc($datos_civil);

mysqli_close($enlace);  

?>


    <?php do{?>                                

<option value="<?php echo $row_datos_civil['id_estado_civil']; ?>"><?php echo $row_datos_civil['nombre_estado_civil']; ?></option>

                                <?php } while ($row_datos_civil = mysqli_fetch_assoc($datos_civil)); ?>                            
                              
                        </select>                
              </div>



              <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Profesión:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="profesion_madre" name="profesion_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['id_profesion_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_profesion']; ?></option>
                              <option disabled></option>



<?php



include("../conectar.php");

$queryprofesion = "SELECT * FROM tb_profesiones WHERE nombre_profesion != '.' ORDER BY nombre_profesion ASC";

$datos_profesion = mysqli_query($enlace, $queryprofesion) or die(mysqli_error());

$row_datos_profesion = mysqli_fetch_assoc($datos_profesion);

mysqli_close($enlace);  

?>






                               <?php do{?>                                

<option value="<?php echo $row_datos_profesion['id_profesion']; ?>"><?php echo $row_datos_profesion['nombre_profesion']; ?></option>

                                <?php } while ($row_datos_profesion = mysqli_fetch_assoc($datos_profesion)); ?> 

                               
                              
                        </select>                
              </div>


                <div class="input-group input-group-sm col-md-2 mb-2 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;Tlf:&nbsp;</i></span>  
                </div>
                <input maxlength="40" type="text" class="form-control" id="tlf_madre" name="tlf_madre" placeholder="" value="<?php echo $row_datos_estudiantes_detallado['tlf_contacto_madre']; ?>">
                </div>


                <div class="input-group input-group-sm col-md-2 mb-2 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-at fa-lg"></i></span>  
                </div>
                <input maxlength="40" type="email" class="form-control" id="email_madre" name="email_madre" placeholder="" value="<?php echo $row_datos_estudiantes_detallado['email_madre']; ?>">
                </div>





</div>        <!-- end  fila 2 -->






<div class="form-row mt-1">  <!-- fila 3 -->


<div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Vive en el páis?</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="fuera_pais_madre" name="fuera_pais_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['fuera_pais_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['fuera_pais_madre']; ?></option>
                              <option disabled></option>

                              <option value="Si">Si</option>
                              <option value="No">No</option>
                              <option value="--">--</option>
                              
                        </select>
                 
        </div>




          <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Ciudad:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="vive_en_madre" name="vive_en_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['id_ciudad_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_ciudad']; ?></option>
                              <option disabled></option>

 

<?php
include("../conectar.php");

$queryciudades = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

    $datos_ciudades = mysqli_query($enlace, $queryciudades) or die(mysqli_error());

    $row_datos_ciudades = mysqli_fetch_assoc($datos_ciudades);

mysqli_close($enlace);  

?>

<?php do{?>                                

<option value="<?php echo $row_datos_ciudades['id_ciudad']; ?>"><?php echo $row_datos_ciudades['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudades = mysqli_fetch_assoc($datos_ciudades)); ?> 

                              
                        </select>
                 
        </div>



      <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Municipio:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="municipio_madre" name="municipio_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['id_municipio_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_municipio']; ?></option>
                              <option disabled></option>

                               
                               <?php
include("../conectar.php");

$querymunicipio = "SELECT * FROM d_municipio WHERE nombre_municipio != '.' ORDER BY nombre_municipio ASC";

$datos_municipio = mysqli_query($enlace, $querymunicipio) or die(mysqli_error());

$row_datos_municipio = mysqli_fetch_assoc($datos_municipio);

mysqli_close($enlace);  

?>



                               <?php do{?>                                

<option value="<?php echo $row_datos_municipio['id_municipio']; ?>"><?php echo $row_datos_municipio['nombre_municipio']; ?></option>

                                <?php } while ($row_datos_municipio = mysqli_fetch_assoc($datos_municipio)); ?> 
                              
                        </select>                
          </div>



              <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Parroquia:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="paroquia_madre" name="paroquia_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['id_parroquia_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_parroquia']; ?></option>
                              <option disabled></option>


 <?php
include("../conectar.php");

    $queryparroquias = "SELECT * FROM d_parroquia WHERE nombre_parroquia != '.' ORDER BY nombre_parroquia ASC";

    $datos_parroquias = mysqli_query($enlace, $queryparroquias) or die(mysqli_error());

    $row_datos_parroquias = mysqli_fetch_assoc($datos_parroquias);

mysqli_close($enlace);  

?>


  <?php do{?>                                

<option value="<?php echo $row_datos_parroquias['id_parroquia']; ?>"><?php echo $row_datos_parroquias['nombre_parroquia']; ?></option>

                                <?php } while ($row_datos_parroquias = mysqli_fetch_assoc($datos_parroquias)); ?> 

                               
                              
                        </select>                
              </div>



                <div class="input-group input-group-sm col-md-4 mb-2 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">&nbsp;<i>Calle -Sector -Urbanización:</i></span>  
                </div>
<input maxlength="89" type="text" class="form-control" id="dirección_madre" name="dirección_madre" placeholder="" value="<?php echo $row_datos_estudiantes_detallado['datos_vivienda_madre']; ?>">
                </div>





</div>        <!-- end  fila 3 -->
















<?php


$id_del_estudiante = $row_datos_estudiantes['id_estud'];


include("../conectar.php");


$query_detalladop = "SELECT * FROM reg_padre, respuestas, d_paises, religiones, tb_estado_civil, d_ciudades, d_municipio, d_parroquia, tb_profesiones, respuestas2

    
         WHERE   reg_padre.id_estud = '$id_del_estudiante'
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









<div class="row mt-3">
  <span class="" style="font-size: 18px; color:#186FDF;"> <b>Datos del Padre: </b></span>
</div>



<div class="form-row mt-1">


    <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Vive?:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="vive_padre" name="vive_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['id_padre_vive']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_respuesta']; ?></option>
                              <option disabled></option>

                


<?php

include("../conectar.php");

$queryvive = "SELECT * FROM respuestas WHERE nombre_respuesta != '.' ORDER BY nombre_respuesta DESC";

      $datos_vive = mysqli_query($enlace, $queryvive) or die(mysqli_error());

      $row_datos_vive = mysqli_fetch_assoc($datos_vive);

mysqli_close($enlace);  

?>


                         
  <?php do{?>                                

<option value="<?php echo $row_datos_vive['id_respuesta']; ?>"><?php echo $row_datos_vive['nombre_respuesta']; ?></option>

                                <?php } while ($row_datos_vive = mysqli_fetch_assoc($datos_vive)); ?> 



                              
                        </select>
                 
   </div>







      <div class="input-group input-group-sm col-md-3 mb-2 ">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;Nombres:&nbsp;</i></span>  
      </div>
      <input maxlength="39" type="text" class="form-control" id="nombres_padre" name="nombres_padre" placeholder="" value="<?php echo $row_datos_estudiantes_detalladop['nombres_padre']; ?>"
      >
      </div>


       <div class="input-group input-group-sm col-md-3 mb-2 ">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;Apellidos:&nbsp;</i></span>  
      </div>
      <input maxlength="39" type="text" class="form-control" id="apellidos_padre" name="apellidos_padre" placeholder="" value="<?php echo $row_datos_estudiantes_detalladop['apellidos_padre']; ?>"
      >
      </div>


       <div class="input-group input-group-sm col-md-2 mb-2 ">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;N° Doc. de Id:&nbsp;</i></span>  
      </div>
      <input maxlength="15" type="text" class="form-control" id="cedula_padre" name="cedula_padre" placeholder="" value="<?php echo $row_datos_estudiantes_detalladop['ci_padre']; ?>"
      >
      </div>



          <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Nacionalidad:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="nac_padre" name="nac_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['nac_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_pais']; ?></option>
                              <option disabled></option>

               
<?php

include("../conectar.php");

$querypaises = "SELECT * FROM d_paises WHERE nombre_pais != '.' ORDER BY nombre_pais ASC";

      $datos_paises = mysqli_query($enlace, $querypaises) or die(mysqli_error());

      $row_datos_paises = mysqli_fetch_assoc($datos_paises);

mysqli_close($enlace);  

?>



  <?php do{?>                                

<option value="<?php echo $row_datos_paises['id_pais']; ?>"><?php echo $row_datos_paises['nombre_pais']; ?></option>

                                <?php } while ($row_datos_paises = mysqli_fetch_assoc($datos_paises)); ?> 


                              
                        </select>                
          </div>

</div>




<div class="form-row mt-1">   <!--  fila 2 -->


          <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Ex-Alumno?:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="ex_padre" name="ex_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['ex_alumno_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_respuesta2']; ?></option>
                              <option disabled></option>

                    

<?php

include("../conectar.php");

$queryex = "SELECT * FROM respuestas2 WHERE nombre_respuesta2 != '.' ORDER BY nombre_respuesta2 DESC";

      $datos_ex = mysqli_query($enlace, $queryex) or die(mysqli_error());

      $row_datos_ex = mysqli_fetch_assoc($datos_ex);

mysqli_close($enlace);  

?>


                         
  <?php do{?>                                

<option value="<?php echo $row_datos_ex['id_respuesta2']; ?>"><?php echo $row_datos_ex['nombre_respuesta2']; ?></option>

                                <?php } while ($row_datos_ex = mysqli_fetch_assoc($datos_ex)); ?> 


                              
                        </select>
                 
        </div>



      <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Religión:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="religion_padre" name="religion_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['religion_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['tipo_religion']; ?></option>
                              <option disabled></option>


<?php

include("../conectar.php");

$queryreligion = "SELECT * FROM religiones WHERE tipo_religion != '.' ORDER BY tipo_religion ASC";

      $datos_religion = mysqli_query($enlace, $queryreligion) or die(mysqli_error());

      $row_datos_religion = mysqli_fetch_assoc($datos_religion);

mysqli_close($enlace);  

?>


                         
  <?php do{?>                                

<option value="<?php echo $row_datos_religion['id_religion']; ?>"><?php echo $row_datos_religion['tipo_religion']; ?></option>

                                <?php } while ($row_datos_religion = mysqli_fetch_assoc($datos_religion)); ?> 
                               
                              
                        </select>                
          </div>



              <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>E. Civil:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="civil_padre" name="civil_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['civil_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_estado_civil']; ?></option>
                              <option disabled></option>

<?php

include("../conectar.php");

$querycivil = "SELECT * FROM tb_estado_civil WHERE nombre_estado_civil != '.' ORDER BY nombre_estado_civil ASC";

$datos_civil = mysqli_query($enlace, $querycivil) or die(mysqli_error());

$row_datos_civil = mysqli_fetch_assoc($datos_civil);

mysqli_close($enlace);  

?>


<?php do{?>                                

<option value="<?php echo $row_datos_civil['id_estado_civil']; ?>"><?php echo $row_datos_civil['nombre_estado_civil']; ?></option>

                                <?php } while ($row_datos_civil = mysqli_fetch_assoc($datos_civil)); ?> 


                              
                        </select>                
              </div>



              <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Profesión:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="profesion_padre" name="profesion_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['id_profesion_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_profesion']; ?></option>
                              <option disabled></option>




<?php



include("../conectar.php");

$queryprofesion = "SELECT * FROM tb_profesiones WHERE nombre_profesion != '.' ORDER BY nombre_profesion ASC";

$datos_profesion = mysqli_query($enlace, $queryprofesion) or die(mysqli_error());

$row_datos_profesion = mysqli_fetch_assoc($datos_profesion);

mysqli_close($enlace);  

?>




                               <?php do{?>                                

<option value="<?php echo $row_datos_profesion['id_profesion']; ?>"><?php echo $row_datos_profesion['nombre_profesion']; ?></option>

                                <?php } while ($row_datos_profesion = mysqli_fetch_assoc($datos_profesion)); ?> 
                               
                              
                        </select>                
              </div>


                <div class="input-group input-group-sm col-md-2 mb-2 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;Tlf:&nbsp;</i></span>  
                </div>
                <input maxlength="40" type="text" class="form-control" id="tlf_padre" name="tlf_padre" placeholder="" value="<?php echo $row_datos_estudiantes_detalladop['tlf_contacto_padre']; ?>">
                </div>


                <div class="input-group input-group-sm col-md-2 mb-2 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-at fa-lg"></i></span>  
                </div>
                <input maxlength="40" type="email" class="form-control" id="email_padre" name="email_padre" placeholder="" value="<?php echo $row_datos_estudiantes_detalladop['email_padre']; ?>">
                </div>

</div>    <!-- end  fila 2 -->







<div class="form-row mt-1">  <!-- fila 3 -->



<div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Vive en el páis?</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="fuera_pais_padre" name="fuera_pais_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['fuera_pais_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['fuera_pais_padre']; ?></option>
                              <option disabled></option>

                              <option value="Si">Si</option>
                              <option value="No">No</option>
                              <option value="--">--</option>
                              
                        </select>
                 
        </div>



          <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Ciudad:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="vive_en_padre" name="vive_en_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['id_ciudad_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_ciudad']; ?></option>
                              <option disabled></option>

                             
<?php
include("../conectar.php");

$queryciudades = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

    $datos_ciudades = mysqli_query($enlace, $queryciudades) or die(mysqli_error());

    $row_datos_ciudades = mysqli_fetch_assoc($datos_ciudades);

mysqli_close($enlace);  

?>

<?php do{?>                                

<option value="<?php echo $row_datos_ciudades['id_ciudad']; ?>"><?php echo $row_datos_ciudades['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudades = mysqli_fetch_assoc($datos_ciudades)); ?> 


                              
                        </select>
                 
        </div>



      <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Municipio:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="municipio_padre" name="municipio_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['id_municipio_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_municipio']; ?></option>
                              <option disabled></option>


<?php
include("../conectar.php");

$querymunicipio = "SELECT * FROM d_municipio WHERE nombre_municipio != '.' ORDER BY nombre_municipio ASC";

$datos_municipio = mysqli_query($enlace, $querymunicipio) or die(mysqli_error());

$row_datos_municipio = mysqli_fetch_assoc($datos_municipio);

mysqli_close($enlace);  

?>



                               <?php do{?>                                

<option value="<?php echo $row_datos_municipio['id_municipio']; ?>"><?php echo $row_datos_municipio['nombre_municipio']; ?></option>

                                <?php } while ($row_datos_municipio = mysqli_fetch_assoc($datos_municipio)); ?> 


                               
                              
                        </select>                
          </div>



              <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Parroquia:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="paroquia_padre" name="paroquia_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['id_parroquia_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_parroquia']; ?></option>
                              <option disabled></option>


 <?php
include("../conectar.php");

    $queryparroquias = "SELECT * FROM d_parroquia WHERE nombre_parroquia != '.' ORDER BY nombre_parroquia ASC";

    $datos_parroquias = mysqli_query($enlace, $queryparroquias) or die(mysqli_error());

    $row_datos_parroquias = mysqli_fetch_assoc($datos_parroquias);

mysqli_close($enlace);  

?>


  <?php do{?>                                

<option value="<?php echo $row_datos_parroquias['id_parroquia']; ?>"><?php echo $row_datos_parroquias['nombre_parroquia']; ?></option>

                                <?php } while ($row_datos_parroquias = mysqli_fetch_assoc($datos_parroquias)); ?> 
                               
                              
                        </select>                
              </div>



                <div class="input-group input-group-sm col-md-4 mb-2 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">&nbsp;<i>Calle -Sector -Urbanización:</i></span>  
                </div>
<input maxlength="89" type="text" class="form-control" id="dirección_padre" name="dirección_padre" placeholder="" value="<?php echo $row_datos_estudiantes_detalladop['datos_vivienda_padre']; ?>">
                </div>





</div>        <!-- end  fila 3 -->






<div class="form-row mt-3 mb-3">
<div class="col-md-12">


  <input type="hidden" id="id_del_estudiante"     name="id_del_estudiante"     value="<?php echo $row_datos_estudiantes['id_estud'];?>">

  <input type="hidden" id="id_del_reprezz"     name="id_del_reprezz"     value="<?php echo $row_datos_estudiantez['id_repre'];?>">

  <input type="hidden" id="id_del_registro_madre" name="id_del_registro_madre" value="<?php echo $row_datos_estudiantes_detallado['id_madre'];?>">
  <input type="hidden" id="id_del_registro_padre" name="id_del_registro_padre" value="<?php echo $row_datos_estudiantes_detalladop['id_padre']; ?>">


<button type="submit" name="almacenar_todo" class="btn btn-secondary btn-block">

<i class="far fa-hand-point-right"></i> &nbsp Actualizar datos de: &nbsp&nbsp  <b><?php echo $row_datos_estudiantes['apellidos_estu'];?>,  <?php echo $row_datos_estudiantes['nombre_estu'];?>.</b></button>

</div>
</div>



</form>








  </div>
</div>
   

<?php } while ($row_datos_estudiantes = mysqli_fetch_assoc($datos_estudiantes)); ?>



</span>













                           

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








<!--


                    <td class="align-middle" align="center">



                       <div class="col-lg-12" data-toggle="tooltip" data-placement="top" title="Actualizar Datos.">
  
                      <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                              data-target="#modificar_es<?php echo $row_datos_estudiantez_YUT['id_estud']; ?>">
                                          

                                         <i class="fas fa-wrench fa-lg"></i>
                      </button>

                      </div> 








<div class="modal fade" id="modificar_es<?php echo $row_datos_estudiantez_YUT['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Editar o Modificar!!!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


       <?php include("plantillita_estu88.php"); ?>


      <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_estudiantez['id_estud']; ?>">
        <input type="hidden" id="id_repre"  name="id_repre" value="<?php echo $row_datos_estudiantez['id_repre']; ?>">  

      </div>  
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_estu" class="btn btn-info" value="<?php echo $row_datos_estudiantez_YUT['id_estud']; ?>">
              Modificar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>









                     </td>



  -->