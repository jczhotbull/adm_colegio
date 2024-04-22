<?php

error_reporting(0);   // con esto no me muestra el error de la variable de secion clavec



session_unset();
session_destroy();
session_start();



session_cache_limiter('private, must-revalidate');
session_cache_expire(60);


include("identificador.php");


  if ($_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario' && $_SESSION ['cargo'] != 'Profesor')

    {

      session_unset();                     // libera todas las variables de sessión
        setcookie("id", "", time()-60*60);   // crea la cookie id con el valor vacio y que caduque una hora antes.
        $_COOKIE ['id']="";                  // borra el valor de id contenido en el cookie, por medida extra

        setcookie("cargo", "", time()-60*60);   // crea la cookie cargo con el valor vacio y que caduque una hora antes.
        $_COOKIE ['cargo']="";                  // borra el valor de cargo contenido en el cookie, por medida extra

        header("Location: ../index.php");

    }



header('Cache-Control: max-age=900');

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

 $no_hay=" ";


$_SESSION['pass_ingresado'] = '';
$_SESSION['permiso_full'] = '';

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



$el_tipoo = $_GET['tipoo'];

if ($el_tipoo == 'vvv') {
    $el_tipoo ='';
}


$a_lo_macho='zzz_configuraciones.php';
include("../conectar.php");





 if(isset($_POST['cambiar_periodo']))
    {
      $id_periodo_seleccionadoXX = $_POST['set_periodo'];
    }

    else {$id_periodo_seleccionadoXX = ""; }

$id_periodo_seleccionado = $id_periodo_seleccionadoXX;


if ($id_periodo_seleccionado == "") {  

$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  status = '1' and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);

$id_periodo_clave =  $row_datos_periodo_actual['id_periodo_es'];

}


else {

$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  id_periodo_es = '$id_periodo_seleccionado'
 and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);

$id_periodo_clave =  $id_periodo_seleccionado;

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


$query_doc = "SELECT * FROM documentos_solicitados
            where ( status_estu = '0'
            or status_ret = '0'
            or status_ins = '0'
            or status_acep = '0' ) GROUP BY id_doc_sol";

$datos_doc = mysqli_query($enlace, $query_doc) or die(mysqli_error());
$totalRows_doc = mysqli_num_rows($datos_doc); 



$query_String_cumplen = "SELECT COUNT(*) AS total FROM plantilla_personal, plantilla_contratados
WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
and status ='1'
and day(nacimiento_per)=day(NOW()) 
and month(nacimiento_per)=month(NOW())";

$query_cumplen = mysqli_query($enlace, $query_String_cumplen);

$row_cumplen = mysqli_fetch_object($query_cumplen);   


$query_String_cumplenM = "SELECT COUNT(*) AS total FROM plantilla_personal, plantilla_contratados
WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
and status ='1'
and month(nacimiento_per)=month(NOW()) ";
    
$query_cumplenM = mysqli_query($enlace, $query_String_cumplenM);

$row_cumplenM = mysqli_fetch_object($query_cumplenM);   
$machin_machin=filesize($a_lo_macho);


