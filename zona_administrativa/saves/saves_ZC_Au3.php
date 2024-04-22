<?php


/*  L3     ZB_Au2 --> ZB_Au2   nt_Au2 --> nt_Au2   Auxiliar --> Auxiliar  guardar_1act8 -->  guardar_2act8  */


$ZC_L3_N8 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_3act8']))
        {


$tot_cuenta_L3_N8 = $_POST["conteo_global_ZC_Au3"];
$count_L3_N8=$tot_cuenta_L3_N8;

include("../../conectar.php");  

    for($i=0;$i<$count_L3_N8;$i++){  // segun el total de filas, hace...



// $ZC_L3_N8 = !empty($_POST["ZC_Au3"][$i]) ? "'$ZC_L3_N8'" : "NULL"; 

if ($_POST["ZC_Au3"][$i] !='') {
  $ZC_L3_N8 = $_POST["ZC_Au3"][$i];
}


if ($_POST["ZC_Au3"][$i] =='') {
  $ZC_L3_N8  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_Au3="UPDATE asign_notas 
                        SET nt_Au3 = $ZC_L3_N8                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_Au3=mysqli_query($enlace, $sql_del_primer_Au3);
       
      }   

 if ($result_primer_Au3 !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act1- 3er Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Nota Auxiliar, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act1- 3er Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Nota Auxiliar, del 3er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>