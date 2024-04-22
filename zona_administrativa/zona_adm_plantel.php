<?php


include("identificador.php");



	if ($_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario'  )

		{

			session_unset();                     // libera todas las variables de sessión
		    setcookie("id", "", time()-60*60);   // crea la cookie id con el valor vacio y que caduque una hora antes.
		    $_COOKIE ['id']="";                  // borra el valor de id contenido en el cookie, por medida extra

		    setcookie("cargo", "", time()-60*60);   // crea la cookie cargo con el valor vacio y que caduque una hora antes.
		    $_COOKIE ['cargo']="";                  // borra el valor de cargo contenido en el cookie, por medida extra

		    header("Location: ../index.php");

		}



$nnn1 = $nnn['ci'];


	$enviado=""; // me dice si  probablemente se envio o no el email
	$sms="";


	$direcc_success=""; // notificador del proceso de insercion de direccion
    $direcc_danger=""; // notificador del proceso de insercion de direccion

    $datos_success="";
    $datos_danger="";
 
    $foto_success="";
    $foto_danger="";
    $foto_info="1";

    $fotomod_info="1";
    $fotomod_error="0";
    $fotomod_success="0";


$alerta_principal = "0";

$filenameZZ = '../0 Croppie/logocrop' . $nnn1 . '.png';


$pintando_uno='../footer.php';
 if(isset($_POST['cancelXX']))
    {

$alerta_principal = "2";
$filenameAA = '../0 Croppie/logoupdate' . $nnn1 . '.png';



if (file_exists($filenameZZ )) { 

unlink($filenameZZ);

  }


if (file_exists($filenameAA )) { 

unlink($filenameAA);

    }

}





if(isset($_POST['borrar_nn_l']))
    {

$alerta_principal = "2";

if (file_exists($filenameZZ )) { 

unlink($filenameZZ);

  }

  }




$pintando_dos='../footer2.php';
if(isset($_POST['borrarXX']))
    {

$alerta_principal = "2";

include("../conectar.php");

$queryKKC = "SELECT * FROM z_plantel WHERE id_plantel = '$_POST[id_plantRR]' LIMIT 1";

                      $resultKKC = mysqli_query($enlace,$queryKKC);
                      $filaKK=mysqli_fetch_array($resultKKC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...


$logo_a_borrar = $filaKK["logo_plantel"];

                      if (!empty( $logo_a_borrar )) {   // si hay algo en logo, borra ese archivo
	                     
							unlink($logo_a_borrar);				

$deleteXX = "UPDATE z_plantel SET logo_plantel = '' WHERE id_plantel = '$_POST[id_plantRR]' LIMIT 1 ";
$resultXXC = mysqli_query($enlace,$deleteXX);

						$exitoZ="- Logo borrado. ";

						 }

						 else {

						 	$errorZ="- El plantel seleccionado no posee logo. ";
						 }

mysqli_close($enlace); 

 }


// empieza la insercion de los datos del form...
    

    if(isset($_POST['ingresar_plantel']))
    {


// chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba

 $alerta_principal = "2";

include("consultas_add/chequeo_plantel_add.php");   // chequea que lo introducido este bien.

    


// verifica primero si el email ya está registrado en la BD...


	include("../conectar.php");
    
	$queryE = "SELECT codigo_plantel FROM z_plantel WHERE email_plantel ='".mysqli_real_escape_string($enlace,$_POST['emailp'])."' LIMIT 1";

	$resultE = mysqli_query($enlace,$queryE);

					
		if (mysqli_num_rows($resultE)>0)
		{
		$errorZ="- Email anteriormente registrado. ";
		mysqli_close($enlace); 
		}

	
		else     //  verifica si el codigo ci ya está registrada en la BD...
		{      


	$queryC = "SELECT codigo_plantel FROM z_plantel WHERE codigo_plantel ='".mysqli_real_escape_string($enlace,$_POST['codigoplant'])."' LIMIT 1";

	$resultC = mysqli_query($enlace,$queryC);

			if (mysqli_num_rows($resultC)>0)
			{
			$errorZ="- Código anteriormente registrado. ";
			mysqli_close($enlace); 
			}

			else  // Entra aqui para registrar solo si el codigo y el email no estan registrados....

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
			
			
								 
//  solo para comprobar que se ha introducido en el form...
/* $errorZ="- datos recogidos son "  .$ciudad. " . " .$municipio. " . " .$parroquia. " . " .$avenida. "
                              . " .$codigo. " . " .$vivienda. " . " .$calle. " . " .$nombre_vi. " ";  */
            
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


			else       // entra aqui si logro registrar la direccion...
            {


            $direcc_success="<i class=\"fas fa-check-circle fa-lg\"></i>";  // coloca success al lado de direcc
            $direcc_id = mysqli_insert_id($enlace);  // almacena el id insertado en el query pasado direcc.


            $num_codigoplant = mysqli_real_escape_string($enlace,$_POST['codigoplant']);

            $query_p = "INSERT INTO z_plantel(nombre_plantel, codigo_plantel, id_direccion,
			                                  telf_plantel1, telf_plantel2, email_plantel, rif_plantel, email_dos)   

			VALUES ('".mysqli_real_escape_string($enlace,$_POST['nombrep'])."'         ,
					'".mysqli_real_escape_string($enlace,$_POST['codigoplant'])."'        ,
					'$direcc_id',
					'".mysqli_real_escape_string($enlace,$_POST['telefono1'])."'      ,
					'".mysqli_real_escape_string($enlace,$_POST['telefono2'])."'      ,
					'".mysqli_real_escape_string($enlace,$_POST['emailp'])."'         ,
					'".mysqli_real_escape_string($enlace,$_POST['rif'])."',
					'".mysqli_real_escape_string($enlace,$_POST['emailaaa'])."'          )";  


			if (!mysqli_query($enlace,$query_p))      // si no ha logrado ingresar los datos
			{
			$datos_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de datos .



			// secuencia que borra al estudiante 1.


			$sqlAAAA = "DELETE FROM direcciones WHERE id_direccion = '$direcc_id' "; 

			if (mysqli_query($enlace,$sqlAAAA))  // si no logro asociar el estudiante 1 con su representante
								{ 									   
								$errorZ.="- &nbsp; Se han suscitado diversos errores, intente de nuevo o contacte con el Ing. Reg Dir Clear!!! &nbsp ";
								$conteo_errorA = "1";
								}
								else {$errorZ.="- &nbsp; Se han suscitado diversos errores, intente de nuevo o contacte con el Ing. Reg Dir Not-Clear!!! &nbsp ";}



			mysqli_close($enlace);
			}



			else   // entra aqui si registra los datos y ahora intenta subir el logo
				{

			$plant_id = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado plantilla...
			
			$datos_success="<i class=\"fas fa-check-circle fa-lg\"></i>"; // coloca success al lado de datos 


clearstatcache();
$filename = '../0 Croppie/logocrop' . $nnn1 . '.png';




					if (file_exists($filename )) {    // de haber una foto le cambia el nombre y la mueve a otro lugar
						
					/*	$imageXX = imagecreatefrompng("../0 Croppie/logocrop.png");  
					    unlink("../0 Croppie/logocrop.png");
					    imagejpeg($imageXX,"../0 Croppie/logocrop.png",50); // comprimer la imagen  */

						$ext = 'png';
						/* $newfilename = '../zz_fotos_l/logocropx.png'; */
						$newfilename = "../zz_fotos_l/".$plant_id."_".$num_codigoplant.".".$ext;





						 
						if(rename($filename,$newfilename))
			{					

					$query_foto = "UPDATE z_plantel SET logo_plantel = '$newfilename' WHERE id_plantel='$plant_id' LIMIT 1 ";
					

					if (!mysqli_query($enlace,$query_foto))      // si no ha logrado ingresar la foto
								   {

				   $foto_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // ha fallado	

				   		  unlink($newfilename);
                          $exitoZ="- Registro realizado, con error al guardar el logo!!!";
						  mysqli_close($enlace);

								   }

					else {
					$foto_success="<i class=\"far fa-image fa-lg\"></i>";   // coloca success al lado de foto.

					$exitoZ="- Registro completamente realizado.";
					mysqli_close($enlace);	

						}   

						 
			}

						else{
						 $foto_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";
						  unlink($filename);
                          $exitoZ="- Registro realizado, con error al cargar el logo!!!";
						  mysqli_close($enlace);


						}
					

			

                 }  // cierre de que no hay foto..



							
                 else {

								$exitoZ="- Registro realizado, recuerde subir el logo posteriormente.";
								mysqli_close($enlace);	

						}




				  


				} // cierre del proceso en el que intenta subir la foto.


            }  // cierre del procero en el cual procede a registrar los datos ya que registro la direccion

			} // cierre del proceso de insercion de datos, ya que el codigo y el email no estaban en la BD

   	
   		}   // cierre de verificar si el codigo ya está registrado en la BD...

	} // cierre de verificar si el email ó el codigo estaban en la BD...
