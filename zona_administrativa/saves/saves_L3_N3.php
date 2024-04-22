<?php

/* L3       QQ   nt_23     guardar_1act3  */

$QQ_L3_N3 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_3act3']))
        {


$tot_cuenta_L3_N3 = $_POST["conteo_global_L3_N3"];
$count_L3_N3=$tot_cuenta_L3_N3;

include("../../conectar.php");  

    for($i=0;$i<$count_L3_N3;$i++){  // segun el total de filas, hace...



// $QQ_L3_N3 = !empty($_POST["QQ_L3-N3"][$i]) ? "'$QQ_L3_N3'" : "NULL"; 

if ($_POST["QQ_L3-N3"][$i] !='') {
  $QQ_L3_N3 = $_POST["QQ_L3-N3"][$i];
}


if ($_POST["QQ_L3-N3"][$i] =='') {
  $QQ_L3_N3  = 'Null';
}




  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_qq="UPDATE asign_notas 
                        SET nt_33 = $QQ_L3_N3                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_qq=mysqli_query($enlace, $sql_del_primer_qq);
       
      }   

 if ($result_primer_qq !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act2- 3er Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 3, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act2- 3er Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 3, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>