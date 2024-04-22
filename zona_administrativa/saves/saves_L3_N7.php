<?php

/* L3       UU   nt_27     guardar_1act7  */

$UU_L3_N7 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_3act7']))
        {


$tot_cuenta_L3_N7 = $_POST["conteo_global_L3_N7"];
$count_L3_N7=$tot_cuenta_L3_N7;

include("../../conectar.php");  

    for($i=0;$i<$count_L3_N7;$i++){  // segun el total de filas, hace...



// $UU_L3_N7 = !empty($_POST["UU_L3-N7"][$i]) ? "'$UU_L3_N7'" : "NULL"; 

if ($_POST["UU_L3-N7"][$i] !='') {
  $UU_L3_N7 = $_POST["UU_L3-N7"][$i];
}

if ($_POST["UU_L3-N7"][$i] =='') {
  $UU_L3_N7  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_uu="UPDATE asign_notas 
                        SET nt_37 = $UU_L3_N7                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_uu=mysqli_query($enlace, $sql_del_primer_uu);
       
      }   

 if ($result_primer_uu !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act2- 3er Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 7, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act2- 3er Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 7, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>