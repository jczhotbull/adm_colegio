<?php



include("identificador.php");


if ($_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario'  )

    {

      session_unset();                     // libera todas las variables de sessión
        setcookie("id", "", time()-60*60);   // crea la cookie id con el valor vacio y que caduque una hora antes.
        $_COOKIE ['id']="";                  // borra el valor de id contenido en el cookie, por medida extra

        setcookie("cargo", "", time()-60*60);   // crea la cookie cargo con el valor vacio y que caduque una hora antes.
        $_COOKIE ['cargo']="";                  // borra el valor de cargo contenido en el cookie, por medida extra

        header("Location: ../index.php");   }



$foto_success="";
$foto_danger="";


$filenameZZ = '../z_imagenes/banner' .'.jpg';


$filenameTT = 'zzz_impresiones/header_personal' .'.png';

$filenameTT_new = 'zzz_impresiones/header_certificado' .'.png';
$a_lo_bestia='header.php';

$filenameYYY_new = 'zzz_impresiones/header_escudo' .'.png';





$filenameAA = 'zzz_impresiones/carnet_alt' .'.jpg';

$filenameAA_repre = '../zona_representantes/zzz_impresiones/carnet_alt' .'.jpg';

$filenamePP = 'zzz_impresiones/carnet_plant' .'.jpg';

$filenamePPHH = 'zzz_impresiones/water_mark' .'.png';


// guarda las nomenclaturas







if(isset($_FILES['imageback'])){
    
      $file_name = "back";
      $file_size =$_FILES['imageback']['size'];
      $file_tmp =$_FILES['imageback']['tmp_name'];
 
      $file_type=$_FILES['imageback']['type'];
   

$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES['imageback']['tmp_name']);


if ($mimetype != 'image/png') {
  $errorZ .= "No es un archivo de imagen valido, usar un fondo del tipo -PNG-.";    
}
      


      if($file_size > 19715){
      	$errorZ .= "La imagen debe ser menor a 20Kb.";         
      }



      if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }



      else  // tras haber confirmado el correcto relleno del campo
        {

         move_uploaded_file($file_tmp,"../z_imagenes/".$file_name.".png");

         $exitoZ = "Fondo Actualizado."; 

        }


       if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                                       
                          }



   }








//  guardar_no_entrego

if(isset($_POST['guardar_no_entrego']))
        {

        
            include("../conectar.php");



          $sql88 = "UPDATE z_cabecera SET no_entrego_des = '".mysqli_real_escape_string($enlace,$_POST['no_entregada_des'])."'   ,
                                             no_entrego_abre = '".mysqli_real_escape_string($enlace,$_POST['no_entregada_abrev'])."'  
                                             
                                                            
                                WHERE id_cabecera ='1' ";




                                  if (!mysqli_query($enlace,$sql88))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Leyenda para actividades o trabajos no entregados, actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }


       


 }
























// guarda los indicadores y las ponderaciones maximas para las hojas impresas

if(isset($_POST['indicadores_evaluativos']))
        {


      if (!$_POST['primer_indicador'])      // verifica que no este vacío
    {   $errorZ .= "- 1° indicador requerido. "; }


     if (strlen($_POST['primer_indicador']) >41 )  // no sea mayor a 41 caracteres
                  {   $errorZ .= "- El 1° indicador supera los 41 caracteres."; }    


    if (!$_POST['segunda_indicador'])      // verifica que no este vacío
    {   $errorZ .= "- 2° indicador requerido. "; }


         if (strlen($_POST['segunda_indicador']) >41 )  // no sea mayor a 41 caracteres
                  {   $errorZ .= "- El 2° indicador supera los 41 caracteres."; }  


     if (!$_POST['tercer_indicador'])      // verifica que no este vacío
    {   $errorZ .= "- 3° indicador requerido. "; }


         if (strlen($_POST['tercer_indicador']) >41 )  // no sea mayor a 41 caracteres
                  {   $errorZ .= "- El 3° indicador supera los 41 caracteres."; }  


     if (!$_POST['cuarto_indicador'])      // verifica que no este vacío
    {   $errorZ .= "- 4° indicador requerido. "; }


             if (strlen($_POST['cuarto_indicador']) >41 )  // no sea mayor a 41 caracteres
                  {   $errorZ .= "- El 4° indicador supera los 41 caracteres."; } 


     if (!$_POST['quinto_indicador'])      // verifica que no este vacío
    {   $errorZ .= "- 5° indicador requerido. "; }


                 if (strlen($_POST['quinto_indicador']) >41 )  // no sea mayor a 41 caracteres
                  {   $errorZ .= "- El 5° indicador supera los 41 caracteres."; } 





         if (!$_POST['primer_puntaje'])      // verifica que no este vacío
    {   $errorZ .= "- 1° puntaje ó ponderación requerido. "; }


                     if (strlen($_POST['primer_puntaje']) >2 )  // no sea mayor a 2 caracteres
                  {   $errorZ .= "- El 1° puntaje ó ponderación supera los 2 caracteres."; } 


                  if(!is_numeric($_POST['primer_puntaje']) ) // verifica que sean solo números
    {  $errorZ .= "- El 1° puntaje debe ser númerico. "; }



                           if (!$_POST['segunda_puntaje'])      // verifica que no este vacío
    {   $errorZ .= "- 2° puntaje ó ponderación requerido. "; }


                     if (strlen($_POST['segunda_puntaje']) >2 )  // no sea mayor a 2 caracteres
                  {   $errorZ .= "- El 2° puntaje ó ponderación supera los 2 caracteres."; } 


                                    if(!is_numeric($_POST['segunda_puntaje']) ) // verifica que sean solo números
    {  $errorZ .= "- El 2° puntaje debe ser númerico. "; }



                           if (!$_POST['tercer_puntaje'])      // verifica que no este vacío
    {   $errorZ .= "- 3° puntaje ó ponderación requerido. "; }


                     if (strlen($_POST['tercer_puntaje']) >2 )  // no sea mayor a 2 caracteres
                  {   $errorZ .= "- El 3° puntaje ó ponderación supera los 2 caracteres."; } 


          if(!is_numeric($_POST['tercer_puntaje']) ) // verifica que sean solo números
    {  $errorZ .= "- El 3° puntaje debe ser númerico. "; }




                                   if (!$_POST['cuarto_puntaje'])      // verifica que no este vacío
    {   $errorZ .= "- 4° puntaje ó ponderación requerido. "; }


                     if (strlen($_POST['cuarto_puntaje']) >2 )  // no sea mayor a 2 caracteres
                  {   $errorZ .= "- El 4° puntaje ó ponderación supera los 2 caracteres."; } 


          if(!is_numeric($_POST['cuarto_puntaje']) ) // verifica que sean solo números
    {  $errorZ .= "- El 4° puntaje debe ser númerico. "; }



                                       if (!$_POST['quinto_puntaje'])      // verifica que no este vacío
    {   $errorZ .= "- 5° puntaje ó ponderación requerido. "; }


                     if (strlen($_POST['quinto_puntaje']) >2 )  // no sea mayor a 2 caracteres
                  {   $errorZ .= "- El 5° puntaje ó ponderación supera los 2 caracteres."; } 

   
          if(!is_numeric($_POST['quinto_puntaje']) ) // verifica que sean solo números
    {  $errorZ .= "- El 5° puntaje debe ser númerico. "; } 




     if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }



      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");



          $sql88 = "UPDATE evaluaciones_puntuales SET 1er_eval = '".mysqli_real_escape_string($enlace,$_POST['primer_indicador'])."'   ,
                                             1er_pt = '".mysqli_real_escape_string($enlace,$_POST['primer_puntaje'])."'  ,
                                             2da_eval = '".mysqli_real_escape_string($enlace,$_POST['segunda_indicador'])."'  ,
                                             2da_pt = '".mysqli_real_escape_string($enlace,$_POST['segunda_puntaje'])."'  ,

                                             3er_eval = '".mysqli_real_escape_string($enlace,$_POST['tercer_indicador'])."'   ,
                                             3er_pt = '".mysqli_real_escape_string($enlace,$_POST['tercer_puntaje'])."'  ,
                                             4ta_eval = '".mysqli_real_escape_string($enlace,$_POST['cuarto_indicador'])."'  ,
                                             4ta_pt = '".mysqli_real_escape_string($enlace,$_POST['cuarto_puntaje'])."'  ,

                                             5ta_eval = '".mysqli_real_escape_string($enlace,$_POST['quinto_indicador'])."'   ,
                                             5ta_pt = '".mysqli_real_escape_string($enlace,$_POST['quinto_puntaje'])."'  
                                             
                                                            
                                WHERE id_eval_punt ='1' ";




                                  if (!mysqli_query($enlace,$sql88))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Identificadores y Ponderaciones Actualizadas."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }


        }


 } $machin_bestia=filesize($a_lo_bestia);


if(isset($_POST['update_formato']))
        {

include("../conectar.php");
          $sql88_form_1 = "UPDATE z_formato SET comparativo = '".mysqli_real_escape_string($enlace,$_POST['mod_comparativo_1'])."'   ,
                                             alfabetico = '".mysqli_real_escape_string($enlace,$_POST['mod_alfabetico_1'])."'  ,
                                             literal = '".mysqli_real_escape_string($enlace,$_POST['mod_literal_1'])."'

                                                 , lit_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_lit_des_1'])."'  ,
                                                 alfa_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_alfa_des_1'])."'

                                                 , cualitativa = '".mysqli_real_escape_string($enlace,$_POST['mod_cualitativa_1'])."'  ,
                                                 cua_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_cua_des_1'])."'



                                WHERE id_formato = '1' "; 

                                $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());


          $sql88_form_2 = "UPDATE z_formato SET comparativo = '".mysqli_real_escape_string($enlace,$_POST['mod_comparativo_2'])."'   ,
                                             alfabetico = '".mysqli_real_escape_string($enlace,$_POST['mod_alfabetico_2'])."'  ,
                                             literal = '".mysqli_real_escape_string($enlace,$_POST['mod_literal_2'])."'

                                             , lit_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_lit_des_2'])."'  ,
                                                 alfa_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_alfa_des_2'])."'

                                                  , cualitativa = '".mysqli_real_escape_string($enlace,$_POST['mod_cualitativa_2'])."'  ,
                                                 cua_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_cua_des_2'])."'


                                WHERE id_formato = '2' "; 

                                $sql88_form_2_haz = mysqli_query($enlace,$sql88_form_2) or die(mysqli_error());


          $sql88_form_3 = "UPDATE z_formato SET comparativo = '".mysqli_real_escape_string($enlace,$_POST['mod_comparativo_3'])."'   ,
                                             alfabetico = '".mysqli_real_escape_string($enlace,$_POST['mod_alfabetico_3'])."'  ,
                                             literal = '".mysqli_real_escape_string($enlace,$_POST['mod_literal_3'])."'


                                             , lit_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_lit_des_3'])."'  ,
                                                 alfa_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_alfa_des_3'])."'

                                                  , cualitativa = '".mysqli_real_escape_string($enlace,$_POST['mod_cualitativa_3'])."'  ,
                                                 cua_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_cua_des_3'])."'


                                WHERE id_formato = '3' "; 

                                $sql88_form_3_haz = mysqli_query($enlace,$sql88_form_3) or die(mysqli_error());

          $sql88_form_4 = "UPDATE z_formato SET comparativo = '".mysqli_real_escape_string($enlace,$_POST['mod_comparativo_4'])."'   ,
                                             alfabetico = '".mysqli_real_escape_string($enlace,$_POST['mod_alfabetico_4'])."'  ,
                                             literal = '".mysqli_real_escape_string($enlace,$_POST['mod_literal_4'])."'

                                             , lit_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_lit_des_4'])."'  ,
                                                 alfa_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_alfa_des_4'])."'

                                                  , cualitativa = '".mysqli_real_escape_string($enlace,$_POST['mod_cualitativa_4'])."'  ,
                                                 cua_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_cua_des_4'])."'


                                WHERE id_formato = '4' "; 

                                $sql88_form_4_haz = mysqli_query($enlace,$sql88_form_4) or die(mysqli_error());

          $sql88_form_5 = "UPDATE z_formato SET comparativo = '".mysqli_real_escape_string($enlace,$_POST['mod_comparativo_5'])."'   ,
                                             alfabetico = '".mysqli_real_escape_string($enlace,$_POST['mod_alfabetico_5'])."'  ,
                                             literal = '".mysqli_real_escape_string($enlace,$_POST['mod_literal_5'])."'

                                             , lit_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_lit_des_5'])."'  ,
                                                 alfa_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_alfa_des_5'])."'

                                                  , cualitativa = '".mysqli_real_escape_string($enlace,$_POST['mod_cualitativa_5'])."'  ,
                                                 cua_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_cua_des_5'])."'


                                WHERE id_formato = '5' "; 

                                $sql88_form_5_haz = mysqli_query($enlace,$sql88_form_5) or die(mysqli_error());

          $sql88_form_6 = "UPDATE z_formato SET comparativo = '".mysqli_real_escape_string($enlace,$_POST['mod_comparativo_6'])."'   ,
                                             alfabetico = '".mysqli_real_escape_string($enlace,$_POST['mod_alfabetico_6'])."'  ,
                                             literal = '".mysqli_real_escape_string($enlace,$_POST['mod_literal_6'])."'

                                             , lit_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_lit_des_6'])."'  ,
                                                 alfa_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_alfa_des_6'])."'

                                                  , cualitativa = '".mysqli_real_escape_string($enlace,$_POST['mod_cualitativa_6'])."'  ,
                                                 cua_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_cua_des_6'])."'


                                WHERE id_formato = '6' "; 

                                $sql88_form_6_haz = mysqli_query($enlace,$sql88_form_6) or die(mysqli_error());

          $sql88_form_7 = "UPDATE z_formato SET comparativo = '".mysqli_real_escape_string($enlace,$_POST['mod_comparativo_7'])."'   ,
                                             alfabetico = '".mysqli_real_escape_string($enlace,$_POST['mod_alfabetico_7'])."'  ,
                                             literal = '".mysqli_real_escape_string($enlace,$_POST['mod_literal_7'])."'

                                             , lit_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_lit_des_7'])."'  ,
                                                 alfa_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_alfa_des_7'])."'

                                                  , cualitativa = '".mysqli_real_escape_string($enlace,$_POST['mod_cualitativa_7'])."'  ,
                                                 cua_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_cua_des_7'])."'


                                WHERE id_formato = '7' "; 

                                $sql88_form_7_haz = mysqli_query($enlace,$sql88_form_7) or die(mysqli_error());


                  $sql88_form_8 = "UPDATE z_formato SET comparativo = '".mysqli_real_escape_string($enlace,$_POST['mod_comparativo_8'])."'   ,
                                             alfabetico = '".mysqli_real_escape_string($enlace,$_POST['mod_alfabetico_8'])."'  ,
                                             literal = '".mysqli_real_escape_string($enlace,$_POST['mod_literal_8'])."'

                                             , lit_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_lit_des_8'])."'  ,
                                                 alfa_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_alfa_des_8'])."'

                                                  , cualitativa = '".mysqli_real_escape_string($enlace,$_POST['mod_cualitativa_8'])."'  ,
                                                 cua_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_cua_des_8'])."'


                                WHERE id_formato = '8' "; 

                                $sql88_form_8_haz = mysqli_query($enlace,$sql88_form_8) or die(mysqli_error());

          $sql99_form_9 = "UPDATE z_formato SET comparativo = '".mysqli_real_escape_string($enlace,$_POST['mod_comparativo_9'])."'   ,
                                             alfabetico = '".mysqli_real_escape_string($enlace,$_POST['mod_alfabetico_9'])."'  ,
                                             literal = '".mysqli_real_escape_string($enlace,$_POST['mod_literal_9'])."'

                                             , lit_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_lit_des_9'])."'  ,
                                                 alfa_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_alfa_des_9'])."'

                                                  , cualitativa = '".mysqli_real_escape_string($enlace,$_POST['mod_cualitativa_9'])."'  ,
                                                 cua_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_cua_des_9'])."'


                                WHERE id_formato = '9' "; 

                                $sql99_form_9_haz = mysqli_query($enlace,$sql99_form_9) or die(mysqli_error());

            $sql1010_form_10 = "UPDATE z_formato SET comparativo = '".mysqli_real_escape_string($enlace,$_POST['mod_comparativo_10'])."'   ,
                                             alfabetico = '".mysqli_real_escape_string($enlace,$_POST['mod_alfabetico_10'])."'  ,
                                             literal = '".mysqli_real_escape_string($enlace,$_POST['mod_literal_10'])."'

                                             , lit_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_lit_des_10'])."'  ,
                                                 alfa_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_alfa_des_10'])."'

                                                  , cualitativa = '".mysqli_real_escape_string($enlace,$_POST['mod_cualitativa_10'])."'  ,
                                                 cua_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_cua_des_10'])."'


                                WHERE id_formato = '10' "; 

                                $sql1010_form_10_haz = mysqli_query($enlace,$sql1010_form_10) or die(mysqli_error());

          $sql1111_form_11 = "UPDATE z_formato SET comparativo = '".mysqli_real_escape_string($enlace,$_POST['mod_comparativo_11'])."'   ,
                                             alfabetico = '".mysqli_real_escape_string($enlace,$_POST['mod_alfabetico_11'])."'  ,
                                             literal = '".mysqli_real_escape_string($enlace,$_POST['mod_literal_11'])."'

                                             , lit_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_lit_des_11'])."'  ,
                                                 alfa_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_alfa_des_11'])."'

                                                  , cualitativa = '".mysqli_real_escape_string($enlace,$_POST['mod_cualitativa_11'])."'  ,
                                                 cua_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_cua_des_11'])."'


                                WHERE id_formato = '11' "; 

                                $sql1111_form_11_haz = mysqli_query($enlace,$sql1111_form_11) or die(mysqli_error());

          $sql1212_form_12 = "UPDATE z_formato SET comparativo = '".mysqli_real_escape_string($enlace,$_POST['mod_comparativo_12'])."'   ,
                                             alfabetico = '".mysqli_real_escape_string($enlace,$_POST['mod_alfabetico_12'])."'  ,
                                             literal = '".mysqli_real_escape_string($enlace,$_POST['mod_literal_12'])."'

                                             , lit_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_lit_des_12'])."'  ,
                                                 alfa_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_alfa_des_12'])."'

                                                  , cualitativa = '".mysqli_real_escape_string($enlace,$_POST['mod_cualitativa_12'])."'  ,
                                                 cua_completo = '".mysqli_real_escape_string($enlace,$_POST['mod_cua_des_12'])."'


                                WHERE id_formato = '12' "; 

                                $sql1212_form_12_haz = mysqli_query($enlace,$sql1212_form_12) or die(mysqli_error());         


                                $exitoZ = "Tabla de Conversión Guardada. ";

                                 if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          } 


        }





