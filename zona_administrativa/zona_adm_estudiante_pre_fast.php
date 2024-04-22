<?php


include("identificador.php");

 
$fotPP = $nnn['ci'];

$mostrar_form = '';

$filenameAA = '../0 Croppie/fotorepre' .$fotPP. '.png';
$filenameCC = '../0 Croppie/ci_repre' .$fotPP. '.png';



if(isset($_POST['borrar_nn_f']))
{
$alerta_principal = "2";

if (file_exists($filenameAA )) { 
unlink($filenameAA);    
  }

 if (file_exists($filenameCC )) { 
unlink($filenameCC);    
  }
}





if(isset($_POST['cancelWW']))
    {

$alerta_principal = "2";

if (file_exists($filenameAA )) { 
unlink($filenameAA);

  }

}




 if(isset($_POST['cancelYY']))
    {

$alerta_principal = "2";

if (file_exists($filenameCC )) { 
unlink($filenameCC);

    }

}



$filenameEA = '../0 Croppie/foto_estu1' .$fotPP. '.png';
$filenameEB = '../0 Croppie/foto_estu2' .$fotPP. '.png';
$filenameEC = '../0 Croppie/foto_estu3' .$fotPP. '.png';
$filenameED = '../0 Croppie/foto_estu4' .$fotPP. '.png';
$filenameEE = '../0 Croppie/foto_estu5' .$fotPP. '.png';




$filenameE_act1 = '../0 Croppie/ci_est_act1' .$fotPP. '.png';
$filenameE_act2 = '../0 Croppie/ci_est_act2' .$fotPP. '.png';
$filenameE_act3 = '../0 Croppie/ci_est_act3' .$fotPP. '.png';





if(isset($_POST['cancelAA']))
    {

$alerta_principal = "2";

if (file_exists($filenameEA )) { 
unlink($filenameEA);
  }

}




if(isset($_POST['borrar_nn_aaa']))
{
$alerta_principal = "2";

if (file_exists($filenameEA )) { 
unlink($filenameEA);    
  } 


 if (file_exists($filenameE_act1 )) { 
unlink($filenameE_act1);    
  }

}


if(isset($_POST['borrar_nn_bbb']))
{
$alerta_principal = "2";

if (file_exists($filenameEB )) { 
unlink($filenameEB);    
  } 


   if (file_exists($filenameE_act2 )) { 
unlink($filenameE_act2);    
  }


}

if(isset($_POST['borrar_nn_ccc']))
{
$alerta_principal = "2";

if (file_exists($filenameEC )) { 
unlink($filenameEC);    
  } 


   if (file_exists($filenameE_act3 )) { 
unlink($filenameE_act3);    
  }


}

if(isset($_POST['borrar_nn_ddd']))
{
$alerta_principal = "2";

if (file_exists($filenameED )) { 
unlink($filenameED);    
  } 
}

if(isset($_POST['borrar_nn_eee']))
{
$alerta_principal = "2";

if (file_exists($filenameEE )) { 
unlink($filenameEE);    
  } 
}







if(isset($_POST['cancelBB']))
    {

$alerta_principal = "2";

if (file_exists($filenameEB )) { 
unlink($filenameEB);
  }

}


if(isset($_POST['cancelCC']))
    {

$alerta_principal = "2";

if (file_exists($filenameEC )) { 
unlink($filenameEC);
  }

}


if(isset($_POST['cancelDD']))
    {

$alerta_principal = "2";

if (file_exists($filenameED )) { 
unlink($filenameED);
  }

}



if(isset($_POST['cancelEE']))
    {

$alerta_principal = "2";

if (file_exists($filenameEE )) { 
unlink($filenameEE);
  }

}





$number_alum = $_GET['num_alum'];


    if($number_alum == '1' )
        /* me permite tener visible el 1  */
    {
        $gdiv1 = "display:show";
        $gdiv2 = "display:none";
        $gdiv3 = "display:none";
        $gdiv4 = "display:none";
        $gdiv5 = "display:none";


        $requerido2 = "" ;
        $requerido3 = "" ;
        $requerido4 = "" ;
        $requerido5 = "" ; 
    }


    if($number_alum == '2' )
        /* me permite tener visible el 1 y el 2 */
    {
        $gdiv1 = "display:show";
        $gdiv2 = "display:show";
        $gdiv3 = "display:none";
        $gdiv4 = "display:none";
        $gdiv5 = "display:none";

        $requerido2 = "required" ;
        $requerido3 = "" ;
        $requerido4 = "" ;
        $requerido5 = "" ;
    }


    if($number_alum == '3' )
        /* me permite tener visible del 1 al 3 */
    {
        $gdiv1 = "display:show";
        $gdiv2 = "display:show";
        $gdiv3 = "display:show";
        $gdiv4 = "display:none";
        $gdiv5 = "display:none";


        $requerido2 = "required" ;
        $requerido3 = "required" ;
        $requerido4 = "" ;
        $requerido5 = "" ; 
    }


    if($number_alum == '4' )
        /* me permite tener visible del 1 al 4 */
    {
        $gdiv1 = "display:show";
        $gdiv2 = "display:show";
        $gdiv3 = "display:show";
        $gdiv4 = "display:show";
        $gdiv5 = "display:none"; 


        $requerido2 = "required" ;
        $requerido3 = "required" ;
        $requerido4 = "required" ;
        $requerido5 = "" ; 
    }


    if($number_alum == '5' )
        /* me permite tener visible del 1 al 5 */
    {
        $gdiv1 = "display:show";
        $gdiv2 = "display:show";
        $gdiv3 = "display:show";
        $gdiv4 = "display:show";
        $gdiv5 = "display:show"; 


        $requerido2 = "required" ;
        $requerido3 = "required" ;
        $requerido4 = "required" ;
        $requerido5 = "required" ; 
    }








$alerta_principal  = "0";

	$enviado=""; // me dice si  probablemente se envio o no el email
	$sms="";
	$reg="";     // para ayudarme a saber si se realizo el guardado alterno de los datos
	$doc="";     // para indicarme si los datos se guardaron en pdf o doc

 

// referente al representante

    $direcc_success=""; // notificador del proceso de insercion de direccion
    $direcc_danger=""; // notificador del proceso de insercion de direccion

    $datos_success="";
    $datos_danger="";

//****
    

    $datosES1_success="";
    $datosES1_danger="";
	    $datosES2_success="";
	    $datosES2_danger="";  
    $datosES3_success="";
    $datosES3_danger="";  
	    $datosES4_success="";
	    $datosES4_danger="";  
    $datosES5_success="";
    $datosES5_danger="";     



$datosES1_repre_success="";
$datosES1_repre_danger="";
	$datosES2_repre_success="";
	$datosES2_repre_danger="";
$datosES3_repre_success="";
$datosES3_repre_danger="";
	$datosES4_repre_success="";
	$datosES4_repre_danger="";
$datosES5_repre_success="";
$datosES5_repre_danger="";






    $procede_success1="";
    $procede_danger1="";
	    $procede_success2="";
	    $procede_danger2="";
    $procede_success3="";
    $procede_danger3="";
	    $procede_success4="";
	    $procede_danger4="";
    $procede_success5="";
    $procede_danger5="";


    $actua_success1="";
    $actua_danger1="";
	    $actua_success2="";
	    $actua_danger2="";
    $actua_success3="";
    $actua_danger3="";
	    $actua_success4="";
	    $actua_danger4="";
    $actua_success5="";
    $actua_danger5="";


     $obs_success1='';
     $obs_danger1='';
	     $obs_success2='';
	     $obs_danger2='';
     $obs_success3='';
     $obs_danger3='';
	     $obs_success4='';
	     $obs_danger4='';
     $obs_success5='';
     $obs_danger5='';




    $quien_success="";
    $quien_danger="";

    
// referente al cargo de foto y cedula representante...

    $foto_success="";
    $foto_danger="";

    $ci_success="";
    $ci_danger="";



    $ci_info ="1";
    $foto_info="1";



    $foto_estu1_info="1";
    $foto_estu2_info="1";
    $foto_estu3_info="1";
    $foto_estu4_info="1";
    $foto_estu5_info="1";


    $ci_estu1_info="1";
    $ci_estu2_info="1";
    $ci_estu3_info="1";
    $ci_estu4_info="1";
    $ci_estu5_info="1";

    
   
   $foto_successA="";
    $foto_dangerA="";

   $ci_success_act1="";
    $ci_danger_act1="";

   $foto_successB="";
    $foto_dangerB="";

    $ci_success_act2="";
    $ci_danger_act2="";

   $foto_successC="";
    $foto_dangerC="";

   $ci_success_act3="";
    $ci_danger_act3="";

   $foto_successD="";
    $foto_dangerD="";

   $foto_successE="";
    $foto_dangerE="";

    


$act_hist_ES1_success="";
$act_hist_ES1_danger="";
$act_hist_ES2_success="";
$act_hist_ES2_danger="";
$act_hist_ES3_success="";
$act_hist_ES3_danger="";
$act_hist_ES4_success="";
$act_hist_ES4_danger="";
$act_hist_ES5_success="";
$act_hist_ES5_danger="";


$conteo_errorAr = "0";
$conteo_errorBr = "0";



$conteo_errorA = "0";
$conteo_errorB = "0";
$conteo_errorC = "0";
$conteo_errorD = "0";
$conteo_errorE = "0";



$conteo_progresoA = "0";
$conteo_progresoB = "0";
$conteo_progresoC = "0";
$conteo_progresoD = "0";
$conteo_progresoE = "0";




// empieza la insercion de los datos del form...

if(isset($_POST['registrar_alumnos']))  // chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba

