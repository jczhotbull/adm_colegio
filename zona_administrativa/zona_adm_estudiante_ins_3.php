

<div class="form-row ">  <!-- datos del estudiante -->

						  		<div class="col-md-12 mt-2 mb-1">

						  		<b class="text-info">Datos del representado N°3: </b>

						<?php 

				          if ($datosES3_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Estudiante Registrado.\">".$datosES3_success."</i>"; }
				        ?>

				        <?php 

				          if ($datosES3_repre_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Relación realizada.\">".$datosES3_repre_success."</i>"; }
				        ?>



				        <?php 
				          if ($datosES3_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Estudiante no registrado.\">".$datosES3_danger."</i>"; }
				        ?>

				        <?php 
				          if ($datosES3_repre_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Relación no realizada.\">".$datosES3_repre_danger."</i>"; }
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
	<input  class="item-img_EC center-block punterodd" type="file"  accept="image/*"  name="file_photo_EC"  id="file_photo_EC"  /> 
										 
</div>

									</div> 

									
									<div class="col-2 col-md-2 mt-2">


									<?php 
							          if ($foto_successC!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto cargada.\">".$foto_successC."</i>"; }
							        ?>

							        <?php 
							          if ($foto_dangerC!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto no cargada.\">".$foto_dangerC."</i>"; }
							        ?>
							            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->						        
									
									</div> 


									


									</div>  <!-- cierre primer row  -->

<div style=" height: 100%; line-height: 200px;">
									<div style=" vertical-align: middle; text-align: center;">

	                              <img  src="../0 Croppie/foto_estu3<?php echo $fotPP;?>.png?nocache=<?php echo time(); ?>"

				 class="fotologuitocol img-responsive img-thumbnail" style=" max-height: 214px; padding-bottom: 5px;"

				  id=""  onerror="this.src='../zz_fotos_p/ZZvacioC.jpg';"/>    

								    </div>
										
  </div>


								</div>  <!-- cierre col 12 que define todo lo que esta adentro -->

                                  </div>  <!-- cierre div del borde -->





<div class="form-row mt-1  ">  <!-- cargar ci estudiante act1  -->
	<div class="col-lg-12 ">
			<div class="card border-info" style=" height: 220px; padding-bottom: 5px;">			                	
					                  	
				<div class="col-lg-12 ">
					<div class="form-row  "> 
					    <div class="col-10 col-md-10 mt-1">
					        <div class="upload-btn-wrapper">
								<button class="btnX">Cargar <i class="fas fa-search fa-lg"></i></button>
			                    <input type="file" class="item-img_B_act3 center-block punterodd" accept="image/*"  name="file_photo_B_act3"   id="file_photo_B_act3"  />
							</div>	
						</div> 

						<div class="col-2 col-md-2 mt-2">

											<?php 
									          if ($ci_success_act3!="")
					{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Documento est_act3 cargado.\">".$ci_success_act3."</i>"; }
									        ?>

									        <?php 
									          if ($ci_danger_act3!="")
					{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Documento est_act3 no cargado.\">".$ci_danger_act3."</i>"; }
									        ?>
									            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->				        
											
						</div> 									
					
					</div>  <!-- cierre primer row  -->

					<div style=" height: 100%; line-height: 150px;">
						<div style=" vertical-align: middle; text-align: center;">

		<img src="../0 Croppie/ci_est_act3<?php echo $fotPP;?>.png?nocache=<?php echo time(); ?>" alt="..." class="img-thumbnail" style=" max-height: 170px; padding-bottom: 5px;"   onerror="this.src='../zz_fotos_p/ZZvacio_act3.jpg';" > 

						</div>										
		            </div>


				</div>  <!-- cierre col 12 que define todo lo que esta adentro -->

			</div>   <!-- cierre card border  -->
	</div>
</div>   <!-- cierre cargar ci estudiante act1  -->






	
</div> <!--  foto estudiante 3 -->	






<div class="col-md-10">	 

<div class="form-row margencito">


			<div class="input-group input-group-sm col-md-3 mb-2 ">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-user-tag">&nbsp;&nbsp;</i></span>  
			</div>
			<input   maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" class="form-control  importantex" id="expediente_est3" name="expediente_est3" placeholder="Expediente..."
			<?php echo $requerido3; ?> >
			</div>



			<div class="input-group input-group-sm col-md-3 mb-2 ">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-file-alt">&nbsp;&nbsp;</i></span>  
			</div>
			<input  maxlength="39" type="text" class="form-control  importantex" id="nombres_est3" name="nombres_est3" placeholder="Nombre(s)..."
			<?php echo $requerido3; ?> >
			</div>


			<div class="input-group input-group-sm col-md-3 mb-2 ">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="far fa-file-alt"></i></span>  
			</div>
			<input maxlength="39" type="text" class="form-control  importantex" id="apellidos_est3" name="apellidos_est3" placeholder="Apellido(s)..."
			<?php echo $requerido3; ?> >
			</div>





