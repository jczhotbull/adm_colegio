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

if(isset($_POST["image2"]))
{
	$data = $_POST["image2"];
	
	$image_array_1 = explode(";", $data);	

	$image_array_2 = explode(",", $image_array_1[1]);	

	$data = base64_decode($image_array_2[1]);	

	$imageName2 = 'foto_repre_update_' . $idx . '_' . $nnn . '.png';	

	file_put_contents($imageName2, $data);   

	echo '<img src=" ../0 Croppie/'.$imageName2.'" class="img-thumbnail mt-2" width="160px" />';

}



?>