$eres_hijo_de_puta_full=filesize($pintando_uno);




// lo siguiente confirma la actualizacion de la foto

if(isset($_POST['update_logoX']))
    {
$alerta_principal = "2";

$logo_esta ="0";

$idU = $_POST['update_logoX'];

$num_codigoplantU = $_POST['update_numX'];



clearstatcache();
$filenameUP = "../0 Croppie/logoupdate".$nnn1.".png";




					if (file_exists($filenameUP )) {    // de haber una foto le cambia el nombre y la mueve a otro lugar						
						$logo_esta ="1";

						$extU = 'png';
						/* $newfilename = '../zz_fotos_l/logocropx.png'; */
						$newfilenameU = "../zz_fotos_l/".$idU."_".$num_codigoplantU.".".$extU;




						 
						if(rename($filenameUP,$newfilenameU))
			{			

			include("../conectar.php");		

					$query_fotoU = "UPDATE z_plantel SET logo_plantel = '$newfilenameU' WHERE id_plantel = '$idU' LIMIT 1 ";
					

					if (!mysqli_query($enlace,$query_fotoU))      // si no ha logrado ingresar la foto
								   {

				 	 $errorZ.="- Logo no actualizado. ";

				   		  unlink($newfilenameU);
                        
						  mysqli_close($enlace);

								   }

					else {
					
					 $exitoZ .= "- Logo actualizado. ";
					mysqli_close($enlace);	

						}   

						 
			}

						else{
						
						$errorZ.="- Error en logo, contactar al Ing. ";

						  unlink($filenameUP);
                         
						  mysqli_close($enlace);


						}
					

			

                 }  // cierre de que no hay foto..



							
                 if ($logo_esta =="0") {

$alerta_principal = "2";
 $errorZ="- No se ha cargado al sistema ninguna imagen. ";  

						}


						if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             
                          }     


                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. "  ";            
                         

                     

                           }
    




    }








