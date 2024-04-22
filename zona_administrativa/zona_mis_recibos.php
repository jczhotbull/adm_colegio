<?php

include("identificador.php");



include("../conectar.php");


$query_perio = "SELECT * FROM temporada_escolar where status = '1' limit 1 ";

$datos_perio = mysqli_query($enlace, $query_perio) or die(mysqli_error());
$totaldatos_perio = mysqli_fetch_array($datos_perio); 

$este_es_el_periodo_noooo = $totaldatos_perio['periodo_escolar'];

$id_del_periodo = $totaldatos_perio['id_periodo_es'];

mysqli_close($enlace);






include("../conectar.php");


 if(isset($_POST['cambiar_periodo']))
    {
      $id_periodo_seleccionadoXX = $_POST['set_periodo'];
    }

    else {$id_periodo_seleccionadoXX = ""; }

$id_periodo_seleccionado = $id_periodo_seleccionadoXX;


if ($id_periodo_seleccionado == "") {  

$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  status = '1' and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);

$id_periodo_clave =  $row_datos_periodo_actual['id_periodo_es'];

}


else {

$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  id_periodo_es = '$id_periodo_seleccionado'
 and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);

$id_periodo_clave =  $id_periodo_seleccionado;

 }




// me permite obtener el id del periodo anterior a partir del periodo seleccionado...

$seleccionado = "SELECT *   FROM temporada_escolar WHERE id_periodo_es ='$id_periodo_clave' LIMIT 1";
$datos_seleccionado = mysqli_query($enlace, $seleccionado) or die(mysqli_error());
$row_datos_seleccionado = mysqli_fetch_assoc($datos_seleccionado);

$respuestagg = $row_datos_seleccionado['periodo_escolar'];

$restA = substr($respuestagg, 0, -5);


$comienzo = $restA - 1;
$fin = $restA;

$per_resultante = "".$comienzo."-".$fin."";


$per_anterior_seleccionado = "SELECT id_periodo_es FROM temporada_escolar WHERE periodo_escolar ='$per_resultante' LIMIT 1";
$datos_anterior_seleccionado = mysqli_query($enlace, $per_anterior_seleccionado) or die(mysqli_error());
$row_datos_anterior_seleccionado = mysqli_fetch_assoc($datos_anterior_seleccionado);

$respuesta_per_anterior_gg = $row_datos_anterior_seleccionado['id_periodo_es'];

//




$queryperiodo_act1 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar DESC";
$datos_periodo_act1 = mysqli_query($enlace, $queryperiodo_act1) or die(mysqli_error());
$row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1);





$queryperiodo_oldie = "SELECT * FROM temporada_escolar WHERE old = '5' LIMIT 1";
$datos_periodo_oldie = mysqli_query($enlace, $queryperiodo_oldie) or die(mysqli_error());
$row_datos_periodo_oldie = mysqli_fetch_assoc($datos_periodo_oldie);

$id_periodo_oldie =  $row_datos_periodo_oldie['id_periodo_es'];



$queryperiodo_nextie = "SELECT * FROM temporada_escolar WHERE next = '8' LIMIT 1";
$datos_periodo_nextie = mysqli_query($enlace, $queryperiodo_nextie) or die(mysqli_error());
$row_datos_periodo_nextie = mysqli_fetch_assoc($datos_periodo_nextie);

$id_periodo_nextie =  $row_datos_periodo_nextie['id_periodo_es'];





mysqli_close($enlace);  





$este_es_el_periodo = $row_datos_periodo_actual['periodo_escolar'];




?>



<?php include ("Header.php"); ?>


        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="alert alert-primary" role="alert">
                    <i class="fas fa-piggy-bank fa-lg "></i> &nbsp; &nbsp; Ver mis recibos y/o comprobantes de pago.
                </div>
      




<form method="POST">
<div class="form-row">             

<div class="input-group col-lg-6 mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-primary" id="">
                      &nbsp; &nbsp;<b>Año o ciclo: </b></span>     <!--  <?php echo $id_periodo_clave; ?> -->
                    </div>
                 
                            <select class="form-control" id="set_periodo" name="set_periodo">



<option value="<?php echo $row_datos_periodo_oldie['id_periodo_es']; ?>">
  <?php echo $row_datos_periodo_oldie['periodo_escolar']; ?></option>


  <option value="<?php echo $row_datos_periodo_actual['id_periodo_es']; ?>" selected>
  <?php echo $row_datos_periodo_actual['periodo_escolar']; ?></option>



<option disabled></option>


                                <optgroup label="Cambiar a...">
                                <option disabled></option>                              

   <?php

include("../conectar.php");


$queryperiodo_actual_actual = "SELECT * FROM temporada_escolar WHERE status = '1' LIMIT 1";
$datos_periodo_actual_actual = mysqli_query($enlace, $queryperiodo_actual_actual) or die(mysqli_error());
$row_datos_periodo_actual_actual = mysqli_fetch_assoc($datos_periodo_actual_actual);

$id_periodo_actual_actual =  $row_datos_periodo_actual_actual['id_periodo_es'];



$queryperiodo_actual_past = "SELECT * FROM temporada_escolar WHERE old = '5' LIMIT 1";
$datos_periodo_actual_past = mysqli_query($enlace, $queryperiodo_actual_past) or die(mysqli_error());
$row_datos_periodo_actual_past = mysqli_fetch_assoc($datos_periodo_actual_past);

$id_periodo_actual_past =  $row_datos_periodo_actual_past['id_periodo_es'];

mysqli_close($enlace); 


?>        






<option value="<?php echo $row_datos_periodo_actual_past['id_periodo_es']; ?>">
  <?php echo $row_datos_periodo_actual_past['periodo_escolar']; ?></option>


  <option value="<?php echo $row_datos_periodo_actual_actual['id_periodo_es']; ?>" >
  <?php echo $row_datos_periodo_actual_actual['periodo_escolar']; ?></option>



                              
                        </select>


                        <div class="input-group-append">
                            <button type="submit" name="cambiar_periodo" class="btn btn-info"><i class="fas fa-check fa-lg "></i></button>
                        </div>
                 
</div>




</div>
</form>








<?php

include("../conectar.php");

              $querymod2 = "SELECT * FROM periodo_de_pago where id_periodo_pago = 1 ";
              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());
              $row_datos_mod2 = mysqli_fetch_array($datos_mod2);
               mysqli_close($enlace);    

