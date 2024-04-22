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
                      <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-briefcase"></i><i>&nbsp; Profesión/Oficio:</i></span>  
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
                      <span class="input-group-text alert-info" id="basic-addon1"><i>Entidad F.:</i></span>  
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
    <span class="input-group-text alert-info" id="basic-addon1"><i>Munic.:</i></span> 
  </div>

   <select class="form-control form-control-sm" id="mod_municipio_estud" name="mod_municipio_estud" required >
<option value="<?php echo $row_datos_estudiantes['municipio_est']; ?>" selected><?php echo $row_datos_estudiantes['municipio_est']; ?></option>
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
    <option value = "<?php echo $row_datos_mod2['nombre_municipio']; ?>"><?php echo $row_datos_mod2['nombre_municipio'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);
                          ?>   
                            </select>   
</div>




                






      </div>   <!-- cierre row -->






   <div class="form-row">  <!-- row cero-->




  <div class="input-group input-group-sm col-md-3 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-globe"></i><i>&nbsp; Nac.:</i></span>  
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




 <div class="input-group input-group-sm col-md-3 mb-2">
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






<div class="input-group input-group-sm col-md-3 mb-2">
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





<div class="input-group input-group-sm col-md-3 mb-2">
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



<div class="form-row">  <!-- row cero  nuevo añadido-->

<div class="input-group input-group-sm col-md-2 mb-2">

  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><i>Vive con su:</i></span> 
  </div>

   <select class="form-control form-control-sm" id="mod_vive_con_estud" name="mod_vive_con_estud" required >
<option value="<?php echo $row_datos_estudiantes['vive_con']; ?>" selected><?php echo $row_datos_estudiantes['vive_con']; ?></option>
<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php 
                          include("../conectar.php");
              $querymod2 = "SELECT * FROM d_vive_con WHERE nombre_vive_con != '.' ORDER BY nombre_vive_con ASC";
              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());
              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['nombre_vive_con']; ?>"><?php echo $row_datos_mod2['nombre_vive_con'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);
                          ?>   
                            </select>   
</div>

 <div class="input-group input-group-sm col-md-3 mb-2">

  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><i>Se traslada en:</i></span> 
  </div>

   <select class="form-control form-control-sm" id="mod_traslada_estud" name="mod_traslada_estud" required >
<option value="<?php echo $row_datos_estudiantes['se_traslada_en']; ?>" selected><?php echo $row_datos_estudiantes['se_traslada_en']; ?></option>
<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php 
                          include("../conectar.php");
              $querymod2 = "SELECT * FROM d_traslada_en WHERE nombre_traslada_en != '.' ORDER BY nombre_traslada_en ASC";
              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());
              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['nombre_traslada_en']; ?>"><?php echo $row_datos_mod2['nombre_traslada_en'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);
                          ?>   
                            </select>   
</div>

<div class="input-group input-group-sm col-md-3 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i>Alérgico a:</i></span>  
                    </div>    

                      <input maxlength="29" type="text" class="form-control form-control-sm " id="mod_alergias_estud" name="mod_alergias_estud"
value="<?php echo $row_datos_estudiantes['alergico_a']; ?>" required>   
                                        
                 </div>

                 <div class="input-group input-group-sm col-md-4 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><b>A padecido de:</b></span> 
</div>

  <input maxlength="59" type="text" class="form-control form-control-sm " id="mod_padecio_estud" name="mod_padecio_estud"
value="<?php echo $row_datos_estudiantes['enf_padecidas']; ?>" required> 
       
        </div>    

        </div>     <!-- aqui termina -->



<div class="form-row">  <!-- row uno  nuevo añadido-->

 <div class="input-group input-group-sm col-md-3 mb-2">

  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><i>Se retira del colegio con/en:</i></span> 
  </div>

   <select class="form-control form-control-sm" id="mod_se_retira_con" name="mod_se_retira_con" required >
<option value="<?php echo $row_datos_estudiantes['se_retira_con']; ?>" selected><?php echo $row_datos_estudiantes['se_retira_con']; ?></option>
<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>

                                <?php 
                          include("../conectar.php");
              $querymod2 = "SELECT * FROM d_se_retira WHERE nombre_se_retira != '.' ORDER BY nombre_se_retira ASC";
              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());
              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['nombre_se_retira']; ?>"><?php echo $row_datos_mod2['nombre_se_retira'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);
                          ?>   
                            </select>   
</div>

<div class="input-group input-group-sm col-md-3 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i>En control con un especialista en:</i></span>  
                    </div>  
                            <input maxlength="59" type="text" class="form-control form-control-sm " id="mod_control_med" name="mod_control_med"
value="<?php echo $row_datos_estudiantes['control_med']; ?>">   
                                      
</div>

<div class="input-group input-group-sm col-md-3 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i>Cuales medicamentos recibe:</i></span>  
                    </div>  
                            <input maxlength="29" type="text" class="form-control form-control-sm " id="mod_medicamentos" name="mod_medicamentos"
value="<?php echo $row_datos_estudiantes['medicamentos']; ?>">   
                                      
</div>


      <div class="input-group input-group-sm col-md-3 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-danger" id="basic-addon1"><i class="fas fa-at"></i></span> 
</div>

<input maxlength="59"  type="email" class="form-control form-control-sm " id="mod_email_estu" name="mod_email_estu"
value="<?php echo $row_datos_estudiantes['email_estu']; ?>"> 
       
        </div>



