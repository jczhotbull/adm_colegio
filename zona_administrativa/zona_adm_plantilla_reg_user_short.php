<?php

error_reporting(0);

include("identificador.php");

$el_id_del = $_SESSION ['id'];



if ($_SESSION ['cargo'] == 'Administrador' OR $_SESSION ['cargo'] == 'Secretario')

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




if (array_key_exists("submit",$_POST))// chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba

   {

   			include("../conectar.php");        
       

                if (!$_POST['cedula'])  // verifica que no este vacío el campo cedula
			        {  $errorZ .= "- Cedula requerida."; }

			    if (strlen($_POST['cedula']) >9 )  // verifica que el campo cedula no sea mayor a 9 caracteres
			        {  $errorZ .= "- Cedula invalida."; }   // mas de 9.

			    if(!is_numeric($_POST['cedula']) ) // verifica que sean solo números
			    	{  $errorZ .= "- Cedula no valida."; }


					    if (!$_POST['nombres'])      // verifica que no este vacío
					        {   $errorZ .= "- Nombre requerido."; }

						if (strlen($_POST['nombres']) >40 )  // no sea mayor a 40 caracteres
					        {   $errorZ .= "- Nombre invalido."; }

					  	if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['nombres']) ) )  // comprueba que sean letras
		      		        {   $errorZ .= "- Nombre no valido."; }




			    if (!$_POST['apellidos'])      // verifica que no este vacío
			        {   $errorZ .= "- Apellido requerido."; }

			    if (strlen($_POST['apellidos']) >40 )  // no sea mayor a 40 caracteres
			        {   $errorZ .= "- Apellido invalido."; }

			    if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['apellidos']) ) ) // comprueba que sean letras
      		        {   $errorZ .= "- Apellido no valido."; }


       
					    if (!$_POST['email'])      // verifica que no este vacío 
					        {   $errorZ .= "- Email requerido."; }

					    if (strlen($_POST['email']) >40 )  // no sea mayor a 40 caracteres
					        {   $errorZ .= "- Email invalido."; }

					     if (!filter_var( ($_POST['email']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
					     {  $errorZ .= "- Email no valido."; }



			    if (!$_POST['clave'])      // verifica que no este vacío
			        { $errorZ .= "- Contraseña requerida."; }

			    if (strlen($_POST['clave']) >9 )  // verifica que el campo no sea mayor a 9 caracteres
			        {  $errorZ .= "- Contraseña mayor a 9 dígitos."; }

			    if (!preg_match ("/^[A-Za-z0-9]+$/",($_POST['clave']) ) ) // comprueba que solo se puedan escribir letras sencillas y números sin espacios
      		        {   $errorZ .= "- Carácter no valido en la contraseña."; }

								
			    
			    if (!$_POST['rclave'])      // verifica que no este vacío
			        { $errorZ .= "- Re-Escriba la contraseña."; }

			    if (strlen($_POST['rclave']) >9 )  // verifica que el campo no sea mayor a 9 caracteres
			        {  $errorZ .= "- Contraseña Rescrita mayor a 9 dígitos."; }

			    if (!preg_match ("/^[A-Za-z0-9]+$/",($_POST['rclave']) ) ) // comprueba que solo se puedan escribir letras sencillas y números sin espacios
      		        {   $errorZ .= "- Carácter no valido en la contraseña."; }


						    if ($_POST['clave'] != $_POST['rclave'] )  // compara ambas claves
						    	{  $errorZ .= "- Las contraseñas no coinciden."; }
			  



			     if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
			        {
			           $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";            
			        }





	else      // Sequencia de chequeo, verifica si el email ya está registrado en la BD...
		{
	     $queryE = "SELECT ci FROM usuarios WHERE email ='".mysqli_real_escape_string($enlace,$_POST['email'])."' LIMIT 1";

			            $resultE = mysqli_query($enlace,$queryE);

		if (mysqli_num_rows($resultE)>0)
			{
			 $errorZ="- Email anteriormente registrado.";
			}

	
		else {      //  verifica si la ci ya está registrado en la BD...

		$queryC = "SELECT ci FROM usuarios WHERE ci ='".mysqli_real_escape_string($enlace,$_POST['cedula'])."' LIMIT 1";

			            $resultC = mysqli_query($enlace,$queryC);

		if (mysqli_num_rows($resultC)>0)
			{
			 $errorZ="- Cedula anteriormente registrada.";
            }
		    

            if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
			        {
			           $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";            
			        }


	     else     
			 {

			 	// para saber si hay internet o no... y guardar que no se enviaron los datos...

                    $conexion = @fsockopen("www.google.com", 80, $errno, $errstr, 30); 
					if (!$conexion) { 
					$enviado="No";
					$sms="- Sin internet no";
					} else { 
					$enviado="Si";
					$sms="En breve"; 
					
					} 
					fclose($conexion); 

			// ingresa los datos si el email y la ci no están en la BD
             
            $cargo = $_POST["cargo"];
            $grado = $_POST["el_grado"];


			$query = "INSERT INTO usuarios(ci, nombres, apellidos, email, clave, cargo, enviado, id_grado)
			          VALUES ('".mysqli_real_escape_string($enlace,$_POST['cedula'])."'     ,
			                  '".mysqli_real_escape_string($enlace,$_POST['nombres'])."'    ,
			                  '".mysqli_real_escape_string($enlace,$_POST['apellidos'])."'  ,
			                  '".mysqli_real_escape_string($enlace,$_POST['email'])."'      ,
			                  '".mysqli_real_escape_string($enlace,$_POST['clave'])."'      ,
			                   '$cargo', '$enviado', '$grado'   )";

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
			    	

			    // Actualizar el almacenamiento del password



			    $pass= mysqli_real_escape_string($enlace,$_POST['clave']);  // almaceno el valor de clave limpio

	            $passwordHasheada= md5(md5(mysqli_insert_id ($enlace)).$pass);

	            $query = " UPDATE usuarios SET clave = '$passwordHasheada' WHERE id = ".mysqli_insert_id($enlace). " LIMIT 1 ";

                                    // he indicado que me haga un hash de un un hash del id concatenado con la clave insertada...       
	              mysqli_query ($enlace, $query);  // Ejecuta el query...



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


$el_asss = 'Registrado en el Sistema Administrativo';          
		

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
		$mail->AddAddress(''.$_POST['email'].'', ''.$_POST['nombres'].'');	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML
		$mail->Subject = "$el_asss"; //Sets the Subject of the message
		//An HTML or plain text message body
		$mail->Body = '
		<p>Sr.(a): <b>'.$_POST['apellidos'].'</b>. </p>

		Usted ha sido registrado en Sistema Administrativo iMagic.<br><br>

	    Nombre(s): '.$_POST['nombres'].'.<br>

	    Apellidos: '.$_POST['apellidos'].'.<br>

	    Usuario (Cedula): '.$_POST['cedula'].'.<br>

	    Clave de Acceso: '.$_POST['clave'].'.<br><br>
	          
	    Su Roll en la plataforma es el de: '.$cargo.'.<br><br>

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





                

			         // Etapa final del registro




			

		

			} // cierre etapa de ingreso de datos   



		}  // cierre comprobación cedula



    }  // cierre comprobación email

mysqli_close($enlace);

}  // cierre if principal




if(isset($_POST['editar_user']))
{


		if ($_POST['mod_pass'])       // si tiene algo entra aqui
					        { 

					    if (strlen($_POST['mod_pass']) >9 )  // verifica que el campo no sea mayor a 9 caracteres
					        {  $errorZ .= "<br> - Contraseña mayor a 9 dígitos."; }

					    if (!preg_match ("/^[A-Za-z0-9]+$/",($_POST['mod_pass']) ) ) // comprueba que solo se puedan escribir letras sencillas y números sin espacios
		      		        {   $errorZ .= "<br> - Carácter no valido en la contraseña."; }

		      		     }





	if (!$_POST['mod_cedula'])  /* que no este vacío */     {  $errorZ .= "- Cedula requerida."; }
	if (strlen($_POST['mod_cedula']) >9 )  /* no mayor a 9 caracteres */  {  $errorZ .= "- Cedula invalida."; }
    if(!is_numeric($_POST['mod_cedula']) ) /* solo números */   {  $errorZ .= "- Cedula no valida."; }

	if (!$_POST['mod_nombres'])  /* que no este vacío */   {   $errorZ .= "- Nombre requerido."; }
	if (strlen($_POST['mod_nombres']) >40 )  /* no mayor a 40 caracteres */   {   $errorZ .= "- Nombre invalido."; }
    if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['mod_nombres']) ) )  /* sean letras  */   {   $errorZ .= "- Nombre no valido."; }

    if (!$_POST['mod_apellidos']) /* que no este vacío */    {   $errorZ .= "- Apellido requerido."; }   
    if (strlen($_POST['mod_apellidos']) >40 )  /* no mayor a 40 caracteres  */    {   $errorZ .= "- Apellido invalido."; }
    if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['mod_apellidos']) ) ) /*  sean letras */  {   $errorZ .= "- Apellido no valido."; }
       
    if (!$_POST['mod_email']) /* no este vacío */ {   $errorZ .= "- Email requerido."; }
    if (strlen($_POST['mod_email']) >40 )  /* no mayor a 40 caracteres  */  {   $errorZ .= "- Email invalido."; }
    if (!filter_var( ($_POST['mod_email']), FILTER_VALIDATE_EMAIL)) /* formato correcto de email */    {  $errorZ .= "- Email no valido."; }

    if ($errorZ!="")   //  si $errorZ es distinto de vacío,  es que ha habido algun error
    {
        $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";            
    }

    else      // tras haber confirmado el correcto relleno de los campos compruebo el email y la cedula
    {
       include("../conectar.php");

        $query = "SELECT * FROM usuarios WHERE id = $_POST[editar_user]";

		$id_selecc = mysqli_query($enlace, $query) or die(mysqli_error());

		$row_id_selecc = mysqli_fetch_assoc($id_selecc);

		$totalRows_id_selecc = mysqli_num_rows($id_selecc);

        $id_emailU = ($row_id_selecc['email']);           /* hasta aqui me consigue lo que yo quiera del usuario que estoy editando */

		$id_ciU = ($row_id_selecc['ci']); 

		$id_idU = ($row_id_selecc['id']);

		/* $errorZ .= "- " . $idzz. "";             /* imprime lo que se consiguio  */

		  
	   
	   $queryE = "SELECT * FROM usuarios WHERE email ='".mysqli_real_escape_string($enlace,$_POST['mod_email'])."' LIMIT 1";

       $resultE = mysqli_query($enlace,$queryE);  // si hay coincidencia almacena el numero total de coincidencias de email

       $filaE=mysqli_fetch_array($resultE);

	   /* $fil = ($filaE['id']); */  // esto es para mostrar el id en donde esta el email

	       if ($filaE['id'] != $id_idU AND mysqli_num_rows($resultE)>0) // si existe coincidencia y ademas el id de la coincidencia no es el que
	                                                                    // intento modificar... 

									{
										 $errorZ="- Email registrado por otro usuario.";
									}
	                 

	                 				if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
						              {
						                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
						                 mysqli_close($enlace);             
					
						              }
	 
			else   // si hay coincidencia es la del usuario que intento modificar: o NO hay coincidencia de email
			{

				$queryX = "SELECT * FROM usuarios WHERE ci ='".mysqli_real_escape_string($enlace,$_POST['mod_cedula'])."' LIMIT 1";

		    	$resultX = mysqli_query($enlace,$queryX);   // si hay coincidencia almacena el numero total de coincidencias de cedula

		    	$filaX=mysqli_fetch_array($resultX);

		    	/* $fill = ($filaX['id']); */   // esto es para mostrar el id en donde esta la cedula


		    		if ($filaX['id'] != $id_idU AND mysqli_num_rows($resultX)>0) // si existe coincidencia y ademas el id de la coincidencia no es el que
	                                                                            // intento modificar... 

									{
										 $errorZ="- Cedula registrada por otro usuario.";
									}
	                 

	                 				if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
						              {
						                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
						                 mysqli_close($enlace);             
					
						              }

				   else  // entro aqui si no hay coincidencia ni de correo ni de cedula, o si la hay es del mismo id que intento modificar
				   {



				   	$sql = "UPDATE usuarios SET nombres = '".mysqli_real_escape_string($enlace,$_POST['mod_nombres'])."',
				                              apellidos = '".mysqli_real_escape_string($enlace,$_POST['mod_apellidos'])."',
				                                     ci = '".mysqli_real_escape_string($enlace,$_POST['mod_cedula'])."',
				                                  email = '".mysqli_real_escape_string($enlace,$_POST['mod_email'])."'

				                                
				                                WHERE id='$_POST[editar_user]' LIMIT 1 ";

                       
					        if (!mysqli_query($enlace,$sql))      // actualiza y si no ha logrado ingresar los datos
					               {
					                $errorZ="- Error al registrar, contactar al Ing. ";
					                mysqli_close($enlace);
					              
					                }

					         else{

					                $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Usuario actualizado. </b>"; 
					                mysqli_close($enlace);   

					            }

				   }



				   if ($_POST['mod_pass'] !="") {

				   	include("../conectar.php");


				   	$pass= mysqli_real_escape_string($enlace,$_POST['mod_pass']);  // almaceno el valor de clave limpio

	                $passwordHasheada=md5( md5 ($_SESSION['id']) . $pass ) ;

	                $queryalt = " UPDATE usuarios SET clave = '$passwordHasheada' WHERE id = '$_POST[editar_user]' LIMIT 1 "; 
					$resultalt = mysqli_query($enlace,$queryalt);

		

					 mysqli_close($enlace); 
				   
				   }


			}



     } // cierre else en donde compruebo que no repita email y ci            

} // cierre if en caso de error y no actualizar     




 if(isset($_POST['borrar_user']))
    {

           // $borrar_id = $_POST['borrar_selecc'];
           // $errorZ = " <p> <b>" . $borrar_id . " </b> </p>"; // me ayudan a saber si se esta agarrando el id correcto...

      include("../conectar.php");   


                      $queryU = "SELECT * FROM usuarios WHERE id = '$_POST[borrar_user]' LIMIT 1";

                      $resultU = mysqli_query($enlace,$queryU);
                      $fila=mysqli_fetch_array($resultU);         // lo anterior me permite tener el nombre del registro...



                      if($fila['id']==$_SESSION ['id'])        // evita que borre el usuario en uso.

		            {

		                $errorZ = "No se puede eliminar al usuario actual del sistema.";
		                
		            }



		            if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-ban fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }


		     else {


                      $queryW = "DELETE FROM usuarios WHERE id = '$_POST[borrar_user]' LIMIT 1";

                      if (!mysqli_query($enlace,$queryW))      // si no ha logrado ingresar los datos
                         {
                          $errorZ="-Error- El usuario, posee varios registros asociados.  ";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



                      else {  

                         $exitoZ = "<b>--&nbsp; " . $fila['nombres'] . " ". $fila['apellidos'] . "  &nbsp;--</b> ha sido eliminado.";

                      }
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";            
                          }

					
                         
                      mysqli_close($enlace);  


                   }                    
					

    } 






    if(isset($_POST['enviar']))// chequea si se ha enviado algo de un boton submit de nombre enviar, de ser si -->

   {


 include("../conectar.php");

			$sql = "UPDATE usuarios SET enviado = '$_POST[se_envia]' WHERE id='$_POST[usuario_id]' LIMIT 1 ";
			$result = mysqli_query ($enlace, $sql);    // cambia a que si se envio...


			                                           // procede a enviar
			$queryC = "SELECT * FROM usuarios WHERE id = '$_POST[usuario_id]' LIMIT 1";

			          $resultC = mysqli_query($enlace,$queryC);
			          $fila=mysqli_fetch_array($resultC); 



		$conexion = @fsockopen("www.google.com", 80, $errno, $errstr, 30); 
			          if (!$conexion) { 
          

$errorZ = "<b>Sin internet</b>&nbsp; datos no enviados, a: &nbsp;  <b>" . $fila['nombres'] . "&nbsp;" . $fila['apellidos']."</b>. "; 



          
                
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


$el_asss = 'Re-Envio de Datos Sistema Administrativo';       





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
		$mail->AddAddress(''.$fila['email'].'', ''.$fila['nombres'].'');	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML
		$mail->Subject = "$el_asss"; //Sets the Subject of the message
		//An HTML or plain text message body
		$mail->Body = '
		<p>Sr.(a): <b>'.$fila['apellidos'].'</b>. </p>

		Usted ha solicitado le sean Re-Enviado los datos del Sistema Administrativo iMagic.<br><br>


	    Usuario (Cedula): '.$fila['ci'] .'.<br>

	    Clave de Acceso: En caso de no Recordarla debe re-establecerla!!!.<br><br>
	          
	    Su Roll en la plataforma es el de: '.$fila['cargo'].'.<br><br>

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


			

$exitoZ = " Datos Re-Enviados al usuario: &nbsp;  <b>" . $fila['nombres'] . "&nbsp;" . $fila['apellidos']." </b>."; 

			

		} /* cierre if */





?>


<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/lista_usuarios_unico.php"); ?>  <!-- hace la lista -->


        
<div class="content-wrapper">
<div class="container-fluid">


<div class="card-body">

      		<div class="form-row">


		      		<div class="col-md-3 col-lg-3 mb-1">

						<div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
						<i class="fa fa-user-secret fa-lg"></i>&nbsp;&nbsp; <b> Mi usuario: </b></div> 

					</div> 


					<div class="col-md-9 col-lg-9 mb-1">
					

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

      		</div> 	</div>
    
    



			
            





<div class="card mb-3 separacionpequena" >
       

		<div class="card-header">
        <b><i class="fa fa-table"></i> Vista General:</b></div>


        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered stricolor table-sm" id="dataTable" width="100%" cellspacing="0">
             
              <thead>
                <tr>                  
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th class="text-center" >ci ó usuario</th>
                  <th>Cargo</th>
                  <th>Área</th>
                  <th>Email</th>
                  
                  <th class="text-center">Editar y/o Modificar</th>
                 
                </tr>
              </thead>
                          
              
              <tbody>

            <?php do{?>  <!-- va a generarme tantas filas como datos tenga esta BD -->            

                <tr>
                  <td><?php echo $row_usuarios['nombres']; ?> </td>
                  <td><?php echo $row_usuarios['apellidos']; ?> </td>
                  <td align="center"><?php echo $row_usuarios['ci']; ?></td>
                  <td><?php echo $row_usuarios['cargo']; ?></td>
                  <td><?php echo $row_usuarios['nombre_grados']; ?></td>
                  <td><?php echo $row_usuarios['email']; ?></td>


            


            <td align="center">

  				  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal"
                  data-target="#modificar<?php echo $row_usuarios['id']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->
                  <i class="fas fa-edit"></i></button>    
                    
            </td>



<!-- ini modal editar -->

<div class="modal fade" id="modificar<?php echo $row_usuarios['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">   <!-- modal-lg -->
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Actualizar o modificar datos de usuario.</h5>

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
        <span class="input-group-text alert-info" id="basic-addon1">&nbsp;<i class="fas fa-file-alt fa-lg"></i></span>
    </div>  
        <input type="text" class="form-control" id="dato_selecc" name="mod_nombres" value="<?php echo $row_usuarios['nombres']; ?>">
</div>



<div class="input-group col-lg-6">
    <div class="input-group-prepend">
      <span class="input-group-text alert-info" id="basic-addon1">&nbsp;<i class="far fa-file-alt fa-lg"></i></span>
    </div>
        <input type="text" class="form-control" id="dato_selecc" name="mod_apellidos" value="<?php echo $row_usuarios['apellidos']; ?>">
</div>
       
        </div>
        </div>



        <div class="form-row mb-3">
        <div class="input-group col-lg-12">


<div class="input-group col-lg-6">
 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="far fa-id-card fa-lg"></i></span> 
 </div>
     <input type="text" class="form-control" id="dato_selecc" name="mod_cedula" value="<?php echo $row_usuarios['ci']; ?>">
 </div>



<div class="input-group col-lg-6">
 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-at fa-lg"></i></span>  
 </div>
     <input type="email" class="form-control" id="dato_selecc" name="mod_email" value="<?php echo $row_usuarios['email']; ?>">
</div>


       
        </div>
        </div>



        <div class="form-row">
        <div class="input-group col-lg-12">










<div class="input-group col-lg-12 mt-3" <?php  if ($row_usuarios['id'] != $_SESSION ['id'] ){?>style="display:none"<?php } ?>>

 <div class="input-group-prepend">
     <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-key fa-lg"></i>&nbsp;&nbsp;Actualizar contraseña de ingreso:</span>  
 </div>
 <input type="password" class="form-control" id="dato_selecc" name="mod_pass">

</div>


       
        </div>
        </div>


      </div> <!-- modal body -->
             

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_user" class="btn btn-info" value="<?php echo $row_usuarios['id']; ?>">
              Modificar</button>  

      </div>

      </form>
      


    </div>
  </div>
</div>


<!-- cierre modal de editar -->











           


<!-- ini modal eliminar -->

<div class="modal fade" id="borrar<?php echo $row_usuarios['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
        El usuario: <b>&nbsp;"&nbsp; <?php echo $row_usuarios['nombres'];?> 
                                     <?php echo $row_usuarios['apellidos'];?> 
                             "&nbsp;</b> sera removido de la base de datos. 
      </div>
      <div class="modal-footer">

  <form method="post">

    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrar_user" class="btn btn-danger" value="<?php echo $row_usuarios['id']; ?>" >
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


       




 

  </div> <!-- cierre card -->












</div> <!-- cierre container fluid -->    
</div> <!-- cierre content wrapper -->


 <?php include ("Footer.php"); ?>