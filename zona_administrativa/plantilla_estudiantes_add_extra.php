<?php

include("identificador.php");

$alerta_principal  = "0";

$el_propio_id = $_SESSION ['id_del_repre_del_alum'];


$nnn1 = $nnn['ci'];
$fotPP = $nnn['ci'];

$alerta_principal  = "0";

 $foto_success = "";
  $foto_danger = "";


  $ci_success = "";
  $ci_danger = "";


 $ci_success_act1="";
    $ci_danger_act1="";


  $datos_success = "";
  $datos_danger = "";

$direcc_success = "";
$direcc_danger = "";

$errorZ2 = "";
$exitoZ2 = "";

$bloquear ="0";
$mostrar ="1";

$enviado=""; // me dice si  probablemente se envio o no el email
$sms="";


$filenameAA = '../0 Croppie/foto_repre_update_'.$el_propio_id.'_'.$fotPP.'.png';
$filenameCC = '../0 Croppie/foto_ci_repre_update_'.$el_propio_id.'_'.$fotPP.'.png';

$filenameEE = '../0 Croppie/foto_estu_update_'.$el_propio_id.'_'.$fotPP.'.png';

$filenameE_act1 = '../0 Croppie/ci_est_act1' .$fotPP. '.png';


if(isset($_POST['borrar_nn_aaa']))
{
$alerta_principal = "2";

if (file_exists($filenameEE )) { 
unlink($filenameEE);    
  } 


 if (file_exists($filenameE_act1 )) { 
unlink($filenameE_act1);    
  }

}



//****
    

    $datosES1_success="";
    $datosES1_danger="";  

$datosES1_repre_success="";
$datosES1_repre_danger=""; 

    $procede_success1="";
    $procede_danger1="";

    $actua_success1="";
    $actua_danger1="";

     $obs_success1='';
     $obs_danger1='';

    $quien_success="";
    $quien_danger="";

    
// referente al cargo de foto 

    $foto_estu1_info="1";
       
   
   $foto_successA="";
    $foto_dangerA="";    


$act_hist_ES1_success="";
$act_hist_ES1_danger="";




$conteo_progresoA = "0";
$conteo_errorA = "0";




if(isset($_POST['borrar_nn_f']))
{
$alerta_principal = "2";

if (file_exists($filenameAA )) { 
unlink($filenameAA);    
  }

 if (file_exists($filenameCC )) { 
unlink($filenameCC);    
  }
}




if(isset($_POST['registrar_alumno']))  // chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba

{

  $quien = $_POST["quien"];

include("../conectar.php"); 

include("consultas_add/chequeo_estudiantes_extra_add.php");   // chequea que lo introducido este bien.

mysqli_close($enlace); 

$alerta_principal = "2";


  if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }


  else {   // registro preliminar ok


include("../conectar.php"); 


$repre_id = $el_propio_id;   // para saber a quien pertenecen estos vehiculos.


include ("zona_adm_estudiante_add.php");






include("../conectar.php");

 $sql_upd_repre_ins_si_o_no = "UPDATE reg_representante 
                                              SET pre_ins_si_o_no = '1',
                                              inscribe_hasta = '11'
                                              WHERE id_repre = '$repre_id' ";

 $resultado = mysqli_query($enlace, $sql_upd_repre_ins_si_o_no);

mysqli_close($enlace); 

$bloquear = "1";

$mostrar = "0";


  }  // ya que supero la fase de comprobacion procedo a registrar



}  // cierre final de todo el proceso...







if(isset($_POST['borrar_uno']))
    {

$alerta_principal = "2";

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

              $errorZ="- El representante no posee foto.";

             }

mysqli_close($enlace); 

 }






if(isset($_POST['borrar_dos']))
    {

$alerta_principal = "2";

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

              $errorZ="- El representante no posee foto del documento de Id.";

             }

mysqli_close($enlace); 

 }










