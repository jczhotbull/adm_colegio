<div class="form-row" id="hiddenresp2" style="display:none" >  <!-- style="display:none" -->

				        		<div class="input-group col-md-2 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">1.1</span>  
										</div>
							   
							      				<select class="form-control" id="plantel_a" name="plantel_a">
							  							
							  							<option selected disabled value="">Plantel...</option>
							  							<option disabled></option>


							  							<?php do{?>                                

					<option value="<?php echo $row_datos_plantel['id_tipo']; ?>"><?php echo $row_datos_plantel['nombre_tipo']; ?></option>

                                <?php } while ($row_datos_plantel = mysqli_fetch_assoc($datos_plantel)); ?>

													    
												</select>
							   
							   </div>



							    <script type="text/javascript">	

								$('select[name=plantel_a]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#names_planteles_a').prop('required',true);
							        } else {
							            $('#names_planteles_a').prop('required',false);
							           
							        }
							    });		

							   </script> 



							   <div class="input-group col-md-4 mb-3">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">1.2</i></span>  
										</div>
<input type="text" maxlength="28" class="form-control " id="names_planteles_a" name="names_planteles_a" placeholder="Nombre del plantel..." aria-label="names_planteles" aria-describedby="names_planteles" >
							  </div>


							   <script type="text/javascript">	

								$('input[name=names_planteles_a]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#asignatura_otro_a').prop('required',true);
							        } else {
							            $('#asignatura_otro_a').prop('required',false);
							           
							        }
							    });		

							   </script> 




							  <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">1.3</i></span>  
										</div>							   
							      				<select class="form-control " id="asignatura_otro_a" name="asignatura_otro_a" >
							  							<option selected disabled value="">Asignatura que dicta…</option>
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

								$('select[name=asignatura_otro_a]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#grado_otro_a').prop('required',true);
							        } else {
							            $('#grado_otro_a').prop('required',false);
							           
							        }
							    });		

							   </script> 


							    <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">1.4</span>  
										</div>							   
							      				<select class="form-control " id="grado_otro_a" name="grado_otro_a" >
							  							<option selected disabled value="">Grado/Año...</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM grados WHERE nombre_grados != '.' ORDER BY nombre_grados ASC";
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



</div> <!-- cierre row otros colegios -->


 								<script type="text/javascript">


							   	$('select[name=grado_otro_a]').change(function () {
							        if ($(this).val() != '') {
							            $('#hiddenZZZ').show();
							            
							        } else {
							            
							            $('#hiddenZZZ').hide();
							        }
							    });											

							   </script>





<div class="form-row" id="hiddenZZZ" style="display:none">



				        		<div class="input-group col-md-2 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">2.1</span>  
										</div>
							   
							      				<select class="form-control" id="plantel_b" name="plantel_b">
							  							
							  							<option selected disabled value="">Plantel...</option>
							  							<option disabled></option>

							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones1 = "SELECT * FROM tipo_plantel WHERE nombre_tipo != '.' ORDER BY nombre_tipo ASC";

								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones1['id_tipo']; ?>"><?php echo $row_datos_opciones1['nombre_tipo'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>
							   
							   </div>



							   <script type="text/javascript">	

								$('select[name=plantel_b]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#names_planteles_b').prop('required',true);
							        } else {
							            $('#names_planteles_b').prop('required',false);
							           
							        }
							    });		

							   </script> 



							   <div class="input-group col-md-4 mb-3">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">2.2</i></span>  
										</div>
<input type="text" maxlength="28" class="form-control " id="names_planteles_b" name="names_planteles_b" placeholder="Nombre del plantel..." aria-label="names_planteles" aria-describedby="names_planteles" >
							  </div>



							  <script type="text/javascript">	

								$('input[name=names_planteles_b]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#asignatura_otro_b').prop('required',true);
							        } else {
							            $('#asignatura_otro_b').prop('required',false);
							           
							        }
							    });		

							   </script> 




							  <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">2.3</i></span>  
										</div>							   
							      				<select class="form-control " id="asignatura_otro_b" name="asignatura_otro_b" >
							  							<option selected disabled value="">Asignatura que dicta…</option>
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

								$('select[name=asignatura_otro_b]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#grado_otro_b').prop('required',true);
							        } else {
							            $('#grado_otro_b').prop('required',false);
							           
							        }
							    });		

							   </script> 


							    <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">2.4</span>  
										</div>							   
							      				<select class="form-control " id="grado_otro_b" name="grado_otro_b" >
							  							<option selected disabled value="">Grado/Año...</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM grados WHERE nombre_grados != '.' ORDER BY nombre_grados ASC";
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



</div> <!-- cierre row otros colegios -->



