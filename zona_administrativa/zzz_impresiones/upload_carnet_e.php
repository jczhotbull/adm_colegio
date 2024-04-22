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

	$imageName = 'carnet_alt' . '.jpg';	

	file_put_contents($imageName, $data);



	$srcfile='carnet_alt.jpg';
	$dstfile='../../zona_representantes/zzz_impresiones/carnet_alt.jpg';
	
	copy($srcfile, $dstfile);



/* echo '<img src="'.$directorio.''.$imageName.' " class="img-thumbnail" />';  */

	$imageXX = imagecreatefrompng("carnet_alt" .  ".jpg");  
					         //  unlink("carnet_a" .  ".jpg");
					        //   imagejpeg($imageXX,"carnet_alt" .  ".jpg",95); // comprime la imagen  
						
					
	

}



?>