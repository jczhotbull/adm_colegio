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

$exitoZZ="";
$errorZZ="";

$new_new_alertica = "0";

header('Cache-Control: max-age=900');

include("../conectar.php");

// lo que sigue es para obtener la pagina web que sera enviada

$queryplantelH = "SELECT * FROM z_plantel LIMIT 1";

$datos_queryplantelH = mysqli_query($enlace, $queryplantelH) or die(mysqli_error());

$row_datos_queryplantelH = mysqli_fetch_array($datos_queryplantelH); 

$id_primer_plantelH = $row_datos_queryplantelH['id_plantel'];

$www_primer_plantelH = $row_datos_queryplantelH['www'];

mysqli_close($enlace);



$d1= "0";
$d2= "0";
$d3= "0";

$doc_1 = "";
$doc_2 = "";
$doc_3 = "";

 $result1 = "";
 $result2 = "";
 $result3 = "";

$enlace_1 = "";
$enlace_2 = "";
$enlace_3 = "";
$enlace_4 = "";
$enlace_5 = "";




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


						$cursa_est12 = $_POST["cursa_est12"];

						/* $hoy_es_el_year = date('Y', time());  */

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

						            $periodo_detector_repreW = $fila_query["en_el_periodo"];

						         /*    $pre_ins_si_o_no_repreW = $fila_query["autorizado_el"];   para saber si ya habia solicitado pre inscribir y completo en un mismo periodo */
                                 /*    $yeartt = (int) $pre_ins_si_o_no_repreW;  me obtiene el año */



						            $el_inscribe_nuev_hasta_repreW = $fila_query["inscribe_nuevamente_hasta"];
						            $pre_ins_nuev_si_o_no_repreW = $fila_query["pre_ins_nuev_si_o_no"];

						            $chequeo_habilitacion = $fila_query["acceso"];





					if (mysqli_num_rows($resultC)==0)
						{
						 $errorZ.="- El N°. de Doc. de identidad ingresado, no se encuentra registrado.";        
			            } 



			        if (mysqli_num_rows($resultC)==1)
						{
						 

$query_wer = "SELECT * FROM reg_estu_repre_all, reg_estu_actual, reg_estudiantes, temporada_escolar
          WHERE   reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and  reg_estu_repre_all.id_repre = '$el_id_del_repreW'
         and  temporada_escolar.id_periodo_es = reg_estu_actual.cursa_actualmente
         and  reg_estu_actual.el_activo = '1'
         and  reg_estu_actual.cursa_actualmente != '$cursa_est12' /* chequea si el periodo es similar al cual se esta seleccionando */
         and  reg_estu_actual.id_seccion != '8'
         and retirado_si_o_no = '0'
         ORDER BY apellidos_estu ASC";
$datos_estudiantes_wer = mysqli_query($enlace, $query_wer) or die(mysqli_error());
$row_datos_estudiantes_wer = mysqli_fetch_array($datos_estudiantes_wer); 

$totalRows_datos_estudiantes_wer = mysqli_num_rows($datos_estudiantes_wer); 
			            } 


			              if ($totalRows_datos_estudiantes_wer == 0)
						{
						 $errorZ.="- ¡El representante no posee estudiantes a pre-inscribir en el ciclo seleccionado!"; 
			            } 




			            if ( $chequeo_habilitacion == '1' && mysqli_num_rows($resultC)!=0)
						{
						 $errorZ.="- El representante&nbsp;<b>DEBE CONTACTAR CON ADMINISTRACIÓN COD*LIM*</b>.";        
			            } 


			            if ( ( $el_inscribe_hasta_repreW != '11'  OR  $pre_ins_si_o_no_repreW == '2' ) && mysqli_num_rows($resultC)!=0)
						{
						 $errorZ.="- El representante&nbsp;<b>no ha completado una pre-inscripción</b>&nbsp;de&nbsp;<b>NUEVO INGRESO</b>,&nbsp;anterior.";        
			            } 



			            if (  ( $el_inscribe_nuev_hasta_repreW != '11'  OR  $pre_ins_nuev_si_o_no_repreW == '2' ) && mysqli_num_rows($resultC)!=0 )
						{
						 $errorZ.="- El representante&nbsp;<b>no ha completado una pre-inscripción</b>&nbsp;de alumno regular, anterior.";        
			            } 


			           if ( ($periodo_detector_repreW == $cursa_est12) and $totalRows_datos_estudiantes_wer != 0 )
						{

$new_new_alertica = "1";

$errorZ.="- ¡El Rep. ya inicio o completo un proceso este ciclo, pero posee &nbsp;<b>".$totalRows_datos_estudiantes_wer."</b>&nbsp; posible(s) estudiante(s) a pre-inscribir!"; 
			            }   // si esta sentencia se da, debe aparecer un boton que permita pre-inscribir
			                // a los faltantes...
					    

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



							$query_conteo = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_estudiantes 
							         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud 
							         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
							         and reg_estu_repre_all.id_repre = '$el_id_del_repreW'
							         and  el_activo = '1'         
							         and retirado_si_o_no = '0'        
							         GROUP BY reg_estudiantes.id_estud";

							$datos_conteo = mysqli_query($enlace, $query_conteo) or die(mysqli_error());
							$total_conteo = mysqli_num_rows($datos_conteo);


							$la_cuentita = $_POST["inscribe_a2"];

							if ($la_cuentita>=$total_conteo) {
								$inscribe_a2 = $total_conteo;
							}

							else {

								$inscribe_a2 = $la_cuentita;
							}
								
									




						 			$sql = "UPDATE reg_representante SET 
										                                      inscribe_nuevamente_hasta = '$inscribe_a2',
										                                      en_el_periodo =  ' $cursa_est12',
										                                      pre_ins_nuev_si_o_no = '2',
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
                         
         

