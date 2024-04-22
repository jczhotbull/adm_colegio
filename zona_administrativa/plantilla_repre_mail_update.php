<?php

		$id_repre_GHJ = $_POST["editar_selecc"];	

 		$mod_nombres_repre = mysqli_real_escape_string($enlace,$_POST['mod_nombres_repre']);
 		$mod_apellidos_repre = mysqli_real_escape_string($enlace,$_POST['mod_apellidos_repre']);
 		$mod_email_repre = mysqli_real_escape_string($enlace,$_POST['mod_email_repre']);

 		

        $mod_confirm = $_POST["estado"];

        $mod_celular_repre = mysqli_real_escape_string($enlace,$_POST['mod_celular_repre']);
        $mod_telefono_repre = mysqli_real_escape_string($enlace,$_POST['mod_telefono_repre']);

       



$sql_upd_repre = "UPDATE reg_representante 
										SET 
										  nombre_repre = '$mod_nombres_repre',
										  apellido_repre = '$mod_apellidos_repre',

										  
										  
										  celular_repre = '$mod_celular_repre',
										  telefono_repre = '$mod_telefono_repre',
										  email_repre = '$mod_email_repre',

										  correo_valido = '$mod_confirm'
										  

										WHERE id_repre = '$id_repre_GHJ' ";


                       
            if (!mysqli_query($enlace,$sql_upd_repre))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp; Datos no actualizados. &nbsp"; 

	
				mysqli_close($enlace);


               }               

            else{
                    

                     $exitoZ .= "&nbsp; Datos actualizados. &nbsp "; 

	
		

mysqli_close($enlace);

				}


			

?>