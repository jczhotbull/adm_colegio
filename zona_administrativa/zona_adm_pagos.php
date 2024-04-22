<?php

error_reporting(0);   // con esto no me muestra el error de la variable de secion clavep


include("identificador.php");


  if ($_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Cajero'  )

    {

      session_unset();                     // libera todas las variables de sessión
        setcookie("id", "", time()-60*60);   // crea la cookie id con el valor vacio y que caduque una hora antes.
        $_COOKIE ['id']="";                  // borra el valor de id contenido en el cookie, por medida extra

        setcookie("cargo", "", time()-60*60);   // crea la cookie cargo con el valor vacio y que caduque una hora antes.
        $_COOKIE ['cargo']="";                  // borra el valor de cargo contenido en el cookie, por medida extra

        header("Location: ../index.php");

    }


	$enviado=""; // me dice si  probablemente se envio o no el email
	$sms="";

$exitoZZ="";
$errorZZ="";

header('Cache-Control: max-age=900');

include("../conectar.php");

mysqli_close($enlace);



$d1= "0";
$d2= "0";
$d3= "0";

$doc_1 = "";
$doc_2 = "";
$doc_3 = "";

 $result1 = "";
 $result2 = "";
 $result3 = "";

$enlace_1 = "";
$enlace_2 = "";
$enlace_3 = "";
$enlace_4 = "";
$enlace_5 = "";




if(isset($_POST['actualizar_dinerillo']))
        {


      if (!$_POST['iva_impuesto'])      // verifica que no este vacío
    {   $errorZZ .= "- El Valor del Impuesto no puede estar vacio. "; }
         



      if(!is_numeric($_POST['iva_impuesto']) ) // verifica que sean solo números
      {  $errorZZ .= "- El impuesto ha de ser númerico. "; }


        if ($errorZZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZZ. " ";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
         


         include("../conectar.php");

         $id_col =  $_POST["id_colegio"]; 
         $el_iva =  $_POST["id_del_iva"]; 
         $date = date('Y-m-d H:i:s');


   $sqldinero = "UPDATE z_plantel SET moneyuno = '".mysqli_real_escape_string($enlace,$_POST['moneyaaa'])."' ,
                                  moneydos = '".mysqli_real_escape_string($enlace,$_POST['moneybbb'])."' ,
                                  update_fecha = '$date' 

                                WHERE id_plantel ='$id_col' ";



                                  if (!mysqli_query($enlace,$sqldinero))      // actualiza y si no logra ingresar los datos...
               {
                $errorZZ=" Error llamar al Ing.  ";
               }


               if ($errorZZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZZ. " ";
                             mysqli_close($enlace); 
                          }

            else{


                   $sql_iva = "UPDATE iva SET cant_iva = '".mysqli_real_escape_string($enlace,$_POST['iva_impuesto'])."'
                                                          WHERE id_iva ='$el_iva' ";


                                                          if (!mysqli_query($enlace,$sql_iva))      // actualiza y si no logra ingresar los datos...
                                                           {
                                                            $errorZZ=" Error llamar al Ing.  ";
                                                           }


                                                           if ($errorZZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZZ. " ";
                             mysqli_close($enlace); 
                          }



                          else  {  


                     $exitoZZ = "Cantidades Actualizadas."; 
                }     

                if ($exitoZZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZZ. " "; 
                              mysqli_close($enlace);            
                          }



                           }
  }  // cierre del else
  }

















if(isset($_POST['salvar_los_mesesX']))
        {        


         include("../conectar.php");

         $id_del_periodoX =  $_POST["save_in_this_id"]; 


         $monto_001 =  $_POST["mes_a_meses_01"];
         $monto_002 =  $_POST["mes_a_meses_02"];
         $monto_003 =  $_POST["mes_a_meses_03"];
         $monto_004 =  $_POST["mes_a_meses_04"];
         $monto_005 =  $_POST["mes_a_meses_05"];
         $monto_006 =  $_POST["mes_a_meses_06"];
         $monto_007 =  $_POST["mes_a_meses_07"];
         $monto_008 =  $_POST["mes_a_meses_08"];
         $monto_009 =  $_POST["mes_a_meses_09"];
         $monto_010 =  $_POST["mes_a_meses_10"];
         $monto_011 =  $_POST["mes_a_meses_11"];
         $monto_012 =  $_POST["mes_a_meses_12"]; 


   $sql_mes_pagoX = "UPDATE temporada_escolar SET me_pago_01 = '$monto_001',
                                                  me_pago_02 = '$monto_002',
                                                  me_pago_03 = '$monto_003',
                                                  me_pago_04 = '$monto_004',
                                                  me_pago_05 = '$monto_005',
                                                  me_pago_06 = '$monto_006',
                                                  me_pago_07 = '$monto_007',
                                                  me_pago_08 = '$monto_008',
                                                  me_pago_09 = '$monto_009',
                                                  me_pago_010 = '$monto_010',
                                                  me_pago_011 = '$monto_011',
                                                  me_pago_012 = '$monto_012'  

                                WHERE id_periodo_es ='$id_del_periodoX' ";



                                  if (!mysqli_query($enlace,$sql_mes_pagoX))      // actualiza y si no logra ingresar los datos...
               {
                $errorZZ=" Error llamar al Ing.  ";
               }


               if ($errorZZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZZ. " ";
                             mysqli_close($enlace); 
                          }


                          else  {  


                     $exitoZZ = "Montos Actualizados."; 
                }     

                if ($exitoZZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZZ. " "; 
                              mysqli_close($enlace);            
                          }






  }

































 if(isset($_POST['buscalo']))
    {


if (strlen($_POST['buscar_repre']) <=5 )  // no sea mayor a 40 caracteres
    {   $errorZZ .= "- Ingrese más de 5 caracteres, para iniciar la busqueda. "; }


else { 

$busqueda = $_POST['buscar_repre'];

$el_dicho_ciclo = $_POST['id_del_ciclo'];


include("../conectar.php");

      $query_bus = "SELECT ci_repre FROM reg_representante

            
        where ci_repre LIKE  '".$busqueda."' limit 1 ";

$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 


if ($totalRows_datos_plantilla_bus == 1) {


 $reg_de_todoaa = "SELECT * FROM reg_estu_repre_all, reg_representante, reg_estu_actual, reg_estudiantes 

                     WHERE  reg_estu_repre_all.id_repre = reg_representante.id_repre
                     and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud                     
                     and reg_estu_actual.id_estud = reg_estudiantes.id_estud                   
                     
                    and reg_representante.ci_repre = '$busqueda'                     
               /*     and  reg_estu_actual.el_activo = '1'  */
                   and  reg_estu_actual.cursa_actualmente = '$el_dicho_ciclo' ";

            $datos_estudiantesaa = mysqli_query($enlace,  $reg_de_todoaa) or die(mysqli_error());

            $row_datos_estudiantesaa = mysqli_fetch_array($datos_estudiantesaa); 

            $totalRows_datos_estudiantesaa = mysqli_num_rows($datos_estudiantesaa); 

}



mysqli_close($enlace); 

$enlace = "<b><a href=\"plantilla_representantes_pagos.php?tituloJKL=Historial&ciclo=".$el_dicho_ciclo."&alertin=100&criterio=".$busqueda."\">Ver historial.</a></b>";

if ($totalRows_datos_estudiantesaa >= 1) {

  $exitoZZ .= "- Representante encontrado.&nbsp;&nbsp; ".$enlace." "; 

}


else {

  $errorZZ .="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados. ";

}

}

    } 





if(isset($_POST['buscalo_estud']))
    {

if (strlen($_POST['buscar_estud_nombre']) <=2 )  // no sea mayor a 40 caracteres
    {   $errorZZ .= "- Ingrese más de 3 caracteres, para iniciar la busqueda. "; }

else { 

$busqueda = $_POST['buscar_estud_nombre'];

$el_dicho_ciclo = $_POST['id_del_ciclo'];

include("../conectar.php");

$id_corriente =  $_POST['id_del_ciclo'];

      $query_bus = "SELECT * FROM  reg_estudiantes, reg_estu_actual                        
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_actual.cursa_actualmente = '$id_corriente'
         and reg_estudiantes.nombre_estu LIKE '%".$busqueda."%' ";

$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 
mysqli_close($enlace); 

$enlace = "<b><a href=\" plantilla_control_00_pagos_estud_name.php?ciclo=".$el_dicho_ciclo."&alertin=100&criterio=".$busqueda."\">  Ver resultado.</a></b>";
$enlace_s = "<b><a href=\" plantilla_control_00_pagos_estud_name.php?ciclo=".$el_dicho_ciclo."&alertin=100&criterio=".$busqueda."\">  Ver resultados.</a></b>";

$_SESSION['periodo_clavep'] = $id_corriente;

$id_periodo_clave = $_SESSION['periodo_clavep'];



if ($totalRows_datos_plantilla_bus === 0) {
  $errorZZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados. ";
}


if ($totalRows_datos_plantilla_bus >= 1 and $totalRows_datos_plantilla_bus <2) {
  $exitoZZ .= "- Se encontró &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia.&nbsp;&nbsp; ".$enlace." "; 
}

if ($totalRows_datos_plantilla_bus >= 2 and $totalRows_datos_plantilla_bus <=4) {
  $exitoZZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia(s).&nbsp;&nbsp; ".$enlace_s." ";
}

if ($totalRows_datos_plantilla_bus >= 5) {
  $errorZZ .= "- Se encontraron más de &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia(s), favor refinar la busquedad.  ";
}
}
    } 





if(isset($_POST['buscalo_estud_a']))
    {

if (strlen($_POST['buscar_estud_apell']) <=2 )  // no sea mayor a 40 caracteres
    {   $errorZZ .= "- Ingrese más de 3 caracteres, para iniciar la busqueda. "; }

else { 

$busqueda = $_POST['buscar_estud_apell'];

$el_dicho_ciclo = $_POST['id_del_ciclo'];

include("../conectar.php");

$id_corriente =  $_POST['id_del_ciclo'];

      $query_bus = "SELECT * FROM  reg_estudiantes, reg_estu_actual                        
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_actual.cursa_actualmente = '$id_corriente'
         and reg_estudiantes.apellidos_estu LIKE '%".$busqueda."%' ";

$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 
mysqli_close($enlace); 

$enlace = "<b><a href=\" plantilla_control_00_pagos_estud_ape.php?ciclo=".$el_dicho_ciclo."&alertin=100&criterio=".$busqueda."\">  Ver resultado.</a></b>";
$enlace_s = "<b><a href=\" plantilla_control_00_pagos_estud_ape.php?ciclo=".$el_dicho_ciclo."&alertin=100&criterio=".$busqueda."\">  Ver resultados.</a></b>";


if ($totalRows_datos_plantilla_bus === 0) {
  $errorZZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados. ";
}


if ($totalRows_datos_plantilla_bus >= 1 and $totalRows_datos_plantilla_bus <2) {
  $exitoZZ .= "- Se encontró &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia.&nbsp;&nbsp; ".$enlace." "; 
}

if ($totalRows_datos_plantilla_bus >= 2 and $totalRows_datos_plantilla_bus <=4) {
  $exitoZZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia(s).&nbsp;&nbsp; ".$enlace_s." ";
}

if ($totalRows_datos_plantilla_bus >= 5) {
  $errorZZ .= "- Se encontraron más de &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia(s), favor refinar la busquedad.  ";
}
}
    } 






if(isset($_POST['buscalo_rec']))
    {

if (strlen($_POST['buscar_rec']) <=2 )  // no sea mayor a 40 caracteres
    {   $errorZZ .= "- Ingrese más de 3 caracteres, para iniciar la busqueda. "; }

else { 

$busqueda = $_POST['buscar_rec'];


$el_dicho_ciclo = $_POST['id_del_ciclo'];


include("../conectar.php");

$los_recibos = "SELECT id_pago, recibo_pago_insc, recibo_1er_pago, recibo_2do_pago, recibo_3er_pago,
recibo_4to_pago, recibo_5to_pago, recibo_6to_pago, recibo_7mo_pago, recibo_8vo_pago, recibo_9no_pago, recibo_10m_pago,
recibo_11o_pago, recibo_12o_pago, recibo_abono_ins  FROM reg_pagos

WHERE recibo_pago_insc LIKE '%".$busqueda."%' or recibo_1er_pago LIKE '%".$busqueda."%'
                                     or recibo_2do_pago LIKE '%".$busqueda."%'
                                     or recibo_3er_pago LIKE '%".$busqueda."%'
                                     or recibo_4to_pago LIKE '%".$busqueda."%'
                                     or recibo_5to_pago LIKE '%".$busqueda."%'
                                     or recibo_6to_pago LIKE '%".$busqueda."%'
                                     or recibo_7mo_pago LIKE '%".$busqueda."%'
                                     or recibo_8vo_pago LIKE '%".$busqueda."%'
                                     or recibo_9no_pago LIKE '%".$busqueda."%'
                                     or recibo_10m_pago LIKE '%".$busqueda."%'
                                     or recibo_11o_pago LIKE '%".$busqueda."%'
                                     or recibo_12o_pago LIKE '%".$busqueda."%'
                                     or recibo_abono_ins LIKE '%".$busqueda."%'

 ORDER BY id_pago ASC";

$datos_los_recibos = mysqli_query($enlace, $los_recibos) or die(mysqli_error());
$totalRows_datos_los_recibos = mysqli_num_rows($datos_los_recibos);

mysqli_close($enlace); 

$enlace = "<b><a href=\" plantilla_control_00_pagos_estud_recibo.php?ciclo=".$el_dicho_ciclo."&criterio=".$busqueda."\">  Ver resultado.</a></b>";

$enlace_s = "<b><a href=\" plantilla_control_00_pagos_estud_recibo.php?ciclo=".$el_dicho_ciclo."&criterio=".$busqueda."\">  Ver resultados.</a></b>";

if ($totalRows_datos_los_recibos === 0) {
  $errorZZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados. ";
}


if ($totalRows_datos_los_recibos >= 1 and $totalRows_datos_los_recibos <2) {
  $exitoZZ .= "- Se encontró &nbsp; <b>".$totalRows_datos_los_recibos."</b> &nbsp; coincidencia.&nbsp;&nbsp; ".$enlace." "; 
}

if ($totalRows_datos_los_recibos >= 2) {
  $exitoZZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_los_recibos."</b> &nbsp; coincidencia(s).&nbsp;&nbsp; ".$enlace_s." "; 
}

}
    } 









include("../conectar.php");

              $querymod2 = "SELECT * FROM periodo_de_pago where id_periodo_pago = 1 ";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());
              
              $row_datos_mod2 = mysqli_fetch_array($datos_mod2);
                         
               mysqli_close($enlace);    

