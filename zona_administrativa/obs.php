<?php

include("identificador.php");

error_reporting(0);

$nnn1 = $nnn['ci'];

include("../conectar.php");

$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  status = '1' LIMIT 1 ";
$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);

 $id_periodo_clave =  $row_datos_periodo_actual['id_periodo_es'];

mysqli_close($enlace);  


$i = 1;





 if(isset($_POST['editar_selecc']))
        {


 include("consultas_mod/chequeo_estudiantes_mod_corto.php");   // chequea que lo introducido este bien.




if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }

else { 

include ("../conectar.php");


 include("plantilla_estudiantes_00_update_corto.php");   // procesa los datos

 }


}  // cierre de modificar datos del estudiante





// los siguientes permite cambiar el estado a inactivo de un registrado y cambiar fecha....

   if(isset($_POST['retirar_alumno']))
    {


        if (!$_POST['nota_text'])      // verifica que no este vacío
        {   $errorZ = "- Escriba, una nota u observación relacionada con el retiro. "; }


        if (strlen($_POST['nota_text']) >250 )  // no sea mayor a 250 caracteres
              {   $errorZ = "- Nota de retiro supera los 250 caracteres. "; }


        if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                              {
                                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                              
                              }



           
else {
      include("../conectar.php");


      $queryDC = "SELECT * FROM reg_estudiantes, quien_y_cuando_estu
                         WHERE  reg_estudiantes.id_estud = '$_POST[retirar_alumno]'
                          and  quien_y_cuando_estu.id_estud = '$_POST[retirar_alumno]' LIMIT 1 ";
          

                      $resultDC = mysqli_query($enlace,$queryDC);
                      $filaDC=mysqli_fetch_array($resultDC);         // lo anterior me permite tener lo relacionado con el estu
                                                                  
                      $id_filacd_q_y = $filaDC["id_q_y_c_estu"];



        $sql_DES = "UPDATE reg_estudiantes SET retirado_si_o_no = '1'                                        
                                      WHERE id_estud = '$_POST[retirar_alumno]' LIMIT 1 ";
            

                      if (!mysqli_query($enlace,$sql_DES))      // si no ha logrado actualizar
                         {
                          $errorZ="Error al cambiar estado, contactar al Ing.  ";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



                      else {  

                       
             $sql_DES_next = "UPDATE quien_y_cuando_estu SET fecha_retiro = '$_POST[retiro_date]',
                         tex_retiro = '".mysqli_real_escape_string($enlace,$_POST['nota_text'])."'
                                        
                                      WHERE id_q_y_c_estu = '$id_filacd_q_y' LIMIT 1 ";


                      if (!mysqli_query($enlace,$sql_DES_next))      // si no ha logrado actualizar
                         {
                          $errorZ="Error al guardar las observaciones, contactar al Ing.  ";
                          }



                      else { 


                   $exitoZ = "El alumno &nbsp; <b>--&nbsp;  " . $filaDC['nombre_estu'] . " &nbsp;--</b> &nbsp; ha pasado al listado de retirados.";

                      }           // hasta aqui gracias a borrar la direccion al estar en cascada se lleva el contenido del plantel.
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
                              mysqli_close($enlace);                                          
                          }


                 }  
}          

 }







