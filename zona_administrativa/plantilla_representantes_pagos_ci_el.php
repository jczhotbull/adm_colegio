<?php

include("identificador.php");

error_reporting(0); //hide php errors

$exitoZww = "";

$nnn1 = $nnn['ci'];

$alerta_principal  = "0";

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

$abono_ins = $_POST['abono_ins'];

$dato_abono_ins = $_POST['dato_abono_ins'];

$fecha_abono_ins = $_POST['fecha_abono_ins'];
$recibo_abono_ins = $_POST['recibo_abono_ins'];


$mod_forma_abono_ins = $_POST['mod_forma_abono_ins'];
$mod_num_trans_abono_insc = $_POST['mod_num_trans_abono_insc'];


$fecha_ins = $_POST['fecha_ins'];
$dicho_id = $_POST['id_del_registro'];

$forma_ins = $_POST['mod_forma_ins'];

$id_del_estt = $_POST['el_id_del_est'];

$la_bandera_P = $_POST['banderin_rt'];
$indicador_reg = $_POST['id_del_actualP'];



$valor_insc = $_POST['valor_insc'];
$id_quien = $_POST['id_quien'];
$id_quien_actual = $_POST['id_quien_actual'];
$nuevo_ins = $_POST['monto_ins'];


if ($valor_insc != $nuevo_ins  ) {            // hidden    vs  input
  $procesado_por =  $id_quien_actual;
}

else {
  $procesado_por = $id_quien;
}



if ($dato_abono_ins != $abono_ins  ) {
  $procesado_por_abono_ins =  $id_quien_actual;
}

else {
  $procesado_por_abono_ins = $id_quien;
}





include("../conectar.php");



$querydatow = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_ins'])."' LIMIT 1";
$resultdatow = mysqli_query($enlace,$querydatow);

    if (mysqli_num_rows($resultdatow)>0)
      {
       $errorZ="El número de recibo inscripción esta restringido.";
      }


