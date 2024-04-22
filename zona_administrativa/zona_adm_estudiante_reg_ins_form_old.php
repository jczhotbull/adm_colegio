<form method="post">


<div class="form-row">
<div class="col-md-12">

        <div class="form-row">  <!-- row cero-->
                  <div class="col-md-12 text-left mb-2">
                  <b class="text-success"> Datos del representante: </b>
                  </div>
        </div>  



<div class="form-row">


  <div class="col-md-1 " >

  <img class="img-thumbnail border border-success"  src="<?php echo $row_datos_estudiantes['foto_repre']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio1.jpg';" width="90px" />  

  </div>





  <div class="col-md-11">




        <div class="form-row">



        <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-file-alt"></i></span> 
</div>

<input maxlength="39" type="text" class="form-control form-control-sm " id="mod_nombres_repre" name="mod_nombres_repre"
value="<?php echo $row_datos_estudiantes['nombre_repre']; ?>" required> 
       
        </div>



 <input type="hidden" id="id_repre_GHJ"  name="id_repre_GHJ"
    value="<?php echo $row_datos_estudiantes['id_repre']; ?>">  <!-- para saber donde guardar el cambio -->





        <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-success" id="basic-addon1"><i class="far fa-file-alt"></i></span> 
</div>

<input maxlength="39" type="text" class="form-control form-control-sm " id="mod_apellidos_repre" name="mod_apellidos_repre"
value="<?php echo $row_datos_estudiantes['apellido_repre']; ?>" required> 
       
        </div>


      
      <div class="input-group col-md-3 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-at"></i></span> 
</div>

<input maxlength="39"  type="email" class="form-control form-control-sm " id="mod_email_repre" name="mod_email_repre"
value="<?php echo $row_datos_estudiantes['email_repre']; ?>"> 
       
        </div>





         <div class="input-group input-group-sm col-md-3 mb-2">

<div class="input-group-prepend input-group-sm">
  <span class="input-group-text alert-success" id="basic-addon1"><i class="far fa-id-card"></i><i>&nbsp; Doc. Id.</i></span> 
</div>

<input maxlength="9" onkeydown="javascript:stripspaces(this)" type="text" class="form-control form-control-sm " id="mod_ci_repre" name="mod_ci_repre"
value="<?php echo $row_datos_estudiantes['ci_repre']; ?>" required> 
       
        </div>




<?php   // esto permite obtener los datos necesarios del representante y simplificar la busqueda

$id_del_repre = $row_datos_estudiantes['id_repre'];

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


      </div>   <!-- cierre row -->





      <div class="form-row">


        <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span> 
</div>

<input maxlength="12" type="text" class="form-control form-control-sm " id="mod_celular_repre" name="mod_celular_repre"
value="<?php echo $row_datos_estudiantes['celular_repre']; ?>" required> 
       
        </div>



         <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-phone-volume"></i></span> 
</div>

<input maxlength="12" type="text" class="form-control form-control-sm " id="mod_telefono_repre" name="mod_telefono_repre"
value="<?php echo $row_datos_estudiantes['telefono_repre']; ?>"> 
       
        </div>



        <div class="input-group col-md-3 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i class="fa fa-birthday-cake"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" id="mod_nacimiento_repre" name="mod_nacimiento_repre" value="<?php echo $row_datos_estudiantes['nacimiento_repre']; ?>" >
        </div>







         <div class="input-group input-group-sm col-md-3 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-success" id="basic-addon1"><i> Nacionalidad:</i></span>  
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





                 <div class="input-group input-group-sm col-md-2 mb-2">
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

      </div>   <!-- cierre row -->




       <div class="form-row">  


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





           <div class="input-group input-group-sm col-md-4 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-briefcase"></i><i>&nbsp; Profesión:</i></span>  
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



            <div class="input-group input-group-sm col-md-5 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i class="fab fa-keycdn"></i><i>&nbsp; Cambiar password de ingreso:</i></span>  
                  </div>
     
<input maxlength="12" type="text" class="form-control form-control-sm" id="mod_password_repre" name="mod_password_repre" value="<?php echo $row_datos_estudiantes['clave_repre']; ?>" required>
        </div>




                 </div>  




  </div>


</div>
        







<?php   // esto permite obtener los datos necesarios del representante y simplificar la busqueda

$id_dela_direccion = $row_datos_estudiantes['id_direccion'];

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
    value="<?php echo $row_datos_estudiantes['id_direccion']; ?>">  <!-- para saber donde guardar el cambio -->



                 

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
 










      <div class="form-row">  <!-- row cero-->
                  <div class="col-md-12 text-left mt-3 mb-2">
                  <b class="text-info"> Datos del representado: </b>
                  </div>
        </div>  



