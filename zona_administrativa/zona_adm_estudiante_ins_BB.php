<?php

include("../conectar.php"); 

$num_cedula = mysqli_real_escape_string($enlace,$_POST['cedula']);

// estudiante 2


			$genero_est2 = $_POST["genero_est2"];
			$ciudad_est2 = $_POST["ciudad_est2"];
			$estado_est2 = $_POST["estado_est2"];
			$pais_nac_est2 = $_POST["pais_nac_est2"];
			$religion_act2 = $_POST["religion_act2"];
			$padece_act2 = $_POST["padece_act2"];
			$sangre_act2 = $_POST["sangre_act2"];	

			$mod_email_estu_act2 = mysqli_real_escape_string($enlace,$_POST['mod_email_estu_act2']);

			
$mod_se_retira_con_act2 = mysqli_real_escape_string($enlace,$_POST['mod_se_retira_con_act2']);
    $mod_control_med_act2 = mysqli_real_escape_string($enlace,$_POST['mod_control_med_act2']);
    $v_otra_act2 = mysqli_real_escape_string($enlace,$_POST['v_otra_act2']);

    $v1_act2 = $_POST["mod_v1_act2"];  $v2_act2 = $_POST["mod_v2_act2"];  $v3_act2 = $_POST["mod_v3_act2"];  $v4_act2 = $_POST["mod_v4_act2"];
    $v5_act2 = $_POST["mod_v5_act2"];  $v6_act2 = $_POST["mod_v6_act2"];  $v7_act2 = $_POST["mod_v7_act2"];  $v8_act2 = $_POST["mod_v8_act2"];
    $v9_act2 = $_POST["mod_v9_act2"];  $v10_act2 = $_POST["mod_v10_act2"];  $v11_act2 = $_POST["mod_v11_act2"];  $v12_act2 = $_POST["mod_v12_act2"];
    $v13_act2 = $_POST["mod_v13_act2"];  $v14_act2 = $_POST["mod_v14_act2"];  $v15_act2 = $_POST["mod_v15_act2"]; 

    	$mod_medicamentos_act2 = $_POST["mod_medicamentos_act2"];	