$primer_pago = $row_datos_mod2['1er_pago'];
$abono1 = 'Abono '.$primer_pago.'';

$segundo_pago = $row_datos_mod2['2do_pago'];
$abono2 = 'Abono '.$segundo_pago.'';

$tercero_pago = $row_datos_mod2['3er_pago'];
$abono3 = 'Abono '.$tercero_pago.'';

$especial_primero = $row_datos_mod2['especial_1'];


$cuarto_pago = $row_datos_mod2['4to_pago'];
$abono4 = 'Abono '.$cuarto_pago.'';

$quinto_pago = $row_datos_mod2['5to_pago'];
$abono5 = 'Abono '.$quinto_pago.'';

$sexto_pago = $row_datos_mod2['6to_pago'];
$abono6 = 'Abono '.$sexto_pago.'';

$especial_segundo = $row_datos_mod2['especial_2'];


$septimo_pago = $row_datos_mod2['7mo_pago'];
$abono7 = 'Abono '.$septimo_pago.'';

$octavo_pago = $row_datos_mod2['8vo_pago'];
$abono8 = 'Abono '.$octavo_pago.'';

$noveno_pago = $row_datos_mod2['9no_pago'];
$abono9 = 'Abono '.$noveno_pago.'';

$especial_tercero = $row_datos_mod2['especial_3'];


$decimo_pago = $row_datos_mod2['10m_pago'];
$abono10 = 'Abono '.$decimo_pago.'';

$onceavo_pago = $row_datos_mod2['11o_pago'];
$abono11 = 'Abono '.$onceavo_pago.'';

$doceavo_pago = $row_datos_mod2['12o_pago'];
$abono12 = 'Abono '.$doceavo_pago.'';

$especial_cuarto = $row_datos_mod2['especial_4'];







if(isset($_POST['buscalo_fecha']))
    {


$busqueda = $_POST['buscar_fecha'];

include("../conectar.php");

$las_fechas = "SELECT * FROM reg_pagos

WHERE fecha_pago_ins = '$busqueda' or fecha_1er_pago = '$busqueda'
                                     or fecha_2do_pago = '$busqueda'
                                     or fecha_3er_pago = '$busqueda'
                                     or fecha_4to_pago = '$busqueda'
                                     or fecha_5to_pago = '$busqueda'
                                     or fecha_6to_pago = '$busqueda'
                                     or fecha_7mo_pago = '$busqueda'
                                     or fecha_8vo_pago = '$busqueda'
                                     or fecha_9no_pago = '$busqueda'
                                     or fecha_10m_pago = '$busqueda'
                                     or fecha_11o_pago = '$busqueda'
                                     or fecha_12o_pago = '$busqueda'
                                     or fecha_abono_ins = '$busqueda'

 ";

$datos_las_fechas = mysqli_query($enlace, $las_fechas) or die(mysqli_error());
$totalRows_datos_las_fechas = mysqli_num_rows($datos_las_fechas);

mysqli_close($enlace); 

$enlace = "<b><a target=\"_blank\" href=\" zzz_impresiones/imp_pagos_fecha.php?criterio=".$busqueda."\">  Imprimir.</a></b>";



if ($totalRows_datos_las_fechas >= 1) {
  $exitoZZ .= "-&nbsp;<b>".$totalRows_datos_las_fechas."</b>&nbsp;Recibo(s) encontrado(s).&nbsp;&nbsp; ".$enlace." "; 




include("../conectar.php");

$Del = "DELETE FROM temporal";
$datos_Del = mysqli_query($enlace, $Del) or die(mysqli_error());


 $crear1 = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_pago_insc, inscripcion, id_del_estud, forma_insc, num_trans_insc, 'Inscripción', '2', ins_quien, en_el_ciclo   
FROM reg_pagos where fecha_pago_ins = '$busqueda' and inscripcion > '1' ";
$datos_crear1 = mysqli_query($enlace, $crear1) or die(mysqli_error());  


$crear1a = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_pago_insc, abono_1er, id_del_estud, forma_insc, num_trans_insc, '$abono1', '3', ins_quien, en_el_ciclo
FROM reg_pagos where fecha_pago_ins = '$busqueda' and abono_1er > '1' ";
$datos_crear1a = mysqli_query($enlace, $crear1a) or die(mysqli_error());




$crear2 = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_1er_pago, 1er_pago, id_del_estud, forma_1er, num_trans_1er, '$primer_pago', '4', 1er_quien, en_el_ciclo 
FROM reg_pagos where fecha_1er_pago = '$busqueda' and 1er_pago > '1'    ";
$datos_crear2 = mysqli_query($enlace, $crear2) or die(mysqli_error());


$crear2a = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_1er_pago, abono_2do, id_del_estud, forma_1er, num_trans_1er, '$abono2', '5', 1er_quien, en_el_ciclo 
FROM reg_pagos where fecha_1er_pago = '$busqueda' and abono_2do > '1'    ";
$datos_crear2a = mysqli_query($enlace, $crear2a) or die(mysqli_error());




$crear2b = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_2do_pago, 2do_pago, id_del_estud, forma_2do, num_trans_2do, '$segundo_pago', '6', 2do_quien, en_el_ciclo 
FROM reg_pagos where fecha_2do_pago = '$busqueda' and 2do_pago > '1'    ";
$datos_crear2b = mysqli_query($enlace, $crear2b) or die(mysqli_error());

$crear2ba = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_2do_pago, abono_3er, id_del_estud, forma_2do, num_trans_2do, '$abono3', '7', 2do_quien, en_el_ciclo 
FROM reg_pagos where fecha_2do_pago = '$busqueda' and abono_3er > '1'    ";
$datos_crear2ba = mysqli_query($enlace, $crear2ba) or die(mysqli_error());




$crear3 = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_3er_pago, 3er_pago, id_del_estud, forma_3er, num_trans_3er, '$tercero_pago', '8', 3er_quien, en_el_ciclo 
FROM reg_pagos where fecha_3er_pago = '$busqueda' and 3er_pago > '1'    ";
$datos_crear3 = mysqli_query($enlace, $crear3) or die(mysqli_error());

$crear3a = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_3er_pago, abono_4to, id_del_estud, forma_3er, num_trans_3er, '$abono4', '9', 3er_quien, en_el_ciclo 
FROM reg_pagos where fecha_3er_pago = '$busqueda' and abono_4to > '1'    ";
$datos_crear3a = mysqli_query($enlace, $crear3a) or die(mysqli_error());



$crear4 = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_4to_pago, 4to_pago, id_del_estud, forma_4to, num_trans_4to, '$cuarto_pago', '10', 4to_quien, en_el_ciclo 
FROM reg_pagos where fecha_4to_pago = '$busqueda' and 4to_pago > '1'    ";
$datos_crear4 = mysqli_query($enlace, $crear4) or die(mysqli_error());


$crear4a = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_4to_pago, abono_5to, id_del_estud, forma_4to, num_trans_4to, '$abono5', '11', 4to_quien, en_el_ciclo 
FROM reg_pagos where fecha_4to_pago = '$busqueda' and abono_5to > '1'    ";
$datos_crear4a = mysqli_query($enlace, $crear4a) or die(mysqli_error());


$crear5 = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_5to_pago, 5to_pago, id_del_estud, forma_5to, num_trans_5to, '$quinto_pago', '12', 5to_quien, en_el_ciclo 
FROM reg_pagos where fecha_5to_pago = '$busqueda' and 5to_pago > '1'    ";
$datos_crear5 = mysqli_query($enlace, $crear5) or die(mysqli_error());


$crear5a = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_5to_pago, abono_6to, id_del_estud, forma_5to, num_trans_5to, '$abono6', '13', 5to_quien, en_el_ciclo 
FROM reg_pagos where fecha_5to_pago = '$busqueda' and abono_6to > '1'    ";
$datos_crear5a = mysqli_query($enlace, $crear5a) or die(mysqli_error());


$crear6 = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_6to_pago, 6to_pago, id_del_estud, forma_6to, num_trans_6to, '$sexto_pago', '14', 6to_quien, en_el_ciclo 
FROM reg_pagos where fecha_6to_pago = '$busqueda' and 6to_pago > '1'    ";
$datos_crear6 = mysqli_query($enlace, $crear6) or die(mysqli_error());

$crear6a = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_6to_pago, abono_7mo, id_del_estud, forma_6to, num_trans_6to, '$abono7', '15', 6to_quien, en_el_ciclo 
FROM reg_pagos where fecha_6to_pago = '$busqueda' and abono_7mo > '1'    ";
$datos_crear6a = mysqli_query($enlace, $crear6a) or die(mysqli_error());



$crear7 = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_7mo_pago, 7mo_pago, id_del_estud, forma_7mo, num_trans_7mo, '$septimo_pago', '16', 7mo_quien, en_el_ciclo 
FROM reg_pagos where fecha_7mo_pago = '$busqueda' and 7mo_pago > '1'    ";
$datos_crear7 = mysqli_query($enlace, $crear7) or die(mysqli_error());

$crear7a = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_7mo_pago, abono_8vo, id_del_estud, forma_7mo, num_trans_7mo, '$abono8', '17', 7mo_quien, en_el_ciclo 
FROM reg_pagos where fecha_7mo_pago = '$busqueda' and abono_8vo > '1'    ";
$datos_crear7a = mysqli_query($enlace, $crear7a) or die(mysqli_error());




$crear8 = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_8vo_pago, 8vo_pago, id_del_estud, forma_8vo, num_trans_8vo, '$octavo_pago', '18', 8vo_quien, en_el_ciclo 
FROM reg_pagos where fecha_8vo_pago = '$busqueda' and 8vo_pago > '1'    ";
$datos_crear8 = mysqli_query($enlace, $crear8) or die(mysqli_error());

$crear8a = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_8vo_pago, abono_9no, id_del_estud, forma_8vo, num_trans_8vo, '$abono9', '19', 8vo_quien, en_el_ciclo 
FROM reg_pagos where fecha_8vo_pago = '$busqueda' and abono_9no > '1'    ";
$datos_crear8a = mysqli_query($enlace, $crear8a) or die(mysqli_error());


$crear9 = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_9no_pago, 9no_pago, id_del_estud, forma_9no, num_trans_9no, '$noveno_pago', '20', 9no_quien, en_el_ciclo 
FROM reg_pagos where fecha_9no_pago = '$busqueda' and 9no_pago > '1'    ";
$datos_crear9 = mysqli_query($enlace, $crear9) or die(mysqli_error());

$crear9a = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_9no_pago, abono_10m, id_del_estud, forma_9no, num_trans_9no, '$abono10', '21', 9no_quien, en_el_ciclo 
FROM reg_pagos where fecha_9no_pago = '$busqueda' and abono_10m > '1'    ";
$datos_crear9a = mysqli_query($enlace, $crear9a) or die(mysqli_error());




$crear10 = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_10m_pago, 10m_pago, id_del_estud, forma_10m, num_trans_10m, '$decimo_pago', '22', 10m_quien, en_el_ciclo 
FROM reg_pagos where fecha_10m_pago = '$busqueda'  and 10m_pago > '1'    ";
$datos_crear10 = mysqli_query($enlace, $crear10) or die(mysqli_error());

$crear10a = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_10m_pago, abono_11o, id_del_estud, forma_10m, num_trans_10m, '$abono11', '23', 10m_quien, en_el_ciclo 
FROM reg_pagos where fecha_10m_pago = '$busqueda'  and abono_11o > '1'    ";
$datos_crear10a = mysqli_query($enlace, $crear10a) or die(mysqli_error());



$crear11 = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_11o_pago, 11o_pago, id_del_estud, forma_11o, num_trans_11o, '$onceavo_pago', '24', 11o_quien, en_el_ciclo 
FROM reg_pagos where fecha_11o_pago = '$busqueda' and 11o_pago > '1'    ";
$datos_crear11 = mysqli_query($enlace, $crear11) or die(mysqli_error());

$crear11a = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_11o_pago, abono_12o, id_del_estud, forma_11o, num_trans_11o, '$abono12', '25', 11o_quien, en_el_ciclo 
FROM reg_pagos where fecha_11o_pago = '$busqueda' and abono_12o > '1'    ";
$datos_crear11a = mysqli_query($enlace, $crear11a) or die(mysqli_error());







$crear12 = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_12o_pago, 12o_pago, id_del_estud, forma_12o, num_trans_12o, '$doceavo_pago', '26', 12o_quien, en_el_ciclo 
FROM reg_pagos where fecha_12o_pago = '$busqueda' and 12o_pago > '1'    ";
$datos_crear12 = mysqli_query($enlace, $crear12) or die(mysqli_error());


$crear_cero = "INSERT INTO temporal (recibos, montos, id_estud, forma_pago, transaccion, concepto, orden_importancia, quien, ciclo_registrado)
SELECT recibo_abono_ins, abono_ins, id_del_estud, forma_abono_insc, num_trans_abono_insc, 'Abono Inscrip.', '1', ins_quien, en_el_ciclo 
FROM reg_pagos where fecha_abono_ins = '$busqueda' and abono_ins > '1' ";
$datos_crear_cero = mysqli_query($enlace, $crear_cero) or die(mysqli_error()); 



mysqli_close($enlace); 



}

else {

include("../conectar.php");

$Del = "DELETE FROM temporal";
$datos_Del = mysqli_query($enlace, $Del) or die(mysqli_error());
mysqli_close($enlace); 


$errorZZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; recibos. ";

}


    } 












 if(isset($_POST['eliminar_todo_el_registro']))
        { 

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

                             ";


                                  if (!mysqli_query($enlace,$sql))      // actualiza y si no logra ingresar los datos...
               {
                $errorZZ=" Error llamar al Ing.  ";
               }


               if ($errorZZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZZ = "Registro Completamente Borrado."; 
                }     

                if ($exitoZZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZZ. " "; 
                              mysqli_close($enlace);            
                          }

  }




