if(isset($_POST['buscalo']))
    {



if (strlen($_POST['buscar_estud']) <=2 )  // no sea mayor a 40 caracteres
    {   

    $xxxsearch = "xxxxxx";

    header( "Location: obs.php?alertin=5&dividivi=9&criterio=".$xxxsearch."&tituloJKL=." ); 



     }


else { 

      $busqueda = $_POST['buscar_estud'];


include("../conectar.php");

      $query_doc_cuenta = "SELECT * FROM reg_estu_actual, divisiones, grados, obs_estu, reg_estudiantes 
         WHERE reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and  obs_estu.id_estud = reg_estudiantes.id_estud
         and  divisiones.id_division = grados.id_division
         and  grados.id_grado = reg_estu_actual.grado_actual        
         and  id_seccion != '8'
         and  el_activo = '1'
         and  cursa_actualmente = '$id_periodo_clave'
         and  reg_estudiantes.apellidos_estu LIKE '%".$busqueda."%'          
         and retirado_si_o_no = '0'
               
         GROUP BY reg_estudiantes.id_estud";

$datos_doc_cuenta = mysqli_query($enlace, $query_doc_cuenta) or die(mysqli_error());

$totalRows_datos_doc_cuenta = mysqli_num_rows($datos_doc_cuenta); 

mysqli_close($enlace);   




      if ($totalRows_datos_doc_cuenta == '0') {

        $xxxsearch = "xxxxxx";

       header( "Location: obs.php?alertin=55&dividivi=9&criterio=".$xxxsearch."&tituloJKL=." ); 

      }



      if ($totalRows_datos_doc_cuenta >= '1' and $totalRows_datos_doc_cuenta <= '16') {    

        header( "Location: obs.php?alertin=0&dividivi=9&criterio=".$busqueda."&tituloJKL=." ); 

      }


      if ($totalRows_datos_doc_cuenta >= '17') {

        $xxxsearch = "xxxxxx";       

       header( "Location: obs.php?alertin=1&dividivi=9&criterio=".$xxxsearch."&tituloJKL=." );  

      }

}

    }  // cierre principal del if


   /* $el_cicloXX = $_GET['ciclo']; */

    $alertin = $_GET['alertin'];



if ( $alertin == "1" ) { 

            $errorZ="- Se encontraron muchos resultados, intente refinar la búsqueda.";  

            }


if ( $alertin == "5" ) { 

            $errorZ="- Ingrese más de 3 caracteres, para iniciar la busqueda. ";  

            }




if ( $alertin == "55" ) { 

            $errorZ="- La busqueda arrojo &nbsp;&nbsp;<b>0</b>&nbsp;&nbsp; resultados.";  

            }

$tituloJKL = $_GET['tituloJKL'];

?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_php/obs.php"); ?>   <!--   -->


<div class="se-pre-con"></div>


<div class="content-wrapper">
  <div class="container-fluid">

    <div class="form-row">  


          <div class="col-md-4 col-lg-4 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i><b>Estudiantes con observaciones <?php echo $tituloJKL;?></b> </i></div> 

          </div> 


          <div class="col-md-8 col-lg-8 mb-2">
          

          <?php 
              if ($errorZ!="")
              { echo "<div class=\"input-group-text alert-danger text-truncate\" id=\"basic-addon1\" role=\"alert\" align=\"center\" >".$errorZ."</div>"; }
            ?>
                                   <!-- SOLO ES VISIBLE SI LA VARIABLE DE ERROR TIENE ALGO-->


            <?php 
              if ($exitoZ!="")
              { echo "<div class=\"input-group-text alert-success text-truncate\" role=\"basic-addon1\" role=\"alert\" align=\"center\">".$exitoZ."</div>"; }
            ?>
                                   <!-- SOLO ES VISIBLE SI LA VARIABLE DE ÉXITO TIENE ALGO-->


                </div> 

    </div>






    <h4 class="glowwhite mt-2 mb-2">Divisiones:</h4>

