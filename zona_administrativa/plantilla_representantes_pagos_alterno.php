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


 if(isset($_POST['save_ins']))
        {

$fecha_ins = $_POST['fecha_ins'];
$dicho_id = $_POST['id_del_registro'];

include("../conectar.php");

$sql = "UPDATE reg_pagos SET nota_principal = '".mysqli_real_escape_string($enlace,$_POST['nota_prin'])."'   ,
                             en_el_ciclo = '".mysqli_real_escape_string($enlace,$_POST['ciclo'])."'   ,
                             Inscripcion = '".mysqli_real_escape_string($enlace,$_POST['monto_ins'])."'   ,
                             fecha_pago_ins = '$fecha_ins'   ,
                             recibo_pago_insc = '".mysqli_real_escape_string($enlace,$_POST['recibo_ins'])."'   ,
                             nota_insc = '".mysqli_real_escape_string($enlace,$_POST['nota_ins'])."' 

                            WHERE id_pago ='$dicho_id' ";



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
                     $exitoZ = "Registro Inscripción Actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }

         }








 if(isset($_POST['save_1er_tri']))
        {

$fecha_1er_pago = $_POST['fecha_1er_pago'];
$fecha_2do_pago = $_POST['fecha_2do_pago'];
$fecha_3er_pago = $_POST['fecha_3er_pago'];

$forma_1er = $_POST['mod_forma_1er'];
$forma_2do = $_POST['mod_forma_2do'];
$forma_3er = $_POST['mod_forma_3er'];

$dicho_id = $_POST['id_del_registro'];

include("../conectar.php");

$sql = "UPDATE reg_pagos SET 1er_pago = '".mysqli_real_escape_string($enlace,$_POST['1er_pago'])."'   ,
                             fecha_1er_pago = '$fecha_1er_pago'   ,
                             recibo_1er_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_1er_pago'])."'   ,

                             2do_pago = '".mysqli_real_escape_string($enlace,$_POST['2do_pago'])."'   ,
                             fecha_2do_pago = '$fecha_2do_pago'   ,
                             recibo_2do_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_2do_pago'])."' ,

                             3er_pago = '".mysqli_real_escape_string($enlace,$_POST['3er_pago'])."'   ,
                             fecha_3er_pago = '$fecha_3er_pago'   ,
                             recibo_3er_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_3er_pago'])."' ,

                             1er_trim_nota = '".mysqli_real_escape_string($enlace,$_POST['nota_1er_tri'])."',
                             especial_1 = '".mysqli_real_escape_string($enlace,$_POST['pago_especial_1'])."',

                             abono_1er = '".mysqli_real_escape_string($enlace,$_POST['1er_abono'])."',
                             forma_1er = '$forma_1er'   ,
                             num_trans_1er = '".mysqli_real_escape_string($enlace,$_POST['trans_1er_pago'])."',

                             abono_2do = '".mysqli_real_escape_string($enlace,$_POST['2do_abono'])."',
                             forma_2do = '$forma_2do'   ,
                             num_trans_2do = '".mysqli_real_escape_string($enlace,$_POST['trans_2do_pago'])."',

                             abono_3er = '".mysqli_real_escape_string($enlace,$_POST['3er_abono'])."',
                             forma_3er = '$forma_3er'   ,
                             num_trans_3er = '".mysqli_real_escape_string($enlace,$_POST['trans_3er_pago'])."'

                            WHERE id_pago ='$dicho_id' ";



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
                     $exitoZ = "Registro 1er Trimestre Actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }

         }









 if(isset($_POST['save_2do_tri']))
        {

$fecha_4to_pago = $_POST['fecha_4to_pago'];
$fecha_5to_pago = $_POST['fecha_5to_pago'];
$fecha_6to_pago = $_POST['fecha_6to_pago'];


$forma_4to = $_POST['mod_forma_4to'];
$forma_5to = $_POST['mod_forma_5to'];
$forma_6to = $_POST['mod_forma_6to'];

$dicho_id = $_POST['id_del_registro'];

include("../conectar.php");

$sql = "UPDATE reg_pagos SET 4to_pago = '".mysqli_real_escape_string($enlace,$_POST['4to_pago'])."'   ,
                             fecha_4to_pago = '$fecha_4to_pago'   ,
                             recibo_4to_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_4to_pago'])."'   ,

                             5to_pago = '".mysqli_real_escape_string($enlace,$_POST['5to_pago'])."'   ,
                             fecha_5to_pago = '$fecha_5to_pago'   ,
                             recibo_5to_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_5to_pago'])."' ,
                             
                             6to_pago = '".mysqli_real_escape_string($enlace,$_POST['6to_pago'])."'   ,
                             fecha_6to_pago = '$fecha_6to_pago'   ,
                             recibo_6to_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_6to_pago'])."' ,

                             2do_trim_nota = '".mysqli_real_escape_string($enlace,$_POST['nota_2do_tri'])."',
                             especial_2 = '".mysqli_real_escape_string($enlace,$_POST['pago_especial_2'])."',


                             abono_4to = '".mysqli_real_escape_string($enlace,$_POST['4to_abono'])."',
                             forma_4to = '$forma_4to'   ,
                             num_trans_4to = '".mysqli_real_escape_string($enlace,$_POST['trans_4to_pago'])."',

                             abono_5to = '".mysqli_real_escape_string($enlace,$_POST['5to_abono'])."',
                             forma_5to = '$forma_5to'   ,
                             num_trans_5to = '".mysqli_real_escape_string($enlace,$_POST['trans_5to_pago'])."',

                             abono_6to = '".mysqli_real_escape_string($enlace,$_POST['6to_abono'])."',
                             forma_6to = '$forma_6to'   ,
                             num_trans_6to = '".mysqli_real_escape_string($enlace,$_POST['trans_6to_pago'])."'

                            WHERE id_pago ='$dicho_id' ";



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
                     $exitoZ = "Registro 2do Trimestre Actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }

         }





 if(isset($_POST['save_3er_tri']))
        {

$fecha_7mo_pago = $_POST['fecha_7mo_pago'];
$fecha_8vo_pago = $_POST['fecha_8vo_pago'];
$fecha_9no_pago = $_POST['fecha_9no_pago'];

$forma_7mo = $_POST['mod_forma_7mo'];
$forma_8vo = $_POST['mod_forma_8vo'];
$forma_9no = $_POST['mod_forma_9no'];

$dicho_id = $_POST['id_del_registro'];

include("../conectar.php");

$sql = "UPDATE reg_pagos SET 7mo_pago = '".mysqli_real_escape_string($enlace,$_POST['7mo_pago'])."'   ,
                             fecha_7mo_pago = '$fecha_7mo_pago'   ,
                             recibo_7mo_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_7mo_pago'])."'   ,

                             8vo_pago = '".mysqli_real_escape_string($enlace,$_POST['8vo_pago'])."'   ,
                             fecha_8vo_pago = '$fecha_8vo_pago'   ,
                             recibo_8vo_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_8vo_pago'])."' ,
                             
                             9no_pago = '".mysqli_real_escape_string($enlace,$_POST['9no_pago'])."'   ,
                             fecha_9no_pago = '$fecha_9no_pago'   ,
                             recibo_9no_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_9no_pago'])."' ,

                             3er_trim_nota = '".mysqli_real_escape_string($enlace,$_POST['nota_3er_tri'])."',
                             especial_3 = '".mysqli_real_escape_string($enlace,$_POST['pago_especial_3'])."' ,

                             abono_7mo = '".mysqli_real_escape_string($enlace,$_POST['7mo_abono'])."',
                             forma_7mo = '$forma_7mo'   ,
                             num_trans_7mo = '".mysqli_real_escape_string($enlace,$_POST['trans_7mo_pago'])."',

                             abono_8vo = '".mysqli_real_escape_string($enlace,$_POST['8vo_abono'])."',
                             forma_8vo = '$forma_8vo'   ,
                             num_trans_8vo = '".mysqli_real_escape_string($enlace,$_POST['trans_8vo_pago'])."',

                             abono_9no = '".mysqli_real_escape_string($enlace,$_POST['9no_abono'])."',
                             forma_9no = '$forma_9no'   ,
                             num_trans_9no = '".mysqli_real_escape_string($enlace,$_POST['trans_9no_pago'])."'

                            WHERE id_pago ='$dicho_id' ";



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
                     $exitoZ = "Registro 3er Trimestre Actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }

         }






 if(isset($_POST['save_4to_tri']))
        {

$fecha_10m_pago = $_POST['fecha_10m_pago'];
$fecha_11o_pago = $_POST['fecha_11o_pago'];
$fecha_12o_pago = $_POST['fecha_12o_pago'];


$forma_10m = $_POST['mod_forma_10m'];
$forma_11o = $_POST['mod_forma_11o'];
$forma_12o = $_POST['mod_forma_12o'];

$dicho_id = $_POST['id_del_registro'];

include("../conectar.php");

$sql = "UPDATE reg_pagos SET 10m_pago = '".mysqli_real_escape_string($enlace,$_POST['10m_pago'])."'   ,
                             fecha_10m_pago = '$fecha_10m_pago'   ,
                             recibo_10m_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_10m_pago'])."'   ,

                             11o_pago = '".mysqli_real_escape_string($enlace,$_POST['11o_pago'])."'   ,
                             fecha_11o_pago = '$fecha_11o_pago'   ,
                             recibo_11o_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_11o_pago'])."' ,
                             
                             12o_pago = '".mysqli_real_escape_string($enlace,$_POST['12o_pago'])."'   ,
                             fecha_12o_pago = '$fecha_12o_pago'   ,
                             recibo_12o_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_12o_pago'])."' ,

                             4to_trim_nota = '".mysqli_real_escape_string($enlace,$_POST['nota_4to_tri'])."',
                             especial_4 = '".mysqli_real_escape_string($enlace,$_POST['pago_especial_4'])."' ,


                             abono_10m = '".mysqli_real_escape_string($enlace,$_POST['10m_abono'])."',
                             forma_10m = '$forma_10m'   ,
                             num_trans_10m = '".mysqli_real_escape_string($enlace,$_POST['trans_10m_pago'])."',

                             abono_11o = '".mysqli_real_escape_string($enlace,$_POST['11o_abono'])."',
                             forma_11o = '$forma_11o'   ,
                             num_trans_11o = '".mysqli_real_escape_string($enlace,$_POST['trans_11o_pago'])."',

                             abono_12o = '".mysqli_real_escape_string($enlace,$_POST['12o_abono'])."',
                             forma_12o = '$forma_12o'   ,
                             num_trans_12o = '".mysqli_real_escape_string($enlace,$_POST['trans_12o_pago'])."'

                            WHERE id_pago ='$dicho_id' ";



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
                     $exitoZ = "Registro 4to Trimestre Actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
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


 include("plantillita_repre_update.php");   // procesa los datos

 }


}  // cierre de modificar datos del repre y del estudiante






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







 if(isset($_POST['eliminar_registro_alumno']))
        { 

$el_dicho_id = $_POST['id_del_registro'];  


include("../conectar.php");

$sql = "UPDATE reg_pagos SET nota_principal = NULL,
                             en_el_ciclo = NULL,
                             Inscripcion = NULL,
                             fecha_pago_ins = NULL,
                             recibo_pago_insc = NULL,
                             nota_insc = NULL,

                             1er_pago = NULL,
                             fecha_1er_pago = NULL,
                             recibo_1er_pago = NULL,

                              2do_pago = NULL,
                             fecha_2do_pago = NULL,
                             recibo_2do_pago = NULL, 

                              3er_pago = NULL,
                             fecha_3er_pago = NULL,
                             recibo_3er_pago = NULL, 

                            1er_trim_nota = NULL, 


                            4to_pago = NULL,
                             fecha_4to_pago = NULL,
                             recibo_4to_pago = NULL,

                              5to_pago = NULL,
                             fecha_5to_pago = NULL,
                             recibo_5to_pago = NULL, 

                              6to_pago = NULL,
                             fecha_6to_pago = NULL,
                             recibo_6to_pago = NULL, 

                            2do_trim_nota = NULL, 


                            7mo_pago = NULL,
                             fecha_7mo_pago = NULL,
                             recibo_7mo_pago = NULL,

                              8vo_pago = NULL,
                             fecha_8vo_pago = NULL,
                             recibo_8vo_pago = NULL, 

                              9no_pago = NULL,
                             fecha_9no_pago = NULL,
                             recibo_9no_pago = NULL, 

                            3er_trim_nota = NULL, 


                             10m_pago = NULL,
                             fecha_10m_pago = NULL,
                             recibo_10m_pago = NULL,

                              11o_pago = NULL,
                             fecha_11o_pago = NULL,
                             recibo_11o_pago = NULL, 

                              12o_pago = NULL,
                             fecha_12o_pago = NULL,
                             recibo_12o_pago = NULL, 

                            4to_trim_nota = NULL,

                            especial_1 = NULL,
                             especial_2 = NULL,
                             especial_3 = NULL,
                             especial_4 = NULL,

                             abono_1er = NULL,
                             abono_2do = NULL,
                             abono_3er = NULL,
                             abono_4to = NULL,
                             abono_5to = NULL,
                             abono_6to = NULL,
                             abono_7mo = NULL,
                             abono_8vo = NULL,
                             abono_9no = NULL,
                             abono_10m = NULL,
                             abono_11o = NULL,
                             abono_12o = NULL,

                             forma_1er = NULL,
                             forma_2do = NULL,
                             forma_3er = NULL,
                             forma_4to = NULL,
                             forma_5to = NULL,
                             forma_6to = NULL,
                             forma_7mo = NULL,
                             forma_8vo = NULL,
                             forma_9no = NULL,
                             forma_10m = NULL,
                             forma_11o = NULL,
                             forma_12o = NULL,

                             num_trans_1er = NULL,
                             num_trans_2do = NULL,
                             num_trans_3er = NULL,
                             num_trans_4to = NULL,
                             num_trans_5to = NULL,
                             num_trans_6to = NULL,
                             num_trans_7mo = NULL,
                             num_trans_8vo = NULL,
                             num_trans_9no = NULL,
                             num_trans_10m = NULL,
                             num_trans_11o = NULL,
                             num_trans_12o = NULL

                             WHERE id_pago = '$el_dicho_id' ";




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
                     $exitoZ = "Registro Completamente Borrado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
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




/*
$conteoXX = $_GET['conteo'];

$selec = $_GET['selec'];   */

$tituloJKL = $_GET['tituloJKL'];




include("../conectar.php");

              $querymod2 = "SELECT * FROM periodo_de_pago where id_periodo_pago = 1 ";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());
              
              $row_datos_mod2 = mysqli_fetch_array($datos_mod2);
                         
               mysqli_close($enlace);    

