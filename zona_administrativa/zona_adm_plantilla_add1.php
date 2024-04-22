<div class="form-row">  <!-- datos nivel de estudio -->

						  		<div class="col-md-12 mt-2">

						  		<b class="text-info"> Estudios realizados: </b>

						<?php 
				          if ($estudios_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Almacenados.\">".$estudios_success."</i>"; }
				        ?>

				        <?php 
				          if ($estudios_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"No almacenados.\">".$estudios_danger."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->

							    </div>

						  	</div>



						  	<div class="form-row">

					         <div class="input-group col-md-4 mb-3">

										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">1.1</span>  
										</div>
							  
							      				<select class="form-control importantex" id="titulo1" name="titulo1" required>

							  							
							  							<option selected disabled value="">Principal...</option>   <!-- principal secundario terciario -->
							  							<option disabled></option>


							  							<?php do{?>                                

								<option value="<?php echo $row_datos_titulos['id_titulos']; ?>"><?php echo $row_datos_titulos['nombre_titulos']; ?></option>

                                <?php } while ($row_datos_titulos = mysqli_fetch_assoc($datos_titulos)); ?> 

													    
												</select>

							   
							   </div>  





							 <div class="input-group col-md-4 mb-3">

										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">1.2</span>  
										</div>
							  
							      				<select class="form-control importantex" id="mencion1" name="mencion1" required>

							  							
							  							<option selected disabled value="">Mención...</option>   <!-- principal secundario terciario -->
							  							<option disabled></option>


							  							<?php do{?>                                

								<option value="<?php echo $row_datos_menciones['id_mencion']; ?>"><?php echo $row_datos_menciones['nombre_mencion']; ?></option>

                                <?php } while ($row_datos_menciones = mysqli_fetch_assoc($datos_menciones)); ?> 

							  							
													    
												</select>

							   
							   </div>  




							   <div class="input-group col-md-4 mb-3">

										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">1.3</span>  
										</div>
							  
			<select class="form-control importantex" id="instituto1" name="instituto1" required>

							  							
							  							<option selected disabled value="">Instituto...</option>   <!-- principal secundario terciario -->
							  							<option disabled></option>


							  							<?php do{?>                                

								<option value="<?php echo $row_datos_instituto['id_instituto']; ?>"><?php echo $row_datos_instituto['nombre_instituto']; ?></option>

                                <?php } while ($row_datos_instituto = mysqli_fetch_assoc($datos_instituto)); ?> 
							  							
													    
												</select>

							   
							   </div>  




							   </div> <!-- cierre row -->

							


							   <script type="text/javascript">


							   	$('select[name=instituto1]').change(function () {
							        if ($(this).val() != '') {
							            $('#hiddenDiv').show();
							            
							        } else {
							            
							            $('#hiddenDiv').hide();
							        }
							    });											

							   </script>  





							 <div class="form-row" id="hiddenDiv" style="display:none">

							   <div class="input-group col-md-4 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">2.1</span>  
										</div>
							   
							      				<select class="form-control" id="titulo2" name="titulo2">

							      						<option selected disabled value="">Destacado...</option>   <!-- secundario terciario -->
							  							<option disabled></option>   
  
							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones = "SELECT * FROM plantilla_titulos WHERE nombre_titulos != '.' ORDER BY nombre_titulos ASC";

								                          $datos_opciones = mysqli_query($enlace, $queryopciones) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones = mysqli_fetch_assoc($datos_opciones))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones['id_titulos']; ?>"><?php echo $row_datos_opciones['nombre_titulos'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>
													    
												
							   
							   </div>								
						




							   <script type="text/javascript">	

								$('select[name=titulo2]').change(function () {
							        if ($(this).val() != '' ) {
							            
							            $('#mencion2').prop('required',true);
							        } else {
							            $('#mencion2').prop('required',false);
							           
							            
							        }
							    });		

							   </script>   



			<div class="input-group col-md-4 mb-3">

										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">2.2</span>      
										</div>
							  
							      				<select class="form-control" id="mencion2" name="mencion2">

							  							
							  							<option selected disabled value="">Mención...</option>   <!-- principal secundario terciario 26 -->
							  							<option disabled></option>


							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones = "SELECT * FROM plantilla_mencion WHERE nombre_mencion != '.' ORDER BY nombre_mencion ASC";

								                          $datos_opciones = mysqli_query($enlace, $queryopciones) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones = mysqli_fetch_assoc($datos_opciones))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones['id_mencion']; ?>"><?php echo $row_datos_opciones['nombre_mencion'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>

							   
							   </div>  


							   <script type="text/javascript">	

								$('select[name=mencion2]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#instituto2').prop('required',true);
							        } else {
							            $('#instituto2').prop('required',false);
							            
							        }
							    });		

							   </script>




							   <div class="input-group col-md-4 mb-3">

										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">2.3</span>  
										</div>
							  
							      				<select class="form-control" id="instituto2" name="instituto2">

							  							
							  							<option selected disabled value>Instituto...</option>   <!-- principal secundario terciario -->
							  							<option disabled></option>


							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones = "SELECT * FROM plantilla_instituto WHERE nombre_instituto != '.' ORDER BY nombre_instituto ASC";

								                          $datos_opciones = mysqli_query($enlace, $queryopciones) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones = mysqli_fetch_assoc($datos_opciones))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones['id_instituto']; ?>"><?php echo $row_datos_opciones['nombre_instituto'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>

							   
							   </div>  





							   </div> <!-- cierre row -->



							   <script type="text/javascript">


							   	$('select[name=instituto2]').change(function () {
							        if ($(this).val() != '') {
							            $('#hiddenDiv2').show();
							            
							        } else {
							            
							            $('#hiddenDiv2').hide();
							        }
							    });											

							   </script>





							 <div class="form-row" id="hiddenDiv2" style="display:none">


							   <div class="input-group col-md-4 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">3.1</span>  
										</div>
							   
							      				<select class="form-control" id="titulo3" name="titulo3">

							      						<option selected disabled value>Complementario...</option>   <!-- secundario terciario -->
							  							<option disabled></option>

							      						<?php 

								                          include("../conectar.php");

								                          $queryopciones = "SELECT * FROM plantilla_titulos WHERE nombre_titulos != '.' ORDER BY nombre_titulos ASC";

								                          $datos_opciones = mysqli_query($enlace, $queryopciones) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones = mysqli_fetch_assoc($datos_opciones))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones['id_titulos']; ?>"><?php echo $row_datos_opciones['nombre_titulos'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>
							   
							   </div>


							   <script type="text/javascript">	

								$('select[name=titulo3]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#mencion3').prop('required',true);
							        } else {
							            $('#mencion3').prop('required',false);
							           
							        }
							    });		

							   </script>



							   							 <div class="input-group col-md-4 mb-3">

										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">3.2</span>  
										</div>
							  
							      				<select class="form-control" id="mencion3" name="mencion3">

							  							
							  							<option selected disabled value>Mención...</option>   <!-- principal secundario terciario -->
							  							<option disabled></option>


							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones = "SELECT * FROM plantilla_mencion WHERE nombre_mencion != '.' ORDER BY nombre_mencion ASC";

								                          $datos_opciones = mysqli_query($enlace, $queryopciones) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones = mysqli_fetch_assoc($datos_opciones))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones['id_mencion']; ?>"><?php echo $row_datos_opciones['nombre_mencion'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>

							   
							   </div>  


  							<script type="text/javascript">	

								$('select[name=mencion3]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#instituto3').prop('required',true);
							        } else {
							            $('#instituto3').prop('required',false);
							            
							        }
							    });		

							   </script>



							   <div class="input-group col-md-4 mb-3">

										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">3.3</span>  
										</div>
							  
							      				<select class="form-control" id="instituto3" name="instituto3">

							  							
							  							<option selected disabled value>Instituto...</option>   <!-- principal secundario terciario -->
							  							<option disabled></option>


							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones = "SELECT * FROM plantilla_instituto WHERE nombre_instituto != '.' ORDER BY nombre_instituto ASC";

								                          $datos_opciones = mysqli_query($enlace, $queryopciones) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones = mysqli_fetch_assoc($datos_opciones))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones['id_instituto']; ?>"><?php echo $row_datos_opciones['nombre_instituto'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>

							   
							   </div>  

			   	

						  	</div> <!-- cierre row -->