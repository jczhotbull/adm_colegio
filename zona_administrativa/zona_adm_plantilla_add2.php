<div class="form-row" >   <!-- row 1 -->

				


				        		<div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">A.1</span>  
										</div>							   
							      				<select class="form-control " id="asignatura_a" name="asignatura_a" >
							  							<option selected disabled value="">Asignatura…</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM plantilla_areas WHERE nombre_area != '.' ORDER BY nombre_area ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_area']; ?>"><?php echo $row_datos_opciones1['nombre_area'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 

								                          <option value="66">Zero, Vacio, Nada</option>													    
												</select>
							   
							    </div>


							    <script type="text/javascript">	

								$('select[name=asignatura_a]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#grado_a').prop('required',true);
							        } else {
							            $('#grado_a').prop('required',false);
							            
							        }
							    });		

							   </script>


							    <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">A.2</span>  
										</div>							   
							      				<select class="form-control " id="grado_a" name="grado_a" >
							  							<option selected disabled value="">Grado/Año...</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM grados, divisiones
																WHERE  grados.id_division = divisiones.id_division
																and nombre_grados != '.' ORDER BY nombre_division ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_grado']; ?>"><?php echo $row_datos_opciones1['nombre_grados'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?>

								                          <option value="51">Zero, Vacio, Nada</option>	 													    
												</select>
							   
							    </div>


							    <script type="text/javascript">	

								$('select[name=grado_a]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#turno_a').prop('required',true);
							        } else {
							            $('#turno_a').prop('required',false);
							            
							        }
							    });		

							   </script>

										    <div class="input-group col-md-2 mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">A.3</span>  
													</div>							   
										      				<select class="form-control " id="turno_a" name="turno_a" >
										  							<option selected disabled value="">Turno…</option>
										  							<option disabled></option>

										  							 <?php 
											                          include("../conectar.php");
											                          $queryopciones1 = "SELECT * FROM plantilla_turnos WHERE nombre_turno != '.' ORDER BY nombre_turno ASC";
											                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
											                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
											                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
											                          {								                            
											                        ?>
											    <option value = "<?php echo $row_datos_opciones1['id_turno']; ?>"><?php echo $row_datos_opciones1['nombre_turno'];?></option>
											<?php
											                          }								                          
											                          mysqli_close($enlace);
											                          ?> 	
												    <option value="4">Zero, Vacio, Nada</option>
															</select>
										   
										    </div>

								<script type="text/javascript">	

								$('select[name=turno_a]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#seccion_a').prop('required',true);
							        } else {
							            $('#seccion_a').prop('required',false);
							            
							        }
							    });		

							   </script>


							    <div class="input-group col-md-2 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">A.4</span>  
										</div>							   
							      				<select class="form-control " id="seccion_a" name="seccion_a" >
							  							<option selected disabled value="">Sección…</option>
							  							<option disabled></option>

							  							 <?php do{?>                                

								<option value="<?php echo $row_datos_secciones['id_seccion']; ?>"><?php echo $row_datos_secciones['nombre_seccion']; ?></option>

                                <?php } while ($row_datos_secciones = mysqli_fetch_assoc($datos_secciones)); ?> 

                                <option value="8">Zero, Vacio, Nada</option>
													    
												</select>
							   
							    </div>


							    <script type="text/javascript">	

								$('select[name=seccion_a]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#horas_a').prop('required',true);
							        } else {
							            $('#horas_a').prop('required',false);
							            
							        }
							    });		

							   </script>

											    <div class="input-group col-md-2 mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon1">A.5</span>  
														</div>							   
											      				<select class="form-control " id="horas_a" name="horas_a" >
											  							<option selected disabled value="">Horas…</option>
											  							<option disabled></option>


											  							 <?php 
												                          include("../conectar.php");
												                          $queryopciones1 = "SELECT * FROM plantilla_horas WHERE nombre_hora != '.' ORDER BY nombre_hora ASC";
												                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
												                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
												                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
												                          {								                            
												                        ?>
												    <option value = "<?php echo $row_datos_opciones1['id_hora']; ?>"><?php echo $row_datos_opciones1['nombre_hora'];?></option>
												<?php
												                          }								                          
												                          mysqli_close($enlace);
												                          ?> 	 
								                         <option value="21">Zero, Vacio, Nada</option>
																</select>
											   
											    </div>


			
