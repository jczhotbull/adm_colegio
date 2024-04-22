<?php

/*  L3       RR   nt_24     guardar_1act4  */

$RR_L3_N4 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_3act4']))
        {


$tot_cuenta_L3_N4 = $_POST["conteo_global_L3_N4"];
$count_L3_N4=$tot_cuenta_L3_N4;

include("../../conectar.php");  

    for($i=0;$i<$count_L3_N4;$i++){  // segun el total de filas, hace...



// $RR_L3_N4 = !empty($_POST["RR_L3-N4"][$i]) ? "'$RR_L3_N4'" : "NULL"; 

if ($_POST["RR_L3-N4"][$i] !='') {
  $RR_L3_N4 = $_POST["RR_L3-N4"][$i];

}

if ($_POST["RR_L3-N4"][$i] =='') {
  $RR_L3_N4 = 'Null';

}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_rr="UPDATE asign_notas 
                        SET nt_34 = $RR_L3_N4                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_rr=mysqli_query($enlace, $sql_del_primer_rr);
       
      }   

 if ($result_primer_rr !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act2- 3er Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 4, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act2- 3er Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 4, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>