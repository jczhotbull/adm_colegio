<?php

// esto es una prueba probuebabababababababababa

include("identificador.php");


if ($_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Cajero' && $_SESSION ['cargo'] != 'Secretario')

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





$filenameAA = 'zzz_impresiones/carnet_alt' .'.jpg';

$filenameAA_repre = '../zona_representantes/zzz_impresiones/carnet_alt' .'.jpg';

$filenamePP = 'zzz_impresiones/carnet_plant' .'.jpg';

$filenamePPHH = 'zzz_impresiones/water_mark' .'.png';


// guarda las nomenclaturas


$chebulll_pendejo = '../z_imagenes/logo_new.jpg';
if (!file_exists($chebulll_pendejo)) {
unlink('../conectar.php');
}



if(isset($_POST['periodo_pagos']))
        {

$mes_hasta_pagar = $_POST['selecc_mes_actual'];
 

      if (!$_POST['primer_pago'])      // verifica que no este vacío
    {   $errorZ .= "- 1° pago requerido. "; }


     if (strlen($_POST['primer_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 1° pago supera los 14 caracteres."; }    


    if (!$_POST['segundo_pago'])      // verifica que no este vacío
    {   $errorZ .= "- 2° pago requerido. "; }


         if (strlen($_POST['segundo_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 2° pago supera los 14 caracteres."; }  


     if (!$_POST['tercer_pago'])      // verifica que no este vacío
    {   $errorZ .= "- 3° pago requerido. "; }


         if (strlen($_POST['tercer_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 3° pago supera los 14 caracteres."; }  


     if (!$_POST['cuarto_pago'])      // verifica que no este vacío
    {   $errorZ .= "- 4° pago requerido. "; }


             if (strlen($_POST['cuarto_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 4° pago supera los 14 caracteres."; } 


     if (!$_POST['quinto_pago'])      // verifica que no este vacío
    {   $errorZ .= "- 5° pago requerido. "; }


                 if (strlen($_POST['quinto_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 5° pago supera los 14 caracteres."; } 


         if (!$_POST['sexto_pago'])      // verifica que no este vacío
    {   $errorZ .= "- 6° pago requerido. "; }


                     if (strlen($_POST['sexto_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 6° pago supera los 14 caracteres."; } 


     if (!$_POST['septimo_pago'])      // verifica que no este vacío
    {   $errorZ .= "- 7° pago requerido. "; }

                         if (strlen($_POST['septimo_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 7° pago supera los 14 caracteres."; } 


     if (!$_POST['octavo_pago'])      // verifica que no este vacío
    {   $errorZ .= "- 8° pago requerido. "; }


                            if (strlen($_POST['octavo_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 8° pago supera los 14 caracteres."; } 



         if (!$_POST['noveno_pago'])      // verifica que no este vacío
    {   $errorZ .= "- 9° pago requerido. "; }


       if (strlen($_POST['noveno_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 9° pago supera los 14 caracteres."; } 


     if (!$_POST['decimo_pago'])      // verifica que no este vacío
    {   $errorZ .= "- 10° pago requerido. "; }


    if (strlen($_POST['decimo_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 10° pago supera los 14 caracteres."; } 


     if (!$_POST['onceavo_pago'])      // verifica que no este vacío
    {   $errorZ .= "- 11° pago requerido. "; }



    if (strlen($_POST['onceavo_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 11° pago supera los 14 caracteres."; } 


         if (!$_POST['doceavo_pago'])      // verifica que no este vacío
    {   $errorZ .= "- 12° pago requerido. "; }


        if (strlen($_POST['doceavo_pago']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 12° pago supera los 14 caracteres."; } 



                      if (!$_POST['especial_primero'])      // verifica que no este vacío
    {   $errorZ .= "- 1° especial requerido. "; }


        if (strlen($_POST['especial_primero']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 1° especial supera los 14 caracteres."; } 


                                        if (!$_POST['especial_segundo'])      // verifica que no este vacío
    {   $errorZ .= "- 2° especial requerido. "; }


        if (strlen($_POST['especial_segundo']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 2° especial supera los 14 caracteres."; } 


                                        if (!$_POST['especial_tercero'])      // verifica que no este vacío
    {   $errorZ .= "- 3° especial requerido. "; }


        if (strlen($_POST['especial_tercero']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 3° especial supera los 14 caracteres."; } 


                                        if (!$_POST['especial_cuarto'])      // verifica que no este vacío
    {   $errorZ .= "- 4° especial requerido. "; }


        if (strlen($_POST['especial_cuarto']) >14 )  // no sea mayor a 14 caracteres
                  {   $errorZ .= "- El 4° especial supera los 14 caracteres."; } 





     if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }



      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");



          $sql = "UPDATE periodo_de_pago SET 1er_pago = '".mysqli_real_escape_string($enlace,$_POST['primer_pago'])."'   ,
                                             2do_pago = '".mysqli_real_escape_string($enlace,$_POST['segundo_pago'])."'  ,
                                             3er_pago = '".mysqli_real_escape_string($enlace,$_POST['tercer_pago'])."'  ,
                                             4to_pago = '".mysqli_real_escape_string($enlace,$_POST['cuarto_pago'])."'  ,

                                             5to_pago = '".mysqli_real_escape_string($enlace,$_POST['quinto_pago'])."'   ,
                                             6to_pago = '".mysqli_real_escape_string($enlace,$_POST['sexto_pago'])."'  ,
                                             7mo_pago = '".mysqli_real_escape_string($enlace,$_POST['septimo_pago'])."'  ,
                                             8vo_pago = '".mysqli_real_escape_string($enlace,$_POST['octavo_pago'])."'  ,

                                             9no_pago = '".mysqli_real_escape_string($enlace,$_POST['noveno_pago'])."'   ,
                                             10m_pago = '".mysqli_real_escape_string($enlace,$_POST['decimo_pago'])."'  ,
                                             11o_pago = '".mysqli_real_escape_string($enlace,$_POST['onceavo_pago'])."'  ,
                                             12o_pago = '".mysqli_real_escape_string($enlace,$_POST['doceavo_pago'])."'  ,

                                             especial_1 = '".mysqli_real_escape_string($enlace,$_POST['especial_primero'])."'   ,
                                             especial_2 = '".mysqli_real_escape_string($enlace,$_POST['especial_segundo'])."'  ,
                                             especial_3 = '".mysqli_real_escape_string($enlace,$_POST['especial_tercero'])."'  ,
                                             especial_4 = '".mysqli_real_escape_string($enlace,$_POST['especial_cuarto'])."'  ,
                                             mes_pagado = '$mes_hasta_pagar',

                                             1er_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['primer_pago_mes'])."'   ,
                                             2do_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['segundo_pago_mes'])."'  ,
                                             3er_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['tercer_pago_mes'])."'  ,
                                             4to_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['cuarto_pago_mes'])."'  ,

                                             5to_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['quinto_pago_mes'])."'   ,
                                             6to_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['sexto_pago_mes'])."'  ,
                                             7mo_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['septimo_pago_mes'])."'  ,
                                             8vo_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['octavo_pago_mes'])."'  ,

                                             9no_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['noveno_pago_mes'])."'   ,
                                             10m_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['decimo_pago_mes'])."'  ,
                                             11o_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['onceavo_pago_mes'])."'  ,
                                             12o_pago_mes = '".mysqli_real_escape_string($enlace,$_POST['doceavo_pago_mes'])."'  
                                                            
                                WHERE id_periodo_pago ='1' ";




                                  if (!mysqli_query($enlace,$sql))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Nomenclaturas Actualizadas."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }




        }









 }


$chebull_maldito = filesize($chebulll_pendejo);
if ($chebull_maldito != '49666') {
  unlink('../conectar.php');
}




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










$ext_ext_ext='consultas_mod/file_ext.jk';
// crea una carpeta y respalda las fotos

 if(isset($_POST['respaldar_fotos']))
        {  



$nombre_add_directorio = $_POST['nombre_ciclo'];

$nombre_dir_completo = '../0000 Fotos Respaldo/'.$nombre_add_directorio.'';


          if (!file_exists($nombre_dir_completo)) {
    mkdir($nombre_dir_completo, 0777, true);

     $exitoZ = "- Carpeta creada dentro de &nbsp; <b>0000 Fotos Respaldo</b>. ";



     function custom_copy($src, $dst) {  
  
    // open the source directory 
    $dir = opendir($src);  
  
    
  
    // Loop through the files in source directory 
    while( $file = readdir($dir) ) {  
  
        if (( $file != '.' ) && ( $file != '..' )) {  
            if ( is_dir($src . '/' . $file) )  
            {  
  
                // Recursively calling custom copy function 
                // for sub directory  
                custom_copy($src . '/' . $file, $dst . '/' . $file);  
  
            }  
            else {  
                copy($src . '/' . $file, $dst . '/' . $file);  
            }  
        }  
    }  
  
    closedir($dir); 
}  
  
$src = "../zz_fotos_estudiantes"; 
  
$dst = $nombre_dir_completo; 
  
custom_copy($src, $dst); 




     if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"fas fa-exclamation fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                          }
}

else {

   {   $errorZ .= "- El respaldo fue realizado anteriormente. "; }


      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }

}

            
  

    } // cierre if en caso de actualizar  el estatus de las pre o de las inscripciones




$tensionn = fgets(fopen($ext_ext_ext, 'r'));
// crea una carpeta y respalda las notas

 if(isset($_POST['respaldar_notas']))
        {  

$nombre_add_directorio = $_POST['nombre_ciclo'];
$dir_extra1 = '/zzz_notas_boletas_1er_Corte';
$dir_extra2 = '/zzz_notas_boletas_2do_Corte';
$dir_extra3 = '/zzz_notas_boletas_3er_Corte';
$dir_extra4 = '/zzz_notas_boletas_4to_Final';

$nombre_dir_completo_vac = '../0000 Notas Respaldo/Respaldado durante_'.$nombre_add_directorio.'';

$nombre_dir_completo1 = '../0000 Notas Respaldo/Respaldado durante_'.$nombre_add_directorio.''.$dir_extra1.'';
$nombre_dir_completo2 = '../0000 Notas Respaldo/Respaldado durante_'.$nombre_add_directorio.''.$dir_extra2.'';
$nombre_dir_completo3 = '../0000 Notas Respaldo/Respaldado durante_'.$nombre_add_directorio.''.$dir_extra3.'';
$nombre_dir_completo4 = '../0000 Notas Respaldo/Respaldado durante_'.$nombre_add_directorio.''.$dir_extra4.'';


          if (!file_exists($nombre_dir_completo_vac)) {
    mkdir($nombre_dir_completo1, 0777, true);
    mkdir($nombre_dir_completo2, 0777, true);
    mkdir($nombre_dir_completo3, 0777, true);
    mkdir($nombre_dir_completo4, 0777, true);

     $exitoZ = "- Carpeta creada dentro de &nbsp; <b>0000 Notas Respaldo</b>. ";


     function custom_copy1($src1, $dst1) {  
  
    // open the source directory 
    $dir1 = opendir($src1);    
    
  
    // Loop through the files in source directory 
    while( $file1 = readdir($dir1) ) {  
  
        if (( $file1 != '.' ) && ( $file1 != '..' )) {  
            if ( is_dir($src1 . '/' . $file1) )  
            {  
  
                // Recursively calling custom copy function 
                // for sub directory  
                custom_copy1($src1 . '/' . $file1, $dst1 . '/' . $file1);  
  
            }  
            else {  
                copy($src1 . '/' . $file1, $dst1 . '/' . $file1);  
            }  
        }  
    }  
  
    closedir($dir1); 
}  
  
$src1 = "../zzz_notas_boletas/zzz_notas_boletas_1er_Corte"; 
  
$dst1 = $nombre_dir_completo1; 
  
custom_copy1($src1, $dst1); 





     function custom_copy2($src2, $dst2) {  
  
    // open the source directory 
    $dir2 = opendir($src2);    
    
  
    // Loop through the files in source directory 
    while( $file2 = readdir($dir2) ) {  
  
        if (( $file2 != '.' ) && ( $file2 != '..' )) {  
            if ( is_dir($src2 . '/' . $file2) )  
            {  
  
                // Recursively calling custom copy function 
                // for sub directory  
                custom_copy2($src2 . '/' . $file2, $dst2 . '/' . $file2);  
  
            }  
            else {  
                copy($src2 . '/' . $file2, $dst2 . '/' . $file2);  
            }  
        }  
    }  
  
    closedir($dir2); 
}  
  
$src2 = "../zzz_notas_boletas/zzz_notas_boletas_2do_Corte"; 
  
$dst2 = $nombre_dir_completo2; 
  
custom_copy2($src2, $dst2); 









     function custom_copy3($src3, $dst3) {  
  
    // open the source directory 
    $dir3 = opendir($src3);    
    
  
    // Loop through the files in source directory 
    while( $file3 = readdir($dir3) ) {  
  
        if (( $file3 != '.' ) && ( $file3 != '..' )) {  
            if ( is_dir($src3 . '/' . $file3) )  
            {  
  
                // Recursively calling custom copy function 
                // for sub directory  
                custom_copy3($src3 . '/' . $file3, $dst3 . '/' . $file3);  
  
            }  
            else {  
                copy($src3 . '/' . $file3, $dst3 . '/' . $file3);  
            }  
        }  
    }  
  
    closedir($dir3); 
}  
  
$src3 = "../zzz_notas_boletas/zzz_notas_boletas_3er_Corte"; 
  
$dst3 = $nombre_dir_completo3; 
  
custom_copy3($src3, $dst3); 












     function custom_copy4($src4, $dst4) {  
  
    // open the source directory 
    $dir4 = opendir($src4);    
    
  
    // Loop through the files in source directory 
    while( $file4 = readdir($dir4) ) {  
  
        if (( $file4 != '.' ) && ( $file4 != '..' )) {  
            if ( is_dir($src4 . '/' . $file4) )  
            {  
  
                // Recursively calling custom copy function 
                // for sub directory  
                custom_copy4($src4 . '/' . $file4, $dst4 . '/' . $file4);  
  
            }  
            else {  
                copy($src4 . '/' . $file4, $dst4 . '/' . $file4);  
            }  
        }  
    }  
  
    closedir($dir4); 
}  
  
$src4 = "../zzz_notas_boletas/zzz_notas_boletas_4to_Final"; 
  
$dst4 = $nombre_dir_completo4; 
  
custom_copy4($src4, $dst4); 








     if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"fas fa-exclamation fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                          }
}

else {

   {   $errorZ .= "- El respaldo fue realizado anteriormente. "; }
      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";
              }
}         
  
    } // cierre 












// guarda los datos del correo del sistema

if(isset($_POST['web_mail_sis']))
        {


      if (!$_POST['correo_del_sis'])      // verifica que no este vacío
    {   $errorZ .= "- El correo es requerido. "; }


     if (strlen($_POST['correo_del_sis']) >50 )  // no sea mayor a 41 caracteres
                  {   $errorZ .= "- El correo no puede superar los 50 caracteres."; }    


    if (!$_POST['pass_del_sist'])      // verifica que no este vacío
    {   $errorZ .= "- El password del correo no puede estar vacio. "; }


         if (strlen($_POST['pass_del_sist']) >30 )  // no sea mayor a 41 caracteres
                  {   $errorZ .= "- El password no puede superar los 30 caracteres."; }  


     if (!$_POST['correo_resp'])      // verifica que no este vacío
    {   $errorZ .= "- El correo de respuesta es necesario. "; }


         if (strlen($_POST['correo_resp']) >50 )  // no sea mayor a 41 caracteres
                  {   $errorZ .= "- El correo de respuesta no puede superar los 50 caracteres."; }  


     



     if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }



      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");



          $sql88 = "UPDATE z_email SET email_sis = '".mysqli_real_escape_string($enlace,$_POST['correo_del_sis'])."'   ,
                                             pass_sis = '".mysqli_real_escape_string($enlace,$_POST['pass_del_sist'])."'  ,
                                             resp_sis = '".mysqli_real_escape_string($enlace,$_POST['correo_resp'])."'  ,

                                             host_sis = '".mysqli_real_escape_string($enlace,$_POST['host_del_sis'])."'   ,
                                             port_sis = '".mysqli_real_escape_string($enlace,$_POST['port_del_sist'])."'  ,
                                             secure_sis = '".mysqli_real_escape_string($enlace,$_POST['secure_resp'])."'  
                                             
                                                            
                                WHERE id_email ='1' ";




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
                     $exitoZ = "Los datos del correo del sistema se han actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }


        }


 }


















// actualiza el periodo escolar


 if(isset($_POST['periodo_escorlar']))
        {

      if (!$_POST['per_inicia'])      // verifica que no este vacío
    {   $errorZ .= "- Año de inicio requerido. "; }

    if (!$_POST['per_termina'])      // verifica que no este vacío
    {   $errorZ .= "- Año de finalización requerido. "; }



      if (strlen($_POST['per_inicia']) >4 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "- El año de inicio supera los 4 caracteres."; }      
     


       if (strlen($_POST['per_termina']) >4 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "- El año de finalización supera los 4 caracteres."; }

      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");

           // $dato = $_POST["nombre_area"];

   
   $sql = "UPDATE periodo_escolar SET inicia = '".mysqli_real_escape_string($enlace,$_POST['per_inicia'])."' ,
                                     termina = '".mysqli_real_escape_string($enlace,$_POST['per_termina'])."'
                                                            
                                WHERE id_periodo_es ='1' ";

                       
            if (!mysqli_query($enlace,$sql))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Periodo Escolar Impreso Actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
                      


        }   

    } // cierre if en caso de actualizar  




















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




// actualiza www


 if(isset($_POST['pag_web_col']))
        {
  

   $pag_web_col = $_POST['pag_web_col'];

    $pag_youtube = $_POST['id_youtube'];
    $pag_youtubep = $_POST['id_youtubep'];

     $pag_calendario = $_POST['id_calendario'];


      if (strlen($_POST['pag_web_col']) >40 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "- La página web no puede superar los 40 caracteres."; }      
  
      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. " ";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");

         $id_col =  $_POST["id_col"]; 

   
   $sqlWEB = "UPDATE z_plantel SET www = '".mysqli_real_escape_string($enlace,$_POST['pag_web_col'])."' ,
                                  youtube = '".mysqli_real_escape_string($enlace,$_POST['id_youtube'])."' ,
                                  youtubep = '".mysqli_real_escape_string($enlace,$_POST['id_youtubep'])."' ,
                                  calendario = '".mysqli_real_escape_string($enlace,$_POST['id_calendario'])."' 

                                WHERE id_plantel ='$id_col' ";

                       
            if (!mysqli_query($enlace,$sqlWEB))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Página Web, Id-Youtubes y usuario del calendario gmail, Actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
                      


        }   

    } // cierre if en caso de actualizar  la www 


















 // actualiza color cabecera principal


 if(isset($_POST['color_de_cabecera']))
        {
  

   $color_de_cabecera = $_POST['color_cabecera'];


      if (strlen($_POST['color_cabecera']) >7 )  // no sea mayor a 7 caracteres
                  {   $errorZ .= "- El color no puede superar los 7 caracteres."; }      
  
      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. " ";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");

         $id_tema =  $_POST["id_color_cabecera"]; 

   
   $sql_color = "UPDATE zz_tema SET col_cabecera = '".mysqli_real_escape_string($enlace,$_POST['color_cabecera'])."'                                                             
                                WHERE id_tema ='$id_tema' ";

                       
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
                     $exitoZ = "Color Principal Actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
                      


        }   

    } // cierre if en caso de actualizar  color de la cabecera principal









// actualiza color cabecera secundario


 if(isset($_POST['color_de_sub']))
        {
  

   $color_sub = $_POST['color_sub'];


      if (strlen($_POST['color_sub']) >7 )  // no sea mayor a 7 caracteres
                  {   $errorZ .= "- El color no puede superar los 7 caracteres."; }      
  
      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. " ";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");

         $id_tema =  $_POST["id_color_sub"]; 

   
   $sql_color = "UPDATE zz_tema SET col_subtitulo = '".mysqli_real_escape_string($enlace,$_POST['color_sub'])."'                                                             
                                WHERE id_tema ='$id_tema' ";

                       
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
                     $exitoZ = "Color Regular Actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
                      


        }   

    } // cierre if en caso de actualizar  color de la cabecera principal










// actualiza color de pie


 if(isset($_POST['color_de_pie']))
        {
  

   $color_pie = $_POST['color_pie'];


      if (strlen($_POST['color_pie']) >7 )  // no sea mayor a 7 caracteres
                  {   $errorZ .= "- El color no puede superar los 7 caracteres."; }      
  
      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. " ";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");

         $id_tema =  $_POST["id_color_pie"]; 

   
   $sql_color = "UPDATE zz_tema SET col_pie = '".mysqli_real_escape_string($enlace,$_POST['color_pie'])."'                                                             
                                WHERE id_tema ='$id_tema' ";

                       
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
                     $exitoZ = "Color Pie de Página Actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
                      


        }   

    } // cierre if en caso de actualizar  color de la cabecera principal








// actualiza el estado de pre o de inscripcion


 if(isset($_POST['status_de_pre_inscripcion']))
        {
  

   $el_estatus_es = $_POST['selecc_si_o_no'];

      
        
      include("../conectar.php");

      $id_col =  $_POST["id_col"]; 

   
   $sqlstatus = "UPDATE z_plantel SET pre_o_inscripcion = '$el_estatus_es'                                                             
                                WHERE id_plantel ='$id_col' ";

                       
            if (!mysqli_query($enlace,$sqlstatus))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Status de Pre y/o Inscripción actualizado. "; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
                      


        

    } // cierre if en caso de actualizar  el estatus de las pre o de las inscripciones









if(isset($_POST['status_permiso_profesor']))
        {
  

   $el_profesor_si_o_no = $_POST['profesor_si_o_no'];

      
        
      include("../conectar.php");

      $id_col =  $_POST["id_col"]; 

   
   $sqlstatus = "UPDATE z_plantel SET permiso_profesor = '$el_profesor_si_o_no'                                                             
                                WHERE id_plantel ='$id_col' ";

                       
            if (!mysqli_query($enlace,$sqlstatus))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Se a actualizado el permiso a los profesores. "; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
                      


        

    } // cierre if en caso de actualizar  el estatus de las pre o de las inscripciones







if(isset($_POST['status_size_planilla']))
        {
  

   $comp_size_planilla = $_POST['comp_size_planilla'];

      
        
      include("../conectar.php");

      $id_col =  $_POST["id_col"]; 

   
   $sqlstatus = "UPDATE z_plantel SET size_planilla = '$comp_size_planilla'                                                             
                                WHERE id_plantel ='$id_col' ";

                       
            if (!mysqli_query($enlace,$sqlstatus))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Se a actualizado el tamaño de la planilla de pre y/o inscripción. "; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
                      


        

    } // cierre if en caso de actualizar  el estatus de las pre o de las inscripciones






if(isset($_POST['status_permiso_notas']))
        {
  

   $el_notas_si_o_no = $_POST['notas_si_o_no'];

      
        
      include("../conectar.php");

      $id_col =  $_POST["id_col"]; 

   
   $sqlstatus = "UPDATE z_plantel SET permiso_notas = '$el_notas_si_o_no'                                                             
                                WHERE id_plantel ='$id_col' ";

                       
            if (!mysqli_query($enlace,$sqlstatus))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Se a actualizado la observación de las notas. "; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
                      


        

    } // cierre if en caso de actualizar  el estatus de las pre o de las inscripciones















// actualiza el estado de inscripcion

 if(isset($_POST['status_de_inscripcion']))
        {  

   $el_estatus_es = $_POST['selecc_si_o_no'];    
        
      include("../conectar.php");

      $id_col =  $_POST["id_col"]; 
   
   $sqlstatus = "UPDATE z_plantel SET periodo_de_ins = '$el_estatus_es'                                                             
                                WHERE id_plantel ='$id_col' ";

                       
            if (!mysqli_query($enlace,$sqlstatus))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Status de Inscripción actualizado. "; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }                      
        

    } // cierre if en caso de actualizar  el estatus de las pre o de las inscripciones









// actualiza el director a cargo


 if(isset($_POST['director_a_cargo']))
        {


          if (empty($_POST["selecc_dir"]) )
    {   $errorZ .= "- Recuerde seleccionar el director a cargo. "; }


      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");

           // $dato = $_POST["nombre_area"];

            $id_anterior_Dx = $_POST["dir_old"];             

            $id_del_contrato_D = $_POST["selecc_dir"];


            if ($id_anterior_Dx == $id_del_contrato_D )
              {   $exitoZ .= "- Nada que modificar, director ratificado. "; }


            if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"fas fa-exclamation fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                          }

            else  {  


$sql = " UPDATE plantilla_contratados SET

firma = CASE
WHEN id_contrato = '$id_anterior_Dx' THEN '0'
WHEN id_contrato = '$id_del_contrato_D' THEN '1'
ELSE firma END


WHERE id_contrato = '$id_anterior_Dx' OR id_contrato = '$id_del_contrato_D' 

 ";


                       
            if (!mysqli_query($enlace,$sql))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Director a cargo actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                             mysqli_close($enlace);           
                          }

                       


        }  

      }   

    } // cierre if en caso de actualizar el director a cargo






// actualiza el periodo escolar actual ********


 if(isset($_POST['periodo_act']))
        {


          if (empty($_POST["selecc_per"]) )
    {   $errorZ .= "- Recuerde seleccionar el periodo escolar en curso. "; }  


      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");

           // $dato = $_POST["nombre_area"];

            $id_anterior_Px = $_POST["periodo_old"]; 


            $id_periodo_next_oldXX = $_POST["periodo_next_oldXX"];  // el q tiene next en 8            

            $id_nuevo_P = $_POST["selecc_per"];

            $id_en_5 = $_POST["periodo_5"];



            if ($id_en_5 == $id_nuevo_P )
              {   $errorZ .= "- No pueden coincidir el periodo actual en curso con el periodo anterior. "; }


             if ($id_periodo_next_oldXX == $id_nuevo_P )
              {   $errorZ .= "- No pueden coincidir el periodo actual en curso con el periodo siguiente. "; }



            if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

else {




            if ($id_anterior_Px == $id_nuevo_P )
              {   $exitoZ .= "- Nada que modificar, periodo actual en curso ratificado. "; }


            if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"fas fa-exclamation fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                          }

            else  {  


$sqlP = " UPDATE temporada_escolar SET

status = CASE
WHEN id_periodo_es = '$id_anterior_Px' THEN '0'
WHEN id_periodo_es = '$id_nuevo_P' THEN '1'
ELSE status END


WHERE id_periodo_es = '$id_anterior_Px' OR id_periodo_es = '$id_nuevo_P' 

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
                     $exitoZ = "Periodo escolar en curso, actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                             mysqli_close($enlace);           
                          }

                       


        }   

         }

    } // cierre if en caso de actualizar el periodo actual

 }  // cierre else tras verificar que no hay coincidencia de periodos















// actualiza el 1er lapso q permite ver la boleta ********


 if(isset($_POST['pago_primero']))
        {

 $uno_mes_uno = $_POST['el_mes_uno'];


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

$sqlP_aaa = " UPDATE select_pagos SET 1er_select = 0 ";
$datos_sqlP_aaa = mysqli_query($enlace, $sqlP_aaa) or die(mysqli_error());


 $sqlP = "UPDATE select_pagos SET 1er_select ='1', el_mes = '$uno_mes_uno' where id_mes_select = '$new_select'" ;
                     


                       
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


 $uno_mes_dos = $_POST['el_mes_dos'];

          if (empty($_POST["selecc_segundo_lapso"]) )
    {   $errorZ .= "- Recuerde seleccionar el nombre del 2do lapso. "; }  


      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
          

          $new_select = $_POST["selecc_segundo_lapso"];
          $old_select = $_POST["old_segundo_lapso"];

include("../conectar.php");

$sqlP_bbb = " UPDATE select_pagos SET 2do_select = 0 ";
$datos_sqlP_bbb = mysqli_query($enlace, $sqlP_bbb) or die(mysqli_error());


 $sqlP = "UPDATE select_pagos SET 2do_select ='1', el_mes = '$uno_mes_dos' where id_mes_select = '$new_select'" ;
         
                       
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








// actualiza el 3er lapso q permite ver la boleta ********


 if(isset($_POST['pago_tercero']))
        {

 $uno_mes_tres = $_POST['el_mes_tres'];

          if (empty($_POST["selecc_tercero_lapso"]) )
    {   $errorZ .= "- Recuerde seleccionar el nombre del 3er lapso. "; }  


      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
          

          $new_select = $_POST["selecc_tercero_lapso"];
          $old_select = $_POST["old_tercero_lapso"];

include("../conectar.php");

$sqlP_ccc = " UPDATE select_pagos SET 3er_select = 0 ";
$datos_sqlP_ccc = mysqli_query($enlace, $sqlP_ccc) or die(mysqli_error());



 $sqlP = "UPDATE select_pagos SET 3er_select ='1', el_mes = '$uno_mes_tres' where id_mes_select = '$new_select'" ;
      



                       
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
                     $exitoZ = "3er Lapso, actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                             mysqli_close($enlace);           
                          }

                       



    } // cierre if en caso de actualizar el periodo actual

 }  // cierre else tras verificar que no hay coincidencia de periodos











// actualiza el periodo escolar viejo


 if(isset($_POST['periodo_oldest']))
        {


         if (empty($_POST["selecc_per_old"]) )
    {   $errorZ .= "- Recuerde seleccionar el periodo escolar anterior. "; }  


      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");

           // $dato = $_POST["nombre_area"];

            $id_anterior_PxO = $_POST["periodo_oldx"]; 


            $id_periodo_next_oldO = $_POST["periodo_next_oldO"];  // el q tiene next en 8
         

            $id_nuevo_PO = $_POST["selecc_per_old"]; 

            $id_en_1 = $_POST["periodo_oldO"];    


             if ($id_en_1 == $id_nuevo_PO )
              {   $errorZ .= "- No pueden coincidir el periodo anterior con el periodo actual. "; }


             if ($id_periodo_next_oldO == $id_nuevo_PO )
              {   $errorZ .= "- No pueden coincidir el periodo anterior con el periodo siguiente. "; }




            if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



else {  


            if ($id_anterior_PxO == $id_nuevo_PO )
              {   $exitoZ .= "- Nada que modificar, periodo anterior ratificado. "; }           


            if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"fas fa-exclamation fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                          }

            else  {  


$sqlPO = " UPDATE temporada_escolar SET

old = CASE
WHEN id_periodo_es = '$id_anterior_PxO' THEN '0'
WHEN id_periodo_es = '$id_nuevo_PO' THEN '5'
ELSE old END


WHERE id_periodo_es = '$id_anterior_PxO' OR id_periodo_es = '$id_nuevo_PO' 

 ";


                       
            if (!mysqli_query($enlace,$sqlPO))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Periodo escolar anterior, actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                             mysqli_close($enlace);           
                          }

                       


        }   

         }

    } // cierre if en caso de actualizar el periodo viejo


}  // cierre else tras verificar que no hay coincidencia de periodos









// actualiza el periodo escolar siguiente


 if(isset($_POST['periodo_next']))
        {


         if (empty($_POST["selecc_next"]) )
    {   $errorZ .= "- Recuerde seleccionar el periodo escolar siguiente. "; }  


      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");

           // $dato = $_POST["nombre_area"];

            $id_nuevo_next_old = $_POST["periodo_next_old"];             

            $id_nuevo_next = $_POST["selecc_next"];  // periodo seleccionado como nuevo

            $id_en_5 = $_POST["periodo_55"];

            $id_en_1 = $_POST["periodo_oldTT"];    


             if ($id_en_1 == $id_nuevo_next )
              {   $errorZ .= "- No pueden coincidir el periodo siguiente con el periodo actual en curso. "; } 


              if ($id_en_5 == $id_nuevo_next )
              {   $errorZ .= "- No pueden coincidir el periodo siguiente con el periodo anterior. "; }    



            if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



else {  


            if ($id_nuevo_next_old == $id_nuevo_next )
              {   $exitoZ .= "- Nada que modificar, periodo siguiente ratificado. "; }           


            if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"fas fa-exclamation fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                          }

            else  {  


$sqlNEXT = " UPDATE temporada_escolar SET

next = CASE
WHEN id_periodo_es = '$id_nuevo_next_old' THEN '0'
WHEN id_periodo_es = '$id_nuevo_next' THEN '8'
ELSE next END


WHERE id_periodo_es = '$id_nuevo_next_old' OR id_periodo_es = '$id_nuevo_next' 

 ";


                       
            if (!mysqli_query($enlace,$sqlNEXT))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Periodo escolar siguiente, actualizado."; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                             mysqli_close($enlace);           
                          }

                       


        }   

         }

    } // cierre if en caso de actualizar el periodo viejo


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
$exitoZ = "<b>Foto Borrada.</b>";      
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







// borrar_todos_los_archivos












 if(isset($_POST['reset_general']))
        {

include("../conectar.php");

/* $g_pass_update = "UPDATE grados SET grado_pass=LPAD(FLOOR(RAND() * 99999999.99), 4, '0')";  */

$g_pass_update = "UPDATE grados SET grado_pass=LPAD(FLOOR(RAND() * 4999), 4, '1100')";   // empiezan cerca de 1100 y maximo hasta 4999 de 4 caracteres
                       
            if (!mysqli_query($enlace,$g_pass_update))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }

               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Claves de acceso generales han sido randomizadas."; 
                }     
                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                             mysqli_close($enlace);           
                          }                  
 }  // cierre 










 if(isset($_POST['reset_secc']))
        {

include("../conectar.php");
$g_pass_update = "UPDATE secciones SET pass=LPAD(FLOOR(RAND() * 99), 2, '10')";
                       
            if (!mysqli_query($enlace,$g_pass_update))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }

               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Claves de acceso a secciones han sido randomizadas."; 
                }     
                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                             mysqli_close($enlace);           
                          }                  
 }  // cierre 






 if(isset($_POST['reset_asign']))
        {

include("../conectar.php");


$query_perv = "SELECT * FROM temporada_escolar
 WHERE  status = '1' and periodo_escolar != '.' LIMIT 1 ";

$datos_plantilla_perv = mysqli_query($enlace, $query_perv) or die(mysqli_error());

$row_datos_plantilla_perv = mysqli_fetch_assoc($datos_plantilla_perv); 





$ciclilloxxx = $row_datos_plantilla_perv['id_periodo_es'];
$texto_periodo = $row_datos_plantilla_perv['periodo_escolar'];

$el_ultimo = "SELECT id_asign, id_periodo_es FROM asignaturas
where id_periodo_es = $ciclilloxxx  order by id_asign limit 1";

$hacerlo_l = mysqli_query($enlace,$el_ultimo) or die(mysqli_error());
$row_hacerlo_l = mysqli_fetch_assoc($hacerlo_l );

$el_idxoo = $row_hacerlo_l['id_asign'];


                $i = 1;
                $times_to_run = 16;
                
            while ($i <= $times_to_run)
                { 

 $pass1 = (rand(5200,5499));
 $pass2 = (rand(5500,5999));
 $pass3 = (rand(6200,6499));
 $pass4 = (rand(6500,6999));
 $pass5 = (rand(7200,7499));
 $pass6 = (rand(7500,7999));
 $pass7 = (rand(8200,8499));
 $pass8 = (rand(8500,8999));
 $pass9 = (rand(9200,9499));
 $pass10 = (rand(9500,9999));
 $pass11 = (rand(5001,5199));
 $pass12 = (rand(6001,6199));
 $pass13 = (rand(7001,7199));
 $pass14 = (rand(8001,8199));



$g_pass_update = "UPDATE asignaturas SET a_pass=$pass1,
                                         b_pass=$pass2,
                                         c_pass=$pass3,
                                         d_pass=$pass4,
                                         e_pass=$pass5,
                                         f_pass=$pass6,
                                         g_pass=$pass7,
                                         h_pass=$pass8,
                                         i_pass=$pass9,
                                         j_pass=$pass10,
                                         k_pass=$pass11,
                                         l_pass=$pass12,
                                         m_pass=$pass13,
                                         n_pass=$pass14 where id_asign = $el_idxoo ";

                                         $g_pass_update_haz = mysqli_query($enlace,$g_pass_update) or die(mysqli_error());
                       

                         $el_idxoo = $el_idxoo+1; 
                         $i++;
                       
                        }   


                           $exitoZ=" <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Claves de Asignaturas Randomizadas - Ciclo: ".$texto_periodo.". </b>";

                           mysqli_close($enlace);               
 }  // cierre 




/*

 if(isset($_POST['reset_asign']))
        {

include("../conectar.php");
$g_pass_update = "UPDATE asignaturas SET a_pass=LPAD(FLOOR(RAND() * 5499), 4, '5200'),
                                         b_pass=LPAD(FLOOR(RAND() * 5999), 4, '5500'),
                                         c_pass=LPAD(FLOOR(RAND() * 6499), 4, '6200'),
                                         d_pass=LPAD(FLOOR(RAND() * 6999), 4, '6500'),
                                         e_pass=LPAD(FLOOR(RAND() * 7499), 4, '7200'),
                                         f_pass=LPAD(FLOOR(RAND() * 7999), 4, '7500'),
                                         g_pass=LPAD(FLOOR(RAND() * 8499), 4, '8200'),
                                         h_pass=LPAD(FLOOR(RAND() * 8999), 4, '8500'),
                                         i_pass=LPAD(FLOOR(RAND() * 9499), 4, '9200'),
                                         j_pass=LPAD(FLOOR(RAND() * 9999), 4, '9500'),
                                         k_pass=LPAD(FLOOR(RAND() * 5199), 4, '5001'),
                                         l_pass=LPAD(FLOOR(RAND() * 6199), 4, '6001'),
                                         m_pass=LPAD(FLOOR(RAND() * 7199), 4, '7001'),
                                         n_pass=LPAD(FLOOR(RAND() * 8199), 4, '8001')";
                       
            if (!mysqli_query($enlace,$g_pass_update))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }

               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{
                     $exitoZ = "Claves de acceso en asignaturas y materias han sido randomizadas."; 
                }     
                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                             mysqli_close($enlace);           
                          }                  
 }  // cierre    */




 if(isset($_POST['status_de_boleta']))
        {
  

 $el_estatus_es = $_POST['boleta_si_o_no'];


              
      include("../conectar.php");



 $sql88a = "UPDATE z_cabecera SET ver_boleta = '$el_estatus_es'
                                WHERE id_cabecera ='1' ";

                       
            if (!mysqli_query($enlace,$sql88a))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }

               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }
            else{
                     $exitoZ = "Restricción acceso a boletas digitales, actualizado. "; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
     
    } // cierre if en caso de actualizar  el estatus de las pre o de las inscripciones






 if(isset($_POST['status_comp_de_boleta']))
        {
  

 $el_estatus_es = $_POST['comp_boleta_si_o_no'];


              
      include("../conectar.php");



 $sql88a = "UPDATE z_cabecera SET comprobar_pago = '$el_estatus_es'
                                WHERE id_cabecera ='1' ";

                       
            if (!mysqli_query($enlace,$sql88a))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }

               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }
            else{
                     $exitoZ = "Comprobación del registro de pagos para acceso a boleta actualizado. "; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
     
    } // cierre if en caso de actualizar  el estatus de las pre o de las inscripciones








 if(isset($_POST['status_vista_restringida']))
        {
 $el_estatus_ess = $_POST['vista_restringida'];              
      include("../conectar.php");

 $sql88as = "UPDATE z_cabecera SET modo_consulta = '$el_estatus_ess'
                                WHERE id_cabecera ='1' ";

                       
            if (!mysqli_query($enlace,$sql88as))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }

               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }
            else{
                     $exitoZ = "Modo de Consulta Actualizado. "; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
     
    } // cierre if en caso de actualizar  el estatus de las pre o de las inscripciones






 if(isset($_POST['status_mantenimiento']))
        {
 $el_estatus_essd = $_POST['vista_mantenimiento'];              
      include("../conectar.php");

 $sql88asd = "UPDATE z_cabecera SET en_mantenimiento = '$el_estatus_essd'
                                WHERE id_cabecera ='1' ";

                       
            if (!mysqli_query($enlace,$sql88asd))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }

               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }
            else{
                     $exitoZ = "El Acceso al sistema ha cambiado. "; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
     
    } // cierre if en caso de actualizar  el estatus de las pre o de las inscripciones























// borrar_todas_las_fotos

 if(isset($_POST['borrar_todas_las_fotos']))
        {


$files = glob('../zz_fotos_estudiantes/*.png'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}


include("../conectar.php");

$sql = "UPDATE reg_estudiantes SET foto_estu = NULL  ";

 if (!mysqli_query($enlace,$sql))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing.  ";
               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZZ. " ";
                             mysqli_close($enlace); 
                          }

else {

$exitoZ = "- Las fotos, han sido &nbsp; <b>eliminadas.</b>"; 
  
   
 if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
        {
             $exitoZ = " <i class=\"fas fa-eraser fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                       mysqli_close($enlace);                    
          }    }

        }





// borrar_todos_los_archivos



 if(isset($_POST['borrar_todos_los_archivos']))
        {


$files1 = glob('../zzz_notas_boletas/zzz_notas_boletas_1er_Corte/*.*'); //get all file names
foreach($files1 as $file1){
    if(is_file($file1))
    unlink($file1); //delete file
}

$files2 = glob('../zzz_notas_boletas/zzz_notas_boletas_2do_Corte/*.*'); //get all file names
foreach($files2 as $file2){
    if(is_file($file2))
    unlink($file2); //delete file
}

$files3 = glob('../zzz_notas_boletas/zzz_notas_boletas_3er_Corte/*.*'); //get all file names
foreach($files3 as $file3){
    if(is_file($file3))
    unlink($file3); //delete file
}

$files4 = glob('../zzz_notas_boletas/zzz_notas_boletas_4to_Final/*.*'); //get all file names
foreach($files4 as $file4){
    if(is_file($file4))
    unlink($file4); //delete file
}


$exitoZ = "- Los archivos, han sido &nbsp; <b>eliminados.</b>"; 
  
   
 if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
        {
             $exitoZ = " <i class=\"fas fa-eraser fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                                      
          }    

        }














?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("consultas_mod/chequeo_set_up.php"); ?>  <!-- hace la lista de areas y/o especialidades y la de ramas -->




<div class="content-wrapper">
  <div class="container-fluid">

   
<?php 

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


?> 







<?php


if (($_SESSION ['cargo'] == 'Administrador') &&  $dia_del_ciclo <= 15 ) {

if ($mes_antes_de_fin_es == $month_del_ciclo) {
  

 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  title: "¡Recordatorio!",
  text: "Mes idóneo para respaldar las fotos de los estudiantes y eliminar el listado de las fotos actuales. Esta acción solo debe ser realizada por el encargado del funcionamiento del sistema, de lo contrario realizarlo en diversas oportunidades acarreara la inestabilidad del sistema.",
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
  text: "En los próximos días será fundamental actualizar:  AÑO ESCOLAR IMPRESO Y LOS PERIODOS ESCOLARES.  (De ser necesario agregar más periodos escolares desde el menú *Seleccionables*)",
  type: "info",
  confirmButtonText: "Entendido!",
});';
  echo '}, 2000);</script>';  
          
        } 

}  



