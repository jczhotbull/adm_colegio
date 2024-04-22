<?php

include("identificador.php");

error_reporting(0);

$nnn1 = $nnn['ci'];


$el_cicloXX = $_GET['ciclo'];

$tituloJKL = $_GET['tituloJKL'];

$alertin = $_GET['alertin'];
 


include("../conectar.php");


$query_ciclones = "SELECT * FROM temporada_escolar where id_periodo_es = '$el_cicloXX' limit 1" ;
$datos_ciclones = mysqli_query($enlace, $query_ciclones) or die(mysqli_error());
$row_datos_ciclones = mysqli_fetch_array($datos_ciclones);
$periodoo_ciclones = $row_datos_ciclones['periodo_escolar'];


$query_formato_1 = "SELECT * FROM z_formato where id_formato = 1 order by id_formato ASC limit 1" ;
$datos_formato_1 = mysqli_query($enlace, $query_formato_1) or die(mysqli_error());
$row_datos_formato_1 = mysqli_fetch_array($datos_formato_1);
$comparativo_formato_1 = $row_datos_formato_1['comparativo'];
$alfabetico_formato_1 = $row_datos_formato_1['alfabetico'];
$literal_formato_1 = $row_datos_formato_1['literal'];
$cualitativa_formato_1 = $row_datos_formato_1['cualitativa'];  


$query_formato_2 = "SELECT * FROM z_formato where id_formato = 2  order by id_formato ASC limit 1" ;
$datos_formato_2 = mysqli_query($enlace, $query_formato_2) or die(mysqli_error());
$row_datos_formato_2 = mysqli_fetch_array($datos_formato_2);
$comparativo_formato_2 = $row_datos_formato_2['comparativo'];
$alfabetico_formato_2 = $row_datos_formato_2['alfabetico'];
$literal_formato_2 = $row_datos_formato_2['literal'];
$cualitativa_formato_2 = $row_datos_formato_2['cualitativa'];

$query_formato_3 = "SELECT * FROM z_formato where id_formato = 3  order by id_formato ASC limit 1" ;
$datos_formato_3 = mysqli_query($enlace, $query_formato_3) or die(mysqli_error());
$row_datos_formato_3 = mysqli_fetch_array($datos_formato_3);
$comparativo_formato_3 = $row_datos_formato_3['comparativo'];
$alfabetico_formato_3 = $row_datos_formato_3['alfabetico'];
$literal_formato_3 = $row_datos_formato_3['literal'];
$cualitativa_formato_3 = $row_datos_formato_3['cualitativa'];

$query_formato_4 = "SELECT * FROM z_formato where id_formato = 4  order by id_formato ASC limit 1" ;
$datos_formato_4 = mysqli_query($enlace, $query_formato_4) or die(mysqli_error());
$row_datos_formato_4 = mysqli_fetch_array($datos_formato_4);
$comparativo_formato_4 = $row_datos_formato_4['comparativo'];
$alfabetico_formato_4 = $row_datos_formato_4['alfabetico'];
$literal_formato_4 = $row_datos_formato_4['literal'];
$cualitativa_formato_4 = $row_datos_formato_4['cualitativa'];

$query_formato_5 = "SELECT * FROM z_formato where id_formato = 5  order by id_formato ASC limit 1" ;
$datos_formato_5 = mysqli_query($enlace, $query_formato_5) or die(mysqli_error());
$row_datos_formato_5 = mysqli_fetch_array($datos_formato_5);
$comparativo_formato_5 = $row_datos_formato_5['comparativo'];
$alfabetico_formato_5 = $row_datos_formato_5['alfabetico'];
$literal_formato_5 = $row_datos_formato_5['literal'];
$cualitativa_formato_5 = $row_datos_formato_5['cualitativa'];

$query_formato_6 = "SELECT * FROM z_formato where id_formato = 6  order by id_formato ASC limit 1" ;
$datos_formato_6 = mysqli_query($enlace, $query_formato_6) or die(mysqli_error());
$row_datos_formato_6 = mysqli_fetch_array($datos_formato_6);
$comparativo_formato_6 = $row_datos_formato_6['comparativo'];
$alfabetico_formato_6 = $row_datos_formato_6['alfabetico'];
$literal_formato_6 = $row_datos_formato_6['literal'];
$cualitativa_formato_6 = $row_datos_formato_6['cualitativa'];

$query_formato_7 = "SELECT * FROM z_formato where id_formato = 7 order by id_formato ASC limit 1" ;
$datos_formato_7 = mysqli_query($enlace, $query_formato_7) or die(mysqli_error());
$row_datos_formato_7 = mysqli_fetch_array($datos_formato_7);
$comparativo_formato_7 = $row_datos_formato_7['comparativo'];
$alfabetico_formato_7 = $row_datos_formato_7['alfabetico'];
$literal_formato_7 = $row_datos_formato_7['literal'];
$cualitativa_formato_7 = $row_datos_formato_7['cualitativa'];

$query_formato_8 = "SELECT * FROM z_formato where id_formato = 8 order by id_formato ASC limit 1" ;
$datos_formato_8 = mysqli_query($enlace, $query_formato_8) or die(mysqli_error());
$row_datos_formato_8 = mysqli_fetch_array($datos_formato_8);
$comparativo_formato_8 = $row_datos_formato_8['comparativo'];
$alfabetico_formato_8 = $row_datos_formato_8['alfabetico'];
$literal_formato_8 = $row_datos_formato_8['literal'];
$cualitativa_formato_8 = $row_datos_formato_8['cualitativa'];

$query_formato_9 = "SELECT * FROM z_formato where id_formato = 9 order by id_formato ASC limit 1" ;
$datos_formato_9 = mysqli_query($enlace, $query_formato_9) or die(mysqli_error());
$row_datos_formato_9 = mysqli_fetch_array($datos_formato_9);
$comparativo_formato_9 = $row_datos_formato_9['comparativo'];
$alfabetico_formato_9 = $row_datos_formato_9['alfabetico'];
$literal_formato_9 = $row_datos_formato_9['literal'];
$cualitativa_formato_9 = $row_datos_formato_9['cualitativa'];

$query_formato_10 = "SELECT * FROM z_formato where id_formato = 10 order by id_formato ASC limit 1" ;
$datos_formato_10 = mysqli_query($enlace, $query_formato_10) or die(mysqli_error());
$row_datos_formato_10 = mysqli_fetch_array($datos_formato_10);
$comparativo_formato_10 = $row_datos_formato_10['comparativo'];
$alfabetico_formato_10 = $row_datos_formato_10['alfabetico'];
$literal_formato_10 = $row_datos_formato_10['literal'];
$cualitativa_formato_10 = $row_datos_formato_10['cualitativa'];

$query_formato_11 = "SELECT * FROM z_formato where id_formato = 11 order by id_formato ASC limit 1" ;
$datos_formato_11 = mysqli_query($enlace, $query_formato_11) or die(mysqli_error());
$row_datos_formato_11 = mysqli_fetch_array($datos_formato_11);
$comparativo_formato_11 = $row_datos_formato_11['comparativo'];
$alfabetico_formato_11 = $row_datos_formato_11['alfabetico'];
$literal_formato_11 = $row_datos_formato_11['literal'];
$cualitativa_formato_11 = $row_datos_formato_11['cualitativa'];

$query_formato_12 = "SELECT * FROM z_formato where id_formato = 12 order by id_formato ASC limit 1" ;
$datos_formato_12 = mysqli_query($enlace, $query_formato_12) or die(mysqli_error());
$row_datos_formato_12 = mysqli_fetch_array($datos_formato_12);
$comparativo_formato_12 = $row_datos_formato_12['comparativo'];
$alfabetico_formato_12 = $row_datos_formato_12['alfabetico'];
$literal_formato_12 = $row_datos_formato_12['literal'];
$cualitativa_formato_12 = $row_datos_formato_12['cualitativa'];

mysqli_close($enlace); 





 $alerton ='0';


if(isset($_POST['cancelXX']))
    {

$filenameZZ = '../0 Croppie/foto_estu_update' . $nnn1 . '.png';


if (file_exists($filenameZZ )) { 

unlink($filenameZZ);

  }


}




if(isset($_POST['buscalo']))
    {



if (strlen($_POST['buscar_estud']) <=2 )  // no sea mayor a 40 caracteres
 
    {   

    $xxxsearch = "xxxxxx";

    header( "Location: plantilla_estudiantes_search_ape_notas.php?ciclo=".$el_cicloXX."&tituloJKL=Resultados...&criterio=".$xxxsearch."&alertin=5" ); 

     }


else { 

      $busqueda = $_POST['buscar_estud'];
      $ciclo_cicloso = $_POST['ciclo_cicloso'];


      include("../conectar.php");

            $query_bus = " SELECT * FROM  reg_estudiantes, reg_estu_actual

WHERE  reg_estu_actual.id_estud = reg_estudiantes.id_estud
        
      /*   and  reg_estu_actual.el_activo = '1' */
         and  reg_estu_actual.cursa_actualmente = '$ciclo_cicloso'
         
     /*    and reg_estudiantes.retirado_si_o_no = '0'   */
            

         and reg_estudiantes.apellidos_estu LIKE '%".$busqueda."%'  GROUP BY reg_estudiantes.id_estud ";

      $datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
      $totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

      mysqli_close($enlace); 




      if ($totalRows_datos_plantilla_bus == '0') {

        $xxxsearch = "xxxxxx";

       header( "Location: plantilla_estudiantes_search_ape_notas.php?ciclo=".$el_cicloXX."&tituloJKL=Resultados...&criterio=".$xxxsearch."&alertin=55" );


      }



      if ($totalRows_datos_plantilla_bus >= '1' and $totalRows_datos_plantilla_bus <= '16') {

        header( "Location: plantilla_estudiantes_search_ape_notas.php?ciclo=".$el_cicloXX."&tituloJKL=Resultados...&criterio=".$busqueda."&alertin=0" );

      }


      if ($totalRows_datos_plantilla_bus >= '17') {

        $xxxsearch = "xxxxxx";

        header( "Location: plantilla_estudiantes_search_ape_notas.php?ciclo=".$el_cicloXX."&tituloJKL=Resultados...&criterio=".$xxxsearch."&alertin=1" ); 

      }

}

    }  // cierre principal del if




if(isset($_POST['incorporate_a_el']))
    {

$actividad_extra = $_POST['actividad_extra'];

$id_del_est_UU =  $_POST['id_del_est_UU'];


 include("../conectar.php");

$ver_duplicado = "SELECT id_estud FROM extra_catedra WHERE id_area ='$actividad_extra' and id_estud = '$id_del_est_UU' ";
$resultE = mysqli_query($enlace,$ver_duplicado);

if (mysqli_num_rows($resultE)>0)
    {
    $errorZ="- El estudiante ya pertenece a la actividad o lista seleccionada. ";
    mysqli_close($enlace); 
    }


    else {  


      $query_d = "INSERT INTO extra_catedra (id_estud, id_area) 

              VALUES ( '$id_del_est_UU', '$actividad_extra')";


if (!mysqli_query($enlace,$query_d))  // si no logro ingresar la direccion...
      {

      $errorZ.="- &nbsp; Error, No se logro incorporar a la actividad o lista!!! &nbsp ";
     
      mysqli_close($enlace); 
      
      }

else {

$exitoZ.="- &nbsp; Estudiante incorporado a una actividad o lista!!! &nbsp ";
     
      mysqli_close($enlace); 

}



     }


 
    }





if(isset($_POST['cancelTT']))
    {

$filenameTT = '../0 Croppie/foto_repre_update' . $nnn1 . '.png';


if (file_exists($filenameTT )) { 

unlink($filenameTT);

  }


}