<div class="form-row">


  <div class="col-md-1">


 <img class="img-thumbnail border border-info"  src="<?php echo $row_datos_estudiantes['foto_estu']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio5.jpg';" width="90px" />  


  </div>




 <input type="hidden" id="id_estu_GHJ"  name="id_estu_GHJ"
    value="<?php echo $row_datos_estudiantes['id_estud']; ?>">  <!-- para saber donde guardar el cambio -->




  <div class="col-md-11">




         <div class="form-row">

        
        <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-file-alt"></i></span> 
</div>

  <input maxlength="39" type="text" class="form-control form-control-sm " id="mod_nombres_estud" name="mod_nombres_estud"
value="<?php echo $row_datos_estudiantes['nombre_estu']; ?>" required> 
       
        </div>



        <div class="input-group col-md-2 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="far fa-file-alt"></i></span> 
</div>

  <input maxlength="39" type="text" class="form-control form-control-sm " id="mod_apellidos_estud" name="mod_apellidos_estud"
value="<?php echo $row_datos_estudiantes['apellidos_estu']; ?>" required> 
       
        </div>




        <div class="input-group input-group-sm col-md-3 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-user-tag"></i><i>&nbsp; Expediente:</i></span> 
</div>

<input maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" class="form-control form-control-sm " id="mod_exp_estud" name="mod_exp_estud"
value="<?php echo $row_datos_estudiantes['estu_expediente']; ?>" required> 
       
        </div>




      <div class="input-group input-group-sm col-md-3 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i>Ci. ó Ci. escolar:</i></span> 
</div>

<input maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" class="form-control form-control-sm " id="mod_ci_estud" name="mod_ci_estud"
value="<?php echo $row_datos_estudiantes['ci_estu']; ?>"> 
       
        </div>





<?php   // esto permite obtener los datos necesarios del representante y simplificar la busqueda

$id_del_estud = $row_datos_estudiantes['id_estud'];

include("../conectar.php");   

$query_estud = "SELECT * FROM sexo, reg_estudiantes                        
                        
         WHERE  reg_estudiantes.id_sexo = sexo.id_sexo            
            and id_estud = '$id_del_estud' ";

$datos_plantilla_estud = mysqli_query($enlace, $query_estud) or die(mysqli_error());

$row_datos_plantilla_estud = mysqli_fetch_array($datos_plantilla_estud); 


mysqli_close($enlace);


 ?>





        <div class="input-group input-group-sm col-md-2 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-venus-mars"></i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_genero_estud" name="mod_genero_estud">

<option value="<?php echo $row_datos_plantilla_estud['id_sexo']; ?>" selected><?php echo $row_datos_plantilla_estud['nombre_sexo']; ?></option>
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

      </div>  <!-- cierre row -->







<?php

$id_del_estudiante = $row_datos_plantilla_estud['id_estud'];

include("../conectar.php"); 

$query_estuXX = "SELECT * FROM d_ciudades, d_estados, d_paises, religiones, tb_medicos, tipo_sangres, reg_estudiantes 

         WHERE  d_ciudades.id_ciudad = reg_estudiantes.id_ciudad
         and d_estados.id_estado = reg_estudiantes.id_estado
         and d_paises.id_pais = reg_estudiantes.id_pais
         and religiones.id_religion = reg_estudiantes.id_religion
         and tb_medicos.id_medico = reg_estudiantes.id_medico
         and tipo_sangres.id_sangre = reg_estudiantes.id_sangre

         and id_estud = '$id_del_estudiante'
         
       ";

$datos_estuXX = mysqli_query($enlace, $query_estuXX) or die(mysqli_error());

$row_datos_estuXX = mysqli_fetch_array($datos_estuXX); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estuXX = mysqli_num_rows($datos_estuXX); 



mysqli_close($enlace);


?>

  




       <div class="form-row">



         <div class="input-group input-group-sm col-md-3 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i class="fa fa-birthday-cake"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" id="mod_nacimiento_estud" name="mod_nacimiento_estud" value="<?php echo $row_datos_estudiantes['nacimiento_estu']; ?>" >
        </div>




         <div class="input-group input-group-sm col-md-3 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i>Lugar de Nac.:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_ciudad_nac_estud" name="mod_ciudad_nac_estud">

<option value="<?php echo $row_datos_estuXX['id_ciudad']; ?>" selected><?php echo $row_datos_estuXX['nombre_ciudad']; ?></option>
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




                 <div class="input-group input-group-sm col-md-3 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i>Entidad Federal:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_entidad_fed_estud" name="mod_entidad_fed_estud">

<option value="<?php echo $row_datos_estuXX['id_estado']; ?>" selected><?php echo $row_datos_estuXX['nombre_estado']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_estados WHERE nombre_estado != '.' ORDER BY nombre_estado ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_estado']; ?>"><?php echo $row_datos_mod2['nombre_estado'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?>                             
                              
                            </select>                 
                 </div>




                  <div class="input-group input-group-sm col-md-3 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-globe"></i><i>&nbsp; Nacionalidad:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_pais_estud" name="mod_pais_estud">

