<?php
include("../conectar.php"); 

$query_conteo = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_estudiantes 
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud 
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = '$el_propio_id'
         and  el_activo = '1'         
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.id_estud";

$datos_conteo = mysqli_query($enlace, $query_conteo) or die(mysqli_error());
$total_conteo = mysqli_num_rows($datos_conteo);

$new_conteo =  $total_conteo + 1;
mysqli_close($enlace); 

?>







<div class="form-row ">  <!-- datos del estudiante -->

						  		<div class="col-md-12 mt-2 mb-1">

						  		<b class="text-info">El representado a ser ingresado, pasaría a ser el N° <span style="color:#092C5B; font-size: 22px;"><?php echo $new_conteo;?></span>, del grupo familiar: </b>

						<?php 

				          if ($datosES1_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Estudiante Registrado.\">".$datosES1_success."</i>"; }
				        ?>

				        <?php 

				          if ($datosES1_repre_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Relación realizada.\">".$datosES1_repre_success."</i>"; }
				        ?>



				        <?php 
				          if ($datosES1_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Estudiante no registrado.\">".$datosES1_danger."</i>"; }
				        ?>

				        <?php 
				          if ($datosES1_repre_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Relación no realizada.\">".$datosES1_repre_danger."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->

							    </div>

</div>




<div class="form-row">


<div class="col-md-2">


                  	        <div class="card border-info" style=" height: 266px; padding-bottom: 5px;">

			                  	<div class="col-lg-12 ">

			                  		<div class="form-row  ">  <!--  -->

						  			

			                  		<div class="col-10 col-md-10 mt-1">

										<div class="upload-btn-wrapper">

	<button class="btnX">Cargar <i class="fas fa-search fa-lg"></i></button>
	<input  class="item-img_EA center-block punterodd" type="file"  accept="image/*"  name="file_photo_EA"  id="file_photo_EA"  /> 
										 
</div>

									</div> 

									
									<div class="col-2 col-md-2 mt-2">


									<?php 
							          if ($foto_successA!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto cargada.\">".$foto_successA."</i>"; }
							        ?>

							        <?php 
							          if ($foto_dangerA!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto no cargada.\">".$foto_dangerA."</i>"; }
							        ?>
							            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->						        
									
									</div> 


									


									</div>  <!-- cierre primer row  -->

<div style=" height: 100%; line-height: 200px;">
									<div style=" vertical-align: middle; text-align: center;">



<img  src="../0 Croppie/foto_estu_update_<?php echo $el_propio_id;?>_<?php echo $fotPP;?>.png?nocache=<?php echo time(); ?>"

				 class="fotologuitocol img-responsive img-thumbnail" style=" max-height: 214px; padding-bottom: 5px;"

				  id=""  onerror="this.src='../zz_fotos_p/ZZvacio_mas.jpg';"/> 



	                            

								    </div>
										
  </div>


								</div>  <!-- cierre col 12 que define todo lo que esta adentro -->

                                  </div>  <!-- cierre div del borde -->





<div class="form-row mt-1  ">  <!-- cargar ci estudiante 1  -->
	<div class="col-lg-12 ">
			<div class="card border-info" style=" height: 220px; padding-bottom: 5px;">			                	
					                  	
				<div class="col-lg-12 ">
					<div class="form-row  "> 
					    <div class="col-10 col-md-10 mt-1">
					        <div class="upload-btn-wrapper">
								<button class="btnX">Cargar <i class="fas fa-search fa-lg"></i></button>
			                    <input type="file" class="item-img_B_act1 center-block punterodd" accept="image/*"  name="file_photo_B_act1"   id="file_photo_B_act1"  />
							</div>	
						</div> 

						<div class="col-2 col-md-2 mt-2">

											<?php 
									          if ($ci_success_act1!="")
					{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Documento est_act1 cargado.\">".$ci_success_act1."</i>"; }
									        ?>

									        <?php 
									          if ($ci_danger_act1!="")
					{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Documento est_act1 no cargado.\">".$ci_danger_act1."</i>"; }
									        ?>
									            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->				        
											
						</div> 									
					
					</div>  <!-- cierre primer row  -->

					<div style=" height: 100%; line-height: 150px;">
						<div style=" vertical-align: middle; text-align: center;">

		<img src="../0 Croppie/ci_est_act1<?php echo $fotPP;?>.png?nocache=<?php echo time(); ?>" alt="..." class="img-thumbnail" style=" max-height: 170px; padding-bottom: 5px;"   onerror="this.src='../zz_fotos_p/ZZvacio9.jpg';" > 

						</div>										
		            </div>


				</div>  <!-- cierre col 12 que define todo lo que esta adentro -->

			</div>   <!-- cierre card border  -->
	</div>
</div>   <!-- cierre cargar ci estudiante 1  -->







	
</div> <!--  foto estudiante 1 -->	






<div class="col-md-10">	 

<div class="form-row margencito">


			<div class="input-group input-group-sm col-md-3 mb-2 ">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-user-tag">&nbsp;&nbsp;</i></span>  
			</div>
			<input maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" class="form-control  importantex" id="expediente_est1" name="expediente_est1" placeholder="Expediente..."
			required>
			</div>



			<div class="input-group input-group-sm col-md-3 mb-2 ">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-file-alt">&nbsp;&nbsp;</i></span>  
			</div>
<input maxlength="39" type="text" class="form-control  importantex" id="nombres_est1" name="nombres_est1" placeholder="Nombre(s)..."
			required>
			</div>


			<div class="input-group input-group-sm col-md-3 mb-2 ">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="far fa-file-alt"></i></span>  
			</div>
<input maxlength="39" type="text" class="form-control  importantex" id="apellidos_est1" name="apellidos_est1" placeholder="Apellido(s)..."
			required>
			</div>



			





<div class="input-group input-group-sm col-md-3 mb-2 ">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-venus-mars "></i></span>  
										</div>							   
							      				<select class="form-control importantex" id="genero_est1" name="genero_est1" required>
							  							
							  							<option selected disabled value="">Sexo:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_sexo1['id_sexo']; ?>"><?php echo $row_datos_sexo1['nombre_sexo']; ?></option>

                                <?php } while ($row_datos_sexo1 = mysqli_fetch_assoc($datos_sexo1)); ?> 


													    
												</select>
							   