if(isset($_POST['cancelMM']))
    {

$filenameMM = '../0 Croppie/foto_ci_repre_update' . $nnn1 . '.png';


if (file_exists($filenameMM )) { 

unlink($filenameMM);

  }


}







 if(isset($_POST['update_logoX']))
        {    



include("../conectar.php");

$queryKKC = "SELECT * FROM reg_estudiantes WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1";

                      $resultKKC = mysqli_query($enlace,$queryKKC);
                      $filaKK=mysqli_fetch_array($resultKKC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$foto_a_borrar = $filaKK["foto_estu"];


                      if (!empty( $foto_a_borrar )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($foto_a_borrar);


$deleteXX = "UPDATE reg_estudiantes SET foto_estu = '' WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1 ";
$resultXXC = mysqli_query($enlace,$deleteXX);

              

             }

             

mysqli_close($enlace); 


$id_estu_KL = $_POST['id_del_est_UU'];

$exp_estu_KL = $_POST['exp_del_est_UU'];

clearstatcache();
$filenameUPd_fot_ES = '../0 Croppie/foto_estu_update' . $nnn1 . '.png';

$fot_ES_bandera = "0";


          if (file_exists($filenameUPd_fot_ES )) {    // de haber una foto le cambia el nombre y la mueve a otro lugar 

            $fot_ES_bandera = "1";

          $imageXXfot_ES = imagecreatefrompng("../0 Croppie/foto_estu_update". $nnn1 . ".png");  
                           unlink("../0 Croppie/foto_estu_update". $nnn1 . ".png"); 
                           imagejpeg($imageXXfot_ES,"../0 Croppie/foto_estu_update". $nnn1 . ".png",85); // comprimer la imagen           
        

            $extU = 'png';
            /* $newfilename = '../zz_fotos_l/logocropx.png'; */
            $newfilenameUPd_fot_ES = "../zz_fotos_estudiantes/".$id_estu_KL."_".$exp_estu_KL.".".$extU;

             
            if(rename($filenameUPd_fot_ES,$newfilenameUPd_fot_ES))
      {     

      include("../conectar.php");         

          $query_fotoU_E = "UPDATE reg_estudiantes SET foto_estu = '$newfilenameUPd_fot_ES' WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1 ";
          

          if (!mysqli_query($enlace,$query_fotoU_E))      // si no ha logrado ingresar la foto
                   {

         $errorZ="- Foto del estudiante no actualizada. ";

              unlink($newfilenameUPd_fot_ES); 
                        
              mysqli_close($enlace);

                   }

          else {
          
          $exitoZ = "- Foto del estudiante actualizada. ";
          mysqli_close($enlace);  

            }   

             
      }

            else{

              $errorZ="- Error en la foto del estudiante, contactar al Ing. ";
            
             unlink($filenameUPd_fot_ES); 
                         
              mysqli_close($enlace);


            }
          

      

                 }  // cierre de que no hay foto..



              
                if ( $fot_ES_bandera == "0" ) { 

            $errorZ="- No se ha cargado al sistema ninguna imagen. ";  

            }




             if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             
                          }     


                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. "  ";            
                         

                     

                           }



}  // cierre en caso de haber pulsado actualizar fotos









 if(isset($_POST['update_logoX_re_']))
        {    



include("../conectar.php");

$queryTTC = "SELECT * FROM reg_representante WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1";

                      $resultTTC = mysqli_query($enlace,$queryTTC);
                      $filaTT=mysqli_fetch_array($resultTTC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$foto_a_borrarTT = $filaTT["foto_repre"];


                      if (!empty( $foto_a_borrarTT )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($foto_a_borrarTT);


$deleteTT = "UPDATE reg_representante SET foto_repre = '' WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1 ";
$resultTTC = mysqli_query($enlace,$deleteTT);
              

             }
             

mysqli_close($enlace); 



$id_repre_KL = $_POST['id_del_repreX'];

$ci_repre_KL = $_POST['ci_del_repreX'];

clearstatcache();
$filenameUPd_fot_REP = '../0 Croppie/foto_repre_update' . $nnn1 . '.png';

$fot_REP_bandera = "0";


          if (file_exists($filenameUPd_fot_REP )) {    // de haber una foto le cambia el nombre y la mueve a otro lugar 

            $fot_REP_bandera = "1";

          $imageXXfot_REP = imagecreatefrompng("../0 Croppie/foto_repre_update". $nnn1 . ".png");  
                           unlink("../0 Croppie/foto_repre_update". $nnn1 . ".png"); 
                           imagejpeg($imageXXfot_REP,"../0 Croppie/foto_repre_update". $nnn1 . ".png",85); // comprimer la imagen           
        

            $extU = 'png';
            /* $newfilename = '../zz_fotos_l/logocropx.png'; */
            $newfilenameUPd_fot_REP = "../zz_fotos_repre/".$id_repre_KL."_".$ci_repre_KL.".".$extU;

             
            if(rename($filenameUPd_fot_REP,$newfilenameUPd_fot_REP))
      {     

      include("../conectar.php");         

          $query_fotoU_REP = "UPDATE reg_representante SET foto_repre = '$newfilenameUPd_fot_REP' WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1 ";
          

          if (!mysqli_query($enlace,$query_fotoU_REP))      // si no ha logrado ingresar la foto
                   {

         $errorZ="- Foto del representante no actualizada. ";

              unlink($newfilenameUPd_fot_REP); 
                        
              mysqli_close($enlace);

                   }

          else {
          
          $exitoZ = "- Foto del representante actualizada. ";
          mysqli_close($enlace);  

            }   

             
      }

            else{

              $errorZ="- Error en la foto del representante, contactar al Ing. ";
            
             unlink($filenameUPd_fot_REP); 
                         
              mysqli_close($enlace);


            }
          

      

                 }  // cierre de que no hay foto..



              
                if ( $fot_REP_bandera == "0" ) { 

            $errorZ="- No se ha cargado al sistema ninguna imagen. ";  

            }




             if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             
                          }     


                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. "  ";            
                         

                     

                           }



}  // cierre en caso de haber pulsado actualizar fotos









 if(isset($_POST['update_logoX_doc']))
        {   



include("../conectar.php");

$queryRRC = "SELECT * FROM reg_representante WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1";

                      $resultRRC = mysqli_query($enlace,$queryRRC);
                      $filaRR=mysqli_fetch_array($resultRRC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$foto_a_borrarRR = $filaRR["foto_ci_repre"];


                      if (!empty( $foto_a_borrarRR )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($foto_a_borrarRR);


$deleteRR = "UPDATE reg_representante SET foto_ci_repre = '' WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1 ";
$resultRRC = mysqli_query($enlace,$deleteRR);

              

             }

            

mysqli_close($enlace);  

$id_repre_KL = $_POST['id_del_repreX'];

$ci_repre_KL = $_POST['ci_del_repreX'];

clearstatcache();
$filenameUPd_ci_REP = '../0 Croppie/foto_ci_repre_update' . $nnn1 . '.png';

$fot_ci_REP_bandera = "0";


          if (file_exists($filenameUPd_ci_REP )) {    // de haber una foto le cambia el nombre y la mueve a otro lugar 

            $fot_ci_REP_bandera = "1";

          $imageXXfot_ci_REP = imagecreatefrompng("../0 Croppie/foto_ci_repre_update". $nnn1 . ".png");  
                           unlink("../0 Croppie/foto_ci_repre_update". $nnn1 . ".png"); 
                           imagejpeg($imageXXfot_ci_REP,"../0 Croppie/foto_ci_repre_update". $nnn1 . ".png",85); // comprimer la imagen           
        

            $extU = 'png';
            /* $newfilename = '../zz_fotos_l/logocropx.png'; */
            $newfilenameUPd_fot_ci_REP = "../zz_fotos_repre_ci/".$id_repre_KL."_".$ci_repre_KL.".".$extU;

             
            if(rename($filenameUPd_ci_REP,$newfilenameUPd_fot_ci_REP))
      {     

      include("../conectar.php");         

          $query_fotoU_ci_REP = "UPDATE reg_representante SET foto_ci_repre = '$newfilenameUPd_fot_ci_REP' WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1 ";
          

          if (!mysqli_query($enlace,$query_fotoU_ci_REP))      // si no ha logrado ingresar la foto
                   {

         $errorZ="- Foto del representante no actualizada. ";

              unlink($newfilenameUPd_fot_ci_REP); 
                        
              mysqli_close($enlace);

                   }

          else {
          
          $exitoZ = "- Foto del representante actualizada. ";
          mysqli_close($enlace);  

            }   

             
      }

            else{

              $errorZ="- Error en la foto del representante, contactar al Ing. ";
            
             unlink($filenameUPd_fot_ci_REP); 
                         
              mysqli_close($enlace);


            }
          

      

                 }  // cierre de que no hay foto..



              
                if ( $fot_ci_REP_bandera == "0" ) { 

            $errorZ="- No se ha cargado al sistema ninguna imagen. ";  

            }




             if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             
                          }     


                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. "  ";            
                         

                     

                           }



}  // cierre en caso de haber pulsado actualizar fotos








