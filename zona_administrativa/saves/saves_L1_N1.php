<?php

/* cambiar N1      AA   nt_11   Actividad 1  guardar_1act1  */


$AA_L1_N1 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_1act1']))
        {


$tot_cuenta_L1_N1 = $_POST["conteo_global_L1_N1"];
$count_L1_N1=$tot_cuenta_L1_N1;

include("../../conectar.php");  

    for($i=0;$i<$count_L1_N1;$i++){  // segun el total de filas, hace...



// $AA_L1_N1 = !empty($_POST["AA_L1-N1"][$i]) ? "'$AA_L1_N1'" : "NULL"; 

if ($_POST["AA_L1-N1"][$i] !='') {
  $AA_L1_N1 = $_POST["AA_L1-N1"][$i];
}

if ($_POST["AA_L1-N1"][$i] =='') {
  $AA_L1_N1  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_aa="UPDATE asign_notas 
                        SET nt_11 = $AA_L1_N1                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_aa=mysqli_query($enlace, $sql_del_primer_aa);
       
      }   

 if ($result_primer_aa !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act1- 1er Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Actividad 1, del 1er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act1- 1er Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Actividad 1, del 1er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>