<option value="<?php echo $row_datos_estuXX['id_pais']; ?>" selected><?php echo $row_datos_estuXX['nombre_pais']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM d_paises WHERE nombre_pais != '.' ORDER BY nombre_pais ASC";

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






   <div class="form-row">  <!-- row cero-->




 <div class="input-group input-group-sm col-md-4 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-columns"></i><i>&nbsp; Religión:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_religion_estud" name="mod_religion_estud">

<option value="<?php echo $row_datos_estuXX['id_religion']; ?>" selected><?php echo $row_datos_estuXX['tipo_religion']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM religiones WHERE tipo_religion != '.' ORDER BY tipo_religion ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_religion']; ?>"><?php echo $row_datos_mod2['tipo_religion'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?>                             
                              
                            </select>                 
                 </div>






<div class="input-group input-group-sm col-md-4 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i class="fab fa-medrt"></i><i>&nbsp; Presenta o padece de:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_medico_estud" name="mod_medico_estud">

<option value="<?php echo $row_datos_estuXX['id_medico']; ?>" selected><?php echo $row_datos_estuXX['nombre_medico']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM tb_medicos WHERE nombre_medico != '.' ORDER BY nombre_medico ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_medico']; ?>"><?php echo $row_datos_mod2['nombre_medico'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?>                             
                              
                            </select>                 
                 </div>





<div class="input-group input-group-sm col-md-4 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-syringe"></i><i>&nbsp; Tipo de sangre:</i></span>  
                    </div>
                    
                 
                            <select class="form-control form-control-sm" id="mod_sangre_estud" name="mod_sangre_estud">

<option value="<?php echo $row_datos_estuXX['id_sangre']; ?>" selected><?php echo $row_datos_estuXX['tipo_sangre']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM tipo_sangres WHERE tipo_sangre != '.' ORDER BY tipo_sangre ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_sangre']; ?>"><?php echo $row_datos_mod2['tipo_sangre'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?>                             
                              
                            </select>                 
                 </div>

                  
        </div>  


  </div>


</div>














<?php

$id_del_estudiante = $row_datos_plantilla_estud['id_estud'];

include("../conectar.php"); 

$query_estu_sob = "SELECT * FROM respuestas, d_ciudades, grados, temporada_escolar, respuestas2,  reg_estu_sobre

         WHERE  respuestas.id_respuesta = reg_estu_sobre.proviene_de_otro         
         and d_ciudades.id_ciudad = reg_estu_sobre.id_ciudad
         and grados.id_grado = reg_estu_sobre.id_grado
         and temporada_escolar.id_periodo_es = reg_estu_sobre.id_periodo_es
         and respuestas2.id_respuesta2 = reg_estu_sobre.es_repitiente             

         and id_estud = '$id_del_estudiante'
         
       ";

$datos_estu_sob = mysqli_query($enlace, $query_estu_sob) or die(mysqli_error());

$row_datos_estu_sob = mysqli_fetch_array($datos_estu_sob); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estu_sob = mysqli_num_rows($datos_estu_sob); 

mysqli_close($enlace);


?>







   <div class="form-row">  <!-- row cero-->
                  <div class="col-md-12 text-left mt-3 mb-2">
                  <b class="text-secondary"> Sobre el representado: </b>
                  </div>
        </div>  


      
<div class="form-row">



 <input type="hidden" id="id_reg_estu_sobre_GHJ"  name="id_reg_estu_sobre_GHJ"
    value="<?php echo $row_datos_estu_sob['id_reg_estu_sobre']; ?>">  <!-- para saber donde guardar el cambio -->



     <div class="input-group input-group-sm col-md-4 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-secondary" id="basic-addon1"><i>&nbsp; Proviene de otro plantel?:</i></span>  
                        </div>
                        
                     
                                <select class="form-control form-control-sm" id="mod_proviene_estud" name="mod_proviene_estud">

    <option value="<?php echo $row_datos_estu_sob['proviene_de_otro']; ?>" selected><?php echo $row_datos_estu_sob['nombre_respuesta']; ?></option>
    <option disabled></option>

                                    <optgroup label="Cambiar a...">
                                    <option disabled></option>


                                    <?php 

                              include("../conectar.php");

                  $querymod2 = "SELECT * FROM respuestas WHERE nombre_respuesta != '.' ORDER BY nombre_respuesta ASC";

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
                                  
                                </select>                 
      
      </div>



      <div class="input-group input-group-sm col-md-5 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-secondary" id="basic-addon1"><i>Nombre del plantel:</i></span>  
                  </div>
     