mysqli_close($enlace);  


















 if(isset($_POST['status_lapsos']))
        {
  
        include("../conectar.php");

         $id_col =  $_POST["id_col"]; 

         $aaa =  $_POST["1er_L_status"];
         $bbb =  $_POST["2do_L_status"]; 
         $ccc =  $_POST["3er_L_status"];
         $ddd =  $_POST["ver_retirados"];

         $hhh =  $_POST["ver_corte_final"];
         $mmm =  $_POST["ver_informe_final"];

   
   $sqlWEB = "UPDATE z_plantel SET 1er_L = '$aaa' ,
                                   2do_L = '$bbb' ,
                                   3er_L = '$ccc' ,
                                   ver_ret = '$ddd' ,
                                   ver_corte_final =  '$hhh',
                                   ver_informe_final =  '$mmm'




                                WHERE id_plantel ='$id_col' ";

                       
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

















 if(isset($_POST['busca_ci']))
    {




  if ($_POST['imp_doc1'] == "" && $_POST['imp_doc2'] == "" && $_POST['imp_doc3'] == "")     
    {  

  $errorZ .= "- Ingrese un número de documento. ";

   }



if (!$_POST['imp_doc1'] == "")     
    {  

if (strlen($_POST['imp_doc1']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 6 números. "; }



else { 

     $doc_1 = $_POST['imp_doc1'];



     include("../conectar.php");


      $query_bus1 = "SELECT id_per, foto_per_ci FROM  plantilla_personal
        
        WHERE  ci_per = '$doc_1'

        GROUP by ci_per Limit 1 ";

$datos_plantilla_bus1 = mysqli_query($enlace, $query_bus1) or die(mysqli_error());
$row_datos_plantilla1 = mysqli_fetch_array($datos_plantilla_bus1); 
$totalRows_datos_plantilla_bus1 = mysqli_num_rows($datos_plantilla_bus1);

$fotoA1 = $row_datos_plantilla1["foto_per_ci"];

mysqli_close($enlace); 


if ( $fotoA1 != "") {

  $exitoZ .= "&nbsp; Documento 1 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d1= "1";

  $result1 = $row_datos_plantilla1["id_per"];

}


else {

  $exitoZ.="<span style=\"color:red; \">&nbsp; No Encontrado &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ; ";

}



      }



     }




$enlace_1 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula1.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir ID1</a>

</form>


";




if ($d1 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_1." ";
}




    } 















 if(isset($_POST['busca_ci_carnet']))
    {




  if ($_POST['imp_doc1'] == "" )     
    {  

  $errorZ .= "- Ingrese un N° de Doc. para imprimir carnets. ";

   }



if (!$_POST['imp_doc1'] == "")     
    {  

if (strlen($_POST['imp_doc1']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 6 números de documento. "; }



else { 

     $doc_1 = $_POST['imp_doc1'];



     include("../conectar.php");


      $query_bus1 = "SELECT id_per, foto_per FROM  plantilla_personal
        
        WHERE  ci_per = '$doc_1'

        GROUP by ci_per Limit 1 ";

$datos_plantilla_bus1 = mysqli_query($enlace, $query_bus1) or die(mysqli_error());
$row_datos_plantilla1 = mysqli_fetch_array($datos_plantilla_bus1); 
$totalRows_datos_plantilla_bus1 = mysqli_num_rows($datos_plantilla_bus1);

$fotoA1 = $row_datos_plantilla1["foto_per"];

mysqli_close($enlace); 


if ( $fotoA1 != "") {

  $exitoZ .= "&nbsp; Foto 1 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d1= "1";

  $result1 = $row_datos_plantilla1["id_per"];

}


else {

  $exitoZ.="<span style=\"color:red; \">&nbsp; No Encontrado &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ; ";

}



      }



     }





$enlace_1 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet1.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir Carnet 1</a>

</form>


";







if ($d1 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_1." ";
}










    } 













 if(isset($_POST['busca_ci_carnet_vert']))
    {




  if ($_POST['imp_doc1'] == "" )     
    {  

  $errorZ .= "- Ingrese un N° de Doc. para imprimir carnets. ";

   }



if (!$_POST['imp_doc1'] == "")     
    {  

if (strlen($_POST['imp_doc1']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 6 números de documento. "; }



else { 

     $doc_1 = $_POST['imp_doc1'];



     include("../conectar.php");


      $query_bus1 = "SELECT id_per, foto_per FROM  plantilla_personal
        
        WHERE  ci_per = '$doc_1'

        GROUP by ci_per Limit 1 ";

$datos_plantilla_bus1 = mysqli_query($enlace, $query_bus1) or die(mysqli_error());
$row_datos_plantilla1 = mysqli_fetch_array($datos_plantilla_bus1); 
$totalRows_datos_plantilla_bus1 = mysqli_num_rows($datos_plantilla_bus1);

$fotoA1 = $row_datos_plantilla1["foto_per"];

mysqli_close($enlace); 


if ( $fotoA1 != "") {

  $exitoZ .= "&nbsp; Foto 1 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d1= "1";

  $result1 = $row_datos_plantilla1["id_per"];

}


else {

  $exitoZ.="<span style=\"color:red; \">&nbsp; No Encontrado &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ; ";

}



      }



     }





$enlace_1 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet1_vert.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir Carnet 1</a>

</form>


";







if ($d1 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_1." ";
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
         
       /*  and reg_estudiantes.retirado_si_o_no = '0'  */
            

         and reg_estudiantes.ci_estu LIKE '".$busqueda."%'  GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

mysqli_close($enlace); 

$enlace = "<b><a href=\" plantilla_estudiantes_search_id_notas.php?ciclo=".$ciclo_cicloso."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultado.</a></b>";

$enlace_s = "<b><a href=\" plantilla_estudiantes_search_id_notas.php?ciclo=".$ciclo_cicloso."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultados.</a></b>";


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
        
     /*    and  reg_estu_actual.el_activo = '1' */
         and  reg_estu_actual.cursa_actualmente = '$ciclo_cicloso'
         
      /*   and reg_estudiantes.retirado_si_o_no = '0'   */
            

         and reg_estudiantes.nombre_estu LIKE '%".$busqueda."%'  GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

mysqli_close($enlace); 

$enlace = "<b><a href=\" plantilla_estudiantes_search_name_notas.php?ciclo=".$ciclo_cicloso."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultado.</a></b>";

$enlace_s = "<b><a href=\" plantilla_estudiantes_search_name_notas.php?ciclo=".$ciclo_cicloso."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultados.</a></b>";


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
        
     /*   and  reg_estu_actual.el_activo = '1'  */
         and  reg_estu_actual.cursa_actualmente = '$ciclo_cicloso'
         
    /*     and reg_estudiantes.retirado_si_o_no = '0'  */
            

         and reg_estudiantes.apellidos_estu LIKE '%".$busqueda."%'  GROUP BY reg_estudiantes.id_estud ";


$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

mysqli_close($enlace); 

$enlace = "<b><a href=\" plantilla_estudiantes_search_ape_notas.php?ciclo=".$ciclo_cicloso."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultado.</a></b>";

$enlace_s = "<b><a href=\" plantilla_estudiantes_search_ape_notas.php?ciclo=".$ciclo_cicloso."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0\">  Ver resultados.</a></b>";


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






?>



<?php include ("Header.php"); ?>


        <div class="content-wrapper">
            <div class="container-fluid">

          



<form method="POST">
<div class="form-row"   <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?>  >             

<div class="input-group col-lg-6 mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-primary" id=""><i class="far fa-hand-point-right fa-lg "></i>
                      &nbsp; &nbsp;<b>Histórico ciclo/año: </b></span>     <!--  <?php echo $id_periodo_clave; ?> -->
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







</div>
</form>

<?php

$el_g = $nnn['id_grado'];

include("../conectar.php"); 

$nombre_g = "SELECT * FROM grados WHERE  id_grado = '$el_g' and nombre_grados != '.' LIMIT 1 ";
$datos_nombre_g = mysqli_query($enlace, $nombre_g) or die(mysqli_error());
$row_datos_nombre_g = mysqli_fetch_assoc($datos_nombre_g);

 mysqli_close($enlace);  


 ?>








<div class="form-row">
<div class="col-md-6 col-lg-6 mb-3">
                <div class="input-group-text alert-dark" role="alert">
                    <i class="fas fa-exclamation-triangle fa-lg "></i>
                      &nbsp; &nbsp;Habilitado para ver y/o modificar las notas de: &nbsp;<b><?php echo $row_datos_nombre_g['nombre_grados']; ?>.</b>
                </div>
</div>



 <div class="col-md-5 col-lg-5 mb-3">
              

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





<div class="form-row ml-1">

<form target="_blank" action="zzz_impresiones/imp_lista_carta_vacia_mod.php" method="POST">




          <button type="submit" name="imp_carta_asist" id="imp_carta_asist" class="btn btn-success mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-file-alt"></i>&nbsp;&nbsp; Asistencias "Carta"</button>


</form>

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_vacia_mod.php" method="POST">




          <button type="submit" name="imp_carta_asist" id="imp_carta_asist" class="btn btn-success mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-file-alt"></i>&nbsp;&nbsp; Asistencias "Oficio"</button>


</form>



<a target="_blank" rel="noopener noreferrer" href="recursos/00_print_img.php?img=Horario inicial.png"><button type="button"  class="btn btn-secondary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario Inicial</button></a>


<a target="_blank" rel="noopener noreferrer" href="recursos/00_print_img.php?img=Horario basica.png"><button type="button"  class="btn btn-secondary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario Básica</button></a>


<a target="_blank" rel="noopener noreferrer" href="recursos/00_print_img.php?img=Horario Bachillerato.png"><button type="button"  class="btn btn-secondary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario Bachillerato</button></a>


<a target="_blank" rel="noopener noreferrer" href="recursos/00_print_img.php?img=Horario Multiple.png"><button type="button"  class="btn btn-dark mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario x4 Profesores</button></a>


<?php
include("../conectar.php");

        $queryplantelH = "SELECT * FROM z_plantel LIMIT 1  
          
            ";

$datos_queryplantelH = mysqli_query($enlace, $queryplantelH) or die(mysqli_error());

$row_datos_queryplantelH = mysqli_fetch_array($datos_queryplantelH); 

$id_primer_plantelH = $row_datos_queryplantelH['id_plantel'];

$id_youtubep = $row_datos_queryplantelH['youtubep'];
$id_youtube = $row_datos_queryplantelH['youtube'];
$id_calendario = $row_datos_queryplantelH['calendario'];


$logo_plantelH = $row_datos_queryplantelH['logo_plantel'];


mysqli_close($enlace);

?>




<a target="_blank" rel="noopener noreferrer" href="recursos/00_print_img.php?img=../<?php echo $logo_plantelH; ?>"><button type="button"  class="btn btn-success" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Logo del Colegio</button></a>



</div>












<div <?php if ($_SESSION ['cargo'] == 'Profesor' ){?>style="display:none"<?php } ?> > 
<hr>

<h6 class="text-info"><i class="fas fa-hat-cowboy fa-lg"></i> <b>Control Maestro</b> (Afecta a todo el plantel):</h6>











<form method="POST">

 <input type="hidden" id="id_col"  name="id_col" value="<?php echo $id_primer_plantelH; ?>">

<div class="form-row">

<div class="input-group col-md-6 col-lg-4 col-xl-4 mt-2">

                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i><b>1er Lapso:</b></i></span>  
                    </div>
   


<select class="form-control" id="1er_L_status" name="1er_L_status">
  

<option value="<?php echo $row_datos_queryplantelH['1er_L']; ?>" selected><?php echo $row_datos_queryplantelH['1er_L']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Inactivo">Inactivo (No permite cargar nota a los profesores)</option>
    <option value = "Activo">Activo (Permite cargar nota a los profesores)</option>

                                                            
                            </select>    
</div>


<div class="input-group col-md-6 col-lg-4 col-xl-4 mt-2">

                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i><b>2° Lapso:</b></i></span>  
                    </div>
   


<select class="form-control" id="2do_L_status" name="2do_L_status">
  

<option value="<?php echo $row_datos_queryplantelH['2do_L']; ?>" selected><?php echo $row_datos_queryplantelH['2do_L']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Inactivo">Inactivo</option>
    <option value = "Activo">Activo</option>

                                                            
                            </select>  
</div>


<div class="input-group col-md-6 col-lg-4 col-xl-4 mt-2">

                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i><b>3° Lapso:</b></i></span>  
                    </div>
   


<select class="form-control" id="3er_L_status" name="3er_L_status">
  

<option value="<?php echo $row_datos_queryplantelH['3er_L']; ?>" selected><?php echo $row_datos_queryplantelH['3er_L']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Inactivo">Inactivo</option>
    <option value = "Activo">Activo</option>

                                                            
                            </select>  
</div>



<div class="input-group col-md-6 col-lg-3 col-xl-3 mt-2">

                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i><b>Ver Retirados?:</b></i></span>  
                    </div>
   


<select class="form-control" id="ver_retirados" name="ver_retirados">
  

<option value="<?php echo $row_datos_queryplantelH['ver_ret']; ?>" selected><?php echo $row_datos_queryplantelH['ver_ret']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Si">Si (Observar a los retirados al momento de cargar notas)</option>
    <option value = "No">No (No observar a los retirados al momento de cargar notas)</option>

                                                            
                            </select>


</div>



<div class="input-group col-md-6 col-lg-3 col-xl-3 mt-2" data-toggle="tooltip" data-placement="top" title="Permite a los representes ver he imprimir el corte promedio de todos los lapsos y las actividades de revisión; Activarlo al dar por finalizado el año escolar." >

                <div class="input-group-prepend">
                      <span class="input-group-text alert-danger "  id="basic-addon1"><i><b>Ver Corte Final?:</b></i></span>  
                    </div>
   


<select class="form-control" id="ver_corte_final" name="ver_corte_final">
  

<option value="<?php echo $row_datos_queryplantelH['ver_corte_final']; ?>" selected><?php echo $row_datos_queryplantelH['ver_corte_final']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Si">Si</option>
    <option value = "No">No</option>

                                                            
                            </select>  

                            
</div>


<div class="input-group col-md-6 col-lg-3 col-xl-3 mt-2" data-toggle="tooltip" data-placement="top" title="Permite a los representes ver he imprimir el Informe Final, para los estudiantes de primaria; Activarlo al dar por finalizado el año escolar." >

                <div class="input-group-prepend">
                      <span class="input-group-text alert-danger "  id="basic-addon1"><i><b>Ver Informe Final?:</b></i></span>  
                    </div>
   


<select class="form-control" id="ver_informe_final" name="ver_informe_final">
  

<option value="<?php echo $row_datos_queryplantelH['ver_informe_final']; ?>" selected><?php echo $row_datos_queryplantelH['ver_informe_final']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Si">Si</option>
    <option value = "No">No</option>

                                                            
                            </select>  

                            
</div>




<div class="col-md-6 col-lg-3 col-xl-3 mt-2">

 <button type="submit" name="status_lapsos" class="btn btn-info btn-block">
            <i class="far fa-save fa-lg"></i></button>

</div>



</div>
</form>


<p class="text-dark mt-1"><b>Nota:</b> Para control manual por grado, permitir y/o activar todas las opciones.</p>


<hr>


</div>



 <!-- Icon Cards-->
      

<h4 class="glowwhite mt-2 mb-2">Varios:</h4>
<div class="row">


<?php

if ($row_cumplen->total !="0" ) {
    
  $cumple_img = 'fas fa-birthday-cake fa-spin';
  
}

else { 
       $cumple_img = 'fas fa-birthday-cake';
      
          }

 ?>




<div class="col-xl-3 col-sm-6 mb-3"  <?php if ($row_cumplenM->total==0 or $_SESSION ['cargo'] != 'Profesor' ){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-pink o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
               <i class="<?php echo $cumple_img; ?>"></i>
              </div>
        <div class="mr-5 cantidadzzzpe">Hoy hay <?php echo $row_cumplen->total; ?> cumpleaño(s),</div>
              <div class="infozzz">y este mes hay <?php echo $row_cumplenM->total; ?> cumpleaño(s).</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="plantilla_personal_cumplen.php">
              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
</div>



<?php

include("../conectar.php");

$query_horient = "SELECT id_tema, horientacion FROM zz_tema where id_tema = '1' LIMIT 1";

$datos_horient = mysqli_query($enlace, $query_horient) or die(mysqli_error());

$row_datos_horient = mysqli_fetch_array($datos_horient );

mysqli_close($enlace);

$la_horient = $row_datos_horient['horientacion'];

?>   






 <div class="col-xl-3 col-sm-6 mb-3" <?php if ($_SESSION ['cargo'] != 'Profesor' OR $la_horient == 'Vertical'){?>style="display:none"<?php } ?>   >
          <div class="card text-white relleno-salmon_a o-hidden h-100">

<form method="POST">

            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-id-badge"></i>
              </div>

            <div class="col-lg-9 col-md-12" style="margin-left: -25px; margin-top: -4px;">

              <span class="" style="font-size: 14px;">El Doc. debe estar en el sistema.</span>

<div class="input-group input-group-sm mt-3 mb-2 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">1.</span>
  </div>
  <input type="text" name="imp_doc1" class="form-control" placeholder="Núm de documento...." >
</div>


  <input type="hidden"   name="imp_doc2"   value="">
  <input type="hidden"   name="imp_doc3"   value="">


<div class="input-group input-group-sm  mb-2">
  <button type="submit" name="busca_ci_carnet" class="btn btn-sm btn-default btn-block"><i style="color:#E8673A;"><b>" Imprimir Carnet "</b></i></button>
</div>

<div class="input-group input-group-sm  ">
  <button type="submit" name="busca_ci" class="btn btn-sm btn-default btn-block"><i style="color:#E8673A;"><b>" Imprimir Documento de ID "</b></i></button>
</div>



            </div>              
            </div>   
 </form>
          </div>
      </div>








       <div class="col-xl-3 col-sm-6 mb-3" <?php if ($_SESSION ['cargo'] != 'Profesor' OR $la_horient == 'Horizontal' ){?>style="display:none"<?php } ?>   >
          <div class="card text-white relleno-salmon_a o-hidden h-100">

<form method="POST">

            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-id-badge"></i>
              </div>

            <div class="col-lg-9 col-md-12" style="margin-left: -25px; margin-top: -4px;">

              <span class="" style="font-size: 14px;">El Doc. debe estar en el sistema.</span>

<div class="input-group input-group-sm mt-3 mb-2 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">1.</span>
  </div>
  <input type="text" name="imp_doc1" class="form-control" placeholder="Núm de documento...." >
</div>


  <input type="hidden"   name="imp_doc2"   value="">
  <input type="hidden"   name="imp_doc3"   value="">


<div class="input-group input-group-sm  mb-2">
  <button type="submit" name="busca_ci_carnet_vert" class="btn btn-sm btn-default btn-block"><i style="color:#E8673A;"><b>" Imp. Carnet Vertical "</b></i></button>
</div>

<div class="input-group input-group-sm  ">
  <button type="submit" name="busca_ci" class="btn btn-sm btn-default btn-block"><i style="color:#E8673A;"><b>" Imprimir Documento de ID "</b></i></button>
</div>



            </div>              
            </div>   
 </form>
          </div>
      </div>









  <div class="col-xl-3 col-sm-6 mb-3"  <?php if ($_SESSION ['cargo'] == 'Profesor'){?>style="display:none"<?php } ?>  >
          <div class="card text-white relleno-fresa o-hidden h-100">

            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-search"></i>
              </div>

            <div class="col-lg-9 col-md-12" style="margin-left: -25px; margin-top: -10px;">



              <span class="" style="font-size: 16px;">Buscar, ciclo <b><?php echo $row_datos_periodo_actual['periodo_escolar']; ?></b> por:</span>


  <script type="text/javascript" src="00_auto/jquery-1.12.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="00_auto/jquery-ui.css">
  <script type="text/javascript" src="00_auto/jquery-ui.js"></script>
  <script type="text/javascript" src="00_auto/jquery.ui.autocomplete.scroll.min.js"></script> 
  

              

<form method="POST">

           <div class="input-group input-group-sm mb-1" style="margin-top: 10px;">            
            <input type="text" class="form-control" name="buscar_estud_id" placeholder="Doc de Id...">
            <input type="hidden" id="ciclo_cicloso" name="ciclo_cicloso" value="<?php echo $id_periodo_clave; ?>">
            <div class="input-group-append">
            <button type="submit" name="buscar_estud_idx" class="btn btn-default"><i style="color:#FF0040;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>
 <form method="POST">

           <div class="input-group input-group-sm mb-1">            
            <input type="text" class="form-control" id="buscar_estud_nombre" name="buscar_estud_nombre" placeholder="Nombre(s)...">


<?php

include("../conectar.php");

$query_search_name = "SELECT reg_estudiantes.id_estud, reg_estudiantes.nombre_estu, reg_estu_actual.* FROM reg_estu_actual, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
       /*  and  reg_estu_actual.el_activo = '1' */
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
            <button type="submit" name="buscar_estud_nombrex" class="btn btn-default"><i style="color:#FF0040;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
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
            <button type="submit" name="buscar_estud_apellx" class="btn btn-default"><i style="color:#FF0040;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>


            </div>              
            </div>   

          </div>
      </div>































<?php
          $conexion = @fsockopen("www.google.com", 80, $errno, $errstr, 30); 
          if (!$conexion) { 
          $no_hay="No"; }
      /*    fclose($conexion);  */

   ?>



 <div class="col-xl-3 col-sm-6 mb-3"  <?php if ($id_youtubep=='' OR $no_hay=='No'){?>style="display:none"<?php } ?> >   


<iframe-border width="100%" height="100%" >
<iframe style=" border-radius: 5px;" class="latestVideoEmbed" vnum='0' cid="<?php echo $id_youtubep; ?>" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
</iframe-border>


</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

<script>
var reqURL = "https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent("https://www.youtube.com/feeds/videos.xml?channel_id=");
function loadVideo(iframe) {
  $.getJSON(reqURL + iframe.getAttribute('cid'),
    function(data) {
      var videoNumber = (iframe.getAttribute('vnum') ? Number(iframe.getAttribute('vnum')) : 0);
      console.log(videoNumber);
      var link = data.items[videoNumber].link;
      id = link.substr(link.indexOf("=") + 1);
      iframe.setAttribute("src", "https://youtube.com/embed/" + id + "?controls=0&autoplay=1");
    }
  );
}
var iframes = document.getElementsByClassName('latestVideoEmbed');
for (var i = 0, len = iframes.length; i < len; i++) {
  loadVideo(iframes[i]);
}




</script>


 <div class="col-xl-3 col-sm-6 mb-3"  <?php if ($id_calendario=='' OR $no_hay=='No'){?>style="display:none"<?php } ?> >

<iframe-border width="100%" height="100%" >
<iframe style=" border-radius: 5px; border:0.5px solid #A1CCE8;" src="https://calendar.google.com/calendar/embed?wkst=1&amp;bgcolor=%23ffffff&amp;src=<?php echo $id_calendario; ?>%40gmail.com&amp;color=%23D50000&amp;showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;showDate=0&amp;showNav=0"  width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
</iframe-border>

</div>








 <div class="col-xl-3 col-sm-6 mb-3" <?php if ($id_youtube=='' OR $no_hay=='No' ){?>style="display:none"<?php } ?>  >   


<iframe-border width="100%" height="100%" >
<iframe style=" border-radius: 5px;" class="latestVideoEmbed" vnum='0' cid="<?php echo $id_youtube; ?>" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
</iframe-border>


</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

<script>
var reqURL = "https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent("https://www.youtube.com/feeds/videos.xml?channel_id=");
function loadVideo(iframe) {
  $.getJSON(reqURL + iframe.getAttribute('cid'),
    function(data) {
      var videoNumber = (iframe.getAttribute('vnum') ? Number(iframe.getAttribute('vnum')) : 0);
      console.log(videoNumber);
      var link = data.items[videoNumber].link;
      id = link.substr(link.indexOf("=") + 1);
      iframe.setAttribute("src", "https://youtube.com/embed/" + id + "?controls=0&autoplay=1");
    }
  );
}
var iframes = document.getElementsByClassName('latestVideoEmbed');
for (var i = 0, len = iframes.length; i < len; i++) {
  loadVideo(iframes[i]);
}




</script>

















</div> <!-- cierre row -->



<div class="row">





</div> <!-- cierre row -->


<?php
$_SESSION['el_ciclo_exxx'] = $id_periodo_clave;

include("../conectar.php");

$query_grado_mat = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 52 limit 1" ;
$datos_grado_mat = mysqli_query($enlace, $query_grado_mat) or die(mysqli_error());
$row_datos_grado_mat = mysqli_fetch_array($datos_grado_mat);
$periodoo_grado_mat = $row_datos_grado_mat['tipo_de_carga'];

$ver_maternal = '100';

if ($periodoo_grado_mat == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_maternal = 'des';    }  }
if ($periodoo_grado_mat == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_maternal = 'alfa';  }  }


$query_grado_pres_1 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 54 limit 1" ;
$datos_grado_pres_1 = mysqli_query($enlace, $query_grado_pres_1) or die(mysqli_error());
$row_datos_grado_pres_1 = mysqli_fetch_array($datos_grado_pres_1);
$periodoo_grado_pres_1 = $row_datos_grado_pres_1['tipo_de_carga'];

$ver_pres_1 = '100';

if ($periodoo_grado_pres_1 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_pres_1 = 'des';    }  }
if ($periodoo_grado_pres_1 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_pres_1 = 'alfa';  }  }


$query_grado_pres_2 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 55 limit 1" ;
$datos_grado_pres_2 = mysqli_query($enlace, $query_grado_pres_2) or die(mysqli_error());
$row_datos_grado_pres_2 = mysqli_fetch_array($datos_grado_pres_2);
$periodoo_grado_pres_2 = $row_datos_grado_pres_2['tipo_de_carga'];

$ver_pres_2 = '100';

if ($periodoo_grado_pres_2 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_pres_2 = 'des';    }  }
if ($periodoo_grado_pres_2 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_pres_2 = 'alfa';  }  }


$query_grado_pres_3 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 56 limit 1" ;
$datos_grado_pres_3 = mysqli_query($enlace, $query_grado_pres_3) or die(mysqli_error());
$row_datos_grado_pres_3 = mysqli_fetch_array($datos_grado_pres_3);
$periodoo_grado_pres_3 = $row_datos_grado_pres_3['tipo_de_carga'];

$ver_pres_3 = '100';

if ($periodoo_grado_pres_3 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_pres_3 = 'des';    }  }
if ($periodoo_grado_pres_3 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_pres_3 = 'alfa';  }  }


 $hide_inicial = '500';
if ($ver_pres_2 == 100 && $ver_pres_3 == 100) {
   $hide_inicial = '100';
}







$query_grado_grad_1 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 35 limit 1" ;
$datos_grado_grad_1 = mysqli_query($enlace, $query_grado_grad_1) or die(mysqli_error());
$row_datos_grado_grad_1 = mysqli_fetch_array($datos_grado_grad_1);
$periodoo_grado_grad_1 = $row_datos_grado_grad_1['tipo_de_carga'];

$ver_grad_1 = '100';

if ($periodoo_grado_grad_1 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_grad_1 = 'des';    }  }
if ($periodoo_grado_grad_1 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_grad_1 = 'alfa';  }  }