$primer_pago = $row_datos_mod2['1er_pago'];
$segundo_pago = $row_datos_mod2['2do_pago'];
$tercero_pago = $row_datos_mod2['3er_pago'];

$especial_primero = $row_datos_mod2['especial_1'];

$cuarto_pago = $row_datos_mod2['4to_pago'];
$quinto_pago = $row_datos_mod2['5to_pago'];
$sexto_pago = $row_datos_mod2['6to_pago'];

$especial_segundo = $row_datos_mod2['especial_2'];



$septimo_pago = $row_datos_mod2['7mo_pago'];
$octavo_pago = $row_datos_mod2['8vo_pago'];
$noveno_pago = $row_datos_mod2['9no_pago'];

$especial_tercero = $row_datos_mod2['especial_3'];



$decimo_pago = $row_datos_mod2['10m_pago'];
$onceavo_pago = $row_datos_mod2['11o_pago'];
$doceavo_pago = $row_datos_mod2['12o_pago'];

$especial_cuarto = $row_datos_mod2['especial_4'];



?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/lista_de_representantes_search_pagos.php"); ?>  <!-- ayuda a hacer el listado -->


<div class="se-pre-con"></div>


<div class="content-wrapper">
  <div class="container-fluid">

    <div class="form-row">  


          <div class="col-md-3 col-lg-3 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i><b><?php echo $tituloJKL; ?>:</b> </i></div> 

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

                <div class="text-dark"><b>Atención:</b> La presencia de filas vacías, significa que los datos del representante no se han completado correctamente.</div> 

