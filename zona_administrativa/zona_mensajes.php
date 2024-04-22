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


include("../conectar.php");

include("listas_php/00_lista_canal_mensajes.php");     // enlista los resultados de la tarjetas del menu incio

$erga_uno='udb';
$query_doc = "SELECT * FROM documentos_solicitados
            where ( status_estu = '0'
            or status_ret = '0'
            or status_ins = '0'
            or status_acep = '0' ) GROUP BY id_doc_sol";

$datos_doc = mysqli_query($enlace, $query_doc) or die(mysqli_error());
$totalRows_doc = mysqli_num_rows($datos_doc); 





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
$a_lo_macho='zzz_configuraciones.php';
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




$queryperiodo_act1 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar ASC";
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

include("listas_php/00_lista_cuenta_total_por_divisiones_y_sexos.php");

include("listas_php/00_lista_cuenta_total_por_secciones.php");

include("listas_php/00_lista_estudiantes.php");     // enlista los resultados de la tarjetas del menu incio


mysqli_close($enlace);  


?>



<?php include ("Header.php"); ?>


        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="alert alert-primary" role="alert">
                    <i class="far fa-envelope-open fa-lg "></i> &nbsp; &nbsp; Documentos y Mensajes
                </div>
      


<?php


$fecha_formateada = date('d-m-Y', strtotime($fila_query_anun["fecha_anun"]));
$machin_machin=filesize($a_lo_macho);


if ($titulo_anun != "" && $contenido_anun !="" ) {
  
  $show_anun = 'activado. <i class="fas fa-bullhorn"></i>';
  $font_img = 'fas fa-spinner fa-pulse';
  $foot_msg = 'Activo';
}


else { $show_anun = 'no activado.';
       $font_img = 'fas fa-bullhorn';
       $foot_msg = 'Inactivo';
          }



 ?>









 <!-- Icon Cards-->
      
      <div class="row">






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
              <div class="infozzzpe"> solicita(n) Doc(s).</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="documentos_solicitados.php?alertin=0">
              <span class="float-left">Ver y/o imprimir...</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



<!--

      <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-ocean o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">

 <span class="fa-layers fa-fw">

   <i class="fas fa-scroll"></i>

<i class="fas fa-award" data-fa-transform="shrink-9  right-3 up-3" style="color:#268092" ></i>

               
           
 </span>            
           
              </div>
              <div class="mr-5 cantidadzzzpe">Certificados</div>
              <div class="infozzzpe">y constancias.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="documentos_certificados.php?alertin=0">
              <span class="float-left">Ver y/o imprimir...</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>  -->










   <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-calendar-check"></i>
              </div>
              <div class="mr-5 cantidadzzzsmall">Ver y/o</div>
              <div class="infozzzpe">redactar citaciones</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="citas.php?alertin=0&dividivi=12&criterio=xxxx&tituloJKL=.">
              <span class="float-left">Ingresar</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

     






 <!--       <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-envelope"></i>
              </div>
              <div class="mr-5 cantidadzzz">000</div>
              <div class="infozzz">Sin Enviar</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="#">
              <span class="float-left">Email(s) sin enviar</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>  -->




<!--
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-vinolight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">

 <i class="fas fa-inbox"></i>

              
              </div>
              <div class="mr-5 cantidadzzzsmall">Bandeja de</div>
              <div class="infozzz">mensajes.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="#">
              <span class="float-left">Ver</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>

</div>  -->



</div>


<div class="row">



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="<?php echo $font_img; ?>"></i>
              </div>
              <div class="mr-5 cantidadzzz">Anuncio</div>
              <div class="infozzz"><?php echo $show_anun; ?></div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="zona_anuncios1.php">
              <span class="float-left"><b><?php echo $foot_msg; ?></b>&nbsp;desde el&nbsp;<?php echo $fecha_formateada; ?></span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>





    <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-binoculars"></i>
              </div>
              <div class="mr-5 cantidadzzzsmall"><?php echo $totalRows_obs; ?> Estudiante(s)</div>
              <div class="infozzzpe">con observaciones</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="obs.php?alertin=0&dividivi=9&criterio=xxxx&tituloJKL=.">
              <span class="float-left">Ver y/o Redactar</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        

     



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-verdeosc o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">

                <span class="fa-layers fa-fw">
                <i class="fas fa-user-tie"></i>
           
              <i class="fas fa-at"              data-fa-transform="shrink-10 up-7.5 right-7.6"></i>
              <i class="fas fa-envelope" data-fa-transform="shrink-11 up-1.2 left-8"></i>
              </span>

        
              </div>
              <div class="mr-5 cantidadzzzpe">Redactar email(s)</div>
              <div class="infozzzpe">a los representantes.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="zona_email_b.php?division=9&marca=0&update=0&grado=51&edit=0">
              <span class="float-left">Abrir formulario.</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>  



   <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-grama o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">

                <span class="fa-layers fa-fw">

                <i class="fas fa-user"></i>
                <i class="fas fa-envelope-open" data-fa-transform="shrink-10 up-2.5 right-8.6"></i>
              <i class="fas fa-at" data-fa-transform="shrink-11 down-3 left-10"></i>
              <i class="far fa-credit-card" data-fa-transform="shrink-13 down-4 right-3" style="color:#088A4B" ></i>

              </span>

       
              </div>
              <div class="mr-5 cantidadzzzpe">Redactar email(s)</div>
              <div class="infozzzpe">al personal.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="zona_email.php?division=6&marca=0&update=0&edit=0">
              <span class="float-left">Abrir formulario.</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>  




        

        

      </div>  <!-- cierre row -->

<!-- Cierre Icon Cards-->

<form method="POST">
<div class="form-row">  

<div class="input-group mt-5 col-lg-8 mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text alert-primary" id=""><i class="fas fa-graduation-cap fa-lg "></i>
                      &nbsp; &nbsp;<b>Impresión Rápida - Grado-Sección año: </b></span>     <!--  <?php echo $id_periodo_clave; ?> -->
                    </div>
                 
                            <select class="form-control" id="set_periodo" name="set_periodo">



<option value="<?php echo $row_datos_periodo_oldie['id_periodo_es']; ?>">
  <?php $mal_parioxa=filesize($erga_uno); echo $row_datos_periodo_oldie['periodo_escolar']; ?></option>


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






<a href="recursos/Horario inicial.png" download><button type="button"  class="btn btn-secondary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario Inicial</button></a>


<a href="recursos/Horario basica.png" download><button type="button"  class="btn btn-secondary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario Básica</button></a>


<a href="recursos/Horario Bachillerato.png" download><button type="button"  class="btn btn-secondary mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario Bachillerato</button></a>


<a href="recursos/Horario Multiple.png" download><button type="button"  class="btn btn-dark" style="width: 210px;">
           <i class="fas fa-download"></i>&nbsp;&nbsp; Horario x4 Profesores</button></a>


 </div>





 <div class="form-row ml-1"> <form target="_blank" action="zzz_impresiones/imp_lista_carta_vacia_mod.php" method="POST">




          <button type="submit" name="imp_carta_asist" id="imp_carta_asist" class="btn btn-success mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-file-alt"></i>&nbsp;&nbsp; Asistencias "Carta"</button>


</form>

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_vacia_mod.php" method="POST">




          <button type="submit" name="imp_carta_asist" id="imp_carta_asist" class="btn btn-success mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-file-alt"></i>&nbsp;&nbsp; Asistencias "Oficio"</button>


</form>




<form target="_blank" action="zzz_impresiones/imp_lista_carta_vacia_inscripciones.php" method="POST">




          <button type="submit" name="imp_carta_asist" id="imp_carta_asist" class="btn btn-info mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-file-alt"></i>&nbsp;&nbsp; Asistencia Pre y/o Insc.</button>


</form>







 </div>


<!-- <div class="row">


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
            <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="plantilla_control_01.php?ciclo=<?php echo $id_periodo_clave; ?>&division=1&tituloJKL=Alumnos inscritos en Educ. Inicial">

              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
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
            <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="plantilla_control_01.php?ciclo=<?php echo $id_periodo_clave; ?>&division=2&tituloJKL=Alumnos inscritos en Educ. Básica">
              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
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
            <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="plantilla_control_01.php?ciclo=<?php echo $id_periodo_clave; ?>&division=5&tituloJKL=Alumnos inscritos en Educ. Media">
              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
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
            <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="plantilla_control_01.php?ciclo=<?php echo $id_periodo_clave; ?>&division=3&tituloJKL=Alumnos en Educ. Media General">
              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>      
        

      </div>  -->  <!-- cierre row -->          


<h4 class="glowwhite mt-2 mb-2">Inicial:</h4>