<input type="text" class="form-control form-control-sm" id="mod_nombre_plantel_estud" name="mod_nombre_plantel_estud" value="<?php echo $row_datos_estu_sob['nombre_plantel_pro']; ?>" >
        </div>




         <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-secondary" id="basic-addon1"><i class="fas fa-map-pin "></i><i>&nbsp; Lugar:</i></span>  
                        </div>
                        
                     
                                <select class="form-control form-control-sm" id="mod_lugar_estud" name="mod_lugar_estud">

    <option value="<?php echo $row_datos_estu_sob['id_ciudad']; ?>" selected><?php echo $row_datos_estu_sob['nombre_ciudad']; ?></option>
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








</div>



   <div class="form-row">  <!-- row cero-->



       <div class="input-group input-group-sm col-md-4 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-secondary" id="basic-addon1"><i>Grado o año cursado:</i></span>  
                        </div>
                        
                     
                                <select class="form-control form-control-sm" id="mod_grado_cur_estud" name="mod_grado_cur_estud">

    <option value="<?php echo $row_datos_estu_sob['id_grado']; ?>" selected><?php echo $row_datos_estu_sob['nombre_grados']; ?></option>
    <option disabled></option>

                                    <optgroup label="Cambiar a...">
                                    <option disabled></option>


                                    <?php 

                              include("../conectar.php");

                  $querymod2 = "SELECT * FROM grados WHERE nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
  and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'
  and nombre_grados != 'Pre Escolar 3er Nivel' and nombre_grados != 'Educación Inicial' and nombre_grados != '1er y 2do Año'
  and nombre_grados != '3er y 4to Año' and nombre_grados != '4to y 5to Año' and nombre_grados != '2do y 3er Año'
   and nombre_grados != 'Todos'
                   ORDER BY nombre_grados ASC";

                  $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

                  $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                              while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                              {                            
    ?>
        <option value = "<?php echo $row_datos_mod2['id_grado']; ?>"><?php echo $row_datos_mod2['nombre_grados'];?></option>
    <?php
                              }                          
                              mysqli_close($enlace);                                              

                              ?>                             
                                  
                                </select>                 
      
      </div>





       <div class="input-group input-group-sm col-md-4 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-secondary" id="basic-addon1"><i>Ciclo cursado:</i></span>  
                        </div>
                        
                     
                                <select class="form-control form-control-sm" id="mod_ciclo_cur_estud" name="mod_ciclo_cur_estud">

    <option value="<?php echo $row_datos_estu_sob['id_periodo_es']; ?>" selected><?php echo $row_datos_estu_sob['periodo_escolar']; ?></option>
    <option disabled></option>

                                    <optgroup label="Cambiar a...">
                                    <option disabled></option>


                                    <?php 

                              include("../conectar.php");

                  $querymod2 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar ASC";

                  $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

                  $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                              while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                              {                            
    ?>
        <option value = "<?php echo $row_datos_mod2['id_periodo_es']; ?>"><?php echo $row_datos_mod2['periodo_escolar'];?></option>
    <?php
                              }                          
                              mysqli_close($enlace);                                              

                              ?>                             
                                  
                                </select>                 
      
      </div>




      <div class="input-group input-group-sm col-md-4 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-secondary" id="basic-addon1"><i>&nbsp; Es repitiente?:</i></span>  
                        </div>
                        
                     
                                <select class="form-control form-control-sm" id="mod_repitiente_estud" name="mod_repitiente_estud">

    <option value="<?php echo $row_datos_estu_sob['es_repitiente']; ?>" selected><?php echo $row_datos_estu_sob['nombre_respuesta2']; ?></option>
    <option disabled></option>

                                    <optgroup label="Cambiar a...">
                                    <option disabled></option>


                                    <?php 

                              include("../conectar.php");

                  $querymod2 = "SELECT * FROM respuestas2 WHERE nombre_respuesta2 != '.' ORDER BY nombre_respuesta2 ASC";

                  $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

                  $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                              while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                              {                            
    ?>
        <option value = "<?php echo $row_datos_mod2['id_respuesta2']; ?>"><?php echo $row_datos_mod2['nombre_respuesta2'];?></option>
    <?php
                              }                          
                              mysqli_close($enlace);                                              

                              ?>                             
                                  
                                </select>                 
      
      </div>









                 
        </div> 







<?php

$id_del_estudiante = $row_datos_plantilla_estud['id_estud'];
include("../conectar.php"); 

$reg_estu_actual_HOY = "SELECT * FROM temporada_escolar, grados, secciones, reg_estu_actual  
           WHERE  temporada_escolar.id_periodo_es = reg_estu_actual.cursa_actualmente
             and  grados.id_grado  = reg_estu_actual.grado_actual             
             and  secciones.id_seccion = reg_estu_actual.id_seccion
             and id_estud = '$id_del_estudiante'
             and el_activo = '1'
            ORDER BY id_reg_estu_actual DESC LIMIT 1";   // me selecciona el ultimo es decir el actual en curso

