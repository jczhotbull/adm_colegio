<?php



include("identificador.php");

// header('Cache-Control: max-age=900');





$el_id = $_SESSION['id'];

$update =$_GET['update'];


 $division = $_GET['division'];

 $marca = $_GET['marca'];

  $gradito = $_GET['grado'];



$edit = $_GET['edit'];


$file_AdjN = '';



$resultadoconex= "5";



 $conexion = @fsockopen("www.google.com", 80, $errno, $errstr, 30); 
          if (!$conexion) { 
      
          $resultadoconex= "0";
          }

           else { 
          $resultadoconex= "1";
          fclose($conexion); 
          } 





 if(isset($_POST['editar_selecc']))
        {


 include("consultas_mod/chequeo_repre_email_mod.php");   // chequea que lo introducido este bien.





if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }

else { 

include ("../conectar.php");


 include("plantilla_repre_mail_update.php");   // procesa los datos

 }


}  // cierre de modificar datos del repre y del estudiante



include("../conectar.php");


 include("listas_php/00_lista_canal_email_b.php");     // enlista los resultados de la tarjetas del menu incio


mysqli_close($enlace);  


include("../conectar.php");

  include("listas_php/00_lista_canal_email_enumerar.php");     // enlista los resultados de la tarjetas del menu incio

mysqli_close($enlace);  


$guardado = '0';


if(isset($_POST['save_email_all']))
{



$update ='1';

$marca ='0';

$guardado = '1';


if($_FILES['archivo']['name']!='')
{

       if ($_FILES['archivo']["error"] > 0)
        {
      $errorZ.="- " . $_FILES['archivo']['error'] . " ";
        }

      else
        {
       /* echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
        echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
        echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
        echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];  */
         /*ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos*/

      $file_AdjN = "".$el_id."__".$_FILES['archivo']['name']."";
      move_uploaded_file($_FILES['archivo']['tmp_name'],

      "zzz_files/".$el_id."__" . $_FILES['archivo']['name']);


      $exitoZ .= " &nbsp; Archivo &nbsp;<b>** ".$file_AdjN." **</b>&nbsp; cargado correctamente. &nbsp;"; 



          
      }

}



else {

  include("../conectar.php");

      $nombre_userE = "SELECT id, file_b FROM usuarios WHERE id = ' ".$_SESSION['id']." ' ";        

          $resultCUUE = mysqli_query($enlace,$nombre_userE);
          $nnnCUUE=mysqli_fetch_array($resultCUUE);                /* antes en select tenia nombres */ 

mysqli_close($enlace); 

$file_AdjN = $nnnCUUE['file_b'];

}




include("../conectar.php");


  $sql = "UPDATE usuarios SET asunto_b = '$_POST[asunto]', contenido_b = '".mysqli_real_escape_string($enlace,$_POST['editordata'])."', firma = '$_POST[firma]', file_b = '$file_AdjN'
                                        
                                        WHERE id='$el_id' LIMIT 1 ";

                       
                  if (!mysqli_query($enlace,$sql))      // actualiza y si no ha logrado ingresar los datos
                         {
                          $errorZ="- Error al registrar, contactar al Ing. ";
                          mysqli_close($enlace);
                        
                          }

                   else{

                          $exitoZ .= " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b>Asunto y contenido, han sido guardados. </b>";  
                          mysqli_close($enlace);   

                      }

// header("Refresh:0");
}





if(isset($_POST['delete_file']))
{



include("../conectar.php");

      $nombre_userE = "SELECT id, file_b FROM usuarios WHERE id = ' ".$_SESSION['id']." ' ";        

          $resultCUUE = mysqli_query($enlace,$nombre_userE);
          $nnnCUUE=mysqli_fetch_array($resultCUUE);                /* antes en select tenia nombres */ 

mysqli_close($enlace); 

$el_archivo = $nnnCUUE['file_b'];


$filenameZZ = "zzz_files/".$el_archivo."";


if (file_exists($filenameZZ)) { 

unlink($filenameZZ);


include("../conectar.php");


  $sql = "UPDATE usuarios SET file_b = ''
                                        
                                        WHERE id='$el_id' LIMIT 1 ";

                       
                  if (!mysqli_query($enlace,$sql))      // actualiza y si no ha logrado ingresar los datos
                         {
                          $errorZ="- Error al borrar, contactar al Ing. ";
                          mysqli_close($enlace);
                        
                          }

                   else{


                          $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b>Archivo borrado. </b>"; 
                          mysqli_close($enlace);   

                      }

// header("Refresh:0");
}

}








if(isset($_POST['vaciar']))
{


$update ='0';

$marca ='0';





include("../conectar.php");

      $nombre_userE = "SELECT id, file_b FROM usuarios WHERE id = ' ".$_SESSION['id']." ' ";        

          $resultCUUE = mysqli_query($enlace,$nombre_userE);
          $nnnCUUE=mysqli_fetch_array($resultCUUE);                /* antes en select tenia nombres */ 

mysqli_close($enlace); 

$el_archivo = $nnnCUUE['file_b'];




 if (!empty( $el_archivo )) {

$filenameZZ = "zzz_files/".$el_archivo."";

unlink($filenameZZ);

  }







include("../conectar.php");


  $sql = "UPDATE usuarios SET contenido_b = '', file_b = ''
                                        
                                        WHERE id='$el_id' LIMIT 1 ";

                       
                  if (!mysqli_query($enlace,$sql))      // actualiza y si no ha logrado ingresar los datos
                         {
                          $errorZ="- Error al registrar, contactar al Ing. ";
                          mysqli_close($enlace);
                        
                          }

                   else{

                          $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b>El contenido del correo, ha sido borrado. </b>"; 
                          mysqli_close($enlace);   

                      }

// header("Refresh:0");
}











?>



<?php include ("Header.php"); ?>
<div class="se-pre-con"></div>

      

<?php


if ($resultadoconex==0) {


 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  
  

type: "error",
  title: "Oops; Imposible enviar emails...",
  text: "Sin Internet - Intente más tarde!!!",
 
  confirmButtonColor: "#ff3333",
  allowOutsideClick: false,
  animation: true
})


;';
  echo '}, 600);</script>';  


} 

?>


<div class="content-wrapper">
  <div class="container-fluid">

    <div class="form-row">  


          <div class="col-md-6 col-lg-4 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i><b>Redactar Email a los Representantes:</b> </i></div> 

          </div> 


          <div class="col-md-6 col-lg-8 mb-2">
          

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

<div class="col-md-6">


<div class="card">
  <div class="card-body">
   

<form method="POST" enctype="multipart/form-data">

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-stream fa-lg"></i>&nbsp Asunto:</span>  
      </div>


      <?php
include("../conectar.php");

      $nombre_user = "SELECT id, asunto_b, contenido_b, firma, file_b FROM usuarios WHERE id = ' ".$_SESSION['id']." ' ";        

          $resultCUU = mysqli_query($enlace,$nombre_user);
          $nnnCUU=mysqli_fetch_array($resultCUU);                /* antes en select tenia nombres */ 