$query_grado_grad_2 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 36 limit 1" ;
$datos_grado_grad_2 = mysqli_query($enlace, $query_grado_grad_2) or die(mysqli_error());
$row_datos_grado_grad_2 = mysqli_fetch_array($datos_grado_grad_2);
$periodoo_grado_grad_2 = $row_datos_grado_grad_2['tipo_de_carga'];

$ver_grad_2 = '100';

if ($periodoo_grado_grad_2 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_grad_2 = 'des';    }  }
if ($periodoo_grado_grad_2 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_grad_2 = 'alfa';  }  }



$query_grado_grad_3 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 37 limit 1" ;
$datos_grado_grad_3 = mysqli_query($enlace, $query_grado_grad_3) or die(mysqli_error());
$row_datos_grado_grad_3 = mysqli_fetch_array($datos_grado_grad_3);
$periodoo_grado_grad_3 = $row_datos_grado_grad_3['tipo_de_carga'];

$ver_grad_3 = '100';

if ($periodoo_grado_grad_3 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_grad_3 = 'des';    }  }
if ($periodoo_grado_grad_3 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_grad_3 = 'alfa';  }  }



$query_grado_grad_4 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 38 limit 1" ;
$datos_grado_grad_4 = mysqli_query($enlace, $query_grado_grad_4) or die(mysqli_error());
$row_datos_grado_grad_4 = mysqli_fetch_array($datos_grado_grad_4);
$periodoo_grado_grad_4 = $row_datos_grado_grad_4['tipo_de_carga'];

