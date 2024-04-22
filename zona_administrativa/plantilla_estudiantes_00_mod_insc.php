<div class="form-row">
<div class="col-md-12">
 



<?php




$busqueda = $row_datos_control['ci_estu'];

include("../conectar.php");

      $query_bus = "SELECT * FROM reg_estu_repre_all, reg_representante, reg_estudiantes                        
         WHERE reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud
        
         and reg_estudiantes.ci_estu = '$busqueda' limit 1 ";

$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$datos_plantilla_bus_res = mysqli_fetch_assoc($datos_plantilla_bus);
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 




          $el_id_esTTT = $datos_plantilla_bus_res['id_repre'];

          $idesitoxxx = $row_datos_control['id_estud'];




$query_YUT = "SELECT * FROM reg_estu_repre_all, secciones, reg_estu_actual, grados, reg_estudiantes 

         WHERE  reg_estu_repre_all.id_estu = reg_estudiantes.id_estud

         and  secciones.id_seccion = reg_estu_actual.id_seccion
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
         and  el_activo = '1'
         and reg_estu_repre_all.id_repre = '$el_id_esTTT'
         and reg_estudiantes.id_estud = '$idesitoxxx'
        
         limit 1 ";

$datos_estudiantes_YUT = mysqli_query($enlace, $query_YUT) or die(mysqli_error());

$row_datos_estudiantes_YUT = mysqli_fetch_array($datos_estudiantes_YUT); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

$totalRows_datos_estudiantes_YUT = mysqli_num_rows($datos_estudiantes_YUT); 

mysqli_close($enlace);


?>




  <input name="id_del_registro" type="hidden" value="<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>">


<div class="input-group input-group-sm border border-success mb-1 mt-2">
  <div class="input-group-prepend ">
    <span class="input-group-text alert-success" id="basic-addon1"><b>Ciclo:</b></span>
  </div>
  <input maxlength="14" type="text" class="form-control" name="ciclo" value="<?php echo $row_datos_mod9['en_el_ciclo']; ?>" placeholder="Ejem: 2006-2007">
</div>


<div class="input-group input-group-sm mb-4">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success">Observaciones:</span>
  </div>
  <textarea maxlength="159" class="form-control" aria-label="With textarea" name="nota_prin"><?php echo $row_datos_mod9['nota_principal']; ?></textarea>
</div>


<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['ins_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$fi_nombre = strtok($row_datos_quien['nombres'], ' ');
$fi_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $fi_nombre = 'Sin';
  $fi_apellido = 'Identificación';
}

?> 



<div class="border border-dark">

 <div class="input-group input-group-sm mb-2 mt-1 ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-dark" id="basic-addon1">Abono Inscrip:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="abono_ins" value="<?php echo $row_datos_mod9['abono_ins']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>

 <div class="input-group input-group-sm mb-1 ">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-dark"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control" name="fecha_abono_ins" id="fecha_abono_ins" value="<?php echo $row_datos_mod9['fecha_abono_ins']; ?>">
        </div>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-dark" id="basic-addon1"><b>#Recib:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control" name="recibo_abono_ins" id="recibo_abono_ins" value="<?php echo $row_datos_mod9['recibo_abono_ins']; ?>">
</div>


<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-dark" for="inputGroupSelectins">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_abono_ins" name="mod_forma_abono_ins">

<option value="<?php echo $row_datos_mod9['forma_abono_insc']; ?>" selected><?php echo $row_datos_mod9['forma_abono_insc']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>

<option disabled></option>
    <option value="">Borrar Campo</option>

  </select>
</div>




 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-dark" id="basic-addon1">#Trans:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="mod_num_trans_abono_insc" 
  id="mod_num_trans_abono_insc" value="<?php echo $row_datos_mod9['num_trans_abono_insc']; ?>">

  
</div>



</div>


      <div class="input-group input-group-sm border border-success mb-1 mt-4">
        <div class="input-group-prepend">
          <span class="input-group-text alert-success">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $fi_nombre; ?> <?php echo $fi_apellido; ?>." >
  <b>Inscripción</b>&nbsp; <i class="fas fa-dollar-sign"></i></div></span>

  
        </div>
        <input maxlength="15" type="text"  class="form-control" name="monto_ins"   id="monto_ins<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>"
         value="<?php echo $row_datos_mod9['Inscripcion']; ?>"  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
      this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >
       
      </div>



            <div class="input-group input-group-sm mb-1">
                      <div class="input-group-prepend">
                        <span class="input-group-text alert-success"><i class="far fa-calendar-alt"></i></span>  
                      </div>
         
    <input type="date" class="form-control" name="fecha_ins" value="<?php echo $row_datos_mod9['fecha_pago_ins']; ?>">
            </div>


                  <div class="input-group input-group-sm mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text alert-success" id="basic-addon1"><b>Recibo N°:</b></span>
            </div>
            <input maxlength="15" type="text" class="form-control" name="recibo_ins" id="recibo_ins<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_pago_insc']; ?>">
          </div>



<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-success" for="inputGroupSelectins">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_ins" name="mod_forma_ins">

<option value="<?php echo $row_datos_mod9['forma_insc']; ?>" selected><?php echo $row_datos_mod9['forma_insc']; ?></option>
<option disabled></option>

<optgroup label="Cambiar a...">
<option disabled></option>
<option value="Pto. Externo">Pto. Externo</option>
    <option disabled></option>

    <option value="Efectivo">Efectivo</option>
    <option value="Cheque">Cheque</option>
    <option value="Tarjeta">Tarjeta</option>
    <option value="Transferencia">Transferencia</option>

   <option disabled></option>
    <option value="">Borrar Campo</option>

  </select>
</div>




 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="mod_num_trans_insc" id="mod_num_trans_insc<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_insc']; ?>">




</div>


          <div class="input-group input-group-sm  mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text alert-success"><i class="far fa-comment-alt"></i></span>
            </div>
            <textarea maxlength="159" class="form-control" aria-label="With textarea" name="nota_ins"><?php echo $row_datos_mod9['nota_insc']; ?></textarea>
          </div>


</div> <!-- cierre principal col md 12 -->
</div> <!-- cierre form row -->


       