</div>  <!-- cierre form row -->


								<script type="text/javascript">


							   	$('select[name=horas_a]').change(function () {
							        if ($(this).val() != '') {
							            $('#hiddenNum').show();							            
							        } else {							            
							            $('#hiddenNum').hide();
							        }
							    });											

							   </script>




<div class="form-row" id="hiddenNum" style="display:none">   <!-- row 2 -->

				


				        		<div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">B.1</span>  
										</div>							   
							      				<select class="form-control " id="asignatura_b" name="asignatura_b" >
							  							<option selected disabled value="">Asignatura…</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM plantilla_areas WHERE nombre_area != '.' ORDER BY nombre_area ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_area']; ?>"><?php echo $row_datos_opciones1['nombre_area'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   
							    </div>


							    <script type="text/javascript">	

								$('select[name=asignatura_b]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#grado_b').prop('required',true);
							        } else {
							            $('#grado_b').prop('required',false);
							            
							        }
							    });		

							   </script>


							    <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">B.2</span>  
										</div>							   
							      				<select class="form-control " id="grado_b" name="grado_b" >
							  							<option selected disabled value="">Grado/Año...</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM grados, divisiones
																WHERE  grados.id_division = divisiones.id_division
																and nombre_grados != '.' ORDER BY nombre_division ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_grado']; ?>"><?php echo $row_datos_opciones1['nombre_grados'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   
							    </div>


							    <script type="text/javascript">	

								$('select[name=grado_b]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#turno_b').prop('required',true);
							        } else {
							            $('#turno_b').prop('required',false);
							            
							        }
							    });		

							   </script>

										    <div class="input-group col-md-2 mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">B.3</span>  
													</div>							   
										      				<select class="form-control " id="turno_b" name="turno_b" >
										  							<option selected disabled value="">Turno…</option>
										  							<option disabled></option>

										  							<?php 
											                          include("../conectar.php");
											                          $queryopciones1 = "SELECT * FROM plantilla_turnos WHERE nombre_turno != '.' ORDER BY nombre_turno ASC";
											                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
											                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
											                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
											                          {								                            
											                        ?>
											    <option value = "<?php echo $row_datos_opciones1['id_turno']; ?>"><?php echo $row_datos_opciones1['nombre_turno'];?></option>
											<?php
											                          }								                          
											                          mysqli_close($enlace);
											                          ?> 													    
															</select>
										   
										    </div>

								<script type="text/javascript">	

								$('select[name=turno_b]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#seccion_b').prop('required',true);
							        } else {
							            $('#seccion_b').prop('required',false);
							            
							        }
							    });		

							   </script>


							    <div class="input-group col-md-2 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">B.4</span>  
										</div>							   
							      				<select class="form-control " id="seccion_b" name="seccion_b" >
							  							<option selected disabled value="">Sección…</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM secciones WHERE nombre_seccion != '.' ORDER BY nombre_seccion ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_seccion']; ?>"><?php echo $row_datos_opciones1['nombre_seccion'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   

							    </div>

							    <script type="text/javascript">	

								$('select[name=seccion_b]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#horas_b').prop('required',true);
							        } else {
							            $('#horas_b').prop('required',false);
							            
							        }
							    });		

							   </script>

											    <div class="input-group col-md-2 mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon1">B.5</span>  
														</div>							   
											      				<select class="form-control " id="horas_b" name="horas_b" >
											  							<option selected disabled value="">Horas…</option>
											  							<option disabled></option>

											  							<?php 
												                          include("../conectar.php");
												                          $queryopciones1 = "SELECT * FROM plantilla_horas WHERE nombre_hora != '.' ORDER BY nombre_hora ASC";
												                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
												                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
												                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
												                          {								                            
												                        ?>
												    <option value = "<?php echo $row_datos_opciones1['id_hora']; ?>"><?php echo $row_datos_opciones1['nombre_hora'];?></option>
												<?php
												                          }								                          
												                          mysqli_close($enlace);
												                          ?> 													    
																</select>
											   
											    </div>


			