if(isset($_POST['actualizar_repre']))// chequea si se ha dado clic
   {

    $alerta_principal = "2";
    
         include("consultas_mod/chequeo_repre_mod_add.php");   // chequea que lo introducido este bien.   // fase de chequeo de datos                              

                  if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                      {
                         $errorZ = "<p> Se han suscitado los siguientes errores: <br> <b>" . $errorZ. " </b> </p>";           
                      }
                         


                      else { 


                                  $mod_ciudad = $_POST["mod_ciudad"];
                                  $mod_municipio = $_POST["mod_municipio"];
                                  $mod_parroquia = $_POST["mod_parroquia"];
                                  $mod_avenida = $_POST["mod_avenida"];
                                
                                 

                                  $mod_codigo = $_POST["mod_codigo"];
                                  $mod_vivienda = $_POST["mod_vivienda"];
                                  
                                 

                                  $mod_piso = $_POST["mod_piso"];
                                  $mod_numero = $_POST["mod_numero"];

                                  $direcc_id = $_POST['id_direcc_repre']; 

                                  include("../conectar.php"); 


                      if (empty($_POST['id_direcc_repre']))
                       {  // de no haber un id, crea todo                     

                            $query_d = "INSERT INTO direcciones(id_ciudad, id_municipio, id_parroquia, id_avenida, dir_calle_sector,  id_codigo, id_vivienda, dir_nombre_vivienda, id_piso, id_numero) 
                                VALUES ( '$mod_ciudad', '$mod_municipio', '$mod_parroquia', '$mod_avenida',

                                 '".mysqli_real_escape_string($enlace,$_POST['mod_calle'])."' , '$mod_codigo', '$mod_vivienda',

                                  '".mysqli_real_escape_string($enlace,$_POST['mod_nombre_vivienda'])."',


                                      '$mod_piso', '$mod_numero')";

                                      if (!mysqli_query($enlace,$query_d))  // si no logro ingresar la direccion...
                                  {                        
                                  $errorZ.=" <b> - Se han suscitado diversos errores. </b> (Cod. D_a.). ";
                                  mysqli_close($enlace); 
                                  }

                                  else                        
                                  {  $direcc_id = mysqli_insert_id($enlace);
                                  $exitoZ .= "&nbsp; <b> - Dirección almacenada. </b> ";      }   // creo el registro del id de direccion y los datos 

                      }  // cierre if de crear nuevo registro para la direccion



                      else {   // en caso de que existiera un id de direccion  hago un update de la direccion

                          $sql_upd_direcc = "UPDATE direcciones    SET id_ciudad = '$mod_ciudad',  id_municipio = '$mod_municipio',  id_parroquia = '$mod_parroquia',  id_avenida = '$mod_avenida',  dir_calle_sector = '".mysqli_real_escape_string($enlace,$_POST['mod_calle'])."',

                                             id_codigo = '$mod_codigo',  id_vivienda = '$mod_vivienda',
                                               dir_nombre_vivienda = '".mysqli_real_escape_string($enlace,$_POST['mod_nombre_vivienda'])."',

                                                id_piso = '$mod_piso',  id_numero = '$mod_numero'
                                            WHERE id_direccion = '$direcc_id' ";



                                  if (!mysqli_query($enlace,$sql_upd_direcc))      // actualiza y si no logra ingresar los datos...
                                       {
                                        
                                        $errorZ .= "&nbsp; <b> - Dirección no actualizada. </b> (Cod. D_b.). ";             
                                        mysqli_close($enlace);

                                       }               

                                    else{

                                      $exitoZ .= "&nbsp; <b> - Dirección actualizada. </b> "; 

                                         }

                            }  // cierre de que actualizo la direccion y procedo a actualizar los datos personales






                             $id_repre_GHJ = $_POST["id_repre_GHJ"];  

                              $mod_nombres_repre = mysqli_real_escape_string($enlace,$_POST['mod_nombres_repre']);
                              $mod_apellidos_repre = mysqli_real_escape_string($enlace,$_POST['mod_apellidos_repre']);
                              $mod_email_repre = mysqli_real_escape_string($enlace,$_POST['mod_email_repre']);

                              $mod_ci_repre = mysqli_real_escape_string($enlace,$_POST['mod_ci_repre']);

                                  $mod_genero_repre = $_POST["mod_genero_repre"];

                                  $mod_celular_repre = mysqli_real_escape_string($enlace,$_POST['mod_celular_repre']);
                                  $mod_telefono_repre = mysqli_real_escape_string($enlace,$_POST['mod_telefono_repre']);

                                  $mod_nacimiento_repre = $_POST["mod_nacimiento_repre"];

                                  $mod_nacionalidad_repre = $_POST["mod_nacionalidad_repre"];
                                  $mod_estado_civil_repre = $_POST["mod_estado_civil_repre"];
                                  $mod_parentesco_repre = $_POST["mod_parentesco_repre"];
                                  $mod_profesion_repre = $_POST["mod_profesion_repre"]; 

                          $sql_upd_repre = "UPDATE reg_representante 
                                              SET ci_repre = '$mod_ci_repre',
                                                nombre_repre = '$mod_nombres_repre',
                                                apellido_repre = '$mod_apellidos_repre',

                                                nacimiento_repre = '$mod_nacimiento_repre',
                                                
                                                celular_repre = '$mod_celular_repre',
                                                telefono_repre = '$mod_telefono_repre',
                                                email_repre = '$mod_email_repre',
                                                id_direccion = '$direcc_id',
                                                id_sexo = '$mod_genero_repre',
                                                id_pais = '$mod_nacionalidad_repre',
                                                id_parentesco = '$mod_parentesco_repre',
                                                id_profesion = '$mod_profesion_repre',
                                                id_estado_civil = '$mod_estado_civil_repre',
                                                lleno_sus_datos = '1'

                                              WHERE id_repre = '$id_repre_GHJ' ";



                                           if (!mysqli_query($enlace,$sql_upd_repre))      // actualiza y si no logra ingresar los datos...
                                     {
                                      $errorZ .= "&nbsp; <b> - Datos no actualizados. </b> "; 

                        
                              mysqli_close($enlace);


                                     }               

                                  else{                                         

                                           $exitoZ .= "&nbsp; <b> - Datos actualizados. </b> "; 



                              clearstatcache();
                              $filename_repre = '../0 Croppie/foto_repre_update_'.$el_propio_id.'_'.$fotPP.'.png';
                              $foto_repre_info ="0";


                              if (file_exists($filename_repre ))     // de haber una foto le cambia el nombre y la mueve a otro lugar
                                    {
                                      $foto_repre_info ="1";

                                      $image_repre = imagecreatefrompng("../0 Croppie/foto_repre_update_".$el_propio_id.'_'.$fotPP.".png");  
                                                   unlink("../0 Croppie/foto_repre_update_".$el_propio_id.'_'.$fotPP.".png");
                                                   imagejpeg($image_repre,"../0 Croppie/foto_repre_update_".$el_propio_id.'_'.$fotPP.".png",90); // comprimer la imagen  
                                          
                                          $ext_repre = 'png';
                                          
                                          /* $newfilename = '../zz_fotos_l/logocropx.png'; */   

                                          

                      $newfilename_repre = "../zz_fotos_repre/".$id_repre_GHJ."_".$mod_ci_repre.".".$ext_repre;



                                        if(rename($filename_repre,$newfilename_repre))
                                    { 

                              $query_foto_repre = "UPDATE reg_representante SET foto_repre = '$newfilename_repre' WHERE id_repre='$id_repre_GHJ' LIMIT 1 ";         

                                        if (!mysqli_query($enlace,$query_foto_repre))      // si no ha logrado ingresar la foto
                                                 {

                                         $foto_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // ha fallado 
                                         $foto_repre_info ="0";
                                         unlink($newfilename_repre);

                                                       
                                                 }

                                        else {
                                        $foto_success="<i class=\"far fa-image fa-lg\"></i>";   // coloca success al lado de foto.

                                        $exitoZ.="&nbsp; <b> - Foto actualizada. </b>  ";



                                          }   
                                    }  //  si fue exitoso el movimiento de la foto, ahora actualiza el registro



                                    else{   // fallo al renombrar

                                           $foto_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";
                                           $foto_repre_info ="0";
                                            unlink($filename_repre);
                                                       
                                          } 




                                    }  // si existe la foto del repre, le cambia el nombre y la mueve a otro lugar

                                       


                              clearstatcache();
                              $filename_repre_ci = '../0 Croppie/foto_ci_repre_update_'.$el_propio_id.'_'.$fotPP.'.png';
                              $foto_repre_ci_info ="0";



                              if (file_exists($filename_repre_ci ))     // de haber una ci le cambia el nombre y la mueve a otro lugar
                                    {
                                      $foto_repre_ci_info ="1";                              

                                      $image_repre_ci = imagecreatefrompng("../0 Croppie/foto_ci_repre_update_".$el_propio_id.'_'.$fotPP.".png");   
                                                   unlink("../0 Croppie/foto_ci_repre_update_".$el_propio_id.'_'.$fotPP.".png");
                                                   imagejpeg($image_repre_ci,"../0 Croppie/foto_ci_repre_update_".$el_propio_id.'_'.$fotPP.".png",90); // comprimer la imagen  
                                          
                                          $ext_repre_ci = 'png';
                                          
                                          /* $newfilename = '../zz_fotos_l/logocropx.png'; */
                                          

                                  $newfilename_repre_ci = "../zz_fotos_repre_ci/".$id_repre_GHJ."_".$mod_ci_repre.".".$ext_repre_ci;



                                        if(rename($filename_repre_ci,$newfilename_repre_ci))
                                    { 

                              $query_foto_repre_ci = "UPDATE reg_representante SET foto_ci_repre = '$newfilename_repre_ci' WHERE id_repre='$id_repre_GHJ' LIMIT 1 ";
                                        
                                        if (!mysqli_query($enlace,$query_foto_repre_ci))      // si no ha logrado ingresar la foto
                                                 {

                                         $ci_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // ha fallado 
                                         $foto_repre_ci_info ="0";
                                         unlink($newfilename_repre_ci);
                                                       
                                                 }

                                        else {
                                        $ci_success="<i class=\"far fa-id-card fa-lg\"></i>";   // coloca success al lado de foto.

                                        $exitoZ.="&nbsp; <b> - Doc. de Id. actualizado. </b>  ";

                                          }   
                                    }      //  si fue exitoso el movimiento de la foto, ahora actualiza el registro




                                    else{   // fallo al renombrar

                                           $ci_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";
                                           $foto_repre_ci_info ="0";
                                           unlink($filename_repre_ci);
                                                       
                                          } 







                                }  // si existe el doc del repre, le cambia el nombre y la mueve a otro lugar




                                             mysqli_close($enlace);
                                      }  // cierre del else en el cual fue exitoso la actualizacion de los datos  y en donde  chequea fotos




           } // no hubo error por tanto actualice



 } // cierre if principal





















?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->






<?php


