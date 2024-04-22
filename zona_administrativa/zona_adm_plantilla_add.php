<?php

include("identificador.php");

$fotPP = $nnn['ci'];

$filenameZZ = '../0 Croppie/fotocrop' .$fotPP. '.png';
$filenamePP = '../0 Croppie/ci_per_crop' .$fotPP. '.png';


 if(isset($_POST['cancelWW']))
    {

$alerta_principal = "2";

if (file_exists($filenameZZ )) { 
unlink($filenameZZ);

  }


}




 if(isset($_POST['cancelYY']))
    {

$alerta_principal = "2";

if (file_exists($filenamePP )) { 
unlink($filenamePP);

    }

}



if(isset($_POST['borrar_nn_f']))
{

$alerta_principal = "2";

if (file_exists($filenameZZ )) {

$alerta_principal = "2"; 

unlink($filenameZZ);
    
  }



 if (file_exists($filenamePP )) { 

 	$alerta_principal = "2";

unlink($filenamePP);
    
  }


}



	$enviado=""; // me dice si  probablemente se envio o no el email
	$sms="";
	$reg="";     // para ayudarme a saber si se realizo el guardado alterno de los datos
	$doc="";     // para indicarme si los datos se guardaron en pdf o doc

    $direcc_success=""; // notificador del proceso de insercion de direccion
    $direcc_danger=""; // notificador del proceso de insercion de direccion

    $datos_success="";
    $datos_danger="";

    $estudios_success="";
    $estudios_danger="";

    $quien_success="";
    $quien_danger="";

    $contrato_success="";
    $contrato_danger="";

    $cargo_success="";
    $cargo_danger="";

    $areas_success="";
    $areas_danger="";

    $foto_success="";
    $foto_danger="";

    $ci_success="";
    $ci_danger="";


    $foto_info ="1";

    $ci_info ="1";

    $atiende_success='';
    $atiende_danger='';

    $atiendex_success='';
    $atiendex_danger='';

    $adicionales_success='';
    $adicionales_danger='';

    $ejerce_success='';
    $ejerce_danger='';

    $edad_success='';
    $edad_danger='';

    $otro_plant_success='';
    $otro_plant_danger='';

     $obs_success='';
     $obs_danger='';

$alerta_principal  = "0";

	






// empieza la insercion de los datos del form...