$q_reg_estu_actual_HOY = mysqli_query($enlace, $reg_estu_actual_HOY) or die(mysqli_error());

$r_d_reg_estu_actual_HOY = mysqli_fetch_array($q_reg_estu_actual_HOY); 
 
mysqli_close($enlace);
?>







<?php

$id_del_estudiante = $row_datos_plantilla_estud['id_estud'];

include("../conectar.php");

        $queryOBS = "SELECT * FROM obs_estu
                        
          WHERE  id_estud ='$id_del_estudiante'
          
            ";

$datos_plantillaOBS = mysqli_query($enlace, $queryOBS) or die(mysqli_error());

$row_datos_plantillaOBS = mysqli_fetch_array($datos_plantillaOBS); 

mysqli_close($enlace);


            ?>








  <div class="form-row">  <!-- row cero-->
                  <div class="col-md-12 text-left mt-3 mb-2">
                  <b class="text-secondary"> Observaciones:</b>
                  </div>
  </div>   




<div class="form-row">


<div class="col-md-12 mb-1">

<input type="hidden" id="id_obs_estud"  name="id_obs_estud" value="<?php echo $row_datos_plantillaOBS['id_obs_estu']; ?>">  <!-- para saber donde guardarla -->

<textarea maxlength="750" class="form-control" id="mod_obs_text<?php echo $row_datos_plantillaOBS['id_obs_estu']; ?>" name="mod_obs_text" rows="2"> <?php echo $row_datos_plantillaOBS['obs_estud']; ?> </textarea>

<span id="chars<?php echo $row_datos_plantillaOBS['id_obs_estu']; ?>">750</span> caracteres restantes.

</div>


<script type="text/javascript">
  
var maxLength1 = 750;
$('#mod_obs_text<?php echo $row_datos_plantillaOBS['id_obs_estu']; ?>').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength1-length;
  $('#chars<?php echo $row_datos_plantillaOBS['id_obs_estu']; ?>').text(length);
});

</script>


 </div> 










  <div class="form-row">  <!-- row cero-->
                  <div class="col-md-12 text-left mt-4 ">
                  <h3 class="text-success">El estudiante se encuentra

<?php 

$varA = $r_d_reg_estu_actual_HOY['nombre_seccion'];
$varB = $r_d_reg_estu_actual_HOY['fecha_inscripcion'];

$varC = $row_datos_estudiantes['inscrito_si_o_no'];




if ($varA =="." && $varB =="" && $varC == "0") {

echo " <b><i class=\"text-danger\">&nbsp;Pre-Inscrito - Nuevo Estudiante &nbsp;</i></b>";

$estadito = "disabled";
$estaditoB = "";


}


if ($varA =="." && $varB =="" && $varC == "1") {

echo " <b><i class=\"text-danger\">&nbsp;Pre-Inscrito - Próximo Año &nbsp;</i></b>";

$estadito = "disabled";
$estaditoB = "";


}

if ($varA =="." && $varB !="" && $varC == "1") {

echo " <b><i class=\"text-danger\">&nbsp;Pre-Inscrito - Próximo Año &nbsp;</i></b>";

$estadito = "disabled";
$estaditoB = "";


}


if ($varA !="." && $varB !="" && $varC == "0") {

echo " <b><i class=\"text-danger\">&nbsp;No Inscrito &nbsp;</i></b>";

$estadito = "disabled";
$estaditoB = "";


}


if ($varA !="." && $varB !="" && $varC == "1") {

echo " <b><i class=\"text-danger\">&nbsp;Inscrito &nbsp;</i></b>";

$estadito = "";
$estaditoB = "disabled";


}



?>




                   en:</h3>










                  </div>
  </div>  






<hr class="mt-1 mb-2" style="background-color: green; height: 1px; border: 0;">


<div class="form-row">  <!-- row cero-->


  <div class="input-group input-group col-md-12">

                  
    <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i>Cursa y/o Curso:</i></span>
    </div> 



 <input type="hidden" id="id_reg_estu_actual_hoy"  name="id_reg_estu_actual_hoy"
    value="<?php echo $r_d_reg_estu_actual_HOY['id_reg_estu_actual']; ?>"  >  <!-- para saber donde guardar el cambio -->




     <select class="form-control form-control" id="mod_grado_actual" name="mod_grado_actual" <?php echo $estaditoB; ?> >

