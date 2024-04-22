<?php

/* 
$connect = new PDO("mysql:host=localhost;dbname=bd_colegio", "usuario", "N3Ubq1L6nzJjZn0b");

$acentos = $connect->query("SET NAMES 'utf8'");                    // Necesario para caracteres latinos    */



include("../conectarPDO.php");


if ($division <='50') {

$query = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                            WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                              and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                              and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                              and  id_grupo = '$division'
                              and status = '1'

            ORDER BY nombre_per ASC ";

}





if ($division =='80') {

$query = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '1'
            and status = '1' 

            ORDER BY nombre_per ASC ";
}


if ($division =='82') {

$query = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '2'
            and status = '1' 

            ORDER BY nombre_per ASC ";
}



if ($division =='84') {

$query = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '3'
            and status = '1' 

            ORDER BY nombre_per ASC ";
}



if ($division =='86') {

$query = "SELECT * FROM plantilla_contratados, plantilla_personal, divisiones
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per            
            and plantilla_contratados.id_division = divisiones.id_division            
            and plantilla_contratados.id_division = '6'
            and status = '1' 

            ORDER BY nombre_per ASC ";
}





if ($division =='100') {

$query = "SELECT * FROM plantilla_personal, plantilla_contratados, plantilla_cargos, cargos_all
                            WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
                              and  plantilla_contratados.id_contrato = cargos_all.id_contrato
                              and  plantilla_cargos.id_cargo = cargos_all.id_cargo
                             
                              and status = '1'

                              GROUP BY nombre_per  ";
}









$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();   




?>