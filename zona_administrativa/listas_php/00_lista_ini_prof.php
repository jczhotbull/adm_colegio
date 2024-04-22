<?php

 
$query_S_profesores = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                            WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                              and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                              and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                              and  id_grupo = '5'
                              and status = '1'
                              Group by ci_per
                               ";

$query_profesores = mysqli_query($enlace, $query_S_profesores);

$row_profesores = mysqli_num_rows($query_profesores);   





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







$query_grupo = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '9'
            and status = '1'            

            GROUP BY ci_per ";

$datos_grupo = mysqli_query($enlace, $query_grupo) or die(mysqli_error());

$row_grupo = mysqli_num_rows($datos_grupo); 







$query_infor = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '16'
            and status = '1'            

            GROUP BY ci_per ";

$datos_infor = mysqli_query($enlace, $query_infor) or die(mysqli_error());

$row_infor = mysqli_num_rows($datos_infor); 






$query_cast = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '2'
            and status = '1'            

            GROUP BY ci_per ";

$datos_cast = mysqli_query($enlace, $query_cast) or die(mysqli_error());

$row_cast = mysqli_num_rows($datos_cast); 






$query_geo = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '22'
            and status = '1'            

            GROUP BY ci_per ";

$datos_geo = mysqli_query($enlace, $query_geo) or die(mysqli_error());

$row_geo = mysqli_num_rows($datos_geo); 





$query_cienc = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '3'
            and status = '1'            

            GROUP BY ci_per ";

$datos_cienc = mysqli_query($enlace, $query_cienc) or die(mysqli_error());

$row_cienc = mysqli_num_rows($datos_cienc); 







$query_artis = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '20'
            and status = '1'            

            GROUP BY ci_per ";

$datos_artis = mysqli_query($enlace, $query_artis) or die(mysqli_error());

$row_artis = mysqli_num_rows($datos_artis); 





$query_edufi = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '18'
            and status = '1'            

            GROUP BY ci_per ";

$datos_edufi = mysqli_query($enlace, $query_edufi) or die(mysqli_error());

$row_edufi = mysqli_num_rows($datos_edufi); 






$query_sport = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '4'
            and status = '1'            

            GROUP BY ci_per ";

$datos_sport = mysqli_query($enlace, $query_sport) or die(mysqli_error());

$row_sport = mysqli_num_rows($datos_sport); 







$query_eco = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '5'
            and status = '1'            

            GROUP BY ci_per ";

$datos_eco = mysqli_query($enlace, $query_eco) or die(mysqli_error());

$row_eco = mysqli_num_rows($datos_eco); 









$query_trab = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '6'
            and status = '1'            

            GROUP BY ci_per ";

$datos_trab = mysqli_query($enlace, $query_trab) or die(mysqli_error());

$row_trab = mysqli_num_rows($datos_trab); 









$query_fps = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '8'
            and status = '1'            

            GROUP BY ci_per ";

$datos_fps = mysqli_query($enlace, $query_fps) or die(mysqli_error());

$row_fps = mysqli_num_rows($datos_fps); 







$query_hist = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '10'
            and status = '1'            

            GROUP BY ci_per ";

$datos_hist = mysqli_query($enlace, $query_hist) or die(mysqli_error());

$row_hist = mysqli_num_rows($datos_hist); 







$query_fisma = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '7'
            and status = '1'            

            GROUP BY ci_per ";

$datos_fisma = mysqli_query($enlace, $query_fisma) or die(mysqli_error());

$row_fisma = mysqli_num_rows($datos_fisma);






$query_idio = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '11'
            and status = '1'            

            GROUP BY ci_per ";

$datos_idio = mysqli_query($enlace, $query_idio) or die(mysqli_error());

$row_idio = mysqli_num_rows($datos_idio);







$query_orien = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '13'
            and status = '1'            

            GROUP BY ci_per ";

$datos_orien = mysqli_query($enlace, $query_orien) or die(mysqli_error());

$row_orien = mysqli_num_rows($datos_orien);






$query_ghc = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '14'
            and status = '1'            

            GROUP BY ci_per ";

$datos_ghc = mysqli_query($enlace, $query_ghc) or die(mysqli_error());

$row_ghc = mysqli_num_rows($datos_ghc);







$query_coro = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '12'
            and status = '1'            

            GROUP BY ci_per ";

$datos_coro = mysqli_query($enlace, $query_coro) or die(mysqli_error());

$row_coro = mysqli_num_rows($datos_coro);






$query_extra = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '15'
            and status = '1'            

            GROUP BY ci_per ";

$datos_extra = mysqli_query($enlace, $query_extra) or die(mysqli_error());

$row_extra = mysqli_num_rows($datos_extra);






$query_bio = "SELECT * FROM plantilla_contratados, plantilla_personal, areas_all, plantilla_areas
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per           

            and plantilla_contratados.id_contrato = areas_all.id_contrato
            and areas_all.id_area = plantilla_areas.id_area 
            and plantilla_areas.id_ramas = '1'
            and status = '1'            

            GROUP BY ci_per ";

$datos_bio = mysqli_query($enlace, $query_bio) or die(mysqli_error());

$row_bio = mysqli_num_rows($datos_bio);









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


?>