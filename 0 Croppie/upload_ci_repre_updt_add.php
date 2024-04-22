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

if(isset($_POST["image3"]))
{
	$data2 = $_POST["image3"];
	
	$image_array_1 = explode(";", $data2);	

	$image_array_2 = explode(",", $image_array_1[1]);	

	$data2 = base64_decode($image_array_2[1]);	

	$imageName3 = 'foto_ci_repre_update_'. $idx . '_' . $nnn . '.png';

	
	

	file_put_contents($imageName3, $data2);   

	echo '<img src=" ../0 Croppie/'.$imageName3.'" class="img-thumbnail mt-2" width="206px" />';

}



?>