<div class="input-group input-group-sm col-md-3 mb-2 ">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-venus-mars "></i></span>  
										</div>							   
							      				<select class="form-control importantex" id="genero_est3" name="genero_est3" <?php echo $requerido3; ?> >
							  							
							  							<option selected disabled value="">Sexo:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_sexo3['id_sexo']; ?>"><?php echo $row_datos_sexo3['nombre_sexo']; ?></option>

                                <?php } while ($row_datos_sexo3 = mysqli_fetch_assoc($datos_sexo3)); ?> 


													    
												</select>
							   
</div>









</div>
							
	


<div class="form-row">


	<div class="input-group input-group-sm col-md-3 mb-2 ">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fa fa-birthday-cake "></i></span>  
									</div>
<input type="date" class="form-control importantex" id="fecha_nac_est3" name="fecha_nac_est3" <?php echo $requerido3; ?> >
			</div>




<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" ><i class="fas fa-map-pin "></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="ciudad_est3" name="ciudad_est3" <?php echo $requerido3; ?> >
							  							
							  							<option selected disabled value="">Lugar de Nacimiento:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_ciudades3['id_ciudad']; ?>"><?php echo $row_datos_ciudades3['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudades3 = mysqli_fetch_assoc($datos_ciudades3)); ?> 
													    
												</select>
							   
</div>


			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" ><i class="far fa-map"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="estado_est3" name="estado_est3" <?php echo $requerido3; ?> >
							  							
							  							<option selected disabled value="">Entidad Federal:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_estados3['id_estado']; ?>"><?php echo $row_datos_estados3['nombre_estado']; ?></option>

                                <?php } while ($row_datos_estados3 = mysqli_fetch_assoc($datos_estados3)); ?> 
													    
												</select>
							   
			</div>




 <div class="input-group input-group-sm col-md-3 mb-2">

<div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-map-pin">&nbsp;&nbsp;</i></span>  
      </div>

	 <select class="form-control form-control-sm" id="municipio_est3" name="municipio_est3" <?php echo $requerido3; ?> >
<option selected disabled value="">Municipio:</option>
                              <option disabled></option>

                                <?php 
                          include("../conectar.php");
              $querymod28_est3 = "SELECT * FROM d_municipio WHERE nombre_municipio != '.' ORDER BY nombre_municipio ASC";
              $datos_mod28_est3 = mysqli_query($enlace, $querymod28_est3) or die(mysqli_error());
              $row_datos_mod28_est3 = mysqli_num_rows($datos_mod28_est3);                          

                          while ($row_datos_mod28_est3 = mysqli_fetch_assoc($datos_mod28_est3))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod28_est3['nombre_municipio']; ?>"><?php echo $row_datos_mod28_est3['nombre_municipio'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);
                          ?>   
                            </select>   
</div>

		



			


</div>  <!-- cierre row -->




<div class="form-row">


	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-globe"></i></span>  
										</div>
							   
							      	<select class="form-control importantex" id="pais_nac_est3" name="pais_nac_est3" <?php echo $requerido3; ?> >
							  							
							  							<option selected disabled value="">Nacionalidad:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_paises3['id_pais']; ?>"><?php echo $row_datos_paises3['nombre_pais']; ?></option>

                                <?php } while ($row_datos_paises3 = mysqli_fetch_assoc($datos_paises3)); ?> 
													    
												</select>
							   
			</div>





	<div class="input-group input-group-sm col-md-2 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="far fa-id-card "></i></span>  
									</div>
