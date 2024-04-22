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
$idx = $_GET['idexx'];


if(isset($_POST["imageA"]))
{
	$data = $_POST["imageA"];	

	$image_array_1 = explode(";", $data);	

	$image_array_2 = explode(",", $image_array_1[1]);	

	$data = base64_decode($image_array_2[1]);	

	$imageName = 'foto_estu_update_' . $idx . '_' . $nnn . '.png';	

	file_put_contents($imageName, $data);

	/* echo '<img src="'.$directorio.''.$imageName.' " class="img-thumbnail" />';  */

}



?>