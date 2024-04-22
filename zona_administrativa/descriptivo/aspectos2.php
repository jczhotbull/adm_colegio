<div class="form-row "> 



<table class="table table-sm table-bordered">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Estudiantes</th>
      <th style="background-color: #F1F0C3; " scope="col">1</th>
      <th scope="col">2</th>
      <th style="background-color: #F1F0C3; " scope="col">3</th>
      <th scope="col">4</th>
      <th  style="background-color: #F1F0C3; "scope="col">5</th>
      <th scope="col">6</th>
      <th style="background-color: #F1F0C3; " scope="col">7</th>
      <th scope="col">Aspecto a reforzar:</th>
      
    </tr>

  </thead>



<?php

error_reporting(0); //hide php errors

$el_cicloXX = $_GET['ciclosss']; 
$el_gradoXX = $_GET['gradosss'];
$la_seccionXX = $_GET['seccionsss'];  
$num_materia = $_GET['materiasss'];

include("../../conectar.php");

$query_descc = "SELECT * FROM reg_estu_actual, divisiones, grados, reg_estudiantes 
         WHERE   divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual         
         and  id_seccion = '$la_seccionXX'
         and  fecha_inscripcion != ''
         and  cursa_actualmente = '$el_cicloXX'

         and  grados.id_grado = '$el_gradoXX' 

 and reg_estudiantes.retirado_si_o_no = '0' 

       /*  and retirado_si_o_no = '0' */
       /*  and inscrito_si_o_no = '1' */
                 
         GROUP BY reg_estudiantes.id_estud ORDER BY apellidos_estu ASC" ;

$datos_control_descc = mysqli_query($enlace, $query_descc) or die(mysqli_error());
$row_datos_control_descc = mysqli_fetch_array($datos_control_descc); 
$totalRows_control_descc = mysqli_num_rows($datos_control_descc); 

mysqli_close($enlace);

?>




