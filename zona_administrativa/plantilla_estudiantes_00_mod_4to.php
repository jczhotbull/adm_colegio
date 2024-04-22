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

<input type="hidden"  name="9no_pago" id="9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['9no_pago']; ?>" >

<input type="hidden"  name="recibo_9no_pago" id="recibo_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_9no_pago']; ?>">

 <input type="hidden"  name="trans_9no_pago" id="trans_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_9no']; ?>">


<div class="form-row">
<div class="col-md-5">



<input name="id_del_registro" type="hidden" value="<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>">


<div class="border border-dark mt-1">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $noveno_pago; ?></small>


        <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="10m_abono" value="<?php echo $row_datos_mod9['abono_10m']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div> </div>


   <?php

if ($row_datos_mod9['10m_pago'] > 1) {
  $diezhidd = 'display: none;';
}

else { $diezhidd = '';}

 ?>



<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['10m_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f10_nombre = strtok($row_datos_quien['nombres'], ' ');
$f10_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f10_nombre = 'Sin';
  $f10_apellido = 'Identicación';
}

?> 


<div class="input-group input-group-sm border border-warning mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f10_nombre; ?> <?php echo $f10_apellido; ?>." >

  <b><?php echo $decimo_pago; ?></b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="10m_pago" id="10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['10m_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

<div class="input-group-append" style="<?php echo $diezhidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="10m_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#10m_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
 
</div>






        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_10m_pago"  value="<?php echo $row_datos_mod9['fecha_10m_pago']; ?>">
        </div>


<?php

if ($row_datos_mod9['recibo_10m_pago'] > 1) {
  $diezrecibo = 'display: none;';
}

else { $diezrecibo = '';}

 ?>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_10m_pago" id="recibo_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_10m_pago']; ?>">


 <div class="input-group-append" style="<?php echo $diezrecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="10m_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#10m_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

</div>



<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-warning" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_10m" name="mod_forma_10m">

<option value="<?php echo $row_datos_mod9['forma_10m']; ?>" selected><?php echo $row_datos_mod9['forma_10m']; ?></option>
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

if ($row_datos_mod9['num_trans_10m'] > 1) {
  $diez_trans_hidd = 'display: none;';
}

else { $diez_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_10m_pago" id="trans_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_10m']; ?>">



   <div class="input-group-append" style="<?php echo $diez_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="10m_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#10m_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_9no_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>



</div>







<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: gold; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="border border-dark mt-3">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $decimo_pago; ?></small>


 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="11o_abono" value="<?php echo $row_datos_mod9['abono_11o']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>  </div>


<?php

if ($row_datos_mod9['11o_pago'] > 1) {
  $oncehidd = 'display: none;';
}

else { $oncehidd = '';}

 ?>


  <?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['11o_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f11_nombre = strtok($row_datos_quien['nombres'], ' ');
$f11_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f11_nombre = 'Sin';
  $f11_apellido = 'Identicación';
}

?> 

<div class="input-group input-group-sm border border-warning  mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f11_nombre; ?> <?php echo $f11_apellido; ?>." >
  <b><?php echo $onceavo_pago; ?></b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="11o_pago" id="11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['11o_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >


<div class="input-group-append" style="<?php echo $oncehidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="11o_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#11o_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

  
</div>






        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_11o_pago" value="<?php echo $row_datos_mod9['fecha_11o_pago']; ?>">
        </div>


<?php

if ($row_datos_mod9['recibo_11o_pago'] > 1) {
  $oncerecibo = 'display: none;';
}

else { $oncerecibo = '';}

 ?>


        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_11o_pago" id="recibo_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_11o_pago']; ?>">


 <div class="input-group-append" style="<?php echo $oncerecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="11o_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#11o_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>



</div>






<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-warning" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_11o" name="mod_forma_11o">

<option value="<?php echo $row_datos_mod9['forma_11o']; ?>" selected><?php echo $row_datos_mod9['forma_11o']; ?></option>
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

if ($row_datos_mod9['num_trans_11o'] > 1) {
  $once_trans_hidd = 'display: none;';
}

else { $once_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_11o_pago" id="trans_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_11o']; ?>">




<div class="input-group-append" style="<?php echo $once_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="11o_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#11o_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_10m_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


</div>


</div>


<div class="col-md-2"></div>



<div class="col-md-5">


<div class="border border-dark mt-1">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $onceavo_pago; ?></small>


 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="12o_abono" value="<?php echo $row_datos_mod9['abono_12o']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div> </div>



<?php

if ($row_datos_mod9['12o_pago'] > 1) {
  $docehidd = 'display: none;';
}

else { $docehidd = '';}

 ?>



<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['12o_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f12_nombre = strtok($row_datos_quien['nombres'], ' ');
$f12_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f12_nombre = 'Sin';
  $f12_apellido = 'Identicación';
}

?> 



<div class="input-group input-group-sm border border-warning mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning">
<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f12_nombre; ?> <?php echo $f12_apellido; ?>." >

  <b><?php echo $doceavo_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="12o_pago" id="12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['12o_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >


<div class="input-group-append" style="<?php echo $docehidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="12o_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#12o_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
  
</div>





        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_12o_pago"  value="<?php echo $row_datos_mod9['fecha_12o_pago']; ?>">
        </div>

<?php

if ($row_datos_mod9['recibo_12o_pago'] > 1) {
  $docerecibo = 'display: none;';
}

else { $docerecibo = '';}

 ?>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_12o_pago" id="recibo_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_12o_pago']; ?>">


 <div class="input-group-append" style="<?php echo $docerecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="12o_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#12o_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


</div>




<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-warning" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_12o" name="mod_forma_12o">

<option value="<?php echo $row_datos_mod9['forma_12o']; ?>" selected><?php echo $row_datos_mod9['forma_12o']; ?></option>
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

if ($row_datos_mod9['num_trans_12o'] > 1) {
  $doce_trans_hidd = 'display: none;';
}

else { $doce_trans_hidd = '';}

 ?>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_12o_pago" id="trans_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_12o']; ?>">



   <div class="input-group-append" style="<?php echo $doce_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="12o_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#12o_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_11o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_12o_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


</div>


<hr style="border-width: 1px 1px 0;
           border-style: solid;
           border-color: gold; 
           width: 50%;
           margin-left: auto;
           margin-right: auto;">


<div class="input-group input-group-sm  mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning"><i class="far fa-comment-alt"></i></span>
  </div>
  <textarea maxlength="159" class="form-control" aria-label="With textarea" name="nota_4to_tri"><?php echo $row_datos_mod9['4to_trim_nota']; ?></textarea>
</div>


<br>


<div class="input-group input-group-sm border border-warning mb-3 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning"><b><?php echo $especial_cuarto; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="pago_especial_4" value="<?php echo $row_datos_mod9['especial_4']; ?>" placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' "    >
  
</div>




</div>
</div>





</div> <!-- cierre principal col md 12 -->
</div> <!-- cierre form row -->


       