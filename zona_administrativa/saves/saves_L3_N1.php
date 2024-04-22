<?php

/* L3       OO   nt_31     guardar_2act1  */


$OO_L3_N1 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_3act1']))
        {


$tot_cuenta_L3_N1 = $_POST["conteo_global_L3_N1"];
$count_L3_N1=$tot_cuenta_L3_N1;

include("../../conectar.php");  

    for($i=0;$i<$count_L3_N1;$i++){  // segun el total de filas, hace...



// $OO_L3_N1 = !empty($_POST["OO_L3-N1"][$i]) ? "'$OO_L3_N1'" : "NULL"; 

if ($_POST["OO_L3-N1"][$i] !='') {
  $OO_L3_N1 = $_POST["OO_L3-N1"][$i];
}


if ($_POST["OO_L3-N1"][$i] =='') {
  $OO_L3_N1 = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_oo="UPDATE asign_notas 
                        SET nt_31 = $OO_L3_N1                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_oo=mysqli_query($enlace, $sql_del_primer_oo);
       
      }   

 if ($result_primer_oo !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act1- 3er Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 1, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act1- 3er Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 1, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>