</div>  <!-- cierre form row -->


							<script type="text/javascript">


							   	$('select[name=horas_b]').change(function () {
							        if ($(this).val() != '') {
							            $('#hiddenNum2').show();
							            
							        } else {
							            
							            $('#hiddenNum2').hide();
							        }
							    });											

							   </script>




<div class="form-row" id="hiddenNum2" style="display:none">    <!-- row 3 -->

				


				        		<div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">C.1</span>  
										</div>							   
							      				<select class="form-control " id="asignatura_c" name="asignatura_c" >
							  							<option selected disabled value="">Asignatura…</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM plantilla_areas WHERE nombre_area != '.' ORDER BY nombre_area ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_area']; ?>"><?php echo $row_datos_opciones1['nombre_area'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   
							    </div>

							    <script type="text/javascript">	

								$('select[name=asignatura_c]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#grado_c').prop('required',true);
							        } else {
							            $('#grado_c').prop('required',false);
							            
							        }
							    });		

							   </script>


							    <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">C.2</span>  
										</div>							   
							      				<select class="form-control " id="grado_c" name="grado_c" >
							  							<option selected disabled value="">Grado/Año...</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM grados, divisiones
																WHERE  grados.id_division = divisiones.id_division
																and nombre_grados != '.' ORDER BY nombre_division ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_grado']; ?>"><?php echo $row_datos_opciones1['nombre_grados'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   
							    </div>


							    <script type="text/javascript">	

								$('select[name=grado_c]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#turno_c').prop('required',true);
							        } else {
							            $('#turno_c').prop('required',false);
							            
							        }
							    });		

							   </script>

										    <div class="input-group col-md-2 mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">C.3</span>  
													</div>							   
										      				<select class="form-control " id="turno_c" name="turno_c" >
										  							<option selected disabled value="">Turno…</option>
										  							<option disabled></option>

										  							<?php 
											                          include("../conectar.php");
											                          $queryopciones1 = "SELECT * FROM plantilla_turnos WHERE nombre_turno != '.' ORDER BY nombre_turno ASC";
											                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
											                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
											                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
											                          {								                            
											                        ?>
											    <option value = "<?php echo $row_datos_opciones1['id_turno']; ?>"><?php echo $row_datos_opciones1['nombre_turno'];?></option>
											<?php
											                          }								                          
											                          mysqli_close($enlace);
											                          ?> 													    
															</select>
										   
										    </div>


								<script type="text/javascript">	

								$('select[name=turno_c]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#seccion_c').prop('required',true);
							        } else {
							            $('#seccion_c').prop('required',false);
							            
							        }
							    });		

							   </script>



							    <div class="input-group col-md-2 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">C.4</span>  
										</div>							   
							      				<select class="form-control " id="seccion_c" name="seccion_c" >
							  							<option selected disabled value="">Sección…</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM secciones WHERE nombre_seccion != '.' ORDER BY nombre_seccion ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_seccion']; ?>"><?php echo $row_datos_opciones1['nombre_seccion'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   
							    </div>


							    <script type="text/javascript">	

								$('select[name=seccion_c]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#horas_c').prop('required',true);
							        } else {
							            $('#horas_c').prop('required',false);
							            
							        }
							    });		

							   </script>

											    <div class="input-group col-md-2 mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon1">C.5</span>  
														</div>							   
											      				<select class="form-control " id="horas_c" name="horas_c" >
											  							<option selected disabled value="">Horas…</option>
											  							<option disabled></option>

											  							<?php 
												                          include("../conectar.php");
												                          $queryopciones1 = "SELECT * FROM plantilla_horas WHERE nombre_hora != '.' ORDER BY nombre_hora ASC";
												                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
												                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
												                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
												                          {								                            
												                        ?>
												    <option value = "<?php echo $row_datos_opciones1['id_hora']; ?>"><?php echo $row_datos_opciones1['nombre_hora'];?></option>
												<?php
												                          }								                          
												                          mysqli_close($enlace);
												                          ?> 													    
																</select>
											   
											    </div>


			