$querydatow_abono = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_abono_ins'])."' LIMIT 1";
$resultdatow_abono = mysqli_query($enlace,$querydatow_abono);

    if (mysqli_num_rows($resultdatow_abono)>0)
      {
       $errorZ="El número de recibo abono inscripción esta restringido.";
      }




          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                 mysqli_close($enlace);            
              }

 
            else  {  

if ($la_bandera_P == 1) {

$sql = "UPDATE reg_pagos SET nota_principal = '".mysqli_real_escape_string($enlace,$_POST['nota_prin'])."'   ,
                             en_el_ciclo = '".mysqli_real_escape_string($enlace,$_POST['ciclo'])."'   ,
                             Inscripcion = '".mysqli_real_escape_string($enlace,$_POST['monto_ins'])."'   ,
                             fecha_pago_ins = '$fecha_ins'   ,
                             recibo_pago_insc = '".mysqli_real_escape_string($enlace,$_POST['recibo_ins'])."'   ,

                             forma_insc = '$forma_ins'   ,
                             num_trans_insc = '".mysqli_real_escape_string($enlace,$_POST['mod_num_trans_insc'])."'   ,

                             nota_insc = '".mysqli_real_escape_string($enlace,$_POST['nota_ins'])."' 

                              ,ins_quien = '$procesado_por',

                                     abono_ins = '$abono_ins'   ,


                                   abono_quien = '$procesado_por_abono_ins',


                               fecha_abono_ins = '$fecha_abono_ins'   ,
                              recibo_abono_ins = '$recibo_abono_ins'    ,
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
                     $exitoZ = "Registro Inscripción Actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }

}  /* cierre del if */


else {


$sql = "UPDATE reg_pagos SET nota_principal = '".mysqli_real_escape_string($enlace,$_POST['nota_prin'])."'   ,
                             en_el_ciclo = '".mysqli_real_escape_string($enlace,$_POST['ciclo'])."'   ,
                             Inscripcion = '".mysqli_real_escape_string($enlace,$_POST['monto_ins'])."'   ,
                             fecha_pago_ins = '$fecha_ins'   ,
                             recibo_pago_insc = '".mysqli_real_escape_string($enlace,$_POST['recibo_ins'])."'   ,

                             forma_insc = '$forma_ins'   ,
                             num_trans_insc = '".mysqli_real_escape_string($enlace,$_POST['mod_num_trans_insc'])."'   ,

                             nota_insc = '".mysqli_real_escape_string($enlace,$_POST['nota_ins'])."' 

                              ,ins_quien = '$procesado_por' 

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

                $date_hoy = date('Y/m/d', time());

                $sql_insc = "UPDATE reg_estu_actual SET fecha_inscripcion = '$date_hoy',
                             id_seccion = '9' 
                            WHERE id_reg_estu_actual ='$indicador_reg' ";

           $actualiza_PP = mysqli_query($enlace,  $sql_insc) or die(mysqli_error());


                 $sql_insc_si = "UPDATE reg_estudiantes SET inscrito_si_o_no = '1',
                             retirado_si_o_no = '0', regular = '1' 
                            WHERE id_estud ='$id_del_estt' ";

           $actualiza_PP_si = mysqli_query($enlace,  $sql_insc_si) or die(mysqli_error());  


                     $exitoZ = "Registro Inscripción Actualizado; Estudiante Inscrito."; 
                }     

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








 if(isset($_POST['solo_save']))
        {


$abono_ins = $_POST['abono_ins'];

$dato_abono_ins = $_POST['dato_abono_ins'];

$fecha_abono_ins = $_POST['fecha_abono_ins'];
$recibo_abono_ins = $_POST['recibo_abono_ins'];


$mod_forma_abono_ins = $_POST['mod_forma_abono_ins'];
$mod_num_trans_abono_insc = $_POST['mod_num_trans_abono_insc'];



$fecha_ins = $_POST['fecha_ins'];
$dicho_id = $_POST['id_del_registro'];

$forma_ins = $_POST['mod_forma_ins'];

$id_del_estt = $_POST['el_id_del_est'];

$la_bandera_P = $_POST['banderin_rt'];
$indicador_reg = $_POST['id_del_actualP'];



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





if ($dato_abono_ins != $abono_ins  ) {
  $procesado_por_abono_ins =  $id_quien_actual;
}

else {
  $procesado_por_abono_ins = $id_quien;
}



include("../conectar.php");



$querydatow = "SELECT * FROM plantilla_talonario WHERE talonario_numero ='".mysqli_real_escape_string($enlace,$_POST['recibo_ins'])."' LIMIT 1";
$resultdatow = mysqli_query($enlace,$querydatow);

    if (mysqli_num_rows($resultdatow)>0)
      {
       $errorZ="El número de recibo esta restringido.";
      }


          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                 mysqli_close($enlace);            
              }

 
            else  {  

if ($la_bandera_P == 1) {

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


                                  abono_quien = '$procesado_por_abono_ins',


                               fecha_abono_ins = '$fecha_abono_ins'   ,
                              recibo_abono_ins = '$recibo_abono_ins'    ,
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
                     $exitoZ = "Registro Actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }

}  /* cierre del if */


else {


$sql = "UPDATE reg_pagos SET nota_principal = '".mysqli_real_escape_string($enlace,$_POST['nota_prin'])."'   ,
                             en_el_ciclo = '".mysqli_real_escape_string($enlace,$_POST['ciclo'])."'   ,
                             Inscripcion = '".mysqli_real_escape_string($enlace,$_POST['monto_ins'])."'   ,
                             fecha_pago_ins = '$fecha_ins'   ,
                             recibo_pago_insc = '".mysqli_real_escape_string($enlace,$_POST['recibo_ins'])."'   ,

                             forma_insc = '$forma_ins'   ,
                             num_trans_insc = '".mysqli_real_escape_string($enlace,$_POST['mod_num_trans_insc'])."'   ,

                             nota_insc = '".mysqli_real_escape_string($enlace,$_POST['nota_ins'])."' 

                              ,ins_quien = '$procesado_por'  ,

                                     abono_ins = '$abono_ins'   ,


                                   abono_quien = '$procesado_por_abono_ins',


                               fecha_abono_ins = '$fecha_abono_ins'   ,
                              recibo_abono_ins = '$recibo_abono_ins'    ,
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

                $date_hoy = date('Y/m/d', time());             

                     $exitoZ = "OK."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }



}

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









 if(isset($_POST['save_2do_tri']))
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
                             especial_2 = '".mysqli_real_escape_string($enlace,$_POST['pago_especial_2'])."' ,


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





 if(isset($_POST['save_3er_tri']))
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






 if(isset($_POST['save_4to_tri']))
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


 if(isset($_POST['save_all']))
        {

$fecha_ins = $_POST['fecha_ins'];
$forma_ins = $_POST['mod_forma_ins'];

$abono_ins = $_POST['abono_ins'];


$dato_abono_ins = $_POST['dato_abono_ins'];

$fecha_abono_ins = $_POST['fecha_abono_ins'];
$recibo_abono_ins = $_POST['recibo_abono_ins'];


$mod_forma_abono_ins = $_POST['mod_forma_abono_ins'];
$mod_num_trans_abono_insc = $_POST['mod_num_trans_abono_insc'];


$fecha_1er_pago = $_POST['fecha_1er_pago'];
$fecha_2do_pago = $_POST['fecha_2do_pago'];
$fecha_3er_pago = $_POST['fecha_3er_pago'];

$forma_1er = $_POST['mod_forma_1er'];
$forma_2do = $_POST['mod_forma_2do'];
$forma_3er = $_POST['mod_forma_3er'];

$fecha_4to_pago = $_POST['fecha_4to_pago'];
$fecha_5to_pago = $_POST['fecha_5to_pago'];
$fecha_6to_pago = $_POST['fecha_6to_pago'];

$forma_4to = $_POST['mod_forma_4to'];
$forma_5to = $_POST['mod_forma_5to'];
$forma_6to = $_POST['mod_forma_6to'];


$fecha_7mo_pago = $_POST['fecha_7mo_pago'];
$fecha_8vo_pago = $_POST['fecha_8vo_pago'];
$fecha_9no_pago = $_POST['fecha_9no_pago'];


$forma_7mo = $_POST['mod_forma_7mo'];
$forma_8vo = $_POST['mod_forma_8vo'];
$forma_9no = $_POST['mod_forma_9no'];


$fecha_10m_pago = $_POST['fecha_10m_pago'];
$fecha_11o_pago = $_POST['fecha_11o_pago'];
$fecha_12o_pago = $_POST['fecha_12o_pago'];

$forma_10m = $_POST['mod_forma_10m'];
$forma_11o = $_POST['mod_forma_11o'];
$forma_12o = $_POST['mod_forma_12o'];

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




if ($dato_abono_ins != $abono_ins  ) {
  $procesado_por_abono_ins =  $id_quien_actual;
}

else {
  $procesado_por_abono_ins = $id_quien;
}




$valor_1er_pago = $_POST['1err_pago'];
$valor_2do_pago = $_POST['2doo_pago'];
$valor_3er_pago = $_POST['3err_pago'];

$id_1er_quien = $_POST['1er_quien'];
$id_2do_quien = $_POST['2do_quien'];
$id_3er_quien = $_POST['3er_quien'];


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




$valor_4to_pago = $_POST['4too_pago'];
$valor_5to_pago = $_POST['5too_pago'];
$valor_6to_pago = $_POST['6too_pago'];

$id_4to_quien = $_POST['4to_quien'];
$id_5to_quien = $_POST['5to_quien'];
$id_6to_quien = $_POST['6to_quien'];




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



$valor_7mo_pago = $_POST['7moo_pago'];
$valor_8vo_pago = $_POST['8voo_pago'];
$valor_9no_pago = $_POST['9noo_pago'];

$id_7mo_quien = $_POST['7mo_quien'];
$id_8vo_quien = $_POST['8vo_quien'];
$id_9no_quien = $_POST['9no_quien'];




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



$valor_10m_pago = $_POST['10mm_pago'];
$valor_11o_pago = $_POST['11oo_pago'];
$valor_12o_pago = $_POST['12oo_pago'];

$id_10m_quien = $_POST['10m_quien'];
$id_11o_quien = $_POST['11o_quien'];
$id_12o_quien = $_POST['12o_quien'];




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


$sql = "UPDATE reg_pagos SET nota_principal = '".mysqli_real_escape_string($enlace,$_POST['nota_prin'])."'   ,
                             en_el_ciclo = '".mysqli_real_escape_string($enlace,$_POST['ciclo'])."'   ,
                             Inscripcion = '".mysqli_real_escape_string($enlace,$_POST['monto_ins'])."'   ,
                             fecha_pago_ins = '$fecha_ins'   ,
                             recibo_pago_insc = '".mysqli_real_escape_string($enlace,$_POST['recibo_ins'])."'   ,

                             forma_insc = '$forma_ins'   ,
                             num_trans_insc = '".mysqli_real_escape_string($enlace,$_POST['mod_num_trans_insc'])."'   ,
                             

                             nota_insc = '".mysqli_real_escape_string($enlace,$_POST['nota_ins'])."'  ,

                             1er_pago = '".mysqli_real_escape_string($enlace,$_POST['1er_pago'])."'   ,
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
                             num_trans_3er = '".mysqli_real_escape_string($enlace,$_POST['trans_3er_pago'])."'  ,


                             4to_pago = '".mysqli_real_escape_string($enlace,$_POST['4to_pago'])."'   ,
                             fecha_4to_pago = '$fecha_4to_pago'   ,
                             recibo_4to_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_4to_pago'])."'   ,

                             5to_pago = '".mysqli_real_escape_string($enlace,$_POST['5to_pago'])."'   ,
                             fecha_5to_pago = '$fecha_5to_pago'   ,
                             recibo_5to_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_5to_pago'])."' ,
                             
                             6to_pago = '".mysqli_real_escape_string($enlace,$_POST['6to_pago'])."'   ,
                             fecha_6to_pago = '$fecha_6to_pago'   ,
                             recibo_6to_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_6to_pago'])."' ,

                             2do_trim_nota = '".mysqli_real_escape_string($enlace,$_POST['nota_2do_tri'])."' ,
                             especial_2 = '".mysqli_real_escape_string($enlace,$_POST['pago_especial_2'])."' ,


                             abono_4to = '".mysqli_real_escape_string($enlace,$_POST['4to_abono'])."',
                             forma_4to = '$forma_4to'   ,
                             num_trans_4to = '".mysqli_real_escape_string($enlace,$_POST['trans_4to_pago'])."',

                             abono_5to = '".mysqli_real_escape_string($enlace,$_POST['5to_abono'])."',
                             forma_5to = '$forma_5to'   ,
                             num_trans_5to = '".mysqli_real_escape_string($enlace,$_POST['trans_5to_pago'])."',

                             abono_6to = '".mysqli_real_escape_string($enlace,$_POST['6to_abono'])."',
                             forma_6to = '$forma_6to'   ,
                             num_trans_6to = '".mysqli_real_escape_string($enlace,$_POST['trans_6to_pago'])."'   ,


                             7mo_pago = '".mysqli_real_escape_string($enlace,$_POST['7mo_pago'])."'   ,
                             fecha_7mo_pago = '$fecha_7mo_pago'   ,
                             recibo_7mo_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_7mo_pago'])."'   ,

                             8vo_pago = '".mysqli_real_escape_string($enlace,$_POST['8vo_pago'])."'   ,
                             fecha_8vo_pago = '$fecha_8vo_pago'   ,
                             recibo_8vo_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_8vo_pago'])."' ,
                             
                             9no_pago = '".mysqli_real_escape_string($enlace,$_POST['9no_pago'])."'   ,
                             fecha_9no_pago = '$fecha_9no_pago'   ,
                             recibo_9no_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_9no_pago'])."' ,

                             3er_trim_nota = '".mysqli_real_escape_string($enlace,$_POST['nota_3er_tri'])."'  ,
                             especial_3 = '".mysqli_real_escape_string($enlace,$_POST['pago_especial_3'])."' ,

                             abono_7mo = '".mysqli_real_escape_string($enlace,$_POST['7mo_abono'])."',
                             forma_7mo = '$forma_7mo'   ,
                             num_trans_7mo = '".mysqli_real_escape_string($enlace,$_POST['trans_7mo_pago'])."',

                             abono_8vo = '".mysqli_real_escape_string($enlace,$_POST['8vo_abono'])."'  ,
                             forma_8vo = '$forma_8vo'   ,
                             num_trans_8vo = '".mysqli_real_escape_string($enlace,$_POST['trans_8vo_pago'])."',

                             abono_9no = '".mysqli_real_escape_string($enlace,$_POST['9no_abono'])."',
                             forma_9no = '$forma_9no'   ,
                             num_trans_9no = '".mysqli_real_escape_string($enlace,$_POST['trans_9no_pago'])."'  ,


                             10m_pago = '".mysqli_real_escape_string($enlace,$_POST['10m_pago'])."'   ,
                             fecha_10m_pago = '$fecha_10m_pago'   ,
                             recibo_10m_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_10m_pago'])."'   ,

                             11o_pago = '".mysqli_real_escape_string($enlace,$_POST['11o_pago'])."'   ,
                             fecha_11o_pago = '$fecha_11o_pago'   ,
                             recibo_11o_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_11o_pago'])."' ,
                             
                             12o_pago = '".mysqli_real_escape_string($enlace,$_POST['12o_pago'])."'   ,
                             fecha_12o_pago = '$fecha_12o_pago'   ,
                             recibo_12o_pago = '".mysqli_real_escape_string($enlace,$_POST['recibo_12o_pago'])."' ,

                             4to_trim_nota = '".mysqli_real_escape_string($enlace,$_POST['nota_4to_tri'])."'   ,
                             especial_4 = '".mysqli_real_escape_string($enlace,$_POST['pago_especial_4'])."' ,


                             abono_10m = '".mysqli_real_escape_string($enlace,$_POST['10m_abono'])."' ,
                             forma_10m = '$forma_10m'   ,
                             num_trans_10m = '".mysqli_real_escape_string($enlace,$_POST['trans_10m_pago'])."' ,

                             abono_11o = '".mysqli_real_escape_string($enlace,$_POST['11o_abono'])."' ,
                             forma_11o = '$forma_11o'   ,
                             num_trans_11o = '".mysqli_real_escape_string($enlace,$_POST['trans_11o_pago'])."' ,

                             abono_12o = '".mysqli_real_escape_string($enlace,$_POST['12o_abono'])."' ,
                             forma_12o = '$forma_12o'   ,
                             num_trans_12o = '".mysqli_real_escape_string($enlace,$_POST['trans_12o_pago'])."'    


,ins_quien = '$procesado_por'   

,1er_quien = '$procesado_por1',
2do_quien = '$procesado_por2',
3er_quien = '$procesado_por3'
,4to_quien = '$procesado_por4',
5to_quien = '$procesado_por5',
6to_quien = '$procesado_por6'
,7mo_quien = '$procesado_por7',
8vo_quien = '$procesado_por8',
9no_quien = '$procesado_por9'
,10m_quien = '$procesado_por10',
11o_quien = '$procesado_por11',
12o_quien = '$procesado_por12'  ,

                                     abono_ins = '$abono_ins'   ,


                                   abono_quien = '$procesado_por_abono_ins',

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
                     $exitoZ = "Registro Completo Actualizado."; 
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


 include("plantillita_repre_update_pagos.php");   // procesa los datos

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

$cicloJKL = $_GET['ciclo'];

$alertin = $_GET['alertin'];



include("../conectar.php");



$queryperiodo_act1 = "SELECT * FROM temporada_escolar WHERE id_periodo_es = $cicloJKL limit 1";
$datos_periodo_act1 = mysqli_query($enlace, $queryperiodo_act1) or die(mysqli_error());
$row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1);



mysqli_close($enlace);  




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







if(isset($_POST['buscalo_id_estudxx']))
    {



if (strlen($_POST['buscar_id_estuggg']) <=3 )  // no sea mayor a 40 caracteres
 
    {   

    $xxxsearch = "xxxxxx";


    header( "Location: plantilla_representantes_pagos_ci_el.php?tituloJKL=Historial&ciclo=".$cicloJKL."&criterio=".$xxxsearch."&alertin=5" ); 

   
     }


else {   

    


$busqueda = $_POST['buscar_id_estuggg'];

$el_dicho_ciclo = $cicloJKL;


include("../conectar.php");

      $query_bus = "SELECT * FROM reg_estu_repre_all, reg_representante, reg_estudiantes, reg_estu_actual                        
         WHERE reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_actual.cursa_actualmente = '$el_dicho_ciclo'

         and reg_estudiantes.ci_estu LIKE '".$busqueda."' limit 1 ";

$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$datos_plantilla_bus_res = mysqli_fetch_assoc($datos_plantilla_bus);
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

$la_ci_es = $datos_plantilla_bus_res['ci_repre']; 

mysqli_close($enlace); 



      if ($totalRows_datos_plantilla_bus == '0') {

        $xxxsearch = "xxxxxx";

         header( "Location: plantilla_representantes_pagos_ci_el.php?tituloJKL=Historial&ciclo=".$cicloJKL."&criterio=".$xxxsearch."&alertin=55" ); 


       

      }  



      if ($totalRows_datos_plantilla_bus == '1' ) {



        header( "Location: plantilla_representantes_pagos_ci_el.php?tituloJKL=Historial&alertin=100&ciclo=".$cicloJKL."&criterio=".$la_ci_es."" );

      }




}

    }  // cierre principal del if






if ( $alertin == "1" ) { 

            $errorZ="- Se encontraron muchos resultados, intente refinar la búsqueda.";  

            }


if ( $alertin == "5" ) { 

            $errorZ="- Ingrese más de 3 caracteres, para iniciar la busqueda. ";  

            }




if ( $alertin == "55" ) { 

            $errorZ="- La busqueda arrojo &nbsp;&nbsp;<b>0</b>&nbsp;&nbsp; resultados.";  

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
         }   }


        if ($exitoZww!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                              {
                                 $exitoZww = " <i class=\"fas fa-chart-line fa-lg\"></i> &nbsp; " . $exitoZww. " ";                              
                              }









?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/lista_de_representantes_search_pagos.php"); ?>  <!-- ayuda a hacer el listado -->


<div class="se-pre-con"></div>


<div class="content-wrapper">
  <div class="container-fluid">


<?php


if ($alerta_principal  == "0" and $exitoZ=="" and $exitoZww=="") {




 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  title: "¡Importante!",
  text: "Recuerde confirmar y mantener actualizados los datos de contacto - SIEMPRE -.",
  type: "info",
});';
  echo '}, 2000);</script>';  

  

} 

