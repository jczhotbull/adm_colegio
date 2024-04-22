<?php

/* L3       PP   nt_22     guardar_1act2  */

$PP_L3_N2 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_3act2']))
        {


$tot_cuenta_L3_N2 = $_POST["conteo_global_L3_N2"];
$count_L3_N2=$tot_cuenta_L3_N2;

include("../../conectar.php");  

    for($i=0;$i<$count_L3_N2;$i++){  // segun el total de filas, hace...



// $PP_L3_N2 = !empty($_POST["PP_L3-N2"][$i]) ? "'$PP_L3_N2'" : "NULL"; 

if ($_POST["PP_L3-N2"][$i] !='') {
  $PP_L3_N2 = $_POST["PP_L3-N2"][$i];
}

if ($_POST["PP_L3-N2"][$i] =='') {
  $PP_L3_N2  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_pp="UPDATE asign_notas 
                        SET nt_32 = $PP_L3_N2                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_pp=mysqli_query($enlace, $sql_del_primer_pp);
       
      }   

 if ($result_primer_pp !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act2- 3er Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 2, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act2- 3er Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 2, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>