</div>


 <?php

                $el_id_esTTT = $row_de_ids['id_repre'];

                include("../conectar.php"); 

                $reg_de_todo = "SELECT * FROM reg_estu_repre_all, reg_representante, reg_estu_actual, reg_estudiantes 

                     WHERE  reg_estu_repre_all.id_repre = reg_representante.id_repre
                     and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud                     
                     and reg_estu_actual.id_estud = reg_estudiantes.id_estud                   
                     
                    and reg_representante.id_repre = '$el_id_esTTT'                     
                     and  reg_estu_actual.el_activo = '1' ";

            $datos_estudiantes = mysqli_query($enlace,  $reg_de_todo) or die(mysqli_error());

            $row_datos_estudiantes = mysqli_fetch_array($datos_estudiantes); 

            // $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

            $totalRows_datos_estudiantes = mysqli_num_rows($datos_estudiantes); 


                mysqli_close($enlace);


?>
<br>


<div style="border: 1px solid SteelBlue;" class="card">

<h3 style="color:SteelBlue;" class="ml-1 mt-1"> - Representante:</h3>

<table class="table table-bordered table-sm">
  <thead>
    <tr>
      <th>Doc. de Id:</th>
      <th><i class="fas fa-cog"></i></th>
      <th>Datos</th>
      <th>Foto:</th>
      <th><i class="fas fa-cog"></i></th>
      <th>Telfs/Email:</th>
      <th>Modificar:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="align-middle" align="center"><?php echo $row_datos_estudiantes['ci_repre']; ?> <br>

         <img id="myImg" src="<?php echo $row_datos_estudiantes['foto_ci_repre']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio3.jpg';" width="105px" />

      </td>


       <td class="align-middle" align="center">

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



  

