<?php

$id_del_estudiante = $row_datos_plantilla_estud['id_estud'];
include("../conectar.php"); 

$reg_estu_actual = "SELECT * FROM temporada_escolar, grados, respuestas, edades, tall_cam, tall_pant, tall_zap, pesos, alturas, reg_estu_actual  
           WHERE  temporada_escolar.id_periodo_es = reg_estu_actual.cursa_actualmente
             and  grados.id_grado  = reg_estu_actual.grado_actual
             and  respuestas.id_respuesta  = reg_estu_actual.repite_actual
             and  edades.id_edad  = reg_estu_actual.edad_actual
             and  tall_cam.id_camisa = reg_estu_actual.t_camisa_act
             and  tall_pant.id_pantalon = reg_estu_actual.t_pantalon_act
             and  tall_zap.id_zapato = reg_estu_actual.t_zapatos_act
             and  pesos.id_peso = reg_estu_actual.peso_act
             and  alturas.id_altura = reg_estu_actual.estatura_act
             and reg_estu_actual.id_seccion != '8'
             and id_estud = '$id_del_estudiante'
          ORDER BY id_reg_estu_actual ASC";

$q_reg_estu_actual = mysqli_query($enlace, $reg_estu_actual) or die(mysqli_error());
$row_q_reg_estu_actual = mysqli_fetch_assoc($q_reg_estu_actual);
$totalRows_q_reg_estu_actual = mysqli_num_rows($q_reg_estu_actual);    // d_piso y d_numero no usados   
 
mysqli_close($enlace);

$row_es = '1';
$eliminar_hab = 'none';


?>








  <div class="form-row">  <!-- row cero-->
                  <div class="col-md-12 text-left mt-3 mb-2">
                  <b class="text-info"> Historial del Alumno:</b>
                  </div>
  </div>




<table class="table table-bordered table-sm">

    <thead class="text-muted">

      <tr>

        <th class="">Periodo_escolar</th>
        <th class="">Grado/Año</th>
        <th class="">Repite?</th>
        <th class="">Fecha Inscrip.</th>
        <th class="">Edad</th>
        <th class="">T. Camisa</th>
        <th class="">T. Pantalón</th>
        <th class="">T. Zapatos</th>
        <th class="">Peso_(kg)</th>
        <th class="">Esta._(cms)</th>
        <th class=""><span style="color: red;"> <i class="far fa-trash-alt fa-lg"></i></span></th>            

      </tr>
    </thead>








 <input type="hidden" id="id_del_estu_historial"  name="id_del_estu_historial"
    value="<?php echo $id_del_estudiante; ?>">  <!-- para poder procesar -->



 <input type="hidden" id="total_historial"  name="total_historial"
    value="<?php echo $totalRows_q_reg_estu_actual; ?>">  <!-- para saber cuantas filas hay para este estudiante -->




    <tbody>

      <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->

      <tr>

      <td class="align-middle" align="center">





 <input type="hidden" id="id_reg_estu_actual"  name="id_reg_estu_actual[]"
    value="<?php echo $row_q_reg_estu_actual['id_reg_estu_actual']; ?>">  <!-- para saber el id de esta fila -->


 <input type="hidden" id="nombre_periodo_eliminar"  name="nombre_periodo_eliminar[]"
    value="<?php echo $row_q_reg_estu_actual['periodo_escolar']; ?>">  <!-- para saber el id de esta fila -->


        <select class="form-control form-control-sm" id="mod_ciclo" name="mod_ciclo[]">

<option value="<?php echo $row_q_reg_estu_actual['id_periodo_es']; ?>" selected><?php echo $row_q_reg_estu_actual['periodo_escolar']; ?></option>
<option disabled></option>

                                <optgroup label="! No editable ¡">
                                <option disabled></option>
<!--

<?php 


  include("../conectar.php");


  $q_ciclo = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar ASC";

  $d_ciclo = mysqli_query($enlace, $q_ciclo) or die(mysqli_error());

  $r_d_ciclo = mysqli_num_rows($d_ciclo);  


  while ($r_d_ciclo = mysqli_fetch_assoc($d_ciclo))
                                {                            
      ?>
          <option value = "<?php echo $r_d_ciclo['id_periodo_es']; ?>"><?php echo $r_d_ciclo['periodo_escolar'];?></option>
      <?php
                                } 

          

?>    -->                                 
                                 
        </select>  

    </td>





          <td class="align-middle" align="center">

        <select class="form-control form-control-sm" id="mod_grados" name="mod_grados[]">

<option value="<?php echo $row_q_reg_estu_actual['id_grado']; ?>" selected><?php echo $row_q_reg_estu_actual['nombre_grados']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>                                

