<?php

				$id_estu_GHJ = $_POST['editar_new_selecc'];


$id_anterior_quien_y_cuando = "SELECT id_q_y_c_estu, id_estud FROM quien_y_cuando_estu where id_estud ='$id_estu_GHJ' limit 1 ";

              $datos_mod2 = mysqli_query($enlace, $id_anterior_quien_y_cuando) or die(mysqli_error());

              $row_datos_mod2 = mysqli_fetch_assoc($datos_mod2);

              $este_es_el_dicho_id = $row_datos_mod2['id_q_y_c_estu'];




				$id_reg_estu_actual_hoy = $_POST["id_reg_estu_actual_hoy"];	

                $sql_upd_actual_hoy = "UPDATE reg_estu_actual 
				SET el_activo = '0'
				WHERE id_reg_estu_actual = '$id_reg_estu_actual_hoy' ";

       
            if (!mysqli_query($enlace,$sql_upd_actual_hoy))      // actualiza y si no logra ingresar los datos...
               {
                				$errorZ .=" &nbsp; &nbsp;
								<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos anteriores no actualizados.\">
								<i class=\"fas fa-stopwatch fa-lg\"></i></i> &nbsp ";
	
				mysqli_close($enlace);
               }               

            else{
                    			$exitoZ .= " &nbsp; &nbsp;
									<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos anteriores actualizados.\">
									<i class=\"fas fa-stopwatch fa-lg\"></i></i> &nbsp "; 

					$mod_new_ciclo_actual = $_POST["mod_new_ciclo_actual"];
					$mod_new_grado_actual = $_POST["mod_new_grado_actual"];

					$mod_new_repite = $_POST["mod_new_repite"];
					$mod_new_edad = $_POST["mod_new_edad"];
					$mod_new_fecha_ins = $_POST["mod_new_fecha_ins"];
					$mod_new_seccion_actual = $_POST["mod_new_seccion_actual"];

					$mod_new_talla_cam = $_POST["mod_new_talla_cam"];
					$mod_new_talla_pant = $_POST["mod_new_talla_pant"];
					$mod_new_talla_zap = $_POST["mod_new_talla_zap"];
					$mod_new_peso_act = $_POST["mod_new_peso_act"];
					$mod_new_estatura_act = $_POST["mod_new_estatura_act"];


					  $query_pagAA = "INSERT INTO reg_pagos(id_del_estud, nota_principal) VALUES ('$id_estu_GHJ', NULL)";

                   if (!mysqli_query($enlace,$query_pagAA))  
                {
$errorZ.="- Error en crear historial de pagos AA. ";

                mysqli_close($enlace); 
                }


$id_pago_AA = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado


$query_ES_AA_act = "INSERT INTO reg_estu_actual(id_estud, id_reg_pagos, cursa_actualmente, grado_actual, repite_actual, fecha_inscripcion,
                                              edad_actual, t_camisa_act, t_pantalon_act, t_zapatos_act, peso_act, estatura_act, id_seccion) 

							VALUES (   '$id_estu_GHJ', '$id_pago_AA', '$mod_new_ciclo_actual',
							           '$mod_new_grado_actual',
							           '$mod_new_repite',
							           '$mod_new_fecha_ins',

							           '$mod_new_edad',
									   '$mod_new_talla_cam',
									   '$mod_new_talla_pant',
									   '$mod_new_talla_zap',

									   '$mod_new_peso_act',
									   '$mod_new_estatura_act',
									 
									   '$mod_new_seccion_actual')";


				if (!mysqli_query($enlace,$query_ES_AA_act))  // si no logro ingresar sobre el estudiante 1
							{
							

							$errorZ="- Se han suscitado diversos errores, intente de nuevo, de ser necesario contacte al Ing. ";


				$sql_upd_actual_hoy = "UPDATE reg_estu_actual 
				SET el_activo = '1'
				WHERE id_reg_estu_actual = '$id_reg_estu_actual_hoy' ";

       
            if (!mysqli_query($enlace,$sql_upd_actual_hoy))      // actualiza y si no logra ingresar los datos...
               {
                				$errorZ .=" &nbsp; &nbsp;
								<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos No Re-Establecidos.\">
								<i class=\"fas fa-stopwatch fa-lg\"></i></i> &nbsp ";
	
				mysqli_close($enlace);
               }               

            else{


            	$exitoZ .= " &nbsp; &nbsp;
									<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos Re-Establecidos.\">
									<i class=\"fas fa-stopwatch fa-lg\"></i></i> &nbsp "; 

						
							mysqli_close($enlace); 
					}
					

				}


				else
				            {   // 0404 en caso de que logre realizar el registro actual del estudiante 								

	$reg_estu_actual_id1 = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado...

						$exitoZ.="- &nbsp; <i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Representado ha sido Re-Inscrito.\"> 
						<i class=\"fas fa-user-check fa-lg\"></i><i class=\"fas fa-eye\"></i></i> &nbsp";

										// almacenar quien y cuando

						$quien = $_POST["quien"];

														$query_qCF_A = "UPDATE quien_y_cuando_estu
														                set id_quien= '$quien',
														                   cuando_estu = now()
														                
														WHERE id_q_y_c_estu = '$este_es_el_dicho_id' ";


														if (!mysqli_query($enlace,$query_qCF_A))      // si no ha logrado ingresar los datos
															{
															$errorZ.="- Error, quien y cuando.";
															mysqli_close($enlace); }

															
															else {$exitoZ.="- &nbsp; Éxito quien y cuando!!! &nbsp ";

																mysqli_close($enlace);

																}
															
															} 

				}


?>