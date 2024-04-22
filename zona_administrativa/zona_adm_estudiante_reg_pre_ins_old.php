<?php

include("identificador.php");

$ci_alum = $_GET['ci_alum'];
$id_alum = $_GET['id_alum'];






 if(isset($_POST['editar_selecc']))
        {


 include("consultas_mod/chequeo_estudiantes_mod_reg_ins.php");   // chequea que lo introducido este bien.




if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }

else { 

include ("../conectar.php");


 include("plantilla_estudiantes_00_update_reg_ins.php");   // procesa los datos

 }


}  // cierre de modificar datos del repre y del estudiante




 if(isset($_POST['editar_new_selecc']))
        {

$mod_new_ciclo_actual_comparativo = $_POST["mod_new_ciclo_actual"];

$mod_old_ciclo_actual_comparativo = $_POST["cursa_actualmentePP"];


if ($mod_new_ciclo_actual_comparativo == $mod_old_ciclo_actual_comparativo ) {
            
$errorZ .=" &nbsp; &nbsp;
                <i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos No Re-Establecidos.\">
                <i class=\"fas fa-stopwatch fa-lg\"></i>&nbsp; - Estudiante Pre-inscrito en el ciclo seleccionado!!!</i> &nbsp ";

          }

          else {  


include ("../conectar.php");


include("plantilla_estudiantes_00_update_reg_pre_ins_new.php");   // procesa los datos

}


}  // cierre de modificar datos del repre y del estudiante









include ("../conectar.php");

/******* ojo hay q colocar que tiene q ser el activo  *****/

$query = "SELECT * FROM reg_estu_repre_all, reg_representante, reg_estu_actual, divisiones, grados, reg_estudiantes 

         WHERE  reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = reg_estudiantes.id_estud

         and divisiones.id_division = grados.id_division
         and reg_estu_actual.id_estud = reg_estudiantes.id_estud
         and grados.id_grado = reg_estu_actual.grado_actual
        /* and  el_activo = '1' */
         and  reg_estudiantes.id_estud = '$id_alum'
        
         LIMIT 1 ";

$datos_estudiantes = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_estudiantes = mysqli_fetch_assoc($datos_estudiantes); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);



		$queryperiodo_actual = "SELECT * FROM temporada_escolar WHERE  next = '8' and periodo_escolar != '.' LIMIT 1 ";
		$datos_periodo_actual = mysqli_query($enlace, $queryperiodo_actual) or die(mysqli_error());
		$row_datos_periodo_actual = mysqli_fetch_assoc($datos_periodo_actual);


		$queryperiodo_viejo = "SELECT * FROM temporada_escolar WHERE  status = '1' and periodo_escolar != '.' LIMIT 1 ";
		$datos_periodo_viejo = mysqli_query($enlace, $queryperiodo_viejo) or die(mysqli_error());
		$row_datos_periodo_viejo = mysqli_fetch_assoc($datos_periodo_viejo);



$queryperiodo_act1 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar ASC";
$datos_periodo_act1 = mysqli_query($enlace, $queryperiodo_act1) or die(mysqli_error());
$row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1);




	$querygradosA1 = "SELECT * FROM grados, divisiones
	WHERE  grados.id_division = divisiones.id_division
	and nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
  and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'
  and nombre_grados != 'Pre Escolar 3er Nivel' and nombre_grados != 'Educación Inicial' and nombre_grados != '1er y 2do Año'
  and nombre_grados != '3er y 4to Año' and nombre_grados != '4to y 5to Año' and nombre_grados != '2do y 3er Año'
   and nombre_grados != 'Todos' ORDER BY nombre_division ASC";

	$datos_gradosA1 = mysqli_query($enlace, $querygradosA1) or die(mysqli_error());

	$row_datos_gradosA1 = mysqli_fetch_assoc($datos_gradosA1);



$query_edad1 = "SELECT * FROM edades ORDER BY nombre_edad ASC";
$datos_edad1 = mysqli_query($enlace, $query_edad1) or die(mysqli_error());
$row_datos_edad1 = mysqli_fetch_assoc($datos_edad1);



		$query_camisas1 = "SELECT * FROM tall_cam ORDER BY talla_camisa ASC";
		$datos_camisas1 = mysqli_query($enlace, $query_camisas1) or die(mysqli_error());
		$row_datos_camisas1 = mysqli_fetch_assoc($datos_camisas1);