<?php $mmaa=1; ?>
  <tbody>  
  <?php do{?> 

    <tr>
      <th scope="row"><?php echo $mmaa; $mmaa=$mmaa+1; ?></th>


      <td>
      	<b>               
<?php   
$firstape = strtok($row_datos_control_descc['apellidos_estu'], ' ');
$lastape = strstr($row_datos_control_descc['apellidos_estu'], ' ');

if ($lastape[1] != '') {
   $firstCharacterlastape = $lastape[1]; 
}

else {
    $firstCharacterlastape ='';
}
   
 echo $firstape; ?> <?php echo $firstCharacterlastape; ?>.</b>

<?php 

$firstnam = strtok($row_datos_control_descc['nombre_estu'], ' ');
$lastnam = strstr($row_datos_control_descc['nombre_estu'], ' ');
$firstCharacterlastnam = $lastnam[1];    
                                     echo $firstnam; ?> <?php echo $firstCharacterlastnam; ?>.   

<?php  if ( $row_datos_control_descc['retirado_si_o_no'] == '1') {
      $resultiBB = '<b><span style="color:purple;"> -"RET"</span></b>'; 
      echo $resultiBB;
    }   ?>

      </td>


<?php 
$el_reg_del_est_es = $row_datos_control_descc['id_reg_estu_actual'];
$el_dicho_id_e = $row_datos_control_descc['id_estud'];

include("../../conectar.php");
$query_notas_descc = "SELECT * FROM asign_notas
               WHERE   asign_notas.id_reg_estu_actual = '$el_reg_del_est_es'
               and asign_notas.id_estud = '$el_dicho_id_e'
               and asign_notas.materia = '$num_materia'
                 
               GROUP BY asign_notas.id_asign_notas limit 1" ;

$datos_control_notas_descc = mysqli_query($enlace, $query_notas_descc) or die(mysqli_error());
$row_datos_control_notas_descc = mysqli_fetch_array($datos_control_notas_descc); 

$el_id_del_es = $row_datos_control_notas_descc["asp_2"];

$query_indicador = "SELECT * FROM plantilla_reforzar
               WHERE   id_reforzar = '$el_id_del_es' limit 1" ;

$datos_control_indicador = mysqli_query($enlace, $query_indicador) or die(mysqli_error());
$row_datos_control_indicador = mysqli_fetch_array($datos_control_indicador); 

$el_nombre_es = '';

if ($num_materia == '1') { $el_nombre_es = 'a_aaa';}
if ($num_materia == '2') { $el_nombre_es = 'b_bbb';}
if ($num_materia == '3') { $el_nombre_es = 'c_ccc';}
if ($num_materia == '4') { $el_nombre_es = 'd_ddd';}
if ($num_materia == '5') { $el_nombre_es = 'e_eee';}
if ($num_materia == '6') { $el_nombre_es = 'f_fff';}
if ($num_materia == '7') { $el_nombre_es = 'g_ggg';}
if ($num_materia == '8') { $el_nombre_es = 'h_hhh';}
if ($num_materia == '9') { $el_nombre_es = 'i_iii';}
if ($num_materia == '10') { $el_nombre_es = 'j_jjj';}
if ($num_materia == '11') { $el_nombre_es = 'k_kkk';}
if ($num_materia == '12') { $el_nombre_es = 'l_lll';}
if ($num_materia == '13') { $el_nombre_es = 'm_mmm';}
if ($num_materia == '14') { $el_nombre_es = 'n_nnn';}  // si lo identifica

$query_mat_name = "SELECT * FROM asignatura_ciclo_grado, asignaturas 
         WHERE   asignatura_ciclo_grado.id_asignatura = asignaturas.id_asign
         and asignatura_ciclo_grado.id_del_ciclo = '$el_cicloXX'
         and asignatura_ciclo_grado.id_del_grado = '$el_gradoXX'
                          
         ORDER BY id_asignatura ASC" ;

$datos_control_mat_name = mysqli_query($enlace, $query_mat_name) or die(mysqli_error());
$row_datos_control_mat_name = mysqli_fetch_array($datos_control_mat_name); 
$suso = $row_datos_control_mat_name["$el_nombre_es"];

 mysqli_close($enlace);
?>



<td  style="background-color: #F1F0C3; " class="table-info" align="center">
<?php echo $row_datos_control_notas_descc["nt_21"]; ?>
</td>


<td align="center">
<?php echo $row_datos_control_notas_descc["nt_22"]; ?>
</td>

<td  style="background-color: #F1F0C3; " align="center">
<?php echo $row_datos_control_notas_descc["nt_23"]; ?>
</td>

<td align="center">
<?php echo $row_datos_control_notas_descc["nt_24"]; ?>
</td>

<td  style="background-color: #F1F0C3; " align="center">
<?php echo $row_datos_control_notas_descc["nt_25"]; ?>
</td>


<td align="center">
<?php echo $row_datos_control_notas_descc["nt_26"]; ?>
</td>


<td  style="background-color: #F1F0C3; " align="center">
<?php echo $row_datos_control_notas_descc["nt_27"]; ?>
</td>











 




      <td>
      	
 <select class="form-control form-control-sm" id="AA_L2-Asp2[]" name="AA_L2-Asp2[]" form="save_aspectos_L2" >
                              
 <option selected value="<?php echo $row_datos_control_indicador["id_reforzar"]; ?>">   <?php echo $row_datos_control_indicador["ind_refuerza"]; ?></option>  
<option disabled value=""></option>  
                                <option disabled value="">Aprendizajes a reforzar para <?php echo $suso; ?>:</option>

 <?php 
                         



include("../../conectar.php");

$query2_ultraA = "SELECT * FROM plantilla_reforzar where ind_materiax = '$suso' and (este_lapso = '2°' OR este_lapso = 'Todos') ORDER BY ind_refuerza ASC";
$datos_dependientes1_ultraA = mysqli_query($enlace, $query2_ultraA) or die(mysqli_error());
$row_datos_dependientes1_ultraA = mysqli_fetch_assoc($datos_dependientes1_ultraA);
$totalRows_datos_dependientes1_ultraA = mysqli_num_rows($datos_dependientes1_ultraA);

mysqli_close($enlace);
$numb = '';
 ?>


                               <?php do{?>           <?php  $numb = $numb+1;  ?>                       

<option value="<?php echo $row_datos_dependientes1_ultraA['id_reforzar']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $numb; ?> -
  <?php echo $row_datos_dependientes1_ultraA['ind_refuerza']; ?></option>

                                <?php } while ($row_datos_dependientes1_ultraA = mysqli_fetch_assoc($datos_dependientes1_ultraA)); ?>   
           <option disabled value=""></option>  
          <option value="">Borrar Aspecto A reforzar</option>                                             
</select>


      </td>


         


    </tr> 
  
  <?php } while ($row_datos_control_descc = mysqli_fetch_assoc($datos_control_descc)); ?>  
  </tbody>

</table>





</div>