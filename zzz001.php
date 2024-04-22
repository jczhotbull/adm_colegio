<?php

	header("Content-type: text/html;charset=\"utf-8\"");                  // Necesario para caracteres latinos

	$errorZ="";  // acumula los mensajes de error
	$exitoZ="";  // acumula los mensajes de éxito
	$enviado=""; // me dice si  probablemente se envio o no el email
	$sms="";

if (array_key_exists("submit",$_POST))// chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba

   {



                if (!$_POST['cedula'])  // verifica que no este vacío el campo cedula
			        {  $errorZ .= "<br> - La cedula es requerida."; }

			    if (strlen($_POST['cedula']) >9 )  // verifica que el campo cedula no sea mayor a 9 caracteres
			        {  $errorZ .= "<br> - La cedula supera los 9 dígitos."; }

			    if(!is_numeric($_POST['cedula']) ) // verifica que sean solo números
			    	{  $errorZ .= "<br> - La cedula debe ser numérica"; }



					    if (!$_POST['nombres'])      // verifica que no este vacío
					        {   $errorZ .= "<br> - El nombre es requerido."; }

						if (strlen($_POST['nombres']) >40 )  // no sea mayor a 40 caracteres
					        {   $errorZ .= "<br> - El nombre supera los 40 caracteres."; }

					  	if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['nombres']) ) )  // comprueba que sean letras
		      		        {   $errorZ .= "<br> - El nombre solo debe contener letras."; }




			    if (!$_POST['apellidos'])      // verifica que no este vacío
			        {   $errorZ .= "<br> - El apellido es requerido."; }

			    if (strlen($_POST['apellidos']) >40 )  // no sea mayor a 40 caracteres
			        {   $errorZ .= "<br> - El apellidos supera los 40 caracteres."; }

			    if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['apellidos']) ) ) // comprueba que sean letras
      		        {   $errorZ .= "<br> - El apellido solo debe contener letras."; }


       
					    if (!$_POST['email'])      // verifica que no este vacío 
					        {   $errorZ .= "<br> - El email es requerido."; }

					    if (strlen($_POST['email']) >40 )  // no sea mayor a 40 caracteres
					        {   $errorZ .= "<br> - El email supera los 40 caracteres."; }

					     if (!filter_var( ($_POST['email']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
					     {  $errorZ .= "<br> - Formato del email es invalido."; }



			    if (!$_POST['clave'])      // verifica que no este vacío
			        { $errorZ .= "<br> - La contraseña es requerida."; }

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
			           $errorZ = "<p> Se han suscitado los siguientes errores: <br> <b>" . $errorZ. " </b> </p> <br>";            
			        }





	else      // Sequencia de chequeo, verifica si el email ya está registrado en la BD...
		{

		 include("conectar.php");	
	     $queryE = "SELECT ci FROM usuarios WHERE email ='".mysqli_real_escape_string($enlace,$_POST['email'])."' LIMIT 1";

			            $resultE = mysqli_query($enlace,$queryE);

		if (mysqli_num_rows($resultE)>0)
			{
			 $errorZ="<br> - Email anteriormente registrado.";
			}

	
		else {      //  verifica si la ci ya está registrado en la BD...

		$queryC = "SELECT ci FROM usuarios WHERE ci ='".mysqli_real_escape_string($enlace,$_POST['cedula'])."' LIMIT 1";

			            $resultC = mysqli_query($enlace,$queryC);

		if (mysqli_num_rows($resultC)>0)
			{
			 $errorZ="<br> - Doc. de Id anteriormente registrado.";
            }
		    



	     else     
			 {

			 	// para saber si hay internet o no... y guardar que no se enviaron los datos...

                    $conexion = @fsockopen("www.google.com", 80, $errno, $errstr, 30); 
					if (!$conexion) { 
					$enviado="No";
					$sms="Sin Conexión a Internet. <br> Lamentablemente no";
					} else { 
					$enviado="Si";
					$sms="Observe su email, he incluso la carpeta SPAM. <br> En breve"; 
					fclose($conexion); 
					} 




             // ingresa los datos si el email y la ci no están en la BD
            $cargo = $_POST["cargo"];


			$query = "INSERT INTO usuarios(ci, nombres, apellidos, email, clave, cargo, enviado)
			          VALUES ('".mysqli_real_escape_string($enlace,$_POST['cedula'])."'     ,
			                  '".mysqli_real_escape_string($enlace,$_POST['nombres'])."'    ,
			                  '".mysqli_real_escape_string($enlace,$_POST['apellidos'])."'  ,
			                  '".mysqli_real_escape_string($enlace,$_POST['email'])."'      ,
			                  '".mysqli_real_escape_string($enlace,$_POST['clave'])."'      ,
			                   '$cargo', '$enviado'   )";

			if (!mysqli_query($enlace,$query))      // si no ha logrado ingresar los datos
			   {
			    $errorZ="<br> <p>- Error al registrar, inténtelo más tarde </p> ";
			    }


			    	/* notas de la tabla "usuarios":

			    	  nombre / tipo / longitud /   todos  utf8_spanish_ci

                      id           int                    primario con auto incremento
			    	  ci           int                    unico
			    	  nombres      varchar        40      (text esta descontinuado usar varchar en todas)
			    	  apellidos    varchar        40
			    	  email        varchar        40      unico
			    	  clave        varchar        40      (debe ser grande ya que es doble hasheada)
			    	  cargo        varchar        15
			    	  enviado      varchar        15
			    	         parametro q ayuda a saber si se envio el correo o no con los datos del registro

			    	  */
			  

		
   
		     else
			    {
			    	// Actualizar el almacenamiento del password


			    $pass= mysqli_real_escape_string($enlace,$_POST['clave']);  // almaceno el valor de clave limpio

	            $passwordHasheada= md5(md5(mysqli_insert_id ($enlace)).$pass); 

	             // mysqli_insert_id ($enlace) retorna el id siempre que fuera creado  automaticamente.

	            $query = " UPDATE usuarios SET clave = '$passwordHasheada' WHERE id = ".mysqli_insert_id($enlace). " LIMIT 1 ";

                                    // he indicado que me haga un hash de un un hash del id concatenado con la clave insertada...       



                mysqli_query ($enlace, $query);  // Ejecuta el query...


			         // Etapa final del registro

			    $exitoZ="<p><b>Registro realizado. <br>  " .$sms . "  recibirá un correo.</b></p> ";

               

			    $email = $_POST["email"];

			    $correo = "Usted ha sido registrado en la Plataforma Maestra.
	           \n\nNombre(s): ' ".mysqli_real_escape_string($enlace,$_POST['nombres'])." ' "."

	           \nApellidos: ' ".mysqli_real_escape_string($enlace,$_POST['apellidos'])." ' "."

	           \n\nUsuario (Doc de Id): ' ".mysqli_real_escape_string($enlace,$_POST['cedula'])." '  "."

	           \nClave de Acceso: ' ".mysqli_real_escape_string($enlace,$_POST['clave'])." ' "."
	          
	           \n\nSu Roll en la plataforma es el de: ' " . $cargo . " '

	           \n\nFavor Resguardar estos datos!!!

	           \n\n Nota: En caso de necesitar comunicarse con nosotros, no responder a este correo,
	           \n su uso es estrictamente para la plataforma automatizada del colegio ";

				mail($email,"Registro Maestro", $correo);    

                


			    }  // cierre de exito al registrar y enviar email

		

			} // cierre etapa de ingreso de datos   



		}  // cierre comprobación cedula



    }  // cierre comprobación email

mysqli_close($enlace);

}  // cierre if principal





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
 					<h1 class="text-center respH1">Registro de usuarios principales</h1>
 				</div>
 			</div>
 		




	<div class="row">  
		<div class="card card-login mx-auto mt-5">
      	<div class="card-header">Rellene los siguientes campos:</div>

      	<div class="card-body">



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



						

				<form method="POST" name="">


<div class="form-row">

			<div class="input-group mb-3 col-md-6">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-file-alt fa-lg"></i></span>  
				</div>
					<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombre(s) del usuario..." aria-label="nombres" aria-describedby="basic-addon1" required>
			</div>



			<div class="input-group mb-3 col-md-6">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1"><i class="far fa-file-alt fa-lg"></i></span>  
				</div>
					<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellido(s) del usuario..." aria-label="apellidos" aria-describedby="basic-addon1" required>
			</div>
</div> <!-- cierre form row -->




<div class="form-row">


		<div class="input-group mb-3 col-md-6">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="far fa-id-card fa-lg"></i></span>  
			</div>
				<input type="text" class="form-control" id="cedula" name="cedula" placeholder="Doc de Id. del usuario..." aria-label="cedula" aria-describedby="basic-addon1" required>
		</div>


		 <div class="input-group mb-3 col-md-6">
		 	<div class="input-group-prepend">
		 		<span class="input-group-text" id="basic-addon1"><i class="fas fa-at fa-lg"></i></span>  
			</div>
    			
   				 <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico..." aria-label="email" aria-describedby="basic-addon1" required>
    
  		</div>

</div> <!-- cierre form row -->

					


	


<div class="form-row">

	
	<div class="input-group mb-3 col-md-6">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt fa-lg"></i></span>  
			</div>
        	<input type="password" class="form-control" id="clave" name="clave" placeholder="Password..." aria-label="clave" aria-describedby="basic-addon1" required>
	</div>


	<div class="input-group mb-3 col-md-6">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fas fa-lock fa-lg"></i></span>  
			</div>
        	<input type="password" class="form-control" id="rclave" name="rclave" placeholder="Repetir Password..." aria-label="rclave" aria-describedby="basic-addon1" required>
	</div>
	

</div><!-- cierre form row -->



	<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fas fa-briefcase fa-lg"></i>&nbsp&nbsp Seleccionar Cargo:</span>  
			</div>
   
      				<select class="form-control" id="cargo" name="cargo">
  							<option>Administrador</option>
  							<option>Cajero</option>
  							<option>Profesor</option>
						    <option>Secretario</option>
						    
					</select>
   
    </div>
					

			

					<br>



<script src="0 zqueryajax/jquery.min.js"></script>


					<button type="submit" name="submit" class="btn btn-primary btn-block"  id='btnReset'>
					 <i class="fas fa-save fa-lg"></i> &nbsp; Registrar</button>

							<div class="form-row ">  <!-- mensaje q aprece -->

						  		<div class="content col-md-12 text-center mt-1" style="display:none">

						  		<b class="text-danger"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

							    </div>

						  	</div>
 
 
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


			<!-- coloca un mensajito al clickear send y desaparece al rato -->				

			<script>

			$(document).ready(function() {
			    setTimeout(function() {
			        $(".content").hide();
			    }, 0);                     // este numero dice que tan rapido lo esconde....

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


				</form>


		
  




			</div>   <!-- cierre cardbody -->
		    </div>   <!-- cierre card -->

			
					
			
	</div> <!-- cierre row -->

				<br>


	</div> <!-- cierre container -->

<br><br>


<?php include ("Footer.php"); ?>