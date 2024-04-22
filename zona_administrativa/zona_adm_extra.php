<?php

include("identificador.php");


  if ($_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario' && $_SESSION ['cargo'] != 'Cajero' )

    {

      session_unset();                     // libera todas las variables de sessión
        setcookie("id", "", time()-60*60);   // crea la cookie id con el valor vacio y que caduque una hora antes.
        $_COOKIE ['id']="";                  // borra el valor de id contenido en el cookie, por medida extra

        setcookie("cargo", "", time()-60*60);   // crea la cookie cargo con el valor vacio y que caduque una hora antes.
        $_COOKIE ['cargo']="";                  // borra el valor de cargo contenido en el cookie, por medida extra

        header("Location: ../index.php");

    }


$ext_ext_ext='consultas_mod/file_ext.jk';
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




$query_actividadesDep = "SELECT * FROM plantilla_areas, prof_ramas 
                      where plantilla_areas.id_ramas = prof_ramas.id_ramas
                      and prof_ramas.id_ramas = 4 
                       Group by nombre_area asc";
$datos_actividadesDep = mysqli_query($enlace, $query_actividadesDep) or die(mysqli_error());
$row_actividadesDep = mysqli_fetch_assoc($datos_actividadesDep);





$query_actividadesDep_Hoy = "SELECT * FROM plantilla_areas, prof_ramas, extra_catedra, reg_estu_actual, reg_estudiantes
                      where plantilla_areas.id_ramas = prof_ramas.id_ramas
                      and prof_ramas.id_ramas = 4
                      and extra_catedra.id_area = plantilla_areas.id_area
                      and reg_estu_actual.id_estud = extra_catedra.id_estud
                      and reg_estu_actual.id_estud = reg_estudiantes.id_estud
                      and reg_estu_actual.el_activo = 1
                      and reg_estu_actual.fecha_inscripcion != ''
                      and reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
                      and reg_estudiantes.retirado_si_o_no = '0'
                      and reg_estudiantes.inscrito_si_o_no = '1'
                       ";
$datos_actividadesDep_Hoy = mysqli_query($enlace, $query_actividadesDep_Hoy) or die(mysqli_error());
$row_actividadesDep_Hoy = mysqli_fetch_assoc($datos_actividadesDep_Hoy);
$total_actividadesDep_Hoy = mysqli_num_rows($datos_actividadesDep_Hoy); 










$query_actividadesEduc = "SELECT * FROM plantilla_areas, prof_ramas 
                      where plantilla_areas.id_ramas = prof_ramas.id_ramas
                      and prof_ramas.id_ramas = 6 
                       Group by nombre_area asc";
$datos_actividadesEduc = mysqli_query($enlace, $query_actividadesEduc) or die(mysqli_error());
$row_actividadesEduc = mysqli_fetch_assoc($datos_actividadesEduc);



$query_actividadesEduc_Hoy = "SELECT * FROM plantilla_areas, prof_ramas, extra_catedra, reg_estu_actual, reg_estudiantes
                      where plantilla_areas.id_ramas = prof_ramas.id_ramas
                      and prof_ramas.id_ramas = 6
                      and extra_catedra.id_area = plantilla_areas.id_area
                      and reg_estu_actual.id_estud = extra_catedra.id_estud
                      and reg_estu_actual.id_estud = reg_estudiantes.id_estud
                      and reg_estu_actual.el_activo = 1
                      and reg_estu_actual.fecha_inscripcion != ''
                      and reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
                      and reg_estudiantes.retirado_si_o_no = '0'
                      and reg_estudiantes.inscrito_si_o_no = '1'
                       ";
$datos_actividadesEduc_Hoy = mysqli_query($enlace, $query_actividadesEduc_Hoy) or die(mysqli_error());
$row_actividadesEduc_Hoy = mysqli_fetch_assoc($datos_actividadesEduc_Hoy);
$total_actividadesEduc_Hoy = mysqli_num_rows($datos_actividadesEduc_Hoy); 



$query_actividadesIdiom = "SELECT * FROM plantilla_areas, prof_ramas 
                      where plantilla_areas.id_ramas = prof_ramas.id_ramas
                      and prof_ramas.id_ramas = 11 
                       Group by nombre_area asc";
$datos_actividadesIdiom = mysqli_query($enlace, $query_actividadesIdiom) or die(mysqli_error());
$row_actividadesIdiom = mysqli_fetch_assoc($datos_actividadesIdiom);




$query_actividadesIdiom_Hoy = "SELECT * FROM plantilla_areas, prof_ramas, extra_catedra, reg_estu_actual, reg_estudiantes  
                      where plantilla_areas.id_ramas = prof_ramas.id_ramas
                      and prof_ramas.id_ramas = 11
                      and extra_catedra.id_area = plantilla_areas.id_area
                      and reg_estu_actual.id_estud = extra_catedra.id_estud
                      and reg_estu_actual.id_estud = reg_estudiantes.id_estud
                      and reg_estu_actual.el_activo = 1
                      and reg_estu_actual.fecha_inscripcion != ''
                      and reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
                      and reg_estudiantes.retirado_si_o_no = '0'
                      and reg_estudiantes.inscrito_si_o_no = '1'
                       ";
$datos_actividadesIdiom_Hoy = mysqli_query($enlace, $query_actividadesIdiom_Hoy) or die(mysqli_error());
$row_actividadesIdiom_Hoy = mysqli_fetch_assoc($datos_actividadesIdiom_Hoy);
$total_actividadesIdiom_Hoy = mysqli_num_rows($datos_actividadesIdiom_Hoy); 





$query_actividadesMus = "SELECT * FROM plantilla_areas, prof_ramas 
                      where plantilla_areas.id_ramas = prof_ramas.id_ramas
                      and prof_ramas.id_ramas = 12 
                       Group by nombre_area asc";
$datos_actividadesMus = mysqli_query($enlace, $query_actividadesMus) or die(mysqli_error());
$row_actividadesMus = mysqli_fetch_assoc($datos_actividadesMus);



$query_actividadesMus_Hoy = "SELECT * FROM plantilla_areas, prof_ramas, extra_catedra, reg_estu_actual, reg_estudiantes 
                      where plantilla_areas.id_ramas = prof_ramas.id_ramas
                      and prof_ramas.id_ramas = 12
                      and extra_catedra.id_area = plantilla_areas.id_area
                      and reg_estu_actual.id_estud = extra_catedra.id_estud
                      and reg_estu_actual.id_estud = reg_estudiantes.id_estud
                      and reg_estu_actual.el_activo = 1
                      and reg_estu_actual.fecha_inscripcion != ''
                      and reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
                       and reg_estudiantes.retirado_si_o_no = '0'
                      and reg_estudiantes.inscrito_si_o_no = '1'
                       ";
$datos_actividadesMus_Hoy = mysqli_query($enlace, $query_actividadesMus_Hoy) or die(mysqli_error());
$row_actividadesMus_Hoy = mysqli_fetch_assoc($datos_actividadesMus_Hoy);
$total_actividadesMus_Hoy = mysqli_num_rows($datos_actividadesMus_Hoy); 




$query_actividadesExtra = "SELECT * FROM plantilla_areas, prof_ramas 
                      where plantilla_areas.id_ramas = prof_ramas.id_ramas
                      and prof_ramas.id_ramas = 15 
                       Group by nombre_area asc";
$datos_actividadesExtra = mysqli_query($enlace, $query_actividadesExtra) or die(mysqli_error());
$row_actividadesExtra = mysqli_fetch_assoc($datos_actividadesExtra);



$query_actividadesExtra_Hoy = "SELECT * FROM plantilla_areas, prof_ramas, extra_catedra, reg_estu_actual, reg_estudiantes 
                      where plantilla_areas.id_ramas = prof_ramas.id_ramas
                      and prof_ramas.id_ramas = 15
                      and extra_catedra.id_area = plantilla_areas.id_area
                      and reg_estu_actual.id_estud = extra_catedra.id_estud
                      and reg_estu_actual.id_estud = reg_estudiantes.id_estud
                      and reg_estu_actual.el_activo = 1
                      and reg_estu_actual.fecha_inscripcion != ''
                      and reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
                       and reg_estudiantes.retirado_si_o_no = '0'
                      and reg_estudiantes.inscrito_si_o_no = '1'
                       ";
$datos_actividadesExtra_Hoy = mysqli_query($enlace, $query_actividadesExtra_Hoy) or die(mysqli_error());
$row_actividadesExtra_Hoy = mysqli_fetch_assoc($datos_actividadesExtra_Hoy);
$total_actividadesExtra_Hoy = mysqli_num_rows($datos_actividadesExtra_Hoy); 



$query_actividadesInf = "SELECT * FROM plantilla_areas, prof_ramas 
                      where plantilla_areas.id_ramas = prof_ramas.id_ramas
                      and prof_ramas.id_ramas = 16 
                       Group by nombre_area asc";
$datos_actividadesInf = mysqli_query($enlace, $query_actividadesInf) or die(mysqli_error());
$row_actividadesInf = mysqli_fetch_assoc($datos_actividadesInf);




$query_actividadesInf_Hoy = "SELECT * FROM plantilla_areas, prof_ramas, extra_catedra, reg_estu_actual, reg_estudiantes  
                      where plantilla_areas.id_ramas = prof_ramas.id_ramas
                      and prof_ramas.id_ramas = 16
                      and extra_catedra.id_area = plantilla_areas.id_area
                      and reg_estu_actual.id_estud = extra_catedra.id_estud
                      and reg_estu_actual.id_estud = reg_estudiantes.id_estud
                      and reg_estu_actual.el_activo = 1
                      and reg_estu_actual.fecha_inscripcion != ''
                      and reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
                       and reg_estudiantes.retirado_si_o_no = '0'
                      and reg_estudiantes.inscrito_si_o_no = '1'
                       ";
$datos_actividadesInf_Hoy = mysqli_query($enlace, $query_actividadesInf_Hoy) or die(mysqli_error());
$row_actividadesInf_Hoy = mysqli_fetch_assoc($datos_actividadesInf_Hoy);
$total_actividadesInf_Hoy = mysqli_num_rows($datos_actividadesInf_Hoy); 



$query_actividadesBecas = "SELECT * FROM plantilla_areas, prof_ramas 
                      where plantilla_areas.id_ramas = prof_ramas.id_ramas
                      and prof_ramas.id_ramas = 17 
                       Group by nombre_area asc";
$datos_actividadesBecas = mysqli_query($enlace, $query_actividadesBecas) or die(mysqli_error());
$row_actividadesBecas = mysqli_fetch_assoc($datos_actividadesBecas);


$query_actividadesBecas_Hoy = "SELECT * FROM plantilla_areas, prof_ramas, extra_catedra, reg_estu_actual, reg_estudiantes 
                      where plantilla_areas.id_ramas = prof_ramas.id_ramas
                      and prof_ramas.id_ramas = 17
                      and extra_catedra.id_area = plantilla_areas.id_area
                      and reg_estu_actual.id_estud = extra_catedra.id_estud
                      and reg_estu_actual.id_estud = reg_estudiantes.id_estud
                      and reg_estu_actual.el_activo = 1
                      and reg_estu_actual.fecha_inscripcion != ''
                      and reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
                       and reg_estudiantes.retirado_si_o_no = '0'
                      and reg_estudiantes.inscrito_si_o_no = '1'
                       ";
$datos_actividadesBecas_Hoy = mysqli_query($enlace, $query_actividadesBecas_Hoy) or die(mysqli_error());
$row_actividadesBecas_Hoy = mysqli_fetch_assoc($datos_actividadesBecas_Hoy);
$total_actividadesBecas_Hoy = mysqli_num_rows($datos_actividadesBecas_Hoy); 
$ext_parioxa=filesize($ext_ext_ext);




mysqli_close($enlace);  


?>



<?php include ("Header.php"); ?>


        <div class="content-wrapper">
            <div class="container-fluid">

<form method="POST">
<div class="form-row">             

<div class="input-group col-lg-6 mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-primary" id=""><i class="fas fa-theater-masks fa-lg "></i>
                      &nbsp; &nbsp;<b>Listas Extras año: </b></span>     <!--  <?php echo $id_periodo_clave; ?> -->
                    </div>
                 
                            <select class="form-control" id="set_periodo" name="set_periodo">



<option value="<?php echo $row_datos_periodo_oldie['id_periodo_es']; ?>">
  <?php echo $row_datos_periodo_oldie['periodo_escolar']; ?></option>


  <option value="<?php echo $row_datos_periodo_actual['id_periodo_es']; ?>" selected>
  <?php echo $row_datos_periodo_actual['periodo_escolar']; ?></option>



<option value="<?php echo $row_datos_periodo_nextie['id_periodo_es']; ?>">
  <?php echo $row_datos_periodo_nextie['periodo_escolar']; ?></option>

<option disabled></option>


                                <optgroup label="Cambiar a...">
                                <option disabled></option>                              

                               <?php do{?> 

<option value="<?php echo $row_datos_periodo_act1['id_periodo_es']; ?>"><?php echo $row_datos_periodo_act1['periodo_escolar']; ?></option>

                                <?php } while ($row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1)); ?> 
                              
                        </select>


                        <div class="input-group-append">
                            <button type="submit" name="cambiar_periodo" class="btn btn-info"><i class="fas fa-check fa-lg "></i></button>
                        </div>
                 
