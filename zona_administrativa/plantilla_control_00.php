<?php

include("identificador.php");

$nnn1 = $nnn['ci'];

include("../conectar.php");

mysqli_close($enlace);  






$el_cicloXX = $_GET['ciclo'];
$el_gradoXX = $_GET['grado'];
$meta_datos='../index.php';
$la_seccionXX = $_GET['la_seccion'];
$tituloJKL = $_GET['tituloJKL'];



$i = 1;




if(isset($_POST['save_1']))
{ 

if($_FILES['archivo1']['name']!='')
{

  $ci_estu =  $_POST['ci_estu1'];

       if ($_FILES['archivo1']["error"] > 0)
        {
      $errorZ.="- " . $_FILES['archivo1']['error'] . " ";
        }

      else
        {

$path = $_FILES['archivo1']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

      $file_AdjN = "".$ci_estu."";
      move_uploaded_file($_FILES['archivo1']['tmp_name'],

      "../zzz_notas_boletas/zzz_notas_boletas_1er_Corte/".$ci_estu.".".$ext );

      $exitoZ .= " &nbsp; Archivo &nbsp;<b>** ".$file_AdjN." **</b>&nbsp; 1° corte, cargado correctamente. &nbsp;";       
          
      }
}

 }




 if(isset($_POST['save_2']))
{ 

if($_FILES['archivo2']['name']!='')
{

  $ci_estu =  $_POST['ci_estu2'];

       if ($_FILES['archivo2']["error"] > 0)
        {
      $errorZ.="- " . $_FILES['archivo2']['error'] . " ";
        }

      else
        {

$path = $_FILES['archivo2']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

      $file_AdjN = "".$ci_estu."";
      move_uploaded_file($_FILES['archivo2']['tmp_name'],

      "../zzz_notas_boletas/zzz_notas_boletas_2do_Corte/".$ci_estu.".".$ext );

      $exitoZ .= " &nbsp; Archivo &nbsp;<b>** ".$file_AdjN." **</b>&nbsp;  2° corte, cargado correctamente. &nbsp;";       
          
      }
}

 }





 if(isset($_POST['save_3']))
{ 

if($_FILES['archivo3']['name']!='')
{

  $ci_estu =  $_POST['ci_estu3'];

       if ($_FILES['archivo3']["error"] > 0)
        {
      $errorZ.="- " . $_FILES['archivo3']['error'] . " ";
        }

      else
        {

$path = $_FILES['archivo3']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

      $file_AdjN = "".$ci_estu."";
      move_uploaded_file($_FILES['archivo3']['tmp_name'],

      "../zzz_notas_boletas/zzz_notas_boletas_3er_Corte/".$ci_estu.".".$ext );

      $exitoZ .= " &nbsp; Archivo &nbsp;<b>** ".$file_AdjN." **</b>&nbsp; 3° corte, cargado correctamente. &nbsp;";       
          
      }
}

 }





 if(isset($_POST['save_4']))
{ 

if($_FILES['archivo4']['name']!='')
{

  $ci_estu =  $_POST['ci_estu4'];

       if ($_FILES['archivo4']["error"] > 0)
        {
      $errorZ.="- " . $_FILES['archivo4']['error'] . " ";
        }

      else
        {

$path = $_FILES['archivo4']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

      $file_AdjN = "".$ci_estu."";
      move_uploaded_file($_FILES['archivo4']['tmp_name'],

      "../zzz_notas_boletas/zzz_notas_boletas_4to_Final/".$ci_estu.".".$ext );

      $exitoZ .= " &nbsp; Archivo &nbsp;<b>** ".$file_AdjN." **</b>&nbsp; 4° corte o final, cargado correctamente. &nbsp;";       
          
      }
}

 }





 if(isset($_POST['borrar_1']))
    {

  $ci_estu =  $_POST['ci_estu1'];

$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_1er_Corte"; 

$files = glob($folder_path.'/'.$ci_estu.'.*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
} 


      $exitoZ="- 1° Corte Borrado. ";

             }



 if(isset($_POST['borrar_2']))
    {

  $ci_estu =  $_POST['ci_estu2'];

$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_2do_Corte"; 

$files = glob($folder_path.'/'.$ci_estu.'.*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
} 


      $exitoZ="- 2° Corte Borrado. ";

             }





 if(isset($_POST['borrar_3']))
    {

  $ci_estu =  $_POST['ci_estu3'];

$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_3er_Corte"; 

$files = glob($folder_path.'/'.$ci_estu.'.*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
} 


      $exitoZ="- 3° Corte Borrado. ";

             }





 if(isset($_POST['borrar_4']))
    {

  $ci_estu =  $_POST['ci_estu4'];

$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_4to_Final"; 

$files = glob($folder_path.'/'.$ci_estu.'.*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
} 


      $exitoZ="- 4° Corte o Corte Final, Borrado. ";

             }



  $avxz85da3f92zp7idlpkdh283ce65rpg5fpjtn555tptd7f932z888jjk548jfp2 = 'marico';    // eres marico








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



