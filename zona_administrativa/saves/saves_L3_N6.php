<?php

/* L3       TT   nt_26    guardar_1act6  */

$TT_L3_N6 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_3act6']))
        {


$tot_cuenta_L3_N6 = $_POST["conteo_global_L3_N6"];
$count_L3_N6=$tot_cuenta_L3_N6;

include("../../conectar.php");  

    for($i=0;$i<$count_L3_N6;$i++){  // segun el total de filas, hace...



// $TT_L3_N6 = !empty($_POST["TT_L3-N6"][$i]) ? "'$TT_L3_N6'" : "NULL"; 

if ($_POST["TT_L3-N6"][$i] !='') {
  $TT_L3_N6 = $_POST["TT_L3-N6"][$i];
}


if ($_POST["TT_L3-N6"][$i] =='') {
  $TT_L3_N6  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_tt="UPDATE asign_notas 
                        SET nt_36 = $TT_L3_N6                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_tt=mysqli_query($enlace, $sql_del_primer_tt);
       
      }   

 if ($result_primer_tt !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act2- 3er Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 6, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act2- 3er Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 6, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>