</div>     <!-- aqui termina uno -->


 <div class="form-row">  <!-- row cero-->
                  <div class="col-md-12 text-left mb-2">
                  <b class="text-success"> Control de Vacunas: </b>
                  </div>
        </div>  


<div class="form-row">  <!-- row dos  nuevo añadido-->

     <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Antipoliomelitis(bpi):</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v1" name="mod_v1">

    <option value="<?php echo $row_datos_estudiantes['v1']; ?>" selected><?php echo $row_datos_estudiantes['v1']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>


    <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>BCG:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v2" name="mod_v2">

    <option value="<?php echo $row_datos_estudiantes['v2']; ?>" selected><?php echo $row_datos_estudiantes['v2']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>


    <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Difteria:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v3" name="mod_v3">

    <option value="<?php echo $row_datos_estudiantes['v3']; ?>" selected><?php echo $row_datos_estudiantes['v3']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>



      <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Anti-Influenza:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v4" name="mod_v4">

    <option value="<?php echo $row_datos_estudiantes['v4']; ?>" selected><?php echo $row_datos_estudiantes['v4']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>







</div>     <!-- aqui termina dos -->



<div class="form-row">  <!-- row tres  nuevo añadido-->

    <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Hepatitis A:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v5" name="mod_v5">

    <option value="<?php echo $row_datos_estudiantes['v5']; ?>" selected><?php echo $row_datos_estudiantes['v5']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>TosFerina (DTpa):</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v6" name="mod_v6">

    <option value="<?php echo $row_datos_estudiantes['v6']; ?>" selected><?php echo $row_datos_estudiantes['v6']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>HB:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v7" name="mod_v7">

    <option value="<?php echo $row_datos_estudiantes['v7']; ?>" selected><?php echo $row_datos_estudiantes['v7']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>                                                                      
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Tétanos:</i></span>  
                        </div>  
     <select class="form-control form-control-sm" id="mod_v8" name="mod_v8">

    <option value="<?php echo $row_datos_estudiantes['v8']; ?>" selected><?php echo $row_datos_estudiantes['v8']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>                                                                      
    </div>

</div>     <!-- aqui termina tres -->




<div class="form-row">  <!-- row cuatro  nuevo añadido-->

    <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Rotavirus:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v9" name="mod_v9">

    <option value="<?php echo $row_datos_estudiantes['v9']; ?>" selected><?php echo $row_datos_estudiantes['v9']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Rubéola:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v10" name="mod_v10">

    <option value="<?php echo $row_datos_estudiantes['v10']; ?>" selected><?php echo $row_datos_estudiantes['v10']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Parotiditis (SRP):</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v11" name="mod_v11">

    <option value="<?php echo $row_datos_estudiantes['v11']; ?>" selected><?php echo $row_datos_estudiantes['v11']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>                                                                      
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Covid-19:</i></span>  
                        </div>  
     <select class="form-control form-control-sm" id="mod_v12" name="mod_v12">

    <option value="<?php echo $row_datos_estudiantes['v12']; ?>" selected><?php echo $row_datos_estudiantes['v12']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>                                                                      
    </div>

</div>     <!-- aqui cuatro -->




<div class="form-row">  <!-- row quinto  nuevo añadido-->

    <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Varicela:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v13" name="mod_v13">

    <option value="<?php echo $row_datos_estudiantes['v13']; ?>" selected><?php echo $row_datos_estudiantes['v13']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Fiebre Amarilla (FA):</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v14" name="mod_v14">

    <option value="<?php echo $row_datos_estudiantes['v14']; ?>" selected><?php echo $row_datos_estudiantes['v14']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Sarampión:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v15" name="mod_v15">

    <option value="<?php echo $row_datos_estudiantes['v15']; ?>" selected><?php echo $row_datos_estudiantes['v15']; ?></option>
    <option disabled></option>

    <option value="No" >No</option>
    <option value="Si" >Si</option>  
                                </select>                                                                      
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Otra(s):</i></span>  
                        </div>
<input maxlength="29" type="text" class="form-control form-control-sm" id="v_otra" name="v_otra" value="<?php echo $row_datos_estudiantes['v_otra']; ?>" >  
                                                                   
    </div>

</div>     <!-- aqui quinto -->







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



       <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-secondary" id="basic-addon1"><i>Grado/nivel o año cursado:</i></span>  
                        </div>
                        
                     
                                <select class="form-control form-control-sm" id="mod_grado_cur_estud" name="mod_grado_cur_estud">

    <option value="<?php echo $row_datos_estu_sob['id_grado']; ?>" selected><?php echo $row_datos_estu_sob['nombre_grados']; ?></option>
    <option disabled></option>

                                    <optgroup label="Cambiar a...">
                                    <option disabled></option>


                                    <?php 

                              include("../conectar.php");

                  $querymod2 = "SELECT * FROM grados, divisiones
  WHERE  grados.id_division = divisiones.id_division
  and nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
  and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'

and nombre_grados != 'Pre Escolar' and nombre_grados != 'Varios Media' and nombre_grados != 'Zero, no aplica'
  
  and nombre_grados != 'Pre Escolar 3er Nivel' and nombre_grados != 'Educación Inicial' and nombre_grados != '1er y 2do Año'
  and nombre_grados != '3er y 4to Año' and nombre_grados != '4to y 5to Año' and nombre_grados != '2do y 3er Año'
   and nombre_grados != 'Todos' ORDER BY nombre_division ASC";

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





       <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-secondary" id="basic-addon1"><i>Ciclo/Año cursado:</i></span>  
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




      <div class="input-group input-group-sm col-md-2 mb-2">
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



 <div class="input-group input-group-sm col-md-4 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-danger" id="basic-addon1"><i>Áreas ó Asignat. Pendientes:</i></span>  
                  </div>
     