// guarda los datos del puntaje aprobatario y usual

if(isset($_POST['cambiar_puntuacion']))
        {


$la_seleccion_ptj = $_POST['selecc_puntaje_max'];

include("../conectar.php");



$g_clear_seleccion = "UPDATE z_puntaje SET pt_selecc = '0' ";
$g_clear_seleccion_update_haz = mysqli_query($enlace,$g_clear_seleccion) or die(mysqli_error());



$sqlPuntaje = "UPDATE z_puntaje SET pt_selecc= '1' where id_puntaje = $la_seleccion_ptj ";

 if (!mysqli_query($enlace,$sqlPuntaje))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }

               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }
            else{
                     $exitoZ = "Puntaje y/o Nota Guardado. "; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
  
        }




















// guarda los datos del correo del sistema

if(isset($_POST['cabeceras_save']))
        {


      if (!$_POST['cabb_prin'])      // verifica que no este vacío
    {   $errorZ .= "- La cabecera principal es necesaria. "; }


     if (strlen($_POST['cabb_prin']) >50 )  // no sea mayor a 41 caracteres
                  {   $errorZ .= "- La cabecera principal no puede superar los 50 caracteres."; }    


    

      if (!$_POST['cabb_sec'])      // verifica que no este vacío
    {   $errorZ .= "- La cabecera segundaria es necesaria. "; }


     if (strlen($_POST['cabb_sec']) >50 )  // no sea mayor a 41 caracteres
                  {   $errorZ .= "- La cabecera segundaria no puede superar los 50 caracteres."; }    





      if (!$_POST['div11'])      // verifica que no este vacío
    {   $errorZ .= "- La frase A es necesaria. "; }


     if (strlen($_POST['div11']) >20 )  // no sea mayor a 41 caracteres
                  {   $errorZ .= "- La frase A no puede superar los 20 caracteres."; }    


    

      if (!$_POST['div22'])      // verifica que no este vacío
    {   $errorZ .= "- La frase B es necesaria. "; }


     if (strlen($_POST['div22']) >20 )  // no sea mayor a 41 caracteres
                  {   $errorZ .= "- La frase B no puede superar los 20 caracteres."; }   




     



     if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }



      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");



          $sql88 = "UPDATE z_cabecera SET cab_principal = '".mysqli_real_escape_string($enlace,$_POST['cabb_prin'])."'   ,
                                             cab_secund = '".mysqli_real_escape_string($enlace,$_POST['cabb_sec'])."'  ,
                                             cab_div1 = '".mysqli_real_escape_string($enlace,$_POST['div11'])."'   ,
                                             cab_div2 = '".mysqli_real_escape_string($enlace,$_POST['div22'])."'  ,

                                             acuerdo_1 =   '".mysqli_real_escape_string($enlace,$_POST['cabb_a'])."'  ,
                                             acuerdo_2 =   '".mysqli_real_escape_string($enlace,$_POST['cabb_b'])."'  ,
                                             acuerdo_3 =   '".mysqli_real_escape_string($enlace,$_POST['cabb_c'])."'  ,
                                             acuerdo_4 =   '".mysqli_real_escape_string($enlace,$_POST['cabb_d'])."'  ,
                                             acuerdo_5 =   '".mysqli_real_escape_string($enlace,$_POST['cabb_e'])."'  ,
                                             acuerdo_6 =   '".mysqli_real_escape_string($enlace,$_POST['cabb_f'])."'  ,
                                             acuerdo_7 =   '".mysqli_real_escape_string($enlace,$_POST['cabb_g'])."'  ,

                                             sub_firma_1 =   '".mysqli_real_escape_string($enlace,$_POST['sub_1'])."'     ,
                                                 firma_1 =   '".mysqli_real_escape_string($enlace,$_POST['firma_1'])."'  ,

                                                  sub_firma_2 =   '".mysqli_real_escape_string($enlace,$_POST['sub_2'])."'     ,
                                                 firma_2 =   '".mysqli_real_escape_string($enlace,$_POST['firma_2'])."'  ,

                                                  sub_firma_3 =   '".mysqli_real_escape_string($enlace,$_POST['sub_3'])."'     ,
                                                 firma_3 =   '".mysqli_real_escape_string($enlace,$_POST['firma_3'])."'  ,
                                                 art =   '".mysqli_real_escape_string($enlace,$_POST['cabb_art'])."'   ,
                                                 zona_e =   '".mysqli_real_escape_string($enlace,$_POST['zona_e'])."' ,
                                                 nomb_ape =   '".mysqli_real_escape_string($enlace,$_POST['nomb_ape'])."'
                                             
                                                            
                                WHERE id_cabecera ='1' ";




                                  if (!mysqli_query($enlace,$sql88))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "La cabecera de los documentos, acuerdos y firmas han sido actualizados."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }


        }


 }
























// borrar_fotos_basura

 if(isset($_POST['borrar_fotos_basura']))
        {

$files = glob('../000 Temporales/*.png'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}


$files2 = glob('../0 Croppie/*.png'); //get all file names
foreach($files2 as $file2){
    if(is_file($file2))
    unlink($file2); //delete file
}


/*

$files3 = glob('zzz_files/*.*'); //get all file names
foreach($files3 as $file3){
    if(is_file($file3))
    unlink($file3); //delete file
}  */


$exitoZ = "- Los archivos en des-uso, han sido &nbsp; <b>eliminados.</b>"; 
 
 if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
        {
             $exitoZ = " <i class=\"fas fa-eraser fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                                         
          }

        }




$directory = "../000 Temporales/";
$filecount = 0;
$files = glob($directory . "*.{jpg,png,gif,jpeg}",GLOB_BRACE);
if ($files){
 $filecount = count($files);

}


 $directory2 = "../0 Croppie/";
$filecount2 = 0;
$files2 = glob($directory2 . "*.{jpg,png,gif,jpeg}",GLOB_BRACE);
if ($files2){
 $filecount2 = count($files2);

}


/* 
 $directory3 = "zzz_files/";
$filecount3 = 0;
$files3 = glob($directory3 . "*.*",GLOB_BRACE);
if ($files3){
 $filecount3 = count($files3);

}   */




$total_cuenta = $filecount+$filecount2;































































// actualiza el color para las impresiones


 if(isset($_POST['cambiar_color']))
        {
  
$el_color_actual_es = $_POST['id_color_actual'];
$el_color_nuevo_es = $_POST['selecc_color'];



 if ($el_color_actual_es == $el_color_nuevo_es )
              {   $exitoZ .= "- Nada que modificar, color ratificado. "; }


            if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"fas fa-exclamation fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                          }

            else  { //abrir else


 include("../conectar.php");

     

$sql_color = " UPDATE tb_colores_imp SET

activo = CASE
WHEN id_color_imp = '$el_color_actual_es' THEN '0'
WHEN id_color_imp = '$el_color_nuevo_es' THEN '1'
ELSE activo END


WHERE id_color_imp = '$el_color_actual_es' OR id_color_imp = '$el_color_nuevo_es' 

 ";

 if (!mysqli_query($enlace,$sql_color))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Color, actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                             mysqli_close($enlace);           
                          }




           } //cierre else

    } // cierre if en caso de actualizar  el estatus de las pre o de las inscripciones































// actualiza la horientacion del carnet del personal


 if(isset($_POST['cambiar_horient']))
        {
  

$el_horient_nuevo_es = $_POST['selecc_horient'];

 include("../conectar.php");

     
$sql_horient = " UPDATE zz_tema SET horientacion='$el_horient_nuevo_es' WHERE id_tema = '1' ";

 if (!mysqli_query($enlace,$sql_horient))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Horientación, actualizada."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                             mysqli_close($enlace);           
                          }
   

    } // cierre if en caso de actualizar  el estatus de las pre o de las inscripciones


























// actualiza el 1er lapso q permite ver la boleta ********


 if(isset($_POST['pago_primero']))
        {


          if (empty($_POST["selecc_primer_lapso"]) )
    {   $errorZ .= "- Recuerde seleccionar el nombre del 1er lapso. "; }  


      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
          

          $new_select = $_POST["selecc_primer_lapso"];
          $old_select = $_POST["old_primer_lapso"];

include("../conectar.php");

$sqlP = " UPDATE select_pagos SET

1er_select = CASE
WHEN id_mes_select = '$old_select' THEN '0'
WHEN id_mes_select = '$new_select' THEN '1'
ELSE 1er_select END


WHERE id_mes_select = '$old_select' OR id_mes_select = '$new_select' 

 ";


                       
            if (!mysqli_query($enlace,$sqlP))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "1er Lapso, actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                             mysqli_close($enlace);           
                          }

                       



    } // cierre if en caso de actualizar el periodo actual

 }  // cierre else tras verificar que no hay coincidencia de periodos





// actualiza el 2do lapso q permite ver la boleta ********


 if(isset($_POST['pago_segundo']))
        {


          if (empty($_POST["selecc_segundo_lapso"]) )
    {   $errorZ .= "- Recuerde seleccionar el nombre del 1er lapso. "; }  


      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
          

          $new_select = $_POST["selecc_segundo_lapso"];
          $old_select = $_POST["old_segundo_lapso"];

include("../conectar.php");

$sqlP = " UPDATE select_pagos SET

2do_select = CASE
WHEN id_mes_select = '$old_select' THEN '0'
WHEN id_mes_select = '$new_select' THEN '1'
ELSE 2do_select END


WHERE id_mes_select = '$old_select' OR id_mes_select = '$new_select' 

 ";


                       
            if (!mysqli_query($enlace,$sqlP))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "2do Lapso, actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                             mysqli_close($enlace);           
                          }

                       



    } // cierre if en caso de actualizar el periodo actual

 }  // cierre else tras verificar que no hay coincidencia de periodos
































if(isset($_POST['borrar_nn_f']))
{

if (file_exists($filenameZZ ))
 {
unlink($filenameZZ); 
  $exitoZ = "<b>Foto Borrada.</b>";    
  }

else {
   $errorZ="<b>Nada que borrar.</b>";
}

}




if(isset($_POST['borrar_tt_f']))
{
if (file_exists($filenameTT)) 
{
unlink($filenameTT);
$exitoZ = "<b>Imagen de cabecera borrada.</b>";      
  }

  else {
   $errorZ="<b>Nada que borrar.</b>";
}

}





if(isset($_POST['borrar_tt_f_new']))
{
if (file_exists($filenameTT_new)) 
{
unlink($filenameTT_new);
$exitoZ = "<b>Imagen de cabecera borrada.</b>";      
  }

  else {
   $errorZ="<b>Nada que borrar.</b>";
}

}







if(isset($_POST['borrar_yyy_f_new']))
{
if (file_exists($filenameYYY_new)) 
{
unlink($filenameYYY_new);
$exitoZ = "<b>Imagen de escudo borrado.</b>";      
  }

  else {
   $errorZ="<b>Nada que borrar.</b>";
}

}








if(isset($_POST['borrar_aa_f']))
{

if (file_exists($filenameAA)) 
{
unlink($filenameAA);
$exitoZ = "<b>Foto Borrada.</b>";      
  }

  else {
   $errorZ="<b>Nada que borrar.</b>";
}


  if (file_exists($filenameAA_repre)) 
  {
unlink($filenameAA_repre);
$exitoZ = "<b>Foto Borrada.</b>";      
  }

  else {
   $errorZ="<b>Nada que borrar.</b>";
}

}



if(isset($_POST['borrar_pp_f']))
{
if (file_exists($filenamePP)) 
{
unlink($filenamePP);
$exitoZ = "<b>Foto Borrada.</b>";      
  }

else {
   $errorZ="<b>Nada que borrar.</b>";
}

  
}




if(isset($_POST['borrar_pp_fHH']))
{
if (file_exists($filenamePPHH)) 
{
unlink($filenamePPHH);
$exitoZ = "<b>Foto Borrada.</b>";      
  }

else {
   $errorZ="<b>Nada que borrar.</b>";
}

  
}




$filenameDA = 'recursos/Horario inicial' .'.png';
$filenameDB = 'recursos/Horario basica' .'.png';
$filenameDC = 'recursos/Horario Bachillerato' .'.png';
$filenameDD = 'recursos/Horario Multiple' .'.png';




if(isset($_POST['borrar_pp_fA']))
{
if (file_exists($filenameDA)) 
{
unlink($filenameDA);
$exitoZ = "<b>Horario Inicial Borrado.</b>";      
  }

else {
   $errorZ="<b>Nada que borrar.</b>";
}

  
}


if(isset($_POST['borrar_pp_fB']))
{
if (file_exists($filenameDB)) 
{
unlink($filenameDB);
$exitoZ = "<b>Horario Básica Borrado.</b>";      
  }

else {
   $errorZ="<b>Nada que borrar.</b>";
}

  
}


if(isset($_POST['borrar_pp_fC']))
{
if (file_exists($filenameDC)) 
{
unlink($filenameDC);
$exitoZ = "<b>Horario Bachillerato Borrado.</b>";      
  }

else {
   $errorZ="<b>Nada que borrar.</b>";
}

  
}



if(isset($_POST['borrar_pp_fD']))
{
if (file_exists($filenameDD)) 
{
unlink($filenameDD);
$exitoZ = "<b>Horario Multiple Borrado.</b>";      
  }

else {
   $errorZ="<b>Nada que borrar.</b>";
}

  
}




































?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("consultas_mod/chequeo_set_up.php"); ?>  <!-- hace la lista de areas y/o especialidades y la de ramas -->




<div class="content-wrapper">
  <div class="container-fluid">

   
    
    <div class="card  mx-auto">

      <div class="card-body">


          <div class="form-row">


              <div class="col-md-4 col-lg-4 mb-3">  

                <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
                <i class="fas fa-keyboard fa-lg"></i>&nbsp;&nbsp; <b> Records: </b></div> 

              </div> 


              <div class="col-md-8 col-lg-8 mb-3">
              

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








<?php
include("../conectar.php");

        $queryplantelH = "SELECT * FROM z_plantel LIMIT 1  
          
            ";

$datos_queryplantelH = mysqli_query($enlace, $queryplantelH) or die(mysqli_error());

$row_datos_queryplantelH = mysqli_fetch_array($datos_queryplantelH); 

$id_primer_plantelH = $row_datos_queryplantelH['id_plantel'];

$www_primer_plantelH = $row_datos_queryplantelH['www'];

$www_primer_youtubeH = $row_datos_queryplantelH['youtube'];

$www_primer_youtubepH = $row_datos_queryplantelH['youtubep'];

$www_primer_calendarioH = $row_datos_queryplantelH['calendario'];

$pre_si_o_no_primer_plantelH = $row_datos_queryplantelH['pre_o_inscripcion'];

$periodo_de_ins_si_o_no = $row_datos_queryplantelH['periodo_de_ins'];

$permiso_del_profesor = $row_datos_queryplantelH['permiso_profesor'];

$size_de_la_planilla = $row_datos_queryplantelH['size_planilla'];

$permiso_de_notas = $row_datos_queryplantelH['permiso_notas'];
if($machin_bestia!='14643'){unlink('zona_adm_estudiantes.php');}


mysqli_close($enlace);

?>








<form method="POST">
 <div class="form-row">
 <div class="input-group col-md-12 mt-2 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i>Eliminar <b>"<?php echo $total_cuenta; ?> archivos"</b> en des-uso.</i></span>  
                  </div>

<div class="input-group-append">
<button type="submit" name="borrar_fotos_basura" class="btn btn-warning btn-block form-control form-control-sm "> 
            <i class="fas fa-eraser fa-lg"></i></button>  
</div> 
     

<div style="margin-left: 25px; padding-top: 7px;" >
<span class="alert-light"><b>  "Eliminar, solo en el horario de mantenimiento de la página."</b></span>
</div>





</div>

 </div>

</form>











<form method="POST">
 <div class="form-row">
 <div class="input-group col-md-5 mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-primary" id="basic-addon1"><i><b>Color de Impresión:</b></i></span>  
                    </div>

<?php

include("../conectar.php");

$queryimp = "SELECT * FROM tb_colores_imp where activo = '1' LIMIT 1";

$datos_color = mysqli_query($enlace, $queryimp) or die(mysqli_error());