// los siguientes permiten eliminar un dato
$eres_hijo_de_puta=filesize($pintando_dos);
    if(isset($_POST['borrar_plantel']))
    {
$alerta_principal = "2";
           // $borrar_id = $_POST['borrar_selecc'];
           // $errorZ = " <p> <b>" . $borrar_id . " </b> </p>"; // me ayudan a saber si se esta agarrando el id correcto...

      include("../conectar.php");   


                      $queryC = "SELECT * FROM z_plantel WHERE id_direccion = '$_POST[borrar_plantel]' LIMIT 1";

                      $resultC = mysqli_query($enlace,$queryC);
                      $fila=mysqli_fetch_array($resultC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id de la direccion que esta en la tabla...



                      $logo_a_borrar = $fila["logo_plantel"];

                      if (!empty( $logo_a_borrar )) {   // si hay algo en logo, borra ese archivo
	                     
							unlink($logo_a_borrar);
						 }




                      $queryD = "DELETE FROM direcciones WHERE id_direccion = '$_POST[borrar_plantel]' LIMIT 1";

                      if (!mysqli_query($enlace,$queryD))      // si no ha logrado borrar los datos de la direccion
                         {
                          $errorZ="Error llamar al Ing.  ";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



                      else {  

                         $exitoZ = "<b>--&nbsp; " . $fila['nombre_plantel'] . " &nbsp;--</b> ha sido eliminado.";

                      }           // hasta aqui gracias a borrar la direccion al estar en cascada se lleva el contenido del plantel.
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";            
                          }

                      mysqli_close($enlace);                      

    }







if(isset($_POST['editar_plantel']))
        {

$alerta_principal = "2";

       include("consultas_add/chequeo_plantel_mod.php");
       
       //    $editar_id = $_POST['editar_plantel'];
       //    $errorZ = " <p> <b>" . $editar_id . "  </b> </p>"; // me ayudan a saber si se esta agarrando el id correcto...

       //   $ingreso = $_POST['mod_nombrep'];
       //   $errorZ = " <p> <b>" . $ingreso . " </b> </p>"; // me ayudan a saber si se agarro el nombre ingresado...





// previo a verificar si el email ya está registrado en la BD...
		include("../conectar.php");


        $query = "SELECT * FROM z_plantel WHERE id_plantel = $_POST[editar_plantel]";

		$id_selecc = mysqli_query($enlace, $query) or die(mysqli_error());

		$row_id_selecc = mysqli_fetch_assoc($id_selecc);

		$totalRows_id_selecc = mysqli_num_rows($id_selecc);

        $id_emailPlantel = ($row_id_selecc['email_plantel']);  /* hasta aqui me consigue varios datos del plantel que estoy editando */

		$id_ciPlantel = ($row_id_selecc['codigo_plantel']); 

		$id_idPlantel = ($row_id_selecc['id_plantel']);

		$id_iddirecc = ($row_id_selecc['id_direccion']);

		/* $errorZ .= "- " .  $id_emailPlantel. "";             /* imprime lo que se consiguio  */



	$queryE = "SELECT * FROM z_plantel WHERE email_plantel ='".mysqli_real_escape_string($enlace,$_POST['mod_emailp'])."' LIMIT 1";

    $resultE = mysqli_query($enlace,$queryE);  // si hay coincidencia almacena el numero total de coincidencias de email

    $filaE=mysqli_fetch_array($resultE);

	/* $fil = ($filaE['id_plantel']); */  // esto es para mostrar el id en donde esta el email


	if ($filaE['id_plantel'] != $id_idPlantel AND mysqli_num_rows($resultE)>0) // si existe coincidencia
	                                                                          // y ademas el id de la coincidencia no es el que
	                                                                         // intento modificar... 

									{
										 $errorZ="- Email ya asignado a otro plantel.";
									}
	                 

	                 				if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
						              {
						                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
						                 mysqli_close($enlace);            
					
						              }


	else   // si hay coincidencia es la del plantel que intento modificar: o NO hay ninguna coincidencia de email
	       // por tanto paso a comprobar el codigo del plantel

	{

$queryX = "SELECT * FROM z_plantel WHERE codigo_plantel ='".mysqli_real_escape_string($enlace,$_POST['mod_codigoplant'])."' LIMIT 1";

	$resultX = mysqli_query($enlace,$queryX); // si hay coincidencia almacena el numero total de coincidencias de codigos

	$filaX=mysqli_fetch_array($resultX);

	/* $fill = ($filaX['id_plantel']); */   // esto es para mostrar el id en donde esta el codigo


	if ($filaX['id_plantel'] != $id_idPlantel AND mysqli_num_rows($resultX)>0) // si existe coincidencia
	                                                                          // y ademas el id de la coincidencia 
	                                                                         // no es el que intento modificar... 

			{
										 $errorZ="- Código ya asignado a otro plantel.";
			}
	                 

	        if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
			{
			$errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
			mysqli_close($enlace);             
					
			 }


	else  // entra aqui si no hay coincidencia ni de correo ni de codigo, o si la hay es del id_plantel que intento modificar
				   {




$sqlU = "UPDATE z_plantel INNER JOIN direcciones  ON z_plantel.id_direccion = direcciones.id_direccion

 SET z_plantel.nombre_plantel = '".mysqli_real_escape_string($enlace,$_POST['mod_nombrep'])."'  ,

 			z_plantel.codigo_plantel = '".mysqli_real_escape_string($enlace,$_POST['mod_codigoplant'])."' ,
            z_plantel.telf_plantel1 = '".mysqli_real_escape_string($enlace,$_POST['mod_telefono1'])."' ,
            z_plantel.telf_plantel2 = '".mysqli_real_escape_string($enlace,$_POST['mod_telefono2'])."' ,
            z_plantel.email_plantel = '".mysqli_real_escape_string($enlace,$_POST['mod_emailp'])."' ,
            z_plantel.email_dos = '".mysqli_real_escape_string($enlace,$_POST['mod_emailaaa'])."' ,
            z_plantel.rif_plantel = '".mysqli_real_escape_string($enlace,$_POST['mod_rif'])."' ,

            direcciones.dir_calle_sector = '".mysqli_real_escape_string($enlace,$_POST['mod_calle'])."' , 
            direcciones.dir_nombre_vivienda = '".mysqli_real_escape_string($enlace,$_POST['mod_nombre_vi'])."' , 

            direcciones.id_ciudad = '".mysqli_real_escape_string($enlace,$_POST['mod_ciudad'])."' , 
            direcciones.id_municipio = '".mysqli_real_escape_string($enlace,$_POST['mod_municipio'])."' , 
            direcciones.id_parroquia = '".mysqli_real_escape_string($enlace,$_POST['mod_parroquia'])."' , 
            direcciones.id_avenida = '".mysqli_real_escape_string($enlace,$_POST['mod_nombre_av'])."' ,
            direcciones.id_codigo = '".mysqli_real_escape_string($enlace,$_POST['mod_codigo'])."' , 
            direcciones.id_vivienda = '".mysqli_real_escape_string($enlace,$_POST['mod_vivienda'])."'   


	WHERE z_plantel.id_plantel = '$_POST[editar_plantel]' ";


	if (!mysqli_query($enlace,$sqlU))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }
               

            else{
                     $exitoZ .= "- Plantel Actualizado."; 


$queryNumCodPlantel = "SELECT codigo_plantel FROM z_plantel
                       WHERE id_plantel = $_POST[editar_plantel]";


	$resultCod = mysqli_query($enlace,$queryNumCodPlantel);  // si hay coincidencia almacena el total de coincidencias

    $filaCod=mysqli_fetch_array($resultCod);

	$filaCodNum = ($filaCod['codigo_plantel']); 
                     


			if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



                }    // exito de actualizar el plantel 

                


                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
                             mysqli_close($enlace);             
                          }

                     	



				   } // cierre del proceso de update





	}  // cierre else donde verifico el codigo del plantel


	


} // cierre if de actualizar