if(isset($_POST['borrarXX']))
    {



include("../conectar.php");

$queryKKC = "SELECT * FROM reg_estudiantes WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1";

                      $resultKKC = mysqli_query($enlace,$queryKKC);
                      $filaKK=mysqli_fetch_array($resultKKC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$foto_a_borrar = $filaKK["foto_estu"];


                      if (!empty( $foto_a_borrar )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($foto_a_borrar);


$deleteXX = "UPDATE reg_estudiantes SET foto_estu = '' WHERE id_estud = '$_POST[id_del_est_UU]' LIMIT 1 ";
$resultXXC = mysqli_query($enlace,$deleteXX);

               $exitoZ="- Foto del estudiante borrada. ";

             }


              else {

              $errorZ="- El estudiante seleccionado no posee foto.";

             }

mysqli_close($enlace); 

 }







if(isset($_POST['borrarTT']))
    {



include("../conectar.php");

$queryTTC = "SELECT * FROM reg_representante WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1";

                      $resultTTC = mysqli_query($enlace,$queryTTC);
                      $filaTT=mysqli_fetch_array($resultTTC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$foto_a_borrarTT = $filaTT["foto_repre"];


                      if (!empty( $foto_a_borrarTT )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($foto_a_borrarTT);


$deleteTT = "UPDATE reg_representante SET foto_repre = '' WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1 ";
$resultTTC = mysqli_query($enlace,$deleteTT);

               $exitoZ="- Foto del representante borrada. ";

             }


              else {

              $errorZ="- El representante seleccionado no posee foto.";

             }

mysqli_close($enlace); 

 }






if(isset($_POST['borrarRR']))
    {



include("../conectar.php");

$queryRRC = "SELECT * FROM reg_representante WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1";

                      $resultRRC = mysqli_query($enlace,$queryRRC);
                      $filaRR=mysqli_fetch_array($resultRRC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id ...

$foto_a_borrarRR = $filaRR["foto_ci_repre"];


                      if (!empty( $foto_a_borrarRR )) {   // si hay algo en foto, borra ese archivo
                       
              unlink($foto_a_borrarRR);


$deleteRR = "UPDATE reg_representante SET foto_ci_repre = '' WHERE id_repre = '$_POST[id_del_repreX]' LIMIT 1 ";
$resultRRC = mysqli_query($enlace,$deleteRR);

               $exitoZ="- Foto del documento de Id. del representante borrado. ";

             }


              else {

              $errorZ="- El representante seleccionado no posee foto del documento de Id.";

             }

mysqli_close($enlace); 

 }













// los siguientes permiten eliminar un dato

   if(isset($_POST['borrar_estudiante']))
    {



           // $borrar_id = $_POST['borrar_selecc'];
           // $errorZ = " <p> <b>" . $borrar_id . " </b> </p>"; // me ayudan a saber si se esta agarrando el id correcto...

      include("../conectar.php"); 


      $queryC = "SELECT * FROM reg_estudiantes WHERE id_estud = '$_POST[borrar_estudiante]' LIMIT 1";

                      $resultC = mysqli_query($enlace,$queryC);
                      $fila=mysqli_fetch_array($resultC);         // lo anterior me permite tener el nombre del registro
                                                                  // gracias al id de la direccion que esta en la tabla...



                      $foto_a_borrar = $fila["foto_estu"];

                      if (!empty( $foto_a_borrar )) {   // si hay algo en foto, borra ese archivo
                                                     unlink($foto_a_borrar);
                                                     }




                      $queryD = "DELETE FROM reg_estudiantes WHERE id_estud = '$_POST[borrar_estudiante]' LIMIT 1";

                      if (!mysqli_query($enlace,$queryD))      // si no ha logrado borrar los datos de la direccion
                         {
                          $errorZ="Error llamar al Ing.  ";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



                      else {  

                         $exitoZ = "<b>--&nbsp; " . $fila['nombre_estu'] . " &nbsp;--</b> ha sido eliminado.";

                      }           // hasta aqui gracias a borrar la direccion al estar en cascada se lleva el contenido del plantel.
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
                              mysqli_close($enlace);                                          
                          }


    }  






// los siguientes permite cambiar el estado a activo de un registrado y cambiar fecha....

   if(isset($_POST['incorporar_estudiante']))
    {

           // $actvivar_contrato = $_POST['activar_personal'];
           // $errorZ = " <p> <b>" . $actvivar_contrato . " </b> </p>"; // me ayudan a saber si se esta agarrando el contrato correcto...

      include("../conectar.php");     


      $queryAC = "SELECT * FROM reg_estudiantes, quien_y_cuando_estu
                         WHERE  reg_estudiantes.id_estud = '$_POST[incorporar_estudiante]'
                          and  quien_y_cuando_estu.id_estud = '$_POST[incorporar_estudiante]' LIMIT 1 ";
          

                      $resultAC = mysqli_query($enlace,$queryAC);
                      $filaAC=mysqli_fetch_array($resultAC);         // lo anterior me permite tener lo relacionado con el estu
                                                                  
                      $id_filacd_q_yy = $filaAC["id_q_y_c_estu"];



       $sql_ACTes = "UPDATE reg_estudiantes SET retirado_si_o_no = '0'                                        
                                      WHERE id_estud = '$_POST[incorporar_estudiante]' LIMIT 1 ";
            

                      if (!mysqli_query($enlace,$sql_ACTes))      // si no ha logrado actualizar
                         {
                          $errorZ="Error al cambiar estado, contactar al Ing.  ";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }





                      else {  



                          $sql_ACT_next = "UPDATE quien_y_cuando_estu SET fecha_reincorp = '$_POST[activar_date]'
                                        
                                      WHERE id_q_y_c_estu = '$id_filacd_q_yy' LIMIT 1 ";


                      if (!mysqli_query($enlace,$sql_ACT_next))      // si no ha logrado actualizar
                         {
                          $errorZ="Error al guardar los cambios, contactar al Ing.  ";
                          }



                      else { 


        $exitoZ = "El alumno &nbsp; <b>--&nbsp;  " . $filaAC['nombre_estu'] . " &nbsp;--</b> &nbsp; ha sido re-incorporado.";

                      }           // hasta aqui gracias a borrar la direccion al estar en cascada se lleva el contenido del plantel.
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";
                              mysqli_close($enlace);                                          
                          }


                                                            
                          }


    }  
















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








 if(isset($_POST['editar_selecc']))
        {


 include("consultas_mod/chequeo_estudiantes_mod_pre_alt.php");   // chequea que lo introducido este bien.




if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }


 else { 


include ("../conectar.php");


 include("plantilla_estudiantes_00_update_pre_alt.php");   // procesa los datos

 } 


}  // cierre de modificar datos del repre y del estudiante









 if(isset($_POST['editar_historial']))
        {



include ("../conectar.php");


    $count=count($_POST["id_reg_estu_actual"]);

    for($i=0;$i<$count;$i++){


    $mod_ciclo = $_POST["mod_ciclo"][$i];

        $mod_grados = $_POST["mod_grados"][$i];

        $mod_repitiente = $_POST["mod_repitiente"][$i];

        $mod_inscrip = $_POST["mod_inscrip"][$i];

        $mod_edades = $_POST["mod_edades"][$i];

        $mod_t_camisa = $_POST["mod_t_camisa"][$i];

        $mod_t_pantalon = $_POST["mod_t_pantalon"][$i];

        $mod_t_zapato = $_POST["mod_t_zapato"][$i];

        $mod_pesos = $_POST["mod_pesos"][$i];

        $mod_alturas = $_POST["mod_alturas"][$i];


        $id_reg_estu_actual = $_POST["id_reg_estu_actual"][$i];




    $sql1="UPDATE reg_estu_actual 
                    SET cursa_actualmente = '$mod_ciclo',
                      grado_actual = '$mod_grados',
                      repite_actual = '$mod_repitiente',

                      fecha_inscripcion = '$mod_inscrip',
                      
                      edad_actual = '$mod_edades',
                      t_camisa_act = '$mod_t_camisa',
                      t_pantalon_act = '$mod_t_pantalon',
                      t_zapatos_act = '$mod_t_zapato',

                      peso_act = '$mod_pesos',
                      estatura_act = '$mod_alturas'

                    WHERE id_reg_estu_actual = '$id_reg_estu_actual' ";


    $result1=mysqli_query($enlace, $sql1);

    }



     if ($result1 !='1')      // actualiza y si no logra ingresar los datos...
               {
                $errorZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; No se actualizo el historial del estudiante, contactar al Ing. "; 

  
        mysqli_close($enlace);


               }               

            else{
                    

                     $exitoZ .= "&nbsp;&nbsp; <i class=\"fas fa-user-edit fa-lg\"></i>&nbsp; Se actualizo el historial del estudiante. ";  

              mysqli_close($enlace);

              }




}  // cierre de modificar el historial del estudiante...







// modificar el status a alumno regular


 if(isset($_POST['cambiarlo_regular']))
        {


include ("../conectar.php");

$id_del_estudiante_esGG = $_POST['cambiarlo_regular'];

$el_nuevo_valor_es = $_POST['status_cambio'];



    $sqlPP1="UPDATE reg_estudiantes
                    SET regular = '$el_nuevo_valor_es'
                  
                    WHERE id_estud = '$id_del_estudiante_esGG' ";

              
            if (!mysqli_query($enlace,$sqlPP1))      // actualiza y si no logra ingresar los datos...
               {
                        $errorZ .="Cambio de estatus no preocesado.";
  
        mysqli_close($enlace);
               }               

            else{
                          $exitoZ .= "Cambio de estatus procesado."; 

        }



mysqli_close($enlace); 



}  // cierre de modificar el status a alumno regular






// modificar el status a nuevo


 if(isset($_POST['cambiarlo_nuevo']))
        {


include ("../conectar.php");

$id_del_estudiante_esGG = $_POST['cambiarlo_nuevo'];

$el_nuevo_valor_es = $_POST['status_cambio'];



    $sqlPP1="UPDATE reg_estudiantes
                    SET regular = '$el_nuevo_valor_es'
                  
                    WHERE id_estud = '$id_del_estudiante_esGG' ";

              
            if (!mysqli_query($enlace,$sqlPP1))      // actualiza y si no logra ingresar los datos...
               {
                        $errorZ .="Cambio de estatus no preocesado.";
  
        mysqli_close($enlace);
               }               

            else{
                          $exitoZ .= "Cambio de estatus procesado."; 

        }



mysqli_close($enlace); 



}  // cierre de modificar a nuevo








if ( $alertin == "1" ) { 

            $errorZ="- Se encontraron muchos resultados, intente refinar la búsqueda.";  

            }


if ( $alertin == "5" ) { 

            $errorZ="- Ingrese más de 3 caracteres, para iniciar la busqueda. ";  

            }




if ( $alertin == "55" ) { 

            $errorZ="- La busqueda arrojo &nbsp;&nbsp;<b>0</b>&nbsp;&nbsp; resultados.";  

            }








if(isset($_POST['save_1']))
{ 

if($_FILES['archivo1']['name']!='')
{

  $ci_estu =  $_POST['ci_estu1'];

       if ($_FILES['archivo1']["error"] > 0)
        {
      $errorZ.="- " . $_FILES['archivo1']['error'] . " ";
        }

      else
        {

$estamos_en_ciclo =  $_POST['ciclo_del_1'];
$el_id_estud_es =  $_POST['id_estud_1'];
$indicativo = '1ro';

$path = $_FILES['archivo1']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

      $file_AdjN = "".$ci_estu."";
      move_uploaded_file($_FILES['archivo1']['tmp_name'],

      "../zzz_notas_boletas/zzz_notas_boletas_1er_Corte/".$indicativo."_".$estamos_en_ciclo.".".$el_id_estud_es.".".$ext );

      $exitoZ .= " &nbsp; Archivo &nbsp;<b>** ".$file_AdjN." **</b>&nbsp; 1° corte, cargado correctamente. &nbsp;";       
          
      }
}

 }




 if(isset($_POST['save_2']))
{ 

if($_FILES['archivo2']['name']!='')
{

  $ci_estu =  $_POST['ci_estu2'];

       if ($_FILES['archivo2']["error"] > 0)
        {
      $errorZ.="- " . $_FILES['archivo2']['error'] . " ";
        }

      else
        {

$estamos_en_ciclo =  $_POST['ciclo_del_2'];
$el_id_estud_es =  $_POST['id_estud_2'];
$indicativo = '2do';

$path = $_FILES['archivo2']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

      $file_AdjN = "".$ci_estu."";
      move_uploaded_file($_FILES['archivo2']['tmp_name'],

      "../zzz_notas_boletas/zzz_notas_boletas_2do_Corte/".$indicativo."_".$estamos_en_ciclo.".".$el_id_estud_es.".".$ext );

      $exitoZ .= " &nbsp; Archivo &nbsp;<b>** ".$file_AdjN." **</b>&nbsp;  2° corte, cargado correctamente. &nbsp;";       
          
      }
}

 }





 if(isset($_POST['save_3']))
{ 

if($_FILES['archivo3']['name']!='')
{

  $ci_estu =  $_POST['ci_estu3'];

       if ($_FILES['archivo3']["error"] > 0)
        {
      $errorZ.="- " . $_FILES['archivo3']['error'] . " ";
        }

      else
        {

$estamos_en_ciclo =  $_POST['ciclo_del_3'];
$el_id_estud_es =  $_POST['id_estud_3'];
$indicativo = '3ro';

$path = $_FILES['archivo3']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

      $file_AdjN = "".$ci_estu."";
      move_uploaded_file($_FILES['archivo3']['tmp_name'],

      "../zzz_notas_boletas/zzz_notas_boletas_3er_Corte/".$indicativo."_".$estamos_en_ciclo.".".$el_id_estud_es.".".$ext );

      $exitoZ .= " &nbsp; Archivo &nbsp;<b>** ".$file_AdjN." **</b>&nbsp; 3° corte, cargado correctamente. &nbsp;";       
          
      }
}

 }





 if(isset($_POST['save_4']))
{ 

if($_FILES['archivo4']['name']!='')
{

  $ci_estu =  $_POST['ci_estu4'];

       if ($_FILES['archivo4']["error"] > 0)
        {
      $errorZ.="- " . $_FILES['archivo4']['error'] . " ";
        }

      else
        {

$estamos_en_ciclo =  $_POST['ciclo_del_4'];
$el_id_estud_es =  $_POST['id_estud_4'];
$indicativo = '4to';

$path = $_FILES['archivo4']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

      $file_AdjN = "".$ci_estu."";
      move_uploaded_file($_FILES['archivo4']['tmp_name'],

      "../zzz_notas_boletas/zzz_notas_boletas_4to_Final/".$indicativo."_".$estamos_en_ciclo.".".$el_id_estud_es.".".$ext );

      $exitoZ .= " &nbsp; Archivo &nbsp;<b>** ".$file_AdjN." **</b>&nbsp; 4° corte o final, cargado correctamente. &nbsp;";       
          
      }
}

 }





 if(isset($_POST['borrar_1']))
    {

  $ci_estu =  $_POST['ci_estu1'];
  $el_id_estud_es =  $_POST['id_estud_1'];
  $indicativo = '1ro';

$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_1er_Corte"; 

$estamos_en_ciclo =  $_POST['ciclo_del_1'];

$files = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estud_es.'.*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
} 


      $exitoZ="- 1° Corte Borrado. ";

             }



 if(isset($_POST['borrar_2']))
    {

  $ci_estu =  $_POST['ci_estu2'];
  $el_id_estud_es =  $_POST['id_estud_2'];
  $indicativo = '2do';

$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_2do_Corte"; 

$estamos_en_ciclo =  $_POST['ciclo_del_2'];

$files = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estud_es.'.*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
} 


      $exitoZ="- 2° Corte Borrado. ";

             }





 if(isset($_POST['borrar_3']))
    {

  $ci_estu =  $_POST['ci_estu3'];
  $el_id_estud_es =  $_POST['id_estud_3'];
  $indicativo = '3ro';

$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_3er_Corte"; 

$estamos_en_ciclo =  $_POST['ciclo_del_3'];

$files = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estud_es.'.*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
} 


      $exitoZ="- 3° Corte Borrado. ";

             }





 if(isset($_POST['borrar_4']))
    {

  $ci_estu =  $_POST['ci_estu4'];
  $el_id_estud_es =  $_POST['id_estud_4'];
  $indicativo = '4to';

$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_4to_Final"; 

$estamos_en_ciclo =  $_POST['ciclo_del_4'];

$files = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estud_es.'.*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
} 


      $exitoZ="- 4° Corte o Corte Final, Borrado. ";

             }





?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/lista_estudiantes_search_ape_notas.php"); ?>  <!-- ayuda a hacer el listado -->



<?php

include("../conectar.php");

$query_z_puntaje = "SELECT * FROM z_puntaje where pt_selecc = '1' LIMIT 1";

$datos_z_puntaje = mysqli_query($enlace, $query_z_puntaje) or die(mysqli_error());

$row_datos_z_puntaje = mysqli_fetch_array($datos_z_puntaje );

$la_mitad_es = $row_datos_z_puntaje['el_puntaje']/2;

$el_puntaje_completo_es = $row_datos_z_puntaje['el_puntaje'];

$el_puntaje_aprobatorio_aprox = $row_datos_z_puntaje['el_aproximado'];

$el_id_puntaje_es = $row_datos_z_puntaje['id_puntaje'];


mysqli_close($enlace);

?>  



<div class="se-pre-con"></div>


<div class="content-wrapper">
  <div class="container-fluid">

    <div class="form-row">  


          <div class="col-md-3 col-lg-3 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i><b>Listado de <?php echo $tituloJKL; ?>:</b> </i></div> 

          </div> 


          <div class="col-md-9 col-lg-9 mb-2">
          

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


    <div class="form-row">  

<?php

    include("../conectar.php");

$query_per = "SELECT * FROM  temporada_escolar

WHERE  id_periodo_es = '$el_cicloXX'
GROUP by id_periodo_es limit 1";
         

$datos_per = mysqli_query($enlace, $query_per) or die(mysqli_error());

$row_datos_per = mysqli_fetch_array($datos_per); 

mysqli_close($enlace); 

 ?>



          <div class="col-md-12 col-lg-6 mt-2 mb-2">
<form method="POST">

            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text alert-success">Nueva Busqueda Ciclo &nbsp;<b><?php echo $row_datos_per['periodo_escolar']; ?></b></span>
            </div>

            <input type="hidden" id="ciclo_cicloso" name="ciclo_cicloso" value="<?php echo $el_cicloXX; ?>">
            <input type="text" class="form-control" name="buscar_estud" placeholder="Ingrese el o los apellidos del estudiante." aria-label="">
            <div class="input-group-append">
              <button type="submit" name="buscalo" class="btn btn-success"><i style="color:white;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>


          </div>


 </form>

          </div>
    </div>