</div>  <!-- cierre form row -->



							<script type="text/javascript">


							   	$('select[name=horas_c]').change(function () {
							        if ($(this).val() != '') {
							            $('#hiddenNum3').show();
							            
							        } else {
							            
							            $('#hiddenNum3').hide();
							        }
							    });											

							   </script>




<div class="form-row" id="hiddenNum3" style="display:none">  <!-- row 4 -->

				


				        		<div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">D.1</span>  
										</div>							   
							      				<select class="form-control " id="asignatura_d" name="asignatura_d" >
							  							<option selected disabled value="">Asignatura…</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM plantilla_areas WHERE nombre_area != '.' ORDER BY nombre_area ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_area']; ?>"><?php echo $row_datos_opciones1['nombre_area'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   
							    </div>

							     <script type="text/javascript">	

								$('select[name=asignatura_d]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#grado_d').prop('required',true);
							        } else {
							            $('#grado_d').prop('required',false);
							            
							        }
							    });		

							   </script>


							    <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">D.2</span>  
										</div>							   
							      				<select class="form-control " id="grado_d" name="grado_d" >
							  							<option selected disabled value="">Grado/Año...</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM grados, divisiones
																WHERE  grados.id_division = divisiones.id_division
																and nombre_grados != '.' ORDER BY nombre_division ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_grado']; ?>"><?php echo $row_datos_opciones1['nombre_grados'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   
							    </div>


							     <script type="text/javascript">	

								$('select[name=grado_d]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#turno_d').prop('required',true);
							        } else {
							            $('#turno_d').prop('required',false);
							            
							        }
							    });		

							   </script>

										    <div class="input-group col-md-2 mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">D.3</span>  
													</div>							   
										      				<select class="form-control " id="turno_d" name="turno_d" >
										  							<option selected disabled value="">Turno…</option>
										  							<option disabled></option>

										  							<?php 
											                          include("../conectar.php");
											                          $queryopciones1 = "SELECT * FROM plantilla_turnos WHERE nombre_turno != '.' ORDER BY nombre_turno ASC";
											                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
											                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
											                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
											                          {								                            
											                        ?>
											    <option value = "<?php echo $row_datos_opciones1['id_turno']; ?>"><?php echo $row_datos_opciones1['nombre_turno'];?></option>
											<?php
											                          }								                          
											                          mysqli_close($enlace);
											                          ?> 													    
															</select>
										   
										    </div>

								<script type="text/javascript">	

								$('select[name=turno_d]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#seccion_d').prop('required',true);
							        } else {
							            $('#seccion_d').prop('required',false);
							            
							        }
							    });		

							   </script>


							    <div class="input-group col-md-2 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">D.4</span>  
										</div>							   
							      				<select class="form-control " id="seccion_d" name="seccion_d" >
							  							<option selected disabled value="">Sección…</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM secciones WHERE nombre_seccion != '.' ORDER BY nombre_seccion ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_seccion']; ?>"><?php echo $row_datos_opciones1['nombre_seccion'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   
							    </div>


							    <script type="text/javascript">	

								$('select[name=seccion_d]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#horas_d').prop('required',true);
							        } else {
							            $('#horas_d').prop('required',false);
							            
							        }
							    });		

							   </script>

											    <div class="input-group col-md-2 mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon1">D.5</span>  
														</div>							   
											      				<select class="form-control " id="horas_d" name="horas_d" >
											  							<option selected disabled value="">Horas…</option>
											  							<option disabled></option>

											  							<?php 
												                          include("../conectar.php");
												                          $queryopciones1 = "SELECT * FROM plantilla_horas WHERE nombre_hora != '.' ORDER BY nombre_hora ASC";
												                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
												                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
												                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
												                          {								                            
												                        ?>
												    <option value = "<?php echo $row_datos_opciones1['id_hora']; ?>"><?php echo $row_datos_opciones1['nombre_hora'];?></option>
												<?php
												                          }								                          
												                          mysqli_close($enlace);
												                          ?> 													    
																</select>
											   
											    </div>


			
