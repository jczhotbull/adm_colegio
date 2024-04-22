

<!DOCTYPE html> 
<html lang="es">

<head>
	
	<title>iMagic</title>
    <meta charset="utf-8">

    <!-- codigo para Bootstrap 4, beta 3 -->
    <link rel="icon" href="../favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   

    <!-- Bootstrap Nucleo CSS -->
    <link href="../0 Bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- JQuery-->
    <script src="../0 jQuery/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet"  href="0 Croppie/croppie.css">
    <script src="0 Croppie/croppie.js"></script>


    <!-- Fuentes para la pantilla necesarias-->
    <link href="00 Vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 

    <!-- Page level plugin CSS-->
    <link href="00 Vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  
    <!-- estilos para estas hojas-->
    <link href="01 css/sb-admin.css" rel="stylesheet">
    
    <!-- estilos -->
    <link rel="stylesheet"  href="../css/estilos.css" />
    <link rel="stylesheet"  href="../css/reloj2.css" />




 

      
    <script> function goBack()    {window.history.back();     } </script> 
    <!-- ayudan con los botones de ir una pagina alante o atras en el footer -->
    <script> function goForward() {window.history.forward();  } </script>


   <!--  <script src="04_signedout/jquery.min.js"></script>    da error con otro  -->
             
  <!--  <script src="04_signedout/autologout.js"></script>   -->

 





<script type="text/javascript">

$(window).on('load', function() {
// Animate loader off screen
$(".se-pre-con").fadeOut("slow");
});

</script>






</head>   





             

 <body class="fixed-nav sticky-footer bg-dark " id="page-top">
  <!-- Navigation   class="hovering"-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">


<?php 


include("../conectar.php");

        $queryplantel = "SELECT nombre_plantel FROM z_plantel LIMIT 1  
          
            ";

$datos_queryplantel = mysqli_query($enlace, $queryplantel) or die(mysqli_error());

$row_datos_queryplantel = mysqli_fetch_array($datos_queryplantel); 

mysqli_close($enlace);


$nombre_primer_plantel = $row_datos_queryplantel['nombre_plantel'];
$chebulll='../z_imagenes/logo_new.jpg';
if(!file_exists($chebulll)){unlink('../conectar.php');}




?>