if(isset($_POST['ingresar_personal']))// chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba
{

 $alerta_principal = "2";


include("consultas_add/chequeo_plant_add.php");   // chequea que lo introducido este bien.

		      


	if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
	{
			$errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";			           
	}

// Si no se activo ninguno de arriba entonces pasa a la Sequencia inicial de chequeo....


	else      // verifica primero si el email ya está registrado en la BD...
	{

    include("../conectar.php");
    



	$queryE = "SELECT ci_per FROM plantilla_personal WHERE email_per ='".mysqli_real_escape_string($enlace,$_POST['email'])."' LIMIT 1";

	$resultE = mysqli_query($enlace,$queryE);

					
		if (mysqli_num_rows($resultE)>0)
		{
		$errorZ="- Email anteriormente registrado. ";
		mysqli_close($enlace); 
		}


	
		else     //  verifica si la ci ya está registrada en la BD...
		{      
	$queryC = "SELECT ci_per FROM plantilla_personal WHERE ci_per ='".mysqli_real_escape_string($enlace,$_POST['cedula'])."' LIMIT 1";

	$resultC = mysqli_query($enlace,$queryC);

			if (mysqli_num_rows($resultC)>0)
			{
			$errorZ="- Cedula anteriormente registrada. ";
			mysqli_close($enlace); 
			}

			else  // Entra aqui solo si la ci y el email no estan registrados....
			{
		//  $errorZ="- Ni el email ni la ci estaban registrados. ";
			
			$ciudad = $_POST["ciudad"];
			$municipio = $_POST["municipio"];
			$parroquia = $_POST["parroquia"];
			$avenida = $_POST["avenida"];
			$codigo = $_POST["codigo"];
			$vivienda = $_POST["vivienda"];
			$piso = $_POST["piso"];
			$numero = $_POST["numero"];
			$calle = $_POST['calle'];
			$nombre_vi = $_POST['nombre_vi'];
			
			
								 
/*   solo para comprobar que se ha introducido en el form...
 $errorZ="- datos recogidos son " .$nacimiento. " . " .$ciudad. " . " .$municipio. " . " .$parroquia. " . " .$avenida. "
                              . " .$codigo. " . " .$vivienda. " . " .$piso. " . " .$numero. " . " .$calle. " . " .$nombre_vi. " ";  */
            
            // proceso de insercion y creacion del id de la tabla direcciones.

			$query_d = "INSERT INTO direcciones(dir_calle_sector, dir_nombre_vivienda, id_ciudad, id_municipio,
			                                    id_parroquia, id_avenida, id_codigo, id_vivienda, id_piso, id_numero) 

							VALUES (   '".mysqli_real_escape_string($enlace,$_POST['calle'])."'            ,
									   '".mysqli_real_escape_string($enlace,$_POST['nombre_vi'])."'        ,

										'$ciudad', '$municipio', '$parroquia', '$avenida', '$codigo',
										'$vivienda', '$piso', '$numero')";


			if (!mysqli_query($enlace,$query_d))  // si no logro ingresar la direccion...
			{
			$direcc_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de direcc
			mysqli_close($enlace); 
			}


            else
            {
            $direcc_success="<i class=\"fas fa-check-circle fa-lg\"></i>";  // coloca success al lado de direcc
            $direcc_id = mysqli_insert_id($enlace);  // almacena el id insertado en el query pasado direcc.

            $nacimiento = $_POST["fecha_nac"];
			$sexo = $_POST["genero"];
			$paisx = $_POST['paisx'];
            $num_cedula = mysqli_real_escape_string($enlace,$_POST['cedula']);
            $emailx =  mysqli_real_escape_string($enlace,$_POST['email']);


            $query_p = "INSERT INTO plantilla_personal(ci_per, nombre_per, apellido_per, celular_per,
			                                           telefono_per, email_per, nacimiento_per, id_direccion, id_sexo, d_paises)   

			VALUES ('".mysqli_real_escape_string($enlace,$_POST['cedula'])."'         ,
					'".mysqli_real_escape_string($enlace,$_POST['nombres'])."'        ,
					'".mysqli_real_escape_string($enlace,$_POST['apellidos'])."'      ,
					'".mysqli_real_escape_string($enlace,$_POST['telefono1'])."'      ,
					'".mysqli_real_escape_string($enlace,$_POST['telefono2'])."'      ,
					'$emailx',				
								                  
					'$nacimiento', '$direcc_id', '$sexo', '$paisx')"; 


			if (!mysqli_query($enlace,$query_p))      // si no ha logrado ingresar los datos
			{
			$datos_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de datos personales.	



			// secuencia que borrar la dir del per.


			$sqlAAAA = "DELETE FROM direcciones WHERE id_direccion = '$direcc_id' "; 

			if (mysqli_query($enlace,$sqlAAAA))  // 
{ 									   
$errorZ.="- &nbsp; Error desconocido, intente de nuevo o contacte con el Ing. Reg Dir Clear!!! &nbsp ";
$conteo_errorA = "1";
}
else {$errorZ.="- &nbsp; Se han suscitado diversos errores, intente de nuevo o contacte con el Ing. Reg Dir Not-Clear!!! &nbsp ";}



			mysqli_close($enlace);
			}
        

			else
			{

			$per_id = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado personal...
			
			$datos_success="<i class=\"fas fa-check-circle fa-lg\"></i>"; // coloca success al lado de datos personales



clearstatcache();   
$filename = '../0 Croppie/fotocrop' .$fotPP. '.png';
$foto_info ="0";



	if (file_exists($filename ))     // de haber una foto le cambia el nombre y la mueve a otro lugar
			{
				$foto_info ="1";

				$imageXX = imagecreatefrompng("../0 Croppie/fotocrop" .$fotPP.  ".png");  
					           unlink("../0 Croppie/fotocrop" .$fotPP.  ".png");
					           imagejpeg($imageXX,"../0 Croppie/fotocrop" .$fotPP.  ".png",90); // comprimer la imagen  
						
						$ext = 'png';
						
						/* $newfilename = '../zz_fotos_l/logocropx.png'; */

						$newfilename = "../zz_fotos_personal/".$per_id."_".$num_cedula.".".$ext;





							if(rename($filename,$newfilename))
			{	


		$query_foto = "UPDATE plantilla_personal SET foto_per = '$newfilename' WHERE id_per='$per_id' LIMIT 1 ";
					

					if (!mysqli_query($enlace,$query_foto))      // si no ha logrado ingresar la foto
								   {

				   $foto_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // ha fallado	
						  $foto_info ="0";
				   		  unlink($newfilename);

                         
								   }

					else {
					$foto_success="<i class=\"far fa-image fa-lg\"></i>";   // coloca success al lado de foto.

				

						}   


			}

				else{   // fallo al renombrar

						 $foto_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";
						 $foto_info ="0";
						  unlink($filename);
                         
						}
	

			}	// cierre de que no hay foto.. ****************

			






clearstatcache();
$filenameci = '../0 Croppie/ci_per_crop' .$fotPP. '.png';
$ci_info ="0";



	if (file_exists($filenameci ))     // de haber una foto le cambia el nombre y la mueve a otro lugar
			{

		$ci_info ="1";

				$imageXXci = imagecreatefrompng("../0 Croppie/ci_per_crop" .$fotPP. ".png");  
					           unlink("../0 Croppie/ci_per_crop" .$fotPP. ".png");
					           imagejpeg($imageXXci,"../0 Croppie/ci_per_crop" .$fotPP. ".png",85); // comprimer la imagen  
						
						$extci = 'png';
						
						

						$newfilenameci = "../zz_fotos_personal_ci/".$per_id."_".$num_cedula.".".$extci;



							if(rename($filenameci,$newfilenameci))
			{	


		$query_ci = "UPDATE plantilla_personal SET foto_per_ci = '$newfilenameci' WHERE id_per='$per_id' LIMIT 1 ";
					

					if (!mysqli_query($enlace,$query_ci))      // si no ha logrado ingresar la ci
								   {

				   $ci_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // ha fallado	
						  $ci_info ="0";
				   		  unlink($newfilenameci);

                         
								   }

					else {
					$ci_success="<i class=\"far fa-id-card fa-lg\"></i>";   // coloca success al lado de ci.

				

						}   


			}

				else{   // fallo al renombrar

						 $ci_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";
						 $ci_info ="0";
						  unlink($filenameci);
                         
						}
	

			}	// cierre de que no hay cedula.. ****************






			

            $titulo1 = $_POST["titulo1"];
           $mencion1 = $_POST["mencion1"];
         $instituto1 = $_POST["instituto1"];
         


         if ( empty($_POST['titulo2']) )      // si esta vacío
		      {$titulo2 = "102"; }

		      else {$titulo2 = $_POST["titulo2"];}

		  if (empty($_POST['titulo3']) )      // si esta vacío
		      {$titulo3 = "102"; }

		      else {$titulo3 = $_POST["titulo3"];}


		       if (empty($_POST['mencion2']) )      // si esta vacío
		      {$mencion2 = "26"; }

		      else {$mencion2 = $_POST["mencion2"];}

		       if (empty($_POST['mencion3'] ) )      // si esta vacío
		      {$mencion3 = "26"; }

		      else {$mencion3 = $_POST["mencion3"];}


		       if (empty($_POST["instituto2"]) )      // si esta vacío   
		      {$instituto2 = "15"; }

		       else {$instituto2 = $_POST["instituto2"];}

		       if (empty($_POST["instituto3"]) )     // si esta vacío
		      {$instituto3 = "15"; } 

		      else {$instituto3 = $_POST["instituto3"];}       

            

			$query_t = "INSERT INTO titulos_all(id_per, id_titulos, id_mencion, id_instituto)   

			VALUES ('$per_id', '$titulo1', '$mencion1', '$instituto1' ),
			       ('$per_id', '$titulo2', '$mencion2', '$instituto2' ),
			       ('$per_id', '$titulo3', '$mencion3', '$instituto3' )
			";  


			if (!mysqli_query($enlace,$query_t))      // si no ha logrado ingresar el principal titulo.
			{
			$estudios_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de estudios.


			// secuencia que borrar la dir del per.


			$sqlAAAA = "DELETE FROM direcciones WHERE id_direccion = '$direcc_id' "; 

			if (mysqli_query($enlace,$sqlAAAA))  // 
{ 									   
$errorZ.="- &nbsp; Error desconocido, intente de nuevo o contacte con el Ing. Reg Dir Clear!!! &nbsp ";
$conteo_errorA = "1";
}
else {$errorZ.="- &nbsp; Se han suscitado diversos errores, intente de nuevo o contacte con el Ing. Reg Dir Not-Clear!!! &nbsp ";}



			
			mysqli_close($enlace);
			}



            else {

            $estudios_success="<i class=\"fas fa-check-circle fa-lg\"></i>"; // coloca success al lado de estudios

            $quien = $_POST["quien"];  


			// almacenar quien y cuando

			$query_q = "INSERT INTO quien_y_cuando(id_quien, id_per)

			VALUES ('$quien', '$per_id')"; 

			if (!mysqli_query($enlace,$query_q))      // si no ha logrado ingresar los datos
				{
				$quien_danger="<i class=\"fas fa-user-times fa-lg\"></i>";  // coloca imagen en actividades dentro del plantel.



				// secuencia que borrar la dir del per.


			$sqlAAAA = "DELETE FROM direcciones WHERE id_direccion = '$direcc_id' "; 

			if (mysqli_query($enlace,$sqlAAAA))  // 
{ 									   
$errorZ.="- &nbsp; Error desconocido, intente de nuevo o contacte con el Ing. Reg Dir Clear!!! &nbsp ";
$conteo_errorA = "1";
}
else {$errorZ.="- &nbsp; Se han suscitado diversos errores, intente de nuevo o contacte con el Ing. Reg Dir Not-Clear!!! &nbsp ";}





				mysqli_close($enlace);
				} 


				else     // etapa de creacion del contrato.
				{
				  $quien_success="<i class=\"fas fa-user-plus fa-lg\"></i>";  // coloca imagen en actividades dentro del plantel.
                  $quien_y_cuando_id = mysqli_insert_id($enlace);  // almacena el id de quien y cuando

                  $inicia = $_POST["fecha_ini"]; 
				  $division = $_POST["division"];
				  $dicta = $_POST["dicta"];


				   $query_c = "INSERT INTO plantilla_contratados(id_per, contratado_desde, id_division,
				                                                 id_plant_grados, id_quien_y_cuando, status, firma)

						VALUES ('$per_id', '$inicia', '$division', '$dicta', '$quien_y_cuando_id', '1', '0')"; 	


					if (!mysqli_query($enlace,$query_c))      // si no ha logrado ingresar los datos
								   {
								    $contrato_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";


								    // secuencia que borrar la dir del per.


			$sqlAAAA = "DELETE FROM direcciones WHERE id_direccion = '$direcc_id' "; 

			if (mysqli_query($enlace,$sqlAAAA))  // 
{ 									   
$errorZ.="- &nbsp; Error desconocido, intente de nuevo o contacte con el Ing. Reg Dir Clear!!! &nbsp ";
$conteo_errorA = "1";
}
else {$errorZ.="- &nbsp; Se han suscitado diversos errores, intente de nuevo o contacte con el Ing. Reg Dir Not-Clear!!! &nbsp ";}





								    mysqli_close($enlace);
								    }

                    else {
                        $contrato_success="<i class=\"fas fa-check-circle fa-lg\"></i>";

                        $contra_id = mysqli_insert_id($enlace);  // guarda el id del contrato...

						$cargo_a = $_POST["cargo_a"];


						if (empty($_POST["cargo_b"]) )      // si esta vacío   
		                   {$cargo_b = "46"; }


		                    else {$cargo_b = $_POST["cargo_b"];}	



						$query_car = "INSERT INTO cargos_all(id_contrato, id_cargo)   

									VALUES ('$contra_id', '$cargo_a'),
									       ('$contra_id', '$cargo_b')
									";  

						if (!mysqli_query($enlace,$query_car))      // si no ha logrado ingresar los datos
								   {
								    $cargo_danger="<i class=\"fas fa-hand-point-right fa-lg\"></i>";



								    // secuencia que borrar la dir del per.


			$sqlAAAA = "DELETE FROM direcciones WHERE id_direccion = '$direcc_id' "; 

			if (mysqli_query($enlace,$sqlAAAA))  // 
{ 									   
$errorZ.="- &nbsp; Error desconocido, intente de nuevo o contacte con el Ing. Reg Dir Clear!!! &nbsp ";
$conteo_errorA = "1";
}
else {$errorZ.="- &nbsp; Se han suscitado diversos errores, intente de nuevo o contacte con el Ing. Reg Dir Not-Clear!!! &nbsp ";}



								    mysqli_close($enlace);
								    }  

						
						// empieza a guardar la area de trabajo...
						else {

						$cargo_success="<i class=\"fas fa-hand-point-right fa-lg\"></i>";  // visto bueno pulgar
						$area_a = $_POST["area_a"]; 


						if (empty($_POST["area_b"]) )      // si esta vacío   
		                   {$area_b = "66"; }


		                    else {$area_b = $_POST["area_b"];}


		                    if (empty($_POST["area_c"]) )      // si esta vacío   
		                   {$area_c = "66"; }


		                    else {$area_c = $_POST["area_c"];}	



						$query_a = "INSERT INTO areas_all(id_contrato, id_area)   

						VALUES ('$contra_id', '$area_a'),
							   ('$contra_id', '$area_b'),
						       ('$contra_id', '$area_c')

						";  


						if (!mysqli_query($enlace,$query_a))      // si no ha logrado ingresar el principal titulo.
						{
						$areas_danger="<i class=\"fas fa-battery-empty fa-lg\"></i>";  // coloca danger al lado de estudios.

						$errorZ="- Se han suscitado diversos errores consultar los avisos visuales.";



						// secuencia que borrar la dir del per.


			$sqlAAAA = "DELETE FROM direcciones WHERE id_direccion = '$direcc_id' "; 

			if (mysqli_query($enlace,$sqlAAAA))  // 
{ 									   
$errorZ.="- &nbsp; Intente nuevamente o contacte con el Ing. Reg Dir Clear!!! &nbsp ";
$conteo_errorA = "1";
}
else {$errorZ.="- &nbsp; Intente nuevamente o contacte con el Ing. Reg Dir Not-Clear!!! &nbsp ";}




						mysqli_close($enlace);
						}


						else {   // Si todo ok, llega hasta aqui el proceso principal...

							$areas_success="<i class=\"fas fa-battery-full fa-lg\"></i>";  // visto bueno pulgar





							if (!empty($_POST["fecha_ini_plant"]))   //  el dato fecha de inicio no puede estar vacio
			            { 
			            	 $fecha_ini_plant = $_POST["fecha_ini_plant"];						                 
						                    	

            	 $query_vida = "INSERT INTO vida_prof(id_per, fecha_vida, plantel_vida, edad_privados, edad_oficiales, edad_total)   
						       VALUES ( '$per_id', '$fecha_ini_plant',
						               '".mysqli_real_escape_string($enlace,$_POST['plantel_ini'])."'      ,
						               '".mysqli_real_escape_string($enlace,$_POST['edad_priv'])."'      ,
						               '".mysqli_real_escape_string($enlace,$_POST['edad_ofi'])."'    ,
						               '".mysqli_real_escape_string($enlace,$_POST['edad_tot'])."'  
						               )";

						       if (!mysqli_query($enlace,$query_vida))      // si no ha logrado ingresar los datos
								   {
								    $ejerce_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";
								    $errorZ="- Se han suscitado diversos errores consultar los avisos visuales.";


								    // secuencia que borrar la dir del per.


			$sqlAAAA = "DELETE FROM direcciones WHERE id_direccion = '$direcc_id' "; 

			if (mysqli_query($enlace,$sqlAAAA))  // 
{ 									   
$errorZ.="- &nbsp; Intente nuevamente o contacte con el Ing. Reg Dir Clear!!! &nbsp ";
$conteo_errorA = "1";
}
else {$errorZ.="- &nbsp; Intente nuevamente o contacte con el Ing. Reg Dir Not-Clear!!! &nbsp ";}





								    mysqli_close($enlace);
								    } 


						else {    // else tras colocar los campos correspondientes a la vida como trabajador en colegios
            $ejerce_success="<i class=\"fas fa-check-circle fa-lg\"></i>"; // coloca success al lado vida de docente.
			                 }

			            }         //  cierre if en caso de ser profesor y haber llenado el campo de fecha de inicio....


			           
			            if (!empty($_POST["turno_a"]) || !empty($_POST["turno_ax"]) )   // si el dato de turno ha sido llenado
			                                                                               
			                                                                            
			            { 


			            	if (empty($_POST["asignatura_a"]) )      // si esta vacío  
		                   {$asignatura_a = "66"; }  
		                    else {$asignatura_a = $_POST["asignatura_a"];}

		                    if (empty($_POST["asignatura_b"]) )      // si esta vacío  
		                   {$asignatura_b = "66"; }  
		                    else {$asignatura_b = $_POST["asignatura_b"];}

		                    if (empty($_POST["asignatura_c"]) )      // si esta vacío  
		                   {$asignatura_c = "66"; }  
		                    else {$asignatura_c = $_POST["asignatura_c"];}

		                    if (empty($_POST["asignatura_d"]) )      // si esta vacío  
		                   {$asignatura_d = "66"; }  
		                    else {$asignatura_d = $_POST["asignatura_d"];}

		                    if (empty($_POST["asignatura_e"]) )      // si esta vacío  
		                   {$asignatura_e = "66"; }  
		                    else {$asignatura_e = $_POST["asignatura_e"];}

		                    if (empty($_POST["asignatura_f"]) )      // si esta vacío  
		                   {$asignatura_f = "66"; }  
		                    else {$asignatura_f = $_POST["asignatura_f"];}



		                    if (empty($_POST["grado_a"]) )      // si esta vacío  
		                   {$grado_a = "51"; }  
		                    else {$grado_a = $_POST["grado_a"];}

		                    if (empty($_POST["grado_b"]) )      // si esta vacío  
		                   {$grado_b = "51"; }  
		                    else {$grado_b = $_POST["grado_b"];}

		                    if (empty($_POST["grado_c"]) )      // si esta vacío  
		                   {$grado_c = "51"; }  
		                    else {$grado_c = $_POST["grado_c"];}

		                    if (empty($_POST["grado_d"]) )      // si esta vacío  
		                   {$grado_d = "51"; }  
		                    else {$grado_d = $_POST["grado_d"];}

		                    if (empty($_POST["grado_e"]) )      // si esta vacío  
		                   {$grado_e = "51"; }  
		                    else {$grado_e = $_POST["grado_e"];}

		                    if (empty($_POST["grado_f"]) )      // si esta vacío  
		                   {$grado_f = "51"; }  
		                    else {$grado_f = $_POST["grado_f"];}




		                     if (empty($_POST["turno_a"]) )      // si esta vacío  
		                   {$turno_a = $_POST["turno_ax"]; }  
		                    else {$turno_a = $_POST["turno_a"];}

		                    if (empty($_POST["turno_b"]) )      // si esta vacío  
		                   {$turno_b = "4"; }  
		                    else {$turno_b = $_POST["turno_b"];}

		                    if (empty($_POST["turno_c"]) )      // si esta vacío  
		                   {$turno_c = "4"; }  
		                    else {$turno_c = $_POST["turno_c"];}

		                    if (empty($_POST["turno_d"]) )      // si esta vacío  
		                   {$turno_d = "4"; }  
		                    else {$turno_d = $_POST["turno_d"];}

		                    if (empty($_POST["turno_e"]) )      // si esta vacío  
		                   {$turno_e = "4"; }  
		                    else {$turno_e = $_POST["turno_e"];}

		                    if (empty($_POST["turno_f"]) )      // si esta vacío  
		                   {$turno_f = "4"; }  
		                    else {$turno_f = $_POST["turno_f"];}




		                     if (empty($_POST["seccion_a"]) )      // si esta vacío  
		                   {$seccion_a = "8"; }  
		                    else {$seccion_a = $_POST["seccion_a"];}

		                    if (empty($_POST["seccion_b"]) )      // si esta vacío  
		                   {$seccion_b = "8"; }  
		                    else {$seccion_b = $_POST["seccion_b"];}

		                    if (empty($_POST["seccion_c"]) )      // si esta vacío  
		                   {$seccion_c = "8"; }  
		                    else {$seccion_c = $_POST["seccion_c"];}

		                    if (empty($_POST["seccion_d"]) )      // si esta vacío  
		                   {$seccion_d = "8"; }  
		                    else {$seccion_d = $_POST["seccion_d"];}

		                    if (empty($_POST["seccion_e"]) )      // si esta vacío  
		                   {$seccion_e = "8"; }  
		                    else {$seccion_e = $_POST["seccion_e"];}

		                    if (empty($_POST["seccion_f"]) )      // si esta vacío  
		                   {$seccion_f = "8"; }  
		                    else {$seccion_f = $_POST["seccion_f"];}




		                     if (empty($_POST["horas_a"]) )      // si esta vacío  
		                   {$horas_a = $_POST["horas_ax"]; }  
		                    else {$horas_a = $_POST["horas_a"];}

		                    if (empty($_POST["horas_b"]) )      // si esta vacío  
		                   {$horas_b = "21"; }  
		                    else {$horas_b = $_POST["horas_b"];}

		                    if (empty($_POST["horas_c"]) )      // si esta vacío  
		                   {$horas_c = "21"; }  
		                    else {$horas_c = $_POST["horas_c"];}

		                    if (empty($_POST["horas_d"]) )      // si esta vacío  
		                   {$horas_d = "21"; }  
		                    else {$horas_d = $_POST["horas_d"];}

		                    if (empty($_POST["horas_e"]) )      // si esta vacío  
		                   {$horas_e = "21"; }  
		                    else {$horas_e = $_POST["horas_e"];}

		                    if (empty($_POST["horas_f"]) )      // si esta vacío  
		                   {$horas_f = "21"; }  
		                    else {$horas_f = $_POST["horas_f"];}       


			$query_x5 = "INSERT INTO asignatura_grado_horas(id_contrato, id_area, id_grado, id_turno, id_seccion, id_hora)  
					      VALUES     ('$contra_id', '$asignatura_a', '$grado_a', '$turno_a', '$seccion_a', '$horas_a'),
						             ('$contra_id', '$asignatura_b', '$grado_b', '$turno_b', '$seccion_b', '$horas_b'),
					                 ('$contra_id', '$asignatura_c', '$grado_c', '$turno_c', '$seccion_c', '$horas_c'),
							         ('$contra_id', '$asignatura_d', '$grado_d', '$turno_d', '$seccion_d', '$horas_d'),
								     ('$contra_id', '$asignatura_e', '$grado_e', '$turno_e', '$seccion_e', '$horas_e'),
							         ('$contra_id', '$asignatura_f', '$grado_f', '$turno_f', '$seccion_f', '$horas_f')
						";

						if (!mysqli_query($enlace,$query_x5))      // si no ha logrado ingresar el principal titulo.
							{
							$atiende_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de asignatura y grados que dicta.
							$atiendex_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger referente al turno y horas trabajadas
							$errorZ="- Se han suscitado diversos errores consultar los avisos visuales.";



							// secuencia que borrar la dir del per.


			$sqlAAAA = "DELETE FROM direcciones WHERE id_direccion = '$direcc_id' "; 

			if (mysqli_query($enlace,$sqlAAAA))  // 
{ 									   
$errorZ.="- &nbsp; Intente nuevamente o contacte con el Ing. Reg Dir Clear!!! &nbsp ";
$conteo_errorA = "1";
}
else {$errorZ.="- &nbsp; Intente nuevamente o contacte con el Ing. Reg Dir Not-Clear!!! &nbsp ";}





							mysqli_close($enlace);
							}



				            else {    // else tras colocar los campos de asignaturas horas y grados que dicta

				            $atiende_success="<i class=\"fas fa-check-circle fa-lg\"></i>"; // coloca success al lado de asignatura y grados que dicta.
				            $atiendex_success="<i class=\"fas fa-check-circle fa-lg\"></i>"; // coloca success referente al turno y horas trabajadas

				            	}	//cierre else tras colocar los campos de asignaturas horas y grados que dicta	 	            	


			            }   // cierre if en caso de haber llenado el primer dato referente a la asignatura que dicta en el colegio...



			             



 						if ($_POST["edad_ofi"] != '' )          // si se coloco la edad en oficiales entonces me crea
 						                                        // estos registros asi sean vacio.
			            { 


			            	$estu_act = $_POST["estu_act"];


			            	if (empty($_POST["que_estu"]) )      // si esta vacío  
		                   {$que_estu = "102"; }  
		                    else {$que_estu = $_POST["que_estu"];}

		                    if (empty($_POST["que_men"]) )      // si esta vacío  
		                   {$que_men= "26"; }  
		                    else {$que_men = $_POST["que_men"];}


		                    if (empty($_POST["que_inst"]) )      // si esta vacío  
		                   {$que_inst= "15"; }  
		                    else {$que_inst = $_POST["que_inst"];}

		                    if (empty($_POST["semestre"]) )      // si esta vacío  
		                   {$semestre= "13"; }  
		                    else {$semestre = $_POST["semestre"];}



			            	$query_resp_estu = "INSERT INTO prof_estudia(id_respuesta, id_titulos, id_mencion, id_instituto, id_semestre, id_per)   

								 VALUES ( '$estu_act', '$que_estu', '$que_men', '$que_inst', '$semestre', '$per_id')";

						       if (!mysqli_query($enlace,$query_resp_estu))      // si no ha logrado ingresar los datos
								   {
								    $adicionales_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";

								    $errorZ="- Se han suscitado diversos errores consultar los avisos visuales.";



								    // secuencia que borrar la dir del per.


									$sqlAAAA = "DELETE FROM direcciones WHERE id_direccion = '$direcc_id' "; 

									if (mysqli_query($enlace,$sqlAAAA))  // 
						{ 									   
						$errorZ.="- &nbsp; Intente nuevamente o contacte con el Ing. Reg Dir Clear!!! &nbsp ";
						$conteo_errorA = "1";
						}
						else {$errorZ.="- &nbsp; Intente nuevamente o contacte con el Ing. Reg Dir Not-Clear!!! &nbsp ";}





								    mysqli_close($enlace);
								    }


								else {    // else tras colocar los campos de asignaturas horas y grados que dicta

				            $adicionales_success="<i class=\"fas fa-check-circle fa-lg\"></i>"; // coloca success al lado de asignatura y grados que dicta.

				            	}	//cierre else tras colocar los campos de asignaturas horas y grados que dicta	  


								
			            }	// cierre del rellenado de si estudia o no... siempre que sea un profesor







			            if ($_POST["edad_ofi"] != '' )   // si hay algo en edad en oficiales  lleno si trabaja en otros planteles...
			                                                                              
			            { 

			            	$trab_act = $_POST["trab_act"];	



			             if (empty($_POST["plantel_a"]) )      // si esta vacío  
		                   {$plantel_a= "3"; }  
		                    else {$plantel_a = $_POST["plantel_a"];}


		                if (empty($_POST["asignatura_otro_a"]) )      // si esta vacío  
		                   {$asignatura_otro_a= "66"; }  
		                    else {$asignatura_otro_a = $_POST["asignatura_otro_a"];}


		                if (empty($_POST["grado_otro_a"]) )      // si esta vacío  
		                   {$grado_otro_a= "51"; }  
		                    else {$grado_otro_a = $_POST["grado_otro_a"];}




		                 if (empty($_POST["plantel_b"]) )      // si esta vacío  
		                   {$plantel_b= "3"; }  
		                    else {$plantel_b = $_POST["plantel_b"];}


		                if (empty($_POST["asignatura_otro_b"]) )      // si esta vacío  
		                   {$asignatura_otro_b= "66"; }  
		                    else {$asignatura_otro_b = $_POST["asignatura_otro_b"];}


		                if (empty($_POST["grado_otro_b"]) )      // si esta vacío  
		                   {$grado_otro_b= "51"; }  
		                    else {$grado_otro_b = $_POST["grado_otro_b"];}





		                 if (empty($_POST["plantel_c"]) )      // si esta vacío  
		                   {$plantel_c= "3"; }  
		                    else {$plantel_c = $_POST["plantel_c"];}


		                if (empty($_POST["asignatura_otro_c"]) )      // si esta vacío  
		                   {$asignatura_otro_c= "66"; }  
		                    else {$asignatura_otro_c = $_POST["asignatura_otro_c"];}


		                if (empty($_POST["grado_otro_c"]) )      // si esta vacío  
		                   {$grado_otro_c= "51"; }  
		                    else {$grado_otro_c = $_POST["grado_otro_c"];}




		                 if (empty($_POST["plantel_d"]) )      // si esta vacío  
		                   {$plantel_d= "3"; }  
		                    else {$plantel_d = $_POST["plantel_d"];}


		                if (empty($_POST["asignatura_otro_d"]) )      // si esta vacío  
		                   {$asignatura_otro_d= "66"; }  
		                    else {$asignatura_otro_d = $_POST["asignatura_otro_d"];}


		                if (empty($_POST["grado_otro_d"]) )      // si esta vacío  
		                   {$grado_otro_d= "51"; }  
		                    else {$grado_otro_d = $_POST["grado_otro_d"];}

			 


			$query_x4 = "INSERT INTO trabaja_otro(id_respuesta, id_tipo, nombre_plantel, id_area, id_grado, id_per) 

			VALUES     ('$trab_act', '$plantel_a', '".mysqli_real_escape_string($enlace,$_POST['names_planteles_a'])."', '$asignatura_otro_a', '$grado_otro_a', '$per_id'),
					   ('$trab_act', '$plantel_b', '".mysqli_real_escape_string($enlace,$_POST['names_planteles_b'])."', '$asignatura_otro_b', '$grado_otro_b', '$per_id'),
					   ('$trab_act', '$plantel_c', '".mysqli_real_escape_string($enlace,$_POST['names_planteles_c'])."', '$asignatura_otro_c', '$grado_otro_c', '$per_id'),
					   ('$trab_act', '$plantel_d', '".mysqli_real_escape_string($enlace,$_POST['names_planteles_d'])."', '$asignatura_otro_d', '$grado_otro_d', '$per_id')								  
						";

						if (!mysqli_query($enlace,$query_x4))      // si no ha logrado ingresar.
							{
							$otro_plant_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de.
							$errorZ="- Se han suscitado diversos errores consultar los avisos visuales.";




							// secuencia que borrar la dir del per.


								$sqlAAAA = "DELETE FROM direcciones WHERE id_direccion = '$direcc_id' "; 

								if (mysqli_query($enlace,$sqlAAAA))  // 
					{ 									   
					$errorZ.="- &nbsp; Intente nuevamente o contacte con el Ing. Reg Dir Clear!!! &nbsp ";
					$conteo_errorA = "1";
					}
					else {$errorZ.="- &nbsp; Intente nuevamente o contacte con el Ing. Reg Dir Not-Clear!!! &nbsp ";}





							mysqli_close($enlace);
							}



				            else {    // else tras colocar los campos 

				            $otro_plant_success="<i class=\"fas fa-check-circle fa-lg\"></i>"; // coloca success al lado de .

				            	}	//cierre else tras colocar los campos	 	            	


			           




			            if ($_POST["obs_text"] == '' )                  // proceso para guardar el contenido de obs
			            {$obs_text= "..."; }    
		                
		                else {$obs_text = mysqli_real_escape_string($enlace,$_POST['obs_text']) ;} 





		                if ($_POST["total_tiempillo1"] == ''  &&  $_POST["total_tiempillo2"] == ''  )                  // proceso para guardar el contenido de las horas
			            {$tot_tiemp= ""; }    
		                
		               


		                if ($_POST["total_tiempillo1"] != ''  &&  $_POST["total_tiempillo2"] == '' )                  // proceso para guardar el contenido de las horas
			               
		                
		                {$tot_tiemp = mysqli_real_escape_string($enlace,$_POST['total_tiempillo1']) ;} 



		                if ($_POST["total_tiempillo1"] == ''  &&  $_POST["total_tiempillo2"] != '' )                  // proceso para guardar el contenido de las horas
			               
		                
		                {$tot_tiemp = mysqli_real_escape_string($enlace,$_POST['total_tiempillo2']) ;} 




		                $query_obs = "INSERT INTO obs_per(obs_per, id_per, total_horas)   

						VALUES ('$obs_text', '$per_id', '$tot_tiemp')";    //  falta las restricciones



						if (!mysqli_query($enlace,$query_obs))      // si no ha logrado ingresar 
						{
						$obs_danger="<i class=\"far fa-comment-alt fa-lg\"></i>";  // coloca danger al lado de 

						$errorZ="- Se han suscitado diversos errores, consultar los avisos visuales.";


						// secuencia que borrar la dir del per.


			$sqlAAAA = "DELETE FROM direcciones WHERE id_direccion = '$direcc_id' "; 

			if (mysqli_query($enlace,$sqlAAAA))  // 
{ 									   
$errorZ.="- &nbsp; Intente nuevamente o contacte con el Ing. Reg Dir Clear!!! &nbsp ";
$conteo_errorA = "1";
}
else {$errorZ.="- &nbsp; Intente nuevamente o contacte con el Ing. Reg Dir Not-Clear!!! &nbsp ";}



						mysqli_close($enlace);
						}


						else {   // Si todo ok, llega hasta aqui el proceso segundario...

							$obs_success="<i class=\"far fa-comment-alt fa-lg\"></i>";  // visto bueno pulgar arriba

                            


                             }  // cierre del else final



                         }   // cierre if en caso de llenar si trabaja en otros planteles y creo o lleno las observaciones...




                     if ($errorZ =="") {  // solo entro aqui si todo ok


			            if ($foto_info == "0") {


			            		if ($ci_info == "0") {


								$exitoZ="- Registro realizado; cargue una foto personal y la cedula posteriormente.";
								mysqli_close($enlace);

							          }

							    else { 

							    	$exitoZ="- Registro realizado; cargue una foto personal posteriormente.";
								    mysqli_close($enlace);

							    }


							}





						if ($foto_info == "1") {


			            		if ($ci_info == "0") {


								$exitoZ="- Registro realizado; cargue una imagen de la cedula posteriormente.";
								mysqli_close($enlace);

							          }

							    else { 

							    $exitoZ="- Registro completamente realizado.";
								mysqli_close($enlace);

							    }


							}

					}

					else {
						mysqli_close($enlace);
					}



			    
							



						
						} // cierre del else del proceso principal de registro...





						
						} // hasta aqui ha guardado, direcc, datos personales, titulos, quien registro, el contrato y las areas...


                    	
                    
                    } // cierre de que guardo, direcc, datos per, titulos, quien registro y contrato...
                 
                  

				}// cierre de que guardo, direcc,datos pers, titulos y quien esta registrando


									



			
            }  // cierre indicativo que guardo, direcc, datos personales y titulos...


			} // cierre indicativo que la direcc y los datos personales se guardaron bien...

           



            	
            } // cierre indicativo que la direccion se guardo bien...

 


	        
			} // cierre del proceso de insercion de datos, ya que la ci y el email no estaban en la BD
   
	    }   // cierre de verificar si la ci ya está registrado en la BD...

	} // cierre de verificar si el email ó la cedula estaban en la BD...
					    

} // cierre del submit del envio del formulario

