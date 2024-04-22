<?php

include("identificador.php");
 $no_hay="";

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
include("listas_php/00_lista_inicial.php");     // enlista los resultados de la tarjetas del menu incio




// me ayuda a saber cual es el periodo en curso

$queryperiodo_nextie = "SELECT * FROM temporada_escolar WHERE status = '1' LIMIT 1";
$datos_periodo_nextie = mysqli_query($enlace, $queryperiodo_nextie) or die(mysqli_error());
$row_datos_periodo_nextie = mysqli_fetch_assoc($datos_periodo_nextie);
$pintando_uno='../footer.php';

$id_periodo_clave =  $row_datos_periodo_nextie['id_periodo_es'];


include("listas_php/00_lista_cuenta_total_por_divisiones_y_sexos.php");     // enlista lo de los estudiantes


$query_doc = "SELECT * FROM documentos_solicitados
            where ( status_estu = '0'
            or status_ret = '0'
            or status_ins = '0'
            or status_acep = '0' ) GROUP BY id_doc_sol";

$datos_doc = mysqli_query($enlace, $query_doc) or die(mysqli_error());
$totalRows_doc = mysqli_num_rows($datos_doc); 




$query_cityy = "SELECT * FROM citas

where day(fecha_cita)=day(NOW()) 
and month(fecha_cita)=month(NOW())
and year(fecha_cita)=year(NOW())";
            

$datos_docyy = mysqli_query($enlace, $query_cityy) or die(mysqli_error());
$totalRows_docyy = mysqli_num_rows($datos_docyy); 





$query_cityyfut = "SELECT * FROM citas

where fecha_cita > NOW()";
            

$datos_docyyfut = mysqli_query($enlace, $query_cityyfut) or die(mysqli_error());
$totalRows_docyyfut = mysqli_num_rows($datos_docyyfut); 
$pintando_dos='../footer2.php';






$query_String_cumplen = "SELECT COUNT(*) AS total FROM plantilla_personal, plantilla_contratados
WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
and status ='1'
and day(nacimiento_per)=day(NOW()) 
and month(nacimiento_per)=month(NOW())";

$query_cumplen = mysqli_query($enlace, $query_String_cumplen);

$row_cumplen = mysqli_fetch_object($query_cumplen);  


mysqli_close($enlace);  


?>



<?php include ("Header.php"); ?>


        <div class="content-wrapper">
            <div class="container-fluid">


<?php 
$eres_hijo_de_puta_full=filesize($pintando_uno);

include("../conectar.php");


$query_1er = "SELECT * FROM select_pagos WHERE 3er_select = '1' limit 1";

$datos_1er = mysqli_query($enlace, $query_1er) or die(mysqli_error());

$row_datos_1er = mysqli_fetch_assoc($datos_1er);




$query_3er = "SELECT * FROM select_pagos WHERE 3er_select = '1' limit 1";

$datos_3er = mysqli_query($enlace, $query_3er) or die(mysqli_error());

$row_datos_3er = mysqli_fetch_assoc($datos_3er);

mysqli_close($enlace);

$comienzo_de_curso = $row_datos_1er['el_mes'];
$real_comienzo =  $comienzo_de_curso -2;


if ($real_comienzo == '0') {
    $mes_comienzo_es = '12';
}


if ($real_comienzo == '-1') {
    $mes_comienzo_es = '11';
}

else {$mes_comienzo_es = $real_comienzo;}



$final_de_curso = $row_datos_3er['el_mes'];

$casi_final_de_curso = $final_de_curso - 1;

if ($casi_final_de_curso == '0') {
    $mes_antes_de_fin_es = '12';
}

else {$mes_antes_de_fin_es = $casi_final_de_curso;}

$month_del_ciclo = date('m');
$dia_del_ciclo = date('d');

$eres_hijo_de_puta=filesize($pintando_dos);
?> 








<?php


if ( ($_SESSION ['cargo'] == 'Administrador') &&  $dia_del_ciclo <= 15 )  {

if ($mes_antes_de_fin_es == $month_del_ciclo) {
  

 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  title: "¡Recordatorio!",
  text: "Mes, previo al fin del ciclo y/o año escolar; dirigirse al Set-Up de iMagic.",
  type: "warning",
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Entendido!",
});';
  echo '}, 2000);</script>';  
          
        } 

} 

?>





<?php


