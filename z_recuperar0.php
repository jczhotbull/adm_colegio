<?php


session_start();

error_reporting(0);

header("Content-type: text/html;charset=\"utf-8\"");                  // Necesario para caracteres latinos

	$errorZ="";  // acumula los mensajes de error
	$infoZ="";  // acumula los mensajes de información
	$exitoZ="";  // acumula los mensajes de éxito



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
					$queryC = "SELECT * FROM reg_representante WHERE ci_repre = '".mysqli_real_escape_string($enlace,$_POST['recuperar_c'])."' LIMIT 1";

					$resultC = mysqli_query($enlace,$queryC);
					$fila=mysqli_fetch_array($resultC);

                 if (isset($fila))   // si tengo algo en la fila significa que existe la ci en la BD
                                     // por tanto podria recuperar los datos necesarios de la bd... con puros  " . $fila['nombres'] . "   o  " . $fila['cargo'] . "
                                     

                 					// para mayor seguridad compruebo que el email introducido tambien correspondan.

	                 {


	                 	 $acceso = "0";	 


	                 	if( $fila['email_repre'] == mysqli_real_escape_string($enlace,$_POST['recuperar_e']) &&  $acceso==$fila['acceso']  ) 
                      
                      	{   // si hay coincidencia de email....                     		
                      		// procedo a enviar por email....


							$c = @fsockopen("www.google.com", 80, $errno, $errstr, 30); 
								          if (!$c) { 
					          
					          					$errorZ = "<b>Sin Internet </b> &nbsp;  Datos No Enviados, al representante con documento N°: &nbsp;  <b>" . $fila['ci_repre'] . "</b>. "; 
					                
					                                }


          

										           else { 								                 
										           


   $querymodEMAEL = "SELECT * FROM z_email where id_email = 1 ";

    $datos_modEMAEL = mysqli_query($enlace, $querymodEMAEL) or die(mysqli_error());
              
     $row_datos_modEMAEL = mysqli_fetch_array($datos_modEMAEL);
                         
             

$el_correo = $row_datos_modEMAEL['email_sis'];
$el_pass = $row_datos_modEMAEL['pass_sis'];


$coreo_resp = $row_datos_modEMAEL['resp_sis'];


$el_host = $row_datos_modEMAEL['host_sis'];
$el_port = $row_datos_modEMAEL['port_sis'];


$secure_resp = $row_datos_modEMAEL['secure_sis'];



 require '00_email_class/class.phpmailer.php';
$output = '';


$el_asss = 'Recuperar clave de acceso';          
		

		$mail = new PHPMailer;
		$mail->IsSMTP();								             //Sets Mailer to send message using SMTP
		$mail->Host = ''.$row_datos_modEMAEL['host_sis'].'';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = ''.$row_datos_modEMAEL['port_sis'].'';       //Sets the default SMTP server port
		$mail->SMTPAuth = true;							           //Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = ''.$row_datos_modEMAEL['email_sis'].'';					//Sets SMTP username
		$mail->Password = ''.$row_datos_modEMAEL['pass_sis'].'';					//Sets SMTP password
		$mail->SMTPSecure = ''.$row_datos_modEMAEL['secure_sis'].'';					//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = ''.$row_datos_modEMAEL['resp_sis'].'';			//Sets the From email address for the message
		$mail->FromName = 'Sistema iMagic WEB Colegio';					//Sets the From name of the message
		$mail->AddAddress(''.$fila['email_repre'].'', ''.$fila['nombre_repre'].'');	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML
		$mail->Subject = "$el_asss"; //Sets the Subject of the message
		//An HTML or plain text message body
		$mail->Body = '
		<p>Sr.(a): <b>'.$fila['apellido_repre'].'</b>. </p>

		Usted ha solicitado recuperar su contraseña del Sistema iMagic.<br><br>

	    Usuario (Doc de Id): '.$fila['ci_repre'].'.<br>

	    Su Nueva Clave de Acceso: '.$fila['clave_repre'].'.<br><br>
	          
	

	    Favor Resguardar estos datos!!!<br><br>


		Nota: Es de vital importancia que añada nuestros email(s) a su lista de contactos,<br>
		Email del sistema: '.$el_correo.'; no responder a este correo, es solo para funciones del sistema.<br><br>

		Email del colegio: '.$coreo_resp.'; email de comunicación colegio-representantes-profesores, <br>
		con ello siempre recibirá sin dificultad nuestros mensajes. <br><br>

		
		';

		$mail->AltBody = '';




		$result = $mail->Send();						//Send an Email. Return true on success or false on error

		if($result["code"] == '400')
		{
			$output .= html_entity_decode($result['full_error']);
		}

	}
	if($output == '')
	{
		echo '';
	}
	else
	{
		echo $output;
	}









								                      		 $exitoZ="<b>En breve recibirá un correo</b>, de ser necesario compruebe la carpeta SPAM. <br>
								                      		   <b><a href=\"index2.php\">Volver</a></b>";

								                       

								                         fclose($c); 
													 mysqli_close($enlace); 

					  }




   
                      else {
                        	$errorZ="¡Email no suministrado y/o usuario no identificado!";  // hace referencia a que si esta el ci pero no el correo.
                        	
                        } 



	                 }   // cierre if en caso de que si exista la cedula en la BD

	                

				else { 

					$errorZ="¡Usuario no identificado ó email no suministrado!";  // hace referencia a la ci
					
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
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 backh4" style="background:<?php echo $subtitulo_zztema;?>;">
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
				
		
					<div <?php if ( $exitoZ!=""){?>style="display:none"<?php } ?> class="input-group mb-3">
							<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-file-alt fa-lg"></i></span>  
						    </div>
							<input type="text" class="form-control" id="recuperar_c" name="recuperar_c" placeholder="Introducir cedula" aria-label="recuperar_c" aria-describedby="basic-addon1" required>
					</div>


					<div  <?php if ( $exitoZ!=""){?>style="display:none"<?php } ?>class="input-group mb-3">
							<div class="input-group-prepend">
									 <span class="input-group-text" id="basic-addon1"><i class="fas fa-at fa-lg"></i></span>  
							</div>
							<input type="email" class="form-control" id="recuperar_e" name="recuperar_e" placeholder="Email" aria-label="recuperar_a" aria-describedby="basic-addon1" required>
					</div>

					<br>

					
					<button <?php if ( $exitoZ!=""){?>style="display:none"<?php } ?> type="submit" class="btn btn-info btn-block" name="submit" id='btnReset'> <i class="fab fa-searchengin fa-lg"></i> &nbsp Recuperar</button>
							

				</form>



							<div class="form-row ">  <!-- mensaje q aprece -->

						  		<div class="content col-md-12 text-center mt-1" style="display:none">

						  		<b class="text-danger"> <i class="far fa-clock fa-lg"></i>&nbsp;&nbsp;Procesando favor esperar!!! </b>

							    </div>

						  	</div>



<script src="0 zqueryajax/jquery.min.js"></script>



			<!-- coloca un mensajito al clickear send y desaparece al rato -->				

			<script>

			$(document).ready(function() {
			    setTimeout(function() {
			        $(".content").hide();
			    }, 0);                         // este numero dice que tan rapido lo esconde

			    $('#btnReset').click(function() {
			        $(".content").show();
			        
			        setTimeout(function() {
			            $(".content").fadeOut(1500);
			        }, 3500);
			        

			    });
			});
			</script>


			<!--  no pasa nada si se cliquea el boton de registrar hasta que termine -->	


 			<script type="text/javascript">
            $(document).ready(function(){
                 $("form").submit(function() {
                        $(this).submit(function() {
                            return false;
                        });
                        return true;
                    }); 
            }); 
            </script>



	<br>
									<p class="" align="center"> <b> <a href="index2.php">¡Volver a Inicio!</a> </b></p>	



				</div>  <!-- cierre card body-->

				</div> <!-- cierre card round-->	
							


				<br><br>

				

			

			  

			</div>  <!-- cierre dbloc -->


		</div> <!-- cierre row -->



	</div> <!-- cierre container--> 

		

<br><br><br><br><br><br><br>



<?php include ("Footer2.php"); ?>