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



$query_secc_passA = "SELECT * FROM secciones
            where nombre_seccion = 'A'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rA = mysqli_query($enlace, $query_secc_passA) or die(mysqli_error());
$query_secc_pass_resultadosA = mysqli_fetch_assoc($query_secc_pass_rA);


$query_secc_passB = "SELECT * FROM secciones
            where nombre_seccion = 'B'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rB = mysqli_query($enlace, $query_secc_passB) or die(mysqli_error());
$query_secc_pass_resultadosB = mysqli_fetch_assoc($query_secc_pass_rB);


$query_secc_passC = "SELECT * FROM secciones
            where nombre_seccion = 'C'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rC = mysqli_query($enlace, $query_secc_passC) or die(mysqli_error());
$query_secc_pass_resultadosC = mysqli_fetch_assoc($query_secc_pass_rC);


$query_secc_passD = "SELECT * FROM secciones
            where nombre_seccion = 'D'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rD = mysqli_query($enlace, $query_secc_passD) or die(mysqli_error());
$query_secc_pass_resultadosD = mysqli_fetch_assoc($query_secc_pass_rD);


$query_secc_passE = "SELECT * FROM secciones
            where nombre_seccion = 'E'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rE = mysqli_query($enlace, $query_secc_passE) or die(mysqli_error());
$query_secc_pass_resultadosE = mysqli_fetch_assoc($query_secc_pass_rE);

$query_secc_passF = "SELECT * FROM secciones
            where nombre_seccion = 'F'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rF = mysqli_query($enlace, $query_secc_passF) or die(mysqli_error());
$query_secc_pass_resultadosF = mysqli_fetch_assoc($query_secc_pass_rF);

$query_secc_passG = "SELECT * FROM secciones
            where nombre_seccion = 'G'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rG = mysqli_query($enlace, $query_secc_passG) or die(mysqli_error());
$query_secc_pass_resultadosG = mysqli_fetch_assoc($query_secc_pass_rG);

$query_secc_passU = "SELECT * FROM secciones
            where nombre_seccion = 'U'
            GROUP BY id_seccion limit 1";

$query_secc_pass_rU = mysqli_query($enlace, $query_secc_passU) or die(mysqli_error());
$query_secc_pass_resultadosU = mysqli_fetch_assoc($query_secc_pass_rU);

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
                      &nbsp; &nbsp;<b>Control de estudios año: </b></span>     <!--  <?php echo $id_periodo_clave; ?> -->
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


<div class="form-row ml-1"> <form target="_blank" action="zzz_impresiones/imp_lista_door.php" method="POST">


          <input type="hidden" id="id_periodoxxx"   name="id_periodoxxx"   value="<?php echo $id_periodo_clave; ?>">
          
          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-dark mr-1 mb-1" style="width: 210px;">
           <i class="fas fa-door-open"></i>&nbsp;&nbsp;Imprimir</button>

</form>

            </div>  








 <!-- Icon Cards-->
      



<div class="alert alert-danger mt-1" role="alert">
  <b>¡Nota!:</b> Existen 2 tipos de claves de acceso para poder ingresar y cargar o modificar las notas almacenadas</b>.
  <ol class="mb-1 mt-1">
    <li><b>Generales:</b>&nbsp;Dan acceso completo a todas las materias de un mismo grupo o año; Ideal para cuando solo un docente o profesor es el encargado.</li>
    <li><b>Especificas:</b>&nbsp;Dan acceso a solo una asignatura o materia; Ideal cuando diversos docentes o profesores imparten clases en un mismo grupo.</li>
  </ol>
  
  Cada clave consta de <b>7 números</b> y está conformada por <b>4 números</b> de acceso general o especifico, <b>seguido de 3 números</b> de acceso propio para cada sección; Debe suministrar al docente o profesor 4 números generales o específicos, seguidos de 3 números de la sección.
</div>










<h4 class="glowwhite mt-2 mb-2">Inicial:</h4>


<div class="row">




<?php
include("../conectar.php");
$queryasignaturas52 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '52'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign52 = mysqli_query($enlace, $queryasignaturas52) or die(mysqli_error());
$row_datos_controlasign52 = mysqli_fetch_array($datos_controlasign52); 
mysqli_close($enlace); 


if ($row_datos_controlasign52['a_aaa'] == '') {
  $asign52a = '';
}

if ($row_datos_controlasign52['a_aaa'] != '') {
  $asign52a = $row_datos_controlasign52['a_aaa'];
}

if ($row_datos_controlasign52['b_bbb'] == '') {
  $asign52b = '';
}

if ($row_datos_controlasign52['b_bbb'] != '') {
  $asign52b = $row_datos_controlasign52['b_bbb'];
}

if ($row_datos_controlasign52['c_ccc'] == '') {
  $asign52c = '';
}

if ($row_datos_controlasign52['c_ccc'] != '') {
  $asign52c = $row_datos_controlasign52['c_ccc'];
}

if ($row_datos_controlasign52['d_ddd'] == '') {
  $asign52d = '';
}

if ($row_datos_controlasign52['d_ddd'] != '') {
  $asign52d = $row_datos_controlasign52['d_ddd'];
}

if ($row_datos_controlasign52['e_eee'] == '') {
  $asign52e = '';
}

if ($row_datos_controlasign52['e_eee'] != '') {
  $asign52e = $row_datos_controlasign52['e_eee'];
}

if ($row_datos_controlasign52['f_fff'] == '') {
  $asign52f = '';
}

if ($row_datos_controlasign52['f_fff'] != '') {
  $asign52f = $row_datos_controlasign52['f_fff'];
}

if ($row_datos_controlasign52['g_ggg'] == '') {
  $asign52g = '';
}

if ($row_datos_controlasign52['g_ggg'] != '') {
  $asign52g = $row_datos_controlasign52['g_ggg'];
}

if ($row_datos_controlasign52['h_hhh'] == '') {
  $asign52h = '';
}

if ($row_datos_controlasign52['h_hhh'] != '') {
  $asign52h = $row_datos_controlasign52['h_hhh'];
}

if ($row_datos_controlasign52['i_iii'] == '') {
  $asign52i = '';
}

if ($row_datos_controlasign52['i_iii'] != '') {
  $asign52i = $row_datos_controlasign52['i_iii'];
}

if ($row_datos_controlasign52['j_jjj'] == '') {
  $asign52j = '';
}

if ($row_datos_controlasign52['j_jjj'] != '') {
  $asign52j = $row_datos_controlasign52['j_jjj'];
}

if ($row_datos_controlasign52['k_kkk'] == '') {
  $asign52k = '';
}

if ($row_datos_controlasign52['k_kkk'] != '') {
  $asign52k = $row_datos_controlasign52['k_kkk'];
}

if ($row_datos_controlasign52['l_lll'] == '') {
  $asign52l = '';
}

if ($row_datos_controlasign52['l_lll'] != '') {
  $asign52l = $row_datos_controlasign52['l_lll'];
}

if ($row_datos_controlasign52['m_mmm'] == '') {
  $asign52m = '';
}

if ($row_datos_controlasign52['m_mmm'] != '') {
  $asign52m = $row_datos_controlasign52['m_mmm'];
}

if ($row_datos_controlasign52['n_nnn'] == '') {
  $asign52n = '';
}