<script type="text/javascript">


							   	$('select[name=grado_otro_b]').change(function () {
							        if ($(this).val() != '') {
							            $('#hiddenZZA').show();
							            
							        } else {
							            
							            $('#hiddenZZA').hide();
							        }
							    });											

							   </script>





<div class="form-row" id="hiddenZZA" style="display:none">






				        		<div class="input-group col-md-2 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">3.1</span>  
										</div>
							   
							      				<select class="form-control" id="plantel_c" name="plantel_c">
							  							
							  							<option selected disabled value="">Plantel...</option>
							  							<option disabled></option>

							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones1 = "SELECT * FROM tipo_plantel WHERE nombre_tipo != '.' ORDER BY nombre_tipo ASC";

								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones1['id_tipo']; ?>"><?php echo $row_datos_opciones1['nombre_tipo'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>
							   
							   </div>



							    <script type="text/javascript">	

								$('select[name=plantel_c]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#names_planteles_c').prop('required',true);
							        } else {
							            $('#names_planteles_c').prop('required',false);
							           
							        }
							    });		

							   </script> 



							   <div class="input-group col-md-4 mb-3">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">3.2</i></span>  
										</div>
<input type="text" maxlength="28" class="form-control " id="names_planteles_c" name="names_planteles_c" placeholder="Nombre del plantel..." aria-label="names_planteles" aria-describedby="names_planteles" >
							  </div>


							   <script type="text/javascript">	

								$('input[name=names_planteles_c]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#asignatura_otro_c').prop('required',true);
							        } else {
							            $('#asignatura_otro_c').prop('required',false);
							           
							        }
							    });		

							   </script> 




							  <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">3.3</i></span>  
										</div>							   
							      				<select class="form-control " id="asignatura_otro_c" name="asignatura_otro_c" >
							  							<option selected disabled value="">Asignatura que dicta…</option>
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

								$('select[name=asignatura_otro_c]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#grado_otro_c').prop('required',true);
							        } else {
							            $('#grado_otro_c').prop('required',false);
							           
							        }
							    });		

							   </script> 


							    <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">3.4</span>  
										</div>							   
							      				<select class="form-control " id="grado_otro_c" name="grado_otro_c" >
							  							<option selected disabled value="">Grado/Año...</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM grados WHERE nombre_grados != '.' ORDER BY nombre_grados ASC";
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



</div> <!-- cierre row otros colegios -->


<script type="text/javascript">


							   	$('select[name=grado_otro_c]').change(function () {
							        if ($(this).val() != '') {
							            $('#hiddenZZB').show();
							            
							        } else {
							            
							            $('#hiddenZZB').hide();
							        }
							    });											

							   </script>





<div class="form-row" id="hiddenZZB" style="display:none">

				        		<div class="input-group col-md-2 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">4.1</span>  
										</div>
							   
							      				<select class="form-control" id="plantel_d" name="plantel_d">
							  							
							  							<option selected disabled value="">Plantel...</option>
							  							<option disabled></option>

							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones1 = "SELECT * FROM tipo_plantel WHERE nombre_tipo != '.' ORDER BY nombre_tipo ASC";

								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones1['id_tipo']; ?>"><?php echo $row_datos_opciones1['nombre_tipo'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>
							   
							   </div>



							   <script type="text/javascript">	

								$('select[name=plantel_d]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#names_planteles_d').prop('required',true);
							        } else {
							            $('#names_planteles_d').prop('required',false);
							           
							        }
							    });		

							   </script> 



							   <div class="input-group col-md-4 mb-3">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">4.2</i></span>  
										</div>
<input type="text" maxlength="28" class="form-control " id="names_planteles_d" name="names_planteles_d" placeholder="Nombre del plantel..." aria-label="names_planteles" aria-describedby="names_planteles" >
							  </div>



							   <script type="text/javascript">	

								$('input[name=names_planteles_d]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#asignatura_otro_d').prop('required',true);
							        } else {
							            $('#asignatura_otro_d').prop('required',false);
							           
							        }
							    });		

							   </script> 




							  <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">4.3</i></span>  
										</div>							   
							      				<select class="form-control " id="asignatura_otro_d" name="asignatura_otro_d" >
							  							<option selected disabled value="">Asignatura que dicta…</option>
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

								$('select[name=asignatura_otro_d]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#grado_otro_d').prop('required',true);
							        } else {
							            $('#grado_otro_d').prop('required',false);
							           
							        }
							    });		

							   </script> 




							    <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">4.4</span>  
										</div>							   
							      				<select class="form-control " id="grado_otro_d" name="grado_otro_d" >
							  							<option selected disabled value="">Grado/Año...</option>
							  							<option disabled></option>

							  							<?php 
								                          include("../conectar.php");
								                          $queryopciones1 = "SELECT * FROM grados WHERE nombre_grados != '.' ORDER BY nombre_grados ASC";
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




</div> <!-- cierre row otros colegios -->