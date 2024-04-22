<?php


$img = $_GET['img'];

 ?>


<!doctype html>	
<html lang="es">

<head>
	
	<title>Admin. iMagic2018</title>
    <meta charset="utf-8">


    <link rel="icon" href="print.ico">
   
    <!-- FontAwesome 5  -->
    <script src="../../0 FontAwesome5/all.js"></script>
 
<style>
@media print {
  a[href]:after {
    content: none !important;
  }
}
</style>


</head>



<body onload="window.print();">



<img src="<?php echo $img; ?>">

<br>

<a href="<?php echo $img; ?>" download><button type="button"  class="btn btn-secondary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Descargar</button></a>


           <a href="javascript:window.location.href=window.location.href" ><button type="button"  class="btn btn-secondary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-print"></i>&nbsp;&nbsp; Imprimir</button></a>



</body>