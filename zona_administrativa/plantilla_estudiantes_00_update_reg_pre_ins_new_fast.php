<?php

$ci_repre_GHJAA = $_POST['ci_repreAA'];


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
					$mod_new_edad = '2';
					
				

					$mod_new_talla_cam = '1';
					$mod_new_talla_pant = '1';
					$mod_new_talla_zap = '1';
					$mod_new_peso_act = '1';
					$mod_new_estatura_act = '1';


					  $query_pagAA = "INSERT INTO reg_pagos(id_del_estud, nota_principal) VALUES ('$id_estu_GHJ', NULL)";

                   if (!mysqli_query($enlace,$query_pagAA))  
                {
$errorZ.="- Error en crear historial de pagos AA. ";

                mysqli_close($enlace); 
                }


$id_pago_AA = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado




$query_ES_AA_act = "INSERT INTO reg_estu_actual(id_estud, id_reg_pagos, cursa_actualmente, grado_actual, repite_actual, 
                                              edad_actual, t_camisa_act, t_pantalon_act, t_zapatos_act, peso_act, estatura_act) 

							VALUES (   '$id_estu_GHJ', '$id_pago_AA', '$mod_new_ciclo_actual',
							           '$mod_new_grado_actual',
							           '$mod_new_repite',
							           

							           '$mod_new_edad',
									   '$mod_new_talla_cam',
									   '$mod_new_talla_pant',
									   '$mod_new_talla_zap',

									   '$mod_new_peso_act',
									   '$mod_new_estatura_act')";


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

						$exitoZ.="- &nbsp; <i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Representado ha sido Pre-Inscrito.\"> 
						<i class=\"fas fa-user-check fa-lg\"></i><i class=\"fas fa-eye\"></i></i> &nbsp";





            		        $i_not = 1;                  // crea los registros de las notas
                            $times_to_run = 14;
                
			                while ($i_not <= $times_to_run)  
			                {

							$query_notas = "INSERT INTO asign_notas(id_reg_estu_actual, id_estud, materia) 
							VALUES ( '$reg_estu_actual_id1',  '$id_estu_GHJ', '$i_not' )";
							$q_notas = mysqli_query($enlace, $query_notas) or die(mysqli_error());

							$i_not++;

							 }   




							  // elimina si existe cualquier registro en extra catedras
               $querydeleteee_cat = "DELETE FROM extra_catedra WHERE id_estud = '$id_estu_GHJ'";

              $datos_querydeleteee_cat = mysqli_query($enlace, $querydeleteee_cat) or die(mysqli_error());





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





    $sqlPP1="UPDATE reg_estudiantes
                    SET regular = '1'
                  
                    WHERE id_estud = '$id_estu_GHJ' ";

              
            if (!mysqli_query($enlace,$sqlPP1))      // actualiza y si no logra ingresar los datos...
               {
                        $errorZ .="- Estatus No OK.";
  
        mysqli_close($enlace);
               }               

            else{

$enlaceAA = "<b><a href=\"plantilla_representantes_pagos_ci_el.php?tituloJKL=Historial&ciclo=".$mod_new_ciclo_actual."&alertin=100&criterio=".$ci_repre_GHJAA."\">Agendar Pago.</a></b>";


$boton_visible = 'none';

                          $exitoZ .= "- Estatus OK. &nbsp;&nbsp; ".$enlaceAA." " ; 

        }




																mysqli_close($enlace);

																}
															
															} 

				}


?>