?>


<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("consultas_add/query_plantilla_add.php"); ?>  <!-- hace los queries necesarios para los select del formulario -->


        <div class="content-wrapper">
            <div class="container-fluid">
              
                <div class="card mx-auto">

      			<div class="card-body">



<?php


if ($alerta_principal  == "0") {


	if (!file_exists($filenameZZ ) && !file_exists($filenamePP ) ) { 

 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  title: "",
  text: "Si dispone de la foto y/o del documento de identidad, cárguelos en el sistema previo a llenar el formulario!",
  icon: "",
});';
  echo '}, 3000);</script>';  

   }

} 

?>




		      		<div class="form-row">


				      		<div class="col-md-3 col-lg-3 mb-2">

								<div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
								<i class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp; <b> Agregar personal: </b></div> 

							</div> 


							<div class="col-md-9 col-lg-9 mb-2">
							

					    <?php 
				          if ($errorZ!="")
				          { echo "<div class=\"input-group-text alert-danger text-truncate\" id=\"basic-addon1\" role=\"alert\" align=\"center\" >".$errorZ."</div>"; }
				        ?>
				                               <!-- SOLO ES VISIBLE SI LA VARIABLE DE ERROR TIENE ALGO-->


				        <?php 
				          if ($exitoZ!="")
				          { echo "<div class=\"input-group-text alert-success text-truncate\" role=\"basic-addon1\" role=\"alert\" align=\"center\">".$exitoZ."</div>"; }
				        ?>
				                               <!-- SOLO ES VISIBLE SI LA VARIABLE DE ÉXITO TIENE ALGO-->


				            </div> 

		      		</div>


					

					<div class="form-row">

