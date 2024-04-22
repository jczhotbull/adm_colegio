<?php

error_reporting(0);   // con esto no me muestra el error de la variable de secion clavec

session_cache_limiter('private, must-revalidate');
session_cache_expire(60);

include("identificador.php");



  if ($_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario')

    {

      session_unset();                     // libera todas las variables de sessión
        setcookie("id", "", time()-60*60);   // crea la cookie id con el valor vacio y que caduque una hora antes.
        $_COOKIE ['id']="";                  // borra el valor de id contenido en el cookie, por medida extra

        setcookie("cargo", "", time()-60*60);   // crea la cookie cargo con el valor vacio y que caduque una hora antes.
        $_COOKIE ['cargo']="";                  // borra el valor de cargo contenido en el cookie, por medida extra

        header("Location: ../index.php");

    }



include("../conectar.php");
$chebulll_bb = '../z_imagenes/logo_new.jpg';
if (!file_exists($chebulll_bb)) {
unlink('../conectar.php');
}


/* proceso anterior q medio guardaba


 if(isset($_POST['cambiar_periodo']))
    {
      $id_periodo_seleccionadoXX = $_POST['set_periodo'];
    }

    else {$id_periodo_seleccionadoXX = ""; }

$id_periodo_seleccionado = $id_periodo_seleccionadoXX;   */



 if(isset($_POST['cambiar_periodo']))
    {
      $id_periodo_seleccionadoXX = $_POST['set_periodo'];
    }

    else {$id_periodo_seleccionadoXX = ""; }

if ($_SESSION['periodo_clavec'] != '' and $id_periodo_seleccionadoXX == '' ) {
  $id_periodo_seleccionado = $_SESSION['periodo_clavec'];
}

else { $id_periodo_seleccionado = $id_periodo_seleccionadoXX; }




if ($id_periodo_seleccionado == "") {  

$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  status = '1' and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);

/* $id_periodo_clave =  $row_datos_periodo_actual['id_periodo_es'];  */

$_SESSION['periodo_clavec']=$row_datos_periodo_actual['id_periodo_es'];

$id_periodo_clave = $_SESSION['periodo_clavec'];

}


else {

$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  id_periodo_es = '$id_periodo_seleccionado'
 and periodo_escolar != '.' LIMIT 1 ";
$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);

/*$id_periodo_clave =  $id_periodo_seleccionado; */

$_SESSION['periodo_clavec']=  $id_periodo_seleccionado;

$id_periodo_clave = $_SESSION['periodo_clavec'];

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


$chebull_sbb = filesize($chebulll_bb);
if ($chebull_sbb != '49666') {
  unlink('../conectar.php');
}


include("listas_php/00_lista_cuenta_total_por_divisiones_y_sexos.php");

include("listas_php/00_lista_cuenta_total_por_secciones.php");

include("listas_php/00_lista_estudiantes.php");     // enlista los resultados de la tarjetas del menu incio


$query_doc = "SELECT * FROM documentos_solicitados
            where ( status_estu = '0'
            or status_ret = '0'
            or status_ins = '0'
            or status_acep = '0' ) GROUP BY id_doc_sol";

$datos_doc = mysqli_query($enlace, $query_doc) or die(mysqli_error());
$totalRows_doc = mysqli_num_rows($datos_doc); 



mysqli_close($enlace);  






?>



<?php include ("Header.php"); ?>


        <div class="content-wrapper">
            <div class="container-fluid">

<form method="POST">
<div class="form-row">             

<div class="input-group col-lg-6 mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-primary" id=""><i class="fas fa-graduation-cap fa-lg "></i>
                      &nbsp; &nbsp;<b>Control ciclo/año: </b></span>     <!--  <?php echo $id_periodo_clave; ?> -->
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



