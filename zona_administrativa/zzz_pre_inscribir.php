<?php

//error_reporting(0);

include("identificador.php");

$fotPP = $nnn['ci_repre'];

$alerta_principal  = "0";

 $foto_success = "";
  $foto_danger = "";

  $ci_success = "";
  $ci_danger = "";

  $datos_success = "";
  $datos_danger = "";

$direcc_success = "";
$direcc_danger = "";


$id_del_repre =  $nnn['id_repre'];


$number_alum = $_GET['num_alum'];


    if($number_alum == '1' )
        /* me permite tener visible el 1  */
    {
        $gdiv1 = "display:show";
        $gdiv2 = "display:none";
        $gdiv3 = "display:none";
        $gdiv4 = "display:none";
        $gdiv5 = "display:none";


        $requerido2 = "" ;
        $requerido3 = "" ;
        $requerido4 = "" ;
        $requerido5 = "" ; 
    }


    if($number_alum == '2' )
        /* me permite tener visible el 1 y el 2 */
    {
        $gdiv1 = "display:show";
        $gdiv2 = "display:show";
        $gdiv3 = "display:none";
        $gdiv4 = "display:none";
        $gdiv5 = "display:none";

        $requerido2 = "required" ;
        $requerido3 = "" ;
        $requerido4 = "" ;
        $requerido5 = "" ;
    }


    if($number_alum == '3' )
        /* me permite tener visible del 1 al 3 */
    {
        $gdiv1 = "display:show";
        $gdiv2 = "display:show";
        $gdiv3 = "display:show";
        $gdiv4 = "display:none";
        $gdiv5 = "display:none";


        $requerido2 = "required" ;
        $requerido3 = "required" ;
        $requerido4 = "" ;
        $requerido5 = "" ; 
    }


    if($number_alum == '4' )
        /* me permite tener visible del 1 al 4 */
    {
        $gdiv1 = "display:show";
        $gdiv2 = "display:show";
        $gdiv3 = "display:show";
        $gdiv4 = "display:show";
        $gdiv5 = "display:none"; 


        $requerido2 = "required" ;
        $requerido3 = "required" ;
        $requerido4 = "required" ;
        $requerido5 = "" ; 
    }


    if($number_alum == '5' )
        /* me permite tener visible del 1 al 5 */
    {
        $gdiv1 = "display:show";
        $gdiv2 = "display:show";
        $gdiv3 = "display:show";
        $gdiv4 = "display:show";
        $gdiv5 = "display:show"; 


        $requerido2 = "required" ;
        $requerido3 = "required" ;
        $requerido4 = "required" ;
        $requerido5 = "required" ; 
    }


$alerta_principal  = "0";
//****    

    $datosES1_success="";
    $datosES1_danger="";
      $datosES2_success="";
      $datosES2_danger="";  
    $datosES3_success="";
    $datosES3_danger="";  
      $datosES4_success="";
      $datosES4_danger="";  
    $datosES5_success="";
    $datosES5_danger="";  

$datosES1_repre_success="";
$datosES1_repre_danger="";
  $datosES2_repre_success="";
  $datosES2_repre_danger="";
$datosES3_repre_success="";
$datosES3_repre_danger="";
  $datosES4_repre_success="";
  $datosES4_repre_danger="";
$datosES5_repre_success="";
$datosES5_repre_danger="";

    $procede_success1="";
    $procede_danger1="";
      $procede_success2="";
      $procede_danger2="";
    $procede_success3="";
    $procede_danger3="";
      $procede_success4="";
      $procede_danger4="";
    $procede_success5="";
    $procede_danger5="";

    $actua_success1="";
    $actua_danger1="";
      $actua_success2="";
      $actua_danger2="";
    $actua_success3="";
    $actua_danger3="";
      $actua_success4="";
      $actua_danger4="";
    $actua_success5="";
    $actua_danger5="";

     $obs_success1='';
     $obs_danger1='';
       $obs_success2='';
       $obs_danger2='';
     $obs_success3='';
     $obs_danger3='';
       $obs_success4='';
       $obs_danger4='';
     $obs_success5='';
     $obs_danger5='';

    $quien_success="";
    $quien_danger="";
    
