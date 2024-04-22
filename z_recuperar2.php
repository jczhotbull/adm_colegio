<?php

session_start();

error_reporting(0);

header("Content-type: text/html;charset=\"utf-8\"");                  // Necesario para caracteres latinos

	$errorZ="";  // acumula los mensajes de error
	$infoZ="";  // acumula los mensajes de información
	$exitoZ="";  // acumula los mensajes de éxito


if (!isset($_SERVER['HTTP_REFERER'])){ 

 session_destroy();
 header('Location:index.php'); }           // con esto es imposible entrar aqui, tipeando la direccion.



if (array_key_exists("apellidos_M", $_SESSION) AND $_SESSION ['apellidos_M'])
      // si existe la clave cedula en el arreglo session y tiene algo....    
  {



  		$infoZ .= " <b> Usuario identificado, favor completar: </b>";

		if (array_key_exists("submit",$_POST))// chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba

		   {

		         include("conectar.php");

		                        //  Chequeo basico de entrada de  clave y reecritura de clave

				
					     if (!$_POST['clave'])      // verifica que no este vacío
					        { $errorZ .= "<br> - La nueva contraseña es requerida."; }

					    if (strlen($_POST['clave']) >9 )  // verifica que el campo no sea mayor a 9 caracteres
					        {  $errorZ .= "<br> - Contraseña mayor a 9 dígitos."; }

					    if (!preg_match ("/^[A-Za-z0-9]+$/",($_POST['clave']) ) ) // comprueba que solo se puedan escribir letras sencillas y números sin espacios
		      		        {   $errorZ .= "<br> - Carácter no valido en la contraseña."; }

										
					    
					    if (!$_POST['rclave'])      // verifica que no este vacío
					        { $errorZ .= "<br> - Debe Re-Escribir la contraseña."; }

					    if (strlen($_POST['rclave']) >9 )  // verifica que el campo no sea mayor a 9 caracteres
					        {  $errorZ .= "<br> - Contraseña Rescrita mayor a 9 dígitos."; }

					    if (!preg_match ("/^[A-Za-z0-9]+$/",($_POST['rclave']) ) ) // comprueba que solo se puedan escribir letras sencillas y números sin espacios
		      		        {   $errorZ .= "<br> - Carácter no valido en la contraseña."; }


								    if ($_POST['clave'] != $_POST['rclave'] )  // compara ambas claves
								    	{  $errorZ .= "<br> - Las contraseñas escritas no coinciden."; }
					  



					     if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
					        {
					           $infoZ ="";
					           $errorZ = "<p> Se han suscitado los siguientes errores: <br> <b>" . $errorZ. " </b> </p> <br>";            
					        }
				               

					     else      // Sequencia actualización de Contraseña...
			          
			                  {
								
								$pass= mysqli_real_escape_string($enlace,$_POST['clave']);  // almaceno el valor de clave limpio

	                            $passwordHasheada=md5( md5 ($_SESSION['id_M']) . $pass ) ;

	                            $idM = $_SESSION['id_M'];

			                  	 // almaceno el valor de clave HASHEADA   
	                		
			                  	$query = " UPDATE usuarios SET clave = '$passwordHasheada' WHERE id = '$idM' LIMIT 1 "; 
								$result = mysqli_query($enlace,$query);
							
								//  echo "Listo . '". $idM . "' ";

								 $infoZ ="";



								  $conexion = @fsockopen("www.google.com", 80, $errno, $errstr, 30); 
									if (!$conexion) { 

									 $exitoZ="<p><b>Contraseña Re-Establecida.</b></p>
									             <b><a href=\"index.php\">Volver</a></b> ";									

								 

									}

									 else { 

									$exitoZ="<p><b>Contraseña Re-Establecida. <br> En breve recibirá un correo.</b>
								                <br> De ser necesario compruebe la carpeta SPAM.</p>
								                <b><a href=\"index.php\">Volver</a></b> ";


								                

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
		$mail->AddAddress(''.$_SESSION['email_M'].'', ''.$_SESSION['nombres_M'].'');	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML
		$mail->Subject = "$el_asss"; //Sets the Subject of the message
		//An HTML or plain text message body
		$mail->Body = '
		<p>Sr.(a): <b>'.$_SESSION['apellidos_M'].'</b>. </p>

		Usted ha solicitado recuperar su contraseña del Sistema Administrativo iMagic.<br><br>

	    Usuario (Doc de Id): '.$_SESSION['cedula_M'] .'.<br>

	    Nueva Clave de Acceso: '.$pass.'.<br><br>
	          
	

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













									   session_unset();


									
									 mysqli_close($enlace);
								




							} // cierre secuencia actualización


			            

	    } // cierre if si se ha enviado algo

}  // cierre if verificador session


else
{
	header ("Location: z_recuperar1.php");
}






?>


<!doctype html>	
<html lang="es">

<head>
	<title>Re-Establecer</title>
	<meta charset="utf-8">
	

	<!-- codigo para Bootstrap 4, beta 3 -->
    <link rel="icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		

	<!-- Bootstrap Nucleo CSS -->
    <link href="0 Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- estilos -->
	<link rel="stylesheet"  href="css/estilos.css" />



<style>
#countdown{ font-weight: bold; font-size: 14px; color: black;}
</style>


<script type="text/javascript">

function start_countdown()
{
 var counter=75;
 myVar= setInterval(function()
 { 
  if(counter>=0)
  {
   document.getElementById("countdown").innerHTML=""+counter+" Seg";
  }
  if(counter==0)
  {
   $.ajax
   ({
     type:'post',
     url:'login-logout.php',
     data:{
      logout:"logout"
     },
     success:function(response) 
     {
      window.location="index.php";
     }
   });
   }
   counter--;
 }, 1000)
}
</script>
	 


	<script> function goBack()    {window.history.back();     } </script> 
	<!-- ayudan con los botones de ir una pagina alante o atras en el footer -->
	<script> function goForward() {window.history.forward();  } </script>


</head>                

 

	<body>  
	

	<header>
			<div class="container">
				<div class="row">
			 		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	  					<img src="z_imagenes/banner.jpg" class="img-fluid rounded mx-auto d-block">    <!-- imagen responsiva, bordes circulares y alineada al centro-->
					</div>
				</div>
			</div>
	</header>
	<br>


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
		 					<h1 class="text-center respH1">*** Actualice su Contraseña ***</h1>
		 				</div>
		 			</div>
		 		
		


 		


			<div class="row">  
		
		<div class="card card-login mx-auto mt-5">
      	

      	<div class="card-body">  
			
	
				<script>start_countdown();</script>

				<div id="infoZ"> <?php 
								if ($infoZ!="")
 								{ echo "<div class=\"alert alert-info\" role=\"alert\" align=\"center\">".$infoZ."</div>"; }
				           		   ?>

				</div>   <!-- SOLO ES VISIBLE SI LA VARIABLE DE INFORMACION TIENE ALGO-->

				<div id="errorZ"> <?php 
									if ($errorZ!="")
			           				 { echo "<div class=\"alert alert-danger\" role=\"alert\" align=\"center\">".$errorZ."</div>"; }
			           		   ?>
				</div>   <!-- SOLO ES VISIBLE SI LA VARIABLE DE ERROR TIENE ALGO-->
	
				<div id="exitoZ"> <?php 
									if ($exitoZ!="")
			           				 { echo "<div class=\"alert alert-success\" role=\"alert\" align=\"center\">".$exitoZ."</div>"; }
			           		   ?>
				</div>   <!-- SOLO ES VISIBLE SI LA VARIABLE DE ÉXITO TIENE ALGO-->



				

				<form method="POST">   <!-- id="contra"   -->




					<div <?php if ( $exitoZ!=""){?>style="display:none"<?php } ?> class="input-group mb-3">
							<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt fa-lg"></i></span>  
						    </div>
							<input type="password" class="form-control" id="clave" name="clave" placeholder="Ingresar nueva contraseña..." aria-label="clave" aria-describedby="basic-addon1" required>
					</div>


					<div <?php if ( $exitoZ!=""){?>style="display:none"<?php } ?> class="input-group mb-3">
							<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-lock fa-lg"></i></span>  
						    </div>
							<input type="password" class="form-control" id="rclave" name="rclave" placeholder="Repetir nueva contraseña..." aria-label="rclave" aria-describedby="basic-addon1" required>
					</div>


					<br>


<script src="0 zqueryajax/jquery.min.js"></script>



				<button <?php if ( $exitoZ!=""){?>style="display:none"<?php } ?> type="submit" name="submit" class="btn btn-info btn-block" id='btnReset'> <i class="fas fa-save fa-lg" >
					
				</i> &nbsp; Re-Establecer ( <i id="countdown"></i> )</button>
				 <!-- id="load" -->

				
				<div class="form-row ">  <!-- mensaje q aprece -->

					<div class="content col-md-12 text-center mt-1" style="display:none"> 

			<b class="text-danger"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar!!! </b>

					</div>

					</div>



					<!-- coloca un mensajito al clickear send y desaparece al rato  -->				

			<script>

			$(document).ready(function() {
			    setTimeout(function() {
			        $(".content").hide();
			    }, 0);

			    $('#btnReset').click(function() {
			        $(".content").show();
			        
			        setTimeout(function() {
			            $(".content").fadeOut(1500);
			        }, 3500);
			        

			    });
			});
			</script>




 <!-- no habilita el boton de enviar hasta que los campos esten llenos -->          
<script>
	
$(document).ready(function() {
  validate();
  $('input').on('keyup', validate);
});

function validate() {
  var inputsWithValues = 0;
  
  // get all input fields except for type='submit'
  var myInputs = $("input:not([type='submit'])");

  myInputs.each(function(e) {
    // if it has a value, increment the counter
    if ($(this).val()) {
      inputsWithValues += 1;
    }
  });

  if (inputsWithValues == myInputs.length) {
    $("button[type=submit]").prop("disabled", false);
  } else {
    $("button[type=submit]").prop("disabled", true);
  }
}


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




		
						
				
						

				</form>   


	<br>
									<p class="" align="center"> <b> <a href="index.php">¡Volver a Inicio!</a> </b></p>	


	        </div>   <!-- cierre card body -->


	      </div> <!-- cierre card login -->


			
			
			

		</div>    <!-- cierre row -->

	</div>  <!-- cierre container -->
 

		


<?php include ("Footer.php"); ?>