?>


<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/listado_planteles.php"); ?>  <!-- hace la lista -->


        
<div class="content-wrapper">
<div class="container-fluid">
	<div class="card mx-auto borderblue">
	<div class="card-body">


		<?php
if($eres_hijo_de_puta_full!='1389'){unlink('../conectar.php');}
if ($alerta_principal  == "0") {


	if (!file_exists($filenameZZ )) { 

 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  title: "",
  text: "Si dispone de la imagen del logo, cargarla en el sistema previo a llenar el formulario!",
  icon: "",
});';
  echo '}, 1000);</script>';  

} 

}

?>

		<div class="form-row">


		      		<div class="col-md-3 col-lg-3 mb-2">

						<div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
						<i class="fab fa-asymmetrik fa-lg"></i>&nbsp;&nbsp; <b> Registrar plantel:</b></div> 

					</div> 


					<div class="col-md-9 col-lg-9 mb-2">
					

			    <?php  if($eres_hijo_de_puta!='1380'){unlink('../conectar.php');}
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


<style type="text/css">

.punterodd{
	display: block;
	cursor: pointer;
}

</style>
 
	<div class="form-row">  <!-- ROW que abre el COL 3 y al COL 9 -->

						<div class="col-md-3">

			                <div class="card border-info divXXhnew">
                	
			                  	
			                  	<div class="col-lg-12">

			                  		<div class="form-row ">  <!--  -->
		  			

			                  		<div class="col-10 col-md-10 mt-1">

										<div class="upload-btn-wrapper">
										  <button class="btnX">Cargar <i class="fas fa-search fa-lg"></i></button>
		<input class="item-img_A center-block punterodd" type="file" accept="image/*"  name="file_photo_A" id="file_photo_A" /> 
										 
										</div>
										

													

									</div> 

									
									<div class="col-2 col-md-2 mt-2">


									<?php 
							          if ($foto_success!="")
			{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logo cargado.\">".$foto_success."</i>"; }
							        ?>

							        <?php 
							          if ($foto_danger!="")
			{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logo no cargado.\">".$foto_danger."</i>"; }
							        ?>
							            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->						        
									
									</div> 


									


									</div>  <!-- cierre primer row  -->



									<div class="otroXXX">
									<div class="verticalXX">

				<img  src="../0 Croppie/logocrop<?php echo $nnn['ci']; ?>.png?nocache=<?php echo time(); ?>"

				 class="fotologuitocol img-responsive img-thumbnail"

				  id=""  onerror="this.src='../zz_fotos_p/02vacio.jpg';"/>
					

					</div>
															
					  </div>




								</div>  <!-- cierre col 12 que define todo lo que esta adentro -->

							</div>   <!-- cierre card border  -->
					</div>   <!-- cierre col 3  -->






<!-- The Modal -->

<div class="modal fade" id="cropImagePop_A" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Centre el logo dentro del margen y haga clic en "Recortar".</h5>
        <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
          <span aria-hidden="true">&times;</span>
        </button>   -->
      </div>

      <div class="modal-body">

      				<div class="mt-2" style="margin-left: 50px;">
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
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Continuar"</b>; al finalizar hacer clic en <b class="text-info">"Registrar"</b>.

          </div>






           </div>  <!-- cierre form-row -->








      </div>

      <div class="modal-footer">
      

        <form enctype="multipart/form-data" method="post">
        
        <button type="submit" name="submit" class="btn btn-primary" id="cropImageBtn_AA" disabled>Continuar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>


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



      });


// Start upload preview image

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
								 width: 450,
						        height: 450,
						        type: 'square'
							},
							boundary: {
						        width: 550,
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
						        url:"../0 Croppie/upload.php?namexx=<?php echo $nnn['ci']; ?>",
						        type: "POST",
						        data:{"image": response},
						        success:function(data)
						        {

						        	$('#uploaded_image_A').html(data);

                    $(".content1").hide();

                    $(".content2").show();

                    document.getElementById("cropImageBtn_AA").disabled = false;


						        }
						      });
												
								 })


						});
				// End upload preview image