<input type="text" class="form-control form-control-sm" id="mod_areas_pendientes" name="mod_areas_pendientes" value="<?php echo $row_datos_estu_sob['areas_pendientes']; ?>" >
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
                  <h3 class="text-success">Ultimo Registro:</h3>
                  </div>
  </div>  






<hr class="mt-1 mb-2" style="background-color: green; height: 1px; border: 0;">


<div class="form-row">  <!-- row cero-->


  <div class="input-group input-group col-md-12">

                  
    <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i>Cursa y/o Curso:</i></span>
    </div> 



 <input type="hidden" id="id_reg_estu_actual_hoy"  name="id_reg_estu_actual_hoy"
    value="<?php echo $r_d_reg_estu_actual_HOY['id_reg_estu_actual']; ?>">  <!-- para saber donde guardar el cambio -->




     <select class="form-control form-control" id="mod_grado_actual" name="mod_grado_actual" disabled>

<option value="<?php echo $r_d_reg_estu_actual_HOY['grado_actual']; ?>" selected><?php echo $r_d_reg_estu_actual_HOY['nombre_grados']; ?></option>
    <option disabled></option>

                                    <optgroup label="Cambiar a...">
                                    <option disabled></option>


                                    <?php 

                              include("../conectar.php");

                  $querymod2 = "SELECT * FROM grados WHERE nombre_grados != '.' and nombre_grados != '.' and nombre_grados != 'Varios Básica' 
                  and nombre_grados != 'Varios Básica y Media'
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
                    <span class="input-group-text alert-success" id="basic-addon1"><i>en el grupo, sección ó nivel:</i></span>
    </div> 


     <select class="form-control form-control" id="mod_seccion_actual" name="mod_seccion_actual" disabled>

<option value="<?php echo $r_d_reg_estu_actual_HOY['id_seccion']; ?>" selected><?php echo $r_d_reg_estu_actual_HOY['nombre_seccion']; ?></option>
    <option disabled></option>

                                    <optgroup label="Cambiar a...">
                                    <option disabled></option>


                                    <?php 

                              include("../conectar.php");

                  $querymod2 = "SELECT * FROM secciones WHERE nombre_seccion != '.' and nombre_seccion != '1er a 3er Nivel'  and nombre_seccion != 'A y B'
                  and nombre_seccion != '1er Nivel' and nombre_seccion != '2do Nivel' and nombre_seccion != '3er Nivel' and nombre_seccion != 'Todas'
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





      <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i>ciclo/año:</i></span>
    </div> 


     <select class="form-control form-control" id="mod_ciclo_actual" name="mod_ciclo_actual" disabled>

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



    

  </div> 

<input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
<input type="hidden" id="id_repre"  name="id_repre" value="<?php echo $row_datos_estudiantes['id_repre']; ?>">



  <div class="col-md-12 mt-2">
    <button type="submit" name="editar_selecc" class="btn btn-success btn-block" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
    Actualizar Los Cambios Realizados al Representante y al Estudiante &nbsp;&nbsp;<i class="far fa-edit fa-lg"></i></button></div>  </form>




</div>



<hr class="mt-2 mb-5" style="background-color: green; height: 1px; border: 0;">



<?php


$id_del_estudiante = $row_datos_estudiantes['id_estud'];


include("../conectar.php");

$query_detallado = "SELECT * FROM reg_madre, respuestas, d_paises, religiones, tb_estado_civil, d_ciudades, d_municipio, d_parroquia, tb_profesiones, respuestas2

    
         WHERE   reg_madre.id_estud = '$id_del_estudiante'
         and respuestas.id_respuesta = reg_madre.id_madre_vive
         and d_paises.id_pais = reg_madre.nac_madre

         and religiones.id_religion = reg_madre.religion_madre
         and tb_estado_civil.id_estado_civil = reg_madre.civil_madre
         and d_ciudades.id_ciudad = reg_madre.id_ciudad_madre
         and d_municipio.id_municipio = reg_madre.id_municipio_madre

          and d_parroquia.id_parroquia = reg_madre.id_parroquia_madre
         and tb_profesiones.id_profesion = reg_madre.id_profesion_madre
         and respuestas2.id_respuesta2 = reg_madre.ex_alumno_madre

   
         ORDER BY id_madre limit 1 ";

$datos_estudiantes_detallado = mysqli_query($enlace, $query_detallado) or die(mysqli_error());

$row_datos_estudiantes_detallado = mysqli_fetch_array($datos_estudiantes_detallado); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estudiantes_detallado = mysqli_num_rows($datos_estudiantes_detallado); 




mysqli_close($enlace);


?>




<form method="post">

<div class="row">
  <span class="" style="font-size: 18px; color:hotpink;"> <b>Datos de la Madre: </b></span>
</div>

<div class="form-row mt-1">


          <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Vive?:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="vive_madre" name="vive_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['id_madre_vive']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_respuesta']; ?></option>
                              <option disabled></option>




<?php

include("../conectar.php");

$queryvive = "SELECT * FROM respuestas WHERE nombre_respuesta != '.' ORDER BY nombre_respuesta DESC";

      $datos_vive = mysqli_query($enlace, $queryvive) or die(mysqli_error());

      $row_datos_vive = mysqli_fetch_assoc($datos_vive);

mysqli_close($enlace);  

