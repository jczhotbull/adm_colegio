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

if(isset($_POST["image2"]))
{
	$data2 = $_POST["image2"];
	
	$image_array_1 = explode(";", $data2);	

	$image_array_2 = explode(",", $image_array_1[1]);	

	$data2 = base64_decode($image_array_2[1]);	

	$imageName2 = 'foto_ci_update' . $nnn . '.png';
	

	file_put_contents($imageName2, $data2);   

	echo '<img src=" ../0 Croppie/'.$imageName2.'" class="img-thumbnail mt-1" width="208px" />';

}



?>