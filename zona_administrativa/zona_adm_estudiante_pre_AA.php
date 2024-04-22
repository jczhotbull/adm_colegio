<?php



// estudiante 1
$num_cedula = mysqli_real_escape_string($enlace,$_POST['cedula']);

			$genero_est1 = $_POST["genero_est1"];
			$ciudad_est1 = $_POST["ciudad_est1"];
			$estado_est1 = $_POST["estado_est1"];
			$pais_nac_est1 = $_POST["pais_nac_est1"];
			$religion_act1 = $_POST["religion_act1"];
			$padece_act1 = $_POST["padece_act1"];
			$sangre_act1 = $_POST["sangre_act1"];	

			$mod_email_estu_act1 = mysqli_real_escape_string($enlace,$_POST['mod_email_estu_act1']);

		$mod_se_retira_con_act1 = mysqli_real_escape_string($enlace,$_POST['mod_se_retira_con_act1']);
 		$mod_control_med_act1 = mysqli_real_escape_string($enlace,$_POST['mod_control_med_act1']);
 		$v_otra_act1 = mysqli_real_escape_string($enlace,$_POST['v_otra_act1']);

 		$v1_act1 = $_POST["mod_v1_act1"];  $v2_act1 = $_POST["mod_v2_act1"];  $v3_act1 = $_POST["mod_v3_act1"];  $v4_act1 = $_POST["mod_v4_act1"];
 		$v5_act1 = $_POST["mod_v5_act1"];  $v6_act1 = $_POST["mod_v6_act1"];  $v7_act1 = $_POST["mod_v7_act1"];  $v8_act1 = $_POST["mod_v8_act1"];
 		$v9_act1 = $_POST["mod_v9_act1"];  $v10_act1 = $_POST["mod_v10_act1"];  $v11_act1 = $_POST["mod_v11_act1"];  $v12_act1 = $_POST["mod_v12_act1"];
 		$v13_act1 = $_POST["mod_v13_act1"];  $v14_act1 = $_POST["mod_v14_act1"];  $v15_act1 = $_POST["mod_v15_act1"];	

 		$mod_medicamentos_act1 = $_POST["mod_medicamentos_act1"];	

