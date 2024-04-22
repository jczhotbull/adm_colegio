<?php
ob_start("minifier");
function minifier($code) {
    $search = array(
          
        // Remove whitespaces after tags
        '/\>[^\S ]+/s',
          
        // Remove whitespaces before tags
        '/[^\S ]+\</s',
          
        // Remove multiple whitespace sequences
        '/(\s)+/s',
          
        // Removes comments
        '/<!--(.|\s)*?-->/'
    );
    $replace = array('>', '<', '\\1');
    $code = preg_replace($search, $replace, $code);
    return $code;
}
?>

<!DOCTYPE html>	
<html lang="es">

<head>
	<title>iMagic</title>
	<meta charset="utf-8">
	

	<!-- codigo para Bootstrap 4, beta 3 -->
    <link rel="icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		

	<!-- Bootstrap Nucleo CSS -->
    <link href="0 Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- estilos -->
	<link rel="stylesheet"  href="css/estilos.css" />
	 


	<script> function goBack()    {window.history.back();     } </script> 
	<!-- ayudan con los botones de ir una pagina alante o atras en el footer -->
	<script> function goForward() {window.history.forward();  } </script>


</head>                

 

	<body>  
	

	<header>
			<div class="container">
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
	  					<img src="z_imagenes/logo_new.jpg" class="img-fluid rounded mx-auto d-block">    <!-- imagen responsiva, bordes circulares y alineada al centro-->
					</div>
			 		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
	  					<img src="z_imagenes/banner.jpg" class="img-fluid rounded mx-auto d-block"
	  					onerror="this.src='z_imagenes/banner_vacio.jpg';">    <!-- imagen responsiva, bordes circulares y alineada al centro-->
					</div>
				</div>
			</div>
	</header>
	<br>