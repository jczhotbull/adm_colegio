<?php

include("identificador.php");

$alerta_principal = "0";


$ttbla = 'plantilla_talonario';

$idtbla = 'id_talonario';

$nombdato = 'talonario_numero';

$nombcausa = 'talonario_causa';

$ttitulo = 'Lista Restringida';




// los siguientes permiten eliminar un dato

    if(isset($_POST['borrar_selecc']))
    {

            $borrar_id = $_POST['borrar_selecc'];
           // $errorZ = " <p> <b>" . $borrar_id . " </b> </p>"; // me ayudan a saber si se esta agarrando el id correcto...

      include("../conectar.php");  


$alerta_principal = "2";

                      $queryC = "SELECT * FROM ".$ttbla." WHERE ".$idtbla." = '$_POST[borrar_selecc]' LIMIT 1";

                      $resultC = mysqli_query($enlace,$queryC);
                      $fila=mysqli_fetch_array($resultC);         // lo anterior me permite tener el nombre del registro...


                      $queryD = "DELETE FROM ".$ttbla."  WHERE ".$idtbla." = '$_POST[borrar_selecc]' LIMIT 1";

                      if (!mysqli_query($enlace,$queryD))      // si no ha logrado borrar el dato
                         {
                          $errorZ="- Error - Dato actualmente usado en un registro.  ";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



                      else {  

                         $exitoZ = "<b>--&nbsp; " . $fila["$nombdato"] . " &nbsp;--</b> &nbsp;&nbsp; ha sido eliminado.";

                      }
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. "  ";
                             mysqli_close($enlace);            
                          }

                                            

    }

 




   // lo siguiente permite modificar el nombre de un dato.



 if(isset($_POST['editar_selecc']))
        {

$alerta_principal = "2";
       //    $editar_id = $_POST['editar_selecc'];
       //    $errorZ = " <p> <b>" . $editar_id . "  </b> </p>"; // me ayudan a saber si se esta agarrando el id correcto...

       //   $ingreso = $_POST['dato_selecc'];
       //   $errorZ = " <p> <b>" . $ingreso . " </b> </p>"; // me ayudan a saber si se agarro el texto ingresado...

      if (strlen($_POST['dato_selecc']) >20 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "El número supera los 20 caracteres."; }

                        if (strlen($_POST['dato_causa']) >60 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "La causa supera los 60 caracteres."; }

      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");

           // $dato = $_POST["nombre_area"];





// y que pasa si es el mismo dato al que le di guardar????



$querydatow = "SELECT ".$idtbla." FROM ".$ttbla." WHERE ".$nombdato." ='".mysqli_real_escape_string($enlace,$_POST['dato_selecc'])."' LIMIT 1";

                  $resultdatow = mysqli_query($enlace,$querydatow);

    if (mysqli_num_rows($resultdatow)>0)
      {
       $errorZ="Ya existe un número igual registrado.";
      }


          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                 mysqli_close($enlace);            
              }
     


          else {  






   $sql = "UPDATE ".$ttbla." SET ".$nombdato." = '".mysqli_real_escape_string($enlace,$_POST['dato_selecc'])."',
                                 ".$nombcausa." = '".mysqli_real_escape_string($enlace,$_POST['dato_causa'])."'
                                                            
                                WHERE ".$idtbla." = '$_POST[editar_selecc]' LIMIT 1 ";

                       
            if (!mysqli_query($enlace,$sql))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing. ";   // " . $ttbla. "  y  " . $nombdato. " más " . $dsel. " y " . $dedit. "

               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Dato Modificado"; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                              mysqli_close($enlace);          
                          }

                       
            }

        }   

    } // cierre if en caso de actualizar  

         



    // fase para agregar un nuevo dato a la base de datos referente a los seleccionables

if (array_key_exists("submit",$_POST))// chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba

   {
$alerta_principal = "2";

      include("../conectar.php");


              if (strlen($_POST['dato_selecc']) >20 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "El número supera los 20 caracteres."; }


                   if (strlen($_POST['dato_causa']) >60 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "La causa supera los 60 caracteres."; }

      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";            
              }


      else      // Sequencia de chequeo, verifica si el dato ya está registrado en la BD...
    {
       $querydato = "SELECT ".$idtbla." FROM ".$ttbla." WHERE ".$nombdato." ='".mysqli_real_escape_string($enlace,$_POST['dato_selecc'])."' LIMIT 1";

                  $resultdato = mysqli_query($enlace,$querydato);

    if (mysqli_num_rows($resultdato)>0)
      {
       $errorZ="Número anteriormente registrado.";
      }


          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";            
              }




        else     
       {

        $dato = $_POST["dato_selecc"];
        $causa = $_POST["dato_causa"];




        $query = "INSERT INTO ".$ttbla." (".$nombdato.", ".$nombcausa." )
         VALUES ('".mysqli_real_escape_string($enlace,$_POST['dato_selecc'])."', '".mysqli_real_escape_string($enlace,$_POST['dato_causa'])."' )";


        if (!mysqli_query($enlace,$query))      // si no ha logrado ingresar los datos
         {
          $errorZ="Error, contactar Ing.";
          mysqli_close($enlace);

          }


        else
          {               


               // Etapa final del registro

          $exitoZ=" <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Registro realizado. </b>";
          mysqli_close($enlace);

        }

      } // cierre del envio...

    } // cierre que verifica si ya estaba en la base


    }  // cierre if relacionado si se envio algo...
    





?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->


<?php