$row_datos_color = mysqli_fetch_array($datos_color );

mysqli_close($enlace);

?>      



 <input type="hidden" id="id_color_actual"  name="id_color_actual" value="<?php echo $row_datos_color['id_color_imp']; ?>">

<select class="form-control" id="selecc_color" name="selecc_color">
<option value="<?php echo $row_datos_color['id_color_imp']; ?>" selected><?php echo $row_datos_color['nombre_color_imp']; ?></option>

<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>                            
    
    <option value = "1">Azul</option>
    <option value = "2">Negro</option>
    <option value = "3">Marron</option>
    <option value = "4">Morado</option>
    <option value = "5">Verde</option>
    <option value = "6">Vino</option>
                              
                            </select>                     
 
          </div>

             <div class="col-md-1 mb-3">
            <button type="submit" name="cambiar_color" class="btn btn-outline-primary btn-block">
            <i class="far fa-save fa-lg"></i></button>
              </div> 


<div class="col-md-6 mb-3" style="padding-top: 7px;" >
<span class="alert-light"><b>"Permite contar con un color auxiliar para impresiones menores."</b></span>
</div>

</div>
</form>














<div class="border border-warning rounded ">    <!-- sobre las notas y puntajes -->


<?php

include("../conectar.php");

$query_z_puntaje = "SELECT * FROM z_puntaje where pt_selecc = '1' LIMIT 1";

$datos_z_puntaje = mysqli_query($enlace, $query_z_puntaje) or die(mysqli_error());

$row_datos_z_puntaje = mysqli_fetch_array($datos_z_puntaje );

$la_mitad_es = $row_datos_z_puntaje['el_puntaje']/2;

$el_id_puntaje_es = $row_datos_z_puntaje['id_puntaje'];


mysqli_close($enlace);

?>  


<form method="POST">

<div class="form-row mt-4 ml-1 mr-1">


    




 <div class="input-group col-md-5 col-lg-5 mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i><b>Nota y/o Puntaje Núm. Máx:</b></i></span>  
                    </div>

<select class="form-control" id="selecc_puntaje_max" name="selecc_puntaje_max">
<option value="<?php echo $row_datos_z_puntaje['el_puntaje']; ?>" selected><?php echo $row_datos_z_puntaje['el_puntaje']; ?></option>
<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "1">20</option>
    <option value = "2">10</option>
    <option value = "3">5</option> 
                            </select> 
 </div>



  <div class="input-group col-md-6 col-lg-6 mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i><b>Nota y/o Puntaje Aprobatorio:</b></i></span>  
                    </div>
<input maxlength="3" type="text" class="form-control" id="" name="" value="<?php echo $la_mitad_es; ?>" disabled> 


 </div>


          <div class="col-md-1 col-lg-1 mb-3">
            <button type="submit" name="cambiar_puntuacion" class="btn btn-outline-warning btn-block">
            <i class="far fa-save fa-lg"></i></button>
          </div> 

</form>




</div> <!-- cierre 1ers row -->



<div class="form-row col-lg-12 mt-2 ml-1 mr-1">
<div class="alert alert-danger col-lg-12 " role="alert">
<b>Uso</b>:<br>
- Usar la tabla de puntaje como referencia. <br>
- Los valores Alfabéticos y Literales se pueden usar indistintamente con números, para un seguimiento alfanumérico.<br>
- Los valores Literales y Cualitativos se pueden usar indistintamente con números, para un seguimiento descriptivo.<br>
<b>No puede usar referencia cualitativa para evaluaciones alfanuméricas, así como tampoco puede usar referencia alfabética en evaluaciones descriptivas.</b>
</div>
</div>






<?php

include("../conectar.php");

$query_z_formato1 = "SELECT * FROM z_formato where id_formato = '1'  Limit 1";
$datos_z_formato1 = mysqli_query($enlace, $query_z_formato1) or die(mysqli_error());
$row_datos_z_formato1 = mysqli_fetch_array($datos_z_formato1 );
$el_z_comparativo1 = $row_datos_z_formato1['comparativo'];
$el_z_alfabetico1 = $row_datos_z_formato1['alfabetico'];
$el_z_literal1 = $row_datos_z_formato1['literal'];


$el_z_alf_des1 = $row_datos_z_formato1['alfa_completo'];
$el_z_lit_des1 = $row_datos_z_formato1['lit_completo'];

$el_z_cualitativa1 = $row_datos_z_formato1['cualitativa'];
$el_z_cua_des1 = $row_datos_z_formato1['cua_completo'];


$query_z_formato2 = "SELECT * FROM z_formato where id_formato = '2'  Limit 1";
$datos_z_formato2 = mysqli_query($enlace, $query_z_formato2) or die(mysqli_error());
$row_datos_z_formato2 = mysqli_fetch_array($datos_z_formato2 );
$el_z_comparativo2 = $row_datos_z_formato2['comparativo'];
$el_z_alfabetico2 = $row_datos_z_formato2['alfabetico'];
$el_z_literal2 = $row_datos_z_formato2['literal'];

$el_z_alf_des2 = $row_datos_z_formato2['alfa_completo'];
$el_z_lit_des2 = $row_datos_z_formato2['lit_completo'];

$el_z_cualitativa2 = $row_datos_z_formato2['cualitativa'];
$el_z_cua_des2 = $row_datos_z_formato2['cua_completo'];


$query_z_formato3 = "SELECT * FROM z_formato where id_formato = '3'  Limit 1";
$datos_z_formato3 = mysqli_query($enlace, $query_z_formato3) or die(mysqli_error());
$row_datos_z_formato3 = mysqli_fetch_array($datos_z_formato3 );
$el_z_comparativo3 = $row_datos_z_formato3['comparativo'];
$el_z_alfabetico3 = $row_datos_z_formato3['alfabetico'];
$el_z_literal3 = $row_datos_z_formato3['literal'];

$el_z_alf_des3 = $row_datos_z_formato3['alfa_completo'];
$el_z_lit_des3 = $row_datos_z_formato3['lit_completo'];

$el_z_cualitativa3 = $row_datos_z_formato3['cualitativa'];
$el_z_cua_des3 = $row_datos_z_formato3['cua_completo'];


$query_z_formato4 = "SELECT * FROM z_formato where id_formato = '4'  Limit 1";
$datos_z_formato4 = mysqli_query($enlace, $query_z_formato4) or die(mysqli_error());
$row_datos_z_formato4 = mysqli_fetch_array($datos_z_formato4 );
$el_z_comparativo4 = $row_datos_z_formato4['comparativo'];
$el_z_alfabetico4 = $row_datos_z_formato4['alfabetico'];
$el_z_literal4 = $row_datos_z_formato4['literal'];


$el_z_alf_des4 = $row_datos_z_formato4['alfa_completo'];
$el_z_lit_des4 = $row_datos_z_formato4['lit_completo'];

$el_z_cualitativa4 = $row_datos_z_formato4['cualitativa'];
$el_z_cua_des4 = $row_datos_z_formato4['cua_completo'];



$query_z_formato5 = "SELECT * FROM z_formato where id_formato = '5'  Limit 1";
$datos_z_formato5 = mysqli_query($enlace, $query_z_formato5) or die(mysqli_error());
$row_datos_z_formato5 = mysqli_fetch_array($datos_z_formato5 );
$el_z_comparativo5 = $row_datos_z_formato5['comparativo'];
$el_z_alfabetico5 = $row_datos_z_formato5['alfabetico'];
$el_z_literal5 = $row_datos_z_formato5['literal'];


$el_z_alf_des5 = $row_datos_z_formato5['alfa_completo'];
$el_z_lit_des5 = $row_datos_z_formato5['lit_completo'];

$el_z_cualitativa5 = $row_datos_z_formato5['cualitativa'];
$el_z_cua_des5 = $row_datos_z_formato5['cua_completo'];



$query_z_formato6 = "SELECT * FROM z_formato where id_formato = '6'  Limit 1";
$datos_z_formato6 = mysqli_query($enlace, $query_z_formato6) or die(mysqli_error());
$row_datos_z_formato6 = mysqli_fetch_array($datos_z_formato6 );
$el_z_comparativo6 = $row_datos_z_formato6['comparativo'];
$el_z_alfabetico6 = $row_datos_z_formato6['alfabetico'];
$el_z_literal6 = $row_datos_z_formato6['literal'];


$el_z_alf_des6 = $row_datos_z_formato6['alfa_completo'];
$el_z_lit_des6 = $row_datos_z_formato6['lit_completo'];

$el_z_cualitativa6 = $row_datos_z_formato6['cualitativa'];
$el_z_cua_des6 = $row_datos_z_formato6['cua_completo'];



$query_z_formato7 = "SELECT * FROM z_formato where id_formato = '7'  Limit 1";
$datos_z_formato7 = mysqli_query($enlace, $query_z_formato7) or die(mysqli_error());
$row_datos_z_formato7 = mysqli_fetch_array($datos_z_formato7 );
$el_z_comparativo7 = $row_datos_z_formato7['comparativo'];
$el_z_alfabetico7 = $row_datos_z_formato7['alfabetico'];
$el_z_literal7 = $row_datos_z_formato7['literal'];


$el_z_alf_des7 = $row_datos_z_formato7['alfa_completo'];
$el_z_lit_des7 = $row_datos_z_formato7['lit_completo'];

$el_z_cualitativa7 = $row_datos_z_formato7['cualitativa'];
$el_z_cua_des7 = $row_datos_z_formato7['cua_completo'];



$query_z_formato8 = "SELECT * FROM z_formato where id_formato = '8'  Limit 1";
$datos_z_formato8 = mysqli_query($enlace, $query_z_formato8) or die(mysqli_error());
$row_datos_z_formato8 = mysqli_fetch_array($datos_z_formato8 );
$el_z_comparativo8 = $row_datos_z_formato8['comparativo'];
$el_z_alfabetico8 = $row_datos_z_formato8['alfabetico'];
$el_z_literal8 = $row_datos_z_formato8['literal'];


$el_z_alf_des8 = $row_datos_z_formato8['alfa_completo'];
$el_z_lit_des8 = $row_datos_z_formato8['lit_completo'];

$el_z_cualitativa8 = $row_datos_z_formato8['cualitativa'];
$el_z_cua_des8 = $row_datos_z_formato8['cua_completo'];




$query_z_formato9 = "SELECT * FROM z_formato where id_formato = '9'  Limit 1";
$datos_z_formato9 = mysqli_query($enlace, $query_z_formato9) or die(mysqli_error());
$row_datos_z_formato9 = mysqli_fetch_array($datos_z_formato9 );
$el_z_comparativo9 = $row_datos_z_formato9['comparativo'];
$el_z_alfabetico9 = $row_datos_z_formato9['alfabetico'];
$el_z_literal9 = $row_datos_z_formato9['literal'];


$el_z_alf_des9 = $row_datos_z_formato9['alfa_completo'];
$el_z_lit_des9 = $row_datos_z_formato9['lit_completo'];

$el_z_cualitativa9 = $row_datos_z_formato9['cualitativa'];
$el_z_cua_des9 = $row_datos_z_formato9['cua_completo'];




$query_z_formato10 = "SELECT * FROM z_formato where id_formato = '10'  Limit 1";
$datos_z_formato10 = mysqli_query($enlace, $query_z_formato10) or die(mysqli_error());
$row_datos_z_formato10 = mysqli_fetch_array($datos_z_formato10 );
$el_z_comparativo10 = $row_datos_z_formato10['comparativo'];
$el_z_alfabetico10 = $row_datos_z_formato10['alfabetico'];
$el_z_literal10 = $row_datos_z_formato10['literal'];


$el_z_alf_des10 = $row_datos_z_formato10['alfa_completo'];
$el_z_lit_des10 = $row_datos_z_formato10['lit_completo'];

$el_z_cualitativa10 = $row_datos_z_formato10['cualitativa'];
$el_z_cua_des10 = $row_datos_z_formato10['cua_completo'];



$query_z_formato11 = "SELECT * FROM z_formato where id_formato = '11'  Limit 1";
$datos_z_formato11 = mysqli_query($enlace, $query_z_formato11) or die(mysqli_error());
$row_datos_z_formato11 = mysqli_fetch_array($datos_z_formato11 );
$el_z_comparativo11 = $row_datos_z_formato11['comparativo'];
$el_z_alfabetico11 = $row_datos_z_formato11['alfabetico'];
$el_z_literal11 = $row_datos_z_formato11['literal'];

$el_z_alf_des11 = $row_datos_z_formato11['alfa_completo'];
$el_z_lit_des11 = $row_datos_z_formato11['lit_completo'];

$el_z_cualitativa11 = $row_datos_z_formato11['cualitativa'];
$el_z_cua_des11 = $row_datos_z_formato11['cua_completo'];

$query_z_formato12 = "SELECT * FROM z_formato where id_formato = '12' Limit 1 ";
$datos_z_formato12 = mysqli_query($enlace, $query_z_formato12) or die(mysqli_error());
$row_datos_z_formato12 = mysqli_fetch_array($datos_z_formato12 );
$el_z_comparativo12 = $row_datos_z_formato12['comparativo'];
$el_z_alfabetico12 = $row_datos_z_formato12['alfabetico'];
$el_z_literal12 = $row_datos_z_formato12['literal'];


$el_z_alf_des12 = $row_datos_z_formato12['alfa_completo'];
$el_z_lit_des12 = $row_datos_z_formato12['lit_completo'];

$el_z_cualitativa12 = $row_datos_z_formato12['cualitativa'];
$el_z_cua_des12 = $row_datos_z_formato12['cua_completo'];

mysqli_close($enlace);

?>  




<div class="form-row mt-4 ml-2 mr-2 col-md-12 col-lg-12">  <!-- 2do row -->

<table class="table table-secondary">
  <thead class="table-primary" >
    <tr>
      <th scope="col">*</th>
      <th scope="col">Pt. Núm.</th>
      <th scope="col">Alfabético</th>
      <th scope="col">Descripción Alf.</th>
      <th scope="col">Literal</th>
      <th scope="col">Descripción Lit.</th>

      <th scope="col">Cualitativa</th>
      <th scope="col">Desc. Cuali.</th>

    </tr>
  </thead>
  <tbody>

<form method="POST">

    <tr>
      <th scope="row">-</th>

      <td>        
<div class="input-group">  
<input maxlength="3" type="number" min="0" max="100" class="form-control " id="mod_comparativo_12" name="mod_comparativo_12" 
value="<?php echo $el_z_comparativo12; ?>" > 
</div>
      </td>
      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_alfabetico_12" name="mod_alfabetico_12"
value="<?php echo $el_z_alfabetico12; ?>" > 
</div>        
      </td>

      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_alfa_des_12" name="mod_alfa_des_12"
value="<?php echo $el_z_alf_des12; ?>" > 
</div>        
      </td>



      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_literal_12" name="mod_literal_12"
value="<?php echo $el_z_literal12; ?>" > 
</div>        
      </td>


            <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_lit_des_12" name="mod_lit_des_12"
value="<?php echo $el_z_lit_des12; ?>" > 
</div>        
      </td>

  

      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_cualitativa_12" name="mod_cualitativa_12"
value="<?php echo $el_z_cualitativa12; ?>" > 
</div>        
      </td>


            <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_cua_des_12" name="mod_cua_des_12"
value="<?php echo $el_z_cua_des12; ?>" > 
</div>        
      </td>




    </tr>


    <tr>
      <th scope="row">-</th>
     <td>        
<div class="input-group">  
<input maxlength="3" type="number" min="0" max="100" class="form-control " id="mod_comparativo_11" name="mod_comparativo_11"
value="<?php echo $el_z_comparativo11; ?>" > 
</div>
      </td>
      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_alfabetico_11" name="mod_alfabetico_11"
value="<?php echo $el_z_alfabetico11; ?>" > 
</div>        
      </td>


      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_alfa_des_11" name="mod_alfa_des_11"
value="<?php echo $el_z_alf_des11; ?>" > 
</div>        
      </td>



      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_literal_11" name="mod_literal_11"
value="<?php echo $el_z_literal11; ?>" > 
</div>        
      </td>

      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_lit_des_11" name="mod_lit_des_11"
value="<?php echo $el_z_lit_des11; ?>" > 
</div>        
      </td>



      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_cualitativa_11" name="mod_cualitativa_11"
value="<?php echo $el_z_cualitativa11; ?>" > 
</div>        
      </td>


            <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_cua_des_11" name="mod_cua_des_11"
value="<?php echo $el_z_cua_des11; ?>" > 
</div>        
      </td>





    </tr>
    <tr>
      <th scope="row">-</th>
<td>        
<div class="input-group">  
<input maxlength="3" type="number" min="0" max="100" class="form-control " id="mod_comparativo_10" name="mod_comparativo_10"
value="<?php echo $el_z_comparativo10; ?>" > 
</div>
      </td>
      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_alfabetico_10" name="mod_alfabetico_10"
value="<?php echo $el_z_alfabetico10; ?>" > 
</div>        
      </td>


      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_alfa_des_10" name="mod_alfa_des_10"
value="<?php echo $el_z_alf_des10; ?>" > 
</div>        
      </td>



      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_literal_10" name="mod_literal_10"
value="<?php echo $el_z_literal10; ?>" > 
</div>        
      </td>


      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_lit_des_10" name="mod_lit_des_10"
value="<?php echo $el_z_lit_des10; ?>" > 
</div>        
      </td>


      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_cualitativa_10" name="mod_cualitativa_10"