<div class="row">


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-square"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_datos_doc_inicial;  ?></div>
              <div class="infozzz">Inicial</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_doc_inicialf;  ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_doc_inicialm;  ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="obs.php?alertin=0&dividivi=1&criterio=xxx&tituloJKL=en Educ. Inicial">

              <span class="float-left">Ver Listado</span>
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
                <i class="fas fa-clone"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_datos_doc_basica;  ?></div>
              <div class="infozzz">Básica</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_doc_basicaf;  ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_doc_basicam;  ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="obs.php?alertin=0&dividivi=2&criterio=xxx&tituloJKL=en Educ. Básica">
              <span class="float-left">Ver Listado</span>
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
                <i class="fas fa-th-large"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_datos_doc_media;  ?></div>
              <div class="infozzz">Media</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_doc_mediaf;  ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_doc_mediam;  ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="obs.php?alertin=0&dividivi=5&criterio=xxxx&tituloJKL=en Educ. Media">
              <span class="float-left">Ver Listado</span>
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
                <i class="fas fa-th"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_datos_doc_mediag;  ?></div>
              <div class="infozzz">Media General</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_doc_mediagf;  ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_doc_mediagm;  ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="obs.php?alertin=0&dividivi=3&criterio=xxxx&tituloJKL=en Educ. Media General">
              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>                 
        

      </div>  <!-- cierre row -->










    <div class="form-row">  


          <div class="col-md-6 col-lg-6 mt-4 mb-1">
