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








<div class="col-md-12">	 

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
										<span class="input-group-text" id="basic-addon1"><i class="far fa-id-card "></i></span>  
									</div>
	<input maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" class="form-control" id="cedula_est1" name="cedula_est1" placeholder="Cedula ó cedula escolar..." >
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









			


</div>  <!-- cierre row -->



































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

						  		<b class="text-success">'Opcional' Sobre el representado: </b>	<span class="text-muted">(Llenar solo si viene de cursar en otro plantel)</span> 							    

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


<div class="input-group input-group-sm col-md-4 mb-2">
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






	


	<div class="input-group input-group-sm col-md-4 mb-2">
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


	<div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>Repite?:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="repite_actual1" name="repite_actual1">
							  							
							  				   <option selected value="2">No</option>
							  							<option value="1">Si</option>
												</select>
							   
	</div>




</div>