?>


                         
  <?php do{?>                                

<option value="<?php echo $row_datos_vive['id_respuesta']; ?>"><?php echo $row_datos_vive['nombre_respuesta']; ?></option>

                                <?php } while ($row_datos_vive = mysqli_fetch_assoc($datos_vive)); ?> 

     
                              
                        </select>
                 
   </div>





      <div class="input-group input-group-sm col-md-3 mb-2 ">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;Nombres:&nbsp;</i></span>  
      </div>
      <input maxlength="39" type="text" class="form-control" id="nombres_madre" name="nombres_madre" placeholder="" value="<?php echo $row_datos_estudiantes_detallado['nombres_madre']; ?>"
      >
      </div>


       <div class="input-group input-group-sm col-md-3 mb-2 ">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;Apellidos:&nbsp;</i></span>  
      </div>
      <input maxlength="39" type="text" class="form-control" id="apellidos_madre" name="apellidos_madre" placeholder="" value="<?php echo $row_datos_estudiantes_detallado['apellidos_madre']; ?>"
      >
      </div>


      <div class="input-group input-group-sm col-md-2 mb-2 ">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;N° Doc. de Id:&nbsp;</i></span>  
      </div>
      <input maxlength="15" type="text" class="form-control" id="cedula_madre" name="cedula_madre" placeholder=""  value="<?php echo $row_datos_estudiantes_detallado['ci_madre']; ?>"
      >
      </div>



      <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Nacionalidad:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="nac_madre" name="nac_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['nac_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_pais']; ?></option>
                              <option disabled></option>



<?php

include("../conectar.php");

$querypaises = "SELECT * FROM d_paises WHERE nombre_pais != '.' ORDER BY nombre_pais ASC";

      $datos_paises = mysqli_query($enlace, $querypaises) or die(mysqli_error());

      $row_datos_paises = mysqli_fetch_assoc($datos_paises);

mysqli_close($enlace);  

?>


                         
  <?php do{?>                                

<option value="<?php echo $row_datos_paises['id_pais']; ?>"><?php echo $row_datos_paises['nombre_pais']; ?></option>

                                <?php } while ($row_datos_paises = mysqli_fetch_assoc($datos_paises)); ?> 


                              
                        </select>                
          </div>




</div>


<div class="form-row mt-1">  <!-- fila 2 -->


          <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Ex-Alumno?:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="ex_madre" name="ex_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['ex_alumno_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_respuesta2']; ?></option>
                              <option disabled></option>

 

<?php

include("../conectar.php");

$queryex = "SELECT * FROM respuestas2 WHERE nombre_respuesta2 != '.' ORDER BY nombre_respuesta2 DESC";

      $datos_ex = mysqli_query($enlace, $queryex) or die(mysqli_error());

      $row_datos_ex = mysqli_fetch_assoc($datos_ex);

mysqli_close($enlace);  

?>


                         
  <?php do{?>                                

<option value="<?php echo $row_datos_ex['id_respuesta2']; ?>"><?php echo $row_datos_ex['nombre_respuesta2']; ?></option>

                                <?php } while ($row_datos_ex = mysqli_fetch_assoc($datos_ex)); ?> 



                              
                        </select>
                 
        </div>



      <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Religión:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="religion_madre" name="religion_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['religion_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['tipo_religion']; ?></option>
                              <option disabled></option>

    

<?php

include("../conectar.php");

$queryreligion = "SELECT * FROM religiones WHERE tipo_religion != '.' ORDER BY tipo_religion ASC";

      $datos_religion = mysqli_query($enlace, $queryreligion) or die(mysqli_error());

      $row_datos_religion = mysqli_fetch_assoc($datos_religion);

mysqli_close($enlace);  

?>


                         
  <?php do{?>                                

<option value="<?php echo $row_datos_religion['id_religion']; ?>"><?php echo $row_datos_religion['tipo_religion']; ?></option>

                                <?php } while ($row_datos_religion = mysqli_fetch_assoc($datos_religion)); ?> 





                              
                        </select>                
          </div>



              <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>E. Civil:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="civil_madre" name="civil_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['civil_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_estado_civil']; ?></option>
                              <option disabled></option>


<?php

include("../conectar.php");

$querycivil = "SELECT * FROM tb_estado_civil WHERE nombre_estado_civil != '.' ORDER BY nombre_estado_civil ASC";

$datos_civil = mysqli_query($enlace, $querycivil) or die(mysqli_error());

$row_datos_civil = mysqli_fetch_assoc($datos_civil);

mysqli_close($enlace);  

?>


    <?php do{?>                                

<option value="<?php echo $row_datos_civil['id_estado_civil']; ?>"><?php echo $row_datos_civil['nombre_estado_civil']; ?></option>

                                <?php } while ($row_datos_civil = mysqli_fetch_assoc($datos_civil)); ?>                            
                              
                        </select>                
              </div>



              <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Profesión:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="profesion_madre" name="profesion_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['id_profesion_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_profesion']; ?></option>
                              <option disabled></option>



<?php



include("../conectar.php");

$queryprofesion = "SELECT * FROM tb_profesiones WHERE nombre_profesion != '.' ORDER BY nombre_profesion ASC";

$datos_profesion = mysqli_query($enlace, $queryprofesion) or die(mysqli_error());

$row_datos_profesion = mysqli_fetch_assoc($datos_profesion);

mysqli_close($enlace);  