<style type="text/css">

.punterodd{
	display: block;
	cursor: pointer;
}

</style>


<div class="col-md-2">

			                <div class="card border-info" style=" height: 266px; padding-bottom: 5px;">
			                	
			                  	
			                  	<div class="col-lg-12 ">

			                  		<div class="form-row  ">  <!--  -->

						  			

			                  		<div class="col-10 col-md-10 mt-1">

				<div class="upload-btn-wrapper">
										  <button class="btnX">Cargar <i class="fas fa-search fa-lg"></i></button>
		<input  class="item-img_A center-block punterodd" type="file"  accept="image/*"  name="file_photo_A"  id="file_photo_A"  /> 
										 
				</div>
										

									</div> 

									
									<div class="col-2 col-md-2 mt-2">


									<?php 
							          if ($foto_success!="")
			{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto cargada.\">".$foto_success."</i>"; }
							        ?>

							        <?php 
							          if ($foto_danger!="")
			{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto no cargada.\">".$foto_danger."</i>"; }
							        ?>
							            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->						        
									
									</div> 


									


									</div>  <!-- cierre primer row  -->

<div style=" height: 100%; line-height: 200px;">
									<div style=" vertical-align: middle; text-align: center;">


			<img  src="../0 Croppie/fotocrop<?php echo $nnn['ci']; ?>.png?nocache=<?php echo time(); ?>"

				 class="fotologuitocol img-responsive img-thumbnail" style=" max-height: 214px; padding-bottom: 5px;"

				  id=""  onerror="this.src='../zz_fotos_p/ZZvacio.jpg';"/> 

								    </div>
										
  </div>


								</div>  <!-- cierre col 12 que define todo lo que esta adentro -->


							</div>   <!-- cierre card border  -->




							<div class="form-row mt-1  ">  <!--  -->
								<div class="col-lg-12 ">


								<div class="card border-info" style=" height: 220px; padding-bottom: 5px;">
			                	
			                  	
			                  	<div class="col-lg-12 ">

			                  		<div class="form-row  ">  <!--  -->

						  			

			                  		<div class="col-10 col-md-10 mt-1">

			                  			<div class="upload-btn-wrapper">
										  <button class="btnX">Cargar <i class="fas fa-search fa-lg"></i></button>
	<input type="file" class="item-img_B center-block punterodd" accept="image/*"  name="file_photo_B"   id="file_photo_B"  /> 
										 
				</div>
										

									</div> 

									
									<div class="col-2 col-md-2 mt-2">


									<?php 
							          if ($ci_success!="")
			{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Documento personal cargado.\">".$ci_success."</i>"; }
							        ?>

							        <?php 
							          if ($ci_danger!="")
			{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Documento personal no cargado.\">".$ci_danger."</i>"; }
							        ?>
							            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->						        
									
									</div> 


									


									</div>  <!-- cierre primer row  -->

