<?php

$query = "SELECT * FROM plantilla_contratados, plantilla_personal, sexo, divisiones, grados
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
           
           
            and sexo.id_sexo = plantilla_personal.id_sexo
                      
            and plantilla_contratados.id_division = divisiones.id_division
            and plantilla_contratados.id_plant_grados = grados.id_grado 
            and plantilla_contratados.id_division = '2'
            and status = '1'            

            ORDER BY nombre_per ASC ";

$datos_plantilla = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_plantilla = mysqli_fetch_array($datos_plantilla); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_plantilla = mysqli_num_rows($datos_plantilla); 




			



mysqli_close($enlace);





?>


 