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

<input type="hidden" name="monto_ins"   id="monto_ins<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>"
         value="<?php echo $row_datos_mod9['Inscripcion']; ?>" >

          <input type="hidden" name="recibo_ins" id="recibo_ins<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_pago_insc']; ?>">

 <input type="hidden" name="mod_num_trans_insc" id="mod_num_trans_insc<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_insc']; ?>">

<div class="form-row">
<div class="col-md-5">



<input name="id_del_registro" type="hidden" value="<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>">




<div class="border border-dark mt-1">

<small id="" class="text-muted">Realizado junto al pago de la Inscripción.</small>

<div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>





  <input maxlength="15" type="text" class="form-control form-control-sm" name="1er_abono" value="<?php echo $row_datos_mod9['abono_1er']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >






</div>   </div> 

<?php

if ($row_datos_mod9['1er_pago'] > 1) {
  $unohidd = 'display: none;';
}

else { $unohidd = '';}

 ?>



 <?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['1er_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f1_nombre = strtok($row_datos_quien['nombres'], ' ');
$f1_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f1_nombre = 'Sin';
  $f1_apellido = 'Identicación';
}

?> 



<div class="input-group input-group-sm border border-info mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f1_nombre; ?> <?php echo $f1_apellido; ?>." >
  <b><?php echo $primer_pago; ?></b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="1er_pago" id="1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['1er_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

<div class="input-group-append" style="<?php echo $unohidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="1er_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>
 
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#1er_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {


        $("#1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#monto_ins<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());

    } else {
        $('#1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;
        
      }    

   });

});


</script>



        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_1er_pago"  value="<?php echo $row_datos_mod9['fecha_1er_pago']; ?>">
        </div>

<?php

if ($row_datos_mod9['recibo_1er_pago'] > 1) {
  $unorecibo = 'display: none;';
}

else { $unorecibo = '';}

 ?>

        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_1er_pago" id="recibo_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_1er_pago']; ?>">

<div class="input-group-append" style="<?php echo $unorecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="1er_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#1er_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_ins<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

</div>



<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-info" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_1er" name="mod_forma_1er">

<option value="<?php echo $row_datos_mod9['forma_1er']; ?>" selected><?php echo $row_datos_mod9['forma_1er']; ?></option>
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

if ($row_datos_mod9['num_trans_1er'] > 1) {
  $uno_trans_hidd = 'display: none;';
}

else { $uno_trans_hidd = '';}

 ?>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_1er_pago" id="trans_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_1er']; ?>">



    <div class="input-group-append" style="<?php echo $uno_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="1er_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#1er_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#mod_num_trans_insc<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
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

<small id="" class="text-muted">Realizado junto al pago de <?php echo $primer_pago; ?></small>


 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="2do_abono" id="2do_abono" value="<?php echo $row_datos_mod9['abono_2do']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div> </div>


<?php

if ($row_datos_mod9['2do_pago'] > 1) {
  $doshidd = 'display: none;';
}

else { $doshidd = '';}

 ?>



<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['2do_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f2_nombre = strtok($row_datos_quien['nombres'], ' ');
$f2_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f2_nombre = 'Sin';
  $f2_apellido = 'Identicación';
}

?> 


<div class="input-group input-group-sm border border-info  mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info">
<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f2_nombre; ?> <?php echo $f2_apellido; ?>." >

  <b><?php echo $segundo_pago; ?></b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="2do_pago" id="2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['2do_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

<div class="input-group-append" style="<?php echo $doshidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="2do_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#2do_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
  
</div>






        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_2do_pago" value="<?php echo $row_datos_mod9['fecha_2do_pago']; ?>">
        </div>

<?php

if ($row_datos_mod9['recibo_2do_pago'] > 1) {
  $dosrecibo = 'display: none;';
}

else { $dosrecibo = '';}

 ?>


        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_2do_pago" id="recibo_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_2do_pago']; ?>">

 <div class="input-group-append" style="<?php echo $dosrecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="2do_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#2do_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


</div>






<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-info" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_2do" name="mod_forma_2do">

<option value="<?php echo $row_datos_mod9['forma_2do']; ?>" selected><?php echo $row_datos_mod9['forma_2do']; ?></option>
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

if ($row_datos_mod9['num_trans_2do'] > 1) {
  $dos_trans_hidd = 'display: none;';
}

else { $dos_trans_hidd = '';}

 ?>

 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_2do_pago"  id="trans_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_2do']; ?>">




  <div class="input-group-append" style="<?php echo $dos_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="2do_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#2do_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_1er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>


</div>


</div>


<div class="col-md-2"></div>



<div class="col-md-5">


<div class="border border-dark mt-1">