<form method="POST">

            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text alert-primary">Buscar estudiante(s):</span>
            </div>


            <input type="text" class="form-control" name="buscar_estud" placeholder="Ingresar Apellidos..." aria-label="">
            <div class="input-group-append">
              <button type="submit" name="buscalo" class="btn btn-primary"><i style="color:white;">Buscar... <i class="fas fa-search fa-lg "></i></i></button>
            </div>


          </div>


 </form>

          </div>


          



    </div>
   



  <div class="card mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-sm table-hover" id="dataTable" width="100%" cellspacing="0"  >
             
              <thead>
                <tr>
                  
                  <th><i class="fas fa-list-ol"></i>:</th>
                  <th><i class="fas fa-camera"></i></th>
                  <th>Estudiante:</th>                  
                  
                  <th>Datos:</th>            
                                  
                  <th>Observaciones:</th>


                  <th>Opciones:</th> 
                  
                  
                </tr>
              </thead>
                          
              
              <tbody>

                 <?php do{?>  <!--   va generarme tantas filas como datos tenga esta BD -->

                <tr>

                <?php

$id_estxx1 = $row_datos_doc['id_estud'];

include("../conectar.php");


$sql_countpptt = "SELECT COUNT(*) total FROM reg_estu_actual where id_estud = '$id_estxx1'";
$result_countpptt = mysqli_query($enlace, $sql_countpptt) or die(mysqli_error());
$el_conteopptt = mysqli_fetch_assoc($result_countpptt);
$el_totalpptt = $el_conteopptt['total'];




$reg_sobre = "SELECT proviene_de_otro, nombre_plantel_pro FROM reg_estu_sobre  
           WHERE  id_estud  = '$id_estxx1'";   //

$q_reg_sobreA = mysqli_query($enlace, $reg_sobre) or die(mysqli_error());

$r_d_reg_sobreD = mysqli_fetch_array($q_reg_sobreA);



$reg_estu_HOYx = "SELECT * FROM  edades, secciones, reg_estu_actual  
           WHERE secciones.id_seccion = reg_estu_actual.id_seccion
           and edades.id_edad = reg_estu_actual.edad_actual
             and id_estud = '$id_estxx1'

             and el_activo = '1'
            ORDER BY id_reg_estu_actual DESC LIMIT 1";   // me selecciona el ultimo es decir el actual en curso

$q_reg_estu_HOYx = mysqli_query($enlace, $reg_estu_HOYx) or die(mysqli_error());

$r_d_reg_estu_HOYx = mysqli_fetch_array($q_reg_estu_HOYx); 



 mysqli_close($enlace); 

 ?>

                  





    <td class="align-middle" align="center">
      

<?php


    echo $i;
    $i++;

    
  ?>


    </td>



 <td class="align-middle" align="center">

<img id="myImg" src="<?php echo $row_datos_doc['foto_estu']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio5.jpg';" width="80px" />
                   
</td> 



        <td class="align-middle" align="center">


           <?php  if ( $row_datos_doc['id_sexo'] == '2') {
      $color1 = 'color:#417FD5;';
      
    }

    else 
      {

       $color1 = 'color:#ff3399;';
      
    }

    ;?>
      

<span style="<?php echo $color1;?>"><b><?php echo $row_datos_doc['apellidos_estu'];  ?></b>  <br>  <?php echo $row_datos_doc['nombre_estu'];  ?></span><br><span style="color:#605558;">Edad:</span> <?php echo $r_d_reg_estu_HOYx["nombre_edad"];?> años.


    </td>



        <td class="align-middle" align="center">

          Cursa: <b><?php echo $row_datos_doc['nombre_grados'];  ?></b> - "<?php echo $r_d_reg_estu_HOYx['nombre_seccion'];?>"<br>
          

<?php  if ( $r_d_reg_estu_HOYx['repite_actual'] != '2') {
      $re_re = '<span style="color:#FF8F00;"><b><i class="fab fa-r-project fa-lg"></i></b></span><br>'  ;
      echo $re_re;      
    }

    ;?>  


                    

<?php  if ( $r_d_reg_sobreD['proviene_de_otro'] == '1' && $el_totalpptt =='1') {
      $flechin = '<span style="color:limegreen;"><b>Proviene de:</b></span><br>'  ;
      echo $flechin;
      echo $r_d_reg_sobreD['nombre_plantel_pro'];
    }



    if ( $r_d_reg_sobreD['proviene_de_otro'] == '1' && $el_totalpptt =='2') {
       $flechin = '<span style="color:#4B0082;"><b>El año ante-pasado curso en:</b></span><br>'  ;
      echo $flechin;
      echo $r_d_reg_sobreD['nombre_plantel_pro'];
    }




    ;?>


        </td>

            <td class="align-middle" align="center" width="40%">
              
<span style="color:#EF1752;"><?php echo $row_datos_doc['obs_estud'];  ?></span> 

            </td>

                <td class="align-middle" align="center">
                  

                    <div class="form-row mb-2">

                      <!--boton 1 -->
                      <div class="col-lg-6" data-toggle="tooltip" data-placement="top" title="Modificar Datos">
  
                      <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                              data-target="#modificar<?php echo $row_datos_doc['id_estud']; ?>">
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <i class="fas fa-edit"></i>
                      </button>

                      </div> 






<!-- ini modal editar -->

<div class="modal fade" id="modificar<?php echo $row_datos_doc['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Editar o Modificar!!!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


       <?php include("plantilla_estudiantes_00_mod_corto_obs.php"); ?>


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_doc['id_estud']; ?>">
        

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_selecc" class="btn btn-info" value="<?php echo $row_datos_doc['id_estud']; ?>">
              Modificar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->







                    </div>










<!--  *********** -->


 <div class="form-row"> 

                      <div class="col-lg-6">


                        <?php if ($row_datos_doc['retirado_si_o_no']=='0') { ?>
                   
                    <span data-toggle="tooltip" data-placement="top" title="Retirar Alumno"> 
                    <button type="submit" name="cambio_status" class="btn btn-outline-success btn-sm" data-toggle="modal"
                    data-target="#desactivar<?php echo $row_datos_doc['id_estud']; ?>" >        <!-- este ultimo identifica cual modal abrir -->
                    <i class="far fa-smile"></i></button>
                    </span> 

                    <?php   }?>



                    <?php if ($row_datos_doc['retirado_si_o_no']=='1') { ?>
                    
                    <span data-toggle="tooltip" data-placement="top" title="Incorporar Alumno">
                    <button type="submit" name="cambio_status" class="btn btn-outline-secondary btn-sm"
                    data-toggle="modal" data-target="#activar<?php echo $row_datos_doc['id_estud']; ?>" >       
                      <i class="far fa-meh"></i></button>
                    </span> 

                    <?php   }?>


                      </div>










<!-- ini modal retirar --> 
<div class="modal fade" id="desactivar<?php echo $row_datos_doc['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-secondary" id="exampleModalLabel">
        <i class="far fa-bell-slash fa-lg"></i> &nbsp;Alerta!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">

<div class="form-row">
<div class="input-group col-lg-12 mb-2">
El alumno:&nbsp;&nbsp;  <b>" 
<?php

$id_del_reg = $row_datos_doc['id_estud'];

include ("../conectar.php");

$query_quien_y = "SELECT * FROM quien_y_cuando_estu, usuarios                    
         WHERE  quien_y_cuando_estu.id_quien = usuarios.id        
         and  quien_y_cuando_estu.id_estud = '$id_del_reg' 
         LIMIT 1";

$datos_quien_y = mysqli_query($enlace, $query_quien_y) or die(mysqli_error());

$row_datos_quien_y = mysqli_fetch_array($datos_quien_y); 

$totalRows_datos_quien_y = mysqli_num_rows($datos_quien_y); 

mysqli_close($enlace);



$fecha_formateada = date('d-m-Y', strtotime($row_datos_quien_y['cuando_estu']));

echo $row_datos_doc['nombre_estu'];?>, <?php echo $row_datos_doc['apellidos_estu'] ;?>
 "
</b>.
</div>

<div class="input-group col-lg-12"> 
 Fue incorporado al sistema el
 <?php
 echo $fecha_formateada;
 ?>, por el &nbsp;<b><?php echo $row_datos_quien_y['cargo'] ;?></b>&nbsp; <?php echo $row_datos_quien_y['apellidos'] ;?>.
 </div>

</div>

<div class="form-row">
<div class="input-group col-md-12 mt-2 mb-1 text-muted ">
 <b>Indicar fecha de retiro:</b>
</div>
</div>


<div class="form-row">
<div class="input-group col-md-4 mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-minus fa-lg"></i></span>  
                  </div>
<input type="date" class="form-control importantex" id="retiro_date" name="retiro_date" required>

</div>
</div>


<div class="form-row">
<div class="input-group col-md-8 mt-2 mb-1 text-muted ">
 <b>Agregar nota relacionada con el retiro:</b>
</div>
</div>



<div class="form-row ">
<div class="col-md-12">
<textarea maxlength="250" class="form-control" id="nota_text<?php echo $row_datos_doc['id_estud']; ?>" name="nota_text" rows="2" required></textarea>
<span id="chars<?php echo $row_datos_doc['id_estud']; ?>">250</span> caracteres restantes.
</div>
</div> <!-- cierre row  de nota -->


<script type="text/javascript">
  
var maxLength = 250;
$('#nota_text<?php echo $row_datos_doc['id_estud']; ?>').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength-length;
  $('#chars<?php echo $row_datos_doc['id_estud']; ?>').text(length);
});

