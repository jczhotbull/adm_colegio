<?php

/* cambiar N7      GG   nt_17   Actividad 7  guardar_1act7  */

$GG_L1_N7 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_1act7']))
        {


$tot_cuenta_L1_N7 = $_POST["conteo_global_L1_N7"];
$count_L1_N7=$tot_cuenta_L1_N7;

include("../../conectar.php");  

    for($i=0;$i<$count_L1_N7;$i++){  // segun el total de filas, hace...



// $GG_L1_N7 = !empty($_POST["GG_L1-N7"][$i]) ? "'$GG_L1_N7'" : "NULL"; 

if ($_POST["GG_L1-N7"][$i] !='') {
  $GG_L1_N7 = $_POST["GG_L1-N7"][$i];
}


if ($_POST["GG_L1-N7"][$i] =='') {
  $GG_L1_N7  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_gg="UPDATE asign_notas 
                        SET nt_17 = $GG_L1_N7                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_gg=mysqli_query($enlace, $sql_del_primer_gg);
       
      }   

 if ($result_primer_gg !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act2- 1er Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 7, del 1er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act2- 1er Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 7, del 1er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>