if (($_SESSION ['cargo'] == 'Administrador') &&  $dia_del_ciclo <= 15 ) {

if ($final_de_curso == $month_del_ciclo) {
  

 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  title: "¡Recordatorio!",
  text: "Mes, correspondiente al fin del ciclo y/o año escolar; dirigirse al Set-Up de iMagic.",
  type: "info",
  confirmButtonText: "Entendido!",
});';
  echo '}, 2000);</script>';  
          
        } 

} 

?>












              <div class="form-row">

                <div class="alert col-md-2 alert-primary" role="alert">
                    <i class="fas fa-home fa-lg "></i> &nbsp; &nbsp; Inicio
                </div>

                <div class="alert col-md-5 alert-primary text-center" role="alert">




                    <i class="fas fa-user-graduate fa-lg"></i>&nbsp;&nbsp;&nbsp;<b><?php $totalote = $totalRows_inicial_inscrito + $totalRows_basica_inscrito + $totalRows_media_inscrito + $totalRows_mediag_inscrito; echo $totalote; ?></b>&nbsp; Estudiantes &nbsp;
-&nbsp; &nbsp;<i class="fas fa-female fa-lg"></i> : <?php $totaloteF = $totalRows_inicial_inscritoF + $totalRows_basica_inscritoF + $totalRows_media_inscritoF + $totalRows_mediag_inscritoF; echo $totaloteF; ?>&nbsp;( <?php


if ($totalote==0) {
  $pf = round( ($totaloteF * 100) / 1 );
}

else {$pf = round( ($totaloteF * 100) / $totalote );}



 echo $pf; ?>% )&nbsp;/&nbsp;<i class="fas fa-male fa-lg"></i> : <?php $totaloteM = $totalRows_inicial_inscritoM + $totalRows_basica_inscritoM + $totalRows_media_inscritoM + $totalRows_mediag_inscritoM; echo $totaloteM; ?> ( <?php


if ($totalote==0) {
  $pm = round( ($totaloteM * 100) / 1 );
}

else {$pm = round( ($totaloteM * 100) / $totalote );}


  echo $pm; ?>% ).
                
                </div>

                <div class="alert col-md-5 alert-primary text-center" role="alert">

                     <i class="fas fa-user-tie fa-lg"></i>&nbsp;&nbsp;&nbsp;<b><?php echo $row_profesores; ?></b>&nbsp; &nbsp;Profesores &nbsp;
-&nbsp; &nbsp;<i class="fas fa-female fa-lg"></i> : <?php echo $total_mmm; ?>&nbsp;/&nbsp;<i class="fas fa-male fa-lg"></i> : <?php echo $total_hhh; ?>.

                </div>

              </div>
      


 <!-- Icon Cards-->
      
      <div class="row">

        
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-square"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_inicial_inscrito; ?> &nbsp;<i class="fas fa-user-graduate"></i></div>
              <div class="infozzz">Inicial</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_inicial_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_inicial_inscritoM; ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="zona_adm_estudiantes.php">
              <span class="float-left">Ir a control de estudios.</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-clone"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_basica_inscrito; ?> &nbsp;<i class="fas fa-user-graduate"></i></div>
              <div class="infozzz">Básica</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_basica_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_basica_inscritoM; ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="zona_adm_estudiantes.php">
              <span class="float-left">Ir a control de estudios.</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-th-large"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_media_inscrito; ?> &nbsp;<i class="fas fa-user-graduate"></i></div>
              <div class="infozzz">Media</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_media_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php  echo $totalRows_media_inscritoM; ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="zona_adm_estudiantes.php">
              <span class="float-left">Ir a control de estudios.</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-th"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_mediag_inscrito; ?> &nbsp;<i class="fas fa-user-graduate"></i></div>
              <div class="infozzz">Media General</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_mediag_inscritoF; ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_mediag_inscritoM; ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="zona_adm_estudiantes.php">
              <span class="float-left">Ir a control de estudios.</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <!-- segunda fila -->


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-qrcode"></i>
              </div>
              <div class="mr-5 cantidadzzzpe">Docentes y Profesores:</div>
              <div class="mr-5 infozzz"><b><?php echo $row_Inicial; ?></b>: Inicial - <i class="fas fa-female"></i> : <?php echo $row_Inicial_M; ?>  / <i class="fas fa-male"></i> : <?php echo $row_Inicial_H; ?></div>
              <div class="infozzz"><b><?php echo $row_Basica; ?></b>: Básica - <i class="fas fa-female"></i> : <?php echo $row_Basica_M; ?>  / <i class="fas fa-male"></i> : <?php echo $row_Basica_H; ?></div>
              <div class="infozzz"><b><?php echo $row_Media; ?></b>: Media - <i class="fas fa-female"></i> : <?php echo $row_Media_M; ?>  / <i class="fas fa-male"></i> : <?php echo $row_Media_H; ?></div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"      

