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

if(isset($_POST["image"]))
{
	$data = $_POST["image"];
	
	$image_array_1 = explode(";", $data);	

	$image_array_2 = explode(",", $image_array_1[1]);	

	$data = base64_decode($image_array_2[1]);	

	$imageName = 'foto_per_update' . $nnn . '.png';	

	file_put_contents($imageName, $data);   

	echo '<img src=" ../0 Croppie/'.$imageName.'?nocache=<?php echo time(); ?>" class="img-thumbnail mt-1" width="122px" />';

}



?>