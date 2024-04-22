<?php

include("../conectar.php"); 

// estudiante 5


			$genero_est5 = $_POST["genero_est5"];
			$ciudad_est5 = $_POST["ciudad_est5"];
			$estado_est5 = $_POST["estado_est5"];
			$pais_nac_est5 = $_POST["pais_nac_est5"];
			$religion_act5 = $_POST["religion_act5"];
			$padece_act5 = $_POST["padece_act5"];
			$sangre_act5 = $_POST["sangre_act5"];	



$query_ES_EE = "INSERT INTO reg_estudiantes(estu_expediente, nombre_estu, apellidos_estu, nacimiento_estu, id_sexo, id_ciudad,
			                                id_estado, id_pais, id_religion, ci_estu, id_medico, id_sangre, inscrito_si_o_no) 

							VALUES (   '".mysqli_real_escape_string($enlace,$_POST['expediente_est5'])."'          ,
							           '".mysqli_real_escape_string($enlace,$_POST['nombres_est5'])."'            ,
									   '".mysqli_real_escape_string($enlace,$_POST['apellidos_est5'])."'          ,
									   '".mysqli_real_escape_string($enlace,$_POST['fecha_nac_est5'])."'        ,

										'$genero_est5', '$ciudad_est5', '$estado_est5', '$pais_nac_est5', '$religion_act5',

									   '".mysqli_real_escape_string($enlace,$_POST['cedula_est5'])."'          ,									   

										'$padece_act5', '$sangre_act5', '1')";


				if (!mysqli_query($enlace,$query_ES_EE))  // si no logro ingresar el estudiante 1
							{
							$datosES5_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$errorZ="- Se han suscitado diversos errores (E5a), consulte las alertas visuales y contacte al Ing. ";
							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro del estudiante 1

				            $datosES5_success="<i class=\"fas fa-check-circle fa-lg\"></i>";  // coloca success al lado de estu 1
				            $estu5_id = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado es decir el del estudiante 1



  $query_pagEE = "INSERT INTO reg_pagos(id_del_estud, nota_principal) VALUES ('$estu5_id', NULL)";

				           if (!mysqli_query($enlace,$query_pagEE))  
								{
$errorZ.="- Error en crear historial EE. ";

$sqlEEEE = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu5_id' "; 

								if (mysqli_query($enlace,$sqlEEEE))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorE = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}


								mysqli_close($enlace); 
								}


				else {


					$id_pago_EE = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado	


							$query_EE_repre = "INSERT INTO reg_estu_repre_all(id_repre, id_estu) VALUES ( '$repre_id', '$estu5_id')";



								if (!mysqli_query($enlace,$query_EE_repre))  // si no logro asociar el estudiante 1 con su representante
								{
								$datosES5_repre_danger="<i class=\"fas fa-user-friends fa-lg\"></i>";  // coloca danger al lado de estu repre 1
								$errorZ="- Se han suscitado diversos errores (E5b), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlEEEEE = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu5_id' "; 

								if (mysqli_query($enlace,$sqlEEEEE))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorE = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}



								mysqli_close($enlace); 
								}
						

					else
					            {   // proceso de asociacion correcto
			
			 $datosES5_repre_success="<i class=\"fas fa-user-friends fa-lg\"></i>";  // coloca success al lado de estu repre 1    
								

					            	clearstatcache();
									$filename_estu5 = '../0 Croppie/foto_estu5' .$fotPP. '.png';
									$foto_estu5_info ="0";

									$expediente5 = $_POST['expediente_est5'];


															if (file_exists($filename_estu5 ))     // de haber una foto le cambia el nombre y la mueve a otro lugar
																		{
																			$foto_estu5_info ="1";

																			$image_estu5 = imagecreatefrompng("../0 Croppie/foto_estu5" .$fotPP.  ".png");  
																				           unlink("../0 Croppie/foto_estu5" .$fotPP.  ".png");
																				           imagejpeg($image_estu5,"../0 Croppie/foto_estu5" .$fotPP.  ".png",90); // comprimer la imagen  
																					
																					$ext_estu = 'png';
																					
																					/* $newfilename = '../zz_fotos_l/logocropx.png'; */

																					$newfilename_estu5 = "../zz_fotos_estudiantes/".$estu5_id."_".$expediente5.".".$ext_estu;

																						if(rename($filename_estu5,$newfilename_estu5))
																		{	

															$query_foto_estu5 = "UPDATE reg_estudiantes SET foto_estu = '$newfilename_estu5' WHERE id_estud='$estu5_id' LIMIT 1 ";					

																				if (!mysqli_query($enlace,$query_foto_estu5))      // si no ha logrado ingresar la foto
																							   {

																			   $foto_dangerE="<i class=\"fas fa-times-circle fa-lg\"></i>";  // ha fallado	
																			   $foto_estu5_info ="0";
																			   unlink($newfilename_estu5);

															                         
																							   }

																				else {
																				$foto_successE="<i class=\"far fa-image fa-lg\"></i>";   // coloca success al lado de foto.
																					}   
																		}

																			else{   // fallo al renombrar

																					 $foto_dangerE="<i class=\"fas fa-times-circle fa-lg\"></i>";
																					 $foto_estu5_info ="0";
																					  unlink($filename_estu5);
															                         
																					}	

																		}	// cierre de que no hay foto.. ****************



			// exista o no foto cargada, procedo a almacenar, datos anteriores y nuevos del representado

			
			


			if ( $_POST['viene_otro5'] == '2' )      // si la respuesta es no
		      { $cursaba_est5 = "6";
			    $old_repite_otro5 = "3";
			    $viene_otro5 = '2';
			    $plantel_pro5 = '.'; }

		    else {$cursaba_est5 = $_POST["cursaba_est5"];
			$old_repite_otro5 = $_POST["old_repite_otro5"];
			$viene_otro5 = '1';

			$plantel_pro5 = mysqli_real_escape_string($enlace,$_POST['plantel_pro5']); }



			if ( empty($_POST['esc_ciudad_est5']) )      // si esta vacío
		      {$esc_ciudad_est5 = "29"; }

		      else {$esc_ciudad_est5 = $_POST["esc_ciudad_est5"];}


		     if ( empty($_POST['grado_curso_otro5']) )      // si esta vacío
		      {$grado_curso_otro5 = "51"; }

		      else {$grado_curso_otro5 = $_POST["grado_curso_otro5"];}
			


					
$query_ES_EE_sob = "INSERT INTO reg_estu_sobre(id_estud, proviene_de_otro, nombre_plantel_pro, id_ciudad, id_grado, id_periodo_es, es_repitiente) 

							VALUES (   '$estu5_id',
							           '$viene_otro5',
							           '$plantel_pro5',
							           '$esc_ciudad_est5',
									   '$grado_curso_otro5',
									   '$cursaba_est5',                                                         
									   '$old_repite_otro5')";


				if (!mysqli_query($enlace,$query_ES_EE_sob))  // si no logro ingresar sobre el estudiante 1
							{
							$procede_danger5="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$errorZ="- Se han suscitado diversos errores (E5c), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlEEEEE = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu5_id' "; 

								if (mysqli_query($enlace,$sqlEEEEE))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorE = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}

							
							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro sobre el estudiante 1

								$procede_success5="<i class=\"fas fa-check-circle fa-lg\"></i>";
				            	
				            	
								// procedo a incorporar los datos de la actuacion actual del alumno en el colegio



								$cursa_est5 = $_POST["cursa_est5"];
								$grado_act5 = $_POST["grado_act5"];
								$repite_actual5 = $_POST["repite_actual5"];
								

								$edad_act5 = $_POST["edad_act5"];
								$talla_cam5 = $_POST["talla_cam5"];
								$talla_pant5 = $_POST["talla_pant5"];
								$talla_zap5 = $_POST["talla_zap5"];

								$peso_act5 = $_POST["peso_act5"];	
								$estatura_act5 = $_POST["estatura_act5"];

								$seccion_act5 = $_POST["seccion_act5"];		

					
$query_ES_EE_act = "INSERT INTO reg_estu_actual(id_estud, id_reg_pagos, cursa_actualmente, grado_actual, repite_actual, fecha_inscripcion, 
                                              edad_actual, t_camisa_act, t_pantalon_act, t_zapatos_act, peso_act, estatura_act, id_seccion)

							VALUES (   '$estu5_id', '$id_pago_EE', '$cursa_est5',
							           '$grado_act5',
							           '$repite_actual5',
							           '".mysqli_real_escape_string($enlace,$_POST['fecha_ins_act5'])."'        ,

							           '$edad_act5',
									   '$talla_cam5',
									   '$talla_pant5',
									   '$talla_zap5',

									   '$peso_act5',
									   '$estatura_act5',

									   '$seccion_act5')";

				if (!mysqli_query($enlace,$query_ES_EE_act))  // si no logro ingresar sobre el estudiante 1
							{
							$actua_danger5="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$act_hist_ES5_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";

							$errorZ="- Se han suscitado diversos errores (E5d E5e), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlEEEEE = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu5_id' "; 

								if (mysqli_query($enlace,$sqlEEEEE))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorE = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}

							
							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro actual del estudiante 1

								$actua_success5="<i class=\"fas fa-check-circle fa-lg\"></i>";
								$act_hist_ES5_success="<i class=\"fas fa-check-circle fa-lg\"></i>";

	$reg_estu_actual_id5 = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado...




			

			// almacenar quien y cuando

			$query_qCF_E = "INSERT INTO quien_y_cuando_estu(id_quien, id_estud)

			VALUES ('$quien', '$estu5_id')"; 


			if (!mysqli_query($enlace,$query_qCF_E))      // si no ha logrado ingresar los datos
				{
				$errorZ="- Error, quien y cuando (ESTU5), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlEEEEE = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu5_id' "; 

								if (mysqli_query($enlace,$sqlEEEEE))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorE = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}


				mysqli_close($enlace);
				} 




							

				else
				            {  				            	
				            	
								// dado que todo ok, procede a guardar las observaciones existan o no...

							


							$query_ES_EE_obs = "INSERT INTO obs_estu(id_estud, obs_estud) 

							VALUES (   '$estu5_id', 
							'".mysqli_real_escape_string($enlace,$_POST['obs_text5'])."'          )";



				if (!mysqli_query($enlace,$query_ES_EE_obs))  // si no logro ingresar las observaciones del estudiante 1
							{

							$obs_danger5="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de obs 1
							$errorZ="- Se han suscitado diversos errores (E5f), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlEEEEE = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu5_id' "; 

								if (mysqli_query($enlace,$sqlEEEEE))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorE = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}

							
							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre guardar las obs del estudiante 1

								$obs_success5="<i class=\"fas fa-check-circle fa-lg\"></i>";



											if ($foto_estu5_info =="0" ) {

											$exitoZ.="- &nbsp;
														<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Representado N°5 ha sido Inscrito sin foto.\">
														R. N°5 <i class=\"fas fa-user-check fa-lg\"></i><i class=\"fas fa-eye-slash\"></i></i> &nbsp ";

														$conteo_progresoE = "1";
														$conteo_errorE = "0";

											mysqli_close($enlace);

										          }

										    else { 

										    	$exitoZ.="- &nbsp;
														<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Representado N°5 ha sido Inscrito con foto.\">
														R. N°5 <i class=\"fas fa-user-check fa-lg\"></i><i class=\"fas fa-eye\"></i></i> &nbsp ";

														$conteo_progresoE = "1";
														$conteo_errorE = "0";

														
											    mysqli_close($enlace);

										    }




				            }  // hasta aqui ha guardado todo lo relacionado con el estudiante 1





				             }  // en caso de haber ingresado el registro del historial del estudiante





                             }  // si logro guardar los registros actuales, ahora lo relaciona con el historial



                         } // cierre del proceso de guardado de los datos actuales y del historial


								
					            }  // cierre de la fase de asociacion

					    }  // cierre donde se creo el registro del pago

					          } // cierre del else de que si logro realizar el registro del estudiante 1




?>