</div>  <!-- cierre form row -->


								<script type="text/javascript">


							   	$('select[name=horas_d]').change(function () {
							        if ($(this).val() != '') {
							            $('#hiddenNum4').show();
							            
							        } else {
							            
							            $('#hiddenNum4').hide();
							        }
							    });											

							   </script>




<div class="form-row" id="hiddenNum4" style="display:none">   <!-- row 5 -->

				


				        		<div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">E.1</span>  
										</div>							   
							      				<select class="form-control " id="asignatura_e" name="asignatura_e" >
							  							<option selected disabled value="">Asignatura…</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM plantilla_areas WHERE nombre_area != '.' ORDER BY nombre_area ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_area']; ?>"><?php echo $row_datos_opciones1['nombre_area'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   
							    </div>


							    <script type="text/javascript">	

								$('select[name=asignatura_e]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#grado_e').prop('required',true);
							        } else {
							            $('#grado_e').prop('required',false);
							            
							        }
							    });		

							   </script>


							    <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">E.2</span>  
										</div>							   
							      				<select class="form-control " id="grado_e" name="grado_e" >
							  							<option selected disabled value="">Grado/Año...</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM grados, divisiones
																WHERE  grados.id_division = divisiones.id_division
																and nombre_grados != '.' ORDER BY nombre_division ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_grado']; ?>"><?php echo $row_datos_opciones1['nombre_grados'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   
							    </div>

							    <script type="text/javascript">	

								$('select[name=grado_e]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#turno_e').prop('required',true);
							        } else {
							            $('#turno_e').prop('required',false);
							            
							        }
							    });		

							   </script>

										    <div class="input-group col-md-2 mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">E.3</span>  
													</div>							   
										      				<select class="form-control " id="turno_e" name="turno_e" >
										  							<option selected disabled value="">Turno…</option>
										  							<option disabled></option>

										  							<?php 
											                          include("../conectar.php");
											                          $queryopciones1 = "SELECT * FROM plantilla_turnos WHERE nombre_turno != '.' ORDER BY nombre_turno ASC";
											                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
											                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
											                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
											                          {								                            
											                        ?>
											    <option value = "<?php echo $row_datos_opciones1['id_turno']; ?>"><?php echo $row_datos_opciones1['nombre_turno'];?></option>
											<?php
											                          }								                          
											                          mysqli_close($enlace);
											                          ?> 													    
															</select>
										   
										    </div>


								<script type="text/javascript">	

								$('select[name=turno_e]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#seccion_e').prop('required',true);
							        } else {
							            $('#seccion_e').prop('required',false);
							            
							        }
							    });		

							   </script>



							    <div class="input-group col-md-2 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">E.4</span>  
										</div>							   
							      				<select class="form-control " id="seccion_e" name="seccion_e" >
							  							<option selected disabled value="">Sección…</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM secciones WHERE nombre_seccion != '.' ORDER BY nombre_seccion ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_seccion']; ?>"><?php echo $row_datos_opciones1['nombre_seccion'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   
							    </div>



							    <script type="text/javascript">	

								$('select[name=seccion_e]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#horas_e').prop('required',true);
							        } else {
							            $('#horas_e').prop('required',false);
							            
							        }
							    });		

							   </script>

											    <div class="input-group col-md-2 mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon1">E.5</span>  
														</div>							   
											      				<select class="form-control " id="horas_e" name="horas_e" >
											  							<option selected disabled value="">Horas…</option>
											  							<option disabled></option>

											  							<?php 
												                          include("../conectar.php");
												                          $queryopciones1 = "SELECT * FROM plantilla_horas WHERE nombre_hora != '.' ORDER BY nombre_hora ASC";
												                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
												                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
												                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
												                          {								                            
												                        ?>
												    <option value = "<?php echo $row_datos_opciones1['id_hora']; ?>"><?php echo $row_datos_opciones1['nombre_hora'];?></option>
												<?php
												                          }								                          
												                          mysqli_close($enlace);
												                          ?> 													    
																</select>
											   
											    </div>


			
</div>  <!-- cierre form row -->


							<script type="text/javascript">


							   	$('select[name=horas_e]').change(function () {
							        if ($(this).val() != '') {
							            $('#hiddenNum5').show();
							            
							        } else {
							            
							            $('#hiddenNum5').hide();
							        }
							    });											

							   </script>