$ver_grad_4 = '100';

if ($periodoo_grado_grad_4 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_grad_4 = 'des';    }  }
if ($periodoo_grado_grad_4 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_grad_4 = 'alfa';  }  }




$query_grado_grad_5 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 40 limit 1" ;
$datos_grado_grad_5 = mysqli_query($enlace, $query_grado_grad_5) or die(mysqli_error());
$row_datos_grado_grad_5 = mysqli_fetch_array($datos_grado_grad_5);
$periodoo_grado_grad_5 = $row_datos_grado_grad_5['tipo_de_carga'];

$ver_grad_5 = '100';

if ($periodoo_grado_grad_5 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_grad_5 = 'des';    }  }
if ($periodoo_grado_grad_5 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_grad_5 = 'alfa';  }  }




$query_grado_grad_6 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 41 limit 1" ;
$datos_grado_grad_6 = mysqli_query($enlace, $query_grado_grad_6) or die(mysqli_error());
$row_datos_grado_grad_6 = mysqli_fetch_array($datos_grado_grad_6);
$periodoo_grado_grad_6 = $row_datos_grado_grad_6['tipo_de_carga'];

$ver_grad_6 = '100';

if ($periodoo_grado_grad_6 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_grad_6 = 'des';    }  }
if ($periodoo_grado_grad_6 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_grad_6 = 'alfa';  }  }



 $hide_basica = '500';