if ($alerta_principal  == "0") {


  if (!file_exists($filenameAA ) && !file_exists($filenameCC ) ) { 

 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  title: "",
  type: "info",
html: "<b>Si dispone de la(s) foto(s)  y/o documento de identidad</b>, cárguelos en el sistema antes de actualizar.",
  icon: "",
});';
  echo '}, 3000);</script>';  

   }

} 

?>



<div class="content-wrapper">
  <div class="container-fluid">

   
    
    <div class="card mb-2  mx-auto">

      <div class="card-body">


          <div class="form-row">


              <div class="col-md-4 col-lg-4 mb-3">

                <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
                <i class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp; <b> Representante del grupo familiar:  </b>  </div> 

              </div> 


              <div class="col-md-8 col-lg-8 mb-3">
              

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





<?php 

include("../conectar.php");

include ("consultas_mod/query_add_extra.php"); 


?>




<div class="form-row">
<div class="col-md-12">

        



<style type="text/css">

.punterodd{
  display: block;
  cursor: pointer;
}
</style>



        <div class="form-row">

        <div class="col-md-2">


                                      <div class="card border-info" style=" height: 266px; padding-bottom: 5px;">
                        
                          
                          <div class="col-lg-12 ">

                            <div class="form-row  ">  <!--  -->

                    

                            <div class="col-10 col-md-10 mt-1">

                    <div class="upload-btn-wrapper">
                      <button class="btnX">Cargar <i class="fas fa-search fa-lg"></i></button>
    <input  class="item-img_A center-block punterodd" type="file"  accept="image/*"  name="file_photo_A"  id="file_photo_A"  /> 
                     
        </div>

                  </div> 

                  
                  <div class="col-2 col-md-2 mt-2">


                  <?php 

                 


                        if ($foto_success!="")
      { echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto cargada.\">".$foto_success."</i>"; }
                      ?>

                      <?php 
                        if ($foto_danger!="")
      { echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto no cargada.\">".$foto_danger."</i>"; }
                      ?>
                          <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->                   
                  
                  </div> 


                  


                  </div>  <!-- cierre primer row  -->


<?php 

$imagen_repre = $row_datos_representante['foto_repre'];

              if ($imagen_repre!="")
              { $ver = 1; }

              else {
                $ver = 0;
              }

?>



<div style=" height: 100%; line-height: 200px;">
                  <div style=" vertical-align: middle; text-align: center;">







<div <?php if ($ver==0){?>style="display:none"<?php } ?> >   

<img  src="../0 Croppie/foto_repre_update_<?php echo $el_propio_id;?>_<?php echo $fotPP;?>.png?nocache=<?php echo time(); ?>"

         class="fotologuitocol img-responsive img-thumbnail" style=" max-height: 214px; padding-bottom: 5px;"

          id=""  onerror="this.onerror=null;this.src='<?php echo $row_datos_representante['foto_repre'];?>';"/> 

</div>





<div <?php if ($ver==1){?>style="display:none"<?php } ?> >

<img  src="../0 Croppie/foto_repre_update_<?php echo $el_propio_id;?>_<?php echo $fotPP;?>.png?nocache=<?php echo time(); ?>"

         class="fotologuitocol img-responsive img-thumbnail" style=" max-height: 214px; padding-bottom: 5px;"

          id=""  onerror="this.onerror=null;this.src='../zz_fotos_p/ZZvacio.jpg';"/> 

</div>



                               

                    </div>
                    
  </div>


                </div>  <!-- cierre col 12 que define todo lo que esta adentro -->


              </div>   <!-- cierre card border  -->




              <div class="form-row mt-1  ">  <!--  -->
                <div class="col-lg-12 ">


                <div class="card border-info" style=" height: 220px; padding-bottom: 5px;">
                        
                          
                          <div class="col-lg-12 ">

                            <div class="form-row  ">  <!--  -->

                    

                            <div class="col-10 col-md-10 mt-1">

                    <div class="upload-btn-wrapper">
                      <button class="btnX">Cargar <i class="fas fa-search fa-lg"></i></button>
  <input type="file" class="item-img_B center-block punterodd" accept="image/*"  name="file_photo_B"   id="file_photo_B"  /> 
                     
        </div>

                  </div> 

                  
                  <div class="col-2 col-md-2 mt-2">


                  <?php 
                


                        if ($ci_success!="")
      { echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Documento personal cargado.\">".$ci_success."</i>"; }
                      ?>

                      <?php 
                        if ($ci_danger!="")
      { echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Documento personal no cargado.\">".$ci_danger."</i>"; }
                      ?>
                          <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->                   
                  
                  </div> 


              


                  </div>  <!-- cierre primer row  -->

<div style=" height: 100%; line-height: 150px;">
                  <div style=" vertical-align: middle; text-align: center;">



 <?php 

$imagen_ci_repre = $row_datos_representante['foto_ci_repre'];

              if ($imagen_ci_repre!="")
              { $ver_ci = 1; }

              else {
                $ver_ci = 0;
              }

?>  





<div <?php if ($ver_ci==0){?>style="display:none"<?php } ?> >

<img  src="../0 Croppie/foto_ci_repre_update_<?php echo $el_propio_id;?>_<?php echo $fotPP;?>.png?nocache=<?php echo time(); ?>"

         class="img-thumbnail" style=" max-height: 170px; padding-bottom: 5px;"

          id=""  onerror="this.onerror=null;this.src='<?php echo $row_datos_representante['foto_ci_repre'];?>';"/> 

</div>





<div <?php if ($ver_ci==1){?>style="display:none"<?php } ?> >

<img  src="../0 Croppie/foto_ci_repre_update_<?php echo $el_propio_id;?>_<?php echo $fotPP;?>.png?nocache=<?php echo time(); ?>"

         class="img-thumbnail" style=" max-height: 170px; padding-bottom: 5px;"

          id=""  onerror="this.onerror=null;this.src='../zz_fotos_p/ZZvacio2.jpg';"/> 

</div>


                    </div>
                    
  </div>


                </div>  <!-- cierre col 12 que define todo lo que esta adentro -->

              </div>   <!-- cierre card border  -->

            </div>

              </div>


        </div>  <!-- cierre col 2 -->






<!-- ini Modal foto-->

<div class="modal fade" tabindex="-1" id="cropImagePop_A" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-primary">Centre dentro del margen, simulando una foto carnet y haga clic en "Recortar".</h5>  

   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">  


            <div class="text-center">
              <div id="upload-demo_A"></div>
            </div> 

          <div class="form-row mt-2">
            <div class="col-md-12"><h4 class="text-center text-info">Hacer uso de una foto clara y nítida.</h4>   </div>
          </div>




          <div class="form-row">
<div class="mx-auto col-md-12 mt-4">


 <button class="rotateRight col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateRight" data-deg="90"><i class="fas fa-share fa-lg fa-flip-horizontal"></i> Girar</button>
           
          <button class="col-md-6 mt-2 ml-4 btn btn-success cropImageBtn_A" id="cropImageBtn_A">Recortar</button>

<button class="rotateLeft col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateLeft" data-deg="-90">Girar <i class="fas fa-share fa-lg"></i></button>



</div> 
</div>




          <div class="form-row ">  <!-- mensaje q aprece -->

           <div class="content1 mt-1 mb-1 col-md-12 text-center" style="display:none">

           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

           </div>


           

           <div class="content2 mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Continuar"</b>; al finalizar hacer clic en <b class="text-info">"Actualizar información..."</b>.

          </div>






           </div>  <!-- cierre form-row -->

            

      </div>

      <div class="modal-footer">

        <form enctype="multipart/form-data" method="post" name="cargarfotoWW">
        
        <button type="submit" name="submit" class="btn btn-primary" id="cropImageBtn_AA" disabled>Continuar</button>

         <button type="submit" class="btn btn-secondary" name="cancelWW">Cerrar</button>
        


        </form>

      </div>

    </div>
  </div>
