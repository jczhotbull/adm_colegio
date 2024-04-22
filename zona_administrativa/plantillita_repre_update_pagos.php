<?php

		$id_repre_GHJ = $_POST["id_repre_GHJ"];	

 		$mod_nombres_repre = mysqli_real_escape_string($enlace,$_POST['mod_nombres_repre']);
 		$mod_apellidos_repre = mysqli_real_escape_string($enlace,$_POST['mod_apellidos_repre']);
 		$mod_email_repre = mysqli_real_escape_string($enlace,$_POST['mod_email_repre']);

 		$mod_ci_repre = mysqli_real_escape_string($enlace,$_POST['mod_ci_repre']);

        $mod_genero_repre = $_POST["mod_genero_repre"];
        $mod_status_email_repre = $_POST["mod_status_email_repre"];

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
										  clave_repre =	'$mod_password_repre',
										  correo_valido = '$mod_status_email_repre'

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
		$mod_avenida = $_POST["mod_avenida"];
	
		$mod_calle = mysqli_real_escape_string($enlace,$_POST['mod_calle']);

		$mod_codigo = $_POST["mod_codigo"];
		$mod_vivienda = $_POST["mod_vivienda"];
		
		$mod_nombre_vivienda = mysqli_real_escape_string($enlace,$_POST['mod_nombre_vivienda']);

		$mod_piso = $_POST["mod_piso"];
		$mod_numero = $_POST["mod_numero"];


		$id_direcc_GHJ = $_POST["id_direcc_GHJ"];


					$sql_upd_direcc = "UPDATE direcciones 
										SET id_ciudad = '$mod_ciudad',
										  id_municipio = '$mod_municipio',
										  id_parroquia = '$mod_parroquia',

										  id_avenida = '$mod_avenida',
										  
										  dir_calle_sector = '$mod_calle',

										  id_codigo = '$mod_codigo',
										  id_vivienda = '$mod_vivienda',

										  dir_nombre_vivienda = '$mod_nombre_vivienda',
										  id_piso = '$mod_piso',
										  id_numero = '$mod_numero'
										  

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


									mysqli_close($enlace);


                                  }


	

				}  // cierre de q logro guardar la direccion y procede a guardar los datos del representado...

			


?>