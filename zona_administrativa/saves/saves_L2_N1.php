<?php

/* L2       HH   nt_21     guardar_2act1  */


$HH_L2_N1 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_2act1']))
        {


$tot_cuenta_L2_N1 = $_POST["conteo_global_L2_N1"];
$count_L2_N1=$tot_cuenta_L2_N1;

include("../../conectar.php");  

    for($i=0;$i<$count_L2_N1;$i++){  // segun el total de filas, hace...



// $HH_L2_N1 = !empty($_POST["HH_L2-N1"][$i]) ? "'$HH_L2_N1'" : "NULL"; 

if ($_POST["HH_L2-N1"][$i] !='') {
  $HH_L2_N1 = $_POST["HH_L2-N1"][$i];
}


if ($_POST["HH_L2-N1"][$i] =='') {
  $HH_L2_N1  = 'Null';
}



  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_hh="UPDATE asign_notas 
                        SET nt_21 = $HH_L2_N1                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_hh=mysqli_query($enlace, $sql_del_primer_hh);
       
      }   

 if ($result_primer_hh !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act1- 2do Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 1, del 2do Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act1- 2do Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 1, del 2do Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>