?>






                               <?php do{?>                                

<option value="<?php echo $row_datos_profesion['id_profesion']; ?>"><?php echo $row_datos_profesion['nombre_profesion']; ?></option>

                                <?php } while ($row_datos_profesion = mysqli_fetch_assoc($datos_profesion)); ?> 

                               
                              
                        </select>                
              </div>


                <div class="input-group input-group-sm col-md-2 mb-2 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;Tlf:&nbsp;</i></span>  
                </div>
                <input maxlength="40" type="text" class="form-control" id="tlf_madre" name="tlf_madre" placeholder="" value="<?php echo $row_datos_estudiantes_detallado['tlf_contacto_madre']; ?>">
                </div>


                <div class="input-group input-group-sm col-md-2 mb-2 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-at fa-lg"></i></span>  
                </div>
                <input maxlength="40" type="email" class="form-control" id="email_madre" name="email_madre" placeholder="" value="<?php echo $row_datos_estudiantes_detallado['email_madre']; ?>">
                </div>





</div>        <!-- end  fila 2 -->






<div class="form-row mt-1">  <!-- fila 3 -->


<div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Vive en el páis?</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="fuera_pais_madre" name="fuera_pais_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['fuera_pais_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['fuera_pais_madre']; ?></option>
                              <option disabled></option>

                              <option value="Si">Si</option>
                              <option value="No">No</option>
                              
                        </select>
                 
        </div>




          <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Ciudad:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="vive_en_madre" name="vive_en_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['id_ciudad_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_ciudad']; ?></option>
                              <option disabled></option>

 

<?php
include("../conectar.php");

$queryciudades = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

    $datos_ciudades = mysqli_query($enlace, $queryciudades) or die(mysqli_error());

    $row_datos_ciudades = mysqli_fetch_assoc($datos_ciudades);

mysqli_close($enlace);  

?>

