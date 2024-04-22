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

 <input type="hidden"  name="6to_pago" id="6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['6to_pago']; ?>" >

<input type="hidden"  name="recibo_6to_pago" id="recibo_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_6to_pago']; ?>">

<input type="hidden"  name="trans_6to_pago" id="trans_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_6to']; ?>">


<div class="form-row">
<div class="col-md-5">



<input name="id_del_registro" type="hidden" value="<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>">

<div class="border border-dark mt-1">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $sexto_pago; ?></small>

 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="7mo_abono" value="<?php echo $row_datos_mod9['abono_7mo']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>  </div>

<?php

if ($row_datos_mod9['7mo_pago'] > 1) {
  $septimohidd = 'display: none;';
}

else { $septimohidd = '';}

 ?>



<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['7mo_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f7_nombre = strtok($row_datos_quien['nombres'], ' ');
$f7_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f7_nombre = 'Sin';
  $f7_apellido = 'Identicación';
}

?> 

<div class="input-group input-group-sm border border-info mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f7_nombre; ?> <?php echo $f7_apellido; ?>." >

  <b><?php echo $septimo_pago; ?></b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="7mo_pago" id="7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['7mo_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

<div class="input-group-append" style="<?php echo $septimohidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="7mo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>
 


<script type="text/javascript">
  
$(document).ready(function() {
$("#7mo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

</div>


       



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_7mo_pago"  value="<?php echo $row_datos_mod9['fecha_7mo_pago']; ?>">
        </div>


<?php

if ($row_datos_mod9['recibo_7mo_pago'] > 1) {
  $sieterecibo = 'display: none;';
}

else { $sieterecibo = '';}

 ?>


        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_7mo_pago" id="recibo_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_7mo_pago']; ?>">

 <div class="input-group-append" style="<?php echo $sieterecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="7mo_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>



<script type="text/javascript">
  
$(document).ready(function() {
$("#7mo_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

</div>



<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-info" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_7mo" name="mod_forma_7mo">

<option value="<?php echo $row_datos_mod9['forma_7mo']; ?>" selected><?php echo $row_datos_mod9['forma_7mo']; ?></option>
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




<?php

if ($row_datos_mod9['num_trans_7mo'] > 1) {
  $siete_trans_hidd = 'display: none;';
}

else { $siete_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_7mo_pago" id="trans_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_7mo']; ?>">



<div class="input-group-append" style="<?php echo $siete_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="7mo_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#7mo_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

</div>







<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: lightblue; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="border border-dark mt-3">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $septimo_pago; ?></small>

 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="8vo_abono" value="<?php echo $row_datos_mod9['abono_8vo']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >




</div> </div>


<?php

if ($row_datos_mod9['8vo_pago'] > 1) {
  $ochohidd = 'display: none;';
}

else { $ochohidd = '';}

 ?>




<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['8vo_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f8_nombre = strtok($row_datos_quien['nombres'], ' ');
$f8_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f8_nombre = 'Sin';
  $f8_apellido = 'Identicación';
}

?> 



<div class="input-group input-group-sm border border-info  mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f8_nombre; ?> <?php echo $f8_apellido; ?>." >

      <b><?php echo $octavo_pago; ?></b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="8vo_pago" id="8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['8vo_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

<div class="input-group-append" style="<?php echo $ochohidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="8vo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#8vo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

  
</div>






        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_8vo_pago" value="<?php echo $row_datos_mod9['fecha_8vo_pago']; ?>">
        </div>



<?php

if ($row_datos_mod9['recibo_8vo_pago'] > 1) {
  $ochorecibo = 'display: none;';
}

else { $ochorecibo = '';}

 ?>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_8vo_pago" id="recibo_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_8vo_pago']; ?>">



 <div class="input-group-append" style="<?php echo $ochorecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="8vo_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#8vo_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


</div>






<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-info" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_8vo" name="mod_forma_8vo">

<option value="<?php echo $row_datos_mod9['forma_8vo']; ?>" selected><?php echo $row_datos_mod9['forma_8vo']; ?></option>
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


<?php

if ($row_datos_mod9['num_trans_8vo'] > 1) {
  $ocho_trans_hidd = 'display: none;';
}

else { $ocho_trans_hidd = '';}

 ?>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_8vo_pago" id="trans_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_8vo']; ?>">



  <div class="input-group-append" style="<?php echo $ocho_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="8vo_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#8vo_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_7mo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


</div>


</div>


<div class="col-md-2"></div>



<div class="col-md-5">


<div class="border border-dark mt-1">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $octavo_pago; ?></small>



 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="9no_abono" value="<?php echo $row_datos_mod9['abono_9no']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div> </div>

<?php

if ($row_datos_mod9['9no_pago'] > 1) {
  $nuevehidd = 'display: none;';
}

else { $nuevehidd = '';}

 ?>



 <?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['9no_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f9_nombre = strtok($row_datos_quien['nombres'], ' ');
$f9_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f9_nombre = 'Sin';
  $f9_apellido = 'Identicación';
}

?> 


<div class="input-group input-group-sm border border-info mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f9_nombre; ?> <?php echo $f9_apellido; ?>." >
  <b><?php echo $noveno_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="9no_pago" id="9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['9no_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

<div class="input-group-append" style="<?php echo $nuevehidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="9no_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>



<script type="text/javascript">
  
$(document).ready(function() {
$("#9no_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
  
</div>





        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_9no_pago"  value="<?php echo $row_datos_mod9['fecha_9no_pago']; ?>">
        </div>



<?php

if ($row_datos_mod9['recibo_9no_pago'] > 1) {
  $nueverecibo = 'display: none;';
}

else { $nueverecibo = '';}

 ?>


        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_9no_pago" id="recibo_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_9no_pago']; ?>">


<div class="input-group-append" style="<?php echo $nueverecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="9no_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#9no_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


</div>




<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-info" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_9no" name="mod_forma_9no">

<option value="<?php echo $row_datos_mod9['forma_9no']; ?>" selected><?php echo $row_datos_mod9['forma_9no']; ?></option>
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



<?php

if ($row_datos_mod9['num_trans_9no'] > 1) {
  $nueve_trans_hidd = 'display: none;';
}

else { $nueve_trans_hidd = '';}

 ?>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_9no_pago" id="trans_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_9no']; ?>">



  <div class="input-group-append" style="<?php echo $nueve_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="9no_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#9no_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_8vo_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

</div>


<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: lightblue; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="input-group input-group-sm  mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info"><i class="far fa-comment-alt"></i></span>
  </div>
  <textarea maxlength="159" class="form-control" aria-label="With textarea" name="nota_3er_tri"><?php echo $row_datos_mod9['3er_trim_nota']; ?></textarea>
</div>


<br>


<div class="input-group input-group-sm border border-info mb-3 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info"><b><?php echo $especial_tercero; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="pago_especial_3" value="<?php echo $row_datos_mod9['especial_3']; ?>" placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' "    >
  
</div>




</div>
</div>





</div> <!-- cierre principal col md 12 -->
</div> <!-- cierre form row -->


       