?>






    <div class="form-row ml-1">  


          <div class="col-md-2 col-lg-2 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i><b><?php echo $tituloJKL; ?></b> </i> </div> 

          </div> 



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








<div class="col-md-3 col-lg-3 mb-2">

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






          <div class="col-md-7 col-lg-7 mb-2">


 <?php 
              if ($exitoZww!="")
              { echo "<div class=\"input-group-text alert-dark text-truncate\" role=\"basic-addon1\" role=\"alert\" align=\"center\">".$exitoZww."</div>"; }
            ?>


              

          </div> 


    </div>

   <div class="form-row ml-1">  



<div class="col-md-12 col-lg-6 mt-2 mb-2">  
<form method="POST">

            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text alert-success">Nueva Busqueda Ciclo &nbsp;<b><?php echo $row_datos_periodo_act1['periodo_escolar']; ?></b> </span>
            </div>

            <input type="hidden" id="ciclo_cicloso" name="ciclo_cicloso" value="<?php echo $cicloJKL; ?>">
            <input type="text" class="form-control" name="buscar_id_estuggg" placeholder="Ingrese el doc de Id del estudiante..." aria-label="">
            <div class="input-group-append">
              <button type="submit" name="buscalo_id_estudxx" class="btn btn-success"><i style="color:white;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>


          </div>


 </form>

</div>

 <div class="col-md-6 col-lg-6 mt-2 mb-2">
          
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

                <div class="text-dark"><b>Atención:</b> La presencia de filas vacías, significa que los datos del representante no se han completado correctamente. <br>
                  <b>De no observar información asociada a pagos de estudiantes, es indicio a que dicho estudiante no estaba inscrito durante el ciclo seleccionado.</b></div> 

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


</span> <br>

<span style="color: orange;">
<?php

include("../conectar.php");

$el_doc_repre_es = $row_datos_estudiantes['ci_repre'];

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


mysqli_close($enlace); 



}


echo $frase_previa; echo $espacio;


 ?></span>  <span style="color: orange;"><b> <?php  echo $trabaja_de; echo $espacio;  echo $icono_giro; ?>  </b>    </span>           






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
                  ?><br><br><?php echo $row_datos_estudiantes['email_repre']; ?>   <br>



<?php

   if ($row_datos_estudiantes['correo_valido'] == 0 ) {
         $el_validoso = 'Email No Confirmado';
         $el_valivali = '0';
       }

       if ($row_datos_estudiantes['correo_valido'] == 1 ) {
         $el_validoso = 'Email Confirmado';
         $el_valivali = '1';
       }


       if ($row_datos_estudiantes['correo_valido'] == 2 ) {
         $el_validoso = 'Email No Valido?';
         $el_valivali = '2';
       }


 if ($row_datos_estudiantes["correo_valido"]=="0") {
        $visto = "<span style='color:orange;' ><b>'Email No Confirmado <i class=\"fas fa-cog fa-spin\"></i>'</b></span>";
      }

      if ($row_datos_estudiantes["correo_valido"]=="1") {
        $visto = "<span style='color:#27408b;' ><b>'Email Confirmado'</b></span>";
      }

      if ($row_datos_estudiantes["correo_valido"]=="2") {
        $visto = "<span style='color:red;' ><b>'Email No Valido? <i class=\"fas fa-cog fa-spin\"></i>'</b></span>";
      }

      echo $visto;
 
 ?>  













                   </td>



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


       <?php include("plantillita_repre_pagos.php"); ?>


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




<!-- esto anterior me ayuda a hacer q solo muestre los del año en curso y que esten activos -->

<?php
          $el_id_esTTT = $row_de_ids['id_repre'];

          include("../conectar.php"); 


$query_YUT = "SELECT * FROM reg_estu_repre_all, secciones, reg_estu_actual, grados, reg_estudiantes 

         WHERE  reg_estu_repre_all.id_estu = reg_estudiantes.id_estud

         and  secciones.id_seccion = reg_estu_actual.id_seccion
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and cursa_actualmente = '$cicloJKL'
         /* and  el_activo = '1'  */
         and reg_estu_repre_all.id_repre = '$el_id_esTTT'
        
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC ";

$datos_estudiantes_YUT = mysqli_query($enlace, $query_YUT) or die(mysqli_error());

$row_datos_estudiantes_YUT = mysqli_fetch_array($datos_estudiantes_YUT); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estudiantes_YUT = mysqli_num_rows($datos_estudiantes_YUT); 

mysqli_close($enlace);




if  ($totalRows_datos_estudiantes_YUT == 0)

  { $muestra_si_no = 'display: none;'; }

else    { $muestra_si_no = ''; }


?>









<br>   

<div style="<?php echo $muestra_si_no; ?>">  

<div style="border: 1px solid SteelBlue;" class="card" >

<h3 style="color:DarkSlateGray;" class="ml-1 mt-1"> - Representados:</h3>

<table style="background-color: #F9F7F7;" class="table table-bordered table-sm" >

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







<?php

  $el_id_es =  $row_datos_estudiantes_YUT['id_estud'];  

include("../conectar.php");

               $querymod_pre = "SELECT id_estud, id_reg_pagos, cursa_actualmente FROM reg_estu_actual
            where id_estud = '$el_id_es'
            and cursa_actualmente = '$cicloJKL' limit 1 ";

              $datos_mod_pre = mysqli_query($enlace, $querymod_pre) or die(mysqli_error());              
              $row_datos_mod_pre = mysqli_fetch_assoc($datos_mod_pre);
              $el_id_del_pago_es =  $row_datos_mod_pre['id_reg_pagos'];
                         
mysqli_close($enlace);   






include("../conectar.php");

              $querymod9 = "SELECT * FROM reg_pagos where id_pago = '$el_id_del_pago_es' ";

              $datos_mod9 = mysqli_query($enlace, $querymod9) or die(mysqli_error());
              
              $row_datos_mod9 = mysqli_fetch_array($datos_mod9);
                         
              mysqli_close($enlace);   






include("../conectar.php");

              $querymod999 = "SELECT id_periodo_es FROM temporada_escolar where old = '5' ";

              $datos_mod999 = mysqli_query($enlace, $querymod999) or die(mysqli_error());
              
              $row_datos_mod999 = mysqli_fetch_array($datos_mod999);

              $el_id_del_periodo_viejo =   $row_datos_mod999['id_periodo_es'];
                         
              mysqli_close($enlace);   


?>












     
  <td class="align-middle p-2" align="center">


    <?php

    $deuda_anterior = 0;
    $mes_mensaje = '';
    $total_pre999 = 0;

    $show_div = 'none';

if ($el_id_del_periodo_viejo != $row_datos_periodo_act1['id_periodo_es'] ) {

include("../conectar.php");
              $querymod_pre999 = "SELECT id_estud, id_reg_pagos, cursa_actualmente FROM reg_estu_actual
            where id_estud = '$el_id_es'
            and cursa_actualmente = '$el_id_del_periodo_viejo' limit 1 ";

              $datos_mod_pre999 = mysqli_query($enlace, $querymod_pre999) or die(mysqli_error());              
              $row_datos_mod_pre999 = mysqli_fetch_assoc($datos_mod_pre999);

              $total_pre999 = mysqli_num_rows($datos_mod_pre999);

              $el_id_del_pago_anterior =  $row_datos_mod_pre999['id_reg_pagos'];                         
mysqli_close($enlace);   


}



