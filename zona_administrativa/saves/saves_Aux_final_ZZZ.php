<?php





$ZZZ_AuF_final = Null;
$errorZ = '';
$exitoZ = '';


if(isset($_POST['guardar_Aux_final_ZZZ']))
        {


$tot_cuenta_Aux_final_ZZZ = $_POST["conteo_global_Aux_final_ZZZ"];
$count_Aux_final_ZZZ=$tot_cuenta_Aux_final_ZZZ;

include("../../conectar.php");  

    for($i=0;$i<$count_Aux_final_ZZZ;$i++){  // segun el total de filas, hace...



// $ZZZ_AuF_final = !empty($_POST["ZZZ_AuF"][$i]) ? "'$ZZZ_AuF_final'" : "NULL";


if ($_POST["ZZZ_AuF"][$i] !='') {
  $ZZZ_AuF_final = $_POST["ZZZ_AuF"][$i];  
}

if ($_POST["ZZZ_AuF"][$i] =='') {
  $ZZZ_AuF_final  = 'Null';
}


  $la_id_asign_notas = $_POST["id_asign_notas"][$i];

    $sql_del_primer_zz="UPDATE asign_notas 
                        SET nt_AuF = $ZZZ_AuF_final                     

                    WHERE id_asign_notas = '$la_id_asign_notas' ";

    $result_primer_zz=mysqli_query($enlace, $sql_del_primer_zz);
       
      }   

 if ($result_primer_zz !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo -Aux-Final. ";  

echo'<h3 style="font-variant:small-caps; color:red;">No se actualizo correctamente la Nota Auxiliar Final.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';



        mysqli_close($enlace);
               }               

            else{                  

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo -Aux-Final. ";

echo'<h3 style="font-variant:small-caps; color:green;">Se actualizo correctamente la Nota Auxiliar Final.</h3>
  <a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';


              mysqli_close($enlace);
              }





        }   // cierre guardar 1er lapso

?>