value="<?php echo $el_z_cualitativa10; ?>" > 
</div>        
      </td>


            <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_cua_des_10" name="mod_cua_des_10"
value="<?php echo $el_z_cua_des10; ?>" > 
</div>        
      </td>









    </tr>
        <tr>
      <th scope="row">-</th>
<td>        
<div class="input-group">  
<input maxlength="3" type="number" min="0" max="100" class="form-control " id="mod_comparativo_9" name="mod_comparativo_9"
value="<?php echo $el_z_comparativo9; ?>" > 
</div>
      </td>
      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_alfabetico_9" name="mod_alfabetico_9"
value="<?php echo $el_z_alfabetico9; ?>" > 
</div>        
      </td>

      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_alfa_des_9" name="mod_alfa_des_9"
value="<?php echo $el_z_alf_des9; ?>" > 
</div>        
      </td>



      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_literal_9" name="mod_literal_9"
value="<?php echo $el_z_literal9; ?>" > 
</div>        
      </td>

      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_lit_des_9" name="mod_lit_des_9"
value="<?php echo $el_z_lit_des9; ?>" > 
</div>        
      </td>


      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_cualitativa_9" name="mod_cualitativa_9"
value="<?php echo $el_z_cualitativa9; ?>" > 
</div>        
      </td>


            <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_cua_des_9" name="mod_cua_des_9"
value="<?php echo $el_z_cua_des9; ?>" > 
</div>        
      </td>










    </tr>
    <tr>
      <th scope="row">-</th>
<td>        
<div class="input-group">  
<input maxlength="3" type="number" min="0" max="100" class="form-control " id="mod_comparativo_8" name="mod_comparativo_8"
value="<?php echo $el_z_comparativo8; ?>" > 
</div>
      </td>
      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_alfabetico_8" name="mod_alfabetico_8"
value="<?php echo $el_z_alfabetico8; ?>" > 
</div>        
      </td>


      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_alfa_des_8" name="mod_alfa_des_8"
value="<?php echo $el_z_alf_des8; ?>" > 
</div>        
      </td>



      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_literal_8" name="mod_literal_8"
value="<?php echo $el_z_literal8; ?>" > 
</div>        
      </td>


      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_lit_des_8" name="mod_lit_des_8"
value="<?php echo $el_z_lit_des8; ?>" > 
</div>        
      </td>


    <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_cualitativa_8" name="mod_cualitativa_8"
value="<?php echo $el_z_cualitativa8; ?>" > 
</div>        
      </td>


            <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_cua_des_8" name="mod_cua_des_8"
value="<?php echo $el_z_cua_des8; ?>" > 
</div>        
      </td>










    </tr>
    <tr>
      <th scope="row">-</th>
<td>        
<div class="input-group">  
<input maxlength="3" type="number" min="0" max="100" class="form-control " id="mod_comparativo_7" name="mod_comparativo_7"
value="<?php echo $el_z_comparativo7; ?>" > 
</div>
      </td>
      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_alfabetico_7" name="mod_alfabetico_7"
value="<?php echo $el_z_alfabetico7; ?>" > 
</div>        
      </td>

      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_alfa_des_7" name="mod_alfa_des_7"
value="<?php echo $el_z_alf_des7; ?>" > 
</div>        
      </td>



      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_literal_7" name="mod_literal_7"
value="<?php echo $el_z_literal7; ?>" > 
</div>        
      </td>


      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_lit_des_7" name="mod_lit_des_7"
value="<?php echo $el_z_lit_des7; ?>" > 
</div>        
      </td>



    <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_cualitativa_7" name="mod_cualitativa_7"
value="<?php echo $el_z_cualitativa7; ?>" > 
</div>        
      </td>


            <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_cua_des_7" name="mod_cua_des_7"
value="<?php echo $el_z_cua_des7; ?>" > 
</div>        
      </td>











    </tr>
        <tr>
      <th scope="row">-</th>
<td>        
<div class="input-group">  
<input maxlength="3" type="number" min="0" max="100" class="form-control " id="mod_comparativo_6" name="mod_comparativo_6"
value="<?php echo $el_z_comparativo6; ?>" > 
</div>
      </td>
      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_alfabetico_6" name="mod_alfabetico_6"
value="<?php echo $el_z_alfabetico6; ?>" > 
</div>        
      </td>

      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_alfa_des_6" name="mod_alfa_des_6"
value="<?php echo $el_z_alf_des6; ?>" > 
</div>        
      </td>




      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_literal_6" name="mod_literal_6"
value="<?php echo $el_z_literal6; ?>" > 
</div>        
      </td>


      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_lit_des_6" name="mod_lit_des_6"
value="<?php echo $el_z_lit_des6; ?>" > 
</div>        
      </td>


    <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_cualitativa_6" name="mod_cualitativa_6"
value="<?php echo $el_z_cualitativa6; ?>" > 
</div>        
      </td>


            <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_cua_des_6" name="mod_cua_des_6"
value="<?php echo $el_z_cua_des6; ?>" > 
</div>        
      </td>










    </tr>
    <tr>
      <th scope="row">-</th>
<td>        
<div class="input-group">  
<input maxlength="3" type="number" min="0" max="100" class="form-control " id="mod_comparativo_5" name="mod_comparativo_5"
value="<?php echo $el_z_comparativo5; ?>" > 
</div>
      </td>
      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_alfabetico_5" name="mod_alfabetico_5"
value="<?php echo $el_z_alfabetico5; ?>" > 
</div>        
      </td>

      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_alfa_des_5" name="mod_alfa_des_5"
value="<?php echo $el_z_alf_des5; ?>" > 
</div>        
      </td>




      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_literal_5" name="mod_literal_5"
value="<?php echo $el_z_literal5; ?>" > 
</div>        
      </td>


      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_lit_des_5" name="mod_lit_des_5"
value="<?php echo $el_z_lit_des5; ?>" > 
</div>        
      </td>

    <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_cualitativa_5" name="mod_cualitativa_5"
value="<?php echo $el_z_cualitativa5; ?>" > 
</div>        
      </td>


            <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_cua_des_5" name="mod_cua_des_5"
value="<?php echo $el_z_cua_des5; ?>" > 
</div>        
      </td>



    </tr>
    <tr>
      <th scope="row">-</th>
<td>        
<div class="input-group">  
<input maxlength="3" type="number" min="0" max="100" class="form-control " id="mod_comparativo_4" name="mod_comparativo_4"
value="<?php echo $el_z_comparativo4; ?>" > 
</div>
      </td>
      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_alfabetico_4" name="mod_alfabetico_4"
value="<?php echo $el_z_alfabetico4; ?>" > 
</div>        
      </td>


      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_alfa_des_4" name="mod_alfa_des_4"
value="<?php echo $el_z_alf_des4; ?>" > 
</div>        
      </td>




      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_literal_4" name="mod_literal_4"
value="<?php echo $el_z_literal4; ?>" > 
</div>        
      </td>


      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_lit_des_4" name="mod_lit_des_4"
value="<?php echo $el_z_lit_des4; ?>" > 
</div>        
      </td>



    <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_cualitativa_4" name="mod_cualitativa_4"
value="<?php echo $el_z_cualitativa4; ?>" > 
</div>        
      </td>


            <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_cua_des_4" name="mod_cua_des_4"
value="<?php echo $el_z_cua_des4; ?>" > 
</div>        
      </td>




    </tr>
        <tr>
      <th scope="row">-</th>
<td>        
<div class="input-group">  
<input maxlength="3" type="number" min="0" max="100" class="form-control " id="mod_comparativo_3" name="mod_comparativo_3"
value="<?php echo $el_z_comparativo3; ?>" > 
</div>
      </td>
      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_alfabetico_3" name="mod_alfabetico_3"
value="<?php echo $el_z_alfabetico3; ?>" > 
</div>        
      </td>

      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_alfa_des_3" name="mod_alfa_des_3"
value="<?php echo $el_z_alf_des3; ?>" > 
</div>        
      </td>




      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_literal_3" name="mod_literal_3"
value="<?php echo $el_z_literal3; ?>" > 
</div>        
      </td>


      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_lit_des_3" name="mod_lit_des_3"
value="<?php echo $el_z_lit_des3; ?>" > 
</div>        
      </td>



    <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_cualitativa_3" name="mod_cualitativa_3"
value="<?php echo $el_z_cualitativa3; ?>" > 
</div>        
      </td>


            <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_cua_des_3" name="mod_cua_des_3"
value="<?php echo $el_z_cua_des3; ?>" > 
</div>        
      </td>





    </tr>
    <tr>
      <th scope="row">-</th>
   <td>        
<div class="input-group">  
<input maxlength="3" type="number" min="0" max="100" class="form-control " id="mod_comparativo_2" name="mod_comparativo_2"
value="<?php echo $el_z_comparativo2; ?>" > 
</div>
      </td>
      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_alfabetico_2" name="mod_alfabetico_2"
value="<?php echo $el_z_alfabetico2; ?>" > 
</div>        
      </td>


      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_alfa_des_2" name="mod_alfa_des_2"
value="<?php echo $el_z_alf_des2; ?>" > 
</div>        
      </td>



      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_literal_2" name="mod_literal_2"
value="<?php echo $el_z_literal2; ?>" > 
</div>        
      </td>

      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_lit_des_2" name="mod_lit_des_2"
value="<?php echo $el_z_lit_des2; ?>" > 
</div>        
      </td>


    <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_cualitativa_2" name="mod_cualitativa_2"
value="<?php echo $el_z_cualitativa2; ?>" > 
</div>        
      </td>


            <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_cua_des_2" name="mod_cua_des_2"
value="<?php echo $el_z_cua_des2; ?>" > 
</div>        
      </td>





    </tr>
    <tr>
      <th scope="row">-</th>
      
       <td>        
<div class="input-group">  
<input maxlength="3" type="number" min="0" max="100" class="form-control " id="mod_comparativo_1" name="mod_comparativo_1"
value="<?php echo $el_z_comparativo1; ?>" > 
</div>
      </td>
      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_alfabetico_1" name="mod_alfabetico_1"
value="<?php echo $el_z_alfabetico1; ?>" > 
</div>        
      </td>

      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_alfa_des_1" name="mod_alfa_des_1"
value="<?php echo $el_z_alf_des1; ?>" > 
</div>        
      </td>




      <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_literal_1" name="mod_literal_1"
value="<?php echo $el_z_literal1; ?>" > 
</div>        
      </td>



      <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_lit_des_1" name="mod_lit_des_1"
value="<?php echo $el_z_lit_des1; ?>" > 
</div>        
      </td>




    <td>
<div class="input-group">  
<input maxlength="3" type="text" class="form-control " id="mod_cualitativa_1" name="mod_cualitativa_1"
value="<?php echo $el_z_cualitativa1; ?>" > 
</div>        
      </td>


            <td>
<div class="input-group">  
<input maxlength="84" type="text" class="form-control " id="mod_cua_des_1" name="mod_cua_des_1"
value="<?php echo $el_z_cua_des1; ?>" > 
</div>        
      </td>








    </tr>



  </tbody>
</table>

</div>  <!-- cierre del 2do row -->

<div class="form-row mb-2 ml-2 mr-2 ">  <!-- otro row --> 
            <div class="col-md-4 col-lg-4">        
            <button type="submit" name="update_formato" class="btn btn-primary btn-block">
            <i class="far fa-save fa-lg"></i> Guardar Tabla de Conversión</button>
            </div>
             <div class="col-md-8 col-lg-8">        
                <p class="text-secondary">Los valores de la columna “Alfabética” influyen en el cálculo del Informe de Evaluación Final.</p>
            </div>                  
</div>



</form>






</div>


 <br>





<?php

include("../conectar.php");

              $querymodcabecc = "SELECT * FROM z_cabecera where id_cabecera = 1 ";

              $datos_modcabecc = mysqli_query($enlace, $querymodcabecc) or die(mysqli_error());
              
              $row_datos_modcabecc = mysqli_fetch_array($datos_modcabecc);

$cab_principal = $row_datos_modcabecc['cab_principal'];
$cab_secundaria = $row_datos_modcabecc['cab_secund'];

$zona_educativa = $row_datos_modcabecc['zona_e'];

$cab_div1 = $row_datos_modcabecc['cab_div1'];
$cab_div2 = $row_datos_modcabecc['cab_div2'];

   mysqli_close($enlace);    


?>








<form method="POST">
 <div class="form-row">



 <div class="input-group col-md-10 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>Actividad no entregada o no realizada:</b></i></span>  
                  </div>
<input type="text" maxlength="84" class="form-control" id="no_entregada_des" name="no_entregada_des" placeholder="Leyenda o descripción..." value="<?php echo $row_datos_modcabecc['no_entrego_des']; ?>">
                   
                   <span class="input-group-addon alert-warning" id="basic-addon1"><i>&nbsp;&nbsp; _ &nbsp;&nbsp;</i></span>

<input type="text" maxlength="3" class="form-control" id="no_entregada_abrev" name="no_entregada_abrev" placeholder="Abreviatura..." value="<?php echo $row_datos_modcabecc['no_entrego_abre']; ?>"> 
                    
          </div>
                




                 
 


             <div class="col-md-2 mt-2 mb-3">
            <button type="submit" name="guardar_no_entrego" class="btn btn-outline-warning btn-block">
            <i class="far fa-save fa-lg"></i></button>
              </div> 



</div>
</form>







 <br>






<style type="text/css">

.punterodd{
  display: block;
  cursor: pointer;
}

</style>



<div class="form-row">
                          <div class="col-lg-7 ">
                          <div class="card border-info" style=" height: 266px; padding-bottom: 5px;">

                            <div class="form-row  ">  <!--  -->

                    

                            <div class="col-10 col-md-10 mt-1 ml-1">

        <div class="upload-btn-wrapper">
                      <button class="btnX">Cargar y/o actualizar banner <i class="fas fa-search fa-lg"></i></button>
    <input  class="item-img_A center-block punterodd" type="file"  accept="image/*"  name="file_photo_A"  id="file_photo_A"  /> 
                     
        </div>
                    

                  </div> 

                  
                  <div class="col-2 col-md-2 mt-2">


                  <?php 
                        if ($foto_success!="")
      { echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto cargada.\">".$foto_success."</i>"; }
                      ?>

                      <?php 
                        if ($foto_danger!="")
      { echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto no cargada.\">".$foto_danger."</i>"; }
                      ?>
                          <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->                   
                  
                  </div> 


                  


                  </div>  <!-- cierre primer row  -->

<div style=" height: 100%; line-height: 200px;">
                  <div style=" vertical-align: middle; text-align: center;">


      <img  src="../z_imagenes/banner.jpg?nocache=<?php echo time(); ?>"

         class="fotologuitocol img-responsive img-thumbnail" style=" max-height: 214px; padding-bottom: 5px;"

          id=""  onerror="this.src='../z_imagenes/banner_vacio.jpg';"/> 

                    </div>
                    
  </div>


                </div>  <!-- cierre col 12 que define todo lo que esta adentro -->


</div>

<div class="col-lg-1 ">

<div class="form-row ">  

<div data-toggle="tooltip" data-placement="right" title="Borrar banner cargado.">

<button type="button" class="ml-2 mt-2 btn btn-sm btn-outline-info" data-toggle="modal" data-target="#borrar_fotos_perKK">
 <i class="fas fa-trash-alt fa-lg"></i>
</button>

</div>

  </div>


</div>

</div>






<!-- ini Modal foto-->

<div class="modal fade" tabindex="-1" id="cropImagePop_A" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Encuadre dentro del margen y haga clic en "Recortar".</h5>
   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">       

            <div class="text-center">
              <div id="upload-demo_A"></div>
            </div>



<div class="form-row">
<div class="mx-auto col-md-12 mt-4">


           
          <button class="col-md-12 mt-2 btn btn-success cropImageBtn_A" id="cropImageBtn_A">Recortar</button>





</div> 
</div>




 <div class="form-row ">  <!-- mensaje q aprece -->

           <div class="content1 mt-1 mb-1 col-md-12 text-center" style="display:none">

           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

           </div>


           

           <div class="content2 mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Guardar"</b>.

          </div>






           </div>  <!-- cierre form-row -->








      </div>

      <div class="modal-footer">

        <form enctype="multipart/form-data" method="post" name="cargarfotoWW">
        
        <button type="submit" name="submit" class="btn btn-primary " id="guardar_img" disabled>Guardar</button>

         <button type="submit" class="btn btn-secondary" name="cancelWW">Cerrar</button>
        


        </form>

      </div>

    </div>
  </div>
</div>

<!-- cierre The Modal -->



<br>




<div class="form-row">

                <div class="col-lg-10 ">
                  <div class="card border-warning" style=" height: 166px; padding-bottom: 5px;">
                    <div class="form-row  ">  <!--  -->
                      <div class="col-10 col-md-10 mt-1 ml-1">
        <div class="upload-btn-wrapper">
                      <button class="btnX">Cargar y/o actualizar cabecera impresa <i class="fas fa-search fa-lg"></i></button>
    <input  class="item-img_B center-block punterodd" type="file"  accept="image/*"  name="file_photo_B"  id="file_photo_B"  /> 
                  </div>                    

                  </div> 

                   <div class="col-2 col-md-2 mt-2">
                     <?php 
                        if ($foto_success!="")
      { echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto cargada.\">".$foto_success."</i>"; }
                      ?>
                      <?php 
                        if ($foto_danger!="")
      { echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto no cargada.\">".$foto_danger."</i>"; }
                      ?>
                          <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->       
                  </div>                        
                    </div>  <!-- cierre form row -->

