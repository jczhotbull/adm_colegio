<?php
error_reporting(0);

include("identificador.php");

$exitoZww = "";

$nnn1 = $nnn['ci'];


$el_cicloXX = $_GET['ciclo'];
$el_gradoXX = $_GET['grado'];
$la_seccionXX = $_GET['la_seccion'];
$tituloJKL = $_GET['tituloJKL'];



include("../conectar.php");



$queryperiodo_act1 = "SELECT * FROM temporada_escolar WHERE id_periodo_es = $el_cicloXX limit 1";
$datos_periodo_act1 = mysqli_query($enlace, $queryperiodo_act1) or die(mysqli_error());
$row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1);



mysqli_close($enlace);  














$i = 1;




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







 if(isset($_POST['becar_alumno']))
        {  
$id_estudiii = $_POST['id_estudiii'];
include("../conectar.php");
$query_d = "INSERT INTO extra_catedra (id_estud, id_area, obs_catedra) 
              VALUES ( '$id_estudiii', '88', '".mysqli_real_escape_string($enlace,$_POST['obs_beca'])."' )";
if (!mysqli_query($enlace,$query_d))  // si no logro ingresar la direccion...
      {
      $errorZ.="- &nbsp; Error, No se logro Becar!!! &nbsp ";     
      mysqli_close($enlace);       
      }
else {
$exitoZ.="- &nbsp; Estudiante Becado!!! &nbsp ";     
      mysqli_close($enlace);
}
        }


 if(isset($_POST['delete_beca_alumno']))
        {
$id_estudiii = $_POST['id_estudiii'];
include("../conectar.php");
$querydeleteee_cat = "DELETE FROM extra_catedra WHERE id_estud = '$id_estudiii' and id_area = '88' ";

if (!mysqli_query($enlace,$querydeleteee_cat))  // si no logro ingresar la direccion...
      {
      $errorZ.="- &nbsp; Error, No se logro Eliminar La Beca!!! &nbsp ";     
      mysqli_close($enlace);       
      }
else {
$exitoZ.="- &nbsp; Beca Eliminada!!! &nbsp ";     
      mysqli_close($enlace); 
}
        }


 if(isset($_POST['mod_beca_alumno']))  
        {
$id_estudiii = $_POST['id_estudiii'];
$mod_obs_beca = $_POST['mod_obs_beca'];
include("../conectar.php");
    $query_upd_beca = "UPDATE extra_catedra
                                            set obs_catedra = '$mod_obs_beca'                                            
                            WHERE id_estud = '$id_estudiii' and id_area = '88' ";
if (!mysqli_query($enlace,$query_upd_beca))  // si no logro ingresar la direccion...
      {
      $errorZ.="- &nbsp; Error, Observaciones de la Beca No Actualizadas! &nbsp ";     
      mysqli_close($enlace);       
      }
else {
$exitoZ.="- &nbsp; Observaciones de la Beca Actualizadas! &nbsp ";     
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










if(isset($_POST['editar_insc']))
        {

$abono_ins = $_POST['abono_ins'];
$fecha_abono_ins = $_POST['fecha_abono_ins'];
$recibo_abono_ins = $_POST['recibo_abono_ins'];

$mod_forma_abono_ins = $_POST['mod_forma_abono_ins'];
$mod_num_trans_abono_insc = $_POST['mod_num_trans_abono_insc'];

$dicho_idee = $_POST['id_estu'];

$forma_ins = $_POST['mod_forma_ins'];
$fecha_ins = $_POST['fecha_ins'];
$dicho_id = $_POST['id_del_registro'];



$valor_insc = $_POST['valor_insc'];
$id_quien = $_POST['id_quien'];
$id_quien_actual = $_POST['id_quien_actual'];
$nuevo_ins = $_POST['monto_ins'];


if ($valor_insc != $nuevo_ins  ) {
  $procesado_por =  $id_quien_actual;
}

else {
  $procesado_por = $id_quien;
}

include("../conectar.php");


$querydatow = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_ins'])."' LIMIT 1";
$resultdatow = mysqli_query($enlace,$querydatow);

    if (mysqli_num_rows($resultdatow)>0)
      {
       $errorZ="El número de recibo de Inscripción esta restringido.";
      }


          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                 mysqli_close($enlace);            
              }

 
            else  {  


$sql = "UPDATE reg_pagos SET nota_principal = '".mysqli_real_escape_string($enlace,$_POST['nota_prin'])."'   ,
                             en_el_ciclo = '".mysqli_real_escape_string($enlace,$_POST['ciclo'])."'   ,
                             Inscripcion = '".mysqli_real_escape_string($enlace,$_POST['monto_ins'])."'   ,
                             fecha_pago_ins = '$fecha_ins'   ,
                             recibo_pago_insc = '".mysqli_real_escape_string($enlace,$_POST['recibo_ins'])."'   ,

                              forma_insc = '$forma_ins'   ,
                             num_trans_insc = '".mysqli_real_escape_string($enlace,$_POST['mod_num_trans_insc'])."'   ,
                             
                             nota_insc = '".mysqli_real_escape_string($enlace,$_POST['nota_ins'])."' 

                              ,ins_quien = '$procesado_por' ,

                                     abono_ins = '$abono_ins'   ,
                               fecha_abono_ins = '$fecha_abono_ins'   ,
                              recibo_abono_ins = '$recibo_abono_ins'  ,
                               forma_abono_insc = '$mod_forma_abono_ins'   ,
                              num_trans_abono_insc = '$mod_num_trans_abono_insc' 

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
                     $exitoZ = "Registro de Inscripción Actualizado &nbsp;"; 

                     //  $exitoZ = "Registro de Inscripción Actualizado &nbsp;<b>" .$dicho_idee. " </b> - " .$dicho_id. " ."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
       }
         }











 if(isset($_POST['editar_1er']))
        {

$fecha_1er_pago = $_POST['fecha_1er_pago'];
$fecha_2do_pago = $_POST['fecha_2do_pago'];
$fecha_3er_pago = $_POST['fecha_3er_pago'];

$forma_1er = $_POST['mod_forma_1er'];
$forma_2do = $_POST['mod_forma_2do'];
$forma_3er = $_POST['mod_forma_3er'];



$valor_1er_pago = $_POST['1err_pago'];
$valor_2do_pago = $_POST['2doo_pago'];
$valor_3er_pago = $_POST['3err_pago'];

$id_1er_quien = $_POST['1er_quien'];
$id_2do_quien = $_POST['2do_quien'];
$id_3er_quien = $_POST['3er_quien'];


$id_quien_actual = $_POST['id_quien_actual'];

$nuevo_1er_pago = $_POST['1er_pago'];
$nuevo_2do_pago = $_POST['2do_pago'];
$nuevo_3er_pago = $_POST['3er_pago'];


if ($valor_1er_pago != $nuevo_1er_pago  ) {
  $procesado_por1 =  $id_quien_actual;
}

else {
  $procesado_por1 = $id_1er_quien;
}


if ($valor_2do_pago != $nuevo_2do_pago  ) {
  $procesado_por2 =  $id_quien_actual;
}

else {
  $procesado_por2 = $id_2do_quien;
}


if ($valor_3er_pago != $nuevo_3er_pago  ) {
  $procesado_por3 =  $id_quien_actual;
}

else {
  $procesado_por3 = $id_3er_quien;
}



$dicho_id = $_POST['id_del_registro'];

include("../conectar.php");




$querydatowa = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_1er_pago'])."' LIMIT 1";
$resultdatowa = mysqli_query($enlace,$querydatowa);

$querydatowb = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_2do_pago'])."' LIMIT 1";
$resultdatowb = mysqli_query($enlace,$querydatowb);

$querydatowc = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_3er_pago'])."' LIMIT 1";
$resultdatowc = mysqli_query($enlace,$querydatowc);

    if (mysqli_num_rows($resultdatowa)>0)
      {
       $errorZ="El número de recibo 1er Pago esta restringido.";
      }


          if (mysqli_num_rows($resultdatowb)>0)
      {
       $errorZ="El número de recibo 2do Pago esta restringido.";
      }


          if (mysqli_num_rows($resultdatowc)>0)
      {
       $errorZ="El número de recibo 3er Pago esta restringido.";
      }


          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                 mysqli_close($enlace);            
              }

 
            else  {  





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


                             ,1er_quien = '$procesado_por1',
                             2do_quien = '$procesado_por2',
                            3er_quien = '$procesado_por3'

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
         }







 if(isset($_POST['editar_2do']))
        {

$fecha_4to_pago = $_POST['fecha_4to_pago'];
$fecha_5to_pago = $_POST['fecha_5to_pago'];
$fecha_6to_pago = $_POST['fecha_6to_pago'];


$forma_4to = $_POST['mod_forma_4to'];
$forma_5to = $_POST['mod_forma_5to'];
$forma_6to = $_POST['mod_forma_6to'];

$dicho_id = $_POST['id_del_registro'];


$valor_4to_pago = $_POST['4too_pago'];
$valor_5to_pago = $_POST['5too_pago'];
$valor_6to_pago = $_POST['6too_pago'];

$id_4to_quien = $_POST['4to_quien'];
$id_5to_quien = $_POST['5to_quien'];
$id_6to_quien = $_POST['6to_quien'];


$id_quien_actual = $_POST['id_quien_actual'];

$nuevo_4to_pago = $_POST['4to_pago'];
$nuevo_5to_pago = $_POST['5to_pago'];
$nuevo_6to_pago = $_POST['6to_pago'];


if ($valor_4to_pago != $nuevo_4to_pago  ) {
  $procesado_por4 =  $id_quien_actual;
}

else {
  $procesado_por4 = $id_4to_quien;
}


if ($valor_5to_pago != $nuevo_5to_pago  ) {
  $procesado_por5 =  $id_quien_actual;
}

else {
  $procesado_por5 = $id_5to_quien;
}


if ($valor_6to_pago != $nuevo_6to_pago  ) {
  $procesado_por6 =  $id_quien_actual;
}

else {
  $procesado_por6 = $id_6to_quien;
}


include("../conectar.php");




$querydatowd = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_4to_pago'])."' LIMIT 1";
$resultdatowd = mysqli_query($enlace,$querydatowd);

$querydatowe = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_5to_pago'])."' LIMIT 1";
$resultdatowe = mysqli_query($enlace,$querydatowe);

$querydatowf = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_6to_pago'])."' LIMIT 1";
$resultdatowf = mysqli_query($enlace,$querydatowf);

    if (mysqli_num_rows($resultdatowd)>0)
      {
       $errorZ="El número de recibo 4to Pago esta restringido.";
      }


          if (mysqli_num_rows($resultdatowe)>0)
      {
       $errorZ="El número de recibo 5to Pago esta restringido.";
      }


          if (mysqli_num_rows($resultdatowf)>0)
      {
       $errorZ="El número de recibo 6to Pago esta restringido.";
      }


          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                 mysqli_close($enlace);            
              }

 
            else  {  


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

                             ,4to_quien = '$procesado_por4',
                             5to_quien = '$procesado_por5',
                             6to_quien = '$procesado_por6'

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
         }





 if(isset($_POST['editar_3er']))
        {

$fecha_7mo_pago = $_POST['fecha_7mo_pago'];
$fecha_8vo_pago = $_POST['fecha_8vo_pago'];
$fecha_9no_pago = $_POST['fecha_9no_pago'];

$forma_7mo = $_POST['mod_forma_7mo'];
$forma_8vo = $_POST['mod_forma_8vo'];
$forma_9no = $_POST['mod_forma_9no'];

$dicho_id = $_POST['id_del_registro'];


$valor_7mo_pago = $_POST['7moo_pago'];
$valor_8vo_pago = $_POST['8voo_pago'];
$valor_9no_pago = $_POST['9noo_pago'];

$id_7mo_quien = $_POST['7mo_quien'];
$id_8vo_quien = $_POST['8vo_quien'];
$id_9no_quien = $_POST['9no_quien'];


$id_quien_actual = $_POST['id_quien_actual'];

$nuevo_7mo_pago = $_POST['7mo_pago'];
$nuevo_8vo_pago = $_POST['8vo_pago'];
$nuevo_9no_pago = $_POST['9no_pago'];


if ($valor_7mo_pago != $nuevo_7mo_pago  ) {
  $procesado_por7 =  $id_quien_actual;
}

else {
  $procesado_por7 = $id_7mo_quien;
}


if ($valor_8vo_pago != $nuevo_8vo_pago  ) {
  $procesado_por8 =  $id_quien_actual;
}

else {
  $procesado_por8 = $id_8vo_quien;
}


if ($valor_9no_pago != $nuevo_9no_pago  ) {
  $procesado_por9 =  $id_quien_actual;
}

else {
  $procesado_por9 = $id_9no_quien;
}

include("../conectar.php");




$querydatowg = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_7mo_pago'])."' LIMIT 1";
$resultdatowg = mysqli_query($enlace,$querydatowg);

$querydatowh = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_8vo_pago'])."' LIMIT 1";
$resultdatowh = mysqli_query($enlace,$querydatowh);

$querydatowi = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_9no_pago'])."' LIMIT 1";
$resultdatowi = mysqli_query($enlace,$querydatowi);

    if (mysqli_num_rows($resultdatowg)>0)
      {
       $errorZ="El número de recibo 7mo Pago esta restringido.";
      }


          if (mysqli_num_rows($resultdatowh)>0)
      {
       $errorZ="El número de recibo 8vo Pago esta restringido.";
      }


          if (mysqli_num_rows($resultdatowi)>0)
      {
       $errorZ="El número de recibo 9no Pago esta restringido.";
      }


          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                 mysqli_close($enlace);            
              }

 
            else  {  

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

                             ,7mo_quien = '$procesado_por7',
                             8vo_quien = '$procesado_por8',
                             9no_quien = '$procesado_por9'

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
         }






 if(isset($_POST['editar_4to']))
        {

$fecha_10m_pago = $_POST['fecha_10m_pago'];
$fecha_11o_pago = $_POST['fecha_11o_pago'];
$fecha_12o_pago = $_POST['fecha_12o_pago'];


$forma_10m = $_POST['mod_forma_10m'];
$forma_11o = $_POST['mod_forma_11o'];
$forma_12o = $_POST['mod_forma_12o'];

$dicho_id = $_POST['id_del_registro'];


$valor_10m_pago = $_POST['10mm_pago'];
$valor_11o_pago = $_POST['11oo_pago'];
$valor_12o_pago = $_POST['12oo_pago'];

$id_10m_quien = $_POST['10m_quien'];
$id_11o_quien = $_POST['11o_quien'];
$id_12o_quien = $_POST['12o_quien'];


$id_quien_actual = $_POST['id_quien_actual'];

$nuevo_10m_pago = $_POST['10m_pago'];
$nuevo_11o_pago = $_POST['11o_pago'];
$nuevo_12o_pago = $_POST['12o_pago'];


if ($valor_10m_pago != $nuevo_10m_pago  ) {
  $procesado_por10 =  $id_quien_actual;
}

else {
  $procesado_por10 = $id_10m_quien;
}


if ($valor_11o_pago != $nuevo_11o_pago  ) {
  $procesado_por11 =  $id_quien_actual;
}

else {
  $procesado_por11 = $id_11o_quien;
}


if ($valor_12o_pago != $nuevo_12o_pago  ) {
  $procesado_por12 =  $id_quien_actual;
}

else {
  $procesado_por12 = $id_12o_quien;
}

include("../conectar.php");



$querydatowj = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_10m_pago'])."' LIMIT 1";
$resultdatowj = mysqli_query($enlace,$querydatowj);

$querydatowk = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_11o_pago'])."' LIMIT 1";
$resultdatowk = mysqli_query($enlace,$querydatowk);

$querydatowl = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_12o_pago'])."' LIMIT 1";
$resultdatowl = mysqli_query($enlace,$querydatowl);

    if (mysqli_num_rows($resultdatowj)>0)
      {
       $errorZ="El número de recibo 10mo Pago esta restringido.";
      }


          if (mysqli_num_rows($resultdatowk)>0)
      {
       $errorZ="El número de recibo 11avo Pago esta restringido.";
      }


          if (mysqli_num_rows($resultdatowl)>0)
      {
       $errorZ="El número de recibo 12avo Pago esta restringido.";
      }


          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                 mysqli_close($enlace);            
              }

 
            else  {  



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

                              ,10m_quien = '$procesado_por10',
                             11o_quien = '$procesado_por11',
                             12o_quien = '$procesado_por12'

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
                             num_trans_insc = NULL,

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






 if(isset($_POST['calulalo_fast']))
        { 

$mes_es     = $_POST['mensualidad'];

$por_cuanto = $_POST['calcufast'];

$ivalli = $_POST['el_iva_es'];

$tasita = $_POST['la_tasa'];



$multi_iva = $ivalli/100;

$total_es = $mes_es * $por_cuanto;

$el_iva = $total_es *  $multi_iva ;

$parcial =  $total_es-$el_iva;

$taseable = $total_es / $tasita;


$format_tasa = number_format("$taseable",2,",",".");


$format_parcial = number_format("$parcial",2,",",".");

$format_iva = number_format("$el_iva",2,",",".");

$format_total = number_format("$total_es",2,",",".");


if ($ivalli == '00.00') {

$exitoZww = "&nbsp;&nbsp;&nbsp;<b>".$format_total."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"far fa-hand-point-right fa-lg\"></i>&nbsp;&nbsp;<b>".$format_tasa."</b>&nbsp;<i class=\"fas fa-dollar-sign fa-lg\" style=\"color:green;\"></i>";   

}


else {  


$exitoZww = "&nbsp;&nbsp;&nbsp;<b>".$format_parcial."</b>&nbsp;&nbsp;+&nbsp;&nbsp;".$format_iva."&nbsp;&nbsp;  <span style=\"color:blue; font-size:14px; \">(".$ivalli."<span style=\"color:black; \"><b>%</b></span>)</span>   &nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;<b>".$format_total."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"far fa-hand-point-right fa-lg\"></i>&nbsp;&nbsp;<b>".$format_tasa."</b>&nbsp;<i class=\"fas fa-dollar-sign fa-lg\" style=\"color:green;\"></i>";             
         }    }


        if ($exitoZww!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                              {
                                 $exitoZww = " <i class=\"fas fa-chart-line fa-lg\"></i> &nbsp; " . $exitoZww. " ";                              
                              }



?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/lista_control_ins_pagos.php"); ?>  <!-- ayuda a hacer el listado -->


<div class="se-pre-con"></div>


<div class="content-wrapper">
  <div class="container-fluid">


 <div class="form-row">  



      
<?php


include("../conectar.php");

$queryplantelH = "SELECT * FROM z_plantel LIMIT 1";

$datos_queryplantelH = mysqli_query($enlace, $queryplantelH) or die(mysqli_error());

$row_datos_queryplantelH = mysqli_fetch_array($datos_queryplantelH); 

 $pruebarr = $row_datos_queryplantelH['moneyuno'];
 $pruebarrdos = $row_datos_queryplantelH['moneydos'];


$format_monet = number_format("$pruebarr",2,",",".");
$format_monetdos = number_format("$pruebarrdos",2,",",".");



$iva_calculo = "SELECT * FROM iva LIMIT 1";

$datos_calculo = mysqli_query($enlace, $iva_calculo) or die(mysqli_error());

$row_datos_calculo = mysqli_fetch_array($datos_calculo); 

 $el_iva = $row_datos_calculo['cant_iva'];

mysqli_close($enlace);

     ?> 



<div class="col-md-4 col-lg-4 mb-2">

 <form method="post">    

 <input type="hidden" id="mensualidad"  name="mensualidad" value="<?php echo  $pruebarrdos; ?>">
 <input type="hidden" id="el_iva_es"  name="el_iva_es" value="<?php echo  $el_iva; ?>">

 <input type="hidden" id="la_tasa"  name="la_tasa" value="<?php echo  $pruebarr; ?>">



<div class="input-group input-group mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-dark" for="inputGroupSelectins"><b><?php echo $pruebarrdos; ?></b></label>
  </div>


<select class="form-control form-control" id="calcufast" name="calcufast">
    <option value="1">x1</option>
    <option value="2">x2</option>
    <option value="3">x3</option>
    <option value="4">x4</option>
    <option value="5">x5</option>
    <option value="6">x6</option>
    <option value="7">x7</option>
    <option value="8">x8</option>
    <option value="9">x9</option>
    <option value="10">x10</option>
    <option value="11">x11</option>
    <option value="12">x12</option>
</select>

<div class="input-group-append">
              <button type="submit" name="calulalo_fast" class="btn btn-dark"><i style="color:white;"><i class="fas fa-calculator fa-lg "></i></i></button>
</div>

</div> </form>

  </div> 






          <div class="col-md-8 col-lg-8 mb-2">


 <?php 
              if ($exitoZww!="")
              { echo "<div class=\"input-group-text alert-dark text-truncate\" role=\"basic-addon1\" role=\"alert\" align=\"center\">".$exitoZww."</div>"; }
            ?>


              

          </div> 



 </div> 







    <div class="form-row">  


          <div class="col-md-6 col-lg-6 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i><b><?php echo $tituloJKL; ?> &nbsp; -  &nbsp;&nbsp;&nbsp;<i class="fas fa-female"></i> : <?php echo $totalRows_controlF; ?>&nbsp;&nbsp; / &nbsp;&nbsp;&nbsp;<i class="fas fa-male"></i> : <?php echo $totalRows_controlM; ?></b> </i> - Ciclo Escolar:&nbsp; <b><?php echo $row_datos_periodo_act1['periodo_escolar']; ?></b> </div> 

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

   
<!-- 
  <div class="form-row ml-1">

<div data-toggle="tooltip" data-placement="top" title="Imprimir Lista" >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-primary mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=35){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Imprimir Lista" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-primary btn_sizes" <?php if ($totalRows_control<=34){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>



<div data-toggle="tooltip" data-placement="top" title="Listado con talla de prendas" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_cam_pant.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_oficio_cam_pant" id="imp_oficio_cam_pant" class="btn btn-info mr-1 mb-1 btn_sizes"  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-tshirt"></i>"</button>


</form></div>



<div data-toggle="tooltip" data-placement="top" title="Listado con todas las características" >
<form target="_blank" action="zzz_impresiones/imp_lista_oficio_todo.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_oficio_todo" id="imp_oficio_todo" class="btn btn-warning mr-1 mb-1 btn_sizes"  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-swatchbook"></i>"</button>


</form></div>



<div data-toggle="tooltip" data-placement="top" title="Listado con datos de alumnos y representante" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_horizontal.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_horizontal" id="imp_ofi_datos_horizontal" class="btn btn-dark mr-1 mb-1 btn_sizes"  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-tasks"></i>"</button>


</form></div>


<div data-toggle="tooltip" data-placement="top" title="Listado con datos importantes" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_plus.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_horizontal_plus" id="imp_ofi_datos_horizontal_plus" class="btn btn-success mr-1 mb-1 btn_sizes"  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-birthday-cake"></i> <i class="fas fa-phone"></i>"</button>


</form></div>



<div data-toggle="tooltip" data-placement="top" title="Listado para reuniones" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_reuniones.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_reuniones" id="imp_ofi_datos_reuniones" class="btn btn-secondary mr-1 mb-1 btn_sizes"  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-file-signature"></i>"</button>


</form></div>





<div data-toggle="tooltip" data-placement="top" title="Datos Medicos" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_medicos.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_medicos" id="imp_ofi_datos_medicos" class="btn btn-danger mr-1 mb-1 btn_sizes"  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-medkit"></i>"</button>


</form></div>




</div>    














        <div class="text-muted">El icono&nbsp;&nbsp;<span style="color:#FF8F00;"><i class="fab fa-r-project fa-lg"></i></span>&nbsp;&nbsp;
        indica que el alumno es repitiente.</div>   -->




  <div class="card mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-sm table-hover" id="dataTable" width="100%" cellspacing="0"  >
             
              <thead>
                <tr>
                  
                  <th>N°:</th>
                  <th>Alumno:</th>
                  
                  <th>Inscripción:</th>
                  <th>1er Trimestre:</th>
                  <th>2do Trimestre:</th>
                  <th>3er Trimestre:</th>
                  <th>4to Trimestre:</th>   
                  
                  
                  
                </tr>
              </thead>
                          
              
              <tbody>

                <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->


                <?php

$id_estxx1 = $row_datos_control['id_estud'];

include("../conectar.php");

 $remarcador = "SELECT obs_estud FROM obs_estu
              WHERE  id_estud = '$id_estxx1' limit 1   ";

$query_remarcador = mysqli_query($enlace, $remarcador);

$dato_remarcador = mysqli_fetch_array($query_remarcador); 

$la_obs = $dato_remarcador['obs_estud'];



$reg_estu_HOYx = "SELECT * FROM  edades, reg_estu_actual  
           WHERE edades.id_edad = reg_estu_actual.edad_actual
             and id_estud = '$id_estxx1'

             and el_activo = '1'
            ORDER BY id_reg_estu_actual DESC LIMIT 1";   // me selecciona el ultimo es decir el actual en curso

$q_reg_estu_HOYx = mysqli_query($enlace, $reg_estu_HOYx) or die(mysqli_error());

$r_d_reg_estu_HOYx = mysqli_fetch_array($q_reg_estu_HOYx); 





$reg_sobre = "SELECT proviene_de_otro, nombre_plantel_pro FROM reg_estu_sobre  
           WHERE  id_estud  = '$id_estxx1'";   //

$q_reg_sobreA = mysqli_query($enlace, $reg_sobre) or die(mysqli_error());

$r_d_reg_sobreD = mysqli_fetch_array($q_reg_sobreA);



 mysqli_close($enlace); 

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



                <tr style="background-color: <?php echo $bg_es;?>;">

              




    <td class="align-middle" align="center">
      
<?php


    echo $i;
    $i++;

    
  ?>



    </td>


    <?php
          $id_estxx1 = $row_datos_control['id_estud'];

          include("../conectar.php"); 

            $querymod_pre = "SELECT id_estud, id_reg_pagos, cursa_actualmente FROM reg_estu_actual
            where id_estud = '$id_estxx1'
            and cursa_actualmente = '$el_cicloXX' limit 1 ";

              $datos_mod_pre = mysqli_query($enlace, $querymod_pre) or die(mysqli_error());              
              $row_datos_mod_pre = mysqli_fetch_assoc($datos_mod_pre);
              $el_registro_de_pago_es =  $row_datos_mod_pre['id_reg_pagos'];





  $querymod9 = "SELECT * FROM reg_pagos where id_pago = '$el_registro_de_pago_es' limit 1 ";

              $datos_mod9 = mysqli_query($enlace, $querymod9) or die(mysqli_error());
              
              $row_datos_mod9 = mysqli_fetch_array($datos_mod9);
                         
              mysqli_close($enlace);   



?>


    <td class="align-middle" align="center">


<div class="col-md-12">  <!--
<button type="button" class="btn btn-danger btn-sm btn-lg btn-block"
 data-toggle="modal"  data-target="#borrar_registro<?php echo $row_datos_control['id_estud']; ?>">
      <i class="fas fa-bomb"></i>&nbsp; Borrar Registro </button>  -->

<?php
$este_es_el_dicho = $row_datos_control['id_estud'];
include("../conectar.php");
$buscar_todos_beca = "SELECT * FROM extra_catedra where id_estud = '$este_es_el_dicho' and id_area = '88' limit 1 "; 
$encuentralos_ya_beca = mysqli_query($enlace, $buscar_todos_beca) or die(mysqli_error()); 
$row_encuentralos_ya_beca = mysqli_fetch_array($encuentralos_ya_beca); 
$totalRows_findx_beca = mysqli_num_rows($encuentralos_ya_beca);
mysqli_close($enlace);  
 ?>


<span <?php if ( $totalRows_findx_beca >= 1 ){?>style="display:none"<?php } ?>   >
<button type="button" class="btn btn-primary btn-sm btn-lg btn-block"
 data-toggle="modal"  data-target="#pasar_a_becado<?php echo $row_datos_control['id_estud']; ?>">
                                                 <i class="far fa-laugh-wink fa-lg"></i>&nbsp; ¡ Becar ! </button></span>


<span <?php if ( $totalRows_findx_beca == 0 ){?>style="display:none"<?php } ?>   >
<button type="button" class="btn btn-primary btn-sm btn-lg btn-block"
 data-toggle="modal"  data-target="#mod_becado<?php echo $row_datos_control['id_estud']; ?>">
                                                 <i class="far fa-laugh-wink fa-lg"></i>&nbsp; ¡ Actualizar Beca ! </button></span>



</div>   <!-- este ultimo identifica cual modal abrir --> 






<!-- ini modal becar --> 
<div class="modal fade" id="pasar_a_becado<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-primary " id="exampleModalLabel">
        <i class="far fa-bell-slash fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>     
      <div class="modal-body">
<form method="post">
<div class="form-row">
<div class="input-group col-lg-12 mb-2">
<p style="font-size: 22px;">Alumno(a): " <?php echo $row_datos_control['nombre_estu'];?>, <b><?php echo $row_datos_control['apellidos_estu'] ;?></b>. " </p> <br>
</div>  

<h5>Observaciones:</h5> 
<input type="text" maxlength="149" class="form-control" id="obs_beca" name="obs_beca" rows="2" required>
</div>
</div> <!-- cierre modal body -->
      <div class="modal-footer">  
  <input name="id_estudiii" type="hidden" value="<?php echo $row_datos_control['id_estud']; ?>"> 
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="becar_alumno" class="btn btn-primary"
    value="<?php echo $row_datos_control['id_estud']; ?>" >Becar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 






<!-- ini modal editar --> 
<div class="modal fade" id="mod_becado<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-primary " id="exampleModalLabel">
        <i class="far fa-bell-slash fa-lg"></i> &nbsp;Modificar y/o Actualizar el estado del alumno(a)!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>     
      <div class="modal-body">
<form method="post">
<div class="form-row">
<div class="input-group col-lg-12 mb-2">

</div>  

<h5>Observaciones:</h5> 
<input type="text" maxlength="149" class="form-control" id="mod_obs_beca" name="mod_obs_beca" rows="2" value="<?php echo $row_encuentralos_ya_beca['obs_catedra']; ?>" required>
</div>
</div> <!-- cierre modal body -->
      <div class="modal-footer">  
  <input name="id_estudiii" type="hidden" value="<?php echo $row_datos_control['id_estud']; ?>"> 

    <button type="submit" name="delete_beca_alumno" class="btn btn-danger"
    value="<?php echo $row_datos_control['id_estud']; ?>" >Eliminar Beca</button>

    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>




    <button type="submit" name="mod_beca_alumno" class="btn btn-primary"
    value="<?php echo $row_datos_control['id_estud']; ?>" >Actualizar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 





<!-- ini modal borrar --> 
<div class="modal fade" id="borrar_registro<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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


<p style="font-size: 22px;">Alumno: " <?php echo$row_datos_control['nombre_estu'];?>, <b><?php echo $row_datos_control['apellidos_estu'] ;?></b>. " </p> <br>


<p style="font-size: 18px;"> <b>Nota:</b> Esta acción no podrá ser revertida y es recomendable realizarlo solamente al iniciar un nuevo año escolar y tras previamente haber guardado el historial anterior de manera impresa.</p>

</div>




</div>



<?php


$busqueda = $row_datos_control['ci_estu'];

include("../conectar.php");

      $query_busm = "SELECT * FROM reg_estu_repre_all, reg_representante, reg_estudiantes                        
         WHERE reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
        
         and reg_estudiantes.ci_estu = '$busqueda' limit 1 ";

$datos_plantilla_busm = mysqli_query($enlace, $query_busm) or die(mysqli_error());
$datos_plantilla_bus_resm = mysqli_fetch_assoc($datos_plantilla_busm);
$totalRows_datos_plantilla_busm = mysqli_num_rows($datos_plantilla_busm); 

          $el_id_esTTTm = $datos_plantilla_bus_resm['id_repre'];
          $idesitoxxxm= $row_datos_control['id_estud'];


$query_YUTm = "SELECT * FROM reg_estu_repre_all, reg_representante, secciones, reg_estu_actual, grados, reg_estudiantes 

         WHERE  reg_estu_repre_all.id_estu = reg_estudiantes.id_estud

         and reg_estu_repre_all.id_repre = reg_representante.id_repre

         and  secciones.id_seccion = reg_estu_actual.id_seccion
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  el_activo = '1'
         and reg_estu_repre_all.id_repre = '$el_id_esTTTm'
         and reg_estudiantes.id_estud = '$idesitoxxxm'
        
         limit 1 ";

$datos_estudiantes_YUTm = mysqli_query($enlace, $query_YUTm) or die(mysqli_error());

$row_datos_estudiantes_YUTm = mysqli_fetch_array($datos_estudiantes_YUTm); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estudiantes_YUTm = mysqli_num_rows($datos_estudiantes_YUTm); 

mysqli_close($enlace);


?>



</div> <!-- cierre modal body -->
      <div class="modal-footer"> 

        <span style="color: red;"><b>Borrar el registro y el historial de pagos ciclo:<span style="color: black;"> <?php echo $row_datos_periodo_act1['periodo_escolar']; ?></span>? </b></span>&nbsp;&nbsp;

 <form method="post">

  <input name="id_del_registro" type="hidden" value="<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>">

    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

    <button type="submit" name="eliminar_registro_alumno" class="btn btn-danger"
    value="<?php echo $row_datos_control['id_estud']; ?>" > Borrar  </button>

      </div>
      </form>

    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 






     <br>


      <img id="myImg" src="<?php echo $row_datos_control['foto_estu']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio5.jpg';" width="80px" />  <br><br>

       <?php  if ( $row_datos_control['retirado_si_o_no'] == '1') {
      $resultiBB = '<b><span style="color:purple;"> " RETIRADO " <i class="fas fa-hand-paper fa-lg"></i> </span></b>&nbsp;<br>'  ;
      
      echo $resultiBB;
    }   ?>

      <b><?php echo $row_datos_control['apellidos_estu'];?>,</b> <br> <?php echo $row_datos_control['nombre_estu']; $la_edad=$r_d_reg_estu_HOYx["nombre_edad"]; ?>. <br>

      <b><span style="color:#5b186d;">Ci: </span></b>
      <span style="color:#02158c;"><?php echo $row_datos_control['ci_estu'];?></span>
      <span style="color:#02158c;"><i class="far fa-hand-point-left"></i></span><br>


       <b>Edad:</b>   <?php  if ( $row_datos_control['id_sexo'] == '2') {
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

    <span style="color: #876DA0;"><i class="fas fa-birthday-cake"></i></span>  <?php echo $diaf; ?> de <?php echo $mf; ?>.<br><br>


<b><span style="color:#c20a6c;">Ci Repre: </span></b>
      <span style="color:#17739e;"><?php echo $row_datos_estudiantes_YUTm['ci_repre'];?></span>
      <span style="color:#17739e;"><i class="far fa-hand-point-left"></i></span><br>




     </td>


           












<?php

$busqueda = $row_datos_control['ci_estu'];

include("../conectar.php");

      $query_bus = "SELECT * FROM reg_estu_repre_all, reg_representante, reg_estudiantes                        
         WHERE reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
        
         and reg_estudiantes.ci_estu = '$busqueda' limit 1 ";

$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$datos_plantilla_bus_res = mysqli_fetch_assoc($datos_plantilla_bus);
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

$la_ci_es = $datos_plantilla_bus_res['ci_repre'];

mysqli_close($enlace); 

?>



    <td class="align-middle" align="center">

     <div class="form-row mb-2">














                      <!--boton 1 -->
                      <div class="col-lg-12" data-toggle="tooltip" data-placement="top" title="Actualizar Inscripción">

<button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                              data-target="#upadate_ins<?php echo $row_datos_control['id_estud']; ?>">
                                            <!-- este ultimo identifica cual modal abrir -->
                                         <i class="fas fa-file-invoice fa-2x"></i>
</button>


                      </div> 



<!-- ini modal editar -->

<div class="modal fade" id="upadate_ins<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Actualizar Inscripción!!!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


      <?php include("plantilla_estudiantes_00_mod_insc.php"); ?> 


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_control['id_estud']; ?>">


        <input type="hidden" id="valor_insc"        name="valor_insc"       value="<?php echo $row_datos_mod9['Inscripcion']; ?>">
<input type="hidden" id="id_quien"          name="id_quien"         value="<?php echo $row_datos_mod9['ins_quien']; ?>">
<input type="hidden" id="id_quien_actual"   name="id_quien_actual"  value="<?php echo $_SESSION['id']; ?>">
        

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_insc" class="btn btn-success" value="<?php echo $row_datos_control['id_estud']; ?>">
              Actualizar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->







                    </div> 


<?php

$fechaxx = date('Y', strtotime($row_datos_mod9['fecha_pago_ins']) );

if ($fechaxx <= "2000") {
  $fecha_es = "";
}

else {

$fecha_es = date('d-m-Y', strtotime($row_datos_mod9['fecha_pago_ins']) );

}

 ?>

<span style="color:orange; font-size: 16px;"><b><i>

<?php 

$mensaje = '';

$el_becario = $row_datos_control['id_estud'];

include("../conectar.php");


$querybbb = "SELECT * FROM extra_catedra 
         WHERE   id_estud = '$el_becario'
         and id_area = '88' limit 1 " ;

$datos_controlbbb = mysqli_query($enlace, $querybbb) or die(mysqli_error());

$totalRows_datos_controlbbb = mysqli_num_rows($datos_controlbbb); 


mysqli_close($enlace);


if ($totalRows_datos_controlbbb >=1) {
    $mensaje = '- Posee Beca:';
    
}

else {
  $mensaje = '';
}
echo $mensaje;
?> </i></b></span><?php echo$row_encuentralos_ya_beca['obs_catedra']; ?>


<?php

$fechaxx_abonokk = date('Y', strtotime($row_datos_mod9['fecha_abono_ins']) );

if ($fechaxx_abonokk <= "2000") {
  $fecha_es_abonokk = "";
}

else {

$fecha_es_abonokk = date('d-m-Y', strtotime($row_datos_mod9['fecha_abono_ins']) );

}

 ?>


<br>
                                           <span style="color:green;"> <b>Abono:</b></span> <?php echo number_format($row_datos_mod9['abono_ins'],2,",","."); ?><br>
                                           <span style="color:green;"> Fecha Abono:</span> <?php echo $fecha_es_abonokk; ?> <br>
                                           <span style="color:green;"> N° Recibo:</span> <?php echo $row_datos_mod9['recibo_abono_ins']; ?> <br>


                                            <hr>
                                            Observ.: <?php echo $row_datos_mod9['nota_principal']; ?> <br><br>
                                            <!-- <b>Monto:</b> <?php echo $row_datos_mod9['Inscripcion']; ?><br> -->
                                            <b>Monto:</b> <?php echo number_format($row_datos_mod9['Inscripcion'],2,",","."); ?><br>

                                             
                                            Fecha: <?php echo $fecha_es; ?> <br>
                                            N° Recibo: <?php echo $row_datos_mod9['recibo_pago_insc']; ?> <br><br>
                                            Nota: <?php echo $row_datos_mod9['nota_insc']; ?> </td>






    <td class="align-middle" align="center">

      <div class="form-row mb-2">

                      <!--boton 1 -->
                      <div class="col-lg-12" data-toggle="tooltip" data-placement="top" title="Actualizar 1er Trimestre">
  

<button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                              data-target="#upadate_1er<?php echo $row_datos_control['id_estud']; ?>">
                                            <!-- este ultimo identifica cual modal abrir -->
                                         <i class="fas fa-hand-holding-usd fa-2x"></i>
</button>


                      </div> 





<!-- ini modal editar -->

<div class="modal fade" id="upadate_1er<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Actualizar 1er Trimestre!!!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


     <?php include("plantilla_estudiantes_00_mod_1er.php"); ?> 


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_control['id_estud']; ?>">


<input type="hidden" id="1err_pago"        name="1err_pago"       value="<?php echo $row_datos_mod9['1er_pago']; ?>">
<input type="hidden" id="2doo_pago"        name="2doo_pago"       value="<?php echo $row_datos_mod9['2do_pago']; ?>">
<input type="hidden" id="3err_pago"        name="3err_pago"       value="<?php echo $row_datos_mod9['3er_pago']; ?>">

<input type="hidden" id="1er_quien"          name="1er_quien"         value="<?php echo $row_datos_mod9['1er_quien']; ?>">
<input type="hidden" id="2do_quien"          name="2do_quien"         value="<?php echo $row_datos_mod9['2do_quien']; ?>">
<input type="hidden" id="3er_quien"          name="3er_quien"         value="<?php echo $row_datos_mod9['3er_quien']; ?>">

<input type="hidden" id="id_quien_actual"   name="id_quien_actual"  value="<?php echo $_SESSION['id']; ?>">


        

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_1er" class="btn btn-info" value="<?php echo $row_datos_control['id_estud']; ?>">
              Actualizar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->




<?php

$fechaxx1 = date('Y', strtotime($row_datos_mod9['fecha_1er_pago']) );

if ($fechaxx1 <= "2000") {
  $fecha_es1 = "";
}

else {

$fecha_es1 = date('d-m-Y', strtotime($row_datos_mod9['fecha_1er_pago']) );

}


$fechaxx2 = date('Y', strtotime($row_datos_mod9['fecha_2do_pago']) );

if ($fechaxx2 <= "2000") {
  $fecha_es2 = "";
}

else {

$fecha_es2 = date('d-m-Y', strtotime($row_datos_mod9['fecha_2do_pago']) );

}



$fechaxx3 = date('Y', strtotime($row_datos_mod9['fecha_3er_pago']) );

if ($fechaxx3 <= "2000") {
  $fecha_es3 = "";
}

else {

$fecha_es3 = date('d-m-Y', strtotime($row_datos_mod9['fecha_3er_pago']) );

}




$fechaxx4 = date('Y', strtotime($row_datos_mod9['fecha_4to_pago']) );

if ($fechaxx4 <= "2000") {
  $fecha_es4 = "";
}

else {

$fecha_es4 = date('d-m-Y', strtotime($row_datos_mod9['fecha_4to_pago']) );

}




$fechaxx5 = date('Y', strtotime($row_datos_mod9['fecha_5to_pago']) );

if ($fechaxx5 <= "2000") {
  $fecha_es5 = "";
}

else {

$fecha_es5 = date('d-m-Y', strtotime($row_datos_mod9['fecha_5to_pago']) );

}



$fechaxx6 = date('Y', strtotime($row_datos_mod9['fecha_6to_pago']) );

if ($fechaxx6 <= "2000") {
  $fecha_es6 = "";
}

else {

$fecha_es6 = date('d-m-Y', strtotime($row_datos_mod9['fecha_6to_pago']) );

}


$fechaxx7 = date('Y', strtotime($row_datos_mod9['fecha_7mo_pago']) );

if ($fechaxx7 <= "2000") {
  $fecha_es7 = "";
}

else {

$fecha_es7 = date('d-m-Y', strtotime($row_datos_mod9['fecha_7mo_pago']) );

}


$fechaxx8 = date('Y', strtotime($row_datos_mod9['fecha_8vo_pago']) );

if ($fechaxx8 <= "2000") {
  $fecha_es8 = "";
}

else {

$fecha_es8 = date('d-m-Y', strtotime($row_datos_mod9['fecha_8vo_pago']) );

}


$fechaxx9 = date('Y', strtotime($row_datos_mod9['fecha_9no_pago']) );

if ($fechaxx9 <= "2000") {
  $fecha_es9 = "";
}

else {

$fecha_es9 = date('d-m-Y', strtotime($row_datos_mod9['fecha_9no_pago']) );

}


$fechaxx10 = date('Y', strtotime($row_datos_mod9['fecha_10m_pago']) );

if ($fechaxx10 <= "2000") {
  $fecha_es10 = "";
}

else {

$fecha_es10 = date('d-m-Y', strtotime($row_datos_mod9['fecha_10m_pago']) );

}


$fechaxx11 = date('Y', strtotime($row_datos_mod9['fecha_11o_pago']) );

if ($fechaxx11 <= "2000") {
  $fecha_es11 = "";
}

else {

$fecha_es11 = date('d-m-Y', strtotime($row_datos_mod9['fecha_11o_pago']) );

}



$fechaxx12 = date('Y', strtotime($row_datos_mod9['fecha_12o_pago']) );

if ($fechaxx12 <= "2000") {
  $fecha_es12 = "";
}

else {

$fecha_es12 = date('d-m-Y', strtotime($row_datos_mod9['fecha_12o_pago']) );

}
 ?>








                    </div>


                                            <hr>
                                            <b><?php echo $primer_pago; ?></b>: <?php echo number_format($row_datos_mod9['1er_pago'],2,",","."); ?> <br>

<?php

if ($row_datos_mod9['abono_1er'] <1) {
  $el_display_es1 = 'display: none;';
}

else {
  $el_display_es1 = '';
}

 ?>

<span style="color:orange; <?php echo $el_display_es1; ?>"><b>Abono:</b>: <?php echo number_format($row_datos_mod9['abono_1er'],2,",","."); ?><br></span> 

                                            <i class="far fa-calendar-alt"></i>: <?php echo $fecha_es1; ?> <br><br>
                                            <b><?php echo $segundo_pago; ?></b>: <?php echo number_format($row_datos_mod9['2do_pago'],2,",","."); ?> <br>

<?php

if ($row_datos_mod9['abono_2do'] <1) {
  $el_display_es2 = 'display: none;';
}

else {
  $el_display_es2 = '';
}

 ?>

<span style="color:orange; <?php echo $el_display_es2; ?>"><b>Abono:</b>: <?php echo number_format($row_datos_mod9['abono_2do'],2,",","."); ?><br></span> 



                                            <i class="far fa-calendar-alt"></i>: <?php echo $fecha_es2; ?> <br><br>
                                            <b><?php echo $tercero_pago; ?></b>: <?php echo number_format($row_datos_mod9['3er_pago'],2,",","."); ?> <br>

<?php

if ($row_datos_mod9['abono_3er'] <1) {
  $el_display_es3 = 'display: none;';
}

else {
  $el_display_es3 = '';
}

 ?>

<span style="color:orange; <?php echo $el_display_es3; ?>"><b>Abono:</b>: <?php echo number_format($row_datos_mod9['abono_3er'],2,",","."); ?><br></span> 






                                            <i class="far fa-calendar-alt"></i>: <?php echo $fecha_es3; ?> <br><br>
                                            <i class="far fa-comment-alt"></i>: <span style="color: blue;"><?php echo $row_datos_mod9['1er_trim_nota']; ?></span>
                           <br><br> <b><?php echo $especial_primero; ?>:</b> <?php echo number_format($row_datos_mod9['especial_1'],2,",","."); ?>.<br><br>
                                              </td>



    <td class="align-middle" align="center">



      <div class="form-row mb-2">

                      <!--boton 1 -->
                      <div class="col-lg-12" data-toggle="tooltip" data-placement="top" title="Actualizar 2do Trimestre">
  

<button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                              data-target="#upadate_2do<?php echo $row_datos_control['id_estud']; ?>">
                                            <!-- este ultimo identifica cual modal abrir -->
                                         <i class="fas fa-hand-holding-usd fa-2x"></i>
</button>


                      </div> 





<!-- ini modal editar -->

<div class="modal fade" id="upadate_2do<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Actualizar 2do Trimestre!!!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


     <?php include("plantilla_estudiantes_00_mod_2do.php"); ?> 


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_control['id_estud']; ?>">

        <input type="hidden" id="4too_pago"        name="4too_pago"       value="<?php echo $row_datos_mod9['4to_pago']; ?>">
<input type="hidden" id="5too_pago"        name="5too_pago"       value="<?php echo $row_datos_mod9['5to_pago']; ?>">
<input type="hidden" id="6too_pago"        name="6too_pago"       value="<?php echo $row_datos_mod9['6to_pago']; ?>">

<input type="hidden" id="4to_quien"          name="4to_quien"         value="<?php echo $row_datos_mod9['4to_quien']; ?>">
<input type="hidden" id="5to_quien"          name="5to_quien"         value="<?php echo $row_datos_mod9['5to_quien']; ?>">
<input type="hidden" id="6to_quien"          name="6to_quien"         value="<?php echo $row_datos_mod9['6to_quien']; ?>">

<input type="hidden" id="id_quien_actual"   name="id_quien_actual"  value="<?php echo $_SESSION['id']; ?>">
        

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_2do" class="btn btn-warning" value="<?php echo $row_datos_control['id_estud']; ?>">
              Actualizar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->



                    </div>


                                            <hr>
                                            <b><?php echo $cuarto_pago; ?></b>: <?php echo number_format( $row_datos_mod9['4to_pago'],2,",","."); ?> <br>

<?php

if ($row_datos_mod9['abono_4to'] <1) {
  $el_display_es4 = 'display: none;';
}

else {
  $el_display_es4 = '';
}

 ?>

<span style="color:orange; <?php echo $el_display_es4; ?>"><b>Abono:</b>: <?php echo number_format($row_datos_mod9['abono_4to'],2,",","."); ?><br></span> 





                                            <i class="far fa-calendar-alt"></i>: <?php echo $fecha_es4; ?> <br><br>
                                            <b><?php echo $quinto_pago; ?></b>: <?php echo number_format( $row_datos_mod9['5to_pago'],2,",","."); ?> <br>


<?php

if ($row_datos_mod9['abono_5to'] <1) {
  $el_display_es5 = 'display: none;';
}

else {
  $el_display_es5 = '';
}

 ?>

<span style="color:orange; <?php echo $el_display_es5; ?>"><b>Abono:</b>: <?php echo number_format($row_datos_mod9['abono_5to'],2,",","."); ?><br></span> 





                                            <i class="far fa-calendar-alt"></i>: <?php echo $fecha_es5; ?> <br><br>
                                            <b><?php echo $sexto_pago; ?></b>: <?php echo number_format( $row_datos_mod9['6to_pago'],2,",","."); ?> <br>


<?php

if ($row_datos_mod9['abono_6to'] <1) {
  $el_display_es6 = 'display: none;';
}

else {
  $el_display_es6 = '';
}

 ?>

<span style="color:orange; <?php echo $el_display_es6; ?>"><b>Abono:</b>: <?php echo number_format($row_datos_mod9['abono_6to'],2,",","."); ?><br></span> 






                                            <i class="far fa-calendar-alt"></i>: <?php echo $fecha_es6; ?> <br><br>
                                            <i class="far fa-comment-alt"></i>: <span style="color: blue;"><?php echo $row_datos_mod9['2do_trim_nota']; ?></span>
                             <br><br> <b><?php echo $especial_segundo; ?>:</b> <?php echo number_format( $row_datos_mod9['especial_2'],2,",","."); ?>.<br><br>
                                             </td>



    <td class="align-middle" align="center">


      <div class="form-row mb-2">

                      <!--boton 1 -->
                      <div class="col-lg-12" data-toggle="tooltip" data-placement="top" title="Actualizar 2do Trimestre">
  

<button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                              data-target="#upadate_3er<?php echo $row_datos_control['id_estud']; ?>">
                                            <!-- este ultimo identifica cual modal abrir -->
                                         <i class="fas fa-hand-holding-usd fa-2x"></i>
</button>


                      </div> 





<!-- ini modal editar -->

<div class="modal fade" id="upadate_3er<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Actualizar 3er Trimestre!!!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


     <?php include("plantilla_estudiantes_00_mod_3er.php"); ?> 


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_control['id_estud']; ?>">


        <input type="hidden" id="7moo_pago"        name="7moo_pago"       value="<?php echo $row_datos_mod9['7mo_pago']; ?>">
<input type="hidden" id="8voo_pago"        name="8voo_pago"       value="<?php echo $row_datos_mod9['8vo_pago']; ?>">
<input type="hidden" id="9noo_pago"        name="9noo_pago"       value="<?php echo $row_datos_mod9['9no_pago']; ?>">

<input type="hidden" id="7mo_quien"          name="7mo_quien"         value="<?php echo $row_datos_mod9['7mo_quien']; ?>">
<input type="hidden" id="8vo_quien"          name="8vo_quien"         value="<?php echo $row_datos_mod9['8vo_quien']; ?>">
<input type="hidden" id="9no_quien"          name="9no_quien"         value="<?php echo $row_datos_mod9['9no_quien']; ?>">

<input type="hidden" id="id_quien_actual"   name="id_quien_actual"  value="<?php echo $_SESSION['id']; ?>">
        

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_3er" class="btn btn-info" value="<?php echo $row_datos_control['id_estud']; ?>">
              Actualizar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->



                    </div>


                                            <hr>
                                            <b><?php echo $septimo_pago; ?></b>: <?php echo number_format($row_datos_mod9['7mo_pago'],2,",","."); ?> <br>


<?php

if ($row_datos_mod9['abono_7mo'] <1) {
  $el_display_es7 = 'display: none;';
}

else {
  $el_display_es7 = '';
}

 ?>

<span style="color:orange; <?php echo $el_display_es7; ?>"><b>Abono:</b>: <?php echo number_format($row_datos_mod9['abono_7mo'],2,",","."); ?><br></span> 




                                            <i class="far fa-calendar-alt"></i>: <?php echo $fecha_es7; ?> <br><br>
                                            <b><?php echo $octavo_pago; ?></b>: <?php echo number_format($row_datos_mod9['8vo_pago'],2,",","."); ?> <br>



<?php

if ($row_datos_mod9['abono_8vo'] <1) {
  $el_display_es8 = 'display: none;';
}

else {
  $el_display_es8 = '';
}

 ?>

<span style="color:orange; <?php echo $el_display_es8; ?>"><b>Abono:</b>: <?php echo number_format($row_datos_mod9['abono_8vo'],2,",","."); ?><br></span> 






                                            <i class="far fa-calendar-alt"></i>: <?php echo $fecha_es8; ?> <br><br>
                                            <b><?php echo $noveno_pago; ?></b>: <?php echo number_format($row_datos_mod9['9no_pago'],2,",","."); ?> <br>

<?php

if ($row_datos_mod9['abono_9no'] <1) {
  $el_display_es9 = 'display: none;';
}

else {
  $el_display_es9 = '';
}

 ?>

<span style="color:orange; <?php echo $el_display_es9; ?>"><b>Abono:</b>: <?php echo number_format($row_datos_mod9['abono_9no'],2,",","."); ?><br></span> 






                                            <i class="far fa-calendar-alt"></i>: <?php echo $fecha_es9; ?> <br><br>
                                            <i class="far fa-comment-alt"></i>: <span style="color: blue;"><?php echo $row_datos_mod9['3er_trim_nota']; ?></span> 
                            <br><br> <b><?php echo $especial_tercero; ?>:</b> <?php echo number_format($row_datos_mod9['especial_3'],2,",","."); ?>.<br><br>
                                            </td>



    <td class="align-middle" align="center">



  <div class="form-row mb-2">

                      <!--boton 1 -->
                      <div class="col-lg-12" data-toggle="tooltip" data-placement="top" title="Actualizar 4to Trimestre">
  

<button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                              data-target="#upadate_4to<?php echo $row_datos_control['id_estud']; ?>">
                                            <!-- este ultimo identifica cual modal abrir -->
                                         <i class="fas fa-hand-holding-usd fa-2x"></i>
</button>


                      </div> 





<!-- ini modal editar -->

<div class="modal fade" id="upadate_4to<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Actualizar 4to Trimestre!!!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


     <?php include("plantilla_estudiantes_00_mod_4to.php"); ?> 


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_control['id_estud']; ?>">

        <input type="hidden" id="10mm_pago"        name="10mm_pago"       value="<?php echo $row_datos_mod9['10m_pago']; ?>">
<input type="hidden" id="11oo_pago"        name="11oo_pago"       value="<?php echo $row_datos_mod9['11o_pago']; ?>">
<input type="hidden" id="12oo_pago"        name="12oo_pago"       value="<?php echo $row_datos_mod9['12o_pago']; ?>">

<input type="hidden" id="10m_quien"          name="10m_quien"         value="<?php echo $row_datos_mod9['10m_quien']; ?>">
<input type="hidden" id="11o_quien"          name="11o_quien"         value="<?php echo $row_datos_mod9['11o_quien']; ?>">
<input type="hidden" id="12o_quien"          name="12o_quien"         value="<?php echo $row_datos_mod9['12o_quien']; ?>">

<input type="hidden" id="id_quien_actual"   name="id_quien_actual"  value="<?php echo $_SESSION['id']; ?>">
        

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_4to" class="btn btn-warning" value="<?php echo $row_datos_control['id_estud']; ?>">
              Actualizar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->



                    </div>




                                            <hr>
                                            <b><?php echo $decimo_pago; ?></b>: <?php echo number_format($row_datos_mod9['10m_pago'],2,",","."); ?> <br>

<?php

if ($row_datos_mod9['abono_10m'] <1) {
  $el_display_es10 = 'display: none;';
}

else {
  $el_display_es10 = '';
}

 ?>

<span style="color:orange; <?php echo $el_display_es10; ?>"><b>Abono:</b>: <?php echo number_format($row_datos_mod9['abono_10m'],2,",","."); ?><br></span> 




                                            <i class="far fa-calendar-alt"></i>: <?php echo $fecha_es10; ?> <br><br>
                                            <b><?php echo $onceavo_pago; ?></b>: <?php echo number_format($row_datos_mod9['11o_pago'],2,",","."); ?> <br>

<?php

if ($row_datos_mod9['abono_11o'] <1) {
  $el_display_es11 = 'display: none;';
}

else {
  $el_display_es11 = '';
}

 ?>

<span style="color:orange; <?php echo $el_display_es11; ?>"><b>Abono:</b>: <?php echo number_format($row_datos_mod9['abono_11o'],2,",","."); ?><br></span> 




                                            <i class="far fa-calendar-alt"></i>: <?php echo $fecha_es11; ?> <br><br>
                                            <b><?php echo $doceavo_pago; ?></b>: <?php echo number_format($row_datos_mod9['12o_pago'],2,",","."); ?> <br>

<?php

if ($row_datos_mod9['abono_12o'] <1) {
  $el_display_es12 = 'display: none;';
}

else {
  $el_display_es12 = '';
}

 ?>

<span style="color:orange; <?php echo $el_display_es12; ?>"><b>Abono:</b>: <?php echo number_format($row_datos_mod9['abono_12o'],2,",","."); ?><br></span> 







                                            <i class="far fa-calendar-alt"></i>: <?php echo $fecha_es12; ?> <br><br>
                                            <i class="far fa-comment-alt"></i>: <span style="color: blue;"><?php echo $row_datos_mod9['4to_trim_nota']; ?></span>
               <br><br> <b><?php echo $especial_cuarto; ?>:</b> <?php echo number_format($row_datos_mod9['especial_4'],2,",","."); ?>.<br><br>
                                             </td>


                                  



                </tr>
                


                 <?php } while ($row_datos_control = mysqli_fetch_assoc($datos_control)); ?>

                
              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->

       

    <div class="card-footer text-muted"><b>Info:</b> Puede mover entre secciones, acomodar apellidos y nombres, retirar al alumno he imprimir el listado.</div> 

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