$query_ES_AA = "INSERT INTO reg_estudiantes(estu_expediente, nombre_estu, apellidos_estu, nacimiento_estu, id_sexo, id_ciudad,
			                                id_estado, id_pais, id_religion, ci_estu, id_medico, id_sangre, email_estu, municipio_est, vive_con, se_traslada_en, enf_padecidas, alergico_a, se_retira_con, control_med, v1, v2, v3, v4, v5, v6, v7, v8, v9, v10, v11, v12, v13, v14, v15, v_otra, medicamentos)  

							VALUES (   '".mysqli_real_escape_string($enlace,$_POST['expediente_est1'])."'          ,
							           '".mysqli_real_escape_string($enlace,$_POST['nombres_est1'])."'            ,
									   '".mysqli_real_escape_string($enlace,$_POST['apellidos_est1'])."'          ,
									   '".mysqli_real_escape_string($enlace,$_POST['fecha_nac_est1'])."'        ,

										'$genero_est1', '$ciudad_est1', '$estado_est1', '$pais_nac_est1', '$religion_act1',

									   '".mysqli_real_escape_string($enlace,$_POST['cedula_est1'])."'          ,									   

										'$padece_act1', '$sangre_act1', '$mod_email_estu_act1', '".mysqli_real_escape_string($enlace,$_POST['municipio_est1'])."'    ,

										'".mysqli_real_escape_string($enlace,$_POST['mod_vive_con_estud_act1'])."'          ,
							           '".mysqli_real_escape_string($enlace,$_POST['mod_traslada_estud_act1'])."'            ,
									   '".mysqli_real_escape_string($enlace,$_POST['mod_padecio_estud_act1'])."'          ,
									   '".mysqli_real_escape_string($enlace,$_POST['mod_alergias_estud_act1'])."'         ,

									   '$mod_se_retira_con_act1', '$mod_control_med_act1',
									   '$v1_act1', '$v2_act1', '$v3_act1', '$v4_act1', '$v5_act1', '$v6_act1', '$v7_act1', '$v8_act1', '$v9_act1',
									   '$v10_act1', '$v11_act1', '$v12_act1', '$v13_act1', '$v14_act1', '$v15_act1',

									   '$v_otra_act1', '$mod_medicamentos_act1'


										 )";


				if (!mysqli_query($enlace,$query_ES_AA))  // si no logro ingresar el estudiante 1
							{
							$datosES1_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$errorZ="- Se han suscitado diversos errores (E1a), consulte las alertas visuales y contacte al Ing. ";
							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro del estudiante 1

				            $datosES1_success="<i class=\"fas fa-check-circle fa-lg\"></i>";  // coloca success al lado de estu 1
				            $estu1_id = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado es decir el del estudiante 1



				             $query_pagAA = "INSERT INTO reg_pagos(id_del_estud, nota_principal) VALUES ('$estu1_id', NULL)";

				           if (!mysqli_query($enlace,$query_pagAA))  
								{
$errorZ.="- Error en crear historial AA. ";

$sqlAAAA = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu1_id' "; 

								if (mysqli_query($enlace,$sqlAAAA))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorA = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}


								mysqli_close($enlace); 
								}




				else {

								$id_pago_AA = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado		


							$query_AA_repre = "INSERT INTO reg_estu_repre_all(id_repre, id_estu) VALUES ( '$repre_id', '$estu1_id')";



								if (!mysqli_query($enlace,$query_AA_repre))  // si no logro asociar el estudiante 1 con su representante
								{
								$datosES1_repre_danger="<i class=\"fas fa-user-friends fa-lg\"></i>";  // coloca danger al lado de estu repre 1
								$errorZ="- Se han suscitado diversos errores (E1b), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 1.


								$sqlAAAA = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu1_id' "; 

								if (mysqli_query($enlace,$sqlAAAA))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorA = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}


								mysqli_close($enlace); 
								}
						

					else
					            {   // proceso de asociacion correcto
			
			 $datosES1_repre_success="<i class=\"fas fa-user-friends fa-lg\"></i>";  // coloca success al lado de estu repre 1    
								

					            	clearstatcache();
									$filename_estu1 = '../0 Croppie/foto_estu1' .$fotPP. '.png';
									$foto_estu1_info ="0";

						/*new*/  	$filename_ci_estu1 = '../0 Croppie/ci_est_act1' .$fotPP. '.png';
						/*new*/		$ci_estu1_info ="0";

									$expediente1 = $_POST['expediente_est1'];


															if (file_exists($filename_estu1 ))     // de haber una foto le cambia el nombre y la mueve a otro lugar
																		{
																			$foto_estu1_info ="1";

																			$image_estu1 = imagecreatefrompng("../0 Croppie/foto_estu1" .$fotPP.  ".png");  
																				           unlink("../0 Croppie/foto_estu1" .$fotPP.  ".png");
																				           imagejpeg($image_estu1,"../0 Croppie/foto_estu1" .$fotPP.  ".png",90); // comprimer la imagen  
																					
																					$ext_estu = 'png';
																					
																					/* $newfilename = '../zz_fotos_l/logocropx.png'; */

																					$newfilename_estu1 = "../zz_fotos_estudiantes/".$estu1_id."_".$expediente1.".".$ext_estu;

																						if(rename($filename_estu1,$newfilename_estu1))
																		{	

															$query_foto_estu1 = "UPDATE reg_estudiantes SET foto_estu = '$newfilename_estu1' WHERE id_estud='$estu1_id' LIMIT 1 ";					

																				if (!mysqli_query($enlace,$query_foto_estu1))      // si no ha logrado ingresar la foto
																							   {

																			   $foto_dangerA="<i class=\"fas fa-times-circle fa-lg\"></i>";  // ha fallado	
																			   $foto_estu1_info ="0";
																			   unlink($newfilename_estu1);

															                         
																							   }

																				else {
																				$foto_successA="<i class=\"far fa-image fa-lg\"></i>";   // coloca success al lado de foto.
																					}   
																		}

																			else{   // fallo al renombrar

																					 $foto_dangerA="<i class=\"fas fa-times-circle fa-lg\"></i>";
																					 $foto_estu1_info ="0";
																					  unlink($filename_estu1);
															                         
																					}	

																		}	// cierre de que no hay foto.. ****************



																		/*news */   	if (file_exists($filename_ci_estu1 ))     // de haber una foto le cambia el nombre y la mueve a otro lugar
																		{
																			$ci_estu1_info ="1";
																			$image_ci_estu1 = imagecreatefrompng("../0 Croppie/ci_est_act1" .$fotPP.  ".png");  
																				              unlink("../0 Croppie/ci_est_act1" .$fotPP.  ".png");
																				              imagejpeg($image_ci_estu1,"../0 Croppie/ci_est_act1" .$fotPP.  ".png",90); // comprimer la imagen 
																					$ext_estu = 'png';
																					$newfilename_ci_estu1 = "../zz_fotos_estudiantes_ci/".$estu1_id."_".$expediente1.".".$ext_estu;

																						if(rename($filename_ci_estu1,$newfilename_ci_estu1))
																		{	
															$query_ci_estu1 = "UPDATE reg_estudiantes SET foto_ci_est = '$newfilename_ci_estu1' WHERE id_estud='$estu1_id' LIMIT 1 ";	
																				if (!mysqli_query($enlace,$query_ci_estu1))      // si no ha logrado ingresar la foto
																							   {
																			   $ci_danger_act1="<i class=\"fas fa-exclamation-triangle fa-lg\"></i>";  // ha fallado	
																			   $ci_estu1_info ="0";
																			   unlink($newfilename_ci_estu1);	   													                         
																							   }

																				else {   
																				$ci_success_act1 ="<i class=\"far fa-thumbs-up fa-lg\"></i>";   // coloca success al lado de foto.
																					}   
																		}
																			else{   // fallo al renombrar
																					 $ci_danger_act1="<i class=\"fas fa-exclamation-triangle fa-lg\"></i>";
																					 $ci_estu1_info ="0";
																					  unlink($filename_ci_estu1);															                         
																					}	
																		}	// cierre de que no hay cedula.. ****************



			// exista o no foto cargada, procedo a almacenar, datos anteriores y nuevos del representado

			
			


			if ( $_POST['viene_otro1'] == '2' )      // si la respuesta es no
		      { $cursaba_est1 = "6";
			    $old_repite_otro1 = "3";
			    $viene_otro1 = '2';
			    $plantel_pro1 = '.'; }

		    else {$cursaba_est1 = $_POST["cursaba_est1"];
			$old_repite_otro1 = $_POST["old_repite_otro1"];
			$viene_otro1 = '1';

			$plantel_pro1 = mysqli_real_escape_string($enlace,$_POST['plantel_pro1']); }



			if ( empty($_POST['esc_ciudad_est1']) )      // si esta vacío
		      {$esc_ciudad_est1 = "29"; }

		      else {$esc_ciudad_est1 = $_POST["esc_ciudad_est1"];}


		     if ( empty($_POST['grado_curso_otro1']) )      // si esta vacío
		      {$grado_curso_otro1 = "51"; }

		      else {$grado_curso_otro1 = $_POST["grado_curso_otro1"];}

			
 $mod_areas_pendientes1 = $_POST["mod_areas_pendientes1"];

					
$query_ES_AA_sob = "INSERT INTO reg_estu_sobre(id_estud, proviene_de_otro, nombre_plantel_pro, id_ciudad, id_grado, id_periodo_es, es_repitiente, areas_pendientes) 

							VALUES (   '$estu1_id',
							           '$viene_otro1',
							           '$plantel_pro1',
							           '$esc_ciudad_est1',
									   '$grado_curso_otro1',
									   '$cursaba_est1',                                                         
									   '$old_repite_otro1', '$mod_areas_pendientes1' )";


				if (!mysqli_query($enlace,$query_ES_AA_sob))  // si no logro ingresar sobre el estudiante 1
							{
							$procede_danger1="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$errorZ="- Se han suscitado diversos errores (E2c), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 1.


								$sqlAAAA = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu1_id' "; 

								if (mysqli_query($enlace,$sqlAAAA))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorA = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}



							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro sobre el estudiante 1

								$procede_success1="<i class=\"fas fa-check-circle fa-lg\"></i>";
				            	
				            	
								// procedo a incorporar los datos de la actuacion actual del alumno en el colegio



								$cursa_est1 = $_POST["cursa_est1"];
								$grado_act1 = $_POST["grado_act1"];
								$repite_actual1 = $_POST["repite_actual1"];
								

								$edad_act1 = $_POST["edad_act1"];
								$talla_cam1 = $_POST["talla_cam1"];
								$talla_pant1 = $_POST["talla_pant1"];
								$talla_zap1 = $_POST["talla_zap1"];

								$peso_act1 = $_POST["peso_act1"];	
								$estatura_act1 = $_POST["estatura_act1"];	

					
$query_ES_AA_act = "INSERT INTO reg_estu_actual(id_estud, id_reg_pagos, cursa_actualmente, grado_actual, repite_actual, 
                                              edad_actual, t_camisa_act, t_pantalon_act, t_zapatos_act, peso_act, estatura_act) 

							VALUES (   '$estu1_id', '$id_pago_AA', '$cursa_est1', 
							           '$grado_act1',
							           '$repite_actual1',
							           

							           '$edad_act1',
									   '$talla_cam1',
									   '$talla_pant1',
									   '$talla_zap1',

									   '$peso_act1',
									   '$estatura_act1')";


				if (!mysqli_query($enlace,$query_ES_AA_act))  // si no logro ingresar sobre el estudiante 1
							{
							$actua_danger1="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$act_hist_ES1_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";

							$errorZ="- Se han suscitado diversos errores (E1d E1e), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 1.


								$sqlAAAA = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu1_id' "; 

								if (mysqli_query($enlace,$sqlAAAA))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorA = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}



							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro actual del estudiante 1

								$actua_success1="<i class=\"fas fa-check-circle fa-lg\"></i>";
								$act_hist_ES1_success="<i class=\"fas fa-check-circle fa-lg\"></i>";

	$reg_estu_actual_id1 = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado...




			

			// almacenar quien y cuando

			$query_qCF_A = "INSERT INTO quien_y_cuando_estu(id_quien, id_estud)

			VALUES ('$quien', '$estu1_id')"; 


			if (!mysqli_query($enlace,$query_qCF_A))      // si no ha logrado ingresar los datos
				{
				$errorZ="- Error, quien y cuando (ESTU1), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 1.


								$sqlAAAA = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu1_id' "; 

								if (mysqli_query($enlace,$sqlAAAA))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorA = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}




				mysqli_close($enlace);
				} 




						
					

				else
				            {   		            	
				            	
								// dado que todo ok, procede a guardar las observaciones existan o no...

							

				            $query_fastest_madre = "INSERT INTO reg_madre(id_estud) 
							VALUES (   '$estu1_id' )";
                            $q_madre = mysqli_query($enlace, $query_fastest_madre) or die(mysqli_error());


							$query_fastest_padre = "INSERT INTO reg_padre(id_estud) 
							VALUES (   '$estu1_id' )";
							$q_padre = mysqli_query($enlace, $query_fastest_padre) or die(mysqli_error());


							$i_not = 1;
                            $times_to_run = 14;
                
			                while ($i_not <= $times_to_run)
			                {

							$query_notas = "INSERT INTO asign_notas(id_reg_estu_actual, id_estud, materia) 
							VALUES ( '$reg_estu_actual_id1',  '$estu1_id', '$i_not' )";
							$q_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());

							$i_not++;

							 }   



							$query_ES_AA_obs = "INSERT INTO obs_estu(id_estud, obs_estud) 

							VALUES (   '$estu1_id', 
							'".mysqli_real_escape_string($enlace,$_POST['obs_text1'])."'          )";



				if (!mysqli_query($enlace,$query_ES_AA_obs))  // si no logro ingresar las observaciones del estudiante 1
							{

							$obs_danger1="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de obs 1
							$errorZ="- Se han suscitado diversos errores (E1f), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 1.


								$sqlAAAA = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu1_id' "; 

								if (mysqli_query($enlace,$sqlAAAA))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorA = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}






							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre guardar las obs del estudiante 1

								$obs_success1="<i class=\"fas fa-check-circle fa-lg\"></i>";



											if ($foto_estu1_info =="0" ) {

											$exitoZ.="- &nbsp;
														<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"N°1 ha sido Pre-Inscrito sin foto.\">
														R. N°1 <i class=\"fas fa-user-check fa-lg\"></i><i class=\"fas fa-eye-slash\"></i></i> &nbsp;
														 ";

														$conteo_progresoA = "1";
														$conteo_errorA = "0";

											mysqli_close($enlace);


																 if($number_alum == '1' && $conteo_errorA == '0' )       
																    {

																$exitoZ.="- &nbsp;														
											<b><a href=\"plantilla_representantes_search.php?tituloJKL=Resultados...&criterio=".$num_cedula."\"><i class=\"fas fa-link\"></i> Completar Planilla Extendida!!!</a></b>		 ";

																    }



										          }

										    else { 

										    	$exitoZ.="- &nbsp;
														<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"N°1 ha sido Pre-Inscrito con foto.\">
														R. N°1 <i class=\"fas fa-user-check fa-lg\"></i><i class=\"fas fa-eye\"></i></i> &nbsp;
											 ";


														$conteo_progresoA = "1";
														$conteo_errorA = "0";


											    mysqli_close($enlace);


											     if($number_alum == '1' && $conteo_errorA == '0' )       
																    {

																$exitoZ.="- &nbsp;														
											<b><a href=\"plantilla_representantes_search.php?tituloJKL=Resultados...&criterio=".$num_cedula."\"><i class=\"fas fa-link\"></i> Completar Planilla Extendida!!!</a></b>		 ";

																    }

										    }




				            }  // hasta aqui ha guardado todo lo relacionado con el estudiante 1





				             }  // en caso de haber ingresado el registro del historial del estudiante





                             }  // si logro guardar los registros actuales, ahora lo relaciona con el historial



                         } // cierre del proceso de guardado de los datos actuales y del historial


								
					            }  // cierre de la fase de asociacion


					            }  // cierre donde se creo el registro del pago

					          
					          } // cierre del else de que si logro realizar el registro del estudiante 1




?>