</script>

<br>

<div class="form-row ">

 <?php

$fecha1="2000-10-10";

 $mensajexx1 = "Nota: Anteriormente el estudiante había sido retirado el: "; 
 $mensajexx2 = "  Y re-incorporado el: "; 
 $puntico =".";

 if ($row_datos_quien_y['fecha_retiro'] > $fecha1 ) {

$fecha_formatxxx = date('d-m-Y', strtotime($row_datos_quien_y['fecha_retiro']));
$fecha_formatyyy = date('d-m-Y', strtotime($row_datos_quien_y['fecha_reincorp']));


   echo $mensajexx1; echo $fecha_formatxxx; echo $puntico; echo $mensajexx2; echo $fecha_formatyyy;
 }



?>.
</div>



</div> <!-- cierre modal body -->
      <div class="modal-footer"> 

    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

<input name="desactivar_status" type="hidden" value="0">

    <button type="submit" name="retirar_alumno" class="btn btn-secondary"
    value="<?php echo $row_datos_doc['id_estud']; ?>" > Retirar</button>

      </div>
      </form>

    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 












<!-- ini modal incorporar -->   
<div class="modal fade" id="activar<?php echo $row_datos_doc['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">
        <i class="far fa-bell fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">

<div class="form-row">
<div class="input-group col-lg-12 mb-1">
  <?php