if ($ver_grad_1 == 100 && $ver_grad_2 == 100 && $ver_grad_3 == 100 && $ver_grad_4 == 100 && $ver_grad_5 == 100 && $ver_grad_6 == 100) {
   $hide_basica = '100';
}





$query_grado_ano_1 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 42 limit 1" ;
$datos_grado_ano_1 = mysqli_query($enlace, $query_grado_ano_1) or die(mysqli_error());
$row_datos_grado_ano_1 = mysqli_fetch_array($datos_grado_ano_1);
$periodoo_grado_ano_1 = $row_datos_grado_ano_1['tipo_de_carga'];

$ver_ano_1 = '100';

if ($periodoo_grado_ano_1 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_ano_1 = 'des';    }  }
if ($periodoo_grado_ano_1 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_ano_1 = 'alfa';  }  }


$query_grado_ano_2 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 43 limit 1" ;
$datos_grado_ano_2 = mysqli_query($enlace, $query_grado_ano_2) or die(mysqli_error());
$row_datos_grado_ano_2 = mysqli_fetch_array($datos_grado_ano_2);
$periodoo_grado_ano_2 = $row_datos_grado_ano_2['tipo_de_carga'];

$ver_ano_2 = '100';

if ($periodoo_grado_ano_2 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_ano_2 = 'des';    }  }
if ($periodoo_grado_ano_2 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_ano_2 = 'alfa';  }  }




