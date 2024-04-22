<?php

include("identificador.php");


$alerta_principal = "0";


// los siguientes permiten eliminar un dato

    if(isset($_POST['borrar_selecc']))
    {

           // $borrar_id = $_POST['borrar_selecc'];
           // $errorZ = " <p> <b>" . $borrar_id . " </b> </p>"; // me ayudan a saber si se esta agarrando el id correcto...

      include("../conectar.php");   

$alerta_principal = "2";

                      $queryC = "SELECT * FROM plantilla_areas WHERE id_area = '$_POST[borrar_selecc]' LIMIT 1";

                      $resultC = mysqli_query($enlace,$queryC);
                      $fila=mysqli_fetch_array($resultC);         // lo anterior me permite tener el nombre del registro...


                      $queryD = "DELETE FROM plantilla_areas WHERE id_area = '$_POST[borrar_selecc]' LIMIT 1";

                      if (!mysqli_query($enlace,$queryD))      // si no ha logrado borrar el dato
                         {
                          $errorZ="- Error - Dato actualmente usado en un registro.";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



                      else {  

                         $exitoZ = "<b>--&nbsp; " . $fila['nombre_area'] . " &nbsp;--</b> ha sido eliminado.";

                      }
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
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

      if (strlen($_POST['dato_selecc']) >40 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "El dato supera los 40 caracteres."; }

      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");

           // $dato = $_POST["nombre_area"];

   $ramax = $_POST["rama"];
   $sql = "UPDATE plantilla_areas SET nombre_area = '".mysqli_real_escape_string($enlace,$_POST['dato_selecc'])."' ,
                                         id_ramas =  '$_POST[rama]'
                                                            
                                WHERE id_area='$_POST[editar_selecc]' LIMIT 1 ";

                       
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
                     $exitoZ = "Dato Modificado"; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";            
                          }

                      mysqli_close($enlace);  


        }   

    } // cierre if en caso de actualizar  

       



    // fase para agregar un nuevo dato a la base de datos referente a los seleccionables

if (array_key_exists("submit",$_POST))// chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba

   {

$alerta_principal = "2";

      include("../conectar.php");


              if (strlen($_POST['dato_selecc']) >40 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "El dato supera los 40 caracteres."; }

      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";            
              }


      else      // Sequencia de chequeo, verifica si el dato ya está registrado en la BD...
    {
       $querydato = "SELECT id_area FROM plantilla_areas WHERE nombre_area ='".mysqli_real_escape_string($enlace,$_POST['dato_selecc'])."' LIMIT 1";

                  $resultdato = mysqli_query($enlace,$querydato);

    if (mysqli_num_rows($resultdato)>0)
      {
       $errorZ="Dato anteriormente registrado.";
      }


          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";            
              }




        else     
       {

        $dato = $_POST["dato_selecc"];
        $ramaz = $_POST["rama"];





$query_conteo = "SELECT * FROM  plantilla_areas
                            WHERE  id_ramas = '$ramaz'                              
                               ";

 $query_s_conteo = mysqli_query($enlace, $query_conteo);

$row_conteo = mysqli_num_rows($query_s_conteo);


if ($row_conteo >="12") {

 $errorZ="No puede agregar otra área a la rama seleccionada.";
      }


          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                 mysqli_close($enlace);            
              }




else  { 





        $query = "INSERT INTO plantilla_areas(nombre_area, id_ramas)
                  VALUES ('".mysqli_real_escape_string($enlace,$_POST['dato_selecc'])."'      ,
                            '$ramaz' )";


        if (!mysqli_query($enlace,$query))      // si no ha logrado ingresar los datos
         {
          $errorZ="Error, contactar al Ing.";
          mysqli_close($enlace);

          }


        else
          {

               // Etapa final del registro

          $exitoZ=" <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Registro realizado. </b>";
          mysqli_close($enlace);
          
        }   

        }

      } // cierre del envio...

    } // cierre que verifica si ya estaba en la base


    }  // cierre if relacionado si se envio algo...
    





?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_php/lista_selecc_areas.php"); ?>  <!-- hace la lista de areas y/o especialidades y la de ramas -->



<?php


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


} 

?>









<div class="content-wrapper">
  <div class="container-fluid">

   
    
    <div class="card  mx-auto">

      <div class="card-body">


          <div class="form-row">


              <div class="col-md-4 col-lg-4 mb-3">

                <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
                <i class="fab fa-servicestack fa-lg"></i>&nbsp;&nbsp; <b> Áreas y Especialidades: </b></div> 

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



        <form method="POST">


        <div class="form-row">


          <div class="input-group col-lg-5 mt-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-plus fa-lg"></i></span>  
                  </div>
