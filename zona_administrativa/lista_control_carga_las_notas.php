<?php


$query = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$la_seccionXX'
         and  fecha_inscripcion != ''
         and  cursa_actualmente = '$el_cicloXX'

         and  grados.id_grado = '$el_gradoXX' 

        and reg_estudiantes.retirado_si_o_no = '0'

       /*  and retirado_si_o_no = '0' */
       /*  and inscrito_si_o_no = '1' */
                 
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$datos_control = mysqli_query($enlace, $query) or die(mysqli_error());
$row_datos_control = mysqli_fetch_array($datos_control); 
$totalRows_control = mysqli_num_rows($datos_control); 





$query_tot_real = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$la_seccionXX'
         and  fecha_inscripcion != ''
         and  cursa_actualmente = '$el_cicloXX'

         and  grados.id_grado = '$el_gradoXX' 

         and reg_estudiantes.retirado_si_o_no = '0' 
       /*  and inscrito_si_o_no = '1' */
                 
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$datos_control_tot_real = mysqli_query($enlace, $query_tot_real) or die(mysqli_error());
$row_datos_control_tot_real = mysqli_fetch_array($datos_control_tot_real); 
$totalRows_control_tot_real = mysqli_num_rows($datos_control_tot_real); 




mysqli_close($enlace);





?>


 