if(isset($_POST['buscalo_el']))
    {


if (strlen($_POST['buscar_alum']) <=5 )  // no sea mayor a 40 caracteres
    {   $errorZZ .= "- Ingrese más de 5 caracteres, para iniciar la busqueda. "; }


else { 

$el_dicho_ciclo = $_POST['id_del_ciclo'];
$busqueda = $_POST['buscar_alum'];


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

$enlace = "<b><a href=\"plantilla_representantes_pagos_ci_el.php?tituloJKL=Historial&ciclo=".$el_dicho_ciclo."&alertin=100&criterio=".$la_ci_es."\">Ver historial.</a></b>";

if ($totalRows_datos_plantilla_bus >= 1) {

  $exitoZZ .= "- Registro(s) encontrado.&nbsp;&nbsp; ".$enlace." "; 

}


else {

  $errorZZ .="- La busqueda arrojo &nbsp; <b>0</b>  &nbsp; resultados. ";

}

}

    } 











include("../conectar.php");





 if(isset($_POST['cambiar_periodo']))
    {
      $id_periodo_seleccionadoXX = $_POST['set_periodo'];
    }

    else {$id_periodo_seleccionadoXX = ""; }

if ($_SESSION['periodo_clavep'] != '' and $id_periodo_seleccionadoXX == '' ) {
  $id_periodo_seleccionado = $_SESSION['periodo_clavep'];
}

else { $id_periodo_seleccionado = $id_periodo_seleccionadoXX; }



if ($id_periodo_seleccionado == "") {  

$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  status = '1' and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);

/* $id_periodo_clave =  $row_datos_periodo_actual['id_periodo_es'];  */

$_SESSION['periodo_clavep']=$row_datos_periodo_actual['id_periodo_es'];

$id_periodo_clave = $_SESSION['periodo_clavep'];

}


else {

$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  id_periodo_es = '$id_periodo_seleccionado'
 and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);

/*$id_periodo_clave =  $id_periodo_seleccionado; */

$_SESSION['periodo_clavep']=  $id_periodo_seleccionado;

$id_periodo_clave = $_SESSION['periodo_clavep'];

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



$queryperiodo_nextie = "SELECT * FROM temporada_escolar WHERE next = '8' LIMIT 1";
$datos_periodo_nextie = mysqli_query($enlace, $queryperiodo_nextie) or die(mysqli_error());
$row_datos_periodo_nextie = mysqli_fetch_assoc($datos_periodo_nextie);

$id_periodo_nextie =  $row_datos_periodo_nextie['id_periodo_es'];










include("listas_php/00_lista_cuenta_total_por_divisiones_y_sexos.php");

include("listas_php/00_lista_cuenta_total_por_secciones.php");

include("listas_php/00_lista_estudiantes.php");     // enlista los resultados de la tarjetas del menu incio



mysqli_close($enlace);  











if(isset($_POST['pre_ins_estud_cur']))
    {

if (strlen($_POST['buscar_estud_reg_pre_ins']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZZ .= "- Ingrese más de 6 caracteres, para iniciar la busqueda. "; }

else { 

$busquedaAA = $_POST['buscar_estud_reg_pre_ins'];


include("../conectar.php");

/* $q_corriente = "SELECT * FROM temporada_escolar WHERE next = '8' LIMIT 1";
$datos_corriente = mysqli_query($enlace, $q_corriente) or die(mysqli_error());
$row_datos_corriente = mysqli_fetch_assoc($datos_corriente);

$id_corriente =  $row_datos_corriente['id_periodo_es'];   */

$id_corrienteAA = $id_periodo_clave;

      $query_busAA = " SELECT * FROM  reg_estu_actual, (
    
SELECT id_estud, ci_estu, retirado_si_o_no FROM reg_estudiantes ) AS Virtual_table
WHERE  reg_estu_actual.id_estud = Virtual_table.id_estud        
         and  reg_estu_actual.el_activo = '1'
         and  reg_estu_actual.cursa_actualmente != '$id_corrienteAA'
                 
         and Virtual_table.retirado_si_o_no = '0'
         and Virtual_table.ci_estu = '".$busquedaAA."' GROUP BY Virtual_table.id_estud ";

$datos_plantilla_busAA = mysqli_query($enlace, $query_busAA) or die(mysqli_error());
$filaKKAA=mysqli_fetch_array($datos_plantilla_busAA);

$su_id_esAA = $filaKKAA["id_estud"];
$statutoAA = $filaKKAA["fecha_inscripcion"];

$totalRows_datos_plantilla_busAA = mysqli_num_rows($datos_plantilla_busAA); 

mysqli_close($enlace); 


$enlaceAA = "<b><a href=\" zona_adm_estudiante_reg_pre_ins_fast.php?ci_alum=".$busquedaAA."&id_alum=".$su_id_esAA."\">Pre-Inscribir.</a></b>";

if ($totalRows_datos_plantilla_busAA >= 1 && $statutoAA !=''  ) {

  $exitoZZ .= "- Estudiante encontrado.&nbsp;&nbsp; ".$enlaceAA." "; 

}

if ($totalRows_datos_plantilla_busAA >= 1 && $statutoAA ==''  ) {

  $errorZZ .= "- El estudiante está &nbsp; <b>Pre-Inscrito.</b> "; 

}


if ($totalRows_datos_plantilla_busAA == 0  ) {

  $errorZZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados y/o el estudiante ya está &nbsp; <b>Pre-Inscrito</b>. "; 

}

/*
else {

  $errorZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados. ";

}  */

}
    } 







 if(isset($_POST['el_doc_del_repre']))
    {

       if (!$_POST['search_this_doc_id'])      // verifica que no este vacío
          {   $errorZZ .= "- El Doc. de Id. del representante es requerido. "; }


           if (strlen($_POST['search_this_doc_id']) >9 )  // verifica que el campo cedula no sea mayor a 9 caracteres
              {  $errorZZ .= "- Doc. de Id. ingresado invalido."; }   // mas de 9.

          if(!is_numeric($_POST['search_this_doc_id']) ) // verifica que sean solo números
            {  $errorZZ .= "- Doc. de Id. ingresado no valido."; }


            if ($errorZZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZZ. "  ";  
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
             $errorZZ.="- El N°. de Doc. de Id. ingresado, no se encuentra registrado.";  
                  } 


                  if ( $chequeo_habilitacion == '1' && mysqli_num_rows($resultCTB)!=0)
            {
             $errorZZ.="- El representante&nbsp;<b>DEBE CONTACTAR CON ADMINISTRACIÓN</b>.";        
                  } 



                  if ($errorZZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                    {
                       $errorZZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZZ. " "; 
                  mysqli_close($enlace);

                    }


            else { 


               if ( ( $el_inscribe_hasta_repreW != '11'  OR  $pre_ins_si_o_no_repreW == '2' ) && mysqli_num_rows($resultC)!=0)
            {
             $errorZZ.="- El representante&nbsp;<b>debe completar antes</b>&nbsp;una pre-inscripción, de&nbsp;<b>NUEVO INGRESO</b>.";        
                  } 



                  if (  ( $el_inscribe_nuev_hasta_repreW != '11'  OR  $pre_ins_nuev_si_o_no_repreW == '2' ) && mysqli_num_rows($resultC)!=0 )
            {
             $errorZZ.="- El representante&nbsp;<b>debe completar antes</b>&nbsp;una pre-inscripción, de&nbsp;<b>ALUMNO REGULAR</b>.";        
                  } 


                  if ($errorZZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                    {
                       $errorZZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZZ. " "; 
                  mysqli_close($enlace);

                    }


                    else {    // dado que la ci si esta y el repre no tiene nada pendiente, procedo a abrir y enviar el id hacia la otra pagina


                      $_SESSION ['id_del_repre_del_alum'] = "".$el_id_del_repreW."";

                      mysqli_close($enlace);

                      header('Location: plantilla_estudiantes_add_extra_fast.php');



                    }   // // cierre en donde envio el id hacia la otra pagina
       
          }


               }


    } 















// actualiza el 1er lapso q permite ver la boleta ********


 if(isset($_POST['pago_primero']))
        {

 $uno_mes_uno = $_POST['el_mes_uno'];


          if (empty($_POST["selecc_primer_lapso"]) )
    {   $errorZ .= "- Recuerde seleccionar el nombre del 1er lapso. "; }  


      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
          

          $new_select = $_POST["selecc_primer_lapso"];
          $old_select = $_POST["old_primer_lapso"];

include("../conectar.php");

$sqlP_aaa = " UPDATE select_pagos SET 1er_select = 0 ";
$datos_sqlP_aaa = mysqli_query($enlace, $sqlP_aaa) or die(mysqli_error());


 $sqlP = "UPDATE select_pagos SET 1er_select ='1', el_mes = '$uno_mes_uno' where id_mes_select = '$new_select'" ;
                     


                       
            if (!mysqli_query($enlace,$sqlP))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "1er Lapso, actualizado."; 


                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                             mysqli_close($enlace);           
                          }

                       



    } // cierre if en caso de actualizar el periodo actual

 }  // cierre else tras verificar que no hay coincidencia de periodos