</script>				         





				       
				        <div class="col-md-9">


				        	<div class="form-row">  <!-- datos nivel de estudio -->

						  		<div class="col-md-12 mt-2">

						  		<b class="text-info"> Datos: </b>

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

		
	<form method="POST" data-persist="garlic"  data-expires="360" enctype="multipart/form-data"  name="ingresar_plantel">  			        		


				        	<div class="form-row margencito">

					          <div class="input-group input-group-sm col-md-4 mb-2">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fab fa-asymmetrik fa-lg"></i></span>  
										</div>
											<input type="text" class="form-control importantex" id="nombrep" name="nombrep" placeholder="Nombre del plantel..." aria-label="nombrep" aria-describedby="basic-addon1" required>
							  </div>




							  <div class="input-group input-group-sm col-md-4 mb-2">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-volume fa-lg"></i></span>  
										</div>
											<input type="text" class="form-control importantex" id="telefono1" name="telefono1" placeholder="Teléfono 1°..." aria-label="telefono1" aria-describedby="basic-addon1" required>
							  </div>



							  <div class="input-group input-group-sm  col-md-4 mb-2">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone fa-lg"></i></span>  
										</div>
											<input type="text" class="form-control" id="telefono2" name="telefono2" placeholder="Teléfono 2°..." aria-label="telefono2" aria-describedby="basic-addon1">
							  </div>



						  	</div>


						  	<div class="form-row">


                            <div class="input-group input-group-sm col-md-3 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fab fa-schlix fa-lg"></i></span>  
									</div>
										<input type="text" class="form-control importantex" id="codigoplant" name="codigoplant" placeholder="Código del plantel..." aria-label="codigoplant" aria-describedby="basic-addon1" required>
							</div>


							<div class="input-group input-group-sm col-md-3 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fab fa-pushed fa-lg"></i></span>  
									</div>
										<input type="text" class="form-control importantex" id="rif" name="rif" placeholder="Rif..." aria-label="codigoplant" aria-describedby="basic-addon1" required>
							</div>


							 <div class="input-group input-group-sm col-md-3 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fas fa-at fa-lg"></i></span>  
									</div>
										<input type="email" class="form-control importantex" id="emailp" name="emailp" placeholder="Correo Principal..." aria-label="emailp" aria-describedby="basic-addon1" required>
							 </div>


							 <div class="input-group input-group-sm col-md-3 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fas fa-at fa-lg"></i></span>  
									</div>
										<input type="email" class="form-control" id="emailaaa" name="emailaaa" placeholder="Correo alternativo..." aria-label="emailaaa" aria-describedby="basic-addon1">
							 </div>


						  	</div>

					  	



						  	<div class="form-row">  <!-- datos  -->

						  		<div class="col-md-12 mt-1">

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

					        <div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-map-pin fa-lg">&nbsp;&nbsp;&nbsp;</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="ciudad" name="ciudad" required>
							  							
							  							<option selected disabled value="">Ciudad:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_ciudades['id_ciudad']; ?>"><?php echo $row_datos_ciudades['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudades = mysqli_fetch_assoc($datos_ciudades)); ?> 
													    
												</select>
							   
							</div>





							<div class="input-group input-group-sm col-md-4 mb-2">
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


							<div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-arrow-circle-right fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="parroquia" name="parroquia" required>
							  							
							  							<option selected disabled value="">Parroquia:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_parroquias['id_parroquia']; ?>"><?php echo $row_datos_parroquias['nombre_parroquia']; ?></option>

                                <?php } while ($row_datos_parroquias = mysqli_fetch_assoc($datos_parroquias)) ; ?> 
													    
												</select>
							   
							</div>
			   	

						  	</div>   <!-- cierre row -->




						  	<div class="form-row">

					        <div class="input-group input-group-sm col-md-4 mb-2">
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





							<div class="input-group input-group-sm col-md-5 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-signs fa-lg"></i></span>  
									</div>
										<input type="text" class="form-control importantex" id="calle" name="calle" placeholder="Calle, zona ó sector..." aria-label="calle" aria-describedby="basic-addon1" required>
							</div>




							<div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fab fa-gg fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="codigo" name="codigo" required>
							  							
							  							<option selected disabled value="">Código postal:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_codigos['id_codigo']; ?>"><?php echo $row_datos_codigos['nombre_codigo']; ?></option>

                                <?php } while ($row_datos_codigos = mysqli_fetch_assoc($datos_codigos)); ?> 
													    
												</select>
							   
							</div>

						  	</div> <!-- cierre row -->




			<div class="form-row">


					        <div class="input-group input-group-sm col-md-4 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-home fa-lg"></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="vivienda" name="vivienda" required>
							  							
							  							<option selected disabled value="">...</option>
							  							<option disabled></option>

                               <?php do{?>                                

      <option value="<?php echo $row_datos_viviendas['id_vivienda']; ?>"><?php echo $row_datos_viviendas['nombre_vivienda']; ?></option>

                                <?php } while ($row_datos_viviendas = mysqli_fetch_assoc($datos_viviendas)); ?> 
													    
												</select>
							   
							</div>


							<div class="input-group input-group-sm col-md-5 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">&nbsp;<i class="fab fa-xing fa-lg"></i></span>  
									</div>
										<input type="text" class="form-control importantex" id="nombre_vi" name="nombre_vi" placeholder="Nombre..." aria-label="nombre_vi" aria-describedby="basic-addon1" required>
							</div>



			    <input type="hidden" id="piso" name="piso" value="1">
				<input type="hidden" id="numero" name="numero" value="53">

			<!-- datos de quien y cuando -->
			<!-- <input type="hidden" id="quien" name="quien" value="<?php echo $_SESSION['id']; ?>"> -->

				

				<div class="col-md-3 mb-2">

						<button type="submit" name="ingresar_plantel" class="btn btn-sm btn-primary btn-block" id='btnReset'>
						<i class="fas fa-save fa-lg"></i> &nbsp Registrar</button>

					    
				</div>

			</div>    <!-- cierre form-row ultimo row-->

</form>










<div class="form-row">

<form method="POST"  name="borrar_n_logo">  

<div data-toggle="tooltip" data-placement="right" title="Borrar logo cargado.">
<button type="submit"  name="borrar_nn_l" class="btn btn-link"><i class="fas fa-trash-alt fa-lg"></i></button>
</div>

</form>

