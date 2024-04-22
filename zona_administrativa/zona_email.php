<?php



include("identificador.php");

// header('Cache-Control: max-age=900');

include("../conectar.php");



$el_id = $_SESSION['id'];

$update =$_GET['update'];


 $division = $_GET['division'];

 $marca = $_GET['marca'];


$edit = $_GET['edit'];


$file_AdjN = '';


$resultadoconex= "5";




 include("listas_php/00_lista_canal_email.php");     // enlista los resultados de la tarjetas del menu incio

mysqli_close($enlace);  






 $conexion = @fsockopen("www.google.com", 80, $errno, $errstr, 30); 
          if (!$conexion) { 
      
          $resultadoconex= "0";
          }

           else { 
          $resultadoconex= "1";
          fclose($conexion); 
          } 









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

      $file_AdjN = "".$el_id."_".$_FILES['archivo']['name']."";
      move_uploaded_file($_FILES['archivo']['tmp_name'],


      "zzz_files/".$el_id."_" . $_FILES['archivo']['name']);


      $exitoZ .= " &nbsp; Archivo &nbsp;<b>** ".$file_AdjN." **</b>&nbsp; cargado correctamente. &nbsp;"; 


      
          
      }

}

else {

  include("../conectar.php");

      $nombre_userE = "SELECT id, file_a FROM usuarios WHERE id = ' ".$_SESSION['id']." ' ";        

          $resultCUUE = mysqli_query($enlace,$nombre_userE);
          $nnnCUUE=mysqli_fetch_array($resultCUUE);                /* antes en select tenia nombres */ 

mysqli_close($enlace); 

$file_AdjN = $nnnCUUE['file_a'];

}