$primer_pago = $row_datos_mod2['1er_pago'];
$segundo_pago = $row_datos_mod2['2do_pago'];
$tercero_pago = $row_datos_mod2['3er_pago'];

$especial_primero = $row_datos_mod2['especial_1'];

$cuarto_pago = $row_datos_mod2['4to_pago'];
$quinto_pago = $row_datos_mod2['5to_pago'];
$sexto_pago = $row_datos_mod2['6to_pago'];

$especial_segundo = $row_datos_mod2['especial_2'];

$septimo_pago = $row_datos_mod2['7mo_pago'];
$octavo_pago = $row_datos_mod2['8vo_pago'];
$noveno_pago = $row_datos_mod2['9no_pago'];

$especial_tercero = $row_datos_mod2['especial_3'];

$decimo_pago = $row_datos_mod2['10m_pago'];
$onceavo_pago = $row_datos_mod2['11o_pago'];
$doceavo_pago = $row_datos_mod2['12o_pago'];

$especial_cuarto = $row_datos_mod2['especial_4'];

$primer_pago_mes = $row_datos_mod2['1er_pago_mes'];
$segundo_pago_mes = $row_datos_mod2['2do_pago_mes'];
$tercero_pago_mes = $row_datos_mod2['3er_pago_mes'];
$cuarto_pago_mes = $row_datos_mod2['4to_pago_mes'];
$quinto_pago_mes = $row_datos_mod2['5to_pago_mes'];
$sexto_pago_mes = $row_datos_mod2['6to_pago_mes'];
$septimo_pago_mes = $row_datos_mod2['7mo_pago_mes'];
$octavo_pago_mes = $row_datos_mod2['8vo_pago_mes'];
$noveno_pago_mes = $row_datos_mod2['9no_pago_mes'];
$decimo_pago_mes = $row_datos_mod2['10m_pago_mes'];
$onceavo_pago_mes = $row_datos_mod2['11o_pago_mes'];
$doceavo_pago_mes = $row_datos_mod2['12o_pago_mes'];


if ($primer_pago_mes == '01') { $primer_icono = 'fas fa-chess-king'; }
if ($primer_pago_mes == '02') { $primer_icono = 'fas fa-mask'; }
if ($primer_pago_mes == '03') { $primer_icono = 'fas fa-female'; }
if ($primer_pago_mes == '04') { $primer_icono = 'fas fa-church';  }
if ($primer_pago_mes == '05') { $primer_icono = 'fas fa-user-tie';  }
if ($primer_pago_mes == '06') { $primer_icono = 'fas fa-male'; }
if ($primer_pago_mes == '07') { $primer_icono = 'fas fa-child'; }
if ($primer_pago_mes == '08') { $primer_icono = 'fas fa-users';  }
if ($primer_pago_mes == '09') { $primer_icono = 'fas fa-language'; }
if ($primer_pago_mes == '10') { $primer_icono = 'fas fa-anchor';  }
if ($primer_pago_mes == '11') { $primer_icono = 'fas fa-music'; }
if ($primer_pago_mes == '12') { $primer_icono = 'fas fa-sleigh'; }

if ($segundo_pago_mes == '01') { $segundo_icono = 'fas fa-chess-king'; }
if ($segundo_pago_mes == '02') { $segundo_icono = 'fas fa-mask'; }
if ($segundo_pago_mes == '03') { $segundo_icono = 'fas fa-female'; }
if ($segundo_pago_mes == '04') { $segundo_icono = 'fas fa-church';  }
if ($segundo_pago_mes == '05') { $segundo_icono = 'fas fa-user-tie';  }
if ($segundo_pago_mes == '06') { $segundo_icono = 'fas fa-male'; }
if ($segundo_pago_mes == '07') { $segundo_icono = 'fas fa-child'; }
if ($segundo_pago_mes == '08') { $segundo_icono = 'fas fa-users';  }
if ($segundo_pago_mes == '09') { $segundo_icono = 'fas fa-language'; }
if ($segundo_pago_mes == '10') { $segundo_icono = 'fas fa-anchor';  }
if ($segundo_pago_mes == '11') { $segundo_icono = 'fas fa-music'; }
if ($segundo_pago_mes == '12') { $segundo_icono = 'fas fa-sleigh'; }

if ($tercero_pago_mes == '01') { $tercero_icono = 'fas fa-chess-king'; }
if ($tercero_pago_mes == '02') { $tercero_icono = 'fas fa-mask'; }
if ($tercero_pago_mes == '03') { $tercero_icono = 'fas fa-female'; }
if ($tercero_pago_mes == '04') { $tercero_icono = 'fas fa-church';  }
if ($tercero_pago_mes == '05') { $tercero_icono = 'fas fa-user-tie';  }
if ($tercero_pago_mes == '06') { $tercero_icono = 'fas fa-male'; }
if ($tercero_pago_mes == '07') { $tercero_icono = 'fas fa-child'; }
if ($tercero_pago_mes == '08') { $tercero_icono = 'fas fa-users';  }
if ($tercero_pago_mes == '09') { $tercero_icono = 'fas fa-language'; }
if ($tercero_pago_mes == '10') { $tercero_icono = 'fas fa-anchor';  }
if ($tercero_pago_mes == '11') { $tercero_icono = 'fas fa-music'; }
if ($tercero_pago_mes == '12') { $tercero_icono = 'fas fa-sleigh'; }

if ($cuarto_pago_mes == '01') { $cuarto_icono = 'fas fa-chess-king'; }
if ($cuarto_pago_mes == '02') { $cuarto_icono = 'fas fa-mask'; }
if ($cuarto_pago_mes == '03') { $cuarto_icono = 'fas fa-female'; }
if ($cuarto_pago_mes == '04') { $cuarto_icono = 'fas fa-church';  }
if ($cuarto_pago_mes == '05') { $cuarto_icono = 'fas fa-user-tie';  }
if ($cuarto_pago_mes == '06') { $cuarto_icono = 'fas fa-male'; }
if ($cuarto_pago_mes == '07') { $cuarto_icono = 'fas fa-child'; }
if ($cuarto_pago_mes == '08') { $cuarto_icono = 'fas fa-users';  }
if ($cuarto_pago_mes == '09') { $cuarto_icono = 'fas fa-language'; }
if ($cuarto_pago_mes == '10') { $cuarto_icono = 'fas fa-anchor';  }
if ($cuarto_pago_mes == '11') { $cuarto_icono = 'fas fa-music'; }
if ($cuarto_pago_mes == '12') { $cuarto_icono = 'fas fa-sleigh'; }