if ($row_datos_controlasign52['n_nnn'] != '') {
  $asign52n = $row_datos_controlasign52['n_nnn'];
}
 ?>




        <div class="col-xl-3 col-sm-6 mb-3" <?php  if ($totalRows_maternal_inscrito===0){?>style="display:none"<?php } ?>  >
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-earlybirds"data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
               <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign52['grado_pass'];?>" >
              Maternal</div>

              <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign52['a_pass'];?>" <?php if ($asign52a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign52a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign52['b_pass'];?>" <?php if ($asign52b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign52b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign52['c_pass'];?>" <?php if ($asign52c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign52c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign52['d_pass'];?>" <?php if ($asign52d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign52d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign52['e_pass'];?>" <?php if ($asign52e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign52e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign52['f_pass'];?>" <?php if ($asign52f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign52f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign52['g_pass'];?>" <?php if ($asign52g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign52g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign52['h_pass'];?>" <?php if ($asign52h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign52h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign52['i_pass'];?>" <?php if ($asign52i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign52i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign52['j_pass'];?>" <?php if ($asign52j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign52j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign52['k_pass'];?>" <?php if ($asign52k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign52k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign52['l_pass'];?>" <?php if ($asign52l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign52l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign52['m_pass'];?>" <?php if ($asign52m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign52m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign52['n_pass'];?>" <?php if ($asign52n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign52n;?></span>
             </div>


<span><b>Secc:</b></span><?php $string52 = $row_datos_controlasign52['grado_pass']; $first52 = $string52[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first52;?>" <?php if ($totalRows_gradom_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first52;?>" <?php if ($totalRows_gradom_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first52;?>" <?php if ($totalRows_gradom_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first52;?>" <?php if ($totalRows_gradom_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first52;?>" <?php if ($totalRows_gradom_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first52;?>" <?php if ($totalRows_gradom_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first52;?>" <?php if ($totalRows_gradom_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first52;?>" <?php if ($totalRows_gradom_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "U" </a></span>




           
            </div>

             
          </div>
        </div>







<?php
include("../conectar.php");
$queryasignaturas54 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '54'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign54 = mysqli_query($enlace, $queryasignaturas54) or die(mysqli_error());
$row_datos_controlasign54 = mysqli_fetch_array($datos_controlasign54); 
mysqli_close($enlace); 


if ($row_datos_controlasign54['a_aaa'] == '') {
  $asign54a = '';
}

if ($row_datos_controlasign54['a_aaa'] != '') {
  $asign54a = $row_datos_controlasign54['a_aaa'];
}

if ($row_datos_controlasign54['b_bbb'] == '') {
  $asign54b = '';
}

if ($row_datos_controlasign54['b_bbb'] != '') {
  $asign54b = $row_datos_controlasign54['b_bbb'];
}

if ($row_datos_controlasign54['c_ccc'] == '') {
  $asign54c = '';
}

if ($row_datos_controlasign54['c_ccc'] != '') {
  $asign54c = $row_datos_controlasign54['c_ccc'];
}

if ($row_datos_controlasign54['d_ddd'] == '') {
  $asign54d = '';
}

if ($row_datos_controlasign54['d_ddd'] != '') {
  $asign54d = $row_datos_controlasign54['d_ddd'];
}

if ($row_datos_controlasign54['e_eee'] == '') {
  $asign54e = '';
}

if ($row_datos_controlasign54['e_eee'] != '') {
  $asign54e = $row_datos_controlasign54['e_eee'];
}

if ($row_datos_controlasign54['f_fff'] == '') {
  $asign54f = '';
}

if ($row_datos_controlasign54['f_fff'] != '') {
  $asign54f = $row_datos_controlasign54['f_fff'];
}

if ($row_datos_controlasign54['g_ggg'] == '') {
  $asign54g = '';
}

if ($row_datos_controlasign54['g_ggg'] != '') {
  $asign54g = $row_datos_controlasign54['g_ggg'];
}

if ($row_datos_controlasign54['h_hhh'] == '') {
  $asign54h = '';
}

if ($row_datos_controlasign54['h_hhh'] != '') {
  $asign54h = $row_datos_controlasign54['h_hhh'];
}

if ($row_datos_controlasign54['i_iii'] == '') {
  $asign54i = '';
}

if ($row_datos_controlasign54['i_iii'] != '') {
  $asign54i = $row_datos_controlasign54['i_iii'];
}

if ($row_datos_controlasign54['j_jjj'] == '') {
  $asign54j = '';
}

if ($row_datos_controlasign54['j_jjj'] != '') {
  $asign54j = $row_datos_controlasign54['j_jjj'];
}

if ($row_datos_controlasign54['k_kkk'] == '') {
  $asign54k = '';
}

if ($row_datos_controlasign54['k_kkk'] != '') {
  $asign54k = $row_datos_controlasign54['k_kkk'];
}

if ($row_datos_controlasign54['l_lll'] == '') {
  $asign54l = '';
}

if ($row_datos_controlasign54['l_lll'] != '') {
  $asign54l = $row_datos_controlasign54['l_lll'];
}

if ($row_datos_controlasign54['m_mmm'] == '') {
  $asign54m = '';
}

if ($row_datos_controlasign54['m_mmm'] != '') {
  $asign54m = $row_datos_controlasign54['m_mmm'];
}

if ($row_datos_controlasign54['n_nnn'] == '') {
  $asign54n = '';
}

if ($row_datos_controlasign54['n_nnn'] != '') {
  $asign54n = $row_datos_controlasign54['n_nnn'];
}
 ?>





        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-kiwi-bird" data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
              <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign54['grado_pass'];?>" >
              Pre-E. 1er Niv.</div>

              <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign54['a_pass'];?>" <?php if ($asign54a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign54a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign54['b_pass'];?>" <?php if ($asign54b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign54b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign54['c_pass'];?>" <?php if ($asign54c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign54c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign54['d_pass'];?>" <?php if ($asign54d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign54d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign54['e_pass'];?>" <?php if ($asign54e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign54e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign54['f_pass'];?>" <?php if ($asign54f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign54f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign54['g_pass'];?>" <?php if ($asign54g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign54g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign54['h_pass'];?>" <?php if ($asign54h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign54h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign54['i_pass'];?>" <?php if ($asign54i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign54i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign54['j_pass'];?>" <?php if ($asign54j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign54j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign54['k_pass'];?>" <?php if ($asign54k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign54k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign54['l_pass'];?>" <?php if ($asign54l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign54l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign54['m_pass'];?>" <?php if ($asign54m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign54m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign54['n_pass'];?>" <?php if ($asign54n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign54n;?></span>
             </div>


<span><b>Secc:</b></span><?php $string54 = $row_datos_controlasign54['grado_pass']; $first54 = $string54[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first54;?>" <?php if ($totalRows_gradon1_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first54;?>" <?php if ($totalRows_gradon1_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first54;?>" <?php if ($totalRows_gradon1_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first54;?>" <?php if ($totalRows_gradon1_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first54;?>" <?php if ($totalRows_gradon1_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first54;?>" <?php if ($totalRows_gradon1_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first54;?>" <?php if ($totalRows_gradon1_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first54;?>" <?php if ($totalRows_gradon1_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "U" </a></span>




           
            </div>

             
          </div>
        </div>




<?php
include("../conectar.php");
$queryasignaturas55 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '55'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign55 = mysqli_query($enlace, $queryasignaturas55) or die(mysqli_error());
$row_datos_controlasign55 = mysqli_fetch_array($datos_controlasign55); 
mysqli_close($enlace); 


if ($row_datos_controlasign55['a_aaa'] == '') {
  $asign55a = '';
}

if ($row_datos_controlasign55['a_aaa'] != '') {
  $asign55a = $row_datos_controlasign55['a_aaa'];
}

if ($row_datos_controlasign55['b_bbb'] == '') {
  $asign55b = '';
}

if ($row_datos_controlasign55['b_bbb'] != '') {
  $asign55b = $row_datos_controlasign55['b_bbb'];
}

if ($row_datos_controlasign55['c_ccc'] == '') {
  $asign55c = '';
}

if ($row_datos_controlasign55['c_ccc'] != '') {
  $asign55c = $row_datos_controlasign55['c_ccc'];
}

if ($row_datos_controlasign55['d_ddd'] == '') {
  $asign55d = '';
}

if ($row_datos_controlasign55['d_ddd'] != '') {
  $asign55d = $row_datos_controlasign55['d_ddd'];
}

if ($row_datos_controlasign55['e_eee'] == '') {
  $asign55e = '';
}

if ($row_datos_controlasign55['e_eee'] != '') {
  $asign55e = $row_datos_controlasign55['e_eee'];
}

if ($row_datos_controlasign55['f_fff'] == '') {
  $asign55f = '';
}

if ($row_datos_controlasign55['f_fff'] != '') {
  $asign55f = $row_datos_controlasign55['f_fff'];
}

if ($row_datos_controlasign55['g_ggg'] == '') {
  $asign55g = '';
}

if ($row_datos_controlasign55['g_ggg'] != '') {
  $asign55g = $row_datos_controlasign55['g_ggg'];
}

if ($row_datos_controlasign55['h_hhh'] == '') {
  $asign55h = '';
}

if ($row_datos_controlasign55['h_hhh'] != '') {
  $asign55h = $row_datos_controlasign55['h_hhh'];
}

if ($row_datos_controlasign55['i_iii'] == '') {
  $asign55i = '';
}

if ($row_datos_controlasign55['i_iii'] != '') {
  $asign55i = $row_datos_controlasign55['i_iii'];
}

if ($row_datos_controlasign55['j_jjj'] == '') {
  $asign55j = '';
}

if ($row_datos_controlasign55['j_jjj'] != '') {
  $asign55j = $row_datos_controlasign55['j_jjj'];
}

if ($row_datos_controlasign55['k_kkk'] == '') {
  $asign55k = '';
}

if ($row_datos_controlasign55['k_kkk'] != '') {
  $asign55k = $row_datos_controlasign55['k_kkk'];
}

if ($row_datos_controlasign55['l_lll'] == '') {
  $asign55l = '';
}

if ($row_datos_controlasign55['l_lll'] != '') {
  $asign55l = $row_datos_controlasign55['l_lll'];
}

if ($row_datos_controlasign55['m_mmm'] == '') {
  $asign55m = '';
}

if ($row_datos_controlasign55['m_mmm'] != '') {
  $asign55m = $row_datos_controlasign55['m_mmm'];
}

if ($row_datos_controlasign55['n_nnn'] == '') {
  $asign55n = '';
}

if ($row_datos_controlasign55['n_nnn'] != '') {
  $asign55n = $row_datos_controlasign55['n_nnn'];
}
 ?>




        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-crow"data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
              <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign55['grado_pass'];?>" >Pre-E. 2do Niv.</div>
            
  <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign55['a_pass'];?>" <?php if ($asign55a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign55a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign55['b_pass'];?>" <?php if ($asign55b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign55b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign55['c_pass'];?>" <?php if ($asign55c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign55c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign55['d_pass'];?>" <?php if ($asign55d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign55d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign55['e_pass'];?>" <?php if ($asign55e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign55e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign55['f_pass'];?>" <?php if ($asign55f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign55f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign55['g_pass'];?>" <?php if ($asign55g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign55g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign55['h_pass'];?>" <?php if ($asign55h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign55h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign55['i_pass'];?>" <?php if ($asign55i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign55i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign55['j_pass'];?>" <?php if ($asign55j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign55j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign55['k_pass'];?>" <?php if ($asign55k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign55k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign55['l_pass'];?>" <?php if ($asign55l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign55l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign55['m_pass'];?>" <?php if ($asign55m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign55m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign55['n_pass'];?>" <?php if ($asign55n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign55n;?></span>
             </div>


<span><b>Secc:</b></span><?php $string55 = $row_datos_controlasign55['grado_pass']; $first55 = $string55[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first55;?>" <?php if ($totalRows_gradon2_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first55;?>" <?php if ($totalRows_gradon2_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first55;?>" <?php if ($totalRows_gradon2_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first55;?>" <?php if ($totalRows_gradon2_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first55;?>" <?php if ($totalRows_gradon2_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first55;?>" <?php if ($totalRows_gradon2_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first55;?>" <?php if ($totalRows_gradon2_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first55;?>" <?php if ($totalRows_gradon2_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "U" </a></span>





            
            </div>

                       

          </div>
        </div>

<?php
include("../conectar.php");
$queryasignaturas56 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '56'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign56 = mysqli_query($enlace, $queryasignaturas56) or die(mysqli_error());
$row_datos_controlasign56 = mysqli_fetch_array($datos_controlasign56); 
mysqli_close($enlace); 


if ($row_datos_controlasign56['a_aaa'] == '') {
  $asign56a = '';
}

if ($row_datos_controlasign56['a_aaa'] != '') {
  $asign56a = $row_datos_controlasign56['a_aaa'];
}

if ($row_datos_controlasign56['b_bbb'] == '') {
  $asign56b = '';
}

if ($row_datos_controlasign56['b_bbb'] != '') {
  $asign56b = $row_datos_controlasign56['b_bbb'];
}

if ($row_datos_controlasign56['c_ccc'] == '') {
  $asign56c = '';
}

if ($row_datos_controlasign56['c_ccc'] != '') {
  $asign56c = $row_datos_controlasign56['c_ccc'];
}

if ($row_datos_controlasign56['d_ddd'] == '') {
  $asign56d = '';
}

if ($row_datos_controlasign56['d_ddd'] != '') {
  $asign56d = $row_datos_controlasign56['d_ddd'];
}

if ($row_datos_controlasign56['e_eee'] == '') {
  $asign56e = '';
}

if ($row_datos_controlasign56['e_eee'] != '') {
  $asign56e = $row_datos_controlasign56['e_eee'];
}

if ($row_datos_controlasign56['f_fff'] == '') {
  $asign56f = '';
}

if ($row_datos_controlasign56['f_fff'] != '') {
  $asign56f = $row_datos_controlasign56['f_fff'];
}

if ($row_datos_controlasign56['g_ggg'] == '') {
  $asign56g = '';
}

if ($row_datos_controlasign56['g_ggg'] != '') {
  $asign56g = $row_datos_controlasign56['g_ggg'];
}

if ($row_datos_controlasign56['h_hhh'] == '') {
  $asign56h = '';
}

if ($row_datos_controlasign56['h_hhh'] != '') {
  $asign56h = $row_datos_controlasign56['h_hhh'];
}

if ($row_datos_controlasign56['i_iii'] == '') {
  $asign56i = '';
}

if ($row_datos_controlasign56['i_iii'] != '') {
  $asign56i = $row_datos_controlasign56['i_iii'];
}

if ($row_datos_controlasign56['j_jjj'] == '') {
  $asign56j = '';
}

if ($row_datos_controlasign56['j_jjj'] != '') {
  $asign56j = $row_datos_controlasign56['j_jjj'];
}

if ($row_datos_controlasign56['k_kkk'] == '') {
  $asign56k = '';
}

if ($row_datos_controlasign56['k_kkk'] != '') {
  $asign56k = $row_datos_controlasign56['k_kkk'];
}

if ($row_datos_controlasign56['l_lll'] == '') {
  $asign56l = '';
}

if ($row_datos_controlasign56['l_lll'] != '') {
  $asign56l = $row_datos_controlasign56['l_lll'];
}

if ($row_datos_controlasign56['m_mmm'] == '') {
  $asign56m = '';
}

if ($row_datos_controlasign56['m_mmm'] != '') {
  $asign56m = $row_datos_controlasign56['m_mmm'];
}

if ($row_datos_controlasign56['n_nnn'] == '') {
  $asign56n = '';
}

if ($row_datos_controlasign56['n_nnn'] != '') {
  $asign56n = $row_datos_controlasign56['n_nnn'];
}
 ?>





        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-dove"data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
              <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign56['grado_pass'];?>" >Pre-E. 3er Niv.</div>

  <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign56['a_pass'];?>" <?php if ($asign56a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign56a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign56['b_pass'];?>" <?php if ($asign56b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign56b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign56['c_pass'];?>" <?php if ($asign56c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign56c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign56['d_pass'];?>" <?php if ($asign56d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign56d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign56['e_pass'];?>" <?php if ($asign56e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign56e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign56['f_pass'];?>" <?php if ($asign56f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign56f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign56['g_pass'];?>" <?php if ($asign56g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign56g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign56['h_pass'];?>" <?php if ($asign56h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign56h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign56['i_pass'];?>" <?php if ($asign56i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign56i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign56['j_pass'];?>" <?php if ($asign56j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign56j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign56['k_pass'];?>" <?php if ($asign56k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign56k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign56['l_pass'];?>" <?php if ($asign56l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign56l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign56['m_pass'];?>" <?php if ($asign56m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign56m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign56['n_pass'];?>" <?php if ($asign56n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign56n;?></span>
             </div>




<span><b>Secc:</b></span><?php $string56 = $row_datos_controlasign56['grado_pass']; $first56 = $string56[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first56;?>" <?php if ($totalRows_gradon3_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first56;?>" <?php if ($totalRows_gradon3_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first56;?>" <?php if ($totalRows_gradon3_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first56;?>" <?php if ($totalRows_gradon3_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first56;?>" <?php if ($totalRows_gradon3_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first56;?>" <?php if ($totalRows_gradon3_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first56;?>" <?php if ($totalRows_gradon3_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first56;?>" <?php if ($totalRows_gradon3_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-lila mb-1"  role="button"> "U" </a></span>





             
            </div>

                   

          </div>
        </div>

        

        </div>  <!-- cierre row -->



<h4 class="glowwhite mt-2 mb-2">Básica:</h4>


<div class="row">





<?php
include("../conectar.php");
$queryasignaturas35 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '35'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign35 = mysqli_query($enlace, $queryasignaturas35) or die(mysqli_error());
$row_datos_controlasign35 = mysqli_fetch_array($datos_controlasign35); 
mysqli_close($enlace); 


if ($row_datos_controlasign35['a_aaa'] == '') {
  $asign35a = '';
}

if ($row_datos_controlasign35['a_aaa'] != '') {
  $asign35a = $row_datos_controlasign35['a_aaa'];
}

if ($row_datos_controlasign35['b_bbb'] == '') {
  $asign35b = '';
}

if ($row_datos_controlasign35['b_bbb'] != '') {
  $asign35b = $row_datos_controlasign35['b_bbb'];
}

if ($row_datos_controlasign35['c_ccc'] == '') {
  $asign35c = '';
}

if ($row_datos_controlasign35['c_ccc'] != '') {
  $asign35c = $row_datos_controlasign35['c_ccc'];
}

if ($row_datos_controlasign35['d_ddd'] == '') {
  $asign35d = '';
}

if ($row_datos_controlasign35['d_ddd'] != '') {
  $asign35d = $row_datos_controlasign35['d_ddd'];
}

if ($row_datos_controlasign35['e_eee'] == '') {
  $asign35e = '';
}

if ($row_datos_controlasign35['e_eee'] != '') {
  $asign35e = $row_datos_controlasign35['e_eee'];
}

if ($row_datos_controlasign35['f_fff'] == '') {
  $asign35f = '';
}

if ($row_datos_controlasign35['f_fff'] != '') {
  $asign35f = $row_datos_controlasign35['f_fff'];
}

if ($row_datos_controlasign35['g_ggg'] == '') {
  $asign35g = '';
}

if ($row_datos_controlasign35['g_ggg'] != '') {
  $asign35g = $row_datos_controlasign35['g_ggg'];
}

if ($row_datos_controlasign35['h_hhh'] == '') {
  $asign35h = '';
}

if ($row_datos_controlasign35['h_hhh'] != '') {
  $asign35h = $row_datos_controlasign35['h_hhh'];
}

if ($row_datos_controlasign35['i_iii'] == '') {
  $asign35i = '';
}

if ($row_datos_controlasign35['i_iii'] != '') {
  $asign35i = $row_datos_controlasign35['i_iii'];
}

if ($row_datos_controlasign35['j_jjj'] == '') {
  $asign35j = '';
}

if ($row_datos_controlasign35['j_jjj'] != '') {
  $asign35j = $row_datos_controlasign35['j_jjj'];
}

if ($row_datos_controlasign35['k_kkk'] == '') {
  $asign35k = '';
}

if ($row_datos_controlasign35['k_kkk'] != '') {
  $asign35k = $row_datos_controlasign35['k_kkk'];
}

if ($row_datos_controlasign35['l_lll'] == '') {
  $asign35l = '';
}

if ($row_datos_controlasign35['l_lll'] != '') {
  $asign35l = $row_datos_controlasign35['l_lll'];
}

if ($row_datos_controlasign35['m_mmm'] == '') {
  $asign35m = '';
}

if ($row_datos_controlasign35['m_mmm'] != '') {
  $asign35m = $row_datos_controlasign35['m_mmm'];
}

if ($row_datos_controlasign35['n_nnn'] == '') {
  $asign35n = '';
}

if ($row_datos_controlasign35['n_nnn'] != '') {
  $asign35n = $row_datos_controlasign35['n_nnn'];
}
 ?>





  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-car-side"data-fa-transform="shrink-9  up-6 right-2" ></i>  
              </div>
              <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign35['grado_pass'];?>" >1er Grado</div>  
          
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign35['a_pass'];?>" <?php if ($asign35a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign35a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign35['b_pass'];?>" <?php if ($asign35b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign35b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign35['c_pass'];?>" <?php if ($asign35c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign35c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign35['d_pass'];?>" <?php if ($asign35d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign35d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign35['e_pass'];?>" <?php if ($asign35e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign35e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign35['f_pass'];?>" <?php if ($asign35f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign35f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign35['g_pass'];?>" <?php if ($asign35g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign35g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign35['h_pass'];?>" <?php if ($asign35h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign35h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign35['i_pass'];?>" <?php if ($asign35i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign35i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign35['j_pass'];?>" <?php if ($asign35j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign35j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign35['k_pass'];?>" <?php if ($asign35k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign35k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign35['l_pass'];?>" <?php if ($asign35l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign35l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign35['m_pass'];?>" <?php if ($asign35m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign35m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign35['n_pass'];?>" <?php if ($asign35n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign35n;?></span>
             </div>



<span><b>Secc:</b></span><?php $string35 = $row_datos_controlasign35['grado_pass']; $first35 = $string35[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first35;?>" <?php if ($totalRows_grado1_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first35;?>" <?php if ($totalRows_grado1_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first35;?>" <?php if ($totalRows_grado1_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first35;?>" <?php if ($totalRows_grado1_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first35;?>" <?php if ($totalRows_grado1_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first35;?>" <?php if ($totalRows_grado1_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first35;?>" <?php if ($totalRows_grado1_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first35;?>" <?php if ($totalRows_grado1_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "U" </a></span>

             
            </div>

          
          </div>
        </div> 




<?php
include("../conectar.php");
$queryasignaturas36 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '36'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign36 = mysqli_query($enlace, $queryasignaturas36) or die(mysqli_error());
$row_datos_controlasign36 = mysqli_fetch_array($datos_controlasign36); 
mysqli_close($enlace); 


if ($row_datos_controlasign36['a_aaa'] == '') {
  $asign36a = '';
}

if ($row_datos_controlasign36['a_aaa'] != '') {
  $asign36a = $row_datos_controlasign36['a_aaa'];
}

if ($row_datos_controlasign36['b_bbb'] == '') {
  $asign36b = '';
}

if ($row_datos_controlasign36['b_bbb'] != '') {
  $asign36b = $row_datos_controlasign36['b_bbb'];
}

if ($row_datos_controlasign36['c_ccc'] == '') {
  $asign36c = '';
}

if ($row_datos_controlasign36['c_ccc'] != '') {
  $asign36c = $row_datos_controlasign36['c_ccc'];
}

if ($row_datos_controlasign36['d_ddd'] == '') {
  $asign36d = '';
}

if ($row_datos_controlasign36['d_ddd'] != '') {
  $asign36d = $row_datos_controlasign36['d_ddd'];
}

if ($row_datos_controlasign36['e_eee'] == '') {
  $asign36e = '';
}

if ($row_datos_controlasign36['e_eee'] != '') {
  $asign36e = $row_datos_controlasign36['e_eee'];
}

if ($row_datos_controlasign36['f_fff'] == '') {
  $asign36f = '';
}

if ($row_datos_controlasign36['f_fff'] != '') {
  $asign36f = $row_datos_controlasign36['f_fff'];
}

if ($row_datos_controlasign36['g_ggg'] == '') {
  $asign36g = '';
}

if ($row_datos_controlasign36['g_ggg'] != '') {
  $asign36g = $row_datos_controlasign36['g_ggg'];
}

if ($row_datos_controlasign36['h_hhh'] == '') {
  $asign36h = '';
}

if ($row_datos_controlasign36['h_hhh'] != '') {
  $asign36h = $row_datos_controlasign36['h_hhh'];
}

if ($row_datos_controlasign36['i_iii'] == '') {
  $asign36i = '';
}

if ($row_datos_controlasign36['i_iii'] != '') {
  $asign36i = $row_datos_controlasign36['i_iii'];
}

if ($row_datos_controlasign36['j_jjj'] == '') {
  $asign36j = '';
}

if ($row_datos_controlasign36['j_jjj'] != '') {
  $asign36j = $row_datos_controlasign36['j_jjj'];
}

if ($row_datos_controlasign36['k_kkk'] == '') {
  $asign36k = '';
}

if ($row_datos_controlasign36['k_kkk'] != '') {
  $asign36k = $row_datos_controlasign36['k_kkk'];
}

if ($row_datos_controlasign36['l_lll'] == '') {
  $asign36l = '';
}

if ($row_datos_controlasign36['l_lll'] != '') {
  $asign36l = $row_datos_controlasign36['l_lll'];
}

if ($row_datos_controlasign36['m_mmm'] == '') {
  $asign36m = '';
}

if ($row_datos_controlasign36['m_mmm'] != '') {
  $asign36m = $row_datos_controlasign36['m_mmm'];
}

if ($row_datos_controlasign36['n_nnn'] == '') {
  $asign36n = '';
}

if ($row_datos_controlasign36['n_nnn'] != '') {
  $asign36n = $row_datos_controlasign36['n_nnn'];
}
 ?>




        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-truck-pickup"data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
        <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign36['grado_pass'];?>" >2do Grado</div>
             
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign36['a_pass'];?>" <?php if ($asign36a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign36a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign36['b_pass'];?>" <?php if ($asign36b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign36b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign36['c_pass'];?>" <?php if ($asign36c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign36c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign36['d_pass'];?>" <?php if ($asign36d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign36d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign36['e_pass'];?>" <?php if ($asign36e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign36e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign36['f_pass'];?>" <?php if ($asign36f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign36f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign36['g_pass'];?>" <?php if ($asign36g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign36g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign36['h_pass'];?>" <?php if ($asign36h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign36h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign36['i_pass'];?>" <?php if ($asign36i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign36i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign36['j_pass'];?>" <?php if ($asign36j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign36j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign36['k_pass'];?>" <?php if ($asign36k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign36k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign36['l_pass'];?>" <?php if ($asign36l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign36l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign36['m_pass'];?>" <?php if ($asign36m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign36m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign36['n_pass'];?>" <?php if ($asign36n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign36n;?></span>
             </div>




<span><b>Secc:</b></span><?php $string36 = $row_datos_controlasign36['grado_pass']; $first36 = $string36[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first36;?>" <?php if ($totalRows_grado2_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first36;?>" <?php if ($totalRows_grado2_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first36;?>" <?php if ($totalRows_grado2_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first36;?>" <?php if ($totalRows_grado2_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first36;?>" <?php if ($totalRows_grado2_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first36;?>" <?php if ($totalRows_grado2_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first36;?>" <?php if ($totalRows_grado2_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first36;?>" <?php if ($totalRows_grado2_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "U" </a></span>


            </div>

        
          </div>
        </div>  



<?php
include("../conectar.php");
$queryasignaturas37 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '37'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign37 = mysqli_query($enlace, $queryasignaturas37) or die(mysqli_error());
$row_datos_controlasign37 = mysqli_fetch_array($datos_controlasign37); 
mysqli_close($enlace); 


if ($row_datos_controlasign37['a_aaa'] == '') {
  $asign37a = '';
}

if ($row_datos_controlasign37['a_aaa'] != '') {
  $asign37a = $row_datos_controlasign37['a_aaa'];
}

if ($row_datos_controlasign37['b_bbb'] == '') {
  $asign37b = '';
}

if ($row_datos_controlasign37['b_bbb'] != '') {
  $asign37b = $row_datos_controlasign37['b_bbb'];
}

if ($row_datos_controlasign37['c_ccc'] == '') {
  $asign37c = '';
}

if ($row_datos_controlasign37['c_ccc'] != '') {
  $asign37c = $row_datos_controlasign37['c_ccc'];
}

if ($row_datos_controlasign37['d_ddd'] == '') {
  $asign37d = '';
}

if ($row_datos_controlasign37['d_ddd'] != '') {
  $asign37d = $row_datos_controlasign37['d_ddd'];
}

if ($row_datos_controlasign37['e_eee'] == '') {
  $asign37e = '';
}

if ($row_datos_controlasign37['e_eee'] != '') {
  $asign37e = $row_datos_controlasign37['e_eee'];
}

if ($row_datos_controlasign37['f_fff'] == '') {
  $asign37f = '';
}

if ($row_datos_controlasign37['f_fff'] != '') {
  $asign37f = $row_datos_controlasign37['f_fff'];
}

if ($row_datos_controlasign37['g_ggg'] == '') {
  $asign37g = '';
}

if ($row_datos_controlasign37['g_ggg'] != '') {
  $asign37g = $row_datos_controlasign37['g_ggg'];
}

if ($row_datos_controlasign37['h_hhh'] == '') {
  $asign37h = '';
}

if ($row_datos_controlasign37['h_hhh'] != '') {
  $asign37h = $row_datos_controlasign37['h_hhh'];
}

if ($row_datos_controlasign37['i_iii'] == '') {
  $asign37i = '';
}

if ($row_datos_controlasign37['i_iii'] != '') {
  $asign37i = $row_datos_controlasign37['i_iii'];
}

if ($row_datos_controlasign37['j_jjj'] == '') {
  $asign37j = '';
}

if ($row_datos_controlasign37['j_jjj'] != '') {
  $asign37j = $row_datos_controlasign37['j_jjj'];
}

if ($row_datos_controlasign37['k_kkk'] == '') {
  $asign37k = '';
}

if ($row_datos_controlasign37['k_kkk'] != '') {
  $asign37k = $row_datos_controlasign37['k_kkk'];
}

if ($row_datos_controlasign37['l_lll'] == '') {
  $asign37l = '';
}

if ($row_datos_controlasign37['l_lll'] != '') {
  $asign37l = $row_datos_controlasign37['l_lll'];
}

if ($row_datos_controlasign37['m_mmm'] == '') {
  $asign37m = '';
}

if ($row_datos_controlasign37['m_mmm'] != '') {
  $asign37m = $row_datos_controlasign37['m_mmm'];
}

if ($row_datos_controlasign37['n_nnn'] == '') {
  $asign37n = '';
}

if ($row_datos_controlasign37['n_nnn'] != '') {
  $asign37n = $row_datos_controlasign37['n_nnn'];
}
 ?>





        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-truck-monster"data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
             <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign37['grado_pass'];?>" >3er Grado</div>

<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign37['a_pass'];?>" <?php if ($asign37a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign37a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign37['b_pass'];?>" <?php if ($asign37b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign37b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign37['c_pass'];?>" <?php if ($asign37c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign37c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign37['d_pass'];?>" <?php if ($asign37d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign37d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign37['e_pass'];?>" <?php if ($asign37e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign37e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign37['f_pass'];?>" <?php if ($asign37f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign37f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign37['g_pass'];?>" <?php if ($asign37g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign37g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign37['h_pass'];?>" <?php if ($asign37h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign37h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign37['i_pass'];?>" <?php if ($asign37i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign37i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign37['j_pass'];?>" <?php if ($asign37j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign37j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign37['k_pass'];?>" <?php if ($asign37k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign37k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign37['l_pass'];?>" <?php if ($asign37l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign37l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign37['m_pass'];?>" <?php if ($asign37m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign37m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign37['n_pass'];?>" <?php if ($asign37n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign37n;?></span>
             </div>



<span><b>Secc:</b></span><?php $string37 = $row_datos_controlasign37['grado_pass']; $first37 = $string37[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first37;?>" <?php if ($totalRows_grado3_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first37;?>" <?php if ($totalRows_grado3_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first37;?>" <?php if ($totalRows_grado3_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first37;?>" <?php if ($totalRows_grado3_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first37;?>" <?php if ($totalRows_grado3_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first37;?>" <?php if ($totalRows_grado3_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first37;?>" <?php if ($totalRows_grado3_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first37;?>" <?php if ($totalRows_grado3_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-purpplight mb-1"  role="button"> "U" </a></span>


            </div>
        
          </div>
        </div> 




</div>

<div class="row">


 
<?php
include("../conectar.php");
$queryasignaturas38 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '38'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign38 = mysqli_query($enlace, $queryasignaturas38) or die(mysqli_error());
$row_datos_controlasign38 = mysqli_fetch_array($datos_controlasign38); 
mysqli_close($enlace); 


if ($row_datos_controlasign38['a_aaa'] == '') {
  $asign38a = '';
}

if ($row_datos_controlasign38['a_aaa'] != '') {
  $asign38a = $row_datos_controlasign38['a_aaa'];
}

if ($row_datos_controlasign38['b_bbb'] == '') {
  $asign38b = '';
}

if ($row_datos_controlasign38['b_bbb'] != '') {
  $asign38b = $row_datos_controlasign38['b_bbb'];
}

if ($row_datos_controlasign38['c_ccc'] == '') {
  $asign38c = '';
}

if ($row_datos_controlasign38['c_ccc'] != '') {
  $asign38c = $row_datos_controlasign38['c_ccc'];
}

if ($row_datos_controlasign38['d_ddd'] == '') {
  $asign38d = '';
}

if ($row_datos_controlasign38['d_ddd'] != '') {
  $asign38d = $row_datos_controlasign38['d_ddd'];
}

if ($row_datos_controlasign38['e_eee'] == '') {
  $asign38e = '';
}

if ($row_datos_controlasign38['e_eee'] != '') {
  $asign38e = $row_datos_controlasign38['e_eee'];
}

if ($row_datos_controlasign38['f_fff'] == '') {
  $asign38f = '';
}

if ($row_datos_controlasign38['f_fff'] != '') {
  $asign38f = $row_datos_controlasign38['f_fff'];
}

if ($row_datos_controlasign38['g_ggg'] == '') {
  $asign38g = '';
}

if ($row_datos_controlasign38['g_ggg'] != '') {
  $asign38g = $row_datos_controlasign38['g_ggg'];
}

if ($row_datos_controlasign38['h_hhh'] == '') {
  $asign38h = '';
}

if ($row_datos_controlasign38['h_hhh'] != '') {
  $asign38h = $row_datos_controlasign38['h_hhh'];
}

if ($row_datos_controlasign38['i_iii'] == '') {
  $asign38i = '';
}

if ($row_datos_controlasign38['i_iii'] != '') {
  $asign38i = $row_datos_controlasign38['i_iii'];
}

if ($row_datos_controlasign38['j_jjj'] == '') {
  $asign38j = '';
}

if ($row_datos_controlasign38['j_jjj'] != '') {
  $asign38j = $row_datos_controlasign38['j_jjj'];
}

if ($row_datos_controlasign38['k_kkk'] == '') {
  $asign38k = '';
}

if ($row_datos_controlasign38['k_kkk'] != '') {
  $asign38k = $row_datos_controlasign38['k_kkk'];
}

if ($row_datos_controlasign38['l_lll'] == '') {
  $asign38l = '';
}

if ($row_datos_controlasign38['l_lll'] != '') {
  $asign38l = $row_datos_controlasign38['l_lll'];
}

if ($row_datos_controlasign38['m_mmm'] == '') {
  $asign38m = '';
}

if ($row_datos_controlasign38['m_mmm'] != '') {
  $asign38m = $row_datos_controlasign38['m_mmm'];
}

if ($row_datos_controlasign38['n_nnn'] == '') {
  $asign38n = '';
}

if ($row_datos_controlasign38['n_nnn'] != '') {
  $asign38n = $row_datos_controlasign38['n_nnn'];
}
 ?>         


         <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-plane"data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
           <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign38['grado_pass'];?>" >4to Grado</div>
       <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign38['a_pass'];?>" <?php if ($asign38a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign38a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign38['b_pass'];?>" <?php if ($asign38b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign38b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign38['c_pass'];?>" <?php if ($asign38c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign38c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign38['d_pass'];?>" <?php if ($asign38d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign38d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign38['e_pass'];?>" <?php if ($asign38e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign38e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign38['f_pass'];?>" <?php if ($asign38f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign38f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign38['g_pass'];?>" <?php if ($asign38g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign38g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign38['h_pass'];?>" <?php if ($asign38h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign38h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign38['i_pass'];?>" <?php if ($asign38i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign38i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign38['j_pass'];?>" <?php if ($asign38j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign38j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign38['k_pass'];?>" <?php if ($asign38k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign38k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign38['l_pass'];?>" <?php if ($asign38l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign38l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign38['m_pass'];?>" <?php if ($asign38m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign38m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign38['n_pass'];?>" <?php if ($asign38n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign38n;?></span>
             </div>



<span><b>Secc:</b></span><?php $string38 = $row_datos_controlasign38['grado_pass']; $first38 = $string38[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first38;?>" <?php if ($totalRows_grado4_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first38;?>" <?php if ($totalRows_grado4_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first38;?>" <?php if ($totalRows_grado4_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first38;?>" <?php if ($totalRows_grado4_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first38;?>" <?php if ($totalRows_grado4_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first38;?>" <?php if ($totalRows_grado4_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first38;?>" <?php if ($totalRows_grado4_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first38;?>" <?php if ($totalRows_grado4_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "U" </a></span>
              
            </div>





          </div>
        </div>  


<?php
include("../conectar.php");
$queryasignaturas40 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '40'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign40 = mysqli_query($enlace, $queryasignaturas40) or die(mysqli_error());
$row_datos_controlasign40 = mysqli_fetch_array($datos_controlasign40); 
mysqli_close($enlace); 


if ($row_datos_controlasign40['a_aaa'] == '') {
  $asign40a = '';
}

if ($row_datos_controlasign40['a_aaa'] != '') {
  $asign40a = $row_datos_controlasign40['a_aaa'];
}

if ($row_datos_controlasign40['b_bbb'] == '') {
  $asign40b = '';
}

if ($row_datos_controlasign40['b_bbb'] != '') {
  $asign40b = $row_datos_controlasign40['b_bbb'];
}

if ($row_datos_controlasign40['c_ccc'] == '') {
  $asign40c = '';
}

if ($row_datos_controlasign40['c_ccc'] != '') {
  $asign40c = $row_datos_controlasign40['c_ccc'];
}

if ($row_datos_controlasign40['d_ddd'] == '') {
  $asign40d = '';
}

if ($row_datos_controlasign40['d_ddd'] != '') {
  $asign40d = $row_datos_controlasign40['d_ddd'];
}

if ($row_datos_controlasign40['e_eee'] == '') {
  $asign40e = '';
}

if ($row_datos_controlasign40['e_eee'] != '') {
  $asign40e = $row_datos_controlasign40['e_eee'];
}

if ($row_datos_controlasign40['f_fff'] == '') {
  $asign40f = '';
}

if ($row_datos_controlasign40['f_fff'] != '') {
  $asign40f = $row_datos_controlasign40['f_fff'];
}

if ($row_datos_controlasign40['g_ggg'] == '') {
  $asign40g = '';
}

if ($row_datos_controlasign40['g_ggg'] != '') {
  $asign40g = $row_datos_controlasign40['g_ggg'];
}

if ($row_datos_controlasign40['h_hhh'] == '') {
  $asign40h = '';
}

if ($row_datos_controlasign40['h_hhh'] != '') {
  $asign40h = $row_datos_controlasign40['h_hhh'];
}

if ($row_datos_controlasign40['i_iii'] == '') {
  $asign40i = '';
}

if ($row_datos_controlasign40['i_iii'] != '') {
  $asign40i = $row_datos_controlasign40['i_iii'];
}

if ($row_datos_controlasign40['j_jjj'] == '') {
  $asign40j = '';
}

if ($row_datos_controlasign40['j_jjj'] != '') {
  $asign40j = $row_datos_controlasign40['j_jjj'];
}

if ($row_datos_controlasign40['k_kkk'] == '') {
  $asign40k = '';
}

if ($row_datos_controlasign40['k_kkk'] != '') {
  $asign40k = $row_datos_controlasign40['k_kkk'];
}

if ($row_datos_controlasign40['l_lll'] == '') {
  $asign40l = '';
}

if ($row_datos_controlasign40['l_lll'] != '') {
  $asign40l = $row_datos_controlasign40['l_lll'];
}

if ($row_datos_controlasign40['m_mmm'] == '') {
  $asign40m = '';
}

if ($row_datos_controlasign40['m_mmm'] != '') {
  $asign40m = $row_datos_controlasign40['m_mmm'];
}

if ($row_datos_controlasign40['n_nnn'] == '') {
  $asign40n = '';
}

if ($row_datos_controlasign40['n_nnn'] != '') {
  $asign40n = $row_datos_controlasign40['n_nnn'];
}
 ?>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fighter-jet"data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
             <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign40['grado_pass'];?>" >5to Grado</div>
          <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign40['a_pass'];?>" <?php if ($asign40a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign40a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign40['b_pass'];?>" <?php if ($asign40b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign40b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign40['c_pass'];?>" <?php if ($asign40c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign40c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign40['d_pass'];?>" <?php if ($asign40d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign40d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign40['e_pass'];?>" <?php if ($asign40e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign40e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign40['f_pass'];?>" <?php if ($asign40f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign40f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign40['g_pass'];?>" <?php if ($asign40g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign40g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign40['h_pass'];?>" <?php if ($asign40h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign40h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign40['i_pass'];?>" <?php if ($asign40i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign40i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign40['j_pass'];?>" <?php if ($asign40j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign40j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign40['k_pass'];?>" <?php if ($asign40k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign40k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign40['l_pass'];?>" <?php if ($asign40l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign40l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign40['m_pass'];?>" <?php if ($asign40m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign40m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign40['n_pass'];?>" <?php if ($asign40n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign40n;?></span>
             </div>




<span><b>Secc:</b></span><?php $string40 = $row_datos_controlasign40['grado_pass']; $first40 = $string40[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first40;?>" <?php if ($totalRows_grado5_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first40;?>" <?php if ($totalRows_grado5_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first40;?>" <?php if ($totalRows_grado5_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first40;?>" <?php if ($totalRows_grado5_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first40;?>" <?php if ($totalRows_grado5_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first40;?>" <?php if ($totalRows_grado5_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first40;?>" <?php if ($totalRows_grado5_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first40;?>" <?php if ($totalRows_grado5_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "U" </a></span>
          


            
            </div>



          </div>
        </div> 


<?php
include("../conectar.php");
$queryasignaturas41 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '41'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign41 = mysqli_query($enlace, $queryasignaturas41) or die(mysqli_error());
$row_datos_controlasign41 = mysqli_fetch_array($datos_controlasign41); 
mysqli_close($enlace); 


if ($row_datos_controlasign41['a_aaa'] == '') {
  $asign41a = '';
}

if ($row_datos_controlasign41['a_aaa'] != '') {
  $asign41a = $row_datos_controlasign41['a_aaa'];
}

if ($row_datos_controlasign41['b_bbb'] == '') {
  $asign41b = '';
}

if ($row_datos_controlasign41['b_bbb'] != '') {
  $asign41b = $row_datos_controlasign41['b_bbb'];
}

if ($row_datos_controlasign41['c_ccc'] == '') {
  $asign41c = '';
}

if ($row_datos_controlasign41['c_ccc'] != '') {
  $asign41c = $row_datos_controlasign41['c_ccc'];
}

if ($row_datos_controlasign41['d_ddd'] == '') {
  $asign41d = '';
}

if ($row_datos_controlasign41['d_ddd'] != '') {
  $asign41d = $row_datos_controlasign41['d_ddd'];
}

if ($row_datos_controlasign41['e_eee'] == '') {
  $asign41e = '';
}

if ($row_datos_controlasign41['e_eee'] != '') {
  $asign41e = $row_datos_controlasign41['e_eee'];
}

if ($row_datos_controlasign41['f_fff'] == '') {
  $asign41f = '';
}

if ($row_datos_controlasign41['f_fff'] != '') {
  $asign41f = $row_datos_controlasign41['f_fff'];
}

if ($row_datos_controlasign41['g_ggg'] == '') {
  $asign41g = '';
}

if ($row_datos_controlasign41['g_ggg'] != '') {
  $asign41g = $row_datos_controlasign41['g_ggg'];
}

if ($row_datos_controlasign41['h_hhh'] == '') {
  $asign41h = '';
}

if ($row_datos_controlasign41['h_hhh'] != '') {
  $asign41h = $row_datos_controlasign41['h_hhh'];
}

if ($row_datos_controlasign41['i_iii'] == '') {
  $asign41i = '';
}

if ($row_datos_controlasign41['i_iii'] != '') {
  $asign41i = $row_datos_controlasign41['i_iii'];
}

if ($row_datos_controlasign41['j_jjj'] == '') {
  $asign41j = '';
}

if ($row_datos_controlasign41['j_jjj'] != '') {
  $asign41j = $row_datos_controlasign41['j_jjj'];
}

if ($row_datos_controlasign41['k_kkk'] == '') {
  $asign41k = '';
}

if ($row_datos_controlasign41['k_kkk'] != '') {
  $asign41k = $row_datos_controlasign41['k_kkk'];
}

if ($row_datos_controlasign41['l_lll'] == '') {
  $asign41l = '';
}

if ($row_datos_controlasign41['l_lll'] != '') {
  $asign41l = $row_datos_controlasign41['l_lll'];
}

if ($row_datos_controlasign41['m_mmm'] == '') {
  $asign41m = '';
}

if ($row_datos_controlasign41['m_mmm'] != '') {
  $asign41m = $row_datos_controlasign41['m_mmm'];
}

if ($row_datos_controlasign41['n_nnn'] == '') {
  $asign41n = '';
}

if ($row_datos_controlasign41['n_nnn'] != '') {
  $asign41n = $row_datos_controlasign41['n_nnn'];
}
 ?>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-space-shuttle"data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
              <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign41['grado_pass'];?>" >6to Grado</div>
         <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign41['a_pass'];?>" <?php if ($asign41a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign41a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign41['b_pass'];?>" <?php if ($asign41b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign41b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign41['c_pass'];?>" <?php if ($asign41c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign41c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign41['d_pass'];?>" <?php if ($asign41d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign41d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign41['e_pass'];?>" <?php if ($asign41e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign41e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign41['f_pass'];?>" <?php if ($asign41f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign41f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign41['g_pass'];?>" <?php if ($asign41g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign41g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign41['h_pass'];?>" <?php if ($asign41h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign41h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign41['i_pass'];?>" <?php if ($asign41i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign41i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign41['j_pass'];?>" <?php if ($asign41j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign41j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign41['k_pass'];?>" <?php if ($asign41k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign41k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign41['l_pass'];?>" <?php if ($asign41l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign41l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign41['m_pass'];?>" <?php if ($asign41m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign41m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign41['n_pass'];?>" <?php if ($asign41n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign41n;?></span>
             </div>


<span><b>Secc:</b></span><?php $string41 = $row_datos_controlasign41['grado_pass']; $first41 = $string41[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first41;?>" <?php if ($totalRows_grado6_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first41;?>" <?php if ($totalRows_grado6_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first41;?>" <?php if ($totalRows_grado6_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first41;?>" <?php if ($totalRows_grado6_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first41;?>" <?php if ($totalRows_grado6_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first41;?>" <?php if ($totalRows_grado6_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first41;?>" <?php if ($totalRows_grado6_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first41;?>" <?php if ($totalRows_grado6_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-vino mb-1"  role="button"> "U" </a></span>




            </div>


          </div>
        </div>       










</div>





<h4 class="glowwhite mt-2 mb-2">Media:</h4>

<div class="row">



<?php
include("../conectar.php");
$queryasignaturas42 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '42'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign42 = mysqli_query($enlace, $queryasignaturas42) or die(mysqli_error());
$row_datos_controlasign42 = mysqli_fetch_array($datos_controlasign42); 
mysqli_close($enlace); 


if ($row_datos_controlasign42['a_aaa'] == '') {
  $asign42a = '';
}

if ($row_datos_controlasign42['a_aaa'] != '') {
  $asign42a = $row_datos_controlasign42['a_aaa'];
}

if ($row_datos_controlasign42['b_bbb'] == '') {
  $asign42b = '';
}

if ($row_datos_controlasign42['b_bbb'] != '') {
  $asign42b = $row_datos_controlasign42['b_bbb'];
}

if ($row_datos_controlasign42['c_ccc'] == '') {
  $asign42c = '';
}

if ($row_datos_controlasign42['c_ccc'] != '') {
  $asign42c = $row_datos_controlasign42['c_ccc'];
}

if ($row_datos_controlasign42['d_ddd'] == '') {
  $asign42d = '';
}

if ($row_datos_controlasign42['d_ddd'] != '') {
  $asign42d = $row_datos_controlasign42['d_ddd'];
}

if ($row_datos_controlasign42['e_eee'] == '') {
  $asign42e = '';
}

if ($row_datos_controlasign42['e_eee'] != '') {
  $asign42e = $row_datos_controlasign42['e_eee'];
}

if ($row_datos_controlasign42['f_fff'] == '') {
  $asign42f = '';
}

if ($row_datos_controlasign42['f_fff'] != '') {
  $asign42f = $row_datos_controlasign42['f_fff'];
}

if ($row_datos_controlasign42['g_ggg'] == '') {
  $asign42g = '';
}

if ($row_datos_controlasign42['g_ggg'] != '') {
  $asign42g = $row_datos_controlasign42['g_ggg'];
}

if ($row_datos_controlasign42['h_hhh'] == '') {
  $asign42h = '';
}

if ($row_datos_controlasign42['h_hhh'] != '') {
  $asign42h = $row_datos_controlasign42['h_hhh'];
}

if ($row_datos_controlasign42['i_iii'] == '') {
  $asign42i = '';
}

if ($row_datos_controlasign42['i_iii'] != '') {
  $asign42i = $row_datos_controlasign42['i_iii'];
}

if ($row_datos_controlasign42['j_jjj'] == '') {
  $asign42j = '';
}

if ($row_datos_controlasign42['j_jjj'] != '') {
  $asign42j = $row_datos_controlasign42['j_jjj'];
}

if ($row_datos_controlasign42['k_kkk'] == '') {
  $asign42k = '';
}

if ($row_datos_controlasign42['k_kkk'] != '') {
  $asign42k = $row_datos_controlasign42['k_kkk'];
}

if ($row_datos_controlasign42['l_lll'] == '') {
  $asign42l = '';
}

if ($row_datos_controlasign42['l_lll'] != '') {
  $asign42l = $row_datos_controlasign42['l_lll'];
}

if ($row_datos_controlasign42['m_mmm'] == '') {
  $asign42m = '';
}

if ($row_datos_controlasign42['m_mmm'] != '') {
  $asign42m = $row_datos_controlasign42['m_mmm'];
}

if ($row_datos_controlasign42['n_nnn'] == '') {
  $asign42n = '';
}

if ($row_datos_controlasign42['n_nnn'] != '') {
  $asign42n = $row_datos_controlasign42['n_nnn'];
}
 ?>


<div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-desktop"data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
             <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign42['grado_pass'];?>" >1er Año</div>
         <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign42['a_pass'];?>" <?php if ($asign42a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign42a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign42['b_pass'];?>" <?php if ($asign42b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign42b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign42['c_pass'];?>" <?php if ($asign42c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign42c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign42['d_pass'];?>" <?php if ($asign42d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign42d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign42['e_pass'];?>" <?php if ($asign42e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign42e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign42['f_pass'];?>" <?php if ($asign42f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign42f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign42['g_pass'];?>" <?php if ($asign42g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign42g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign42['h_pass'];?>" <?php if ($asign42h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign42h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign42['i_pass'];?>" <?php if ($asign42i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign42i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign42['j_pass'];?>" <?php if ($asign42j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign42j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign42['k_pass'];?>" <?php if ($asign42k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign42k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign42['l_pass'];?>" <?php if ($asign42l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign42l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign42['m_pass'];?>" <?php if ($asign42m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign42m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign42['n_pass'];?>" <?php if ($asign42n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign42n;?></span>
             </div>


<span><b>Secc:</b></span><?php $string42 = $row_datos_controlasign42['grado_pass']; $first42 = $string42[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first42;?>" <?php if ($totalRows_gradop1_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first42;?>" <?php if ($totalRows_gradop1_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first42;?>" <?php if ($totalRows_gradop1_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first42;?>" <?php if ($totalRows_gradop1_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first42;?>" <?php if ($totalRows_gradop1_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first42;?>" <?php if ($totalRows_gradop1_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first42;?>" <?php if ($totalRows_gradop1_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first42;?>" <?php if ($totalRows_gradop1_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "U" </a></span>


            
            </div>



          </div>
        </div>



<?php
include("../conectar.php");
$queryasignaturas43 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '43'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign43 = mysqli_query($enlace, $queryasignaturas43) or die(mysqli_error());
$row_datos_controlasign43 = mysqli_fetch_array($datos_controlasign43); 
mysqli_close($enlace); 


if ($row_datos_controlasign43['a_aaa'] == '') {
  $asign43a = '';
}

if ($row_datos_controlasign43['a_aaa'] != '') {
  $asign43a = $row_datos_controlasign43['a_aaa'];
}

if ($row_datos_controlasign43['b_bbb'] == '') {
  $asign43b = '';
}

if ($row_datos_controlasign43['b_bbb'] != '') {
  $asign43b = $row_datos_controlasign43['b_bbb'];
}

if ($row_datos_controlasign43['c_ccc'] == '') {
  $asign43c = '';
}

if ($row_datos_controlasign43['c_ccc'] != '') {
  $asign43c = $row_datos_controlasign43['c_ccc'];
}

if ($row_datos_controlasign43['d_ddd'] == '') {
  $asign43d = '';
}

if ($row_datos_controlasign43['d_ddd'] != '') {
  $asign43d = $row_datos_controlasign43['d_ddd'];
}

if ($row_datos_controlasign43['e_eee'] == '') {
  $asign43e = '';
}

if ($row_datos_controlasign43['e_eee'] != '') {
  $asign43e = $row_datos_controlasign43['e_eee'];
}

if ($row_datos_controlasign43['f_fff'] == '') {
  $asign43f = '';
}

if ($row_datos_controlasign43['f_fff'] != '') {
  $asign43f = $row_datos_controlasign43['f_fff'];
}

if ($row_datos_controlasign43['g_ggg'] == '') {
  $asign43g = '';
}

if ($row_datos_controlasign43['g_ggg'] != '') {
  $asign43g = $row_datos_controlasign43['g_ggg'];
}

if ($row_datos_controlasign43['h_hhh'] == '') {
  $asign43h = '';
}

if ($row_datos_controlasign43['h_hhh'] != '') {
  $asign43h = $row_datos_controlasign43['h_hhh'];
}

if ($row_datos_controlasign43['i_iii'] == '') {
  $asign43i = '';
}

if ($row_datos_controlasign43['i_iii'] != '') {
  $asign43i = $row_datos_controlasign43['i_iii'];
}

if ($row_datos_controlasign43['j_jjj'] == '') {
  $asign43j = '';
}

if ($row_datos_controlasign43['j_jjj'] != '') {
  $asign43j = $row_datos_controlasign43['j_jjj'];
}

if ($row_datos_controlasign43['k_kkk'] == '') {
  $asign43k = '';
}

if ($row_datos_controlasign43['k_kkk'] != '') {
  $asign43k = $row_datos_controlasign43['k_kkk'];
}

if ($row_datos_controlasign43['l_lll'] == '') {
  $asign43l = '';
}

if ($row_datos_controlasign43['l_lll'] != '') {
  $asign43l = $row_datos_controlasign43['l_lll'];
}

if ($row_datos_controlasign43['m_mmm'] == '') {
  $asign43m = '';
}

if ($row_datos_controlasign43['m_mmm'] != '') {
  $asign43m = $row_datos_controlasign43['m_mmm'];
}

if ($row_datos_controlasign43['n_nnn'] == '') {
  $asign43n = '';
}

if ($row_datos_controlasign43['n_nnn'] != '') {
  $asign43n = $row_datos_controlasign43['n_nnn'];
}
 ?>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-laptop"data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
              <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign43['grado_pass'];?>" >2do Año</div>
  <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign43['a_pass'];?>" <?php if ($asign43a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign43a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign43['b_pass'];?>" <?php if ($asign43b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign43b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign43['c_pass'];?>" <?php if ($asign43c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign43c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign43['d_pass'];?>" <?php if ($asign43d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign43d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign43['e_pass'];?>" <?php if ($asign43e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign43e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign43['f_pass'];?>" <?php if ($asign43f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign43f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign43['g_pass'];?>" <?php if ($asign43g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign43g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign43['h_pass'];?>" <?php if ($asign43h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign43h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign43['i_pass'];?>" <?php if ($asign43i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign43i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign43['j_pass'];?>" <?php if ($asign43j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign43j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign43['k_pass'];?>" <?php if ($asign43k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign43k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign43['l_pass'];?>" <?php if ($asign43l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign43l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign43['m_pass'];?>" <?php if ($asign43m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign43m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign43['n_pass'];?>" <?php if ($asign43n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign43n;?></span>
             </div>




<span><b>Secc:</b></span><?php $string43 = $row_datos_controlasign43['grado_pass']; $first43 = $string43[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first43;?>" <?php if ($totalRows_gradop2_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first43;?>" <?php if ($totalRows_gradop2_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first43;?>" <?php if ($totalRows_gradop2_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first43;?>" <?php if ($totalRows_gradop2_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first43;?>" <?php if ($totalRows_gradop2_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first43;?>" <?php if ($totalRows_gradop2_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first43;?>" <?php if ($totalRows_gradop2_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first43;?>" <?php if ($totalRows_gradop2_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "U" </a></span>
              
            </div>





          </div>
        </div>


<?php
include("../conectar.php");
$queryasignaturas44 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '44'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign44 = mysqli_query($enlace, $queryasignaturas44) or die(mysqli_error());
$row_datos_controlasign44 = mysqli_fetch_array($datos_controlasign44); 
mysqli_close($enlace); 


if ($row_datos_controlasign44['a_aaa'] == '') {
  $asign44a = '';
}

if ($row_datos_controlasign44['a_aaa'] != '') {
  $asign44a = $row_datos_controlasign44['a_aaa'];
}

if ($row_datos_controlasign44['b_bbb'] == '') {
  $asign44b = '';
}

if ($row_datos_controlasign44['b_bbb'] != '') {
  $asign44b = $row_datos_controlasign44['b_bbb'];
}

if ($row_datos_controlasign44['c_ccc'] == '') {
  $asign44c = '';
}

if ($row_datos_controlasign44['c_ccc'] != '') {
  $asign44c = $row_datos_controlasign44['c_ccc'];
}

if ($row_datos_controlasign44['d_ddd'] == '') {
  $asign44d = '';
}

if ($row_datos_controlasign44['d_ddd'] != '') {
  $asign44d = $row_datos_controlasign44['d_ddd'];
}

if ($row_datos_controlasign44['e_eee'] == '') {
  $asign44e = '';
}

if ($row_datos_controlasign44['e_eee'] != '') {
  $asign44e = $row_datos_controlasign44['e_eee'];
}

if ($row_datos_controlasign44['f_fff'] == '') {
  $asign44f = '';
}

if ($row_datos_controlasign44['f_fff'] != '') {
  $asign44f = $row_datos_controlasign44['f_fff'];
}

if ($row_datos_controlasign44['g_ggg'] == '') {
  $asign44g = '';
}

if ($row_datos_controlasign44['g_ggg'] != '') {
  $asign44g = $row_datos_controlasign44['g_ggg'];
}

if ($row_datos_controlasign44['h_hhh'] == '') {
  $asign44h = '';
}

if ($row_datos_controlasign44['h_hhh'] != '') {
  $asign44h = $row_datos_controlasign44['h_hhh'];
}

if ($row_datos_controlasign44['i_iii'] == '') {
  $asign44i = '';
}

if ($row_datos_controlasign44['i_iii'] != '') {
  $asign44i = $row_datos_controlasign44['i_iii'];
}

if ($row_datos_controlasign44['j_jjj'] == '') {
  $asign44j = '';
}

if ($row_datos_controlasign44['j_jjj'] != '') {
  $asign44j = $row_datos_controlasign44['j_jjj'];
}

if ($row_datos_controlasign44['k_kkk'] == '') {
  $asign44k = '';
}

if ($row_datos_controlasign44['k_kkk'] != '') {
  $asign44k = $row_datos_controlasign44['k_kkk'];
}

if ($row_datos_controlasign44['l_lll'] == '') {
  $asign44l = '';
}

if ($row_datos_controlasign44['l_lll'] != '') {
  $asign44l = $row_datos_controlasign44['l_lll'];
}

if ($row_datos_controlasign44['m_mmm'] == '') {
  $asign44m = '';
}

if ($row_datos_controlasign44['m_mmm'] != '') {
  $asign44m = $row_datos_controlasign44['m_mmm'];
}

if ($row_datos_controlasign44['n_nnn'] == '') {
  $asign44n = '';
}

if ($row_datos_controlasign44['n_nnn'] != '') {
  $asign44n = $row_datos_controlasign44['n_nnn'];
}
 ?>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-tablet-alt"data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
             <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign44['grado_pass'];?>" >3er Año</div>
      <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign44['a_pass'];?>" <?php if ($asign44a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign44a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign44['b_pass'];?>" <?php if ($asign44b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign44b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign44['c_pass'];?>" <?php if ($asign44c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign44c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign44['d_pass'];?>" <?php if ($asign44d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign44d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign44['e_pass'];?>" <?php if ($asign44e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign44e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign44['f_pass'];?>" <?php if ($asign44f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign44f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign44['g_pass'];?>" <?php if ($asign44g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign44g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign44['h_pass'];?>" <?php if ($asign44h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign44h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign44['i_pass'];?>" <?php if ($asign44i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign44i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign44['j_pass'];?>" <?php if ($asign44j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign44j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign44['k_pass'];?>" <?php if ($asign44k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign44k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign44['l_pass'];?>" <?php if ($asign44l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign44l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign44['m_pass'];?>" <?php if ($asign44m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign44m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign44['n_pass'];?>" <?php if ($asign44n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign44n;?></span>
             </div>


             <span><b>Secc:</b></span><?php $string44 = $row_datos_controlasign44['grado_pass']; $first44 = $string44[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first44;?>" <?php if ($totalRows_gradop3_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first44;?>" <?php if ($totalRows_gradop3_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first44;?>" <?php if ($totalRows_gradop3_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first44;?>" <?php if ($totalRows_gradop3_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first44;?>" <?php if ($totalRows_gradop3_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first44;?>" <?php if ($totalRows_gradop3_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first44;?>" <?php if ($totalRows_gradop3_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first44;?>" <?php if ($totalRows_gradop3_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm bg-primary mb-1"  role="button"> "U" </a></span>
            
            </div>




          </div>
        </div> 

</div>





       



<h4 class="glowwhite mt-2 mb-2">Media General:</h4>


<div class="row">


<?php
include("../conectar.php");
$queryasignaturas45 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '45'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign45 = mysqli_query($enlace, $queryasignaturas45) or die(mysqli_error());
$row_datos_controlasign45 = mysqli_fetch_array($datos_controlasign45); 
mysqli_close($enlace); 


if ($row_datos_controlasign45['a_aaa'] == '') {
  $asign45a = '';
}

if ($row_datos_controlasign45['a_aaa'] != '') {
  $asign45a = $row_datos_controlasign45['a_aaa'];
}

if ($row_datos_controlasign45['b_bbb'] == '') {
  $asign45b = '';
}

if ($row_datos_controlasign45['b_bbb'] != '') {
  $asign45b = $row_datos_controlasign45['b_bbb'];
}

if ($row_datos_controlasign45['c_ccc'] == '') {
  $asign45c = '';
}

if ($row_datos_controlasign45['c_ccc'] != '') {
  $asign45c = $row_datos_controlasign45['c_ccc'];
}

if ($row_datos_controlasign45['d_ddd'] == '') {
  $asign45d = '';
}

if ($row_datos_controlasign45['d_ddd'] != '') {
  $asign45d = $row_datos_controlasign45['d_ddd'];
}

if ($row_datos_controlasign45['e_eee'] == '') {
  $asign45e = '';
}

if ($row_datos_controlasign45['e_eee'] != '') {
  $asign45e = $row_datos_controlasign45['e_eee'];
}

if ($row_datos_controlasign45['f_fff'] == '') {
  $asign45f = '';
}

if ($row_datos_controlasign45['f_fff'] != '') {
  $asign45f = $row_datos_controlasign45['f_fff'];
}

if ($row_datos_controlasign45['g_ggg'] == '') {
  $asign45g = '';
}

if ($row_datos_controlasign45['g_ggg'] != '') {
  $asign45g = $row_datos_controlasign45['g_ggg'];
}

if ($row_datos_controlasign45['h_hhh'] == '') {
  $asign45h = '';
}

if ($row_datos_controlasign45['h_hhh'] != '') {
  $asign45h = $row_datos_controlasign45['h_hhh'];
}

if ($row_datos_controlasign45['i_iii'] == '') {
  $asign45i = '';
}

if ($row_datos_controlasign45['i_iii'] != '') {
  $asign45i = $row_datos_controlasign45['i_iii'];
}

if ($row_datos_controlasign45['j_jjj'] == '') {
  $asign45j = '';
}

if ($row_datos_controlasign45['j_jjj'] != '') {
  $asign45j = $row_datos_controlasign45['j_jjj'];
}

if ($row_datos_controlasign45['k_kkk'] == '') {
  $asign45k = '';
}

if ($row_datos_controlasign45['k_kkk'] != '') {
  $asign45k = $row_datos_controlasign45['k_kkk'];
}

if ($row_datos_controlasign45['l_lll'] == '') {
  $asign45l = '';
}

if ($row_datos_controlasign45['l_lll'] != '') {
  $asign45l = $row_datos_controlasign45['l_lll'];
}

if ($row_datos_controlasign45['m_mmm'] == '') {
  $asign45m = '';
}

if ($row_datos_controlasign45['m_mmm'] != '') {
  $asign45m = $row_datos_controlasign45['m_mmm'];
}

if ($row_datos_controlasign45['n_nnn'] == '') {
  $asign45n = '';
}

if ($row_datos_controlasign45['n_nnn'] != '') {
  $asign45n = $row_datos_controlasign45['n_nnn'];
}
 ?>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-medapps"data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
             <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign45['grado_pass'];?>" >4to Año</div>
   <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign45['a_pass'];?>" <?php if ($asign45a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign45a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign45['b_pass'];?>" <?php if ($asign45b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign45b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign45['c_pass'];?>" <?php if ($asign45c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign45c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign45['d_pass'];?>" <?php if ($asign45d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign45d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign45['e_pass'];?>" <?php if ($asign45e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign45e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign45['f_pass'];?>" <?php if ($asign45f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign45f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign45['g_pass'];?>" <?php if ($asign45g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign45g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign45['h_pass'];?>" <?php if ($asign45h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign45h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign45['i_pass'];?>" <?php if ($asign45i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign45i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign45['j_pass'];?>" <?php if ($asign45j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign45j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign45['k_pass'];?>" <?php if ($asign45k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign45k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign45['l_pass'];?>" <?php if ($asign45l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign45l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign45['m_pass'];?>" <?php if ($asign45m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign45m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign45['n_pass'];?>" <?php if ($asign45n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign45n;?></span>
             </div>



<span><b>Secc:</b></span><?php $string45 = $row_datos_controlasign45['grado_pass']; $first45 = $string45[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first45;?>" <?php if ($totalRows_gradop4_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first45;?>" <?php if ($totalRows_gradop4_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first45;?>" <?php if ($totalRows_gradop4_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first45;?>" <?php if ($totalRows_gradop4_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first45;?>" <?php if ($totalRows_gradop4_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first45;?>" <?php if ($totalRows_gradop4_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first45;?>" <?php if ($totalRows_gradop4_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first45;?>" <?php if ($totalRows_gradop4_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "U" </a></span>


             
            </div>





          </div>
        </div> 



<?php
include("../conectar.php");
$queryasignaturas46 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '46'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign46 = mysqli_query($enlace, $queryasignaturas46) or die(mysqli_error());
$row_datos_controlasign46 = mysqli_fetch_array($datos_controlasign46); 
mysqli_close($enlace); 


if ($row_datos_controlasign46['a_aaa'] == '') {
  $asign46a = '';
}

if ($row_datos_controlasign46['a_aaa'] != '') {
  $asign46a = $row_datos_controlasign46['a_aaa'];
}

if ($row_datos_controlasign46['b_bbb'] == '') {
  $asign46b = '';
}

if ($row_datos_controlasign46['b_bbb'] != '') {
  $asign46b = $row_datos_controlasign46['b_bbb'];
}

if ($row_datos_controlasign46['c_ccc'] == '') {
  $asign46c = '';
}

if ($row_datos_controlasign46['c_ccc'] != '') {
  $asign46c = $row_datos_controlasign46['c_ccc'];
}

if ($row_datos_controlasign46['d_ddd'] == '') {
  $asign46d = '';
}

if ($row_datos_controlasign46['d_ddd'] != '') {
  $asign46d = $row_datos_controlasign46['d_ddd'];
}

if ($row_datos_controlasign46['e_eee'] == '') {
  $asign46e = '';
}

if ($row_datos_controlasign46['e_eee'] != '') {
  $asign46e = $row_datos_controlasign46['e_eee'];
}

if ($row_datos_controlasign46['f_fff'] == '') {
  $asign46f = '';
}

if ($row_datos_controlasign46['f_fff'] != '') {
  $asign46f = $row_datos_controlasign46['f_fff'];
}

if ($row_datos_controlasign46['g_ggg'] == '') {
  $asign46g = '';
}

if ($row_datos_controlasign46['g_ggg'] != '') {
  $asign46g = $row_datos_controlasign46['g_ggg'];
}

if ($row_datos_controlasign46['h_hhh'] == '') {
  $asign46h = '';
}

if ($row_datos_controlasign46['h_hhh'] != '') {
  $asign46h = $row_datos_controlasign46['h_hhh'];
}

if ($row_datos_controlasign46['i_iii'] == '') {
  $asign46i = '';
}

if ($row_datos_controlasign46['i_iii'] != '') {
  $asign46i = $row_datos_controlasign46['i_iii'];
}

if ($row_datos_controlasign46['j_jjj'] == '') {
  $asign46j = '';
}

if ($row_datos_controlasign46['j_jjj'] != '') {
  $asign46j = $row_datos_controlasign46['j_jjj'];
}

if ($row_datos_controlasign46['k_kkk'] == '') {
  $asign46k = '';
}

if ($row_datos_controlasign46['k_kkk'] != '') {
  $asign46k = $row_datos_controlasign46['k_kkk'];
}

if ($row_datos_controlasign46['l_lll'] == '') {
  $asign46l = '';
}

if ($row_datos_controlasign46['l_lll'] != '') {
  $asign46l = $row_datos_controlasign46['l_lll'];
}

if ($row_datos_controlasign46['m_mmm'] == '') {
  $asign46m = '';
}

if ($row_datos_controlasign46['m_mmm'] != '') {
  $asign46m = $row_datos_controlasign46['m_mmm'];
}

if ($row_datos_controlasign46['n_nnn'] == '') {
  $asign46n = '';
}

if ($row_datos_controlasign46['n_nnn'] != '') {
  $asign46n = $row_datos_controlasign46['n_nnn'];
}
 ?>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-react"data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
              <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign46['grado_pass'];?>" >5to Año</div>
 <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign46['a_pass'];?>" <?php if ($asign46a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign46a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign46['b_pass'];?>" <?php if ($asign46b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign46b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign46['c_pass'];?>" <?php if ($asign46c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign46c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign46['d_pass'];?>" <?php if ($asign46d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign46d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign46['e_pass'];?>" <?php if ($asign46e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign46e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign46['f_pass'];?>" <?php if ($asign46f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign46f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign46['g_pass'];?>" <?php if ($asign46g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign46g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign46['h_pass'];?>" <?php if ($asign46h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign46h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign46['i_pass'];?>" <?php if ($asign46i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign46i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign46['j_pass'];?>" <?php if ($asign46j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign46j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign46['k_pass'];?>" <?php if ($asign46k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign46k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign46['l_pass'];?>" <?php if ($asign46l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign46l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign46['m_pass'];?>" <?php if ($asign46m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign46m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign46['n_pass'];?>" <?php if ($asign46n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign46n;?></span>
             </div>





<span><b>Secc:</b></span><?php $string46 = $row_datos_controlasign46['grado_pass']; $first46 = $string46[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first46;?>" <?php if ($totalRows_gradop5_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first46;?>" <?php if ($totalRows_gradop5_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first46;?>" <?php if ($totalRows_gradop5_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first46;?>" <?php if ($totalRows_gradop5_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first46;?>" <?php if ($totalRows_gradop5_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first46;?>" <?php if ($totalRows_gradop5_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first46;?>" <?php if ($totalRows_gradop5_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first46;?>" <?php if ($totalRows_gradop5_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "U" </a></span>




            
            </div>




          </div>
        </div>   




<?php
include("../conectar.php");
$queryasignaturas53 = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura
         and  asignatura_ciclo_grado.id_del_ciclo = $id_periodo_clave
         and  asignatura_ciclo_grado.id_del_grado = '53'                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign53 = mysqli_query($enlace, $queryasignaturas53) or die(mysqli_error());
$row_datos_controlasign53 = mysqli_fetch_array($datos_controlasign53); 
mysqli_close($enlace); 


if ($row_datos_controlasign53['a_aaa'] == '') {
  $asign53a = '';
}

if ($row_datos_controlasign53['a_aaa'] != '') {
  $asign53a = $row_datos_controlasign53['a_aaa'];
}

if ($row_datos_controlasign53['b_bbb'] == '') {
  $asign53b = '';
}

if ($row_datos_controlasign53['b_bbb'] != '') {
  $asign53b = $row_datos_controlasign53['b_bbb'];
}

if ($row_datos_controlasign53['c_ccc'] == '') {
  $asign53c = '';
}

if ($row_datos_controlasign53['c_ccc'] != '') {
  $asign53c = $row_datos_controlasign53['c_ccc'];
}

if ($row_datos_controlasign53['d_ddd'] == '') {
  $asign53d = '';
}

if ($row_datos_controlasign53['d_ddd'] != '') {
  $asign53d = $row_datos_controlasign53['d_ddd'];
}

if ($row_datos_controlasign53['e_eee'] == '') {
  $asign53e = '';
}

if ($row_datos_controlasign53['e_eee'] != '') {
  $asign53e = $row_datos_controlasign53['e_eee'];
}

if ($row_datos_controlasign53['f_fff'] == '') {
  $asign53f = '';
}

if ($row_datos_controlasign53['f_fff'] != '') {
  $asign53f = $row_datos_controlasign53['f_fff'];
}

if ($row_datos_controlasign53['g_ggg'] == '') {
  $asign53g = '';
}

if ($row_datos_controlasign53['g_ggg'] != '') {
  $asign53g = $row_datos_controlasign53['g_ggg'];
}

if ($row_datos_controlasign53['h_hhh'] == '') {
  $asign53h = '';
}

if ($row_datos_controlasign53['h_hhh'] != '') {
  $asign53h = $row_datos_controlasign53['h_hhh'];
}

if ($row_datos_controlasign53['i_iii'] == '') {
  $asign53i = '';
}

if ($row_datos_controlasign53['i_iii'] != '') {
  $asign53i = $row_datos_controlasign53['i_iii'];
}

if ($row_datos_controlasign53['j_jjj'] == '') {
  $asign53j = '';
}

if ($row_datos_controlasign53['j_jjj'] != '') {
  $asign53j = $row_datos_controlasign53['j_jjj'];
}

if ($row_datos_controlasign53['k_kkk'] == '') {
  $asign53k = '';
}

if ($row_datos_controlasign53['k_kkk'] != '') {
  $asign53k = $row_datos_controlasign53['k_kkk'];
}

if ($row_datos_controlasign53['l_lll'] == '') {
  $asign53l = '';
}

if ($row_datos_controlasign53['l_lll'] != '') {
  $asign53l = $row_datos_controlasign53['l_lll'];
}

if ($row_datos_controlasign53['m_mmm'] == '') {
  $asign53m = '';
}

if ($row_datos_controlasign53['m_mmm'] != '') {
  $asign53m = $row_datos_controlasign53['m_mmm'];
}

if ($row_datos_controlasign53['n_nnn'] == '') {
  $asign53n = '';
}

if ($row_datos_controlasign53['n_nnn'] != '') {
  $asign53n = $row_datos_controlasign53['n_nnn'];
}
 ?>














        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($totalRows_ano6_inscrito===0) {?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-hubspot"data-fa-transform="shrink-9  up-6 right-2" ></i>
              </div>
            <div class="mr-5 mb-1 cantidadzzz" data-toggle="tooltip" data-placement="top" title="Clave General: <?php echo $row_datos_controlasign53['grado_pass'];?>" >6to Año</div>
 <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign53['a_pass'];?>" <?php if ($asign53a== ''){?>style="display:none"<?php } ?> >  <?php echo $asign53a;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign53['b_pass'];?>" <?php if ($asign53b== ''){?>style="display:none"<?php } ?> >  <?php echo $asign53b;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign53['c_pass'];?>" <?php if ($asign53c== ''){?>style="display:none"<?php } ?> >  <?php echo $asign53c;?> -</span>
             </div>
<div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign53['d_pass'];?>" <?php if ($asign53d== ''){?>style="display:none"<?php } ?> >  <?php echo $asign53d;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign53['e_pass'];?>" <?php if ($asign53e== ''){?>style="display:none"<?php } ?> >  <?php echo $asign53e;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign53['f_pass'];?>" <?php if ($asign53f== ''){?>style="display:none"<?php } ?> >  <?php echo $asign53f;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign53['g_pass'];?>" <?php if ($asign53g== ''){?>style="display:none"<?php } ?> >  <?php echo $asign53g;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign53['h_pass'];?>" <?php if ($asign53h== ''){?>style="display:none"<?php } ?> >  <?php echo $asign53h;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign53['i_pass'];?>" <?php if ($asign53i== ''){?>style="display:none"<?php } ?> >  <?php echo $asign53i;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign53['j_pass'];?>" <?php if ($asign53j== ''){?>style="display:none"<?php } ?> >  <?php echo $asign53j;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign53['k_pass'];?>" <?php if ($asign53k== ''){?>style="display:none"<?php } ?> >  <?php echo $asign53k;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign53['l_pass'];?>" <?php if ($asign53l== ''){?>style="display:none"<?php } ?> >  <?php echo $asign53l;?> -</span>
             </div>
             <div class="infozzz">
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign53['m_pass'];?>" <?php if ($asign53m== ''){?>style="display:none"<?php } ?> >  <?php echo $asign53m;?> -</span>
<span data-toggle="tooltip" data-placement="top" title="<?php echo $row_datos_controlasign53['n_pass'];?>" <?php if ($asign53n== ''){?>style="display:none"<?php } ?> >  <?php echo $asign53n;?></span>
             </div>





<span><b>Secc:</b></span><?php $string53 = $row_datos_controlasign53['grado_pass']; $first53 = $string53[0];?>

<span data-toggle="tooltip" data-placement="top" title="Clave Sección: <?php echo $query_secc_pass_resultadosA['pass'];?><?php echo $first53;?>" <?php if ($totalRows_gradop6_sa_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "A" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosB['pass'];?><?php echo $first53;?>" <?php if ($totalRows_gradop6_sb_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "B" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosC['pass'];?><?php echo $first53;?>" <?php if ($totalRows_gradop6_sc_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "C" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosD['pass'];?><?php echo $first53;?>" <?php if ($totalRows_gradop6_sd_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "D" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosE['pass'];?><?php echo $first53;?>" <?php if ($totalRows_gradop6_se_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "E" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosF['pass'];?><?php echo $first53;?>" <?php if ($totalRows_gradop6_sf_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "F" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosG['pass'];?><?php echo $first53;?>" <?php if ($totalRows_gradop6_sg_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "G" </a></span>


<span data-toggle="tooltip" data-placement="top" title="Clave Sección <?php echo $query_secc_pass_resultadosU['pass'];?><?php echo $first53;?>" <?php if ($totalRows_gradop6_su_inscrito===0){?>style="display:none"<?php } ?> >
<a class="btn btn-sm relleno-browplight mb-1"  role="button"> "U" </a></span>




            
            </div>




          </div>
        </div>   



        

      </div>  <!-- cierre row -->


<!-- Cierre Icon Cards-->











                           

            </div>   <!-- cierre container fluid -->
        </div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