include("../conectar.php");


  $sql = "UPDATE usuarios SET asunto = '$_POST[asunto]', contenido = '".mysqli_real_escape_string($enlace,$_POST['editordata'])."', firma = '$_POST[firma]', file_a = '$file_AdjN'
                                        
                                        WHERE id='$el_id' LIMIT 1 ";

                       
                  if (!mysqli_query($enlace,$sql))      // actualiza y si no ha logrado ingresar los datos
                         {
                          $errorZ.="- Error al registrar, contactar al Ing. ";
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

      $nombre_userE = "SELECT id, file_a FROM usuarios WHERE id = ' ".$_SESSION['id']." ' ";        

          $resultCUUE = mysqli_query($enlace,$nombre_userE);
          $nnnCUUE=mysqli_fetch_array($resultCUUE);                /* antes en select tenia nombres */ 

mysqli_close($enlace); 

$el_archivo = $nnnCUUE['file_a'];


$filenameZZ = "zzz_files/".$el_archivo."";


if (file_exists($filenameZZ)) { 

unlink($filenameZZ);


include("../conectar.php");


  $sql = "UPDATE usuarios SET file_a = ''
                                        
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

      $nombre_userE = "SELECT id, file_a FROM usuarios WHERE id = ' ".$_SESSION['id']." ' ";        

          $resultCUUE = mysqli_query($enlace,$nombre_userE);
          $nnnCUUE=mysqli_fetch_array($resultCUUE);                /* antes en select tenia nombres */ 

mysqli_close($enlace); 

$el_archivo = $nnnCUUE['file_a'];


 if (!empty( $el_archivo )) {

$filenameZZ = "zzz_files/".$el_archivo."";

unlink($filenameZZ);

  }





include("../conectar.php");


  $sql = "UPDATE usuarios SET contenido = '', file_a = ''
                                        
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
            <i><b>Redactar Email al Personal:</b> </i></div> 

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

      $nombre_user = "SELECT id, asunto, contenido, firma, file_a FROM usuarios WHERE id = ' ".$_SESSION['id']." ' ";        

          $resultCUU = mysqli_query($enlace,$nombre_user);
          $nnnCUU=mysqli_fetch_array($resultCUU);                /* antes en select tenia nombres */ 

mysqli_close($enlace); 


       ?>
   
              <select class="form-control" id="asunto" name="asunto" required>

                <option value="<?php echo $nnnCUU['asunto']; ?>" selected><?php echo $nnnCUU['asunto']; ?></option>

               
                <option disabled></option>

                <option>Aviso</option>
                <option>Caso Medico</option>
                <option>Cita Programada</option>
                <option>Contactarnos Cuanto Antes</option>
                <option>Documento Faltante</option>
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

 if ($nnnCUU['file_a'] !='') {     // detecta si hay un archivo cargado

                      $file_Adj = $nnnCUU['file_a'];
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


     <textarea id="summernote" name="editordata"><?php echo $nnnCUU['contenido']; ?></textarea>

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

  

  <button type="submit" name="save_email_all" class="btn btn-primary" id='btnReset'  <?php if ($guardado=='1' or $edit=='1'){?>style="display:none"<?php } ?>   >
  <i class="fas fa-save fa-lg"></i> &nbsp Guardar - Asunto y/o Contenido</button>

  



  <button type="submit" name="vaciar" class="btn btn-danger" id=''   <?php if ($guardado=='1' or $edit=='1'){?>style="display:none"<?php } ?>    >
  <i class="fas fa-trash-alt"></i> Borrar Contenido</button>


  <a  type="button" class="btn btn-success" href="zona_email.php?division=6&marca=0&update=0&edit=0"  
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



    <a href="zona_email.php?division=5&marca=1&update=1&edit=1" class="btn btn-dark btn-block mb-4" role="button">Todos Los Docentes y Profesores</a>


    <a href="zona_email.php?division=80&marca=1&update=1&edit=1" class="btn btn-info btn-block mb-2" role="button">Docentes Inicial</a>
    <a href="zona_email.php?division=84&marca=1&update=1&edit=1" class="btn btn-info btn-block mb-4" role="button">Prof. Media General</a> 


    <a href="zona_email.php?division=14&marca=1&update=1&edit=1" class="btn btn-outline-primary btn-block mb-2" role="button">Listar Coordinadores</a>

    <a href="zona_email.php?division=9&marca=1&update=1&edit=1" class="btn btn-outline-primary btn-block mb-2" role="button">Listar Dpto. de Evaluación</a>

    <a href="zona_email.php?division=10&marca=1&update=1&edit=1" class="btn btn-outline-primary btn-block mb-2" role="button">Listar Asistentes</a>

    <a href="zona_email.php?division=2&marca=1&update=1&edit=1" class="btn btn-outline-dark btn-block mb-2" role="button">Listar Administradores</a>

    <a href="zona_email.php?division=3&marca=1&update=1&edit=1" class="btn btn-outline-dark btn-block mb-4" role="button">Listar Secretarios</a>

    <a href="zona_email.php?division=6&marca=1&update=1&edit=1" class="btn btn-info btn-block mb-2" role="button">Listar "Grupo Varios"</a>



  </div>

  <div class="col-md-6">

    <a href="zona_email.php?division=1&marca=1&update=1&edit=1" class="btn btn-secondary btn-block mb-4" role="button">Listar Directores</a>


     <a href="zona_email.php?division=82&marca=1&update=1&edit=1" class="btn btn-info btn-block mb-2" role="button">Docentes Básica</a>
    <a href="zona_email.php?division=86&marca=1&update=1&edit=1" class="btn btn-info btn-block mb-4" role="button">Prof. Especialistas</a>


    <a href="zona_email.php?division=13&marca=1&update=1&edit=1" class="btn btn-outline-secondary btn-block mb-2" role="button">Listar Personal Medico</a>

    <a href="zona_email.php?division=15&marca=1&update=1&edit=1" class="btn btn-outline-secondary btn-block mb-2" role="button">Listar Dpto. de Cultura</a>

    <a href="zona_email.php?division=16&marca=1&update=1&edit=1" class="btn btn-outline-secondary btn-block mb-2" role="button">Listar Dpto. de Deportes</a>

    <a href="zona_email.php?division=12&marca=1&update=1&edit=1" class="btn btn-outline-info btn-block mb-2" role="button">Personal Obrero</a>

    <a href="zona_email.php?division=11&marca=1&update=1&edit=1" class="btn btn-outline-info btn-block mb-4" role="button">Personal de Vigilancia</a>



    <a href="zona_email.php?division=100&marca=1&update=1&edit=1" class="btn btn-dark btn-block mb-2" role="button">Listar a Todos</a>




</div>



</div>
</div>




</div>  <!--cierre card -->



</div>   <!--cierre col 12 -->


 
</div> <!--cierre col 6 -->



<div class="col-md-6">


<div class="card" <?php if ($marca=='0'){?>style="display:none"<?php } ?> >
  <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered stricolor table-sm" id="dataTable" width="100%" cellspacing="0">
             
              <thead>
                <tr>                  
                  <th>Enviar a:</th>
                  <th><i class="fas fa-camera-retro"></i></th>
                  <th class="align-middle" align="center">Seleccionar:</th>
                  <th class="align-middle" align="center">Acción:</th>
                  
                </tr>  
              </thead>
                          
              
              <tbody>



     <?php
     $count = 0;
     foreach($result as $row)
     {
      $count++;

      $el_asunto = $nnnCUU['asunto'];

      $el_content = $nnnCUU['id'];

      $la_firma = $nnnCUU['firma'];

      $prueba = '<p>hhh</p>';


      echo '
      <tr>
       <td class="align-middle" align="center"> <b>'.$row["nombre_per"].'</b> '.$row["apellido_per"].' 
       <br> <span style="color:limegreen;"><i class="far fa-envelope"></i></span> '.$row["email_per"].' </td>

       <td class="align-middle" align="center"> <img  id="myImgTWO" src="'.$row["foto_per"].'" width="40px"> </td>
       
       <td class="align-middle" align="center">

        <input type="checkbox" name="single_select" class="single_select" data-email="'.$row["email_per"].'" data-name="'.$row["nombre_per"].'"
         data-apellido="'.$row["apellido_per"].'" data-asunto="'.$el_asunto.'"  data-contenido="'.$el_content.'" data-firma="'.$la_firma.'"  />  

       </td>

       <td class="align-middle" align="center">

       <button type="button" name="email_button" class="btn btn-info btn-sm email_button" id="'.$count.'" data-email="'.$row["email_per"].'"
        data-name="'.$row["nombre_per"].'"  data-apellido="'.$row["apellido_per"].'" data-asunto="'.$el_asunto.'"  data-contenido="'.$el_content.'"  data-firma="'.$la_firma.'"
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
       
       '.$row["email_per"].',
       
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
    asunto: $(this).data("asunto"),
    contenido: $(this).data("contenido"),
    firma: $(this).data("firma")
   

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
    asunto: $(this).data("asunto"),
    contenido: $(this).data("contenido"),
    firma: $(this).data("firma")

     });
    }
   });
  }
  
  $.ajax({
   url:"00_send.php",
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
