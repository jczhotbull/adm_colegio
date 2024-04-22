

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
        <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;Doc. de Id:&nbsp;</i></span>  
      </div>
      <input maxlength="15" type="text" class="form-control" id="cedula_madre" name="cedula_madre" placeholder=""  value="<?php echo $row_datos_estudiantes_detallado['ci_madre']; ?>"
      >
      </div>



      <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Nac.:</i></span>  
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
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>  
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
                              <option value="--">--</option>
                              
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
                  <span class="input-group-text" id="basic-addon1"><i>Calle-Sector-Urb.:</i></span>  
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
        <span class="input-group-text" id="basic-addon1">&nbsp;<i>&nbsp;Doc. de Id:&nbsp;</i></span>  
      </div>
      <input maxlength="15" type="text" class="form-control" id="cedula_padre" name="cedula_padre" placeholder="" value="<?php echo $row_datos_estudiantes_detalladop['ci_padre']; ?>"
      >
      </div>



          <div class="input-group input-group-sm col-md-2 mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i>Nac.:</i></span>  
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
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>  
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
                              <option value="--">--</option>
                              
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
                  <span class="input-group-text" id="basic-addon1"><i>Calle-Sector-Urb.:</i></span>  
                </div>
<input maxlength="89" type="text" class="form-control" id="dirección_padre" name="dirección_padre" placeholder="" value="<?php echo $row_datos_estudiantes_detalladop['datos_vivienda_padre']; ?>">
                </div>





</div>        <!-- end  fila 3 -->