if ($total_pre999 >= 1) { 
include("../conectar.php");
              $querymod9_old = "SELECT * FROM reg_pagos where id_pago = '$el_id_del_pago_anterior' ";
              $datos_mod9_old = mysqli_query($enlace, $querymod9_old) or die(mysqli_error());              
              $row_datos_mod9_old = mysqli_fetch_array($datos_mod9_old);
mysqli_close($enlace);  

             $primero_old =  $row_datos_mod9_old['1er_pago'];
             $segundo_old =  $row_datos_mod9_old['2do_pago'];
             $tercero_old =  $row_datos_mod9_old['3er_pago'];
             $cuarto_old =  $row_datos_mod9_old['4to_pago'];
             $quinto_old =  $row_datos_mod9_old['5to_pago'];
             $sexto_old =  $row_datos_mod9_old['6to_pago'];
             $septimo_old =  $row_datos_mod9_old['7mo_pago'];
             $octavo_old =  $row_datos_mod9_old['8vo_pago'];
             $noveno_old =  $row_datos_mod9_old['9no_pago'];
             $decimo_old =  $row_datos_mod9_old['10m_pago'];
             $onceavo_old =  $row_datos_mod9_old['11o_pago'];
             $doceavo_old =  $row_datos_mod9_old['12o_pago'];


             if ($primero_old < 1) {              
              $deuda_anterior =  $deuda_anterior + 1;
             }
             if ($segundo_old < 1) {              
              $deuda_anterior =  $deuda_anterior + 1;
             }
             if ($tercero_old < 1) {              
              $deuda_anterior =  $deuda_anterior + 1;
             }
             if ($cuarto_old < 1) {              
              $deuda_anterior =  $deuda_anterior + 1;
             }
             if ($quinto_old < 1) {              
              $deuda_anterior =  $deuda_anterior + 1;
             }
             if ($sexto_old < 1) {              
              $deuda_anterior =  $deuda_anterior + 1;
             }
             if ($septimo_old < 1) {              
              $deuda_anterior =  $deuda_anterior + 1;
             }
             if ($octavo_old < 1) {              
              $deuda_anterior =  $deuda_anterior + 1;
             }
             if ($noveno_old < 1) {              
              $deuda_anterior =  $deuda_anterior + 1;
             }
             if ($decimo_old < 1) {              
              $deuda_anterior =  $deuda_anterior + 1;
             }
             if ($onceavo_old < 1) {              
              $deuda_anterior =  $deuda_anterior + 1;
             }
             if ($doceavo_old < 1) {              
              $deuda_anterior =  $deuda_anterior + 1;
             }
                     

             if ($deuda_anterior != '') {

                $show_div = '';
               
               if ($deuda_anterior == 1)  { $mes_mensaje = 'mes';   }

               if ($deuda_anterior >= 2)  { $mes_mensaje = 'meses';   }

                     }

}





    ?>     





<div class="form-row mb-3" style="display:<?php echo $show_div; ?> " >   
  <div class="col-md-12">
  <span><i style="color: green;" class="fas fa-dollar-sign fa-2x fa-spin"></i> &nbsp;<span style="color:darkorange;"><b>Adeuda <?php echo $deuda_anterior; ?> <?php echo $mes_mensaje; ?>,&nbsp;<i style="color: green;" class="fas fa-dollar-sign fa-2x fa-spin"></i>
    <br> ciclo/año anterior. </b><span></span>   <br>

 <b><a href="plantilla_representantes_pagos_ci_el.php?tituloJKL=Historial&ciclo=<?php echo $el_id_del_periodo_viejo;?>&alertin=100&criterio=<?php echo $row_datos_estudiantes['ci_repre'];  ?>"><i class="fas fa-hand-holding-usd fa-lg"></i>&nbsp; "Revisar"</a></b>



  <br>
</div>
</div>







<div class="mb-3">
<div class="form-row">
<div class="col-md-12">  <!--
<button type="button" class="btn btn-danger btn-sm btn-lg btn-block"
 data-toggle="modal"  data-target="#borrar_registro<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>">
                                                  <i class="fas fa-bomb"></i>&nbsp; Borrar Registro </button>  -->


<?php
$este_es_el_dicho = $row_datos_estudiantes_YUT['id_estud'];
include("../conectar.php");
$buscar_todos_beca = "SELECT * FROM extra_catedra where id_estud = '$este_es_el_dicho' and id_area = '88' limit 1 "; 
$encuentralos_ya_beca = mysqli_query($enlace, $buscar_todos_beca) or die(mysqli_error()); 
$row_encuentralos_ya_beca = mysqli_fetch_array($encuentralos_ya_beca); 
$totalRows_findx_beca = mysqli_num_rows($encuentralos_ya_beca);
mysqli_close($enlace);  
 ?>


<span <?php if ( $totalRows_findx_beca >= 1 ){?>style="display:none"<?php } ?>   >
<button type="button" class="btn btn-primary btn-sm btn-lg btn-block"
 data-toggle="modal"  data-target="#pasar_a_becado<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>">
                                                 <i class="far fa-laugh-wink fa-lg"></i>&nbsp; ¡ Becar ! </button></span>


<span <?php if ( $totalRows_findx_beca == 0 ){?>style="display:none"<?php } ?>   >
<button type="button" class="btn btn-primary btn-sm btn-lg btn-block"
 data-toggle="modal"  data-target="#mod_becado<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>">
                                                 <i class="far fa-laugh-wink fa-lg"></i>&nbsp; ¡ Actualizar Beca ! </button></span>



</div>  <!-- este ultimo identifica cual modal abrir --> 
 
</div>
</div>




<!-- ini modal becar --> 
<div class="modal fade" id="pasar_a_becado<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
<p style="font-size: 22px;">Alumno(a): " <?php echo $row_datos_estudiantes_YUT['nombre_estu'];?>, <b><?php echo $row_datos_estudiantes_YUT['apellidos_estu'] ;?></b>. " </p> <br>
</div>  

<h5>Observaciones:</h5> 
<input type="text" maxlength="149" class="form-control" id="obs_beca" name="obs_beca" rows="2" required>
</div>

<br>
<p class="text-info"><b>Info:</b> Para que los representantes observen las notas y/o boletas de los estudiantes con beca completa, será necesario agregarle manualmente un monto o valor mínimo al pago de cada mes;  <b>Ejemplo: 1.</b></p>

</div> <!-- cierre modal body -->
      <div class="modal-footer">  
  <input name="id_estudiii" type="hidden" value="<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>"> 
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="becar_alumno" class="btn btn-primary"
    value="<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>" >Becar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 






<!-- ini modal editar --> 
<div class="modal fade" id="mod_becado<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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

<br>
<p class="text-info"><b>Info:</b> Para que los representantes observen las notas y/o boletas de los estudiantes con beca completa, será necesario agregarle manualmente un monto o valor mínimo al pago de cada mes;  <b>Ejemplo: 1.</b></p>

</div> <!-- cierre modal body -->
      <div class="modal-footer">  
  <input name="id_estudiii" type="hidden" value="<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>"> 

    <button type="submit" name="delete_beca_alumno" class="btn btn-danger"
    value="<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>" >Eliminar Beca</button>

    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>




    <button type="submit" name="mod_beca_alumno" class="btn btn-primary"
    value="<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>" >Actualizar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 




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

        <span style="color: red;"><b>Borrar el registro y el historial de pagos ciclo:<span style="color: black;"> <?php echo $row_datos_periodo_act1['periodo_escolar']; ?></span> ? </b></span>&nbsp;&nbsp;

 <form method="post">

  <input name="id_del_registro" type="hidden" value="<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>">  

    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

    <button type="submit" name="eliminar_registro_alumno" class="btn btn-danger"
    value="<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>" > Borrar</button>

      </div>
      </form>

    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 




















<div class="row"> 

<?php

include("../conectar.php");

  $el_id_es =  $row_datos_estudiantes_YUT['id_estud'];   

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


 <style type="text/css">
  
#slideshow<?php echo $row_datos_estudiantes_YUT['id_estud']; ?> { 
  margin: 1px auto; 
  position: relative; 
  width: 116px; 
  height: 146px; 
  padding: 1px; 
  box-shadow: 0 0 10px rgba(0,0,0,0.4); 
}

#slideshow<?php echo $row_datos_estudiantes_YUT['id_estud']; ?> > div { 
  position: absolute; 
  top: 2px; 
  left: 1px; 
  right: 1px; 
  bottom: 1px; 
}


</style>

<div id="slideshow<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>">
  <div>
    <img id="" src="<?php echo $row_datos_estudiantes_YUT['foto_estu']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio5.jpg';" width="110px" /> 
  </div>




<?php

             

                  $dir = '../0000 Fotos Respaldo/*/';
                  $comienzo = '<img id="myImgalt" src=" ';
                  $final = '" width="40px" />';

                  $num = 0;

include("../conectar.php");



foreach(glob($dir.''.$el_id_es.'_*.png') as $file) {

  if ($num < 18) {
    $num++;

echo '<div>';
echo '<img id="" src="'.$file.'" width="110px" /> ';
echo '</div>';
    
  }

  else {break;}

   


}

             


mysqli_close($enlace);  

                    ?>

 </div>  



<script type="text/javascript">
  

$("#slideshow<?php echo $row_datos_estudiantes_YUT['id_estud']; ?> > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow<?php echo $row_datos_estudiantes_YUT['id_estud']; ?> > div:first')
  .fadeOut(1000)
  .next()
  .fadeIn(1000)
  .end()
  .appendTo('#slideshow<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>');
}, 5000);



</script>




</div>


                  <br> 

 <?php  if ($row_datos_estudiantes_YUT['retirado_si_o_no'] == '1') {
      $resultiBB = '<b><span style="color:purple;"> " RETIRADO " <i class="fas fa-hand-paper fa-lg"></i> </span></b>&nbsp;<br>'  ;
      
      echo $resultiBB;
    }   ?>


 <b><a href="plantilla_estudiantes_search_id.php?ciclo=<?php echo $row_datos_estudiantes_YUT['cursa_actualmente'];?>&tituloJKL=Resultados&criterio=<?php echo $row_datos_estudiantes_YUT['ci_estu'];?>&alertin=0"><i class="fas fa-link"></i> Doc Id:</a></b>

  <span style="color:blue;"><?php echo $row_datos_estudiantes_YUT['ci_estu'];  ?></span><br>
                  <?php echo $row_datos_estudiantes_YUT['apellidos_estu'];?>,<br><b><?php echo $row_datos_estudiantes_YUT['nombre_estu'];  ?></b><br>
                    <?php echo $row_datos_estudiantes_YUT['nombre_grados'];?> - "<b><?php echo $row_datos_estudiantes_YUT['nombre_seccion'];?></b>"