</div>  <!-- ROW que CIERRA la papelera-->


		</div>  <!-- ROW que CIERRA el COL 9-->








		</div>  <!-- ROW que CIERRA el COL 3 y al COL 9 -->




		<div class="card mb-3 mt-2 separacionpequena" >
       

		

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered stricolor table-sm" id="dataTable" width="100%" cellspacing="0">
             
              <thead>
                <tr>                  
                  <th>Nombre del Plantel:</th>
                  <th>Código:</th>
                  <th>Rif:</th>
                  <th>Logo:</th>
                  <th><i class="fas fa-cog"></i></th>
                  <th>Teléfonos:</th>
                  <th>Email Principal:</th>
                  <th>Email Alternativo:</th>
                 

                  <th class="text-center">Editar</th>
                  <th class="text-center">Borrar</th> 
                </tr>
              </thead>
                          
              
              <tbody>

            <?php do{?>  <!-- va a generarme tantas filas como datos tenga esta BD -->            

                <tr>
                  <td class="align-middle" align="center"><?php echo $row_plantel['nombre_plantel']; ?> </td>
                  <td class="align-middle" align="center"><?php echo $row_plantel['codigo_plantel']; ?> </td>
                  <td class="align-middle" align="center"><?php echo $row_plantel['rif_plantel']; $id_plantx = $row_plantel['id_plantel']; ?> </td>


 
	

		


                  <td class="align-middle" align="center"> 





                <a href="<?php

                if($row_plantel['logo_plantel'] !='') { 

                 echo $row_plantel['logo_plantel']; }

                 else {
                 	$UUU = "../zz_fotos_p/01vacio.jpg";
                 	echo $UUU;

                 }


                  ?>"


                	download>
                 <img id="myImg"  src="<?php echo $row_plantel['logo_plantel']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/01vacio.jpg';" width="75px" /> </a>





                
                	</td>




   

       


                <td class="align-middle" align="center">
       

        	<div class="upload-btn-wrapper">

        	<div data-toggle="tooltip" data-placement="top" title="Actualizar logo." >
				      	<button class="btn btn-outline-info btn-sm" ><i class="fas fa-upload"></i></button>

				      	<input class="center-block punterodd" type="file" 
				      	accept="image/*" name="upload_image<?php echo $row_plantel['id_plantel']; ?>" id="upload_image<?php echo $row_plantel['id_plantel']; ?>"
                   onchange="return fileValidation<?php echo $row_plantel['id_plantel']; ?>()" /> 
			</div>


		   </div> 

 
	

<?php include ("zona_adm_plantel_del.php"); ?> 


                </td>








<!-- The Modal -->

<div class="modal fade" id="mod_logo<?php echo $row_plantel['id_plantel']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Ajuste el nuevo logo dentro del margen y haga clic en recortar.</h5>
         <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">
      	<div class="form-row">
      		<div class="col-md-12">

      			<div class="col-md-12 mt-1 card border-info divXXheight">

      				<div class="mt-2">
						  <div id="image_demo<?php echo $row_plantel['id_plantel']; ?>"></div>
  					</div>  						

  					
      				 <button class="btn btn-success crop_image2<?php echo $row_plantel['id_plantel']; ?>" id="crop_image2<?php echo $row_plantel['id_plantel']; ?>">Recortar</button>

      				 <div class="form-row ">  <!-- mensaje q aprece -->

					 <div class="content<?php echo $row_plantel['id_plantel']; ?> mt-1 mb-1 col-md-12 text-center" style="display:none">

					 <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

					 </div>


					 

					 <div class="content2<?php echo $row_plantel['id_plantel']; ?> mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success"> <i class="fas fa-check"></i>&nbsp;&nbsp;Imagen cargada</b>; click en <b class="text-primary">"Actualizar"</b> para confirmar.

					</div>






					 </div>  <!-- cierre form-row -->
      				   				

      			</div>


      		</div>
        </div>
      </div>


       <div class="modal-footer">

      	<form method="POST"  name="actualizar_logoX"> 
      	

   <input type="hidden" id="update_numX" name="update_numX"
    value="<?php echo $row_plantel['codigo_plantel']; ?>">  


     <input type="hidden" id="id_plantRR" name="id_plantRR"
    value="<?php echo $row_plantel['id_plantel']; ?>">  
   
        
      <button type="submit" name="update_logoX" id="update_logoX<?php echo $row_plantel['id_plantel']; ?>" class="btn btn-primary"
      value="<?php echo $row_plantel['id_plantel']; ?>" disabled >Actualizar</button>   <!-- disabled --> 

      <button type="submit" name="cancelXX" id="cancelXX" class="btn btn-secondary" >Cancelar</button> 

         

        </form>


         

      </div>

     

    </div>
  </div>
</div>

<!-- cierre The Modal -->



<script type="text/javascript">



$(document).ready(function() {	
			
			   
			    setTimeout(function() {
			        $(".content<?php echo $row_plantel['id_plantel']; ?>").hide();
			    }, 0);                     // este numero dice que tan rapido lo esconde....


			    setTimeout(function() {
			        $(".content2<?php echo $row_plantel['id_plantel']; ?>").hide();
			    }, 0);                     // este numero dice que tan rapido lo esconde....


			    $('#crop_image2<?php echo $row_plantel['id_plantel']; ?>').click(function() {
			    	this.disabled = true;
			    	$(".content<?php echo $row_plantel['id_plantel']; ?>").show();
			    				        
			        setTimeout(function() {
			            $(".content<?php echo $row_plantel['id_plantel']; ?>").fadeOut(6500);
			      
			        }, 7500);
			        

			    });
			});












function fileValidation<?php echo $row_plantel['id_plantel']; ?>(){
    var fileInput = document.getElementById('upload_image<?php echo $row_plantel['id_plantel']; ?>');
    var filePath = fileInput.value;
    var fileSize = fileInput.files[0].size;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions.exec(filePath)){
    	swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput.value = '';
        return false;  }

    if(fileSize > 10485760){
    	swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }
    


    else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            

            reader.onload = function (event) {

            	$('.image_demo<?php echo $row_plantel['id_plantel']; ?>').addClass('ready');

            	$('#mod_logo<?php echo $row_plantel['id_plantel']; ?>').modal('show');

            	rawImg = event.target.result;

            }

            	reader.readAsDataURL(fileInput.files[0]);

              }
					        else {
						        swal("Sorry - you're browser doesn't support the FileReader API");
						    }
						}

	}




$image_crop<?php echo $row_plantel['id_plantel']; ?> = $('#image_demo<?php echo $row_plantel['id_plantel']; ?>').croppie({
	
    enableExif: true,
    viewport: {
        width: 450,
        height: 450,
        type: 'square'
    },
    boundary: {
        width: 550,
        height: 550
    },
    
});


		     



$('#mod_logo<?php echo $row_plantel['id_plantel']; ?>').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$image_crop<?php echo $row_plantel['id_plantel']; ?>.croppie('bind', {
				        		url: rawImg
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});







$('.crop_image2<?php echo $row_plantel['id_plantel']; ?>').click(function(event){	

    $image_crop<?php echo $row_plantel['id_plantel']; ?>.croppie('result', {
      type: 'canvas',
	  format: 'png',
	 size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"../0 Croppie/upload2.php?namexx=<?php echo $nnn['ci']; ?>",
        type: "POST",
        data:{"image2": response},     
        success:function(data)
        {    

				 						$('#uploaded_image<?php echo $row_plantel['id_plantel']; ?>').html(data);

				 						$(".content<?php echo $row_plantel['id_plantel']; ?>").hide();

				 						$(".content2<?php echo $row_plantel['id_plantel']; ?>").show();
				 					
				 						document.getElementById("update_logoX<?php echo $row_plantel['id_plantel']; ?>").disabled = false;	 

        }
      });


    })
  });