<div style=" ">
                  <div style=" vertical-align: middle; text-align: center;">

      <img  src="zzz_impresiones/header_personal.png?nocache=<?php echo time(); ?>"

         class="fotologuitocol img-responsive " style=" max-height: 214px; max-width: 100%; padding-bottom: 5px;"

          id=""  onerror="this.src='zzz_impresiones/header_vacio.png';"/> 

                    </div>
  </div>

                  </div>
                </div>  <!-- cierre col 10  -->


          <div class="col-lg-1 ">

<div class="form-row ">  

<div data-toggle="tooltip" data-placement="right" title="Borrar cabecera cargada.">

<button type="button" class="ml-2 mt-2 btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#borrar_cabecera_perKK">
 <i class="fas fa-trash-alt fa-lg"></i>
</button>

</div>

  </div>
          </div>

</div>  <!-- aqui termina -->



<!-- ini Modal foto-->

<div class="modal fade" tabindex="-1" id="cropImagePop_B" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-fullxl" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Encuadre la cabecera y haga clic en "Recortar".</h5>
   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">       

            <div class="text-center">
              <div id="upload-demo_B"></div>
            </div>

<div class="form-row">
<div class="mx-auto col-md-12 mt-4">           
          <button class="col-md-12 mt-2 btn btn-success cropImageBtn_B" id="cropImageBtn_B">Recortar</button>
</div> 
</div>

 <div class="form-row ">  <!-- mensaje q aprece -->
           <div class="content1 mt-1 mb-1 col-md-12 text-center" style="display:none">
           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>
           </div>  
           <div class="content2 mt-1 mb-1 col-md-12 text-center" style="display:none">
<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Guardar"</b>.
          </div>

</div>  <!-- cierre form-row -->

      </div>

      <div class="modal-footer">
        <form enctype="multipart/form-data" method="post" name="cargarfotoTT">        
        <button type="submit" name="submit" class="btn btn-primary " id="guardar_imgB" disabled>Guardar</button>
         <button type="submit" class="btn btn-secondary" name="cancelTT">Cerrar</button>        
        </form>
      </div>

    </div>
  </div>
</div>   <!-- cierre The Modal -->







<br>

<div class="form-row">
                <div class="col-lg-10 ">
                  <div class="card border-secondary" style=" height: 166px; padding-bottom: 5px;">
                    <div class="form-row  ">  <!--  -->
                      <div class="col-10 col-md-10 mt-1 ml-1">
        <div class="upload-btn-wrapper">
                      <button class="btnX">Cargar y/o actualizar cabecera impresa para certificados <i class="fas fa-search fa-lg"></i></button>
    <input  class="item-img_B_new center-block punterodd" type="file"  accept="image/*"  name="file_photo_B_new"  id="file_photo_B_new"  /> 
                  </div>                    

                  </div> 

                   <div class="col-2 col-md-2 mt-2">
                     <?php 
                        if ($foto_success!="")
      { echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto cargada.\">".$foto_success."</i>"; }
                      ?>
                      <?php 
                        if ($foto_danger!="")
      { echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto no cargada.\">".$foto_danger."</i>"; }
                      ?>
                          <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->       
                  </div>                        
                    </div>  <!-- cierre form row -->

<div style=" ">
                  <div style=" vertical-align: middle; text-align: center;">

      <img  src="zzz_impresiones/header_certificado.png?nocache=<?php echo time(); ?>"

         class="fotologuitocol img-responsive " style=" max-height: 214px; max-width: 100%; padding-bottom: 5px;"

          id=""  onerror="this.src='zzz_impresiones/header_vacio.png';"/> 

                    </div>
  </div>

                  </div>
                </div>  <!-- cierre col 10  -->

          <div class="col-lg-1 ">
<div class="form-row ">  
<div data-toggle="tooltip" data-placement="right" title="Borrar cabecera cargada.">
<button type="button" class="ml-2 mt-2 btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#borrar_cabecera_perKK_new">
 <i class="fas fa-trash-alt fa-lg"></i>
</button>
</div>

  </div>
          </div>
</div>  <!-- aqui termina -->






<!-- ini Modal foto-->

<div class="modal fade" tabindex="-1" id="cropImagePop_B_new" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-fullxl" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Encuadre la cabecera y haga clic en "Recortar".</h5>
   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">       

            <div class="text-center">
              <div id="upload-demo_B_new"></div>
            </div>

<div class="form-row">
<div class="mx-auto col-md-12 mt-4">           
          <button class="col-md-12 mt-2 btn btn-success cropImageBtn_B_new" id="cropImageBtn_B_new">Recortar</button>
</div> 
</div>

 <div class="form-row ">  <!-- mensaje q aprece -->
           <div class="content1_new mt-1 mb-1 col-md-12 text-center" style="display:none">
           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>
           </div>  
           <div class="content2_new mt-1 mb-1 col-md-12 text-center" style="display:none">
<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Guardar"</b>.
          </div>

</div>  <!-- cierre form-row -->

      </div>

      <div class="modal-footer">
        <form enctype="multipart/form-data" method="post" name="cargarfotoTT_new">        
        <button type="submit" name="submit" class="btn btn-primary " id="guardar_imgB_new" disabled>Guardar</button>
         <button type="submit" class="btn btn-secondary" name="cancelTT_new">Cerrar</button>        
        </form>
      </div>

    </div>
  </div>
</div>   <!-- cierre The Modal -->



















<br>

<div class="form-row">
                <div class="col-lg-4 ">
                  <div class="card border-info" style=" height: 300px; padding-bottom: 5px;">
                    <div class="form-row  ">  <!--  -->
                      <div class="col-10 col-md-10 mt-1 ml-1">
        <div class="upload-btn-wrapper">
                      <button class="btnX">Cargar y/o actualizar escudo nacional <i class="fas fa-search fa-lg"></i></button>
    <input  class="item-img_Y_new center-block punterodd" type="file"  accept="image/*"  name="file_photo_Y_new"  id="file_photo_Y_new"  /> 
                  </div>                    

                  </div> 

                   <div class="col-2 col-md-2 mt-2">
                     <?php 
                        if ($foto_success!="")
      { echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Escudo cargado.\">".$foto_success."</i>"; }
                      ?>
                      <?php 
                        if ($foto_danger!="")
      { echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Escudo no cargado.\">".$foto_danger."</i>"; }
                      ?>
                          <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->       
                  </div>                        
                    </div>  <!-- cierre form row -->

<div style=" ">
                  <div style=" vertical-align: middle; text-align: center;">

      <img  src="zzz_impresiones/header_escudo.png?nocache=<?php echo time(); ?>"

         class="fotologuitocol img-responsive " style=" max-height: 230px; max-width: 100%; padding-bottom: 5px;"

          id=""  onerror="this.src='zzz_impresiones/01vacio.jpg';"/> 

                    </div>
  </div>

                  </div>
                </div>  <!-- cierre col 10  -->

          <div class="col-lg-1 ">
<div class="form-row ">  
<div data-toggle="tooltip" data-placement="right" title="Borrar escudo cargado.">
<button type="button" class="ml-2 mt-2 btn btn-sm btn-outline-info" data-toggle="modal" data-target="#borrar_escudo_perKK_new">
 <i class="fas fa-trash-alt fa-lg"></i>
</button>
</div>

  </div>
          </div>
</div>  <!-- aqui termina -->






<!-- ini Modal foto-->

<div class="modal fade" tabindex="-1" id="cropImagePop_Y_new" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Encuadre el escudo y haga clic en "Recortar".</h5>
   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">       

            <div class="text-center">
              <div id="upload-demo_Y_new"></div>
            </div>

<div class="form-row">
<div class="mx-auto col-md-12 mt-4">           
          <button class="col-md-12 mt-2 btn btn-success cropImageBtn_Y_new" id="cropImageBtn_Y_new">Recortar</button>
</div> 
</div>

 <div class="form-row ">  <!-- mensaje q aprece -->
           <div class="content1Y_new mt-1 mb-1 col-md-12 text-center" style="display:none">
           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>
           </div>  
           <div class="content2Y_new mt-1 mb-1 col-md-12 text-center" style="display:none">
<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Escudo recortado</b>; click en <b class="text-primary">"Guardar"</b>.
          </div>

</div>  <!-- cierre form-row -->

      </div>

      <div class="modal-footer">
        <form enctype="multipart/form-data" method="post" name="cargarfotoTT_new">        
        <button type="submit" name="submit" class="btn btn-primary " id="guardar_imgY_new" disabled>Guardar</button>
         <button type="submit" class="btn btn-secondary" name="cancelTT_new">Cerrar</button>        
        </form>
      </div>

    </div>
  </div>
</div>   <!-- cierre The Modal -->











<br>






<div class="form-row">


                <div class="col-lg-6 ">
                  <div class="card border-success" style=" height: 282px; padding-bottom: 5px;">

                    <div class="form-row  ">  <!--  -->



                      <div class="col-10 col-md-10 mt-1 ml-1">

        <div class="upload-btn-wrapper">
                      <button class="btnX">Cargar y/o actualizar carnet estudiantil <i class="fas fa-search fa-lg"></i></button>
    <input  class="item-img_C center-block punterodd" type="file"  accept="image/*"  name="file_photo_C"  id="file_photo_C"  /> 
                     
        </div>
                    

                  </div> 



                   <div class="col-2 col-md-2 mt-2">


                     <?php 
                        if ($foto_success!="")
      { echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto cargada.\">".$foto_success."</i>"; }
                      ?>

                      <?php 
                        if ($foto_danger!="")
      { echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto no cargada.\">".$foto_danger."</i>"; }
                      ?>
                          <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->       


                  </div>
                        
                    </div>  <!-- cierre form row -->




<div style=" ">
                  <div style=" vertical-align: middle; text-align: center;">


      <img  src="zzz_impresiones/carnet_alt.jpg?nocache=<?php echo time(); ?>"

         class="fotologuitocol img-responsive " style=" max-height: 214px; max-width: 100%; padding-bottom: 5px;"

          id=""  onerror="this.src='zzz_impresiones/carnet_vacio.jpg';"/> 

                    </div>
                    
  </div>





                  </div>
                </div>  <!-- cierre col 10  -->






          <div class="col-lg-1 ">

<div class="form-row ">  

<div data-toggle="tooltip" data-placement="right" title="Borrar carnet cargado.">

<button type="button" class="ml-2 mt-2 btn btn-sm btn-outline-success" data-toggle="modal" data-target="#borrar_carnet_e_perKK">
 <i class="fas fa-trash-alt fa-lg"></i>
</button>

</div>

  </div>


          </div>

</div>



<!-- ini Modal foto-->

<div class="modal fade" tabindex="-1" id="cropImagePop_C" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Encuadre el carnet y haga clic en "Recortar".</h5>
   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">       

            <div class="text-center">
              <div id="upload-demo_C"></div>
            </div>



<div class="form-row">
<div class="mx-auto col-md-12 mt-4">
           
          <button class="col-md-12 mt-2 btn btn-success cropImageBtn_C" id="cropImageBtn_C">Recortar</button>

</div> 
</div>




 <div class="form-row ">  <!-- mensaje q aprece -->

           <div class="content1 mt-1 mb-1 col-md-12 text-center" style="display:none">

           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

           </div>
          

           <div class="content2 mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Guardar"</b>.

          </div>






           </div>  <!-- cierre form-row -->








      </div>

      <div class="modal-footer">

        <form enctype="multipart/form-data" method="post" name="cargarfotoTT">
        
        <button type="submit" name="submit" class="btn btn-primary " id="guardar_imgC" disabled>Guardar</button>

         <button type="submit" class="btn btn-secondary" name="cancelAA">Cerrar</button>
        


        </form>

      </div>

    </div>
  </div>
</div>

<!-- cierre The Modal -->













<br>




<div class="form-row">
                <div class="col-lg-6 ">
                  <div class="card border-primary" style=" height: 282px; padding-bottom: 5px;">
                    <div class="form-row  ">  <!--  -->
                      <div class="col-10 col-md-10 mt-1 ml-1">

        <div class="upload-btn-wrapper">
                      <button class="btnX">Cargar y/o actualizar carnet del personal <i class="fas fa-search fa-lg"></i></button>
    <input  class="item-img_D center-block punterodd" type="file"  accept="image/*"  name="file_photo_D"  id="file_photo_D"  />                      
        </div>      
              </div> 
                   <div class="col-2 col-md-2 mt-2">
                     <?php 
                        if ($foto_success!="")
      { echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto cargada.\">".$foto_success."</i>"; }
                      ?>
                      <?php 
                        if ($foto_danger!="")
      { echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto no cargada.\">".$foto_danger."</i>"; }
                      ?>                        <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->       
                  </div>                        
                    </div>  <!-- cierre form row -->

<div style=" ">
                  <div style=" vertical-align: middle; text-align: center;">
      <img  src="zzz_impresiones/carnet_plant.jpg?nocache=<?php echo time(); ?>"
         class="fotologuitocol img-responsive " style=" max-height: 214px; max-width: 100%; padding-bottom: 5px;"
          id=""  onerror="this.src='zzz_impresiones/carnet_vacio.jpg';"/> 
                    </div>                    
  </div>

                  </div>
                </div>  <!-- cierre col 10  -->


          <div class="col-lg-1 ">

<div class="form-row ">  
  <div data-toggle="tooltip" data-placement="right" title="Borrar carnet cargado.">
  <button type="button" class="ml-2 mt-2 btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#borrar_carnet_p_perKK">
   <i class="fas fa-trash-alt fa-lg"></i>
  </button>
  </div>




</div>  
          </div>


          <div class="col-lg-5 ">

<div class="form-row ">  

           <b>Nota:</b> El diseño del carnet del personal puede ser horizontal o vertical, asegúrese de seleccionar la opción correcta, observe el archivo photoshop de la carpeta <b>"tools"</b> del sistema, en ella encontrara el maquetado ideal.

</div>

<form method="POST">
<div class="form-row mt-4">



 <div class="input-group col-md-8 mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-primary" id="basic-addon1"><i><b>Horientación:</b></i></span>  
                    </div>

<?php

include("../conectar.php");

$query_horient = "SELECT id_tema, horientacion FROM zz_tema where id_tema = '1' LIMIT 1";

$datos_horient = mysqli_query($enlace, $query_horient) or die(mysqli_error());

$row_datos_horient = mysqli_fetch_array($datos_horient );

mysqli_close($enlace);

?>      





<select class="form-control" id="selecc_horient" name="selecc_horient">
<option value="<?php echo $row_datos_horient['horientacion']; ?>" selected><?php echo $row_datos_horient['horientacion']; ?></option>

<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>                            
    
    <option value = "Horizontal">Horizontal</option>
    <option value = "Vertical">Vertical</option>
    
                              
                            </select>                     
 
          </div>

             <div class="col-md-1 mb-3">
            <button type="submit" name="cambiar_horient" class="btn btn-outline-primary btn-block">
            <i class="far fa-save fa-lg"></i></button>
              </div> 








</div>  </form>

          </div>





</div>

<!-- ini Modal foto-->

<div class="modal fade" tabindex="-1" id="cropImagePop_D" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Encuadre el carnet y haga clic en "Recortar".</h5>
   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>
      <div class="modal-body">  
            <div class="text-center">
              <div id="upload-demo_D"></div>
            </div>

<div class="form-row">
<div class="mx-auto col-md-12 mt-4">           
          <button class="col-md-12 mt-2 btn btn-success cropImageBtn_D" id="cropImageBtn_D">Recortar</button>
</div> 
</div>

 <div class="form-row ">  <!-- mensaje q aprece -->
           <div class="content1 mt-1 mb-1 col-md-12 text-center" style="display:none">
           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>
           </div> 
           <div class="content2 mt-1 mb-1 col-md-12 text-center" style="display:none">
<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Guardar"</b>.
          </div>
           </div>  <!-- cierre form-row -->

      </div>

      <div class="modal-footer">
        <form enctype="multipart/form-data" method="post" name="cargarfotoPP">        
        <button type="submit" name="submit" class="btn btn-primary " id="guardar_imgD" disabled>Guardar</button>
         <button type="submit" class="btn btn-secondary" name="cancelPP">Cerrar</button>
        </form>

      </div>

    </div>
  </div>
</div>

<!-- cierre The Modal -->

<br>

<div class="form-row">
                <div class="col-lg-8 ">
                  <div class="card border-warning" style=" height: 332px; padding-bottom: 5px;">
                    <div class="form-row  ">  <!--  -->
                      <div class="col-10 col-md-10 mt-1 ml-1">

        <div class="upload-btn-wrapper">
                      <button class="btnX">Cargar y/o actualizar marca de agua <i class="fas fa-search fa-lg"></i></button>
    <input  class="item-img_DHH center-block punterodd" type="file"  accept="image/*"  name="file_photo_DHH"  id="file_photo_DHH"  />                      
        </div>      
              </div> 
                   <div class="col-2 col-md-2 mt-2">
                     <?php 
                        if ($foto_success!="")
      { echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Imagen cargada.\">".$foto_success."</i>"; }
                      ?>
                      <?php 
                        if ($foto_danger!="")
      { echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Imagen no cargada.\">".$foto_danger."</i>"; }
                      ?>                        <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO-->       
                  </div>                        
                    </div>  <!-- cierre form row -->