<div style=" height: 100%; line-height: 150px;">
									<div style=" vertical-align: middle; text-align: center;">

	                             <img src="../0 Croppie/ci_per_crop<?php echo $nnn['ci']; ?>.png?nocache=<?php echo time(); ?>" alt="..." class="img-thumbnail" style=" max-height: 170px; padding-bottom: 5px;" 
								      onerror="this.src='../zz_fotos_p/ZZvacio2.jpg';" >  

								    </div>
										
  </div>


								</div>  <!-- cierre col 12 que define todo lo que esta adentro -->

							</div>   <!-- cierre card border  -->

						</div>

							</div>



</div>   <!-- cierre col 2  -->						




<!-- ini Modal foto-->

<div class="modal fade" tabindex="-1" id="cropImagePop_A" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Centre, simulando una foto carnet, clic en "Recortar".</h5>
   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>




<div class="modal-body">
      	<div class="form-row">
      		<div class="col-md-12">

      			<div class="col-md-12 mt-1 card border-info divXXheight">

      				<div class="mt-2">
						  <div id="upload-demo_A"></div>
  					</div>  







<div class="form-row">
<div class="mx-auto col-md-12 mt-4">


 <button class="rotateRight col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateRight" data-deg="90"><i class="fas fa-share fa-lg fa-flip-horizontal"></i> Girar</button>
           
          <button class="col-md-6 mt-2 ml-4 btn btn-success cropImageBtn_A" id="cropImageBtn_A">Recortar</button>

<button class="rotateLeft col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateLeft" data-deg="-90">Girar <i class="fas fa-share fa-lg"></i></button>



</div> 
</div>







      				 <div class="form-row ">  <!-- mensaje q aprece -->

					 <div class="content1 mt-1 mb-1 col-md-12 text-center" style="display:none">

					 <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

					 </div>


					 

					 <div class="content2 mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Continuar"</b>; recuerde hacer clic en <b class="text-info">"Registrar"</b> al finalizar.  

					</div>






					 </div>  <!-- cierre form-row -->
      				 
      				   				

      			</div>


      		</div>
        </div>
      </div>


 <div class="modal-footer">

      	<form method="POST"  name="actualizar_fotoX">   
   
        
       <button type="submit" name="submit" class="btn btn-primary " id="update22" disabled>Continuar</button>

         <button type="submit" class="btn btn-secondary" name="cancelWW">Cerrar</button> 

         

        </form>


         

      </div>

     

    </div>
  </div>
</div>

<!-- cierre The Modal -->








<!-- The Modal ci-->

<div class="modal fade"  id="cropImagePop_B" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Centre el documento de identidad, clic en "Recortar".</h5>
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">    

      <div class="col-md-12 mt-1 card border-info divXXheight">   

  					<div class="mt-2">
						  <div id="upload-demo_B"></div>
  					</div>




<div class="form-row">
<div class="mx-auto col-md-12 mt-4">


 <button class="rotateRight col-md-2 col-sm-2 mt-2 ml-4 btn btn-outline-success" id="rotateRightB" data-deg="90"><i class="fas fa-share fa-lg fa-flip-horizontal"></i> Girar</button>
           
          <button class="col-md-6 col-sm-6 mt-2 ml-4 btn btn-success cropImageBtn_B" id="cropImageBtn_B">Recortar</button>

<button class="rotateLeft col-md-2 col-sm-2 mt-2 ml-4 btn btn-outline-success" id="rotateLeftB" data-deg="-90">Girar <i class="fas fa-share fa-lg"></i></button>



</div> 
</div>





  				




  					<div class="form-row ">  <!-- mensaje q aprece -->

					 <div class="contentc1 mt-1 mb-1 col-md-12 text-center" style="display:none">

					 <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

					 </div>


					 

					 <div class="contentc2 mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success"><i class="fas fa-check">
	
</i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Continuar"</b>; recuerde hacer clic en <b class="text-info">"Registrar"</b> al finalizar.

					</div>






					 </div>  <!-- cierre form-row -->

</div>


      </div>

      <div class="modal-footer">

      	<form  method="post">      	
        
        <button type="submit" name="submit" class="btn btn-primary " id="update44" disabled>Continuar</button>
           
        <button type="submit" class="btn btn-secondary" name="cancelYY">Cerrar</button>


        </form>

      </div>

    </div>
  </div>
</div>

<!-- cierre The Modal -->




<script type="text/javascript">


$(document).ready(function() {	
			
			   
			    setTimeout(function() {
			        $(".content1").hide();
			    }, 0);                     // este numero dice que tan rapido lo esconde....


			    setTimeout(function() {
			        $(".content2").hide();
			    }, 0);                     // este numero dice que tan rapido lo esconde....


			    $('#cropImageBtn_A').click(function() {
			    	this.disabled = true;
			    	$(".content1").show();
			    				        
			        setTimeout(function() {
			            $(".content1").fadeOut(6500);
			      
			        }, 7500);
			        

			    });




			     setTimeout(function() {
			        $(".contentc1").hide();
			    }, 0);                     // este numero dice que tan rapido lo esconde....


			    setTimeout(function() {
			        $(".contentc2").hide();
			    }, 0);                     // este numero dice que tan rapido lo esconde....


			    $('#cropImageBtn_B').click(function() {
			    	this.disabled = true;
			    	$(".contentc1").show();
			    				        
			        setTimeout(function() {
			            $(".contentc1").fadeOut(6500);
			      
			        }, 7500);
			        

			    });







			});



// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

						var $uploadCrop_A,
						tempFilename_A,
						rawImg_A,
						imageId_A;

						function readFile_A(input) {


    var fileInput_A = document.getElementById('file_photo_A');
    var filePath_A = fileInput_A.value;
    var fileSize_A = fileInput_A.files[0].size;
    var allowedExtensions_A = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_A.exec(filePath_A)){
    	swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_A.value = '';
        return false;  }

    if(fileSize_A > 10485760){
    	swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

				 			if (input.files && input.files[0]) {
				              var reader_A = new FileReader();
					            reader_A.onload = function (e) {
									$('.upload-demo_A').addClass('ready');
									$('#cropImagePop_A').modal('show');
						            rawImg_A = e.target.result;
					            }
					            reader_A.readAsDataURL(input.files[0]);
					        }
					        else {
						        swal("Sorry - you're browser doesn't support the FileReader API");
						    }
						}

   }





						$uploadCrop_A = $('#upload-demo_A').croppie({
							viewport: {
								 width: 350,
						        height: 450,
						        type: 'square'
							},
							boundary: {
						        width: 450,
						        height: 550
						    },
						    enableExif: true,


						     enableOrientation: true




						});


	$( "#rotateLeft" ).click(function() {
            $uploadCrop_A.croppie('rotate', parseInt($(this).data('deg')));
        });


   $( "#rotateRight" ).click(function() {
            $uploadCrop_A.croppie('rotate', parseInt($(this).data('deg')));
        });





						$('#cropImagePop_A').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$uploadCrop_A.croppie('bind', {
				        		url: rawImg_A
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});

						$('.item-img_A').on('change', function () { imageId_A = $(this).data('id'); tempFilename_A = $(this).val();

						$('#cancelCropBtn_A').data('id', imageId_A); readFile_A(this); });

					



						$('#cropImageBtn_A').on('click', function (ev) {
							$uploadCrop_A.croppie('result', {
								type: 'canvas',
								format: 'png',
								size: 'viewport'
							}).then(function (response) {
 								
 								$.ajax({
						        url:"../0 Croppie/upload_per.php?namexx=<?php echo $nnn['ci']; ?>",
						        type: "POST",
						        data:{"image": response},
						        success:function(data)
						        {												 				          

				 						$('#uploaded_image_A').html(data);

				 						$(".content1").hide();

				 						$(".content2").show();

				 						document.getElementById("update22").disabled = false;

						        }
						      });
												
								 })

						});




				// End upload preview image


// Start upload preview image
// $(".imagen_default_B").attr("src", "../zz_fotos_p/ZZvacio2.jpg");   // ../zz_fotos_p/02vacio.jpg

					var $uploadCrop_B,
						tempFilename_B,
						rawImg_B,
						imageId_B;

						function readFile_B(input) {


 var fileInput_B = document.getElementById('file_photo_B');
    var filePath_B = fileInput_B.value;
    var fileSize_B = fileInput_B.files[0].size;
    var allowedExtensions_B = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_B.exec(filePath_B)){
    	swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_B.value = '';
        return false;  }

    if(fileSize_B > 10485760){
    	swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 


				 			if (input.files && input.files[0]) {
				              var reader_B = new FileReader();
					            reader_B.onload = function (e) {
									$('.upload-demo_B').addClass('ready');
									$('#cropImagePop_B').modal('show');
						            rawImg_B = e.target.result;
					            }
					            reader_B.readAsDataURL(input.files[0]);
					        }
					        else {
						        swal("Sorry - you're browser doesn't support the FileReader API");
						    }
						}

	}


						$uploadCrop_B = $('#upload-demo_B').croppie({
							viewport: {
								 width: 600,
						        height: 450,
						        type: 'square'
							},
							boundary: {
						        width: 725,
						        height: 575
						    },
						    enableExif: true,

                enableOrientation: true

						});

$( "#rotateLeftB" ).click(function() {
            $uploadCrop_B.croppie('rotate', parseInt($(this).data('deg')));
        });


   $( "#rotateRightB" ).click(function() {
            $uploadCrop_B.croppie('rotate', parseInt($(this).data('deg')));
        });




						$('#cropImagePop_B').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$uploadCrop_B.croppie('bind', {
				        		url: rawImg_B
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});

						$('.item-img_B').on('change', function () { imageId_B = $(this).data('id'); tempFilename_B = $(this).val();

						$('#cancelCropBtn_B').data('id', imageId_B); readFile_B(this); });

						$('#cropImageBtn_B').on('click', function (ev) {
							$uploadCrop_B.croppie('result', {
								type: 'canvas',
								format: 'png',
								size: 'viewport'
							}).then(function (response) {

								$.ajax({
						        url:"../0 Croppie/upload_per_ci.php?namexx=<?php echo $nnn['ci']; ?>",
						        type: "POST",
						        data:{"image2": response},
						        success:function(data)
						       
						        {												 				          

				 						$('#uploaded_image_B').html(data);

				 						$(".contentc1").hide();

				 						$(".contentc2").show();

				 						document.getElementById("update44").disabled = false;

						        }

				       



						      });
												
								 })

						});
				// End upload preview image






