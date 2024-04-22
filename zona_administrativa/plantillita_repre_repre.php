<div class="form-row">
<div class="col-md-12">

        <div class="form-row">  <!-- row cero-->
                  <div class="col-md-12 text-left mb-2">
                  <b class="text-success"> Datos del representante: </b>
                  </div>
        </div>  



<div class="form-row">







  <div class="col-md-12">




        <div class="form-row">

        <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-file-alt"></i></span> 
</div>

<input maxlength="39" type="text" class="form-control form-control-sm " id="mod_nombres_repre" name="mod_nombres_repre"
value="<?php echo $row_datos_estudiantez['nombre_repre']; ?>" required> 
       
        </div>



 <input type="hidden" id="id_repre_GHJ"  name="id_repre_GHJ"
    value="<?php echo $row_datos_estudiantez['id_repre']; ?>">  <!-- para saber donde guardar el cambio -->





        <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-success" id="basic-addon1"><i class="far fa-file-alt"></i></span> 
</div>

<input maxlength="39" type="text" class="form-control form-control-sm " id="mod_apellidos_repre" name="mod_apellidos_repre"
value="<?php echo $row_datos_estudiantez['apellido_repre']; ?>" required> 
       
        </div>


      
      <div class="input-group col-md-3 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-at"></i></span> 
</div>

<input maxlength="39"  type="email" class="form-control form-control-sm " id="mod_email_repre" name="mod_email_repre"
value="<?php echo $row_datos_estudiantez['email_repre']; ?>"> 
       
        </div>





<div class="input-group col-md-2 mb-2"> 
                <div class="input-group-prepend">
                      <span class="input-group-text alert-danger" id="basic-addon1"><i class="fas fa-envelope-open-text"></i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_status_email_repre" name="mod_status_email_repre">


<?php

   if ($row_datos_estudiantez['correo_valido'] == 0 ) {
         $el_validoso = 'No Confirmado';
         
       }

       if ($row_datos_estudiantez['correo_valido'] == 1 ) {
         $el_validoso = 'Confirmado';
         
       }


       if ($row_datos_estudiantez['correo_valido'] == 2 ) {
         $el_validoso = 'No Valido';
         
       }

 ?>    



<option value="<?php echo $row_datos_estudiantez['correo_valido']; ?>" selected><?php echo $el_validoso; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <option value='0'>No Confirmado</option>
                                <option value='1'>Confirmado</option>
                                <option value='2'>No Valido</option>
                                                         
                              
                            </select>                 
                 </div>














         <div class="input-group input-group-sm col-md-3 mb-2">

<div class="input-group-prepend input-group-sm">
  <span class="input-group-text alert-success" id="basic-addon1"><i class="far fa-id-card"></i><i>&nbsp; Doc. Id.</i></span> 
</div>

<input maxlength="9" onkeydown="javascript:stripspaces(this)" type="text" class="form-control form-control-sm " id="mod_ci_repre" name="mod_ci_repre"
value="<?php echo $row_datos_estudiantez['ci_repre']; ?>" required> 
       
        </div>




<?php   // esto permite obtener los datos necesarios del representante y simplificar la busqueda

$id_del_repre = $row_datos_estudiantez['id_repre'];

include("../conectar.php");   

$query_repre = "SELECT * FROM sexo, d_paises, tb_estado_civil, tb_parentescos, tb_profesiones, reg_representante                        
                        
         WHERE  reg_representante.id_sexo = sexo.id_sexo
            and reg_representante.id_pais = d_paises.id_pais
            and reg_representante.id_estado_civil = tb_estado_civil.id_estado_civil 
            and reg_representante.id_parentesco = tb_parentescos.id_parentesco 
             and reg_representante.id_profesion = tb_profesiones.id_profesion       
            and id_repre = '$id_del_repre' ";

$datos_plantilla_repre = mysqli_query($enlace, $query_repre) or die(mysqli_error());

$row_datos_plantilla_repre = mysqli_fetch_array($datos_plantilla_repre); 