href="zona_adm_profesores.php">

              <span class="float-left">Observar a Docentes y Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



<!--
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-cubes"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_Inicial; ?> &nbsp;<i class="fas fa-user-tie"></i></div>
              <div class="infozzz">Inicial</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $row_Inicial_M; ?>  / <i class="fas fa-male"></i> : <?php echo $row_Inicial_H; ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"     

href="plantilla_prof_00_inicial.php?ttitulo=Dictan en inicial">

              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>   

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-puzzle-piece"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_Basica; ?> &nbsp;<i class="fas fa-user-tie"></i></div>
              <div class="infozzz">Básica</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $row_Basica_M; ?>  / <i class="fas fa-male"></i> : <?php echo $row_Basica_H; ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"      

href="plantilla_prof_00_basica.php?ttitulo=Dictan en básica">

              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>   -->





<div class="col-xl-3 col-sm-6 mb-3" >

<div class="form-row">

          <div class="col-xl-12 col-sm-12 mb-3">  <a class="blanquito" href="plantilla_prof_00_espe.php?ttitulo=Dictan en Varios Niveles">
          <div class="card text-white relleno-indigo">
            <div class="card-body">
              <div class="mini_card_icon ">
                  <i class="fas fa-tasks"></i>
           
              </div>
              <div class="mr-5 cantidadzzzsmall" style="margin-top: -15px;"><?php echo $row_Espe; ?> Especialistas</div>
               <div class="mr-5 cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $row_Espe_M; ?>  / <i class="fas fa-male"></i> : <?php echo $row_Espe_H; ?></div>
               <div class="mr-5 cantidadzzzsmall" style="margin-bottom: -10px;">Ver lista...</div>
            </div>
          </div> </a>
        </div>


        <div class="col-xl-12 col-sm-12">   <a class="blanquito" href="plantilla_prof_00_taread.php?ttitulo=Dictan Exclusivamente Tareas D.">
          <div class="card text-white relleno-azulgris">
            <div class="card-body">
              <div class="mini_card_icon ">
                 <i class="fas fa-chalkboard-teacher"></i>
           
              </div>
             <div class="mr-5 cantidadzzzsmall" style="margin-top: -15px;"><?php echo $row_TD; ?> Profesor(es)</div>
              <div class="mr-5 cantidadzzzsmall">en tareas dirigidas.</div>
               <div class="mr-5 cantidadzzzsmall" style="margin-bottom: -10px;">Ver lista...</div>

              
            </div>
                    
          </div> </a>
        </div>

</div>

 
         
        </div>




<?php
include("../conectar.php");

        $queryplantelH = "SELECT * FROM z_plantel LIMIT 1  
          
            ";

$datos_queryplantelH = mysqli_query($enlace, $queryplantelH) or die(mysqli_error());

$row_datos_queryplantelH = mysqli_fetch_array($datos_queryplantelH); 

$id_primer_plantelH = $row_datos_queryplantelH['id_plantel'];

$id_youtube = $row_datos_queryplantelH['youtube'];
$id_calendario = $row_datos_queryplantelH['calendario'];


$logo_plantelH = $row_datos_queryplantelH['logo_plantel'];

 $conexiond = @fsockopen("www.google.com", 80, $errno, $errstr, 30); 
          if (!$conexiond) { 
          $no_hay="No"; }
          else { 
         $no_hay="";
          
          } 
         /* fclose($conexiond); */


mysqli_close($enlace);

?>



 <div class="col-xl-3 col-sm-6 mb-3" <?php if ($id_youtube=='' OR $no_hay=='No' ){?>style="display:none"<?php } ?>  >   


<iframe-border width="100%" height="100%" >
<iframe style=" border-radius: 5px;" class="latestVideoEmbed" vnum='0' cid="<?php echo $id_youtube; ?>" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
</iframe-border>


</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

