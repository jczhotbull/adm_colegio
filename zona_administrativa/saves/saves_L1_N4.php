<?php

/* cambiar N4      DD   nt_14   Actividad 4  guardar_1act4  */

$DD_L1_N4 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_1act4']))
        {


$tot_cuenta_L1_N4 = $_POST["conteo_global_L1_N4"];
$count_L1_N4=$tot_cuenta_L1_N4;

include("../../conectar.php");  

    for($i=0;$i<$count_L1_N4;$i++){  // segun el total de filas, hace...



// $DD_L1_N4 = !empty($_POST["DD_L1-N4"][$i]) ? "'$DD_L1_N4'" : "NULL"; 

if ($_POST["DD_L1-N4"][$i] !='') {
  $DD_L1_N4 = $_POST["DD_L1-N4"][$i];
}

if ($_POST["DD_L1-N4"][$i] =='') {
  $DD_L1_N4  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_dd="UPDATE asign_notas 
                        SET nt_14 = $DD_L1_N4                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_dd=mysqli_query($enlace, $sql_del_primer_dd);
       
      }   

 if ($result_primer_dd !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act2- 1er Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 4, del 1er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act2- 1er Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 4, del 1er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>