<div class="text-muted mt-1">El icono de la impresora " <span style="color: orange;"><i class="fas fa-print fa-lg"></i></span> " indica que el alumno está inscrito y cuando se muestra en color negro
" <span style="color: black;"> <i class="fas fa-print fa-lg"></i></span> " indica pre-inscrito.</div>


<div class="text-muted mt-1">Por intermedio del icono " <span style="color: grey;"><i class="fas fa-id-card"></i></span> " puede imprimir el carnet del alumno, para ello el alumno debe estar inscrito correctamente.</div>



<div class="text-muted mt-1">Al usar el icono " <span style="color: green;"><i class="fas fa-folder-plus fa-lg"></i></span> " incorpora al alumno, al listado de actividades extra catedra.</div>



<link rel="stylesheet" type="text/css" href="01 css/file-upload.css" />
<script src="02 js/file-upload.js"></script>


  <div class="card mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-sm table-hover" id="dataTable" width="100%" cellspacing="0"  >
             
              <thead>
                <tr>
                  
                  <th>Datos:</th>
                 


                  
                  <th><i class="fas fa-camera"></i></th>
                 
                   <th>Estudiante:</th>
         

                  
                  <th style="background-color: #EBF0F1;">Representante:</th>
                  

                  <th >Notas y/o Boletas:</th>

                   <th>Previsualización (Incluye Sumatoria del Aux Final):</th>   


                  <th>Opción:</th>
                  
                </tr>
              </thead>
                          
              
              <tbody>

                <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->

                <tr>


<td class="align-middle" align="center"><span class="text-muted">Exp:</span> <br>  <?php echo $row_datos_estudiantes['estu_expediente']; ?>
              <br><span class="text-muted"> Doc. Id:</span><br>  <?php echo $row_datos_estudiantes['ci_estu']; $id_del_estu = $row_datos_estudiantes['id_estud']; ?> </td>
              

                  








                    <td class="align-middle" align="center">


<div class="row mr-1 ml-1"> 

<?php

include("../conectar.php");

  $el_id_es =  $row_datos_estudiantes['id_estud'];   

$directory = "../0000 Fotos Respaldo/*/";
$filecount = 0;
$files = glob($directory.''.$el_id_es.'_*.png');
if ($files){
 $filecount = count($files);
}

mysqli_close($enlace); 


if ($filecount == '0') {
  $el_col_es = 'col-lg-12';
  $div_estado = 'visibility: hidden';
}

else {
  $el_col_es = 'col-lg-6';
  $div_estado = '';
}



 ?>

<style type="text/css">
  
#slideshow<?php echo $row_datos_estudiantes['id_estud']; ?> { 
  margin: 1px auto; 
  position: relative; 
  width: 87.5px; 
  height: 112.5px; 
  padding: 1px; 
  box-shadow: 0 0 10px rgba(0,0,0,0.4); 
}

#slideshow<?php echo $row_datos_estudiantes['id_estud']; ?> > div { 
  position: absolute; 
  top: 2px; 
  left: 1px; 
  right: 1px; 
  bottom: 1px; 
}


</style>




<div id="slideshow<?php echo $row_datos_estudiantes['id_estud']; ?>">
  <div>
    <img id="" src="<?php echo $row_datos_estudiantes['foto_estu']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio5.jpg';" width="84px" /> 
  </div>




<?php

             

                  $dir = '../0000 Fotos Respaldo/*/';
                  $comienzo = '<img id="myImgalt" src=" ';
                  $final = '" width="40px" />';

                  $num = 0;

include("../conectar.php");



foreach(glob($dir.''.$el_id_es.'_*.png') as $file) {

  if ($num < 18) {
    $num++;

echo '<div>';
echo '<img id="" src="'.$file.'" width="88px" /> ';
echo '</div>';
    
  }

  else {break;}

   


}

             


mysqli_close($enlace);  

                    ?>  </div>


<script type="text/javascript">
  

$("#slideshow<?php echo $row_datos_estudiantes['id_estud']; ?> > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow<?php echo $row_datos_estudiantes['id_estud']; ?> > div:first')
  .fadeOut(1000)
  .next()
  .fadeIn(1000)
  .end()
  .appendTo('#slideshow<?php echo $row_datos_estudiantes['id_estud']; ?>');
}, 5000);



</script>



<br>

<span class="mt-2" style="color:orange; font-size: 14px;"><b><i>

<?php 

$mensaje = '';

$el_becario = $row_datos_estudiantes['id_estud'];

include("../conectar.php");


$querybbb = "SELECT * FROM extra_catedra 
         WHERE   id_estud = '$el_becario'
         and id_area = '88' limit 1 " ;

$datos_controlbbb = mysqli_query($enlace, $querybbb) or die(mysqli_error());

$totalRows_datos_controlbbb = mysqli_num_rows($datos_controlbbb); 


$datos_controlbbb_valores = mysqli_fetch_array($datos_controlbbb); 


mysqli_close($enlace);


if ($totalRows_datos_controlbbb >=1) {
    $mensaje = '- Posee Beca:';
    
}

else {
  $mensaje = '';
}
echo $mensaje;
?> </i></b></span> <span style="color:#ED6428; font-size: 14px;"> <?php echo $datos_controlbbb_valores['obs_catedra']; ?> </span>




                   </td>






<?php   

$id_estxx1 = $row_datos_estudiantes['id_estud'];


include("../conectar.php"); 

$reg_estu_HOYx = "SELECT * FROM grados, secciones, edades, reg_estu_actual  
           WHERE  grados.id_grado  = reg_estu_actual.grado_actual             
             and  secciones.id_seccion = reg_estu_actual.id_seccion
             and edades.id_edad = reg_estu_actual.edad_actual
             and id_estud = '$id_estxx1'

             and reg_estu_actual.cursa_actualmente = '$el_cicloXX'
            ORDER BY id_reg_estu_actual DESC LIMIT 1";   // me selecciona el ultimo es decir el actual en curso

$q_reg_estu_HOYx = mysqli_query($enlace, $reg_estu_HOYx) or die(mysqli_error());

$r_d_reg_estu_HOYx = mysqli_fetch_array($q_reg_estu_HOYx); 





$reg_estu_datax = "SELECT * FROM religiones, tb_medicos, reg_estudiantes  
           WHERE  religiones.id_religion  = reg_estudiantes.id_religion             
             and  tb_medicos.id_medico = reg_estudiantes.id_medico
             
             and reg_estudiantes.id_estud = '$id_estxx1'

            
            GROUP BY id_estud LIMIT 1";   // me selecciona el ultimo es decir el actual en curso

$q_reg_estu_datax = mysqli_query($enlace, $reg_estu_datax) or die(mysqli_error());

$r_d_reg_estu_datax = mysqli_fetch_array($q_reg_estu_datax); 






 $remarcador = "SELECT obs_estud FROM obs_estu
              WHERE  id_estud = '$id_estxx1' limit 1   ";

$query_remarcador = mysqli_query($enlace, $remarcador);

$dato_remarcador = mysqli_fetch_array($query_remarcador); 

$la_obs = $dato_remarcador['obs_estud'];



mysqli_close($enlace);

$bgBB_es = '';
$bg_es = '';

$needle_a = 'a';

if (strpos($la_obs,$needle_a) !== false) {
    $bg_es = '#F9EED4';
}


$needle_e = 'e';

if (strpos($la_obs,$needle_e) !== false) {
    $bg_es = '#F9EED4';
}


$needle_i = 'i';

if (strpos($la_obs,$needle_i) !== false) {
    $bg_es = '#F9EED4';
}


$needle_o = 'o';

if (strpos($la_obs,$needle_o) !== false) {
    $bg_es = '#F9EED4';
}


$needle_u = 'u';

if (strpos($la_obs,$needle_u) !== false) {
    $bg_es = '#F9EED4';
}               



$needle_aa = 'A';

if (strpos($la_obs,$needle_aa) !== false) {
    $bg_es = '#F9EED4';
}


$needle_ee = 'E';

if (strpos($la_obs,$needle_ee) !== false) {
    $bg_es = '#F9EED4';
}


$needle_ii = 'I';

if (strpos($la_obs,$needle_ii) !== false) {
    $bg_es = '#F9EED4';
}


$needle_oo = 'O';

if (strpos($la_obs,$needle_oo) !== false) {
    $bg_es = '#F9EED4';
}


$needle_uu = 'U';

if (strpos($la_obs,$needle_uu) !== false) {
    $bg_es = '#F9EED4';
}

              




                  
?>


    <td class="align-middle" align="center"  style="background-color: <?php echo $bg_es;?>;">

       <?php  if ( $row_datos_estudiantes['retirado_si_o_no'] == '1') {
      $resultiBB = '<b><span style="color:purple;"> " RETIRADO " <i class="fas fa-hand-paper fa-lg"></i> </span></b>&nbsp;<br>'  ;
      $bgBB_es = '#F8D8CA';
      echo $resultiBB;
    }


    if ( $row_datos_estudiantes['int_si_o_no'] == '1') {
      $simbol = '<span style="color:orange;"><i class="far fa-lightbulb fa-lg"></i></span>&nbsp;&nbsp;'  ;
      echo $simbol;
    }

     echo $row_datos_estudiantes['apellidos_estu'];?>,<br>
                   <?php echo $row_datos_estudiantes['nombre_estu'];  ?>  <br><span style="color: #417FD5;">"Edad: <b><?php echo $r_d_reg_estu_HOYx['nombre_edad']; ?></b> años."   </span> 
                    <span style="color: green;"><i>-</i></span> <span><b><?php echo $r_d_reg_estu_datax['tipo_religion']; ?></b></span><br>
                  <span style="color: red;"><i class="fab fa-medrt"></i></span> <span><?php echo $r_d_reg_estu_datax['nombre_medico']; ?></span><br>
                  <span style="color:#EF1752;"><?php echo $la_obs; ?></span>
                    

<span style="color:red;"><b>
<?php  

$el_es = $row_datos_estudiantes['id_estud'];

include("../conectar.php");

$buscar_todos = "SELECT * FROM citas where id_estud = '$el_es' ORDER BY fecha_cita ASC ";   

$encuentralos_ya = mysqli_query($enlace, $buscar_todos) or die(mysqli_error());   

$creame_una_lista = mysqli_fetch_array($encuentralos_ya);

$totalRows_findx = mysqli_num_rows($encuentralos_ya);    

mysqli_close($enlace);    



if ($totalRows_findx >="1") {
  
echo "Citas por:";

do{   ?>

 <span style="color:#334d00;"><b>

   <?php   echo $creame_una_lista['causa_cita']; ?>, </b></span>

<?php   }  while ( $creame_una_lista = mysqli_fetch_array($encuentralos_ya) ); 

}


  ?>




                 </b> </span>

 <?php

if ($r_d_reg_estu_HOYx['fecha_inscripcion'] != "" ) {


   $fecha_formateadAAA = date('d-m-Y', strtotime($r_d_reg_estu_HOYx['fecha_inscripcion']));

    echo "Inscrito(a) el:&nbsp;";
    echo "<span style=\"color:green;\">";
    echo $fecha_formateadAAA;
    echo "</span>";

 } 

  ?><br><b>En:</b>   <?php echo $r_d_reg_estu_HOYx['nombre_grados']; ?>  "<b><?php echo $r_d_reg_estu_HOYx['nombre_seccion']; ?></b> "



                </td>





         





<?php

include("../conectar.php"); 

$query_YYY = "SELECT * FROM reg_estu_repre_all, reg_representante

         WHERE  reg_estu_repre_all.id_repre = reg_representante.id_repre
         and reg_estu_repre_all.id_estu = '$id_estxx1' ";

$datos_estudiantes_YYY = mysqli_query($enlace, $query_YYY) or die(mysqli_error());

$row_datos_estudiantes_YYY = mysqli_fetch_array($datos_estudiantes_YYY); 

// $row_datos_plantilla = mysqli_fetch_assoc($datos_plantilla);

mysqli_close($enlace);

?>





                







                  

                  




             
                  <td class="align-middle" align="center" style="background-color: #EBF0F1;">

                        <?php echo $row_datos_estudiantes_YYY['apellido_repre']; ?>,<br>
                   <?php echo $row_datos_estudiantes_YYY['nombre_repre']; ?><br>

                     <b><a href="plantilla_representantes_search.php?tituloJKL=Resultados...&criterio=<?php echo $row_datos_estudiantes_YYY['ci_repre']; ?>"><i class="fas fa-link"></i> <?php echo $row_datos_estudiantes_YYY['ci_repre']; ?></a></b>

                     <br>

                  <img id="myImg" src="<?php echo $row_datos_estudiantes_YYY['foto_ci_repre']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio3.jpg';" width="105px" />


<?php


include("../conectar.php");

$el_doc_repre_es = $row_datos_estudiantes_YYY['ci_repre'];

$queryP_detectar = " SELECT * FROM plantilla_contratados, plantilla_personal, plantilla_cargos, cargos_all
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
         and  plantilla_contratados.id_contrato = cargos_all.id_contrato
        and  plantilla_cargos.id_cargo = cargos_all.id_cargo
        and plantilla_contratados.status = 1
        and plantilla_personal.ci_per = '$el_doc_repre_es'
        ORDER BY apellido_per asc limit 1   " ;

