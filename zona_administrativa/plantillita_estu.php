<div class="form-row">
<div class="col-md-12">





<div class="form-row">  <!-- row cero-->
                  <div class="col-md-12 text-left mt-3 mb-2">
                  <b class="text-info"> Datos del representado: </b>
                  </div>
        </div>  



<div class="form-row">







 <input type="hidden" id="id_estu_GHJ"  name="id_estu_GHJ"
    value="<?php echo $row_datos_estudiantes['id_estud']; ?>">  <!-- para saber donde guardar el cambio -->




  <div class="col-md-12">




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

<input maxlength="9" onkeydown="javascript:stripspaces(this)" type="text" class="form-control form-control-sm " id="mod_ci_estud" name="mod_ci_estud"
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



         <div class="input-group input-group-sm col-md-2 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i class="fa fa-birthday-cake"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" id="mod_nacimiento_estud" name="mod_nacimiento_estud" value="<?php echo $row_datos_estudiantes['nacimiento_estu']; ?>" >
        </div>




         <div class="input-group input-group-sm col-md-4 mb-2">
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

                  $querymod2 = "SELECT * FROM grados WHERE nombre_grados != '.' ORDER BY nombre_grados ASC";

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








<hr class="mt-4 mb-2" style="background-color: green; height: 1px; border: 0;">


<div class="form-row">  <!-- row cero-->


  <div class="input-group input-group-sm col-md-12">

                  
    <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i>Actualmente cursando:</i></span>
    </div> 



 <input type="hidden" id="id_reg_estu_actual_hoy"  name="id_reg_estu_actual_hoy"
    value="<?php echo $r_d_reg_estu_actual_HOY['id_reg_estu_actual']; ?>">  <!-- para saber donde guardar el cambio -->




     <select class="form-control form-control-sm" id="mod_grado_actual" name="mod_grado_actual">

<option value="<?php echo $r_d_reg_estu_actual_HOY['grado_actual']; ?>" selected><?php echo $r_d_reg_estu_actual_HOY['nombre_grados']; ?></option>
    <option disabled></option>

                                    <optgroup label="Cambiar a...">
                                    <option disabled></option>


                                    <?php 

                              include("../conectar.php");

                  $querymod2 = "SELECT * FROM grados WHERE nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'
  and nombre_grados != 'Pre Escolar 3er Nivel' ORDER BY nombre_grados ASC";

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


     <select class="form-control form-control-sm" id="mod_seccion_actual" name="mod_seccion_actual">

<option value="<?php echo $r_d_reg_estu_actual_HOY['id_seccion']; ?>" selected><?php echo $r_d_reg_estu_actual_HOY['nombre_seccion']; ?></option>
    <option disabled></option>

                                    <optgroup label="Cambiar a...">
                                    <option disabled></option>


                                    <?php 

                              include("../conectar.php");

                  $querymod2 = "SELECT * FROM secciones WHERE nombre_seccion != '.' and nombre_seccion != '1er a 3er Nivel'  and nombre_seccion != 'A y B'
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
                    <span class="input-group-text alert-success" id="basic-addon1"><i>ciclo:</i></span>
    </div> 


     <select class="form-control form-control-sm" id="mod_ciclo_actual" name="mod_ciclo_actual">

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

</div>



<hr class="mt-2 mb-2" style="background-color: green; height: 1px; border: 0;">















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
















</div>
</div>