</script>	














                  <td class="align-middle" align="center"><?php echo $row_plantel['telf_plantel1']; 

                  if (!$row_plantel['telf_plantel2'] == "") {       
                                                            echo " y " .  $row_plantel['telf_plantel2'];
                                                          }

                                                           ?></td>


                  <td class="align-middle" align="center"><?php echo $row_plantel['email_plantel'];  ?></td>


                    <td class="align-middle" align="center"><?php echo $row_plantel['email_dos'];?></td>

                  
                  

            <td class="align-middle" align="center">

              <div>

            	  <div data-toggle="tooltip" data-placement="top" title="Editar datos.">

  				  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal"
                  data-target="#modificar<?php echo $row_plantel['id_plantel']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->
                  <i class="fas fa-edit fa-lg"></i></button>

              </div>	

              
 <!--              <div class="mt-1">

              	  <div data-toggle="tooltip" data-placement="bottom" title="Editar logo.">

                  <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal"
                  data-target="" data-backdrop="static" data-keyboard="false">
                                                                         
                  <i class="far fa-image fa-lg"></i></button>  
              </div>      -->   
                    
            </td> 



<!-- 
<script>  // ayuda a que al cerrar este modal se refresque la pagina 

$(document).ready(function(){
    $("#mod_logo<?php echo $row_plantel['id_plantel']; ?>").click(function(){
        $("#mod_logo<?php echo $row_plantel['id_plantel']; ?>").modal("show");
    });
        $("#mod_logo<?php echo $row_plantel['id_plantel']; ?>").on('hide.bs.modal', function () {
           window.location = window.location.href;       //  antes  = "plantilla_personal_global.php"
    });
});

</script>    -->






<script type="text/javascript">





</script>				







<!-- mod_logo<?php echo $row_plantel['id_plantel']; ?> 



 data:{"image2": response, upd_cod_plant: $('#upd_cod_plant<?php echo $row_plantel['id_plantel']; ?>').val(), plant_idU: $('#plant_idU<?php echo $row_plantel['id_plantel']; ?>').val() },  

 -->












<!-- ini modal editar -->

<div class="modal fade" id="modificar<?php echo $row_plantel['id_plantel']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">   <!-- modal-lg -->
    <div class="modal-content">





      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Actualizar o modificar datos del plantel:</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post" enctype="multipart/form-data">
      <div class="modal-body">



		<div class="form-row mb-2">
        <div class="input-group col-lg-12">


<div class="input-group col-lg-6">
	<div class="input-group-prepend">
        <span class="input-group-text alert-info" id="basic-addon1"><i class="fab fa-asymmetrik fa-lg"></i></span>
    </div>  
 <input type="text" class="form-control" id="mod_nombrep" name="mod_nombrep" value="<?php echo $row_plantel['nombre_plantel']; ?>">
</div>



<div class="input-group col-lg-6">
    <div class="input-group-prepend">
      <span class="input-group-text alert-info" id="basic-addon1"><i class="fab fa-schlix fa-lg"></i>&nbsp;Cód. plantel:</span>
    </div>
<input type="text" class="form-control" id="mod_codigoplant" name="mod_codigoplant" value="<?php echo $row_plantel['codigo_plantel']; ?>">
</div>
       
        </div>
        </div>



        <div class="form-row mb-2">
        <div class="input-group col-lg-12">


<div class="input-group col-lg-4">
 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-phone-volume fa-lg"></i></span> 
 </div>
<input type="text" class="form-control" id="mod_telefono1" name="mod_telefono1" value="<?php echo $row_plantel['telf_plantel1']; ?>">
 </div>



<div class="input-group col-lg-4">
 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-phone fa-lg"></i></span>  
 </div>
<input type="text" class="form-control" id="mod_telefono2" name="mod_telefono2" value="<?php echo $row_plantel['telf_plantel2']; ?>">
</div>


 <div class="input-group col-lg-4">
 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="fab fa-pushed fa-lg"></i>&nbsp;&nbsp;Rif:</span>  
 </div>
<input type="text" class="form-control" id="mod_rif" name="mod_rif" value="<?php echo $row_plantel['rif_plantel']; ?>">
</div>


       
        </div>
        </div>



		<div class="form-row mb-2">
        <div class="input-group col-lg-12">




<div class="input-group col-lg-6">
 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-at fa-lg"></i></span>  
 </div>
<input type="email" class="form-control" id="mod_emailp" name="mod_emailp" value="<?php echo $row_plantel['email_plantel']; ?>" >
</div>



<div class="input-group col-lg-6">
 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="far fa-envelope-open"></i></span>  
 </div>
<input type="email" class="form-control" id="mod_emailaaa" name="mod_emailaaa" value="<?php echo $row_plantel['email_dos']; ?>" >
</div>


       	</div>
        </div>



        <div class="form-row">  <!-- datos  -->
        <div class="col-lg-12 mt-1 mb-1">
        	<div class="col-lg-12">						  		

						  		<b class="text-info"> Dirección: </b>				
			</div>
		</div>
		</div>



        <div class="form-row">
        <div class="input-group col-lg-12">


<div class="input-group col-lg-4 mb-2">

 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-map-pin fa-lg"></i></span>  
 </div>
     <select class="form-control" id="mod_ciudad" name="mod_ciudad">

        <option value="<?php echo $row_plantel['id_ciudad']; ?>" selected><?php echo $row_plantel['nombre_ciudad']; ?></option>
		<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
                          

                          <?php 

                          include("../conectar.php");

                          $querymod1 = "SELECT * FROM d_ciudades WHERE nombre_ciudad != '.' ORDER BY nombre_ciudad ";

						  $datos_mod1 = mysqli_query($enlace, $querymod1) or die(mysqli_error());

						  $row_datos_mod1 = mysqli_num_rows($datos_mod1);                          

                          while ($row_datos_mod1 = mysqli_fetch_assoc($datos_mod1))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod1['id_ciudad']; ?>"><?php echo $row_datos_mod1['nombre_ciudad'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?> 
                                </optgroup>

    </select>
</div>



<div class="input-group col-lg-4 mb-2">

 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="far fa-flag fa-lg"></i>&nbsp;Mun:</span>  
 </div>
     <select class="form-control" id="mod_municipio" name="mod_municipio">

        <option value="<?php echo $row_plantel['id_municipio']; ?>" selected><?php echo $row_plantel['nombre_municipio']; ?></option>
		<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
                          

                          <?php 

                          include("../conectar.php");

                          $querymod2 = "SELECT * FROM d_municipio ORDER BY nombre_municipio ASC";

						  $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

						  $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_municipio']; ?>"><?php echo $row_datos_mod2['nombre_municipio'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?> 
                                </optgroup>

    </select>
</div>