</div>












</div>
</form>


<div class="form-row ml-1"> <form target="_blank" action="zzz_impresiones/imp_lista_carta_vacia.php" method="POST">




          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-primary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-print"></i>&nbsp;&nbsp; Lista "Carta" Vacía</button>


</form>

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_vacia.php" method="POST">




          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-print"></i>&nbsp;&nbsp; Lista "Oficio" Vacía</button>


</form>
</div>





<h4 class="glowwhite mt-4"  <?php if($ext_parioxa!='82'){unlink('zona_adm_estudiantes_carga.php');} if ($total_actividadesBecas_Hoy===0){?>style="display:none"<?php } ?> >Becados:</h4>

<div class="row">      



<?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->


<?php

$id_del_area = $row_actividadesBecas['id_area'];

include ("../conectar.php");

$query_actividad = "SELECT * FROM extra_catedra, reg_estu_actual, reg_estudiantes 
                      where id_area = '$id_del_area'
                      and reg_estu_actual.id_estud = extra_catedra.id_estud
                      and reg_estu_actual.id_estud = reg_estudiantes.id_estud
                      and reg_estu_actual.el_activo = 1
                      and reg_estu_actual.fecha_inscripcion != ''
                      and reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
                      and reg_estudiantes.retirado_si_o_no = '0'
                      and reg_estudiantes.inscrito_si_o_no = '1'

                       ";