<option value="<?php echo $r_d_reg_estu_actual_HOY['grado_actual']; ?>" selected><?php echo $r_d_reg_estu_actual_HOY['nombre_grados']; ?></option>
    <option disabled></option>

                                    <optgroup label="Cambiar a...">
                                    <option disabled></option>


                                    <?php 

                              include("../conectar.php");

                  $querymod2 = "SELECT * FROM grados WHERE nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
  and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'
  and nombre_grados != 'Pre Escolar 3er Nivel' and nombre_grados != 'Educación Inicial' and nombre_grados != '1er y 2do Año'
  and nombre_grados != '3er y 4to Año' and nombre_grados != '4to y 5to Año' and nombre_grados != '2do y 3er Año'
   and nombre_grados != 'Todos' ORDER BY nombre_grados ASC";

                  $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

                  $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                              while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                              {                            
    ?>
        <option value = "<?php echo $row_datos_mod2['id_grado']; ?>"><?php echo $row_datos_mod2['nombre_grados'];?></option>
    <?php
                              }                          
                              mysqli_close($enlace);                                              

                              ?>                             
                                  
      </select>








      <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i>en la sección ó nivel:</i></span>
    </div> 


     <select class="form-control form-control" id="mod_seccion_actual" name="mod_seccion_actual" <?php echo $estaditoB; ?> >

<option value="<?php echo $r_d_reg_estu_actual_HOY['id_seccion']; ?>" selected><?php echo $r_d_reg_estu_actual_HOY['nombre_seccion']; ?></option>
    <option disabled></option>

                                    <optgroup label="Cambiar a...">
                                    <option disabled></option>


                                    <?php 

                              include("../conectar.php");

                  $querymod2 = "SELECT * FROM secciones WHERE nombre_seccion != '.' and nombre_seccion != '1er a 3er Nivel'  and nombre_seccion != 'A y B' and nombre_seccion != '1er Nivel' and nombre_seccion != '2do Nivel' and nombre_seccion != '3er Nivel' and nombre_seccion != 'Todas'
                   ORDER BY nombre_seccion ASC";

                  $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

                  $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                              while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                              {                            
    ?>
        <option value = "<?php echo $row_datos_mod2['id_seccion']; ?>"><?php echo $row_datos_mod2['nombre_seccion'];?></option>
    <?php
                              }                          
                              mysqli_close($enlace);                                              

                              ?>                             
                                  
      </select>





    


    <?php

 if ($r_d_reg_estu_actual_HOY['fecha_inscripcion']!="")
      { 

      $fech_mantener =  $r_d_reg_estu_actual_HOY['fecha_inscripcion'];

       $fecha_formateada = date('d-m-Y', strtotime($r_d_reg_estu_actual_HOY['fecha_inscripcion']));



    echo " <div class=\"input-group-prepend\">
                    <span class=\"input-group-text alert-danger\" id=\"basic-addon1\"><b><i>Inscrito el: ".$fecha_formateada."</i></b></span>

<input type=\"hidden\" id=\"mod_inscripcionnn_fecha\" name=\"mod_inscripcionnn_fecha\" value=\"$fech_mantener\">


    </div> "; }


 else 

 {




  echo " <div class=\"input-group-prepend\">
                    <span class=\"input-group-text alert-danger\" id=\"basic-addon1\"><b><i>fecha inscripción:</i></b></span>
    </div>  
  <input type=\"date\" class=\"form-control form-control-sm\" id=\"mod_inscripcionnn_fecha\" name=\"mod_inscripcionnn_fecha\" required>"; }

?>







<!-- ojo ******************************************** -->


<?php

$respuesta_respuesta = $row_datos_estudiantes['inscrito_si_o_no'];

if ($respuesta_respuesta == 0) {
  $valor_varlor = 0;
  $texto_texto = 'No';
}


if ($respuesta_respuesta == 1) {
  $valor_varlor = 1;
  $texto_texto = 'Si';
}

?>





<div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i>Inscribir?:</i></span>
    </div> 


     <select class="form-control form-control" id="mod_estatus_ins_new_actual" name="mod_estatus_ins_new_actual" <?php echo $estaditoB; ?> >

<option value="<?php echo $valor_varlor; ?>" selected><?php echo $texto_texto; ?></option>
    <option disabled></option>

                                    <optgroup label="Cambiar a...">
                                    <option disabled></option>
                                 
        <option value = "0>">No</option>
        <option value = "1>">Si</option>
          
                                  
      </select>

















      <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i>ciclo:</i></span>
    </div> 


     <select class="form-control form-control" id="mod_ciclo_actual" name="mod_ciclo_actual"  <?php echo $estaditoB; ?>>

<option value="<?php echo $r_d_reg_estu_actual_HOY['cursa_actualmente']; ?>" selected><?php echo $r_d_reg_estu_actual_HOY['periodo_escolar']; ?></option>
    <option disabled></option>

                                    <optgroup label="Cambiar a...">
                                    <option disabled></option>


                                    <?php 



                              include("../conectar.php");

                  $querymod2 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.'  ORDER BY periodo_escolar ASC";

                  $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

                  $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                              while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                              {                            
    ?>
        <option value = "<?php echo $row_datos_mod2['id_periodo_es']; ?>"><?php echo $row_datos_mod2['periodo_escolar'];?></option>
    <?php
                              }                          
                              mysqli_close($enlace);                                              

                              ?>                             
                                  
      </select>            



    

  </div>  <!-- cierre primer col -->

<input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
<input type="hidden" id="id_repre"  name="id_repre" value="<?php echo $row_datos_estudiantes['id_repre']; ?>">






  <div class="col-md-12 mt-2">
    <button type="submit" name="editar_selecc" class="btn btn-success" value="<?php echo $row_datos_estudiantes['id_estud']; ?>" <?php echo $estaditoB; ?> >
    Actualizar &nbsp;&nbsp;<i class="far fa-edit fa-lg"></i></button></div>  </form>




</div>






<hr class="mt-2 mb-3" style="background-color: green; height: 1px; border: 0;">



<hr class="mt-5 mb-1" style="background-color: red; height: 1px; border: 0;">


  <div class="form-row">  <!-- row cero-->
                  <div class="col-md-12 text-left mt-2 ">
                  <h3 class="text-danger">Historial de Citaciones:</h3>



<?php  

$el_es = $row_datos_estudiantes['id_estud'];

include("../conectar.php");

$buscar_todos = "SELECT * FROM citas where id_estud = '$el_es' ORDER BY fecha_cita ASC ";   

$encuentralos_ya = mysqli_query($enlace, $buscar_todos) or die(mysqli_error());   

$creame_una_lista = mysqli_fetch_array($encuentralos_ya);

$totalRows_findx = mysqli_num_rows($encuentralos_ya);    

mysqli_close($enlace);    



if ($totalRows_findx >="1") {
  
echo "-.";

do{   ?>

 <span style="color:#334d00;"><b>

   <?php   echo $creame_una_lista['causa_cita']; ?>, </b></span>

<?php   }  while ( $creame_una_lista = mysqli_fetch_array($encuentralos_ya) ); 

}


  ?>










                  </div>
  </div> 


<hr class="mt-2 mb-2" style="background-color: red; height: 1px; border: 0;">




  <div class="form-row" >  <!-- row cero-->
                  <div class="col-md-12 text-left mt-4 ">
                  <h3 class="text-primary">Nuevos Datos:</h3>
                  </div>
  </div>  



<form method="post">


<hr class="mt-1 mb-2" style="background-color: blue; height: 1px; border: 0;">





<div class="form-row">


<div class="input-group col-md-3 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-danger" id="basic-addon1">&nbsp;<i>Año escolar:</i></span>  
                    </div>
                 
                        <select class="form-control importantex" id="mod_new_ciclo_actual" name="mod_new_ciclo_actual" required <?php echo $estadito; ?> >



<option selected disabled></option>

                                <optgroup label="Seleccionar...">
                                <option disabled></option>
                              

                               <?php do{?>                                    

<option value="<?php echo $row_datos_periodo_act1['id_periodo_es']; ?>"><?php echo $row_datos_periodo_act1['periodo_escolar']; ?></option>

                                <?php } while ($row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1)); ?> 
                              
                        </select>
                 