</div>

<!-- cierre The Modal -->





<!-- The Modal ci-->

<div class="modal fade" tabindex="-1" id="cropImagePop_B" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-primary">Centre el documento de identidad dentro del margen y haga clic en "Recortar".</h5>
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">       

            <div class="text-center">
              <div id="upload-demo_B"></div>
            </div> 

           <div class="form-row mt-2">
            <div class="col-md-12"><h4 class="text-center text-info">Hacer uso de una foto clara y nítida.</h4>   </div>
          </div>



<div class="form-row">
<div class="mx-auto col-md-12 mt-4">


 <button class="rotateRight col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateRightB" data-deg="90"><i class="fas fa-share fa-lg fa-flip-horizontal"></i> Girar</button>

      <button class="col-md-6 mt-2 ml-4 btn btn-success cropImageBtn_B" id="cropImageBtn_B">Recortar</button> 

<button class="rotateLeft col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateLeftB" data-deg="-90">Girar <i class="fas fa-share fa-lg"></i></button>



</div> 
</div>




      <div class="form-row ">  <!-- mensaje q aprece -->

           <div class="contentc1 mt-1 mb-1 col-md-12 text-center" style="display:none">

           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

           </div>


           

           <div class="contentc2 mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Continuar"</b>; al finalizar hacer clic en <b class="text-info">"Actualizar información..."</b>.

          </div>






           </div>  <!-- cierre form-row -->









      </div>

      <div class="modal-footer">

        <form enctype="multipart/form-data" method="post">
        
        <button type="submit" name="submit" class="btn btn-primary" id="cropImageBtn_BB" disabled>Continuar</button>
           
        <button type="submit" class="btn btn-secondary" name="cancelYY">Cerrar</button>


        </form>

      </div>

    </div>
  </div>
</div>

<!-- cierre The Modal -->




<script type="text/javascript">


  $(document).ready(function() {  
      
         
          setTimeout(function() {
              $(".content1").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".content2").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          $('#cropImageBtn_A').click(function() {
            this.disabled = true;
            $(".content1").show();
                          
              setTimeout(function() {
                  $(".content1").fadeOut(6500);
            
              }, 7500);
              

          });




           setTimeout(function() {
              $(".contentc1").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".contentc2").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          $('#cropImageBtn_B').click(function() {
            this.disabled = true;
            $(".contentc1").show();
                          
              setTimeout(function() {
                  $(".contentc1").fadeOut(6500);
            
              }, 7500);
              

          });



      });


// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

            var $uploadCrop_A,
            tempFilename_A,
            rawImg_A,
            imageId_A;

            function readFile_A(input) {


    var fileInput_A = document.getElementById('file_photo_A');
    var filePath_A = fileInput_A.value;
    var fileSize_A = fileInput_A.files[0].size;
    var allowedExtensions_A = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_A.exec(filePath_A)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_A.value = '';
        return false;  }

    if(fileSize_A > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

              if (input.files && input.files[0]) {
                      var reader_A = new FileReader();
                      reader_A.onload = function (e) {
                  $('.upload-demo_A').addClass('ready');
                  $('#cropImagePop_A').modal('show');
                        rawImg_A = e.target.result;
                      }
                      reader_A.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

   }





            $uploadCrop_A = $('#upload-demo_A').croppie({
              viewport: {
                 width: 350,
                    height: 450,
                    type: 'square'
              },
              boundary: {
                    width: 450,
                    height: 550
                },
                enableExif: true,



                enableOrientation: true
            });



            $( "#rotateLeft" ).click(function() {
            $uploadCrop_A.croppie('rotate', parseInt($(this).data('deg')));
        });


   $( "#rotateRight" ).click(function() {
            $uploadCrop_A.croppie('rotate', parseInt($(this).data('deg')));
        });






            $('#cropImagePop_A').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_A.croppie('bind', {
                    url: rawImg_A
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_A').on('change', function () { imageId_A = $(this).data('id'); tempFilename_A = $(this).val();

            $('#cancelCropBtn_A').data('id', imageId_A); readFile_A(this); });

            $('#cropImageBtn_A').on('click', function (ev) {
              $uploadCrop_A.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {
                
                $.ajax({
                    url:"../0 Croppie/upload_repre_updt_add.php?namexx=<?php echo $nnn['ci']; ?>&idexx=<?php echo $el_propio_id; ?>",
                    type: "POST",
                    data:{"image2": response},
                    success:function(data)
                    {                  

               $('#uploaded_image_A').html(data);

                    $(".content1").hide();

                    $(".content2").show();

                    document.getElementById("cropImageBtn_AA").disabled = false;


                    }
                  });
                        
                 })

            });




        // End upload preview image


// Start upload preview image
// $(".imagen_default_B").attr("src", "../zz_fotos_p/ZZvacio2.jpg");   // ../zz_fotos_p/02vacio.jpg

          var $uploadCrop_B,
            tempFilename_B,
            rawImg_B,
            imageId_B;

            function readFile_B(input) {


 var fileInput_B = document.getElementById('file_photo_B');
    var filePath_B = fileInput_B.value;
    var fileSize_B = fileInput_B.files[0].size;
    var allowedExtensions_B = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_B.exec(filePath_B)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_B.value = '';
        return false;  }

    if(fileSize_B > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 


              if (input.files && input.files[0]) {
                      var reader_B = new FileReader();
                      reader_B.onload = function (e) {
                  $('.upload-demo_B').addClass('ready');
                  $('#cropImagePop_B').modal('show');
                        rawImg_B = e.target.result;
                      }
                      reader_B.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

  }


            $uploadCrop_B = $('#upload-demo_B').croppie({
              viewport: {
                 width: 600,
                    height: 450,
                    type: 'square'
              },
              boundary: {
                    width: 725,
                    height: 575
                },
                enableExif: true,
                enableOrientation: true
            });


$( "#rotateLeftB" ).click(function() {
            $uploadCrop_B.croppie('rotate', parseInt($(this).data('deg')));
        });


   $( "#rotateRightB" ).click(function() {
            $uploadCrop_B.croppie('rotate', parseInt($(this).data('deg')));
        });




            $('#cropImagePop_B').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_B.croppie('bind', {
                    url: rawImg_B
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_B').on('change', function () { imageId_B = $(this).data('id'); tempFilename_B = $(this).val();

            $('#cancelCropBtn_B').data('id', imageId_B); readFile_B(this); });

            $('#cropImageBtn_B').on('click', function (ev) {
              $uploadCrop_B.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {

                $.ajax({
                    url:"../0 Croppie/upload_ci_repre_updt_add.php?namexx=<?php echo $nnn['ci']; ?>&idexx=<?php echo $el_propio_id; ?>",
                    type: "POST",
                    data:{"image3": response},
                    success:function(data)
                    {

                    
                       $('#uploaded_image_B').html(data);

                    $(".contentc1").hide();

                    $(".contentc2").show();

                    document.getElementById("cropImageBtn_BB").disabled = false;
                      


                      
                    }
                  });
                        
                 })

            });
        // End upload preview image



</script>     


















        <div class="col-md-10">





          
          <div class="form-row">  <!-- datos nivel de estudio -->

                  <div class="col-md-12 mt-2 mb-1">

                  <b class="text-info"> Datos: </b> 

            <?php 

           


                  if ($datos_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registrados.\">".$datos_success."</i>"; }
                ?>

                <?php 
                  if ($datos_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"No registrados.\">".$datos_danger."</i>"; }
                ?>
                    <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->


                  </div>

                </div>


                

<form method="POST" data-persist="garlic"  data-expires="240" name="actualizar_repre">   <!-- permite enviar  -->



 <input type="hidden" id="id_repre_GHJ"  name="id_repre_GHJ"
    value="<?php echo $row_datos_representante['id_repre']; ?>">  <!-- para saber donde guardar el cambio -->


     <input type="hidden" id="id_direcc_repre"  name="id_direcc_repre"
    value="<?php echo $row_datos_representante['id_direccion']; ?>">  <!-- para saber si debo crear un id para la direccion o si debo actualizar-->




                  <div class="form-row margencito">

                    <div class="input-group input-group-sm col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-file-alt">&nbsp;&nbsp;</i></span>  
                    </div>
                      <input maxlength="39" type="text" class="form-control  importantex" id="mod_nombres_repre" name="mod_nombres_repre"  placeholder="Nombres(s)..."
value="<?php echo $row_datos_representante['nombre_repre']; ?>" required>  
                </div>

                <div class="input-group input-group-sm col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="far fa-file-alt"></i></span>  
                    </div>
                      <input maxlength="39" type="text" class="form-control  importantex" placeholder="Apellido(s)..."  id="mod_apellidos_repre" name="mod_apellidos_repre"
value="<?php echo $row_datos_representante['apellido_repre']; ?>" required> 

                </div>





<?php   // esto permite obtener los datos necesarios del representante y simplificar la busqueda

$id_del_repreXX = $row_datos_representante['id_repre'];

include("../conectar.php");   

$query_repre = "SELECT * FROM sexo, d_paises, tb_estado_civil, tb_parentescos, tb_profesiones, reg_representante                        
                        
         WHERE  reg_representante.id_sexo = sexo.id_sexo
            and reg_representante.id_pais = d_paises.id_pais
            and reg_representante.id_estado_civil = tb_estado_civil.id_estado_civil 
            and reg_representante.id_parentesco = tb_parentescos.id_parentesco 
             and reg_representante.id_profesion = tb_profesiones.id_profesion       
            and id_repre = '$id_del_repreXX' ";

$datos_plantilla_repre = mysqli_query($enlace, $query_repre) or die(mysqli_error());

$row_datos_plantilla_repre = mysqli_fetch_array($datos_plantilla_repre); 


mysqli_close($enlace);


 ?>











                <div class="input-group input-group-sm  col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe"></i><i>&nbsp; Nacionalidad:</i></span>  
                    </div>
                 
                             <select class="form-control form-control-sm" id="mod_nacionalidad_repre" name="mod_nacionalidad_repre" required>

<option value="<?php echo $row_datos_plantilla_repre['id_pais']; ?>" selected><?php echo $row_datos_plantilla_repre['nombre_pais']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_paises['id_pais']; ?>"><?php echo $row_datos_paises['nombre_pais']; ?></option>

                                <?php } while ($row_datos_paises = mysqli_fetch_assoc($datos_paises)); ?> 


                              
                        </select>
                 
                 </div>






                </div>


                <div class="form-row">


                              <div class="input-group input-group-sm col-md-4 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="far fa-id-card "></i></span>  
                  </div>
                    <input maxlength="9" onkeydown="javascript:stripspaces(this)" type="text" class="form-control importantex"  placeholder="Cedula..."
                     id="mod_ci_repre" name="mod_ci_repre" value="<?php echo $row_datos_representante['ci_repre']; ?>" required> 



                </div>


                <div class="input-group input-group-sm col-md-4 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt "></i></span>  
                  </div>
                    <input maxlength="12" type="text" class="form-control  importantex" placeholder="Teléfono celular..."  id="mod_celular_repre" name="mod_celular_repre"
value="<?php echo $row_datos_representante['celular_repre']; ?>" required> 
                </div>


                <div class="input-group input-group-sm col-md-4 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-volume "></i></span>  
                  </div>
                    <input maxlength="12" type="text" class="form-control"  placeholder="Teléfono local..." id="mod_telefono_repre" name="mod_telefono_repre"
value="<?php echo $row_datos_representante['telefono_repre']; ?>"> 

                </div>


                </div>





                <div class="form-row">


                  <div class="input-group input-group-sm col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="far fa-user-circle "></i><i>&nbsp; Est. civil:</i></span>  
                    </div>
                 
                            <select class="form-control form-control-sm" id="mod_estado_civil_repre" name="mod_estado_civil_repre" required>

<option value="<?php echo $row_datos_plantilla_repre['id_estado_civil']; ?>" selected><?php echo $row_datos_plantilla_repre['nombre_estado_civil']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_civil['id_estado_civil']; ?>"><?php echo $row_datos_civil['nombre_estado_civil']; ?></option>

                                <?php } while ($row_datos_civil = mysqli_fetch_assoc($datos_civil)); ?> 


                              
                        </select>
                 
                 </div>



                 <div class="input-group input-group-sm col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-universal-access "></i><i>&nbsp; Parentesco:</i></span>  
                    </div>
                 
                             <select class="form-control form-control-sm" id="mod_parentesco_repre" name="mod_parentesco_repre" required>