if ($quinto_pago_mes == '01') { $quinto_icono = 'fas fa-chess-king'; }
if ($quinto_pago_mes == '02') { $quinto_icono = 'fas fa-mask'; }
if ($quinto_pago_mes == '03') { $quinto_icono = 'fas fa-female'; }
if ($quinto_pago_mes == '04') { $quinto_icono = 'fas fa-church';  }
if ($quinto_pago_mes == '05') { $quinto_icono = 'fas fa-user-tie';  }
if ($quinto_pago_mes == '06') { $quinto_icono = 'fas fa-male'; }
if ($quinto_pago_mes == '07') { $quinto_icono = 'fas fa-child'; }
if ($quinto_pago_mes == '08') { $quinto_icono = 'fas fa-users';  }
if ($quinto_pago_mes == '09') { $quinto_icono = 'fas fa-language'; }
if ($quinto_pago_mes == '10') { $quinto_icono = 'fas fa-anchor';  }
if ($quinto_pago_mes == '11') { $quinto_icono = 'fas fa-music'; }
if ($quinto_pago_mes == '12') { $quinto_icono = 'fas fa-sleigh'; }

if ($sexto_pago_mes == '01') { $sexto_icono = 'fas fa-chess-king'; }
if ($sexto_pago_mes == '02') { $sexto_icono = 'fas fa-mask'; }
if ($sexto_pago_mes == '03') { $sexto_icono = 'fas fa-female'; }
if ($sexto_pago_mes == '04') { $sexto_icono = 'fas fa-church';  }
if ($sexto_pago_mes == '05') { $sexto_icono = 'fas fa-user-tie';  }
if ($sexto_pago_mes == '06') { $sexto_icono = 'fas fa-male'; }
if ($sexto_pago_mes == '07') { $sexto_icono = 'fas fa-child'; }
if ($sexto_pago_mes == '08') { $sexto_icono = 'fas fa-users';  }
if ($sexto_pago_mes == '09') { $sexto_icono = 'fas fa-language'; }
if ($sexto_pago_mes == '10') { $sexto_icono = 'fas fa-anchor';  }
if ($sexto_pago_mes == '11') { $sexto_icono = 'fas fa-music'; }
if ($sexto_pago_mes == '12') { $sexto_icono = 'fas fa-sleigh'; }

if ($septimo_pago_mes == '01') { $septimo_icono = 'fas fa-chess-king'; }
if ($septimo_pago_mes == '02') { $septimo_icono = 'fas fa-mask'; }
if ($septimo_pago_mes == '03') { $septimo_icono = 'fas fa-female'; }
if ($septimo_pago_mes == '04') { $septimo_icono = 'fas fa-church';  }
if ($septimo_pago_mes == '05') { $septimo_icono = 'fas fa-user-tie';  }
if ($septimo_pago_mes == '06') { $septimo_icono = 'fas fa-male'; }
if ($septimo_pago_mes == '07') { $septimo_icono = 'fas fa-child'; }
if ($septimo_pago_mes == '08') { $septimo_icono = 'fas fa-users';  }
if ($septimo_pago_mes == '09') { $septimo_icono = 'fas fa-language'; }
if ($septimo_pago_mes == '10') { $septimo_icono = 'fas fa-anchor';  }
if ($septimo_pago_mes == '11') { $septimo_icono = 'fas fa-music'; }
if ($septimo_pago_mes == '12') { $septimo_icono = 'fas fa-sleigh'; }

if ($octavo_pago_mes == '01') { $octavo_icono = 'fas fa-chess-king'; }
if ($octavo_pago_mes == '02') { $octavo_icono = 'fas fa-mask'; }
if ($octavo_pago_mes == '03') { $octavo_icono = 'fas fa-female'; }
if ($octavo_pago_mes == '04') { $octavo_icono = 'fas fa-church';  }
if ($octavo_pago_mes == '05') { $octavo_icono = 'fas fa-user-tie';  }
if ($octavo_pago_mes == '06') { $octavo_icono = 'fas fa-male'; }
if ($octavo_pago_mes == '07') { $octavo_icono = 'fas fa-child'; }
if ($octavo_pago_mes == '08') { $octavo_icono = 'fas fa-users';  }
if ($octavo_pago_mes == '09') { $octavo_icono = 'fas fa-language'; }
if ($octavo_pago_mes == '10') { $octavo_icono = 'fas fa-anchor';  }
if ($octavo_pago_mes == '11') { $octavo_icono = 'fas fa-music'; }
if ($octavo_pago_mes == '12') { $octavo_icono = 'fas fa-sleigh'; }

if ($noveno_pago_mes == '01') { $noveno_icono = 'fas fa-chess-king'; }
if ($noveno_pago_mes == '02') { $noveno_icono = 'fas fa-mask'; }
if ($noveno_pago_mes == '03') { $noveno_icono = 'fas fa-female'; }
if ($noveno_pago_mes == '04') { $noveno_icono = 'fas fa-church';  }
if ($noveno_pago_mes == '05') { $noveno_icono = 'fas fa-user-tie';  }
if ($noveno_pago_mes == '06') { $noveno_icono = 'fas fa-male'; }
if ($noveno_pago_mes == '07') { $noveno_icono = 'fas fa-child'; }
if ($noveno_pago_mes == '08') { $noveno_icono = 'fas fa-users';  }
if ($noveno_pago_mes == '09') { $noveno_icono = 'fas fa-language'; }
if ($noveno_pago_mes == '10') { $noveno_icono = 'fas fa-anchor';  }
if ($noveno_pago_mes == '11') { $noveno_icono = 'fas fa-music'; }
if ($noveno_pago_mes == '12') { $noveno_icono = 'fas fa-sleigh'; }

