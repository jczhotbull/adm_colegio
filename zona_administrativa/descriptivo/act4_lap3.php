<div class="form-row "> 

<?php

error_reporting(0); //hide php errors

 $rrtt = '0'; 


include("loop43.php");

?>

<table class="table table-sm table-striped">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Estudiantes:</th>
      <th scope="col">Actividad, aprendizaje, contenido u objetivo a lograr:</th>
      <th scope="col">Calificación:</th>
    </tr>

  </thead>



<?php

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

<?php include("act4_lap3a.php"); ?>


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

$el_id_del_es = $row_datos_control_notas_descc["d_34"];


$query_indicador = "SELECT * FROM plantilla_indicadores
               WHERE   id_indicador = '$el_id_del_es' limit 1" ;

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


// para el tipo de evaluación

if ($num_materia == '1') { $este_formato = $row_datos_control_mat_name['a_convertir']; }
if ($num_materia == '2') { $este_formato = $row_datos_control_mat_name['b_convertir']; }
if ($num_materia == '3') { $este_formato = $row_datos_control_mat_name['c_convertir']; }
if ($num_materia == '4') { $este_formato = $row_datos_control_mat_name['d_convertir']; }
if ($num_materia == '5') { $este_formato = $row_datos_control_mat_name['e_convertir']; }
if ($num_materia == '6') { $este_formato = $row_datos_control_mat_name['f_convertir']; }
if ($num_materia == '7') { $este_formato = $row_datos_control_mat_name['g_convertir']; }
if ($num_materia == '8') { $este_formato = $row_datos_control_mat_name['h_convertir']; }
if ($num_materia == '9') { $este_formato = $row_datos_control_mat_name['i_convertir']; }
if ($num_materia == '10') { $este_formato = $row_datos_control_mat_name['j_convertir']; }
if ($num_materia == '11') { $este_formato = $row_datos_control_mat_name['k_convertir']; }
if ($num_materia == '12') { $este_formato = $row_datos_control_mat_name['l_convertir']; }
if ($num_materia == '13') { $este_formato = $row_datos_control_mat_name['m_convertir']; }
if ($num_materia == '14') { $este_formato = $row_datos_control_mat_name['n_convertir']; }



if ($este_formato==1) {
  $dicho_formato_es = 'Numéricos  - Favor Corregir';  
}
if ($este_formato==2) {
  $dicho_formato_es = 'Alfabéticos - Favor Corregir';  
}
if ($este_formato==3) {
  $dicho_formato_es = 'Literales'; 
  $bus_este = 'literal';
}

if ($este_formato==4) {
  $dicho_formato_es = 'Cualitativos';
  $bus_este = 'cualitativa';  
}
 mysqli_close($enlace);


?>




      <td>
      	
 <select class="form-control form-control-sm" id="DC<?php echo $rrtt; $rrtt = $rrtt+1; ?>" name="RR_L3-D4[]" form="save_L3_N4" >
                              
 <option selected value="<?php echo $row_datos_control_indicador["id_indicador"]; ?>">   <?php echo $row_datos_control_indicador["ind_desc"]; ?></option> 

                                <option disabled value=""></option>  
                                <option disabled value="">Descripción del Aprendizaje para <?php echo $suso; ?>:</option>

 <?php 
                          include("../../conectar.php");

$query2_ultraA = "SELECT * FROM plantilla_indicadores where ind_materia = '$suso' and (en_lapso = '3°' OR en_lapso = 'Todos') ORDER BY ind_desc ASC";
$datos_dependientes1_ultraA = mysqli_query($enlace, $query2_ultraA) or die(mysqli_error());
$row_datos_dependientes1_ultraA = mysqli_fetch_assoc($datos_dependientes1_ultraA);
$totalRows_datos_dependientes1_ultraA = mysqli_num_rows($datos_dependientes1_ultraA);

mysqli_close($enlace);
$numb = '';
 ?>


                               <?php do{?>       <?php  $numb = $numb+1;  ?>                              

<option value="<?php echo $row_datos_dependientes1_ultraA['id_indicador']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $numb; ?> -
  <?php echo $row_datos_dependientes1_ultraA['ind_desc']; ?></option>

                                <?php } while ($row_datos_dependientes1_ultraA = mysqli_fetch_assoc($datos_dependientes1_ultraA)); ?> 
                                 <option disabled value=""></option>    
                                   <option value="">Borrar Contenido Descriptivo</option>                   
</select>


      </td>


      <td>    	  

<?php
$ocultar_next = '';
if ($row_datos_control_indicador["id_indicador"] == '') {
   $ocultar_next = 'disabled';
}
?>

 <select class="form-control form-control-sm" id="RR_L3-N4[]" name="RR_L3-N4[]" form="save_L3_N4"  > 
                              
<option selected value="<?php echo $row_datos_control_notas_descc["nt_34"]; ?>">
<?php
 include("../../conectar.php");
if ($row_datos_control_notas_descc["nt_34"] == '') {
    $nay = '';
   echo $nay;
}

else {
$la_nt_34 = $row_datos_control_notas_descc["nt_34"];
$english_f = number_format($la_nt_34, 0, '.', '');

$query2_ultra_detectar = "SELECT * FROM z_formato
 where comparativo <= $english_f
 order by comparativo DESC
limit 1";

$datos_dependientes1_ultra_detectar = mysqli_query($enlace, $query2_ultra_detectar) or die(mysqli_error());
$row_datos_dependientes1_ultra_detectar = mysqli_fetch_assoc($datos_dependientes1_ultra_detectar);
$totalRows_datos_dependientes1_ultra_detectar = mysqli_num_rows($datos_dependientes1_ultra_detectar);
mysqli_close($enlace);

$centro = ' ';
$parent_a = '(';
$parent_b = ')';
echo $row_datos_dependientes1_ultra_detectar[$bus_este]; echo $centro; echo $parent_a; echo $english_f; echo $parent_b;
 }
 ?> 
</option> 
 <option disabled value=""></option>  
<option disabled value="">Indicadores y/o leyendas "<?php echo $dicho_formato_es; ?>":</option>

<?php 
                          include("../../conectar.php");

$query2_ultra = "SELECT * FROM z_formato GROUP BY $bus_este ORDER BY comparativo DESC";
$datos_dependientes1_ultra = mysqli_query($enlace, $query2_ultra) or die(mysqli_error());
$row_datos_dependientes1_ultra = mysqli_fetch_assoc($datos_dependientes1_ultra);
$totalRows_datos_dependientes1_ultra = mysqli_num_rows($datos_dependientes1_ultra);

mysqli_close($enlace);

 ?>
                               <?php do{?>                                

<?php $compa =  $row_datos_dependientes1_ultra['comparativo']+1; ?>
<option <?php // echo $ocultar_next; ?> value="<?php echo $compa; ?>">&nbsp;&nbsp;-
  <?php echo $row_datos_dependientes1_ultra[$bus_este]; ?> ( <?php echo $compa; ?>)</option>

                                <?php } while ($row_datos_dependientes1_ultra = mysqli_fetch_assoc($datos_dependientes1_ultra)); ?> 
                                 <option disabled value=""></option>  
<option value="">Borrar</option>

                                                      
</select>

      </td>


    </tr> 
  
  <?php } while ($row_datos_control_descc = mysqli_fetch_assoc($datos_control_descc)); ?>  
  </tbody>

</table>





</div>