<option value="<?php echo $row_datos_plantilla_repre['id_parentesco']; ?>" selected><?php echo $row_datos_plantilla_repre['nombre_parentesco']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_parentesco['id_parentesco']; ?>"><?php echo $row_datos_parentesco['nombre_parentesco']; ?></option>

                                <?php } while ($row_datos_parentesco = mysqli_fetch_assoc($datos_parentesco)); ?> 


                              
                        </select>
                 
                 </div>




                 <div class="input-group input-group-sm col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-briefcase "></i><i>&nbsp; Profesión/Oficio:</i></span>  
                    </div>
                 
                             <select class="form-control form-control-sm" id="mod_profesion_repre" name="mod_profesion_repre" required>

<option value="<?php echo $row_datos_plantilla_repre['id_profesion']; ?>" selected><?php echo $row_datos_plantilla_repre['nombre_profesion']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_profesion['id_profesion']; ?>"><?php echo $row_datos_profesion['nombre_profesion']; ?></option>

                                <?php } while ($row_datos_profesion = mysqli_fetch_assoc($datos_profesion)); ?> 


                              
                        </select>
                 
                 </div>


                             


                </div>





                <div class="form-row">

                                  
               <div class="input-group input-group-sm col-md-4 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-birthday-cake "></i><i>&nbsp;Fecha de Nac:</i></span>  
                  </div>
                    <input type="date" class="form-control importantex" id="mod_nacimiento_repre" name="mod_nacimiento_repre"
                     value="<?php echo $row_datos_representante['nacimiento_repre']; ?>" required>
                </div>


               <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-venus-mars "></i><i>&nbsp;Genero:</i></span>    
                    </div>
                 
                            <select class="form-control form-control-sm" id="mod_genero_repre" name="mod_genero_repre" required>

<option value="<?php echo $row_datos_plantilla_repre['id_sexo']; ?>" selected><?php echo $row_datos_plantilla_repre['nombre_sexo']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_sexo['id_sexo']; ?>"><?php echo $row_datos_sexo['nombre_sexo']; ?></option>

                                <?php } while ($row_datos_sexo = mysqli_fetch_assoc($datos_sexo)); ?> 


                              
                        </select>
                 
                 </div>


                 <div class="input-group input-group-sm col-md-5 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-at "></i></span>  
                  </div>
                    <input maxlength="39" type="email" class="form-control" placeholder="Correo Electrónico..." id="mod_email_repre" name="mod_email_repre"