<div style=" ">
                  <div style=" vertical-align: middle; text-align: center;">
      <img  src="zzz_impresiones/water_mark.png?nocache=<?php echo time(); ?>"
         class="fotologuitocol img-responsive " style=" max-height: 274px; max-width: 100%; padding-bottom: 5px;"
          id=""  onerror="this.src='zzz_impresiones/water_vacio.png';"/> 
                    </div>                    
  </div>

                  </div>
                </div>  <!-- cierre col 10  -->


          <div class="col-lg-1 ">

<div class="form-row ">  
  <div data-toggle="tooltip" data-placement="right" title="Borrar marca de agua cargada.">
  <button type="button" class="ml-2 mt-2 btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#borrar_marca_p_perKK">  <!-- _carnet_ --> 
   <i class="fas fa-trash-alt fa-lg"></i>
  </button>
  </div>
</div>
          </div>
</div>

<!-- ini Modal foto-->

<div class="modal fade" tabindex="-1" id="cropImagePop_DHH" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Encuadre la imagen y haga clic en "Recortar".</h5>
   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>
      <div class="modal-body">  
            <div class="text-center">
              <div id="upload-demo_DHH"></div>
            </div>

<div class="form-row">
<div class="mx-auto col-md-12 mt-4">           
          <button class="col-md-12 mt-2 btn btn-success cropImageBtn_DHH" id="cropImageBtn_DHH">Recortar</button>
</div> 
</div>

 <div class="form-row ">  <!-- mensaje q aprece -->
           <div class="content1 mt-1 mb-1 col-md-12 text-center" style="display:none">
           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>
           </div> 
           <div class="content2 mt-1 mb-1 col-md-12 text-center" style="display:none">
<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Guardar"</b>.
          </div>
           </div>  <!-- cierre form-row -->

      </div>

      <div class="modal-footer">
        <form enctype="multipart/form-data" method="post" name="cargarfotoPP_HH">        
        <button type="submit" name="submit" class="btn btn-primary " id="guardar_imgDHH" disabled>Guardar</button>
         <button type="submit" class="btn btn-secondary" name="cancelPPHH">Cerrar</button>
        </form>

      </div>

    </div>
  </div>
</div>

<!-- cierre The Modal -->





<br>
<div class="form-row">
                <div class="col-lg-5 ">
                  <div class="card border-dark" style=" height: 382px; padding-bottom: 5px;">
                    <div class="form-row  ">  <!--  -->
                      <div class="col-10 col-md-10 mt-1 ml-1">

        <div class="upload-btn-wrapper">
                      <button class="btnX">Cargar y/o actualizar Horario Inicial <i class="fas fa-search fa-lg"></i></button>
    <input  class="item-img_DA center-block punterodd" type="file"  accept="image/*"  name="file_photo_DA"  id="file_photo_DA"  />
        </div> 
                  </div> 
                   <div class="col-2 col-md-2 mt-2">
                     <?php 
                        if ($foto_success!="")
      { echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto cargada.\">".$foto_success."</i>"; }
                      ?>

                      <?php 
                        if ($foto_danger!="")
      { echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto no cargada.\">".$foto_danger."</i>"; }
                      ?>
                          <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO--> 
                  </div>
                        
                    </div>  <!-- cierre form row -->
<div style=" ">
                  <div style=" vertical-align: middle; text-align: center;">
      <img  src="recursos/Horario inicial.png?nocache=<?php echo time(); ?>"
         class="fotologuitocol img-responsive " style=" max-height: 314px; max-width: 100%; padding-bottom: 5px;"
          id=""  onerror="this.src='recursos/Horario Vacio.png';"/> 
                    </div>                    
  </div>
                  </div>
                </div>  <!-- cierre col 10  -->
          <div class="col-lg-1 ">
<div class="form-row ">
<div data-toggle="tooltip" data-placement="right" title="Borrar horario cargado.">
<button type="button" class="ml-2 mt-2 btn btn-sm btn-outline-dark" data-toggle="modal" data-target="#borrar_carnet_p_DA">
 <i class="fas fa-trash-alt fa-lg"></i>
</button>
</div>
  </div>
          </div>




           <div class="col-lg-5 ">
                  <div class="card border-dark" style=" height: 382px; padding-bottom: 5px;">
                    <div class="form-row  ">  <!--  -->
                      <div class="col-10 col-md-10 mt-1 ml-1">

        <div class="upload-btn-wrapper">
                      <button class="btnX">Cargar y/o actualizar Horario Básica <i class="fas fa-search fa-lg"></i></button>
    <input  class="item-img_DB center-block punterodd" type="file"  accept="image/*"  name="file_photo_DB"  id="file_photo_DB"  />
        </div> 
                  </div> 
                   <div class="col-2 col-md-2 mt-2">
                     <?php 
                        if ($foto_success!="")
      { echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto cargada.\">".$foto_success."</i>"; }
                      ?>

                      <?php 
                        if ($foto_danger!="")
      { echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto no cargada.\">".$foto_danger."</i>"; }
                      ?>
                          <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO--> 
                  </div>
                        
                    </div>  <!-- cierre form row -->
<div style=" ">
                  <div style=" vertical-align: middle; text-align: center;">
      <img  src="recursos/Horario basica.png?nocache=<?php echo time(); ?>"
         class="fotologuitocol img-responsive " style=" max-height: 314px; max-width: 100%; padding-bottom: 5px;"
          id=""  onerror="this.src='recursos/Horario Vacio.png';"/> 
                    </div>                    
  </div>
                  </div>
                </div>  <!-- cierre col 10  -->
          <div class="col-lg-1 ">
<div class="form-row ">
<div data-toggle="tooltip" data-placement="right" title="Borrar horario cargado.">
<button type="button" class="ml-2 mt-2 btn btn-sm btn-outline-dark" data-toggle="modal" data-target="#borrar_carnet_p_DB">
 <i class="fas fa-trash-alt fa-lg"></i>
</button>
</div>
  </div>
          </div>
</div>






<!-- ini Modal foto-->
<div class="modal fade" tabindex="-1" id="cropImagePop_DA" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Encuadre el horario Inicial y haga clic en "Recortar".</h5>
      </div>
      <div class="modal-body">
            <div class="text-center">
              <div id="upload-demo_DA"></div>
            </div>
<div class="form-row">
<div class="mx-auto col-md-12 mt-4">           
          <button class="col-md-12 mt-2 btn btn-success cropImageBtn_DA" id="cropImageBtn_DA">Recortar</button>
</div> 
</div>
 <div class="form-row ">  <!-- mensaje q aprece -->
           <div class="content1 mt-1 mb-1 col-md-12 text-center" style="display:none">
           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>
           </div>
           <div class="content2 mt-1 mb-1 col-md-12 text-center" style="display:none">
<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Guardar"</b>.
          </div>
        </div>  <!-- cierre form-row -->
      </div>

      <div class="modal-footer">
        <form enctype="multipart/form-data" method="post" name="cargarfotoDA">        
        <button type="submit" name="submit" class="btn btn-primary " id="guardar_imgDA" disabled>Guardar</button>
         <button type="submit" class="btn btn-secondary" name="cancelDA">Cerrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- cierre The Modal -->




<!-- ini Modal foto-->
<div class="modal fade" tabindex="-1" id="cropImagePop_DB" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Encuadre el horario Básica y haga clic en "Recortar".</h5>
      </div>
      <div class="modal-body">
            <div class="text-center">
              <div id="upload-demo_DB"></div>
            </div>
<div class="form-row">
<div class="mx-auto col-md-12 mt-4">           
          <button class="col-md-12 mt-2 btn btn-success cropImageBtn_DB" id="cropImageBtn_DB">Recortar</button>
</div> 
</div>
 <div class="form-row ">  <!-- mensaje q aprece -->
           <div class="content1 mt-1 mb-1 col-md-12 text-center" style="display:none">
           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>
           </div>
           <div class="content2 mt-1 mb-1 col-md-12 text-center" style="display:none">
<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Guardar"</b>.
          </div>
        </div>  <!-- cierre form-row -->
      </div>

      <div class="modal-footer">
        <form enctype="multipart/form-data" method="post" name="cargarfotoDB">        
        <button type="submit" name="submit" class="btn btn-primary " id="guardar_imgDB" disabled>Guardar</button>
         <button type="submit" class="btn btn-secondary" name="cancelDB">Cerrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- cierre The Modal -->







<br> <!-- 2do row -->
<div class="form-row">
                <div class="col-lg-5 ">
                  <div class="card border-dark" style=" height: 382px; padding-bottom: 5px;">
                    <div class="form-row  ">  <!--  -->
                      <div class="col-10 col-md-10 mt-1 ml-1">

        <div class="upload-btn-wrapper">
                      <button class="btnX">Cargar y/o actualizar Horario Bachillerato <i class="fas fa-search fa-lg"></i></button>
    <input  class="item-img_DC center-block punterodd" type="file"  accept="image/*"  name="file_photo_DC"  id="file_photo_DC"  />
        </div> 
                  </div> 
                   <div class="col-2 col-md-2 mt-2">
                     <?php 
                        if ($foto_success!="")
      { echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto cargada.\">".$foto_success."</i>"; }
                      ?>

                      <?php 
                        if ($foto_danger!="")
      { echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto no cargada.\">".$foto_danger."</i>"; }
                      ?>
                          <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO--> 
                  </div>
                        
                    </div>  <!-- cierre form row -->
<div style=" ">
                  <div style=" vertical-align: middle; text-align: center;">
      <img  src="recursos/Horario Bachillerato.png?nocache=<?php echo time(); ?>"
         class="fotologuitocol img-responsive " style=" max-height: 314px; max-width: 100%; padding-bottom: 5px;"
          id=""  onerror="this.src='recursos/Horario Vacio.png';"/> 
                    </div>                    
  </div>
                  </div>
                </div>  <!-- cierre col 10  -->
          <div class="col-lg-1 ">
<div class="form-row ">
<div data-toggle="tooltip" data-placement="right" title="Borrar horario cargado.">
<button type="button" class="ml-2 mt-2 btn btn-sm btn-outline-dark" data-toggle="modal" data-target="#borrar_carnet_p_DC">
 <i class="fas fa-trash-alt fa-lg"></i>
</button>
</div>
  </div>
          </div>




           <div class="col-lg-5 ">
                  <div class="card border-dark" style=" height: 382px; padding-bottom: 5px;">
                    <div class="form-row  ">  <!--  -->
                      <div class="col-10 col-md-10 mt-1 ml-1">

        <div class="upload-btn-wrapper">
                      <button class="btnX">Cargar y/o actualizar Horario Multiple <i class="fas fa-search fa-lg"></i></button>
    <input  class="item-img_DD center-block punterodd" type="file"  accept="image/*"  name="file_photo_DD"  id="file_photo_DD"  />
        </div> 
                  </div> 
                   <div class="col-2 col-md-2 mt-2">
                     <?php 
                        if ($foto_success!="")
      { echo "<i class=\"text-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto cargada.\">".$foto_success."</i>"; }
                      ?>

                      <?php 
                        if ($foto_danger!="")
      { echo "<i class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Foto no cargada.\">".$foto_danger."</i>"; }
                      ?>
                          <!-- SOLO ES VISIBLE SI LA VARIABLE TIENE ALGO--> 
                  </div>
                        
                    </div>  <!-- cierre form row -->
<div style=" ">
                  <div style=" vertical-align: middle; text-align: center;">
      <img  src="recursos/Horario Multiple.png?nocache=<?php echo time(); ?>"
         class="fotologuitocol img-responsive " style=" max-height: 314px; max-width: 100%; padding-bottom: 5px;"
          id=""  onerror="this.src='recursos/Horario Vacio.png';"/> 
                    </div>                    
  </div>
                  </div>
                </div>  <!-- cierre col 10  -->
          <div class="col-lg-1 ">
<div class="form-row ">
<div data-toggle="tooltip" data-placement="right" title="Borrar horario cargado.">
<button type="button" class="ml-2 mt-2 btn btn-sm btn-outline-dark" data-toggle="modal" data-target="#borrar_carnet_p_DD">
 <i class="fas fa-trash-alt fa-lg"></i>
</button>
</div>
  </div>
          </div>
</div>






<!-- ini Modal foto-->
<div class="modal fade" tabindex="-1" id="cropImagePop_DC" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Encuadre el horario Bachillerato y haga clic en "Recortar".</h5>
      </div>
      <div class="modal-body">
            <div class="text-center">
              <div id="upload-demo_DC"></div>
            </div>
<div class="form-row">
<div class="mx-auto col-md-12 mt-4">           
          <button class="col-md-12 mt-2 btn btn-success cropImageBtn_DC" id="cropImageBtn_DC">Recortar</button>
</div> 
</div>
 <div class="form-row ">  <!-- mensaje q aprece -->
           <div class="content1 mt-1 mb-1 col-md-12 text-center" style="display:none">
           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>
           </div>
           <div class="content2 mt-1 mb-1 col-md-12 text-center" style="display:none">
<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Guardar"</b>.
          </div>
        </div>  <!-- cierre form-row -->
      </div>

      <div class="modal-footer">
        <form enctype="multipart/form-data" method="post" name="cargarfotoDC">        
        <button type="submit" name="submit" class="btn btn-primary " id="guardar_imgDC" disabled>Guardar</button>
         <button type="submit" class="btn btn-secondary" name="cancelDC">Cerrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- cierre The Modal -->




<!-- ini Modal foto-->
<div class="modal fade" tabindex="-1" id="cropImagePop_DD" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Encuadre el horario Multiple y haga clic en "Recortar".</h5>
      </div>
      <div class="modal-body">
            <div class="text-center">
              <div id="upload-demo_DD"></div>
            </div>
<div class="form-row">
<div class="mx-auto col-md-12 mt-4">           
          <button class="col-md-12 mt-2 btn btn-success cropImageBtn_DD" id="cropImageBtn_DD">Recortar</button>
</div> 
</div>
 <div class="form-row ">  <!-- mensaje q aprece -->
           <div class="content1 mt-1 mb-1 col-md-12 text-center" style="display:none">
           <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>
           </div>
           <div class="content2 mt-1 mb-1 col-md-12 text-center" style="display:none">
<b class="text-success">
<i class="fas fa-check"></i>&nbsp;&nbsp;Imagen recortada</b>; click en <b class="text-primary">"Guardar"</b>.
          </div>
        </div>  <!-- cierre form-row -->
      </div>

      <div class="modal-footer">
        <form enctype="multipart/form-data" method="post" name="cargarfotoDD">        
        <button type="submit" name="submit" class="btn btn-primary " id="guardar_imgDD" disabled>Guardar</button>
         <button type="submit" class="btn btn-secondary" name="cancelDD">Cerrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- cierre The Modal -->










<script type="text/javascript">