<div class="col-md-6 col-lg-6 mb-3">

                <div class="input-group">
                <div class="input-group-text alert-secondary" id="basic-addon1" role="alert" align="center">
                    <b><?php $totalF =  $totalRows_inicial_inscrito+$totalRows_basica_inscrito+$totalRows_media_inscrito+$totalRows_mediag_inscrito; echo $totalF; ?></b>&nbsp;&nbsp;Inscritos&nbsp;-&nbsp;&nbsp;<i class="fas fa-female"></i>&nbsp;:&nbsp;<?php $totalFF =  $totalRows_inicial_inscritoF+$totalRows_basica_inscritoF+$totalRows_media_inscritoF+$totalRows_mediag_inscritoF; echo $totalFF; ?>&nbsp;( <?php
if ($totalF==0) {
  $pf = round( ($totalFF * 100) / 1 );
}

else {$pf = round( ($totalFF * 100) / $totalF );}





 echo $pf; ?>% )&nbsp;&&nbsp;&nbsp;<i class="fas fa-male"></i>&nbsp;:&nbsp;<?php $totalFM =  $totalRows_inicial_inscritoM+$totalRows_basica_inscritoM+$totalRows_media_inscritoM+$totalRows_mediag_inscritoM; echo $totalFM; ?> ( <?php


if ($totalF==0) {
  $pm = round( ($totalFM * 100) / 1 );
}

else {$pm = round( ($totalFM * 100) / $totalF );}


  echo $pm; ?>% ).
                 </div>


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


<?php
include("../conectar.php");

        $queryplantelH = "SELECT logo_plantel FROM z_plantel LIMIT 1  
          
            ";

$datos_queryplantelH = mysqli_query($enlace, $queryplantelH) or die(mysqli_error());

$row_datos_queryplantelH = mysqli_fetch_array($datos_queryplantelH); 

/*
$id_primer_plantelH = $row_datos_queryplantelH['id_plantel'];   */


$logo_plantelH = $row_datos_queryplantelH['logo_plantel'];


mysqli_close($enlace);

?>




<a target="_blank" rel="noopener noreferrer" href="recursos/00_print_img.php?img=Horario inicial.png"><button type="button"  class="btn btn-secondary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario Inicial</button></a>


<a target="_blank" rel="noopener noreferrer" href="recursos/00_print_img.php?img=Horario basica.png"><button type="button"  class="btn btn-secondary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario Básica</button></a>


<a target="_blank" rel="noopener noreferrer" href="recursos/00_print_img.php?img=Horario Bachillerato.png"><button type="button"  class="btn btn-secondary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario Bachillerato</button></a>


<a target="_blank" rel="noopener noreferrer" href="recursos/00_print_img.php?img=Horario Multiple.png"><button type="button"  class="btn btn-dark mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario x4 Profesores</button></a>

<a target="_blank" rel="noopener noreferrer" href="recursos/00_print_img.php?img=../<?php echo $logo_plantelH; ?>"><button type="button"  class="btn btn-success" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Logo del Colegio</button></a>


            </div>








 <!-- Icon Cards-->
      
      <div class="form-row">

        <div class="mt-1 ml-2 text-muted mb-3"><b>Alerta:</b> En caso de aparecer alumnos dentro de la <b>"Sección X"</b> (Sección de Error), indica que, a dichos alumnos no se le asignaron una sección valida al momento de inscribirlos en el sistema.</div> 
</div>

<div class="row">

</div>  <!-- cierre row -->


<h4 class="glowwhite mt-2 mb-2">Opciones:</h4>


<div class="row">


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-orange o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-r-project"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_repite; ?></div>
              <div class="infozzz">Repitiendo</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_repiteF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_repiteM; ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="plantilla_control_rep.php?ciclo=<?php echo $id_periodo_clave; ?>&tituloJKL=Alumnos actualmente repitiendo">

              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



                <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-crema o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-frown"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php 
              $totoreti =  $totalRows_inicial_retiradoF + $totalRows_inicial_retiradoM;
              echo $totoreti; ?> Retirados</div>

              <div class="infozzz">"Ciclo Actual"</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_inicial_retiradoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_inicial_retiradoM; ?> </div>
            </div>
<span class="ml-4">

<a href="plantilla_control_0r.php?ciclo=<?php echo $id_periodo_clave; ?>&sexo=1&tituloJKL=Chicas retiradas" class="btn btn_chika mb-1" role="button" >Ver Chica(s)</a>

<a href="plantilla_control_0r.php?ciclo=<?php echo $id_periodo_clave; ?>&sexo=2&tituloJKL=Chicos retirados" class="btn btn_chiko  mb-1" role="button" >Ver Chico(s)</a>
            
             
            </span>


           
          </div>
        </div>




<?php

if ($totalRows_doc !="0" ) {
    
  $doc_img = 'fas fa-file-export fa-spin';
  
}

else { 
       $doc_img = 'fas fa-file-export';
      
          }

 ?>

         <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-vinolight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                  <i class="<?php echo $doc_img; ?>"></i>
           
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $totalRows_doc; ?> Estudiante(s)</div>
              <div class="infozzz"> solicita(n)</div>
              <div class="infozzz"> Documentos.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="documentos_solicitados.php?alertin=0">
              <span class="float-left">Ver y/o imprimir...</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



        <div class="col-xl-3 col-sm-6 mb-3" >