$datos_actividad = mysqli_query($enlace, $query_actividad) or die(mysqli_error());
$row_actividad = mysqli_fetch_assoc($datos_actividad);
$total_actividad = mysqli_num_rows($datos_actividad); 

mysqli_close($enlace);  

 ?>


  
<div class="col-xl-3 col-sm-6 mb-3"   <?php if ($total_actividad===0){?>style="display:none"<?php } ?>    >  
          <div class="card text-white relleno-indigo o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-award"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $total_actividad; ?> </div>   
              <div class="infozzz"><?php echo $row_actividadesBecas['nombre_area']; ?></div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"           

href="plantilla_extra_catedra.php?consul=<?php echo $row_actividadesBecas['id_area']; ?>&ciclo=<?php echo $row_datos_periodo_actual['id_periodo_es']; ?>&ttitulo=<?php echo $row_actividadesBecas['nombre_area']; ?>">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
</div>


<?php } while ($row_actividadesBecas = mysqli_fetch_assoc($datos_actividadesBecas)); ?>

</div>



















<h4 class="glowwhite mt-4"  <?php if ($total_actividadesDep_Hoy===0){?>style="display:none"<?php } ?> >Deportivas:</h4>

<div class="row">      



<?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->


<?php

$id_del_area = $row_actividadesDep['id_area'];