mysqli_close($enlace); 


       ?>
   
              <select class="form-control" id="asunto" name="asunto" required>

                <option value="<?php echo $nnnCUU['asunto_b']; ?>" selected><?php echo $nnnCUU['asunto_b']; ?></option>

               
                <option disabled></option>

                <option>Aviso</option>
                <option>Caso Medico</option>
                <option>Cita Programada</option>
                <option>Contactarnos Cuanto Antes</option>
                <option>Documento Faltante</option>
                <option>De Interes</option>
                <option>Importante</option>
                <option>Nota de Cobro</option>
                <option>Noticia</option>
                <option>Pago No Procesado</option>
                <option>Pago Nomina</option>
                <option>Recordatorio</option>
                <option>Recibo de Pago</option>
                <option>Saludo Cordial</option>
                <option>Urgente</option>
          </select>
   
    </div>




    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-signature"></i>&nbsp Firma:</span>  
      </div>


   
              <select class="form-control" id="firma" name="firma" required>

                <option value="<?php echo $nnnCUU['firma']; ?>" selected><?php echo $nnnCUU['firma']; ?></option>

               
                <option disabled></option>                
                
                <option>Control de Estudios</option>
                <option>Dirección del Plantel</option>
                <option>Dpto. de Administración</option>
                <option>Dpto. de Evaluación</option>
               
          </select>
   
    </div>




 <?php

$show_a = '0';

 if ($nnnCUU['file_b'] !='') {     // detecta si hay un archivo cargado

                      $file_Adj = $nnnCUU['file_b'];
                      $show_a = '2';

                      }

                      else {

                        $file_Adj = '';

                      }

?>   



 


<div <?php if ($file_Adj !=''){?>style="display:none"<?php } ?>    >

<!-- <form   method="post" enctype="multipart/form-data"> 
    <input  type="submit" name="submitFile" style="display:none" id="submit">
    <input type="file" name="archivo" id="archivo" style="display:none"  onchange="document.getElementById('submit').click()">
</form>  -->

            <input type="file" name="archivo" id="archivo"></input>

</div>



<div <?php if ($show_a !='2'){?>style="display:none"<?php } ?>    >
 
<div class="form-row">

  <div class="col-md-11">
  Archivo cargado: <b><?php echo " ".$file_Adj." " ?></b>
  </div>

  <div class="col-md-1" data-toggle="tooltip" data-placement="top"  title="Borrar Archivo" >
  <button type="submit" name="delete_file" class="btn btn-outline-danger btn-sm" ><i class="fas fa-trash-alt"></i></button>
</div>

</div>

</div>   


<div style="margin-bottom: 15px;"></div>




   
    <script src="00_WYSIWYG/popper.min.js"></script>
    <script src="00_WYSIWYG/bootstrap.min.js"></script>
    <link href="00_WYSIWYG/summernote-bs4.css" rel="stylesheet">
    <script src="00_WYSIWYG/summernote-bs4.js"></script>


<script src="00_WYSIWYG/summernote-es-ES.js"></script>


     <textarea id="summernote" name="editordata"><?php echo $nnnCUU['contenido_b']; ?></textarea>

     <span id="total-caracteres">0</span> Caracteres de 2000 permitidos.
     

    <script>


      $('#summernote').summernote({       

        lang: 'es-ES',
        placeholder: '',
        tabsize: 2,
        height: 450,

        styleTags: ['p', 'h1', 'h2', 'h3', 'h4'],



         toolbar: [
    // [groupName, [list of button]]

  
    ['style', ['style']],
     ['color', ['color']],
    ['style', ['bold', 'italic', 'underline']],
    
   
     ['para', ['ul', 'ol']],
      ['font', ['strikethrough', 'superscript', 'subscript']],
       ['table', ['table']]


      
  ]
      });



      //Contador de Caracteres para summernote
$(".note-editable").on("keypress", function(){
  var limiteCaracteres = 2000;
  var caracteres = $(this).text();
  var totalCaracteres = caracteres.length;

  //Update Count value
  $("#total-caracteres").text(totalCaracteres);

  //Check and Limit Charaters
  if(totalCaracteres >= limiteCaracteres){
    return false;
  }
});
    </script>
    








<div class="mt-3">



  <button type="submit" name="save_email_all" class="btn btn-primary" id='btnReset'  <?php if ($guardado=='1' or $edit=='1'){?>style="display:none"<?php } ?> >
  <i class="fas fa-save fa-lg"></i> &nbsp Guardar - Asunto y/o Contenido</button>


<!--
<form  method="post" name="adjuntar" enctype="multipart/form-data">

    <button type="submit" name="adjuntar" class="btn btn-secondary" >
  <i class="fas fa-paperclip fa-lg"></i> &nbsp Adjuntar - Archivo</button>

</form>  -->



  <button type="submit" name="vaciar" class="btn btn-danger" id=''  <?php if ($guardado=='1' or $edit=='1'){?>style="display:none"<?php } ?> >
  <i class="fas fa-trash-alt"></i> Borrar Contenido</button>



  <a  type="button" class="btn btn-success" href="zona_email_b.php?division=9&marca=0&update=0&grado=51&edit=0"  
   <?php if ($guardado=='0' && $edit=='0'){?>style="display:none"<?php } ?> >
  <i class="fas fa-edit"></i> Editar Contenido</a>



</div>





</form>








<script type="text/javascript">


var javaScriptVar = "<?php echo $guardado; ?>";

if(javaScriptVar == '1'){
  $('#summernote').summernote('disable');
};


var javaScriptVar1 = "<?php echo $edit; ?>";

if(javaScriptVar1 == '1'){
  $('#summernote').summernote('disable');
};



  
var uploadField = document.getElementById("archivo");

uploadField.onchange = function() {
    if(this.files[0].size > 250000){


let timerInterval
swal({
  title: 'Archivo muy grande!',
  html: 'Cargue un archivo menor a 250 Kbs.',
  timer: 3000,
  onOpen: () => {
    swal.showLoading()
    timerInterval = setInterval(() => {
      swal.getContent().querySelector('strong')
        .textContent = swal.getTimerLeft()
    }, 100)
  },
  onClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  if (
    // Read more about handling dismissals
    result.dismiss === swal.DismissReason.timer
  ) {
    console.log('I was closed by the timer')
  }
})

       



       this.value = "";
    };
};



</script>








  
  </div>
</div>


<div class="" <?php if ($update=='0'){?>style="display:none"<?php } ?> >




<div class="card mt-4 mb-4">
  <div class="card-body">

    <h5 class="card-title">Seleccionar:</h5>


     <div class="form-row">

<div class="col-md-6">

<div class="text-dark" <?php if ($totma===0) {?>style="display:none"<?php } ?> ><b>Maternal - Seccción:</b></div>

    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=52&edit=1" class="btn relleno-lila mb-4 letrab"  role="button"
      
      <?php if ($totalRows_ma===0){?>style="display:none"<?php } ?>  >" A "</a> 

    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=52&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
     <?php if ($totalRows_mb===0){?>style="display:none"<?php } ?> >" B "</a>

    <a href="zona_email_b.php?division=11&marca=1&update=1&grado=52&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
     <?php if ($totalRows_mc===0){?>style="display:none"<?php } ?> >" C "</a>

    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=52&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
     <?php if ($totalRows_md===0){?>style="display:none"<?php } ?> >" D "</a>

    <a href="zona_email_b.php?division=13&marca=1&update=1&grado=52&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
     <?php if ($totalRows_me===0){?>style="display:none"<?php } ?> >" E "</a>

    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=52&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
     <?php if ($totalRows_mf===0){?>style="display:none"<?php } ?> >" F "</a>

    <a href="zona_email_b.php?division=15&marca=1&update=1&grado=52&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
     <?php if ($totalRows_mg===0){?>style="display:none"<?php } ?> >" G "</a>

      <a href="zona_email_b.php?division=9&marca=1&update=1&grado=52&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
      <?php if ($totalRows_mu===0){?>style="display:none"<?php } ?> >" U "</a>