$id_del_reg = $row_datos_doc['id_estud'];

include ("../conectar.php");

$query_quien_y = "SELECT * FROM quien_y_cuando_estu, usuarios                    
         WHERE  quien_y_cuando_estu.id_quien = usuarios.id        
         and  quien_y_cuando_estu.id_estud = '$id_del_reg' 
         LIMIT 1";

$datos_quien_y = mysqli_query($enlace, $query_quien_y) or die(mysqli_error());

$row_datos_quien_y = mysqli_fetch_array($datos_quien_y); 

$totalRows_datos_quien_y = mysqli_num_rows($datos_quien_y); 

mysqli_close($enlace);





$fecha_formateada1 = date('d-m-Y', strtotime($row_datos_quien_y['cuando_estu']));
$fecha_formateada = date('d-m-Y', strtotime($row_datos_quien_y['fecha_retiro']));
  ?>

El estudiante &nbsp;
<b>"  
<?php
echo $row_datos_doc['nombre_estu'];?>, <?php echo $row_datos_doc['apellidos_estu'] ;?> 
"&nbsp; </b>.
</div>

<div class="input-group col-lg-12 mb-1"> 

 Fue incorporado al sistema el
 <?php
 echo $fecha_formateada1;
 ?>, por el &nbsp;<b><?php echo $row_datos_quien_y['cargo'] ;?></b>&nbsp; <?php echo $row_datos_quien_y['apellidos'] ;?>.
</div>



<div class="input-group col-lg-12 mb-2">
 Y fue retirado anteriormente del sistema el
 <?php
 echo $fecha_formateada;
 ?>. 
</div>
</div>

<div class="form-row">
<div class="input-group col-md-6 mt-2 mb-1 text-success ">
 <b>Indicar nueva fecha de re-incorporación:</b>
</div>
</div>

<div class="form-row">
<div class="input-group col-md-4 mb-1">

                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-plus fa-lg"></i></span>  
                  </div>
<input type="date" class="form-control importantex" id="activar_date" name="activar_date"
aria-label="activar_date">

</div>
</div>


<div class="form-row">
<div class="input-group col-md-6 mb-3">
<small class="form-text text-success">Puede usar la fecha anterior de incorporación.</small>
</div>
</div>



<div class="form-row">
<div class="input-group col-md-8 mt-2 mb-1 text-muted ">
 <b>Razones por las cuales se retiró anteriormente:</b>
</div>
</div>

<div class="form-row mb-3">

<div class="col-md-12">

<div class="input-group col-md-12 desincorporadopor">

<?php
echo $row_datos_quien_y['tex_retiro'];
 ?>
   <!-- cierre  nota de desincorporación -->
</div>

</div>

</div>




<br>






      </div> <!-- cierre modal body -->
      <div class="modal-footer">  

    <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>

<input name="activar_status" type="hidden" value="1">

    <button type="submit" name="incorporar_estudiante" class="btn btn-success"
    value="<?php echo $row_datos_doc['id_estud']; ?>" > Re-incorporar</button>

      </div>
       </form>

    </div>
  </div>
</div>
<!-- cierre modal de activar --> 










                    </div>




                </td>
      




                </tr>
                


                <?php } while ($row_datos_doc = mysqli_fetch_array($datos_doc)); ?>    <!--  -->

                
              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->

       

    <div class="card-footer text-muted"><b>Info:</b> Por intermedio de esta página, podrá consultar y actualizar rápidamente las diversas observaciones en las hojas de vida de los estudiantes.</div> 

        
  </div> <!-- cierre card -->


                           

  </div>   <!-- cierre container fluid -->
</div>  <!-- cierre wrapper -->



<script type="text/javascript">


  
function stripspaces(input)
{
  input.value = input.value.replace(/(^[\s]+|[\s]+$)/g, '');

  return true;
}



</script>




























<?php include ("Footer.php"); ?>