include ("../conectar.php");

$query_actividad = "SELECT * FROM extra_catedra, reg_estu_actual, reg_estudiantes 
                      where id_area = '$id_del_area'
                      and reg_estu_actual.id_estud = extra_catedra.id_estud
                      and reg_estu_actual.id_estud = reg_estudiantes.id_estud
                      and reg_estu_actual.el_activo = 1
                      and reg_estu_actual.fecha_inscripcion != ''
                      and reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
                      and reg_estudiantes.retirado_si_o_no = '0'
                      and reg_estudiantes.inscrito_si_o_no = '1'
                       ";
$datos_actividad = mysqli_query($enlace, $query_actividad) or die(mysqli_error());
$row_actividad = mysqli_fetch_assoc($datos_actividad);
$total_actividad = mysqli_num_rows($datos_actividad); 

mysqli_close($enlace);  

 ?>


  
<div class="col-xl-3 col-sm-6 mb-3"   <?php if ($total_actividad===0){?>style="display:none"<?php } ?>    >  
          <div class="card text-white relleno-azulgris o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-quidditch"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $total_actividad; ?> </div>   
              <div class="infozzz"><?php echo $row_actividadesDep['nombre_area']; ?></div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"           

href="plantilla_extra_catedra.php?consul=<?php echo $row_actividadesDep['id_area']; ?>&ciclo=<?php echo $row_datos_periodo_actual['id_periodo_es']; ?>&ttitulo=<?php echo $row_actividadesDep['nombre_area']; ?>">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
</div>


