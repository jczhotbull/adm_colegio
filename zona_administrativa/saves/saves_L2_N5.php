<?php

/*  L2      LL   nt_25    guardar_1act5  */

$LL_L2_N5 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_2act5']))
        {


$tot_cuenta_L2_N5 = $_POST["conteo_global_L2_N5"];
$count_L2_N5=$tot_cuenta_L2_N5;

include("../../conectar.php");  

    for($i=0;$i<$count_L2_N5;$i++){  // segun el total de filas, hace...



// $LL_L2_N5 = !empty($_POST["LL_L2-N5"][$i]) ? "'$LL_L2_N5'" : "NULL"; 

if ($_POST["LL_L2-N5"][$i] !='') {
  $LL_L2_N5 = $_POST["LL_L2-N5"][$i];
}


if ($_POST["LL_L2-N5"][$i] =='') {
  $LL_L2_N5 = 'Null';
}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_ll="UPDATE asign_notas 
                        SET nt_25 = $LL_L2_N5                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_ll=mysqli_query($enlace, $sql_del_primer_ll);
       
      }   

 if ($result_primer_ll !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act2- 2do Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 5, del 2do Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act2- 2do Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 5, del 2do Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>