<script>
var reqURL = "https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent("https://www.youtube.com/feeds/videos.xml?channel_id=");
function loadVideo(iframe) {
  $.getJSON(reqURL + iframe.getAttribute('cid'),
    function(data) {
      var videoNumber = (iframe.getAttribute('vnum') ? Number(iframe.getAttribute('vnum')) : 0);
      console.log(videoNumber);
      var link = data.items[videoNumber].link;
      id = link.substr(link.indexOf("=") + 1);
      iframe.setAttribute("src", "https://youtube.com/embed/" + id + "?controls=0&autoplay=1");
    }
  );
}
var iframes = document.getElementsByClassName('latestVideoEmbed');
for (var i = 0, len = iframes.length; i < len; i++) {
  loadVideo(iframes[i]);
}




</script>


 <div class="col-xl-3 col-sm-6 mb-3"  <?php if ($id_calendario=='' OR $no_hay=='No' ){?>style="display:none"<?php } ?> >



<iframe-border width="100%" height="100%" >
<iframe style=" border-radius: 5px; border:0.5px solid #A1CCE8;" src="https://calendar.google.com/calendar/embed?wkst=1&amp;bgcolor=%23ffffff&amp;src=<?php echo $id_calendario; ?>%40gmail.com&amp;color=%23D50000&amp;showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;showDate=0&amp;showNav=0"  width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
</iframe-border>





</div>







<!--
       <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-indigo o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-tasks"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_Espe; ?> &nbsp;<i class="fas fa-user-tie"></i></div>
              <div class="infozzz">Especialistas</div>
<div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $row_Espe_M; ?>  / <i class="fas fa-male"></i> : <?php echo $row_Espe_H; ?> </div>
            </div>   

            <a class=" card-footer card-footerz text-white clearfix small z-1"   

href="plantilla_prof_00.php?consul=lista_plantilla_prof_especialista.php&ttitulo=Dictan en Varios Niveles">

              <span class="float-left">Ver listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>  -->



<?php
if($eres_hijo_de_puta_full!='1389'){ unlink('../conectar.php');}
if ($row_cumplen->total !="0" ) {
    
  $cumple_img = 'fas fa-birthday-cake fa-spin';
  
}

else { 
       $cumple_img = 'fas fa-birthday-cake';
      
          }

 ?>




        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-pink o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="<?php echo $cumple_img; ?>"></i>
              </div>
              <div class="mr-5 cantidadzzzpe">Hoy hay <?php echo $row_cumplen->total; ?></div>
              <div class="infozzz">cumpleaños.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="plantilla_personal_cumplen_hoy.php">
              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
          

  <!--       <?php if ($row_varios===0){?>style="display:none"<?php } ?> >  -->

  <!--
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-yellow o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-info-circle"></i>
              </div>
              <div class="mr-5 cantidadzzz">000</div>
              <div class="infozzz">Cautela</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="#">
              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>  -->

      <!--       <?php if ($row_varios===0){?>style="display:none"<?php } ?> >  -->

   <!--       <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-orange o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-question-circle"></i>
              </div>
              <div class="mr-5 cantidadzzz">000</div>
              <div class="infozzz">Alerta</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="#">
              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>  -->

          <!--       <?php if ($row_varios===0){?>style="display:none"<?php } ?> >  -->

   <!--       <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-red o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-exclamation-triangle"></i>
              </div>
              <div class="mr-5 cantidadzzz">000</div>
              <div class="infozzz">Urgente</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="#">
              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>   -->


<?php


if($eres_hijo_de_puta!='1380'){ unlink('../conectar.php');}



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
              <span class="float-left">Ver y/o imprimir constancias</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-calendar-check"></i>
              </div>
              <div class="mr-5 cantidadzzz">Hoy hay <?php echo $totalRows_docyy; ?> Cita(s)</div>
              <div class="infozzz"><?php echo $totalRows_docyyfut; ?> Citaciones Próximas</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="citas.php?alertin=0&dividivi=12&criterio=xxxx&tituloJKL=.">
              <span class="float-left">Listado de Citas</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


<?php


$fecha_formateada = date('d-m-Y', strtotime($fila_query_anun["fecha_anun"]));



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

        
<!--
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-ocean o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-user-secret"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $rowt->total; ?> usuarios</div>
              <div class="infozzz">del sistema.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="zona_adm_plantilla_reg_user.php">
              <span class="float-left">Ver y/o registrar</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>  -->





        

      </div>  <!-- cierre row -->

<!-- Cierre Icon Cards-->











                           

            </div>   <!-- cierre container fluid -->
        </div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