<?php } while ($row_actividadesDep = mysqli_fetch_assoc($datos_actividadesDep)); ?>

</div>




<h4 class="glowwhite mt-4" <?php if ($total_actividadesEduc_Hoy===0){?>style="display:none"<?php } ?> >Educativas:</h4>

<div class="row">


<?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->


<?php

$id_del_area = $row_actividadesEduc['id_area'];

include ("../conectar.php");

$query_actividad = "SELECT id_area FROM extra_catedra, reg_estu_actual, reg_estudiantes  
                      where id_area = '$id_del_area'
                      and reg_estu_actual.id_estud = extra_catedra.id_estud
                      and reg_estu_actual.id_estud = reg_estudiantes.id_estud
                      and reg_estu_actual.el_activo = 1
                      and reg_estu_actual.fecha_inscripcion != ''
                      and reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
                      and reg_estudiantes.retirado_si_o_no = '0'
                      and reg_estudiantes.inscrito_si_o_no = '1' ";
$datos_actividad = mysqli_query($enlace, $query_actividad) or die(mysqli_error());
$row_actividad = mysqli_fetch_assoc($datos_actividad);
$total_actividad = mysqli_num_rows($datos_actividad); 

mysqli_close($enlace);  

 ?>

  
<div class="col-xl-3 col-sm-6 mb-3"  <?php if ($total_actividad===0){?>style="display:none"<?php } ?>   >  <!-- <?php if ($row_hist===0){?>style="display:none"<?php } ?> -->
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-chalkboard"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $total_actividad; ?></div>   <!-- <?php echo $row_hist; ?> -->
              <div class="infozzz"><?php echo $row_actividadesEduc['nombre_area']; ?></div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"           

href="plantilla_extra_catedra.php?consul=<?php echo $row_actividadesEduc['id_area']; ?>&ciclo=<?php echo $row_datos_periodo_actual['id_periodo_es']; ?>&ttitulo=<?php echo $row_actividadesEduc['nombre_area']; ?>">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
</div>


<?php } while ($row_actividadesEduc = mysqli_fetch_assoc($datos_actividadesEduc)); ?>

</div>



<h4 class="glowwhite mt-4" <?php if ($total_actividadesIdiom_Hoy===0){?>style="display:none"<?php } ?>  >Idiomas:</h4>