if ($decimo_pago_mes == '01') { $decimo_icono = 'fas fa-chess-king'; }
if ($decimo_pago_mes == '02') { $decimo_icono = 'fas fa-mask'; }
if ($decimo_pago_mes == '03') { $decimo_icono = 'fas fa-female'; }
if ($decimo_pago_mes == '04') { $decimo_icono = 'fas fa-church';  }
if ($decimo_pago_mes == '05') { $decimo_icono = 'fas fa-user-tie';  }
if ($decimo_pago_mes == '06') { $decimo_icono = 'fas fa-male'; }
if ($decimo_pago_mes == '07') { $decimo_icono = 'fas fa-child'; }
if ($decimo_pago_mes == '08') { $decimo_icono = 'fas fa-users';  }
if ($decimo_pago_mes == '09') { $decimo_icono = 'fas fa-language'; }
if ($decimo_pago_mes == '10') { $decimo_icono = 'fas fa-anchor';  }
if ($decimo_pago_mes == '11') { $decimo_icono = 'fas fa-music'; }
if ($decimo_pago_mes == '12') { $decimo_icono = 'fas fa-sleigh'; }

if ($onceavo_pago_mes == '01') { $onceavo_icono = 'fas fa-chess-king'; }
if ($onceavo_pago_mes == '02') { $onceavo_icono = 'fas fa-mask'; }
if ($onceavo_pago_mes == '03') { $onceavo_icono = 'fas fa-female'; }
if ($onceavo_pago_mes == '04') { $onceavo_icono = 'fas fa-church';  }
if ($onceavo_pago_mes == '05') { $onceavo_icono = 'fas fa-user-tie';  }
if ($onceavo_pago_mes == '06') { $onceavo_icono = 'fas fa-male'; }
if ($onceavo_pago_mes == '07') { $onceavo_icono = 'fas fa-child'; }
if ($onceavo_pago_mes == '08') { $onceavo_icono = 'fas fa-users';  }
if ($onceavo_pago_mes == '09') { $onceavo_icono = 'fas fa-language'; }
if ($onceavo_pago_mes == '10') { $onceavo_icono = 'fas fa-anchor';  }
if ($onceavo_pago_mes == '11') { $onceavo_icono = 'fas fa-music'; }
if ($onceavo_pago_mes == '12') { $onceavo_icono = 'fas fa-sleigh'; }

if ($doceavo_pago_mes == '01') { $doceavo_icono = 'fas fa-chess-king'; }
if ($doceavo_pago_mes == '02') { $doceavo_icono = 'fas fa-mask'; }
if ($doceavo_pago_mes == '03') { $doceavo_icono = 'fas fa-female'; }
if ($doceavo_pago_mes == '04') { $doceavo_icono = 'fas fa-church';  }
if ($doceavo_pago_mes == '05') { $doceavo_icono = 'fas fa-user-tie';  }
if ($doceavo_pago_mes == '06') { $doceavo_icono = 'fas fa-male'; }
if ($doceavo_pago_mes == '07') { $doceavo_icono = 'fas fa-child'; }
if ($doceavo_pago_mes == '08') { $doceavo_icono = 'fas fa-users';  }
if ($doceavo_pago_mes == '09') { $doceavo_icono = 'fas fa-language'; }
if ($doceavo_pago_mes == '10') { $doceavo_icono = 'fas fa-anchor';  }
if ($doceavo_pago_mes == '11') { $doceavo_icono = 'fas fa-music'; }
if ($doceavo_pago_mes == '12') { $doceavo_icono = 'fas fa-sleigh'; }

?>






<?php

include("../conectar.php");

$per_alterno_este = $row_datos_periodo_actual['id_periodo_es'];


$queryp_status = "SELECT * FROM temporada_escolar where id_periodo_es = '$per_alterno_este' LIMIT 1";

$datos_statusH = mysqli_query($enlace, $queryp_status) or die(mysqli_error());

$row_datos_statusH = mysqli_fetch_array($datos_statusH );

mysqli_close($enlace);


$cedula = $nnn['ci'];




$filename_01a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$primer_pago_mes.'/a/'.$cedula.'.pdf';
$filename_01b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$primer_pago_mes.'/b/'.$cedula.'.pdf';
$filename_01c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$primer_pago_mes.'/c/'.$cedula.'.pdf';
$filename_01d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$primer_pago_mes.'/d/'.$cedula.'.pdf';


$filename_01A = 'aaa_nominas/'.$este_es_el_periodo.'/'.$primer_pago_mes.'/a/'.$cedula.'.PDF';
$filename_01B = 'aaa_nominas/'.$este_es_el_periodo.'/'.$primer_pago_mes.'/b/'.$cedula.'.PDF';
$filename_01C = 'aaa_nominas/'.$este_es_el_periodo.'/'.$primer_pago_mes.'/c/'.$cedula.'.PDF';
$filename_01D = 'aaa_nominas/'.$este_es_el_periodo.'/'.$primer_pago_mes.'/d/'.$cedula.'.PDF';


$filename_02a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$segundo_pago_mes.'/a/'.$cedula.'.pdf';
$filename_02b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$segundo_pago_mes.'/b/'.$cedula.'.pdf';
$filename_02c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$segundo_pago_mes.'/c/'.$cedula.'.pdf';
$filename_02d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$segundo_pago_mes.'/d/'.$cedula.'.pdf';


$filename_02A = 'aaa_nominas/'.$este_es_el_periodo.'/'.$segundo_pago_mes.'/a/'.$cedula.'.PDF';
$filename_02B = 'aaa_nominas/'.$este_es_el_periodo.'/'.$segundo_pago_mes.'/b/'.$cedula.'.PDF';
$filename_02C = 'aaa_nominas/'.$este_es_el_periodo.'/'.$segundo_pago_mes.'/c/'.$cedula.'.PDF';
$filename_02D = 'aaa_nominas/'.$este_es_el_periodo.'/'.$segundo_pago_mes.'/d/'.$cedula.'.PDF';



$filename_03a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$tercero_pago_mes.'/a/'.$cedula.'.pdf';
$filename_03b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$tercero_pago_mes.'/b/'.$cedula.'.pdf';
$filename_03c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$tercero_pago_mes.'/c/'.$cedula.'.pdf';
$filename_03d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$tercero_pago_mes.'/d/'.$cedula.'.pdf';


$filename_03A = 'aaa_nominas/'.$este_es_el_periodo.'/'.$tercero_pago_mes.'/a/'.$cedula.'.PDF';
$filename_03B = 'aaa_nominas/'.$este_es_el_periodo.'/'.$tercero_pago_mes.'/b/'.$cedula.'.PDF';
$filename_03C = 'aaa_nominas/'.$este_es_el_periodo.'/'.$tercero_pago_mes.'/c/'.$cedula.'.PDF';
$filename_03D = 'aaa_nominas/'.$este_es_el_periodo.'/'.$tercero_pago_mes.'/d/'.$cedula.'.PDF';