$el_correo = $row_datos_modEMAEL['email_sis'];
$el_pass = $row_datos_modEMAEL['pass_sis'];


$coreo_resp = $row_datos_modEMAEL['resp_sis'];


$el_host = $row_datos_modEMAEL['host_sis'];
$el_port = $row_datos_modEMAEL['port_sis'];


$secure_resp = $row_datos_modEMAEL['secure_sis'];




require '00_email_class/class.phpmailer.php';
	$output = '';


$el_asss = 'Ha sido habilitado para Pre-inscribir.';   





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
		<p>Sr.(a).: </p>

		Usted ha sido habilitado en el sistema administrativo.<br><br><br>


       Puede pre-inscribir a (N°): '.$inscribe_a2.'.  representado(s).<br><br>
										 
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
													  








								                mysqli_close($enlace);   

								            }

					  }  //  si esta registrado por tanto he re-autorizado


				} //  cierre  tras pasar el chequeo inicial


}  // cierre re autorizacion








 if(isset($_POST['solicitar_todos']))
        { 

include("../conectar.php");


$sql = "UPDATE reg_representante SET actualizo_si_o_no = 0 ";


                                  if (!mysqli_query($enlace,$sql))      // actualiza y si no logra ingresar los datos...
               {
                $errorZZ=" Error llamar al Ing.  ";
               }


               if ($errorZZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZZ = "En Proceso."; 
                }     

                if ($exitoZZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZZ. " "; 
                              mysqli_close($enlace);            
                          }

  }







 if(isset($_POST['solicitar_email']))
        { 

include("../conectar.php");


$sql = "UPDATE reg_representante SET correo_valido = 0 ";


                                  if (!mysqli_query($enlace,$sql))      // actualiza y si no logra ingresar los datos...
               {
                $errorZZ=" Error llamar al Ing.  ";
               }


               if ($errorZZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZZ = "Procesada la confirmación."; 
                }     

                if ($exitoZZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZZ. " "; 
                              mysqli_close($enlace);            
                          }

  }




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
				

				   	$el_ide_esss = $filaX['id_repre'];

				   	$query_conteo = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_estudiantes 
							         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud 
							         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
							         and reg_estu_repre_all.id_repre = '$el_ide_esss'
							         and  el_activo = '1'         
							         and retirado_si_o_no = '0'        
							         GROUP BY reg_estudiantes.id_estud";

							$datos_conteo = mysqli_query($enlace, $query_conteo) or die(mysqli_error());
							$total_conteo = mysqli_num_rows($datos_conteo);



							$la_cuentitaaa = $_POST["mod_inscribe_a"];

							if ($la_cuentitaaa>=$total_conteo) {
								$mod_inscribe_a = $total_conteo;
							}

							else {

								$mod_inscribe_a = $la_cuentitaaa;
							}


				   	 $mod_cursa_est1 = $_POST["mod_cursa_est1"];


				   	$sql = "UPDATE reg_representante SET ci_repre = '".mysqli_real_escape_string($enlace,$_POST['mod_cedula'])."',

				   									nombre_repre = '".mysqli_real_escape_string($enlace,$_POST['mod_nombre'])."',				                             		   
				                                      email_repre = '".mysqli_real_escape_string($enlace,$_POST['mod_email'])."',
				                                      celular_repre = '".mysqli_real_escape_string($enlace,$_POST['mod_telefono1'])."',
				                                      inscribe_nuevamente_hasta = '$mod_inscribe_a',
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









 if(isset($_POST['anular_user']))
    {

           // $borrar_id = $_POST['borrar_selecc'];
           // $errorZ = " <p> <b>" . $borrar_id . " </b> </p>"; // me ayudan a saber si se esta agarrando el id correcto...

      include("../conectar.php");   


 			$sql_anu = "UPDATE reg_representante SET inscribe_nuevamente_hasta = '11',
 			                                         pre_ins_nuev_si_o_no = '1'			   									 
				                                
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

    } 


















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