</script>				   




				        <div class="col-md-10">








				        	<div class="form-row">  <!-- datos nivel de estudio -->

						  		<div class="col-md-12 mt-1">

						  		<b class="text-info"> Datos personales: </b>

						<?php 
				          if ($datos_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registrados.\">".$datos_success."</i>"; }
				        ?>

				        <?php 
				          if ($datos_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"No registrados.\">".$datos_danger."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->


							    </div>

						  	</div>

<form method="POST" data-persist="garlic"  data-expires="240" name="ingresar_personal">   

				        	<div class="form-row margencito">

					          <div class="input-group col-md-4 mb-2">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-file-alt fa-lg">&nbsp;&nbsp;</i></span>  
										</div>
											<input type="text" class="form-control importantex" id="nombres" name="nombres" placeholder="Nombre(s)..."  aria-describedby="basic-addon1" required>
							  </div>

							  <div class="input-group col-md-4 mb-2">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="far fa-file-alt fa-lg"></i></span>  
										</div>
											<input type="text" class="form-control importantex" id="apellidos" name="apellidos" placeholder="Apellido(s)..."  aria-describedby="basic-addon1" required>
							  </div>



							  <div class="input-group col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-globe fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="paisx" name="paisx" required>
							  							
							  							<option selected disabled value="">Nacionalidad:</option>
							  							<option disabled></option>

                               <?php do{?>                                

	<option value="<?php echo $row_datos_paises['id_pais']; ?>"><?php echo $row_datos_paises['nombre_pais']; ?></option>

                                <?php } while ($row_datos_paises = mysqli_fetch_assoc($datos_paises)); ?> 


													    
												</select>
							   
							   </div>



						  	</div>


						  	<div class="form-row">


                              <div class="input-group col-md-4 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="far fa-id-card fa-lg"></i></span>  
									</div>
										<input maxlength="9" type="text" class="form-control importantex" id="cedula" name="cedula" placeholder="Cedula..." aria-label="cedula" aria-describedby="basic-addon1" required>
							  </div>


							  <div class="input-group col-md-4 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt fa-lg"></i></span>  
									</div>
										<input maxlength="12" type="text" class="form-control importantex" id="telefono1" name="telefono1" placeholder="Teléfono celular..." aria-label="telefono1" aria-describedby="basic-addon1" required>
							  </div>


							  <div class="input-group col-md-4 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-volume fa-lg"></i></span>  
									</div>
										<input maxlength="12" type="text" class="form-control" id="telefono2" name="telefono2" placeholder="Teléfono local..." aria-label="telefono2" aria-describedby="basic-addon1">
							  </div>


						  	</div>



						  	<div class="form-row">

					         							  
							 <div class="input-group col-md-4 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fa fa-birthday-cake fa-lg"></i></span>  
									</div>
										<input type="date" class="form-control importantex" id="fecha_nac" name="fecha_nac" aria-label="fecha_nac" aria-describedby="basic-addon1" required>
							  </div>


							 <div class="input-group col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-venus-mars fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="genero" name="genero" required>
							  							
							  							<option selected disabled value="">Sexo:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_sexo['id_sexo']; ?>"><?php echo $row_datos_sexo['nombre_sexo']; ?></option>

                                <?php } while ($row_datos_sexo = mysqli_fetch_assoc($datos_sexo)); ?> 


													    
												</select>
							   
							   </div>


							   <div class="input-group col-md-5 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fas fa-at fa-lg"></i></span>  
									</div>
										<input type="email" class="form-control importantex" id="email" name="email" placeholder="Correo Electrónico..." aria-label="email" aria-describedby="basic-addon1" required>
							  </div>





						  	</div>  <!-- cierre row datos personales -->







						  	<div class="form-row">  <!-- datos nivel de estudio -->

						  		<div class="col-md-12 mt-4 mb-1">

						  		<b class="text-info"> Dirección: </b>

						<?php 
				          if ($direcc_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Datos almacenados.\">".$direcc_success."</i>"; }
				        ?>

				        <?php 
				          if ($direcc_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Datos no almacenados.\">".$direcc_danger."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->


							    </div>

						  	</div>




						  	<div class="form-row">

					         <div class="input-group col-md-6 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-pin fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="ciudad" name="ciudad" required>
							  							
							  							<option selected disabled value="">Ciudad:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_ciudades['id_ciudad']; ?>"><?php echo $row_datos_ciudades['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudades = mysqli_fetch_assoc($datos_ciudades)); ?> 
													    
												</select>
							   
							   </div>





							   <div class="input-group col-md-6 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="far fa-flag fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="municipio" name="municipio" required>
							  							
							  							<option selected disabled value="">Municipio:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_municipio['id_municipio']; ?>"><?php echo $row_datos_municipio['nombre_municipio']; ?></option>

                                <?php } while ($row_datos_municipio = mysqli_fetch_assoc($datos_municipio)); ?> 
													    
												</select>
							   
							   </div>


							  
			   	

						  	</div>   <!-- cierre form direccion1 row -->




						  	<div class="form-row">


						  	 <div class="input-group col-md-6 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-arrow-circle-right fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="parroquia" name="parroquia" required>
							  							
							  							<option selected disabled value="">Parroquia:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_parroquias['id_parroquia']; ?>"><?php echo $row_datos_parroquias['nombre_parroquia']; ?></option>

                                <?php } while ($row_datos_parroquias = mysqli_fetch_assoc($datos_parroquias)); ?> 
													    
												</select>
							   
							   </div>



					         <div class="input-group col-md-6 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-road fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="avenida" name="avenida" required>
							  							
							  							<option selected disabled value="">Cerca y/o en la avenida:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_avenidas['id_avenida']; ?>"><?php echo $row_datos_avenidas['nombre_av']; ?></option>

                                <?php } while ($row_datos_avenidas = mysqli_fetch_assoc($datos_avenidas)); ?> 
													    
												</select>
							   
							   </div>


							</div> <!-- cierre 2do row direccion -->






							<div class="form-row">




							   <div class="input-group col-md-12 mb-2">
									<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i>Calle, Zona, Sector ó Urbanización:</i></span>  
									</div>
<input type="text" class="form-control importantex" id="calle" name="calle" placeholder="ejemp: calle Bolívar ó sector Santa Ana ó Urbanización San Luis" aria-label="calle" aria-describedby="basic-addon1" required>
							  </div>





						  	</div>   <!-- cierre form direccin 3 -->



						  	

			<div class="form-row">


							<div class="input-group col-md-6 mb-2">

										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fab fa-gg fa-lg"></i></span>  
										</div>
										
							   
							      				<select class="form-control importantex" id="codigo" name="codigo" required>
							  							
							  							<option selected disabled value="">Código Postal:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_codigos['id_codigo']; ?>"><?php echo $row_datos_codigos['nombre_codigo']; ?></option>

                                <?php } while ($row_datos_codigos = mysqli_fetch_assoc($datos_codigos)); ?> 
													    
												</select>
							   
							   </div>



					         <div class="input-group col-md-6 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-home fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="vivienda" name="vivienda" required>
							  							
							  							<option selected disabled value="">Vive en:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_viviendas['id_vivienda']; ?>"><?php echo $row_datos_viviendas['nombre_vivienda']; ?></option>

                                <?php } while ($row_datos_viviendas = mysqli_fetch_assoc($datos_viviendas)); ?> 
													    
												</select>
							   
							   </div>
							   

				</div>



				<div class="form-row">


					 <div class="input-group col-md-6 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">&nbsp;<i class="fab fa-xing fa-lg"></i></span>  
									</div>
										<input type="text" class="form-control importantex" id="nombre_vi" name="nombre_vi" placeholder="Nombre de la vivienda..." aria-label="nombre_vi" aria-describedby="basic-addon1" required>
							  </div>










<div class="input-group col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="far fa-building fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="piso" name="piso" required>
							  							
							  							<option selected disabled value="">Piso:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_pisos['id_piso']; ?>"><?php echo $row_datos_pisos['nombre_piso']; ?></option>

                                <?php } while ($row_datos_pisos = mysqli_fetch_assoc($datos_pisos)); ?> 
													    
												</select>
							   
							   </div>



							   <div class="input-group col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-hashtag"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="numero" name="numero" required>
							  							
							  							<option selected disabled value="">Número:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_numeros['id_numero']; ?>"><?php echo $row_datos_numeros['nombre_numero']; ?></option>

                                <?php } while ($row_datos_numeros = mysqli_fetch_assoc($datos_numeros)); ?> 
													    
												</select>
							   
							   </div>
			   	


				</div>



	<div class="form-row ">  

<div data-toggle="tooltip" data-placement="right" title="Borrar foto y/o documentos cargados.">

<button type="button" class="ml-2 mt-2 btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#borrar_fotos_perKK">
 <i class="fas fa-trash-alt fa-lg"></i>
</button>

</div>

	</div>











				</div>  <!-- cierre col 9 -->


				

					

				 </div>  <!-- cierre form row, que encierra el col 3 y col 9 -->


				 
						  	

						  	