<td class="align-middle" align="center"><b><?php echo $row_datos_estudiantes['nombre_repre']; ?></b>,<br>
                    <?php echo $row_datos_estudiantes['apellido_repre']; ?>    <br>
                  <span style="color: #417FD5;">" <b><?php echo $row_de_ids['nombre_parentesco']; ?></b> " - 
                  <span style="color: green;"><?php echo $row_de_ids['nombre_profesion']; ?>  </span>

                  </td> 



      
                   <td class="align-middle" align="center">

                   <img id="myImg" src="<?php echo $row_datos_estudiantes['foto_repre']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio1.jpg';" width="100px" />


                 </td> 


                  <td class="align-middle" align="center">

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



    
 <td class="align-middle" align="center"><?php echo $row_datos_estudiantes['celular_repre']; 

                                                        if (!$row_datos_estudiantes['telefono_repre'] == "") {       
                                                            echo " <br>" .$row_datos_estudiantes['telefono_repre'];
                                                          } 
                  ?><br><br><?php echo $row_datos_estudiantes['email_repre']; ?> </td>



       <td class="align-middle" align="center">


                   <div class="col-lg-12" data-toggle="tooltip" data-placement="top" title="Actualizar Datos.">
  
                      <button type="button" class="btn btn-outline-primary " data-toggle="modal"
                              data-target="#modificar<?php echo $row_datos_estudiantes['id_repre']; ?>">
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <i class="fas fa-user-cog"></i>
                      </button>

                      </div> 



<!-- ini modal editar -->

<div class="modal fade" id="modificar<?php echo $row_datos_estudiantes['id_repre']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
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


       <?php include("plantillita_repre.php"); ?>


  <!--      <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
        <input type="hidden" id="id_repre"  name="id_repre" value="<?php echo $row_datos_estudiantes['id_repre']; ?>">   -->

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_repre" class="btn btn-info" value="<?php echo $row_datos_estudiantes['id_repre']; ?>">
              Modificar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->

                 </td>

    </tr>
    
  </tbody>
</table>
</div>



<?php
          $el_id_esTTT = $row_de_ids['id_repre'];

          include("../conectar.php"); 


$query_YUT = "SELECT * FROM reg_estu_repre_all, secciones, reg_estu_actual, grados, reg_estudiantes 

         WHERE  reg_estu_repre_all.id_estu = reg_estudiantes.id_estud

         and  secciones.id_seccion = reg_estu_actual.id_seccion
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  el_activo = '1'
         and reg_estu_repre_all.id_repre = '$el_id_esTTT'
        
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC ";

$datos_estudiantes_YUT = mysqli_query($enlace, $query_YUT) or die(mysqli_error());

$row_datos_estudiantes_YUT = mysqli_fetch_array($datos_estudiantes_YUT); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estudiantes_YUT = mysqli_num_rows($datos_estudiantes_YUT); 

mysqli_close($enlace);


?>









<br>



<div style="border: 1px solid SteelBlue;" class="card">

<h3 style="color:DarkSlateGray;" class="ml-1 mt-1"> - Representados:</h3>