<?php do{?>                                

<option value="<?php echo $row_datos_ciudades['id_ciudad']; ?>"><?php echo $row_datos_ciudades['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudades = mysqli_fetch_assoc($datos_ciudades)); ?> 

                              
                        </select>
                 
        </div>



      <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Municipio:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="municipio_madre" name="municipio_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['id_municipio_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_municipio']; ?></option>
                              <option disabled></option>

                               
                               <?php
include("../conectar.php");

$querymunicipio = "SELECT * FROM d_municipio WHERE nombre_municipio != '.' ORDER BY nombre_municipio ASC";

$datos_municipio = mysqli_query($enlace, $querymunicipio) or die(mysqli_error());

$row_datos_municipio = mysqli_fetch_assoc($datos_municipio);

mysqli_close($enlace);  

?>



                               <?php do{?>                                

<option value="<?php echo $row_datos_municipio['id_municipio']; ?>"><?php echo $row_datos_municipio['nombre_municipio']; ?></option>

                                <?php } while ($row_datos_municipio = mysqli_fetch_assoc($datos_municipio)); ?> 
                              
                        </select>                
          </div>



              <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Parroquia:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="paroquia_madre" name="paroquia_madre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detallado['id_parroquia_madre']; ?>" selected><?php echo $row_datos_estudiantes_detallado['nombre_parroquia']; ?></option>
                              <option disabled></option>


 <?php
include("../conectar.php");

    $queryparroquias = "SELECT * FROM d_parroquia WHERE nombre_parroquia != '.' ORDER BY nombre_parroquia ASC";

    $datos_parroquias = mysqli_query($enlace, $queryparroquias) or die(mysqli_error());

    $row_datos_parroquias = mysqli_fetch_assoc($datos_parroquias);

mysqli_close($enlace);  

?>


  <?php do{?>                                

<option value="<?php echo $row_datos_parroquias['id_parroquia']; ?>"><?php echo $row_datos_parroquias['nombre_parroquia']; ?></option>

                                <?php } while ($row_datos_parroquias = mysqli_fetch_assoc($datos_parroquias)); ?> 

                               
                              
                        </select>                
              </div>



                <div class="input-group input-group-sm col-md-4 mb-2 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">&nbsp;<i>Calle -Sector -Urbanización:</i></span>  
                </div>
<input maxlength="89" type="text" class="form-control" id="dirección_madre" name="dirección_madre" placeholder="" value="<?php echo $row_datos_estudiantes_detallado['datos_vivienda_madre']; ?>">
                </div>





</div>        <!-- end  fila 3 -->
















<?php


$id_del_estudiante = $row_datos_estudiantes['id_estud'];


include("../conectar.php");


$query_detalladop = "SELECT * FROM reg_padre, respuestas, d_paises, religiones, tb_estado_civil, d_ciudades, d_municipio, d_parroquia, tb_profesiones, respuestas2

    
         WHERE   reg_padre.id_estud = '$id_del_estudiante'
         and respuestas.id_respuesta = reg_padre.id_padre_vive
         and d_paises.id_pais = reg_padre.nac_padre

         and religiones.id_religion = reg_padre.religion_padre
         and tb_estado_civil.id_estado_civil = reg_padre.civil_padre
         and d_ciudades.id_ciudad = reg_padre.id_ciudad_padre
         and d_municipio.id_municipio = reg_padre.id_municipio_padre

          and d_parroquia.id_parroquia = reg_padre.id_parroquia_padre
         and tb_profesiones.id_profesion = reg_padre.id_profesion_padre
         and respuestas2.id_respuesta2 = reg_padre.ex_alumno_padre

   
         ORDER BY id_padre limit 1 ";

$datos_estudiantes_detalladop = mysqli_query($enlace, $query_detalladop) or die(mysqli_error());

$row_datos_estudiantes_detalladop = mysqli_fetch_array($datos_estudiantes_detalladop); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estudiantes_detalladop = mysqli_num_rows($datos_estudiantes_detalladop); 




mysqli_close($enlace);


?>









<div class="row mt-3">
  <span class="" style="font-size: 18px; color:#186FDF;"> <b>Datos del Padre: </b></span>
</div>



<div class="form-row mt-1">


    <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Vive?:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="vive_padre" name="vive_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['id_padre_vive']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_respuesta']; ?></option>
                              <option disabled></option>

                


<?php

include("../conectar.php");

$queryvive = "SELECT * FROM respuestas WHERE nombre_respuesta != '.' ORDER BY nombre_respuesta DESC";

      $datos_vive = mysqli_query($enlace, $queryvive) or die(mysqli_error());

      $row_datos_vive = mysqli_fetch_assoc($datos_vive);

mysqli_close($enlace);  

?>


                         
  <?php do{?>                                

<option value="<?php echo $row_datos_vive['id_respuesta']; ?>"><?php echo $row_datos_vive['nombre_respuesta']; ?></option>

                                <?php } while ($row_datos_vive = mysqli_fetch_assoc($datos_vive)); ?> 



                              
                        </select>
                 
   </div>







      <div class="input-group input-group-sm col-md-3 mb-2 ">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;Nombres:&nbsp;</i></span>  
      </div>
      <input maxlength="39" type="text" class="form-control" id="nombres_padre" name="nombres_padre" placeholder="" value="<?php echo $row_datos_estudiantes_detalladop['nombres_padre']; ?>"
      >
      </div>


       <div class="input-group input-group-sm col-md-3 mb-2 ">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;Apellidos:&nbsp;</i></span>  
      </div>
      <input maxlength="39" type="text" class="form-control" id="apellidos_padre" name="apellidos_padre" placeholder="" value="<?php echo $row_datos_estudiantes_detalladop['apellidos_padre']; ?>"
      >
      </div>


       <div class="input-group input-group-sm col-md-2 mb-2 ">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;N° Doc. de Id:&nbsp;</i></span>  
      </div>
      <input maxlength="15" type="text" class="form-control" id="cedula_padre" name="cedula_padre" placeholder="" value="<?php echo $row_datos_estudiantes_detalladop['ci_padre']; ?>"
      >
      </div>



          <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Nacionalidad:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="nac_padre" name="nac_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['nac_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_pais']; ?></option>
                              <option disabled></option>

               
<?php

include("../conectar.php");

$querypaises = "SELECT * FROM d_paises WHERE nombre_pais != '.' ORDER BY nombre_pais ASC";

      $datos_paises = mysqli_query($enlace, $querypaises) or die(mysqli_error());

      $row_datos_paises = mysqli_fetch_assoc($datos_paises);

mysqli_close($enlace);  

?>



  <?php do{?>                                

<option value="<?php echo $row_datos_paises['id_pais']; ?>"><?php echo $row_datos_paises['nombre_pais']; ?></option>

                                <?php } while ($row_datos_paises = mysqli_fetch_assoc($datos_paises)); ?> 


                              
                        </select>                
          </div>

</div>




<div class="form-row mt-1">   <!--  fila 2 -->


          <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Ex-Alumno?:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="ex_padre" name="ex_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['ex_alumno_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_respuesta2']; ?></option>
                              <option disabled></option>

                    

<?php

include("../conectar.php");

$queryex = "SELECT * FROM respuestas2 WHERE nombre_respuesta2 != '.' ORDER BY nombre_respuesta2 DESC";

      $datos_ex = mysqli_query($enlace, $queryex) or die(mysqli_error());

      $row_datos_ex = mysqli_fetch_assoc($datos_ex);

mysqli_close($enlace);  

?>


                         
  <?php do{?>                                

<option value="<?php echo $row_datos_ex['id_respuesta2']; ?>"><?php echo $row_datos_ex['nombre_respuesta2']; ?></option>

                                <?php } while ($row_datos_ex = mysqli_fetch_assoc($datos_ex)); ?> 


                              
                        </select>
                 
        </div>



      <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Religión:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="religion_padre" name="religion_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['religion_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['tipo_religion']; ?></option>
                              <option disabled></option>


<?php

include("../conectar.php");

$queryreligion = "SELECT * FROM religiones WHERE tipo_religion != '.' ORDER BY tipo_religion ASC";

      $datos_religion = mysqli_query($enlace, $queryreligion) or die(mysqli_error());

      $row_datos_religion = mysqli_fetch_assoc($datos_religion);

mysqli_close($enlace);  

?>


                         
  <?php do{?>                                

<option value="<?php echo $row_datos_religion['id_religion']; ?>"><?php echo $row_datos_religion['tipo_religion']; ?></option>

                                <?php } while ($row_datos_religion = mysqli_fetch_assoc($datos_religion)); ?> 
                               
                              
                        </select>                
          </div>



              <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>E. Civil:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="civil_padre" name="civil_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['civil_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_estado_civil']; ?></option>
                              <option disabled></option>

<?php

include("../conectar.php");

$querycivil = "SELECT * FROM tb_estado_civil WHERE nombre_estado_civil != '.' ORDER BY nombre_estado_civil ASC";

$datos_civil = mysqli_query($enlace, $querycivil) or die(mysqli_error());

$row_datos_civil = mysqli_fetch_assoc($datos_civil);

mysqli_close($enlace);  

?>


<?php do{?>                                

<option value="<?php echo $row_datos_civil['id_estado_civil']; ?>"><?php echo $row_datos_civil['nombre_estado_civil']; ?></option>

                                <?php } while ($row_datos_civil = mysqli_fetch_assoc($datos_civil)); ?> 


                              
                        </select>                
              </div>



              <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Profesión:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="profesion_padre" name="profesion_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['id_profesion_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_profesion']; ?></option>
                              <option disabled></option>




<?php



include("../conectar.php");

$queryprofesion = "SELECT * FROM tb_profesiones WHERE nombre_profesion != '.' ORDER BY nombre_profesion ASC";

$datos_profesion = mysqli_query($enlace, $queryprofesion) or die(mysqli_error());

$row_datos_profesion = mysqli_fetch_assoc($datos_profesion);

mysqli_close($enlace);  

?>




                               <?php do{?>                                

<option value="<?php echo $row_datos_profesion['id_profesion']; ?>"><?php echo $row_datos_profesion['nombre_profesion']; ?></option>

                                <?php } while ($row_datos_profesion = mysqli_fetch_assoc($datos_profesion)); ?> 
                               
                              
                        </select>                
              </div>


                <div class="input-group input-group-sm col-md-2 mb-2 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;Tlf:&nbsp;</i></span>  
                </div>
                <input maxlength="40" type="text" class="form-control" id="tlf_padre" name="tlf_padre" placeholder="" value="<?php echo $row_datos_estudiantes_detalladop['tlf_contacto_padre']; ?>">
                </div>


                <div class="input-group input-group-sm col-md-2 mb-2 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-at fa-lg"></i></span>  
                </div>
                <input maxlength="40" type="email" class="form-control" id="email_padre" name="email_padre" placeholder="" value="<?php echo $row_datos_estudiantes_detalladop['email_padre']; ?>">
                </div>

</div>    <!-- end  fila 2 -->







<div class="form-row mt-1">  <!-- fila 3 -->



<div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Vive en el páis?</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="fuera_pais_padre" name="fuera_pais_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['fuera_pais_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['fuera_pais_padre']; ?></option>
                              <option disabled></option>

                              <option value="Si">Si</option>
                              <option value="No">No</option>
                              
                        </select>
                 
        </div>



          <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Ciudad:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="vive_en_padre" name="vive_en_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['id_ciudad_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_ciudad']; ?></option>
                              <option disabled></option>

                             
<?php
include("../conectar.php");

$queryciudades = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ASC";

    $datos_ciudades = mysqli_query($enlace, $queryciudades) or die(mysqli_error());

    $row_datos_ciudades = mysqli_fetch_assoc($datos_ciudades);

mysqli_close($enlace);  

?>

<?php do{?>                                

<option value="<?php echo $row_datos_ciudades['id_ciudad']; ?>"><?php echo $row_datos_ciudades['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudades = mysqli_fetch_assoc($datos_ciudades)); ?> 


                              
                        </select>
                 
        </div>



      <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Municipio:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="municipio_padre" name="municipio_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['id_municipio_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_municipio']; ?></option>
                              <option disabled></option>


<?php
include("../conectar.php");

$querymunicipio = "SELECT * FROM d_municipio WHERE nombre_municipio != '.' ORDER BY nombre_municipio ASC";

$datos_municipio = mysqli_query($enlace, $querymunicipio) or die(mysqli_error());

$row_datos_municipio = mysqli_fetch_assoc($datos_municipio);

mysqli_close($enlace);  

?>



                               <?php do{?>                                

<option value="<?php echo $row_datos_municipio['id_municipio']; ?>"><?php echo $row_datos_municipio['nombre_municipio']; ?></option>

                                <?php } while ($row_datos_municipio = mysqli_fetch_assoc($datos_municipio)); ?> 


                               
                              
                        </select>                
          </div>



              <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Parroquia:</i></span>  
                    </div>                 
                            <select class="form-control importantex" id="paroquia_padre" name="paroquia_padre" required>
                              
<option value="<?php echo $row_datos_estudiantes_detalladop['id_parroquia_padre']; ?>" selected><?php echo $row_datos_estudiantes_detalladop['nombre_parroquia']; ?></option>
                              <option disabled></option>


 <?php
include("../conectar.php");

    $queryparroquias = "SELECT * FROM d_parroquia WHERE nombre_parroquia != '.' ORDER BY nombre_parroquia ASC";

    $datos_parroquias = mysqli_query($enlace, $queryparroquias) or die(mysqli_error());

    $row_datos_parroquias = mysqli_fetch_assoc($datos_parroquias);

mysqli_close($enlace);  

?>


  <?php do{?>                                

<option value="<?php echo $row_datos_parroquias['id_parroquia']; ?>"><?php echo $row_datos_parroquias['nombre_parroquia']; ?></option>

                                <?php } while ($row_datos_parroquias = mysqli_fetch_assoc($datos_parroquias)); ?> 
                               
                              
                        </select>                
              </div>



                <div class="input-group input-group-sm col-md-4 mb-2 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">&nbsp;<i>Calle -Sector -Urbanización:</i></span>  
                </div>
<input maxlength="89" type="text" class="form-control" id="dirección_padre" name="dirección_padre" placeholder="" value="<?php echo $row_datos_estudiantes_detalladop['datos_vivienda_padre']; ?>">
                </div>





</div>        <!-- end  fila 3 -->






<div class="form-row mt-3 mb-3">
<div class="col-md-12">


  <input type="hidden" id="id_del_estudiante"     name="id_del_estudiante"     value="<?php echo $row_datos_estudiantes['id_estud'];?>">

  <input type="hidden" id="id_del_reprezz"     name="id_del_reprezz"     value="<?php echo $row_datos_estudiantez['id_repre'];?>">

  <input type="hidden" id="id_del_registro_madre" name="id_del_registro_madre" value="<?php echo $row_datos_estudiantes_detallado['id_madre'];?>">
  <input type="hidden" id="id_del_registro_padre" name="id_del_registro_padre" value="<?php echo $row_datos_estudiantes_detalladop['id_padre']; ?>">


<button type="submit" name="almacenar_todo" class="btn btn-secondary btn-block">

<i class="far fa-hand-point-right"></i> &nbsp Actualizar los datos de la Madre y el Padre del Estudiante: &nbsp&nbsp  <b><?php echo $row_datos_estudiantes['apellidos_estu'];?>,  <?php echo $row_datos_estudiantes['nombre_estu'];?>.</b></button>

</div>
</div>



</form>






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




  <div class="form-row">  <!-- row cero-->
                  <div class="col-md-12 text-left mt-4 ">
                  <h3 class="text-primary">Nuevos Datos Para Procesar La Pre-Inscripción:</h3>
                  </div>
  </div>  



<form method="post">


<hr class="mt-1 mb-2" style="background-color: blue; height: 1px; border: 0;">





<div class="form-row">

<div class="input-group col-md-4 mb-2">
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






  


  <div class="input-group col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Grado/nivel o año:</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_grado_actual" name="mod_new_grado_actual" required>
                              
                          <option selected disabled></option>
                              

                               <?php do{?>                                

<option value="<?php echo $row_datos_gradosA1['id_grado']; ?>"><?php echo $row_datos_gradosA1['nombre_grados']; ?></option>

                                <?php } while ($row_datos_gradosA1 = mysqli_fetch_assoc($datos_gradosA1)); ?> 
                              
                        </select>
                 
  </div>


  <div class="input-group col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Repite?:</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_repite" name="mod_new_repite">
                              
                           <option selected value="2">No</option>
                              <option value="1">Si</option>
                        </select>
                 
  </div>









</div>



<div class="form-row">

 

  <div class="input-group col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Edad:</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_edad" name="mod_new_edad" required >
                              
                          <option selected disabled></option>
                              

                               <?php do{?>                                

<option value="<?php echo $row_datos_edad1['id_edad']; ?>"><?php echo $row_datos_edad1['nombre_edad']; ?></option>

                                <?php } while ($row_datos_edad1 = mysqli_fetch_assoc($datos_edad1)); ?> 
                              
                        </select>
                 
  </div>



  



  <div class="input-group  col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>T. Camisa:</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_talla_cam" name="mod_new_talla_cam" required>
                              
                          <option selected disabled></option>
                              

                               <?php do{?>                                 

<option value="<?php echo $row_datos_camisas1['id_camisa']; ?>"><?php echo $row_datos_camisas1['talla_camisa']; ?></option>

                                <?php } while ($row_datos_camisas1 = mysqli_fetch_assoc($datos_camisas1)); ?> 
                              
                        </select>
                 
  </div>



   <div class="input-group  col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>T. Pantalón:</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_talla_pant" name="mod_new_talla_pant" required>
                              
                          <option selected disabled></option>
                              

                               <?php do{?>                                

<option value="<?php echo $row_datos_pantalon1['id_pantalon']; ?>"><?php echo $row_datos_pantalon1['nombre_pantalon']; ?></option>

                                <?php } while ($row_datos_pantalon1 = mysqli_fetch_assoc($datos_pantalon1)); ?> 
                              
                        </select>
                 
  </div> 






</div>











<div class="form-row">




  

  <div class="input-group  col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>T. Zapatos:</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_talla_zap" name="mod_new_talla_zap" required>
                              
                          <option selected disabled></option>
                              

                               <?php do{?>                                

<option value="<?php echo $row_datos_zapatos1['id_zapato']; ?>"><?php echo $row_datos_zapatos1['talla_zapato']; ?></option>

                                <?php } while ($row_datos_zapatos1 = mysqli_fetch_assoc($datos_zapatos1)); ?> 
                              
                        </select>
                 
  </div>



  <div class="input-group  col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">&nbsp;<i>Peso: (kilos)</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_peso_act" name="mod_new_peso_act" required>
                              
                          <option selected disabled></option>
                              

                               <?php do{?>                                

<option value="<?php echo $row_datos_peso1['id_peso']; ?>"><?php echo $row_datos_peso1['nombre_peso']; ?></option>

                                <?php } while ($row_datos_peso1 = mysqli_fetch_assoc($datos_peso1)); ?> 
                              
                        </select>
                 
  </div>




  <div class="input-group  col-md-4 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">&nbsp;<i>Estatura: (cms)</i></span>  
                    </div>
                 
                            <select class="form-control importantex" id="mod_new_estatura_act" name="mod_new_estatura_act" required>
                              
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
    <button type="submit" name="editar_new_selecc" class="btn btn-primary btn-block" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
    Procesar Nueva Pre-Inscripción &nbsp;&nbsp;<i class="fas fa-upload fa-lg"></i></button></div> </form> 

</div>

<hr class="mt-2 mb-2" style="background-color: blue; height: 1px; border: 0;">








</div>



<hr class="mt-2 mb-2" style="background-color: blue; height: 1px; border: 0;">






</div> <!-- cierre principal col md 12 -->
</div> <!-- cierre form row -->


   <script type="text/javascript">
            $(document).ready(function(){
                 $("form").submit(function() {
                        $(this).submit(function() {
                            return false;
                        });
                        return true;
                    }); 
            }); 
            </script>