$query = "SELECT * FROM ".$ttbla." WHERE ".$nombdato." != '.' ORDER BY ".$nombdato." ASC";

$datos_selecc = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_selecc = mysqli_fetch_assoc($datos_selecc);

$totalRows_datos_selecc = mysqli_num_rows($datos_selecc);

mysqli_close($enlace);   ?>




<?php

/*
if ($alerta_principal  == "0") {



 echo '<script type="text/javascript">';
  echo 'setTimeout(function () {

   swal({
  title: "",
  type: "info",
  html: "Modificar erroneamente datos en uso, puede causar incongruencias en el sistema!"
   + "<br><br> Use el botón de modificar solo para corregir errores tipográficos.",
  icon: "",
});'

;
  echo '}, 1000);</script>';  


} */

?>










<div class="content-wrapper">
  <div class="container-fluid">

    <div class="alert alert-primary" role="alert">
      <i><b><?php echo $ttitulo ?>.</b></i> 
    </div>
    
    <div class="card  mx-auto mt-3">

      <div class="card-body">

        <form method="POST">


<div class="form-row">
    
    <div class="input-group col-lg-8 mb-1">
    
        <div class="input-group-prepend">
            <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-plus fa-lg"></i>&nbsp Agregar Número:</span>  
        </div> 
        

        <input maxlength="19" type="text" class="form-control" id="dato_selecc" name="dato_selecc" placeholder="..." aria-label="dato_selecc" aria-describedby="basic-addon1" required>

        
         <input maxlength="59" type="text" class="form-control" id="dato_causa" name="dato_causa" placeholder="Causa y/u Observación" aria-label="dato_causa" aria-describedby="basic-addon1" required>
    

         <div class="input-group-append">
            <button type="submit" name="submit" class="btn btn-success">Guardar</button>
        </div>


    </div> 


 
  

  <div class="col-lg-4">
  
    
        <?php 
          if ($errorZ!="")
          { echo "<div class=\"input-group-text alert-danger\" id=\"basic-addon1\" role=\"alert\" align=\"center\" >".$errorZ."</div>"; }
        ?>
                               <!-- SOLO ES VISIBLE SI LA VARIABLE DE ERROR TIENE ALGO-->


        <?php 
          if ($exitoZ!="")
          { echo "<div class=\"input-group-text alert-success\" role=\"basic-addon1\" role=\"alert\" align=\"center\">".$exitoZ."</div>"; }
        ?>
                               <!-- SOLO ES VISIBLE SI LA VARIABLE DE ÉXITO TIENE ALGO-->


  
  </div>


         

</div><!-- cierre form- row -->

        </form>



      </div> <!-- cierre card body -->

    </div>  <!-- cierre card -->
              

                    

    


  <div class="card mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             
              <thead>
                <tr>
                  <th>Número Restringido:</th>
                  <th>Causa - Observación:</th>
                  <th>Acción 1</th>
                  <th>Acción 2</th>
                </tr>
              </thead>
                          
              
              <tbody>

                <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->

                <tr>
                  <td><?php echo $row_datos_selecc["$nombdato"]; ?> </td>

                  <td><?php echo $row_datos_selecc["talonario_causa"]; ?> </td>

<td align="center">

  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal"
          data-target="#modificar<?php echo $row_datos_selecc["$idtbla"]; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                     <i class="fas fa-edit"></i> &nbsp; Modificar
  </button>    
                    
</td>


<!-- ini modal editar -->

<div class="modal fade" id="modificar<?php echo $row_datos_selecc["$idtbla"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Editar o Modificar!!!</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">

      

        <div class="form-row">
        <div class="input-group col-lg-12">


<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-edit fa-lg"></i></span> 
</div>
  <input maxlength="19" type="text" class="form-control" id="dato_selecc" name="dato_selecc" value="<?php echo $row_datos_selecc["$nombdato"]; ?>">
 
       
        </div>
        </div>


 <div class="form-row mt-1">
        <div class="input-group col-lg-12">  


<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="far fa-sticky-note fa-lg"></i></span> 
</div>
  <input maxlength="59" type="text" class="form-control" id="dato_causa" name="dato_causa" value="<?php echo $row_datos_selecc["talonario_causa"]; ?>">
 
       
        </div>
        </div>











      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_selecc" class="btn btn-info" value="<?php echo $row_datos_selecc["$idtbla"]; ?>">
              Modificar</button>  

      </div>
      </form>
      


    </div>
  </div>
</div>


<!-- cierre modal de editar -->




<td align="center">

  <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
          data-target="#borrar<?php echo $row_datos_selecc["$idtbla"]; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                     <i class="far fa-trash-alt"></i> &nbsp; Eliminar
  </button>                 

</td>

<!-- ini modal eliminar -->

<div class="modal fade" id="borrar<?php echo $row_datos_selecc["$idtbla"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
        El dato: <b>&nbsp;"&nbsp; <?php echo $row_datos_selecc["$nombdato"];?> &nbsp;"&nbsp;</b> sera removido de la base de datos. 
      </div>
      <div class="modal-footer">

  <form method="post">

    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrar_selecc" class="btn btn-danger" value="<?php echo $row_datos_selecc["$idtbla"]; ?>" >
          Eliminar</button>

  </form>


      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->







                  
                </tr>
                


                 <?php } while ($row_datos_selecc = mysqli_fetch_assoc($datos_selecc)); ?>

                
              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->

        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>  -->

  </div> <!-- cierre card -->
















                           

  </div>   <!-- cierre container fluid -->
</div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
