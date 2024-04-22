<?php


/* cambiar N8 -->N8      ZA --> ZA   nt_Au1 --> nt_Au1   Auxiliar --> Auxiliar  guardar_1act8 -->  guardar_1act8  */


$ZA_L1_N8 = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_1act8']))
        {


$tot_cuenta_L1_N8 = $_POST["conteo_global_ZA_Au1"];
$count_L1_N8=$tot_cuenta_L1_N8;

include("../../conectar.php");  

    for($i=0;$i<$count_L1_N8;$i++){  // segun el total de filas, hace...



// $ZA_L1_N8 = !empty($_POST["ZA_Au1"][$i]) ? "'$ZA_L1_N8'" : "NULL"; 

if ($_POST["ZA_Au1"][$i] !='') {
  $ZA_L1_N8 = $_POST["ZA_Au1"][$i];
}

if ($_POST["ZA_Au1"][$i] =='') {
  $ZA_L1_N8  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_Au1="UPDATE asign_notas 
                        SET nt_Au1 = $ZA_L1_N8                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_Au1=mysqli_query($enlace, $sql_del_primer_Au1);
       
      }   

 if ($result_primer_Au1 !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Act1- 1er Lapso. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Nota Auxiliar, del 1er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Act1- 1er Lapso. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Nota Auxiliar, del 1er Lapso.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>