<?php include("zona_adm_plantilla_add1.php"); ?> 



						  	


						  	<div class="form-row ">  

						  		<div class="col-md-12 mt-2 mb-1 subtext">

						  		<b>Actividades dentro del plantel:</b>


						<?php 
				        if ($quien_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Fecha de registro guardada.\">".$quien_success."</i>"; }
				        ?>

				        <?php 
				          if ($quien_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Fecha no almacenada.\">".$quien_danger."</i>"; }
				        ?>


				        <?php 
				          if ($contrato_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Contrato almacenado.\">".$contrato_success."</i>"; }
				        ?>

				        <?php 
				          if ($contrato_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Contrato no registrado.\">".$contrato_danger."</i>"; }
				        ?>


				        <?php 
				          if ($cargo_success!="")
{echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Cargos registrados.\">".$cargo_success."</i>";}
				        ?>

				        <?php 
				          if ($cargo_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Cargos no registrados.\">".$cargo_danger."</i>"; }
				        ?>


				         <?php 
				          if ($areas_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Areas registradas.\">".$areas_success."</i>"; }
				        ?>

				        <?php 
				          if ($areas_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Areas no registradas.\">".$areas_danger."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->

                                          </div>


							    

						  	</div>




						<div class="form-row">


							 <div class="input-group col-md-4 mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i><b>Inicia labor el:</b></i></span>  
									</div>
										<input type="date" class="form-control importantex" id="fecha_ini" name="fecha_ini" aria-label="fecha_ini"
										aria-describedby="basic-addon1" required>
							  </div>




					         <div class="input-group col-md-4 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-hand-point-right fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="cargo_a" name="cargo_a" required>
							  							
							  							<option selected disabled value="">Cargo Principal:</option>
							  							<option disabled></option>


							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones2 = "SELECT * FROM plantilla_cargos WHERE nombre_cargo != '.'
								                          AND id_grupo != '1' ORDER BY nombre_cargo ASC";

								                          $datos_opciones2 = mysqli_query($enlace, $queryopciones2) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones2 = mysqli_fetch_assoc($datos_opciones2))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones2['id_cargo']; ?>"><?php echo $row_datos_opciones2['nombre_cargo'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?>  							  							

                               
													    
												</select>
							   
							   </div>




							    <script type="text/javascript">	

								$('select[name=cargo_a]').change(function () {
							        if ($(this).val() != '') {
							            $('#cargobb').show();
							            
							        } else {
							            
							            $('#cargobb').hide();
							        }
							    });		

							   </script>    




							   <div class="input-group col-md-4 mb-3" id="cargobb" style="display:none">
										<div class="input-group-prepend" >
											<span class="input-group-text" id="basic-addon1"><i class="far fa-hand-point-right fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control" id="cargo_b" name="cargo_b" >
							  							
							  							<option selected disabled value="">Cargo Secundario:</option>
							  							<option disabled></option>

							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones2 = "SELECT * FROM plantilla_cargos WHERE nombre_cargo != '.'
								                          AND id_grupo != '5' 
								                          ORDER BY nombre_cargo ASC";

								                          $datos_opciones2 = mysqli_query($enlace, $queryopciones2) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones2 = mysqli_fetch_assoc($datos_opciones2))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones2['id_cargo']; ?>"><?php echo $row_datos_opciones2['nombre_cargo'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 

                              
													    
												</select>
							   
							   </div>


							   
			   	

						 </div>





						 <div class="form-row">


						 	<div class="input-group col-md-4 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-battery-quarter fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="area_a" name="area_a" required>
							  							
							  							<option selected disabled value="">Área o especialidad principal…</option>
							  							<option disabled></option>



							  							<?php do{?>                                

								<option value="<?php echo $row_datos_areas['id_area']; ?>"><?php echo $row_datos_areas['nombre_area']; ?></option>

                                <?php } while ($row_datos_areas = mysqli_fetch_assoc($datos_areas)); ?> 
							  							
													    
												</select>
							   
							</div>




							 <script type="text/javascript">	

								$('select[name=area_a]').change(function () {
							        if ($(this).val() != '') {
							            $('#areabb').show();
							            
							        } else {
							            
							            $('#areabb').hide();
							        }
							    });		

							   </script>      

							



					         <div class="input-group col-md-4 mb-3" id="areabb" style="display:none">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-battery-half fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control" id="area_b" name="area_b">
							  							
							  							<option selected disabled value="">Especialidad secundaria…</option>
							  							<option disabled></option>

							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones1 = "SELECT * FROM plantilla_areas WHERE nombre_area != '.' ORDER BY nombre_area ASC";

								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones1['id_area']; ?>"><?php echo $row_datos_opciones1['nombre_area'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>
							   
							   </div>


							    <script type="text/javascript">	

								$('select[name=area_b]').change(function () {
							        if ($(this).val() != '') {
							            $('#areacc').show();
							            
							        } else {
							            
							            $('#areacc').hide();
							        }
							    });		

							   </script>       


							   <div class="input-group col-md-4 mb-3" id="areacc" style="display:none">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-battery-full fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control" id="area_c" name="area_c">
							  							
							  							<option selected disabled value="">Área o especialidad extra…</option>
							  							<option disabled></option>

							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones1 = "SELECT * FROM plantilla_areas WHERE nombre_area != '.' ORDER BY nombre_area ASC";

								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones1['id_area']; ?>"><?php echo $row_datos_opciones1['nombre_area'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>
							   
							   </div>


							   
			   	

						 </div>




						  <div class="form-row">


						 	<div class="input-group col-md-4 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fab fa-audible fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="division" name="division" required>
							  							
							  							<option selected disabled value="">División:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_divisiones['id_division']; ?>"><?php echo $row_datos_divisiones['nombre_division']; ?></option>

                                <?php } while ($row_datos_divisiones = mysqli_fetch_assoc($datos_divisiones)); ?> 
													    
												</select>
							   
							</div>



							<div class="input-group col-md-4 mb-3">
										<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1"><i class="fab fa-dochub fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="dicta" name="dicta" required>
							  							
							  							<option selected disabled value="">Dicta clases a:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_grados['id_grado']; ?>"><?php echo $row_datos_grados['nombre_grados']; ?></option>

                                <?php } while ($row_datos_grados = mysqli_fetch_assoc($datos_grados)); ?> 
													    
												</select>
							   
							</div>

<!-- datos de quien y cuando -->
<input type="hidden" id="quien" name="quien" value="<?php echo $_SESSION['id']; ?>">

						<div class="col-md-4">

						<button type="submit" name="ingresar_personal" class="btn btn-primary btn-block" id='btnReset'>
						<i class="fas fa-save fa-lg"></i> &nbsp Registrar</button>

					    </div>



						  </div> <!-- cierre row -->







							<script type="text/javascript">

									$('select[name=cargo_a]').change(function () {
							       
							        if ($(this).val() == '27' )
							           {  $('#hiddenextras1').show();
							       $('#hiddenextras2').hide();
							       $('#asignatura_a').prop('required',true);
							       $('#turno_ax').prop('required',false);
							              
							           }							        

							         else {	

								         	if ($(this).val() == '29' ) 
								          {  $('#hiddenextras1').show();
								      $('#hiddenextras2').hide();
								      $('#asignatura_a').prop('required',true);
								      $('#turno_ax').prop('required',false);
								             
								          }

								         		else {	

								         			if ($(this).val() == '32' ) 
								           			{ $('#hiddenextras1').show();
								           		$('#hiddenextras2').hide();
								           		$('#asignatura_a').prop('required',true);
								           		$('#turno_ax').prop('required',false);
								           		      
								           			}


								           			 	else {							            
								            		

								            				if ($(this).val() == '58' ) 
								           			{ $('#hiddenextras1').show();
								           		$('#hiddenextras2').hide();
								           		$('#asignatura_a').prop('required',true);
								           		$('#turno_ax').prop('required',false);
								           		      
								           			}


								           			 	else {							            
								            		

								            				if ($(this).val() == '59' ) 
								           			{ $('#hiddenextras1').show();
								           		$('#hiddenextras2').hide();
								           		$('#asignatura_a').prop('required',true);
								           		$('#turno_ax').prop('required',false);
								           		      
								           			}


								           			 	else {							            
								            		

								            				if ($(this).val() == '60' ) 
								           			{ $('#hiddenextras1').show();
								           		$('#hiddenextras2').hide();
								           		$('#asignatura_a').prop('required',true);
								           		$('#turno_ax').prop('required',false);
								           		      
								           			}


								           			 	else {							            
								            		

								            				if ($(this).val() == '61' ) 
								           			{ $('#hiddenextras1').show();
								           		$('#hiddenextras2').hide();
								           		$('#asignatura_a').prop('required',true);
								           		$('#turno_ax').prop('required',false);
								           		      
								           			}


								           			 	else {							            
								            		

								            				if ($(this).val() == '62' ) 
								           			{ $('#hiddenextras1').show();
								           		$('#hiddenextras2').hide();
								           		$('#asignatura_a').prop('required',true);
								           		$('#turno_ax').prop('required',false);
								           		      
								           			}


								           			 	else {							            
								            		

								            			$('#hiddenextras1').hide();
								            		$('#hiddenextras2').show();
								            		$('#asignatura_a').prop('required',false);
								            		$('#turno_ax').prop('required',true);
								            			

								            			}
								            			

								            			}
								            			

								            			}
								            			

								            			}
								            			

								            			}

								            			}
							           
							        		          }									           
							              }
							         });								   	

							 

							   </script>
							   			  







 <div class="form-row" >  

						  		<div class="col-md-6 mt-4 mb-1 subtext">

						  		<b>Fecha y plantel en el cual comenzó a trabajar:</b>


						<?php 
				        if ($ejerce_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registro guardado.\">".$ejerce_success."</i>"; }
				        ?>

				        <?php 
				          if ($ejerce_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registro no guardado.\">".$ejerce_danger."</i>"; }
				        ?>


				        		</div>




				        		<div class="col-md-6 mt-4 mb-1 subtext">

						  		<b>Años trabajando:</b>


						<?php 
				        if ($edad_success!="")      /*  no estan activos */
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registro guardado.\">".$edad_success."</i>"; }
				        ?>

				        <?php 
				          if ($edad_danger!="")    /*  no estan activos */
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registro no guardado.\">".$edad_danger."</i>"; }
				        ?>


				        		</div>




				        		</div> <!-- cierre row  de adicionales -->



				        	  
 <div class="form-row "> 
				        	  

							  <div class="input-group col-md-2 mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-check fa-lg"></i></span>  
									</div>
<input type="date" class="form-control importantex" id="fecha_ini_plant" name="fecha_ini_plant" aria-label="fecha_ini_plant"
aria-describedby="basic-addon1" required>
							  </div>




							  <script type="text/javascript">	

								$('input[name=fecha_ini_plant]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#plantel_ini').prop('required',true);
							        } else {
							            $('#plantel_ini').prop('required',false);
							            
							        }
							    });		

							   </script>










							  <div class="input-group col-md-4 mb-3">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-archive fa-lg"></i></span>  
										</div>
<input type="text" maxlength="28" class="form-control" id="plantel_ini" name="plantel_ini" placeholder="Nombre del plantel..." aria-label="nombres" aria-describedby="basic-addon1" >
							  </div>




							  <script type="text/javascript">	

								$('input[name=plantel_ini]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#edad_priv').prop('required',true);
							        } else {
							            $('#edad_priv').prop('required',false);
							            
							        }
							    });		

							   </script>







							  <div class="input-group col-md-2 mb-3">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">En privados:</span>  
										</div>
<input type="text" class="form-control" id="edad_priv" name="edad_priv" placeholder="..." aria-label="edad_priv" aria-describedby="edad_priv">
							  </div>



							  <script type="text/javascript">	

								$('input[name=edad_priv]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#edad_ofi').prop('required',true);
							        } else {
							            $('#edad_ofi').prop('required',false);
							            
							        }
							    });		

							   </script>





							  <div class="input-group col-md-2 mb-3">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">En oficiales:</span>  
										</div>
<input type="text" class="form-control" id="edad_ofi" name="edad_ofi" placeholder="..." aria-label="edad_ofi" aria-describedby="edad_ofi" >
							  </div>


<div class="input-group col-md-2 mb-3">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Años Total:</span>  
										</div>
<input type="text" class="form-control" id="edad_tot" name="edad_tot" value="0" aria-label="edad_tot" aria-describedby="edad_tot" >
							  </div>







							 </div>




