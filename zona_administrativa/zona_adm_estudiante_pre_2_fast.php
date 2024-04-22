

<div class="form-row ">  <!-- datos del estudiante -->

						  		<div class="col-md-12 mt-2 mb-1">

						  		<b class="text-info">Datos del representado N°2: </b>

						<?php 

				          if ($datosES2_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Estudiante Registrado.\">".$datosES2_success."</i>"; }
				        ?>

				        <?php 

				          if ($datosES2_repre_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Relación realizada.\">".$datosES2_repre_success."</i>"; }
				        ?>



				        <?php 
				          if ($datosES2_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Estudiante no registrado.\">".$datosES2_danger."</i>"; }
				        ?>

				        <?php 
				          if ($datosES2_repre_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Relación no realizada.\">".$datosES2_repre_danger."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->

							    </div>

</div>




<div class="form-row">








<div class="col-md-12">	 

<div class="form-row margencito">


			<div class="input-group input-group-sm col-md-3 mb-2 ">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-user-tag">&nbsp;&nbsp;</i></span>  
			</div>
			<input maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" class="form-control  importantex" id="expediente_est2" name="expediente_est2" placeholder="Expediente..."
			<?php echo $requerido2; ?> >
			</div>



			<div class="input-group input-group-sm col-md-3 mb-2 ">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-file-alt">&nbsp;&nbsp;</i></span>  
			</div>
			<input maxlength="39" type="text" class="form-control  importantex" id="nombres_est2" name="nombres_est2" placeholder="Nombre(s)..."
			<?php echo $requerido2; ?> >
			</div>


			<div class="input-group input-group-sm col-md-3 mb-2 ">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="far fa-file-alt"></i></span>  
			</div>
			<input maxlength="39" type="text" class="form-control  importantex" id="apellidos_est2" name="apellidos_est2" placeholder="Apellido(s)..."
			<?php echo $requerido2; ?> >
			</div>





<div class="input-group input-group-sm col-md-3 mb-2 ">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-venus-mars "></i></span>  
										</div>							   
							      				<select class="form-control importantex" id="genero_est2" name="genero_est2" <?php echo $requerido2; ?> >
							  							
							  							<option selected disabled value="">Sexo:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_sexo2['id_sexo']; ?>"><?php echo $row_datos_sexo2['nombre_sexo']; ?></option>

                                <?php } while ($row_datos_sexo2 = mysqli_fetch_assoc($datos_sexo2)); ?> 


													    
												</select>
							   
</div>









</div>
							
	


<div class="form-row">


	<div class="input-group input-group-sm col-md-3 mb-2 ">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fa fa-birthday-cake "></i></span>  
									</div>
<input type="date" class="form-control importantex" id="fecha_nac_est2" name="fecha_nac_est2" <?php echo $requerido2; ?> >
			</div>



	<div class="input-group input-group-sm col-md-3 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="far fa-id-card "></i></span>  
									</div>
<input maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" class="form-control" id="cedula_est2" name="cedula_est2" placeholder="Cedula ó cedula escolar..." >
			</div>




<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" ><i class="fas fa-map-pin "></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="ciudad_est2" name="ciudad_est2" <?php echo $requerido2; ?> >
							  							
							  							<option selected disabled value="">Lugar de Nacimiento:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_ciudades2['id_ciudad']; ?>"><?php echo $row_datos_ciudades2['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudades2 = mysqli_fetch_assoc($datos_ciudades2)); ?> 
													    
												</select>
							   
</div>


			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" ><i class="far fa-map"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="estado_est2" name="estado_est2" <?php echo $requerido2; ?> >
							  							
							  							<option selected disabled value="">Entidad Federal:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_estados2['id_estado']; ?>"><?php echo $row_datos_estados2['nombre_estado']; ?></option>

                                <?php } while ($row_datos_estados2 = mysqli_fetch_assoc($datos_estados2)); ?> 
													    
												</select>
							   
			</div>









			


</div>  <!-- cierre row -->












</div>  <!-- cierre md 9  -->






</div>  <!-- cierre col md 9 y md3 -->