mysqli_close($enlace);


 ?>



       


      </div>   <!-- cierre row -->





      <div class="form-row">



 <div class="input-group col-md-2 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-venus-mars"></i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_genero_repre" name="mod_genero_repre">

<option value="<?php echo $row_datos_plantilla_repre['id_sexo']; ?>" selected><?php echo $row_datos_plantilla_repre['nombre_sexo']; ?></option>
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








        <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span> 
</div>

<input maxlength="12" type="text" class="form-control form-control-sm " id="mod_celular_repre" name="mod_celular_repre"
value="<?php echo $row_datos_estudiantez['celular_repre']; ?>" required> 
       
        </div>



         <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-phone-volume"></i></span> 
</div>

<input maxlength="12" type="text" class="form-control form-control-sm " id="mod_telefono_repre" name="mod_telefono_repre"
value="<?php echo $row_datos_estudiantez['telefono_repre']; ?>"> 
       
        </div>



        <div class="input-group col-md-2 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i class="fa fa-birthday-cake"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" id="mod_nacimiento_repre" name="mod_nacimiento_repre" value="<?php echo $row_datos_estudiantez['nacimiento_repre']; ?>" >
        </div>







         <div class="input-group input-group-sm col-md-4 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-globe"></i><i>&nbsp; Nacionalidad:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_nacionalidad_repre" name="mod_nacionalidad_repre">

<option value="<?php echo $row_datos_plantilla_repre['id_pais']; ?>" selected><?php echo $row_datos_plantilla_repre['nombre_pais']; ?></option>
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





                 

      </div>   <!-- cierre row -->




       <div class="form-row">  



        <div class="input-group input-group-sm col-md-3 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-success" id="basic-addon1"><i class="far fa-user-circle"></i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_estado_civil_repre" name="mod_estado_civil_repre">

<option value="<?php echo $row_datos_plantilla_repre['id_estado_civil']; ?>" selected><?php echo $row_datos_plantilla_repre['nombre_estado_civil']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM tb_estado_civil ORDER BY nombre_estado_civil ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_estado_civil']; ?>"><?php echo $row_datos_mod2['nombre_estado_civil'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?>                             
                              
                            </select>                 
                 </div>




         <div class="input-group input-group-sm col-md-3 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-universal-access"></i><i>&nbsp; Parentesco:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_parentesco_repre" name="mod_parentesco_repre">

<option value="<?php echo $row_datos_plantilla_repre['id_parentesco']; ?>" selected><?php echo $row_datos_plantilla_repre['nombre_parentesco']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM tb_parentescos ORDER BY nombre_parentesco ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_parentesco']; ?>"><?php echo $row_datos_mod2['nombre_parentesco'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?>                             
                              
                            </select>                 
           </div>





           <div class="input-group input-group-sm col-md-3 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-briefcase"></i><i>&nbsp; Prof:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_profesion_repre" name="mod_profesion_repre">

<option value="<?php echo $row_datos_plantilla_repre['id_profesion']; ?>" selected><?php echo $row_datos_plantilla_repre['nombre_profesion']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM tb_profesiones ORDER BY nombre_profesion ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_profesion']; ?>"><?php echo $row_datos_mod2['nombre_profesion'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?>                             
                              
                            </select>                 
           </div>



            <div class="input-group input-group-sm col-md-3 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i class="fab fa-keycdn"></i><i>&nbsp; Cambiar password:</i></span>  
                  </div>
     
<input maxlength="12" type="text" class="form-control form-control-sm" id="mod_password_repre" name="mod_password_repre" value="<?php echo $row_datos_estudiantez['clave_repre']; ?>" required>
        </div>




                 </div>  




  </div>


</div>
        







<?php   // esto permite obtener los datos necesarios del representante y simplificar la busqueda

