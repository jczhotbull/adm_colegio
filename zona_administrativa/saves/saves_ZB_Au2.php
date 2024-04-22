<?php


/*  L2     ZB_Au2 --> ZB_Au2   nt_Au2 --> nt_Au2   Auxiliar --> Auxiliar  guardar_1act8 -->  guardar_2act8  */


$ZB_L2_N8 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_2act8']))
        {


$tot_cuenta_L2_N8 = $_POST["conteo_global_ZB_Au2"];
$count_L2_N8=$tot_cuenta_L2_N8;

include("../../conectar.php");  

    for($i=0;$i<$count_L2_N8;$i++){  // segun el total de filas, hace...



// $ZB_L2_N8 = !empty($_POST["ZB_Au2"][$i]) ? "'$ZB_L2_N8'" : "NULL"; 

if ($_POST["ZB_Au2"][$i] !='') {
  $ZB_L2_N8 = $_POST["ZB_Au2"][$i];
}


if ($_POST["ZB_Au2"][$i] =='') {
  $ZB_L2_N8  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_Au2="UPDATE asign_notas 
                        SET nt_Au2 = $ZB_L2_N8                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_Au2=mysqli_query($enlace, $sql_del_primer_Au2);
       
      }   

 if ($result_primer_Au2 !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act1- 2do Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Nota Auxiliar, del 2do Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act1- 2do Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Nota Auxiliar, del 2do Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>