$datos_controlP_detectar = mysqli_query($enlace, $queryP_detectar) or die(mysqli_error());

$row_datos_controlP_detectar = mysqli_fetch_assoc($datos_controlP_detectar);

$totalRows_controlP_detectar = mysqli_num_rows($datos_controlP_detectar); 

mysqli_close($enlace);



$frase_previa = '';
$espacio = '   ';
$trabaja_de = '';
$saltarinbb = '';
$icono_giro = '';

if ($totalRows_controlP_detectar >= 1 ) {


$frase_previa = 'Labora en el plantel:';
    
$el_contrato_es = $row_datos_controlP_detectar['id_contrato'];


include("../conectar.php");

$queryH = "SELECT * FROM cargos_all, plantilla_cargos
                        
          WHERE  cargos_all.id_cargo = plantilla_cargos.id_cargo
          and    cargos_all.id_contrato = '$el_contrato_es' order by id_cargos_all asc limit 1
          
            ";

$datos_plantillaH = mysqli_query($enlace, $queryH) or die(mysqli_error());

$row_datos_plantillaH = mysqli_fetch_array($datos_plantillaH); 

$trabaja_de = $row_datos_plantillaH['nombre_cargo'];

$icono_giro = '<i class="fas fa-spinner fa-pulse fa-lg"></i>';
$saltarinbb = '<br>';

mysqli_close($enlace); 


}   ?>



<span style="color:#ED288B;">  <?php echo $frase_previa; ?> </span>
<span style="color:#ED288B;"><b> <?php echo $trabaja_de; echo $espacio; echo $icono_giro; ?>  </b> </span>









<br>

            <b>Telf(s):</b>      <?php echo $row_datos_estudiantes_YYY['celular_repre']; 

                                                        if (!$row_datos_estudiantes_YYY['telefono_repre'] == "") {       
                                                            echo " <br>" .$row_datos_estudiantes_YYY['telefono_repre'];
                                                          } 
                  ?>


<br>

<?php

include("../conectar.php");

  $querymod_pre = "SELECT id_estud, id_reg_pagos, fecha_inscripcion, el_activo FROM reg_estu_actual
            where id_estud = '$id_estxx1'
            and fecha_inscripcion != ''
            and el_activo = 1
            limit 1 ";

              $datos_mod_pre = mysqli_query($enlace, $querymod_pre) or die(mysqli_error());              
              $row_datos_mod_pre = mysqli_fetch_assoc($datos_mod_pre);
              $el_id_del_pago_es =  $row_datos_mod_pre['id_reg_pagos'];


 $querymod9 = "SELECT * FROM reg_pagos where id_pago = '$el_id_del_pago_es' ";

              $datos_mod9 = mysqli_query($enlace, $querymod9) or die(mysqli_error());
              
              $row_datos_mod9 = mysqli_fetch_array($datos_mod9);


 $query_leyendas = "SELECT * FROM periodo_de_pago  ";

              $datos_leyendas = mysqli_query($enlace, $query_leyendas) or die(mysqli_error());
              
              $row_datos_leyendas = mysqli_fetch_array($datos_leyendas);


                         
              mysqli_close($enlace);   

    $el_pago_id = $row_datos_mod9['id_pago'];

    $todos_los_pagos = "";





if ($el_acceso == 0 ) {
 $acceso_es = '';
}


if ($el_acceso == 1 ) {
 $acceso_es = 'Limitado';
}