<div class="form-row">

          <div class="col-xl-12 col-sm-12 mb-3">  <a class="blanquito" href="obs.php?alertin=0&dividivi=9&criterio=xxxx&tituloJKL=.">
          <div class="card text-white relleno-browplight ">
            <div class="card-body">
              <div class="mini_card_icon ">
                  <i class="fas fa-binoculars"></i>
           
              </div>
              <div class="mr-5 cantidadzzzsmall" style="margin-top: -15px;"><?php echo $totalRows_obs; ?> Estudiante(s)</div>
               <div class="mr-5 cantidadzzzsmall">con obs...</div>
               <div class="mr-5 cantidadzzzsmall" style="margin-bottom: -10px;">Ver y/o Redactar.</div>
            </div>
          </div> </a>
        </div>


        <div class="col-xl-12 col-sm-12">   <a class="blanquito" href="citas.php?alertin=0&dividivi=12&criterio=xxxx&tituloJKL=.">

          <div class="card text-white bg-danger">
            <div class="card-body">
              <div class="mini_card_icon ">
                 <i class="far fa-calendar-check"></i>
           
              </div>
             <div class="mr-5 cantidadzzzsmall" style="margin-top: -15px;">Ver y/o</div>
              <div class="mr-5 cantidadzzzsmall">redactar</div>
               <div class="mr-5 cantidadzzzsmall" style="margin-bottom: -10px;">Citas.</div>

              
            </div>
                    
          </div> </a>
        </div>

</div>
 
         
        </div>




</div>




<h4 class="glowwhite mt-2 mb-2">Divisiones:</h4>

<div class="row">


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-gris o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-square"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_inicial_inscrito; ?></div>
              <div class="infozzz">Inicial</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_inicial_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_inicial_inscritoM; ?> </div>
            </div>
   <!--         <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="plantilla_control_01.php?ciclo=<?php echo $id_periodo_clave; ?>&division=1&tituloJKL=Alumnos inscritos en Educ. Inicial">

              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>  -->
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-gris o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-clone"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_basica_inscrito; ?></div>
              <div class="infozzz">Básica</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_basica_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_basica_inscritoM; ?> </div>
            </div>
   <!--          <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="plantilla_control_01.php?ciclo=<?php echo $id_periodo_clave; ?>&division=2&tituloJKL=Alumnos inscritos en Educ. Básica">
              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>  -->
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-gris o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-th-large"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_media_inscrito; ?></div>
              <div class="infozzz">Media</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_media_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_media_inscritoM; ?> </div>
            </div>
     <!--        <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="plantilla_control_01.php?ciclo=<?php echo $id_periodo_clave; ?>&division=5&tituloJKL=Alumnos inscritos en Educ. Media">
              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>  -->
          </div>
        </div>



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-gris o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-th"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_mediag_inscrito; ?></div>
              <div class="infozzz">Media General</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_mediag_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_mediag_inscritoM; ?> </div>
            </div>
    <!--         <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="plantilla_control_01.php?ciclo=<?php echo $id_periodo_clave; ?>&division=3&tituloJKL=Alumnos en Educ. Media General">
              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>  -->
          </div>
        </div>                 
        

      </div>  <!-- cierre row -->


<h4 class="glowwhite mt-2 mb-2">Inicial:</h4>


<div class="row">


        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($totalRows_maternal_inscrito===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-earlybirds"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_maternal_inscrito; ?></div>
              <div class="infozzz">Maternal</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_maternal_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_maternal_inscritoM; ?> </div>
            </div>


         <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=1&tituloJKL=Maternal Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=2&tituloJKL=Maternal Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=11&tituloJKL=Maternal Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradom_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=12&tituloJKL=Maternal Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradom_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=13&tituloJKL=Maternal Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradom_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=14&tituloJKL=Maternal Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=15&tituloJKL=Maternal Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&la_seccion=9&tituloJKL=Maternal Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradom_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradom_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradom_su_inscritom; ?> ) - "U"</a>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&tituloJKL=Maternal Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>


        </div>  




        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-kiwi-bird"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_prescolar1_inscrito; ?></div>
              <div class="infozzz">Pre-E. 1er Niv.</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_prescolar1_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_prescolar1_inscritoM; ?> </div>
            </div>

               <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=1&tituloJKL=1er Niv. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=2&tituloJKL=1er Niv. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=11&tituloJKL=1er Niv. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradon1_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=12&tituloJKL=1er Niv. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradon1_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=13&tituloJKL=1er Niv. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=14&tituloJKL=1er Niv. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=15&tituloJKL=1er Niv. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&la_seccion=9&tituloJKL=1er Niv. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon1_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon1_su_inscritom; ?> ) - "U"</a>