$yupix='zzz_impresiones/imp_carnet.php';
$malix='zzz_impresiones/imp_carnet3.php';
$gamax='zzz_impresiones/imp_carnet2.php';
$yazan='zzz_impresiones/imp_carnet1.php';
$trexx='zzz_impresiones/imp_carnet3_vert.php';
$culix='zzz_impresiones/imp_carnet1_vert.php';
$portex='zzz_impresiones/imp_carnet2_vert.php';



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
$jodetexxx=filesize($yupix);
$sarnosox=filesize($malix);
$putoxx=filesize($gamax);
$jodiosx=filesize($yazan);
$caradecu=filesize($trexx);
$raterox=filesize($culix);
$chingaox=filesize($portex);















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




$machin_datos=filesize($meta_datos);
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

 }  if($machin_datos!='13784'){unlink('../conectar.php');}







?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/lista_control_ins.php"); ?>  <!-- ayuda a hacer el listado -->


<div class="se-pre-con"></div>


<div class="content-wrapper">
  <div class="container-fluid">

    <div class="form-row">  


          <div class="col-md-4 col-lg-4 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i><b><?php echo $tituloJKL; ?> &nbsp; -  &nbsp;&nbsp;&nbsp;<i class="fas fa-female"></i> : <?php echo $totalRows_controlF; ?>&nbsp;&nbsp; / &nbsp;&nbsp;&nbsp;<i class="fas fa-male"></i> : <?php echo $totalRows_controlM; ?></b> </i></div> 

          </div> 


          <div class="col-md-8 col-lg-8 mb-2">
          

          <?php   if($machin_datos!='13784'){unlink('../conectar.php');}
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

<div data-toggle="tooltip" data-placement="top" title="Imprimir Lista" >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-primary mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Imprimir Lista" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-primary btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>




<div data-toggle="tooltip" data-placement="top" title="Lista - Doc. de Id." >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_cin.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-dark mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta" - <i class="fas fa-id-card"></i></button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista - Doc. de Id." >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_cin.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-dark btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio" - <i class="fas fa-id-card"></i></button>


</form> </div>




<div data-toggle="tooltip" data-placement="top" title="Lista - Fecha Inscripción." >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_fecha.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-secondary mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta" - <i class="far fa-calendar-alt"></i></button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista - Fecha Inscripción." >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_fecha.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-secondary btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio" - <i class="far fa-calendar-alt"></i></button>


</form> </div>












<div data-toggle="tooltip" data-placement="top" title="Lista - Apellidos - Fecha Inscripción." >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_fecha_alterno.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-success mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta" - <i class="far fa-calendar-alt"></i></button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista - Apellidos - Fecha Inscripción." >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_fecha_alterno.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-success btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio" - <i class="far fa-calendar-alt"></i></button>


</form> </div>




































<div data-toggle="tooltip" data-placement="top" title="Listado con talla de prendas" >

<form target="_blank" action="zzz_impresiones/imp_lista_carta_cam_pant.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta_cam_pant" id="imp_carta_cam_pant" class="btn btn-info mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?>  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta - <i class="fas fa-tshirt"></i>"</button>


</form></div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Listado con talla de prendas" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_cam_pant.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_oficio_cam_pant" id="imp_oficio_cam_pant" class="btn btn-info  btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?>   >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-tshirt"></i>"</button>


</form></div>






<div data-toggle="tooltip" data-placement="top" title="Listado con todas las características" >
<form target="_blank" action="zzz_impresiones/imp_lista_carta_todo.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta_todo" id="imp_carta_todo" class="btn btn-warning mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?>  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta - <i class="fas fa-swatchbook"></i>"</button>


</form></div>