<input  maxlength="12" onkeydown="javascript:stripspaces(this)" type="text" class="form-control" id="cedula_est3" name="cedula_est3" placeholder="Cedula ó cedula escolar..." >
			</div>




			<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-columns"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="religion_act3" name="religion_act3" <?php echo $requerido3; ?> >
							  							
							  							<option selected disabled value="">Religión:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_religion3['id_religion']; ?>"><?php echo $row_datos_religion3['tipo_religion']; ?></option>

                                <?php } while ($row_datos_religion3 = mysqli_fetch_assoc($datos_religion3)); ?> 
													    
												</select>
							   
			</div>


			


			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fab fa-medrt"></i></span>  
										</div>
							   
							      		<select class="form-control importantex" id="padece_act3" name="padece_act3" <?php echo $requerido3; ?> >
							  							
							  							<option selected disabled value="">Presenta o padece de:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_padece3['id_medico']; ?>"><?php echo $row_datos_padece3['nombre_medico']; ?></option>

                                <?php } while ($row_datos_padece3 = mysqli_fetch_assoc($datos_padece3)); ?> 
													    
												</select>
							   
			</div>




			<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fas fa-syringe"></i></span>  
										</div>
							   
							      		<select class="form-control importantex" id="sangre_act3" name="sangre_act3" <?php echo $requerido3; ?> >
							  							
							  							<option selected disabled value="">Tipo de sangre:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_sangres3['id_sangre']; ?>"><?php echo $row_datos_sangres3['tipo_sangre']; ?></option>

                                <?php } while ($row_datos_sangres3 = mysqli_fetch_assoc($datos_sangres3)); ?> 
													    
												</select>
							   
			</div>





</div> <!-- cierre row -->


<div class="form-row">  <!-- row cero  nuevo añadido-->

 <div class="input-group input-group-sm col-md-2 mb-2">  
<div class="input-group-prepend">
        <span class="input-group-text alert-info" id="basic-addon1">&nbsp;<i class="fas fa-home">&nbsp;&nbsp;</i></span>  
      </div>

   <select class="form-control form-control-sm" id="mod_vive_con_estud_act3" name="mod_vive_con_estud_act3" <?php echo $requerido3; ?> >
<option selected disabled value="">Vive con su:</option>
                              <option disabled></option>

                                <?php 
                          include("../conectar.php");
              $querymod258_act3 = "SELECT * FROM d_vive_con WHERE nombre_vive_con != '.' ORDER BY nombre_vive_con ASC";
              $datos_mod258_act3 = mysqli_query($enlace, $querymod258_act3) or die(mysqli_error());
              $row_datos_mod258_act3 = mysqli_num_rows($datos_mod258_act3);                          

                          while ($row_datos_mod258_act3 = mysqli_fetch_assoc($datos_mod258_act3))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod258_act3['nombre_vive_con']; ?>"><?php echo $row_datos_mod258_act3['nombre_vive_con'];?></option>
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

   <select class="form-control form-control-sm" id="mod_traslada_estud_act3" name="mod_traslada_estud_act3" <?php echo $requerido3; ?> >
<option selected disabled value="">Se traslada en:</option>
                              <option disabled></option>

                                <?php 
                          include("../conectar.php");
              $querymod247_act3 = "SELECT * FROM d_traslada_en WHERE nombre_traslada_en != '.' ORDER BY nombre_traslada_en ASC";
              $datos_mod247_act3 = mysqli_query($enlace, $querymod247_act3) or die(mysqli_error());
              $row_datos_mod247_act3 = mysqli_num_rows($datos_mod247_act3);                          

                          while ($row_datos_mod247_act3 = mysqli_fetch_assoc($datos_mod247_act3))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod247_act3['nombre_traslada_en']; ?>"><?php echo $row_datos_mod247_act3['nombre_traslada_en'];?></option>
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

                      <input maxlength="29" type="text" class="form-control form-control-sm " id="mod_alergias_estud_act3" name="mod_alergias_estud_act3"
 <?php echo $requerido3; ?> >   
                                        
                 </div>

                 <div class="input-group input-group-sm col-md-4 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><b>A padecido de:</b></span> 
</div>

  <input maxlength="59" type="text" class="form-control form-control-sm " id="mod_padecio_estud_act3" name="mod_padecio_estud_act3"
<?php echo $requerido3; ?> > 
       
        </div>    

        </div>     <!-- aqui termina -->


<div class="form-row">  <!-- row uno  nuevo añadido-->

 <div class="input-group input-group-sm col-md-3 mb-2">   

<div class="input-group-prepend">   
        <span class="input-group-text alert-info" id="basic-addon1">&nbsp;<i class="fas fa-sign-out-alt">&nbsp;&nbsp;</i></span>  
      </div>

   <select class="form-control form-control-sm" id="mod_se_retira_con_act3" name="mod_se_retira_con_act3" <?php echo $requerido3; ?> >