{

include("../conectar.php"); 

include("consultas_add/chequeo_estudiantes_add_fast.php");   // chequea que lo introducido este bien.

mysqli_close($enlace); 

$alerta_principal = "2";


	if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
	{
			$errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";			           
	}



else {   // registro preliminar ok






	
		     //  verifica si la ci ya está registrada en la BD...

	include("../conectar.php"); 		 


	$queryC = "SELECT ci_repre FROM reg_representante WHERE ci_repre ='".mysqli_real_escape_string($enlace,$_POST['cedula'])."' LIMIT 1";

	$resultC = mysqli_query($enlace,$queryC);

			if (mysqli_num_rows($resultC)>0)
			{
			$errorZ="- Cedula del representante anteriormente registrada. ";
			mysqli_close($enlace); 
			}


			else  // Entra aqui solo si la ci no esta registrada....
			{
		//  $errorZ="- Ni el email ni la ci estaban registrados. ";
			
			$ciudad = $_POST["ciudad"];
			$municipio = $_POST["municipio"];
			$parroquia = $_POST["parroquia"];
			$avenida = $_POST["avenida"];


			$codigo = '12';
			$vivienda = '7';
			$piso = '1';
			$numero = '2';
			$calle = 'actualizar';
			$nombre_vi = 'actualizar';
			
			
								 
/*   solo para comprobar que se ha introducido en el form...
 $errorZ="- datos recogidos son " .$nacimiento. " . " .$ciudad. " . " .$municipio. " . " .$parroquia. " . " .$avenida. "
                              . " .$codigo. " . " .$vivienda. " . " .$piso. " . " .$numero. " . " .$calle. " . " .$nombre_vi. " ";  */
            
            // proceso de insercion y creacion del id de la tabla direcciones.

			$query_d = "INSERT INTO direcciones(dir_calle_sector, dir_nombre_vivienda, id_ciudad, id_municipio,
			                                    id_parroquia, id_avenida, id_codigo, id_vivienda, id_piso, id_numero) 

							VALUES (   'actualizar'            ,
									   'actualizar'        ,

										'$ciudad', '$municipio', '$parroquia', '$avenida', '$codigo',
										'$vivienda', '$piso', '$numero')";


			if (!mysqli_query($enlace,$query_d))  // si no logro ingresar la direccion...
			{
			$direcc_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de direcc

			$errorZ="- Se han suscitado diversos errores, consulte las alertas visuales y contacte al administrador. ";


			mysqli_close($enlace); 
			}


            else
            {       //  guardo la direccion por tanto ahora guardo los datos personales...

            $direcc_success="<i class=\"fas fa-check-circle fa-lg\"></i>";  // coloca success al lado de direcc
            $direcc_id = mysqli_insert_id($enlace);  // almacena el id insertado en el query pasado direcc.


            $civilx = '10';
			$parentescox = $_POST["parentesco"];
			$profesionx = '83';          

            $nacimiento = $_POST["fecha_nac"];
			$sexo = $_POST["genero"];
			$paisx = '36';
            $num_cedula = mysqli_real_escape_string($enlace,$_POST['cedula']);
            $emailx =  mysqli_real_escape_string($enlace,$_POST['email']);

            $cursa_est1 = $_POST["cursa_est1"];


$query_p = "INSERT INTO reg_representante(ci_repre, nombre_repre, apellido_repre, nacimiento_repre, celular_repre,
	telefono_repre, email_repre,  id_direccion, id_sexo, id_pais, id_parentesco, id_profesion, id_estado_civil, en_el_periodo, pre_ins_si_o_no, clave_repre, pre_ins_nuev_si_o_no)  

			VALUES ('".mysqli_real_escape_string($enlace,$_POST['cedula'])."'         ,
					'".mysqli_real_escape_string($enlace,$_POST['nombres'])."'        ,
					'".mysqli_real_escape_string($enlace,$_POST['apellidos'])."'      ,
					'$nacimiento',

					'".mysqli_real_escape_string($enlace,$_POST['telefono1'])."'      ,
					'0'      ,
					'$emailx',				
								                  
					 '$direcc_id', '$sexo', '$paisx', '$parentescox', '$profesionx', '$civilx', '$cursa_est1', '1', '".mysqli_real_escape_string($enlace,$_POST['cedula'])."', '1')"; 


			if (!mysqli_query($enlace,$query_p))      // si no ha logrado ingresar los datos
			{
			$datos_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // coloca danger al lado de datos personales.	
			$errorZ="- Se han suscitado diversos errores, consulte las alertas visuales y contacte al administrador. ";




			// secuencia que borra la direccion del repre


								$sqlAAAA = "DELETE FROM direcciones WHERE id_direccion = '$direcc_id' "; 

								if (mysqli_query($enlace,$sqlAAAA))  // si no logro crear al representante borro la direccion.
								{ 									   
								$errorZ.="- &nbsp; Reg Dir Repre Clear!!! &nbsp ";
								$conteo_errorAr = "1";
								}
								else {$errorZ.="- &nbsp; Reg Dir Repre Not-Clear!!! &nbsp ";}






			mysqli_close($enlace);
			}
        

			else
			{                                   //  exito al guardar los datos

			$repre_id = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado personal...




			$quien = $_POST["quien"];

			// almacenar quien y cuando

			$query_qRW = "INSERT INTO quien_y_cuando_repre(id_quien, id_repre)

			VALUES ('$quien', '$repre_id')"; 


			if (!mysqli_query($enlace,$query_qRW))      // si no ha logrado ingresar los datos
				{
				$errorZ="- Error quien y cuando (REP), contactar al Ing.";


				// secuencia que borra la direccion del repre y al repre


								$sqlBBB = "DELETE FROM reg_representante WHERE id_repre = '$repre_id' "; 

								if (mysqli_query($enlace,$sqlBBB))  // si no logro crear al representante borro la direccion.
								{ 									   
								$errorZ.="- &nbsp; Reg Dir Repre Clear!!! &nbsp ";
								$conteo_errorBr = "1";
								}
								else {$errorZ.="- &nbsp; Reg Dir Repre Not-Clear!!! &nbsp ";}




								$sqlAAAA = "DELETE FROM direcciones WHERE id_direccion = '$direcc_id' "; 

								if (mysqli_query($enlace,$sqlAAAA))  // si no logro crear al representante borro la direccion.
								{ 									   
								$errorZ.="- &nbsp; Reg Dir Repre Clear!!! &nbsp ";
								$conteo_errorAr = "1";
								}
								else {$errorZ.="- &nbsp; Reg Dir Repre Not-Clear!!! &nbsp ";}




								



				mysqli_close($enlace);
				} 




// OJOOOOOOOOOOOO

				if ($conteo_errorAr == '0') {
			


			$datos_success="<i class=\"fas fa-check-circle fa-lg\"></i>"; // coloca success al lado de datos personales


			$exitoZ.="- &nbsp;
			<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Datos del representante guardados.\">
			 <i class=\"fas fa-user-tie fa-lg\"></i></i> &nbsp ";


															clearstatcache();
															$filename_repre = '../0 Croppie/fotorepre' .$fotPP. '.png';
															$foto_repre_info ="0";


															if (file_exists($filename_repre ))     // de haber una foto le cambia el nombre y la mueve a otro lugar
																		{
																			$foto_repre_info ="1";

																			$image_repre = imagecreatefrompng("../0 Croppie/fotorepre" .$fotPP.  ".png");  
																				           unlink("../0 Croppie/fotorepre" .$fotPP.  ".png");
																				           imagejpeg($image_repre,"../0 Croppie/fotorepre" .$fotPP.  ".png",90); // comprimer la imagen  
																					
																					$ext_repre = 'png';
																					
																					/* $newfilename = '../zz_fotos_l/logocropx.png'; */

											$newfilename_repre = "../zz_fotos_repre/".$repre_id."_".$num_cedula.".".$ext_repre;

																						if(rename($filename_repre,$newfilename_repre))
																		{	

															$query_foto_repre = "UPDATE reg_representante SET foto_repre = '$newfilename_repre' WHERE id_repre='$repre_id' LIMIT 1 ";					

																				if (!mysqli_query($enlace,$query_foto_repre))      // si no ha logrado ingresar la foto
																							   {

																			   $foto_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // ha fallado	
																			   $foto_repre_info ="0";
																			   unlink($newfilename_repre);

															                         
																							   }

																				else {
																				$foto_success="<i class=\"far fa-image fa-lg\"></i>";   // coloca success al lado de foto.

																				$exitoZ.="- &nbsp;
																				<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Foto del representante guardada.\">
																				 <i class=\"fas fa-camera fa-lg\"></i></i> &nbsp ";



																					}   
																		}

																			else{   // fallo al renombrar

																					 $foto_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";
																					 $foto_repre_info ="0";
																					  unlink($filename_repre);
															                         
																					}	

																		}	// cierre de que no hay foto.. ****************

																		else {


																				$exitoZ.="- &nbsp;
																				<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Foto del representante no guardada.\">
																				 <i class=\"fas fa-eye-slash fa-lg\"></i></i> &nbsp ";

																		}



															clearstatcache();
															$filename_repre_ci = '../0 Croppie/ci_repre' .$fotPP. '.png';
															$foto_repre_ci_info ="0";



															if (file_exists($filename_repre_ci ))     // de haber una ci le cambia el nombre y la mueve a otro lugar
																		{
																			$foto_repre_ci_info ="1";

																			$image_repre_ci = imagecreatefrompng("../0 Croppie/ci_repre" .$fotPP.  ".png");  
																				           unlink("../0 Croppie/ci_repre" .$fotPP.  ".png");
																				           imagejpeg($image_repre_ci,"../0 Croppie/ci_repre" .$fotPP.  ".png",90); // comprimer la imagen  
																					
																					$ext_repre_ci = 'png';
																					
																					/* $newfilename = '../zz_fotos_l/logocropx.png'; */

													$newfilename_repre_ci = "../zz_fotos_repre_ci/".$repre_id."_".$num_cedula.".".$ext_repre_ci;


																						if(rename($filename_repre_ci,$newfilename_repre_ci))
																		{	

															$query_foto_repre_ci = "UPDATE reg_representante SET foto_ci_repre = '$newfilename_repre_ci' WHERE id_repre='$repre_id' LIMIT 1 ";
																				
																				if (!mysqli_query($enlace,$query_foto_repre_ci))      // si no ha logrado ingresar la foto
																							   {

																			   $ci_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";  // ha fallado	
																			   $foto_repre_ci_info ="0";
																			   unlink($newfilename_repre_ci);
															                         
																							   }

																				else {
																				$ci_success="<i class=\"far fa-id-card fa-lg\"></i>";   // coloca success al lado de foto.

																				$exitoZ.="- &nbsp;
																				<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Documento del representante guardado.\">
																				 <i class=\"far fa-id-card fa-lg\"></i></i> &nbsp ";

																					}   
																		}
																			else{   // fallo al renombrar

																					 $ci_danger="<i class=\"fas fa-times-circle fa-lg\"></i>";
																					 $foto_repre_ci_info ="0";
																					 unlink($filename_repre_ci);
															                         
																					}	

																		}	// cierre de que no hay ci.. ****************


																		else {
																			$exitoZ.="- &nbsp;
																				<i data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Documento del representante no guardado.\">
																				 <i class=\"fas fa-user-alt-slash fa-lg\"></i></i> &nbsp ";
																		}


} // cierre if de ojo...


// independiente de que exista foto o documento de identidad procede a registrar a los estudiantes máx 5.




    if($number_alum == '1' && $conteo_errorA == '0' )       
    {
include ("zona_adm_estudiante_pre_AA_fast.php");
    }



        if($number_alum == '2' && $conteo_errorA == '0' )       
    {
include ("zona_adm_estudiante_pre_AA_fast.php");
include ("zona_adm_estudiante_pre_BB_fast.php");
    }




        if($number_alum == '3' && $conteo_errorA == '0' )       
    {
include ("zona_adm_estudiante_pre_AA_fast.php");
include ("zona_adm_estudiante_pre_BB_fast.php");
include ("zona_adm_estudiante_pre_CC_fast.php");
    }

/*
  if($number_alum == '4' && $conteo_errorA == '0' )       
    {
include ("zona_adm_estudiante_pre_AA.php");
include ("zona_adm_estudiante_pre_BB.php");
include ("zona_adm_estudiante_pre_CC.php");
include ("zona_adm_estudiante_pre_DD.php");
    }



      if($number_alum == '5' && $conteo_errorA == '0' )       
    {
include ("zona_adm_estudiante_pre_AA.php");
include ("zona_adm_estudiante_pre_BB.php");
include ("zona_adm_estudiante_pre_CC.php");
include ("zona_adm_estudiante_pre_DD.php");
include ("zona_adm_estudiante_pre_EE.php");
    }

*/

   
	    }   // cierre de que guardo los datos del representante con direccion...

	} // cierre de que guardo la direccion  y ahora procede a guardar los datos
					    

} // cierre del chequeo de la cedula


  } // cierre de la secuencia preliminar.

}  // cierre de que se envio algo