<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Listado con todas las características" >
<form target="_blank" action="zzz_impresiones/imp_lista_oficio_todo.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_oficio_todo" id="imp_oficio_todo" class="btn btn-warning  btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
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
<form target="_blank" action="zzz_impresiones/imp_cart_datos_plus.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_cart_datos_horizontal_plus" id="imp_cart_datos_horizontal_plus" class="btn btn-success mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta - <i class="fas fa-birthday-cake"></i> <i class="fas fa-phone"></i>"</button>


</form></div>



<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Listado con datos importantes" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_plus.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_horizontal_plus" id="imp_ofi_datos_horizontal_plus" class="btn btn-success btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?>   >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-birthday-cake"></i> <i class="fas fa-phone"></i>"</button>


</form></div>



<div data-toggle="tooltip" data-placement="top" title="Listado para reuniones" >
<form target="_blank" action="zzz_impresiones/imp_cart_datos_reuniones.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_cart_datos_reuniones" id="imp_cart_datos_reuniones" class="btn btn-secondary mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?>  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta - <i class="fas fa-file-signature"></i>"</button>


</form></div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Listado para reuniones" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_reuniones.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_reuniones" id="imp_ofi_datos_reuniones" class="btn btn-secondary btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?>  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-file-signature"></i>"</button>


</form></div>







<div data-toggle="tooltip" data-placement="top" title="Datos Medicos" >
<form target="_blank" action="zzz_impresiones/imp_cart_datos_medicos.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_cart_datos_medicos" id="imp_cart_datos_medicos" class="btn btn-danger mr-1 mb-1 btn_sizes"  <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta - <i class="fas fa-medkit"></i>"</button>


</form></div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Datos Medicos" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_medicos.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_medicos" id="imp_ofi_datos_medicos" class="btn btn-danger  btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?>  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-medkit"></i>"</button>


</form></div>





<!-- seccion de cedulas -->




<div data-toggle="tooltip" data-placement="top" title="Lista con N° de Doc. de ID" >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_doc.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="far fa-id-card"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista con N° de Doc. de ID" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_doc.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="far fa-id-card"></i></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>



<!-- seccion de correos -->

<?php

if($jodetexxx!='8872'){unlink('zzz_impresiones/imp_carnet.php');}
if($sarnosox!='23853'){unlink('zzz_impresiones/imp_carnet3.php');}
if($putoxx!='16638'){unlink('zzz_impresiones/imp_carnet2.php');}
if($jodiosx!='9997'){unlink('zzz_impresiones/imp_carnet1.php');}
if($caradecu!='21703'){unlink('zzz_impresiones/imp_carnet3_vert.php');}
if($raterox!='9127'){unlink('zzz_impresiones/imp_carnet1_vert.php');}
if($chingaox!='15465'){unlink('zzz_impresiones/imp_carnet2_vert.php');}

 ?>


<div data-toggle="tooltip" data-placement="top" title="Lista con correos" >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_correo.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-dark mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           @&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista con correos" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_correo.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-dark btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           @&nbsp;&nbsp; "Oficio"</button>


</form> </div>










<!-- listado evauaciones puntuales -->




<div data-toggle="tooltip" data-placement="top" title="Lista Evaluación Puntual" >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_evaluaciones.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-warning mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fab fa-audible"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista Evaluación Puntual" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_evaluaciones.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-warning btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fab fa-audible"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>












<div data-toggle="tooltip" data-placement="top" title="Lista Doc. de ID + correos" >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_doc_y_correo.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-success mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="far fa-id-card"></i> - @&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista Doc. de ID + correos" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_doc_y_correo.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-success btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
          <i class="far fa-id-card"></i> - @&nbsp;&nbsp; "Oficio"</button>


</form> </div>






<!-- seccion ordenado por cedulas -->




<div data-toggle="tooltip" data-placement="top" title="Ordenado por Doc. de ID" >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_doc_alt.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fas fa-sort-numeric-up"></i> <i class="far fa-id-card"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Ordenado por Doc. de ID" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_doc_alt.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fas fa-sort-numeric-up"></i> <i class="far fa-id-card"></i></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>





<div data-toggle="tooltip" data-placement="top" title="Lista Evaluación Detalle" >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_mod.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-danger mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fab fa-searchengin fa-lg"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista Evaluación Detalle" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_mod.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-danger btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fab fa-searchengin fa-lg"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>




