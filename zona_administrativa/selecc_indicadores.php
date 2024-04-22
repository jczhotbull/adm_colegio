<?php

include("identificador.php");


$alerta_principal = "0";







    // fase para agregar un nuevo dato a la base de datos referente a los seleccionables

if (array_key_exists("submit",$_POST))// chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba

   {

$alerta_principal = "2";

      include("../conectar.php");


              if (strlen($_POST['dato_selecc']) >249 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "La descripción supera los 249 caracteres."; }

      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";            
              }


      else      // 
    
       {

        $dato = $_POST["dato_selecc"];
        $asignatura = $_POST["asignatura"];


           $query = "INSERT INTO plantilla_indicadores(ind_materia, ind_desc, en_lapso)
                  VALUES ( '$asignatura', '".mysqli_real_escape_string($enlace,$_POST['dato_selecc'])."', 'Todos'  )";


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



    }  // cierre if relacionado si se envio algo...
    




if(isset($_POST['borrar_selecc_des']))
    {       

      include("../conectar.php");   


                      $queryD = "DELETE FROM plantilla_indicadores WHERE id_indicador = '$_POST[borrar_selecc_des]' LIMIT 1";

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

                         $exitoZ = "<b>--&nbsp; El registro &nbsp;--</b> ha sido eliminado.";

                      }
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
                             mysqli_close($enlace);            
                          }

                                            

    }







 if(isset($_POST['editar_selecc_des']))
        {

$lapsello = $_POST['mod_lapso_es_es'];

if (strlen($_POST['dato_mod_descripcion']) >249 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "El dato supera los 249 caracteres."; }

      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }



 else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");

           // $dato = $_POST["nombre_area"];




   $sql = "UPDATE plantilla_indicadores SET ind_desc = '".mysqli_real_escape_string($enlace,$_POST['dato_mod_descripcion'])."', en_lapso = '$lapsello' 
                                                            
                                WHERE id_indicador ='$_POST[editar_selecc_des]' LIMIT 1 ";

                       
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
                     $exitoZ = "Descripción Modificada"; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";            
                          }

                      mysqli_close($enlace);  


        }   


}




?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_php/lista_selecc_indicadores.php"); ?>  <!-- hace la lista de areas y/o especialidades y la de ramas -->



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
                <i class="fas fa-network-wired fa-lg"></i>&nbsp;&nbsp; <b> Aprendizajes y/u Objetivos: </b></div>  

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


          <div class="input-group col-lg-8 mt-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-plus fa-lg"></i></span>  
                  </div>
<input type="text" maxlength="249" class="form-control" id="dato_selecc" name="dato_selecc" placeholder="Agregar descripción..." aria-label="dato_selecc" aria-describedby="basic-addon1" required>
                 
                    
          </div>


               <div class="input-group col-lg-3 mt-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-success" id="basic-addon1"><i class="fab fa-hubspot fa-lg"></i></span>  
                    </div>
                 
                            <select class="form-control" id="asignatura" name="asignatura" required>
                              
                                <option selected disabled value="">Asociar con la asignatura...</option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_dependientes1['ind_materia']; ?>"><?php echo $row_datos_dependientes1['ind_materia']; ?></option>

                                <?php } while ($row_datos_dependientes1 = mysqli_fetch_assoc($datos_dependientes1)); ?>   

                            
                                
                              
                        </select>
                 
                 </div>

            <div class="col-lg-1 mt-2">

            <button type="submit" name="submit" class="btn btn-success btn-block">
            Guardar</button>

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
                  <th>Descripción del aprendizaje:</th>
                  <th>Asociada con:</th>

                  <th>Lapso/momento:</th>
                  
                  <th>Acción 1</th>
                  <th>Acción 2</th>
                </tr>
              </thead>
                          
              
              <tbody>

                <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->

                <tr>
                  <td><?php echo $row_datos_selecc['ind_desc']; ?> </td>
                  <td><?php echo $row_datos_selecc['ind_materia']; ?> </td>
                  <td><?php echo $row_datos_selecc['en_lapso']; ?> </td>

                  
                 


<td align="center">



  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal"
          data-target="#modificar<?php echo $row_datos_selecc['id_indicador']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                     <i class="fas fa-edit"></i> &nbsp; Modificar
  </button>    




</td>



<!-- ini modal editar -->
<div class="modal fade " id="modificar<?php echo $row_datos_selecc['id_indicador']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
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
         
 <div class="input-group col-lg-9">
 <div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-edit fa-lg"></i>&nbsp;Descripción:</span>   
 </div>
  <input type="text" maxlength="249" class="form-control" id="dato_mod_descripcion" name="dato_mod_descripcion" value="<?php echo $row_datos_selecc['ind_desc']; ?>">
  </div>   


<div class="col-lg-3">
     
      <select class="form-control" id="mod_lapso_es_es" name="mod_lapso_es_es" required>

        <option selected value="<?php echo $row_datos_selecc['en_lapso']; ?>"><?php echo $row_datos_selecc['en_lapso']; ?></option>
        <option disabled></option>
        <option value="1°">1°</option>
        <option value="2°">2°</option>
        <option value="3°">3°</option>
        <option value="Todos">Todos</option>

      </select>

</div>




        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_selecc_des" class="btn btn-info" value="<?php echo $row_datos_selecc['id_indicador']; ?>">
              Modificar</button>  
      </div>
      </form>
      </div>
  </div>
</div>
<!-- cierre modal de editar -->
















<td align="center">

  <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
          data-target="#borrar<?php echo $row_datos_selecc['id_indicador']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                     <i class="far fa-trash-alt"></i> &nbsp; Eliminar
  </button>                 

</td>



<!-- ini modal eliminar -->

<div class="modal fade" id="borrar<?php echo $row_datos_selecc['id_indicador']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
        La descripción: <b>&nbsp;"&nbsp; <?php echo $row_datos_selecc['ind_desc']; ?> &nbsp;"&nbsp;</b> sera removida de la base de datos. 
      </div>
      <div class="modal-footer">

  <form method="post">

    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrar_selecc_des" class="btn btn-danger" value="<?php echo $row_datos_selecc['id_indicador']; ?>" >
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