<div class="form-row" id="hiddenNum5" style="display:none">  <!-- row 6 -->

				


				        		<div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">F.1</span>  
										</div>							   
							      				<select class="form-control " id="asignatura_f" name="asignatura_f" >
							  							<option selected disabled value="">Asignatura…</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM plantilla_areas WHERE nombre_area != '.' ORDER BY nombre_area ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_area']; ?>"><?php echo $row_datos_opciones1['nombre_area'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   
							    </div>


							     <script type="text/javascript">	

								$('select[name=asignatura_f]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#grado_f').prop('required',true);
							        } else {
							            $('#grado_f').prop('required',false);
							            
							        }
							    });		

							   </script>


							    <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">F.2</span>  
										</div>							   
							      				<select class="form-control " id="grado_f" name="grado_f" >
							  							<option selected disabled value="">Grado/Año...</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM grados, divisiones
																WHERE  grados.id_division = divisiones.id_division
																and nombre_grados != '.' ORDER BY nombre_division ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_grado']; ?>"><?php echo $row_datos_opciones1['nombre_grados'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   
							    </div>


							    <script type="text/javascript">	

								$('select[name=grado_f]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#turno_f').prop('required',true);
							        } else {
							            $('#turno_f').prop('required',false);
							            
							        }
							    });		

							   </script>

										    <div class="input-group col-md-2 mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">F.3</span>  
													</div>							   
										      				<select class="form-control " id="turno_f" name="turno_f" >
										  							<option selected disabled value="">Turno…</option>
										  							<option disabled></option>

										  							<?php 
											                          include("../conectar.php");
											                          $queryopciones1 = "SELECT * FROM plantilla_turnos WHERE nombre_turno != '.' ORDER BY nombre_turno ASC";
											                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
											                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
											                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
											                          {								                            
											                        ?>
											    <option value = "<?php echo $row_datos_opciones1['id_turno']; ?>"><?php echo $row_datos_opciones1['nombre_turno'];?></option>
											<?php
											                          }								                          
											                          mysqli_close($enlace);
											                          ?> 													    
															</select>
										   

										    </div>



								<script type="text/javascript">	

								$('select[name=turno_f]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#seccion_f').prop('required',true);
							        } else {
							            $('#seccion_f').prop('required',false);
							            
							        }
							    });		

							   </script>



							    <div class="input-group col-md-2 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">F.4</span>  
										</div>							   
							      				<select class="form-control " id="seccion_f" name="seccion_f" >
							  							<option selected disabled value="">Sección…</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM secciones WHERE nombre_seccion != '.' ORDER BY nombre_seccion ASC";
								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {								                            
								                        ?>
								    <option value = "<?php echo $row_datos_opciones1['id_seccion']; ?>"><?php echo $row_datos_opciones1['nombre_seccion'];?></option>
								<?php
								                          }								                          
								                          mysqli_close($enlace);
								                          ?> 													    
												</select>
							   
							    </div>


							    <script type="text/javascript">	

								$('select[name=seccion_f]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#horas_f').prop('required',true);
							        } else {
							            $('#horas_f').prop('required',false);
							            
							        }
							    });		

							   </script>



											    <div class="input-group col-md-2 mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon1">F.5</span>  
														</div>							   
											      				<select class="form-control " id="horas_f" name="horas_f" >
											  							<option selected disabled value="">Horas…</option>
											  							<option disabled></option>

											  							<?php 
												                          include("../conectar.php");
												                          $queryopciones1 = "SELECT * FROM plantilla_horas WHERE nombre_hora != '.' ORDER BY nombre_hora ASC";
												                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());
												                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);
												                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
												                          {								                            
												                        ?>
												    <option value = "<?php echo $row_datos_opciones1['id_hora']; ?>"><?php echo $row_datos_opciones1['nombre_hora'];?></option>
												<?php
												                          }								                          
												                          mysqli_close($enlace);
												                          ?> 													    
																</select>
											   
											    </div>


			
</div>  <!-- cierre form row -->