</div>









</div>
							
	


<div class="form-row">



<div class="input-group input-group-sm col-md-3 mb-2 ">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fa fa-birthday-cake "></i></span>  
									</div>
<input type="date" class="form-control importantex" id="fecha_nac_est1" name="fecha_nac_est1" required>
			</div>





<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-pin "></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="ciudad_est1" name="ciudad_est1" required>
							  							
							  							<option selected disabled value="">Lugar de Nacimiento:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_ciudades1['id_ciudad']; ?>"><?php echo $row_datos_ciudades1['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudades1 = mysqli_fetch_assoc($datos_ciudades1)); ?> 
													    
												</select>
							   
</div>


			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="far fa-map"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="estado_est1" name="estado_est1" required>
							  							
							  							<option selected disabled value="">Entidad Federal:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_estados1['id_estado']; ?>"><?php echo $row_datos_estados1['nombre_estado']; ?></option>

                                <?php } while ($row_datos_estados1 = mysqli_fetch_assoc($datos_estados1)); ?> 
													    
												</select>
							   
			</div>


 <div class="input-group input-group-sm col-md-3 mb-2">

<div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-map-pin">&nbsp;&nbsp;</i></span>  
      </div>

	 <select class="form-control form-control-sm" id="municipio_est1" name="municipio_est1" required >
<option selected disabled value="">Municipio:</option>
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



		


			


</div>  <!-- cierre row -->




