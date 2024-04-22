<?php

/* L2       MM   nt_26    guardar_1act6  */

$MM_L2_N6 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_2act6']))
        {


$tot_cuenta_L2_N6 = $_POST["conteo_global_L2_N6"];
$count_L2_N6=$tot_cuenta_L2_N6;

include("../../conectar.php");  

    for($i=0;$i<$count_L2_N6;$i++){  // segun el total de filas, hace...



// $MM_L2_N6 = !empty($_POST["MM_L2-N6"][$i]) ? "'$MM_L2_N6'" : "NULL"; 

if ($_POST["MM_L2-N6"][$i] !='') {
  $MM_L2_N6 = $_POST["MM_L2-N6"][$i];
}

if ($_POST["MM_L2-N6"][$i] =='') {
  $MM_L2_N6 = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_mm="UPDATE asign_notas 
                        SET nt_26 = $MM_L2_N6                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_mm=mysqli_query($enlace, $sql_del_primer_mm);
       
      }   

 if ($result_primer_mm !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act2- 2do Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 6, del 2do Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act2- 2do Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 6, del 2do Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>