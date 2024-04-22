<div class="form-row">
<div class="col-md-12">

        <div class="form-row">  <!-- row cero-->
                  <div class="col-md-12 text-left">
                  <b class="text-info"> Datos personales: </b>
                  </div>
        </div>   

        <div class="form-row">

        <div class="input-group col-md-3 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-file-alt"></i></span> 
</div>
  <input type="text" class="form-control form-control-sm " id="mod_nombre_per" name="mod_nombre_per" value="<?php echo $row_datos_plantilla['nombre_per']; ?>"> 
       
        </div>


        <div class="input-group col-md-3 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="far fa-file-alt"></i></span> 
</div>
  <input type="text" class="form-control form-control-sm" id="mod_apellido_per" name="mod_apellido_per" value="<?php echo $row_datos_plantilla['apellido_per']; ?>"> 
       
        </div>


        <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="far fa-id-card"></i></span> 
</div>
  <input type="text" class="form-control form-control-sm " id="mod_ci_per" name="mod_ci_per" value="<?php echo $row_datos_plantilla['ci_per']; ?>"> 
       
        </div>


        <div class="input-group col-md-4 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-at"></i></span>  
                  </div>
                    <input type="email" class="form-control form-control-sm" id="mod_email_per" name="mod_email_per" value="<?php echo $row_datos_plantilla['email_per']; ?>">
        </div>
        


        </div>    <!-- cierre primer row -->



        <div class="form-row">

          <div class="input-group col-md-2 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i class="fa fa-birthday-cake"></i></span>  
                  </div>
                  <input type="date" class="form-control form-control-sm" id="mod_nacimiento_per" name="mod_nacimiento_per" value="<?php echo $row_datos_plantilla['nacimiento_per']; ?>" >
        </div>


               <div class="input-group col-md-2 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-venus-mars"></i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_genero" name="mod_genero">


<?php 

$id_del_sexo = $row_datos_plantilla['id_sexo'];


include("../conectar.php");   

$querySSS = "SELECT * FROM sexo
                        
         WHERE  id_sexo = '$id_del_sexo'
            
            ";

$datos_SSS = mysqli_query($enlace, $querySSS) or die(mysqli_error());

$row_datos_SSS = mysqli_fetch_array($datos_SSS); 


mysqli_close($enlace);


 ?>





<option value="<?php echo $row_datos_SSS['id_sexo']; ?>" selected><?php echo $row_datos_SSS['nombre_sexo']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM sexo ORDER BY nombre_sexo ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_sexo']; ?>"><?php echo $row_datos_mod2['nombre_sexo'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?>                             
                              
                            </select>                 
                 </div>



        <div class="input-group col-md-3 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>  
                  </div>
