<?php

session_start();        // Necesario para que recuerde si ya habia iniciado sesión, el reanuda una sesion que
                        // se hubiera iniciado anteriormente, o inicia una nueva si no la hubiera.
                        // se debe colocar en todas las paginas del sitio web.

//session_destroy();
session_unset();

error_reporting(0);



if (!isset($_SERVER['HTTP_REFERER'])){ 
 session_destroy();
 }           // con esto es imposible entrar aqui, tipeando la direccion.



error_reporting(0);     // este parametro solo se usa una vez finalizada la pagina y comprobado
                        // su funcionamiento, con este comando no se mostrara ningun tipo de error
                        // me sirve ya que uso sesiones y suele pasar que si se sale
                        //  sin hacer un cierre correcto, la sesion queda con bug algunas veces
                        // de esta manera en esta pagina inicial, no mostrara nada al pedir el valor de sesion.

// $_SESSION['cargo'] =


header("Content-type: text/html;charset=\"utf-8\"");                  // Necesario para caracteres latinos

	$errorZ="";  // acumula los mensajes de error
	$infoZ="";  // acumula los mensajes de información
	$exitoZ="";  // acumula los mensajes de éxito


	




include("conectar.php");
       

 $querymodcabecc = "SELECT id_cabecera, en_mantenimiento, modo_consulta FROM z_cabecera where id_cabecera = 1 ";

 $datos_modcabecc = mysqli_query($enlace, $querymodcabecc) or die(mysqli_error());
              
 $row_datos_modcabecc = mysqli_fetch_array($datos_modcabecc);

 $dato_consulta = $row_datos_modcabecc['en_mantenimiento'];

 $dato_consulta_consulta = $row_datos_modcabecc['modo_consulta'];

mysqli_close($enlace);











if (array_key_exists("Logout",$_GET))  // Si hubiese un logout, entonces 
    {
      session_unset();                     // libera todas las variables de sessión
      setcookie("id_repre", "", time()-60*60);   // crea la cookie id con el valor vacio y que caduque una hora antes.
      $_COOKIE ['id_repre']="";                  // borra el valor de id contenido en el cookie, por medida extra

      setcookie("cargo_repre", "", time()-60*60);   // crea la cookie cargo con el valor vacio y que caduque una hora antes.
      $_COOKIE ['cargo_repre']="";                  // borra el valor de cargo contenido en el cookie, por medida extra
    }

    else if ((array_key_exists("id_repre", $_SESSION) AND $_SESSION ['id_repre']) OR (array_key_exists("id_repre", $_COOKIE) AND $_COOKIE['id_repre'])) 
      // si existe la clave id en el arreglo session y tiene algo     ó   existe la clave id en el arreglo cookie y tiene algo....    

    {

								 if ($_SESSION['cargo_repre'] == 'representante')

								{
									 header ("Location: zona_representantes/zona_repre.php");
								}


								else {

									session_destroy();
									header ("Location: index2.php");
								}
    }    




