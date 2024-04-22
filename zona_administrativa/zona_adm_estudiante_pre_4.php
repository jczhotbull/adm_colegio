

<div class="form-row ">  <!-- datos del estudiante -->

						  		<div class="col-md-12 mt-2 mb-1">

						  		<b class="text-info">Datos del representado N°4: </b>

						<?php 

				          if ($datosES4_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Estudiante Registrado.\">".$datosES4_success."</i>"; }
				        ?>

				        <?php 

				          if ($datosES4_repre_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Relación realizada.\">".$datosES4_repre_success."</i>"; }
				        ?>



				        <?php 
				          if ($datosES4_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Estudiante no registrado.\">".$datosES4_danger."</i>"; }
				        ?>

				        <?php 
				          if ($datosES4_repre_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Relación no realizada.\">".$datosES4_repre_danger."</i>"; }
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
	<input  class="item-img_ED center-block punterodd" type="file"  accept="image/*"  name="file_photo_ED"  id="file_photo_ED"  /> 
										 
</div>

									</div> 

									
									<div class="col-2 col-md-2 mt-2">


									<?php 
							          if ($foto_successD!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto cargada.\">".$foto_successD."</i>"; }
							        ?>

							        <?php 
							          if ($foto_dangerD!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto no cargada.\">".$foto_dangerD."</i>"; }
							        ?>
							            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->						        
									
									</div> 


									


									</div>  <!-- cierre primer row  -->

<div style=" height: 100%; line-height: 200px;">
									<div style=" vertical-align: middle; text-align: center;">

	                            <img  src="../0 Croppie/foto_estu4<?php echo $fotPP;?>.png?nocache=<?php echo time(); ?>"

				 class="fotologuitocol img-responsive img-thumbnail" style=" max-height: 214px; padding-bottom: 5px;"

				  id=""  onerror="this.src='../zz_fotos_p/ZZvacioD.jpg';"/>     

								    </div>
										
  </div>


								</div>  <!-- cierre col 12 que define todo lo que esta adentro -->

                                  </div>  <!-- cierre div del borde -->


	
</div> <!--  foto estudiante 1 -->	






<div class="col-md-10">	 

<div class="form-row margencito">


			<div class="input-group input-group-sm col-md-3 mb-2 ">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-user-tag">&nbsp;&nbsp;</i></span>  
			</div>
			<input maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" class="form-control  importantex" id="expediente_est4" name="expediente_est4" placeholder="Expediente..."
			<?php echo $requerido4; ?> >
			</div>



			<div class="input-group input-group-sm col-md-3 mb-2 ">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-file-alt">&nbsp;&nbsp;</i></span>  
			</div>
			<input maxlength="39" type="text" class="form-control  importantex" id="nombres_est4" name="nombres_est4" placeholder="Nombre(s)..."
			<?php echo $requerido4; ?> >
			</div>


			<div class="input-group input-group-sm col-md-3 mb-2 ">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="far fa-file-alt"></i></span>  
			</div>
			<input maxlength="39" type="text" class="form-control  importantex" id="apellidos_est4" name="apellidos_est4" placeholder="Apellido(s)..."
			<?php echo $requerido4; ?> >
			</div>





<div class="input-group input-group-sm col-md-3 mb-2 ">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-venus-mars "></i></span>  
										</div>							   
							      				<select class="form-control importantex" id="genero_est4" name="genero_est4" <?php echo $requerido4; ?> >
							  							
							  							<option selected disabled value="">Sexo:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_sexo4['id_sexo']; ?>"><?php echo $row_datos_sexo4['nombre_sexo']; ?></option>

                                <?php } while ($row_datos_sexo4 = mysqli_fetch_assoc($datos_sexo4)); ?> 


													    
												</select>
							   
</div>









</div>
							
	


<div class="form-row">


	<div class="input-group input-group-sm col-md-3 mb-2 ">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fa fa-birthday-cake "></i></span>  
									</div>
<input type="date" class="form-control importantex" id="fecha_nac_est4" name="fecha_nac_est4" <?php echo $requerido4; ?> >
			</div>