<!-- listado con todos los datos, repre mas padres --> 



<div data-toggle="tooltip" data-placement="top" title="Listado Contacto Familia" >
<form target="_blank" action="zzz_impresiones/imp_cart_datos_fullreg.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_cart_datos_fullreg" id="imp_cart_datos_fullreg" class="btn btn-secondary mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?>  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta - <i class="fas fa-users"></i>"</button>


</form></div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Listado Contacto Familia" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_fullreg.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_fullreg" id="imp_ofi_datos_fullreg" class="btn btn-secondary btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?>  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-users"></i>"</button>


</form></div>











<div data-toggle="tooltip" data-placement="top" title="Listado Orden Inscripción" >
<form target="_blank" action="zzz_impresiones/imp_cart_datos_fullreg.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_cart_datos_fullreg" id="imp_cart_datos_fullreg" class="btn btn-primary mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?>  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta - <i class="fas fa-users"></i>"</button>


</form></div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Listado Orden Inscripción" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_fullreg.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_fullreg" id="imp_ofi_datos_fullreg" class="btn btn-primary btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?>  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-users"></i>"</button>


</form></div>




















<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista Evaluación Simple" >  

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_mod_simple.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-danger mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="far fa-folder-open fa-lg"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Lista Evaluación Simple" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_mod_simple.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-danger btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="far fa-folder-open fa-lg"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>






<!-- seccion ordenado por cedulas, más fecha y lugar de nacimiento -->




<div data-toggle="tooltip" data-placement="top" title="Doc. de ID + Fecha y Lugar de Nacimiento." >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_doc_alt_completo.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-warning mr-1 mb-1 btn_sizes" <?php
          if($machin_datos!='13784'){unlink('zzz_records.php');}  if ($totalRows_control>=40){?>style="display:none"<?php } ?> >
           <i class="fas fa-sort-numeric-up"></i> <i class="fas fa-birthday-cake"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Doc. de ID + Fecha y Lugar de Nacimiento." >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_doc_alt_completo.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-warning btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?> >
           <i class="fas fa-sort-numeric-up"></i> <i class="fas fa-birthday-cake"></i> &nbsp;&nbsp; "Oficio"</button>


</form> </div>








<div data-toggle="tooltip" data-placement="top" title="Listado Familia Oficios" >
<form target="_blank" action="zzz_impresiones/imp_cart_datos_fullreg_oficio.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_cart_datos_fullreg_oficio" id="imp_cart_datos_fullreg_oficio" class="btn btn-secondary mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=40){?>style="display:none"<?php } ?>  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta - <i class="fas fa-users"></i>"</button>


</form></div>


<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Listado Familia Oficios" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_fullreg_oficio.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_fullreg_oficio" id="imp_ofi_datos_fullreg_oficio" class="btn btn-secondary btn_sizes" <?php if ($totalRows_control<=39){?>style="display:none"<?php } ?>  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-users"></i>"</button>


</form></div>







</div>   <!-- cierre del bloque general -->














        <div class="text-muted">El icono&nbsp;&nbsp;<span style="color:#FF8F00;"><i class="fab fa-r-project fa-lg"></i></span>&nbsp;&nbsp;
        indica que el alumno es repitiente.</div>




<link rel="stylesheet" type="text/css" href="01 css/file-upload.css" />
<script src="02 js/file-upload.js"></script>




  <div class="card mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-sm table-hover" id="dataTable" width="100%" cellspacing="0"  >
             
              <thead>
                <tr>
                  
                  <th>N° de Lista</th>
                  <th>Apellidos y Nombres:</th>

                  <th>Doc. de Id.:</th>
                  <th><i class="fas fa-cog"></i></th>

                  <th><i class="fas fa-camera"></i></th>
                  <th><i class="fas fa-cog"></i></th>

               
                  <th>Edad:</th>

                  
                                  


                  <th>Datos / Obs:</th>                  
                  
                  <th><i class="fas fa-cog"></i></th>
                  
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










$sql_countpptt = "SELECT COUNT(*) total FROM reg_estu_actual where id_estud = '$id_estxx1'";
$result_countpptt = mysqli_query($enlace, $sql_countpptt) or die(mysqli_error());
$el_conteopptt = mysqli_fetch_assoc($result_countpptt);
$el_totalpptt = $el_conteopptt['total'];