<!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&tituloJKL=1er Niv. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>

          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-crow"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_prescolar2_inscrito; ?></div>
              <div class="infozzz">Pre-E. 2do Niv.</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_prescolar2_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_prescolar2_inscritoM; ?> </div>
            </div>

                        <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=1&tituloJKL=2do Niv. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=2&tituloJKL=2do Niv. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=11&tituloJKL=2do Niv. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=12&tituloJKL=2do Niv. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradon2_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=13&tituloJKL=2do Niv. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=14&tituloJKL=2do Niv. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=15&tituloJKL=2do Niv. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&la_seccion=9&tituloJKL=2do Niv. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon2_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon2_su_inscritom; ?> ) - "U"</a>



                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&tituloJKL=2do Niv. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>

          </div>
        </div>




        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-dove"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_prescolar3_inscrito; ?></div>
              <div class="infozzz">Pre-E. 3er Niv.</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_prescolar3_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_prescolar3_inscritoM; ?> </div>
            </div>

                          <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=1&tituloJKL=3er Niv. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=2&tituloJKL=3er Niv. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=11&tituloJKL=3er Niv. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradon3_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=12&tituloJKL=3er Niv. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradon3_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=13&tituloJKL=3er Niv. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=14&tituloJKL=3er Niv. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=15&tituloJKL=3er Niv. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-lila btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&la_seccion=9&tituloJKL=3er Niv. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradon3_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradon3_su_inscritom; ?> ) - "U"</a>


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=56&tituloJKL=2do Niv. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradon3_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>

          </div>
        </div>

        

        </div>  <!-- cierre row -->



<h4 class="glowwhite mt-2 mb-2">Básica:</h4>


<div class="row">


  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-car-side"></i>  
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_grado1_inscrito; ?></div>  
              <div class="infozzzpe">1er Grado</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_grado1_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_inscritoM; ?> </div>
            </div>

            <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >







              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=1&tituloJKL=1° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=2&tituloJKL=1° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=11&tituloJKL=1° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado1_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=12&tituloJKL=1° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado1_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=13&tituloJKL=1° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado1_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=14&tituloJKL=1° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=1&tituloJKL=1° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&la_seccion=9&tituloJKL=1° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado1_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado1_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado1_su_inscritom; ?> ) - "U"</a>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-purpplight btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&tituloJKL=1° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div> 


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-truck-pickup"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_grado2_inscrito; ?></div>
              <div class="infozzzpe">2do Grado</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_grado2_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_inscritoM; ?> </div>
            </div>

            <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=1&tituloJKL=2° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=2&tituloJKL=2° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=11&tituloJKL=2° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado2_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=12&tituloJKL=2° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado2_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=13&tituloJKL=2° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado2_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=14&tituloJKL=2° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=15&tituloJKL=2° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&la_seccion=9&tituloJKL=2° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado2_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado2_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado2_su_inscritom; ?> ) - "U"</a>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-purpplight btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&tituloJKL=2° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>


          </div>
        </div>  



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-truck-monster"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_grado3_inscrito; ?></div>
              <div class="infozzzpe">3er Grado</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_grado3_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_inscritoM; ?> </div>
            </div>

