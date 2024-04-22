
<!-- ini modal eliminar logo -->

<div class="modal fade" id="agregar_extra<?php echo $row_datos_estudiantes['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">
        <i class="fas fa-exclamation-triangle fa-lg"></i> &nbsp;Incorporar en lista de extra catedra o becado!!!</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Seleccione la opción en la cual desea sea incorporado el estudiante:  
        <br> <b>"<?php echo $row_datos_estudiantes['apellidos_estu'];?>,  <?php echo $row_datos_estudiantes['nombre_estu'];?> 
        "</b>.


<br><br>
 <div class="input-group col-md-12 mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-success" id="basic-addon1">Seleccionar: &nbsp;&nbsp; <i class="fas fa-hand-point-right fa-lg"></i></span>  
                    </div>     <form method="post" name="incorporar_estu_extra"> 

                            <select class="form-control importantex" id="actividad_extra" name="actividad_extra" required>

                              <option selected disabled></option>

                              <?php 
                                          include("../conectar.php");

                                          $queryopciones2 = "SELECT * FROM plantilla_areas, prof_ramas 
                                                                  where plantilla_areas.id_ramas = prof_ramas.id_ramas
                                                                  and prof_ramas.id_ramas = 4 
                                                                   Group by nombre_area asc";                                    

                                          $datos_opciones2 = mysqli_query($enlace, $queryopciones2) or die(mysqli_error());
                                      
                                          while ($row_datos_opciones2 = mysqli_fetch_assoc($datos_opciones2))
                                          {                                            
                ?>
                    <option value = "<?php echo $row_datos_opciones2['id_area']; ?>"><?php echo $row_datos_opciones2['nombre_area'];?></option>
                <?php
                                          }                                          
                                          mysqli_close($enlace);                                                              

                                          ?> 


                                          <option disabled></option>

                              <?php 
                                          include("../conectar.php");

                                          $queryopciones2 = "SELECT * FROM plantilla_areas, prof_ramas 
                                                                  where plantilla_areas.id_ramas = prof_ramas.id_ramas
                                                                  and prof_ramas.id_ramas = 6 
                                                                   Group by nombre_area asc";                                    

                                          $datos_opciones2 = mysqli_query($enlace, $queryopciones2) or die(mysqli_error());
                                      
                                          while ($row_datos_opciones2 = mysqli_fetch_assoc($datos_opciones2))
                                          {                                            
                ?>
                    <option value = "<?php echo $row_datos_opciones2['id_area']; ?>"><?php echo $row_datos_opciones2['nombre_area'];?></option>
                <?php
                                          }                                          
                                          mysqli_close($enlace);                                                              

                                          ?> 

                                          <option disabled></option>

                              <?php 
                                          include("../conectar.php");

                                          $queryopciones2 = "SELECT * FROM plantilla_areas, prof_ramas 
                                                                  where plantilla_areas.id_ramas = prof_ramas.id_ramas
                                                                  and prof_ramas.id_ramas = 11 
                                                                   Group by nombre_area asc";                                    

                                          $datos_opciones2 = mysqli_query($enlace, $queryopciones2) or die(mysqli_error());
                                      
                                          while ($row_datos_opciones2 = mysqli_fetch_assoc($datos_opciones2))
                                          {                                            
                ?>
                    <option value = "<?php echo $row_datos_opciones2['id_area']; ?>"><?php echo $row_datos_opciones2['nombre_area'];?></option>
                <?php
                                          }                                          
                                          mysqli_close($enlace);                                                              

                                          ?> 



                                          <option disabled></option>

                              <?php 
                                          include("../conectar.php");

                                          $queryopciones2 = "SELECT * FROM plantilla_areas, prof_ramas 
                                                                  where plantilla_areas.id_ramas = prof_ramas.id_ramas
                                                                  and prof_ramas.id_ramas = 12 
                                                                   Group by nombre_area asc";                                    

                                          $datos_opciones2 = mysqli_query($enlace, $queryopciones2) or die(mysqli_error());
                                      
                                          while ($row_datos_opciones2 = mysqli_fetch_assoc($datos_opciones2))
                                          {                                            
                ?>
                    <option value = "<?php echo $row_datos_opciones2['id_area']; ?>"><?php echo $row_datos_opciones2['nombre_area'];?></option>
                <?php
                                          }                                          
                                          mysqli_close($enlace);                                                              

                                          ?> 


                                           <option disabled></option>

                              <?php 
                                          include("../conectar.php");

                                          $queryopciones2 = "SELECT * FROM plantilla_areas, prof_ramas 
                                                                  where plantilla_areas.id_ramas = prof_ramas.id_ramas
                                                                  and prof_ramas.id_ramas = 15 
                                                                   Group by nombre_area asc";                                    

                                          $datos_opciones2 = mysqli_query($enlace, $queryopciones2) or die(mysqli_error());
                                      
                                          while ($row_datos_opciones2 = mysqli_fetch_assoc($datos_opciones2))
                                          {                                            
                ?>
                    <option value = "<?php echo $row_datos_opciones2['id_area']; ?>"><?php echo $row_datos_opciones2['nombre_area'];?></option>
                <?php
                                          }                                          
                                          mysqli_close($enlace);                                                              

                                          ?> 



                                           <option disabled></option>

                              <?php 
                                          include("../conectar.php");

                                          $queryopciones2 = "SELECT * FROM plantilla_areas, prof_ramas 
                                                                  where plantilla_areas.id_ramas = prof_ramas.id_ramas
                                                                  and prof_ramas.id_ramas = 16 
                                                                   Group by nombre_area asc";                                    

                                          $datos_opciones2 = mysqli_query($enlace, $queryopciones2) or die(mysqli_error());
                                      
                                          while ($row_datos_opciones2 = mysqli_fetch_assoc($datos_opciones2))
                                          {                                            
                ?>
                    <option value = "<?php echo $row_datos_opciones2['id_area']; ?>"><?php echo $row_datos_opciones2['nombre_area'];?></option>
                <?php
                                          }                                          
                                          mysqli_close($enlace);                                                              

                                          ?> 




                                           <option disabled></option>

                                                                  
              
                    <option value = "88">Becado</option>
                    
              


                                </select>
                 
</div>

                                         <?php 
                                          include("../conectar.php");

$el_idesito = $row_datos_estudiantes['id_estud'];

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
  
         <br><b><?php echo $row_datos_estudiantes['nombre_estu'];?></b> pertenece actualmente a:

           <?php do{?> <?php echo $row_ya_esta['nombre_area']; ?>,
         

         <?php } while ($row_ya_esta = mysqli_fetch_assoc($datos_ya_esta)); ?>   
</div>

        <br><br><b>Nota:</b> Por intermedio de este panel podrá incorporar a los estudiantes en diversos listados especiales,
        si requiere remover a un estudiante de uno de los listados, ubique al estudiante deseado en el listado correspondiente.

      </div>
      <div class="modal-footer">



    <input   type="hidden" id="id_del_est_UU" name="id_del_est_UU"
    value="<?php echo $row_datos_estudiantes['id_estud']; ?>"> 


    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="incorporate_a_el" id="incorporate_a_el" class="btn btn-success" >
          Incorporar</button>   <!-- coloco el id de la direccion ya que al estar en cascada con esto elimino el registro plantilla -->    

  </form>




      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->