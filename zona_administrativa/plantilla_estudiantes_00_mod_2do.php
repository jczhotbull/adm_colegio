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



<input type="hidden" name="3er_pago" id="3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['3er_pago']; ?>" >


<input type="hidden" name="recibo_3er_pago" id="recibo_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_3er_pago']; ?>">

 <input type="hidden"  name="trans_3er_pago" id="trans_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_3er']; ?>">



<div class="form-row">
<div class="col-md-5">



<input name="id_del_registro" type="hidden" value="<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>">


<div class="border border-dark mt-1">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $tercero_pago; ?></small>

   <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="4to_abono" value="<?php echo $row_datos_mod9['abono_4to']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>  </div> 

<?php

if ($row_datos_mod9['4to_pago'] > 1) {
  $cuatrohidd = 'display: none;';
}

else { $cuatrohidd = '';}

 ?>



<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['4to_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f4_nombre = strtok($row_datos_quien['nombres'], ' ');
$f4_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f4_nombre = 'Sin';
  $f4_apellido = 'Identicación';
}

?> 




<div class="input-group input-group-sm border border-warning mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f4_nombre; ?> <?php echo $f4_apellido; ?>." >
  <b><?php echo $cuarto_pago; ?></b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="4to_pago" id="4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['4to_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

<div class="input-group-append" style="<?php echo $cuatrohidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="4to_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#4to_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
 
</div>


     



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_4to_pago"  value="<?php echo $row_datos_mod9['fecha_4to_pago']; ?>">
        </div>



<?php

if ($row_datos_mod9['recibo_4to_pago'] > 1) {
  $cuatrorecibo = 'display: none;';
}

else { $cuatrorecibo = '';}

 ?>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_4to_pago" id="recibo_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_4to_pago']; ?>">

 <div class="input-group-append" style="<?php echo $cuatrorecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="4to_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#4to_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


</div>



<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-warning" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_4to" name="mod_forma_4to">

<option value="<?php echo $row_datos_mod9['forma_4to']; ?>" selected><?php echo $row_datos_mod9['forma_4to']; ?></option>
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

if ($row_datos_mod9['num_trans_4to'] > 1) {
  $cuatro_trans_hidd = 'display: none;';
}

else { $cuatro_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_4to_pago" id="trans_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_4to']; ?>">



       <div class="input-group-append" style="<?php echo $cuatro_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="4to_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#4to_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
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

<small id="" class="text-muted">Realizado junto al pago de <?php echo $cuarto_pago; ?></small>


 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="5to_abono" value="<?php echo $row_datos_mod9['abono_5to']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div> </div>


<?php

if ($row_datos_mod9['5to_pago'] > 1) {
  $quintohidd = 'display: none;';
}

else { $quintohidd = '';}

 ?>


 <?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['5to_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f5_nombre = strtok($row_datos_quien['nombres'], ' ');
$f5_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f5_nombre = 'Sin';
  $f5_apellido = 'Identicación';
}

?> 



<div class="input-group input-group-sm border border-warning  mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning">
<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f5_nombre; ?> <?php echo $f5_apellido; ?>." >

  <b><?php echo $quinto_pago; ?></b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="5to_pago" id="5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['5to_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

<div class="input-group-append" style="<?php echo $quintohidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="5to_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#5to_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

  
</div>






        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_5to_pago" value="<?php echo $row_datos_mod9['fecha_5to_pago']; ?>">
        </div>


<?php

if ($row_datos_mod9['recibo_5to_pago'] > 1) {
  $quintorecibo = 'display: none;';
}

else { $quintorecibo = '';}

 ?>


        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_5to_pago" id="recibo_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_5to_pago']; ?>">

   <div class="input-group-append" style="<?php echo $quintorecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="5to_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#5to_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

</div>






<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-warning" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_5to" name="mod_forma_5to">

<option value="<?php echo $row_datos_mod9['forma_5to']; ?>" selected><?php echo $row_datos_mod9['forma_5to']; ?></option>
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

if ($row_datos_mod9['num_trans_5to'] > 1) {
  $quinto_trans_hidd = 'display: none;';
}

else { $quinto_trans_hidd = '';}

 ?>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_5to_pago" id="trans_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_5to']; ?>">



    <div class="input-group-append" style="<?php echo $quinto_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="5to_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>



<script type="text/javascript">
  
$(document).ready(function() {
$("#5to_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_4to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


</div>


</div>


<div class="col-md-2"></div>



<div class="col-md-5">


<div class="border border-dark mt-1">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $quinto_pago; ?></small>


 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="6to_abono" value="<?php echo $row_datos_mod9['abono_6to']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div> </div>


<?php

if ($row_datos_mod9['6to_pago'] > 1) {
  $sextohidd = 'display: none;';
}

else { $sextohidd = '';}

 ?>




<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['6to_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f6_nombre = strtok($row_datos_quien['nombres'], ' ');
$f6_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f6_nombre = 'Sin';
  $f6_apellido = 'Identicación';
}

?> 





<div class="input-group input-group-sm border border-warning mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f6_nombre; ?> <?php echo $f6_apellido; ?>." >

  <b><?php echo $sexto_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="6to_pago" id="6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['6to_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

<div class="input-group-append" style="<?php echo $sextohidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="6to_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#6to_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
  
</div>




        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_6to_pago"  value="<?php echo $row_datos_mod9['fecha_6to_pago']; ?>">
        </div>


<?php

if ($row_datos_mod9['recibo_6to_pago'] > 1) {
  $sextorecibo = 'display: none;';
}

else { $sextorecibo = '';}

 ?>


        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_6to_pago" id="recibo_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_6to_pago']; ?>">

   <div class="input-group-append" style="<?php echo $sextorecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="6to_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>



<script type="text/javascript">
  
$(document).ready(function() {
$("#6to_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

</div>




<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-warning" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_6to" name="mod_forma_6to">

<option value="<?php echo $row_datos_mod9['forma_6to']; ?>" selected><?php echo $row_datos_mod9['forma_6to']; ?></option>
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

if ($row_datos_mod9['num_trans_6to'] > 1) {
  $sexto_trans_hidd = 'display: none;';
}

else { $sexto_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_6to_pago" id="trans_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_6to']; ?>">




<div class="input-group-append" style="<?php echo $sexto_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="6to_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#6to_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_5to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_6to_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
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
  <textarea maxlength="159" class="form-control" aria-label="With textarea" name="nota_2do_tri"><?php echo $row_datos_mod9['2do_trim_nota']; ?></textarea>
</div>


<br>


<div class="input-group input-group-sm border border-warning mb-3 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-warning"><b><?php echo $especial_segundo; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="pago_especial_2" value="<?php echo $row_datos_mod9['especial_2']; ?>" placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' "    >
  
</div>




</div>
</div>





</div> <!-- cierre principal col md 12 -->
</div> <!-- cierre form row -->


       