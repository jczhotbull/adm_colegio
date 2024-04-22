<?php

	$queryString = "SELECT COUNT(*) AS total FROM usuarios WHERE nombres != 'Representante' and cargo != 'Representante'";

        $queryt = mysqli_query($enlace, $queryString);

        $rowt = mysqli_fetch_object($queryt);

      






$query_String_profesores = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                            WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                              and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                              and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                              and  id_grupo = '5'
                              and status = '1'
                              Group by ci_per
                               ";

 $query_profesores = mysqli_query($enlace, $query_String_profesores);

        $row_profesores = mysqli_num_rows($query_profesores);   







        

$query_String_cumplen = "SELECT COUNT(*) AS total FROM plantilla_personal, plantilla_contratados
WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
and status ='1'
and day(nacimiento_per)=day(NOW()) 
and month(nacimiento_per)=month(NOW())";

$query_cumplen = mysqli_query($enlace, $query_String_cumplen);

$row_cumplen = mysqli_fetch_object($query_cumplen);  





$query_Inicial = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '1'
            and status = '1'            

            GROUP BY ci_per";

$datos_Inicial = mysqli_query($enlace, $query_Inicial) or die(mysqli_error());

$row_Inicial = mysqli_num_rows($datos_Inicial); 






$query_Basica = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '2'
            and status = '1'            

            GROUP BY ci_per";

$datos_Basica = mysqli_query($enlace, $query_Basica) or die(mysqli_error());

$row_Basica = mysqli_num_rows($datos_Basica); 





$query_Media = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '3'
            and status = '1'            

            GROUP BY ci_per";

$datos_Media = mysqli_query($enlace, $query_Media) or die(mysqli_error());

$row_Media = mysqli_num_rows($datos_Media); 








 $query_String_hombres = "SELECT COUNT(*) AS total FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                            WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                              and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                              and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                              and id_sexo ='2'
                              and  id_grupo = '5'
                              and status = '1'
                              Group by ci_per
                               ";

$query_hombres = mysqli_query($enlace, $query_String_hombres);

$row_hombres = mysqli_fetch_object($query_hombres);
$total_hhh = mysqli_num_rows($query_hombres); 



 $query_String_mujeres = "SELECT COUNT(*) AS total FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                            WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                              and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                              and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                              and id_sexo ='1'
                              and  id_grupo = '5'
                              and status = '1'
                              Group by ci_per
                               ";

$query_mujeres = mysqli_query($enlace, $query_String_mujeres);

$row_mujeres = mysqli_fetch_object($query_mujeres);
$total_mmm = mysqli_num_rows($query_mujeres); 




$query_Inicial_H = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '1'
            and status = '1'
            and id_sexo ='2'            

            GROUP BY ci_per";

$datos_Inicial_H = mysqli_query($enlace, $query_Inicial_H) or die(mysqli_error());

$row_Inicial_H = mysqli_num_rows($datos_Inicial_H); 




$query_Inicial_M = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '1'
            and status = '1'
            and id_sexo ='1'            

            GROUP BY ci_per";

$datos_Inicial_M = mysqli_query($enlace, $query_Inicial_M) or die(mysqli_error());

$row_Inicial_M = mysqli_num_rows($datos_Inicial_M); 





$query_Basica_H = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '2'
            and status = '1'
            and id_sexo ='2'            

            GROUP BY ci_per";

$datos_Basica_H = mysqli_query($enlace, $query_Basica_H) or die(mysqli_error());

$row_Basica_H = mysqli_num_rows($datos_Basica_H); 



$query_Basica_M = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '2'
            and status = '1'
            and id_sexo ='1'            

            GROUP BY ci_per";

$datos_Basica_M = mysqli_query($enlace, $query_Basica_M) or die(mysqli_error());

$row_Basica_M = mysqli_num_rows($datos_Basica_M); 






$query_Media_H = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '3'
            and status = '1' 
            and id_sexo ='2'            

            GROUP BY ci_per";

$datos_Media_H = mysqli_query($enlace, $query_Media_H) or die(mysqli_error());

$row_Media_H = mysqli_num_rows($datos_Media_H); 





$query_Media_M = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '3'
            and status = '1'
            and id_sexo ='1'             

            GROUP BY ci_per";

$datos_Media_M = mysqli_query($enlace, $query_Media_M) or die(mysqli_error());

$row_Media_M = mysqli_num_rows($datos_Media_M); 



$query_Espe = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '6'
            and status = '1'            

            GROUP BY ci_per";

$datos_Espe = mysqli_query($enlace, $query_Espe) or die(mysqli_error());

$row_Espe = mysqli_num_rows($datos_Espe); 




$query_TD = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '7'
            and status = '1'            

            GROUP BY ci_per";

$datos_TD = mysqli_query($enlace, $query_TD) or die(mysqli_error());

$row_TD = mysqli_num_rows($datos_TD); 




$query_Espe_H = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '6'
            and status = '1'
            and id_sexo ='2'            

            GROUP BY ci_per";

$datos_Espe_H = mysqli_query($enlace, $query_Espe_H) or die(mysqli_error());

$row_Espe_H = mysqli_num_rows($datos_Espe_H); 




$query_Espe_M = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '6'
            and status = '1'
            and id_sexo ='1'            

            GROUP BY ci_per";

$datos_Espe_M = mysqli_query($enlace, $query_Espe_M) or die(mysqli_error());

$row_Espe_M = mysqli_num_rows($datos_Espe_M); 
















$query_anun = "SELECT * FROM anuncios

        WHERE flag_anun = '1'  LIMIT 1 ";

          $resultquery_anun = mysqli_query($enlace,$query_anun);
          $fila_query_anun=mysqli_fetch_assoc($resultquery_anun); 


$titulo_anun = $fila_query_anun["titulo_anun"];
$contenido_anun = $fila_query_anun["contenido_anun"];
$flag_anun = $fila_query_anun["flag_anun"];






?>