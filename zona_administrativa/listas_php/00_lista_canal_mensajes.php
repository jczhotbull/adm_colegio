<?php



$query_anun = "SELECT * FROM anuncios

        WHERE flag_anun = '1'  LIMIT 1 ";

          $resultquery_anun = mysqli_query($enlace,$query_anun);
          $fila_query_anun=mysqli_fetch_assoc($resultquery_anun); 


$titulo_anun = $fila_query_anun["titulo_anun"];
$contenido_anun = $fila_query_anun["contenido_anun"];
$flag_anun = $fila_query_anun["flag_anun"];

$fecha_anun = $fila_query_anun["fecha_anun"];






?>