// actualiza el 2do lapso q permite ver la boleta ********


 if(isset($_POST['pago_segundo']))
        {


 $uno_mes_dos = $_POST['el_mes_dos'];

          if (empty($_POST["selecc_segundo_lapso"]) )
    {   $errorZ .= "- Recuerde seleccionar el nombre del 2do lapso. "; }  


      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
          

          $new_select = $_POST["selecc_segundo_lapso"];
          $old_select = $_POST["old_segundo_lapso"];

include("../conectar.php");

$sqlP_bbb = " UPDATE select_pagos SET 2do_select = 0 ";
$datos_sqlP_bbb = mysqli_query($enlace, $sqlP_bbb) or die(mysqli_error());


 $sqlP = "UPDATE select_pagos SET 2do_select ='1', el_mes = '$uno_mes_dos' where id_mes_select = '$new_select'" ;
         
                       
            if (!mysqli_query($enlace,$sqlP))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "2do Lapso, actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                             mysqli_close($enlace);           
                          }

                       



    } // cierre if en caso de actualizar el periodo actual

 }  // cierre else tras verificar que no hay coincidencia de periodos








// actualiza el 3er lapso q permite ver la boleta ********


 if(isset($_POST['pago_tercero']))
        {

 $uno_mes_tres = $_POST['el_mes_tres'];

          if (empty($_POST["selecc_tercero_lapso"]) )
    {   $errorZZ .= "- Recuerde seleccionar el nombre del 3er lapso. "; }  


      
       if ($errorZZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
          

          $new_select = $_POST["selecc_tercero_lapso"];
          $old_select = $_POST["old_tercero_lapso"];

include("../conectar.php");

$sqlP_ccc = " UPDATE select_pagos SET 3er_select = 0 ";
$datos_sqlP_ccc = mysqli_query($enlace, $sqlP_ccc) or die(mysqli_error());



 $sqlP = "UPDATE select_pagos SET 3er_select ='1', el_mes = '$uno_mes_tres' where id_mes_select = '$new_select'" ;
      



                       
            if (!mysqli_query($enlace,$sqlP))      // actualiza y si no logra ingresar los datos...
               {
                $errorZZ=" Error llamar al Ing.  ";
               }


               if ($errorZZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZZ = "3er Lapso, actualizado."; 
                }     

                if ($exitoZZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZZ. " ";  
                             mysqli_close($enlace);           
                          }

                       



    } // cierre if en caso de actualizar el periodo actual

 }  // cierre else tras verificar que no hay coincidencia de periodos









// guarda las nomenclaturas