</div>






  


  <div class="input-group col-md-3 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Grado o año:</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_grado_actual" name="mod_new_grado_actual" required <?php echo $estadito; ?> >
                              
                          <option selected disabled></option>
                              

                               <?php do{?>                                

<option value="<?php echo $row_datos_gradosA1['id_grado']; ?>"><?php echo $row_datos_gradosA1['nombre_grados']; ?></option>

                                <?php } while ($row_datos_gradosA1 = mysqli_fetch_assoc($datos_gradosA1)); ?> 
                              
                        </select>
                 
  </div>


  <div class="input-group col-md-3 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Repite?:</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_repite" name="mod_new_repite" <?php echo $estadito; ?>>
                              
                           <option selected value="2">No</option>
                              <option value="1">Si</option>
                        </select>
                 
  </div>






  <div class="input-group col-md-3 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Edad:</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_edad" name="mod_new_edad" required <?php echo $estadito; ?> >
                              
                          <option selected disabled></option>
                              

                               <?php do{?>                                

<option value="<?php echo $row_datos_edad1['id_edad']; ?>"><?php echo $row_datos_edad1['nombre_edad']; ?></option>

                                <?php } while ($row_datos_edad1 = mysqli_fetch_assoc($datos_edad1)); ?> 
                              
                        </select>
                 
  </div>


</div>



