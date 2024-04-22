<?php

/* cambiar N2      BB   nt_12   Actividad 2  guardar_1act2  */

$BB_L1_N2 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_1act2']))
        {


$tot_cuenta_L1_N2 = $_POST["conteo_global_L1_N2"];
$count_L1_N2=$tot_cuenta_L1_N2;

include("../../conectar.php");  

    for($i=0;$i<$count_L1_N2;$i++){  // segun el total de filas, hace...



// $BB_L1_N2 = !empty($_POST["BB_L1-N2"][$i]) ? "'$BB_L1_N2'" : "NULL"; 

if ($_POST["BB_L1-N2"][$i] !='') {
  $BB_L1_N2 = $_POST["BB_L1-N2"][$i];
}

if ($_POST["BB_L1-N2"][$i] =='') {
  $BB_L1_N2  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_bb="UPDATE asign_notas 
                        SET nt_12 = $BB_L1_N2                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_bb=mysqli_query($enlace, $sql_del_primer_bb);
       
      }   

 if ($result_primer_bb !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act2- 1er Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 2, del 1er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act2- 1er Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 2, del 1er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>