<div id="hiddenextras2" style="display:none"> 


						  <div class="form-row ">  

						  		<div class="col-md-12 mt-3 mb-1 subtext">

						  		<b>Sobre su labor, indicar:</b>


						<?php 
				        if ($atiendex_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registro guardado.\">".$atiendex_success."</i>"; }
				        ?>

				        <?php 
				          if ($atiendex_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registro no guardado.\">".$atiendex_danger."</i>"; }
				        ?>


				        		</div>
				        		</div> <!-- cierre primer row pre de opcionales -->



				        		<div class="form-row ">  


										<div class="input-group col-md-3 mb-3">
													<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="far fa-bookmark"></i></span>  
													</div>							   
										      				<select class="form-control " id="turno_ax" name="turno_ax" >
										  							<option selected disabled value="">Turno laboral…</option>
										  							<option disabled></option>

										  							 <?php do{?>                                

								<option value="<?php echo $row_datos_turnos['id_turno']; ?>"><?php echo $row_datos_turnos['nombre_turno']; ?></option>

                                <?php } while ($row_datos_turnos = mysqli_fetch_assoc($datos_turnos)); ?> 
												    
															</select>
										   
										    </div>


										    <script type="text/javascript">	

											$('select[name=turno_ax]').change(function () {
										        if ($(this).val() != '') {
										            
										            $('#horas_ax').prop('required',true);
										        } else {
										            $('#horas_ax').prop('required',false);
										           
										        }
										    });		

										   </script> 






										    <div class="input-group col-md-3 mb-3">
														<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1"><i class="far fa-clock"></i></span>  
														</div>							   
											      				<select class="form-control " id="horas_ax" name="horas_ax" >
											  							<option selected disabled value="">Horas por día...</option>
											  							<option disabled></option>


											  							 <?php do{?>                                

								<option value="<?php echo $row_datos_horas['id_hora']; ?>"><?php echo $row_datos_horas['nombre_hora']; ?></option>

                                <?php } while ($row_datos_horas = mysqli_fetch_assoc($datos_horas)); ?> 
								    
																</select>
											   
											    </div>



											    <div class="input-group col-md-3 mb-3">

				        	<div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>Total de Horas Semanales:</b></span>  
                                </div>

            <input maxlength="2" type="text" class="form-control importantex" id="total_tiempillo2" name="total_tiempillo2" aria-label="total_tiempillo2" placeholder=".."
            >


</div>





									</div> <!-- cierre form row -->







</div>   <!-- cierre div que desaparece -->












<div id="hiddenextras1" style="display:none"> 


						  <div class="form-row ">  

						  		<div class="col-md-12 mt-3 mb-1 subtext">

						  		<b>Horas por grado y asignaturas que atiende semanalmente en este plantel:</b>


						<?php 
				        if ($atiende_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registro guardado.\">".$atiende_success."</i>"; }
				        ?>

				        <?php 
				          if ($atiende_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registro no guardado.\">".$atiende_danger."</i>"; }
				        ?>


				        		</div>
				        		</div> <!-- cierre primer row pre de opcionales -->





<?php include ("zona_adm_plantilla_add2.php"); ?>


<div class="form-row">				        

<div class="input-group col-md-4 mb-3">

				        	<div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>Total de Horas Semanales:</b></span>  
                                </div>

            <input maxlength="2" type="text" class="form-control importantex" id="total_tiempillo1" name="total_tiempillo1" aria-label="total_tiempillo1" placeholder=".."
             >


</div>
</div>




</div>   <!-- cierre div que desaparece -->


	  










								<div class="form-row ">  

						  		<div class="col-md-12 mt-2 mb-1 subtext">

						  		<b>Completar:</b>							   
							   

						  		


						<?php 
				        if ($adicionales_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Estudios guardado.\">".$adicionales_success."</i>"; }
				        ?>

				        <?php 
				          if ($adicionales_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Estudios no guardado.\">".$adicionales_danger."</i>"; }
				        ?>


						<?php 
				        if ($otro_plant_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Planteles guardado.\">".$otro_plant_success."</i>"; }
				        ?>

				        <?php 
				          if ($otro_plant_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Planteles no guardado.\">".$otro_plant_danger."</i>"; }
				        ?>


				        		</div>

				        		
				        		</div> <!-- cierre row  de adicionales -->
				        



				        		<div class="form-row ">





				        		<div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><b>Estudia actualmente?</b> </span>  
										</div>
							   
											<select class="form-control" id="estu_act" name="estu_act"">						  							
							  							<option selected value="2">No</option>
							  							<option value="1">Si</option>
							  																				    
											</select>
									</div>

								</div>  <!-- cierre row -->



								<script type="text/javascript">

									$('select[name=estu_act]').change(function () {
							        if ($(this).val() == '1') {
							            $('#hiddenresp').show();
							            $('#que_estu').prop('required',true);							            
							        } else {							            
							            $('#hiddenresp').hide();
							            $('#que_estu').prop('required',false);
							        }
							    });								   	

							   </script>
							  





				        		<div class="form-row" id="hiddenresp" style="display:none">        		



							    <div class="input-group col-md-3 mb-3">

										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">I</span>  
										</div>
							  
							      				<select class="form-control" id="que_estu" name="que_estu">

							  							
							  							<option selected disabled value="">¿Que estudia?</option>   
							  							<option disabled></option>


							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones = "SELECT * FROM plantilla_titulos WHERE nombre_titulos != '.' ORDER BY nombre_titulos ASC";

								                          $datos_opciones = mysqli_query($enlace, $queryopciones) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones = mysqli_fetch_assoc($datos_opciones))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones['id_titulos']; ?>"><?php echo $row_datos_opciones['nombre_titulos'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>

							   
							   </div> 


							    <script type="text/javascript">	

								$('select[name=que_estu]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#que_men').prop('required',true);
							        } else {
							            $('#que_men').prop('required',false);
							           
							        }
							    });		

							   </script> 





							 <div class="input-group col-md-3 mb-3">

										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">II</span>  
										</div>
							  
							      				<select class="form-control" id="que_men" name="que_men">

							  							
							  							<option selected disabled value="">Mención...</option>   <!-- principal secundario terciario -->
							  							<option disabled></option>


							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones = "SELECT * FROM plantilla_mencion WHERE nombre_mencion != '.' ORDER BY nombre_mencion ASC";

								                          $datos_opciones = mysqli_query($enlace, $queryopciones) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones = mysqli_fetch_assoc($datos_opciones))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones['id_mencion']; ?>"><?php echo $row_datos_opciones['nombre_mencion'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>

							   
							   </div>  



							    <script type="text/javascript">	

								$('select[name=que_men]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#que_inst').prop('required',true);
							        } else {
							            $('#que_inst').prop('required',false);
							           
							        }
							    });		

							   </script> 




							   <div class="input-group col-md-3 mb-3">

										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">III</span>  
										</div>
							  
							      				<select class="form-control" id="que_inst" name="que_inst">

							  							
							  							<option selected disabled value="">Instituto...</option>   <!-- principal secundario terciario -->
							  							<option disabled></option>


							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones = "SELECT * FROM plantilla_instituto WHERE nombre_instituto != '.' ORDER BY nombre_instituto ASC";

								                          $datos_opciones = mysqli_query($enlace, $queryopciones) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones = mysqli_fetch_assoc($datos_opciones))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones['id_instituto']; ?>"><?php echo $row_datos_opciones['nombre_instituto'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>

							   
							   </div>  



							   <script type="text/javascript">	

								$('select[name=que_inst]').change(function () {
							        if ($(this).val() != '') {
							            
							            $('#semestre').prop('required',true);
							        } else {
							            $('#semestre').prop('required',false);
							           
							        }
							    });		

							   </script> 





							   <div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">IV</span>  
										</div>
							   
							      				<select class="form-control" id="semestre" name="semestre">
							  							
							  							<option selected disabled value="">Semestre…</option>
							  							<option disabled></option>

							  							<?php 

								                          include("../conectar.php");

								                          $queryopciones1 = "SELECT * FROM semestres WHERE nombre_semestre != '.' ORDER BY nombre_semestre ASC";

								                          $datos_opciones1 = mysqli_query($enlace, $queryopciones1) or die(mysqli_error());

								                          // $totalRows_datos_opciones = mysqli_num_rows($datos_opciones);

								                          while ($row_datos_opciones1 = mysqli_fetch_assoc($datos_opciones1))
								                          {
								                            
								?>
								    <option value = "<?php echo $row_datos_opciones1['id_semestre']; ?>"><?php echo $row_datos_opciones1['nombre_semestre'];?></option>
								<?php

								                          }

								                          
								                          mysqli_close($enlace); 
								                                              

								                          ?> 
													    
												</select>
							   
							   </div>


							   </div> <!-- cierre form row -->






							 


<div class="form-row ">  

				        		<div class="input-group col-md-3 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><b>Trab. en otro plantel?</b> </span>  
										</div>
							   
							      				<select class="form-control" id="trab_act" name="trab_act">						  							
							  							<option selected value="2">No</option>
							  							<option value="1">Si</option>
							  																				    
												</select>
									</div>

</div>


								<script type="text/javascript">

									$('select[name=trab_act]').change(function () {
							        if ($(this).val() == '1') {
							            $('#hiddenresp2').show();
							            $('#plantel_a').prop('required',true);							            
							        } else {							            
							            $('#hiddenresp2').hide();
							            $('#plantel_a').prop('required',false);
							        }
							    });								   	

							   </script>

				        		









<?php include ("zona_adm_plantilla_add3.php"); ?>




		  




				        	 <div class="form-row ">  

						  		<div class="col-md-6 mt-2 mb-1 subtext">

						  		<b>Observaciones:</b>


						<?php 
				        if ($obs_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Observación guardado.\">".$obs_success."</i>"; }
				        ?>

				        <?php 
				          if ($obs_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Observación no guardado.\">".$obs_danger."</i>"; }
				        ?>


				        		</div>
				        		</div> <!-- cierre row  de adicionales -->


				        		<div class="form-row ">

				        		<div class="col-md-12 mb-3">

				        		<textarea maxlength="250" class="form-control" id="obs_texta" name="obs_text" rows="3"></textarea>

				        		<span id="charsa">250</span> caracteres restantes.



<script type="text/javascript">
	
var maxLength2 = 250;
$('#obs_texta').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength2-length;
  $('#charsa').text(length);
});

</script>









				        	    </div>

				        	    </div> <!-- cierre row  de obs -->
							
	</form>			        	  
					

									


								</div>   <!-- cierre cardbody -->
							    </div>   <!-- cierre card -->




<!-- necesario para bloquear el form -->

<script>
     $(document).ready(function() {
  
$(function() {
    $('#btnReset').attr('disabled', 'disabled');
});
 
$('input[type=text]').keyup(function() {
        
    if ($('#nombres').val() !=''&&
    $('#apellidos').val() != '' &&
    $('#cedula').val() != ''&&
    $('#telefono1').val() != ''&&
    $('#calle').val() != ''&&
    $('#nombre_vi').val() != '') {
      
        $('#btnReset').removeAttr('disabled');
    } else {
        $('#btnReset').attr('disabled', 'disabled');
    }
});
    });
</script>



		



       <script src="03_fileup/file-upload-with-preview.js"></script>

        <script>
            var upload = new FileUploadWithPreview('myUniqueUploadId')
        </script>






            </div> <!-- cierre container fluid -->
        </div> <!-- cierre content wrapper -->





<!-- Modal -->
<div class="modal fade" id="borrar_fotos_perKK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        	<i class="fas fa-info fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Desea eliminar la foto y/o los documentos, previamente cargados?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_nn_ff">  
        <button type="submit" name="borrar_nn_f" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!--   -- >



 <?php include ("Footer.php"); ?>