$query_ES_BB = "INSERT INTO reg_estudiantes(estu_expediente, nombre_estu, apellidos_estu, nacimiento_estu, id_sexo, id_ciudad,
			                                id_estado, id_pais, id_religion, ci_estu, id_medico, id_sangre, inscrito_si_o_no, email_estu, municipio_est, vive_con, se_traslada_en, enf_padecidas, alergico_a, se_retira_con, control_med, v1, v2, v3, v4, v5, v6, v7, v8, v9, v10, v11, v12, v13, v14, v15, v_otra, medicamentos)  


							VALUES (   '".mysqli_real_escape_string($enlace,$_POST['expediente_est2'])."'          ,
							           '".mysqli_real_escape_string($enlace,$_POST['nombres_est2'])."'            ,
									   '".mysqli_real_escape_string($enlace,$_POST['apellidos_est2'])."'          ,
									   '".mysqli_real_escape_string($enlace,$_POST['fecha_nac_est2'])."'        ,

										'$genero_est2', '$ciudad_est2', '$estado_est2', '$pais_nac_est2', '$religion_act2',

									   '".mysqli_real_escape_string($enlace,$_POST['cedula_est2'])."'          ,									   

										'$padece_act2', '$sangre_act2', '1', '$mod_email_estu_act2',  '".mysqli_real_escape_string($enlace,$_POST['municipio_est2'])."'    ,

										'".mysqli_real_escape_string($enlace,$_POST['mod_vive_con_estud_act2'])."'          ,
							           '".mysqli_real_escape_string($enlace,$_POST['mod_traslada_estud_act2'])."'            ,
									   '".mysqli_real_escape_string($enlace,$_POST['mod_padecio_estud_act2'])."'          ,
									   '".mysqli_real_escape_string($enlace,$_POST['mod_alergias_estud_act2'])."'        ,

                     '$mod_se_retira_con_act2', '$mod_control_med_act2',
                     '$v1_act2', '$v2_act2', '$v3_act2', '$v4_act2', '$v5_act2', '$v6_act2', '$v7_act2', '$v8_act2', '$v9_act2',
                     '$v10_act2', '$v11_act2', '$v12_act2', '$v13_act2', '$v14_act2', '$v15_act2',

                     '$v_otra_act2', '$mod_medicamentos_act2' 


										 )";


				if (!mysqli_query($enlace,$query_ES_BB))  // si no logro ingresar el estudiante 1
							{
							$datosES2_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$errorZ="- Se han suscitado diversos errores (E2a), consulte las alertas visuales y contacte al Ing. ";
							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro del estudiante 1

				            $datosES2_success="<i class=\"fas fa-check-circle fa-lg\"></i>";  // coloca success al lado de estu 1
				            $estu2_id = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado es decir el del estudiante 1

  $query_pagBB = "INSERT INTO reg_pagos(id_del_estud, nota_principal) VALUES ('$estu2_id', NULL)";

				           if (!mysqli_query($enlace,$query_pagBB))  
								{
$errorZ.="- Error en crear historial BB. ";

$sqlBBBB = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu2_id' "; 

								if (mysqli_query($enlace,$sqlBBBB))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorB = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}


								mysqli_close($enlace); 
								}




				else {


					$id_pago_BB = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado		

							$query_BB_repre = "INSERT INTO reg_estu_repre_all(id_repre, id_estu) VALUES ( '$repre_id', '$estu2_id')";



								if (!mysqli_query($enlace,$query_BB_repre))  // si no logro asociar el estudiante 1 con su representante
								{
								$datosES2_repre_danger="<i class=\"fas fa-user-friends fa-lg\"></i>";  // coloca danger al lado de estu repre 1
								$errorZ="- Se han suscitado diversos errores (E2b), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlBBBBB = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu2_id' "; 

								if (mysqli_query($enlace,$sqlBBBBB))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorB = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}
								mysqli_close($enlace); 
								}
						

					else
					            {   // proceso de asociacion correcto
			
			 $datosES2_repre_success="<i class=\"fas fa-user-friends fa-lg\"></i>";  // coloca success al lado de estu repre 1    
								

					            	clearstatcache();
									$filename_estu2 = '../0 Croppie/foto_estu2' .$fotPP. '.png';
									$foto_estu2_info ="0";

						/*new*/  	$filename_ci_estu2 = '../0 Croppie/ci_est_act2' .$fotPP. '.png';
						/*new*/		$ci_estu2_info ="0";

									$expediente2 = $_POST['expediente_est2'];


															if (file_exists($filename_estu2 ))     // de haber una foto le cambia el nombre y la mueve a otro lugar
																		{
																			$foto_estu2_info ="1";

																			$image_estu2 = imagecreatefrompng("../0 Croppie/foto_estu2" .$fotPP.  ".png");  
																				           unlink("../0 Croppie/foto_estu2" .$fotPP.  ".png");
																				           imagejpeg($image_estu2,"../0 Croppie/foto_estu2" .$fotPP.  ".png",90); // comprimer la imagen  
																					
																					$ext_estu = 'png';
																					
																					/* $newfilename = '../zz_fotos_l/logocropx.png'; */

																					$newfilename_estu2 = "../zz_fotos_estudiantes/".$estu2_id."_".$expediente2.".".$ext_estu;

																						if(rename($filename_estu2,$newfilename_estu2))
																		{	

															$query_foto_estu2 = "UPDATE reg_estudiantes SET foto_estu = '$newfilename_estu2' WHERE id_estud='$estu2_id' LIMIT 1 ";					

																				if (!mysqli_query($enlace,$query_foto_estu2))      // si no ha logrado ingresar la foto
																							   {

																			   $foto_dangerB="<i class=\"fas fa-times-circle fa-lg\"></i>";  // ha fallado	
																			   $foto_estu2_info ="0";
																			   unlink($newfilename_estu2);

															                         
																							   }

																				else {
																				$foto_successB="<i class=\"far fa-image fa-lg\"></i>";   // coloca success al lado de foto.
																					}   
																		}

																			else{   // fallo al renombrar

																					 $foto_dangerB="<i class=\"fas fa-times-circle fa-lg\"></i>";
																					 $foto_estu2_info ="0";
																					  unlink($filename_estu2);
															                         
																					}	

																		}	// cierre de que no hay foto.. ****************



											/*news */   	if (file_exists($filename_ci_estu2 ))     // de haber una foto le cambia el nombre y la mueve a otro lugar
																		{
																			$ci_estu2_info ="1";
																			$image_ci_estu2 = imagecreatefrompng("../0 Croppie/ci_est_act2" .$fotPP.  ".png");  
																				              unlink("../0 Croppie/ci_est_act2" .$fotPP.  ".png");
																				              imagejpeg($image_ci_estu2,"../0 Croppie/ci_est_act2" .$fotPP.  ".png",90); // comprimer la imagen 
																					$ext_estu = 'png';
																					$newfilename_ci_estu2 = "../zz_fotos_estudiantes_ci/".$estu2_id."_".$expediente2.".".$ext_estu;

																						if(rename($filename_ci_estu2,$newfilename_ci_estu2))
																		{	
															$query_ci_estu2 = "UPDATE reg_estudiantes SET foto_ci_est = '$newfilename_ci_estu2' WHERE id_estud='$estu2_id' LIMIT 1 ";	
																				if (!mysqli_query($enlace,$query_ci_estu2))      // si no ha logrado ingresar la foto
																							   {
																			   $ci_danger_act2="<i class=\"fas fa-exclamation-triangle fa-lg\"></i>";  // ha fallado	
																			   $ci_estu2_info ="0";
																			   unlink($newfilename_ci_estu2);	   													                         
																							   }

																				else {   
																				$ci_success_act2 ="<i class=\"far fa-thumbs-up fa-lg\"></i>";   // coloca success al lado de foto.
																					}   
																		}
																			else{   // fallo al renombrar
																					 $ci_danger_act2="<i class=\"fas fa-exclamation-triangle fa-lg\"></i>";
																					 $ci_estu2_info ="0";
																					  unlink($filename_ci_estu2);															                         
																					}	
																		}	// cierre de que no hay cedula.. ****************



			// exista o no foto cargada, procedo a almacenar, datos anteriores y nuevos del representado

			
			


			if ( $_POST['viene_otro2'] == '2' )      // si la respuesta es no
		      { $cursaba_est2 = "6";
			    $old_repite_otro2 = "3";
			    $viene_otro2 = '2';
			    $plantel_pro2 = '.'; }

		    else {$cursaba_est2 = $_POST["cursaba_est2"];
			$old_repite_otro2 = $_POST["old_repite_otro2"];
			$viene_otro2 = '1';

			$plantel_pro2 = mysqli_real_escape_string($enlace,$_POST['plantel_pro2']); }



			if ( empty($_POST['esc_ciudad_est2']) )      // si esta vacío
		      {$esc_ciudad_est2 = "29"; }

		      else {$esc_ciudad_est2 = $_POST["esc_ciudad_est2"];}


		     if ( empty($_POST['grado_curso_otro2']) )      // si esta vacío
		      {$grado_curso_otro2 = "51"; }

		      else {$grado_curso_otro2 = $_POST["grado_curso_otro2"];}
			
 $mod_areas_pendientes2 = $_POST["mod_areas_pendientes2"];

					
$query_ES_BB_sob = "INSERT INTO reg_estu_sobre(id_estud, proviene_de_otro, nombre_plantel_pro, id_ciudad, id_grado, id_periodo_es, es_repitiente, areas_pendientes) 

							VALUES (   '$estu2_id',
							           '$viene_otro2',
							           '$plantel_pro2',
							           '$esc_ciudad_est2',
									   '$grado_curso_otro2',
									   '$cursaba_est2',                                                         
									   '$old_repite_otro2', '$mod_areas_pendientes2' )";


				if (!mysqli_query($enlace,$query_ES_BB_sob))  // si no logro ingresar sobre el estudiante 1
							{
							$procede_danger2="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$errorZ="- Se han suscitado diversos errores (E2c), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlBBBBB = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu2_id' "; 

								if (mysqli_query($enlace,$sqlBBBBB))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorB = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}							
							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro sobre el estudiante 1

								$procede_success2="<i class=\"fas fa-check-circle fa-lg\"></i>";
				            	
				            	
								// procedo a incorporar los datos de la actuacion actual del alumno en el colegio



								$cursa_est2 = $_POST["cursa_est2"];
								$grado_act2 = $_POST["grado_act2"];
								$repite_actual2 = $_POST["repite_actual2"];
								

								$edad_act2 = $_POST["edad_act2"];
								$talla_cam2 = $_POST["talla_cam2"];
								$talla_pant2 = $_POST["talla_pant2"];
								$talla_zap2 = $_POST["talla_zap2"];

								$peso_act2 = $_POST["peso_act2"];	
								$estatura_act2 = $_POST["estatura_act2"];

								$seccion_act2 = $_POST["seccion_act2"];			

					
$query_ES_BB_act = "INSERT INTO reg_estu_actual(id_estud, id_reg_pagos, cursa_actualmente, grado_actual, repite_actual, fecha_inscripcion,
                                              edad_actual, t_camisa_act, t_pantalon_act, t_zapatos_act, peso_act, estatura_act, id_seccion)

							VALUES (   '$estu2_id', '$id_pago_BB', '$cursa_est2',
							           '$grado_act2',
							           '$repite_actual2',
							           '".mysqli_real_escape_string($enlace,$_POST['fecha_ins_act2'])."'        ,

							           '$edad_act2',
									   '$talla_cam2',
									   '$talla_pant2',
									   '$talla_zap2',

									   '$peso_act2',
									   '$estatura_act2',

									   
									   '$seccion_act2')";



				if (!mysqli_query($enlace,$query_ES_BB_act))  // si no logro ingresar sobre el estudiante 1
							{
							$actua_danger2="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$act_hist_ES2_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";

							$errorZ="- Se han suscitado diversos errores (E2d E2e), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlBBBBB = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu2_id' "; 

								if (mysqli_query($enlace,$sqlBBBBB))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorB = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}	



							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro actual del estudiante 1

								$actua_success2="<i class=\"fas fa-check-circle fa-lg\"></i>";
								$act_hist_ES2_success="<i class=\"fas fa-check-circle fa-lg\"></i>";

	$reg_estu_actual_id2 = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado...




			

			// almacenar quien y cuando

			$query_qCF_B = "INSERT INTO quien_y_cuando_estu(id_quien, id_estud)

			VALUES ('$quien', '$estu2_id')"; 


			if (!mysqli_query($enlace,$query_qCF_B))      // si no ha logrado ingresar los datos
				{
				$errorZ="- Error, quien y cuando (ESTU2), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlBBBBB = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu2_id' "; 

								if (mysqli_query($enlace,$sqlBBBBB))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorB = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}	


														
				mysqli_close($enlace);
				} 




					

				else
				            {  			            	
				            	
								// dado que todo ok, procede a guardar las observaciones existan o no...

							

				            $query_fastest_madre = "INSERT INTO reg_madre(id_estud) 
							VALUES (   '$estu2_id' )";
                            $q_madre = mysqli_query($enlace, $query_fastest_madre) or die(mysqli_error());


							$query_fastest_padre = "INSERT INTO reg_padre(id_estud) 
							VALUES (   '$estu2_id' )";
							$q_padre = mysqli_query($enlace, $query_fastest_padre) or die(mysqli_error());



							$i_not = 1;
                            $times_to_run = 14;
                
			                while ($i_not <= $times_to_run)
			                {

							$query_notas = "INSERT INTO asign_notas(id_reg_estu_actual, id_estud, materia) 
							VALUES ( '$reg_estu_actual_id2',  '$estu2_id', '$i_not' )";
							$q_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());

							$i_not++;

							 }   





							$query_ES_BB_obs = "INSERT INTO obs_estu(id_estud, obs_estud) 

							VALUES (   '$estu2_id', 
							'".mysqli_real_escape_string($enlace,$_POST['obs_text2'])."'          )";



				if (!mysqli_query($enlace,$query_ES_BB_obs))  // si no logro ingresar las observaciones del estudiante 1
							{

							$obs_danger2="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de obs 1
							$errorZ="- Se han suscitado diversos errores (E2f), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlBBBBB = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu2_id' "; 

								if (mysqli_query($enlace,$sqlBBBBB))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorB = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}	


																					
							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre guardar las obs del estudiante 1

								$obs_success2="<i class=\"fas fa-check-circle fa-lg\"></i>";



											if ($foto_estu2_info =="0" ) {

											$exitoZ.="- &nbsp;
														<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Representado N°2 ha sido Inscrito sin foto.\">
														R. N°2 <i class=\"fas fa-user-check fa-lg\"></i><i class=\"fas fa-eye-slash\"></i></i> &nbsp ";

														$conteo_progresoB = "1";
														$conteo_errorB = "0";

											mysqli_close($enlace);

											    if($number_alum == '2' && $conteo_errorA == '0' )  
																    {

																$exitoZ.="- &nbsp;														
											<b><a href=\"plantilla_representantes_search.php?tituloJKL=Resultados...&criterio=".$num_cedula."\"><i class=\"fas fa-link\"></i> Completar Planilla Extendida!!!</a></b>		 ";

																    }

										          }

										    else { 

										    	$exitoZ.="- &nbsp;
														<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Representado N°2 ha sido Inscrito con foto.\">
														R. N°2 <i class=\"fas fa-user-check fa-lg\"></i><i class=\"fas fa-eye\"></i></i> &nbsp ";

														$conteo_progresoB = "1";
														$conteo_errorB = "0";
														
											    mysqli_close($enlace);

											        if($number_alum == '2' && $conteo_errorA == '0' )  
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