<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" ><i class="fas fa-map-pin "></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="ciudad_est4" name="ciudad_est4" <?php echo $requerido4; ?> >
							  							
							  							<option selected disabled value="">Lugar de Nacimiento:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_ciudades4['id_ciudad']; ?>"><?php echo $row_datos_ciudades4['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudades4 = mysqli_fetch_assoc($datos_ciudades4)); ?> 
													    
												</select>
							   
</div>


			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" ><i class="far fa-map"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="estado_est4" name="estado_est4" <?php echo $requerido4; ?> >
							  							
							  							<option selected disabled value="">Entidad Federal:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_estados4['id_estado']; ?>"><?php echo $row_datos_estados4['nombre_estado']; ?></option>

                                <?php } while ($row_datos_estados4 = mysqli_fetch_assoc($datos_estados4)); ?> 
													    
												</select>
							   
			</div>





			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-globe"></i></span>  
										</div>
							   
							      	<select class="form-control importantex" id="pais_nac_est4" name="pais_nac_est4" <?php echo $requerido4; ?> >
							  							
							  							<option selected disabled value="">Nacionalidad:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_paises4['id_pais']; ?>"><?php echo $row_datos_paises4['nombre_pais']; ?></option>

                                <?php } while ($row_datos_paises4 = mysqli_fetch_assoc($datos_paises4)); ?> 
													    
												</select>
							   
			</div>



			


</div>  <!-- cierre row -->




<div class="form-row">

	<div class="input-group input-group-sm col-md-3 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="far fa-id-card "></i></span>  
									</div>
<input maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" class="form-control" id="cedula_est4" name="cedula_est4" placeholder="Cedula ó cedula escolar..." >
			</div>




			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-columns"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="religion_act4" name="religion_act4" <?php echo $requerido4; ?> >
							  							
							  							<option selected disabled value="">Religión:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_religion4['id_religion']; ?>"><?php echo $row_datos_religion4['tipo_religion']; ?></option>

                                <?php } while ($row_datos_religion4 = mysqli_fetch_assoc($datos_religion4)); ?> 
													    
												</select>
							   
			</div>


			


			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fab fa-medrt"></i></span>  
										</div>
							   
							      		<select class="form-control importantex" id="padece_act4" name="padece_act4" <?php echo $requerido4; ?> >
							  							
							  							<option selected disabled value="">Presenta o padece de:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_padece4['id_medico']; ?>"><?php echo $row_datos_padece4['nombre_medico']; ?></option>

                                <?php } while ($row_datos_padece4 = mysqli_fetch_assoc($datos_padece4)); ?> 
													    
												</select>
							   
			</div>




			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fas fa-syringe"></i></span>  
										</div>
							   
							      		<select class="form-control importantex" id="sangre_act4" name="sangre_act4" <?php echo $requerido4; ?> >
							  							
							  							<option selected disabled value="">Tipo de sangre:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_sangres4['id_sangre']; ?>"><?php echo $row_datos_sangres4['tipo_sangre']; ?></option>

                                <?php } while ($row_datos_sangres4 = mysqli_fetch_assoc($datos_sangres4)); ?> 
													    
												</select>
							   
			</div>





</div> <!-- cierre row -->