$filename_04a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$cuarto_pago_mes.'/a/'.$cedula.'.pdf';
$filename_04b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$cuarto_pago_mes.'/b/'.$cedula.'.pdf';
$filename_04c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$cuarto_pago_mes.'/c/'.$cedula.'.pdf';
$filename_04d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$cuarto_pago_mes.'/d/'.$cedula.'.pdf';


$filename_04A = 'aaa_nominas/'.$este_es_el_periodo.'/'.$cuarto_pago_mes.'/a/'.$cedula.'.PDF';
$filename_04B = 'aaa_nominas/'.$este_es_el_periodo.'/'.$cuarto_pago_mes.'/b/'.$cedula.'.PDF';
$filename_04C = 'aaa_nominas/'.$este_es_el_periodo.'/'.$cuarto_pago_mes.'/c/'.$cedula.'.PDF';
$filename_04D = 'aaa_nominas/'.$este_es_el_periodo.'/'.$cuarto_pago_mes.'/d/'.$cedula.'.PDF';


$filename_05a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$quinto_pago_mes.'/a/'.$cedula.'.pdf';
$filename_05b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$quinto_pago_mes.'/b/'.$cedula.'.pdf';
$filename_05c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$quinto_pago_mes.'/c/'.$cedula.'.pdf';
$filename_05d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$quinto_pago_mes.'/d/'.$cedula.'.pdf';


$filename_05A = 'aaa_nominas/'.$este_es_el_periodo.'/'.$quinto_pago_mes.'/a/'.$cedula.'.PDF';
$filename_05B = 'aaa_nominas/'.$este_es_el_periodo.'/'.$quinto_pago_mes.'/b/'.$cedula.'.PDF';
$filename_05C = 'aaa_nominas/'.$este_es_el_periodo.'/'.$quinto_pago_mes.'/c/'.$cedula.'.PDF';
$filename_05D = 'aaa_nominas/'.$este_es_el_periodo.'/'.$quinto_pago_mes.'/d/'.$cedula.'.PDF';


$filename_06a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$sexto_pago_mes.'/a/'.$cedula.'.pdf';
$filename_06b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$sexto_pago_mes.'/b/'.$cedula.'.pdf';
$filename_06c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$sexto_pago_mes.'/c/'.$cedula.'.pdf';
$filename_06d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$sexto_pago_mes.'/d/'.$cedula.'.pdf';


$filename_06A = 'aaa_nominas/'.$este_es_el_periodo.'/'.$sexto_pago_mes.'/a/'.$cedula.'.PDF';
$filename_06B = 'aaa_nominas/'.$este_es_el_periodo.'/'.$sexto_pago_mes.'/b/'.$cedula.'.PDF';
$filename_06C = 'aaa_nominas/'.$este_es_el_periodo.'/'.$sexto_pago_mes.'/c/'.$cedula.'.PDF';
$filename_06D = 'aaa_nominas/'.$este_es_el_periodo.'/'.$sexto_pago_mes.'/d/'.$cedula.'.PDF';



$filename_07a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$septimo_pago_mes.'/a/'.$cedula.'.pdf';
$filename_07b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$septimo_pago_mes.'/b/'.$cedula.'.pdf';
$filename_07c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$septimo_pago_mes.'/c/'.$cedula.'.pdf';
$filename_07d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$septimo_pago_mes.'/d/'.$cedula.'.pdf';

$filename_07A = 'aaa_nominas/'.$este_es_el_periodo.'/'.$septimo_pago_mes.'/a/'.$cedula.'.PDF';
$filename_07B = 'aaa_nominas/'.$este_es_el_periodo.'/'.$septimo_pago_mes.'/b/'.$cedula.'.PDF';
$filename_07C = 'aaa_nominas/'.$este_es_el_periodo.'/'.$septimo_pago_mes.'/c/'.$cedula.'.PDF';
$filename_07D = 'aaa_nominas/'.$este_es_el_periodo.'/'.$septimo_pago_mes.'/d/'.$cedula.'.PDF';




$filename_08a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$octavo_pago_mes.'/a/'.$cedula.'.pdf';
$filename_08b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$octavo_pago_mes.'/b/'.$cedula.'.pdf';
$filename_08c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$octavo_pago_mes.'/c/'.$cedula.'.pdf';
$filename_08d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$octavo_pago_mes.'/d/'.$cedula.'.pdf';


$filename_08A = 'aaa_nominas/'.$este_es_el_periodo.'/'.$octavo_pago_mes.'/a/'.$cedula.'.PDF';
$filename_08B = 'aaa_nominas/'.$este_es_el_periodo.'/'.$octavo_pago_mes.'/b/'.$cedula.'.PDF';
$filename_08C = 'aaa_nominas/'.$este_es_el_periodo.'/'.$octavo_pago_mes.'/c/'.$cedula.'.PDF';
$filename_08D = 'aaa_nominas/'.$este_es_el_periodo.'/'.$octavo_pago_mes.'/d/'.$cedula.'.PDF';


$filename_09a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$noveno_pago_mes.'/a/'.$cedula.'.pdf';
$filename_09b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$noveno_pago_mes.'/b/'.$cedula.'.pdf';
$filename_09c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$noveno_pago_mes.'/c/'.$cedula.'.pdf';
$filename_09d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$noveno_pago_mes.'/d/'.$cedula.'.pdf';



$filename_09A = 'aaa_nominas/'.$este_es_el_periodo.'/'.$noveno_pago_mes.'/a/'.$cedula.'.PDF';
$filename_09B = 'aaa_nominas/'.$este_es_el_periodo.'/'.$noveno_pago_mes.'/b/'.$cedula.'.PDF';
$filename_09C = 'aaa_nominas/'.$este_es_el_periodo.'/'.$noveno_pago_mes.'/c/'.$cedula.'.PDF';
$filename_09D = 'aaa_nominas/'.$este_es_el_periodo.'/'.$noveno_pago_mes.'/d/'.$cedula.'.PDF';




$filename_10a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$decimo_pago_mes.'/a/'.$cedula.'.pdf';
$filename_10b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$decimo_pago_mes.'/b/'.$cedula.'.pdf';
$filename_10c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$decimo_pago_mes.'/c/'.$cedula.'.pdf';
$filename_10d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$decimo_pago_mes.'/d/'.$cedula.'.pdf';


