<?php


session_start();

header("Content-type: text/html;charset=\"utf-8\"");                  // Necesario para caracteres latinos

	$errorZ="";  // acumula los mensajes de error
	$infoZ="";  // acumula los mensajes de información
	$exitoZ="";  // acumula los mensajes de éxito

	

  $_SESSION ['apellidos_M']="";// inicializa la seccion apellido que me da acceso a la pagina en donde
                               // coloco la contraseña de esta manera si estoy en dicha pagina
                               // y voy a otro lado desde ella, la seccion dejara de ser valida.




include("boletin.php");






	if ($_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario' && $_SESSION ['cargo'] != 'Cajero' && $_SESSION ['cargo'] != 'Profesor' )

		{

			session_unset();                     // libera todas las variables de sessión
		    setcookie("id", "", time()-60*60);   // crea la cookie id con el valor vacio y que caduque una hora antes.
		    $_COOKIE ['id']="";                  // borra el valor de id contenido en el cookie, por medida extra

		    setcookie("cargo", "", time()-60*60);   // crea la cookie cargo con el valor vacio y que caduque una hora antes.
		    $_COOKIE ['cargo']="";                  // borra el valor de cargo contenido en el cookie, por medida extra

		    header("Location: ../index.php");

		}


	if (array_key_exists("id", $_COOKIE)) // si existe la clave id para mi array cookie... (solo sucede si se indico que mantenga la sesión)
	   {
	   	$_SESSION ['id'] = $_COOKIE ['id'];   //  Guarda el valor del id de la cookie como valor de id de la session...
       }

	if (array_key_exists("id",$_SESSION))    // si existe la clave id para mi array session, realizar...
		{

		include("../conectar.php");
		

		$nombre = "SELECT * FROM usuarios WHERE id = ' ".$_SESSION['id']." ' ";        

					$resultC = mysqli_query($enlace,$nombre);
					$nnn=mysqli_fetch_array($resultC);                /* antes en select tenia nombres */		




	if ($_SESSION ['cargo'] == 'Administrador' )

		{
			$abrev = "Admin.";
		}


		if ($_SESSION ['cargo'] == 'Secretario' )

		{
			$abrev = "Secre.";
		}


		if ($_SESSION ['cargo'] == 'Profesor' )

		{
			$abrev = "Prof.";
		}


		if ($_SESSION ['cargo'] == 'Cajero' )

		{
			$abrev = "Caja.";
		}


    $infoZ .= "&nbsp;&nbsp;<i class=\"textadmin\"><i class=\"far fa-id-badge\"></i> &nbsp; &nbsp; ".$abrev."</i> &nbsp;" . $nnn['nombres'] . "";
		

		  // &nbsp; &nbsp; &nbsp; &nbsp; <b> <a href='index.php? Logout=1'> \" Cerrar Sesión \" </a> </b></p>

		 // print_r($_COOKIE ['cargo']); // sirve para imprimir      $_SESSION['cargo']    $_COOKIE ['cargo']
		mysqli_close($enlace);

	    }

    else   // si no estan esas dos comprobaciones echas, se manda a autenticar...
    {
    	mysqli_close($enlace);
    	header("Location: ../index.php");
    }




?>