?>


<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("consultas_add/query_estudiante_pre.php"); ?>  <!-- hace los queries necesarios para los select del formulario -->





        <div class="content-wrapper">
            <div class="container-fluid">








                <div class="card mx-auto">

      			<div class="card-body">

		      		<div class="form-row">

				      		<div class="col-md-3 col-lg-3 mb-1">

								<div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
								<i class="fas fa-user fa-lg"></i>&nbsp;&nbsp; <b> Pre-Inscripción Rápida: </b></div> 

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

				
				        <div class="col-md-12" style="display: <?php echo $mostrar_form; ?> " >



				        	<div class="form-row">  <!-- datos nivel de estudio -->

						  		<div class="col-md-12 mt-2 mb-1">

						  		<b class="text-info"> Datos del Representante: </b>

						<?php 
				          if ($datos_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Registrados.\">".$datos_success."</i>"; }
				        ?>

				        <?php 
				          if ($datos_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"No registrados.\">".$datos_danger."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->


							    </div>

						  	</div>

<form method="POST" data-persist="garlic" data-expires="360"  name="preinscribir" onsubmit="return validateForm()">   <!-- permite enviar  -->


				        	<div class="form-row margencito">

					          <div class="input-group input-group-sm col-md-3 mb-2">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-file-alt">&nbsp;&nbsp;</i></span>  
										</div>
											<input maxlength="39" type="text" class="form-control  importantex" id="nombres" name="nombres" placeholder="Nombre(s)..." aria-label="nombres" aria-describedby="basic-addon1" required>
							  </div>

							  <div class="input-group input-group-sm col-md-3 mb-2">
					          <div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="far fa-file-alt"></i></span>  
										</div>
											<input maxlength="39" type="text" class="form-control  importantex" id="apellidos" name="apellidos" placeholder="Apellido(s)..." aria-label="nombres" aria-describedby="basic-addon1" required>
							  </div>


                             <div class="input-group input-group-sm col-md-3 mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="far fa-id-card "></i></span>  
                                    </div>
                                        <input maxlength="9" onkeydown="javascript:stripspaces(this)" type="text" class="form-control importantex" id="cedula" name="cedula" placeholder="Cedula..." aria-label="cedula" aria-describedby="basic-addon1" required>
                              </div>



                              <div class="input-group input-group-sm col-md-3 mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-venus-mars "></i></span>  
                                        </div>
                               
                                                <select class="form-control importantex" id="genero" name="genero" required>
                                                        
                                                        <option selected disabled value="">Sexo:</option>
                                                        <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_sexo['id_sexo']; ?>"><?php echo $row_datos_sexo['nombre_sexo']; ?></option>

                                <?php } while ($row_datos_sexo = mysqli_fetch_assoc($datos_sexo)); ?> 


                                                        
                                                </select>
                               
                               </div>

							



						  	</div>


						  	<div class="form-row">


                              <div class="input-group input-group-sm col-md-3 mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-birthday-cake "></i></span>  
                                    </div>
                                        <input type="date" class="form-control importantex" id="fecha_nac" name="fecha_nac" aria-label="fecha_nac" aria-describedby="basic-addon1" required>
                              </div>


							  <div class="input-group input-group-sm col-md-3 mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt "></i></span>  
									</div>
										<input maxlength="12" type="text" class="form-control  importantex" id="telefono1" name="telefono1" placeholder="Teléfono celular..." aria-label="telefono1" aria-describedby="basic-addon1" required>
							  </div>


                              <div class="input-group input-group-sm col-md-3 mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-universal-access "></i></span>  
                                        </div>
                               
                                                <select class="form-control importantex" id="parentesco" name="parentesco" required>
                                                        
                                                        <option selected disabled value="">Parentesco:</option>
                                                        <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_parentesco['id_parentesco']; ?>"><?php echo $row_datos_parentesco['nombre_parentesco']; ?></option>

                                <?php } while ($row_datos_parentesco = mysqli_fetch_assoc($datos_parentesco)); ?> 


                                                        
                                                </select>
                               
                               </div>


                                  <div class="input-group input-group-sm col-md-3 mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-at "></i></span>  
                                    </div>
                                        <input maxlength="39" type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico..." aria-label="email" aria-describedby="basic-addon1">
                              </div>


							


						  	</div>     <div>





						






						  	<div class="form-row">  <!-- datos nivel de estudio -->

						  		<div class="col-md-12 mt-2 mb-1">

						  		<b class="text-info"> Dirección: </b>

						<?php 
				          if ($direcc_success!="")
{ echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Datos almacenados.\">".$direcc_success."</i>"; }
				        ?>

				        <?php 
				          if ($direcc_danger!="")
{ echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Datos no almacenados.\">".$direcc_danger."</i>"; }
				        ?>
				            <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->


							    </div>

						  	</div>




						  	<div class="form-row margencito">

					         <div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-pin "></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="ciudad" name="ciudad" required>
							  							
							  							<option selected disabled value="">Ciudad:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_ciudades['id_ciudad']; ?>"><?php echo $row_datos_ciudades['nombre_ciudad']; ?></option>

                                <?php } while ($row_datos_ciudades = mysqli_fetch_assoc($datos_ciudades)); ?> 
													    
												</select>
							   
							   </div>





							   <div class="input-group input-group-sm col-md-3 mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="far fa-flag "></i></span>  
										</div>
							   
							      				<select class="form-control importantex" id="municipio" name="municipio" required>
							  							
							  							<option selected disabled value="">Municipio:</option>
							  							<option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_municipio['id_municipio']; ?>"><?php echo $row_datos_municipio['nombre_municipio']; ?></option>

                                <?php } while ($row_datos_municipio = mysqli_fetch_assoc($datos_municipio)); ?> 
													    
												</select>
							   
							   </div>




                               <div class="input-group  input-group-sm col-md-3 mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-arrow-circle-right "></i></span>  
                                        </div>
                               
                                                <select class="form-control importantex" id="parroquia" name="parroquia" required>
                                                        
                                                        <option selected disabled value="">Parroquia:</option>
                                                        <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_parroquias['id_parroquia']; ?>"><?php echo $row_datos_parroquias['nombre_parroquia']; ?></option>

                                <?php } while ($row_datos_parroquias = mysqli_fetch_assoc($datos_parroquias)); ?> 
                                                        
                                                </select>
                               
                               </div>


                                <div class="input-group input-group-sm col-md-3 mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-road "></i></span>  
                                        </div>
                               
                                                <select class="form-control importantex" id="avenida" name="avenida" required>
                                                        
                                                        <option selected disabled value="">Cerca y/o en la avenida:</option>
                                                        <option disabled></option>

                               <?php do{?>                                

<option value="<?php echo $row_datos_avenidas['id_avenida']; ?>"><?php echo $row_datos_avenidas['nombre_av']; ?></option>

                                <?php } while ($row_datos_avenidas = mysqli_fetch_assoc($datos_avenidas)); ?> 
                                                        
                                                </select>
                               
                               </div>


							  
			   	

						  	</div>   <!-- cierre form direccion1 row -->


















				</div>  <!-- cierre col 9 -->
					

				 </div>  <!-- cierre form row, que encierra el col 3 y col 9 -->




<!-- representado 1 --> <div style="display: <?php echo $mostrar_form; ?> "  >
<div class="col-md-12 mt-3 mb-2 content-box-gray rounded ">

 <?php include ("zona_adm_estudiante_pre_1_fast.php"); ?>

</div> <!-- cierre border -->

<!-- termina ingreso 1 -->




<!-- representado 2 -->
<div class="col-md-12 mt-3 mb-2 content-box-alterno rounded " style="<?php echo $gdiv2; ?>" >

 <?php include ("zona_adm_estudiante_pre_2_fast.php"); ?>