if(isset($_POST['periodo_pagos']))
        {

$mes_hasta_pagar = $_POST['selecc_mes_actual'];
 

      if (!$_POST['primer_pago'])      // verifica que no este vacío
    {   $errorZZ .= "- 1° pago requerido. "; }


     if (strlen($_POST['primer_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 1° pago supera los 14 caracteres."; }    


    if (!$_POST['segundo_pago'])      // verifica que no este vacío
    {   $errorZZ .= "- 2° pago requerido. "; }


         if (strlen($_POST['segundo_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 2° pago supera los 14 caracteres."; }  


     if (!$_POST['tercer_pago'])      // verifica que no este vacío
    {   $errorZZ .= "- 3° pago requerido. "; }


         if (strlen($_POST['tercer_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 3° pago supera los 14 caracteres."; }  


     if (!$_POST['cuarto_pago'])      // verifica que no este vacío
    {   $errorZZ .= "- 4° pago requerido. "; }


             if (strlen($_POST['cuarto_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 4° pago supera los 14 caracteres."; } 


     if (!$_POST['quinto_pago'])      // verifica que no este vacío
    {   $errorZZ .= "- 5° pago requerido. "; }


                 if (strlen($_POST['quinto_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 5° pago supera los 14 caracteres."; } 


         if (!$_POST['sexto_pago'])      // verifica que no este vacío
    {   $errorZZ .= "- 6° pago requerido. "; }


                     if (strlen($_POST['sexto_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 6° pago supera los 14 caracteres."; } 


     if (!$_POST['septimo_pago'])      // verifica que no este vacío
    {   $errorZZ .= "- 7° pago requerido. "; }

                         if (strlen($_POST['septimo_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 7° pago supera los 14 caracteres."; } 


     if (!$_POST['octavo_pago'])      // verifica que no este vacío
    {   $errorZZ .= "- 8° pago requerido. "; }


                            if (strlen($_POST['octavo_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 8° pago supera los 14 caracteres."; } 



         if (!$_POST['noveno_pago'])      // verifica que no este vacío
    {   $errorZZ .= "- 9° pago requerido. "; }


       if (strlen($_POST['noveno_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 9° pago supera los 14 caracteres."; } 


     if (!$_POST['decimo_pago'])      // verifica que no este vacío
    {   $errorZZ .= "- 10° pago requerido. "; }


    if (strlen($_POST['decimo_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 10° pago supera los 14 caracteres."; } 


     if (!$_POST['onceavo_pago'])      // verifica que no este vacío
    {   $errorZZ .= "- 11° pago requerido. "; }



    if (strlen($_POST['onceavo_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 11° pago supera los 14 caracteres."; } 


         if (!$_POST['doceavo_pago'])      // verifica que no este vacío
    {   $errorZZ .= "- 12° pago requerido. "; }


        if (strlen($_POST['doceavo_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 12° pago supera los 14 caracteres."; } 



                      if (!$_POST['especial_primero'])      // verifica que no este vacío
    {   $errorZZ .= "- 1° especial requerido. "; }


        if (strlen($_POST['especial_primero']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 1° especial supera los 14 caracteres."; } 


                                        if (!$_POST['especial_segundo'])      // verifica que no este vacío
    {   $errorZZ .= "- 2° especial requerido. "; }


        if (strlen($_POST['especial_segundo']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 2° especial supera los 14 caracteres."; } 


                                        if (!$_POST['especial_tercero'])      // verifica que no este vacío
    {   $errorZZ .= "- 3° especial requerido. "; }


        if (strlen($_POST['especial_tercero']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 3° especial supera los 14 caracteres."; } 


                                        if (!$_POST['especial_cuarto'])      // verifica que no este vacío
    {   $errorZZ .= "- 4° especial requerido. "; }


        if (strlen($_POST['especial_cuarto']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZZ .= "- El 4° especial supera los 14 caracteres."; } 





     if ($errorZZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZZ. "";

              }



      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");



          $sql = "UPDATE periodo_de_pago SET 1er_pago = '".mysqli_real_escape_string($enlace,$_POST['primer_pago'])."'   ,
                                             2do_pago = '".mysqli_real_escape_string($enlace,$_POST['segundo_pago'])."'  ,
                                             3er_pago = '".mysqli_real_escape_string($enlace,$_POST['tercer_pago'])."'  ,
                                             4to_pago = '".mysqli_real_escape_string($enlace,$_POST['cuarto_pago'])."'  ,

                                             5to_pago = '".mysqli_real_escape_string($enlace,$_POST['quinto_pago'])."'   ,
                                             6to_pago = '".mysqli_real_escape_string($enlace,$_POST['sexto_pago'])."'  ,
                                             7mo_pago = '".mysqli_real_escape_string($enlace,$_POST['septimo_pago'])."'  ,
                                             8vo_pago = '".mysqli_real_escape_string($enlace,$_POST['octavo_pago'])."'  ,

                                             9no_pago = '".mysqli_real_escape_string($enlace,$_POST['noveno_pago'])."'   ,
                                             10m_pago = '".mysqli_real_escape_string($enlace,$_POST['decimo_pago'])."'  ,
                                             11o_pago = '".mysqli_real_escape_string($enlace,$_POST['onceavo_pago'])."'  ,
                                             12o_pago = '".mysqli_real_escape_string($enlace,$_POST['doceavo_pago'])."'  ,

                                             especial_1 = '".mysqli_real_escape_string($enlace,$_POST['especial_primero'])."'   ,
                                             especial_2 = '".mysqli_real_escape_string($enlace,$_POST['especial_segundo'])."'  ,
                                             especial_3 = '".mysqli_real_escape_string($enlace,$_POST['especial_tercero'])."'  ,
                                             especial_4 = '".mysqli_real_escape_string($enlace,$_POST['especial_cuarto'])."'  ,
                                             mes_pagado = '$mes_hasta_pagar',

                                             1er_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['primer_pago_mes'])."'   ,
                                             2do_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['segundo_pago_mes'])."'  ,
                                             3er_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['tercer_pago_mes'])."'  ,
                                             4to_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['cuarto_pago_mes'])."'  ,

                                             5to_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['quinto_pago_mes'])."'   ,
                                             6to_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['sexto_pago_mes'])."'  ,
                                             7mo_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['septimo_pago_mes'])."'  ,
                                             8vo_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['octavo_pago_mes'])."'  ,

                                             9no_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['noveno_pago_mes'])."'   ,
                                             10m_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['decimo_pago_mes'])."'  ,
                                             11o_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['onceavo_pago_mes'])."'  ,
                                             12o_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['doceavo_pago_mes'])."'  
                                                            
                                WHERE id_periodo_pago ='1' ";




                                  if (!mysqli_query($enlace,$sql))      // actualiza y si no logra ingresar los datos...
               {
                $errorZZ=" Error llamar al Ing.  ";
               }


               if ($errorZZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZZ = "Nomenclaturas Actualizadas."; 
                }     

                if ($exitoZZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZZ. " "; 
                              mysqli_close($enlace);            
                          }




        }









 }







?>


<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/listado_para_cobros.php"); ?>  <!-- hace la lista -->


        
<div class="content-wrapper">
<div class="container-fluid">





<form method="POST">
<div class="form-row">             

<div class="input-group col-md-4 col-lg-4 mb-3">
                   <div class="input-group-prepend">
                      <span class="input-group-text alert-primary" id=""><i class="fas fa-graduation-cap fa-lg "></i>
                      &nbsp; &nbsp;<b>Control año: </b></span>     <!--  <?php echo $id_periodo_clave; ?> -->
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
                            <button type="submit" name="cambiar_periodo" class="btn btn-info"><i class="fas fa-check fa-lg "></i></button>
                        </div>
                 
</div>



<div class="col-md-4 col-lg-4 mb-3 " >



                <div class="input-group-text alert-secondary" role="alert">
                 
                    <b><?php $totalF =  $totalRows_inicial_inscrito+$totalRows_basica_inscrito+$totalRows_media_inscrito+$totalRows_mediag_inscrito; echo $totalF; ?></b>&nbsp;&nbsp;Inscritos&nbsp;-&nbsp;&nbsp;<i class="fas fa-female"></i>&nbsp;:&nbsp;<?php $totalFF =  $totalRows_inicial_inscritoF+$totalRows_basica_inscritoF+$totalRows_media_inscritoF+$totalRows_mediag_inscritoF; echo $totalFF; ?>&nbsp;( <?php
if ($totalF==0) {
  $pf = round( ($totalFF * 100) / 1 );
}

else {$pf = round( ($totalFF * 100) / $totalF );}





 echo $pf; ?>% )&nbsp;&&nbsp;&nbsp;<i class="fas fa-male"></i>&nbsp;:&nbsp;<?php $totalFM =  $totalRows_inicial_inscritoM+$totalRows_basica_inscritoM+$totalRows_media_inscritoM+$totalRows_mediag_inscritoM; echo $totalFM; ?> ( <?php


if ($totalF==0) {
  $pm = round( ($totalFM * 100) / 1 );
}

else {$pm = round( ($totalFM * 100) / $totalF );}


  echo $pm; ?>% ).








                </div>


              
</div>




<?php


include("../conectar.php");

        $queryplantelH = "SELECT * FROM z_plantel LIMIT 1";

$datos_queryplantelH = mysqli_query($enlace, $queryplantelH) or die(mysqli_error());

$row_datos_queryplantelH = mysqli_fetch_array($datos_queryplantelH); 

 $pruebarr = $row_datos_queryplantelH['moneyuno'];
 $pruebarrdos = $row_datos_queryplantelH['moneydos'];

  $id_colegio = $row_datos_queryplantelH['id_plantel'];

  $la_fechita_es = $row_datos_queryplantelH['update_fecha'];




$format_monet = number_format("$pruebarr",2,",",".");


$format_monetdos = number_format("$pruebarrdos",2,",",".");



$iva_calculo = "SELECT * FROM iva LIMIT 1";

$datos_calculo = mysqli_query($enlace, $iva_calculo) or die(mysqli_error());

$row_datos_calculo = mysqli_fetch_array($datos_calculo); 

 $el_iva = $row_datos_calculo['cant_iva'];

  $el_id_del_iva = $row_datos_calculo['id_iva'];



mysqli_close($enlace);




     ?> 




<div class="col-md-2 col-lg-2 mb-3" > 

 <button type="button" data-toggle="modal" data-target="#el_dinerillo" class="btn btn-dark btn-block"><i class="fas fa-comment-dollar fa-lg"></i>&nbsp; 
<?php

  $date = new DateTime($la_fechita_es);
          
          echo $date->format('d/m/y'); 
                   ?> - <?php echo $date->format('g:i a'); ?>
</button>

</div>







<style type="text/css">

@font-face {
  font-family: DIGITAL-7;
  src: url(0_f/digital-7.ttf);
}


.lcd {background-color:#7D8C76;
color:#343434;
font-family: DIGITAL-7;
font-size: 24px;
text-align: center;
font-weight: 600;
letter-spacing: 3px;
}


</style>

<div class="col-md-2 col-lg-2 mb-3"  >  

  <div class="lcd" style="border: 1px solid #7D8C76; border-radius: 4px; "><?php echo $format_monet; ?> -T</div>

</div>







<!-- ini modal borrar --> 
<div class="modal fade" id="el_dinerillo" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-dark " id="exampleModalLabel">
        <i class="far fa-bell-slash fa-lg"></i> &nbsp;Actualizar o Modificar!!!  <span id="GFG_DOWN" 
       style="font-size: 14px; 
              font-weight: bold;  
              color: purple; "> 
    </span> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">

<div class="form-row">
<div class="input-group col-lg-12 mb-2">


 <input type="hidden" id="id_colegio"  name="id_colegio" value="<?php echo $id_colegio; ?>">
 <input type="hidden" id="id_del_iva"  name="id_del_iva" value="<?php echo $el_id_del_iva; ?>">

 <h4 class="mb-3">Modificado por el ultima vez el:  <?php

  $date = new DateTime($la_fechita_es);
          
          echo $date->format('d/m/y'); 
                   ?> - <?php echo $date->format('g:i:s a'); ?> </h4>







<h5>
  ! Cada campo solo permite guardar dos números decimales !
</h5>    



<div class="input-group mt-2 mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Tasa de referencia:</span>
  </div>
  <input type="text"  onkeypress="return GFG_Fun(this, event)" maxlength="11" class="form-control" name="moneyaaa" value="<?php echo $pruebarr; ?>">
</div>




<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Mensualidad:</span>
  </div>
  <input type="text"  onkeypress="return GFG_Fun(this, event)" maxlength="11" class="form-control" name="moneybbb" value="<?php echo $pruebarrdos; ?>">
</div>



<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Iva - Impuesto (%):</span>
  </div>
  <input type="text"  onkeypress="return GFG_Fun(this, event)" maxlength="5" class="form-control" name="iva_impuesto" value="<?php echo $el_iva; ?>">
</div>



</div>
</div>



</div> <!-- cierre modal body -->
      <div class="modal-footer"> 

     

 <form method="post">


    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

    <button type="submit" name="actualizar_dinerillo" class="btn btn-dark"
    value="actualizar_dinerillo" >Actualizar</button>

      </div>

</form>

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







<!-- 
<div class="col-md-2 col-lg-2 mb-3">
<button type="button" class="btn btn-danger btn-sm"
 data-toggle="modal"  data-target="#alerta_extrema">
     <i class="fas fa-bomb"></i>&nbsp;Borrar Todo el Registro</button>
</div>







<div class="modal fade" id="alerta_extrema" tabindex="-1" role="dialog" aria-hidden="true">
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


<p style="font-size: 18px;"> <b>Nota:</b> Esta acción, eliminara de manera permanente, todo el historial de pagos y no podrá ser revertida;
Es recomendable realizarlo solamente al iniciar un nuevo año escolar y tras previamente haber guardado el historial anterior de manera impresa.</p>

</div>




</div>







      <div class="modal-footer"> 

        <span style="color: red;"><b>Borrar el registro y el historial de pagos completamente? </b></span>&nbsp;&nbsp;

 <form method="post">



    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

    <button type="submit" name="eliminar_todo_el_registro" class="btn btn-danger"
    value="todo_all" > Borrar  </button>

      </div>

</form>

    </div>
  </div>
</div>
 --> 














</div>
</form>


<div class="form-row">
<div class="col-md-4 col-lg-4 mb-3">
                <div class="input-group-text alert-success" role="alert">
                    <i class="fa fa-balance-scale fa-lg "></i> &nbsp; &nbsp; Historial y registro de pagos.
                </div>
</div>



 <div class="col-md-4 col-lg-4 mb-3">
              

              <?php 
                  if ($errorZZ!="")
                  { echo "<div class=\"input-group-text alert-danger text-truncate\" id=\"basic-addon1\" role=\"alert\" align=\"center\" >".$errorZZ."</div>"; }
                ?>
                                       <!-- SOLO ES VISIBLE SI LA VARIABLE DE ERROR TIENE ALGO-->


                <?php 
                  if ($exitoZZ!="")
                  { echo "<div class=\"input-group-text alert-success text-truncate\" role=\"basic-addon1\" role=\"alert\" align=\"center\">".$exitoZZ."</div>"; }
                ?>
                                       <!-- SOLO ES VISIBLE SI LA VARIABLE DE ÉXITO TIENE ALGO-->


</div> 





<div class="col-md-1 col-lg-1 mb-3" > 
<div data-toggle="tooltip" data-placement="bottom" title="Monto Mensual Neto" >   
 
 <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#los_montos_mes" ><i class="fas fa-hand-holding-usd fa-lg"></i>&nbsp; 
</button>

</div>



<!-- Modal -->
<div class="modal fade" id="los_montos_mes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span class="text-info">Cobro Mes a Mes</span> - Ciclo y/o Periodo: <b><?php echo $respuestagg; ?></b> (Necesario para calcular la morosidad)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">




<?php


include("../conectar.php");

$query_periodo_mesesX = "SELECT * FROM temporada_escolar WHERE  id_periodo_es = '$id_periodo_clave'  LIMIT 1 ";
$datos_periodo_mesesX = mysqli_query($enlace, $query_periodo_mesesX) or die(mysqli_error());
$row_datos_periodo_mesesX = mysqli_fetch_assoc($datos_periodo_mesesX);


$mesX_01 = $row_datos_periodo_mesesX['me_pago_01'];
$mesX_02 = $row_datos_periodo_mesesX['me_pago_02'];
$mesX_03 = $row_datos_periodo_mesesX['me_pago_03'];
$mesX_04 = $row_datos_periodo_mesesX['me_pago_04'];
$mesX_05 = $row_datos_periodo_mesesX['me_pago_05'];
$mesX_06 = $row_datos_periodo_mesesX['me_pago_06'];
$mesX_07 = $row_datos_periodo_mesesX['me_pago_07'];
$mesX_08 = $row_datos_periodo_mesesX['me_pago_08'];
$mesX_09 = $row_datos_periodo_mesesX['me_pago_09'];
$mesX_10 = $row_datos_periodo_mesesX['me_pago_010'];
$mesX_11 = $row_datos_periodo_mesesX['me_pago_011'];
$mesX_12 = $row_datos_periodo_mesesX['me_pago_012'];


              $querymod2 = "SELECT * FROM periodo_de_pago where id_periodo_pago = 1 ";
              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());              
              $row_datos_mod2 = mysqli_fetch_array($datos_mod2);                         
               mysqli_close($enlace);    

$primer_pago = $row_datos_mod2['1er_pago'];
$segundo_pago = $row_datos_mod2['2do_pago'];
$tercero_pago = $row_datos_mod2['3er_pago'];



$cuarto_pago = $row_datos_mod2['4to_pago'];
$quinto_pago = $row_datos_mod2['5to_pago'];
$sexto_pago = $row_datos_mod2['6to_pago'];



$septimo_pago = $row_datos_mod2['7mo_pago'];
$octavo_pago = $row_datos_mod2['8vo_pago'];
$noveno_pago = $row_datos_mod2['9no_pago'];


$decimo_pago = $row_datos_mod2['10m_pago'];
$onceavo_pago = $row_datos_mod2['11o_pago'];
$doceavo_pago = $row_datos_mod2['12o_pago'];


?>


<table class="table table-bordered">
<thead class="" >
    <tr>
      <th scope="col">01-<span class="text-info"><?php echo $primer_pago; ?>  </span>   </th>
      <th scope="col">02-<span class="text-info"><?php echo $segundo_pago; ?> </span>  </th>
      <th scope="col">03-<span class="text-info"><?php echo $tercero_pago; ?> </span>  </th>
      <th scope="col">04-<span class="text-info"><?php echo $cuarto_pago; ?>  </span>   </th>
      <th scope="col">05-<span class="text-info"><?php echo $quinto_pago; ?>  </span>   </th>
      <th scope="col">06-<span class="text-info"><?php echo $sexto_pago; ?>   </span>    </th>
      <th scope="col">07-<span class="text-info"><?php echo $septimo_pago; ?> </span>  </th>
      <th scope="col">08-<span class="text-info"><?php echo $octavo_pago; ?>  </span>  </th>
      <th scope="col">09-<span class="text-info"><?php echo $noveno_pago; ?>  </span>  </th>
      <th scope="col">10-<span class="text-info"><?php echo $decimo_pago; ?>  </span>  </th>
      <th scope="col">11-<span class="text-info"><?php echo $onceavo_pago; ?> </span>  </th>
      <th scope="col">12-<span class="text-info"><?php echo $doceavo_pago; ?> </span>  </th>
    </tr>
  </thead>

  <tbody>



<form method="POST">


 <input type="hidden" id="save_in_this_id"  name="save_in_this_id" value="<?php echo $id_periodo_clave; ?>">


    <tr>

      <td>
<div class="input-group">

<input maxlength="15" type="text" class="form-control form-control-sm" id="mes_a_meses_01" name="mes_a_meses_01" value="<?php echo $mesX_01; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>
      </td>



      <td>
<div class="input-group">

<input maxlength="15" type="text" class="form-control form-control-sm" id="mes_a_meses_02" name="mes_a_meses_02" value="<?php echo $mesX_02; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>
      </td>



      <td>
<div class="input-group">

<input maxlength="15" type="text" class="form-control form-control-sm" id="mes_a_meses_03" name="mes_a_meses_03" value="<?php echo $mesX_03; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>
      </td>



      <td>
<div class="input-group">

<input maxlength="15" type="text" class="form-control form-control-sm" id="mes_a_meses_04" name="mes_a_meses_04" value="<?php echo $mesX_04; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>
      </td>



      <td>
<div class="input-group">

<input maxlength="15" type="text" class="form-control form-control-sm" id="mes_a_meses_05" name="mes_a_meses_05" value="<?php echo $mesX_05; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>
      </td>




      <td>
<div class="input-group">

<input maxlength="15" type="text" class="form-control form-control-sm" id="mes_a_meses_06" name="mes_a_meses_06" value="<?php echo $mesX_06; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>
      </td>



      <td>
<div class="input-group">

<input maxlength="15" type="text" class="form-control form-control-sm" id="mes_a_meses_07" name="mes_a_meses_07" value="<?php echo $mesX_07; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>
      </td>



      <td>
<div class="input-group">

<input maxlength="15" type="text" class="form-control form-control-sm" id="mes_a_meses_08" name="mes_a_meses_08" value="<?php echo $mesX_08; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>
      </td>



      <td>
<div class="input-group">

<input maxlength="15" type="text" class="form-control form-control-sm" id="mes_a_meses_09" name="mes_a_meses_09" value="<?php echo $mesX_09; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>
      </td>



      <td>
<div class="input-group">

<input maxlength="15" type="text" class="form-control form-control-sm" id="mes_a_meses_10" name="mes_a_meses_10" value="<?php echo $mesX_10; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>
      </td>



      <td>
<div class="input-group">

<input maxlength="15" type="text" class="form-control form-control-sm" id="mes_a_meses_11" name="mes_a_meses_11" value="<?php echo $mesX_11; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>
      </td>




      <td>
<div class="input-group">

<input maxlength="15" type="text" class="form-control form-control-sm" id="mes_a_meses_12" name="mes_a_meses_12" value="<?php echo $mesX_12; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>
      </td>




      

    </tr>


  </tbody>
</table>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>


        <button type="submit" name="salvar_los_mesesX" class="btn btn-primary">Actualizar</button>


      </div>

</form>







    </div>
  </div>
</div>  <!-- cierre del div del modal -->









</div>  




<div class="col-md-1 col-lg-1 mb-3" > 
<div data-toggle="tooltip" data-placement="bottom" title="Lista Restringida" >
 <button type="button" class="btn btn-danger btn-block"
 role="link" onclick="window.location='selecc_00_talonario.php'" ><i class="fas fa-ban fa-lg"></i>&nbsp; 
</button> </div>

</div>

 


<div class="col-md-2 col-lg-2 mb-3" >  

  <div class="lcd" style="border: 1px solid #7D8C76; border-radius: 4px; "><?php echo $format_monetdos; ?> -M</div>

</div>












</div>

<div class="form-row col-md-12 col-lg-12 mt-1 mb-2">

                <div class="text-dark"><b>Atención:</b> Para que los representantes de alumnos con <b>beca completa</b> puedan observar de forma correcta el progreso de las
                notas y/o las boletas de sus representados es necesario colocar manualmente el monto de todos los meses cubiertos por la institución en "1"; <b>A su vez</b> aquellos estudiantes inscritos a destiempo, será indispensable colocar en "1" el monto de los meses anteriores a la inscripción. </div> 

</div>





<div class="form-row">



 <div class="col-md-6 col-xl-4 col-sm-12 mb-3">
          <div class="card text-white relleno-orange o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-search"></i>
              </div>
              <div class="mr-5 cantidadzzzpe">Ingresar Doc.</div>
              <div class="mr-5 cantidadzzzpe">de Identidad</div>
              <div class="mr-5 cantidadzzzpe">del representante:</div>
            
            </div>


           <div class="card-footer card-footerz  clearfix z-1 small" >


<form method="POST">


           <div class="input-group input-group-sm">
    
<input type="hidden" id="id_del_ciclo"   name="id_del_ciclo"  value="<?php echo $id_periodo_clave; ?>">

            <input type="text" class="form-control" name="buscar_repre" placeholder="Doc de Id del representante...">
            <div class="input-group-append">
              <button type="submit" name="buscalo" class="btn btn-default"><i style="color:#F48917;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>
            </div>


          </div>
 </div>



<!--

  <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white relleno-gris o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-search-plus"></i>
              </div>
              <div class="mr-5 cantidadzzzpe">Ingresar Doc.</div>
              <div class="mr-5 cantidadzzzpe">de Identidad</div>
              <div class="mr-5 cantidadzzzpe">del estudiante:</div>
            
            </div>

           <div class="card-footer card-footerz  clearfix z-1 small" >


<form method="POST">


           <div class="input-group input-group-sm">
            

<input type="hidden" id="id_del_ciclo"   name="id_del_ciclo"  value="<?php echo $id_periodo_clave; ?>">

            <input type="text" class="form-control" name="buscar_alum" placeholder="Doc de Id del estudiante...">



            <div class="input-group-append">
              <button type="submit" name="buscalo_el" class="btn btn-default"><i style="color:#746E61;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>
            </div>


          </div>
 </div>     -->




 <div class="col-md-6 col-xl-4 col-sm-12 mb-3" >
          <div class="card text-white relleno-ocean o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon_pe_alt">
                <i class="fab fa-searchengin"></i>
              </div>
            
              <div class="mr-5 mb-4 cantidadzzzpe"><b>Datos "Completos":</b></div>
            <!--  <div class="mr-5 mb-2 cantidadzzzpe">del estudiante:</div> -->

  <script type="text/javascript" src="00_auto/jquery-1.12.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="00_auto/jquery-ui.css">
  <script type="text/javascript" src="00_auto/jquery-ui.js"></script> 
  <script type="text/javascript" src="00_auto/jquery.ui.autocomplete.scroll.min.js"></script> 


 <form method="POST">

           <div class="input-group input-group-sm mt-1 mb-2">            
            <input type="text" class="form-control" id="buscar_estud_nombre" name="buscar_estud_nombre" placeholder="Nombres del estudiante...">

<?php

include("../conectar.php");

$query_search_name = "SELECT reg_estudiantes.id_estud, reg_estudiantes.nombre_estu, reg_estu_actual.* FROM reg_estu_actual, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
      /*   and  reg_estu_actual.el_activo = '1'  */
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







<input type="hidden" id="id_del_ciclo"   name="id_del_ciclo"  value="<?php echo $id_periodo_clave; ?>">
            <div class="input-group-append">
            <button type="submit" name="buscalo_estud" class="btn btn-default"><i style="color:#268092;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>

 <form method="POST">

           <div class="input-group input-group-sm mb-2">            
            <input type="text" class="form-control" id="buscar_estud_apell" name="buscar_estud_apell" placeholder="Apellidos del estudiante...">

<?php

include("../conectar.php");

$query_search_ape = "SELECT reg_estudiantes.id_estud, reg_estudiantes.apellidos_estu, reg_estu_actual.* FROM reg_estu_actual, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
       /*  and  reg_estu_actual.el_activo = '1'  */
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





<input type="hidden" id="id_del_ciclo"   name="id_del_ciclo"  value="<?php echo $id_periodo_clave; ?>">
            <div class="input-group-append">
            <button type="submit" name="buscalo_estud_a" class="btn btn-default"><i style="color:#268092;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>


<form method="POST">


           <div class="input-group input-group-sm">
            

<input type="hidden" id="id_del_ciclo"   name="id_del_ciclo"  value="<?php echo $id_periodo_clave; ?>">

            <input type="text" class="form-control" name="buscar_alum" placeholder="Doc. de Id del estudiante...">



            <div class="input-group-append">
              <button type="submit" name="buscalo_el" class="btn btn-default"><i style="color:#268092;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>


 </form>

         <small id="" class="form-text text-white">Pre-Inscritos: Realizar el seguimiento solo con el Doc. de Id.</small>


            
            </div>            

          </div>
 </div>





  <div class="col-xl-4 col-sm-6 mb-3" >

        <div class="form-row">       

        <div class="col-xl-6 col-sm-6 mb-2">   

          <div class="card text-white relleno-grama">
            <div class="card-body">
              <div class="mini_card_icon_pe ">
                 <i class="fas fa-search-location"></i>           
              </div>

            <div class="mr-5 cantidadzzzpe" style="margin-top: -15px; margin-bottom:-15px;">Buscar N° de recibo:</div>
                           
            </div>

             <div class="card-footer card-footerz  clearfix z-1 small" >

<form method="POST">
           <div class="input-group input-group-sm">

<input type="hidden" id="id_del_ciclo"   name="id_del_ciclo"  value="<?php echo $id_periodo_clave; ?>">

            <input type="text" class="form-control" name="buscar_rec" placeholder="Ingresar N° de recibo...">
            <div class="input-group-append">
              <button type="submit" name="buscalo_rec" class="btn btn-default"><i style="color:#088A4B;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>
            </div>
                    
          </div> 




        </div>








 <div class="col-xl-6 col-sm-6 mb-2">   

          <div class="card text-white relleno-salmon_a">
            <div class="card-body">
              <div class="mini_card_icon_pe ">
             <i class="fas fa-piggy-bank"></i>

 


              </div>

            <div class="mr-5 cantidadzzzpe" style="margin-top: -15px; margin-bottom:-15px;">Nomina: <?php echo $respuestagg; ?></div>
                           
            </div>

             <div class="card-footer card-footerz  clearfix z-1 small" >

<a class="btn btn-light btn-sm" href="nominas.php?proo=<?php echo $id_periodo_clave; ?>" role="button">Administrar Comprobantes</a>


            </div>
                    
          </div> 




        </div>










































          <div class="col-xl-6 col-sm-6 mb-2">  
          <div class="card text-white relleno-browplight ">
            <div class="card-body">
              <div class="mini_card_icon_pe ">
                  <i class="fas fa-chart-pie"></i>           
              </div>

               <div class="mr-5 infozzzpe" style="margin-top: -15px; margin-bottom:-15px; ">Reporte fecha:</div>
         
            </div>

             <div class="card-footer card-footerz_pe  clearfix z-1 small" >

<form method="POST" class="mt-1" >
           <div class="input-group input-group-sm">

            <input type="date" class="form-control" name="buscar_fecha" required>
            <div class="input-group-append">
              <button type="submit" name="buscalo_fecha" class="btn btn-default"><i style="color:#AD6A42;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>
            </div>


          </div> 
        </div>





          <div class="col-xl-6 col-sm-6 ">  
          <div class="card text-white relleno-indigo ">
            <div class="card-body">
              <div class="mini_card_icon_pe ">
                  <i class="far fa-frown-open"></i>      
              </div>

               <div class="infozzzpe" style="margin-left: -15px; margin-top: -15px; margin-bottom:-15px; ">Mora Globales</div>
                  
         
            </div>

        <div class="card-footer_alttter card-footerz_pe_alt  clearfix z-1 small" >       



<span style="float: left;" class="mt-1" >
 <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora_full_con_mat.php" method="POST">

<input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
<input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Resumen Inicial">

            <span
              <?php if ($totalRows_maternal_inscrito===0) {?>style="display:none"<?php } ?> >

<button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-indigo btn_espxdos">
              Ini.</button>    
            </span>
</form></span>


<span style="float: left;" class="mt-1" >
 <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora_full_sin_mat.php" method="POST">

<input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
<input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Resumen Inicial">

            <span <?php if ($totalRows_maternal_inscrito>=1) {?>style="display:none"<?php } ?> >

<button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-indigo btn_espxdos">
              Ini.</button>    <!-- sin maternal --> 
            </span>
</form> </span>

<span style="float: left;" class="mt-1" >
 <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora_full_basica.php" method="POST">

<input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
<input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Resumen Básica">

           

<button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-indigo btn_espxdos">
              Bás.</button>    <!-- sin maternal --> 
           
</form></span>





<span style="float: left;" class="mt-1" >
 <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora_full_con_6to.php" method="POST">

<input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
<input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Resumen Media">

           
<span <?php if ($totalRows_ano6_inscrito===0) {?>style="display:none"<?php } ?> >
<button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-indigo btn_espxdos">
              Med.</button>    <!-- sin 6to --> </span>
           
</form></span>         



<span style="float: left;" class="mt-1" >
 <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora_full_sin_6to.php" method="POST">

<input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
<input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Resumen Media">

           
<span <?php if ($totalRows_ano6_inscrito>=1) {?>style="display:none"<?php } ?> >
<button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-indigo btn_espxdos">
              Med.</button>    <!-- con 6to --> </span>
           
</form></span>
           



<span style="float: left;" class="mt-1" >
 <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora_full_t.php" method="POST">

<input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
<input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Resumen Global">

           

<button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-indigo btn_espxdos">
              T.</button>    <!-- sin maternal --> 
           
</form></span>


            </div> <!-- cierre footer --> 


          </div></div> 
        













</div>  


 </div>



</div>










<!--



<div class="form-row ml-1"> <form target="_blank" action="zzz_impresiones/imp_lista_carta_vacia.php" method="POST">




          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-primary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-print"></i>&nbsp;&nbsp; Lista "Carta" Vacía</button>


</form>

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_vacia.php" method="POST">




          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-print"></i>&nbsp;&nbsp; Lista "Oficio" Vacía</button>


</form>






<a target="_blank" rel="noopener noreferrer" href="recursos/00_print_img.php?img=Horario inicial.png"><button type="button"  class="btn btn-secondary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario Inicial</button></a>


<a target="_blank" rel="noopener noreferrer" href="recursos/00_print_img.php?img=Horario basica.png"><button type="button"  class="btn btn-secondary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario Básica</button></a>


<a target="_blank" rel="noopener noreferrer" href="recursos/00_print_img.php?img=Horario Bachillerato.png"><button type="button"  class="btn btn-secondary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario Bachillerato</button></a>


<a target="_blank" rel="noopener noreferrer" href="recursos/00_print_img.php?img=Horario Multiple.png"><button type="button"  class="btn btn-dark" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario x4 Profesores</button></a> </div>





      
      <div class="form-row">

        <div class="mt-1 ml-2 text-muted mb-3"><b>Alerta:</b> En caso de aparecer alumnos dentro de la <b>"Sección X"</b> (Sección de Error), indica que, a dichos alumnos no se le asignaron una sección valida al momento de inscribirlos en el sistema.</div> 
</div>

<div class="row">

</div>   cierre row -->



<h4 class="glowwhite mt-2 mb-2">Pre-Inscripción Rápida:</h4>

<div class="row">

         <div class="col-xl-4 col-sm-6 mb-3" >
                <div class="card text-white relleno-fresa o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                     
      <span class="fa-layers fa-fw">
          <i class="fas fa-clipboard" ></i>
        <i class="fas fa-sync" style="color:#FF0040"
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
                    <button type="submit" name="pre_ins_estud_cur" class="btn btn-default"><i style="color:#FF0040;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
                  </div>
                </div>
       </form>
                  </div>
                </div>
       </div>






         <div class="col-xl-4 col-sm-6 mb-3">

          <div class="card text-white relleno-fresa o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user"></i>
              </div>
              <div class="mr-5 cantidadzzzpe">Pre-Inscribir</div>
              <div class="infozzzpe">nuevo estudiante(s)</div>
              
            </div>

            <div class="pl-1 ml-3 infozzzpe">Cantidad?</div>

            <div class="card-footer card-footerz  clearfix z-1 small" >

              <a class="btn btn-light btn-sm" href="zona_adm_estudiante_pre_fast.php?num_alum=1" role="button">x1</a>
              <a class="btn btn-light btn-sm" href="zona_adm_estudiante_pre_fast.php?num_alum=2" role="button">x2</a>
              <a class="btn btn-light btn-sm" href="zona_adm_estudiante_pre_fast.php?num_alum=3" role="button">x3</a>
          <!--    <a class="btn btn-warning btn-sm" href="zona_adm_estudiante_pre.php?num_alum=4" role="button">x4</a>
              <a class="btn btn-warning btn-sm" href="zona_adm_estudiante_pre.php?num_alum=5" role="button">x5</a>   -->            
              
            </div>

          </div>

  </div>




          <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white relleno-fresa o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <div class="mr-5 cantidadzzzpe">Pre-Inscribir</div>
               <div class="infozzzpe">nuevo estudiante</div>
              <div class="infozzzpe">a grupo familiar.</div>              
            </div>           

            <div class="card-footer card-footerz  clearfix z-1 small" >

      <form method="POST">

                 <div class="input-group input-group-sm">
                  <div class="input-group-prepend">
                    
                    <button type="button" class="btn btn-dark" disabled><i class="far fa-id-card fa-lg"></i></button>
                  </div>
                  <input type="text" class="form-control" name="search_this_doc_id" placeholder="Doc. de Id. del representante...">
                  <div class="input-group-append">
                    <button type="submit" name="el_doc_del_repre" class="btn btn-dark">&nbsp;&nbsp;<i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;</button>
                  </div>
                </div>

       </form>
                  </div>          
              </div>
        </div>




</div>






<h4 class="glowwhite mt-2 mb-2">Inicial:</h4>


<div class="row">


 <div class="col-xl-4 col-sm-6 mb-3" <?php if ($totalRows_maternal_inscrito===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-earlybirds"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_maternal_inscrito; ?></div>
              <div class="infozzz">Maternal</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_maternal_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_maternal_inscritoM; ?> </div>
            </div>

               <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=1&tituloJKL=Maternal Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sa_inscritom; ?> ) - "A"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>




                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   




</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=2&tituloJKL=Maternal Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sb_inscritom; ?> ) - "B"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   




</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=11&tituloJKL=Maternal Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradom_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sc_inscritom; ?> ) - "C"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=12&tituloJKL=Maternal Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradom_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sd_inscritom; ?> ) - "D"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=13&tituloJKL=Maternal Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradom_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_se_inscritom; ?> ) - "E"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>

                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=14&tituloJKL=Maternal Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sf_inscritom; ?> ) - "F"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=15&tituloJKL=Maternal Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sg_inscritom; ?> ) - "G"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=9&tituloJKL=Maternal Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradom_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_su_inscritom; ?> ) - "U"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   


</div>

<!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&tituloJKL=Maternal Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>


        </div>  




        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-kiwi-bird"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_prescolar1_inscrito; ?></div>
              <div class="infozzz">Pre-E. 1er Niv.</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_prescolar1_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_prescolar1_inscritoM; ?> </div>
            </div>

               <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=1&tituloJKL=1er Niv. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sa_inscritom; ?> ) - "A"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>




                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   




</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=2&tituloJKL=1er Niv. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sb_inscritom; ?> ) - "B"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   




</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=11&tituloJKL=1er Niv. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradon1_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sc_inscritom; ?> ) - "C"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=12&tituloJKL=1er Niv. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradon1_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sd_inscritom; ?> ) - "D"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=13&tituloJKL=1er Niv. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_se_inscritom; ?> ) - "E"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>

                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=14&tituloJKL=1er Niv. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sf_inscritom; ?> ) - "F"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=15&tituloJKL=1er Niv. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sg_inscritom; ?> ) - "G"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=9&tituloJKL=1er Niv. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_su_inscritom; ?> ) - "U"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   


</div>

<!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&tituloJKL=1er Niv. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>

          </div>
        </div>


        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-crow"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_prescolar2_inscrito; ?></div>
              <div class="infozzz">Pre-E. 2do Niv.</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_prescolar2_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_prescolar2_inscritoM; ?> </div>
            </div>

                        <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=1&tituloJKL=2do Niv. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sa_inscritom; ?> ) - "A"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>



              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   



</div>

<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=2&tituloJKL=2do Niv. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sb_inscritom; ?> ) - "B"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


 <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>







</div>
<div class="form-row">

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=11&tituloJKL=2do Niv. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sc_inscritom; ?> ) - "C"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></i></b></button>

              </form>



<!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>





</div>
<div class="form-row">

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=12&tituloJKL=2do Niv. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradon2_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sd_inscritom; ?> ) - "D"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


<!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=13&tituloJKL=2do Niv. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_se_inscritom; ?> ) - "E"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">


              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=14&tituloJKL=2do Niv. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sf_inscritom; ?> ) - "F"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=15&tituloJKL=2do Niv. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sg_inscritom; ?> ) - "G"</a>

                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>

                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>




</div>
<div class="form-row">

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=9&tituloJKL=2do Niv. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_su_inscritom; ?> ) - "U"</a>

               <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>   





</div>

                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&tituloJKL=2do Niv. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>

          </div>
        </div>




        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-dove"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_prescolar3_inscrito; ?></div>
              <div class="infozzz">Pre-E. 3er Niv.</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_prescolar3_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_prescolar3_inscritoM; ?> </div>
            </div>

                          <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=1&tituloJKL=3er Niv. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sa_inscritom; ?> ) - "A"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


<!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=2&tituloJKL=3er Niv. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sb_inscritom; ?> ) - "B"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=11&tituloJKL=3er Niv. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradon3_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sc_inscritom; ?> ) - "C"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=12&tituloJKL=3er Niv. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradon3_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sd_inscritom; ?> ) - "D"</a>

                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=13&tituloJKL=3er Niv. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_se_inscritom; ?> ) - "E"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=14&tituloJKL=3er Niv. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sf_inscritom; ?> ) - "F"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=15&tituloJKL=3er Niv. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sg_inscritom; ?> ) - "G"</a>

                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>