<div class="border border-success rounded p-2" style="background-color:#E0FAE0">
<div class="form-row ">  <!-- procedencia -->

								<div class="col-md-12 mt-1">

						  		<b class="text-success"> Sobre el representado: </b><span class="text-muted">(Llenar solamente si proviene de cursar en otro plantel)</span>								    								    

						<?php 


				          if ($procede_success4!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registrado.\">".$procede_success4."</i>"; }
				        ?>

				        <?php 
				          if ($procede_danger4!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"No registrados.\">".$procede_danger4."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->


							    </div>

</div>



<div class="form-row margencito">  <!-- viene de otro plantel -->

	<div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i><b>Proviene de otro plantel?</b></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="viene_otro4" name="viene_otro4">
							  							
							  				   <option selected value="2">No</option>
							  							<option value="1">Si</option>
												</select>
							   
	</div>


			<div class="input-group input-group-sm col-md-5 mb-2">
			<div class="input-group-prepend">
				<span class="input-group-text alert-success" id="basic-addon1">&nbsp;<i class="fas fa-file-alt">&nbsp;&nbsp;</i></span>  
			</div>
			<input maxlength="39" type="text" class="form-control" id="plantel_pro4" name="plantel_pro4"
			placeholder="Nombre del plantel..." >
			</div>



			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-map-pin "></i></span>  
										</div>
							   
							      				<select class="form-control" id="esc_ciudad_est4" name="esc_ciudad_est4">
							  							
							  							<option selected disabled value="">Lugar:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_ciudadesP4['id_ciudad']; ?>"><?php echo $row_datos_ciudadesP4['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudadesP4 = mysqli_fetch_assoc($datos_ciudadesP4)); ?> 
													    
												</select>
							   
			</div>


</div>



<div class="form-row">
			
			<div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i>Grado o año cursado:</i></span>  
										</div>
							   
					<select class="form-control" id="grado_curso_otro4" name="grado_curso_otro4">
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_gradosP4['id_grado']; ?>"><?php echo $row_datos_gradosP4['nombre_grados']; ?></option>

                                <?php } while ($row_datos_gradosP4 = mysqli_fetch_assoc($datos_gradosP4)); ?> 
													    
												</select>
							   
			</div>



			<div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i><b>Ciclo cursado:</b></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="cursaba_est4" name="cursaba_est4">
							  							
							  				  
<option value="<?php echo $row_datos_periodo_viejo['id_periodo_es']; ?>" selected>
  <?php echo $row_datos_periodo_viejo['periodo_escolar']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
							  							

                               <?php do{?>                                    

<option value="<?php echo $row_datos_periodo_old4['id_periodo_es']; ?>"><?php echo $row_datos_periodo_old4['periodo_escolar']; ?></option>

                                <?php } while ($row_datos_periodo_old4 = mysqli_fetch_assoc($datos_periodo_old4)); ?> 
													    
												</select>
							   
			</div>


			



			<div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i>Estaba repitiendo el año?</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="old_repite_otro4" name="old_repite_otro4">
							  							
							  				   <option selected value="2">No</option>
							  							<option value="1">Si</option>
												</select>
							   
			</div>


</div>
</div> <!-- cierre borde-->


<div class="form-row ">  

<div data-toggle="tooltip" data-placement="right" title="Borrar foto cargada.">

<button type="button" class="ml-1 mt-1 btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#borrar_fotos_DD">
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




<div class="form-row ">  <!-- actuacion actual -->

								<div class="col-md-12 mt-3 ml-1 mb-2">

						  		<b class="text-info">  Actuación actual del alumno: </b>	 						    

						<?php 

				          if ($actua_success4!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Actuación registrada.\">".$actua_success4."</i>"; }
				        ?>

				        <?php 
				          if ($actua_danger4!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Actuación no registrada.\">".$actua_danger4."</i>"; }
				        ?>


				         <?php 
				          if ($act_hist_ES4_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Historial añadido.\">".$act_hist_ES4_success."</i>"; }
				        ?>

				        <?php 
				          if ($act_hist_ES4_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Historial no añadido.\">".$act_hist_ES4_danger."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->

							    </div>

</div>

</div>  <!-- cierre col md 9 y md3 -->



<div class="form-row">


<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text " id="basic-addon1">&nbsp;<i>Año escolar:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="cursa_est4" name="cursa_est4">



<option value="<?php echo $row_datos_periodo_actual['id_periodo_es']; ?>" selected>
  <?php echo $row_datos_periodo_actual['periodo_escolar']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
							  							

                               <?php do{?>                                    

<option value="<?php echo $row_datos_periodo_act4['id_periodo_es']; ?>"><?php echo $row_datos_periodo_act4['periodo_escolar']; ?></option>

                                <?php } while ($row_datos_periodo_act4 = mysqli_fetch_assoc($datos_periodo_act4)); ?> 
													    
												</select>
							   
</div>






	


	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>Grado o año:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="grado_act4" name="grado_act4" <?php echo $requerido4; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_gradosA4['id_grado']; ?>"><?php echo $row_datos_gradosA4['nombre_grados']; ?></option>

                                <?php } while ($row_datos_gradosA4 = mysqli_fetch_assoc($datos_gradosA4)); ?> 
													    
												</select>
							   
	</div>


	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>Repite?:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="repite_actual4" name="repite_actual4">
							  							
							  				   <option selected value="2">No</option>
							  							<option value="1">Si</option>
												</select>
							   
	</div>


