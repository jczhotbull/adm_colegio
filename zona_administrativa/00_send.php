<?php
//send_mail.php


if(isset($_POST['email_data']))
{


	



	require '00_email_class/class.phpmailer.php';
	$output = '';
	foreach($_POST['email_data'] as $row)
	{



$el_id = $row["contenido"];

include("../conectar.php");

      $conteee = "SELECT contenido, file_a FROM usuarios WHERE id = '$el_id' limit 1 ";        

          $resultCPP = mysqli_query($enlace,$conteee);
          $nnnCPP=mysqli_fetch_array($resultCPP);                /* antes en select tenia nombres */ 

          $relleno = $nnnCPP["contenido"];
          $file_a = $nnnCPP["file_a"];

          $filenameZZ = "zzz_files/".$file_a."";
          $nombre_file = "".$file_a."";

mysqli_close($enlace); 



include("../conectar.php");

              $querymodEMAEL = "SELECT * FROM z_email where id_email = 1 ";

              $datos_modEMAEL = mysqli_query($enlace, $querymodEMAEL) or die(mysqli_error());
              
              $row_datos_modEMAEL = mysqli_fetch_array($datos_modEMAEL);
                         
            

$el_correo = $row_datos_modEMAEL['email_sis'];
$el_pass = $row_datos_modEMAEL['pass_sis'];


$coreo_resp = $row_datos_modEMAEL['resp_sis'];


$el_host = $row_datos_modEMAEL['host_sis'];
$el_port = $row_datos_modEMAEL['port_sis'];


$secure_resp = $row_datos_modEMAEL['secure_sis'];



   mysqli_close($enlace); 





$el_asss = $row["asunto"];
		

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
		$mail->AddAddress($row["email"], $row["name"]);	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML
		$mail->Subject = "$el_asss"; //Sets the Subject of the message
		//An HTML or plain text message body
		$mail->Body = '
		<p>Sr.(a): <b>'.$row["apellido"].'</b>. </p>
		'.$relleno.' <br><br> <b>Att.:  '.$row["firma"].'. </b> <br><br><br>


		Nota: Es de vital importancia que añada nuestros email(s) a su lista de contactos,<br>
		Email del sistema: '.$el_correo.'; no responder a este correo, es solo para funciones del sistema.<br><br>

		Email del colegio: '.$coreo_resp.'; email de comunicación colegio-representantes-profesores, <br>
		con ello siempre recibirá sin dificultad nuestros mensajes. <br><br>

		
		';

		$mail->AltBody = '';
		$mail->AddAttachment($filenameZZ, $nombre_file);



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








}

?>