<?php 


  $q_grados = "SELECT * FROM grados WHERE nombre_grados != '.' and nombre_grados != '1er y 2do año' and nombre_grados != '2do y 3er año'
  and nombre_grados != '3er y 4to año' and nombre_grados != '4to y 5to año' and nombre_grados != 'Educación Inicial' 
  and nombre_grados != 'Todos' and nombre_grados != 'Pre Escolar' and nombre_grados != 'Varios Básica'
  and nombre_grados != 'Varios Básica y Media' and nombre_grados != 'Varios Media' and nombre_grados != 'Varios Media General'
  and nombre_grados != 'Zero, no aplica' ORDER BY id_grado ASC";

  $d_grados = mysqli_query($enlace, $q_grados) or die(mysqli_error());

  $r_d_grados = mysqli_num_rows($d_grados);  


  while ($r_d_grados = mysqli_fetch_assoc($d_grados))
                                {                            
      ?>
          <option value = "<?php echo $r_d_grados['id_grado']; ?>"><?php echo $r_d_grados['nombre_grados'];?></option>
      <?php
                                } 
        

?> 

                    
          </select>  

    </td>






    <td class="align-middle" align="center">

        <select class="form-control form-control-sm" id="mod_repitiente" name="mod_repitiente[]">

<option value="<?php echo $row_q_reg_estu_actual['id_respuesta']; ?>" selected><?php echo $row_q_reg_estu_actual['nombre_respuesta']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>                                

<?php 


  $q_repitiente = "SELECT * FROM respuestas WHERE nombre_respuesta != '.' ORDER BY nombre_respuesta ASC";

  $d_repitiente = mysqli_query($enlace, $q_repitiente) or die(mysqli_error());

  $r_d_repitiente = mysqli_num_rows($d_repitiente);  


  while ($r_d_repitiente = mysqli_fetch_assoc($d_repitiente))
                                {                            
      ?>
          <option value = "<?php echo $r_d_repitiente['id_respuesta']; ?>"><?php echo $r_d_repitiente['nombre_respuesta'];?></option>
      <?php
                                } 

 

?> 
                                
          </select>  

    </td>





      <td class="align-middle" align="center">

<input type="date" class="form-control form-control-sm" id="mod_inscrip" name="mod_inscrip[]"
 value="<?php echo $row_q_reg_estu_actual['fecha_inscripcion']; ?>" >

      </td>



      <td class="align-middle" align="center">

        <select class="form-control form-control-sm" id="mod_edades" name="mod_edades[]">

<option value="<?php echo $row_q_reg_estu_actual['id_edad']; ?>" selected><?php echo $row_q_reg_estu_actual['nombre_edad']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>                                




<?php 



  $q_edades = "SELECT * FROM edades WHERE nombre_edad != '.' ORDER BY nombre_edad ASC";

  $d_edades = mysqli_query($enlace, $q_edades) or die(mysqli_error());

  $r_d_edades = mysqli_num_rows($d_edades);  


  while ($r_d_edades = mysqli_fetch_assoc($d_edades))
                                {                            
      ?>
          <option value = "<?php echo $r_d_edades['id_edad']; ?>"><?php echo $r_d_edades['nombre_edad'];?></option>
      <?php
                                } 

                                              


?> 

                                
          </select>  

    </td>




      <td class="align-middle" align="center">

        <select class="form-control form-control-sm" id="mod_t_camisa" name="mod_t_camisa[]">

<option value="<?php echo $row_q_reg_estu_actual['id_camisa']; ?>" selected><?php echo $row_q_reg_estu_actual['talla_camisa']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>                                



<?php 



  $q_camisas = "SELECT * FROM tall_cam WHERE talla_camisa != '.' ORDER BY talla_camisa ASC";

  $d_camisas = mysqli_query($enlace, $q_camisas) or die(mysqli_error());

  $r_d_camisas = mysqli_num_rows($d_camisas);  


  while ($r_d_camisas = mysqli_fetch_assoc($d_camisas))
                                {                            
      ?>
          <option value = "<?php echo $r_d_camisas['id_camisa']; ?>"><?php echo $r_d_camisas['talla_camisa'];?></option>
      <?php
                                } 

                                              


?> 

                                 
          </select>  

    </td>






            <td class="align-middle" align="center">

        <select class="form-control form-control-sm" id="mod_t_pantalon" name="mod_t_pantalon[]">

<option value="<?php echo $row_q_reg_estu_actual['id_pantalon']; ?>" selected><?php echo $row_q_reg_estu_actual['nombre_pantalon']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>                                



<?php 


  $q_pantalones = "SELECT * FROM tall_pant WHERE nombre_pantalon != '.' ORDER BY nombre_pantalon ASC";

  $d_pantalones = mysqli_query($enlace, $q_pantalones) or die(mysqli_error());

  $r_d_pantalones = mysqli_num_rows($d_pantalones);  


  while ($r_d_pantalones = mysqli_fetch_assoc($d_pantalones))
                                {                            
      ?>
          <option value = "<?php echo $r_d_pantalones['id_pantalon']; ?>"><?php echo $r_d_pantalones['nombre_pantalon'];?></option>
      <?php
                                } 