<option selected disabled value="">Se retira del colegio con/en:</option>
                              <option disabled></option>

                                <?php 
                          include("../conectar.php");
              $querymod269_act3 = "SELECT * FROM d_se_retira WHERE nombre_se_retira != '.' ORDER BY nombre_se_retira ASC";
              $datos_mod269_act3 = mysqli_query($enlace, $querymod269_act3) or die(mysqli_error());
              $row_datos_mod269_act3 = mysqli_num_rows($datos_mod269_act3);                          

                          while ($row_datos_mod269_act3 = mysqli_fetch_assoc($datos_mod269_act3))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod269_act3['nombre_se_retira']; ?>"><?php echo $row_datos_mod269_act3['nombre_se_retira'];?></option>
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
                            <input maxlength="59" type="text" class="form-control form-control-sm " id="mod_control_med_act3" name="mod_control_med_act3"
>   
                                      
</div>

<div class="input-group input-group-sm col-md-3 mb-2">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i>Cuales medicamentos recibe:</i></span>  
                    </div>  
                            <input maxlength="29" type="text" class="form-control form-control-sm " id="mod_medicamentos_act3" name="mod_medicamentos_act3">   
                                      
</div>


      <div class="input-group input-group-sm col-md-3 mb-2">

<div class="input-group-prepend">
  <span class="input-group-text alert-danger" id="basic-addon1"><i class="fas fa-at"></i></span> 
</div>

<input maxlength="59"  type="email" class="form-control form-control-sm " id="mod_email_estu_act3" name="mod_email_estu_act3"> 
       
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

     <select class="form-control form-control-sm" id="mod_v1_act3" name="mod_v1_act3">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>


    <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>BCG:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v2_act3" name="mod_v2_act3">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>


    <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Difteria:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v3_act3" name="mod_v3_act3">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>



      <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Anti-Influenza:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v4_act3" name="mod_v4_act3">

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

     <select class="form-control form-control-sm" id="mod_v5_act3" name="mod_v5_act3">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option> 
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>TosFerina (DTpa):</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v6_act3" name="mod_v6_act3">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option> 
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>HB:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v7_act3" name="mod_v7_act3">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>                                                                      
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Tétanos:</i></span>  
                        </div>  
     <select class="form-control form-control-sm" id="mod_v8_act3" name="mod_v8_act3">

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

     <select class="form-control form-control-sm" id="mod_v9_act3" name="mod_v9_act3">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Rubéola:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v10_act3" name="mod_v10_act3">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Parotiditis (SRP):</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v11_act3" name="mod_v11_act3">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option> 
                                </select>                                                                      
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Covid-19:</i></span>  
                        </div>  
     <select class="form-control form-control-sm" id="mod_v12_act3" name="mod_v12_act3">

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

     <select class="form-control form-control-sm" id="mod_v13_act3" name="mod_v13_act3">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option> 
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Fiebre Amarilla (FA):</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v14_act3" name="mod_v14_act3">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>  
                                                                    
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Sarampión:</i></span>  
                        </div>  

     <select class="form-control form-control-sm" id="mod_v15_act3" name="mod_v15_act3">

    <option value="No" selected >No</option>
    <option value="Si" >Si</option>  
                                </select>                                                                      
    </div>

        <div class="input-group input-group-sm col-md-3 mb-2">
                    <div class="input-group-prepend">
                          <span class="input-group-text alert-success" id="basic-addon1"><i>Otra(s):</i></span>  
                        </div>
<input maxlength="29" type="text" class="form-control form-control-sm" id="v_otra_act3" name="v_otra_act3" >  
                                                                   
    </div>

</div>     <!-- aqui quinto -->


<div class="form-row ">  

<div data-toggle="tooltip" data-placement="right" title="Borrar foto y/o documentos cargados del estudiante 3.">

<button type="button" class="ml-1 mt-1 btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#borrar_fotos_CC">
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