<div class="form-row">


		<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-globe"></i></span>  
										</div>
							   
							      	<select class="form-control importantex" id="pais_nac_est1" name="pais_nac_est1" required>
							  							
							  							<option selected disabled value="">Nacionalidad:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_paises1['id_pais']; ?>"><?php echo $row_datos_paises1['nombre_pais']; ?></option>

                                <?php } while ($row_datos_paises1 = mysqli_fetch_assoc($datos_paises1)); ?> 
													    
												</select>
							   
			</div>




	<div class="input-group input-group-sm col-md-3 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="far fa-id-card "></i></span>  
									</div>
	<input maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" class="form-control" id="cedula_est1" name="cedula_est1" placeholder="Cedula ó cedula escolar..." >
			</div>



			<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-columns"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="religion_act1" name="religion_act1" required>
							  							
							  							<option selected disabled value="">Religión:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_religion1['id_religion']; ?>"><?php echo $row_datos_religion1['tipo_religion']; ?></option>

                                <?php } while ($row_datos_religion1 = mysqli_fetch_assoc($datos_religion1)); ?> 
													    
												</select>
							   
			</div>




			

			


			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fab fa-medrt"></i></span>  
										</div>
							   
							      		<select class="form-control importantex" id="padece_act1" name="padece_act1" required>
							  							
							  							<option selected disabled value="">Presenta o padece de:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_padece1['id_medico']; ?>"><?php echo $row_datos_padece1['nombre_medico']; ?></option>

                                <?php } while ($row_datos_padece1 = mysqli_fetch_assoc($datos_padece1)); ?> 
													    
												</select>
							   
			</div>




			<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fas fa-syringe"></i></span>  
										</div>
							   
							      		<select class="form-control importantex" id="sangre_act1" name="sangre_act1" required>
							  							
							  							<option selected disabled value="">Tipo de sangre:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_sangres1['id_sangre']; ?>"><?php echo $row_datos_sangres1['tipo_sangre']; ?></option>

                                <?php } while ($row_datos_sangres1 = mysqli_fetch_assoc($datos_sangres1)); ?> 
													    
												</select>
							   
			</div>





</div> <!-- cierre row -->




<div class="form-row">  <!-- row cero  nuevo añadido-->

 <div class="input-group input-group-sm col-md-2 mb-2">  
<div class="input-group-prepend">
        <span class="input-group-text alert-info" id="basic-addon1">&nbsp;<i class="fas fa-home">&nbsp;&nbsp;</i></span>  
      </div>

   <select class="form-control form-control-sm" id="mod_vive_con_estud" name="mod_vive_con_estud" required >
<option selected disabled value="">Vive con su:</option>
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
        <span class="input-group-text alert-info" id="basic-addon1">&nbsp;<i class="fas fa-walking">&nbsp;&nbsp;</i></span>  
      </div>

   <select class="form-control form-control-sm" id="mod_traslada_estud" name="mod_traslada_estud" required >
<option selected disabled value="">Se traslada en:</option>
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
 required>   
                                        
                 </div>

                 <div class="input-group input-group-sm col-md-4 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><b>A padecido de:</b></span> 
</div>

  <input maxlength="59" type="text" class="form-control form-control-sm " id="mod_padecio_estud" name="mod_padecio_estud"
 required> 
       
        </div>    

        </div>     <!-- aqui termina -->



<div class="form-row">  <!-- row uno  nuevo añadido-->

 <div class="input-group input-group-sm col-md-3 mb-2">   

<div class="input-group-prepend">   
        <span class="input-group-text alert-info" id="basic-addon1">&nbsp;<i class="fas fa-sign-out-alt">&nbsp;&nbsp;</i></span>  
      </div>

   <select class="form-control form-control-sm" id="mod_se_retira_con" name="mod_se_retira_con" required >
<option selected disabled value="">Se retira del colegio con/en:</option>
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
>   
                                      
</div>


<div class="input-group input-group-sm col-md-3 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i>Cuales medicamentos recibe:</i></span>  
                    </div>  
                            <input maxlength="29" type="text" class="form-control form-control-sm " id="mod_medicamentos" name="mod_medicamentos">   
                                      
</div>


      <div class="input-group input-group-sm col-md-3 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-danger" id="basic-addon1"><i class="fas fa-at"></i></span> 
</div>