</div> <!-- cierre border -->

<!-- termina ingreso 2 -->
						  	




<!-- representado 3 -->
<div class="col-md-12 mt-3 mb-2 content-box-gray rounded " style="<?php echo $gdiv3; ?>">

 <?php include ("zona_adm_estudiante_pre_3_fast.php"); ?>

</div> <!-- cierre border -->

<!-- termina ingreso 3 -->   </div>





					  



							
<div class="form-row mt-2" style="display: <?php echo $mostrar_form; ?> "  >


<!-- datos de quien registro y cuando -->

<input type="hidden" id="quien" name="quien" value="<?php echo $_SESSION['id']; ?>">

						<div class="col-md-12">

						<button type="submit" name="registrar_alumnos" class="btn btn-primary btn-block" id='btnReset'>
						<i class="fas fa-save fa-lg"></i> &nbsp Pre-Inscribir</button>

					    </div>



 </div>


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

								

									</form>


<script>
function validateForm() {
    var r = document.forms["preinscribir"]["cedula"].value;
   
    var e1 = document.forms["preinscribir"]["expediente_est1"].value;
    

    var c1 = document.forms["preinscribir"]["cedula_est1"].value;
   

    var e2 = document.forms["preinscribir"]["expediente_est2"].value;
  

    var c2 = document.forms["preinscribir"]["cedula_est2"].value;
  

    var e3 = document.forms["preinscribir"]["expediente_est3"].value;
 

    var c3 = document.forms["preinscribir"]["cedula_est3"].value;


    var e4 = document.forms["preinscribir"]["expediente_est4"].value;
 

    var c4 = document.forms["preinscribir"]["cedula_est4"].value;
  

    var e5 = document.forms["preinscribir"]["expediente_est5"].value;
   

    var c5 = document.forms["preinscribir"]["cedula_est5"].value;
   
    
    if (r == e1) {

    	swal(
  'Alerta',
  'La cedula del representante, no puede ser igual al expediente del representado N°1.',
  'info'
);       
        return false;
    }



    if (r == c1) {
        swal(
  'Alerta',
  'La cedula del representante, no puede ser igual a la cedula del representado N°1.',
  'info'
);       
        return false;
    }



if (e2 != "") { 

     if (r == e2) {

    	swal(
  'Alerta',
  'La cedula del representante, no puede ser igual al expediente del representado N°2.',
  'info'
);       
        return false;
    }




     if (e1 == e2) {
        swal(
  'Alerta',
  'El expediente del representado N°1, no puede ser igual al expediente del representado N°2.',
  'info'
);       
        return false;
    }

}



if (c2 != "") { 


    if (r == c2) {
        swal(
  'Alerta',
  'La cedula del representante, no puede ser igual a la cedula del representado N°2.',
  'info'
);       
        return false;
    }

}



if (e3 != "") { 


 if (r == e3) {

    	swal(
  'Alerta',
  'La cedula del representante, no puede ser igual al expediente del representado N°3.',
  'info'
);       
        return false;
    }




 if (e1 == e3) {
        swal(
  'Alerta',
  'El expediente del representado N°1, no puede ser igual al expediente del representado N°3.',
  'info'
);       
        return false;
    }



}



if (c2 != "") { 


    if (r == c3) {
        swal(
  'Alerta',
  'La cedula del representante, no puede ser igual a la cedula del representado N°3.',
  'info'
);       
        return false;
    }

}


if (e4 != "") { 


 if (r == e4) {

    	swal(
  'Alerta',
  'La cedula del representante, no puede ser igual al expediente del representado N°4.',
  'info'
);       
        return false;
    }



     if (e1 == e4) {
        swal(
  'Alerta',
  'El expediente del representado N°1, no puede ser igual al expediente del representado N°4.',
  'info'
);       
        return false;
    }


}


if (c4 != "") { 


    if (r == c4) {
        swal(
  'Alerta',
  'La cedula del representante, no puede ser igual a la cedula del representado N°4.',
  'info'
);       
        return false;
    }

}



if (e5 != "") { 


 if (r == e5) {

    	swal(
  'Alerta',
  'La cedula del representante, no puede ser igual al expediente del representado N°5.',
  'info'
);       
        return false;
    }



      if (e1 == e5) {
        swal(
  'Alerta',
  'El expediente del representado N°1, no puede ser igual al expediente del representado N°5.',
  'info'
);       
        return false;
    }

}



if (c5 != "") { 

    if (r == c5) {
        swal(
  'Alerta',
  'La cedula del representante, no puede ser igual a la cedula del representado N°5.',
  'info'
);       
        return false;
    }

}








   


   

if (e2 !="" && e3 !="") {


      if (e2 == e3) {
        swal(
  'Alerta',
  'El expediente del representado N°2, no puede ser igual al expediente del representado N°3.',
  'info'
);       
        return false;
    }

 }


 if (e2 !="" && e4 !="") {

      if (e2 == e4) {
        swal(
  'Alerta',
  'El expediente del representado N°2, no puede ser igual al expediente del representado N°4.',
  'info'
);       
        return false;
    }

}



if (e2 !="" && e5 !="") {

      if (e2 == e5) {
        swal(
  'Alerta',
  'El expediente del representado N°2, no puede ser igual al expediente del representado N°5.',
  'info'
);       
        return false;
    }

}


if (e3 !="" && e4 !="") {

       if (e3 == e4) {
        swal(
  'Alerta',
  'El expediente del representado N°3, no puede ser igual al expediente del representado N°4.',
  'info'
);       
        return false;
    }
}



if (e3 !="" && e5 !="") {


       if (e3 == e5) {
        swal(
  'Alerta',
  'El expediente del representado N°3, no puede ser igual al expediente del representado N°5.',
  'info'
);       
        return false;
    }
}




if (e4 !="" && e5 !="") {

       if (e4 == e5) {
        swal(
  'Alerta',
  'El expediente del representado N°4, no puede ser igual al expediente del representado N°5.',
  'info'
);       
        return false;
    }

}



if (c2 !="") {

     if (c1 == c2) {
        swal(
  'Alerta',
  'La cedula del representado N°1, no puede ser igual a la cedula del representado N°2.',
  'info'
);       
        return false;
    }
}


if (c3 !="") {

     if (c1 == c3) {
        swal(
  'Alerta',
  'La cedula del representado N°1, no puede ser igual a la cedula del representado N°3.',
  'info'
);       
        return false;
    }
}



if (c4 !="") {


 if (c1 == c4) {
        swal(
  'Alerta',
  'La cedula del representado N°1, no puede ser igual a la cedula del representado N°4.',
  'info'
);       
        return false;
    }
}




if (c5 !="") {


 if (c1 == c5) {
        swal(
  'Alerta',
  'La cedula del representado N°1, no puede ser igual a la cedula del representado N°5.',
  'info'
);       
        return false;
    }

}




if (c3 !="") {


 if (c2 == c3) {
        swal(
  'Alerta',
  'La cedula del representado N°2, no puede ser igual a la cedula del representado N°3.',
  'info'
);       
        return false;
    }
}




if (c2 !="" && c4 !="") {


 if (c2 == c4) {
        swal(
  'Alerta',
  'La cedula del representado N°2, no puede ser igual a la cedula del representado N°4.',
  'info'
);       
        return false;
    }

}




if (c2 !="" && c5 !="") {

 if (c2 == c5) {
        swal(
  'Alerta',
  'La cedula del representado N°2, no puede ser igual a la cedula del representado N°5.',
  'info'
);       
        return false;
    }
}



if (c3 !="" && c4 !="") {


 if (c3 == c4) {
        swal(
  'Alerta',
  'La cedula del representado N°3, no puede ser igual a la cedula del representado N°4.',
  'info'
);       
        return false;
    }
}



if (c3 !="" && c5 !="") {


 if (c3 == c5) {
        swal(
  'Alerta',
  'La cedula del representado N°3, no puede ser igual a la cedula del representado N°5.',
  'info'
);       
        return false;
    }
}



if (c4 !="" && c5 !="") {

     if (c4 == c5) {
        swal(
  'Alerta',
  'La cedula del representado N°4, no puede ser igual a la cedula del representado N°5.',
  'info'
);       
        return false;
    }

}




} /* cierre  de la funcion */  



function stripspaces(input)
{
  input.value = input.value.replace(/(^[\s]+|[\s]+$)/g, '');

  return true;
}

</script>






     			<div class="form-row mt-2 ">  <!-- mensaje q aprece -->

                  <div class="content col-md-12 text-center mt-1" style="display:none">

                  <b class="text-danger"> <i class="far fa-clock fa-lg"></i>&nbsp;&nbsp;Procesando favor esperar!!! </b>

                  </div>

                </div>



      <script src="0 zqueryajax/jquery.min.js"></script>



      <!-- coloca un mensajito al clickear send y desaparece al rato -->        

      <script>

      $(document).ready(function() {
          setTimeout(function() {
              $(".content").hide();
          }, 0);                         // este numero dice que tan rapido lo esconde

          $('#btnReset').click(function() {
              $(".content").show();
              
              setTimeout(function() {
                  $(".content").fadeOut(1500);
              }, 3500);
              

          });
      });
      </script>


     












<!-- The Modal estudiante1-->

<div class="modal fade" tabindex="-1" id="cropImagePop_EA" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Centre dentro del margen, simulando una foto carnet y haga clic en continuar.</h5>
   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">       

  					<div class="text-center">
						  <div id="upload-demo_EA"></div>
  					</div>	



<div class="form-row">
<div class="mx-auto col-md-12 mt-4">


 <button class="rotateRight col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateRight_EA" data-deg="90"><i class="fas fa-share fa-lg fa-flip-horizontal"></i> Girar</button>
  

          <button class="col-md-6 mt-2 ml-4 btn btn-success cropImageBtn_EA" id="cropImageBtn_EA">Recortar</button>

<button class="rotateLeft col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateLeft_EA" data-deg="-90">Girar <i class="fas fa-share fa-lg"></i></button>



</div> 
</div>