<!--	<div class="input-group input-group-sm col-md-3 mb-2">
			<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1"><i>Fecha de inscripción:</i></span>  
			</div>
			<input type="date" class="form-control importantex" id="fecha_ins_act1" name="fecha_ins_act1" <?php echo $requerido4; ?> >
	</div>  -->



	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>Edad:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="edad_act4" name="edad_act4" <?php echo $requerido4; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_edad4['id_edad']; ?>"><?php echo $row_datos_edad4['nombre_edad']; ?></option>

                                <?php } while ($row_datos_edad4 = mysqli_fetch_assoc($datos_edad4)); ?> 
													    
												</select>
							   
	</div>


</div>



<div class="form-row">

	<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>T. Camisa:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="talla_cam4" name="talla_cam4" <?php echo $requerido4; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                 

<option value="<?php echo $row_datos_camisas4['id_camisa']; ?>"><?php echo $row_datos_camisas4['talla_camisa']; ?></option>

                                <?php } while ($row_datos_camisas4 = mysqli_fetch_assoc($datos_camisas4)); ?> 
													    
												</select>
							   
	</div>



	<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>T. Pantalón:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="talla_pant4" name="talla_pant4" <?php echo $requerido4; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_pantalon4['id_pantalon']; ?>"><?php echo $row_datos_pantalon4['nombre_pantalon']; ?></option>

                                <?php } while ($row_datos_pantalon4 = mysqli_fetch_assoc($datos_pantalon4)); ?> 
													    
												</select>
							   
	</div>



	<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>T. Zapatos:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="talla_zap4" name="talla_zap4" <?php echo $requerido4; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_zapatos4['id_zapato']; ?>"><?php echo $row_datos_zapatos4['talla_zapato']; ?></option>

                                <?php } while ($row_datos_zapatos4 = mysqli_fetch_assoc($datos_zapatos4)); ?> 
													    
												</select>
							   
	</div>



	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">&nbsp;<i>Peso: (kilogramos)</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="peso_act4" name="peso_act4" <?php echo $requerido4; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_peso4['id_peso']; ?>"><?php echo $row_datos_peso4['nombre_peso']; ?></option>

                                <?php } while ($row_datos_peso4 = mysqli_fetch_assoc($datos_peso4)); ?> 
													    
												</select>
							   
	</div>




	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">&nbsp;<i>Estatura: (centímetros)</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="estatura_act4" name="estatura_act4" <?php echo $requerido4; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_altura4['id_altura']; ?>"><?php echo $row_datos_altura4['nombre_altura']; ?></option>

                                <?php } while ($row_datos_altura4 = mysqli_fetch_assoc($datos_altura4)); ?> 
													    
												</select>
							   
	</div>







</div>




<div class="form-row ">  <!-- actuacion actual -->

								<div class="col-md-12 mt-3 ml-1 mb-2">

						  		<b class="text-info">  Observaciones: </b>	 						    

						<?php 


				          if ($obs_success4!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Observaciones registrada.\">".$obs_success4."</i>"; }
				        ?>

				        <?php 
				          if ($obs_danger4!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Observaciones no registrada.\">".$obs_danger4."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->


							    </div>

</div>


<div class="form-row ">

				        		<div class="col-md-12 mb-3">

				        		<textarea maxlength="750" class="form-control" id="obs_text4" name="obs_text4" rows="3"></textarea>

				        		 <span id="chars4">750</span> caracteres restantes.

				        	    </div>

</div> <!-- cierre row  de obs -->


<script type="text/javascript">
	
var maxLength4 = 750;
$('#obs_text4').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength4-length;
  $('#chars4').text(length);
});

</script>








