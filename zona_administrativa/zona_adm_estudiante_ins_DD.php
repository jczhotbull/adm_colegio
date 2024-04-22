<?php

include("../conectar.php"); 

// estudiante 4


			$genero_est4 = $_POST["genero_est4"];
			$ciudad_est4 = $_POST["ciudad_est4"];
			$estado_est4 = $_POST["estado_est4"];
			$pais_nac_est4 = $_POST["pais_nac_est4"];
			$religion_act4 = $_POST["religion_act4"];
			$padece_act4 = $_POST["padece_act4"];
			$sangre_act4 = $_POST["sangre_act4"];	



$query_ES_DD = "INSERT INTO reg_estudiantes(estu_expediente, nombre_estu, apellidos_estu, nacimiento_estu, id_sexo, id_ciudad,
			                                id_estado, id_pais, id_religion, ci_estu, id_medico, id_sangre, inscrito_si_o_no) 

							VALUES (   '".mysqli_real_escape_string($enlace,$_POST['expediente_est4'])."'          ,
							           '".mysqli_real_escape_string($enlace,$_POST['nombres_est4'])."'            ,
									   '".mysqli_real_escape_string($enlace,$_POST['apellidos_est4'])."'          ,
									   '".mysqli_real_escape_string($enlace,$_POST['fecha_nac_est4'])."'        ,

										'$genero_est4', '$ciudad_est4', '$estado_est4', '$pais_nac_est4', '$religion_act4',

									   '".mysqli_real_escape_string($enlace,$_POST['cedula_est4'])."'          ,									   

										'$padece_act4', '$sangre_act4', '1')";


				if (!mysqli_query($enlace,$query_ES_DD))  // si no logro ingresar el estudiante 1
							{
							$datosES4_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$errorZ="- Se han suscitado diversos errores (E4a), consulte las alertas visuales y contacte al Ing. ";
							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro del estudiante 1

				            $datosES4_success="<i class=\"fas fa-check-circle fa-lg\"></i>";  // coloca success al lado de estu 1
				            $estu4_id = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado es decir el del estudiante 1


  $query_pagDD = "INSERT INTO reg_pagos(id_del_estud, nota_principal) VALUES ('$estu4_id', NULL)";

				           if (!mysqli_query($enlace,$query_pagDD))  
								{
$errorZ.="- Error en crear historial DD. ";

$sqlDDDD = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu4_id' "; 

								if (mysqli_query($enlace,$sqlDDDD))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorD = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}


								mysqli_close($enlace); 
								}


				else {


					$id_pago_DD = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado	



							$query_DD_repre = "INSERT INTO reg_estu_repre_all(id_repre, id_estu) VALUES ( '$repre_id', '$estu4_id')";



								if (!mysqli_query($enlace,$query_DD_repre))  // si no logro asociar el estudiante 1 con su representante
								{
								$datosES4_repre_danger="<i class=\"fas fa-user-friends fa-lg\"></i>";  // coloca danger al lado de estu repre 1
								$errorZ="- Se han suscitado diversos errores (E4b), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlDDDDD = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu4_id' "; 

								if (mysqli_query($enlace,$sqlDDDDD))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorD = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}


								mysqli_close($enlace); 
								}
						

					else
					            {   // proceso de asociacion correcto
			
			 $datosES4_repre_success="<i class=\"fas fa-user-friends fa-lg\"></i>";  // coloca success al lado de estu repre 1    
								

					            	clearstatcache();
									$filename_estu4 = '../0 Croppie/foto_estu4' .$fotPP. '.png';
									$foto_estu4_info ="0";

									$expediente4 = $_POST['expediente_est4'];


															if (file_exists($filename_estu4 ))     // de haber una foto le cambia el nombre y la mueve a otro lugar
																		{
																			$foto_estu4_info ="1";

																			$image_estu4 = imagecreatefrompng("../0 Croppie/foto_estu4" .$fotPP.  ".png");  
																				           unlink("../0 Croppie/foto_estu4" .$fotPP.  ".png");
																				           imagejpeg($image_estu4,"../0 Croppie/foto_estu4" .$fotPP.  ".png",90); // comprimer la imagen  
																					
																					$ext_estu = 'png';
																					
																					/* $newfilename = '../zz_fotos_l/logocropx.png'; */

																					$newfilename_estu4 = "../zz_fotos_estudiantes/".$estu4_id."_".$expediente4.".".$ext_estu;

																						if(rename($filename_estu4,$newfilename_estu4))
																		{	

															$query_foto_estu4 = "UPDATE reg_estudiantes SET foto_estu = '$newfilename_estu4' WHERE id_estud='$estu4_id' LIMIT 1 ";					

																				if (!mysqli_query($enlace,$query_foto_estu4))      // si no ha logrado ingresar la foto
																							   {

																			   $foto_dangerD="<i class=\"fas fa-times-circle fa-lg\"></i>";  // ha fallado	
																			   $foto_estu4_info ="0";
																			   unlink($newfilename_estu4);

															                         
																							   }

																				else {
																				$foto_successD="<i class=\"far fa-image fa-lg\"></i>";   // coloca success al lado de foto.
																					}   
																		}

																			else{   // fallo al renombrar

																					 $foto_dangerD="<i class=\"fas fa-times-circle fa-lg\"></i>";
																					 $foto_estu4_info ="0";
																					  unlink($filename_estu4);
															                         
																					}	

																		}	// cierre de que no hay foto.. ****************



			// exista o no foto cargada, procedo a almacenar, datos anteriores y nuevos del representado

			
			


			if ( $_POST['viene_otro4'] == '2' )      // si la respuesta es no
		      { $cursaba_est4 = "6";
			    $old_repite_otro4 = "3";
			    $viene_otro4 = '2';
			    $plantel_pro4 = '.'; }

		    else {$cursaba_est4 = $_POST["cursaba_est4"];
			$old_repite_otro4 = $_POST["old_repite_otro4"];
			$viene_otro4 = '1';

			$plantel_pro4 = mysqli_real_escape_string($enlace,$_POST['plantel_pro4']); }



			if ( empty($_POST['esc_ciudad_est4']) )      // si esta vacío
		      {$esc_ciudad_est4 = "29"; }

		      else {$esc_ciudad_est4 = $_POST["esc_ciudad_est4"];}


		     if ( empty($_POST['grado_curso_otro4']) )      // si esta vacío
		      {$grado_curso_otro4 = "51"; }

		      else {$grado_curso_otro4 = $_POST["grado_curso_otro4"];}
			


					
$query_ES_DD_sob = "INSERT INTO reg_estu_sobre(id_estud, proviene_de_otro, nombre_plantel_pro, id_ciudad, id_grado, id_periodo_es, es_repitiente) 

							VALUES (   '$estu4_id',
							           '$viene_otro4',
							           '$plantel_pro4',
							           '$esc_ciudad_est4',
									   '$grado_curso_otro4',
									   '$cursaba_est4',                                                         
									   '$old_repite_otro4')";


				if (!mysqli_query($enlace,$query_ES_DD_sob))  // si no logro ingresar sobre el estudiante 1
							{
							$procede_danger4="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$errorZ="- Se han suscitado diversos errores (E4c), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlDDDDD = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu4_id' "; 

								if (mysqli_query($enlace,$sqlDDDDD))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorD = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}

						
							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro sobre el estudiante 1

								$procede_success4="<i class=\"fas fa-check-circle fa-lg\"></i>";
				            	
				            	
								// procedo a incorporar los datos de la actuacion actual del alumno en el colegio



								$cursa_est4 = $_POST["cursa_est4"];
								$grado_act4 = $_POST["grado_act4"];
								$repite_actual4 = $_POST["repite_actual4"];
								

								$edad_act4 = $_POST["edad_act4"];
								$talla_cam4 = $_POST["talla_cam4"];
								$talla_pant4 = $_POST["talla_pant4"];
								$talla_zap4 = $_POST["talla_zap4"];

								$peso_act4 = $_POST["peso_act4"];	
								$estatura_act4 = $_POST["estatura_act4"];

								$seccion_act4 = $_POST["seccion_act4"];		

					
$query_ES_DD_act = "INSERT INTO reg_estu_actual(id_estud, id_reg_pagos, cursa_actualmente, grado_actual, repite_actual, fecha_inscripcion, 
                                              edad_actual, t_camisa_act, t_pantalon_act, t_zapatos_act, peso_act, estatura_act, id_seccion)

							VALUES (   '$estu4_id', '$id_pago_DD', '$cursa_est4',
							           '$grado_act4',
							           '$repite_actual4',
							           '".mysqli_real_escape_string($enlace,$_POST['fecha_ins_act4'])."'        ,

							           '$edad_act4',
									   '$talla_cam4',
									   '$talla_pant4',
									   '$talla_zap4',

									   '$peso_act4',
									   '$estatura_act4',

									   
									   '$seccion_act4')";

				if (!mysqli_query($enlace,$query_ES_DD_act))  // si no logro ingresar sobre el estudiante 1
							{
							$actua_danger4="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$act_hist_ES4_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";

							$errorZ="- Se han suscitado diversos errores (E4d E4e), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlDDDDD = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu4_id' "; 

								if (mysqli_query($enlace,$sqlDDDDD))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorD = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}

							
							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro actual del estudiante 1

								$actua_success4="<i class=\"fas fa-check-circle fa-lg\"></i>";
								$act_hist_ES4_success="<i class=\"fas fa-check-circle fa-lg\"></i>";

	$reg_estu_actual_id4 = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado...




			

			// almacenar quien y cuando

			$query_qCF_D = "INSERT INTO quien_y_cuando_estu(id_quien, id_estud)

			VALUES ('$quien', '$estu4_id')"; 


			if (!mysqli_query($enlace,$query_qCF_D))      // si no ha logrado ingresar los datos
				{
				$errorZ="- Error, quien y cuando (ESTU4), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlDDDDD = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu4_id' "; 

								if (mysqli_query($enlace,$sqlDDDDD))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorD = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}


				mysqli_close($enlace);
				} 




							
					

				else
				            {   				            	
				            	
								// dado que todo ok, procede a guardar las observaciones existan o no...

							


							$query_ES_DD_obs = "INSERT INTO obs_estu(id_estud, obs_estud) 

							VALUES (   '$estu4_id', 
							'".mysqli_real_escape_string($enlace,$_POST['obs_text4'])."'          )";



				if (!mysqli_query($enlace,$query_ES_DD_obs))  // si no logro ingresar las observaciones del estudiante 1
							{

							$obs_danger4="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de obs 1
							$errorZ="- Se han suscitado diversos errores (E4f), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlDDDDD = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu4_id' "; 

								if (mysqli_query($enlace,$sqlDDDDD))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorD = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}

							
							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre guardar las obs del estudiante 1

								$obs_success4="<i class=\"fas fa-check-circle fa-lg\"></i>";



											if ($foto_estu4_info =="0" ) {

											$exitoZ.="- &nbsp;
														<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Representado N°4 ha sido Inscrito sin foto.\">
														R. N°4 <i class=\"fas fa-user-check fa-lg\"></i><i class=\"fas fa-eye-slash\"></i></i> &nbsp ";

														$conteo_progresoD = "1";
														$conteo_errorD = "0";

											mysqli_close($enlace);

										          }

										    else { 

										    	$exitoZ.="- &nbsp;
														<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Representado N°4 ha sido Inscrito con foto.\">
														R. N°4 <i class=\"fas fa-user-check fa-lg\"></i><i class=\"fas fa-eye\"></i></i> &nbsp ";

														$conteo_progresoD = "1";
														$conteo_errorD = "0";

														
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