<div class="form-row ">  <!-- mensaje q aprece -->

           <div class="contentea1 mt-1 mb-1 col-md-12 text-center" style="display:none">

           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

           </div>


           

           <div class="contentea2 mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success"> <i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; para avanzar haga click en <b class="text-primary">"Continuar".</b>

          </div>






           </div>  <!-- cierre form-row -->





      </div>

      <div class="modal-footer">

      	<form enctype="multipart/form-data" method="post" name="cargarfotoWW">
        
        <button type="submit" name="submit" class="btn btn-primary" id="cropImageBtn_EAA" disabled>Continuar</button>

         <button type="submit" class="btn btn-secondary" name="cancelAA">Cerrar</button>
        


        </form>

      </div>

    </div>
  </div>
</div>

<!-- cierre The Modal estudiante1 -->




<script type="text/javascript">


	$(document).ready(function() {  
      
         
          setTimeout(function() {
              $(".contentea1").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".contentea2").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          $('#cropImageBtn_EA').click(function() {
            this.disabled = true;
            $(".contentea1").show();
                          
              setTimeout(function() {
                  $(".contentea1").fadeOut(6500);
            
              }, 7500);
              

          });



      });



// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

						var $uploadCrop_EA,
						tempFilename_EA,
						rawImg_EA,
						imageId_EA;

						function readFile_EA(input) {


    var fileInput_EA = document.getElementById('file_photo_EA');
    var filePath_EA = fileInput_EA.value;
    var fileSize_EA = fileInput_EA.files[0].size;
    var allowedExtensions_EA = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_EA.exec(filePath_EA)){
    	swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_EA.value = '';
        return false;  }

    if(fileSize_EA > 10485760){
    	swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

				 			if (input.files && input.files[0]) {
				              var reader_EA = new FileReader();
					            reader_EA.onload = function (e) {
									$('.upload-demo_EA').addClass('ready');
									$('#cropImagePop_EA').modal('show');
						            rawImg_EA = e.target.result;
					            }
					            reader_EA.readAsDataURL(input.files[0]);
					        }
					        else {
						        swal("Sorry - you're browser doesn't support the FileReader API");
						    }
						}

   }





						$uploadCrop_EA = $('#upload-demo_EA').croppie({
							viewport: {
								 width: 350,
						        height: 450,
						        type: 'square'
							},
							boundary: {
						        width: 450,
						        height: 550
						    },
						    enableExif: true,
                enableOrientation: true


						});


 $( "#rotateLeft_EA" ).click(function() {
            $uploadCrop_EA.croppie('rotate', parseInt($(this).data('deg')));
        });


   $( "#rotateRight_EA" ).click(function() {
            $uploadCrop_EA.croppie('rotate', parseInt($(this).data('deg')));
        });








						$('#cropImagePop_EA').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$uploadCrop_EA.croppie('bind', {
				        		url: rawImg_EA
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});

						$('.item-img_EA').on('change', function () { imageId_EA = $(this).data('id'); tempFilename_EA = $(this).val();

						$('#cancelCropBtn_EA').data('id', imageId_EA); readFile_EA(this); });

						$('#cropImageBtn_EA').on('click', function (ev) {
							$uploadCrop_EA.croppie('result', {
								type: 'canvas',
								format: 'png',
								size: 'viewport'
							}).then(function (response) {
 								
 								$.ajax({
						        url:"../0 Croppie/upload_fot_estud1.php?namexx=<?php echo $nnn['ci']; ?>",
						        type: "POST",
						        data:{"imageA": response},
						        success:function(data)
						        {					         

									
					$('#uploaded_image_EA').html(data);

                     $(".contentea1").hide();

                    $(".contentea2").show();

                    document.getElementById("cropImageBtn_EAA").disabled = false;




						        }
						      });
												
								 })

						});




				// End upload preview image



</script>			






<!-- The Modal estudiante2-->

<div class="modal fade" tabindex="-1" id="cropImagePop_EB" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Centre dentro del margen, simulando una foto carnet y haga clic en continuar.</h5>
   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">       

  					<div class="text-center">
						  <div id="upload-demo_EB"></div>
  					</div>	




<div class="form-row">
<div class="mx-auto col-md-12 mt-4">


 <button class="rotateRight col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateRight_EB" data-deg="90"><i class="fas fa-share fa-lg fa-flip-horizontal"></i> Girar</button>

          <button class="col-md-6 mt-2 ml-4 btn btn-success cropImageBtn_EB" id="cropImageBtn_EB">Recortar</button>

<button class="rotateLeft col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateLeft_EB" data-deg="-90">Girar <i class="fas fa-share fa-lg"></i></button>



</div> 
</div>




 



          <div class="form-row ">  <!-- mensaje q aprece -->

           <div class="contenteb1 mt-1 mb-1 col-md-12 text-center" style="display:none">

           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

           </div>


           

           <div class="contenteb2 mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success"> <i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; para avanzar haga click en <b class="text-primary">"Continuar".</b>

          </div>






           </div>  <!-- cierre form-row -->










      </div>

      <div class="modal-footer">

      	<form enctype="multipart/form-data" method="post" name="cargarfotoWW">
        
        <button type="submit" name="submit" class="btn btn-primary" id="cropImageBtn_EBB" disabled>Continuar</button>

         <button type="submit" class="btn btn-secondary" name="cancelBB">Cerrar</button>
        


        </form>

      </div>

    </div>
  </div>
</div>

<!-- cierre The Modal estudiante1 -->




<script type="text/javascript">

	$(document).ready(function() {  
      
         
          setTimeout(function() {
              $(".contenteb1").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".contenteb2").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          $('#cropImageBtn_EB').click(function() {
            this.disabled = true;
            $(".contenteb1").show();
                          
              setTimeout(function() {
                  $(".contenteb1").fadeOut(6500);
            
              }, 7500);
              

          });



      });

// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

						var $uploadCrop_EB,
						tempFilename_EB,
						rawImg_EB,
						imageId_EB;

						function readFile_EB(input) {


    var fileInput_EB = document.getElementById('file_photo_EB');
    var filePath_EB = fileInput_EB.value;
    var fileSize_EB = fileInput_EB.files[0].size;
    var allowedExtensions_EB = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_EB.exec(filePath_EB)){
    	swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_EB.value = '';
        return false;  }

    if(fileSize_EB > 10485760){
    	swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

				 			if (input.files && input.files[0]) {
				              var reader_EB = new FileReader();
					            reader_EB.onload = function (e) {
									$('.upload-demo_EB').addClass('ready');
									$('#cropImagePop_EB').modal('show');
						            rawImg_EB = e.target.result;
					            }
					            reader_EB.readAsDataURL(input.files[0]);
					        }
					        else {
						        swal("Sorry - you're browser doesn't support the FileReader API");
						    }
						}

   }





						$uploadCrop_EB = $('#upload-demo_EB').croppie({
							viewport: {
								 width: 350,
						        height: 450,
						        type: 'square'
							},
							boundary: {
						        width: 450,
						        height: 550
						    },
						    enableExif: true,
                enableOrientation: true
						});

$( "#rotateLeft_EB" ).click(function() {
            $uploadCrop_EB.croppie('rotate', parseInt($(this).data('deg')));
        });


   $( "#rotateRight_EB" ).click(function() {
            $uploadCrop_EB.croppie('rotate', parseInt($(this).data('deg')));
        });



						$('#cropImagePop_EB').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$uploadCrop_EB.croppie('bind', {
				        		url: rawImg_EB
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});

						$('.item-img_EB').on('change', function () { imageId_EB = $(this).data('id'); tempFilename_EB = $(this).val();

						$('#cancelCropBtn_EB').data('id', imageId_EB); readFile_EB(this); });

						$('#cropImageBtn_EB').on('click', function (ev) {
							$uploadCrop_EB.croppie('result', {
								type: 'canvas',
								format: 'png',
								size: 'viewport'
							}).then(function (response) {
 								
 								$.ajax({
						        url:"../0 Croppie/upload_fot_estud2.php?namexx=<?php echo $nnn['ci']; ?>",
						        type: "POST",
						        data:{"imageB": response},
						        success:function(data)
						        {					         

									
					$('#uploaded_image_EB').html(data);

                     $(".contenteb1").hide();

                    $(".contenteb2").show();

                    document.getElementById("cropImageBtn_EBB").disabled = false;



						        }
						      });
												
								 })

						});




				// End upload preview image

</script>			
















<!-- The Modal estudiante3-->

<div class="modal fade" tabindex="-1" id="cropImagePop_EC" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Centre dentro del margen, simulando una foto carnet y haga clic en continuar.</h5>
   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">       

  					<div class="text-center">
						  <div id="upload-demo_EC"></div>
  					</div>	


<div class="form-row">
<div class="mx-auto col-md-12 mt-4">


 <button class="rotateRight col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateRight_EC" data-deg="90"><i class="fas fa-share fa-lg fa-flip-horizontal"></i> Girar</button>
  

          <button class="col-md-6 mt-2 ml-4 btn btn-success cropImageBtn_EC" id="cropImageBtn_EC">Recortar</button>

<button class="rotateLeft col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateLeft_EC" data-deg="-90">Girar <i class="fas fa-share fa-lg"></i></button>



</div> 
</div>



          <div class="form-row ">  <!-- mensaje q aprece -->

           <div class="contentec1 mt-1 mb-1 col-md-12 text-center" style="display:none">

           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

           </div>


           

           <div class="contentec2 mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success"> <i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; para avanzar haga click en <b class="text-primary">"Continuar".</b>

          </div>






           </div>  <!-- cierre form-row -->










      </div>

      <div class="modal-footer">

      	<form enctype="multipart/form-data" method="post" name="cargarfotoWW">
        
        <button type="submit" name="submit" class="btn btn-primary" id="cropImageBtn_ECC" disabled>Continuar</button>

         <button type="submit" class="btn btn-secondary" name="cancelCC">Cerrar</button>
        


        </form>

      </div>

    </div>
  </div>
</div>

<!-- cierre The Modal estudiante1 -->




