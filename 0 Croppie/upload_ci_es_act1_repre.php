<?php



$nnn = $_GET['namexx'];



if(isset($_POST["image2"]))
{
	$data = $_POST["image2"];	

	$image_array_1 = explode(";", $data);	

	$image_array_2 = explode(",", $image_array_1[1]);	

	$data = base64_decode($image_array_2[1]);

	

	$imageName = '../000 Temporales/ci_est_act1' . $nnn . '.png';

	

	file_put_contents($imageName, $data);

	/* echo '<img src="'.$directorio.''.$imageName.' " class="img-thumbnail" />';  */

}



?>