<br>


<form method="post">    

  <input name="id_del_registro" type="hidden" value="<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>">


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



 
<span style="color:orange; font-size: 18px;"><b><i>

<?php 

$mensaje = '';

$el_becario = $row_datos_estudiantes_YUT['id_estud'];

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

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['ins_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$fi_nombre = strtok($row_datos_quien['nombres'], ' ');
$fi_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $fi_nombre = 'Sin';
  $fi_apellido = 'Identificación';
}

?> 



<div class="border border-dark">

 <div class="input-group input-group-sm mb-2 mt-1 ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-dark" id="basic-addon1">Abono Inscrip:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="abono_ins" value="<?php echo $row_datos_mod9['abono_ins']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>

 <div class="input-group input-group-sm mb-1 ">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-dark"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control" name="fecha_abono_ins" id="fecha_abono_ins" value="<?php echo $row_datos_mod9['fecha_abono_ins']; ?>">
        </div>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-dark" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control" name="recibo_abono_ins" id="recibo_abono_ins" value="<?php echo $row_datos_mod9['recibo_abono_ins']; ?>">
</div>


<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-dark" for="inputGroupSelectins">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_abono_ins" name="mod_forma_abono_ins">

<option value="<?php echo $row_datos_mod9['forma_abono_insc']; ?>" selected><?php echo $row_datos_mod9['forma_abono_insc']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>

<option disabled></option>
    <option value="">Borrar Campo</option>

  </select>
</div>




 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-dark" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="mod_num_trans_abono_insc" 
  id="mod_num_trans_abono_insc" value="<?php echo $row_datos_mod9['num_trans_abono_insc']; ?>">

  
</div>



</div>




<div class="input-group input-group-sm border border-success mb-1 mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $fi_nombre; ?> <?php echo $fi_apellido; ?>." >

      <b>Inscripción</b>&nbsp; <i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text"  class="form-control" name="monto_ins"   id="monto_ins<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>"
   value="<?php echo $row_datos_mod9['Inscripcion']; ?>"  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >
 
</div>






        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control" name="fecha_ins" id="fecha_ins" value="<?php echo $row_datos_mod9['fecha_pago_ins']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control" name="recibo_ins" id="recibo_ins<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_pago_insc']; ?>">
</div>



<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-success" for="inputGroupSelectins">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_ins" name="mod_forma_ins">

<option value="<?php echo $row_datos_mod9['forma_insc']; ?>" selected><?php echo $row_datos_mod9['forma_insc']; ?></option>
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
    <span class="input-group-text alert-success" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="mod_num_trans_insc" id="mod_num_trans_insc<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_insc']; ?>">

  


</div>



<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: green; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">










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


<?php /*comprobar si el estudiante esta inscrito */


$su_id_es = $row_datos_estudiantes_YUT['id_estud'];

include("../conectar.php");

$comprobar_c = "SELECT * FROM reg_estu_actual where id_estud = '$su_id_es' ";
$datos_comprobar_c = mysqli_query($enlace, $comprobar_c) or die(mysqli_error());

$totalRows_cuantos = mysqli_num_rows($datos_comprobar_c); 

mysqli_close($enlace);




$el_id_AcualPPP = $row_datos_estudiantes_YUT['id_reg_estu_actual'];

if ($row_datos_estudiantes_YUT['fecha_inscripcion'] == '' && $totalRows_cuantos >=2 ) {

$bandera_de_inscripcion = '0';
$mensaje = 'he inscribir.';


}

else { $bandera_de_inscripcion = '1'; $mensaje = ''; }



 ?>  

<input type="hidden" id="id_del_actualP"   name="id_del_actualP"  value="<?php echo $el_id_AcualPPP; ?>">

<input type="hidden" id="el_id_del_est"   name="el_id_del_est"  value="<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>">

<input type="hidden" id="banderin_rt"   name="banderin_rt"  value="<?php echo $bandera_de_inscripcion; ?>">


<input type="hidden" id="valor_insc"        name="valor_insc"       value="<?php echo $row_datos_mod9['Inscripcion']; ?>">


<input type="hidden" id="dato_abono_ins"        name="dato_abono_ins"       value="<?php echo $row_datos_mod9['abono_ins']; ?>">


<input type="hidden" id="id_quien"          name="id_quien"         value="<?php echo $row_datos_mod9['ins_quien']; ?>">
<input type="hidden" id="id_quien_actual"   name="id_quien_actual"  value="<?php echo $_SESSION['id']; ?>">

<button type="submit" name="save_ins" class="btn btn-success btn-sm btn-lg btn-block">
<i class="fas fa-hdd"></i>&nbsp;Actualizar&nbsp;<?php echo $mensaje; ?></button>

<?php

if ($mensaje != '' ) {
  $mostrar_boton = '';
}

else {$mostrar_boton = 'none';}


 ?>

<div style="display: <?php echo $mostrar_boton; ?>" >
  <br>
<button type="submit" name="solo_save" class="btn btn-primary btn-sm btn-lg btn-block">
<i class="far fa-save"></i>&nbsp;Actualizar y Mantener Pre-Inscrito(a)&nbsp;</button>
</div>



</div>

<!-- </form> -->

</div>
</div>



                      </td>

                    

                      

                      <td class="align-middle p-2" align="center"  >
                        
<!-- <form method="post">  -->

  <input name="id_del_registro" type="hidden" value="<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>">

<div class="border border-dark">

<small id="" class="text-muted">Realizado junto a la inscripción.</small>
 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="1er_abono" value="<?php echo $row_datos_mod9['abono_1er']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >



</div></div>




  <?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['1er_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f1_nombre = strtok($row_datos_quien['nombres'], ' ');
$f1_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f1_nombre = 'Sin';
  $f1_apellido = 'Identicación';
}

?> 




<div class="input-group input-group-sm border border-warning mt-1 mb-1">
  <div class="input-group-prepend">



    <span class="input-group-text alert-warning">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f1_nombre; ?> <?php echo $f1_apellido; ?>." >

  <b><?php echo $primer_pago; ?></b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="1er_pago" id="1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['1er_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >


<?php

if ($row_datos_mod9['1er_pago'] > 1) {
  $unohidd = 'display: none;';
}

else { $unohidd = '';}

 ?>


<div class="input-group-append" style="<?php echo $unohidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="1er_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


 
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#1er_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {


        $("#1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#monto_ins<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());

    } else {
        $('#1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;
        
      }    

   });

});


</script>





        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_1er_pago" id="fecha_1er_pago"  value="<?php echo $row_datos_mod9['fecha_1er_pago']; ?>">



        </div>



<?php

if ($row_datos_mod9['recibo_1er_pago'] > 1) {
  $unorecibo = 'display: none;';
}

else { $unorecibo = '';}

 ?>


        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_1er_pago" id="recibo_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_1er_pago']; ?>">

<div class="input-group-append" style="<?php echo $unorecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="1er_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


</div>



<script type="text/javascript">
  