<script type="text/javascript">


	  $(document).ready(function() {  
      
         
          setTimeout(function() {
              $(".contentec1").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".contentec2").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          $('#cropImageBtn_EC').click(function() {
            this.disabled = true;
            $(".contentec1").show();
                          
              setTimeout(function() {
                  $(".contentec1").fadeOut(6500);
            
              }, 7500);
              

          });



      });

// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

						var $uploadCrop_EC,
						tempFilename_EC,
						rawImg_EC,
						imageId_EC;

						function readFile_EC(input) {


    var fileInput_EC = document.getElementById('file_photo_EC');
    var filePath_EC = fileInput_EC.value;
    var fileSize_EC = fileInput_EC.files[0].size;
    var allowedExtensions_EC = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_EC.exec(filePath_EC)){
    	swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_EC.value = '';
        return false;  }

    if(fileSize_EC > 10485760){
    	swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

				 			if (input.files && input.files[0]) {
				              var reader_EC = new FileReader();
					            reader_EC.onload = function (e) {
									$('.upload-demo_EC').addClass('ready');
									$('#cropImagePop_EC').modal('show');
						            rawImg_EC = e.target.result;
					            }
					            reader_EC.readAsDataURL(input.files[0]);
					        }
					        else {
						        swal("Sorry - you're browser doesn't support the FileReader API");
						    }
						}

   }





						$uploadCrop_EC = $('#upload-demo_EC').croppie({
							viewport: {
								 width: 350,
						        height: 450,
						        type: 'square'
							},
							boundary: {
						        width: 450,
						        height: 550
						    },
						    enableExif: true,
                enableOrientation: true
						});


 $( "#rotateLeft_EC" ).click(function() {
            $uploadCrop_EC.croppie('rotate', parseInt($(this).data('deg')));
        });


   $( "#rotateRight_EC" ).click(function() {
            $uploadCrop_EC.croppie('rotate', parseInt($(this).data('deg')));
        });



						$('#cropImagePop_EC').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$uploadCrop_EC.croppie('bind', {
				        		url: rawImg_EC
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});

						$('.item-img_EC').on('change', function () { imageId_EC = $(this).data('id'); tempFilename_EC = $(this).val();

						$('#cancelCropBtn_EC').data('id', imageId_EC); readFile_EC(this); });

						$('#cropImageBtn_EC').on('click', function (ev) {
							$uploadCrop_EC.croppie('result', {
								type: 'canvas',
								format: 'png',
								size: 'viewport'
							}).then(function (response) {
 								
 								$.ajax({
						        url:"../0 Croppie/upload_fot_estud3.php?namexx=<?php echo $nnn['ci']; ?>",
						        type: "POST",
						        data:{"imageC": response},
						        success:function(data)
						        {					         

					 $('#uploaded_image_EC').html(data);

                     $(".contentec1").hide();

                    $(".contentec2").show();

                    document.getElementById("cropImageBtn_ECC").disabled = false;



						        }
						      });
												
								 })

						});




				// End upload preview image


</script>			










<!-- The Modal estudiante4-->

<div class="modal fade" tabindex="-1" id="cropImagePop_ED" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Centre dentro del margen, simulando una foto carnet y haga clic en continuar.</h5>
   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">       

  					<div class="text-center">
						  <div id="upload-demo_ED"></div>
  					</div>


<div class="form-row">
<div class="mx-auto col-md-12 mt-4">


 <button class="rotateRight col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateRight_ED" data-deg="90"><i class="fas fa-share fa-lg fa-flip-horizontal"></i> Girar</button>
  

          <button class="col-md-6 mt-2 ml-4 btn btn-success cropImageBtn_ED" id="cropImageBtn_ED">Recortar</button>

<button class="rotateLeft col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateLeft_ED" data-deg="-90">Girar <i class="fas fa-share fa-lg"></i></button>



</div> 
</div>



          <div class="form-row ">  <!-- mensaje q aprece -->

           <div class="contented1 mt-1 mb-1 col-md-12 text-center" style="display:none">

           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

           </div>


           

           <div class="contented2 mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success"> <i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; para avanzar haga click en <b class="text-primary">"Continuar".</b>

          </div>






           </div>  <!-- cierre form-row -->




      </div>

      <div class="modal-footer">

      	<form enctype="multipart/form-data" method="post" name="cargarfotoWW">
        
        <button type="submit" name="submit" class="btn btn-primary" id="cropImageBtn_EDD" disabled>Continuar</button>

         <button type="submit" class="btn btn-secondary" name="cancelDD">Cerrar</button>
        


        </form>

      </div>

    </div>
  </div>
</div>
<!-- cierre The Modal estudiante1 -->




<script type="text/javascript">

	   $(document).ready(function() {  
      
         
          setTimeout(function() {
              $(".contented1").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".contented2").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          $('#cropImageBtn_ED').click(function() {
            this.disabled = true;
            $(".contented1").show();
                          
              setTimeout(function() {
                  $(".contented1").fadeOut(6500);
            
              }, 7500);
              

          });



      });

// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

						var $uploadCrop_ED,
						tempFilename_ED,
						rawImg_ED,
						imageId_ED;

						function readFile_ED(input) {


    var fileInput_ED = document.getElementById('file_photo_ED');
    var filePath_ED = fileInput_ED.value;
    var fileSize_ED = fileInput_ED.files[0].size;
    var allowedExtensions_ED = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_ED.exec(filePath_ED)){
    	swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_ED.value = '';
        return false;  }

    if(fileSize_ED > 10485760){
    	swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

				 			if (input.files && input.files[0]) {
				              var reader_ED = new FileReader();
					            reader_ED.onload = function (e) {
									$('.upload-demo_ED').addClass('ready');
									$('#cropImagePop_ED').modal('show');
						            rawImg_ED = e.target.result;
					            }
					            reader_ED.readAsDataURL(input.files[0]);
					        }
					        else {
						        swal("Sorry - you're browser doesn't support the FileReader API");
						    }
						}

   }





						$uploadCrop_ED = $('#upload-demo_ED').croppie({
							viewport: {
								 width: 350,
						        height: 450,
						        type: 'square'
							},
							boundary: {
						        width: 450,
						        height: 550
						    },
						    enableExif: true,
                enableOrientation: true
						});


						 $( "#rotateLeft_ED" ).click(function() {
            $uploadCrop_ED.croppie('rotate', parseInt($(this).data('deg')));
        });


   $( "#rotateRight_ED" ).click(function() {
            $uploadCrop_ED.croppie('rotate', parseInt($(this).data('deg')));
        });


						$('#cropImagePop_ED').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$uploadCrop_ED.croppie('bind', {
				        		url: rawImg_ED
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});

						$('.item-img_ED').on('change', function () { imageId_ED = $(this).data('id'); tempFilename_ED = $(this).val();

						$('#cancelCropBtn_ED').data('id', imageId_ED); readFile_ED(this); });

						$('#cropImageBtn_ED').on('click', function (ev) {
							$uploadCrop_ED.croppie('result', {
								type: 'canvas',
								format: 'png',
								size: 'viewport'
							}).then(function (response) {
 								
 								$.ajax({
						        url:"../0 Croppie/upload_fot_estud4.php?namexx=<?php echo $nnn['ci']; ?>",
						        type: "POST",
						        data:{"imageD": response},
						        success:function(data)
						        {					         

									$('#uploaded_image_ED').html(data);

                     $(".contented1").hide();

                    $(".contented2").show();

                    document.getElementById("cropImageBtn_EDD").disabled = false;

						        }
						      });
												
								 })

						});




				// End upload preview image


</script>			









<!-- The Modal estudiante5-->

<div class="modal fade" tabindex="-1" id="cropImagePop_EE" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Centre dentro del margen, simulando una foto carnet y haga clic en continuar.</h5>
   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">       

  					<div class="text-center">
						  <div id="upload-demo_EE"></div>
  					</div>	


 <div class="form-row">
<div class="mx-auto col-md-12 mt-4">


 <button class="rotateRight col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateRight_EE" data-deg="90"><i class="fas fa-share fa-lg fa-flip-horizontal"></i> Girar</button>
  

          <button class="col-md-6 mt-2 ml-4 btn btn-success cropImageBtn_EE" id="cropImageBtn_EE">Recortar</button>

<button class="rotateLeft col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateLeft_EE" data-deg="-90">Girar <i class="fas fa-share fa-lg"></i></button>



</div> 
</div>



          <div class="form-row ">  <!-- mensaje q aprece -->

           <div class="contentee1 mt-1 mb-1 col-md-12 text-center" style="display:none">

           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

           </div>


           

           <div class="contentee2 mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success"> <i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; para avanzar haga click en <b class="text-primary">"Continuar".</b>

          </div>






           </div>  <!-- cierre form-row -->



      </div>

      <div class="modal-footer">

      	<form enctype="multipart/form-data" method="post" name="cargarfotoWW">
        
        <button type="submit" name="submit" class="btn btn-primary" id="cropImageBtn_EEE" disabled>Continuar</button>

         <button type="submit" class="btn btn-secondary" name="cancelEE">Cerrar</button>
        


        </form>

      </div>

    </div>
  </div>
</div>

<!-- cierre The Modal estudiante5 -->




