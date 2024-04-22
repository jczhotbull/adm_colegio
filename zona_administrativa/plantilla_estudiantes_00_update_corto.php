<?php

$id_estu_GHJ = $_POST["id_estu_GHJ"];	

 		$mod_nombres_estud = mysqli_real_escape_string($enlace,$_POST['mod_nombres_estud']);

$mod_municipio_estud = mysqli_real_escape_string($enlace,$_POST['mod_municipio_estud']);

 		$mod_apellidos_estud = mysqli_real_escape_string($enlace,$_POST['mod_apellidos_estud']);

 		$mod_exp_estud = mysqli_real_escape_string($enlace,$_POST['mod_exp_estud']);

 		$mod_ci_estud = mysqli_real_escape_string($enlace,$_POST['mod_ci_estud']);


 		$mod_vive_con_estud = mysqli_real_escape_string($enlace,$_POST['mod_vive_con_estud']);
 		$mod_traslada_estud = mysqli_real_escape_string($enlace,$_POST['mod_traslada_estud']);
 		$mod_alergias_estud = mysqli_real_escape_string($enlace,$_POST['mod_alergias_estud']);
 		$mod_padecio_estud = mysqli_real_escape_string($enlace,$_POST['mod_padecio_estud']);




        $mod_genero_estud = $_POST["mod_genero_estud"];

        $mod_nacimiento_estud = $_POST["mod_nacimiento_estud"];


        $mod_ciudad_nac_estud = $_POST["mod_ciudad_nac_estud"];
        $mod_entidad_fed_estud = $_POST["mod_entidad_fed_estud"];
        $mod_pais_estud = $_POST["mod_pais_estud"];

        
        $mod_religion_estud = $_POST["mod_religion_estud"];
        $mod_medico_estud = $_POST["mod_medico_estud"];
        $mod_sangre_estud = $_POST["mod_sangre_estud"];

        $mod_email_estud = $_POST["mod_email_estud"];
       
       



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
										  id_sangre =	'$mod_sangre_estud',
										  email_estu = '$mod_email_estud',
										 municipio_est = '$mod_municipio_estud',

										  vive_con = '$mod_vive_con_estud',
										  se_traslada_en = '$mod_traslada_estud',
										  enf_padecidas = '$mod_padecio_estud',   
										  alergico_a = '$mod_alergias_estud'

										WHERE id_estud = '$id_estu_GHJ' ";


                       
            if (!mysqli_query($enlace,$sql_upd_estud))      // actualiza y si no logra ingresar los datos...
               {
                				$errorZ .=" &nbsp; , &nbsp;&nbsp;
								<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos del representado no actualizados.\">
								<i class=\"fas fa-user-graduate fa-lg\"></i></i> &nbsp ";

	
				mysqli_close($enlace);


               }               

            else{    // procede a guardar los datos del representado



            		$exitoZ .= " &nbsp; , &nbsp;&nbsp;
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

mysqli_close($enlace);

				}             









           } // cierre del guardado de datos de estudio


           } // guardo los datos de procedencia.



            }   // cierre donde guardo los datos del representado






?>