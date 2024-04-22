<?php

/*  L3      SS   nt_25    guardar_1act5  */

$SS_L3_N5 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_3act5']))
        {


$tot_cuenta_L3_N5 = $_POST["conteo_global_L3_N5"];
$count_L3_N5=$tot_cuenta_L3_N5;

include("../../conectar.php");  

    for($i=0;$i<$count_L3_N5;$i++){  // segun el total de filas, hace...



// $SS_L3_N5 = !empty($_POST["SS_L3-N5"][$i]) ? "'$SS_L3_N5'" : "NULL"; 

if ($_POST["SS_L3-N5"][$i] !='') {
  $SS_L3_N5 = $_POST["SS_L3-N5"][$i];
}

if ($_POST["SS_L3-N5"][$i] =='') {
  $SS_L3_N5  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_ss="UPDATE asign_notas 
                        SET nt_35 = $SS_L3_N5                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_ss=mysqli_query($enlace, $sql_del_primer_ss);
       
      }   

 if ($result_primer_ss !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act2- 3er Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 5, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act2- 3er Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 5, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>