if (array_key_exists("submit",$_POST))// chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba

   {

         include("conectar.php");

                        //  Chequeo basico de entrada de cedula y clave


				if (!$_POST['cedula'])  // verifica que no este vacío el campo cedula
			        {  $errorZ .= "<br> - Usuario ( Cedula ) requerido."; }

			    if (strlen($_POST['cedula']) >9 )  // verifica que el campo cedula no sea mayor a 9 caracteres
			        {  $errorZ .= "<br> - Usuario ( Cedula ) supera 9 dígitos."; }

			    if(!is_numeric($_POST['cedula']) ) // verifica que sean solo números
			    	{  $errorZ .= "<br> - Usuario ( Cedula ) a de ser numérica."; }



			    if (!$_POST['clave'])      // verifica que no este vacío
			        { $errorZ .= "<br> - La contraseña es requerida."; }

			    if (strlen($_POST['clave']) >9 )  // verifica que el campo no sea mayor a 9 caracteres
			        {  $errorZ .= "<br> - Contraseña mayor a 9 dígitos."; }

			    if (!preg_match ("/^[A-Za-z0-9]+$/",($_POST['clave']) ) ) // comprueba que solo se puedan escribir letras sencillas y números sin espacios
      		        {   $errorZ .= "<br> - Carácter no valido en la contraseña."; }

								
			    
			    if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
			        {
			           $errorZ = "<p> Se han suscitado los siguientes errores: <br> <b>" . $errorZ. " </b> </p> <br>";            
			        }





			else      // Sequencia de chequeo, Permite iniciar sesión
			          
			          // verifica si la ci ya está registrado en la BD...
			    {
					$queryC = "SELECT * FROM reg_representante WHERE ci_repre = '".mysqli_real_escape_string($enlace,$_POST['cedula'])."' LIMIT 1";

					$resultC = mysqli_query($enlace,$queryC);
					$fila=mysqli_fetch_array($resultC);

                 if (isset($fila))   // si tengo algo en la fila significa que existe la ci, ahora compruebo la clave 

	                 {

	                 $pass= mysqli_real_escape_string($enlace,$_POST['clave']);  // almaceno el valor de clave limpio

	                 $acceso = "0";	                 



	                 if ($pass==$fila['clave_repre'] && $acceso==$fila['acceso'] )   // si la clave ingresada coincide con la de la BD   y comprueba que tenga permitido acceder       

						{
							 // usuario autenticado


							$_SESSION['id_repre']=$fila['id_repre'];  // almacena el valor de id en el valor de session


							// guardo el cargo

							$queryP = "SELECT cargo FROM reg_representante WHERE id_repre = ' ".$_SESSION['id_repre']." ' LIMIT 1";

							$resultP = mysqli_query($enlace,$queryP);
							$filaP=mysqli_fetch_array($resultP);
							$_SESSION['cargo_repre']=$filaP['cargo'];  // almacena el valor del cargo en un valor de session
				  	

								if ($_SESSION['cargo_repre'] == 'representante')								

								{


                                    // comprobar si tiene estudiantes en curso o por inscribir??? 


									 
												if ($dato_consulta_consulta == 'Si') {

										 header ("Location: zona_representantes/zona_repre_alt.php"); 

									}

									else {

										 header ("Location: zona_representantes/zona_repre.php");

								}



								}


								else {
												$errorZ="Contactar con el Ing.!";  
								}
                               
                              

							 }   // cierre de la comprobacion de coincidencia en la clave 



							 	if ($acceso!=$fila['acceso'] )   // 

						{   $errorZ="Contactar con Administración!";   } // muestra q valla a admin usuario limitado


						else { 

								$errorZ="La contraseña y/o el usuario no son validos!";  // hace referencia a la clave  

			     			}



				      }   // cierre tras comprobar que la ci existe...


			else { 

				$errorZ="El usuario y/o contraseña no son validos!";  // hace referencia a la ci

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
 					<h1 class="text-center respH1">Bienvenidos al Sistema On-Line</h1>
 				</div>
 			</div>
 		

<div class="row"  <?php if ( $dato_consulta == 'No' ){?>style="display:none"<?php } ?>    >
<div class="card card-login mx-auto mt-5">
	<div class="card-body">
<div class="alert alert-info" role="alert">
  <b>! Sistema en Mantenimiento !</b>
</div>
</div>
</div>


</div>



	<div class="row"  <?php if ( $dato_consulta == 'Si' ){?>style="display:none"<?php } ?>    >  
		
	<div class="card card-login mx-auto mt-5">
      	<div class="card-header">Ingrese sus datos de acceso:</div>

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
										    <span class="input-group-text" id="basic-addon1"><i class="far fa-id-card fa-lg"></i></span>  
										  </div>
										  <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Doc de Id. representante." aria-label="Username" aria-describedby="basic-addon1" required>
										</div>


										<div class="input-group mb-1">
										  <div class="input-group-prepend">
										    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i>&nbsp;</span>     
										  </div>
										  <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña y/o clave." aria-label="Password" aria-describedby="basic-addon1" required>


										</div>

										 <div class="mb-3">
										 <b class="text-muted">Al primer ingreso la clave será el Doc. de Id.</b>
										 </div>
			                            

			                                
			                                <br>
			                                
			                                <button type="submit" name="submit" class="btn btn-success btn-block">
			                                	<i class="fas fa-sign-in-alt fa-lg"></i> &nbsp Ingresar</button>

                          
			                        </form>

			                    




									<br>
									<p class="" align="center"> <b> <a href="z_recuperar0.php">¡Recuperar contraseña y/o clave!</a> </b></p>	


								   </div>
			                     </div>

                               
                              
			                   
			                
			    

<br>
						

				
		
	</div>   <!-- cierre row-->

				<br><br><br>

						 
						   


</div>       <!-- cierre container-->












<br>

<?php include ("Footer2.php"); ?>