$query_pantalon1 = "SELECT * FROM tall_pant ORDER BY nombre_pantalon ASC";
$datos_pantalon1 = mysqli_query($enlace, $query_pantalon1) or die(mysqli_error());
$row_datos_pantalon1 = mysqli_fetch_assoc($datos_pantalon1);



	    $query_zapatos1 = "SELECT * FROM tall_zap ORDER BY talla_zapato ASC";
		$datos_zapatos1 = mysqli_query($enlace, $query_zapatos1) or die(mysqli_error());
		$row_datos_zapatos1 = mysqli_fetch_assoc($datos_zapatos1);



$query_peso1 = "SELECT * FROM pesos ORDER BY nombre_peso ASC";
$datos_peso1 = mysqli_query($enlace, $query_peso1) or die(mysqli_error());
$row_datos_peso1 = mysqli_fetch_assoc($datos_peso1);



	    $query_altura1 = "SELECT * FROM alturas ORDER BY nombre_altura ASC";
		$datos_altura1 = mysqli_query($enlace, $query_altura1) or die(mysqli_error());
		$row_datos_altura1 = mysqli_fetch_assoc($datos_altura1);


		

$query_seccion1 = "SELECT * FROM secciones WHERE nombre_seccion != '.'
and nombre_seccion != '1er a 3er Nivel' and nombre_seccion != 'A y B' ORDER BY nombre_seccion ASC";
$datos_seccion1 = mysqli_query($enlace, $query_seccion1) or die(mysqli_error());
$row_datos_seccion1 = mysqli_fetch_assoc($datos_seccion1);



mysqli_close($enlace);





?>


<?php include ("Header.php"); ?>







        <div class="content-wrapper">
            <div class="container-fluid">




                <div class="card mx-auto">

      			<div class="card-body">

		      		<div class="form-row">

				      		<div class="col-md-3 col-lg-3 mb-1">

								<div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
								<i class="fas fa-clipboard fa-lg"></i>&nbsp;&nbsp; <b> Pre-Inscripción Alumno Regular: </b></div> 

							</div> 


							<div class="col-md-9 col-lg-9 mb-3">
							

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

		      		</div> <br>

					
<style type="text/css">

.punterodd{
	display: block;
	cursor: pointer;
}
</style>


							<?php include ("zona_adm_estudiante_reg_pre_ins_form.php"); ?> 







								</div>   <!-- cierre cardbody -->
							    </div>   <!-- cierre card -->







            </div> <!-- cierre container fluid -->
        </div> <!-- cierre content wrapper -->









 <?php 
              if ($errorZ!="" && $exitoZ=="" )
              { 

echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  type: "error",
  title: "Pre-Inscripción Fallida!",
  text: "Intente nuevamente, de persistir... contacte al Ing.",
  allowOutsideClick: false,
  allowEscapeKey: false,
  allowEnterKey: false,
  showConfirmButton: false,
   footer: "<a href=\"zona_adm_control.php\"><h3>Re-intentar.</h3></a>",

});';
  echo '}, 600);</script>';  




               }
            ?>
                                   <!-- SOLO ES VISIBLE SI LA VARIABLE DE ERROR TIENE ALGO-->




            <?php 
              if ($exitoZ!="" && $errorZ=="")

{ 

 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  type: "success",
  title: "Pre-Inscripción Realizada Correctamente!",
  allowOutsideClick: false,
  allowEscapeKey: false,
  allowEnterKey: false,

  showConfirmButton: false,
  
  footer: "<a href=\"zona_adm_control.php\"><h3>Continuar.</h3></a>",
});';
  echo '}, 600);</script>';  

   }

            ?>
                                   <!-- SOLO ES VISIBLE SI LA VARIABLE DE ÉXITO TIENE ALGO-->






 <?php 
              if ($exitoZ!="" && $errorZ!="")

{ 

 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  type: "warning",
  title: "Pre-Inscripción Fallida!",
  text: "Intente nuevamente, de persistir... contacte al Ing.",
  allowOutsideClick: false,
  allowEscapeKey: false,
  allowEnterKey: false,

  showConfirmButton: false,
  
  footer: "<a href=\"zona_adm_control.php\"><h3>Re-intentar.</h3></a>",
});';
  echo '}, 600);</script>';  

   }

            ?>
                                   <!-- SOLO ES VISIBLE SI LA VARIABLE DE ÉXITO y ERROR TIENEN ALGO-->















 <?php include ("Footer.php"); ?>