?> 

                                 
          </select>  

    </td>








      <td class="align-middle" align="center">

        <select class="form-control form-control-sm" id="mod_t_zapato" name="mod_t_zapato[]">

<option value="<?php echo $row_q_reg_estu_actual['id_zapato']; ?>" selected><?php echo $row_q_reg_estu_actual['talla_zapato']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>                                



<?php 



  $q_zapatos = "SELECT * FROM tall_zap WHERE talla_zapato != '.' ORDER BY talla_zapato ASC";

  $d_zapatos = mysqli_query($enlace, $q_zapatos) or die(mysqli_error());

  $r_d_zapatos = mysqli_num_rows($d_zapatos);  


  while ($r_d_zapatos = mysqli_fetch_assoc($d_zapatos))
                                {                            
      ?>
          <option value = "<?php echo $r_d_zapatos['id_zapato']; ?>"><?php echo $r_d_zapatos['talla_zapato'];?></option>
      <?php
                                } 

                                            


?> 

                                 
          </select>  

    </td>



     



     <td class="align-middle" align="center">

        <select class="form-control form-control-sm" id="mod_pesos" name="mod_pesos[]">

<option value="<?php echo $row_q_reg_estu_actual['id_peso']; ?>" selected><?php echo $row_q_reg_estu_actual['nombre_peso']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>                                
 

<?php 



  $q_pesos = "SELECT * FROM pesos WHERE nombre_peso != '.' ORDER BY nombre_peso ASC";

  $d_pesos = mysqli_query($enlace, $q_pesos) or die(mysqli_error());

  $r_d_pesos = mysqli_num_rows($d_pesos);  



  while ($r_d_pesos = mysqli_fetch_assoc($d_pesos))
                                {                            
      ?>
          <option value = "<?php echo $r_d_pesos['id_peso']; ?>"><?php echo $r_d_pesos['nombre_peso'];?></option>
      <?php
                                } 

?> 


          </select>  



    </td>



        <td class="align-middle" align="center">

        <select class="form-control form-control-sm" id="mod_alturas" name="mod_alturas[]">

<option value="<?php echo $row_q_reg_estu_actual['id_altura']; ?>" selected><?php echo $row_q_reg_estu_actual['nombre_altura']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>                                

<?php 



  $q_alturas = "SELECT * FROM alturas WHERE nombre_altura != '.' ORDER BY nombre_altura ASC";

  $d_alturas = mysqli_query($enlace, $q_alturas) or die(mysqli_error());

  $r_d_alturas = mysqli_num_rows($d_alturas);  


  while ($r_d_alturas = mysqli_fetch_assoc($d_alturas))
                                {                            
      ?>
          <option value = "<?php echo $r_d_alturas['id_altura']; ?>"><?php echo $r_d_alturas['nombre_altura'];?></option>
      <?php
                                } 

  mysqli_close($enlace);                                              


?> 

                                
          </select>  






    </td>


<td class="align-middle" align="center" >


<?php
   // echo $row_es; 
   


if ($row_es >= $totalRows_q_reg_estu_actual ) {
// echo $row_es; 
  $eliminar_hab = '';
}

else {$eliminar_hab = 'none'; }
// echo $totalRows_q_reg_estu_actual;


 $row_es++;    

 ?>

 <input type="hidden" id="total_registros"  name="total_registros"  value="<?php echo $totalRows_q_reg_estu_actual; ?>">  <!-- en caso que sea uno, borrar al estudiante -->
 <input type="hidden" id="id_es_estudiante_aa"  name="id_es_estudiante_aa"  value="<?php echo $id_del_estudiante; ?>">  <!-- en caso que sea uno, borrar al estudiante -->

  <div class="" data-toggle="tooltip" data-placement="top" title="Eliminar Registro" style="display: <?php echo $eliminar_hab;?>" >
                  
                  <div class="ml-1 form-check">
                    <input class="form-check-input" type="checkbox" id="mod_delete_reg" name="mod_delete_reg">
                    <label class="form-check-label" ></label>
                  </div>    
   

  </div>  



</td>












      

      </tr>

      <?php } while ($row_q_reg_estu_actual = mysqli_fetch_assoc($q_reg_estu_actual)); ?>



    </tbody>

</table>  

<div class="alert alert-secondary" role="alert">
  En caso de observar campos en blanco significa que el estudiante no ha sido inscrito.
</div>

<div class="alert alert-danger" role="alert">
  El ciclo y/o año asignado a un estudiante solo puede ser cambiado o modificado por los <b>Administradores</b>, en caso de que el mismo fuera asignado erróneamente, se debe borrar el registro y volver a pre y/o inscribir al estudiante en el ciclo y/o año correcto.

<br><br>

   <b> Si es nuevo ingreso,</b> tras eliminar el registro se deberá pre y/o inscribir desde el apartado de <b>"grupo familiar"</b> usando el documento de Id. del representante. 

<br><br>

<b>En caso de emergencia contacte con un Administrador del sistema.</b>



</div>