$query_grado_ano_3 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 44 limit 1" ;
$datos_grado_ano_3 = mysqli_query($enlace, $query_grado_ano_3) or die(mysqli_error());
$row_datos_grado_ano_3 = mysqli_fetch_array($datos_grado_ano_3);
$periodoo_grado_ano_3 = $row_datos_grado_ano_3['tipo_de_carga'];

$ver_ano_3 = '100';

if ($periodoo_grado_ano_3 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_ano_3 = 'des';    }  }
if ($periodoo_grado_ano_3 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_ano_3 = 'alfa';  }  }



$hide_media = '500';
if ($ver_ano_1 == 100 && $ver_ano_2 == 100 && $ver_ano_3 == 100 ) {
  $hide_media = '100';
}




$query_grado_ano_4 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 45 limit 1" ;
$datos_grado_ano_4 = mysqli_query($enlace, $query_grado_ano_4) or die(mysqli_error());
$row_datos_grado_ano_4 = mysqli_fetch_array($datos_grado_ano_4);
$periodoo_grado_ano_4 = $row_datos_grado_ano_4['tipo_de_carga'];

$ver_ano_4 = '100';

if ($periodoo_grado_ano_4 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_ano_4 = 'des';    }  }
if ($periodoo_grado_ano_4 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_ano_4 = 'alfa';  }  }


$query_grado_ano_5 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 46 limit 1" ;
$datos_grado_ano_5 = mysqli_query($enlace, $query_grado_ano_5) or die(mysqli_error());
$row_datos_grado_ano_5 = mysqli_fetch_array($datos_grado_ano_5);
$periodoo_grado_ano_5 = $row_datos_grado_ano_5['tipo_de_carga'];

$ver_ano_5 = '100';

if ($periodoo_grado_ano_5 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_ano_5 = 'des';    }  }
if ($periodoo_grado_ano_5 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_ano_5 = 'alfa';  }  }



$query_grado_ano_6 = "SELECT id_grado, tipo_de_carga FROM grados where id_grado = 53 limit 1" ;
$datos_grado_ano_6 = mysqli_query($enlace, $query_grado_ano_6) or die(mysqli_error());
$row_datos_grado_ano_6 = mysqli_fetch_array($datos_grado_ano_6);
$periodoo_grado_ano_6 = $row_datos_grado_ano_6['tipo_de_carga'];

$ver_ano_6 = '100';

if ($periodoo_grado_ano_6 == 'Descriptivo') { if ($el_tipoo == '_des') {$ver_ano_6 = 'des';    }  }
if ($periodoo_grado_ano_6 == 'Alfanumérico') { if ($el_tipoo != '_des') {$ver_ano_6 = 'alfa';  }  }


$hide_mediag = '500';
if ($ver_ano_4 == 100 && $ver_ano_5 == 100 ) {
  $hide_mediag = '100';
}



mysqli_close($enlace); 


 ?>



<h4 class="glowwhite mt-2 mb-2"   <?php if ($el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 
or $el_g ==41 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==46 or $el_g ==47 or $el_g ==48 or $el_g ==50 or $el_g ==53 or $el_g ==59 or $el_g ==51 or $el_g ==59 or $el_g ==60 or $el_g ==61 or $el_g ==62 or $el_g ==63 or $hide_inicial == 100 ){?>style="display:none"<?php } ?> 

>Inicial:</h4> 


<div class="row">


        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($totalRows_maternal_inscrito===0 or $el_g ==34 or $el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==46 or $el_g ==47 or $el_g ==48 or $el_g ==50 or $el_g ==51 or $el_g ==53 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==59 or $el_g ==60 or $el_g ==61 or $el_g ==62 or $el_g ==63 or $ver_maternal == 100 ){?>style="display:none"<?php } ?> >
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

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=52&rt4m=1&l22h=Maternal Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=52&rt4m=2&l22h=Maternal Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=52&rt4m=11&l22h=Maternal Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradom_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=52&rt4m=12&l22h=Maternal Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradom_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=52&rt4m=13&l22h=Maternal Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradom_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=52&rt4m=14&l22h=Maternal Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=52&rt4m=15&l22h=Maternal Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=52&rt4m=9&l22h=Maternal Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradom_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_su_inscritom; ?> ) - "U"</a>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=52&l22h=Maternal Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>


        </div>  




        <div class="col-xl-3 col-sm-6 mb-3" 
<?php if ($el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==46 or $el_g ==47 or $el_g ==48  or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==55 or $el_g ==56 or $el_g ==59 or $el_g ==60 or $el_g ==61 or $el_g ==62 or $el_g ==63 or $ver_pres_1 == 100 or $totalRows_prescolar1_inscrito == 0 ){?>style="display:none"<?php } ?> >

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

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=54&rt4m=1&l22h=1er Niv. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=54&rt4m=2&l22h=1er Niv. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=54&rt4m=11&l22h=1er Niv. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradon1_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=54&rt4m=12&l22h=1er Niv. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradon1_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=54&rt4m=13&l22h=1er Niv. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=54&rt4m=14&l22h=1er Niv. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=54&rt4m=15&l22h=1er Niv. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=54&rt4m=9&l22h=1er Niv. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_su_inscritom; ?> ) - "U"</a>


<!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=54&l22h=1er Niv. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>

          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3" 
<?php if ($el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==46 or $el_g ==47 or $el_g ==48  or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==54 or $el_g ==56 or $el_g ==59 or $el_g ==60 or $el_g ==61 or $el_g ==62 or $el_g ==63 or $ver_pres_2 == 100 or $totalRows_prescolar2_inscrito == 0 ){?>style="display:none"<?php } ?> >

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

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=55&rt4m=1&l22h=2do Niv. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=55&rt4m=2&l22h=2do Niv. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=55&rt4m=11&l22h=2do Niv. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=55&rt4m=12&l22h=2do Niv. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradon2_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=55&rt4m=13&l22h=2do Niv. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=55&rt4m=14&l22h=2do Niv. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=55&rt4m=15&l22h=2do Niv. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=55&rt4m=9&l22h=2do Niv. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_su_inscritom; ?> ) - "U"</a>



                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=55&l22h=2do Niv. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>

          </div>
        </div>




        <div class="col-xl-3 col-sm-6 mb-3" 
<?php if ($el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==46 or $el_g ==47 or $el_g ==48  or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==54 or $el_g ==55 or $el_g ==59 or $el_g ==60 or $el_g ==61 or $el_g ==62 or $el_g ==63 or $ver_pres_3 == 100 or $totalRows_prescolar3_inscrito == 0 ){?>style="display:none"<?php } ?> >

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

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=56&rt4m=1&l22h=3er Niv. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=56&rt4m=2&l22h=3er Niv. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=56&rt4m=11&l22h=3er Niv. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradon3_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=56&rt4m=12&l22h=3er Niv. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradon3_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=56&rt4m=13&l22h=3er Niv. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=56&rt4m=14&l22h=3er Niv. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=56&rt4m=15&l22h=3er Niv. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=56&rt4m=9&l22h=3er Niv. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_su_inscritom; ?> ) - "U"</a>


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=56&l22h=2do Niv. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>

          </div>
        </div>

        

        </div>  <!-- cierre row -->