<table style="background-color: #F9F7F7;" class="table table-bordered table-sm">

 <thead>
    <tr>
      <th><i class="fas fa-user-graduate"></i> / <i class="fas fa-binoculars"></i></th>
      


      <th>1er Trimestre:</th>
      <th>2do Trimestre:</th>
      <th>3er Trimestre:</th>
      <th>4to Trimestre:</th>

      
      
    </tr>
  </thead>
  <tbody>

 <?php do{?>




    <tr>
     
  <td class="align-middle p-3" align="center">


<div class="mb-3">
<div class="form-row">
<div class="col-md-12"> <!--
<button type="button" class="btn btn-danger btn-sm btn-lg btn-block"
 data-toggle="modal"  data-target="#borrar_registro<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>">
                                                   <i class="fas fa-bomb"></i>&nbsp; Borrar Registro </button>  -->
</div>  <!-- este ultimo identifica cual modal abrir -->

</div>
</div>





<!-- ini modal borrar --> 
<div class="modal fade" id="borrar_registro<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-danger " id="exampleModalLabel">
        <i class="far fa-bell-slash fa-lg"></i> &nbsp;Alerta - Cuidado - Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

     
      <div class="modal-body">

<div class="form-row">
<div class="input-group col-lg-12 mb-2">


<p style="font-size: 22px;">Alumno: " <?php echo $row_datos_estudiantes_YUT['nombre_estu'];?>, <b><?php echo $row_datos_estudiantes_YUT['apellidos_estu'] ;?></b>. " </p> <br>


<p style="font-size: 18px;"> <b>Nota:</b> Esta acción no podrá ser revertida y es recomendable realizarlo solamente al iniciar un nuevo año escolar y tras previamente haber guardado el historial anterior de manera impresa.</p>

</div>




</div>



</div> <!-- cierre modal body -->
      <div class="modal-footer"> 

        <span style="color: red;"><b>Borrar el registro y el historial de pagos completamente? </b></span>&nbsp;&nbsp;

 <form method="post">

  <input name="id_del_registro" type="hidden" value="<?php echo $row_datos_estudiantes_YUT['id_pago']; ?>">

    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

    <button type="submit" name="eliminar_registro_alumno" class="btn btn-danger"
    value="<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>" > Borrar</button>

      </div>
      </form>

    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 



















<?php

$el_id_del_pago_es =  $row_datos_estudiantes_YUT['id_pago'];


include("../conectar.php");

              $querymod9 = "SELECT * FROM reg_pagos where id_pago = '$el_id_del_pago_es' ";

              $datos_mod9 = mysqli_query($enlace, $querymod9) or die(mysqli_error());
              
              $row_datos_mod9 = mysqli_fetch_array($datos_mod9);
                         
              mysqli_close($enlace);   

?>


                        
                         <img id="myImg" src="<?php echo $row_datos_estudiantes_YUT['foto_estu']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio5.jpg';" width="102px" /> <br>

                  <?php echo $row_datos_estudiantes_YUT['apellidos_estu'];?>,<br><b><?php echo $row_datos_estudiantes_YUT['nombre_estu'];  ?></b><br>
                    <?php echo $row_datos_estudiantes_YUT['nombre_grados'];?> - "<b><?php echo $row_datos_estudiantes_YUT['nombre_seccion'];?></b>"

<br>


<form method="post">

  <input name="id_del_registro" type="hidden" value="<?php echo $row_datos_estudiantes_YUT['id_pago']; ?>">


<div class="input-group input-group-sm border border-success mb-1 mt-2">
  <div class="input-group-prepend ">
    <span class="input-group-text alert-success" id="basic-addon1"><b>Ciclo:</b></span>
  </div>
  <input maxlength="14" type="text" class="form-control" name="ciclo" value="<?php echo $row_datos_mod9['en_el_ciclo']; ?>">
</div>


<div class="input-group input-group-sm mb-4">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success">Observ.</span>
  </div>
  <textarea maxlength="159" class="form-control" aria-label="With textarea" name="nota_prin"><?php echo $row_datos_mod9['nota_principal']; ?></textarea>
</div>









<div class="input-group input-group-sm border border-success mb-1 mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success"><b>Inscripción</b>&nbsp; <i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text"  class="form-control" name="monto_ins"  
   value="<?php echo $row_datos_mod9['Inscripcion']; ?>"  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >
 
</div>






        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control" name="fecha_ins" value="<?php echo $row_datos_mod9['fecha_pago_ins']; ?>">
        </div>



        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control" name="recibo_ins" value="<?php echo $row_datos_mod9['recibo_pago_insc']; ?>">
</div>

<div class="input-group input-group-sm  mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success"><i class="far fa-comment-alt"></i></span>
  </div>
  <textarea maxlength="159" class="form-control" aria-label="With textarea" name="nota_ins"><?php echo $row_datos_mod9['nota_insc']; ?></textarea>
</div>

<br>

<div class="mb-4">
<div class="form-row">
<div class="col-md-12">
<button type="submit" name="save_ins" class="btn btn-success btn-sm btn-lg btn-block"><i class="fas fa-hdd"></i>&nbsp; Guardar - Actualizar</button>
</div>

</form>

</div>
</div>



                      </td>

                    

                      

                      <td class="align-middle p-3" align="center">
                        
<form method="post">

  <input name="id_del_registro" type="hidden" value="<?php echo $row_datos_estudiantes_YUT['id_pago']; ?>">



<div class="input-group input-group-sm border border-warning mb-1 mt-3">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning"><b><?php echo $primer_pago; ?></b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="1er_pago" value="<?php echo $row_datos_mod9['1er_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >
 
</div>


        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="1er_abono" value="<?php echo $row_datos_mod9['abono_1er']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_1er_pago"  value="<?php echo $row_datos_mod9['fecha_1er_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_1er_pago" value="<?php echo $row_datos_mod9['recibo_1er_pago']; ?>">
</div>



<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-warning" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_1er" name="mod_forma_1er">

<option value="<?php echo $row_datos_mod9['forma_1er']; ?>" selected><?php echo $row_datos_mod9['forma_1er']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>
  </select>
</div>




 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_1er_pago" value="<?php echo $row_datos_mod9['num_trans_1er']; ?>">

  <div class="input-group-append">
    <button class="btn btn-primary" type="button"><i class="fas fa-print"></i></button>
  </div>


</div>







<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: gold; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="input-group input-group-sm border border-warning  mb-1 mt-3">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning"><b><?php echo $segundo_pago; ?></b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="2do_pago" value="<?php echo $row_datos_mod9['2do_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >
  
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="2do_abono" value="<?php echo $row_datos_mod9['abono_2do']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_2do_pago" value="<?php echo $row_datos_mod9['fecha_2do_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_2do_pago" value="<?php echo $row_datos_mod9['recibo_2do_pago']; ?>">
</div>






<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-warning" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_2do" name="mod_forma_2do">

<option value="<?php echo $row_datos_mod9['forma_2do']; ?>" selected><?php echo $row_datos_mod9['forma_2do']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>
  </select>
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_2do_pago" value="<?php echo $row_datos_mod9['num_trans_2do']; ?>">

  <div class="input-group-append">
    <button class="btn btn-primary" type="button"><i class="fas fa-print"></i></button>
  </div>


</div>








<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: gold; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="input-group input-group-sm border border-warning mb-1 mt-3">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning"><b><?php echo $tercero_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="3er_pago" value="<?php echo $row_datos_mod9['3er_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >
  
</div>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="3er_abono" value="<?php echo $row_datos_mod9['abono_3er']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_3er_pago"  value="<?php echo $row_datos_mod9['fecha_3er_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_3er_pago" value="<?php echo $row_datos_mod9['recibo_3er_pago']; ?>">
</div>




<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-warning" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_3er" name="mod_forma_3er">

<option value="<?php echo $row_datos_mod9['forma_3er']; ?>" selected><?php echo $row_datos_mod9['forma_3er']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>
  </select>
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_3er_pago" value="<?php echo $row_datos_mod9['num_trans_3er']; ?>">

  <div class="input-group-append">
    <button class="btn btn-primary" type="button"><i class="fas fa-print"></i></button>
  </div>


</div>


<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: gold; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="input-group input-group-sm  mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning"><i class="far fa-comment-alt"></i></span>
  </div>
  <textarea maxlength="159" class="form-control" aria-label="With textarea" name="nota_1er_tri"><?php echo $row_datos_mod9['1er_trim_nota']; ?></textarea>
</div>


<br>


<div class="input-group input-group-sm border border-warning mb-3 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning"><b><?php echo $especial_primero; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="pago_especial_1" value="<?php echo $row_datos_mod9['especial_1']; ?>" placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' "    >
  
</div>




<div class="mb-4">
<div class="form-row">
<div class="col-md-12">
<button type="submit" name="save_1er_tri" class="btn btn-sm btn-warning btn-lg btn-block"><i class="fas fa-hdd"></i>&nbsp; Guardar - Actualizar</button>
</div>

</form>




</div>
</div>





                      </td>















                      <td class="align-middle p-3" align="center">
   
   <form method="post">

  <input name="id_del_registro" type="hidden" value="<?php echo $row_datos_estudiantes_YUT['id_pago']; ?>">
                     

<div class="input-group input-group-sm border border-info mb-1 mt-3">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info"><b><?php echo $cuarto_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="4to_pago" value="<?php echo $row_datos_mod9['4to_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' ">
 
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="4to_abono" value="<?php echo $row_datos_mod9['abono_4to']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_4to_pago" value="<?php echo $row_datos_mod9['fecha_4to_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_4to_pago" value="<?php echo $row_datos_mod9['recibo_4to_pago']; ?>">
</div>



<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-info" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_4to" name="mod_forma_4to">

<option value="<?php echo $row_datos_mod9['forma_4to']; ?>" selected><?php echo $row_datos_mod9['forma_4to']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>
  </select>
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_4to_pago" value="<?php echo $row_datos_mod9['num_trans_4to']; ?>">

  <div class="input-group-append">
    <button class="btn btn-primary" type="button"><i class="fas fa-print"></i></button>
  </div>


</div>


<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: RoyalBlue; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="input-group input-group-sm border border-info mb-1 mt-3">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info"><b><?php echo $quinto_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="5to_pago" value="<?php echo $row_datos_mod9['5to_pago']; ?>" placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' ">
  
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="5to_abono" value="<?php echo $row_datos_mod9['abono_5to']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_5to_pago" value="<?php echo $row_datos_mod9['fecha_5to_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_5to_pago" value="<?php echo $row_datos_mod9['recibo_5to_pago']; ?>">
</div>


<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-info" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_5to" name="mod_forma_5to">

<option value="<?php echo $row_datos_mod9['forma_5to']; ?>" selected><?php echo $row_datos_mod9['forma_5to']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>
  </select>
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_5to_pago" value="<?php echo $row_datos_mod9['num_trans_5to']; ?>">

  <div class="input-group-append">
    <button class="btn btn-primary" type="button"><i class="fas fa-print"></i></button>
  </div>


</div>


<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: RoyalBlue; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="input-group input-group-sm border border-info mb-1 mt-3">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info"><b><?php echo $sexto_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="6to_pago" value="<?php echo $row_datos_mod9['6to_pago']; ?>" placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' ">
  
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="6to_abono" value="<?php echo $row_datos_mod9['abono_6to']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_6to_pago" value="<?php echo $row_datos_mod9['fecha_6to_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_6to_pago" value="<?php echo $row_datos_mod9['recibo_6to_pago']; ?>">
</div>



<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-info" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_6to" name="mod_forma_6to">

<option value="<?php echo $row_datos_mod9['forma_6to']; ?>" selected><?php echo $row_datos_mod9['forma_6to']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>
  </select>
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_6to_pago" value="<?php echo $row_datos_mod9['num_trans_6to']; ?>">

  <div class="input-group-append">
    <button class="btn btn-primary" type="button"><i class="fas fa-print"></i></button>
  </div>


</div>



<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: RoyalBlue; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="input-group input-group-sm  mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info"><i class="far fa-comment-alt"></i></span>
  </div>
  <textarea maxlength="159" class="form-control" aria-label="With textarea" name="nota_2do_tri"><?php echo $row_datos_mod9['2do_trim_nota']; ?></textarea>
</div>


<br>


<div class="input-group input-group-sm border border-info mb-3 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info"><b><?php echo $especial_segundo; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="pago_especial_2" value="<?php echo $row_datos_mod9['especial_2']; ?>" placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' "  >
  
</div>


<div class="mb-4">
<div class="form-row">
<div class="col-md-12">
<button type="submit" name="save_2do_tri" class="btn btn-sm btn-info btn-lg btn-block"><i class="fas fa-hdd"></i>&nbsp; Guardar  - Actualizar</button>
</div>

</form>




</div>
</div>





                      </td>









                      <td class="align-middle p-3" align="center">
                        
<form method="post">

  <input name="id_del_registro" type="hidden" value="<?php echo $row_datos_estudiantes_YUT['id_pago']; ?>">



<div class="input-group input-group-sm border border-warning mb-1 mt-3">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning"><b><?php echo $septimo_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="7mo_pago" value="<?php echo $row_datos_mod9['7mo_pago']; ?>"  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >
 
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="7mo_abono" value="<?php echo $row_datos_mod9['abono_7mo']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_7mo_pago" value="<?php echo $row_datos_mod9['fecha_7mo_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_7mo_pago" value="<?php echo $row_datos_mod9['recibo_7mo_pago']; ?>">
</div>



<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-warning" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_7mo" name="mod_forma_7mo">

<option value="<?php echo $row_datos_mod9['forma_7mo']; ?>" selected><?php echo $row_datos_mod9['forma_7mo']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>
  </select>
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_7mo_pago" value="<?php echo $row_datos_mod9['num_trans_7mo']; ?>">

  <div class="input-group-append">
    <button class="btn btn-primary" type="button"><i class="fas fa-print"></i></button>
  </div>


</div>



<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: gold; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="input-group input-group-sm border border-warning mb-1 mt-3">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning"><b><?php echo $octavo_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="8vo_pago" value="<?php echo $row_datos_mod9['8vo_pago']; ?>"  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' ">
  
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="8vo_abono" value="<?php echo $row_datos_mod9['abono_8vo']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning "><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_8vo_pago" value="<?php echo $row_datos_mod9['fecha_8vo_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_8vo_pago" value="<?php echo $row_datos_mod9['recibo_8vo_pago']; ?>">
</div>



<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-warning" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_8vo" name="mod_forma_8vo">

<option value="<?php echo $row_datos_mod9['forma_8vo']; ?>" selected><?php echo $row_datos_mod9['forma_8vo']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>
  </select>
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_8vo_pago" value="<?php echo $row_datos_mod9['num_trans_8vo']; ?>">

  <div class="input-group-append">
    <button class="btn btn-primary" type="button"><i class="fas fa-print"></i></button>
  </div>


</div>



<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: gold; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="input-group input-group-sm border border-warning mb-1 mt-3">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning"><b><?php echo $noveno_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="9no_pago" value="<?php echo $row_datos_mod9['9no_pago']; ?>"  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' "  >
  
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="9no_abono" value="<?php echo $row_datos_mod9['abono_9no']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_9no_pago" value="<?php echo $row_datos_mod9['fecha_9no_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_9no_pago" value="<?php echo $row_datos_mod9['recibo_9no_pago']; ?>">
</div>




<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-warning" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_9no" name="mod_forma_9no">

<option value="<?php echo $row_datos_mod9['forma_9no']; ?>" selected><?php echo $row_datos_mod9['forma_9no']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>
  </select>
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_9no_pago" value="<?php echo $row_datos_mod9['num_trans_9no']; ?>">

  <div class="input-group-append">
    <button class="btn btn-primary" type="button"><i class="fas fa-print"></i></button>
  </div>


</div>



<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: gold; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="input-group input-group-sm  mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning"><i class="far fa-comment-alt"></i></span>
  </div>
  <textarea maxlength="159" class="form-control" aria-label="With textarea" name="nota_3er_tri"><?php echo $row_datos_mod9['3er_trim_nota']; ?></textarea>
</div>


<br>


<div class="input-group input-group-sm border border-warning mb-3 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning"><b><?php echo $especial_tercero; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="pago_especial_3" value="<?php echo $row_datos_mod9['especial_3']; ?>"  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' "  >
  
</div>


<div class="mb-4">
<div class="form-row">
<div class="col-md-12">
<button type="submit" name="save_3er_tri" class="btn btn-sm btn-warning btn-lg btn-block"><i class="fas fa-hdd"></i>&nbsp; Guardar  - Actualizar</button>
</div>

</form>




</div>
</div>





                      </td>





                      <td class="align-middle p-3" align="center">

                        <form method="post">

  <input name="id_del_registro" type="hidden" value="<?php echo $row_datos_estudiantes_YUT['id_pago']; ?>">



                        
<div class="input-group input-group-sm border border-info mb-1 mt-3">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info"><b><?php echo $decimo_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="10m_pago" value="<?php echo $row_datos_mod9['10m_pago']; ?>"  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' ">
 
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="10m_abono" value="<?php echo $row_datos_mod9['abono_10m']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_10m_pago" value="<?php echo $row_datos_mod9['fecha_10m_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_10m_pago" value="<?php echo $row_datos_mod9['recibo_10m_pago']; ?>">
</div>



<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-info" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_10m" name="mod_forma_10m">

<option value="<?php echo $row_datos_mod9['forma_10m']; ?>" selected><?php echo $row_datos_mod9['forma_10m']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>
  </select>
</div>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_10m_pago" value="<?php echo $row_datos_mod9['num_trans_10m']; ?>">

  <div class="input-group-append">
    <button class="btn btn-primary" type="button"><i class="fas fa-print"></i></button>
  </div>


</div>




<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: RoyalBlue; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="input-group input-group-sm border border-info mb-1 mt-3">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info"><b><?php echo $onceavo_pago; ?>  </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="11o_pago" value="<?php echo $row_datos_mod9['11o_pago']; ?>"   placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' "  >
  
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="11o_abono" value="<?php echo $row_datos_mod9['abono_11o']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_11o_pago" value="<?php echo $row_datos_mod9['fecha_11o_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_11o_pago" value="<?php echo $row_datos_mod9['recibo_11o_pago']; ?>">
</div>



<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-info" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_11o" name="mod_forma_11o">

<option value="<?php echo $row_datos_mod9['forma_11o']; ?>" selected><?php echo $row_datos_mod9['forma_11o']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>
  </select>
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_11o_pago" value="<?php echo $row_datos_mod9['num_trans_11o']; ?>">

  <div class="input-group-append">
    <button class="btn btn-primary" type="button"><i class="fas fa-print"></i></button>
  </div>


</div>


<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: RoyalBlue; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="input-group input-group-sm border border-info mb-1 mt-3">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info"><b><?php echo $doceavo_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="12o_pago" value="<?php echo $row_datos_mod9['12o_pago']; ?>"   placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' "   >
  
</div>



 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="12o_abono" value="<?php echo $row_datos_mod9['abono_12o']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_12o_pago" value="<?php echo $row_datos_mod9['fecha_12o_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_12o_pago" value="<?php echo $row_datos_mod9['recibo_12o_pago']; ?>">
</div>



<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-info" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_12o" name="mod_forma_12o">

<option value="<?php echo $row_datos_mod9['forma_12o']; ?>" selected><?php echo $row_datos_mod9['forma_12o']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>
  </select>
</div>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_12o_pago" value="<?php echo $row_datos_mod9['num_trans_12o']; ?>">

  <div class="input-group-append">
    <button class="btn btn-primary" type="button"><i class="fas fa-print"></i></button>
  </div>


</div>



<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: RoyalBlue; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="input-group input-group-sm  mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info"><i class="far fa-comment-alt"></i></span>
  </div>
  <textarea maxlength="159" class="form-control" aria-label="With textarea" name="nota_4to_tri" ><?php echo $row_datos_mod9['4to_trim_nota']; ?></textarea>
</div>


<br>

<div class="input-group input-group-sm border border-info mb-3 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info"><b><?php echo $especial_cuarto; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="pago_especial_4" value="<?php echo $row_datos_mod9['especial_4']; ?>"   placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' "     >
  
</div>



<div class="mb-4">
<div class="form-row">
<div class="col-md-12">
<button type="submit" name="save_4to_tri"  class="btn btn-sm btn-info btn-lg btn-block"><i class="fas fa-hdd"></i>&nbsp; Guardar  - Actualizar</button>
</div>

</form>





</div>
</div>





                      </td>

                      



    </tr>


 <?php } while ($row_datos_estudiantes_YUT = mysqli_fetch_assoc($datos_estudiantes_YUT)); ?>
   
  </tbody>

</table>

</div>







<script type="text/javascript">


  
function stripspaces(input)
{
  input.value = input.value.replace(/(^[\s]+|[\s]+$)/g, '');

  return true;
}



</script>











<?php include ("Footer.php"); ?>






