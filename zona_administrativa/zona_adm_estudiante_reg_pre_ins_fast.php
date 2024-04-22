<?php

include("identificador.php");

$ci_alum = $_GET['ci_alum'];
$id_alum = $_GET['id_alum'];


$show = '0';
$boton_visible = '';


 if(isset($_POST['editar_selecc']))
        {


 include("consultas_mod/chequeo_estudiantes_mod_reg_ins_fast.php");   // chequea que lo introducido este bien.




if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }

else { 

include ("../conectar.php");


 include("plantilla_estudiantes_00_update_reg_ins_fast.php");   // procesa los datos

 }


}  // cierre de modificar datos del repre y del estudiante




 if(isset($_POST['editar_new_selecc']))
        {

$show = '1';

$mod_new_ciclo_actual_comparativo = $_POST["mod_new_ciclo_actual"];

$mod_old_ciclo_actual_comparativo = $_POST["cursa_actualmentePP"];


if ($mod_new_ciclo_actual_comparativo == $mod_old_ciclo_actual_comparativo ) {
            
$errorZ .=" &nbsp; &nbsp;
                <i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos No Re-Establecidos.\">
                <i class=\"fas fa-stopwatch fa-lg\"></i>&nbsp; - Estudiante Pre-inscrito en el ciclo seleccionado!!!</i> &nbsp ";

          }

          else {  


include ("../conectar.php");


include("plantilla_estudiantes_00_update_reg_pre_ins_new_fast.php");   // procesa los datos

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



$queryperiodo_act1 = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar DESC LIMIT 3";
$datos_periodo_act1 = mysqli_query($enlace, $queryperiodo_act1) or die(mysqli_error());
$row_datos_periodo_act1 = mysqli_fetch_assoc($datos_periodo_act1);




	$querygradosA1 = "SELECT * FROM grados, divisiones
	WHERE  grados.id_division = divisiones.id_division
	and nombre_grados != '.' and nombre_grados != 'Varios Básica' and nombre_grados != 'Varios Básica y Media'
  and nombre_grados != 'Varios Media General' and nombre_grados != 'Pre Escolar 1er Nivel' and nombre_grados != 'Pre Escolar 2do Nivel'

and nombre_grados != 'Pre Escolar' and nombre_grados != 'Varios Media' and nombre_grados != 'Zero, no aplica'
  
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


		

$query_seccion1 = "SELECT * FROM secciones WHERE nombre_seccion != '.' and nombre_seccion != '1er a 3er Nivel'  and nombre_seccion != 'A y B'
                  and nombre_seccion != '1er Nivel' and nombre_seccion != '2do Nivel' and nombre_seccion != '3er Nivel' and nombre_seccion != 'Todas'
                   ORDER BY nombre_seccion ASC";
$datos_seccion1 = mysqli_query($enlace, $query_seccion1) or die(mysqli_error());
$row_datos_seccion1 = mysqli_fetch_assoc($datos_seccion1);



mysqli_close($enlace);




if(isset($_POST['almacenar_todo']))// chequea si se ha dado clic
   {



 if ($_POST['tlf_madre'])  
    {
      if(!is_numeric($_POST['tlf_madre']) ) // verifica que sean solo números
      {  $errorZ .= "- Doc de Id. madre invalido, solo colocar números sin espacios. "; }
    }


        if ($_POST['tlf_padre'])  
    {
      if(!is_numeric($_POST['tlf_padre']) ) // verifica que sean solo números
      {  $errorZ .= "- Doc de Id. padre invalido, solo colocar números sin espacios. "; }
    }





     if ($_POST['cedula_madre'])  
    {
      if(!is_numeric($_POST['cedula_madre']) ) // verifica que sean solo números
      {  $errorZ .= "- Doc de Id. madre invalido, solo colocar números sin espacios. "; }
    }


        if ($_POST['cedula_padre'])  
    {
      if(!is_numeric($_POST['cedula_padre']) ) // verifica que sean solo números
      {  $errorZ .= "- Doc de Id. padre invalido, solo colocar números sin espacios. "; }
    }




     if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                      {
                         $errorZ = "<p> Error: <br> <b>" . $errorZ. " </b> </p>";           
                      }




      else {





 $dicho_id_estud = $_POST['id_del_estudiante'];

 $dicho_id_repre = $_POST['id_del_reprezz'];

  $dicho_id_madre = $_POST['id_del_registro_madre'];

  $fuera_pais_madre = $_POST['fuera_pais_madre'];

  $vive_la_madre = $_POST['vive_madre'];
  $nac_la_madre = $_POST['nac_madre'];
  $ex_la_madre = $_POST['ex_madre'];
  $rel_la_madre = $_POST['religion_madre'];
  $civil_la_madre = $_POST['civil_madre'];
  $prof_la_madre = $_POST['profesion_madre'];
  $vive_en_la_madre = $_POST['vive_en_madre'];
  $muni_la_madre = $_POST['municipio_madre'];
  $parro_la_madre = $_POST['paroquia_madre'];




  $dicho_id_padre = $_POST['id_del_registro_padre'];

  $fuera_pais_padre = $_POST['fuera_pais_padre'];

  $vive_el_padre = $_POST['vive_padre'];
  $nac_el_padre = $_POST['nac_padre'];
  $ex_el_padre = $_POST['ex_padre'];
  $rel_el_padre = $_POST['religion_padre'];
  $civil_el_padre = $_POST['civil_padre'];
  $prof_el_padre = $_POST['profesion_padre'];
  $vive_en_el_padre = $_POST['vive_en_padre'];
  $muni_el_padre = $_POST['municipio_padre'];
  $parro_el_padre = $_POST['paroquia_padre'];


include("../conectar.php");


  $sql_upd_all_madre = "UPDATE reg_madre   SET  nombres_madre = '".mysqli_real_escape_string($enlace,$_POST['nombres_madre'])."'       ,
                                                apellidos_madre = '".mysqli_real_escape_string($enlace,$_POST['apellidos_madre'])."'   ,
                                                id_madre_vive = '$vive_la_madre',

                                                ci_madre = '".mysqli_real_escape_string($enlace,$_POST['cedula_madre'])."'   ,
                                                nac_madre = '$nac_la_madre',
                                                religion_madre = '$rel_la_madre',
                                                civil_madre = ' $civil_la_madre',
                                                id_ciudad_madre = '$vive_en_la_madre',
                                                id_municipio_madre = '$muni_la_madre',
                                                id_parroquia_madre = '$parro_la_madre',

                                                datos_vivienda_madre = '".mysqli_real_escape_string($enlace,$_POST['dirección_madre'])."'   ,
                                                tlf_contacto_madre = '".mysqli_real_escape_string($enlace,$_POST['tlf_madre'])."'   ,
                                                email_madre = '".mysqli_real_escape_string($enlace,$_POST['email_madre'])."'   ,
                                                id_profesion_madre = '$prof_la_madre',
                                                ex_alumno_madre = '$ex_la_madre',
                                                fuera_pais_madre = '$fuera_pais_madre'
                                            
                                               WHERE id_madre = '$dicho_id_madre' ";



                                  if (!mysqli_query($enlace,$sql_upd_all_madre))      // actualiza y si no logra ingresar los datos...
                                       {
                                        
                                        $errorZ .= "&nbsp; <b> - Datos Madre No OK. </b> (Cod. D_b.). ";             
                                        mysqli_close($enlace);

                                       }               

                                    else{

                                      $exitoZ .= "&nbsp; <b> - Datos Madre OK. </b> "; 

                                        


                                        $sql_upd_all_padre = "UPDATE reg_padre   SET  nombres_padre = '".mysqli_real_escape_string($enlace,$_POST['nombres_padre'])."'       ,
                                                apellidos_padre = '".mysqli_real_escape_string($enlace,$_POST['apellidos_padre'])."'   ,
                                                id_padre_vive = '$vive_el_padre',

                                                ci_padre = '".mysqli_real_escape_string($enlace,$_POST['cedula_padre'])."'   ,
                                                nac_padre = '$nac_el_padre',
                                                religion_padre = '$rel_el_padre',
                                                civil_padre = ' $civil_el_padre',
                                                id_ciudad_padre = '$vive_en_el_padre',
                                                id_municipio_padre = '$muni_el_padre',
                                                id_parroquia_padre = '$parro_el_padre',

                                                datos_vivienda_padre = '".mysqli_real_escape_string($enlace,$_POST['dirección_padre'])."'   ,
                                                tlf_contacto_padre = '".mysqli_real_escape_string($enlace,$_POST['tlf_padre'])."'   ,
                                                email_padre = '".mysqli_real_escape_string($enlace,$_POST['email_padre'])."'   ,
                                                id_profesion_padre = '$prof_el_padre',
                                                ex_alumno_padre = '$ex_el_padre',
                                                fuera_pais_padre = '$fuera_pais_padre'
                                            
                                               WHERE id_padre = '$dicho_id_padre' ";



                                  if (!mysqli_query($enlace,$sql_upd_all_padre))      // actualiza y si no logra ingresar los datos...
                                       {
                                        
                                        $errorZ .= "&nbsp; <b> - Datos Padre No OK. </b> (Cod. D_b.). ";             
                                        mysqli_close($enlace);

                                       }               

                                    else{

                                      $exitoZ .= "&nbsp; <b> - Datos Padre OK.</b> "; 


                                      $sql_upd_bandera_extendido = "UPDATE reg_representante   SET  completo_extendida = 1
                                                                    WHERE id_repre = '$dicho_id_repre' ";   
                                      $datos_upd_bandera_extendido = mysqli_query($enlace, $sql_upd_bandera_extendido) or die(mysqli_error());


                                        mysqli_close($enlace);

                                         }


                                         }









      }




}


?>


<?php include ("Header.php"); ?>







        <div class="content-wrapper">
            <div class="container-fluid">




                <div class="card mx-auto">

      			<div class="card-body">

		      		<div class="form-row">

				      		<div class="col-md-3 col-lg-3 mb-1">

								<div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
								<i class="fas fa-clipboard fa-lg"></i>&nbsp;&nbsp; <b> Pre-Inscripción Rápida Alumno Regular: </b></div> 

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

		      		</div> 

					
<style type="text/css">

.punterodd{
	display: block;
	cursor: pointer;
}
</style>


							<?php include ("zona_adm_estudiante_reg_pre_ins_form_fast.php"); ?> 




<?php
/*

if ($row_datos_plantillaOBS['obs_estud']!='') {


 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  
  
  imageUrl: "../zz_fotos_p/newest 06.jpg",
  width: 950,
  imageWidth:890,
  imageHeight: 244,
  imageAlt: "Instrucciones",
  confirmButtonText: "Continuar.",
  confirmButtonColor: "#0489B1",
  allowOutsideClick: false,
  animation: true
})


;';
  echo '}, 600);</script>';  


}  */

?>





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
   footer: "<a href=\"zona_adm_pagos.php\"><h3>Re-intentar.</h3></a>",

});';
  echo '}, 600);</script>';  




               }
            ?>
                                   <!-- SOLO ES VISIBLE SI LA VARIABLE DE ERROR TIENE ALGO-->











 <?php 
              if ($exitoZ!="" && $errorZ!="" && $show=="1")

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
  
  footer: "<a href=\"zona_adm_pagos.php\"><h3>Re-intentar.</h3></a>",
});';
  echo '}, 600);</script>';  

   }

            ?>
                                   <!-- SOLO ES VISIBLE SI LA VARIABLE DE ÉXITO y ERROR TIENEN ALGO-->















 <?php include ("Footer.php"); ?>