<input type="text" class="form-control form-control-sm" id="mod_celular_per" name="mod_celular_per" value="<?php echo $row_datos_plantilla['celular_per']; ?>">
                </div>


                <div class="input-group col-md-3 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-phone-volume"></i></span>  
                  </div>
                    <input type="text" class="form-control form-control-sm" id="mod_telefono_per" name="mod_telefono_per" value="<?php echo $row_datos_plantilla['telefono_per']; ?>" >
                </div>

                

                 <div class="input-group col-md-2 mb-2">
                                   
                 
                            <select class="form-control form-control-sm" id="mod_paisx" name="mod_paisx"> 
                              
                              <option value="<?php echo $row_datos_plantillaPPP['id_pais']; ?>" selected><?php echo $row_datos_plantillaPPP['nombre_pais']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_paises ORDER BY nombre_pais ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_pais']; ?>"><?php echo $row_datos_mod2['nombre_pais'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                         ?>                                
                              

                            </select>
                 
                 </div>


        </div>  <!-- cierre 2do row -->



        <div class="form-row">  <!-- 3er row -->
                  <div class="col-md-12 mt-4 text-left">
                  <b class="text-info"> Dirección: </b>
                  </div>
        </div>


        <div class="form-row">  <!-- 4to row -->

          <div class="input-group input-group-sm col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-map-pin"></i></span>  
                    </div>
                 
                            <select class="form-control form-control-sm" id="mod_ciudad" name="mod_ciudad">
                              
                              <option value="<?php echo $row_datos_plantillaDDD['id_ciudad']; ?>" selected><?php echo $row_datos_plantillaDDD['nombre_ciudad']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_ciudad']; ?>"><?php echo $row_datos_mod2['nombre_ciudad'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              
                         ?>                 
                                                                                   
                              
                        </select>
                 
                 </div>



                 <div class="input-group input-group-sm col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i>Municipio:</i></span>  
                    </div>
                 
                            <select class="form-control form-control-sm" id="mod_municipio" name="mod_municipio">
                              
                              <option value="<?php echo $row_datos_plantillaDDD['id_municipio']; ?>" selected><?php echo $row_datos_plantillaDDD['nombre_municipio']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_municipio ORDER BY nombre_municipio ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_municipio']; ?>"><?php echo $row_datos_mod2['nombre_municipio'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                         ?>                 
                              
                                                    
                              
                        </select>                 
                 </div>



                 <div class="input-group input-group-sm col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i>Pquia:</i></span>  
                    </div>
                 
                            <select class="form-control form-control-sm" id="mod_parroquia" name="mod_parroquia">
                              
                              <option value="<?php echo $row_datos_plantillaDDD['id_parroquia']; ?>" selected><?php echo $row_datos_plantillaDDD['nombre_parroquia']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_parroquia ORDER BY nombre_parroquia ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_parroquia']; ?>"><?php echo $row_datos_mod2['nombre_parroquia'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                         ?>                 
                              
                             
                        </select>                 
                 </div>

        </div> <!-- cierre 4to row -->



        <div class="form-row">  <!-- inicio 5to row -->


          <div class="input-group input-group-sm col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i>Cerca o en la Av:</i></span>  
                    </div>                 
                            <select class="form-control form-control-sm" id="mod_avenida" name="mod_avenida">
                              
                              <option value="<?php echo $row_datos_plantillaDDD['id_avenida']; ?>" selected><?php echo $row_datos_plantillaDDD['nombre_av']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_avenidas ORDER BY nombre_av ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_avenida']; ?>"><?php echo $row_datos_mod2['nombre_av'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                         ?>                 
                              
                                                        
                              
                        </select>                 
           </div>


           <div class="input-group input-group-sm col-md-6 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i>Calle, Zona, Sector ó Urb.:</i></span>  
                  </div>
                    <input type="text" class="form-control form-control-sm" id="mod_calle" name="mod_calle" value="<?php echo $row_datos_plantillaDDD['dir_calle_sector']; ?>">
          </div>



          <div class="input-group input-group-sm col-md-2 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i>Cód.P:</i></span>  
                    </div>
                 
                            <select class="form-control form-control-sm" id="mod_codigo" name="mod_codigo">
                              
                              <option value="<?php echo $row_datos_plantillaDDD['id_codigo']; ?>" selected><?php echo $row_datos_plantillaDDD['nombre_codigo']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                 <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_codigo ORDER BY nombre_codigo ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_codigo']; ?>"><?php echo $row_datos_mod2['nombre_codigo'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                         ?>     


                              
                                                            
                              
                        </select>                 
          </div>


        </div>   <!-- cierre 5to row -->




        <div class="form-row">  <!-- inicio 6to row -->

          <div class="input-group col-md-3 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-home"></i></span>  
                    </div>                 
                            <select class="form-control form-control-sm" id="mod_vivienda" name="mod_vivienda">                              
                              <option value="<?php echo $row_datos_plantillaDDD['id_vivienda']; ?>" selected><?php echo $row_datos_plantillaDDD['nombre_vivienda']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_vivienda ORDER BY nombre_vivienda ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_vivienda']; ?>"><?php echo $row_datos_mod2['nombre_vivienda'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                         ?>    


                              
                             
                               
                              
                        </select>                 
                 </div>


          <div class="input-group input-group-sm col-md-4 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i>de nombre:</i></span>  
                  </div>
                    <input type="text" class="form-control form-control-sm" id="mod_nombre_vi" name="mod_nombre_vi" value="<?php echo $row_datos_plantillaDDD['dir_nombre_vivienda']; ?>">
                </div>



                 <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i>Piso:</i></span>  
                    </div>
                 
                            <select class="form-control form-control-sm" id="mod_piso" name="mod_piso">
                              
                              <option value="<?php echo $row_datos_plantillaDDD['id_piso']; ?>" selected><?php echo $row_datos_plantillaDDD['nombre_piso']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_piso ORDER BY nombre_piso ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_piso']; ?>"><?php echo $row_datos_mod2['nombre_piso'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                         ?>    

                              
                                                      
                              
                        </select>
                 
                 </div>



                 <div class="input-group col-md-2 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-hashtag"></i></span>  
                    </div>                 
                            <select class="form-control form-control-sm" id="mod_numero" name="mod_numero">
                              
                              <option value="<?php echo $row_datos_plantillaDDD['id_numero']; ?>" selected><?php echo $row_datos_plantillaDDD['nombre_numero']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php 

                          include("../conectar.php");

              $querymod2 =  "SELECT * FROM d_numero ORDER BY nombre_numero ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_numero']; ?>"><?php echo $row_datos_mod2['nombre_numero'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                         ?>    

                              
                                                    
                              
                        </select>
                 
                 </div>
          



        </div>   <!-- cierre 6to row -->




         <div class="form-row">  <!-- 7mo row -->
                  <div class="col-md-6 mt-4 pr-4 text-left">
                  <b class="text-info"> Estudios realizados: </b>
                  </div>

                  <div class="col-md-6 mt-4 pr-4 text-left">
                  <b class="subtext">Actividades en el plantel: </b>
                  </div>

        </div>


<div class="form-row">  <!-- row 1er tabla  -->
<div class="col-md-6 mt-2 pr-4 ">

  <table class="table table-bordered table-hover">
    <thead>
      <tr class="text-info">
        <th>Carrera:</th>
        <th>Mención:</th>
        <th>Instituto:</th>
      </tr>
    </thead>
    <tbody>
      <tr>


          <?php


 include("../conectar.php");

$queryT = "SELECT * FROM titulos_all, plantilla_titulos, plantilla_mencion, plantilla_instituto
                        
          WHERE  titulos_all.id_titulos = plantilla_titulos.id_titulos
          and    titulos_all.id_mencion = plantilla_mencion.id_mencion
          and  titulos_all.id_instituto = plantilla_instituto.id_instituto
          and        titulos_all.id_per = '$id_perx'

            ";

$datos_plantillaT = mysqli_query($enlace, $queryT) or die(mysqli_error());

$row_datos_plantillaT = mysqli_fetch_array($datos_plantillaT); 


$queryU = "SELECT * FROM titulos_all, plantilla_titulos, plantilla_mencion, plantilla_instituto
                        
          WHERE  titulos_all.id_titulos = plantilla_titulos.id_titulos
          and    titulos_all.id_mencion = plantilla_mencion.id_mencion
          and  titulos_all.id_instituto = plantilla_instituto.id_instituto
          and        titulos_all.id_per = '$id_perx'  LIMIT 1,1

            ";

$datos_plantillaU = mysqli_query($enlace, $queryU) or die(mysqli_error());

$row_datos_plantillaU = mysqli_fetch_array($datos_plantillaU); 


$queryV = "SELECT * FROM titulos_all, plantilla_titulos, plantilla_mencion, plantilla_instituto
                        
          WHERE  titulos_all.id_titulos = plantilla_titulos.id_titulos
          and    titulos_all.id_mencion = plantilla_mencion.id_mencion
          and  titulos_all.id_instituto = plantilla_instituto.id_instituto
          and        titulos_all.id_per = '$id_perx'  LIMIT 2,1

            ";

$datos_plantillaV = mysqli_query($enlace, $queryV) or die(mysqli_error());

$row_datos_plantillaV = mysqli_fetch_array($datos_plantillaV); 


mysqli_close($enlace); 
               
                  
              ?>    


        <td> 

          <input type="hidden" id="id_titulos_allzz1"  name="id_titulos_allzz1" value="<?php echo $row_datos_plantillaT['id_titulos_all']; ?>">

          <select class="form-control form-control-sm" id="mod_titulo1" name="mod_titulo1"> 

<option value="<?php echo $row_datos_plantillaT['id_titulos']; ?>" selected><?php echo $row_datos_plantillaT['nombre_titulos']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/titulos.php"); ?>

              
         </select>
        </td>

        <td>
          <select class="form-control form-control-sm" id="mod_mencion1" name="mod_mencion1">                              
<option value="<?php echo $row_datos_plantillaT['id_mencion']; ?>" selected><?php echo $row_datos_plantillaT['nombre_mencion']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php include("querys_mod_per/menciones.php"); ?>                               

          </select>      
        </td>

        <td>
          <select class="form-control form-control-sm" id="mod_instituto1" name="mod_instituto1">                              
<option value="<?php echo $row_datos_plantillaT['id_instituto']; ?>" selected><?php echo $row_datos_plantillaT['nombre_instituto']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php include("querys_mod_per/institutos.php"); ?> 

          </select> 
        </td>

      </tr>

      <tr>
        <td>
          <input type="hidden" id="id_titulos_allzz2"  name="id_titulos_allzz2" value="<?php echo $row_datos_plantillaU['id_titulos_all']; ?>">
          <select class="form-control form-control-sm" id="mod_titulo2" name="mod_titulo2">

                              <option value="<?php echo $row_datos_plantillaU['id_titulos']; ?>" selected><?php echo $row_datos_plantillaU['nombre_titulos']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/titulos.php"); ?>
                                  <option value="102">Zero, Nada</option>
         </select>
        </td>

        <td>
          <select class="form-control form-control-sm" id="mod_mencion2" name="mod_mencion2">                              
<option value="<?php echo $row_datos_plantillaU['id_mencion']; ?>" selected><?php echo $row_datos_plantillaU['nombre_mencion']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php include("querys_mod_per/menciones.php"); ?>
                                <option value="26">Zero, Nada</option>
          </select> 
        </td>

        <td>
          <select class="form-control form-control-sm" id="mod_instituto2" name="mod_instituto2">                              
<option value="<?php echo $row_datos_plantillaU['id_instituto']; ?>" selected><?php echo $row_datos_plantillaU['nombre_instituto']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php include("querys_mod_per/institutos.php"); ?>
                                <option value="15">Zero, Nada</option> 
          </select> 
        </td>

      </tr>
      <tr>

        <td>
          <input type="hidden" id="id_titulos_allzz3"  name="id_titulos_allzz3" value="<?php echo $row_datos_plantillaV['id_titulos_all']; ?>">
          <select class="form-control form-control-sm" id="mod_titulo3" name="mod_titulo3">                              
                             <option value="<?php echo $row_datos_plantillaV['id_titulos']; ?>" selected><?php echo $row_datos_plantillaV['nombre_titulos']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/titulos.php"); ?>
                                 <option value="102">Zero, Nada</option>
         </select>
        </td>

        <td>
          <select class="form-control form-control-sm" id="mod_mencion3" name="mod_mencion3">                              
<option value="<?php echo $row_datos_plantillaV['id_mencion']; ?>" selected><?php echo $row_datos_plantillaV['nombre_mencion']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                               <?php include("querys_mod_per/menciones.php"); ?>
                               <option value="26">Zero, Nada</option>

          </select> 
        </td>

        <td>
          <select class="form-control form-control-sm" id="mod_instituto3" name="mod_instituto3">                              
<option value="<?php echo $row_datos_plantillaV['id_instituto']; ?>" selected><?php echo $row_datos_plantillaV['nombre_instituto']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php include("querys_mod_per/institutos.php"); ?>
                                <option value="15">Zero, Nada</option> 
          </select> 
        </td>      

      </tr>
    </tbody>
  </table>

</div>




<div class="col-md-6 mt-1">    <!-- row de tablas lado derecho -->


  <div class="form-row pr-2">

  <table class="table table-bordered">
    <thead>
      <tr class="subtext">
        <th>Labora desde:</th>
        <th>Cargo 1°:</th>
        <th>Cargo 2°:</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        <td>  

          <input type="date" class="form-control form-control-sm" id="mod_fecha_ini" name="mod_fecha_ini" aria-label="fecha_ini"
                    aria-describedby="basic-addon1" value="<?php echo $row_datos_plantilla['contratado_desde']; ?>">

        </td>

<?php



include("../conectar.php");

        $queryF = "SELECT * FROM cargos_all, plantilla_cargos
                        
          WHERE  cargos_all.id_cargo = plantilla_cargos.id_cargo
          and    cargos_all.id_contrato = '$id_contratox'
          

            ";

$datos_plantillaF = mysqli_query($enlace, $queryF) or die(mysqli_error());

$row_datos_plantillaF = mysqli_fetch_array($datos_plantillaF); 


        $queryG = "SELECT * FROM cargos_all, plantilla_cargos
                        
          WHERE  cargos_all.id_cargo = plantilla_cargos.id_cargo
          and    cargos_all.id_contrato = '$id_contratox' LIMIT 1,1
          

            ";

$datos_plantillaG = mysqli_query($enlace, $queryG) or die(mysqli_error());

$row_datos_plantillaG = mysqli_fetch_array($datos_plantillaG); 



    if($row_datos_plantillaF['id_grupo'] == "5" )
        /* me permite tener visible el renglon adecuado en caso de que sea profesor etc... */
    {
        $gdiv = "display:show";
        $gdiv2 = "display:none";
        
    }

    else 
    {
        $gdiv = "display:none";
        $gdiv2 = "display:show";
        
        
    }  


    




mysqli_close($enlace); 





 




                   ?>   




        <td>
          <input type="hidden" id="id_cargos_allzz1"  name="id_cargos_allzz1" value="<?php echo $row_datos_plantillaF['id_cargos_all']; ?>">
          <select class="form-control form-control-sm" id="mod_cargo_a" name="mod_cargo_a">                                          
<option value="<?php echo $row_datos_plantillaF['id_cargo']; ?>" selected><?php echo $row_datos_plantillaF['nombre_cargo']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

        <?php include("querys_mod_per/cargos.php"); ?> 

          </select>      
        </td>

        <td>
          <input type="hidden" id="id_cargos_allzz2"  name="id_cargos_allzz2" value="<?php echo $row_datos_plantillaG['id_cargos_all']; ?>">
          <select class="form-control form-control-sm" id="mod_cargo_b" name="mod_cargo_b">                              
<option value="<?php echo $row_datos_plantillaG['id_cargo']; ?>" selected><?php echo $row_datos_plantillaG['nombre_cargo']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM plantilla_cargos WHERE id_cargo != '46'
              AND id_cargo != '27' AND id_cargo != '29' AND id_cargo != '32'  AND id_cargo != '58'  AND id_cargo != '59'  AND id_cargo != '60'  AND id_cargo != '61'  AND id_cargo != '62'
              ORDER BY nombre_cargo ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_cargo']; ?>"><?php echo $row_datos_mod2['nombre_cargo'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              
                         ?> 

                         <option value="46">Zero, vacío...</option>          
          </select> 
        </td>

      </tr>
      

    </tbody>
  </table>

</div> <!-- cierre form-row tabla 1 -->






<div class="form-row pr-2">

  <table class="table table-bordered">
    <thead>
      <tr class="text-muted">  
        <th>Área 1:</th>
        <th>Área 2:</th>
        <th>Área 3:</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        <?php



include("../conectar.php");

        $queryX = "SELECT * FROM areas_all, plantilla_areas
                        
          WHERE  areas_all.id_area = plantilla_areas.id_area
          and    areas_all.id_contrato = '$id_contratox'
          

            ";

$datos_plantillaX = mysqli_query($enlace, $queryX) or die(mysqli_error());

$row_datos_plantillaX = mysqli_fetch_array($datos_plantillaX); 


        $queryL = "SELECT * FROM areas_all, plantilla_areas
                        
          WHERE  areas_all.id_area = plantilla_areas.id_area
          and    areas_all.id_contrato = '$id_contratox' LIMIT 1,1
          

            ";

$datos_plantillaL = mysqli_query($enlace, $queryL) or die(mysqli_error());

$row_datos_plantillaL = mysqli_fetch_array($datos_plantillaL); 


        $queryI = "SELECT * FROM areas_all, plantilla_areas
                        
          WHERE  areas_all.id_area = plantilla_areas.id_area
          and    areas_all.id_contrato = '$id_contratox' LIMIT 2,1
          

            ";

$datos_plantillaI = mysqli_query($enlace, $queryI) or die(mysqli_error());

$row_datos_plantillaI = mysqli_fetch_array($datos_plantillaI); 


mysqli_close($enlace); 


                   ?>   




        <td>  
          <input type="hidden" id="id_areas_allzz1"  name="id_areas_allzz1" value="<?php echo $row_datos_plantillaX['id_areas_all']; ?>">
          <select class="form-control form-control-sm" id="mod_area_a" name="mod_area_a">                              
<option value="<?php echo $row_datos_plantillaX['id_area']; ?>" selected><?php echo $row_datos_plantillaX['nombre_area']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                          <?php include("querys_mod_per/areas.php"); ?>
                                          <option value="66">Zero, vacío...</option>                
          </select>

        </td>

        <td>
          <input type="hidden" id="id_areas_allzz2"  name="id_areas_allzz2" value="<?php echo $row_datos_plantillaL['id_areas_all']; ?>">
          <select class="form-control form-control-sm" id="mod_area_b" name="mod_area_b">                              
<option value="<?php echo $row_datos_plantillaL['id_area']; ?>" selected><?php echo $row_datos_plantillaL['nombre_area']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/areas.php"); ?>
                                 <option value="66">Zero, vacío...</option>
          </select> 

        </td>

        <td>
  <input type="hidden" id="id_areas_allzz3"  name="id_areas_allzz3" value="<?php echo $row_datos_plantillaI['id_areas_all']; ?>">
          <select class="form-control form-control-sm" id="mod_area_c" name="mod_area_c">
<option value="<?php echo $row_datos_plantillaI['id_area']; ?>" selected><?php echo $row_datos_plantillaI['nombre_area']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/areas.php"); ?>
                                 <option value="66">Zero, vacío...</option>
          </select> 

        </td>

      </tr>
      

    </tbody>
  </table>

</div> <!-- cierre form-row tabla 2 -->





</div>    <!-- cierre tablas lado derecho -->






</div>  <!-- cierre row 1era tabla-->



<script type="text/javascript">

                  $('select[name=mod_cargo_a]').change(function () {
                     
                      if ($(this).val() == '27' )
                         {  $('.hidden_prof1').show(); 
                    $('.hidden_prof2').hide();   
                             
                         }                      

                       else { 

                          if ($(this).val() == '29' ) 
                          {  $('.hidden_prof1').show();
                      $('.hidden_prof2').hide();
                              
                          }

                            else {  

                              if ($(this).val() == '32' ) 
                                { $('.hidden_prof1').show();
                          $('.hidden_prof2').hide();
                                   
                                }


                                  else {



                                           if ($(this).val() == '58' ) 
                                              { $('.hidden_prof1').show();
                                        $('.hidden_prof2').hide();
                                                 
                                              }



                                        else    { 

                                           if ($(this).val() == '59' ) 
                                              { $('.hidden_prof1').show();
                                        $('.hidden_prof2').hide();
                                                 
                                              }



                                        else    { 

                                           if ($(this).val() == '60' ) 
                                              { $('.hidden_prof1').show();
                                        $('.hidden_prof2').hide();
                                                 
                                              }



                                        else    { 



                                           if ($(this).val() == '61' ) 
                                              { $('.hidden_prof1').show();
                                        $('.hidden_prof2').hide();
                                                 
                                              }



                                        else    { 

                                          if ($(this).val() == '62' ) 
                                              { $('.hidden_prof1').show();
                                        $('.hidden_prof2').hide();
                                                 
                                              }



                                        else    { 

                                           $('.hidden_prof1').hide();
                                           $('.hidden_prof2').show();

                                                }

                                                }

                                                }

                                                }

                                                }


                                 
                                  

                                  }
                         
                                    }                            
                            }
                       });   
</script>    <!-- $row_datos_plantillaF['id_cargo']  -->












<?php



include("../conectar.php");

        $queryQQ = "SELECT * FROM vida_prof
                        
          WHERE  id_per ='$id_perx'
          
            ";

$datos_plantillaQQ = mysqli_query($enlace, $queryQQ) or die(mysqli_error());

$row_datos_plantillaQQ = mysqli_fetch_array($datos_plantillaQQ); 

mysqli_close($enlace);


            ?>




<div class="form-row">  <!-- 2do bloque de rows -->
                  <div class="col-md-12 mt-2 mb-2 text-left">
                  <b class="subtext">Fecha y plantel en el cual comenzó a trabajar: </b>
                  </div>

<input type="hidden" id="id_vida_profzzz"  name="id_vida_profzzz" value="<?php echo $row_datos_plantillaQQ['id_vida_prof']; ?>">

</div>

<div class="form-row">

<div class="input-group col-md-3 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i class="far fa-calendar-check"></i></span>  
                  </div>
<input type="date" class="form-control form-control-sm mod_fecha_ini_plant" id="mod_fecha_ini_plant"
name="mod_fecha_ini_plant" value="<?php echo $row_datos_plantillaQQ['fecha_vida']; ?>" required>
                </div>



                <script type="text/javascript">  

                $('input[name=mod_fecha_ini_plant]').change(function () {
                      if ($(this).val() != '') {
                          
                          $('.mod_plantel_ini').prop('required',true);
                      } else {
                          $('.mod_plantel_ini').prop('required',false);
                          
                      }
                  });   

                 </script>
           




<div class="input-group input-group-sm col-md-4 mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i>Nomb. Plantel</i></span>  
                    </div>
<input type="text" class="form-control form-control-sm mod_plantel_ini" id="mod_plantel_ini"
name="mod_plantel_ini" value="<?php echo $row_datos_plantillaQQ['plantel_vida']; ?>">
                </div>



              <script type="text/javascript">  

                $('input[name=mod_plantel_ini]').change(function () {
                      if ($(this).val() != '') {
                          
                          $('.mod_edad_priv').prop('required',true);
                      } else {
                          $('.mod_edad_priv').prop('required',false);
                          
                      }
                  });   

                 </script>

                



<div class="input-group input-group-sm col-md-2 mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1">Años en Priv.</span>  
                    </div>
<input type="text" class="form-control mod_edad_priv" id="mod_edad_priv" name="mod_edad_priv" aria-label="mod_edad_priv"
 value="<?php echo $row_datos_plantillaQQ['edad_privados']; ?>">
                </div>



              <script type="text/javascript">  

                $('input[name=mod_edad_priv]').change(function () {
                      if ($(this).val() != '') {
                          
                          $('.mod_edad_ofi').prop('required',true);
                      } else {
                          $('.mod_edad_ofi').prop('required',false);
                          
                      }
                  });   

                 </script>
             


<div class="input-group input-group-sm col-md-2 mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1">Años en Ofic.</span>  
                    </div>
<input type="text" class="form-control mod_edad_ofi" id="mod_edad_ofi" name="mod_edad_ofi" aria-label="mod_edad_ofi"
 value="<?php echo $row_datos_plantillaQQ['edad_oficiales']; ?>" >
                </div>




<div class="input-group input-group-sm col-md-1 mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1">Tot:</span>  
                    </div>
<input type="text" class="form-control mod_edad_ofi" id="mod_edad_total" name="mod_edad_total" aria-label="mod_edad_total"
 value="<?php echo $row_datos_plantillaQQ['edad_total']; ?>" >
                </div>
  


</div>




</div>  <!-- cierre row de 12 -->





<div class="col-md-10">



<div class="form-row  mt-2 mb-3 divtabla1 px-2 mr-3" >  <!-- 3do bloque de rows -->

                  <div class="col-md-9 mt-1 mb-1 text-left">
<b class="text-muted hidden_prof1" style="<?php echo $gdiv; ?>"> Horas por grado y asignaturas que atiende semanalmente en este plantel: </b>
<!-- <b class="text-muted hidden_prof2" style="<?php echo $gdiv2; ?>">Sobre la labor en el plantel: </b> -->
                  </div>

                  <div class="col-md-3 mt-1 mb-1 text-right">
<button type="button" id="clearxx<?php echo $id_perx; ?>" class="btn btn-outline-secondary btn-sm hidden_prof1 " style="<?php echo $gdiv; ?>" >Resetear</button>                  
                  </div>

                 <script type="text/javascript">

                   $('#clearxx<?php echo $id_perx; ?>').click(function(){
                   $("#mod_areaAA, #mod_areaBB, #mod_areaCC, #mod_areaDD, #mod_areaEE, #mod_areaFF").val("");
                   $("#mod_gradoAA, #mod_gradoBB, #mod_gradoCC, #mod_gradoDD, #mod_gradoEE, #mod_gradoFF").val("");
                   $("#mod_turnoAA, #mod_turnoBB, #mod_turnoCC, #mod_turnoDD, #mod_turnoEE, #mod_turnoFF").val("");
                   $("#mod_seccionAA, #mod_seccionBB, #mod_seccionCC, #mod_seccionDD, #mod_seccionEE, #mod_seccionFF").val("");
                   $("#mod_horaAA, #mod_horaBB, #mod_horaCC, #mod_horaDD, #mod_horaEE, #mod_horaFF").val("");            
                  });

                 </script> 




<table class="table table-bordered table-sm">
    <thead class="text-muted">
      <tr>
        <th class=" hidden_prof1" style="<?php echo $gdiv; ?>">Asignatura:</th>
        <th class=" hidden_prof1" style="<?php echo $gdiv; ?>">Grado o Año:</th>
        <th class=" hidden_prof1" style="<?php echo $gdiv; ?>">Turno:</th>
        <th class=" hidden_prof2" style="<?php echo $gdiv2; ?>">Turno laboral:</th>
        <th class=" hidden_prof1" style="<?php echo $gdiv; ?>">Sección:</th>
        <th class=" hidden_prof1" style="<?php echo $gdiv; ?>">Horas:</th>
        <th class=" hidden_prof2" style="<?php echo $gdiv2; ?>">Horas por día:</th>
      </tr>
    </thead>


     <?php



include("../conectar.php");

        $queryTRA = "SELECT * FROM asignatura_grado_horas, plantilla_areas, grados, plantilla_turnos, secciones, plantilla_horas
                        
          WHERE  asignatura_grado_horas.id_area = plantilla_areas.id_area
          and    asignatura_grado_horas.id_grado = grados.id_grado
          and    asignatura_grado_horas.id_turno = plantilla_turnos.id_turno
          and    asignatura_grado_horas.id_seccion = secciones.id_seccion
          and    asignatura_grado_horas.id_hora = plantilla_horas.id_hora
          and    asignatura_grado_horas.id_contrato = '$id_contratox'
          ORDER BY id_asig_grad_hora ASC  LIMIT 0,1       

            ";

$datos_plantillaTRA = mysqli_query($enlace, $queryTRA) or die(mysqli_error());

$row_datos_plantillaTRA = mysqli_fetch_array($datos_plantillaTRA); 


$queryTRA1 = "SELECT * FROM asignatura_grado_horas, plantilla_areas, grados, plantilla_turnos, secciones, plantilla_horas
                        
          WHERE  asignatura_grado_horas.id_area = plantilla_areas.id_area
          and    asignatura_grado_horas.id_grado = grados.id_grado
          and    asignatura_grado_horas.id_turno = plantilla_turnos.id_turno
          and    asignatura_grado_horas.id_seccion = secciones.id_seccion
          and    asignatura_grado_horas.id_hora = plantilla_horas.id_hora
          and    asignatura_grado_horas.id_contrato = '$id_contratox'
           ORDER BY id_asig_grad_hora ASC   LIMIT 1,1        

            ";

$datos_plantillaTRA1 = mysqli_query($enlace, $queryTRA1) or die(mysqli_error());

$row_datos_plantillaTRA1 = mysqli_fetch_array($datos_plantillaTRA1); 



$queryTRA2 = "SELECT * FROM asignatura_grado_horas, plantilla_areas, grados, plantilla_turnos, secciones, plantilla_horas
                        
          WHERE  asignatura_grado_horas.id_area = plantilla_areas.id_area
          and    asignatura_grado_horas.id_grado = grados.id_grado
          and    asignatura_grado_horas.id_turno = plantilla_turnos.id_turno
          and    asignatura_grado_horas.id_seccion = secciones.id_seccion
          and    asignatura_grado_horas.id_hora = plantilla_horas.id_hora
          and    asignatura_grado_horas.id_contrato = '$id_contratox'
           ORDER BY id_asig_grad_hora ASC   LIMIT 2,1        

            ";

$datos_plantillaTRA2 = mysqli_query($enlace, $queryTRA2) or die(mysqli_error());

$row_datos_plantillaTRA2 = mysqli_fetch_array($datos_plantillaTRA2); 




$queryTRA3 = "SELECT * FROM asignatura_grado_horas, plantilla_areas, grados, plantilla_turnos, secciones, plantilla_horas
                        
          WHERE  asignatura_grado_horas.id_area = plantilla_areas.id_area
          and    asignatura_grado_horas.id_grado = grados.id_grado
          and    asignatura_grado_horas.id_turno = plantilla_turnos.id_turno
          and    asignatura_grado_horas.id_seccion = secciones.id_seccion
          and    asignatura_grado_horas.id_hora = plantilla_horas.id_hora
          and    asignatura_grado_horas.id_contrato = '$id_contratox' 
           ORDER BY id_asig_grad_hora ASC  LIMIT 3,1        

            ";

$datos_plantillaTRA3 = mysqli_query($enlace, $queryTRA3) or die(mysqli_error());

$row_datos_plantillaTRA3 = mysqli_fetch_array($datos_plantillaTRA3); 




$queryTRA4 = "SELECT * FROM asignatura_grado_horas, plantilla_areas, grados, plantilla_turnos, secciones, plantilla_horas
                        
          WHERE  asignatura_grado_horas.id_area = plantilla_areas.id_area
          and    asignatura_grado_horas.id_grado = grados.id_grado
          and    asignatura_grado_horas.id_turno = plantilla_turnos.id_turno
          and    asignatura_grado_horas.id_seccion = secciones.id_seccion
          and    asignatura_grado_horas.id_hora = plantilla_horas.id_hora
          and    asignatura_grado_horas.id_contrato = '$id_contratox'
           ORDER BY id_asig_grad_hora ASC   LIMIT 4,1        

            ";

$datos_plantillaTRA4 = mysqli_query($enlace, $queryTRA4) or die(mysqli_error());

$row_datos_plantillaTRA4 = mysqli_fetch_array($datos_plantillaTRA4); 




$queryTRA5 = "SELECT * FROM asignatura_grado_horas, plantilla_areas, grados, plantilla_turnos, secciones, plantilla_horas
                        
          WHERE  asignatura_grado_horas.id_area = plantilla_areas.id_area
          and    asignatura_grado_horas.id_grado = grados.id_grado
          and    asignatura_grado_horas.id_turno = plantilla_turnos.id_turno
          and    asignatura_grado_horas.id_seccion = secciones.id_seccion
          and    asignatura_grado_horas.id_hora = plantilla_horas.id_hora
          and    asignatura_grado_horas.id_contrato = '$id_contratox' 
           ORDER BY id_asig_grad_hora ASC  LIMIT 5,1        

            ";

$datos_plantillaTRA5 = mysqli_query($enlace, $queryTRA5) or die(mysqli_error());

$row_datos_plantillaTRA5 = mysqli_fetch_array($datos_plantillaTRA5); 

mysqli_close($enlace);



      ?>






    <tbody>
      <tr>
        <td class=" hidden_prof1" style="<?php echo $gdiv; ?>">

          <input type="hidden" id="id_asig_grad_hora1zzz"  name="id_asig_grad_hora1zzz"
           value="<?php echo $row_datos_plantillaTRA['id_asig_grad_hora']; ?>">

           <input type="hidden" id="id_contratox5"  name="id_contratox5"
           value="<?php echo $id_contratox; ?>">

          <select class="form-control form-control-sm" id="mod_areaAA" name="mod_areaAA">
<option value="<?php echo $row_datos_plantillaTRA['id_area']; ?>" selected><?php echo $row_datos_plantillaTRA['nombre_area']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php include("querys_mod_per/areas.php"); ?>
                                <option value="66">Zero, vacío...</option>
                                 
          </select>  

        </td>

        <td class=" hidden_prof1" style="<?php echo $gdiv; ?>">

          <select class="form-control form-control-sm" id="mod_gradoAA" name="mod_gradoAA">
<option value="<?php echo $row_datos_plantillaTRA['id_grado']; ?>" selected><?php echo $row_datos_plantillaTRA['nombre_grados']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php include("querys_mod_per/grados.php"); ?>
                                <option value="51">Zero, vacío...</option>
          </select>  

        </td>

        <td>
          
 <select class="form-control form-control-sm" id="mod_turnoAA" name="mod_turnoAA">
<option value="<?php echo $row_datos_plantillaTRA['id_turno']; ?>" selected><?php echo $row_datos_plantillaTRA['nombre_turno']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                  <?php include("querys_mod_per/turnos.php"); ?>
                  <option value="4">Zero, vacío...</option>
                                 
          </select>  


        </td>

        <td class=" hidden_prof1" style="<?php echo $gdiv; ?>">
          <select class="form-control form-control-sm" id="mod_seccionAA" name="mod_seccionAA">
<option value="<?php echo $row_datos_plantillaTRA['id_seccion']; ?>" selected><?php echo $row_datos_plantillaTRA['nombre_seccion']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/secciones.php"); ?>
                                 <option value="8">Zero, vacío...</option>

        </td>

        <td>
          
           <select class="form-control form-control-sm" id="mod_horaAA" name="mod_horaAA">
<option value="<?php echo $row_datos_plantillaTRA['id_hora']; ?>" selected><?php echo $row_datos_plantillaTRA['nombre_hora']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/horas.php"); ?>
                                 <option value="21">Zero, vacío...</option>


        </td>
      </tr>




      <tr class=" hidden_prof1" style="<?php echo $gdiv; ?>">
        <td>
          <input type="hidden" id="id_asig_grad_hora2zzz"  name="id_asig_grad_hora2zzz"
           value="<?php echo $row_datos_plantillaTRA1['id_asig_grad_hora']; ?>">

          <select class="form-control form-control-sm" id="mod_areaBB" name="mod_areaBB">
<option value="<?php echo $row_datos_plantillaTRA1['id_area']; ?>" selected><?php echo $row_datos_plantillaTRA1['nombre_area']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php include("querys_mod_per/areas.php"); ?>
                                <option value="66">Zero, vacío...</option>
          </select>  

        </td>

        <td>

          <select class="form-control form-control-sm" id="mod_gradoBB" name="mod_gradoBB">
<option value="<?php echo $row_datos_plantillaTRA1['id_grado']; ?>" selected><?php echo $row_datos_plantillaTRA1['nombre_grados']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/grados.php"); ?>
                                 <option value="51">Zero, vacío...</option>
          </select>  

        </td>

        <td>
          
 <select class="form-control form-control-sm" id="mod_turnoBB" name="mod_turnoBB">
<option value="<?php echo $row_datos_plantillaTRA1['id_turno']; ?>" selected><?php echo $row_datos_plantillaTRA1['nombre_turno']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/turnos.php"); ?>
                                 <option value="4">Zero, vacío...</option>
          </select>  


        </td>

        <td>
          <select class="form-control form-control-sm" id="mod_seccionBB" name="mod_seccionBB">
<option value="<?php echo $row_datos_plantillaTRA1['id_seccion']; ?>" selected><?php echo $row_datos_plantillaTRA1['nombre_seccion']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                  <?php include("querys_mod_per/secciones.php"); ?>
                                  <option value="8">Zero, vacío...</option>


        </td>

        <td>
          
           <select class="form-control form-control-sm" id="mod_horaBB" name="mod_horaBB">
<option value="<?php echo $row_datos_plantillaTRA1['id_hora']; ?>" selected><?php echo $row_datos_plantillaTRA1['nombre_hora']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php include("querys_mod_per/horas.php"); ?>
                                <option value="21">Zero, vacío...</option>


        </td>
      </tr>


      <tr class=" hidden_prof1" style="<?php echo $gdiv; ?>">
        <td>
          <input type="hidden" id="id_asig_grad_hora3zzz"  name="id_asig_grad_hora3zzz"
           value="<?php echo $row_datos_plantillaTRA2['id_asig_grad_hora']; ?>">

          <select class="form-control form-control-sm" id="mod_areaCC" name="mod_areaCC">
<option value="<?php echo $row_datos_plantillaTRA2['id_area']; ?>" selected><?php echo $row_datos_plantillaTRA2['nombre_area']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php include("querys_mod_per/areas.php"); ?>
                                <option value="66">Zero, vacío...</option>
          </select>  

        </td>

        <td>

          <select class="form-control form-control-sm" id="mod_gradoCC" name="mod_gradoCC">
<option value="<?php echo $row_datos_plantillaTRA2['id_grado']; ?>" selected><?php echo $row_datos_plantillaTRA2['nombre_grados']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                  <?php include("querys_mod_per/grados.php"); ?>
                                  <option value="51">Zero, vacío...</option>
          </select>  

        </td>

        <td>
          
 <select class="form-control form-control-sm" id="mod_turnoCC" name="mod_turnoCC">
<option value="<?php echo $row_datos_plantillaTRA2['id_turno']; ?>" selected><?php echo $row_datos_plantillaTRA2['nombre_turno']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/turnos.php"); ?>
                                 <option value="4">Zero, vacío...</option>
          </select>  


        </td>

        <td>
          <select class="form-control form-control-sm" id="mod_seccionCC" name="mod_seccionCC">
<option value="<?php echo $row_datos_plantillaTRA2['id_seccion']; ?>" selected><?php echo $row_datos_plantillaTRA2['nombre_seccion']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                  <?php include("querys_mod_per/secciones.php"); ?>
                                  <option value="8">Zero, vacío...</option>


        </td>

        <td>
          
           <select class="form-control form-control-sm" id="mod_horaCC" name="mod_horaCC">
<option value="<?php echo $row_datos_plantillaTRA2['id_hora']; ?>" selected><?php echo $row_datos_plantillaTRA2['nombre_hora']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/horas.php"); ?>
                                 <option value="21">Zero, vacío...</option>


        </td>
      </tr>



      <tr class=" hidden_prof1" style="<?php echo $gdiv; ?>">
        <td>
          <input type="hidden" id="id_asig_grad_hora4zzz"  name="id_asig_grad_hora4zzz"
           value="<?php echo $row_datos_plantillaTRA3['id_asig_grad_hora']; ?>">

          <select class="form-control form-control-sm" id="mod_areaDD" name="mod_areaDD">
<option value="<?php echo $row_datos_plantillaTRA3['id_area']; ?>" selected><?php echo $row_datos_plantillaTRA3['nombre_area']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/areas.php"); ?>
                                 <option value="66">Zero, vacío...</option>
          </select>  

        </td>

        <td>

          <select class="form-control form-control-sm" id="mod_gradoDD" name="mod_gradoDD">
<option value="<?php echo $row_datos_plantillaTRA3['id_grado']; ?>" selected><?php echo $row_datos_plantillaTRA3['nombre_grados']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                  <?php include("querys_mod_per/grados.php"); ?>
                                  <option value="51">Zero, vacío...</option>
          </select>  

        </td>

        <td>
          
 <select class="form-control form-control-sm" id="mod_turnoDD" name="mod_turnoDD">
<option value="<?php echo $row_datos_plantillaTRA3['id_turno']; ?>" selected><?php echo $row_datos_plantillaTRA3['nombre_turno']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/turnos.php"); ?>
                                 <option value="4">Zero, vacío...</option>
          </select>  


        </td>

        <td>
          <select class="form-control form-control-sm" id="mod_seccionDD" name="mod_seccionDD">
<option value="<?php echo $row_datos_plantillaTRA3['id_seccion']; ?>" selected><?php echo $row_datos_plantillaTRA3['nombre_seccion']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                  <?php include("querys_mod_per/secciones.php"); ?>
                                  <option value="8">Zero, vacío...</option>


        </td>

        <td>
          
           <select class="form-control form-control-sm" id="mod_horaDD" name="mod_horaDD">
<option value="<?php echo $row_datos_plantillaTRA3['id_hora']; ?>" selected><?php echo $row_datos_plantillaTRA3['nombre_hora']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/horas.php"); ?>
                                 <option value="21">Zero, vacío...</option>

        </td>
      </tr>



      <tr class=" hidden_prof1" style="<?php echo $gdiv; ?>">
        <td>
          <input type="hidden" id="id_asig_grad_hora5zzz"  name="id_asig_grad_hora5zzz"
           value="<?php echo $row_datos_plantillaTRA4['id_asig_grad_hora']; ?>">

          <select class="form-control form-control-sm" id="mod_areaEE" name="mod_areaEE">
<option value="<?php echo $row_datos_plantillaTRA4['id_area']; ?>" selected><?php echo $row_datos_plantillaTRA4['nombre_area']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/areas.php"); ?>
                                 <option value="66">Zero, vacío...</option>
          </select>  

        </td>

        <td>

          <select class="form-control form-control-sm" id="mod_gradoEE" name="mod_gradoEE">
<option value="<?php echo $row_datos_plantillaTRA4['id_grado']; ?>" selected><?php echo $row_datos_plantillaTRA4['nombre_grados']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                  <?php include("querys_mod_per/grados.php"); ?>
                                  <option value="51">Zero, vacío...</option>
          </select>  

        </td>

        <td>
          
 <select class="form-control form-control-sm" id="mod_turnoEE" name="mod_turnoEE">
<option value="<?php echo $row_datos_plantillaTRA4['id_turno']; ?>" selected><?php echo $row_datos_plantillaTRA4['nombre_turno']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/turnos.php"); ?>
                                 <option value="4">Zero, vacío...</option>
          </select>  


        </td>

        <td>
          <select class="form-control form-control-sm" id="mod_seccionEE" name="mod_seccionEE">
<option value="<?php echo $row_datos_plantillaTRA4['id_seccion']; ?>" selected><?php echo $row_datos_plantillaTRA4['nombre_seccion']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                  <?php include("querys_mod_per/secciones.php"); ?>
                                  <option value="8">Zero, vacío...</option>


        </td>

        <td>
          
           <select class="form-control form-control-sm" id="mod_horaEE" name="mod_horaEE">
<option value="<?php echo $row_datos_plantillaTRA4['id_hora']; ?>" selected><?php echo $row_datos_plantillaTRA4['nombre_hora']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/horas.php"); ?>
                                 <option value="21">Zero, vacío...</option>

        </td>
      </tr>




      <tr class=" hidden_prof1" style="<?php echo $gdiv; ?>">
        <td>
          <input type="hidden" id="id_asig_grad_hora6zzz"  name="id_asig_grad_hora6zzz"
           value="<?php echo $row_datos_plantillaTRA5['id_asig_grad_hora']; ?>">

          <select class="form-control form-control-sm" id="mod_areaFF" name="mod_areaFF">
<option value="<?php echo $row_datos_plantillaTRA5['id_area']; ?>" selected><?php echo $row_datos_plantillaTRA5['nombre_area']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/areas.php"); ?>
                                 <option value="66">Zero, vacío...</option>
          </select>  

        </td>

        <td>

          <select class="form-control form-control-sm" id="mod_gradoFF" name="mod_gradoFF">
<option value="<?php echo $row_datos_plantillaTRA5['id_grado']; ?>" selected><?php echo $row_datos_plantillaTRA5['nombre_grados']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                  <?php include("querys_mod_per/grados.php"); ?>
                                  <option value="51">Zero, vacío...</option>
          </select>  

        </td>

        <td>
          
 <select class="form-control form-control-sm" id="mod_turnoFF" name="mod_turnoFF">
<option value="<?php echo $row_datos_plantillaTRA5['id_turno']; ?>" selected><?php echo $row_datos_plantillaTRA5['nombre_turno']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/turnos.php"); ?>
                                 <option value="4">Zero, vacío...</option>
          </select>  


        </td>

        <td>
          <select class="form-control form-control-sm" id="mod_seccionFF" name="mod_seccionFF">
<option value="<?php echo $row_datos_plantillaTRA5['id_seccion']; ?>" selected><?php echo $row_datos_plantillaTRA5['nombre_seccion']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/secciones.php"); ?>
                                 <option value="8">Zero, vacío...</option>


        </td>

        <td>
          
           <select class="form-control form-control-sm" id="mod_horaFF" name="mod_horaFF">
<option value="<?php echo $row_datos_plantillaTRA5['id_hora']; ?>" selected><?php echo $row_datos_plantillaTRA5['nombre_hora']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/horas.php"); ?>
                                 <option value="21">Zero, vacío...</option>

        </td>
      </tr>



    </tbody>

   

  </table>





<?php


include("../conectar.php");

        $queryOBS = "SELECT * FROM obs_per
                        
          WHERE  id_per ='$id_perx'
          
            ";

$datos_plantillaOBS = mysqli_query($enlace, $queryOBS) or die(mysqli_error());

$row_datos_plantillaOBS = mysqli_fetch_array($datos_plantillaOBS); 

mysqli_close($enlace);


            ?>




            <div class="form-row" > 

            <div style="margin-left: 620px;" class="input-group input-group-sm col-md-4 mb-2">

                                <div class="input-group-prepend">
                                  <span class="input-group-text alert-info" id="basic-addon1"><b>Total de Horas Semanales:</b></span>  
                                </div>

            <input type="text" class="form-control" id="mod_total_tiempillo" name="mod_total_tiempillo" aria-label="mod_total_tiempillo"
             value="<?php echo $row_datos_plantillaOBS['total_horas']; ?>" >



             </div>

             </div>




</div> <!-- cierre row -->











<div class="form-row mt-4 pl-2 pr-4">   <!-- tabla estudios -->



<table class="table table-bordered table-sm">
    <thead class="text-muted">
      <tr>
        <th>Estudia?</th>
        <th>Carrera:</th>
        <th>Mencion:</th>
        <th>Instituto:</th>
        <th>Semestre:</th>
      </tr>
    </thead>



<?php



include("../conectar.php");

        $queryESTU = "SELECT * FROM prof_estudia, respuestas, plantilla_titulos, plantilla_mencion, plantilla_instituto, semestres
                        
          WHERE prof_estudia.id_respuesta = respuestas.id_respuesta
          and   prof_estudia.id_titulos = plantilla_titulos.id_titulos
          and   prof_estudia.id_mencion = plantilla_mencion.id_mencion
          and   prof_estudia.id_instituto = plantilla_instituto.id_instituto
          and   prof_estudia.id_semestre = semestres.id_semestre
          and  id_per ='$id_perx'
          
            ";

$datos_plantillaESTU = mysqli_query($enlace, $queryESTU) or die(mysqli_error());

$row_datos_plantillaESTU = mysqli_fetch_array($datos_plantillaESTU); 

mysqli_close($enlace);


            ?>



 <script type="text/javascript">

                  $('input[name=mod_edad_ofi]').change(function () {
                      if ($(this).val() != '') {
                          
                          $('.mod_resp1').prop('required',true);                         
                      } else {                          
                          
                          $('.mod_resp1').prop('required',false);
                      }
                  });                   

</script>



    <tbody>
      <tr>
        <td>

<input type="hidden" id="id_prof_estudiazzz"  name="id_prof_estudiazzz"
value="<?php echo $row_datos_plantillaESTU['id_prof_estudia']; ?>">


          <select class="form-control form-control-sm mod_resp1" id="mod_resp1" name="mod_resp1">
<option value="<?php echo $row_datos_plantillaESTU['id_respuesta']; ?>" selected><?php echo $row_datos_plantillaESTU['nombre_respuesta']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php 

                                 include("../conectar.php");

              $querymod2 = "SELECT * FROM respuestas ORDER BY nombre_respuesta ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_respuesta']; ?>"><?php echo $row_datos_mod2['nombre_respuesta'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);  

                                                                 
                         ?>  
          


        </td>





                <script type="text/javascript">

                  $('select[name=mod_resp1]').change(function () {
                      if ($(this).val() == '1') {
                          
                          $('.mod_titulos_resp1').prop('required',true);                         
                      } else {                          
                          
                          $('.mod_titulos_resp1').prop('required',false);
                      }
                  });                   

                 </script>




        <td>
          
           <select class="form-control form-control-sm mod_titulos_resp1" id="mod_titulos_resp1" name="mod_titulos_resp1">
<option value="<?php echo $row_datos_plantillaESTU['id_titulos']; ?>" selected><?php echo $row_datos_plantillaESTU['nombre_titulos']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php include("querys_mod_per/titulos.php"); ?>
                                <option value="102">Zero, vacio, no estudia...</option>



        </td>


              <script type="text/javascript">

                  $('select[name=mod_titulos_resp1]').change(function () {
                      if ($(this).val() != '') {
                          
                          $('.mod_mencion_resp1').prop('required',true);                         
                      } else {                          
                          
                          $('.mod_mencion_resp1').prop('required',false);
                      }
                  });                   

                 </script>




        <td>
          <select class="form-control form-control-sm mod_mencion_resp1" id="mod_mencion_resp1" name="mod_mencion_resp1">
<option value="<?php echo $row_datos_plantillaESTU['id_mencion']; ?>" selected><?php echo $row_datos_plantillaESTU['nombre_mencion']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/menciones.php"); ?>
                                 <option value="26">Zero, vacio, no estudia...</option>  
        </td>



                <script type="text/javascript">

                  $('select[name=mod_titulos_resp1]').change(function () {
                      if ($(this).val() != '') {
                          
                          $('.mod_instituto_resp1').prop('required',true);                         
                      } else {                          
                          
                          $('.mod_instituto_resp1').prop('required',false);
                      }
                  });                   

                 </script>




        <td>
          <select class="form-control form-control-sm mod_instituto_resp1" id="mod_instituto_resp1" name="mod_instituto_resp1">
<option value="<?php echo $row_datos_plantillaESTU['id_instituto']; ?>" selected><?php echo $row_datos_plantillaESTU['nombre_instituto']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/institutos.php"); ?>


                                 <option value="15">Zero, vacio, no estudia...</option>



        </td>


              <script type="text/javascript">

                  $('select[name=mod_instituto_resp1]').change(function () {
                      if ($(this).val() != '') {
                          
                          $('.mod_semestre_resp1').prop('required',true);                         
                      } else {                          
                          
                          $('.mod_semestre_resp1').prop('required',false);
                      }
                  });                   

                 </script>



        <td>
           <select class="form-control form-control-sm mod_semestre_resp1" id="mod_semestre_resp1" name="mod_semestre_resp1">
<option value="<?php echo $row_datos_plantillaESTU['id_semestre']; ?>" selected><?php echo $row_datos_plantillaESTU['nombre_semestre']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php 

                                 include("../conectar.php");

              $querymod2 = "SELECT * FROM semestres WHERE nombre_semestre != '.' ORDER BY nombre_semestre ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_semestre']; ?>"><?php echo $row_datos_mod2['nombre_semestre'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);  

                                                                 
                         ?>  

                         <option value="13">Zero, vacio, no estudia...</option>

        </td>
      </tr>
     
    </tbody>

  </table>




</div>






</div> <!-- cierre col md 10-->




<div class="col-md-2">



 

<div class="form-row mb-2 hidden_prof1" style="<?php echo $gdiv; ?>">

<div class="col-md-12 mt-2 text-left">
      <b class="text-muted"> Atiende en la</b>
</div>



</div>  <!-- cierre form row  -->





<div class="form-row hidden_prof1" style="<?php echo $gdiv; ?>">
<div class="col-md-12">

<table class="table table-bordered">
    <thead>
      <tr class="text-muted">  
        <th>División:</th>       
      </tr>
    </thead>
    <tbody>
      <tr>

        <td>  

          <select class="form-control form-control-sm" id="mod_division" name="mod_division">


<?php 



include("../conectar.php");   

$query_recursosD = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                                 
         WHERE  plantilla_personal.id_per = '$id_perx'
         and   plantilla_contratados.id_per = '$id_perx' 
                       
            and plantilla_contratados.id_division = divisiones.id_division
            
          LIMIT 1 ";

$datos_recursosD = mysqli_query($enlace, $query_recursosD) or die(mysqli_error());

$row_datos_recursosD = mysqli_fetch_array($datos_recursosD); 


mysqli_close($enlace);


 ?>














                              
<option value="<?php echo $row_datos_recursosD['id_division']; ?>" selected><?php echo $row_datos_recursosD['nombre_division']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                 <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM divisiones where id_division != '5' ORDER BY nombre_division ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_division']; ?>"><?php echo $row_datos_mod2['nombre_division'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                         ?>    
                              
                             

          </select>

        </td>        

      </tr>
      

    </tbody>
  </table>

</div> <!-- cierre div  -->

</div>  <!-- cierre form row  -->


<div class="form-row mb-2 hidden_prof1" style="<?php echo $gdiv; ?>">

<div class="col-md-12 mt-2 text-left">
      <b class="text-info">Dicta</b>
</div>



</div>  <!-- cierre form row  -->




<?php 



include("../conectar.php");   

$query_recursosG = "SELECT * FROM plantilla_contratados, plantilla_personal, grados
                                 
         WHERE  plantilla_personal.id_per = '$id_perx'
         and   plantilla_contratados.id_per = '$id_perx' 
                       
            and plantilla_contratados.id_plant_grados = grados.id_grado 
            
          LIMIT 1 ";

$datos_recursosG = mysqli_query($enlace, $query_recursosG) or die(mysqli_error());

$row_datos_recursosG = mysqli_fetch_array($datos_recursosG); 


mysqli_close($enlace);


 ?>













<div class="form-row mb-2 hidden_prof1" style="<?php echo $gdiv; ?>">
<div class="col-md-12">


<table class="table table-bordered">
    <thead>
      <tr class="text-info">  
        <th>clases a:</th>       
      </tr>
    </thead>
    <tbody>
      <tr>

        <td>  

          <select class="form-control form-control-sm" id="mod_dicta" name="mod_dicta">
                              
                              <option value="<?php echo $row_datos_recursosG['id_grado']; ?>" selected><?php echo $row_datos_recursosG['nombre_grados']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/grados.php"); ?>                              
                           

          </select>

        </td>        

      </tr>
      

    </tbody>
  </table>

</div> <!-- cierre div  -->

</div>  <!-- cierre form row  -->




 
<div class="form-row">  <!-- obs  -->

<div class="col-md-12 mt-3 mb-1 text-left">
      <b class="text-muted"> Observaciones: </b>
</div>

</div>  <!-- cierre form row titulo obs -->






<div class="form-row mt-1">

<div class="col-md-12 mb-1">

<input type="hidden" id="id_obs_perzzz"  name="id_obs_perzzz" value="<?php echo $row_datos_plantillaOBS['id_obs_per']; ?>">

<textarea maxlength="248" class="form-control" id="mod_obs_text" name="mod_obs_text" rows="6"> <?php echo $row_datos_plantillaOBS['obs_per']; ?> </textarea>

</div>

</div> <!-- cierre row  de obs -->



</div>   <!-- cierre col md 2 -->



</div> <!-- cierre form row, que encierra al md 10 y md 2 -->





<?php



include("../conectar.php");

        $queryOTR = "SELECT * FROM trabaja_otro, respuestas, tipo_plantel, plantilla_areas, grados
                        
          WHERE trabaja_otro.id_respuesta = respuestas.id_respuesta
          and   trabaja_otro.id_tipo = tipo_plantel.id_tipo
          and   trabaja_otro.id_area = plantilla_areas.id_area
          and   trabaja_otro.id_grado = grados.id_grado          
          and  id_per ='$id_perx'
           ORDER BY id_trabaja_otro ASC   LIMIT 0,1
          
            ";

$datos_plantillaOTR = mysqli_query($enlace, $queryOTR) or die(mysqli_error());

$row_datos_plantillaOTR = mysqli_fetch_array($datos_plantillaOTR); 



 $queryOTR1 = "SELECT * FROM trabaja_otro, respuestas, tipo_plantel, plantilla_areas, grados
                        
          WHERE trabaja_otro.id_respuesta = respuestas.id_respuesta
          and   trabaja_otro.id_tipo = tipo_plantel.id_tipo
          and   trabaja_otro.id_area = plantilla_areas.id_area
          and   trabaja_otro.id_grado = grados.id_grado          
          and  id_per ='$id_perx' 
          ORDER BY id_trabaja_otro ASC  LIMIT 1,1 
          
            ";

$datos_plantillaOTR1 = mysqli_query($enlace, $queryOTR1) or die(mysqli_error());

$row_datos_plantillaOTR1 = mysqli_fetch_array($datos_plantillaOTR1); 



 $queryOTR2 = "SELECT * FROM trabaja_otro, respuestas, tipo_plantel, plantilla_areas, grados
                        
          WHERE trabaja_otro.id_respuesta = respuestas.id_respuesta
          and   trabaja_otro.id_tipo = tipo_plantel.id_tipo
          and   trabaja_otro.id_area = plantilla_areas.id_area
          and   trabaja_otro.id_grado = grados.id_grado          
          and  id_per ='$id_perx'
          ORDER BY id_trabaja_otro ASC   LIMIT 2,1 
          
            ";

$datos_plantillaOTR2 = mysqli_query($enlace, $queryOTR2) or die(mysqli_error());

$row_datos_plantillaOTR2 = mysqli_fetch_array($datos_plantillaOTR2);




 $queryOTR3 = "SELECT * FROM trabaja_otro, respuestas, tipo_plantel, plantilla_areas, grados
                        
          WHERE trabaja_otro.id_respuesta = respuestas.id_respuesta
          and   trabaja_otro.id_tipo = tipo_plantel.id_tipo
          and   trabaja_otro.id_area = plantilla_areas.id_area
          and   trabaja_otro.id_grado = grados.id_grado          
          and  id_per ='$id_perx'
          ORDER BY id_trabaja_otro ASC   LIMIT 3,1 
          
            ";

$datos_plantillaOTR3 = mysqli_query($enlace, $queryOTR3) or die(mysqli_error());

$row_datos_plantillaOTR3 = mysqli_fetch_array($datos_plantillaOTR3); 

mysqli_close($enlace);


            ?>







 <script type="text/javascript">

                  $('input[name=mod_edad_ofi]').change(function () {
                      if ($(this).val() != '') {
                          
                          $('.mod_trab_act').prop('required',true);                         
                      } else {                          
                          
                          $('.mod_trab_act').prop('required',false);
                      }
                  });                   

</script>

<div class="form-row divtabla1 mt-2 px-2 mr-3">  <!--  -->

                  <div class="input-group input-group-sm col-md-3 mt-2 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1">Trabaja en otro plantel? </span>  
                    </div>
                 
                            <select class="form-control form-control-sm mod_trab_act" id="mod_trab_act" name="mod_trab_act"> 


                              <option value="<?php echo $row_datos_plantillaOTR['id_respuesta']; ?>" selected><?php echo $row_datos_plantillaOTR['nombre_respuesta']; ?></option>
                              <option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>  
                              <option value="2">No</option>
                              <option value="1">Si</option>
                                                            
                        </select>
                  </div>

                  <div class="col-md-6 mt-2 mb-2"></div>


                  <div class="col-md-3 mt-2 mb-2 text-right">
<button type="button" id="clearzz<?php echo $id_perx; ?>" class="btn btn-outline-secondary btn-sm">Resetear</button>                  
                  </div>



                   <script type="text/javascript">

                   $('#clearzz<?php echo $id_perx; ?>').click(function(){
                   $("#mod_tipo_plantelA, #mod_nombre_plant_traA, #mod_asig_otroA, #mod_grado_otrA").val("");
                   $("#mod_tipo_plantelB, #mod_nombre_plant_traB, #mod_asig_otroB, #mod_grado_otrB").val("");
                   $("#mod_tipo_plantelC, #mod_nombre_plant_traC, #mod_asig_otroC, #mod_grado_otrC").val("");
                   $("#mod_tipo_plantelD, #mod_nombre_plant_traD, #mod_asig_otroD, #mod_grado_otrD").val("");        
                             
                  });

                 </script> 





<table class="table table-bordered table-sm">
    <thead class="text-muted">
      <tr>
        <th>Tipo:</th>
        <th>Nombre del plantel:</th>
        <th>Asignaturas:</th>
        <th>Grado/Año:</th>
        
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>

<input type="hidden" id="id_trabaja_otro1zzz"  name="id_trabaja_otro1zzz"
value="<?php echo $row_datos_plantillaOTR['id_trabaja_otro']; ?>">




<select class="form-control form-control-sm" id="mod_tipo_plantelA" name="mod_tipo_plantelA">
          <option value="<?php echo $row_datos_plantillaOTR['id_tipo']; ?>" selected><?php echo $row_datos_plantillaOTR['nombre_tipo']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php include("querys_mod_per/tipo_plantel.php"); ?>
                                <option value="3">Zero, vacio...</option> 
                                 

</select>   



        </td>

        <td>
          

<input type="text" class="form-control form-control-sm" id="mod_nombre_plant_traA" name="mod_nombre_plant_traA" value="<?php echo $row_datos_plantillaOTR['nombre_plantel']; ?>">


        </td>

        <td>
          
<select class="form-control form-control-sm" id="mod_asig_otroA" name="mod_asig_otroA">
          <option value="<?php echo $row_datos_plantillaOTR['id_area']; ?>" selected><?php echo $row_datos_plantillaOTR['nombre_area']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                 <?php include("querys_mod_per/areas.php"); ?>
                                  <option value="66">Zero, vacio...</option>   

</select>   


        </td>

        <td>
          

<select class="form-control form-control-sm" id="mod_grado_otrA" name="mod_grado_otrA">
          <option value="<?php echo $row_datos_plantillaOTR['id_grado']; ?>" selected><?php echo $row_datos_plantillaOTR['nombre_grados']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                 <?php include("querys_mod_per/grados.php"); ?>
                                  <option value="51">Zero, vacio...</option>   

</select>   



        </td>
        
      </tr>






      <tr>
        <td>

<input type="hidden" id="id_trabaja_otro2zzz"  name="id_trabaja_otro2zzz"
value="<?php echo $row_datos_plantillaOTR1['id_trabaja_otro']; ?>">

<select class="form-control form-control-sm" id="mod_tipo_plantelB" name="mod_tipo_plantelB">
          <option value="<?php echo $row_datos_plantillaOTR1['id_tipo']; ?>" selected><?php echo $row_datos_plantillaOTR1['nombre_tipo']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php include("querys_mod_per/tipo_plantel.php"); ?>
                                <option value="3">Zero, vacio...</option>  

</select>   



        </td>

        <td>
          

<input type="text" class="form-control form-control-sm" id="mod_nombre_plant_traB" name="mod_nombre_plant_traB" value="<?php echo $row_datos_plantillaOTR1['nombre_plantel']; ?>">


        </td>

        <td>
          
<select class="form-control form-control-sm" id="mod_asig_otroB" name="mod_asig_otroB">
          <option value="<?php echo $row_datos_plantillaOTR1['id_area']; ?>" selected><?php echo $row_datos_plantillaOTR1['nombre_area']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                 <?php include("querys_mod_per/areas.php"); ?>
                                 <option value="66">Zero, vacio...</option>   

</select>   


        </td>

        <td>
          

<select class="form-control form-control-sm" id="mod_grado_otrB" name="mod_grado_otrB">
          <option value="<?php echo $row_datos_plantillaOTR1['id_grado']; ?>" selected><?php echo $row_datos_plantillaOTR1['nombre_grados']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                  <?php include("querys_mod_per/grados.php"); ?>
                                  <option value="51">Zero, vacio...</option> 

</select>   



        </td>
        
      </tr>





      <tr>
        <td>

<input type="hidden" id="id_trabaja_otro3zzz"  name="id_trabaja_otro3zzz"
value="<?php echo $row_datos_plantillaOTR2['id_trabaja_otro']; ?>">


<select class="form-control form-control-sm" id="mod_tipo_plantelC" name="mod_tipo_plantelC">
          <option value="<?php echo $row_datos_plantillaOTR2['id_tipo']; ?>" selected><?php echo $row_datos_plantillaOTR2['nombre_tipo']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/tipo_plantel.php"); ?>
                                 <option value="3">Zero, vacio...</option>  

</select>   



        </td>

        <td>
          

<input type="text" class="form-control form-control-sm" id="mod_nombre_plant_traC" name="mod_nombre_plant_traC" value="<?php echo $row_datos_plantillaOTR2['nombre_plantel']; ?>">


        </td>

        <td>
          
<select class="form-control form-control-sm" id="mod_asig_otroC" name="mod_asig_otroC">
          <option value="<?php echo $row_datos_plantillaOTR2['id_area']; ?>" selected><?php echo $row_datos_plantillaOTR2['nombre_area']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/areas.php"); ?>
                                  <option value="66">Zero, vacio...</option>   

</select>   


        </td>

        <td>
          

<select class="form-control form-control-sm" id="mod_grado_otrC" name="mod_grado_otrC">
          <option value="<?php echo $row_datos_plantillaOTR2['id_grado']; ?>" selected><?php echo $row_datos_plantillaOTR2['nombre_grados']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                  <?php include("querys_mod_per/grados.php"); ?>
                                  <option value="51">Zero, vacio...</option> 

</select>   



        </td>
        
      </tr>




      <tr>
        <td>

<input type="hidden" id="id_trabaja_otro4zzz"  name="id_trabaja_otro4zzz"
value="<?php echo $row_datos_plantillaOTR3['id_trabaja_otro']; ?>">

<select class="form-control form-control-sm" id="mod_tipo_plantelD" name="mod_tipo_plantelD">
          <option value="<?php echo $row_datos_plantillaOTR3['id_tipo']; ?>" selected><?php echo $row_datos_plantillaOTR3['nombre_tipo']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                 <?php include("querys_mod_per/tipo_plantel.php"); ?> 
                                 <option value="3">Zero, vacio...</option> 

</select>   



        </td>

        <td>
          

<input type="text" class="form-control form-control-sm" id="mod_nombre_plant_traD" name="mod_nombre_plant_traD" value="<?php echo $row_datos_plantillaOTR3['nombre_plantel']; ?>">


        </td>

        <td>
          
<select class="form-control form-control-sm" id="mod_asig_otroD" name="mod_asig_otroD">
          <option value="<?php echo $row_datos_plantillaOTR3['id_area']; ?>" selected><?php echo $row_datos_plantillaOTR3['nombre_area']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                 <?php include("querys_mod_per/areas.php"); ?>
                                 <option value="66">Zero, vacio...</option>  

</select>   


        </td>

        <td>
          

<select class="form-control form-control-sm" id="mod_grado_otrD" name="mod_grado_otrD">
          <option value="<?php echo $row_datos_plantillaOTR3['id_grado']; ?>" selected><?php echo $row_datos_plantillaOTR3['nombre_grados']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                  <?php include("querys_mod_per/grados.php"); ?>
                                  <option value="51">Zero, vacio...</option> 

</select>   



        </td>
        
      </tr>

      
     
    </tbody>

  </table>




</div>