$(document).ready(function() {
$("#1er_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_ins<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>



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


<?php

if ($row_datos_mod9['num_trans_1er'] > 1) {
  $uno_trans_hidd = 'display: none;';
}

else { $uno_trans_hidd = '';}

 ?>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_1er_pago" id="trans_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_1er']; ?>">

  

  <div class="input-group-append" style="<?php echo $uno_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="1er_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#1er_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#mod_num_trans_insc<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


</div>


<input type="hidden" id="1err_pago"        name="1err_pago"       value="<?php echo $row_datos_mod9['1er_pago']; ?>">
<input type="hidden" id="2doo_pago"        name="2doo_pago"       value="<?php echo $row_datos_mod9['2do_pago']; ?>">
<input type="hidden" id="3err_pago"        name="3err_pago"       value="<?php echo $row_datos_mod9['3er_pago']; ?>">

<input type="hidden" id="1er_quien"          name="1er_quien"         value="<?php echo $row_datos_mod9['1er_quien']; ?>">
<input type="hidden" id="2do_quien"          name="2do_quien"         value="<?php echo $row_datos_mod9['2do_quien']; ?>">
<input type="hidden" id="3er_quien"          name="3er_quien"         value="<?php echo $row_datos_mod9['3er_quien']; ?>">

<input type="hidden" id="id_quien_actual"   name="id_quien_actual"  value="<?php echo $_SESSION['id']; ?>">



<button type="submit" name="save_1er_tri" class="btn btn-sm btn-warning btn-lg btn-block mt-3"><i class="fas fa-hdd"></i>&nbsp; Guardar - Actualizar</button>




<div class="border border-dark mt-3">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $primer_pago; ?></small>

 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="2do_abono" value="<?php echo $row_datos_mod9['abono_2do']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div> </div>



<?php

if ($row_datos_mod9['2do_pago'] > 1) {
  $doshidd = 'display: none;';
}

else { $doshidd = '';}

 ?>



<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['2do_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f2_nombre = strtok($row_datos_quien['nombres'], ' ');
$f2_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f2_nombre = 'Sin';
  $f2_apellido = 'Identicación';
}

?> 



<div class="input-group input-group-sm border border-warning  mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f2_nombre; ?> <?php echo $f2_apellido; ?>." >

  <b><?php echo $segundo_pago; ?></b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="2do_pago" id="2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['2do_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >
  

<div class="input-group-append" style="<?php echo $doshidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="2do_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#2do_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>




        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_2do_pago" value="<?php echo $row_datos_mod9['fecha_2do_pago']; ?>">
        </div>



<?php

if ($row_datos_mod9['recibo_2do_pago'] > 1) {
  $dosrecibo = 'display: none;';
}

else { $dosrecibo = '';}

 ?>



        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_2do_pago" id="recibo_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_2do_pago']; ?>">

 <div class="input-group-append" style="<?php echo $dosrecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="2do_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#2do_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>



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

<?php

if ($row_datos_mod9['num_trans_2do'] > 1) {
  $dos_trans_hidd = 'display: none;';
}

else { $dos_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_2do_pago" id="trans_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_2do']; ?>">

  

  <div class="input-group-append" style="<?php echo $dos_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="2do_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#2do_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: gold; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">



<div class="border border-dark mt-3">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $segundo_pago; ?></small>


 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="3er_abono" value="<?php echo $row_datos_mod9['abono_3er']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>  </div>

<?php

if ($row_datos_mod9['3er_pago'] > 1) {
  $treshidd = 'display: none;';
}

else { $treshidd = '';}

 ?>




<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['3er_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f3_nombre = strtok($row_datos_quien['nombres'], ' ');
$f3_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f3_nombre = 'Sin';
  $f3_apellido = 'Identicación';
}

?> 



<div class="input-group input-group-sm border border-warning mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f3_nombre; ?> <?php echo $f3_apellido; ?>." >

  <b><?php echo $tercero_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="3er_pago" id="3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['3er_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

<div class="input-group-append" style="<?php echo $treshidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="3er_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>
  
</div>



<script type="text/javascript">
  
$(document).ready(function() {
$("#3er_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>



<?php

if ($row_datos_mod9['recibo_3er_pago'] > 1) {
  $tresrecibo = 'display: none;';
}

else { $tresrecibo = '';}

 ?>

        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_3er_pago"  value="<?php echo $row_datos_mod9['fecha_3er_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_3er_pago" id="recibo_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_3er_pago']; ?>">

 <div class="input-group-append" style="<?php echo $tresrecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="3er_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>



<script type="text/javascript">
  
$(document).ready(function() {
$("#3er_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>



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

<?php

if ($row_datos_mod9['num_trans_3er'] > 1) {
  $tres_trans_hidd = 'display: none;';
}

else { $tres_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_3er_pago" id="trans_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_3er']; ?>">

  


     <div class="input-group-append" style="<?php echo $tres_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="3er_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#3er_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


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




<div class="mb-1">
<div class="form-row">
<div class="col-md-12">
<button type="submit" name="save_1er_tri" class="btn btn-sm btn-warning btn-lg btn-block"><i class="fas fa-hdd"></i>&nbsp; Guardar - Actualizar</button>
</div>

<!-- </form>  -->




</div>
</div>





                      </td>





                      <td class="align-middle p-2" align="center">
   
<!--   <form method="post"> -->

  <input name="id_del_registro" type="hidden" value="<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>">
                     

<div class="border border-dark">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $tercero_pago; ?></small>

<div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="4to_abono" value="<?php echo $row_datos_mod9['abono_4to']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div> </div>

<?php

if ($row_datos_mod9['4to_pago'] > 1) {
  $cuatrohidd = 'display: none;';
}

else { $cuatrohidd = '';}

 ?>



<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['4to_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f4_nombre = strtok($row_datos_quien['nombres'], ' ');
$f4_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f4_nombre = 'Sin';
  $f4_apellido = 'Identicación';
}

?> 


<div class="input-group input-group-sm border border-info mb-1 mt-1 ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info">


<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f4_nombre; ?> <?php echo $f4_apellido; ?>." >
  <b><?php echo $cuarto_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="4to_pago" id="4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['4to_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' ">

<div class="input-group-append" style="<?php echo $cuatrohidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="4to_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#4to_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
 
</div>




<?php

if ($row_datos_mod9['recibo_4to_pago'] > 1) {
  $cuatrorecibo = 'display: none;';
}

else { $cuatrorecibo = '';}

 ?>

        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_4to_pago" value="<?php echo $row_datos_mod9['fecha_4to_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_4to_pago" id="recibo_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_4to_pago']; ?>">

 <div class="input-group-append" style="<?php echo $cuatrorecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="4to_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#4to_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

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


<?php

if ($row_datos_mod9['num_trans_4to'] > 1) {
  $cuatro_trans_hidd = 'display: none;';
}

else { $cuatro_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_4to_pago" id="trans_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_4to']; ?>">

  

     <div class="input-group-append" style="<?php echo $cuatro_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="4to_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#4to_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>



</div>



<input type="hidden" id="4too_pago"        name="4too_pago"       value="<?php echo $row_datos_mod9['4to_pago']; ?>">
<input type="hidden" id="5too_pago"        name="5too_pago"       value="<?php echo $row_datos_mod9['5to_pago']; ?>">
<input type="hidden" id="6too_pago"        name="6too_pago"       value="<?php echo $row_datos_mod9['6to_pago']; ?>">

<input type="hidden" id="4to_quien"          name="4to_quien"         value="<?php echo $row_datos_mod9['4to_quien']; ?>">
<input type="hidden" id="5to_quien"          name="5to_quien"         value="<?php echo $row_datos_mod9['5to_quien']; ?>">
<input type="hidden" id="6to_quien"          name="6to_quien"         value="<?php echo $row_datos_mod9['6to_quien']; ?>">

<input type="hidden" id="id_quien_actual"   name="id_quien_actual"  value="<?php echo $_SESSION['id']; ?>">




<button type="submit" name="save_2do_tri" class="btn btn-sm btn-info btn-lg btn-block mt-3"><i class="fas fa-hdd"></i>&nbsp; Guardar - Actualizar</button>


<div class="border border-dark mt-3">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $cuarto_pago; ?></small>



 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="5to_abono" value="<?php echo $row_datos_mod9['abono_5to']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>  </div>

<?php

if ($row_datos_mod9['5to_pago'] > 1) {
  $quintohidd = 'display: none;';
}

else { $quintohidd = '';}

 ?>



<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['5to_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f5_nombre = strtok($row_datos_quien['nombres'], ' ');
$f5_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f5_nombre = 'Sin';
  $f5_apellido = 'Identicación';
}

?> 



<div class="input-group input-group-sm border border-info mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f5_nombre; ?> <?php echo $f5_apellido; ?>." >

  <b><?php echo $quinto_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="5to_pago" id="5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['5to_pago']; ?>" placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' ">

<div class="input-group-append" style="<?php echo $quintohidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="5to_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#5to_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
  
</div>




<?php

if ($row_datos_mod9['recibo_5to_pago'] > 1) {
  $quintorecibo = 'display: none;';
}

else { $quintorecibo = '';}

 ?>


        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_5to_pago" value="<?php echo $row_datos_mod9['fecha_5to_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_5to_pago" id="recibo_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>"  value="<?php echo $row_datos_mod9['recibo_5to_pago']; ?>">

   <div class="input-group-append" style="<?php echo $quintorecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="5to_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#5to_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

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

<?php

if ($row_datos_mod9['num_trans_5to'] > 1) {
  $quinto_trans_hidd = 'display: none;';
}

else { $quinto_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_5to_pago" id="trans_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_5to']; ?>">

  

  <div class="input-group-append" style="<?php echo $quinto_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="5to_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>



<script type="text/javascript">
  
$(document).ready(function() {
$("#5to_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


</div>

<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: RoyalBlue; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">




<div class="border border-dark mt-3">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $quinto_pago; ?></small>


 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="6to_abono" value="<?php echo $row_datos_mod9['abono_6to']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div> </div>

<?php

if ($row_datos_mod9['6to_pago'] > 1) {
  $sextohidd = 'display: none;';
}

else { $sextohidd = '';}

 ?>




<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['6to_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f6_nombre = strtok($row_datos_quien['nombres'], ' ');
$f6_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f6_nombre = 'Sin';
  $f6_apellido = 'Identicación';
}

?> 


<div class="input-group input-group-sm border border-info mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f6_nombre; ?> <?php echo $f6_apellido; ?>." >
  <b><?php echo $sexto_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="6to_pago" id="6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['6to_pago']; ?>" placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' ">


<div class="input-group-append" style="<?php echo $sextohidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="6to_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#6to_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
  
</div>




<?php

if ($row_datos_mod9['recibo_6to_pago'] > 1) {
  $sextorecibo = 'display: none;';
}

else { $sextorecibo = '';}

 ?>


        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_6to_pago" value="<?php echo $row_datos_mod9['fecha_6to_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_6to_pago" id="recibo_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_6to_pago']; ?>">

   <div class="input-group-append" style="<?php echo $sextorecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="6to_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#6to_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

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

<?php

if ($row_datos_mod9['num_trans_6to'] > 1) {
  $sexto_trans_hidd = 'display: none;';
}

else { $sexto_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_6to_pago" id="trans_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_6to']; ?>">

  


<div class="input-group-append" style="<?php echo $sexto_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="6to_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#6to_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


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


<div class="mb-1">
<div class="form-row">
<div class="col-md-12">
<button type="submit" name="save_2do_tri" class="btn btn-sm btn-info btn-lg btn-block"><i class="fas fa-hdd"></i>&nbsp; Guardar - Actualizar</button>
</div>

<!-- </form>  -->




</div>
</div>





                      </td>









                      <td class="align-middle p-2" align="center">
                        
<!-- <form method="post">  -->

  <input name="id_del_registro" type="hidden" value="<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>">


<div class="border border-dark">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $sexto_pago; ?></small>


 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="7mo_abono" value="<?php echo $row_datos_mod9['abono_7mo']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>  </div> 


<?php

if ($row_datos_mod9['7mo_pago'] > 1) {
  $septimohidd = 'display: none;';
}

else { $septimohidd = '';}

 ?>




<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['7mo_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f7_nombre = strtok($row_datos_quien['nombres'], ' ');
$f7_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f7_nombre = 'Sin';
  $f7_apellido = 'Identicación';
}

?> 



<div class="input-group input-group-sm border border-warning mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f7_nombre; ?> <?php echo $f7_apellido; ?>." >

  <b><?php echo $septimo_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="7mo_pago" id="7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['7mo_pago']; ?>"  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

<div class="input-group-append" style="<?php echo $septimohidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="7mo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#7mo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
 
</div>







        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_7mo_pago" value="<?php echo $row_datos_mod9['fecha_7mo_pago']; ?>">
        </div>



<?php

if ($row_datos_mod9['recibo_7mo_pago'] > 1) {
  $sieterecibo = 'display: none;';
}

else { $sieterecibo = '';}

 ?>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_7mo_pago" id="recibo_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_7mo_pago']; ?>">

 <div class="input-group-append" style="<?php echo $sieterecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="7mo_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#7mo_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

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

<?php

if ($row_datos_mod9['num_trans_7mo'] > 1) {
  $siete_trans_hidd = 'display: none;';
}

else { $siete_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_7mo_pago" id="trans_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_7mo']; ?>">

  


<div class="input-group-append" style="<?php echo $siete_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="7mo_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>



<script type="text/javascript">
  
$(document).ready(function() {
$("#7mo_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


</div>



<input type="hidden" id="7moo_pago"        name="7moo_pago"       value="<?php echo $row_datos_mod9['7mo_pago']; ?>">
<input type="hidden" id="8voo_pago"        name="8voo_pago"       value="<?php echo $row_datos_mod9['8vo_pago']; ?>">
<input type="hidden" id="9noo_pago"        name="9noo_pago"       value="<?php echo $row_datos_mod9['9no_pago']; ?>">

<input type="hidden" id="7mo_quien"          name="7mo_quien"         value="<?php echo $row_datos_mod9['7mo_quien']; ?>">
<input type="hidden" id="8vo_quien"          name="8vo_quien"         value="<?php echo $row_datos_mod9['8vo_quien']; ?>">
<input type="hidden" id="9no_quien"          name="9no_quien"         value="<?php echo $row_datos_mod9['9no_quien']; ?>">

<input type="hidden" id="id_quien_actual"   name="id_quien_actual"  value="<?php echo $_SESSION['id']; ?>">


<button type="submit" name="save_3er_tri" class="btn btn-sm btn-warning btn-lg btn-block mt-3"><i class="fas fa-hdd"></i>&nbsp; Guardar - Actualizar</button>



<div class="border border-dark mt-3">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $septimo_pago; ?></small>


 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="8vo_abono" value="<?php echo $row_datos_mod9['abono_8vo']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div> </div>

<?php

if ($row_datos_mod9['8vo_pago'] > 1) {
  $ochohidd = 'display: none;';
}

else { $ochohidd = '';}

 ?>





<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['8vo_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f8_nombre = strtok($row_datos_quien['nombres'], ' ');
$f8_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f8_nombre = 'Sin';
  $f8_apellido = 'Identicación';
}

?> 

<div class="input-group input-group-sm border border-warning mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f8_nombre; ?> <?php echo $f8_apellido; ?>." >

  <b><?php echo $octavo_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="8vo_pago" id="8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['8vo_pago']; ?>"  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' ">

<div class="input-group-append" style="<?php echo $ochohidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="8vo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#8vo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
  
</div>







        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning "><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_8vo_pago" value="<?php echo $row_datos_mod9['fecha_8vo_pago']; ?>">
        </div>


<?php

if ($row_datos_mod9['recibo_8vo_pago'] > 1) {
  $ochorecibo = 'display: none;';
}

else { $ochorecibo = '';}

 ?>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_8vo_pago" id="recibo_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_8vo_pago']; ?>">


 <div class="input-group-append" style="<?php echo $ochorecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="8vo_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#8vo_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

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



<?php

if ($row_datos_mod9['num_trans_8vo'] > 1) {
  $ocho_trans_hidd = 'display: none;';
}

else { $ocho_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_8vo_pago" id="trans_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_8vo']; ?>">

  

  <div class="input-group-append" style="<?php echo $ocho_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="8vo_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#8vo_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

</div>

<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: gold; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="border border-dark mt-3">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $octavo_pago; ?></small>


 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="9no_abono" value="<?php echo $row_datos_mod9['abono_9no']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>  </div>

<?php

if ($row_datos_mod9['9no_pago'] > 1) {
  $nuevehidd = 'display: none;';
}

else { $nuevehidd = '';}

 ?>



 <?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['9no_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f9_nombre = strtok($row_datos_quien['nombres'], ' ');
$f9_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f9_nombre = 'Sin';
  $f9_apellido = 'Identicación';
}

?> 



<div class="input-group input-group-sm border border-warning mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f9_nombre; ?> <?php echo $f9_apellido; ?>." >

  <b><?php echo $noveno_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="9no_pago" id="9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['9no_pago']; ?>"  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' "  >

<div class="input-group-append" style="<?php echo $nuevehidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="9no_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#9no_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
  
</div>







        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_9no_pago" value="<?php echo $row_datos_mod9['fecha_9no_pago']; ?>">
        </div>


<?php

if ($row_datos_mod9['recibo_9no_pago'] > 1) {
  $nueverecibo = 'display: none;';
}

else { $nueverecibo = '';}

 ?>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_9no_pago" id="recibo_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_9no_pago']; ?>">

   <div class="input-group-append" style="<?php echo $nueverecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="9no_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#9no_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


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

<?php

if ($row_datos_mod9['num_trans_9no'] > 1) {
  $nueve_trans_hidd = 'display: none;';
}

else { $nueve_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_9no_pago" id="trans_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_9no']; ?>">

 


<div class="input-group-append" style="<?php echo $nueve_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="9no_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#9no_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

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


<div class="mb-1">
<div class="form-row">
<div class="col-md-12">
<button type="submit" name="save_3er_tri" class="btn btn-sm btn-warning btn-lg btn-block"><i class="fas fa-hdd"></i>&nbsp; Guardar - Actualizar</button>
</div>

<!-- </form>  -->




</div>
</div>





                      </td>





                      <td class="align-middle p-2" align="center">

                   <!--     <form method="post">   -->

  <input name="id_del_registro" type="hidden" value="<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>">



<div class="border border-dark mt-5">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $noveno_pago; ?></small>

 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="10m_abono" value="<?php echo $row_datos_mod9['abono_10m']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div> </div>

   <?php

if ($row_datos_mod9['10m_pago'] > 1) {
  $diezhidd = 'display: none;';
}

else { $diezhidd = '';}

 ?>




<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['10m_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f10_nombre = strtok($row_datos_quien['nombres'], ' ');
$f10_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f10_nombre = 'Sin';
  $f10_apellido = 'Identicación';
}

?> 


<div class="input-group input-group-sm border border-info mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f10_nombre; ?> <?php echo $f10_apellido; ?>." >

  <b><?php echo $decimo_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="10m_pago" id="10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['10m_pago']; ?>"  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' ">

<div class="input-group-append" style="<?php echo $diezhidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="10m_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>
 
<script type="text/javascript">
  
$(document).ready(function() {
$("#10m_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
</div>





<?php

if ($row_datos_mod9['recibo_10m_pago'] > 1) {
  $diezrecibo = 'display: none;';
}

else { $diezrecibo = '';}

 ?>


        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_10m_pago" value="<?php echo $row_datos_mod9['fecha_10m_pago']; ?>">
        </div>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_10m_pago" id="recibo_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_10m_pago']; ?>">


 <div class="input-group-append" style="<?php echo $diezrecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="10m_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#10m_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

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

<?php

if ($row_datos_mod9['num_trans_10m'] > 1) {
  $diez_trans_hidd = 'display: none;';
}

else { $diez_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_10m_pago" id="trans_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_10m']; ?>">

 

  <div class="input-group-append" style="<?php echo $diez_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="10m_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#10m_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

</div>

<input type="hidden" id="10mm_pago"        name="10mm_pago"       value="<?php echo $row_datos_mod9['10m_pago']; ?>">
<input type="hidden" id="11oo_pago"        name="11oo_pago"       value="<?php echo $row_datos_mod9['11o_pago']; ?>">
<input type="hidden" id="12oo_pago"        name="12oo_pago"       value="<?php echo $row_datos_mod9['12o_pago']; ?>">

<input type="hidden" id="10m_quien"          name="10m_quien"         value="<?php echo $row_datos_mod9['10m_quien']; ?>">
<input type="hidden" id="11o_quien"          name="11o_quien"         value="<?php echo $row_datos_mod9['11o_quien']; ?>">
<input type="hidden" id="12o_quien"          name="12o_quien"         value="<?php echo $row_datos_mod9['12o_quien']; ?>">

<input type="hidden" id="id_quien_actual"   name="id_quien_actual"  value="<?php echo $_SESSION['id']; ?>">

<button type="submit" name="save_4to_tri"  class="btn btn-sm btn-info btn-lg btn-block mt-3"><i class="fas fa-hdd"></i>&nbsp; Guardar - Actualizar</button>


<div class="border border-dark mt-3">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $decimo_pago; ?></small>


 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="11o_abono" value="<?php echo $row_datos_mod9['abono_11o']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div> </div>

<?php

if ($row_datos_mod9['11o_pago'] > 1) {
  $oncehidd = 'display: none;';
}

else { $oncehidd = '';}

 ?>



<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['11o_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f11_nombre = strtok($row_datos_quien['nombres'], ' ');
$f11_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f11_nombre = 'Sin';
  $f11_apellido = 'Identicación';
}

?> 



<div class="input-group input-group-sm border border-info mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info">
<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f11_nombre; ?> <?php echo $f11_apellido; ?>." >

  <b><?php echo $onceavo_pago; ?>  </b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="11o_pago" id="11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['11o_pago']; ?>"   placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' "  >

<div class="input-group-append" style="<?php echo $oncehidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="11o_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#11o_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
  
</div>





        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_11o_pago" value="<?php echo $row_datos_mod9['fecha_11o_pago']; ?>">
        </div>


<?php

if ($row_datos_mod9['recibo_11o_pago'] > 1) {
  $oncerecibo = 'display: none;';
}

else { $oncerecibo = '';}

 ?>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_11o_pago"  id="recibo_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_11o_pago']; ?>">

 <div class="input-group-append" style="<?php echo $oncerecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="11o_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#11o_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

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

<?php

if ($row_datos_mod9['num_trans_11o'] > 1) {
  $once_trans_hidd = 'display: none;';
}

else { $once_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_11o_pago" id="trans_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_11o']; ?>">

  

<div class="input-group-append" style="<?php echo $once_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="11o_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#11o_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

</div>


<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: RoyalBlue; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">

<div class="border border-dark mt-3">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $onceavo_pago; ?></small>



 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="12o_abono" id="12o_abono" value="<?php echo $row_datos_mod9['abono_12o']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div> </div>

<?php

if ($row_datos_mod9['12o_pago'] > 1) {
  $docehidd = 'display: none;';
}

else { $docehidd = '';}

 ?>


<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['12o_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f12_nombre = strtok($row_datos_quien['nombres'], ' ');
$f12_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f12_nombre = 'Sin';
  $f12_apellido = 'Identicación';
}

?> 



<div class="input-group input-group-sm border border-info mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f12_nombre; ?> <?php echo $f12_apellido; ?>." >

  <b><?php echo $doceavo_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="12o_pago" id="12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['12o_pago']; ?>"   placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' "   >


<div class="input-group-append" style="<?php echo $docehidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="12o_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#12o_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
  
</div>







        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_12o_pago" value="<?php echo $row_datos_mod9['fecha_12o_pago']; ?>">
        </div>


<?php

if ($row_datos_mod9['recibo_12o_pago'] > 1) {
  $docerecibo = 'display: none;';
}

else { $docerecibo = '';}

 ?>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_12o_pago"  id="recibo_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_12o_pago']; ?>">


 <div class="input-group-append" style="<?php echo $docerecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="12o_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#12o_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

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

<?php

if ($row_datos_mod9['num_trans_12o'] > 1) {
  $doce_trans_hidd = 'display: none;';
}

else { $doce_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_12o_pago" id="trans_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_12o']; ?>">

  

  <div class="input-group-append" style="<?php echo $doce_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="12o_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#12o_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


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



<div class="mb-0">
<div class="form-row">
<div class="col-md-12">
<button type="submit" name="save_4to_tri"  class="btn btn-sm btn-info btn-lg btn-block"><i class="fas fa-hdd"></i>&nbsp; Guardar - Actualizar</button>
</div>


<input type="hidden" id="valor_insc"        name="valor_insc"       value="<?php echo $row_datos_mod9['Inscripcion']; ?>">

<input type="hidden" id="dato_abono_ins"        name="dato_abono_ins"       value="<?php echo $row_datos_mod9['abono_ins']; ?>">

<input type="hidden" id="id_quien"          name="id_quien"         value="<?php echo $row_datos_mod9['ins_quien']; ?>">

<input type="hidden" id="1err_pago"        name="1err_pago"       value="<?php echo $row_datos_mod9['1er_pago']; ?>">
<input type="hidden" id="2doo_pago"        name="2doo_pago"       value="<?php echo $row_datos_mod9['2do_pago']; ?>">
<input type="hidden" id="3err_pago"        name="3err_pago"       value="<?php echo $row_datos_mod9['3er_pago']; ?>">

<input type="hidden" id="1er_quien"          name="1er_quien"         value="<?php echo $row_datos_mod9['1er_quien']; ?>">
<input type="hidden" id="2do_quien"          name="2do_quien"         value="<?php echo $row_datos_mod9['2do_quien']; ?>">
<input type="hidden" id="3er_quien"          name="3er_quien"         value="<?php echo $row_datos_mod9['3er_quien']; ?>">

<input type="hidden" id="4too_pago"        name="4too_pago"       value="<?php echo $row_datos_mod9['4to_pago']; ?>">
<input type="hidden" id="5too_pago"        name="5too_pago"       value="<?php echo $row_datos_mod9['5to_pago']; ?>">
<input type="hidden" id="6too_pago"        name="6too_pago"       value="<?php echo $row_datos_mod9['6to_pago']; ?>">

<input type="hidden" id="4to_quien"          name="4to_quien"         value="<?php echo $row_datos_mod9['4to_quien']; ?>">
<input type="hidden" id="5to_quien"          name="5to_quien"         value="<?php echo $row_datos_mod9['5to_quien']; ?>">
<input type="hidden" id="6to_quien"          name="6to_quien"         value="<?php echo $row_datos_mod9['6to_quien']; ?>">


<input type="hidden" id="7moo_pago"        name="7moo_pago"       value="<?php echo $row_datos_mod9['7mo_pago']; ?>">
<input type="hidden" id="8voo_pago"        name="8voo_pago"       value="<?php echo $row_datos_mod9['8vo_pago']; ?>">
<input type="hidden" id="9noo_pago"        name="9noo_pago"       value="<?php echo $row_datos_mod9['9no_pago']; ?>">

<input type="hidden" id="7mo_quien"          name="7mo_quien"         value="<?php echo $row_datos_mod9['7mo_quien']; ?>">
<input type="hidden" id="8vo_quien"          name="8vo_quien"         value="<?php echo $row_datos_mod9['8vo_quien']; ?>">
<input type="hidden" id="9no_quien"          name="9no_quien"         value="<?php echo $row_datos_mod9['9no_quien']; ?>">


<input type="hidden" id="10mm_pago"        name="10mm_pago"       value="<?php echo $row_datos_mod9['10m_pago']; ?>">
<input type="hidden" id="11oo_pago"        name="11oo_pago"       value="<?php echo $row_datos_mod9['11o_pago']; ?>">
<input type="hidden" id="12oo_pago"        name="12oo_pago"       value="<?php echo $row_datos_mod9['12o_pago']; ?>">

<input type="hidden" id="10m_quien"          name="10m_quien"         value="<?php echo $row_datos_mod9['10m_quien']; ?>">
<input type="hidden" id="11o_quien"          name="11o_quien"         value="<?php echo $row_datos_mod9['11o_quien']; ?>">
<input type="hidden" id="12o_quien"          name="12o_quien"         value="<?php echo $row_datos_mod9['12o_quien']; ?>">

<input type="hidden" id="id_quien_actual"   name="id_quien_actual"  value="<?php echo $_SESSION['id']; ?>">





<div class="mt-3 col-md-6">
<button type="submit" name="save_all"  class="btn  btn-success btn-block"><i class="far fa-hand-point-right fa-lg"></i>&nbsp;Guardar Todo&nbsp;<i class="far fa-hand-point-left fa-lg"></i></button>
</div>


</form>


<div class="mt-3 col-md-6">
<form target="_blank" action="zzz_impresiones/imp_diptico_pagos.php" method="POST">

<input type="hidden" id="id_estudxxx" name="id_estudxxx" value="<?php echo $row_datos_estudiantes_YUT['id_estud']; ?>">

 <?php 
             if ($row_datos_estudiantes['foto_repre'] == "")             //  si no hay foto carga la foto vacia del repre
                          {
                             $fotoZR = "../zz_fotos_p/ZZvacio_repre.jpg ";                             
                          }
                else { $fotoZR = $row_datos_estudiantes['foto_repre']; }
                          ?>

                          <input type="hidden" id="foto_reprexxx" name="foto_reprexxx" value="<?php echo $fotoZR; ?>">

                           <?php 
             if ($row_datos_estudiantes_YUT['foto_estu'] == "")             //  si no hay foto carga la foto vacia del estudiante
                          {
                             $fotoZ = "../zz_fotos_p/ZZvacio_alum.jpg ";                             
                          }
                else { $fotoZ = $row_datos_estudiantes_YUT['foto_estu']; }

       $fecha_form_nac = date('d-m-Y', strtotime($row_datos_estudiantes_YUT['nacimiento_estu']));

                          ?>

                          <input type="hidden" id="foto_estuxxx" name="foto_estuxxx" value="<?php echo $fotoZ; ?>">
<input type="hidden" id="apellidos_estuxxx" name="apellidos_estuxxx" value="<?php echo $row_datos_estudiantes_YUT['apellidos_estu']; ?>">
<input type="hidden" id="nombres_estuxxx" name="nombres_estuxxx" value="<?php echo $row_datos_estudiantes_YUT['nombre_estu']; ?>">
<input type="hidden" id="nac_estuxxx" name="nac_estuxxx" value="<?php echo $fecha_form_nac; ?>">

  <?php 
             if ($row_datos_estudiantes_YUT['id_sexo'] == "1")            
                          {
                             $sexo_es = "F.";                             
                          }

               if ($row_datos_estudiantes_YUT['id_sexo'] == "2")            
                          {
                             $sexo_es = "M.";                             
                          } 
                          ?>


<input type="hidden" id="grados_estuxxx" name="grados_estuxxx" value="<?php echo $row_datos_estudiantes_YUT['nombre_grados']; ?>">
<input type="hidden" id="seccion_estuxxx" name="seccion_estuxxx" value="<?php echo $row_datos_estudiantes_YUT['nombre_seccion']; ?>">


<input type="hidden" id="ci_estuxxx" name="ci_estuxxx" value="<?php echo $row_datos_estudiantes_YUT['ci_estu']; ?>">
<input type="hidden" id="apellidos_reprexxx" name="apellidos_reprexxx" value="<?php echo $row_datos_estudiantes['apellido_repre']; ?>">
<input type="hidden" id="nombres_reprexxx" name="nombres_reprexxx" value="<?php echo $row_datos_estudiantes['nombre_repre']; ?>">
<input type="hidden" id="ci_reprexxx" name="ci_reprexxx" value="<?php echo $row_datos_estudiantes['ci_repre']; ?>">

<input type="hidden" id="oficio_reprexxx" name="oficio_reprexxx" value="<?php echo $row_de_ids['nombre_profesion']; ?>">
<input type="hidden" id="parentesco_reprexxx" name="parentesco_reprexxx" value="<?php echo $row_de_ids['nombre_parentesco']; ?>">
<input type="hidden" id="ciclooon" name="ciclooon" value="<?php echo $cicloJKL; ?>">

<input type="hidden" id="periodo_es" name="periodo_es" value="<?php echo $row_datos_periodo_act1['periodo_escolar']; ?>">

<input type="hidden" id="id_reg_pagoooo" name="id_reg_pagoooo" value="<?php echo $el_id_del_pago_es; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-primary btn-block ">
           <i class="fas fa-print"></i>&nbsp;Díptico&nbsp;</button>

</form>
</div>  <!-- cierre div del boton de imprimir -->






</div>
</div>





                      </td>

                      



    </tr>


 <?php } while ($row_datos_estudiantes_YUT = mysqli_fetch_assoc($datos_estudiantes_YUT)); ?>
   
  </tbody>

</table>

</div>       </div>  <!-- cierre del que oculta el div -->


<div class="row mt-3 mb-2">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <img src="../zz_fotos_p/diptico.jpg" class="img-fluid rounded mx-auto d-block"
              >    <!-- imagen responsiva, bordes circulares y alineada al centro-->
          </div>
</div>




<script type="text/javascript">


  
function stripspaces(input)
{
  input.value = input.value.replace(/(^[\s]+|[\s]+$)/g, '');

  return true;
}



</script>











<?php include ("Footer.php"); ?>