value="<?php echo $row_datos_representante['email_repre']; ?>"> 
                </div>



                </div>  <!-- cierre row datos personales -->





<?php   // esto permite obtener los datos necesarios del representante y simplificar la busqueda

$id_dela_direccion = $row_datos_representante['id_direccion'];

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

mysqli_close($enlace);


 ?>












                <div class="form-row">  <!-- datos nivel de estudio -->

                  <div class="col-md-12 mt-4 mb-1">

                  <b class="text-info"> Dirección: </b>

            <?php 


          


                  if ($direcc_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Datos almacenados.\">".$direcc_success."</i>"; }
                ?>

                <?php 
                  if ($direcc_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Datos no almacenados.\">".$direcc_danger."</i>"; }
                ?>
                    <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->


                  </div>

                </div>




                <div class="form-row margencito">

                   <div class="input-group input-group-sm col-md-6 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-pin "></i><i>&nbsp; Ciudad:</i></span>    
                    </div>
                 
                            <select class="form-control form-control-sm" id="mod_ciudad" name="mod_ciudad" required>

<option value="<?php echo $row_datos_plantilla_direcc['id_ciudad']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_ciudad']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_ciudades['id_ciudad']; ?>"><?php echo $row_datos_ciudades['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudades = mysqli_fetch_assoc($datos_ciudades)); ?> 
                              
                        </select>
                 
                 </div>





                 <div class="input-group input-group-sm col-md-6 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="far fa-flag "></i><i>&nbsp;Municipio:</i></span>  
                    </div>
                 
                            <select class="form-control form-control-sm" id="mod_municipio" name="mod_municipio" required>

<option value="<?php echo $row_datos_plantilla_direcc['id_municipio']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_municipio']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_municipio['id_municipio']; ?>"><?php echo $row_datos_municipio['nombre_municipio']; ?></option>

                                <?php } while ($row_datos_municipio = mysqli_fetch_assoc($datos_municipio)); ?> 
                              
                        </select>
                 
                 </div>


                
          

                </div>   <!-- cierre form direccion1 row -->




                <div class="form-row">


                 <div class="input-group  input-group-sm col-md-6 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-arrow-circle-right "></i><i>&nbsp; Parroquia:</i></span>  
                    </div>
                 
                            <select class="form-control form-control-sm" id="mod_parroquia" name="mod_parroquia" required>

<option value="<?php echo $row_datos_plantilla_direcc['id_parroquia']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_parroquia']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_parroquias['id_parroquia']; ?>"><?php echo $row_datos_parroquias['nombre_parroquia']; ?></option>

                                <?php } while ($row_datos_parroquias = mysqli_fetch_assoc($datos_parroquias)); ?> 
                              
                        </select>
                 
                 </div>



                   <div class="input-group input-group-sm col-md-6 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-road "></i><i>&nbsp; Avenida:</i></span>  
                    </div>
                 
                            <select class="form-control form-control-sm" id="mod_avenida" name="mod_avenida" required>

<option value="<?php echo $row_datos_plantilla_direcc['id_avenida']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_av']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_avenidas['id_avenida']; ?>"><?php echo $row_datos_avenidas['nombre_av']; ?></option>

                                <?php } while ($row_datos_avenidas = mysqli_fetch_assoc($datos_avenidas)); ?> 
                              
                        </select>
                 
                 </div>


              </div> <!-- cierre 2do row direccion -->






              <div class="form-row">




                 <div class="input-group  input-group-sm col-md-12 mb-2">  
                  <div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1"><i>Calle, Zona, Sector ó Urbanización:</i></span>  
                  </div>
<input maxlength="59" type="text" class="form-control importantex" placeholder="ejemp: calle Bolívar ó sector Santa Ana ó Urbanización San Luis (Indicar solo uno)"

 id="mod_calle" name="mod_calle" value="<?php echo $row_datos_plantilla_direcc['dir_calle_sector']; ?>" required>

                </div>
         


                </div>   <!-- cierre form direccin 3 -->







<div class="form-row">


            <div class="input-group input-group-sm col-md-6 mb-2">

              <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fab fa-gg fa-lg"></i><i>&nbsp; Cód Post.</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_codigo" name="mod_codigo" required>

<option value="<?php echo $row_datos_plantilla_direcc['id_codigo']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_codigo']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_codigos['id_codigo']; ?>"><?php echo $row_datos_codigos['nombre_codigo']; ?></option>

                                <?php } while ($row_datos_codigos = mysqli_fetch_assoc($datos_codigos)); ?> 
                              
                        </select>
                 
                 </div>







                   <div class="input-group input-group-sm col-md-6 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-home "></i><i>&nbsp;Vive en:</i></span>  
                    </div>
                 
                            <select class="form-control form-control-sm" id="mod_vivienda" name="mod_vivienda" required>

<option value="<?php echo $row_datos_plantilla_direcc['id_vivienda']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_vivienda']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_viviendas['id_vivienda']; ?>"><?php echo $row_datos_viviendas['nombre_vivienda']; ?></option>

                                <?php } while ($row_datos_viviendas = mysqli_fetch_assoc($datos_viviendas)); ?> 
                              
                        </select>
                 
                 </div>


</div>


 <div class="form-row">


                 <div class="input-group input-group-sm col-md-6 mb-2">  
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">&nbsp;<i class="fab fa-xing "></i><i>&nbsp; Nombre de la vivienda:</i></span>  
                  </div>
                    <input maxlength="30" type="text" class="form-control importantex"  placeholder="Nombre de la vivienda..."

                     id="mod_nombre_vivienda" name="mod_nombre_vivienda" value="<?php echo $row_datos_plantilla_direcc['dir_nombre_vivienda']; ?>" required >
                </div>



                 <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="far fa-building "></i><i>&nbsp;Piso:</i></span>  
                    </div>
                 
                            <select class="form-control form-control-sm" id="mod_piso" name="mod_piso" required>

<option value="<?php echo $row_datos_plantilla_direcc['id_piso']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_piso']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_pisos['id_piso']; ?>"><?php echo $row_datos_pisos['nombre_piso']; ?></option>

                                <?php } while ($row_datos_pisos = mysqli_fetch_assoc($datos_pisos)); ?> 
                              
                        </select>
                 
                 </div>



                 <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-hashtag"></i><i>&nbsp;Número:</i></span>  
                    </div>
                 
                            <select class="form-control form-control-sm" id="mod_numero" name="mod_numero" required>

<option value="<?php echo $row_datos_plantilla_direcc['id_numero']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_numero']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_numeros['id_numero']; ?>"><?php echo $row_datos_numeros['nombre_numero']; ?></option>

                                <?php } while ($row_datos_numeros = mysqli_fetch_assoc($datos_numeros)); ?> 
                              
                        </select>
                 
                 </div>
          

</div>


<div class="form-row ">  


<div class="col-md-1">


<div data-toggle="tooltip" data-placement="right" title="Borrar foto personal y/o foto del Doc. de Id. recientemente cargados.">

<button type="button" class="ml-1 mt-2 btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#borrar_fotos_perKK">
 <i class="fas fa-trash-alt fa-lg"></i>
</button>

</div>

</div>




<div class="col-md-1">


<div data-toggle="tooltip" data-placement="right" title="Eliminar la foto personal guardada.">

<button type="button" class="ml-1 mt-2 btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#borrar_fotos_perPTT">
 <i class="fas fa-camera-retro fa-lg"></i>
