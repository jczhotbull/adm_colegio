<?php


	$query_String_plantilla = "SELECT * FROM plantilla_contratados WHERE status ='1' ";

        $query_plantilla = mysqli_query($enlace, $query_String_plantilla);

        $totalRows_query_plantilla = mysqli_num_rows($query_plantilla); 

        $media =  ceil($totalRows_query_plantilla/3);



$query = "SELECT * FROM plantilla_contratados, plantilla_personal, sexo, divisiones, grados
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
        
           
            
            and sexo.id_sexo = plantilla_personal.id_sexo
                     
            and plantilla_contratados.id_division = divisiones.id_division
            and plantilla_contratados.id_plant_grados = grados.id_grado             
            
            and status = '1'            

            ORDER BY contratado_desde ASC LIMIT $media ";

$datos_plantilla = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_plantilla = mysqli_fetch_array($datos_plantilla); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_plantilla = mysqli_num_rows($datos_plantilla); 




			



mysqli_close($enlace);





?>


 