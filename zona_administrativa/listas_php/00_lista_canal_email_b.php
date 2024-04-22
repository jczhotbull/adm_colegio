<?php

/*
$connect = new PDO("mysql:host=localhost;dbname=bd_colegio", "usuario", "N3Ubq1L6nzJjZn0b");

$acentos = $connect->query("SET NAMES 'utf8'");                    // Necesario para caracteres latinos  */

include("../conectarPDO.php");



$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  status = '1' and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);


$id_periodo_clave =  $row_datos_periodo_actual['id_periodo_es'];



if ($division =='1') {

$query = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '1'
         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '$gradito'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

}



if ($division =='2') {

$query = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '2'
         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '$gradito'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

}




if ($division =='9') {

$query = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '9'
         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '$gradito'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

}



if ($division =='11') {

$query = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '11'
         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '$gradito'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

}


if ($division =='12') {

$query = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '12'
         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '$gradito'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

}


if ($division =='13') {

$query = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '13'
         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '$gradito'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

}


if ($division =='14') {

$query = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '14'
         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '$gradito'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

}


if ($division =='15') {

$query = "SELECT * FROM reg_estu_actual, reg_estu_repre_all, reg_representante, reg_estudiantes 
         WHERE   reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
         and reg_estu_repre_all.id_repre = reg_representante.id_repre
         and  id_seccion = '15'
         
         and  cursa_actualmente = '$id_periodo_clave'
         and  grado_actual = '$gradito'
         and reg_representante.email_repre !=''
         and retirado_si_o_no = '0'        
         GROUP BY reg_estudiantes.apellidos_estu ";

}










$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();




?>