<div class=" mt-3 ml-1 mr-1  border border-success rounded p-2" style="background-color:#E0FAE0">
<div class="form-row ">  <!-- procedencia -->

								<div class="col-md-12 mt-1">

						  		<b class="text-success">'Opcional' Sobre el representado: </b><span class="text-muted">(Llenar solamente si proviene de cursar en otro plantel)</span>								    								    

						<?php 


				          if ($procede_success2!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registrado.\">".$procede_success2."</i>"; }
				        ?>

				        <?php 
				          if ($procede_danger2!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"No registrados.\">".$procede_danger2."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->


							    </div>

</div>



<div class="form-row margencito">  <!-- viene de otro plantel -->

	<div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i><b>Proviene de otro plantel?</b></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="viene_otro2" name="viene_otro2">
							  							
							  				   <option selected value="2">No</option>
							  							<option value="1">Si</option>
												</select>
							   
	</div>


			<div class="input-group input-group-sm col-md-5 mb-2">
			<div class="input-group-prepend">
				<span class="input-group-text alert-success" id="basic-addon1">&nbsp;<i class="fas fa-file-alt">&nbsp;&nbsp;</i></span>  
			</div>
			<input maxlength="39" type="text" class="form-control" id="plantel_pro2" name="plantel_pro2"
			placeholder="Nombre del plantel..." >
			</div>



			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-map-pin "></i></span>  
										</div>
							   
							      				<select class="form-control" id="esc_ciudad_est2" name="esc_ciudad_est2">
							  							
							  							<option selected disabled value="">Lugar:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_ciudadesP2['id_ciudad']; ?>"><?php echo $row_datos_ciudadesP2['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudadesP2 = mysqli_fetch_assoc($datos_ciudadesP2)); ?> 
													    
												</select>
							   
			</div>


</div>



<div class="form-row">
			
			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i>Grado o año cursado:</i></span>  
										</div>
							   
					<select class="form-control" id="grado_curso_otro2" name="grado_curso_otro2">
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_gradosP2['id_grado']; ?>"><?php echo $row_datos_gradosP2['nombre_grados']; ?></option>

                                <?php } while ($row_datos_gradosP2 = mysqli_fetch_assoc($datos_gradosP2)); ?> 
													    
												</select>
							   
			</div>



			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i><b>Ciclo cursado:</b></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="cursaba_est2" name="cursaba_est2">
							  							
							  				  
<option value="<?php echo $row_datos_periodo_viejo['id_periodo_es']; ?>" selected>
  <?php echo $row_datos_periodo_viejo['periodo_escolar']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
							  							

                               <?php do{?>                                    

<option value="<?php echo $row_datos_periodo_old2['id_periodo_es']; ?>"><?php echo $row_datos_periodo_old2['periodo_escolar']; ?></option>

                                <?php } while ($row_datos_periodo_old2 = mysqli_fetch_assoc($datos_periodo_old2)); ?> 
													    
												</select>
							   
			</div>


			



			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i>Estaba repitiendo el año?</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="old_repite_otro2" name="old_repite_otro2">
							  							
							  				   <option selected value="2">No</option>
							  							<option value="1">Si</option>
												</select>
							   
			</div>


			 <div class="input-group input-group-sm col-md-3 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-danger" id="basic-addon1"><i>Áreas ó Asignat. Pendientes:</i></span>  
                  </div>
     
<input type="text" class="form-control form-control-sm" id="mod_areas_pendientes2" name="mod_areas_pendientes2"  >
        </div>



</div>
</div> <!-- cierre borde-->








<div class="form-row ">  <!-- actuacion actual -->

								<div class="col-md-12 mt-3 ml-1 mb-2">

						  		<b class="text-info">  Actuación actual del alumno: </b>	 						    

						<?php 

				          if ($actua_success2!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Actuación registrada.\">".$actua_success2."</i>"; }
				        ?>

				        <?php 
				          if ($actua_danger2!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Actuación no registrada.\">".$actua_danger2."</i>"; }
				        ?>


				         <?php 
				          if ($act_hist_ES2_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Historial añadido.\">".$act_hist_ES2_success."</i>"; }
				        ?>

				        <?php 
				          if ($act_hist_ES2_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Historial no añadido.\">".$act_hist_ES2_danger."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->

							    </div>

</div>



<div class="form-row">


<div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-danger" id="basic-addon1">&nbsp;<i>Año escolar:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="cursa_est2" name="cursa_est2">



<option selected disabled></option>

                                <optgroup label="Seleccionar...">
                                <option disabled></option>
							  							

                               <?php do{?>                                    

<option value="<?php echo $row_datos_periodo_act2['id_periodo_es']; ?>"><?php echo $row_datos_periodo_act2['periodo_escolar']; ?></option>

                                <?php } while ($row_datos_periodo_act2 = mysqli_fetch_assoc($datos_periodo_act2)); ?> 
													    
												</select>
							   
</div>






	


	<div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>Grado o año:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="grado_act2" name="grado_act2" <?php echo $requerido2; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_gradosA2['id_grado']; ?>"><?php echo $row_datos_gradosA2['nombre_grados']; ?></option>

                                <?php } while ($row_datos_gradosA2 = mysqli_fetch_assoc($datos_gradosA2)); ?> 
													    
												</select>
							   
	</div>


	<div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>Repite?:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="repite_actual2" name="repite_actual2">
							  							
							  				   <option selected value="2">No</option>
							  							<option value="1">Si</option>
												</select>
							   
	</div>


<!--	<div class="input-group input-group-sm col-md-3 mb-2">
			<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1"><i>Fecha de inscripción:</i></span>  
			</div>
			<input type="date" class="form-control importantex" id="fecha_ins_act1" name="fecha_ins_act1" <?php echo $requerido2; ?> >
	</div>  -->






</div>

