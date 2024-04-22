<?php

/* cambiar N3      CC   nt_13   Actividad 3  guardar_1act3  */

$CC_L1_N3 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_1act3']))
        {


$tot_cuenta_L1_N3 = $_POST["conteo_global_L1_N3"];
$count_L1_N3=$tot_cuenta_L1_N3;

include("../../conectar.php");  

    for($i=0;$i<$count_L1_N3;$i++){  // segun el total de filas, hace...



// $CC_L1_N3 = !empty($_POST["CC_L1-N3"][$i]) ? "'$CC_L1_N3'" : "NULL"; 

if ($_POST["CC_L1-N3"][$i] !='') {
  $CC_L1_N3 = $_POST["CC_L1-N3"][$i];
}

if ($_POST["CC_L1-N3"][$i] =='') {
  $CC_L1_N3  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_cc="UPDATE asign_notas 
                        SET nt_13 = $CC_L1_N3                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_cc=mysqli_query($enlace, $sql_del_primer_cc);
       
      }   

 if ($result_primer_cc !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act2- 1er Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 3, del 1er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act2- 1er Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 3, del 1er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>