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





 if(isset($_POST['editar_seleccxx']))
        {


 include("consultas_mod/chequeo_estudiantes_mod_corto_cita.php");   // chequea que lo introducido este bien.




if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }

else { 

include ("../conectar.php");


 include("plantilla_estudiantes_00_update_corto_cita.php");   // procesa los datos

 }


}  // cierre de modificar datos del estudiante








 if(isset($_POST['anular_cita']))
    {

          
      include("../conectar.php");   


      $sql_anuxx = "DELETE FROM citas WHERE id_cita='$_POST[anular_cita]' LIMIT 1 ";


                  if (!mysqli_query($enlace,$sql_anuxx))      // actualiza y si no ha logrado ingresar los datos
                         {
                          $errorZ="- Error al anular, contactar al Ing. ";
                          mysqli_close($enlace);
                        
                          }

                   else{

                          $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Cita anulada. </b>"; 
                          mysqli_close($enlace);   

                      }

    } 




     if(isset($_POST['ajustar_cita']))
    {

          
      include("../conectar.php"); 



          $id_del_estu = $_POST["id_del_estu"];

          $mod_fecha_cita = $_POST["fecha_cita_modi"];

          $mod_hora = $_POST["time_modi"];

          $respuesta_modi = $_POST["respuesta_modi"];           


     $sql_ajust = "UPDATE citas SET fecha_cita = '$mod_fecha_cita',  hora_cita = '$mod_hora', acuse_recibo = '$respuesta_modi'                           
                                        
                                                 WHERE id_cita='$_POST[ajustar_cita]' LIMIT 1 ";


                  if (!mysqli_query($enlace,$sql_ajust))      // actualiza y si no ha logrado ingresar los datos
                         {
                          $errorZ="- Error al editar, contactar al Ing. ";
                          mysqli_close($enlace);
                        
                          }

                   else{

                          $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Cambios Guardados. </b>"; 
                          mysqli_close($enlace);   

                      }



                  
                  include("../conectar.php");     


                  $email_request = " SELECT reg_representante.id_repre, reg_representante.email_repre, reg_estudiantes.id_estud
               FROM reg_estu_repre_all, reg_representante, reg_estudiantes 

         WHERE  reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = '$id_del_estu'
                 
        
         LIMIT 1 ";

$datos_estudiantesTT = mysqli_query($enlace, $email_request);

$row_datos_estudiantesTT = mysqli_fetch_array($datos_estudiantesTT);


 $el_email_es =  $row_datos_estudiantesTT['email_repre']; 


mysqli_close($enlace);




             if ($el_email_es != '' )
              {   
                

                 $conexion = @fsockopen("www.google.com", 80, $errno, $errstr, 30); 
          if (!$conexion) { 
          $enviado="0";
          $errorZ .="- Sin internet, email no enviado.";

          }

           else { 
          $enviado="1";       
          fclose($conexion); 

include("../conectar.php");

$queryplantel = "SELECT * FROM z_plantel LIMIT 1";

$datos_queryplantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());

$row_datos_queryplantel = mysqli_fetch_array($datos_queryplantel); 

$www = $row_datos_queryplantel["www"];
          
mysqli_close($enlace);

       $diaf = date('d', strtotime($mod_fecha_cita));
            $mesf = date('n', strtotime($mod_fecha_cita)); 
             
            $mf="";
            switch ($mesf) {
                case 1:$mf="Enero"; break;
                case 2:$mf="Febrero"; break;
                case 3:$mf="Marzo"; break;
                case 4:$mf="Abril"; break;
                case 5:$mf="Mayo"; break;
                case 6:$mf="Junio"; break;
                case 7:$mf="Julio"; break;
                case 8:$mf="Agosto"; break;
                case 9:$mf="Septiembre"; break;
                case 10:$mf="Octubre"; break;
                case 11:$mf="Noviembre"; break;
                case 12:$mf="Diciembre"; break;
            }



          $email =  $el_email_es;

          $correo = "Reciba un cordial saludo, el siguiente correo tiene como finalidad, hacerle de su conocimiento que hemos realizado cambios en la reunión anteriormente programada con usted y su representado para el próximo $diaf de $mf  a las  $mod_hora.
                           

                           \n Para leer la nota completa relacionada con la reunión, cancelarla y/o confirmar asistencia, ingrese al sistema On-line $www y consulte el apartado -Citas y Observaciones-, muchas gracias por la atención brindada.";

        mail($email,"Cambios realizados en la Citación", $correo);  


        include("../conectar.php");

        $sql_anu = "UPDATE citas SET email_cita_si_o_no = '1'                          
                                        
                                                 WHERE id_cita='$_POST[ajustar_cita]' LIMIT 1 ";


                  if (!mysqli_query($enlace,$sql_anu))      // actualiza y si no ha logrado ingresar los datos
                         {
                          $errorZ .="- Posiblemente el email, no ha sido enviado.";
                          mysqli_close($enlace);
                        
                          }

                   else{

                          $exitoZ .= "- El email informativo ha sido enviado."; 
                          mysqli_close($enlace);   

                      }

          } 


                }


                else {

                  $errorZ .="- El representante no dispone de email.";
                }


    } 