<input maxlength="59"  type="email" class="form-control form-control-sm " id="mod_email_estu" name="mod_email_estu"
> 
       
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

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>


    <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>BCG:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v2" name="mod_v2">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>


    <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Difteria:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v3" name="mod_v3">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>



      <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Anti-Influenza:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v4" name="mod_v4">

    <option value="No" selected >No</option>
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

    <option value="No" selected >No</option>
    <option value="Si" >Si</option> 
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>TosFerina (DTpa):</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v6" name="mod_v6">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option> 
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>HB:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v7" name="mod_v7">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>                                                                      
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Tétanos:</i></span>  
                        </div>  
     <select class="form-control form-control-sm" id="mod_v8" name="mod_v8">

    <option value="No" selected >No</option>
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

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Rubéola:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v10" name="mod_v10">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Parotiditis (SRP):</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v11" name="mod_v11">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option> 
                                </select>                                                                      
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Covid-19:</i></span>  
                        </div>  
     <select class="form-control form-control-sm" id="mod_v12" name="mod_v12">

    <option value="No" selected >No</option>
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

    <option value="No" selected >No</option>
    <option value="Si" >Si</option> 
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Fiebre Amarilla (FA):</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v14" name="mod_v14">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Sarampión:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v15" name="mod_v15">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>                                                                      
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Otra(s):</i></span>  
                        </div>
<input maxlength="29" type="text" class="form-control form-control-sm" id="v_otra" name="v_otra" >  
                                                                   
    </div>

</div>     <!-- aqui quinto -->



<div class="form-row ">  

<div data-toggle="tooltip" data-placement="right" title="Borrar foto y/o documento cargado.">

<button type="button" class="ml-1 mt-1 btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#borrar_fotos_AA">
 <i class="fas fa-trash-alt fa-lg"></i>
</button>

</div>

</div>

<!-- 

<div class="form-row">

	<div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
			<span class="input-group-text" id="basic-addon1"><i><b>Cuenta con seguro?</b></i></span>  
										</div>
							   
							<select class="form-control importantex" id="tiene_seguro1" name="tiene_seguro1">
							  							
							  				   <option selected value="2">No</option>
							  							<option value="1">Si</option>
												</select>
							   
	</div>



	<div class="input-group input-group-sm col-md-5 mb-2">
										<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i>Indicar Aseguradora:</i></span>  
										</div>
							   
						<select class="form-control importantex" id="tipo_seguro1" name="tipo_seguro1">
							  													  				  


                               <option selected value="1">Ninguna</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_aseguradoras1['id_aseguradora']; ?>"><?php echo $row_datos_aseguradoras1['tipo_aseguradora']; ?></option>

                                <?php } while ($row_datos_aseguradoras1 = mysqli_fetch_assoc($datos_aseguradoras1)); ?> 
													    
												</select>
							   
			</div>


</div>

-->




</div>  <!-- cierre md 9  -->





</div>  <!-- cierre col md 9 y md3 -->




<div class="mt-3 border border-success rounded p-2" style="background-color:#E0FAE0">
<div class="form-row ">  <!-- procedencia -->

								<div class="col-md-12 mt-1">

						  		<b class="text-success"> Sobre el representado: </b>	<span class="text-muted">(Llenar solo si viene de cursar en otro plantel)</span> 							    

						<?php 


				          if ($procede_success1!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registrado.\">".$procede_success1."</i>"; }
				        ?>

				        <?php 
				          if ($procede_danger1!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"No registrados.\">".$procede_danger1."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->


							    </div>

</div>



<div class="form-row margencito">  <!-- viene de otro plantel -->

	<div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i><b>Proviene de otro plantel?</b></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="viene_otro1" name="viene_otro1">
							  							
							  				   <option selected value="2">No</option>
							  							<option value="1">Si</option>
												</select>
							   
	</div>


			<div class="input-group input-group-sm col-md-5 mb-2">
			<div class="input-group-prepend">
				<span class="input-group-text alert-success" id="basic-addon1">&nbsp;<i class="fas fa-file-alt">&nbsp;&nbsp;</i></span>  
			</div>
			<input type="text" class="form-control" id="plantel_pro1" name="plantel_pro1"
			placeholder="Nombre del plantel..." >
			</div>



			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-map-pin "></i></span>  
										</div>
							   
							      				<select class="form-control" id="esc_ciudad_est1" name="esc_ciudad_est1">
							  							
							  							<option selected disabled value="">Lugar:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_ciudadesP1['id_ciudad']; ?>"><?php echo $row_datos_ciudadesP1['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudadesP1 = mysqli_fetch_assoc($datos_ciudadesP1)); ?> 
													    
												</select>
							   
			</div>


</div>



<div class="form-row">
			
			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i>Grado o año cursado:</i></span>  
										</div>
							   
					<select class="form-control" id="grado_curso_otro1" name="grado_curso_otro1">
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_gradosP1['id_grado']; ?>"><?php echo $row_datos_gradosP1['nombre_grados']; ?></option>

                                <?php } while ($row_datos_gradosP1 = mysqli_fetch_assoc($datos_gradosP1)); ?> 
													    
												</select>
							   
			</div>



			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i><b>Ciclo cursado:</b></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="cursaba_est1" name="cursaba_est1">
							  							
							  				  