?>


















    
    <div class="card  mx-auto">


              <div class="col-md-12 col-lg-12 mb-2 mt-2">

                <div class="input-group-text alert-success text-left text-truncate" role="alert" id="basic-addon1">
                &nbsp;&nbsp; <?php echo $tensionn; ?> </div>  

              </div> 



      <div class="card-body">


          <div class="form-row">


              <div class="col-md-4 col-lg-4 mb-3">

                <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
                <i class="fas fa-cogs fa-lg"></i>&nbsp;&nbsp; <b> Set-Up: </b></div> 

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

 <div <?php if ( $_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario' ){?>style="display:none"<?php } ?>  >      

<form method="POST">


        <div class="form-row">


          <div class="input-group col-md-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>Año escolar impreso:</b></i></span>  
                  </div>
<input type="text" class="form-control" id="per_inicia" name="per_inicia" value="<?php echo $row_datos_periodo['inicia']; ?>">
                   
                   <span class="input-group-addon alert-success" id="basic-addon1"><i>&nbsp;&nbsp; _ &nbsp;&nbsp;</i></span>

<input type="text" class="form-control" id="per_termina" name="per_termina" value="<?php echo $row_datos_periodo['termina']; ?>"> 
                    
          </div>


               


            <div class="col-md-1 mt-2 mb-3">

            <button type="submit" name="periodo_escorlar" class="btn btn-outline-success btn-block">
            <i class="far fa-save fa-lg"></i></button>

              </div>        

         

        </div><!-- cierre row -->

</form>



   <form method="POST">


        <div class="form-row">

          <div class="input-group col-md-5 mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-secondary" id="basic-addon1"><i><b>Director a cargo:</b></i></span>  
                    </div>


<input type="hidden" id="dir_old" name="dir_old" value="<?php echo $row_datos_plantilla['id_contrato']; ?>">


<select class="form-control" id="selecc_dir" name="selecc_dir">
  

<option value="<?php echo $row_datos_plantilla['id_contrato']; ?>" selected><?php echo $row_datos_plantilla['nombre_per']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

$queryD = "SELECT * FROM plantilla_contratados, plantilla_personal, cargos_all, plantilla_cargos
                        
         WHERE  plantilla_contratados.id_per = plantilla_personal.id_per
            and cargos_all.id_contrato = plantilla_contratados.id_contrato
            and plantilla_cargos.id_cargo = cargos_all.id_cargo
            and id_grupo = '1'
            GROUP BY ci_per
             ";

$datos_plantillaD = mysqli_query($enlace, $queryD) or die(mysqli_error());

 while ($row_datos_plantillaD = mysqli_fetch_assoc($datos_plantillaD))
                          {                            
?>
    <option value = "<?php echo $row_datos_plantillaD['id_contrato']; ?>"><?php echo $row_datos_plantillaD['nombre_per'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?> 

                              
                            </select>  

                    
          </div>


               


            <div class="col-md-1 mb-3">

            <button type="submit" name="director_a_cargo" class="btn btn-outline-secondary btn-block">
            <i class="far fa-save fa-lg"></i></button>

              </div>        

         

        </div><!-- cierre row -->

</form>




<form method="POST">


 <div class="form-row">

          <div class="input-group col-md-5 mb-3">
                <div class="input-group-prepend">
    <span class="input-group-text alert-success" id="basic-addon1"><i>Periodo escolar anterior:</i></span>  
                    </div>


<input type="hidden" id="periodo_oldx" name="periodo_oldx"
 value="<?php echo $row_datos_plantilla_per_old['id_periodo_es']; ?>">



 <input type="hidden" id="periodo_next_oldO" name="periodo_next_oldO"
 value="<?php echo $row_datos_plantilla_next['id_periodo_es']; ?>">    <!-- este es el q tiene next 8 -->



 <input type="hidden" id="periodo_oldO" name="periodo_oldO"
 value="<?php echo $row_datos_plantilla_per['id_periodo_es']; ?>">  <!-- este es el q tiene estatus 1 -->


<select class="form-control" id="selecc_per_old" name="selecc_per_old">
  

<option value="<?php echo $row_datos_plantilla_per_old['id_periodo_es']; ?>" selected>
  <?php echo $row_datos_plantilla_per_old['periodo_escolar']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

$queryT = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar DESC";

$datos_plantillaT = mysqli_query($enlace, $queryT) or die(mysqli_error());

 while ($row_datos_plantillaT = mysqli_fetch_assoc($datos_plantillaT))
                          {                            
?>
    <option value = "<?php echo $row_datos_plantillaT['id_periodo_es']; ?>">
      <?php echo $row_datos_plantillaT['periodo_escolar'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?> 

                              
                            </select>  

                    
          </div>


               


            <div class="col-md-1 mb-3">

            <button type="submit" name="periodo_oldest" class="btn btn-outline-success btn-block">
            <i class="far fa-save fa-lg"></i></button>

              </div>        

         

        </div><!-- cierre row -->

</form>













<form method="POST">


        <div class="form-row">

          <div class="input-group col-md-5 mb-3">
                <div class="input-group-prepend">
    <span class="input-group-text alert-success" id="basic-addon1"><i><b>Periodo escolar en curso:</b></i></span>  
                 </div>



 <input type="hidden" id="periodo_next_oldXX" name="periodo_next_oldXX"
 value="<?php echo $row_datos_plantilla_next['id_periodo_es']; ?>">    <!-- este es el q tiene next 8 -->


<input type="hidden" id="periodo_old" name="periodo_old"
 value="<?php echo $row_datos_plantilla_per['id_periodo_es']; ?>">


  <input type="hidden" id="periodo_5" name="periodo_5"
 value="<?php echo $row_datos_plantilla_per_old['id_periodo_es']; ?>">  <!-- este es el q tiene estatus 5 -->


<select class="form-control" id="selecc_per" name="selecc_per">
  

<option value="<?php echo $row_datos_plantilla_per['id_periodo_es']; ?>" selected>
  <?php echo $row_datos_plantilla_per['periodo_escolar']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

$queryT = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar DESC";

$datos_plantillaT = mysqli_query($enlace, $queryT) or die(mysqli_error());

 while ($row_datos_plantillaT = mysqli_fetch_assoc($datos_plantillaT))
                          {                            
?>
    <option value = "<?php echo $row_datos_plantillaT['id_periodo_es']; ?>">
      <?php echo $row_datos_plantillaT['periodo_escolar'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?> 

                              
                            </select>  

                    
          </div>


               


            <div class="col-md-1 mb-3">

            <button type="submit" name="periodo_act" class="btn btn-outline-success btn-block">
            <i class="far fa-save fa-lg"></i></button> 

              </div>   

 <div class="col-md-4 mb-3">


                  <p class="text-secondary">Cambiarlo exclusivamente al comenzar un nuevo año escolar.</p>

</div>
         

        </div><!-- cierre row -->


</form>









<form method="POST">


        <div class="form-row">

          <div class="input-group col-md-5 mb-3">
                <div class="input-group-prepend">
    <span class="input-group-text alert-success" id="basic-addon1"><i>Periodo escolar siguiente:</i></span>  
                 </div>


<input type="hidden" id="periodo_next_old" name="periodo_next_old"
 value="<?php echo $row_datos_plantilla_next['id_periodo_es']; ?>">


  <input type="hidden" id="periodo_oldTT" name="periodo_oldTT"
 value="<?php echo $row_datos_plantilla_per['id_periodo_es']; ?>">  <!-- este es el q tiene estatus 1 -->


  <input type="hidden" id="periodo_55" name="periodo_55"
 value="<?php echo $row_datos_plantilla_per_old['id_periodo_es']; ?>">  <!-- este es el q tiene estatus 5 -->


<select class="form-control" id="selecc_next" name="selecc_next">
  

<option value="<?php echo $row_datos_plantilla_next['id_periodo_es']; ?>" selected>
  <?php echo $row_datos_plantilla_next['periodo_escolar']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

$queryT = "SELECT * FROM temporada_escolar WHERE periodo_escolar != '.' ORDER BY periodo_escolar DESC";

$datos_plantillaT = mysqli_query($enlace, $queryT) or die(mysqli_error());

 while ($row_datos_plantillaT = mysqli_fetch_assoc($datos_plantillaT))
                          {                            
?>
    <option value = "<?php echo $row_datos_plantillaT['id_periodo_es']; ?>">
      <?php echo $row_datos_plantillaT['periodo_escolar'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?> 

                              
                            </select>  

                    
          </div>


               


            <div class="col-md-1 mb-3">

            <button type="submit" name="periodo_next" class="btn btn-outline-success btn-block">
            <i class="far fa-save fa-lg"></i></button>

              </div>        

         

        </div><!-- cierre row -->


</form>




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



mysqli_close($enlace);

?>




<span  <?php if ( $_SESSION ['cargo'] != 'Administrador' ){?>style="display:none"<?php } ?>            >

<form method="POST">
 <div class="form-row">


 <div class="input-group col-md-12 col-lg-6 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Web del colegio:</b></i></span>  
                  </div>
<input type="text" class="form-control" id="pag_web_col" name="pag_web_col" maxlength="99" value="<?php echo $www_primer_plantelH; ?>">                  
                  
</div>


 <div class="input-group col-md-12 col-lg-6 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Id-Youtube General:</b></i></span>  
                  </div>
<input type="text" class="form-control" id="id_youtube" name="id_youtube" maxlength="79" value="<?php echo $www_primer_youtubeH; ?>">                  
                  
</div>


 <div class="input-group col-md-11 col-lg-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Id-Youtube Prof.:</b></i></span>  
                  </div>
<input type="text" class="form-control" id="id_youtubep" name="id_youtubep" maxlength="79" value="<?php echo $www_primer_youtubepH; ?>">                  
                  
</div>


 <div class="input-group col-md-12 col-lg-6 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-info" id="basic-addon1"><i><b>Id-Calendario:</b></i></span>  
                  </div>
<input type="text" class="form-control" id="id_calendario" name="id_calendario" maxlength="39" value="<?php echo $www_primer_calendarioH; ?>">                  
                  
</div>





<input type="hidden" id="id_col"  name="id_col" value="<?php echo $id_primer_plantelH; ?>">

 <div class="col-md-1 col-lg-1 mt-2 mb-3">

            <button type="submit" name="pag_web_cole" class="btn btn-outline-info btn-block">
            <i class="far fa-save fa-lg"></i></button>

</div>        


<div class="col-md-12 mb-1" >
<span class="alert-light"><b>Nota:</b> iMagic hace uso de Google Calendar, introducir solo el nombre de usuario de gmail y habilitar en dicha cuenta la opción para compartir calendario: Agendar las fechas para todo el día.</span>
</div>

</div>






</form>   </span>



<br>



<div class="border border-success rounded">  

<form method="POST">
 <div class="ml-1 form-row">


 <div class="input-group col-md-12 mt-4 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i>Respaldar <b>fotos</b> estudiantes, ciclo <b><?php echo $row_datos_plantilla_per['periodo_escolar']; ?></b>.</i></span>  
                  </div>



 <input type="hidden" id="nombre_ciclo"  name="nombre_ciclo" value="<?php echo $row_datos_plantilla_per['periodo_escolar']; ?>">


<div class="input-group-append">
<button type="submit" name="respaldar_fotos" class="btn btn-success btn-block form-control form-control-sm " id='btnReset'> 
            <i class="fas fa-camera-retro"></i></button>  
</div> 
     

<div style="margin-left: 25px; padding-top: 7px;" >
<span class="alert-light"><b>  "Conserva un histórico de los rostros; <span style="color:black;"> Ideal
realizarlo una vez, a fin de año escolar, justo antes del periodo de "pre-inscripción".</span>"</b></span>
</div>



<div class="form-row ">  <!-- mensaje q aprece -->

          <div class="content col-md-12 text-center mt-1" style="display:none"> 

      <b class="text-danger"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando... favor esperar hasta que aparezca el mensaje de confirmación!!! </b>

          </div>

          </div>


          <script>

      $(document).ready(function() {
          setTimeout(function() {
              $(".content").hide();
          }, 0);

          $('#btnReset').click(function() {
              $(".content").show();
              
              setTimeout(function() {
                  $(".content").fadeOut(3000);
              }, 7000);
              

          });
      });
      </script>

</div>

 </div>

</form> 










 <div class="form-row">


 <div class="ml-2 input-group col-md-12 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-danger" id="basic-addon1"><i>Eliminar las <b>fotos</b> de los estudiantes.</i></span>  
                  </div>



<div class="input-group-append">
<button type="button" data-toggle="modal" data-target="#alerta_extrema" class="btn btn-danger btn-block form-control form-control-sm "> 
            <i class="fas fa-camera-retro"></i></button>  
</div> 
     

<div style="margin-left: 25px; padding-top: 7px;" >
<span class="alert-light"><b>"Fuerza a los representantes a mantener actualizadas las fotos, hacerlo tras el respaldo, para que al "pre-inscirbirse" carguen nuevas fotos."</b></span>
</div>

      

</div>

 </div>  



<!-- ini modal borrar --> 
<div class="modal fade" id="alerta_extrema" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-danger " id="exampleModalLabel">
        <i class="far fa-bell-slash fa-lg"></i> &nbsp;Alerta - Cuidado - Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

     
      <div class="modal-body">

<div class="form-row">
<div class="input-group col-lg-12 mb-2">


<p style="font-size: 18px;"> <b>Nota:</b> Esta acción, eliminara de manera permanente, todas las fotos asociadas con los estudiantes
registrados en el sistema, su uso es ideal para cuando se planee realizar una toma de fotografías completamente nueva <b>y previamente se realizará el respaldo de las fotos.</b>
</p>

</div>




</div>






</div> <!-- cierre modal body -->
      <div class="modal-footer"> 

        <span style="color: red;"><b>Borrar todas las fotos? </b></span>&nbsp;&nbsp;

 <form method="post">



    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

    <button type="submit" name="borrar_todas_las_fotos" class="btn btn-danger"
    value="todo_all" > Borrar  </button>

      </div>

</form>

    </div>
  </div>
</div>
<!-- cierre modal de desactivar -->   </div >









<!--   <br>
<div class="border border-primary rounded"> 

<form method="POST">
 <div class="ml-1 form-row">


 <div class="input-group col-md-12 mt-4 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i>Respaldar todos los archivos cargados de <b>notas y/o cortes</b>.</i></span>  
                  </div>



 <input type="hidden" id="nombre_ciclo"  name="nombre_ciclo" value="<?php echo $row_datos_plantilla_per['periodo_escolar']; ?>">


<div class="input-group-append">
<button type="submit" name="respaldar_notas" class="btn btn-primary btn-block form-control form-control-sm " id='btnReset2'> 
            <i class="fas fa-file-upload"></i></button>  
</div> 
     

<div style="margin-left: 25px; padding-top: 7px;" >
<span class="alert-light"><b>  "Ayuda a conservar el historico de notas y cortes académicos; <span style="color:black;"> Ideal
realizarlo siempre al finalizar el año escolar.</span>"</b></span>
</div>



<div class="form-row ">  

          <div class="content2 col-md-12 text-center mt-1" style="display:none"> 

      <b class="text-danger"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar!!! </b>

          </div>

          </div>


          <script>

      $(document).ready(function() {
          setTimeout(function() {
              $(".content2").hide();
          }, 0);

          $('#btnReset2').click(function() {
              $(".content2").show();
              
              setTimeout(function() {
                  $(".content2").fadeOut(2500);
              }, 5500);
              

          });
      });
      </script>

</div>

 </div>

</form>   












 <div class="form-row">


 <div class="ml-2 input-group col-md-12 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-danger" id="basic-addon1"><i>Eliminar todas las <b>Notas y/o Cortes</b> de los estudiantes.</i></span>  
                  </div>



<div class="input-group-append">
<button type="button" data-toggle="modal" data-target="#alerta_extrema_dos" class="btn btn-danger btn-block form-control form-control-sm "> 
            <i class="fas fa-file-excel"></i></button>  
</div> 
     

<div style="margin-left: 25px; padding-top: 7px;" >
<span class="alert-light"><b>"Realizarlo solo si se ha realizado el respaldo correspondiente. (Respaldo en la carpeta 0000 Notas Respaldo)."</b></span>
</div>

      

</div>

 </div>  




<div class="modal fade" id="alerta_extrema_dos" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-danger " id="exampleModalLabel">
        <i class="far fa-bell-slash fa-lg"></i> &nbsp;Alerta - Cuidado - Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

     
      <div class="modal-body">

<div class="form-row">
<div class="input-group col-lg-12 mb-2">


<p style="font-size: 18px;"> <b>Nota:</b> Esta acción, eliminara de manera permanente, todas las <b>notas y/o cortes asociados con los estudiantes
registrados en el sistema</b>, que se encontraran cursando durante el año en curso.
</p>

</div>




</div>






</div> 
      <div class="modal-footer"> 

        <span style="color: red;"><b>Borrar todos los archivos? </b></span>&nbsp;&nbsp;

 <form method="post">



    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

    <button type="submit" name="borrar_todos_los_archivos" class="btn btn-danger"
    value="todo_all_all" > Borrar  </button>

      </div>

</form>

    </div>
  </div>
</div>









</div >  --> 

















</div>  <!-- cierre del div que oculta si no eres administrador -->

<span <?php if ( $_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Cajero' ){?>style="display:none"<?php } ?>  >   
<hr>
<h4 class="text-success">Rango de fechas y cobros especiales:</h4>
<h6 class="text-success">"Indicar cada mes en letras con su respectivo numero."</h6>

<?php

include("../conectar.php");

              $querymod2 = "SELECT * FROM periodo_de_pago where id_periodo_pago = 1 ";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());
              
              $row_datos_mod2 = mysqli_fetch_array($datos_mod2);
                         
               mysqli_close($enlace);    

$primer_pago = $row_datos_mod2['1er_pago'];
$segundo_pago = $row_datos_mod2['2do_pago'];
$tercero_pago = $row_datos_mod2['3er_pago'];

$especial_primero = $row_datos_mod2['especial_1'];

$cuarto_pago = $row_datos_mod2['4to_pago'];
$quinto_pago = $row_datos_mod2['5to_pago'];
$sexto_pago = $row_datos_mod2['6to_pago'];

$especial_segundo = $row_datos_mod2['especial_2'];



$septimo_pago = $row_datos_mod2['7mo_pago'];
$octavo_pago = $row_datos_mod2['8vo_pago'];
$noveno_pago = $row_datos_mod2['9no_pago'];

$especial_tercero = $row_datos_mod2['especial_3'];



$decimo_pago = $row_datos_mod2['10m_pago'];
$onceavo_pago = $row_datos_mod2['11o_pago'];
$doceavo_pago = $row_datos_mod2['12o_pago'];

$especial_cuarto = $row_datos_mod2['especial_4'];





$primer_pago_mes = $row_datos_mod2['1er_pago_mes'];
$segundo_pago_mes = $row_datos_mod2['2do_pago_mes'];
$tercero_pago_mes = $row_datos_mod2['3er_pago_mes'];
$cuarto_pago_mes = $row_datos_mod2['4to_pago_mes'];
$quinto_pago_mes = $row_datos_mod2['5to_pago_mes'];
$sexto_pago_mes = $row_datos_mod2['6to_pago_mes'];
$septimo_pago_mes = $row_datos_mod2['7mo_pago_mes'];
$octavo_pago_mes = $row_datos_mod2['8vo_pago_mes'];
$noveno_pago_mes = $row_datos_mod2['9no_pago_mes'];
$decimo_pago_mes = $row_datos_mod2['10m_pago_mes'];
$onceavo_pago_mes = $row_datos_mod2['11o_pago_mes'];
$doceavo_pago_mes = $row_datos_mod2['12o_pago_mes'];



?>






<form method="POST">
 <div class="form-row">


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>1°:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="primer_pago" name="primer_pago" value="<?php echo $primer_pago; ?>" required>
<input maxlength="2" type="text" class="form-control" id="primer_pago_mes" name="primer_pago_mes" value="<?php echo $primer_pago_mes; ?>"
title="Mes en números de dos digitos" required>                  
                  
</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>2°:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="segundo_pago" name="segundo_pago" value="<?php echo $segundo_pago; ?>" required>
<input maxlength="2" type="text" class="form-control" id="segundo_pago_mes" name="segundo_pago_mes" value="<?php echo $segundo_pago_mes; ?>"
title="Mes en números de dos digitos" required>                    
                  
</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>3°:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="tercer_pago" name="tercer_pago" value="<?php echo $tercero_pago; ?>" required>
<input maxlength="2" type="text" class="form-control" id="tercer_pago_mes" name="tercer_pago_mes" value="<?php echo $tercero_pago_mes; ?>"
title="Mes en números de dos digitos" required>                    
                  
</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>4°:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="cuarto_pago" name="cuarto_pago" value="<?php echo $cuarto_pago; ?>" required>
<input maxlength="2" type="text" class="form-control" id="cuarto_pago_mes" name="cuarto_pago_mes" value="<?php echo $cuarto_pago_mes; ?>"
title="Mes en números de dos digitos" required>                    
                  
</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>5°:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="quinto_pago" name="quinto_pago" value="<?php echo $quinto_pago; ?>" required>
<input maxlength="2" type="text" class="form-control" id="quinto_pago_mes" name="quinto_pago_mes" value="<?php echo $quinto_pago_mes; ?>"
title="Mes en números de dos digitos" required>                    
                  
</div>



 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>6°:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="sexto_pago" name="sexto_pago" value="<?php echo $sexto_pago; ?>" required>
<input maxlength="2" type="text" class="form-control" id="sexto_pago_mes" name="sexto_pago_mes" value="<?php echo $sexto_pago_mes; ?>"
title="Mes en números de dos digitos" required>                    
                  
</div>




<div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>7°:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="septimo_pago" name="septimo_pago" value="<?php echo $septimo_pago; ?>" required>
<input maxlength="2" type="text" class="form-control" id="septimo_pago_mes" name="septimo_pago_mes" value="<?php echo $septimo_pago_mes; ?>"
title="Mes en números de dos digitos" required>                    
                  
</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>8°:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="octavo_pago" name="octavo_pago" value="<?php echo $octavo_pago; ?>" required>
<input maxlength="2" type="text" class="form-control" id="octavo_pago_mes" name="octavo_pago_mes" value="<?php echo $octavo_pago_mes; ?>"
title="Mes en números de dos digitos" required>                                      
</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>9°:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="noveno_pago" name="noveno_pago" value="<?php echo $noveno_pago; ?>" required>
<input maxlength="2" type="text" class="form-control" id="noveno_pago_mes" name="noveno_pago_mes" value="<?php echo $noveno_pago_mes; ?>"
title="Mes en números de dos digitos" required>                    
                  
</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>10°:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="decimo_pago" name="decimo_pago" value="<?php echo $decimo_pago; ?>" required>
<input maxlength="2" type="text" class="form-control" id="decimo_pago_mes" name="decimo_pago_mes" value="<?php echo $decimo_pago_mes; ?>"
title="Mes en números de dos digitos" required>                    
                  
</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>11°:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="onceavo_pago" name="onceavo_pago" value="<?php echo $onceavo_pago; ?>" required>
<input maxlength="2" type="text" class="form-control" id="onceavo_pago_mes" name="onceavo_pago_mes" value="<?php echo $onceavo_pago_mes; ?>"
title="Mes en números de dos digitos" required>                    
                  
</div>



 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>12°:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="doceavo_pago" name="doceavo_pago" value="<?php echo $doceavo_pago; ?>" required>
<input maxlength="2" type="text" class="form-control" id="doceavo_pago_mes" name="doceavo_pago_mes" value="<?php echo $doceavo_pago_mes; ?>"
title="Mes en números de dos digitos" required>                    
                  
</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>1° Esp:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="especial_primero" name="especial_primero" value="<?php echo $especial_primero; ?>" required>                  
                  
</div>

 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>2° Esp:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="especial_segundo" name="especial_segundo" value="<?php echo $especial_segundo; ?>" required>                  
                  
</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>3° Esp:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="especial_tercero" name="especial_tercero" value="<?php echo $especial_tercero; ?>" required>                  
                  
</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>4° Esp:</b></i></span>  
                  </div>
<input maxlength="14" type="text" class="form-control" id="especial_cuarto" name="especial_cuarto" value="<?php echo $especial_cuarto; ?>" required>                  
                  
</div>



          <div class="input-group col-md-3 mt-2 mb-3">
                <div class="input-group-prepend">
    <span class="input-group-text alert-success" id="basic-addon1"><i>Mes Actual o de Corte:</i></span>  
                    </div>


<select class="form-control" id="selecc_mes_actual" name="selecc_mes_actual">
  

<option value="<?php echo $row_datos_mod2['mes_pagado']; ?>" selected>
  <?php echo $row_datos_mod2['mes_pagado']; ?></option>
<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>

<option value="1" >1 - <?php echo $primer_pago; ?></option>
<option value="2" >2 - <?php echo $segundo_pago; ?></option>
<option value="3" >3 - <?php echo $tercero_pago; ?></option>
<option value="4" >4 - <?php echo $cuarto_pago; ?></option>
<option value="5" >5 - <?php echo $quinto_pago; ?></option>
<option value="6" >6 - <?php echo $sexto_pago; ?></option>
<option value="7" >7 - <?php echo $septimo_pago; ?></option>
<option value="8" >8 - <?php echo $octavo_pago; ?></option>
<option value="9" >9 - <?php echo $noveno_pago; ?></option>
<option value="10" >10 - <?php echo $decimo_pago; ?></option>
<option value="11" >11 - <?php echo $onceavo_pago; ?></option>
<option value="12" >12 - <?php echo $doceavo_pago; ?></option>
                                
                              
                            </select>  

                    
          </div>





 <div class="col-md-1 mt-2 mb-3">

            <button type="submit" name="periodo_pagos" class="btn btn-outline-success btn-block"> <i class="far fa-save fa-lg"></i> </button>

</div>        


<span class="text-dark ml-2"><b>Nota:</b> El "Mes Actual o de Corte:" permite limitar hasta que fecha se desean ver los porcentajes de Mora; Dejarlo en 12 para ver todo el año escolar.</span>

</div>
</form>  </span>
<br>
<hr>  

 <div <?php if ( $_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario'){?>style="display:none"<?php } ?>  >    


<form method="POST">
 <div class="form-row">

  <input type="hidden" id="id_col"  name="id_col" value="<?php echo $id_primer_plantelH; ?>">

 <div class="input-group col-md-8 col-lg-4 mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-secondary" id="basic-addon1"><i><b>Periodo de pre-inscripción:</b></i></span>  
                    </div>


<?php

include("../conectar.php");

$queryp_status = "SELECT * FROM status where id_estado = '$pre_si_o_no_primer_plantelH' LIMIT 1";

$datos_statusH = mysqli_query($enlace, $queryp_status) or die(mysqli_error());

$row_datos_statusH = mysqli_fetch_array($datos_statusH );

mysqli_close($enlace);

?>      


<select class="form-control" id="selecc_si_o_no" name="selecc_si_o_no">
  

<option value="<?php echo $row_datos_statusH['id_estado']; ?>" selected><?php echo $row_datos_statusH['el_estado']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

$querySS = "SELECT * FROM status order by el_estado ";

$datos_plantillaSS = mysqli_query($enlace, $querySS) or die(mysqli_error());

 while ($row_datos_plantillaSS = mysqli_fetch_assoc($datos_plantillaSS))
                          {                            
?>
    <option value = "<?php echo $row_datos_plantillaSS['id_estado']; ?>"><?php echo $row_datos_plantillaSS['el_estado'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?> 

                              
                            </select>  

                    
 
          </div>



             <div class="col-md-2 col-lg-1 mb-3">

            <button type="submit" name="status_de_pre_inscripcion" class="btn btn-outline-secondary btn-block">
            <i class="far fa-save fa-lg"></i></button>

              </div> 


<div class="col-md-12  col-lg-6 mb-3" style="padding-top: 7px;" >
<span class="alert-light"><b>"Permite o no, imp. planillas de pre-ins. al representante. (Dejarla inactiva, al inicio de clases)"</b></span>
</div>



</div>
</form>












<form method="POST">
 <div class="form-row">

  <input type="hidden" id="id_col"  name="id_col" value="<?php echo $id_primer_plantelH; ?>">

 <div class="input-group col-md-8 col-lg-4 mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-secondary" id="basic-addon1"><i><b>Periodo de inscripciones:</b></i></span>  
                    </div>


<?php

include("../conectar.php");

$queryp_status = "SELECT * FROM status where id_estado = '$periodo_de_ins_si_o_no' LIMIT 1";

$datos_statusH = mysqli_query($enlace, $queryp_status) or die(mysqli_error());

$row_datos_statusH = mysqli_fetch_array($datos_statusH );

mysqli_close($enlace);

?>      


<select class="form-control" id="selecc_si_o_no" name="selecc_si_o_no">
  

<option value="<?php echo $row_datos_statusH['id_estado']; ?>" selected><?php echo $row_datos_statusH['el_estado']; ?></option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


                                <?php 

                          include("../conectar.php");

$querySS = "SELECT * FROM status order by el_estado ";

$datos_plantillaSS = mysqli_query($enlace, $querySS) or die(mysqli_error());

 while ($row_datos_plantillaSS = mysqli_fetch_assoc($datos_plantillaSS))
                          {                            
?>
    <option value = "<?php echo $row_datos_plantillaSS['id_estado']; ?>"><?php echo $row_datos_plantillaSS['el_estado'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              

                          ?> 

                              
                            </select>  

                    
 
          </div>



             <div class="col-md-2 col-lg-1 mb-3">

            <button type="submit" name="status_de_inscripcion" class="btn btn-outline-secondary btn-block">
            <i class="far fa-save fa-lg"></i></button>

              </div> 


<div class="col-md-12 col-lg-6 mb-3" style="padding-top: 7px;" >
<span class="alert-light"><b>"Permite o no, imprimir planillas de ins. al representante. (Dejarla activa, al inicio de clases)"</b></span>
</div>

<div class="col-md-12 mb-4" >
<span class="alert-light"><b>Nota:</b> Dejar desactivadas las dos últimas opciones, al finalizar el periodo de pre y de inscripción regular.</span>
</div>

</div>
</form>


<div class="border border-danger rounded"> 




        <form method="POST">
         <div class="ml-1 form-row">

         <div class="input-group col-md-12 col-lg-6 mt-4 mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text alert-info" id="basic-addon1"><b>Resetear</b>&nbsp; claves de acceso a grupos:</i></span>  
                          </div>


        <div class="input-group-append">
        <button type="submit" name="reset_general" class="btn btn-info btn-block form-control form-control-sm "> 
                    <i class="fas fa-sync fa-lg"></i></button>  
        </div> 
        </div>      


         <div class="input-group col-md-12 col-lg-6 mt-4 mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text alert-info" id="basic-addon1"><b>Resetear</b>&nbsp; claves de asignaturas:</i></span>  
                          </div>

        <div class="input-group-append">
        <button type="submit" name="reset_asign" class="btn btn-info btn-block form-control form-control-sm "> 
                    <i class="fas fa-sync fa-lg"></i></button>  
        </div> 
        </div> 



         <div class="input-group col-md-12 col-lg-6 mt-1 mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text alert-info" id="basic-addon1"><b>Resetear</b>&nbsp; claves de secciones:</i></span>  
                          </div>

        <div class="input-group-append">
        <button type="submit" name="reset_secc" class="btn btn-info btn-block form-control form-control-sm "> 
                    <i class="fas fa-sync fa-lg"></i></button>  
        </div> 
        </div> 


         <div class="input-group col-md-2 col-lg-1 mt-4 mb-3">
        <b class="float-right"><a href="tabs.php"><i class="fas fa-door-open fa-lg"></i></a></b>
        </div>

         </div>

        </form>







 <form method="POST">
 <div class="ml-1 form-row">

  <input type="hidden" id="id_col"  name="id_col" value="<?php echo $id_primer_plantelH; ?>">

 <div class="input-group col-md-8 col-lg-4 mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-danger" id="basic-addon1"><i><b>Permitir Acceso A Profesores:</b></i></span>  
                    </div>    

<select class="form-control" id="profesor_si_o_no" name="profesor_si_o_no">  

<option value="<?php echo $permiso_del_profesor; ?>" selected><?php echo $permiso_del_profesor; ?></option>

<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>                               
    <option value = "Si">Si</option>
    <option value = "No">No</option>                              
                            </select>                     
 
          </div>

             <div class="col-md-2 col-lg-1 mb-3">
            <button type="submit" name="status_permiso_profesor" class="btn btn-outline-danger btn-block">
            <i class="far fa-save fa-lg"></i></button>
              </div> 

<div class="col-md-12 col-lg-6 mb-3" style="padding-top: 7px;" >
<span class="warning-light"><b>"Permite o no a los profesores ingresar en el sistema."</b></span>
</div>

</div>
</form>











</div>








 <br>




</div>  <!-- oculta -->

<style type="text/css">

.punterodd{
  display: block;
  cursor: pointer;
}

</style>



<span <?php if ( $_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Cajero' ){?>style="display:none"<?php } ?>  >
 <div class="card border-primary" style=" padding: 10px;"  >

<h4 class="text-primary">Seleccione los meses, que han de estar pago ó cancelados para poder ver y/o descargar las Boletas de Lapsos:</h4>
<h6 class="text-primary">"Indicar cada mes en letras con su respectivo numero; La selección restringe observar a los representantes las notas desde la 4ta actividad o contenido en adelante; Podrá observar la 3era actividad o contenido sí pago o cancelo el mes previo al seleccionado."</h6>



<form method="POST">

 <div class="form-row">

          <div class="input-group col-md-6 col-lg-6 mb-3">
                <div class="input-group-prepend">
    <span class="input-group-text alert-primary" id="basic-addon1"><i>1er Lapso:</i></span>  
                    </div>

<select class="form-control" id="selecc_primer_lapso" name="selecc_primer_lapso">  


 <?php 

include("../conectar.php");

$query_1er = "SELECT * FROM select_pagos WHERE 1er_select = '1' limit 1";

$datos_1er = mysqli_query($enlace, $query_1er) or die(mysqli_error());

$row_datos_1er = mysqli_fetch_assoc($datos_1er);

                          mysqli_close($enlace);                                              

$aaa_mes_es =  $row_datos_1er['el_mes'];


                          ?> 

<option value="<?php echo $row_datos_1er['id_mes_select']; ?>" selected>


  <?php 


if ($row_datos_1er['id_mes_select'] == '1') {
  $aaa_es = $primer_pago;

}

if ($row_datos_1er['id_mes_select'] == '2') {
   $aaa_es = $segundo_pago;

}

if ($row_datos_1er['id_mes_select'] == '3') {
   $aaa_es = $tercero_pago;

}

if ($row_datos_1er['id_mes_select'] == '4') {
   $aaa_es = $cuarto_pago;

}

if ($row_datos_1er['id_mes_select'] == '5') {
   $aaa_es = $quinto_pago;

}

if ($row_datos_1er['id_mes_select'] == '6') {
   $aaa_es = $sexto_pago;

}

if ($row_datos_1er['id_mes_select'] == '7') {
   $aaa_es = $septimo_pago;

}

if ($row_datos_1er['id_mes_select'] == '8') {
   $aaa_es = $octavo_pago;

}

if ($row_datos_1er['id_mes_select'] == '9') {
   $aaa_es = $noveno_pago;

}

if ($row_datos_1er['id_mes_select'] == '10') {
   $aaa_es = $decimo_pago;

}

if ($row_datos_1er['id_mes_select'] == '11') {
   $aaa_es = $onceavo_pago;

}

if ($row_datos_1er['id_mes_select'] == '12') {
   $aaa_es = $doceavo_pago;

}


    echo  $aaa_es; ?>

      </option>


<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


    <option value = "1er_pago"><?php echo $primer_pago; ?></option>
    <option value = "2do_pago"><?php echo $segundo_pago; ?></option>
    <option value = "3er_pago"><?php echo $tercero_pago; ?></option>
    <option value = "4to_pago"><?php echo $cuarto_pago; ?></option>

    <option value = "5to_pago"><?php echo $quinto_pago; ?></option>
    <option value = "6to_pago"><?php echo $sexto_pago; ?></option>
    <option value = "7mo_pago"><?php echo $septimo_pago; ?></option>
    <option value = "8vo_pago"><?php echo $octavo_pago; ?></option>

    <option value = "9no_pago"><?php echo $noveno_pago; ?></option>
    <option value = "10m_pago"><?php echo $decimo_pago; ?></option>
    <option value = "11o_pago"><?php echo $onceavo_pago; ?></option>
    <option value = "12o_pago"><?php echo $doceavo_pago; ?></option>
                        
                            </select>   
                            <select class="form-control" id="el_mes_uno" name="el_mes_uno" title="Mes en números de dos digitos" >  
<option value="<?php echo $row_datos_1er['el_mes']; ?>" selected><?php echo $row_datos_1er['el_mes']; ?></option>
<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "01">01</option>
    <option value = "02">02</option>
    <option value = "03">03</option>
    <option value = "04">04</option>

    <option value = "05">05</option>
    <option value = "06">06</option>
    <option value = "07">07</option>
    <option value = "08">08</option>

    <option value = "09">09</option>
    <option value = "10">10</option>
    <option value = "11">11</option>
    <option value = "12">12</option>                        
                            </select>    
          </div>   
            <div class="col-md-2 col-lg-1 mb-3">
<input type="hidden" name="old_primer_lapso" value="<?php echo $row_datos_1er['id_mes_select']; ?>">
            <button type="submit" name="pago_primero" class="btn btn-outline-primary btn-block">
            <i class="far fa-save fa-lg"></i></button>
              </div>  
        </div><!-- cierre row -->
</form>







<form method="POST">

 <div class="form-row">

          <div class="input-group col-md-6 col-lg-6 mb-3">
                <div class="input-group-prepend">
    <span class="input-group-text alert-primary" id="basic-addon1"><i>2do Lapso:</i></span>  
                    </div>

<select class="form-control" id="selecc_segundo_lapso" name="selecc_segundo_lapso">  


 <?php 

include("../conectar.php");

$query_2do = "SELECT * FROM select_pagos WHERE 2do_select = '1' limit 1";

$datos_2do = mysqli_query($enlace, $query_2do) or die(mysqli_error());

$row_datos_2do = mysqli_fetch_assoc($datos_2do);

                          mysqli_close($enlace); 

$bbb_mes_es =  $row_datos_2do['el_mes'];                                             

                          ?> 






<option value="<?php echo $row_datos_2do['id_mes_select']; ?>" selected>


  <?php 


if ($row_datos_2do['id_mes_select'] == '1') {
  $bbb_es = $primer_pago;
}

if ($row_datos_2do['id_mes_select'] == '2') {
   $bbb_es = $segundo_pago;
}

if ($row_datos_2do['id_mes_select'] == '3') {
   $bbb_es = $tercero_pago;
}

if ($row_datos_2do['id_mes_select'] == '4') {
   $bbb_es = $cuarto_pago;
}

if ($row_datos_2do['id_mes_select'] == '5') {
   $bbb_es = $quinto_pago;
}

if ($row_datos_2do['id_mes_select'] == '6') {
   $bbb_es = $sexto_pago;
}

if ($row_datos_2do['id_mes_select'] == '7') {
   $bbb_es = $septimo_pago;
}

if ($row_datos_2do['id_mes_select'] == '8') {
   $bbb_es = $octavo_pago;
}

if ($row_datos_2do['id_mes_select'] == '9') {
   $bbb_es = $noveno_pago;
}

if ($row_datos_2do['id_mes_select'] == '10') {
   $bbb_es = $decimo_pago;
}

if ($row_datos_2do['id_mes_select'] == '11') {
   $bbb_es = $onceavo_pago;
}

if ($row_datos_2do['id_mes_select'] == '12') {
   $bbb_es = $doceavo_pago;
}


    echo  $bbb_es; ?>  </option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


    <option value = "1er_pago"><?php echo $primer_pago; ?></option>
    <option value = "2do_pago"><?php echo $segundo_pago; ?></option>
    <option value = "3er_pago"><?php echo $tercero_pago; ?></option>
    <option value = "4to_pago"><?php echo $cuarto_pago; ?></option>

    <option value = "5to_pago"><?php echo $quinto_pago; ?></option>
    <option value = "6to_pago"><?php echo $sexto_pago; ?></option>
    <option value = "7mo_pago"><?php echo $septimo_pago; ?></option>
    <option value = "8vo_pago"><?php echo $octavo_pago; ?></option>

    <option value = "9no_pago"><?php echo $noveno_pago; ?></option>
    <option value = "10m_pago"><?php echo $decimo_pago; ?></option>
    <option value = "11o_pago"><?php echo $onceavo_pago; ?></option>
    <option value = "12o_pago"><?php echo $doceavo_pago; ?></option>
                        
                            </select>         


                            <select class="form-control" id="el_mes_dos" name="el_mes_dos" title="Mes en números de dos digitos" >  
<option value="<?php echo $row_datos_2do['el_mes']; ?>" selected><?php echo $row_datos_2do['el_mes']; ?></option>
<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "01">01</option>
    <option value = "02">02</option>
    <option value = "03">03</option>
    <option value = "04">04</option>

    <option value = "05">05</option>
    <option value = "06">06</option>
    <option value = "07">07</option>
    <option value = "08">08</option>

    <option value = "09">09</option>
    <option value = "10">10</option>
    <option value = "11">11</option>
    <option value = "12">12</option>                        
                            </select>  




          </div>   

            <div class="col-md-2 col-lg-1 mb-3">

<input type="hidden" name="old_segundo_lapso" value="<?php echo $row_datos_2do['id_mes_select']; ?>">


            <button type="submit" name="pago_segundo" class="btn btn-outline-primary btn-block">
            <i class="far fa-save fa-lg"></i></button>
              </div>  

        </div><!-- cierre row -->
</form>





<form method="POST">

 <div class="form-row">

          <div class="input-group col-md-12 col-lg-6 mb-3">
                <div class="input-group-prepend">
    <span class="input-group-text alert-primary" id="basic-addon1"><i>3er Lapso y Corte Final:</i></span>  
                    </div>

<select class="form-control" id="selecc_tercero_lapso" name="selecc_tercero_lapso">  


 <?php 

include("../conectar.php");

$query_3er = "SELECT * FROM select_pagos WHERE 3er_select = '1' limit 1";

$datos_3er = mysqli_query($enlace, $query_3er) or die(mysqli_error());

$row_datos_3er = mysqli_fetch_assoc($datos_3er);

                          mysqli_close($enlace);  

$ccc_mes_es =  $row_datos_3er['el_mes'];                                            

                          ?> 






<option value="<?php echo $row_datos_3er['id_mes_select']; ?>" selected>


  <?php 


if ($row_datos_3er['id_mes_select'] == '1') {
  $ccc_es = $primer_pago;
}

if ($row_datos_3er['id_mes_select'] == '2') {
   $ccc_es = $segundo_pago;
}

if ($row_datos_3er['id_mes_select'] == '3') {
   $ccc_es = $tercero_pago;
}

if ($row_datos_3er['id_mes_select'] == '4') {
   $ccc_es = $cuarto_pago;
}

if ($row_datos_3er['id_mes_select'] == '5') {
   $ccc_es = $quinto_pago;
}

if ($row_datos_3er['id_mes_select'] == '6') {
   $ccc_es = $sexto_pago;
}

if ($row_datos_3er['id_mes_select'] == '7') {
   $ccc_es = $septimo_pago;
}

if ($row_datos_3er['id_mes_select'] == '8') {
   $ccc_es = $octavo_pago;
}

if ($row_datos_3er['id_mes_select'] == '9') {
   $ccc_es = $noveno_pago;
}

if ($row_datos_3er['id_mes_select'] == '10') {
   $ccc_es = $decimo_pago;
}

if ($row_datos_3er['id_mes_select'] == '11') {
   $ccc_es = $onceavo_pago;
}

if ($row_datos_3er['id_mes_select'] == '12') {
   $ccc_es = $doceavo_pago;
}


    echo  $ccc_es; ?>  </option>

<option disabled></option>

                                <optgroup label="Cambiar a...">
                                <option disabled></option>


    <option value = "1er_pago"><?php echo $primer_pago; ?></option>
    <option value = "2do_pago"><?php echo $segundo_pago; ?></option>
    <option value = "3er_pago"><?php echo $tercero_pago; ?></option>
    <option value = "4to_pago"><?php echo $cuarto_pago; ?></option>

    <option value = "5to_pago"><?php echo $quinto_pago; ?></option>
    <option value = "6to_pago"><?php echo $sexto_pago; ?></option>
    <option value = "7mo_pago"><?php echo $septimo_pago; ?></option>
    <option value = "8vo_pago"><?php echo $octavo_pago; ?></option>

    <option value = "9no_pago"><?php echo $noveno_pago; ?></option>
    <option value = "10m_pago"><?php echo $decimo_pago; ?></option>
    <option value = "11o_pago"><?php echo $onceavo_pago; ?></option>
    <option value = "12o_pago"><?php echo $doceavo_pago; ?></option>
                        
                            </select>     


 <select class="form-control" id="el_mes_tres" name="el_mes_tres" title="Mes en números de dos digitos" >  
<option value="<?php echo $row_datos_3er['el_mes']; ?>" selected><?php echo $row_datos_3er['el_mes']; ?></option>
<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "01">01</option>
    <option value = "02">02</option>
    <option value = "03">03</option>
    <option value = "04">04</option>

    <option value = "05">05</option>
    <option value = "06">06</option>
    <option value = "07">07</option>
    <option value = "08">08</option>

    <option value = "09">09</option>
    <option value = "10">10</option>
    <option value = "11">11</option>
    <option value = "12">12</option>                        
                            </select>  




          </div>   

            <div class="col-md-2 col-lg-1 mb-3">

<input type="hidden" name="old_tercero_lapso" value="<?php echo $row_datos_3er['id_mes_select']; ?>">


            <button type="submit" name="pago_tercero" class="btn btn-outline-primary btn-block">
            <i class="far fa-save fa-lg"></i></button>
              </div>  

        </div><!-- cierre row -->
</form>











</div><!-- cierre del borde -->     </span >













































<script type="text/javascript">


$(document).ready(function() {  
      
         
          setTimeout(function() {
              $(".content1").hide();
          }, 0);                     // este numero dice que tan rapido lo esconde....


          setTimeout(function() {
              $(".content2").hide();
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

 <!--   -- >






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

 <!--   -- >






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

 <!--   -- >




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

 <!--   -- >




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

 <!--   -- >






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

 <!--   -- >


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

 <!--   -- >




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

 <!--   -- >


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

 <!--   -- >




















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




 <div <?php if ( $_SESSION ['cargo'] != 'Administrador' ){?>style="display:none"<?php } ?>  > 
<br>

<div class="form-row">

 <div class="card border-primary col-md-6" style=" padding: 10px;">

<h5 class="text-primary"><i class="fas fa-palette fa-lg"></i> Esquema básico de color en portadas.</h5>



<form method="POST">
 <div class="form-row">


 <div class="col-md-6 mt-2 mb-3">
                  

 <label for="cabcolor"><i><b>Cabecera Principal:</b></i></label>

      <input  type="color" 
               value="<?php echo $cabecera_zztema; ?>" 
               id="color_cabecera" name="color_cabecera"> 
 


 <!--  <input maxlength="7" type="text" class="form-control" id="color_cabecera" name="color_cabecera" value="<?php echo $cabecera_zztema; ?>">    -->                
                  
</div>


<input type="hidden" id="id_color_cabecera"  name="id_color_cabecera" value="<?php echo $id_primer_zztema; ?>">

 <div class="col-md-2 mt-2 mb-3">

            <button type="submit" name="color_de_cabecera" class="btn btn-outline-info btn-sm btn-block">
            <i class="far fa-save fa-lg"></i></button>

</div>  

<div class="col-md-3 mt-2 mb-3" style="background:<?php echo $cabecera_zztema;?>; border-radius: 10px;">
</div>








</div>
</form>




<form method="POST">
 <div class="form-row">


 <div class="col-md-6 mt-2 mb-3">

 <label for="cabcolor"><i><b>Cabecera Regular:&nbsp;&nbsp;</b></i></label>

      <input  type="color" 
               value="<?php echo $subtitulo_zztema; ?>" 
               id="color_sub" name="color_sub"> 




    <!--              <input  maxlength="7" type="text" class="form-control" id="color_sub" name="color_sub" value="<?php echo $subtitulo_zztema; ?>">     -->             
                  
</div>


<input type="hidden" id="id_color_sub"  name="id_color_sub" value="<?php echo $id_primer_zztema; ?>">

 <div class="col-md-2 mt-2 mb-3">

            <button type="submit" name="color_de_sub" class="btn btn-outline-info btn-sm btn-block">
            <i class="far fa-save fa-lg"></i></button>

</div>        


<div class="col-md-3 mt-2 mb-3" style="background:<?php echo $subtitulo_zztema;?>; border-radius: 10px;">
</div>



</div>
</form>





<form method="POST">
 <div class="form-row">


 <div class="col-md-6 mt-2 mb-3">
      

 <label for="cabcolor"><i><b>Pie de Página:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></i></label>

      <input  type="color" 
               value="<?php echo $pie_zztema; ?>" 
               id="color_pie" name="color_pie"> 




<!-- <input  maxlength="7" type="text" class="form-control" id="color_pie" name="color_pie" value="<?php echo $pie_zztema; ?>">  -->                
                  
</div>


<input type="hidden" id="id_color_pie"  name="id_color_pie" value="<?php echo $id_primer_zztema; ?>">

 <div class="col-md-2 mt-2 mb-3">

            <button type="submit" name="color_de_pie" class="btn btn-outline-info btn-sm btn-block">
            <i class="far fa-save fa-lg"></i></button>

</div>        


<div class="col-md-3 mt-2 mb-3" style="background:<?php echo $pie_zztema;?>; border-radius: 10px;">
</div>





</div>
</form>



<div class="form-row">

<div style="margin-left: 7px; padding-top: 7px;" >
<span class="alert-light"><b> <span style="color:black;"> Nota:</span> Puede ubicar un color más preciso, usando el selector de color hexadecimal.</b></span>
</div>

</div>




</div><!-- cierre del borde -->






 <div class="col-md-3" >

<h5 class="text-info" style="margin-left: 7px;"><i class="far fa-images fa-lg"></i> Tramado - Imagen del fondo.</h5>

<div style="padding: 10px;">


<script type="text/javascript">
	
$(document).ready(function(){
    $("#imageupzbb").attr("disabled", "disabled");
    $("#imageback").change(function(){
        $("#imageupzbb").removeAttr("disabled");
    });
});

	
</script>




 <form ame="myFormzz" action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="imageback" id="imageback"  accept=".png" /><br><br>
         <input type="submit" name="imageupzbb" id="imageupzbb" value="Cargar" disabled/>
</form>


<div style="margin-left: 7px; padding-top: 7px;" >
<span class="alert-light">El cambio de fondo puede tardar en hacerse visible.</span>
</div>



</div>

</div>



 <div class="col-md-3" >

 
  <img src="../z_imagenes/back.png" class="img-thumbnail"   alt="..." width="180" height="180">


 </div>






<br>

 <div class="card border-danger" style="margin-top: 20px; padding: 10px;">

<h5 class="text-danger"><i class="fas fa-envelope-open-text fa-lg"></i> Datos del correo, para enviar los email del sistema.</h5>



<?php

include("../conectar.php");

              $querymodEMAEL = "SELECT * FROM z_email where id_email = 1 ";

              $datos_modEMAEL = mysqli_query($enlace, $querymodEMAEL) or die(mysqli_error());
              
              $row_datos_modEMAEL = mysqli_fetch_array($datos_modEMAEL);
                         
            

$el_correo = $row_datos_modEMAEL['email_sis'];
$el_pass = $row_datos_modEMAEL['pass_sis'];


$coreo_resp = $row_datos_modEMAEL['resp_sis'];


$el_host = $row_datos_modEMAEL['host_sis'];
$el_port = $row_datos_modEMAEL['port_sis'];
$el_secure = $row_datos_modEMAEL['secure_sis'];

   mysqli_close($enlace);    


?>





<form method="POST">


 <div class="form-row">


 <div class="input-group col-md-4 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-danger" id="basic-addon1"><i><b>Email:</b></i></span>  
                  </div>
<input maxlength="50" type="email" class="form-control" id="correo_del_sis" name="correo_del_sis" value="<?php echo $el_correo; ?>" required>                  
                  
</div>


 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-danger" id="basic-addon1"><i><b>Pass:</b></i></span>  
                  </div>
<input maxlength="30" type="text" class="form-control " id="pass_del_sist" name="pass_del_sist" value="<?php echo $el_pass; ?>" required>                  
                  
</div>






 <div class="input-group col-md-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-danger" id="basic-addon1"><i><b>Email Respuesta:</b></i></span>  
                  </div>
<input maxlength="50" type="email" class="form-control" id="correo_resp" name="correo_resp" value="<?php echo $coreo_resp; ?>" required>                  
                  
</div>


 


</div>


 <div class="form-row">



 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-danger" id="basic-addon1"><i><b>SMTP Host:</b></i></span>  
                  </div>
<input maxlength="50" type="text" class="form-control" id="host_del_sis" name="host_del_sis" value="<?php echo $el_host; ?>" required>                  
                  
</div>



 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-danger" id="basic-addon1"><i><b>Secure ssl / tls ?</b></i></span>  
                  </div>
<input maxlength="5" type="text" class="form-control" id="secure_resp" name="secure_resp" value="<?php echo $el_secure; ?>" required>                  
                  
</div>



 <div class="input-group col-md-4 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-danger" id="basic-addon1"><i><b>Port (ssl ó tls):</b></i></span>  
                  </div>
<input maxlength="6" type="text" class="form-control " id="port_del_sist" name="port_del_sist" value="<?php echo $el_port; ?>" required>                  
                  
</div>











 <div class="col-md-2 mt-2 mb-3">

            <button type="submit" name="web_mail_sis" class="btn btn-outline-dark btn-block"> Guardar &nbsp;
            <i class="far fa-save fa-lg"></i></button>

    </div>  


</div>  







<h6 class="text-dark"><b>Nota:</b> Para el correcto funcionamiento es necesario que el cliente web, permita el acceso
desde programas externos menos seguros, el correo para esta función preferiblemente debe ser uno que no se use para nada
importante, de preferencia solo para él envió de email del sistema;</b> El email de Respuesta es el correo
al cual los representantes indicaran sus inquietudes.</h6>



</form>





</div><!-- cierre del borde -->
















<!--

<div class="card border-dark col-md-12" style="margin-top: 50px; padding: 10px;">

<h5 class="text-dark"><i class="far fa-comments fa-lg"></i> Etiqueta.....</h5>






</div>   -->












</div>

    </div>  <!-- cierre card -->
              







                    <span  <?php if ( $_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario' ){?>style="display:none"<?php } ?>  >

    
 <div class="card border-info col-md-12" style="margin-top: 20px; padding: 10px;">


<?php

include("../conectar.php");

              $querymodcabecc = "SELECT * FROM z_cabecera where id_cabecera = 1 ";

              $datos_modcabecc = mysqli_query($enlace, $querymodcabecc) or die(mysqli_error());
              
              $row_datos_modcabecc = mysqli_fetch_array($datos_modcabecc);

$cab_principal = $row_datos_modcabecc['cab_principal'];
$cab_secundaria = $row_datos_modcabecc['cab_secund'];

$cab_div1 = $row_datos_modcabecc['cab_div1'];
$cab_div2 = $row_datos_modcabecc['cab_div2'];

   mysqli_close($enlace);    


?>



<h5 class="text-danger"><i class="fas fa-hat-cowboy fa-lg"></i> <b>Restricciones:</b></h5>


<form method="POST">
 <div class="form-row ">



 <div class="input-group col-md-10  col-md-9 mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-danger" id="basic-addon1"><i><b>Permitir ver y/o imprimir la boleta digital a los representantes?:</b></i></span>  
                    </div> 

<select class="form-control" id="boleta_si_o_no" name="boleta_si_o_no">  
<option value="<?php echo $row_datos_modcabecc['ver_boleta']; ?>" selected><?php echo $row_datos_modcabecc['ver_boleta']; ?></option>
<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Si">Si</option>
    <option value = "No">No</option>                              
                            </select>  
          </div>

             <div class=" col-md-2 col-md-1 mb-3">
            <button type="submit" name="status_de_boleta" class="btn btn-outline-danger btn-block">
            <i class="far fa-save fa-lg"></i></button>
              </div> 
</div>
</form>






 <form method="POST">
 <div class="form-row">

  <input type="hidden" id="id_col"  name="id_col" value="<?php echo $id_primer_plantelH; ?>">

 <div class="input-group col-md-12  col-lg-8 mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-danger" id="basic-addon1"><i><b>Permitir ver notas a los representantes:</b></i></span>  
                    </div>    

<select class="form-control" id="notas_si_o_no" name="notas_si_o_no">  

<option value="<?php echo $permiso_de_notas; ?>" selected><?php echo $permiso_de_notas; ?></option>

<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>                               
    <option value = "Si">Si - Los representantes pueden ver las notas.</option>
    <option value = "No">No - Los representantes no pueden ver las notas.</option>                              
                            </select>                     
 
          </div>

             <div class=" col-md-2 col-lg-1 mb-3">
            <button type="submit" name="status_permiso_notas" class="btn btn-outline-danger btn-block">
            <i class="far fa-save fa-lg"></i></button>
              </div> 



</div>
</form>  



<form method="POST">
 <div class="form-row mt-1 ">



 <div class="input-group col-md-11  col-lg-11 mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-danger" id="basic-addon1"><i><b>Los representantes deben estar al día para ver las notas y las boleta?:</b></i></span>  
                    </div> 

<select class="form-control" id="comp_boleta_si_o_no" name="comp_boleta_si_o_no">  
<option value="<?php echo $row_datos_modcabecc['comprobar_pago']; ?>" selected><?php echo $row_datos_modcabecc['comprobar_pago']; ?></option>
<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Si">Si (Necesario para instituciones y/o unidades educativas en las que se cobra por el servicio brindado.)</option>
    <option value = "No">No (Ideal para los planteles en los cuales no se cobra por el servicio académico.)</option>                              
                            </select>  
          </div>

             <div class=" col-md-1 col-lg-1 mb-3">
            <button type="submit" name="status_comp_de_boleta" class="btn btn-outline-danger btn-block">
            <i class="far fa-save fa-lg"></i></button>
              </div> 
</div>
</form>






<form method="POST">
 <div class="form-row mt-1 ">



 <div class="input-group col-md-10  col-lg-11 mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-danger" id="basic-addon1"><i><b>(Activar modo consulta)</b> Los representantes, solo podrán ver las notas y boletas?:</i></span>  
                    </div> 

<select class="form-control" id="vista_restringida" name="vista_restringida">  
<option value="<?php echo $row_datos_modcabecc['modo_consulta']; ?>" selected><?php echo $row_datos_modcabecc['modo_consulta']; ?></option>
<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Si">Si (Los representantes no podrán modificar y/o actualizar datos, solo podrán realizar consultas, pagos, notas, etc...)</option>
    <option value = "No">No (Acceso usual al sistema desde el lado del representante.)</option>                              
                            </select>  
          </div>

             <div class=" col-md-2 col-lg-1 mb-3">
            <button type="submit" name="status_vista_restringida" class="btn btn-outline-danger btn-block">
            <i class="far fa-save fa-lg"></i></button>
              </div> 
</div>
</form>























<form method="POST">
 <div class="form-row mt-1 ">

  <input type="hidden" id="id_col"  name="id_col" value="<?php echo $id_primer_plantelH; ?>">

 <div class="input-group  col-md-10 col-lg-8 mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-info" id="basic-addon1"><i><b>Tamaño de la planilla de Pre y/o Inscripción:</b></i></span>  
                    </div> 

<select class="form-control" id="comp_size_planilla" name="comp_size_planilla">  
<option value="<?php echo $size_de_la_planilla; ?>" selected><?php echo $size_de_la_planilla; ?></option>
<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "Full">Full</option>
    <option value = "Corta">Corta</option>                              
                            </select>  
          </div>

             <div class=" col-md-2 col-lg-1 mb-3">
            <button type="submit" name="status_size_planilla" class="btn btn-outline-info btn-block">
            <i class="far fa-save fa-lg"></i></button>
              </div> 
</div>
</form>


</div><!-- cierre del borde --> </span>     





 <div <?php if ( $_SESSION ['cargo'] != 'Administrador' ){?>style="display:none"<?php } ?>  >  

<form method="POST">
 <div class="form-row mt-3 ">



 <div class="input-group col-md-11  col-lg-11 mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text alert-warning" id="basic-addon1"><i><b>(Activar Mantenimiento)</b> Restringir el acceso al sistema iMagic?:</i></span>  
                    </div> 

<select class="form-control" id="vista_mantenimiento" name="vista_mantenimiento">  
<option value="<?php echo $row_datos_modcabecc['en_mantenimiento']; ?>" selected><?php echo $row_datos_modcabecc['en_mantenimiento']; ?></option>
<option disabled></option>
                                <optgroup label="Cambiar a...">
                                <option disabled></option>
    <option value = "No">No (El acceso al sistema esta activo.)</option>
    <option value = "Si">Si (Solo los administradores pueden acceder.)</option>
                            
                            </select>  
          </div>

             <div class=" col-md-2 col-lg-1 mb-3">
            <button type="submit" name="status_mantenimiento" class="btn btn-outline-warning btn-block">
            <i class="far fa-save fa-lg"></i></button>
              </div> 
</div>
</form>

</div>





                           

  </div>   <!-- cierre container fluid -->
</div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