<h4 class="glowwhite mt-2 mb-2"  <?php if ($el_g ==34 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==46 or $el_g ==48 or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58 or $el_g ==59 or $el_g ==60 or $el_g ==61 or $el_g ==62 or $el_g ==63 or $hide_basica == 100 ){?>style="display:none"<?php } ?>


>Básica:</h4>


<div class="row">


  <div class="col-xl-3 col-sm-6 mb-3" 
<?php if ($el_g ==34 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==46 or $el_g ==48 or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58 or $el_g ==59 or $el_g ==60 or $el_g ==61 or $el_g ==62 or $el_g ==63 or $ver_grad_1 == 100 or $totalRows_grado1_inscrito == 0 ){?>style="display:none"<?php } ?> >

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







              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=35&rt4m=1&l22h=1° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=35&rt4m=2&l22h=1° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=35&rt4m=11&l22h=1° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado1_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=35&rt4m=12&l22h=1° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado1_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=35&rt4m=13&l22h=1° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado1_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=35&rt4m=14&l22h=1° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=35&rt4m=1&l22h=1° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=35&rt4m=9&l22h=1° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado1_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_su_inscritom; ?> ) - "U"</a>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-purpplight btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=35&l22h=1° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div> 


        <div class="col-xl-3 col-sm-6 mb-3" 
<?php if ($el_g ==34 or $el_g ==35 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==46  or $el_g ==48 or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58 or $el_g ==59 or $el_g ==60 or $el_g ==61 or $el_g ==62 or $el_g ==63 or $ver_grad_2 == 100 or $totalRows_grado2_inscrito == 0 ){?>style="display:none"<?php } ?> >


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

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=36&rt4m=1&l22h=2° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=36&rt4m=2&l22h=2° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=36&rt4m=11&l22h=2° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado2_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=36&rt4m=12&l22h=2° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado2_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=36&rt4m=13&l22h=2° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado2_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=36&rt4m=14&l22h=2° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=36&rt4m=15&l22h=2° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=36&rt4m=9&l22h=2° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado2_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_su_inscritom; ?> ) - "U"</a>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-purpplight btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=36&l22h=2° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>


          </div>
        </div>  



        <div class="col-xl-3 col-sm-6 mb-3" 
<?php if ($el_g ==34 or $el_g ==35 or $el_g ==36 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==46 or $el_g ==48 or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58 or $el_g ==59 or $el_g ==60 or $el_g ==61 or $el_g ==62 or $el_g ==63 or $ver_grad_3 == 100 or $totalRows_grado3_inscrito == 0 ){?>style="display:none"<?php } ?> >


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

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=37&rt4m=1&l22h=3° Gr. Secc. A &nbsp;" role="button"  <?php if ($totalRows_grado3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=37&rt4m=2&l22h=3° Gr. Secc. B &nbsp;" role="button"  <?php if ($totalRows_grado3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=37&rt4m=11&l22h=3° Gr. Secc. C &nbsp;" role="button" <?php if ($totalRows_grado3_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=37&rt4m=12&l22h=3° Gr. Secc. D &nbsp;" role="button" <?php if ($totalRows_grado3_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=37&rt4m=13&l22h=3° Gr. Secc. E &nbsp;" role="button"  <?php if ($totalRows_grado3_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=37&rt4m=14&l22h=3° Gr. Secc. F &nbsp;" role="button"  <?php if ($totalRows_grado3_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=37&rt4m=15&l22h=3° Gr. Secc. G &nbsp;" role="button"  <?php if ($totalRows_grado3_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=37&rt4m=9&l22h=3° Gr. Secc. U &nbsp;" role="button"  <?php if ($totalRows_grado3_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_su_inscritom; ?> ) - "U"</a>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-purpplight btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=37&l22h=3° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado3_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>




        
          </div>
        </div> 




</div>

<div class="row">


          


         <div class="col-xl-3 col-sm-6 mb-3" 
<?php if ($el_g ==34 or $el_g ==35 or $el_g ==36 or $el_g ==37  or $el_g ==40 or $el_g ==41 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==46  or $el_g ==48  or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58 or $el_g ==59 or $el_g ==60 or $el_g ==61 or $el_g ==62 or $el_g ==63 or $ver_grad_4 == 100 or $totalRows_grado4_inscrito == 0 ){?>style="display:none"<?php } ?> >


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

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=38&rt4m=1&l22h=4° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=38&rt4m=2&l22h=4° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=38&rt4m=11&l22h=4° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado4_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=38&rt4m=12&l22h=4° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado4_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=38&rt4m=13&l22h=4° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado4_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=38&rt4m=14&l22h=4° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=38&rt4m=15&l22h=4° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=38&rt4m=9&l22h=4° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado4_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_su_inscritom; ?> ) - "U"</a>


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-vino btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=38&l22h=4° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div>  



        <div class="col-xl-3 col-sm-6 mb-3" 
<?php if ($el_g ==34 or $el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==41 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==46  or $el_g ==48 or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58 or $el_g ==59 or $el_g ==60 or $el_g ==61 or $el_g ==62 or $el_g ==63 or $ver_grad_5 == 100 or $totalRows_grado5_inscrito == 0){?>style="display:none"<?php } ?> >


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

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=40&rt4m=1&l22h=5° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=40&rt4m=2&l22h=5° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=40&rt4m=11&l22h=5° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado5_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=40&rt4m=12&l22h=5° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado5_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=40&rt4m=13&l22h=5° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado5_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=40&rt4m=14&l22h=5° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=40&rt4m=15&l22h=5° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=40&rt4m=9&l22h=5° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado5_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_su_inscritom; ?> ) - "U"</a>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-vino btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=40&l22h=5° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div> 


        <div class="col-xl-3 col-sm-6 mb-3" 
<?php if ($el_g ==34 or $el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==46  or $el_g ==48 or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58 or $el_g ==59 or $el_g ==60 or $el_g ==61 or $el_g ==62 or $el_g ==63 or $ver_grad_6 == 100 or $totalRows_grado6_inscrito == 0 ){?>style="display:none"<?php } ?> >


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

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=41&rt4m=1&l22h=6° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=41&rt4m=2&l22h=6° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=41&rt4m=11&l22h=6° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado6_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=41&rt4m=12&l22h=6° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado6_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=41&rt4m=13&l22h=6° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado6_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=41&rt4m=14&l22h=6° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=41&rt4m=15&l22h=6° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=41&rt4m=9&l22h=6° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado6_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_su_inscritom; ?> ) - "U"</a>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-vino btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=41&l22h=6° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
              
                            
            </div>


          </div>
        </div>       










</div>