<div class="mt-3 ml-1 mr-1 border border-success rounded p-2" style="background-color:#E0FAE0">
<div class="form-row ">  <!-- procedencia -->

								<div class="col-md-12 mt-1">

						  		<b class="text-success"> Sobre el representado: </b><span class="text-muted">(Llenar solamente si proviene de cursar en otro plantel)</span>								    

						<?php 


				          if ($procede_success3!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registrado.\">".$procede_success3."</i>"; }
				        ?>

				        <?php 
				          if ($procede_danger3!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"No registrados.\">".$procede_danger3."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->


							    </div>

</div>



<div class="form-row margencito">  <!-- viene de otro plantel -->

	<div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i><b>Proviene de otro plantel?</b></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="viene_otro3" name="viene_otro3">
							  							
							  				   <option selected value="2">No</option>
							  							<option value="1">Si</option>
												</select>
							   
	</div>


			<div class="input-group input-group-sm col-md-5 mb-2">
			<div class="input-group-prepend">
				<span class="input-group-text alert-success" id="basic-addon1">&nbsp;<i class="fas fa-file-alt">&nbsp;&nbsp;</i></span>  
			</div>
			<input maxlength="38" type="text" class="form-control" id="plantel_pro3" name="plantel_pro3"
			placeholder="Nombre del plantel..." >
			</div>



			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-map-pin "></i></span>  
										</div>
							   
							      				<select class="form-control" id="esc_ciudad_est3" name="esc_ciudad_est3">
							  							
							  							<option selected disabled value="">Lugar:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_ciudadesP3['id_ciudad']; ?>"><?php echo $row_datos_ciudadesP3['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudadesP3 = mysqli_fetch_assoc($datos_ciudadesP3)); ?> 
													    
												</select>
							   
			</div>


</div>



<div class="form-row">
			
			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i>Grado o año cursado:</i></span>  
										</div>
							   
					<select class="form-control" id="grado_curso_otro3" name="grado_curso_otro3">
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_gradosP3['id_grado']; ?>"><?php echo $row_datos_gradosP3['nombre_grados']; ?></option>

                                <?php } while ($row_datos_gradosP3 = mysqli_fetch_assoc($datos_gradosP3)); ?> 
													    
												</select>
							   
			</div>



			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i><b>Ciclo cursado:</b></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="cursaba_est3" name="cursaba_est3">
							  							
							  				  
<option value="<?php echo $row_datos_periodo_viejo['id_periodo_es']; ?>" selected>
  <?php echo $row_datos_periodo_viejo['periodo_escolar']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
							  							

                               <?php do{?>                                    

<option value="<?php echo $row_datos_periodo_old3['id_periodo_es']; ?>"><?php echo $row_datos_periodo_old3['periodo_escolar']; ?></option>

                                <?php } while ($row_datos_periodo_old3 = mysqli_fetch_assoc($datos_periodo_old3)); ?> 
													    
												</select>
							   
			</div>


			



			<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i>Estaba repitiendo el año?</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="old_repite_otro3" name="old_repite_otro3">
							  							
							  				   <option selected value="2">No</option>
							  							<option value="1">Si</option>
												</select>
							   
			</div>


			 <div class="input-group input-group-sm col-md-3 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-danger" id="basic-addon1"><i>Áreas ó Asignat. Pendientes:</i></span>  
                  </div>
     
<input type="text" class="form-control form-control-sm" id="mod_areas_pendientes3" name="mod_areas_pendientes3"  >
        </div>



</div>
</div> <!-- cierre borde-->




<div class="form-row ">  <!-- actuacion actual -->

								<div class="col-md-12 mt-3 ml-1 mb-2">

						  		<b class="text-info">  Actuación actual del alumno: </b>	 						    

						<?php 

				          if ($actua_success3!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Actuación registrada.\">".$actua_success3."</i>"; }
				        ?>

				        <?php 
				          if ($actua_danger3!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Actuación no registrada.\">".$actua_danger3."</i>"; }
				        ?>


				         <?php 
				          if ($act_hist_ES3_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Historial añadido.\">".$act_hist_ES3_success."</i>"; }
				        ?>

				        <?php 
				          if ($act_hist_ES3_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Historial no añadido.\">".$act_hist_ES3_danger."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->

							    </div>

</div>


<div class="form-row">


<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-danger" id="basic-addon1">&nbsp;<i>Año escolar:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="cursa_est3" name="cursa_est3">



<option selected disabled></option>

                                <optgroup label="Seleccionar...">
                                <option disabled></option>
							  							

                               <?php do{?>                                    

<option value="<?php echo $row_datos_periodo_act3['id_periodo_es']; ?>"><?php echo $row_datos_periodo_act3['periodo_escolar']; ?></option>

                                <?php } while ($row_datos_periodo_act3 = mysqli_fetch_assoc($datos_periodo_act3)); ?> 
													    
												</select>
							   
</div>






	


	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>Grado o año:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="grado_act3" name="grado_act3" <?php echo $requerido3; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_gradosA3['id_grado']; ?>"><?php echo $row_datos_gradosA3['nombre_grados']; ?></option>

                                <?php } while ($row_datos_gradosA3 = mysqli_fetch_assoc($datos_gradosA3)); ?> 
													    
												</select>
							   
	</div>


	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>Repite?:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="repite_actual3" name="repite_actual3">
							  							
							  				   <option selected value="2">No</option>
							  							<option value="1">Si</option>
												</select>
							   
	</div>












	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>Edad:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="edad_act3" name="edad_act3" <?php echo $requerido3; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_edad3['id_edad']; ?>"><?php echo $row_datos_edad3['nombre_edad']; ?></option>

                                <?php } while ($row_datos_edad3 = mysqli_fetch_assoc($datos_edad3)); ?> 
													    
												</select>
							   
	</div>


