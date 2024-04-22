<?php

		$id_repre_GHJ = $_POST["id_repre_GHJ"];	

 		$mod_nombres_repre = mysqli_real_escape_string($enlace,$_POST['mod_nombres_repre']);
 		$mod_apellidos_repre = mysqli_real_escape_string($enlace,$_POST['mod_apellidos_repre']);
 		$mod_email_repre = mysqli_real_escape_string($enlace,$_POST['mod_email_repre']);

 		$mod_ci_repre = mysqli_real_escape_string($enlace,$_POST['mod_ci_repre']);

        $mod_genero_repre = $_POST["mod_genero_repre"];

        $mod_celular_repre = mysqli_real_escape_string($enlace,$_POST['mod_celular_repre']);
        $mod_telefono_repre = mysqli_real_escape_string($enlace,$_POST['mod_telefono_repre']);

        $mod_nacimiento_repre = $_POST["mod_nacimiento_repre"];

        $mod_nacionalidad_repre = $_POST["mod_nacionalidad_repre"];
        $mod_estado_civil_repre = $_POST["mod_estado_civil_repre"];
        $mod_parentesco_repre = $_POST["mod_parentesco_repre"];
        $mod_profesion_repre = $_POST["mod_profesion_repre"];
       
        $mod_password_repre = mysqli_real_escape_string($enlace,$_POST['mod_password_repre']);



$sql_upd_repre = "UPDATE reg_representante 
										SET ci_repre = '$mod_ci_repre',
										  nombre_repre = '$mod_nombres_repre',
										  apellido_repre = '$mod_apellidos_repre',

										  nacimiento_repre = '$mod_nacimiento_repre',
										  
										  celular_repre = '$mod_celular_repre',
										  telefono_repre = '$mod_telefono_repre',
										  email_repre = '$mod_email_repre',
										  id_sexo = '$mod_genero_repre',
										  id_pais = '$mod_nacionalidad_repre',
										  id_parentesco = '$mod_parentesco_repre',
										  id_profesion = '$mod_profesion_repre',
										  id_estado_civil = '$mod_estado_civil_repre',
										  clave_repre =	'$mod_password_repre'

										WHERE id_repre = '$id_repre_GHJ' ";


                       
            if (!mysqli_query($enlace,$sql_upd_repre))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp; = &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos del representante no actualizados.\">
<i class=\"fas fa-user-edit fa-lg\"></i></i> &nbsp "; 

	
				mysqli_close($enlace);


               }               

            else{
                    

                     $exitoZ .= "&nbsp; = &nbsp;&nbsp;
<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos del representante actualizados.\">
<i class=\"fas fa-user-edit fa-lg\"></i></i> &nbsp "; 

	
		

		$mod_ciudad = $_POST["mod_ciudad"];
		$mod_municipio = $_POST["mod_municipio"];
		$mod_parroquia = $_POST["mod_parroquia"];
		


		$id_direcc_GHJ = $_POST["id_direcc_GHJ"];


					$sql_upd_direcc = "UPDATE direcciones 
										SET id_ciudad = '$mod_ciudad',
										  id_municipio = '$mod_municipio',
										  id_parroquia = '$mod_parroquia'
										  

										WHERE id_direccion = '$id_direcc_GHJ' ";


					                       
					            if (!mysqli_query($enlace,$sql_upd_direcc))      // actualiza y si no logra ingresar los datos...
					               {
					                $errorZ .=" &nbsp; , &nbsp;&nbsp;
								<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Dirección no actualizada.\">
								<i class=\"fas fa-map-signs fa-lg\"></i></i> &nbsp ";

						
									mysqli_close($enlace);


					               }               

					            else{
					                     $exitoZ .= " &nbsp; , &nbsp;&nbsp;
									<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Dirección actualizada.\">
									<i class=\"fas fa-map-signs fa-lg\"></i></i> &nbsp "; 




									$id_estu_GHJ = $_POST["id_estu_GHJ"];	

 		$mod_nombres_estud = mysqli_real_escape_string($enlace,$_POST['mod_nombres_estud']);

$mod_municipio_estud = mysqli_real_escape_string($enlace,$_POST['mod_municipio_estud']);

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

    
      /*  $mod_estatus_ins_new_actual = $_POST["mod_estatus_ins_new_actual"]; */
       
       



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

										

										  municipio_est = '$mod_municipio_estud'									 
										
								

										WHERE id_estud = '$id_estu_GHJ' ";


                       
            if (!mysqli_query($enlace,$sql_upd_estud))      // actualiza y si no logra ingresar los datos...
               {
                				$errorZ .=" &nbsp; , &nbsp;&nbsp;
								<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos del representado no actualizados.\">
								<i class=\"fas fa-user-graduate fa-lg\"></i></i> &nbsp ";

	
				mysqli_close($enlace);


               }               

            else{
                    			$exitoZ .= " &nbsp; , &nbsp;&nbsp;
									<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos del representado actualizados.\">
									<i class=\"fas fa-user-graduate fa-lg\"></i></i> &nbsp ";


mysqli_close($enlace);




				 		

					}  // cierre de que guardo los datos del estudiante y ahora los datos "sobre".

				}  // cierre de q logro guardar la direccion y procede a guardar los datos del representado...

			}   // cierre de q logro guardar los datos del repre y procede a guardar la direccion




?>