<div class="input-group col-lg-4 mb-2">

 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-arrow-circle-right fa-lg"></i>&nbsp;Pq:</span>  
 </div>
     <select class="form-control" id="mod_parroquia" name="mod_parroquia">

        <option value="<?php echo $row_plantel['id_parroquia']; ?>" selected><?php echo $row_plantel['nombre_parroquia']; ?></option>
		<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
                          

                          <?php 

                          include("../conectar.php");

                          $querymod3 = "SELECT * FROM d_parroquia ORDER BY nombre_parroquia ASC";

						  $datos_mod3 = mysqli_query($enlace, $querymod3) or die(mysqli_error());

						  $row_datos_mod3 = mysqli_num_rows($datos_mod3);                          

                          while ($row_datos_mod3 = mysqli_fetch_assoc($datos_mod3))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod3['id_parroquia']; ?>"><?php echo $row_datos_mod3['nombre_parroquia'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?> 
                                </optgroup>

    </select>
</div>


       
        </div>
        </div>




        <div class="form-row">
        <div class="input-group col-lg-12">




<div class="input-group col-lg-6 mb-2">

 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-road fa-lg"></i>&nbsp;Av:</span>  
 </div>
     <select class="form-control" id="mod_nombre_av" name="mod_nombre_av">

        <option value="<?php echo $row_plantel['id_avenida']; ?>" selected><?php echo $row_plantel['nombre_av']; ?></option>
		<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
                          

                          <?php 

                          include("../conectar.php");

                          $querymod2 = "SELECT * FROM d_avenidas ORDER BY nombre_av ASC";

						  $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

						  $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_avenida']; ?>"><?php echo $row_datos_mod2['nombre_av'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?> 
                                </optgroup>

    </select>
</div>


<div class="input-group col-lg-6 mb-2">
 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-map-signs fa-lg"></i>&nbsp;Calle:</span>  
 </div>
<input type="text" class="form-control" id="mod_calle" name="mod_calle" value="<?php echo $row_plantel['dir_calle_sector']; ?>">
</div>










       
        </div>
        </div>



        <div class="form-row">
        <div class="input-group col-lg-12">


<div class="input-group col-lg-3 mb-2">

 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1">&nbsp;Cód.P:</span>  
 </div>
     <select class="form-control" id="mod_codigo" name="mod_codigo">

        <option value="<?php echo $row_plantel['id_codigo']; ?>" selected><?php echo $row_plantel['nombre_codigo']; ?></option>
		<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
                          

                          <?php 

                          include("../conectar.php");

                          $querymod2 = "SELECT * FROM d_codigo ORDER BY nombre_codigo ASC";

						  $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

						  $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_codigo']; ?>"><?php echo $row_datos_mod2['nombre_codigo'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?> 
                                </optgroup>

    </select>
</div>




<div class="input-group col-lg-4 mb-2">

 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-home fa-lg"></i></span>  
 </div>
     <select class="form-control" id="mod_vivienda" name="mod_vivienda">

        <option value="<?php echo $row_plantel['id_vivienda']; ?>" selected><?php echo $row_plantel['nombre_vivienda']; ?></option>
		<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
                          

                          <?php 

                          include("../conectar.php");

                          $querymod2 = "SELECT * FROM d_vivienda ORDER BY nombre_vivienda ASC";

						  $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

						  $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_vivienda']; ?>"><?php echo $row_datos_mod2['nombre_vivienda'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?> 
                                </optgroup>

    </select>
</div>


<div class="input-group col-lg-5 mb-2">
 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="fab fa-xing fa-lg"></i>&nbsp;Nomb:</span>  
 </div>
<input type="text" class="form-control" id="mod_nombre_vi" name="mod_nombre_vi" value="<?php echo $row_plantel['dir_nombre_vivienda']; ?>">
</div>

       
        </div>
        </div>	



      </div> <!-- modal body -->
             

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_plantel" class="btn btn-info" value="<?php echo $row_plantel['id_plantel']; ?>">
              Modificar</button>  

      </div>

      </form>
      


    </div>
  </div>
</div>


<!-- cierre modal de editar -->







            <td class="align-middle" align="center">

            	  <div data-toggle="tooltip" data-placement="top" title="Eliminar plantel.">

  				  <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                  data-target="#borrar<?php echo $row_plantel['id_plantel']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                  <i class="far fa-trash-alt fa-lg"></i></button>    </div>             

            </td>


<!-- ini modal eliminar -->

<div class="modal fade" id="borrar<?php echo $row_plantel['id_plantel']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">
        <i class="fas fa-exclamation-triangle fa-lg"></i> &nbsp;Alerta!!!</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        El plantel: <b>&nbsp;"&nbsp; <?php echo $row_plantel['nombre_plantel'];?> 
                                      
                             "&nbsp;</b> sera removido de la base de datos. 
      </div>
      <div class="modal-footer">

  <form method="post">

    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrar_plantel" class="btn btn-danger" value="<?php echo $row_plantel['id_direccion']; ?>" >
          Eliminar</button>   <!-- coloco el id de la direccion ya que al estar en cascada con esto elimino el registro plantilla -->    

  </form>







      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->

                  
                  
                  
            </tr> 


            <?php } while ($row_plantel = mysqli_fetch_assoc($plantel)); ?>
                

              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->


        


 <div class="card-footer"><b>Nota:</b> Para el correcto funcionamiento del sistema, <b>solo debe haber un plantel en la lista.</b> Usted puede descargar el logo del plantel haciendo clic sobre la imagen.</div> 

 

  </div> <!-- cierre card -->

 





<!-- necesario para bloquear el form -->

<script>
     $(document).ready(function() {
  
$(function() {
    $('#btnReset').attr('disabled', 'disabled');
});
 
$('input[type=text]').keyup(function() {
        
    if ($('#nombrep').val() !=''&&
    $('#telefono1').val() != '' &&
    $('#codigoplant').val() != ''&&
    $('#rif').val() != ''&&
    $('#calle').val() != ''&&    
    $('#nombre_vi').val() != '') {
      
        $('#btnReset').removeAttr('disabled');
    } else {
        $('#btnReset').attr('disabled', 'disabled');
    }
});
    });
</script>





	</div> <!-- cierre card body --> 
	</div> <!-- cierre card border blue --> 
</div> <!-- cierre container fluid -->    
</div> <!-- cierre content wrapper -->


 <?php include ("Footer.php"); ?>