<input type="text" class="form-control" id="dato_selecc" name="dato_selecc" placeholder="Agregar área o especialidad..." aria-label="dato_selecc" aria-describedby="basic-addon1" required>
                   <!--  <button type="submit" name="submit" class="btn btn-success btn-group">Guardar</button>  -->
                    
          </div>


               <div class="input-group col-lg-5 mt-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-success" id="basic-addon1"><i class="fab fa-hubspot fa-lg"></i></span>  
                    </div>
                 
                            <select class="form-control" id="rama" name="rama" required>
                              
                                <option selected disabled value="">Seleccionar rama...</option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_dependientes1['id_ramas']; ?>"><?php echo $row_datos_dependientes1['nombre_ramas']; ?></option>

                                <?php } while ($row_datos_dependientes1 = mysqli_fetch_assoc($datos_dependientes1)); ?>   

                            
                                
                              
                        </select>
                 
                 </div>

            <div class="col-lg-2 mt-2">

            <button type="submit" name="submit" class="btn btn-success btn-block">
            <i class="fas fa-hdd fa-lg"></i> &nbsp; Guardar</button>

              </div>

        

         

        </div><!-- cierre row -->

        </form>



      </div> <!-- cierre card body -->

    </div>  <!-- cierre card -->
              

                    

    


  <div class="card mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             
              <thead>
                <tr>
                  <th>Área y/o especialidad:</th>
                  <th>Rama a la que pertenece:</th>
                  
                  <th>Acción 1</th>
                  <th>Acción 2</th>
                </tr>
              </thead>
                          
              
              <tbody>

                <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->

                <tr>
                  <td><?php echo $row_datos_selecc['nombre_area']; ?> </td>
                  <td><?php echo $row_datos_selecc['nombre_ramas']; ?> </td>

                  
                 


<td align="center">



  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal"
          data-target="#modificar<?php echo $row_datos_selecc['id_area']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                     <i class="fas fa-edit"></i> &nbsp; Modificar
  </button>    




</td>


<!-- ini modal editar -->

<div class="modal fade" id="modificar<?php echo $row_datos_selecc['id_area']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
          


 <div class="input-group col-lg-12">
 <div class="input-group-prepend">

  <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-edit fa-lg"></i>&nbsp;Área:</span>  
 </div>
  <input type="text" class="form-control" id="dato_selecc" name="dato_selecc" value="<?php echo $row_datos_selecc['nombre_area']; ?>">

 
 </div>



<div class="input-group col-lg-12 mt-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i class="fab fa-hubspot fa-lg"></i>&nbsp;Rama:</span>  
                    </div>
                 
                            <select class="form-control" id="rama" name="rama">

<option value="<?php echo $row_datos_selecc['id_ramas']; ?>" selected><?php echo $row_datos_selecc['nombre_ramas']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                          

                          <?php 

                          include("../conectar.php");

                          $querymod1 = "SELECT * FROM prof_ramas ORDER BY nombre_ramas ASC";

                          $datos_mod1 = mysqli_query($enlace, $querymod1) or die(mysqli_error());

                          $totalRows_datos_mod1 = mysqli_num_rows($datos_mod1);

                          while ($row_datos_mod1 = mysqli_fetch_assoc($datos_mod1))
                          {
                            
?>
    <option value = "<?php echo $row_datos_mod1['id_ramas']; ?>"><?php echo $row_datos_mod1['nombre_ramas'];?></option>
<?php

                          }

                          
                          mysqli_close($enlace); 
                                              

                          ?> 

                             

                                

                                </optgroup>
                                
                              
                        </select>
                 
</div>




       
        </div>
        </div>



      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_selecc" class="btn btn-info" value="<?php echo $row_datos_selecc['id_area']; ?>">
              Modificar</button>  

      </div>
      </form>
      


    </div>
  </div>
</div>


<!-- cierre modal de editar -->




<td align="center">

  <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
          data-target="#borrar<?php echo $row_datos_selecc['id_area']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                     <i class="far fa-trash-alt"></i> &nbsp; Eliminar
  </button>                 

</td>

<!-- ini modal eliminar -->

<div class="modal fade" id="borrar<?php echo $row_datos_selecc['id_area']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
        El dato: <b>&nbsp;"&nbsp; <?php echo $row_datos_selecc['nombre_area'];?> &nbsp;"&nbsp;</b> sera removido de la base de datos. 
      </div>
      <div class="modal-footer">

  <form method="post">

    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrar_selecc" class="btn btn-danger" value="<?php echo $row_datos_selecc['id_area']; ?>" >
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



<script type="text/javascript">
  
  $(document).ready( function() {
  $('#example').dataTable( {
    "pageLength": 50
});
} )
</script>











                           

  </div>   <!-- cierre container fluid -->
</div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