<div class="form-row">

  <div class="input-group col-md-5 mb-2">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i>Fecha de inscripción:</i></span>  
      </div>
      <input type="date" class="form-control importantex" id="mod_new_fecha_ins" name="mod_new_fecha_ins" required <?php echo $estadito; ?>>
  </div>  




  <div class="input-group col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Sección momentanea:</i></span>  
                    </div>
                 
                       <select class="form-control importantex" id="mod_new_seccion_actual" name="mod_new_seccion_actual" required <?php echo $estadito; ?> >
                              
                          <option selected disabled></option>
                              

                               <?php do{?>                                

<option value="<?php echo $row_datos_seccion1['id_seccion']; ?>"><?php echo $row_datos_seccion1['nombre_seccion']; ?></option>

                                <?php } while ($row_datos_seccion1 = mysqli_fetch_assoc($datos_seccion1)); ?> 
                              
                        </select>
                 
  </div>



  <div class="input-group  col-md-3 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>T. Camisa:</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_talla_cam" name="mod_new_talla_cam" required <?php echo $estadito; ?>>
                              
                          <option selected disabled></option>
                              

                               <?php do{?>                                 

<option value="<?php echo $row_datos_camisas1['id_camisa']; ?>"><?php echo $row_datos_camisas1['talla_camisa']; ?></option>

                                <?php } while ($row_datos_camisas1 = mysqli_fetch_assoc($datos_camisas1)); ?> 
                              
                        </select>
                 
  </div>



  






</div>











<div class="form-row">


  <div class="input-group  col-md-3 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>T. Pantalón:</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_talla_pant" name="mod_new_talla_pant" required <?php echo $estadito; ?>>
                              
                          <option selected disabled></option>
                              

                               <?php do{?>                                

<option value="<?php echo $row_datos_pantalon1['id_pantalon']; ?>"><?php echo $row_datos_pantalon1['nombre_pantalon']; ?></option>

                                <?php } while ($row_datos_pantalon1 = mysqli_fetch_assoc($datos_pantalon1)); ?> 
                              
                        </select>
                 
  </div>

  

  <div class="input-group  col-md-3 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>T. Zapatos:</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_talla_zap" name="mod_new_talla_zap" required <?php echo $estadito; ?>>
                              
                          <option selected disabled></option>
                              

                               <?php do{?>                                

<option value="<?php echo $row_datos_zapatos1['id_zapato']; ?>"><?php echo $row_datos_zapatos1['talla_zapato']; ?></option>

                                <?php } while ($row_datos_zapatos1 = mysqli_fetch_assoc($datos_zapatos1)); ?> 
                              
                        </select>
                 
  </div>



  <div class="input-group  col-md-3 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">&nbsp;<i>Peso: (kilos)</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_peso_act" name="mod_new_peso_act" required <?php echo $estadito; ?>>
                              
                          <option selected disabled></option>
                              

                               <?php do{?>                                

<option value="<?php echo $row_datos_peso1['id_peso']; ?>"><?php echo $row_datos_peso1['nombre_peso']; ?></option>

                                <?php } while ($row_datos_peso1 = mysqli_fetch_assoc($datos_peso1)); ?> 
                              
                        </select>
                 
  </div>




  <div class="input-group  col-md-3 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">&nbsp;<i>Estatura: (cms)</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_estatura_act" name="mod_new_estatura_act" required <?php echo $estadito; ?>>
                              
                          <option selected disabled></option>
                              

                               <?php do{?>                                

<option value="<?php echo $row_datos_altura1['id_altura']; ?>"><?php echo $row_datos_altura1['nombre_altura']; ?></option>

                                <?php } while ($row_datos_altura1 = mysqli_fetch_assoc($datos_altura1)); ?> 
                              
                        </select>
                 
  </div>




</div>

<div class="form-row">



 <input type="hidden" id="id_reg_estu_actual_hoy"  name="id_reg_estu_actual_hoy"
    value="<?php echo $r_d_reg_estu_actual_HOY['id_reg_estu_actual']; ?>"> 


<input type="hidden" id="quien" name="quien" value="<?php echo $_SESSION['id']; ?>">

<input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
<input type="hidden" id="id_repre"  name="id_repre" value="<?php echo $row_datos_estudiantes['id_repre']; ?>">


 <input type="hidden" id="cursa_actualmentePP"  name="cursa_actualmentePP"
    value="<?php echo $r_d_reg_estu_actual_HOY['cursa_actualmente']; ?>">




  <div class="col-md-12 mt-2">
    <button type="submit" name="editar_new_selecc" class="btn btn-primary btn-block" value="<?php echo $row_datos_estudiantes['id_estud']; ?>" <?php echo $estadito; ?> >
    Procesar Nueva Re-Inscripción &nbsp;&nbsp;<i class="fas fa-upload fa-lg" ></i></button></div> </form> 

</div>

<hr class="mt-2 mb-2" style="background-color: blue; height: 1px; border: 0;">








</div>



<hr class="mt-2 mb-2" style="background-color: blue; height: 1px; border: 0;">






</div> <!-- cierre principal col md 12 -->
</div> <!-- cierre form row -->


