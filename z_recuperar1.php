<?php

session_start();

error_reporting(0);

header("Content-type: text/html;charset=\"utf-8\"");                  // Necesario para caracteres latinos

	$errorZ="";  // acumula los mensajes de error
	$infoZ="";  // acumula los mensajes de información
	$exitoZ="";  // acumula los mensajes de éxito

	$_SESSION ['apellidos_M']="";// inicializa la seccion apellido que me da acceso a la pagina en donde
	                             // coloco la contraseña de esta manera si estoy en dicha pagina
	                             // y me regreso, la seccion dejara de ser valida.


if (array_key_exists("submit",$_POST))// chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba

   {

         include("conectar.php");

                        //  Chequeo basico de entrada de cedula y clave


				if (!$_POST['recuperar_c'])  // verifica que no este vacío el campo cedula
			        {  $errorZ .= "<br> - Cedula requerida."; }

			    if (strlen($_POST['recuperar_c']) >9 )  // verifica que el campo cedula no sea mayor a 9 caracteres
			        {  $errorZ .= "<br> - Cedula supera 9 dígitos."; }

			    if(!is_numeric($_POST['recuperar_c']) ) // verifica que sean solo números
			    	{  $errorZ .= "<br> - Cedula a de ser numérica."; }

			    
			    if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
			        {
			           $errorZ = "<p> Se han suscitado los siguientes errores: <br> <b>" . $errorZ. " </b> </p> <br>";            
			        }




			else      // Sequencia de chequeo, Permite encontrar la  cedula...
			          
			          // verifica si la ci ya está registrado en la BD...
			    {
					$queryC = "SELECT * FROM usuarios WHERE ci = '".mysqli_real_escape_string($enlace,$_POST['recuperar_c'])."' LIMIT 1";

					$resultC = mysqli_query($enlace,$queryC);
					$fila=mysqli_fetch_array($resultC);

                 if (isset($fila))   // si tengo algo en la fila significa que existe la ci en la BD
                                     // por tanto podria recuperar los datos necesarios de la bd... con puros  " . $fila['nombres'] . "   o  " . $fila['cargo'] . "
                                     // el problema es que la contraseña fue hasheada y toca re-introducir una nueva...

                 					// para mayor seguridad compruebo que los apellidos introducidos tambien correspondan.

	                 {

	                 	if( $fila['apellidos'] == mysqli_real_escape_string($enlace,$_POST['recuperar_a']) ) 
                      
                      	{
                      		$_SESSION['apellidos_M']=$fila['apellidos'];  // almacena el valor de apellidos en el valor de session
                      		$_SESSION['id_M']=$fila['id'];
                      		$_SESSION['email_M']=$fila['email'];
                      		$_SESSION['cargo_M']=$fila['cargo'];
                      		$_SESSION['nombres_M']=$fila['nombres'];
                      		$_SESSION['cedula_M']=$fila['ci'];

                      		header ("Location: z_recuperar2.php");
                        }

   
                        else {
                        	$errorZ="¡Usuario no Identificado!";  // hace referencia a que si esta el ci pero no el apellido
                        	
                        }



	                 }   // cierre if en caso de que si exista la cedula en la BD

	                

				else { 

					$errorZ="¡Usuario no Identificado!";  // hace referencia a la ci
					
			         }


 				 }  //cierre else secuencia de chequeo 


 } // cierre if principal





?>




<?php include ("Header.php"); ?>


<?php
include("conectar.php");

        $queryzztema = "SELECT * FROM zz_tema LIMIT 1  
          
            ";

$datos_queryzztema = mysqli_query($enlace, $queryzztema) or die(mysqli_error());

$row_datos_queryzztema = mysqli_fetch_array($datos_queryzztema); 

$id_primer_zztema = $row_datos_queryzztema['id_tema'];

$cabecera_zztema = $row_datos_queryzztema['col_cabecera'];

$subtitulo_zztema = $row_datos_queryzztema['col_subtitulo'];

$pie_zztema = $row_datos_queryzztema['col_pie'];

mysqli_close($enlace);

?>

		

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 backh1" style="background:<?php echo $cabecera_zztema;?>;">
 					<h1 class="text-center respH1">Recupere sus datos!!!</h1>
 				</div>
 			</div>
 		





		<div class="row">  
		
		<div class="card card-login mx-auto mt-5">
      	<div class="card-header">Identifíquese:</div>

      	<div class="card-body">

                 		


                <div id="errorZ"> <?php 
									if ($errorZ!="")
			           				 { echo "<div class=\"alert alert-danger\" role=\"alert\" align=\"center\">".$errorZ."</div>"; }
			           		   ?>
				</div>   <!-- SOLO ES VISIBLE SI LA VARIABLE DE ERROR TIENE ALGO-->


				<div id="infoZ"> <?php 
										if ($infoZ!="")
				           				 { echo "<div class=\"alert alert-info\" role=\"alert\" align=\"center\">".$infoZ."</div>"; }
				           		   ?>
				</div>   <!-- SOLO ES VISIBLE SI LA VARIABLE DE INFORMACION TIENE ALGO-->


				<div id="exitoZ"> <?php 
									if ($exitoZ!="")
			           				 { echo "<div class=\"alert alert-success\" role=\"alert\" align=\"center\">".$exitoZ."</div>"; }
			           		   ?>
				</div>   <!-- SOLO ES VISIBLE SI LA VARIABLE DE ÉXITO TIENE ALGO-->


				<form method="POST">  
				
		
					<div class="input-group mb-3">
							<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-file-alt fa-lg"></i></span>  
						    </div>
							<input type="text" class="form-control" id="recuperar_c" name="recuperar_c" placeholder="Introducir cedula" aria-label="recuperar_c" aria-describedby="basic-addon1" required>
					</div>


					<div class="input-group mb-3">
							<div class="input-group-prepend">
									 <span class="input-group-text" id="basic-addon1"><i class="far fa-file-alt fa-lg"></i></span>  
							</div>
							<input type="text" class="form-control" id="recuperar_a" name="recuperar_a" placeholder="Su(s) Apellido(s)" aria-label="recuperar_a" aria-describedby="basic-addon1" required>
					</div>

					<br>

					
					<button type="submit" class="btn btn-info btn-block" name="submit"> <i class="fab fa-searchengin fa-lg"></i> &nbsp Recuperar</button>
							

				</form>

	<br>
									<p class="" align="center"> <b> <a href="index.php">¡Volver a Inicio!</a> </b></p>	


				</div>  <!-- cierre card body-->

				</div> <!-- cierre card round-->	
							


				<br><br>

				

			

			  

			</div>  <!-- cierre dbloc -->


		</div> <!-- cierre row -->



	</div> <!-- cierre container--> 

		

<br><br><br><br><br><br><br>



<?php include ("Footer.php"); ?>