</div>

<div class="col-md-6">
</div>

   </div>  <!-- cierre form row -->




    <div class="form-row">

<div class="col-md-6">

<div class="text-dark" <?php if ($totp1===0) {?>style="display:none"<?php } ?> ><b>Pre-E. 1er Niv. - Sección:</b></div>

    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=54&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
    <?php if ($totalRows_p1a===0){?>style="display:none"<?php } ?> >" A "</a>

    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=54&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
    <?php if ($totalRows_p1b===0){?>style="display:none"<?php } ?> >" B "</a>

        <a href="zona_email_b.php?division=11&marca=1&update=1&grado=54&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
    <?php if ($totalRows_p1c===0){?>style="display:none"<?php } ?> >" C "</a>

    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=54&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
    <?php if ($totalRows_p1d===0){?>style="display:none"<?php } ?> >" D "</a>

        <a href="zona_email_b.php?division=13&marca=1&update=1&grado=54&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
    <?php if ($totalRows_p1e===0){?>style="display:none"<?php } ?> >" E "</a>

    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=54&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
    <?php if ($totalRows_p1f===0){?>style="display:none"<?php } ?> >" F "</a>


        <a href="zona_email_b.php?division=15&marca=1&update=1&grado=54&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
    <?php if ($totalRows_p1g===0){?>style="display:none"<?php } ?> >" G "</a>


     <span <?php if ($division!='9' OR $gradito!='54' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
      <a href="zona_email_b.php?division=9&marca=1&update=1&grado=54&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
     <?php if ($totalRows_p1u===0){?>style="display:none"<?php } ?> >" U "</a>








<div class="text-dark" <?php if ($totp2===0) {?>style="display:none"<?php } ?> ><b>Pre-E. 2do Niv. - Sección:</b></div>

    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=55&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
    <?php if ($totalRows_p3a===0){?>style="display:none"<?php } ?> >" A "</a>

    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=55&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
    <?php if ($totalRows_p3b===0){?>style="display:none"<?php } ?> >" B "</a>

    <a href="zona_email_b.php?division=11&marca=1&update=1&grado=55&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
    <?php if ($totalRows_p3c===0){?>style="display:none"<?php } ?> >" C "</a>

    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=55&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
    <?php if ($totalRows_p3d===0){?>style="display:none"<?php } ?> >" D "</a>


<a href="zona_email_b.php?division=1&marca=13&update=1&grado=55&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
    <?php if ($totalRows_p3e===0){?>style="display:none"<?php } ?> >" E "</a>

    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=55&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
    <?php if ($totalRows_p3f===0){?>style="display:none"<?php } ?> >" F "</a>

     <a href="zona_email_b.php?division=15&marca=1&update=1&grado=55&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
    <?php if ($totalRows_p3g===0){?>style="display:none"<?php } ?> >" G "</a>


 <span <?php if ($division!='9' OR $gradito!='55' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
     <a href="zona_email_b.php?division=9&marca=1&update=1&grado=55&edit=1" class="btn relleno-lila mb-1 letrab"   role="button" 
     <?php if ($totalRows_p3u===0){?>style="display:none"<?php } ?> >" U "</a>




</div>

<div class="col-md-6">



<div class="text-dark" <?php if  ($totp3===0)  {?>style="display:none"<?php } ?> ><b>Pre-E. 3er Niv. - Sección:</b></div>

    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=56&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
    <?php if ($totalRows_p2a===0){?>style="display:none"<?php } ?> >" A "</a>

    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=56&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
    <?php if ($totalRows_p2b===0){?>style="display:none"<?php } ?> >" B "</a>

    <a href="zona_email_b.php?division=11&marca=1&update=1&grado=56&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
    <?php if ($totalRows_p2c===0){?>style="display:none"<?php } ?> >" C "</a>

    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=56&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
    <?php if ($totalRows_p2d===0){?>style="display:none"<?php } ?> >" D "</a>

    <a href="zona_email_b.php?division=13&marca=1&update=1&grado=56&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
    <?php if ($totalRows_p2e===0){?>style="display:none"<?php } ?> >" E "</a>

    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=56&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
    <?php if ($totalRows_p2f===0){?>style="display:none"<?php } ?> >" F "</a>

    <a href="zona_email_b.php?division=15&marca=1&update=1&grado=56&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
    <?php if ($totalRows_p2g===0){?>style="display:none"<?php } ?> >" G "</a>


 <span <?php if ($division!='9' OR $gradito!='56' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-2"></i></b>
     </span>
     <a href="zona_email_b.php?division=9&marca=1&update=1&grado=56&edit=1" class="btn relleno-lila mb-4 letrab"   role="button" 
     <?php if ($totalRows_p2u===0){?>style="display:none"<?php } ?> >" U "</a>




</div>

   </div>  <!-- cierre form row -->




   <div class="form-row">

<div class="col-md-6">


     <div class="text-dark mt-2" <?php if ($totg1===0) {?>style="display:none"<?php } ?> ><b>1er Grado - Sección:</b></div>

 <span <?php if ($division!='1' OR $gradito!='35' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=35&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"  
    <?php if ($totalRows_g1a===0){?>style="display:none"<?php } ?> >" A "</a>

 <span <?php if ($division!='2' OR $gradito!='35' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=35&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"   
    <?php if ($totalRows_g1b===0){?>style="display:none"<?php } ?> >" B "</a>

    <a href="zona_email_b.php?division=11&marca=1&update=1&grado=35&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"  
    <?php if ($totalRows_g1c===0){?>style="display:none"<?php } ?> >" C "</a>


    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=35&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"   
    <?php if ($totalRows_g1d===0){?>style="display:none"<?php } ?> >" D "</a>

    <a href="zona_email_b.php?division=13&marca=1&update=1&grado=35&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"  
    <?php if ($totalRows_g1e===0){?>style="display:none"<?php } ?> >" E "</a>


    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=35&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"   
    <?php if ($totalRows_g1f===0){?>style="display:none"<?php } ?> >" F "</a>

        <a href="zona_email_b.php?division=15&marca=1&update=1&grado=35&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"   
    <?php if ($totalRows_g1g===0){?>style="display:none"<?php } ?> >" G "</a>

     <a href="zona_email_b.php?division=9&marca=1&update=1&grado=35&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"   
    <?php if ($totalRows_g1u===0){?>style="display:none"<?php } ?> >" U "</a>




      <div class="text-dark mt-2" <?php if ($totg3===0) {?>style="display:none"<?php } ?> ><b>3er Grado - Sección:</b></div>

 <span <?php if ($division!='1' OR $gradito!='37' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-2"></i></b>
     </span>
    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=37&edit=1" class="btn relleno-purpplight mb-4 letrab"   role="button"   
    <?php if ($totalRows_g3a===0){?>style="display:none"<?php } ?> >" A "</a>

 <span <?php if ($division!='2' OR $gradito!='37' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-2"></i></b>
     </span>
    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=37&edit=1" class="btn relleno-purpplight mb-4 letrab"   role="button"   
    <?php if ($totalRows_g3b===0){?>style="display:none"<?php } ?> >" B "</a>

        <a href="zona_email_b.php?division=11&marca=1&update=1&grado=37&edit=1" class="btn relleno-purpplight mb-4 letrab"   role="button"   
    <?php if ($totalRows_g3c===0){?>style="display:none"<?php } ?> >" C "</a>


    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=37&edit=1" class="btn relleno-purpplight mb-4 letrab"   role="button"   
    <?php if ($totalRows_g3d===0){?>style="display:none"<?php } ?> >" D "</a>

        <a href="zona_email_b.php?division=13&marca=1&update=1&grado=37&edit=1" class="btn relleno-purpplight mb-4 letrab"   role="button"   
    <?php if ($totalRows_g3e===0){?>style="display:none"<?php } ?> >" E "</a>


    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=37&edit=1" class="btn relleno-purpplight mb-4 letrab"   role="button"   
    <?php if ($totalRows_g3f===0){?>style="display:none"<?php } ?> >" F "</a>


    <a href="zona_email_b.php?division=15&marca=1&update=1&grado=37&edit=1" class="btn relleno-purpplight mb-4 letrab"   role="button"   
    <?php if ($totalRows_g3g===0){?>style="display:none"<?php } ?> >" G "</a>


 <span <?php if ($division!='9' OR $gradito!='37' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-2"></i></b>
     </span>
     <a href="zona_email_b.php?division=9&marca=1&update=1&grado=37&edit=1" class="btn relleno-purpplight mb-4 letrab"   role="button"   
    <?php if ($totalRows_g3u===0){?>style="display:none"<?php } ?> >" U "</a>




</div>

<div class="col-md-6">

 <div class="text-dark mt-2" <?php if ($totg2===0) {?>style="display:none"<?php } ?> ><b>2do Grado - Sección:</b></div>


 <span <?php if ($division!='1' OR $gradito!='36' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg "></i></b>
     </span>
    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=36&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"   
    <?php if ($totalRows_g2a===0){?>style="display:none"<?php } ?> >" A "</a>


 <span <?php if ($division!='2' OR $gradito!='36' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg "></i></b>
     </span>
    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=36&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"   
    <?php if ($totalRows_g2b===0){?>style="display:none"<?php } ?> >" B "</a>

        <a href="zona_email_b.php?division=11&marca=1&update=1&grado=36&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"   
    <?php if ($totalRows_g2c===0){?>style="display:none"<?php } ?> >" C "</a>


    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=36&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"   
    <?php if ($totalRows_g2d===0){?>style="display:none"<?php } ?> >" D "</a>

        <a href="zona_email_b.php?division=13&marca=1&update=1&grado=36&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"   
    <?php if ($totalRows_g2e===0){?>style="display:none"<?php } ?> >" E "</a>


    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=36&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"   
    <?php if ($totalRows_g2f===0){?>style="display:none"<?php } ?> >" F "</a>

       <a href="zona_email_b.php?division=15&marca=1&update=1&grado=36&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"   
    <?php if ($totalRows_g2g===0){?>style="display:none"<?php } ?> >" G "</a>


     <a href="zona_email_b.php?division=9&marca=1&update=1&grado=36&edit=1" class="btn relleno-purpplight mb-1 letrab"   role="button"   
    <?php if ($totalRows_g2u===0){?>style="display:none"<?php } ?> >" U "</a>


</div>

   </div>  <!-- cierre form row -->






      <div class="form-row">

<div class="col-md-6">


  <div class="text-dark mt-2" <?php if ($totg4===0) {?>style="display:none"<?php } ?> ><b>4to Grado - Sección:</b></div>


 <span <?php if ($division!='1' OR $gradito!='38' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg "></i></b>
     </span>
    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=38&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g4a===0){?>style="display:none"<?php } ?> >" A "</a>

 <span <?php if ($division!='2' OR $gradito!='38' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg "></i></b>
     </span>
    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=38&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g4b===0){?>style="display:none"<?php } ?> >" B "</a>

     <a href="zona_email_b.php?division=11&marca=1&update=1&grado=38&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g4c===0){?>style="display:none"<?php } ?> >" C "</a>


    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=38&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g4d===0){?>style="display:none"<?php } ?> >" D "</a>

     <a href="zona_email_b.php?division=13&marca=1&update=1&grado=38&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g4e===0){?>style="display:none"<?php } ?> >" E "</a>


    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=38&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g4f===0){?>style="display:none"<?php } ?> >" F "</a>


    <a href="zona_email_b.php?division=15&marca=1&update=1&grado=38&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g4g===0){?>style="display:none"<?php } ?> >" G "</a>

 <span <?php if ($division!='9' OR $gradito!='38' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg "></i></b>
     </span>
     <a href="zona_email_b.php?division=9&marca=1&update=1&grado=38&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g4u===0){?>style="display:none"<?php } ?> >" U "</a>




      <div class="text-dark mt-2" <?php if ($totg6===0) {?>style="display:none"<?php } ?> ><b>6to Grado - Sección:</b></div>


 <span <?php if ($division!='1' OR $gradito!='41' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-2"></i></b>
     </span>
    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=41&edit=1" class="btn relleno-vino mb-4 letrab"   role="button"   
    <?php if ($totalRows_g6a===0){?>style="display:none"<?php } ?> >" A "</a>

<span <?php if ($division!='2' OR $gradito!='41' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-2"></i></b>
     </span>
    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=41&edit=1" class="btn relleno-vino mb-4 letrab"   role="button"   
    <?php if ($totalRows_g6b===0){?>style="display:none"<?php } ?> >" B "</a>


    <a href="zona_email_b.php?division=11&marca=1&update=1&grado=41&edit=1" class="btn relleno-vino mb-4 letrab"   role="button"   
    <?php if ($totalRows_g6c===0){?>style="display:none"<?php } ?> >" C "</a>


    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=41&edit=1" class="btn relleno-vino mb-4 letrab"   role="button"   
    <?php if ($totalRows_g6d===0){?>style="display:none"<?php } ?> >" D "</a>


<a href="zona_email_b.php?division=1&marca=13&update=1&grado=41&edit=1" class="btn relleno-vino mb-4 letrab"   role="button"   
    <?php if ($totalRows_g6e===0){?>style="display:none"<?php } ?> >" E "</a>


    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=41&edit=1" class="btn relleno-vino mb-4 letrab"   role="button"   
    <?php if ($totalRows_g6f===0){?>style="display:none"<?php } ?> >" F "</a>


        <a href="zona_email_b.php?division=15&marca=1&update=1&grado=41&edit=1" class="btn relleno-vino mb-4 letrab"   role="button"   
    <?php if ($totalRows_g6g===0){?>style="display:none"<?php } ?> >" G "</a>



 <span <?php if ($division!='9' OR $gradito!='41' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-2"></i></b>
     </span>
     <a href="zona_email_b.php?division=9&marca=1&update=1&grado=41&edit=1" class="btn relleno-vino mb-4 letrab"   role="button"   
    <?php if ($totalRows_g6u===0){?>style="display:none"<?php } ?> >" U "</a>


</div>

<div class="col-md-6">

     <div class="text-dark mt-2" <?php if ($totg5===0) {?>style="display:none"<?php } ?> ><b>5to Grado - Sección:</b></div>

<span <?php if ($division!='1' OR $gradito!='40' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=40&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g5a===0){?>style="display:none"<?php } ?> >" A "</a>

<span <?php if ($division!='2' OR $gradito!='40' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=40&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g5b===0){?>style="display:none"<?php } ?> >" B "</a>


    <a href="zona_email_b.php?division=11&marca=1&update=1&grado=40&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g5c===0){?>style="display:none"<?php } ?> >" C "</a>


    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=40&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g5d===0){?>style="display:none"<?php } ?> >" D "</a>

        <a href="zona_email_b.php?division=13&marca=1&update=1&grado=40&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g5e===0){?>style="display:none"<?php } ?> >" E "</a>


    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=40&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g5f===0){?>style="display:none"<?php } ?> >" F "</a>

        <a href="zona_email_b.php?division=15&marca=1&update=1&grado=40&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g5g===0){?>style="display:none"<?php } ?> >" G "</a>

<span <?php if ($division!='9' OR $gradito!='40' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
     <a href="zona_email_b.php?division=9&marca=1&update=1&grado=40&edit=1" class="btn relleno-vino mb-1 letrab"   role="button"   
    <?php if ($totalRows_g5u===0){?>style="display:none"<?php } ?> >" U "</a>




</div>

   </div>  <!-- cierre form row -->




 <div class="form-row">

<div class="col-md-6">


<div class="text-dark mt-2" <?php if ($totb1===0) {?>style="display:none"<?php } ?> ><b>1er Año - Sección:</b></div>


<span <?php if ($division!='1' OR $gradito!='42' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=42&edit=1" class="btn bg-primary mb-1 letrab"   role="button"    
    <?php if ($totalRows_b1a===0){?>style="display:none"<?php } ?> >" A "</a>


<span <?php if ($division!='2' OR $gradito!='42' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=42&edit=1" class="btn bg-primary mb-1 letrab"   role="button"     
    <?php if ($totalRows_b1b===0){?>style="display:none"<?php } ?>>" B "</a>


    <a href="zona_email_b.php?division=11&marca=1&update=1&grado=42&edit=1" class="btn bg-primary mb-1 letrab"   role="button"    
    <?php if ($totalRows_b1c===0){?>style="display:none"<?php } ?> >" C "</a>



    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=42&edit=1" class="btn bg-primary mb-1 letrab"   role="button"     
    <?php if ($totalRows_b1d===0){?>style="display:none"<?php } ?>>" D "</a>


    <a href="zona_email_b.php?division=13&marca=1&update=1&grado=42&edit=1" class="btn bg-primary mb-1 letrab"   role="button"    
    <?php if ($totalRows_b1e===0){?>style="display:none"<?php } ?> >" E "</a>



    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=42&edit=1" class="btn bg-primary mb-1 letrab"   role="button"     
    <?php if ($totalRows_b1f===0){?>style="display:none"<?php } ?>>" F "</a>


        <a href="zona_email_b.php?division=15&marca=1&update=1&grado=42&edit=1" class="btn bg-primary mb-1 letrab"   role="button"     
    <?php if ($totalRows_b1g===0){?>style="display:none"<?php } ?>>" G "</a>



<span <?php if ($division!='9' OR $gradito!='42' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
     <a href="zona_email_b.php?division=9&marca=1&update=1&grado=42&edit=1" class="btn bg-primary mb-1 letrab"   role="button"     
    <?php if ($totalRows_b1u===0){?>style="display:none"<?php } ?>>" U "</a>





     <div class="text-dark mt-2" <?php if ($totb3===0) {?>style="display:none"<?php } ?> ><b>3er Año - Sección:</b></div>

<span <?php if ($division!='1' OR $gradito!='44' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-2"></i></b>
     </span>
    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=44&edit=1" class="btn bg-primary mb-4 letrab"   role="button"      
    <?php if ($totalRows_b3a===0){?>style="display:none"<?php } ?> >" A "</a>

<span <?php if ($division!='2' OR $gradito!='44' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-2"></i></b>
     </span>
    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=44&edit=1" class="btn bg-primary mb-4 letrab"   role="button"      
    <?php if ($totalRows_b3b===0){?>style="display:none"<?php } ?>  >" B "</a>


     <a href="zona_email_b.php?division=11&marca=1&update=1&grado=44&edit=1" class="btn bg-primary mb-4 letrab"   role="button"      
    <?php if ($totalRows_b3c===0){?>style="display:none"<?php } ?> >" C "</a>


    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=44&edit=1" class="btn bg-primary mb-4 letrab"   role="button"      
    <?php if ($totalRows_b3d===0){?>style="display:none"<?php } ?>  >" D "</a>


     <a href="zona_email_b.php?division=13&marca=1&update=1&grado=44&edit=1" class="btn bg-primary mb-4 letrab"   role="button"      
    <?php if ($totalRows_b3e===0){?>style="display:none"<?php } ?> >" E "</a>


    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=44&edit=1" class="btn bg-primary mb-4 letrab"   role="button"      
    <?php if ($totalRows_b3f===0){?>style="display:none"<?php } ?>  >" F "</a>

        <a href="zona_email_b.php?division=15&marca=1&update=1&grado=44&edit=1" class="btn bg-primary mb-4 letrab"   role="button"      
    <?php if ($totalRows_b3g===0){?>style="display:none"<?php } ?>  >" G "</a>


<span <?php if ($division!='9' OR $gradito!='44' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-2"></i></b>
     </span>
     <a href="zona_email_b.php?division=9&marca=1&update=1&grado=44&edit=1" class="btn bg-primary mb-4 letrab"   role="button"      
    <?php if ($totalRows_b3u===0){?>style="display:none"<?php } ?> >" U "</a>




</div>

<div class="col-md-6">

   <div class="text-dark mt-2" <?php if ($totb2===0) {?>style="display:none"<?php } ?> ><b>2do Año - Sección:</b></div>

<span <?php if ($division!='1' OR $gradito!='43' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-1"></i></b>
     </span>
    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=43&edit=1" class="btn bg-primary mb-3 letrab"   role="button"      
    <?php if ($totalRows_b2a===0){?>style="display:none"<?php } ?> >" A "</a>

<span <?php if ($division!='2' OR $gradito!='43' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-1"></i></b>
     </span>
    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=43&edit=1" class="btn bg-primary mb-3 letrab"   role="button"       
    <?php if ($totalRows_b2b===0){?>style="display:none"<?php } ?> >" B "</a>

        <a href="zona_email_b.php?division=11&marca=1&update=1&grado=43&edit=1" class="btn bg-primary mb-3 letrab"   role="button"      
    <?php if ($totalRows_b2c===0){?>style="display:none"<?php } ?> >" C "</a>


    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=43&edit=1" class="btn bg-primary mb-3 letrab"   role="button"       
    <?php if ($totalRows_b2d===0){?>style="display:none"<?php } ?> >" D "</a>


        <a href="zona_email_b.php?division=13&marca=1&update=1&grado=43&edit=1" class="btn bg-primary mb-3 letrab"   role="button"      
    <?php if ($totalRows_b2e===0){?>style="display:none"<?php } ?> >" E "</a>


    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=43&edit=1" class="btn bg-primary mb-3 letrab"   role="button"       
    <?php if ($totalRows_b2f===0){?>style="display:none"<?php } ?> >" F "</a>

        <a href="zona_email_b.php?division=15&marca=1&update=1&grado=43&edit=1" class="btn bg-primary mb-3 letrab"   role="button"       
    <?php if ($totalRows_b2g===0){?>style="display:none"<?php } ?> >" G "</a>


 <span <?php if ($division!='9' OR $gradito!='43' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-1"></i></b>
     </span>
     <a href="zona_email_b.php?division=9&marca=1&update=1&grado=43&edit=1" class="btn bg-primary mb-3 letrab"   role="button"       
    <?php if ($totalRows_b2u===0){?>style="display:none"<?php } ?> >" U "</a>


  





</div>

   </div>  <!-- cierre form row -->







 <div class="form-row">

<div class="col-md-6">

<div class="text-dark mt-2" <?php if ($totb4===0) {?>style="display:none"<?php } ?> ><b>4to Año - Sección:</b></div>

<span <?php if ($division!='1' OR $gradito!='45' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=45&edit=1" class="btn relleno-browplight mb-1 letrab letrab"   role="button"       
    <?php if ($totalRows_b4a===0){?>style="display:none"<?php } ?> >" A "</a>

<span <?php if ($division!='2' OR $gradito!='45' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=45&edit=1" class="btn relleno-browplight mb-1 letrab letrab"   role="button"       
    <?php if ($totalRows_b4b===0){?>style="display:none"<?php } ?> >" B "</a>

        <a href="zona_email_b.php?division=11&marca=1&update=1&grado=45&edit=1" class="btn relleno-browplight mb-1 letrab letrab"   role="button"       
    <?php if ($totalRows_b4c===0){?>style="display:none"<?php } ?> >" C "</a>


    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=45&edit=1" class="btn relleno-browplight mb-1 letrab letrab"   role="button"       
    <?php if ($totalRows_b4d===0){?>style="display:none"<?php } ?> >" D "</a>

        <a href="zona_email_b.php?division=13&marca=1&update=1&grado=45&edit=1" class="btn relleno-browplight mb-1 letrab letrab"   role="button"       
    <?php if ($totalRows_b4e===0){?>style="display:none"<?php } ?> >" E "</a>


    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=45&edit=1" class="btn relleno-browplight mb-1 letrab letrab"   role="button"       
    <?php if ($totalRows_b4f===0){?>style="display:none"<?php } ?> >" F "</a>

        <a href="zona_email_b.php?division=15&marca=1&update=1&grado=45&edit=1" class="btn relleno-browplight mb-1 letrab letrab"   role="button"       
    <?php if ($totalRows_b4g===0){?>style="display:none"<?php } ?> >" G "</a>


<span <?php if ($division!='9' OR $gradito!='45' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
     <a href="zona_email_b.php?division=9&marca=1&update=1&grado=45&edit=1" class="btn relleno-browplight mb-1 letrab letrab"   role="button"       
    <?php if ($totalRows_b4u===0){?>style="display:none"<?php } ?> >" U "</a>





   <div class="text-dark mt-2" <?php if ($totb6===0) {?>style="display:none"<?php } ?> ><b>6to Año - Sección:</b></div>

<span <?php if ($division!='1' OR $gradito!='53' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-2"></i></b>
     </span>
    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=53&edit=1" class="btn relleno-browplight mb-4 letrab letrab"   role="button"       
    <?php if ($totalRows_b6a===0){?>style="display:none"<?php } ?>  >" A "</a>

<span <?php if ($division!='2' OR $gradito!='53' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-2"></i></b>
     </span>
    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=53&edit=1" class="btn relleno-browplight mb-4 letrab letrab"   role="button"       
    <?php if ($totalRows_b6b===0){?>style="display:none"<?php } ?>  >" B "</a>


        <a href="zona_email_b.php?division=11&marca=1&update=1&grado=53&edit=1" class="btn relleno-browplight mb-4 letrab letrab"   role="button"       
    <?php if ($totalRows_b6c===0){?>style="display:none"<?php } ?>  >" C "</a>


    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=53&edit=1" class="btn relleno-browplight mb-4 letrab letrab"   role="button"       
    <?php if ($totalRows_b6d===0){?>style="display:none"<?php } ?>  >" D "</a>


        <a href="zona_email_b.php?division=13&marca=1&update=1&grado=53&edit=1" class="btn relleno-browplight mb-4 letrab letrab"   role="button"       
    <?php if ($totalRows_b6e===0){?>style="display:none"<?php } ?>  >" E "</a>


    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=53&edit=1" class="btn relleno-browplight mb-4 letrab letrab"   role="button"       
    <?php if ($totalRows_b6f===0){?>style="display:none"<?php } ?>  >" F "</a>

        <a href="zona_email_b.php?division=15&marca=1&update=1&grado=53&edit=1" class="btn relleno-browplight mb-4 letrab letrab"   role="button"       
    <?php if ($totalRows_b6g===0){?>style="display:none"<?php } ?>  >" G "</a>



<span <?php if ($division!='9' OR $gradito!='53' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg mb-2"></i></b>
     </span>
     <a href="zona_email_b.php?division=9&marca=1&update=1&grado=53&edit=1" class="btn relleno-browplight mb-4 letrab letrab"   role="button"       
    <?php if ($totalRows_b6u===0){?>style="display:none"<?php } ?>  >" U "</a>  



</div>

<div class="col-md-6">


   <div class="text-dark mt-2" <?php if ($totb5===0) {?>style="display:none"<?php } ?> ><b>5to Año - Sección:</b></div>

<span <?php if ($division!='1' OR $gradito!='46' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
    <a href="zona_email_b.php?division=1&marca=1&update=1&grado=46&edit=1" class="btn relleno-browplight mb-1 letrab"   role="button"       
    <?php if ($totalRows_b5a===0){?>style="display:none"<?php } ?>  >" A "</a>

<span <?php if ($division!='2' OR $gradito!='46' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
    <a href="zona_email_b.php?division=2&marca=1&update=1&grado=46&edit=1" class="btn relleno-browplight mb-1 letrab"   role="button"       
    <?php if ($totalRows_b5b===0){?>style="display:none"<?php } ?>  >" B "</a>


    <a href="zona_email_b.php?division=11&marca=1&update=1&grado=46&edit=1" class="btn relleno-browplight mb-1 letrab"   role="button"       
    <?php if ($totalRows_b5c===0){?>style="display:none"<?php } ?>  >" C "</a>


    <a href="zona_email_b.php?division=12&marca=1&update=1&grado=46&edit=1" class="btn relleno-browplight mb-1 letrab"   role="button"       
    <?php if ($totalRows_b5d===0){?>style="display:none"<?php } ?>  >" D "</a>


<a href="zona_email_b.php?division=13&marca=1&update=1&grado=46&edit=1" class="btn relleno-browplight mb-1 letrab"   role="button"       
    <?php if ($totalRows_b5e===0){?>style="display:none"<?php } ?>  >" E "</a>


    <a href="zona_email_b.php?division=14&marca=1&update=1&grado=46&edit=1" class="btn relleno-browplight mb-1 letrab"   role="button"       
    <?php if ($totalRows_b5f===0){?>style="display:none"<?php } ?>  >" F "</a>


<a href="zona_email_b.php?division=15&marca=1&update=1&grado=46&edit=1" class="btn relleno-browplight mb-1 letrab"   role="button"       
    <?php if ($totalRows_b5g===0){?>style="display:none"<?php } ?>  >" G "</a>




<span <?php if ($division!='9' OR $gradito!='46' ){?>style="display:none"<?php } ?> > <b><i style="color:orange" class="far fa-hand-point-right fa-lg"></i></b>
     </span>
     <a href="zona_email_b.php?division=9&marca=1&update=1&grado=46&edit=1" class="btn relleno-browplight mb-1 letrab"   role="button"       
    <?php if ($totalRows_b5u===0){?>style="display:none"<?php } ?>  >" U "</a>


 





</div>

   </div>  <!-- cierre form row -->






</div>




</div>  <!--cierre card -->



</div>   <!--cierre col 12 -->


 
</div> <!--cierre col 6 -->



<div class="col-md-6">


<div class="card" <?php if ($marca=='0'){?>style="display:none"<?php } ?> >


<?php 


include ("../conectar.php");


$ttt = "SELECT * FROM grados 
         WHERE   id_grado = '$gradito'
         GROUP BY id_grado LIMIT 1 ";


$datos_ttt = mysqli_query($enlace, $ttt) or die(mysqli_error());
$row_datos_control = mysqli_fetch_array($datos_ttt); 


$tttP = "SELECT * FROM secciones 
         WHERE   id_seccion = '$division'
         GROUP BY id_seccion LIMIT 1 ";


$datos_tttP = mysqli_query($enlace, $tttP) or die(mysqli_error());
$row_datos_controlP = mysqli_fetch_array($datos_tttP); 

mysqli_close($enlace); 




 ?>



  <div class="card-body">  <h5 class="ml-3 card-title">Representantes con correos <?php echo $row_datos_control['nombre_grados']; ?>, Secc. "<?php echo $row_datos_controlP['nombre_seccion']; ?>".</h5>

          <div class="table-responsive">

            <table class="table table-bordered stricolor table-sm" id="dataTable" width="100%" cellspacing="0">
             
              <thead>
                <tr>                  
                 
                 
                  <th>Enviar a:</th>
                  <th><i class="fas fa-cog"></i></th>
                 <th><i class="fas fa-camera"></i></th>
                 <th><i class="fas fa-camera-retro"></i></th>
                  <th class="align-middle" align="center"><i class="fas fa-check"></i></th>
                  <th class="align-middle" align="center">Acción:</th>
                  
                </tr>  
              </thead>
                          
              
              <tbody>



     <?php
     $count = 0;






     foreach($result as $row)
     {
      $count++;

      $el_asunto = $nnnCUU['asunto_b'];

      $el_content = $nnnCUU['id'];

      $la_firma = $nnnCUU['firma'];

      $prueba = '<p>hhh</p>';

      $el_idesito = $row['id_repre'];
      $el_nombresito = $row['nombre_repre'];
      $el_acceso = $row['acceso'];
      $el_apellidosito = $row['apellido_repre'];


      $el_idestud = $row['id_estud'];


include("../conectar.php");

  $querymod_pre = "SELECT id_estud, id_reg_pagos, fecha_inscripcion, el_activo FROM reg_estu_actual
            where id_estud = '$el_idestud'
            and fecha_inscripcion != ''
            and el_activo = 1
            limit 1 ";

              $datos_mod_pre = mysqli_query($enlace, $querymod_pre) or die(mysqli_error());              
              $row_datos_mod_pre = mysqli_fetch_assoc($datos_mod_pre);
              $el_id_del_pago_es =  $row_datos_mod_pre['id_reg_pagos'];


 $querymod9 = "SELECT * FROM reg_pagos where id_pago = '$el_id_del_pago_es' ";

              $datos_mod9 = mysqli_query($enlace, $querymod9) or die(mysqli_error());
              
              $row_datos_mod9 = mysqli_fetch_array($datos_mod9);


 $query_leyendas = "SELECT * FROM periodo_de_pago  ";

              $datos_leyendas = mysqli_query($enlace, $query_leyendas) or die(mysqli_error());
              
              $row_datos_leyendas = mysqli_fetch_array($datos_leyendas);


                         
              mysqli_close($enlace);   

    $el_pago_id = $row_datos_mod9['id_pago'];

    $todos_los_pagos = "";





if ($el_acceso == 0 ) {
 $acceso_es = '';
}


if ($el_acceso == 1 ) {
 $acceso_es = 'Limitado';
}


if ($row_datos_mod9['1er_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["1er_pago"].', ';
}



if ($row_datos_mod9['2do_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["2do_pago"].', ';
}



if ($row_datos_mod9['3er_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["3er_pago"].', ';
}

if ($row_datos_mod9['4to_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["4to_pago"].', ';
}



if ($row_datos_mod9['5to_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["5to_pago"].', ';
}


if ($row_datos_mod9['6to_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["6to_pago"].', ';
}



if ($row_datos_mod9['7mo_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["7mo_pago"].', ';
}


if ($row_datos_mod9['8vo_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["8vo_pago"].', ';
}


if ($row_datos_mod9['9no_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["9no_pago"].', ';
}


if ($row_datos_mod9['10m_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["10m_pago"].', ';
}



if ($row_datos_mod9['11o_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["11o_pago"].', ';
}


if ($row_datos_mod9['12o_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["12o_pago"].', ';
}







      $gradiin = $row_datos_control['nombre_grados'];
      $seccionin =$row_datos_controlP['nombre_seccion'];


       $el_emailsito = $row['email_repre'];


       $el_celularsito = $row['celular_repre'];
       $el_telfsito = $row['telefono_repre'];


       if ($row['correo_valido'] == 0 ) {
         $el_validoso = 'No Confirmado';
         $el_valivali = '0';
       }

       if ($row['correo_valido'] == 1 ) {
         $el_validoso = 'Confirmado';
         $el_valivali = '1';
       }


       if ($row['correo_valido'] == 2 ) {
         $el_validoso = 'No Valido?';
         $el_valivali = '2';
       }


       


      if ($row["correo_valido"]=="0") {
        $visto = "<span style='color:orange;' ><b>'No Confirmado'</b></span>";
      }

      if ($row["correo_valido"]=="1") {
        $visto = "<span style='color:#27408b;' ><b>'Confirmado'</b></span>";
      }

      if ($row["correo_valido"]=="2") {
        $visto = "<span style='color:red;' ><b>'No Valido?'</b></span>";
      }

   

include("../conectar.php");

$el_doc_repre_es = $row['ci_repre'];

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


}





$mensajeWWW = '';
$saltarin = '';

$el_becario = $row['id_estud'];

include("../conectar.php");


$querybbb = "SELECT * FROM extra_catedra 
         WHERE   id_estud = '$el_becario'
         and id_area = '88' limit 1 " ;

$datos_controlbbb = mysqli_query($enlace, $querybbb) or die(mysqli_error());

$totalRows_datos_controlbbb = mysqli_num_rows($datos_controlbbb); 


$datos_controlbbb_valores = mysqli_fetch_array($datos_controlbbb); 


mysqli_close($enlace);


if ($totalRows_datos_controlbbb >=1) {
    $mensajeWWW = 'Posee Beca:';
    $saltarin = '<br>';
    
}

else {
  $mensajeWWW = '';
  $saltarin = '';
}




      echo '
      <tr>

       

       <td class="align-middle" align="center"> <b>'.$row["apellidos_estu"].'</b> '.$row["nombre_estu"].' 
       '.$saltarin.' <span style="color:#972C8B;"><b>'.$mensajeWWW.'</b></span> <span style="color:#F144DD;">'.$datos_controlbbb_valores['obs_catedra'].'</span>



       <br> <span style="color:limegreen;"><i class="far fa-envelope"></i></span> '.$row["email_repre"].' <br> '.$visto.'
       <br>   <span style="color:red;"><b><i>'.$acceso_es.'</i></b></span>

<span style="color:purple;"><i class="fas fa-user-tie"></i></span> <b>'.$row["apellido_repre"].'</b> '.$row["nombre_repre"].' '.$saltarinbb.' 


<span style="color:#ED288B;"> '.$frase_previa.'  '.$espacio.' </span>
<span style="color:#ED288B;"><b> '.$trabaja_de.'  '.$espacio.' '.$icono_giro.'  </b>


          <br>






        <span style="color:green;"><i class="fas fa-hand-holding-usd"></i></span>  
        <span style="color:green; font-size:14px;"><b>'.$todos_los_pagos.'</b></span> </td>



       <td class="align-middle" align="center">

      <div data-toggle="tooltip" data-placement="top" title="Actualizar Datos." >

                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                              data-target="#modificar'.$el_idesito.'" >  <i class="fas fa-edit"></i>
                
                </button> 
      </div>



<div class="modal fade" id="modificar'.$el_idesito.'" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Editar Datos Del Representante !!!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


     <div class="form-row">
<div class="col-md-12">

        <div class="form-row">



         <div class="input-group col-md-6 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-primary" id="basic-addon1"><i class="far fa-file-alt"></i></span> 
</div>

<input maxlength="39" type="text" class="form-control form-control-sm " id="mod_apellidos_repre" name="mod_apellidos_repre"
value="'.$el_apellidosito.'" required> </div>




<div class="input-group col-md-6 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-primary" id="basic-addon1"><i class="fas fa-file-alt"></i></span> 
</div>

<input maxlength="39" type="text" class="form-control form-control-sm " id="mod_nombres_repre" name="mod_nombres_repre"
value="'.$el_nombresito.'" required> </div>





       
        
       

        </div>




        <div class="form-row">


<div class="input-group col-md-6 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-danger" id="basic-addon1"><i class="fas fa-at"></i></span> 
</div>

<input maxlength="39" type="email" class="form-control form-control-sm " id="mod_email_repre" name="mod_email_repre"
value="'.$el_emailsito.'" required> </div>





 <div class="input-group input-group-sm col-md-6 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-danger" id="basic-addon1"><i> Estatus:</i></span>  
                    </div>


                <select class="form-control" id="estado" name="estado" required>

                <option value="'.$el_valivali.'" selected>'.$el_validoso.'</option>

               
                <option disabled></option>                
                
                <option value="0">No Confirmado</option>
                <option value="1">Confirmado</option>
                <option value="2">No Valido</option>
                
               
          </select>
                  
                              
                 </div>



        </div>






        <div class="form-row">


<div class="input-group col-md-6 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-primary" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span> 
</div>

<input maxlength="12" type="text" class="form-control form-control-sm " id="mod_celular_repre" name="mod_celular_repre"
value="'.$el_celularsito.'" required> </div>


   

<div class="input-group col-md-6 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-primary" id="basic-addon1"><i class="fas fa-phone-volume"></i></span> 
</div>

<input maxlength="12" type="text" class="form-control form-control-sm " id="mod_telefono_repre" name="mod_telefono_repre"
value="'.$el_telfsito.'" > </div>






        </div>


      </div>
</div>



      </div>  
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_selecc" class="btn btn-info" value="'.$el_idesito.'">
              Modificar</button>  

      </div>
      </form>
            
    </div>
  </div>
</div>


       </td>






      <td class="align-middle" align="center"> <img  id="myImgTRES" src="'.$row["foto_estu"].'" width="50px">  </td>

      <td class="align-middle" align="center">  <img  id="myImgTRES" src="'.$row["foto_repre"].'" width="50px"> </td>  
       


       <td class="align-middle" align="center">

        <input type="checkbox" name="single_select" class="single_select" data-email="'.$row["email_repre"].'" data-name="'.$row["nombre_estu"].'"
         data-apellido="'.$row["apellidos_estu"].'"  data-nombrer="'.$row["nombre_repre"].'" data-apellidor="'.$row["apellido_repre"].'" data-asunto="'.$el_asunto.'"  data-contenido="'.$el_content.'"  data-firma="'.$la_firma.'"   data-gradito="'.$gradiin.'"  data-seccioni="'.$seccionin.'"
          data-idr="'.$el_idesito.'"  data-ida="'.$el_idestud.'"   />

       </td>





       <td class="align-middle" align="center">

       <button type="button" name="email_button" class="btn btn-info btn-sm email_button" id="'.$count.'" data-email="'.$row["email_repre"].'"
        data-name="'.$row["nombre_estu"].'"  data-apellido="'.$row["apellidos_estu"].'" data-nombrer="'.$row["nombre_repre"].'" data-apellidor="'.$row["apellido_repre"].'" data-asunto="'.$el_asunto.'"  data-contenido="'.$el_content.'" data-firma="'.$la_firma.'" data-gradito="'.$gradiin.'"  data-seccioni="'.$seccionin.'"
        data-idr="'.$el_idesito.'"  data-ida="'.$el_idestud.'" 
        data-action="single">Enviar a uno</button>

        </td>


      </tr>
      ';
     }
     ?>

          
                 

              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->


<button type="button" name="bulk_email" class="btn btn-primary mt-4 btn-block email_button" id="bulk_email" data-action="bulk">Enviar Email a Todos los Seleccionados</button>


<div class="mt-3">
  
<b>Listado completo: </b>

<?php
     $count = 0;
     foreach($result as $row)
     {
      $count++;

      
      echo '
       
       '.$row["email_repre"].',
       
      ';
     }
     ?>



</div> 

        </div>  <!-- cierre card body -->


 


</div>  <!-- cierre card header -->





<script>
$(document).ready(function(){
 $('.email_button').click(function(){
  $(this).attr('disabled', 'disabled');
  var id = $(this).attr("id");
  var action = $(this).data("action");
  var email_data = [];
  if(action == 'single')
  {
   email_data.push({      
    email: $(this).data("email"),
    name: $(this).data("name"),
    apellido: $(this).data("apellido"),
    nombrer: $(this).data("nombrer"),
    apellidor: $(this).data("apellidor"),
    asunto: $(this).data("asunto"),
    contenido: $(this).data("contenido"),
    firma: $(this).data("firma"),
    gradito: $(this).data("gradito"),
    seccioni: $(this).data("seccioni"),
    idr: $(this).data("idr"),
    ida: $(this).data("ida")
   

   });
  }
  else
  {
   $('.single_select').each(function(){
    if($(this). prop("checked") == true)
    {
     email_data.push({
      email: $(this).data("email"),
      name: $(this).data('name'),
      apellido: $(this).data("apellido"),
     nombrer: $(this).data("nombrer"),
    apellidor: $(this).data("apellidor"),
    asunto: $(this).data("asunto"),
    contenido: $(this).data("contenido"),
    firma: $(this).data("firma"),
    gradito: $(this).data("gradito"),
    seccioni: $(this).data("seccioni"),
    idr: $(this).data("idr"),
    ida: $(this).data("ida")

     });
    }
   });
  }
  
  $.ajax({
   url:"00_send_b.php",
   method:"POST",
   data:{email_data:email_data},
   beforeSend:function(){
    $('#'+id).html('Enviando...');
    $('#'+id).addClass('btn-danger');
   },
   success:function(data){
    if(data = 'ok')
    {
     $('#'+id).text('Enviado');
     $('#'+id).removeClass('btn-danger');
     $('#'+id).removeClass('btn-info');
     $('#'+id).addClass('btn-success');
    }
    else
    {
     $('#'+id).text(data);
    }
    $('#'+id).attr('disabled', false);
   }
   
  });
 });
});
</script>



</div> <!-- cierre form row -->





             





                










  </div>   <!-- cierre container fluid -->
</div>  <!-- cierre wrapper -->



<?php include ("Footer.php"); ?>