<script type="text/javascript">


	$(document).ready(function() {  
      
         
          setTimeout(function() {
              $(".contentee1").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".contentee2").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          $('#cropImageBtn_EE').click(function() {
            this.disabled = true;
            $(".contentee1").show();
                          
              setTimeout(function() {
                  $(".contentee1").fadeOut(6500);
            
              }, 7500);
              

          });



      });

// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

						var $uploadCrop_EE,
						tempFilename_EE,
						rawImg_EE,
						imageId_EE;

						function readFile_EE(input) {


    var fileInput_EE = document.getElementById('file_photo_EE');
    var filePath_EE = fileInput_EE.value;
    var fileSize_EE = fileInput_EE.files[0].size;
    var allowedExtensions_EE = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_EE.exec(filePath_EE)){
    	swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_EE.value = '';
        return false;  }

    if(fileSize_EE > 10485760){
    	swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

				 			if (input.files && input.files[0]) {
				              var reader_EE = new FileReader();
					            reader_EE.onload = function (e) {
									$('.upload-demo_EE').addClass('ready');
									$('#cropImagePop_EE').modal('show');
						            rawImg_EE = e.target.result;
					            }
					            reader_EE.readAsDataURL(input.files[0]);
					        }
					        else {
						        swal("Sorry - you're browser doesn't support the FileReader API");
						    }
						}

   }





						$uploadCrop_EE = $('#upload-demo_EE').croppie({
							viewport: {
								 width: 350,
						        height: 450,
						        type: 'square'
							},
							boundary: {
						        width: 450,
						        height: 550
						    },
						    enableExif: true,
                enableOrientation: true
						});


						 $( "#rotateLeft_EE" ).click(function() {
            $uploadCrop_EE.croppie('rotate', parseInt($(this).data('deg')));
        });


   $( "#rotateRight_EE" ).click(function() {
            $uploadCrop_EE.croppie('rotate', parseInt($(this).data('deg')));
        });


						$('#cropImagePop_EE').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$uploadCrop_EE.croppie('bind', {
				        		url: rawImg_EE
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});

						$('.item-img_EE').on('change', function () { imageId_EE = $(this).data('id'); tempFilename_EE = $(this).val();

						$('#cancelCropBtn_EE').data('id', imageId_EE); readFile_EE(this); });

						$('#cropImageBtn_EE').on('click', function (ev) {
							$uploadCrop_EE.croppie('result', {
								type: 'canvas',
								format: 'png',
								size: 'viewport'
							}).then(function (response) {
 								
 								$.ajax({
						        url:"../0 Croppie/upload_fot_estud5.php?namexx=<?php echo $nnn['ci']; ?>",
						        type: "POST",
						        data:{"imageE": response},
						        success:function(data)
						        {					         

									 
									 $('#uploaded_image_EE').html(data);

                     $(".contentee1").hide();

                    $(".contentee2").show();

                    document.getElementById("cropImageBtn_EEE").disabled = false;


                    

						        }
						      });
												
								 })

						});




				// End upload preview image



</script>			





<!-- The Modal ci estudiante act1-->
<div class="modal fade" tabindex="-1" id="cropImagePop_B_act1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Centre el documento de identidad dentro del margen y haga clic en "Recortar".</h5>
      </div>
      <div class="modal-body">       

            <div class="text-center">
              <div id="upload-demo_B_act1"></div>
            </div>

            <div class="form-row">
              <div class="mx-auto col-md-12 mt-4">
   <button class="rotateRight col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateRightB_act1" data-deg="90"><i class="fas fa-share fa-lg fa-flip-horizontal"></i> Girar</button>
   <button class="col-md-6 mt-2 ml-4 btn btn-success cropImageBtn_B_act1" id="cropImageBtn_B_act1">Recortar</button> 
   <button class="rotateLeft col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateLeftB_act1" data-deg="-90">Girar <i class="fas fa-share fa-lg"></i></button>
              </div> 
            </div>

            <div class="form-row ">  <!-- mensaje q aprece -->

              <div class="contentc1_act1 mt-1 mb-1 col-md-12 text-center" style="display:none">
              <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>
              </div>           

              <div class="contentc2_act1 mt-1 mb-1 col-md-12 text-center" style="display:none">
<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Continuar"</b>; al finalizar hacer clic en <b class="text-info">"Pre-Inscribir"</b>.
              </div>

            </div>  <!-- cierre form-row mensaje q aparece -->

      </div>  <!-- cierre div modal body -->

      <div class="modal-footer">
        <form enctype="multipart/form-data" method="post" name="ci_act1">       
        <button type="submit" name="submit_ci_act1" class="btn btn-primary" id="cropImageBtn_BB_act1" disabled>Continuar</button>           
        <button type="submit" class="btn btn-secondary" name="cancelYY_act1">Cerrar</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- cierre The Modal ci est act1-->




<script type="text/javascript">


$(document).ready(function() {    

           setTimeout(function() {
              $(".contentc1_act1").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".contentc2_act1").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          $('#cropImageBtn_B_act1').click(function() {
            this.disabled = true;
            $(".contentc1_act1").show();
                          
              setTimeout(function() {
                  $(".contentc1_act1").fadeOut(6500);
            
              }, 7500);
              

          });



      });

				// End upload preview image
// Start upload preview image
// $(".imagen_default_B").attr("src", "../zz_fotos_p/ZZvacio2.jpg");   // ../zz_fotos_p/02vacio.jpg

					var $uploadCrop_B_act1,
						tempFilename_B_act1,
						rawImg_B_act1,
						imageId_B_act1;

						function readFile_B_act1(input) {

 var fileInput_B_act1 = document.getElementById('file_photo_B_act1');
    var filePath_B_act1 = fileInput_B_act1.value;
    var fileSize_B_act1 = fileInput_B_act1.files[0].size;
    var allowedExtensions_B_act1 = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_B_act1.exec(filePath_B_act1)){
    	swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_B_act1.value = '';
        return false;  }

    if(fileSize_B_act1 > 10485760){
    	swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }

else { 
				 			if (input.files && input.files[0]) {
				              var reader_B_act1 = new FileReader();
					            reader_B_act1.onload = function (e) {
									$('.upload-demo_B_act1').addClass('ready');
									$('#cropImagePop_B_act1').modal('show');
						            rawImg_B_act1 = e.target.result;
					            }
					            reader_B_act1.readAsDataURL(input.files[0]);
					        }
					        else {
						        swal("Sorry - you're browser doesn't support the FileReader API");
						    }
						}

	}

						$uploadCrop_B_act1 = $('#upload-demo_B_act1').croppie({
							viewport: {
								 width: 600,
						        height: 450,
						        type: 'square'
							},
							boundary: {
						        width: 725,
						        height: 575
						    },
						    enableExif: true,
                enableOrientation: true
						});


$( "#rotateLeftB_act1" ).click(function() {
            $uploadCrop_B_act1.croppie('rotate', parseInt($(this).data('deg')));
        });

   $( "#rotateRightB_act1" ).click(function() {
            $uploadCrop_B_act1.croppie('rotate', parseInt($(this).data('deg')));
        });


						$('#cropImagePop_B_act1').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$uploadCrop_B_act1.croppie('bind', {
				        		url: rawImg_B_act1
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});

						$('.item-img_B_act1').on('change', function () { imageId_B_act1 = $(this).data('id'); tempFilename_B_act1 = $(this).val();

						$('#cancelCropBtn_B_act1').data('id', imageId_B_act1); readFile_B_act1(this); });

						$('#cropImageBtn_B_act1').on('click', function (ev) {
							$uploadCrop_B_act1.croppie('result', {
								type: 'canvas',
								format: 'png',
								size: 'viewport'
							}).then(function (response) {

								$.ajax({
						        url:"../0 Croppie/upload_ci_es_act1.php?namexx=<?php echo $nnn['ci']; ?>",
						        type: "POST",
						        data:{"image2": response},
						        success:function(data)
						        {  					

  					 $('#uploaded_image_B_act1').html(data);

                    $(".contentc1_act1").hide();

                    $(".contentc2_act1").show();

                    document.getElementById("cropImageBtn_BB_act1").disabled = false;    
						          
						        }
						      });
												
								 })

						});
				// End upload preview image


</script>	




<!-- The Modal ci estudiante act1-->
<div class="modal fade" tabindex="-1" id="cropImagePop_B_act2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Centre el documento de identidad dentro del margen y haga clic en "Recortar".</h5>
      </div>
      <div class="modal-body">       

            <div class="text-center">
              <div id="upload-demo_B_act2"></div>
            </div>

            <div class="form-row">
              <div class="mx-auto col-md-12 mt-4">
   <button class="rotateRight col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateRightB_act2" data-deg="90"><i class="fas fa-share fa-lg fa-flip-horizontal"></i> Girar</button>
   <button class="col-md-6 mt-2 ml-4 btn btn-success cropImageBtn_B_act2" id="cropImageBtn_B_act2">Recortar</button> 
   <button class="rotateLeft col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateLeftB_act2" data-deg="-90">Girar <i class="fas fa-share fa-lg"></i></button>
              </div> 
            </div>

            <div class="form-row ">  <!-- mensaje q aprece -->

              <div class="contentc1_act2 mt-1 mb-1 col-md-12 text-center" style="display:none">
              <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>
              </div>           

              <div class="contentc2_act2 mt-1 mb-1 col-md-12 text-center" style="display:none">
<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Continuar"</b>; al finalizar hacer clic en <b class="text-info">"Pre-Inscribir"</b>.
              </div>

            </div>  <!-- cierre form-row mensaje q aparece -->

      </div>  <!-- cierre div modal body -->

      <div class="modal-footer">
        <form enctype="multipart/form-data" method="post" name="ci_act2">        
        <button type="submit" name="submit_ci_act2" class="btn btn-primary" id="cropImageBtn_BB_act2" disabled>Continuar</button>           
        <button type="submit" class="btn btn-secondary" name="cancelYY_act2">Cerrar</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- cierre The Modal ci est act1-->


<script type="text/javascript">


$(document).ready(function() {    

           setTimeout(function() {
              $(".contentc1_act2").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".contentc2_act2").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          $('#cropImageBtn_B_act2').click(function() {
            this.disabled = true;
            $(".contentc1_act2").show();
                          
              setTimeout(function() {
                  $(".contentc1_act2").fadeOut(6500);
            
              }, 7500);
              

          });



      });

				// End upload preview image
// Start upload preview image
// $(".imagen_default_B").attr("src", "../zz_fotos_p/ZZvacio2.jpg");   // ../zz_fotos_p/02vacio.jpg

					var $uploadCrop_B_act2,
						tempFilename_B_act2,
						rawImg_B_act2,
						imageId_B_act2;

						function readFile_B_act2(input) {

 var fileInput_B_act2 = document.getElementById('file_photo_B_act2');
    var filePath_B_act2 = fileInput_B_act2.value;
    var fileSize_B_act2 = fileInput_B_act2.files[0].size;
    var allowedExtensions_B_act2 = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_B_act2.exec(filePath_B_act2)){
    	swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_B_act2.value = '';
        return false;  }

    if(fileSize_B_act2 > 10485760){
    	swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }

else { 
				 			if (input.files && input.files[0]) {
				              var reader_B_act2 = new FileReader();
					            reader_B_act2.onload = function (e) {
									$('.upload-demo_B_act2').addClass('ready');
									$('#cropImagePop_B_act2').modal('show');
						            rawImg_B_act2 = e.target.result;
					            }
					            reader_B_act2.readAsDataURL(input.files[0]);
					        }
					        else {
						        swal("Sorry - you're browser doesn't support the FileReader API");
						    }
						}

	}

						$uploadCrop_B_act2 = $('#upload-demo_B_act2').croppie({
							viewport: {
								 width: 600,
						        height: 450,
						        type: 'square'
							},
							boundary: {
						        width: 725,
						        height: 575
						    },
						    enableExif: true,
                enableOrientation: true
						});


