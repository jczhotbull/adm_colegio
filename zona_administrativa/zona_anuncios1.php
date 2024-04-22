<?php

include("identificador.php");



include("../conectar.php");









if (array_key_exists("submit",$_POST))// chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba

   {


$id_anunXXYY =  $_POST['id_del_anun'];


              if (strlen($_POST['titulo_mod']) >99 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "El asunto supera los 100 caracteres."; }


                  if (strlen($_POST['contenido_mod']) >249 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "El contenido supera los 250 caracteres."; }


                  if (strlen($_POST['info_mod']) >249 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "El contenido supera los 250 caracteres."; }



      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";            
              }


      else      // Sequencia de update
    {
       


            $sql_upd_anun = "UPDATE anuncios    SET titulo_anun = '".mysqli_real_escape_string($enlace,$_POST['titulo_mod'])."',
                            contenido_anun = '".mysqli_real_escape_string($enlace,$_POST['contenido_mod'])."',

                                                    fecha_anun = now(),


                            info_anun = '".mysqli_real_escape_string($enlace,$_POST['info_mod'])."'


                                            WHERE id_anuncio = '$id_anunXXYY' ";



                                  if (!mysqli_query($enlace,$sql_upd_anun))      // actualiza y si no logra ingresar los datos...
                                       {
                                        
                                        $errorZ .= "&nbsp; <b> - Anuncio/Nota, no actualizado. </b> (Cod. A_a.). ";             
                                        mysqli_close($enlace);

                                       }               

                                    else{

                                      $exitoZ .= "&nbsp; <b> - Anuncio/Nota, actualizado. </b> "; 

                                         }



       }







}  // cierre de que actualizo...




mysqli_close($enlace);  


?>



<?php include ("Header.php"); ?>

<div class="content-wrapper">
<div class="container-fluid">







    <div class="card  mx-auto">

      <div class="card-body">


          <div class="form-row">


              <div class="col-md-4 col-lg-4 mb-3">

                <div class="input-group-text alert-secondary text-left text-truncate" role="alert" id="basic-addon1">
                <i class="fas fa-bullhorn fa-lg"></i>&nbsp;&nbsp; <b> Anuncio en panel de representantes: </b></div> 

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

$query_anun = "SELECT * FROM anuncios

        WHERE flag_anun = '1'  LIMIT 1 ";

          $resultquery_anun = mysqli_query($enlace,$query_anun);
          $fila_query_anun=mysqli_fetch_assoc($resultquery_anun); 




mysqli_close($enlace);




?>










        <form method="POST">


        <div class="form-row">



 <input type="hidden" id="id_del_anun"  name="id_del_anun"
    value="<?php echo $fila_query_anun['id_anuncio']; ?>">  <!-- para saber donde guardar el cambio -->




          <div class="input-group col-lg-6 mt-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-secondary" id="basic-addon1"><i class="far fa-bookmark fa-lg"></i><i>&nbsp;&nbsp;Asunto / Título:</i></span>  
                  </div>
<input maxlength="99" type="text" class="form-control" id="titulo_mod" name="titulo_mod" value="<?php echo $fila_query_anun["titulo_anun"]; ?>">
                   <!--  <button type="submit" name="submit" class="btn btn-success btn-group">Guardar</button>  -->
                    
          </div>



        </div><!-- cierre row -->






        <div class="form-row">


          <div class="input-group col-lg-12 mt-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-secondary" id="basic-addon1"><i class="fas fa-bullhorn fa-lg"></i><i>&nbsp;&nbsp;Contenido del anuncio:</i></span>  
                  </div>
<input maxlength="249" type="text" class="form-control" id="contenido_mod" name="contenido_mod" value="<?php echo $fila_query_anun["contenido_anun"]; ?>">
                   <!--  <button type="submit" name="submit" class="btn btn-success btn-group">Guardar</button>  -->
                    
          </div>



        </div><!-- cierre row -->


  <div class="form-row mt-5">
  <div class="col-sm-12 col-md-12 col-lg-12  ">

                <div class="input-group-text alert-secondary text-left text-truncate" role="alert" id="basic-addon1">
              La nota breve, en el apartado siguiente, aparece en la misma página del anuncio principal, usarla para otro tipo de mensaje. </div> 

  </div> 
</div>
        <div class="form-row mt-3 mb-2">


          <div class="input-group col-lg-10 mt-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-secondary" id="basic-addon1"><i class="far fa-comment-alt fa-lg"></i><i>&nbsp;&nbsp;Información o nota breve:</i></span>  
                  </div>
<input maxlength="99" type="text" class="form-control" id="info_mod" name="info_mod" value="<?php echo $fila_query_anun["info_anun"]; ?>">
                   <!--  <button type="submit" name="submit" class="btn btn-success btn-group">Guardar</button>  -->
                    
          </div>



        </div><!-- cierre row -->






        <div class="form-row">

               

            <div class="col-lg-4 mt-2">

            <button type="submit" name="submit" class="btn btn-secondary btn-block">
            <i class="far fa-comments fa-lg"></i> &nbsp; Limpiar y/o publicar. </button>

              </div>


      </div>

        

         

        </div><!-- cierre row -->

        </form>




        <div class="form-row ml-3 mt-2">

        <div class="text-muted"><b>Info1:</b> Para desactivar el "Anuncio", borre el <b> "Asunto"  </b> y el  <b>"Contenido" </b> por completo.</div>       
        
       </div>



       <div class="form-row ml-3 mt-2">

        <div class="text-muted"><b>Info2:</b> La "Información o nota breve" se muestra y funciona de manera independiente al anuncio. </div>       
        
       </div>

           <div class="form-row ml-3 mt-2">

        <div class="text-muted"><b>Info3:</b> Para desactivar la "Información o nota breve" borre el <b>"texto escrito"</b> por completo.  </div>       
        
       </div>




      
        







      </div> <!-- cierre card body -->

    </div>  <!-- cierre card -->







                           
</div>   <!-- cierre container fluid -->
</div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