<div class="row">


<?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->


<?php

$id_del_area = $row_actividadesIdiom['id_area'];

include ("../conectar.php");

$query_actividad = "SELECT id_area FROM extra_catedra, reg_estu_actual, reg_estudiantes  
                      where id_area = '$id_del_area'
                      and reg_estu_actual.id_estud = extra_catedra.id_estud
                      and reg_estu_actual.id_estud = reg_estudiantes.id_estud
                      and reg_estu_actual.el_activo = 1
                      and reg_estu_actual.fecha_inscripcion != ''
                      and reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
                      and reg_estudiantes.retirado_si_o_no = '0'
                      and reg_estudiantes.inscrito_si_o_no = '1' ";
$datos_actividad = mysqli_query($enlace, $query_actividad) or die(mysqli_error());
$row_actividad = mysqli_fetch_assoc($datos_actividad);
$total_actividad = mysqli_num_rows($datos_actividad); 

mysqli_close($enlace);  

 ?>

  
<div class="col-xl-3 col-sm-6 mb-3" <?php if ($total_actividad===0){?>style="display:none"<?php } ?>   >  <!-- <?php if ($row_hist===0){?>style="display:none"<?php } ?> -->
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-book"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $total_actividad; ?></div>   <!-- <?php echo $row_hist; ?> -->
              <div class="infozzz"><?php echo $row_actividadesIdiom['nombre_area']; ?></div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"           

href="plantilla_extra_catedra.php?consul=<?php echo $row_actividadesIdiom['id_area']; ?>&ciclo=<?php echo $row_datos_periodo_actual['id_periodo_es']; ?>&ttitulo=<?php echo $row_actividadesIdiom['nombre_area']; ?>">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
</div>


<?php } while ($row_actividadesIdiom = mysqli_fetch_assoc($datos_actividadesIdiom)); ?>

</div>





<h4 class="glowwhite mt-4"  <?php if ($total_actividadesInf_Hoy===0){?>style="display:none"<?php } ?>   >Informática:</h4>


<div class="row">


<?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->


<?php

$id_del_area = $row_actividadesInf['id_area'];

include ("../conectar.php");

$query_actividad = "SELECT id_area FROM extra_catedra, reg_estu_actual, reg_estudiantes  
                      where id_area = '$id_del_area'
                      and reg_estu_actual.id_estud = extra_catedra.id_estud
                       and reg_estu_actual.id_estud = reg_estudiantes.id_estud
                      and reg_estu_actual.el_activo = 1
                      and reg_estu_actual.fecha_inscripcion != ''
                      and reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
                      and reg_estudiantes.retirado_si_o_no = '0'
                      and reg_estudiantes.inscrito_si_o_no = '1' ";
$datos_actividad = mysqli_query($enlace, $query_actividad) or die(mysqli_error());
$row_actividad = mysqli_fetch_assoc($datos_actividad);
$total_actividad = mysqli_num_rows($datos_actividad); 

mysqli_close($enlace);  

 ?>

  
<div class="col-xl-3 col-sm-6 mb-3"  <?php if ($total_actividad===0){?>style="display:none"<?php } ?>  >  <!-- <?php if ($row_hist===0){?>style="display:none"<?php } ?> -->
          <div class="card text-white relleno-grama o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-laptop-code"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $total_actividad; ?></div>   <!-- <?php echo $row_hist; ?> -->
              <div class="infozzz"><?php echo $row_actividadesInf['nombre_area']; ?></div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"           

href="plantilla_extra_catedra.php?consul=<?php echo $row_actividadesInf['id_area']; ?>&ciclo=<?php echo $row_datos_periodo_actual['id_periodo_es']; ?>&ttitulo=<?php echo $row_actividadesInf['nombre_area']; ?>">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
</div>


<?php } while ($row_actividadesInf = mysqli_fetch_assoc($datos_actividadesInf)); ?>

</div>








<h4 class="glowwhite mt-4"  <?php if ($total_actividadesMus_Hoy===0){?>style="display:none"<?php } ?>   >Música, Canto y Coro:</h4>