</button>

</div>

</div>







<div class="col-md-1">


<div data-toggle="tooltip" data-placement="right" title="Eliminar la foto del Doc. de Id. guardada.">

<button type="button" class="ml-1 mt-2 btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#borrar_fotos_perPCC">
 <i class="far fa-id-card fa-lg"></i>
</button>

</div>

</div>










</div>






</div>
</div>


<div class="mx-auto col-md-6 mt-4">
<div class="form-row ">  



<button type="submit" name="actualizar_repre" class="mt-2 mb-2 btn btn-info btn-block">
 <i class="fas fa-cloud-upload-alt fa-lg"></i>&nbsp;&nbsp;Actualizar información del representante&nbsp;&nbsp;<i class="fas fa-cloud-upload-alt fa-lg"></i>
</button>



</div>
</div>







</form>

   




<!-- Modal -->
<div class="modal fade" id="borrar_fotos_perKK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
          <i class="fas fa-info fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Desea eliminar la foto personal y/o el Doc. de Id. recientemente cargados?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_nn_ff">  
        <button type="submit" name="borrar_nn_f" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!--   -- >







<!-- ini modal eliminar logo -->

<div class="modal fade" id="borrar_fotos_perPTT" tabindex="-1" role="dialog" aria-hidden="true">
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
        La foto personal que está actualmente guardada será eliminada. 
      </div>
      <div class="modal-footer">

  <form method="post" name="delete_uno"> 


    <input   type="hidden" id="id_del_repreX" name="id_del_repreX"
    value="<?php echo $row_datos_representante['id_repre']; ?>"> 


    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrar_uno" id="borrar_uno" class="btn btn-danger" >
          Eliminar</button>   <!-- coloco el id de la direccion ya que al estar en cascada con esto elimino el registro plantilla -->    

  </form>




      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->




<!-- ini modal eliminar logo -->

<div class="modal fade" id="borrar_fotos_perPCC" tabindex="-1" role="dialog" aria-hidden="true">
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
        La foto del Doc. de Id. que está actualmente guardada será eliminada. 
      </div>
      <div class="modal-footer">

  <form method="post" name="delete_dos"> 


    <input   type="hidden" id="id_del_repreX" name="id_del_repreX"
    value="<?php echo $row_datos_representante['id_repre']; ?>"> 


    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrar_dos" id="borrar_dos" class="btn btn-danger" >
          Eliminar</button>   <!-- coloco el id de la direccion ya que al estar en cascada con esto elimino el registro plantilla -->    

  </form>




      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->



      </div> <!-- cierre card body -->

    </div>  <!-- cierre card -->




<!-- representado 1 -->
<div class="col-md-12 mt-3 mb-2 content-box-gray rounded ">

<form method="POST" name="preinscribir" onsubmit="return validateForm()">   <!-- permite enviar  -->

 <?php include ("zona_adm_estudiante_pre_add.php"); ?>

</div> <!-- cierre border -->

<!-- termina ingreso 1 -->

<script type="text/javascript">

  function stripspaces(input)
{
  input.value = input.value.replace(/(^[\s]+|[\s]+$)/g, '');

  return true;
}


</script>



<input type="hidden" id="quien" name="quien" value="<?php echo $_SESSION['id']; ?>">

<input type="hidden" id="cedula_del_repre_es" name="cedula_del_repre_es" value="<?php echo $row_datos_representante['ci_repre']; ?>">


 <div class="mx-auto col-md-6 mt-4" <?php if ($mostrar ==0 && $bloquear ==1 ){?>style="display:none"<?php } ?> >
            <div class="form-row ">

            <button type="submit" name="registrar_alumno" class="btn btn-primary btn-block " id='btnReset'>
            <i class="far fa-hand-point-right fa-lg"></i>&nbsp;Pre-Inscribir&nbsp;<i class="far fa-hand-point-left fa-lg"></i> </button>

              </div>
</div>




<div class="form-row mt-2 mb-4" <?php if ($mostrar ==1 && $bloquear ==0 ){?>style="display:none"<?php } ?>>

            <div class="col-md-12">

             <a class="btn btn-primary btn-block" href="zona_adm_control.php" role="button"><i class="fas fa-chevron-circle-left fa-lg"></i> &nbsp; Regresar</a>


              </div>

 </div>





 <div class="form-row mt-2 ">  <!-- mensaje q aprece -->

                  <div class="content col-md-12 text-center mt-1" style="display:none">

                  <b class="text-danger"> <i class="far fa-clock fa-lg"></i>&nbsp;&nbsp;Procesando favor esperar!!! </b>

                  </div>

</div>


<script>

      $(document).ready(function() {
          setTimeout(function() {
              $(".content").hide();
          }, 0);                         // este numero dice que tan rapido lo esconde

          $('#btnReset').click(function() {
              $(".content").show();
              
              
              setTimeout(function() {
                  $(".content").fadeOut(1500);

              }, 3500);
              

          });
      });









      </script>



</div></div>

   <script type="text/javascript">
            $(document).ready(function(){
                 $("form").submit(function() {
                        $(this).submit(function() {
                            return false;
                        });
                        return true;
                    }); 
            }); 
            </script>

</form>


<!-- The Modal estudiante1-->

<div class="modal fade" tabindex="-1" id="cropImagePop_EA" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-primary">Centre dentro del margen, simulando una foto carnet y haga clic en "Continuar".</h5>
   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">       

            <div class="text-center">
              <div id="upload-demo_EA"></div>
            </div> 

            <div class="form-row mt-2">
            <div class="col-md-12"><h4 class="text-center text-info">Hacer uso de una foto clara y nítida.</h4>   </div>
          </div> 



<div class="form-row">
<div class="mx-auto col-md-12 mt-4">


 <button class="rotateRight col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateRight_EA" data-deg="90"><i class="fas fa-share fa-lg fa-flip-horizontal"></i> Girar</button>
  

          <button class="col-md-6 mt-2 ml-4 btn btn-success cropImageBtn_EA" id="cropImageBtn_EA">Recortar</button>

<button class="rotateLeft col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateLeft_EA" data-deg="-90">Girar <i class="fas fa-share fa-lg"></i></button>



</div> 
</div>





<div class="form-row ">  <!-- mensaje q aprece -->

           <div class="contentea1 mt-1 mb-1 col-md-12 text-center" style="display:none">

           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

           </div>


           

           <div class="contentea2 mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success"> <i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; para avanzar haga click en <b class="text-primary">"Continuar".</b>

          </div>






           </div>  <!-- cierre form-row -->








      </div>

      <div class="modal-footer">

        <form enctype="multipart/form-data" method="post" name="cargarfotoWW">
        
        <button type="submit" name="submit" class="btn btn-primary" id="cropImageBtn_EAA" disabled>Continuar</button>

         <button type="submit" class="btn btn-secondary" name="cancelAA">Cerrar</button>
        


        </form>

      </div>

    </div>
  </div>
</div>

<!-- cierre The Modal estudiante1 -->