</div>
<div class="form-row">
              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=9&tituloJKL=3er Niv. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_su_inscritom; ?> ) - "U"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&tituloJKL=2do Niv. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>

          </div>
        </div>

        

        </div>  <!-- cierre row -->



<h4 class="glowwhite mt-2 mb-2">Básica:</h4>


<div class="row">


  <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-car-side"></i>  
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_grado1_inscrito; ?></div>  
              <div class="infozzzpe">1er Grado</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_grado1_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_inscritoM; ?> </div>
            </div>

            <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=1&tituloJKL=1° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sa_inscritom; ?> ) - "A"</a>

<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=2&tituloJKL=1° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sb_inscritom; ?> ) - "B"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>




</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=11&tituloJKL=1° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado1_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sc_inscritom; ?> ) - "C"</a>



<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                  <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=12&tituloJKL=1° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado1_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sd_inscritom; ?> ) - "D"</a>



<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


                <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=13&tituloJKL=1° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado1_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_se_inscritom; ?> ) - "E"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


    <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=14&tituloJKL=1° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sf_inscritom; ?> ) - "F"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=15&tituloJKL=1° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sg_inscritom; ?> ) - "G"</a>


  <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=9&tituloJKL=1° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado1_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_su_inscritom; ?> ) - "U"</a>



  <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>

               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>

                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-purpplight btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&tituloJKL=1° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div> 


        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-truck-pickup"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_grado2_inscrito; ?></div>
              <div class="infozzzpe">2do Grado</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_grado2_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_inscritoM; ?> </div>
            </div>

            <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=1&tituloJKL=2° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sa_inscritom; ?> ) - "A"</a>



  <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=2&tituloJKL=2° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sb_inscritom; ?> ) - "B"</a>



  <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=11&tituloJKL=2° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado2_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sc_inscritom; ?> ) - "C"</a>


  <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=12&tituloJKL=2° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado2_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sd_inscritom; ?> ) - "D"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                 <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>