$(document).ready(function() {  
      
         
          setTimeout(function() {
              $(".content1").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".content2").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....



setTimeout(function() {
              $(".content1_new").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".content2_new").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....



          $('#cropImageBtn_A').click(function() {
            this.disabled = true;
            $(".content1").show();
                          
              setTimeout(function() {
                  $(".content1").fadeOut(6500);
            
              }, 7500);
              

          });



            $('#cropImageBtn_B').click(function() {
            this.disabled = true;
            $(".content1").show();
                          
              setTimeout(function() {
                  $(".content1").fadeOut(6500);
            
              }, 7500);
              

          });



                $('#cropImageBtn_B_new').click(function() {
            this.disabled = true;
            $(".content1_new").show();
                          
              setTimeout(function() {
                  $(".content1_new").fadeOut(6500);
            
              }, 7500);
              

          });



                   $('#cropImageBtn_Y_new').click(function() {
            this.disabled = true;
            $(".content1Y_new").show();
                          
              setTimeout(function() {
                  $(".content1Y_new").fadeOut(6500);
            
              }, 7500);
              

          });



             $('#cropImageBtn_C').click(function() {
            this.disabled = true;
            $(".content1").show();
                          
              setTimeout(function() {
                  $(".content1").fadeOut(6500);
            
              }, 7500);
              

          });





      });













// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

            var $uploadCrop_A,
            tempFilename_A,
            rawImg_A,
            imageId_A;

            function readFile_A(input) {


    var fileInput_A = document.getElementById('file_photo_A');
    var filePath_A = fileInput_A.value;
    var fileSize_A = fileInput_A.files[0].size;
    var allowedExtensions_A = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_A.exec(filePath_A)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_A.value = '';
        return false;  }

    if(fileSize_A > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

              if (input.files && input.files[0]) {
                      var reader_A = new FileReader();
                      reader_A.onload = function (e) {
                  $('.upload-demo_A').addClass('ready');
                  $('#cropImagePop_A').modal('show');
                        rawImg_A = e.target.result;
                      }
                      reader_A.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

   }


            $uploadCrop_A = $('#upload-demo_A').croppie({
              viewport: {
                 width: 952,
                    height: 190,
                    type: 'square'
              },
              boundary: {
                    width: 1052,
                    height: 290
                },
                enableExif: true
            });


            $('#cropImagePop_A').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_A.croppie('bind', {
                    url: rawImg_A
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_A').on('change', function () { imageId_A = $(this).data('id'); tempFilename_A = $(this).val();

            $('#cancelCropBtn_A').data('id', imageId_A); readFile_A(this); });

            $('#cropImageBtn_A').on('click', function (ev) {
              $uploadCrop_A.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {
                
                $.ajax({
                    url:"../z_imagenes/upload_banner.php?namexx=<?php echo $nnn['ci']; ?>",
                    type: "POST",
                    data:{"image": response},
                    success:function(data)
                    {     



              $('#uploaded_image_A').html(data);

                    $(".content1").hide();

                    $(".content2").show();

                    document.getElementById("guardar_img").disabled = false;




                    }
                  });
                        
                 })

            });

        // End upload preview image














// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

            var $uploadCrop_B,
            tempFilename_B,
            rawImg_B,
            imageId_B;

            function readFile_B(input) {


    var fileInput_B = document.getElementById('file_photo_B');
    var filePath_B = fileInput_B.value;
    var fileSize_B = fileInput_B.files[0].size;
    var allowedExtensions_B = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_B.exec(filePath_B)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_B.value = '';
        return false;  }

    if(fileSize_B > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

              if (input.files && input.files[0]) {
                      var reader_B = new FileReader();
                      reader_B.onload = function (e) {
                  $('.upload-demo_B').addClass('ready');
                  $('#cropImagePop_B').modal('show');
                        rawImg_B = e.target.result;
                      }
                      reader_B.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

   }


            $uploadCrop_B = $('#upload-demo_B').croppie({
              viewport: {
                 width: 1275,
                    height: 92,
                    type: 'square'
              },
              boundary: {
                    width: 1400,
                    height: 184
                },
                enableExif: true
            });


            $('#cropImagePop_B').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_B.croppie('bind', {
                    url: rawImg_B
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_B').on('change', function () { imageId_B = $(this).data('id'); tempFilename_B = $(this).val();

            $('#cancelCropBtn_B').data('id', imageId_B); readFile_B(this); });

            $('#cropImageBtn_B').on('click', function (ev) {
              $uploadCrop_B.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {
                
                $.ajax({
                    url:"zzz_impresiones/upload_header.php?namexx=<?php echo $nnn['ci']; ?>",
                    type: "POST",
                    data:{"image": response},
                    success:function(data)
                    {     



              $('#uploaded_image_B').html(data);

                    $(".content1").hide();

                    $(".content2").show();

                    document.getElementById("guardar_imgB").disabled = false;




                    }
                  });
                        
                 })

            });

        // End upload preview image








// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

            var $uploadCrop_B_new,
            tempFilename_B_new,
            rawImg_B_new,
            imageId_B_new;

            function readFile_B_new(input) {


    var fileInput_B_new = document.getElementById('file_photo_B_new');
    var filePath_B_new = fileInput_B_new.value;
    var fileSize_B_new = fileInput_B_new.files[0].size;
    var allowedExtensions_B_new = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_B_new.exec(filePath_B_new)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_B_new.value = '';
        return false;  }

    if(fileSize_B_new > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

              if (input.files && input.files[0]) {
                      var reader_B_new = new FileReader();
                      reader_B_new.onload = function (e) {
                  $('.upload-demo_B_new').addClass('ready');
                  $('#cropImagePop_B_new').modal('show');
                        rawImg_B_new = e.target.result;
                      }
                      reader_B_new.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

   }


            $uploadCrop_B_new = $('#upload-demo_B_new').croppie({
              viewport: {
                 width: 1275,
                    height: 92,
                    type: 'square'
              },
              boundary: {
                    width: 1400,
                    height: 184
                },
                enableExif: true
            });


            $('#cropImagePop_B_new').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_B_new.croppie('bind', {
                    url: rawImg_B_new
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_B_new').on('change', function () { imageId_B_new = $(this).data('id'); tempFilename_B_new = $(this).val();

            $('#cancelCropBtn_B_new').data('id', imageId_B_new); readFile_B_new(this); });

            $('#cropImageBtn_B_new').on('click', function (ev) {
              $uploadCrop_B_new.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {
                
                $.ajax({
                    url:"zzz_impresiones/upload_certificado.php?namexx=<?php echo $nnn['ci']; ?>",
                    type: "POST",
                    data:{"image": response},
                    success:function(data)
                    {     



              $('#uploaded_image_B_new').html(data);

                    $(".content1_new").hide();

                    $(".content2_new").show();

                    document.getElementById("guardar_imgB_new").disabled = false;




                    }
                  });
                        
                 })

            });

        // End upload preview image














// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

            var $uploadCrop_Y_new,
            tempFilename_Y_new,
            rawImg_Y_new,
            imageId_Y_new;

            function readFile_Y_new(input) {


    var fileInput_Y_new = document.getElementById('file_photo_Y_new');
    var filePath_Y_new = fileInput_Y_new.value;
    var fileSize_Y_new = fileInput_Y_new.files[0].size;
    var allowedExtensions_Y_new = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_Y_new.exec(filePath_Y_new)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_Y_new.value = '';
        return false;  }

    if(fileSize_Y_new > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

              if (input.files && input.files[0]) {
                      var reader_Y_new = new FileReader();
                      reader_Y_new.onload = function (e) {
                  $('.upload-demo_Y_new').addClass('ready');
                  $('#cropImagePop_Y_new').modal('show');
                        rawImg_Y_new = e.target.result;
                      }
                      reader_Y_new.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

   }


            $uploadCrop_Y_new = $('#upload-demo_Y_new').croppie({
              viewport: {
                 width: 450,
                    height: 450,
                    type: 'square'
              },
              boundary: {
                    width: 600,
                    height: 600
                },
                enableExif: true
            });


            $('#cropImagePop_Y_new').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_Y_new.croppie('bind', {
                    url: rawImg_Y_new
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_Y_new').on('change', function () { imageId_Y_new = $(this).data('id'); tempFilename_Y_new = $(this).val();

            $('#cancelCropBtn_Y_new').data('id', imageId_Y_new); readFile_Y_new(this); });

            $('#cropImageBtn_Y_new').on('click', function (ev) {
              $uploadCrop_Y_new.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {
                
                $.ajax({
                    url:"zzz_impresiones/upload_escudo.php?namexx=<?php echo $nnn['ci']; ?>",
                    type: "POST",
                    data:{"image": response},
                    success:function(data)
                    {     



              $('#uploaded_image_Y_new').html(data);

                    $(".content1Y_new").hide();

                    $(".content2Y_new").show();

                    document.getElementById("guardar_imgY_new").disabled = false;




                    }
                  });
                        
                 })

            });

        // End upload preview image
























// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

            var $uploadCrop_C,
            tempFilename_C,
            rawImg_C,
            imageId_C;

            function readFile_C(input) {


    var fileInput_C = document.getElementById('file_photo_C');
    var filePath_C = fileInput_C.value;
    var fileSize_C = fileInput_C.files[0].size;
    var allowedExtensions_C = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_C.exec(filePath_C)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_C.value = '';
        return false;  }

    if(fileSize_C > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

              if (input.files && input.files[0]) {
                      var reader_C = new FileReader();
                      reader_C.onload = function (e) {
                  $('.upload-demo_C').addClass('ready');
                  $('#cropImagePop_C').modal('show');
                        rawImg_C = e.target.result;
                      }
                      reader_C.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

   }


            $uploadCrop_C = $('#upload-demo_C').croppie({
              viewport: {
                 width: 612,
                    height: 198,
                    type: 'square'
              },
              boundary: {
                    width: 752,
                    height: 262
                },
                enableExif: true
            });


            $('#cropImagePop_C').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_C.croppie('bind', {
                    url: rawImg_C
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_C').on('change', function () { imageId_C = $(this).data('id'); tempFilename_C = $(this).val();

            $('#cancelCropBtn_C').data('id', imageId_C); readFile_C(this); });

            $('#cropImageBtn_C').on('click', function (ev) {
              $uploadCrop_C.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {
                
                $.ajax({
                    url:"zzz_impresiones/upload_carnet_e.php?namexx=<?php echo $nnn['ci']; ?>",
                    type: "POST",
                    data:{"image": response},
                    success:function(data)
                    {     



              $('#uploaded_image_C').html(data);

                    $(".content1").hide();

                    $(".content2").show();

                    document.getElementById("guardar_imgC").disabled = false;




                    }
                  });
                        
                 })

            });

        // End upload preview image







// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

            var $uploadCrop_D,
            tempFilename_D,
            rawImg_D,
            imageId_D;

            function readFile_D(input) {


    var fileInput_D = document.getElementById('file_photo_D');
    var filePath_D = fileInput_D.value;
    var fileSize_D = fileInput_D.files[0].size;
    var allowedExtensions_D = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_D.exec(filePath_D)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_D.value = '';
        return false;  }

    if(fileSize_D > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

              if (input.files && input.files[0]) {
                      var reader_D = new FileReader();
                      reader_D.onload = function (e) {
                  $('.upload-demo_D').addClass('ready');
                  $('#cropImagePop_D').modal('show');
                        rawImg_D = e.target.result;
                      }
                      reader_D.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

   }


            $uploadCrop_D = $('#upload-demo_D').croppie({
              viewport: {
                 width: 612,
                    height: 198,
                    type: 'square'
              },
              boundary: {
                    width: 752,
                    height: 262
                },
                enableExif: true
            });


            $('#cropImagePop_D').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_D.croppie('bind', {
                    url: rawImg_D
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_D').on('change', function () { imageId_D = $(this).data('id'); tempFilename_D = $(this).val();

            $('#cancelCropBtn_D').data('id', imageId_D); readFile_D(this); });

            $('#cropImageBtn_D').on('click', function (ev) {
              $uploadCrop_D.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {
                
                $.ajax({
                    url:"zzz_impresiones/upload_carnet_p.php?namexx=<?php echo $nnn['ci']; ?>",
                    type: "POST",
                    data:{"image": response},
                    success:function(data)
                    {     



              $('#uploaded_image_D').html(data);

                    $(".content1").hide();

                    $(".content2").show();

                    document.getElementById("guardar_imgD").disabled = false;




                    }
                  });
                        
                 })

            });

        // End upload preview image




// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

            var $uploadCrop_DA,
            tempFilename_DA,
            rawImg_DA,
            imageId_DA;
            function readFile_DA(input) {

    var fileInput_DA = document.getElementById('file_photo_DA');
    var filePath_DA = fileInput_DA.value;
    var fileSize_DA = fileInput_DA.files[0].size;
    var allowedExtensions_DA = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_DA.exec(filePath_DA)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_DA.value = '';
        return false;  }

    if(fileSize_DA > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }

else { 
              if (input.files && input.files[0]) {
                      var reader_DA = new FileReader();
                      reader_DA.onload = function (e) {
                  $('.upload-demo_DA').addClass('ready');
                  $('#cropImagePop_DA').modal('show');
                        rawImg_DA = e.target.result;
                      }
                      reader_DA.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

   }
            $uploadCrop_DA = $('#upload-demo_DA').croppie({
              viewport: {
                 width: 950,
                    height: 650,
                    type: 'square'
              },
              boundary: {
                    width: 1050,
                    height: 750
                },
                enableExif: true
            });

            $('#cropImagePop_DA').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_DA.croppie('bind', {
                    url: rawImg_DA
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_DA').on('change', function () { imageId_DA = $(this).data('id'); tempFilename_DA = $(this).val();

            $('#cancelCropBtn_DA').data('id', imageId_DA); readFile_DA(this); });

            $('#cropImageBtn_DA').on('click', function (ev) {
              $uploadCrop_DA.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {
                
                $.ajax({
                    url:"recursos/upload_hor_ini.php?namexx=<?php echo $nnn['ci']; ?>",
                    type: "POST",
                    data:{"image": response},
                    success:function(data)
                    {  

              $('#uploaded_image_DA').html(data);
                    $(".content1").hide();
                    $(".content2").show();
                    document.getElementById("guardar_imgDA").disabled = false;
                    }
                  });                        
                 })
            });
        // End upload preview image





// Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

            var $uploadCrop_DHH,
            tempFilename_DHH,
            rawImg_DHH,
            imageId_DHH;

            function readFile_DHH(input) {


    var fileInput_DHH = document.getElementById('file_photo_DHH');
    var filePath_DHH = fileInput_DHH.value;
    var fileSize_DHH = fileInput_DHH.files[0].size;
    var allowedExtensions_DHH = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_DHH.exec(filePath_DHH)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_DHH.value = '';
        return false;  }

    if(fileSize_DHH > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }


else { 

              if (input.files && input.files[0]) {
                      var reader_DHH = new FileReader();
                      reader_DHH.onload = function (e) {
                  $('.upload-demo_DHH').addClass('ready');
                  $('#cropImagePop_DHH').modal('show');
                        rawImg_DHH = e.target.result;
                      }
                      reader_DHH.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

   }


            $uploadCrop_DHH = $('#upload-demo_DHH').croppie({
              viewport: {
                 width: 900,
                    height: 450,
                    type: 'square'
              },
              boundary: {
                    width: 1000,
                    height: 550
                },
                enableExif: true
            });


            $('#cropImagePop_DHH').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_DHH.croppie('bind', {
                    url: rawImg_DHH
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_DHH').on('change', function () { imageId_DHH = $(this).data('id'); tempFilename_DHH = $(this).val();

            $('#cancelCropBtn_DHH').data('id', imageId_DHH); readFile_DHH(this); });

            $('#cropImageBtn_DHH').on('click', function (ev) {
              $uploadCrop_DHH.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {
                
                $.ajax({
                    url:"zzz_impresiones/upload_water_m.php?namexx=<?php echo $nnn['ci']; ?>",
                    type: "POST",
                    data:{"image": response},
                    success:function(data)
                    {     



              $('#uploaded_image_DHH').html(data);

                    $(".content1").hide();

                    $(".content2").show();

                    document.getElementById("guardar_imgDHH").disabled = false;




                    }
                  });
                        
                 })

            });

        // End upload preview image














        // Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

            var $uploadCrop_DB,
            tempFilename_DB,
            rawImg_DB,
            imageId_DB;
            function readFile_DB(input) {

    var fileInput_DB = document.getElementById('file_photo_DB');
    var filePath_DB = fileInput_DB.value;
    var fileSize_DB = fileInput_DB.files[0].size;
    var allowedExtensions_DB = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_DB.exec(filePath_DB)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_DB.value = '';
        return false;  }

    if(fileSize_DB > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }

else { 
              if (input.files && input.files[0]) {
                      var reader_DB = new FileReader();
                      reader_DB.onload = function (e) {
                  $('.upload-demo_DB').addClass('ready');
                  $('#cropImagePop_DB').modal('show');
                        rawImg_DB = e.target.result;
                      }
                      reader_DB.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

   }
            $uploadCrop_DB = $('#upload-demo_DB').croppie({
              viewport: {
                 width: 950,
                    height: 650,
                    type: 'square'
              },
              boundary: {
                    width: 1050,
                    height: 750
                },
                enableExif: true
            });

            $('#cropImagePop_DB').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_DB.croppie('bind', {
                    url: rawImg_DB
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_DB').on('change', function () { imageId_DB = $(this).data('id'); tempFilename_DB = $(this).val();

            $('#cancelCropBtn_DB').data('id', imageId_DB); readFile_DB(this); });

            $('#cropImageBtn_DB').on('click', function (ev) {
              $uploadCrop_DB.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {
                
                $.ajax({
                    url:"recursos/upload_hor_bas.php?namexx=<?php echo $nnn['ci']; ?>",
                    
                    type: "POST",
                    data:{"image": response},
                    success:function(data)
                    {  

              $('#uploaded_image_DB').html(data);
                    $(".content1").hide();
                    $(".content2").show();
                    document.getElementById("guardar_imgDB").disabled = false;
                    }
                  });                        
                 })
            });
        // End upload preview image


          // Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

            var $uploadCrop_DC,
            tempFilename_DC,
            rawImg_DC,
            imageId_DC;
            function readFile_DC(input) {

    var fileInput_DC = document.getElementById('file_photo_DC');
    var filePath_DC = fileInput_DC.value;
    var fileSize_DC = fileInput_DC.files[0].size;
    var allowedExtensions_DC = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_DC.exec(filePath_DC)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_DC.value = '';
        return false;  }

    if(fileSize_DC > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }

else { 
              if (input.files && input.files[0]) {
                      var reader_DC = new FileReader();
                      reader_DC.onload = function (e) {
                  $('.upload-demo_DC').addClass('ready');
                  $('#cropImagePop_DC').modal('show');
                        rawImg_DC = e.target.result;
                      }
                      reader_DC.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

   }
            $uploadCrop_DC = $('#upload-demo_DC').croppie({
              viewport: {
                 width: 950,
                    height: 650,
                    type: 'square'
              },
              boundary: {
                    width: 1050,
                    height: 750
                },
                enableExif: true
            });

            $('#cropImagePop_DC').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_DC.croppie('bind', {
                    url: rawImg_DC
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_DC').on('change', function () { imageId_DC = $(this).data('id'); tempFilename_DC = $(this).val();

            $('#cancelCropBtn_DC').data('id', imageId_DC); readFile_DC(this); });

            $('#cropImageBtn_DC').on('click', function (ev) {
              $uploadCrop_DC.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {
                
                $.ajax({
                    url:"recursos/upload_hor_bac.php?namexx=<?php echo $nnn['ci']; ?>",
                    
                    type: "POST",
                    data:{"image": response},
                    success:function(data)
                    {  

              $('#uploaded_image_DC').html(data);
                    $(".content1").hide();
                    $(".content2").show();
                    document.getElementById("guardar_imgDC").disabled = false;
                    }
                  });                        
                 })
            });
        // End upload preview image



          // Start upload preview image
//$(".imagen_default_A").attr("src", "../zz_fotos_p/ZZvacio.jpg");   // ../zz_fotos_p/02vacio.jpg

            var $uploadCrop_DD,
            tempFilename_DD,
            rawImg_DD,
            imageId_DD;
            function readFile_DD(input) {

    var fileInput_DD = document.getElementById('file_photo_DD');
    var filePath_DD = fileInput_DD.value;
    var fileSize_DD = fileInput_DD.files[0].size;
    var allowedExtensions_DD = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions_DD.exec(filePath_DD)){
      swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput_DD.value = '';
        return false;  }

    if(fileSize_DD > 10485760){
      swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }

else { 
              if (input.files && input.files[0]) {
                      var reader_DD = new FileReader();
                      reader_DD.onload = function (e) {
                  $('.upload-demo_DD').addClass('ready');
                  $('#cropImagePop_DD').modal('show');
                        rawImg_DD = e.target.result;
                      }
                      reader_DD.readAsDataURL(input.files[0]);
                  }
                  else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

   }
            $uploadCrop_DD = $('#upload-demo_DD').croppie({
              viewport: {
                 width: 950,
                    height: 650,
                    type: 'square'
              },
              boundary: {
                    width: 1050,
                    height: 750
                },
                enableExif: true
            });

            $('#cropImagePop_DD').on('shown.bs.modal', function(){
              // alert('Shown pop');
              $uploadCrop_DD.croppie('bind', {
                    url: rawImg_DD
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
            });

            $('.item-img_DD').on('change', function () { imageId_DD = $(this).data('id'); tempFilename_DD = $(this).val();

            $('#cancelCropBtn_DD').data('id', imageId_DD); readFile_DD(this); });

            $('#cropImageBtn_DD').on('click', function (ev) {
              $uploadCrop_DD.croppie('result', {
                type: 'canvas',
                format: 'png',
                size: 'viewport'
              }).then(function (response) {
                
                $.ajax({
                    url:"recursos/upload_hor_mul.php?namexx=<?php echo $nnn['ci']; ?>",
                    type: "POST",
                    data:{"image": response},
                    success:function(data)
                    {  

              $('#uploaded_image_DD').html(data);
                    $(".content1").hide();
                    $(".content2").show();
                    document.getElementById("guardar_imgDD").disabled = false;
                    }
                  });                        
                 })
            });
        // End upload preview image


</script>        
        



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
        Desea eliminar el banner cargado previamente?
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

 






<!-- Modal -->
<div class="modal fade" id="borrar_cabecera_perKK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        Desea eliminar la cabecera cargada previamente?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_tt_ff">  
        <button type="submit" name="borrar_tt_f" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 





  <!-- Modal -->
<div class="modal fade" id="borrar_cabecera_perKK_new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        Desea eliminar la cabecera para certificados cargada?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_tt_ff_new">  
        <button type="submit" name="borrar_tt_f_new" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!--  dd -- >







  <!-- Modal -->
<div class="modal fade" id="borrar_escudo_perKK_new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        Desea eliminar el escudo nacional previamente cargado?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_tt_ff_new">  
        <button type="submit" name="borrar_yyy_f_new" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!--  dd -- >






<!-- Modal -->
<div class="modal fade" id="borrar_carnet_e_perKK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        Desea eliminar el carnet cargado previamente?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_tt_ff">  
        <button type="submit" name="borrar_aa_f" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>






<!-- Modal -->
<div class="modal fade" id="borrar_carnet_p_perKK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        Desea eliminar el carnet cargado previamente?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_pp_ff">  
        <button type="submit" name="borrar_pp_f" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>






<!-- Modal -->
<div class="modal fade" id="borrar_marca_p_perKK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        Desea eliminar la marca de agua cargada previamente?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_pp_ffHH">  
        <button type="submit" name="borrar_pp_fHH" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!-- dd  -- >






<!-- Modal -->
<div class="modal fade" id="borrar_carnet_p_DA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        Desea eliminar el horario inicial cargado previamente?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_pp_DA">  
        <button type="submit" name="borrar_pp_fA" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!-- dd  -- >


<!-- Modal -->
<div class="modal fade" id="borrar_carnet_p_DB" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        Desea eliminar el horario básica cargado previamente?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_pp_DB">  
        <button type="submit" name="borrar_pp_fB" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!--  dd -- >




<!-- Modal -->
<div class="modal fade" id="borrar_carnet_p_DC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        Desea eliminar el horario bachillerato cargado previamente?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_pp_DC">  
        <button type="submit" name="borrar_pp_fC" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!--  dd -- >


<!-- Modal -->
<div class="modal fade" id="borrar_carnet_p_DD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        Desea eliminar el horario multiple cargado previamente?
      </div>
      <div class="modal-footer">   

<form method="POST" name="borrar_pp_DD">  
        <button type="submit" name="borrar_pp_fD" class="btn btn-primary">Si</button>
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

 <!--  dd  -- >




















      </div> <!-- cierre card body -->







<?php
include("../conectar.php");

        $queryzztema = "SELECT * FROM zz_tema LIMIT 1  
          
            ";

$datos_queryzztema = mysqli_query($enlace, $queryzztema) or die(mysqli_error());

$row_datos_queryzztema = mysqli_fetch_array($datos_queryzztema); 

$id_primer_zztema = $row_datos_queryzztema['id_tema'];

$cabecera_zztema = $row_datos_queryzztema['col_cabecera'];

$subtitulo_zztema = $row_datos_queryzztema['col_subtitulo'];

$pie_zztema = $row_datos_queryzztema['col_pie'];





mysqli_close($enlace);

?>




 <div class="card border-success" style="margin-top: 20px; padding: 10px;">

<h5 class="text-success"><i class="fas fa-spell-check fa-lg"></i> Indicadores y puntajes "Ponderación" para el listado impreso de evaluaciones grupales o puntuales.</h5>



<?php

include("../conectar.php");

              $querymod47 = "SELECT * FROM evaluaciones_puntuales where id_eval_punt = 1 ";

              $datos_mod47 = mysqli_query($enlace, $querymod47) or die(mysqli_error());
              
              $row_datos_mod47 = mysqli_fetch_array($datos_mod47);
                         
               mysqli_close($enlace);    

$primer_ind = $row_datos_mod47['1er_eval'];
$primer_nota = $row_datos_mod47['1er_pt'];


$segunda_ind = $row_datos_mod47['2da_eval'];
$segunda_nota = $row_datos_mod47['2da_pt'];


$tercer_ind = $row_datos_mod47['3er_eval'];
$tercer_nota = $row_datos_mod47['3er_pt'];


$cuarto_ind = $row_datos_mod47['4ta_eval'];
$cuarto_nota = $row_datos_mod47['4ta_pt'];


$quinto_ind = $row_datos_mod47['5ta_eval'];
$quinto_nota = $row_datos_mod47['5ta_pt'];



?>





<form method="POST">


 <div class="form-row">

  <script type="text/javascript">
  
function keyPressed(){
  var key = event.keyCode || event.charCode ||
  event.which;
  return key;
}

</script>


 <div class="input-group col-md-8 col-lg-4 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>1er Indicador:</b></i></span>  
                  </div>
<input maxlength="41" type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="primer_indicador" name="primer_indicador" value="<?php echo $primer_ind; ?>" required>                  
                  
</div>


 <div class="input-group col-md-4 col-lg-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>1er Puntaje máx:</b></i></span>  
                  </div>
<input maxlength="2" type="text"  class="form-control" id="primer_puntaje" name="primer_puntaje" value="<?php echo $primer_nota; ?>" required>                  
                  
</div>






 <div class="input-group col-md-8 col-lg-4 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>2do Ind.:</b></i></span>  
                  </div>
<input maxlength="41" type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="segunda_indicador" name="segunda_indicador" value="<?php echo $segunda_ind; ?>" required>                  
                  
</div>


 <div class="input-group col-md-4 col-lg-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>2do Punt. máx:</b></i></span>  
                  </div>
<input maxlength="2" type="text" class="form-control" id="segunda_puntaje" name="segunda_puntaje" value="<?php echo $segunda_nota; ?>" required>                  
                  
</div>


</div>





<div class="form-row">


 <div class="input-group col-md-8 col-lg-4 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>3er Ind.:</b></i></span>  
                  </div>
<input maxlength="41" type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="tercer_indicador" name="tercer_indicador" value="<?php echo $tercer_ind; ?>" required>                  
                  
</div>


 <div class="input-group col-md-4 col-lg-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>3er Punt. máx:</b></i></span>  
                  </div>
<input maxlength="2" type="text" class="form-control" id="tercer_puntaje" name="tercer_puntaje" value="<?php echo $tercer_nota; ?>" required>                  
                  
</div>






 <div class="input-group col-md-8 col-lg-4 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-dark" id="basic-addon1"><i><b>4to Ind.:</b></i></span>  
                  </div>
<input maxlength="41" type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="cuarto_indicador" name="cuarto_indicador" value="<?php echo $cuarto_ind; ?>" required>                  
                  
</div>


 <div class="input-group col-md-4 col-lg-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-dark" id="basic-addon1"><i><b>4to Punt. máx:</b></i></span>  
                  </div>
<input maxlength="2" type="text" class="form-control" id="cuarto_puntaje" name="cuarto_puntaje" value="<?php echo $cuarto_nota; ?>" required>                  
                  
</div>


</div>










 <div class="form-row">

     <div class="input-group col-md-8  col-lg-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-danger" id="basic-addon1"><i><b>5to Ind.:</b></i></span>  
                  </div>
<input maxlength="41" type="text" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" class="form-control" id="quinto_indicador" name="quinto_indicador" value="<?php echo $quinto_ind; ?>" required>                  
                  
</div>


 <div class="input-group col-md-4  col-lg-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-danger" id="basic-addon1"><i><b>5to Punt. máx:</b></i></span>  
                  </div>
<input maxlength="2" type="text" class="form-control" id="quinto_puntaje" name="quinto_puntaje" value="<?php echo $quinto_nota; ?>" required>                  
                  
</div>





      <div class="col-md-12 col-lg-5 mt-2 mb-3">

            <button type="submit" name="indicadores_evaluativos" class="btn btn-outline-info btn-block"> Guardar Indicadores y Puntuaciones Máximas &nbsp;
            <i class="far fa-save fa-lg"></i></button>

    </div>        

</div>


<h6 class="text-info"><b>Nota:</b> Cada indicador puede contener hasta un máximo de 41 caracteres, pero se recomienda solo usarlo en el último indicador,
de ser necesario observe el resultado final, en algunos casos será necesario usar guion de piso para que el intérprete de impresión coloque palabras
en la misma línea. - Programado para 5 indicadores mínimo con sus respectivas ponderaciones; <b>- Si se desea evaluar con menos indicadores, rellenar con un punto o
guion y colocar 0 en la ponderación.</b></h6> <b> Los Indicadores, no pueden contener espacios, de ser necesario considere usar guion de piso; Ejemp: Dominio_y_Compromiso.</b>



</form>
















</div><!-- cierre del borde -->




 <div class="card border-info col-md-12" style="margin-top: 20px; padding: 10px;">

<h5 class="text-info"><i class="fas fa-file-contract fa-lg"></i> Cabecera Documentos Generales / Artículo.</h5>









<form method="POST">


 <div class="form-row">


 <div class="input-group col-lg-4 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Principal:</b></i></span>  
                  </div>
<input maxlength="50" type="text" class="form-control" id="cabb_prin" name="cabb_prin" value="<?php echo $cab_principal; ?>" required>                  
                  
</div>


 <div class="input-group col-lg-4 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Secundario:</b></i></span>  
                  </div>
<input maxlength="50" type="text" class="form-control " id="cabb_sec" name="cabb_sec" value="<?php echo $cab_secundaria; ?>" required>                  
                  
</div>


 <div class="input-group col-lg-4 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Zona Educativa (E.F.):</b></i></span>  
                  </div>
<input maxlength="50" type="text" class="form-control " id="zona_e" name="zona_e" value="<?php echo $zona_educativa; ?>" required>                  
                  
</div>


</div>







 <div class="form-row">


 <div class="input-group col-md-6 col-lg-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Frases A:</b></i></span>  
                  </div>
<input maxlength="20" type="text" class="form-control" id="div11" name="div11" value="<?php echo $cab_div1; ?>" required>                  
                  
</div>


 <div class="input-group col-md-6 col-lg-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Frases B:</b></i></span>  
                  </div>
<input maxlength="20" type="text" class="form-control " id="div22" name="div22" value="<?php echo $cab_div2; ?>" required>                  
                  
</div>


 <div class="input-group col-md-12 col-lg-6 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Artículo que precede al nombre del plantel o institución:</b></i></span>  
                  </div>
<input maxlength="11" type="text" class="form-control " id="cabb_art" name="cabb_art" value="<?php echo $row_datos_modcabecc['art']; ?>" required>                  
                  
</div>


</div>


<h5 class="text-info"><i class="fas fa-file-alt fa-lg"></i> Acuerdos de Convivencia.</h5>


 <div class="form-row">   <!-- nuevo row footer -->

 <div class="input-group input-group-sm col-lg-12 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>A:</b></i></span>  
                  </div>
<input maxlength="199" type="text" class="form-control" id="cabb_a" name="cabb_a" value="<?php echo $row_datos_modcabecc['acuerdo_1']; ?>">
</div>
 <div class="input-group input-group-sm col-lg-12 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>B:</b></i></span>  
                  </div>
<input maxlength="199" type="text" class="form-control" id="cabb_b" name="cabb_b" value="<?php echo $row_datos_modcabecc['acuerdo_2']; ?>">
</div>
 <div class="input-group input-group-sm col-lg-12 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>C:</b></i></span>  
                  </div>
<input maxlength="199" type="text" class="form-control" id="cabb_c" name="cabb_c" value="<?php echo $row_datos_modcabecc['acuerdo_3']; ?>">
</div>
 <div class="input-group input-group-sm col-lg-12 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>D:</b></i></span>  
                  </div>
<input maxlength="199" type="text" class="form-control" id="cabb_d" name="cabb_d" value="<?php echo $row_datos_modcabecc['acuerdo_4']; ?>">
</div>
 <div class="input-group input-group-sm col-lg-12 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>E:</b></i></span>  
                  </div>
<input maxlength="199" type="text" class="form-control" id="cabb_e" name="cabb_e" value="<?php echo $row_datos_modcabecc['acuerdo_5']; ?>">
</div>
 <div class="input-group input-group-sm col-lg-12 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>F:</b></i></span>  
                  </div>
<input maxlength="199" type="text" class="form-control" id="cabb_f" name="cabb_f" value="<?php echo $row_datos_modcabecc['acuerdo_6']; ?>">
</div>
 <div class="input-group input-group-sm col-lg-12 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>G:</b></i></span>  
                  </div>
<input maxlength="199" type="text" class="form-control" id="cabb_g" name="cabb_g" value="<?php echo $row_datos_modcabecc['acuerdo_7']; ?>">
</div>




</div>



<h5 class="text-info"><i class="fas fa-exclamation fa-lg"></i> Footer Planilla de Pre y/o Inscripción.</h5>


 <div class="form-row">   <!-- nuevo row footer -->
 <div class="input-group input-group-sm col-lg-4 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Sub A:</b></i></span>  
                  </div>
<input maxlength="49" type="text" class="form-control" id="sub_1" name="sub_1" value="<?php echo $row_datos_modcabecc['sub_firma_1']; ?>">
</div>

 <div class="input-group input-group-sm col-lg-4 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Firma A:</b></i></span>  
                  </div>
<input maxlength="39" type="text" class="form-control" id="firma_1" name="firma_1" value="<?php echo $row_datos_modcabecc['firma_1']; ?>">
</div>



 <div class="input-group input-group-sm col-lg-4 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Nombre y Ape. Director(a):</b></i></span>  
                  </div>
<input maxlength="49" type="text" class="form-control" id="nomb_ape" name="nomb_ape" value="<?php echo $row_datos_modcabecc['nomb_ape']; ?>">
</div>




</div>


 <div class="form-row">   <!-- nuevo row footer -->
 <div class="input-group input-group-sm col-lg-6 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Sub B:</b></i></span>  
                  </div>
<input maxlength="49" type="text" class="form-control" id="sub_2" name="sub_2" value="<?php echo $row_datos_modcabecc['sub_firma_2']; ?>">
</div>

 <div class="input-group input-group-sm col-lg-6 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Firma B:</b></i></span>  
                  </div>
<input maxlength="39" type="text" class="form-control" id="firma_2" name="firma_2" value="<?php echo $row_datos_modcabecc['firma_2']; ?>">
</div>
</div>


 <div class="form-row">   <!-- nuevo row footer -->
 <div class="input-group input-group-sm col-lg-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Sub C:</b></i></span>  
                  </div>
<input maxlength="49" type="text" class="form-control" id="sub_3" name="sub_3" value="<?php echo $row_datos_modcabecc['sub_firma_3']; ?>">
</div>

 <div class="input-group input-group-sm col-lg-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Firma C:</b></i></span>  
                  </div>
<input maxlength="39" type="text" class="form-control" id="firma_3" name="firma_3" value="<?php echo $row_datos_modcabecc['firma_3']; ?>">
</div>

 <div class="col-md-2 mt-2 mb-3">

            <button type="submit" name="cabeceras_save" class="btn btn-sm btn-outline-info btn-block"> Guardar &nbsp;
            <i class="far fa-save fa-lg"></i></button>

    </div>  



</div>




</form>


</div><!-- cierre del borde -->







<!--

<div class="card border-dark col-md-12" style="margin-top: 50px; padding: 10px;">

<h5 class="text-dark"><i class="far fa-comments fa-lg"></i> Etiqueta.....</h5>






</div>   -->














    </div>  <!-- cierre card -->
              

                    






                           

  </div>   <!-- cierre container fluid -->
</div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