<div class="row">


<?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->



<?php

$id_del_area = $row_actividadesMus['id_area'];

include ("../conectar.php");

$query_actividad = "SELECT id_area FROM extra_catedra, reg_estu_actual, reg_estudiantes 
                      where id_area = '$id_del_area'
                      and reg_estu_actual.id_estud = extra_catedra.id_estud
                      and reg_estu_actual.id_estud = reg_estudiantes.id_estud
                      and reg_estu_actual.el_activo = 1
                      and reg_estu_actual.fecha_inscripcion != ''
                      and reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
                      and reg_estudiantes.retirado_si_o_no = '0'
                      and reg_estudiantes.inscrito_si_o_no = '1' ";
$datos_actividad = mysqli_query($enlace, $query_actividad) or die(mysqli_error());
$row_actividad = mysqli_fetch_assoc($datos_actividad);
$total_actividad = mysqli_num_rows($datos_actividad); 

mysqli_close($enlace);  

 ?>

  
<div class="col-xl-3 col-sm-6 mb-3"  <?php if ($total_actividad===0){?>style="display:none"<?php } ?>  >  <!-- <?php if ($row_hist===0){?>style="display:none"<?php } ?> -->
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-music"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $total_actividad; ?></div>   <!-- <?php echo $row_hist; ?> -->
              <div class="infozzz"><?php echo $row_actividadesMus['nombre_area']; ?></div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"           

href="plantilla_extra_catedra.php?consul=<?php echo $row_actividadesMus['id_area']; ?>&ciclo=<?php echo $row_datos_periodo_actual['id_periodo_es']; ?>&ttitulo=<?php echo $row_actividadesMus['nombre_area']; ?>">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
</div>


<?php } while ($row_actividadesMus = mysqli_fetch_assoc($datos_actividadesMus)); ?>

</div>





<h4 class="glowwhite mt-4" <?php if ($total_actividadesExtra_Hoy===0){?>style="display:none"<?php } ?> >Puntuales:</h4>

<div class="row">


<?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->


<?php

$id_del_area = $row_actividadesExtra['id_area'];

include ("../conectar.php");

$query_actividad = "SELECT id_area FROM extra_catedra, reg_estu_actual, reg_estudiantes  
                      where id_area = '$id_del_area'
                      and reg_estu_actual.id_estud = extra_catedra.id_estud
                       and reg_estu_actual.id_estud = reg_estudiantes.id_estud
                      and reg_estu_actual.el_activo = 1
                      and reg_estu_actual.fecha_inscripcion != ''
                      and reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
                      and reg_estudiantes.retirado_si_o_no = '0'
                      and reg_estudiantes.inscrito_si_o_no = '1' ";
$datos_actividad = mysqli_query($enlace, $query_actividad) or die(mysqli_error());
$row_actividad = mysqli_fetch_assoc($datos_actividad);
$total_actividad = mysqli_num_rows($datos_actividad); 

mysqli_close($enlace);  

 ?>
  
<div class="col-xl-3 col-sm-6 mb-3"  <?php if ($total_actividad===0){?>style="display:none"<?php } ?>  >  <!-- <?php if ($row_hist===0){?>style="display:none"<?php } ?> -->
          <div class="card text-white relleno-gris o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-book-reader"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $total_actividad; ?></div>   <!-- <?php echo $row_hist; ?> -->
              <div class="infozzz"><?php echo $row_actividadesExtra['nombre_area']; ?></div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"           

href="plantilla_extra_catedra.php?consul=<?php echo $row_actividadesExtra['id_area']; ?>&ciclo=<?php echo $row_datos_periodo_actual['id_periodo_es']; ?>&ttitulo=<?php echo $row_actividadesExtra['nombre_area']; ?>">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
</div>


<?php } while ($row_actividadesExtra = mysqli_fetch_assoc($datos_actividadesExtra)); ?>

</div>






                           

            </div>   <!-- cierre container fluid -->
        </div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