</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=13&tituloJKL=2° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado2_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_se_inscritom; ?> ) - "E"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                   <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=14&tituloJKL=2° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sf_inscritom; ?> ) - "F"</a>



<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=15&tituloJKL=2° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sg_inscritom; ?> ) - "G"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=9&tituloJKL=2° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado2_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_su_inscritom; ?> ) - "U"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-purpplight btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&tituloJKL=2° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>


          </div>
        </div>  



        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-truck-monster"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_grado3_inscrito; ?></div>
              <div class="infozzzpe">3er Grado</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_grado3_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_inscritoM; ?> </div>
            </div>

<div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=1&tituloJKL=3° Gr. Secc. A &nbsp;" role="button"  <?php if ($totalRows_grado3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sa_inscritom; ?> ) - "A"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=2&tituloJKL=3° Gr. Secc. B &nbsp;" role="button"  <?php if ($totalRows_grado3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sb_inscritom; ?> ) - "B"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

                <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=11&tituloJKL=3° Gr. Secc. C &nbsp;" role="button" <?php if ($totalRows_grado3_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sc_inscritom; ?> ) - "C"</a>



<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>

              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=12&tituloJKL=3° Gr. Secc. D &nbsp;" role="button" <?php if ($totalRows_grado3_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sd_inscritom; ?> ) - "D"</a>