if ($row_datos_mod9['1er_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["1er_pago"].', ';
}



if ($row_datos_mod9['2do_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["2do_pago"].', ';
}



if ($row_datos_mod9['3er_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["3er_pago"].', ';
}

if ($row_datos_mod9['4to_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["4to_pago"].', ';
}



if ($row_datos_mod9['5to_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["5to_pago"].', ';
}


if ($row_datos_mod9['6to_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["6to_pago"].', ';
}



if ($row_datos_mod9['7mo_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["7mo_pago"].', ';
}


if ($row_datos_mod9['8vo_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["8vo_pago"].', ';
}


if ($row_datos_mod9['9no_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["9no_pago"].', ';
}


if ($row_datos_mod9['10m_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["10m_pago"].', ';
}



if ($row_datos_mod9['11o_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["11o_pago"].', ';
}


if ($row_datos_mod9['12o_pago'] >= 1 ) {
 $todos_los_pagos.= ' '.$row_datos_leyendas["12o_pago"].', ';
}



?>



<span style="color:green;"><i class="fas fa-hand-holding-usd"></i></span>  
        <span style="color:green; font-size:14px;"><b><?php echo $todos_los_pagos; ?></b></span>  















                  </td>



<td class="align-middle" align="center"  >



    <div class="form-row mb-2">

                      <!--boton 1 -->

<div style="margin-right: -15px;" class="col-lg-6 ">




<script type="text/javascript">
    $(document).ready(function() {
        $('.file-upload').file_upload();
    });
</script>

<?php 


$identifi = $row_datos_estudiantes['ci_estu'];
$id_del_estu = $row_datos_estudiantes['id_estud'];
$indicativo = '1ro';


$boletapdf1 = '../zzz_notas_boletas/zzz_notas_boletas_1er_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.pdf';
$boletapng1 = '../zzz_notas_boletas/zzz_notas_boletas_1er_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.png';
$boletajpg1 = '../zzz_notas_boletas/zzz_notas_boletas_1er_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.jpg';

$si_hay1 ='0';



if (file_exists($boletapdf1)) 
{
  $si_hay1 ='1';
    
  }

if (file_exists($boletapng1)) 
{
  $si_hay1 ='1';
   
  }


if (file_exists($boletajpg1)) 
{
  $si_hay1 ='1';
    
  }



if ($si_hay1 == 0) {
  $respuesta1 = 'show';
  $alterno1 = 'none';
}

else { $respuesta1 = 'none';  $alterno1 = 'show';}



?>


<div style="display: <?php echo $respuesta1; ?>">

<form class="form-horizontal" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <label class="file-upload btn btn-secondary btn-sm">
                1°<input type="file" name="archivo1" id="archivo1<?php echo $row_datos_estudiantes['id_estud']; ?>"  accept=".pdf,.png,.jpg"
                 onchange="document.getElementById('el_subbb1<?php echo $row_datos_estudiantes['id_estud']; ?>').click()">
            </label>
        </div>
    </div>

 <input type="hidden" id="ci_estu1<?php echo $row_datos_estudiantes['id_estud']; ?>"   name="ci_estu1"  value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">

   <input type="hidden" id="id_estud_1"   name="id_estud_1"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

  <input type="hidden" id="ciclo_del_1"   name="ciclo_del_1"  value="<?php echo $periodoo_ciclones; ?>">

  <button type="submit" name="save_1" class="btn btn-primary btn-sm" id="el_subbb1<?php echo $row_datos_estudiantes['id_estud']; ?>"  style="display:none">
  <i class="fas fa-save"></i></button>


</form>

</div>



<div style="display: <?php echo $alterno1; ?>">

<form  method="POST" >
    
     <input type="hidden" id="ci_estu1<?php echo $row_datos_estudiantes['id_estud']; ?>"   name="ci_estu1"  value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">

       <input type="hidden" id="ciclo_del_1"   name="ciclo_del_1"  value="<?php echo $periodoo_ciclones; ?>">
    <input type="hidden" id="id_estud_1"   name="id_estud_1"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

   <button type="submit" name="borrar_1" class="btn btn-outline-danger btn-sm" >
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <b><i class="far fa-trash-alt"></i> 1° </b>
                      </button>

</form>

<?php
$ci_estu = $row_datos_estudiantes['ci_estu'];
$el_id_estu = $row_datos_estudiantes['id_estud'];
$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_1er_Corte"; 
$estamos_en_ciclo =  $periodoo_ciclones;
$indicativo = '1ro';

$files_1 = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estu.'.*'); 

foreach($files_1 as $file_1) { 
   
    if(is_file($file_1))  
    
        // Delete the given file 
       $la_file_1 = $file_1;  
} 
?>

<button onclick="document.getElementById('link_1<?php echo $row_datos_estudiantes['ci_estu']; ?>').click()" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Descargar" >
  <i class="fas fa-download"></i> 1°  </button> <a id="link_1<?php echo $row_datos_estudiantes['ci_estu']; ?>" href="<?php echo $la_file_1; ?>" download hidden></a>

</div> 





</div>





<div class="col-lg-6"  >




<script type="text/javascript">
    $(document).ready(function() {
        $('.file-upload').file_upload();
    });
</script>

<?php 


$identifi = $row_datos_estudiantes['ci_estu'];
$id_del_estu = $row_datos_estudiantes['id_estud'];
$indicativo = '2do';


$boletapdf2 = '../zzz_notas_boletas/zzz_notas_boletas_2do_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.pdf';
$boletapng2 = '../zzz_notas_boletas/zzz_notas_boletas_2do_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.png';
$boletajpg2 = '../zzz_notas_boletas/zzz_notas_boletas_2do_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.jpg';

$si_hay2 ='0';



if (file_exists($boletapdf2)) 
{
  $si_hay2 ='1';
    
  }

if (file_exists($boletapng2)) 
{
  $si_hay2 ='1';
   
  }


if (file_exists($boletajpg2)) 
{
  $si_hay2 ='1';
    
  }



if ($si_hay2 == 0) {
  $respuesta2 = 'show';
  $alterno2 = 'none';
}

else { $respuesta2 = 'none';  $alterno2 = 'show';}



?>


<div style="display: <?php echo $respuesta2; ?>">

<form class="form-horizontal" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <label class="file-upload btn btn-secondary btn-sm">
                2°<input type="file" name="archivo2" id="archivo2<?php echo $row_datos_estudiantes['id_estud']; ?>"  accept=".pdf,.png,.jpg"
                 onchange="document.getElementById('el_subbb2<?php echo $row_datos_estudiantes['id_estud']; ?>').click()">
            </label>
        </div>
    </div>

 <input type="hidden" id="ci_estu2<?php echo $row_datos_estudiantes['id_estud']; ?>"   name="ci_estu2"  value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">

 <input type="hidden" id="id_estud_2"   name="id_estud_2"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

   <input type="hidden" id="ciclo_del_2"   name="ciclo_del_2"  value="<?php echo $periodoo_ciclones; ?>">

  <button type="submit" name="save_2" class="btn btn-primary btn-sm" id="el_subbb2<?php echo $row_datos_estudiantes['id_estud']; ?>"  style="display:none">
  <i class="fas fa-save"></i></button>


</form>

</div>



<div style="display: <?php echo $alterno2; ?>">

<form  method="POST" >
    
     <input type="hidden" id="ci_estu2<?php echo $row_datos_estudiantes['id_estud']; ?>"   name="ci_estu2"  value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">

   <input type="hidden" id="ciclo_del_2"   name="ciclo_del_2"  value="<?php echo $periodoo_ciclones; ?>">
    <input type="hidden" id="id_estud_2"   name="id_estud_2"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

   <button type="submit" name="borrar_2" class="btn btn-outline-danger btn-sm" >
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <b><i class="far fa-trash-alt"></i> 2° </b>
                      </button>

</form>


<?php
$ci_estu = $row_datos_estudiantes['ci_estu'];
$el_id_estu = $row_datos_estudiantes['id_estud'];
$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_2do_Corte"; 
$estamos_en_ciclo =  $periodoo_ciclones;
$indicativo = '2do';

$files_2 = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estu.'.*'); 

foreach($files_2 as $file_2) { 
   
    if(is_file($file_2))  
    
        // Delete the given file 
       $la_file_2 = $file_2;  
} 
?>

<button onclick="document.getElementById('link_2<?php echo $row_datos_estudiantes['ci_estu']; ?>').click()" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Descargar" >
  <i class="fas fa-download"></i> 2°  </button> <a id="link_2<?php echo $row_datos_estudiantes['ci_estu']; ?>" href="<?php echo $la_file_2; ?>" download hidden></a>


</div>








</div>



</div>





    









    <div class="form-row mb-2">

                      <!--boton 3 -->

<div style="margin-right: -15px;" class="col-lg-6">




<script type="text/javascript">
    $(document).ready(function() {
        $('.file-upload').file_upload();
    });
</script>

<?php 


$identifi = $row_datos_estudiantes['ci_estu'];
$id_del_estu = $row_datos_estudiantes['id_estud'];
$indicativo = '3ro';


$boletapdf3 = '../zzz_notas_boletas/zzz_notas_boletas_3er_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.pdf';
$boletapng3 = '../zzz_notas_boletas/zzz_notas_boletas_3er_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.png';
$boletajpg3 = '../zzz_notas_boletas/zzz_notas_boletas_3er_Corte/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.jpg';

$si_hay3 ='0';



if (file_exists($boletapdf3)) 
{
  $si_hay3 ='1';
    
  }

if (file_exists($boletapng3)) 
{
  $si_hay3 ='1';
   
  }


if (file_exists($boletajpg3)) 
{
  $si_hay3 ='1';
    
  }



if ($si_hay3 == 0) {
  $respuesta3 = 'show';
  $alterno3 = 'none';
}

else { $respuesta3 = 'none';  $alterno3 = 'show';}



?>


<div style="display: <?php echo $respuesta3; ?>">

<form class="form-horizontal" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <label class="file-upload btn btn-secondary btn-sm">
                3°<input type="file" name="archivo3" id="archivo3<?php echo $row_datos_estudiantes['id_estud']; ?>"  accept=".pdf,.png,.jpg"
                 onchange="document.getElementById('el_subbb3<?php echo $row_datos_estudiantes['id_estud']; ?>').click()">
            </label>
        </div>
    </div>

 <input type="hidden" id="ci_estu3<?php echo $row_datos_estudiantes['id_estud']; ?>"   name="ci_estu3"  value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">

<input type="hidden" id="id_estud_3"   name="id_estud_3"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

    <input type="hidden" id="ciclo_del_3"   name="ciclo_del_3"  value="<?php echo $periodoo_ciclones; ?>">


  <button type="submit" name="save_3" class="btn btn-primary btn-sm" id="el_subbb3<?php echo $row_datos_estudiantes['id_estud']; ?>"  style="display:none">
  <i class="fas fa-save"></i></button>


</form>

</div>



<div style="display: <?php echo $alterno3; ?>">

<form  method="POST" >
    
     <input type="hidden" id="ci_estu3<?php echo $row_datos_estudiantes['id_estud']; ?>"   name="ci_estu3"  value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">

  <input type="hidden" id="ciclo_del_3"   name="ciclo_del_3"  value="<?php echo $periodoo_ciclones; ?>">
   <input type="hidden" id="id_estud_3"   name="id_estud_3"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

   <button type="submit" name="borrar_3" class="btn btn-outline-danger btn-sm" >
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <b><i class="far fa-trash-alt"></i> 3° </b>
                      </button>

</form>

<?php
$ci_estu = $row_datos_estudiantes['ci_estu'];
$el_id_estu = $row_datos_estudiantes['id_estud'];
$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_3er_Corte"; 
$estamos_en_ciclo =  $periodoo_ciclones;
$indicativo = '3ro';

$files_3 = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estu.'.*'); 

foreach($files_3 as $file_3) { 
   
    if(is_file($file_3))  
    
        // Delete the given file 
       $la_file_3 = $file_3;  
} 
?>

<button onclick="document.getElementById('link_3<?php echo $row_datos_estudiantes['ci_estu']; ?>').click()" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Descargar" >
  <i class="fas fa-download"></i> 3°  </button> <a id="link_3<?php echo $row_datos_estudiantes['ci_estu']; ?>" href="<?php echo $la_file_3; ?>" download hidden></a>

</div>





</div>





<div class="col-lg-6"  >




<script type="text/javascript">
    $(document).ready(function() {
        $('.file-upload').file_upload();
    });
</script>

<?php 


$identifi = $row_datos_estudiantes['ci_estu'];
$id_del_estu = $row_datos_estudiantes['id_estud'];
$indicativo = '4to';

$boletapdf4 = '../zzz_notas_boletas/zzz_notas_boletas_4to_Final/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.pdf';
$boletapng4 = '../zzz_notas_boletas/zzz_notas_boletas_4to_Final/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.png';
$boletajpg4 = '../zzz_notas_boletas/zzz_notas_boletas_4to_Final/'.$indicativo.'_'.$periodoo_ciclones.'.'.$id_del_estu.'.jpg';

$si_hay4 ='0';



if (file_exists($boletapdf4)) 
{
  $si_hay4 ='1';
    
  }

if (file_exists($boletapng4)) 
{
  $si_hay4 ='1';
   
  }


if (file_exists($boletajpg4)) 
{
  $si_hay4 ='1';
    
  }



if ($si_hay4 == 0) {
  $respuesta4 = 'show';
  $alterno4 = 'none';
}

else { $respuesta4 = 'none';  $alterno4 = 'show';}



?>


<div style="display: <?php echo $respuesta4; ?>">

<form class="form-horizontal" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <label class="file-upload btn btn-secondary btn-sm">
                4°<input type="file" name="archivo4" id="archivo4<?php echo $row_datos_estudiantes['id_estud']; ?>"  accept=".pdf,.png,.jpg"
                 onchange="document.getElementById('el_subbb4<?php echo $row_datos_estudiantes['id_estud']; ?>').click()">
            </label>
        </div>
    </div>

 <input type="hidden" id="ci_estu4<?php echo $row_datos_estudiantes['id_estud']; ?>"   name="ci_estu4"  value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">

     <input type="hidden" id="ciclo_del_4"   name="ciclo_del_4"  value="<?php echo $periodoo_ciclones; ?>">

    <input type="hidden" id="id_estud_4"   name="id_estud_4"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

  <button type="submit" name="save_4" class="btn btn-primary btn-sm" id="el_subbb4<?php echo $row_datos_estudiantes['id_estud']; ?>"  style="display:none">
  <i class="fas fa-save"></i></button>


</form>

</div>



<div style="display: <?php echo $alterno4; ?>">

<form  method="POST" >
    
     <input type="hidden" id="ci_estu4<?php echo $row_datos_estudiantes['id_estud']; ?>"   name="ci_estu4"  value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">

  <input type="hidden" id="ciclo_del_4"   name="ciclo_del_4"  value="<?php echo $periodoo_ciclones; ?>">
            <input type="hidden" id="id_estud_4"   name="id_estud_4"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

   <button type="submit" name="borrar_4" class="btn btn-outline-danger btn-sm" >
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <b><i class="far fa-trash-alt"></i> 4° </b>
                      </button>

</form>

<?php
$ci_estu = $row_datos_estudiantes['ci_estu'];
$el_id_estu = $row_datos_estudiantes['id_estud'];
$folder_path = "../zzz_notas_boletas/zzz_notas_boletas_4to_Final"; 
$estamos_en_ciclo =  $periodoo_ciclones;
$indicativo = '4to';

$files_4 = glob($folder_path.'/'.$indicativo.'_'.$estamos_en_ciclo.'.'.$el_id_estu.'.*'); 

foreach($files_4 as $file_4) { 
   
    if(is_file($file_4))  
    
        // Delete the given file 
       $la_file_4 = $file_4;  
} 
?>

<button onclick="document.getElementById('link_4<?php echo $row_datos_estudiantes['ci_estu']; ?>').click()" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Descargar" >
  <i class="fas fa-download"></i> 4°  </button> <a id="link_4<?php echo $row_datos_estudiantes['ci_estu']; ?>" href="<?php echo $la_file_4; ?>" download hidden></a>

</div>







</div>



</div>





 </td>







<td class="align-middle" align="center"  >






 <?php      //   para setear los colores, de esta manera solo se ha de cambiar una sola variable y se riega en todas
           //  las filas de la tabla....

$color0 =  '#DCDAD7';

$color1 =  '#DCF6C0';

$color2 =  '#F6EFC0';

$color3 =  '#F6DDC0';




include("../conectar.php");

$el_gradoXX = $r_d_reg_estu_HOYx['grado_actual'];


$queryasignaturas = "SELECT * FROM asignatura_ciclo_grado, temporada_escolar, grados, asignaturas 
         WHERE   temporada_escolar.id_periodo_es = asignatura_ciclo_grado.id_del_ciclo
         and grados.id_grado = asignatura_ciclo_grado.id_del_grado
         and asignaturas.id_asign = asignatura_ciclo_grado.id_asignatura         
         
         and  asignatura_ciclo_grado.id_del_ciclo = $el_cicloXX
         and  asignatura_ciclo_grado.id_del_grado = $el_gradoXX
                 
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado ORDER BY id_asign_ciclo_grado ASC" ;

$datos_controlasign = mysqli_query($enlace, $queryasignaturas) or die(mysqli_error());
$row_datos_controlasign = mysqli_fetch_array($datos_controlasign); 
$totalRows_controlasign = mysqli_num_rows($datos_controlasign); 
$las_asignaturas = $row_datos_controlasign["id_asignatura"];


$porcentaje_A1_L1_N1 = ($row_datos_controlasign["A11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A1_L1_N2 = ($row_datos_controlasign["A12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L1_N3 = ($row_datos_controlasign["A13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L1_N4 = ($row_datos_controlasign["A14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L1_N5 = ($row_datos_controlasign["A15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L1_N6 = ($row_datos_controlasign["A16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L1_N7 = ($row_datos_controlasign["A17"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L2_N1 = ($row_datos_controlasign["A21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L2_N2 = ($row_datos_controlasign["A22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L2_N3 = ($row_datos_controlasign["A23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L2_N4 = ($row_datos_controlasign["A24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L2_N5 = ($row_datos_controlasign["A25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L2_N6 = ($row_datos_controlasign["A26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L2_N7 = ($row_datos_controlasign["A27"] * $el_puntaje_completo_es)/100;
$porcentaje_A1_L3_N1 = ($row_datos_controlasign["A31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L3_N2 = ($row_datos_controlasign["A32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L3_N3 = ($row_datos_controlasign["A33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L3_N4 = ($row_datos_controlasign["A34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L3_N5 = ($row_datos_controlasign["A35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L3_N6 = ($row_datos_controlasign["A36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A1_L3_N7 = ($row_datos_controlasign["A37"] * $el_puntaje_completo_es)/100; 

$porcentaje_A2_L1_N1 = ($row_datos_controlasign["B11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A2_L1_N2 = ($row_datos_controlasign["B12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L1_N3 = ($row_datos_controlasign["B13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L1_N4 = ($row_datos_controlasign["B14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L1_N5 = ($row_datos_controlasign["B15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L1_N6 = ($row_datos_controlasign["B16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L1_N7 = ($row_datos_controlasign["B17"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L2_N1 = ($row_datos_controlasign["B21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L2_N2 = ($row_datos_controlasign["B22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L2_N3 = ($row_datos_controlasign["B23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L2_N4 = ($row_datos_controlasign["B24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L2_N5 = ($row_datos_controlasign["B25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L2_N6 = ($row_datos_controlasign["B26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L2_N7 = ($row_datos_controlasign["B27"] * $el_puntaje_completo_es)/100;
$porcentaje_A2_L3_N1 = ($row_datos_controlasign["B31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L3_N2 = ($row_datos_controlasign["B32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L3_N3 = ($row_datos_controlasign["B33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L3_N4 = ($row_datos_controlasign["B34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L3_N5 = ($row_datos_controlasign["B35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L3_N6 = ($row_datos_controlasign["B36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A2_L3_N7 = ($row_datos_controlasign["B37"] * $el_puntaje_completo_es)/100;

$porcentaje_A3_L1_N1 = ($row_datos_controlasign["C11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A3_L1_N2 = ($row_datos_controlasign["C12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L1_N3 = ($row_datos_controlasign["C13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L1_N4 = ($row_datos_controlasign["C14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L1_N5 = ($row_datos_controlasign["C15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L1_N6 = ($row_datos_controlasign["C16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L1_N7 = ($row_datos_controlasign["C17"] * $el_puntaje_completo_es)/100;
$porcentaje_A3_L2_N1 = ($row_datos_controlasign["C21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L2_N2 = ($row_datos_controlasign["C22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L2_N3 = ($row_datos_controlasign["C23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L2_N4 = ($row_datos_controlasign["C24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L2_N5 = ($row_datos_controlasign["C25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L2_N6 = ($row_datos_controlasign["C26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L2_N7 = ($row_datos_controlasign["C27"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L3_N1 = ($row_datos_controlasign["C31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L3_N2 = ($row_datos_controlasign["C32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L3_N3 = ($row_datos_controlasign["C33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L3_N4 = ($row_datos_controlasign["C34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L3_N5 = ($row_datos_controlasign["C35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L3_N6 = ($row_datos_controlasign["C36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A3_L3_N7 = ($row_datos_controlasign["C37"] * $el_puntaje_completo_es)/100;  

$porcentaje_A4_L1_N1 = ($row_datos_controlasign["D11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A4_L1_N2 = ($row_datos_controlasign["D12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L1_N3 = ($row_datos_controlasign["D13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L1_N4 = ($row_datos_controlasign["D14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L1_N5 = ($row_datos_controlasign["D15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L1_N6 = ($row_datos_controlasign["D16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L1_N7 = ($row_datos_controlasign["D17"] * $el_puntaje_completo_es)/100;
$porcentaje_A4_L2_N1 = ($row_datos_controlasign["D21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L2_N2 = ($row_datos_controlasign["D22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L2_N3 = ($row_datos_controlasign["D23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L2_N4 = ($row_datos_controlasign["D24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L2_N5 = ($row_datos_controlasign["D25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L2_N6 = ($row_datos_controlasign["D26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L2_N7 = ($row_datos_controlasign["D27"] * $el_puntaje_completo_es)/100;
$porcentaje_A4_L3_N1 = ($row_datos_controlasign["D31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L3_N2 = ($row_datos_controlasign["D32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L3_N3 = ($row_datos_controlasign["D33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L3_N4 = ($row_datos_controlasign["D34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L3_N5 = ($row_datos_controlasign["D35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L3_N6 = ($row_datos_controlasign["D36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A4_L3_N7 = ($row_datos_controlasign["D37"] * $el_puntaje_completo_es)/100; 

$porcentaje_A5_L1_N1 = ($row_datos_controlasign["E11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A5_L1_N2 = ($row_datos_controlasign["E12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L1_N3 = ($row_datos_controlasign["E13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L1_N4 = ($row_datos_controlasign["E14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L1_N5 = ($row_datos_controlasign["E15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L1_N6 = ($row_datos_controlasign["E16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L1_N7 = ($row_datos_controlasign["E17"] * $el_puntaje_completo_es)/100;
$porcentaje_A5_L2_N1 = ($row_datos_controlasign["E21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L2_N2 = ($row_datos_controlasign["E22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L2_N3 = ($row_datos_controlasign["E23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L2_N4 = ($row_datos_controlasign["E24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L2_N5 = ($row_datos_controlasign["E25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L2_N6 = ($row_datos_controlasign["E26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L2_N7 = ($row_datos_controlasign["E27"] * $el_puntaje_completo_es)/100;
$porcentaje_A5_L3_N1 = ($row_datos_controlasign["E31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L3_N2 = ($row_datos_controlasign["E32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L3_N3 = ($row_datos_controlasign["E33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L3_N4 = ($row_datos_controlasign["E34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L3_N5 = ($row_datos_controlasign["E35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L3_N6 = ($row_datos_controlasign["E36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A5_L3_N7 = ($row_datos_controlasign["E37"] * $el_puntaje_completo_es)/100; 


$porcentaje_A6_L1_N1 = ($row_datos_controlasign["F11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A6_L1_N2 = ($row_datos_controlasign["F12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L1_N3 = ($row_datos_controlasign["F13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L1_N4 = ($row_datos_controlasign["F14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L1_N5 = ($row_datos_controlasign["F15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L1_N6 = ($row_datos_controlasign["F16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L1_N7 = ($row_datos_controlasign["F17"] * $el_puntaje_completo_es)/100;
$porcentaje_A6_L2_N1 = ($row_datos_controlasign["F21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L2_N2 = ($row_datos_controlasign["F22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L2_N3 = ($row_datos_controlasign["F23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L2_N4 = ($row_datos_controlasign["F24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L2_N5 = ($row_datos_controlasign["F25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L2_N6 = ($row_datos_controlasign["F26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L2_N7 = ($row_datos_controlasign["F27"] * $el_puntaje_completo_es)/100;
$porcentaje_A6_L3_N1 = ($row_datos_controlasign["F31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L3_N2 = ($row_datos_controlasign["F32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L3_N3 = ($row_datos_controlasign["F33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L3_N4 = ($row_datos_controlasign["F34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L3_N5 = ($row_datos_controlasign["F35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L3_N6 = ($row_datos_controlasign["F36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A6_L3_N7 = ($row_datos_controlasign["F37"] * $el_puntaje_completo_es)/100; 

$porcentaje_A7_L1_N1 = ($row_datos_controlasign["G11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A7_L1_N2 = ($row_datos_controlasign["G12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L1_N3 = ($row_datos_controlasign["G13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L1_N4 = ($row_datos_controlasign["G14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L1_N5 = ($row_datos_controlasign["G15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L1_N6 = ($row_datos_controlasign["G16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L1_N7 = ($row_datos_controlasign["G17"] * $el_puntaje_completo_es)/100;
$porcentaje_A7_L2_N1 = ($row_datos_controlasign["G21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L2_N2 = ($row_datos_controlasign["G22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L2_N3 = ($row_datos_controlasign["G23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L2_N4 = ($row_datos_controlasign["G24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L2_N5 = ($row_datos_controlasign["G25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L2_N6 = ($row_datos_controlasign["G26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L2_N7 = ($row_datos_controlasign["G27"] * $el_puntaje_completo_es)/100;
$porcentaje_A7_L3_N1 = ($row_datos_controlasign["G31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L3_N2 = ($row_datos_controlasign["G32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L3_N3 = ($row_datos_controlasign["G33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L3_N4 = ($row_datos_controlasign["G34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L3_N5 = ($row_datos_controlasign["G35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L3_N6 = ($row_datos_controlasign["G36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A7_L3_N7 = ($row_datos_controlasign["G37"] * $el_puntaje_completo_es)/100; 

$porcentaje_A8_L1_N1 = ($row_datos_controlasign["H11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A8_L1_N2 = ($row_datos_controlasign["H12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L1_N3 = ($row_datos_controlasign["H13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L1_N4 = ($row_datos_controlasign["H14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L1_N5 = ($row_datos_controlasign["H15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L1_N6 = ($row_datos_controlasign["H16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L1_N7 = ($row_datos_controlasign["H17"] * $el_puntaje_completo_es)/100;
$porcentaje_A8_L2_N1 = ($row_datos_controlasign["H21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L2_N2 = ($row_datos_controlasign["H22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L2_N3 = ($row_datos_controlasign["H23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L2_N4 = ($row_datos_controlasign["H24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L2_N5 = ($row_datos_controlasign["H25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L2_N6 = ($row_datos_controlasign["H26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L2_N7 = ($row_datos_controlasign["H27"] * $el_puntaje_completo_es)/100;
$porcentaje_A8_L3_N1 = ($row_datos_controlasign["H31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L3_N2 = ($row_datos_controlasign["H32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L3_N3 = ($row_datos_controlasign["H33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L3_N4 = ($row_datos_controlasign["H34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L3_N5 = ($row_datos_controlasign["H35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L3_N6 = ($row_datos_controlasign["H36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A8_L3_N7 = ($row_datos_controlasign["H37"] * $el_puntaje_completo_es)/100;

$porcentaje_A9_L1_N1 = ($row_datos_controlasign["I11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A9_L1_N2 = ($row_datos_controlasign["I12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L1_N3 = ($row_datos_controlasign["I13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L1_N4 = ($row_datos_controlasign["I14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L1_N5 = ($row_datos_controlasign["I15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L1_N6 = ($row_datos_controlasign["I16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L1_N7 = ($row_datos_controlasign["I17"] * $el_puntaje_completo_es)/100;
$porcentaje_A9_L2_N1 = ($row_datos_controlasign["I21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L2_N2 = ($row_datos_controlasign["I22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L2_N3 = ($row_datos_controlasign["I23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L2_N4 = ($row_datos_controlasign["I24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L2_N5 = ($row_datos_controlasign["I25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L2_N6 = ($row_datos_controlasign["I26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L2_N7 = ($row_datos_controlasign["I27"] * $el_puntaje_completo_es)/100;
$porcentaje_A9_L3_N1 = ($row_datos_controlasign["I31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L3_N2 = ($row_datos_controlasign["I32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L3_N3 = ($row_datos_controlasign["I33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L3_N4 = ($row_datos_controlasign["I34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L3_N5 = ($row_datos_controlasign["I35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L3_N6 = ($row_datos_controlasign["I36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A9_L3_N7 = ($row_datos_controlasign["I37"] * $el_puntaje_completo_es)/100;

$porcentaje_A10_L1_N1 = ($row_datos_controlasign["J11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A10_L1_N2 = ($row_datos_controlasign["J12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L1_N3 = ($row_datos_controlasign["J13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L1_N4 = ($row_datos_controlasign["J14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L1_N5 = ($row_datos_controlasign["J15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L1_N6 = ($row_datos_controlasign["J16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L1_N7 = ($row_datos_controlasign["J17"] * $el_puntaje_completo_es)/100;
$porcentaje_A10_L2_N1 = ($row_datos_controlasign["J21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L2_N2 = ($row_datos_controlasign["J22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L2_N3 = ($row_datos_controlasign["J23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L2_N4 = ($row_datos_controlasign["J24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L2_N5 = ($row_datos_controlasign["J25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L2_N6 = ($row_datos_controlasign["J26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L2_N7 = ($row_datos_controlasign["J27"] * $el_puntaje_completo_es)/100;
$porcentaje_A10_L3_N1 = ($row_datos_controlasign["J31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L3_N2 = ($row_datos_controlasign["J32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L3_N3 = ($row_datos_controlasign["J33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L3_N4 = ($row_datos_controlasign["J34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L3_N5 = ($row_datos_controlasign["J35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L3_N6 = ($row_datos_controlasign["J36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A10_L3_N7 = ($row_datos_controlasign["J37"] * $el_puntaje_completo_es)/100; 

$porcentaje_A11_L1_N1 = ($row_datos_controlasign["K11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A11_L1_N2 = ($row_datos_controlasign["K12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L1_N3 = ($row_datos_controlasign["K13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L1_N4 = ($row_datos_controlasign["K14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L1_N5 = ($row_datos_controlasign["K15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L1_N6 = ($row_datos_controlasign["K16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L1_N7 = ($row_datos_controlasign["K17"] * $el_puntaje_completo_es)/100;
$porcentaje_A11_L2_N1 = ($row_datos_controlasign["K21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L2_N2 = ($row_datos_controlasign["K22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L2_N3 = ($row_datos_controlasign["K23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L2_N4 = ($row_datos_controlasign["K24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L2_N5 = ($row_datos_controlasign["K25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L2_N6 = ($row_datos_controlasign["K26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L2_N7 = ($row_datos_controlasign["K27"] * $el_puntaje_completo_es)/100;
$porcentaje_A11_L3_N1 = ($row_datos_controlasign["K31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L3_N2 = ($row_datos_controlasign["K32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L3_N3 = ($row_datos_controlasign["K33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L3_N4 = ($row_datos_controlasign["K34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L3_N5 = ($row_datos_controlasign["K35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L3_N6 = ($row_datos_controlasign["K36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A11_L3_N7 = ($row_datos_controlasign["K37"] * $el_puntaje_completo_es)/100;

$porcentaje_A12_L1_N1 = ($row_datos_controlasign["L11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A12_L1_N2 = ($row_datos_controlasign["L12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L1_N3 = ($row_datos_controlasign["L13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L1_N4 = ($row_datos_controlasign["L14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L1_N5 = ($row_datos_controlasign["L15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L1_N6 = ($row_datos_controlasign["L16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L1_N7 = ($row_datos_controlasign["L17"] * $el_puntaje_completo_es)/100;
$porcentaje_A12_L2_N1 = ($row_datos_controlasign["L21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L2_N2 = ($row_datos_controlasign["L22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L2_N3 = ($row_datos_controlasign["L23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L2_N4 = ($row_datos_controlasign["L24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L2_N5 = ($row_datos_controlasign["L25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L2_N6 = ($row_datos_controlasign["L26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L2_N7 = ($row_datos_controlasign["L27"] * $el_puntaje_completo_es)/100;
$porcentaje_A12_L3_N1 = ($row_datos_controlasign["L31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L3_N2 = ($row_datos_controlasign["L32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L3_N3 = ($row_datos_controlasign["L33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L3_N4 = ($row_datos_controlasign["L34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L3_N5 = ($row_datos_controlasign["L35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L3_N6 = ($row_datos_controlasign["L36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A12_L3_N7 = ($row_datos_controlasign["L37"] * $el_puntaje_completo_es)/100; 



$porcentaje_A13_L1_N1 = ($row_datos_controlasign["M11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A13_L1_N2 = ($row_datos_controlasign["M12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L1_N3 = ($row_datos_controlasign["M13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L1_N4 = ($row_datos_controlasign["M14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L1_N5 = ($row_datos_controlasign["M15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L1_N6 = ($row_datos_controlasign["M16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L1_N7 = ($row_datos_controlasign["M17"] * $el_puntaje_completo_es)/100;
$porcentaje_A13_L2_N1 = ($row_datos_controlasign["M21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L2_N2 = ($row_datos_controlasign["M22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L2_N3 = ($row_datos_controlasign["M23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L2_N4 = ($row_datos_controlasign["M24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L2_N5 = ($row_datos_controlasign["M25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L2_N6 = ($row_datos_controlasign["M26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L2_N7 = ($row_datos_controlasign["M27"] * $el_puntaje_completo_es)/100;
$porcentaje_A13_L3_N1 = ($row_datos_controlasign["M31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L3_N2 = ($row_datos_controlasign["M32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L3_N3 = ($row_datos_controlasign["M33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L3_N4 = ($row_datos_controlasign["M34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L3_N5 = ($row_datos_controlasign["M35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L3_N6 = ($row_datos_controlasign["M36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A13_L3_N7 = ($row_datos_controlasign["M37"] * $el_puntaje_completo_es)/100; 



$porcentaje_A14_L1_N1 = ($row_datos_controlasign["N11"] * $el_puntaje_completo_es)/100;        
$porcentaje_A14_L1_N2 = ($row_datos_controlasign["N12"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L1_N3 = ($row_datos_controlasign["N13"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L1_N4 = ($row_datos_controlasign["N14"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L1_N5 = ($row_datos_controlasign["N15"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L1_N6 = ($row_datos_controlasign["N16"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L1_N7 = ($row_datos_controlasign["N17"] * $el_puntaje_completo_es)/100;
$porcentaje_A14_L2_N1 = ($row_datos_controlasign["N21"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L2_N2 = ($row_datos_controlasign["N22"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L2_N3 = ($row_datos_controlasign["N23"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L2_N4 = ($row_datos_controlasign["N24"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L2_N5 = ($row_datos_controlasign["N25"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L2_N6 = ($row_datos_controlasign["N26"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L2_N7 = ($row_datos_controlasign["N27"] * $el_puntaje_completo_es)/100;
$porcentaje_A14_L3_N1 = ($row_datos_controlasign["N31"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L3_N2 = ($row_datos_controlasign["N32"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L3_N3 = ($row_datos_controlasign["N33"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L3_N4 = ($row_datos_controlasign["N34"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L3_N5 = ($row_datos_controlasign["N35"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L3_N6 = ($row_datos_controlasign["N36"] * $el_puntaje_completo_es)/100; 
$porcentaje_A14_L3_N7 = ($row_datos_controlasign["N37"] * $el_puntaje_completo_es)/100; 


mysqli_close($enlace); 



 ?>





<?php include ("tablero.php"); ?>



 </td>
                  



              





 



                  <td class="align-middle" align="center"> 


<div class="form-row mb-2 ">


<div class="col-lg-11" data-toggle="tooltip" data-placement="top" title="Informe Final." <?php if ($el_gradoXX != 35 && $el_gradoXX != 36 && $el_gradoXX != 37 && $el_gradoXX != 38 && $el_gradoXX != 40  ){?>style="display:none"<?php } ?> >    
 
<form target="_blank" action="zzz_impresiones/informe_final.php" method="POST">

                          <input type="hidden" id="id_estudxxx" name="id_estudxxx" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

                          <input type="hidden" id="exp_estudxxx" name="exp_estudxxx" value="<?php echo $row_datos_estudiantes['estu_expediente']; ?>">

                          <input type="hidden" id="ci_estuxxx" name="ci_estuxxx" value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">



<input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $r_d_reg_estu_HOYx['id_seccion']; ?>">

                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $r_d_reg_estu_HOYx['nombre_grados']; ?>">
                <input type="hidden" id="id_tituloxxxb"  name="id_tituloxxxb"  value="<?php echo $r_d_reg_estu_HOYx['nombre_seccion']; ?>">

                <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="Def">

                <input type="hidden" id="id_estuxxx"  name="id_estuxxx"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">


                        <button type="submit" name="impx" class="btn btn-outline-danger btn-sm"  id="impx">

   <i class="fas fa-vote-yea"></i>  

                    </button>


</form>

 </div>



</div>



















<div class="form-row mb-2 ">

 
<div class="col-lg-11" data-toggle="tooltip" data-placement="top" title="Constancia de Prosecución." <?php if ($el_gradoXX != 54 && $el_gradoXX != 55 ){?>style="display:none"<?php } ?>  >
 
<form target="_blank" action="zzz_impresiones/imp_constancia_1a3p.php" method="POST">

                         <input type="hidden" id="id_estudxxx" name="id_estudxxx" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

                          <input type="hidden" id="exp_estudxxx" name="exp_estudxxx" value="<?php echo $row_datos_estudiantes['estu_expediente']; ?>">

                          <input type="hidden" id="ci_estuxxx" name="ci_estuxxx" value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">

                        <button type="submit" name="impx" class="btn btn-outline-secondary btn-sm"  id="impx">

   <i class="fas fa-scroll"></i>

                    </button>


</form>

 </div>



 <div class="col-lg-11" data-toggle="tooltip" data-placement="top" title="Certificado de Estudios." <?php if ($el_gradoXX != 56 ){?>style="display:none"<?php } ?>  >
 
<form target="_blank" action="zzz_impresiones/imp_certificado_3p_a_1erG.php" method="POST">

                        <input type="hidden" id="id_estudxxx" name="id_estudxxx" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

                          <input type="hidden" id="exp_estudxxx" name="exp_estudxxx" value="<?php echo $row_datos_estudiantes['estu_expediente']; ?>">

                          <input type="hidden" id="ci_estuxxx" name="ci_estuxxx" value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">

                        <button type="submit" name="impx" class="btn btn-outline-secondary btn-sm"  id="impx">

   <i class="fas fa-scroll"></i>

                    </button>


</form>

 </div>


  <div class="col-lg-11" data-toggle="tooltip" data-placement="top" title="Constancia de Prosecución." <?php if ($el_gradoXX != 35 && $el_gradoXX != 36 && $el_gradoXX != 37 && $el_gradoXX != 38 && $el_gradoXX != 40 ){?>style="display:none"<?php } ?>  >    
 
<form target="_blank" action="zzz_impresiones/imp_constancia_1a5g.php" method="POST">

                          <input type="hidden" id="id_estudxxx" name="id_estudxxx" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

                          <input type="hidden" id="exp_estudxxx" name="exp_estudxxx" value="<?php echo $row_datos_estudiantes['estu_expediente']; ?>">

                          <input type="hidden" id="ci_estuxxx" name="ci_estuxxx" value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">

                        <button type="submit" name="impx" class="btn btn-outline-secondary btn-sm"  id="impx">

   <i class="fas fa-scroll"></i>

                    </button>


</form>

 </div>


 <div class="col-lg-11" data-toggle="tooltip" data-placement="top" title="Certificado de Estudios." <?php if ($el_gradoXX != 41 ){?>style="display:none"<?php } ?>  >
 
<form target="_blank" action="zzz_impresiones/imp_certificado_6g_a_1erA.php" method="POST">

                       <input type="hidden" id="id_estudxxx" name="id_estudxxx" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">

                          <input type="hidden" id="exp_estudxxx" name="exp_estudxxx" value="<?php echo $row_datos_estudiantes['estu_expediente']; ?>">

                          <input type="hidden" id="ci_estuxxx" name="ci_estuxxx" value="<?php echo $row_datos_estudiantes['ci_estu']; ?>">

                        <button type="submit" name="impx" class="btn btn-outline-secondary btn-sm"  id="impx">

   <i class="fas fa-scroll"></i>

                    </button>


</form>

 </div>


</div>   <!-- aqui -->



                    <div class="form-row mb-2 mr-1 ">

                      <!--boton 1 -->
                      <div class="col-lg-6" data-toggle="tooltip" data-placement="top" title="Modificar">
  
                      <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                              data-target="#modificar<?php echo $row_datos_estudiantes['id_estud']; ?>">
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <i class="fas fa-edit"></i>
                      </button>

                      </div> 






<!-- ini modal editar -->

<div class="modal fade" id="modificar<?php echo $row_datos_estudiantes['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Editar - Modificar y/o Inscribir!!!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


       <?php include("plantilla_estudiantes_00_mod_pre_alt.php"); ?>


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
        <input type="hidden" id="id_repre"  name="id_repre" value="<?php echo $row_datos_estudiantes_YYY['id_repre']; ?>">

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_selecc" class="btn btn-info" value="<?php echo $row_datos_estudiantes['id_estud']; ?>">
              Modificar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->



                      <!--boton 2 -->
                      <div class="col-lg-6" data-toggle="tooltip" data-placement="top" title="Ver Notas Detalladas."  >

 <button type="button" class="btn btn-outline-warning btn-sm" 
onclick=" window.open('plantilla_control_00_carga_ver_notas.php?id_e=<?php echo $row_datos_estudiantes['id_estud']; ?>&name_e=<?php echo $row_datos_estudiantes['nombre_estu']; ?>&ape_e=<?php echo $row_datos_estudiantes['apellidos_estu']; ?>&expe_e=<?php echo $row_datos_estudiantes['estu_expediente']; ?>&ci_est=<?php echo $row_datos_estudiantes['ci_estu']; ?>&ciclo=<?php echo $el_cicloXX; ?>&grado=<?php echo $el_gradoXX; ?>&las_asignn=<?php echo $las_asignaturas; ?>&id_reg_actual=<?php echo $r_d_reg_estu_HOYx['id_reg_estu_actual']; ?>', '_blank'); return false;">  

                                         <i class="far fa-eye"></i> 

                      </button>



                      </div>



                       


                    </div>

                    </div>












  <div class="form-row mb-2 mr-1 ">



 <div class="col-lg-4" data-toggle="tooltip" data-placement="top" title="1° Boleta Alfanumérica" >

            <form target="_blank" action="zzz_impresiones/imp_boleta_unica_a.php" method="POST">

               <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $r_d_reg_estu_HOYx['id_seccion']; ?>">

                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $r_d_reg_estu_HOYx['nombre_grados']; ?>">
                <input type="hidden" id="id_tituloxxxb"  name="id_tituloxxxb"  value="<?php echo $r_d_reg_estu_HOYx['nombre_seccion']; ?>">

                <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="Def">

                <input type="hidden" id="id_estuxxx"  name="id_estuxxx"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">


                        <button type="submit" name="imp_cartabb" class="btn btn-outline-success btn-sm">
                        <i class="fas fa-dice-d20"></i></button>


            </form>

            </div>






 <div class="col-lg-4" data-toggle="tooltip" data-placement="top" title="2° Boleta Alfanumérica" >

            <form target="_blank" action="zzz_impresiones/imp_boleta_unica_b.php" method="POST">

               <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $r_d_reg_estu_HOYx['id_seccion']; ?>">

                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $r_d_reg_estu_HOYx['nombre_grados']; ?>">
                <input type="hidden" id="id_tituloxxxb"  name="id_tituloxxxb"  value="<?php echo $r_d_reg_estu_HOYx['nombre_seccion']; ?>">

                <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="Def">

                <input type="hidden" id="id_estuxxx"  name="id_estuxxx"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">


                        <button type="submit" name="imp_cartabb" class="btn btn-outline-info btn-sm">
                        <i class="fas fa-dice-d20"></i></button>


            </form>

            </div>









            <div class="col-lg-4" data-toggle="tooltip" data-placement="top" title="3° Boleta Alfanumérica" >

            <form target="_blank" action="zzz_impresiones/imp_boleta_unica.php" method="POST">

               <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
                <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
                <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $r_d_reg_estu_HOYx['id_seccion']; ?>">

                <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $r_d_reg_estu_HOYx['nombre_grados']; ?>">
                <input type="hidden" id="id_tituloxxxb"  name="id_tituloxxxb"  value="<?php echo $r_d_reg_estu_HOYx['nombre_seccion']; ?>">

                <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="Def">

                <input type="hidden" id="id_estuxxx"  name="id_estuxxx"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">


                        <button type="submit" name="imp_cartabb" class="btn btn-outline-dark btn-sm">
                        <i class="fas fa-dice-d20"></i></button>


            </form>

            </div>



 </div>

















                    <div class="form-row mr-1"> 
         




 <div class="col-lg-4" data-toggle="tooltip" data-placement="bottom" title="1° Boleta Descriptiva" >

<form target="_blank" action="zzz_impresiones/imp_boleta_unica_des.php" method="POST">

   <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $r_d_reg_estu_HOYx['id_seccion']; ?>">

    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $r_d_reg_estu_HOYx['nombre_grados']; ?>">
    <input type="hidden" id="id_tituloxxxb"  name="id_tituloxxxb"  value="<?php echo $r_d_reg_estu_HOYx['nombre_seccion']; ?>">

    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="Def">

    <input type="hidden" id="id_estuxxx"  name="id_estuxxx"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">


            <button type="submit" name="imp_cartabb" class="btn btn-outline-success btn-sm">            <i class="fab fa-d-and-d"></i></button>


</form>

</div>











 <div class="col-lg-4" data-toggle="tooltip" data-placement="bottom" title="2° Boleta Descriptiva" >

<form target="_blank" action="zzz_impresiones/imp_boleta_unica_des_b.php" method="POST">

   <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $r_d_reg_estu_HOYx['id_seccion']; ?>">

    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $r_d_reg_estu_HOYx['nombre_grados']; ?>">
    <input type="hidden" id="id_tituloxxxb"  name="id_tituloxxxb"  value="<?php echo $r_d_reg_estu_HOYx['nombre_seccion']; ?>">

    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="Def">

    <input type="hidden" id="id_estuxxx"  name="id_estuxxx"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">


            <button type="submit" name="imp_cartabb" class="btn btn-outline-info btn-sm">            <i class="fab fa-d-and-d"></i></button>


</form>

</div>






 <div class="col-lg-4" data-toggle="tooltip" data-placement="bottom" title="3° Boleta Descriptiva" >

<form target="_blank" action="zzz_impresiones/imp_boleta_unica_des_c.php" method="POST">

   <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $r_d_reg_estu_HOYx['id_seccion']; ?>">

    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $r_d_reg_estu_HOYx['nombre_grados']; ?>">
    <input type="hidden" id="id_tituloxxxb"  name="id_tituloxxxb"  value="<?php echo $r_d_reg_estu_HOYx['nombre_seccion']; ?>">

    <input type="hidden" id="id_lapsoxxx"  name="id_lapsoxxx"  value="Def">

    <input type="hidden" id="id_estuxxx"  name="id_estuxxx"  value="<?php echo $row_datos_estudiantes['id_estud']; ?>">


            <button type="submit" name="imp_cartabb" class="btn btn-outline-dark btn-sm">            <i class="fab fa-d-and-d"></i></button>


</form>

</div>











                    </div>




                  </td>
                  



                </tr>
                


                 <?php } while ($row_datos_estudiantes = mysqli_fetch_assoc($datos_estudiantes)); ?>

                
              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->

       

        <div class="card-footer text-muted"><b>Info:</b> Puede incorporar, retirar, modificar he imprimir datos, así como retirar de la lista a un estudiante.
        <div class="text-muted">Los apellidos, precedidos del icono&nbsp;&nbsp;<span style="color:orange;"><i class="far fa-lightbulb fa-lg"></i></span>&nbsp;&nbsp;
        son indicativos, de que el alumno ha sido pre-inscrito por su representante.</div></div> 


        

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