<small id="" class="text-muted">Realizado junto al pago de <?php echo $segundo_pago; ?></small>


 <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">Abono:</span>
  </div>

  <input maxlength="15" type="text" class="form-control form-control-sm" name="3er_abono" value="<?php echo $row_datos_mod9['abono_3er']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >

</div>  </div>



<?php

if ($row_datos_mod9['3er_pago'] > 1) {
  $treshidd = 'display: none;';
}

else { $treshidd = '';}

 ?>


<?php 

include("../conectar.php");

$fue_agendado_por = $row_datos_mod9['3er_quien'];

$query_quien = "SELECT id, nombres, apellidos FROM usuarios 
         WHERE   id = '$fue_agendado_por'
         limit 1 " ;

$datos_quien = mysqli_query($enlace, $query_quien) or die(mysqli_error());
              $row_datos_quien = mysqli_fetch_array($datos_quien); 

$totalRows_quien = mysqli_num_rows($datos_quien); 


mysqli_close($enlace);


if ($totalRows_quien >=1) {
   

$f3_nombre = strtok($row_datos_quien['nombres'], ' ');
$f3_apellido = strtok($row_datos_quien['apellidos'], ' ');


}

else {
  $f3_nombre = 'Sin';
  $f3_apellido = 'Identicación';
}

?> 


<div class="input-group input-group-sm border border-info mb-1 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info">

<div data-toggle="tooltip" data-placement="top" title="Proceso: <?php echo $f3_nombre; ?> <?php echo $f3_apellido; ?>." >
  <b><?php echo $tercero_pago; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></div></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="3er_pago" id="3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['3er_pago']; ?>"
  placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' " >


<div class="input-group-append" style="<?php echo $treshidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="3er_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function() {
$("#3er_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){
if (this.checked ) {

        $("#3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>
  
</div>





        <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" name="fecha_3er_pago"  value="<?php echo $row_datos_mod9['fecha_3er_pago']; ?>">
        </div>


<?php

if ($row_datos_mod9['recibo_3er_pago'] > 1) {
  $tresrecibo = 'display: none;';
}

else { $tresrecibo = '';}

 ?>


        <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1"><b>Recibo N°:</b></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="recibo_3er_pago" id="recibo_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['recibo_3er_pago']; ?>">

 <div class="input-group-append" style="<?php echo $tresrecibo; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="3er_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#3er_recibo_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#recibo_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#recibo_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#recibo_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#recibo_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
      }   
   });
});

</script>

</div>




<div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <label class="input-group-text alert-info" for="inputGroupSelect01">Forma:</label>
  </div>


<select class="form-control form-control-sm" id="mod_forma_3er" name="mod_forma_3er">

<option value="<?php echo $row_datos_mod9['forma_3er']; ?>" selected><?php echo $row_datos_mod9['forma_3er']; ?></option>
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

if ($row_datos_mod9['num_trans_3er'] > 1) {
  $tres_trans_hidd = 'display: none;';
}

else { $tres_trans_hidd = '';}

 ?>


 <div class="input-group input-group-sm mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info" id="basic-addon1">N° Trans.:</span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="trans_3er_pago" id="trans_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" value="<?php echo $row_datos_mod9['num_trans_3er']; ?>">



       <div class="input-group-append" style="<?php echo $tres_trans_hidd; ?>">  
    <div class="input-group-text">
    <input type="checkbox" id="3er_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>" >
    </div>
</div>


<script type="text/javascript">
  
$(document).ready(function() {
$("#3er_trans_check<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").on("change",function(){

if (this.checked ) {
        $("#trans_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val($("#trans_2do_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").val());
    } else {
        $('#trans_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>').val("");
        $("#trans_3er_pago<?php echo $row_datos_mod_pre['id_reg_pagos']; ?>").attr("placeholder")  ;        
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
  <textarea maxlength="159" class="form-control" aria-label="With textarea" name="nota_1er_tri"><?php echo $row_datos_mod9['1er_trim_nota']; ?></textarea>
</div>


<br>


<div class="input-group input-group-sm border border-info mb-3 mt-1">
  <div class="input-group-prepend">
    <span class="input-group-text alert-info"><b><?php echo $especial_primero; ?> </b> &nbsp;<i class="fas fa-dollar-sign"></i></span>
  </div>
  <input maxlength="15" type="text" class="form-control form-control-sm" name="pago_especial_1" value="<?php echo $row_datos_mod9['especial_1']; ?>" placeholder="0.00"  min="0" value="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'lightgrey' "    >
  
</div>




</div>
</div>





</div> <!-- cierre principal col md 12 -->
</div> <!-- cierre form row -->


       