$filename_10A = 'aaa_nominas/'.$este_es_el_periodo.'/'.$decimo_pago_mes.'/a/'.$cedula.'.PDF';
$filename_10B = 'aaa_nominas/'.$este_es_el_periodo.'/'.$decimo_pago_mes.'/b/'.$cedula.'.PDF';
$filename_10C = 'aaa_nominas/'.$este_es_el_periodo.'/'.$decimo_pago_mes.'/c/'.$cedula.'.PDF';
$filename_10D = 'aaa_nominas/'.$este_es_el_periodo.'/'.$decimo_pago_mes.'/d/'.$cedula.'.PDF';


$filename_11a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$onceavo_pago_mes.'/a/'.$cedula.'.pdf';
$filename_11b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$onceavo_pago_mes.'/b/'.$cedula.'.pdf';
$filename_11c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$onceavo_pago_mes.'/c/'.$cedula.'.pdf';
$filename_11d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$onceavo_pago_mes.'/d/'.$cedula.'.pdf';


$filename_11A = 'aaa_nominas/'.$este_es_el_periodo.'/'.$onceavo_pago_mes.'/a/'.$cedula.'.PDF';
$filename_11B = 'aaa_nominas/'.$este_es_el_periodo.'/'.$onceavo_pago_mes.'/b/'.$cedula.'.PDF';
$filename_11C = 'aaa_nominas/'.$este_es_el_periodo.'/'.$onceavo_pago_mes.'/c/'.$cedula.'.PDF';
$filename_11D = 'aaa_nominas/'.$este_es_el_periodo.'/'.$onceavo_pago_mes.'/d/'.$cedula.'.PDF';


$filename_12a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$doceavo_pago_mes.'/a/'.$cedula.'.pdf';
$filename_12b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$doceavo_pago_mes.'/b/'.$cedula.'.pdf';
$filename_12c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$doceavo_pago_mes.'/c/'.$cedula.'.pdf';
$filename_12d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$doceavo_pago_mes.'/d/'.$cedula.'.pdf';


$filename_12A = 'aaa_nominas/'.$este_es_el_periodo.'/'.$doceavo_pago_mes.'/a/'.$cedula.'.PDF';
$filename_12B = 'aaa_nominas/'.$este_es_el_periodo.'/'.$doceavo_pago_mes.'/b/'.$cedula.'.PDF';
$filename_12C = 'aaa_nominas/'.$este_es_el_periodo.'/'.$doceavo_pago_mes.'/c/'.$cedula.'.PDF';
$filename_12D = 'aaa_nominas/'.$este_es_el_periodo.'/'.$doceavo_pago_mes.'/d/'.$cedula.'.PDF';




?>



 <div class="row ml-1">



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-moraoscuro o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>1° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $primer_pago; ?> - <?php echo $primer_pago_mes; ?></div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $primer_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">


<?php
if (file_exists($filename_01a)) {
  $filename0001a = $filename_01a;
}
if (file_exists($filename_01A)) {
  $filename0001a = $filename_01A;
}

if (file_exists($filename_01b)) {
  $filename0001b = $filename_01b;
}
if (file_exists($filename_01B)) {
  $filename0001b = $filename_01B;
}

if (file_exists($filename_01c)) {
  $filename0001c = $filename_01c;
}
if (file_exists($filename_01C)) {
  $filename0001c = $filename_01C;
}

if (file_exists($filename_01d)) {
  $filename0001d = $filename_01d;
}
if (file_exists($filename_01D)) {
  $filename0001d = $filename_01D;
}
?> 

<div class="mb-2"  <?php if (  !file_exists($filename_01a) && !file_exists($filename_01A) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0001a; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['01a']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_01b) && !file_exists($filename_01B) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0001b; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['01b']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_01c) && !file_exists($filename_01C) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0001c; ?>" target="_blank"  class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['01c']; ?> </a>
</div>


<div class="" <?php if (  !file_exists($filename_01d) && !file_exists($filename_01D) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0001d; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['01d']; ?> </a>
</div>                  
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 01 -->






  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-moraoscuro o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>2° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $segundo_pago; ?> - <?php echo $segundo_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $segundo_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">

<?php
if (file_exists($filename_02a)) {
  $filename0002a = $filename_02a;
}
if (file_exists($filename_02A)) {
  $filename0002a = $filename_02A;
}

if (file_exists($filename_02b)) {
  $filename0002b = $filename_02b;
}
if (file_exists($filename_02B)) {
  $filename0002b = $filename_02B;
}

if (file_exists($filename_02c)) {
  $filename0002c = $filename_02c;
}
if (file_exists($filename_02C)) {
  $filename0002c = $filename_02C;
}

if (file_exists($filename_02d)) {
  $filename0002d = $filename_02d;
}
if (file_exists($filename_02D)) {
  $filename0002d = $filename_02D;
}
?> 

<div class="mb-2"  <?php if (  !file_exists($filename_02a) && !file_exists($filename_02A) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0002a; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['02a']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_02b) && !file_exists($filename_02B) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0002b; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['02b']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_02c) && !file_exists($filename_02C) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0002c; ?>" target="_blank"  class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['02c']; ?> </a>
</div>


<div class="" <?php if (  !file_exists($filename_02d) && !file_exists($filename_02D) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0002d; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['02d']; ?> </a>
</div>   
               
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 02 -->



  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-moraoscuro o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>3° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $tercero_pago; ?> - <?php echo $tercero_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $tercero_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">

<?php
if (file_exists($filename_03a)) {
  $filename0003a = $filename_03a;
}
if (file_exists($filename_03A)) {
  $filename0003a = $filename_03A;
}

if (file_exists($filename_03b)) {
  $filename0003b = $filename_03b;
}
if (file_exists($filename_03B)) {
  $filename0003b = $filename_03B;
}

if (file_exists($filename_03c)) {
  $filename0003c = $filename_03c;
}
if (file_exists($filename_03C)) {
  $filename0003c = $filename_03C;
}

if (file_exists($filename_03d)) {
  $filename0003d = $filename_03d;
}
if (file_exists($filename_03D)) {
  $filename0003d = $filename_03D;
}
?> 

<div class="mb-2"  <?php if (  !file_exists($filename_03a) && !file_exists($filename_03A) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0003a; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['03a']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_03b) && !file_exists($filename_03B) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0003b; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['03b']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_03c) && !file_exists($filename_03C) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0003c; ?>" target="_blank"  class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['03c']; ?> </a>
</div>


