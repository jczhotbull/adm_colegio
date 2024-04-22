

 <div class="form-row col-md-12 col-lg-12">

          <div class="input-group  mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-success" id="basic-addon1"><i>Duplicar <b>"En todos"</b></i></span>  
                    </div>

<select class="form-control" id="ABsource" name="selecc_copy_new" >
  

 <?php 

error_reporting(0); //hide php errors
 

include("../../conectar.php");




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


$query_mat_name_ee = "SELECT * FROM asignatura_ciclo_grado, asignaturas 
         WHERE   asignatura_ciclo_grado.id_asignatura = asignaturas.id_asign
         and asignatura_ciclo_grado.id_del_ciclo = '$el_cicloXX'
         and asignatura_ciclo_grado.id_del_grado = '$el_gradoXX'
                          
         ORDER BY id_asignatura ASC" ;

$datos_control_mat_name_ee = mysqli_query($enlace, $query_mat_name_ee) or die(mysqli_error());
$row_datos_control_mat_name_ee = mysqli_fetch_array($datos_control_mat_name_ee); 
$suso_ee = $row_datos_control_mat_name_ee["$el_nombre_es"];



$query2_ultraAZZ = "SELECT * FROM plantilla_indicadores where ind_materia = '$suso_ee' and (en_lapso = '2°' OR en_lapso = 'Todos') ORDER BY ind_desc ASC";
$datos_dependientes1_ultraAZZ = mysqli_query($enlace, $query2_ultraAZZ) or die(mysqli_error());
$row_datos_dependientes1_ultraAZZ = mysqli_fetch_assoc($datos_dependientes1_ultraAZZ);
$totalRows_datos_dependientes1_ultraAZZ = mysqli_num_rows($datos_dependientes1_ultraAZZ);

mysqli_close($enlace);

$numbZZ = '';

 ?>
 <option selected disabled value="">Seleccionar:</option>
  <option disabled value=""></option>  

                               <?php do{?>          <?php  $numbZZ = $numbZZ+1;  ?>                      

<option value="<?php echo $row_datos_dependientes1_ultraAZZ['id_indicador']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $numbZZ; ?> -
  <?php echo $row_datos_dependientes1_ultraAZZ['ind_desc']; ?></option>

                                <?php } while ($row_datos_dependientes1_ultraAZZ = mysqli_fetch_assoc($datos_dependientes1_ultraAZZ)); ?>  
                             
  <option disabled value=""></option>  
          <option value="">Borrar Contenido Descriptivo</option> 
                            </select>  

                    
          </div>
           

        </div><!-- cierre row -->