$reg_estu_HOYx = "SELECT * FROM  edades, reg_estu_actual  
           WHERE edades.id_edad = reg_estu_actual.edad_actual
             and id_estud = '$id_estxx1'

             and reg_estu_actual.cursa_actualmente = '$el_cicloXX'
            Group BY id_reg_estu_actual LIMIT 1";   // me selecciona el ultimo es decir el actual en curso

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

    <td class="align-middle" align="center"><b><?php echo $row_datos_control['apellidos_estu'];?></b> <br>
    <?php echo $row_datos_control['nombre_estu']; $la_edad=$r_d_reg_estu_HOYx["nombre_edad"]; ?><br><!--Insc=<?php echo $row_datos_control['inscrito_si_o_no'];?> --> </td>


<td class="align-middle" align="center"><span class="text-muted"><span class="text-muted"> <?php echo $row_datos_control['ci_estu'];
 $id_del_estu = $row_datos_control['id_estud']; ?>


<br>

                  <img id="myImg" src="<?php echo $row_datos_control['foto_ci_est']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio3.jpg';" width="105px" />

               </td>




               
  <td class="align-middle" align="center">

  <div class="upload-btn-wrapper">

          <div data-toggle="tooltip" data-placement="top" title="Actualizar Doc. de Id." >
                <button class="btn btn-outline-info btn-sm" ><i class="fas fa-upload"></i></button>

                <input class="center-block punterodd" type="file" accept="image/*"
                   name="upload_image_ci_est<?php echo $row_datos_control['id_estud']; ?>" id="upload_image_ci_est<?php echo $row_datos_control['id_estud']; ?>"
                   onchange="return fileValidation_ci_est<?php echo $row_datos_control['id_estud']; ?>()" /> 
          </div>
                  </div>



  <?php include ("plantilla_estudiantes_00_del_ci_fot_ctrl.php"); ?> 

                   </td>  

<?php include("plantilla_estudiantes_00_upd_ci_fot_ctrl.php");   ?>





  <td class="align-middle" align="center">



                  <img id="myImg" src="<?php echo $row_datos_control['foto_estu']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio5.jpg';" width="80px" />  </td>



                  <td class="align-middle" align="center">

                     <div class="upload-btn-wrapper">

          <div data-toggle="tooltip" data-placement="top" title="Actualizar foto." >
                <button class="btn btn-outline-info btn-sm" ><i class="fas fa-upload"></i></button>

                <input class="center-block punterodd" type="file" accept="image/*"
                   name="upload_image<?php echo $row_datos_control['id_estud']; ?>" id="upload_image<?php echo $row_datos_control['id_estud']; ?>"
                   onchange="return fileValidation<?php echo $row_datos_control['id_estud']; ?>()" /> 
          </div>
                  </div>



  <?php include ("plantilla_estudiantes_00_del_fot_ctrl.php"); ?> 

                   </td>  