$( "#rotateLeftB_act2" ).click(function() {
            $uploadCrop_B_act2.croppie('rotate', parseInt($(this).data('deg')));
        });

   $( "#rotateRightB_act2" ).click(function() {
            $uploadCrop_B_act2.croppie('rotate', parseInt($(this).data('deg')));
        });


						$('#cropImagePop_B_act2').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$uploadCrop_B_act2.croppie('bind', {
				        		url: rawImg_B_act2
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});

						$('.item-img_B_act2').on('change', function () { imageId_B_act2 = $(this).data('id'); tempFilename_B_act2 = $(this).val();

						$('#cancelCropBtn_B_act2').data('id', imageId_B_act2); readFile_B_act2(this); });

						$('#cropImageBtn_B_act2').on('click', function (ev) {
							$uploadCrop_B_act2.croppie('result', {
								type: 'canvas',
								format: 'png',
								size: 'viewport'
							}).then(function (response) {

								$.ajax({
						        url:"../0 Croppie/upload_ci_es_act2.php?namexx=<?php echo $nnn['ci']; ?>",
						        type: "POST",
						        data:{"image2": response},
						        success:function(data)
						        {  					

  					 $('#uploaded_image_B_act2').html(data);

                    $(".contentc1_act2").hide();

                    $(".contentc2_act2").show();

                    document.getElementById("cropImageBtn_BB_act2").disabled = false;    
						          
						        }
						      });
												
								 })

						});
				// End upload preview image


</script>	



<!-- The Modal ci estudiante act1-->
<div class="modal fade" tabindex="-1" id="cropImagePop_B_act3" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Centre el documento de identidad dentro del margen y haga clic en "Recortar".</h5>
      </div>
      <div class="modal-body">       

            <div class="text-center">
              <div id="upload-demo_B_act3"></div>
            </div>

            <div class="form-row">
              <div class="mx-auto col-md-12 mt-4">
   <button class="rotateRight col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateRightB_act3" data-deg="90"><i class="fas fa-share fa-lg fa-flip-horizontal"></i> Girar</button>
   <button class="col-md-6 mt-2 ml-4 btn btn-success cropImageBtn_B_act3" id="cropImageBtn_B_act3">Recortar</button> 
   <button class="rotateLeft col-md-2 mt-2 ml-4 btn btn-outline-success" id="rotateLeftB_act3" data-deg="-90">Girar <i class="fas fa-share fa-lg"></i></button>
              </div> 
            </div>

            <div class="form-row ">  <!-- mensaje q aprece -->

              <div class="contentc1_act3 mt-1 mb-1 col-md-12 text-center" style="display:none">
              <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>
              </div>           

              <div class="contentc2_act3 mt-1 mb-1 col-md-12 text-center" style="display:none">
<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Continuar"</b>; al finalizar hacer clic en <b class="text-info">"Pre-Inscribir"</b>.
              </div>

            </div>  <!-- cierre form-row mensaje q aparece -->

      </div>  <!-- cierre div modal body -->

      <div class="modal-footer">
        <form enctype="multipart/form-data" method="post" name="ci_act3">        
        <button type="submit" name="submit_ci_act3" class="btn btn-primary" id="cropImageBtn_BB_act3" disabled>Continuar</button>           
        <button type="submit" class="btn btn-secondary" name="cancelYY_act3">Cerrar</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- cierre The Modal ci est act1-->



<script type="text/javascript">


$(document).ready(function() {    

           setTimeout(function() {
              $(".contentc1_act3").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".contentc2_act3").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          $('#cropImageBtn_B_act3').click(function() {
            this.disabled = true;
            $(".contentc1_act3").show();
                          
              setTimeout(function() {
                  $(".contentc1_act3").fadeOut(6500);
            
              }, 7500);
              

          });



      });

				// End upload preview image
// Start upload preview image
// $(".imagen_default_B").attr("src", "../zz_fotos_p/ZZvacio2.jpg");   // ../zz_fotos_p/02vacio.jpg

					var $uploadCrop_B_act3,
						tempFilename_B_act3,
						rawImg_B_act3,
						imageId_B_act3;

						function readFile_B_act3(input) {

 var fileInput_B_act3 = document.getElementById('file_photo_B_act3');
    var filePath_B_act3 = fileInput_B_act3.value;
    var fileSize_B_act3 = fileInput_B_act3.files[0].size;
    var allowedExtensions_B_act3 = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_B_act3.exec(filePath_B_act3)){
    	swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_B_act3.value = '';
        return false;  }

    if(fileSize_B_act3 > 10485760){
    	swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }

else { 
				 			if (input.files && input.files[0]) {
				              var reader_B_act3 = new FileReader();
					            reader_B_act3.onload = function (e) {
									$('.upload-demo_B_act3').addClass('ready');
									$('#cropImagePop_B_act3').modal('show');
						            rawImg_B_act3 = e.target.result;
					            }
					            reader_B_act3.readAsDataURL(input.files[0]);
					        }
					        else {
						        swal("Sorry - you're browser doesn't support the FileReader API");
						    }
						}

	}

						$uploadCrop_B_act3 = $('#upload-demo_B_act3').croppie({
							viewport: {
								 width: 600,
						        height: 450,
						        type: 'square'
							},
							boundary: {
						        width: 725,
						        height: 575
						    },
						    enableExif: true,
                enableOrientation: true
						});


$( "#rotateLeftB_act3" ).click(function() {
            $uploadCrop_B_act3.croppie('rotate', parseInt($(this).data('deg')));
        });

   $( "#rotateRightB_act3" ).click(function() {
            $uploadCrop_B_act3.croppie('rotate', parseInt($(this).data('deg')));
        });


						$('#cropImagePop_B_act3').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$uploadCrop_B_act3.croppie('bind', {
				        		url: rawImg_B_act3
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});

						$('.item-img_B_act3').on('change', function () { imageId_B_act3 = $(this).data('id'); tempFilename_B_act3 = $(this).val();

						$('#cancelCropBtn_B_act3').data('id', imageId_B_act3); readFile_B_act3(this); });

						$('#cropImageBtn_B_act3').on('click', function (ev) {
							$uploadCrop_B_act3.croppie('result', {
								type: 'canvas',
								format: 'png',
								size: 'viewport'
							}).then(function (response) {

								$.ajax({
						        url:"../0 Croppie/upload_ci_es_act3.php?namexx=<?php echo $nnn['ci']; ?>",
						        type: "POST",
						        data:{"image2": response},
						        success:function(data)
						        {  					

  					 $('#uploaded_image_B_act3').html(data);

                    $(".contentc1_act3").hide();

                    $(".contentc2_act3").show();

                    document.getElementById("cropImageBtn_BB_act3").disabled = false;    
						          
						        }
						      });
												
								 })

						});
				// End upload preview image


</script>			




								</div>   <!-- cierre cardbody -->
							    </div>   <!-- cierre card -->




<!-- necesario para bloquear el form 

<script>
     $(document).ready(function() {
  
$(function() {
    $('#btnReset').attr('disabled', 'disabled');
});
 
$('input[type=text]').keyup(function() {
        
    if ($('#nombres').val() !=''&&
    $('#apellidos').val() != '' &&
    $('#cedula').val() != ''&&
    $('#telefono1').val() != ''&&
    $('#calle').val() != ''&&
    $('#nombre_vi').val() != '') {
      
        $('#btnReset').removeAttr('disabled');
    } else {
        $('#btnReset').attr('disabled', 'disabled');
    }
});
    });
</script>  -->






            </div> <!-- cierre container fluid -->
        </div> <!-- cierre content wrapper -->




<!-- Modal -->
<div class="modal fade" id="borrar_fotos_perKK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        	<i class="fas fa-info fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Desea eliminar la foto y/o los documentos del representante, previamente cargados?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_nn_ff">  
        <button type="submit" name="borrar_nn_f" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!--   -- >




<!-- Modal -->
<div class="modal fade" id="borrar_fotos_AA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        	<i class="fas fa-info fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Desea eliminar la foto y/o documentos del representado N°1, previamente cargada?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_nn_aa">  
        <button type="submit" name="borrar_nn_aaa" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!--   -- >





<!-- Modal -->
<div class="modal fade" id="borrar_fotos_BB" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        	<i class="fas fa-info fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Desea eliminar la foto y/o documentos del representado N°2, previamente cargada?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_nn_bb">  
        <button type="submit" name="borrar_nn_bbb" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!--   -- >




<!-- Modal -->
<div class="modal fade" id="borrar_fotos_CC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        	<i class="fas fa-info fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Desea eliminar la foto y/o documentos del representado N°3, previamente cargada?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_nn_cc">  
        <button type="submit" name="borrar_nn_ccc" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!--   -- >




<!-- Modal -->
<div class="modal fade" id="borrar_fotos_DD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        	<i class="fas fa-info fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Desea eliminar la foto y/o documentos del representado N°4, previamente cargada?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_nn_dd">  
        <button type="submit" name="borrar_nn_ddd" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!--   -- >





<!-- Modal -->
<div class="modal fade" id="borrar_fotos_EE" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        	<i class="fas fa-info fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Desea eliminar la foto y/o documentos del representado N°5, previamente cargada?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_nn_ee">  
        <button type="submit" name="borrar_nn_eee" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!--   -- >











 <?php include ("Footer.php"); ?>