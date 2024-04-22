<?php

include("../conectar.php"); 

// estudiante 3
$num_cedula = mysqli_real_escape_string($enlace,$_POST['cedula']);

			$genero_est3 = $_POST["genero_est3"];
			$ciudad_est3 = $_POST["ciudad_est3"];
			$estado_est3 = $_POST["estado_est3"];


			$pais_nac_est3 = '36';
			$religion_act3 = '11';
			$padece_act3 = '20';
			$sangre_act3 = '9';	

			$mod_email_estu_act3 = 'colegio@colegio.col';

			

$mod_se_retira_con_act3 = 'actualizar';
    $mod_control_med_act3 = '.';
    $v_otra_act3 = '.';

    $v1_act3 = 'No';  $v2_act3 = 'No';  $v3_act3 = 'No';  $v4_act3 = 'No';
    $v5_act3 = 'No';  $v6_act3 = 'No';  $v7_act3 = 'No';  $v8_act3 = 'No';
    $v9_act3 = 'No';  $v10_act3 = 'No';  $v11_act3 = 'No';  $v12_act3 = 'No';
    $v13_act3 = 'No';  $v14_act3 = 'No';  $v15_act3 = 'No'; 

    $mod_medicamentos_act3 = '.';	

$query_ES_CC = "INSERT INTO reg_estudiantes(estu_expediente, nombre_estu, apellidos_estu, nacimiento_estu, id_sexo, id_ciudad,
			                                id_estado, id_pais, id_religion, ci_estu, id_medico, id_sangre, email_estu, municipio_est, vive_con, se_traslada_en, enf_padecidas, alergico_a, se_retira_con, control_med, v1, v2, v3, v4, v5, v6, v7, v8, v9, v10, v11, v12, v13, v14, v15, v_otra, medicamentos) 

							VALUES (   '".mysqli_real_escape_string($enlace,$_POST['expediente_est3'])."'          ,
							           '".mysqli_real_escape_string($enlace,$_POST['nombres_est3'])."'            ,
									   '".mysqli_real_escape_string($enlace,$_POST['apellidos_est3'])."'          ,
									   '".mysqli_real_escape_string($enlace,$_POST['fecha_nac_est3'])."'        ,

										'$genero_est3', '$ciudad_est3', '$estado_est3', '$pais_nac_est3', '$religion_act3',

									   '".mysqli_real_escape_string($enlace,$_POST['cedula_est3'])."'          ,									   

										'$padece_act3', '$sangre_act3', '$mod_email_estu_act3',  'actualizar'    ,

										'actualizar'          ,
							           'actualizar'            ,
									   'no'          ,
									   'no'        ,

                     '$mod_se_retira_con_act3', '$mod_control_med_act3',
                     '$v1_act3', '$v2_act3', '$v3_act3', '$v4_act3', '$v5_act3', '$v6_act3', '$v7_act3', '$v8_act3', '$v9_act3',
                     '$v10_act3', '$v11_act3', '$v12_act3', '$v13_act3', '$v14_act3', '$v15_act3',

                     '$v_otra_act3', '$mod_medicamentos_act3' 


										 )";


				if (!mysqli_query($enlace,$query_ES_CC))  // si no logro ingresar el estudiante 1
							{
							$datosES3_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$errorZ="- Se han suscitado diversos errores (E3a), consulte las alertas visuales y contacte al Ing. ";
							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro del estudiante 1

				            $datosES3_success="<i class=\"fas fa-check-circle fa-lg\"></i>";  // coloca success al lado de estu 1
				            $estu3_id = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado es decir el del estudiante 1



  $query_pagCC = "INSERT INTO reg_pagos(id_del_estud, nota_principal) VALUES ('$estu3_id', NULL)";

				           if (!mysqli_query($enlace,$query_pagCC))  
								{
$errorZ.="- Error en crear historial CC. ";

$sqlCCCC = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu3_id' "; 

								if (mysqli_query($enlace,$sqlCCCC))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorC = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}


								mysqli_close($enlace); 
								}


				else {


					$id_pago_CC = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado		


							$query_CC_repre = "INSERT INTO reg_estu_repre_all(id_repre, id_estu) VALUES ( '$repre_id', '$estu3_id')";



								if (!mysqli_query($enlace,$query_CC_repre))  // si no logro asociar el estudiante 1 con su representante
								{
								$datosES3_repre_danger="<i class=\"fas fa-user-friends fa-lg\"></i>";  // coloca danger al lado de estu repre 1
								$errorZ="- Se han suscitado diversos errores (E3b), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlCCCCC = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu3_id' "; 

								if (mysqli_query($enlace,$sqlCCCCC))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorC = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}

								mysqli_close($enlace); 
								}
						

					else
					            {   // proceso de asociacion correcto
			
			 $datosES3_repre_success="<i class=\"fas fa-user-friends fa-lg\"></i>";  // coloca success al lado de estu repre 1    
								

					            	clearstatcache();
									$filename_estu3 = '../0 Croppie/foto_estu3' .$fotPP. '.png';
									$foto_estu3_info ="0";

						/*new*/  	$filename_ci_estu3 = '../0 Croppie/ci_est_act3' .$fotPP. '.png';
						/*new*/		$ci_estu3_info ="0";

									$expediente3 = $_POST['expediente_est3'];


															if (file_exists($filename_estu3 ))     // de haber una foto le cambia el nombre y la mueve a otro lugar
																		{
																			$foto_estu3_info ="1";

																			$image_estu3 = imagecreatefrompng("../0 Croppie/foto_estu3" .$fotPP.  ".png");  
																				           unlink("../0 Croppie/foto_estu3" .$fotPP.  ".png");
																				           imagejpeg($image_estu3,"../0 Croppie/foto_estu3" .$fotPP.  ".png",90); // comprimer la imagen  
																					
																					$ext_estu = 'png';
																					
																					/* $newfilename = '../zz_fotos_l/logocropx.png'; */

																					$newfilename_estu3 = "../zz_fotos_estudiantes/".$estu3_id."_".$expediente3.".".$ext_estu;

																						if(rename($filename_estu3,$newfilename_estu3))
																		{	

															$query_foto_estu3 = "UPDATE reg_estudiantes SET foto_estu = '$newfilename_estu3' WHERE id_estud='$estu3_id' LIMIT 1 ";					

																				if (!mysqli_query($enlace,$query_foto_estu3))      // si no ha logrado ingresar la foto
																							   {

																			   $foto_dangerC="<i class=\"fas fa-times-circle fa-lg\"></i>";  // ha fallado	
																			   $foto_estu3_info ="0";
																			   unlink($newfilename_estu3);

															                         
																							   }

																				else {
																				$foto_successC="<i class=\"far fa-image fa-lg\"></i>";   // coloca success al lado de foto.
																					}   
																		}

																			else{   // fallo al renombrar

																					 $foto_dangerC="<i class=\"fas fa-times-circle fa-lg\"></i>";
																					 $foto_estu3_info ="0";
																					  unlink($filename_estu3);
															                         
																					}	

																		}	// cierre de que no hay foto.. ****************



						/*news */   	if (file_exists($filename_ci_estu3 ))     // de haber una foto le cambia el nombre y la mueve a otro lugar
																		{
																			$ci_estu3_info ="1";
																			$image_ci_estu3 = imagecreatefrompng("../0 Croppie/ci_est_act3" .$fotPP.  ".png");  
																				              unlink("../0 Croppie/ci_est_act3" .$fotPP.  ".png");
																				              imagejpeg($image_ci_estu3,"../0 Croppie/ci_est_act3" .$fotPP.  ".png",90); // comprimer la imagen 
																					$ext_estu = 'png';
																					$newfilename_ci_estu3 = "../zz_fotos_estudiantes_ci/".$estu3_id."_".$expediente3.".".$ext_estu;

																						if(rename($filename_ci_estu3,$newfilename_ci_estu3))
																		{	
															$query_ci_estu3 = "UPDATE reg_estudiantes SET foto_ci_est = '$newfilename_ci_estu3' WHERE id_estud='$estu3_id' LIMIT 1 ";	
																				if (!mysqli_query($enlace,$query_ci_estu3))      // si no ha logrado ingresar la foto
																							   {
																			   $ci_danger_act3="<i class=\"fas fa-exclamation-triangle fa-lg\"></i>";  // ha fallado	
																			   $ci_estu3_info ="0";
																			   unlink($newfilename_ci_estu3);	   													                         
																							   }

																				else {   
																				$ci_success_act3 ="<i class=\"far fa-thumbs-up fa-lg\"></i>";   // coloca success al lado de foto.
																					}   
																		}
																			else{   // fallo al renombrar
																					 $ci_danger_act3="<i class=\"fas fa-exclamation-triangle fa-lg\"></i>";
																					 $ci_estu3_info ="0";
																					  unlink($filename_ci_estu3);															                         
																					}	
																		}	// cierre de que no hay cedula.. ****************



			// exista o no foto cargada, procedo a almacenar, datos anteriores y nuevos del representado

			
			


			if ( $_POST['viene_otro3'] == '2' )      // si la respuesta es no
		      { $cursaba_est3 = "6";
			    $old_repite_otro3 = "3";
			    $viene_otro3 = '2';
			    $plantel_pro3 = '.'; }

		    else {$cursaba_est3 = $_POST["cursaba_est3"];
			$old_repite_otro3 = $_POST["old_repite_otro3"];
			$viene_otro3 = '1';

			$plantel_pro3 = mysqli_real_escape_string($enlace,$_POST['plantel_pro3']); }



			if ( empty($_POST['esc_ciudad_est3']) )      // si esta vacío
		      {$esc_ciudad_est3 = "29"; }

		      else {$esc_ciudad_est3 = $_POST["esc_ciudad_est3"];}


		     if ( empty($_POST['grado_curso_otro3']) )      // si esta vacío
		      {$grado_curso_otro3 = "51"; }

		      else {$grado_curso_otro3 = $_POST["grado_curso_otro3"];}
			
 $mod_areas_pendientes3 = $_POST["mod_areas_pendientes3"];

					
$query_ES_CC_sob = "INSERT INTO reg_estu_sobre(id_estud, proviene_de_otro, nombre_plantel_pro, id_ciudad, id_grado, id_periodo_es, es_repitiente, areas_pendientes) 

							VALUES (   '$estu3_id',
							           '$viene_otro3',
							           '$plantel_pro3',
							           '$esc_ciudad_est3',
									   '$grado_curso_otro3',
									   '$cursaba_est3',                                                         
									   '$old_repite_otro3', '$mod_areas_pendientes3' )";


				if (!mysqli_query($enlace,$query_ES_CC_sob))  // si no logro ingresar sobre el estudiante 1
							{
							$procede_danger3="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$errorZ="- Se han suscitado diversos errores (E3c), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlCCCCC = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu3_id' "; 

								if (mysqli_query($enlace,$sqlCCCCC))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorC = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}

							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro sobre el estudiante 1

								$procede_success3="<i class=\"fas fa-check-circle fa-lg\"></i>";
				            	
				            	
								// procedo a incorporar los datos de la actuacion actual del alumno en el colegio



								$cursa_est3 = $_POST["cursa_est3"];
								$grado_act3 = $_POST["grado_act3"];
								$repite_actual3 = $_POST["repite_actual3"];
								

								$edad_act3 = '2';
								$talla_cam3 = '1';
								$talla_pant3 = '1';
								$talla_zap3 = '1';

								$peso_act3 = '1';	
								$estatura_act3 = '1';	

					
$query_ES_CC_act = "INSERT INTO reg_estu_actual(id_estud, id_reg_pagos, cursa_actualmente, grado_actual, repite_actual, 
                                              edad_actual, t_camisa_act, t_pantalon_act, t_zapatos_act, peso_act, estatura_act) 

							VALUES (   '$estu3_id', '$id_pago_CC', '$cursa_est3',
							           '$grado_act3',
							           '$repite_actual3',
							           

							           '$edad_act3',
									   '$talla_cam3',
									   '$talla_pant3',
									   '$talla_zap3',

									   '$peso_act3',
									   '$estatura_act3')";


				if (!mysqli_query($enlace,$query_ES_CC_act))  // si no logro ingresar sobre el estudiante 1
							{
							$actua_danger3="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estu 1
							$act_hist_ES3_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";

							$errorZ="- Se han suscitado diversos errores (E3d E3e), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlCCCCC = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu3_id' "; 

								if (mysqli_query($enlace,$sqlCCCCC))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorC = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}

							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre realizar el registro actual del estudiante 1

								$actua_success3="<i class=\"fas fa-check-circle fa-lg\"></i>";
								$act_hist_ES3_success="<i class=\"fas fa-check-circle fa-lg\"></i>";

	$reg_estu_actual_id3 = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado...




			

			// almacenar quien y cuando

			$query_qCF_C = "INSERT INTO quien_y_cuando_estu(id_quien, id_estud)

			VALUES ('$quien', '$estu3_id')"; 


			if (!mysqli_query($enlace,$query_qCF_C))      // si no ha logrado ingresar los datos
				{
				$errorZ="- Error, quien y cuando (ESTU3), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlCCCCC = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu3_id' "; 

								if (mysqli_query($enlace,$sqlCCCCC))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorC = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}


				mysqli_close($enlace);
				} 




							
					

				else
				            {   		            	
				            	
								// dado que todo ok, procede a guardar las observaciones existan o no...

							
				            $query_fastest_madre = "INSERT INTO reg_madre(id_estud) 
							VALUES (   '$estu3_id' )";
                            $q_madre = mysqli_query($enlace, $query_fastest_madre) or die(mysqli_error());


							$query_fastest_padre = "INSERT INTO reg_padre(id_estud) 
							VALUES (   '$estu3_id' )";
							$q_padre = mysqli_query($enlace, $query_fastest_padre) or die(mysqli_error());


							$i_not = 1;
                            $times_to_run = 14;
                
			                while ($i_not <= $times_to_run)
			                {

							$query_notas = "INSERT INTO asign_notas(id_reg_estu_actual, id_estud, materia) 
							VALUES ( '$reg_estu_actual_id3',  '$estu3_id', '$i_not' )";
							$q_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());

							$i_not++;

							 }     





							$query_ES_CC_obs = "INSERT INTO obs_estu(id_estud, obs_estud) 

							VALUES (   '$estu3_id', 
							'...'          )";



				if (!mysqli_query($enlace,$query_ES_CC_obs))  // si no logro ingresar las observaciones del estudiante 1
							{

							$obs_danger3="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de obs 1
							$errorZ="- Se han suscitado diversos errores (E3f), intente de nuevo, de ser necesario contacte al Ing. ";


								// secuencia que borra al estudiante 2.


								$sqlCCCCC = "DELETE FROM reg_estudiantes WHERE id_estud = '$estu3_id' "; 

								if (mysqli_query($enlace,$sqlCCCCC))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Reg Estu Clear!!! &nbsp ";
								$conteo_errorC = "1";
								}
								else {$errorZ.="- &nbsp; Reg Estu Not-Clear!!! &nbsp ";}

														
							mysqli_close($enlace); 
							}
					

				else
				            {   // en caso de que logre guardar las obs del estudiante 1

								$obs_success3="<i class=\"fas fa-check-circle fa-lg\"></i>";



											if ($foto_estu3_info =="0" ) {

											$exitoZ.="- &nbsp;
														<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"N°3 ha sido Pre-Inscrito sin foto.\">
														R. N°3 <i class=\"fas fa-user-check fa-lg\"></i><i class=\"fas fa-eye-slash\"></i></i> &nbsp ";

														$conteo_progresoC = "1";
														$conteo_errorC = "0";

											mysqli_close($enlace);


											 if($number_alum == '3' && $conteo_errorA == '0' )     
																    {

																$exitoZ.="- &nbsp;														
											<b><a href=\"plantilla_representantes_pagos.php?tituloJKL=Historial&ciclo=".$cursa_est1."&alertin=100&criterio=".$num_cedula."\"><i class=\"fas fa-link\"></i> Agendar Pagos!</a></b>		 ";
											$mostrar_form = 'none';

																    }

										          }

										    else { 

										    	$exitoZ.="- &nbsp;
														<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"N°3 ha sido Pre-Inscrito con foto.\">
														R. N°3 <i class=\"fas fa-user-check fa-lg\"></i><i class=\"fas fa-eye\"></i></i> &nbsp ";

														$conteo_progresoC = "1";
														$conteo_errorC = "0";


											    mysqli_close($enlace);


											     if($number_alum == '3' && $conteo_errorA == '0' )  
																    {

																$exitoZ.="- &nbsp;														
											<b><a href=\"plantilla_representantes_pagos.php?tituloJKL=Historial&ciclo=".$cursa_est1."&alertin=100&criterio=".$num_cedula."\"><i class=\"fas fa-link\"></i> Agendar Pagos!</a></b>		 ";
											$mostrar_form = 'none';

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