<option value="<?php echo $row_datos_periodo_viejo['id_periodo_es']; ?>" selected>
  <?php echo $row_datos_periodo_viejo['periodo_escolar']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
							  							

                               <?php do{?>                                    

<option value="<?php echo $row_datos_periodo_old1['id_periodo_es']; ?>"><?php echo $row_datos_periodo_old1['periodo_escolar']; ?></option>

                                <?php } while ($row_datos_periodo_old1 = mysqli_fetch_assoc($datos_periodo_old1)); ?> 
													    
												</select>
							   
			</div>


			



			<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i>Estaba repitiendo el año?</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="old_repite_otro1" name="old_repite_otro1">
							  							
							  				   <option selected value="2">No</option>
							  							<option value="1">Si</option>
												</select>
							   
			</div>


						 <div class="input-group input-group-sm col-md-4 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-danger" id="basic-addon1"><i>Áreas ó Asignat. Pendientes:</i></span>  
                  </div>
     
<input type="text" class="form-control form-control-sm" id="mod_areas_pendientes" name="mod_areas_pendientes"  >
        </div>


</div>
</div> <!-- cierre borde -->




<div class="form-row ">  <!-- actuacion actual -->

								<div class="col-md-12 mt-3 ml-1 mb-2">

						  		<b class="text-info">  Actuación actual del alumno: </b>	 						    

						<?php 

				          if ($actua_success1!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Actuación registrada.\">".$actua_success1."</i>"; }
				        ?>

				        <?php 
				          if ($actua_danger1!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Actuación no registrada.\">".$actua_danger1."</i>"; }
				        ?>


				         <?php 
				          if ($act_hist_ES1_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Historial añadido.\">".$act_hist_ES1_success."</i>"; }
				        ?>

				        <?php 
				          if ($act_hist_ES1_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Historial no añadido.\">".$act_hist_ES1_danger."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->

							    </div>

</div>


<div class="form-row">


<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-danger" id="basic-addon1">&nbsp;<i>Año escolar:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="cursa_est1" name="cursa_est1">



<option selected disabled></option>

                                <optgroup label="Seleccionar...">
                                <option disabled></option>
							  							

                               <?php do{?>                                    

<option value="<?php echo $row_datos_periodo_act1['id_periodo_es']; ?>"><?php echo $row_datos_periodo_act1['periodo_escolar']; ?></option>

                                <?php } while ($row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1)); ?> 
													    
												</select>
							   
</div>






	


	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>Grado o año:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="grado_act1" name="grado_act1" required>
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_gradosA1['id_grado']; ?>"><?php echo $row_datos_gradosA1['nombre_grados']; ?></option>

                                <?php } while ($row_datos_gradosA1 = mysqli_fetch_assoc($datos_gradosA1)); ?> 
													    
												</select>
							   
	</div>


	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>Repite?:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="repite_actual1" name="repite_actual1">
							  							
							  				   <option selected value="2">No</option>
							  							<option value="1">Si</option>
												</select>
							   
	</div>






	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>Edad:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="edad_act1" name="edad_act1" <?php echo $requerido1; ?>>
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_edad1['id_edad']; ?>"><?php echo $row_datos_edad1['nombre_edad']; ?></option>

                                <?php } while ($row_datos_edad1 = mysqli_fetch_assoc($datos_edad1)); ?> 
													    
												</select>
							   
	</div>