<div class="" <?php if (  !file_exists($filename_03d) && !file_exists($filename_03D) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0003d; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['03d']; ?> </a>
</div>    
            
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 03 -->



  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-moraoscuro o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>4° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $cuarto_pago; ?> - <?php echo $cuarto_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $cuarto_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">

<?php
if (file_exists($filename_04a)) {
  $filename0004a = $filename_04a;
}
if (file_exists($filename_04A)) {
  $filename0004a = $filename_04A;
}

if (file_exists($filename_04b)) {
  $filename0004b = $filename_04b;
}
if (file_exists($filename_04B)) {
  $filename0004b = $filename_04B;
}

if (file_exists($filename_04c)) {
  $filename0004c = $filename_04c;
}
if (file_exists($filename_04C)) {
  $filename0004c = $filename_04C;
}

if (file_exists($filename_04d)) {
  $filename0004d = $filename_04d;
}
if (file_exists($filename_04D)) {
  $filename0004d = $filename_04D;
}
?> 

<div class="mb-2"  <?php if (  !file_exists($filename_04a) && !file_exists($filename_04A) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0004a; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['04a']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_04b) && !file_exists($filename_04B) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0004b; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['04b']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_04c) && !file_exists($filename_04C) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0004c; ?>" target="_blank"  class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['04c']; ?> </a>
</div>


<div class="" <?php if (  !file_exists($filename_04d) && !file_exists($filename_04D) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0004d; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['04d']; ?> </a>
</div>          
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 04 -->



</div>  <!-- cierre row -->



 <div class="row ml-1">



  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>5° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $quinto_pago; ?> - <?php echo $quinto_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $quinto_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">

<?php
if (file_exists($filename_05a)) {
  $filename0005a = $filename_05a;
}
if (file_exists($filename_05A)) {
  $filename0005a = $filename_05A;
}

if (file_exists($filename_05b)) {
  $filename0005b = $filename_05b;
}
if (file_exists($filename_05B)) {
  $filename0005b = $filename_05B;
}

if (file_exists($filename_05c)) {
  $filename0005c = $filename_05c;
}
if (file_exists($filename_05C)) {
  $filename0005c = $filename_05C;
}

if (file_exists($filename_05d)) {
  $filename0005d = $filename_05d;
}
if (file_exists($filename_05D)) {
  $filename0005d = $filename_05D;
}
?> 

<div class="mb-2"  <?php if (  !file_exists($filename_05a) && !file_exists($filename_05A) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0005a; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['05a']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_05b) && !file_exists($filename_05B) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0005b; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['05b']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_05c) && !file_exists($filename_05C) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0005c; ?>" target="_blank"  class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['05c']; ?> </a>
</div>


<div class="" <?php if (  !file_exists($filename_05d) && !file_exists($filename_05D) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0005d; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['05d']; ?> </a>
</div>    

             
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 05 -->




  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>6° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $sexto_pago; ?> - <?php echo $sexto_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $sexto_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">

<?php
if (file_exists($filename_06a)) {
  $filename0006a = $filename_06a;
}
if (file_exists($filename_06A)) {
  $filename0006a = $filename_06A;
}

if (file_exists($filename_06b)) {
  $filename0006b = $filename_06b;
}
if (file_exists($filename_06B)) {
  $filename0006b = $filename_06B;
}

if (file_exists($filename_06c)) {
  $filename0006c = $filename_06c;
}
if (file_exists($filename_06C)) {
  $filename0006c = $filename_06C;
}

if (file_exists($filename_06d)) {
  $filename0006d = $filename_06d;
}
if (file_exists($filename_06D)) {
  $filename0006d = $filename_06D;
}
?> 

<div class="mb-2"  <?php if (  !file_exists($filename_06a) && !file_exists($filename_06A) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0006a; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['06a']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_06b) && !file_exists($filename_06B) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0006b; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['06b']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_06c) && !file_exists($filename_06C) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0006c; ?>" target="_blank"  class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['06c']; ?> </a>
</div>


<div class="" <?php if (  !file_exists($filename_06d) && !file_exists($filename_06D) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0006d; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['06d']; ?> </a>
</div>   
               
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 06 -->


  

  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>7° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $septimo_pago; ?> - <?php echo $septimo_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $septimo_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">

<?php
if (file_exists($filename_07a)) {
  $filename0007a = $filename_07a;
}
if (file_exists($filename_07A)) {
  $filename0007a = $filename_07A;
}

if (file_exists($filename_07b)) {
  $filename0007b = $filename_07b;
}
if (file_exists($filename_07B)) {
  $filename0007b = $filename_07B;
}

if (file_exists($filename_07c)) {
  $filename0007c = $filename_07c;
}
if (file_exists($filename_07C)) {
  $filename0007c = $filename_07C;
}

if (file_exists($filename_07d)) {
  $filename0007d = $filename_07d;
}
if (file_exists($filename_07D)) {
  $filename0007d = $filename_07D;
}
?> 

<div class="mb-2"  <?php if (  !file_exists($filename_07a) && !file_exists($filename_07A) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0007a; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['07a']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_07b) && !file_exists($filename_07B) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0007b; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['07b']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_07c) && !file_exists($filename_07C) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0007c; ?>" target="_blank"  class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['07c']; ?> </a>
</div>


<div class="" <?php if (  !file_exists($filename_07d) && !file_exists($filename_07D) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0007d; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['07d']; ?> </a>
</div>   
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 07 -->



  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>8° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $octavo_pago; ?> - <?php echo $octavo_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $octavo_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">

<?php
if (file_exists($filename_08a)) {
  $filename0008a = $filename_08a;
}
if (file_exists($filename_08A)) {
  $filename0008a = $filename_08A;
}

if (file_exists($filename_08b)) {
  $filename0008b = $filename_08b;
}
if (file_exists($filename_08B)) {
  $filename0008b = $filename_08B;
}

if (file_exists($filename_08c)) {
  $filename0008c = $filename_08c;
}
if (file_exists($filename_08C)) {
  $filename0008c = $filename_08C;
}

if (file_exists($filename_08d)) {
  $filename0008d = $filename_08d;
}
if (file_exists($filename_08D)) {
  $filename0008d = $filename_08D;
}
?> 

<div class="mb-2"  <?php if (  !file_exists($filename_08a) && !file_exists($filename_08A) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0008a; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['08a']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_08b) && !file_exists($filename_08B) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0008b; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['08b']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_08c) && !file_exists($filename_08C) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0008c; ?>" target="_blank"  class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['08c']; ?> </a>
</div>