<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

                <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=13&tituloJKL=3° Gr. Secc. E &nbsp;" role="button"  <?php if ($totalRows_grado3_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_se_inscritom; ?> ) - "E"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=14&tituloJKL=3° Gr. Secc. F &nbsp;" role="button"  <?php if ($totalRows_grado3_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sf_inscritom; ?> ) - "F"</a>




<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=15&tituloJKL=3° Gr. Secc. G &nbsp;" role="button"  <?php if ($totalRows_grado3_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sg_inscritom; ?> ) - "G"</a>



<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                 <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=9&tituloJKL=3° Gr. Secc. U &nbsp;" role="button"  <?php if ($totalRows_grado3_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_su_inscritom; ?> ) - "U"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1 "
                 <?php if ($totalRows_grado3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>

                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-purpplight btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&tituloJKL=3° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado3_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>




        
          </div>
        </div> 




</div>

<div class="row">


          


         <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-plane"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_grado4_inscrito; ?></div>
              <div class="infozzzpe">4to Grado</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_grado4_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_inscritoM; ?> </div>
            </div>


<div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=1&tituloJKL=4° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sa_inscritom; ?> ) - "A"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=2&tituloJKL=4° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sb_inscritom; ?> ) - "B"</a>

<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



                  <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>




</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=11&tituloJKL=4° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado4_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sc_inscritom; ?> ) - "C"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



                 <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=12&tituloJKL=4° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado4_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sd_inscritom; ?> ) - "D"</a>



                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


            </div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=13&tituloJKL=4° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado4_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_se_inscritom; ?> ) - "E"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>

                 <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>




</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=14&tituloJKL=4° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sf_inscritom; ?> ) - "F"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                 <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=15&tituloJKL=4° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sg_inscritom; ?> ) - "G"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                 <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=9&tituloJKL=4° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado4_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_su_inscritom; ?> ) - "U"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


                <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado4_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-vino btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&tituloJKL=4° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div>  



        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fighter-jet"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_grado5_inscrito; ?></div>
              <div class="infozzzpe">5to Grado</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_grado5_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_inscritoM; ?> </div>
            </div>



           <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=1&tituloJKL=5° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sa_inscritom; ?> ) - "A"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=2&tituloJKL=5° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sb_inscritom; ?> ) - "B"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=11&tituloJKL=5° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado5_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sc_inscritom; ?> ) - "C"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=12&tituloJKL=5° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado5_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sd_inscritom; ?> ) - "D"</a>

<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>



               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>




</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=13&tituloJKL=5° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado5_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_se_inscritom; ?> ) - "E"</a>

<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=14&tituloJKL=5° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sf_inscritom; ?> ) - "F"</a>

<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>




</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=15&tituloJKL=5° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sg_inscritom; ?> ) - "G"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=9&tituloJKL=5° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado5_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_su_inscritom; ?> ) - "U"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


  <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado5_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>





</div>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-vino btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&tituloJKL=5° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div> 


        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-space-shuttle"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_grado6_inscrito; ?></div>
              <div class="infozzzpe">6to Grado</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_grado6_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_inscritoM; ?> </div>
            </div>


           <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=1&tituloJKL=6° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sa_inscritom; ?> ) - "A"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=2&tituloJKL=6° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sb_inscritom; ?> ) - "B"</a>

<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=11&tituloJKL=6° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado6_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sc_inscritom; ?> ) - "C"</a>



                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=12&tituloJKL=6° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado6_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sd_inscritom; ?> ) - "D"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=13&tituloJKL=6° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado6_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_se_inscritom; ?> ) - "E"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>




</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=14&tituloJKL=6° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sf_inscritom; ?> ) - "F"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=15&tituloJKL=6° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sg_inscritom; ?> ) - "G"</a>


<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


                <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=9&tituloJKL=6° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado6_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_su_inscritom; ?> ) - "U"</a>



<form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


                <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1 "
                 <?php if ($totalRows_grado6_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-vino btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&tituloJKL=6° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
              
                            
            </div>


          </div>
        </div>       










</div>





<h4 class="glowwhite mt-2 mb-2">Media:</h4>

<div class="row">

<div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-desktop"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_ano1_inscrito; ?></div>
              <div class="infozzzpe">1er Año</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_ano1_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_ano1_inscritoM; ?> </div>
            </div>

            <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=1&tituloJKL=1er Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sa_inscritom; ?> ) - "A"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=2&tituloJKL=1er Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sb_inscritom; ?> ) - "B"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=11&tituloJKL=1er Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop1_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sc_inscritom; ?> ) - "C"</a>

                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

                <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=12&tituloJKL=1er Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop1_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sd_inscritom; ?> ) - "D"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


                <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=13&tituloJKL=1er Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_se_inscritom; ?> ) - "E"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=14&tituloJKL=1er Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sf_inscritom; ?> ) - "F"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

                <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=15&tituloJKL=1er Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sg_inscritom; ?> ) - "G"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

                <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=9&tituloJKL=1er Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_su_inscritom; ?> ) - "U"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop1_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>

                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm bg-primary btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&tituloJKL=1er Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>


          </div>
        </div>

        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-laptop"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_ano2_inscrito; ?></div>
              <div class="infozzzpe">2do Año</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_ano2_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_ano2_inscritoM; ?> </div>
            </div>



    <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=1&tituloJKL=2do Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sa_inscritom; ?> ) - "A"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


 <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=2&tituloJKL=2do Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sb_inscritom; ?> ) - "B"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



 <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=11&tituloJKL=2do Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop2_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sc_inscritom; ?> ) - "C"</a>



                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=12&tituloJKL=2do Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop2_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sd_inscritom; ?> ) - "D"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=13&tituloJKL=2do Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_se_inscritom; ?> ) - "E"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=14&tituloJKL=2do Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sf_inscritom; ?> ) - "F"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


                <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=15&tituloJKL=2do Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sg_inscritom; ?> ) - "G"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=9&tituloJKL=2do Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_su_inscritom; ?> ) - "U"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop2_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>

                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm bg-primary btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&tituloJKL=2do Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div>

        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-tablet-alt"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_ano3_inscrito; ?></div>
              <div class="infozzzpe">3er Año</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_ano3_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_ano3_inscritoM; ?> </div>
            </div>


    <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=1&tituloJKL=3er Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sa_inscritom; ?> ) - "A"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>

              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=2&tituloJKL=3er Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sb_inscritom; ?> ) - "B"</a>

                                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=11&tituloJKL=3er Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop3_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sc_inscritom; ?> ) - "C"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


<!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=12&tituloJKL=3er Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop3_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sd_inscritom; ?> ) - "D"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=13&tituloJKL=3er Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_se_inscritom; ?> ) - "E"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=14&tituloJKL=3er Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sf_inscritom; ?> ) - "F"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=15&tituloJKL=3er Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sg_inscritom; ?> ) - "G"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=9&tituloJKL=3er Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_su_inscritom; ?> ) - "U"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

                <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop3_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>

                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm bg-primary btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&tituloJKL=3er Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
              
                            
            </div>


          </div>
        </div> 

</div>





       



<h4 class="glowwhite mt-2 mb-2">Media General:</h4>


<div class="row">




        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-medapps"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_ano4_inscrito; ?></div>
              <div class="infozzzpe">4to Año</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_ano4_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_ano4_inscritoM; ?> </div>
            </div>



                <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=1&tituloJKL=4to Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sa_inscritom; ?> ) - "A"</a>

                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=2&tituloJKL=4to Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sb_inscritom; ?> ) - "B"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                 <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>
</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=11&tituloJKL=4to Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop4_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sc_inscritom; ?> ) - "C"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                 <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=12&tituloJKL=4to Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop4_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sd_inscritom; ?> ) - "D"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=13&tituloJKL=4to Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_se_inscritom; ?> ) - "E"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=14&tituloJKL=4to Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sf_inscritom; ?> ) - "F"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=15&tituloJKL=4to Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sg_inscritom; ?> ) - "G"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=9&tituloJKL=4to Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_su_inscritom; ?> ) - "U"</a>


                 <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop4_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>

                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-browplight btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&tituloJKL=4to Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div> 


        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-react"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_ano5_inscrito; ?></div>
              <div class="infozzzpe">5to Año</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_ano5_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_ano5_inscritoM; ?> </div>
            </div>


                    <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=1&tituloJKL=5to Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sa_inscritom; ?> ) - "A"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=2&tituloJKL=5to Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sb_inscritom; ?> ) - "B"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=11&tituloJKL=5to Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop5_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sc_inscritom; ?> ) - "C"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=12&tituloJKL=5to Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop5_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sd_inscritom; ?> ) - "D"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

                <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


    <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=13&tituloJKL=5to Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_se_inscritom; ?> ) - "E"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=14&tituloJKL=5to Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sf_inscritom; ?> ) - "F"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=15&tituloJKL=5to Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sg_inscritom; ?> ) - "G"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=9&tituloJKL=5to Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_su_inscritom; ?> ) - "U"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop5_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>
</div>


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-browplight btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&tituloJKL=5to Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>


          </div>
        </div>   



<div class="col-xl-4 col-sm-6 mb-3" <?php if ($totalRows_ano6_inscrito===0) {?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-hubspot"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_ano6_inscrito; ?></div>
              <div class="infozzzpe">6to Año</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_ano6_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_ano6_inscritoM; ?> </div>
            </div>


                    <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=1&tituloJKL=6to Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sa_inscritom; ?> ) - "A"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. A">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=2&tituloJKL=6to Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sb_inscritom; ?> ) - "B"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. B">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=11&tituloJKL=6to Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop6_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sc_inscritom; ?> ) - "C"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. C">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>



                <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=12&tituloJKL=6to Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop6_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sd_inscritom; ?> ) - "D"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

                <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. D">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


    <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>

</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=13&tituloJKL=6to Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop6_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_se_inscritom; ?> ) - "E"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. E">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=14&tituloJKL=6to Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop6_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sf_inscritom; ?> ) - "F"</a>

                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. F">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


               <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>


</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=15&tituloJKL=6to Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop6_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sg_inscritom; ?> ) - "G"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. G">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>



</div>
<div class="form-row">
              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_pagos.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=9&tituloJKL=6to Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop6_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_su_inscritom; ?> ) - "U"</a>


                <form target="_blank" action="zzz_impresiones/imp_pagos_oficio_horiz.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-print fa-lg"></i></b></button>

              </form>

              <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-chart-line fa-lg"></i></b></button>

              </form>

               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. U">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-funnel-dollar fa-lg"></i></b></button>

              </form>


              <!-- extras  -->


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_horiz_mod_vacia.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="far fa-file fa-lg"></i></b></button>

              </form>     


               <form target="_blank" action="zzz_impresiones/imp_pagos_carta_dos_horiz_mod_mora.php" method="POST">

                <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1 "
                 <?php if ($totalRows_gradop6_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fas fa-exclamation-triangle fa-lg"></i></b></button>

              </form>
</div>


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-browplight btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&tituloJKL=6to Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop6_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div>  


        

      </div>  <!-- cierre row -->


<!-- Cierre Icon Cards-->


















<!-- 
<h4 class="glowwhite mt-2 mb-2"> <i class="fas fa-tools fa-lg"></i> Personalizar:</h4>  -->











</div><!-- cierre del borde -->
    
   
</div> <!-- cierre container fluid -->    
</div> <!-- cierre content wrapper -->




















 <?php include ("Footer.php"); ?>