<script type="text/javascript">


  $(document).ready(function() {  
      
         
          setTimeout(function() {
              $(".contentea1").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".contentea2").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          $('#cropImageBtn_EA').click(function() {
            this.disabled = true;
            $(".contentea1").show();
                          
              setTimeout(function() {
                  $(".contentea1").fadeOut(6500);
            
              }, 7500);
              

          });



      });


// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

            var $uploadCrop_EA,
            tempFilename_EA,
            rawImg_EA,
            imageId_EA;

            function readFile_EA(input) {


    var fileInput_EA = document.getElementById('file_photo_EA');
    var filePath_EA = fileInput_EA.value;
    var fileSize_EA = fileInput_EA.files[0].size;
    var allowedExtensions_EA = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_EA.exec(filePath_EA)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_EA.value = '';
        return false;  }

    if(fileSize_EA > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

              if (input.files && input.files[0]) {
                      var reader_EA = new FileReader();
                      reader_EA.onload = function (e) {
                  $('.upload-demo_EA').addClass('ready');
                  $('#cropImagePop_EA').modal('show');
                        rawImg_EA = e.target.result;
                      }
                      reader_EA.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

   }





            $uploadCrop_EA = $('#upload-demo_EA').croppie({
              viewport: {
                 width: 350,
                    height: 450,
                    type: 'square'
              },
              boundary: {
                    width: 450,
                    height: 550
                },
                enableExif: true,
                enableOrientation: true
            });


 $( "#rotateLeft_EA" ).click(function() {
            $uploadCrop_EA.croppie('rotate', parseInt($(this).data('deg')));
        });


   $( "#rotateRight_EA" ).click(function() {
            $uploadCrop_EA.croppie('rotate', parseInt($(this).data('deg')));
        });




            $('#cropImagePop_EA').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_EA.croppie('bind', {
                    url: rawImg_EA
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_EA').on('change', function () { imageId_EA = $(this).data('id'); tempFilename_EA = $(this).val();

            $('#cancelCropBtn_EA').data('id', imageId_EA); readFile_EA(this); });

            $('#cropImageBtn_EA').on('click', function (ev) {
              $uploadCrop_EA.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {
                
                $.ajax({ 
                    url:"../0 Croppie/foto_estud_new_pre.php?namexx=<?php echo $nnn['ci']; ?>&idexx=<?php echo $el_propio_id; ?>",
                    type: "POST",
                    data:{"imageA": response},
                    success:function(data)
                    {                  

                  $('#uploaded_image_EA').html(data);

                     $(".contentea1").hide();

                    $(".contentea2").show();

                    document.getElementById("cropImageBtn_EAA").disabled = false;

                    }
                  });
                        
                 })

            });




        // End upload preview image



</script>     








<!-- Modal -->
<div class="modal fade" id="borrar_fotos_AA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
          <i class="fas fa-info fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Desea eliminar la foto y/o documento del representado, previamente cargada?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_nn_aa">  
        <button type="submit" name="borrar_nn_aaa" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!--   -- >



  
<!-- The Modal ci estudiante act1-->
<div class="modal fade" tabindex="-1" id="cropImagePop_B_act1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Centre el documento de identidad dentro del margen y haga clic en "Recortar".</h5>
      </div>
      <div class="modal-body">       

            <div class="text-center">
              <div id="upload-demo_B_act1"></div>
            </div>

            <div class="form-row">
              <div class="mx-auto col-md-12 mt-4">
   <button class="rotateRight col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateRightB_act1" data-deg="90"><i class="fas fa-share fa-lg fa-flip-horizontal"></i> Girar</button>
   <button class="col-md-6 mt-2 ml-4 btn btn-success cropImageBtn_B_act1" id="cropImageBtn_B_act1">Recortar</button> 
   <button class="rotateLeft col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateLeftB_act1" data-deg="-90">Girar <i class="fas fa-share fa-lg"></i></button>
              </div> 
            </div>

            <div class="form-row ">  <!-- mensaje q aprece -->

              <div class="contentc1_act1 mt-1 mb-1 col-md-12 text-center" style="display:none">
              <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>
              </div>           

              <div class="contentc2_act1 mt-1 mb-1 col-md-12 text-center" style="display:none">
<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Continuar"</b>; al finalizar hacer clic en <b class="text-info">"Pre-Inscribir"</b>.
              </div>

            </div>  <!-- cierre form-row mensaje q aparece -->

      </div>  <!-- cierre div modal body -->

      <div class="modal-footer">
        <form enctype="multipart/form-data" method="post" name="ci_act1">       
        <button type="submit" name="submit_ci_act1" class="btn btn-primary" id="cropImageBtn_BB_act1" disabled>Continuar</button>           
        <button type="submit" class="btn btn-secondary" name="cancelYY_act1">Cerrar</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- cierre The Modal ci est act1-->




<script type="text/javascript">


$(document).ready(function() {    

           setTimeout(function() {
              $(".contentc1_act1").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".contentc2_act1").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          $('#cropImageBtn_B_act1').click(function() {
            this.disabled = true;
            $(".contentc1_act1").show();
                          
              setTimeout(function() {
                  $(".contentc1_act1").fadeOut(6500);
            
              }, 7500);
              

          });



      });

        // End upload preview image
// Start upload preview image
// $(".imagen_default_B").attr("src", "../zz_fotos_p/ZZvacio2.jpg");   // ../zz_fotos_p/02vacio.jpg

          var $uploadCrop_B_act1,
            tempFilename_B_act1,
            rawImg_B_act1,
            imageId_B_act1;

            function readFile_B_act1(input) {

 var fileInput_B_act1 = document.getElementById('file_photo_B_act1');
    var filePath_B_act1 = fileInput_B_act1.value;
    var fileSize_B_act1 = fileInput_B_act1.files[0].size;
    var allowedExtensions_B_act1 = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_B_act1.exec(filePath_B_act1)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_B_act1.value = '';
        return false;  }

    if(fileSize_B_act1 > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }

else { 
              if (input.files && input.files[0]) {
                      var reader_B_act1 = new FileReader();
                      reader_B_act1.onload = function (e) {
                  $('.upload-demo_B_act1').addClass('ready');
                  $('#cropImagePop_B_act1').modal('show');
                        rawImg_B_act1 = e.target.result;
                      }
                      reader_B_act1.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

  }

            $uploadCrop_B_act1 = $('#upload-demo_B_act1').croppie({
              viewport: {
                 width: 600,
                    height: 450,
                    type: 'square'
              },
              boundary: {
                    width: 725,
                    height: 575
                },
                enableExif: true,
                enableOrientation: true
            });


$( "#rotateLeftB_act1" ).click(function() {
            $uploadCrop_B_act1.croppie('rotate', parseInt($(this).data('deg')));
        });

   $( "#rotateRightB_act1" ).click(function() {
            $uploadCrop_B_act1.croppie('rotate', parseInt($(this).data('deg')));
        });


            $('#cropImagePop_B_act1').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_B_act1.croppie('bind', {
                    url: rawImg_B_act1
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_B_act1').on('change', function () { imageId_B_act1 = $(this).data('id'); tempFilename_B_act1 = $(this).val();

            $('#cancelCropBtn_B_act1').data('id', imageId_B_act1); readFile_B_act1(this); });

            $('#cropImageBtn_B_act1').on('click', function (ev) {
              $uploadCrop_B_act1.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {

                $.ajax({
                    url:"../0 Croppie/upload_ci_es_act1.php?namexx=<?php echo $nnn['ci']; ?>",
                    type: "POST",
                    data:{"image2": response},
                    success:function(data)
                    {           

             $('#uploaded_image_B_act1').html(data);

                    $(".contentc1_act1").hide();

                    $(".contentc2_act1").show();

                    document.getElementById("cropImageBtn_BB_act1").disabled = false;    
                      
                    }
                  });
                        
                 })

            });
        // End upload preview image


</script> 






  </div>   <!-- cierre container fluid -->
</div>  <!-- cierre wrapper -->












<?php include ("Footer.php"); ?>
