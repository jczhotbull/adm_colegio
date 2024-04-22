<?php

//upload.php

/*
uploadCrop.croppie('result', {
                type: 'canvas',
                size: { width: 450, height: 450 }
                }).then(function (resp) {
                popupResult({
                    src: resp
                });    esto es para indicar otro tamaño*/ 



$nnn = $_GET['namexx'];



if(isset($_POST["imageC"]))
{
	$data = $_POST["imageC"];	

	$image_array_1 = explode(";", $data);	

	$image_array_2 = explode(",", $image_array_1[1]);	

	$data = base64_decode($image_array_2[1]);

	

	$imageName = '../000 Temporales/foto_estu3' . $nnn . '.png';

	

	file_put_contents($imageName, $data);

	/* echo '<img src="'.$directorio.''.$imageName.' " class="img-thumbnail" />';  */

}



?>