// referente al cargo de foto y cedula representante...

    $ci_info ="1";
    $foto_info="1";

    $foto_estu1_info="1";
    $foto_estu2_info="1";
    $foto_estu3_info="1";
    $foto_estu4_info="1";
    $foto_estu5_info="1";    
   
   $foto_successA="";
    $foto_dangerA="";

   $foto_successB="";
    $foto_dangerB="";

   $foto_successC="";
    $foto_dangerC="";

   $foto_successD="";
    $foto_dangerD="";

   $foto_successE="";
    $foto_dangerE="";

$act_hist_ES1_success="";
$act_hist_ES1_danger="";
$act_hist_ES2_success="";
$act_hist_ES2_danger="";
$act_hist_ES3_success="";
$act_hist_ES3_danger="";
$act_hist_ES4_success="";
$act_hist_ES4_danger="";
$act_hist_ES5_success="";
$act_hist_ES5_danger="";


//error_reporting(0);

include("../conectar.php");
include("listas_php/00_lista_inicial_repre.php");     // enlista los resultados de la tarjetas del menu incio
mysqli_close($enlace);  



$enviado=""; // me dice si  probablemente se envio o no el email
$sms="";




$filenameAA = '../000 Temporales/fotorepre' .$fotPP. '.png';
$filenameCC = '../000 Temporales/ci_repre' .$fotPP. '.png';







?>



<?php include ("Header.php"); ?>


<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("consultas_mod/query_repre.php"); ?>  <!-- hace los queries necesarios para los select del formulario -->




<?php


if ($alerta_principal  == "0") {


  if (!file_exists($filenameAA ) && !file_exists($filenameCC ) ) { 

 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  title: "",
  text: "Si dispone de la(s) foto(s) de su(s) representado(s), cárguelos en el sistema antes de llenar el formulario.",
  icon: "",
});';
  echo '}, 3000);</script>';  

   }

} 

?>








<div class="content-wrapper">
<div class="container-fluid">

               


<div class="form-row">  


          <div class="col-md-3 col-lg-3 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i class="fas fa-user fa-lg "></i><i>&nbsp; &nbsp;<b>Pre-Inscribir:</b> </i></div> 

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

<img  src="../000 Temporales/fotorepre<?php echo $fotPP;?>.png?nocache=<?php echo time(); ?>"

         class="fotologuitocol img-responsive img-thumbnail" style=" max-height: 214px; padding-bottom: 5px;"

          id=""  onerror="this.onerror=null;this.src='<?php echo $row_datos_representante['foto_repre'];?>';"/> 

</div>





<div <?php if ($ver==1){?>style="display:none"<?php } ?> >

<img  src="../000 Temporales/fotorepre<?php echo $fotPP;?>.png?nocache=<?php echo time(); ?>"

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

<img  src="../000 Temporales/ci_repre<?php echo $fotPP;?>.png?nocache=<?php echo time(); ?>"

         class="img-thumbnail" style=" max-height: 170px; padding-bottom: 5px;"

          id=""  onerror="this.onerror=null;this.src='<?php echo $row_datos_representante['foto_ci_repre'];?>';"/> 

</div>





<div <?php if ($ver_ci==1){?>style="display:none"<?php } ?> >

<img  src="../000 Temporales/ci_repre<?php echo $fotPP;?>.png?nocache=<?php echo time(); ?>"

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
        <h5 class="modal-title text-primary">Centre dentro del margen, simulando una foto carnet y haga clic en guardar.</h5>  

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

            

      </div>

      <div class="modal-footer">

        <form enctype="multipart/form-data" method="post" name="cargarfotoWW">
        
        <button type="submit" name="submit" class="btn btn-primary" id="cropImageBtn_A">Guardar</button>

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
        <h5 class="modal-title text-primary">Centre el documento de identidad dentro del margen y haga clic en guardar.</h5>
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

      </div>

      <div class="modal-footer">

        <form enctype="multipart/form-data" method="post">
        
        <button type="submit" name="submit" class="btn btn-primary" id="cropImageBtn_B">Guardar</button>
           
        <button type="submit" class="btn btn-secondary" name="cancelYY">Cerrar</button>


        </form>

      </div>

    </div>
  </div>
