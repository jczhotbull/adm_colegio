<?php

$id_estu_GHJ = $_POST["id_estu_GHJ"];	

 		$mod_nombres_estud = mysqli_real_escape_string($enlace,$_POST['mod_nombres_estud']);
 		$mod_apellidos_estud = mysqli_real_escape_string($enlace,$_POST['mod_apellidos_estud']);

 		$mod_exp_estud = mysqli_real_escape_string($enlace,$_POST['mod_exp_estud']);

 		$mod_ci_estud = mysqli_real_escape_string($enlace,$_POST['mod_ci_estud']);

        $mod_genero_estud = $_POST["mod_genero_estud"];

        $mod_nacimiento_estud = $_POST["mod_nacimiento_estud"];


        $mod_ciudad_nac_estud = $_POST["mod_ciudad_nac_estud"];
        $mod_entidad_fed_estud = $_POST["mod_entidad_fed_estud"];
        $mod_pais_estud = $_POST["mod_pais_estud"];

        
        $mod_religion_estud = $_POST["mod_religion_estud"];
        $mod_medico_estud = $_POST["mod_medico_estud"];
        $mod_sangre_estud = $_POST["mod_sangre_estud"];
       
       



$sql_upd_estud = "UPDATE reg_estudiantes 
										SET estu_expediente = '$mod_exp_estud',
										  nombre_estu = '$mod_nombres_estud',
										  apellidos_estu = '$mod_apellidos_estud',

										  nacimiento_estu = '$mod_nacimiento_estud',
										  
										  id_sexo = '$mod_genero_estud',
										  id_ciudad = '$mod_ciudad_nac_estud',
										  id_estado = '$mod_entidad_fed_estud',
										 
										  id_pais = '$mod_pais_estud',
										  id_religion = '$mod_religion_estud',
										  
										  ci_estu = '$mod_ci_estud',

										  id_medico = '$mod_medico_estud',
										  id_sangre =	'$mod_sangre_estud'

										WHERE id_estud = '$id_estu_GHJ' ";


                       
            if (!mysqli_query($enlace,$sql_upd_estud))      // actualiza y si no logra ingresar los datos...
               {
                				$errorZ .=" &nbsp;&nbsp;&nbsp;
								<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos del representado no actualizados.\">
								<i class=\"fas fa-user-graduate fa-lg\"></i></i> &nbsp ";

	
				mysqli_close($enlace);


               }               

            else{    // procede a guardar los datos del representado



            		$exitoZ .= " &nbsp;&nbsp;&nbsp;
									<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos del representado actualizados.\">
									<i class=\"fas fa-user-graduate fa-lg\"></i></i> &nbsp ";




		$id_reg_estu_sobre_GHJ = $_POST["id_reg_estu_sobre_GHJ"];	

		$mod_proviene_estud = $_POST["mod_proviene_estud"];
		$mod_nombre_plantel_estud = mysqli_real_escape_string($enlace,$_POST['mod_nombre_plantel_estud']);

        $mod_lugar_estud = $_POST["mod_lugar_estud"];
        $mod_grado_cur_estud = $_POST["mod_grado_cur_estud"]; 	

        $mod_ciclo_cur_estud = $_POST["mod_ciclo_cur_estud"];

        $mod_repitiente_estud = $_POST["mod_repitiente_estud"]; 


$sql_upd_estud = "UPDATE reg_estu_sobre 
										SET proviene_de_otro = '$mod_proviene_estud',
										  nombre_plantel_pro = '$mod_nombre_plantel_estud',
										  id_ciudad = '$mod_lugar_estud',

										  id_grado = '$mod_grado_cur_estud',
										  
										  id_periodo_es = '$mod_ciclo_cur_estud',
										  es_repitiente = '$mod_repitiente_estud'

										WHERE id_reg_estu_sobre = '$id_reg_estu_sobre_GHJ' ";


                       
            if (!mysqli_query($enlace,$sql_upd_estud))      // actualiza y si no logra ingresar los datos...
               {
                				$errorZ .=" &nbsp; , &nbsp;&nbsp;
								<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos de procedencia no actualizados.\">
								<i class=\"fas fa-chalkboard-teacher fa-lg\"></i></i> &nbsp ";
	
				mysqli_close($enlace);
               }               




               else{  // logro guardar los datos de procedencia

                    			$exitoZ .= " &nbsp; , &nbsp;&nbsp;
									<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos de procedencia actualizados.\">
									<i class=\"fas fa-chalkboard-teacher fa-lg\"></i></i> &nbsp "; 



		
					$id_reg_estu_actual_hoy = $_POST["id_reg_estu_actual_hoy"];	

					$mod_grado_actual = $_POST["mod_grado_actual"];
					$mod_seccion_actual = $_POST["mod_seccion_actual"];
					$mod_ciclo_actual = $_POST["mod_ciclo_actual"];




$sql_upd_actual_hoy = "UPDATE reg_estu_actual 
										SET cursa_actualmente = '$mod_ciclo_actual',
										  grado_actual = '$mod_grado_actual',
										  id_seccion = '$mod_seccion_actual'

										WHERE id_reg_estu_actual = '$id_reg_estu_actual_hoy' ";


                       
            if (!mysqli_query($enlace,$sql_upd_actual_hoy))      // actualiza y si no logra ingresar los datos...
               {
                				$errorZ .=" &nbsp; , &nbsp;&nbsp;
								<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos actuales de estudio no actualizados.\">
								<i class=\"fas fa-stopwatch fa-lg\"></i></i> &nbsp ";
	
				mysqli_close($enlace);
               }               




                else{   // guardo los datos de estudio

                    			$exitoZ .= " &nbsp; , &nbsp;&nbsp;
									<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos actuales de estudio actualizados.\">
									<i class=\"fas fa-stopwatch fa-lg\"></i></i> &nbsp "; 



					$id_obs_estud = $_POST["id_obs_estud"];	

					$mod_obs_text = $_POST["mod_obs_text"];





$sql_upd_observaciones = "UPDATE obs_estu 
										SET obs_estud = '$mod_obs_text'

										WHERE id_obs_estu = '$id_obs_estud' ";


                       
            if (!mysqli_query($enlace,$sql_upd_observaciones))      // actualiza y si no logra ingresar los datos...
               {
                				$errorZ .=" &nbsp; , &nbsp;&nbsp;
								<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Observaciones no actualizadas.\">
								<i class=\"far fa-eye fa-lg\"></i></i> &nbsp ";
	
				mysqli_close($enlace);
               }  




                 else{
                    			$exitoZ .= " &nbsp; , &nbsp;&nbsp;
									<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Observaciones actualizadas.\">
									<i class=\"far fa-eye fa-lg\"></i></i> &nbsp "; 



				

					$mod_fecha_cita = $_POST["mod_fecha_cita"];

					$mod_hora = $_POST["time"];

					$mod_causa = $_POST["mod_causa"];

					$mod_nota_cita = mysqli_real_escape_string($enlace,$_POST['mod_nota_cita']);	

					$mod_responsable_cita = $_POST["mod_responsable_cita"];





$sql_upd_citas = "INSERT INTO citas (id_estud, fecha_cita, hora_cita, causa_cita, nota_cita, responsable_cita, email_cita_si_o_no, acuse_recibo)
                  
                  VALUES ( '$id_estu_GHJ', '$mod_fecha_cita', '$mod_hora', '$mod_causa', '$mod_nota_cita', '$mod_responsable_cita', '0', '0' )

                   ";


                       
            if (!mysqli_query($enlace,$sql_upd_citas))      // actualiza y si no logra ingresar los datos...
               {
                				$errorZ .=" &nbsp; , &nbsp;&nbsp;
								<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Citación No Creada.\">
								<i class=\"far fa-calendar-alt fa-lg\"></i></i> &nbsp ";
	
				mysqli_close($enlace);
               }  




                 else{


                 	$last_id = mysqli_insert_id($enlace);


                    			$exitoZ .= " &nbsp; , &nbsp;&nbsp;
									<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Citación Creada.\">
									<i class=\"far fa-calendar-alt fa-lg\"></i></i> &nbsp ";  



		$email_request = " SELECT reg_representante.id_repre, reg_representante.email_repre, reg_estudiantes.id_estud
					     FROM reg_estu_repre_all, reg_representante, reg_estudiantes 

         WHERE  reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = '$id_estu_GHJ'
                 
        
         LIMIT 1 ";

$datos_estudiantesTT = mysqli_query($enlace, $email_request);

$row_datos_estudiantesTT = mysqli_fetch_array($datos_estudiantesTT);


 $el_email_es =  $row_datos_estudiantesTT['email_repre']; 


mysqli_close($enlace);


					


						 if ($el_email_es != '' )
            	{   
            		

            		 $conexion = @fsockopen("www.google.com", 80, $errno, $errstr, 30); 
					if (!$conexion) { 
					$enviado="0";
					$errorZ .="- Sin internet, email no enviado.";

					}

					 else { 
					$enviado="1";				
					fclose($conexion); 

include("../conectar.php");

$queryplantel = "SELECT * FROM z_plantel LIMIT 1";

$datos_queryplantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());

$row_datos_queryplantel = mysqli_fetch_array($datos_queryplantel); 

$www = $row_datos_queryplantel["www"];
					
mysqli_close($enlace);

			 $diaf = date('d', strtotime($mod_fecha_cita));
            $mesf = date('n', strtotime($mod_fecha_cita)); 
             
            $mf="";
            switch ($mesf) {
                case 1:$mf="Enero"; break;
                case 2:$mf="Febrero"; break;
                case 3:$mf="Marzo"; break;
                case 4:$mf="Abril"; break;
                case 5:$mf="Mayo"; break;
                case 6:$mf="Junio"; break;
                case 7:$mf="Julio"; break;
                case 8:$mf="Agosto"; break;
                case 9:$mf="Septiembre"; break;
                case 10:$mf="Octubre"; break;
                case 11:$mf="Noviembre"; break;
                case 12:$mf="Diciembre"; break;
            }



					$email =  $el_email_es;

			    $correo = "Reciba un cordial saludo, el siguiente correo tiene como finalidad, hacerle de su conocimiento que hemos colocado en nuestra agenda, una reunión con usted y su representado: 	$mod_apellidos_estud, $mod_nombres_estud, dicha cita ha sido programada para el próximo $diaf de $mf  a las  $mod_hora.


                           \n Motivo / Causa de la reunión: $mod_causa. 
                           \n Atendido en o por:  $mod_responsable_cita

                           \n Para leer la nota completa relacionada con la reunión, cancelarla y/o confirmar asistencia, ingrese al sistema On-line $www y consulte el apartado -Citas y Observaciones-, muchas gracias por la atención brindada.";

				mail($email,"Agendar Citación", $correo);  


				include("../conectar.php");

				$sql_anu = "UPDATE citas SET email_cita_si_o_no = '1'			   									 
				                                
				                                         WHERE id_cita='$last_id' LIMIT 1 ";


					        if (!mysqli_query($enlace,$sql_anu))      // actualiza y si no ha logrado ingresar los datos
					               {
					                $errorZ .="- Posiblemente el email, no ha sido enviado.";
					                mysqli_close($enlace);
					              
					                }

					         else{

					                $exitoZ .= "- El email informativo ha sido enviado."; 
					                mysqli_close($enlace);   

					            }




					} 







                }


                else {

                	$errorZ .="- El representante no dispone de email.";
                }











				}             
















      				}      // donde guardo el obs y la citacion       









           } // cierre del guardado de datos de estudio


           } // guardo los datos de procedencia.



            }   // cierre donde guardo los datos del representado






?>