<div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=1&tituloJKL=3° Gr. Secc. A &nbsp;" role="button"  <?php if ($totalRows_grado3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=2&tituloJKL=3° Gr. Secc. B &nbsp;" role="button"  <?php if ($totalRows_grado3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=11&tituloJKL=3° Gr. Secc. C &nbsp;" role="button" <?php if ($totalRows_grado3_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=12&tituloJKL=3° Gr. Secc. D &nbsp;" role="button" <?php if ($totalRows_grado3_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=13&tituloJKL=3° Gr. Secc. E &nbsp;" role="button"  <?php if ($totalRows_grado3_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=14&tituloJKL=3° Gr. Secc. F &nbsp;" role="button"  <?php if ($totalRows_grado3_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=15&tituloJKL=3° Gr. Secc. G &nbsp;" role="button"  <?php if ($totalRows_grado3_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-purpplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&la_seccion=9&tituloJKL=3° Gr. Secc. U &nbsp;" role="button"  <?php if ($totalRows_grado3_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado3_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado3_su_inscritom; ?> ) - "U"</a>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-purpplight btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=37&tituloJKL=3° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado3_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>




        
          </div>
        </div> 




</div>

<div class="row">


          


         <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-plane"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_grado4_inscrito; ?></div>
              <div class="infozzzpe">4to Grado</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_grado4_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_inscritoM; ?> </div>
            </div>


<div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=1&tituloJKL=4° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=2&tituloJKL=4° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=11&tituloJKL=4° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado4_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=12&tituloJKL=4° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado4_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=13&tituloJKL=4° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado4_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=14&tituloJKL=4° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=15&tituloJKL=4° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&la_seccion=9&tituloJKL=4° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado4_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado4_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado4_su_inscritom; ?> ) - "U"</a>


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-vino btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&tituloJKL=4° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div>  



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fighter-jet"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_grado5_inscrito; ?></div>
              <div class="infozzzpe">5to Grado</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_grado5_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_inscritoM; ?> </div>
            </div>



           <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=1&tituloJKL=5° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=2&tituloJKL=5° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=11&tituloJKL=5° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado5_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=12&tituloJKL=5° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado5_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=13&tituloJKL=5° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado5_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=14&tituloJKL=5° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=15&tituloJKL=5° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&la_seccion=9&tituloJKL=5° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado5_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado5_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado5_su_inscritom; ?> ) - "U"</a>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-vino btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&tituloJKL=5° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div> 


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-space-shuttle"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_grado6_inscrito; ?></div>
              <div class="infozzzpe">6to Grado</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_grado6_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_inscritoM; ?> </div>
            </div>


           <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=1&tituloJKL=6° Gr. Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=2&tituloJKL=6° Gr. Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=11&tituloJKL=6° Gr. Secc. C &nbsp;"
               role="button" <?php if ($totalRows_grado6_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=12&tituloJKL=6° Gr. Secc. D &nbsp;"
               role="button" <?php if ($totalRows_grado6_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=13&tituloJKL=6° Gr. Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_grado6_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=14&tituloJKL=6° Gr. Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=15&tituloJKL=6° Gr. Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-vino btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&la_seccion=9&tituloJKL=6° Gr. Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_grado6_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_grado6_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_grado6_su_inscritom; ?> ) - "U"</a>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-vino btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&tituloJKL=6° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
              
                            
            </div>


          </div>
        </div>       










</div>





<h4 class="glowwhite mt-2 mb-2">Media:</h4>

<div class="row">

<div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-desktop"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_ano1_inscrito; ?></div>
              <div class="infozzzpe">1er Año</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_ano1_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_ano1_inscritoM; ?> </div>
            </div>

            <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=1&tituloJKL=1er Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=2&tituloJKL=1er Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=11&tituloJKL=1er Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop1_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=12&tituloJKL=1er Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop1_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=13&tituloJKL=1er Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=14&tituloJKL=1er Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=15&tituloJKL=1er Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&la_seccion=9&tituloJKL=1er Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop1_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop1_su_inscritom; ?> ) - "U"</a>


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm bg-primary btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&tituloJKL=1er Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>


          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-laptop"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_ano2_inscrito; ?></div>
              <div class="infozzzpe">2do Año</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_ano2_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_ano2_inscritoM; ?> </div>
            </div>



    <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=1&tituloJKL=2do Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=2&tituloJKL=2do Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=11&tituloJKL=2do Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop2_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=12&tituloJKL=2do Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop2_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=13&tituloJKL=2do Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=14&tituloJKL=2do Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=15&tituloJKL=2do Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&la_seccion=9&tituloJKL=2do Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop2_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop2_su_inscritom; ?> ) - "U"</a>


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm bg-primary btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&tituloJKL=2do Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-tablet-alt"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_ano3_inscrito; ?></div>
              <div class="infozzzpe">3er Año</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_ano3_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_ano3_inscritoM; ?> </div>
            </div>


    <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=1&tituloJKL=3er Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=2&tituloJKL=3er Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=11&tituloJKL=3er Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop3_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=12&tituloJKL=3er Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop3_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=13&tituloJKL=3er Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=14&tituloJKL=3er Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=15&tituloJKL=3er Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm bg-primary btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&la_seccion=9&tituloJKL=3er Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop3_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop3_su_inscritom; ?> ) - "U"</a>


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm bg-primary btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=44&tituloJKL=3er Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop3_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
              
                            
            </div>


          </div>
        </div> 