</div>

<!-- cierre The Modal -->




<script type="text/javascript">


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
                enableExif: true
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
                    url:"../0 Croppie/upload_fot_repre_temp.php?namexx=<?php echo $nnn['ci_repre']; ?>",
                    type: "POST",
                    data:{"image": response},
                    success:function(data)
                    {                  

                   setTimeout(function() {
                          $("#uploaded_image_A").fadeOut(1500); 
                          
                          $('#cropImagePop_A').modal('hide');                     

                    $('#uploaded_image_A').html(data);

                      }, 3500);

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
                enableExif: true
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
                    url:"../0 Croppie/upload_ci_repre_temp.php?namexx=<?php echo $nnn['ci_repre']; ?>",
                    type: "POST",
                    data:{"image2": response},
                    success:function(data)
                    {

                    
                       setTimeout(function() {
                          $("#uploaded_image_B").fadeOut(1500); 

                          $('#cropImagePop_B').modal('hide');                     

                    $('#uploaded_image_B').html(data);

                      }, 3500);


                      
                    }
                  });
                        
                 })

            });
        // End upload preview image



</script>     


















        <div class="col-md-10">





          
          <div class="form-row">  <!-- datos nivel de estudio -->

                  <div class="col-md-12 mt-2 mb-1">

                  <b class="text-info"> Datos Personales: </b>

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


                

<form method="POST" name="actualizar_repre">   <!-- permite enviar  -->



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
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-briefcase "></i><i>&nbsp; Profesión:</i></span>  
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
<input  type="text" class="form-control importantex" placeholder="ejemp: calle Bolívar ó sector Santa Ana ó Urbanización San Luis (Indicar solo uno)"

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
                    <input maxlength="149" type="text" class="form-control importantex"  placeholder="Nombre de la vivienda..."

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


<div class="col-md-12 mt-4">
<div class="form-row ">  



<button type="submit" name="actualizar_repre" class="mt-2 mb-2 btn btn-info btn-block">
 <i class="fas fa-cloud-upload-alt fa-lg"></i>&nbsp;&nbsp;Guardar Cambios
</button>



</div>
</div>




<div class="col-md-12 mt-4">
<div class="form-row ">  


<p class="text-secondary">Si tras pulsar el botón de <b>"Guardar"</b> para las fotos o <b>"Guardar Cambios"</b> 
para los datos, no aprecia la nueva imagen o los cambios realizados, pulse la tecla <b>"F5"</b> o refresque la página web; Algunos clientes de internet, tardan en detectar los cambios.</p>



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




<!-- representado 1 -->
<div class="col-md-12 mt-3 mb-4 content-box-gray rounded ">

 <?php include ("zona_adm_estudiante_ins_1.php"); ?>

</div> <!-- cierre border -->

<!-- termina ingreso 1 -->




<!-- The Modal estudiante1-->

<div class="modal fade" tabindex="-1" id="cropImagePop_EA" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-primary">Centre dentro del margen, simulando una foto carnet y haga clic en guardar.</h5>
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

      </div>

      <div class="modal-footer">

        <form enctype="multipart/form-data" method="post" name="cargarfotoWW">
        
        <button type="submit" name="submit" class="btn btn-primary" id="cropImageBtn_EA">Guardar</button>

         <button type="submit" class="btn btn-secondary" name="cancelAA">Cerrar</button>
        


        </form>

      </div>

    </div>
  </div>
</div>

<!-- cierre The Modal estudiante1 -->




<script type="text/javascript">

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
                enableExif: true
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
                    url:"../0 Croppie/upload_fot_estud1.php?namexx=<?php echo $nnn['ci']; ?>",
                    type: "POST",
                    data:{"imageA": response},
                    success:function(data)
                    {                  

                   setTimeout(function() {
                          $("#uploaded_image_EA").fadeOut(1500);  
                          
                          $('#cropImagePop_EA').modal('hide');                      

                    $('#uploaded_image_EA').html(data);

                      }, 3500);

                    }
                  });
                        
                 })

            });




        // End upload preview image



</script>     







</div> <!-- cierre col md 12 -->
</div> <!-- cierre form-row -->






                           

</div>   <!-- cierre container fluid -->
</div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