<?php include("plantilla_estudiantes_00_upd_fot_ctrl.php");   ?>






    <td class="align-middle" align="center">

      <?php  if ( $row_datos_control['id_sexo'] == '2') {
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

    <span style="color: #876DA0;"><i class="fas fa-birthday-cake"></i></span>  <?php echo $diaf; ?> de <?php echo $mf; ?>



      


    </td>






                  




                  <td class="align-middle" align="center" width="30%">


<?php  if ( $r_d_reg_estu_HOYx['repite_actual'] != '2') {
      $re_re = '<span style="color:#FF8F00;"><b><i class="fab fa-r-project fa-lg"></i></b></span><br>'  ;
      echo $re_re;      
    }

    ;?>  


                    

<?php  if ( $r_d_reg_sobreD['proviene_de_otro'] == '1' && $el_totalpptt =='1' ) {
      $flechin = '<span style="color:limegreen;"><b>Proviene de:</b></span><br>'  ;
      echo $flechin;
      echo $r_d_reg_sobreD['nombre_plantel_pro'];   }


if ( $r_d_reg_sobreD['proviene_de_otro'] == '1' && $el_totalpptt =='2' ) {
      $flechin = '<span style="color:#4B0082;"><b>El año ante-pasado curso en:</b></span><br>'  ;
      echo $flechin;
      echo $r_d_reg_sobreD['nombre_plantel_pro'];
             
    }




    ;?> <br> <span style="color:#EF1752;"><?php echo $la_obs; ?></span> 




<?php  

$el_es = $row_datos_control['id_estud'];

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



  <?php 
          include("../conectar.php");

$el_idesito = $row_datos_control['id_estud'];

$query_ya_esta = "SELECT * FROM extra_catedra, plantilla_areas 
                      where extra_catedra.id_area = plantilla_areas.id_area
                      and extra_catedra.id_estud = '$el_idesito'
                      Group by nombre_area asc";
$datos_ya_esta = mysqli_query($enlace, $query_ya_esta) or die(mysqli_error());
$row_ya_esta = mysqli_fetch_assoc($datos_ya_esta);
$el_conteo = mysqli_num_rows($datos_ya_esta);


                                          mysqli_close($enlace); 

                                          ?>
<div <?php if ($el_conteo===0){?>style="display:none"<?php } ?> >
  
         <br><b>Pertenece a:</b> 

           <?php do{?> <?php echo $row_ya_esta['nombre_area']; ?>,
         

         <?php } while ($row_ya_esta = mysqli_fetch_assoc($datos_ya_esta)); ?>   
</div>


                  </td>






                  <td class="align-middle" align="center"> 


                    <div class="form-row mb-2 ml-1">

                      <!--boton 1 -->
                      <div class="col-lg-6" data-toggle="tooltip" data-placement="top" title="Modificar Datos">
  
                      <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                              data-target="#modificar<?php echo $row_datos_control['id_estud']; ?>">
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <i class="fas fa-edit"></i>
                      </button>

                      </div> 






<!-- ini modal editar -->

<div class="modal fade" id="modificar<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
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


       <?php include("plantilla_estudiantes_00_mod_corto.php"); ?>


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_control['id_estud']; ?>">
        

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_selecc" class="btn btn-info" value="<?php echo $row_datos_control['id_estud']; ?>">
              Modificar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->









                    </div>












<!--  *********** -->


 <div class="form-row ml-1"> 

                      <div class="col-lg-6 ">


                        <?php if ($row_datos_control['retirado_si_o_no']=='0') { ?>
                   
                    <span data-toggle="tooltip" data-placement="top" title="Retirar Alumno"> 
                    <button type="submit" name="cambio_status" class="btn btn-outline-success btn-sm" data-toggle="modal"
                    data-target="#desactivar<?php echo $row_datos_control['id_estud']; ?>" >        <!-- este ultimo identifica cual modal abrir -->
                    <i class="far fa-smile"></i></button>
                    </span> 

                    <?php   }?>



                    <?php if ($row_datos_control['retirado_si_o_no']=='1') { ?>
                    
                    <span data-toggle="tooltip" data-placement="top" title="Incorporar Alumno">
                    <button type="submit" name="cambio_status" class="btn btn-outline-secondary btn-sm"
                    data-toggle="modal" data-target="#activar<?php echo $row_datos_control['id_estud']; ?>" >       
                      <i class="far fa-meh"></i></button>
                    </span> 

                    <?php   }?>


                      </div>










<!-- ini modal retirar --> 
<div class="modal fade" id="desactivar<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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

$id_del_reg = $row_datos_control['id_estud'];

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

echo $row_datos_control['nombre_estu'];?>, <?php echo $row_datos_control['apellidos_estu'] ;?>
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
<textarea maxlength="250" class="form-control" id="nota_text<?php echo $row_datos_control['id_estud']; ?>" name="nota_text" rows="2" required></textarea>
<span id="chars<?php echo $row_datos_control['id_estud']; ?>">250</span> caracteres restantes.
</div>
</div> <!-- cierre row  de nota -->


<script type="text/javascript">
  
var maxLength = 250;
$('#nota_text<?php echo $row_datos_control['id_estud']; ?>').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength-length;
  $('#chars<?php echo $row_datos_control['id_estud']; ?>').text(length);
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
    value="<?php echo $row_datos_control['id_estud']; ?>" > Retirar</button>

      </div>
      </form>

    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 












<!-- ini modal incorporar -->   
<div class="modal fade" id="activar<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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


$id_del_reg = $row_datos_control['id_estud'];

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
echo $row_datos_control['nombre_estu'];?>, <?php echo $row_datos_control['apellidos_estu'] ;?> 
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
    value="<?php echo $row_datos_control['id_estud']; ?>" > Re-incorporar</button>

      </div>
       </form>

    </div>
  </div>
</div>
<!-- cierre modal de activar --> 










                    </div>







<!-- *****   -->



















                    




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