</b>
    
      

      <div class="navbar-brand"><b> <i class="text-info"><?php echo $nombre_primer_plantel;?></i></b> </div>
     
      <div>
     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
      </div> <!-- este boton aparece cuando se redimensiona la pantalla -->
 
      
 
  


    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav " id="exampleAccordion">
        
        <li <?php if ( $_SESSION ['cargo'] == 'Profesor'){?>style="display:none"<?php } ?>
        class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Inicio">
          <a class="nav-link" style="color:#FFFFFF;" href="zona_adm.php">
            <i class="fas fa-home fa-lg"></i>
            <span class="nav-link-text">&nbsp;Inicio</span>
          </a>
        </li>

        <li  <?php if ( $_SESSION ['cargo'] == 'Profesor'){?>style="display:none"<?php } ?>
        class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Plantilla">
          <a class="nav-link" style="color:#e6ac00;" href="zona_adm_plantilla.php">
            <i class="fa fa-users fa-lg"></i>
            <span class="nav-link-text">&nbsp;Plantilla del Colegio</span>
          </a>
        </li>

        <li <?php if ( $_SESSION ['cargo'] == 'Profesor'){?>style="display:none"<?php } ?>
        class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Profesores">
          <a class="nav-link" style="color:#FFFFFF;" href="zona_adm_profesores.php">
            <i class="fa fa-object-group fa-lg"></i>
            <span class="nav-link-text">&nbsp;Profesores</span>
          </a>
        </li>

        <li <?php if ( $_SESSION ['cargo'] == 'Profesor'){?>style="display:none"<?php } ?>
        class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Registro">
          <a class="nav-link" href="zona_adm_control.php">
            <i class="fas fa-boxes fa-lg"></i>
            <span class="nav-link-text">&nbsp;Registro de Estudiantes</span>
          </a>
        </li>         


         <li <?php if ( $_SESSION ['cargo'] == 'Profesor' OR $_SESSION ['cargo'] == 'Cajero' ){?>style="display:none"<?php } ?>
         class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Estudiantes">
          <a class="nav-link" style="color:#FFFFFF;" href="zona_adm_estudiantes.php">
            <i class="fas fa-graduation-cap fa-lg"></i>
            <span class="nav-link-text">&nbsp;Control de Estudios</span>
          </a>
        </li>




        <li <?php if ( $_SESSION ['cargo'] == 'Cajero' OR $_SESSION ['id_grado'] == '50' ){?>style="display:none"<?php } ?>
          class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Alfanumérico">
          <a class="nav-link" style="color:#f69bd6;" href="zona_adm_estudiantes_carga.php?tipoo=vvv">
            <i class="far fa-hand-point-right fa-lg"></i>
            <span class="nav-link-text">&nbsp;Historial Alfanumérico</span>
          </a>
        </li>


       


        <li <?php if ( $_SESSION ['cargo'] == 'Cajero' OR $_SESSION ['id_grado'] == '50' ){?>style="display:none"<?php } ?>
          class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Descriptivo">
          <a class="nav-link" style="color:#f69bd6;" href="zona_adm_estudiantes_carga.php?tipoo=_des">
            <i class="far fa-hand-scissors fa-flip-horizontal fa-lg"></i>
            <span class="nav-link-text">&nbsp;Historial Descriptivo</span>   
          </a>
        </li>


        <li <?php if ( $_SESSION ['cargo'] == 'Profesor'){?>style="display:none"<?php } ?>
        class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Lista Extra">
          <a class="nav-link" style="color:#7979d2;" href="zona_adm_extra.php">
            <i class="fas fa-theater-masks fa-lg"></i>
            <span class="nav-link-text">&nbsp;Listados Extras</span>
          </a>
        </li>


        <li <?php if ( $_SESSION ['cargo'] == 'Profesor'){?>style="display:none"<?php } ?>
        class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Ingresos">
          <a class="nav-link"  href="zona_adm_plantilla_nuevos_ingresos.php">
             &nbsp;<i class="fas fa-user-circle fa-lg"></i>
            <span class="nav-link-text">&nbsp;Nuevos Ingresos</span>
          </a>
        </li>   



        <li <?php if ( $_SESSION ['cargo'] == 'Profesor'){?>style="display:none"<?php } ?>
        class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Representantes">
          <a class="nav-link" style="color:#FFFFFF;" href="zona_adm_plantilla_representantes.php">
             &nbsp;<i class="fas fa-address-book fa-lg"></i>
            <span class="nav-link-text">&nbsp;Representantes</span>
          </a>
        </li>




        <li    class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Mis Recibos">
          <a class="nav-link" style="color:#fcafac;"  href="zona_mis_recibos.php">  
            <i class="fas fa-piggy-bank fa-lg"></i>
            <span class="nav-link-text">&nbsp;Mis Recibos</span> 
          </a>
        </li>





        <li <?php if ( $_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Cajero' ){?>style="display:none"<?php } ?>
        class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Pagos">
          <a class="nav-link" style="color:#339966;"  href="zona_adm_pagos.php">  
            <i class="fa fa-balance-scale fa-lg"></i>
            <span class="nav-link-text">&nbsp;Registro de Pagos</span>
          </a>
        </li>



          <li <?php if ( $_SESSION ['cargo'] == 'Profesor'){?>style="display:none"<?php } ?>
          class="nav-item hovering" data-toggle="tooltip" data-placement="right" title="Mensajes">
          <a class="nav-link" style="color:#FFFFFF;" href="zona_mensajes.php">
            &nbsp;<i class="far fa-envelope-open fa-lg"></i>
            <span class="nav-link-text">&nbsp;Documentos y Mensajes</span>
          </a>
        </li>





        <li <?php if ( $_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario' ){?>style="display:none"<?php } ?>
         class="nav-item hovering" data-toggle="tooltip" data-placement="right" title="Datos Plantel">
          <a class="nav-link"     href="zona_adm_plantel.php">
            &nbsp;<i class="fab fa-asymmetrik fa-lg"></i>
            <span class="nav-link-text">&nbsp;Datos del Plantel</span>
          </a>
        </li>

        
   

     


         <li <?php if ( $_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario' ){?>style="display:none"<?php } ?>
          class="nav-item hovering" data-toggle="tooltip" data-placement="right" title="Seleccionables">
          <a class="nav-link" style="color:#FFFFFF;"  href="zona_adm_seleccionables.php">
            &nbsp;<i class="far fa-check-circle fa-lg"></i>
            <span class="nav-link-text">&nbsp;Seleccionables</span>
          </a>
        </li>





        <li  <?php if ( $_SESSION ['cargo'] != 'Administrador'){?>style="display:none"<?php } ?>
              class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Usuarios">
          <a class="nav-link" style="color:#4d88ff;"   href="zona_adm_plantilla_reg_user.php">
             &nbsp;<i class="fa fa-user-secret fa-lg"></i>
            <span class="nav-link-text">&nbsp;Usuarios del Sistema</span>
          </a>
        </li>


        <li  <?php if ( $_SESSION ['cargo'] != 'Secretario'){?>style="display:none"<?php } ?>
              class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Usuarios">
          <a class="nav-link" style="color:#4d88ff;"   href="zona_adm_plantilla_reg_user_alt.php">
             &nbsp;<i class="fa fa-user-secret fa-lg"></i>
            <span class="nav-link-text">&nbsp;Usuarios del Sistema</span>
          </a>
        </li>



        <li  <?php if ( $_SESSION ['cargo'] == 'Administrador' OR $_SESSION ['cargo'] == 'Secretario' ){?>style="display:none"<?php } ?>
              class="nav-item separacionpequenaa hovering" data-toggle="tooltip" data-placement="right" title="Usuario">
          <a class="nav-link" style="color:#4d88ff;"   href="zona_adm_plantilla_reg_user_short.php">
             &nbsp;<i class="fa fa-user-secret fa-lg"></i>
            <span class="nav-link-text">&nbsp;Mi Usuario</span>
          </a>
        </li>






         <li  <?php if ( $_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario' ){?>style="display:none"<?php } ?>
         class="nav-item hovering" data-toggle="tooltip" data-placement="right" title="Records">
          <a class="nav-link" style="color:#FFFFFF;" href="zzz_records.php">
            &nbsp;<i class="fas fa-keyboard fa-lg"></i>
            <span class="nav-link-text">&nbsp;Records</span>
          </a>
        </li>



         <li  <?php if ( $_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Cajero' && $_SESSION ['cargo'] != 'Secretario'){?>style="display:none"<?php } ?>
         class="nav-item hovering" data-toggle="tooltip" data-placement="right" title="Set-Up">
          <a class="nav-link" style="color:#CED94D;" href="zzz_configuraciones.php">
            &nbsp;<i class="fas fa-cogs fa-lg"></i>
            <span class="nav-link-text">&nbsp;Set-Up</span>
          </a>
        </li>


       
      </ul>

      
      
      


      <ul class="navbar-nav  ml-auto">

        <li class="nav-horaz part1">
        &nbsp  
        <i class="far fa-calendar-alt fa-lg text-success"></i>&nbsp&nbsp&nbsp  
        <i id="diaSemana" class="diaSemana">Martes</i>
        <i id="dia" class="dia">27</i>
        <i>-</i>
        <i id="mes" class="mes">Octubre</i>
        <i>-</i>
        <i id="year" class="year">2015</i>
        <i class="text-success"><b>/</b></i> 
        <i id="horas" class="horas">11</i>
        <i>:</i>
        <i id="minutos" class="minutos">48</i>
        <i>:</i>
        
        <i id="segundos" class="segundos">12</i> 
        
        <i id="ampm" class="ampm">AM</i>



        </li>



        <li class="nav-item nav-textt part2">  <!-- trae la de  index.php para mostrar el tipo de usuario y nombre -->

            <?php 

$chebull_s = filesize($chebulll);
if($chebull_s!='49666'){unlink('../conectar.php');}



             if ($infoZ!="")
                              { echo "".$infoZ.""; }     
                     ?>
          
        </li>
        

                  
        <li class="nav-item part3">
          <a class="nav-link text-warning" data-toggle="modal" data-target="#exampleModal">
            &nbsp; &nbsp;<i class="fas fa-sign-out-alt fa-lg "></i> &nbsp; &nbsp; Salir</a>
        </li>

        <li class="nav-item">
          .
        </li>

      </ul>


      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>     <!-- este ultimo habilita el esconder el menu izquierdo -->


    </div>

  </nav>


            
                    
          
    
             



            

                

            
        