if(isset($_POST['buscalo']))
    {



if (strlen($_POST['buscar_estud']) <=2 )  // no sea mayor a 40 caracteres
    {   

    $xxxsearch = "xxxxxx";

    header( "Location: citas.php?alertin=5&dividivi=9&criterio=".$xxxsearch."&tituloJKL=." ); 



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

       header( "Location: citas.php?alertin=55&dividivi=9&criterio=".$xxxsearch."&tituloJKL=." ); 

      }



      if ($totalRows_datos_doc_cuenta >= '1' and $totalRows_datos_doc_cuenta <= '16') {    

        header( "Location: citas.php?alertin=0&dividivi=9&criterio=".$busqueda."&tituloJKL=." ); 

      }


      if ($totalRows_datos_doc_cuenta >= '17') {

        $xxxsearch = "xxxxxx";       

       header( "Location: citas.php?alertin=1&dividivi=9&criterio=".$xxxsearch."&tituloJKL=." );  

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

<?php include ("listas_php/citas.php"); ?>   <!--   -->


<div class="se-pre-con"></div>


<div class="content-wrapper">
  <div class="container-fluid">

    <div class="form-row">  


          <div class="col-md-4 col-lg-4 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i><b>Panel de Citaciones <?php echo $tituloJKL;?></b> </i></div> 

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
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-square"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_datos_doc_inicial;  ?></div>
              <div class="infozzz">Inicial</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_doc_inicialf;  ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_doc_inicialm;  ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="citas.php?alertin=0&dividivi=1&criterio=xxx&tituloJKL=en Educ. Inicial">

              <span class="float-left">Ver Listado</span>
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
                <i class="fas fa-clone"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_datos_doc_basica;  ?></div>
              <div class="infozzz">Básica</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_doc_basicaf;  ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_doc_basicam;  ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="citas.php?alertin=0&dividivi=2&criterio=xxx&tituloJKL=en Educ. Básica">
              <span class="float-left">Ver Listado</span>
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
                <i class="fas fa-th-large"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_datos_doc_media;  ?></div>
              <div class="infozzz">Media</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_doc_mediaf;  ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_doc_mediam;  ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="citas.php?alertin=0&dividivi=5&criterio=xxxx&tituloJKL=en Educ. Media">
              <span class="float-left">Ver Listado</span>
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
                <i class="fas fa-th"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $totalRows_datos_doc_mediag;  ?></div>
              <div class="infozzz">Media General</div>
              <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $totalRows_datos_doc_mediagf;  ?>  / <i class="fas fa-male"></i> : <?php echo $totalRows_datos_doc_mediagm;  ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"
             href="citas.php?alertin=0&dividivi=3&criterio=xxxx&tituloJKL=en Educ. Media General">
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
                                  
                  <th>Registro de Citas:</th>

                  

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

<img id="myImg" src="<?php echo $row_datos_estudiantes['foto_estu']; ?>?nocache=<?php echo time(); ?>"
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

            <td class="align-middle" align="center">
 

<?php

include("../conectar.php");

$buscar_todos = "SELECT * FROM citas where id_estud = '$id_estxx1' ORDER BY fecha_cita ASC ";   

$encuentralos_ya = mysqli_query($enlace, $buscar_todos) or die(mysqli_error());   

$creame_una_lista = mysqli_fetch_array($encuentralos_ya);

$totalRows_findx = mysqli_num_rows($encuentralos_ya);    

mysqli_close($enlace);    


 ?>

<?php
 if ($totalRows_findx >='1') {


do{   ?>

 <span style="color:#334d00;">

   <?php  
   

      $fecha_citaxx = date('d-m-Y', strtotime($creame_una_lista['fecha_cita']));
   echo $fecha_citaxx; ?> <span style="color:purple;"> <b><i class="far fa-clock"></i></b></span>  <span style="color:black;"><?php echo $creame_una_lista['hora_cita']; ?>  </span> 

 </span> - <b>Por:</b> <span style="color:black;">  <?php echo $creame_una_lista['causa_cita']; ?>.  </span>  <br>

 - 
<span style="color:black;"><?php echo $creame_una_lista['nota_cita']; ?>.  </span>  <br>

</span> <b>Atendido por:</b> 
<span style="color:black;"><?php echo $creame_una_lista['responsable_cita']; ?>.  </span>  <br>



 <?php if ($creame_una_lista['email_cita_si_o_no']=='1') {

  $respdd = '<span style=\'color:blue;\'>Email Enviado</span>';   }

  else {$respdd = '<span style=\'color:red;\'>Email No Enviado</span>'; }

    echo $respdd;

  ?>


  <span style="color:orange;"><b>/</b></span>


   <?php if ($creame_una_lista['acuse_recibo']=='0') {

  $respddxx = '<span style=\'color:#e6005c;\'>Cita No Confirmada</span>';
  $respcontent = "Cita No Confirmada";   }
  

  if ($creame_una_lista['acuse_recibo']=='1') {

  $respddxx = '<span style=\'color:#009999;\'>Si Asistirá</span>';
   $respcontent = "Si Asistirá";   }
 

if ($creame_una_lista['acuse_recibo']=='2') {

  $respddxx = '<span style=\'color:#e6005c;\'><b>No puede asistir</b></span>';
   $respcontent = "No puede asistir";   }

    echo $respddxx;

  ?>


   

   <span style="color:green;"><b>-</b></span>


    <span   data-toggle="tooltip" data-placement="top" title="Eliminar cita">
    <button type="button" class="btn btn-outline-danger btn-sm"  data-toggle="modal"
                  data-target="#borrar<?php echo $creame_una_lista['id_cita']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->
                  <i class="far fa-times-circle"></i></button></span> 


<span style="color:green;"><b>-</b></span>


<span   data-toggle="tooltip" data-placement="top" title="Reprogramar y/o confirmar">
    <button type="button" class="btn btn-outline-info btn-sm"  data-toggle="modal"
                  data-target="#editt<?php echo $creame_una_lista['id_cita']; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->
                  <i class="far fa-calendar-alt"></i></button></span> 


                  <br><hr>


  <!-- ini modal eliminar -->

<div class="modal fade" id="borrar<?php echo $creame_una_lista['id_cita']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">
        <i class="fas fa-exclamation-triangle fa-lg"></i> &nbsp;Alerta!!!</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        La cita del estudiante <b><?php echo $row_datos_doc['apellidos_estu']; ?></b> con fecha <?php echo $fecha_citaxx; ?> sera anulada. 
      </div>
      <div class="modal-footer">

  <form method="post">

    <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
    <button type="submit" name="anular_cita" class="btn btn-danger" value="<?php echo $creame_una_lista['id_cita']; ?>" >
          Anular</button>

  </form>


      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->


  <!-- ini modal eliminar -->

<div class="modal fade" id="editt<?php echo $creame_una_lista['id_cita']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-exclamation-triangle fa-lg"></i> &nbsp;Editar Cita de:</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        - <b><?php echo $row_datos_doc['apellidos_estu']; ?></b>, <?php echo $row_datos_doc['nombre_estu']; ?>. <br>
        - Fecha original <?php echo $fecha_citaxx; ?>, hora: <?php echo $creame_una_lista['hora_cita']; ?>.


        <div class="form-row">  <!-- row cero-->
                  <div class="col-md-12 text-left mt-3 mb-2">
                  <h5 class="text-info"> Ajustar y/o Confirmar Asistencia:</h5>
                  </div>
       </div>  


  <form method="post">
 <div class="form-row"> 


         <div class="input-group input-group-sm col-md-4 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>  
                  </div>
     
<input type="date" class="form-control form-control-sm" id="fecha_cita_modi" name="fecha_cita_modi" value="<?php echo $creame_una_lista['fecha_cita']; ?>" required>
        </div>


 <input type="hidden" id="id_del_estu"  name="id_del_estu"
    value="<?php echo $creame_una_lista['id_estud']; ?>">  




<link type="text/css" href="00_time/bootstrap-timepicker.min.css" />
<script type="text/javascript" src="00_time/bootstrap-timepicker.js"></script>


<div class="input-group input-group-sm col-md-3 mb-2">

                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i class="far fa-clock"></i></span>  
                  </div>


        
            <input id="timepicker<?php echo $row_datos_plantilla_estud['id_estud']; ?>" type="text" name="time_modi" class="form-control form-control-sm" value="<?php echo $creame_una_lista['hora_cita']; ?>" required>
            
        
</div>       
 
        <script type="text/javascript">
            $('#timepicker<?php echo $row_datos_plantilla_estud['id_estud']; ?>').timepicker({
                template: false,
                showInputs: false,
                minuteStep: 5
            });
        </script>


<div class="input-group input-group-sm col-md-5 mb-2">
  <div class="input-group-prepend">
    <label class="input-group-text alert-info" for="inputGroupSelect01">Asistirá?:</label>
  </div>
  <select class="custom-select" id="respuesta_modi" name="respuesta_modi">
    
<option value="<?php echo $creame_una_lista['acuse_recibo']; ?>" selected><?php echo $respcontent; ?></option>
<option disabled></option>


<optgroup label="Cambiar a...">
<option disabled></option>

    <option value="0">Cita No Confirmada</option>
    <option value="1">Si Asistirá</option>
    <option value="2">No puede asistir</option>

  </select>
</div>
    

</div> <!-- cierre principal col md 12 -->





      </div>
      <div class="modal-footer">



    <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
    <button type="submit" name="ajustar_cita" class="btn btn-info" value="<?php echo $creame_una_lista['id_cita']; ?>" >
          Guardar Cambios</button>



           <script type="text/javascript">
            $(document).ready(function(){
                 $("form").submit(function() {
                        $(this).submit(function() {
                            return false;
                        });
                        return true;
                    }); 
            }); 
            </script>

  </form>


      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->


 

 



<?php   }  while ( $creame_una_lista = mysqli_fetch_array($encuentralos_ya) );       }   ?> 





            </td>







                <td class="align-middle" align="center">
                  

                    <div class="form-row mb-2">

                      <!--boton 1 -->
                      <div class="col-lg-6" data-toggle="tooltip" data-placement="top" title="Crear nueva cita">
  
                      <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                              data-target="#citas<?php echo $row_datos_doc['id_estud']; ?>">
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <i class="fas fa-edit"></i>
                      </button>


                      </div> 



                     



                    </div>










<!-- ini modal editar -->

<div class="modal fade" id="citas<?php echo $row_datos_doc['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Crear nueva cita.</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


       <?php include("plantilla_estudiantes_00_mod_corto_cita.php"); ?>


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_doc['id_estud']; ?>">
        

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_seleccxx" class="btn btn-info" value="<?php echo $row_datos_doc['id_estud']; ?>">
              Agendar</button>  






              <!--  no pasa nada si se cliquea el boton de registrar hasta que termine -->  


      <script type="text/javascript">
            $(document).ready(function(){
                 $("form").submit(function() {
                        $(this).submit(function() {
                            return false;
                        });
                        return true;
                    }); 
            }); 
            </script>






      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->









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