</div>











<div class="form-row">

	<div class="input-group input-group-sm col-md-5 mb-2">
			<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1"><i>Fecha de inscripción:</i></span>  
			</div>
			<input type="date" class="form-control importantex" id="fecha_ins_act1" name="fecha_ins_act1" required>
	</div>  




	<div class="input-group input-group-sm col-md-7 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>Asignar una sección momentanea:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="seccion_act1" name="seccion_act1" required>
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_seccion1['id_seccion']; ?>"><?php echo $row_datos_seccion1['nombre_seccion']; ?></option>

                                <?php } while ($row_datos_seccion1 = mysqli_fetch_assoc($datos_seccion1)); ?> 
													    
												</select>
							   
	</div>




</div>













<div class="form-row">

	<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>T. Camisa:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="talla_cam1" name="talla_cam1" required>
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                 

<option value="<?php echo $row_datos_camisas1['id_camisa']; ?>"><?php echo $row_datos_camisas1['talla_camisa']; ?></option>

                                <?php } while ($row_datos_camisas1 = mysqli_fetch_assoc($datos_camisas1)); ?> 
													    
												</select>
							   
	</div>



	<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>T. Pantalón:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="talla_pant1" name="talla_pant1" required>
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_pantalon1['id_pantalon']; ?>"><?php echo $row_datos_pantalon1['nombre_pantalon']; ?></option>

                                <?php } while ($row_datos_pantalon1 = mysqli_fetch_assoc($datos_pantalon1)); ?> 
													    
												</select>
							   
	</div>



	<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>T. Zapatos:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="talla_zap1" name="talla_zap1" required>
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_zapatos1['id_zapato']; ?>"><?php echo $row_datos_zapatos1['talla_zapato']; ?></option>

                                <?php } while ($row_datos_zapatos1 = mysqli_fetch_assoc($datos_zapatos1)); ?> 
													    
												</select>
							   
	</div>



	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">&nbsp;<i>Peso: (kilogramos)</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="peso_act1" name="peso_act1" required>
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_peso1['id_peso']; ?>"><?php echo $row_datos_peso1['nombre_peso']; ?></option>

                                <?php } while ($row_datos_peso1 = mysqli_fetch_assoc($datos_peso1)); ?> 
													    
												</select>
							   
	</div>




	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">&nbsp;<i>Estatura: (centímetros)</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="estatura_act1" name="estatura_act1" required>
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_altura1['id_altura']; ?>"><?php echo $row_datos_altura1['nombre_altura']; ?></option>

                                <?php } while ($row_datos_altura1 = mysqli_fetch_assoc($datos_altura1)); ?> 
													    
												</select>
							   
	</div>







</div>




<div class="form-row ">  <!-- actuacion actual -->

								<div class="col-md-12 mt-3 ml-1 mb-2">

						  		<b class="text-info">  Observaciones: </b>	 						    

						<?php 


				          if ($obs_success1!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Observaciones registrada.\">".$obs_success1."</i>"; }
				        ?>

				        <?php 
				          if ($obs_danger1!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Observaciones no registrada.\">".$obs_danger1."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->


							    </div>

</div>


<div class="form-row ">

				        		<div class="col-md-12 mb-3">

				        		<textarea maxlength="750" class="form-control" id="obs_text1" name="obs_text1" rows="3"></textarea>

				        		 <span id="chars1">750</span> caracteres restantes.

				        	    </div>

</div> <!-- cierre row  de obs -->


<script type="text/javascript">
	
var maxLength1 = 750;
$('#obs_text1').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength1-length;
  $('#chars1').text(length);
});

</script>