<div class="" <?php if (  !file_exists($filename_08d) && !file_exists($filename_08D) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0008d; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['08d']; ?> </a>
</div>      
                   
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 08 -->



</div>  <!-- cierre row 2 -->



 <div class="row ml-1">


  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-indigo o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>9° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $noveno_pago; ?> - <?php echo $noveno_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $noveno_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">

<?php
if (file_exists($filename_09a)) {
  $filename0009a = $filename_09a;
}
if (file_exists($filename_09A)) {
  $filename0009a = $filename_09A;
}

if (file_exists($filename_09b)) {
  $filename0009b = $filename_09b;
}
if (file_exists($filename_09B)) {
  $filename0009b = $filename_09B;
}

if (file_exists($filename_09c)) {
  $filename0009c = $filename_09c;
}
if (file_exists($filename_09C)) {
  $filename0009c = $filename_09C;
}

if (file_exists($filename_09d)) {
  $filename0009d = $filename_09d;
}
if (file_exists($filename_09D)) {
  $filename0009d = $filename_09D;
}
?> 

<div class="mb-2"  <?php if (  !file_exists($filename_09a) && !file_exists($filename_09A) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0009a; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['09a']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_09b) && !file_exists($filename_09B) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0009b; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['09b']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_09c) && !file_exists($filename_09C) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0009c; ?>" target="_blank"  class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['09c']; ?> </a>
</div>


<div class="" <?php if (  !file_exists($filename_09d) && !file_exists($filename_09D) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0009d; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['09d']; ?> </a>
</div>       
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 09 -->





  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-indigo o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>10° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $decimo_pago; ?> - <?php echo $decimo_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $decimo_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">

<?php
if (file_exists($filename_10a)) {
  $filename0010a = $filename_10a;
}
if (file_exists($filename_10A)) {
  $filename0010a = $filename_10A;
}

if (file_exists($filename_10b)) {
  $filename0010b = $filename_10b;
}
if (file_exists($filename_10B)) {
  $filename0010b = $filename_10B;
}

if (file_exists($filename_10c)) {
  $filename0010c = $filename_10c;
}
if (file_exists($filename_10C)) {
  $filename0010c = $filename_10C;
}

if (file_exists($filename_10d)) {
  $filename0010d = $filename_10d;
}
if (file_exists($filename_10D)) {
  $filename0010d = $filename_10D;
}
?> 

<div class="mb-2"  <?php if (  !file_exists($filename_10a) && !file_exists($filename_10A) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0010a; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['10a']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_10b) && !file_exists($filename_10B) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0010b; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['10b']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_10c) && !file_exists($filename_10C) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0010c; ?>" target="_blank"  class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['10c']; ?> </a>
</div>


<div class="" <?php if (  !file_exists($filename_10d) && !file_exists($filename_10D) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0010d; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['10d']; ?> </a>
</div>     
                     
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 10 -->




  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-indigo o-hidden h-110">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>11° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $onceavo_pago; ?> - <?php echo $onceavo_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $onceavo_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">

<?php
if (file_exists($filename_11a)) {
  $filename0011a = $filename_11a;
}
if (file_exists($filename_11A)) {
  $filename0011a = $filename_11A;
}

if (file_exists($filename_11b)) {
  $filename0011b = $filename_11b;
}
if (file_exists($filename_11B)) {
  $filename0011b = $filename_11B;
}

if (file_exists($filename_11c)) {
  $filename0011c = $filename_11c;
}
if (file_exists($filename_11C)) {
  $filename0011c = $filename_11C;
}

if (file_exists($filename_11d)) {
  $filename0011d = $filename_11d;
}
if (file_exists($filename_11D)) {
  $filename0011d = $filename_11D;
}
?> 

<div class="mb-2"  <?php if (  !file_exists($filename_11a) && !file_exists($filename_11A) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0011a; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['11a']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_11b) && !file_exists($filename_11B) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0011b; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['11b']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_11c) && !file_exists($filename_11C) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0011c; ?>" target="_blank"  class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['11c']; ?> </a>
</div>


<div class="" <?php if (  !file_exists($filename_11d) && !file_exists($filename_11D) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0011d; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['11d']; ?> </a>
</div>           
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 11 -->





        
  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-indigo o-hidden h-120">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>12° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $doceavo_pago; ?> - <?php echo $doceavo_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $doceavo_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">

<?php
if (file_exists($filename_12a)) {
  $filename0012a = $filename_12a;
}
if (file_exists($filename_12A)) {
  $filename0012a = $filename_12A;
}

if (file_exists($filename_12b)) {
  $filename0012b = $filename_12b;
}
if (file_exists($filename_12B)) {
  $filename0012b = $filename_12B;
}

if (file_exists($filename_12c)) {
  $filename0012c = $filename_12c;
}
if (file_exists($filename_12C)) {
  $filename0012c = $filename_12C;
}

if (file_exists($filename_12d)) {
  $filename0012d = $filename_12d;
}
if (file_exists($filename_12D)) {
  $filename0012d = $filename_12D;
}
?> 

<div class="mb-2"  <?php if (  !file_exists($filename_12a) && !file_exists($filename_12A) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0012a; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['12a']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_12b) && !file_exists($filename_12B) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0012b; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['12b']; ?> </a>
</div>

<div class="mb-2" <?php if (  !file_exists($filename_12c) && !file_exists($filename_12C) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0012c; ?>" target="_blank"  class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['12c']; ?> </a>
</div>


<div class="" <?php if (  !file_exists($filename_12d) && !file_exists($filename_12D) )  {?>style="display:none"<?php } ?>  >
<a href="<?php echo $filename0012d; ?>"  target="_blank" class="btn btn-light" role="button">Ver: <?php echo $row_datos_statusH['12d']; ?> </a>
</div>          
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 12 -->



 </div>  <!-- cierre row 3 -->



























                           

            </div>   <!-- cierre container fluid -->
        </div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