<div class="row">


        <div class="col-xl-3 col-sm-6 mb-3" <?php  if ($totalRows_maternal_inscrito===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="fab fa-earlybirds"></i>
              </div>
              
              <div class="infozzz">Maternal - Sección:</div>
             
            </div>

       

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


               <?php

              if ($totalRows_gradom_sa_inscrito<'40') {
                $hojam_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hojam_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojam_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojam_sa_es = "CARTA";
              }

              if ($totalRows_gradom_sa_inscrito>='40') {
                $hojam_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojam_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojam_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php";
                $la_hojam_sa_es = "OFICIO";
              }

               ?>


<div class="form-row">


               <form target="_blank" action="<?php echo $hojam_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradom_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hojam_sa_es; ?></button>

              </form>




              <form target="_blank" action="<?php echo $hojam_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if($mal_parioxa!='14'){unlink('zzz_configuraciones.php');} if ($totalRows_gradom_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b>Mod</b></button>

              </form>



               <form target="_blank" action="<?php echo $hojam_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>


</div>





                             <?php

              if ($totalRows_gradom_sb_inscrito<'40') {
                $hojam_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hojam_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojam_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojam_sb_es = "CARTA";
              }

              if ($totalRows_gradom_sb_inscrito>='40') {
                $hojam_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojam_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojam_sb_es_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojam_sb_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojam_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradom_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hojam_sb_es; ?></button>

              </form>



              <form target="_blank" action="<?php echo $hojam_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b>Mod</b></button>

              </form>



               <form target="_blank" action="<?php echo $hojam_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sb_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>

</div>

              


               <?php

              if ($totalRows_gradom_sc_inscrito<'40') {
                $hojam_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hojam_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojam_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojam_sc_es = "CARTA";
              }

              if ($totalRows_gradom_sc_inscrito>='40') {
                $hojam_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojam_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojam_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojam_sc_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojam_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradom_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hojam_sc_es; ?></button>

              </form>


<form target="_blank" action="<?php echo $hojam_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b>Mod</b></button>

              </form>



               <form target="_blank" action="<?php echo $hojam_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sc_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>



                          <?php

              if ($totalRows_gradom_sd_inscrito<'40') {
                $hojam_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hojam_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojam_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojam_sd_es = "CARTA";
              }

              if ($totalRows_gradom_sd_inscrito>='40') {
                $hojam_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                 $hojam_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojam_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojam_sd_es = "OFICIO";
              }

               ?>

<div class="form-row">

              <form target="_blank" action="<?php echo $hojam_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradom_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hojam_sd_es; ?></button>

              </form>



              <form target="_blank" action="<?php echo $hojam_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b>Mod</b></button>

              </form>



               <form target="_blank" action="<?php echo $hojam_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sd_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>



</div>


                                       <?php

              if ($totalRows_gradom_se_inscrito<'40') {
                $hojam_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hojam_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojam_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojam_se_es = "CARTA";
              }

              if ($totalRows_gradom_se_inscrito>='40') {
                $hojam_se_es = "zzz_impresiones/imp_lista_oficio.php";
                 $hojam_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojam_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojam_se_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojam_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradom_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hojam_se_es; ?></button>

              </form>


              <form target="_blank" action="<?php echo $hojam_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b>Mod</b></button>

              </form>



               <form target="_blank" action="<?php echo $hojam_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_se_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>

</div>

                                       <?php

              if ($totalRows_gradom_sf_inscrito<'40') {
                $hojam_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hojam_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojam_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojam_sf_es = "CARTA";
              }

              if ($totalRows_gradom_sf_inscrito>='40') {
                $hojam_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojam_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojam_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojam_sf_es = "OFICIO";
              }

               ?>

<div class="form-row">

              <form target="_blank" action="<?php echo $hojam_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradom_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hojam_sf_es; ?></button>

              </form>


               <form target="_blank" action="<?php echo $hojam_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b>Mod</b></button>

              </form>



               <form target="_blank" action="<?php echo $hojam_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sf_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>


</div>

              <?php

              if ($totalRows_gradom_sg_inscrito<'40') {
                $hojam_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hojam_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojam_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojam_sg_es = "CARTA";
              }

              if ($totalRows_gradom_sg_inscrito>='40') {
                $hojam_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojam_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojam_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojam_sg_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojam_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradom_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hojam_sg_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojam_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b>Mod</b></button>

              </form>



               <form target="_blank" action="<?php echo $hojam_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_sg_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradom_su_inscrito<'40') {
                $hojam_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hojam_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojam_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojam_su_es = "CARTA";
              }

              if ($totalRows_gradom_su_inscrito>='40') {
                $hojam_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojam_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojam_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojam_su_es = "OFICIO";
              }

               ?>
<div class="form-row">

              <form target="_blank" action="<?php echo $hojam_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradom_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hojam_su_es; ?></button>

              </form>


               <form target="_blank" action="<?php echo $hojam_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b>Mod</b></button>

              </form>



               <form target="_blank" action="<?php echo $hojam_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="52">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="Maternal Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradom_su_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>

 </div>           


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_espx mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=52&tituloJKL=Maternal Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradom_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradom_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>


        </div>  




        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="fas fa-kiwi-bird"></i>
              </div>
              
              <div class="infozzz">Pre-E. 1er Niv. - Sección:</div>
              
            </div>

            

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


              <?php

              if ($totalRows_gradon1_sa_inscrito<'40') {
                $hojan1_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan1_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan1_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";

                $la_hojan1_sa_es = "CARTA";
              }

              if ($totalRows_gradon1_sa_inscrito>='40') {
                $hojan1_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan1_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan1_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php";
                $la_hojan1_sa_es = "OFICIO";
              }

               ?>


<div class="form-row">

               <form target="_blank" action="<?php echo $hojan1_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. A ">



              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hojan1_sa_es; ?></button>

              </form>



              <form target="_blank" action="<?php echo $hojan1_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b>Mod</b></button>

              </form>


              <form target="_blank" action="<?php echo $hojan1_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1 "
                 <?php if ($totalRows_gradon1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
              <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>



</div>





                            <?php

              if ($totalRows_gradon1_sb_inscrito<'40') {
                $hojan1_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan1_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan1_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan1_sb_es = "CARTA";
              }

              if ($totalRows_gradon1_sb_inscrito>='40') {
                $hojan1_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan1_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan1_sb_es_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan1_sb_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojan1_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hojan1_sb_es; ?></button>

              </form>



              <form target="_blank" action="<?php echo $hojan1_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>


              <form target="_blank" action="<?php echo $hojan1_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

   <?php

              if ($totalRows_gradon1_sc_inscrito<'40') {
                $hojan1_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan1_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan1_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan1_sc_es = "CARTA";
              }

              if ($totalRows_gradon1_sc_inscrito>='40') {
                $hojan1_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan1_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan1_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan1_sc_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hojan1_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hojan1_sc_es; ?></button>

              </form>


               <form target="_blank" action="<?php echo $hojan1_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
               <b>Mod</b></button>
              </form>

              <form target="_blank" action="<?php echo $hojan1_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
               <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

                 <?php

              if ($totalRows_gradon1_sd_inscrito<'40') {
                $hojan1_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan1_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan1_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan1_sd_es = "CARTA";
              }

              if ($totalRows_gradon1_sd_inscrito>='40') {
                $hojan1_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan1_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan1_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan1_sd_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hojan1_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hojan1_sd_es; ?></button>

              </form>


               <form target="_blank" action="<?php echo $hojan1_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojan1_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradon1_se_inscrito<'40') {
                $hojan1_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan1_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan1_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan1_se_es = "CARTA";
              }

              if ($totalRows_gradon1_se_inscrito>='40') {
                $hojan1_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan1_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan1_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan1_se_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojan1_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon1_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hojan1_se_es; ?></button>

              </form>


              <form target="_blank" action="<?php echo $hojan1_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon1_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojan1_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon1_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

 <?php

              if ($totalRows_gradon1_sf_inscrito<'40') {
                $hojan1_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan1_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan1_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan1_sf_es = "CARTA";
              }

              if ($totalRows_gradon1_sf_inscrito>='40') {
                $hojan1_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan1_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan1_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan1_sf_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hojan1_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hojan1_sf_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojan1_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojan1_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>              

               <?php

              if ($totalRows_gradon1_sg_inscrito<'40') {
                $hojan1_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan1_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan1_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan1_sg_es = "CARTA";
              }

              if ($totalRows_gradon1_sg_inscrito>='40') {
                $hojan1_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan1_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan1_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan1_sg_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hojan1_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hojan1_sg_es; ?></button>

              </form>


              <form target="_blank" action="<?php echo $hojan1_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
               <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojan1_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
               <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
 </div>             

 <?php

              if ($totalRows_gradon1_su_inscrito<'40') {
                $hojan1_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan1_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan1_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan1_su_es = "CARTA";
              }

              if ($totalRows_gradon1_su_inscrito>='40') {
                $hojan1_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan1_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan1_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan1_su_es = "OFICIO";
              }

               ?>

<div class="form-row">

                <form target="_blank" action="<?php echo $hojan1_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon1_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hojan1_su_es; ?></button>

              </form>


               <form target="_blank" action="<?php echo $hojan1_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon1_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojan1_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="54">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon1_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>

  </div>          


<!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_espx mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=54&tituloJKL=1er Niv. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradon1_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon1_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>

          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="fas fa-crow"></i>
              </div>
              
              <div class="infozzz">Pre-E. 2do Niv. - Sección:</div>
              
            </div>

                       

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


               <?php

              if ($totalRows_gradon2_sa_inscrito<'40') {
                $hojan2_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan2_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan2_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan2_sa_es = "CARTA";
              }

              if ($totalRows_gradon2_sa_inscrito>='40') {
                $hojan2_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan2_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan2_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan2_sa_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojan2_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hojan2_sa_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojan2_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojan2_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

                            <?php

              if ($totalRows_gradon2_sb_inscrito<'40') {
                $hojan2_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan2_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan2_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan2_sb_es = "CARTA";
              }

              if ($totalRows_gradon2_sb_inscrito>='40') {
                $hojan2_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan2_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan2_sb_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan2_sb_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hojan2_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hojan2_sb_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hojan2_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
               <b>Mod</b></button>

              </form>


              <form target="_blank" action="<?php echo $hojan2_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
               <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradon2_sc_inscrito<'40') {
                $hojan2_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan2_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan2_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan2_sc_es = "CARTA";
              }

              if ($totalRows_gradon2_sc_inscrito>='40') {
                $hojan2_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan2_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan2_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan2_sc_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hojan2_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hojan2_sc_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojan2_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b>Mod</b></button>
              </form>

               <form target="_blank" action="<?php echo $hojan2_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

               <?php

              if ($totalRows_gradon2_sd_inscrito<'40') {
                $hojan2_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan2_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan2_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan2_sd_es = "CARTA";
              }

              if ($totalRows_gradon2_sd_inscrito>='40') {
                $hojan2_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan2_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan2_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan2_sd_es = "OFICIO";
              }

               ?>


<div class="form-row">
               <form target="_blank" action="<?php echo $hojan2_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hojan2_sd_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojan2_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
               <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojan2_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
               <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradon2_se_inscrito<'40') {
                $hojan2_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan2_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan2_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan2_se_es = "CARTA";
              }

              if ($totalRows_gradon2_se_inscrito>='40') {
                $hojan2_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan2_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan2_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan2_se_es = "OFICIO";
              }

               ?>


 <div class="form-row">             
              <form target="_blank" action="<?php echo $hojan2_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon2_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hojan2_se_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojan2_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojan2_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

 <?php

              if ($totalRows_gradon2_sf_inscrito<'40') {
                $hojan2_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan2_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan2_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan2_sf_es = "CARTA";
              }

              if ($totalRows_gradon2_sf_inscrito>='40') {
                $hojan2_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan2_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan2_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan2_sf_es = "OFICIO";
              }

               ?>
<div class="form-row">
              <form target="_blank" action="<?php echo $hojan2_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hojan2_sf_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojan2_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojan2_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradon2_sg_inscrito<'40') {
                $hojan2_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan2_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan2_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan2_sg_es = "CARTA";
              }

              if ($totalRows_gradon2_sg_inscrito>='40') {
                $hojan2_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan2_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan2_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan2_sg_es = "OFICIO";
              }

               ?>
             
<div class="form-row">
              <form target="_blank" action="<?php echo $hojan2_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hojan2_sg_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojan2_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

                <form target="_blank" action="<?php echo $hojan2_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
 </div>          

            <?php

              if ($totalRows_gradon2_su_inscrito<'40') {
                $hojan2_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan2_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan2_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan2_su_es = "CARTA";
              }

              if ($totalRows_gradon2_su_inscrito>='40') {
                $hojan2_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan2_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan2_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan2_su_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hojan2_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon2_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hojan2_su_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hojan2_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_su_inscrito===0){?>style="display:none"<?php } ?>  >
               <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojan2_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="55">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon2_su_inscrito===0){?>style="display:none"<?php } ?>  >
               <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>              
           

             


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_espx mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=55&tituloJKL=2do Niv. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradon2_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon2_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>

          </div>
        </div>




        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="fas fa-dove"></i>
              </div>
             
              <div class="infozzz">Pre-E. 3er Niv. - Sección:</div>
              
            </div>

                         

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


               <?php

              if ($totalRows_gradon3_sa_inscrito<'40') {
                $hojan3_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan3_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan3_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan3_sa_es = "CARTA";
              }

              if ($totalRows_gradon3_sa_inscrito>='40') {
                $hojan3_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan3_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan3_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan3_sa_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hojan3_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hojan3_sa_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hojan3_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojan3_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradon3_sb_inscrito<'40') {
                $hojan3_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan3_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan3_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan3_sb_es = "CARTA";
              }

              if ($totalRows_gradon3_sb_inscrito>='40') {
                $hojan3_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan3_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan3_sb_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan3_sb_es = "OFICIO";
              }

               ?>
<div class="form-row">
              <form target="_blank" action="<?php echo $hojan3_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hojan3_sb_es; ?></button>

              </form>
            
            <form target="_blank" action="<?php echo $hojan3_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojan3_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradon3_sc_inscrito<'40') {
                $hojan3_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan3_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan3_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan3_sc_es = "CARTA";
              }

              if ($totalRows_gradon3_sc_inscrito>='40') {
                $hojan3_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan3_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan3_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan3_sc_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojan3_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hojan3_sc_es; ?></button>

              </form>


               <form target="_blank" action="<?php echo $hojan3_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojan3_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradon3_sd_inscrito<'40') {
                $hojan3_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan3_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan3_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan3_sd_es = "CARTA";
              }

              if ($totalRows_gradon3_sd_inscrito>='40') {
                $hojan3_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan3_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan3_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan3_sd_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojan3_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hojan3_sd_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojan3_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
               <b>Mod</b></button>

              </form>

                <form target="_blank" action="<?php echo $hojan3_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
               <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradon3_se_inscrito<'40') {
                $hojan3_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan3_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan3_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan3_se_es = "CARTA";
              }

              if ($totalRows_gradon3_se_inscrito>='40') {
                $hojan3_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan3_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan3_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan3_se_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojan3_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon3_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hojan3_se_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hojan3_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojan3_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>
               <?php

              if ($totalRows_gradon3_sf_inscrito<'40') {
                $hojan3_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan3_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan3_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan3_sf_es = "CARTA";
              }

              if ($totalRows_gradon3_sf_inscrito>='40') {
                $hojan3_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan3_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan3_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan3_sf_es = "OFICIO";
              }

               ?>
             
<div class="form-row">
             <form target="_blank" action="<?php echo $hojan3_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hojan3_sf_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hojan3_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>

              <form target="_blank" action="<?php echo $hojan3_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

               <?php

              if ($totalRows_gradon3_sg_inscrito<'40') {
                $hojan3_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan3_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan3_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan3_sg_es = "CARTA";
              }

              if ($totalRows_gradon3_sg_inscrito>='40') {
                $hojan3_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan3_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan3_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan3_sg_es = "OFICIO";
              }

               ?>
             
<div class="form-row">
              <form target="_blank" action="<?php echo $hojan3_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hojan3_sg_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hojan3_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojan3_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradon3_su_inscrito<'40') {
                $hojan3_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hojan3_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojan3_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojan3_su_es = "CARTA";
              }

              if ($totalRows_gradon3_su_inscrito>='40') {
                $hojan3_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojan3_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojan3_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojan3_su_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojan3_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espx mb-1"
                 <?php if ($totalRows_gradon3_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradon3_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hojan3_su_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojan3_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojan3_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="56">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Niv. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-lila btn_espxdos mb-1"
                 <?php if ($totalRows_gradon3_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>             
             


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-lila btn_espx mb-1"
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
              <div class="mini_card_icon">
                <i class="fas fa-car-side"></i>  
              </div>
             
              <div class="infozzzpe">1er Grado - Sección:</div>
             
            </div>

         

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


               <?php

              if ($totalRows_grado1_sa_inscrito<'40') {
                $hoja1_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja1_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja1_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja1_sa_es = "CARTA";
              }

              if ($totalRows_grado1_sa_inscrito>='40') {
                $hoja1_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja1_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja1_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja1_sa_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja1_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hoja1_sa_es; ?></button>

              </form>


               <form target="_blank" action="<?php echo $hoja1_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja1_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

                         <?php

              if ($totalRows_grado1_sb_inscrito<'40') {
                $hoja1_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja1_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja1_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja1_sb_es = "CARTA";
              }

              if ($totalRows_grado1_sb_inscrito>='40') {
                $hoja1_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja1_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja1_sb_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja1_sb_es = "OFICIO";
              }

               ?>

<div class="form-row">

              <form target="_blank" action="<?php echo $hoja1_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hoja1_sb_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hoja1_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hoja1_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_grado1_sc_inscrito<'40') {
                $hoja1_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja1_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja1_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja1_sc_es = "CARTA";
              }

              if ($totalRows_grado1_sc_inscrito>='40') {
                $hoja1_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja1_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja1_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja1_sc_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja1_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hoja1_sc_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja1_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hoja1_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_grado1_sd_inscrito<'40') {
                $hoja1_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja1_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja1_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja1_sd_es = "CARTA";
              }

              if ($totalRows_grado1_sd_inscrito>='40') {
                $hoja1_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja1_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja1_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja1_sd_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja1_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hoja1_sd_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hoja1_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>

               <form target="_blank" action="<?php echo $hoja1_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

               <?php

              if ($totalRows_grado1_se_inscrito<'40') {
                $hoja1_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja1_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja1_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja1_se_es = "CARTA";
              }

              if ($totalRows_grado1_se_inscrito>='40') {
                $hoja1_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja1_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja1_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja1_se_es = "OFICIO";
              }

               ?>

<div class="form-row">

               <form target="_blank" action="<?php echo $hoja1_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado1_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hoja1_se_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja1_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hoja1_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_grado1_sf_inscrito<'40') {
                $hoja1_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja1_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja1_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja1_sf_es = "CARTA";
              }

              if ($totalRows_grado1_sf_inscrito>='40') {
                $hoja1_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja1_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja1_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja1_sf_es = "OFICIO";
              }

               ?>


<div class="form-row">
               <form target="_blank" action="<?php echo $hoja1_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hoja1_sf_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hoja1_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja1_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_grado1_sg_inscrito<'40') {
                $hoja1_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja1_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja1_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja1_sg_es = "CARTA";
              }

              if ($totalRows_grado1_sg_inscrito>='40') {
                $hoja1_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja1_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja1_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja1_sg_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja1_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hoja1_sg_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja1_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
               <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hoja1_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
               <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_grado1_su_inscrito<'40') {
                $hoja1_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja1_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja1_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja1_su_es = "CARTA";
              }

              if ($totalRows_grado1_su_inscrito>='40') {
                $hoja1_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja1_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja1_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja1_su_es = "OFICIO";
              }

               ?>


<div class="form-row">
               <form target="_blank" action="<?php echo $hoja1_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado1_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hoja1_su_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hoja1_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hoja1_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="35">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado1_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>
            

                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-purpplight btn_espx mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=35&tituloJKL=1° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado1_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado1_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div> 


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="fas fa-truck-pickup"></i>
              </div>
              
              <div class="infozzzpe">2do Grado - Sección:</div>
             
            </div>

        

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

               <?php

              if ($totalRows_grado2_sa_inscrito<'40') {
                $hoja2_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja2_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja2_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja2_sa_es = "CARTA";
              }

              if ($totalRows_grado2_sa_inscrito>='40') {
                $hoja2_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja2_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja2_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja2_sa_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja2_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hoja2_sa_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hoja2_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>

               <form target="_blank" action="<?php echo $hoja2_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

               <?php

              if ($totalRows_grado2_sb_inscrito<'40') {
                $hoja2_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja2_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja2_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja2_sb_es = "CARTA";
              }

              if ($totalRows_grado2_sb_inscrito>='40') {
                $hoja2_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja2_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja2_sb_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja2_sb_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja2_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hoja2_sb_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hoja2_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>

               <form target="_blank" action="<?php echo $hoja2_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

 <?php

              if ($totalRows_grado2_sc_inscrito<'40') {
                $hoja2_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja2_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja2_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja2_sc_es = "CARTA";
              }

              if ($totalRows_grado2_sc_inscrito>='40') {
                $hoja2_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja2_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja2_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja2_sc_es = "OFICIO";
              }

               ?>
<div class="form-row">
              <form target="_blank" action="<?php echo $hoja2_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hoja2_sc_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja2_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja2_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

 <?php

              if ($totalRows_grado2_sd_inscrito<'40') {
                $hoja2_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja2_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja2_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja2_sd_es = "CARTA";
              }

              if ($totalRows_grado2_sd_inscrito>='40') {
                $hoja2_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja2_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja2_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja2_sd_es = "OFICIO";
              }

               ?>
<div class="form-row">
               <form target="_blank" action="<?php echo $hoja2_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hoja2_sd_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja2_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja2_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>


 <?php

              if ($totalRows_grado2_se_inscrito<'40') {
                $hoja2_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja2_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja2_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja2_se_es = "CARTA";
              }

              if ($totalRows_grado2_se_inscrito>='40') {
                $hoja2_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja2_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja2_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja2_se_es = "OFICIO";
              }

               ?>
<div class="form-row">
              <form target="_blank" action="<?php echo $hoja2_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado2_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hoja2_se_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja2_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>

               <form target="_blank" action="<?php echo $hoja2_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

 <?php

              if ($totalRows_grado2_sf_inscrito<'40') {
                $hoja2_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja2_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja2_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja2_sf_es = "CARTA";
              }

              if ($totalRows_grado2_sf_inscrito>='40') {
                $hoja2_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja2_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja2_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja2_sf_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja2_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hoja2_sf_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hoja2_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

                <form target="_blank" action="<?php echo $hoja2_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

 <?php

              if ($totalRows_grado2_sg_inscrito<'40') {
                $hoja2_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja2_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja2_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja2_sg_es = "CARTA";
              }

              if ($totalRows_grado2_sg_inscrito>='40') {
                $hoja2_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja2_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja2_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja2_sg_es = "OFICIO";
              }

               ?>
<div class="form-row">
               <form target="_blank" action="<?php echo $hoja2_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hoja2_sg_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja2_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja2_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

 <?php

              if ($totalRows_grado2_su_inscrito<'40') {
                $hoja2_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja2_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja2_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja2_su_es = "CARTA";
              }

              if ($totalRows_grado2_su_inscrito>='40') {
                 $hoja2_su_es = "zzz_impresiones/imp_lista_oficio.php";
                 $hoja2_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                 $hoja2_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                 $la_hoja2_su_es = "OFICIO";
              }

               ?>
<div class="form-row">
              <form target="_blank" action="<?php echo $hoja2_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado2_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hoja2_su_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hoja2_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja2_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="36">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado2_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>



                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-purpplight btn_espx mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=36&tituloJKL=2° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado2_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado2_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>


          </div>
        </div>  



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="fas fa-truck-monster"></i>
              </div>
              
              <div class="infozzzpe">3er Grado - Sección:</div>
             
            </div>



            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


               <?php

              if ($totalRows_grado3_sa_inscrito<'40') {
                $hoja3_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja3_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja3_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja3_sa_es = "CARTA";
              }

              if ($totalRows_grado3_sa_inscrito>='40') {
                $hoja3_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja3_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja3_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja3_sa_es = "OFICIO";
              }

               ?>


<div class="form-row">
               <form target="_blank" action="<?php echo $hoja3_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hoja3_sa_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja3_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja3_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado3_sb_inscrito<'40') {
                $hoja3_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja3_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja3_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja3_sb_es = "CARTA";
              }

              if ($totalRows_grado3_sb_inscrito>='40') {
                $hoja3_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja3_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja3_sb_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja3_sb_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja3_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hoja3_sb_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja3_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

                <form target="_blank" action="<?php echo $hoja3_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado3_sc_inscrito<'40') {
                $hoja3_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja3_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja3_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja3_sc_es = "CARTA";
              }

              if ($totalRows_grado3_sc_inscrito>='40') {
                $hoja3_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja3_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja3_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja3_sc_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja3_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hoja3_sc_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja3_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>
               <form target="_blank" action="<?php echo $hoja3_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

              <?php

              if ($totalRows_grado3_sd_inscrito<'40') {
                $hoja3_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja3_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja3_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja3_sd_es = "CARTA";
              }

              if ($totalRows_grado3_sd_inscrito>='40') {
                $hoja3_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja3_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja3_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja3_sd_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja3_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hoja3_sd_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja3_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>

              <form target="_blank" action="<?php echo $hoja3_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>
             
              <?php

              if ($totalRows_grado3_se_inscrito<'40') {
                $hoja3_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja3_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja3_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja3_se_es = "CARTA";
              }

              if ($totalRows_grado3_se_inscrito>='40') {
                $hoja3_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja3_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja3_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja3_se_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja3_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado3_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hoja3_se_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hoja3_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja3_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado3_sf_inscrito<'40') {
                $hoja3_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja3_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja3_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja3_sf_es = "CARTA";
              }

              if ($totalRows_grado3_sf_inscrito>='40') {
                $hoja3_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja3_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja3_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja3_sf_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja3_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hoja3_sf_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hoja3_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hoja3_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_grado3_sg_inscrito<'40') {
                $hoja3_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja3_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja3_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja3_sg_es = "CARTA";
              }

              if ($totalRows_grado3_sg_inscrito>='40') {
                $hoja3_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja3_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja3_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja3_sg_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja3_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hoja3_sg_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja3_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

                <form target="_blank" action="<?php echo $hoja3_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_grado3_su_inscrito<'40') {
                $hoja3_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja3_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja3_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja3_su_es = "CARTA";
              }

              if ($totalRows_grado3_su_inscrito>='40') {
                $hoja3_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja3_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja3_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja3_su_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja3_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espx mb-1"
                 <?php if ($totalRows_grado3_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado3_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hoja3_su_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja3_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja3_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="37">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-purpplight btn_espxdos mb-1"
                 <?php if ($totalRows_grado3_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>             
             


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-purpplight btn_espx mb-1"
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
              <div class="mini_card_icon">
                <i class="fas fa-plane"></i>
              </div>
             
              <div class="infozzzpe">4to Grado - Sección:</div>
            
            </div>




            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <?php

              if ($totalRows_grado4_sa_inscrito<'40') {
                $hoja4_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja4_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja4_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja4_sa_es = "CARTA";
              }

              if ($totalRows_grado4_sa_inscrito>='40') {
                $hoja4_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja4_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja4_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja4_sa_es = "OFICIO";
              }

               ?>

<div class="form-row">
                <form target="_blank" action="<?php echo $hoja4_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hoja4_sa_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja4_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja4_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado4_sb_inscrito<'40') {
                $hoja4_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja4_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja4_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja4_sb_es = "CARTA";
              }

              if ($totalRows_grado4_sb_inscrito>='40') {
                $hoja4_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja4_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja4_sb_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja4_sb_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja4_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hoja4_sb_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja4_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

                <form target="_blank" action="<?php echo $hoja4_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado4_sc_inscrito<'40') {
                $hoja4_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja4_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja4_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja4_sc_es = "CARTA";
              }

              if ($totalRows_grado4_sc_inscrito>='40') {
                $hoja4_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja4_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja4_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja4_sc_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja4_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hoja4_sc_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja4_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja4_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado4_sd_inscrito<'40') {
                $hoja4_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja4_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja4_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja4_sd_es = "CARTA";
              }

              if ($totalRows_grado4_sd_inscrito>='40') {
                $hoja4_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja4_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja4_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja4_sd_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja4_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hoja4_sd_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja4_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>

              <form target="_blank" action="<?php echo $hoja4_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

              <?php

              if ($totalRows_grado4_se_inscrito<'40') {
                $hoja4_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja4_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja4_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja4_se_es = "CARTA";
              }

              if ($totalRows_grado4_se_inscrito>='40') {
                $hoja4_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja4_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja4_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja4_se_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja4_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado4_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hoja4_se_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja4_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_se_inscrito===0){?>style="display:none"<?php } ?>  >
               <b>Mod</b></button>
              </form>

              <form target="_blank" action="<?php echo $hoja4_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_se_inscrito===0){?>style="display:none"<?php } ?>  >
               <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

              <?php

              if ($totalRows_grado4_sf_inscrito<'40') {
                $hoja4_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja4_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja4_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja4_sf_es = "CARTA";
              }

              if ($totalRows_grado4_sf_inscrito>='40') {
                $hoja4_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja4_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja4_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja4_sf_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja4_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hoja4_sf_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja4_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hoja4_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado4_sg_inscrito<'40') {
                $hoja4_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja4_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja4_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja4_sg_es = "CARTA";
              }

              if ($totalRows_grado4_sg_inscrito>='40') {
                $hoja4_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja4_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja4_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja4_sg_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja4_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hoja4_sg_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja4_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja4_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado4_su_inscrito<'40') {
                $hoja4_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja4_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja4_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja4_su_es = "CARTA";
              }

              if ($totalRows_grado4_su_inscrito>='40') {
                $hoja4_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja4_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja4_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja4_su_es = "OFICIO";
              }

               ?>

     <div class="form-row">         
              <form target="_blank" action="<?php echo $hoja4_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado4_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hoja4_su_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja4_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

                <form target="_blank" action="<?php echo $hoja4_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="38">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado4_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>




                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-vino btn_espx mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=38&tituloJKL=4° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado4_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado4_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div>  



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="fas fa-fighter-jet"></i>
              </div>
              
              <div class="infozzzpe">5to Grado - Sección:</div>
            
            </div>



        

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


              <?php

              if ($totalRows_grado5_sa_inscrito<'40') {
                $hoja5_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja5_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja5_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja5_sa_es = "CARTA";
              }

              if ($totalRows_grado5_sa_inscrito>='40') {
                $hoja5_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja5_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja5_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja5_sa_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja5_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hoja5_sa_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja5_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja5_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado5_sb_inscrito<'40') {
                $hoja5_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja5_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja5_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja5_sb_es = "CARTA";
              }

              if ($totalRows_grado5_sb_inscrito>='40') {
                $hoja5_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja5_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja5_sb_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja5_sb_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja5_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hoja5_sb_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja5_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hoja5_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado5_sc_inscrito<'40') {
                $hoja5_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja5_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja5_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja5_sc_es = "CARTA";
              }

              if ($totalRows_grado5_sc_inscrito>='40') {
                $hoja5_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja5_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja5_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja5_sc_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja5_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hoja5_sc_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja5_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>

               <form target="_blank" action="<?php echo $hoja5_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>


              <?php

              if ($totalRows_grado5_sd_inscrito<'40') {
                $hoja5_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja5_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja5_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja5_sd_es = "CARTA";
              }

              if ($totalRows_grado5_sd_inscrito>='40') {
                $hoja5_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja5_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja5_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja5_sd_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja5_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hoja5_sd_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja5_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja5_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado5_se_inscrito<'40') {
                $hoja5_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja5_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja5_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja5_se_es = "CARTA";
              }

              if ($totalRows_grado5_se_inscrito>='40') {
                $hoja5_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja5_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja5_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja5_se_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja5_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado5_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hoja5_se_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja5_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_se_inscrito===0){?>style="display:none"<?php } ?>  >
               <b>Mod</b></button>

              </form>

                <form target="_blank" action="<?php echo $hoja5_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_se_inscrito===0){?>style="display:none"<?php } ?>  >
               <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado5_sf_inscrito<'40') {
                $hoja5_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja5_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja5_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja5_sf_es = "CARTA";
              }

              if ($totalRows_grado5_sf_inscrito>='40') {
                $hoja5_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja5_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja5_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja5_sf_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja5_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hoja5_sf_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja5_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>

               <form target="_blank" action="<?php echo $hoja5_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

              <?php

              if ($totalRows_grado5_sg_inscrito<'40') {
                $hoja5_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja5_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja5_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja5_sg_es = "CARTA";
              }

              if ($totalRows_grado5_sg_inscrito>='40') {
                $hoja5_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja5_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja5_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja5_sg_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja5_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hoja5_sg_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja5_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hoja5_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>
              <?php

              if ($totalRows_grado5_su_inscrito<'40') {
                $hoja5_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja5_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja5_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja5_su_es = "CARTA";
              }

              if ($totalRows_grado5_su_inscrito>='40') {
                $hoja5_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja5_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja5_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja5_su_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hoja5_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado5_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hoja5_su_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja5_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hoja5_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="40">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado5_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              



                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-vino btn_espx mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=40&tituloJKL=5° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado5_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado5_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div> 


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="fas fa-space-shuttle"></i>
              </div>
           
              <div class="infozzzpe">6to Grado - Sección:</div>
            
            </div>


        

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


              <?php

              if ($totalRows_grado6_sa_inscrito<'40') {
                $hoja6_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja6_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja6_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja6_sa_es = "CARTA";
              }

              if ($totalRows_grado6_sa_inscrito>='40') {
                $hoja6_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja6_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja6_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja6_sa_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja6_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hoja6_sa_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja6_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
               <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hoja6_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
               <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

                            <?php

              if ($totalRows_grado6_sb_inscrito<'40') {
                $hoja6_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja6_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja6_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja6_sb_es = "CARTA";
              }

              if ($totalRows_grado6_sb_inscrito>='40') {
                $hoja6_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja6_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja6_sb_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja6_sb_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja6_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hoja6_sb_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja6_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja6_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado6_sb_inscrito<'40') {
                $hoja6_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja6_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja6_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja6_sc_es = "CARTA";
              }

              if ($totalRows_grado6_sb_inscrito>='40') {
                $hoja6_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja6_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja6_sc_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja6_sc_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja6_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hoja6_sc_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja6_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja6_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado6_sd_inscrito<'40') {
                $hoja6_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja6_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja6_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja6_sd_es = "CARTA";
              }

              if ($totalRows_grado6_sd_inscrito>='40') {
                $hoja6_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja6_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja6_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja6_sd_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja6_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hoja6_sd_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja6_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja6_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado6_se_inscrito<'40') {
                $hoja6_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja6_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja6_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja6_se_es = "CARTA";
              }

              if ($totalRows_grado6_se_inscrito>='40') {
                $hoja6_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja6_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja6_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja6_se_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja6_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado6_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hoja6_se_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja6_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hoja6_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado6_sf_inscrito<'40') {
                $hoja6_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja6_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja6_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja6_sf_es = "CARTA";
              }

              if ($totalRows_grado6_sf_inscrito>='40') {
                $hoja6_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja6_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja6_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja6_sf_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja6_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hoja6_sf_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja6_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja6_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado6_sg_inscrito<'40') {
                $hoja6_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja6_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja6_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja6_sg_es = "CARTA";
              }

              if ($totalRows_grado6_sg_inscrito>='40') {
                $hoja6_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja6_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja6_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja6_sg_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja6_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hoja6_sg_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hoja6_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja6_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_grado6_su_inscrito<'40') {
                $hoja6_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hoja6_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hoja6_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hoja6_su_es = "CARTA";
              }

              if ($totalRows_grado6_su_inscrito>='40') {
                $hoja6_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hoja6_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hoja6_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hoja6_su_es = "OFICIO";
              } 
 
               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hoja6_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espx mb-1"
                 <?php if ($totalRows_grado6_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hoja6_su_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hoja6_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hoja6_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6° Gr. Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-vino btn_espxdos mb-1"
                 <?php if ($totalRows_grado6_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>
              


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-vino btn_espx mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=41&tituloJKL=6° Gr. Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_grado6_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
              
                            
            </div>


          </div>
        </div>         <?php  if($machin_machin!='204901'){unlink('zona_adm_pagos.php');} ?>










</div>





<h4 class="glowwhite mt-2 mb-2">Media:</h4>

<div class="row">

<div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="fas fa-desktop"></i>
              </div>
             
              <div class="infozzzpe">1er Año - Sección:</div>
            
            </div>

           

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


              <?php

              if ($totalRows_gradop1_sa_inscrito<'40') {
                $hojap1_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap1_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap1_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap1_sa_es = "CARTA";
              }

              if ($totalRows_gradop1_sa_inscrito>='40') {
                $hojap1_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap1_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap1_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap1_sa_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap1_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hojap1_sa_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojap1_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap1_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop1_sb_inscrito<'40') {
                $hojap1_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap1_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap1_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap1_sb_es = "CARTA";
              }

              if ($totalRows_gradop1_sb_inscrito>='40') {
                $hojap1_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap1_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap1_sb_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap1_sb_es = "OFICIO";
              }

               ?>
<div class="form-row">

              <form target="_blank" action="<?php echo $hojap1_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hojap1_sb_es; ?></button>

              </form>
<form target="_blank" action="<?php echo $hojap1_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
               <b>Mod</b></button>

              </form>

               </form>
<form target="_blank" action="<?php echo $hojap1_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_sb_inscrito===0){?>style="display:none"<?php } ?>  >
               <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>
              <?php

              if ($totalRows_gradop1_sc_inscrito<'40') {
                $hojap1_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap1_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap1_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap1_sc_es = "CARTA";
              }

              if ($totalRows_gradop1_sc_inscrito>='40') {
                $hojap1_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap1_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap1_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap1_sc_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap1_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hojap1_sc_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojap1_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap1_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop1_sd_inscrito<'40') {
                $hojap1_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap1_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap1_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap1_sd_es = "CARTA";
              }

              if ($totalRows_gradop1_sd_inscrito>='40') {
                $hojap1_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap1_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap1_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap1_sd_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap1_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hojap1_sd_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojap1_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap1_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>
              <?php

              if ($totalRows_gradop1_se_inscrito<'40') {
                $hojap1_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap1_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap1_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap1_se_es = "CARTA";
              }

              if ($totalRows_gradop1_se_inscrito>='40') {
                $hojap1_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap1_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap1_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap1_se_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap1_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop1_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hojap1_se_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hojap1_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap1_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>
              <?php

              if ($totalRows_gradop1_sf_inscrito<'40') {
                $hojap1_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap1_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap1_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap1_sf_es = "CARTA";
              }

              if ($totalRows_gradop1_sf_inscrito>='40') {
                $hojap1_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap1_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap1_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap1_sf_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap1_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hojap1_sf_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojap1_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap1_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop1_sg_inscrito<'40') {
                $hojap1_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap1_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap1_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap1_sg_es = "CARTA";
              }

              if ($totalRows_gradop1_sg_inscrito>='40') {
                $hojap1_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap1_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap1_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap1_sg_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap1_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hojap1_sg_es; ?></button>


              </form>

              <form target="_blank" action="<?php echo $hojap1_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>


              </form>

               <form target="_blank" action="<?php echo $hojap1_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>


              </form>
</div>

              <?php

              if ($totalRows_gradop1_su_inscrito<'40') {
                $hojap1_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap1_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap1_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap1_su_es = "CARTA";
              }

              if ($totalRows_gradop1_su_inscrito>='40') {
                $hojap1_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap1_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap1_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap1_su_es = "OFICIO";
              }

               ?>


<div class="form-row">
              <form target="_blank" action="<?php echo $hojap1_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop1_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hojap1_su_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap1_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap1_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="42">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="1er Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop1_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>


             


                <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm bg-primary btn_espx mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=42&tituloJKL=1er Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop1_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop1_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>


          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="fas fa-laptop"></i>
              </div>
           
              <div class="infozzzpe">2do Año - Sección:</div>
           
            </div>





            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


               <?php

              if ($totalRows_gradop2_sa_inscrito<'40') {
                $hojap2_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap2_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap2_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap2_sa_es = "CARTA";
              }

              if ($totalRows_gradop2_sa_inscrito>='40') {
                $hojap2_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap2_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap2_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap2_sa_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap2_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hojap2_sa_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojap2_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>


              <form target="_blank" action="<?php echo $hojap2_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradop2_sb_inscrito<'40') {
                $hojap2_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap2_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap2_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap2_sb_es = "CARTA";
              }

              if ($totalRows_gradop2_sb_inscrito>='40') {
                $hojap2_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap2_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap2_sb_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap2_sb_es = "OFICIO";
              }

               ?>


<div class="form-row">
               <form target="_blank" action="<?php echo $hojap2_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hojap2_sb_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap2_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap2_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradop2_sc_inscrito<'40') {
                $hojap2_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap2_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap2_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap2_sc_es = "CARTA";
              }

              if ($totalRows_gradop2_sc_inscrito>='40') {
                $hojap2_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap2_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap2_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap2_sc_es = "OFICIO";
              }

               ?>


<div class="form-row">
               <form target="_blank" action="<?php echo $hojap2_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hojap2_sc_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap2_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

                <form target="_blank" action="<?php echo $hojap2_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradop2_sd_inscrito<'40') {
                $hojap2_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap2_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap2_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap2_sd_es = "CARTA";
              }

              if ($totalRows_gradop2_sd_inscrito>='40') {
                $hojap2_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap2_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap2_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap2_sd_es = "OFICIO";
              }

               ?>
<div class="form-row">

               <form target="_blank" action="<?php echo $hojap2_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hojap2_sd_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap2_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>

              <form target="_blank" action="<?php echo $hojap2_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

               <?php

              if ($totalRows_gradop2_se_inscrito<'40') {
                $hojap2_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap2_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap2_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap2_se_es = "CARTA";
              }

              if ($totalRows_gradop2_se_inscrito>='40') {
                $hojap2_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap2_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap2_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap2_se_es = "OFICIO";
              }

               ?>


<div class="form-row">
               <form target="_blank" action="<?php echo $hojap2_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop2_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hojap2_se_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap2_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap2_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradop2_sf_inscrito<'40') {
                $hojap2_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap2_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap2_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap2_sf_es = "CARTA";
              }

              if ($totalRows_gradop2_sf_inscrito>='40') {
                $hojap2_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap2_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap2_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap2_sf_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hojap2_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hojap2_sf_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap2_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap2_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradop2_sg_inscrito<'40') {
                $hojap2_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap2_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap2_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap2_sg_es = "CARTA";
              }

              if ($totalRows_gradop2_sg_inscrito>='40') {
                $hojap2_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap2_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap2_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap2_sg_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hojap2_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hojap2_sg_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap2_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap2_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradop2_su_inscrito<'40') {
                $hojap2_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap2_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap2_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap2_su_es = "CARTA";
              }

              if ($totalRows_gradop2_su_inscrito>='40') {
                $hojap2_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap2_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap2_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap2_su_es = "OFICIO";
              }

               ?>


<div class="form-row">
               <form target="_blank" action="<?php echo $hojap2_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop2_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hojap2_su_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojap2_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>
               <form target="_blank" action="<?php echo $hojap2_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="43">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="2do Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop2_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>



              


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm bg-primary btn_espx mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=43&tituloJKL=2do Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop2_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop2_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="fas fa-tablet-alt"></i>
              </div>
            
              <div class="infozzzpe">3er Año - Sección:</div>
             
            </div>




            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >

              <?php

              if ($totalRows_gradop3_sa_inscrito<'40') {
                $hojap3_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap3_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap3_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap3_sa_es = "CARTA";
              }

              if ($totalRows_gradop3_sa_inscrito>='40') {
                $hojap3_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap3_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap3_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap3_sa_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hojap3_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hojap3_sa_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap3_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap3_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop3_sb_inscrito<'40') {
                $hojap3_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap3_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap3_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap3_sb_es = "CARTA";
              }

              if ($totalRows_gradop3_sb_inscrito>='40') {
                $hojap3_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap3_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap3_sb_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap3_sb_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap3_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hojap3_sb_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap3_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap3_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradop3_sc_inscrito<'40') {
                $hojap3_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap3_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap3_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap3_sc_es = "CARTA";
              }

              if ($totalRows_gradop3_sc_inscrito>='40') {
                $hojap3_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap3_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap3_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap3_sc_es = "OFICIO";
              }

               ?>


<div class="form-row">
              <form target="_blank" action="<?php echo $hojap3_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hojap3_sc_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap3_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>

               <form target="_blank" action="<?php echo $hojap3_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

               <?php

              if ($totalRows_gradop3_sd_inscrito<'40') {
                $hojap3_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap3_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap3_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap3_sd_es = "CARTA";
              }

              if ($totalRows_gradop3_sd_inscrito>='40') {
                $hojap3_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap3_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap3_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap3_sd_es = "OFICIO";
              }

               ?>


<div class="form-row">
              <form target="_blank" action="<?php echo $hojap3_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hojap3_sd_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap3_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

                <form target="_blank" action="<?php echo $hojap3_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradop3_se_inscrito<'40') {
                $hojap3_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap3_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap3_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap3_se_es = "CARTA";
              }

              if ($totalRows_gradop3_se_inscrito>='40') {
                $hojap3_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap3_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap3_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap3_se_es = "OFICIO";
              }

               ?>


<div class="form-row">
              <form target="_blank" action="<?php echo $hojap3_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop3_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hojap3_se_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojap3_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap3_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>


               <?php

              if ($totalRows_gradop3_sf_inscrito<'40') {
                $hojap3_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap3_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap3_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap3_sf_es = "CARTA";
              }

              if ($totalRows_gradop3_sf_inscrito>='40') {
                $hojap3_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap3_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
               $hojap3_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap3_sf_es = "OFICIO";
              }

               ?>


<div class="form-row">
              <form target="_blank" action="<?php echo $hojap3_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hojap3_sf_es; ?></button>

              </form>
               <form target="_blank" action="<?php echo $hojap3_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap3_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradop3_sg_inscrito<'40') {
                $hojap3_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap3_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap3_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap3_sg_es = "CARTA";
              }

              if ($totalRows_gradop3_sg_inscrito>='40') {
                $hojap3_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap3_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap3_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap3_sg_es = "OFICIO";
              }

               ?>

<div class="form-row">

              <form target="_blank" action="<?php echo $hojap3_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hojap3_sg_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap3_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap3_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

               <?php

              if ($totalRows_gradop3_su_inscrito<'40') {
                $hojap3_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap3_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap3_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap3_su_es = "CARTA";
              }

              if ($totalRows_gradop3_su_inscrito>='40') {
                $hojap3_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap3_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap3_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap3_su_es = "OFICIO";
              }

               ?>

<div class="form-row">

              <form target="_blank" action="<?php echo $hojap3_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espx mb-1"
                 <?php if ($totalRows_gradop3_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop3_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hojap3_su_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap3_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>


                <form target="_blank" action="<?php echo $hojap3_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="44">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="3er Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm bg-primary btn_espxdos mb-1"
                 <?php if ($totalRows_gradop3_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>


              


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm bg-primary btn_espx mb-1"
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
              <div class="mini_card_icon">
                <i class="fab fa-medapps"></i>
              </div>
           
              <div class="infozzzpe">4to Año - Sección:</div>
             
            </div>



     

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


              <?php

              if ($totalRows_gradop4_sa_inscrito<'40') {
                $hojap4_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap4_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap4_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap4_sa_es = "CARTA";
              }

              if ($totalRows_gradop4_sa_inscrito>='40') {
                $hojap4_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap4_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap4_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap4_sa_es = "OFICIO";
              }

               ?>

<div class="form-row">
               <form target="_blank" action="<?php echo $hojap4_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hojap4_sa_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap4_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap4_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop4_sb_inscrito<'40') {
                $hojap4_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap4_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap4_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap4_sb_es = "CARTA";
              }

              if ($totalRows_gradop4_sb_inscrito>='40') {
                $hojap4_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap4_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap4_sb_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap4_sb_es = "OFICIO";
              }

               ?>

<div class="form-row">

              <form target="_blank" action="<?php echo $hojap4_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hojap4_sb_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap4_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap4_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop4_sc_inscrito<'40') {
                $hojap4_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap4_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap4_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap4_sc_es = "CARTA";
              }

              if ($totalRows_gradop4_sc_inscrito>='40') {
                $hojap4_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap4_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap4_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap4_sc_es = "OFICIO";
              }

               ?>

<div class="form-row">

              <form target="_blank" action="<?php echo $hojap4_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hojap4_sc_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap4_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

                 <form target="_blank" action="<?php echo $hojap4_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop4_sd_inscrito<'40') {
                $hojap4_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap4_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap4_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap4_sd_es = "CARTA";
              }

              if ($totalRows_gradop4_sd_inscrito>='40') {
                $hojap4_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap4_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap4_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap4_sd_es = "OFICIO";
              }

               ?>

<div class="form-row">

              <form target="_blank" action="<?php echo $hojap4_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hojap4_sd_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap4_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap4_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop4_se_inscrito<'40') {
                $hojap4_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap4_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap4_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap4_se_es = "CARTA";
              }

              if ($totalRows_gradop4_se_inscrito>='40') {
                $hojap4_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap4_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap4_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap4_se_es = "OFICIO";
              }

               ?>

<div class="form-row">

              <form target="_blank" action="<?php echo $hojap4_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop4_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hojap4_se_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap4_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_se_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b>Mod</b></button>

              </form>

                <form target="_blank" action="<?php echo $hojap4_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_se_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>
              <?php

              if ($totalRows_gradop4_sf_inscrito<'40') {
                $hojap4_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap4_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap4_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap4_sf_es = "CARTA";
              }

              if ($totalRows_gradop4_sf_inscrito>='40') {
                $hojap4_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap4_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap4_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap4_sf_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap4_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hojap4_sf_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap4_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap4_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop4_sg_inscrito<'40') {
                $hojap4_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap4_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap4_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap4_sg_es = "CARTA";
              }

              if ($totalRows_gradop4_sg_inscrito>='40') {
                $hojap4_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap4_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap4_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap4_sg_es = "OFICIO";
              }

               ?>


<div class="form-row">
              <form target="_blank" action="<?php echo $hojap4_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hojap4_sg_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap4_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b>Mod</b></button>

              </form>


               <form target="_blank" action="<?php echo $hojap4_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop4_su_inscrito<'40') {
                $hojap4_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap4_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap4_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap4_su_es = "CARTA";
              }

              if ($totalRows_gradop4_su_inscrito>='40') {
                $hojap4_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap4_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap4_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap4_su_es = "OFICIO";
              }

               ?>


<div class="form-row">
              <form target="_blank" action="<?php echo $hojap4_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop4_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hojap4_su_es; ?></button>

              </form>
               <form target="_blank" action="<?php echo $hojap4_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap4_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="45">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="4to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop4_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

             


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-browplight btn_espx mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=45&tituloJKL=4to Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop4_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop4_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>



          </div>
        </div> 


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="fab fa-react"></i>
              </div>
         
              <div class="infozzzpe">5to Año - Sección:</div>
           
            </div>


               

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


<?php

              if ($totalRows_gradop5_sa_inscrito<'40') {
                $hojap5_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap5_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap5_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap5_sa_es = "CARTA";
              }

              if ($totalRows_gradop5_sa_inscrito>='40') {
                $hojap5_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap5_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap5_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap5_sa_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap5_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hojap5_sa_es; ?></button>

              </form>
               <form target="_blank" action="<?php echo $hojap5_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>

               <form target="_blank" action="<?php echo $hojap5_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

              <?php

              if ($totalRows_gradop5_sb_inscrito<'40') {
                $hojap5_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap5_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap5_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap5_sb_es = "CARTA";
              }

              if ($totalRows_gradop5_sb_inscrito>='40') {
                $hojap5_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap5_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap5_sb_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap5_sb_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap5_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hojap5_sb_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap5_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

                <form target="_blank" action="<?php echo $hojap5_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>


              <?php

              if ($totalRows_gradop5_sc_inscrito<'40') {
                $hojap5_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap5_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap5_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap5_sc_es = "CARTA";
              }

              if ($totalRows_gradop5_sc_inscrito>='40') {
                $hojap5_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap5_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap5_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap5_sc_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap5_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hojap5_sc_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojap5_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap5_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>


              <?php

              if ($totalRows_gradop5_sd_inscrito<'40') {
                $hojap5_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap5_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap5_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap5_sd_es = "CARTA";
              }

              if ($totalRows_gradop5_sd_inscrito>='40') {
                $hojap5_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap5_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap5_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap5_sd_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap5_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hojap5_sd_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap5_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap5_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop5_se_inscrito<'40') {
                $hojap5_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap5_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap5_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap5_se_es = "CARTA";
              }

              if ($totalRows_gradop5_se_inscrito>='40') {
                $hojap5_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap5_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap5_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap5_se_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap5_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop5_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hojap5_se_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap5_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

                 <form target="_blank" action="<?php echo $hojap5_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop5_sf_inscrito<'40') {
                $hojap5_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap5_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap5_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap5_sf_es = "CARTA";
              }

              if ($totalRows_gradop5_sf_inscrito>='40') {
                $hojap5_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap5_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap5_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap5_sf_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap5_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hojap5_sf_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hojap5_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap5_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop5_sg_inscrito<'40') {
                $hojap5_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap5_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap5_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap5_sg_es = "CARTA";
              }

              if ($totalRows_gradop5_sg_inscrito>='40') {
                $hojap5_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap5_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap5_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap5_sg_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap5_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hojap5_sg_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap5_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap5_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop5_su_inscrito<'40') {
                $hojap5_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap5_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap5_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap5_su_es = "CARTA";
              }

              if ($totalRows_gradop5_su_inscrito>='40') {
                $hojap5_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap5_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap5_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap5_su_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap5_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop5_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hojap5_su_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap5_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap5_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop5_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

             


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-browplight btn_espx mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=46&tituloJKL=5to Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop5_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>


          </div>
        </div>   

        <div class="col-xl-3 col-sm-6 mb-3"  <?php if ($totalRows_ano6_inscrito===0) {?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="fab fa-hubspot"></i>
              </div>
         
              <div class="infozzzpe">6to Año - Sección:</div>
           
            </div>


               

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


<?php

              if ($totalRows_gradop6_sa_inscrito<'40') {
                $hojap6_sa_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap6_sa_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap6_sa_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap6_sa_es = "CARTA";
              }

              if ($totalRows_gradop6_sa_inscrito>='40') {
                $hojap6_sa_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap6_sa_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap6_sa_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap6_sa_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap6_sa_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sa_inscrito; ?></b>&nbsp;&nbsp; - "A" - <?php echo $la_hojap6_sa_es; ?></button>

              </form>
               <form target="_blank" action="<?php echo $hojap6_sa_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>
              </form>

               <form target="_blank" action="<?php echo $hojap6_sa_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. A ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_sa_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>
              </form>
</div>

              <?php

              if ($totalRows_gradop6_sb_inscrito<'40') {
                $hojap6_sb_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap6_sb_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap6_sb_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap6_sb_es = "CARTA";
              }

              if ($totalRows_gradop6_sb_inscrito>='40') {
                $hojap6_sb_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap6_sb_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap6_sb_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap6_sb_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap6_sb_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sb_inscrito; ?></b>&nbsp;&nbsp; - "B" - <?php echo $la_hojap6_sb_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap6_sb_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

                <form target="_blank" action="<?php echo $hojap6_sb_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="2">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. B ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_sb_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>


              <?php

              if ($totalRows_gradop6_sc_inscrito<'40') {
                $hojap6_sc_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap6_sc_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap6_sc_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap6_sc_es = "CARTA";
              }

              if ($totalRows_gradop6_sc_inscrito>='40') {
                $hojap6_sc_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap6_sc_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap6_sc_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap6_sc_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap6_sc_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sc_inscrito; ?></b>&nbsp;&nbsp; - "C" - <?php echo $la_hojap6_sc_es; ?></button>

              </form>

              <form target="_blank" action="<?php echo $hojap6_sc_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

               <form target="_blank" action="<?php echo $hojap6_sc_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="11">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. C ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_sc_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>


              <?php

              if ($totalRows_gradop6_sd_inscrito<'40') {
                $hojap6_sd_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap6_sd_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap6_sd_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap6_sd_es = "CARTA";
              }

              if ($totalRows_gradop6_sd_inscrito>='40') {
                $hojap6_sd_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap6_sd_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap6_sd_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap6_sd_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap6_sd_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sd_inscrito; ?></b>&nbsp;&nbsp; - "D" - <?php echo $la_hojap6_sd_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap6_sd_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap6_sd_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="12">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. D ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_sd_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop6_se_inscrito<'40') {
                $hojap6_se_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap6_se_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap6_se_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap6_se_es = "CARTA";
              }

              if ($totalRows_gradop6_se_inscrito>='40') {
                $hojap6_se_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap6_se_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap6_se_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap6_se_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap6_se_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop6_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_se_inscrito; ?></b>&nbsp;&nbsp; - "E" - <?php echo $la_hojap6_se_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap6_se_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

                 <form target="_blank" action="<?php echo $hojap6_se_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="13">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. E ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_se_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop6_sf_inscrito<'40') {
                $hojap6_sf_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap6_sf_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap6_sf_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap6_sf_es = "CARTA";
              }

              if ($totalRows_gradop6_sf_inscrito>='40') {
                $hojap6_sf_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap6_sf_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap6_sf_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap6_sf_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap6_sf_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sf_inscrito; ?></b>&nbsp;&nbsp; - "F" - <?php echo $la_hojap6_sf_es; ?></button>

              </form>

               <form target="_blank" action="<?php echo $hojap6_sf_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap6_sf_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="14">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. F ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_sf_inscrito===0){?>style="display:none"<?php } ?>  >
                 <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop6_sg_inscrito<'40') {
                $hojap6_sg_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap6_sg_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap6_sg_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap6_sg_es = "CARTA";
              }

              if ($totalRows_gradop6_sg_inscrito>='40') {
                $hojap6_sg_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap6_sg_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap6_sg_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap6_sg_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap6_sg_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sg_inscrito; ?></b>&nbsp;&nbsp; - "G" - <?php echo $la_hojap6_sg_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap6_sg_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap6_sg_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="15">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. G ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_sg_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

              <?php

              if ($totalRows_gradop6_su_inscrito<'40') {
                $hojap6_su_es = "zzz_impresiones/imp_lista_carta.php";
                $hojap6_su_es_mod = "zzz_impresiones/imp_lista_carta_mod.php";
                $hojap6_su_es_detalle = "zzz_impresiones/imp_lista_carta_evaluaciones.php";
                $la_hojap6_su_es = "CARTA";
              }

              if ($totalRows_gradop6_su_inscrito>='40') {
                $hojap6_su_es = "zzz_impresiones/imp_lista_oficio.php";
                $hojap6_su_es_mod = "zzz_impresiones/imp_lista_oficio_mod.php";
                $hojap6_su_es_detalle = "zzz_impresiones/imp_lista_oficio_evaluaciones.php.php";
                $la_hojap6_su_es = "OFICIO";
              }

               ?>

<div class="form-row">
              <form target="_blank" action="<?php echo $hojap6_su_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espx mb-1"
                 <?php if ($totalRows_gradop6_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_su_inscrito; ?></b>&nbsp;&nbsp; - "U" - <?php echo $la_hojap6_su_es; ?></button>

              </form>
              <form target="_blank" action="<?php echo $hojap6_su_es_mod; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b>Mod</b></button>

              </form>

              <form target="_blank" action="<?php echo $hojap6_su_es_detalle; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="53">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="9">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Año Secc. U ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-browplight btn_espxdos mb-1"
                 <?php if ($totalRows_gradop6_su_inscrito===0){?>style="display:none"<?php } ?>  >
                <b><i class="fab fa-searchengin fa-lg"></i></b></button>

              </form>
</div>

             


                 <!-- boton para secciones incorrectas -->

                 <a class="btn btn-sm relleno-browplight btn_espx mb-1"
                  href="plantilla_control_xx.php?ciclo=<?php echo $id_periodo_clave; ?>&grado=53&tituloJKL=6to Año Sección Erronea &nbsp;"
               role="button"  <?php if ($totalRows_gradop6_sx_inscrito===0){?>style="display:none"<?php } ?> >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop6_sx_inscrito; ?></b>&nbsp;&nbsp; - "X"</a>
              
                            
            </div>


          </div>
        </div>


        

      </div>  <!-- cierre row -->






<h4 class="glowwhite mt-2 mb-2">Especiales:</h4>


<div class="row">




        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-grama o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="fas fa-paper-plane"></i>
              </div>
           
              <div class="infozzzpe">6to Grado Completo:</div>
             
            </div>

     

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


              <?php

              if ($totalRows_grado6_tot_inscrito<'40') {
                $hoja6_tot_es = "zzz_impresiones/imp_lista_carta_completa.php";
                $la_hoja6_tot_es = "CARTA";
              }

              if ($totalRows_grado6_tot_inscrito>='40') {
                $hoja6_tot_es = "zzz_impresiones/imp_lista_oficio_completa.php";
                $la_hoja6_tot_es = "OFICIO";
              }

               ?>


               <form target="_blank" action="<?php echo $hoja6_tot_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="41">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value=1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="6to Grado Completo ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-grama btn_espx mb-1"
                 <?php if ($totalRows_grado6_tot_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_grado6_tot_inscrito; ?></b>&nbsp;&nbsp; -&nbsp; <?php echo $la_hoja6_tot_es; ?></button>

              </form>


              


              
                            
            </div>



          </div>
        </div> 


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-verdeosc o-hidden h-100">
            <div class="card-body">
              <div class="mini_card_icon">
                <i class="far fa-paper-plane"></i>
              </div>
         
              <div class="infozzzpe">5to Año Completo:</div>
           
            </div>


               

            <div class="card-footer col-md-12 card-footerz  clearfix z-1 small" >


<?php

              if ($totalRows_gradop5_tot_inscrito<'40') {
                $hojap5_tot_es = "zzz_impresiones/imp_lista_carta_completa.php";
                $la_hojap5_tot_es = "CARTA";
              }

              if ($totalRows_gradop5_tot_inscrito>='40') {
                $hojap5_tot_es = "zzz_impresiones/imp_lista_oficio_completa.php";
                $la_hojap5_tot_es = "OFICIO";
              }

               ?>


              <form target="_blank" action="<?php echo $hojap5_tot_es; ?>" method="POST">

                 <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $id_periodo_clave; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="46">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value=1">
                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="5to Año Completo ">

              <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-sm relleno-verdeosc btn_espx mb-1"
                 <?php if ($totalRows_gradop5_tot_inscrito===0){?>style="display:none"<?php } ?>  >
                <i class="fas fa-user-friends"></i> : <b><?php echo $totalRows_gradop5_tot_inscrito; ?></b>&nbsp;&nbsp; -&nbsp; <?php echo $la_hojap5_tot_es; ?></button>

              </form>


         
           

             
              
                            
            </div>


          </div>
        </div>   




        

      </div>  <!-- cierre row -->




















<!-- Cierre Icon Cards-->






                           

            </div>   <!-- cierre container fluid -->
        </div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