</div>





<div class="form-row">

	<div class="input-group input-group-sm col-md-5 mb-2">
			<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1"><i>Fecha de inscripción:</i></span>  
			</div>
			<input type="date" class="form-control importantex" id="fecha_ins_act3" name="fecha_ins_act3" <?php echo $requerido3; ?>>
	</div>  




	<div class="input-group input-group-sm col-md-7 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>Asignar una sección momentanea:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="seccion_act3" name="seccion_act3" <?php echo $requerido3; ?>>
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_seccion3['id_seccion']; ?>"><?php echo $row_datos_seccion3['nombre_seccion']; ?></option>

                                <?php } while ($row_datos_seccion3 = mysqli_fetch_assoc($datos_seccion3)); ?> 
													    
												</select>
							   
	</div>




</div>






<div class="form-row">

	<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>T. Camisa:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="talla_cam3" name="talla_cam3" <?php echo $requerido3; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                 

<option value="<?php echo $row_datos_camisas3['id_camisa']; ?>"><?php echo $row_datos_camisas3['talla_camisa']; ?></option>

                                <?php } while ($row_datos_camisas3 = mysqli_fetch_assoc($datos_camisas3)); ?> 
													    
												</select>
							   
	</div>



	<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>T. Pantalón:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="talla_pant3" name="talla_pant3" <?php echo $requerido3; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_pantalon3['id_pantalon']; ?>"><?php echo $row_datos_pantalon3['nombre_pantalon']; ?></option>

                                <?php } while ($row_datos_pantalon3 = mysqli_fetch_assoc($datos_pantalon3)); ?> 
													    
												</select>
							   
	</div>



	<div class="input-group input-group-sm col-md-2 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i>T. Zapatos:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="talla_zap3" name="talla_zap3" <?php echo $requerido3; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_zapatos3['id_zapato']; ?>"><?php echo $row_datos_zapatos3['talla_zapato']; ?></option>

                                <?php } while ($row_datos_zapatos3 = mysqli_fetch_assoc($datos_zapatos3)); ?> 
													    
												</select>
							   
	</div>



	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">&nbsp;<i>Peso: (kilogramos)</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="peso_act3" name="peso_act3" <?php echo $requerido3; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_peso3['id_peso']; ?>"><?php echo $row_datos_peso3['nombre_peso']; ?></option>

                                <?php } while ($row_datos_peso3 = mysqli_fetch_assoc($datos_peso3)); ?> 
													    
												</select>
							   
	</div>




	<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">&nbsp;<i>Estatura: (centímetros)</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="estatura_act3" name="estatura_act3" <?php echo $requerido3; ?> >
							  							
							  				  <option selected disabled></option>
							  							

                               <?php do{?>                                

<option value="<?php echo $row_datos_altura3['id_altura']; ?>"><?php echo $row_datos_altura3['nombre_altura']; ?></option>

                                <?php } while ($row_datos_altura3 = mysqli_fetch_assoc($datos_altura3)); ?> 
													    
												</select>
							   
	</div>







</div>




<div class="form-row ">  <!-- actuacion actual -->

								<div class="col-md-12 mt-3 ml-1 mb-2">

						  		<b class="text-info">  Observaciones: </b>	 						    

						<?php 


				          if ($obs_success3!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Observaciones registrada.\">".$obs_success3."</i>"; }
				        ?>

				        <?php 
				          if ($obs_danger3!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Observaciones no registrada.\">".$obs_danger3."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->


							    </div>

</div>


<div class="form-row ">

				        		<div class="col-md-12 mb-3">

				        		<textarea maxlength="750" class="form-control" id="obs_text3" name="obs_text3" rows="3"></textarea>

				        		 <span id="chars3">750</span> caracteres restantes.

				        	    </div>

</div> <!-- cierre row  de obs -->


<script type="text/javascript">
	
var maxLength3 = 750;
$('#obs_text3').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength3-length;
  $('#chars3').text(length);
});

</script>