$el_asss = 'Re-Envio de Datos Pre-Inscribir';       





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


		Usted ha solicitado le sean Re-Enviado los datos del proceso de Pre-Inscripción.<br><br>

		Usuario (Cedula): '.$fila['ci_repre'].'<br>

        Password o clave momentáneo (Cedula): '.$fila['ci_repre'].'.<br>

        Y puede pre-inscribir a (N°): '.$fila['inscribe_nuevamente_hasta']. '.  representado(s).<br><br>
 
	    Use el siguiente enlace   '.$www_primer_plantelH.'  y haga clic en el enlace correspondiente.<br>




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



 if(isset($_POST['buscalo']))
    {


if (strlen($_POST['buscar_repre']) <=2 )  // no sea mayor a 40 caracteres
    {   $errorZZ .= "- Ingrese más de 3 caracteres, para iniciar la busqueda. "; }


else { 

$busqueda = $_POST['buscar_repre'];


include("../conectar.php");

      $query_bus = "SELECT reg_representante.*, tb_parentescos.nombre_parentesco, tb_profesiones.nombre_profesion FROM reg_representante

      INNER JOIN tb_parentescos ON reg_representante.id_parentesco=tb_parentescos.id_parentesco
	  INNER JOIN tb_profesiones ON reg_representante.id_profesion=tb_profesiones.id_profesion 
        
        where status = 1

        and  ci_repre LIKE  '".$busqueda."%'  OR  nombre_repre LIKE '%".$busqueda."%'  OR  apellido_repre LIKE '%".$busqueda."%' 
                      OR  nombre_parentesco LIKE '%".$busqueda."%'  OR  nombre_profesion LIKE '%".$busqueda."%'  GROUP by ci_repre ";

$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

mysqli_close($enlace); 

$enlace = "<b><a href=\"plantilla_representantes_search.php?tituloJKL=Resultados...&criterio=".$busqueda."\">Ver resultados.</a></b>";

$enlace_alt = "<b><a href=\"plantilla_representantes_search.php?tituloJKL=Resultados...&criterio=".$busqueda."\">Ver primeros 12 resultados.</a></b>";


if ($totalRows_datos_plantilla_bus == 0 ) {

  $errorZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados. ";

}


if ($totalRows_datos_plantilla_bus >= 1 && $totalRows_datos_plantilla_bus < 12) {

  $exitoZZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia(s).&nbsp;&nbsp; ".$enlace." "; 

}


if ($totalRows_datos_plantilla_bus >= 13) {

  $exitoZZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia(s).&nbsp;&nbsp; ".$enlace_alt." "; 

}




}

    } 











 if(isset($_POST['busca_ci']))
    {




  if ($_POST['imp_doc1'] == "" && $_POST['imp_doc2'] == "" && $_POST['imp_doc3'] == "")     
    {  

  $errorZZ .= "- Ingrese un número de documento a imprimir, en por lo menos un campo. ";

   }



if (!$_POST['imp_doc1'] == "")     
    {  

if (strlen($_POST['imp_doc1']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZZ .= "- Ingrese más de 6 números en el documento 1. "; }



else { 

     $doc_1 = $_POST['imp_doc1'];



     include("../conectar.php");


      $query_bus1 = "SELECT id_repre, foto_ci_repre FROM  reg_representante
        
        WHERE  ci_repre = '$doc_1'

        GROUP by ci_repre Limit 1 ";

$datos_plantilla_bus1 = mysqli_query($enlace, $query_bus1) or die(mysqli_error());
$row_datos_plantilla1 = mysqli_fetch_array($datos_plantilla_bus1); 
$totalRows_datos_plantilla_bus1 = mysqli_num_rows($datos_plantilla_bus1);

$fotoA1 = $row_datos_plantilla1["foto_ci_repre"];

mysqli_close($enlace); 


if ( $fotoA1 != "") {

  $exitoZZ .= "&nbsp; Documento 1 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d1= "1";

  $result1 = $row_datos_plantilla1["id_repre"];

}


else {

  $exitoZZ.="<span style=\"color:red; \">&nbsp; Documento 1 &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ; ";

}



      }



     }


if (!$_POST['imp_doc2'] == "")     
    {  


if (strlen($_POST['imp_doc2']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZZ .= "- Ingrese más de 6 números en el documento 2. "; }



    else { 

     $doc_2 = $_POST['imp_doc2'];



     include("../conectar.php");


      $query_bus2 = "SELECT id_repre, foto_ci_repre FROM  reg_representante
        
        WHERE  ci_repre = '$doc_2'

        GROUP by ci_repre Limit 1 ";

$datos_plantilla_bus2 = mysqli_query($enlace, $query_bus2) or die(mysqli_error());
$row_datos_plantilla2 = mysqli_fetch_array($datos_plantilla_bus2); 
$totalRows_datos_plantilla_bus2 = mysqli_num_rows($datos_plantilla_bus2);

$fotoA2 = $row_datos_plantilla2["foto_ci_repre"];


if ( $fotoA2 != "") {

  $exitoZZ .= "&nbsp; Documento 2 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d2= "1";

  $result2 = $row_datos_plantilla2["id_repre"];

}


else {

  $exitoZZ.="<span style=\"color:red; \">&nbsp; Documento 2 &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ;";

}




mysqli_close($enlace); 



      }




  }



  if (!$_POST['imp_doc3'] == "")     
    {  

if (strlen($_POST['imp_doc3']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZZ .= "- Ingrese más de 6 números en el documento 3. "; } 



    else { 

     $doc_3 = $_POST['imp_doc3'];



     include("../conectar.php");


      $query_bus3 = "SELECT id_repre, foto_ci_repre FROM  reg_representante
        
        WHERE  ci_repre = '$doc_3'

        GROUP by ci_repre Limit 1 ";

$datos_plantilla_bus3 = mysqli_query($enlace, $query_bus3) or die(mysqli_error());
$row_datos_plantilla3 = mysqli_fetch_array($datos_plantilla_bus3); 
$totalRows_datos_plantilla_bus3 = mysqli_num_rows($datos_plantilla_bus3);

$fotoA3 = $row_datos_plantilla3["foto_ci_repre"];


if ( $fotoA3 != "") {

  $exitoZZ .= "&nbsp; Documento 3 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d3= "1";

  $result3 = $row_datos_plantilla3["id_repre"];

}


else {

  $exitoZZ.="<span style=\"color:red; \">&nbsp; Documento 3 &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ; ";

}

mysqli_close($enlace); 



      }



  }









$enlace_1 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula_r1.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir ID1</a>

</form>


";



$enlace_2 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula_r1.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result2."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir ID2</a>

</form>


";


$enlace_3 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula_r1.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result3."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir ID3</a>

</form>


";




$enlace_4 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula_r2.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result2."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir ID1 & ID2</a>

</form>


";





$enlace_5 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula_r2.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result2."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result3."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir ID2 & ID3</a>

</form>


";




$enlace_6 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula_r2.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result3."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir ID1 & ID3</a>

</form>


";


$enlace_7 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula_r3.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result2."\">
<input type=\"hidden\" id=\"id_per3\" name=\"id_per3\" value=\" ".$result3."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir 3 documentos.</a>

</form>


";






if ($d1 == '1' AND $d2 == '0' AND $d3 == '0' )

 {
  $exitoZZ .= "&nbsp;&nbsp;&nbsp;".$enlace_1." ";
}


if ($d1 == '0' AND $d2 == '1' AND $d3 == '0' )

 {
  $exitoZZ .= "&nbsp;&nbsp;&nbsp;".$enlace_2." ";
}



if ($d1 == '0' AND $d2 == '0' AND $d3 == '1' )

 {
  $exitoZZ .= "&nbsp;&nbsp;&nbsp;".$enlace_3." ";
}







if ($d1 == '1' AND $d2 == '1' AND $d3 == '0' )

 {
  $exitoZZ .= "&nbsp;&nbsp;&nbsp;".$enlace_4." ";
}



if ($d1 == '0' AND $d2 == '1' AND $d3 == '1' )

 {
  $exitoZZ .= "&nbsp;&nbsp;&nbsp;".$enlace_5." ";
}



if ($d1 == '1' AND $d2 == '0' AND $d3 == '1' )

 {
  $exitoZZ .= "&nbsp;&nbsp;&nbsp;".$enlace_6." ";
}




if ($d1 == '1' AND $d2 == '1' AND $d3 == '1' )

 {
  $exitoZZ .= "&nbsp;&nbsp;&nbsp;".$enlace_7." ";
}





    } 
















?>


<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/lista_representantes2.php"); ?>  <!-- hace la lista -->


        
<div class="content-wrapper">
<div class="container-fluid">


<div class="form-row">
<div class="col-md-4 col-lg-4 mb-3">
                <div class="input-group-text alert-primary" role="alert">
                    <i class="fas fa-address-book fa-lg "></i> &nbsp; &nbsp; Representantes registrados en el plantel.
                </div>
</div>



 <div class="col-md-5 col-lg-5 mb-3">
              

              <?php 
                  if ($errorZZ!="")
                  { echo "<div class=\"input-group-text alert-danger text-truncate\" id=\"basic-addon1\" role=\"alert\" align=\"center\" >".$errorZZ."</div>"; }
                ?>
                                       <!-- SOLO ES VISIBLE SI LA VARIABLE DE ERROR TIENE ALGO-->


                <?php 
                  if ($exitoZZ!="")
                  { echo "<div class=\"input-group-text alert-success text-truncate\" role=\"basic-addon1\" role=\"alert\" align=\"center\">".$exitoZZ."</div>"; }
                ?>
                                       <!-- SOLO ES VISIBLE SI LA VARIABLE DE ÉXITO TIENE ALGO-->


</div> 


<div class="col-md-3 col-lg-3 mb-3" >

<span data-toggle="tooltip" data-placement="bottom" title="Solicita a todos los representantes la actualización de sus datos personales.">	
<button type="button" class="btn btn-primary btn-sm mb-1"
 data-toggle="modal"  data-target="#alerta_extrema">
 <!-- este ultimo identifica cual modal abrir -->       <i class="fas fa-stopwatch"></i></i>&nbsp;&nbsp;Solicitar Actualización</button></span>

<span data-toggle="tooltip" data-placement="bottom" title="Solicita a todos los representantes confirmar su email.">		
 <button type="button" class="btn btn-success btn-sm mb-1"
 data-toggle="modal"  data-target="#alerta_email">  
 <!-- este ultimo identifica cual modal abrir -->       <i class="fas fa-envelope-open-text"></i></i>&nbsp;&nbsp;Confirmar Email</button></span>

</div>



<!-- ini modal borrar --> 
<div class="modal fade" id="alerta_extrema" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-primary " id="exampleModalLabel">
        <i class="far fa-bell-slash fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">

<div class="form-row">
<div class="input-group col-lg-12 mb-2">

<p style="font-size: 18px;"> <b>Nota:</b> Esta acción, solicita y/o recuerda a todos los representantes
el mantener actualizados sus datos de contacto, es ideal para hacerlo tras cada inicio de año escolar
o cada dos años.</p>

</div>

</div>



</div> <!-- cierre modal body -->
      <div class="modal-footer"> 
        <span style="color: blue;"><b>Enviar solicitud? </b></span>&nbsp;&nbsp;

 <form method="post">


    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

    <button type="submit" name="solicitar_todos" class="btn btn-primary"
    value="todo_all" > Solicitar</button>

      </div>

</form>

    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 






<!-- ini modal borrar --> 
<div class="modal fade" id="alerta_email" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-success " id="exampleModalLabel">
        <i class="far fa-bell-slash fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">

<div class="form-row">
<div class="input-group col-lg-12 mb-2">

<p style="font-size: 18px;"> <b>Nota:</b> Esta acción, solicita a todos los representantes
confirmar, sus correos electronicos, ideal realizarlo al iniciar cada nuevo año escolar.</p>

</div>

</div>



</div> <!-- cierre modal body -->
      <div class="modal-footer"> 
        <span style="color: green;"><b>Enviar confirmación? </b></span>&nbsp;&nbsp;

 <form method="post">


    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

    <button type="submit" name="solicitar_email" class="btn btn-success"
    value="todo_all" > Enviar</button>

      </div>

</form>

    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 





</div>

<div class="form-row">







 <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-orange o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-search"></i>
              </div>
              <div class="mr-5 cantidadzzzpe">Buscar por:</div>
              <div class="mr-5 cantidadzzzsmall">nombre, apellido, doc de id,</div>
              <div class="mr-5 cantidadzzzsmall">parentesco y/o profesión.</div>
              <div class="mr-5 cantidadzzzsmall"><br></div>
              <div class="mr-5 cantidadzzzsmall"><b>Permite completar la plantilla extendida.</b></div>
            </div>


           <div class="card-footer card-footerz  clearfix z-1 small" >


<form method="POST">


           <div class="input-group input-group-sm">
            
            <input type="text" class="form-control" name="buscar_repre" placeholder="Criterio de busqueda...">
            <div class="input-group-append">
              <button type="submit" name="buscalo" class="btn btn-default"><i style="color:#F48917;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>
            </div>


          </div>
 </div>





 <div class="col-xl-3 col-sm-6 mb-3" >
          <div class="card text-white relleno-ocean o-hidden h-100">

<form method="POST">

            <div class="card-body">
              <div class="card-body-icon">
               <i class="fas fa-id-card"></i>
              </div>

            <div class="col-lg-9 col-md-12" style="margin-left: -25px; margin-top: -12px;">

<span class="" style="font-size: 14px;">El Doc. debe estar en el sistema.</span>


<div class="input-group input-group-sm mb-1 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">1.</span>
  </div>
  <input type="text" name="imp_doc1" class="form-control" placeholder="Núm de documento...." >
</div>

<div class="input-group input-group-sm mb-1 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">2.</span>
  </div>
  <input type="text" name="imp_doc2" class="form-control" placeholder="Núm de documento...." >
</div>

<div class="input-group input-group-sm mb-1  ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">3.</span>
  </div>
  <input type="text" name="imp_doc3" class="form-control" placeholder="Núm de documento...." >
</div>


<div class="input-group input-group-sm  ">
  <button type="submit" name="busca_ci" class="btn btn-sm btn-default btn-block"><i style="color:#268092;"><b>" Imprimir Documentos de ID "</b></i></button>
</div>


            </div>              
            </div>   
 </form>
          </div>
      </div>








 <div class="col-xl-3 col-sm-6 mb-3" >

<div class="form-row">

                    <div class="col-xl-12 col-sm-12 mb-1">  
          <div class="card text-white relleno-vino o-hidden h-100 ">
            <div class="card-body">
              <div class="mini_card_icon_alt">  
            		<span>
                  <i class="fas fa-child" ></i>                
                </span>

                </div>
              <div class="mr-5 cantidadzzzsmall" style="margin-top: -15px;"><?php echo "$total_conteoA"; ?> Familia(s)</div>
               <div class="mr-5 cantidadzzzsmall" style="padding-bottom: -30px;">de 1 estudiante.</div>
              
            </div>
          </div>
        </div>


        <div class="col-xl-12 col-sm-12 mb-1">   
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
             <div class="mini_card_icon">  
            		<span class="fa-layers fa-fw">
                  <i class="fas fa-child" data-fa-transform="shrink-7 up-2.1 left-3.9"></i>
                <i class="fas fa-child" data-fa-transform="shrink-7 up-2.1 right-5.6"></i>
                </span>

                </div>
             <div class="mr-5 cantidadzzzsmall" style="margin-top: -15px;"><?php echo "$total_conteoB"; ?> Familia(s)</div>
             <div class="mr-5 cantidadzzzsmall" style="padding-bottom: -30px;">con 2 estudiantes.</div>
             
               <div class="mr-5 cantidadzzzsmall mt-1"> <a class="text-white clearfix z-1"
href="plantilla_representantes_00.php?conteo=2&tituloJKL=con 2 estudiantes&selec=B"> 


<!-- <b><i class="far fa-hand-point-right"></i> Consultar Lista.</b>-->  </a></div> 
               

              
            </div>
                    
          </div> 
        </div>



                    <div class="col-xl-12 col-sm-12">  
          <div class="card text-white relleno-red o-hidden h-100 ">
            <div class="card-body">
              <div class="mini_card_icon_alt">  
            		<span>
                  <i class="fas fa-exclamation-triangle" ></i>                
                </span>

                </div>
              <div class="mr-5 cantidadzzzsmall" style="margin-top: -15px;"><?php echo "$total_conteo_acc"; ?> Representante(s)</div>
      
               <div class="mr-5 cantidadzzzsmall mt-1"> <a class="text-white clearfix z-1"
href="plantilla_representantes_00_conteo.php?tituloJKL=con acceso limitado"> 


<b><i class="far fa-hand-point-right"></i> Consultar Lista.</b></a></div>   

              
            </div>
          </div>
        </div>

       



       

</div>

 
         
        </div>







 <div class="col-xl-3 col-sm-6 mb-3" >

<div class="form-row">

                   


       


        <div class="col-xl-12 col-sm-12 mb-4">   
          <div class="card text-white relleno-carne o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">  
            		<span class="fa-layers fa-fw">
                  <i class="fas fa-child" data-fa-transform="shrink-9  up-2.9 right-7.7"></i>
                  <i class="fas fa-child" data-fa-transform="shrink-9 up-4.1 left-3.1"></i>
                  <i class="fas fa-child" data-fa-transform="shrink-9 up-1.8 right-2.3"></i>
           
                </span>

                </div>


             <div class="mr-5 cantidadzzzsmall" style="margin-top: -15px;"><?php echo "$total_conteoC"; ?> Familia(s)</div>
              <div class="mr-5 cantidadzzzsmall">de 3 ó más estudiantes.</div>

              <div class="mr-5 cantidadzzzsmall mt-1"> <a class="text-white clearfix z-1"
href="plantilla_representantes_00.php?conteo=3&tituloJKL=con 3 ó más estudiantes&selec=C"> 


<b><i class="far fa-hand-point-right"></i> Consultar Lista.</b></a></div>

             

              
            </div>
                    
          </div> 
        </div>



        <div class="col-xl-12 col-sm-12 mt-3">   
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon_alt">  
            		<span class="fa-layers fa-fw">
                  <i class="fas fa-clipboard" ></i>
                <i class="fas fa-search" style="color:#855995"
                 data-fa-transform="shrink-10 down-1.6"></i>
                </span>

                </div>


             <div class="mr-5 cantidadzzzsmall" style="margin-top: -15px;"><?php echo "$total_conteoD"; ?> Representante(s)</div>
              <div class="mr-5 infozzzpe">sin estudiantes.</div>
              <div class="mr-5 cantidadzzzsmall mt-1"><a class="text-white clearfix z-1" 
href="plantilla_representantes_vac.php?tituloJKL=con cero estudiantes"><b><i class="far fa-hand-point-right"></i> Consultar Lista.</b></a></div>
              


              

              
            </div>
                    
          </div> 
        </div>



       

</div>

 
         
        </div>













  <!--      <div class="col-xl-2 col-sm-4 mb-2">
          <div class="card text-white relleno-ocean o-hidden h-100">

            	<div class="mini_card_icon">  
            		<span class="fa-layers fa-fw">
                  <i class="fas fa-child" data-fa-transform="shrink-7  up-2.1 right-7.2"></i>
                  <i class="fas fa-child" data-fa-transform="shrink-7 up-3.1 left-2.1"></i>
                  <i class="fas fa-child" data-fa-transform="shrink-7 down-7.8 left-2.4"></i>
                <i class="fas fa-child" data-fa-transform="shrink-7 down-8.8 right-7.3"></i>
                </span>

                </div>

           <div class="card-bodywww">
                
              <div class="ml-2 cantidadzzzpe"><?php echo "$total_conteoCC"; ?> </div>              
              <div class="ml-2 infozzzpe">Familia(s)</div>
              <div class="ml-2 infozzzpe">de 4 ó más.</div>
           </div>

            <a class=" card-footer card-footerz text-white clearfix small z-1" 
href="plantilla_representantes_00.php?conteo=4&tituloJKL=con 4 ó más estudiantes&selec=C">


              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>   -->



        






      


        
        





</div>
    
    

		<div class="card mx-auto borderblue">

      	<div class="card-body">

      		<div class="form-row">


		      		<div class="col-md-4 col-lg-4 mb-2">

						<div class="input-group-text alert-warning text-left text-truncate" role="alert" id="basic-addon1">
						&nbsp;<b>Permitir pre-inscripción regular:</b></div> 

					</div> 


					<div class="col-md-8 col-lg-8 mb-2">
					

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




<form method="POST">


<div class="form-row mt-2">
	



			<div class="input-group input-group-sm  col-sm-12 col-md-3 col-lg-3  mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text alert-warning" id="basic-addon1"><i class="far fa-id-card fa-lg"></i></span>  
				</div>
					<input type="text" class="form-control importantex" id="cedula2" name="cedula2" placeholder="Cedula del representante..." required>
			</div>




			<div class="input-group input-group-sm col-sm-12 col-md-3 col-lg-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text alert-warning" id="basic-addon1"><i><b>N° a pre-ins.</b></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="inscribe_a2" name="inscribe_a2">
							  							
							  				   <option selected value="1">1</option>
							  							<option value="2">2</option>
							  							<option value="3">3</option>
							  							<option value="4">4</option>
							  							<option value="5">5</option>
							  							
												</select>
							   
			</div>



<div class="input-group input-group-sm  col-sm-12 col-md-3 col-lg-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-sm input-group-text alert-warning " id="basic-addon1">&nbsp;<i>Para el ciclo:</i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="cursa_est12" name="cursa_est12" required>



<!-- <option value="<?php echo $row_datos_periodo_actual['id_periodo_es']; ?>" selected>
  <?php echo $row_datos_periodo_actual['periodo_escolar']; ?></option>  --> <option selected></option>
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

	<button type="submit" name="re_autorizar"  class="btn btn-sm btn-warning btn-block" id='btnReset2' >
	<i class="fas fa-retweet fa-lg"></i>&nbsp;&nbsp; Permitir "alumno regular"</button>

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

			    $('#btnReset2').click(function() {
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



<span class="mt-2" <?php if ($new_new_alertica == '0'){?>style="display:none"<?php } ?>     >	
<b style="color: red;">LEER PARA SOLVENTAR:</b> En caso de requerir, pre-inscribir a uno o varios estudiantes que no pudieron ser pre-inscritos por sus representantes en una oportunidad anterior, puede lograrlo habilidanto al representante a pre-inscribir en un ciclo superior <b>pero luego debera editarlo en el listado de abajo </b> y colocar el ciclo correcto en dicha autorización. <b style="color: red;">Es fundamental</b> verificar el esatado de los representados, antes de hacer este proceso.</span>			 
      
				


			</div>   <!-- cierre cardbody -->
		    </div>   <!-- cierre card -->

			
            





<div class="card mb-3 separacionpequena" >
       

		<div class="card-header">
        <b><i class="fa fa-table"></i></b> Lista de autorizados, para realizar pre-inscripción de alumnos regulares:  
        </b></div>


        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered stricolor table-sm" id="dataTable" width="100%" cellspacing="0">
             
              <thead>
                <tr id="a">
                      
                  <th>Autorizado_el:</th>
                  <th>Doc. ID.</th>         
                  <th>Representante:</th>                     
                  <th>Pre-Ins.:</th>
                  <th>Ciclo</th>
                  <th>Email / Pass</th>
                  <th>Tlf. Celular</th>
                                 
                  <th class="text-center">Datos</th>
                  <th class="text-center">Editar</th>

                  <th class="text-center">Anular</th>

                  
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






</script>



              
              <tbody>

            <?php do{?>  <!-- va a generarme tantas filas como datos tenga esta BD -->            

               <tr id="b">                 
        

                	 <td class="align-middle" align="center"><?php
   
                   $source = $row_usuarios['autorizado_el'];  
					$date = new DateTime($source);
					echo $date->format('d/m/y'); 
                   ?><br><?php echo $date->format('g:i:s a'); ?> </td>



                  <td class="align-middle" align="center"><?php echo $row_usuarios['ci_repre']; ?> </td>
                  <td class="align-middle" align="center"><?php echo $row_usuarios['nombre_repre']; ?> <br> <?php echo $row_usuarios['apellido_repre']; ?> </td>
                  <td class="align-middle" align="center"><?php echo $row_usuarios['numeros2']; ?>  estud(s).</td>
                   <td class="align-middle" align="center"><?php echo $row_usuarios['periodo_escolar']; ?></td>

                  <td class="align-middle" align="center"> <!--<span style="color: transparent;"> <?php	echo $row_usuarios['id_repre']; ?></span> <br> -->


                  	<?php echo $row_usuarios['email_repre']; ?><br> <i class="fas fa-key"></i>: <b><?php echo $row_usuarios['clave_repre']; ?></b> </td>


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
        <input type="text" class="form-control" id="dato_selecc" name="mod_cedula" value="<?php echo $row_usuarios['ci_repre']; ?>" placeholder="Cedula...">
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
        <input type="text" class="form-control" id="dato_selecc" name="mod_telefono1" value="<?php echo $row_usuarios['celular_repre']; ?>" placeholder="Tlf. Celular...">
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



<option value="<?php echo $row_usuarios['id_numero2']; ?>" selected>
  <?php echo $row_usuarios['numeros2']; ?></option>
<option disabled></option>
							  							

                                <optgroup label="Cambiar a...">
                                <option disabled></option>
							  				            <option value="1">1</option>
							  							<option value="2">2</option>
							  							<option value="3">3</option>
							  							<option value="4">4</option>
							  							<option value="5">5</option>
							  							
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













    <!--           <td class="align-middle" align="center">

  				  <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                  data-target="#borrar<?php echo $row_usuarios['id_repre']; ?>">
                                                                      este ultimo identifica cual modal abrir 

                  <i class="far fa-trash-alt"></i></button>                 

            </td>-->


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
                             "&nbsp;</b> sera removido de la base de datos; Esta acción puede eliminar datos menores asociados a este representante. . 
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
    3. Si el representante no posee un email, considere contactarlo por mensaje de texto. <br>
    4. En caso de realizar una autorización errónea:
    <ol type="a">
    	<li>- Si la autorización es completamente errónea, debe anular la autorización.</li>
    	<li>- Si pocos datos son erróneos puede editar el registro.</li>    	
     </ol>
             	                                                  
   <b>Nota:</b> Una vez el autorizado realice y complete la pre-inscripción, no aparecerá en esta lista.</div> 




 

  </div> <!-- cierre card -->












</div> <!-- cierre container fluid -->    
</div> <!-- cierre content wrapper -->


 <?php include ("Footer.php"); ?>