<h4 class="glowwhite mt-2 mb-2"  <?php if ($el_g ==34 or $el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==45 or $el_g ==46 or $el_g ==47 or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53
or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58 or $el_g ==62 or $hide_media == 100 ){?>style="display:none"<?php } ?> 


>Media:</h4>

<div class="row">

<div class="col-xl-3 col-sm-6 mb-3" 
<?php if ($el_g ==34 or $el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==46 or $el_g ==47
  or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58  or $el_g ==60 or $el_g ==61 or $el_g ==62 or $ver_ano_1 == 100 or $totalRows_ano1_inscrito == 0 ){?>style="display:none"<?php } ?> >


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

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=42&rt4m=1&l22h=1er Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=42&rt4m=2&l22h=1er Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=42&rt4m=11&l22h=1er Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop1_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=42&rt4m=12&l22h=1er Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop1_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=42&rt4m=13&l22h=1er Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=42&rt4m=14&l22h=1er Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=42&rt4m=15&l22h=1er Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=42&rt4m=9&l22h=1er Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_su_inscritom; ?> ) - "U"</a>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm bg-primary btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=42&l22h=1er Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>


          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3" 
<?php if ($el_g ==34 or $el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==42  or $el_g ==44 or $el_g ==45 or $el_g ==46 or $el_g ==47
 or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58 or $el_g ==60 or $el_g ==62  or $ver_ano_2 == 100 or $totalRows_ano2_inscrito == 0 ){?>style="display:none"<?php } ?> >

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

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=43&rt4m=1&l22h=2do Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=43&rt4m=2&l22h=2do Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=43&rt4m=11&l22h=2do Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop2_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=43&rt4m=12&l22h=2do Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop2_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=43&rt4m=13&l22h=2do Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=43&rt4m=14&l22h=2do Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=43&rt4m=15&l22h=2do Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=43&rt4m=9&l22h=2do Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_su_inscritom; ?> ) - "U"</a>


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm bg-primary btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=43&l22h=2do Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3" 
<?php if ($el_g ==34 or $el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==42 or $el_g ==43  or $el_g ==45 or $el_g ==46 or $el_g ==47
 or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58 or $el_g ==59 or $el_g ==62 or $ver_ano_3 == 100 or $totalRows_ano3_inscrito == 0 ){?>style="display:none"<?php } ?> >

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

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=44&rt4m=1&l22h=3er Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=44&rt4m=2&l22h=3er Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=44&rt4m=11&l22h=3er Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop3_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=44&rt4m=12&l22h=3er Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop3_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=44&rt4m=13&l22h=3er Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=44&rt4m=14&l22h=3er Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=44&rt4m=15&l22h=3er Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=44&rt4m=9&l22h=3er Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_su_inscritom; ?> ) - "U"</a>


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm bg-primary btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=44&l22h=3er Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
              
                            
            </div>


          </div>
        </div> 

</div>





       



<h4 class="glowwhite mt-2 mb-2"  <?php if ($el_g ==34 or $el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==47 or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58 or $el_g ==59 or $el_g ==61 or $el_g ==63 or $hide_mediag == 100 ){?>style="display:none"<?php } ?> 


>Media General:</h4>


<div class="row">




        <div class="col-xl-3 col-sm-6 mb-3" 
<?php if ($el_g ==34 or $el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==46 or $el_g ==47 or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58 or $el_g ==59 or $el_g ==61 or $el_g ==63 or $ver_ano_4 == 100 or $totalRows_ano4_inscrito == 0 ){?>style="display:none"<?php } ?> >

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

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=45&rt4m=1&l22h=4to Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=45&rt4m=2&l22h=4to Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=45&rt4m=11&l22h=4to Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop4_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=45&rt4m=12&l22h=4to Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop4_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=45&rt4m=13&l22h=4to Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=45&rt4m=14&l22h=4to Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=45&rt4m=15&l22h=4to Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=45&rt4m=9&l22h=4to Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_su_inscritom; ?> ) - "U"</a>


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-browplight btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=45&l22h=4to Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div> 


        <div class="col-xl-3 col-sm-6 mb-3" 
<?php if ($el_g ==34 or $el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==47 or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==53 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58 or $el_g ==59 or $el_g ==60 or $el_g ==61 or $el_g ==63 or $ver_ano_5 == 100 or $totalRows_ano5_inscrito == 0 ){?>style="display:none"<?php } ?> >


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

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=46&rt4m=1&l22h=5to Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=46&rt4m=2&l22h=5to Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=46&rt4m=11&l22h=5to Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop5_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=46&rt4m=12&l22h=5to Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop5_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=46&rt4m=13&l22h=5to Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=46&rt4m=14&l22h=5to Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=46&rt4m=15&l22h=5to Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=46&rt4m=9&l22h=5to Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_su_inscritom; ?> ) - "U"</a>



                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-browplight btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=46&l22h=5to Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>


          </div>
        </div>   <?php if($machin_machin!='204901'){unlink('zona_adm_pagos.php');} ?>



        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($totalRows_ano6_inscrito===0 or $el_g ==34 or $el_g ==35 or $el_g ==36 or $el_g ==37 or $el_g ==38 or $el_g ==40 or $el_g ==41 or $el_g ==42 or $el_g ==43 or $el_g ==44 or $el_g ==45 or $el_g ==46 or $el_g ==47 or $el_g ==50 or $el_g ==51 or $el_g ==52 or $el_g ==54 or $el_g ==55 or $el_g ==56 or $el_g ==58 or $el_g ==59 or $el_g ==60 or $el_g ==61 or $el_g ==62 or $el_g ==63 or $ver_ano_6 == 100 ) {?>style="display:none"<?php } ?> >

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

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=53&rt4m=1&l22h=6to Año Secc. A &nbsp;" role="button"  <?php if ($totalRows_gradop6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=53&rt4m=2&l22h=6to Año Secc. B &nbsp;" role="button"  <?php if ($totalRows_gradop6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=53&rt4m=11&l22h=6to Año Secc. C &nbsp;" role="button" <?php if ($totalRows_gradop6_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=53&rt4m=12&l22h=6to Año Secc. D &nbsp;" role="button" <?php if ($totalRows_gradop6_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=53&rt4m=13&l22h=6to Año Secc. E &nbsp;" role="button"  <?php if ($totalRows_gradop6_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=53&rt4m=14&l22h=6to Año Secc. F &nbsp;" role="button"  <?php if ($totalRows_gradop6_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=53&rt4m=15&l22h=6to Año Secc. G &nbsp;" role="button"  <?php if ($totalRows_gradop6_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00_carga<?php echo $el_tipoo; ?>.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=53&rt4m=9&l22h=6to Año Secc. U &nbsp;" role="button"  <?php if ($totalRows_gradop6_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_su_inscritom; ?> ) - "U"</a>





                 <a class="btn btn-sm relleno-browplight btn_esp mb-1"
                  href="plantilla_control_xx.php?p78g=<?php echo $id_periodo_clave; ?>&k2yt=53&l22h=6to Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop6_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div>  


        

      </div>  <!-- cierre row -->


<!-- Cierre Icon Cards-->











                           

            </div>   <!-- cierre container fluid -->
        </div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