$id_dela_direccion = $row_datos_estudiantez['id_direccion'];

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












      <div class="form-row">  <!-- row cero-->
                  <div class="col-md-12 text-left mt-3 mb-2">
                  <b class="text-warning"> Dirección: </b>
                  </div>
        </div>  



        <div class="form-row">  <!-- row cero-->



 <input type="hidden" id="id_direcc_GHJ"  name="id_direcc_GHJ"
    value="<?php echo $row_datos_estudiantez['id_direccion']; ?>">  <!-- para saber donde guardar el cambio -->



                 

          <div class="input-group input-group-sm col-md-4 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i class="fas fa-map-pin"></i><i>&nbsp; Ciudad:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_ciudad" name="mod_ciudad">

<option value="<?php echo $row_datos_plantilla_direcc['id_ciudad']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_ciudad']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_ciudades  WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

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
                      <span class="input-group-text alert-warning" id="basic-addon1"><i>Municipio:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_municipio" name="mod_municipio">

<option value="<?php echo $row_datos_plantilla_direcc['id_municipio']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_municipio']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_municipio WHERE nombre_municipio != '.' ORDER BY nombre_municipio ASC";

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
                      <span class="input-group-text alert-warning" id="basic-addon1"><i class="fas fa-arrow-circle-right"></i><i>&nbsp; Parroquia:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_parroquia" name="mod_parroquia">

<option value="<?php echo $row_datos_plantilla_direcc['id_parroquia']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_parroquia']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_parroquia WHERE nombre_parroquia != '.' ORDER BY nombre_parroquia ASC";

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




           





        </div>  



 <div class="form-row">  <!-- row cero-->



 <div class="input-group input-group-sm col-md-4 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i>&nbsp;Cerca o en la Av.:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_avenida" name="mod_avenida">

<option value="<?php echo $row_datos_plantilla_direcc['id_avenida']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_av']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_avenidas WHERE nombre_av != '.' ORDER BY nombre_av ASC";

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
                    <span class="input-group-text alert-warning" id="basic-addon1"><i>&nbsp;Calle, Zona, Sector ó Urbanización:</i></span>  
                  </div>
     
<input maxlength="59" type="text" class="form-control form-control-sm" id="mod_calle" name="mod_calle" value="<?php echo $row_datos_plantilla_direcc['dir_calle_sector']; ?>" >
  
  </div>






  <div class="input-group input-group-sm col-md-2 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i class="fab fa-gg fa-lg"></i><i>&nbsp; Cód Post.</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_codigo" name="mod_codigo">

<option value="<?php echo $row_datos_plantilla_direcc['id_codigo']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_codigo']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_codigo WHERE nombre_codigo != '.' ORDER BY nombre_codigo ASC";

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





           




           




        </div>  




         <div class="form-row">  <!-- row cero-->



          <div class="input-group input-group-sm col-md-2 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i>Vive en:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_vivienda" name="mod_vivienda">

<option value="<?php echo $row_datos_plantilla_direcc['id_vivienda']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_vivienda']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_vivienda WHERE nombre_vivienda != '.' ORDER BY nombre_vivienda ASC";

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






          <div class="input-group input-group-sm col-md-6 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i>&nbsp; Nombre de la vivienda:</i></span>  
                  </div>
     
<input maxlength="149" type="text" class="form-control form-control-sm" id="mod_nombre_vivienda" name="mod_nombre_vivienda" value="<?php echo $row_datos_plantilla_direcc['dir_nombre_vivienda']; ?>" >
  
  </div>



          <div class="input-group input-group-sm col-md-2 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i>Piso:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_piso" name="mod_piso">

<option value="<?php echo $row_datos_plantilla_direcc['id_piso']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_piso']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_piso WHERE nombre_piso != '.' ORDER BY nombre_piso ASC";

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




            <div class="input-group input-group-sm col-md-2 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i>Número:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_numero" name="mod_numero">

<option value="<?php echo $row_datos_plantilla_direcc['id_numero']; ?>" selected><?php echo $row_datos_plantilla_direcc['nombre_numero']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_numero WHERE nombre_numero != '.' ORDER BY nombre_numero ASC";

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






</div>
</div>