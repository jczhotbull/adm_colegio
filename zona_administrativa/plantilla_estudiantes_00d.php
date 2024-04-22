<?php

include("identificador.php");

error_reporting(0);

$nnn1 = $nnn['ci'];

include("../conectar.php");

mysqli_close($enlace);  




if(isset($_POST['cancelXX']))
    {

$filenameZZ = '../0 Croppie/foto_estu_update' . $nnn1 . '.png';


if (file_exists($filenameZZ )) { 

unlink($filenameZZ);

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




 if(isset($_POST['update_logoX_ci_est']))
        {    
include("../conectar.php");
$queryKKC = "SELECT * FROM reg_estudiantes WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1";
                      $resultKKC = mysqli_query($enlace,$queryKKC);
                      $filaKK=mysqli_fetch_array($resultKKC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...
$foto_a_borrar = $filaKK["foto_ci_est"];
                      if (!empty( $foto_a_borrar )) {   // si hay algo en foto, borra ese archivo                       
              unlink($foto_a_borrar);

$deleteXX = "UPDATE reg_estudiantes SET foto_ci_est = '' WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1 ";
$resultXXC = mysqli_query($enlace,$deleteXX); 
             }   
mysqli_close($enlace); 


$id_estu_KL = $_POST['id_del_est_UU'];
$exp_estu_KL = $_POST['exp_del_est_UU'];

clearstatcache();
$filenameUPd_fot_ES = '../0 Croppie/foto_estu_update_ci' . $nnn1 . '.png';
$fot_ES_bandera = "0";

          if (file_exists($filenameUPd_fot_ES )) {    // de haber una foto le cambia el nombre y la mueve a otro lugar 
            $fot_ES_bandera = "1";
          $imageXXfot_ES = imagecreatefrompng("../0 Croppie/foto_estu_update_ci". $nnn1 . ".png");  
                           unlink("../0 Croppie/foto_estu_update_ci". $nnn1 . ".png"); 
                           imagejpeg($imageXXfot_ES,"../0 Croppie/foto_estu_update_ci". $nnn1 . ".png",85); // comprimer la imagen           
        
            $extU = 'png';
            /* $newfilename = '../zz_fotos_l/logocropx.png'; */
            $newfilenameUPd_fot_ES = "../zz_fotos_estudiantes_ci/".$id_estu_KL."_".$exp_estu_KL.".".$extU;
             
            if(rename($filenameUPd_fot_ES,$newfilenameUPd_fot_ES))
      {     

      include("../conectar.php");         

          $query_fotoU_E = "UPDATE reg_estudiantes SET foto_ci_est = '$newfilenameUPd_fot_ES' WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1 ";
          

          if (!mysqli_query($enlace,$query_fotoU_E))      // si no ha logrado ingresar la foto
                   {

         $errorZ="- Doc. de Id. del estudiante no actualizado. ";

              unlink($newfilenameUPd_fot_ES); 
                        
              mysqli_close($enlace);

                   }

          else {
          
          $exitoZ = "- Doc. de Id. del estudiante actualizado. ";
          mysqli_close($enlace);  

            }   

             
      }

            else{

              $errorZ="- Error en Doc. de Id. del estudiante, contactar al Ing. ";
            
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






 if(isset($_POST['borrarXX_ci_est']))
    {



include("../conectar.php");

$queryKKC = "SELECT * FROM reg_estudiantes WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1";

                      $resultKKC = mysqli_query($enlace,$queryKKC);
                      $filaKK=mysqli_fetch_array($resultKKC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$foto_a_borrar = $filaKK["foto_ci_est"];


                      if (!empty( $foto_a_borrar )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($foto_a_borrar);


$deleteXX = "UPDATE reg_estudiantes SET foto_ci_est = '' WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1 ";
$resultXXC = mysqli_query($enlace,$deleteXX);

               $exitoZ="- Doc. de Id. del estudiante borrado. ";

             }


              else {

              $errorZ="- El estudiante seleccionado no posee Doc. de Id. Cargado.";

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












 if(isset($_POST['eliminar_registro']))
        {

$total_de_registros =  $_POST["total_registros"];
$el_dicho_estudiante =  $_POST["id_es_estudiante_aa"];

    $zz =  $_POST["num_conteoAA"] - 1;

    $mod_ciclo = $_POST["mod_ciclo"][$zz];

    $nombre_periodo_eliminar = $_POST["nombre_periodo_eliminar"][$zz];  

    $mod_delete_reg = $_POST["mod_delete_reg"];        

    $estu_nombre = $_POST["estu_nombre"];  

    $id_reg_estu_actual = $_POST["id_reg_estu_actual"][$zz];  

    
    if (isset($_POST['mod_delete_reg'])) {


      include("../conectar.php");     // borra las notas

$querydeleteee = "DELETE FROM asign_notas WHERE id_reg_estu_actual = '$id_reg_estu_actual'";

$datos_querydeleteee = mysqli_query($enlace, $querydeleteee) or die(mysqli_error());



  $q_pagos = "SELECT * FROM reg_estu_actual WHERE id_reg_estu_actual = '$id_reg_estu_actual' LIMIT 1";
  $d_pagos = mysqli_query($enlace, $q_pagos) or die(mysqli_error());
  $row_dato_del_pago = mysqli_fetch_array($d_pagos); 
  $este_mesmo_es = $row_dato_del_pago['id_reg_pagos'];


$querydeleteee_pago = "DELETE FROM reg_pagos WHERE id_pago = '$este_mesmo_es'";
$datos_querydeleteee_pago = mysqli_query($enlace, $querydeleteee_pago) or die(mysqli_error()); 


     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; El registro de &nbsp;<b>".$estu_nombre."</b>&nbsp; correspondiente al ciclo  &nbsp;<b>".$nombre_periodo_eliminar."</b>&nbsp; ha sido eliminado. ";  


if ($total_de_registros == 1) {

  $querydeleteee_estudiante = "DELETE FROM reg_estudiantes WHERE id_estud = '$el_dicho_estudiante'";

$datos_querydeleteee_estudiante = mysqli_query($enlace, $querydeleteee_estudiante) or die(mysqli_error());

 $exitoZ .= "&nbsp;&nbsp; Estudiante removido de la base de datos. "; 

}

mysqli_close($enlace);  

 }

    else { $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-exclamation-triangle fa-lg\"></i>&nbsp; No se ha seleccionado el registro a eliminar. ";   }


}  // cierre eliminar registro





















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






$el_cicloXX = $_GET['ciclo'];
$el_gradoXX = $_GET['grado'];
$el_statusXX = $_GET['elstatus'];
$tituloJKL = $_GET['tituloJKL'];





?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/lista_estudiantes_ins_d.php"); ?>  <!-- ayuda a hacer el listado -->


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


<div class="text-muted">Las fotos con el icono&nbsp;&nbsp;<span style="color:limegreen;"><i class="fas fa-chess-bishop fa-lg"></i></span>&nbsp;&nbsp;
        indican que el alumno es nuevo ingreso y que proviene de otra institución.</div>


 <div class="text-muted">El icono&nbsp;&nbsp;<span style="color:#4B0082;"><i class="fas fa-chess-rook fa-lg"></i></span>&nbsp;&nbsp;
        indican que el alumno desde su ingreso completo un solo año en la institución.</div>


  <div class="card mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-sm table-hover" id="dataTable" width="100%" cellspacing="0"  >
             
              <thead>
                <tr>
                  
                  <th>Datos:</th>
                 
<th><i class="fas fa-cog"></i></th>

                  
                  <th><i class="fas fa-camera"></i></th>
                  <th><i class="fas fa-cog"></i></th>
                   <th>Estudiante:</th>
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


<td class="align-middle" align="center"><span class="text-muted">

<?php

$id_del_estu = $row_datos_estudiantes['id_estud'];

if ($row_datos_estudiantes['estu_expediente'] ==  $row_datos_estudiantes['ci_estu']) {

  $mensa_arriba = 'Doc. Id. / Exp.:';
  $separacion_br_a = '<br>';
  $separacion_br_b = '';
  $separacion_br_c = '';
  $mensa_abajo = '';
  $print_this_a =  $row_datos_estudiantes['estu_expediente'];
  $print_this_b =  '';
  
}


if ($row_datos_estudiantes['estu_expediente'] !=  $row_datos_estudiantes['ci_estu']) {

  $mensa_arriba = 'Exp.:';
  $separacion_br_a = '<br>';
  $separacion_br_b = '<br>';
  $separacion_br_c = '<br>';
  $mensa_abajo = 'Doc. Id.:';
  $print_this_a =  $row_datos_estudiantes['estu_expediente'];
  $print_this_b =  $row_datos_estudiantes['ci_estu'];
  
}


?>



  <?php echo $mensa_arriba; ?> </span> <?php echo $separacion_br_a; ?>  <?php echo $print_this_a; ?>
              <?php echo $separacion_br_b; ?><span class="text-muted"><?php echo $mensa_abajo; ?></span><?php echo $separacion_br_c; ?>
                <?php echo $print_this_b;  ?>


<br>

                  <img id="myImg_2020" src="<?php echo $row_datos_estudiantes['foto_ci_est']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio3.jpg';" width="105px" />

               </td>




               
  <td class="align-middle" align="center">

  <div class="upload-btn-wrapper">

          <div data-toggle="tooltip" data-placement="top" title="Actualizar Doc. de Id." >
                <button class="btn btn-outline-info btn-sm" ><i class="fas fa-upload"></i></button>

                <input class="center-block punterodd" type="file" accept="image/*"
                   name="upload_image_ci_est<?php echo $row_datos_estudiantes['id_estud']; ?>" id="upload_image_ci_est<?php echo $row_datos_estudiantes['id_estud']; ?>"
                   onchange="return fileValidation_ci_est<?php echo $row_datos_estudiantes['id_estud']; ?>()" /> 
          </div>
                  </div>



  <?php include ("plantilla_estudiantes_00_del_ci_fot.php"); ?> 

                   </td>  

<?php include("plantilla_estudiantes_00_upd_ci_fot.php");   ?>

              



                  

<?php   

$id_estxx1 = $row_datos_estudiantes['id_estud'];


include("../conectar.php"); 

$reg_estu_HOYx = "SELECT * FROM grados, secciones, edades, reg_estu_actual  
           WHERE  grados.id_grado  = reg_estu_actual.grado_actual             
             and  secciones.id_seccion = reg_estu_actual.id_seccion
             and edades.id_edad = reg_estu_actual.edad_actual
             and  cursa_actualmente = '$el_cicloXX'

             and id_estud = '$id_estxx1'



          /*   and el_activo = '1'  */
            ORDER BY id_reg_estu_actual DESC LIMIT 1";   // me selecciona el ultimo es decir el actual en curso

$q_reg_estu_HOYx = mysqli_query($enlace, $reg_estu_HOYx) or die(mysqli_error());

$r_d_reg_estu_HOYx = mysqli_fetch_array($q_reg_estu_HOYx); 




$sql_countpptt = "SELECT COUNT(*) total FROM reg_estu_actual where id_estud = '$id_estxx1'";
$result_countpptt = mysqli_query($enlace, $sql_countpptt) or die(mysqli_error());
$el_conteopptt = mysqli_fetch_assoc($result_countpptt);
$el_totalpptt = $el_conteopptt['total'];






$reg_sobre = "SELECT proviene_de_otro FROM reg_estu_sobre  
           WHERE  id_estud  = '$id_estxx1'";   //

$q_reg_sobreA = mysqli_query($enlace, $reg_sobre) or die(mysqli_error());

$r_d_reg_sobreD = mysqli_fetch_array($q_reg_sobreA);

mysqli_close($enlace);
                  
?>







                    <td class="align-middle" align="center">




<?php  if ( $r_d_reg_sobreD['proviene_de_otro'] == '1' && $el_totalpptt =='1' ) {
      $flechin = '<span style="color:limegreen;"><i class="fas fa-chess-bishop fa-lg"></i></span>'  ;
      echo $flechin;
    }



    if ( $r_d_reg_sobreD['proviene_de_otro'] == '1' && $el_totalpptt =='2' ) {
      $flechin = '<span style="color:#4B0082;"><i class="fas fa-chess-rook fa-lg"></i></span>'  ;
      echo $flechin;
    }





    ;?>



                  <img id="myImg" src="<?php echo $row_datos_estudiantes['foto_estu']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio5.jpg';" width="80px" />  </td>


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









    <td class="align-middle" align="center"><?php echo $row_datos_estudiantes['apellidos_estu'];?>,<br>
                   <?php echo $row_datos_estudiantes['nombre_estu'];  ?> <br><span style="color: #417FD5;">"Edad: <b><?php echo $r_d_reg_estu_HOYx['nombre_edad']; ?></b> años."</span> </td>  


    <td class="align-middle" align="center"><?php echo $r_d_reg_estu_HOYx['nombre_grados']; ?> <br> " <?php echo $r_d_reg_estu_HOYx['nombre_seccion']; ?> " </td>             






                  

                  
                 












                  <td class="align-middle" align="center" style="background-color: #EBF0F1;">
                  <img id="myImg" src="<?php echo $row_datos_estudiantes['foto_repre']; ?>?nocache=<?php echo time(); ?>"
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



  <?php include ("plantilla_repres_00_del_fot.php"); ?> 

                   </td>  

<?php include("plantilla_repres_00_upd_fot.php");   ?>





                  <td class="align-middle" align="center" style="background-color: #EBF0F1;"><?php echo $row_datos_estudiantes['apellido_repre']; ?>,<br>
                   <?php echo $row_datos_estudiantes['nombre_repre']; ?> </td>


                  

                  




             
                  <td class="align-middle" align="center" style="background-color: #EBF0F1;"><?php echo $row_datos_estudiantes['ci_repre']; ?> <br>

                  <img id="myImg" src="<?php echo $row_datos_estudiantes['foto_ci_repre']; ?>?nocache=<?php echo time(); ?>"
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



<?php include ("plantilla_repre_00_del_ci.php"); ?> 



                  </td>

<?php include("plantilla_repre_00_upd_ci.php"); ?>

                  



              




 <td class="align-middle" align="center"><?php echo $row_datos_estudiantes['celular_repre']; 

                                                        if (!$row_datos_estudiantes['telefono_repre'] == "") {       
                                                            echo " <br>" .$row_datos_estudiantes['telefono_repre'];
                                                          } 
                  ?><br><br><?php echo $row_datos_estudiantes['email_repre']; ?> </td>   

 



                  <td class="align-middle" align="center"> 


                    <div class="form-row mb-2">

                      <!--boton 1 -->
                      <div class="col-lg-6" data-toggle="tooltip" data-placement="top" title="Modificar Datos">
  
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
        <i class="fas fa-info fa-lg"></i> &nbsp;Editar o Modificar!!!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


       <?php include("plantilla_estudiantes_00_mod.php"); ?>


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
        <input type="hidden" id="id_repre"  name="id_repre" value="<?php echo $row_datos_estudiantes['id_repre']; ?>">

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



             
                    







                    <div class="form-row"> 

                  


<?php

$permitirlo = '';

if ($row_datos_estudiantes['inscrito_si_o_no'] == '0') {
  $permitirlo = 'none';
}

 ?>

                <div class="col-lg-6" data-toggle="tooltip" data-placement="top"  title="Editar Historial" style="display: <?php echo $permitirlo; ?> ">
                      <button type="button" class="btn btn-outline-dark btn-sm" data-toggle="modal"
                      data-target="#editar_historial<?php echo $row_datos_estudiantes['id_estud']; ?>">
                         <i class="fas fa-list-ol"></i>
                        </button>
                        </div>  










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


       <?php include("plantilla_estudiantes_00_hist.php"); ?>


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
        <input type="hidden" id="id_repre"  name="id_repre" value="<?php echo $row_datos_estudiantes['id_repre']; ?>">

<input type="hidden" id="estu_nombre"   name="estu_nombre"  value="<?php echo $row_datos_estudiantes['nombre_estu']; ?>">
        <input type="hidden" id="num_conteoAA"  name="num_conteoAA" value="<?php echo $totalRows_q_reg_estu_actual; ?>">



      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_historial" class="btn btn-info" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
              Modificar</button>  

                <button type="submit" name="eliminar_registro" class="btn btn-danger" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
              Eliminar Registro</button> 

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->






                    </div>




                  </td>
                  



                </tr>
                


                 <?php } while ($row_datos_estudiantes = mysqli_fetch_assoc($datos_estudiantes)); ?>

                
              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->

       

        <div class="card-footer text-muted"><b>Info:</b> Puede modificar he imprimir datos.</div> 

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