</div>





       



<h4 class="glowwhite mt-2 mb-2">Media General:</h4>


<div class="row">




        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-medapps"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_ano4_inscrito; ?></div>
              <div class="infozzzpe">4to Año</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_ano4_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_ano4_inscritoM; ?> </div>
            </div>



                <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=1&tituloJKL=4to Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=2&tituloJKL=4to Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=11&tituloJKL=4to Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop4_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=12&tituloJKL=4to Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop4_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=13&tituloJKL=4to Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=14&tituloJKL=4to Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=15&tituloJKL=4to Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&la_seccion=9&tituloJKL=4to Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop4_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop4_su_inscritom; ?> ) - "U"</a>


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-browplight btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&tituloJKL=4to Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div> 


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-react"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_ano5_inscrito; ?></div>
              <div class="infozzzpe">5to Año</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_ano5_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_ano5_inscritoM; ?> </div>
            </div>


                    <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=1&tituloJKL=5to Año Secc. A &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=2&tituloJKL=5to Año Secc. B &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=11&tituloJKL=5to Año Secc. C &nbsp;"
               role="button" <?php if ($totalRows_gradop5_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=12&tituloJKL=5to Año Secc. D &nbsp;"
               role="button" <?php if ($totalRows_gradop5_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=13&tituloJKL=5to Año Secc. E &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=14&tituloJKL=5to Año Secc. F &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=15&tituloJKL=5to Año Secc. G &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&la_seccion=9&tituloJKL=5to Año Secc. U &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop5_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop5_su_inscritom; ?> ) - "U"</a>



                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-browplight btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&tituloJKL=5to Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>


          </div>
        </div>   



        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($totalRows_ano6_inscrito===0) {?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-hubspot"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_ano6_inscrito; ?></div>
              <div class="infozzzpe">6to Año</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_ano6_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_ano6_inscritoM; ?> </div>
            </div>


                       <div class="pl-1 ml-3 infozzzpe">Sección:</div>

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=1&tituloJKL=6to Año Secc. A &nbsp;" role="button"  <?php if ($totalRows_gradop6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sa_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sa_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sa_inscritom; ?> ) - "A"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=2&tituloJKL=6to Año Secc. B &nbsp;" role="button"  <?php if ($totalRows_gradop6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sb_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sb_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sb_inscritom; ?> ) - "B"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=11&tituloJKL=6to Año Secc. C &nbsp;" role="button" <?php if ($totalRows_gradop6_sc_inscrito===0){?>style="display:none"<?php } ?>   >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sc_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sc_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sc_inscritom; ?> ) - "C"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=12&tituloJKL=6to Año Secc. D &nbsp;" role="button" <?php if ($totalRows_gradop6_sd_inscrito===0){?>style="display:none"<?php } ?>   > 
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sd_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sd_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sd_inscritom; ?> ) - "D"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=13&tituloJKL=6to Año Secc. E &nbsp;" role="button"  <?php if ($totalRows_gradop6_se_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_se_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_se_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_se_inscritom; ?> ) - "E"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=14&tituloJKL=6to Año Secc. F &nbsp;" role="button"  <?php if ($totalRows_gradop6_sf_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sf_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sf_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sf_inscritom; ?> ) - "F"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=15&tituloJKL=6to Año Secc. G &nbsp;" role="button"  <?php if ($totalRows_gradop6_sg_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sg_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_sg_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_sg_inscritom; ?> ) - "G"</a>

              <a class="btn btn-sm relleno-browplight btn_esp mb-1"  href="plantilla_control_00.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&la_seccion=9&tituloJKL=6to Año Secc. U &nbsp;" role="button"  <?php if ($totalRows_gradop6_su_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_su_inscrito; ?></b>&nbsp;&nbsp;( <i class="fas fa-female"></i> : <?php echo $totalRows_gradop6_su_inscritof; ?> / <i class="fas fa-male"></i> : <?php echo $totalRows_gradop6_su_inscritom; ?> ) - "U"</a>





                 <a class="btn btn-sm relleno-browplight btn_esp mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&tituloJKL=6to Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop6_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div>  


        

      </div>  <!-- cierre row -->


<!-- Cierre Icon Cards-->











                           

            </div>   <!-- cierre container fluid -->
        </div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
